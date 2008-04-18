<?php
if (!defined('IN_COPPERMINE')) { die('Not in Coppermine...');}
########################### DB  Note #################################
//	The array names in this are given according to the files used.
//	There are many  errors in this files which will be corrected with the changes in the related files.
##############################################################
/******************************************************/
//queries from index.php
/***********************************************************/
if (defined('INDEX_PHP')) $cpg_db_index_php = array(
	'subcat_categories'				=> "SELECT cid, name, description, thumb FROM {$CONFIG['TABLE_CATEGORIES']} ".
									   "WHERE parent = '%1\$s'  ORDER BY %2\$s",
	'subcat_alb_filter'				=> "SELECT aid FROM {$CONFIG['TABLE_ALBUMS']} as a WHERE category>= %1\$s %2\$s",
	'subcat_user_gal_cat'			=> "SELECT count(*) as count  FROM {$CONFIG['TABLE_PICTURES']} as p, {$CONFIG['TABLE_ALBUMS']} as a ".
									   "WHERE p.aid = a.aid AND approved='YES' AND category >= %1\$s %2\$s ",
	'subcat_unaliased_alb_filter'	=> "SELECT aid FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = '%1\$s' %2\$s",
	'subcat_not_user_gal_cat'		=> "SELECT count(*) as count  FROM {$CONFIG['TABLE_PICTURES']} as p, {$CONFIG['TABLE_ALBUMS']} as a ".
									   "WHERE p.aid = a.aid AND approved='YES' AND category = '%1\$s' %2\$s",
	'subcat_pic'					=> "SELECT filepath, filename, url_prefix, pwidth, pheight FROM {$CONFIG['TABLE_PICTURES']} ".
									   "WHERE pid='%1\$s' %2\$s",
	'cat_list_user_gal_cat'			=> "SELECT aid FROM {$CONFIG['TABLE_ALBUMS']} as a WHERE category >= %1\$s %2\$s",
	'cat_list_not_user_gal_cat'		=> "SELECT aid FROM {$CONFIG['TABLE_ALBUMS']} as a WHERE category = '%1\$s' %2\$s",
	'cat_list_count_alb'			=> "SELECT count(aid) as count  FROM {$CONFIG['TABLE_ALBUMS']} as a WHERE 1 %1\$s",
	'cat_list_count_pic_alb'		=> "SELECT count(pid) as count  FROM {$CONFIG['TABLE_PICTURES']} as p LEFT JOIN " . $CONFIG['TABLE_ALBUMS'] . 
									   " as a ON a.aid=p.aid WHERE 1 %1\$s AND approved='YES'",
	'cat_list_count_comm_pic'		=> "SELECT count(msg_id) as count FROM {$CONFIG['TABLE_COMMENTS']} as c LEFT JOIN " . $CONFIG['TABLE_PICTURES'] .
									   " as p ON c.pid=p.pid  LEFT JOIN " . $CONFIG['TABLE_ALBUMS'] . " as a  ON a.aid=p.aid ".
									   " WHERE 1  %1\$s AND approval='YES'",
	'cat_list_count_cat'			=> "SELECT count(cid) as count  FROM {$CONFIG['TABLE_CATEGORIES']} WHERE 1",
	'cat_list_sum_pic_alb'			=> "SELECT sum(hits) as sum_count FROM {$CONFIG['TABLE_PICTURES']} as p LEFT JOIN " . $CONFIG['TABLE_ALBUMS'] . 
									   " as a  ON p.aid=a.aid  WHERE 1 %1\$s",
	'cat_list_current_alb_set'		=> "SELECT count(aid) as count FROM {$CONFIG['TABLE_ALBUMS']}  WHERE 1 %1\$s",
	'cat_list_count_pic'			=> "SELECT count(pid) as count FROM {$CONFIG['TABLE_PICTURES']} WHERE 1 %1\$s",
	'cat_list_sum_pic'				=> "SELECT sum(hits) as sum_count FROM {$CONFIG['TABLE_PICTURES']} WHERE 1 %1\$s AND approved='YES'",
	'list_user_pic'					=> "SELECT filepath, filename, url_prefix, pwidth, pheight  FROM {$CONFIG['TABLE_PICTURES']} " . 
									   "WHERE pid='%1\$s' AND approved='YES'",
	'list_albums_alb_owner'			=> "SELECT count(aid) as count FROM {$CONFIG['TABLE_ALBUMS']} as a WHERE owner = '%1\$s' %2\$s",
	'list_albums_alb_cats'			=> "SELECT count(aid) as count FROM {$CONFIG['TABLE_ALBUMS']} as a WHERE category = '%1\$s' %2\$s",
	'list_albums_alb_pic_owner'		=> "SELECT a.aid, a.title, a.description, a.thumb, category, visibility, filepath, filename, url_prefix, pwidth, pheight " . 
									   "FROM " . $CONFIG['TABLE_ALBUMS'] . " as a  'LEFT JOIN " . $CONFIG['TABLE_PICTURES'] . " as p " . 
									   "ON a.thumb=p.pid  WHERE a.owner= %1\$s %2\$s  ORDER BY a.category DESC , a.pos LIMIT %3\$s, %4\$s",	###	cpgdb_AL
	'list_albums_concat'			=> "SELECT CONCAT(a.title, ' %1\$s <i>', c.name, '</i>') as concat FROM " . $CONFIG['TABLE_ALBUMS'] . 
									   " AS a LEFT JOIN ". $CONFIG['TABLE_CATEGORIES'] ." AS c ON a.category=c.cid ".
									   "WHERE a.owner = %2\$s  ORDER BY a.category DESC , a.pos  LIMIT  %3\$s, %4\$s",	###	cpgdb_AL
	'list_albums_alb_pic_cat'		=> "SELECT a.aid, a.title, a.description, a.thumb, category, visibility, filepath, filename, ".
									   "url_prefix, pwidth, pheight  FROM " . $CONFIG['TABLE_ALBUMS'] . 
									   " as a  LEFT JOIN " . $CONFIG['TABLE_PICTURES'] . " as p  ON a.thumb=p.pid ".
									   " WHERE a.category= %1\$s %2\$s  ORDER BY a.pos LIMIT %3\$s, %4\$s",	###	cpgdb_AL
	'alb_stats_kwrd'				=> "SELECT a.aid, count( p.pid )  AS pic_count, max( p.pid )  AS last_pid, max( p.ctime ) ".
									   " AS last_upload, a.keyword, a.alb_hits  FROM {$CONFIG['TABLE_ALBUMS']} AS a ".
									   "LEFT JOIN {$CONFIG['TABLE_PICTURES']} AS p ON a.aid = p.aid AND p.approved =  'YES' ".
									   "WHERE a.aid IN %1\$s" . "GROUP BY a.aid",
	'list_albums_get_pic_kwrd'		=> "SELECT count(pid) AS link_pic_count, max(pid) AS link_last_pid FROM {$CONFIG['TABLE_PICTURES']} ".
									   "WHERE aid != '%1\$s' AND keywords LIKE '%2\$s'  AND approved = 'YES'",
	'random_pictures'				=> "SELECT filepath, filename, url_prefix, pwidth, pheight  FROM {$CONFIG['TABLE_PICTURES']} ".
									   "WHERE aid = '%1\$s' ORDER BY RAND() LIMIT 0,1",
	'get_pictures'					=> "SELECT filepath, filename, url_prefix, pwidth, pheight  FROM {$CONFIG['TABLE_PICTURES']} ".
									   "WHERE pid='%1\$s'",
	'album_adm_menu_get_alb'		=> "SELECT * FROM {$CONFIG['TABLE_ALBUMS']} WHERE aid='%1\$s' AND owner='%2\$s'",
	'album_adm_menu_dist_alb_cat'	=> "SELECT DISTINCT alb.category FROM {$CONFIG['TABLE_ALBUMS']} AS alb ".
									   "INNER JOIN {$CONFIG['TABLE_CATMAP']} AS catm ON alb.category=catm.cid ".
									   "WHERE alb.owner = '%1\$s' AND alb.aid='%2\$s' AND catm.group_id='%3\$s'",
	'list_cat_alb_count_alb'		=> "SELECT count(aid) as count FROM {$CONFIG['TABLE_ALBUMS']} as a WHERE category = '%1\$s' %2\$s",
	'list_cat_alb_join_pic'			=> "SELECT a.aid, a.title, a.description, a.thumb, visibility, filepath, filename, url_prefix, pwidth, pheight ".
									   "FROM " . $CONFIG['TABLE_ALBUMS'] . " as a  LEFT JOIN " . $CONFIG['TABLE_PICTURES'] . " as p  ON a.thumb=p.pid " . 
									   "WHERE category=%1\$s %2\$s ORDER BY a.pos LIMIT %3\$s, %4\$s", ### cpgdb_AL
	//'list_cat_alb_count_alb_pic'	=> "SELECT a.aid, count( p.pid ) AS pic_count, max( p.pid )  AS last_pid, max( p.ctime ) ".
									   //" AS last_upload, a.keyword, a.alb_hits   FROM {$CONFIG['TABLE_ALBUMS']} AS a ".
									   //"LEFT JOIN {$CONFIG['TABLE_PICTURES']} AS p ON a.aid = p.aid AND p.approved =  'YES' ". 
									   //"WHERE a.aid IN %1\$s" . "GROUP BY a.aid",
	'list_cat_alb_kwrd_pic_srch'	=> "SELECT count(pid) AS link_pic_count FROM {$CONFIG['TABLE_PICTURES']} WHERE aid != '%1\$s' ".
									   "AND keywords LIKE '%2\$s' AND approved = 'YES'"
	//'list_cat_alb_vis_test_aid'		=> "SELECT filepath, filename, url_prefix, pwidth, pheight  FROM {$CONFIG['TABLE_PICTURES']} ".
									   //"WHERE aid = '%1\$s' ORDER BY RAND() LIMIT 0,1",
	//'list_cat_alb_vis_test_pid'		=> "SELECT filepath, filename, url_prefix, pwidth, pheight  FROM {$CONFIG['TABLE_PICTURES']} " . 
									   //"WHERE pid='%1\$s'"
);


/******************************************************/
//queries from init.inc.php
/***********************************************************/
$cpg_db_init_inc = array(
	'get_db_configuration'		=> "SELECT * FROM {$CONFIG['TABLE_CONFIG']}",
	'select_distinct_aid'		=> "SELECT DISTINCT(aid) FROM {$CONFIG['TABLE_ALBUMS']} WHERE moderator_group IN %1\$s",
	'get_user_favpics'			=> "SELECT user_favpics FROM {$CONFIG['TABLE_FAVPICS']} WHERE user_id = ".USER_ID,
	'delete_expired_ban'		=> "DELETE FROM {$CONFIG['TABLE_BANNED']} WHERE expiry < '%1\$s'",
	'get_all_banned'			=> "SELECT * FROM {$CONFIG['TABLE_BANNED']} WHERE (ip_addr='%1\$s' OR ip_addr='%2\$s' OR user_id='%3\$s') AND brute_force=0"
);


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
	'update_config_data'		=> "UPDATE {$CONFIG['TABLE_CONFIG']} SET value = '%1\$s' WHERE name = '%2\$s'",
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
	'create_banlist'			=> "SELECT *, UNIX_TIMESTAMP(expiry) AS expiry FROM {$CONFIG['TABLE_BANNED']} WHERE brute_force=0",
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
	'usergroup_delete'				=> "DELETE FROM {$CONFIG['TABLE_USERGROUPS']} WHERE 1",
	'insert_admin'					=> "INSERT INTO {$CONFIG['TABLE_USERGROUPS']} ".
									   "VALUES (1, 'Administrators', 0, 1, 1, 1, 1, 1, 1, 0, 0, 3, 0, 5, 3)",
	'insert_registered'				=> "INSERT INTO {$CONFIG['TABLE_USERGROUPS']} ".
									   "VALUES (2, 'Registered', 1024, 0, 1, 1, 1, 1, 1, 1, 0, 3, 0, 5, 3)",
	'insert_anonymous'				=> "INSERT INTO {$CONFIG['TABLE_USERGROUPS']} ".
									   "VALUES (3, 'Anonymous', 0, 0, 1, 0, 0, 0, 0, 1, 1, 0, 0, 5, 3)",
	'insert_banned'					=> "INSERT INTO {$CONFIG['TABLE_USERGROUPS']} ".
									   "VALUES (4, 'Banned', 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 5, 3)",
	'get_recovery_logon_timestamp'	=> "SELECT value FROM {$CONFIG['TABLE_BRIDGE']} WHERE name = 'recovery_logon_timestamp'",
	'get_recovery_logon_failures'	=> "SELECT value FROM {$CONFIG['TABLE_BRIDGE']} WHERE name = 'recovery_logon_failures'",
	'get_user_data'					=> "SELECT user_id, user_name, user_password FROM %1\$s WHERE user_name = '%2\$s' ".
									   "AND BINARY user_password = '%3\$s' AND user_active = 'YES' AND user_group = '1'",
	'unset_bridge_enable'			=> "UPDATE {$CONFIG['TABLE_CONFIG']} SET value = '0' WHERE name = 'bridge_enable'",
	'reset_recovery_logon_failures'	=> "UPDATE {$CONFIG['TABLE_BRIDGE']} SET value = '0' WHERE name = 'recovery_logon_failures'",
	'set_recovery_logon_timestamp'	=> "UPDATE {$CONFIG['TABLE_BRIDGE']} SET value = NOW() WHERE name = 'recovery_logon_timestamp'",
	//'delete_from_usergroups_02'		=> "DELETE FROM {$CONFIG['TABLE_USERGROUPS']} WHERE 1",
	//'insert_into_usergroups_05'			=> "INSERT INTO {$CONFIG['TABLE_USERGROUPS']} VALUES (1, 'Administrators', 0, 1, 1, 1, 1, 1, 1, 0, 0, 3, 0, 5, 3)",
	//'insert_into_usergroups_06'			=> "INSERT INTO {$CONFIG['TABLE_USERGROUPS']} VALUES (2, 'Registered', 1024, 0, 1, 1, 1, 1, 1, 1, 0, 3, 0, 5, 3)",
	//'insert_into_usergroups_07'			=> "INSERT INTO {$CONFIG['TABLE_USERGROUPS']} VALUES (3, 'Anonymous', 0, 0, 1, 0, 0, 0, 0, 1, 1, 0, 0, 5, 3)",
	//'insert_into_usergroups_08'			=> "INSERT INTO {$CONFIG['TABLE_USERGROUPS']} VALUES (4, 'Banned', 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 5, 3)",
	//'update_bridge_04'				=> "UPDATE {$CONFIG['TABLE_BRIDGE']} SET value = NOW() WHERE name = 'recovery_logon_timestamp'",
	//'select_value_03'				=> "SELECT value FROM {$CONFIG['TABLE_BRIDGE']} WHERE name = 'recovery_logon_failures'",
	'set_recovery_logon_failures'	=> "UPDATE {$CONFIG['TABLE_BRIDGE']} SET value = '$number_of_failed_attempts' WHERE name = 'recovery_logon_failures'"
	//'select_value_04'				=> "SELECT value FROM {$CONFIG['TABLE_BRIDGE']} WHERE name = 'recovery_logon_timestamp'",
	//'select_value_05'				=> "SELECT value FROM {$CONFIG['TABLE_BRIDGE']} WHERE name = 'recovery_logon_failures'"
);


/******************************************************/
//queries from calender.php
/***********************************************************/
if (defined('CALENDER_PHP')) $cpg_db_calender_php = array(
	'get_date_link'			=> "SELECT COUNT(pid) as count from {$CONFIG['TABLE_PICTURES']} WHERE approved = 'YES' ".
							   "AND substring(from_unixtime(ctime),1,10) = '%1\$s' %2\$s"
);


/******************************************************/
//queries from catmgr.php
/***********************************************************/
if (defined('CATMGR_PHP'))	$cpg_db_catmgr_php = array(
	'get_cid_fixed_cat_table'	=> "SELECT cid FROM {$CONFIG['TABLE_CATEGORIES']} WHERE 1",
	'edit_fixed_cat_table'		=> "UPDATE {$CONFIG['TABLE_CATEGORIES']} SET parent = '0' WHERE parent=cid OR parent NOT IN %1\$s",
	'get_subcat_data'			=> "SELECT cid, name, description FROM {$CONFIG['TABLE_CATEGORIES']} WHERE parent = '%1\$s' ORDER BY %2\$s",
	'update_cat_order'			=> "UPDATE {$CONFIG['TABLE_CATEGORIES']} SET pos='%1\$s' WHERE cid = '%2\$s' LIMIT 1",
	'get_usergroup_list_box'	=> "SELECT  ug.group_name AS name, ug.group_id AS id, catm.group_id AS catm_gid FROM {$CONFIG['TABLE_USERGROUPS']} ".
								   " AS ug LEFT JOIN {$CONFIG['TABLE_CATMAP']} AS catm ON catm.group_id=ug.group_id AND catm.cid= '%1\$s'",
	'get_form_alb_thumb'		=> "SELECT pid, filepath, filename, url_prefix FROM {$CONFIG['TABLE_PICTURES']},{$CONFIG['TABLE_ALBUMS']} ".
								   "WHERE {$CONFIG['TABLE_PICTURES']}.aid = {$CONFIG['TABLE_ALBUMS']}.aid ".
								   "AND {$CONFIG['TABLE_ALBUMS']}.category = '%1\$s' AND approved='YES' ORDER BY filename",
	'get_verify_child_cat'		=> "SELECT cid " . "FROM {$CONFIG['TABLE_CATEGORIES']} " . "WHERE parent = '%1\$s' ",
	'edit_cat_alpha_sort'		=> "UPDATE {$CONFIG['TABLE_CONFIG']} SET value = '%1\$s' WHERE name = 'categories_alpha_sort'",
	'getalpha_move'				=> "UPDATE {$CONFIG['TABLE_CATEGORIES']} SET pos='%1\$s' WHERE cid = '%2\$s' LIMIT 1",
//	'update_categories_04'		=> "UPDATE {$CONFIG['TABLE_CATEGORIES']} SET pos='$pos2' WHERE cid = '$cid2' LIMIT 1",
	'getalpha_setparent'		=> "UPDATE {$CONFIG['TABLE_CATEGORIES']} SET parent='%1\$s', pos='-1' WHERE cid = '%1\$s' LIMIT 1",
	'getalpha_editcat'			=> "SELECT cid, name, parent, description, thumb FROM {$CONFIG['TABLE_CATEGORIES']} WHERE cid = '%1\$s' LIMIT 1",
	'updatecat_no_parent'		=> "UPDATE {$CONFIG['TABLE_CATEGORIES']} SET parent='%1\$s', name='%2\$s', description='%3\$s', thumb='%4\$s' WHERE cid = '%5\$s' LIMIT 1",
	'updatecat_parent'			=> "UPDATE {$CONFIG['TABLE_CATEGORIES']} SET name='%1\$s', description='%2\$s', thumb='%3\$s' WHERE cid = '%4\$s' LIMIT 1",
	'updatecat_delete'			=> "DELETE FROM {$CONFIG['TABLE_CATMAP']} WHERE cid='%1\$s'",
	'updatecat_insert'			=> "INSERT INTO {$CONFIG['TABLE_CATMAP']} (cid, group_id) VALUES('%1\$s', '%2\$s')",
	'createcat_insert_cats'		=> "INSERT INTO {$CONFIG['TABLE_CATEGORIES']} (pos, parent, name, description) VALUES ('10000', '%1\$s', '%2\$s', '%3\$s')",
	'createcat_insert_catmaps'	=> "INSERT INTO {$CONFIG['TABLE_CATMAP']} (cid, group_id) VALUES('%1\$s', '%2\$s')",
	'deletecat_select_parent'	=> "SELECT parent FROM {$CONFIG['TABLE_CATEGORIES']} WHERE cid = '%1\$s' LIMIT 1",
	'deletecat_edit_cats'		=> "UPDATE {$CONFIG['TABLE_CATEGORIES']} SET parent='%1\$s' WHERE parent = '%2\$s'",
	'deletecat_edit_albums'		=> "UPDATE {$CONFIG['TABLE_ALBUMS']} SET category='%1\$s' WHERE category = '%2\$s'",
	'deletecat_delete_cats'		=> "DELETE FROM {$CONFIG['TABLE_CATEGORIES']} WHERE cid='%1\$s' LIMIT 1",
	'deletecat_delete_catmap'	=> "DELETE FROM {$CONFIG['TABLE_CATMAP']} WHERE cid='%1\$s'"
);


/******************************************************/
//queries from charsetmgr.php
/***********************************************************/
$cpg_db_charsetmgr_php = array(
	'get_charset_convert_data'	=> "SELECT * FROM %1\$s",
	'charset_convert'			=> "UPDATE %1\$s SET %2\$s='%3\$s' WHERE %4\$s=%5\$s",
	'set_config'				=> "UPDATE {$CONFIG['TABLE_CONFIG']} SET value='%1\$s' WHERE name='%2\$s'"
);


/******************************************************/
//queries from db_ecard.php
/***********************************************************/
if (defined('DB_ECARD')) $cpg_db_dbecard_php = array(
	'delete_ecards'		=> "DELETE FROM {$CONFIG['TABLE_ECARDS']} WHERE eid='%1\$S'",
	'count_ecards'		=> "SELECT COUNT(*) as count FROM {$CONFIG['TABLE_ECARDS']}",
	'get_ecards'		=> "SELECT eid, sender_name, sender_email, recipient_name, recipient_email, link, date, sender_ip ".
						   "FROM {$CONFIG['TABLE_ECARDS']} ORDER BY %1\$s %2\$s LIMIT %3\$s, %4\$s"
);


/******************************************************/
//queries from db_input.php
/***********************************************************/
if (defined('DB_INPUT_PHP')) $cpg_db_dbinput = array(
	'gal_admin_update'			=> "UPDATE {$CONFIG['TABLE_COMMENTS']} SET msg_body='%1\$s' WHERE msg_id='%2\$s'",
	'user_admin_approval_2'		=> "UPDATE {$CONFIG['TABLE_COMMENTS']} SET msg_body='%1\$s', approval='NO' ".
								   "WHERE msg_id='%2\$s' AND author_id ='%3\$s' LIMIT 1",
	'user_admin_approval'		=> "UPDATE {$CONFIG['TABLE_COMMENTS']} SET msg_body='%1\$s' ".
								   "WHERE msg_id='%2\$s' AND author_id ='%3\$s' LIMIT 1",
	'update_approval_non_zero'	=> "UPDATE {$CONFIG['TABLE_COMMENTS']} SET msg_body='%1\$s', approval='NO' ".
								   "WHERE msg_id='%2\$s' AND author_md5_id ='%3\$s' AND author_id = '0' LIMIT 1",
	'update_approval_zero'		=> "UPDATE {$CONFIG['TABLE_COMMENTS']} SET msg_body='%1\$s' ".
								   "WHERE msg_id='%2\$s' AND author_md5_id ='%3\$s' AND author_id = '0' LIMIT 1",
	'get_comments_pic_id'		=> "SELECT pid FROM {$CONFIG['TABLE_COMMENTS']} WHERE msg_id='%1\$s'",
	'get_pic_comments'			=> "SELECT comments FROM {$CONFIG['TABLE_PICTURES']}, {$CONFIG['TABLE_ALBUMS']} ".
								   "WHERE {$CONFIG['TABLE_PICTURES']}.aid = {$CONFIG['TABLE_ALBUMS']}.aid AND pid='%1\$s'",
	'get_last_commment_data'	=> "SELECT author_md5_id, author_id FROM {$CONFIG['TABLE_COMMENTS']} ".
								   "WHERE pid = '%1\$s' ORDER BY msg_id DESC LIMIT 1",
	'get_anonymous_user_count'	=> "select count(user_id) as count from {$CONFIG['TABLE_USERS']} ".
								   "where UPPER(user_name) = UPPER('%1\$s')",
	'anonymous_user_comment'	=> "INSERT INTO {$CONFIG['TABLE_COMMENTS']} (pid, msg_author, msg_body, msg_date, ".
								   "author_md5_id, author_id, msg_raw_ip, msg_hdr_ip, approval) ".
								   "VALUES ('%1\$s', '%2\$s', '%3\$s', NOW(), '%4\$s', '0', '%5\$s', '%6\$s', '%7\$s')",
	//'approval_not_needed_comm'	=> "INSERT INTO {$CONFIG['TABLE_COMMENTS']} (pid, msg_author, msg_body, msg_date, author_md5_id, author_id, msg_raw_ip, msg_hdr_ip, approval) VALUES ('$pid', '{$CONFIG['comments_anon_pfx']}$msg_author', '$msg_body', NOW(), '{$USER['ID']}', '0', '$raw_ip', '$hdr_ip', 'YES')",
	'registered_user_comment'	=> "INSERT INTO {$CONFIG['TABLE_COMMENTS']} (pid, msg_author, msg_body, msg_date, ".
								   "author_md5_id, author_id, msg_raw_ip, msg_hdr_ip, approval) ".
								   "VALUES ('%1\$s', '%2\$s', '%3\$s', NOW(), '', '%4\$s', '%5\$s', '%6\$s', '%7\$s')",
	//'registered_user_comment'	=> "INSERT INTO {$CONFIG['TABLE_COMMENTS']} (pid, msg_author, msg_body, msg_date, author_md5_id, author_id, msg_raw_ip, msg_hdr_ip, approval) VALUES ('$pid', '" . addslashes(USER_NAME) . "', '$msg_body', NOW(), '', '" . USER_ID . "', '$raw_ip', '$hdr_ip', 'YES')",
	'gal_admin_update_albums'	=> "UPDATE {$CONFIG['TABLE_ALBUMS']} SET title='%1\$s', description='%2\$s', category='%3\$s', ".
								   "thumb='%4\$s', uploads='%5\$s', comments='%6\$s', votes='%7\$s', visibility='%8\$s', ".
								   "alb_password='%9\$s', alb_password_hint='%10\$s', keyword='%11\$s', moderator_group='%12\$s' ".
								   "WHERE aid='%13\$s' LIMIT 1",
	'user_admin_update_albums'	=> "UPDATE {$CONFIG['TABLE_ALBUMS']} SET title='%1\$s', description='%2\$s', category='%3\$s', ".
								   "thumb='%4\$s',  comments='%5\$s', votes='%6\$s', visibility='%7\$s', alb_password='%8\$s', ".
								   "alb_password_hint='%9\$s',keyword='%10\$s' WHERE aid='%11\$s' LIMIT 1",
	'get_pic_id'				=> "SELECT pid FROM {$CONFIG['TABLE_PICTURES']} WHERE aid = '%1\$s'",
	'update_pic_reset_views'	=> "UPDATE {$CONFIG['TABLE_PICTURES']} SET hits='0' WHERE aid='%1\$s'",
	'update_pic_reset_rating'	=> "UPDATE {$CONFIG['TABLE_PICTURES']} SET  pic_rating='0',  votes='0' WHERE aid='%1\$s'",
	'delete_pic'				=> "DELETE FROM {$CONFIG['TABLE_PICTURES']} WHERE aid='%1\$s'",
	'check_valid_alb_id'		=> "SELECT category FROM {$CONFIG['TABLE_ALBUMS']} WHERE aid='%1\$s' ".
								   "AND (uploads = 'YES' OR category = '%2\$s')",
	'get_valid_alb_id'			=> "SELECT category FROM {$CONFIG['TABLE_ALBUMS']} WHERE aid='%1\$s'"
);


/******************************************************/
//queries from delete.php
/***********************************************************/
if (defined('DELETE_PHP')) $cpg_db_delete_php = array(
	'del_pic_gal_admin'			=> "SELECT aid, filepath, filename FROM {$CONFIG['TABLE_PICTURES']} WHERE pid='%1\$s'",
	'del_pic_user_admin'		=> "SELECT {$CONFIG['TABLE_PICTURES']}.aid as aid, category, filepath, filename, owner_id ".
								   "FROM {$CONFIG['TABLE_PICTURES']}, {$CONFIG['TABLE_ALBUMS']} ".
								   "WHERE {$CONFIG['TABLE_PICTURES']}.aid = {$CONFIG['TABLE_ALBUMS']}.aid AND pid='%1\$s'",
	'del_pic_comment'			=> "DELETE FROM {$CONFIG['TABLE_COMMENTS']} WHERE pid='%1\$s'",
	'del_pic_exif'				=> "DELETE FROM {$CONFIG['TABLE_EXIF']} WHERE filename='%1\$s' LIMIT 1",
	'delete_picture'			=> "DELETE FROM {$CONFIG['TABLE_PICTURES']} WHERE pid='%1\$s' LIMIT 1",
	'del_alb_get_title_cat'		=> "SELECT title, category FROM {$CONFIG['TABLE_ALBUMS']} WHERE aid ='%1\$s'",
	'del_alb_get_pic_id'		=> "SELECT pid FROM {$CONFIG['TABLE_PICTURES']} WHERE aid='%1\$s'",
	'delete_album'				=> "DELETE from {$CONFIG['TABLE_ALBUMS']} WHERE aid='%1\$s'",
	'albmgr_dist_catmap_cid'	=> "SELECT DISTINCT cid FROM {$CONFIG[TABLE_CATMAP]} WHERE group_id = %1\$s",
	'albmgr_set_pos'			=> "UPDATE {$CONFIG['TABLE_ALBUMS']} SET pos='%1\$s' WHERE aid='%2\$s' %3\$s LIMIT 1",
	'albmgr_add_album'			=> "INSERT INTO {$CONFIG['TABLE_ALBUMS']} (category, title, uploads, pos, description, owner) ".
								   "VALUES ('%1\$s', '%2\$s', 'NO',  '%3\$s', '', '%4\$s')",
	'albmgr_update_album'		=> "UPDATE {$CONFIG['TABLE_ALBUMS']} SET title='%1\$s', pos='%2\$s' WHERE aid='%3\$s' %4\$s LIMIT 1",
	'picmgr_set_op_pos'			=> "UPDATE {$CONFIG['TABLE_PICTURES']} SET position='%1\$s' WHERE pid='%2\$s' %3\$s LIMIT 1",
	'picmgr_add_alb'			=> "INSERT INTO {$CONFIG['TABLE_ALBUMS']} (category, title, uploads, pos, description) ".
								   "VALUES ('%1\$s', '%2\$s', 'NO',  '%3\$s', '')",
	'picmgr_set_op_pic_sort'	=> "UPDATE {$CONFIG['TABLE_PICTURES']} SET position='%1\$s' WHERE pid='%2\$s' %3\$s LIMIT 1",
	'comment_get_pic_id'		=> "SELECT pid FROM {$CONFIG['TABLE_COMMENTS']} WHERE msg_id='%1\$s'",
	'comment_del_gal_admin'		=> "DELETE FROM {$CONFIG['TABLE_COMMENTS']} WHERE msg_id='%1\$s'",
	'comment_del_user_admin'	=> "DELETE FROM {$CONFIG['TABLE_COMMENTS']} WHERE msg_id='%1\$s' AND author_id ='%2\$s' LIMIT 1",
	'comment_del_not_admin'		=> "DELETE FROM {$CONFIG['TABLE_COMMENTS']} WHERE msg_id='%1\$s' AND author_md5_id ='%2\$s' ".
								   "AND author_id = '0' LIMIT 1",
	'user_get_name'				=> "SELECT user_name FROM {$CONFIG['TABLE_USERS']} WHERE user_id = '%1\$s'",
	'user_get_alb_id'			=> "SELECT aid FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = '%1\$s'",
	'user_count_comments'		=> "SELECT COUNT(*) as count FROM {$CONFIG['TABLE_COMMENTS']} WHERE author_id = '%1\$s'",
	'user_del_comments'			=> "DELETE FROM {$CONFIG['TABLE_COMMENTS']} WHERE author_id = '%1\$s'",
	'user_update_comments'		=> "UPDATE {$CONFIG['TABLE_COMMENTS']} SET  author_id = '0' WHERE  author_id = '%1\$s'",
	'user_count_pictures'		=> "SELECT COUNT(*) as count FROM {$CONFIG['TABLE_PICTURES']} WHERE owner_id = '%1\$s'",
	'user_del_pictures'			=> "DELETE FROM {$CONFIG['TABLE_PICTURES']} WHERE  owner_id = '%1\$s'",
	'user_update_pictures'		=> "UPDATE {$CONFIG['TABLE_PICTURES']} SET  owner_id = '0' WHERE  owner_id = '%1\$s'",
	'user_del_users'			=> "DELETE FROM {$CONFIG['TABLE_USERS']} WHERE user_id = '%1\$s'",
	'user_get_name_active'		=> "SELECT user_name,user_active FROM {$CONFIG['TABLE_USERS']} WHERE user_id = '%1\$s'",
	'user_set_active_yes'		=> "UPDATE {$CONFIG['TABLE_USERS']} SET user_active = 'YES' WHERE  user_id = '%1\$s'",
	//'select_user_name_03'		=> "SELECT user_name,user_active FROM {$CONFIG['TABLE_USERS']} WHERE user_id = '".(int)$key."'",
	'user_set_active_no'		=> "UPDATE {$CONFIG['TABLE_USERS']} SET user_active = 'NO' WHERE  user_id = '%1\$s'",
	//'select_user_name_04'		=> "SELECT user_name FROM {$CONFIG['TABLE_USERS']} WHERE user_id = '".(int)$key."'",
	'user_set_password'			=> "UPDATE {$CONFIG['TABLE_USERS']} SET user_password = '%1\$s' WHERE  user_id = '%2\$s'",
	'user_get_usergrp'			=> "SELECT group_id,group_name FROM {$CONFIG['TABLE_USERGROUPS']}",
	'user_get_name_group'		=> "SELECT user_name,user_group FROM {$CONFIG['TABLE_USERS']} WHERE user_id = '%1\$s'",
	'user_set_usergrp'			=> "UPDATE {$CONFIG['TABLE_USERS']} SET user_group = '%1\$s' WHERE  user_id = '%2\$s'",
	'user_get_usergrp_order'	=> "SELECT group_id,group_name FROM {$CONFIG['TABLE_USERGROUPS']} ORDER BY group_name",
	//'select_user_name_06'		=> "SELECT user_name,user_group FROM {$CONFIG['TABLE_USERS']} WHERE user_id = '".(int)$key."'",
	'user_get_all'				=> "SELECT * FROM {$CONFIG['TABLE_USERS']} WHERE user_id = '%1\$s'",
	'user_set_usergrp_list'		=> "UPDATE {$CONFIG['TABLE_USERS']} SET user_group_list = '%1\$s' WHERE  user_id = '%2\$s'"
	//'select_user_name_07'		=> "SELECT user_name FROM {$CONFIG['TABLE_USERS']} WHERE user_id = '".(int)$key."'",
	//'select_aid_03'				=> "SELECT aid FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = '" . (FIRST_USER_CAT + $key) . "'",
	//'select_count_comments_02'	=> "SELECT COUNT(*) as count FROM {$CONFIG['TABLE_COMMENTS']} WHERE author_id = '".(int)$key."'",
	//'delete_from_comments_06'	=> "DELETE FROM {$CONFIG['TABLE_COMMENTS']} WHERE author_id = '".(int)$key."'",
	//'update_coments_02'			=> "UPDATE {$CONFIG['TABLE_COMMENTS']} SET  author_id = '0' WHERE  author_id = '".(int)$key."'",
	//'select_count_pictures'		=> "SELECT COUNT(*) as count FROM {$CONFIG['TABLE_PICTURES']} WHERE owner_id = '".(int)$key."'",
	//'delete_from_pictures_03'	=> "DELETE FROM {$CONFIG['TABLE_PICTURES']} WHERE  owner_id = '".(int)$key."'",
	//'update_pictures_04'		=> "UPDATE {$CONFIG['TABLE_PICTURES']} SET  owner_id = '0' WHERE  owner_id = '".(int)$key."'",
	//'delete_from_users_02'		=> "DELETE FROM {$CONFIG['TABLE_USERS']} WHERE user_id = '".(int)$key."'"
);


/******************************************************/
//queries from displayecard.php
/***********************************************************/
if (defined('DISPLAYECARD_PHP')) $cpg_db_displayecard_php = array(
	'get_ecard_link'		=> "SELECT link FROM {$CONFIG['TABLE_ECARDS']} WHERE link LIKE '%1\$s'",
	'get_pic_dimensions'	=> "SELECT pwidth, pheight from {$CONFIG['TABLE_PICTURES']} WHERE pid='%1\$s'"
); 


/******************************************************/
//queries from displayimage.php
/***********************************************************/
if (defined('DISPLAYIMAGE_PHP')) $cpg_db_displayimage_php = array(
	'get_subcat_data'		=> "SELECT cid, name, description FROM {$CONFIG['TABLE_CATEGORIES']} WHERE parent = '%1\$s'",
	'alb_set_array'			=> "SELECT aid FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = %1\$s",
	'fix_topn_images'		=> "SELECT category, title, aid, keyword, description, alb_password_hint ".
							   "FROM {$CONFIG['TABLE_ALBUMS']} WHERE aid='%1\$s'",
	'get_current_pic_data'	=> "SELECT aid from {$CONFIG['TABLE_PICTURES']} WHERE pid='%1\$s' %2\$s LIMIT 1",
	'get_current_alb_data'	=> "SELECT title, comments, votes, category, aid ".
							   "FROM {$CONFIG['TABLE_ALBUMS']} WHERE aid='%1\$s' LIMIT 1"
);


/******************************************************/
//queries from ecard.php
/***********************************************************/
if (defined('ECARDS_PHP')) $cpg_db_ecard_php = array(
	'get_pic_thumbnail_url'		=> "SELECT * from {$CONFIG['TABLE_PICTURES']} WHERE pid='%1\$s' %2\$s",
	'write_ecard_log'			=> "INSERT INTO {$CONFIG['TABLE_ECARDS']} (sender_name, sender_email, recipient_name, ".
								   "recipient_email, link, date, sender_ip) ".
								   "VALUES ('%1\$s', '%2\$s', '%3\$s', '%4\$s', '%5\$s', '%6\$s', '%7\$s')"
);


/******************************************************/
//queries from edit_one_pic.php
/***********************************************************/
if (defined('EDITPICS_PHP')) $cpg_db_edit_one_pic_php = array(
	'process_data_get_pic_alb'		=> "SELECT * FROM {$CONFIG['TABLE_PICTURES']} AS p, {$CONFIG['TABLE_ALBUMS']} AS a ".
									   "WHERE a.aid = p.aid AND pid = '%1\$s'",
	'process_data_set_gal_icon'		=> "update {$CONFIG['TABLE_PICTURES']} set galleryicon=0 where owner_id=%1\$s;",
	'process_data_delete_exif'		=> "DELETE FROM {$CONFIG['TABLE_EXIF']} WHERE filename = '%1\$s'",
	'process_data_delete_comments'	=> "DELETE FROM {$CONFIG['TABLE_COMMENTS']} WHERE pid='%1\$s'",
	'process_data_set_hits_ratings'	=> "UPDATE {$CONFIG['TABLE_PICTURES']} SET %1\$s WHERE pid='%2\$s' LIMIT 1",
	'process_data_set_filename'		=> "UPDATE {$CONFIG['TABLE_PICTURES']} SET filename = '%1\$s' WHERE pid = '%2\$s' LIMIT 1",
	'get_user_album'				=> "SELECT aid, title FROM {$CONFIG['TABLE_ALBUMS']} ".
									   "WHERE category='%1\$s' %2\$s ORDER BY title",
	'get_pictures_albums'			=> "SELECT *, p.title AS title, p.votes AS votes FROM {$CONFIG['TABLE_PICTURES']} AS p, ".
									   "{$CONFIG['TABLE_ALBUMS']} AS a WHERE a.aid = p.aid AND pid = '%1\$s'",
	'get_gal_admin_public_alb'		=> "SELECT DISTINCT aid, title, IF(category = 0, CONCAT('&gt; ', title), ".
									   "CONCAT(name,' &lt; ',title)) AS cat_title FROM {$CONFIG['TABLE_ALBUMS']} ".
									   "LEFT JOIN {$CONFIG['TABLE_CATEGORIES']} ON category = cid  ".
									   "WHERE category < '%1\$s' ORDER BY cat_title",
	'get_user_admin_public_alb'		=> "SELECT DISTINCT aid, title, IF(category = 0, CONCAT('&gt; ', title), ".
									   "CONCAT(name,' &lt; ',title)) AS cat_title FROM {$CONFIG['TABLE_ALBUMS']} ".
									   "LEFT JOIN {$CONFIG['TABLE_CATEGORIES']} ON category = cid ".
									   "WHERE (category < '%1\$s' AND uploads = 'YES' %2\$s) ".
									   "OR aid='%3\$s' ORDER BY cat_title"
);


/******************************************************/
//queries from editpics.php
/***********************************************************/
if (defined('EDITPICS_PHP')) $cpg_db_editpics_php = array(
	'edit_pic_mode_get_alb'				=> "SELECT title, category FROM {$CONFIG['TABLE_ALBUMS']} WHERE aid = '%1\$s'",
	'process_data_get_pic_alb'			=> "SELECT category, filepath, filename, owner_id ".
										   "FROM {$CONFIG['TABLE_PICTURES']}, {$CONFIG['TABLE_ALBUMS']} ".
										   "WHERE {$CONFIG['TABLE_PICTURES']}.aid = {$CONFIG['TABLE_ALBUMS']}.aid AND pid='%1\$s'",
	'process_data_set_gal_icon'			=> "UPDATE {$CONFIG['TABLE_PICTURES']} SET galleryicon=0 WHERE owner_id=%1\$s;",
	'process_data_del_comments'			=> "DELETE FROM {$CONFIG['TABLE_COMMENTS']} WHERE pid='%1\$s'",
	'process_data_del_pics'				=> "DELETE FROM {$CONFIG['TABLE_PICTURES']} WHERE pid='%1\$s' LIMIT 1",
	'process_data_set_approved'			=> "UPDATE {$CONFIG['TABLE_PICTURES']} SET %1\$s WHERE pid='%2\$s' LIMIT 1",
	'get_user_albums'					=> "SELECT aid, title FROM {$CONFIG['TABLE_ALBUMS']} WHERE aid IN %1\$s ".
										   "AND category > '%2\$s' OR category='%3\$s' ORDER BY title",
	'get_my_albums'						=> "SELECT aid , title FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = %1\$s",
	'get_piblic_albums'					=> "SELECT alb.aid AS aid, CONCAT_WS('', '(', cat.name, ') ', alb.title) AS title ".
										   "FROM {$CONFIG['TABLE_ALBUMS']} AS alb INNER JOIN {$CONFIG['TABLE_CATEGORIES']} AS cat ".
										   "ON alb.owner = '%1\$s' AND alb.category = cat.cid ".
										   "ORDER BY alb.category DESC, alb.pos ASC",
	'get_gal_admin_public_alb'			=> "SELECT DISTINCT aid, title, IF(category = 0, CONCAT('&gt; ', title), ".
										   "CONCAT(name,' &lt; ',title)) AS cat_title FROM {$CONFIG['TABLE_ALBUMS']}, ".
										   "{$CONFIG['TABLE_CATEGORIES']} WHERE category < '%1\$s' ".
										   "AND (category = 0 OR category = cid) ORDER BY cat_title",
	'get_moderator_public_alb'			=> "SELECT DISTINCT aid, title, IF(category = 0, CONCAT('&gt; ', title), ".
										   "CONCAT(name,' &lt; ',title)) AS cat_title FROM {$CONFIG['TABLE_ALBUMS']}, ".
										   "{$CONFIG['TABLE_CATEGORIES']} WHERE aid IN %1\$s  AND category < '%2\$s' ".
										   "AND (category = 0 OR category = cid) ORDER BY cat_title",
	'moderator_count_pic_not_approved'	=> "SELECT count(*) as count FROM {$CONFIG['TABLE_PICTURES']} ".
										   "WHERE approved = 'NO' AND aid IN %1\$s",
	'count_pic_not_approved'			=> "SELECT count(*) as count FROM {$CONFIG['TABLE_PICTURES']} WHERE approved = 'NO'",
	'get_pic_owner'						=> "SELECT pid, owner_id FROM {$CONFIG['TABLE_PICTURES']} ".
										   "WHERE owner_id != 0 AND owner_name = ''",
	'set_pic_owner_name'				=> "UPDATE {$CONFIG['TABLE_PICTURES']} SET owner_name = '%1\$s' WHERE pid = %2\$s LIMIT 1",
	'set_pic_owner_id'					=> "UPDATE {$CONFIG['TABLE_PICTURES']} SET owner_id = 0 WHERE pid = %1\$s LIMIT 1",
	'moderator_get_pic_not_approved'	=> "SELECT * FROM {$CONFIG['TABLE_PICTURES']} WHERE approved = 'NO' ".
										   "AND aid IN %1\$s ORDER BY pid LIMIT %2\$s, %3\$s",
	'get_pic_not_approved'				=> "SELECT * FROM {$CONFIG['TABLE_PICTURES']} WHERE approved = 'NO' ".
										   "ORDER BY pid LIMIT %1\$s, %2\$s",
	'count_album_pics'					=> "SELECT count(*) as count FROM {$CONFIG['TABLE_PICTURES']} WHERE aid = '%1\$s'",
	'get_album_pics'					=> "SELECT p.*,a.category FROM {$CONFIG['TABLE_PICTURES']} as p ".
										   "INNER JOIN {$CONFIG['TABLE_ALBUMS']} as a ON a.aid=p.aid ".
										   "WHERE p.aid = '%1\$s' ORDER BY p.filename LIMIT %2\$s, %3\$s"
);


/******************************************************/
//queries from exifmgr.php
/***********************************************************/
if (defined('DISPLAYIMAGE_PHP')) $cpg_db_exifmgr_php = array(
	'config_set_show_which_exif'	=> "UPDATE {$CONFIG['TABLE_CONFIG']} SET value = '%1\$s' WHERE name = 'show_which_exif'"
);


/*********************************************************/
//queries from export.php
/**********************************************************/
if (defined('EXPORT_PHP')) $cpg_db_export_php = array(
	'get_albums'			=> "SELECT aid, title FROM {$CONFIG['TABLE_ALBUMS']} ORDER BY `title`",
	'init_html_export'		=> "SELECT pid,title,filename,filepath, url_prefix FROM {$CONFIG['TABLE_PICTURES']} ".
							   "WHERE `aid` = '%1\$s'",
	'export_thumb_page'		=> "SELECT pid,title,filename,filepath FROM {$CONFIG['TABLE_PICTURES']} WHERE `aid` = '%1\$s'",
	'get_config_theme'		=> "SELECT value FROM {$CONFIG['TABLE_CONFIG']} WHERE `name` = 'theme'",
	'copy_photo'			=> "SELECT filename,filepath,title FROM {$CONFIG['TABLE_PICTURES']} WHERE `pid` = '%1\$s' LIMIT 1",
	'init_photocopy'		=> "SELECT pid,title,filename,filepath FROM {$CONFIG['TABLE_PICTURES']} WHERE `aid` = '%1\$s'"
);


/******************************************************/
//queries from forgot_passwd.php
/***********************************************************/
if (defined('FORGOT_PASSWD_PHP')) $cpg_db_forgot_passwd_php = array(
	'get_user_data'			=> "SELECT user_id, user_group,user_active,user_name, user_password, user_email  ".
							   "FROM {$CONFIG['TABLE_USERS']} WHERE user_email = '%1\$s' AND user_active = 'YES'",
	'session_life'			=> "insert into %1\$s (session_id, user_id, time, remember) ".
							   "values ('%2\$s', 0, '%3\$s', 0);",
	'get_null_sessions'		=> "select null from %1\$s where session_id = '%2\$s';",
	'get_field_user_data'	=> "select %1\$s, %2\$s from %3\$s where %4\$s='%5\$s';",
	'set_new_passwd'		=> "update %1\$s set %2\$s='%3\$s' where %4\$s='%5\$s'",
	'delete_sesion'			=> "delete from %1\$s where session_id='%2\$s';"
);


/******************************************************/
//queries from groupmgr.php
/***********************************************************/
if (defined('GROUPMGR_PHP')) $cpg_db_groupmgr_php = array(
	'display_group_list'		=> "SELECT * FROM {$CONFIG['TABLE_USERGROUPS']} WHERE 1 ORDER BY group_id",
	'insert_administrators'		=> "INSERT INTO {$CONFIG['TABLE_USERGROUPS']} VALUES (1, 'Administrators', 0, 1, 1, 1, 1, 1, 1, 0, 0, 3, 0, 5, 3)",
	'insert_registered'			=> "INSERT INTO {$CONFIG['TABLE_USERGROUPS']} VALUES (2, 'Registered', 1024, 0, 1, 1, 1, 1, 1, 1, 0, 3, 0, 5, 3)",
	'insert_anonymous'			=> "INSERT INTO {$CONFIG['TABLE_USERGROUPS']} VALUES (3, 'Anonymous', 0, 0, 1, 0, 0, 0, 0, 1, 1, 0, 0, 5, 3)",
	'insert_banned'				=> "INSERT INTO {$CONFIG['TABLE_USERGROUPS']} VALUES (4, 'Banned', 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 5, 3)",
	'process_post_data'			=> "UPDATE {$CONFIG['TABLE_USERGROUPS']} SET %1\$s WHERE group_id = '%2\$s' LIMIT 1",
	'delete_usergroup'			=> "DELETE FROM {$CONFIG['TABLE_USERGROUPS']} WHERE group_id = '%1\$s'  LIMIT 1",
	'set_default_usergroup'		=> "UPDATE {$CONFIG['TABLE_USERS']} SET user_group = '2' WHERE user_group = '%1\$s'",
	'new_blank_usergroup'		=> "INSERT INTO {$CONFIG['TABLE_USERGROUPS']} (group_name) VALUES ('')"
);


/******************************************************/
//queries from install.php
/***********************************************************/
if (defined('INSTALL_PHP')) $cpg_db_install_php = array(
	'create_database'				=> 'CREATE DATABASE ' . $db_name,
	'replace_into_config_values'	=> "REPLACE INTO CPG_config VALUES ('thumb_method', '{$thisconfig['thumb_method']}');\n REPLACE INTO CPG_config VALUES ('impath', '{$this->config['im_path']}');\n REPLACE INTO CPG_config VALUES ('ecards_more_pic_target', '$gallery_url_prefix');\n REPLACE INTO CPG_config VALUES ('gallery_admin_email', '{$this->config['admin_email']}');\n",
	'replace_into_config_values_02'	=> "REPLACE INTO CPG_config VALUES ('silly_safe_mode', '1');\n",
	'replace_into_config_values_03'	=> "REPLACE INTO CPG_config VALUES ('default_dir_mode', '0777');\n REPLACE INTO CPG_config VALUES ('default_file_mode', '0666');\n",
	'insert_into_users'				=> "INSERT INTO {$this->config['db_prefix']}users (user_id, user_group, user_active, user_name, user_password, user_lastvisit, user_regdate, user_group_list, user_email, user_profile1, user_profile2, user_profile3, user_profile4, user_profile5, user_profile6, user_actkey ) VALUES (1, 1, 'YES', '{$this->config['admin_username']}', md5('{$this->config['admin_password']}'), NOW(), NOW(), '', '{$this->config['admin_email']}', '', '', '', '', '', '', '');\n"
);


/**********************************************************/
//queries from install_old.php
/***********************************************************/
$cpg_db_install_old_php = array(
	'insert_into_users'				=> "INSERT INTO CPG_users (user_id, user_group, user_active, user_name, user_password, user_lastvisit, user_regdate, user_group_list, user_email, user_profile1, user_profile2, user_profile3, user_profile4, user_profile5, user_profile6, user_actkey ) VALUES (1, 1, 'YES', '{$_POST['admin_username']}', md5('{$_POST['admin_password']}'), NOW(), NOW(), '', '{$_POST['admin_email']}', '', '', '', '', '', '', '');\n",
	'replace_into_config_values'	=> "REPLACE INTO CPG_config VALUES ('thumb_method', '{$_POST['thumb_method']}');\n REPLACE INTO CPG_config VALUES ('impath', '{$_POST['impath']}');\n REPLACE INTO CPG_config VALUES ('ecards_more_pic_target', '$gallery_url_prefix');\n REPLACE INTO CPG_config VALUES ('gallery_admin_email', '{$_POST['admin_email']}');\n",
	'replace_into_config_values_02'	=> "REPLACE INTO CPG_config VALUES ('silly_safe_mode', '1');\n",
	'replace_into_config_values_03'	=> "REPLACE INTO CPG_config VALUES ('default_dir_mode', '0777');\n REPLACE INTO CPG_config VALUES ('default_file_mode', '0666');\n"
);


/**********************************************************/
//queries from keyword_create_dict.php
/***********************************************************/
if (defined('EDITPICS_PHP')) $cpg_db_keyword_create_dict_php = array(
	'get_pic_keywords'			=> "SELECT keywords from {$CONFIG['TABLE_PREFIX']}pictures",
	'get_dict_keyword'			=> "SELECT keyword from {$CONFIG['TABLE_PREFIX']}dict WHERE keyword = '%1\$s'",
	'set_dict_keyword'			=> "INSERT INTO {$CONFIG['TABLE_PREFIX']}dict SET keyword = '%1\$s'"
);


/**********************************************************/
//queries from keyword_select.php
/***********************************************************/
if (defined('UPLOAD_PHP')) $cpg_db_keyword_select_php = array(
	'get_all_dict'		=> "SELECT * FROM {$CONFIG['TABLE_PREFIX']}dict ORDER BY keyword"
);


/**********************************************************/
//queries from keywordmgr.php
/***********************************************************/
if(defined('KEYWORDMGR_PHP') || defined('SEARCH_PHP')) $cpg_db_keywordmgr_php = array(
	'display_get_keywords'		=> "select keywords from {$CONFIG['TABLE_PICTURES']}",
	'get_pic_keywords'			=> "SELECT `pid`,`keywords` FROM {$CONFIG['TABLE_PICTURES']} ".
								   "WHERE CONCAT(' ',`keywords`,' ') LIKE '%1\$s'",
	'set_pic_keywords'			=> "UPDATE {$CONFIG['TABLE_PICTURES']} SET `keywords` = '%1\$s' WHERE `pid` = '%2\$s'",
	'set_pic_trim_keywords'		=> "UPDATE {$CONFIG['TABLE_PICTURES']} SET `keywords` = TRIM(REPLACE(`keywords`,'  ',' '))"
	//'select_pid_02'			=> "SELECT `pid`,`keywords` FROM {$CONFIG['TABLE_PICTURES']} WHERE CONCAT(' ',`keywords`,' ') LIKE '% {$remov} %'",
	//'update_pictures_02'		=> "UPDATE {$CONFIG['TABLE_PICTURES']} SET `keywords` = '$keywords' WHERE `pid` = '$id'",
	//'update_pictures_03'		=> "UPDATE {$CONFIG['TABLE_PICTURES']} SET `keywords` = TRIM(REPLACE(`keywords`,'  ',' '))"
);


/**********************************************************/
//queries from login.php
/***********************************************************/
if (defined('LOGIN_PHP')) $cpg_db_login_php = array(
	'get_all_banned'		=> "SELECT * FROM {$CONFIG['TABLE_BANNED']} WHERE ip_addr='%1\$s' OR ip_addr='%2\$s'",
	'update_banned'			=> "UPDATE {$CONFIG['TABLE_BANNED']} SET brute_force='%1\$s', expiry='%2\$s' WHERE ban_id='%3\$s'",
	'new_banned'			=> "INSERT INTO {$CONFIG['TABLE_BANNED']} (ip_addr, expiry, brute_force) VALUES ('%1\$s', '%2\$s','%3\$s')"
);


/**********************************************************/
//queries from minibrowser.php
/***********************************************************/
if (defined('MINIBROWSER_PHP') || defined('SEARCHNEW_PHP')) $cpg_db_minibrowser_php = array(
	'get_allowed_extensions'	=> "SELECT extension FROM {$CONFIG['TABLE_FILETYPES']}"
);


/**********************************************************/
//queries from mode.php
/***********************************************************/
if (defined('MODE_PHP')) $cpg_db_mode_php = array(
	'coppermine_news'		=> "UPDATE {$CONFIG['TABLE_CONFIG']} SET value = '%1\$s' WHERE name = 'display_coppermine_news'"
);


/**********************************************************/
//queries from modifyalb.php
/***********************************************************/
if (defined('MODIFYALB_PHP')) $cpg_db_modifyalb_php = array(
	'get_subcat_data'			=> "SELECT cid, name, description FROM {$CONFIG['TABLE_CATEGORIES']} ".
								   "WHERE parent = '%1\$s' AND cid != 1 ORDER BY pos",
	'get_catmap_group_id'		=> "SELECT group_id FROM {$CONFIG['TABLE_CATMAP']} WHERE group_id = '%1\$s' AND cid=%2\$s",
	'form_cat_get_name'			=> "SELECT name FROM {$CONFIG['TABLE_CATEGORIES']} WHERE cid = '%1\$s' LIMIT 1",
	'form_alb_thumb_get_pic'	=> "SELECT pid, filepath, filename, url_prefix FROM {$CONFIG['TABLE_PICTURES']} ".
								   "WHERE aid='%1\$s' %2\$s AND approved='YES' ORDER BY filename",
	'form_vis_gal_admin'		=> "SELECT group_id, group_name FROM {$CONFIG['TABLE_USERGROUPS']} WHERE 1",
	'form_vis_user_admin'		=> "SELECT group_id, group_name FROM {$CONFIG['TABLE_USERGROUPS']} WHERE group_id IN %1\$s",
	'form_moderator'			=> "SELECT group_id, group_name FROM {$CONFIG['TABLE_USERGROUPS']} WHERE group_id > 1",
	'get_distinct_alb'			=> "SELECT DISTINCT a.aid as aid, a.title as title, c.name as cname ".
								   "FROM {$CONFIG['TABLE_ALBUMS']} as a, {$CONFIG['TABLE_CATEGORIES']} as c ".
								   "WHERE a.category = c.cid AND a.category < '%1\$s'",
	'get_alb_without_cat'		=> "SELECT aid, title FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = 0 ORDER BY title",
	'list_box_get_my_alb'		=> "SELECT aid , title FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = %1\$s",
	'list_box_public_alb'		=> "SELECT a.aid, a.title, c.name AS cname FROM {$CONFIG['TABLE_ALBUMS']} AS a ".
								   "INNER JOIN {$CONFIG['TABLE_CATEGORIES']} AS c ON a.owner = '%1\$s' ".
								   "AND a.category = c.cid ORDER BY a.category",
	'get_gal_admin_alb'			=> "SELECT * FROM {$CONFIG['TABLE_ALBUMS']} WHERE 1 LIMIT 1",
	'get_user_admin_alb'		=> "SELECT * FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = %1\$s OR owner = '%2\$s' LIMIT 1",
	'get_clean_alb'				=> "SELECT * FROM {$CONFIG['TABLE_ALBUMS']} WHERE aid='%1\$s'",
	'get_pic_sum_hits'			=> "SELECT SUM(hits) as sum FROM {$CONFIG['TABLE_PICTURES']} WHERE aid='%1\$s'",
	'get_pic_sum_sum_votes'		=> "SELECT SUM(votes) as sum FROM {$CONFIG['TABLE_PICTURES']} WHERE aid='%1\$s' AND votes > 0",
	'count_pic_clean_alb'		=> "SELECT COUNT(*) as count FROM {$CONFIG['TABLE_PICTURES']} WHERE aid='%1\$s'"
);


/**********************************************************/
//queries from pic_editor.php
/***********************************************************/
if (defined('EDITPICS_PHP')) $cpg_db_pic_editor_php = array(
	'get_pic_data'			=> "SELECT * FROM {$CONFIG['TABLE_PICTURES']} WHERE pid = '$pid'",
	'save_image'			=> "UPDATE {$CONFIG['TABLE_PICTURES']} SET pheight = $height, pwidth = $width, filesize = $filesize, total_filesize = $total_filesize WHERE pid = '$pid'",
	'save_thumb'			=> "UPDATE {$CONFIG['TABLE_PICTURES']} SET total_filesize = $total_filesize WHERE pid = '$pid'"
	
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
	'set_priority_plugin'		=> 'update '.$CONFIG['TABLE_PLUGINS'].' set priority=%1\$s where plugin_id=%2\$s;'
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
								   "UNIX_TIMESTAMP(msg_date) as msg_date, msg_body, approval FROM {$CONFIG['TABLE_COMMENTS']} AS c, ".
								   "{$CONFIG['TABLE_PICTURES']} AS p WHERE msg_id='%1\$s' AND approval = 'YES' AND c.pid = p.pid",
	'get_user_id_verify_email'	=> "SELECT user_id FROM {$CONFIG['TABLE_USERS']}  WHERE user_email = '%1\$s'",
	'update_user_profile'		=> "UPDATE {$CONFIG['TABLE_USERS']} SET  user_profile1 = '%1\$s', user_profile2 = '%2\$s', ".
								   "user_profile3 = '%3\$s', user_profile4 = '%4\$s', user_profile5 = '%5\$s', ".
								   "user_profile6 = '%6\$s' %7\$s WHERE user_id = '%8\$s'",
	'update_user_password'		=> "UPDATE %1\$s SET %2\$s = '%3\$s' WHERE %4\$s = '%5\$s' AND BINARY %6\$s = '%7\$s'",
	'get_user_profile'			=> "SELECT user_name, user_email, user_group, UNIX_TIMESTAMP(user_regdate) as user_regdate, ".
								   "group_name, user_profile1, user_profile2, user_profile3, user_profile4, user_profile5, ".
								   "user_profile6, user_group_list, COUNT(pid) as pic_count, ROUND(SUM(total_filesize)/1024) ".
								   "as disk_usage, group_quota  FROM {$CONFIG['TABLE_USERS']} AS u ".
								   "INNER JOIN {$CONFIG['TABLE_USERGROUPS']} AS g ON user_group = group_id  ".
								   "LEFT JOIN {$CONFIG['TABLE_PICTURES']} AS p ON p.owner_id = u.user_id  ".
								   "WHERE user_id ='%1\$s'  GROUP BY user_id ",
	'get_group_name'			=> "SELECT group_name  FROM {$CONFIG['TABLE_USERGROUPS']}  WHERE group_id IN (%1\$s) ".
								   "AND group_id != %2\$s  ORDER BY group_name"
);


/**********************************************************/
//queries from ratepic.php
/***********************************************************/
if (defined('RATEPIC_PHP')) $cpg_db_ratepic_php = array(
	'select_a.votes'			=> "SELECT a.votes as votes_allowed, p.votes as votes, pic_rating, owner_id " . "FROM {$CONFIG['TABLE_PICTURES']} AS p, {$CONFIG['TABLE_ALBUMS']} AS a " . "WHERE p.aid = a.aid AND pid = '$pic' LIMIT 1",
	'delete_from_votes'			=> "DELETE " . "FROM {$CONFIG['TABLE_VOTES']} " . "WHERE vote_time < $clean_before",
	'select_all_from_votes'		=> "SELECT * " . "FROM {$CONFIG['TABLE_VOTES']} " . "WHERE pic_id = '$pic' AND user_md5_id = '$user_md5_id'",
	'update_pictures'			=> "UPDATE {$CONFIG['TABLE_PICTURES']} " . "SET pic_rating = '$new_rating', votes = votes + 1 " . "WHERE pid = '$pic' LIMIT 1",
	'insert_into_votes'			=> "INSERT INTO {$CONFIG['TABLE_VOTES']} " . "VALUES ('$pic', '$user_md5_id', '$curr_time')",
	'insert_into_votes_ststs'	=> "INSERT INTO {$CONFIG['TABLE_VOTE_STATS']} SET pid = $pic, rating = $rate, Ip   = '$raw_ip', sdate = '$time', referer = '$referer', browser = '{$client_details['browser']}', os = '{$client_details['os']}', uid = '$voteUserId'"
);


/**********************************************************/
//queries from register.php
/***********************************************************/
if (defined('REGISTER_PHP')) $cpg_db_register_php = array(
	'select_user_id'			=> "SELECT user_id " . "FROM {$CONFIG['TABLE_USERS']} " . "WHERE user_name = '" . $user_name . "'",
	'select_user_id_02'			=> "SELECT user_id " . "FROM {$CONFIG['TABLE_USERS']} " . "WHERE user_email = '" . addslashes($email) . "'",
	'insert_into_users'			=> "INSERT INTO {$CONFIG['TABLE_USERS']} "."(user_regdate, user_active, user_actkey, user_name, user_password, user_email, user_profile1, user_profile2, user_profile3, user_profile4, user_profile5, user_profile6) "."VALUES (NOW(), '$active', '$act_key', '$user_name', '$encpassword', '$email', '$profile1', '$profile2', '$profile3', '$profile4', '$profile5', '$profile6')",
	'insert_into_albums'		=> "INSERT INTO {$CONFIG['TABLE_ALBUMS']} (`title`, `category`) VALUES ('$user_name', $catid)",
	'select_user_active'		=> "SELECT user_active user_active, user_email, user_name, user_password " . "FROM {$CONFIG['TABLE_USERS']} " . "WHERE user_actkey = '$act_key' " . "LIMIT 1",
	'update_users'				=> "UPDATE {$CONFIG['TABLE_USERS']} SET user_active = 'YES' WHERE user_actkey = '$act_key' LIMIT 1"
);


/**********************************************************/
//queries from report_file.php
/***********************************************************/
if (defined('REPORT_FILE_PHP')) $cpg_db_report_file_php = array(
	'select_all_from_pictures'	=> "SELECT * from {$CONFIG['TABLE_PICTURES']} WHERE pid='$pid' $ALBUM_SET",
	'select_msg_id'				=> "SELECT msg_id, msg_author, msg_body, UNIX_TIMESTAMP(msg_date) AS msg_date, author_id, author_md5_id, msg_raw_ip, msg_hdr_ip, approval FROM {$CONFIG['TABLE_COMMENTS']} WHERE msg_id='$cid' AND approval = 'YES' AND pid='$pid'"
);


/**********************************************************/
//queries from reviewcom.php
/***********************************************************/
if (defined('REVIEWCOM_PHP')) $cpg_db_reviewcom_php = array(
	'verify_admin'					=> "SELECT msg_id, msg_author, msg_body, UNIX_TIMESTAMP(msg_date)  AS msg_date, approval, author_id,".
									   " {$CONFIG['TABLE_COMMENTS']}.pid  AS pid, aid, filepath, filename, url_prefix, pwidth, pheight ".
									   " FROM {$CONFIG['TABLE_COMMENTS']}, {$CONFIG['TABLE_PICTURES']} ".
									   " WHERE {$CONFIG['TABLE_COMMENTS']}.pid = {$CONFIG['TABLE_PICTURES']}.pid ".
									   "AND {$CONFIG['TABLE_COMMENTS']}.msg_id = '%1\$s' LIMIT 1",
	'comments_query_approval'		=> "UPDATE {$CONFIG['TABLE_COMMENTS']} SET `approval` = '%1\$s' WHERE msg_id = '%2\$s'",
	'display_comment_approval_only'	=> "UPDATE {$CONFIG['TABLE_CONFIG']} SET value = '%1\$s' WHERE name = 'display_comment_approval_only'",
	'set_approval_yes'				=> "UPDATE {$CONFIG['TABLE_COMMENTS']} SET `approval` = 'YES' WHERE msg_id IN (%1\$s)",
	'set_approval_no'				=> "UPDATE {$CONFIG['TABLE_COMMENTS']} SET `approval` = 'NO' WHERE msg_id IN (%1\$s)",
	'delete_selected_comments'		=> "DELETE FROM {$CONFIG['TABLE_COMMENTS']} WHERE msg_id IN (%1\$s)",
	//'update_comments_04'			=> "UPDATE {$CONFIG['TABLE_COMMENTS']} SET `approval` = 'YES' WHERE msg_id IN $cid_set",
	//'update_comments_05'			=> "UPDATE {$CONFIG['TABLE_COMMENTS']} SET `approval` = 'NO' WHERE msg_id IN $cid_set",
	'count_comments'				=> "SELECT count(*) as count FROM {$CONFIG['TABLE_COMMENTS']} WHERE 1",
	'only_comments_needing_approval'=> "SELECT msg_id, msg_author, msg_body, UNIX_TIMESTAMP(msg_date)  AS msg_date, approval, author_id,".
									   " {$CONFIG['TABLE_COMMENTS']}.pid  AS pid, aid, filepath, filename, url_prefix, pwidth, pheight ".
									   " FROM {$CONFIG['TABLE_COMMENTS']}, {$CONFIG['TABLE_PICTURES']} ".
									   " WHERE {$CONFIG['TABLE_COMMENTS']}.pid = {$CONFIG['TABLE_PICTURES']}.pid %1\$s ".
									   "ORDER BY %2\$s  LIMIT %3\$s, %4\$s"
);


/**********************************************************/
//queries from search.php
/***********************************************************/
if (defined('SEARCH_PHP')) $cpg_db_search_php = array(
	'get_all_config'		=> "SELECT * FROM {$CONFIG['TABLE_CONFIG']} WHERE name LIKE '%1\$s' AND value <> '' ORDER BY name ASC"
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
	'get_all_alb_in_db'				=> "SELECT aid, title " . "FROM {$CONFIG['TABLE_ALBUMS']} " . "WHERE 1",
	'browse_batch_add_edit'			=> "UPDATE {$CONFIG['TABLE_CONFIG']} SET value = '%1\$s' WHERE name = 'browse_batch_add'",
	'display_thumbs_batch_add_edit'	=> "UPDATE {$CONFIG['TABLE_CONFIG']} SET value = '%1\$s' WHERE name = 'display_thumbs_batch_add'"
);


/**********************************************************/
//queries from send_activation.php
/***********************************************************/
if (defined('SEND_ACTIVATION_PHP') || defined('REGISTER_PHP')) $cpg_db_send_activation_php = array(
	'select_user_id'		=> "SELECT user_id, user_group,user_active,user_name, user_email, user_actkey FROM {$CONFIG['TABLE_USERS']} WHERE user_email = '$emailaddress' AND user_active = 'NO'"
);


/**********************************************************/
//queries from sidebar.php
/***********************************************************/
if (defined('SIDEBAR_PHP')) $cpg_db_sidebar_php = array(
	'select_aid'				=> "SELECT aid FROM {$CONFIG['TABLE_ALBUMS']} as a WHERE category>=" . FIRST_USER_CAT . $album_filter,
	'select_cid'				=> "SELECT cid, name " . "FROM {$CONFIG['TABLE_CATEGORIES']} " . "WHERE parent = '$parent' " . "ORDER BY ". $cat_sort_order,
	'select_distinct_user_id'	=> "SELECT DISTINCT user_id, user_name FROM {$CONFIG['TABLE_USERS']}, {$CONFIG['TABLE_ALBUMS']} WHERE  10000 + {$CONFIG['TABLE_USERS']}.user_id = {$CONFIG['TABLE_ALBUMS']}.category ORDER BY user_name ASC",
	'select_aid'				=> "SELECT aid,title FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = $category ".$ALBUM_SET .$album_filter . " ORDER BY pos",
	'select_aid'				=> "SELECT aid,title FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = $category ".$ALBUM_SET .$unaliased_album_filter . " ORDER BY pos"
);


/**********************************************************/
//queries from stat_details.php
/***********************************************************/
if (defined('STAT_DETAILS_PHP')) $cpg_db_stat_details_php = array(
	'update_config'				=> "UPDATE {$CONFIG['TABLE_CONFIG']} SET value = '{$get_hit_details}' WHERE name = 'hit_details'",
	'update_config_02'			=> "UPDATE {$CONFIG['TABLE_CONFIG']} SET value = '{$get_vote_details}' WHERE name = 'vote_details'",
	'select_rating'				=> "SELECT rating, count(rating) AS totalVotes FROM {$CONFIG['TABLE_VOTE_STATS']} WHERE pid=$pid GROUP BY rating",
	'select_count_pid'			=> "SELECT COUNT(pid) FROM $queryTable $countWhere",
	'select_querytable'			=> "SELECT {$queryTable}.* $querySelect  FROM $queryTable $queryFrom  WHERE $queryWhere  ORDER BY $sort $dir LIMIT $start, $amount"
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
//queries from update.php
/***********************************************************/
 $cpg_db_update_php = array(
	'get_user_active'			=> "SELECT user_active FROM {$CONFIG['TABLE_PREFIX']}users WHERE user_group = 1 ".
								   "AND user_name = '$user' AND (user_password = '$pass' OR user_password = '$pass2')",
	'select_all_from_config'	=> "SELECT * FROM ".$CONFIG['TABLE_PREFIX']."config;",
	'describe'					=> "DESCRIBE ".$query[2],
	'show_warnings'				=> 'SHOW WARNINGS',
	'describe_02'				=> "DESCRIBE ".$query[2],
	'show_warnings'				=> 'SHOW WARNINGS;'
);


/**********************************************************/
//queries from upload.php
/***********************************************************/
if (defined('UPLOAD_PHP') || defined('DB_INPUT_PHP') || defined('ADMIN_PHP')) $cpg_db_upload_php = array(
	'select_cid'				=> "SELECT cid, parent, name FROM " . $CONFIG['TABLE_CATEGORIES'] . " WHERE 1",
	'select_unique_id'			=> "SELECT unique_ID FROM {$CONFIG['TABLE_TEMPDATA']}",
	'insert_into_tempdata'		=> "INSERT INTO {$CONFIG['TABLE_TEMPDATA']} VALUES ('$unique_ID', '$encoded_string', '$timestamp')",
	'update_tempdata'			=> "UPDATE {$CONFIG['TABLE_TEMPDATA']} SET encoded_string = '$encoded_string' WHERE unique_ID = '$unique_ID'",
	'delete_from_tempdata'		=> "DELETE FROM {$CONFIG['TABLE_TEMPDATA']} WHERE unique_ID = '$unique_ID'",
	'select_encoded_string'		=> "SELECT encoded_string FROM {$CONFIG['TABLE_TEMPDATA']} WHERE unique_ID = '$unique_ID'",
	'delete_from_tempdata_02'	=> "DELETE FROM {$CONFIG['TABLE_TEMPDATA']} WHERE timestamp < $comparative_timestamp",
	'select_aid'				=> "SELECT aid, title, cid, name FROM {$CONFIG['TABLE_ALBUMS']} INNER JOIN {$CONFIG['TABLE_CATEGORIES']} ON cid = category WHERE category < " . FIRST_USER_CAT,
	'select_aid_02'				=> "SELECT aid, title FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = 0",
	'select_aid_03'				=> "SELECT aid, title, cid, name FROM {$CONFIG['TABLE_ALBUMS']} INNER JOIN {$CONFIG['TABLE_CATEGORIES']} ON cid = category WHERE category < " . FIRST_USER_CAT . " AND ((uploads='YES' AND (visibility = '0' OR visibility IN ".USER_GROUP_SET.")) OR (owner=".USER_ID."))",
	'select_aid_04'				=> "SELECT aid, title FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = 0 AND ((uploads='YES' AND (visibility = '0' OR visibility IN ".USER_GROUP_SET.")) OR (owner=".USER_ID."))",
	'select_aid_05'				=> "SELECT aid, title FROM {$CONFIG['TABLE_ALBUMS']} WHERE category='" . (FIRST_USER_CAT + USER_ID) . "' ORDER BY title",
	'select_extension'			=> "SELECT extension FROM {$CONFIG['TABLE_FILETYPES']} WHERE mime='$URI_MIME_type'",
	'select_category'			=> "SELECT category FROM {$CONFIG['TABLE_ALBUMS']} WHERE aid='$album' and (uploads = 'YES' OR category = '" . (USER_ID + FIRST_USER_CAT) . "' OR owner = '" . USER_ID . "')",
	'select_category_02'		=> "SELECT category FROM {$CONFIG['TABLE_ALBUMS']} WHERE aid='$album'"
);


/**********************************************************/
//queries from usermgr.php
/***********************************************************/
if (defined('USERMGR_PHP') || defined('PROFILE_PHP')) $cpg_db_usermgr_php = array(
	'delete_user'				=> "DELETE FROM {$CONFIG['TABLE_USERS']} WHERE user_name = '' LIMIT 1",
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
	'switch_new_user'			=> "INSERT INTO {$CONFIG['TABLE_USERS']}(user_regdate, user_active, user_profile6) VALUES (NOW(), 'YES', '')",
	'switch_group_alb_access'	=> "SELECT group_name  FROM {$CONFIG['TABLE_USERGROUPS']} AS groups, {$CONFIG['TABLE_ALBUMS']} AS albums ".
								   " WHERE group_id = '%1\$s' AND albums.visibility = groups.group_id"
//	'delete_from_users_03'		=> "DELETE FROM {$CONFIG['TABLE_USERS']} WHERE user_name = '' LIMIT 1"
);


/**********************************************************/
//queries from util.php
/***********************************************************/
if (defined('UTIL_PHP') || defined('UPLOAD_PHP')) $cpg_db_util_php = array(
	'del_titles_update'				=> "UPDATE {$CONFIG['TABLE_PICTURES']} SET title = '' %1\$s",
	'get_all_pics'					=> "SELECT * FROM {$CONFIG['TABLE_PICTURES']} %1\$s",
	'filename_to_title_update'		=> "UPDATE {$CONFIG['TABLE_PICTURES']} SET title = '%1\$s' WHERE pid = '%2\$s'",
	'filloptions'					=> "SELECT aid, category, IF(user_name IS NOT NULL, CONCAT('(', user_name, ') ',title), ".
									   " CONCAT(' - ', title)) AS title " . "FROM {$CONFIG['TABLE_ALBUMS']} AS a ".
									   "LEFT JOIN {$CONFIG['TABLE_USERS']} AS u ON category = (%1\$s + user_id) ".
									   "ORDER BY category, title",
	'filloptions_get_name'			=> "SELECT name FROM {$CONFIG['TABLE_CATEGORIES']} WHERE cid = %1\$s",
	'update_thumbs_get_pics'		=> "SELECT * FROM {$CONFIG['TABLE_PICTURES']} %1\$s LIMIT %2\$s, %3\$s",
	'update_thumbs_update_pic'		=> "UPDATE {$CONFIG['TABLE_PICTURES']} SET pwidth='%1\$s' , pheight='%2\$s' WHERE pid='%3\$s' ",
	//'delete_backup_img'				=> "SELECT * FROM {$CONFIG['TABLE_PICTURES']} %1\$s",
	//'del_orig_get_pic'				=> "SELECT * FROM {$CONFIG['TABLE_PICTURES']} $albstr",
	'del_orig_update_pic'			=> "UPDATE {$CONFIG['TABLE_PICTURES']} SET filesize='%1\$s', total_filesize='%2\$s', ".
									   "pwidth='%3\$s', pheight='%4\$s' WHERE pid='%5\$s' ",
	//'select_all_from_pictures_05'	=> "SELECT * FROM {$CONFIG['TABLE_PICTURES']} $albstr",
	'del_norm_update_pic'			=> "UPDATE {$CONFIG['TABLE_PICTURES']} SET total_filesize='%1\$s' WHERE pid='%2\$s'",
	'del_orphans_single_comment'	=> "DELETE FROM {$CONFIG['TABLE_COMMENTS']} WHERE msg_id= '%1\$s' LIMIT 1",
	'del_orphans_get_pic_id'		=> "SELECT pid FROM {$CONFIG['TABLE_PICTURES']}",
	'del_orphans_get_all_comment'	=> "SELECT * FROM {$CONFIG['TABLE_COMMENTS']} WHERE pid NOT IN %1\$s",
	'del_orphans_comment'			=> "DELETE FROM {$CONFIG['TABLE_COMMENTS']} WHERE msg_id= %1\$s",
	//'select_all_from_pictures_06'	=> "SELECT * FROM {$CONFIG['TABLE_PICTURES']} $albstr",
	'del_old_pics'					=> "DELETE FROM {$CONFIG['TABLE_PICTURES']} WHERE pid='%1\$s' LIMIT 1",
	'del_old_comment'				=> "DELETE FROM {$CONFIG['TABLE_COMMENTS']} WHERE pid='%1\$s' LIMIT 1",
	'del_old_exif'					=> "DELETE FROM {$CONFIG['TABLE_EXIF']} WHERE filename='%1\$s' LIMIT 1",
	'reset_views_update_pics'		=> "UPDATE {$CONFIG['TABLE_PICTURES']} SET hits ='0' %1\$s",
	'refresh_db_get_all_pics'		=> "SELECT * FROM {$CONFIG['TABLE_PICTURES']} %1\$s ORDER BY pid ASC LIMIT %2\$s, %3\$s",
	'refresh_db_set_total_filesize'	=> "UPDATE {$CONFIG['TABLE_PICTURES']} SET total_filesize = '%1\$s' ".
									   "WHERE pid = '%2\$s' LIMIT 1",
	'refresh_db_set_filesize'		=> "UPDATE {$CONFIG['TABLE_PICTURES']} SET filesize = '%1\$s' WHERE pid = '%2\$s' LIMIT 1",
	'refresh_db_set_dimensions'		=> "UPDATE {$CONFIG['TABLE_PICTURES']} SET `pwidth` = '%1\$s', `pheight` = '%2\$s' ".
									   "WHERE `pid` = '%3\$s' LIMIT 1"
);


/**********************************************************/
//queries from xp_publish.php
/***********************************************************
if (defined('XP_PUBLISH_PHP') || defined('LOGIN_PHP') || defined('DB_INPUT_PHP') || defined(ALBMGR_PHP)) $cpg_db_xp_publish_php = array(
	'select_cid'			=> "SELECT cid, name, description FROM {$CONFIG['TABLE_CATEGORIES']} WHERE parent = '$parent' AND cid != 1 ORDER BY pos",
	'select_aid'			=> "SELECT aid, title FROM {$CONFIG['TABLE_ALBUMS']} WHERE category < " . FIRST_USER_CAT . " ORDER BY title",
	'select_aid_02'			=> "SELECT aid, title FROM {$CONFIG['TABLE_ALBUMS']} WHERE category='" . (FIRST_USER_CAT + USER_ID) . "' ORDER BY title",
	'insert_into_albums'	=> "INSERT INTO {$CONFIG['TABLE_ALBUMS']} (category, title, uploads, pos) VALUES ('$category', '" . $superCage->post->getEscaped('new_alb_name') . "', 'NO',  '0')",
	'select_category'		=> "SELECT category FROM {$CONFIG['TABLE_ALBUMS']} WHERE aid='$album' and category = '" . (USER_ID + FIRST_USER_CAT) . "'",
	'select_category'		=> "SELECT category FROM {$CONFIG['TABLE_ALBUMS']} WHERE aid='$album'",
	'select_position'		=> "SELECT position FROM {$CONFIG['TABLE_PICTURES']} WHERE aid='$album' order by position desc"
);


/**********************************************************/
//queries from zipdownload.php
/***********************************************************/
if (defined('THUMBNAILS_PHP') || defined('INDEX_PHP')) $cpg_db_zipdownload_php = array(
	'select_filepath'		=> "SELECT $select_columns FROM {$CONFIG['TABLE_PICTURES']} WHERE approved = 'YES'AND pid IN ($favs)"
);


/**********************************************************************************************************/
//	queries  from api/ cpgAPIAuth.php
/**********************************************************************************************************/
$cpg_db_api_auth_php = array(
	'check_in_users_table'			=> "SELECT user_id, user_name, user_password FROM {$CONFIG['TABLE_USERS']} ".
									   "WHERE user_name = '%1\$s' AND BINARY user_password = '%2\$s' AND user_active = 'YES'",
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


/**********************************************************************************************************/
//	queries  from api/ cpgAPIcatList.php
/**********************************************************************************************************/
$cpg_db_api_catlist_php = array(
	'subcat_data_check_cid'		=> "SELECT cid, name, description  FROM {$CONFIG['TABLE_CATEGORIES']} ".
								   " WHERE cid = '%1\$s'  ORDER BY pos",
	'subcat_data_user_is_admin'	=> "SELECT user_name, user_id FROM {$CONFIG['TABLE_USERS']}",
	'subcat_data_check_parent'	=> "SELECT cid, name, description  FROM {$CONFIG['TABLE_CATEGORIES']} ".
								   " WHERE parent = '%1\$s'  ORDER BY pos",
	'get_album_data'			=> "SELECT aid,title FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = %1\$s %2\$s"
);


/**********************************************************************************************************/
//	queries  from api/ cpgAPIinit.inc.php
/**********************************************************************************************************/
$cpg_db_api_init_inc = array(
	'get_all_config'	=> "SELECT * FROM {$CONFIG['TABLE_CONFIG']}"
);


/**********************************************************************************************************/
//	queries  from api/ cpgAPIpicmgmt.inc.php
/**********************************************************************************************************/
$cpg_db_api_picmgmt_inc = array(
	'select_sum_total_filesize'	=> "SELECT sum(total_filesize) FROM {$CONFIG['TABLE_PICTURES']}, {$CONFIG['TABLE_ALBUMS']} WHERE  {$CONFIG['TABLE_PICTURES']}.aid = {$CONFIG['TABLE_ALBUMS']}.aid AND category = '" . (FIRST_USER_CAT + USER_ID) . "'",
	'insert_into_pictures'		=> "INSERT INTO {$CONFIG['TABLE_PICTURES']} (pid, aid, filepath, filename, filesize, total_filesize, pwidth, pheight, ctime, owner_id, owner_name, title, caption, keywords, approved, user1, user2, user3, user4, pic_raw_ip, pic_hdr_ip, position) VALUES ('', '$aid', '" . addslashes($filepath) . "', '" . addslashes($filename) . "', '$image_filesize', '$total_filesize', '{$imagesize[0]}', '{$imagesize[1]}', '" . time() . "', '$user_id', '$username','$title', '$caption', '$keywords', '$approved', '$user1', '$user2', '$user3', '$user4', '$raw_ip', '$hdr_ip', '$position')"
);


/**********************************************************************************************************/
//	queries  from api/ cpgAPIupload.php
/**********************************************************************************************************/
$cpg_db_api_upload_php = array(
	'select_category'			=> "SELECT category FROM {$CONFIG['TABLE_ALBUMS']} WHERE aid='".(int)$_POST['aid']."' and (uploads = 'YES' OR category = '" . (USER_ID + FIRST_USER_CAT) . "')",
	'select_category_02'		=> "SELECT category FROM {$CONFIG['TABLE_ALBUMS']} WHERE aid='".(int)$_POST['aid']."'"
);


/**********************************************************************************************************/
//	queries  from  bridge/ coppermine.inc.php
/**********************************************************************************************************/
$cpg_db_coppermine_inc = array(
	'login_get_user_info'		=> "SELECT user_id, user_name, user_password FROM %1\$s WHERE %2\$s",
	'login_set_user_lastvisit'	=> "UPDATE %1\$s SET user_lastvisit = NOW() WHERE %2\$s",
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
	'get_group_data'			=> "SELECT group_id, group_name FROM {$CONFIG['TABLE_USERGROUPS']} WHERE 1",
	'add_admin_info'			=> "INSERT INTO {$CONFIG['TABLE_USERGROUPS']} (group_id, group_name, has_admin_access) ".
								   "VALUES ('%1\$s', '%2\$s', '%3\$s')",
	'update_group_names'		=> "UPDATE {$CONFIG['TABLE_USERGROUPS']} SET group_name = '%1\$s' WHERE group_id = '%2\$s' LIMIT 1",
	'fix_admin_group'			=> "UPDATE {$CONFIG['TABLE_USERGROUPS']} SET has_admin_access = '1' WHERE group_id = '1' LIMIT 1"
);


/**********************************************************************************************************/
//	queries  from  bridge/ eblah.inc.php
/**********************************************************************************************************/
$cpg_db_eblah_inc = array(
	'get_user_id'		=> "SELECT %1\$s AS user_id FROM %2\$s WHERE %3\$s  = '%4\$s'",
	'get_username'		=> "SELECT user_name FROM {$CONFIG['TABLE_USERS']}",
	'sync_users'		=> "INSERT IGNORE INTO %1\$s (`user_name`, `user_password`, `user_email`, `user_active`, `user_group`) ".
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
//	queries  from  bridge/ mybb.inc.php
/**********************************************************************************************************/
$cpg_db_mybb_inc_php = array(
	'select_u.user_id'			=> "SELECT u.{$thisfield['user_id']}, u.{$thisfield['password']} FROM {$thissessionstable} AS s INNER JOIN {$thisusertable} AS u ON u.uid = s.uid WHERE sid='".$thissid."' AND ip='".$thisipaddress."'", $thislink_id
);


/**********************************************************************************************************/
//	queries  from  bridge/ phorum.inc.php
/**********************************************************************************************************/
$cpg_db_phorum_inc_php = array(
	'select_all_from_groupstable'
);


/**********************************************************************************************************/
//	queries  from  bridge/ phpbb22.inc.php
/**********************************************************************************************************/
$cpg_db_phpbb22_inc_php = array(
	'select_user_id'		=> "SELECT user_id, username, group_id FROM {$thissessionstable} INNER JOIN {$thisusertable} ON session_user_id = user_id WHERE session_id='$session_id';"
);


/**********************************************************************************************************/
//	queries  from  bridge/ phpbb2018.inc.php
/**********************************************************************************************************/
$cpg_db_phpbb2018_inc_php = array(
	'select_all_from_groupstable'	=> "SELECT * FROM {$thisgroupstable} WHERE group_single_user = 0",
	'select_u.user_id'				=> "SELECT u.{$thisfield['user_id']} AS user_id, u.{$thisfield['password']} AS password, u.user_level FROM {$thisusertable} AS u, {$thissessionstable} AS s WHERE u.{$thisfield['user_id']}=s.session_user_id AND s.session_id = '{$thissid}' AND u.user_id > 0",
	'select_ug_usertbl_group_id'	=> "SELECT ug.{$thisfield['usertbl_group_id']}+100 AS group_id FROM {$thisusertable} AS u, {$thisusergroupstable} AS ug, {$thisgroupstable} as g WHERE u.{$thisfield['user_id']}=ug.{$thisfield['user_id']} AND u.{$thisfield['user_id']}='{$row['id']}' AND g.{$thisfield['grouptbl_group_id']} = ug.{$thisfield['grouptbl_group_id']}",
	'select_u.user_id_02'			=> "SELECT u.user_id, u.user_password FROM {$thissessionskeystable} AS s INNER JOIN {$thisusertable} AS u ON s.user_id = u.user_id WHERE u.user_id = '$cookieid' AND u.user_active = 1 AND s.key_id = MD5('$cookiepass')",
	'select_group_id'				=> "SELECT group_id, group_name, group_quota FROM {$C['TABLE_USERGROUPS']}",
	'select_group_id_02'			=> "SELECT group_id FROM {$thisgroupstable} WHERE group_single_user = 0",
	'select_u.user_id_03'			=> "SELECT u.{$f['user_id']} as user_id, MIN(ug.{$f['grouptbl_group_id']}) AS user_group, {$f['username']} as user_name, {$f['email']} as user_email, {$f['regdate']} as user_regdate, {$f['lastvisit']} as user_lastvisit, '' as user_active, 0 as pic_count, 0 as disk_usage ".
						               "FROM {$thisusertable} AS u ".
									   "INNER JOIN {$thisusergroupstable} AS ug ON u.{$thisfield['user_id']}=ug.{$thisfield['user_id']}    ".   
						               "WHERE u.{$f['user_id']} > 0 " . $options['search'].
						               "GROUP BY ug.{$f['user_id']} " . $sort .
						               " LIMIT {$options['lower_limit']}, {$options['users_per_page']};",
	'select_owner_id'				=> "SELECT owner_id, COUNT(pid) as pic_count, ROUND(SUM(total_filesize)/1024) as disk_usage FROM {$C['TABLE_PICTURES']} WHERE owner_id IN ($user_list_string) GROUP BY owner_id" 
);


/**********************************************************************************************************/
//	queries  from  bridge/ phpbb.inc.php
/**********************************************************************************************************/
$cpg_db_phpbb_inc_php = array(
	'select_all_from_groupstable'	=> "SELECT * FROM {$thisgroupstable} WHERE group_single_user = 0",
	'select_u.user_id'				=> "SELECT u.{$thisfield['user_id']} AS user_id, u.{$thisfield['password']} AS password FROM {$thisusertable} AS u, {$thissessionstable} AS s WHERE u.{$thisfield['user_id']}=s.session_user_id AND s.session_id = '$session_id' AND u.user_id > 0",
	'select_ug.usertbl_group_id'	=> "SELECT ug.{$thisfield['usertbl_group_id']}+100 AS group_id FROM {$thisusertable} AS u, {$thisusergroupstable} AS ug, {$thisgroupstable} as g WHERE u.{$thisfield['user_id']}=ug.{$thisfield['user_id']} AND u.{$thisfield['user_id']}='{$row['id']}' AND g.{$thisfield['grouptbl_group_id']} = ug.{$thisfield['grouptbl_group_id']}",
	'select_group_id'				=> "SELECT group_id, group_name, group_quota FROM {$C['TABLE_USERGROUPS']}",
	'select_group_id'				=> "SELECT group_id FROM {$thisgroupstable} WHERE group_single_user = 0",
	'select_u,user_id'				=> "SELECT u.{$f['user_id']} as user_id, MIN(ug.{$f['grouptbl_group_id']}) AS user_group, {$f['username']} as user_name, {$f['email']} as user_email, {$f['regdate']} as user_regdate, {$f['lastvisit']} as user_lastvisit, '' as user_active, 0 as pic_count, 0 as disk_usage ".
						               "FROM {$thisusertable} AS u ".
									   "INNER JOIN {$thisusergroupstable} AS ug ON u.{$thisfield['user_id']}=ug.{$thisfield['user_id']}    ".   
						               "WHERE u.{$f['user_id']} > 0 " . $options['search'].
						               "GROUP BY ug.{$f['user_id']} " . $sort .
						               " LIMIT {$options['lower_limit']}, {$options['users_per_page']};",
	'select_owner_id'				=> "SELECT owner_id, COUNT(pid) as pic_count, ROUND(SUM(total_filesize)/1024) as disk_usage FROM {$C['TABLE_PICTURES']} WHERE owner_id IN ($user_list_string) GROUP BY owner_id"
);


/**********************************************************************************************************/
//	queries  from  bridge/ punbb12.inc.php
/**********************************************************************************************************/
$cpg_db_punbb12_inc_php = array(
	'select_group_id'				=> "SELECT group_id, group_name, group_quota FROM {$C['TABLE_USERGROUPS']}",
	'select_grouptbl_group_id'		=> "SELECT {$f['grouptbl_group_id']} FROM {$thisgroupstable}",
	'select_u.user)id'				=> "SELECT u.{$f['user_id']} as user_id, u.{$f['usertbl_group_id']} AS user_group, {$f['username']} as user_name, {$f['email']} as user_email, {$f['regdate']} as user_regdate, {$f['lastvisit']} as user_lastvisit, '' as user_active, 0 AS pic_count ".
						               "FROM {$thisusertable} AS u ".
						               "WHERE u.{$f['user_id']} > 1 " . $options['search']
						                . $sort .
						               " LIMIT {$options['lower_limit']}, {$options['users_per_page']}",
	'select_owner_id'				=> "SELECT owner_id, COUNT(pid) as pic_count, ROUND(SUM(total_filesize)/1024) as disk_usage FROM {$C['TABLE_PICTURES']} WHERE owner_id IN ($user_list_string) GROUP BY owner_id"
);


/**********************************************************************************************************/
//	queries  from  bridge/ punbb115.inc.php
/**********************************************************************************************************/
$cpg_db_punbb115_inc_php = array(
	'select_id'				=> "SELECT id, username, status+100 AS status FROM {$thisusertable} WHERE username = '$username' AND password = '$pass_hash'", $thislink_id
);


/**********************************************************************************************************/
//	queries  from  bridge/ smf10.inc.php
/**********************************************************************************************************/
$cpg_db_smf10_inc_php = array(
	'select_all_from_groupstable'	=> "SELECT * FROM {$thisgroupstable}"
);


/**********************************************************************************************************/
//	queries  from  bridge/ smf20.inc.php
/**********************************************************************************************************/
$cpg_db_smf20_inc_php = array(
	'select_all_from_groupstable'	=> "SELECT * FROM {$thisgroupstable}"
);


/**********************************************************************************************************/
//	queries  from  bridge/ udb_base.inc.php
/**********************************************************************************************************/
$cpg_db_udb_base_inc = array(
	'auth_set_usergrptbl'			=> "SELECT u.%1\$s AS id, u.%2\$s AS username, u.%3\$s AS password, ug.%4\$s AS group_id ".
									   "FROM %5\$s AS u, %6\$s AS ug  WHERE u.%1\$s =ug.%1\$s AND u.%1\$s ='%7\$s'",
	'auth_notset_usergrptbl'		=> "SELECT u.%1\$s AS id, u.%2\$s AS username, u.%3\$s AS password, ".
									   "u.%4\$s+100 AS group_id  FROM %5\$s AS u INNER JOIN %6\$s AS g ".
									   "ON u.%4\$s=g.%7\$s  WHERE u.%1\$s ='%8\$s'",
	'get_user_count'				=> "SELECT count(*) as count FROM %1\$s WHERE 1",
	'get_users'						=> "SELECT %1\$s as user_id, %2\$s as user_name, %3\$s as user_email, ".
									   "UNIX_TIMESTAMP(%4\$s) as user_regdate, UNIX_TIMESTAMP(%5\$s) as user_lastvisit, %6\$s as user_active, ".
						               "COUNT(pid) as pic_count, ROUND(SUM(total_filesize)/1024) as disk_usage, group_name, group_quota ".
						               "FROM %7\$s AS u  INNER JOIN %8\$s AS g ON u.%9\$s = g.group_id ".
						               "LEFT JOIN %10\$s AS p ON p.owner_id = u.%1\$s  %11\$s".
						               "GROUP BY user_id  ORDER BY %12\%s  LIMIT %13\$s, %14\$s;",
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
	'get_user_info'					=> "SELECT *, %1\$s AS user_name, %2\$s AS user_email, UNIX_TIMESTAMP(%3\$s)  AS user_regdate, %4\$s AS user_location,".
                                       "%5\$s AS user_website  FROM  %6\$s WHERE %7\$s = '%8\$s'",
	'list_users_with_alb'			=> "select p.aid from {$CONFIG['TABLE_ALBUMS']} as p  INNER JOIN {$CONFIG['TABLE_PICTURES']} AS pics ".
									   "ON pics.aid = p.aid where ( category>%1\$s %2\$s) group by category;",
	'list_users_can_join_tables'	=> "SELECT %1\$s as user_id,%2\$s as user_name,COUNT(DISTINCT a.aid) as alb_count,".
									   "COUNT(DISTINCT pid) as pic_count,MAX(pid) as thumb_pid, MAX(galleryicon) as gallery_pid ".
									   "FROM {$CONFIG['TABLE_ALBUMS']} AS a ".
									   "INNER JOIN %3\$s as u on u.%1\$s = a.category - %4\$s ".
									   "INNER JOIN {$CONFIG['TABLE_PICTURES']} AS p ON p.aid = a.aid ".
									   "WHERE ((isnull(approved) or approved='YES') AND category > %4\$s ) %5\$s ".
									   "GROUP BY user_id  ORDER BY category "."LIMIT %6\$s, %7\$s ",
	'list_users_cannot_join_tables'	=> "SELECT category - 10000 as user_id ".
									   "FROM {$CONFIG['TABLE_ALBUMS']} AS a ".
									   "INNER JOIN {$CONFIG['TABLE_PICTURES']} AS p ON p.aid = a.aid ".
									   "WHERE ((isnull(approved) or approved='YES') ".
									   "AND category > %1\$s) %2\$s GROUP BY category ".
									   "LIMIT %3\$s, %4\$s ",
	'list_users_mappings'			=> "SELECT %1\$s AS user_id, %2\$s AS user_name ".
									   "FROM %3\$s WHERE %1\$s IN (%4\$s)",
	'list_users_main_query'			=> "SELECT owner_id as user_id, COUNT(DISTINCT a.aid) as alb_count, COUNT(DISTINCT pid) ".
									   "as pic_count, MAX(pid) as thumb_pid, MAX(galleryicon) as gallery_pid FROM {$CONFIG['TABLE_ALBUMS']} ".
									   "AS a INNER JOIN {$CONFIG['TABLE_PICTURES']} AS p ON p.aid = a.aid ".
									   "WHERE ((isnull(approved) or approved='YES') AND category > %1\$s) %2\$s ".
									   "GROUP BY user_id  ORDER BY category LIMIT %3\$s, %4\$s ",
	'sync_use_post_based_grp'		=> "SELECT * FROM %1\$s WHERE %2\$s <> ''",
	'sync_not_use_post_based_grp'	=> "SELECT group_id, group_name FROM {$CONFIG['TABLE_USERGROUPS']} WHERE 1",
	'sync_delete_usergroups'		=> "DELETE FROM {$CONFIG['TABLE_USERGROUPS']} WHERE group_id = '%1\$s' LIMIT 1",
	'sync_insert_usergroups'		=> "INSERT INTO {$CONFIG['TABLE_USERGROUPS']} (group_id, group_name, has_admin_access) ".
									   "VALUES ('%1\$s', '%2\$s', '%3\$s')",
	'sync_update_usergroups'		=> "UPDATE {$CONFIG['TABLE_USERGROUPS']} SET group_name = '%1\$s' ".
									   "WHERE group_id = '%2\$s' LIMIT 1",
	'sync_fix_admin_grp'			=> "UPDATE {$CONFIG['TABLE_USERGROUPS']} SET has_admin_access = '1' WHERE group_id = '1' LIMIT 1",
	'admin_alb_can_join_tbl'		=> "SELECT aid, CONCAT('(', %1\$s, ') ', a.title) AS title   FROM {$CONFIG['TABLE_ALBUMS']} ".
										"AS a  INNER JOIN %2\$s AS u  ON category = ( %3\$s + %4\$s)  ORDER BY title",
	'admin_alb_cannot_join_tbl'		=> "SELECT aid, IF(category > %1\$s, CONCAT('* ', title), CONCAT(' ', title)) ".
									   "AS title  FROM {$CONFIG['TABLE_ALBUMS']}  ORDER BY title",
	'batch_add_can_join_tbl'		=> "SELECT aid, CONCAT('(', %1\$s, ') ', a.title) AS title  FROM {$CONFIG['TABLE_ALBUMS']} AS a  ".
									   "INNER JOIN %2\$s AS u  ON category = (%3\$s + %4\$s) ".
									   "AND %5\$s = %4\$s ORDER BY title",
	'batch_add_cannot_join_tbl'		=> "SELECT aid, IF(category > %1\$s, CONCAT('* ', title), CONCAT(' ', title)) AS title ".
									   "FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = '(%1\$s + %2\$s)' ORDER BY title",
	'user_alb_can_join_tbl'			=> "SELECT aid, IF(%1\$s IS NOT NULL, CONCAT('(', %1\$s, ') ', a.title), CONCAT(' - ', a.title)) AS title ".
                                       " FROM {$CONFIG['TABLE_ALBUMS']} AS a INNER JOIN %2\$s AS u
                                       ON category = ( %3\$s + %4\$s ) ORDER BY a.title",
	'public_alb_can_join_tbl'		=> "SELECT aid, title, name FROM {$CONFIG['TABLE_ALBUMS']} LEFT JOIN {$CONFIG['TABLE_CATEGORIES']} ".
									   "ON cid = category WHERE category < %1\$s ORDER BY title",
	'public_alb_cannot_join_tbl'	=> "SELECT aid, title, category FROM {$CONFIG['TABLE_ALBUMS']} WHERE category < %1\$s ORDER BY title",
	'get_cat_name'					=> "SELECT name, parent FROM " . $CONFIG['TABLE_CATEGORIES'] . " WHERE cid='%1\$s'",
	'user_alb_cannot_join_tbl'		=> "SELECT aid, title, category FROM {$CONFIG['TABLE_ALBUMS']} WHERE category >= %1\$s ORDER BY aid",
	'user_alb_ids_and_names'		=> "SELECT (%1\$s + %2\$s) AS id, CONCAT('(', %3\$s, ') ') as name ".
										"FROM %4\$s ORDER BY name ASC",
	'get_login_data'				=> "SELECT %1\$s AS user_id, %2\$s AS user_name FROM %3\$s".
									   " WHERE %2\$s = '%4\$s' AND BINARY %5\$s = '%6\$s'"
);


/**********************************************************************************************************/
//	queries  from  bridge/ vbulletin30.inc.php
/**********************************************************************************************************/
$cpg_db_vbulletin30_inc_php = array(
	'select_u.user_id'				=> "SELECT u.{$thisfield['user_id']}, u.{$thisfield['password']}, u.{$thisfield['grouptbl_group_id']}+100 AS usergroupid FROM {$thisusertable} AS u, {$thissessionstable} AS s WHERE s.{$thisfield['user_id']}=u.{$thisfield['user_id']} AND s.sessionhash='$session_id'",
	'select_g.usertbl_group_id'		=> "SELECT g.{$thisfield['usertbl_group_id']}+100 AS group_id, u.* FROM {$thisusertable} AS u, {$thisgroupstable} as g WHERE g.{$thisfield['grouptbl_group_id']} = u.{$thisfield['usertbl_group_id']} AND u.{$thisfield['user_id']} = '{$row['id']}'"
);


/**********************************************************************************************************/
//	queries  from  bridge/ xmb.inc.php
/**********************************************************************************************************/
$cpg_db_xmb_inc_php = array(
	'select_all_from_groupstable'	=> "SELECT * FROM {$thisgroupstable}",
	'select_id'						=> "SELECT id FROM {$thisgroupstable}, {$thisusertable} WHERE {$thisfield['usertbl_group_id']} = {$thisfield['grouptbl_group_id']} AND {$thisfield['user_id']}='$id'",
	'select_user_id'				=> "SELECT {$f['user_id']} as user_id, {$f['username']} as user_name, {$f['email']} as user_email, {$f['regdate']} as user_regdate, lastvisit as user_lastvisit, '' as user_active, ".
						               "COUNT(pid) as pic_count, ROUND(SUM(total_filesize)/1024) as disk_usage, group_name, group_quota ".
						               "FROM {$thisusertable} AS u ".
									   "INNER JOIN {$thisgroupstable} AS rank ON u.status = rank.title ".   
						               " INNER JOIN {$C['TABLE_USERGROUPS']} AS g ".
									   "ON  g.group_id = rank.{$f['usertbl_group_id']} LEFT JOIN {$C['TABLE_PICTURES']} AS p ON p.owner_id = u.{$f['user_id']} ".$options['search'].
						               "GROUP BY user_id " . "ORDER BY " . $sort_codes[$options['sort']] . " LIMIT {$options['lower_limit']}, {$options['users_per_page']};"
);


/**********************************************************************************************************/
//	queries  from  bridge/ xoops.inc.php
/**********************************************************************************************************/
$cpg_db_xoops_inc_php = array(
	'select_u.user_id'			=> "SELECT u.{$f['user_id']} as user_id, {$f['username']} as user_name, {$f['email']} as user_email, {$f['regdate']} as user_regdate, {$f['lastvisit']} as user_lastvisit, '' as user_active, ".
					               "COUNT(pid) as pic_count, ROUND(SUM(total_filesize)/1024) as disk_usage, group_name, group_quota ".
					               "FROM {$thisusertable} AS u ".
								   "INNER JOIN {$thisusergroupstable} AS ug ON u.uid = ug.uid ".   
					               " INNER JOIN {$C['TABLE_USERGROUPS']} AS g ".
								   "ON  g.group_id = ug.{$f['grouptbl_group_id']} LEFT JOIN {$C['TABLE_PICTURES']} AS p ON p.owner_id = u.{$f['user_id']} ".$options['search'].
					               "GROUP BY user_id " . "ORDER BY " . $sort_codes[$options['sort']] . " LIMIT {$options['lower_limit']}, {$options['users_per_page']};"
);


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
	'get_pic_data'					=> "SELECT %1\$s from {$CONFIG['TABLE_PICTURES']} WHERE ((aid='%2\$s' %3\$s ) %4\$s) ".
									   "%5\$s %6\$s ORDER BY %7\$s %8\$s",
	'count_get_pic_data_lastcom'	=> "SELECT COUNT({$CONFIG['TABLE_PICTURES']}.pid) as count from {$CONFIG['TABLE_COMMENTS']}, ".
									   "{$CONFIG['TABLE_PICTURES']}  WHERE {$CONFIG['TABLE_PICTURES']}.approved = 'YES' ".
									   "AND {$CONFIG['TABLE_COMMENTS']}.pid = {$CONFIG['TABLE_PICTURES']}.pid ".
									   "AND {$CONFIG['TABLE_COMMENTS']}.approval = 'YES' %1\$s %2\$s)",
	'get_pic_data_lastcom'			=> "SELECT %1\$s FROM {$CONFIG['TABLE_COMMENTS']} as c, ".
									   "{$CONFIG['TABLE_PICTURES']} as p  WHERE approved = 'YES' AND c.pid = p.pid ".
									   "AND c.approval = 'YES' %2\$s %3\$s) ORDER by msg_id DESC %4\$s",
	'count_get_pic_data_lastcomby'	=> "SELECT COUNT({$CONFIG['TABLE_PICTURES']}.pid) as count from {$CONFIG['TABLE_COMMENTS']}, ".
									   "{$CONFIG['TABLE_PICTURES']}  WHERE approved = 'YES' AND author_id = '%1\$s' ".
									   "AND {$CONFIG['TABLE_COMMENTS']}.pid = {$CONFIG['TABLE_PICTURES']}.pid %2\$s",
	'get_pic_data_lastcomby'		=> "SELECT %1\$s FROM {$CONFIG['TABLE_COMMENTS']} as c, {$CONFIG['TABLE_PICTURES']} ". 
									   "as p WHERE approved = 'YES' AND author_id = '%2\$s' AND c.pid = p.pid %3\$s ".
									   "ORDER by msg_id DESC %4\$s",
	'count_get_pic_data_lastup'		=> "SELECT COUNT(pid) as count from {$CONFIG['TABLE_PICTURES']} WHERE approved = 'YES' %1\$s",
	'get_pic_data_lastup'			=> "SELECT %1\$s FROM {$CONFIG['TABLE_PICTURES']} WHERE approved = 'YES' %2\$s ".
									   "ORDER BY pid DESC %3\$s",
	'count_get_pic_data_lastupby'	=> "SELECT COUNT(pid) as count from {$CONFIG['TABLE_PICTURES']} WHERE approved = 'YES' ".
									   "AND owner_id = '%1\$s' %2\$s",
	'get_pic_data_lastupby'			=> "SELECT %1\$s FROM {$CONFIG['TABLE_PICTURES']} WHERE approved = 'YES' ".
									   "AND owner_id = '%2\$s' %3\$s ORDER BY pid DESC %4\$s",
	'count_get_pic_data_topn'		=> "SELECT COUNT(pid) as count from {$CONFIG['TABLE_PICTURES']} WHERE approved = 'YES' AND hits > 0 ".
									   " %1\$s %2\$s",
	'get_pic_data_topn'				=> "SELECT %1\$s FROM {$CONFIG['TABLE_PICTURES']} WHERE approved = 'YES'AND hits > 0 ".
									   "%2\$s %3\$s ORDER BY hits DESC, filename  %4\$s",
	'count_get_pic_data_toprated'	=> "SELECT COUNT(pid) as count from {$CONFIG['TABLE_PICTURES']} WHERE approved = 'YES' ".
									   "AND votes >= '%1\$s' %2\$s",
	'get_pic_data_toprated'			=> "SELECT %1\$s FROM {$CONFIG['TABLE_PICTURES']} WHERE approved = 'YES' ".
									   "AND votes >= '%2\$s'  %3\$s ORDER BY pic_rating DESC, votes DESC, pid DESC %4\$s",
	'count_get_pic_data_lasthits'	=> "SELECT COUNT(pid) as count from {$CONFIG['TABLE_PICTURES']} WHERE approved = 'YES' and hits > 0 %1\$s",
	'get_pic_data_lasthits'			=> "SELECT %1\$s FROM {$CONFIG['TABLE_PICTURES']} WHERE approved = 'YES' and hits > 0 %2\$s ".
									   "ORDER BY mtime DESC %3\$s",
	'count_get_pic_data_random'		=> "SELECT COUNT(pid) as count from {$CONFIG['TABLE_PICTURES']} WHERE approved = 'YES' %1\$s",
	'get_pic_data_random'			=> "SELECT %1\$s FROM {$CONFIG['TABLE_PICTURES']} WHERE approved = 'YES' %2\$s ".
									   "ORDER BY RAND() LIMIT %3\$s",
	'count_get_pic_data_lastalb'	=> "SELECT count({$CONFIG['TABLE_ALBUMS']}.aid) as count FROM {$CONFIG['TABLE_PICTURES']},".
									   "{$CONFIG['TABLE_ALBUMS']} WHERE {$CONFIG['TABLE_PICTURES']}.aid = {$CONFIG['TABLE_ALBUMS']}.aid ".
									   "AND approved = 'YES' %1\$s GROUP  BY {$CONFIG['TABLE_PICTURES']}.aid",
	'get_pic_data_lastalb'			=> "SELECT *,{$CONFIG['TABLE_ALBUMS']}.title AS title,{$CONFIG['TABLE_ALBUMS']}.aid AS aid ".
									   "FROM {$CONFIG['TABLE_PICTURES']}, {$CONFIG['TABLE_ALBUMS']} ".
									   "WHERE {$CONFIG['TABLE_PICTURES']}.aid = {$CONFIG['TABLE_ALBUMS']}.aid ".
									   "AND approved = 'YES' %1\$s GROUP BY {$CONFIG['TABLE_PICTURES']}.aid ".
									   "ORDER BY {$CONFIG['TABLE_PICTURES']}.ctime DESC %2\$s",
	'count_get_pic_data_favpics'	=> "SELECT COUNT(pid) as count from {$CONFIG['TABLE_PICTURES']} WHERE approved = 'YES' ".
									   "AND pid IN (%1\$s) %2\$s",
	'get_pic_data_favpics'			=> "SELECT %1\$s FROM {$CONFIG['TABLE_PICTURES']} WHERE approved = 'YES' ".
									   "AND pid IN (%2\$s) %3\$s %4\$s",
	'count_get_pic_data_datebrowse'	=> "SELECT COUNT(pid) as count from {$CONFIG['TABLE_PICTURES']} WHERE approved = 'YES' ".
									   "AND substring(from_unixtime(ctime),1,10) = '%1\$s' %2\$s",
	'get_pic_data_datebrowse'		=> "SELECT %1\$s FROM {$CONFIG['TABLE_PICTURES']} WHERE approved = 'YES' ".
									   "AND substring(from_unixtime(ctime),1,10) = '%2\$s'  %3\$s %4\$s",
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
	'get_dbversion'					=> "SELECT VERSION() as version",
	'get_bridge_db_values'			=> "SELECT * FROM {$CONFIG['TABLE_BRIDGE']}",
	'reset_detail_hits'				=> "DELETE FROM {$CONFIG['TABLE_HIT_STATS']} WHERE %1\$s",		
	'reset_detail_votes'			=> "DELETE FROM {$CONFIG['TABLE_VOTE_STATS']} WHERE %1\$s",	
	'store_temp_message'			=> "INSERT INTO {$CONFIG['TABLE_TEMP_MESSAGES']}  SET   message_id = '%1\$s', ".
									   "user_id = '%2\$s', time   = '%3\$s',  message = '%4\$s'",
	'read_temp_message'				=> "SELECT message AS message FROM {$CONFIG['TABLE_TEMP_MESSAGES']} ".
									   "WHERE message_id = '%1\$s' LIMIT 1",
	'delete_temp_message'			=> "DELETE FROM {$CONFIG['TABLE_TEMP_MESSAGES']} WHERE message_id = '%1\$s'",
	'clean_temp_message'			=> "DELETE FROM {$CONFIG['TABLE_TEMP_MESSAGES']} WHERE time < '%1\$s'",
	'check_alb_available'			=> "SELECT aid FROM {$CONFIG['TABLE_ALBUMS']} WHERE owner = %1\$s  LIMIT 1",
	'get_available_alb'				=> "SELECT DISTINCT category FROM {$CONFIG['TABLE_ALBUMS']} WHERE owner = '%1\$s' ".
									   "AND aid='%2\$s'",
	'check_edit_allowed'			=> "SELECT DISTINCT aid FROM {$CONFIG['TABLE_ALBUMS']} AS alb ".
									   "INNER JOIN {$CONFIG['TABLE_CATMAP']} AS catm ON alb.category=catm.cid ".
									   "WHERE alb.owner = '%1\$s' AND alb.aid='%2\$s' AND catm.group_id='%3\$s'"
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
	'plugin_delete'			=>  'delete from '.$CONFIG['TABLE_PLUGINS'].' where plugin_id=%1\$s;',
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
	'cat_title_album_q'			=> "SELECT * FROM {$CONFIG['TABLE_ALBUMS']} WHERE (category = '%1\$s') ORDER BY aid DESC LIMIT 1",
	'cat_title_thumb_query'		=> "SELECT filename, url_prefix, pwidth, pheight FROM {$CONFIG['TABLE_PICTURES']} ".
								   "WHERE (aid = '%1\$s') ORDER BY pid DESC",
	'temp_search_string'		=> "SELECT COUNT(*) as count FROM {$CONFIG['TABLE_PICTURES']} WHERE %1\$s",
	'final_search_string'		=> "SELECT * FROM {$CONFIG['TABLE_PICTURES']} WHERE %1\$s ORDER BY %2\$s %3\$s"
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
	'check_upload_permission'	=> "SELECT aid, title FROM {$CONFIG['TABLE_ALBUMS']} WHERE category='%1\$s' AND aid = '%2\$s' ORDER BY title",
	'upload_not_allowed'		=> "SELECT aid, title FROM {$CONFIG['TABLE_ALBUMS']} WHERE category < %1\$s AND uploads='YES' ".
								   "AND (visibility = '0' OR visibility IN %2\$s) AND aid = '%3\$s' ORDER BY title",
	'html_rating_box'			=> "SELECT * FROM {$CONFIG['TABLE_VOTES']} WHERE pic_id=%1\$s AND user_md5_id='%2\$s'",
	'html_comments'				=> "SELECT msg_id, msg_author, msg_body, UNIX_TIMESTAMP(msg_date) AS msg_date, author_id, ".
								   "author_md5_id, msg_raw_ip, msg_hdr_ip, pid, approval FROM {$CONFIG['TABLE_COMMENTS']} ".
								   "WHERE pid='%1\$s' ORDER BY msg_id %2\$s",
	'display_fullsize_pic'		=> "SELECT * FROM {$CONFIG['TABLE_PICTURES']}  WHERE pid='%1\$s' %2\$s"

);


/**********************************************************************************************************/
//	queries  from  plugins/ onlinstats/codebase.php
/**********************************************************************************************************/
if (defined('CORE_PLUGIN')) $cpg_db_onlinestats = array(
	'delete_from_online'			=> "DELETE FROM {$CONFIG['TABLE_ONLINE']} WHERE user_id = 0 AND user_ip = '$raw_ip'",
	'delete_from_online_02'			=> "DELETE FROM {$CONFIG['TABLE_ONLINE']} WHERE user_id = $user_id",
	'delete_from_online_03'			=> "DELETE FROM {$CONFIG['TABLE_ONLINE']} WHERE last_action < NOW() - INTERVAL {$CONFIG['mod_updates_duration']} MINUTE",
	'replace_into_online'			=> "REPLACE INTO {$CONFIG['TABLE_ONLINE']} (user_id, user_name, user_ip, last_action) VALUES ('$user_id', '$user_name', '$raw_ip', NOW())",
	'select_user_ip'				=> "SELECT user_ip FROM {$CONFIG['TABLE_ONLINE']} WHERE user_ip LIKE '$teststr%'",
	'update_online'					=> "UPDATE {$CONFIG['TABLE_ONLINE']} SET last_action = NOW() WHERE user_ip = '$result' LIMIT 1",
	'insert_into_online'			=> "INSERT INTO {$CONFIG['TABLE_ONLINE']} (user_id, user_name, user_ip, last_action) VALUES ('$user_id', '$user_name', '$raw_ip', NOW())",
	'select_count_all_online'		=> "SELECT COUNT(*) FROM {$CONFIG['TABLE_ONLINE']}",
	'select_count_all_online_02'	=> "SELECT COUNT(*) FROM {$CONFIG['TABLE_ONLINE']} WHERE user_id <> 0",
	'select_user_id'				=> "SELECT {$cpg_udb->field['user_id']} AS user_id, {$cpg_udb->field['username']} AS user_name FROM {$cpg_udb->usertable} ORDER BY user_id DESC LIMIT 1", $cpg_udb->link_id,
	'select_user_id_02'				=> "SELECT user_id, user_name FROM {$CONFIG['TABLE_ONLINE']} WHERE user_id <> 0",
	'update_config'					=> "UPDATE {$CONFIG['TABLE_CONFIG']} SET value = '$num_online' WHERE name = 'record_online_users'",
	'update_config_02'				=> "UPDATE {$CONFIG['TABLE_CONFIG']} SET value = UNIX_TIMESTAMP() WHERE name = 'record_online_date'",
	'insert_ignore_into_config'		=> "INSERT IGNORE INTO {$CONFIG['TABLE_CONFIG']} (name, value) VALUES ('mod_updates_duration', '{$duration}')",
	'update_config_03'				=> "UPDATE {$CONFIG['TABLE_CONFIG']} SET value = '$contentOfTheMainpage' WHERE name = 'main_page_layout'",
	'drop_online'					=> "DROP TABLE IF EXISTS {$CONFIG['TABLE_ONLINE']}",
	'delete_from_config'			=> "DELETE FROM {$CONFIG['TABLE_CONFIG']} WHERE name = 'mod_updates_duration'",
	'delete_from_config_02'			=> "DELETE FROM {$CONFIG['TABLE_CONFIG']} WHERE name = 'record_online_users'",
	'delete_from_config_03'			=> "DELETE FROM {$CONFIG['TABLE_CONFIG']} WHERE name = 'record_online_date'",
	'update_config_04'				=> "UPDATE {$CONFIG['TABLE_CONFIG']} SET value = '$contentOfTheMainpage' WHERE name = 'main_page_layout'"
);


/**********************************************************************************************************/
//	queries  from  plugins/ usergal_alphatabs/codebase.php
/**********************************************************************************************************/
if (defined('CORE_PLUGIN')) $cpg_db_usergal_alphatabs = array(
	'select_user_id'			=> "SELECT {$f['user_id']} as user_id,".
									"{$f['username']} as user_name,".
									"COUNT(DISTINCT a.aid) as alb_count,".
									"COUNT(DISTINCT pid) as pic_count,".
									"MAX(pid) as thumb_pid, ".
									"MAX(galleryicon) as gallery_pid ".
									"FROM {$CONFIG['TABLE_ALBUMS']} AS a ".
									"INNER JOIN {$thisusertable} as u on u.{$f['user_id']} = a.category - " . FIRST_USER_CAT . " ".
									"INNER JOIN {$CONFIG['TABLE_PICTURES']} AS p ON p.aid = a.aid ".
									"WHERE ((isnull(approved) or approved='YES') AND category > " . FIRST_USER_CAT . ") $forbidden_with_icon ".
									//if ($l = $getLetter) $sql .= "AND {$f[\'username\']} LIKE \'$l%\' ";
									"GROUP BY category ".
									"ORDER BY category ".
									"LIMIT $lower_limit, $users_per_page ",
	'select_category'			=> "SELECT category - 10000 as user_id ".
								   "FROM {$CONFIG['TABLE_ALBUMS']} AS a ".
								   "INNER JOIN {$CONFIG['TABLE_PICTURES']} AS p ON p.aid = a.aid ".
								   "WHERE ((isnull(approved) or approved='YES') ".
								   "AND category > " . FIRST_USER_CAT . ") $forbidden_with_icon GROUP BY category ".
								   "LIMIT $lower_limit, $users_per_page ",
	'select_user_id_02'			=> "SELECT {$thisfield['user_id']} AS user_id, {$thisfield['username']} AS user_name FROM {$thisusertable} WHERE {$thisfield['user_id']} IN ($userlist)",
								   //	if ($l = $getLetter) $sql .= " AND {$f[\'username\']} LIKE \'$l%\' ";			
	'select_owner_id'			=> "SELECT owner_id as user_id,".
								   "COUNT(DISTINCT a.aid) as alb_count,".
								   "COUNT(DISTINCT pid) as pic_count,".
								   "MAX(pid) as thumb_pid, ".
								   "MAX(galleryicon) as gallery_pid ".
								   "FROM {$CONFIG['TABLE_ALBUMS']} AS a ".
								   "INNER JOIN {$CONFIG['TABLE_PICTURES']} AS p ON p.aid = a.aid ".
								   "WHERE ((isnull(approved) or approved='YES') AND category > " . FIRST_USER_CAT . ") $forbidden_with_icon GROUP BY category ".
								   "ORDER BY category "
);


/**********************************************************************************************************/
//	queries  from  plugins/ visiblehookpoints/codebase.php
/**********************************************************************************************************/
$cpg_db_visiblehookpoints = array(
	'insert_into_config'		=> "INSERT INTO {$CONFIG['TABLE_CONFIG']} VALUES ('plugin_visiblehookpoints_display', '{$value}')",
	'update_config'				=> "UPDATE {$CONFIG['TABLE_CONFIG']} SET value = '{$value}' WHERE name = 'plugin_visiblehookpoints_display'",
	'delete_from_config'		=> "DELETE FROM {$CONFIG['TABLE_CONFIG']} WHERE `name` = 'plugin_visiblehookpoints_display'"
);


/**********************************************************************************************************/
//	queries  from  plugins/ visiblehookpoints/index.php
/**********************************************************************************************************/
$cpg_db_visiblhookpoints_index_php = array(
	'update_config'			=> "UPDATE {$CONFIG['TABLE_CONFIG']} SET value = '{$value}' WHERE name = 'plugin_visiblehookpoints_display'"
);


/**********************************************************************************************************/
//	queries  from  themes/ sample/theme.php
/**********************************************************************************************************/
$cpg_db_sample_theme_php = array(
	'select_aid'				=> "SELECT aid, title FROM {$CONFIG['TABLE_ALBUMS']} WHERE category='" . (FIRST_USER_CAT + USER_ID) . "' AND aid = '$album' ORDER BY title",
	'select_aid_02'				=> "SELECT aid, title FROM {$CONFIG['TABLE_ALBUMS']} WHERE category < " . FIRST_USER_CAT . " AND uploads='YES' AND (visibility = '0' OR visibility IN ".USER_GROUP_SET.") AND aid = '$album' ORDER BY title",
	'select_msg_id'				=> "SELECT msg_id, msg_author, msg_body, UNIX_TIMESTAMP(msg_date) AS msg_date, author_id, author_md5_id, msg_raw_ip, msg_hdr_ip, pid, approval FROM {$CONFIG['TABLE_COMMENTS']} WHERE pid='$pid' ORDER BY msg_id $comment_sort_order",
	'select_all_from_pictures'	=> "SELECT * " . "FROM {$CONFIG['TABLE_PICTURES']} " . "WHERE pid='$pid' $ALBUM_SET"
);

?>
