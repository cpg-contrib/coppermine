<?php
/**
 * util.php
 *
 * Script to execute various admin tools and utilities
 *
 * @package cpgNG
 * @author Abbas <abbas@sanisoft.com>
 * @version $Id$
 */

/**#@+
 * Constant to prevent direct execution of config.inc.php
 */
define('IN_COPPERMINE', true);
define('UTIL_PHP', true);
/**#@-*/

require('include/init.inc.php');
//require('include/picmgmt.inc.php');

/**#@+
 * Include all the classes
 */
require_once('classes/cpgTemplate.class.php');
require_once('classes/cpgAdminUtils.class.php');
/**#@-*/

// Default number of pictures to process at a time when rebuilding thumbs or normals:
$miscArr['defpicnum'] = 45;

if (!GALLERY_ADMIN_MODE) cpgUtils::cpgDie(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);

$t = cpgTemplate::getInstance();

$action = (isset($_REQUEST['action'])) ? $_REQUEST['action'] : '';

if (!empty($action)) {
  /**
   * Start/Continue the session
   */
  session_start();

  cpgAdminUtils::$action();
}

$miscArr['help'] = '&nbsp;'.cpgUtils::cpgDisplayHelp('f=index.htm&as=admin_tools&ae=admin_tools_end&top=1', '600', '400');
$miscArr['langPressInstruction'] = sprintf($lang_util_php['instruction_press'], $lang_util_php['submit_form']);

$albumOptions = cpgAdminUtils::utilFillOptions();
$t->assign('albumOptions', $albumOptions);

/**#@+
 * Assign all the data to smarty
 */

$t->assign('SUB_TITLE', $lang_util_php['title']);
$t->assign('GALLERY_DESCRIPTION', $config->conf['gallery_description']);

$t->assign('miscArr', $miscArr);

$t->assign('lang_util_php', $lang_util_php);
$t->assign('lang_util_desc_php', $lang_util_desc_php);

if (!USER_ID) {
  $t->assign('loggedin', 0);
} else {
  $t->assign('loggedin', 1);
}

$t->assign('GALLERY_ADMIN_MODE', GALLERY_ADMIN_MODE);
$t->assign('USER_ADMIN_MODE', USER_ADMIN_MODE);
$t->assign('USER_CAN_CREATE_ALBUMS', $auth->isDefined("USER_CAN_CREATE_ALBUMS"));
$t->assign('USER_IS_ADMIN', $auth->isDefined("USER_IS_ADMIN"));
$t->assign('USER_CAN_UPLOAD_PICTURES', $auth->isDefined("USER_CAN_UPLOAD_PICTURES"));
$t->assign('REFERER', $REFERER);
$t->assign('USER_NAME', $auth->isDefined("USER_NAME"));
/**#@-*/

$t->assign("CONTENT", $t->fetchHTML("common/util.html"));

/**
 * Cleanup connections, freeze objects in session, set user cookie.
 */
include ('include/cleanUp.inc.php');

$t->display ('main.html');
?>
