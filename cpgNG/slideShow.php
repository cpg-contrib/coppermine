<?php
/**
 * $Id$
 */
define('IN_COPPERMINE', true);
define('DISPLAYIMAGE_PHP', true);
define('INDEX_PHP', true);
//define('SMILIES_PHP', true);

require('include/init.inc.php');

require_once('classes/cpgNumericAlbumData.class.php');
require_once('classes/cpgTemplate.class.php');

if (!isset($_GET['album']) || !isset($_GET['pid'])) {
  cpg_die(CRITICAL_ERROR, $lang_errors['param_mising'], __FILE__, __LINE__);
}

$album = $_GET['album'];
$pid = (int)$_GET['pid'];
$interval = isset($_GET['slideshow']) ? $_GET['slideshow'] : 5000;

$albumData = new cpgNumericAlbumData;
$t = new cpgTemplate;

$i = 0;
$j = 0;
$start_img = '';
$pic_data = $albumData->__getPicData($album, $pic_count, $album_name, -1, -1, false);
foreach ($pic_data as $picture) {

    if($CONFIG['thumb_use']=='ht' && $picture['pheight'] > $CONFIG['picture_width'] ){ // The wierd comparision is because only picture_width is stored
      $condition = true;
    }elseif($CONFIG['thumb_use']=='wd' && $picture['pwidth'] > $CONFIG['picture_width']){
      $condition = true;
    }elseif($CONFIG['thumb_use']=='any' && max($picture['pwidth'], $picture['pheight']) > $CONFIG['picture_width']){
      $condition = true;
    }else{
     $condition = false;
    }

    if (is_image($picture['filename'])) {
        if ($CONFIG['make_intermediate'] && $condition ) {
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
$t->assign('album', $album);
$t->assign('startImage', $start_img);
$t->assign('cellHeight', $CONFIG['picture_width'] + 100);
$t->assign('lang_display_image_php', $lang_display_image_php);
$t->assign('CONTENT', $t->fetchHTML("common/slideShow.html"));

$t->assign('PAGE_TITLE', $CONFIG['gallery_name'] . " - " . $lang_display_image_php['slideshow']);
$t->assign('GALLERY_DESCRIPTION', $CONFIG['gallery_description']);

/**
 * Assign lang array's
 */
$t->assign('lang_main_menu', $lang_main_menu);
$t->assign('lang_gallery_admin_menu', $lang_gallery_admin_menu);

/**
 * Assign user related data
 */
if (!USER_ID) {
  $t->assign('login', 1);
}

/**
 * Assign user related data
 */

$t->assign('GALLERY_ADMIN_MODE', GALLERY_ADMIN_MODE);
$t->assign('USER_ADMIN_MODE', USER_ADMIN_MODE);
$t->assign('USER_CAN_CREATE_ALBUMS', USER_CAN_CREATE_ALBUMS);
$t->assign('USER_IS_ADMIN', USER_IS_ADMIN);
$t->assign('USER_CAN_UPLOAD_PICTURES', USER_CAN_UPLOAD_PICTURES);
$t->assign('REFERER', $REFERER);
$t->assign('cat', $cat);
$t->assign('USER_NAME', USER_NAME);
$t->assign('my_cat_id', FIRST_USER_CAT + USER_ID);
$t->display('main.html');
?>