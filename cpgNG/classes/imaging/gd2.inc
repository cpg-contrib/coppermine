<?php
/*********************************************
  CPG-NUKE: Advanced Content Management System
  ********************************************
  Copyright (c) 2004 by CPG-Nuke Dev Team
  http://www.cpgnuke.com

  CPG-Nuke is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source$
  $Revision$
  $Author$
  $Date$

***********************************************************************/

class Graphic {

  function _createfrom($src_file, &$imginfo)
  {
    // try to get more memory for executing large pictures
    if (CAN_MOD_INI) ini_set('memory_limit', '32M');
    if (!$imginfo) $imginfo = getimagesize($src_file);
    if (!$imginfo) return -1;
    if ($imginfo[2] == IMAGETYPE_GIF) {
        if (!function_exists('imagecreatefromgif')) {
            cpg_error('GD running on your server does not support the GIF fileformat');
        }
        return imagecreatefromgif($src_file);
    } else if ($imginfo[2] == IMAGETYPE_JPEG) {
        if (!function_exists('imagecreatefromjpeg')) {
            cpg_error('GD running on your server does not support the JPEG fileformat');
        }
        return imagecreatefromjpeg($src_file);
    } else {
        return imagecreatefrompng($src_file);
    }
  }

  function resize($src_file, $dest_info, $dest_file, $imginfo=false)
  {
    $src_img = Graphic::_createfrom($src_file, $imginfo);
    if (!$imginfo) return -1;
    if (!$src_img) { return -2; }

    $resize = ($dest_info[0] != $imginfo[0] || $dest_info[1] != $imginfo[1]);
    if ($resize) {
        if (function_exists('imagecreatetruecolor')) {
            $dst_img = imagecreatetruecolor($dest_info[0], $dest_info[1]);
            imagecopyresampled($dst_img, $src_img, 0, 0, 0, 0, $dest_info[0], $dest_info[1], $imginfo[0], $imginfo[1]);
        } else {
            // GD 1 :cry:
            $dst_img = imagecreate($dest_info[0], $dest_info[1]);
            imagecopyresized($dst_img, $src_img, 0, 0, 0, 0, $dest_info[0], $dest_info[1], $imginfo[0], $imginfo[1]);
        }
        imagedestroy($src_img);
    } else {
        // Destination image is same size so reduce useless memory usage
        $dst_img =& $src_img;
    }

    if (!isset($dest_info[2])) { $dest_info[2] = $imginfo[2]; }
    if ($dest_info[2] == IMAGETYPE_GIF && !function_exists('imagegif')) { $dest_info[2] = IMAGETYPE_PNG; }
    if ($dest_file == '') {
        header('Content-type: '.image_type_to_mime_type($dest_info[2]));
    } else {
        $dest_file = image_file_to_extension($dest_file, $dest_info[2]);
    }

//    $dest_info['text'] = 'Uploaded by: djmaze @ cpgnuke.com';
    if (isset($dest_info['watermark'])) {
        $text = $dest_info['watermark']['text'];
        $font = 2;
        $width = strlen($text)*imagefontwidth($font);
        if (function_exists('imagecolorallocatealpha')) {
            $color = imagecolorallocatealpha($dst_img, 255, 255, 255, 60);
        } else {
            $color = imagecolorallocate($dst_img, 255, 255, 255, 60);
        }
        if ($dest_info[0] < $dest_info[1] && $dest_info[0] < $width+2) {
            $x = $dest_info[0]-imagefontheight($font);
            $y = $dest_info[1]-$width-2;
            imagefilledrectangle($dst_img, $x, $y, $dest_info[0], $dest_info[1], $color);
            imagestringup($dst_img, $font, $x, $dest_info[1]-2, $text, ImageColorAllocate($dst_img, 0, 0, 0));
        } else {
            $x = $dest_info[0]-$width-2;
            $y = $dest_info[1]-imagefontheight($font);
            imagefilledrectangle($dst_img, $x, $y, $dest_info[0], $dest_info[1], $color);
            ImageString($dst_img, $font, $x+1, $y, $text, ImageColorAllocate($dst_img, 0, 0, 0));
        }
    }
    if ($dest_info[2] == IMAGETYPE_GIF) {
        imagegif($dst_img, $dest_file);
    } else if ($dest_info[2] == IMAGETYPE_JPEG) {
        if (!isset($dest_info['quality']) || intval($dest_info['quality']) < 10) $dest_info['quality'] = 85;
        imagejpeg($dst_img, $dest_file, intval($dest_info['quality']));
    } else {
        imagepng($dst_img, $dest_file);
    }
    imagedestroy($dst_img);
    return $dest_file; // return same or new filename depending on IMAGETYPE
  }

  function show($src_file, $dest_info)
  {
    Graphic::resize($src_file, $dest_info, '');
    exit;
  }
}
