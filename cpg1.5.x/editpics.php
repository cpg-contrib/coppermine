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

define('IN_COPPERMINE', true);
define('EDITPICS_PHP', true);

require('include/init.inc.php');

// Include the JS for versioncheck.php
js_include('js/jquery.autogrow.js');
js_include('js/editpics.js');

// Define the icons
$icon_array = array();
$icon_array['album_properties'] = cpg_fetch_icon('modifyalb', 2);
$icon_array['thumbnail_view'] = cpg_fetch_icon('thumbnails', 2);
$icon_array['file_info'] = cpg_fetch_icon('info', 2);
$icon_array['album'] = cpg_fetch_icon('alb_mgr', 2);
$icon_array['move'] = cpg_fetch_icon('move', 2);
$icon_array['title'] = cpg_fetch_icon('title', 2);
$icon_array['file_name'] = cpg_fetch_icon('filename', 2);
$icon_array['description'] = cpg_fetch_icon('text_left', 2);
$icon_array['keyword'] = cpg_fetch_icon('keyword_mgr', 2);
$icon_array['file_approval'] = cpg_fetch_icon('file_approval', 2);
$icon_array['file_approve'] = cpg_fetch_icon('file_approve', 0, $lang_editpics_php['approve_pic']);
$icon_array['file_approve_all'] = cpg_fetch_icon('file_approve', 0, $lang_editpics_php['approve_all']);
$icon_array['file_disapprove'] = cpg_fetch_icon('file_disapprove', 2);
$icon_array['exif'] = cpg_fetch_icon('exif_mgr', 2);
$icon_array['reset_views'] = cpg_fetch_icon('stats_delete',  0);
$icon_array['reset_views_all'] = cpg_fetch_icon('stats_delete',  0, $lang_editpics_php['reset_all_view_count']);
$icon_array['reset_votes'] = cpg_fetch_icon('blank', 2);
$icon_array['ok'] = cpg_fetch_icon('ok', 2);
$icon_array['category'] = cpg_fetch_icon('category', 2);
$icon_array['delete'] = cpg_fetch_icon('delete', 0, $lang_editpics_php['del_pic']);
$icon_array['delete_all'] = cpg_fetch_icon('delete', 0, $lang_editpics_php['del_all']);
$icon_array['comment_delete'] = cpg_fetch_icon('comment_disapprove', 0, $lang_editpics_php['del_comm']);
$icon_array['comment_delete_all'] = cpg_fetch_icon('comment_disapprove', 0, $lang_editpics_php['del_all_comm']);



$view_icon = cpg_fetch_icon('stats', 0, $lang_editpics_php['reset_view_count']);

if ($superCage->get->keyExists('album')) {
    $album_id = $superCage->get->getInt('album');
} elseif ($superCage->post->keyExists('album')) {
    $album_id = $superCage->post->getInt('album');
} else {
    $album_id = -1;
}

if (array_key_exists('allowed_albums', $USER_DATA) && is_array($USER_DATA['allowed_albums']) && count($USER_DATA['allowed_albums'])) {

    define('MODERATOR_MODE', 1);
    $albStr = implode(",", $USER_DATA['allowed_albums']);
    $albStr = "($albStr)";
    echo "albstring: ".$albStr;
/*
    if (isset($_REQUEST['album']) && in_array($_REQUEST['album'], $USER_DATA['allowed_albums'])) {
      define('MODERATOR_EDIT_MODE', 1);
    } else {
      define('MODERATOR_EDIT_MODE', 0);
    }
*/

    if (isset($album_id) && in_array($album_id, $USER_DATA['allowed_albums'])) {
        define('MODERATOR_EDIT_MODE', 1);
    } else {
        define('MODERATOR_EDIT_MODE', 0);
    }
} else {
    define('MODERATOR_MODE', 0);
    define('MODERATOR_EDIT_MODE', 0);
}


if (!(GALLERY_ADMIN_MODE || USER_ADMIN_MODE || MODERATOR_MODE)) cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);


/*
define('UPLOAD_APPROVAL_MODE', isset($_GET['mode']));
define('EDIT_PICTURES_MODE', !isset($_GET['mode']));
*/
define('UPLOAD_APPROVAL_MODE', $superCage->get->keyExists('mode'));
define('EDIT_PICTURES_MODE', !$superCage->get->keyExists('mode'));
/*
if (isset($_GET['album'])) {
        $album_id = (int)$_GET['album'];
} elseif (isset($_GET['album'])) {
        $album_id = (int)$_POST['album'];
} else {
        $album_id = -1;
}
*/

if (UPLOAD_APPROVAL_MODE && !GALLERY_ADMIN_MODE && !MODERATOR_MODE) {
    cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);
}

if (EDIT_PICTURES_MODE) {
    $query = "SELECT title, category, keyword FROM {$CONFIG['TABLE_ALBUMS']} "
            ." WHERE aid = '$album_id'";
    $result = cpg_db_query($query);
    if (!mysql_num_rows($result)) {
        cpg_die(CRITICAL_ERROR, $lang_errors['non_exist_ap'], __FILE__, __LINE__);
    }
    $ALBUM_DATA = mysql_fetch_array($result);
    mysql_free_result($result);
    $cat = $ALBUM_DATA['category'];
    $actual_cat = $cat;
    if ((!user_is_allowed() && !GALLERY_ADMIN_MODE && !MODERATOR_EDIT_MODE) 
            || (!$CONFIG['users_can_edit_pics'] && !GALLERY_ADMIN_MODE && !MODERATOR_EDIT_MODE)) {
        cpg_die(ERROR, $lang_errors['perm_denied'], __FILE__, __LINE__);
    }
} else {
    $ALBUM_DATA = array();
}

$THUMB_ROWSPAN=5;
if ($CONFIG['user_field1_name'] != '') $THUMB_ROWSPAN++;
if ($CONFIG['user_field2_name'] != '') $THUMB_ROWSPAN++;
if ($CONFIG['user_field3_name'] != '') $THUMB_ROWSPAN++;
if ($CONFIG['user_field4_name'] != '') $THUMB_ROWSPAN++;

// $USER_ALBUMS_ARRAY = array(0 => array());

// Type 0 => input
//      1 => album list
//      2 => text_area
//      3 => picture information
$captionLabel = $lang_editpics_php['desc'];
$keywordLabel = sprintf($lang_common['keywords_insert1'],$lang_common['keyword_separators'][$CONFIG['keyword_separator']])
    . '<br /><a href="#" onClick="return MM_openBrWindow(\'keyword_select.php?id=%s\',\'selectKey\',\'width=250, height=400, scrollbars=yes,toolbar=no,status=yes,resizable=yes\')">' . $lang_common['keywords_insert2'] .'</a>';
if ($CONFIG['show_bbcode_help']) {$captionLabel .= '&nbsp;'. cpg_display_help('f=empty.html&amp;base=64&amp;h='.urlencode(base64_encode(serialize($lang_bbcode_help_title.'&nbsp;'))).'&amp;t='.urlencode(base64_encode(serialize($lang_bbcode_help))),500,300);}
$data = array(
        array($icon_array['file_info'] . $lang_editpics_php['pic_info'], '', 3),
        array($icon_array['album'] . $lang_common['album'], 'aid', 1),
        array($icon_array['title'] . $lang_common['title'], 'title', 0, 255),
        array($icon_array['description'] . $captionLabel, 'caption', 2, $CONFIG['max_img_desc_length']),
        array($icon_array['keyword'] . $keywordLabel, 'keywords', 0, 255),
        //array($lang_editpics_php['approval'], 'approved', 5),
        array($CONFIG['user_field1_name'], 'user1', 0, 255),
        array($CONFIG['user_field2_name'], 'user2', 0, 255),
        array($CONFIG['user_field3_name'], 'user3', 0, 255),
        array($CONFIG['user_field4_name'], 'user4', 0, 255),
        //array('', '', 4)
);


/**
 * get_post_var()
 *
 * Function to fetch the given key's data from post and return it
 *
 * @param string String part of the key
 * @param int The pid attached to the key
 *
 * @return string Data from post
 */
function get_post_var($var, $pid)
{
    global $lang_errors;

    $superCage = Inspekt::makeSuperCage();
    $var_name = $var.$pid;

    if ($superCage->post->keyExists($var_name)) {
        $post_var_name = $superCage->post->getEscaped($var_name);
    } else {
        cpg_die(CRITICAL_ERROR, $lang_errors['param_missing']." ($var_name)", __FILE__, __LINE__);
    }
   return $post_var_name;
}

/**
 * process_post_data()
 *
 * Function to process the form posted
 */
function process_post_data()
{
    global $CONFIG;
    global $user_albums_list, $lang_errors;
    $superCage = Inspekt::makeSuperCage();

    $user_album_set = array();
    foreach($user_albums_list as $album) {
        $user_album_set[$album['aid']] = 1;
    }

    $pid = $superCage->post->getInt('pid');
    if (!is_array($pid)) {
        cpg_die(CRITICAL_ERROR, $lang_errors['param_missing'], __FILE__, __LINE__);
    }

    $pid_array = $pid;

    if ($superCage->post->keyExists('galleryicon')) {
        $galleryincon = $superCage->post->getInt('galleyicon');
    } else {
        $galleryicon = '';
    }

    foreach ($pid_array as $pid) {
        $aid         = $superCage->post->getInt("aid$pid");

        $title       = get_post_var('title', $pid);
        $caption     = get_post_var('caption', $pid);
        $keywords    = get_post_var('keywords', $pid);
        $user1       = get_post_var('user1', $pid);
        $user2       = get_post_var('user2', $pid);
        $user3       = get_post_var('user3', $pid);
        $user4       = get_post_var('user4', $pid);

        $delete = false;
        $reset_vcount = false;
        $reset_votes = false;
        $del_comments = false;

        $isgalleryicon = ($galleryicon === $pid);

        if ($superCage->post->keyExists('delete'.$pid)) {
            $delete = $superCage->post->getInt('delete'.$pid);
        }

        if ($superCage->post->keyExists('reset_vcount'.$pid)) {
            $reset_vcount = $superCage->post->getInt('reset_vcount'.$pid);
        }

        if ($superCage->post->keyExists('reset_votes'.$pid)) {
            $reset_votes = $superCage->post->getInt('reset_votes'.$pid);
        }

        if ($superCage->post->keyExists('del_comments'.$pid)) {
            $del_comments = $superCage->post->getInt('del_comments'.$pid) || $delete;
        }
        // We will be selecting pid in the query as we need it in $pic array for the plugin filter
        $query = "SELECT pid, category, filepath, filename, owner_id FROM {$CONFIG['TABLE_PICTURES']}, {$CONFIG['TABLE_ALBUMS']} WHERE {$CONFIG['TABLE_PICTURES']}.aid = {$CONFIG['TABLE_ALBUMS']}.aid AND pid='$pid'";
        $result = cpg_db_query($query);

        if (!mysql_num_rows($result)) {
            cpg_die(CRITICAL_ERROR, $lang_errors['non_exist_ap'], __FILE__, __LINE__);
        }

        $pic = mysql_fetch_array($result);
        mysql_free_result($result);

        if (!GALLERY_ADMIN_MODE && !MODERATOR_MODE && !USER_ADMIN_MODE && !user_is_allowed() && !$CONFIG['users_can_edit_pics'] ) {
            if ($pic['category'] != FIRST_USER_CAT + USER_ID) {
                cpg_die(ERROR, $lang_errors['perm_denied']."<br />(picture category = {$pic['category']}/ $pid)", __FILE__, __LINE__);
            }

            if (!isset($user_album_set[$aid])) {
                cpg_die(ERROR, $lang_errors['perm_denied']."<br />(target album = $aid)", __FILE__, __LINE__);
            }
        }

        $update  = "aid = '$aid'";
        $update .= ", title = '$title'";
        $update .= ", caption = '$caption'";
        $update .= ", keywords = '$keywords'";
        $update .= ", user1 = '$user1'";
        $update .= ", user2 = '$user2'";
        $update .= ", user3 = '$user3'";
        $update .= ", user4 = '$user4'";

        if ($isgalleryicon && $pic['category'] > FIRST_USER_CAT) {
            $sql = 'UPDATE '.$CONFIG['TABLE_PICTURES'].' SET galleryicon=0 WHERE owner_id='.$pic['owner_id'].';';
            cpg_db_query($sql);
            $update .= ", galleryicon = ".addslashes($galleryicon);
        }

        if (is_movie($pic['filename'])) {
            $pwidth = $superCage->post->getInt('pwidth'.$pid);
            $pheight = $superCage->post->getInt('pheight'.$pid);
            $update .= ", pwidth = " . $pwidth;
            $update .= ", pheight = " . $pheight;
        }

        if ($reset_vcount) {
            $update .= ", hits = '0'";
            resetDetailHits($pid);
        }
        if ($reset_votes) {
            $update .= ", pic_rating = '0', votes = '0'";
            resetDetailVotes($pid);
        }

        if (GALLERY_ADMIN_MODE || UPLOAD_APPROVAL_MODE || MODERATOR_MODE) {
            if ($superCage->post->keyExists('approved'.$pid)) {
                $approved = $superCage->post->getAlpha('approved'.$pid);
            }
            if ($approved) {
                $update .= ", approved = 'YES'";
            } else {
                $update .= ", approved = 'NO'";
            }
        }

        if ($del_comments) {
            $query = "DELETE FROM {$CONFIG['TABLE_COMMENTS']} WHERE pid='$pid'";
            $result = cpg_db_query($query);
        }

        if ($delete) {
            $dir = $CONFIG['fullpath'].$pic['filepath'];
            $file = $pic['filename'];

            if (!is_writable($dir)) {
                cpg_die(CRITICAL_ERROR, sprintf($lang_errors['directory_ro'], $dir), __FILE__, __LINE__);
            }

            $files = array ($dir . $file, $dir . $CONFIG['normal_pfx'] . $file, $dir . $CONFIG['orig_pfx'] . $file, $dir . $CONFIG['thumb_pfx'] . $file);
            foreach ($files as $currFile) {
                    if (is_file($currFile)) @unlink($currFile);
            }
            
            // Plugin filter to be called before deleting a file
            CPGPluginAPI::filter('before_delete_file', $pic);
            
            $query = "DELETE FROM {$CONFIG['TABLE_PICTURES']} WHERE pid='$pid' LIMIT 1";
            $result = cpg_db_query($query);
            
            // Plugin filter to be called after a file is deleted
            CPGPluginAPI::filter('after_delete_file', $pic);
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
                    <strong>$text</strong>
            </td>
    </tr>

EOT;
}

function form_pic_info($text)
{
    global $CURRENT_PIC, $THUMB_ROWSPAN, $CONFIG; 
    global $lang_byte_units, $lang_editpics_php, $lang_common, $loop_counter, $row_style_class, $icon_array;

    if (!is_movie($CURRENT_PIC['filename'])) {
        $pic_info = sprintf($lang_editpics_php['pic_info_str'], $CURRENT_PIC['pwidth'], $CURRENT_PIC['pheight'], ($CURRENT_PIC['filesize'] >> 10), $CURRENT_PIC['hits'], $CURRENT_PIC['votes']);
    } else {
        $pic_info = sprintf($lang_editpics_php['pic_info_str'], '<input type="text" name="pwidth'.$CURRENT_PIC['pid'].'" value="'.$CURRENT_PIC['pwidth'].'" size="5" maxlength="5" class="textinput" />', '<input type="text" name="pheight'.$CURRENT_PIC['pid'].'" value="'.$CURRENT_PIC['pheight'].'" size="5" maxlength="5" class="textinput" />', ($CURRENT_PIC['filesize'] >> 10), $CURRENT_PIC['hits'], $CURRENT_PIC['votes']);
    }

    if (UPLOAD_APPROVAL_MODE) {
        if ($CURRENT_PIC['owner_name']) {
            $pic_info .= ' - <a href ="profile.php?uid='.$CURRENT_PIC['owner_id'].'" target="_blank">'.$CURRENT_PIC['owner_name'].'</a>';
        }
    }

    $thumb_url = get_pic_url($CURRENT_PIC, 'thumb');
    $thumb_link = 'displayimage.php?&amp;pos='.(-$CURRENT_PIC['pid']);
    $filename = htmlspecialchars($CURRENT_PIC['filename']);
    $filepath = htmlspecialchars($CURRENT_PIC['filepath']);
    $isgalleryicon_selected = ($CURRENT_PIC['galleryicon']) ? 'checked="checked" ':'';
    $isgalleryicon_disabled = ($CURRENT_PIC['category'] < FIRST_USER_CAT) ? ' style="display:none;" ':'';
    if ($loop_counter == 0) {
        $row_style_class = 'tableb';
    } else {
        $row_style_class = 'tableb tableb_alternate';
    }
    $loop_counter++;
    if ($loop_counter > 1) {
        $loop_counter = 0;
    }
    $pic_approval_checked = '';  // initialize
    if ($CURRENT_PIC['approved'] == 'YES') {
        $pic_approval_checked = 'checked="checked"';
    }

    // The approve checkbox is shown only if the user is admin or moderator.
    if (GALLERY_ADMIN_MODE || MODERATOR_MODE) {
        $approve_html = <<<EOT
                          <td class="{$row_style_class}" width="40" valign="top">
                                  <input type="checkbox" name="approved{$CURRENT_PIC['pid']}" id="approve{$CURRENT_PIC['pid']}" value="YES" {$pic_approval_checked} class="checkbox" title="{$lang_editpics_php['approve_pic']}" /><label for="approve{$CURRENT_PIC['pid']}" class="clickable_option">{$icon_array['file_approve']}</label>
                          </td>
EOT;
    }
    // The reset hits box will only be displayed if a file has more than zero hits
    if ($CURRENT_PIC['hits'] == 0) {
        $hits_reset_disabled = 'disabled="disabled"';
    } else {
        $hits_reset_disabled = '';
    }
    // The reset votes box will only be displayed if a file has more than zero votes
    if ($CURRENT_PIC['votes'] == 0) {
        $votes_reset_disabled = 'disabled="disabled"';
    } else {
        $votes_reset_disabled = '';
    }
    

    echo <<<EOT
    <tr>
        <td colspan="3">
            <table border="0" cellspacing="0" cellpadding="0" width="100%">
                <tr>
                    <td class="{$row_style_class}">
                            {$icon_array['file_name']}{$lang_common['filename']}: <tt>{$CONFIG['site_url']}{$CONFIG['fullpath']}{$filepath}{$filename}</tt>
                    </td>
                    <td class="{$row_style_class}" width="40" valign="top">
                    <input type="checkbox" name="delete{$CURRENT_PIC['pid']}" id="delete{$CURRENT_PIC['pid']}" value="1" class="checkbox" title="{$lang_editpics_php['del_pic']}" /><label for="delete{$CURRENT_PIC['pid']}" class="clickable_option">{$icon_array['delete']}</label>
                    </td>
                    $approve_html
                    <td class="{$row_style_class}" width="70">
                            <input type="checkbox" name="reset_vcount{$CURRENT_PIC['pid']}" id="reset_vcount{$CURRENT_PIC['pid']}" value="1" class="checkbox" title="{$lang_editpics_php['reset_view_count']}" {$hits_reset_disabled} /><label for="reset_vcount{$CURRENT_PIC['pid']}" class="clickable_option" title="{$lang_editpics_php['reset_view_count']}">{$icon_array['reset_views']} ({$CURRENT_PIC['hits']})</label>
                    </td>
                    <td class="{$row_style_class}" width="70">
                            <input type="checkbox" name="reset_votes{$CURRENT_PIC['pid']}" id="reset_votes{$CURRENT_PIC['pid']}" value="1" class="checkbox" title="{$lang_editpics_php['reset_votes']}" {$votes_reset_disabled} /><label for="reset_votes{$CURRENT_PIC['pid']}" class="clickable_option"><img src="images/rating.gif" border="0" width="16" height="16" alt="" title="{$lang_editpics_php['reset_votes']}" /> ({$CURRENT_PIC['votes']})</label>
                    </td>
                    <td class="{$row_style_class}" width="40">
                            <input type="checkbox" name="del_comments{$CURRENT_PIC['pid']}" id="del_comments{$CURRENT_PIC['pid']}" value="1" class="checkbox" title="{$lang_editpics_php['del_comm']}" /><label for="del_comments{$CURRENT_PIC['pid']}" class="clickable_option">{$icon_array['comment_delete']}</label>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td class="{$row_style_class}" style="white-space: nowrap;">
                $text
        </td>
        <td class="{$row_style_class}">
                <input type="hidden" name="pid[]" value="{$CURRENT_PIC['pid']}" />
                $pic_info
        </td>
           <td class="{$row_style_class}" align="center" valign="top" rowspan="$THUMB_ROWSPAN">
                <a href="$thumb_link" target="_blank"><img src="$thumb_url" class="image" border="0" alt="" /></a><br />
                <span{$isgalleryicon_disabled}><input type="radio" name="galleryicon" id="galleryicon{$CURRENT_PIC['pid']}" value="{$CURRENT_PIC['pid']}" {$isgalleryicon_selected}class="checkbox" /><label for="galleryicon{$CURRENT_PIC['pid']}" class="clickable_option">{$lang_editpics_php['gallery_icon']}</label></span>
        </td>
    </tr>

EOT;
}

function form_options()
{
    global $CURRENT_PIC, $lang_editpics_php, $row_style_class;

    if (UPLOAD_APPROVAL_MODE) {
        echo <<<EOT
        <tr>
                <td class="{$row_style_class}" colspan="3" align="center">
                        <input type="radio" name="approved{$CURRENT_PIC['pid']}" id="approved{$CURRENT_PIC['pid']}yes" value="YES" class="radio" /><label for="approved{$CURRENT_PIC['pid']}yes" class="clickable_option">{$lang_editpics_php['approve']}</label>&nbsp;
                        <input type="radio" name="approved{$CURRENT_PIC['pid']}" id="approved{$CURRENT_PIC['pid']}no" value="NO" class="radio" checked="checked" /><label for="approved{$CURRENT_PIC['pid']}no" class="clickable_option">{$lang_editpics_php['postpone_app']}</label>&nbsp;
                        <input type="radio" name="approved{$CURRENT_PIC['pid']}" id="approved{$CURRENT_PIC['pid']}del" value="DELETE" class="radio" /><label for="approved{$CURRENT_PIC['pid']}del" class="clickable_option">{$lang_editpics_php['del_pic']}</label>&nbsp;
                </td>
        </tr>

EOT;
    } else {
        echo <<<EOT
        <tr>
                <td class="{$row_style_class}" colspan="3" align="center">
<!-- removed options-->
                </td>
        </tr>

EOT;
    }
}


function form_input($text, $name, $max_length,$field_width=100)
{
    global $CURRENT_PIC, $row_style_class;

    $value = array_key_exists($name, $CURRENT_PIC) ? $CURRENT_PIC[$name] : '';
    $name .= $CURRENT_PIC['pid'];
    $text = sprintf($text,$CURRENT_PIC['pid']);
    if ($text == '') {
        echo "        <input type=\"hidden\" name=\"$name\" value=\"\" />\n";
        return;
    }

    echo <<<EOT
        <tr>
            <td class="{$row_style_class}" style="white-space: nowrap;">
                $text
            </td>
            <td width="100%" class="{$row_style_class}" valign="top">
                <input type="text" style="width: {$field_width}%" name="$name" id="$name" maxlength="$max_length" value="$value" class="textinput" />
            </td>
        </tr>

EOT;
}


function form_alb_list_box($text, $name)
{
    global $CONFIG, $CURRENT_PIC;
    global $user_albums_list, $public_albums_list, $row_style_class, $icon_array;

    $sel_album = $CURRENT_PIC['aid'];

    $name .= $CURRENT_PIC['pid'];
    echo <<<EOT
        <tr>
            <td class="{$row_style_class}" style="white-space: nowrap;">
                        $text
        </td>
        <td class="{$row_style_class}" valign="top">
                {$icon_array['move']}<select name="$name" class="listbox">

EOT;
    foreach ($public_albums_list as $album) {
        echo '              <option value="' , $album['aid'] , '"' , ($album['aid'] == $sel_album ? ' selected' : '') , '>' , $album['cat_title'] , "</option>\n";
    }
    foreach ($user_albums_list as $album) {
        echo '                        <option value="' , $album['aid'] , '"' , ($album['aid'] == $sel_album ? ' selected' : '') , '>* ' , $album['title'] , "</option>\n";
    }
    echo <<<EOT
                        </select>
                </td>
        </tr>

EOT;
}

function form_textarea($text, $name, $max_length)
{
    global $ALBUM_DATA, $CURRENT_PIC, $row_style_class;

    $value = $CURRENT_PIC[$name];

    $name .= $CURRENT_PIC['pid'];
    echo <<<EOT
        <tr>
                <td class="{$row_style_class}" valign="top" style="white-space: nowrap;">
                        $text
                </td>
                <td class="{$row_style_class}" valign="top">
                        <textarea name="$name" id="{$name}" rows="1" cols="60" class="textinput autogrow" onkeydown="textCounter(this, $max_length);" onkeyup="textCounter(this, $max_length);">$value</textarea>
                </td>
        </tr>
EOT;
}

function form_status($text, $name)
{
    global $CURRENT_PIC, $lang_editpics_php, $row_style_class;

    $checkYes = ($CURRENT_PIC[$name] == 'YES') ? 'checked="checked"' : '';
    $checkNo = ($CURRENT_PIC[$name] == 'NO') ? 'checked="checked"' : '';

    $name .= $CURRENT_PIC['pid'];

    if (!UPLOAD_APPROVAL_MODE && GALLERY_ADMIN_MODE) {
    echo <<<EOT
        <tr>
            <td class="{$row_style_class}" style="white-space: nowrap;">
                        $text
        </td>
        <td width="100%" class="{$row_style_class}" valign="top">
                <input type="radio" id="approved_yes_{$name}" name="$name" value="YES" $checkYes /><label for="approved_yes_{$name}" class="clickable_option">{$lang_editpics_php['approved']}</label>&nbsp;&nbsp;
                <input type="radio" id="approved_no_{$name}" name="$name" value="NO" $checkNo /><label for="approved_no_{$name}" class="clickable_option">{$lang_editpics_php['disapproved']}</label>
                </td>
        </tr>

EOT;
    }
}

function create_form(&$data)
{
    foreach ($data as $element) {
        if ((is_array($element))) {
            switch ($element[2]) {
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
/*
                case 4 :
                    form_options();
                    break;
                case 5 :
                    form_status($element[0], $element[1]);
                    break;
*/
                default:
                    cpg_die(CRITICAL_ERROR, 'Invalid action for form creation', __FILE__, __LINE__);
            } // switch
        } else {
            form_label($element);
        }
    } // foreach
}

function get_user_albums($user_id = '') 
{
    global $CONFIG, $user_albums_list, $albStr, $icon_array;

    $USER_ALBUMS_ARRAY=array(0 => array());

    $or = '';
    if ($user_id != '') {
        $or = " OR category='" . (FIRST_USER_CAT + $user_id) . "'";
    }

    if (!isset($USER_ALBUMS_ARRAY[USER_ID])) {
        if (MODERATOR_MODE && UPLOAD_APPROVAL_MODE || MODERATOR_EDIT_MODE) {
            $user_albums = cpg_db_query("SELECT aid, title FROM {$CONFIG['TABLE_ALBUMS']} WHERE aid IN $albStr AND category > '".FIRST_USER_CAT."' OR category='".(FIRST_USER_CAT + USER_ID)."' ORDER BY title");
                
            if (mysql_num_rows($user_albums)) {
                $user_albums_list=cpg_db_fetch_rowset($user_albums);
            } else {
                $user_albums_list = array();
            }
            mysql_free_result($user_albums);
        } else {
            // Only list the albums owned by the user
            $cat = USER_ID + FIRST_USER_CAT;
            $user_id = USER_ID;

            // Get albums in "my albums"
            $result1 = cpg_db_query("SELECT aid , title FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = $cat");
            $rowset1 = cpg_db_fetch_rowset($result1);
            mysql_free_result($result1);

            // Get public albums
            $result2 = cpg_db_query("SELECT alb.aid AS aid, CONCAT_WS('', '(', cat.name, ') ', alb.title) AS title FROM {$CONFIG['TABLE_ALBUMS']} AS alb INNER JOIN {$CONFIG['TABLE_CATEGORIES']} AS cat ON alb.owner = '$user_id' AND alb.category = cat.cid ORDER BY alb.category DESC, alb.pos ASC");
            $rowset2 = cpg_db_fetch_rowset($result2);
            mysql_free_result($result2);

            // Merge rowsets
            $user_albums_list = array_merge($rowset1, $rowset2);
        }

        $USER_ALBUMS_ARRAY[USER_ID] = $user_albums_list;

    } else {
        $user_albums_list = &$USER_ALBUMS_ARRAY[USER_ID];
    }
} // function get_user_albums


if (GALLERY_ADMIN_MODE) {
    $public_albums = cpg_db_query("SELECT DISTINCT aid, title, IF(category = 0, CONCAT('&gt; ', title), CONCAT(name,' &lt; ',title)) AS cat_title FROM {$CONFIG['TABLE_ALBUMS']} LEFT JOIN {$CONFIG['TABLE_CATEGORIES']} ON cid = category WHERE category < '" . FIRST_USER_CAT . "' ORDER BY cat_title");
    if (mysql_num_rows($public_albums)) {
        $public_albums_list=cpg_db_fetch_rowset($public_albums);
    } else {
        $public_albums_list = array();
    }
    mysql_free_result($public_albums);
} elseif (MODERATOR_MODE) {
    $public_albums = cpg_db_query("SELECT DISTINCT aid, title, IF(category = 0, CONCAT('&gt; ', title), CONCAT(name,' &lt; ',title)) AS cat_title FROM {$CONFIG['TABLE_ALBUMS']} LEFT JOIN {$CONFIG['TABLE_CATEGORIES']} ON cid = category WHERE aid IN $albStr AND category < '" . FIRST_USER_CAT . "' ORDER BY cat_title");
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

//if (count($_POST)) process_post_data();
if ($superCage->post->keyExists('go')) { 
    process_post_data();
}


//$start = isset($_GET['start']) ? (int)$_GET['start'] : 0;
if ($superCage->get->keyExists('start')) {
    $start = $superCage->get->getInt('start');
} else {
    $start = 0;
}
//$count = isset($_GET['count']) ? (int)$_GET['count'] : 25;
if ($superCage->get->keyExists('count')) {
    $count = $superCage->get->getInt('count');
} else {
    $count = 25;
}
$next_target = $CPG_PHP_SELF.'?album='.$album_id.'&amp;start='.($start+$count).'&amp;count='.$count.((UPLOAD_APPROVAL_MODE==1)?"&amp;mode=upload_approval":"");
$prev_target = $CPG_PHP_SELF.'?album='.$album_id.'&amp;start='.max(0,$start-$count).'&amp;count='.$count.((UPLOAD_APPROVAL_MODE==1)?"&amp;mode=upload_approval":"");
$s50 = $count == 50 ? 'selected' : '';
$s75 = $count == 75 ? 'selected' : '';
$s100 = $count == 100 ? 'selected' : '';

$link_count = 0;  // initialize
if (UPLOAD_APPROVAL_MODE) {
    if (MODERATOR_MODE) {
        $result = cpg_db_query("SELECT count(*) FROM {$CONFIG['TABLE_PICTURES']} WHERE approved = 'NO' AND aid IN $albStr");
    } else {
        $result = cpg_db_query("SELECT count(*) FROM {$CONFIG['TABLE_PICTURES']} WHERE approved = 'NO'");
    }

    $nbEnr = mysql_fetch_array($result);
    $pic_count = $nbEnr[0];

    // Update user names for pictures
    $sql = "SELECT pid, owner_id FROM {$CONFIG['TABLE_PICTURES']} WHERE owner_id != 0 AND owner_name = ''";
    $result = cpg_db_query($sql);
    while ($row = mysql_fetch_array($result)) {
        //if (defined('UDB_INTEGRATION')) {
            $owner_name = $cpg_udb->get_user_name($row['owner_id']);
        /*
        } else {
            $result2 = cpg_db_query("SELECT user_name FROM {$CONFIG['TABLE_USERS']} WHERE user_id = '".$row['owner_id']."'");
            if (mysql_num_rows($result2)) {
                $row2 = mysql_fetch_array($result2);
                mysql_free_result($result2);
                $owner_name = $row2['user_name'];
            } else {
                $owner_name = '';
            }
        }
        */

        if ($owner_name) {
            cpg_db_query("UPDATE {$CONFIG['TABLE_PICTURES']} SET owner_name = '$owner_name' WHERE pid = {$row['pid']} LIMIT 1");
        } else {
            cpg_db_query("UPDATE {$CONFIG['TABLE_PICTURES']} SET owner_id = 0 WHERE pid = {$row['pid']} LIMIT 1");
        }
    }
    mysql_free_result($result);

    if (MODERATOR_MODE) {
        $sql =  "SELECT * " .
                " FROM {$CONFIG['TABLE_PICTURES']} " .
                " WHERE approved = 'NO' AND aid IN $albStr " .
                " ORDER BY pid " .
                " LIMIT $start, $count";
    } else {
        $sql =  "SELECT * " .
                " FROM {$CONFIG['TABLE_PICTURES']} " .
                " WHERE approved = 'NO' " .
                " ORDER BY pid " .
                " LIMIT $start, $count";
    }
    $result = cpg_db_query($sql);
    $form_target = $CPG_PHP_SELF.'?mode=upload_approval&amp;start='.$start.'&amp;count='.$count;
    $title = $lang_editpics_php['upl_approval'];
    $help = '';

} else {
    $sql = "SELECT count(*) FROM {$CONFIG['TABLE_PICTURES']} WHERE aid = '$album_id'";
    $result = cpg_db_query($sql);
    $nbEnr = mysql_fetch_array($result);
    $pic_count = $nbEnr[0];
    mysql_free_result($result);

    $sql = "SELECT p.*,a.category FROM {$CONFIG['TABLE_PICTURES']} as p " .
            " INNER JOIN {$CONFIG['TABLE_ALBUMS']} as a " .
            " ON a.aid=p.aid " .
            " WHERE p.aid = '$album_id' " .
            " ORDER BY p.pid DESC LIMIT $start, $count";
    $result = cpg_db_query($sql);
    $form_target = $CPG_PHP_SELF.'?album='.$album_id.'&amp;start='.$start.'&amp;count='.$count;
    $title = $lang_editpics_php['edit_pics'];
    $help = '&nbsp;'.cpg_display_help('f=files.htm&amp;as=edit_pics&amp;ae=edit_pics_end&amp;top=1', '800', '500');
}

if (!mysql_num_rows($result)) { 
    // TO DO: replace these raw error messages with a page showing link to 'album properties', 'parent category'
    if ($link_count > 0) {
        cpg_die(INFORMATION, $lang_editpics_php['error_linked_only'], __FILE__, __LINE__);
    } else {
        cpg_die(INFORMATION, $lang_editpics_php['error_empty'], __FILE__, __LINE__);
    }
}

if ($start + $count < $pic_count) {
    $next_link = "<a href=\"$next_target\"><strong>{$lang_editpics_php['see_next']}</strong></a>&nbsp;&nbsp;-&nbsp;&nbsp;";
} else {
    $next_link = '';
}

if ($start > 0) {
    $prev_link = "<a href=\"$prev_target\"><strong>{$lang_editpics_php['see_prev']}</strong></a>&nbsp;&nbsp;-&nbsp;&nbsp;";
} else {
    $prev_link = '';
}

$pic_count_text = sprintf($lang_editpics_php['n_pic'], $pic_count);

pageheader($title);
$mode = (UPLOAD_APPROVAL_MODE==1) ? "&amp;mode=upload_approval":"";
$cat_l = (isset($actual_cat))? "?cat=$actual_cat" : (isset($cat) ? "?cat=$cat" : '');
echo <<< EOT
<form method="post" name="editForm" id="cpgform" action="$form_target$mode">
EOT;
starttable("100%", $title.$help, 3);
echo <<<EOT
        <tr>
                <td class="tableh2" colspan="3" align="center" valign="middle">
                        <strong>$pic_count_text</strong>&nbsp;&nbsp;-&nbsp;&nbsp;
                        $prev_link
                        $next_link
                        <strong>{$lang_editpics_php['n_of_pic_to_disp']}</strong>
                        <select onChange="if(this.options[this.selectedIndex].value) window.location.href='{$CPG_PHP_SELF}?album=$album_id$mode&amp;start=$start&amp;count='+this.options[this.selectedIndex].value;"  name="count" class="listbox">
                                <option value="25">25</option>
                                <option value="50" $s50>50</option>
                                <option value="75" $s75>75</option>
                                <option value="100" $s100>100</option>
                        </select>
EOT;
if (UPLOAD_APPROVAL_MODE!=1) {
    echo <<<EOT
                        &nbsp;&nbsp;-&nbsp;&nbsp;<a href="modifyalb.php?album=$album_id" class="admin_menu">{$icon_array['album_properties']}{$lang_editpics_php['album_properties']}</a>&nbsp;&nbsp;-&nbsp;&nbsp;
                        <a href="index.php$cat_l" class="admin_menu">{$icon_array['category']}{$lang_editpics_php['parent_category']}</a>&nbsp;&nbsp;-&nbsp;&nbsp;
                        <a href="thumbnails.php?album=$album_id" class="admin_menu">{$icon_array['thumbnail_view']}{$lang_editpics_php['thumbnail_view']}</a>
EOT;
}
echo <<<EOT
                </td>
        </tr>
EOT;

// The approve all checkbox is shown only if the user is admin or moderator.
if (GALLERY_ADMIN_MODE || MODERATOR_MODE) {
    $approve_all_html = <<<EOT
                          <td class="tableh2" width="40" valign="top">
                                  <input type="checkbox" name="approveAll" onclick="selectAll(this,'approved');" class="checkbox" id="approveAll" title="{$lang_editpics_php['approve_all']}" /><label for="approveAll" class="clickable_option">{$icon_array['file_approve_all']}</label>
                          </td>
EOT;
}

 
echo <<<EOT
        <tr>
            <td colspan="3" align="center">
                <table border="0" cellspacing="0" cellpadding="0" width="100%">
                    <tr>
                        <td class="tableh2" align="right">
                            {$lang_editpics_php['select_unselect']}:
                        </td>
                        <td class="tableh2" width="40" valign="top">
                            <input type="checkbox" name="deleteAll" onclick="selectAll(this,'delete');" class="checkbox" id="deleteAll" title="{$lang_editpics_php['del_all']}" /><label for="deleteAll" class="clickable_option">{$icon_array['delete_all']}</label>
                        </td>
                        $approve_all_html
                        <td class="tableh2" width="70">
                            <input type="checkbox" name="reset_vcountAll" onclick="selectAll(this,'reset_vcount');" class="checkbox" id="reset_vcountAll" title="{$lang_editpics_php['reset_all_view_count']}" /><label for="reset_vcountAll" class="clickable_option">{$icon_array['reset_views_all']}</label>
                        </td>
                        <td class="tableh2" width="70">
                            <input type="checkbox" name="reset_votesAll" onclick="selectAll(this,'reset_votes');" class="checkbox" id="reset_votesAll" title="{$lang_editpics_php['reset_all_votes']}" /><label for="reset_votesAll" class="clickable_option"><img src="images/rating.gif" border="0" width="16" height="16" alt="" title="{$lang_editpics_php['reset_all_votes']}" /></label>
                        </td>
                        <td class="tableh2" width="40">
                            <input type="checkbox" name="del_commentsAll" onclick="selectAll(this,'del_comments');" class="checkbox" id="del_commentsAll" title="{$lang_editpics_php['del_all_comm']}" /><label for="del_commentsAll" class="clickable_option">{$icon_array['comment_delete_all']}</label>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
EOT;

while ($CURRENT_PIC = mysql_fetch_array($result)) {

    if (GALLERY_ADMIN_MODE && $CURRENT_PIC['owner_id'] != USER_ID) {
        get_user_albums($CURRENT_PIC['owner_id']);
    } else {
        get_user_albums();
    }
    // wrap the actual block into another table
    print <<< EOT

        <!-- individual file start -->

EOT;
    create_form($data);
    print <<< EOT

        <!-- individual file end -->

EOT;
    flush();
} // while
mysql_free_result($result);

$submit_icon = cpg_fetch_icon('ok', 0);
echo <<<EOT
        <tr>
                <td colspan="3" align="center" class="tablef">
                        <button type="submit" class="button" name="go" value="{$lang_common['apply_changes']}">{$submit_icon}{$lang_common['apply_changes']}</button>
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
