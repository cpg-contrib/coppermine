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
  $Source: /cvsroot/coppermine/devel/admin.php,v $
  $Revision: 4502 $
  $LastChangedBy: pvanrompay $
  $Date: 2008-06-06 03:51:20 +0530 (Fri, 06 Jun 2008) $
**********************************************/

define("IN_COPPERMINE", true);
require("include/init.inc.php");
require("include/captcha.inc.php");

/**
 * Fonts to create the captcha image
 */
$aFonts = array('images/fonts/acidic.ttf', 'images/fonts/hurryup.ttf');

// create new image
$oPhpCaptcha = new PhpCaptcha($aFonts, 150, 30, 5, 20, false);
$oPhpCaptcha->Create();
?>