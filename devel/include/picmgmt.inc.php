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

// Add a picture to an album
function add_picture($aid, $filepath, $filename, $title='', $caption='', $keywords='', $user1='', $user2='', $user3='', $user4='', $category=0)
{
	global $CONFIG, $ERROR, $USER_DATA, $PIC_NEED_APPROVAL;
	global $lang_errors;

	$image = $CONFIG['fullpath'].$filepath.$filename;
	$normal= $CONFIG['fullpath'].$filepath.$CONFIG['normal_pfx'].$filename;
	$thumb = $CONFIG['fullpath'].$filepath.$CONFIG['thumb_pfx'].$filename;

	$imagesize = getimagesize($image);

	if (!file_exists($thumb))
		if (!resize_image($image, $thumb, $CONFIG['thumb_width'], $CONFIG['thumb_method']))
			return false;

	if(max($imagesize[0],$imagesize[1]) > $CONFIG['picture_width'] && $CONFIG['make_intermediate'] && !file_exists($normal))
		if (!resize_image($image, $normal, $CONFIG['picture_width'], $CONFIG['thumb_method']))
			return false;

	$image_filesize = filesize($image);
	$total_filesize = $image_filesize + (file_exists($normal) ? filesize($normal) : 0) + filesize($thumb);

	// Test if disk quota exceeded
	if (!GALLERY_ADMIN_MODE && USER_ID && $USER_DATA['group_quota']) {
	    $result =db_query("SELECT sum(total_filesize) FROM {$CONFIG['TABLE_PICTURES']} WHERE owner_id = '".USER_ID."'");
		$record = mysql_fetch_array($result);
		$total_space_used = $record[0];
		mysql_free_result($result);

		if ($total_space_used + $total_filesize > $USER_DATA['group_quota'] << 10){
			@unlink($image);
			@unlink($normal);
			@unlink($thumb);
			$msg = strtr($lang_errors['quota_exceeded'], array(
				'[quota]' => ($USER_DATA['group_quota']),
				'[space]' => ($total_space_used >>10)));

			cpg_die(ERROR, $msg, __FILE__, __LINE__);
		}
	}

	// Test if picture requires approval
	if (GALLERY_ADMIN_MODE) {
	    $approved = 'YES';
	} elseif (!$USER_DATA['priv_upl_need_approval'] && $category == FIRST_USER_CAT + USER_ID) {
		$approved = 'YES';
	} elseif (!$USER_DATA['pub_upl_need_approval']){
		$approved = 'YES';
	} else {
		$approved = 'NO';
	}
	$PIC_NEED_APPROVAL = ($approved == 'NO');
	
	// User ID is not recorded when in admin mode (ie. for batch uploads)
	$user_id    = GALLERY_ADMIN_MODE ? 0 : USER_ID;
	$owner_name = GALLERY_ADMIN_MODE ? 0 : USER_NAME;

	$query = "INSERT INTO {$CONFIG['TABLE_PICTURES']} (pid, aid, filepath, filename, filesize, total_filesize, pwidth, pheight, ctime, owner_id, owner_name, title, caption, keywords, approved, user1, user2, user3, user4) VALUES ('', '$aid', '".addslashes($filepath)."', '".addslashes($filename)."', '$image_filesize', '$total_filesize', '{$imagesize[0]}', '{$imagesize[1]}', '".time()."', '$user_id', '$owner_name', '$title', '$caption', '$keywords', '$approved', '$user1', '$user2', '$user3', '$user4')";
	$result = db_query($query);

	return $result;
}

define("GIS_GIF",     1);
define("GIS_JPG",     2);
define("GIS_PNG",     3);

/**
 * resize_image()
 *
 * Create a file containing a resized image
 *
 * @param $src_file the source file
 * @param $dest_file the destination file
 * @param $new_size the size of the square within which the new image must fit
 * @param $method the method used for image resizing
 * @return 'true' in case of success
 **/
function resize_image($src_file, $dest_file, $new_size, $method)
{
	global $CONFIG, $ERROR;
	global $lang_errors;
	
	$msg_no_GD = 'PHP running on your server does not support the GD image library, check with your webhost if ImageMagick is installed';
	$msg_GD_without_jpeg = 'The version of GD used on your server has no support for JPEG images !';
	$msg_not_GD2 = 'PHP running on your server does not support GD version 2.x, please switch to GD version 1.x on the config page';

	$imginfo = getimagesize($src_file);
	if ($imginfo == null)
		return false;

	// GD can only handle JPG & PNG images
	if ($imginfo[2] != GIS_JPG && $imginfo[2] != GIS_PNG && ($method == 'gd1' || $method == 'gd2')){
		$ERROR = $lang_errors['gd_file_type_err'];
		return false;
	}

	// height/width
	$srcWidth = $imginfo[0];
	$srcHeight = $imginfo[1];

	$ratio = max($srcWidth, $srcHeight) / $new_size;
	$ratio = max($ratio, 1.0);
	$destWidth = (int)($srcWidth / $ratio);
	$destHeight = (int)($srcHeight / $ratio);

	// Method for thumbnails creation
	switch ($method) {
	case "im" :
		if (preg_match("#[A-Z]:|\\\\#Ai",__FILE__)){
			// get the basedir, remove '/include'
			$cur_dir = substr(dirname(__FILE__),0, -8);
			$src_file =   '"'.$cur_dir.'\\'.strtr($src_file, '/', '\\').'"';
			$im_dest_file = str_replace('%', '%%', ('"'.$cur_dir.'\\'.strtr($dest_file, '/', '\\').'"'));
		} elseif (@ini_get('safe_mode')) {
			// Safe mode does not allow to quote fnames, so we modify them
			$tmp_src_file = $src_file;
			$src_file = dirname($src_file).'/'.md5(basename($src_file));
			rename($tmp_src_file, $src_file);
			$tmp_dest_file = $dest_file;
			$dest_file = dirname($dest_file).'/'.md5(basename($dest_file));
			$im_dest_file = $dest_file;
		} else {
			$src_file =   escapeshellarg($src_file);
			$im_dest_file = str_replace('%', '%%', escapeshellarg($dest_file));
		}

		$output_array = array();
		$cmd = "{$CONFIG['impath']}convert -quality {$CONFIG['jpeg_qual']} {$CONFIG['im_options']} -geometry {$destWidth}x{$destHeight} $src_file $im_dest_file";
		exec ($cmd, $output_array, $retval);

		if ($retval) {
		    $ERROR = "Error executing ImageMagick - Return value: $retval";
			if ($CONFIG['debug_mode']) {
				// Re-execute the command with the backtit operator in order to get all outputs
				// will not work is safe mode is enabled
				$output = `$cmd 2>&1`;
			    $ERROR .= "<br /><br /><div align=\"left\">Cmd line : <br /><font size=\"2\">".nl2br(htmlspecialchars($cmd))."</font></div>";
			    $ERROR .= "<br /><br /><div align=\"left\">The convert program said:<br /><font size=\"2\">";
				$ERROR .= nl2br(htmlspecialchars($output));
				$ERROR .= "</font></div>";
			}
			if (@ini_get('safe_mode')) rename($src_file, $tmp_src_file);
			@unlink($dest_file);
			return false;
		} elseif (@ini_get('safe_mode')) {
			rename($src_file, $tmp_src_file);
			rename($dest_file, $tmp_dest_file);
			$src_file = $tmp_src_file;
			$dest_file = $tmp_dest_file;
		}
		break;

	case "gd1" :
		if (!function_exists('imagecreate')) {
		    cpg_die(CRITICAL_ERROR, $msg_no_GD, __FILE__, __LINE__);
		} elseif (!function_exists('imagecreatefromjpeg')) {
		    cpg_die(CRITICAL_ERROR, $msg_GD_without_jpeg, __FILE__, __LINE__);
		}
		if ($imginfo[2] == GIS_JPG)
			$src_img = imagecreatefromjpeg($src_file);
		else
			$src_img = imagecreatefrompng($src_file);
		if (!$src_img){
			$ERROR = $lang_errors['invalid_image'];
			return false;
		}
		$dst_img = imagecreate($destWidth, $destHeight);
		imagecopyresized($dst_img, $src_img, 0, 0, 0, 0, $destWidth, (int)$destHeight, $srcWidth, $srcHeight);
		imagejpeg($dst_img, $dest_file, $CONFIG['jpeg_qual']);
		imagedestroy($src_img);
		imagedestroy($dst_img);
		break;

	case "gd2" :
		if (!function_exists('imagecreate')) {
		    cpg_die(CRITICAL_ERROR, $msg_no_GD, __FILE__, __LINE__);
		} elseif (!function_exists('imagecreatefromjpeg')) {
		    cpg_die(CRITICAL_ERROR, $msg_GD_without_jpeg, __FILE__, __LINE__);
		} elseif (!function_exists('imagecreatetruecolor')) {
		    cpg_die(CRITICAL_ERROR, $msg_not_GD2, __FILE__, __LINE__);
		}
		if ($imginfo[2] == GIS_JPG)
			$src_img = imagecreatefromjpeg($src_file);
		else
			$src_img = imagecreatefrompng($src_file);
		if (!$src_img){
			$ERROR = $lang_errors['invalid_image'];
			return false;
		}
		$dst_img = imagecreatetruecolor($destWidth, $destHeight);
		imagecopyresampled($dst_img, $src_img, 0, 0, 0, 0, $destWidth, (int)$destHeight, $srcWidth, $srcHeight);
		imagejpeg($dst_img, $dest_file, $CONFIG['jpeg_qual']);
		imagedestroy($src_img);
		imagedestroy($dst_img);
		break;
	}


	// Set mode of uploaded picture
	chmod($dest_file, octdec($CONFIG['default_file_mode']));

	// We check that the image is valid
	$imginfo = getimagesize($dest_file);
	if ($imginfo == null){
		$ERROR = $lang_errors['resize_failed'];
		@unlink($dest_file);
		return false;
	} else {
		return true;
	}
}
?>