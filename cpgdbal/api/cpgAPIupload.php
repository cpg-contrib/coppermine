<?php
/**
 * upload.php - API for Coppermine 1.4
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
define('IN_COPPERMINE', true);
define('UPLOAD_PHP', true);
define('DB_INPUT_PHP', true);
define('ADMIN_PHP', true);

require ('cpgAPIinit.inc.php');
require ("../include/media.functions.inc.php");
require ("cpgAPIpicmgmt.inc.php");

// Check to see if user can upload pictures.  Quit with an error if he cannot.
if (!USER_CAN_UPLOAD_PICTURES) {
    cpg_die(20);
}

if (!isset($_POST['aid']) || empty($_POST['aid'])) {
  cpg_die(1);
}
if (!isset($_FILES['file']['name'])) {
  cpg_die(2);
}

// Check if the album id provided is valid
if (!GALLERY_ADMIN_MODE) {
    $result = cpg_db_query("SELECT category FROM {$CONFIG['TABLE_ALBUMS']} WHERE aid='".(int)$_POST['aid']."' and (uploads = 'YES' OR category = '" . (USER_ID + FIRST_USER_CAT) . "')");
    if (mysql_num_rows($result) == 0) {
      cpg_die(19);
    }
    $row = mysql_fetch_array($result);
    mysql_free_result($result);
    $category = $row['category'];
} else {
    $result = cpg_db_query("SELECT category FROM {$CONFIG['TABLE_ALBUMS']} WHERE aid='".(int)$_POST['aid']."'");
    if (mysql_num_rows($result) == 0) {
      cpg_die(19);
    }

    $row = mysql_fetch_array($result);
    mysql_free_result($result);
    $category = $row['category'];
}

// Assign maximum file size for browser crontrols.
$max_file_size = $CONFIG['max_upl_size'] << 10;

// Check for error code support. Set the error code.
if (!isset($_FILES['file']['error'])) {
    // This version of PHP does not support error codes (PHP < 4.2.0).  Create our own error code.
    $error_code = 'default';
} else {
    // We have error support.
    $error_support = 'TRUE';
}

// Check for error code support. Set the error code.
if ($error_support) {
    $error_code = $_FILES['file']['error'];
}

// Create the failure ordinal for ordering the report of failed uploads.
$failure_cardinal = $counter + 1;
$failure_ordinal = ''.$failure_cardinal.'. ';

// If there is no file name, make a dummy name for the error reporting system.
if (($_FILES['file']['name'] == '')) {
    $file_name = 'filename_unavailable';
} else {
    $file_name = $_FILES['file']['name'];
}

// Test for a blank file upload box.
if (empty($_FILES['file']['name'])) {
  cpg_die(3);
}


// Check filename and extension:
// Check that the file uploaded has a valid name and extension, and replace forbidden chars with underscores.
// Initialise the $matches array.
$matches = array();

// Get the forbidden characters from the Admin console string, and do any necessary translation. Return the translated string.
$forbidden_chars = strtr($CONFIG['forbiden_fname_char'], array('&amp;' => '&', '&quot;' => '"', '&lt;' => '<', '&gt;' => '>'));

// If magic quotes is on, remove the slashes it added to the file name.
if (get_magic_quotes_gpc()) {
  $_FILES['file']['name'] = stripslashes($_FILES['file']['name']);
}

// Create the holder $picture_name by translating the file name. Translate any forbidden character into an underscore.
$picture_name = strtr($_FILES['file']['name'], $forbidden_chars, str_repeat('_', strlen($CONFIG['forbiden_fname_char'])));

// Analyze the file extension using regular expressions.
if (!preg_match("/(.+)\.(.*?)\Z/", $picture_name, $matches)) {

    // The file name is invalid.
    $matches[1] = 'invalid_fname';

    // Make a bogus file extension to trigger Coppermine's defenses.
    $matches[2] = 'xxx';
}

// If there is no extension, or if the extension is unknown/not permitted by Coppermine, zap the intruder.
if ($matches[2] == '' || !is_known_filetype($matches)) {
  cpg_die(5);
}

// Check for upload errors.

if (!($error_code == '0') and !($error_code == 'default')) {

    // PHP has detected a file upload error.
    if ($error_code == '1') {
        $error_message = $lang_upload_php['exc_php_ini'];
    } elseif ($error_code == '2') {
        $error_message = $lang_upload_php['exc_file_size'];
    } elseif ($error_code == '3') {
        $error_message = $lang_upload_php['partial_upload'];
    } elseif ($error_code == '4') {
        $error_message = $lang_upload_php['no_upload'];
    } else {
        $error_message = $lang_upload_php['unknown_code'];
    }
    cpg_die(6);

} elseif ($_FILES['file']['tmp_name'] == '') {
   // There is no temporary file, so the file did not upload. Make a note of it in the file_failure_array and flip the failure switch to generate the ordinal.
    cpg_die(7);
} elseif ($_FILES['file']['size'] <= 0) {
    // The file contains no data or was corrupted. Make a note of it in the error array.
    cpg_die(8);
} elseif ($_FILES['file']['size'] > $max_file_size) {
    // The file exceeds the amount specified by the max upload directive. Either the browser is stupid, or somebody isn't playing nice. (Ancient browser - MAX_UPLOAD forgery)
    cpg_die(9);
}

// Check to make sure the file was uploaded via POST.
if (!is_uploaded_file($_FILES['file']['tmp_name'])) {
    // We reject the file, and make a note of the error.
    cpg_die(10);
}

// Pictures are moved in a directory named 10000 + USER_ID
if (USER_ID && $CONFIG['silly_safe_mode'] != 1) {
  $filepath = $CONFIG['userpics'] . (FIRST_USER_CAT + USER_ID)."/";
  $dest_dir = "../".$CONFIG['fullpath'] . $filepath;
  if (!is_dir($dest_dir)) {
      mkdir($dest_dir, octdec($CONFIG['default_dir_mode']));
      if (!is_dir($dest_dir)) {
        cpg_die(11);
      }
      @chmod($dest_dir, octdec($CONFIG['default_dir_mode'])); //silence the output in case chmod is disabled
      $fp = fopen($dest_dir . '/index.html', 'w');
      fwrite($fp, ' ');
      fclose($fp);
  }
} else {
  $filepath = $CONFIG['userpics'];
  $dest_dir = $CONFIG['fullpath'] . $filepath;
}

// Create a unique name for the file to be uploaded
$nr = 0;
$uniqueName = $matches[1] . '.' . $matches[2];
while (file_exists($dest_dir . $uniqueName)) {
    $uniqueName = $matches[1] . '~' . $nr++ . '.' . $matches[2];
}

$path_to_image = $dest_dir . $uniqueName;

//Now we upload the file.
if (!(move_uploaded_file($_FILES['file']['tmp_name'], $path_to_image))) {

    // The file upload has failed.
    cpg_die(12);
}

// Change file permission
@chmod($path_to_image, octdec($CONFIG['default_file_mode'])); //silence the output in case chmod is disabled

// Create a testing alias.
$picture_alias = $matches[1].".".$matches[2];

// Check to see if the filename is consistent with that of a picture.
if (is_image($picture_alias)) {

    // If it is, get the picture information
    $imginfo = cpg_getimagesize($path_to_image);

    // If cpg_getimagesize does not recognize the file as a picture, delete the picture.
    if ($imginfo === 'FALSE') {
        @unlink($path_to_image);

        // The file upload has failed -- the image is not an image or it is corrupt.
        cpg_die(13);

    // JPEG and PNG only are allowed with GD. If the image is not allowed for GD,delete it.
    //} elseif ($imginfo[2] != GIS_JPG && $imginfo[2] != GIS_PNG && ($CONFIG['thumb_method'] == 'gd1' || $CONFIG['thumb_method'] == 'gd2')) {
    } elseif ($imginfo[2] != GIS_JPG && $imginfo[2] != GIS_PNG && $CONFIG['GIF_support'] == 0 && $CONFIG['thumb_method'] != 'im' && $CONFIG['thumb_method'] != 'gd2') {
        @unlink($path_to_image);

        // The file upload has failed -- the image is not allowed with GD.
        cpg_die(14);

    // Check that picture size (in pixels) is lower than the maximum allowed. If not, delete it.
    } elseif (max($imginfo[0], $imginfo[1]) > $CONFIG['max_upl_width_height']) {
    // Yet to implement in API

      if ((USER_IS_ADMIN && $CONFIG['auto_resize'] == 1) || (!USER_IS_ADMIN && $CONFIG['auto_resize'] > 0)) {
        //resize_image($uploaded_pic, $uploaded_pic, $CONFIG['max_upl_width_height'], $CONFIG['thumb_method'], $imginfo[0] > $CONFIG['max_upl_width_height'] ? 'wd' : 'ht');
        resize_image($path_to_image, $path_to_image, $CONFIG['max_upl_width_height'], $CONFIG['thumb_method'], $CONFIG['thumb_use']);
      } else {
        @unlink($path_to_image);

        // The file upload has failed -- the image dimensions exceed the allowed amount.
        $file_failure_array[] = array( 'failure_ordinal'=>$failure_ordinal, 'file_name'=> $file_name, 'error_code'=>$lang_upload_php['pixel_allowance']);

        $_SESSION['fileUpload'][$counter]['error'] = $lang_upload_php['pixel_allowance'];
        $_SESSION['fileUpload'][$counter]['actualName'] = $file_name;
        // There is no need for further tests or action, so skip the remainder of the iteration.
        continue;
      }
    }

// Image is ok
}
$aid = (int)$_POST['aid'];
$title = empty($_POST['title']) ? '' : $_POST['title'];
$caption = empty($_POST['description']) ? '' : $_POST['description'];
$keywords = empty($_POST['keywords']) ? '' : $_POST['keywords'];
$user1 = '';
$user2 = '';
$user3 = '';
$user4 = '';
$raw_ip = '';
$hdr_ip = '';

$result = add_picture($aid, $filepath, $uniqueName, 0, $title, $caption, $keywords, $user1, $user2, $user3, $user4, $category, $raw_ip, $hdr_ip);
if ($result) {
print '<?xml version="1.0" encoding="'.$CONFIG['charset'].'" ?>
<uploader>
  <status>ok</status>
  <pid>'.$result.'</pid>
</uploader>';
} else {
  cpg_die(17);
}
?>