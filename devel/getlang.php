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
define('CONFIG_PHP', true);

define('LANG_DIR', 'lang');

require('include/init.inc.php');

$dir = opendir(LANG_DIR);
$lang_files = array();
while($file = readdir($dir)){
	if(is_file(LANG_DIR.'/'.$file)) {
		$lang_files[] = $file;
	}
}
closedir($dir);
asort($lang_files);

if(isset($HTTP_GET_VARS['get'])){
	$file_index = (int)$HTTP_GET_VARS['get'];
	if ((isset($lang_files[$file_index]))) {
	    header("Content-type: application/php");
		header("Content-Disposition: attachment; filename={$lang_files[$file_index]}");
		fpassthru(fopen(LANG_DIR.'/'.$lang_files[$file_index], 'r'));
		exit;
	}
}

pageheader('Language files');
starttable('100%', 'Language files');
foreach($lang_files as $index => $file){
	echo <<<EOT
		<tr>
			<td class="tableb">
				<img src="images/folder.gif" alt="">&nbsp;<a href="$PHP_SELF?get=$index">$file</a>
			</td>
		</tr>
EOT;
}
endtable();
pagefooter();
ob_end_flush();
?>