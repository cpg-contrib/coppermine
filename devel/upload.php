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

define('IN_COPPERMINE', true);
define('UPLOAD_PHP', true);

require('include/init.inc.php');

if (!USER_CAN_UPLOAD_PICTURES) {
    cpg_die(ERROR, $lang_errors['perm_denied'], __FILE__, __LINE__);
}
// Type 0 => input
// 1 => file input
// 2 => album list
$captionLabel = $lang_upload_php['description'];
if ($CONFIG['show_bbcode_help']) {$captionLabel .= '<hr />'.$lang_bbcode_help;}
$data = array(
    sprintf($lang_upload_php['max_fsize'], $CONFIG['max_upl_size']),
    array($lang_upload_php['album'], 'album', 2),
    array($lang_upload_php['picture'], 'userpicture', 1),
    array($lang_upload_php['pic_title'], 'title', 0, 255),
    array($captionLabel, 'caption', 3, $CONFIG['max_img_desc_length']),
    array($lang_upload_php['keywords'], 'keywords', 0, 255),
    array($CONFIG['user_field1_name'], 'user1', 0, 255),
    array($CONFIG['user_field2_name'], 'user2', 0, 255),
    array($CONFIG['user_field3_name'], 'user3', 0, 255),
    array($CONFIG['user_field4_name'], 'user4', 0, 255)
    );

function form_label($text)
{
    echo <<<EOT
        <tr>
                <td class="tableh2" colspan="2">
                        <b>$text</b>
                </td>
        </tr>

EOT;
}

function form_input($text, $name, $max_length)
{
    if ($text == '') {
        echo "        <input type=\"hidden\" name=\"$name\" value=\"\">\n";
        return;
    }

    echo <<<EOT
        <tr>
            <td width="40%" class="tableb">
                        $text
        </td>
        <td width="60%" class="tableb" valign="top">
                <input type="text" style="width: 100%" name="$name" maxlength="$max_length" value="" class="textinput">
                </td>
        </tr>

EOT;
}

function form_file_input($text, $name)
{
    global $CONFIG;

    $max_file_size = $CONFIG['max_upl_size'] << 10;

    echo <<<EOT
        <tr>
            <td class="tableb">
                        $text
        </td>
        <td class="tableb" valign="top">
                        <input type="hidden" name="MAX_FILE_SIZE" value="$max_file_size">
                        <input type="file" name="$name" size="40" class="listbox">
                </td>
        </tr>

EOT;
}

function form_alb_list_box($text, $name)
{
//Vodovnik.com modified this code to allow display of Categories besides album names
    global $CONFIG, $HTTP_GET_VARS;
    global $user_albums_list, $public_albums_list;

    $sel_album = isset($HTTP_GET_VARS['album']) ? $HTTP_GET_VARS['album'] : 0;

    echo <<<EOT
    <tr>
        <td class="tableb">
            $text
        </td>
        <td class="tableb" valign="top">
            <select name="$name" class="listbox">

EOT;
    foreach($user_albums_list as $album) {
        $album_id = $album['aid'];

        //$CONFIG['TABLE_ALBUMS']
        $vQuery = "SELECT category FROM " . $CONFIG['TABLE_ALBUMS'] . " WHERE aid='" . $album_id . "'";
        $vRes = mysql_query($vQuery);
        $vRes = mysql_fetch_array($vRes);

        $vQuery = "SELECT name FROM " . $CONFIG['TABLE_CATEGORIES'] . " WHERE cid='" . $vRes['category'] . "'";
        $vRes = mysql_query($vQuery);
        $vRes = mysql_fetch_array($vRes);

        echo '                <option value="' . $album['aid'] . '"' . ($album['aid'] == $sel_album ? ' selected' : '') . '>* ' . $album['title'] . " (" . $vRes["name"] . ")</option>\n";
    }
    foreach($public_albums_list as $album) {
        $album_id = $album['aid'];

        //$CONFIG['TABLE_ALBUMS']
        $vQuery = "SELECT category FROM " . $CONFIG['TABLE_ALBUMS'] . " WHERE aid='" . $album_id . "'";
        $vRes = mysql_query($vQuery);
        $vRes = mysql_fetch_array($vRes);

        $vQuery = "SELECT name FROM " . $CONFIG['TABLE_CATEGORIES'] . " WHERE cid='" . $vRes['category'] . "'";
        $vRes = mysql_query($vQuery);
        $vRes = mysql_fetch_array($vRes);

        echo '                <option value="' . $album['aid'] . '"' . ($album['aid'] == $sel_album ? ' selected' : '') . '>' . '(' . $vRes['name'] . ') ' . $album['title'] . "</option>\n";
    }
    echo <<<EOT
            </select>
        </td>
    </tr>

EOT;
}

function form_textarea($text, $name, $max_length)
{
    global $ALBUM_DATA;

    $value = $ALBUM_DATA[$name];

    echo <<<EOT
        <tr>
                <td class="tableb" valign="top">
                        $text
                </td>
                <td class="tableb" valign="top">
                        <textarea name="$name" rows="5" cols="40" wrap="virtual"  class="textinput" style="width: 100%;" onKeyDown="textCounter(this, $max_length);" onKeyUp="textCounter(this, $max_length);"></textarea>
                </td>
        </tr>
EOT;
}

function create_form(&$data)
{
    foreach($data as $element) {
        if ((is_array($element))) {
            switch ($element[2]) {
                case 0 :
                    form_input($element[0], $element[1], $element[3]);
                    break;
                case 1 :
                    form_file_input($element[0], $element[1]);
                    break;
                case 2 :
                    form_alb_list_box($element[0], $element[1]);
                    break;
                case 3 :
                    form_textarea($element[0], $element[1], $element[3]);
                    break;
                default:
                    cpg_die(ERROR, 'Invalid action for form creation', __FILE__, __LINE__);
            } // switch
        } else {
            form_label($element);
        }
    }
}

if (GALLERY_ADMIN_MODE) {
    $public_albums = mysql_query("SELECT aid, title FROM {$CONFIG['TABLE_ALBUMS']} WHERE category < " . FIRST_USER_CAT . " ORDER BY title");
} else {
    $public_albums = mysql_query("SELECT aid, title FROM {$CONFIG['TABLE_ALBUMS']} WHERE category < " . FIRST_USER_CAT . " AND uploads='YES' ORDER BY title");
}
if (mysql_num_rows($public_albums)) {
    $public_albums_list = db_fetch_rowset($public_albums);
} else {
    $public_albums_list = array();
}

if (USER_ID) {
    $user_albums = mysql_query("SELECT aid, title FROM {$CONFIG['TABLE_ALBUMS']} WHERE category='" . (FIRST_USER_CAT + USER_ID) . "' ORDER BY title");
    if (mysql_num_rows($user_albums)) {
        $user_albums_list = db_fetch_rowset($user_albums);
    } else {
        $user_albums_list = array();
    }
} else {
    $user_albums_list = array();
}

if (!count($public_albums_list) && !count($user_albums_list)) {
    cpg_die (ERROR, $lang_upload_php['err_no_alb_uploadables'], __FILE__, __LINE__);
}

pageheader($lang_upload_php['title']);
starttable("100%", $lang_upload_php['title'], 2);
echo <<<EOT

<script language="JavaScript">
function textCounter(field, maxlimit) {
        if (field.value.length > maxlimit) // if too long...trim it!
        field.value = field.value.substring(0, maxlimit);
}
</script>

<form method="post" action="db_input.php" ENCTYPE="multipart/form-data">
<input type="hidden" name="event" value="picture">

EOT;
create_form($data);
echo <<<EOT
        <tr>
                <td colspan="2" align="center" class="tablef">
                        <input type="submit" value="{$lang_upload_php['title']}" class="button">
                </td>
                </form>
        </tr>

EOT;
endtable();
pagefooter();
ob_end_flush();

?>