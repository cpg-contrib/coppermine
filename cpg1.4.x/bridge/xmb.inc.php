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
  Coppermine version: 1.4.27
  $HeadURL$
  $Revision$
  $Author$
  $Date$
**********************************************/

/****

  Bridge file for XMB
  v2.0 Complete overhaul for XMB version 1.9.10 by Robert Chapin (miqrogroove).
  Corresponding thread: http://forum.coppermine-gallery.net/index.php/topic,57550.0.html
  
**********************************************/

/*
Cookie fix (if your board is not installed to site root):
functions.php,
find put_cookie function definition (c. line 1394) and add
$path = '/';
just inside the top of the function
*/

if (!defined('IN_COPPERMINE')) die('Not in Coppermine...');

// Switch that allows overriding the bridge manager with hard-coded values
define('USE_BRIDGEMGR', 1);

//Define XMB Constant Values
define('ADMIN_GROUP_1',   'Super Administrator');
define('ADMIN_GROUP_2',   'Administrator');
define('BANNED_GROUP',    'Banned');
define('COPPER_ADMIN',    1);
define('COPPER_REG',      2);
define('COPPER_GUEST',    3);
define('COPPER_BANNED',   4);
define('DEFAULT_PATH',    '../XMB/');
define('DEFAULT_USE_PBG', 1);
define('GUEST_GROUP',     'Guest');
define('IN_CODE',         TRUE);
define('REG_GROUP',       'Member');
define('STAFF_GROUP_1',   'Super Moderator');
define('STAFF_GROUP_2',   'Moderator');
define('USER_MIN_LEN',    3);
define('USER_MAX_LEN',    32);

require_once 'bridge/udb_base.inc.php';

/**
 * Provides XMB member authentication and member status information to Coppermine.
 */
class cpg_udb extends core_udb {

	//Member Variable Declarations Missing From Base Class
	var $admingroups;
	var $boardurl;
	var $can_join_tables;
	var $db;
	var $field;
	var $group_overrride;
	var $groupstable;
	var $guestgroup;
	var $link_id;
	var $multigroups;
	var $page;
	var $use_post_based_groups;
	var $usertable;

	//XMB Member Variables
	var $config_path;
	var $default_groups;
	var $staff_group_defaults;
	var $staff_groups;
	var $table;

	function cpg_udb() {
		global $BRIDGE, $CONFIG;
		
		//Initialize All Member Variables
		$this->admingroups = array();
		$this->boardurl = '';
		$this->can_join_tables = FALSE;
		$this->config_path = DEFAULT_PATH;
		$this->db = array();
		$this->default_groups = array(COPPER_GUEST => 'Guests', COPPER_BANNED => 'Banned');  //XMB always has user levels equivalent to Coppermine's default Guests and Banned groups.
		$this->field = array(
			'username' => 'username', // name of 'username' field in users table
			'user_id' => 'uid', // name of 'id' field in users table
			'password' => 'password', // name of 'password' field in users table
			'email' => 'email', // name of 'email' field in users table
			'regdate' => 'regdate', // name of 'registered' field in users table
			'location' => 'location', // name of 'location' field in users table
			'website' => 'site', // name of 'website' field in users table
			'usertbl_group_id' => 'status', // name of 'group id' field in users table
			'grouptbl_group_id' => 'title', // name of 'group id' field in groups table
			'grouptbl_group_name' => 'title', // name of 'group name' field in groups table
		);
		$this->group_overrride = 1;  //Flag to enable the collect_groups() method.
		$this->groupstable = '';
		$this->guestgroup = COPPER_GUEST;
		$this->multigroups = 1;  //Flag to enable the get_groups() method.
		$this->link_id = 0;
		$this->page = array(
			'edituserprofile' => '/editprofile.php?user=',
			'editusers' => '/cp.php?action=members',
			'login' => '/misc.php?action=login',
			'logout' => '/misc.php?action=logout',
			'register' => '/member.php?action=coppa',
			'viewuserprofile' => '/member.php?action=viewpro&member=',
			'viewusers' => '/misc.php?action=list',
		);
		$this->staff_group_defaults = array(
			ADMIN_GROUP_1 => -101,
			ADMIN_GROUP_2 => -102,
			STAFF_GROUP_1 => -103,
			STAFF_GROUP_2 => -104
		);
		$this->staff_groups = array();
		$this->table = array(
			'users' => 'members',
			'groups' => 'ranks',
		);
		$this->use_post_based_groups = DEFAULT_USE_PBG;
		$this->usertable = '';

		if (USE_BRIDGEMGR) { // the vars that are used when bridgemgr is enabled
			$this->config_path = $BRIDGE['relative_path_to_config_file'];
			$this->use_post_based_groups = $BRIDGE['use_post_based_groups'];
		}
		
		if ($this->use_post_based_groups != 1) {
			$this->default_groups = array_merge(array(COPPER_REG => REG_GROUP), $this->default_groups);  //Add XMB's default authenticated user level.
		}


		/* Load the Configuration Created by XMB Installation */

		require($this->config_path.'config.php');  //Dev Note: Custom error handling would be needed to properly re-call the constructor.

		$this->boardurl = substr($full_url, 0, -1);  //XMB requires trailing slash, Coppermine requires bare ending.

		// Database connection settings
		$this->db = array(
			'name' => $dbname,
			'host' => $dbhost,
			'user' => $dbuser,
			'password' => $dbpw,
			'prefix' => $tablepre
		);
		
		// Derived full table names
		$this->usertable   = '`' . $this->db['name'] . '`.' . $this->db['prefix'] . $this->table['users'];
		$this->groupstable = '`' . $this->db['name'] . '`.' . $this->db['prefix'] . $this->table['groups'];
		
		// Connect to db
		$this->connect();
		
		// Fix stupid bug in the base class >:{
		if ($this->can_join_tables) {
			$this->link_id = $CONFIG['LINK_ID'];
		}
	}

	/**
	 * Creates a list of XMB's User Ranks, including Coppermine's default user groups.
	 *
	 * It is important to notice this method is never used when $this->use_post_based_groups == 0.
	 *
	 * @author Robert Chapin (miqrogroove)
	 * @return array Values from xmb_ranks.title Indexed by xmb_ranks.id + 100
	 */
	function collect_groups() {
		static $group_cache;

		//Initialize
		if (is_array($group_cache)) {
			return $group_cache;
		}
		$this->admingroups = array();
		$udb_groups = $this->default_groups;

		//Query all groups
		$sql = "SELECT * FROM {$this->groupstable}";
		$result = cpg_db_query($sql, $this->link_id);
		while ($row = mysql_fetch_assoc($result)) {
			$row['id'] = intval($row['id']) + 100;
			$groupname = $row[$this->field['grouptbl_group_id']];

			//Several user levels are implicitly defined by XMB's authentication system and must be handled for all scenarios.
			if (isset($this->staff_group_defaults[$groupname])) {

				$this->staff_groups[$groupname] = $row['id'];
				$udb_groups[$row['id']] = $row[$this->field['grouptbl_group_name']];

			} elseif ($this->use_post_based_groups == 1 And $groupname != BANNED_GROUP And $groupname != GUEST_GROUP) {

				$udb_groups[$row['id']] = $row[$this->field['grouptbl_group_name']];

			}
		}

		//Explicitly populate the arrays with any staff groups that are missing from the xmb_ranks table.
		foreach ($this->staff_group_defaults as $title => $default_id) {
			if (!isset($this->staff_groups[$title])) {
				$default_id += 100;
				$this->staff_groups[$title] = $default_id;
				$udb_groups[$default_id] = $title;
			}
		}

		$this->admingroups[] = $this->staff_groups[ADMIN_GROUP_1] - 100;
		$this->admingroups[] = $this->staff_groups[ADMIN_GROUP_2] - 100;

		$group_cache = $udb_groups;

		return $group_cache;
	}
	
	/**
	 * Finds the ID number of the current user's XMB rank.
	 *
	 * This function must reconcile the various groups and modes between Coppermine and XMB.
	 *
	 * @author Robert Chapin (miqrogroove)
	 * @param  array $row Associative index values are expected to be 'id', 'username', and 'password'.
	 * @return array Value equal to an index in $udb_groups Indexed by zero.
	 */
	function get_groups($row) {
		$uid = intval($row['id']);

		$sql = "SELECT {$this->field['usertbl_group_id']} AS group_id, postnum FROM {$this->usertable} WHERE {$this->field['user_id']} = $uid";
		$result = cpg_db_query($sql, $this->link_id);
		if (mysql_num_rows($result) != 1) {
			return array(0 => COPPER_GUEST);
		}
		$row = mysql_fetch_assoc($result);
		mysql_free_result($result);
		
		$dbstatus = mysql_real_escape_string($row['group_id'], $this->link_id);

		if ($dbstatus == BANNED_GROUP) {
			return array(0 => COPPER_BANNED);
		} elseif ($dbstatus == GUEST_GROUP) {
			return array(0 => COPPER_GUEST);
		} elseif ($this->use_post_based_groups != 1 And ($dbstatus == REG_GROUP Or $dbstatus == STAFF_GROUP_1 Or $dbstatus == STAFF_GROUP_2)) {
			return array(0 => COPPER_REG);
		} elseif ($this->use_post_based_groups != 1 And ($dbstatus == ADMIN_GROUP_1 Or $dbstatus == ADMIN_GROUP_2)) {
			return array(0 => COPPER_ADMIN);
		} elseif (isset($this->staff_group_defaults[$dbstatus])) {
			if (!isset($this->staff_groups[$dbstatus])) { //get_groups() fired before collect_groups()
				$this->collect_groups();
			}
			return array(0 => $this->staff_groups[$dbstatus]);
		} elseif ($dbstatus == REG_GROUP) { //Handle post-based groups.

			$sql = "SELECT * FROM {$this->groupstable} WHERE posts <= {$row['postnum']} ORDER BY posts DESC LIMIT 1";
			$result = cpg_db_query($sql, $this->link_id);

			if (mysql_num_rows($result) == 1) {
				$row = mysql_fetch_assoc($result);
				mysql_free_result($result);
				$row['id'] = intval($row['id']) + 100;
				return array(0 => $row['id']);
			} else {
				return array(0 => COPPER_GUEST);
			}

		} else {
			return array(0 => COPPER_GUEST);
		}
	}
	
	/**
	 * Get the XMB session credentials.
	 *
	 * @author Robert Chapin (miqrogroove)
	 * @return array
	 */
	function session_extraction() {
		$dbuser = $this->getCookie('xmbuser');
		if (strlen($dbuser) >= USER_MIN_LEN And strlen($dbuser) <= USER_MAX_LEN) {
			$sql = "SELECT {$this->field['user_id']} AS user_id FROM {$this->usertable} WHERE {$this->field['username']} = '$dbuser'";
			$result = cpg_db_query($sql, $this->link_id);
			if (mysql_num_rows($result) == 1) {
				$row = mysql_fetch_array($result);
				mysql_free_result($result);
				return array($row['user_id'], $this->getCookie('xmbpw'));
			}
		}

		return FALSE;
	}
	
	// definition of actions required to convert a password from user database form to cookie form
	function udb_hash_db($password)
	{
		return $password;
	}
	
	// Login
	function login_page()
	{
		$this->redirect($this->page['login']);
	}

	// Logout
	function logout_page()
	{
		$this->redirect($this->page['logout']);
	}
	
	// View users
	function view_users()
	{
		$this->redirect($this->page['viewusers']);
	}
	
	// View user profile
	function view_profile($uid) {
		if (empty($uid)) {
			$uid = USER_ID;
		}
		$this->redirect($this->page['viewuserprofile'].rawurlencode(htmlspecialchars_decode($this->get_user_name($uid), ENT_QUOTES)));
	}

	// Edit user profile
	function edit_profile($uid) {
		$this->redirect($this->page['edituserprofile'].rawurlencode(htmlspecialchars_decode($this->get_user_name($uid), ENT_QUOTES)));
	}
	
	/**
	 * Simulates the code path of cookie variables used in XMB as of version 1.9.10.
	 *
	 * @author Robert Chapin (miqrogroove)
	 * @param  string $varname Name of the cookie variable.
	 * @return string
	 */
	function getCookie($varname) {
		$retval = '';
		if (isset($_COOKIE[$varname])) {
			if (is_string($_COOKIE[$varname])) {
				$retval = mysql_real_escape_string(str_replace("\x00", '', $_COOKIE[$varname]), $this->link_id);
			}
		}
		return $retval;
	}

}

// Copied from XMB's functions.inc.php file.
if (!function_exists('htmlspecialchars_decode')) {
	function htmlspecialchars_decode($string, $type=ENT_QUOTES) {
		$array = array_flip(get_html_translation_table(HTML_SPECIALCHARS, $type));
		return strtr($string, $array);
	}
}

// and go !
$cpg_udb = new cpg_udb;
?>