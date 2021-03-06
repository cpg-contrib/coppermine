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
  $HeadURL: https://coppermine.svn.sourceforge.net/svnroot/coppermine/trunk/cpg1.5.x/mode.php $
  $Revision: 5129 $
  $LastChangedBy: gaugau $
  $Date: 2008-10-18 16:03:12 +0530 (Sat, 18 Oct 2008) $
**********************************************/

/**
* Coppermine Photo Gallery 1.5.0 mode.php
*
* Toggles admin controls on / off
*
* @copyright 2002-2007 Gregory DEMAR, Coppermine Dev Team
* @package Coppermine
* @version $Id: mode.php 5129 2008-10-18 10:33:12Z gaugau $
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

  cpg_config_set('display_coppermine_news', $value);

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