<?php
/**
 * cpgAuthAPI.php - API for Coppermine 1.4
 *
 *
 * Tested with Coppermine 1.4
 *
 * @copyright Aditya Mooley <adityamooley@sanisoft.com>, Abbas Ali <abbas@sanisoft.com>, Tarique Sani <tarique@sanisoft.com>
 * @license http://opensource.org/licenses/gpl-license.php GNU General Public License version 3 of the License.
 *
 */
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2008 Dev Team
  v1.1 originally written by Gregory DEMAR

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 3
  as published by the Free Software Foundation.

  ********************************************
  Coppermine version: 1.5.0
  $HeadURL$
  $Revision: 3513 $
  $LastChangedBy: gaugau $
  $Date: 2007-04-27 10:03:57 +0200 (Fr, 27 Apr 2007) $
**********************************************/

class cpgAPIAuth {

  function authenticate ()
  {
    global $FORBIDDEN_SET, $ALBUM_SET, $CONFIG, $USER_DATA;
    $username = addslashes($_POST['username']);
    $password = addslashes($_POST['password']);

    /**
     * If username and password are empty, the user is guest,
     * so don't execute the query for authentication. Just create the guest data and return true.
     */
    if (empty($username) && empty($password)) {
      $USER_DATA['user_id'] = 0;
      $USER_DATA['user_name'] = 'Guest';
      $USER_DATA['groups'][0] = 3;
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
    } else {
      // Check if encrypted passwords are enabled
      if ($CONFIG['enable_encrypted_passwords']) {
        $encpassword = md5($password);
      } else {
        $encpassword = $password;
      }

      // Check for user in users table
      $sql =  "SELECT user_id, user_name, user_password FROM {$CONFIG['TABLE_USERS']} WHERE ";
      $sql .= "user_name = '$username' AND BINARY user_password = '$encpassword' AND user_active = 'YES'";
      $result = cpg_db_query($sql);

      if (!mysql_num_rows($result)) {
        return false;
      }

      $row = mysql_fetch_array($result);
      $id = $row['user_id'];

      /**
       * Let's authenticate the user first
       */
      $query = "SELECT u.user_id AS id, u.user_name AS username, u.user_password AS password,
                u.user_group+100 AS group_id ".
              "FROM
                {$CONFIG['TABLE_USERS']} AS u INNER JOIN {$CONFIG['TABLE_USERGROUPS']} AS g ON u.user_group = g.group_id ".
              "WHERE
                u.user_id = '$id'";

      $results = cpg_db_query($query);

      if (!mysql_num_rows($results)) {
        return false;
      }

      $row = mysql_fetch_assoc($results);
      $this->load_user_data($row);
      mysql_free_result($results);
    }

    /**
     * Authentication is successful. Let's get the forbidden set
     */
    $user_group_set = '(' . implode(',', $USER_DATA['groups']) . ')';

    $USER_DATA = array_merge($USER_DATA, $this->get_user_data($USER_DATA['groups'][0], $USER_DATA['groups'], 3));

    define('USER_ID', $USER_DATA['user_id']);
    define('USER_NAME', addslashes($USER_DATA['user_name']));
    define('USER_GROUP', $USER_DATA['group_name']);
    define('USER_GROUP_SET', $user_group_set);
    define('USER_IS_ADMIN', $USER_DATA['has_admin_access']);
    define('GALLERY_ADMIN_MODE', USER_IS_ADMIN);
    define('USER_CAN_SEND_ECARDS', (int)$USER_DATA['can_send_ecards']);
    define('USER_CAN_RATE_PICTURES', (int)$USER_DATA['can_rate_pictures']);
    define('USER_CAN_POST_COMMENTS', (int)$USER_DATA['can_post_comments']);
    define('USER_CAN_UPLOAD_PICTURES', (int)$USER_DATA['can_upload_pictures']);
    define('USER_CAN_CREATE_ALBUMS', (int)$USER_DATA['can_create_albums']);
    define('USER_UPLOAD_FORM', (int)$USER_DATA['upload_form_config']);
    define('CUSTOMIZE_UPLOAD_FORM', (int)$USER_DATA['custom_user_upload']);
    define('NUM_FILE_BOXES', (int)$USER_DATA['num_file_upload']);
    define('NUM_URI_BOXES', (int)$USER_DATA['num_URI_upload']);

    $query = "SELECT aid
              FROM
                {$CONFIG['TABLE_ALBUMS']}
              WHERE
                visibility != '0' AND
                visibility !='".(FIRST_USER_CAT + USER_ID)."' AND
                visibility NOT IN ".USER_GROUP_SET;

    $result = cpg_db_query($query);

    if ((mysql_num_rows($result))) {
      $set ='';
      while($album=mysql_fetch_array($result)) {
        $set .= $album['aid'].',';
        $FORBIDDEN_SET_DATA[] = $album['aid'];
      } // while
      $FORBIDDEN_SET = "p.aid NOT IN (".substr($set, 0, -1).') ';
      $ALBUM_SET = 'AND aid NOT IN ('.substr($set, 0, -1).') ';
    } else {
      $FORBIDDEN_SET_DATA = array();
      $FORBIDDEN_SET = "";
      $ALBUM_SET = "";
    }
    mysql_free_result($result);

    return true;
  }

  function load_user_data($row)
  {

    global $USER_DATA;

    $USER_DATA['user_id'] = $row['id'];
    $USER_DATA['user_name'] = $row['username'];
    $USER_DATA['groups'] = $this->get_groups($row);
  }

  // Get groups of which user is member
  function get_groups(&$user)
  {
    global $CONFIG;
    $group_list = in_array($user['group_id'] - 100, array(1)) ? 1 : 2;
    $sql = "SELECT
              user_group_list
            FROM
              {$CONFIG['TABLE_USERS']} AS u
            WHERE
              user_id = '{$user['id']}' AND
            user_group_list <> '';";
    $result = cpg_db_query($sql, $this->link_id);

    if ( $row = mysql_fetch_array($result) ) {
      if ($row['user_group_list']) {
        $group_list .= ','.$row['user_group_list'];
      }
      mysql_free_result($result);
    }
    $all_groups = explode(',',$group_list);
    if ( $admin_groups = array_intersect(array(1), $all_groups) ) {
      $all_groups[0] = 1;
    }
    if ( !in_array($user['group_id'] - 100, $all_groups) ) {
      $all_groups[] = intval($user['group_id'] - 100);
    }
    return $all_groups;
  }

  // Perform database queries to calculate user's privileges based on group membership
  function get_user_data($pri_group, $groups, $default_group_id = 3)
  {
    global $CONFIG;

    foreach ($groups as $key => $val) {
      if (!is_numeric($val)) {
        unset ($groups[$key]);
      }
    }
    if (!in_array($pri_group, $groups)) {
      array_push($groups, $pri_group);
    }

    $query = "SELECT
                 MAX(group_quota) as disk_max, MIN(group_quota) as disk_min, " .
                "MAX(can_rate_pictures) as can_rate_pictures, MAX(can_send_ecards) as can_send_ecards, " .
                "MAX(upload_form_config) as ufc_max, MIN(upload_form_config) as ufc_min, " .
                "MAX(custom_user_upload) as custom_user_upload, MAX(num_file_upload) as num_file_upload, " .
                "MAX(num_URI_upload) as num_URI_upload, " .
                "MAX(can_post_comments) as can_post_comments, MAX(can_upload_pictures) as can_upload_pictures, " .
                "MAX(can_create_albums) as can_create_albums, " .
                "MAX(has_admin_access) as has_admin_access, " .
                "MIN(pub_upl_need_approval) as pub_upl_need_approval, MIN( priv_upl_need_approval) as  priv_upl_need_approval ".
                "FROM {$CONFIG['TABLE_USERGROUPS']} WHERE group_id in (" .  implode(",", $groups). ")";

    $result = cpg_db_query($query);

    if (mysql_num_rows($result)) {
      $USER_DATA = mysql_fetch_assoc($result);
      $result = cpg_db_query("SELECT group_name FROM  {$CONFIG['TABLE_USERGROUPS']} WHERE group_id= " . $pri_group);
      $temp_arr = mysql_fetch_assoc($result);
      $USER_DATA["group_name"] = $temp_arr["group_name"];
    } else {
      $result = cpg_db_query("SELECT * FROM {$CONFIG['TABLE_USERGROUPS']} WHERE group_id = $default_group_id");
      if (!mysql_num_rows($result)) {
        cpg_die(21);
      }
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

    if (get_magic_quotes_gpc() == 0) {
      $USER_DATA['group_name'] = mysql_escape_string($USER_DATA['group_name']);
    }
    return($USER_DATA);
  }
}
?>