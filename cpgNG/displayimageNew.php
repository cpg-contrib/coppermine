<?php
/**
 * dislplayimageNew.php
 *
 * Script to display images.
 *
 * This script displays individual image. It also displays the pic info, filmstrip, comments, 
 * and other related data. 
 *
 * @package cpgNG
 * @author Abbas <abbas@sanisoft.com>
 * @version $Id$
 */
error_reporting(E_ALL);
/**#@+
 * Constant to prevent direct execution of config.inc.php
 */
define('IN_COPPERMINE', true);
define('DISPLAYIMAGE_PHP', true);
define('INDEX_PHP', true);
/**#@-*/

/**
 * Requires initialization file
 */
require('include/init.inc.php');

/**#@+
 * Include all the classes
 */
require_once('classes/cpgAlbumFactory.class.php');
require_once('classes/cpgTemplate.class.php');
require('classes/cpgDisplayImageData.class.php');
/**#@-*/

/**
 * If smilies is enabled then include smilies.inc.php 
 */
if ($CONFIG['enable_smilies']) {
  include("include/smilies.inc.php");
}


if (isset($_GET['aid'])) {
  /**
   * @var Integer 
   * Variable to hold numeric album id
   */
  $aid = (int)$_GET['aid'];
}

if (isset($_GET['pid'])) {
  /**
   * @var Integer 
   * Variable to hold picture id
   */
  $pid = (int)$_GET['pid'];
} else {
  $pid = 0;
}

if (isset($_GET['albumName'])) {
  /**
   * @var String/Integer 
   * Variable to hold albumName/ablbumId
   */
  $album = $_GET['albumName'];
} else {
  cpg_die(CRITICAL_ERROR, $lang_errors["param_missing"], __FILE__, __LINE__);
}
if (isset($_GET['pos'])) {
  /**
   * @var Integer 
   * Variable to hold picture position
   */
  $pos = (int)$_GET['pos'];
} else {
  cpg_die(CRITICAL_ERROR, $lang_errors["param_missing"], __FILE__, __LINE__);
}

/**
 * Create a new album object
 */
$albumData = cpgAlbumFactory::getAlbumObj($album);

/**
 * Create a new template object
 */
$t = new cpgTemplate;

/**
 * Get the breadcrumb data for the current page
 */
$breadcrumb = $albumData->getBreadcrumbData ($album);

/**
 * Get the HTML for the breadcrumb
 */
$breadcrumbHTML = $t->getBreadcrumbHTML($breadcrumb);

/**
 * Create a new cpgDisplayimage object to get the picture details
 */
$imgData = new cpgDisplayImageData;

if (isset($_GET['pos'])) {
    /**
     * Get picture data
     */
    $picData = $imgData->getPicData($album, $album_name, $picCount, $pos, 1, $pid, false);

    /**
     * If total number of pictures comes out to be zero then die
     */
    if ($picCount == 0) {
        cpg_die(INFORMATION, $lang_errors['no_img_to_display'], __FILE__, __LINE__);
    } elseif (count($picData) == 0 && $pos >= $picCount) {
        $pos = $picCount - 1;
        $humanPos = $pos + 1;
        $picData = $imgData->getPicData($album, $album_name, $picCount, $pos, 1, $pid, false);

    } elseif ($pid > 0 && $pos >= $picCount) {
        $pos = $picCount - 1;
        $humanPos = $pos + 1;
    }
}

if (!$picData["pid"]) {
  cpg_die(INFORMATION, $lang_errors['no_img_to_display']);
} elseif ($pid == 0) {
  $pid = $picData["pid"];
}

/**
 * Retrieve data for the current album
 */
if (isset($picData)) {
    $query = "SELECT title, comments, votes, category, aid FROM {$CONFIG['TABLE_ALBUMS']} WHERE aid='{$picData['aid']}' LIMIT 1";

    $result = cpg_db_query($query);
    if (!mysql_num_rows($result)) cpg_die(CRITICAL_ERROR, sprintf($lang_errors['pic_in_invalid_album'], $picData['aid']), __FILE__, __LINE__);
    $CURRENT_ALBUM_DATA = mysql_fetch_array($result);
    mysql_free_result($result);
}

/**
 * If user is admin then show the edit menu
 */
if ((USER_ADMIN_MODE && $CURRENT_ALBUM_DATA['category'] == FIRST_USER_CAT + USER_ID) || GALLERY_ADMIN_MODE) {
  $picData["menu"] = "show";
}

/**
 * Get the Url for the picture
 */
$picUrl = $imgData->__getPicUrl($picData, "normal", false);

/**
 * Get the comment for the picture
 */
$picComments = $imgData->getPicComments($pid);

/**
 * Show the comments box if user is allowed to post comments
 */
if (USER_CAN_POST_COMMENTS && $CURRENT_ALBUM_DATA['comments'] == 'YES') {
  if (USER_ID) {
    $commentBox["userName"] = USER_NAME;
    $commentBox["status"] = "loggedin";
  } else {
    $commentBox["userName"] = isset($USER['name']) ? strtr($USER['name'], $HTML_SUBST) : $lang_display_comments['your_name'];
    $commentBox["status"] = "anon";
  }
  $commentBox["maxComSize"] = $CONFIG["max_com_size"];
  $commentBox["enableSmilies"] = $CONFIG["enable_smilies"];
}

$thumbPage = ceil(($pos + 1) / ($CONFIG['thumbrows'] * $CONFIG['thumbcols']));

/**
 * Check whether the cookie for showing pic info is set and display pic info accordingly
 */
$displayPicInfo = isset($HTTP_COOKIE_VARS['picinfo']) ? $HTTP_COOKIE_VARS['picinfo'] : ($CONFIG['display_pic_info'] ? 'block' : 'none');

/**
 * Get the picture/file information
 */
$picInfo = $imgData->getPicInfo();

/**
 * Get the data required to display the picture/file and insert it in $picData array
 */
$imgData->getPicHtmlData($picData); //$picData is passed by reference so that it can be modified

/**
 * Check whether user can rate pictures and display rating box accordingly
 */
if (!(USER_CAN_RATE_PICTURES && $CURRENT_ALBUM_DATA['votes'] == 'YES')) {
  $votes = "";
} else {
  $votes = $picData['votes'] ? sprintf($lang_rate_pic['rating'], round($picData['pic_rating'] / 2000, 1), $picData['votes']) : $lang_rate_pic['no_votes'];
}

/**
 * Check whether user can send ecards and display the Send Ecards link accordingly
 */
if (USER_CAN_SEND_ECARDS) {
    $picData["ecardTgt"] = "ecard.php?album=$album&amp;pid=$pid&amp;pos=$pos";
    $picData["ecardTitle"] = $lang_img_nav_bar['ecard_title'];
} else {
    $picData["ecardTgt"] = "javascript:alert('" . addslashes($lang_img_nav_bar['ecard_disabled_msg']) . "');";
    $picData["ecardTitle"] = $lang_img_nav_bar['ecard_disabled'];
}

/**
 * Get the film strip data in an array
 */
$filmStrip = $albumData->getFilmStripData($album, $pos);

/**
 * Target link for slideshow button
 */
$slideshowTgt = "slideShow.php?album=$album&amp;pid=$pid&amp;slideshow=".$CONFIG['slideshow_interval'];

/**
 * Get the html for the displaying whole page in a variable
 */
$CONTENT = $t->getDisplayImageHTML($picData, $picCount, $pos, $thumbPage, $displayPicInfo, $votes, $picComments, $commentBox, $picInfo, $filmStrip, $slideshowTgt);

$pictureTitle = $picData['title'] ? $picData['title'] : strtr(preg_replace("/(.+)\..*?\Z/", "\\1", htmlspecialchars($picData['filename'])), "_", " ");

/**#@+
 * Assign to smarty
 */
$t->assign("breadcrumbHTML", $breadcrumbHTML);
$t->assign("CONTENT", $CONTENT);
$t->assign("PAGE_TITLE", $CONFIG["gallery_name"] . " - " . $album_name."/".$pictureTitle);
$t->assign("GALLERY_DESCRIPTION", $CONFIG["gallery_description"]);
/**#@-*/

/**#@+
 * Assign lang array to smarty
 */
$t->assign("lang_main_menu", $lang_main_menu);
$t->assign("lang_gallery_admin_menu", $lang_gallery_admin_menu);
/**#@-*/

/**
 * Assign user related data
 */
if (!USER_ID) {
  $t->assign("login", 1);
}

/**#@+
 * Assign user related data to smarty
 */
$t->assign("GALLERY_ADMIN_MODE", GALLERY_ADMIN_MODE);
$t->assign("USER_ADMIN_MODE", USER_ADMIN_MODE);
$t->assign("USER_CAN_CREATE_ALBUMS", USER_CAN_CREATE_ALBUMS);
$t->assign("USER_IS_ADMIN", USER_IS_ADMIN);
$t->assign("USER_CAN_UPLOAD_PICTURES", USER_CAN_UPLOAD_PICTURES);
$t->assign("REFERER", $REFERER);
$t->assign("cat", $cat);
$t->assign("USER_NAME", USER_NAME);
$t->assign("my_cat_id", FIRST_USER_CAT + USER_ID);
/**#@-*/

/**
 * Display the common html file
 */
$t->display ("2bornot2b/main.html");
?>