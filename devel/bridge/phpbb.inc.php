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
//  phpBB2 Integration for Coppermine
//
// ------------------------------------------------------------------------- //

// ------------------------------------------------------------------------- //
//  Modify the values below according to your Board installation
// ------------------------------------------------------------------------- //

// database configuration
define('PHPBB_DB_NAME','phpBB');	// The name of the database used by the board
define('PHPBB_BD_HOST','localhost');// The name of the database server
define('PHPBB_DB_USERNAME','root');	// The username to use to connect to the database
define('PHPBB_DB_PASSWORD','');		// The password to use to connect to the database

// The web path to your phpBB directory
// In this example http://yoursite_name.com/phpBB2/
define('PHPBB_WEB_PATH','/phpBB2/');

// ------------------------------------------------------------------------- //
//  You can keep the default values below if your instalation is standard
// ------------------------------------------------------------------------- //

// The prefix for the phpBB cookies
define('PHPBB_COOKIE_PREFIX','phpbb2mysql');// The prefix used for board cookies

// Prefix and names for the database tables
define('PHPBB_TABLE_PREFIX','phpbb_');		// The prefix used for the DB tables
define('PHPBB_USER_TABLE', 'users');		// The members table
define('PHPBB_SESSION_TABLE', 'sessions');	// The session table
define('PHPBB_GROUP_TABLE', 'groups');		// The groups table
define('PHPBB_UGROUP_TABLE', 'user_group');	// The group/user table

// ------------------------------------------------------------------------- //
//  Nothing to edit below this line
// ------------------------------------------------------------------------- //

// Group definitions
define('PHPBB_ADMIN_GROUP', 1);
define('PHPBB_MEMBERS_GROUP', 2);
define('PHPBB_GUEST_GROUP', 3);
define('PHPBB_BANNED_GROUP', 4);

// Authenticate a user using cookies
function udb_authenticate()
{
	global $HTTP_COOKIE_VARS, $USER_DATA, $UDB_DB_LINK_ID, $UDB_DB_NAME_PREFIX, $CONFIG;
	
	// For error checking
	$CONFIG['TABLE_USERS'] = '**ERROR**';

	$default_group = array(
		'group_id' => PHPBB_GUEST_GROUP,
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
	if (!isset($HTTP_COOKIE_VARS[PHPBB_COOKIE_PREFIX.'_data'])) {
		$cookie_uid  = 0;
		$cookie_pass = '*';
	} else {
		$sessiondata = unserialize($HTTP_COOKIE_VARS[PHPBB_COOKIE_PREFIX . '_data']);
		if (is_array($sessiondata)) {
			$cookie_uid  = ( isset($sessiondata['userid']) ) ? intval($sessiondata['userid']) : 0;
			$cookie_pass = ( isset($sessiondata['autologinid']) ) ? addslashes($sessiondata['autologinid']) : '*';
		} else {
			$cookie_uid  = 0;
			$cookie_pass = '*';
		}
	}
	
	// If autologin was not selected, we need to use the sessions table
	if($cookie_uid && !$cookie_pass && isset($HTTP_COOKIE_VARS[PHPBB_COOKIE_PREFIX.'_sid'])){

		$session_id = addslashes($HTTP_COOKIE_VARS[PHPBB_COOKIE_PREFIX.'_sid']);

		$sql = "SELECT user_id, username as user_name, user_level ".
			   "FROM ".$UDB_DB_NAME_PREFIX.PHPBB_TABLE_PREFIX.PHPBB_SESSION_TABLE." ".
			   "INNER JOIN ".$UDB_DB_NAME_PREFIX.PHPBB_TABLE_PREFIX.PHPBB_USER_TABLE." ON session_user_id = user_id ".
			   "WHERE session_id='$session_id' AND session_user_id ='$cookie_uid'";

	} else {

		$sql = "SELECT user_id, username as user_name, user_level ".
			   "FROM ".$UDB_DB_NAME_PREFIX.PHPBB_TABLE_PREFIX.PHPBB_USER_TABLE." ".
			   "WHERE user_id='$cookie_uid' AND user_password='$cookie_pass'";

	}
	$result = db_query($sql, $UDB_DB_LINK_ID);
	
	if (mysql_num_rows($result)){
		$USER_DATA = mysql_fetch_array($result);
		mysql_free_result($result);
	
	    define('USER_ID', (int)$USER_DATA['user_id']);
	    define('USER_NAME', $USER_DATA['user_name']);

		// Define the basic groups
		if($USER_DATA['user_level']==1){
			$user_group_set = PHPBB_ADMIN_GROUP.','.PHPBB_MEMBERS_GROUP.',';
		} else {
			$user_group_set = PHPBB_MEMBERS_GROUP.',';
		}
		
		// Retrieve the groups the user is a member of
		$sql =  "SELECT (ug.group_id + 5) as group_id ".
				"FROM ".$UDB_DB_NAME_PREFIX.PHPBB_TABLE_PREFIX.PHPBB_UGROUP_TABLE." as ug ".
				"LEFT JOIN ".$UDB_DB_NAME_PREFIX.PHPBB_TABLE_PREFIX.PHPBB_GROUP_TABLE." as g ON ug.group_id = g.group_id ".
				"WHERE user_id = ".USER_ID." AND user_pending = 0 AND group_single_user = 0";
		$result = db_query($sql);
		while($row = mysql_fetch_array($result)){
			$user_group_set .= $row['group_id'].',';
		}
		mysql_free_result($result);
		
		$user_group_set = '('.substr($user_group_set, 0, -1).')';

		// Default group data
		$USER_DATA['group_quota'] = 1;
		$USER_DATA['can_rate_pictures'] = 0;
		$USER_DATA['can_send_ecards'] = 0;
		$USER_DATA['can_post_comments'] = 0;
		$USER_DATA['can_upload_pictures'] = 0;
		$USER_DATA['can_create_albums'] = 0;
		$USER_DATA['pub_upl_need_approval'] = 1;
		$USER_DATA['priv_upl_need_approval'] = 1;
		
		$sql = "SELECT  group_quota as gq, ".
			   "		can_rate_pictures as crp, ".
			   "		can_send_ecards as cse, ".
			   "		can_post_comments as cpc, ".
			   "		can_upload_pictures as cup, ".
			   "		can_create_albums as cca, ".
			   "		pub_upl_need_approval as puna, ".
			   "		priv_upl_need_approval as pruna ".
			   "FROM {$CONFIG['TABLE_USERGROUPS']} ".
			   "WHERE group_id IN ".$user_group_set;
		$result = db_query($sql);

		// Merge permissions for groups the user is a member of
		while($row = mysql_fetch_array($result)){
			$USER_DATA['can_rate_pictures'] += $row['crp'];
			$USER_DATA['can_send_ecards'] += $row['cse'];
			$USER_DATA['can_post_comments'] += $row['cpc'];
			$USER_DATA['can_upload_pictures'] += $row['cup'];
			$USER_DATA['can_create_albums'] += $row['cca'];
			$USER_DATA['pub_upl_need_approval'] *= $row['puna'];
			$USER_DATA['priv_upl_need_approval'] *= $row['pruna'];
			
			$quota = $USER_DATA['group_quota'];
			if(($quota && $row['gq'] > $quota) || !$row['gq']) $USER_DATA['group_quota'] = $row['gq'];
		}
		mysql_free_result($result);

	    define('USER_GROUP', '');
		define('USER_GROUP_SET', $user_group_set);
	    define('USER_IS_ADMIN', ($USER_DATA['user_level'] == 1));
	    define('USER_CAN_SEND_ECARDS', (int)$USER_DATA['can_send_ecards']);
	    define('USER_CAN_RATE_PICTURES', (int)$USER_DATA['can_rate_pictures']);
	    define('USER_CAN_POST_COMMENTS', (int)$USER_DATA['can_post_comments']);
	    define('USER_CAN_UPLOAD_PICTURES', (int)$USER_DATA['can_upload_pictures']);
	    define('USER_CAN_CREATE_ALBUMS', (int)$USER_DATA['can_create_albums']);
	} else {
	    $result = db_query("SELECT * FROM {$CONFIG['TABLE_USERGROUPS']} WHERE group_id = ".PHPBB_GUEST_GROUP);
		if (!mysql_num_rows($result)) {
			$USER_DATA = $default_group;
		} else {
			$USER_DATA = mysql_fetch_array($result);
		}
	    define('USER_ID', 0);
	    define('USER_NAME', 'Anonymous');
		define('USER_GROUP_SET', '('.PHPBB_GUEST_GROUP.')');
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

	$sql = "SELECT username as user_name ".
		   "FROM ".$UDB_DB_NAME_PREFIX.PHPBB_TABLE_PREFIX.PHPBB_USER_TABLE." ".
		   "WHERE user_id = '$uid'";

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
	header('Location: '.PHPBB_WEB_PATH.$target);
	exit;
}

// Register
function udb_register_page()
{
	$target = 'profile.php?mode=register';
	udb_redirect($target);
}

// Login
function udb_login_page()
{
	global $CONFIG;

	$target = 'login.php';
	udb_redirect($target);
}

// Logout
function udb_logout_page()
{
	global $CONFIG;

	$target = 'login.php?logout=true';
	udb_redirect($target);
}

// Edit users
function udb_edit_users()
{
	$target = 'admin/index.php';
	udb_redirect($target);
}

// Get user information
function udb_get_user_infos($uid)
{
	global $UDB_DB_NAME_PREFIX, $UDB_DB_LINK_ID;
	global $lang_register_php;

	$sql = "SELECT username as user_name, user_email, user_regdate, ".
		   "user_from as user_location, user_interests, user_website, user_occ as user_occupation ".
		   "FROM ".$UDB_DB_NAME_PREFIX.PHPBB_TABLE_PREFIX.PHPBB_USER_TABLE." ".
		   "WHERE user_id = '$uid'";
	$result = db_query($sql, $UDB_DB_LINK_ID);
	if(!mysql_num_rows($result)) cpg_die(ERROR, $lang_register_php['err_unk_user'], __FILE__, __LINE__);
	
	$user_data = mysql_fetch_array($result);
	$user_data['group_name'] = '';
	mysql_free_result($result);

	return $user_data;
}

// Edit user profile
function udb_edit_profile($uid)
{
	$target = 'profile.php?mode=editprofile';
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
	$sql = "SELECT user_id, username as user_name ".
		   "FROM ".$UDB_DB_NAME_PREFIX.PHPBB_TABLE_PREFIX.PHPBB_USER_TABLE." ".
		   "WHERE user_id IN $user_id_set";
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

	$PHPBB_groups = array(
		PHPBB_ADMIN_GROUP => 'Admin',
		PHPBB_MEMBERS_GROUP => 'Members',
		PHPBB_GUEST_GROUP => 'Guests',
		PHPBB_BANNED_GROUP => 'Banned',
	);
	
	$sql =  "SELECT (ug.group_id + 5) as group_id, group_name ".
			"FROM ".$UDB_DB_NAME_PREFIX.PHPBB_TABLE_PREFIX.PHPBB_UGROUP_TABLE." as ug ".
			"LEFT JOIN ".$UDB_DB_NAME_PREFIX.PHPBB_TABLE_PREFIX.PHPBB_GROUP_TABLE." as g ON ug.group_id = g.group_id ".
			"WHERE user_pending=0 AND group_single_user=0";
	$result = db_query($sql, $UDB_DB_LINK_ID);
	while ($row = mysql_fetch_array($result)){
		$PHPBB_groups[$row['group_id']] = $row['group_name'];
	}
	mysql_free_result($result);
	
	$result=db_query("SELECT group_id, group_name FROM {$CONFIG['TABLE_USERGROUPS']} WHERE 1");
	while ($row = mysql_fetch_array($result)){
		$cpg_groups[$row['group_id']] = $row['group_name'];
	}
	mysql_free_result($result);
	
	// Scan Coppermine groups that need to be deleted
	foreach($cpg_groups as $c_group_id => $c_group_name){
		if ((!isset($PHPBB_groups[$c_group_id]))) {
   			db_query("DELETE FROM {$CONFIG['TABLE_USERGROUPS']} WHERE group_id = '".$c_group_id."' LIMIT 1");
			unset($cpg_groups[$c_group_id]);
		}
	}
	
	// Scan phpBB groups that need to be created inside Coppermine table
	foreach($PHPBB_groups as $i_group_id => $i_group_name){
		if ((!isset($cpg_groups[$i_group_id]))) {
			db_query("INSERT INTO {$CONFIG['TABLE_USERGROUPS']} (group_id, group_name) VALUES ('$i_group_id', '".addslashes($i_group_name)."')");
			$cpg_groups[$i_group_id] = $i_group_name;
		}
	}
	
	// Update Group names
	foreach($PHPBB_groups as $i_group_id => $i_group_name){
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
		$sql = "SELECT aid, CONCAT('(', username, ') ', title) AS title ".
			   "FROM {$CONFIG['TABLE_ALBUMS']} AS a ".
			   "INNER JOIN ".$UDB_DB_NAME_PREFIX.PHPBB_TABLE_PREFIX.PHPBB_USER_TABLE." AS u ON category = (".FIRST_USER_CAT." + user_id) ".
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
define('UDB_CAN_JOIN_TABLES', (PHPBB_BD_HOST == $CONFIG['dbserver'] && (PHPBB_DB_NAME == $CONFIG['dbname'] || PHPBB_DB_USERNAME == $CONFIG['dbuser'])));
//define('UDB_CAN_JOIN_TABLES', false);

// Connect to phpBB database if necessary
$UDB_DB_LINK_ID = 0;
$UDB_DB_NAME_PREFIX = PHPBB_DB_NAME ? '`'.PHPBB_DB_NAME.'`.' : '';
if (!UDB_CAN_JOIN_TABLES) {
	$UDB_DB_LINK_ID = @mysql_connect(PHPBB_BD_HOST, PHPBB_DB_USERNAME, PHPBB_DB_PASSWORD);
	if (!$UDB_DB_LINK_ID) die("<b>Coppermine critical error</b>:<br />Unable to connect to phpBB Board database !<br /><br />MySQL said: <b>".mysql_error()."</b>");
}
?>