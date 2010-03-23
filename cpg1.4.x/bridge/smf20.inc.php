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

if (!defined('IN_COPPERMINE')) die('Not in Coppermine...');

// Switch that allows overriding the bridge manager with hard-coded values
define('USE_BRIDGEMGR', 1);

require_once 'bridge/udb_base.inc.php';

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
        if (strpos($db_prefix, '.') === false) {
            $this->usertable = '`' . $this->db['name'] . '`.' . $this->db['prefix'] . $this->table['users'];
            $this->groupstable =  '`' . $this->db['name'] . '`.' . $this->db['prefix'] . $this->table['groups'];
        } else {
            $this->usertable = $this->db['prefix'] . $this->table['users'];
            $this->groupstable = $this->db['prefix'] . $this->table['groups'];
        }

                // Table field names
                $this->field = array(
                        'username' => 'member_name', // name of 'username' field in users table
                        'user_id' => 'id_member', // name of 'id' field in users table
                        'password' => 'passwd', // name of the password field in the users table
                        'email' => 'email_address', // name of 'email' field in users table
                        'regdate' => 'date_registered', // name of 'registered' field in users table
                        'lastvisit' => 'UNIX_TIMESTAMP(last_login)', // last time user logged in
                        'active' => 'is_activated', // is user account active?
                        'location' => 'location', // name of 'location' field in users table
                        'website' => 'website_url', // name of 'website' field in users table
                        'usertbl_group_id' => 'id_post_group', // name of 'group id' field in users table
                        'grouptbl_group_id' => 'id_group', // name of 'group id' field in groups table
                        'grouptbl_group_name' => 'group_name' // name of 'group name' field in groups table
                );

                // Pages to redirect to
                $this->page = array(
                        'register' => '/index.php?action=register',
                        'editusers' => '/index.php?action=mlist',
                        'edituserprofile' => '/index.php?action=profile;u='
                );

                // Group ids - admin and guest only.
                $this->admingroups = array($this->use_post_based_groups ? 101 : 1);
                $this->guestgroup = $this->use_post_based_groups ? 1 : 3;

                // Connect to db - or supply a connection id to be used instead of making own connection.
                $this->connect($db_connection);
        }

        // overriding authenticate() as we can let SMF do this all for us.
        function authenticate()
        {
                global $USER_DATA, $user_settings;

                if (empty($user_settings['id_member'])){
                        $this->load_guest_data();
                } else {

                        $row = array(
                                'id' => $user_settings['id_member'],
                                'username' => $user_settings['member_name'],
                                'group_id' => $user_settings['id_group']
                        );

                        $this->load_user_data($row);
                }

                $user_group_set = '(' . implode(',', $USER_DATA['groups']) . ')';

                                $USER_DATA = array_merge($USER_DATA, $this->get_user_data($USER_DATA['groups'][0], $USER_DATA['groups'], $this->guestgroup));

                 $USER_DATA['can_see_all_albums'] = $USER_DATA['has_admin_access'] = array_intersect($USER_DATA['groups'],$this->admingroups) ? 1 : 0;

                // avoids a template error
                if (!$USER_DATA['user_id']) $USER_DATA['can_create_albums'] = 0;

                                // For error checking
                $CONFIG['TABLE_USERS'] = '**ERROR**';

                define('USER_ID', $USER_DATA['user_id']);
                                define('USER_NAME', addslashes($USER_DATA['user_name']));
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

                $this->session_update();

        }

        function get_groups($row)
        {
                global $user_settings;

                $i = $this->use_post_based_groups ? 100 : 0;
                                $data = array();

                if ($user_settings['id_group'] == 0){
                        $data[0] = 2;
                } else {
                        $data[0] = $user_settings['id_group'] + $i;
                }

                if ($user_settings['additional_groups']){

                        $groups = explode(',', $user_settings['additional_groups']);

                        foreach ($groups as $id => $group){
                                   //$data[$id] = $group+$i; This was overwriting the primary group
                                $data[] = $group+$i;  //appends additionalGroups to the primary group.
                        }
                }

                if ($this->use_post_based_groups) $data[] = $user_settings['id_post_group'] + $i;

                return $data;
        }

        function collect_groups()
        {
                // Use this version to exclude true post based groups
                //$sql ="SELECT * FROM {$this->groupstable} WHERE minposts=-1";

                // Use this version to include all SMF groups
                $sql ="SELECT * FROM {$this->groupstable}";

                $result = cpg_db_query($sql, $this->link_id);

                $udb_groups = array(1=>'Guests', 2=>'Registered');

                while ($row = mysql_fetch_assoc($result))
                {
                        $udb_groups[$row[$this->field['grouptbl_group_id']]+100] = utf_ucfirst(utf_strtolower($row[$this->field['grouptbl_group_name']]));
                }

                return $udb_groups;
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

        function view_users()
        {
                $this->redirect($this->page['editusers']);
        }

        function view_profile() {}
}


// and go !
$cpg_udb = new cpg_udb;
?>