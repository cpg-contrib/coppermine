<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2007 Coppermine Dev Team
  v1.1 originally written by Gregory DEMAR

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation; either version 2 of the License, or
  (at your option) any later version.
  ********************************************
  Coppermine version: 1.5.0
  $HeadURL$
  $Revision$
  $LastChangedBy$
  $Date$
**********************************************/

define('IN_COPPERMINE', true);
define('DISPLAYIMAGE_PHP', true);
define('INDEX_PHP', true);
//define('SMILIES_PHP', true);

require('include/init.inc.php');

if (!USER_ID && $CONFIG['allow_unlogged_access'] == 0) {
    $redirect = $redirect . "login.php";
    header("Location: $redirect");
    exit();
}

if ($CONFIG['enable_smilies']) include("include/smilies.inc.php");

$breadcrumb = '';
$breadcrumb_text = '';
$cat_data = array();

/**
 * Clean up GPC and other Globals here
 */
$CLEAN['pos'] = isset($_GET['pos']) ? (int)$_GET['pos'] : 0;
$CLEAN['pid'] = isset($_GET['pid']) ? (int)$_GET['pid'] : 0;
$CLEAN['cat'] = isset($_GET['cat']) ? (int)$_GET['cat'] : 0;
$CLEAN['album'] = isset($_GET['album']) ? $_GET['album'] : '';

if (isset($_GET['fullsize'])) {
  $CLEAN['fullsize'] =  $_GET['fullsize'];
}

if (isset($_GET['slideshow'])) {
  $CLEAN['slideshow'] = $_GET['slideshow'];
}

//END CLEANUP

if($CONFIG['read_exif_data'] ){
        include("include/exif_php.inc.php");
}
if($CONFIG['read_iptc_data'] ){
        include("include/iptc.inc.php");
}


/**
 * Local functions definition
 */

# Sanitize the data - to fix the XSS vulnerability - Aditya
function sanitize_data(&$value, $key)
{
        if (is_array($value)) {
                array_walk($value, 'sanitize_data');
        } else {
                # sanitize against sql/html injection; trim any nongraphical non-ASCII character:
                $value = trim(htmlentities(strip_tags(trim($value,"\x7f..\xff\x0..\x1f")),ENT_QUOTES));
        }
}
function html_picture_menu()
{
    global $lang_display_image_php, $CURRENT_PIC_DATA, $CURRENT_ALBUM_DATA, $CONFIG;

    $mime_content = cpg_get_type($CURRENT_PIC_DATA['filename']);
    $picmenu = '';

  if (false) { //(!($mime_content['content']=='image')) {
    $picmenu = <<<EOT
     <a href="#" onclick="return MM_openBrWindow('setplayer.php?={$mime_content['extension']}','Set_Player','scrollbars=no,toolbar=no,status=no,resizable=no')" class="admin_menu" >{$lang_display_image_php['set_player']}</a>
EOT;
  }

  if ((USER_ADMIN_MODE && $CURRENT_ALBUM_DATA['category'] == FIRST_USER_CAT + USER_ID) || ($CONFIG['users_can_edit_pics'] && $CURRENT_PIC_DATA['owner_id'] == USER_ID && USER_ID != 0) || GALLERY_ADMIN_MODE) {
    $picmenu .= <<<EOT
     <a href="javascript:;" onclick="return MM_openBrWindow('picEditor.php?id={$CURRENT_PIC_DATA['pid']}','Crop_Picture','scrollbars=yes,toolbar=no,status=yes,resizable=yes')" class="admin_menu" >{$lang_display_image_php['crop_pic']}</a> <a href="editOnePic.php?id={$CURRENT_PIC_DATA['pid']}&amp;what=picture"  class="admin_menu">{$lang_display_image_php['edit_pic']}</a> <a href="delete.php?id={$CURRENT_PIC_DATA['pid']}&amp;what=picture"  class="admin_menu" onclick="return confirm('{$lang_display_image_php['confirm_del']}'); return false; ">{$lang_display_image_php['del_pic']}</a>
EOT;
  }

  return $picmenu;
}

// Display picture information
function html_picinfo()
{
    global $CONFIG, $CURRENT_PIC_DATA, $CURRENT_ALBUM_DATA, $THEME_DIR, $FAVPICS, $REFERER;
    global $album, $lang_picinfo, $lang_display_image_php, $lang_byte_units, $lang_common, $lastup_date_fmt;

    if ($CURRENT_PIC_DATA['owner_id'] && $CURRENT_PIC_DATA['owner_name']) {
        $owner_link = '<a href ="profile.php?uid=' . $CURRENT_PIC_DATA['owner_id'] . '">' . $CURRENT_PIC_DATA['owner_name'] . '</a> ';
    } else {
        $owner_link = '';
    }

    if (GALLERY_ADMIN_MODE && $CURRENT_PIC_DATA['pic_raw_ip']) {
        if ($CURRENT_PIC_DATA['pic_hdr_ip']) {
            $ipinfo = ' (' . $CURRENT_PIC_DATA['pic_hdr_ip'] . '[' . $CURRENT_PIC_DATA['pic_raw_ip'] . ']) / ';
        } else {
            $ipinfo = ' (' . $CURRENT_PIC_DATA['pic_raw_ip'] . ') / ';
        }
    } else {
        if ($owner_link) {
            $ipinfo = '/ ';
        } else {
            $ipinfo = '';
        }
    }

    $info[$lang_common['filename']] = htmlspecialchars($CURRENT_PIC_DATA['filename']);
    $info[$lang_picinfo['Album name']] = '<span class="alblink">' . $owner_link . $ipinfo . '<a href="thumbnails.php?album=' . $CURRENT_PIC_DATA['aid'] . '">' . $CURRENT_ALBUM_DATA['title'] . '</a></span>';

    if ($CURRENT_PIC_DATA['votes'] > 0) {
        if (defined('THEME_HAS_RATING_GRAPHICS')) {
            $prefix = $THEME_DIR;
        } else {
            $prefix = '';
        }
        if (GALLERY_ADMIN_MODE) {
          $width = 800;
          $height = 700;
        } else {
          $width = 400;
          $height = 250;
        }

        if ($CONFIG['vote_details'] == 1) {
            $detailsLink = <<< EOT
            <div id="votedetailsunhidetoggle" style="display:none">&nbsp;(<a href="javascript:;" onclick="voteDetailsDisplay();">{$lang_picinfo['show_details']}</a>)</div>
            <div id="votedetailshidetoggle" style="display:none">&nbsp;(<a href="javascript:;" onclick="voteDetailsDisplay();">{$lang_picinfo['hide_details']}</a>)</div>
            <iframe src="stat_details.?type=blank" width="100%" height="0" name="votedetails" id="votedetails" frameborder="0" style="display:none;border;none;"></iframe>
            <script type="text/javascript">
                addonload("show_section('votedetailsunhidetoggle')");
                function voteDetailsDisplay() {
                    show_section('votedetailsunhidetoggle');
                    show_section('votedetailshidetoggle');
                    show_section('votedetails');
                    document.getElementById('votedetails').height = 800;
                    top.frames.votedetails.document.location.href = "stat_details.php?type=vote&pid={$CURRENT_PIC_DATA['pid']}&sort=sdate&dir=&sdate=1&ip=1&rating=1&referer=0&browser=0&os=0&uid=1";
                }
            </script>
EOT;
        }
        $info[sprintf($lang_picinfo['Rating'], $CURRENT_PIC_DATA['votes'])] = '<img src="' . $prefix . 'images/rating' . round($CURRENT_PIC_DATA['pic_rating'] / 2000) . '.gif" align="left" alt="" />'.$detailsLink;
    }

    if ($CURRENT_PIC_DATA['keywords'] != "") {
        $info[$lang_common['keywords']] = '<span class="alblink">' . preg_replace("/(\S+)/", "<a href=\"thumbnails.php?album=search&amp;search=\\1\">\\1</a>" , $CURRENT_PIC_DATA['keywords']) . '</span>';
    }

    for ($i = 1; $i <= 4; $i++) {
        if ($CONFIG['user_field' . $i . '_name']) {
            if ($CURRENT_PIC_DATA['user' . $i] != "") {
                $info[$CONFIG['user_field' . $i . '_name']] = make_clickable($CURRENT_PIC_DATA['user' . $i]);
            }
        }
    }

    $info[$lang_common['filesize']] = ($CURRENT_PIC_DATA['filesize'] > 10240 ? ($CURRENT_PIC_DATA['filesize'] >> 10) . '&nbsp;' . $lang_byte_units[1] : $CURRENT_PIC_DATA['filesize'] . '&nbsp;' . $lang_byte_units[0]);
    $info[$lang_common['filesize']] = '<span dir="ltr">' . $info[$lang_common['filesize']] . '</span>';
    $info[$lang_picinfo['Date Added']] = localised_date($CURRENT_PIC_DATA['ctime'],$lastup_date_fmt);
    $info[$lang_picinfo['Dimensions']] = sprintf($lang_display_image_php['size'], $CURRENT_PIC_DATA['pwidth'], $CURRENT_PIC_DATA['pheight']);
    if ($CURRENT_PIC_DATA['hits'] && $CONFIG['hit_details'] && GALLERY_ADMIN_MODE) {
            $detailsLink = <<< EOT
            <div id="hitdetailsunhidetoggle" style="display:none">&nbsp;(<a href="javascript:;" onclick="hitDetailsDisplay();">{$lang_picinfo['show_details']}</a>)</div>
            <div id="hitdetailshidetoggle" style="display:none">&nbsp;(<a href="javascript:;" onclick="hitDetailsDisplay();">{$lang_picinfo['hide_details']}</a>)</div>
            <iframe src="stat_details.?type=blank" width="100%" height="0" name="hitdetails" id="hitdetails" frameborder="0" style="display:none;border;none;"></iframe>
            <script type="text/javascript">
                addonload("show_section('hitdetailsunhidetoggle')");
                function hitDetailsDisplay() {
                    show_section('hitdetailsunhidetoggle');
                    show_section('hitdetailshidetoggle');
                    show_section('hitdetails');
                    document.getElementById('hitdetails').height = 800;
                    top.frames.hitdetails.document.location.href = "stat_details.php?type=hits&pid={$CURRENT_PIC_DATA['pid']}&sort=sdate&dir=&sdate=1&ip=1&search_phrase=0&referer=0&browser=1&os=1";
                }
            </script>
EOT;
        }
    $info[$lang_picinfo['Displayed']] = sprintf($lang_display_image_php['views'], $CURRENT_PIC_DATA['hits']);
    $info[$lang_picinfo['Displayed']] .= $detailsLink;

    $path_to_pic = $CONFIG['fullpath'] . $CURRENT_PIC_DATA['filepath'] . $CURRENT_PIC_DATA['filename'];
    $path_to_orig_pic = $CONFIG['fullpath'] . $CURRENT_PIC_DATA['filepath'] . $CONFIG['orig_pfx'] . $CURRENT_PIC_DATA['filename'];

    if ($CONFIG['read_exif_data']) $exif = exif_parse_file($path_to_pic);

    if (isset($exif) && is_array($exif)) {
                array_walk($exif, 'sanitize_data');
        $info = array_merge($info,$exif);
    }

    // Read the iptc data
    if ($CONFIG['read_iptc_data']) {
      // Read the iptc data from original pic (if watermarked)
      $iptc = file_exists($path_to_orig_pic) ? get_IPTC($path_to_orig_pic) : get_IPTC($path_to_pic);
    }

    if (isset($iptc) && is_array($iptc)) {
                array_walk($iptc, 'sanitize_data');
        if (isset($iptc['Title'])) $info[$lang_picinfo['iptcTitle']] = $iptc['Title'];
        if (isset($iptc['Copyright'])) $info[$lang_picinfo['iptcCopyright']] = $iptc['Copyright'];
        if (!empty($iptc['Keywords'])) $info[$lang_picinfo['iptcKeywords']] = implode(' ',$iptc['Keywords']);
        if (isset($iptc['Category'])) $info[$lang_picinfo['iptcCategory']] = $iptc['Category'];
        if (!empty($iptc['SubCategories'])) $info[$lang_picinfo['iptcSubCategories']] = implode(' ',$iptc['SubCategories']);
    }
    // Create the absolute URL for display in info
    $info[$lang_picinfo['URL']] = '<a href="' . $CONFIG["ecards_more_pic_target"] . (substr($CONFIG["ecards_more_pic_target"], -1) == '/' ? '' : '/') .basename($_SERVER['PHP_SELF']) . "?pid=$CURRENT_PIC_DATA[pid]" . '" >' . $CONFIG["ecards_more_pic_target"] . (substr($CONFIG["ecards_more_pic_target"], -1) == '/' ? '' : '/') . basename($_SERVER['PHP_SELF']) . "?pid=$CURRENT_PIC_DATA[pid]" . '</a>';
    // with subdomains the variable is $_SERVER["SERVER_NAME"] does not return the right value instead of using a new config variable I reused $CONFIG["ecards_more_pic_target"] no trailing slash in the configure
    // Create the add to fav link
        $ref = $REFERER ? "&amp;ref=$REFERER" : '';
    if (!in_array($CURRENT_PIC_DATA['pid'], $FAVPICS)) {
        $info[$lang_picinfo['addFavPhrase']] = "<a href=\"addfav.php?pid=" . $CURRENT_PIC_DATA['pid'] . $ref . "\" >" . $lang_picinfo['addFav'] . '</a>';
    } else {
        $info[$lang_picinfo['addFavPhrase']] = "<a href=\"addfav.php?pid=" . $CURRENT_PIC_DATA['pid']  . $ref . "\" >" . $lang_picinfo['remFav'] . '</a>';
    }

    /**
     * Filter file information
     */
    $info = CPGPluginAPI::filter('file_info',$info);

    return theme_html_picinfo($info);
}

function get_subcat_data($parent, $level)
{
    global $CONFIG, $ALBUM_SET_ARRAY;

    $result = cpg_db_query("SELECT cid, name, description FROM {$CONFIG['TABLE_CATEGORIES']} WHERE parent = '$parent'");
    if (mysql_num_rows($result) > 0) {
        $rowset = cpg_db_fetch_rowset($result);
        foreach ($rowset as $subcat) {
            $result = cpg_db_query("SELECT aid FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = {$subcat['cid']}");
            $album_count = mysql_num_rows($result);
            while ($row = mysql_fetch_array($result)) {
                $ALBUM_SET_ARRAY[] = $row['aid'];
            } // while
        }
        if ($level > 1) get_subcat_data($subcat['cid'], $level -1);
    }
}

/**
 * Main code
 */

$pos = $CLEAN['pos'];

/**
 * Hack added by tarique to prevent incorrect picture being seen on last view or last uploaded
 */

$pid = $CLEAN['pid'];

$cat = $CLEAN['cat'];
$album = $CLEAN['album'];
// Build the album set if required
/*
//disabled by donnoman
if (!is_numeric($album) && $cat) { // Meta albums, we need to restrict the albums to the current category
    if ($cat < 0) {
        $ALBUM_SET .= 'AND aid IN (' . (- $cat) . ') ';
    } else {
        $ALBUM_SET_ARRAY = array();
        if ($cat == USER_GAL_CAT)
            $where = 'category > ' . FIRST_USER_CAT;
        else
            $where = "category = '$cat'";

        $result = cpg_db_query("SELECT aid FROM {$CONFIG['TABLE_ALBUMS']} WHERE $where");
        while ($row = mysql_fetch_array($result)) {
            $ALBUM_SET_ARRAY[] = $row['aid'];
        } // while
        get_subcat_data($cat, $CONFIG['subcat_level']);
        // Treat the album set
        if (count($ALBUM_SET_ARRAY)) {
            $set = '';
            foreach ($ALBUM_SET_ARRAY as $album_id) $set .= ($set == '') ? $album_id : ',' . $album_id;
            $ALBUM_SET .= "AND aid IN ($set) ";
        }
    }
}
//disabled by donnoman
*/
//get_meta_album_set in functions.inc.php will populate the $ALBUM_SET instead; matches $META_ALBUM_SET.
get_meta_album_set($cat,$ALBUM_SET);
$META_ALBUM_SET = $ALBUM_SET; //displayimage uses $ALBUM_SET but get_pic_data in functions now uses $META_ALBUM_SET

//attempt to fix topn images for keyworded albums
if ($cat < 0) {
    $result = cpg_db_query("SELECT category, title, aid, keyword, description, alb_password_hint FROM {$CONFIG['TABLE_ALBUMS']} WHERE aid='" . (- $cat) . "'");
    if (mysql_num_rows($result) > 0) {
        $CURRENT_ALBUM_DATA = mysql_fetch_array($result);
        $CURRENT_ALBUM_KEYWORD = $CURRENT_ALBUM_DATA['keyword'];
    }
}
// Retrieve data for the current picture
######## Commented by Abbas for new URL ###########
// Can be removed after testing
/*
if ($pos < 0 || $pid > 0) {
    $pid = ($pos < 0) ? -$pos : $pid;
    $result = cpg_db_query("SELECT aid from {$CONFIG['TABLE_PICTURES']} WHERE pid='$pid' $ALBUM_SET LIMIT 1");
    if (mysql_num_rows($result) == 0) cpg_die(ERROR, $lang_errors['non_exist_ap'], __FILE__, __LINE__);
    $row = mysql_fetch_array($result);
    $album = $row['aid'];
    $pic_data = get_pic_data($album, $pic_count, $album_name, -1, -1, false);
    for($pos = 0; $pic_data[$pos]['pid'] != $pid && $pos < $pic_count; $pos++);
    $pic_data = get_pic_data($album, $pic_count, $album_name, $pos, 1, false);
    $CURRENT_PIC_DATA = $pic_data[0];
*/
###################################################

if ($pos < 0 || $pid > 0) {
    ########## Modified by Abbas for new URL feature #########
    $pid = ($pos < 0) ? -$pos : $pid;
    if (!$album) {
      $result = cpg_db_query("SELECT aid from {$CONFIG['TABLE_PICTURES']} WHERE pid='$pid' $ALBUM_SET LIMIT 1");
      if (mysql_num_rows($result) == 0) cpg_die(ERROR, $lang_errors['non_exist_ap'], __FILE__, __LINE__);
      $row = mysql_fetch_array($result);
    }
    $album = (!$album) ? $row['aid'] : $album;
    $pic_data = get_pic_data($album, $pic_count, $album_name, -1, -1, false);
    for($pos = 0; $pic_data[$pos]['pid'] != $pid && $pos < $pic_count; $pos++);
    reset($pic_data);
    $CURRENT_PIC_DATA = $pic_data[$pos];
    reset($pic_data);
    ########################################################
} elseif (isset($CLEAN['pos'])) {
    $pic_data = get_pic_data($album, $pic_count, $album_name, $pos, 1, false);
    if ($pic_count == 0) {
        cpg_die(INFORMATION, $lang_errors['no_img_to_display'], __FILE__, __LINE__);
    } elseif (count($pic_data) == 0 && $pos >= $pic_count) {
        $pos = $pic_count - 1;
        $human_pos = $pos + 1;
        $pic_data = get_pic_data($album, $pic_count, $album_name, $pos, 1, false);
    }
    $CURRENT_PIC_DATA = $pic_data[0];
}

if (!count($CURRENT_PIC_DATA)) {
  cpg_die(ERROR, $lang_errors['non_exist_ap'], __FILE__, __LINE__);
}
######################################

// Retrieve data for the current album
if (isset($CURRENT_PIC_DATA)) {
    $ref_album = (is_numeric($album) ? $album : $CURRENT_PIC_DATA['aid']);
    $result = cpg_db_query("SELECT title, comments, votes, category, aid FROM {$CONFIG['TABLE_ALBUMS']} WHERE aid='{$ref_album}' LIMIT 1");
    if (!mysql_num_rows($result)) cpg_die(CRITICAL_ERROR, sprintf($lang_errors['pic_in_invalid_album'], $CURRENT_PIC_DATA['aid']), __FILE__, __LINE__);
    $CURRENT_ALBUM_DATA = mysql_fetch_array($result);

    if (is_numeric($album)) {
        $cat = - $album;
        $actual_cat = $CURRENT_ALBUM_DATA['category'];
        breadcrumb($actual_cat, $breadcrumb, $breadcrumb_text);
        $cat = - $album;
    } else {
        $actual_cat = $CURRENT_ALBUM_DATA['category'];
        breadcrumb($actual_cat, $breadcrumb, $breadcrumb_text);
    }
}

if (isset($CLEAN['fullsize'])) {
    theme_display_fullsize_pic();
    ob_end_flush();
} elseif (isset($CLEAN['slideshow'])) {
    theme_slideshow();
    ob_end_flush();
} else {
    //if (!isset($_GET['pos'])) cpg_die(ERROR, $lang_errors['non_exist_ap'], __FILE__, __LINE__); //Commented by Abbas
    if (!$CLEAN['pos'] && !$CLEAN['pid']) cpg_die(ERROR, $lang_errors['non_exist_ap'], __FILE__, __LINE__);

    $picture_title = $CURRENT_PIC_DATA['title'] ? $CURRENT_PIC_DATA['title'] : strtr(preg_replace("/(.+)\..*?\Z/", "\\1", htmlspecialchars($CURRENT_PIC_DATA['filename'])), "_", " ");

    $nav_menu = theme_html_img_nav_menu();
    $picture = theme_html_picture();
    $votes = theme_html_rating_box();
    $pic_info = html_picinfo();
    $comments = theme_html_comments($CURRENT_PIC_DATA['pid']);
    if ($CURRENT_PIC_DATA['keywords']) {
        $meta_keywords = "<meta name=\"keywords\" content=\"".$CURRENT_PIC_DATA['keywords']."\"/>";
    }
    //$meta_nav .= "<link rel=\"alternate\" type=\"text/xml\" title=\"RSS feed\" href=\"rss.php\" />
    // ";
    $meta_keywords .= $meta_nav;
    if($_GET['album'] == 'lastup' || $_GET['album'] == 'lastcom' || $_GET['album'] == 'topn' || $_GET['album'] == 'toprated' || $_GET['album'] == 'favpics' || $_GET['album'] == 'random') {
        $meta_keywords .= '<meta name="robots" content="noindex, nofollow" />';
    }
    pageheader($album_name . '/' . $picture_title, $meta_keywords, false);
    // Display Breadcrumbs
    if ($breadcrumb && !(strpos($CONFIG['main_page_layout'],"breadcrumb")===false)) {
        theme_display_breadcrumb($breadcrumb, $cat_data);
    }
    // Display Filmstrip if the album is not search
    if ($album != 'search') {
        $film_strip = display_film_strip($album, (isset($cat) ? $cat : 0), $pos, true);
    }
    CPGPluginAPI::filter('post_breadcrumb',null);
    theme_display_image($nav_menu, $picture, $votes, $pic_info, $comments, $film_strip);
    pagefooter();
    ob_end_flush();
}

?>