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
  $Source: /home/cvs/cpgNG/statDetails.php,v $
  $Revision$
  $Author: amit $
  $Date: 2006-04-24 12:06:27 +0530 (Mon, 24 Apr 2006) $
**********************************************/
/**
 * statDetails.php
 *
 * Script to show the vote and hits details of a particular picture
 *
 * @package cpgNG
 * @author Himlal Pun <Himlal@sanisoft.com>
 * @version $Id: statDetails.php 1 2006-04-24 06:36:27Z amit $
 */

/**
 * Constant to prevent direct execution of config.inc.php
 */
define('IN_COPPERMINE', true);
define('STAT_DETAILS_PHP', true);

/**
 * include classes
 */
include('include/init.inc.php');
require_once('classes/cpgManagePicture.class.php');
require_once('classes/cpgTemplate.class.php');
$objPic = new cpgManagePicture;

/**
 * check for picture id
 */
if (isset($_GET['pid']) && !empty($_GET['pid'])) {
    $pid = $_GET['pid'] ? (int)$_GET['pid'] : 0;
    $type_allowed = array('vote','hits');
} else {
    cpgUtils::cpgDie(ERROR, $lang_errors['param_missing']);
}

if (in_array($_GET['type'],$type_allowed) == TRUE) {
    $type = $_GET['type'];
} else {
    $type = 'hits';
}

if ($type == 'vote') {
    /**
     * display rating details only for logged in user or admin
     */
    $voteArr = $objPic->showRatingDetails($pid);
    $db_fields = array('sdate', 'ip', 'rating', 'referer', 'browser', 'os');
}
if ($type == 'hits') {
    $db_fields = array('sdate', 'ip', 'search_phrase', 'referer', 'browser', 'os');
}

/**
 * Fetch the vote and hits details like IP, referer if the user is ADMIN only
 */
if (GALLERY_ADMIN_MODE) {

        $checkArr = array();
        foreach ($db_fields as $value) {
            $checkArr[$value] = $_GET[$value] ? (int)$_GET[$value] : 0;
        }
        // sort the details, by the field
        if (isset($_GET['sort'])) {
            if (in_array($_GET['sort'],$db_fields) == TRUE) {
                $sort = $_GET['sort'];
            } else {
                $sort = 'sdate';
            }
        } else {
            $sort = 'sdate';
        }
        $misArr['sort'] = $sort;

        // sort the details ascending or descending
        if (isset($_GET['dir'])) {
            if ($_GET['dir'] == 'asc') {
                $dir = 'asc';
            } else {
                $dir = 'desc';
            }
        }
        $misArr['dir'] = $dir;

        if (isset($_GET['hide_internal'])) {
            if ($_GET['hide_internal'] == '0') {
                $hide_internal = 0;
            } else {
                $hide_internal = 1;
            }
        } else {
            $hide_internal = 0;
        }

        // fetch the date and display the format as selected
        if (isset($_GET['date_display'])) {
            if ($_GET['date_display'] == '0') {
                $date_display = 0;
                $date_display_fmt = $album_date_fmt;
            } elseif ($_GET['date_display'] == '1') {
                $date_display = 1;
                $date_display_fmt = $lastcom_date_fmt;
            } elseif ($_GET['date_display'] == '2') {
                $date_display = 2;
                $date_display_fmt = $log_date_fmt;
            } else {
                $date_display = 3;
                $date_display_fmt = '%Y-%m-%d %H:%M:%S';
            }
        } else {
            $date_display = 0;
            $date_display_fmt = $album_date_fmt;
        }

        $misArr['totalField'] = count($db_fields);
        // fetch the records for vote or hits details
        if ($type == 'vote') {
            $query = "SELECT * FROM {$config->conf['TABLE_VOTE_STATS']} WHERE pid='$pid' ORDER BY $sort $dir";
        }
        if ($type == 'hits') {
           $query = "SELECT * FROM {$config->conf['TABLE_HIT_STATS']} WHERE pid='$pid' ORDER BY $sort $dir";
        }
        $db->query($query);
        $rowset = $db->fetchRowSet();

        foreach ($db_fields as $value) {
            $show_column_checked[$value] = ($checkArr[$value] == '1') ? 'checked="checked"' : '';
        }

        if ($db->nf() > 0) {
            $j = 0;
            $is_internal = array();
            foreach ($rowset as $row) {
                $rowset[$j]['sdate'] = cpgUtils::localisedDate($row['sdate'],$date_display_fmt);
                //$rowset[$j]['sdate'] = strftime($date_display_fmt, cpgUtils::localisedTimestamp($row['sdate']));
                $is_internal[$j] = '';
                // is it an internal reference (most should be)?
                $match_coppermine_url = strpos($row['referer'],$config->conf['ecards_more_pic_target']);
                if ($match_coppermine_url === FALSE) {
                    // make the referer url clickable
                    $rowset[$j]['referer'] = '<a href="'.$row['referer'].'">'.ltrim($row['referer'],'http://').'</a>';
                } else {
                    // make the referer url clickable
                    $rowset[$j]['referer'] = $lang_stat_details_php['internal'].': <a href="'.$row['referer'].'">'.substr($row['referer'],strlen(rtrim($config->conf['ecards_more_pic_target'],'/'))).'</a>';
                    $is_internal[$j] = 1;
                }
                $j++;
            }
        }

        // display table footer with options
       $misArr['hide_internal_selected'] = ($hide_internal == '1') ? 'checked="checked"' : '';
       $misArr['date_display_0_selected'] = ($date_display == '0') ? 'selected="selected"' : '';
       $misArr['date_display_1_selected'] = ($date_display == '1') ? 'selected="selected"' : '';
       $misArr['date_display_2_selected'] = ($date_display == '2') ? 'selected="selected"' : '';
       $misArr['date_display_3_selected'] = ($date_display == '3') ? 'selected="selected"' : '';

       // generate date format for select box
       $misArr['first_fmt'] = strftime($album_date_fmt, cpgUtils::localisedTimestamp());
       $misArr['second_fmt'] = strftime($lastcom_date_fmt, cpgUtils::localisedTimestamp());
       $misArr['third_fmt'] = strftime($log_date_fmt, cpgUtils::localisedTimestamp());
       $misArr['fourth_fmt'] = strftime('%Y-%m-%d %H:%M:%S', cpgUtils::localisedTimestamp());

}

$misArr['pid'] = $pid;
$misArr['type'] = $type;

/**
 * assign all the values to template
 */
$t = new cpgTemplate;
$t->assign('show_column_checked', $show_column_checked);
$t->assign('db_fields', $db_fields);
$t->assign('rowset', $rowset);
$t->assign('is_internal', $is_internal);
$t->assign('checkArr', $checkArr);
$t->assign('voteArr', $voteArr);
$t->assign('misArr', $misArr);
$t->assign('PAGE_TITLE', $config->conf['gallery_name']);
$t->assign('lang_stat_details_php', $lang_stat_details_php);
$t->assign('CONTENT', $t->fetchHTML('common/statDetails.html'));

/**
 * Cleanup connections, freeze objects in session, set user cookie.
 */
include ('include/cleanUp.inc.php');

/**
 * Using print $t->fetchHTML() instead of $t->display() so that fallback for popup.html can be implemented.
 */
print $t->fetchHTML('common/popup.html');

?>
