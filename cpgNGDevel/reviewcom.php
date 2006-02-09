<?php
/**
 * reviewcom.php
 *
 * Script to view/delete the comments added by all users.
 *
 * @package cpgNG
 * @author Aditya <adityamooley@sanisoft.com>
 * @version $Id$
 */

/**#@+
 * Constant to prevent direct execution of config.inc.php
 */
define('IN_COPPERMINE', true);
define('REVIEWCOM_PHP', true);
/**#@-*/

require('include/init.inc.php');

/**
 * If smilies is enabled then include smilies.inc.php
 */
if ($config->conf['enable_smilies']) {
  include('include/smilies.inc.php');
}


/**#@+
 * Include all the classes
 */
require_once('classes/cpgTemplate.class.php');
require_once('classes/cpgProcessComments.class.php');
/**#@-*/

if (!GALLERY_ADMIN_MODE) {
  cpgUtils::cpgDie(ERROR, $lang_errors['access_denied']);
}

$commentsObj = new cpgProcessComments;

/**
 * Delete any comments if selected by the user.
 */
$nb_com_del = 0;
if (isset($_POST['cid_array'])) {
  $affectedRows = $commentsObj->deleteSelectedComments();
  if ($affectedRows) {
    $miscArr['success']['deleted'] = sprintf($lang_reviewcom_php['n_comm_del'], $db->affectedRows());
  }
}

$query = "SELECT count(msg_id) AS commentCount FROM {$config->conf['TABLE_COMMENTS']} WHERE 1";
$db->query($query);
$commentCount = $db->f('commentCount');

if (!$commentCount) {
  cpgUtils::cpgDie(INFORMATION , $lang_reviewcom_php['no_comment']);
}

$start = isset($_GET['start']) ? (int)$_GET['start'] : 0;
$count = isset($_GET['count']) ? $_GET['count'] : 25;
$miscArr['start'] = $start;
$miscArr['count'] = $count;
$miscArr['nextTarget'] = $_SERVER['PHP_SELF'] . '?start=' . ($start + $count) . '&amp;count=' . $count;
$miscArr['prevTarget'] = $_SERVER['PHP_SELF'] . '?start=' . max(0, $start - $count) . '&count=' . $count;

$commentArr = $commentsObj->getAllComments($start, $count);

$t = new cpgTemplate;

/**#@+
 * Assign all the data to smarty
 */
$t->assign('SUB_TITLE', $lang_reviewcom_php['title']);
$t->assign('GALLERY_DESCRIPTION', $config->conf['gallery_description']);

$t->assign('commentArr', $commentArr);
$t->assign('commentCount', $commentCount);
$t->assign('miscArr', $miscArr);

$t->assign('lang_reviewcom_php', $lang_reviewcom_php);
$t->assign('lang_check_uncheck_all', $lang_check_uncheck_all);

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
$t->assign('cat', $cat);
$t->assign('USER_NAME', $auth->isDefined("USER_NAME"));
$t->assign('my_cat_id', FIRST_USER_CAT + $auth->isDefined("USER_ID"));
/**#@-*/

$t->assign("CONTENT", $t->fetchHTML("common/reviewcom.html"));

/**
 * Cleanup connections, freeze objects in session, set user cookie.
 */
include ('include/cleanUp.inc.php');

$t->display ('main.html');
$time_end = cpgGetMicroTime();
$time = round($time_end - $cpg_time_start, 3);
echo "TIME: ". $time;
?>