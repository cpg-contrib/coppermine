<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2005 Coppermine Dev Team
  v1.1 originally written by Gregory DEMAR

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation; either version 2 of the License, or
  (at your option) any later version.
  ********************************************
  Coppermine version: 1.4.1
  $Source$
  $Revision$
  $Author$
  $Date$
**********************************************/

if (!defined('IN_COPPERMINE')) die('Not in Coppermine...');

// Switch that allows overriding the bridge manager with hard-coded values
define('USE_BRIDGEMGR', 1);

require 'bridge/udb_base.inc.php';

class cpg_udb extends core_udb {

	function cpg_udb()
	{
		global $BRIDGE;
		
		if (!USE_BRIDGEMGR) {
			$this->boardurl = 'http://www.yousite.com/phpBB2';
			require_once('../phpBB2/config.php');

		} else {
			$this->boardurl = $BRIDGE['full_forum_url'];
			require_once($BRIDGE['relative_path_to_config_file'] . 'config.php');
			$this->use_post_based_groups = $BRIDGE['use_post_based_groups'];
		}
		
		$this->multigroups = 1;
		
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
			'sessions' => 'sessions',
			'usergroups' => 'user_group'
		);

		// Derived full table names
		$this->usertable = '`' . $this->db['name'] . '`.' . $this->db['prefix'] . $this->table['users'];
		$this->groupstable =  '`' . $this->db['name'] . '`.' . $this->db['prefix'] . $this->table['groups'];
		$this->sessionstable =  '`' . $this->db['name'] . '`.' . $this->db['prefix'] . $this->table['sessions'];
		$this->usergroupstable = '`' . $this->db['name'] . '`.' . $this->db['prefix'] . $this->table['usergroups'];
		
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
		
		// Group ids - admin and guest only.
		$this->admingroups = array(2);
		$this->guestgroup = $this->use_post_based_groups ? 3 : 3;
		
		// Use a special function to collect groups for cpg groups table
		$this->group_overrride = 1;
		
		// Cookie settings - used in following functions only
		$this->cookie_name = $BRIDGE['cookie_prefix'];
		
		// Connect to db
		$this->connect();
	}

	function collect_groups()
	{
		$sql ="SELECT * FROM {$this->groupstable} WHERE group_single_user = 0";
	
		$result = cpg_db_query($sql, $this->link_id);
		
		$udb_groups = array(102 =>'Administrators', 2=> 'Registered', 3=>'Guests', 4=> 'Banned');
			
		while ($row = mysql_fetch_assoc($result))
		{
			$udb_groups[$row[$this->field['grouptbl_group_id']]+100] = ucfirst(strtolower($row[$this->field['grouptbl_group_name']]));
		}
		
		return $udb_groups;
		
	}
	// definition of how to extract id, name, group from a session cookie
	function session_extraction()
	{
		if (isset($_COOKIE[$this->cookie_name . '_sid'])) {			
			$session_id = addslashes($_COOKIE[$this->cookie_name . '_sid']);

			$sql = "SELECT u.{$this->field['user_id']} AS user_id, u.{$this->field['password']} AS password FROM {$this->usertable} AS u, {$this->sessionstable} AS s WHERE u.{$this->field['user_id']}=s.session_user_id AND s.session_id = '$session_id'";
			
			$result = cpg_db_query($sql, $this->link_id);

			if (mysql_num_rows($result)){
				$row = mysql_fetch_array($result);
				return $row;
			} else {
			    return false;
			}
		}
	}
	
	// Get groups of which user is member
	function get_groups($row)
	{
		if ($this->use_post_based_groups){
			$sql = "SELECT ug.{$this->field['usertbl_group_id']}+100 AS group_id FROM {$this->usertable} AS u, {$this->usergroupstable} AS ug, {$this->groupstable} as g WHERE u.{$this->field['user_id']}=ug.{$this->field['user_id']} AND u.{$this->field['user_id']}='{$row[$this->field['user_id']]}' AND g.{$this->field['grouptbl_group_id']} = ug.{$this->field['grouptbl_group_id']} AND g.group_single_user = 0";

			$result = cpg_db_query($sql, $this->link_id);
        
			while ($row = mysql_fetch_array($result)) {
				$data[] = $row['group_id'];
			}
		} else {
			$data[0] = in_array($row[$this->field['usertbl_group_id']] , $this->admingroups) ? 1 : 2;
		}
		
		return $data;
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
		
		$cpg = parse_url($CONFIG['site_url']);
		$bb = parse_url($this->boardurl);
		$levels = count(explode('/', $bb['path'])) - 1;
		$redirect = str_repeat('..', $levels) . rtrim($cpg['path'], '/') . '/';

		$this->redirect("/login.php?redirect=$redirect");
	}

	function logout_page()
	{
		global $CONFIG;
		
		$cpg = parse_url($CONFIG['site_url']);
		$bb = parse_url($this->boardurl);
		$levels = count(explode('/', $bb['path'])) - 1;
		$redirect = str_repeat('..', $levels) . rtrim($cpg['path'], '/') . '/';
		
		$this->redirect("/login.php?logout=true&redirect=$redirect");
	}

	function view_users() {}
	function view_profile() {}
}

// and go !
$cpg_udb = new cpg_udb;
?>
