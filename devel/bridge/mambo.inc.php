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

require 'udb_base.inc.php';

class cpg_udb extends core_udb {

	function cpg_udb()
	{
		global $BRIDGE;
		
		if (!USE_BRIDGEMGR) {

			$this->boardurl = 'http://localhost/mambo';
			include('../mambo/configuration.php');

		} else {
			include($BRIDGE['relative_path_to_config_file'] . 'configuration.php');
			$this->boardurl = $mosConfig_live_site;
			$this->use_post_based_groups = $BRIDGE['use_post_based_groups'];
		}
		
		$this->multigroups = 0;
		
		$this->group_overrride = !$this->use_post_based_groups;
		
		// Database connection settings
		$this->db = array(
			'name' => $mosConfig_db,
			'host' => $mosConfig_host ? $mosConfig_host : 'localhost',
			'user' => $mosConfig_user,
			'password' => $mosConfig_password,
			'prefix' =>$mosConfig_dbprefix
		);
		
		// Board table names
		$this->table = array(
			'users' => 'users',
			'groups' => 'core_acl_aro_groups',
			'sessions' => 'session'
		);

		// Derived full table names
		$this->usertable = '`' . $this->db['name'] . '`.' . $this->db['prefix'] . $this->table['users'];
		$this->groupstable =  '`' . $this->db['name'] . '`.' . $this->db['prefix'] . $this->table['groups'];
		$this->sessionstable =  '`' . $this->db['name'] . '`.' . $this->db['prefix'] . $this->table['sessions'];
		
		// Table field names
		$this->field = array(
			'username' => 'username', // name of 'username' field in users table
			'user_id' => 'id', // name of 'id' field in users table
			'password' => 'password', // name of 'password' field in users table
			'email' => 'email', // name of 'email' field in users table
			'regdate' => 'UNIX_TIMESTAMP(registerDate)', // name of 'registered' field in users table
			'location' => "''", // name of 'location' field in users table
			'website' => "''", // name of 'website' field in users table
			'usertbl_group_id' => 'gid', // name of 'group id' field in users table
			'grouptbl_group_id' => 'group_id', // name of 'group id' field in groups table
			'grouptbl_group_name' => 'name' // name of 'group name' field in groups table
		);
		
		// Pages to redirect to
		$this->page = array(
			'register' => '/index.php?option=com_registration&task=register',
			'editusers' => '/administrator/index.php',
			'edituserprofile' => '/index.php?option=com_user&task=UserDetails'
		);
		
		// Group ids - admin and guest only.
		$this->admingroup = 25;
		$this->guestgroup = $this->use_post_based_groups ? 1 : 3;
		
		// Connect to db
		$this->connect();
	}

	// definition of how to extract id, name, group from a session cookie
	function session_extraction($cookie_id)
	{
		if (isset($_COOKIE['sessioncookie'])) {
			$sessiondata = $_COOKIE['sessioncookie'];
			$session_id = md5( $sessiondata . $_SERVER['REMOTE_ADDR'] );
			
			$sql = "SELECT username, userid AS id, group_id+100 AS gid FROM {$this->sessionstable} INNER JOIN {$this->groupstable} ON usertype = name WHERE session_id='$session_id'";
			
			$result = cpg_db_query($sql, $this->link_id);
			
			if (mysql_num_rows($result)){
				$row = mysql_fetch_array($result);
				return $row;
			}
		}
	}
	
	function collect_groups()
	{
		$sql ="SELECT * FROM {$this->groupstable}";
	
		$result = cpg_db_query($sql, $this->link_id);
		
		$udb_groups = array(1=>'Guests');
			
		while ($row = mysql_fetch_assoc($result))
		{
			$udb_groups[$row[$this->field['grouptbl_group_id']]+100] = ucfirst(strtolower($row[$this->field['grouptbl_group_name']]));
		}
		
		return $udb_groups;
		
	}
	
	// definition of how to extract an id and password hash from a cookie
	function cookie_extraction()
	{
		$id = 0;
		$pass = '';
	
		return array($id, $pass);
	}
	
	// definition of actions required to convert a password from user database form to cookie form
	function udb_hash_db($password)
	{
		return $password; // unused
	}
	
	function login_page()
	{
		$this->redirect("/index.php");
	}

	function logout_page()
	{
        $this->redirect("/index.php?option=logout&return=index.php");
	}
}

// and go !
$cpg_udb = new cpg_udb;
?>