<?php
// ------------------------------------------------------------------------- //
// Coppermine Photo Gallery 1.4.0                                            //
// ------------------------------------------------------------------------- //
// Copyright (C) 2002-2004 Gregory DEMAR                                     //
// http://www.chezgreg.net/coppermine/                                       //
// ------------------------------------------------------------------------- //
// Updated by the Coppermine Dev Team                                        //
// (http://coppermine.sf.net/team/)                                          //
// see /docs/credits.html for details                                        //
// ------------------------------------------------------------------------- //
// This program is free software; you can redistribute it and/or modify      //
// it under the terms of the GNU General Public License as published by      //
// the Free Software Foundation; either version 2 of the License, or         //
// (at your option) any later version.                                       //
// ------------------------------------------------------------------------- //
// $Id$
// ------------------------------------------------------------------------- //

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

$html_header =  <<<EOT
<html dir="ltr">
<head>
<title>Coppermine Photo Gallery - {$lang_votedetails_php['title']}</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="Pragma" content="no-cache" />
<link rel="stylesheet" href="themes/{$CONFIG['theme']}/style.css" />
<script type="text/javascript" src="scripts.js"></script>
</head>
<body>
<table width="75%" align="center" cellpadding="0" cellspacing="2" style="border: 1px solid #000000; background-color: #FFFFFF;"><tr><td colspan="2" class="tableh1" align="center">{$lang_votedetails_php["stats"]}</td></tr>
EOT;

//starttable("100%", $lang_votedetails_php['stats'], 2);

 while ($row = mysql_fetch_array($result)) {
   $voteArr[$row['rating']] = $row['totalVotes'];
 }
for ($i=0; $i<6;$i++){
  $voteArr[$i] = isset($voteArr[$i]) ? $voteArr[$i] : 0;
  $str .= '<tr class="tableh2"><td width="20%"><img src="images/rating'.$i.'.gif" /></td><td><img src="images/vote.jpg" width="'.$voteArr[$i]*10 .'" height="15" border="0" />'.$voteArr[$i].'</td></tr>';
}
//endtable();
$str .= "</table>";

/**
 * Fetch the vote details like IP, referer if the user is ADMIN
 */
if (GALLERY_ADMIN_MODE) {
$query = "SELECT * FROM {$CONFIG['TABLE_VOTE_STATS']} WHERE pid=$pid ORDER BY sdate";
$result = cpg_db_query($query);
//starttable("100%", $lang_votedetails_php['title'], 6);
$str .= '<br /><table width="100%" align="center" cellpadding="0" cellspacing="2" style="border: 1px solid #000000; background-color: #FFFFFF;"><tr><td colspan="6" class="tableh1" align="center">'.$lang_votedetails_php['title'].'</td></tr>';
$str .= '<tr class="tableb"><td>'.$lang_votedetails_php['date'].'</td><td>IP</td><td>'.$lang_votedetails_php['rating'].'</td><td>'.$lang_votedetails_php['referer'].'</td><td>'.$lang_votedetails_php['browser'].'</td><td>'.$lang_votedetails_php['os'].'</td></tr>';
if (mysql_num_rows($result) > 0) {
  while ($row = mysql_fetch_array($result)) {
    $str .= '<tr class="tableh2"><td>'.date('m-d-Y H:i:s', $row['sdate']).'</td><td>'.$row['ip']. '</td><td>'.$row['rating'].'</td><td>'.$row['referer'].'</td><td>'.$row['browser'].'</td><td>'.$row['os'].'</td></tr>';
  }
}
$str .= "</table>";
}
$html_footer = <<<EOT
</body>
</html>
EOT;
echo $html_header;
echo $str;
//echo $html_footer;
pagefooter();
?>