<?php

/**
 * search.php
 *
 * This script is used to search pictures
 *
 * @package cpgNG
 * @author Amit <amit@sanisoft.com>
 * @version $Id$
 */

/**
 * Constant to prevent direct execution of config.inc.php
 */
define('IN_COPPERMINE', true);
define('SEARCH_PHP', true);

/**
 * Require files
 */
require('include/init.inc.php');
require_once('classes/cpgSearch.class.php');
require_once('classes/cpgTemplate.class.php');

/**
 * Create new template object
 */
$t = cpgTemplate::getInstance();

/**
 * Create new search object
 */
$searchObj = new cpgSearch;

/**
 * To build custom fields
 */
$searchObj->buildCustomFields();

/**
 * To show/hide IP field
 */
if (GALLERY_ADMIN_MODE) {
  $t->assign('showIpField', 1);
}

/**
 * To build keywords
 */
if ($config->conf['clickable_keyword_search'] != 0) {
  $searchObj->buildKeywords();

  $t->assign('showKeywordBox', 1);
  
  if (GALLERY_ADMIN_MODE) {
    $t->assign('showKeywordManagerLink', 1);
  }
}

$t->assign('searchObj', $searchObj);
$t->assign('lang_adv_opts', $lang_adv_opts);
$t->assign('lang_search_php', $lang_search_php);

/**
 * Fetch page content
 */
$t->assign('CONTENT', $t->fetchHTML('common/search.html'));

/**
 * Code to show/display 'Logout' link
 */
if (!USER_ID) {
  $t->assign('loggedin', 0);
} else {
  $t->assign('loggedin', 1);
}

/**
 * Assign sub-title of page
 */
$t->assign('SUB_TITLE', $lang_search_php['title']);

/**
 * Cleanup connections, freeze objects in session, set user cookie.
 */
include ('include/cleanUp.inc.php');

/**
 * Display common template
 */
$t->display('main.html');

?>
