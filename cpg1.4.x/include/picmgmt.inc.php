<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2009 Coppermine Dev Team
  v1.1 originaly written by Gregory DEMAR

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 3
  as published by the Free Software Foundation.

  ********************************************
  Coppermine version: 1.4.23
  $HeadURL$
  $Revision$
  $Author$
  $Date$
**********************************************/

if (!defined('IN_COPPERMINE')) { die('Not in Coppermine...');}

if($CONFIG['read_iptc_data'] ){
        include("include/iptc.inc.php");
}

// Add a picture to an album
function add_picture($aid, $filepath, $filename, $position = 0, $title = '', $caption = '', $keywords = '', $user1 = '', $user2 = '', $user3 = '', $user4 = '', $category = 0, $raw_ip = '', $hdr_ip = '', $iwidth = 0, $iheight = 0)
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

        if ($CONFIG['read_iptc_data']) {
           $iptc = get_IPTC($image);
           if (is_array($iptc) && !$title && !$caption && !$keywords) {  //if any of those 3 are filled out we don't want to override them, they may be blank on purpose.
               $title = (isset($iptc['Title'])) ? $iptc['Title'] : $title;
               $caption = (isset($iptc['Caption'])) ? $iptc['Caption'] : $caption;
               $keywords = (isset($iptc['Keywords'])) ? implode(' ',$iptc['Keywords']) : $keywords;
           }
        }

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
    if (!GALLERY_ADMIN_MODE && $USER_DATA['group_quota'] && $category == FIRST_USER_CAT + USER_ID) {
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
    } elseif (!$USER_DATA['pub_upl_need_approval'] && $category < FIRST_USER_CAT) {
        $approved = 'YES';
    } else {
        $approved = 'NO';
    }
    $PIC_NEED_APPROVAL = ($approved == 'NO');
    // User ID is now recorded when in admin mode (casper)
    $user_id = USER_ID;
    $username= USER_NAME;
    // Populate Array to pass to plugins, then to SQL.
    $CURRENT_PIC_DATA['aid'] = $aid;
    $CURRENT_PIC_DATA['filepath'] = $filepath;
    $CURRENT_PIC_DATA['filename'] = $filename;
    $CURRENT_PIC_DATA['filesize'] = $image_filesize;
    $CURRENT_PIC_DATA['total_filesize'] = $total_filesize;
    $CURRENT_PIC_DATA['pwidth'] = $imagesize[0];
    $CURRENT_PIC_DATA['pheight'] = $imagesize[1];
    $CURRENT_PIC_DATA['owner_id'] = $user_id;
    $CURRENT_PIC_DATA['owner_name'] = $username;
    $CURRENT_PIC_DATA['title'] = $title;
    $CURRENT_PIC_DATA['caption'] = $caption;
    $CURRENT_PIC_DATA['keywords'] = $keywords;
    $CURRENT_PIC_DATA['approved'] = $approved;
    $CURRENT_PIC_DATA['user1'] = $user1;
    $CURRENT_PIC_DATA['user2'] = $user2;
    $CURRENT_PIC_DATA['user3'] = $user3;
    $CURRENT_PIC_DATA['user4'] = $user4;
    $CURRENT_PIC_DATA['pic_raw_ip'] = $raw_ip;
    $CURRENT_PIC_DATA['pic_hdr_ip'] = $hdr_ip;
    $CURRENT_PIC_DATA['position'] = $position;
    $CURRENT_PIC_DATA = CPGPluginAPI::filter('add_file_data',$CURRENT_PIC_DATA);

    $query = "INSERT INTO {$CONFIG['TABLE_PICTURES']} (aid, filepath, filename, filesize, total_filesize, pwidth, pheight, ctime, owner_id, owner_name, title, caption, keywords, approved, user1, user2, user3, user4, pic_raw_ip, pic_hdr_ip, position) VALUES ('{$CURRENT_PIC_DATA['aid']}', '" . addslashes($CURRENT_PIC_DATA['filepath']) . "', '" . addslashes($CURRENT_PIC_DATA['filename']) . "', '{$CURRENT_PIC_DATA['filesize']}', '{$CURRENT_PIC_DATA['total_filesize']}', '{$CURRENT_PIC_DATA['pwidth']}', '{$CURRENT_PIC_DATA['pheight']}', '" . time() . "', '{$CURRENT_PIC_DATA['owner_id']}', '{$CURRENT_PIC_DATA['owner_name']}','{$CURRENT_PIC_DATA['title']}', '{$CURRENT_PIC_DATA['caption']}', '{$CURRENT_PIC_DATA['keywords']}', '{$CURRENT_PIC_DATA['approved']}', '{$CURRENT_PIC_DATA['user1']}', '{$CURRENT_PIC_DATA['user2']}', '{$CURRENT_PIC_DATA['user3']}', '{$CURRENT_PIC_DATA['user4']}', '{$CURRENT_PIC_DATA['pic_raw_ip']}', '{$CURRENT_PIC_DATA['pic_hdr_ip']}', '{$CURRENT_PIC_DATA['position']}')";
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
* @return 'true' in case of success
*/
function resize_image($src_file, $dest_file, $new_size, $method, $thumb_use)
{
    global $CONFIG, $ERROR;
    global $lang_errors;

    $imginfo = getimagesize($src_file);
    if ($imginfo == null)
        return false;
        // GD can only handle JPG & PNG images
    //if ($imginfo[2] != GIS_JPG && $imginfo[2] != GIS_PNG && ($method == 'gd1' || $method == 'gd2')) {
    if ($imginfo[2] != GIS_JPG && $imageinfo[2] != GIS_PNG && $CONFIG['GIF_support'] == 0) {
        $ERROR = $lang_errors['gd_file_type_err'];
        return false;
    }
    // height/width
    $srcWidth = $imginfo[0];
    $srcHeight = $imginfo[1];
    if ($thumb_use == 'ht') {
        $ratio = $srcHeight / $new_size;
    } elseif ($thumb_use == 'wd') {
        $ratio = $srcWidth / $new_size;
    } else {
        $ratio = max($srcWidth, $srcHeight) / $new_size;
    }
    $ratio = max($ratio, 1.0);
    $destWidth = (int)($srcWidth / $ratio);
    $destHeight = (int)($srcHeight / $ratio);
    // Method for thumbnails creation
    switch ($method) {
        case "im" :
            if (preg_match("#[A-Z]:|\\\\#Ai", __FILE__)) {
                // get the basedir, remove '/include'
                $cur_dir = substr(dirname(__FILE__), 0, -8);
                $src_file = '"' . $cur_dir . '\\' . strtr($src_file, '/', '\\') . '"';
                $im_dest_file = str_replace('%', '%%', ('"' . $cur_dir . '\\' . strtr($dest_file, '/', '\\') . '"'));
            } else {
                $src_file = escapeshellarg($src_file);
                $im_dest_file = str_replace('%', '%%', escapeshellarg($dest_file));
            }

            $output = array();
            /*
             * Hack for working with ImageMagick on WIndows even if IM is installed in C:\Program Files.
             * By Aditya Mooley <aditya@sanisoft.com>
             */
            if (eregi("win",$_ENV['OS'])) {
                $cmd = "\"".str_replace("\\","/", $CONFIG['impath'])."convert\" -quality {$CONFIG['jpeg_qual']} {$CONFIG['im_options']} -geometry {$destWidth}x{$destHeight} ".str_replace("\\","/" ,$src_file )." ".str_replace("\\","/" ,$im_dest_file );
                exec ("\"$cmd\"", $output, $retval);
            } else {
                $cmd = "{$CONFIG['impath']}convert -quality {$CONFIG['jpeg_qual']} {$CONFIG['im_options']} -geometry {$destWidth}x{$destHeight} $src_file $im_dest_file";
                exec ($cmd, $output, $retval);
            }


            if ($retval) {
                $ERROR = "Error executing ImageMagick - Return value: $retval";
                if ($CONFIG['debug_mode']) {
                    // Re-execute the command with the backtick operator in order to get all outputs
                    // will not work is safe mode is enabled
                    $output = `$cmd 2>&1`;
                    $ERROR .= "<br /><br /><div align=\"left\">Cmd line : <br /><span style=\"font-size:120%\">" . nl2br(htmlspecialchars($cmd)) . "</span></div>";
                    $ERROR .= "<br /><br /><div align=\"left\">The convert program said:<br /><span style=\"font-size:120%\">";
                    $ERROR .= nl2br(htmlspecialchars($output));
                    $ERROR .= "</span></div>";
                }
                @unlink($dest_file);
                return false;
            }
            break;

        case "gd1" :
            if (!function_exists('imagecreatefromjpeg')) {
                cpg_die(CRITICAL_ERROR, 'PHP running on your server does not support the GD image library, check with your webhost if ImageMagick is installed', __FILE__, __LINE__);
            }
            if ($imginfo[2] == GIS_JPG)
                $src_img = imagecreatefromjpeg($src_file);
            else
                $src_img = imagecreatefrompng($src_file);
            if (!$src_img) {
                $ERROR = $lang_errors['invalid_image'];
                return false;
            }
            $dst_img = imagecreate($destWidth, $destHeight);
            imagecopyresized($dst_img, $src_img, 0, 0, 0, 0, $destWidth, (int)$destHeight, $srcWidth, $srcHeight);
                        touch($dest_file);
            $fh=fopen($dest_file,'w');
            fclose($fh);
            imagejpeg($dst_img, $dest_file, $CONFIG['jpeg_qual']);
            imagedestroy($src_img);
            imagedestroy($dst_img);
            break;

        case "gd2" :
            if (!function_exists('imagecreatefromjpeg')) {
                cpg_die(CRITICAL_ERROR, 'PHP running on your server does not support the GD image library, check with your webhost if ImageMagick is installed', __FILE__, __LINE__);
            }
            if (!function_exists('imagecreatetruecolor')) {
                cpg_die(CRITICAL_ERROR, 'PHP running on your server does not support GD version 2.x, please switch to GD version 1.x on the admin page', __FILE__, __LINE__);
            }
            if ($imginfo[2] == GIS_GIF && $CONFIG['GIF_support'] == 1)
                $src_img = imagecreatefromgif($src_file);
            elseif ($imginfo[2] == GIS_JPG)
                $src_img = imagecreatefromjpeg($src_file);
            else
                $src_img = imagecreatefrompng($src_file);
            if (!$src_img) {
                $ERROR = $lang_errors['invalid_image'];
                return false;
            }
            if ($imginfo[2] == GIS_GIF)
              $dst_img = imagecreate($destWidth, $destHeight);
            else
              $dst_img = imagecreatetruecolor($destWidth, $destHeight);
            imagecopyresampled($dst_img, $src_img, 0, 0, 0, 0, $destWidth, (int)$destHeight, $srcWidth, $srcHeight);
                        touch($dest_file);
            $fh=fopen($dest_file,'w');
            fclose($fh);
            imagejpeg($dst_img, $dest_file, $CONFIG['jpeg_qual']);
            imagedestroy($src_img);
            imagedestroy($dst_img);
            break;
    }
    // Set mode of uploaded picture
    @chmod($dest_file, octdec($CONFIG['default_file_mode'])); //silence the output in case chmod is disabled
    // We check that the image is valid
    $imginfo = getimagesize($dest_file);
    if ($imginfo == null) {
        $ERROR = $lang_errors['resize_failed'];
        @unlink($dest_file);
        return false;
    } else {
        return true;
    }
}
?>