<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2009 Coppermine Dev Team
  v1.1 originally written by Gregory DEMAR

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 3
  as published by the Free Software Foundation.
  
  ********************************************
  Coppermine version: 1.4.20
  $HeadURL$
  $Revision$
  $Author$
  $Date$
**********************************************/

/**
* Coppermine Photo Gallery 1.4.14 anycontent.php
*
* This file file gets included in the index.php if you set the option in admin
* can be used to display any content from any program, it is always to be edited
* according to tastes and then used
*
* @copyright 2002,2007 Gregory DEMAR, Coppermine Dev Team
* @license http://www.gnu.org/licenses/gpl.html GNU General Public License V3
* @package Coppermine
* @version $Id$
*/

if (!defined('IN_COPPERMINE')) die('Not in Coppermine...');

starttable("100%", "Welcome");

?>
<tr><td class="tableb" >
This is for any content block - just a test - Edit the file "anycontent.php" to change what is shown here
</td></tr>
<?php
endtable();

?>
