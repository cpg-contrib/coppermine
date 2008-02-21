<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2008 Dev Team
  v1.1 originally written by Gregory DEMAR

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 3
  as published by the Free Software Foundation.
  
  ********************************************
  Coppermine version: 1.5.0
  $HeadURL$
  $Revision$
  $LastChangedBy$
  $Date$
**********************************************/

// Report all errors except E_NOTICE
// This is the default value set in php.ini
session_start();
error_reporting (E_ALL ^ E_NOTICE);
set_magic_quotes_runtime(0);

$incp = get_include_path().PATH_SEPARATOR.dirname(__FILE__).PATH_SEPARATOR.dirname(__FILE__).DIRECTORY_SEPARATOR.'include';
set_include_path($incp);
require ('include/Inspekt.php');
require ('include/sql_parse.php');
require ('include/config.inc.php');
require ('include/update.inc.php');

// The defaults values
$errors = '';
$notes = '';
$DFLT = array('cfg_d' => 'include', // The config file dir
	'cfg_f' => 'include/config.inc.php', // The config file name
	'alb_d' => 'albums', // The album dir
	'upl_d' => 'userpics' // The uploaded pic dir
	);
$superCage = Inspekt::makeSuperCage();

// ---------------------------- AUTHENTICATION --------------------------- //
//ADMIN_ACCESS is a constant that can be defined for users who can't retrieve any kind of password
if(!defined(ADMIN_ACCESS) && !$_SESSION['auth']){
	html_header("Coppermine - Upgrade");
	html_logo();
	if(!$superCage->post->keyExists('method')){
		//first try to connect to the db to see if we can authenticate the admin
		test_sql_connection();
		if($errors != ''){
			//we could not establish an sql connection, so update can't be done (and user can't be autenticated)
			html_error($errors);
		}else{
			//print a box for admin autentication
			html_auth_box('admin');
		}
	}elseif($superCage->post->getAlpha('method') == 'admin'){
		//try to autenticate the admin
		test_sql_connection();
		$user = $superCage->post->getEscaped('user');
		$pass = $superCage->post->getEscaped('pass');
		$pass2 = md5($pass);
		$sql = "SELECT user_active FROM {$CONFIG['TABLE_PREFIX']}users WHERE user_group = 1 AND user_name = '$user' AND (user_password = '$pass' OR user_password = '$pass2')";
		$result = @mysql_query($sql);
		if(!@mysql_num_rows($result)){
			//not authenticated, try mysql account details
			html_auth_box('MySQL');
		}else{
			//authenticated, do the update
			$_SESSION['auth'] = true;
			start_update();
		}
	}else{
		//try to autenticate via MySQL details (in configuration)
		if($superCage->post->getEscaped('user')  == $CONFIG['dbuser'] && $superCage->post->getEscaped('pass') == $CONFIG['dbpass']){
			//authenticated, do the update
			$_SESSION['auth'] = true;
			start_update();
		}else{
			//no go, try again
			html_error('Could not authenticate you, click <a href="update.php">here</a> to try again');
		}
	}
	html_footer();
}else{
	$_SESSION['auth'] = true;
	start_update();
}

// --------------------------------- MAIN CODE ----------------------------- //
function start_update(){
	// The updater
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
			session_destroy();
		} else {
			html_error($errors);
		}
	}
	
	html_footer();
}

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
	
	$superCage = Inspekt::makeSuperCage();
	$possibilities = array('REDIRECT_URL', 'PHP_SELF', 'SCRIPT_URL', 'SCRIPT_NAME','SCRIPT_FILENAME');
	foreach ($possibilities as $test){
		if ($matches = $superCage->server->getMatched($test, '/([^\/]+\.php)$/')) {
			$CPG_PHP_SELF = $matches[1];
			break;
		}
	}
    //$CPG_PHP_SELF = $_SERVER['PHP_SELF'];
    $gallery_dir = strtr(dirname($CPG_PHP_SELF), '\\', '/');
    //$gallery_url_prefix = 'http://' . $_SERVER['HTTP_HOST'] . $gallery_dir . (substr($gallery_dir, -1) == '/' ? '' : '/');
	$gallery_url_prefix = 'http://' . $superCage->server->getRaw('HTTP_HOST') . $gallery_dir . (substr($gallery_dir, -1) == '/' ? '' : '/');

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
        /**
         * Determining if the Alter Table actually made a change
         * to properly reflect it's status on the update page.
         */
        if (strpos(strtolower($q),'alter table')!==false) {
            $query=explode(" ",$q);
            //var_dump($query);
            $result=mysql_query("DESCRIBE ".$query[2]);
            while ($row=mysql_fetch_row($result)) {
                $description[]=$row;
            }

            $result = @mysql_query($q);
            $affected = mysql_affected_rows();
            $warnings=mysql_query('SHOW WARNINGS');

            $result=mysql_query("DESCRIBE ".$query[2]);
            while ($row=mysql_fetch_row($result)) {
                $description2[]=$row;
            }

            if ($description == $description2) {
               $affected = 0;
            }
        } else {
            $result = @mysql_query($q);
            $affected = mysql_affected_rows();
            $warnings=mysql_query('SHOW WARNINGS;');
        }

        if ($result && $affected) {
            echo "<td class='updatesOK'>OK</td>";
        } else {
            echo "<td class='updatesFail'>Already Done</td>";
        }
        //if (isset($_REQUEST['debug'])) {
		if ($superCage->get->keyExists('debug')) {
            echo "<tr><td class='tablef'>";
            if ($affected > -1) {
                echo "Rows Affected: ".$affected."<br />";
            }
            if ($warnings) {
                while ($warning=mysql_fetch_row($warnings)) {
                    echo "{$warning[0]} ({$warning[1]}) {$warning[2]}<br />";
                }
            }
            echo "</td><td class='tableh2_compact'>MySQL Said</td></tr>";
        }
    }
    echo "</table>";
}
?>