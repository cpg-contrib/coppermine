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
  Coppermine version: 1.5.1
  $HeadURL$
  $Revision$
  $LastChangedBy$
  $Date$
**********************************************/

if (!defined('IN_COPPERMINE')) die('Not in Coppermine...');

if (isset($bridge_lookup)) {
    $default_bridge_data[$bridge_lookup] = array(
        'full_name' => 'phpBB version 3',
        'short_name' => 'phpbb3',
        'support_url' => 'http://www.phpbb.com/',
        'full_forum_url_default' => 'http://www.yoursite.com/board',
        'full_forum_url_used' => 'mandatory,not_empty,no_trailing_slash',
        'relative_path_to_config_file_default' => '../board/',
        'relative_path_to_config_file_used' => 'lookfor,config.php',
        'use_post_based_groups_default' => '0',
        'use_post_based_groups_used' => 'radio,1,0',
        'cookie_prefix_default' => '',
        'cookie_prefix_used' => 'cookie',
    );
} else {

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
                $this->use_post_based_groups = $BRIDGE['use_post_based_groups'];
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
            $this->admingroups = array(5);
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
            $superCage = Inspekt::makeSuperCage();
            //if (isset($_COOKIE[$this->cookie_name . '_sid'])) {
            //  $session_id = addslashes($_COOKIE[$this->cookie_name . '_sid']);
            if ($superCage->cookie->keyExists($this->cookie_name . '_sid')) {
                $this->session_id = $superCage->cookie->getEscaped($this->cookie_name . '_sid');
                
                $sql = "SELECT user_id, user_password FROM {$this->sessionstable} INNER JOIN {$this->usertable} ON session_user_id = user_id WHERE session_id='{$this->session_id}';"; // AND session_user_id ='$cookie_id'"; (Maybe session_id is unique enough?)
                
                $result = cpg_db_query($sql, $this->link_id);
                
                if (mysql_num_rows($result)){
                    $row = mysql_fetch_array($result);
                    return $row['user_id'] == 1 ? false : $row;
                } else {
                    return false;
                }
            }
        }
        
        // definition of how to extract an id and password hash from a cookie
        function cookie_extraction()
        {
            return false;
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
            $this->redirect("/ucp.php?mode=logout&redirect=$redirect&sid=" . $this->session_id);
        }

        function get_users($options = array())
        {
            global $CONFIG;
            

            // Copy UDB fields and config variables (just to make it easier to read)
            $f =& $this->field;
            $C =& $CONFIG;
            
            // Sort codes
            $sort_codes = array('name_a' => 'user_name ASC',
                                'name_d' => 'user_name DESC',
                                'group_a' => 'group_name ASC',
                                'group_d' => 'group_name DESC',
                                'reg_a' => 'user_regdate ASC',
                                'reg_d' => 'user_regdate DESC',
                                'pic_a' => 'pic_count ASC',
                                'pic_d' => 'pic_count DESC',
                                'disku_a' => 'disk_usage ASC',
                                'disku_d' => 'disk_usage DESC',
                                'lv_a' => 'user_lastvisit ASC',
                                'lv_d' => 'user_lastvisit DESC',
                               );
            
            if (in_array($options['sort'], array('group_a', 'group_d', 'pic_a', 'pic_d', 'disku_a', 'disku_d'))){
                
                $sort = '';
                list($this->sortfield, $this->sortdir) = explode(' ', $sort_codes[$options['sort']]);
                $this->adv_sort = true;
                
            } else {
                
                $sort = "ORDER BY " . $sort_codes[$options['sort']];
                $this->adv_sort = false;
            }

            // Build WHERE clause, if this is a username search
            if ($options['search']) {
                $options['search'] = 'AND u.'.$f['username'].' LIKE "'.$options['search'].'" ';
            }

            $sql = "SELECT group_id, group_name, group_quota FROM {$C['TABLE_USERGROUPS']}";

            $result = cpg_db_query($sql);
            
            $groups = array();
        
            while ($row = mysql_fetch_assoc($result)) {
                $groups[$row['group_id']] = $row;
            }
            
            $sql ="SELECT group_id FROM {$this->groupstable} WHERE group_id != 6";
        
            $result = cpg_db_query($sql, $this->link_id);
            $udb_groups = array();
            
            while ($row = mysql_fetch_assoc($result)) {
                $udb_groups[] = $row['group_id'];
            }


            $sql = "SELECT u.{$f['user_id']} as user_id, u.{$f['usertbl_group_id']} AS user_group, {$f['username']} as user_name, {$f['email']} as user_email, {$f['regdate']} as user_regdate, {$f['lastvisit']} as user_lastvisit, '' as user_active, 0 as pic_count, 0 as disk_usage ".
                   "FROM {$this->usertable} AS u ".
                   "WHERE u.{$f['user_id']} <> 1 AND u.{$f['usertbl_group_id']} <> 6 " . $options['search'].
                        $sort .
                   " LIMIT {$options['lower_limit']}, {$options['users_per_page']};";

            $result = cpg_db_query($sql, $this->link_id);
            
            // If no records, return empty value
            if (!mysql_num_rows($result)) {
                return array();
            }

            // Extract user list to an array
            while ($user = mysql_fetch_assoc($result)) {
                
                $gid = 2;

                if ($this->use_post_based_groups){
                    if (in_array($user['user_group'], $udb_groups)){
                        $gid = $user['user_group'] + 100;
            
                    } elseif ($user['user_level'] == 1 || in_array($user['user_group'], $this->admingroups)){
                        $gid = 102;
                    }
                } else {
                    if ($user['user_level'] == 1 || in_array($user['user_group'], $this->admingroups)){
                        $gid = 1;
                    }
                }

                $userlist[$user['user_id']] = array_merge($user, $groups[$gid]);
                $users[] = $user['user_id'];
            }
            
            $user_list_string = implode(', ', $users);
            
            $sql = "SELECT owner_id, COUNT(pid) as pic_count, ROUND(SUM(total_filesize)/1024) as disk_usage FROM {$C['TABLE_PICTURES']} WHERE owner_id IN ($user_list_string) GROUP BY owner_id";

            $result = cpg_db_query($sql);


            while ($owner = mysql_fetch_assoc($result)) {
                $userlist[$owner['owner_id']] = array_merge($userlist[$owner['owner_id']], $owner);
            }

            if ($this->adv_sort) usort($userlist, array('cpg_udb', 'adv_sort'));

            return $userlist;
        }
       
       function view_users() {}
       
        function view_profile() {}
    }

    // and go !
    $cpg_udb = new cpg_udb;
}
?>