<?php
// ------------------------------------------------------------------------- //
// Coppermine Photo Gallery - RSS Feed                                      //
// ------------------------------------------------------------------------- //
// Copyright (C) Dr. Tarique Sani                                           //
// http://tariquesani.net/                                                  //
// ------------------------------------------------------------------------- //
// This program is free software; you can redistribute it and/or modify     //
// it under the terms of the GNU General Public License as published by     //
// the Free Software Foundation; either version 2 of the License, or        //
// (at your option) any later version.                                      //
// ------------------------------------------------------------------------- //
// Just put into the same directory as your coppermine installation         //
// ------------------------------------------------------------------------ //

/**
 * Constant to prevent direct execution of config.inc.php
 */
define('IN_COPPERMINE', true);
define('THUMBNAILS_PHP', true);
define('INDEX_PHP', true);
define('DISPLAYIMAGE_PHP', true);

/**
 * Include all the classes
 */
require('include/init.inc.php');
require_once('classes/cpgAlbumFactory.class.php');
require_once('classes/cpgTemplate.class.php');

/**
 * If smilies is enabled then include smilies.inc.php
 */
if ($config->conf['enable_smilies']) {
  include('include/smilies.inc.php');
}

$album = (isset($_GET['album'])) ? (int) $_GET['album'] : '';
$meta = get_magic_quotes_gpc() ? $_GET['meta'] : addslashes($_GET['meta']);
$cat = (isset($_GET['cat'])) ? (int) $_GET['cat'] : '';
$uid = (isset($_GET['uid'])) ? (int) $_GET['uid'] : -1;

if ((is_numeric($album) && empty($meta)) || (is_numeric($cat) && empty($meta))) {
    $meta = 'lastup';
}

$albumData = cpgAlbumFactory::getAlbumObj($meta);

$page = '';
$display_tabs = '';

// data to display
$data = $albumData->getThumbnailData($album, $cat, $page, $config->conf['thumbcols'], $config->conf['thumbrows'], true, true, $uid);

$misArr = array();
//Changes these to point to your site if the following is not giving correct results.
$link_url = $config->conf['ecards_more_pic_target']."displayimage.php?pid=";
$image_url = $config->conf['ecards_more_pic_target']."albums/";

$variables = array();
foreach ($data as $key => $value) {
    if (!is_array($value)) {
       $variables[$key] = $value;
       unset($data[$key]);
       continue;
    }
    $thumb_url = $value['image']['url'];
    $description = '<a href="' . $link_url . $value['pid'] . '"><img src="' . $thumb_url . '" border="1" vspace="2" hspace="2" align="left"></a>'.cpgUtils::bbDecode($value['caption']);

    $data[$key]['description'] = htmlentities($description);
}


$t = cpgTemplate::getInstance();

$misArr['galleryName'] = $config->conf['gallery_name'];
$misArr['picPath'] = $config->conf['ecards_more_pic_target'];
$misArr['galleryDescription'] = $config->conf['gallery_description'] . ' - ' . $variables['albumName'];
$misArr['generator'] = $config->conf['ecards_more_pic_target'] . 'rss.php';

$t->assign('link_url', $link_url);
$t->assign('misArr', $misArr);
$t->assign('data', $data);

header ("content-type: text/xml");

print $t->fetch('common/rss.html');

?>
