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
  Coppermine version: 1.4.21
  $HeadURL$
  $Revision$
  $Author$
  $Date$
**********************************************/

/* 

Login redirection:

edit phpbb file: ucp.php

find: login_box("index.$phpEx$SID");
change to login_box(request_var('redirect', "index.$phpEx$SID"));


Logout redirection:

edit phpbb file ucp.php

find: meta_refresh(3, "index.$phpEx$SID");
change to : meta_refresh(3, request_var('redirect', "index.$phpEx$SID"));

*/

if (!defined('IN_COPPERMINE')) die('Not in Coppermine...');

// Switch that allows overriding the bridge manager with hard-coded values
define('USE_BRIDGEMGR', 1);

require_once 'bridge/udb_base.inc.php';

class cpg_udb extends core_udb {

	function cpg_udb()
	{
		global $BRIDGE;
		
		if (!USE_BRIDGEMGR) { // the vars that are used when bridgemgr is disabled

			// URL of your punbb
			$this->boardurl = 'http://localhost/phpBB2';

			// local path to your punbb config file
			require_once('../phpBB2/config.php');

		} else { // the vars from the bridgemgr
			$this->boardurl = $BRIDGE['full_forum_url'];
			require_once($BRIDGE['relative_path_to_config_file'] . 'config.php');
		}
		
		// Database connection settings
		$this->db = array(
			'name' => $dbname,
			'host' => $dbhost ? $dbhost : 'localhost',
			'user' => $dbuser,
			'password' => $dbpasswd,
			'prefix' =>$table_prefix
		);
		
		// Board table names
		$this->table = array(
			'users' => 'users',
			'groups' => 'groups',
			'sessions' => 'sessions'
		);

		// Derived full table names
		$this->usertable = '`' . $this->db['name'] . '`.' . $this->db['prefix'] . $this->table['users'];
		$this->groupstable =  '`' . $this->db['name'] . '`.' . $this->db['prefix'] . $this->table['groups'];
		$this->sessionstable =  '`' . $this->db['name'] . '`.' . $this->db['prefix'] . $this->table['sessions'];
		
		// Table field names
		$this->field = array(
			'username' => 'username', // name of 'username' field in users table
			'user_id' => 'user_id', // name of 'id' field in users table
			'password' => 'user_password', // name of 'password' field in users table
			'email' => 'user_email', // name of 'email' field in users table
			'regdate' => 'user_regdate', // name of 'registered' field in users table
			'active' => 'user_active', // is user account active?
			'lastvisit' => 'user_lastvisit', // name of 'location' field in users table
			'location' => 'user_from', // name of 'location' field in users table
			'website' => 'user_website', // name of 'website' field in users table
			'usertbl_group_id' => 'group_id', // name of 'group id' field in users table
			'grouptbl_group_id' => 'group_id', // name of 'group id' field in groups table
			'grouptbl_group_name' => 'group_name' // name of 'group name' field in groups table
		);
		
		// Pages to redirect to
		$this->page = array(
			'register' => '/ucp.php?mode=register',
			'editusers' => '/memberlist.php',
			'edituserprofile' => "/memberlist.php?mode=viewprofile&u=",
		);

		// Group ids
		$this->admingroups = array(7);
		$this->guestgroup = 1;
		
		// Cookie settings - used in following functions only
		$this->cookie_name = $BRIDGE['cookie_prefix'];
		$this->cookie_seed = '';
		
		// Connect to db
		$this->connect();
	}

	// definition of how to extract id, name, group from a session cookie
	function session_extraction()
	{
		if (isset($_COOKIE[$this->cookie_name . '_sid'])) {
			$session_id = addslashes($_COOKIE[$this->cookie_name . '_sid']);
			
			$sql = "SELECT user_id, username, group_id FROM {$this->sessionstable} INNER JOIN {$this->usertable} ON session_user_id = user_id WHERE session_id='$session_id';"; // AND session_user_id ='$cookie_id'"; (Maybe session_id is unique enough?)
			
			$result = cpg_db_query($sql, $this->link_id);
			
			if (mysql_num_rows($result)){
				$row = mysql_fetch_array($result);
				return $row;
			} else {
			    return false;
			}
		}
	}
	
	// definition of how to extract an id and password hash from a cookie
	function cookie_extraction()
	{
	    $id = 0;
		$pass = '';

        if (isset($_COOKIE[$this->cookie_name.'_data'])){
			$sessiondata = unserialize($_COOKIE[$this->cookie_name.'_data']);
			$id = $sessiondata['userid'] > 1 ? intval($sessiondata['userid']) : 0;
            $pass = (isset($sessiondata['autologinid'])) ? addslashes($sessiondata['autologinid']) : '';
		}
	
		return ($id) ? array($id, $pass) : false;
	}
	
	// definition of actions required to convert a password from user database form to cookie form
	function udb_hash_db($password)
	{
		return $password; // unused
	}
	
	function login_page()
	{
		global $CONFIG;
		
		$redirect = urlencode($CONFIG['site_url']);
		$this->redirect("/ucp.php?mode=login&redirect=$redirect");
	}

	function logout_page()
	{
		global $CONFIG;
		
		$redirect = urlencode($CONFIG['site_url']);
        $this->redirect("/ucp.php?mode=logout&redirect=$redirect");
	}

	function view_users() {}
	function view_profile() {}
}

// and go !
$cpg_udb = new cpg_udb;
?>
