<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2005 Coppermine Dev Team
  v1.1 originaly written by Gregory DEMAR

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation; either version 2 of the License, or
  (at your option) any later version.
  ********************************************
  Coppermine version: 1.4.1
  $Source$
  $Revision$
  $Author$
  $Date$
**********************************************/

define('COPPERMINE_VERSION', '1.4.1');
define('COPPERMINE_VERSION_STATUS', 'beta');

if (!defined('IN_COPPERMINE')) { die('Not in Coppermine...');}

// Store all reported errors in the $cpgdebugger
require_once('include/debugger.inc.php');

set_magic_quotes_runtime(0);
// used for timing purpose
$query_stats = array();
$queries = array();

// Perform database queries to calculate user's privileges based on group membership
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


function cpgGetMicroTime()
{
    list($usec, $sec) = explode(" ", microtime());
    return ((float)$usec + (float)$sec);
}
$cpg_time_start = cpgGetMicroTime();
// Do some cleanup in GET, POST and cookie data and un-register global vars
$HTML_SUBST = array('&' => '&amp;', '"' => '&quot;', '<' => '&lt;', '>' => '&gt;');
if (get_magic_quotes_gpc()) {
    if (is_array($_POST)) {
        foreach ($_POST as $key => $value) {
            if (!is_array($value))
                $_POST[$key] = strtr(stripslashes($value), $HTML_SUBST);
            if (isset($$key)) unset($$key);
        }
    }

    if (is_array($_GET)) {
        foreach ($_GET as $key => $value) {
            $_GET[$key] = strtr(stripslashes($value), $HTML_SUBST);
            if (isset($$key)) unset($$key);
        }
    }

    if (is_array($_COOKIE)) {
        foreach ($_COOKIE as $key => $value) {
            if (!is_array($value))
                $_COOKIE[$key] = stripslashes($value);
            if (isset($$key)) unset($$key);
        }
    }
} else {
    if (is_array($_POST)) {
        foreach ($_POST as $key => $value) {
            if (!is_array($value))
                $_POST[$key] = strtr($value, $HTML_SUBST);
            if (isset($$key)) unset($$key);
        }
    }

    if (is_array($_GET)) {
        foreach ($_GET as $key => $value) {
            $_GET[$key] = strtr($value, $HTML_SUBST);
            if (isset($$key)) unset($$key);
        }
    }

    if (is_array($_COOKIE)) {
        foreach ($_COOKIE as $key => $value) {
            if (isset($$key)) unset($$key);
        }
    }
}
// Initialise the $CONFIG array and some other variables
$CONFIG = array();
//$PHP_SELF = isset($_SERVER['REDIRECT_URL']) ? $_SERVER['REDIRECT_URL'] : $_SERVER['SCRIPT_NAME'];
$REFERER = urlencode($_SERVER['PHP_SELF'] . (isset($_SERVER['QUERY_STRING']) && $_SERVER['QUERY_STRING'] ? '?' . $_SERVER['QUERY_STRING'] : ''));
$ALBUM_SET = '';
$FORBIDDEN_SET = '';
$FORBIDDEN_SET_DATA = array();
$CURRENT_CAT_NAME = '';
$CAT_LIST = '';
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
// Define some constants
define('USER_GAL_CAT', 1);
define('FIRST_USER_CAT', 10000);
define('RANDPOS_MAX_PIC', 200);
define('TEMPLATE_FILE', 'template.html');
// Constants used by the cpg_die function
define('INFORMATION', 1);
define('ERROR', 2);
define('CRITICAL_ERROR', 3);

// Include config and functions files
if(file_exists('include/config.inc.php')){
  require 'include/config.inc.php';
} else {
  // error handling: if the config file doesn't exist go to install
  print <<< EOT
<html>
    <head>
      <title>Coppermine not installed yet</title>
      <meta http-equiv="refresh" content="10;url=install.php">
      <style type="text/css">
      <!--
      body { font-size: 12px; background: #FFFFFF; margin: 20%; color: black; font-family: verdana, arial, helvetica, sans-serif;}
      -->
      </style>
    </head>
    <body>
      <img src="images/coppermine_logo.png" alt="Coppermine Photo Gallery - Your Online Photo Gallery" /><br />
      Coppermine Photo Gallery seems not to be installed correctly, or you're running coppermine for the first time. You'll be redirected to the installer. If your browser doesn't support redirect, click <a href="install.php">here</a>.
    </body>
</html>
EOT;
  die();
}
require 'include/functions.inc.php';

$CONFIG['TABLE_PICTURES']        = $CONFIG['TABLE_PREFIX']."pictures";
$CONFIG['TABLE_ALBUMS']                = $CONFIG['TABLE_PREFIX']."albums";
$CONFIG['TABLE_COMMENTS']        = $CONFIG['TABLE_PREFIX']."comments";
$CONFIG['TABLE_CATEGORIES']        = $CONFIG['TABLE_PREFIX']."categories";
$CONFIG['TABLE_CONFIG']                = $CONFIG['TABLE_PREFIX']."config";
$CONFIG['TABLE_USERGROUPS']        = $CONFIG['TABLE_PREFIX']."usergroups";
$CONFIG['TABLE_VOTES']                = $CONFIG['TABLE_PREFIX']."votes";
$CONFIG['TABLE_USERS']                = $CONFIG['TABLE_PREFIX']."users";
$CONFIG['TABLE_BANNED']                = $CONFIG['TABLE_PREFIX']."banned";
$CONFIG['TABLE_EXIF']                = $CONFIG['TABLE_PREFIX']."exif";
$CONFIG['TABLE_FILETYPES']          = $CONFIG['TABLE_PREFIX']."filetypes";
$CONFIG['TABLE_ECARDS']          = $CONFIG['TABLE_PREFIX']."ecards";
$CONFIG['TABLE_TEMPDATA']        = $CONFIG['TABLE_PREFIX']."temp_data";
$CONFIG['TABLE_FAVPICS']        = $CONFIG['TABLE_PREFIX']."favpics";
$CONFIG['TABLE_BRIDGE']        = $CONFIG['TABLE_PREFIX']."bridge";
$CONFIG['TABLE_VOTE_STATS']        = $CONFIG['TABLE_PREFIX']."vote_stats";
$CONFIG['TABLE_HIT_STATS'] = $CONFIG['TABLE_PREFIX']."hit_stats";
// Connect to database
($CONFIG['LINK_ID'] = cpg_db_connect()) || die("<b>Coppermine critical error</b>:<br />Unable to connect to database !<br /><br />MySQL said: <b>" . mysql_error() . "</b>");
// Retrieve DB stored configuration
$results = cpg_db_query("SELECT * FROM {$CONFIG['TABLE_CONFIG']}");
while ($row = mysql_fetch_array($results)) {
    $CONFIG[$row['name']] = $row['value'];
} // while
mysql_free_result($results);

// Reference 'site_url' to 'ecards_more_pic_target'
$CONFIG['site_url'] =& $CONFIG['ecards_more_pic_target'];

// Include logger functions
include_once('include/logger.inc.php');

// Include media functions
require 'include/media.functions.inc.php';

// Check for GD GIF Create support
if ($CONFIG['thumb_method'] == 'im' || function_exists('imagecreatefromgif'))
  $CONFIG['GIF_support'] = 1;
else
  $CONFIG['GIF_support'] = 0;

// Include plugin API
require('include/plugin_api.inc.php');
if ($CONFIG['enable_plugins'] == 1) {
    CPGPluginAPI::load();
}

// Set UDB_INTEGRATION if enabled in admin
if ($CONFIG['bridge_enable'] == 1) {
    $BRIDGE = cpg_get_bridge_db_values();
    define('UDB_INTEGRATION', $BRIDGE['short_name']);
}

// User DB system
if (!CPGPluginAPI::action('UDB_INTEGRATION',false,CPG_EXEC_FIRST) && defined('UDB_INTEGRATION')) {
    require 'bridge/' . UDB_INTEGRATION . '.inc.php';
}

// Start output buffering
ob_start('cpg_filter_page_html');

// Parse cookie stored user profile
user_get_profile();

// Authenticate
if (defined('UDB_INTEGRATION')) {
    $cpg_udb->authenticate();
} else {
    if (!isset($_COOKIE[$CONFIG['cookie_name'] . '_uid']) || !isset($_COOKIE[$CONFIG['cookie_name'] . '_pass'])) {
        $cookie_uid = 0;
        $cookie_pass = '*';
    } else {
        $cookie_uid = (int)$_COOKIE[$CONFIG['cookie_name'] . '_uid'];
        $cookie_pass = substr(addslashes($_COOKIE[$CONFIG['cookie_name'] . '_pass']), 0, 32);
    }

    $sql = "SELECT * " . "FROM {$CONFIG['TABLE_USERS']} WHERE user_id='$cookie_uid'" . "AND user_active = 'YES' " . "AND user_password != '' " . "AND BINARY MD5(user_password) = '$cookie_pass'";
    $results = cpg_db_query($sql);

    if (mysql_num_rows($results)) {
        $USER_DATA = mysql_fetch_assoc($results);
        //unset($USER_DATA['user_password']);
        $USER_DATA['user_password'] = '********';

                $USER_DATA = $USER_DATA + cpgGetUserData($USER_DATA['user_group'], explode(',', $USER_DATA['user_group_list']));

        define('USER_ID', (int)$USER_DATA['user_id']);
        define('USER_NAME', $USER_DATA['user_name']);
        define('USER_GROUP', $USER_DATA['group_name']);
        define('USER_GROUP_SET', '(' . implode(',', $USER_DATA['groups']) . ')');
        define('USER_IS_ADMIN', (int)$USER_DATA['has_admin_access']);
        define('USER_CAN_SEND_ECARDS', (int)$USER_DATA['can_send_ecards']);
        define('USER_CAN_RATE_PICTURES', (int)$USER_DATA['can_rate_pictures']);
        define('USER_CAN_POST_COMMENTS', (int)$USER_DATA['can_post_comments']);
        define('USER_CAN_UPLOAD_PICTURES', (int)$USER_DATA['can_upload_pictures']);
        define('USER_CAN_CREATE_ALBUMS', (int)$USER_DATA['can_create_albums']);
        define('USER_UPLOAD_FORM', (int)$USER_DATA['upload_form_config']);
        define('CUSTOMIZE_UPLOAD_FORM', (int)$USER_DATA['custom_user_upload']);
        define('NUM_FILE_BOXES', (int)$USER_DATA['num_file_upload']);
        define('NUM_URI_BOXES', (int)$USER_DATA['num_URI_upload']);
        mysql_free_result($results);
    } else {
        $USER_DATA = cpgGetUserData(3, array(3));
        define('USER_ID', 0);
        define('USER_NAME', 'Anonymous');
        define('USER_GROUP', $USER_DATA['group_name']);
        define('USER_GROUP_SET', '(' . $USER_DATA['group_id'] . ')');
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
        mysql_free_result($results);
    }
}
// Test if admin mode
$USER['am'] = isset($USER['am']) ? (int)$USER['am'] : 0;
define('GALLERY_ADMIN_MODE', USER_IS_ADMIN && $USER['am']);
define('USER_ADMIN_MODE', USER_ID && USER_CAN_CREATE_ALBUMS && $USER['am'] && !GALLERY_ADMIN_MODE);

// Set error logging level
// Maze's new error report system
if (!USER_IS_ADMIN) {
    if (!$CONFIG['debug_mode']) $cpgdebugger->stop(); // useless to run debugger cos there's no output
    error_reporting(0); // hide all errors for visitors
}
/*
if ($CONFIG['debug_notice']==1 && ($CONFIG['debug_mode']==1 || ($CONFIG['debug_mode']==2 && GALLERY_ADMIN_MODE ))) {
    error_reporting (E_ALL);
} else {
    error_reporting (E_ALL ^ E_NOTICE);
}
*/

// Process theme selection if present in URI or in user profile
if (!empty($_GET['theme'])) {
    $USER['theme'] = $_GET['theme'];
}
// Load theme file
if (isset($USER['theme']) && !strstr($USER['theme'], '/') && is_dir('themes/' . $USER['theme'])) {
    $CONFIG['theme'] = strtr($USER['theme'], '$/\\:*?"\'<>|`', '____________');
} else {
    unset($USER['theme']);
}

if (!file_exists("themes/{$CONFIG['theme']}/theme.php")) $CONFIG['theme'] = 'classic';
require "themes/{$CONFIG['theme']}/theme.php";
require "include/themes.inc.php";  //All Fallback Theme Templates and Functions
$THEME_DIR = "themes/{$CONFIG['theme']}/";


// Process language selection if present in URI or in user profile or try
// autodetection if default charset is utf-8
if (!empty($_GET['lang'])) 
{
    $USER['lang'] = $_GET['lang'];
}

if (isset($USER['lang']) && !strstr($USER['lang'], '/') && file_exists('lang/' . $USER['lang'] . '.php')) 
{
    $CONFIG['default_lang'] = $CONFIG['lang'];          // Save default language
    $CONFIG['lang'] = strtr($USER['lang'], '$/\\:*?"\'<>|`', '____________');
} 
elseif ($CONFIG['charset'] == 'utf-8') 
{
    include('include/select_lang.inc.php');
    if (file_exists('lang/' . $USER['lang'] . '.php')) 
    {
        $CONFIG['default_lang'] = $CONFIG['lang'];      // Save default language
        $CONFIG['lang'] = $USER['lang'];
    }
}
else 
{
    unset($USER['lang']);
}

if (isset($CONFIG['default_lang']) && ($CONFIG['default_lang']==$CONFIG['lang'])) 
{
        unset($CONFIG['default_lang']);
}

if (!file_exists("lang/{$CONFIG['lang']}.php")) 
	$CONFIG['lang'] = 'english';

// We load the chosen language file
require "lang/{$CONFIG['lang']}.php";

// Include and process fallback here if lang <> english
if($CONFIG['lang'] != 'english' && $CONFIG['language_fallback']==1 ){
        require "include/langfallback.inc.php";
}


// See if the fav cookie is set else set it
if (isset($_COOKIE[$CONFIG['cookie_name'] . '_fav'])) {
    $FAVPICS = @unserialize(@base64_decode($_COOKIE[$CONFIG['cookie_name'] . '_fav']));
} else {
    $FAVPICS = array();
}

// If the person is logged in get favs from DB those in the DB have precedence
if (USER_ID > 0){
        $sql = "SELECT user_favpics FROM {$CONFIG['TABLE_FAVPICS']} WHERE user_id = ".USER_ID;
        $results = cpg_db_query($sql);
        $row = mysql_fetch_array($results);
        if (!empty($row['user_favpics'])){
                $FAVPICS = @unserialize(@base64_decode($row['user_favpics']));
        }else{
                $FAVPICS = array();
        }
}

/**
 * CPGPluginAPI::action('page_start',null)
 *
 * Executes page_start action on all plugins
 *
 * @param null
 * @return N/A
 **/

CPGPluginAPI::action('page_start',null);

// load the main template
load_template();
// Remove expired bans
$now = date('Y-m-d H:i:s', localised_timestamp());
cpg_db_query("DELETE FROM {$CONFIG['TABLE_BANNED']} WHERE expiry < '$now'");
// Check if the user is banned
$user_id = USER_ID;
$result = cpg_db_query("SELECT * FROM {$CONFIG['TABLE_BANNED']} WHERE (ip_addr='$raw_ip' OR ip_addr='$hdr_ip' OR user_id=$user_id) AND brute_force=0");
if (mysql_num_rows($result)) {
    pageheader($lang_error);
    msg_box($lang_info, $lang_errors['banned']);
    pagefooter();
    exit;
}
mysql_free_result($result);
// Retrieve the "private" album set
if (!GALLERY_ADMIN_MODE && $CONFIG['allow_private_albums']) get_private_album_set();

if (!USER_IS_ADMIN && $CONFIG['offline'] && !strstr($_SERVER["SCRIPT_NAME"],'login')) {
    pageheader($lang_errors['offline_title']);
    msg_box($lang_errors['offline_title'], $lang_errors['offline_text']);
    pagefooter();
    exit;
}

// kick user into user_admin_mode (needed to fix "removed user mode for users" when upgrading)
if (USER_ID && !USER_IS_ADMIN && !$USER['am']) { // user is logged in, but is not gallery admin and not in admin mode
    $USER['am'] = 1;
    pageheader($lang_info, "<META http-equiv=\"refresh\" content=\"1;url=$referer\">");
    msg_box($lang_info, 'Sending you to admin mode', $lang_continue, $referer);
    pagefooter();
    ob_end_flush();
    die();
}

?>