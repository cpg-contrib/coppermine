<?php
/**
 * placeFile.php
 *
 * Script to resize and place the files in their respected albums.
 *
 * @package cpgNG
 * @author Abbas <abbas@sanisoft.com>
 * @version $Id$
 */

/**#@+
 * Constant to prevent direct execution of config.inc.php
 */
define('IN_COPPERMINE', true);
define('UPLOAD_PHP', true);
define('DB_INPUT_PHP', true);
define('ADMIN_PHP', true);
/**#@-*/

define("GIS_GIF", 1);
define("GIS_JPG", 2);
define("GIS_PNG", 3);

require('include/init.inc.php');

/**#@+
 * Include all the classes
 */
require_once('classes/cpgProcessPicture.class.php');
/**#@-*/

/**
 * Start/Continue the session
 */
session_start();

/**
 * Get the index
 */
$index = (int)$_GET['index'];

/**
 * If file upload info is not set in session or zero files are there then exit
 */
if (!count($_SESSION['fileUpload'])) {
  cpgUtils::cpgDie(ERROR, "No file to upload");
}

/**
 * Place the file in this album and insert the data in database
 */
$result = cpgProcessPicture::insertData($index);
header('Content-type: image/gif');
/**
 * Check whether the placement was successfull
 */
if ($result == 'ok' || $result == 'dup') {
  $result == 'ok' ? $file_name = 'images/up_ok.gif' : $file_name = 'images/up_dup.gif';
  echo fread(fopen($file_name, 'rb'), filesize($file_name));
} else {
  echo $result;
}
?>