<?php
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
  $Revision$
  $LastChangedBy$
  $Date$
**********************************************/

define('COPPERMINE_VERSION', '1.5.0');
define('COPPERMINE_VERSION_STATUS', 'alpha');

if (!defined('IN_COPPERMINE')) { die('Not in Coppermine...');}

set_include_path(get_include_path().PATH_SEPARATOR.dirname(__FILE__).PATH_SEPARATOR.dirname(__FILE__).DIRECTORY_SEPARATOR.'Inspekt');

require_once "Inspekt.php";

$superCage = Inspekt::makeSuperCage();

function cpgGetMicroTime()
{
	list($usec, $sec) = explode(" ", microtime());
	return ((float)$usec + (float)$sec);
}
$cpg_time_start = cpgGetMicroTime();

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
$ORIGINAL_PHP_SELF = $superCage->server->getRaw('PHP_SELF');
$possibilities = array('REDIRECT_URL', 'PHP_SELF', 'SCRIPT_URL', 'SCRIPT_NAME','SCRIPT_FILENAME');
foreach ($possibilities as $test){
    if ($matches = $superCage->server->getMatched($test, '/([^\/]+\.php)$/')) {
        $CPG_PHP_SELF = $matches[1];
        break;
    }
}
/**
 * TODO: $REFERER has a potential for exploitation as the QUERY_STRING is being fetched with getRaw()
 * A probable solution is to parse the query string into its individual key and values and check
 * them against a regex, recombine and use only if all the values are safe else set referer to index.php
 */
$REFERER = urlencode($CPG_PHP_SELF . (($superCage->server->keyExists('QUERY_STRING') && $superCage->server->getRaw('QUERY_STRING')) ? '?' . $superCage->server->getRaw('QUERY_STRING') : ''));
$ALBUM_SET = '';
$META_ALBUM_SET = '';
$FORBIDDEN_SET = '';
$FORBIDDEN_SET_DATA = array();
$CURRENT_CAT_NAME = '';
$CAT_LIST = '';

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
	  <img src="images/coppermine-logo.png" alt="Coppermine Photo Gallery - Your Online Photo Gallery" /><br />
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
$CONFIG['TABLE_CATMAP']        = $CONFIG['TABLE_PREFIX'].'categorymap';
// Connect to database
($CONFIG['LINK_ID'] = cpg_db_connect()) || die('<b>Coppermine critical error</b>:<br />Unable to connect to database !<br /><br />MySQL said: <b>' . mysql_error() . '</b>');
// Retrieve DB stored configuration
$results = cpg_db_query("SELECT * FROM {$CONFIG['TABLE_CONFIG']}");
while ($row = mysql_fetch_array($results)) {
	$CONFIG[$row['name']] = $row['value'];
} // while
mysql_free_result($results);

// Record User's IP address
$raw_ip = $superCage->server->testIp('REMOTE_ADDR') ? $superCage->server->getEscaped('REMOTE_ADDR') : '0.0.0.0';

if ($superCage->server->testIp('HTTP_CLIENT_IP')) {
	$hdr_ip = $superCage->server->getEscaped('HTTP_CLIENT_IP');
} else {
	if ($superCage->server->testIp('HTTP_X_FORWARDED_FOR')) {
		$hdr_ip = $superCage->server->getEscaped('X_FORWARDED_FOR');
	} else {
		$hdr_ip = $raw_ip;
	}
}

/*if (!preg_match('/^[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}$/', $raw_ip)) $raw_ip = '0.0.0.0';
if (!preg_match('/^[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}$/', $hdr_ip)) $hdr_ip = '0.0.0.0';*/

// Reference 'site_url' to 'ecards_more_pic_target'
$CONFIG['site_url'] =& $CONFIG['ecards_more_pic_target'];

// Set the site_url in js_vars so that it can be used in js
set_js_var('site_url', rtrim($CONFIG['site_url'], '/'));

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
if ($matches = $superCage->get->getMatched('theme', '/^[A-Za-z0-9_]+$/')) {
    $USER['theme'] = $CONFIG['theme'] = $matches[0];
}/* else {
	unset($USER['theme']);
}*/

if (isset($USER['theme']) && !strstr($USER['theme'], '/') && is_dir('themes/' . $USER['theme'])) {
    $CONFIG['theme'] = strtr($USER['theme'], '$/\\:*?"\'<>|`', '____________');
} else {
    unset($USER['theme']);
}

if (!file_exists("themes/{$CONFIG['theme']}/theme.php")) {
    $CONFIG['theme'] = 'classic';
}

require "themes/{$CONFIG['theme']}/theme.php";

require "include/themes.inc.php";  //All Fallback Theme Templates and Functions

$THEME_DIR = "themes/{$CONFIG['theme']}/";

// Process language selection if present in URI or in user profile or try
// autodetection if default charset is utf-8
$CONFIG['default_lang'] = $CONFIG['lang'];      // Save default language
if ($superCage->get->getRaw('lang') && $matches = $superCage->get->getMatched('lang', '/^[a-z0-9_-]+$/')) {
    $USER['lang'] = $CONFIG['lang'] = $matches[0];
}/* else {
	unset($USER['lang']);
}*/

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

if (!file_exists("lang/{$CONFIG['lang']}.php")) {
    $CONFIG['lang'] = 'english';
}

// We load the chosen language file
require "lang/{$CONFIG['lang']}.php";

// Include and process fallback here if lang <> english
if($CONFIG['lang'] != 'english' && $CONFIG['language_fallback']==1 ){
    require "include/langfallback.inc.php";
}

// See if the fav cookie is set else set it
if ($superCage->cookie->keyExists($CONFIG['cookie_name'] . '_fav')) {
	$FAVPICS = @unserialize(@base64_decode($superCage->cookie->getRaw($CONFIG['cookie_name'] . '_fav')));
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

// If referer is set in URL and it contains 'http' or 'script' texts then set it to 'index.php' script
/**
 * Use $CPG_REFERER wherever $_GET['referer'] is used
 */
if ($matches = $superCage->get->getMatched('referer', '/((\%3C)|<)[^\n]+((\%3E)|>)|(.*http.*)|(.*script.*)/i')) {
    $CPG_REFERER = 'index.php';
} else {
    /**
     * Using getRaw() since we are checking the referer in the above if condition.
     */
    $CPG_REFERER = $superCage->get->getRaw('referer');
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

if (!USER_IS_ADMIN && $CONFIG['offline'] && !strstr($CPG_PHP_SELF,'login')) {
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