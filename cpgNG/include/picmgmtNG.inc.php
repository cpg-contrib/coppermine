<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2005 Coppermine Dev Team
  v1.1 originaly written by Gregory DEMAR

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation; either version 2 of the License, or
  (at your option) any later version.
  ********************************************
  Coppermine version: 1.4.1
  $Source$
  $Revision$
  $Author$
  $Date$
**********************************************/

if (!defined('IN_COPPERMINE')) { die('Not in Coppermine...');}

// Add a picture to an album
function add_picture($aid, $filepath, $filename, $position = 0, $title = '', $caption = '', $keywords = '', $user1 = '', $user2 = '', $user3 = '', $user4 = '', $category = 0, $raw_ip = '', $hdr_ip = '')
{
    global $CONFIG, $ERROR, $USER_DATA, $PIC_NEED_APPROVAL;
    global $lang_errors;

    $image = $CONFIG['fullpath'] . $filepath . $filename;
    $normal = $CONFIG['fullpath'] . $filepath . $CONFIG['normal_pfx'] . $filename;
    $thumb = $CONFIG['fullpath'] . $filepath . $CONFIG['thumb_pfx'] . $filename;

    if (!is_known_filetype($image)) {
        return false;
    } elseif (is_image($filename)) {
        $imagesize = getimagesize($image);
        if (((USER_IS_ADMIN && $CONFIG['auto_resize'] == 1) || (!USER_IS_ADMIN && $CONFIG['auto_resize'] > 0)) && max($imagesize[0], $imagesize[1]) > $CONFIG['max_upl_width_height']) //$CONFIG['auto_resize']==1
        {
          //resize_image($image, $image, $CONFIG['max_upl_width_height'], $CONFIG['thumb_method'], $imagesize[0] > $CONFIG['max_upl_width_height'] ? 'wd' : 'ht');
          resize_image($image, $image, $CONFIG['max_upl_width_height'], $CONFIG['thumb_method'], $CONFIG['thumb_use']);
          $imagesize = getimagesize($image);
        }
        if (!file_exists($thumb)) {
            if (!resize_image($image, $thumb, $CONFIG['thumb_width'], $CONFIG['thumb_method'], $CONFIG['thumb_use']))
                return false;
        }
        if (max($imagesize[0], $imagesize[1]) > $CONFIG['picture_width'] && $CONFIG['make_intermediate'] && !file_exists($normal)) {
            if (!resize_image($image, $normal, $CONFIG['picture_width'], $CONFIG['thumb_method'], $CONFIG['thumb_use']))
                return false;
        }
    } else {
        $imagesize[0] = $iwidth;
        $imagesize[1] = $iheight;
    }

    $image_filesize = filesize($image);
    $total_filesize = is_image($filename) ? ($image_filesize + (file_exists($normal) ? filesize($normal) : 0) + filesize($thumb)) : ($image_filesize);


    // Test if disk quota exceeded
    if (!GALLERY_ADMIN_MODE && $USER_DATA['group_quota']) {
        $result = cpg_db_query("SELECT sum(total_filesize) FROM {$CONFIG['TABLE_PICTURES']}, {$CONFIG['TABLE_ALBUMS']} WHERE  {$CONFIG['TABLE_PICTURES']}.aid = {$CONFIG['TABLE_ALBUMS']}.aid AND category = '" . (FIRST_USER_CAT + USER_ID) . "'");
        $record = mysql_fetch_array($result);
        $total_space_used = $record[0];
        mysql_free_result($result);

        if ((($total_space_used + $total_filesize)>>10) > $USER_DATA['group_quota'] ) {
            @unlink($image);
            if (is_image($image)) {
                @unlink($normal);
                @unlink($thumb);
            }
            $msg = strtr($lang_errors['quota_exceeded'], array('[quota]' => ($USER_DATA['group_quota']),
                '[space]' => ($total_space_used >> 10)));
            cpg_die(ERROR, $msg, __FILE__, __LINE__);
        }
    }
    // Test if picture requires approval
    if (GALLERY_ADMIN_MODE) {
        $approved = 'YES';
    } elseif (!$USER_DATA['priv_upl_need_approval'] && $category == FIRST_USER_CAT + USER_ID) {
        $approved = 'YES';
    } elseif (!$USER_DATA['pub_upl_need_approval']) {
        $approved = 'YES';
    } else {
        $approved = 'NO';
    }
    $PIC_NEED_APPROVAL = ($approved == 'NO');
    // User ID is now recorded when in admin mode (casper)
    $user_id = USER_ID;
    $username= USER_NAME;
    $query = "INSERT INTO {$CONFIG['TABLE_PICTURES']} (pid, aid, filepath, filename, filesize, total_filesize, pwidth, pheight, ctime, owner_id, owner_name, title, caption, keywords, approved, user1, user2, user3, user4, pic_raw_ip, pic_hdr_ip, position) VALUES ('', '$aid', '" . addslashes($filepath) . "', '" . addslashes($filename) . "', '$image_filesize', '$total_filesize', '{$imagesize[0]}', '{$imagesize[1]}', '" . time() . "', '$user_id', '$username','$title', '$caption', '$keywords', '$approved', '$user1', '$user2', '$user3', '$user4', '$raw_ip', '$hdr_ip', '$position')";
    $result = cpg_db_query($query);

    return $result;
}

define("GIS_GIF", 1);
define("GIS_JPG", 2);
define("GIS_PNG", 3);

// Add 'edit' directory if it doesn't exist
// Set access to read+write only
if (!is_dir($CONFIG['fullpath'].'edit')) {
    $cpg_umask = umask(0);
    @mkdir($CONFIG['fullpath'].'edit',0777);
    umask($cpg_umask);
    unset($cpg_umask);
}

/**
* resize_image()
*
* Create a file containing a resized image
*
* @param  $src_file the source file
* @param  $dest_file the destination file
* @param  $new_size the size of the square within which the new image must fit
* @param  $method the method used for image resizing
* @param  $watermark the string to be placed on the image as watermark
* @return 'true' in case of success
*/
function resize_image($src_file, $dest_file, $new_size, $method, $thumb_use, $watermark=false)
{
    global $CONFIG, $ERROR;
    global $lang_errors;
    if (!($imginfo = getimagesize($src_file))) return false;

    // height/width
    if ($thumb_use == 'ht') {
        $ratio = $imginfo[1] / $new_size;
    } elseif ($thumb_use == 'wd') {
        $ratio = $imginfo[0] / $new_size;
    } else {
        $ratio = max($imginfo[0], $imginfo[1]) / $new_size;
    }
    $ratio = max($ratio, 1.0);
    $dest_info[0] = intval($imginfo[0] / $ratio);
    $dest_info[1] = intval($imginfo[1] / $ratio);
    $dest_info['quality'] = intval($CONFIG['jpeg_qual']);
    $dest_info['im_options'] = $CONFIG['im_options'];
    if ($watermark) {
        $dest_info['watermark']['text'] = $watermark;
    }

    require_once('classes/imaging/imaging.inc');
    if (!Graphic::resize($src_file, $dest_info, $dest_file, $imginfo)) return false;

    // Set mode of uploaded picture
    chmod($dest_file, octdec($CONFIG['default_file_mode'])); //silence the output in case chmod is disabled
    // We check that the image is valid
    $imginfo = getimagesize($dest_file);
    if (!$imginfo) {
        $ERROR = $lang_errors['resize_failed'];
        unlink($dest_file);
        return false;
    }
    return true;
}
?>
