<?php
// ------------------------------------------------------------------------- //
// Coppermine Photo Gallery 1.4.1                                            //
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
define('HITDETAILS_PHP', true);
require('include/init.inc.php');
if (!GALLERY_ADMIN_MODE) cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);

/**
 * Main Code
 */
 $pid = $_GET['pid'] ? (int)$_GET['pid'] : 0;
 
 $html_header =  <<<EOT
<html dir="ltr">
<head>
<title>Coppermine Photo Gallery - {$lang_hitdetails_php['title']}</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="Pragma" content="no-cache" />
<link rel="stylesheet" href="themes/{$CONFIG['theme']}/style.css" />
<script type="text/javascript" src="scripts.js"></script>
</head>
<body>
EOT;

/**
 * Fetch the vote details like IP
 */
$query = "SELECT * FROM {$CONFIG['TABLE_HIT_STATS']} WHERE pid=$pid ORDER BY sdate";
$result = cpg_db_query($query);

$str = '<br /><table width="100%" align="center" cellpadding="0" cellspacing="2" style="border: 1px solid #000000; background-color: #FFFFFF;"><tr><td colspan="7" class="tableh1" align="center">'.$lang_hitdetails_php['title'].'</td></tr>';
$str .= '<tr class="tableb"><td>'.$lang_hitdetails_php['date'].'</td><td>IP</td><td>'.$lang_hitdetails_php['search_phrase'].'</td><td>'.$lang_hitdetails_php['referer'].'</td><td>'.$lang_hitdetails_php['browser'].'</td><td>'.$lang_hitdetails_php['os'].'</td></tr>';
if (mysql_num_rows($result) > 0) {
  while ($row = mysql_fetch_array($result)) {
    $search_phrase = !empty($row['search_phrase']) ? $row['search_phrase'] : 'N / A';
    $str .= '<tr class="tableh2"><td>'.date('m-d-Y H:i:s', $row['sdate']).'</td><td>'.$row['ip'].'</td><td>'.$search_phrase.'</td> <td>'.$row['referer'].'</td><td>'.$row['browser'].'</td><td>'.$row['os'].'</td></tr>';
  }
}
$str .= "</table>";

$html_footer = <<<EOT
</body>
</html>
EOT;
echo $html_header;
echo $str;
pagefooter();
?>
