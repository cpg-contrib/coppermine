<?php

/**
 * utilAction.php.php
 *
 * This script is used to handle actions for 'util.php'
 *
 * @package cpgNG
 * @author Amit <amit@sanisoft.com>
 * @version $Id$
 */

/**
 * Constant to prevent direct execution of config.inc.php
 */
define('IN_COPPERMINE', true);
define('GIS_GIF', 1);
define('GIS_JPG', 2);
define('GIS_PNG', 3);

/**
 * Require files
 */
require('include/init.inc.php');
require_once('classes/cpgTemplate.class.php');
require_once('classes/cpgImgFactory.class.php');

/**
 * If logged in member is not admin then stop further execution of script
 */
if (!GALLERY_ADMIN_MODE) cpgUtils::cpgDie(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);

/**
 * Start/Continue the session
 */
session_start();

if ($_GET['header'] != 'no') {
  header('Content-type: image/gif');
}

/**
 * Get the index
 */
$index = (int)$_GET['index'];

$result = '';

/**
 * If file data is not set in session or zero files are there then exit
 */
if (!is_array($_SESSION['data'][$index])) {
  cpgUtils::cpgDie(ERROR, 'Invalid file index');
}

/**
 * If admin chooses to update thumbs and/or resized photos
 */
if ($_SESSION['action'] == 'update_thumbs') {
  $error1 = '';
  $error2 = '';
  $result1 = true;
  $result2 = true;

  /**
   * Create new object for 'cpgImgFactory' class
   */
  $cifObj = cpgImgFactory::getInstance();

  /**
   * Code to update thumbs
   */
  if ($_SESSION['updatetype'] == 0 || $_SESSION['updatetype'] == 2) {
    $result1 = $cifObj->resizeImage($_SESSION['data'][$index]['image'], $_SESSION['data'][$index]['thumb'], $config->conf['thumb_width'], $config->conf['thumb_use']);
    $error1 = $cifObj->error;
  }

  /**
   * Code to update resized photos
   */
  if ($_SESSION['updatetype'] == 1 || $_SESSION['updatetype'] == 2) {
    $imgDetails = array();
    $imgDetails = getimagesize($_SESSION['data'][$index]['image']);

    if (max($imgDetails[0], $imgDetails[1]) > $config->conf['picture_width'] && $config->conf['make_intermediate']) {
      $result2 = $cifObj->resizeImage($_SESSION['data'][$index]['image'], $_SESSION['data'][$index]['normal'], $config->conf['picture_width'], $config->conf['thumb_use']);
      $error2 = $cifObj->error;
    }
  }

  if ($result1 && $result2) {
    $result = 'ok';
  } else {
    $result = $error1.'<br>'.$error2;
  }
/**
 * If admin chooses to change file titles
 */
} else if ($_SESSION['action'] == 'filename_to_title') {
  $parsemode = (int)$_SESSION['parsemode'];
  $pid = (int)$_SESSION['data'][$index]['pid'];
  $filename = $_SESSION['data'][$index]['filename'];
  $newtitle = $_SESSION['data'][$index]['filename'];
  $pattern = '/(\d+)(.)(\d+)(.)(\d+)(.)(\d+)(.)(\d+)(.)(\d+)(.+)/';

  switch ($parsemode){
    case 0: // REMOVE .JPG AND REPLACE _ WITH [ ]
      $filename = substr($filename, 0, -4);
      $newtitle = str_replace('_', ' ', $filename);
      break;
    case 1: // CHANGE 2003_11_23_13_20_20.jpg TO 23/11/2003 13:20
      $newtitle = str_replace('%20', ' ', $filename);
      $replacement = '$5/$3/$1 $7:$9';
      $newtitle = preg_replace($pattern, $replacement, $filename);
      break;
    case 2: // CHANGE 2003_11_23_13_20_20.jpg TO 11/23/2003 13:20
      $newtitle = str_replace('%20', ' ', $filename);
      $replacement = '$3/$5/$1 $7:$9';
      $newtitle = preg_replace($pattern, $replacement, $filename);
      break;
    case 3: // CHANGE 2003_11_23_13_20_20.jpg TO 13:20
      $newtitle = str_replace('%20', ' ', $filename);
      $replacement = '$7:$9';
      $newtitle = preg_replace($pattern, $replacement, $filename);
      break;
  }

  $query = "UPDATE ".$config->conf['TABLE_PICTURES']." SET title = '$newtitle' WHERE pid = '$pid'";
  $return = $db->query($query);

  if ($return) {
    $result = 'ok';
  } else {
    $result = $return;
  }
/**
 * If admin chooses to delete original size photos
 */
} else if ($_SESSION['action'] == 'del_orig') {
  $image = $_SESSION['data'][$index]['image'];
  $thumb = $_SESSION['data'][$index]['thumb'];
  $pid = (int)$_SESSION['data'][$index]['pid'];
  $normal = $_SESSION['data'][$index]['normal'];

  if (file_exists($normal)) {
    $deleted = unlink($image);
    $renamed = rename($normal, $image);

    if ($deleted && $renamed) {
      $imagesize = getimagesize($image); // dimensions
      $imageFilesize = filesize($image); // bytes
      $totalFilesize = $imageFilesize + filesize($thumb);

      /**
       * Query to update image details
       */
      $query = 'UPDATE '.$config->conf['TABLE_PICTURES']." SET filesize = '$imageFilesize', total_filesize = '$totalFilesize', pwidth = '".$imagesize[0]."', pheight = '".$imagesize[1]."' WHERE pid = '$pid'";
      $db->query($query);

      $result = 'ok';
    } else {
      $result = '';

      if (!$deleted) $result .= sprintf($lang_util_php['error_deleting'], $image).'<br>';
      if (!$renamed) $result .= sprintf($lang_util_php['error_rename'], $normal, $image);
    }
  } else {
    $result = sprintf($lang_util_php['error_not_found'], $normal);
  }
/**
 * If admin chooses to delete intermediate photos
 */
} else if ($_SESSION['action'] == 'del_norm') {
  $image = $_SESSION['data'][$index]['image'];
  $thumb = $_SESSION['data'][$index]['thumb'];
  $pid = (int)$_SESSION['data'][$index]['pid'];
  $normal = $_SESSION['data'][$index]['normal'];

  if (file_exists($normal)) {
    $deleted = unlink($normal);

    if ($deleted) {
      $totalFilesize = filesize($image) + filesize($thumb);

      /**
       * Query to update image details
       */
      $query = 'UPDATE '.$config->conf['TABLE_PICTURES']." SET total_filesize = '$totalFilesize' WHERE pid = '$pid'";
      $db->query($query);

      $result = 'ok';
    } else {
      $result = sprintf($lang_util_php['error_deleting'], $normal);
    }
  } else {
    $result = sprintf($lang_util_php['error_not_found'], $normal);
  }
/**
 * If admin chooses to reload file dimensions and size information
 */
} else if ($_SESSION['action'] == 'refresh_db') {
  $prob = '';
  $result1 = true;
  $result2 = true;
  $result3 = true;

  $url = $_SESSION['data'][$index]['url'];
  $dbPid = (int)$_SESSION['data'][$index]['db_pid'];
  $thumbUrl = $_SESSION['data'][$index]['thumbUrl'];
  $dbPwidth = (int)$_SESSION['data'][$i]['dbPwidth'];
  $normalUrl = $_SESSION['data'][$index]['normalUrl'];
  $dbPheight = (int)$_SESSION['data'][$i]['dbPheight'];
  $fullPicUrl = $_SESSION['data'][$index]['fullPicUrl'];
  $dbTotalFilesize = (int)$_SESSION['data'][$index]['dbTotalFilesize'];

  if (file_exists($fullPicUrl)) {
    $filesize = @filesize($fullPicUrl);
    $dimensions = @getimagesize($fullPicUrl);

    if ($filesize) {
      $thumbFilesize = @filesize($thumbUrl);
      $normalFilesize = @filesize($normalUrl);
      $totalFilesize = ($filesize + $thumbFilesize + $normalFilesize);

      if ($totalFilesize == $dbTotalFilesize) {
        $result1 = true;
      } else {
        $prob .= 'Total filesize is incorrect<br />Database: '.$dbTotalFilesize.' bytes<br /> Actual: '.$totalFilesize.' bytes<br />';

        $query = 'UPDATE '.$config->conf['TABLE_PICTURES']." SET total_filesize = '$totalFilesize' WHERE pid = '$dbPid' LIMIT 1";
        $result1 = $db->query($query);
      }

      if ($filesize == $dbFilesize) {
        $result2 = true;
      } else {
        $prob .= 'Total filesize is incorrect<br />Database: '.$dbFilesize.' bytes<br />Actual: '.$filesize.' bytes<br />';

        $query = 'UPDATE '.$config->conf['TABLE_PICTURES']." SET filesize = '$filesize' WHERE pid = '$dbPid' LIMIT 1";
        $result2 = $db->query($query);
      }
    } else {
      $prob .= 'Could not obtain file size (may be invalid file), skipping....<br />';
    }

    if ($dimensions) {
      if ($dimensions[0] == $dbPwidth && $dimensions[1] == $dbPheight) {
        $result3 = true;
      } else {
        $prob .= 'Dimensions are incorrect<br />Database: '.$dbPwidth.'x'.$dbPheight.'<br />Actual: '.$dimensions[0].'x'.$dimensions[1].'<br />';

        $query = 'UPDATE '.$config->conf['TABLE_PICTURES']." SET `pwidth` = '".$dimensions[0]."', `pheight` = '".$dimensions[1]."' WHERE `pid` = '$dbPid' LIMIT 1";
        $result3 = $db->query($query);
      }
    } else {
      $prob .= 'Could not obtain dimension info, skipping....<br />';
    }
  } else {
    $prob .= 'File '.$fullPicUrl.' does not exist !<br />';
  }

  if ($result1 && $result2 && $result3) {
    $result = 'ok';
  } else {
    $result = $prob;
  }
}

/**
 * Check whether the placement was successfull
 */
if ($result == 'ok') {
  echo fread(fopen('images/up_ok.gif', 'rb'), filesize('images/up_ok.gif'));
} else {
  echo 'ERRORS :-<br>'.$result;
}

exit;

?>
