<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2006 Coppermine Dev Team
  v1.1 originally written by Gregory DEMAR

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation; either version 2 of the License, or
  (at your option) any later version.
  ********************************************
  Coppermine version: 1.4.4
  $Source$
  $Revision$
  $Author$
  $Date$
**********************************************/

// ------------------------------------------------------------------------- //
// This theme has all CORE items removed                                     //
// ------------------------------------------------------------------------- //
define('THEME_IS_XHTML10_TRANSITIONAL',1);

// Added to display flim_strip
function theme_display_film_strip(&$thumb_list, $nbThumb, $album_name, $aid, $cat, $pos, $sort_options, $mode = 'thumb')
{
    global $CONFIG, $THEME_DIR;
    global $template_film_strip, $lang_film_strip;

    static $template = '';
    static $thumb_cell = '';
    static $empty_cell = '';
    static $spacer = '';

    if ((!$template)) {
        $template = $template_film_strip;
        $thumb_cell = template_extract_block($template, 'thumb_cell');
        $empty_cell = template_extract_block($template, 'empty_cell');
    }

    $cat_link = is_numeric($aid) ? '' : '&amp;cat=' . $cat;

    $thumbcols = $CONFIG['thumbcols'];
    $cell_width = ceil(100 / $CONFIG['max_film_strip_items']) . '%';

    $i = 0;
    $thumb_strip = '';
    foreach($thumb_list as $thumb) {
        //modify $new_size for max dimension of thumbnails in filmstrip
        $new_size = 65;
        preg_match('/(?<=width=")[0-9]*/',$thumb['image'],$matches,PREG_OFFSET_CAPTURE);
        $srcWidth=$matches[0][0];
        preg_match('/(?<=height=")[0-9]*/',$thumb['image'],$matches,PREG_OFFSET_CAPTURE);
        $srcHeight=$matches[0][0];
        $ratio = max($srcWidth, $srcHeight) / $new_size;
        $ratio = max($ratio, 1.0);
        $destWidth = (int)($srcWidth / $ratio);
        $destHeight = (int)($srcHeight / $ratio);
        $thumb['image']=preg_replace('/width="[^"]*"/','width="'.$destWidth.'"',$thumb['image']);
        $thumb['image']=preg_replace('/height="[^"]*"/','height="'.$destHeight.'"',$thumb['image']);
        $i++;
        if ($mode == 'thumb') {
            $params = array('{CELL_WIDTH}' => $cell_width,
                '{LINK_TGT}' => "displayimage.php?album=$aid$cat_link&amp;pos={$thumb['pos']}",
                '{THUMB}' => $thumb['image'],
                '{CAPTION}' => $thumb['caption'],
                '{ADMIN_MENU}' => ''
                );
        } else {
            $params = array('{CELL_WIDTH}' => $cell_width,
                '{LINK_TGT}' => "index.php?cat={$thumb['cat']}",
                '{THUMB}' => $thumb['image'],
                '{CAPTION}' => '',
                '{ADMIN_MENU}' => ''
                );
        }
        $thumb_strip .= template_eval($thumb_cell, $params);
    }

    if (defined('THEME_HAS_FILM_STRIP_GRAPHICS')) {
        $tile1 = $THEME_DIR . 'images/tile1.gif';
        $tile2 = $THEME_DIR . 'images/tile2.gif';
    } elseif (defined('THEME_HAS_FILM_STRIP_GRAPHIC')) {
        $tile1=$tile2=$THEME_DIR . 'images/tile.gif';
    } else {
        $tile1=$tile2= 'images/tile.gif';
    }

    $params = array('{THUMB_STRIP}' => $thumb_strip,
        '{COLS}' => $i,
        '{TILE1}' => $tile1,
        '{TILE2}' => $tile2,
        );

    ob_start();
    starttable($CONFIG['picture_table_width']);
    echo template_eval($template, $params);
    endtable();
    $film_strip = ob_get_contents();
    ob_end_clean();

    return $film_strip;
}
?>
