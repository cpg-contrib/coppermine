<?php
/**
 * udb_base.inc.php
 *
 * Base class for authentication.
 *
 * @package cpgNG
 * @author Abbas <abbas@sanisoft.com>
 * @version $Id$
 */
if (!defined('IN_COPPERMINE')) die('Not in Coppermine...');

class core_udb {

        var $config;
        var $cpgDb;
        var $albumSet;
        var $forbiddenSet;
        var $forbiddenSetData = array();
        var $userData = array();
        var $user = array();
        var $favPics = array();

        function core_udb()
        {
          $this->cpgDb = cpgDB::getInstance();
          $this->config = cpgConfig::getInstance();
        }

        function isDefined($constant)
        {
          return constant($constant);
        }

        function userGetProfile()
        {
          if (isset($_COOKIE[$this->config->conf['cookie_name'].'_data'])) {
            $this->user = @unserialize(@base64_decode($_COOKIE[$this->config->conf['cookie_name'].'_data']));
          }

          if (!isset($this->user['ID']) || strlen($this->user['ID']) != 32) {
            list($usec, $sec) = explode(' ', microtime());
            $seed = (float) $sec + ((float) $usec * 100000);
            srand($seed);
            $this->user = array('ID' => md5(uniqid(rand(),1)));
          } else {
            $this->user['ID'] = addslashes($this->user['ID']);
          }

          if (!isset($this->user['am'])) {
            $this->user['am'] = 1;
          }
        }

        function userSaveProfile()
        {
                $data = base64_encode(serialize($this->user));
                setcookie($this->config->conf['cookie_name'].'_data', $data, time()+86400*30, $this->config->conf['cookie_path']);
        }

        function getUserFavPics()
        {
          // See if the fav cookie is set else set it
          if (isset($_COOKIE[$this->config->conf['cookie_name'] . '_fav'])) {
              $this->favPics = @unserialize(@base64_decode($_COOKIE[$this->config->conf['cookie_name'] . '_fav']));
          }

          // If the person is logged in get favs from DB those in the DB have precedence
          if ($this->isDefined('USER_ID') > 0) {
                  $sql = "SELECT user_favpics FROM {$this->config->conf['TABLE_FAVPICS']} WHERE user_id = ".$this->isDefined('USER_ID');
                  $this->cpgDb->query($sql);
                  $row = $this->cpgDb->fetchRow();
                  if (!empty($row['user_favpics'])){
                          $this->favPics = @unserialize(@base64_decode($row['user_favpics']));
                  }
          }
        }

        function cpgGetUserData($pri_group, $groups, $default_group_id = 3)
        {

                //Parameters :
                //                $pri_group (scalar) :         Group ID number of the user's 'main' group. This is the group that will be
                //                                                                                        the user's profile display. ($USER_DATA['group_id'])
                //
                //                $groups (array) :                        List of group ids of all the groups that the user is a member of. IF this list
                //                                                                                        does not include the $pri_group, it will be added.
                //
                //                $default_group_id (scalar) :         The group used as a fall-back if no valid group ids are specified.
                //                                                                                                        If this group also does not exist then CPG will abort with a critical
                //                                                                                                        error.
                //
                // Returns an array containing most of the data to put into in $USER_DATA.

                foreach ($groups as $key => $val)
                        if (!is_numeric($val))
                                unset ($groups[$key]);
                if (!in_array($pri_group, $groups)) array_push($groups, $pri_group);

                $query = "SELECT MAX(group_quota) as disk_max, MIN(group_quota) as disk_min, " .
                                "MAX(can_rate_pictures) as can_rate_pictures, MAX(can_send_ecards) as can_send_ecards, " .
                                "MAX(upload_form_config) as ufc_max, MIN(upload_form_config) as ufc_min, " .
                                "MAX(custom_user_upload) as custom_user_upload, MAX(num_file_upload) as num_file_upload, " .
                                "MAX(num_URI_upload) as num_URI_upload, " .
                                "MAX(can_post_comments) as can_post_comments, MAX(can_upload_pictures) as can_upload_pictures, " .
                                "MAX(can_create_albums) as can_create_albums, " .
                                "MAX(has_admin_access) as has_admin_access, " .
                                "MIN(pub_upl_need_approval) as pub_upl_need_approval, MIN( priv_upl_need_approval) as  priv_upl_need_approval ".
                                "FROM {$this->config->conf['TABLE_USERGROUPS']} WHERE group_id in (" .  implode(",", $groups). ")";

                $this->cpgDb->query($query);

                if ($this->cpgDb->nf()) {
                        $this->userData = $this->cpgDb->fetchRow();
                        $sql = "SELECT group_name FROM  {$this->config->conf['TABLE_USERGROUPS']} WHERE group_id= " . $pri_group;
                        $this->cpgDb->query($sql);
                        $temp_arr = $this->cpgDb->fetchRow();
                        $this->userData["group_name"] = $temp_arr["group_name"];
                } else {
                        $sql = "SELECT * FROM {$this->config->conf['TABLE_USERGROUPS']} WHERE group_id = $default_group_id";
                      if (!$this->cpgDb->nf()) die('<b>Coppermine critical error</b>:<br />The group table does not contain the Anonymous group !');
                              $this->userData = $this->cpgDb->fetchRow();
                        }

                if ( $this->userData['ufc_max'] == $this->userData['ufc_min'] ) {
                        $this->userData["upload_form_config"] = $this->userData['ufc_min'];
                } elseif ($this->userData['ufc_min'] == 0) {
                        $this->userData["upload_form_config"] = $this->userData['ufc_max'];
                } elseif ((($this->userData['ufc_max'] == 2) or ($this->userData['ufc_max'] == 3)) and ($this->userData['ufc_min'] == 1)) {
                        $this->userData["upload_form_config"] = 3;
                } elseif (($this->userData['ufc_max'] == 3) and ($this->userData['ufc_min'] == 2)) {
                        $this->userData["upload_form_config"] = 3;
                } else {
                        $this->userData["upload_form_config"] = 0;
                }
                $this->userData["group_quota"] = ($this->userData["disk_min"])?$this->userData["disk_max"]:0;

                $this->userData['can_see_all_albums'] = $this->userData['has_admin_access'];

                $this->userData["group_id"] = $pri_group;
                $this->userData['groups'] = $groups;

                if (get_magic_quotes_gpc() == 0)
                                $this->userData['group_name'] = mysql_escape_string($this->userData['group_name']);

                return($this->userData);
        }

  function connect($id = '')
  {
    // Define wheter we can join tables or not in SQL queries (same host & same db or user)
    define('UDB_CAN_JOIN_TABLES', ($this->db['host'] == $this->config->dbserver && ($this->db['name'] == $this->config->dbname || $this->db['user'] == $this->config->dbuser)));

    if ($id){
      $this->link_id = $id;

    } else {
      // Connect to udb database if necessary
      if (!UDB_CAN_JOIN_TABLES) {
        $this->link_id = mysql_connect($this->db['host'], $this->db['user'], $this->db['password']);
        if (!$this->link_id) die("<b>Coppermine critical error</b>:<br />Unable to connect to UDB database !<br /><br />MySQL said: <b>" . mysql_error() . "</b>");
        mysql_select_db ($this->db['name'], $this->link_id);
      } else {
        $this->link_id = 0;
      }
    }
  }

  function authenticate()
  {
    if (!($auth = $this->cookie_extraction()) && !($auth = $this->session_extraction())) {
      $this->load_guest_data();
    } else {
      list ($id, $cookie_pass) = $auth;
      $f = $this->field;

      if (isset($this->usergroupstable)){
        $sql = "SELECT u.{$f['user_id']} AS id, u.{$f['username']} AS username, u.{$f['password']} AS password, ug.{$f['usertbl_group_id']} AS group_id ".
             "FROM {$this->usertable} AS u, {$this->usergroupstable} AS ug ".
             "WHERE u.{$f['user_id']}=ug.{$f['user_id']} AND u.{$f['user_id']}='$id'";
      } else {
        $sql = "SELECT u.{$f['user_id']} AS id, u.{$f['username']} AS username, u.{$f['password']} AS password, u.{$f['usertbl_group_id']}+100 AS group_id ".
             "FROM {$this->usertable} AS u INNER JOIN {$this->groupstable} AS g ON u.{$f['usertbl_group_id']}=g.{$f['grouptbl_group_id']} ".
             "WHERE u.{$f['user_id']}='$id'";
      }

      //$result = cpg_db_query($sql, $this->link_id);
      $this->cpgDb->query($sql, $this->link_id);

      if ($this->cpgDb->nf()){
        $row = $this->cpgDb->fetchRow();

        $db_pass = $this->udb_hash_db($row['password']);
        if ($db_pass === $cookie_pass) {
          $this->load_user_data($row);
        } else {
          $this->load_guest_data();
        }
      } else {
        $this->load_guest_data();
      }
    }

    $user_group_set = '(' . implode(',', $this->userData['groups']) . ')';

        $this->userData = array_merge($this->userData, $this->cpgGetUserData($this->userData['groups'][0], $this->userData['groups'], $this->guestgroup));

    if ($this->use_post_based_groups){
      $this->userData['has_admin_access'] = (in_array($this->userData['groups'][0] - 100,$this->admingroups)) ? 1 : 0;
    } else {
      $this->userData['has_admin_access'] = ($this->userData['groups'][0] == 1) ? 1 : 0;
    }

    $this->userData['can_see_all_albums'] = $this->userData['has_admin_access'];

    // Record User's IP address
    $raw_ip = stripslashes($_SERVER['REMOTE_ADDR']);

    if (isset($_SERVER['HTTP_CLIENT_IP'])) {
        $hdr_ip = stripslashes($_SERVER['HTTP_CLIENT_IP']);
    } else {
        if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $hdr_ip = stripslashes($_SERVER['HTTP_X_FORWARDED_FOR']);
        } else {
            $hdr_ip = $raw_ip;
        }
    }

    // For error checking
    //$this->config->conf['TABLE_USERS'] = '**ERROR**';

    define('USER_ID', $this->userData['user_id']);
        define('USER_NAME', $this->userData['user_name']);
        define('USER_GROUP', $this->userData['group_name']);
        define('USER_GROUP_SET', $user_group_set);
        define('USER_IS_ADMIN', $this->userData['has_admin_access']);
        define('USER_CAN_SEND_ECARDS', (int)$this->userData['can_send_ecards']);
        define('USER_CAN_RATE_PICTURES', (int)$this->userData['can_rate_pictures']);
        define('USER_CAN_POST_COMMENTS', (int)$this->userData['can_post_comments']);
        define('USER_CAN_UPLOAD_PICTURES', (int)$this->userData['can_upload_pictures']);
        define('USER_CAN_CREATE_ALBUMS', (int)$this->userData['can_create_albums']);
        define('USER_UPLOAD_FORM', (int)$this->userData['upload_form_config']);
        define('CUSTOMIZE_UPLOAD_FORM', (int)$this->userData['custom_user_upload']);
        define('NUM_FILE_BOXES', (int)$this->userData['num_file_upload']);
        define('NUM_URI_BOXES', (int)$this->userData['num_URI_upload']);
        define('RAW_IP', $raw_ip);
        define('HDR_IP', $hdr_ip);

    $this->session_update();
  }

        function getPrivateAlbumSet($aid_str="")
        {
                if (GALLERY_ADMIN_MODE) return;

                if ($this->userData['can_see_all_albums']) return;

                        //Stuff for Album level passwords
                if (isset($_COOKIE[$this->config->conf['cookie_name']."_albpw"]) && empty($aid_str)) {
                  $alb_pw = unserialize($_COOKIE[$this->config->conf['cookie_name']."_albpw"]);
                  $aid_str = implode(",",array_keys($alb_pw));
                  $sql = "SELECT aid, MD5(alb_password) as md5_password FROM ".$this->config->conf['TABLE_ALBUMS']." WHERE aid IN ($aid_str)";
                  $this->cpgDb->query($sql);
                  $albpw_db = array();
                  if ($this->cpgDb->nf()) {
                    while ($data = $this->cpgDb->fetchRow()) {
                      $albpw_db[$data['aid']] = $data['md5_password'];
                    }
                  }
                  $valid = array_intersect($albpw_db, $alb_pw);
                  if (is_array($valid)) {
                    $aid_str = implode(",",array_keys($valid));
                  } else {
                    $aid_str = "";
                  }
                }

                $sql = "SELECT aid FROM {$this->config->conf['TABLE_ALBUMS']} WHERE visibility != '0' AND visibility !='".(FIRST_USER_CAT + $this->isDefined("USER_ID"))."' AND visibility NOT IN ".USER_GROUP_SET;
                if (!empty($aid_str)) {
                  $sql .= " AND aid NOT IN ($aid_str)";
                }

                $this->cpgDb->query($sql);

                $this->forbiddenSetData = array();

                if ($this->cpgDb->nf()) {
                  while($album = $this->cpgDb->fetchRow()){
                    $this->forbiddenSetData[] = $album['aid'];
                  } // while
                }
        }

  function load_guest_data()
  {
    $this->userData['user_id'] = 0;
    $this->userData['user_name'] = 'Guest';
    $this->userData['groups'][0] = $this->use_post_based_groups ? ($this->guestgroup) : 3;
    $this->userData['group_quota'] = 1;
    $this->userData['can_rate_pictures'] = 0;
    $this->userData['can_send_ecards'] = 0;
    $this->userData['can_post_comments'] = 0;
    $this->userData['can_upload_pictures'] = 0;
    $this->userData['can_create_albums'] = 0;
    $this->userData['pub_upl_need_approval'] = 1;
    $this->userData['priv_upl_need_approval'] = 1;
    $this->userData['upload_form_config'] = 0;
    $this->userData['num_file_upload'] = 0;
    $this->userData['num_URI_upload'] = 0;
    $this->userData['custom_user_upload'] = 0;
  }

  function load_user_data($row)
  {

    $this->userData['user_id'] = $row['id'];
        $this->userData['user_name'] = $row['username'];

    //changed to "row['group_id']" $group_id = $row[($this->usergroupstable)?$this->field['usertbl_group_id']:$this->field['grouptbl_group_id']];

    if  ($this->multigroups){
      $this->userData['groups'] = $this->get_groups($row);
    } else {
      if ($this->use_post_based_groups){
        $this->userData['groups'] = array(0 => $row['group_id']);
      } else {
        $this->userData['groups'] = array(0 => (in_array($row['group_id'] - 100, $this->admingroups)) ? 1 : 2);
      }
    }
    //echo "GROUP: ";print_r($this->userData['groups']);
  }

  /*
   * Prototype function needed for Mambo *maybe others*
   * Keeps the session alive
   */
  function session_update() {}

  function get_user_count()
  {
    static $user_count = 0;

    if (!$user_count) {
            $query = "SELECT count(*) FROM {$this->usertable} WHERE 1";
            $this->cpgDb->query($query);
            $nbEnr = $this->cpgDb->fetchRow();
            $user_count = $nbEnr[0];
        }

        return $user_count;
  }

    function get_users($options = array())
    {
    // Copy UDB fields and config variables (just to make it easier to read)
      $f =& $this->field;
    $C =& $this->config->conf;

    // Sort codes
        $sort_codes = array('name_a' => 'user_name ASC',
                            'name_d' => 'user_name DESC',
                            'group_a' => 'group_name ASC',
                            'group_d' => 'group_name DESC',
                            'reg_a' => 'user_regdate ASC',
                            'reg_d' => 'user_regdate DESC',
                            'pic_a' => 'pic_count ASC',
                            'pic_d' => 'pic_count DESC',
                            'disku_a' => 'disk_usage ASC',
                            'disku_d' => 'disk_usage DESC',
                            'lv_a' => 'user_lastvisit ASC',
                            'lv_d' => 'user_lastvisit DESC',
                           );

        // Fix the group id, if bridging is enabled
        if ($this->config->conf['bridge_enable']) {
            $f['usertbl_group_id'] .= '+100';
        }

    // Build WHERE clause, if this is a username search
        if ($options['search']) {
            $options['search'] = 'WHERE u.'.$f['username'].' LIKE "'.$options['search'].'" ';
        }

    // Build SQL table, should work with all bridges
        $sql = "SELECT {$f['user_id']} as user_id, {$f['username']} as user_name, {$f['email']} as user_email, {$f['regdate']} as user_regdate, {$f['lastvisit']} as user_lastvisit, {$f['active']} as user_active, ".
               "COUNT(pid) as pic_count, ROUND(SUM(total_filesize)/1024) as disk_usage, group_name, group_quota ".
               "FROM {$this->usertable} AS u ".
               "INNER JOIN {$C['TABLE_USERGROUPS']} AS g ON u.{$f['usertbl_group_id']} = g.group_id ".
               "LEFT JOIN {$C['TABLE_PICTURES']} AS p ON p.owner_id = u.{$f['user_id']} ".
               $options['search'].
               "GROUP BY user_id " . "ORDER BY " . $sort_codes[$options['sort']] . " ".
               "LIMIT {$options['lower_limit']}, {$options['users_per_page']};";

    $this->cpgDb->query($sql);

    // If no records, return empty value
    if (!$this->cpgDb->nf()) {
      return array();
    }

    // Extract user list to an array
    while ($user = $this->cpgDb->fetchRow()) {
      $userlist[] = $user;
    }
        return $userlist;
    }


    function get_groups() {}

  // Retrieve the name of a user
  function get_user_name($uid)
  {
    $sql = "SELECT {$this->field['username']} as user_name FROM {$this->usertable} WHERE {$this->field['user_id']} = '$uid'";

    $this->cpgDb->query($sql, $this->link_id);

    if ($this->cpgDb->nf()) {
      $row = $this->cpgDb->fetchRow();
      return $row['user_name'];
    } else {
      return '';
    }
  }

  // Retrieve the id of a user
  function get_user_id($username)
  {
    $username = addslashes($username);

    $sql = "SELECT {$this->field['user_id']} AS user_id FROM {$this->usertable} WHERE {$this->field['username']}  = '$username'";

    $this->cpgDb->query($sql, $this->link_id);

    if ($this->cpgDb->nf()) {
      $row = $this->cpgDb->fetchRow();
      return $row['user_id'];
    } else {
      return '';
    }
  }

  // Redirect
  function redirect($target)
  {
    header('Location: '. $this->boardurl . $target);
    exit;
  }

  // Register
  function register_page()
  {
    $this->redirect($this->page['register']);
  }

  // View users
  function view_users()
  {
    $this->redirect($this->page['editusers']);
  }

  // Edit users
  function edit_users()
  {
    $this->redirect($this->page['editusers']);
  }

  // View user profile
  function view_profile($uid)
  {
    $this->redirect($this->page['edituserprofile'].$uid);
  }

  // Edit user profile
  function edit_profile($uid)
  {
    $this->redirect($this->page['edituserprofile'].$uid);
  }

  // Get user information
  function get_user_infos($uid)
  {
        global $lang_register_php;

    $sql = "SELECT {$this->field['username']} AS user_name,
                    {$this->field['email']} AS user_email,
                    {$this->field['regdate']} AS user_regdate,
                    {$this->field['location']} AS user_location,
                    {$this->field['website']} AS user_website

                    FROM  {$this->usertable} WHERE {$this->field['user_id']} = '$uid'";

    $this->cpgDb->query($sql, $this->link_id);

    if (!$this->cpgDb->nf()) {
      cpgUtils::cpgDie(ERROR, $lang_register_php['err_unk_user'], __FILE__, __LINE__);
    }

    $user_data = $this->cpgDb->fetchRow();
    $user_data['group_name'] = '';

    return $user_data;
  }

  // Query used to list users
  function list_users_query(&$user_count)
  {
    if ($this->forbiddenSet != "") {
      $forbidden = "AND (".$this->forbiddenSet." or p.galleryicon=p.pid)";
    } else {
      $forbidden = '';
    }

    //$sql = "SELECT (category - " . FIRST_USER_CAT . ") as user_id," . "        '???' as user_name," . "        COUNT(DISTINCT a.aid) as alb_count," . "        COUNT(DISTINCT pid) as pic_count," . "        MAX(pid) as thumb_pid, " . "        MAX(galleryicon) as gallery_pid " . "FROM {$this->config->conf['TABLE_ALBUMS']} AS a " . "INNER JOIN {$this->config->conf['TABLE_PICTURES']} AS p ON p.aid = a.aid " . "WHERE (approved = 'YES' AND category > " . FIRST_USER_CAT . ") $forbidden GROUP BY category " . "ORDER BY category ";

    $sql = "SELECT a.user_id," . "'???' as user_name," . "COUNT(DISTINCT a.aid) as alb_count," . "COUNT(DISTINCT pid) as pic_count," . "MAX(pid) as thumb_pid, " . "MAX(galleryicon) as gallery_pid " . "FROM {$this->config->conf['TABLE_ALBUMS']} AS a " . "INNER JOIN {$this->config->conf['TABLE_PICTURES']} AS p ON p.aid = a.aid " . "WHERE (approved = 'YES') $forbidden GROUP BY user_id " . "ORDER BY category ";

    $this->cpgDb->query($sql);

    $user_count = $this->cpgDb->nf();

    return $this->cpgDb->queryId();
  }

  function list_users_retrieve_data($result, $lower_limit, $count)
  {
    mysql_data_seek($result, $lower_limit);

    $rowset = array();
    $i = 0;
    $user_id_set = '';

    while (($row = mysql_fetch_array($result)) && ($i++ < $count)) {
      $user_id_set .= $row['user_id'] . ',';
      $rowset[] = $row;
    }
    mysql_free_result($result);

    $user_id_set = '(' . substr($user_id_set, 0, -1) . ')';

    $sql = "SELECT {$this->field['user_id']} AS user_id, {$this->field['username']} AS user_name FROM {$this->usertable} WHERE {$this->field['user_id']} IN $user_id_set";

    $this->cpgDb->query($sql, $this->link_id);

    while ($row = $this->cpgDb->fetchRow()) {
      $name[$row['user_id']] = $row['user_name'];
    }

    for($i = 0; $i < count($rowset); $i++) {
      $rowset[$i]['user_name'] = empty($name[$rowset[$i]['user_id']]) ? '???' : $name[$rowset[$i]['user_id']];
    }

    return $rowset;
  }

  // Group table synchronisation
  function synchronize_groups()
  {
    if ($this->use_post_based_groups){
      if ($this->group_overrride){
        $udb_groups = $this->collect_groups();
      } else {
        $sql = "SELECT * FROM {$this->groupstable} WHERE {$this->field['grouptbl_group_name']} <> ''";

        $this->cpgDb->query($sql, $this->link_id);

        $udb_groups = array();

        while ($row = $this->cpgDb->fetchRow())
        {
          $udb_groups[$row[$this->field['grouptbl_group_id']]+100] = ucfirst(strtolower($row[$this->field['grouptbl_group_name']]));
        }
      }
    } else {
      $udb_groups = array(1 =>'Administrators', 2=> 'Registered', 3=>'Guests', 4=> 'Banned');
    }

    $query = "SELECT group_id, group_name FROM {$this->config->conf['TABLE_USERGROUPS']} WHERE 1";
    $this->cpgDb->query($query);

    while ($row = $this->cpgDb->fetchRow()) {
      $cpg_groups[$row['group_id']] = $row['group_name'];
    }

    // Scan Coppermine groups that need to be deleted
    foreach($cpg_groups as $c_group_id => $c_group_name) {
      if ((!isset($udb_groups[$c_group_id]))) {
        $query = "DELETE FROM {$this->config->conf['TABLE_USERGROUPS']} WHERE group_id = '" . $c_group_id . "' LIMIT 1";
        $this->cpgDb->query($query);
        unset($cpg_groups[$c_group_id]);
      }
    }

    // Scan udb groups that need to be created inside Coppermine table
    foreach($udb_groups as $i_group_id => $i_group_name) {
      if ((!isset($cpg_groups[$i_group_id]))) {
        $query = "INSERT INTO {$this->config->conf['TABLE_USERGROUPS']} (group_id, group_name) VALUES ('$i_group_id', '" . addslashes($i_group_name) . "')";
        $this->cpgDb->query($query);
        $cpg_groups[$i_group_id] = $i_group_name;
      }
    }

    // Update Group names
    foreach($udb_groups as $i_group_id => $i_group_name) {
      if ($cpg_groups[$i_group_id] != $i_group_name) {
        $query = "UPDATE {$this->config->conf['TABLE_USERGROUPS']} SET group_name = '" . addslashes($i_group_name) . "' WHERE group_id = '$i_group_id' LIMIT 1";
        $this->cpgDb->query($query);
      }
    }
  }

  // Retrieve the album list used in gallery admin mode
  function get_admin_album_list()
  {
    if (UDB_CAN_JOIN_TABLES) {
      $sql = "SELECT aid, CONCAT('(', {$this->field['username']}, ') ', a.title) AS title
              FROM {$this->config->conf['TABLE_ALBUMS']} AS a
              INNER JOIN {$this->usertable} AS u
              ON category = (" . FIRST_USER_CAT . " + u.{$this->field['user_id']})
              ORDER BY title";
    } else {
      $sql = "SELECT aid, IF(category > " . FIRST_USER_CAT . ", CONCAT('* ', title), CONCAT(' ', title)) AS title " . "FROM {$this->config->conf['TABLE_ALBUMS']} " . "ORDER BY title";
    }
    return $sql;
  }

  function util_filloptions()
  {
    global $lang_util_php;
    $cpgDb2 = new cpgDB;

    if (UDB_CAN_JOIN_TABLES) {

      $query = "SELECT aid, category, IF({$this->field['username']} IS NOT NULL,
                CONCAT('(', {$this->field['username']}, ') ', a.title),
                CONCAT(' - ', a.title)) AS title
                FROM {$this->config->conf['TABLE_ALBUMS']} AS a
                LEFT JOIN {$this->usertable} AS u
                ON category = (" . FIRST_USER_CAT . " + u.{$this->field['user_id']})
                ORDER BY category, title";

      $this->cpgDb->query($query, $this->link_id);

      echo '&nbsp;&nbsp;&nbsp;&nbsp;<select size="1" name="albumid" class="listbox"><option value="0">All Albums</option>';

      while ($row = $this->cpgDb->fetchRow()) {
        $sql = "SELECT name FROM {$this->config->conf['TABLE_CATEGORIES']} WHERE cid = " . $row["category"];
        $cpgDb2->query($sql);
        $row2 = $cpgDb2->fetchRow();
        print "<option value=\"" . $row["aid"] . "\">" . $row2["name"] . $row["title"] . "</option>\n";
      }

      print '</select> (3)';
      print '&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="'.$lang_util_php['submit_form'].'" class="submit" /> (4)';
      print '</form>';

    } else {

        // Query for list of public albums

      $query= "SELECT aid, title, category FROM {$this->config->conf['TABLE_ALBUMS']} WHERE category < " . FIRST_USER_CAT . " ORDER BY title";
      $this->cpgDb->query($query);

      if ($this->cpgDb->nf()) {
        $public_result = $this->cpgDb->fetchRowSet();
      } else {
        $public_result = array();
      }

      // Initialize $merged_array
      $merged_array = array();

      // Count the number of albums returned.
      $end = count($public_result);

      // Cylce through the User albums.
      for($i=0;$i<$end;$i++) {

        //Create a new array sow we may sort the final results.
        $merged_array[$i]['id'] = $public_result[$i]['aid'];
        $merged_array[$i]['album_name'] = $public_result[$i]['title'];

        // Query the database to get the category name.
        $vQuery = "SELECT name, parent FROM " . $this->config->conf['TABLE_CATEGORIES'] . " WHERE cid='" . $public_result[$i]['category'] . "'";
        $vRes = mysql_query($vQuery);
        $vRes = mysql_fetch_array($vRes);
        if (isset($merged_array[$i]['username_category'])) {
          $merged_array[$i]['username_category'] = (($vRes['name']) ? '(' . $vRes['name'] . ') ' : '').$merged_array[$i]['username_category'];
        } else {
          $merged_array[$i]['username_category'] = (($vRes['name']) ? '(' . $vRes['name'] . ') ' : '');
        }
      }

      // We transpose and divide the matrix into columns to prepare it for use in array_multisort().
      foreach ($merged_array as $key => $row) {
         $aid[$key] = $row['id'];
         $title[$key] = $row['album_name'];
         $album_lineage[$key] = $row['username_category'];
      }

      // We sort all columns in descending order and plug in $album_menu at the end so it is sorted by the common key.
      array_multisort($album_lineage, SORT_ASC, $title, SORT_ASC, $aid, SORT_ASC, $merged_array);

      // Query for list of user albums

      $query = "SELECT aid, title, category FROM {$this->config->conf['TABLE_ALBUMS']} WHERE category >= " . FIRST_USER_CAT . " ORDER BY aid";
      $this->cpgDb->query($query);
      if ($this->cpgDb->nf()) {
        $user_albums_list =$this->cpgDb->fetchRowSet();
      } else {
        $user_albums_list = array();
      }

      // Query for list of user IDs and names

      $query = "SELECT ({$this->field['user_id']} + ".FIRST_USER_CAT.") AS id, CONCAT('(', {$this->field['username']}, ') ') as name FROM {$this->usertable} ORDER BY name ASC";
      $this->cpgDb->query($query, $this->link_id);

      if ($this->cpgDb->nf()) {
        $user_album_ids_and_names_list = $this->cpgDb->fetchRowSet();
      } else {
        $user_album_ids_and_names_list = array();
      }

      // Glue what we've got together.

      // Initialize $udb_i as a counter.
      if (count($merged_array)) {
        $udb_i = count($merged_array);
      } else {
            $udb_i = 0;
      }

      //Begin a set of nested loops to merge the various query results.
      foreach ($user_albums_list as $aq) {
        foreach ($user_album_ids_and_names_list as $uq) {
          if ($aq['category'] == $uq['id']) {
            $merged_array[$udb_i]['id']= $aq['category'];
            $merged_array[$udb_i]['album_name']= $aq['title'];
            $merged_array[$udb_i]['username_category']= $uq['name'];
            $udb_i++;
          }
        }
      }

      // The user albums and public albums have been merged into one list. Print the dropdown.
      echo '&nbsp;&nbsp;&nbsp;&nbsp;<select size="1" name="albumid" class="listbox"><option value="0">All Albums</option>';

      foreach ($merged_array as $menu_item) {
        echo "<option value=\"" . $menu_item['id'] . "\">" . (isset($menu_item['username_category']) ? $menu_item['username_category'] : '') . $menu_item['album_name'] . "</option>\n";
      }

      // Close list, etc.
      print '</select> (3)';
      print '&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="'.$lang_util_php['submit_form'].'" class="submit" /> (4)';
      print '</form>';
    }
  }

  function session_extraction() {
      return false;
  }

  function cookie_extraction() {
     return false;
  }

/*
  function authenticate()
  {
    global $USER_DATA;

    list($id, $cookie_pass) = $this->cookie_extraction();


        if ($id)
        {

      if (isset($this->usergroupstable)){
        $sql = "SELECT u.{$this->field['user_id']} AS id, u.{$this->field['username']} AS username, u.{$this->field['password']} AS password, ug.{$this->field['usertbl_group_id']} AS group_id FROM {$this->usertable} AS u, {$this->usergroupstable} AS ug WHERE u.{$this->field['user_id']}=ug.{$this->field['user_id']} AND u.{$this->field['user_id']}='$id'";
      } else {
        $sql = "SELECT u.{$this->field['user_id']} AS id, u.{$this->field['username']} AS username, u.{$this->field['password']} AS password, u.{$this->field['usertbl_group_id']}+100 AS group_id FROM {$this->usertable} AS u INNER JOIN {$this->groupstable} AS g ON u.{$this->field['usertbl_group_id']}=g.{$this->field['grouptbl_group_id']} WHERE u.{$this->field['user_id']}='$id'";
      }

      $result = cpg_db_query($sql, $this->link_id);

      if (mysql_num_rows($result)){
        $row = mysql_fetch_assoc($result);
        mysql_free_result($result);
      }
        }

    if (isset($row['password'])) {
      $db_pass = $this->udb_hash_db($row['password']);
      if ($db_pass == $cookie_pass){
        $this->load_user_data($row);
      } else {
        $row = $this->session_extraction($id);
      }
    } else {
      $row = $this->session_extraction($id);
    }

    if ($row[$this->field['user_id']]){
      $this->load_user_data($row);
    } else if (!isset($db_pass)) {
      $this->load_guest_data();
    }

    $user_group_set = '(' . implode(',', $USER_DATA['groups']) . ')';

        // Had to add these two lines
        if (!$USER_DATA['user_id'] && isset($db_pass)) {
            $USER_DATA['user_id'] = $row['id'];
            $USER_DATA['user_name'] = $row['username'];
        }

        $USER_DATA = array_merge($USER_DATA, cpgGetUserData($USER_DATA['groups'][0], $USER_DATA['groups'], $this->guestgroup));

    if ($this->use_post_based_groups){
      $USER_DATA['has_admin_access'] = (in_array($USER_DATA['groups'][0] - 100,$this->admingroups)) ? 1 : 0;
    } else {
      $USER_DATA['has_admin_access'] = ($USER_DATA['groups'][0] == 1) ? 1 : 0;
    }

    $USER_DATA['can_see_all_albums'] = $USER_DATA['has_admin_access'];

      // For error checking
    $this->config->conf['TABLE_USERS'] = '**ERROR**';

    define('USER_ID', $USER_DATA['user_id']);
        define('USER_NAME', $USER_DATA['user_name']);
        define('USER_GROUP', $USER_DATA['group_name']);
        define('USER_GROUP_SET', $user_group_set);
        define('USER_IS_ADMIN', $USER_DATA['has_admin_access']);
        define('USER_CAN_SEND_ECARDS', (int)$USER_DATA['can_send_ecards']);
        define('USER_CAN_RATE_PICTURES', (int)$USER_DATA['can_rate_pictures']);
        define('USER_CAN_POST_COMMENTS', (int)$USER_DATA['can_post_comments']);
        define('USER_CAN_UPLOAD_PICTURES', (int)$USER_DATA['can_upload_pictures']);
        define('USER_CAN_CREATE_ALBUMS', (int)$USER_DATA['can_create_albums']);
        define('USER_UPLOAD_FORM', (int)$USER_DATA['upload_form_config']);
        define('CUSTOMIZE_UPLOAD_FORM', (int)$USER_DATA['custom_user_upload']);
        define('NUM_FILE_BOXES', (int)$USER_DATA['num_file_upload']);
        define('NUM_URI_BOXES', (int)$USER_DATA['num_URI_upload']);

    $this->session_update();
  }
*/
}
?>
