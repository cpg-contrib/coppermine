<?php

/**
 * zipdownload.php
 *
 * This script is used to download favorite pictures
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
 * Require files
 */
require('include/init.inc.php');
require_once('libs/archive.php');
require_once('classes/cpgTemplate.class.php');

if ($config->conf['enable_zipdownload'] != 1) cpgUtils::cpgDie($lang_error, $lang_errors['perm_denied'], __FILE__, __LINE__);

$filelist = array();

if (count($auth->favPics) > 0) {
  $favs = implode(', ', $auth->favPics);

  $selectColumns = 'filepath, filename';

  $query = "SELECT $selectColumns FROM ".$config->conf['TABLE_PICTURES']." WHERE approved = 'YES' AND pid IN ($favs)";
  $db->query($query);

  while ($row = $db->fetchRow()) {
    $filelist[] = $row['filepath'].$row['filename'];
  }
}

$flags['storepath'] = 0;
$cwd = './'.$config->conf['fullpath'];
$cwd = substr($cwd, 0, -1);

$zip = new zipfile($cwd, $flags);
$zip->addfiles($filelist);
$zip->filedownload('pictures.zip');

?>
