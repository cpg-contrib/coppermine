<?php

/**
 * keywordmgr.php
 *
 * This script is used to manage pictures' keywords
 *
 * @package cpgNG
 * @author Amit <amit@sanisoft.com>
 * @version $Id$
 */

/**
 * Constant to prevent direct execution of config.inc.php
 */
define('IN_COPPERMINE', true);
define('KEYWORDMGR_PHP', true);
define('SEARCH_PHP', true);

/**
 * Require files
 */
require('include/init.inc.php');
require_once('classes/cpgTemplate.class.php');
require_once('classes/cpgProcessKeyword.class.php');

/**
 * If logged in member is not admin then stop further execution of script
 */
if (!GALLERY_ADMIN_MODE) cpgUtils::cpgDie(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);

/**
 * Create new template object
 */
$t = new cpgTemplate;

/**
 * Create new keyword object
 */
$kwObj = new cpgProcessKeyword;

/**
 * If admin wants to change a keyword
 */
if ($_GET['page'] == 'changeword') {
  $kwObj->updateKeyword();

  header('Location: keywordmgr.php');
  exit;
}
/**
 * If admin wants to delete a keyword
 */
if ($_GET['page'] == 'delete') {
  $kwObj->deleteKeyword();

  header('Location: keywordmgr.php');
  exit;
}

/**
 * To build keywords
 */
$kwObj->buildKeywords();

/**
 * Code to show/hide click-able keywords box
 */
if ($config->conf['clickable_keyword_search'] != 0) {
  $t->assign('showKeywordBox', 1);
}

$t->assign('kwObj', $kwObj);
$t->assign('lang_search_php', $lang_search_php);
$t->assign('lang_keywordmgr_php', $lang_keywordmgr_php);

/**
 * Fetch page content
 */
$t->assign('CONTENT', $t->fetchHTML('common/keywordmgr.html'));

/**
 * Code to display 'Logout' link
 */
$t->assign('loggedin', 1);

/**
 * Assign sub-title of page
 */
$t->assign('SUB_TITLE', $lang_keywordmgr_php['title']);

/**
 * Cleanup connections, freeze objects in session, set user cookie.
 */
include ('include/cleanUp.inc.php');

/**
 * Display common template
 */
$t->display('main.html');

?>
