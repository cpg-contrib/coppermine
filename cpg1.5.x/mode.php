<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2007 Coppermine Dev Team
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

if ($_GET['what'] == 'news') {
  if (!GALLERY_ADMIN_MODE) {
    cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);
  }
  cpgRedirectPage($CONFIG['ecards_more_pic_target'].$referer, $lang_common['information'], $lang_mode_php['news_hide'],3);
} else {

  if (!USER_IS_ADMIN) {
      cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);
  }

  if (!isset($_GET['admin_mode']) || !isset($_GET['referer'])) {
      cpg_die(CRITICAL_ERROR, $lang_errors['param_missing'], __FILE__, __LINE__);
  }

  $admin_mode = (int)$_GET['admin_mode'] ? 1 : 0;
  $referer = $_GET['referer'] ? $_GET['referer'] : 'index.php';
  $USER['am'] = $admin_mode;
  if (!$admin_mode) {
      $referer = 'index.php';
  }

  cpgRedirectPage($CONFIG['ecards_more_pic_target'].$referer, $lang_common['information'], $lang_mode_php[$admin_mode],3);
}
?>