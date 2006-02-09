<?php
/**
 * cpgProcessUsers.class.php
 *
 * Class containing static function which are used for different kind of data processing regarding users
 *
 * @package cpgNG
 * @author Aditya <adityamooley@sanisoft.com>
 * @version $Id$
 */

class cpgProcessUsers {

  function cpgProcessUsers()
  {
    $this->db = cpgDB::getInstance();
    $this->config = cpgConfig::getInstance();
    $this->auth = cpgAuth::getInstance();
  }

  /**
   * getUserList()
   *
   * @param string $search
   * @return array $users
   */
  function getUserList($sort, $search='', $userPerPage, $lowerLimit)
  {
    global $register_date_fmt, $lang_usermgr_php;

    /**
     * Get the details of the users. This data will come from the bridge.
     */
    $users = $this->auth->get_users(
                                array(
                                      'users_per_page' => $userPerPage,
                                      'lower_limit' => $lowerLimit,
                                      'search' => $search,
                                      'sort' => $sort
                                      )
                            );

    /**
     * Loop through the users array to format the data for display
     */
    foreach ($users as $key => $user) {
      $users[$key]['user_regdate'] = cpgUtils::localisedDate($users[$key]['user_regdate'], $register_date_fmt);
      if ($users[$key]['user_lastvisit']) {
        $users[$key]['user_lastvisit'] = cpgUtils::localisedDate($users[$key]['user_lastvisit'], $register_date_fmt);
      } else {
        $users[$key]['user_lastvisit'] = $lang_usermgr_php['never'];
      }
      if ($users[$key]['user_id'] == $this->auth->userData['user_id']) {
        $users[$key]['profile_link'] = 'profile.php?op=edit_profile';
        $users[$key]['checkbox'] = 0;
      } else {
        $users[$key]['profile_link'] = $_SERVER['PHP_SELF'].'?op=edit&user_id='.$user['user_id'];
        $users[$key]['checkbox'] = 1;
      }
    }
    return $users;
  }

  /**
   * listGroupsAlbAccess()
   *
   * @return array $users
   */
  function listGroupsAlbAccess() //shows a list of albums each group can see. Categories are listed with albums for clarity
  {
    global $lang_usermgr_php; //, $group_id;

    $sql = "
      SELECT
        group_id, group_name, categories.name AS category, albums.title AS album
      FROM
        {$this->config->conf['TABLE_USERGROUPS']} AS groups, {$this->config->conf['TABLE_ALBUMS']} AS albums
      LEFT JOIN
        {$this->config->conf['TABLE_CATEGORIES']} AS categories
      ON
        albums.category = categories.cid
      WHERE
        albums.visibility = groups.group_id
      GROUP BY
        group_name
      ORDER BY
        group_name, category, album
    ";

    $this->db->query($sql);
    $groups = array();
    if ($this->db->nf() <= 0) return $groups;
    $groups = $this->db->fetchRowset();

    foreach($groups as $key => $group) {
      $groups[$key]['albs'] = cpgProcessUsers::listGroupAlbAccess($group['group_id']);
    }
    //endtable();
    return $groups;
  }

  /**
   * listGroupAlbAccess()
   *
   * @param string $group_id
   * @return array $users
   */
  function listGroupAlbAccess($group_id) //shows a list of albums a specific group can see. Categories are listed with albums for clarity
  {
    $query = "
      SELECT
        group_id, albums.aid AS aid, group_name, categories.name AS category, albums.title AS album
      FROM
        {$this->config->conf['TABLE_USERGROUPS']} AS groups,
        {$this->config->conf['TABLE_ALBUMS']} AS albums
      LEFT JOIN
        {$this->config->conf['TABLE_CATEGORIES']} AS categories
      ON
        albums.category = categories.cid
      WHERE
        group_id = $group_id AND albums.visibility = groups.group_id
      ORDER BY
        category, album";
    $this->db->query($query);
    $albs = $this->db->fetchRowset();

    return $albs;

    /*foreach($albs as $album) {
      $aid = $album['aid'];
      echo '
        <tr>
        <td>' . $album['category'] . '</td>
        <td>' . $album['album'] . '</td>
        <td>&nbsp;<a href="modifyalb.php?album=' . $album['aid'] . '"><img src="images/edit.gif" border="0" alt="" /></a></td>
        </tr>
        ';
    }*/
  }

  /**
   * updateUser()
   *
   * - Function to update the current user information or to create a new user.
   * @param string $user_id
   * @param string $act_key
   * @return array $users
   */
  function updateUser($user_id, $act_key = '')
  {
    global $lang_usermgr_php, $lang_register_php;

    $user_name = addslashes(trim($_POST['user_name']));
    $user_password = addslashes(trim($_POST['user_password']));
    $password_again = addslashes(trim($_POST['user_password_again']));
    $user_email = addslashes(trim($_POST['user_email']));
    $profile1 = addslashes($_POST['user_profile1']);
    $profile2 = addslashes($_POST['user_profile2']);
    $profile3 = addslashes($_POST['user_profile3']);
    $profile4 = addslashes($_POST['user_profile4']);
    $profile5 = addslashes($_POST['user_profile5']);
    $profile6 = addslashes($_POST['user_profile6']);
    $user_active = isset($_POST['user_active']) ? $_POST['user_active'] : 'NO';
    $user_group = isset($_POST['user_group']) ? $_POST['user_group'] : '2';
    $group_list = isset($_POST['group_list']) ? $_POST['group_list'] : '';

    $sql = "SELECT user_id " . "FROM {$this->config->conf['TABLE_USERS']} " . "WHERE user_name = '" . addslashes($user_name) . "'";
    if ($user_id) {
      $sql .= " AND user_id != $user_id";
    }
    $this->db->query($sql);

    if ($this->db->nf() > 0) {
        cpgUtils::cpgDie(ERROR, $lang_register_php['err_user_exists']);
        return false;
    }

    if (!$user_id && strlen($user_name) < 2) {
      cpgUtils::cpgDie(ERROR, $lang_register_php['err_uname_short']);
    }
    if (!$user_id && strlen($user_password) < 2) {
      cpgUtils::cpgDie(ERROR, $lang_register_php['err_password_short']);
    }
    if ($user_name == $password_again) {
        cpgUtils::cpgDie(ERROR, $lang_register_php['err_uname_pass_diff']);
    }
    if (!$user_id && $user_password != $password_again) {
        cpgUtils::cpgDie(ERROR, $lang_register_php['err_password_mismatch']);
    }
    if (!eregi("^[_\.0-9a-z\-]+@([0-9a-z][0-9a-z-]+\.)+[a-z]{2,6}$", $user_email)) {
        cpgUtils::cpgDie(ERROR, $lang_register_php['err_invalid_email']);
    }

    if (!$user_id && !$this->config->conf['allow_duplicate_emails_addr']) {
        $sql = "SELECT user_id " . "FROM {$this->config->conf['TABLE_USERS']} " . "WHERE user_email = '" . $user_email . "'";
        $this->db->query($sql);
        if ($this->db->nf()) {
            cpgUtils::cpgDie(ERROR, $lang_register_php['err_duplicate_email']);
        }
    }
/*
    if ($this->config->conf['reg_requires_valid_email'] && !GALLERY_ADMIN_MODE) {
        list($usec, $sec) = explode(' ', microtime());
        $seed = (float) $sec + ((float) $usec * 100000);
        srand($seed);
        $act_key = md5(uniqid(rand(), 1));
    } else {
        $act_key = '';
    }
*/
    if (is_array($group_list)) {
        $user_group_list = '';
        foreach($group_list as $group) $user_group_list .= ($group != $user_group) ? $group . ',' : '';
        $user_group_list = substr($user_group_list, 0, -1);
    } else {
        $user_group_list = '';
    }

    /**
     * Finally, check what should the status of the user. If this is new registration and activation mail is not
     * required then make the user active.
     * In case of ADMIN creating another user, then respect ADMIN's decision
     */
    if (!GALLERY_ADMIN_MODE && empty($act_key)) {
      $user_active = 'YES';
    }

    /**
     * Have we been using MySQL 4 > we could have used UPDATE ON DUPLICATE
     */
    $query = $user_id ? 'UPDATE' : 'INSERT';
    $query .= " {$this->config->conf['TABLE_USERS']} SET " .
                  "user_name = '$user_name', " .
                  "user_email = '$user_email', " .
                  "user_active = '$user_active', " .
                  "user_group = '$user_group', " .
                  "user_profile1 = '$profile1', " .
                  "user_profile2 = '$profile2', " .
                  "user_profile3 = '$profile3', " .
                  "user_profile4 = '$profile4', " .
                  "user_profile5 = '$profile5', " .
                  "user_profile6 = '$profile6', " .
                  "user_group_list = '$user_group_list'";

    if (strlen($user_password)) {
      $query .= ", user_password = '".(($this->config->conf['enable_encrypted_passwords'])?md5($user_password):$user_password)."'";
    }
    if (!empty($act_key)) {
      $query .= ", user_actkey = '".$act_key ."'";
    }

    $query .= $user_id ? " WHERE user_id = '$user_id'" : ", user_regdate = NOW()";
    $this->db->query($query);
    if ($this->config->conf['log_mode']) {
        log_write('New user "'.$user_name.'" created on '.date("F j, Y, g:i a"),CPG_ACCESS_LOG);
    }

    return $user_name;
  }

  function deleteUsers()
  {
    $db1 = new cpgDB; //New instance of database class

    $user_id = str_replace('u', '', $_GET['id']);
    $users_scheduled_for_action = explode(',', $user_id);
    if (!(GALLERY_ADMIN_MODE) || ($user_id == $this->auth->isDefined("USER_ID")) || UDB_INTEGRATION != 'coppermine') {
      cpgUtils::cpgDie(ERROR, $lang_errors['perm_denied']);
    }

    foreach($users_scheduled_for_action as $key) {
      $query = "SELECT user_name FROM {$this->config->conf['TABLE_USERS']} WHERE user_id = '$key'";
      $this->db->query($query);

      if ($this->db->nf() == 0) {
        return false;
      } else {
        $userData[] = $this->db->f('user_name');

        // First delete the albums
        $query = "SELECT aid FROM {$this->config->conf['TABLE_ALBUMS']} WHERE category = '" . (FIRST_USER_CAT + $key) . "'";
        $db1->query($query);
        $user_alb_counter = 0;
        while ($album = $db1->fetchRow()) {
          cpgProcessUsers::deleteAlbum($album['aid']);
          $user_alb_counter++;
        } // while

        // Then anonymize comments posted by the user
        $query = "SELECT COUNT(*) FROM {$this->config->conf['TABLE_COMMENTS']} WHERE author_id = '$key'";
        $db1->query($query);
        $comment_counter = $db1->fetchRowSet();

        if ($_REQUEST['delete_comments'] == 'yes') {
          $query = "DELETE FROM {$this->config->conf['TABLE_COMMENTS']} WHERE author_id = '$key'";
          $db1->query($query);
        } else {
          $query = "UPDATE {$this->config->conf['TABLE_COMMENTS']} SET  author_id = '0' WHERE  author_id = '$key'";
          $db1->query($query);
        }

        // Do the same for pictures uploaded in public albums
        $query = "SELECT COUNT(*) FROM {$this->config->conf['TABLE_PICTURES']} WHERE owner_id = '$key'";
        $db1->query($query);
        $publ_upload_counter = $db1->fetchRowSet();

        if ($_REQUEST['delete_files'] == 'yes') {
            $query = "DELETE FROM {$this->config->conf['TABLE_PICTURES']} WHERE  owner_id = '$key'";
            $db1->query($query);
        } else {
            $query = "UPDATE {$this->config->conf['TABLE_PICTURES']} SET  owner_id = '0' WHERE  owner_id = '$key'";
            $db1->query($query);
        }

        // Finally delete the user
        $query = "DELETE FROM {$this->config->conf['TABLE_USERS']} WHERE user_id = '$key'";
        $db1->query($query);
      }
    }
    return implode(',', $userData);
  }

  function deleteAlbum($aid)
  {
    global $lang_errors, $lang_delete_php;

    $query = "SELECT title, category FROM {$this->config->conf['TABLE_ALBUMS']} WHERE aid ='$aid'";
    $this->db->query($query);
    if ($this->db->nf() == 0) {
      cpgUtils::cpgDie(CRITICAL_ERROR, $lang_errors['non_exist_ap']);
    }
    $album_data = $this->db->fetchRow();

    if (!GALLERY_ADMIN_MODE) {
      if ($album_data['category'] != FIRST_USER_CAT + $this->auth->isDefined("USER_ID")) {
        cpgUtils::cpgDie(ERROR, $lang_errors['perm_denied']);
      }
    }

    $query = "SELECT pid FROM {$this->config->conf['TABLE_PICTURES']} WHERE aid='$aid'";
    $this->db->query($query);
    // Delete all files
    while ($pic = $this->db->fetchRow()) {
        cpgProcessUsers::deletePicture($pic['pid']);
    }
    // Delete album
    $query = "DELETE from {$this->config->conf['TABLE_ALBUMS']} WHERE aid='$aid'";
    $this->db->query($query);
  }

  function deletePicture($pid)
  {
    global $lang_errors;

    if (GALLERY_ADMIN_MODE) {
        $query = "SELECT aid, filepath, filename FROM {$this->config->conf['TABLE_PICTURES']} WHERE pid='$pid'";
        $this->db->query($query);
        if ($this->db->nf() == 0) {
          cpgUtils::cpgDie(CRITICAL_ERROR, $lang_errors['non_exist_ap']);
        }
        $pic = $this->db->fetchRow();
    } else {
        $query = "SELECT {$this->config->conf['TABLE_PICTURES']}.aid as aid, category, filepath, filename, owner_id FROM {$this->config->conf['TABLE_PICTURES']}, {$this->config->conf['TABLE_ALBUMS']} WHERE {$this->config->conf['TABLE_PICTURES']}.aid = {$this->config->conf['TABLE_ALBUMS']}.aid AND pid='$pid'";
        $this->db->query($query);
        if ($this->db->nf() == 0) {
          cpgutils::cpgDie(CRITICAL_ERROR, $lang_errors['non_exist_ap']);
        }

        $pic = $this->db->fetchRow();
        if (($pic['category'] != FIRST_USER_CAT + $this->auth->isDefined("USER_ID")) && !($this->config->conf['users_can_edit_pics'] && $pic['owner_id'] == $this->auth->isDefined("USER_ID") && $this->auth->isDefined("USER_ID") != 0)) {
          cpgUtils::cpgDie(ERROR, $lang_errors['perm_denied']);
        }
    }

    $aid = $pic['aid'];
    $dir = $this->config->conf['fullpath'] . $pic['filepath'];
    $file = $pic['filename'];


    if (!is_writable($dir)) {
      cpgUtils::cpgDie(CRITICAL_ERROR, sprintf($lang_errors['directory_ro'], htmlspecialchars($dir)));
    }

    $files = array($dir . $file, $dir . $this->config->conf['normal_pfx'] . $file, $dir . $this->config->conf['thumb_pfx'] . $file);
    foreach ($files as $currFile) {
      if (is_file($currFile)) {
        @unlink($currFile);
      }
    }

    $query = "DELETE FROM {$this->config->conf['TABLE_COMMENTS']} WHERE pid='$pid'";
    $this->db->query($query);

    $query = "DELETE FROM {$this->config->conf['TABLE_EXIF']} WHERE filename='$dir$file' LIMIT 1";
    $this->db->query($query);

    $query = "DELETE FROM {$this->config->conf['TABLE_PICTURES']} WHERE pid='$pid' LIMIT 1";
    $this->db->query($query);
  }

  function activateUsers()
  {
    global $lang_delete_php;

    $db1 = new cpgDB; //New instance of database class

    $user_id = str_replace('u', '', $_GET['id']);
    $users_scheduled_for_action = explode(',', $user_id);
    if (!(GALLERY_ADMIN_MODE) || ($user_id == $this->auth->isDefined("USER_ID")) || UDB_INTEGRATION != 'coppermine') {
      cpgUtils::cpgDie(ERROR, $lang_errors['perm_denied']);
    }

    $actionArr = array();
    foreach($users_scheduled_for_action as $key) {
      $query = "SELECT user_name,user_active FROM {$this->config->conf['TABLE_USERS']} WHERE user_id = '$key'";
      $this->db->query($query);
      if ($this->db->nf() == 0) {
        return false;
      } else {
        $userData = $this->db->fetchRow();
        if ($userData['user_active'] == 'YES') {
            // user is already active
            $actionArr[] = $userData['user_name'] . ' - ' . $lang_delete_php['user_already_active'];
        } else {
            // activate this user
            $query = "UPDATE {$this->config->conf['TABLE_USERS']} SET user_active = 'YES' WHERE  user_id = '$key'";
            $db1->query($query);
            $actionArr[] = $userData['user_name'] . ' - ' . $lang_delete_php['activated'];
        }
      }
    } // foreach --- end
    return $actionArr;
  }

  function deactivateUsers()
  {
    global $lang_delete_php;

    $db1 = new cpgDB; //New instance of database class


    $user_id = str_replace('u', '', $_GET['id']);
    $users_scheduled_for_action = explode(',', $user_id);
    if (!(GALLERY_ADMIN_MODE) || ($user_id == $this->auth->isDefined("USER_ID")) || UDB_INTEGRATION != 'coppermine') {
      cpgUtils::cpgDie(ERROR, $lang_errors['perm_denied']);
    }

    $actionArr = array();

    foreach($users_scheduled_for_action as $key) {
        $query = "SELECT user_name,user_active FROM {$this->config->conf['TABLE_USERS']} WHERE user_id = '$key'";
        $this->db->query($query);
        if ($this->db->nf() == 0) {
          return false;
        } else {
            $userData = $this->db->fetchRow();
            if ($userData['user_active'] == 'NO') {
                // user is already inactive
                $actionArr[] = $userData['user_name'].' - '.$lang_delete_php['user_already_inactive'];
            } else {
                // deactivate this user
                $query = "UPDATE {$this->config->conf['TABLE_USERS']} SET user_active = 'NO' WHERE  user_id = '$key'";
                $db1->query($query);
                $actionArr[] = $userData['user_name'].' - '.$lang_delete_php['deactivated'];
            }
        }
    } // foreach --- end
    return $actionArr;
  }

  function resetPassword()
  {
    global $lang_delete_php;

    $db1 = new cpgDB; //New instance of database class


    $user_id = str_replace('u', '', $_GET['id']);
    $users_scheduled_for_action = explode(',', $user_id);
    if (!(GALLERY_ADMIN_MODE) || ($user_id == $this->auth->isDefined("USER_ID")) || UDB_INTEGRATION != 'coppermine') {
      cpgUtils::cpgDie(ERROR, $lang_errors['perm_denied']);
    }

    $actionArr = array();

    foreach($users_scheduled_for_action as $key) {
      $query = "SELECT user_name FROM {$this->config->conf['TABLE_USERS']} WHERE user_id = '$key'";
      $this->db->query($query);
      if ($this->db->nf() == 0) {
          return false;
      } else {
          $userData = $this->db->fetchRow();
          // set this user's password
          $new_password = addslashes($_REQUEST['new_password']);
          $new_password = ($this->config->conf['enable_encrypted_passwords']) ? md5($new_password) : $new_password;
          $query = "UPDATE {$this->config->conf['TABLE_USERS']} SET user_password = '$new_password' WHERE  user_id = '$key'";
          $db1->query($query);
          $actionArr = sprintf($lang_delete_php['password_reset'], '&laquo;'.$_REQUEST['new_password'].'&raquo;');
      }
    } // foreach --- end
    return $actionArr;
  }

  function changeGroup ()
  {
    global $lang_delete_php;

    $db1 = new cpgDB; //New instance of database class


    $user_id = str_replace('u', '', $_GET['id']);
    $users_scheduled_for_action = explode(',', $user_id);
    if (!(GALLERY_ADMIN_MODE) || ($user_id == $this->auth->isDefined("USER_ID")) || UDB_INTEGRATION != 'coppermine') {
      cpgUtils::cpgDie(ERROR, $lang_errors['perm_denied']);
    }

    $actionArr = array();

    $query = "SELECT group_id,group_name FROM {$this->config->conf['TABLE_USERGROUPS']}";
    $this->db->query($query);
    if ($this->db->nf() == 0) {
        cpgUtils::cpgDie(CRITICAL_ERROR, $lang_delete_php['err_empty_groups'], __FILE__, __LINE__);
    }
    while ($row = $this->db->fetchRow()) {
        $group_label[$row['group_id']] = $row['group_name'];
    } // while
    foreach($users_scheduled_for_action as $key) {
      $query = "SELECT user_name,user_group FROM {$this->config->conf['TABLE_USERS']} WHERE user_id = '$key'";
      $this->db->query($query);
      if ($this->db->nf() == 0) {
          return false;
      } else {
          $userData = $this->db->fetchRow();
          // set this user's group
          $group = addslashes($_REQUEST['group']);
          $query = "UPDATE {$this->config->conf['TABLE_USERS']} SET user_group = '$group' WHERE  user_id = '$key'";
          $db1->query($query);
          $actionArr[] = sprintf($lang_delete_php['change_group_to_group'], '&laquo;'.$group_label[$userData['user_group']].'&raquo;', '&laquo;'.$group_label[$_REQUEST['group']].'&raquo;');
      }
    } // foreach --- end
    return $actionArr;
  }

  function addGroup ()
  {
    global $lang_delete_php;

    $db1 = new cpgDB; //New instance of database class


    $user_id = str_replace('u', '', $_GET['id']);
    $users_scheduled_for_action = explode(',', $user_id);
    if (!(GALLERY_ADMIN_MODE) || ($user_id == $this->auth->isDefined("USER_ID")) || UDB_INTEGRATION != 'coppermine') {
      cpgUtils::cpgDie(ERROR, $lang_errors['perm_denied']);
    }

    $actionArr = array();

    $query = "SELECT group_id,group_name FROM {$this->config->conf['TABLE_USERGROUPS']} ORDER BY group_name";
    $this->db->query($query);
    if ($this->db->nf() == 0) {
      cpgUtils::cpgDie(CRITICAL_ERROR, $lang_delete_php['err_empty_groups'], __FILE__, __LINE__);
    }

    while ($row = $this->db->fetchRow()) {
      $group_label[$row['group_id']] = $row['group_name'];
    } // while

    foreach($users_scheduled_for_action as $key) {
      $query = "SELECT user_name,user_group FROM {$this->config->conf['TABLE_USERS']} WHERE user_id = '$key'";
      $this->db->query($query);
      if ($this->db->nf() == 0) {
        return false;
      } else {
        $userData = $this->db->fetchRow();
        // check group membership of this particular user
        $sql = "SELECT * FROM {$this->config->conf['TABLE_USERS']} WHERE user_id = '$key'";
        $this->db->query($sql);
        if ($this->db->nf() == 0) {
          return false;
        }

        $userData = $this->db->fetchRow();
        $user_group = explode(',', $userData['user_group_list']);
        natcasesort($user_group);

        if (!in_array($_REQUEST['group'], $user_group)){
          $user_group[] =  addslashes($_REQUEST['group']);
        }
        $group_output = '';
        $new_group_query = '';

        foreach($user_group as $group) {
          if ($group !='') {
            $group_output .= '&laquo;'.$group_label[$group].'&raquo;, ';
            $new_group_query .= $group.',';
          }
        }

        $group_output = trim(trim($group_output), ',');
        $new_group_query = trim($new_group_query, ',');
        // set this user's group
        $query = "UPDATE {$this->config->conf['TABLE_USERS']} SET user_group_list = '$new_group_query' WHERE  user_id = '$key'";
        $this->db->query($query);
        $actionArr[] = sprintf($lang_delete_php['add_group_to_group'], '&laquo;'.$userData['user_name'].'&raquo;', '&laquo;'.$group_label[$_REQUEST['group']].'&raquo;', '&laquo;'.$group_label[$userData['user_group']].'&raquo;', $group_output);
      }
    } // foreach --- end
    return $actionArr;
  }

  function changeProfile()
  {
    $profile1 = addslashes($_POST['user_profile1']);
    $profile2 = addslashes($_POST['user_profile2']);
    $profile3 = addslashes($_POST['user_profile3']);
    $profile4 = addslashes($_POST['user_profile4']);
    $profile5 = addslashes($_POST['user_profile5']);
    $profile6 = addslashes($_POST['user_profile6']);
    $email = addslashes($_POST['email']);

    $sql = "UPDATE
              {$this->config->conf['TABLE_USERS']}
            SET
              user_profile1 = '$profile1',
              user_profile2 = '$profile2',
              user_profile3 = '$profile3',
              user_profile4 = '$profile4',
              user_profile5 = '$profile5',
              user_profile6 = '$profile6',
              user_email = '$email'
            WHERE
              user_id = '" . $this->auth->isDefined("USER_ID") . "'";
    $this->db->query($sql);

    if ($this->db->affectedRows()) {
      return true;
    } else {
      return false;
    }
  }

  function changePassword()
  {
    global $lang_register_php;

    $current_pass = addslashes(trim($_POST['current_pass']));
    $new_pass = addslashes(trim($_POST['new_pass']));
    $new_pass_again = addslashes(trim($_POST['new_pass_again']));

    if (strlen($current_pass) < 2) {
      return $lang_register_php['err_password_short'];
    }

    if (strlen($new_pass) < 2) {
      return $lang_register_php['err_password_short'];
    }

    if ($new_pass != $new_pass_again) {
      return $lang_register_php['err_password_mismatch'];
    }

    if ($this->config->conf['enable_encrypted_passwords']) {
      $new_pass = md5($new_pass);
      $current_pass = md5($current_pass);
    }

    $sql = "UPDATE
              {$this->config->conf['TABLE_USERS']}
            SET
              user_password = '$new_pass'
            WHERE
              user_id = '" . $this->auth->isDefined('USER_ID') . "' AND
            BINARY user_password = '$current_pass'";

/*    $sql = "UPDATE
              {$this->auth->usertable}
            SET
              {$this->auth->field['password']} = '$new_pass'
            WHERE
              {$this->auth->field['user_id']} = '" . USER_ID . "' AND
            BINARY {$this->auth->field['password']} = '$current_pass'";
*/
    $this->db->query($sql);
    if (!$this->db->affectedRows()) {
      return $lang_register_php['pass_chg_error'];
    }

    setcookie($this->config->conf['cookie_name'] . '_pass', md5($_POST['new_pass']), time() + 86400, $this->config->conf['cookie_path']);

    return 1;
  }

  /**
   * new user registration notice mail function  to user OR admin
   */
  function registerNoticeMail($act_key)
  {
      global $lang_register_php, $lang_register_confirm_email, $lang_register_approve_email, $lang_continue;

      $user_name = addslashes(trim($_POST['user_name']));
      $user_email = addslashes(trim($_POST['user_email']));
      $user_password = addslashes(trim($_POST['user_password']));

      if ($this->config->conf['reg_requires_valid_email']) {
          if (!$this->config->conf['admin_activation'] == 1 ) { //user gets activation email
              $act_link = rtrim($this->config->conf['site_url'], '/') . '/register.php?activate=' . $act_key;
              $template_vars = array('{SITE_NAME}' => $this->config->conf['gallery_name'],
                                     '{USER_NAME}' => $user_name,
                                     '{PASSWORD}'  => $user_password,
                                     '{ACT_LINK}'  => $act_link);
              cpgUtils::cpgMail($user_email, sprintf($lang_register_php['confirm_email_subject'], $this->config->conf['gallery_name']), nl2br(strtr($lang_register_confirm_email, $template_vars)));

              if ($this->config->conf['admin_activation'] == 1) {
                  cpgUtils::msgBox($lang_register_php['information'], $lang_register_php['thank_you_admin_activation'], $lang_continue, 'index.php');
              } else {
                  cpgUtils::msgBox($lang_register_php['information'], $lang_register_php['thank_you'], $lang_continue, 'index.php');
              }
          } else {
              cpgUtils::msgBox($lang_register_php['information'], $lang_register_php['acct_active'], $lang_continue, 'index.php');
          }
          // email notification to admin
          if ($this->config->conf['reg_notify_admin_email']) {
              if ($this->config->conf['admin_activation'] == 1) {
                  $act_link = rtrim($this->config->conf['site_url'], '/') . '/register.php?activate=' . $act_key;
                  $template_vars = array('{SITE_NAME}' => $this->config->conf['gallery_name'],
                                         '{USER_NAME}' => $user_name,
                                         '{PASSWORD}'  => $user_password,
                                         '{ACT_LINK}'  => $act_link,);
                  cpgUtils::cpgMail('admin', sprintf($lang_register_php['notify_admin_request_email_subject'], $this->config->conf['gallery_name']), nl2br(strtr($lang_register_approve_email, $template_vars)));
              } else {
                  cpgUtils::cpgMail('admin', sprintf($lang_register_php['notify_admin_email_subject'], $this->config->conf['gallery_name']), sprintf($lang_register_php['notify_admin_email_body'], $user_name));
              }
              cpgUtils::msgBox($lang_register_php['information'], $lang_register_php['thank_you_admin_activation'], $lang_continue, 'index.php');
          }
          //return true;
      }
  }

  /**
  * function to activate user
  */
  function activateNewUser()
  {
      global $lang_register_php, $lang_register_activated_email, $lang_continue;

      if (isset($_GET['activate'])) {
          $act_key = addslashes(substr($_GET['activate'], 0 , 32));
          if (strlen($act_key) != 32) {
              cpgUtils::cpgDie(ERROR, $lang_register_php['acct_act_failed'], __FILE__, __LINE__);
          }

          $sql = "SELECT user_active, user_email, user_name, user_password " . "FROM {$this->config->conf['TABLE_USERS']} " . "WHERE user_actkey = '$act_key' " . "LIMIT 1";
          $this->db->query($sql);
          if (!$this->db->nf()) {
              cpgUtils::cpgDie(ERROR, $lang_register_php['acct_act_failed'], __FILE__, __LINE__);
          }
          $row = $this->db->fetchRow();
          $this->db->free();

          if ($row['user_active'] == 'YES') {
              cpgUtils::cpgDie(ERROR, $lang_register_php['acct_already_act'], __FILE__, __LINE__);
          }

          $user_email = $row['user_email'];
          $user_name = $row['user_name'];
          $user_password = $row['user_password'];

          $sql = "UPDATE {$this->config->conf['TABLE_USERS']} " . "SET user_active = 'YES' " . "WHERE user_actkey = '$act_key' " . "LIMIT 1";
          $this->db->query($sql);

          /**
          * after admin approves, user receives email notification
          */
          if ($this->config->conf['admin_activation'] == 1) {
              cpgUtils::msgBox($lang_register_php['information'], $lang_register_php['acct_active_admin_activation'], $lang_continue, 'index.php');
              $site_link = $this->config->conf['site_url'];
              $template_vars = array('{SITE_LINK}' => $site_link,
                                    '{USER_NAME}' => $user_name,
                                    '{PASSWORD}'  => $user_password,
                                    '{SITE_NAME}' => $this->config->conf['gallery_name']);
              cpgUtils::cpgMail($user_email, sprintf($lang_register_php['notify_user_email_subject'], $this->config->conf['gallery_name']), nl2br(strtr($lang_register_activated_email, $template_vars)));
          } else {
              /**
              * user self-activated, gets message box that account was activated
              */
              cpgUtils::msgBox($lang_register_php['information'], $lang_register_php['acct_active'], $lang_continue, 'index.php');
        }
      }
  }

  /**
   * notice mail to user regarding forgot password
   */
  function forgotPwdNoticeMail($reset_key)
  {
      global $lang_forgot_passwd_php, $lang_forgot_password_notice_email, $lang_continue;

      if (isset($_POST['username']) && !empty($_POST['username'])) {
         $user_name = addslashes(trim($_POST['username']));
      } else {
         cpgUtils::cpgDie(ERROR, $lang_forgot_passwd_php['user_blank']);
      }

      $sql = "UPDATE " . "{$this->config->conf['TABLE_USERS']}" . " SET reset_key='$reset_key'" . " WHERE user_name='$user_name'";
      $this->db->query($sql);
      if (!$this->db->affectedRows()) {
          cpgUtils::cpgDie(ERROR, $lang_forgot_passwd_php['password_reset_fail']);
      }

      $sql = "SELECT user_name, user_email"." FROM {$this->config->conf['TABLE_USERS']}" . " WHERE user_name='$user_name'" . " LIMIT 1";
      $this->db->query($sql);
      if (!$this->db->nf()) {
          cpgUtils::cpgDie(ERROR, $lang_forgot_passwd_php['err_unk_user']);
          return false;
      }
      $row = $this->db->fetchRow();
      $this->db->free();
      $user_email = $row['user_email'];
      $link = rtrim($this->config->conf['site_url'], '/') . '/forgotPasswd.php?resetKey=' . $reset_key;
      $template_vars = array('{SITE_NAME}'  => $this->config->conf['gallery_name'],
                             '{USER_NAME}'  => $user_name,
                             '{RESET_LINK}' => $link);

      cpgUtils::cpgMail($user_email, sprintf($lang_forgot_passwd_php['passwd_reminder_subject'], $this->config->conf['gallery_name']), nl2br(strtr($lang_forgot_password_notice_email, $template_vars)));

      cpgUtils::msgBox($lang_forgot_passwd_php['information'], $lang_forgot_passwd_php['notice_mail'], $lang_continue, 'index.php');

      //return true;
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

  /**
   * function to reset password and send confirmation mail to user
   */
  function resetNewPassword()
  {
      global $lang_forgot_passwd_php, $lang_new_password_confirm_email, $lang_continue;

      if (isset($_GET['resetKey']) && !empty($_GET['resetKey'])) {
          $resetKey = addslashes(substr($_GET['resetKey'], 0 , 32));
          if (strlen($resetKey) != 32) {
              cpgUtils::cpgDie(ERROR, $lang_forgot_passwd_php['password_reset_fail']);
          }

          $userNewPassword = $this->make_password();
          $sql = "UPDATE {$this->config->conf['TABLE_USERS']} SET user_password='".md5("$userNewPassword")."'" . " WHERE reset_key='$resetKey'";
          $this->db->query($sql);
          if (!$this->db->affectedRows()) {
              cpgUtils::cpgDie(ERROR, $lang_forgot_passwd_php['password_reset_fail']);
          }

          /**
           * fetch the user details to send mail
           */
          $sql = "SELECT user_name, user_email FROM {$this->config->conf['TABLE_USERS']} WHERE reset_key='$resetKey' LIMIT 1";
          $this->db->query($sql);

          if ($this->db->nf() > 0) {
              $row = $this->db->fetchRow();
              $this->db->free();
              $user_name     = $row['user_name'];
              $user_email    = $row['user_email'];
              $user_password = $userNewPassword;

              $site_link = $this->config->conf['site_url'];
              $template_vars = array('{SITE_NAME}'  => $this->config->conf['gallery_name'],
                                     '{USER_NAME}'  => $user_name,
                                     '{SITE_LINK}'  => $site_link,
                                     '{PASSWORD}'   => $user_password);

              cpgUtils::cpgMail($user_email, sprintf($lang_forgot_passwd_php['passwd_reminder_subject'], $this->config->conf['gallery_name']), nl2br(strtr($lang_new_password_confirm_email, $template_vars)));

              cpgUtils::msgBox($lang_forgot_passwd_php['information'], $lang_forgot_passwd_php['email_sent'], $lang_continue, 'index.php');
          } else {
              cpgUtils::cpgDie(ERROR, $lang_forgot_passwd_php['password_reset_fail']);
          }
       }
    }

}

 ?>
