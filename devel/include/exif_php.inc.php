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
 
define("EXIF_CACHE_FILE","exif.dat");
require("include/exif.inc.php");
 
function exif_parse_file($filename)
{	global $CONFIG;
	if (!is_readable($filename)) return false;
	$size = @getimagesize($filename);
	if ($size[2] != 2) return false; // Not a JPEG file
	
	//Check if we have the data of the said file in the table
	$sql = "SELECT * FROM {$CONFIG['TABLE_EXIF']} ".
	          "WHERE filename = '$filename'";
	
	$result = db_query($sql);
	
	if (mysql_num_rows($result)){
		$row = mysql_fetch_array($result);
		mysql_free_result($result);
		$exifParsed = unserialize($row["exifData"]);
		return $exifParsed;		
	}
	
	// No data in the table - read it from the image file
	$exifObj = new phpExifRW($filename);
        $exifObj->processFile();
	$exif = $exifObj->getImageInfo();
		
	$exifParsed = array();
	
	$Make = isset($exif['Make']);
	$Model = isset($exif['Model']);
	
	if (isset($exif['Make']) && isset($exif['Model'])){
		$exifParsed['Camera'] = trim($exif['Make'])." - ".trim($exif['Model']);
	}
		
	if (isset($exif['ExposureDate'])){
		$exifParsed['DateTaken'] = $exif['ExposureDate'];
	}
		
	if (isset($exif['Aperture'])){
		$exifParsed['Aperture'] = $exif['Aperture'];
	}
		
	if (isset($exif['ExposureTime'])){
		$exifParsed['ExposureTime'] = $exif['ExposureTime'];
	}
			
	if (isset($exif['FocalLength'])){
		$exifParsed['FocalLength'] = $exif['FocalLength'];
	}
			
	if (isset($exif['comment'])){
		$comment = $exif['comment'];
		$exifParsed['Comment'] = $comment; // eregi_replace("ASCII"," ", $comment);
	}
	
	// Insert it into table for future reference
	$sql = "INSERT INTO {$CONFIG['TABLE_EXIF']} ".
	          "VALUES ('$filename', '".addslashes(serialize($exifParsed))."')";
	
	$result = db_query($sql);
		
	return $exifParsed;	
}
?>
