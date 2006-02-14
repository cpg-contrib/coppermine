<?php
/**
 * batchadd.php
 *
 * Script to allow batch addition of files to the album
 *
 * @package cpgNG
 * @author Aditya <adityamooley@sanisoft.com>
 * @version $Id$
 */

/**#@+
 * Constant to prevent direct execution of config.inc.php
 */
define('IN_COPPERMINE', true);
define('SEARCHNEW_PHP', true);
/**#@-*/

/**
 * Include init
 */
require('include/init.inc.php');

$miscArr = array();

require_once('classes/cpgTemplate.class.php');
require_once('classes/cpgBatchAdd.class.php');

/**
 * If logged in member is not admin then stop further execution of script
 */
if (!GALLERY_ADMIN_MODE) {
  cpgUtils::cpgDie(ERROR, $lang_errors['access_denied']);
}

$batch = new cpgBatchAdd();
$albumList = array();

if ($_GET['insert'] == 1) {
  /**
   * Final Step. User wants to insert the selected files.
   * Create an array of filname and album in SESSION.
   */
  session_start();
  $albumArr = $batch->getAllAlbums();
  $help = '&nbsp;'.cpgUtils::cpgDisplayHelp('f=index.htm&as=ftp&ae=ftp_end&top=1#ftp_show_result', '600', '400');
  $counter = 0;
  $_SESSION['fileUpload'] = array();
  foreach ($_POST['pics'] as $pic_id) {
    $album_lb_id = $_POST['album_lb_id_' . $pic_id];
    $album_id = $_POST[$album_lb_id];

    $editAlbumArray[] = $album_id; //Load the album number into an array for later

    $pic_file = base64_decode($_POST['picfile_' . $pic_id]);
    $dir_name = dirname($pic_file);
    $file_name = basename($pic_file);
    $_SESSION['fileUpload'][$counter]['fileName'] = $file_name;
    $_SESSION['fileUpload'][$counter]['album'] = $album_id;
    $_SESSION['fileUpload'][$counter]['dirName'] = $dir_name;
    $_SESSION['fileUpload'][$counter]['albumName'] = $albumArr[$album_id];
    $counter++;
  }
} elseif (isset($_GET['startdir'])) {

  /**
   * If startdir is set, get all the pictures in that directory.
   */
  $subTitle = $lang_search_new_php['page_title'];
  /**
   * Create help icon
   */
  $miscArr['help'] = '&nbsp;'.cpgUtils::cpgDisplayHelp('f=index.htm&as=ftp&ae=ftp_end&top=1#ftp_select_file', '550', '400');

  /**
   * Find and store all the pcitures in the given path to an array.
   * We need this to show the pictures which are already added in the gallery.
   */
  $batch->getAllPics($_GET['startdir']);

  /**
   * Scan the given directory recursively and create the array for each folder.
   */
  $batch->CPGscandir($_GET['startdir'] . '/');

  /**
   * Get the list of albums
   */
  $albumList = cpgUtils::getAlbumListArray();
} else {
  /**
   * We are at step 1 of batch upload, get all the directories in albums direcroty.
   */
  $subTitle = $lang_search_new_php['page_title'];
  /**
   * Create help icon
   */
  $miscArr['help'] = '&nbsp;'.cpgUtils::cpgDisplayHelp('f=index.htm&as=ftp&ae=ftp_end&top=1', '600', '450');

  $batch->createDirTree();
}

$t = new cpgTemplate();

/**#@+
 * Assign all the data to smarty
 */
$t->assign('lang_main_menu', $lang_main_menu);
$t->assign('lang_gallery_admin_menu', $lang_gallery_admin_menu);
$t->assign('lang_user_admin_menu', $lang_user_admin_menu);
$t->assign('lang_search_new_php', $lang_search_new_php);
$t->assign('lang_check_uncheck_all', $lang_check_uncheck_all);

$t->assign('batch', $batch);
$t->assign('albumList', $albumList);
$t->assign('files', $_SESSION['fileUpload']);
$t->assign('editAlbumArray', $editAlbumArray);
$t->assign('albumArr', $albumArr);
$t->assign('miscArr', $miscArr);

$t->assign('cat', $cat);
$t->assign('pg', $PAGE);
$t->assign('albcols', $config->conf['album_list_cols']);
$t->assign('thumbcols', $config->conf['thumbcols']);
$t->assign('thumbrows', $config->conf['thumbrows']);
$t->assign('colWidth', ceil(100/$config->conf['album_list_cols']));
$t->assign('thumbColWidth', ceil(100/$config->conf['thumbcols']));
$t->assign('allowRegistration', $config->conf['allow_user_registration']);
$t->assign('GALLERY_ADMIN_MODE', GALLERY_ADMIN_MODE);
$t->assign('USER_ADMIN_MODE', USER_ADMIN_MODE);
$t->assign('USER_CAN_CREATE_ALBUMS', $auth->isDefined("USER_CAN_CREATE_ALBUMS"));
$t->assign('USER_IS_ADMIN', $auth->isDefined("USER_IS_ADMIN"));
$t->assign('USER_CAN_UPLOAD_PICTURES', $auth->isDefined("USER_CAN_UPLOAD_PICTURES"));
$t->assign('REFERER', $REFERER);
$t->assign('USER_NAME', $auth->isDefined("USER_NAME"));
$t->assign('my_cat_id', FIRST_USER_CAT + $auth->isDefined("USER_ID"));
$t->assign('GALLERY_DESCRIPTION', $config->conf['gallery_name']);
$t->assign('USER_NAME', $auth->isDefined("USER_NAME"));

if (!$auth->isDefined('USER_ID')) {
  $t->assign('loggedin', 0);
} else {
  $t->assign('loggedin', 1);
}

$t->assign('SUB_TITLE', $subTitle);

$t->assign("CONTENT", $t->fetchHTML("common/batchadd.html"));

/**
 * Cleanup connections, freeze objects in session, set user cookie.
 */
include ('include/cleanUp.inc.php');

$t->display ('main.html');
$cpg_time_end = cpgGetMicroTime();
$totalTime = $cpg_time_end - $cpg_time_start;
?>