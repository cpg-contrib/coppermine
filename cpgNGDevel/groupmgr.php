<?php
/**
 * groupmgr.php
 *
 * Script to add/edit/delete user groups
 *
 * @package cpgNG
 * @author Aditya <adityamooley@sanisoft.com>
 * @version $Id$
 */

/**#@+
 * Constant to prevent direct execution of config.inc.php
 */
define('IN_COPPERMINE', true);
define('GROUPMGR_PHP', true);

/**#@-*/

require('include/init.inc.php');

$auth->synchronize_groups();

/**#@+
 * Include all the classes
 */
require_once('classes/cpgTemplate.class.php');
require_once('classes/cpgProcessGroup.class.php');
/**#@-*/
if (!(GALLERY_ADMIN_MODE || USER_ADMIN_MODE)) {
  cpgUtils::cpgDie(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);
}

$groupObj = new cpgProcessGroup;

/**
 * If the form has been submitted by the user, process it first.
 */
if (isset($_POST) && count($_POST)) {
  $groupObj->processPostData();
}

/**
 * Help icons for column headings
 */
$miscArr['helpGroup'] = '&nbsp;' . cpgUtils::cpgDisplayHelp('f=index.htm&as=group_cp&ae=group_cp_end&top=1', '700', '500');
$miscArr['helpPermissions'] = '&nbsp;' . cpgUtils::cpgDisplayHelp('f=index.htm&as=group_cp_permissions&ae=group_cp_permissions_end&top=1', '500', '200');
$miscArr['helpPersonal'] = '&nbsp;' . cpgUtils::cpgDisplayHelp('f=index.htm&as=group_cp_personal&ae=group_cp_personal_end&top=1', '500', '200');
$miscArr['helpUploadMethod'] = '&nbsp;' . cpgUtils::cpgDisplayHelp('f=index.htm&as=group_cp_upload_method&ae=group_cp_upload_method_end&top=1', '700', '400');

/**
 * Array for default groups
 */
$defaultGroupNames = array(
        '1' => 'Administrators',
        '2' => 'Registered',
        '3' => 'Anonymous',
        '4' => 'Banned',
    );

$groupObj->getGroups($defaultGroupNames);


/**
 * Array of available fields.
 */
$fieldList = array('can_rate_pictures', 'can_send_ecards', 'can_post_comments', 'can_upload_pictures', 'pub_upl_need_approval', 'can_create_albums', 'priv_upl_need_approval');

$t = new cpgTemplate;
$t->assign('lang_groupmgr_php', $lang_groupmgr_php);
$t->assign('lang_byte_units', $lang_byte_units);
$t->assign('lang_check_uncheck_all', $lang_check_uncheck_all);
$t->assign('lang_yes', $lang_yes);
$t->assign('lang_no', $lang_no);

$t->assign('miscArr', $miscArr);
$t->assign('groupObj', $groupObj);
$t->assign('fieldList', $fieldList);
$t->assign('UDB_INTEGRATION', UDB_INTEGRATION);

$t->assign("CONTENT", $t->fetchHTML("common/groupmgr.html"));

/**
 * Assign lang array's
 */
$t->assign("SUB_TITLE", $lang_groupmgr_php['title']);

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