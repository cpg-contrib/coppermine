<?php
// ------------------------------------------------------------------------- //
// Coppermine Photo Gallery 1.2.0                                            //
// ------------------------------------------------------------------------- //
// Copyright (C) 2002,2003 Gregory DEMAR <gdemar@wanadoo.fr>                 //
// http://www.chezgreg.net/coppermine/                                       //
// ------------------------------------------------------------------------- //
// Updated by the Coppermine Dev Team                                        //
// (http://coppermine.sf.net/team/)                                          //
// see /docs/credits.html for details                                        //
// ------------------------------------------------------------------------- //
// This program is free software; you can redistribute it and/or modify      //
// it under the terms of the GNU General Public License as published by      //
// the Free Software Foundation; either version 2 of the License, or         //
// (at your option) any later version.                                       //
// ------------------------------------------------------------------------- // 

define('IN_COPPERMINE', true);
define('EDITPICS_PHP', true);

require('include/init.inc.php');

if (!(GALLERY_ADMIN_MODE || USER_ADMIN_MODE)) cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);


if (isset($HTTP_GET_VARS['id'])) {
	$pid = (int)$HTTP_GET_VARS['id'];
} elseif (isset($HTTP_GET_VARS['id'])) {
	$pid = (int)$HTTP_POST_VARS['id'];
} else {
	$pid = -1;
}


$title = $lang_editpics_php['edit_pics'];

pageheader($title);

//Code after this is Specific to the individual actions - it would be preferable to have each actions in their own inc file

//Edit description of the picture 
include("include/editDesc.inc.php");

//Upload new thumbnail

//Rotate Image 

//Just imagine 

endtable();
echo "<center>";
pagefooter();
ob_end_flush();
?>
