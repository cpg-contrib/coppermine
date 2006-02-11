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
		global $BRIDGE;
                core_udb::core_udb();
		
		if (!USE_BRIDGEMGR) {

			$this->boardurl = 'http://localhost/coppermine';
			include_once('../include/config.inc.php');

		} else {
			//include_once($BRIDGE['relative_path_to_config_file'] . 'config.inc.php');
			$this->boardurl = $this->config->conf['site_url'];
			$this->use_post_based_groups = @$BRIDGE['use_post_based_groups'];
		}

		$this->multigroups = 0;

		$this->group_overrride = !$this->use_post_based_groups;
		
		// Database connection settings
		$this->db = array(
			'name' => $this->config->dbname,
			'host' => $this->config->dbserver ? $this->config->dbserver : 'localhost',
			'user' => $this->config->dbuser,
			'password' => $this->config->dbpass,
			'prefix' =>$this->config->table_prefix
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
		$this->connect($this->config->conf['LINK_ID']);
	}

        function login($raw_ip, $hdr_ip)
        {
          global $log_date_fmt;

		   // code according to password enable_encrypted_password

		  $password = ($this->config->conf['enable_encrypted_passwords'])
? md5($_POST['password']) : $_POST['password'];

		  $this->config->conf['TABLE_USERS'] = $this->config->table_prefix."users";

          $query = "SELECT user_id, user_name, user_password FROM
{$this->config->conf['TABLE_USERS']} WHERE user_name = '" .
addslashes($_POST['username']) . "' AND BINARY user_password = '" . $password .
"' AND user_active = 'YES'";          $this->cpgDb->query($query);
          $sql = "UPDATE {$this->config->conf['TABLE_USERS']} SET user_lastvisit
= NOW() WHERE user_name = '" . addslashes($_POST['username']) . "' AND BINARY
user_password = '" . $password . "' AND user_active = 'YES'";

          if ($this->cpgDb->nf()) {
              $this->userData = $this->cpgDb->fetchRow();
              $this->cpgDb->query($sql);
              if (isset($_POST['remember_me'])) {
                  $cookie_life_time = time() + (86400 * 15); // 15 days from current time
              } else {
                  $cookie_life_time = 0; // At the end of session/browser close
              }

              setcookie($this->config->conf['cookie_name'] . '_uid', $this->userData['user_id'], $cookie_life_time, $this->config->conf['cookie_path']);
              setcookie($this->config->conf['cookie_name'] . '_pass', md5($_POST['password']), $cookie_life_time, $this->config->conf['cookie_path']);

              return(true);

          } else {
              log_write("Failed login attempt with Username: {$_POST['username']} Password: {$_POST['password']} from IP {$_SERVER['REMOTE_ADDR']} on " . cpgUtils::localisedDate(-1, $log_date_fmt), CPG_SECURITY_LOG);

              // get IP address of the person who tried to log in, look it up on the banning table and increase the brute force counter. If the brute force counter has reached a critical limit, set a regular banning record
              $query = "SELECT * FROM {$this->config->conf['TABLE_BANNED']} WHERE ip_addr='$raw_ip' OR ip_addr='$hdr_ip'";

              $failed_logon_counter = $this->cpgDb->fetchRow();

              $expiry_date = date("Y-m-d H:i:s", mktime(date('H'), date('i')+$this->config->conf['login_expiry'], date('s'), date('m'), date('d'),date('Y')));
              
              if ($failed_logon_counter['brute_force']) {
                  $failed_logon_counter['brute_force'] = $failed_logon_counter['brute_force'] - 1;
                  $query_string = "UPDATE {$this->config->conf['TABLE_BANNED']} SET brute_force='".$failed_logon_counter['brute_force']."',  expiry='".$expiry_date."' WHERE ban_id=".$failed_logon_counter['ban_id'];
              } else {
                  $failed_logon_counter['brute_force'] = $this->config->conf['login_threshold'];
                  $query_string = "INSERT INTO {$this->config->conf['TABLE_BANNED']} (ip_addr, expiry, brute_force) VALUES ('$raw_ip', '$expiry_date','".$failed_logon_counter['brute_force']."')";
              }
              
              //write the logon counter to the database
              $this->cpgDb->query($query_string);
              return(false);
          }
            
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
        if (isset($_COOKIE[$this->config->conf['cookie_name'] . '_uid']) && isset($_COOKIE[$this->config->conf['cookie_name'] . '_pass'])) {
            $id = (int)$_COOKIE[$this->config->conf['cookie_name'] . '_uid'];
            $pass = substr(addslashes($_COOKIE[$this->config->conf['cookie_name'] . '_pass']), 0, 32);
        }

		return ($id) ? array($id, $pass) : false;
	}
	
	// definition of actions required to convert a password from user database form to cookie form
	function udb_hash_db($password)
	{
		return $password;
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
