<?php  
/* vim: set expandtab tabstop=4 shiftwidth=4: */
// +----------------------------------------------------------------------+
// | Filename: .php                                                           |
// +----------------------------------------------------------------------+
// | Copyright (c) http://www.sanisoft.com                                |
// +----------------------------------------------------------------------+
// | Description:                                                         |
// +----------------------------------------------------------------------+
// | Authors: Original Author <author@example.com>                        |
// |          SANIsoft Developement Team  <you@example.com>               |
// +----------------------------------------------------------------------+
//
// $Id$

define('IN_COPPERMINE', true);
define('EDITPICS_PHP', true);
require('include/init.inc.php');
if (!(GALLERY_ADMIN_MODE)) cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);
$query  = "SELECT keywords from {$CONFIG['TABLE_PREFIX']}pictures";
$result = db_query($query);
$i=0;
   while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) { 

    $keywords = $row["keywords"];
    $keyArr   = explode(" ",$keywords);
        foreach ($keyArr as $keyword) {
            $query = "SELECT keyword from {$CONFIG['TABLE_PREFIX']}dict WHERE keyword = '$keyword'";
            $result2 = db_query($query);
                            
            if (mysql_num_rows($result2) == 0 && $keyword != "" && $keyword != " ") {
                $query = "INSERT INTO {$CONFIG['TABLE_PREFIX']}dict SET keyword = '$keyword'";
                db_query($query);
                echo "* ";
				$i++ ;
            } else {
                echo "% ";
            }
        }
        mysql_free_result($result2);
        flush();
    }
echo "<br/>New keywords found = ".$i;
mysql_free_result($result);
?>
<br/>
<a href="keyword_select.php">Return</a>
