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
  $HeadURL: https://coppermine.svn.sourceforge.net/svnroot/coppermine/trunk/cpg1.5.x/logout.php $
  $Revision: 5129 $
  $LastChangedBy: gaugau $
  $Date: 2008-10-18 16:03:12 +0530 (Sat, 18 Oct 2008) $
**********************************************/

define('IN_COPPERMINE', true);
define('LOGOUT_PHP', true);

require('include/init.inc.php');

if (!USER_ID) cpg_die(ERROR, $lang_logout_php['err_not_logged_in'], __FILE__, __LINE__);

if (defined('UDB_INTEGRATION')) $cpg_udb->logout_page();

/*
setcookie($CONFIG['cookie_name'] . '_pass', '', time()-86400, $CONFIG['cookie_path']);
setcookie($CONFIG['cookie_name'] . '_uid', '', time()-86400, $CONFIG['cookie_path']);
*/
//$referer = $_GET['referer'] ? $_GET['referer'] : 'index.php';
/*$referer = $superCage->get->keyExists('referer') ? $superCage->get->getRaw('referer') : 'index.php';
if (strpos($referer, "http") !== false) {
  $referer = "index.php";
}*/
cpgRedirectPage($CPG_REFERER, $lang_logout_php['logout'], sprintf($lang_logout_php['bye'], stripslashes(USER_NAME)),3);


?>