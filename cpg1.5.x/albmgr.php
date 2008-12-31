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
  $HeadURL$
  $Revision$
  $LastChangedBy$
  $Date$
**********************************************/

/**
* Coppermine Photo Gallery albmgr.php
*
* This file is the which allows creation of new Albums and editing the names of albums,
* this is not the file which allows you to set album properties,
* also see documentation for this file's {@relativelink ../_albmgr.php.php Free Standing Code}
*
* @copyright 2002-2006 Gregory DEMAR, Coppermine Dev Team
* @license http://opensource.org/licenses/gpl-license.php GNU General Public License V2
* @package Coppermine
* @version $Id$
*/

/**
* @ignore
*/
define('IN_COPPERMINE', true);

define('ALBMGR_PHP', true);

require('include/init.inc.php');

/** sort the album manager**/
js_include('js/jquery.sort.js');

if (!(GALLERY_ADMIN_MODE || USER_ADMIN_MODE)) {
    cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);
}

/**set the message varialble to javascript file*/
$confirm_modifs = $lang_albmgr_php['confirm_modifs'];
set_js_var('confirm_modifs', $confirm_modifs);
/**Albums delete confirem message*/
$confirm_delete = $lang_albmgr_php['confirm_delete1'] . $lang_albmgr_php['confirm_delete2'];
set_js_var("confirm_delete", $confirm_delete);
/**When user try to delete albums without any selections*/
$delete_not_selected = $lang_albmgr_php['select_first'];
set_js_var('dontDelete', $delete_not_selected);
/**when user change the category*/
$category_change = $lang_albmgr_php['category_change'];
set_js_var('category_change', $category_change);
set_js_var('new_album', $lang_albmgr_php['new_album']);

pageheader($lang_albmgr_php['title']);

if ($superCage->get->keyExists('cat')) {
    $cat = $superCage->get->getInt('cat');
} else {
    $cat = 0;
}

if ($cat == 1) {
    $cat = 0;
}

if (GALLERY_ADMIN_MODE) {
    $result = cpg_db_query("SELECT aid, title FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = $cat ORDER BY pos ASC");
} elseif (USER_ADMIN_MODE) {

    //Only list the albums owned by the user
    if ($cat == 0) {
        $cat = USER_ID + FIRST_USER_CAT;
    }

    $result = cpg_db_query("SELECT aid, title FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = $cat AND owner = " . USER_ID . " ORDER BY pos ASC");

} else {
    cpg_die(ERROR, $lang_errors['perm_denied'], __FILE__, __LINE__);
}

$rowset = cpg_db_fetch_rowset($result);

$i = 100;

$sort_order = '';

if (count($rowset) > 0) {
    foreach ($rowset as $album) {
        $sort_order .= $album['aid'] . '@' . ($i++) . ',';
    }
}

echo <<< EOT

<form name="album_menu" id="cpgformAlbum" method="post" action="delete.php?what=albmgr">
    <input type="hidden" name="delete_album" value="" />
    <input id="sort_order" type="hidden" name="sort_order_album" value="" />
    <input type="hidden" name="sort_order" value="$sort_order" />

EOT;
        
starttable("100%", cpg_fetch_icon('alb_mgr', 2).$lang_albmgr_php['title'].'&nbsp;'.cpg_display_help('f=albums.htm&amp;as=albmgr&amp;ae=albmgr_end&amp;top=1', '600', '400'), 1);

echo <<< EOT

<tr>
    <td colspan="2" class="tableh2">
        <noscript>
            {$lang_common['javascript_needed']}
        </noscript>
    </td>
</tr>

<tr>
    <td class="tableb" valign="top" align="center">
        <br />
        <table width="300" border="0" cellspacing="0" cellpadding="0">

EOT;

if (GALLERY_ADMIN_MODE||USER_ADMIN_MODE) {

    $CAT_LIST = array();
    
    $CAT_LIST[] = array(FIRST_USER_CAT + USER_ID, $lang_albmgr_php['my_gallery']);
    
    //only add 'no category' when user is admin
    if (GALLERY_ADMIN_MODE) {
        $CAT_LIST[] = array(0, $lang_albmgr_php['no_category']);
    }
    
    get_cat_data();

    echo <<< EOT

            <tr>
                <td>
                    <strong>{$lang_albmgr_php['select_category']}</strong>
                    <select name="cat" class="listbox">

EOT;

    foreach ($CAT_LIST as $category) {
        if ($category[0] == 1) {
            continue;
        }
        echo '<option value="' . $category[0] . '"' . ($cat == $category[0] ? ' selected="selected"': '') . ">" . $category[1] . "</option>\n";
    }
    
    echo <<<EOT
                        </select>
                        <br /><br />
                </td>
             </tr>

EOT;

}

echo <<< EOT

</table>
    <div id="sort">
        

EOT;

$i = 100;
$j = 1;

if (count($rowset) > 0) {

    echo '<table id="album_sort">';
    
    foreach ($rowset as $album) {
    
        $album['title'] = stripslashes($album['title']);
        
        echo <<< EOT
        
            <tr id="$j" title="{$album['aid']}@{$album['title']}@0">
                <td width="10%" style="padding-left:20px" >
                    $j
                </td>
                <td>
                    <img src="images/bullet.png" alt="" />
                </td>
                <td class="album_text" style="width:400px;">{$album['title']}</td>
            </tr>
EOT;

        $j++;
    }
    
    echo '</table>';
    
}

echo <<< EOT

    </div>
    <table>
        <tr>
            <td>
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
EOT;

// Only show move-buttons when admin or in user's private category.
// Sorting is also prevented in delete.php when user doesn't have the rights.
if (GALLERY_ADMIN_MODE || ($cat == USER_ID + FIRST_USER_CAT)) {

    $up_arrow   = cpg_fetch_icon('up', 0, $lang_common['move_up']);
    $down_arrow = cpg_fetch_icon('down', 0, $lang_common['move_down']);
    
    echo <<< EOT

                        <td>
                            <a id="up_click" class="click">{$up_arrow}</a>
                            <a id="down_click" class="click">{$down_arrow}</a>
                        </td>
EOT;

} else {
    echo '<td></td>';
}

$icon_new    = cpg_fetch_icon('add', 0, $lang_albmgr_php['new_album']);
$icon_delete = cpg_fetch_icon('delete', 0, $lang_albmgr_php['delete_album']);

echo <<< EOT
                        <td align="center" style="width: 10px;"><img src="images/spacer.gif" width="1" alt="" /><br /></td>
                        <td align="center" class="click"><a id="deleteEvent" title="addAlbumButton">$icon_delete</a></td>
                        <td align="center" style="width: 10px;"><img src="images/spacer.gif" width="1" alt="" /><br /></td>
                        <td align="center" class="click"><a id="add_new_album" title="New" >$icon_new</a></td>
                        <td align="center" style="width: 10px;"><img src="images/spacer.gif" width="1" alt="" /><br /></td>
                        <td><input type="text" id="album_nm" name="album_nm" size="27" maxlength="80" class="textinput" value="" disabled="disabled" /></td>
                        <td align="center" style="width: 10px;"><img src="images/spacer.gif" width="1" alt="" /><br /></td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</td>
</tr>
<tr>
    <td colspan="2" align="center" class="tablef">
        <input type="submit" class="button" value="{$lang_common['apply_changes']}" />
    </td>
</tr>

EOT;

endtable();
print '                </form>';
pagefooter();

?>