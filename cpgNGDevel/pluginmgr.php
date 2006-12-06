<?php

/**
 * pluginmgr.php
 *
 * This script is used to manage plugins
 *
 * @package cpgNG
 * @author Amit <amit@sanisoft.com>
 * @version $Id: pluginmgr.php 9 2006-05-31 12:17:36Z amit $
 */

/**
 * Constant to prevent direct execution of config.inc.php
 */
define('IN_COPPERMINE', true);
define('PLUGINMGR_PHP', true);

/**
 * Require files
 */
require('include/init.inc.php');
require_once('classes/cpgTemplate.class.php');
require_once('classes/cpgPluginManager.class.php');

/**
 * If logged in member is not admin then stop further execution of script
 */
if (!GALLERY_ADMIN_MODE) cpgUtils::cpgDie(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);

/**
 * Create new template object
 */
$t = cpgTemplate::getInstance();

if (isset($_GET['op'])) {
  // Plugin's id
  $pluginId = (isset($_GET['p']) ? (int)$_GET['p'] : 0);

  switch ($_GET['op']) {
    // To upload a plugin
    case 'upload':
      cpgPluginManager::upload();
      break;

    // To delete a plugin
    case 'delete':
      cpgPluginManager::delete($pluginId);
      break;

    // To install a plugin
    case 'install':
      cpgPluginManager::install($pluginId);
      break;

    // To un-install a plugin
    case 'uninstall':
      cpgPluginManager::uninstall($pluginId);
      break;

    // To move down installed plugin
    case 'moved':
      cpgPluginManager::moveDown($pluginId);
      break;

    // To move up installed plugin
    case 'moveu':
      cpgPluginManager::moveUp($pluginId);
      break;

    // To activate installed plugin
    case 'activate':
      cpgPluginManager::activate($pluginId);
      break;

    // To de-activate installed plugin
    case 'deactivate':
      cpgPluginManager::deactivate($pluginId);
      break;

    default;
      break;
  }
}

/**
 * Get list of all installed plugins
 */
$installedPlugins = cpgPluginManager::getAllInstalledPlugins();

/**
 * Get list of all un-installed plugins
 */
$uninstalledPlugins = cpgPluginManager::getAllUninstalledPlugins();

$t->assign('installedPlugins', $installedPlugins);
$t->assign('lang_pluginmgr_php', $lang_pluginmgr_php);
$t->assign('uninstalledPlugins', $uninstalledPlugins);

/**
 * Fetch page content
 */
$t->assign('CONTENT', $t->fetchHTML('common/pluginmgr.html'));

/**
 * Code to display 'Logout' link
 */
$t->assign('loggedin', 1);

/**
 * Assign sub-title of page
 */
$t->assign('SUB_TITLE', $lang_pluginmgr_php['pmgr']);

/**
 * Cleanup connections, freeze objects in session, set user cookie.
 */
include ('include/cleanUp.inc.php');

/**
 * Display common template
 */
$t->display('main.html');

?>