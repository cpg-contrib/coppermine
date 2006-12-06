<?php
/**
 * uplaod.php
 *
 * Script to show GUI toupload the pictures with javascript Add More functionality.
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

require('include/init.inc.php');

/**#@+
 * Include all the classes
 */
require_once('classes/cpgTemplate.class.php');
/**#@-*/

// Start the session
session_start();

if (isset($_SESSION['fileUpload'])) {
  unset($_SESSION['fileUpload']);
}

/**
  * Main code
  */
$t = cpgTemplate::getInstance();

/**
 * Check to see whether user has permission to upload the picture
 */
if(!USER_CAN_UPLOAD_PICTURES){
	cpgUtils::cpgDie(ERROR, $lang_errors['perm_denied'], __FILE__, __LINE__);
}

$listArray = cpgUtils::getAlbumListArray();

// Sort the pulldown options by category and album name
$listArray = cpgUtils::array_csort($listArray,'cat','title');

// Check to see if an album has been preselected by URL addition. If so, make $sel_album the album number. Otherwise, make $sel_album 0.
$sel_album = isset($_GET['album']) ? $_GET['album'] : 0;

/**
* Get the user fields that are set.
*/
$userFields = array();
for ($i = 1; $i <= 4; $i++) {
  if (!empty($config->conf["user_field".$i."_name"])) {
    $userFields[$i] = $config->conf["user_field".$i."_name"];
  }
}

/**
 * Get the number of maximum no. file boxes to show
 */
$maxNum = $auth->isDefined('NUM_FILE_BOXES');

/**
 * Get the maximum post size allowed
 */
$postMaxSize = ini_get('post_max_size');

$lang_upload_php['reg_instr_2'] = sprintf ($lang_upload_php['reg_instr_2'], $config->conf['max_upl_size'], $postMaxSize);

$t->assign("maxNum", $maxNum);
$t->assign("sel_album", $sel_album);
$t->assign("lang_continue", $lang_continue);
$t->assign("lang_upload_php", $lang_upload_php);
$t->assign("listArray", $listArray);
$t->assign("userFields", $userFields);
$t->assign("CONTENT", $t->fetchHTML("common/upload.html"));

/**
 * Assign lang array's
 */
$t->assign("lang_main_menu", $lang_main_menu);
$t->assign("lang_gallery_admin_menu", $lang_gallery_admin_menu);

$t->assign("allowRegistration", $config->conf['allow_user_registration']);
$t->assign("breadcrumbHTML", $breadcrumbHTML);
$t->assign("SUB_TITLE", $lang_upload_php['title']);

/**
 * Assign user related data
 */
if (!USER_ID) {
  $t->assign("loggedin", 0);
} else {
  $t->assign("loggedin", 1);
}

/**
* Cleanup connections, freeze objects in session, set user cookie.
*/
include ('include/cleanUp.inc.php');

/**
 * Display the common html file
 */
$t->display ("main.html");
?>