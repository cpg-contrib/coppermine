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

// REQUIRES GLOBAL VAR: CONFIG
// REQUIRES GLOBAL FUNCTION: db_query

global $FILE_TYPES;

// Map content types to corresponding user parameters
$content_types_to_vars = array('image'=>'allowed_img_types','audio'=>'allowed_snd_types','movie'=>'allowed_mov_types','document'=>'allowed_doc_types');
$CONFIG['allowed_file_extensions'] = '';

if (count($FILE_TYPES)==0) {
 	$result = db_query('SELECT extension, mime, content FROM '.$CONFIG['TABLE_FILETYPES'].';');
 	while ($row = mysql_fetch_array($result)) {
 	    // Only add types that are in both the database and user defined parameter
        if ($CONFIG[$content_types_to_vars[$row['content']]]=='ALL' || is_int(strpos('/'.$CONFIG[$content_types_to_vars[$row['content']]].'/','/'.$row['extension'].'/')))
        {
            $FILE_TYPES[$row['extension']] = $row;
            $CONFIG['allowed_file_extensions'].= '/'.$row['extension'];
    }   }
    mysql_free_result($result);
}

$CONFIG['allowed_file_extensions'] = substr($CONFIG['allowed_file_extensions'],1);

function get_type($filename,$filter=null)
{
    global $FILE_TYPES;
    if (!is_array($filename))
        $filename = explode('.',$filename);
    $EOA = count($filename)-1;
    $filename[$EOA] = strtolower($filename[$EOA]);

    if (!is_null($filter) && $FILE_TYPES[$filename[$EOA]]['content']==$filter)
        return $FILE_TYPES[$filename[$EOA]];
    elseif (is_null($filter))
        return $FILE_TYPES[$filename[$EOA]];
    else
        return null;
}

function is_image(&$file)
{
    return get_type($file,'image');
}

function is_movie(&$file)
{
    return get_type($file,'movie');
}

function is_audio(&$file)
{
    return get_type($file,'audio');
}

function is_document(&$file)
{
    return get_type($file,'document');
}

function is_known_filetype($file)
{
    return is_image($file) || is_movie($file) || is_audio($file) || is_document($file);
}
?>
