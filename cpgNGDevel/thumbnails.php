<?php
/**
 * thumbnails.php
 *
 * Script to display the thumbnails for the selected album
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
define('DISPLAYIMAGE_PHP', true);
/**#@-*/

/**#@+
 * Include all the classes
 */
require('include/init.inc.php');
require_once('classes/cpgAlbumFactory.class.php');
require_once('classes/cpgTemplate.class.php');
require_once('classes/cpgIndexData.class.php');
require_once('classes/cpgPluginManager.class.php');
/**#@-*/

if ($config->conf['enable_smilies']) {
  include("include/smilies.inc.php");
}

/**
 * Code if short url is on
 */
if ($config->conf['short_url']) {
  $cat = get_magic_quotes_gpc() ? $_GET['cat'] : addslashes($_GET['cat']);
  $album = get_magic_quotes_gpc() ? $_GET['album'] : addslashes($_GET['album']);

  /**
   * If cat is set, get the cat is also with album id.
   */
  if (!empty($cat) && !is_numeric($cat)) {
    $query = "SELECT c.cid, a.aid FROM {$config->conf['TABLE_ALBUMS']} a, {$config->conf['TABLE_CATEGORIES']} c
              WHERE
                c.name = '$cat' AND
                a.title = '$album' AND
                c.cid = a.category
              ";
  } else {
    /**
     * Seems to be the album on 0th category. Just fetch the album name.
     */
    $query = "SELECT aid FROM {$config->conf['TABLE_ALBUMS']} a
              WHERE
                a.title = '$album'
              ";
  }
  $db->query($query);
  if ($db->nf() > 0) {
    $row = $db->fetchRow();
    $cat = isset($row['cid']) ? $row['cid'] : 0;
    $album = $row['aid'];
  }
}

if (isset($_GET['sort'])) {
  $USER['sort'] = $_GET['sort'];
}
if (!$cat && isset($_GET['cat'])) {
  $cat = (int)$_GET['cat'];
}

if (isset($_GET['uid'])) {
  $auth->user['uid'] = (int)$_GET['uid'];
}

if (isset($_GET['page'])) {
    $page = max((int)$_GET['page'], 1);
} else {
    $page = 1;
}

/**
 * If $album is not set through the above query, then short URL is off. So assign the value from GET to $album
 */
if (empty($album)) {
  $album = $_GET['album'];
}

if (isset($_POST['search'])) {
    // find out if a parameter has been submitted at all
    $allowed = array('title', 'caption', 'keywords', 'owner_name', 'filename', 'pic_raw_ip', 'pic_hrd_ip', 'user1', 'user2', 'user3', 'user4');

    foreach ($allowed as $key) {
        if (isset($_POST[$key]) == TRUE) {
            $_POST['params'][$key] = $_POST[$key];
        }
    }

    $auth->user['search'] = $_POST;
}

if (isset($_GET['search'])) {
    $auth->user['search']['search'] = $_GET['search'];
}

$valid = false; //flag to test whether the album is validated.

if ($config->conf['allow_private_albums'] == 0 || !in_array($album, $auth->forbiddenSetData)) {
  $valid = true;
} else if (isset($_POST['validate_album'])) {
  $password = addslashes($_POST['password']);

  $sql = 'SELECT aid FROM '.$config->conf['TABLE_ALBUMS']." WHERE alb_password = '$password' AND aid = '$album'";
  $db->query($sql);

  if ($db->nf() > 0) {
    if (!empty($_COOKIE[$config->conf['cookie_name'].'_albpw'])) {
      $albpw = unserialize($_COOKIE[$config->conf['cookie_name'].'_albpw']);
    }

    $albpw[$album] = md5($password);
    $alb_cookie_str = serialize($albpw);

    setcookie($config->conf['cookie_name'].'_albpw', $alb_cookie_str);

    $auth->getPrivateAlbumSet($album);

    $valid = true;
  } else {
    // Invalid password
    $valid = false;
  }
} else {
  $sql = 'SELECT aid FROM '.$config->conf['TABLE_ALBUMS']." WHERE aid = '$album' AND alb_password != ''";
  $db->query($sql);

  if ($db->nf() > 0) {
    // This album has a password.
    // Check whether the cookie is set for the current albums password
    if (!empty($_COOKIE[$config->conf['cookie_name'].'_albpw'])) {
      $alb_pw = unserialize($_COOKIE[$config->conf['cookie_name'].'_albpw']);

      // Check whether the alubm id in the cookie is same as that of the album id send by get
      if (isset($alb_pw[$album])) {
        $sql = 'SELECT aid FROM '.$config->conf['TABLE_ALBUMS']." WHERE MD5(alb_password) = '{$alb_pw[$album]}' AND aid = '$album'";
        $db->query($sql);

        if ($db->nf() > 0) {
          $valid = true; //The album password is correct. Show the album details.

          $auth->getPrivateAlbumSet();
        }
      }
    }
  } else {
    // Album with no password. Might be a private or normal album. Just set valid as true.
    $valid = true;
  }
}

/**
 * Create the object from the AlbumFactory for the album user has selected.
 * The object returned will be for a numeric album or any of the meta albums
 *
 * - If $_GET['meta'] is set, the album is meta-album. So pass the meta album to the factory.
 */

if (isset($_GET['meta']) && !empty($_GET['meta'])) {
  $albumData = cpgAlbumFactory::getAlbumObj($_GET['meta']);
} else {
  $albumData = cpgAlbumFactory::getAlbumObj($album);
}

/**
 * Create object of Template
 */
$t = cpgTemplate::getInstance();

$CONTENT = '';  //initialize content, all that follow simply add to it.

/**
 * We need index data only if meta is not set & not empty
 */
if (!isset($_GET['meta'])) {
  /**
  * Create object of indexData
  */
  $indexData = new cpgIndexData($cat,$album,$page);

  /**
  * Fetch the subalbums
  */
  $indexData->listAlbums();
  if (count($indexData->albList)) {
      $t->assign('indexData', $indexData);
      $CONTENT .= $t->fetchHTML('common/albums.html');
  }
}

$breadcrumb = $albumData->getBreadcrumbData($album, $cat, $_GET['meta'] ? $_GET['meta'] : '');
$breadcrumbHTML = $t->getBreadcrumbHTML($breadcrumb);

$thumbData = $albumData->getThumbnailData($album, $cat, $page, $config->conf['thumbcols'], $config->conf['thumbrows'], true, false, $auth->user['uid']);

/**
 * Create array for pagination.
 */
$maxTabs = $config->conf['max_tabs'];

$pageArr = array();
$pageArr[] = 1;

$start = max(2, (int)$thumbData['currentPage'] - floor(($maxTabs-2)/2));
$start = min($start, $thumbData['totalPages'] - $maxTabs + 2);
$start = ($start < 2) ? 2 : $start;
$end  = min($thumbData['totalPages']-1, $start + ($maxTabs - 3));

while($start <= $end) {
  $pageArr[] = $start++;
}
$pageArr[] = $thumbData['totalPages'];

$t->assign('pageArr', $pageArr);

if ($_GET['meta'] == 'favpics' && $config->conf['enable_zipdownload'] == 1) {
  $t->assign('showZipDownloadLink', 1);
}

if ($valid) {
  if ($config->conf['display_mini_toolbar'] == 1) {
    $t->assign('showToolbar', 1);
    $t->assign('lang_picinfo', $lang_picinfo);
    $t->assign('lang_success', $lang_success);
    $t->assign('lang_img_nav_bar', $lang_img_nav_bar);
  }

  // Include plugins for 'thumbnails' namespace
  cpgPluginManager::invokePlugins('thumbnails');

  $CONTENT .= $t->getThumbnailHTML($thumbData, $_GET['meta'] ? true : false);
} else {
  $query = 'SELECT alb_password_hint FROM '.$config->conf['TABLE_ALBUMS']." WHERE aid = '$album' AND alb_password != ''";
  $db->query($query);

  if ($db->nf() > 0) {
    $row = $db->fetchRow();

    $t->assign('albumPasswordHint', $row['alb_password_hint']);
  }

  if (isset($_POST['validate_album'])) {
    $t->assign('loginFailed', 1);
  }

  $t->assign('lang_thumb_view', $lang_thumb_view);

  // Include plugins for 'thumbnails' namespace
  cpgPluginManager::invokePlugins('thumbnails');

  $CONTENT .= $t->fetch('common/albumPassword.html');
}

/**#@+
 * Assign all the data to smarty
 */
$t->assign('breadcrumbHTML', $breadcrumbHTML);
$t->assign('CONTENT', $CONTENT);
$t->assign('SUB_TITLE', $album_name);
$t->assign('GALLERY_DESCRIPTION', $config->conf['gallery_description']);

$t->assign('lang_main_menu', $lang_main_menu);
$t->assign('lang_gallery_admin_menu', $lang_gallery_admin_menu);
$t->assign('lang_user_admin_menu', $lang_user_admin_menu);

if (!USER_ID) {
  $t->assign('loggedin', 0);
} else {
  $t->assign('loggedin', 1);
}

$t->assign('GALLERY_ADMIN_MODE', GALLERY_ADMIN_MODE);
$t->assign('USER_ADMIN_MODE', USER_ADMIN_MODE);
$t->assign('USER_CAN_CREATE_ALBUMS', $auth->isDefined("USER_CAN_CREATE_ALBUMS"));
$t->assign('USER_IS_ADMIN', $auth->isDefined("USER_IS_ADMIN"));
$t->assign('USER_CAN_UPLOAD_PICTURES', $auth->isDefined("USER_CAN_UPLOAD_PICTURES"));
$t->assign('REFERER', $REFERER);
$t->assign('cat', $cat);
$t->assign('USER_NAME', $auth->isDefined("USER_NAME"));
$t->assign('my_cat_id', FIRST_USER_CAT + $auth->isDefined("USER_ID"));

$t->assign('RSS', 1);
/**
 * Cleanup connections, freeze objects in session, set user cookie.
 */
include ('include/cleanUp.inc.php');

$t->display ('main.html');
?>
