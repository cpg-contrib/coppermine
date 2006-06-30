<?php
/**
 * init.inc.php
 *
 * Initializing script which is included in all the scripts
 *
 * @package cpgNG
 * @author Abbas <abbas@sanisoft.com>
 * @version $Id$
 */
error_reporting(E_ALL);

define('COPPERMINE_VERSION', '1.4.1');
define('COPPERMINE_VERSION_STATUS', 'beta');

if (!defined('IN_COPPERMINE')) { die('Not in Coppermine...');}

// Store all reported errors in the $cpgdebugger
require_once('include/debugger.inc.php');
require_once('classes/cpgAuth.class.php');
require_once('classes/cpgUtils.class.php');

set_magic_quotes_runtime(0);
// used for timing purpose
$query_stats = array();
$queries = array();

function cpgGetMicroTime()
{
    list($usec, $sec) = explode(" ", microtime());
    return ((float)$usec + (float)$sec);
}
$cpg_time_start = cpgGetMicroTime();
// Do some cleanup in GET, POST and cookie data and un-register global vars
/**
 * Sanitizing all the GET,POST and COOKIE data to stop Cross Site Scripting by replacing data with their HTML entities.
 */
$HTML_SUBST = array('&' => '&amp;', '"' => '&quot;', '<' => '&lt;', '>' => '&gt;', '%26' => '&amp;', '%22' => '&quot;', '%3C' => '&lt;', '%3E' => '&gt;');

if (get_magic_quotes_gpc()) {
    if (is_array($_POST)) {
        foreach ($_POST as $key => $value) {
            if (!is_array($value))
                $_POST[$key] = strtr(stripslashes($value), $HTML_SUBST);
            if (!in_array($key, $keysToSkip) && isset($$key)) unset($$key);
        }
    }

    if (is_array($_GET)) {
        foreach ($_GET as $key => $value) {
            unset($_GET[$key]);
            $_GET[strtr(stripslashes($key), $HTML_SUBST)] = strtr(stripslashes($value), $HTML_SUBST);
            if (!in_array($key, $keysToSkip) && isset($$key)) unset($$key);
        }
    }

    if (is_array($_COOKIE)) {
        foreach ($_COOKIE as $key => $value) {
            if (!is_array($value))
                $_COOKIE[$key] = stripslashes($value);
            if (!in_array($key, $keysToSkip) && isset($$key)) unset($$key);
        }
    }
    if (is_array($_REQUEST)) {
        foreach ($_REQUEST as $key => $value) {
            if (!is_array($value))
                $_REQUEST[$key] = strtr(stripslashes($value), $HTML_SUBST);
            if (!in_array($key, $keysToSkip) && isset($$key)) unset($$key);
        }
    }
} else {
    if (is_array($_POST)) {
        foreach ($_POST as $key => $value) {
            if (!is_array($value))
                $_POST[$key] = strtr($value, $HTML_SUBST);
            if (!in_array($key, $keysToSkip) && isset($$key)) unset($$key);
        }
    }

    if (is_array($_GET)) {
        foreach ($_GET as $key => $value) {
            unset($_GET[$key]);
            $_GET[strtr(stripslashes($key), $HTML_SUBST)] = strtr(stripslashes($value), $HTML_SUBST);
            if (!in_array($key, $keysToSkip) && isset($$key)) unset($$key);
        }
    }

    if (is_array($_COOKIE)) {
        foreach ($_COOKIE as $key => $value) {
            if (!in_array($key, $keysToSkip) && isset($$key)) unset($$key);
        }
    }
    if (is_array($_REQUEST)) {
        foreach ($_REQUEST as $key => $value) {
            if (!is_array($value))
                $_REQUEST[$key] = strtr($value, $HTML_SUBST);
            if (!in_array($key, $keysToSkip) && isset($$key)) unset($$key);
        }
    }
}

//$PHP_SELF = isset($_SERVER['REDIRECT_URL']) ? $_SERVER['REDIRECT_URL'] : $_SERVER['SCRIPT_NAME'];
$REFERER = urlencode($_SERVER['PHP_SELF'] . (isset($_SERVER['QUERY_STRING']) && $_SERVER['QUERY_STRING'] ? '?' . $_SERVER['QUERY_STRING'] : ''));

$CURRENT_CAT_NAME = '';
$CAT_LIST = '';

// Record User's IP address
$ipRegex = '^(?:(?:25[0-5]|2[0-4]\d|[01]\d\d|\d?\d)(?(\.?\d)\.)){4}$';

/**
 * The IP address must match the following regex
 */
$raw_ip = stripslashes($_SERVER['REMOTE_ADDR']);

if (isset($_SERVER['HTTP_CLIENT_IP'])) {
    $hdr_ip = stripslashes($_SERVER['HTTP_CLIENT_IP']);
} else if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $hdr_ip = stripslashes($_SERVER['HTTP_X_FORWARDED_FOR']);
} else {
    $hdr_ip = $raw_ip;
}

if (!ereg($ipRegex, $raw_ip)) {
    $raw_ip = '0.0.0.0';
}

if (!ereg($ipRegex, $hdr_ip)) {
    $hdr_ip = '0.0.0.0';
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
  require_once 'include/config.inc.php';
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
      Coppermine Photo Gallery seems not to be installed correctly, or you are running coppermine for the first time. You'll be redirected to the installer. If your browser doesn't support redirect, click <a href="install.php">here</a>.
    </body>
</html>
EOT;
  die();
}
//require 'include/functions.inc.php';

require("classes/cpgDbMysql.class.php");
require('classes/cpgConfig.class.php');

$db =& cpgDB::getInstance();

$config =& cpgConfig::getInstance();

$config->populate();

// Include logger functions
include_once('libs/logger.inc.php');

// Include media functions
require 'include/media.functions.inc.php';
/*
// Include plugin API
require('include/plugin_api.inc.php');
if ($config->conf['enable_plugins'] == 1) {
    CPGPluginAPI::load();
}
*/
// Set UDB_INTEGRATION if enabled in admin
if ($config->conf['bridge_enable'] == 1) {
  // Query to get bridge's settings
  $query = "SELECT * FROM ".$config->conf['TABLE_BRIDGE'];
  $db->query($query);

  while ($row = $db->fetchRow()) {
    // Store bridge's settings in an array
    $BRIDGE[$row['name']] = $row['value'];
  }
} else {
  $BRIDGE['short_name'] = 'coppermine';
  $BRIDGE['use_standard_groups'] = 1;
  $BRIDGE['recovery_logon_failures'] = 0;
  $BRIDGE['use_post_based_groups'] = false;
}

define('UDB_INTEGRATION', $BRIDGE['short_name']);

// Authenticate
$auth =& cpgAuth::getInstance(UDB_INTEGRATION);
$auth->authenticate();

// Parse cookie stored user profile
$auth->userGetProfile();

// Test if admin mode
$auth->user['am'] = isset($auth->user['am']) ? (int)$auth->user['am'] : 0;
define('GALLERY_ADMIN_MODE', $auth->isDefined('USER_IS_ADMIN') && $auth->user['am']);
define('USER_ADMIN_MODE', $auth->isDefined('USER_ID') && $auth->isDefined('USER_CAN_CREATE_ALBUMS') && $auth->user['am'] && !GALLERY_ADMIN_MODE);

// Set error logging level
// Maze's new error report system
if (!$auth->isDefined('USER_IS_ADMIN')) {
    if (!$config->conf['debug_mode']) $cpgdebugger->stop(); // useless to run debugger cos there's no output
    error_reporting(0); // hide all errors for visitors
}

// Process theme selection if present in URI or in user profile
if (!empty($_GET['theme'])) {
    $auth->user['theme'] = $_GET['theme'];
}
// Load theme file
//if (isset($USER['theme']) && !strstr($USER['theme'], '/') && is_dir('themes/' . $USER['theme'])) {
if (isset($auth->user['theme']) && !strstr($auth->user['theme'], '/') && is_dir('templates/' . $auth->user['theme'])) {
    $config->conf['theme'] = strtr($auth->user['theme'], '$/\\:*?"\'<>|`', '____________');
} /*else {
    //unset($auth->user['theme']);
    $config->conf['theme'] = 'bluedot';
}*/

// Current theme's directory
$THEME_DIR = 'templates/'.$config->conf['theme'].'/';

// Process language selection if present in URI or in user profile or try
// autodetection if default charset is utf-8
if (!empty($_GET['lang']))
{
    $auth->user['lang'] = ereg("^[a-z0-9_-]*$", $_GET['lang']) ? $_GET['lang'] : $CONFIG['lang'];
}

if (isset($auth->user['lang']) && !strstr($auth->user['lang'], '/') && file_exists('lang/' . $auth->user['lang'] . '.php')) {
    $config->conf['default_lang'] = $config->conf['lang'];          // Save default language
    $config->conf['lang'] = strtr($auth->user['lang'], '$/\\:*?"\'<>|`', '____________');
} elseif ($config->conf['charset'] == 'utf-8') {
    include('include/select_lang.inc.php');
    if (file_exists('lang/' . $auth->user['lang'] . '.php')) {
        $config->conf['default_lang'] = $config->conf['lang'];      // Save default language
        $config->conf['lang'] = $auth->user['lang'];
    }
} else {
    unset($auth->user['lang']);
}

if (isset($config->conf['default_lang']) && ($config->conf['default_lang']==$config->conf['lang'])) {
        unset($config->conf['default_lang']);
}

if (!file_exists("lang/{$config->conf['lang']}.php")) {
  $config->conf['lang'] = 'english';
}

// We load the chosen language file
require "lang/{$config->conf['lang']}.php";

// Include and process fallback here if lang <> english
if($config->conf['lang'] != 'english' && $config->conf['language_fallback'] == 1 ) {
        require "include/langfallback.inc.php";
}

// Get the fav pics of the user
$auth->getUserFavPics();

// Remove expired bans
$now = date('Y-m-d H:i:s', cpgUtils::localisedTimestamp());

$config->conf['template_loaded'] = true;

$query = "DELETE FROM {$config->conf['TABLE_BANNED']} WHERE expiry < '$now'";
$db->query($query);

// Check if the user is banned
$user_id = $auth->isDefined('USER_ID');
$query = "SELECT * FROM {$config->conf['TABLE_BANNED']} WHERE (ip_addr='$raw_ip' OR ip_addr='$hdr_ip' OR user_id=$user_id) AND brute_force=0";
$db->query($query);

if ($db->nf()) {
    require_once('classes/cpgTemplate.class.php');
    $t = new cpgTemplate();
    cpgUtils::msgBox($lang_error, $lang_errors['banned'], $lang_continue, 'index.php');
    exit;
}

// Retrieve the "private" album set
if (!GALLERY_ADMIN_MODE && $config->conf['allow_private_albums']) $auth->getPrivateAlbumSet();

if (!$auth->isDefined('USER_IS_ADMIN') && $config->conf['offline'] && !strstr($_SERVER["SCRIPT_NAME"],'login')) {
    require_once('classes/cpgTemplate.class.php');
    $t = new cpgTemplate();
    cpgUtils::msgBox($lang_errors['offline_title'], $lang_errors['offline_text']);
    exit;
}

// kick user into user_admin_mode (needed to fix "removed user mode for users" when upgrading)
if ($auth->isDefined('USER_ID') && !$auth->isDefined('USER_IS_ADMIN') && !$auth->user['am']) { // user is logged in, but is not gallery admin and not in admin mode
    $auth->user['am'] = 1;

    require_once('classes/cpgTemplate.class.php');
    $t = new cpgTemplate();
    cpgUtils::msgBox($lang_info, 'Sending you to admin mode', $lang_continue, $referer, -1, true);
    /**
     * Cleanup connections, freeze objects in session, set user cookie.
     */
    include ('include/cleanUp.inc.php');
    die();
}

?>
