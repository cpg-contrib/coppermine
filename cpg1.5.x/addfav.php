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
  $URL$
  $Revision$
  $LastChangedBy$
  $Date$
**********************************************/

/**
* Coppermine Photo Gallery addfav.php
*
* This file does the needful when add to fav links are clicked, if the user is logged in then
* the favs are stored in the database else the favs are stored in a local cookie, the favs in
* database take precedence over the cookie favs
*
* @copyright 2002-2006 Gregory DEMAR, Coppermine Dev Team
* @license http://opensource.org/licenses/gpl-license.php GNU General Public License V2
* @package Coppermine
* @version $Id$
*/

/**
* @ignore
*/
define('IN_COPPERMINE', true);
/**
* @ignore
*/
define('RATEPIC_PHP', true);

require('include/init.inc.php');

/**
 * Clean up GPC and other Globals here
 */
 $CLEAN['pid'] = (int)$_GET['pid'];
 $CLEAN['ref'] = htmlspecialchars($_GET['ref']);


// Check if required parameters are present
if (empty($CLEAN['pid'])) cpg_die(CRITICAL_ERROR, $lang_errors['param_missing'], __FILE__, __LINE__);

$ref = $CONFIG['site_url'] . (!empty($CLEAN['ref']) ? $CLEAN['ref'] : "displayimage.php?pid=$CLEAN['pid']");
$ref = str_replace('&amp;', '&', $ref);

// If user does not accept script's cookies, we don't accept the vote
if (!isset($_COOKIE[$CONFIG['cookie_name'] . '_data'])) {
        header("Location: $ref");
        exit;
}
// See if this picture is already present in the array
if (!in_array($CLEAN['pid'], $FAVPICS)) {
        $FAVPICS[] = $CLEAN['pid'];
} else {
        $key = array_search($CLEAN['pid'], $FAVPICS);
        unset ($FAVPICS[$key]);
}

$data = base64_encode(serialize($FAVPICS));
setcookie($CONFIG['cookie_name'] . '_fav', $data, time() + 86400 * 30, $CONFIG['cookie_path']);
// If the user is logged in then put it in the DB
if (USER_ID > 0) {
        $sql = "UPDATE {$CONFIG['TABLE_FAVPICS']} SET user_favpics = '$data' WHERE user_id = " . USER_ID;
        cpg_db_query($sql);
        // User never stored a fav... so insert new row
        if (!mysql_affected_rows($CONFIG['LINK_ID'])) {
                $sql = "INSERT INTO {$CONFIG['TABLE_FAVPICS']} ( user_id, user_favpics) VALUES (" . USER_ID . ", '$data')";
                cpg_db_query($sql);
        }
}


$header_location = (@preg_match('/Microsoft|WebSTAR|Xitami/', getenv('SERVER_SOFTWARE'))) ? 'Refresh: 0; URL=' : 'Location: ';
header($header_location . $ref);
pageheader($lang_common['information'], "<meta http-equiv=\"refresh\" content=\"1;url=$ref\">");
msg_box($lang_info, $lang_rate_pic_php['rate_ok'], $lang_common['continue'], $ref);
pagefooter();
ob_end_flush();
?>