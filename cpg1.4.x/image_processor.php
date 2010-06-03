<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2010 Coppermine Dev Team
  v1.0 originally written by Gregory Demar

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 3
  as published by the Free Software Foundation.

  ********************************************
  Coppermine version: 1.4.28
  $HeadURL$
  $Revision$
  $Author$
  $Date$
**********************************************/

define('IN_COPPERMINE', true);
require('include/init.inc.php');


$redirect = "index.php";
$message = <<< EOT
You are trying to access a file that has been removed from the Coppermine package for security reasons (details can be read on the Coppermine support board announcement thread "<a href="http://forum.coppermine-gallery.net/index.php/topic,65023.0.html" rel="external" class="external">cpg1.4.27 Security release - upgrade mandatory!</a>").<br />
You are now being redirected to your gallery's start page.
EOT;
pageheader($lang_info, "<meta http-equiv=\"refresh\" content=\"120;url=$redirect\" />");
msg_box($lang_info, $message, $lang_continue, $redirect);
pagefooter();
ob_end_flush();
?>