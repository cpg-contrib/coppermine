<?php
// ------------------------------------------------------------------------- //
//  Coppermine Photo Gallery                                                 //
// ------------------------------------------------------------------------- //
//  Copyright (C) 2002,2003  Grégory DEMAR <gdemar@wanadoo.fr>               //
//  http://www.chezgreg.net/coppermine/                                      //
// ------------------------------------------------------------------------- //
//  Based on PHPhotoalbum by Henning Støverud <henning@stoverud.com>         //
//  http://www.stoverud.com/PHPhotoalbum/                                    //
// ------------------------------------------------------------------------- //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
// ------------------------------------------------------------------------- //

define('IN_COPPERMINE', true);
define('LOGOUT_PHP', true);

require('include/init.inc.php');

if(!USER_ID) cpg_die(ERROR, $lang_logout_php['err_not_loged_in'], __FILE__, __LINE__);

if(defined('UDB_INTEGRATION')) udb_logout_page();

setcookie($CONFIG['cookie_name'].'_pass', '', time()-86400, $CONFIG['cookie_path']);
setcookie($CONFIG['cookie_name'].'_uid', '', time()-86400, $CONFIG['cookie_path']);

$referer = 'index.php';

pageheader($lang_logout_php['logout'],"<META http-equiv=\"refresh\" content=\"3;url=$referer\">");
msg_box($lang_logout_php['logout'], sprintf($lang_logout_php['bye'], USER_NAME), $lang_continue, $referer);
pagefooter();
ob_end_flush();
?>