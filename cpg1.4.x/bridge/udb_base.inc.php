<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2009 Coppermine Dev Team
  v1.1 originally written by Gregory DEMAR

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 3
  as published by the Free Software Foundation.
  
  ********************************************
  Coppermine version: 1.4.24
  $HeadURL$
  $Revision$
  $Author$
  $Date$
**********************************************/

if (!defined('IN_COPPERMINE')) die('Not in Coppermine...');

class core_udb {

        function connect($id = '')
        {
                global $CONFIG;

                // Define wheter we can join tables or not in SQL queries (same host & same db or user)
                $this->can_join_tables = ($this->db['host'] == $CONFIG['dbserver'] && ($this->db['name'] == $CONFIG['dbname'] || $this->db['user'] == $CONFIG['dbuser']));

                if ($id){
                        $this->link_id = $id;
                } else {
                        // Connect to udb database if necessary
                        if (!$this->can_join_tables) {
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
                global $USER_DATA;

                if (!($auth = $this->session_extraction()) && !($auth = $this->cookie_extraction())) {
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

                        $result = cpg_db_query($sql, $this->link_id);

                        if (mysql_num_rows($result)){
                                $row = mysql_fetch_assoc($result);
                                mysql_free_result($result);

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

                $user_group_set = '(' . implode(',', $USER_DATA['groups']) . ')';

        $USER_DATA = array_merge($USER_DATA, $this->get_user_data($USER_DATA['groups'][0], $USER_DATA['groups'], $this->guestgroup));

                if ($this->use_post_based_groups){
                        $USER_DATA['has_admin_access'] = (in_array($USER_DATA['groups'][0] - 100,$this->admingroups)) ? 1 : 0;
                } else {
                        $USER_DATA['has_admin_access'] = ($USER_DATA['groups'][0] == 1) ? 1 : 0;
                }

                $USER_DATA['can_see_all_albums'] = $USER_DATA['has_admin_access'];

                // avoids a template error
                if (!$USER_DATA['user_id']) $USER_DATA['can_create_albums'] = 0;

            // For error checking
                $CONFIG['TABLE_USERS'] = '**ERROR**';

                define('USER_ID', $USER_DATA['user_id']);
        define('USER_NAME', addslashes($USER_DATA['user_name']));
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

        function load_guest_data()
        {
                global $USER_DATA;

                $USER_DATA['user_id'] = 0;
        $USER_DATA['user_name'] = 'Guest';
        $USER_DATA['groups'][0] = $this->use_post_based_groups ? ($this->guestgroup) : 3;
        $USER_DATA['group_quota'] = 1;
        $USER_DATA['can_rate_pictures'] = 0;
                $USER_DATA['can_send_ecards'] = 0;
                $USER_DATA['can_post_comments'] = 0;
                $USER_DATA['can_upload_pictures'] = 0;
                $USER_DATA['can_create_albums'] = 0;
                $USER_DATA['pub_upl_need_approval'] = 1;
                $USER_DATA['priv_upl_need_approval'] = 1;
                $USER_DATA['upload_form_config'] = 0;
                $USER_DATA['num_file_upload'] = 0;
                $USER_DATA['num_URI_upload'] = 0;
                $USER_DATA['custom_user_upload'] = 0;
        }

        function load_user_data($row)
        {

                global $USER_DATA;

                $USER_DATA['user_id'] = $row['id'];
        $USER_DATA['user_name'] = $row['username'];

                //changed to "row['group_id']" $group_id = $row[($this->usergroupstable)?$this->field['usertbl_group_id']:$this->field['grouptbl_group_id']];

                if  ($this->multigroups){
                        $USER_DATA['groups'] = $this->get_groups($row);
                } else {
                        if ($this->use_post_based_groups){
                                $USER_DATA['groups'] = array(0 => $row['group_id']);
                        } else {
                                $USER_DATA['groups'] = array(0 => (in_array($row['group_id'] - 100, $this->admingroups)) ? 1 : 2);
                        }
                }
        }

        /*
         * Prototype function needed for Mambo *maybe others*
         * Keeps the session alive
         */
        function session_update() {}

        function get_user_count()
        {
                global $CONFIG;
                static $user_count = 0;

                if (!$user_count) {
            $result = cpg_db_query("SELECT count(*) FROM {$this->usertable} WHERE 1", $this->link_id);
            $nbEnr = mysql_fetch_array($result);
            $user_count = $nbEnr[0];
            mysql_free_result($result);
        }

        return $user_count;
        }

    function get_users($options = array())
    {
            global $CONFIG;

                // Copy UDB fields and config variables (just to make it easier to read)
            $f =& $this->field;
                $C =& $CONFIG;

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
        if ($CONFIG['bridge_enable']) {
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

                $result = cpg_db_query($sql, $this->link_id);

                // If no records, return empty value
                if (!$result) {
                        return array();
                }

                // Extract user list to an array
                while ($user = mysql_fetch_assoc($result)) {
                        $userlist[] = $user;
                }

        return $userlist;
    }


    function get_groups() {}

        // Retrieve the name of a user
        function get_user_name($uid)
        {
                $sql = "SELECT {$this->field['username']} as user_name FROM {$this->usertable} WHERE {$this->field['user_id']} = '$uid'";

                $result = cpg_db_query($sql, $this->link_id);

                if (mysql_num_rows($result)) {
                        $row = mysql_fetch_array($result);
                        mysql_free_result($result);
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

                $result = cpg_db_query($sql, $this->link_id);

                if (mysql_num_rows($result)) {
                        $row = mysql_fetch_array($result);
                        mysql_free_result($result);
                        return $row['user_id'];
                } else {
                        return '';
                }
        }

    // Perform database queries to calculate user's privileges based on group membership
    function get_user_data($pri_group, $groups, $default_group_id = 3)
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

            global $CONFIG;

            foreach ($groups as $key => $val)
                    if (!is_numeric($val))
                            unset ($groups[$key]);
            if (!in_array($pri_group, $groups)) array_push($groups, $pri_group);

            $result = cpg_db_query("SELECT MAX(group_quota) as disk_max, MIN(group_quota) as disk_min, " .
                            "MAX(can_rate_pictures) as can_rate_pictures, MAX(can_send_ecards) as can_send_ecards, " .
                            "MAX(upload_form_config) as ufc_max, MIN(upload_form_config) as ufc_min, " .
                            "MAX(custom_user_upload) as custom_user_upload, MAX(num_file_upload) as num_file_upload, " .
                            "MAX(num_URI_upload) as num_URI_upload, " .
                            "MAX(can_post_comments) as can_post_comments, MAX(can_upload_pictures) as can_upload_pictures, " .
                            "MAX(can_create_albums) as can_create_albums, " .
                            "MAX(has_admin_access) as has_admin_access, " .
                            "MIN(pub_upl_need_approval) as pub_upl_need_approval, MIN( priv_upl_need_approval) as  priv_upl_need_approval ".
                            "FROM {$CONFIG['TABLE_USERGROUPS']} WHERE group_id in (" .  implode(",", $groups). ")");

            if (mysql_num_rows($result)) {
                    $USER_DATA = mysql_fetch_assoc($result);
                    $result = cpg_db_query("SELECT group_name FROM  {$CONFIG['TABLE_USERGROUPS']} WHERE group_id= " . $pri_group);
                    $temp_arr = mysql_fetch_assoc($result);
                    $USER_DATA["group_name"] = $temp_arr["group_name"];
            } else {
                    $result = cpg_db_query("SELECT * FROM {$CONFIG['TABLE_USERGROUPS']} WHERE group_id = $default_group_id");
                   if (!mysql_num_rows($result)) die('<b>Coppermine critical error</b>:<br />The group table does not contain the Anonymous group !');
                           $USER_DATA = mysql_fetch_assoc($result);
                    }
            mysql_free_result($result);

            if ( $USER_DATA['ufc_max'] == $USER_DATA['ufc_min'] ) {
                    $USER_DATA["upload_form_config"] = $USER_DATA['ufc_min'];
            } elseif ($USER_DATA['ufc_min'] == 0) {
                    $USER_DATA["upload_form_config"] = $USER_DATA['ufc_max'];
            } elseif ((($USER_DATA['ufc_max'] == 2) or ($USER_DATA['ufc_max'] == 3)) and ($USER_DATA['ufc_min'] == 1)) {
                    $USER_DATA["upload_form_config"] = 3;
            } elseif (($USER_DATA['ufc_max'] == 3) and ($USER_DATA['ufc_min'] == 2)) {
                    $USER_DATA["upload_form_config"] = 3;
            } else {
                    $USER_DATA["upload_form_config"] = 0;
            }
            $USER_DATA["group_quota"] = ($USER_DATA["disk_min"])?$USER_DATA["disk_max"]:0;

            $USER_DATA['can_see_all_albums'] = $USER_DATA['has_admin_access'];

            $USER_DATA["group_id"] = $pri_group;
            $USER_DATA['groups'] = $groups;

            if (get_magic_quotes_gpc() == 0)
                            $USER_DATA['group_name'] = mysql_escape_string($USER_DATA['group_name']);

            return($USER_DATA);
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
                $this->redirect($this->page['edituserprofile'].($uid ? $uid : USER_ID));
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

                $sql = "SELECT *, {$this->field['username']} AS user_name,
                                                                                {$this->field['email']} AS user_email,
                                                                                {$this->field['regdate']} AS user_regdate,
                                                                                {$this->field['location']} AS user_location,
                                                                                {$this->field['website']} AS user_website

                                                                                FROM  {$this->usertable} WHERE {$this->field['user_id']} = '$uid'";

                $result = cpg_db_query($sql, $this->link_id);

                if (!mysql_num_rows($result)) cpg_die(ERROR, $lang_register_php['err_unk_user'], __FILE__, __LINE__);

                $user_data = mysql_fetch_array($result);
                if (!isset($user_data['group_name'])) $user_data['group_name'] = '';
                if (!isset($user_data['user_profile1'])) $user_data['user_profile1'] = '';
                if (!isset($user_data['user_profile2'])) $user_data['user_profile2'] = '';
                if (!isset($user_data['user_profile3'])) $user_data['user_profile3'] = '';
                if (!isset($user_data['user_profile4'])) $user_data['user_profile4'] = '';
                if (!isset($user_data['user_profile5'])) $user_data['user_profile5'] = '';
                if (!isset($user_data['user_profile6'])) $user_data['user_profile6'] = '';
                mysql_free_result($result);

                return $user_data;
        }

        // Query used to list users
        function list_users_query(&$user_count)
        {
                global $CONFIG, $FORBIDDEN_SET, $PAGE;

        $f =& $this->field;

                if ($FORBIDDEN_SET != "") {
                        $forbidden_with_icon = "AND ($FORBIDDEN_SET or p.galleryicon=p.pid)";
                        $forbidden = "AND ($FORBIDDEN_SET)";
                } else {
                        $forbidden_with_icon = '';
                        $forbidden = '';
                }

                // Get the total number of users with albums
        $sql  = "select null ";
        $sql .= "from {$CONFIG['TABLE_ALBUMS']} as p ";
        $sql .= " INNER JOIN {$CONFIG['TABLE_PICTURES']} AS pics ON pics.aid = p.aid ";
                $sql .= "where ( category>".FIRST_USER_CAT." $forbidden) ";
        $sql .= "group by category;";

        $result = cpg_db_query($sql);
        $user_count = mysql_num_rows($result);

        if ($user_count == 0) {
            return false;
        }

        mysql_free_result($result);

        $users_per_page = $CONFIG['thumbcols'] * $CONFIG['thumbrows'];
        $totalPages = ceil($user_count / $users_per_page);
        if ($PAGE > $totalPages) $PAGE = 1;
        $lower_limit = ($PAGE-1) * $users_per_page;

                if ($this->can_join_tables){

                        $sql  = "SELECT {$f['user_id']} as user_id,";
                        $sql .= "{$f['username']} as user_name,";
                        $sql .= "COUNT(DISTINCT a.aid) as alb_count,";
                        $sql .= "COUNT(DISTINCT pid) as pic_count,";
                        $sql .= "MAX(pid) as thumb_pid, ";
                        $sql .= "MAX(galleryicon) as gallery_pid ";
                        $sql .= "FROM {$CONFIG['TABLE_ALBUMS']} AS a ";
                        $sql .= "INNER JOIN {$this->usertable} as u on u.{$f['user_id']} = a.category - " . FIRST_USER_CAT . " ";
                        $sql .= "INNER JOIN {$CONFIG['TABLE_PICTURES']} AS p ON p.aid = a.aid ";
                        $sql .= "WHERE ((isnull(approved) or approved='YES') AND category > " . FIRST_USER_CAT . ") $forbidden_with_icon GROUP BY user_id ";
                        $sql .= "ORDER BY category ";
                        $sql .= "LIMIT $lower_limit, $users_per_page ";


                        $result = cpg_db_query($sql);

                        while ($row = mysql_fetch_array($result)) {
                                $users[] = $row;
                        }
                        mysql_free_result($result);

                } else {
                        // This is the way we collect the data without a direct join to the forum's user table

                        // This query determines which users we need to collect usernames of - ie just those which have albums with pics
                        // and are on the page we are looking at
                        $sql  = "SELECT category - 10000 as user_id ";
                        $sql .= "FROM {$CONFIG['TABLE_ALBUMS']} AS a ";
                        $sql .= "INNER JOIN {$CONFIG['TABLE_PICTURES']} AS p ON p.aid = a.aid ";
                        $sql .= "WHERE ((isnull(approved) or approved='YES') ";
                        $sql .= "AND category > " . FIRST_USER_CAT . ") $forbidden_with_icon GROUP BY category ";
                        $sql .= "LIMIT $lower_limit, $users_per_page ";

                        $result = cpg_db_query($sql);

                        $user_ids = array();

                        while ($row = mysql_fetch_array($result)) {
                                $user_ids[] = $row['user_id'];
                        }
                        mysql_free_result($result);

                        $userlist = implode(',', $user_ids);

                        // This query collects an array of user_id -> username mappings for the user ids collected above
                        $result = cpg_db_query("SELECT {$this->field['user_id']} AS user_id, {$this->field['username']} AS user_name FROM {$this->usertable} WHERE {$this->field['user_id']} IN ($userlist)", $this->link_id);

                        $userdata = array();

                        while ($row = mysql_fetch_array($result)) {
                                $userdata[$row['user_id']] = $row['user_name'];
                        }

                        mysql_free_result($result);

                        // This is the main query, similar to the one in the join implementation above but without the join to the user table
                        // We use the pic's owner_id field as the user_id instead of using category - 10000 as the user_id
                        $sql  = "SELECT owner_id as user_id,";
                        //$sql .= "{$f['username']} as user_name,";
                        $sql .= "COUNT(DISTINCT a.aid) as alb_count,";
                        $sql .= "COUNT(DISTINCT pid) as pic_count,";
                        $sql .= "MAX(pid) as thumb_pid, ";
                        $sql .= "MAX(galleryicon) as gallery_pid ";
                        $sql .= "FROM {$CONFIG['TABLE_ALBUMS']} AS a ";
                   // $sql .= "INNER JOIN {$this->usertable} as u on u.{$f['user_id']}+".FIRST_USER_CAT."=a.category ";
                        $sql .= "INNER JOIN {$CONFIG['TABLE_PICTURES']} AS p ON p.aid = a.aid ";
                        $sql .= "WHERE ((isnull(approved) or approved='YES') AND category > " . FIRST_USER_CAT . ") $forbidden_with_icon GROUP BY user_id ";
                        $sql .= "ORDER BY category ";
                        $sql .= "LIMIT $lower_limit, $users_per_page ";

                        $result = cpg_db_query($sql);

                        // Here we associate the username with the album details.
                        while ($row = mysql_fetch_array($result)) {
                                $users[] = array_merge($row, array('user_name' => $userdata[$row['user_id']]));
                        }

                        mysql_free_result($result);
                }
                return $users;
        }


        // Group table synchronisation
        function synchronize_groups()
        {
                global $CONFIG ;

                if ($this->use_post_based_groups){
                        if ($this->group_overrride){
                                $udb_groups = $this->collect_groups();
                        } else {
                                $sql = "SELECT * FROM {$this->groupstable} WHERE {$this->field['grouptbl_group_name']} <> ''";

                                $result = cpg_db_query($sql, $this->link_id);

                                $udb_groups = array();

                                while ($row = mysql_fetch_assoc($result))
                                {
                                        $udb_groups[$row[$this->field['grouptbl_group_id']]+100] = $row[$this->field['grouptbl_group_name']];
                                }
                        }
                } else {
                        $udb_groups = array(1 =>'Administrators', 2=> 'Registered', 3=>'Guests', 4=> 'Banned');
                }

                $result = cpg_db_query("SELECT group_id, group_name FROM {$CONFIG['TABLE_USERGROUPS']} WHERE 1");

                while ($row = mysql_fetch_array($result)) {
                        $cpg_groups[$row['group_id']] = $row['group_name'];
                }

                mysql_free_result($result);

                // Scan Coppermine groups that need to be deleted
                foreach($cpg_groups as $c_group_id => $c_group_name) {
                        if ((!isset($udb_groups[$c_group_id]))) {
                                cpg_db_query("DELETE FROM {$CONFIG['TABLE_USERGROUPS']} WHERE group_id = '" . $c_group_id . "' LIMIT 1");
                                unset($cpg_groups[$c_group_id]);
                        }
                }

                // Scan udb groups that need to be created inside Coppermine table
                foreach($udb_groups as $i_group_id => $i_group_name) {
                        if ((!isset($cpg_groups[$i_group_id]))) {
                                // add admin info
                                $admin_access = in_array($i_group_id-100, $this->admingroups) ? '1' : '0';
                                cpg_db_query("INSERT INTO {$CONFIG['TABLE_USERGROUPS']} (group_id, group_name, has_admin_access) VALUES ('$i_group_id', '" . addslashes($i_group_name) . "', '$admin_access')");
                                $cpg_groups[$i_group_id] = $i_group_name;
                        }
                }

                // Update Group names
                foreach($udb_groups as $i_group_id => $i_group_name) {
                        if ($cpg_groups[$i_group_id] != $i_group_name) {
                                cpg_db_query("UPDATE {$CONFIG['TABLE_USERGROUPS']} SET group_name = '" . addslashes($i_group_name) . "' WHERE group_id = '$i_group_id' LIMIT 1");
                        }
                }
                // fix admin grp
                if (!$this->use_post_based_groups) cpg_db_query("UPDATE {$CONFIG['TABLE_USERGROUPS']} SET has_admin_access = '1' WHERE group_id = '1' LIMIT 1");

        }

        // Retrieve the album list used in gallery admin mode
        function get_admin_album_list()
        {
                global $CONFIG;

                if ($this->can_join_tables) {
                        $sql = "SELECT aid, CONCAT('(', {$this->field['username']}, ') ', a.title) AS title
                                                        FROM {$CONFIG['TABLE_ALBUMS']} AS a
                                                        INNER JOIN {$this->usertable} AS u
                                                        ON category = (" . FIRST_USER_CAT . " + {$this->field['user_id']})
                                                        ORDER BY title";
                } else {
                        $sql = "SELECT aid, IF(category > " . FIRST_USER_CAT . ", CONCAT('* ', title), CONCAT(' ', title)) AS title " . "FROM {$CONFIG['TABLE_ALBUMS']} " . "ORDER BY title";
                }
                return $sql;
        }

        // Retrieve the user album list used in gallery admin mode during batch add process.
        function get_batch_add_album_list()
        {
                global $CONFIG;
                if ($this->can_join_tables) {
                        $sql = "SELECT aid, CONCAT('(', {$this->field['username']}, ') ', a.title) AS title
                                                        FROM {$CONFIG['TABLE_ALBUMS']} AS a
                                                        INNER JOIN {$this->usertable} AS u
                                                        ON category = (" . FIRST_USER_CAT . " + ".USER_ID.") AND {$this->field['user_id']} = ".USER_ID." ORDER BY title";
                } else {
                        $sql = "SELECT aid, IF(category > " . FIRST_USER_CAT . ", CONCAT('* ', title), CONCAT(' ', title)) AS title " . "FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = ".(FIRST_USER_CAT+USER_ID)." ORDER BY title";
                }
                return $sql;
        }

// Used to generate the album selection box in Admin tools (util.php)
        function util_filloptions()
        {
                global $lang_util_php, $CONFIG, $lang_upload_php;

                // Reset counter
                $list_count = 0;

                if ($this->can_join_tables) {

                        $user_albums = cpg_db_query("SELECT {$this->field['username']} AS user_name, aid, a.title
                                                                                FROM {$CONFIG['TABLE_ALBUMS']} AS a
                                                                                LEFT JOIN {$this->usertable} AS u
                                                                                ON (category - " . FIRST_USER_CAT . ") = {$this->field['user_id']}
                                                                                WHERE category > " . FIRST_USER_CAT);
                        $user_albums_list = cpg_db_fetch_rowset($user_albums);
                        mysql_free_result($user_albums);

                        // Cycle through the User albums
                        foreach($user_albums_list as $album) {

                                // Add to multi-dim array for later sorting
                                $listArray[$list_count]['cat'] = $lang_upload_php['personal_albums'];
                                $listArray[$list_count]['aid'] = $album['aid'];
                                $username = is_null($album['user_name']) ? 'Mr. X' : $album['user_name'];
                                $listArray[$list_count]['title'] = '(' . $username . ') ' . $album['title'];
                                $list_count++;
                        }

                } else {

                        $user_albums = cpg_db_query("SELECT aid, title, category FROM {$CONFIG['TABLE_ALBUMS']} WHERE category > " . FIRST_USER_CAT);

                        $user_albums_list = $user_ids = array();

                        if (mysql_num_rows($user_albums)){

                                while ($row = cpg_db_fetch_row($user_albums)){
                                        $user_albums_list[] = $row;
                                        $user_ids[] = $row['category'] - FIRST_USER_CAT;
                                }
                                mysql_free_result($user_albums);

                                $user_id_list = implode(', ', array_unique($user_ids));

                                $user_names = cpg_db_query("SELECT {$this->field['username']} AS user_name, {$this->field['user_id']} AS user_id  FROM {$this->usertable} WHERE {$this->field['user_id']} IN ($user_id_list)", $this->link_id);

                                while ($row = cpg_db_fetch_row($user_names)){
                                        $user_names_list[$row['user_id']] = $row['user_name'];
                                }
                                mysql_free_result($user_names);

                                // Cycle through the User albums
                                foreach($user_albums_list as $album) {

                                        // Add to multi-dim array for later sorting
                                        $listArray[$list_count]['cat'] = $lang_upload_php['personal_albums'];
                                        $listArray[$list_count]['aid'] = $album['aid'];
                                        $username = isset($user_names_list[$album['category'] - FIRST_USER_CAT]) ? $user_names_list[$album['category'] - FIRST_USER_CAT] : 'Mr. X';
                                        $listArray[$list_count]['title'] = '(' . $username . ') ' . $album['title'];
                                        $list_count++;
                                }
                        } else {
                                mysql_free_result($user_albums);
                        }
                }

                $public_albums = cpg_db_query("SELECT aid, title, name FROM {$CONFIG['TABLE_ALBUMS']} LEFT JOIN {$CONFIG['TABLE_CATEGORIES']} ON cid = category WHERE category < " . FIRST_USER_CAT . " ORDER BY title");
                $public_albums_list = cpg_db_fetch_rowset($public_albums);
                mysql_free_result($public_albums);

                // Cycle through the public albums
                foreach($public_albums_list as $album) {

                        // Set $album_id to the actual album ID
                        $album_id = $album['aid'];

                        // Add to multi-dim array for sorting later
                        $vRes['name'] = $album['name'];
                        if ($vRes['name']) {
                                $listArray[$list_count]['cat'] = $vRes['name'];
                        } else {
                                $listArray[$list_count]['cat'] = $lang_upload_php['albums_no_category'];
                        }
                        $listArray[$list_count]['aid'] = $album['aid'];
                        $listArray[$list_count]['title'] = $album['title'];
                        $list_count++;
                }

                // Sort the pulldown options by category and album name
                $listArray = array_csort($listArray,'cat','title');

                // Finally, print out the nicely sorted and formatted drop down list
                $alb_cat = '';

                echo '&nbsp;&nbsp;&nbsp;&nbsp;<select size="1" name="albumid" class="listbox"><option value="0">All Albums</option>';

                foreach ($listArray as $val) {
                        if ($val['cat'] != $alb_cat) {
                                if ($alb_cat) echo "                </optgroup>\n";
                                echo '                <optgroup label="' . $val['cat'] . '">' . "\n";
                                $alb_cat = $val['cat'];
                        }
                        echo '                <option value="' . $val['aid'] . '">   ' . $val['title'] . "</option>\n";
                }

                if ($alb_cat) echo "                </optgroup>\n";

                print '</select> (3)';
                print '&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="'.$lang_util_php['submit_form'].'" class="button" /> (4)';
                // print '</form>';
        }

        // Taken from Mambo (com_registration.php)
        function make_password(){
                $makepass="";
                $salt = "abchefghjkmnpqrstuvwxyz0123456789";
                srand((double)microtime()*1000000);
                $i = 0;
                while ($i <= 7) {
                        $num = rand() % 33;
                        $tmp = substr($salt, $num, 1);
                        $makepass = $makepass . $tmp;
                        $i++;
                }
                return ($makepass);
        }

        function session_extraction() {
            return false;
        }

        function cookie_extraction() {
           return false;
        }

        // Simple login by specified username and pass.
        // Used for xp publisher login
        // Needs override for any BBS that is more complex than straight md5(password)
        function login( $username = null, $password = null, $remember = false ) {

                $encpassword = md5($password);

                // Check for user in users table
        $sql =  "SELECT {$this->field['user_id']} AS user_id, {$this->field['username']} AS user_name FROM {$this->usertable} WHERE ";
        $sql .= "{$this->field['username']} = '$username' AND BINARY {$this->field['password']} = '$encpassword'";
                $results = cpg_db_query($sql);

                if (mysql_num_rows($results)) {
                        $USER_DATA = mysql_fetch_assoc($results);
                        mysql_free_result($results);
                        return $USER_DATA;
                } else {
                        return false;
                }
        }
		
	// Used for sorting (usort) the userlist by criteria that are not directly in the udb user table, callback function.
	function adv_sort($a, $b)
	{
		global $cpg_udb;

		if ($cpg_udb->sortdir == 'ASC'){
			return strcmp($a[$cpg_udb->sortfield], $b[$cpg_udb->sortfield]);
		 } else {
			return strcmp($b[$cpg_udb->sortfield], $a[$cpg_udb->sortfield]);
		}
	}
}
?>