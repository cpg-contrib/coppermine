<?php
// ------------------------------------------------------------------------- //
// Coppermine Photo Gallery 1.3.0                                            //
// ------------------------------------------------------------------------- //
// Copyright (C) 2002,2003 Gregory DEMAR                                     //
// http://www.chezgreg.net/coppermine/                                       //
// ------------------------------------------------------------------------- //
// Updated by the Coppermine Dev Team                                        //
// (http://coppermine.sf.net/team/)                                          //
// see /docs/credits.html for details                                        //
// ------------------------------------------------------------------------- //
// This program is free software; you can redistribute it and/or modify      //
// it under the terms of the GNU General Public License as published by      //
// the Free Software Foundation; either version 2 of the License, or         //
// (at your option) any later version.                                       //
// ------------------------------------------------------------------------- //
// As a special exception, the copyright holders of Coppermine Photo Gallery //
// give you permission to link Coppermine Photo Gallery with independent     //
// modules that communicate with SimpleMachines Forum solely through this    //
// 'bridge file' interface, regardless of the license terms of these         //
// independent modules, and to copy and distribute the resulting combined    //
// work under terms of your choice, provided that every copy of the combined //
// work is accompanied by a complete copy of the source code of Coppermine   //
// Photo Gallery (the version of Coppermine Photo Gallery used to produce    //
// the combined work), being distributed under the terms of the GNU General  //
// Public License plus this exception.  An independent module is a module    //
// which is not derived from or based on Coppermine Photo Gallery.           //
//                                                                           //
// Note that people who make modified versions of Coppermine Photo Gallery   //
// are not obligated to grant this special exception for their modified      //
// versions; it is their choice whether to do so.  The GNU General Public    //
// License gives permission to release a modified version without this       //
// exception; this exception also makes it possible to release a modified    //
// version which carries forward this exception.                             //
// ------------------------------------------------------------------------- //
// $Id$
// ------------------------------------------------------------------------- //
// Simple Machines Forum Integration for Coppermine                          //
// V0.5Beta                                                                  //
// ------------------------------------------------------------------------- //
// Modify the value below according to your Board installation               //
// ------------------------------------------------------------------------- //

// Set this to the location of your Settings file:
$path = '../smf';

// Comment this out if you want to default user's group to 'Registered'
// rather than using Post Count based groups.
define('USE_POST_GROUPS', 1);

// Set the names of implied groups here
define('CM_ADMIN_GROUP_NAME', 'Administrators');
define('CM_MEMBERS_GROUP_NAME', 'Registered');
define('CM_GUEST_GROUP_NAME', 'Anonymous');
define('CM_BANNED_GROUP_NAME', 'Banned');
define('CM_GMOD_GROUP_NAME', 'Global Moderators');

// ------------------------------------------------------------------------- //
// Nothing to edit below this line
// ------------------------------------------------------------------------- //

// Otherwise, try to autodetect SMF path if not set:
if (substr($path, -1) == '/')
        $path = substr($path, 0, -1);

$possible_paths = array($path, '..', '../forum', '../forums',
'../community', '../yabbse', '../smf');

$correct = 0;
while (!file_exists($possible_paths[$correct] . '/Settings.php') &&
count($possible_paths) > $correct)
        $correct++;

require_once($possible_paths[$correct] . '/Settings.php');

define ('SMF', 1);

// other includes
cm_include_smf_funcs("$sourcedir/Load.php", array("reloadSettings", "md5_hmac", "loadUserSettings"));
cm_include_smf_funcs("$sourcedir/Subs.php", array("updateMemberData", "updateStats", "updateSettings"));

// database configuration
define('SMF_DB_NAME', $db_name); // The name of the database used by the board
define('SMF_DB_HOST', $db_server); // The name of the database server
define('SMF_DB_USERNAME', $db_user); // The username to use to connect to the database
define('SMF_DB_PASSWORD', $db_passwd); // The password to use to connect to the database

// The web path to your SMF Board directory
define('SMF_WEB_PATH', "$boardurl/");

// The Name of the Cookie used for SMF logon
define('SMF_COOKIE_NAME', $cookiename);

// Prefix for the database tables
define('SMF_TABLE_PREFIX', $db_prefix); // Table Prefix

// Names for the database tables
define('SMF_USER_TABLE', 'members'); // The members table
define('SMF_GROUP_TABLE', 'membergroups'); // The groups table

// Group definitions (default values used by the board)
define('SMF_GMOD_GROUP', 2);
define('SMF_BANNED_GROUP', -3);
define('SMF_GUEST_GROUP', -1);
define('SMF_MEMBERS_GROUP', -2);
define('SMF_ADMIN_GROUP', 1);

define('SMF_PASSWD_SEED', 'ys');

function cm_include_smf_funcs ($source_file, $funcs)
{
        $fp = fopen ($source_file, "r");
        $len = filesize($source_file);

        $source = fread($fp, $len);
        fclose ($fp);
        $oe = error_reporting(E_ERROR | E_WARNING | E_PARSE);

        foreach ($funcs as $index => $func) {
                preg_match('/\n\s*(function ' . $func . '.*?)\n\s*(function|\?>)/si', $source, $f);
                $func = preg_replace("/db_query/s", "cm_db_query", $f[1]);
                eval ($func);
        }

        error_reporting ($oe);
}

function cm_get_user_data($pri_group, $groups)
{
                global $CONFIG;

            $default_group = array('group_id' => SMF_GUEST_GROUP,
        'group_name' => CM_GUEST_GROUP_NAME,
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
        );

        if (isset($groups[0])) {
                $result = db_query("SELECT MAX(group_quota) as disk_max, MIN(group_quota) as disk_min, " .
                        "MAX(can_rate_pictures) as can_rate_pictures, MAX(can_send_ecards) as can_send_ecards, " .
                        "MAX(upload_form_config) as ufc_max, MIN(upload_form_config) as ufc_min, " .
                        "MAX(custom_user_upload) as custom_user_upload, MAX(num_file_upload) as num_file_upload, " .
                        "MAX(num_URI_upload) as num_URI_upload, " .
                        "MAX(can_post_comments) as can_post_comments, MAX(can_upload_pictures) as can_upload_pictures, " .
                        "MAX(can_create_albums) as can_create_albums, " .
                        "MIN(pub_upl_need_approval) as pub_upl_need_approval, MIN( priv_upl_need_approval) as  priv_upl_need_approval ".
                        "FROM {$CONFIG['TABLE_USERGROUPS']} WHERE group_id=" .  implode(" or group_id=", $groups));

                if (mysql_num_rows($result)) {
            $USER_DATA = mysql_fetch_array($result);
                } else {
                        $USER_DATA = $default_group;
                }
                mysql_free_result($result);

                $result = db_query("SELECT group_name FROM  {$CONFIG['TABLE_USERGROUPS']} WHERE group_id= " . $pri_group);
                $temp_arr = mysql_fetch_array($result);

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
                $USER_DATA["group_name"] = $temp_arr["group_name"];
                $USER_DATA["group_id"] = $pri_group;
                mysql_free_result($result);

        } else {
                $USER_DATA = default_group;
        }

        if (get_magic_quotes_gpc() == 0)
            $USER_DATA['group_name'] = mysql_escape_string($USER_DATA['group_name']);

        return($USER_DATA);
}

function cm_db_query ($query, $other, $other2)
{
        return db_query($query);
}

// Authenticate a user using cookies

function udb_authenticate()
{
    global $HTTP_COOKIE_VARS, $USER_DATA, $UDB_DB_LINK_ID, $UDB_DB_NAME_PREFIX, $CONFIG;
    global $HTTP_SERVER_VARS, $HTTP_X_FORWARDED_FOR, $HTTP_PROXY_USER, $REMOTE_ADDR;
    global $password, $username, $pwseed, $settings, $ID_MEMBER, $realname, $txt, $user_info, $user_settings;

    $pwseed = SMF_PASSWD_SEED;

        session_start();

        reloadSettings();
        LoadUserSettings();

    // For error checking
    $CONFIG['TABLE_USERS'] = '**ERROR**';

    // Permissions for a default group
    $default_group = array('group_id' => SMF_GUEST_GROUP,
        'group_name' => CM_GUEST_GROUP_NAME,
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
        );

    // get first 50 chars
    $HTTP_USER_AGENT = substr($HTTP_SERVER_VARS['HTTP_USER_AGENT'], 0, 50);
    $REMOTE_ADDR = substr($HTTP_SERVER_VARS['REMOTE_ADDR'], 0, 50);

    /* If the user is a guest, initialize all the critial user settings */
    if (!$ID_MEMBER) {
        $result = db_query("SELECT * FROM {$CONFIG['TABLE_USERGROUPS']} WHERE group_id = " . SMF_GUEST_GROUP);
        if (!mysql_num_rows($result)) {
            $USER_DATA = $default_group;
        } else {
            $USER_DATA = mysql_fetch_array($result);
        }
        define('USER_ID', 0);
        define('USER_NAME', 'Anonymous');
        define('USER_GROUP_SET', '(' . SMF_GUEST_GROUP . ')');
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
    } else {
                if ($user_settings['ID_GROUP']){
                $cm_group_id = $user_settings['ID_GROUP'];
        }  else if ($user_settings['ID_POST_GROUP'] && defined ('USE_POST_GROUPS')){
                $cm_group_id = $user_settings['ID_POST_GROUP'];
        } else {
                $cm_group_id = SMF_MEMBERS_GROUP;
        }

        // Retrieve group information
                $USER_DATA = cm_get_user_data($cm_group_id, $user_info['groups']);

        define('USER_ID', $ID_MEMBER);
        define('USER_NAME', $user_info['name']);
        define('SMF_USER_NAME', $user_info['username']);
        define('USER_GROUP', $USER_DATA['group_name']);
        define('USER_GROUP_SET', '(' . $USER_DATA['group_id'] . ')');
        define('USER_IS_ADMIN', $user_info['is_admin']);
        define('USER_CAN_SEND_ECARDS', (int)$USER_DATA['can_send_ecards']);
        define('USER_CAN_RATE_PICTURES', (int)$USER_DATA['can_rate_pictures']);
        define('USER_CAN_POST_COMMENTS', (int)$USER_DATA['can_post_comments']);
        define('USER_CAN_UPLOAD_PICTURES', (int)$USER_DATA['can_upload_pictures']);
        define('USER_CAN_CREATE_ALBUMS', (int)$USER_DATA['can_create_albums']);
        define('USER_UPLOAD_FORM', (int)$USER_DATA['upload_form_config']);
        define('CUSTOMIZE_UPLOAD_FORM', (int)$USER_DATA['custom_user_upload']);
        define('NUM_FILE_BOXES', (int)$USER_DATA['num_file_upload']);
        define('NUM_URI_BOXES', (int)$USER_DATA['num_URI_upload']);
    }
}

// Retrieve the name of a user
function udb_get_user_name($uid)
{
    global $UDB_DB_LINK_ID, $UDB_DB_NAME_PREFIX, $CONFIG;

    $sql = "SELECT realName as user_name " . "FROM " . $UDB_DB_NAME_PREFIX . SMF_TABLE_PREFIX . SMF_USER_TABLE . " " . "WHERE ID_MEMBER = '$uid'";

    $result = db_query($sql, $UDB_DB_LINK_ID);

    if (mysql_num_rows($result)) {
        $row = mysql_fetch_array($result);
        mysql_free_result($result);
        return $row['user_name'];
    } else {
        return '';
    }
}

// Redirect
function udb_redirect($target)
{
    header('Location: ' . SMF_WEB_PATH . $target);
    exit;
}

// Register
function udb_register_page()
{
    $target = 'index.php?action=register';
    udb_redirect($target);
}

// Login
function udb_login_page()
{
    $target = 'index.php?action=login';
    udb_redirect($target);
}

// Logout
function udb_logout_page()
{
    $target = 'index.php?&action=logout;sesc=' . $_SESSION['rand_code'];
    udb_redirect($target);
}

// Edit users
function udb_edit_users()
{
    $target = 'index.php?action=mlist';
    udb_redirect($target);
}

// Get user information
function udb_get_user_infos($uid)
{
    global $CONFIG, $UDB_DB_NAME_PREFIX, $UDB_DB_LINK_ID;
    global $lang_register_php;

    $sql = "SELECT realName as user_name, ID_GROUP as mgroup, ID_POST_GROUP, emailAddress as user_email, dateRegistered as user_regdate, " . "websiteURL as user_website " . "FROM " . $UDB_DB_NAME_PREFIX . SMF_TABLE_PREFIX . SMF_USER_TABLE . " " . "WHERE ID_MEMBER = '$uid'";
    $result = db_query($sql, $UDB_DB_LINK_ID);

    if (!mysql_num_rows($result)) cpg_die(ERROR, $lang_register_php['err_unk_user'], __FILE__, __LINE__);
    $user_data = mysql_fetch_array($result);
    mysql_free_result($result);

    $user_data['user_occupation'] = '';
    $user_data['user_location'] = '';
    $user_data['user_interests'] = '';

    if (!$user_data['mgroup'] && defined('USE_POST_GROUPS')) {
            $user_data['mgroup'] = $user_data['ID_POST_GROUP'];
    }

        $sql = "SELECT groupName " . "FROM " . $UDB_DB_NAME_PREFIX . SMF_TABLE_PREFIX . SMF_GROUP_TABLE . " " . "WHERE ID_GROUP = '{$user_data['mgroup']}' ";
    $result = db_query($sql);

        if (mysql_num_rows($result)) {
            $row = mysql_fetch_array($result);
            $user_data['group_name'] = $row['groupName'];
    } else {
            $user_data['group_name'] = CM_MEMBERS_GROUP_NAME;
    }
    mysql_free_result($result);

    return $user_data;
}

// Edit user profile
function udb_edit_profile($uid)
{
    $target = 'index.php?action=profile;u=' . USER_ID;
    udb_redirect($target);
}

// Query used to list users
function udb_list_users_query(&$user_count)
{
    global $CONFIG, $FORBIDDEN_SET;

    if ($FORBIDDEN_SET != "") $FORBIDDEN_SET = "AND $FORBIDDEN_SET";
    $sql = "SELECT (category - " . FIRST_USER_CAT . ") as user_id," . "                '???' as user_name," . "                COUNT(DISTINCT a.aid) as alb_count," . "                COUNT(DISTINCT pid) as pic_count," . "                MAX(pid) as thumb_pid " . "FROM {$CONFIG['TABLE_ALBUMS']} AS a " . "INNER JOIN {$CONFIG['TABLE_PICTURES']} AS p ON p.aid = a.aid " . "WHERE approved = 'YES' AND category > " . FIRST_USER_CAT . " " . "$FORBIDDEN_SET " . "GROUP BY category " . "ORDER BY category ";
    $result = db_query($sql);

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
    $sql = "SELECT ID_MEMBER as user_id, realName as user_name " . "FROM " . $UDB_DB_NAME_PREFIX . SMF_TABLE_PREFIX . SMF_USER_TABLE . " " . "WHERE ID_MEMBER IN $user_id_set";
    $result = db_query($sql, $UDB_DB_LINK_ID);
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

    $result = db_query("SELECT ID_GROUP as usergroupid, groupName as title FROM " . $UDB_DB_NAME_PREFIX . SMF_TABLE_PREFIX . SMF_GROUP_TABLE , $UDB_DB_LINK_ID);
    while ($row = mysql_fetch_array($result)) {
        $SMF_groups[$row['usergroupid']] = $row['title'];
    }
    mysql_free_result($result);

    $SMF_groups[SMF_MEMBERS_GROUP] = CM_MEMBERS_GROUP_NAME;
    $SMF_groups[SMF_GUEST_GROUP] = CM_GUEST_GROUP_NAME;

    $result = db_query("SELECT group_id, group_name FROM {$CONFIG['TABLE_USERGROUPS']} WHERE 1");
    while ($row = mysql_fetch_array($result)) {
        $cpg_groups[$row['group_id']] = $row['group_name'];
    }
    mysql_free_result($result);
    // Scan Coppermine groups that need to be deleted
    foreach($cpg_groups as $c_group_id => $c_group_name) {
        if ((!isset($SMF_groups[$c_group_id]))) {
            db_query("DELETE FROM {$CONFIG['TABLE_USERGROUPS']} WHERE group_id = '" . $c_group_id . "' LIMIT 1");
            unset($cpg_groups[$c_group_id]);
        }
    }
    // Scan Board groups that need to be created inside Coppermine table
    foreach($SMF_groups as $i_group_id => $i_group_name) {
        if ((!isset($cpg_groups[$i_group_id]))) {
            db_query("INSERT INTO {$CONFIG['TABLE_USERGROUPS']} (group_id, group_name, group_quota) VALUES ('$i_group_id', '" . addslashes($i_group_name) . "', 1)");
            $cpg_groups[$i_group_id] = $i_group_name;
        }
    }
    // Update Group names

    foreach($SMF_groups as $i_group_id => $i_group_name){
            if ($cpg_groups[$i_group_id] != $i_group_name) {
                    db_query("UPDATE {$CONFIG['TABLE_USERGROUPS']} SET group_name = '".addslashes($i_group_name)."' WHERE group_id = '$i_group_id' LIMIT 1");
            }
    }
}

// Retrieve the album list used in gallery admin mode
function udb_get_admin_album_list()
{
    global $CONFIG, $UDB_DB_NAME_PREFIX, $UDB_DB_LINK_ID, $FORBIDDEN_SET;

    if (UDB_CAN_JOIN_TABLES) {
        $sql = "SELECT aid, CONCAT('(', realName, ') ', a.title) AS title " . "FROM {$CONFIG['TABLE_ALBUMS']} AS a " . "INNER JOIN " . $UDB_DB_NAME_PREFIX . SMF_TABLE_PREFIX . SMF_USER_TABLE . " AS u ON category = (" . FIRST_USER_CAT . " + ID_MEMBER) " . "ORDER BY title";
        return $sql;
    } else {
        $sql = "SELECT aid, IF(category > " . FIRST_USER_CAT . ", CONCAT('* ', title), CONCAT(' ', title)) AS title " . "FROM {$CONFIG['TABLE_ALBUMS']} " . "ORDER BY title";
        return $sql;
    }
}

// ------------------------------------------------------------------------- //

// Define wheter we can join tables or not in SQL queries (same host & same db or user)
define('UDB_CAN_JOIN_TABLES', (SMF_DB_HOST == $CONFIG['dbserver'] && (SMF_DB_NAME == $CONFIG['dbname'] || SMF_DB_USERNAME == $CONFIG['dbuser'])));
// Connect to SMF Database if necessary
$UDB_DB_LINK_ID = 0;
$UDB_DB_NAME_PREFIX = SMF_DB_NAME ? '`' . SMF_DB_NAME . '`.' : '';
if (!UDB_CAN_JOIN_TABLES) {
    $UDB_DB_LINK_ID = @mysql_connect(SMF_BD_HOST, SMF_DB_USERNAME, SMF_DB_PASSWORD);
    if (!$UDB_DB_LINK_ID) die("<b>Coppermine critical error</b>:<br />Unable to connect to SMF Board database !<br /><br />MySQL said: <b>" . mysql_error() . "</b>");
}
?>
