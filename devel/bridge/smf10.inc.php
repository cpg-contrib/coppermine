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

if (!USE_BRIDGEMGR) {
	require_once('../smf/SSI.php');
	$boardurl = 'http://www.mysite.com/board';
} else {
	require_once($BRIDGE['relative_path_to_config_file'] . 'SSI.php');
}


class cpg_udb extends core_udb {

	function cpg_udb()
	{
		global $BRIDGE, $CONFIG, $boardurl, $db_prefix, $db_connection, $db_server, $db_name, $db_user, $user_settings;

		$this->use_post_based_groups = $BRIDGE['use_post_based_groups'];
		$this->boardurl = $boardurl;
		$this->multigroups = 1;
		$this->group_overrride = 1;


		// Board table names
		$this->table = array(
			'users' => 'members',
			'groups' => 'membergroups',
		);

		// Database connection settings
		$this->db = array(
			'name' => $db_name,
			'host' => $db_server ? $db_server : 'localhost',
			'user' => $db_user,
			'prefix' =>$db_prefix
		);
		
		// Derived full table names
		$this->usertable = '`' . $this->db['name'] . '`.' . $this->db['prefix'] . $this->table['users'];
		$this->groupstable =  '`' . $this->db['name'] . '`.' . $this->db['prefix'] . $this->table['groups'];
		
		// Table field names
		$this->field = array(
			'username' => 'memberName', // name of 'username' field in users table
			'user_id' => 'ID_MEMBER', // name of 'id' field in users table
			'email' => 'emailAddress', // name of 'email' field in users table
			'regdate' => 'dateRegistered', // name of 'registered' field in users table
			'location' => 'location', // name of 'location' field in users table
			'website' => 'websiteUrl', // name of 'website' field in users table
			'usertbl_group_id' => 'ID_GROUP', // name of 'group id' field in users table
			'grouptbl_group_id' => 'ID_GROUP', // name of 'group id' field in groups table
			'grouptbl_group_name' => 'groupName' // name of 'group name' field in groups table
		);
		
		// Pages to redirect to
		$this->page = array(
			'register' => '/index.php?action=register',
			'editusers' => '/index.php?action=mlist',
			'edituserprofile' => '/index.php?action=profile;u='
		);
		

		
		// Group ids - admin and guest only.
		$this->admingroup = $this->use_post_based_groups ? 1 : 1;
		$this->guestgroup = $this->use_post_based_groups ? 1 : 3;
		
		// Connect to db - or supply a connection id to be used instead of making own connection.
		$this->connect($db_connection);
	}

	function get_groups($row)
	{
		global $user_settings;
		
		$i = $this->use_post_based_groups ? 100 : 0;
		
		if ($user_settings['ID_GROUP'] == 0){
			$data[0] = 2;
		} else {
			$data[0] = $user_settings['ID_GROUP'] + $i;
		}
		
		if ($user_settings['additionalGroups']){
			
			$groups = explode(',', $user_settings['additionalGroups']);
			
			foreach ($groups as $id => $group){
				$data[$id] = $group+$i;
			}
		}

		return $data;
	}
	
	function collect_groups()
	{
		$sql ="SELECT * FROM {$this->groupstable}";
	
		$result = cpg_db_query($sql, $this->link_id);
		
		$udb_groups = array(1=>'Guests', 2=>'Registered');
			
		while ($row = mysql_fetch_assoc($result))
		{
			$udb_groups[$row[$this->field['grouptbl_group_id']]+100] = ucfirst(strtolower($row[$this->field['grouptbl_group_name']]));
		}
		var_dump($udb_groups);
		return $udb_groups;
	}
	
	// definition of how to extract id, name, group from a session cookie
	function session_extraction($cookie_id)
	{
		global $user_settings;
		
		if (!$user_settings){
			$user_settings[$this->field['user_id']] = 0;
			$user_settings[$this->field['username']] = 'Guest';
			$user_settings[$this->field['usertbl_group_id']] = $this->guestgroup;
		}
		
		return $user_settings;
	}
	
	// definition of how to extract an id and password hash from a cookie
	function cookie_extraction()
	{
		return array(0, ''); //unused
	}
	
	// definition of actions required to convert a password from user database form to cookie form
	function udb_hash_db($password)
	{
		return $password; // unused
	}
	
	function login_page()
	{
		global $CONFIG;
		
		// silly workaround for SMF's redirect check...
		$_SESSION['old_url'] = $CONFIG['site_url'] . '?board=redirect';
		$this->redirect('/index.php?action=login');
	}

	function logout_page()
	{
		global $CONFIG;
		
		// this is a wee bit messy like....
		ob_start();
		ssi_logout($CONFIG['site_url']);
		preg_match('/<a href="(.*)">/', ob_get_clean(), $matches);
		$this->boardurl = '';
        $this->redirect($matches[1]);
	}
}

// and go !
$cpg_udb = new cpg_udb;
?>