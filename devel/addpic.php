<?php
// ------------------------------------------------------------------------- //
//  Coppermine Photo Gallery                                                 //
// ------------------------------------------------------------------------- //
//  Copyright (C) 2002,2003  Grégory DEMAR <gdemar@wanadoo.fr>               //
//  http://www.chezgreg.net/coppermine/                                      //
// ------------------------------------------------------------------------- //
//  Based on PHPhotoalbum by Henning Støverud <henning@stoverud.com>         //
//  http://www.stoverud.com/PHPhotoalbum/                                    //
// ------------------------------------------------------------------------- //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
// ------------------------------------------------------------------------- //

define('IN_COPPERMINE', true);
define('ADDPIC_PHP', true);

require('include/init.inc.php');
require('include/picmgmt.inc.php');

if (!GALLERY_ADMIN_MODE) die('Access denied');

$aid       = (int)$HTTP_GET_VARS['aid'];
$pic_file  = base64_decode($HTTP_GET_VARS['pic_file']);
$dir_name  = dirname($pic_file)."/";
$file_name = basename($pic_file);

$sql = "SELECT pid ".
	   "FROM {$CONFIG['TABLE_PICTURES']} ".
	   "WHERE filepath='".addslashes($dir_name)."' AND filename='".addslashes($file_name)."' ".
	   "LIMIT 1";
$result = db_query($sql);

if (mysql_num_rows($result)) {
	$file_name = "images/up_dup.gif";
} elseif (add_picture($aid, $dir_name, $file_name)){
	$file_name = "images/up_ok.gif";
} else {
	$file_name = "images/up_pb.gif";
	echo $ERROR;
}

if(ob_get_length()){
	ob_end_flush();
	exit;
}

header('Content-type: image/gif');
echo fread(fopen($file_name, 'rb'), filesize($file_name));
ob_end_flush()
?>