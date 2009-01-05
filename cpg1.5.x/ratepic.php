<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2009 Coppermine Dev Team
  v1.1 originally written by Gregory DEMAR

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 3
  as published by the Free Software Foundation.

  ********************************************
  Coppermine version: 1.5.1
  $HeadURL$
  $Revision$
  $LastChangedBy$
  $Date$
**********************************************/

define('IN_COPPERMINE', true);
define('RATEPIC_PHP', true);

require('include/init.inc.php');
// Check if required parameters are present
if (!$superCage->get->keyExists('pic') || !$superCage->get->keyExists('rate')) {
    //send back voting failure to ajax request
	$send_back = array('status' => 'error', 'msg' => $lang_errors['param_missing']);
	echo json_encode($send_back);
	exit;
}
$rating_stars_amount = ($CONFIG['old_style_rating']) ? 5 : $CONFIG['rating_stars_amount'];

$pic = $superCage->get->getInt('pic');
$rate = $superCage->get->getInt('rate');

$rate = min($rate, $rating_stars_amount);
$rate = max($rate, 0);

// Retrieve picture/album information & check if user can rate picture
$sql = "SELECT a.votes as votes_allowed, p.votes as votes, pic_rating, owner_id " . "FROM {$CONFIG['TABLE_PICTURES']} AS p, {$CONFIG['TABLE_ALBUMS']} AS a " . "WHERE p.aid = a.aid AND pid = '$pic' LIMIT 1";
$result = cpg_db_query($sql);

if (!mysql_num_rows($result)) {
	//send back voting failure to ajax request
	$send_back = array('status' => 'error', 'msg' => $lang_errors['non_exist_ap']);
	echo json_encode($send_back);
	exit;
}
$row = mysql_fetch_array($result);
mysql_free_result($result);

if (!USER_CAN_RATE_PICTURES || $row['votes_allowed'] == 'NO') {
    //send back voting failure to ajax request
	$send_back = array('status' => 'error', 'msg' => $lang_errors['perm_denied']);
	echo json_encode($send_back);
	exit;
}

// Clean votes older votes
$curr_time = time();
$clean_before = $curr_time - $CONFIG['keep_votes_time'] * 86400;
$sql = "DELETE " . "FROM {$CONFIG['TABLE_VOTES']} " . "WHERE vote_time < $clean_before";
$result = cpg_db_query($sql);

// Check if user already rated this picture
$user_md5_id = USER_ID ? md5(USER_ID) : $USER['ID'];
$sql = "SELECT * " . "FROM {$CONFIG['TABLE_VOTES']} " . "WHERE pic_id = '$pic' AND user_md5_id = '$user_md5_id'";
$result = cpg_db_query($sql);

if (mysql_num_rows($result)) { 
	// user has already rated this file
	$send_back = array('status' => 'error', 'msg' => $lang_rate_pic_php['already_rated'], 'a' => $USER);
	echo json_encode($send_back);
	exit;
}


//Test for Self-Rating
if (!empty($user_id) && $user_id == $row['owner_id'] && !USER_IS_ADMIN) {
	$send_back = array('status' => 'error', 'msg' => $lang_rate_pic_php['forbidden']);
	echo json_encode($send_back);
	exit;
}


// Update picture rating
$new_rating = round(($row['votes'] * $row['pic_rating'] + ($rate * (5/$rating_stars_amount)) * 2000) / ($row['votes'] + 1));
$sql = "UPDATE {$CONFIG['TABLE_PICTURES']} " . "SET pic_rating = '$new_rating', votes = votes + 1 " . "WHERE pid = '$pic' LIMIT 1";
$result = cpg_db_query($sql);

// Update the votes table
$sql = "INSERT INTO {$CONFIG['TABLE_VOTES']} " . "VALUES ('$pic', '$user_md5_id', '$curr_time')";
$result = cpg_db_query($sql);

//
// Code to record the details of votes for the picture if the option is set in CONFIG
//
if ($CONFIG['vote_details']) {
    // Get the details of user browser, IP, OS, etc
    $client_details = cpg_determine_client();

    // Code to write the user id if a user is logged in
    $voteUserId = USER_ID;

    $time = time();

    $referer = urlencode($superCage->post->getEscaped('HTTP_REFERER'));

    // Insert the record in database
    $query = "INSERT INTO {$CONFIG['TABLE_VOTE_STATS']}
                      SET
                        pid = $pic,
                        rating = $rate,
                        Ip   = '$raw_ip',
                        sdate = '$time',
                        referer = '$referer',
                        browser = '{$client_details['browser']}',
                        os = '{$client_details['os']}',
                        uid = '$voteUserId'";
    cpg_db_query($query);
}
$new_rating = round(($new_rating / 2000) / (5/$rating_stars_amount), 1);
$new_rating_text = $lang_rate_pic_php['rate_ok'] . ' ' . sprintf($lang_rate_pic['rating'], $new_rating, $rating_stars_amount, $row['votes'] + 1);
$send_back = array('status' => 'success', 'msg' => $lang_rate_pic_php['rate_ok'], 'new_rating_text' => $new_rating_text, 'new_rating' => round($new_rating, 0));
echo json_encode($send_back);
exit;
?>