<?php

/**
 * viewlog.php
 *
 * This script is used to view/delete log(s)
 *
 * @package cpgNG
 * @author Amit <amit@sanisoft.com>
 * @version $Id$
 */

/**
 * Constant to prevent direct execution of config.inc.php
 */
define('IN_COPPERMINE', true);
define('VIEWLOG_PHP', true);

/**
 * Require files
 */
require('include/init.inc.php');
require_once('classes/cpgTemplate.class.php');
require_once('classes/cpgProcessLogs.class.php');

if (!$auth->userData['has_admin_access']) {
  // Write access attempt to 'security' log file
  if ($config->conf['log_mode']) {
    log_write('Denied privilaged access to viewlog.php from user '.$auth->userData['user_name'].' at '.$_SERVER['REMOTE_HOST'].' on '.date('F j, Y, g:i a'), CPG_SECURITY_LOG);
  }

  cpgUtils::cpgDie(CRITICAL_ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);
}

/**
 * Create new template object
 */
$t = cpgTemplate::getInstance();

/**
 * Create new log object
 */
$logObj = new cpgProcessLogs;

if ($_GET['action'] == 'dall') {
  log_delete();
  exit;
} else if ($_GET['action'] == 'dthis' && !empty($_GET['log'])) {
  log_delete(addslashes($_GET['log']));
  exit;
} if (!empty($_GET['log'])) {
  /**
   * Display a partcular log
   */
  $logObj->displayLog();

  $t->assign('showLogText', 1);

  $subTitle = $lang_viewlog_php['view_log_title'].' '.$_GET['log'];
} else {
  /**
   * Display log list
   */
  $logObj->displayLogList();

  $subTitle = $lang_viewlog_php['title'];
}

$t->assign('logObj', $logObj);
$t->assign('lang_viewlog_php', $lang_viewlog_php);

/**
 * Fetch page content
 */
$t->assign('CONTENT', $t->fetchHTML('common/viewlog.html'));

/**
 * Code to display 'Logout' link
 */
$t->assign('loggedin', 1);

/**
 * Assign sub-title of page
 */
$t->assign('SUB_TITLE', $subTitle);

/**
 * Cleanup connections, freeze objects in session, set user cookie.
 */
include ('include/cleanUp.inc.php');

/**
 * Display common template
 */
$t->display('main.html');

?>
