<?php
// ------------------------------------------------------------------------- //
//  Open Plugin API (Open PAPI)                                              //
// ------------------------------------------------------------------------- //
//  Copyright (C) 2004  Christopher Brown-Floyd                              //
//  http://www.brownfloyd.com/                                               //
//  Written for Coppermine Photo Gallery                                     //
// ------------------------------------------------------------------------- //
//  For Coppermine support goto http://coppermine.sf.net/board/              //
//  For generic support (non-Coppermine integration) goto                    //
//  the Open Plugin API webpage: http://www.brownfloyd.com/openpapi/         //
// ------------------------------------------------------------------------- //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
// ------------------------------------------------------------------------- //

global $thisplugin;                     // Stores the current plugin being processed
global $CPG_PLUGINS;                    // Stores all the plugins

$CPG_PLUGINS = array();                 // Initialize the plugin array

// Store the table name in CONFIG
$CONFIG['TABLE_PLUGINS']                = $CONFIG['TABLE_PREFIX'].'plugins';

/**
 * Local plugin class
 * Processes all the plugins (filters,actions,install,uninstall)
 */
class CPGPluginAPI {

    // Load all the plugins into the global CPG_PLUGINS array
    function load() {
        global $CONFIG,$thisplugin,$USER_DATA,$CPG_PLUGINS,$lang_plugin_api;

        // Register sleep action for shutdown
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
                cpg_die(CRITICAL_ERROR,sprintf($lang_plugin_api['error_wakeup'],$thisplugin->name),__FILE__,__LINE__);
            }
        }
        mysql_free_result($result);
    }


    // Check if a given plugin installed
    function installed($plugin_folder) {
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


    // Checks all the plugin's for a given filter key sends the value
    function& filter($key,$value) {
        global $CPG_PLUGINS,$CONFIG,$USER_DATA,$thisplugin;

        // Loop through all the plugins
        foreach($CPG_PLUGINS as $thisplugin) {
                                             	
            // Get the filter's value from the plugin
            $plugin_function = @$thisplugin->filters[$key];

            // Skip this plugin; the key isn't set
            if (!isset($plugin_function)) {
                 continue;
            }

            // Pass the value to the filter's function and get a value back
            $value = $plugin_function($value);
        }

        // Return the value back to Coppermine
        return $value;
    }


    // Checks all the plugin's for a given action key sends the value
    function& action($key,$value) {
        global $CPG_PLUGINS,$CONFIG,$USER_DATA,$thisplugin;

        // Loop through all the plugins
        foreach($CPG_PLUGINS as $thisplugin) {

            // Get the action's value from the plugin
            $plugin_function = @$thisplugin->actions[$key];

            // Skip this plugin; the key isn't set
            if (!isset($plugin_function)) {
                 continue;
            }

            // Pass the value to the action's function and get a value back
            $value = $plugin_function($value);
        }

        // Return the value back to Coppermine
        return $value;
    }


    // Wakes up a plugin
    function& wakeup($properties) {
        global $CONFIG,$USER_DATA,$CPG_PLUGINS,$thisplugin,$lang_plugin_api;

        // Get a new instance of the plugin object
        $thisplugin = new CPGPlugin($properties);

        // Include the plugin's code into Coppermine
        require_once ('./plugins/'.$thisplugin->path.'/codebase.php');
        
        // Return a reference to plugin object
        return $thisplugin;
    }


    // Put all the plugins to sleep
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


    // Installs a plugin
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
            return;
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
        if (CPGPluginAPI::action('plugin_install',true)) {
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
        } else {

            // The plugin's install function failed
            cpg_die(CRITICAL_ERROR,sprintf($lang_plugin_api['error_install'],$thisplugin->name),__FILE__,__LINE__);
        }
    }

    // Uninstalls a plugin
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


// The plugin object
class CPGPlugin {
    var $actions = array();
    var $filters = array();

    // Initialize the plugin
    function CPGPlugin($properties) {
        
        // Store the properties in the object
        foreach($properties as $key => $value) {
            $this->$key = stripslashes($value);
        }
    }
}


// Add a plugin filter
function cpg_add_filter($key,$value) {
    global $thisplugin;
    if (!isset($thisplugin->filters[$key])) {
        $thisplugin->filters[$key] = $value;
    }
}

// Delete a plugin filter
function cpg_delete_filter($key) {
    global $thisplugin;
    if (isset($thisplugin->filters[$key])) {
        unset($thisplugin->filters[$key]);
    }
}

// Add a plugin action
function cpg_add_action($key,$value) {
    global $thisplugin;
    if (!isset($thisplugin->actions[$key])) {
        $thisplugin->actions[$key] = $value;
    }
}

// Delete a plugin action
function cpg_delete_action($key) {
    global $thisplugin;
    if (isset($thisplugin->actions[$key])) {
        unset($thisplugin->actions[$key]);
    }
}


// Get the current plugin from the scope
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

// Returns all the subdirecties in a given folder
function& cpg_get_dir_list($folder) {
    global $CONFIG;
    $dirs = array();

    $dir = opendir($folder);
    while (($file = readdir($dir))!==false) {
        if (is_dir($folder . $file) && $file != '.' && $file != '..') {
                $dirs[] = $file;
        }
    }
    closedir($dir);

    natcasesort($dirs);
    return $dirs;
}
?>
