<?
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

require 'udb_base.inc.php';

class cpg_udb extends core_udb {

	function cpg_udb()
	{
		global $BRIDGE,$CONFIG;
		
		if (!USE_BRIDGEMGR) {

			$this->boardurl = 'http://localhost/coppermine';
			include_once('../include/config.inc.php');

		} else {
			//include_once($BRIDGE['relative_path_to_config_file'] . 'config.inc.php');
			$this->boardurl = $CONFIG['site_url'];
			$this->use_post_based_groups = @$BRIDGE['use_post_based_groups'];
		}
		
		$this->multigroups = 0;

		$this->group_overrride = !$this->use_post_based_groups;
		
		// Database connection settings
		$this->db = array(
			'name' => $CONFIG['dbname'],
			'host' => $CONFIG['dbserver'] ? $CONFIG['dbserver'] : 'localhost',
			'user' => $CONFIG['dbuser'],
			'password' => $CONFIG['dbpass'],
			'prefix' =>$CONFIG['TABLE_PREFIX']
		);
		
		// Board table names
		$this->table = array(
			'users' => 'users',
			'groups' => 'usergroups',
		);

		// Derived full table names
		$this->usertable = '`' . $this->db['name'] . '`.' . $this->db['prefix'] . $this->table['users'];
		$this->groupstable =  '`' . $this->db['name'] . '`.' . $this->db['prefix'] . $this->table['groups'];

		// Table field names
		$this->field = array(
			'username' => 'user_name', // name of 'username' field in users table
			'user_id' => 'user_id', // name of 'id' field in users table
			'password' => 'user_password', // name of 'password' field in users table
			'email' => 'user_email', // name of 'email' field in users table
			'regdate' => 'UNIX_TIMESTAMP(user_regdate)', // name of 'registered' field in users table
			'lastvisit' => 'UNIX_TIMESTAMP(user_lastvisit)', // last time user logged in
			'active' => 'user_active', // is user account active?
			'location' => "''", // name of 'location' field in users table
			'website' => "''", // name of 'website' field in users table
			'usertbl_group_id' => 'user_group', // name of 'group id' field in users table
			'grouptbl_group_id' => 'group_id', // name of 'group id' field in groups table
			'grouptbl_group_name' => 'group_name' // name of 'group name' field in groups table
		);
		
		// Pages to redirect to
		$this->page = array(
			'register' => 'register.php',
			'editusers' => 'usermgr.php',
			'edituserprofile' => 'profile.php'
		);

		// Group ids - admin and guest only.
		$this->admingroups = array(1);
		$this->guestgroup = 3;
		
		// Connect to db
		$this->connect($CONFIG['LINK_ID']);
	}

	// Get groups of which user is member
	function get_groups($row)
	{
		$i = 1;
		$data[0] = in_array($row['group_id'] - 100, $this->admingroups) ? $i : 2;
		
		if ($this->use_post_based_groups){
			$sql = "SELECT ug.{$this->field['usertbl_group_id']}+100 AS group_id FROM {$this->usertable} AS u, {$this->groupstable} as g WHERE u.{$this->field['user_id']}='{$row[$this->field['user_id']]}' AND g.{$this->field['grouptbl_group_id']} = u.{$this->field['usertbl_group_id']}";

			$result = cpg_db_query($sql, $this->link_id);
        
			while ($row = mysql_fetch_array($result)) {
				$data[] = $row['group_id'];
			}
		}

		return $data;
	}

	// definition of how to extract an id and password hash from a cookie
	function cookie_extraction()
	{
        global $CONFIG;

		// Default anonymous values
		$id = 0;
		$pass = '';

        // Retrieve cookie stored login information
        if (isset($_COOKIE[$CONFIG['cookie_name'] . '_uid']) && isset($_COOKIE[$CONFIG['cookie_name'] . '_pass'])) {
            $id = (int)$_COOKIE[$CONFIG['cookie_name'] . '_uid'];
            $pass = substr(addslashes($_COOKIE[$CONFIG['cookie_name'] . '_pass']), 0, 32);
        }

		return ($id) ? array($id, $pass) : false;
	}
	
	// definition of actions required to convert a password from user database form to cookie form
	function udb_hash_db($password)
	{
		return md5($password);
	}

	/*
	 * Overidden functions !!DO NOT REMOVE OR CPG WILL NOT WORK CORRECTLY!!
	 */
	// definition of how to extract id, name, group from a session cookie
	function session_extraction($cookie_id)
	{	}

	function session_update() 
    {	}

	// Register
	function register_page()
	{	}

	// Edit users
	function edit_users()
	{	}

	// View users
	function view_users()
	{	}

	// View user profile
	function view_profile($uid)
	{	}

	// Edit user profile
	function edit_profile($uid)
	{	}

	function login_page()
	{	}

	function logout_page()
	{	}
	
	function synchronize_groups()
	{   }
}

// and go !
$cpg_udb = new cpg_udb;
?>
