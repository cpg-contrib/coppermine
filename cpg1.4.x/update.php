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
  Coppermine version: 1.4.22
  $HeadURL$
  $Revision$
  $Author$
  $Date$
**********************************************/

// Report all errors except E_NOTICE
// This is the default value set in php.ini
error_reporting (E_ALL ^ E_NOTICE);

require ('include/sql_parse.php');
require ('include/config.inc.php');
require ('include/update.inc.php');

// ---------------------------- TEST PREREQUIRED --------------------------- //
function test_fs()
{
    global $errors, $DFLT;
    // No Filesystem Updates yet

    // If plugins folder doesn't exist create it
    if (!is_dir('./plugins')) {
        $mask = umask(0);
        mkdir('./plugins',0777);
        umask($mask);
    }
}

function update_system_thumbs()
{
    global $CONFIG;

    $results = mysql_query("SELECT * FROM ".$CONFIG['TABLE_PREFIX']."config;");
    while ($row = mysql_fetch_array($results)) {
        $CONFIG[$row['name']] = $row['value'];
    } // while
    mysql_free_result($results);

    // Code to rename system thumbs in images folder (except nopic.jpg and private.jpg)
    $old_thumb_pfx = 'thumb_';

    if ($old_thumb_pfx != $CONFIG['thumb_pfx']) {
        $folders = array('images/', $THEME_DIR.'images/');
        foreach ($folders as $folder) {
            $thumbs = cpg_get_system_thumb_list($folder);
            foreach ($thumbs as $thumb) {
                @rename($folder.$thumb['filename'],
                        $folder.str_replace($old_thumb_pfx,$CONFIG['thumb_pfx'],$thumb['filename']));
            }
        }
    }


    // If old images for nopic.jpg and private.jpg exist, delete the new ones
    if (file_exists('images/nopic.jpg')) {
        @unlink('images/thumb_nopic.jpg');
    }

    if (file_exists('images/private.jpg')) {
        @unlink('images/thumb_private.jpg');
    }

    // Rename old images to new format
    @rename('images/nopic.jpg','images/'.$CONFIG['thumb_pfx'].'nopic.jpg');
    @rename('images/private.jpg','images/'.$CONFIG['thumb_pfx'].'private.jpg');
}

/**
 * Return an array containing the system thumbs in a directory
 */
function cpg_get_system_thumb_list($search_folder = 'images/')
{
        global $CONFIG;
        static $thumbs = array();

        $folder = 'images/';

        $thumb_pfx =& $CONFIG['thumb_pfx'];
        // If thumb array is empty get list from coppermine 'images' folder
        if ((count($thumbs) == 0) && ($folder == $search_folder)) {
                $dir = opendir($folder);
                while (($file = readdir($dir))!==false) {
                        if (is_file($folder . $file) && strpos($file,$thumb_pfx) === 0) {
                                // Store filenames in an array
                                $thumbs[] = array('filename' => $file);
                        }
                }
                closedir($dir);
                return $thumbs;
        } elseif ($folder == $search_folder) {
                // Search folder is the same as coppermine images folder; just return the array
                return $thumbs;
        } else {
                // Search folder is the different; check for files in the given folder
                $results = array();
                foreach ($thumbs as $thumb) {
                        if (is_file($search_folder.$thumb['filename'])) {
                                $results[] = array('filename' => $thumb['filename']);
                        }
                }
                return $results;
        }
}

// ----------------------------- TEST FUNCTIONS ---------------------------- //
function test_sql_connection()
{
    global $errors, $CONFIG;

    if (! $connect_id = @mysql_connect($CONFIG['dbserver'], $CONFIG['dbuser'], $CONFIG['dbpass'])) {
        $errors .= "<hr /><br />Could not create a mySQL connection, please check the SQL values in include/config.inc.php<br /><br />MySQL error was : " . mysql_error() . "<br /><br />";
    } elseif (! mysql_select_db($CONFIG['dbname'], $connect_id)) {
        $errors .= "<hr /><br />mySQL could not locate a database called '{$CONFIG['dbname']}' please check the value entered for this in include/config.inc.php<br /><br />";
    }
}
// ------------------------- HTML OUTPUT FUNCTIONS ------------------------- //
// Moved to include/update.inc.php -- chtito

// ------------------------- SQL QUERIES TO CREATE TABLES ------------------ //
function update_tables()
{
    global $errors, $CONFIG;

    //$PHP_SELF = $_SERVER['PHP_SELF'];
    $gallery_dir = strtr(dirname($_SERVER['PHP_SELF']), '\\', '/');
    $gallery_url_prefix = 'http://' . $_SERVER['HTTP_HOST'] . $gallery_dir . (substr($gallery_dir, -1) == '/' ? '' : '/');

    $db_update = 'sql/update.sql';
    $sql_query = fread(fopen($db_update, 'r'), filesize($db_update));
    // Update table prefix
    $sql_query = preg_replace('/CPG_/', $CONFIG['TABLE_PREFIX'], $sql_query);

    $sql_query = remove_remarks($sql_query);
    $sql_query = split_sql_file($sql_query, ';');

    ?>
        <h2>Performing Database Updates<h2>
        <table class="maintable">

    <?php

    foreach($sql_query as $q) {
        echo "<tr><td class='tableb'>$q</td>";
        if (@mysql_query($q)) {
            echo "<td class='updatesOK'>OK</td>";
        } else {
            echo "<td class='updatesFail'>Already Done</td>";
        }
    }
    echo "</table>";
}

// --------------------------------- MAIN CODE ----------------------------- //
// The defaults values
$table_prefix = $_POST['table_prefix'];
$DFLT = array('lck_f' => 'install.lock', // Name of install lock file
    'cfg_d' => 'include', // The config file dir
    'cfg_f' => 'include/config.inc.php', // The config file name
    'alb_d' => 'albums', // The album dir
    'upl_d' => 'userpics' // The uploaded pic dir
    );

$errors = '';
$notes = '';
// The installer
html_header("Coppermine - Upgrade");
html_logo();

test_fs();
if ($errors != '')
    html_prereq_errors($errors);
else {
    test_sql_connection();
    if ($errors == '') {
        update_tables();
        update_system_thumbs();
    } else {
        html_error($errors);
    }
    if ($errors == '') {
        html_install_success($notes);
    } else {
        html_error($errors);
    }
}

html_footer();
?>
