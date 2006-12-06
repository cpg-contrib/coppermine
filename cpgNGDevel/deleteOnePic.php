<?php

/**
 * deleteOnePic.php
 *
 * This script is used to delete a particular picture and all it's information (comments etc.)
 *
 * @package cpgNG
 * @author Amit <amit@sanisoft.com>
 * @version $Id$
 */

/**
 * Constant to prevent direct execution of config.inc.php
 */
define('IN_COPPERMINE', true);
define('DELETE_PHP', true);

/**
 * Require files
 */
require('include/init.inc.php');
require_once('classes/cpgTemplate.class.php');
require_once('classes/cpgProcessPicture.class.php');

$pid = (int)$_GET['pid'];

/**
 * Create new template object
 */
$t = cpgTemplate::getInstance();

/**
 * Code to call a method to delete a particular picture and all it's information (comments etc.)
 */
$picDetails = array();
$picDetails = cpgProcessPicture::deletePicture($pid);

$t->assign('picDetails', $picDetails);
$t->assign('lang_continue', $lang_continue);
$t->assign('lang_delete_php', $lang_delete_php);

/**
 * Fetch page content
 */
$t->assign('CONTENT', $t->fetchHTML('common/deleteOnePic.html'));

/**
 * Code to display 'Logout' link
 */
$t->assign('loggedin', 1);

/**
 * Assign sub-title of page
 */
$t->assign('SUB_TITLE', $lang_delete_php['del_pic']);

/**
 * Cleanup connections, freeze objects in session, set user cookie.
 */
include ('include/cleanUp.inc.php');

/**
 * Display common template
 */
$t->display('main.html');

?>
