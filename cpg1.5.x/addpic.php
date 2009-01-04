<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2009 Coppermine Dev Team
  v1.1 originally written by Gregory DEMAR

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 3
  as published by the Free Software Foundation.

  ********************************************
  Coppermine version: 1.5.1
  $HeadURL$
  $Revision$
  $LastChangedBy$
  $Date$
**********************************************/

/**
* Coppermine Photo Gallery addpic.php
*
* This file file gets called in the img src when you do batch add, there is nothing
* much to look here the grunt work is done by the function add_picture
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

define('ADDPIC_PHP', true);

require('include/init.inc.php');
require('include/picmgmt.inc.php');

if (!GALLERY_ADMIN_MODE) {
    die('Access denied');
}

$aid = $superCage->get->getInt('aid');

/**
 * TODO: $_GET['pic_file'] cannot be cleaned sensibly with current methods available. Refactor.
 */
$matches   = $superCage->get->getMatched('pic_file', '/^[0-9A-Za-z=\+\/]+$/');
$pic_file  = base64_decode($matches[0]);
$dir_name  = dirname($pic_file) . '/';
$file_name = basename($pic_file);

// Create the holder $picture_name by translating the file name.
// Translate any forbidden character into an underscore.
$sane_name = replace_forbidden($file_name);
$source    = './' . $CONFIG['fullpath'] . $dir_name . $file_name;

rename($source, './' . $CONFIG['fullpath'] . $dir_name . $sane_name);

$sql = "SELECT pid FROM {$CONFIG['TABLE_PICTURES']} WHERE filepath='" . addslashes($dir_name) . "' AND filename='" . addslashes($file_name) . "' LIMIT 1";

$result = cpg_db_query($sql);

if (mysql_num_rows($result)) {
	$status = 'DUPE';
} elseif (add_picture($aid, $dir_name, $sane_name)) {
	$status = 'OK';
} else {
	$status = 'PB';
}

if (ob_get_length()) {
	ob_end_clean();
}

echo $status;

?>