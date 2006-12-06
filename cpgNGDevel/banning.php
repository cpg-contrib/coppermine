<?php

/**
 * banning.php
 *
 * This script is used to ban users from IPs to the gallery
 *
 * @package cpgNG
 * @author Amit <amit@sanisoft.com>
 * @version $Id$
 */

/**
 * Constant to prevent direct execution of config.inc.php
 */
define('IN_COPPERMINE', true);
define('BANNING_PHP', true);

/**
 * Require files
 */
require('include/init.inc.php');
require_once('classes/cpgTemplate.class.php');
require_once('classes/cpgProcessBan.class.php');

/**
 * If logged in member is not admin then stop further execution of script
 */
if (!GALLERY_ADMIN_MODE) cpgUtils::cpgDie(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);

/**
 * Create new template object
 */
$t = cpgTemplate::getInstance();

/**
 * Create new ban object
 */
$banObject = new cpgProcessBan;

/**
 * If admin chooses to add ban
 */
if (isset($_POST['add_ban'])) {
  /**
   * Call class method to add ban
   */
  $banObject->addBan();
}
/**
 * If admin chooses to delete ban
 */
else if (isset($_POST['delete_ban'])) {
  /**
   * Call class method to delete ban
   */
  $banObject->deleteBan();
}
/**
 * If admin chooses to update ban
 */
else if (isset($_POST['edit_ban'])) {
  /**
   * Call class method to update ban
   */
  $banObject->updateBan();
}

/**
 * Call class method to populate list of bans
 */
$banObject->listBans();

$t->assign('banContent', $banObject);
$t->assign('lang_banning_php', $lang_banning_php);
$t->assign('calendar_link_new', 'calendar.php?action=banning&amp;month='.ltrim(strftime('%m'), '0').'&amp;year='.strftime('%Y'));

/**
 * Fetch page content
 */
$t->assign('CONTENT', $t->fetchHTML('common/banning.html'));

/**
 * Code to display 'Logout' link
 */
$t->assign('loggedin', 1);

/**
 * Assign sub-title of page
 */
$t->assign('SUB_TITLE', $lang_banning_php['title']);

/**
 * Cleanup connections, freeze objects in session, set user cookie.
 */
include ('include/cleanUp.inc.php');

/**
 * Display common template
 */
$t->display('main.html');

?>
