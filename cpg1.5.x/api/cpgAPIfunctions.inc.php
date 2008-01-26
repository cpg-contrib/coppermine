<?php
/**
 * functions.inc.php - API for Coppermine 1.4
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
// Connect to the database
/**
 * cpg_db_connect()
 *
 * Connect to the database
 **/

function cpg_db_connect()
{
        global $CONFIG;
        $result = @mysql_connect($CONFIG['dbserver'], $CONFIG['dbuser'], $CONFIG['dbpass']);
        if (!$result) {
                return false;
        }
        if (!mysql_select_db($CONFIG['dbname']))
                return false;
        return $result;
}

// Perform a database query

/**
 * cpg_db_query()
 *
 * Perform a database query
 *
 * @param $query
 * @param integer $link_id
 * @return
 **/

function cpg_db_query($query, $link_id = 0)
{
        global $CONFIG;

        if ($link_id) {
                                $result = mysql_query($query, $link_id);
        } else {
                                $result = mysql_query($query, $CONFIG['LINK_ID']);
        }

        if (!$result) {
          die("Erro while executing query \"$query\" on $link_id");
        }

        return $result;
}

// Fetch all rows in an array
/**
 * cpg_db_fetch_rowset()
 *
 * Fetch all rows in an array
 *
 * @param $result
 * @return
 **/

function cpg_db_fetch_rowset($result)
{
        $rowset = array();

        while ($row = mysql_fetch_array($result)) $rowset[] = $row;

        return $rowset;
}

// Error message if a query failed
/**
 * cpg_db_error()
 *
 * Error message if a query failed
 *
 * @param $the_error
 * @return
 **/

function cpg_db_error($the_error)
{
        global $CONFIG,$lang_errors;

        if (!$CONFIG['debug_mode']) {
            cpg_die(CRITICAL_ERROR, $lang_errors['database_query'], __FILE__, __LINE__);
        } else {

                $the_error .= "\n\nmySQL error: ".mysql_error()."\n";

                $out = "<br />".$lang_errors['database_query'].".<br /><br/>
                    <form name=\"mysql\"><textarea rows=\"8\" cols=\"60\">".htmlspecialchars($the_error)."</textarea></form>";

            die($out);
        }
}

function cpg_die($errCode)
{
/*
  $fp = fopen('log.txt', 'a');
  fwrite($fp, $str."\n");
  fclose($fp);
  exit;
*/
global $errArr, $CONFIG;
print "<?xml version=\"1.0\" encoding=\"{$CONFIG['charset']}\" ?>
<cpg>
  <status>fail</status>
  <error>$errCode</error>
  <verbose>".$errArr[$errCode]."</verbose>
</cpg>";
exit;
}

function debug($value)
{
 static $flag = false;
 if (!$flag) {
  $fp = fopen('debug.txt', 'w');
  $flag = true;
 } else {
  $fp = fopen('debug.txt', 'a');
 }
  fwrite($fp, $value."\n");
  fclose($fp);
}

/**
 * localised_date()
 *
 * Display a localised date
 *
 * @param integer $timestamp
 * @param $datefmt
 * @return
 **/

function localised_date($timestamp = -1, $datefmt)
{
    global $lang_month, $lang_day_of_week, $CONFIG;

    $timestamp = localised_timestamp($timestamp);

    $date = ereg_replace('%[aA]', $lang_day_of_week[(int)strftime('%w', $timestamp)], $datefmt);
    $date = ereg_replace('%[bB]', $lang_month[(int)strftime('%m', $timestamp)-1], $date);

    return strftime($date, $timestamp);
}

/**
 * localised_timestamp()
 *
 * Display a localised timestamp
 *
 * @return
 **/
function localised_timestamp($timestamp = -1)
{
        global $CONFIG;

        if ($timestamp == -1) {
        $timestamp = time();
    }

    $diff_to_GMT = date("O") / 100;

    $timestamp += ($CONFIG['time_offset'] - $diff_to_GMT) * 3600;

        return $timestamp;
}
?>