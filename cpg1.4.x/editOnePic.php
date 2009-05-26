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
  Coppermine version: 1.4.25
  $HeadURL$
  $Revision$
  $Author$
  $Date$
**********************************************/

define('IN_COPPERMINE', true);
define('EDITPICS_PHP', true);
require('include/init.inc.php');

if (isset($_REQUEST['id'])) {
        $pid = (int)$_REQUEST['id'];
} else {
        $pid = -1;
}

function process_post_data()
{
    global $CONFIG, $mb_utf8_regex;
    global $lang_errors, $lang_editpics_php;

    $pid          = (int)$_POST['id'];
    $aid          = (int)$_POST['aid'];
    $pwidth       = (int)$_POST['pwidth'];
    $pheight      = (int)$_POST['pheight'];
    $title        = $_POST['title'];
    $caption      = $_POST['caption'];
    $keywords     = $_POST['keywords'];
    $user1        = $_POST['user1'];
    $user2        = $_POST['user2'];
    $user3        = $_POST['user3'];
    $user4        = $_POST['user4'];

    $galleryicon = (int) $_POST['galleryicon'];
    $isgalleryicon = ($galleryicon===$pid);

    // need to implement "Read EXIF info again" checkbox; comment out for now
    // $read_exif    = isset($_POST['read_exif']);
    $reset_vcount = isset($_POST['reset_vcount']);
    $reset_votes  = isset($_POST['reset_votes']);
    $del_comments = isset($_POST['del_comments']) || $delete;

    $result = cpg_db_query("SELECT * FROM {$CONFIG['TABLE_PICTURES']} AS p, {$CONFIG['TABLE_ALBUMS']} AS a WHERE a.aid = p.aid AND pid = '$pid'");
    if (!mysql_num_rows($result)) cpg_die(CRITICAL_ERROR, $lang_errors['non_exist_ap'], __FILE__, __LINE__);
    $pic = mysql_fetch_array($result);
    mysql_free_result($result);

    if (!(GALLERY_ADMIN_MODE || $pic['category'] == FIRST_USER_CAT + USER_ID || ($CONFIG['users_can_edit_pics'] && $pic['owner_id'] == USER_ID)) || !USER_ID) cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);

    $update  = "aid = '".$aid."'";
    if (is_movie($pic['filename'])) {
        $update .= ", pwidth = ".$pwidth;
        $update .= ", pheight = ".$pheight;
    }
    $update .= ", title = '".addslashes($title)."'";
    $update .= ", caption = '".addslashes($caption)."'";
    $update .= ", keywords = '".addslashes($keywords)."'";
    $update .= ", user1 = '".addslashes($user1)."'";
    $update .= ", user2 = '".addslashes($user2)."'";
    $update .= ", user3 = '".addslashes($user3)."'";
    $update .= ", user4 = '".addslashes($user4)."'";

    if ($isgalleryicon && $pic['category']>FIRST_USER_CAT) {
        $sql = 'update '.$CONFIG['TABLE_PICTURES'].' set galleryicon=0 where owner_id='.$pic['owner_id'].';';
        cpg_db_query($sql);
        $update .= ", galleryicon = ".addslashes($galleryicon);
    }

    if ($reset_vcount) {
        $update .= ", hits = '0'";
        resetDetailHits($pid);
    }
    if ($reset_votes) {
        $update .= ", pic_rating = '0', votes = '0'";
        resetDetailVotes($pid);
    }

    if ($del_comments) {
        $query = "DELETE FROM {$CONFIG['TABLE_COMMENTS']} WHERE pid='$pid'";
        $result =cpg_db_query($query);

    } else {
        $query = "UPDATE {$CONFIG['TABLE_PICTURES']} SET $update WHERE pid='$pid' LIMIT 1";
        $result = cpg_db_query($query);
    }

    // rename a file
    if ($_POST['filename'] != $pic['filename'])
    {
        if($CONFIG['thumb_use']=='ht' && $pic['pheight'] > $CONFIG['picture_width']) {
            $condition = true;
        } elseif ($CONFIG['thumb_use']=='wd' && $pic['pwidth'] > $CONFIG['picture_width']){
            $condition = true;
        } elseif ($CONFIG['thumb_use']=='any' && max($pic['pwidth'], $pic['pheight']) > $CONFIG['picture_width']){
            $condition = true;
        } else {
            $condition = false;
        }

        if ($CONFIG['make_intermediate'] && $condition ) {
            $prefices = array('fullsize', 'normal', 'thumb');
        } else {
            $prefices = array('fullsize', 'thumb');
        }

        if (!is_image($pic['filename'])){
            $prefices = array('fullsize');
        }

        foreach ($prefices as $prefix)
        {
            $oldname = urldecode(get_pic_url($pic, $prefix));
            $filename = replace_forbidden($_POST['filename']);
            $newname = str_replace($pic['filename'], $filename, $oldname);

            $old_mime = cpg_get_type($oldname);
            $new_mime = cpg_get_type($newname);

            if (($old_mime['mime'] != $new_mime['mime']) && isset($new_mime['mime']))
                cpg_die(CRITICAL_ERROR, sprintf($lang_editpics_php['mime_conv'], $old_mime['mime'], $new_mime['mime']), __FILE__, __LINE__);

            if (!is_known_filetype($newname))
                cpg_die(CRITICAL_ERROR, $lang_editpics_php['forb_ext'], __FILE__, __LINE__);

            if (file_exists($newname))
                cpg_die(CRITICAL_ERROR, sprintf($lang_editpics_php['file_exists'], $newname), __FILE__, __LINE__);

            if (!file_exists($oldname))
                cpg_die(CRITICAL_ERROR, sprintf($lang_editpics_php['src_file_missing'], $oldname), __FILE__, __LINE__);

            if (rename($oldname, $newname))
            {
                cpg_db_query("UPDATE {$CONFIG['TABLE_PICTURES']} SET filename = '$filename' WHERE pid = '$pid' LIMIT 1");
            } else cpg_die(CRITICAL_ERROR, sprintf($lang_editpics_php['rename_failed'], $oldname, $newname), __FILE__, __LINE__);
        }
    }
}

function get_user_albums($user_id = '')
{
        global $CONFIG, $USER_ALBUMS_ARRAY, $user_albums_list;

        if ($user_id != '') {
                $or = " OR category='" . (FIRST_USER_CAT + $user_id) . "'";
        }

        if (!isset($USER_ALBUMS_ARRAY[USER_ID])) {
                $user_albums = cpg_db_query("SELECT aid, title FROM {$CONFIG['TABLE_ALBUMS']} WHERE category='".(FIRST_USER_CAT + USER_ID)."' $or ORDER BY title");

                if (mysql_num_rows($user_albums)) {
                    $user_albums_list=cpg_db_fetch_rowset($user_albums);
                } else {
                        $user_albums_list = array();
                }
                mysql_free_result($user_albums);
                $USER_ALBUMS_ARRAY[USER_ID] = $user_albums_list;
        } else {
                $user_albums_list = &$USER_ALBUMS_ARRAY[USER_ID];
        }
}

function form_alb_list_box()
{
        global $CONFIG, $CURRENT_PIC;
        global $user_albums_list, $public_albums_list, $lang_editpics_php;
        $sel_album = $CURRENT_PIC['aid'];

        echo <<<EOT
                <tr>
                        <td class="tableb" style="white-space: nowrap;">
                                {$lang_editpics_php['album']}
                </td>
                <td class="tableb" valign="top">
                                <select name="aid" class="listbox">
EOT;
                foreach($public_albums_list as $album) {
        echo '              <option value="' . $album['aid'] . '"' . ($album['aid'] == $sel_album ? ' selected="selected"' : '') . '>' . $album['cat_title'] . "</option>\n";
    }
                foreach($user_albums_list as $album){
                        echo '                        <option value="'.$album['aid'].'"'.($album['aid'] == $sel_album ? ' selected="selected"' : '').'>* '.$album['title'] . "</option>\n";
                }
        echo <<<EOT
                                </select>
                        </td>
                </tr>

EOT;
}

if (isset($_POST['submitDescription'])) process_post_data();

$result = cpg_db_query("SELECT *, p.title AS title, p.votes AS votes FROM {$CONFIG['TABLE_PICTURES']} AS p, {$CONFIG['TABLE_ALBUMS']} AS a WHERE a.aid = p.aid AND pid = '$pid'");
$CURRENT_PIC = mysql_fetch_array($result);
mysql_free_result($result);

if (!(GALLERY_ADMIN_MODE || $CURRENT_PIC['category'] == FIRST_USER_CAT + USER_ID || ($CONFIG['users_can_edit_pics'] && $CURRENT_PIC['owner_id'] == USER_ID)) || !USER_ID) cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);

pageheader($lang_editpics_php['edit_pics']);

$thumb_url = get_pic_url($CURRENT_PIC, 'thumb');
$thumb_link = 'displayimage.php?pos='.(-$CURRENT_PIC['pid']);
$filename = htmlspecialchars($CURRENT_PIC['filename']);

$THUMB_ROWSPAN=6;
if ($CONFIG['user_field1_name'] != '') $THUMB_ROWSPAN++;
if ($CONFIG['user_field2_name'] != '') $THUMB_ROWSPAN++;
if ($CONFIG['user_field3_name'] != '') $THUMB_ROWSPAN++;
if ($CONFIG['user_field4_name'] != '') $THUMB_ROWSPAN++;


if (GALLERY_ADMIN_MODE) {
//    $public_albums = cpg_db_query("SELECT DISTINCT aid, title, IF(category = 0, CONCAT('&gt; ', title), CONCAT(name,' &lt; ',title)) AS cat_title FROM {$CONFIG['TABLE_ALBUMS']}, {$CONFIG['TABLE_CATEGORIES']} WHERE category < '" . FIRST_USER_CAT . "' AND (category = 0 OR category = cid) ORDER BY cat_title");  // albums weren't coming up in the list when there were no cats
    $public_albums = cpg_db_query("SELECT DISTINCT aid, title, IF(category = 0, CONCAT('&gt; ', title), CONCAT(name,' &lt; ',title)) AS cat_title FROM {$CONFIG['TABLE_ALBUMS']} LEFT JOIN {$CONFIG['TABLE_CATEGORIES']} ON category = cid WHERE category < '" . FIRST_USER_CAT . "' ORDER BY cat_title");
} else {
        $forbidden_set_alt = $FORBIDDEN_SET ? 'AND ' . str_replace('p.', '', $FORBIDDEN_SET) : '';
//    $public_albums = cpg_db_query("SELECT DISTINCT aid, title, IF(category = 0, CONCAT('&gt; ', title), CONCAT(name,' &lt; ',title)) AS cat_title FROM {$CONFIG['TABLE_ALBUMS']} LEFT JOIN {$CONFIG['TABLE_CATEGORIES']} ON category = cid WHERE category < '" . FIRST_USER_CAT . "' AND uploads = 'YES' $forbidden_set_alt ORDER BY cat_title"); //when user edited own image and no album was uploadable album list was empty
        $public_albums = cpg_db_query("SELECT DISTINCT aid, title, IF(category = 0, CONCAT('&gt; ', title), CONCAT(name,' &lt; ',title)) AS cat_title FROM {$CONFIG['TABLE_ALBUMS']} LEFT JOIN {$CONFIG['TABLE_CATEGORIES']} ON category = cid WHERE (category < '" . FIRST_USER_CAT . "' AND uploads = 'YES' $forbidden_set_alt) OR aid='{$CURRENT_PIC['aid']}' ORDER BY cat_title");
}

if (mysql_num_rows($public_albums)) {
        $public_albums_list=cpg_db_fetch_rowset($public_albums);
} else {
        $public_albums_list = array();
}

if (GALLERY_ADMIN_MODE && $CURRENT_PIC['owner_id'] != USER_ID) {
  get_user_albums($CURRENT_PIC['owner_id']);
} else {
  get_user_albums();
}

echo <<<EOT
<script type="JavaScript">
function textCounter(field, maxlimit) {
        if (field.value.length > maxlimit) // if too long...trim it!
        field.value = field.value.substring(0, maxlimit);
}
</script>
<form name="editonepicform" method="post" action="editOnePic.php">
<input type="hidden" name="id" value="{$CURRENT_PIC['pid']}" />
EOT;

starttable("100%", $lang_editpics_php['desc'], 3);

//$pic_info = sprintf($lang_editpics_php['pic_info_str'], $CURRENT_PIC['pwidth'], $CURRENT_PIC['pheight'], ($CURRENT_PIC['filesize'] >> 10), $CURRENT_PIC['hits'], $CURRENT_PIC['votes']);

if (!is_movie($CURRENT_PIC['filename'])) {
        $pic_info = sprintf($lang_editpics_php['pic_info_str'], $CURRENT_PIC['pwidth'], $CURRENT_PIC['pheight'], ($CURRENT_PIC['filesize'] >> 10), $CURRENT_PIC['hits'], $CURRENT_PIC['votes']);
} else {
        $pic_info = sprintf($lang_editpics_php['pic_info_str'], '<input type="text" name="pwidth" value="'.$CURRENT_PIC['pwidth'].'" size="5" maxlength="5" class="textinput" />', '<input type="text" name="pheight" value="'.$CURRENT_PIC['pheight'].'" size="5" maxlength="5" class="textinput" />', ($CURRENT_PIC['filesize'] >> 10), $CURRENT_PIC['hits'], $CURRENT_PIC['votes']);
}

if (defined('UPLOAD_APPROVAL_MODE')) {
        if ($CURRENT_PIC['owner_name']){
                $pic_info .= ' - <a href ="profile.php?uid='.$CURRENT_PIC['owner_id'].'">'.$CURRENT_PIC['owner_name'].'</a>';
        }
}

print <<<EOT
        <tr>
                        <td class="tableh2" colspan="3">
                                <b>$filename</b>
                                &nbsp;&nbsp;-&nbsp;&nbsp;<a href="modifyalb.php?album={$CURRENT_PIC['aid']}" class="admin_menu">{$lang_editpics_php['album_properties']}</a>&nbsp;&nbsp;-&nbsp;&nbsp;
                        <a href="thumbnails.php?album={$CURRENT_PIC['aid']}" class="admin_menu">{$lang_editpics_php['thumbnail_view']}</a>
                        </td>
        </tr>
        <tr>
                        <td class="tableb" style="white-space: nowrap;">
                                {$lang_editpics_php['pic_info']}
                        </td>
                        <td class="tableb">
                                $pic_info
                        </td>
                                <td class="tableb" align="center" rowspan="$THUMB_ROWSPAN">
                                <a href="$thumb_link"><img src="$thumb_url" class="image" border="0" alt="{$CURRENT_PIC['title']}"/></a><br />
            </td>
        </tr>
EOT;

form_alb_list_box();

if ($CONFIG['show_bbcode_help']) {$captionLabel = '&nbsp;'. cpg_display_help('f=index.html&amp;base=64&amp;h='.urlencode(base64_encode(serialize($lang_bbcode_help_title))).'&amp;t='.urlencode(base64_encode(serialize($lang_bbcode_help))),470,245);}

print <<<EOT
        <tr>
                        <td class="tableb" style="white-space: nowrap;">
                        {$lang_editpics_php['title']}
                </td>
                <td width="100%" class="tableb" valign="top">
                                <input type="text" style="width: 100%" name="title" maxlength="255" value="{$CURRENT_PIC['title']}" class="textinput" />
                        </td>
        </tr>

        <tr>
                        <td class="tableb" style="white-space: nowrap;">
                        {$lang_editpics_php['filename']}
                </td>
                <td width="100%" class="tableb" valign="top">
                                <input type="text" style="width: 100%" name="filename" maxlength="255" value="{$CURRENT_PIC['filename']}" class="textinput" />
                        </td>
        </tr>

        <tr>
                        <td class="tableb" valign="top" style="white-space: nowrap;">
                                {$lang_editpics_php['desc']}$captionLabel
                        </td>
                        <td class="tableb" valign="top">
                                <textarea name="caption" rows="5" cols="40" class="textinput" style="width: 100%;" onkeydown="textCounter(this, {$CONFIG['max_img_desc_length']});" onkeyup="textCounter(this, {$CONFIG['max_img_desc_length']});">{$CURRENT_PIC['caption']}</textarea>
                        </td>
        </tr>
        <tr>
                        <td class="tableb" style="white-space: nowrap;">
                                {$lang_editpics_php['keywords']}
                </td>
                <td width="100%" class="tableb" valign="top">
                                <input type="text" style="width: 100%" name="keywords" maxlength="255" value="{$CURRENT_PIC['keywords']}" class="textinput" />
                        </td>
        </tr>

EOT;
if ($CONFIG['user_field1_name'] != ''){
echo <<<EOT
        <tr>
            <td class="tableb" style="white-space: nowrap;">
                {$CONFIG['user_field1_name']}
                </td>
                <td width="100%" class="tableb" valign="top">
                                <input type="text" style="width: 100%" name="user1" maxlength="255" value="{$CURRENT_PIC['user1']}" class="textinput" />
                        </td>
        </tr>
EOT;
}
if ($CONFIG['user_field2_name'] != ''){
echo <<<EOT
        <tr>
            <td class="tableb" style="white-space: nowrap;">
                {$CONFIG['user_field2_name']}
                </td>
                <td width="100%" class="tableb" valign="top">
                <input type="text" style="width: 100%" name="user2" maxlength="255" value="{$CURRENT_PIC['user2']}" class="textinput" />
                        </td>
        </tr>
EOT;
}if ($CONFIG['user_field3_name'] != ''){
echo <<<EOT
        <tr>
            <td class="tableb" style="white-space: nowrap;">
                {$CONFIG['user_field3_name']}
                </td>
                <td width="100%" class="tableb" valign="top">
                <input type="text" style="width: 100%" name="user3" maxlength="255" value="{$CURRENT_PIC['user3']}" class="textinput" />
                        </td>
        </tr>
EOT;
}if ($CONFIG['user_field4_name'] != ''){
echo <<<EOT
        <tr>
            <td class="tableb" style="white-space: nowrap;">
                {$CONFIG['user_field4_name']}
                </td>
                <td width="100%" class="tableb" valign="top">
                <input type="text" style="width: 100%" name="user4" maxlength="255" value="{$CURRENT_PIC['user4']}" class="textinput" />
                        </td>
        </tr>
EOT;
}

// If this is the users gallery icon then check it
$isgalleryicon_selected = ($CURRENT_PIC['galleryicon']) ? 'checked="checked" ': '';
$isgalleryicon_disabled = ($CURRENT_PIC['category'] < FIRST_USER_CAT)? 'disabled="disabled" ':'';

print <<<EOT
        <tr>
                        <td class="tableb" colspan="3" align="center">
                                                        <table border="0" cellspacing="0" cellpadding="0" width="100%">
                                                                <tr>
                                                                        <td width="20%" align="center"><input type="checkbox" name="galleryicon" {$isgalleryicon_selected}{$isgalleryicon_disabled}value="{$CURRENT_PIC['pid']}" class="checkbox" />{$lang_editpics_php['gallery_icon']}</td>
                                                                <!--    <td width="20%" align="center"><input type="checkbox" name="read_exif" value="1" class="checkbox" />{$lang_editpics_php['read_exif']}</td> -->
                                                                        <td width="20%" align="center"><input type="checkbox" name="reset_vcount" value="1" class="checkbox" />{$lang_editpics_php['reset_view_count']}</td>
                                                                        <td width="20%" align="center"><input type="checkbox" name="reset_votes" value="1" class="checkbox" />{$lang_editpics_php['reset_votes']}</td>
                                                                        <td width="20%" align="center"><input type="checkbox" name="del_comments" value="1" class="checkbox" />{$lang_editpics_php['del_comm']}</td>
                                                                </tr>
                                                        </table>
                        </td>
        </tr>
        <tr>
                        <td colspan="3" align="center" class="tablef">
                                <input type="submit" value="{$lang_editpics_php['apply']}" name="submitDescription" class="button" />
                        </td>
        </tr>
EOT;

endtable();
echo '</form>';
pagefooter();
ob_end_flush();
?>