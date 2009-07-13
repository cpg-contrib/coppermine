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
  Coppermine version: 1.4.26
  $HeadURL$
  $Revision$
  $Author$
  $Date$
**********************************************/


if (!defined('IN_COPPERMINE')) die('Not in Coppermine...');

// Switch that allows overriding the bridge manager with hard-coded values
define('USE_BRIDGEMGR', 1);

require_once 'bridge/udb_base.inc.php';

class coppermine_udb extends core_udb {

        function coppermine_udb()
        {
                global $BRIDGE,$CONFIG;

                if (!USE_BRIDGEMGR) {

                        $this->boardurl = 'http://localhost/coppermine';
                        include_once('../include/config.inc.php');

                } else {
                        $this->boardurl = $CONFIG['site_url'];
                        $this->use_post_based_groups = @$BRIDGE['use_post_based_groups'];
                }

                // A hash that's a little specific to the client's configuration
                $this->client_id = md5($_SERVER['HTTP_USER_AGENT'].$_SERVER['SERVER_PROTOCOL'].$CONFIG['site_url']);

                $this->multigroups = 1;

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
                        'sessions' => 'sessions'
                );

                // Derived full table names
                $this->usertable = '`' . $this->db['name'] . '`.' . $this->db['prefix'] . $this->table['users'];
                $this->groupstable =  '`' . $this->db['name'] . '`.' . $this->db['prefix'] . $this->table['groups'];
                $this->sessionstable =  '`' . $this->db['name'] . '`.' . $this->db['prefix'] . $this->table['sessions'];

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


        // Login function
        function login( $username = null, $password = null, $remember = false ) {
                global $CONFIG;

                // Create the session_id from concat(cookievalue,client_id)
                $session_id = $this->session_id.$this->client_id;

                // Check if encrypted passwords are enabled
                if ($CONFIG['enable_encrypted_passwords']) {
                        $encpassword = md5($password);
                } else {
                        $encpassword = $password;
                }

                // Check for user in users table
                $sql =  "SELECT user_id, user_name, user_password FROM {$this->usertable} WHERE ";
                $sql .= "user_name = '$username' AND BINARY user_password = '$encpassword' AND user_active = 'YES'";
                $results = cpg_db_query($sql);

                // If exists update lastvisit value, session, and login
                if (mysql_num_rows($results)) {

                        // Update lastvisit value
                        $sql =  "UPDATE {$this->usertable} SET user_lastvisit = NOW() ";
                        $sql .= "WHERE user_name = '$username' AND BINARY user_password = '$encpassword' AND user_active = 'YES'";
                        cpg_db_query($sql, $this->link_id);
        
                        $USER_DATA = mysql_fetch_assoc($results);
                        mysql_free_result($results);
        
                        // If this is a 'remember me' login set the remember field to true
                        if ($remember) {
                                $remember_sql = ",remember = '1' ";
                        } else {
                                $remember_sql = '';
                        }
        
                        // Update guest session with user's information
                        $sql  = "update {$this->sessionstable} set ";
                        $sql .= "user_id={$USER_DATA['user_id']} ";
                        $sql .= $remember_sql;
                        $sql .= "where session_id = '" . md5($session_id) . "'";
                        cpg_db_query($sql, $this->link_id);

                        return $USER_DATA;
                } else {

                        return false;
                }
        }


        // Logout function
        function logout() {

                // Revert authenticated session to a guest session
                $session_id = $this->session_id.$this->client_id;
                $sql  = "update {$this->sessionstable} set user_id = 0, remember=0 where session_id = '" . md5($session_id) . "'";
                cpg_db_query($sql, $this->link_id);
        }
		
        function get_groups( &$user )
        {
			$groups = array($user['group_id'] - 100);

			$sql = "SELECT user_group_list FROM {$this->usertable} AS u WHERE {$this->field['user_id']}='{$user['id']}' and user_group_list <> '';";

			$result = cpg_db_query($sql, $this->link_id);

			if ($row = mysql_fetch_array($result)){
				$groups = array_merge($groups, explode(',', $row['user_group_list']));
			}
			
			mysql_free_result($result);

			return $groups;
        }
		
        // definition of actions required to convert a password from user database form to cookie form
        function udb_hash_db($password)
        {
                return $password;
        }


        // definition of how to extract id, name, group from a session cookie
        function session_extraction()
        {
            global $CONFIG;

                // Default anonymous values
                $id = 0;
                $pass = '';

                // Get the session cookie value
                $sessioncookie = $_COOKIE[$this->client_id];

                // Create the session id by concat(session_cookie_value, client_id)
                $session_id = $sessioncookie.$this->client_id;

                // Lifetime of 'remember me' session is 2 weeks
                $rememberme_life_time = time()-(CPG_WEEK*2);
        
                // Lifetime of normal session is 1 hour
                $session_life_time = time()-CPG_HOUR;
        
                // Delete old sessions
                $sql = "delete from {$this->sessionstable} where time<$session_life_time and remember=0;";
                cpg_db_query($sql, $this->link_id);
        
                // Delete stale 'remember me' sessions
                $sql = "delete from {$this->sessionstable} where time<$rememberme_life_time;";
                cpg_db_query($sql, $this->link_id);
        
                // Check for valid session if session_cookie_value exists
                if ($sessioncookie) {
        
                    // Check for valid session
                    $sql =  'select user_id from '.$this->sessionstable." where session_id = '" . md5($session_id) . "'";
                    $result = cpg_db_query($sql);
        
                    // If session exists...
                    if (mysql_num_rows($result)) {
                        $row = mysql_fetch_assoc($result);
                        mysql_free_result($result);
        
                        $row['user_id'] = (int) $row['user_id'];
        
                        // Check if there's a user for this session
                        $sql =  'select user_id as id, user_password as password ';
                        $sql .= 'from '.$this->usertable.' ';
                        $sql .= 'where user_id='.$row['user_id'];
                        $result = cpg_db_query($sql, $this->link_id);
        
                        // If user exists, use the current session
                        if ($result) {
                            $row = mysql_fetch_assoc($result);
                            mysql_free_result($result);
        
                            $pass = $row['password'];
                            $id = (int) $row['id'];
                            $this->session_id = $sessioncookie;
        
                        // If the user doesn't exist, use default guest credentials
                        }
        
                    // If not a valid session exists, create a new session
                    } else {
        
                        $this->create_session();
                    }
        
                // No session exists; create one
                } else {
        
                    $this->create_session();
                }

                return ($id) ? array($id, $pass) : false;
        }


        // Function used to keep the session alive
        function session_update()
        {
                $session_id = $this->session_id.$this->client_id;
                $sql = "update {$this->sessionstable} set time='".time()."' where session_id = '" . md5($session_id) . "'";
                cpg_db_query($sql);
        }


        // Create a new session with the cookie lifetime set to 2 weeks
        function create_session() {
                global $CONFIG;
                // start session
                $this->session_id = $this->generateId();
                $session_id = $this->session_id.$this->client_id;
        
                $sql =  'insert into '.$this->sessionstable.' (session_id, user_id, time, remember) values ';
                $sql .= '("'.md5($session_id).'", 0, "'.time().'", 0);';
        
                // insert the guest session
                cpg_db_query($sql, $this->link_id);
        
                // set the session cookie
                setcookie( $this->client_id, $this->session_id, time() + (CPG_WEEK*2), $CONFIG['cookie_path'] );
        }


        // Modified function taken from Mambo session class
        function generateId() {
                $failsafe = 20;
                $randnum = 0;
                while ($failsafe--) {
                        $randnum = md5( uniqid( microtime(), 1 ));
                        $session_id = $randnum.$this->client_id;
                        if ($randnum != "") {
                                $sql = "SELECT session_id FROM {$this->sessionstable} WHERE session_id = '" . md5($session_id) . "'";
								$result = cpg_db_query($sql, $this->link_id);
                                if (!mysql_num_rows($result)) {
                                        break;
                                }
                                mysql_free_result($result);
                        }
                }
                return $randnum;
        }


        // Gets user/guest count
        function get_session_users() {
                static $count = array();
    
                if (!$count) {
                        // Get guest count
                        $sql = "select count(user_id) as num_guests from {$this->sessionstable} where user_id=0;";
                        $result = cpg_db_query($sql, $this->link_id);
                        $count = mysql_fetch_assoc($result);
            
                        // Get authenticated user count
                        $sql = "select count(user_id) as num_users from {$this->sessionstable} where user_id>0;";
                        $result = cpg_db_query($sql, $this->link_id);
                        $count = array_merge(mysql_fetch_assoc($result), $count);
                }

                return $count;
        }


        /*
         * Overidden functions !!DO NOT REMOVE OR CPG WILL NOT WORK CORRECTLY!!
         */
        // definition of how to extract an id and password hash from a cookie
        function cookie_extraction()
        {
                return false;
        }

        // Register
        function register_page()
        {        }

        // Edit users
        function edit_users()
        {        }

        // View users
        function view_users()
        {        }

        // View user profile
        function view_profile($uid)
        {        }

        // Edit user profile
        function edit_profile($uid)
        {        }

        function login_page()
        {        }

        function logout_page() {
            $this->logout();
        }
		/* Note : we don't want to overide this - the groups need to be resynced to coppermine default after un-integration
         * Rebuttal: without overriding and removing Coppermine group deletion (see below) its impossible to add new groups to a non-bridged install.
         */
		
    	function synchronize_groups()
    	{
    		global $CONFIG ;

    		if ($this->use_post_based_groups){
    			if ($this->group_overrride){
    				$udb_groups = $this->collect_groups();
    			} else {
    				$sql = "SELECT * FROM {$this->groupstable} WHERE {$this->field['grouptbl_group_name']} <> ''";

    				$result = cpg_db_query($sql, $this->link_id);

    				$udb_groups = array();

    				while ($row = mysql_fetch_assoc($result))
    				{
    					$udb_groups[$row[$this->field['grouptbl_group_id']]+100] = utf_ucfirst(utf_strtolower($row[$this->field['grouptbl_group_name']]));
    				}
    			}
    		} else {
    			$udb_groups = array(1 =>'Administrators', 2=> 'Registered', 3=>'Guests', 4=> 'Banned');
    		}

    		$result = cpg_db_query("SELECT group_id, group_name FROM {$CONFIG['TABLE_USERGROUPS']} WHERE 1");

    		while ($row = mysql_fetch_array($result)) {
    			$cpg_groups[$row['group_id']] = $row['group_name'];
    		}

    		mysql_free_result($result);
            /* Must be removed to allow new groups to be created in an unbridged install.
    		// Scan Coppermine groups that need to be deleted
    		foreach($cpg_groups as $c_group_id => $c_group_name) {
    			if ((!isset($udb_groups[$c_group_id]))) {
    				cpg_db_query("DELETE FROM {$CONFIG['TABLE_USERGROUPS']} WHERE group_id = '" . $c_group_id . "' LIMIT 1");
    				unset($cpg_groups[$c_group_id]);
    			}
    		}
    		*/

    		// Scan udb groups that need to be created inside Coppermine table
    		foreach($udb_groups as $i_group_id => $i_group_name) {
    			if ((!isset($cpg_groups[$i_group_id]))) {
    				// add admin info
    				$admin_access = in_array($i_group_id-100, $this->admingroups) ? '1' : '0';
    				cpg_db_query("INSERT INTO {$CONFIG['TABLE_USERGROUPS']} (group_id, group_name, has_admin_access) VALUES ('$i_group_id', '" . addslashes($i_group_name) . "', '$admin_access')");
    				$cpg_groups[$i_group_id] = $i_group_name;
    			}
    		}

    		// Update Group names
    		foreach($udb_groups as $i_group_id => $i_group_name) {
    			if ($cpg_groups[$i_group_id] != $i_group_name) {
    				cpg_db_query("UPDATE {$CONFIG['TABLE_USERGROUPS']} SET group_name = '" . addslashes($i_group_name) . "' WHERE group_id = '$i_group_id' LIMIT 1");
    			}
    		}
    		// fix admin grp
    		if (!$this->use_post_based_groups) cpg_db_query("UPDATE {$CONFIG['TABLE_USERGROUPS']} SET has_admin_access = '1' WHERE group_id = '1' LIMIT 1");

    	}

}

// and go !
$cpg_udb = new coppermine_udb;
?>
