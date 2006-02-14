<?php
/**
 * displayimage.php
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
define('DB_INPUT_PHP', true);
define('DELETE_PHP', true);
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
require_once('classes/cpgProcessComments.class.php');
/**#@-*/

/**
 * If smilies is enabled then include smilies.inc.php
 */
if ($config->conf['enable_smilies']) {
  include('include/smilies.inc.php');
}

/**
 * Create a new template object
 */
$t = new cpgTemplate;

/**
 * Create object of comment class
 */
$commentsObj = new cpgProcessComments;

/**
 * If comment is set to delete then delete the comment
 */
if (isset($_GET['event']) && $_GET['event'] == 'deleteComment' && isset($_GET['msg_id']) && !empty($_GET['msg_id'])) {
  $commentsObj->deleteComment((int)$_GET['msg_id']);
}
/**
 * If comment is set to update then update the comment
 */
else if (isset($_POST['event']) && $_POST['event'] == 'updateComment' && isset($_POST['msg_id']) && !empty($_POST['msg_id'])) {
  $commentResult = $commentsObj->updateComment((int)$_POST['msg_id'], $_POST['msg_author'], $_POST['msg_body']);
  $t->assign('commentResult', $commentResult);
}

if (isset($_GET['pid'])) {
  /**
   * @var Integer
   * Variable to hold picture id
   */
  $pid = (int)$_GET['pid'];
  /**
   * Get the album of the selected picture.
   */
  $album = cpgUtils::getAid('pid', $pid);
} else {
  $pid = 0;
}

/**
 * This will be set for meta albums and while nevigating the pictures.
 * This will have no effect when coming from thumbnails.
 */
if (isset($_GET['album']) && !empty($_GET['album'])) {
  /**
   * @var String/Integer
   * Variable to hold albumName/ablbumId
   */
  $album = $_GET['album'];
}

if (isset($_GET['meta']) && !empty($_GET['meta'])) {
  $meta = $_GET['meta'];
}

if (isset($_GET['cat']) && !empty($_GET['cat'])) {
  $cat = $_GET['cat'];
}

/**
 * Create a new album object
 */
$albumData = cpgAlbumFactory::getAlbumObj(!empty($meta) ? $meta : $album);


if (isset($_GET['pos'])) {
  /**
   * @var Integer
   * Variable to hold picture position
   */
  $pos = (int)$_GET['pos'];
} elseif ($pid > 0) {
  /**
   * Now we need the position of this picture in the album.
   */
  $allPicData = $albumData->getPicData($album, $pic_count, $album_name, -1, -1, false);
  for($pos = 0; $allPicData[$pos]['pid'] != $pid && $pos < $pic_count; $pos++);
} else {
  cpgUtils::cpgDie(CRITICAL_ERROR, $lang_errors['param_missing'], __FILE__, __LINE__);
}

/**
 * Array to store misc data
 */
$miscArr = array();

/**
 * If comment is posted then add the comment
 */
if (isset($_POST['event']) && $_POST['event'] == 'comment') {
  $commentResult = $commentsObj->addComment((int)$_POST['pid'], $_POST['msg_author'], $_POST['msg_body']);
  $t->assign("commentResult", $commentResult);
}

/**
 * Get the breadcrumb data for the current page
 */
$breadcrumb = $albumData->getBreadcrumbData ($album, $cat, $meta);

/**
 * Get the HTML for the breadcrumb
 */
$breadcrumbHTML = $t->getBreadcrumbHTML($breadcrumb);

/**
 * Create a new cpgDisplayimage object to get the picture details
 */
$imgData = new cpgDisplayImageData;

if (is_int($pos)) {
    /**
     * Get picture data
     */
      $data = $albumData->getPicData(!empty($album) ? $album : 0, $picCount, $album_name, $pos, 1, $cat, false, true, $auth->user['uid']);
      $imgData->picData = $data[0];

    /**
     * If total number of pictures comes out to be zero then die
     */
    if ($picCount == 0) {
        cpgUtils::cpgDie(INFORMATION, $lang_errors['no_img_to_display'], __FILE__, __LINE__);
    } elseif ($pos >= $picCount) {
        $pos = $picCount - 1;
        $humanPos = $pos + 1;
        $data = $albumData->getPicData(!empty($album) ? $album : 0, $picCount, $album_name, $pos, 1, $cat, false, true, $auth->user['uid']);
        $imgData->picData = $data[0];

    } elseif ($pid > 0 && $pos >= $picCount) {
        $pos = $picCount - 1;
        $humanPos = $pos + 1;
    }

}

if (!$imgData->picData['pid']) {
  cpgUtils::cpgDie(INFORMATION, $lang_errors['no_img_to_display']);
} elseif ($pid == 0) {
  $pid = $imgData->picData['pid'];
}

/**
 * Retrieve data for the current album
 */
if (isset($imgData->picData)) {
  $imgData->getAlbumData();
}

/**
 * Get the comments for the picture
 */
$picComments = $commentsObj->getPicComments($imgData->picData);

if (is_array($picComments)) {
  reset($picComments);
  $childParent = array();

  foreach ($picComments as $cmtId => $cmtDetails) {
    $childParent[(int)$cmtId] = (int)$cmtDetails['msg_parent'];
  }

  reset($childParent);

  $commentTree = array();

  foreach ($childParent as $k => $v) {
    if ($v == 0) {
      cpgUtils::buildTree($k, $childParent);
    }
  }

  $t->assign('commentTree', $commentTree);

  $referer = urlencode($_SERVER['PHP_SELF'].(isset($_SERVER['QUERY_STRING']) && $_SERVER['QUERY_STRING'] ? '?'.$_SERVER['QUERY_STRING'] : ''));

  $t->assign('referer', $referer);
}

/**
  * Show the comment input box if user is allowed to post comments
  */
if ($auth->isDefined("USER_CAN_POST_COMMENTS") && $imgData->currentAlbumData['comments'] == 'YES') {
  $miscArr['showCommentInput'] = 1;
  if ($auth->isDefined("USER_ID")) {
    $miscArr['userName'] = $auth->isDefined("USER_NAME");
    $miscArr['userStatus'] = 'loggedin';
  } else {
    $miscArr['userName'] = isset($auth->user['name']) ? strtr($auth->user['name'], $HTML_SUBST) : $lang_display_comments['your_name'];
    $miscArr['userStatus'] = 'anon';
  }
  $miscArr['maxComSize'] = $config->conf['max_com_size'];
  $miscArr['enableSmilies'] = $config->conf['enable_smilies'];
}


/**
 * Show bbcode help if set in config
 */
if ($config->conf['show_bbcode_help']) {
  $miscArr['bbcodeHelp'] = cpgUtils::cpgDisplayHelp('f=index.html&base=64&h='.urlencode(base64_encode(serialize($lang_bbcode_help_title.'&nbsp;'))).'&t='.urlencode(base64_encode(serialize($lang_bbcode_help))),470,245);
}

/**
 * Decode bbcode from the pic caption
 */
$imgData->picData['caption'] = cpgUtils::bbDecode($imgData->picData['caption']);

/**
 * Get the picture/file information
 */
$picInfo = $imgData->getPicInfo();

/**
 * Get the data required to display the picture/file and insert it in $picData array
 */
$imgData->getPicHtmlData(!empty($meta) ? $meta : $album);

/**
 * Check whether user can rate pictures and display rating box accordingly
 */
if (!($auth->isDefined("USER_CAN_RATE_PICTURES") && $imgData->currentAlbumData['votes'] == 'YES')) {
  $votes = "";
} else {
  $votes = $imgData->picData['votes'] ? sprintf($lang_rate_pic['rating'], round($imgData->picData['pic_rating'] / 2000, 1), $imgData->picData['votes']) : $lang_rate_pic['no_votes'];
}

$imgData->buildLinks(!empty($meta) ? $meta : '', !empty($album) ? $album : '', !empty($cat) ? $cat : '', $pos, $picCount);

/**
 * Get the film strip data in an array
 */
if ($config->conf['display_film_strip']) {
  $filmStrip = $albumData->getFilmStripData(!empty($meta) ? $meta : "", !empty($album) ? $album : "", $pos, $cat);
} else {
  $filmStrip = "";
}

/**
 * Get the html for the displaying whole page in a variable
 */
$CONTENT = $t->getDisplayImageHTML($imgData->picData, $picCount, $pos, $votes, $picComments, $picInfo, $filmStrip, $miscArr);

$pictureTitle = $imgData->picData['title'] ? $imgData->picData['title'] : strtr(preg_replace("/(.+)\..*?\Z/", "\\1", htmlspecialchars($imgData->picData['filename'])), "_", " ");

/**#@+
 * Assign to smarty
 */
$t->assign('breadcrumbHTML', $breadcrumbHTML);
$t->assign('CONTENT', $CONTENT);
$t->assign('SUB_TITLE', $album_name.'/'.$pictureTitle);
$t->assign('GALLERY_DESCRIPTION', $config->conf['gallery_description']);
/**#@-*/

/**#@+
 * Assign lang array to smarty
 */
$t->assign('lang_main_menu', $lang_main_menu);
$t->assign('lang_gallery_admin_menu', $lang_gallery_admin_menu);
/**#@-*/

/**
 * Assign user related data
 */
if (!$auth->isDefined('USER_ID')) {
  $t->assign('loggedin', 0);
} else {
  $t->assign('loggedin', 1);
}

/**#@+
 * Assign user related data to smarty
 */
$t->assign('GALLERY_ADMIN_MODE', GALLERY_ADMIN_MODE);
$t->assign('USER_ADMIN_MODE', USER_ADMIN_MODE);
$t->assign('USER_CAN_CREATE_ALBUMS', $auth->isDefined("USER_CAN_CREATE_ALBUMS"));
$t->assign('USER_IS_ADMIN', $auth->isDefined("USER_IS_ADMIN"));
$t->assign('USER_CAN_UPLOAD_PICTURES', $auth->isDefined("USER_CAN_UPLOAD_PICTURES"));
$t->assign('REFERER', $REFERER);
$t->assign('cat', $cat);
$t->assign('USER_NAME', $auth->isDefined("USER_NAME"));
$t->assign('my_cat_id', FIRST_USER_CAT + $auth->isDefined("USER_ID"));
/**#@-*/

/**
 * Cleanup connections, freeze objects in session, set user cookie.
 */
include ('include/cleanUp.inc.php');

/**
 * Display the common html file
 */
$t->display ('main.html');
$time_end = cpgGetMicroTime();
$time = round($time_end - $cpg_time_start, 3);

?>
