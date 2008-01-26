<?php
/**
 * cpgClient.php - API for Coppermine 1.4
 *
 *
 * Tested with Coppermine 1.4
 *
 * @copyright Aditya Mooley <adityamooley@sanisoft.com>, Abbas Ali <abbas@sanisoft.com>, Tarique Sani <tarique@sanisoft.com>
 * @license http://opensource.org/licenses/gpl-license.php GNU General Public License version 3 of the License.
 *
 */
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
  $HeadURL$
  $Revision: 3513 $
  $LastChangedBy: gaugau $
  $Date: 2007-04-27 10:03:57 +0200 (Fr, 27 Apr 2007) $
**********************************************/
define('IN_COPPERMINE', true);
define('INDEX_PHP', true);

require ('cpgAPIinit.inc.php');

/**
 * get_subcat_data()
 *
 * function get the list of all the subcategories for the given category
 */
function get_subcat_data($parent, $ident='')
{
  global $CONFIG, $catStr, $parentAlubm;

  if ($parentAlubm != 1) {
    $parentAlubm = 1;
    if ($parent == 0) {
          $catStr .= "\n$ident<cat>
  $ident<id>$parent</id>
  $ident<name>Parent</name>";
    } else {
    $sql = "SELECT cid, name, description " . "FROM {$CONFIG['TABLE_CATEGORIES']} " . "WHERE cid = '$parent' " . "ORDER BY pos";
    $result = cpg_db_query($sql);
    $row = cpg_db_fetch_row($result);
    mysql_free_result($results);
    $catStr .= "\n$ident<cat>
  $ident<id>{$row['cid']}</id>
  $ident<name>{$row['name']}</name>";
    }
    get_album_data($parent, "  ");
  }

  if ($parent == 1) {
    /**
     * This is a user category and the categories inside this are not listed in categories table
     * So, we need to loop in the users table and create category id's and get the albums in it
     */
    if (USER_IS_ADMIN) {
      //Get all user albums
      $sql = "SELECT user_name, user_id FROM {$CONFIG['TABLE_USERS']}";
      $result = cpg_db_query($sql);
      if (($cat_count = mysql_num_rows($result)) > 0) {
        $rowset = cpg_db_fetch_rowset($result);
        foreach ($rowset as $cat) {
          $catStr .= "\n  $ident<cat>
            $ident<id>".(FIRST_USER_CAT + $cat['user_id'])."</id>
          $ident<name>{$cat['user_name']}</name>";
          get_album_data(FIRST_USER_CAT+$cat['user_id'], $ident."  ");
          $catStr .= "\n  $ident</cat>";
        }
      }
    } elseif (USER_ID) {
      //Get only current users albums
      $catStr .= "\n  $ident<cat>
      $ident<id>".(FIRST_USER_CAT + USER_ID)."</id>
      $ident<name>".USER_NAME."</name>";
      get_album_data(FIRST_USER_CAT + USER_ID, $ident."  ");
      $catStr .= "\n  $ident</cat>";
    }
  } else {
    $sql = "SELECT cid, name, description " . "FROM {$CONFIG['TABLE_CATEGORIES']} " . "WHERE parent = '$parent' " . "ORDER BY pos";
    $result = cpg_db_query($sql);

    if (($cat_count = mysql_num_rows($result)) > 0) {
      $rowset = cpg_db_fetch_rowset($result);
      $pos = 0;
      foreach ($rowset as $subcat) {
        $catStr .= "\n  $ident<cat>
      $ident<id>{$subcat['cid']}</id>
      $ident<name>{$subcat['name']}</name>";
        get_album_data($subcat['cid'], $ident."  ");
        get_subcat_data($subcat['cid'], $ident."  ");
        $catStr .= "\n  $ident</cat>";
      }
    }
  }
}

function get_album_data($category, $ident)
{
  global $CONFIG, $catStr, $ALBUM_SET;

  $sql = "SELECT aid,title FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = $category ".$ALBUM_SET;
  $result = cpg_db_query($sql);

  if (($cat_count = mysql_num_rows($result)) > 0) {
    $rowset = cpg_db_fetch_rowset($result);
    foreach ($rowset as $subcat) {
      $catStr .= "\n  $ident<album>
    $ident<id>{$subcat['aid']}</id>
    $ident<name>{$subcat['title']}</name>
  $ident</album>";
    }
  }
}

$xml = "<?xml version=\"1.0\" encoding=\"{$CONFIG['charset']}\" ?>\n<cpg>";
$catStr = "";
$parentAlubm = 0;
$cat = $_POST['cat'];
$cat = 0;
get_subcat_data($cat, '  ');

/**
 * If catStr is empty, then no categories are available.
 * Create the error xml
 */
if ($catStr == "") {
  //apidebug("Error Occured");
  cpg_die(23);
} else {
  if ($parentAlubm) {
    $catStr .= "\n  </cat>";
  }
  $xml .= $catStr . "\n</cpg>";
  //apidebug($xml);
  print $xml;
}
?>