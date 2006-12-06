<?php

/**
 * pluginmgr.php
 *
 * This script is used to manage bridges
 *
 * @package cpgNG
 * @author donnoman@donovanbray.com
 * @version $Id: pluginmgr.php 9 2006-05-31 12:17:36Z amit $
 */

/**
 * Constant to prevent direct execution of config.inc.php
 */
define('IN_COPPERMINE', true);
define('BRIDGEMGR_PHP', true);

/**
 * Require files
 */
require('include/init.inc.php');
require_once('classes/cpgTemplate.class.php');
require_once('classes/cpgBridgeManager.class.php');

/**
 * If logged in member is not admin then stop further execution of script
 */
if (!GALLERY_ADMIN_MODE) cpgUtils::cpgDie(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);

/**
 * Create new template object
 */
$t = cpgTemplate::getInstance();
$cpgBridgeManager = new cpgBridgeManager;

if (isset($_GET['op'])) {

  switch ($_GET['op']) {

    case 'choose':
     $cpgBridgeManager->choose();
     $t->assign('step','settings');
      break;

    case 'settings':
      $cpgBridgeManager->path();
      $t->assign('step','db_group');
      break;

    case 'db_group':
      $cpgBridgeManager->db_group();
      $t->assign('step','db_connect');
      break;

    case 'db_connect':
      $cpgBridgeManager->db_connect();
      $t->assign('step','db_tables');
      break;

    case 'db_tables':
      $cpgBridgeManager->db_tables();
      $t->assign('step','activate');
      break;

    case 'activate':
      $cpgBridgeManager->activate();
      break;

    case 'deactivate':
      $cpgBridgeManager->deactivate();
      break;
    
    case 'reset':
      $cpgBridgeManager->reset();
      break;

    default:
      break;
  }
} else {

}
$t->assign('availableBridges', $cpgBridgeManager->availableBridges);
$t->assign('installedBridge', $cpgBridgeManager->installedBridge);
$t->assign('bridgeEnable',$config->bridge_enable);
$t->assign('lang',$cpgBridgeManager->lang);


/**
 * Fetch page content
 */
$t->assign('CONTENT', $t->fetchHTML('common/bridgemgr.html'));

/**
 * Code to display 'Logout' link
 */
$t->assign('loggedin', 1);

/**
 * Assign sub-title of page
 */
$t->assign('SUB_TITLE', $lang_bridgemgr_php['bmgr']);

/**
 * Cleanup connections, freeze objects in session, set user cookie.
 */
include ('include/cleanUp.inc.php');

/**
 * Display common template
 */
$t->display('main.html');

?>