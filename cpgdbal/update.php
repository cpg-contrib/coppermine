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
  $Revision: 4578 $
  $LastChangedBy: nibbler999 $
  $Date: 2008-06-16 01:29:16 +0530 (Mon, 16 Jun 2008) $
**********************************************/
define('UPDATE_PHP', true);
// define('ADMIN_ACCESS', true);
// If you don't remember the admin account data you're prompted for when running this file in your browser, umcomment the line above by removing the two slashes in front of it, upload that file to your webserver, run it in your browser. After usccessfully having run it, remember to restore the two slashes you removed and replace the "unsecure" version on your webserver with the "secure" version (the one that contains the double slashes).

// Report all errors except E_NOTICE
// This is the default value set in php.ini
session_start();
error_reporting (E_ALL ^ E_NOTICE);
set_magic_quotes_runtime(0);
//define('IN_COPPERMINE', true);

$incp = get_include_path().PATH_SEPARATOR.dirname(__FILE__).PATH_SEPARATOR.dirname(__FILE__).DIRECTORY_SEPARATOR.'include';
set_include_path($incp);
require ('include/Inspekt.php');
require ('include/sql_parse.php');
require ('include/config.inc.php');
require ('include/update.inc.php');
##################      DB     ##################
//require ('include/init.inc.php');
if ($CONFIG['dbservername'] == 'mysql') {
	require 'include/cpgdb/drivers/mysql_driver.php';
	require 'include/cpgdb/sql/mysql.php';
} elseif ($CONFIG['dbservername'] == 'mssql') {
	require 'include/cpgdb/drivers/mssql_driver.php';
	require 'include/cpgdb/sql/mssql.php';
}
##########################################
require ('include/functions.inc.php');

// The defaults values
$errors = '';
$notes = '';
$DFLT = array('cfg_d' => 'include', // The config file dir
	'cfg_f' => 'include/config.inc.php', // The config file name
	'alb_d' => 'albums', // The album dir
	'upl_d' => 'userpics' // The uploaded pic dir
	);
$superCage = Inspekt::makeSuperCage();
	#############   cpgdbal   ###########
	$cpgsql = @ cpgDB::getInstance(); 
	$cpgsql->lock_querytime = TRUE;
	##############################

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
	} elseif ($superCage->post->getAlpha('method') == 'admin'){
		//try to autenticate the admin
		test_sql_connection();
		$user = $superCage->post->getEscaped('user');
		$pass = $superCage->post->getEscaped('pass');
		$pass2 = md5($pass);
		/*$sql = "SELECT user_active FROM {$CONFIG['TABLE_PREFIX']}users WHERE user_group = 1 AND user_name = '$user' AND (user_password = '$pass' OR user_password = '$pass2')";
		$result = @mysql_query($sql);
		if(!@mysql_num_rows($result)) {
			//not authenticated, try mysql account details
			html_auth_box('MySQL');	*/
		##################################   cpgdbal   ################################
		$cpgsql->query($cpg_db_update_php['get_active_admin_user'], $user, $pass, $pass2);
		$rowset = $cpgsql->fetchRowSet();
		if (! count($rowset)) {
			//not authenticated, try sql account datails
			if ($CONFIG['dbservername'] == 'mysql'){
				html_auth_box('MySQL');
			} elseif ($CONFIG['dbservername'] == 'mssql') {
				html_auth_box('MSSQL');
			}
		#########################################################################
		} else {
			//authenticated, do the update
			$_SESSION['auth'] = true;
			start_update();
		}
	} else {
		//try to autenticate via MySQL details (in configuration)
		if($superCage->post->getEscaped('user')  == $CONFIG['dbuser'] && $superCage->post->getEscaped('pass') == $CONFIG['dbpass']){
			//authenticated, do the update
			$_SESSION['auth'] = true;
			start_update();
		}else{
			//no go, try again
			html_error('Could not authenticate you - <a href="update.php">try again</a>');
		}
	}
	html_footer();
} else {
	$_SESSION['auth'] = true;
	start_update();
}

// --------------------------------- MAIN CODE ----------------------------- //
function start_update(){
	// The updater
	html_header("Coppermine - Upgrade");
	//html_logo();
	
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
	############  cpgdbal  ############
	global $cpg_db_update_php;
	$cpgsql = @ cpgDB::getInstance(); 
	##############################

	/*$results = mysql_query("SELECT * FROM ".$CONFIG['TABLE_PREFIX']."config;");
	while ($row = mysql_fetch_array($results)) {
		$CONFIG[$row['name']] = $row['value'];
	} // while
	mysql_free_result($results);	*/
	###############    cpgdbal   ##############
	$results = $cpgsql->query($cpg_db_update_php['get_all_config']);
	while ($row = $cpgsql->fetchRow()) {
		$CONFIG[$row['name']] = $row['value'];
	}
	$cpgsql->free();
	#####################################

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
 * Return an array containing config values specified in the array
 */
/*function cpg_get_config_value($config_name) {
    global $CONFIG;
    $result = mysql_query("SELECT value FROM ".$CONFIG['TABLE_PREFIX']."config WHERE name='".$config_name."' LIMIT 1");
    $row = mysql_fetch_row($result);
    return $row[0];
}*/
########################      DB      ########################
function cpg_get_config_value($config_name) {
    global $CONFIG;
	global $cpg_db_update_php;
	$cpgsql = @ cpgDB::getInstance(); 
    $result = $cpgsql->query($cpg_db_update_php['get_config_value'], $config_name);
    $row = $cpgsql->fetchRow();
    return $row['value'];
}
######################################################

function cpgGetMicroTime()
{
	list($usec, $sec) = explode(" ", microtime());
	return ((float)$usec + (float)$sec);
}

/**
 * Return an array containing the system thumbs in a directory
 */
 /*
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
*/
// ----------------------------- TEST FUNCTIONS ---------------------------- //
function test_sql_connection()
{
	global $errors, $CONFIG;
	$cpgsql = @ cpgDB::getInstance(); 
	/*if (! $connect_id = @mysql_connect($CONFIG['dbserver'], $CONFIG['dbuser'], $CONFIG['dbpass'])) {
		$errors .= "<hr /><br />Could not create a mySQL connection, please check the SQL values in include/config.inc.php<br /><br />MySQL error was : " . mysql_error() . "<br /><br />";
	} elseif (! mysql_select_db($CONFIG['dbname'], $connect_id)) {
		$errors .= "<hr /><br />mySQL could not locate a database called '{$CONFIG['dbname']}' please check the value entered for this in include/config.inc.php<br /><br />";
	} else {
		$CONFIG['LINK_ID'] = $connect_id;
	}	*/
	$connect_id = $cpgsql->connect($CONFIG['dbname'], $CONFIG['dbserver'], $CONFIG['dbuser'], $CONFIG['dbpass']);
	if (!$connect_id || $connect_id == 0) {
		$errors .= $cpgsql->Error;
	} else {
		$CONFIG['LINK_ID'] = $connect_id;
	}
}



// ------------------------- SQL QUERIES TO CREATE TABLES ------------------ //
function update_tables()
{
    global $errors, $CONFIG;
	############  cpgdbal  ############
	global $cpg_db_update_php;
	$cpgsql = @ cpgDB::getInstance(); 
	$cpgsql->update = TRUE;
	##############################
	
	$lineBreak = "\n";
    $loopCounter = 0;
    $cellStyle = '';
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
	$gallery_url_prefix = 'http://' . $superCage->server->getEscaped('HTTP_HOST') . $gallery_dir . (substr($gallery_dir, -1) == '/' ? '' : '/');

	//$db_update = 'sql/update.sql';
    ######################     DB     ####################
	$db_update = "sql/{$CONFIG['dbservername']}/update.sql";
	################################################
	$sql_query = fread(fopen($db_update, 'r'), filesize($db_update));
    // Update table prefix
    $sql_query = preg_replace('/CPG_/', $CONFIG['TABLE_PREFIX'], $sql_query);

    $sql_query = remove_remarks($sql_query);
    $sql_query = split_sql_file($sql_query, ';');

    print <<< EOT
        <table border="0" cellspacing="0" cellpadding="0" class="maintable">
            <tr>
                <td class="tableh1" colspan="2">
                    Performing Database Updates
                </td>
            </tr>

EOT;

    foreach($sql_query as $q) {
        if ($loopCounter/2 == floor($loopCounter/2)) {
            $cellStyle = 'tableb';
        } else {
            $cellStyle = 'tableb tableb_alternate';
        }
        $loopCounter++;
        echo '<tr><td width="80%" class="'.$cellStyle.'">'.$q;
        /**
         * Determining if the Alter Table actually made a change
         * to properly reflect it's status on the update page.
         */
		/*if (strpos(strtolower($q),'alter table')!==false) {
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
				$warnings = mysql_query('SHOW WARNINGS;');
			}	*/
		###################   cpgdbal   #################
		if (strpos(strtolower($q),'alter table')!==false) {
			$query=explode(" ",$q);
			$result=$cpgsql->query($cpg_db_update_php['get_table_structure'], $query[2]);
			while ($row=$cpgsql->fetchRow()) {
				$description[]=$row;
			}

			$result = @$cpgsql->query($q);
			$affected = $cpgsql->affectedRows();
			if ($CONFIG['dbservername'] != 'mssql') {
				$warnings=$cpgsql->query($cpg_db_update_php['show_warnings']);
				$warningset = $cpgsql->fetchRowSet();
			}

			$result=$cpgsql->query($cpg_db_update_php['get_table_structure'], $query[2]);
			while ($row=$cpgsql->fetchRow()) {
				$description2[]=$row;
			}

			if ($description == $description2) {
			   $affected = 0;
			}
		} else {
			$result = @$cpgsql->query($q);
			$affected = $cpgsql->affectedRows();
			if ($CONFIG['dbservername'] != 'mssql') {
				$warnings=$cpgsql->query($cpg_db_update_php['show_warnings']);
				$warningset = $cpgsql->fetchRowSet();
			}
		}
		###########################################
        //if (isset($_REQUEST['debug'])) {
		if ($superCage->get->keyExists('debug')) {
            echo '<hr />Debug output:<br />';
            if ($affected > -1) {
                echo "Rows Affected: ".$affected.". ";
            }
			if ($warnings && $CONFIG['dbservername'] !='mssql') {	#####	cpgdbal
				/*while ($warning = mysql_fetch_row($warnings)) {
					if ($warning[0] != '') {
						$warning_text = 'MySQL said: ';
					} else {
						$warning_text = '';
					}
					echo $warning_text.'<tt class="code">'.$warning[0]. ' ('.$warning[1].') '.$warning[2].'</tt><br />';
				}	*/
				####################   cpgdbal   ####################
				foreach ($warningset as $warning) {
					if ($warning[0] != '') {
						$warning_text = 'MySQL said: ';
					} else {
						$warning_text = '';
					}
					echo $warning_text.'<tt class="code">'.$warning['Level']. ' ('.$warning['Code'].') '.$warning['Message'].'</tt><br />';
				}
				################################################
			}
        }
        print '</td>'.$lineBreak; // end the table cell that contains the output
        if ($result && $affected) {
            echo '<td width="20%" class="'.$cellStyle.' updatesOK">OK</td>'.$lineBreak;
        } else {
            echo '<td width="20%" class="'.$cellStyle.' updatesFail">Already Done</td>'.$lineBreak;
        }
    }
        print <<< EOT
            <tr>
                <td class="tablef">
                    Encryption of passwords:
                </td>
EOT;
    $CONFIG['enable_encrypted_passwords'] = cpg_get_config_value('enable_encrypted_passwords');
    if ($CONFIG['enable_encrypted_passwords'] != 1) {
        print <<< EOT
                <td class="tablef updatesOK">
                    OK
                </td>
            </tr>
EOT;
		/*$result = mysql_query("update {$CONFIG['TABLE_PREFIX']}users set user_password=md5(user_password);");
		if ($CONFIG['enable_encrypted_passwords'] == 0) {
			$result = mysql_query("update {$CONFIG['TABLE_PREFIX']}config set value = 1 WHERE name = 'enable_encrypted_passwords'");
		} else {
			$result = mysql_query("INSERT INTO {$CONFIG['TABLE_PREFIX']}config ( `name` , `value` ) VALUES ('enable_encrypted_passwords', '1')");
		}*/
		##################################      DB      #################################
		// get user passwords and encrypt them
		$cpgsql->query($cpg_db_update_php['get_user_passwords']);
		$rowset = $cpgsql->fetchRowSet();
		foreach ($rowset as $row) {
			$md5_user_pswd = md5($row['user_password']);
			$cpgsql->query($cpg_db_update_php['encrypt_passwords'], $md5_user_pswd, $row['user_id']);
		}
		if ($CONFIG['enable_encrypted_passwords'] == 0) {
			$result = $cpgsql->query($cpg_db_update_php['enable_encryption']);
		} else {
			$result = $cpgsql->query($cpg_db_update_php['add_encryption_switch']);
		}
		##########################################################################
    } else {
        print <<< EOT
                <td class="tablef updatesFail">
                    Already done
                </td>
            </tr>
EOT;
    }
    
            print <<< EOT
            <tr>
                <td class="tablef">
                    Category tree:
                </td>
EOT;
    
    if (check_rebuild_tree()) {
    
        print <<< EOT
                <td class="tablef updatesOK">
                    OK
                </td>
            </tr>
EOT;
    } else {
        print <<< EOT
                <td class="tablef updatesFail">
                    Already done
                </td>
            </tr>
EOT;
    }
    
    echo "</table>";
}
?>