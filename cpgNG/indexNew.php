<?php
/**
 * indexNew.php
 * Index page for CPGNG
 */

define('IN_COPPERMINE', true);
define('THUMBNAILS_PHP', true);

define('INDEX_PHP', true);
require('include/init.inc.php');
require_once('classes/cpgAlbumData.class.php');
require_once('classes/cpgTemplate.class.php');
require_once('classes/cpgIndexData.class.php');

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

$cpg_show_private_album = $CONFIG['allow_private_albums'] ? $CONFIG['show_private'] : true;

$albumData = new cpgAlbumData();
$indexData = new cpgIndexData($cat, $PAGE);
$t = new cpgTemplate();
/**
 * Get breadcrumb
 */
//$albumData->getBreadCrumbData()

$elements = preg_split("|/|", $CONFIG['main_page_layout'], -1, PREG_SPLIT_NO_EMPTY);

/**
* Loop through the $elements array to build the page using the parameters
* set in the config
*/

foreach ($elements as $element) {
  if (preg_match("/(\w+),*(\d+)*/", $element, $matches)){
    if (!isset($matches[2])) { // added to fix notice about undefined index
        $matches[2] = 0;
    }
    switch ($matches[1]) {
      case 'breadcrumb':
          if (!empty($cat)) {
            $breadcrumb = $albumData->getBreadcrumbData("", "", $cat);
            $breadcrumbHTML = $t->getBreadcrumbHTML($breadcrumb);
          }
          // Added breadcrumb as a separate listable block from config
          //if (($breadcrumb != '' || count($cat_data) > 0) && $cat != 0) theme_display_breadcrumb($breadcrumb, $cat_data);
          break;

      case 'catlist':
          /**
           * Array to store the category data. Breadcrumb, category data & statistics.
           */
          $indexData->getCatList();
          if (isset($cat) && $cat == USER_GAL_CAT) {
            $indexData->listUsers();
          }
          flush();
          break;

      case 'alblist':
          $indexData->listAlbums();
          flush();
          break;

      default:
        break;
    }
  }
}
//print_r($indexData);
/**
 * Assign lang array's
 */
$t->assign("lang_main_menu", $lang_main_menu);
$t->assign("lang_gallery_admin_menu", $lang_gallery_admin_menu);
$t->assign("lang_user_admin_menu", $lang_user_admin_menu);
$t->assign("lang_cat_list", $lang_cat_list);
$t->assign("lang_album_admin_menu", $lang_album_admin_menu);

//print_r($indexData->catData);
$t->assign("cat", $cat);
$t->assign("pg", $PAGE);
$t->assign("albcols", $CONFIG['album_list_cols']);
$t->assign("thumbcols", $CONFIG["thumbcols"]);
$t->assign("thumbrows", $CONFIG["thumbrows"]);
$t->assign("colWidth", ceil(100/$CONFIG['album_list_cols']));
$t->assign("thumbColWidth", ceil(100/$CONFIG['thumbcols']));
$t->assign("thumbList", $thumbList);
$t->assign("allowRegistration", $CONFIG['allow_user_registration']);
$t->assign("GALLERY_ADMIN_MODE", GALLERY_ADMIN_MODE);
$t->assign("USER_ADMIN_MODE", USER_ADMIN_MODE);
$t->assign("USER_CAN_CREATE_ALBUMS", USER_CAN_CREATE_ALBUMS);
$t->assign("USER_IS_ADMIN", USER_IS_ADMIN);
$t->assign("USER_CAN_UPLOAD_PICTURES", USER_CAN_UPLOAD_PICTURES);
$t->assign("REFERER", $REFERER);
$t->assign("USER_NAME", USER_NAME);
$t->assign("my_cat_id", FIRST_USER_CAT + USER_ID);
$t->assign("breadcrumbHTML", $breadcrumbHTML);
$t->assign("PAGE_TITLE", $lang_index_php['welcome']);
$t->assign("GALLERY_DESCRIPTION", $CONFIG["gallery_name"]);
$t->assign("USER_NAME", USER_NAME);
$t->assign("my_cat_id", FIRST_USER_CAT + USER_ID);

/**
 * Assign user related data
 */
if (!USER_ID) {
  $t->assign("loggedin", 0);
} else {
  $t->assign("loggedin", 1);
}

/**
 * Fetch the index page
 */
$t->assign("CONTENT", $t->getIndexHTML($indexData));

$t->display ($CONFIG["theme"]."/main.html");
?>