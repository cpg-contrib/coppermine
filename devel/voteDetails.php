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

define('IN_COPPERMINE', true);
define('VOTEDETAILS_PHP', true);
require('include/init.inc.php');

/**
 * Main Code
 */
 $pid = $_GET['pid'] ? (int)$_GET['pid'] : 0;

 $query = "SELECT rating, count(rating) AS totalVotes FROM {$CONFIG['TABLE_VOTE_STATS']} WHERE pid=$pid GROUP BY rating";
 $result = cpg_db_query($query);

$rateArr = array();

print  <<<EOT
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr">
<head>
    <title>Coppermine Photo Gallery - {$lang_votedetails_php['title']}</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <meta http-equiv="Pragma" content="no-cache" />
    <link rel="stylesheet" href="themes/{$CONFIG['theme']}/style.css" />
    <script type="text/javascript" src="scripts.js"></script>
</head>
<body>
EOT;

starttable("100%", $lang_votedetails_php['stats'], 2);

while ($row = mysql_fetch_array($result)) {
      $voteArr[$row['rating']] = $row['totalVotes'];
}
    for ($i=0; $i<6;$i++){
        $voteArr[$i] = isset($voteArr[$i]) ? $voteArr[$i] : 0;
        $width = $voteArr[$i]*10;
        echo <<<EOT
        <tr class="tableh2">
            <td width="20%">
                <img src="images/rating$i.gif" />
            </td>
            <td>
                <img src="images/vote.jpg" width="$width" height="15" border="0" alt="" />
                {$voteArr[$i]}
            </td>
        </tr>
EOT;
    }
endtable();

print "<br />\n";

/**
 * Fetch the vote details like IP, referer if the user is ADMIN
 */
if (GALLERY_ADMIN_MODE) {
    $query = "SELECT * FROM {$CONFIG['TABLE_VOTE_STATS']} WHERE pid=$pid ORDER BY sdate";
    $result = cpg_db_query($query);
    starttable("100%", $lang_votedetails_php['title'], 6);
    echo <<<EOT
        <tr>
            <td class="tableh2">
                {$lang_votedetails_php['date']}
            </td>
            <td class="tableh2">
                IP
            </td>
            <td class="tableh2">
                {$lang_votedetails_php['rating']}
            </td class="tableh2">
            <td class="tableh2">
                {$lang_votedetails_php['referer']}
            </td>
            <td class="tableh2">
                {$lang_votedetails_php['browser']}
            </td>
            <td class="tableh2">
                {$lang_votedetails_php['os']}
            </td>
        </tr>
EOT;
    if (mysql_num_rows($result) > 0) {
        while ($row = mysql_fetch_array($result)) {
        $votedate = date('Y-m-d H:i:s', $row['sdate']);
        echo <<<EOT
        <tr>
            <td class="tableb">
                $votedate
            </td>
            <td class="tableb">
                {$row['ip']}
            </td>
            <td class="tableb">
                {$row['rating']}
            </td>
            <td class="tableb">
                {$row['referer']}
            </td>
            <td class="tableb">
                {$row['browser']}
            </td>
            <td class="tableb">
                {$row['os']}
            </td>
        </tr>
EOT;
        }
    }
endtable();
}


?>
</body>
</html>