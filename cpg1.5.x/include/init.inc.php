<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2007 Coppermine Dev Team
  v1.1 originally written by Gregory DEMAR

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation; either version 2 of the License, or
  (at your option) any later version.
  ********************************************
  Coppermine version: 1.5.0
  $HeadURL$
  $Revision$
  $LastChangedBy$
  $Date$
**********************************************/

define('COPPERMINE_VERSION', '1.5.0');
define('COPPERMINE_VERSION_STATUS', 'alpha');

if (!defined('IN_COPPERMINE')) { die('Not in Coppermine...');}

function cpgGetMicroTime()
{
    list($usec, $sec) = explode(" ", microtime());
    return ((float)$usec + (float)$sec);
}
$cpg_time_start = cpgGetMicroTime();

function cpg_globals_clean($var) {
    global $HTML_SUBST; //$HTML_SUBST should be in the global scope so it's effects can be reversed if necessary.
    $HTML_SUBST = array('&' => '&amp;', '"' => '&quot;', '<' => '&lt;', '>' => '&gt;', '%26' => '&amp;', '%22' => '&quot;', '%3C' => '&lt;', '%3E' => '&gt;','%27' => '&#39;', "'" => '&#39;');
    static $magicquotes;
    if (!isset($magicquotes)) $magicquotes=get_magic_quotes_gpc();

    $clean=array();
    if (is_array($var)) {
        foreach ($var as $key => $value) {
            $clean[cpg_globals_clean($key)] = cpg_globals_clean($value);
        }
    } else {
        if ($magicquotes) $var=stripslashes($var);
        $clean = strtr($var, $HTML_SUBST);
    }
    return $clean;
}

/**
 * If register_globals is ON, ensure no unexpected globals are defined.
 * ie. We'll try to emulate a register_globals OFF environment.
 *
 * This function also calls cpg_globals_clean to normalize GPC magic_quotes and
 * translate characters known for sql and html injection.
 *
 * All variables used before calling init.inc.php are considered hostile
 * and will be discarded. Those variables instantiated after or during init.inc.php
 * should be considered less hostile.
 */


$superglobals = array(
   '_ENV',        'HTTP_ENV_VARS',
   '_GET',        'HTTP_GET_VARS',
   '_POST',    'HTTP_POST_VARS',
   '_COOKIE',    'HTTP_COOKIE_VARS',
   '_FILES',    'HTTP_FILES_VARS',
   '_SERVER',    'HTTP_SERVER_VARS',
   '_SESSION',    'HTTP_SESSION_VARS',
   '_REQUEST',
);
$knownglobals = array(
   //
   // Known PHP Reserved globals and superglobals:
   //
   '_ENV',        'HTTP_ENV_VARS',
   '_GET',        'HTTP_GET_VARS',
   '_POST',    'HTTP_POST_VARS',
   '_COOKIE',    'HTTP_COOKIE_VARS',
   '_FILES',    'HTTP_FILES_VARS',
   '_SERVER',    'HTTP_SERVER_VARS',
   '_SESSION',    'HTTP_SESSION_VARS',
   '_REQUEST',

   //
   // Global variables used by this code snippet:
   //
   'superglobals',
   'knownglobals',
   'superglobal',
   'global',
   'void',

   //
   // Known global variables defined before this code snippet is reached.
   //
   'cpg_time_start',
);

foreach( $superglobals as $superglobal )
{
    /**
     * $$superglobal variable variable syntax is intended.
     */
    if (isset($$superglobal)) { //longvars and sessions may not be set
        if(is_array($$superglobal)) { //every valid superglobal is an array
           foreach( $$superglobal as $global => $void )
           {
               if( !in_array($global, $knownglobals) )
               {
                   unset($GLOBALS[$global]);
               }
           }
           $$superglobal=cpg_globals_clean($$superglobal);
        } else {
            unset($$superglobal); //it is not a valid superglobal
        }
    }
}
unset($superglobals,$superglobal,$global,$void,$knownglobals);  //leave no trace

// Store all reported errors in the $cpgdebugger
require_once('include/debugger.inc.php');

set_magic_quotes_runtime(0);
// used for timing purpos
$query_stats = array();
$queries = array();

// Initialise the $CONFIG array and some other variables
$CONFIG = array();
//$PHP_SELF = isset($_SERVER['REDIRECT_URL']) ? $_SERVER['REDIRECT_URL'] : $_SERVER['SCRIPT_NAME'];

$PHP_SELF = '';
$ORIGINAL_PHP_SELF = $_SERVER['PHP_SELF'];
$possibilities = array('REDIRECT_URL', 'PHP_SELF', 'SCRIPT_URL', 'SCRIPT_NAME','SCRIPT_FILENAME');
foreach ($possibilities as $test){
  if (isset($_SERVER[$test]) && preg_match('/([^\/]+\.php)$/', $_SERVER[$test], $matches)){
    $PHP_SELF = $_SERVER['PHP_SELF'] = $_SERVER['SCRIPT_NAME'] = $matches[1];
    break;
  }
}

$REFERER = urlencode($_SERVER['PHP_SELF'] . (isset($_SERVER['QUERY_STRING']) && $_SERVER['QUERY_STRING'] ? '?' . $_SERVER['QUERY_STRING'] : ''));
$ALBUM_SET = '';
$META_ALBUM_SET = '';
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

if (!preg_match('/^[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}$/', $raw_ip)) $raw_ip = '0.0.0.0';
if (!preg_match('/^[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}$/', $hdr_ip)) $hdr_ip = '0.0.0.0';

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
        ob_start();
        require_once 'include/config.inc.php';
        ob_clean();
} else {
  // error handling: if the config file doesn't exist go to install
  die('<html>
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
      Coppermine Photo Gallery seems not to be installed correctly, or you are running coppermine for the first time. You\'ll be redirected to the installer. If your browser doesn\'t support redirect, click <a href="install.php">here</a>.
    </body>
</html>');
}
$mb_utf8_regex = '[\xE1-\xEF][\x80-\xBF][\x80-\xBF]|\xE0[\xA0-\xBF][\x80-\xBF]|[\xC2-\xDF][\x80-\xBF]';
require 'include/functions.inc.php';
# see http://php.net/mbstring for details
if (function_exists('mb_internal_encoding')) { mb_internal_encoding('UTF-8'); }

$CONFIG['TABLE_PICTURES']      = $CONFIG['TABLE_PREFIX'].'pictures';
$CONFIG['TABLE_ALBUMS']        = $CONFIG['TABLE_PREFIX'].'albums';
$CONFIG['TABLE_COMMENTS']      = $CONFIG['TABLE_PREFIX'].'comments';
$CONFIG['TABLE_CATEGORIES']    = $CONFIG['TABLE_PREFIX'].'categories';
$CONFIG['TABLE_CONFIG']        = $CONFIG['TABLE_PREFIX'].'config';
$CONFIG['TABLE_USERGROUPS']    = $CONFIG['TABLE_PREFIX'].'usergroups';
$CONFIG['TABLE_VOTES']         = $CONFIG['TABLE_PREFIX'].'votes';
$CONFIG['TABLE_USERS']         = $CONFIG['TABLE_PREFIX'].'users';
$CONFIG['TABLE_BANNED']        = $CONFIG['TABLE_PREFIX'].'banned';
$CONFIG['TABLE_EXIF']          = $CONFIG['TABLE_PREFIX'].'exif';
$CONFIG['TABLE_FILETYPES']     = $CONFIG['TABLE_PREFIX'].'filetypes';
$CONFIG['TABLE_ECARDS']        = $CONFIG['TABLE_PREFIX'].'ecards';
$CONFIG['TABLE_TEMPDATA']      = $CONFIG['TABLE_PREFIX'].'temp_data';
$CONFIG['TABLE_FAVPICS']       = $CONFIG['TABLE_PREFIX'].'favpics';
$CONFIG['TABLE_BRIDGE']        = $CONFIG['TABLE_PREFIX'].'bridge';
$CONFIG['TABLE_VOTE_STATS']    = $CONFIG['TABLE_PREFIX'].'vote_stats';
$CONFIG['TABLE_HIT_STATS']     = $CONFIG['TABLE_PREFIX'].'hit_stats';
$CONFIG['TABLE_TEMP_MESSAGES'] = $CONFIG['TABLE_PREFIX'].'temp_messages';
// Connect to database
($CONFIG['LINK_ID'] = cpg_db_connect()) || die('<b>Coppermine critical error</b>:<br />Unable to connect to database !<br /><br />MySQL said: <b>' . mysql_error() . '</b>');
// Retrieve DB stored configuration
$results = cpg_db_query("SELECT * FROM {$CONFIG['TABLE_CONFIG']}");
while ($row = mysql_fetch_array($results)) {
    $CONFIG[$row['name']] = $row['value'];
} // while
mysql_free_result($results);

// Reference 'site_url' to 'ecards_more_pic_target'
$CONFIG['site_url'] =& $CONFIG['ecards_more_pic_target'];

// Set default language (set up by the admin) as a constant, since it might get replaced during runtime
define('DEFAULT_LANGUAGE', $CONFIG['lang']);

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
if ($CONFIG['bridge_enable'] == 1 && !defined('BRIDGEMGR_PHP')) {
    $BRIDGE = cpg_get_bridge_db_values();
} else {
  $BRIDGE['short_name'] = 'coppermine';
  $BRIDGE['use_standard_groups'] = 1;
  $BRIDGE['recovery_logon_failures'] = 0;
  $BRIDGE['use_post_based_groups'] = false;
}

define('UDB_INTEGRATION', $BRIDGE['short_name']);

require_once 'bridge/' . UDB_INTEGRATION . '.inc.php';

/*

Removed temporarily due to non-compliance with bridging system - Nibbler

// Retrieve Array of Admin Groups (used for hiding admin usernames on thumbnails)
$results = cpg_db_query("SELECT group_id FROM {$CONFIG['TABLE_USERGROUPS']} WHERE has_admin_access ");
$CONFIG['ADMIN_GROUPS']=array();
while ($row = mysql_fetch_array($results)) {
    $CONFIG['ADMIN_GROUPS'][]= $row['group_id'];
} // while
mysql_free_result($results);

// Retrieve Array of Admin Users (used for hiding admin usernames on thumbnails)
$results = cpg_db_query("SELECT {$cpg_udb->field['user_id']} as user_id FROM $cpg_udb->usertable WHERE {$cpg_udb->field['usertbl_group_id']} in (" . implode(',',$CONFIG['ADMIN_GROUPS']).')');
$CONFIG['ADMIN_USERS']=array();
while ($row = mysql_fetch_array($results)) {
    $CONFIG['ADMIN_USERS'][] = $row['user_id'];
} // while
mysql_free_result($results);

*/

// Start output buffering
ob_start('cpg_filter_page_html');

// Parse cookie stored user profile
user_get_profile();

// Authenticate
$cpg_udb->authenticate();

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

if (!GALLERY_ADMIN_MODE) {
  $result = cpg_db_query("SELECT DISTINCT(aid) FROM {$CONFIG['TABLE_ALBUMS']} WHERE moderator_group IN ".USER_GROUP_SET);
  if (mysql_num_rows($result)) {
    while ($row = mysql_fetch_array($result)) {
      $USER_DATA['allowed_albums'][] = $row['aid'];
    }
  }
}

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
    //$USER['lang'] = $_GET['lang']; Nasty line permitting remote code execution
        $USER['lang'] = ereg("^[a-z0-9_-]*$", $_GET['lang']) ? $_GET['lang'] : $CONFIG['lang'];
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
    foreach ($FAVPICS as $key => $id ){
        $FAVPICS[$key] = (int)$id; //protect against sql injection attacks
    }
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

$CONFIG['template_loaded'] = true;

cpg_db_query("DELETE FROM {$CONFIG['TABLE_BANNED']} WHERE expiry < '$now'");
// Check if the user is banned
$user_id = USER_ID;
$result = cpg_db_query("SELECT * FROM {$CONFIG['TABLE_BANNED']} WHERE (ip_addr='$raw_ip' OR ip_addr='$hdr_ip' OR user_id=$user_id) AND brute_force=0");
if (mysql_num_rows($result)) {
    pageheader($lang_common['error']);
    msg_box($lang_common['information'], $lang_errors['banned']);
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
    pageheader($lang_common['information'], "<META http-equiv=\"refresh\" content=\"1;url=$referer\">");
    msg_box($lang_common['information'], 'Sending you to admin mode', $lang_common['continue'], $referer);
    pagefooter();
    ob_end_flush();
    die();
}

?>