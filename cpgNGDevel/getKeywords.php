<?php

/**
 * getKeywords.php
 *
 * This script is used to get keywords for keyword suggest
 *
 * @package cpgNG
 * @author Amit <amit@sanisoft.com>
 * @version $Id$
 */

/**
 * Constant to prevent direct execution of config.inc.php
 */
define('IN_COPPERMINE', true);

/**
 * Require file
 */
require('include/init.inc.php');

/**
 * Store requested variable
 */
$kw = trim($_REQUEST['kw']);

if (ereg(' ', $kw) || empty($kw)) {
  echo 'NoResult';
  flush();
  exit;
}

/**
 * Query to select matching keywords from database table
 */
$query = 'SELECT keywords FROM '.$config->conf['TABLE_PICTURES']." WHERE keywords LIKE '$kw%' OR keywords LIKE '% $kw%'";
$db->query($query);

if ($db->nf() > 0) {
  $keywords = array();

  while ($row = $db->fetchRow()) {
    $dbKeywords = trim($row['keywords']);

    /**
     * If database record has more than one keyword
     */
    if (ereg(' ', $dbKeywords)) {
      $tmpArr = array();
      $tmpArr = explode(' ', $dbKeywords);

      sort($tmpArr);
      reset($tmpArr);

      foreach ($tmpArr as $tmpKeyword) {
        if (!empty($tmpKeyword) && strtolower(substr($tmpKeyword, 0, strlen($kw))) == strtolower($kw) && !in_array($tmpKeyword, $keywords)) {
          $keywords[] = $tmpKeyword;
        }
      }
    } else if (!empty($dbKeywords) && strtolower(substr($dbKeywords, 0, strlen($kw))) == strtolower($kw) && !in_array($dbKeywords, $keywords)) {
      $keywords[] = $dbKeywords;
    }
  }

  sort($keywords);
  reset($keywords);

  $str = 'new Array("'.implode('", "', $keywords).'")';

  echo $str;
  flush();
} else {
  echo 'NoResult';
  flush();
}

exit;

?>
