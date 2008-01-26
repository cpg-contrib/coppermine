<?php
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
  $Revision$
  $LastChangedBy$
  $Date$
**********************************************/

/**
* Coppermine Photo Gallery 1.5.0 mode.php
*
* Toggles admin controls on / off
*
* @copyright 2002-2007 Gregory DEMAR, Coppermine Dev Team
* @package Coppermine
* @version $Id$
*/


define('IN_COPPERMINE', true);
define('MODE_PHP', true);

require('include/init.inc.php');

//if ($_GET['what'] == 'news') {
if (($superCage->get->getAlpha('what')) == 'news'){
  if (!GALLERY_ADMIN_MODE) {
    cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);
  }
  if ($CONFIG['display_coppermine_news'] == 0) {
    $value = 1;
    $message = $lang_mode_php['news_show'];
  } else {
    $value = 0;
    $message = $lang_mode_php['news_hide'];
  }

  cpg_db_query("UPDATE {$CONFIG['TABLE_CONFIG']} SET value = '$value' WHERE name = 'display_coppermine_news'");
  $CONFIG['display_coppermine_news'] = $value;
  if ($CONFIG['log_mode'] == CPG_LOG_ALL) {
      log_write('CONFIG UPDATE SQL: '.
        "UPDATE {$CONFIG['TABLE_CONFIG']} SET value = '$value' WHERE name = 'display_coppermine_news'\n".
        'TIME: '.date("F j, Y, g:i a")."\n".
        'USER: '.$USER_DATA['user_name'],
        CPG_DATABASE_LOG
        );
  }
  //$referer = $_GET['referer'] ? $_GET['referer'] : 'index.php';
  /*$referer = $superCage->get->keyExists('referer') ? $superCage->get->getRaw('referer') : 'index.php';
  $referer = rawurldecode($referer);
  $referer = str_replace('&amp;', '&', $referer);
  $referer = str_replace('&amp;', '&', $referer);*/
  cpgRedirectPage($CPG_REFERER, $lang_common['information'], $message,3);

} else {

  if (!USER_IS_ADMIN) {
      cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);
  }

  //if (!isset($_GET['admin_mode']) || !isset($_GET['referer'])) {
  if (!$superCage->get->keyExists('admin_mode') || !$CPG_REFERER){
      cpg_die(CRITICAL_ERROR, $lang_errors['param_missing'], __FILE__, __LINE__);
  }

 // $admin_mode = (int)$_GET['admin_mode'] ? 1 : 0;
  $admin_mode = $superCage->get->getInt('admin_mode')? 1 : 0;
  //$referer = $_GET['referer'] ? $_GET['referer'] : 'index.php';
  //$referer = $superCage->get->keyExists('referer') ? $superCage->get->getRaw('referer') : 'index.php';
  $USER['am'] = $admin_mode;
  if (!$admin_mode) {
      $CPG_REFERER = 'index.php';
  }

  cpgRedirectPage($CONFIG['ecards_more_pic_target'].$CPG_REFERER, $lang_common['information'], $lang_mode_php[$admin_mode],3);
}
?>