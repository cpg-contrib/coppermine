<?php
// ------------------------------------------------------------------------- //
// Coppermine Photo Gallery 1.4.0                                            //
// ------------------------------------------------------------------------- //
// Copyright (C) 2002-2004 Gregory DEMAR                                     //
// http://www.chezgreg.net/coppermine/                                       //
// ------------------------------------------------------------------------- //
// Updated by the Coppermine Dev Team                                        //
// (http://coppermine.sf.net/team/)                                          //
// see /docs/credits.html for details                                        //
// ------------------------------------------------------------------------- //
// Updated by the Simon Liddicott                                            //
// ------------------------------------------------------------------------- //
// This program is free software; you can redistribute it and/or modify      //
// it under the terms of the GNU General Public License as published by      //
// the Free Software Foundation; either version 2 of the License, or         //
// (at your option) any later version.                                       //
// ------------------------------------------------------------------------- //
// Mambo Integration for Coppermine                                          //
// ------------------------------------------------------------------------- //
// $Id$
// ------------------------------------------------------------------------- //
// Modify the values below according to your Board installation if you don't //
// want to use the bridge manager integration by setting $use_bridgemgr = 0; //
// ------------------------------------------------------------------------- //

// Switch that allows overriding the bridge manager with hard-coded values
$use_bridgemgr = 1;

if ($use_bridgemgr == 0) { // the vars that are used when bridgemgr is disabled

    // database configuration
    define('MOS_DB_NAME', 'database'); // The name of the database used by the board
    define('MOS_DB_HOST', 'localhost'); // The name of the database server
    define('MOS_DB_USERNAME', 'username'); // The username to use to connect to the database
    define('MOS_DB_PASSWORD', 'password'); // The password to use to connect to the database

    // The web path to your Mambo directory
    // If your URL to your board is for example 'http://yoursite_name.com/mambo/',
    // you'll have to set the below var to '/mambo/'.
    define('MOS_WEB_PATH', '/mambo/');
    // ------------------------------------------------------------------------- //
    // You can keep the default values below if your instalation is standard
    // ------------------------------------------------------------------------- //

    // Prefix and names for the database tables
    define('MOS_TABLE_PREFIX', 'mos_'); // The prefix used for the DB tables
    define('MOS_USER_TABLE', 'users'); // The members table
    define('MOS_SESSION_TABLE', 'session'); // The session table
    define('MOS_GROUP_TABLE', 'core_acl_aro_groups'); // The groups table
    define('MOS_UGROUP_TABLE', 'core_acl_aro'); // The group/user table
    define('MOS_UGROUPMAP_TABLE', 'core_acl_groups_aro_map'); // The group/user table

// ------------------------------------------------------------------------- //
// Nothing to edit below this line
// ------------------------------------------------------------------------- //

} else { // the vars from the bridgemgr
    define('MOS_DB_NAME', $BRIDGE['db_database_name']); // The name of the database used by the board
    define('MOS_BD_HOST', $BRIDGE['db_hostname']); // The name of the database server
    define('MOS_DB_USERNAME', $BRIDGE['db_username']); // The username to use to connect to the database
    define('MOS_DB_PASSWORD', $BRIDGE['db_password']); // The password to use to connect to the database
    define('MOS_WEB_PATH', $BRIDGE['relative_path_of_forum_from_webroot']);

    // Prefix and names for the database tables
    define('MOS_TABLE_PREFIX', $BRIDGE['table_prefix']); // The prefix used for the DB tables
    define('MOS_USER_TABLE', $BRIDGE['user_table']); // The members table
    define('MOS_SESSION_TABLE', $BRIDGE['session_table']); // The session table
    define('MOS_GROUP_TABLE', $BRIDGE['group_table']); // The groups table
    define('MOS_UGROUP_TABLE', $BRIDGE['group_relation_table']); // The group/user table
    define('MOS_UGROUPMAP_TABLE', $BRIDGE['group_mapping_table']); // The group/user table
}

// Group definitions (shouldn't be edited unless you know what you're doing!)
    if ($use_bridgemgr != 0 && $BRIDGE['use_standard_groups'] == 0) {
    define('MOS_ADMIN_GROUP', $BRIDGE['admin_group']);
    define('MOS_MEMBERS_GROUP', $BRIDGE['member_group']);
    define('MOS_GUEST_GROUP', $BRIDGE['guest_group']);
    define('MOS_BANNED_GROUP', $BRIDGE['banned_group']);
} else {
    define('MOS_ADMIN_GROUP', 1);
    define('MOS_MEMBERS_GROUP', 2);
    define('MOS_GUEST_GROUP', 3);
    define('MOS_BANNED_GROUP', 4);
}
// Authenticate a user using cookies
function udb_authenticate()
{
    global $USER_DATA, $UDB_DB_LINK_ID, $UDB_DB_NAME_PREFIX, $CONFIG;
    // For error checking
    $CONFIG['TABLE_USERS'] = '**ERROR**';

    $default_group = array('group_id' => MOS_GUEST_GROUP,
        'group_name' => 'Unknown',
        'has_admin_access' => 0,
        'can_send_ecards' => 0,
        'can_rate_pictures' => 0,
        'can_post_comments' => 0,
        'can_upload_pictures' => 0,
        'can_create_albums' => 0,
        'pub_upl_need_approval' => 1,
        'priv_upl_need_approval' => 1,
        'upload_form_config' => 0,
        'custom_user_upload' => 0,
        'num_file_upload' => 0,
        'num_URI_upload' => 0,
        'has_admin_access' => 0,
        'can_see_all_albums' => 0,
        'groups' => array (MOS_GUEST_GROUP)
        );
    // Retrieve cookie stored login information
    if (!isset($_COOKIE['usercookie'])) {
        $cookie_uid = 0;
        $cookie_pass = '*';
    } else {
        $sessiondata = $_COOKIE['usercookie'];
        if (is_array($sessiondata)) {
            $cookie_uid = (isset($sessiondata['username'])) ? addslashes($sessiondata['username']) : 0;
            $cookie_pass = (isset($sessiondata['password'])) ? addslashes($sessiondata['password']) : '*';
                        //echo "User: ".$cookie_uid." Pass: ".$cookie_pass;
        } else {
            $cookie_uid = 0;
            $cookie_pass = '*';
        }
    }

        $sql = "SELECT u.id as user_id, u.username as user_name, u.gid as user_level " . "FROM " . $UDB_DB_NAME_PREFIX . MOS_TABLE_PREFIX . MOS_USER_TABLE . " AS u LEFT JOIN " . $UDB_DB_NAME_PREFIX . MOS_TABLE_PREFIX . MOS_SESSION_TABLE . " as s ON u.username = s.username " . "WHERE u.username='$cookie_uid' AND u.password='$cookie_pass' AND s.session_id IS NOT NULL AND block='0'";

    $result = cpg_db_query($sql, $UDB_DB_LINK_ID);

    if (mysql_num_rows($result)) {
        $USER_DATA = mysql_fetch_array($result);
        mysql_free_result($result);

        $USER_DATA['groups'] = array();

        if($USER_DATA['user_id'] == "-1") {
            define('USER_ID', 0);
        } else {
            define('USER_ID', (int)$USER_DATA['user_id']);
        }

        define('USER_NAME', $USER_DATA['user_name']);

        // Define the basic groups
        if ($USER_DATA['user_id'] == "-1") {

            array_push($USER_DATA['groups'], MOS_GUEST_GROUP);

        } else {

            if ($USER_DATA['user_level'] == 1) {
                array_push($USER_DATA['groups'], MOS_ADMIN_GROUP);
            }
            array_push($USER_DATA['groups'], MOS_MEMBERS_GROUP);

        }

        // Retrieve the groups the user is a member of
        $sql = "SELECT (ug.group_id + 5) as group_id " . "FROM " . $UDB_DB_NAME_PREFIX . MOS_TABLE_PREFIX . MOS_UGROUPMAP_TABLE . " as ug " . "LEFT JOIN " . $UDB_DB_NAME_PREFIX . MOS_TABLE_PREFIX . MOS_UGROUP_TABLE . " as g ON ug.aro_id = g.aro_id " . "WHERE g.value = " . USER_ID . "";
        $result = cpg_db_query($sql, $UDB_DB_LINK_ID);
        while ($row = mysql_fetch_array($result)) {
                array_push($USER_DATA['groups'], $row['group_id']);
        }
        mysql_free_result($result);

        $user_group_set = '(' . implode(',', $USER_DATA['groups']) . ')';
        // Default group data
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

        $USER_DATA = array_merge($USER_DATA, cpgGetUserData($USER_DATA['groups'][0], $USER_DATA['groups'], MOS_GUEST_GROUP));

        define('USER_GROUP', '');
        define('USER_GROUP_SET', $user_group_set);
        define('USER_IS_ADMIN', ($USER_DATA['user_level'] >= 24));
        define('USER_CAN_SEND_ECARDS', (int)$USER_DATA['can_send_ecards']);
        define('USER_CAN_RATE_PICTURES', (int)$USER_DATA['can_rate_pictures']);
        define('USER_CAN_POST_COMMENTS', (int)$USER_DATA['can_post_comments']);
        define('USER_CAN_UPLOAD_PICTURES', (int)$USER_DATA['can_upload_pictures']);
        define('USER_CAN_CREATE_ALBUMS', (int)$USER_DATA['can_create_albums']);
        define('USER_UPLOAD_FORM', (int)$USER_DATA['upload_form_config']);
        define('CUSTOMIZE_UPLOAD_FORM', (int)$USER_DATA['custom_user_upload']);
        define('NUM_FILE_BOXES', (int)$USER_DATA['num_file_upload']);
        define('NUM_URI_BOXES', (int)$USER_DATA['num_URI_upload']);
    } else {
        $USER_DATA = cpgGetUserData(MOS_GUEST_GROUP, array(), MOS_GUEST_GROUP);
        define('USER_ID', 0);
        define('USER_NAME', 'Anonymous');
        define('USER_GROUP_SET', '(' . MOS_GUEST_GROUP . ')');
        define('USER_IS_ADMIN', 0);
        define('USER_CAN_SEND_ECARDS', (int)$USER_DATA['can_send_ecards']);
        define('USER_CAN_RATE_PICTURES', (int)$USER_DATA['can_rate_pictures']);
        define('USER_CAN_POST_COMMENTS', (int)$USER_DATA['can_post_comments']);
        define('USER_CAN_UPLOAD_PICTURES', (int)$USER_DATA['can_upload_pictures']);
        define('USER_CAN_CREATE_ALBUMS', 0);
        define('USER_UPLOAD_FORM', (int)$USER_DATA['upload_form_config']);
        define('CUSTOMIZE_UPLOAD_FORM', (int)$USER_DATA['custom_user_upload']);
        define('NUM_FILE_BOXES', (int)$USER_DATA['num_file_upload']);
        define('NUM_URI_BOXES', (int)$USER_DATA['num_URI_upload']);
        mysql_free_result($result);
    }
}
// Retrieve the name of a user
function udb_get_user_name($uid)
{
    global $UDB_DB_LINK_ID, $UDB_DB_NAME_PREFIX, $CONFIG;

    $sql = "SELECT username as user_name " . "FROM " . $UDB_DB_NAME_PREFIX . MOS_TABLE_PREFIX . MOS_USER_TABLE . " " . "WHERE id = '$uid'";

    $result = cpg_db_query($sql, $UDB_DB_LINK_ID);

    if (mysql_num_rows($result)) {
        $row = mysql_fetch_array($result);
        mysql_free_result($result);
        return $row['user_name'];
    } else {
        return '';
    }
}
// Retrieve the name of a user (Added to fix banning w/ bb integration - Nibbler)
function udb_get_user_id($username)
{
    global $UDB_DB_LINK_ID, $UDB_DB_NAME_PREFIX, $CONFIG;

    $username = addslashes($username);

    $sql = "SELECT id as user_id " . "FROM " . $UDB_DB_NAME_PREFIX . MOS_TABLE_PREFIX . MOS_USER_TABLE . " " . "WHERE username = '$username'";

    $result = cpg_db_query($sql, $UDB_DB_LINK_ID);

    if (mysql_num_rows($result)) {
        $row = mysql_fetch_array($result);
        mysql_free_result($result);
        return $row['user_id'];
    } else {
        return '';
    }
}

// Redirect
function udb_redirect($target)
{
    header('Location: http://' . $_SERVER['HTTP_HOST'] . MOS_WEB_PATH . $target);
    exit;
}

// Register
function udb_register_page()
{
    $target = 'index.php?option=com_registration&task=register';
    udb_redirect($target);
}
// HTML code for login/logout redirection
DEFINE("REDIR1",'<html><body onload="document.redir.submit();"><form name="redir" method="post" action="');
DEFINE("REDIR2",'"><input type="hidden" name="redirect" value="cpg_redir.php" /></form></body></html>');
DEFINE('LOGIN_REDIR', 'login.php?redirect=cpg_redir.php');
DEFINE('LOGOUT_FLAG', '&logout=true');
// Login
function udb_login_page()
{
    udb_redirect("index.php");
}
// Logout
function udb_logout_page()
{
       udb_redirect("index.php?option=logout&return=index.php");
}
// Edit users
function udb_edit_users()
{
    $target = 'administrator/index.php';
    udb_redirect($target);
}
// Get user information
function udb_get_user_infos($uid)
{
    global $UDB_DB_NAME_PREFIX, $UDB_DB_LINK_ID;
    global $lang_register_php;

    $sql = "SELECT username as user_name, email as user_email, registerDate as user_regdate " . "FROM " . $UDB_DB_NAME_PREFIX . MOS_TABLE_PREFIX . MOS_USER_TABLE . " " . "WHERE id = '$uid'";
    $result = cpg_db_query($sql, $UDB_DB_LINK_ID);
    if (!mysql_num_rows($result)) cpg_die(ERROR, $lang_register_php['err_unk_user'], __FILE__, __LINE__);

    $user_data = mysql_fetch_array($result);
    $user_data['group_name'] = '';
    mysql_free_result($result);

    return $user_data;
}
// Edit user profile
function udb_edit_profile($uid)
{
    $target = 'index.php?option=com_user&task=UserDetails';
    udb_redirect($target);
}
// Query used to list users
function udb_list_users_query(&$user_count)
{
    global $CONFIG, $FORBIDDEN_SET;

    if ($FORBIDDEN_SET != "") $FORBIDDEN_SET = "AND $FORBIDDEN_SET";
    $sql = "SELECT (category - " . FIRST_USER_CAT . ") as user_id," . "        '???' as user_name," . "        COUNT(DISTINCT a.aid) as alb_count," . "        COUNT(DISTINCT pid) as pic_count," . "        MAX(pid) as thumb_pid " . "FROM {$CONFIG['TABLE_ALBUMS']} AS a " . "INNER JOIN {$CONFIG['TABLE_PICTURES']} AS p ON p.aid = a.aid " . "WHERE approved = 'YES' AND category > " . FIRST_USER_CAT . " $FORBIDDEN_SET " . "GROUP BY category " . "ORDER BY category ";
    $result = cpg_db_query($sql);

    $user_count = mysql_num_rows($result);

    return $result;
}

function udb_list_users_retrieve_data($result, $lower_limit, $count)
{
    global $CONFIG, $UDB_DB_NAME_PREFIX, $UDB_DB_LINK_ID;

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
    $sql = "SELECT id as user_id, username as user_name " . "FROM " . $UDB_DB_NAME_PREFIX . MOS_TABLE_PREFIX . MOS_USER_TABLE . " " . "WHERE id IN $user_id_set";
    $result = cpg_db_query($sql, $UDB_DB_LINK_ID);
    while ($row = mysql_fetch_array($result)) {
        $name[$row['user_id']] = $row['user_name'];
    }
    for($i = 0; $i < count($rowset); $i++) {
        $rowset[$i]['user_name'] = empty($name[$rowset[$i]['user_id']]) ? '???' : $name[$rowset[$i]['user_id']];
    }

    return $rowset;
}
// Group table synchronisation
function udb_synchronize_groups()
{
    global $CONFIG, $UDB_DB_NAME_PREFIX, $UDB_DB_LINK_ID;

    $MOS_groups = array(
        MOS_ADMIN_GROUP => 'Admin',
        MOS_MEMBERS_GROUP => 'Members',
        MOS_GUEST_GROUP => 'Guests',
        MOS_BANNED_GROUP => 'Banned',
        );

    $sql = "SELECT (ug.group_id + 5) as group_id, name " . "FROM " . $UDB_DB_NAME_PREFIX . MOS_TABLE_PREFIX . MOS_GROUP_TABLE . " as ug ";
    $result = cpg_db_query($sql, $UDB_DB_LINK_ID);
    while ($row = mysql_fetch_array($result)) {
        $MOS_groups[$row['group_id']] = $row['group_name'];
    }
    mysql_free_result($result);

    $result = cpg_db_query("SELECT group_id, group_name FROM {$CONFIG['TABLE_USERGROUPS']} WHERE 1");
    while ($row = mysql_fetch_array($result)) {
        $cpg_groups[$row['group_id']] = $row['group_name'];
    }
    mysql_free_result($result);
    // Scan Coppermine groups that need to be deleted
    foreach($cpg_groups as $c_group_id => $c_group_name) {
        if ((!isset($MOS_groups[$c_group_id]))) {
            cpg_db_query("DELETE FROM {$CONFIG['TABLE_USERGROUPS']} WHERE group_id = '" . $c_group_id . "' LIMIT 1");
            unset($cpg_groups[$c_group_id]);
        }
    }
    // Scan Mambo groups that need to be created inside Coppermine table
    foreach($MOS_groups as $i_group_id => $i_group_name) {
        if ((!isset($cpg_groups[$i_group_id]))) {
            cpg_db_query("INSERT INTO {$CONFIG['TABLE_USERGROUPS']} (group_id, group_name) VALUES ('$i_group_id', '" . addslashes($i_group_name) . "')");
            $cpg_groups[$i_group_id] = $i_group_name;
        }
    }
    // Update Group names
    foreach($MOS_groups as $i_group_id => $i_group_name) {
        if ($cpg_groups[$i_group_id] != $i_group_name) {
            cpg_db_query("UPDATE {$CONFIG['TABLE_USERGROUPS']} SET group_name = '" . addslashes($i_group_name) . "' WHERE group_id = '$i_group_id' LIMIT 1");
        }
    }
}
// Retrieve the album list used in gallery admin mode
function udb_get_admin_album_list()
{
    global $CONFIG, $UDB_DB_NAME_PREFIX, $UDB_DB_LINK_ID, $FORBIDDEN_SET;

    if (UDB_CAN_JOIN_TABLES) {
        $sql = "SELECT aid, CONCAT('(', username, ') ', a.title) AS title " . "FROM {$CONFIG['TABLE_ALBUMS']} AS a " . "INNER JOIN " . $UDB_DB_NAME_PREFIX . MOS_TABLE_PREFIX . MOS_USER_TABLE . " AS u ON category = (" . FIRST_USER_CAT . " + id) " . "ORDER BY a.title";
        return $sql;
    } else {
        $sql = "SELECT aid, IF(category > " . FIRST_USER_CAT . ", CONCAT('* ', title), CONCAT(' ', title)) AS title " . "FROM {$CONFIG['TABLE_ALBUMS']} " . "ORDER BY title";
        return $sql;
    }
}

function udb_util_filloptions()
{
    global $albumtbl, $picturetbl, $categorytbl, $lang_util_php;

    $usertbl = $UDB_DB_NAME_PREFIX.MOS_TABLE_PREFIX.MOS_USER_TABLE;

    $query = "SELECT aid, category, IF(username IS NOT NULL, CONCAT('(', username, ') ',a.title), CONCAT(' - ', a.title)) AS title " . "FROM $albumtbl AS a " . "LEFT JOIN $usertbl AS u ON category = (" . FIRST_USER_CAT . " + id) " . "ORDER BY category, a.title";
    $result = cpg_db_query($query, $UDB_DB_LINK_ID);
    // $num=mysql_numrows($result);
    echo '<select size="1" name="albumid">';

    while ($row = mysql_fetch_array($result)) {
        $sql = "SELECT name FROM $categorytbl WHERE cid = " . $row["category"];
        $result2 = cpg_db_query($sql);
        $row2 = mysql_fetch_array($result2);

        print "<option value=\"" . $row["aid"] . "\">" . $row2["name"] . $row["title"] . "</option>\n";
    }

    print '</select> (3)';
    print '&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="'.$lang_util_php['submit_form'].'" class="submit" /> (4)';
    print '</form>';
}

// ------------------------------------------------------------------------- //
// Define wheter we can join tables or not in SQL queries (same host & same db or user)
define('UDB_CAN_JOIN_TABLES', (MOS_DB_HOST == $CONFIG['dbserver'] && (MOS_DB_NAME == $CONFIG['dbname'] || MOS_DB_USERNAME == $CONFIG['dbuser'])));
// define('UDB_CAN_JOIN_TABLES', false);
// Connect to Mambo database if necessary
$UDB_DB_LINK_ID = 0;
$UDB_DB_NAME_PREFIX = MOS_DB_NAME ? '`' . MOS_DB_NAME . '`.' : '';
if (!UDB_CAN_JOIN_TABLES) {
    $UDB_DB_LINK_ID = @mysql_connect(MOS_DB_HOST, MOS_DB_USERNAME, MOS_DB_PASSWORD);
    if (!$UDB_DB_LINK_ID) die("<b>Coppermine critical error</b>:<br />Unable to connect to Mambo database !<br /><br />MySQL said: <b>" . mysql_error() . "</b>");
}

?>