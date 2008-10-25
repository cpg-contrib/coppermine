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
  $HeadURL: https://coppermine.svn.sourceforge.net/svnroot/coppermine/trunk/cpg1.5.x/anycontent.php $
  $Revision: 5126 $
  $LastChangedBy: gaugau $
  $Date: 2008-10-17 13:10:13 +0530 (Fri, 17 Oct 2008) $
**********************************************/

/**
* Coppermine Photo Gallery anycontent.php
*
* This file file gets included in the index.php if you set the option in admin
* can be used to display any content from any program, it is always to be edited
* according to tastes and then used
*
* @copyright 2002-2006 Gregory DEMAR, Coppermine Dev Team
* @license http://opensource.org/licenses/gpl-license.php GNU General Public License V2
* @package Coppermine
* @version $Id: anycontent.php 5126 2008-10-17 07:40:13Z gaugau $
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