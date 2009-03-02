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
  Coppermine version: 1.4.21
  $HeadURL$
  $Revision$
  $Author$
  $Date$
**********************************************/

if (!defined('IN_COPPERMINE')) { die('Not in Coppermine...');}

// ADDED QUICK KEYWORDS FUNCTIONALITY 8/6/2004

$result = cpg_db_query("select keywords FROM {$CONFIG['TABLE_PICTURES']} WHERE keywords <> '' $ALBUM_SET");
if (mysql_num_rows($result)) {

  // Grab all keywords
  print '<br />';
  starttable("100%", $lang_search_php['keyword_list_title']);


  // Find unique keywords
  $keywords_array = array();

  while (list($keywords) = mysql_fetch_row($result)) {
      $array = explode(" ",$keywords);

      foreach($array as $word)
      {
       if (!in_array($word = utf_strtolower($word),$keywords_array)) $keywords_array[] = $word;
      }
  }

  // Sort selected keywords
  sort($keywords_array);
  $count = count($keywords_array);

  // Result to table
  echo '<tr><td class="tableb">' ;
  for ($i = 0; $i < $count; $i++) {
    if ($keywords_array[$i]) {     // Eliminates Null Keywords
    echo "<a href=\"thumbnails.php?album=search&amp;search=".$keywords_array[$i]."\">$keywords_array[$i]</a>";
    if ($i<$count-1) {                     // Eliminates Trailing Pipe after last keyword
      echo " | ";
    }
    }
  }
  echo "</td></tr>" ;
  if (GALLERY_ADMIN_MODE == true){
    $url = basename($_SERVER['PHP_SELF']);
    if ($url != "keywordmgr.php"){
    echo '<tr><td class="tableb" align="center">';
    echo '<a href="keywordmgr.php" class="admin_menu">' . $lang_search_php['edit_keywords'] . '</a>';
    echo "</td></tr>" ;
    }
  } else {
    echo '<tr><td class="tableb" align="center">';
    echo $lang_search_php['keyword_msg'];
    echo "</td></tr>" ;
  }

  endtable();
}
ob_end_flush();
?>