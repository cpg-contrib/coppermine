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
define('HITDETAILS_PHP', true);
require('include/init.inc.php');
if (!GALLERY_ADMIN_MODE) cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);

/**
 * Main Code
 */
 $pid = $_GET['pid'] ? (int)$_GET['pid'] : 0;

 echo  <<<EOT
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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

starttable('100%', $lang_hitdetails_php['title'], 7);
echo <<<EOT
        <tr>
            <td class="tableh2">
                {$lang_hitdetails_php['date']}
            </td>
            <td class="tableh2">
                IP
            </td>
            <td class="tableh2">
                {$lang_hitdetails_php['search_phrase']}
            </td>
            <td class="tableh2">
                {$lang_hitdetails_php['referer']}
            </td>
            <td class="tableh2">
                {$lang_hitdetails_php['browser']}
            </td>
            <td class="tableh2">
                {$lang_hitdetails_php['os']}
            </td>
        </tr>
EOT;
if (mysql_num_rows($result) > 0) {
    while ($row = mysql_fetch_array($result)) {
        $search_phrase = !empty($row['search_phrase']) ? $row['search_phrase'] : 'N / A';
        $hitdate = date('Y-m-d H:i:s', $row['sdate']);
        echo <<<EOT
        <tr>
            <td class="tableb">
                $hitdate
            </td>
            <td class="tableb">
                {$row['ip']}
            </td>
            <td class="tableb">
                $search_phrase
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
?>
</body>
</html>