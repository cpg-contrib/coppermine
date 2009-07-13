<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2009 Coppermine Dev Team
  v1.1 originally written by Gregory DEMAR

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 3
  as published by the Free Software Foundation.
  
  ********************************************
  Coppermine version: 1.4.26
  $HeadURL$
  $Revision$
  $Author$
  $Date$
**********************************************/

if (!defined('IN_COPPERMINE')) { die('Not in Coppermine...');}

// Initiate defines
define('CPG_SECURITY_LOG','security');
define('CPG_GLOBAL_LOG','global');
define('CPG_DATABASE_LOG','database');
define('CPG_ACCESS_LOG','access');
define('CPG_ERROR_LOG','error');

define('CPG_LOG_ALL',2);
define('CPG_LOG_NORMAL',1);
define('CPG_NO_LOGGING',0);

define('CPG_WEEK',604800);
define('CPG_DAY',86400);
define('CPG_HOUR',3600);

// Writes log text to the log file
function log_write( $text, $log = null ) {
        if (is_null($log)) {
                $log = CPG_GLOBAL_LOG;
        }

        $log = 'logs/'.$log.'.log.php';

        if (!file_exists($log)) {
                $log_header = implode('',file('logs/log_header.inc.php'));
        } else {
                       $log_header = '';
        }

        $fp = fopen($log,'a');
        fwrite($fp,$log_header);
        fwrite($fp,$text."\n");
        fclose($fp);
}


// Reads log text from a log file
function log_read( $log = null ) {
        if (is_null($log)) {
                $log = CPG_GLOBAL_LOG;
        }

        $log = 'logs/'.$log.'.log.php';

        @include($log);
}


// Deletes a log file
function log_delete( $log = null ) {
        if (is_null($log)) {
                $log_list = getloglist('logs/');
                foreach ($log_list as $log) {
                        unlink('logs/'.$log['filename']);
                }
        } else {
                       unlink('logs/'.$log.'.log.php');
        }
        header('Location: viewlog.php');
}


// Returns all the log files in the log directory
function& getloglist($folder)
{
    global $CONFIG;
    $file_array = array();

    $dir = opendir($folder);
    while (($file = readdir($dir))!==false) {
        if (is_file($folder . $file) && $file != 'log_header.inc.php') {
                $file_array[] = array('filename'=>$file,'logname'=>str_replace('.log.php','',$file),'filesize'=>filesize($folder . $file) >> 10);
        }
    }
    closedir($dir);

    natcasesort($file_array);
    return $file_array;
}


// The function spring_cleaning is a garbage collection routine used to purge a directory of old files.
function& spring_cleaning($directory_path, $cache_time = CPG_HOUR, $exclusion_list = array('index.html')) {
    global $CONFIG;

    //Storage the deleted files
    $deleted_list = array();

    //First we get the transitory directory handle.
    $directory_handle = opendir($directory_path);

    // Exit if the directory cannot be opened.
    if(!$directory_handle) {

        // Return.
        return;

    }

    // Now let's read through the directory contents.
    while (!(($file = readdir($directory_handle)) === false)) {

            // Avoid deleting the index page of the directory.
            if (in_array($file,$exclusion_list)) {

                // This is the index file, so we move on.
                continue;

            }

            $dir_path = $directory_path."/".$file;

            if (is_dir($dir_path)) {

                // This is a directory, so we move on.
                continue;

            }

            // We find out when the file was last accessed.
            $access_time = filemtime($dir_path); // fileatime() returned incorrect value on Windows

            // We find out the current time.
            $current_time = time();

            // We calculate the the delete time. We will delete anything older than $cache_time.
            $delete_time = $current_time - $access_time;

            // Now we compare the two.
            if ($delete_time >= $cache_time) {

                    // The file is old. We delete it.
                    $deleted_list[] = $dir_path; // Store the name of the file getting deleted
                    unlink($dir_path);
            }

    }

    // Don't forget to close the directory.
    closedir($directory_handle);

    // For logging purposes
    if ($CONFIG['log_mode']) {
        for ( $i = 0; $i<count($deleted_list); $i++ ) {
                log_write('Garbage collection deleted '.$deleted_list[$i].' at '.date("F j, Y, g:i a"),CPG_GLOBAL_LOG);
        }
    }
    return $deleted_list;
}

if ($CONFIG['log_mode']) {
        spring_cleaning('logs', CPG_DAY*2, array('log_header.inc.php'));
}
?>
