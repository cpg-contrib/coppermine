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
  Coppermine version: 1.4.26
  $HeadURL$
  $Revision$
  $Author$
  $Date$
**********************************************/

define('IN_COPPERMINE', true);
define('RATEPIC_PHP', true);

require('include/init.inc.php');
// Check if required parameters are present
if (!isset($_GET['pic']) || !isset($_GET['rate'])) cpg_die(CRITICAL_ERROR, $lang_errors['param_missing'], __FILE__, __LINE__);

$pic = (int)$_GET['pic'];
$rate = (int)$_GET['rate'];

$rate = min($rate, 5);
$rate = max($rate, 0);

// If user does not accept script's cookies, we don't accept the vote
if (!isset($_COOKIE[$CONFIG['cookie_name'] . '_data'])) {
    header('Location: displayimage.php?pos=' . (- $pic));
    exit;
}

// If referer is not displayimage.php we don't accept the vote
if (!eregi("displayimage",$_SERVER["HTTP_REFERER"])){
    header('Location: displayimage.php?pos=' . (- $pic));
    exit;
}


// Retrieve picture/album information & check if user can rate picture
$sql = "SELECT a.votes as votes_allowed, p.votes as votes, pic_rating, owner_id " . "FROM {$CONFIG['TABLE_PICTURES']} AS p, {$CONFIG['TABLE_ALBUMS']} AS a " . "WHERE p.aid = a.aid AND pid = '$pic' LIMIT 1";
$result = cpg_db_query($sql);
if (!mysql_num_rows($result)) cpg_die(CRITICAL_ERROR, $lang_errors['non_exist_ap'], __FILE__, __LINE__);
$row = mysql_fetch_array($result);
mysql_free_result($result);
if (!USER_CAN_RATE_PICTURES || $row['votes_allowed'] == 'NO') cpg_die(ERROR, $lang_errors['perm_denied'], __FILE__, __LINE__);
// Clean votes older votes
$curr_time = time();
$clean_before = $curr_time - $CONFIG['keep_votes_time'] * 86400;
$sql = "DELETE " . "FROM {$CONFIG['TABLE_VOTES']} " . "WHERE vote_time < $clean_before";
$result = cpg_db_query($sql);
// Check if user already rated this picture
$user_md5_id = USER_ID ? md5(USER_ID) : $USER['ID'];
$sql = "SELECT * " . "FROM {$CONFIG['TABLE_VOTES']} " . "WHERE pic_id = '$pic' AND user_md5_id = '$user_md5_id'";
$result = cpg_db_query($sql);
if (mysql_num_rows($result)) cpg_die(ERROR, $lang_rate_pic_php['already_rated'], __FILE__, __LINE__);
//Test for Self-Rating
$user=USER_ID;
$owner=$row['owner_id'];

if (!empty($user) && $user==$owner && !USER_IS_ADMIN) cpg_die(ERROR, $lang_rate_pic_php['forbidden'], __FILE__, __LINE__);
// Update picture rating
$new_rating = round(($row['votes'] * $row['pic_rating'] + $rate * 2000) / ($row['votes'] + 1));
$sql = "UPDATE {$CONFIG['TABLE_PICTURES']} " . "SET pic_rating = '$new_rating', votes = votes + 1 " . "WHERE pid = '$pic' LIMIT 1";
$result = cpg_db_query($sql);
// Update the votes table
$sql = "INSERT INTO {$CONFIG['TABLE_VOTES']} " . "VALUES ('$pic', '$user_md5_id', '$curr_time')";
$result = cpg_db_query($sql);

/**
 * Code to record the details of hits for the picture if the option is set in CONFIG
 */
if ($CONFIG['vote_details']) {
	$client_details = cpg_determine_client();
	// Get the details of user browser, IP, OS, etc
	$os = $client_details['os'];
	$browser = $client_details['browser'];
	$time = time();
	$referer = addslashes(htmlentities($_SERVER['HTTP_REFERER']));
	// Insert the record in database
	$query = "INSERT INTO {$CONFIG['TABLE_VOTE_STATS']}
	                 SET
	                    pid = $pic,
	                    rating = $rate,
	                    Ip   = '$raw_ip',
	                    sdate = '$time',
	                    referer = '$referer',
	                    browser = '$browser',
	                    os = '$os'";
	cpg_db_query($query);
}

$location = "displayimage.php?pos=" . (- $pic);
$header_location = (@preg_match('/Microsoft|WebSTAR|Xitami/', getenv('SERVER_SOFTWARE'))) ? 'Refresh: 0; URL=' : 'Location: ';
header($header_location . $location);
pageheader($lang_info, "<META http-equiv=\"refresh\" content=\"1;url=$location\">");
msg_box($lang_info, $lang_rate_pic_php['rate_ok'], $lang_continue, $location);
pagefooter();
ob_end_flush();

?>
