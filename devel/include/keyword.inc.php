<?php
// ------------------------------------------------------------------------- //
// Coppermine Photo Gallery 1.4.0                                            //
// ------------------------------------------------------------------------- //
// Copyright (C) 2002-2004 Gregory DEMAR                                     //
// http://www.chezgreg.net/coppermine/                                       //
// ------------------------------------------------------------------------- //
// Updated by the Coppermine Dev Team                                        //
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
define('SEARCH_PHP', true);

// ADDED QUICK KEYWORDS FUNCTIONALITY 8/6/2004

// Grab all keywords
print '<br />';
starttable("100%", $lang_search_php['keyword_list_title']);

$result = mysql_query("select keywords from {$CONFIG['TABLE_PICTURES']}");
if (!mysql_num_rows($result)) cpg_die(ERROR, $lang_errors['non_exist_ap']);

// Find unique keywords
$keywords_array = array();

while (list($keywords) = mysql_fetch_row($result)) {
        $array = explode(" ",$keywords);

        foreach($array as $word)
        {
        if (!in_array($word,$keywords_array)) $keywords_array[] = $word;
       }
}

// Sort selected keywords
sort($keywords_array);
$count = count($keywords_array);

// Result to table
echo '<tr><td class="tableb">' ;
for ($i = 0; $i < $count; $i++) {
  echo "<a href=\"thumbnails.php?album=search&search=$keywords_array[$i]\">$keywords_array[$i]</a> | " ;

}
echo "</td></tr>" ;
if (GALLERY_ADMIN_MODE == true){
  $url = basename($_SERVER['PHP_SELF']);
  if ($url != "keywordmgr.php"){
    echo '<tr><td class="tableb" align="center">';
    echo '<a href="keywordmgr.php" class="admin_menu">Edit Keywords</a>';
    echo "</td></tr>" ;
  }
}
endtable();
ob_end_flush();
?>