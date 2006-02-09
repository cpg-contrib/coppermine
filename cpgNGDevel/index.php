<?php
/**
 * index.php
 *
 * Index page for CPGNG
 *
 * @package cpgNG
 * @author Aditya <adityamooley@sanisoft.com>
 * @version $Id$
 */

/**#@+
 * Constant to prevent direct execution of config.inc.php
 */
define('IN_COPPERMINE', true);
define('THUMBNAILS_PHP', true);
define('INDEX_PHP', true);
/**#@-*/

/**
 * Include init
 */
require('include/init.inc.php');

if ($config->conf['enable_smilies']) {
  include("include/smilies.inc.php");
}

/**#@+
 * Include all the classes
 */
require_once('classes/cpgAlbumFactory.class.php');
require_once('classes/cpgAlbumData.class.php');
require_once('classes/cpgTemplate.class.php');
require_once('classes/cpgIndexData.class.php');
/**#@-*/

/**
 * See if $page has been passed in GET
 */
if (isset($_GET['page'])) {
    $PAGE = max((int)$_GET['page'], 1);
    $USER['lap'] = $PAGE;
} elseif (isset($USER['lap'])) {
    $PAGE = max((int)$USER['lap'], 1);
} else {
    $PAGE = 1;
}

/**
 * See if $cat has been passed in GET
 */

if (isset($_GET['cat'])) {
    $cat = (int)$_GET['cat'];
} else {
  $cat = 0;
}
$breadcrumbHTML = "";
$CONTENT = "";

$albumData = new cpgAlbumData($cat);
$indexData = new cpgIndexData($cat,'',$PAGE);

$t = new cpgTemplate();

/**#@+
 * Assign all the data to smarty
 */
$t->assign('lang_main_menu', $lang_main_menu);
$t->assign('lang_gallery_admin_menu', $lang_gallery_admin_menu);
$t->assign('lang_user_admin_menu', $lang_user_admin_menu);
$t->assign('lang_cat_list', $lang_cat_list);
$t->assign('lang_album_admin_menu', $lang_album_admin_menu);

$t->assign('cat', $cat);
$t->assign('pg', $PAGE);
$t->assign('albcols', $config->conf['album_list_cols']);
$t->assign('thumbcols', $config->conf['thumbcols']);
$t->assign('thumbrows', $config->conf['thumbrows']);
$t->assign('colWidth', ceil(100/$config->conf['album_list_cols']));
$t->assign('thumbColWidth', ceil(100/$config->conf['thumbcols']));
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

/**#@-*/

//$elements = preg_split("|/|", $config->conf['main_page_layout'], -1, PREG_SPLIT_NO_EMPTY);
$elements = explode('/', $config->conf['main_page_layout']);

/**
* Loop through the $elements array to build the page using the parameters
* set in the config
*/

foreach ($elements as $element) {
  if (preg_match("/(\w+),*(\d+)*/", $element, $matches)) {
    if (!isset($matches[2])) { // added to fix notice about undefined index
        $matches[2] = 0;
    }
    switch ($matches[1]) {
      case 'breadcrumb':
          if (!empty($cat)) {
            $breadcrumb = $albumData->getBreadcrumbData("", $cat);
            $breadcrumbHTML = $t->getBreadcrumbHTML($breadcrumb);
          }
          break;
      case 'catlist':
          /**
           * Array to store the category data. Breadcrumb, category data & statistics.
           */
          $indexData->getCatList();
          $t->assign('indexData', $indexData);

          $CONTENT .= $t->fetchHTML('common/category.html');
          if (isset($cat) && $cat == $auth->isDefined("USER_GAL_CAT")) {
            $indexData->listUsers();
            $t->assign('indexData', $indexData);
            $CONTENT .= $t->fetchHTML('common/users.html');
          }
          break;
      case 'alblist':
          $indexData->listAlbums();
          $t->assign('indexData', $indexData);
          $CONTENT .= $t->fetchHTML('common/albums.html');
          break;
      case 'lastup':
        $albumData = cpgAlbumFactory::getAlbumObj('lastup');
        $thumbData = $albumData->getThumbnailData(0, $cat, 1, $config->conf['thumbcols'], $matches[2], true, true);
        $CONTENT .= $t->getThumbnailHTML($thumbData, true, true);
        break;
      case 'lastcom':
        $albumData = cpgAlbumFactory::getAlbumObj('lastcom');
        $thumbData = $albumData->getThumbnailData(0, $cat, 1, $config->conf['thumbcols'], $matches[2], true, true);
        $CONTENT .= $t->getThumbnailHTML($thumbData, true, true);
        break;
      case 'random':
        $albumData = cpgAlbumFactory::getAlbumObj('random');
        $thumbData = $albumData->getThumbnailData(0, $cat, 1, $config->conf['thumbcols'], $matches[2], true, true);
        $CONTENT .= $t->getThumbnailHTML($thumbData, true, true);
        break;
      case 'topn':
        $albumData = cpgAlbumFactory::getAlbumObj('topn');
        $thumbData = $albumData->getThumbnailData(0, $cat, 1, $config->conf['thumbcols'], $matches[2], true, true);
        $CONTENT .= $t->getThumbnailHTML($thumbData, true, true);
        break;
      default:
        break;
    }
  }
}
//print_r($indexData); exit;

/**
 * Assign data for main.html
 */
$t->assign('RSS', 1);
$t->assign('CONTENT', $CONTENT);
$t->assign('breadcrumbHTML', $breadcrumbHTML);
if (count($breadcrumb)) {
  /**
   * Breadcrumb is present, create the list of categories
   */
  $subTitle = $lang_list_categories['home'];
  foreach ($breadcrumb as $key => $val) {
    $subTitle .= ' > ' . $val['title'];
  }
  $t->assign('SUB_TITLE', $subTitle);
} else {
  $t->assign('SUB_TITLE', $lang_list_categories['home']);
}

/**
 * Cleanup connections, freeze objects in session, set user cookie.
 */
include ('include/cleanUp.inc.php');

$t->display ('main.html');
$cpg_time_end = cpgGetMicroTime();
$totalTime = $cpg_time_end - $cpg_time_start;

?>
