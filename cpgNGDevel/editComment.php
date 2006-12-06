<?php
/**
 * editComment.php
 *
 * Script to edit the comments on pictures
 *
 * @package cpgNG
 * @author Abbas <abbas@sanisoft.com>
 * @version $Id$
 */
define('IN_COPPERMINE', true);
define('DISPLAYIMAGE_PHP', true);
define('INDEX_PHP', true);
define('DB_INPUT_PHP', true);
//define('SMILIES_PHP', true);
error_reporting(E_ALL);
require('include/init.inc.php');

require_once('classes/cpgTemplate.class.php');
require_once('classes/cpgProcessComments.class.php');

/**
 * If smilies is enabled then include smilies.inc.php
 */
if ($config->conf['enable_smilies']) {
  include('include/smilies.inc.php');
}

if (isset($_POST['event'])) {
  $event = $_POST['event'];

  if (!($auth->isDefined("USER_CAN_POST_COMMENTS"))) cpgUtils::cpgDie(ERROR, $lang_errors['perm_denied'], __FILE__, __LINE__);

  /**
   * Create object of comment class
   */
  $commentsObj = new cpgProcessComments;
  $commentsObj->updateComment($_POST['msg_id'], $_POST['msg_author'], $_POST['msg_body']);

  $commentUpdated = 1;
}

if (isset($_GET['msg_id'])) {
  $msg_id = (int)$_GET['msg_id'];
} else {
  cpgUtils::cpgDie(ERROR, $lang_errors['non_exist_comment'], __FILE__, __LINE__);
}

$query = "SELECT msg_author, msg_body FROM {$config->conf['TABLE_COMMENTS']} WHERE msg_id = '$msg_id'";

$db->query($query);

if ($db->nf() == 0) {
  cpgUtils::cpgDie(ERROR, $lang_errors['non_exist_comment'], __FILE__, __LINE__);
}

$row = $db->fetchRow();

$comment = array (
                  'msg_id' => $msg_id,
                  'msg_author' => $row['msg_author'],
                  'msg_body' => $row['msg_body']
                 );

$t = cpgTemplate::getInstance();

if ($config->conf['enable_smilies']) {
  $comment['smilies'] = 'enabled';
} else {
  $comment['smilies'] = 'disabled';
}

if (isset($commentUpdated)) {
  $t->assign('commentUpdated', $commentUpdated);
  $t->assign('successMessage', $lang_display_comments['comment_updated']);
}
$t->assign('comment', $comment);
$t->assign('lang_display_comments', $lang_display_comments);
$t->assign('CONTENT', $t->fetchHTML('common/editComment.html'));
$t->assign('PAGE_TITLE', $config->conf['gallery_name']);
$t->assign('CHARSET', $config->conf['charset'] == 'language file' ? $lang_charset : $config->conf['charset']);

/**
 * Cleanup connections, freeze objects in session, set user cookie.
 */
include ('include/cleanUp.inc.php');

/**
 * Using print $t->fetchHTML() instead of $t->display() so that fallback for popup.html can be implemented.
 */
print $t->fetchHTML('common/popup.html');
?>
