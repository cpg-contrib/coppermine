<?php

/**
 * db_ecard.php
 *
 * This script is used to manage ecards
 *
 * @package cpgNG
 * @author Amit <amit@sanisoft.com>
 * @version $Id$
 */

/**
 * Constant to prevent direct execution of config.inc.php
 */
define('IN_COPPERMINE', true);
define('DB_ECARD_PHP', true);

/**
 * Require files
 */
require('include/init.inc.php');
require_once('classes/cpgTemplate.class.php');
require_once('classes/cpgProcessEcard.class.php');

/**
 * If logged in member is not admin then stop further execution of script
 */
if (!GALLERY_ADMIN_MODE) cpgUtils::cpgDie(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);

$selectOptions = array(25 => 25, 50 => 50, 75 => 75, 100 => 100);

/**
 * Create new template object
 */
$t = new cpgTemplate;

/**
 * Create new ecard object
 */
$ecard = new cpgProcessEcard;

/**
 * Delete ecards
 */
if (count($_POST['eid']) > 0) {
  $ecard->deleteEcards();
}

/**
 * Build ecards
 */
$ecard->buildEcards();

$t->assign('ecard', $ecard);
$t->assign('selectOptions', $selectOptions);
$t->assign('lang_db_ecard_php', $lang_db_ecard_php);
$t->assign('help', cpgUtils::cpgDisplayHelp('f=index.htm&amp;as=ecard_log&amp;ae=ecard_log_end&top=1', '830', '400'));

/**
 * Fetch page content
 */
$t->assign('CONTENT', $t->fetchHTML('common/db_ecard.html'));

/**
 * Code to display 'Logout' link
 */
$t->assign('loggedin', 1);

/**
 * Assign sub-title of page
 */
$t->assign('SUB_TITLE', $lang_db_ecard_php['title']);

/**
 * Cleanup connections, freeze objects in session, set user cookie.
 */
include ('include/cleanUp.inc.php');

/**
 * Display common template
 */
$t->display('main.html');

?>
