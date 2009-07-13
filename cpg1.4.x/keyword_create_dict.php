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

/* vim: set expandtab tabstop=4 shiftwidth=4: */
// +----------------------------------------------------------------------+
// | Filename: keyword_create_dict.php                                    |
// +----------------------------------------------------------------------+
// | Copyright (c) http://www.sanisoft.com                                |
// +----------------------------------------------------------------------+
// | Description:                                                         |
// +----------------------------------------------------------------------+
// | Authors: Original Author                                             |
// |          SANIsoft Developement Team                                  |
// +----------------------------------------------------------------------+


define('IN_COPPERMINE', true);
define('EDITPICS_PHP', true);
require('include/init.inc.php');
if (!(GALLERY_ADMIN_MODE)) cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);
$query  = "SELECT keywords from {$CONFIG['TABLE_PREFIX']}pictures";
$result = cpg_db_query($query);
$i=0;
   while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {

    $keywords = $row["keywords"];
    $keyArr   = explode(" ",$keywords);
        foreach ($keyArr as $keyword) {
            $query = "SELECT keyword from {$CONFIG['TABLE_PREFIX']}dict WHERE keyword = '$keyword'";
            $result2 = cpg_db_query($query);

            if (mysql_num_rows($result2) == 0 && $keyword != "" && $keyword != " ") {
                $query = "INSERT INTO {$CONFIG['TABLE_PREFIX']}dict SET keyword = '$keyword'";
                cpg_db_query($query);
                echo "* ";
                                $i++ ;
            } else {
                echo "% ";
            }
        }
        mysql_free_result($result2);
        flush();
    }
echo "<p>{$lang_editpics_php['new_keywords']} = ".$i;
echo "<br/>* = {$lang_editpics_php['new_keyword']}";
echo "<br/>% = {$lang_editpics_php['existing_keyword']}</p>";
mysql_free_result($result);
?>
