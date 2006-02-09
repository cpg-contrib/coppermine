<?php

/**
 * mode.php
 *
 * This script is used to switch from admin mode to user mode and vice versa
 *
 * @package cpgNG
 * @author Amit <amit@sanisoft.com>
 * @version $Id$
 */

/**
 * Constant to prevent direct execution of config.inc.php
 */
define('IN_COPPERMINE', true);
define('MODE_PHP', true);

/**
 * Require files
 */
require('include/init.inc.php');
require_once('classes/cpgTemplate.class.php');

if (!USER_IS_ADMIN) cpgUtils::cpgDie(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);

if (!isset($_GET['admin_mode']) || !isset($_GET['referer'])) cpgUtils::cpgDie(CRITICAL_ERROR, $lang_errors['param_missing'], __FILE__, __LINE__);

$adminMode = (int)$_GET['admin_mode'] ? 1 : 0;
$referer = $_GET['referer'] ? $_GET['referer'] : 'index.php';

$auth->user['am'] = $adminMode;
if (!$adminMode) $referer = 'index.php';

cpgUtils::msgBox($lang_info, $lang_mode_php[$adminMode], $lang_continue, $referer, -1, true);
exit;

?>
