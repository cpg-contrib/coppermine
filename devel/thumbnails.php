<?php 
// ------------------------------------------------------------------------- //
// Coppermine Photo Gallery 1.4.0                                            //
// ------------------------------------------------------------------------- //
// Copyright (C) 2002-2004 Gregory DEMAR                                     //
// http://www.chezgreg.net/coppermine/                                       //
// ------------------------------------------------------------------------- //
// Updated by the Coppermine Dev Team                                        //
// see /docs/credits.html for details                                        //
// ------------------------------------------------------------------------- //
// This program is free software; you can redistribute it and/or modify      //
// it under the terms of the GNU General Public License as published by      //
// the Free Software Foundation; either version 2 of the License, or         //
// (at your option) any later version.                                       //
// ------------------------------------------------------------------------- //
// $Id$
// ------------------------------------------------------------------------- //
/**
 * Coppermine Photo Gallery 1.4.0 thumbnails.php
 * 
 * This file generates the data of thumbnails for all the albums and metalbums,
 * the actual display is handled by the display_thumbnails and then in-turn
 * theme_display_thumbnail function
 * 
 * @copyright 2002-2004 Gregory DEMAR, Coppermine Dev Team
 * @license http://opensource.org/licenses/gpl-license.php GNU General Public License V2
 * @package Coppermine
 * @version $Id$
 */

/**
 * 
 * @ignore 
 */
define('IN_COPPERMINE', true);

define('THUMBNAILS_PHP', true);

/**
 * 
 * @ignore 
 */
define('INDEX_PHP', true);

require('include/init.inc.php');

if ($CONFIG['enable_smilies']) include("include/smilies.inc.php");

function thumb_get_subcat_data($parent, &$album_set_array, $level)
{
    global $CONFIG;

    $result = cpg_db_query("SELECT cid, name, description FROM {$CONFIG['TABLE_CATEGORIES']} WHERE parent = '$parent'");
    if (mysql_num_rows($result) > 0) {
        $rowset = cpg_db_fetch_rowset($result);
        foreach ($rowset as $subcat) {
            $result = cpg_db_query("SELECT aid FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = {$subcat['cid']}");
            $album_count = mysql_num_rows($result);
            while ($row = mysql_fetch_array($result)) {
                $album_set_array[] = $row['aid'];
            } // while
        } 
        if ($level > 1) thumb_get_subcat_data($subcat['cid'], $album_set_array, $level -1);
    } 
} 

/**
 * Main code
 */

if (isset($_GET['sort'])) $USER['sort'] = $_GET['sort'];
if (isset($_GET['cat'])) $cat = (int)$_GET['cat'];
if (isset($_GET['uid'])) $USER['uid'] = (int)$_GET['uid'];

if (isset($_GET['search'])) {
    $USER['search'] = $_GET['search'];
    if (isset($_GET['type']) && $_GET['type'] == 'full') {
        $USER['search'] = '###' . $USER['search'];
    } 
} 

$album = $_GET['album'];

if (isset($_GET['page'])) {
    $page = max((int)$_GET['page'], 1);
} else {
    $page = 1;
} 

$breadcrumb = '';
$breadcrumb_text = '';
$cat_data = array();
$lang_meta_album_names['lastupby'] = $lang_meta_album_names['lastup'];
$lang_meta_album_names['lastcomby'] = $lang_meta_album_names['lastcom'];

if (is_numeric($album)) {
    $result = cpg_db_query("SELECT category, title, aid, keyword, description, alb_password_hint FROM {$CONFIG['TABLE_ALBUMS']} WHERE aid='$album'");
    if (mysql_num_rows($result) > 0) {
        $CURRENT_ALBUM_DATA = mysql_fetch_array($result);
        $actual_cat = $CURRENT_ALBUM_DATA['category'];
        $CURRENT_ALBUM_KEYWORD = $CURRENT_ALBUM_DATA['keyword'];
        breadcrumb($actual_cat, $breadcrumb, $breadcrumb_text);
        $cat = - $album;
    } 
} elseif (isset($cat) && $cat) { // Meta albums, we need to restrict the albums to the current category
    if ($cat < 0) {
        $result = cpg_db_query("SELECT category, title, aid, keyword, description, alb_password_hint FROM {$CONFIG['TABLE_ALBUMS']} WHERE aid='" . (- $cat) . "'");
        if (mysql_num_rows($result) > 0) {
            $CURRENT_ALBUM_DATA = mysql_fetch_array($result);
            $actual_cat = $CURRENT_ALBUM_DATA['category'];
            $CURRENT_ALBUM_KEYWORD = $CURRENT_ALBUM_DATA['keyword'];
        } 

        $ALBUM_SET = 'AND aid IN (' . (- $cat) . ') ' . $ALBUM_SET;
        breadcrumb($actual_cat, $breadcrumb, $breadcrumb_text);
        $CURRENT_CAT_NAME = $CURRENT_ALBUM_DATA['title'];
        $CURRENT_ALBUM_KEYWORD = $CURRENT_ALBUM_DATA['keyword'];
    } else {
        $album_set_array = array();
        if ($cat == USER_GAL_CAT)
            $where = 'category > ' . FIRST_USER_CAT;
        else
            $where = "category = '$cat'";

        $result = cpg_db_query("SELECT aid FROM {$CONFIG['TABLE_ALBUMS']} WHERE $where");
        while ($row = mysql_fetch_array($result)) {
            $album_set_array[] = $row['aid'];
        } // while
        if ($cat >= FIRST_USER_CAT) {
            $user_name = get_username($cat - FIRST_USER_CAT);
            $CURRENT_CAT_NAME = sprintf($lang_list_categories['xx_s_gallery'], $user_name);
        } else {
            $result = cpg_db_query("SELECT name FROM {$CONFIG['TABLE_CATEGORIES']} WHERE cid = '$cat'");
            if (mysql_num_rows($result) == 0) cpg_die(CRITICAL_ERROR, $lang_errors['non_exist_cat'], __FILE__, __LINE__);
            $row = mysql_fetch_array($result);
            $CURRENT_CAT_NAME = $row['name'];
        } 
        thumb_get_subcat_data($cat, $album_set_array, $CONFIG['subcat_level']); 
        // Treat the album set
        if (count($album_set_array)) {
            $set = '';
            foreach ($album_set_array as $album_id) $set .= ($set == '') ? $album_id : ',' . $album_id;
            $ALBUM_SET .= "AND aid IN ($set) ";
        } 

        breadcrumb($cat, $breadcrumb, $breadcrumb_text);
    } 
} 

pageheader(isset($CURRENT_ALBUM_DATA) ? $CURRENT_ALBUM_DATA['title'] : $lang_meta_album_names[$album]);
if ($breadcrumb) {
    if (!(strpos($CONFIG['main_page_layout'], "breadcrumb") === false)) {
        theme_display_breadcrumb($breadcrumb, $cat_data);
    } 
    theme_display_cat_list($breadcrumb, $cat_data, '');
} 

/**
 * Function to draw the password box if the album is password protected
 */
function form_albpw()
{
    global $lang_thumb_view, $CURRENT_ALBUM_DATA;
    $login_falied =
    starttable('-1', $lang_thumb_view['enter_alb_pass'], 2);
    if (isset($_POST['validate_album'])) {
        $login_failed = "<tr><td class='tableh2' colspan='2' align='center'>
                               <font color='red' size='1'>{$lang_thumb_view['invalid_pass']}</font></td></tr>
                                         ";
    } 
    if (!empty($CURRENT_ALBUM_DATA['alb_password_hint'])) {
        echo <<<EOT
                  <tr>
                    <td colspan="2" align="center" class="tableb">{$CURRENT_ALBUM_DATA['alb_password_hint']}</td>
                  </tr>
EOT;
    } 
    echo <<<EOT
                        $login_failed
                        <tr>
              <form method="post" action="">
              <input type="hidden" name="validate_album" value="validate_album"/>
              <td class="tableb" width="40%">{$lang_thumb_view['pass']}: </td>
              <td class="tableb" width="60%"><input type="password" class="textinput" name="password" /></td>
             </tr>
             <tr>
              <td class="tablef" colspan="2" align="center"><input type="submit" class="button" name="submit" value={$lang_thumb_view['submit']} />
              </form>
            </tr>
EOT;
    endtable();
} 

$valid = false; //flag to test whether the album is validated.
if ($CONFIG['allow_private_albums'] == 0 || !in_array($album, $FORBIDDEN_SET_DATA)) {
    $valid = true;
} elseif (isset($_POST['validate_album'])) {
    $password = $_POST['password'];
    $sql = "SELECT aid FROM " . $CONFIG['TABLE_ALBUMS'] . " WHERE alb_password='$password' AND aid='$album'";
    $result = cpg_db_query($sql);
    if (mysql_num_rows($result)) {
        if (!empty($_COOKIE[$CONFIG['cookie_name'] . '_albpw'])) {
            $albpw = unserialize($_COOKIE[$CONFIG['cookie_name'] . '_albpw']);
        } 
        $albpw[$album] = md5($password);
        $alb_cookie_str = serialize($albpw);
        setcookie($CONFIG['cookie_name'] . "_albpw", $alb_cookie_str);
        get_private_album_set($album);
        $valid = true;
    } else {
        // Invalid password
        $valid = false;
    } 
} else {
    $sql = "SELECT aid FROM " . $CONFIG['TABLE_ALBUMS'] . " WHERE aid='$album' AND alb_password != ''";
    $result = cpg_db_query($sql);
    if (mysql_num_rows($result)) {
        // This album has a password.
        // Check whether the cookie is set for the current albums password
        if (!empty($_COOKIE[$CONFIG['cookie_name'] . '_albpw'])) {
            $alb_pw = unserialize($_COOKIE[$CONFIG['cookie_name'] . '_albpw']); 
            // Check whether the alubm id in the cookie is same as that of the album id send by get
            if (isset($alb_pw[$album])) {
                $sql = "SELECT aid FROM " . $CONFIG['TABLE_ALBUMS'] . " WHERE MD5(alb_password)='{$alb_pw[$album]}' AND aid='{$album}'";
                $result = cpg_db_query($sql);
                if (mysql_num_rows($result)) {
                    $valid = true; //The album password is correct. Show the album details.
                    get_private_album_set();
                } 
            } 
        } 
    } else {
        // Album with no password. Might be a private or normal album. Just set valid as true.
        $valid = true;
    } 
} 
if (!$valid) {
    form_albpw();
} else {
    display_thumbnails($album, (isset($cat) ? $cat : 0), $page, $CONFIG['thumbcols'], $CONFIG['thumbrows'], true);
} 

pagefooter();
ob_end_flush();

?>
