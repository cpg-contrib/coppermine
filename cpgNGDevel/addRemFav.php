<?php

/**
 * addRemFav.php
 *
 * This script is used to add/remove favorites using mini toolbar below thumbnails
 *
 * @package cpgNG
 * @author Amit <amit@sanisoft.com>
 * @version $Id$
 */

/**
 * Constant to prevent direct execution of config.inc.php
 */
define('IN_COPPERMINE', true);

/**
 * Require files
 */
require('include/init.inc.php');
require_once('classes/cpgAddFavorite.class.php');

$pid = (int)$_GET['pid'];

if ($pid > 0) {
  $favObj = new cpgAddFavorite($pid);

  $favObj->addFavoritePicture();

  $auth->getUserFavPics();

  if ($auth->userData['user_id'] > 0) {
    if (in_array($pid, $auth->favPics)) {
      $message = 'A';
    } else {
      $message = 'R';
    }
  } else {
    if (in_array($pid, $auth->favPics)) {
      $message = 'R';
    } else {
      $message = 'A';
    }
  }
} else {
  $message = $lang_errors['param_missing'];
}

echo $message;
flush();

?>
