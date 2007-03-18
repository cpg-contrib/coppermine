<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2007 Coppermine Dev Team
  v1.1 originally written by Gregory DEMAR

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation; either version 2 of the License, or
  (at your option) any later version.
  ********************************************
  Coppermine version: 1.5.0
  $HeadURL$
  $Revision$
  $LastChangedBy$
  $Date$
**********************************************/

define('IN_COPPERMINE', true);
define('LOGOUT_PHP', true);

require('include/init.inc.php');

if (!USER_ID) cpg_die(ERROR, $lang_logout_php['err_not_loged_in'], __FILE__, __LINE__);

if (defined('UDB_INTEGRATION')) $cpg_udb->logout_page();

/*
setcookie($CONFIG['cookie_name'] . '_pass', '', time()-86400, $CONFIG['cookie_path']);
setcookie($CONFIG['cookie_name'] . '_uid', '', time()-86400, $CONFIG['cookie_path']);
*/
$message_id = cpgStoreTempMessage(sprintf($lang_logout_php['bye'], stripslashes(USER_NAME)));
$referer = 'index.php?message_id='.$message_id;

pageheader($lang_logout_php['logout'], "<META http-equiv=\"refresh\" content=\"0;url=$referer\">");
msg_box($lang_logout_php['logout'], sprintf($lang_logout_php['bye'], stripslashes(USER_NAME)), $lang_common['continue'], $referer);
pagefooter();
ob_end_flush();

?>