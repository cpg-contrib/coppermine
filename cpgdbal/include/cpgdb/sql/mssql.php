<?php
if (!defined('IN_COPPERMINE')) { die('Not in Coppermine...');}


/******************************************************/
//queries from addfav.php
/***********************************************************/
if (defined('RATEPIC_PHP')) $cpg_db_addfav_php = array(
	'user_new_favpics'			=> "UPDATE {$CONFIG['TABLE_FAVPICS']} SET user_favpics = '%1\$s' WHERE user_id = %2\$s",
	'user_first_favpics'		=> "INSERT INTO {$CONFIG['TABLE_FAVPICS']} ( user_id, user_favpics) VALUES (%1\$s, '%2\$s')"
);


/******************************************************/
//queries from addpic.php
/***********************************************************/
if(defined('ADDPIC_PHP')) $cpg_db_addpic_php = array(
	'addpic_get_pid'			=> "SELECT pid FROM {$CONFIG['TABLE_PICTURES']} WHERE filepath='%1\$s' AND filename='%2\$s' LIMIT 1"
);


/******************************************************/
//queries from admin.php
/***********************************************************/
if (defined('ADMIN_PHP')) $cpg_db_admin_php = array(
	'truncate_config'			=> "TRUNCATE TABLE {$CONFIG['TABLE_CONFIG']}",
	'truncate_filetypes'		=> "TRUNCATE TABLE {$CONFIG['TABLE_FILETYPES']}",
	//'undo_reset_config'			=> "UPDATE {$CONFIG['TABLE_CONFIG']} SET value = '%1\$s' WHERE name = '%2\$s'",
	'update_config_data'		=> "UPDATE {$CONFIG['TABLE_CONFIG']} SET value = '%1\$s' WHERE name = '%2\$s'\n",
	'get_user_passwords'		=> "SELECT user_password FROM {$CONFIG['TABLE_USERS']}",
	'encrypt_passwords'			=> "update {$CONFIG['TABLE_USERS']} set user_password='%1\$s' WHERE user_password = '%2\$s';"
);


/******************************************************/
//queries from albmgr.php
/***********************************************************/
if (defined('ALBMGR_PHP')) $cpg_db_albmgr_php = array(
	'get_cat_to_change_albums'	=> "SELECT cid, name, description FROM {$CONFIG['TABLE_CATEGORIES']} WHERE parent = '%1\$s' AND cid != 1 ORDER BY pos",
	'get_user_group'			=> "SELECT group_id FROM {$CONFIG['TABLE_CATMAP']} WHERE group_id = '%1\$s' AND cid='%2\$s'",
	'get_gallery_admin_albums'	=> "SELECT aid, title FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = '%1\$s' ORDER BY pos ASC",
	'get_user_admin_albums'		=> "SELECT aid, title FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = '%1\$s' AND owner = '%2\$s' ORDER BY pos ASC"
);


/******************************************************/
//queries from banning.php
/***********************************************************/
if (defined('BANNING_PHP')) $cpg_db_banning_php = array(
	'create_banlist'			=> "SELECT *, DATEDIFF(s, '19700101', expiry) AS expiry FROM {$CONFIG['TABLE_BANNED']} WHERE brute_force=0",
	'bann_user' 				=> "INSERT INTO {$CONFIG['TABLE_BANNED']} (user_id, ip_addr, expiry) VALUES ('%1\$s', '%2\$s', '%3\$s')",
	'delete_all_comments'		=> "DELETE FROM {$CONFIG['TABLE_COMMENTS']} WHERE author_id = '%1\$s'",
	'delete_current_comments'	=> "DELETE FROM {$CONFIG['TABLE_COMMENTS']} WHERE msg_id = '%1\$s'",
	'delete_banned'				=> "DELETE FROM {$CONFIG['TABLE_BANNED']} WHERE ban_id= '%1\$s'",
	'update_banned_data'		=> "UPDATE {$CONFIG['TABLE_BANNED']} SET user_id='%1\$s', ip_addr='%2\$s', expiry='%3\$s' where ban_id='%4\$s'",
	'get_comment_info'			=> "SELECT msg_author, msg_hdr_ip, msg_raw_ip FROM {$CONFIG['TABLE_COMMENTS']} WHERE msg_id = '%1\$s'"
);


/******************************************************/
//queries from bridgemgr.php
/***********************************************************/
if (defined('BRIDGEMGR_PHP')) $cpg_db_bridgemgr_php = array(
	'get_db_tables'					=> 'SELECT * FROM '.$temp_tablename,
	'update_bridge'					=> "UPDATE {$CONFIG['TABLE_BRIDGE']} SET value = '%1\$s' WHERE name = '%2\$s'",
	'enable_disable_bridge'			=> "UPDATE {$CONFIG['TABLE_CONFIG']} SET value = '%1\$s' WHERE name = 'bridge_enable'",
	'get_all_config'				=> "SELECT * FROM {$CONFIG['TABLE_CONFIG']}",
	'usergroup_delete'				=> "DELETE FROM {$CONFIG['TABLE_USERGROUPS']} WHERE 1=1",
	'insert_admin'					=> "INSERT INTO {$CONFIG['TABLE_USERGROUPS']} ".
									   "VALUES ('Administrators', 0, 1, 1, 1, 1, 1, 1, 0, 0, 3, 0, 5, 3)",
	'insert_registered'				=> "INSERT INTO {$CONFIG['TABLE_USERGROUPS']} ".
									   "VALUES ('Registered', 1024, 0, 1, 1, 1, 1, 1, 1, 0, 3, 0, 5, 3)",
	'insert_anonymous'				=> "INSERT INTO {$CONFIG['TABLE_USERGROUPS']} ".
									   "VALUES ('Anonymous', 0, 0, 1, 0, 0, 0, 0, 1, 1, 0, 0, 5, 3)",
	'insert_banned'					=> "INSERT INTO {$CONFIG['TABLE_USERGROUPS']} ".
									   "VALUES ('Banned', 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 5, 3)",
	'get_recovery_logon_timestamp'	=> "SELECT value FROM {$CONFIG['TABLE_BRIDGE']} WHERE name = 'recovery_logon_timestamp'",
	'get_recovery_logon_failures'	=> "SELECT value FROM {$CONFIG['TABLE_BRIDGE']} WHERE name = 'recovery_logon_failures'",
	'get_user_data'					=> "SELECT user_id, user_name, user_password FROM %1\$s WHERE user_name = '%2\$s' ".
									   "AND user_password = '%3\$s' AND user_active = 'YES' AND user_group = '1'",	## BINARY user password
	'unset_bridge_enable'			=> "UPDATE {$CONFIG['TABLE_CONFIG']} SET value = '0' WHERE name = 'bridge_enable'",
	'reset_recovery_logon_failures'	=> "UPDATE {$CONFIG['TABLE_BRIDGE']} SET value = '0' WHERE name = 'recovery_logon_failures'",
	'set_recovery_logon_timestamp'	=> "UPDATE {$CONFIG['TABLE_BRIDGE']} SET value = GETDATE() WHERE name = 'recovery_logon_timestamp'",
	//'delete_from_usergroups_02'		=> "DELETE FROM {$CONFIG['TABLE_USERGROUPS']} WHERE 1",
	//'insert_into_usergroups_05'			=> "INSERT INTO {$CONFIG['TABLE_USERGROUPS']} VALUES (1, 'Administrators', 0, 1, 1, 1, 1, 1, 1, 0, 0, 3, 0, 5, 3)",
	//'insert_into_usergroups_06'			=> "INSERT INTO {$CONFIG['TABLE_USERGROUPS']} VALUES (2, 'Registered', 1024, 0, 1, 1, 1, 1, 1, 1, 0, 3, 0, 5, 3)",
	//'insert_into_usergroups_07'			=> "INSERT INTO {$CONFIG['TABLE_USERGROUPS']} VALUES (3, 'Anonymous', 0, 0, 1, 0, 0, 0, 0, 1, 1, 0, 0, 5, 3)",
	//'insert_into_usergroups_08'			=> "INSERT INTO {$CONFIG['TABLE_USERGROUPS']} VALUES (4, 'Banned', 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 5, 3)",
	//'update_bridge_04'				=> "UPDATE {$CONFIG['TABLE_BRIDGE']} SET value = NOW() WHERE name = 'recovery_logon_timestamp'",
	//'select_value_03'				=> "SELECT value FROM {$CONFIG['TABLE_BRIDGE']} WHERE name = 'recovery_logon_failures'",
	'set_recovery_logon_failures'	=> "UPDATE {$CONFIG['TABLE_BRIDGE']} SET value = '$number_of_failed_attempts' WHERE name = 'recovery_logon_failures'",
	//'select_value_04'				=> "SELECT value FROM {$CONFIG['TABLE_BRIDGE']} WHERE name = 'recovery_logon_timestamp'",
	//'select_value_05'				=> "SELECT value FROM {$CONFIG['TABLE_BRIDGE']} WHERE name = 'recovery_logon_failures'"
);


/******************************************************/
//queries from catmgr.php
/***********************************************************/
if (defined('CATMGR_PHP'))	$cpg_db_catmgr_php = array(
	'get_cid_fixed_cat_table'	=> "SELECT cid FROM {$CONFIG['TABLE_CATEGORIES']} WHERE 1=1",
	'edit_fixed_cat_table'		=> "UPDATE {$CONFIG['TABLE_CATEGORIES']} SET parent = '0' WHERE parent=cid OR parent NOT IN %1\$s",
	'get_subcat_data'			=> "SELECT cid, name, description FROM {$CONFIG['TABLE_CATEGORIES']} WHERE parent = '%1\$s' ORDER BY '%2\$s'",
	'update_cat_order'			=> "UPDATE {$CONFIG['TABLE_CATEGORIES']} SET pos='%1\$s' WHERE cid = '%2\$s'",
	'get_usergroup_list_box'	=> "SELECT  ug.group_name AS name, ug.group_id AS id, catm.group_id AS catm_gid FROM {$CONFIG['TABLE_USERGROUPS']} ".
								   " AS ug LEFT JOIN {$CONFIG['TABLE_CATMAP']} AS catm ON catm.group_id=ug.group_id AND catm.cid= '%1\$s'",
	'get_form_alb_thumb'		=> "SELECT pid, filepath, filename, url_prefix FROM {$CONFIG['TABLE_PICTURES']},{$CONFIG['TABLE_ALBUMS']} ".
								   "WHERE {$CONFIG['TABLE_PICTURES']}.aid = {$CONFIG['TABLE_ALBUMS']}.aid ".
								   "AND {$CONFIG['TABLE_ALBUMS']}.category = '%1\$s' AND approved='YES' ORDER BY filename",
	'get_verify_child_cat'		=> "SELECT cid " . "FROM {$CONFIG['TABLE_CATEGORIES']} " . "WHERE parent = '%1\$s' ",
	'edit_cat_alpha_sort'		=> "UPDATE {$CONFIG['TABLE_CONFIG']} SET value = '%1\$s' WHERE name = 'categories_alpha_sort'",
	'getalpha_move'				=> "UPDATE {$CONFIG['TABLE_CATEGORIES']} SET pos='%1\$s' WHERE cid = '%2\$s'",
//	'update_categories_04'		=> "UPDATE {$CONFIG['TABLE_CATEGORIES']} SET pos='$pos2' WHERE cid = '$cid2' LIMIT 1",
	'getalpha_setparent'		=> "UPDATE {$CONFIG['TABLE_CATEGORIES']} SET parent='%1\$s', pos='-1' WHERE cid = '%1\$s'",
	'getalpha_editcat'			=> "SELECT TOP 1 cid, name, parent, description, thumb FROM {$CONFIG['TABLE_CATEGORIES']} WHERE cid = '%1\$s'",
	'updatecat_no_parent'		=> "UPDATE {$CONFIG['TABLE_CATEGORIES']} SET parent='%1\$s', name='%2\$s', description='%3\$s', thumb='%4\$s' WHERE cid = '%5\$s'",
	'updatecat_parent'			=> "UPDATE {$CONFIG['TABLE_CATEGORIES']} SET name='%1\$s', description='%2\$s', thumb='%3\$s' WHERE cid = '%4\$s'",
	'updatecat_delete'			=> "DELETE FROM {$CONFIG['TABLE_CATMAP']} WHERE cid='%1\$s'",
	'updatecat_insert'			=> "INSERT INTO {$CONFIG['TABLE_CATMAP']} (cid, group_id) VALUES('%1\$s', '%2\$s')",
	'createcat_insert_cats'		=> "INSERT INTO {$CONFIG['TABLE_CATEGORIES']} (pos, parent, name, description) VALUES ('10000', '%1\$s', '%2\$s', '%3\$s')",
	'createcat_insert_catmaps'	=> "INSERT INTO {$CONFIG['TABLE_CATMAP']} (cid, group_id) VALUES('%1\$s', '%2\$s')",
	'deletecat_select_parent'	=> "SELECT TOP 1 parent FROM {$CONFIG['TABLE_CATEGORIES']} WHERE cid = '%1\$s'",
	'deletecat_edit_cats'		=> "UPDATE {$CONFIG['TABLE_CATEGORIES']} SET parent='%1\$s' WHERE parent = '%2\$s'",
	'deletecat_edit_albums'		=> "UPDATE {$CONFIG['TABLE_ALBUMS']} SET category='%1\$s' WHERE category = '%2\$s'",
	'deletecat_delete_cats'		=> "DELETE FROM {$CONFIG['TABLE_CATEGORIES']} WHERE cid='%1\$s'",
	'deletecat_delete_catmap'	=> "DELETE FROM {$CONFIG['TABLE_CATMAP']} WHERE cid='%1\$s'"
);


/******************************************************/
//queries from displayimage.php
/***********************************************************/
if (defined('DISPLAYIMAGE_PHP')) $cpg_db_displayimage_php = array(
	'get_subcat_data'		=> "SELECT cid, name, description FROM {$CONFIG['TABLE_CATEGORIES']} WHERE parent = '%1\$s'",
	'alb_set_array'			=> "SELECT aid FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = %1\$s",
	'fix_topn_images'		=> "SELECT category, title, aid, keyword, description, alb_password_hint ".
							   "FROM {$CONFIG['TABLE_ALBUMS']} WHERE aid='%1\$s'",
	'get_current_pic_data'	=> "SELECT TOP 1 aid from {$CONFIG['TABLE_PICTURES']} WHERE pid='%1\$s' %2\$s ",
	'get_current_alb_data'	=> "SELECT TOP 1 title, comments, votes, category, aid ".
							   "FROM {$CONFIG['TABLE_ALBUMS']} WHERE aid='%1\$s'"
);


/******************************************************/
//queries from groupmgr.php
/***********************************************************/
if (defined('GROUPMGR_PHP')) $cpg_db_groupmgr_php = array(
	'display_group_list'		=> "SELECT * FROM {$CONFIG['TABLE_USERGROUPS']} WHERE 1 ORDER BY group_id",
	'insert_administrators'		=> "INSERT INTO {$CONFIG['TABLE_USERGROUPS']} VALUES ('Administrators', 0, 1, 1, 1, 1, 1, 1, 0, 0, 3, 0, 5, 3);SELECT SCOPE_IDENTITY() AS group_id",
	'insert_registered'			=> "INSERT INTO {$CONFIG['TABLE_USERGROUPS']} VALUES ('Registered', 1024, 0, 1, 1, 1, 1, 1, 1, 0, 3, 0, 5, 3);SELECT SCOPE_IDENTITY() AS group_id",
	'insert_anonymous'			=> "INSERT INTO {$CONFIG['TABLE_USERGROUPS']} VALUES ('Anonymous', 0, 0, 1, 0, 0, 0, 0, 1, 1, 0, 0, 5, 3);SELECT SCOPE_IDENTITY() AS group_id",
	'insert_banned'				=> "INSERT INTO {$CONFIG['TABLE_USERGROUPS']} VALUES ('Banned', 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 5, 3);SELECT SCOPE_IDENTITY() AS group_id",
	'process_post_data'			=> "UPDATE {$CONFIG['TABLE_USERGROUPS']} SET %1\$s WHERE group_id = '%2\$s'",
	'delete_usergroup'			=> "DELETE FROM {$CONFIG['TABLE_USERGROUPS']} WHERE group_id = '%1\$s'  LIMIT 1",
	'set_default_usergroup'		=> "UPDATE {$CONFIG['TABLE_USERS']} SET user_group = '2' WHERE user_group = '%1\$s'",
	'new_blank_usergroup'		=> "INSERT INTO {$CONFIG['TABLE_USERGROUPS']} (group_name) VALUES ('')"
);


/******************************************************/
//queries from index.php
/***********************************************************/
if (defined('INDEX_PHP')) $cpg_db_index_php = array(
	'subcat_categories'				=> "SELECT cid, name, description, thumb FROM {$CONFIG['TABLE_CATEGORIES']} ".
									   "WHERE parent = '%1\$s'  ORDER BY %2\$s",
	'subcat_alb_filter'				=> "SELECT aid FROM {$CONFIG['TABLE_ALBUMS']} as a WHERE category>= %1\$s %2\$s",
	'subcat_user_gal_cat'			=> "SELECT count(*) as count FROM {$CONFIG['TABLE_PICTURES']} as p, {$CONFIG['TABLE_ALBUMS']} as a ".
									   "WHERE p.aid = a.aid AND approved='YES' AND category >= %1\$s %2\$s ",
	'subcat_unaliased_alb_filter'	=> "SELECT aid FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = '%1\$s' %2\$s",
	'subcat_not_user_gal_cat'		=> "SELECT count(*) as count FROM {$CONFIG['TABLE_PICTURES']} as p, {$CONFIG['TABLE_ALBUMS']} as a ".
									   "WHERE p.aid = a.aid AND approved='YES' AND category = '%1\$s' %2\$s",
	'subcat_pic'					=> "SELECT filepath, filename, url_prefix, pwidth, pheight FROM {$CONFIG['TABLE_PICTURES']} ".
									   "WHERE pid='%1\$s' %2\$s",
	'cat_list_user_gal_cat'			=> "SELECT aid FROM {$CONFIG['TABLE_ALBUMS']} as a WHERE category >= %1\$s %2\$s",
	'cat_list_not_user_gal_cat'		=> "SELECT aid FROM {$CONFIG['TABLE_ALBUMS']} as a WHERE category = '%1\$s' %2\$s",
	'cat_list_count_alb'			=> "SELECT count(aid) as count FROM {$CONFIG['TABLE_ALBUMS']} WHERE 1=1 %1\$s",
	'cat_list_count_pic_alb'		=> "SELECT count(pid) as count FROM {$CONFIG['TABLE_PICTURES']} as p LEFT JOIN " . $CONFIG['TABLE_ALBUMS'] . 
									   " as a ON a.aid=p.aid WHERE 1=1 %1\$s AND approved='YES'",
	'cat_list_count_comm_pic'		=> "SELECT count(msg_id) as count FROM {$CONFIG['TABLE_COMMENTS']} as c LEFT JOIN " . $CONFIG['TABLE_PICTURES'] .
									   " as p ON c.pid=p.pid  LEFT JOIN " . $CONFIG['TABLE_ALBUMS'] . " as a  ON a.aid=p.aid ".
									   " WHERE 1=1  %1\$s AND approval='YES'",
	'cat_list_count_cat'			=> "SELECT count(cid) as count FROM {$CONFIG['TABLE_CATEGORIES']} WHERE 1=1",
	'cat_list_sum_pic_alb'			=> "SELECT sum(hits) as sum_count FROM {$CONFIG['TABLE_PICTURES']} as p LEFT JOIN " . $CONFIG['TABLE_ALBUMS'] . 
									   " as a  ON p.aid=a.aid  WHERE 1=1 %1\$s",
	'cat_list_current_alb_set'		=> "SELECT count(aid) as count FROM {$CONFIG['TABLE_ALBUMS']}  WHERE 1=1 %1\$s",
	'cat_list_count_pic'			=> "SELECT count(pid) as count FROM {$CONFIG['TABLE_PICTURES']} WHERE 1=1 %1\$s",
	'cat_list_sum_pic'				=> "SELECT sum(hits) as sum_count FROM {$CONFIG['TABLE_PICTURES']} WHERE 1=1 %1\$s AND approved='YES'",
	'list_user_pic'					=> "SELECT filepath, filename, url_prefix, pwidth, pheight  FROM {$CONFIG['TABLE_PICTURES']} " . 
									   "WHERE pid='%1\$s' AND approved='YES'",
	'list_albums_alb_owner'			=> "SELECT count(aid) as count FROM {$CONFIG['TABLE_ALBUMS']} as a WHERE owner = '%1\$s' %2\$s",
	'list_albums_alb_cats'			=> "SELECT count(aid) as count FROM {$CONFIG['TABLE_ALBUMS']} as a WHERE category = '%1\$s' %2\$s",
	'list_albums_alb_pic_owner'		=> "SELECT TOP %4\$s a.aid, a.title, a.description, a.thumb, category, visibility, filepath, ".
									   "filename, url_prefix, pwidth, pheight  FROM " . $CONFIG['TABLE_ALBUMS'] . 
									   " as a  LEFT JOIN " . $CONFIG['TABLE_PICTURES'] . " as p " . 
									   "ON a.thumb=p.pid  WHERE a.owner= %1\$s %2\$s AND a.category NOT IN ".
									   "(SELECT TOP %3\$s category FROM {$CONFIG['TABLE_ALBUMS']} ORDER BY category DESC, pos) ".
									   "ORDER BY a.category DESC , a.pos ",	###	cpgdb_AL
	'list_albums_concat'			=> "SELECT TOP %4\$s a.title + '%1\$s <i>' + c. name + '</i>' as concat FROM ". $CONFIG['TABLE_ALBUMS'] . 
									   " AS a LEFT JOIN ". $CONFIG['TABLE_CATEGORIES'] ." AS c ON a.category=c.cid  WHERE a.owner = %2\$s ".
									   "AND a.category NOT IN (SELECT TOP %3\$s category FROM {$CONFIG['TABLE_ALBUMS']} ORDER BY category DESC, pos)".
									   " ORDER BY a.category DESC , a.pos",	###	cpgdb_AL
	'list_albums_alb_pic_cat'		=> "SELECT TOP %4\$s a.aid, a.title, a.description, a.thumb, category, visibility, filepath, ".
									   "filename, url_prefix, pwidth, pheight  FROM " . $CONFIG['TABLE_ALBUMS'] ." as a ".
									   " LEFT JOIN ". $CONFIG['TABLE_PICTURES'] ." as p  ON a.thumb=p.pid  WHERE a.category= %1\$s %2\$s ".
									   "AND a.pos NOT IN (SELECT TOP %3\$s pos FROM {$CONFIG['TABLE_ALBUMS']} ORDER BY pos)".
									   " ORDER BY a.pos",	###	cpgdb_AL
	'alb_stats_kwrd'				=> "SELECT a.aid, count( p.pid )  AS pic_count, max( p.pid )  AS last_pid, max( p.ctime ) ".
									   " AS last_upload, a.keyword, a.alb_hits  FROM {$CONFIG['TABLE_ALBUMS']} AS a ".
									   "LEFT JOIN {$CONFIG['TABLE_PICTURES']} AS p ON a.aid = p.aid AND p.approved =  'YES' ".
									   "WHERE a.aid IN %1\$s  GROUP BY a.aid, a.keyword, a.alb_hits",	### cpgdb_AL
	'list_albums_get_pic_kwrd'		=> "SELECT count(pid) AS link_pic_count, max(pid) AS link_last_pid FROM {$CONFIG['TABLE_PICTURES']} ".
									   "WHERE aid != '%1\$s' AND keywords LIKE '%2\$s'  AND approved = 'YES'",
	'random_pictures'				=> "SELECT TOP 1 filepath, filename, url_prefix, pwidth, pheight  FROM {$CONFIG['TABLE_PICTURES']} ".
									   "WHERE aid = '%1\$s' ORDER BY NEWID()",
	'get_pictures'					=> "SELECT filepath, filename, url_prefix, pwidth, pheight  FROM {$CONFIG['TABLE_PICTURES']} ".
									   "WHERE pid='%1\$s'",
	'album_adm_menu_get_alb'		=> "SELECT * FROM {$CONFIG['TABLE_ALBUMS']} WHERE aid='%1\$s' AND owner='%2\$s'",
	'album_adm_menu_dist_alb_cat'	=> "SELECT DISTINCT alb.category FROM {$CONFIG['TABLE_ALBUMS']} AS alb ".
									   "INNER JOIN {$CONFIG['TABLE_CATMAP']} AS catm ON alb.category=catm.cid ".
									   "WHERE alb.owner = '%1\$s' AND alb.aid='%2\$s' AND catm.group_id='%3\$s'",
	'list_cat_alb_count_alb'		=> "SELECT count(aid) as count FROM {$CONFIG['TABLE_ALBUMS']} as a WHERE category = '%1\$s' %2\$s",
	'list_cat_alb_join_pic'			=> "SELECT TOP %4\$s a.aid, a.title, a.description, a.thumb, visibility, filepath, filename, ".
									   "url_prefix, pwidth, pheight FROM ". $CONFIG['TABLE_ALBUMS'] ." as a ".
									   " LEFT JOIN ". $CONFIG['TABLE_PICTURES'] ." as p  ON a.thumb=p.pid " . 
									   "WHERE category=%1\$s %2\$s ".
									   "AND a.pos NOT IN (SELECT TOP %3\$s pos FROM {$CONFIG['TABLE_ALBUMS']} ORDER BY pos)".
									   "ORDER BY a.pos", ### cpgdb_AL
	//'list_cat_alb_count_alb_pic'	=> "SELECT a.aid, count( p.pid ) AS pic_count, max( p.pid )  AS last_pid, max( p.ctime )  AS last_upload,".
									   //" a.keyword, a.alb_hits   FROM {$CONFIG['TABLE_ALBUMS']} AS a   LEFT JOIN {$CONFIG['TABLE_PICTURES']} AS p ".
									   //"ON a.aid = p.aid AND p.approved =  'YES' ". "WHERE a.aid IN %1\$s" . "GROUP BY a.aid",
	'list_cat_alb_kwrd_pic_srch'	=> "SELECT count(pid) AS link_pic_count FROM {$CONFIG['TABLE_PICTURES']} WHERE aid != '%1\$s' ".
									   "AND keywords LIKE '%2\$s' AND approved = 'YES'",
	//'list_cat_alb_vis_test_aid'		=> "SELECT filepath, filename, url_prefix, pwidth, pheight  FROM {$CONFIG['TABLE_PICTURES']} ".
									   //"WHERE aid = '%1\$s' ORDER BY RAND() LIMIT 0,1",
	//'list_cat_alb_vis_test_pid'		=> "SELECT filepath, filename, url_prefix, pwidth, pheight  FROM {$CONFIG['TABLE_PICTURES']} " . 
									   //"WHERE pid='%1\$s'"
);


/**********************************************************/
//queries from login.php
/***********************************************************/
if (defined('LOGIN_PHP')) $cpg_db_login_php = array(
	'get_all_banned'		=> "SELECT * FROM {$CONFIG['TABLE_BANNED']} WHERE ip_addr='%1\$s' OR ip_addr='%2\$s'",
	'update_banned'			=> "UPDATE {$CONFIG['TABLE_BANNED']} SET brute_force='%1\$s', expiry='%2\$s' WHERE ban_id='%3\$s'",
	'new_banned'			=> "INSERT INTO {$CONFIG['TABLE_BANNED']} (ip_addr, expiry, brute_force) VALUES ('%1\$s', '%2\$s', '%3\$s')"
);


/**********************************************************/
//queries from picmgr.php
/***********************************************************/
if (defined('PICMGR_PHP')) $cpg_db_picmgr_php = array(
	'get_album_data'			=> "SELECT aid, title FROM {$CONFIG['TABLE_ALBUMS']} ORDER BY title",
	'alb_root_cat'				=> "SELECT aid, title FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = 0",
	'alb_public_cat'			=> "SELECT DISTINCT a.aid AS aid, a.title AS title, c.name AS cname ".
								   "FROM {$CONFIG['TABLE_ALBUMS']} AS a, {$CONFIG['TABLE_CATEGORIES']} AS c ".
								   "WHERE a.category = c.cid AND a.category < '%1\$s'",
	'alb_user_personal'			=> "SELECT aid, title AS title FROM {$CONFIG['TABLE_ALBUMS']}  WHERE category = '%1\$s'",
	'get_picture_sort'			=> "SELECT aid, pid, filename FROM {$CONFIG['TABLE_PICTURES']} WHERE aid = '%1\$s' ORDER BY position ASC, pid"
);


/**********************************************************/
//queries from pluginmgr.php
/***********************************************************/
if (defined('PLUGINMGR_PHP') || defined('CORE_PLUGIN')) $cpg_db_pluginmgr_php = array(
	'update_config'				=> "UPDATE {$CONFIG['TABLE_CONFIG']} SET value = '%1\$s' WHERE name = 'enable_plugins'",
	'set_priority'				=> 'update '.$CONFIG['TABLE_PLUGINS'].' set priority=%1\$s where priority=%2\$s;',
	'set_priority_plugin'		=> 'update '.$CONFIG['TABLE_PLUGINS'].' set priority=%1\$s where plugin_id=%2\$s;',
	//'update_plugins_03'			=> 'update '.$CONFIG['TABLE_PLUGINS'].' set priority='.($priority).' where priority='.($priority+1).';',
	//'update_plugins_04'			=> 'update '.$CONFIG['TABLE_PLUGINS'].' set priority='.($priority+1).' where plugin_id='.$thisplugin->plugin_id.';'
);


/**********************************************************/
//queries from profile.php
/***********************************************************/
if (defined('PROFILE_PHP')) $cpg_db_profile_php = array(
	'cpg_user_pic_count'		=> "SELECT pid FROM {$CONFIG['TABLE_PICTURES']} WHERE owner_name = '%1\$s'",
	'count_owner_approved_pics'	=> "SELECT count(*) as count, MAX(pid) as max FROM {$CONFIG['TABLE_PICTURES']} AS p ".
								   "WHERE owner_id = '%1\$s' AND approved = 'YES' %2\$s",
	'count_owner_albums'		=> "SELECT count(*) as count FROM {$CONFIG['TABLE_ALBUMS']} AS p WHERE category = '%1\$s' %2\$s",
	'cpg_user_thumb'			=> "SELECT filepath, filename, url_prefix, pwidth, pheight  FROM {$CONFIG['TABLE_PICTURES']} ".
								   "WHERE pid='%1\$s'",
	'count_approved_comments'	=> "SELECT count(*) as count, MAX(msg_id) as max FROM {$CONFIG['TABLE_COMMENTS']} as c, ".
								   "{$CONFIG['TABLE_PICTURES']} as p WHERE c.pid = p.pid AND approval='YES' ".
								   "AND author_id = '%1\$s' %2\$s",
	'cpg_user_last_comment'		=> "SELECT filepath, filename, url_prefix, pwidth, pheight, msg_author, ".
								   "DATEDIFF(s, '19700101', msg_date) as msg_date, msg_body, approval ".
								   "FROM {$CONFIG['TABLE_COMMENTS']} AS c, {$CONFIG['TABLE_PICTURES']} AS p ".
								   "WHERE msg_id='%1\$s' AND approval = 'YES' AND c.pid = p.pid",
	'get_user_id_verify_email'	=> "SELECT user_id FROM {$CONFIG['TABLE_USERS']}  WHERE user_email = '%1\$s'",
	'update_user_profile'		=> "UPDATE {$CONFIG['TABLE_USERS']} SET  user_profile1 = '%1\$s', user_profile2 = '%2\$s', ".
								   "user_profile3 = '%3\$s', user_profile4 = '%4\$s', user_profile5 = '%5\$s', ".
								   "user_profile6 = '%6\$s' %7\$s WHERE user_id = '%8\$s'",
	'update_user_password'		=> "UPDATE %1\$s SET %2\$s = '%3\$s' WHERE %4\$s = '%5\$s' AND  %6\$s = '%7\$s'",	###### BINARY  cpgdb_AL
	'get_user_profile'			=> "SELECT user_name, user_email, user_group, DATEDIFF(s, '19700101', user_regdate) as user_regdate, ".
								   "group_name, user_profile1, user_profile2, user_profile3, user_profile4, user_profile5, ".
								   "user_profile6, user_group_list, COUNT(pid) as pic_count, ROUND(SUM(total_filesize)/1024, 0) ".
								   "as disk_usage, group_quota  FROM {$CONFIG['TABLE_USERS']} AS u ".
								   "INNER JOIN {$CONFIG['TABLE_USERGROUPS']} AS g ON user_group = group_id  ".
								   "LEFT JOIN {$CONFIG['TABLE_PICTURES']} AS p ON p.owner_id = u.user_id  ".
								   "WHERE user_id ='%1\$s'  GROUP BY user_id, user_name, user_email, user_group, user_regdate,".
								   "group_name, user_profile1, user_profile2, user_profile3, user_profile4, user_profile5, ".
								   "user_profile6, user_group_list, group_quota; ",	######	cpgdb_AL
	'get_group_name'			=> "SELECT group_name  FROM {$CONFIG['TABLE_USERGROUPS']}  WHERE group_id IN (%1\$s) ".
								   "AND group_id != %2\$s  ORDER BY group_name"
);


/**********************************************************/
//queries from reviewcom.php
/***********************************************************/
if (defined('REVIEWCOM_PHP')) $cpg_db_reviewcom_php = array(
	'verify_admin'					=> "SELECT TOP 1 msg_id, msg_author, msg_body, DATEDIFF(s, '19700101', msg_date) AS msg_date, approval, author_id,".
									   " {$CONFIG['TABLE_COMMENTS']}.pid  AS pid, aid, filepath, filename, url_prefix, pwidth, pheight ".
									   " FROM {$CONFIG['TABLE_COMMENTS']}, {$CONFIG['TABLE_PICTURES']} ".
									   " WHERE {$CONFIG['TABLE_COMMENTS']}.pid = {$CONFIG['TABLE_PICTURES']}.pid ".
									   "AND {$CONFIG['TABLE_COMMENTS']}.msg_id = '%1\$s'",
	'comments_query_approval'		=> "UPDATE {$CONFIG['TABLE_COMMENTS']} SET approval = '%1\$s' WHERE msg_id = '%2\$s'",
	'display_comment_approval_only'	=> "UPDATE {$CONFIG['TABLE_CONFIG']} SET value = '%1\$s' WHERE name = 'display_comment_approval_only'",
	'set_approval_yes'				=> "UPDATE {$CONFIG['TABLE_COMMENTS']} SET approval = 'YES' WHERE msg_id IN (%1\$s)",
	'set_approval_no'				=> "UPDATE {$CONFIG['TABLE_COMMENTS']} SET approval = 'NO' WHERE msg_id IN (%1\$s)",
	'delete_selected_comments'		=> "DELETE FROM {$CONFIG['TABLE_COMMENTS']} WHERE msg_id IN (%1\$s)",
	//'update_comments_04'			=> "UPDATE {$CONFIG['TABLE_COMMENTS']} SET approval = 'YES' WHERE msg_id IN $cid_set",
	//'update_comments_05'			=> "UPDATE {$CONFIG['TABLE_COMMENTS']} SET approval = 'NO' WHERE msg_id IN $cid_set",
	'count_comments'				=> "SELECT count(*) as count FROM {$CONFIG['TABLE_COMMENTS']} WHERE 1=1",
	'only_comments_needing_approval'=> "SELECT TOP %4\$s msg_id, msg_author, msg_body, DATEDIFF(s, '19700101', msg_date)  AS msg_date, approval, author_id,".
									   " {$CONFIG['TABLE_COMMENTS']}.pid  AS pid, aid, filepath, filename, url_prefix, pwidth, pheight ".
									   " FROM {$CONFIG['TABLE_COMMENTS']}, {$CONFIG['TABLE_PICTURES']} ".
									   " WHERE {$CONFIG['TABLE_COMMENTS']}.pid = {$CONFIG['TABLE_PICTURES']}.pid %1\$s AND %2\$s NOT IN".
									   "(SELECT TOP %3\$s  %2\$s FROM {$CONFIG['COMMENTS']}, {$CONFIG['TABLE_PICTURES']} ORDER BY %2\$s)".
									   "ORDER BY %2\$s"
);


/**********************************************************/
//queries from search.php
/***********************************************************/
if (defined('SEARCH_PHP')) $cpg_db_search_php = array(
	'get_all_config'	=> "SELECT * FROM {$CONFIG['TABLE_CONFIG']} WHERE name LIKE '%1\$s' AND value <> '' ORDER BY name ASC"
);


/**********************************************************/
//queries from searchnew.php
/***********************************************************/
if (defined('SEARCHNEW_PHP') || defined('DB_INPUT_PHP')) $cpg_db_searchnew_php = array(
	'get_alb_def_cat'				=> "SELECT aid, title FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = 0",
	'get_alb_cat'					=> "SELECT DISTINCT a.aid as aid, a.title as title, c.name as cname FROM ".
									   "{$CONFIG['TABLE_ALBUMS']} as a, {$CONFIG['TABLE_CATEGORIES']} as c ".
									   "WHERE a.category = c.cid AND a.category < '%1\$s'",
	'get_all_pic_in_db'				=> "SELECT filepath, filename  FROM {$CONFIG['TABLE_PICTURES']}  WHERE filepath LIKE '%1\$s'",
	'get_all_alb_in_db'				=> "SELECT aid, title FROM {$CONFIG['TABLE_ALBUMS']} WHERE 1=1",
	'browse_batch_add_edit'			=> "UPDATE {$CONFIG['TABLE_CONFIG']} SET value = '%1\$s' WHERE name = 'browse_batch_add'",
	'display_thumbs_batch_add_edit'	=> "UPDATE {$CONFIG['TABLE_CONFIG']} SET value = '%1\$s' WHERE name = 'display_thumbs_batch_add'"
);


/**********************************************************/
//queries from thumbnails.php
/***********************************************************/
if (defined('THUMBNAILS_PHP')) $cpg_db_thumbnails_php = array(
	'get_parent_cat_data'		=> "SELECT cid FROM {$CONFIG['TABLE_CATEGORIES']} WHERE parent = '%1\$s'",
	'get_parent_subcat_data'	=> "SELECT aid FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = '%1\$s'",
	'get_alb_numeric_data'		=> "SELECT category, title, aid, keyword, description, alb_password_hint ".
								   "FROM {$CONFIG['TABLE_ALBUMS']} WHERE aid='%1\$s'",
	'get_alb_data'				=> "SELECT category, title, aid, keyword, description, alb_password_hint ".
								   "FROM {$CONFIG['TABLE_ALBUMS']} WHERE aid='%1\$s'",
	'get_alb_aid'				=> "SELECT aid FROM {$CONFIG['TABLE_ALBUMS']} WHERE %1\$s",
	'get_cat_name'				=> "SELECT name FROM {$CONFIG['TABLE_CATEGORIES']} WHERE cid = '%1\$s'",
	'get_validate_alb'			=> "SELECT aid FROM ". $CONFIG['TABLE_ALBUMS'] ." WHERE alb_password='%1\$s' AND aid='%2\$s'",
	'get_alb_if_pwrd'			=> "SELECT aid FROM ". $CONFIG['TABLE_ALBUMS'] ." WHERE aid='%1\$s' AND alb_password != ''",
	'get_alb_pwrd'				=> "SELECT alb_password FROM ". $CONFIG['TABLE_ALBUMS'] ."where aid = '%1\$s'"
								   //" WHERE MD5(alb_password)='%1\$s' AND aid='%2\$s'"
);


/**********************************************************/
//queries from usermgr.php
/***********************************************************/
if (defined('USERMGR_PHP') || defined('PROFILE_PHP')) $cpg_db_usermgr_php = array(
	'delete_user'				=> "DELETE FROM {$CONFIG['TABLE_USERS']} WHERE user_name = '' ",
	'list_group_alb_access'		=> "SELECT  group_id, albums.aid AS aid, group_name, categories.name AS category, albums.title AS album ".
								   " FROM  {$CONFIG['TABLE_USERGROUPS']} AS groups,  {$CONFIG['TABLE_ALBUMS']} AS albums ".
								   "  LEFT JOIN  {$CONFIG['TABLE_CATEGORIES']} AS categories  ON  albums.category = categories.cid ".
								   " WHERE  group_id = '%1\$s' AND albums.visibility = groups.group_id  ORDER BY  category, album",
	'list_groups_alb_access'	=> "SELECT   group_id, group_name, categories.name AS category, albums.title AS album ".
								   "  FROM    {$CONFIG['TABLE_USERGROUPS']} AS groups, {$CONFIG['TABLE_ALBUMS']} AS albums  ".
								   " LEFT JOIN   {$CONFIG['TABLE_CATEGORIES']} AS categories    ON   albums.category = categories.cid  ".
								   "  WHERE   albums.visibility = groups.group_id  GROUP BY  group_name  ORDER BY  group_name, category, album",
	'list_users'				=> "SELECT group_id, group_name FROM {$CONFIG['TABLE_USERGROUPS']} ORDER BY group_name",
	'get_edit_user'				=> "SELECT * FROM {$CONFIG['TABLE_USERS']} WHERE user_id = '%1\$s'",
//	'select_group_id'			=> "SELECT group_id, group_name FROM {$CONFIG['TABLE_USERGROUPS']} ORDER BY group_name",
	'get_update_user'			=> "SELECT user_id FROM {$CONFIG['TABLE_USERS']} WHERE user_name = '%1\$s' AND user_id != '%2\$s'",
	'update_user'				=> "UPDATE {$CONFIG['TABLE_USERS']} SET  user_name = '%1\$s', user_email = '%2\$s', user_active = '%3\$s',".
								   " user_group = '%4\$s', user_profile1 = '%5\$s', user_profile2 = '%6\$s', user_profile3 = '%7\$s',".
								   " user_profile4 = '%8\$s', user_profile5 = '%9\$s', user_profile6 = '%10\$s', user_group_list = '%11\$s'".
								   "%12\$s WHERE user_id = '%13\$s'",
//	'delete_from_users_02'		=> "DELETE FROM {$CONFIG['TABLE_USERS']} WHERE user_name = '' LIMIT 1",
	'switch_new_user'			=> "INSERT INTO {$CONFIG['TABLE_USERS']}(user_regdate, user_active, user_profile6) VALUES (GETDATE(), 'YES', '');".
								   "SELECT SCOPE_IDENTITY() AS user_id",
	'switch_group_alb_access'	=> "SELECT group_name  FROM {$CONFIG['TABLE_USERGROUPS']} AS groups, {$CONFIG['TABLE_ALBUMS']} AS albums ".
								   " WHERE group_id = '%1\$s' AND albums.visibility = groups.group_id",
//	'delete_from_users_03'		=> "DELETE FROM {$CONFIG['TABLE_USERS']} WHERE user_name = '' LIMIT 1"
);


/**********************************************************/
//queries from util.php
/***********************************************************/
if (defined('UTIL_PHP') || defined('UPLOAD_PHP')) $cpg_db_util_php = array(
	'del_titles_update'				=> "UPDATE {$CONFIG['TABLE_PICTURES']} SET title = '' %1\$s",
	'get_all_pics'					=> "SELECT * FROM {$CONFIG['TABLE_PICTURES']} %1\$s",
	'filename_to_title_update'		=> "UPDATE {$CONFIG['TABLE_PICTURES']} SET title = '%1\$s' WHERE pid = '%2\$s'",
	'filloptions'					=> "SELECT aid, category, CASE WHENuser_name IS NOT NULL THEN '(' + user_name + ') ' + title ".
									   " ELSE ' - ' + title END  AS title FROM {$CONFIG['TABLE_ALBUMS']} AS a ".
									   "LEFT JOIN {$CONFIG['TABLE_USERS']} AS u ON category = (%1\$s + user_id) ".
									   "ORDER BY category, title",
	'filloptions_get_name'			=> "SELECT name FROM {$CONFIG['TABLE_CATEGORIES']} WHERE cid = %1\$s",
	'update_thumbs_get_pics'		=> "SELECT TOP %3\$s * FROM {$CONFIG['TABLE_PICTURES']} %1\$s AND pid NOT IN ".
									   "(SELECT TOP %2\$s pid FROM {$CONFIG['TABLE_PICTURES']} %1\$s)",
	'update_thumbs_update_pic'		=> "UPDATE {$CONFIG['TABLE_PICTURES']} SET pwidth='%1\$s' , pheight='%2\$s' WHERE pid='%3\$s' ",
	//'delete_backup_img'				=> "SELECT * FROM {$CONFIG['TABLE_PICTURES']} %1\$s",
	//'del_orig_get_pic'				=> "SELECT * FROM {$CONFIG['TABLE_PICTURES']} $albstr",
	'del_orig_update_pic'			=> "UPDATE {$CONFIG['TABLE_PICTURES']} SET filesize='%1\$s', total_filesize='%2\$s', ".
									   "pwidth='%3\$s', pheight='%4\$s' WHERE pid='%5\$s' ",
	//'select_all_from_pictures_05'	=> "SELECT * FROM {$CONFIG['TABLE_PICTURES']} $albstr",
	'del_norm_update_pic'			=> "UPDATE {$CONFIG['TABLE_PICTURES']} SET total_filesize='%1\$s' WHERE pid='%2\$s'",
	'del_orphans_single_comment'	=> "DELETE FROM {$CONFIG['TABLE_COMMENTS']} WHERE msg_id= '%1\$s' ",
	'del_orphans_get_pic_id'		=> "SELECT pid FROM {$CONFIG['TABLE_PICTURES']}",
	'del_orphans_get_all_comment'	=> "SELECT * FROM {$CONFIG['TABLE_COMMENTS']} WHERE pid NOT IN %1\$s",
	'del_orphans_comment'			=> "DELETE FROM {$CONFIG['TABLE_COMMENTS']} WHERE msg_id= %1\$s",
	//'select_all_from_pictures_06'	=> "SELECT * FROM {$CONFIG['TABLE_PICTURES']} $albstr",
	'del_old_pics'					=> "DELETE FROM {$CONFIG['TABLE_PICTURES']} WHERE pid='%1\$s' ",
	'del_old_comment'				=> "DELETE FROM {$CONFIG['TABLE_COMMENTS']} WHERE pid='%1\$s' ",
	'del_old_exif'					=> "DELETE FROM {$CONFIG['TABLE_EXIF']} WHERE filename='%1\$s' ",
	'reset_views_update_pics'		=> "UPDATE {$CONFIG['TABLE_PICTURES']} SET hits ='0' %1\$s",
	'refresh_db_get_all_pics'		=> "SELECT TOP %3\$s * FROM {$CONFIG['TABLE_PICTURES']} %1\$s AND pid NOT IN ".
									   "(SELECT TOP %2\$s pid FROM {$CONFIG['TABLE_PICTURES']} %1\$s) ORDER BY pid ASC ",
	'refresh_db_set_total_filesize'	=> "UPDATE {$CONFIG['TABLE_PICTURES']} SET total_filesize = '%1\$s' ".
									   "WHERE pid = '%2\$s' ",
	'refresh_db_set_filesize'		=> "UPDATE {$CONFIG['TABLE_PICTURES']} SET filesize = '%1\$s' WHERE pid = '%2\$s' ",
	'refresh_db_set_dimensions'		=> "UPDATE {$CONFIG['TABLE_PICTURES']} SET pwidth = '%1\$s', pheight = '%2\$s' ".
									   "WHERE pid = '%3\$s' "
);


#########################################
//	api files
#########################################

/**********************************************************************************************************/
//	queries  from api/ cpgAPIAuth.php
/**********************************************************************************************************/
$cpg_db_api_auth_php = array(
	'check_in_users_table'			=> "SELECT user_id, user_name, user_password FROM {$CONFIG['TABLE_USERS']} ".
									   "WHERE user_name = '%1\$s' AND user_password = '%2\$s' AND user_active = 'YES'", ### BINARY
	'authenticate_user'				=> "SELECT u.user_id AS id, u.user_name AS username, u.user_password AS password, ".
									   " u.user_group+100 AS group_id  FROM   {$CONFIG['TABLE_USERS']} AS u ".
									   "INNER JOIN {$CONFIG['TABLE_USERGROUPS']} AS g ON u.user_group = g.group_id ".
									   "WHERE    u.user_id = '%1\$s'",
	'get_forbidden_set'				=> "SELECT aid  FROM  {$CONFIG['TABLE_ALBUMS']}  WHERE  visibility != '0' ".
									   "AND  visibility !='%1\$s' AND   visibility NOT IN %2\$s",
	'get_user_group'				=> "SELECT  user_group_list   FROM  {$CONFIG['TABLE_USERS']} AS u  ".
									   " WHERE  user_id = '%1\$s' AND user_group_list <> '';",
	'user_privilages'				=> "SELECT  MAX(group_quota) as disk_max, MIN(group_quota) as disk_min, " .
						               "MAX(can_rate_pictures) as can_rate_pictures, MAX(can_send_ecards) as can_send_ecards, " .
						               "MAX(upload_form_config) as ufc_max, MIN(upload_form_config) as ufc_min, " .
						               "MAX(custom_user_upload) as custom_user_upload, MAX(num_file_upload) as num_file_upload, " .
						               "MAX(num_URI_upload) as num_URI_upload, MAX(can_post_comments) as can_post_comments, " .
						               "MAX(can_upload_pictures) as can_upload_pictures, MAX(can_create_albums) as can_create_albums, " .
						               "MAX(has_admin_access) as has_admin_access, MIN(pub_upl_need_approval) as pub_upl_need_approval, " .
						               "MIN( priv_upl_need_approval) as  priv_upl_need_approval ".
						               "FROM {$CONFIG['TABLE_USERGROUPS']} WHERE group_id in (%1\$s)",
	'get_privilaged_group'			=> "SELECT group_name FROM  {$CONFIG['TABLE_USERGROUPS']} WHERE group_id= %1\$s",
	'get_default_group'				=> "SELECT * FROM {$CONFIG['TABLE_USERGROUPS']} WHERE group_id = %1\$s"
);



#########################################
//	bridge files
#########################################

/**********************************************************************************************************/
//	queries  from  bridge/ coppermine.inc.php
/**********************************************************************************************************/
$cpg_db_coppermine_inc = array(
	'login_get_user_info'		=> "SELECT user_id, user_name, user_password FROM %1\$s WHERE %2\$s",
	'login_set_user_lastvisit'	=> "UPDATE %1\$s SET user_lastvisit = GETDATE() WHERE %2\$s",
	'update_guestsession'		=> "update %1\$s set user_id=%2\$s %3\$s where session_id='%4\$s';",
	'logout_session'			=> "update %1\$s set user_id = 0, remember=0 where session_id='%2\$s';",
	'get_user_group'			=> "SELECT user_group_list FROM %1\$s AS u WHERE %2\$s='%3\$s' and user_group_list <> '';",
	'delete_old_sessions'		=> "delete from %1\$s where time<%2\$s and remember=0;",
	'delete_remember_sessions'	=> "delete from %1\$s where time<%2\$s;",
	'check_valid_session'		=> "select user_id from %1\$s where session_id='%2\$s';",
	'check_session_user'		=> "select user_id as id, user_password as password from %1\$s where user_id=%2\$s",
	'session_update'			=> "update %1\$s set time='%2\$s' where session_id='%3\$s';",
	'create_session'			=> "insert into %1\$s (session_id, user_id, time, remember) values ('%2\$s', 0, '%3\$s', 0);",
	'generate_session_id'		=> "SELECT session_id FROM %1\$s WHERE session_id='%2\$s'",
	'get_guest_count'			=> "select count(user_id) as num_guests from %1\$s where user_id=0;",
	'get_auth_user_count'		=> "select count(user_id) as num_users from %1\$s where user_id>0;",
	'get_group_no_override'		=> "SELECT * FROM %1\$s WHERE $2\$s <> ''",
	'get_group_data'			=> "SELECT group_id, group_name FROM {$CONFIG['TABLE_USERGROUPS']} WHERE 1=1",
	'add_admin_info'			=> "INSERT INTO {$CONFIG['TABLE_USERGROUPS']} (group_id, group_name, has_admin_access) ".
								   "VALUES ('%1\$s', '%2\$s', '%3\$s')",
	'update_group_names'		=> "UPDATE {$CONFIG['TABLE_USERGROUPS']} SET group_name = '%1\$s' WHERE group_id = '%2\$s'",
	'fix_admin_group'			=> "UPDATE {$CONFIG['TABLE_USERGROUPS']} SET has_admin_access = '1' WHERE group_id = '1'"
);


/**********************************************************************************************************/
//	queries  from  bridge/ eblah.inc.php
/**********************************************************************************************************/
$cpg_db_eblah_inc = array(
	'get_user_id'		=> "SELECT %1\$s AS user_id FROM %2\$s WHERE %3\$s  = '%4\$s'",
	'get_username'		=> "SELECT user_name FROM {$CONFIG['TABLE_USERS']}",
	'sync_users'		=> "INSERT INTO %1\$s (user_name, user_password, user_email, user_active, user_group) ".
						   "VALUES ( '%2\$s', '%3\$s', '%4\$s', 'YES', %5\$s)"
);


/**********************************************************************************************************/
//	queries  from  bridge/ invisionboard20.inc.php
/**********************************************************************************************************/
$cpg_db_invisionboard20_inc = array(
	'session_extract'			=> "SELECT member_id , member_login_key FROM %1\$s AS s INNER JOIN %2\$s AS u ".
								   "ON s.member_id = u.id WHERE s.id = '%3\$s'"
);


/**********************************************************************************************************/
//	queries  from  bridge/ mambo.inc.php
/**********************************************************************************************************/
$cpg_db_mambo_inc = array(
	'delete_old_sessions'		=> 'delete from %1\$s where (time < %2\$s);',
	'session_update'			=> 'update %1\$s set time="%2\$s" where session_id="%3\$s";',
	'collect_groups'			=> "SELECT * FROM %1\$s",
	'check_session_cookie'		=> 'select userid from %1\$s where session_id="%2\$s";',
	'session_exists_check_user'	=> 'select id, password from %1\$s where id="%2\$s"',
	'get_id_from_mambo'			=> 'select u.%1\$s as id, u.%2\$s as password, u.%3\$s as username, u.%4\$s as usertbl_group_id,'.
								   ' g.%5\$s as grouptbl_group_id, g.%6\$s as grouptbl_group_name '.
								   'from %7\$s as u inner join %8\$s as g on gid=group_id '.
								   'where u.%3\$s="%9\$s" and u.%2\$s="%10\$s" and u.block=0;',
	'update_session_info'		=> 'update %1\$s set userid=%2\$s,username="%3\$s",guest=0 ,gid=%4\$s ,usertype="%5\$s" '.
								   'where session_id="%6\$s";',
	'update_lastvisit'			=> 'update %1\$s set lastvisitDate="%2\$s" where id=%3\$s',
	//'login_get_mambo_id'		=> 'select u.%1\$s as id, u.%2\$s as password, u.%3\$s as username, u.%4\$s as usertbl_group_id, '.
	//							   'g.%5\$s as grouptbl_group_id, g.%6\$s as grouptbl_group_name '.
	//							   'from %7\$s as u inner join %8\$s as g on gid=group_id '.
	//							   'where u.%3\$s="%9\$s" and u.%2\$s="%10\$s" and u.block=0;',
	//'login_update_session'		=> 'update %1\$s set userid=%2\$s,username="%3\$s",guest=0 ,gid=%4\$s ,usertype="%5\$s" '.
	//							   'where session_id="%6\$s";',
	//'login_update_lastvisit'	=> 'update %1\$s set lastvisitDate="%2\$s" where id=%3\$s',
	'create_session'			=> 'insert into %1\$s (session_id, username, guest, time, gid) values ("%2\$s", "", 1, "%3\$s",0)',
	'generate_id'				=> "SELECT session_id FROM %1\$s WHERE session_id='%2\$s'",
	'int_src_int_tgt'			=> "SELECT COUNT(*) as count FROM %1\$s AS g1 LEFT JOIN %1\$s AS g2 ON g1.lft > g2.lft ".
								   "AND g1.lft < g2.rgt WHERE g1.group_id=%2\$s AND g2.group_id=%3\$s",
	'str_src_str_tgt'			=> "SELECT COUNT(*) as count FROM %1\$s AS g1 LEFT JOIN %1\$s AS g2 ON g1.lft > g2.lft ".
								   "AND g1.lft < g2.rgt WHERE g1.name='%2\$s' AND g2.name='%3\$s'",
	'int_src_str_tgt'			=> "SELECT COUNT(*) as count FROM %1\$s AS g1 LEFT JOIN %1\$s AS g2 ON g1.lft > g2.lft ".
								   "AND g1.lft < g2.rgt WHERE g1.group_id='%2\$s' AND g2.name='%3\$s'",
	'src_tgt_else'				=> "SELECT COUNT(*) as count FROM %1\$s AS g1 LEFT JOIN %1\$s AS g2 ON g1.lft > g2.lft ".
								   "AND g1.lft < g2.rgt WHERE g1.name=%2\$s AND g2.group_id='%3\$s'"
);


/**********************************************************************************************************/
//	queries  from  bridge/ udb_base.inc.php
/**********************************************************************************************************/
$cpg_db_udb_base_inc = array(
	'auth_set_usergrptbl'			=> "SELECT u.%1\$s AS id, u.%2\$s AS username, u.%3\$s AS password, ug.%4\$s AS group_id ".
									   "FROM %5\$s AS u, %6\$s AS ug  WHERE u.%1\$s =ug.%1\$s AND u.%1\$s ='%7\$s'",
	'auth_notset_usergrptbl'		=> "SELECT u.%1\$s AS id, u.%2\$s AS username, u.%3\$s AS password, ".
									   "u.%4\$s+100 AS group_id  FROM %5\$s AS u INNER JOIN %6\$s AS g ".
									   "ON u.%4\$s=g.%7\$s  WHERE u.%1\$s='%8\$s'",
	'get_user_count'				=> "SELECT count(*) as count FROM %1\$s WHERE 1=1",
	'get_users'						=> "SELECT TOP %14\$s  %1\$s as user_id, %2\$s as user_name, %3\$s as user_email, ".
									   "DATEDIFF(s, '19700101', %4\$s) as user_regdate, DATEDIFF(s, '19700101', %5\$s) as user_lastvisit, ".
									   "%6\$s as user_active, COUNT(pid) as pic_count, ROUND(SUM(total_filesize)/1024, 0) as disk_usage, ".
									   "group_name, group_quota  FROM %7\$s AS u  INNER JOIN %8\$s AS g ON u.%9\$s = g.group_id ".
						               "LEFT JOIN %10\$s AS p ON p.owner_id = u.%1\$s  %11\$s".
									   "AND %1\$s NOT IN (SELECT TOP %13\$s user_id FROM %7\$s AS u  ".
									   "INNER JOIN %8\$s AS g ON u.%8\$s = g.group_id ".
									   "LEFT JOIN %10\$s AS p ON p.owner_id = u.%1\$s ORDER BY %1\$s)".
						               "GROUP BY user_id, user_name, user_email, user_regdate, user_lastvisit, user_active, group_name, ".
									   "group_quota ORDER BY %12\%s ;",
	'get_username'					=> "SELECT %1\$s as user_name FROM %2\$s WHERE %3\$s = '%4\$s'",
	'get_user_id'					=> "SELECT %1\$s AS user_id FROM %2\$s WHERE %3\$s  = '%4\$s'",
	'get_user_data'					=> "SELECT MAX(group_quota) as disk_max, MIN(group_quota) as disk_min, " .
			                           "MAX(can_rate_pictures) as can_rate_pictures, MAX(can_send_ecards) as can_send_ecards, " .
			                           "MAX(upload_form_config) as ufc_max, MIN(upload_form_config) as ufc_min, " .
			                           "MAX(custom_user_upload) as custom_user_upload, MAX(num_file_upload) as num_file_upload, " .
			                           "MAX(num_URI_upload) as num_URI_upload, " .
			                           "MAX(can_post_comments) as can_post_comments, MAX(can_upload_pictures) as can_upload_pictures, " .
			                           "MAX(can_create_albums) as can_create_albums, " .
			                           "MAX(has_admin_access) as has_admin_access, " .
			                           "MIN(pub_upl_need_approval) as pub_upl_need_approval, MIN( priv_upl_need_approval) ".
			                           "as  priv_upl_need_approval FROM {$CONFIG['TABLE_USERGROUPS']} WHERE group_id in ( %1\$s )",
	'get_user_data_group_name'		=> "SELECT group_name FROM  {$CONFIG['TABLE_USERGROUPS']} WHERE group_id= %1\$s",
	'get_user_data_all_usergroups'	=> "SELECT * FROM {$CONFIG['TABLE_USERGROUPS']} WHERE group_id = %1\$s",
	'get_user_info'					=> "SELECT *, %1\$s AS user_name, %2\$s AS user_email, DATEDIFF(s, '19700101', %3\$s) AS user_regdate, ".
									   "%4\$s AS user_location, %5\$s AS user_website  FROM  %6\$s WHERE %7\$s = '%8\$s'",
	'list_users_with_alb'			=> "select p.aid from {$CONFIG['TABLE_ALBUMS']} as p  INNER JOIN {$CONFIG['TABLE_PICTURES']} AS pics ".
									   "ON pics.aid = p.aid where ( category>%1\$s %2\$s) group by category, p.aid;",
	'list_users_can_join_tables'	=> "SELECT TOP %7\$s %1\$s as user_id,%2\$s as user_name,COUNT(DISTINCT a.aid) as alb_count,".
									   "COUNT(DISTINCT pid) as pic_count,MAX(pid) as thumb_pid, MAX(galleryicon) as gallery_pid ".
									   "FROM {$CONFIG['TABLE_ALBUMS']} AS a ".
									   "INNER JOIN %3\$s as u on u.%1\$s = a.category - %4\$s ".
									   "INNER JOIN {$CONFIG['TABLE_PICTURES']} AS p ON p.aid = a.aid ".
									   "WHERE ((approved IS NULL or approved='YES') AND category > %4\$s ) %5\$s ".
									   "AND %1\$s NOT IN (SELECT TOP %6\$s %1\$s FROM {$CONFIG['TABLE_ALBUMS']} AS a ".
									   "INNER JOIN %3\$s as u on u.%1\$s = a.category - %4\$s  ".
									   "INNER JOIN {$CONFIG['TABLE_PICTURES']} AS p ON p.aid = a.aid  ".
									   "WHERE ((approved IS NULL or approved='YES') AND category > %4\$s ) %5\$s  ".
									   "GROUP BY user_id, user_name, category  ORDER BY category )".
									   "GROUP BY user_id, user_name, category  ORDER BY category ",
	'list_users_cannot_join_tables'	=> "SELECT  TOP %4\$s category - 10000 as user_id ".
									   "FROM {$CONFIG['TABLE_ALBUMS']} AS a ".
									   "INNER JOIN {$CONFIG['TABLE_PICTURES']} AS p ON p.aid = a.aid ".
									   "WHERE ((approved IS NULL or approved='YES') AND category > %1\$s) %2\$s ".
									   "AND a.category NOT IN (SELECT category FROM {$CONFIG['TABLE_ALBUMS']} GROUP BY category)".
									   "GROUP BY category",
	'list_users_mappings'			=> "SELECT %1\$s AS user_id, %2\$s AS user_name ".
									   "FROM %3\$s WHERE %1\$s IN (%4\$s)",
	'list_users_main_query'			=> "SELECT TOP %4\$s owner_id as user_id, COUNT(DISTINCT a.aid) as alb_count, COUNT(DISTINCT pid) ".
									   "as pic_count, MAX(pid) as thumb_pid, MAX(galleryicon) as gallery_pid FROM {$CONFIG['TABLE_ALBUMS']} ".
									   "AS a INNER JOIN {$CONFIG['TABLE_PICTURES']} AS p ON p.aid = a.aid ".
									   "WHERE ((approved IS NULL or approved='YES') AND category > %1\$s) %2\$s ".
									   "AND a.category NOT IN (SELECT TOP %3\$s category FROM {$CONFIG['TABLE_ALBUMS']} GROUP BY category)".
									   "GROUP BY owner_id, category  ORDER BY category",
	'sync_use_post_based_grp'		=> "SELECT * FROM %1\$s WHERE %2\$s <> ''",
	'sync_not_use_post_based_grp'	=> "SELECT group_id, group_name FROM {$CONFIG['TABLE_USERGROUPS']} WHERE 1=1",
	'sync_delete_usergroups'		=> "DELETE FROM {$CONFIG['TABLE_USERGROUPS']} WHERE group_id = '%1\$s'",
	'sync_insert_usergroups'		=> "INSERT INTO {$CONFIG['TABLE_USERGROUPS']} (group_id, group_name, has_admin_access) ".
									   "VALUES ('%1\$s', '%2\$s', '%3\$s')",
	'sync_update_usergroups'		=> "UPDATE {$CONFIG['TABLE_USERGROUPS']} SET group_name = '%1\$s' ".
									   "WHERE group_id = '%2\$s'",
	'sync_fix_admin_grp'			=> "UPDATE {$CONFIG['TABLE_USERGROUPS']} SET has_admin_access = '1' WHERE group_id = '1'",
	'admin_alb_can_join_tbl'		=> "SELECT aid, '(' + %1\$s + ') ' + a.title  AS title   FROM {$CONFIG['TABLE_ALBUMS']} ".
										"AS a  INNER JOIN %2\$s AS u  ON category = ( %3\$s + %4\$s)  ORDER BY title",
	'admin_alb_cannot_join_tbl'		=> "SELECT aid, CASE WHEN category > %1\$s THEN '* ' + title ELSE ' ' + title END ".
									   "AS title  FROM {$CONFIG['TABLE_ALBUMS']}  ORDER BY title",
	'batch_add_can_join_tbl'		=> "SELECT aid, '(' + %1\$s + ') ' + a.title  AS title  FROM {$CONFIG['TABLE_ALBUMS']} AS a  ".
									   "INNER JOIN %2\$s AS u  ON category = (%3\$s + %4\$s) ".
									   "AND %5\$s = %4\$s ORDER BY title",
	'batch_add_cannot_join_tbl'		=> "SELECT aid, CASE WHEN category > %1\$s THEN '* ' + title ELSE ' ' + title END  AS title ".
									   "FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = '(%1\$s + %2\$s)' ORDER BY title",
	'user_alb_can_join_tbl'			=> "SELECT aid, CASE WHEN %1\$s IS NOT NULL  THEN '(' + %1\$s + ') ' + a.title ".
									   "ELSE ' - ' + a.title END  AS title  FROM {$CONFIG['TABLE_ALBUMS']} AS a ".
									   "INNER JOIN %2\$s AS u  ON category = ( %3\$s + %4\$s ) ORDER BY a.title",
	'public_alb_can_join_tbl'		=> "SELECT aid, title, name FROM {$CONFIG['TABLE_ALBUMS']} LEFT JOIN {$CONFIG['TABLE_CATEGORIES']} ".
									   "ON cid = category WHERE category < %1\$s ORDER BY title",
	'public_alb_cannot_join_tbl'	=> "SELECT aid, title, category FROM {$CONFIG['TABLE_ALBUMS']} WHERE category < %1\$s ORDER BY title",
	'get_cat_name'					=> "SELECT name, parent FROM " . $CONFIG['TABLE_CATEGORIES'] . " WHERE cid='%1\$s'",
	'user_alb_cannot_join_tbl'		=> "SELECT aid, title, category FROM {$CONFIG['TABLE_ALBUMS']} WHERE category >= %1\$s ORDER BY aid",
	'user_alb_ids_and_names'		=> "SELECT (%1\$s + %2\$s) AS id, '(' + %3\$s + ') '  as name ".
										"FROM %4\$s ORDER BY name ASC",
	'get_login_data'				=> "SELECT %1\$s AS user_id, %2\$s AS user_name FROM %3\$s".
									   " WHERE %2\$s = '%4\$s' AND  %5\$s = '%6\$s'"
);



#########################################
//	include files
#########################################


/**********************************************************************************************************/
//	queries  from  include/ crop.inc.php
/**********************************************************************************************************/
$cpg_db_crop_inc = array(
	'get_pic_to_crop'		=> "SELECT * FROM {$CONFIG['TABLE_PICTURES']} WHERE pid = '%1\$s'"
);


/**********************************************************************************************************/
//	queries  from  include/ exif_php.inc.php
/**********************************************************************************************************/
$cpg_db_exif_php_inc = array(
	'check_exif_data'		=> "SELECT * FROM {$CONFIG['TABLE_EXIF']} WHERE filename = '%1\$s'",
	'add_exif_data'			=> "INSERT INTO {$CONFIG['TABLE_EXIF']} VALUES ('%1\$s', '%2\$s')"
);


/**********************************************************************************************************/
//	queries  from  include/ functions.inc.php
/**********************************************************************************************************/
$cpg_db_functions_inc = array(
	'alb_set_data_USER_GAL_CAT'		=> "SELECT aid FROM {$CONFIG['TABLE_ALBUMS']} as a WHERE category>= %1\$s",
	'alb_set_data_not_USER_GAL_CAT'	=> "SELECT aid FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = %1\$s",
	'meta_alb_set_data'				=> "SELECT cid FROM {$CONFIG['TABLE_CATEGORIES']} WHERE parent = '%1\$s'",
	'get_meta_album_set'			=> "SELECT aid FROM {$CONFIG['TABLE_ALBUMS']}",
	'get_private_alb_set_pwrd'		=> "SELECT aid, alb_password FROM ".$CONFIG['TABLE_ALBUMS']." WHERE aid IN (%1\$s)",
	'get_private_alb_set'			=> "SELECT aid FROM {$CONFIG['TABLE_ALBUMS']} WHERE visibility != '0' ".
									   "AND visibility !='%1\$s' AND visibility NOT IN %2\$s  %3\$s",
	'count_get_pic_data'			=> "SELECT COUNT(pid) as count from {$CONFIG['TABLE_PICTURES']} ".
									   "WHERE ((aid='%1\$s' %2\$s ) %3\$s) %4\$s %5\$s",
	'get_pic_data'					=> "SELECT %10\$s %1\$s from {$CONFIG['TABLE_PICTURES']} WHERE ((aid='%2\$s' %3\$s ) %4\$s) ".
									   "%5\$s %6\$s AND pid NOT IN (SELECT %9\$s pid from {$CONFIG['TABLE_PICTURES']} ORDER BY %7\$s) ORDER BY %7\$s",
	'count_get_pic_data_lastcom'	=> "SELECT COUNT({$CONFIG['TABLE_PICTURES']}.pid) as count from {$CONFIG['TABLE_COMMENTS']}, ".
									   "{$CONFIG['TABLE_PICTURES']}  WHERE {$CONFIG['TABLE_PICTURES']}.approved = 'YES' ".
									   "AND {$CONFIG['TABLE_COMMENTS']}.pid = {$CONFIG['TABLE_PICTURES']}.pid ".
									   "AND {$CONFIG['TABLE_COMMENTS']}.approval = 'YES' %1\$s %2\$s)",
	'get_pic_data_lastcom'			=> "SELECT %6\$s %1\$s FROM {$CONFIG['TABLE_COMMENTS']} as c, {$CONFIG['TABLE_PICTURES']} as p ".
									   " WHERE approved = 'YES' AND c.pid = p.pid AND c.approval = 'YES' %2\$s %3\$s) ".
									   "AND p.pid NOT IN (SELECT %5\$s p.pid FROM {$CONFIG['TABLE_COMMENTS']} as c, ".
									   "{$CONFIG['TABLE_PICTURES']} as p  WHERE approved = 'YES' AND c.pid = p.pid AND c.approval = 'YES' %2\$s %3\$s)".
									   " ORDER by msg_id DESC) ORDER by msg_id DESC", 
	'count_get_pic_data_lastcomby'	=> "SELECT COUNT({$CONFIG['TABLE_PICTURES']}.pid) as count from {$CONFIG['TABLE_COMMENTS']}, ".
									   "{$CONFIG['TABLE_PICTURES']}  WHERE approved = 'YES' AND author_id = '%1\$s' ".
									   "AND {$CONFIG['TABLE_COMMENTS']}.pid = {$CONFIG['TABLE_PICTURES']}.pid %2\$s",
	'get_pic_data_lastcomby'		=> "SELECT  %6\$s %1\$s FROM {$CONFIG['TABLE_COMMENTS']} as c, {$CONFIG['TABLE_PICTURES']} ". 
									   "as p WHERE approved = 'YES' AND author_id = '%2\$s' AND c.pid = p.pid %3\$s ".
									   "AND p.pid NOT IN (SELECT %5\$s p.pid FROM {$CONFIG['TABLE_COMMENTS']} as c, ".
									   "{$CONFIG['TABLE_PICTURES']} as p WHERE approved = 'YES' AND author_id = '%2\$s' ".
									   "AND c.pid = p.pid %3\$s ORDER by msg_id DESC) ORDER by msg_id DESC ",
	'count_get_pic_data_lastup'		=> "SELECT COUNT(pid) as count from {$CONFIG['TABLE_PICTURES']} WHERE approved = 'YES' %1\$s",
	'get_pic_data_lastup'			=> "SELECT %5\$s %1\$s FROM {$CONFIG['TABLE_PICTURES']} WHERE approved = 'YES' %2\$s ".
									   "AND pid NOT IN (SELECT %4\$s pid from {$CONFIG['TABLE_PICTURES']} WHERE ".
									   "approved = 'YES' %2\$s ORDER BY pid DESC) ORDER BY pid DESC ",
	'count_get_pic_data_lastupby'	=> "SELECT COUNT(pid) as count from {$CONFIG['TABLE_PICTURES']} WHERE approved = 'YES' ".
									   "AND owner_id = '%1\$s' %2\$s",
	'get_pic_data_lastupby'			=> "SELECT %6\$s  %1\$s FROM {$CONFIG['TABLE_PICTURES']} WHERE approved = 'YES' ".
									   "AND owner_id = '%2\$s' %3\$s  AND pid NOT IN (SELECT %5\$s pid ".
									   "FROM {$CONFIG['TABLE_PICTURES']} WHERE approved = 'YES' AND owner_id = '%2\$s' %3\$s".
									   "ORDER BY pid DESC) ORDER BY pid DESC ",
	'count_get_pic_data_topn'		=> "SELECT COUNT(pid) as count from {$CONFIG['TABLE_PICTURES']} WHERE approved = 'YES' AND hits > 0 ".
									   " %1\$s %2\$s",
	'get_pic_data_topn'				=> "SELECT  %6\$s  %1\$s FROM {$CONFIG['TABLE_PICTURES']} WHERE approved = 'YES'AND hits > 0 ".
									   "%2\$s %3\$s  AND pid NOT IN (SELECT %5\$s pid FROM {$CONFIG['TABLE_PICTURES']} WHERE ".
									   "approved = 'YES'AND hits > 0 %2\$s %3\$s ORDER BY hits DESC, filename )ORDER BY hits DESC, filename ",
	'count_get_pic_data_toprated'	=> "SELECT COUNT(pid) as count from {$CONFIG['TABLE_PICTURES']} WHERE approved = 'YES' ".
									   "AND votes >= '%1\$s' %2\$s",
	'get_pic_data_toprated'			=> "SELECT  %6\$s  %1\$s FROM {$CONFIG['TABLE_PICTURES']} WHERE approved = 'YES' ".
									   "AND votes >= '%2\$s'  %3\$s AND pid NOT IN (SELECT %5\$s pid FROM {$CONFIG['TABLE_PICTURES']} ".
									   "WHERE approved = 'YES' AND votes >= '%2\$s'  %3\$s ORDER BY pic_rating DESC, votes DESC, pid DESC)".
									   "ORDER BY pic_rating DESC, votes DESC, pid DESC ",
	'count_get_pic_data_lasthits'	=> "SELECT COUNT(pid) as count from {$CONFIG['TABLE_PICTURES']} WHERE approved = 'YES' and hits > 0 %1\$s",
	'get_pic_data_lasthits'			=> "SELECT %5\$s %1\$s FROM {$CONFIG['TABLE_PICTURES']} WHERE approved = 'YES' and hits > 0 %2\$s ".
									   "AND pid NOT IN (SELECT %4\$s pid FROM {$CONFIG['TABLE_PICTURES']} WHERE approved = 'YES' ".
									   "and hits > 0 %2\$s ORDER BY mtime DESC) ORDER BY mtime DESC ",
	'count_get_pic_data_random'		=> "SELECT COUNT(pid) as count from {$CONFIG['TABLE_PICTURES']} WHERE approved = 'YES' %1\$s",
	'get_pic_data_random'			=> "SELECT %4\$s %1\$s FROM {$CONFIG['TABLE_PICTURES']} WHERE approved = 'YES' %2\$s ".
									   "ORDER BY NEWID()",
	'count_get_pic_data_lastalb'	=> "SELECT count({$CONFIG['TABLE_ALBUMS']}.aid) as count FROM {$CONFIG['TABLE_PICTURES']},".
									   "{$CONFIG['TABLE_ALBUMS']} WHERE {$CONFIG['TABLE_PICTURES']}.aid = {$CONFIG['TABLE_ALBUMS']}.aid ".
									   "AND approved = 'YES' %1\$s GROUP  BY {$CONFIG['TABLE_PICTURES']}.aid",
	'get_pic_data_lastalb'			=> "SELECT %4\$s a.title AS title,a.aid AS aid, MAX(p.ctime) AS max_ctime".
									   "FROM {$CONFIG['TABLE_PICTURES']} AS p, {$CONFIG['TABLE_ALBUMS']} AS a".
									   "WHERE p.aid = a.aid AND approved = 'YES' %1\$s AND p.ctime NOT IN (SELECT %3\$s MAX(p.ctime) ".
									   "AS max_ctime FROM {$CONFIG['TABLE_PICTURES']} AS p, {$CONFIG['TABLE_ALBUMS']} AS a".
									   "WHERE p.aid = a.aid AND approved = 'YES' %1\$s GROUP BY p.aid ORDER BY  max_ctime DESC)".
									   "GROUP BY p.aid, a.aid, a.title ORDER BY  max_ctime DESC ",
	'count_get_pic_data_favpics'	=> "SELECT COUNT(pid) as count from {$CONFIG['TABLE_PICTURES']} WHERE approved = 'YES' ".
									   "AND pid IN (%1\$s) %2\$s",
	'get_pic_data_favpics'			=> "SELECT %6\$s  %1\$s FROM {$CONFIG['TABLE_PICTURES']} WHERE approved = 'YES' ".
									   "AND pid IN (%2\$s) %3\$s AND pid NOT IN (SELECT %5\$s pid FROM {$CONFIG['TABLE_PICTURES']} ".
									   "WHERE approved = 'YES' AND pid IN (%2\$s) %3\$s)",
	'count_get_pic_data_datebrowse'	=> "DECLARE @UNIX_TIMESTAMP int".
									   "SELECT @UNIX_TIMESTAMP = ctime FROM {$CONFIG['TABLE_PICTURES']}".
									   "SELECT COUNT(pid) as count from {$CONFIG['TABLE_PICTURES']} WHERE approved = 'YES' ".
									   "AND CONVERT(VARCHAR(10), DATEADD(s, @UNIX_TIMESTAMP, '01/01/1970'), 105) = '%1\$s' %2\$s",
	'get_pic_data_datebrowse'		=> "DECLARE @UNIX_TIMESTAMP int".
									   "SELECT @UNIX_TIMESTAMP = ctime FROM {$CONFIG['TABLE_PICTURES']}".
									   "SELECT %6\$s  %1\$s FROM {$CONFIG['TABLE_PICTURES']} WHERE approved = 'YES' ".
									   "AND CONVERT(VARCHAR(10), DATEADD(s, @UNIX_TIMESTAMP, '01/01/1970'), 105) = '%2\$s'  %3\$s ",
									   "AND pid NOT IN (SELECT %5\$s pid FROM {$CONFIG['TABLE_PICTURES']} WHERE approved = 'YES'".
									   "AND CONVERT(VARCHAR(10), DATEADD(s, @UNIX_TIMESTAMP, '01/01/1970'), 105) = '%2\$s'  %3\$s ",
	'get_album_name'				=> "SELECT title,keyword from {$CONFIG['TABLE_ALBUMS']} WHERE aid='%1\$s'",
	'get_pending_approvals'			=> "SELECT COUNT(*) as count FROM {$CONFIG['TABLE_PICTURES']} WHERE approved = 'NO'",
	'count_pic_comments'			=> "SELECT count(msg_id) as count from {$CONFIG['TABLE_COMMENTS']} where pid=%1\$s and msg_id!=%2\$s",
	'add_hit_update_pics'			=> "UPDATE {$CONFIG['TABLE_PICTURES']} SET hits=hits+1, lasthit_ip='%1\$s',".
									   " mtime=CURRENT_TIMESTAMP WHERE pid='%2\$s'",
	'add_hit_record'				=> "INSERT INTO {$CONFIG['TABLE_HIT_STATS']}  SET  pid = %1\$s, ".
									   "search_phrase = '%2\$s',  Ip   = '%3\$s',  sdate = '%4\$s',  referer='%5\$s', ".
									   " browser = '%6\$s',  os = '%7\$s'",
	'add_album_hit'					=> "UPDATE {$CONFIG['TABLE_ALBUMS']} SET alb_hits=alb_hits+1 WHERE aid='%1\$s'",
	'breadcrumb_cat_not_zero'		=> "SELECT name, parent FROM {$CONFIG['TABLE_CATEGORIES']} WHERE cid = '%1\$s'",
	'breadcrumb_parent_not_zero'	=> "SELECT cid, name, parent FROM {$CONFIG['TABLE_CATEGORIES']} WHERE cid = '%1\$s'",
	'get_dbversion'					=> "SELECT  SERVERPROPERTY('productversion') as version",
	'get_bridge_db_values'			=> "SELECT * FROM {$CONFIG['TABLE_BRIDGE']}",
	'reset_detail_hits'				=> "DELETE FROM {$CONFIG['TABLE_HIT_STATS']} WHERE %1\$s",		
	'reset_detail_votes'			=> "DELETE FROM {$CONFIG['TABLE_VOTE_STATS']} WHERE %1\$s",	
	'store_temp_message'			=> "INSERT INTO {$CONFIG['TABLE_TEMP_MESSAGES']}  SET   message_id = '%1\$s', ".
									   "user_id = '%2\$s', time   = '%3\$s',  message = '%4\$s'",
	'read_temp_message'				=> "SELECT TOP 1 message AS message FROM {$CONFIG['TABLE_TEMP_MESSAGES']} ".
									   "WHERE message_id = '%1\$s'",
	'delete_temp_message'			=> "DELETE FROM {$CONFIG['TABLE_TEMP_MESSAGES']} WHERE message_id = '%1\$s'",
	'clean_temp_message'			=> "DELETE FROM {$CONFIG['TABLE_TEMP_MESSAGES']} WHERE time < '%1\$s'",
	'check_alb_available'			=> "SELECT aid FROM {$CONFIG['TABLE_ALBUMS']} WHERE owner = %1\$s  LIMIT 1",
	'get_available_alb'				=> "SELECT DISTINCT category FROM {$CONFIG['TABLE_ALBUMS']} WHERE owner = '%1\$s' ".
									   "AND aid='%2\$s'",
	'check_edit_allowed'			=> "SELECT DISTINCT aid FROM {$CONFIG['TABLE_ALBUMS']} AS alb ".
									   "INNER JOIN {$CONFIG['TABLE_CATMAP']} AS catm ON alb.category=catm.cid ".
									   "WHERE alb.owner = '%1\$s' AND alb.aid='%2\$s' AND catm.group_id='%3\$s'"
);


/******************************************************/
//queries from /include/init.inc.php
/***********************************************************/
$cpg_db_init_inc = array(
	'get_db_configuration'		=> "SELECT * FROM {$CONFIG['TABLE_CONFIG']}",
	'select_distinct_aid'		=> "SELECT DISTINCT(aid) FROM {$CONFIG['TABLE_ALBUMS']} WHERE moderator_group IN %1\$s",
	'get_user_favpics'			=> "SELECT user_favpics FROM {$CONFIG['TABLE_FAVPICS']} WHERE user_id = ".USER_ID,
	'delete_expired_ban'		=> "DELETE FROM {$CONFIG['TABLE_BANNED']} WHERE expiry < '%1\$s'",
	'get_all_banned'			=> "SELECT * FROM {$CONFIG['TABLE_BANNED']} WHERE (ip_addr LIKE '%1\$s' OR ip_addr LIKE '%2\$s' OR user_id='%3\$s') AND brute_force=0"
);


/**********************************************************************************************************/
//	queries  from  include/ keyword.inc.php
/**********************************************************************************************************/
$cpg_db_keyword_inc = array(
	'get_pic_keywords'			=> "select keywords FROM {$CONFIG['TABLE_PICTURES']} WHERE keywords <> '' %1\$s"
);


/**********************************************************************************************************/
//	queries  from  include/ mailer.inc.php
/**********************************************************************************************************/
$cpg_db_mailer_inc = array(
	'get_admin_email'		=> "SELECT user_email FROM {$CONFIG['TABLE_USERS']} WHERE user_group = 1"
);


/**********************************************************************************************************/
//	queries  from  include/ media.functions.inc.php
/**********************************************************************************************************/
$cpg_db_media_functions_inc = array(
	'get_filetypes'			=> 'SELECT extension, mime, content, player FROM '.$CONFIG['TABLE_FILETYPES']
);


/**********************************************************************************************************/
//	queries  from  include/ picmgmt.inc.php
/**********************************************************************************************************/
$cpg_db_picmgmt_inc = array(
	'test_disk_quota_exceeded'	=> "SELECT sum(total_filesize) as sum_filesize FROM {$CONFIG['TABLE_PICTURES']}, {$CONFIG['TABLE_ALBUMS']} ".
								   "WHERE  {$CONFIG['TABLE_PICTURES']}.aid = {$CONFIG['TABLE_ALBUMS']}.aid AND category = '%1\$s'",
	'insert_current_pic_data'	=> "INSERT INTO {$CONFIG['TABLE_PICTURES']} (aid, filepath, filename, filesize, total_filesize, ".
								   "pwidth, pheight, ctime, owner_id, owner_name, title, caption, keywords, approved, ".
								   "user1, user2, user3, user4, pic_raw_ip, pic_hdr_ip, position) ".
								   "VALUES ('%1\$s', '%2\$s', '%3\$s', '%4\$s', '%5\$s', '%6\$s', '%7\$s', '%8\$s', ".
								   "'%9\$s', '%10\$s','%11\$s', '%12\$s', '%13\$s', '%14\$s', '%15\$s', '%16\$s', ".
								   "'%17\$s', '%18\$s', '%19\$s', '%20\$s', '%21\$s')"
);


/**********************************************************************************************************/
//	queries  from  include/ plugin_api.inc.php
/**********************************************************************************************************/
$cpg_db_plugin_api_inc = array(
	'load_plugins'			=> 'select * from '.$CONFIG['TABLE_PLUGINS'].' order by priority asc;',
	'get_installed_plugin'	=> 'select plugin_id from '.$CONFIG['TABLE_PLUGINS'].' where path="%1\$s";',
	'get_plugin_priority'	=> 'select priority from '.$CONFIG['TABLE_PLUGINS'].' order by priority desc limit 1;',
	'install_plugin'		=> 'insert into '.$CONFIG['TABLE_PLUGINS'].' (name, path,priority)  '.
							   'values ("%1\$s","%2\$s",%3\$s);',
	'plugin_delete'			=> 'delete from '.$CONFIG['TABLE_PLUGINS'].' where plugin_id=%1\$s;',
	'plugin_update'			=> 'update '.$CONFIG['TABLE_PLUGINS'].' set priority=priority-1 where priority> %1\$s;'
);


/**********************************************************************************************************/
//	queries  from  include/ search.inc.php	
/**********************************************************************************************************/
$cpg_db_search_inc = array(
	'alb_title_album_query'		=> "SELECT * FROM {$CONFIG['TABLE_ALBUMS']} WHERE (title %1\$s)",
	'alb_title_thumb_query'		=> "SELECT filename, url_prefix, pwidth, pheight FROM {$CONFIG['TABLE_PICTURES']} ". 
								   "WHERE (aid = '%1\$s') ORDER BY pid DESC",
	'cat_title_category_query'	=> "SELECT * FROM {$CONFIG['TABLE_CATEGORIES']} WHERE (name %1\$s)",
	'cat_title_album_q'			=> "SELECT TOP 1 * FROM {$CONFIG['TABLE_ALBUMS']} WHERE (category = '%1\$s') ORDER BY aid DESC",
	'cat_title_thumb_query'		=> "SELECT filename, url_prefix, pwidth, pheight FROM {$CONFIG['TABLE_PICTURES']} ".
								   "WHERE (aid = '%1\$s') ORDER BY pid DESC",
	'temp_search_string'		=> "SELECT COUNT(*) as count FROM {$CONFIG['TABLE_PICTURES']} WHERE %1\$s",
	'final_search_string'		=> "SELECT %5\$s * FROM {$CONFIG['TABLE_PICTURES']} WHERE %1\$s ".
								   "AND pid NOT IN (SELECT %4\$s pid FROM {$CONFIG['TABLE_PICTURES']} WHERE %1\$s ORDER BY %2\$s)".
								   "ORDER BY %2\$s "
);


/**********************************************************************************************************/
//	queries  from  include/ stats.inc.php
/**********************************************************************************************************/
$cpg_db_stats_inc = array(
	'individual_stats_by_os'		=> "SELECT COUNT(*) as count FROM %1\$s WHERE os = '%2\$s' %3\$s",
	'individual_stats_by_browser'	=> "SELECT COUNT(*) as count FROM %1\$s WHERE browser = '%2\$s' %3\$s" 
);


/**********************************************************************************************************/
//	queries  from  include/ themes.inc.php
/**********************************************************************************************************/
$cpg_db_themes_inc = array(
	'check_upload_permission'	=> "SELECT aid, title FROM {$CONFIG['TABLE_ALBUMS']} WHERE category='%1\$s'   ORDER BY title",	//AND aid = '%2\$s'
	'upload_not_allowed'		=> "SELECT aid, title FROM {$CONFIG['TABLE_ALBUMS']} WHERE category < %1\$s AND uploads='YES' ".
								   "AND (visibility = '0' OR visibility IN %2\$s)    ORDER BY title",	// AND aid = '%3\$s'
	'html_rating_box'			=> "SELECT * FROM {$CONFIG['TABLE_VOTES']} WHERE pic_id=%1\$s AND user_md5_id='%2\$s'",
	'html_comments'				=> "SELECT msg_id, msg_author, msg_body, DATEDIFF(s, '19700101', msg_date) AS msg_date, author_id, ".
								   "author_md5_id, msg_raw_ip, msg_hdr_ip, pid, approval FROM {$CONFIG['TABLE_COMMENTS']} ".
								   "WHERE pid='%1\$s' ORDER BY msg_id %2\$s",
	'display_fullsize_pic'		=> "SELECT *  FROM {$CONFIG['TABLE_PICTURES']} WHERE pid='%1\$s' %2\$s"

);

?>