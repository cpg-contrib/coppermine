<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2008 Dev Team
  v1.1 originally written by Gregory DEMAR

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 3
  as published by the Free Software Foundation.

  ********************************************
  Coppermine version: 1.5.0
  $HeadURL: https://coppermine.svn.sourceforge.net/svnroot/coppermine/trunk/cpg1.5.x/include/keyword.inc.php $
  $Revision: 5129 $
  $LastChangedBy: gaugau $
  $Date: 2008-10-18 16:03:12 +0530 (Sat, 18 Oct 2008) $
**********************************************/

if (!defined('IN_COPPERMINE')) { die('Not in Coppermine...');}

// ADDED QUICK KEYWORDS FUNCTIONALITY 8/6/2004

/*$result = cpg_db_query("select keywords FROM {$CONFIG['TABLE_PICTURES']} WHERE keywords <> '' $ALBUM_SET");
if (mysql_num_rows($result)) {	*/
########################		DB		##########################
$cpgdb->query($cpg_db_keyword_inc['get_pic_keywords'], $ALBUM_SET);
$rowset = $cpgdb->fetchRowSet();
if (count($rowset)) {
##############################################################
  // Grab all keywords
  print '<br />';
  starttable("100%", $lang_search_php['keyword_list_title']);


  // Find unique keywords
  $keywords_array = array();
  $keyword_count = array();

  /*while (list($keywords) = mysql_fetch_row($result)) {
    	list($keywords) = $row;*/
  foreach ($rowset as $row) {	#########	cpgdb_AL
	  $keywords = $row['keywords'];	#########	cpgdb_AL
      $array = explode(" ",$keywords);//print($keywords);exit;
      foreach($array as $word)
      {
       if (!in_array($word = utf_strtolower($word),$keywords_array)) {
        $keywords_array[] = $word;
        $keyword_count[$word] = 1;
       } else {
        $keyword_count[$word]++;
       }
      }
  }

  // Sort selected keywords
  sort($keywords_array);
  $count = count($keywords_array);

  $maxQuantity = max($keyword_count);
  $minQuantity = min($keyword_count);

  $spread = $maxQuantity - $minQuantity;

  //spread should be greater than zero
  if ($spread == 0) {
    $spread = 1;
  }

  $step = ((25 - 10) / $spread);

  // Result to table
  echo '<tr><td class="tableb">' ;
  for ($i = 0; $i < $count; $i++) {
    if ($keywords_array[$i]) {     // Eliminates Null Keywords

      $fontSize = (10 + ($keyword_count[$keywords_array[$i]] - $minQuantity) * $step);

      echo "<a href=\"thumbnails.php?album=search&amp;search=".$keywords_array[$i]."\" style=\"font-size: {$fontSize}px;\">$keywords_array[$i]</a>";
      if ($i<$count-1) {                     // Don't keep space after last keyword
        echo " ";
      }
    }
  }
  echo "</td></tr>" ;
  if (GALLERY_ADMIN_MODE == true) {
    $url = basename($CPG_PHP_SELF);
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