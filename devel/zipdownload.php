<?php
// ------------------------------------------------------------------------- //
// Coppermine Photo Gallery 1.3.0                                            //
// ------------------------------------------------------------------------- //
// Copyright (C) 2002,2003 Gregory DEMAR                                     //
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
// This script allows you to download your favpics as a zip, not linked      //
// directly from anywhere as yet but works : Tarique <tarique@sanisoft.com   //
//---------------------------------------------------------------------------//
define('IN_COPPERMINE', true);
define('THUMBNAILS_PHP', true);
define('INDEX_PHP', true);
require('include/init.inc.php');
include ( 'include/archive.php');

$filelist= array();

if (count($FAVPICS)>0){
	$favs = implode(",",$FAVPICS);
	$result = db_query("SELECT COUNT(*) from {$CONFIG['TABLE_PICTURES']} WHERE approved = 'YES' AND pid IN ($favs)");
	$nbEnr = mysql_fetch_array($result);
	$count = $nbEnr[0];
	mysql_free_result($result);

	$select_columns = 'filepath,filename';

	$result = db_query("SELECT $select_columns FROM {$CONFIG['TABLE_PICTURES']} WHERE approved = 'YES'AND pid IN ($favs) $limit");
	$rowset = db_fetch_rowset($result);
	foreach ($rowset as $key => $row){
	
		$filelist[] = $rowset[$key]['filepath'].$rowset[$key]['filename'];	
		
	}
}

$flags['storepath'] = 0;
$cwd = './albums';

$zip = new zipfile($cwd,$flags);

$zip->addfiles($filelist);

$zip->filedownload('pictures.zip');

?>
