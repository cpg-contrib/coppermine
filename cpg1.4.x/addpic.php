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
  Coppermine version: 1.4.20
  $HeadURL$
  $Revision$
  $Author$
  $Date$
**********************************************/

/**
* Coppermine Photo Gallery addpic.php
*
* This file file gets called in the img src when you do batch add, there is nothing
* much to look here the grunt work is done by the function add_picture
*
* @copyright 2002,2007 Gregory DEMAR, Coppermine Dev Team
* @license http://www.gnu.org/licenses/gpl.html GNU General Public License V3
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

if (!GALLERY_ADMIN_MODE) die('Access denied');

$aid = (int)$_GET['aid'];
$pic_file = base64_decode($_GET['pic_file']);
$dir_name = dirname($pic_file) . '/';
$file_name = basename($pic_file);

# Create the holder $picture_name by translating the file name.
# Translate any forbidden character into an underscore.
$sane_name = replace_forbidden($file_name);
$source = './'.$CONFIG['fullpath'].$dir_name.$file_name;
rename($source, './' . $CONFIG['fullpath'] . $dir_name . $sane_name);
$sql = "SELECT pid FROM {$CONFIG['TABLE_PICTURES']} WHERE filepath='" . addslashes($dir_name) . "' AND filename='" . addslashes($file_name) . "' LIMIT 1";
$result = cpg_db_query($sql);

if (mysql_num_rows($result)) {
    $file_name = 'images/up_dup.gif';
} elseif (add_picture($aid, $dir_name, $sane_name)) {
    $file_name = 'images/up_ok.gif';
} else {
    $file_name = 'images/up_pb.gif';
    echo $ERROR;
}

if (ob_get_length()) {
    ob_end_flush();
    exit;
}

header('Content-type: image/gif');
echo fread(fopen($file_name, 'rb'), filesize($file_name));
ob_end_flush()
?>