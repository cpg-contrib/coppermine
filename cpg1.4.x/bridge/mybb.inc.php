<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2010 Coppermine Dev Team
  v1.0 originally written by Gregory Demar

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 3
  as published by the Free Software Foundation.
  
  ********************************************
  Coppermine version: 1.4.28
  $HeadURL$
  $Revision$
  $Author$
  $Date$
**********************************************/

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
			$this->boardurl = 'http://localhost/mybb';

			// local path to your punbb config file
			require_once('../mybb/inc/config.php');
			
			$this->use_post_based_groups = 1;

		} else { // the vars from the bridgemgr
			$this->boardurl = $BRIDGE['full_forum_url'];
			require_once($BRIDGE['relative_path_to_config_file'] . 'config.php');
			$this->use_post_based_groups = $BRIDGE['use_post_based_groups'];
		}
		
		$this->multigroups = 1;
		$this->group_overrride = 0;
		
		// Database connection settings
		$this->db = array(
			'name' => $config['database']['database'],
			'host' => $config['database']['hostname'],
			'user' => $config['database']['username'],
			'password' => $config['database']['password'],
			'prefix' => $config['database']['table_prefix']
		);
		
		// Board table names
		$this->table = array(
			'users' => 'users',
			'groups' => 'usergroups',
			'sessions' => 'sessions',
		);

		// Derived full table names
		$this->usertable = '`' . $this->db['name'] . '`.' . $this->db['prefix'] . $this->table['users'];
		$this->groupstable =  '`' . $this->db['name'] . '`.' . $this->db['prefix'] . $this->table['groups'];
		$this->sessionstable =  '`' . $this->db['name'] . '`.' . $this->db['prefix'] . $this->table['sessions'];
		
		// Table field names
		$this->field = array(
			'username' => 'username', // name of 'username' field in users table
			'user_id' => 'uid', // name of 'id' field in users table
			'password' => 'loginkey', // name of 'password' field in users table
			'email' => 'email', // name of 'email' field in users table
			'regdate' => 'regdate', // name of 'registered' field in users table
			'location' => "''", // name of 'location' field in users table
			'website' => 'website', // name of 'website' field in users table
			'usertbl_group_id' => 'usergroup', // name of 'group id' field in users table
			'grouptbl_group_id' => 'gid', // name of 'group id' field in groups table
			'grouptbl_group_name' => 'title' // name of 'group name' field in groups table
		);
		
		// Pages to redirect to
		$this->page = array(
			'register' => '/member.php?action=register',
			'editusers' => '/memberlist.php',
			'edituserprofile' => "/member.php?action=profile&uid="
		);
		
		// Group ids
		$this->admingroups = array(4);
		$this->guestgroup = $this->use_post_based_groups ? 101 : 3;
		
		// Connect to db
		$this->connect();
	}

	// definition of how to extract id, name, group from a session cookie
	function session_extraction()
	{
		if (!isset($_COOKIE['sid'])) {
		    return false;
        }
        	
		$this->sid = addslashes($_COOKIE['sid']);
		
		if (!$this->sid) {
		    return false;
		}
		
		$this->ipaddress = $this->getip();
		
		$result = cpg_db_query("SELECT u.{$this->field['user_id']}, u.{$this->field['password']}, additionalgroups, loginkey FROM {$this->sessionstable} AS s INNER JOIN {$this->usertable} AS u ON u.uid = s.uid WHERE sid='".$this->sid."' AND ip='".$this->ipaddress."'", $this->link_id);
		
		if (!mysql_num_rows($result)) {
		    return false;
        }
        		
		$row = mysql_fetch_row($result);

        $this->logoutkey = md5(array_pop($row));
        $this->additionalgroups = array_pop($row);        

		return $row; 
	}
	
	// definition of how to extract an id and password hash from a cookie
	function cookie_extraction()
	{
		return  isset($_COOKIE['mybbuser']) ? array_map('addslashes', explode("_", $_COOKIE['mybbuser'], 2)) : false;
	}

	// Get groups of which user is member
	function get_groups($row)
	{
		$data = array();
		
		if ($this->use_post_based_groups){
		    
		    $data[] = $row['group_id'];
		    
		    $additionalgroups = explode(',', $this->additionalgroups);
		    
		    foreach ($additionalgroups as $g) {
		        $data[] = $g + 100;
		    }

		} else {
			$data[0] = (in_array($row['group_id'] - 100, $this->admingroups)) ? 1 : 2;
		}
		
		return $data;
	}
		
	// imported function
	function getip() {

		if($_SERVER['HTTP_X_FORWARDED_FOR'])
		{
			if(preg_match_all("#[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}#s", $_SERVER['HTTP_X_FORWARDED_FOR'], $addresses))
			{
				while(list($key, $val) = each($addresses[0]))
				{
					if(!preg_match("#^(10|172\.16|192\.168)\.#", $val))
					{
						$ip = $val;
						break;
					}
				}
			}
		}
		if(!$ip)
		{
			if($_SERVER['HTTP_CLIENT_IP'])
			{
				$ip = $_SERVER['HTTP_CLIENT_IP'];
			}
			else
			{
				$ip = $_SERVER['REMOTE_ADDR'];
			}
		}
		return $ip;
	}

	// definition of actions required to convert a password from user database form to cookie form
	function udb_hash_db($password)
	{
		return $password;
	}
	
	// Login
	function login_page()
	{
		$this->redirect('/member.php?action=login');
	}

	// Logout
	function logout_page()
	{
		$this->redirect('/member.php?action=logout&logoutkey=' . $this->logoutkey);
	}
	
	function view_users()
	{
		$this->redirect($this->page['editusers']);
	}
	
	function get_users($options = array())
    {
    }
	
	function view_profile($uid)
	{
	}
}

// and go !
$cpg_udb = new cpg_udb;
?>