<?php
// ------------------------------------------------------------------------- //
//  Coppermine Photo Gallery                                                 //
// ------------------------------------------------------------------------- //
//  Copyright (C) 2002,2003  Gr�ory DEMAR <gdemar@wanadoo.fr>                //
//  http://www.chezgreg.net/coppermine/                                      //
// ------------------------------------------------------------------------- //
//  Based on PHPhotoalbum by Henning Stverud <henning@stoverud.com>          //
//  http://www.stoverud.com/PHPhotoalbum/                                    //
// ------------------------------------------------------------------------- //
//  Hacked by Tarique Sani <tarique@sanisoft.com>                            //
//  see http://www.sanisoft.com/cpg/README.txt for                           //
//  details                                                                  //
// ------------------------------------------------------------------------- //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
// ------------------------------------------------------------------------- //

define('IN_COPPERMINE', true);
define('RATEPIC_PHP', true);

require('include/init.inc.php');


// Check if required parameters are present
if (!isset($HTTP_GET_VARS['pid'])) cpg_die(CRITICAL_ERROR, $lang_errors['param_missing'], __FILE__, __LINE__);

$pic  = (int)$HTTP_GET_VARS['pid'];

// If user does not accept script's cookies, we don't accept the vote
if (!isset($HTTP_COOKIE_VARS[$CONFIG['cookie_name'].'_data'])) {
	header('Location: displayimage.php?pos='.(-$pid));
	exit;
}


$location = "displayimage.php?pos=".(-$pic);
$header_location = ( @preg_match('/Microsoft|WebSTAR|Xitami/', getenv('SERVER_SOFTWARE')) ) ? 'Refresh: 0; URL=' : 'Location: ';
header($header_location.$location);
pageheader($lang_info,"<META http-equiv=\"refresh\" content=\"1;url=$location\">");
msg_box($lang_info, $lang_rate_pic_php['rate_ok'], $lang_continue, $location);
pagefooter();
ob_end_flush();
?>
