<?php
/**
 * modifyalb.php
 *
 * Script to edit properties of an album
 *
 * @package cpgNG
 * @author Abbas <abbas@sanisoft.com>
 * @version $Id$
 */

/**#@+
 * Constant to prevent direct execution of config.inc.php
 */
define('IN_COPPERMINE', true);
define('MODIFYALB_PHP', true);
define('DB_INPUT_PHP', true);
define('ALBMGR_PHP', true);
/**#@-*/

require('include/init.inc.php');

/**#@+
 * Include all the classes
 */
require_once('classes/cpgTemplate.class.php');
require_once('classes/cpgProcessAlbum.class.php');
/**#@-*/

if (!(GALLERY_ADMIN_MODE || USER_ADMIN_MODE)) {
  cpgUtils::cpgDie(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);
}

if (isset($_POST['aid']) && !empty($_POST['aid'])) {
  $album = (int)$_POST['aid'];
} elseif (isset($_REQUEST['album']) && !empty($_REQUEST['album'])) {
  $album = (int)$_REQUEST['album'];
}

$t = cpgTemplate::getInstance();

$albumObj = new cpgProcessAlbum($album);

$miscArr = array();

if (isset($_POST['event']) && !empty($_POST['event'])) {
  $event = $_POST['event'];
  $albumObj->modifyAlbum($event);
  $miscArr['albumUpdated'] = $lang_modifyalb_php['alb_updated'];
}

$albumObj->getAlbumData();

$miscArr['updateHelp'] = cpgUtils::cpgDisplayHelp('f=index.htm&as=album_prop&ae=album_prop_end&top=1', '600', '400');

if (GALLERY_ADMIN_MODE) {
  $miscArr['groupNotice1'] = sprintf($lang_modifyalb_php['notice1'],'<a href="groupmgr.php">','</a>');
}
else {
  $miscArr['groupNotice1'] = sprintf($lang_modifyalb_php['notice1'],'','');
}

$albumObj->buildCatList();

if ($config->conf['show_bbcode_help']) {
  $miscArr['bbcodeHelp'] = cpgUtils::cpgDisplayHelp('f=index.html&base=64&h='.urlencode(base64_encode(serialize($lang_bbcode_help_title))).'&t='.urlencode(base64_encode(serialize($lang_bbcode_help))),470,245);
}

$albumObj->buildPicListBox();

if ($config->conf['allow_private_albums']) {
   $albumObj->buildAlbumPermList();
}

if (USER_ADMIN_MODE) {
  $miscArr['visitorsCanUpload'] = $albumObj->albumData['uploads'];
}

$miscArr['visitorUpHelp'] = cpgUtils::cpgDisplayHelp('f=index.htm&as=album_prop_visitor_start&ae=album_prop_visitor_end&top=1', '400', '200');

$albumObj->getAllAlbums();

if (GALLERY_ADMIN_MODE) {

  $albumObj->getAlbumStats();

  $miscArr['showReset'] = 1;

  // set up the translation strings
  $miscArr['translationResetViews']= sprintf($lang_modifyalb_php['reset_views'], '&quot;'.$albumObj->albumData['title'].'&quot;');
  $miscArr['translationResetRating'] = sprintf($lang_modifyalb_php['reset_rating'], '&quot;'.$albumObj->albumData['title'].'&quot;');
  $miscArr['translationDeleteComments'] = sprintf($lang_modifyalb_php['delete_comments'], '&quot;'.$albumObj->albumData['title'].'&quot;');
  $miscArr['translationDeleteFiles'] = sprintf($lang_modifyalb_php['delete_files'], '<span style="color:red;font-weight:bold">', '</span>', '&quot;'.$albumObj->albumData['title'].'&quot;');
}

$t->assign("albumObj", $albumObj);
$t->assign("miscArr", $miscArr);
$t->assign("lang_modifyalb_php", $lang_modifyalb_php);
$t->assign("lang_yes", $lang_yes);
$t->assign("lang_no", $lang_no);
$t->assign("CONTENT", $t->fetchHTML("common/modifyalb.html"));

/**
 * Assign lang array's
 */
$t->assign("SUB_TITLE", sprintf($lang_modifyalb_php['upd_alb_n'], $albumObj->albumData['title']));

/**
 * Assign user related data
 */
if (!USER_ID) {
  $t->assign("loggedin", 0);
} else {
  $t->assign("loggedin", 1);
}

/**
* Cleanup connections, freeze objects in session, set user cookie.
*/
include ('include/cleanUp.inc.php');

/**
 * Display the common html file
 */
$t->display ("main.html");
?>