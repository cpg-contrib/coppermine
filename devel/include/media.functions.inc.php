<?php
// ------------------------------------------------------------------------- //
//  Coppermine Photo Gallery                                                 //
// ------------------------------------------------------------------------- //
//  Copyright (C) 2002,2003  Gregory DEMAR                                   //
//  http://www.chezgreg.net/coppermine/                                      //
// ------------------------------------------------------------------------- //
//  Based on PHPhotoalbum by Henning Stverud <henning@stoverud.com>          //
//  http://www.stoverud.com/PHPhotoalbum/                                    //
// ------------------------------------------------------------------------- //
// Updated by the Coppermine Dev Team                                        //
// (http://coppermine.sf.net/team/)                                          //
// see /docs/credits.html for details                                        //
// ------------------------------------------------------------------------- //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
// ------------------------------------------------------------------------- //

function get_type($filename)
{
    global $CONFIG;
 	static $file_types = array();
 	if (count($file_types)==0) {
 	    $result = db_query('SELECT extension, content_type, media_type FROM '.$CONFIG['TABLE_FILETYPES'].';');
 	    while ($row = mysql_fetch_array($result)) {
            $files_types[$row['extension']] = $row;
        }
        mysql_free_result();
    }
    if (!is_array($filename))
        $filename = explode('.',$filename);
    $EOA = count($filename)-1;
    @return $file_types[$file[$EOA]];
}

function is_image(&$file)
{
        return get_type($file,$IMG_TYPES);
}

function is_movie(&$file)
{
        global $MOV_TYPES;
        return file_type_test($file,$MOV_TYPES);
}

function is_audio(&$file)
{
        global $SND_TYPES;
        return file_type_test($file,$SND_TYPES);
}

function is_document(&$file)
{
        global $DOC_TYPES;
        return file_type_test($file,$DOC_TYPES);
}

function is_known_filetype(&$file) {
        return is_image($file) || is_movie($file) || is_audio($file) || is_document($file);
}
?>
