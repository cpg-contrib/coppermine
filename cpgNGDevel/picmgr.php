<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2005 Coppermine Dev Team
  v1.1 originaly written by Gregory DEMAR

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation; either version 2 of the License, or
  (at your option) any later version.
  ********************************************
  Coppermine version: 1.4.1
  $Source$
  $Revision$
  $Author$
  $Date$
**********************************************/
/**
 * picmgr.php
 *
 * Script to manage picture of particular album
 *
 * @package cpgNG
 * @author Himlal Pun <Himlal@sanisoft.com>
 * @version $Id$
 */

/**
 * Constant to prevent direct execution of config.inc.php
 */
define('IN_COPPERMINE', true);
define('PICMGR_PHP', true);
define('INDEX_PHP', true);

/**
 * Include all the classes
 */
include('include/init.inc.php');
require_once('classes/cpgTemplate.class.php');
require_once('classes/cpgManagePicture.class.php');

$objPicmgr = new cpgManagePicture;

if (!(GALLERY_ADMIN_MODE || USER_ADMIN_MODE)) {
    cpgUtils::cpgDie(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);
}

$misArr = array();
// display list of files of selected album
if (GALLERY_ADMIN_MODE || USER_ADMIN_MODE) {
    $aid = isset($_GET['aid']) ? $_GET['aid'] : 0;
    $misArr['aid'] = $aid;
    $sql = "SELECT aid, pid, filename FROM {$config->conf['TABLE_PICTURES']} WHERE aid = $aid ORDER BY position ASC, pid";
    $db->query($sql);
    $rowset = $db->fetchRowSet();
    $misArr['listSize'] = min(max(count ($rowset)+3,15), 40);
    $i = 100;
    $j = 100;
    $sort_order = '';
    if (count ($rowset) > 0) {
        foreach ($rowset as $picture) {
            $sort_order .= $picture['pid'].'@'.($i++).',';
            $picArr[] = array('value'  => 'picture_no=' . $picture['pid'] .',picture_nm=' . $picture['filename'] .',picture_sort=' .($j++). ',action=0',
                              'label'  => stripslashes($picture['filename']));
        }
    }

    //$albumList = $objPicmgr->get_album_data(FIRST_USER_CAT + $auth->isDefined('USER_ID'),'');
    $albumRecord = $objPicmgr->albumselect();

    if (!$aid) {
        $misArr['noAlbum'] = 1;
    }

} else {
    cpgUtils::cpgDie(ERROR, $lang_errors['perm_denied'], __FILE__, __LINE__);
}
if ($config->conf['default_sort_order'] != 'pa' && $config->conf['default_sort_order'] != 'pd') {
    $misArr['sort'] = 1;
}

/**
 * call function to finally sort out(change the sequence) the pictures
 */
if (isset($_POST['sort_order']) && !empty($_POST['sort_order'])) {
    $objPicmgr->sortedFiles();
}

$t = new cpgTemplate;

/**
 * Assign all the data to smarty
 */
$t->assign('picArr', $picArr);
$t->assign('misArr', $misArr);
$t->assign('albumRecord', $albumRecord);
$t->assign('sort_order', $sort_order);
$t->assign('SUB_TITLE', $lang_picmgr_php['pic_mgr']);
$t->assign('lang_picmgr_php', $lang_picmgr_php);
$t->assign('CONTENT', $t->fetchHTML('common/picmgr.html'));

/**
 * Cleanup connections, freeze objects in session, set user cookie.
 */
include ('include/cleanUp.inc.php');

$t->display ('main.html');

?>
