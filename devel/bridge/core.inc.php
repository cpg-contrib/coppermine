
<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2005 Coppermine Dev Team
  v1.1 originaly written by Gregory DEMAR

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

class core_udb {
	
	function connect($id = '')
	{
		global $CONFIG;
		
		// Define wheter we can join tables or not in SQL queries (same host & same db or user)
		define('UDB_CAN_JOIN_TABLES', ($this->db['host'] == $CONFIG['dbserver'] && ($this->db['name'] == $CONFIG['dbname'] || $this->db['user'] == $CONFIG['dbuser'])));
		
		if ($id){
			$this->link_id = $id;
		} else {
			// Connect to udb database if necessary
			if (!UDB_CAN_JOIN_TABLES) {
				$this->link_id = mysql_connect($this->db['host'], $this->db['user'], $this->db['password']);
				if (!$this->link_id) die("<b>Coppermine critical error</b>:<br />Unable to connect to UDB database !<br /><br />MySQL said: <b>" . mysql_error() . "</b>");
				mysql_select_db ($this->db['name'], $this->link_id);
			} else {
				$this->link_id = 0;
			}
		}
	}
	
	function authenticate()
	{
		global $USER_DATA;

		list($id, $cookie_pass) = $this->cookie_extraction();
		 
        if ($id)
        {
		
		if (isset($this->usergroupstable)){
			
			$result = cpg_db_query("SELECT u.{$this->field['user_id']} AS id, u.{$this->field['username']} AS username, u.{$this->field['password']} AS password, ug.{$this->field['usertbl_group_id']} AS group_id FROM {$this->usertable} AS u, {$this->usergroupstable} AS ug WHERE u.{$this->field['user_id']}=ug.{$this->field['user_id']} AND u.{$this->field['user_id']}='$id'", $this->link_id);
			
			} else {
				$result = cpg_db_query("SELECT u.{$this->field['user_id']} AS id, u.{$this->field['username']} AS username, u.{$this->field['password']} AS password, u.{$this->field['usertbl_group_id']}+100 AS group_id FROM {$this->usertable} AS u INNER JOIN {$this->groupstable} AS g ON u.{$this->field['usertbl_group_id']}=g.{$this->field['grouptbl_group_id']} WHERE u.{$this->field['user_id']}='$id'", $this->link_id);
			}
			
			if (mysql_num_rows($result)){
				$row = mysql_fetch_assoc($result);
				mysql_free_result($result);
			} 
        }

		if (isset($row['password'])) {
			$db_pass = $this->udb_hash_db($row['password']);
			if ($db_pass == $cookie_pass){
				$this->load_user_data($row);
			} else {
				$row = $this->session_extraction($id);
			}
		} else {
			$row = $this->session_extraction($id);
		}

		if ($row[$this->field['user_id']]){
			$this->load_user_data($row);
		} else {
			$this->load_guest_data();
		}

		$user_group_set = '(' . implode(',', $USER_DATA['groups']) . ')';

        $USER_DATA = array_merge($USER_DATA, cpgGetUserData($USER_DATA['groups'][0], $USER_DATA['groups'], $this->guestgroup));
		

		if ($this->use_post_based_groups){
			$USER_DATA['has_admin_access'] = ($USER_DATA['groups'][0] - 100 == $this->admingroup) ? 1 : 0;
		} else {
			$USER_DATA['has_admin_access'] = ($USER_DATA['groups'][0] == 1) ? 1 : 0;
		}
		
		$USER_DATA['can_see_all_albums'] = $USER_DATA['has_admin_access'];
		
	    // For error checking
		$CONFIG['TABLE_USERS'] = '**ERROR**';
			
		define('USER_ID', $USER_DATA['user_id']);
        define('USER_NAME', $USER_DATA['user_name']);
        define('USER_GROUP', $USER_DATA['group_name']);
        define('USER_GROUP_SET', $user_group_set);
        define('USER_IS_ADMIN', $USER_DATA['has_admin_access']);
        define('USER_CAN_SEND_ECARDS', (int)$USER_DATA['can_send_ecards']);
        define('USER_CAN_RATE_PICTURES', (int)$USER_DATA['can_rate_pictures']);
        define('USER_CAN_POST_COMMENTS', (int)$USER_DATA['can_post_comments']);
        define('USER_CAN_UPLOAD_PICTURES', (int)$USER_DATA['can_upload_pictures']);
        define('USER_CAN_CREATE_ALBUMS', (int)$USER_DATA['can_create_albums']);
        define('USER_UPLOAD_FORM', (int)$USER_DATA['upload_form_config']);
        define('CUSTOMIZE_UPLOAD_FORM', (int)$USER_DATA['custom_user_upload']);
        define('NUM_FILE_BOXES', (int)$USER_DATA['num_file_upload']);
        define('NUM_URI_BOXES', (int)$USER_DATA['num_URI_upload']);
	}
	
	function load_guest_data()
	{
		global $USER_DATA;

		$USER_DATA['user_id'] = 0;
        $USER_DATA['user_name'] = 'Guest';
        $USER_DATA['groups'][0] = $this->use_post_based_groups ? ($this->guestgroup) : 3;
        $USER_DATA['group_quota'] = 1;
        $USER_DATA['can_rate_pictures'] = 0;
		$USER_DATA['can_send_ecards'] = 0;
		$USER_DATA['can_post_comments'] = 0;
		$USER_DATA['can_upload_pictures'] = 0;
		$USER_DATA['can_create_albums'] = 0;
		$USER_DATA['pub_upl_need_approval'] = 1;
		$USER_DATA['priv_upl_need_approval'] = 1;
		$USER_DATA['upload_form_config'] = 0;
		$USER_DATA['num_file_upload'] = 0;
		$USER_DATA['num_URI_upload'] = 0;
		$USER_DATA['custom_user_upload'] = 0;
	}
	
	function load_user_data($row)
	{

		global $USER_DATA;

		$USER_DATA['user_id'] = $row[$this->field['user_id']];
        $USER_DATA['user_name'] = $row[$this->field['username']];
		
		if  ($this->multigroups){
			$USER_DATA['groups'] = $this->get_groups($row);
		} else {
			if ($this->use_post_based_groups){
				$USER_DATA['groups'] = array(0 => $row[$this->field['usertbl_group_id']]);
			} else {
				$USER_DATA['groups'] = array(0 => ($row[$this->field['usertbl_group_id']] - 100 == $this->admingroup) ? 1 : 2);
			}
		}
	}
	
	// Retrieve the name of a user
	function get_user_name($uid)
	{
		$sql = "SELECT {$this->field['username']} as user_name FROM {$this->usertable} WHERE {$this->field['user_id']} = '$uid'";

		$result = cpg_db_query($sql, $this->link_id);

		if (mysql_num_rows($result)) {
			$row = mysql_fetch_array($result);
			mysql_free_result($result);
			return $row['user_name'];
		} else {
			return '';
		}
	}
	
	// Retrieve the id of a user
	function get_user_id($username)
	{
		$username = addslashes($username);

		$sql = "SELECT {$this->field['user_id']} AS user_id FROM {$this->usertable} WHERE {$this->field['username']}  = '$username'";

		$result = cpg_db_query($sql, $this->link_id);

		if (mysql_num_rows($result)) {
			$row = mysql_fetch_array($result);
			mysql_free_result($result);
			return $row['user_id'];
		} else {
			return '';
		}
	}
	
	// Redirect
	function redirect($target)
	{
		header('Location: '. $this->boardurl . $target);
		exit;
	}
	
	// Register
	function register_page()
	{
		$this->redirect($this->page['register']);
	}
	
	// Edit users
	function edit_users()
	{
		$this->redirect($this->page['editusers']);
	}
	
	// Edit user profile
	function edit_profile($uid)
	{
		$this->redirect($this->page['edituserprofile']);
	}
	
	// Get user information
	function get_user_infos($uid)
	{
        global $lang_register_php;

		$sql = "SELECT {$this->field['username']} AS user_name, 
										{$this->field['email']} AS user_email, 
										{$this->field['regdate']} AS user_regdate, 
										{$this->field['location']} AS user_location, 
										{$this->field['website']} AS user_website 
										
										FROM  {$this->usertable} WHERE {$this->field['user_id']} = '$uid'";
    
		$result = cpg_db_query($sql, $this->link_id);
		
		if (!mysql_num_rows($result)) cpg_die(ERROR, $lang_register_php['err_unk_user'], __FILE__, __LINE__);

		$user_data = mysql_fetch_array($result);
		$user_data['group_name'] = '';
		mysql_free_result($result);

		return $user_data;
	}
	
	// Query used to list users
	function list_users_query(&$user_count)
	{
		global $CONFIG, $FORBIDDEN_SET;

		if ($FORBIDDEN_SET != "") $forbidden = "AND $FORBIDDEN_SET";
		
		$sql = "SELECT (category - " . FIRST_USER_CAT . ") as user_id," . "        '???' as user_name," . "        COUNT(DISTINCT a.aid) as alb_count," . "        COUNT(DISTINCT pid) as pic_count," . "        MAX(pid) as thumb_pid " . "FROM {$CONFIG['TABLE_ALBUMS']} AS a " . "INNER JOIN {$CONFIG['TABLE_PICTURES']} AS p ON p.aid = a.aid " . "WHERE approved = 'YES' AND category > " . FIRST_USER_CAT . " $forbidden GROUP BY category " . "ORDER BY category ";
		$result = cpg_db_query($sql);

		$user_count = mysql_num_rows($result);

		return $result;
	}
	
	function udb_list_users_retrieve_data($result, $lower_limit, $count)
	{
		global $CONFIG;

		mysql_data_seek($result, $lower_limit);

		$rowset = array();
		$i = 0;
		$user_id_set = '';

		while (($row = mysql_fetch_array($result)) && ($i++ < $count)) {
			$user_id_set .= $row['user_id'] . ',';
			$rowset[] = $row;
		}
		mysql_free_result($result);

		$user_id_set = '(' . substr($user_id_set, 0, -1) . ')';
		
		$sql = "SELECT {$this->field['user_id']} AS user_id, {$this->field['username']} AS user_name FROM {$this->usertable} WHERE {$this->field['user_id']} IN $user_id_set";
										
		$result = cpg_db_query($sql, $this->link_id);
    
		while ($row = mysql_fetch_array($result)) {
			$name[$row['user_id']] = $row['user_name'];
		}
    
		for($i = 0; $i < count($rowset); $i++) {
			$rowset[$i]['user_name'] = empty($name[$rowset[$i]['user_id']]) ? '???' : $name[$rowset[$i]['user_id']];
		}

		return $rowset;
	}
	
	// Group table synchronisation
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
					$udb_groups[$row[$this->field['grouptbl_group_id']]+100] = ucfirst(strtolower($row[$this->field['grouptbl_group_name']]));
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
    
		// Scan Coppermine groups that need to be deleted
		foreach($cpg_groups as $c_group_id => $c_group_name) {
			if ((!isset($udb_groups[$c_group_id]))) {
				cpg_db_query("DELETE FROM {$CONFIG['TABLE_USERGROUPS']} WHERE group_id = '" . $c_group_id . "' LIMIT 1");
				unset($cpg_groups[$c_group_id]);
			}
		}
    
		// Scan udb groups that need to be created inside Coppermine table
		foreach($udb_groups as $i_group_id => $i_group_name) {
			if ((!isset($cpg_groups[$i_group_id]))) {
				cpg_db_query("INSERT INTO {$CONFIG['TABLE_USERGROUPS']} (group_id, group_name) VALUES ('$i_group_id', '" . addslashes($i_group_name) . "')");
				$cpg_groups[$i_group_id] = $i_group_name;
			}
		}
    
		// Update Group names
		foreach($udb_groups as $i_group_id => $i_group_name) {
			if ($cpg_groups[$i_group_id] != $i_group_name) {
				cpg_db_query("UPDATE {$CONFIG['TABLE_USERGROUPS']} SET group_name = '" . addslashes($i_group_name) . "' WHERE group_id = '$i_group_id' LIMIT 1");
			}
		}
	}	

	// Retrieve the album list used in gallery admin mode
	function get_admin_album_list()
	{
		global $CONFIG;

		if (UDB_CAN_JOIN_TABLES) {
			$sql = "SELECT aid, CONCAT('(', {$this->field['username']}, ') ', a.title) AS cpg_title
							FROM {$CONFIG['TABLE_ALBUMS']} AS a 
							INNER JOIN {$this->usertable} AS u 
							ON category = (" . FIRST_USER_CAT . " + {$this->field['user_id']}) 
							ORDER BY cpg_title";
		} else {
			$sql = "SELECT aid, IF(category > " . FIRST_USER_CAT . ", CONCAT('* ', title), CONCAT(' ', title)) AS title " . "FROM {$CONFIG['TABLE_ALBUMS']} " . "ORDER BY title";
		}
		return $sql;
	}
	
	function util_filloptions()
	{
		global $lang_util_php, $CONFIG;

		if (UDB_CAN_JOIN_TABLES) {

			$query = "SELECT aid, category, IF({$this->field['username']} IS NOT NULL, 
								CONCAT('(', {$this->field['username']}, ') ', a.title), 
								CONCAT(' - ', a.title)) AS title 
								FROM {$CONFIG['TABLE_ALBUMS']} AS a 
								LEFT JOIN {$this->usertable} AS u 
								ON category = (" . FIRST_USER_CAT . " + {$this->field['user_id']}) 
								ORDER BY category, title";
								
			$result = cpg_db_query($query, $this->link_id);

			echo '&nbsp;&nbsp;&nbsp;&nbsp;<select size="1" name="albumid" class="listbox"><option value="0">All Albums</option>';

			while ($row = mysql_fetch_array($result)) {
				$sql = "SELECT name FROM {$CONFIG['TABLE_CATEGORIES']} WHERE cid = " . $row["category"];
				$result2 = cpg_db_query($sql);
				$row2 = mysql_fetch_array($result2);
				print "<option value=\"" . $row["aid"] . "\">" . $row2["name"] . $row["title"] . "</option>\n";
			}

			print '</select> (3)';
			print '&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="'.$lang_util_php['submit_form'].'" class="submit" /> (4)';
			print '</form>';

		} else {

        // Query for list of public albums

			$public_albums = cpg_db_query("SELECT aid, title, category FROM {$CONFIG['TABLE_ALBUMS']} WHERE category < " . FIRST_USER_CAT . " ORDER BY title");

			if (mysql_num_rows($public_albums)) {
				$public_result = cpg_db_fetch_rowset($public_albums);
			} else {
				$public_result = array();
			}

			// Initialize $merged_array
			$merged_array = array();

			// Count the number of albums returned.
			$end = count($public_result);

			// Cylce through the User albums.
			for($i=0;$i<$end;$i++) {

				//Create a new array sow we may sort the final results.
				$merged_array[$i]['id'] = $public_result[$i]['aid'];
				$merged_array[$i]['album_name'] = $public_result[$i]['title'];

				// Query the database to get the category name.
				$vQuery = "SELECT name, parent FROM " . $CONFIG['TABLE_CATEGORIES'] . " WHERE cid='" . $public_result[$i]['category'] . "'";
				$vRes = mysql_query($vQuery);
				$vRes = mysql_fetch_array($vRes);
				if (isset($merged_array[$i]['username_category'])) {
					$merged_array[$i]['username_category'] = (($vRes['name']) ? '(' . $vRes['name'] . ') ' : '').$merged_array[$i]['username_category'];
				} else {
					$merged_array[$i]['username_category'] = (($vRes['name']) ? '(' . $vRes['name'] . ') ' : '');
				}
			}

			// We transpose and divide the matrix into columns to prepare it for use in array_multisort().
			foreach ($merged_array as $key => $row) {
			   $aid[$key] = $row['id'];
			   $title[$key] = $row['album_name'];
			   $album_lineage[$key] = $row['username_category'];
			}

			// We sort all columns in descending order and plug in $album_menu at the end so it is sorted by the common key.
			array_multisort($album_lineage, SORT_ASC, $title, SORT_ASC, $aid, SORT_ASC, $merged_array);

			// Query for list of user albums

			$user_albums = cpg_db_query("SELECT aid, title, category FROM {$CONFIG['TABLE_ALBUMS']} WHERE category >= " . FIRST_USER_CAT . " ORDER BY aid");
			if (mysql_num_rows($user_albums)) {
				$user_albums_list = cpg_db_fetch_rowset($user_albums);
			} else {
				$user_albums_list = array();
			}

			// Query for list of user IDs and names

			$user_album_ids_and_names = cpg_db_query("
				SELECT ({$this->field['user_id']} + ".FIRST_USER_CAT.") AS id,
				CONCAT('(', {$this->field['username']}, ') ') as name 
				FROM {$this->usertable} 
				ORDER BY name ASC",$this->link_id);

			if (mysql_num_rows($user_album_ids_and_names)) {
				$user_album_ids_and_names_list = cpg_db_fetch_rowset($user_album_ids_and_names);
			} else {
				$user_album_ids_and_names_list = array();
			}

			// Glue what we've got together.

			// Initialize $udb_i as a counter.
			if (count($merged_array)) {
				$udb_i = count($merged_array);
			} else {
            $udb_i = 0;
			}

			//Begin a set of nested loops to merge the various query results.
			foreach ($user_albums_list as $aq) {
				foreach ($user_album_ids_and_names_list as $uq) {
					if ($aq['category'] == $uq['id']) {
						$merged_array[$udb_i]['id']= $aq['category'];
						$merged_array[$udb_i]['album_name']= $aq['title'];
						$merged_array[$udb_i]['username_category']= $uq['name'];
						$udb_i++;
					}
				}
			}

			// The user albums and public albums have been merged into one list. Print the dropdown.
			echo '&nbsp;&nbsp;&nbsp;&nbsp;<select size="1" name="albumid" class="listbox"><option value="0">All Albums</option>';

			foreach ($merged_array as $menu_item) {
				echo "<option value=\"" . $menu_item['id'] . "\">" . (isset($menu_item['username_category']) ? $menu_item['username_category'] : '') . $menu_item['album_name'] . "</option>\n";
			}

			// Close list, etc.
			print '</select> (3)';
			print '&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="'.$lang_util_php['submit_form'].'" class="submit" /> (4)';
			print '</form>';
		}
	}
}
?>