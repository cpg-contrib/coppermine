<?php
/**
 * catmgr.php
 *
 * Script to add/edit/reorder categories
 *
 * @package cpgNG
 * @author Aditya <adityamooley@sanisoft.com>
 * @version $Id$
 */

/**#@+
 * Constant to prevent direct execution of config.inc.php
 */
define('IN_COPPERMINE', true);
define('CATMGR_PHP', true);
//define('DB_INPUT_PHP', true);
/**#@-*/

require('include/init.inc.php');

/**#@+
 * Include all the classes
 */
require_once('classes/cpgTemplate.class.php');
//require_once('classes/cpgProcessAlbum.class.php');
require_once('classes/cpgProcessCategory.class.php');
/**#@-*/

if (!GALLERY_ADMIN_MODE) {
  cpgUtils::cpgDie(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);
}

$categoryObj = new cpgProcessCategory;

/**
 * Get all the groups from the database.
 */
$query = "SELECT group_id, group_name FROM {$config->conf['TABLE_USERGROUPS']} ORDER BY group_name";
$db->query($query);
$groupList = $db->fetchRowset();

/**
 * If user has asked to sort the categories alphabetically, do it here.
 */
if (isset($_POST['update_config'])) {
  $value = $_POST['categories_alpha_sort'];
  $query = "UPDATE {$config->conf['TABLE_CONFIG']} SET value = '$value' WHERE name = 'categories_alpha_sort'";
  $db->query($query);
  $config->conf['categories_alpha_sort'] = $value;

  if ($config->conf['log_mode'] == CPG_LOG_ALL) {
    log_write('CONFIG UPDATE SQL: '.
              "UPDATE {$config->conf['TABLE_CONFIG']} SET value = '$value' WHERE name = 'categories_alpha_sort'\n".
              'TIME: '.date('F j, Y, g:i a')."\n".
              'USER: '.$auth->userData['user_name'],
              CPG_DATABASE_LOG);
  }
}

/**
 * If 'op' is set, there is some operation to be performed, call the function to perform the operation and then continue the script.
 */
if (isset($_GET['op'])) {
  $categoryObj->processCategory($_GET['op']);
}

/**
 * Fix categories that have an invalid parent
 */
$categoryObj->fixCatTable();

$categoryObj->buildCatData();

/**
 * Help icon for category
 */
$miscArr['categoryHelp'] = '&nbsp;' . cpgUtils::cpgDisplayHelp('f=index.htm&as=cat_cp&ae=albmgr&top=1', '600', '400');

/**
 * Help icon for bbcode
 */
if ($config->conf['show_bbcode_help']) {
  $miscArr['bbcodeHelp'] .= '&nbsp;'. cpgUtils::cpgDisplayHelp('f=index.html&base=64&h='.urlencode(base64_encode(serialize($lang_bbcode_help_title))).'&t='.urlencode(base64_encode(serialize($lang_bbcode_help))),470,245);
}

$t = new cpgTemplate;
$t->assign('groupList', $groupList);
$t->assign('lang_catmgr_php', $lang_catmgr_php);
$t->assign('lang_modifyalb_php', $lang_modifyalb_php);
$t->assign('categoryObj', $categoryObj);
$t->assign('categories_alpha_sort', $config->conf['categories_alpha_sort']);
$t->assign('lang_yes', $lang_yes);
$t->assign('lang_no', $lang_no);
$t->assign('miscArr', $miscArr);

$t->assign("CONTENT", $t->fetchHTML("common/catmgr.html"));

/**
 * Assign lang array's
 */
$t->assign("SUB_TITLE", $lang_catmgr_php['manage_cat']);

/**
* Cleanup connections, freeze objects in session, set user cookie.
*/
include ('include/cleanUp.inc.php');

/**
 * Display the common html file
 */
$t->display ("main.html");
?>
