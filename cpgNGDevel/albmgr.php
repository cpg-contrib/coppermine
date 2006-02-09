<?php
/**
 * albmgr.php
 *
 * This script is used manage, edit and add albums
 *
 * @package cpgNG
 * @author Abbas <abbas@sanisoft.com>
 * @version $Id$
 */

/**#@+
 * Constant to prevent direct execution of config.inc.php
 */
define('IN_COPPERMINE', true);
define('ALBMGR_PHP', true);
define('DELETE_PHP', true);
/**#@-*/

require('include/init.inc.php');
require('classes/cpgTemplate.class.php');
require('classes/cpgProcessAlbum.class.php');
///require('classes/cpgProcessCategory.class.php'); // Commented temporarily

$t = new cpgTemplate;
if (isset($_POST['update'])) {
  //print_r($_POST);
  $albumObj = new cpgProcessAlbum();

  $albumObj->updateAlbum();

  $t->assign('albumObj', $albumObj);
  $t->assign('lang_albmgr_php', $lang_albmgr_php);
  $t->assign('lang_delete_php', $lang_delete_php);
  $t->assign('lang_continue', $lang_continue);
  $t->assign('CONTENT', $t->fetchHTML('common/albumUpdate.html'));
} else {
  $categoryObj = new cpgProcessCategory;

  if (GALLERY_ADMIN_MODE) {
    $cat = (int)$_GET['cat'];

    if ($cat == 1) $cat = 0;
  } else if (isset($_GET['cat']) && !empty($_GET['cat'])) {
    $cat = (int)$_GET['cat'];
  } else {
    $cat = -1;
  }

  $categoryObj->getAlbumSet($cat);

  $catList = array();
  //$catList[] = array(FIRST_USER_CAT + $auth->isDefined('USER_ID'), $lang_albmgr_php['my_gallery']);

  if (GALLERY_ADMIN_MODE) {
    $catList[] = array(0, $lang_albmgr_php['no_category']);
  }

  $catList = $categoryObj->getSubcatData(0, $catList, '');

  $t->assign('categoryObj', $categoryObj);
  $t->assign('catList', $catList);
  $t->assign('cat', $cat);
  $t->assign('size', min(max(count ($categoryObj->albumSet) + 3, 15), 40));
  $t->assign('lang_albmgr_php', $lang_albmgr_php);
  $t->assign('CONTENT', $t->fetchHTML('common/albmgr.html'));
}

if (!$auth->isDefined('USER_ID')) {
  $t->assign('loggedin', 0);
} else {
  $t->assign('loggedin', 1);
}

$t->assign('SUB_TITLE', $lang_albmgr_php['alb_mrg']);

/**
 * Cleanup connections, freeze objects in session, set user cookie.
 */
include ('include/cleanUp.inc.php');

$t->display('main.html');
?>
