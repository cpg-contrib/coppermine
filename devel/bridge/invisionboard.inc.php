<?php
// ------------------------------------------------------------------------- //
//  Coppermine Photo Gallery                                                 //
// ------------------------------------------------------------------------- //
//  Copyright (C) 2002,2003  Grégory DEMAR <gdemar@wanadoo.fr>               //
//  http://www.chezgreg.net/coppermine/                                      //
// ------------------------------------------------------------------------- //
//  Based on PHPhotoalbum by Henning Støverud <henning@stoverud.com>         //
//  http://www.stoverud.com/PHPhotoalbum/                                    //
// ------------------------------------------------------------------------- //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
// ------------------------------------------------------------------------- //
//
//  Invision Power Board v1.1 Integration for Coppermine
//
// ------------------------------------------------------------------------- //

// ------------------------------------------------------------------------- //
//  Modify the values below according to your Board installation
// ------------------------------------------------------------------------- //

// database configuration
define('IB_DB_NAME','ivboard');		// The name of the database used by the board
define('IB_BD_HOST','localhost');	// The name of the database server
define('IB_DB_USERNAME','root');	// The username to use to connect to the database
define('IB_DB_PASSWORD','');		// The password to use to connect to the database

// The web path to your Invision Board directory
// In this example http://yoursite_name.com/ivboard/
define('IB_WEB_PATH','/ivboard/');

// ------------------------------------------------------------------------- //
//  You can keep the default values below if your installation is standard
// ------------------------------------------------------------------------- //

// The prefix for the Invision Board cookies
define('IB_COOKIE_PREFIX','');		// The prefix used for board cookies

// Prefix and names for the database tables
define('IB_TABLE_PREFIX','ibf_');	// The prefix used for the DB tables
define('IB_USER_TABLE', 'members');	// The members table
define('IB_SESSION_TABLE', 'sessions');	// The sessions table
define('IB_GROUP_TABLE', 'groups');	// The groups table

// Group definitions (default values used by the board)
define('IB_VALIDATING_GROUP', 1);
define('IB_GUEST_GROUP', 2);
define('IB_MEMBERS_GROUP', 3);
define('IB_ADMIN_GROUP', 4);
define('IB_BANNED_GROUP', 5);

// ------------------------------------------------------------------------- //
//  Nothing to edit below this line
// ------------------------------------------------------------------------- //

// Authenticate a user using cookies
function udb_authenticate()
{
	global $HTTP_COOKIE_VARS, $USER_DATA, $UDB_DB_LINK_ID, $UDB_DB_NAME_PREFIX, $CONFIG;
	global $HTTP_SERVER_VARS, $HTTP_X_FORWARDED_FOR, $HTTP_PROXY_USER, $REMOTE_ADDR;
	
	// For error checking
	$CONFIG['TABLE_USERS'] = '**ERROR**';
	
	// Permissions for a default group
	$default_group = array(
		'group_id' => IB_GUEST_GROUP,
		'group_name' => 'Unknown',
		'has_admin_access' => 0,
		'can_send_ecards' => 0,
		'can_rate_pictures' => 0,
		'can_post_comments' => 0,
		'can_upload_pictures' => 0,
		'can_create_albums' => 0,
		'pub_upl_need_approval' => 1,
		'priv_upl_need_approval' => 1,
	);

	// Retrieve cookie stored login information
	if (!isset($HTTP_COOKIE_VARS[IB_COOKIE_PREFIX.'member_id']) || !isset($HTTP_COOKIE_VARS[IB_COOKIE_PREFIX . 'pass_hash'])) {
		$cookie_uid  = 0;
		$cookie_pass = '*';
	} else {
		$cookie_uid  = (int)$HTTP_COOKIE_VARS[IB_COOKIE_PREFIX.'member_id'];
		$cookie_pass = substr(addslashes($HTTP_COOKIE_VARS[IB_COOKIE_PREFIX . 'pass_hash']), 0, 32);
	}
	
	// If autologin was not selected, we need to use the sessions table
	if(!$cookie_uid && isset($HTTP_COOKIE_VARS[IB_COOKIE_PREFIX.'session_id'])){
	
		$session_id = addslashes($HTTP_COOKIE_VARS[IB_COOKIE_PREFIX.'session_id']);
		
		if(isset($HTTP_SERVER_VARS['REMOTE_ADDR'])){
			$remote_ip = $HTTP_SERVER_VARS['REMOTE_ADDR'];
		} elseif (isset($HTTP_X_FORWARDED_FOR)) {
			$remote_ip = $HTTP_X_FORWARDED_FOR;
		} elseif (isset($HTTP_PROXY_USER)) {
			$remote_ip = $HTTP_PROXY_USER;
		} elseif (isset($REMOTE_ADDR)) {
			$remote_ip = $REMOTE_ADDR;
		} else {
			$remote_ip = '-1';
		}
		
		$remote_ip = preg_replace( "/^([0-9]{1,3})\.([0-9]{1,3})\.([0-9]{1,3})\.([0-9]{1,3})/", "\\1.\\2.\\3.\\4", $remote_ip );
		
		$sql = "SELECT member_id as user_id, member_name as user_name, member_group as mgroup ".
			   "FROM ".$UDB_DB_NAME_PREFIX.IB_TABLE_PREFIX.IB_SESSION_TABLE." ".
			   "WHERE id = '$session_id' AND ip_address = '$remote_ip'";
	} else {
		$sql = "SELECT id as user_id, name as user_name, mgroup ".
			   "FROM ".$UDB_DB_NAME_PREFIX.IB_TABLE_PREFIX.IB_USER_TABLE." ".
			   "WHERE id='$cookie_uid' AND password='$cookie_pass'";
	}
	
	$result = db_query($sql, $UDB_DB_LINK_ID);
	
	if (mysql_num_rows($result)){
		$USER_DATA = mysql_fetch_array($result);
		mysql_free_result($result);
	
	    define('USER_ID', (int)$USER_DATA['user_id']);
	    define('USER_NAME', $USER_DATA['user_name']);

		// Retrieve group information
		$sql = "SELECT * ".
			   "FROM {$CONFIG['TABLE_USERGROUPS']} ".
			   "WHERE group_id = '{$USER_DATA['mgroup']}'";
		$result = db_query($sql);
		if (mysql_num_rows($result)){
			$USER_DATA2 = mysql_fetch_array($result);
		} else {
			$USER_DATA2 = $default_group;
		}
		
		$USER_DATA = array_merge($USER_DATA, $USER_DATA2);

	    define('USER_GROUP', $USER_DATA['group_name']);
		define('USER_GROUP_SET', '('.$USER_DATA['group_id'].')');
	    define('USER_IS_ADMIN', USER_ID ? ($USER_DATA['mgroup'] == IB_ADMIN_GROUP) : 0);
	    define('USER_CAN_SEND_ECARDS', (int)$USER_DATA['can_send_ecards']);
	    define('USER_CAN_RATE_PICTURES', (int)$USER_DATA['can_rate_pictures']);
	    define('USER_CAN_POST_COMMENTS', (int)$USER_DATA['can_post_comments']);
	    define('USER_CAN_UPLOAD_PICTURES', (int)$USER_DATA['can_upload_pictures']);
	    define('USER_CAN_CREATE_ALBUMS', USER_ID ? (int)$USER_DATA['can_create_albums'] : 0);
		mysql_free_result($result);
	} else {
	    $result = db_query("SELECT * FROM {$CONFIG['TABLE_USERGROUPS']} WHERE group_id = ".IB_GUEST_GROUP);
		if (!mysql_num_rows($result)) {
			$USER_DATA = $default_group;
		} else {
			$USER_DATA = mysql_fetch_array($result);
		}
	    define('USER_ID', 0);
	    define('USER_NAME', 'Anonymous');
		define('USER_GROUP_SET', '('.IB_GUEST_GROUP.')');
	    define('USER_IS_ADMIN', 0);
	    define('USER_CAN_SEND_ECARDS', (int)$USER_DATA['can_send_ecards']);
	    define('USER_CAN_RATE_PICTURES', (int)$USER_DATA['can_rate_pictures']);
	    define('USER_CAN_POST_COMMENTS', (int)$USER_DATA['can_post_comments']);
	    define('USER_CAN_UPLOAD_PICTURES', (int)$USER_DATA['can_upload_pictures']);
	    define('USER_CAN_CREATE_ALBUMS', 0);
		mysql_free_result($result);
	}
}

// Retrieve the name of a user
function udb_get_user_name($uid)
{
	global $UDB_DB_LINK_ID, $UDB_DB_NAME_PREFIX, $CONFIG;

	$sql = "SELECT name as user_name ".
		   "FROM ".$UDB_DB_NAME_PREFIX.IB_TABLE_PREFIX.IB_USER_TABLE." ".
		   "WHERE id = '$uid'";

	$result = db_query($sql, $UDB_DB_LINK_ID);

	if (mysql_num_rows($result)) {
	    $row = mysql_fetch_array($result);
		mysql_free_result($result);
		return $row['user_name'];
	} else {
		return '';
	}
}

// Redirect
function udb_redirect($target)
{
	header('Location: '.IB_WEB_PATH.$target);
	exit;
}

// Register
function udb_register_page()
{
	$target = 'index.php?&act=Reg&CODE=00';
	udb_redirect($target);
}

// Login
function udb_login_page()
{
	$target = 'index.php?&act=Login&CODE=00';
	udb_redirect($target);
}

// Logout
function udb_logout_page()
{
	$target = 'index.php?&act=Login&CODE=03';
	udb_redirect($target);
}

// Edit users
function udb_edit_users()
{
	$target = 'admin.php';
	udb_redirect($target);
}

// Get user information
function udb_get_user_infos($uid)
{
	global $CONFIG, $UDB_DB_NAME_PREFIX, $UDB_DB_LINK_ID;
	global $lang_register_php;

	$sql = "SELECT name as user_name, mgroup, email as user_email, joined as user_regdate, ".
		   "location as user_location, interests as user_interests, website as user_website ".
		   "FROM ".$UDB_DB_NAME_PREFIX.IB_TABLE_PREFIX.IB_USER_TABLE." ".
		   "WHERE id = '$uid'";
	$result = db_query($sql, $UDB_DB_LINK_ID);

	if(!mysql_num_rows($result)) cpg_die(ERROR, $lang_register_php['err_unk_user'], __FILE__, __LINE__);
	$user_data = mysql_fetch_array($result);
	mysql_free_result($result);

	$user_data['group_name'] = '';
	$user_data['user_occupation'] = '';

	$sql =  "SELECT group_name ".
			"FROM {$CONFIG['TABLE_USERGROUPS']} ".
			"WHERE group_id = {$user_data['mgroup']} ";
	$result = db_query($sql);

	if(mysql_num_rows($result)){
		$row = mysql_fetch_array($result);
		$user_data['group_name'] = $row['group_name'];
	}
	mysql_free_result($result);
	
	return $user_data;
}

// Edit user profile
function udb_edit_profile($uid)
{
	$target = 'index.php?&act=UserCP&CODE=00';
	udb_redirect($target);
}

// Query used to list users
function udb_list_users_query(&$user_count)
{
	global $CONFIG, $FORBIDDEN_SET;
	
	$sql =  "SELECT (category - ".FIRST_USER_CAT.") as user_id,".
			"		'???' as user_name,".
			"		COUNT(DISTINCT a.aid) as alb_count,".
			"		COUNT(DISTINCT pid) as pic_count,".
			"		MAX(pid) as thumb_pid ".
			"FROM {$CONFIG['TABLE_ALBUMS']} AS a ".
			"INNER JOIN {$CONFIG['TABLE_PICTURES']} AS p ON p.aid = a.aid ".
			"WHERE approved = 'YES' AND category > ".FIRST_USER_CAT." ".
			"$FORBIDDEN_SET ".
			"GROUP BY category ".
			"ORDER BY category ";
	$result = db_query($sql);
	
	$user_count = mysql_num_rows($result);
	
	return $result;
}

function udb_list_users_retrieve_data($result, $lower_limit, $count)
{
	global $CONFIG, $UDB_DB_NAME_PREFIX, $UDB_DB_LINK_ID;
	
	mysql_data_seek($result, $lower_limit);

	$rowset = array();
	$i=0;
	$user_id_set='';
	
	while (($row = mysql_fetch_array($result)) && ($i++ < $count)){
		$user_id_set .= $row['user_id'].',';
		$rowset[] = $row;
	}
	mysql_free_result($result);

	$user_id_set = '('.substr($user_id_set, 0, -1).')';
	$sql = "SELECT id as user_id, name as user_name ".
		   "FROM ".$UDB_DB_NAME_PREFIX.IB_TABLE_PREFIX.IB_USER_TABLE." ".
		   "WHERE id IN $user_id_set";
	$result = db_query($sql, $UDB_DB_LINK_ID);
	while ($row = mysql_fetch_array($result)){
		$name[$row['user_id']] = $row['user_name'];
	}
	for($i=0; $i<count($rowset); $i++){
		$rowset[$i]['user_name'] = empty($name[$rowset[$i]['user_id']]) ? '???' : $name[$rowset[$i]['user_id']];
	}
	
	return $rowset;
}

// Group table synchronisation
function udb_synchronize_groups()
{
	global $CONFIG, $UDB_DB_NAME_PREFIX, $UDB_DB_LINK_ID;

	$result = db_query("SELECT g_id, g_title FROM ".$UDB_DB_NAME_PREFIX.IB_TABLE_PREFIX.IB_GROUP_TABLE." WHERE 1", $UDB_DB_LINK_ID);
	while ($row = mysql_fetch_array($result)){
		$ib_groups[$row['g_id']] = $row['g_title'];
	}
	mysql_free_result($result);
	
	$result=db_query("SELECT group_id, group_name FROM {$CONFIG['TABLE_USERGROUPS']} WHERE 1");
	while ($row = mysql_fetch_array($result)){
		$cpg_groups[$row['group_id']] = $row['group_name'];
	}
	mysql_free_result($result);
	
	// Scan Coppermine groups that need to be deleted
	foreach($cpg_groups as $c_group_id => $c_group_name){
		if ((!isset($ib_groups[$c_group_id]))) {
   			db_query("DELETE FROM {$CONFIG['TABLE_USERGROUPS']} WHERE group_id = '".$c_group_id."' LIMIT 1");
			unset($cpg_groups[$c_group_id]);
		}
	}
	
	// Scan Invision Board groups that need to be created inside Coppermine table
	foreach($ib_groups as $i_group_id => $i_group_name){
		if ((!isset($cpg_groups[$i_group_id]))) {
			db_query("INSERT INTO {$CONFIG['TABLE_USERGROUPS']} (group_id, group_name) VALUES ('$i_group_id', '".addslashes($i_group_name)."')");
			$cpg_groups[$i_group_id] = $i_group_name;
		}
	}
	
	// Update Group names
	foreach($ib_groups as $i_group_id => $i_group_name){
		if ($cpg_groups[$i_group_id] != $i_group_name) {
			db_query("UPDATE {$CONFIG['TABLE_USERGROUPS']} SET group_name = '".addslashes($i_group_name)."' WHERE group_id = '$i_group_id' LIMIT 1");
		}
	}
}

// Retrieve the album list used in gallery admin mode
function udb_get_admin_album_list()
{
	global $CONFIG, $UDB_DB_NAME_PREFIX, $UDB_DB_LINK_ID, $FORBIDDEN_SET;

	if (UDB_CAN_JOIN_TABLES) {
		$sql = "SELECT aid, CONCAT('(', name, ') ', a.title) AS title ".
			   "FROM {$CONFIG['TABLE_ALBUMS']} AS a ".
			   "INNER JOIN ".$UDB_DB_NAME_PREFIX.IB_TABLE_PREFIX.IB_USER_TABLE." AS u ON category = (".FIRST_USER_CAT." + id) ".
			   "ORDER BY title";
		return $sql;
	} else {
		$sql = "SELECT aid, IF(category > ".FIRST_USER_CAT.", CONCAT('* ', title), CONCAT(' ', title)) AS title ".
			   "FROM {$CONFIG['TABLE_ALBUMS']} ".
			   "ORDER BY title";
		return $sql;
	}
}

// ------------------------------------------------------------------------- //

// Define wheter we can join tables or not in SQL queries (same host & same db or user)
define('UDB_CAN_JOIN_TABLES', (IB_BD_HOST == $CONFIG['dbserver'] && (IB_DB_NAME == $CONFIG['dbname'] || IB_DB_USERNAME == $CONFIG['dbuser'])));

// Connect to Invision Board Database if necessary
$UDB_DB_LINK_ID = 0;
$UDB_DB_NAME_PREFIX = IB_DB_NAME ? '`'.IB_DB_NAME.'`.' : '';
if (!UDB_CAN_JOIN_TABLES) {
	$UDB_DB_LINK_ID = @mysql_connect(IB_BD_HOST, IB_DB_USERNAME, IB_DB_PASSWORD);
	if (!$UDB_DB_LINK_ID) die("<b>Coppermine critical error</b>:<br />Unable to connect to Invision Board database !<br /><br />MySQL said: <b>".mysql_error()."</b>");
}
?>