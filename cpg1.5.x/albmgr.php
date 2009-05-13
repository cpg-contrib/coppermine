<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2009 Coppermine Dev Team
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

// To-do: title tags contain hardcoded English instead of lang vars.

define('IN_COPPERMINE', true);
define('ALBMGR_PHP', true);
require('include/init.inc.php');

set_js_var('lang_edit', $lang_common['edit']);
js_include('js/jquery.sort.js');
js_include('js/albmgr.js');

if (!(GALLERY_ADMIN_MODE || USER_ADMIN_MODE)) {
    cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);
}

$icon_array = array();
$icon_array['ok'] = cpg_fetch_icon('ok', 1);
$icon_array['cancel'] = cpg_fetch_icon('cancel', 1);
$icon_array['up'] = cpg_fetch_icon('up', 0, $lang_common['move_up']);
$icon_array['down'] = cpg_fetch_icon('down', 0, $lang_common['move_down']);
$icon_array['new'] = cpg_fetch_icon('add', 0, $lang_albmgr_php['new_album']);
$icon_array['delete'] = cpg_fetch_icon('delete', 0, $lang_albmgr_php['delete_album']);
$icon_array['edit'] = cpg_fetch_icon('edit', 1);
$icon_array['modifyalb'] = cpg_fetch_icon('modifyalb', 1, $lang_common['album_properties']);
$icon_array['edit_files'] = cpg_fetch_icon('edit', 1, $lang_common['edit_files']);
$icon_array['thumbnail'] = cpg_fetch_icon('thumbnails', 1, $lang_common['thumbnail_view']);


/**
 * alb_get_subcat_data()
 *
 * @param integer $parent
 * @param string $ident
 **/
function alb_get_subcat_data($parent, $ident = '')
{
    global $CONFIG, $CAT_LIST, $USER_DATA;

    // select cats where the users can change the albums
    $group_id = $USER_DATA['group_id']; 

    $result = cpg_db_query("SELECT cid, name, description FROM {$CONFIG['TABLE_CATEGORIES']} WHERE parent = '$parent' AND cid != 1 ORDER BY pos");

    if (mysql_num_rows($result) > 0) {
        $rowset = cpg_db_fetch_rowset($result);
        foreach ($rowset as $subcat) {
            if (!GALLERY_ADMIN_MODE) {
                $check_group = cpg_db_query("SELECT group_id FROM {$CONFIG['TABLE_CATMAP']} WHERE group_id = '$group_id' AND cid=".$subcat['cid']);
                $check_group_rowset = cpg_db_fetch_rowset($check_group);
                if ($check_group_rowset) {
                    $CAT_LIST[] = array($subcat['cid'], $ident . $subcat['name']);
                }
            } else {
                $CAT_LIST[] = array($subcat['cid'], $ident . $subcat['name']);
            }
            alb_get_subcat_data($subcat['cid'], $ident . '&nbsp;&nbsp;&nbsp;');
        }
    }
}


list($timestamp, $form_token) = getFormToken();	

// Set the message variables for the javascript file
// confirm album modifications
set_js_var('confirm_modifs', $lang_albmgr_php['confirm_modifs']);  
// confirm album delete
set_js_var("confirm_delete", $lang_albmgr_php['confirm_delete1'] . "\n" . $lang_albmgr_php['confirm_delete2']);
// alert when try to delete album without an album selected
set_js_var('dontDelete', $lang_albmgr_php['select_first']);
// confirm category change when there are unsaved changes
set_js_var('category_change', $lang_albmgr_php['category_change']);
// confirm page change when there are unsaved changes
set_js_var('page_change', $lang_albmgr_php['page_change']);
// form token & timestamp
set_js_var('form_token', $form_token);
set_js_var('timestamp', $timestamp);

// get the category value
if ($superCage->get->keyExists('cat')) {
    $cat = $superCage->get->getInt('cat');
} else {
    $cat = 0;
}
if ($cat == 1) {
    $cat = 0;
}
if (!GALLERY_ADMIN_MODE && USER_ADMIN_MODE) {
    // only list the albums owned by the user
    if ($cat == 0) {
        $cat = USER_ID + FIRST_USER_CAT;
    }
    $user_id = USER_ID;
}
// set the cat value
set_js_var('category', $cat);

pageheader($lang_albmgr_php['title']);
    echo <<< EOT
        <form name="album_menu" id="cpg_form_album" method="post" action="delete.php?what=albmgr">
            <input type="hidden" name="form_token" value="{$form_token}" />
            <input type="hidden" name="timestamp" value="{$timestamp}" />

EOT;

starttable('100%', cpg_fetch_icon('alb_mgr', 2).$lang_albmgr_php['title'].'&nbsp;'.cpg_display_help('f=albums.htm&as=albmgr&ae=albmgr_end&top=1', '600', '400'), 1);
    echo <<< EOT
        <noscript>
        <tr>
            <td colspan="2" class="tableh2">
                {lang_common['javascript_needed']}
            </td>
        </tr>
        </noscript>
        <tr>
EOT;
    
if (GALLERY_ADMIN_MODE) {
    $result = cpg_db_query("SELECT aid, title FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = $cat ORDER BY pos ASC");
} elseif (USER_ADMIN_MODE) {
    // $cat and $user_id set above
    $result = cpg_db_query("SELECT aid, title FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = $cat AND owner = $user_id ORDER BY pos ASC");
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
        <input type="hidden" id="sort_order" name="sort_order" value="" />
        <input type="hidden" name="category" value="{$cat}">
         
        <td class="tableb" >
            <table class="head_album" border="0" cellspacing="0" cellpadding="0">
EOT;

if (GALLERY_ADMIN_MODE||USER_ADMIN_MODE) {
    $CAT_LIST = array();
    $CAT_LIST[] = array(FIRST_USER_CAT + USER_ID, $lang_albmgr_php['my_gallery']);
    //only add 'no category' when user is admin
    if (GALLERY_ADMIN_MODE) {
        $CAT_LIST[] = array(0, $lang_albmgr_php['no_category']);
    }
    alb_get_subcat_data(0, '');

    echo <<< EOT
                    <tr>
                        <td>
                            <strong>{$lang_albmgr_php['select_category']}</strong>
                            &nbsp;
                            <select name="cat" class="listbox">

EOT;
    foreach ($CAT_LIST as $category) {
        echo '<option value="' . $category[0] . '"' . ($cat == $category[0] ? ' selected': '') . ">" . $category[1] . "</option>\n";
    }
    echo <<< EOT
                        </select>
                    </td>
                </tr>

EOT;
}

    echo <<< EOT
        </table>
              <div id="sort">
EOT;

if (count($rowset) > 0) { 

    echo '<table id="album_sort" cellspacing="0" cellpadding="0" border="0">';

    foreach ($rowset as $album) {
        $title = stripslashes($album['title']);
        echo <<< EOT
        <tr id="sort-{$album['aid']}" >
            <td class="dragHandle"></td>
            <td class="album_text" width="96%"><span class="albumName">{$title}</span><span class="editAlbum">{$icon_array['edit']}{$lang_common['edit']}</span></td>
        </tr>
EOT;
    }

    echo '</table>';
}

    echo <<< EOT
    </div>
    <table class="album_operate" cellspacing="0" cellpadding="0" border="0">
        <tr>
      
EOT;
// Only show move-buttons when admin or in user's private category.
// Sorting is also prevented in delete.php when user doesn't have the rights.
if (GALLERY_ADMIN_MODE || ($cat == USER_ID + FIRST_USER_CAT)) {
    
    if (defined('THEME_HAS_PROGRESS_GRAPHICS')) {
        $prefix = $THEME_DIR;
    } else {
        $prefix = '';
    }   
    
    echo <<< EOT
    <td style="width: 115px" id="control">
        <a id="up_click" class="click">{$icon_array['up']}</a>
        <a id="down_click" class="click">{$icon_array['down']}</a>
        <a id="delete_album" class="click">{$icon_array['delete']}</a>
        <a id="modify_album" class="click">{$icon_array['modifyalb']}</a>
        <a id="editfiles_album" class="click">{$icon_array['edit_files']}</a>
        <a id="thumbnail_album" class="click">{$icon_array['thumbnail']}</a>
        <a id="add_new_album" class="click">{$icon_array['new']}</a>
        <img id="loading" class="icon" src="{$prefix}images/loader.gif" style="margin-left: 10px; display: none;" />
    </td>
EOT;

} else {
    echo '<td></td>';
}

    echo <<< EOT
    
        <td id="add-box" style="display: none;">
            <input type="text"   id="add-name" name="add-name" size="27" maxlength="80" class="textinput" value="" onkeypress="return Sort.disableEnterKey(event)" />
            <button type="submit" id="addEvent" class="button" name="addEvent" value="{$lang_common['ok']}">{$icon_array['ok']}{$lang_common['ok']}</button>
            <button type="button" class="button add_cancel close" value="{$lang_albmgr_php['cancel']}">{$icon_array['cancel']}{$lang_albmgr_php['cancel']}</button>
        </td>
        <td id="edit-box" style="display: none;">
            <input type="text" id="edit-name" name="edit-name" size="27" maxlength="80" class="textinput" value="" onkeypress="return Sort.disableEnterKey(event)" />
            <button type="submit" id="updateEvent" class="button" name="updateEvent" value="{$lang_common['ok']}">{$icon_array['ok']}{$lang_common['ok']}</button>
            <button type="button" class="button album_cancel close" value="{$lang_albmgr_php['cancel']}">{$icon_array['cancel']}{$lang_albmgr_php['cancel']}</button>
        </td>
    </tr>
</table>
<table class="album_save" style="display: none;" cellspacing="0" cellpadding="0" border="0">
    <tr>
        <td>
            <button type="submit" class="button" name="apply_changes" value="{$lang_common['apply_changes']}">{$icon_array['ok']}{$lang_common['apply_changes']}</button>
        </td>
        <td>
            <div class="cpg_message_warning">
                {$lang_albmgr_php['submit_reminder']}
            </div>
        </td>

    </tr>
</table>
        </td>
      </tr>

EOT;
    
endtable();
pagefooter();

?>