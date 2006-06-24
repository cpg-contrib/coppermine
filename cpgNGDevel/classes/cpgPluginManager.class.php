<?php

/**
 * cpgPluginManager
 *
 * This class is used for plugin management
 *
 * @package cpgNG
 * @author amit
 * @copyright Copyright (c) 2006
 * @version $Id: cpgPluginManager.class.php 52 2006-06-20 12:36:33Z abbas $
 * @access public
 */
class cpgPluginManager
{
  /**
   * cpgPluginManager::invokePlugins()
   *
   * Method to include active plugins for a particular namespace
   *
   * @param String $namespace
   * @return
   */
  function invokePlugins($namespace)
  {
    // $t = Template class
    global $t;

    $db = cpgDb::getInstance(); // Database object
    $config = cpgConfig::getInstance(); // Config object
    $auth = cpgAuth::getInstance(); // Config object

    if (!$config->conf['enable_plugins']) {
      return;
    }

    // Query to fetch plugins for given namespace
    $query = "SELECT path FROM ".$config->conf['TABLE_PLUGINS']."
              WHERE installed = 'Y' AND active = 'Y'
                AND (namespaces = '$namespace' OR namespaces LIKE '$namespace,%'
                 OR namespaces LIKE '%,$namespace,%' OR namespaces LIKE '%,$namespace')
           ORDER BY priority ASC";
    $db->query($query);

    while ($row = $db->fetchRow()) {
      $pluginName = $row['path'];
      $pluginClassFile = dirname(__FILE__).'/../plugins/'.$pluginName.'/plugin.class.php';

      // If plugin's class file is available then include it once
      if (!is_file($pluginClassFile)) {
        continue;
      }

      @include_once($pluginClassFile);

      // If class does not exist
      if (!class_exists($pluginName)) {
        continue;
      }

      // Create class's object
      $pluginObj = new $pluginName;

      // If method does not exist for the class
      if (!method_exists($pluginObj, 'start')) {
        continue;
      }

      // Start the plugin
      $pluginObj->start($namespace, $t, $config, $db, $auth);
    }
  } // End of method 'invokePlugins'

  /**
   * cpgPluginManager::getAllInstalledPlugins()
   *
   * Method to get list of all installed plugins
   *
   * @param
   * @return Array $installedPlugins List of all installed plugins
   */
  function getAllInstalledPlugins()
  {
    // Initialize variables
    $currentRecord = 1;
    $installedPlugins = array();

    $db = cpgDb::getInstance(); // Database object
    $config = cpgConfig::getInstance(); // Config object

    // Query to get list of all installed plugins
    $query = "SELECT * FROM ".$config->conf['TABLE_PLUGINS']." WHERE installed = 'Y' ORDER BY priority ASC";
    $db->query($query);

    while ($row = $db->fetchRow()) {
      // Initialize variable
      $pluginInfo = array();

      // Store values in variables
      $pluginName = $row['path'];
      $pluginClassFile = dirname(__FILE__).'/../plugins/'.$pluginName.'/plugin.class.php';

      // If plugin's class file is available then include it once
      if (!is_file($pluginClassFile)) {
        continue;
      }

      @include_once($pluginClassFile);

      // If class does not exist
      if (!class_exists($pluginName)) {
        continue;
      }

      // Create class's object
      $pluginObj = new $pluginName;

      // If method exists for the class
      if (method_exists($pluginObj, 'getPluginInfo')) {
        // Get plugin's information
        $pluginInfo = $pluginObj->getPluginInfo();
      }

      $installedPlugins[] = array(
                                  'id' => (int)$row['id'],
                                  'active' => $row['active'],
                                  'name' => $pluginInfo['name'],
                                  'extra' => $pluginInfo['extra'],
                                  'author' => $pluginInfo['author'],
                                  'version' => $pluginInfo['version'],
                                  'description' => $pluginInfo['description']
                                  );
    }

    // Total number of installed plugins
    $totalRecords = count($installedPlugins);

    foreach ($installedPlugins as $key => $pluginDetails) {
      // Check if first record
      if ($currentRecord == 1) {
        $firstRecord = TRUE;
      } else {
        $firstRecord = FALSE;
      }

      // Check if las record
      if ($currentRecord == $totalRecords) {
        $lastRecord = TRUE;
      } else {
        $lastRecord = FALSE;
      }

      // If only one record is present
      if ($firstRecord && $lastRecord) {
        $installedPlugins[$key]['up'] = 'N';
        $installedPlugins[$key]['down'] = 'N';
      // If first record
      } else if ($firstRecord) {
        $installedPlugins[$key]['up'] = 'N';
        $installedPlugins[$key]['down'] = 'Y';
      // If last record
      } else if ($lastRecord) {
        $installedPlugins[$key]['up'] = 'Y';
        $installedPlugins[$key]['down'] = 'N';
      } else {
        $installedPlugins[$key]['up'] = 'Y';
        $installedPlugins[$key]['down'] = 'Y';
      }

      // Increment current record by 1
      $currentRecord++;
    }

    reset($installedPlugins);

    // Return list of all installed plugins
    return $installedPlugins;
  } // End of method 'getAllInstalledPlugins'

  /**
   * cpgPluginManager::getAllUninstalledPlugins()
   *
   * Method to get list of all un-installed plugins
   *
   * @param
   * @return Array $uninstalledPlugins List of all un-installed plugins
   */
  function getAllUninstalledPlugins()
  {
    // Initialize variable
    $uninstalledPlugins = array();

    $db = cpgDb::getInstance(); // Database object
    $config = cpgConfig::getInstance(); // Config object

    // Query to get list of all un-installed plugins
    $query = "SELECT * FROM ".$config->conf['TABLE_PLUGINS']." WHERE installed = 'N' ORDER BY path ASC";
    $db->query($query);

    while ($row = $db->fetchRow()) {
      // Initialize variable
      $pluginInfo = array();

      // Store values in variables
      $pluginName = $row['path'];
      $pluginClassFile = dirname(__FILE__).'/../plugins/'.$pluginName.'/plugin.class.php';

      // If plugin's class file is available then include it once
      if (!is_file($pluginClassFile)) {
        continue;
      }

      @include_once($pluginClassFile);

      // If class does not exist
      if (!class_exists($pluginName)) {
        continue;
      }

      // Create class's object
      $pluginObj = new $pluginName;

      // If method does for the class
      if (method_exists($pluginObj, 'getPluginInfo')) {
        // Get plugin's information
        $pluginInfo = $pluginObj->getPluginInfo();
      }

      $uninstalledPlugins[] = array(
                                    'id' => (int)$row['id'],
                                    'name' => $pluginInfo['name'],
                                    'extra' => $pluginInfo['extra'],
                                    'author' => $pluginInfo['author'],
                                    'version' => $pluginInfo['version'],
                                    'description' => $pluginInfo['description']
                                    );
    }

    // Return list of all un-installed plugins
    return $uninstalledPlugins;
  } // End of method 'getAllUninstalledPlugins'

  /**
   * cpgPluginManager::activate()
   *
   * Method to activate a plugin
   *
   * @param String $pluginId Plugin's id
   * @return
   */
  function activate($pluginId)
  {
    $db = cpgDb::getInstance(); // Database object
    $config = cpgConfig::getInstance(); // Config object

    // Query to activate a plugin
    $query = "UPDATE ".$config->conf['TABLE_PLUGINS']." SET active = 'Y' WHERE id = '$pluginId'";
    $db->query($query);
  } // End of method 'activate'

  /**
   * cpgPluginManager::deactivate()
   *
   * Method to de-activate a plugin
   *
   * @param String $pluginId Plugin's id
   * @return
   */
  function deactivate($pluginId)
  {
    $db = cpgDb::getInstance(); // Database object
    $config = cpgConfig::getInstance(); // Config object

    // Query to de-activate a plugin
    $query = "UPDATE ".$config->conf['TABLE_PLUGINS']." SET active = 'N' WHERE id = '$pluginId'";
    $db->query($query);
  } // End of method 'deactivate'

  /**
   * cpgPluginManager::moveDown()
   *
   * Method to low down the priority of a plugin
   *
   * @param String $pluginId Plugin's id
   * @return
   */
  function moveDown($pluginId)
  {
    $db = cpgDb::getInstance(); // Database object
    $config = cpgConfig::getInstance(); // Config object

    // Query to count total number of installed plugins
    $query = "SELECT COUNT(id) FROM ".$config->conf['TABLE_PLUGINS']." WHERE installed = 'Y' ORDER BY priority ASC";
    $db->query($query);

    $row = $db->fetchRow();

    // Total number of installed plugins
    $totalPlugins = $row[0];

    // Query to get priority for a plugin
    $query = "SELECT priority FROM ".$config->conf['TABLE_PLUGINS']." WHERE id = '$pluginId'";
    $db->query($query);

    $row = $db->fetchRow();

    // Plugin's priority
    $pluginPriority = (int)$row['priority'];

    if ($pluginPriority < $totalPlugins) {
      // Query to move the below plugin up
      $query = "UPDATE ".$config->conf['TABLE_PLUGINS']." SET priority = '$pluginPriority' WHERE priority = '".($pluginPriority + 1)."'";
      $db->query($query);

      // Query to move the current plugin down
      $query = "UPDATE ".$config->conf['TABLE_PLUGINS']." SET priority = '".($pluginPriority + 1)."' WHERE id = '$pluginId'";
      $db->query($query);
    }
  } // End of method 'moveDown'

  /**
   * cpgPluginManager::moveUp()
   *
   * Method to up the priority of a plugin
   *
   * @param String $pluginId Plugin's id
   * @return
   */
  function moveUp($pluginId)
  {
    $db = cpgDb::getInstance(); // Database object
    $config = cpgConfig::getInstance(); // Config object

    // Query to get priority for a plugin
    $query = "SELECT priority FROM ".$config->conf['TABLE_PLUGINS']." WHERE id = '$pluginId'";
    $db->query($query);

    $row = $db->fetchRow();

    // Plugin's priority
    $pluginPriority = (int)$row['priority'];

    if ($pluginPriority > 1) {
      // Query to move the above plugin down
      $query = "UPDATE ".$config->conf['TABLE_PLUGINS']." SET priority = '$pluginPriority' WHERE priority = '".($pluginPriority - 1)."'";
      $db->query($query);

      // Query to move the current plugin up
      $query = "UPDATE ".$config->conf['TABLE_PLUGINS']." SET priority = '".($pluginPriority - 1)."' WHERE id = '$pluginId'";
      $db->query($query);
    }
  } // End of method 'moveUp'

  /**
   * uninstall()
   *
   * Method to un-install a plugin
   *
   * @param String $pluginId Plugin's id
   * @return
   */
  function uninstall($pluginId)
  {
    $db = cpgDb::getInstance(); // Database object
    $config = cpgConfig::getInstance(); // Config object

    // Query to get path, priority and install details for a plugin
    $query = "SELECT path, priority, installed FROM ".$config->conf['TABLE_PLUGINS']." WHERE id = '$pluginId'";
    $db->query($query);

    $row = $db->fetchRow();

    // If plugin is already un-installed
    if ($row['installed'] == 'N') {
      return;
    }

    // Store values in variables
    $pluginName = $row['path'];
    $pluginPriority = (int)$row['priority'];
    $pluginClassFile = dirname(__FILE__).'/../plugins/'.$pluginName.'/plugin.class.php';

    // If plugin's class file is available then include it once
    if (!is_file($pluginClassFile)) {
      return;
    }

    @include_once($pluginClassFile);

    // If class does not exist
    if (!class_exists($pluginName)) {
      return;
    }

    // Create class's object
    $pluginObj = new $pluginName;

    // Initialize variable
    $uninstalled = TRUE;

    // If method exists for the class
    if (method_exists($pluginObj, 'uninstall')) {
      // Un-install plugin
      $uninstalled = $pluginObj->uninstall();
    }

    // If plugin's writer's un-install method returns TRUE
    if ($uninstalled) {
      // Query to mark plugin as un-installed
      $query = "UPDATE ".$config->conf['TABLE_PLUGINS']." SET installed = 'N', active = 'N', priority = '0' WHERE id = '$pluginId'";
      $db->query($query);

      // Query to change priority for other plugins
      $query = "UPDATE ".$config->conf['TABLE_PLUGINS']." SET priority = priority - 1 WHERE priority > $pluginPriority";
      $db->query($query);
    }
  } // End of method 'uninstall'

  /**
   * install()
   *
   * Method to install a plugin
   *
   * @param String $pluginId Plugin's id
   * @return
   */
  function install($pluginId)
  {
    $db = cpgDb::getInstance(); // Database object
    $config = cpgConfig::getInstance(); // Config object

    // Query to get path and install details for a plugin
    $query = "SELECT path, installed FROM ".$config->conf['TABLE_PLUGINS']." WHERE id = '$pluginId'";
    $db->query($query);

    $row = $db->fetchRow();

    // If plugin is already installed
    if ($row['installed'] == 'Y') {
      return;
    }

    // Store values in variables
    $pluginName = $row['path'];
    $pluginClassFile = dirname(__FILE__).'/../plugins/'.$pluginName.'/plugin.class.php';

    // If plugin's class file is available then include it once
    if (!is_file($pluginClassFile)) {
      return;
    }

    @include_once($pluginClassFile);

    // If class does not exist
    if (!class_exists($pluginName)) {
      return;
    }

    // Create class's object
    $pluginObj = new $pluginName;

    // Initialize variable
    $installed = TRUE;

    // If method exists for the class
    if (method_exists($pluginObj, 'install')) {
      // Install plugin
      $installed = $pluginObj->install();
    }

    // If plugin's writer's install method returns TRUE
    if ($installed) {
      // Query to get maximum priority
      $query = "SELECT MAX(priority) FROM ".$config->conf['TABLE_PLUGINS']." WHERE installed = 'Y'";
      $db->query($query);

      $row = $db->fetchRow();

      // Maximum priority
      $maxPriority = (int)$row[0];

      // Query to mark plugin as installed and in-active
      $query = "UPDATE ".$config->conf['TABLE_PLUGINS']." SET installed = 'Y', active = 'N', priority = '".($maxPriority + 1)."' WHERE id = '$pluginId'";
      $db->query($query);
    }
  } // End of method 'install'

  /**
   * delete()
   *
   * Method to delete a plugin
   *
   * @param String $pluginId Plugin's id
   * @return
   */
  function delete($pluginId)
  {
    $db = cpgDb::getInstance(); // Database object
    $config = cpgConfig::getInstance(); // Config object

    // Query to get path for a plugin
    $query = "SELECT path FROM ".$config->conf['TABLE_PLUGINS']." WHERE id = '$pluginId'";
    $db->query($query);

    // If plugin is not found for a id
    if ($db->nf() <= 0) {
      return;
    }

    $row = $db->fetchRow();

    $pluginName = $row['path']; // Plugin's name
    $pluginDirectory = dirname(__FILE__).'/../plugins/'.$pluginName; // Plugin's directory
    $pluginClassFile = $pluginDirectory.'/plugin.class.php'; // Plugin's class file

    // If plugin's class file is available then include it once
    if (!is_file($pluginClassFile)) {
      return;
    }

    @include_once($pluginClassFile);

    // If class does not exist
    if (!class_exists($pluginName)) {
      return;
    }

    // Create class's object
    $pluginObj = new $pluginName;

    // Initialize variable
    $deleted = true;

    // If method exists for the class
    if (method_exists($pluginObj, 'delete')) {
      // Delete plugin
      $deleted = $pluginObj->delete();
    }

    // If plugin's writer's delete method returns true
    if ($deleted) {
      // Delete plugin's directory and files recursively
      cpgUtils::deleteFoldersFilesRecursively($pluginDirectory);

      // Query to delete details of a plugin from database table
      $query = "DELETE FROM ".$config->conf['TABLE_PLUGINS']." WHERE id = '$pluginId'";
      $db->query($query);
    }
  } // End of method 'delete'

  /**
   * upload()
   *
   * Method to upload a plugin
   *
   * @param
   * @return
   */
  function upload()
  {
    global $lang_pluginmgr_php;

    $db = cpgDb::getInstance(); // Database object
    $config = cpgConfig::getInstance(); // Config object

    if (is_uploaded_file($_FILES['plugin']['tmp_name'])) {
      $fileDetails = $_FILES['plugin'];

      // If uploaded file's type is not 'zip', display error message
      if ($fileDetails['type'] != 'application/zip') {
        cpgUtils::cpgDie(CRITICAL_ERROR, $lang_pluginmgr_php['not_plugin_package'], __FILE__, __LINE__);
      }

      if (!is_dir(dirname(__FILE__).'/../plugins/receive')) {
        $mask = umask(0);
        mkdir(dirname(__FILE__).'/../plugins/receive', 0777);
        umask($mask);
      }

      if (!move_uploaded_file($fileDetails['tmp_name'], dirname(__FILE__).'/../plugins/receive/'.$fileDetails['name'])) {
        cpgUtils::cpgDie(CRITICAL_ERROR, $lang_pluginmgr_php['copy_error'], __FILE__, __LINE__);
      }

      require_once(dirname(__FILE__).'/../libs/zip.lib.php');

      $zip = new Zip();
      $zip->Extract(dirname(__FILE__).'/../plugins/receive/'.$fileDetails['name'], dirname(__FILE__).'/../plugins', array(-1));

      unlink(dirname(__FILE__).'/../plugins/receive/'.$fileDetails['name']);

      $fileInfo = pathinfo($fileDetails['name']);
      $fileName = explode('.', $fileInfo['basename']);

      $pluginName = $fileName[0]; // Plugin's name
      $pluginClassFile = dirname(__FILE__).'/../plugins/'.$pluginName.'/plugin.class.php'; // Plugin's class file

      // If plugin's class file is available then include it once
      if (!is_file($pluginClassFile)) {
        return;
      }

      @include_once($pluginClassFile);

      // If class does not exist
      if (!class_exists($pluginName)) {
        return;
      }

      // Create class's object
      $pluginObj = new $pluginName;

      // Initialize variable
      $uploaded = true;

      // If method exists for the class
      if (method_exists($pluginObj, 'upload')) {
        // Upload plugin
        $uploaded = $pluginObj->upload();
      }

      // If plugin's writer's upload method returns true
      if ($uploaded) {
        // Initialize variable
        $pluginNamespaces = array();

        // Get plugin's namespaces as a comma-separated string
        $pluginNamespaces = implode(',', $pluginObj->getPluginNamespaces());

        // Query to insert details of a plugin into database table
        $query = "INSERT INTO ".$config->conf['TABLE_PLUGINS']." SET path = '$pluginName', namespaces = '$pluginNamespaces', installed = 'N', active = 'N', priority = '0'";
        $db->query($query);
      }
    }
  } // End of method 'upload'
} // End of class 'cpgPluginManager'

?>