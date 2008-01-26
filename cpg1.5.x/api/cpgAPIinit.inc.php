<?php
/**
 * initAPI.inc.php - API for Coppermine 1.4
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
require ('../include/config.inc.php');
require ('cpgAPIfunctions.inc.php');

// Do some cleanup in GET, POST and cookie data and un-register global vars
$HTML_SUBST = array('&' => '&amp;', '"' => '&quot;', '<' => '&lt;', '>' => '&gt;', '%26' => '&amp;', '%22' => '&quot;', '%3C' => '&lt;', '%3E' => '&gt;','%27' => '&#39;', "'" => '&#39;');
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
            unset($_GET[$key]);
            $_GET[strtr(stripslashes($key), $HTML_SUBST)] = strtr(stripslashes($value), $HTML_SUBST);
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
    if (is_array($_REQUEST)) {
        foreach ($_REQUEST as $key => $value) {
            if (!is_array($value))
                $_REQUEST[$key] = strtr(stripslashes($value), $HTML_SUBST);
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
            unset($_GET[$key]);
            $_GET[strtr(stripslashes($key), $HTML_SUBST)] = strtr(stripslashes($value), $HTML_SUBST);
            if (isset($$key)) unset($$key);
        }
    }

    if (is_array($_COOKIE)) {
        foreach ($_COOKIE as $key => $value) {
            if (isset($$key)) unset($$key);
        }
    }
    if (is_array($_REQUEST)) {
        foreach ($_REQUEST as $key => $value) {
            if (!is_array($value))
                $_REQUEST[$key] = strtr($value, $HTML_SUBST);
            if (isset($$key)) unset($$key);
        }
    }
}

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


$CONFIG['TABLE_USERS']      = $CONFIG['TABLE_PREFIX']."users";
$CONFIG['TABLE_PICTURES']   = $CONFIG['TABLE_PREFIX']."pictures";
$CONFIG['TABLE_ALBUMS']     = $CONFIG['TABLE_PREFIX']."albums";
$CONFIG['TABLE_COMMENTS']   = $CONFIG['TABLE_PREFIX']."comments";
$CONFIG['TABLE_CATEGORIES'] = $CONFIG['TABLE_PREFIX']."categories";
$CONFIG['TABLE_CONFIG']     = $CONFIG['TABLE_PREFIX']."config";
$CONFIG['TABLE_USERGROUPS'] = $CONFIG['TABLE_PREFIX']."usergroups";
$CONFIG['TABLE_VOTES']      = $CONFIG['TABLE_PREFIX']."votes";
$CONFIG['TABLE_USERS']      = $CONFIG['TABLE_PREFIX']."users";
$CONFIG['TABLE_BANNED']     = $CONFIG['TABLE_PREFIX']."banned";
$CONFIG['TABLE_EXIF']       = $CONFIG['TABLE_PREFIX']."exif";
$CONFIG['TABLE_FILETYPES']  = $CONFIG['TABLE_PREFIX']."filetypes";
$CONFIG['TABLE_ECARDS']     = $CONFIG['TABLE_PREFIX']."ecards";
$CONFIG['TABLE_TEMPDATA']   = $CONFIG['TABLE_PREFIX']."temp_data";
$CONFIG['TABLE_FAVPICS']    = $CONFIG['TABLE_PREFIX']."favpics";
$CONFIG['TABLE_BRIDGE']     = $CONFIG['TABLE_PREFIX']."bridge";
$CONFIG['TABLE_VOTE_STATS'] = $CONFIG['TABLE_PREFIX']."vote_stats";
$CONFIG['TABLE_HIT_STATS']  = $CONFIG['TABLE_PREFIX']."hit_stats";

// Connect to database
($CONFIG['LINK_ID'] = cpg_db_connect()) || die("<b>Coppermine critical error</b>:<br />Unable to connect to database !<br /><br />MySQL said: <b>" . mysql_error() . "</b>");

// Retrieve DB stored configuration
$results = cpg_db_query("SELECT * FROM {$CONFIG['TABLE_CONFIG']}");

while ($row = mysql_fetch_array($results)) {
    $CONFIG[$row['name']] = $row['value'];
} // while

mysql_free_result($results);

define('USER_GAL_CAT', 1);
define('FIRST_USER_CAT', 10000);

// We load the chosen language file
require "../lang/english.php";
require ('cpgAPIerrors.php');

// Check for GD GIF Create support
if ($CONFIG['thumb_method'] == 'im' || function_exists('imagecreatefromgif'))
  $CONFIG['GIF_support'] = 1;
else
  $CONFIG['GIF_support'] = 0;


require ('cpgAPIAuth.php');

$auth = new cpgAPIAuth;

if (!$auth->authenticate()) {
  cpg_die(18);
}

// Reference 'site_url' to 'ecards_more_pic_target'
$CONFIG['site_url'] =& $CONFIG['ecards_more_pic_target'];

?>