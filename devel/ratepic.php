<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2007 Coppermine Dev Team
  v1.1 originally written by Gregory DEMAR

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation; either version 2 of the License, or
  (at your option) any later version.
  ********************************************
  Coppermine version: 1.5.0
  $HeadURL$
  $Revision$
  $LastChangedBy$
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
    header('Location: displayimage.php?pid=' . ($pic));
    exit;
}

// If referer is not displayimage.php we don't accept the vote
if (!eregi("displayimage",$_SERVER["HTTP_REFERER"])){
    header('Location: displayimage.php?pid=' . ($pic));
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
 * Code to record the details of votes for the picture if the option is set in CONFIG
 */
if ($CONFIG['vote_details']) {
        // Get the details of user browser, IP, OS, etc
        $os = "Unknown";
        if(eregi("Linux",$_SERVER["HTTP_USER_AGENT"])) {
            $os = "Linux";
        } else if(eregi("Ubuntu",$_SERVER["HTTP_USER_AGENT"])) {
            $os = "Linux Ubuntu";
        } else if(eregi("Debian",$_SERVER["HTTP_USER_AGENT"])) {
            $os = "Linux Debian";
        } else if(eregi("Windows NT 5.0",$_SERVER["HTTP_USER_AGENT"])) {
            $os = "Windows 2000";
        } else if(eregi("win98|Windows 98",$_SERVER["HTTP_USER_AGENT"])) {
            $os = "Windows 98";
        } else if(eregi("Windows NT 5.1",$_SERVER["HTTP_USER_AGENT"])) {
            $os = "Windows XP";
        } else if(eregi("Windows NT 5.2",$_SERVER["HTTP_USER_AGENT"])) {
            $os = "Windows 2003 Server";
        } else if(eregi("Windows NT 6.0",$_SERVER["HTTP_USER_AGENT"])) {
            $os = "Windows Vista";
        } else if(eregi("Windows CE",$_SERVER["HTTP_USER_AGENT"])) {
            $os = "Windows CE";
        } else if(eregi("Windows",$_SERVER["HTTP_USER_AGENT"])) {
            $os = "Windows";
        } else if(eregi("SunOS",$_SERVER["HTTP_USER_AGENT"])) {
            $os = "Sun OS";
        } else if(eregi("Macintosh",$_SERVER["HTTP_USER_AGENT"])) {
            $os = "Macintosh";
        } else if(eregi("Mac_PowerPC",$_SERVER["HTTP_USER_AGENT"])) {
            $os = "Mac OS";
        } else if(eregi("Mac_PPC",$_SERVER["HTTP_USER_AGENT"])) {
            $os = "Macintosh";
        } else if(eregi("OS/2",$_SERVER["HTTP_USER_AGENT"])) {
            $os = "OS/2";
        }

        $browser = 'Unknown';
        if(eregi("MSIE",$_SERVER["HTTP_USER_AGENT"])) {
            if(eregi("MSIE 5.5",$_SERVER["HTTP_USER_AGENT"])) {
                $browser = "IE5.5";
            } else if(eregi("MSIE 6.0",$_SERVER["HTTP_USER_AGENT"])) {
                $browser = "IE6";
            } else if(eregi("MSIE 7.0",$_SERVER["HTTP_USER_AGENT"])) {
                $browser = "IE7";
            } else if(eregi("MSIE 3.0",$_SERVER["HTTP_USER_AGENT"])) {
                $browser = "IE3";
            } else if(eregi("MSIE 4.0",$_SERVER["HTTP_USER_AGENT"])) {
                $browser = "IE4";
            } else if(eregi("MSIE 5.0",$_SERVER["HTTP_USER_AGENT"])) {
                $browser = "IE5.0";
            }
        } else if(eregi("Firebird",$_SERVER["HTTP_USER_AGENT"])) {
            $browser = "Mozilla Firebird";
        } else if(eregi("netscape",$_SERVER["HTTP_USER_AGENT"])) {
            $browser = "Netscape";
        } else if(eregi("Firefox",$_SERVER["HTTP_USER_AGENT"])) {
            $browser = "Firefox";
        } else if(eregi("Galeon",$_SERVER["HTTP_USER_AGENT"])) {
            $browser = "Galeon";
        } else if(eregi("Camino/",$_SERVER["HTTP_USER_AGENT"])) {
            $browser = "Camino/";
        } else if(eregi("Konqueror",$_SERVER["HTTP_USER_AGENT"])) {
            $browser = "Konqueror";
        } else if(eregi("Safari",$_SERVER["HTTP_USER_AGENT"])) {
            $browser = "Safari";
        } else if(eregi("OmniWeb",$_SERVER["HTTP_USER_AGENT"])) {
            $browser = "OmniWeb";
        } else if(eregi("Opera",$_SERVER["HTTP_USER_AGENT"])) {
            $browser = "Opera";
        } else if(eregi("amaya",$_SERVER["HTTP_USER_AGENT"])) {
            $browser = "Amaya";
        } else if(eregi("iCab",$_SERVER["HTTP_USER_AGENT"])) {
            $browser = "iCab";
        } else if(eregi("Lynx",$_SERVER["HTTP_USER_AGENT"])) {
            $browser = "Lynx";
        } else if(eregi("Googlebot",$_SERVER["HTTP_USER_AGENT"])) {
            $browser = "Googlebot";
        } else if(eregi("Lycos_Spider",$_SERVER["HTTP_USER_AGENT"])) {
            $browser = "Lycos Spider";
        } else if(eregi("Firefly",$_SERVER["HTTP_USER_AGENT"])) {
            $browser = "Fireball Spider";
        } else if(eregi("Advanced Browser",$_SERVER["HTTP_USER_AGENT"])) {
            $browser = "Avant";
        } else if(eregi("Amiga-AWeb",$_SERVER["HTTP_USER_AGENT"])) {
            $browser = "AWeb";
        } else if(eregi("Cyberdog",$_SERVER["HTTP_USER_AGENT"])) {
            $browser = "Cyberdog";
        } else if(eregi("Dillo",$_SERVER["HTTP_USER_AGENT"])) {
            $browser = "Dillo";
        } else if(eregi("DreamPassport",$_SERVER["HTTP_USER_AGENT"])) {
            $browser = "DreamCast";
        } else if(eregi("eCatch",$_SERVER["HTTP_USER_AGENT"])) {
            $browser = "eCatch";
        } else if(eregi("ANTFresco",$_SERVER["HTTP_USER_AGENT"])) {
            $browser = "Fresco";
        } else if(eregi("RSS",$_SERVER["HTTP_USER_AGENT"])) {
            $browser = "RSS";
        } else if(eregi("Avant",$_SERVER["HTTP_USER_AGENT"])) {
            $browser = "Avant";
        } else if(eregi("HotJava",$_SERVER["HTTP_USER_AGENT"])) {
            $browser = "HotJava";
        } else if(eregi("W3C-checklink|W3C_Validator|Jigsaw",$_SERVER["HTTP_USER_AGENT"])) {
            $browser = "W3C";
        } else if(eregi("K-Meleon",$_SERVER["HTTP_USER_AGENT"])) {
            $browser = "K-Meleon";
        }

        // Code to write the user id if a user is logged in
        $voteUserId = USER_ID;



        $time = time();

        $referer = urlencode(addslashes($_SERVER['HTTP_REFERER']));

        // Insert the record in database
        $query = "INSERT INTO {$CONFIG['TABLE_VOTE_STATS']}
                          SET
                            pid = $pic,
                            rating = $rate,
                            Ip   = '$raw_ip',
                            sdate = '$time',
                            referer = '$referer',
                            browser = '$browser',
                            os = '$os',
                            uid = '$voteUserId'";
        cpg_db_query($query);
}

$location = "displayimage.php?pid=" . ($pic);
$header_location = (@preg_match('/Microsoft|WebSTAR|Xitami/', getenv('SERVER_SOFTWARE'))) ? 'Refresh: 0; URL=' : 'Location: ';
header($header_location . $location);
pageheader($lang_common['information'], "<META http-equiv=\"refresh\" content=\"1;url=$location\">");
msg_box($lang_common['information'], $lang_rate_pic_php['rate_ok'], $lang_common['continue'], $location);
pagefooter();
ob_end_flush();

?>