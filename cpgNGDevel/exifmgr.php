<?php

/**
 * exifmgr.php
 *
 * This script is used to configure which data should be displayed in exif information of an image
 *
 * @package cpgNG
 * @author Amit <amit@sanisoft.com>
 * @version $Id$
 */

/**
 * Constant to prevent direct execution of config.inc.php
 */
define('IN_COPPERMINE', true);
define('DISPLAYIMAGE_PHP', true);

/**
 * Require files
 */
require('include/init.inc.php');
require_once('classes/cpgTemplate.class.php');
require_once('classes/cpgExifManager.class.php');

/**
 * If logged in member is not admin then stop further execution of script
 */
if (!GALLERY_ADMIN_MODE) cpgUtils::cpgDie(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);

/**
 * Create new template object
 */
$t = cpgTemplate::getInstance();

/**
 * Create new exif manager object
 */
$exifMgrObj = new cpgExifManager;

/**
 * If admin submits form
 */
if (isset($_POST['save'])) {
  $exifMgrObj->updateExifData();
}

/**
 * Build exif display data
 */
$exifMgrObj->buildExifData();

$t->assign('exifMgrObj', $exifMgrObj);
$t->assign('lang_picinfo', $lang_picinfo);
$t->assign('lang_check_uncheck_all', $lang_check_uncheck_all);

/**
 * Fetch page content
 */
$t->assign('CONTENT', $t->fetchHTML('common/exifmgr.html'));

/**
 * Code to display 'Logout' link
 */
$t->assign('loggedin', 1);

/**
 * Assign sub-title of page
 */
$t->assign('SUB_TITLE', $lang_picinfo['ManageExifDisplay']);

/**
 * Cleanup connections, freeze objects in session, set user cookie.
 */
include ('include/cleanUp.inc.php');

/**
 * Display common template
 */
$t->display('main.html');

?>
