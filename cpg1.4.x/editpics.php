<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2010 Coppermine Dev Team
  v1.0 originally written by Gregory Demar

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 3
  as published by the Free Software Foundation.
  
  ********************************************
  Coppermine version: 1.4.26
  $HeadURL$
  $Revision$
  $Author$
  $Date$
**********************************************/

define('IN_COPPERMINE', true);
define('EDITPICS_PHP', true);

require('include/init.inc.php');

if (!(GALLERY_ADMIN_MODE || USER_ADMIN_MODE)) cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);

define('UPLOAD_APPROVAL_MODE', isset($_GET['mode']));
define('EDIT_PICTURES_MODE', !isset($_GET['mode']));

if (isset($_GET['album'])) {
        $album_id = (int)$_GET['album'];
} elseif (isset($_GET['album'])) {
        $album_id = (int)$_POST['album'];
} else {
        $album_id = -1;
}

if (UPLOAD_APPROVAL_MODE && !GALLERY_ADMIN_MODE) cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);

if (EDIT_PICTURES_MODE) {
    $result = cpg_db_query("SELECT title, category FROM {$CONFIG['TABLE_ALBUMS']} WHERE aid = '$album_id'");
        if (!mysql_num_rows($result)) cpg_die(CRITICAL_ERROR, $lang_errors['non_exist_ap'], __FILE__, __LINE__);
        $ALBUM_DATA=mysql_fetch_array($result);
        mysql_free_result($result);
        $cat = $ALBUM_DATA['category'];
        $actual_cat = $cat;
        if ($cat != FIRST_USER_CAT + USER_ID && !GALLERY_ADMIN_MODE) cpg_die(ERROR, $lang_errors['perm_denied'], __FILE__, __LINE__);
} else {
        $ALBUM_DATA = array();
}

$THUMB_ROWSPAN=5;
if ($CONFIG['user_field1_name'] != '') $THUMB_ROWSPAN++;
if ($CONFIG['user_field2_name'] != '') $THUMB_ROWSPAN++;
if ($CONFIG['user_field3_name'] != '') $THUMB_ROWSPAN++;
if ($CONFIG['user_field4_name'] != '') $THUMB_ROWSPAN++;

// $USER_ALBUMS_ARRAY=array(0 => array());

// Type 0 => input
//      1 => album list
//      2 => text_area
//      3 => picture information
$captionLabel = $lang_editpics_php['desc'];
if ($CONFIG['show_bbcode_help']) {
	$captionLabel .= '&nbsp;'. cpg_display_help('f=index.html&amp;base=64&amp;h='.urlencode(base64_encode(serialize($lang_bbcode_help_title.'&nbsp;'))).'&amp;t='.urlencode(base64_encode(serialize($lang_bbcode_help))),470,245);
}
$data = array(
        array($lang_editpics_php['pic_info'], '', 3),
        array($lang_editpics_php['album'], 'aid', 1),
        array($lang_editpics_php['title'], 'title', 0, 255),
        array($captionLabel, 'caption', 2, $CONFIG['max_img_desc_length']),
        array($lang_editpics_php['keywords'], 'keywords', 0, 255),
        array($CONFIG['user_field1_name'], 'user1', 0, 255),
        array($CONFIG['user_field2_name'], 'user2', 0, 255),
        array($CONFIG['user_field3_name'], 'user3', 0, 255),
        array($CONFIG['user_field4_name'], 'user4', 0, 255),
        array('', '', 4)
);

function get_post_var($var, $pid)
{
        global $lang_errors;

        $var_name = $var.$pid;
        if(!isset($_POST[$var_name])) cpg_die(CRITICAL_ERROR, $lang_errors['param_missing']." ($var_name)", __FILE__, __LINE__);
        return $_POST[$var_name];
}

function process_post_data()
{
        global $CONFIG;
        global $user_albums_list, $lang_errors;

        $user_album_set = array();
        foreach($user_albums_list as $album) $user_album_set[$album['aid']] = 1;

        if (!is_array($_POST['pid'])) cpg_die(CRITICAL_ERROR, $lang_errors['param_missing'], __FILE__, __LINE__);
        $pid_array = &$_POST['pid'];

                $galleryicon = (int) $_POST['galleryicon'];

        foreach($pid_array as $pid){
                $pid = (int)$pid;

                $aid         = (int)get_post_var('aid', $pid);
                $title       = get_post_var('title', $pid);
                $caption     = get_post_var('caption', $pid);
                $keywords    = get_post_var('keywords', $pid);
                $user1       = get_post_var('user1', $pid);
                $user2       = get_post_var('user2', $pid);
                $user3       = get_post_var('user3', $pid);
                $user4       = get_post_var('user4', $pid);

                                $isgalleryicon = ($galleryicon===$pid);

                $delete       = isset($_POST['delete'.$pid]);
                $reset_vcount = isset($_POST['reset_vcount'.$pid]);
                $reset_votes  = isset($_POST['reset_votes'.$pid]);
                $del_comments = isset($_POST['del_comments'.$pid]) || $delete;

                $query = "SELECT category, filepath, filename, owner_id FROM {$CONFIG['TABLE_PICTURES']}, {$CONFIG['TABLE_ALBUMS']} WHERE {$CONFIG['TABLE_PICTURES']}.aid = {$CONFIG['TABLE_ALBUMS']}.aid AND pid='$pid'";
                $result = cpg_db_query($query);
                if (!mysql_num_rows($result)) cpg_die(CRITICAL_ERROR, $lang_errors['non_exist_ap'], __FILE__, __LINE__);
                $pic = mysql_fetch_array($result);
                mysql_free_result($result);

                if (!GALLERY_ADMIN_MODE) {
                        if ($pic['category'] != FIRST_USER_CAT + USER_ID) cpg_die(ERROR, $lang_errors['perm_denied']."<br />(picture category = {$pic['category']}/ $pid)", __FILE__, __LINE__);
                        if (!isset($user_album_set[$aid])) cpg_die(ERROR, $lang_errors['perm_denied']."<br />(target album = $aid)", __FILE__, __LINE__);
                }

                $update  = "aid = '".$aid."'";
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

                                if (is_movie($pic['filename'])) {
                                        $pwidth = get_post_var('pwidth', $pid);
                                        $pheight = get_post_var('pheight', $pid);
                                        $update .= ", pwidth = " .  (int) $pwidth;
                                        $update .= ", pheight = " . (int) $pheight;
                                }

                if ($reset_vcount) {
                    $update .= ", hits = '0'";
                    resetDetailHits($pid);
                }
                if ($reset_votes) {
                    $update .= ", pic_rating = '0', votes = '0'";
                    resetDetailVotes($pid);
                }

                if (UPLOAD_APPROVAL_MODE) {
                    $approved = get_post_var('approved', $pid);
                        if ($approved == 'YES') {
                                $update .= ", approved = 'YES'";
                        } elseif ($approved == 'DELETE') {
                                $del_comments = 1;
                                $delete = 1;
                        }
                }

                if ($del_comments) {
                        $query = "DELETE FROM {$CONFIG['TABLE_COMMENTS']} WHERE pid='$pid'";
                        $result =cpg_db_query($query);
                }

                if ($delete) {
                        $dir=$CONFIG['fullpath'].$pic['filepath'];
                        $file=$pic['filename'];

                        if (!is_writable($dir)) cpg_die(CRITICAL_ERROR, sprintf($lang_errors['directory_ro'], $dir), __FILE__, __LINE__);

                        $files=array($dir.$file, $dir.$CONFIG['normal_pfx'].$file, $dir.$CONFIG['thumb_pfx'].$file);
                        foreach ($files as $currFile){
                                if (is_file($currFile)) @unlink($currFile);
                        }

                        $query = "DELETE FROM {$CONFIG['TABLE_PICTURES']} WHERE pid='$pid' LIMIT 1";
                        $result = cpg_db_query($query);
                } else {
                        $query = "UPDATE {$CONFIG['TABLE_PICTURES']} SET $update WHERE pid='$pid' LIMIT 1";
                        $result = cpg_db_query($query);
                }
        }
}

function form_label($text)
{
        global $CURENT_PIC;

        echo <<<EOT
        <tr>
                <td class="tableh2" colspan="3">
                        <b>$text</b>
                </td>
        </tr>

EOT;
}

function form_pic_info($text)
{
        global $CURRENT_PIC, $THUMB_ROWSPAN, $CONFIG, $lang_byte_units, $lang_editpics_php;

        if (!is_movie($CURRENT_PIC['filename'])) {
                $pic_info = sprintf($lang_editpics_php['pic_info_str'], $CURRENT_PIC['pwidth'], $CURRENT_PIC['pheight'], ($CURRENT_PIC['filesize'] >> 10), $CURRENT_PIC['hits'], $CURRENT_PIC['votes']);
        } else {
                $pic_info = sprintf($lang_editpics_php['pic_info_str'], '<input type="text" name="pwidth'.$CURRENT_PIC['pid'].'" value="'.$CURRENT_PIC['pwidth'].'" size="5" maxlength="5" class="textinput" />', '<input type="text" name="pheight'.$CURRENT_PIC['pid'].'" value="'.$CURRENT_PIC['pheight'].'" size="5" maxlength="5" class="textinput" />', ($CURRENT_PIC['filesize'] >> 10), $CURRENT_PIC['hits'], $CURRENT_PIC['votes']);
        }

        if (UPLOAD_APPROVAL_MODE) {
               if($CURRENT_PIC['owner_name']){
                        $pic_info .= ' - <a href ="profile.php?uid='.$CURRENT_PIC['owner_id'].'">'.$CURRENT_PIC['owner_name'].'</a>';
                }
        }

        $thumb_url = get_pic_url($CURRENT_PIC, 'thumb');
        $thumb_link = 'displayimage.php?&amp;pos='.(-$CURRENT_PIC['pid']);
        $filename = htmlspecialchars($CURRENT_PIC['filename']);

        echo <<<EOT
        <tr>
                <td class="tableh2" colspan="3">
                        <input type="hidden" name="pid[]" value="{$CURRENT_PIC['pid']}" />
                        <b>$filename</b>
                </td>
        </tr>
        <tr>
                <td class="tableb" style="white-space: nowrap;">
                        $text
                </td>
                <td class="tableb">
                        $pic_info
                </td>
                   <td class="tableb" align="center" rowspan="$THUMB_ROWSPAN">
                        <a href="$thumb_link" target="_blank"><img src="$thumb_url" class="image" border="0" alt="" /><br /></a>
            </td>
        </tr>

EOT;
}

function form_options()
{
        global $CURRENT_PIC, $lang_editpics_php;

                $isgalleryicon_selected = ($CURRENT_PIC['galleryicon']) ? 'checked="checked" ':'';
                $isgalleryicon_disabled = ($CURRENT_PIC['category'] < FIRST_USER_CAT) ? 'disabled="disabled" ':'';

        if (UPLOAD_APPROVAL_MODE) {
                echo <<<EOT
        <tr>
                <td class="tableb" colspan="3" align="center">
                        <input type="radio" name="approved{$CURRENT_PIC['pid']}" id="approved{$CURRENT_PIC['pid']}yes" value="YES" class="radio" /><label for="approved{$CURRENT_PIC['pid']}yes" class="clickable_option">{$lang_editpics_php['approve']}</label>&nbsp;
                        <input type="radio" name="approved{$CURRENT_PIC['pid']}" id="approved{$CURRENT_PIC['pid']}no" value="NO" class="radio" checked="checked" /><label for="approved{$CURRENT_PIC['pid']}no" class="clickable_option">{$lang_editpics_php['postpone_app']}</label>&nbsp;
                        <input type="radio" name="approved{$CURRENT_PIC['pid']}" id="approved{$CURRENT_PIC['pid']}del" value="DELETE" class="radio" /><label for="approved{$CURRENT_PIC['pid']}del" class="clickable_option">{$lang_editpics_php['del_pic']}</label>&nbsp;
                </td>
        </tr>

EOT;
        } else {
                echo <<<EOT
        <tr>
                <td class="tableb" colspan="3" align="center">
                    <table border="0" cellspacing="0" cellpadding="0" width="100%">
                        <tr>
                            <td width="20%" align="center"><input type="radio" name="galleryicon" id="galleryicon{$CURRENT_PIC['pid']}" value="{$CURRENT_PIC['pid']}" {$isgalleryicon_selected}{$isgalleryicon_disabled}class="checkbox" />{$lang_editpics_php['gallery_icon']}</td>
                            <td width="20%" align="center"><input type="checkbox" name="delete{$CURRENT_PIC['pid']}" id="delete{$CURRENT_PIC['pid']}" value="1" class="checkbox" /><label for="delete{$CURRENT_PIC['pid']}" class="clickable_option">{$lang_editpics_php['del_pic']}</label></td>
                            <td width="20%" align="center"><input type="checkbox" name="reset_vcount{$CURRENT_PIC['pid']}" id="reset_vcount{$CURRENT_PIC['pid']}" value="1" class="checkbox" /><label for="reset_vcount{$CURRENT_PIC['pid']}" class="clickable_option">{$lang_editpics_php['reset_view_count']}</label></td>
                            <td width="20%" align="center"><input type="checkbox" name="reset_votes{$CURRENT_PIC['pid']}" id="reset_votes{$CURRENT_PIC['pid']}" value="1" class="checkbox" /><label for="reset_votes{$CURRENT_PIC['pid']}" class="clickable_option">{$lang_editpics_php['reset_votes']}</label></td>
                            <td width="20%" align="center"><input type="checkbox" name="del_comments{$CURRENT_PIC['pid']}" id="del_comments{$CURRENT_PIC['pid']}" value="1" class="checkbox" /><label for="del_comments{$CURRENT_PIC['pid']}" class="clickable_option">{$lang_editpics_php['del_comm']}</label></td>
                        </tr>
                    </table>
                </td>
        </tr>

EOT;
        }
}

function form_input($text, $name, $max_length,$field_width=100)
{
    global $CURRENT_PIC;

    $value = $CURRENT_PIC[$name];
    $name .= $CURRENT_PIC['pid'];
    if ($text == '') {
        echo "        <input type=\"hidden\" name=\"$name\" value=\"\" />\n";
        return;
    }

    echo <<<EOT
        <tr>
            <td class="tableb" style="white-space: nowrap;">
                        $text
        </td>
        <td width="100%" class="tableb" valign="top">
                <input type="text" style="width: {$field_width}%" name="$name" maxlength="$max_length" value="$value" class="textinput" />
                </td>
        </tr>

EOT;
}


function form_alb_list_box($text, $name)
{
        global $CONFIG, $CURRENT_PIC;
        global $user_albums_list, $public_albums_list;

        $sel_album = $CURRENT_PIC['aid'];

        $name .= $CURRENT_PIC['pid'];
        echo <<<EOT
        <tr>
            <td class="tableb" style="white-space: nowrap;">
                        $text
        </td>
        <td class="tableb" valign="top">
                <select name="$name" class="listbox">

EOT;
                foreach($public_albums_list as $album) {
        echo '              <option value="' . $album['aid'] . '"' . ($album['aid'] == $sel_album ? ' selected' : '') . '>' . $album['cat_title'] . "</option>\n";
    }
                foreach($user_albums_list as $album){
                        echo '                        <option value="'.$album['aid'].'"'.($album['aid'] == $sel_album ? ' selected' : '').'>* '.$album['title'] . "</option>\n";
                }
        echo <<<EOT
                        </select>
                </td>
        </tr>

EOT;
}

function form_textarea($text, $name, $max_length)
{
        global $ALBUM_DATA, $CURRENT_PIC;

        $value = $CURRENT_PIC[$name];

        $name .= $CURRENT_PIC['pid'];
        echo <<<EOT
        <tr>
                <td class="tableb" valign="top" style="white-space: nowrap;">
                        $text
                </td>
                <td class="tableb" valign="top">
                        <textarea name="$name" rows="5" cols="40" class="textinput" style="width: 100%;" onkeydown="textCounter(this, $max_length);" onkeyup="textCounter(this, $max_length);">$value</textarea>
                </td>
        </tr>
EOT;
}

function create_form(&$data)
{
        foreach($data as $element){
                if ((is_array($element))) {
                    switch($element[2]){
                            case 0 :
                                    form_input($element[0], $element[1], $element[3]);
                                    break;
                            case 1 :
                                    form_alb_list_box($element[0], $element[1]);
                                    break;
                            case 2 :
                                    form_textarea($element[0], $element[1], $element[3]);
                                    break;
                            case 3 :
                                    form_pic_info($element[0]);
                                    break;
                            case 4 :
                                    form_options();
                                    break;
                            default:
                                        cpg_die(CRITICAL_ERROR, 'Invalid action for form creation', __FILE__, __LINE__);
                    } // switch
                } else {
                        form_label($element);
                }
        }
}

function get_user_albums($user_id = '') {
        global $CONFIG, $user_albums_list;

        $USER_ALBUMS_ARRAY=array(0 => array());
        $or = '';

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


if (GALLERY_ADMIN_MODE) {
    $public_albums = cpg_db_query("SELECT DISTINCT aid, title, IF(category = 0, CONCAT('&gt; ', title), CONCAT(name,' &lt; ',title)) AS cat_title FROM {$CONFIG['TABLE_ALBUMS']}, {$CONFIG['TABLE_CATEGORIES']} WHERE category < '" . FIRST_USER_CAT . "' AND (category = 0 OR category = cid) ORDER BY cat_title");
        if (mysql_num_rows($public_albums)) {
            $public_albums_list=cpg_db_fetch_rowset($public_albums);
        } else {
                $public_albums_list = array();
        }
        mysql_free_result($public_albums);
} else {
        $public_albums_list = array();
}

get_user_albums(USER_ID);

if (count($_POST)) process_post_data();

$start = isset($_GET['start']) ? (int)$_GET['start'] : 0;
$count = isset($_GET['count']) ? (int)$_GET['count'] : 25;
$next_target = $_SERVER['PHP_SELF'].'?album='.$album_id.'&amp;start='.($start+$count).'&amp;count='.$count.((UPLOAD_APPROVAL_MODE==1)?"&amp;mode=upload_approval":"");
$prev_target = $_SERVER['PHP_SELF'].'?album='.$album_id.'&amp;start='.max(0,$start-$count).'&amp;count='.$count.((UPLOAD_APPROVAL_MODE==1)?"&amp;mode=upload_approval":"");
$s50 = $count == 50 ? 'selected' : '';
$s75 = $count == 75 ? 'selected' : '';
$s100 = $count == 100 ? 'selected' : '';

if (UPLOAD_APPROVAL_MODE) {
        $result=cpg_db_query("SELECT count(*) FROM {$CONFIG['TABLE_PICTURES']} WHERE approved = 'NO'");
        $nbEnr = mysql_fetch_array($result);
        $pic_count = $nbEnr[0];

        // Update user names for pictures
        $sql = "SELECT pid, owner_id FROM {$CONFIG['TABLE_PICTURES']} WHERE owner_id != 0 AND owner_name = ''";
        $result = cpg_db_query($sql);
        while($row = mysql_fetch_array($result)){
                //if(defined('UDB_INTEGRATION')){
                        $owner_name = $cpg_udb->get_user_name($row['owner_id']);
                /*} else {
                    $result2 = cpg_db_query("SELECT user_name FROM {$CONFIG['TABLE_USERS']} WHERE user_id = '".$row['owner_id']."'");
                        if (mysql_num_rows($result2)){
                                $row2 = mysql_fetch_array($result2);
                                mysql_free_result($result2);
                                $owner_name = $row2['user_name'];
                        } else {
                                $owner_name = '';
                        }*/
                //}

                if($owner_name){
                        cpg_db_query("UPDATE {$CONFIG['TABLE_PICTURES']} SET owner_name = '$owner_name' WHERE pid = {$row['pid']} LIMIT 1");
                } else {
                        cpg_db_query("UPDATE {$CONFIG['TABLE_PICTURES']} SET owner_id = 0 WHERE pid = {$row['pid']} LIMIT 1");
                }
        }
        mysql_free_result($result);

    $sql =  "SELECT * ".
                        "FROM {$CONFIG['TABLE_PICTURES']} ".
                        "WHERE approved = 'NO' ".
                        "ORDER BY pid ".
                        "LIMIT $start, $count";
        $result = cpg_db_query($sql);
        $form_target = $_SERVER['PHP_SELF'].'?mode=upload_approval&amp;start='.$start.'&amp;count='.$count;
        $title = $lang_editpics_php['upl_approval'];
        $help = '';
} else {
        $result=cpg_db_query("SELECT count(*) FROM {$CONFIG['TABLE_PICTURES']} WHERE aid = '$album_id'");
        $nbEnr = mysql_fetch_array($result);
        $pic_count = $nbEnr[0];
        mysql_free_result($result);
                $sql = "SELECT p.*,a.category FROM {$CONFIG['TABLE_PICTURES']} as p ".
                           "INNER JOIN {$CONFIG['TABLE_ALBUMS']} as a ".
                           "ON a.aid=p.aid ".
                           "WHERE p.aid = '$album_id' ".
                           "ORDER BY p.filename LIMIT $start, $count";
                $result = cpg_db_query($sql);
        $form_target = $_SERVER['PHP_SELF'].'?album='.$album_id.'&amp;start='.$start.'&amp;count='.$count;
        $title = $lang_editpics_php['edit_pics'];
        $help = '&nbsp;'.cpg_display_help('f=index.htm&amp;as=edit_pics&amp;ae=edit_pics_end&amp;top=1', '800', '500');
}

if (!mysql_num_rows($result)) cpg_die(INFORMATION, $lang_errors['no_img_to_display'], __FILE__, __LINE__);

if ($start + $count < $pic_count) {
    $next_link = "<a href=\"$next_target\"><b>{$lang_editpics_php['see_next']}</b></a>&nbsp;&nbsp;-&nbsp;&nbsp;";
} else {
        $next_link = '';
}

if ($start > 0) {
    $prev_link = "<a href=\"$prev_target\"><b>{$lang_editpics_php['see_prev']}</b></a>&nbsp;&nbsp;-&nbsp;&nbsp;";
} else {
        $prev_link = '';
}

$pic_count_text = sprintf($lang_editpics_php['n_pic'], $pic_count);

pageheader($title);
echo <<<EOT
<script type="text/javascript" language="javascript">
<!--
function textCounter(field, maxlimit) {
        if (field.value.length > maxlimit) // if too long...trim it!
        field.value = field.value.substring(0, maxlimit);
}

function selectAll(d,box) {
  var f = document.editForm;
  for (i = 0; i < f.length; i++) {
    if (f[i].type == "checkbox" && f[i].name.indexOf(box) >= 0) {
      if (d.checked) {
        f[i].checked = true;
      } else {
        f[i].checked = false;
      }
    }
  }
}
-->
</script>
EOT;
$mode= (UPLOAD_APPROVAL_MODE==1) ? "&amp;mode=upload_approval":"";
$cat_l = (isset($actual_cat))? "?cat=$actual_cat" : (isset($cat) ? "?cat=$cat" : '');
echo <<< EOT
<form method="post" name="editForm" action="$form_target$mode">
EOT;
starttable("100%", $title.$help, 3);
echo <<<EOT
        <tr>
                <td class="tableh2" colspan="3" align="center" valign="middle">
                        <b>$pic_count_text</b>&nbsp;&nbsp;-&nbsp;&nbsp;
                        $prev_link
                        $next_link
                        <b>{$lang_editpics_php['n_of_pic_to_disp']}</b>
                        <select onChange="if(this.options[this.selectedIndex].value) window.location.href='{$_SERVER['PHP_SELF']}?album=$album_id$mode&amp;start=$start&amp;count='+this.options[this.selectedIndex].value;"  name="count" class="listbox">
                                <option value="25">25</option>
                                <option value="50" $s50>50</option>
                                <option value="75" $s75>75</option>
                                <option value="100" $s100>100</option>
                        </select>
EOT;
if (UPLOAD_APPROVAL_MODE!=1) {
echo <<<EOT
                        &nbsp;&nbsp;-&nbsp;&nbsp;<a href="modifyalb.php?album=$album_id" class="admin_menu">{$lang_editpics_php['album_properties']}</a>&nbsp;&nbsp;-&nbsp;&nbsp;
                        <a href="index.php$cat_l" class="admin_menu">{$lang_editpics_php['parent_category']}</a>&nbsp;&nbsp;-&nbsp;&nbsp;
                        <a href="thumbnails.php?album=$album_id" class="admin_menu">{$lang_editpics_php['thumbnail_view']}</a>
EOT;
}
echo <<<EOT
                </td>
        </tr>
EOT;

echo <<<EOT
        <tr>
            <td class="tableb" colspan="3" align="center">
                <table border="0" cellspacing="0" cellpadding="0" width="100%" style="padding-top:5px;padding-bottom:5px">
                    <tr>
                        <td width="20%" align="right">
                            <b>{$lang_editpics_php['select_unselect']}:</b>
                        </td>
                        <td width="20%" align="center">
                            <span class="admin_menu">
                                <input type="checkbox" name="deleteAll" onclick="selectAll(this,'delete');" class="checkbox" id="deleteAll" />
                                <label for="deleteAll" class="clickable_option">{$lang_editpics_php['del_all']}</label>
                            </span>
                        </td>
                        <td width="20%" align="center">
                            <span class="admin_menu">
                                <input type="checkbox" name="reset_vcountAll" onclick="selectAll(this,'reset_vcount');" class="checkbox" id="reset_vcountAll" />
                                <label for="reset_vcountAll" class="clickable_option">{$lang_editpics_php['reset_all_view_count']}</label>
                            </span>
                        </td>
                        <td width="20%" align="center">
                            <span class="admin_menu">
                                <input type="checkbox" name="reset_votesAll" onclick="selectAll(this,'reset_votes');" class="checkbox" id="reset_votesAll" />
                                <label for="reset_votesAll" class="clickable_option">{$lang_editpics_php['reset_all_votes']}</label>
                            </span>
                        </td>
                        <td width="20%" align="center">
                            <span class="admin_menu">
                                <input type="checkbox" name="del_commentsAll" onclick="selectAll(this,'del_comments');" class="checkbox" id="del_commentsAll" />
                                <label for="del_commentsAll" class="clickable_option">{$lang_editpics_php['del_all_comm']}</label>
                            </span>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
EOT;

while($CURRENT_PIC = mysql_fetch_array($result)){

        if (GALLERY_ADMIN_MODE && $CURRENT_PIC['owner_id'] != USER_ID) {
              get_user_albums($CURRENT_PIC['owner_id']);
        } else {
              get_user_albums();
        }
        create_form($data);
        flush();
} // while
mysql_free_result($result);

echo <<<EOT
        <tr>
                <td colspan="3" align="center" class="tablef">
                        <input type="submit" value="{$lang_editpics_php['apply']}" class="button" />
                </td>
        </tr>

EOT;
endtable();
echo <<<EOT
        </form>
EOT;
pagefooter();
ob_end_flush();
?>
