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

define('IN_COPPERMINE', true);
require('include/init.inc.php');
if (!GALLERY_ADMIN_MODE) cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);

$redirect = "admin.php";
pageheader($lang_common['information'], "<meta http-equiv=\"refresh\" content=\"100;url=$redirect\" />");
msg_box($lang_info, $message, $lang_common['continue'], $lang_errors['page_removed_redirector']);
pagefooter();
ob_end_flush();
?>