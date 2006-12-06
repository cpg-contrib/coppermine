<?php
/**
 * $Id$
 */
define('IN_COPPERMINE', true);
define('DISPLAYIMAGE_PHP', true);
define('INDEX_PHP', true);
//define('SMILIES_PHP', true);

require('include/init.inc.php');

require_once('classes/cpgAlbumFactory.class.php');
require_once('classes/cpgTemplate.class.php');

if (!isset($_GET['pid'])) {
  cpgUtils::cpgDie(CRITICAL_ERROR, $lang_errors['param_mising'], __FILE__, __LINE__);
}

$returnUrl = $config->conf['ecards_more_pic_target'] . "displayimage.php?";
if (isset($_GET['album']) && !empty($_GET['album'])) {
  $album = $_GET['album'];
  $returnUrl .= "album=$album&";
}

if (isset($_GET['meta']) && !empty($_GET['meta'])) {
  $meta = $_GET['meta'];
  $returnUrl .= "meta=$meta&";
}

if (isset($_GET['cat']) && !empty($_GET['cat'])) {
  $cat = $_GET['cat'];
  $returnUrl .= "cat=$cat&";
}

$pid = (int)$_GET['pid'];
$interval = isset($_GET['slideshow']) ? $_GET['slideshow'] : 5000;

$albumData = cpgAlbumFactory::getAlbumObj(!empty($meta) ? $meta : $album);
$t = cpgTemplate::getInstance();

$i = 0;
$j = 0;
$start_img = '';
$pic_data = $albumData->getPicData(!empty($album) ? $album : 0, $picCount, $album_name, -1, -1, $cat);
foreach ($pic_data as $picture) {

    if($config->conf['thumb_use']=='ht' && $picture['pheight'] > $config->conf['picture_width'] ){ // The wierd comparision is because only picture_width is stored
      $condition = true;
    }elseif($config->conf['thumb_use']=='wd' && $picture['pwidth'] > $config->conf['picture_width']){
      $condition = true;
    }elseif($config->conf['thumb_use']=='any' && max($picture['pwidth'], $picture['pheight']) > $config->conf['picture_width']){
      $condition = true;
    }else{
     $condition = false;
    }

    if (is_image($picture['filename'])) {
        if ($config->conf['make_intermediate'] && $condition ) {
            $picture_url = $albumData->__getPicUrl($picture, 'normal');
        } else {
            $picture_url = $albumData->__getPicUrl($picture, 'fullsize');
        }

        $pics[$i] = $picture_url;
        if ($picture['pid'] == $pid) {
            $j = $i;
            $start_img = $picture_url;
        }
        $i++;
    }
}
if (!$i) {
    $pics[0] = 'images/thumb_document.jpg';
}

$t->assign('pics', $pics);
$t->assign('interval', $interval);
$t->assign('startPos', $j);
$t->assign('returnUrl', $returnUrl);
$t->assign('startImage', $start_img);
$t->assign('cellHeight', $config->conf['picture_width'] + 100);
$t->assign('lang_display_image_php', $lang_display_image_php);
$t->assign('CONTENT', $t->fetchHTML("common/slideShow.html"));

$t->assign('PAGE_TITLE', $config->conf['gallery_name'] . " - " . $lang_display_image_php['slideshow']);
$t->assign('GALLERY_DESCRIPTION', $config->conf['gallery_description']);

/**
 * Assign lang array's
 */
$t->assign('lang_main_menu', $lang_main_menu);
$t->assign('lang_gallery_admin_menu', $lang_gallery_admin_menu);

/**
 * Assign user related data
 */
if (!$auth->isDefined("USER_ID")) {
  $t->assign('login', 1);
}

/**
 * Assign user related data
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

/**
 * Cleanup connections, freeze objects in session, set user cookie.
 */
include ('include/cleanUp.inc.php');

$t->display('main.html');
?>