<?php
// ------------------------------------------------------------------------- //
//  Open Plugin API (Open PAPI) for Coppermine Photo Gallery                 //
// ------------------------------------------------------------------------- //
//  Copyright (C) 2004  Christopher Brown-Floyd                              //
//  http://www.brownfloyd.com/                                               //
//  Written for Coppermine Photo Gallery                                     //
// ------------------------------------------------------------------------- //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
// ------------------------------------------------------------------------- //

global $thisplugin;                     // Stores the current plugin being processed
global $CPG_PLUGINS;                    // Stores all the plugins

$CPG_PLUGINS = array();                 // Initialize the plugin array

define('CPG_EXEC_ALL','all');           // Define CPG_EXEC_ALL
define('CPG_EXEC_FIRST', 'first');      // Define CPG_EXEC_FIRST
define('CPG_EXEC_NEW', 'new');          // Define CPG_EXEC_NEW


// Store the table name in CONFIG
$CONFIG['TABLE_PLUGINS']                = $CONFIG['TABLE_PREFIX'].'plugins';

/**
 * Local plugin class
 * Processes all the plugins (filters,actions,install,uninstall)
 */
class CPGPluginAPI {

    /**
     * CPGPluginAPI::load()
     *
     * Load all the plugins into the global CPG_PLUGINS array
     *
     * @param N/A
     * @return N/A
     **/

    function load() {
        global $CONFIG,$thisplugin,$USER_DATA,$CPG_PLUGINS,$lang_plugin_api;

        // Register page_end action for shutdown
        register_shutdown_function('cpg_action_page_end');

        // Register plugin_sleep action for shutdown
        register_shutdown_function(array('CPGPluginAPI','sleep'));

        // Get the installed plugins from the database and sort them by execution priority
        $sql = 'select * from '.$CONFIG['TABLE_PLUGINS'].' order by priority asc;';
        $result = db_query($sql);

        // Exit if no plugins are installed
        if (mysql_num_rows($result)==0) {
            return;
        }

        // Get the plugin properties from the database
        while ($plugin = mysql_fetch_assoc($result)) {

            // Load the plugin into the current scope
            $thisplugin = CPGPluginAPI::wakeup($plugin);

            // Copy the plugin to the global scope
            $CPG_PLUGINS[$plugin['plugin_id']] = $thisplugin;

            // Check if plugin has a wakeup action
            if (!CPGPluginAPI::action('plugin_wakeup',true)) {

                if ($CONFIG['log_mode']) {
                    log_write("Couldn't wake plugin '".$thisplugin->name."' at ".date("F j, Y, g:i a"),CPG_GLOBAL_LOG);
                }

                // Die if plugin's wakeup action failed
                cpg_die(CRITICAL_ERROR, "Couldn't wake plugin '{$thisplugin->name}'",__FILE__,__LINE__);
            }
        }
        mysql_free_result($result);
    }


    /**
     * CPGPluginAPI::installed()
     *
     * Check if a given plugin installed
     *
     * @param string $path_to_plugin_folder
     * @return boolean TRUE/FALSE
     **/

    function installed( $plugin_folder ) {
        global $CONFIG;
        
        // Stores if a given plugin is installed or not
        static $installed_array = array();

        // If the plugin doesn't exist in the array get its information from the database
        if (!isset($installed_array[$plugin_folder])) {
            $sql = 'select plugin_id from '.$CONFIG['TABLE_PLUGINS'].' where '.
                   'path="'.$plugin_folder.'";';

            $result = db_query($sql);
            
            // If the plugin isn't in the database store a false value in the array
            if (mysql_num_rows($result) == 0) {
                $installed_array[$plugin_folder] = false;
                return false;
            }

            // It's installed! Get the plugin_id
            $plugin = mysql_fetch_assoc($result);
            mysql_free_result($result);

            // Store the plugin_id in the database
            $installed_array[$plugin_folder] = $plugin['plugin_id'];
        }
        
        // Return the plugin_id or false, if the plugin isn't installed
        return $installed_array[$plugin_folder];
    }


    /**
     * CPGPluginAPI::filter()
     *
     * Checks all the plugin's for a given filter key sends the value
     *
     * @param string $filter_name
     * @param variant $value
     * @param boolean [$execute_scope = 'all']
     * @return $value
     **/

    function& filter( $key, $value, $execute_scope = CPG_EXEC_ALL ) {
        global $CPG_PLUGINS,$CONFIG,$USER_DATA,$thisplugin;

        // Loop through all the plugins
        foreach($CPG_PLUGINS as $thisplugin) {
                                             	
            // Get the filter's value from the plugin
            $plugin_function = @$thisplugin->filters[$key];

            // Skip this plugin; the key isn't set
            if (!isset($plugin_function)) {
                 continue;
            }
            
            // Skip this plugin; Only looking for new plugins
            if (($execute_scope == CPG_EXEC_NEW) && ($thisplugin->plugin_id != CPG_EXEC_NEW)) {
                continue;
            }

            // Pass the value to the filter's function and get a value back
            $value = call_user_func($plugin_function,$value);
            
            if ($execute_scope != CPG_EXEC_ALL) {
                return $value;
                break;
            }
        }

        // Return the value back to Coppermine
        return $value;
    }


    /**
     * CPGPluginAPI::action()
     *
     * Checks all the plugin's for a given action key sends the value
     *
     * @param string $action_name
     * @param variant $value
     * @param boolean [$execute_scope = 'all']
     * @return $value
     **/

    function& action( $key, $value, $execute_scope = CPG_EXEC_ALL ) {
        global $CPG_PLUGINS,$CONFIG,$USER_DATA,$thisplugin;

        // Loop through all the plugins
        foreach($CPG_PLUGINS as $thisplugin) {

            // Get the action's value from the plugin
            $plugin_function = @$thisplugin->actions[$key];

            // Skip this plugin; the key isn't set
            if (!isset($plugin_function)) {
                 continue;
            }

            // Skip this plugin; Only looking for new plugins
            if (($execute_scope == CPG_EXEC_NEW) && ($thisplugin->plugin_id != CPG_EXEC_NEW)) {
                continue;
            }

            // Pass the value to the action's function and get a value back
            $value = call_user_func($plugin_function,$value);

            if ($execute_scope != CPG_EXEC_ALL) {
                return $value;
                break;
            }
        }

        // Return the value back to Coppermine
        return $value;
    }


    /**
     * CPGPluginAPI::wakeup()
     *
     * Wakes a plugin
     *
     * @param array $properties
     * @return CPGPlugin $object
     **/

    function& wakeup($properties) {
        global $CONFIG,$USER_DATA,$CPG_PLUGINS,$thisplugin,$lang_plugin_api;

        // Get a new instance of the plugin object
        $thisplugin = new CPGPlugin($properties);

        // Include the plugin's code into Coppermine
        require_once ('./plugins/'.$thisplugin->path.'/codebase.php');
        
        // Return a reference to plugin object
        return $thisplugin;
    }


    /**
     * CPGPluginAPI::sleep()
     *
     * Executes 'plugin_sleep' action
     *
     * @param N/A
     * @return N/A
     **/

    function sleep() {
        global $CPG_PLUGINS,$thisplugin,$lang_plugin_api;

        // Loop through all the plugins
        foreach($CPG_PLUGINS as $thisplugin) {
            
            // If the plugin has a sleep action, execute it
            if (!CPGPluginAPI::action('plugin_sleep',true)) {

                if ($CONFIG['log_mode']) {
                    log_write("Couldn't put plugin '".$thisplugin->name."' to sleep at ".date("F j, Y, g:i a"),CPG_GLOBAL_LOG);
                }

                // Couldn't put plugin to sleep...Die!
                sprintf($lang_plugin_api['error_sleep'],$thisplugin->name);
            }
        }
    }


    /**
     * CPGPluginAPI::install()
     *
     * Installs a plugin and executes 'plugin_install' action
     *
     * @param string $path_to_plugin_folder
     * @return N/A
     **/

    function install($path) {
        global $CONFIG,$thisplugin,$CPG_PLUGINS,$lang_plugin_api;
        
        // Get the lowest priority level (highest number) from the database
        $sql = 'select priority from '.$CONFIG['TABLE_PLUGINS'].' order by priority desc limit 1;';
        $result = db_query($sql);

        $data = mysql_fetch_assoc($result);
        mysql_free_result($result);

        // Set the execution priority to last
        $priority = (is_null($data['priority'])) ? (0) : ($data['priority']+1);

        if (CPGPluginAPI::installed($path)) {
            return true;
        }


        // Grab the plugin's credits
        require_once ('./plugins/'.$path.'/credits.php');

        // Create a generic plugin object
        $thisplugin = new CPGPlugin(
                                    array(
                                          'plugin_id' => 'new',
                                          'name' => $name,
                                          'priority' => 1000000,
                                          'path' => $path
                                         )
                                    );

        // Copy it to the global scope
        $CPG_PLUGINS['new'] =& $thisplugin;

        // Grab plugin's code
        require_once ('./plugins/'.$path.'/codebase.php');

        // If the plugin has an install action, execute it
        $installed = CPGPluginAPI::action('plugin_install',true,CPG_EXEC_NEW);
        
        // If $installed is boolean then plugin was installed; Return true
        if (is_bool($installed) && $installed) {
            $sql = 'insert into '.$CONFIG['TABLE_PLUGINS'].' '.
                   '(name, path,priority) '.
                   ' values '.
                   '("'.addslashes($name).'",'.
                   '"'.addslashes($path).'",'.
                   $priority.');';
            $result = db_query($sql);

            if ($CONFIG['log_mode']) {
                log_write("Plugin '".$name."' installed at ".date("F j, Y, g:i a"),CPG_GLOBAL_LOG);
            }

            return $installed;
        
        // If $installed is an integer then the plugin needs to be configured; Return the value
        } elseif (is_int($installed)) {

            return $installed;
        
        // Plugin wasn't installed; Display an error
        } else {

            // The plugin's install function failed
            cpg_die(CRITICAL_ERROR,sprintf($lang_plugin_api['error_install'],$thisplugin->name),__FILE__,__LINE__);
        }
    }

    /**
     * CPGPluginAPI::uninstall()
     *
     * Uninstalls a plugin and executes 'plugin_uninstall' action
     *
     * @param integer $plugin_id
     * @return N/A
     **/

    function uninstall($plugin_id) {
        global $CONFIG,$USER_DATA,$CPG_PLUGINS,$thisplugin,$lang_plugin_api;

        if (!isset($CPG_PLUGINS[$plugin_id])) {
            return;
        }

        // Grab the plugin from the global scope
        $thisplugin =& $CPG_PLUGINS[$plugin_id];

        // Grab the priority level, so you can shift the ones in the database
        $priority = $thisplugin->priority;

        // If plugin has an uninstall action, execute it
        if (CPGPluginAPI::action('plugin_uninstall',true)) {
            $sql = 'delete from '.$CONFIG['TABLE_PLUGINS'].' '.
                   'where plugin_id='.$plugin_id.';';
            $result = db_query($sql);

            // Shift the plugins up
            $sql = 'update '.$CONFIG['TABLE_PLUGINS'].' set priority=priority-1 where priority>'.$priority.';';
            $result = db_query($sql);

            if ($CONFIG['log_mode']) {
                log_write("Plugin '".$name."' uninstalled at ".date("F j, Y, g:i a"),CPG_GLOBAL_LOG);
            }
        } else {

            // The plugin's uninstall action failed
            cpg_die(CRITICAL_ERROR,sprintf($lang_plugin_api['error_uninstall'],$thisplugin->name),__FILE__,__LINE__);
        }
    }
}


/**
 * class CPGPlugin
 *
 * The plugin object
 **/

class CPGPlugin {
    var $actions = array();
    var $filters = array();

    /**
     * CPGPlugin()
     *
     * Initialize the plugin
     *
     * @param array $properties
     * @return N/A
     **/

    function CPGPlugin($properties) {

        // Store the properties in the object
        foreach($properties as $key => $value) {
            $this->$key = stripslashes($value);
        }
    }
}


/**
 * cpg_add_filter()
 *
 * Add a plugin filter
 *
 * @param string $action
 * @param variant $value
 * @return N/A
 **/

function cpg_add_filter($key,$value) {
    global $thisplugin;
    if (!isset($thisplugin->filters[$key])) {
        $thisplugin->filters[$key] = $value;
    }
}

/**
 * cpg_delete_filter()
 *
 * Delete a plugin filter
 *
 * @param integer $plugin_id
 * @return N/A
 **/

function cpg_delete_filter($key) {
    global $thisplugin;
    if (isset($thisplugin->filters[$key])) {
        unset($thisplugin->filters[$key]);
    }
}

/**
 * cpg_add_action()
 *
 * Add a plugin action
 *
 * @param string $action
 * @param variant $value
 * @return N/A
 **/

function cpg_add_action($key,$value) {
    global $thisplugin;
    if (!isset($thisplugin->actions[$key])) {
        $thisplugin->actions[$key] = $value;
    }
}

/**
 * cpg_delete_action()
 *
 * Delete a plugin action
 *
 * @param integer $plugin_id
 * @return N/A
 **/

function cpg_delete_action($key) {
    global $thisplugin;
    if (isset($thisplugin->actions[$key])) {
        unset($thisplugin->actions[$key]);
    }
}

/**
 * cpg_get_scope()
 *
 * Get the current plugin from the scope
 * Sets global variable $thisplugin to return value
 *
 * @param integer [$plugin_id = null]
 * @return CPGPlugin $object
 **/

function& cpg_get_scope( $plugin_id = null ) {
    global $CPG_PLUGINS,$thisplugin;

    if (!is_null($plugin_id)) {
        return $CPG_PLUGINS[$plugin_id];
    } else {
        $plugin_id = (int) $_GET['scope'];
        $thisplugin = $CPG_PLUGINS[$plugin_id];
        return $CPG_PLUGINS[$plugin_id];
    }
}

/**
 * cpg_action_page_end()
 *
 * Executes page_end action on all plugins
 *
 * @param null
 * @return N/A
 **/

function cpg_action_page_end() {
    CPGPluginAPI::action('page_end',null);
}

/**
 * cpg_filter_page_html()
 *
 * Executes page_html filter on all plugins
 *
 * @param string HTML
 * @return string HTML
 **/

function& cpg_filter_page_html( &$html ) {
    return CPGPluginAPI::filter('page_html',$html);
}

/**
 * cpg_filter_page_html()
 *
 * Returns all the subdirecties in a given folder
 *
 * @param string $path_to_folder
 * @return array $subdirectories
 **/

function& cpg_get_dir_list($folder) {
    global $CONFIG;
    $dirs = array();

    $dir = opendir($folder);
    while (($file = readdir($dir)) !== false) {
        if (is_dir($folder . $file) && $file != '.' && $file != '..') {
                $dirs[] = $file;
        }
    }
    closedir($dir);

    natcasesort($dirs);
    return $dirs;
}
?>
