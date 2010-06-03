<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2010 Coppermine Dev Team
  v1.0 originally written by Gregory Demar

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 3
  as published by the Free Software Foundation.
  
  ********************************************
  Coppermine version: 1.4.28
  $HeadURL$
  $Revision$
  $Author$
  $Date$
**********************************************/

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