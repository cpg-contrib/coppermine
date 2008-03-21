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
	'subcat_user_gal_cat'			=> "SELECT count(*) FROM {$CONFIG['TABLE_PICTURES']} as p, {$CONFIG['TABLE_ALBUMS']} as a ".
									   "WHERE p.aid = a.aid AND approved='YES' AND category >= %1\$s %2\$s ",
	'subcat_unaliased_alb_filter'	=> "SELECT aid FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = '%1\$s' %2\$s",
	'subcat_not_user_gal_cat'		=> "SELECT count(*) FROM {$CONFIG['TABLE_PICTURES']} as p, {$CONFIG['TABLE_ALBUMS']} as a ".
									   "WHERE p.aid = a.aid AND approved='YES' AND category = '%1\$s' %2\$s",
	'subcat_pic'					=> "SELECT filepath, filename, url_prefix, pwidth, pheight FROM {$CONFIG['TABLE_PICTURES']} ".
									   "WHERE pid='%1\$s' %2\$s",
	'cat_list_user_gal_cat'			=> "SELECT aid FROM {$CONFIG['TABLE_ALBUMS']} as a WHERE category >= %1\$s %2\$s",
	'cat_list_not_user_gal_cat'		=> "SELECT aid FROM {$CONFIG['TABLE_ALBUMS']} as a WHERE category = '%1\$s' %2\$s",
	'cat_list_count_alb'			=> "SELECT count(aid) FROM {$CONFIG['TABLE_ALBUMS']} as a WHERE 1 %1\$s",
	'cat_list_count_pic_alb'		=> "SELECT count(pid) FROM {$CONFIG['TABLE_PICTURES']} as p LEFT JOIN " . $CONFIG['TABLE_ALBUMS'] . 
									   " as a ON a.aid=p.aid WHERE 1 %1\$s AND approved='YES'",
	'cat_list_count_comm_pic'		=> "SELECT count(msg_id) FROM {$CONFIG['TABLE_COMMENTS']} as c LEFT JOIN " . $CONFIG['TABLE_PICTURES'] .
									   " as p ON c.pid=p.pid  LEFT JOIN " . $CONFIG['TABLE_ALBUMS'] . " as a  ON a.aid=p.aid ".
									   " WHERE 1  %1\$s AND approval='YES'",
	'cat_list_count_cat'			=> "SELECT count(cid) FROM {$CONFIG['TABLE_CATEGORIES']} WHERE 1",
	'cat_list_sum_pic_alb'			=> "SELECT sum(hits) FROM {$CONFIG['TABLE_PICTURES']} as p LEFT JOIN " . $CONFIG['TABLE_ALBUMS'] . 
									   " as a  ON p.aid=a.aid  WHERE 1 %1\$s",
	'cat_list_current_alb_set'		=> "SELECT count(aid) FROM {$CONFIG['TABLE_ALBUMS']}  WHERE 1 %1\$s",
	'cat_list_count_pic'			=> "SELECT count(pid) FROM {$CONFIG['TABLE_PICTURES']} WHERE 1 %1\$s",
	'cat_list_sum_pic'				=> "SELECT sum(hits) FROM {$CONFIG['TABLE_PICTURES']} WHERE 1 %1\$s AND approved='YES'",
	'list_user_pic'					=> "SELECT filepath, filename, url_prefix, pwidth, pheight  FROM {$CONFIG['TABLE_PICTURES']} " . 
									   "WHERE pid='%1\$s' AND approved='YES'",
	'list_albums_alb_owner'			=> "SELECT count(aid) FROM {$CONFIG['TABLE_ALBUMS']} as a WHERE owner = '%1\$s' %2\$s",
	'list_albums_alb_cats'			=> "SELECT count(aid) FROM {$CONFIG['TABLE_ALBUMS']} as a WHERE category = '%1\$s' %2\$s",
	'list_albums_alb_pic_owner'		=> "SELECT a.aid, a.title, a.description, a.thumb, category, visibility, filepath, filename, url_prefix, pwidth, pheight " . 
									   "FROM " . $CONFIG['TABLE_ALBUMS'] . " as a  'LEFT JOIN " . $CONFIG['TABLE_PICTURES'] . " as p " . 
									   "ON a.thumb=p.pid  WHERE a.owner= %1\$s %2\$s  ORDER BY a.category DESC , a.pos LIMIT %3\$s, %4\$s",	###	cpgdb_AL
	'list_albums_concat'			=> "SELECT CONCAT(a.title, ' %1\$s <i>', c.name, '</i>') FROM " . $CONFIG['TABLE_ALBUMS'] . 
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
									   "WHERE aid != '%1\$s' AND keywords LIKE '%%2\$s%'  AND approved = 'YES'",
	'random_pictures'				=> "SELECT filepath, filename, url_prefix, pwidth, pheight  FROM {$CONFIG['TABLE_PICTURES']} ".
									   "WHERE aid = '%1\$s' ORDER BY RAND() LIMIT 0,1",
	'get_pictures'					=> "SELECT filepath, filename, url_prefix, pwidth, pheight  FROM {$CONFIG['TABLE_PICTURES']} ".
									   "WHERE pid='%1\$s'",
	'album_adm_menu_get_alb'		=> "SELECT * FROM {$CONFIG['TABLE_ALBUMS']} WHERE aid='%1\$s' AND owner='%2\$s'",
	'album_adm_menu_dist_alb_cat'	=> "SELECT DISTINCT alb.category FROM {$CONFIG['TABLE_ALBUMS']} AS alb ".
									   "INNER JOIN {$CONFIG['TABLE_CATMAP']} AS catm ON alb.category=catm.cid ".
									   "WHERE alb.owner = '%1\$s' AND alb.aid='%2\$s' AND catm.group_id='%3\$s'",
	'list_cat_alb_count_alb'		=> "SELECT count(aid) FROM {$CONFIG['TABLE_ALBUMS']} as a WHERE category = '%1\$s' %2\$s",
	'list_cat_alb_join_pic'			=> "SELECT a.aid, a.title, a.description, a.thumb, visibility, filepath, filename, url_prefix, pwidth, pheight ".
									   "FROM " . $CONFIG['TABLE_ALBUMS'] . " as a  LEFT JOIN " . $CONFIG['TABLE_PICTURES'] . " as p  ON a.thumb=p.pid " . 
									   "WHERE category=%1\$s %2\$s ORDER BY a.pos LIMIT %3\$s, %4\$s", ### cpgdb_AL
	//'list_cat_alb_count_alb_pic'	=> "SELECT a.aid, count( p.pid ) AS pic_count, max( p.pid )  AS last_pid, max( p.ctime ) ".
									   //" AS last_upload, a.keyword, a.alb_hits   FROM {$CONFIG['TABLE_ALBUMS']} AS a ".
									   //"LEFT JOIN {$CONFIG['TABLE_PICTURES']} AS p ON a.aid = p.aid AND p.approved =  'YES' ". 
									   //"WHERE a.aid IN %1\$s" . "GROUP BY a.aid",
	'list_cat_alb_kwrd_pic_srch'	=> "SELECT count(pid) AS link_pic_count FROM {$CONFIG['TABLE_PICTURES']} WHERE aid != '%1\$s' ".
									   "AND keywords LIKE '%%2\$s%' AND approved = 'YES'",
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
	'update_favpics'			=> "UPDATE {$CONFIG['TABLE_FAVPICS']} SET user_favpics = '$data' WHERE user_id = " . USER_ID,
	'insert_into_favpics'		=> "INSERT INTO {$CONFIG['TABLE_FAVPICS']} ( user_id, user_favpics) VALUES (" . USER_ID . ", '$data')"
);


/******************************************************/
//queries from addpic.php
/***********************************************************/
if(defined('ADDPIC_PHP')) $cpg_db_addpic_php = array(
	'select_pid'				=> "SELECT pid FROM {$CONFIG['TABLE_PICTURES']} WHERE filepath='" . addslashes($dir_name) . "' AND filename='" . addslashes($file_name) . "' LIMIT 1"
);


/******************************************************/
//queries from admin.php
/***********************************************************/
if (defined('ADMIN_PHP')) $cpg_db_admin_php = array(
	'truncate_config'			=> "TRUNCATE TABLE {$CONFIG['TABLE_CONFIG']}",
	'truncate_filetypes'		=> "TRUNCATE TABLE {$CONFIG['TABLE_FILETYPES']}",
	'update_config'				=> "UPDATE {$CONFIG['TABLE_CONFIG']} SET value = '{$CONFIG[$key]}' WHERE name = '$key'",
	'update_config_02'			=> "UPDATE {$CONFIG['TABLE_CONFIG']} SET value = '$evaluate_value' WHERE name = '$adminDataKey'\n",
	'update_users'				=> "update {$CONFIG['TABLE_USERS']} set user_password=md5(user_password);"
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
	'select_all_from_tablename'	=> 'SELECT * FROM '.$temp_tablename,
	'update_bridge'				=> "UPDATE {$CONFIG['TABLE_BRIDGE']} SET value = '$value' WHERE name = '$key'",
	'update_config'				=> "UPDATE {$CONFIG['TABLE_CONFIG']} SET value = '$value' WHERE name = 'bridge_enable'",
	'select_all_from_config'	=> "SELECT * FROM {$CONFIG['TABLE_CONFIG']}",
	'delete_from_usergroups'	=> "DELETE FROM {$CONFIG['TABLE_USERGROUPS']} WHERE 1",
	'insert_into_usergroups'	=> "INSERT INTO {$CONFIG['TABLE_USERGROUPS']} VALUES (1, 'Administrators', 0, 1, 1, 1, 1, 1, 1, 0, 0, 3, 0, 5, 3)",
	'insert_into_usergroups_02'	=> "INSERT INTO {$CONFIG['TABLE_USERGROUPS']} VALUES (2, 'Registered', 1024, 0, 1, 1, 1, 1, 1, 1, 0, 3, 0, 5, 3)",
	'insert_into_usergroups_03'	=> "INSERT INTO {$CONFIG['TABLE_USERGROUPS']} VALUES (3, 'Anonymous', 0, 0, 1, 0, 0, 0, 0, 1, 1, 0, 0, 5, 3)",
	'insert_into_usergroups_04'	=> "INSERT INTO {$CONFIG['TABLE_USERGROUPS']} VALUES (4, 'Banned', 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 5, 3)",
	'select_value'				=> "SELECT value FROM {$CONFIG['TABLE_BRIDGE']} WHERE name = 'recovery_logon_timestamp'",
	'select_value_02'			=> "SELECT value FROM {$CONFIG['TABLE_BRIDGE']} WHERE name = 'recovery_logon_failures'",
	'select_user_id'			=> "SELECT user_id, user_name, user_password FROM $temp_user_table WHERE user_name = '" . addslashes($_POST['username']) . "' AND BINARY user_password = '" . $encpassword . "' AND user_active = 'YES' AND user_group = '1'",
	'update_config_02'			=> "UPDATE {$CONFIG['TABLE_CONFIG']} SET value = '0' WHERE name = 'bridge_enable'",
	'update_bridge_02'			=> "UPDATE {$CONFIG['TABLE_BRIDGE']} SET value = '0' WHERE name = 'recovery_logon_failures'",
	'update_bridge_03'			=> "UPDATE {$CONFIG['TABLE_BRIDGE']} SET value = NOW() WHERE name = 'recovery_logon_timestamp'",
	'delete_from_usergroups_02'	=> "DELETE FROM {$CONFIG['TABLE_USERGROUPS']} WHERE 1",
	'insert_into_usergroups_05'	=> "INSERT INTO {$CONFIG['TABLE_USERGROUPS']} VALUES (1, 'Administrators', 0, 1, 1, 1, 1, 1, 1, 0, 0, 3, 0, 5, 3)",
	'insert_into_usergroups_06'	=> "INSERT INTO {$CONFIG['TABLE_USERGROUPS']} VALUES (2, 'Registered', 1024, 0, 1, 1, 1, 1, 1, 1, 0, 3, 0, 5, 3)",
	'insert_into_usergroups_07'	=> "INSERT INTO {$CONFIG['TABLE_USERGROUPS']} VALUES (3, 'Anonymous', 0, 0, 1, 0, 0, 0, 0, 1, 1, 0, 0, 5, 3)",
	'insert_into_usergroups_08'	=> "INSERT INTO {$CONFIG['TABLE_USERGROUPS']} VALUES (4, 'Banned', 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 5, 3)",
	'update_bridge_04'			=> "UPDATE {$CONFIG['TABLE_BRIDGE']} SET value = NOW() WHERE name = 'recovery_logon_timestamp'",
	'select_value_03'			=> "SELECT value FROM {$CONFIG['TABLE_BRIDGE']} WHERE name = 'recovery_logon_failures'",
	'update_bridge_05'			=> "UPDATE {$CONFIG['TABLE_BRIDGE']} SET value = '$number_of_failed_attempts' WHERE name = 'recovery_logon_failures'",
	'select_value_04'			=> "SELECT value FROM {$CONFIG['TABLE_BRIDGE']} WHERE name = 'recovery_logon_timestamp'",
	'select_value_05'			=> "SELECT value FROM {$CONFIG['TABLE_BRIDGE']} WHERE name = 'recovery_logon_failures'"
);


/******************************************************/
//queries from calender.php
/***********************************************************/
if (defined('CALENDER_PHP')) $cpg_db_calender_php = array(
	'select_count_pid'			=> "SELECT COUNT(pid) from {$CONFIG['TABLE_PICTURES']} WHERE approved = 'YES' AND substring(from_unixtime(ctime),1,10) = '".substr($date,0,10)."' $META_ALBUM_SET"
);


/******************************************************/
//queries from catmgr.php
/***********************************************************/
if (defined('CATMGR_PHP'))	$cpg_db_catmgr_php = array(
	'get_cid_fixed_cat_table'	=> "SELECT cid FROM {$CONFIG['TABLE_CATEGORIES']} WHERE 1",
	'edit_fixed_cat_table'		=> "UPDATE {$CONFIG['TABLE_CATEGORIES']} SET parent = '0' WHERE parent=cid OR parent NOT IN %1\$s",
	'get_subcat_data'			=> "SELECT cid, name, description FROM {$CONFIG['TABLE_CATEGORIES']} WHERE parent = '%1\$s' ORDER BY '%2\$s'",
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
	'select_all_from_tableneme'	=> "SELECT * FROM $table_name",
	'update_tablename'			=> "UPDATE $table_name SET $column_name='".addslashes($convstr)."' WHERE $index_name=$elementid",
	'update_config'				=> "UPDATE {$CONFIG['TABLE_CONFIG']} SET value='$value' WHERE name='$name'"
);


/******************************************************/
//queries from db_ecard.php
/***********************************************************/
if (defined('DB_ECARD')) $cpg_db_db_ecard_php = array(
	'delete_from_ecards'		=> "DELETE FROM {$CONFIG['TABLE_ECARDS']} WHERE eid='$key'",
	'select_count'				=> "SELECT COUNT(*) FROM {$CONFIG['TABLE_ECARDS']}",
	'select_eid'				=> "SELECT eid, sender_name, sender_email, recipient_name, recipient_email, link, date, sender_ip FROM {$CONFIG['TABLE_ECARDS']} ORDER BY $sortBy $sortDirection LIMIT $startFrom,$countTo"
);


/******************************************************/
//queries from db_input.php
/***********************************************************/
if (defined('DB_INPUT_PHP')) $cpg_db_db_input = array(
	'update_comments'			=> "UPDATE {$CONFIG['TABLE_COMMENTS']} SET msg_body='$msg_body' WHERE msg_id='$msg_id'",
	'update_comments_02'		=> "UPDATE {$CONFIG['TABLE_COMMENTS']} SET msg_body='$msg_body', approval='NO' WHERE msg_id='$msg_id' AND author_id ='" . USER_ID . "' LIMIT 1",
	'update_comments_03'		=> "UPDATE {$CONFIG['TABLE_COMMENTS']} SET msg_body='$msg_body' WHERE msg_id='$msg_id' AND author_id ='" . USER_ID . "' LIMIT 1",
	'update_comments_04'		=> "UPDATE {$CONFIG['TABLE_COMMENTS']} SET msg_body='$msg_body', approval='NO' WHERE msg_id='$msg_id' AND author_md5_id ='{$USER['ID']}' AND author_id = '0' LIMIT 1",
	'update_comments_05'		=> "UPDATE {$CONFIG['TABLE_COMMENTS']} SET msg_body='$msg_body' WHERE msg_id='$msg_id' AND author_md5_id ='{$USER['ID']}' AND author_id = '0' LIMIT 1",
	'select_pid'				=> "SELECT pid FROM {$CONFIG['TABLE_COMMENTS']} WHERE msg_id='$msg_id'",
	'select_comments'			=> "SELECT comments FROM {$CONFIG['TABLE_PICTURES']}, {$CONFIG['TABLE_ALBUMS']} WHERE {$CONFIG['TABLE_PICTURES']}.aid = {$CONFIG['TABLE_ALBUMS']}.aid AND pid='$pid'",
	'select_author_md5_id'		=> "SELECT author_md5_id, author_id FROM {$CONFIG['TABLE_COMMENTS']} WHERE pid = '$pid' ORDER BY msg_id DESC LIMIT 1",
	'select_count_user_id'		=> "select count(user_id) from {$CONFIG['TABLE_USERS']} where UPPER(user_name) = UPPER('$msg_author')",
	'insert_into_comments'		=> "INSERT INTO {$CONFIG['TABLE_COMMENTS']} (pid, msg_author, msg_body, msg_date, author_md5_id, author_id, msg_raw_ip, msg_hdr_ip, approval) VALUES ('$pid', '{$CONFIG['comments_anon_pfx']}$msg_author', '$msg_body', NOW(), '{$USER['ID']}', '0', '$raw_ip', '$hdr_ip', 'NO')",
	'insert_into_comments_02'	=> "INSERT INTO {$CONFIG['TABLE_COMMENTS']} (pid, msg_author, msg_body, msg_date, author_md5_id, author_id, msg_raw_ip, msg_hdr_ip, approval) VALUES ('$pid', '{$CONFIG['comments_anon_pfx']}$msg_author', '$msg_body', NOW(), '{$USER['ID']}', '0', '$raw_ip', '$hdr_ip', 'YES')",
	'insert_into_comments_03'	=> "INSERT INTO {$CONFIG['TABLE_COMMENTS']} (pid, msg_author, msg_body, msg_date, author_md5_id, author_id, msg_raw_ip, msg_hdr_ip, approval) VALUES ('$pid', '" . addslashes(USER_NAME) . "', '$msg_body', NOW(), '', '" . USER_ID . "', '$raw_ip', '$hdr_ip', 'NO')",
	'insert_into_comments_04'	=> "INSERT INTO {$CONFIG['TABLE_COMMENTS']} (pid, msg_author, msg_body, msg_date, author_md5_id, author_id, msg_raw_ip, msg_hdr_ip, approval) VALUES ('$pid', '" . addslashes(USER_NAME) . "', '$msg_body', NOW(), '', '" . USER_ID . "', '$raw_ip', '$hdr_ip', 'YES')",
	'update_albums'				=> "UPDATE {$CONFIG['TABLE_ALBUMS']} SET title='$title', description='$description', category='$category', thumb='$thumb', uploads='$uploads', comments='$comments', votes='$votes', visibility='$visibility', alb_password='$password', alb_password_hint='$password_hint', keyword='$keyword', moderator_group='$moderator_group' WHERE aid='$aid' LIMIT 1",
	'update_albums_02'			=> "UPDATE {$CONFIG['TABLE_ALBUMS']} SET title='$title', description='$description', category='$category', thumb='$thumb',  comments='$comments', votes='$votes', visibility='$visibility', alb_password='$password', alb_password_hint='$password_hint',keyword='$keyword' WHERE aid='$aid' LIMIT 1",
	'select_pid'				=> "SELECT pid FROM {$CONFIG['TABLE_PICTURES']} WHERE aid = '$aid'",
	'update_pictures'			=> "UPDATE {$CONFIG['TABLE_PICTURES']} SET hits='0' WHERE aid='$aid'",
	'update_pictures_02'		=> "UPDATE {$CONFIG['TABLE_PICTURES']} SET  pic_rating='0',  votes='0' WHERE aid='$aid'",
	'delete_from_pictures'		=> "DELETE FROM {$CONFIG['TABLE_PICTURES']} WHERE aid='$aid'",
	'select_category'			=> "SELECT category FROM {$CONFIG['TABLE_ALBUMS']} WHERE aid='$album' and (uploads = 'YES' OR category = '" . (USER_ID + FIRST_USER_CAT) . "')",
	'select_category_02'		=> "SELECT category FROM {$CONFIG['TABLE_ALBUMS']} WHERE aid='$album'"
);


/******************************************************/
//queries from delete.php
/***********************************************************/
if (defined('DELETE_PHP')) $cpg_db_delete_php = array(
	'select_aid'				=> "SELECT aid, filepath, filename FROM {$CONFIG['TABLE_PICTURES']} WHERE pid='$pid'",
	'select_picture.aid'		=> "SELECT {$CONFIG['TABLE_PICTURES']}.aid as aid, category, filepath, filename, owner_id FROM {$CONFIG['TABLE_PICTURES']}, {$CONFIG['TABLE_ALBUMS']} WHERE {$CONFIG['TABLE_PICTURES']}.aid = {$CONFIG['TABLE_ALBUMS']}.aid AND pid='$pid'",
	'delete_from_comments'		=> "DELETE FROM {$CONFIG['TABLE_COMMENTS']} WHERE pid='$pid'",
	'delete_from_exif'			=> "DELETE FROM {$CONFIG['TABLE_EXIF']} WHERE filename='".addslashes($dir.$file)."' LIMIT 1",
	'delete_from_pictures'		=> "DELETE FROM {$CONFIG['TABLE_PICTURES']} WHERE pid='$pid' LIMIT 1",
	'select_title'				=> "SELECT title, category FROM {$CONFIG['TABLE_ALBUMS']} WHERE aid ='$aid'",
	'select_pid'				=> "SELECT pid FROM {$CONFIG['TABLE_PICTURES']} WHERE aid='$aid'",
	'delete_from_albums'		=> "DELETE from {$CONFIG['TABLE_ALBUMS']} WHERE aid='$aid'",
	'select_distinct_cid'		=> "SELECT DISTINCT cid FROM {$CONFIG[TABLE_CATMAP]} WHERE group_id = $group_id",
	'update_albums'				=> "UPDATE {$CONFIG[TABLE_ALBUMS]} SET pos='{$op['pos']}' WHERE aid='{$op['aid']}' $restrict LIMIT 1",
	'insert_into_albums'		=> "INSERT INTO {$CONFIG['TABLE_ALBUMS']} (category, title, uploads, pos, description, owner) VALUES ('$category', '" . addslashes($op['album_nm']) . "', 'NO',  '{$op['album_sort']}', '', '$user_id')",
	'update_albums_02'			=> "UPDATE $CONFIG[TABLE_ALBUMS] SET title='" . addslashes($op['album_nm']) . "', pos='{$op['album_sort']}' WHERE aid='{$op['album_no']}' $restrict LIMIT 1",
	'update_pictures'			=> "UPDATE $CONFIG[TABLE_PICTURES] SET position='{$op['pos']}' WHERE pid='{$op['aid']}' $restrict LIMIT 1",
	'insert_into_albums_02'		=> "INSERT INTO {$CONFIG['TABLE_ALBUMS']} (category, title, uploads, pos, description) VALUES ('$category', '".addslashes($op['album_nm'])."', 'NO',  '{$op['album_sort']}', '')",
	'update_pictures_02'		=> "UPDATE $CONFIG[TABLE_PICTURES] SET position='{$op['picture_sort']}' WHERE pid='{$op['picture_no']}' $restrict LIMIT 1",
	'select_pid_02'				=> "SELECT pid FROM {$CONFIG['TABLE_COMMENTS']} WHERE msg_id='$msg_id'",
	'delete_from_comments_02'	=> "DELETE FROM {$CONFIG['TABLE_COMMENTS']} WHERE msg_id='$msg_id'",
	'delete_from_comments_03'	=> "DELETE FROM {$CONFIG['TABLE_COMMENTS']} WHERE msg_id='$msg_id' AND author_id ='" . USER_ID . "' LIMIT 1",
	'delete_from_comments_04'	=> "DELETE FROM {$CONFIG['TABLE_COMMENTS']} WHERE msg_id='$msg_id' AND author_md5_id ='{$USER['ID']}' AND author_id = '0' LIMIT 1",
	'select_user_name'			=> "SELECT user_name FROM {$CONFIG['TABLE_USERS']} WHERE user_id = '".(int)$key."'",
	'select_aid_02'				=> "SELECT aid FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = '" . (FIRST_USER_CAT + $key) . "'",
	'select_count_comments'		=> "SELECT COUNT(*) FROM {$CONFIG['TABLE_COMMENTS']} WHERE author_id = '$key'",
	'delete_from_comments_05'	=> "DELETE FROM {$CONFIG['TABLE_COMMENTS']} WHERE author_id = '$key'",
	'update_comments'			=> "UPDATE {$CONFIG['TABLE_COMMENTS']} SET  author_id = '0' WHERE  author_id = '$key'",
	'select_count_pictures'		=> "SELECT COUNT(*) FROM {$CONFIG['TABLE_PICTURES']} WHERE owner_id = '$key'",
	'delete_from_pictures_02'	=> "DELETE FROM {$CONFIG['TABLE_PICTURES']} WHERE  owner_id = '$key'",
	'update_pictures_03'		=> "UPDATE {$CONFIG['TABLE_PICTURES']} SET  owner_id = '0' WHERE  owner_id = '$key'",
	'delete_from_users'			=> "DELETE FROM {$CONFIG['TABLE_USERS']} WHERE user_id = '$key'",
	'select_user_name_02'		=> "SELECT user_name,user_active FROM {$CONFIG['TABLE_USERS']} WHERE user_id = '$key'",
	'update_users'				=> "UPDATE {$CONFIG['TABLE_USERS']} SET user_active = 'YES' WHERE  user_id = '$key'",
	'select_user_name_03'		=> "SELECT user_name,user_active FROM {$CONFIG['TABLE_USERS']} WHERE user_id = '$key'",
	'update_users_02'			=> "UPDATE {$CONFIG['TABLE_USERS']} SET user_active = 'NO' WHERE  user_id = '$key'",
	'select_user_name_04'		=> "SELECT user_name FROM {$CONFIG['TABLE_USERS']} WHERE user_id = '$key'",
	'update_users_03'			=> "UPDATE {$CONFIG['TABLE_USERS']} SET user_password = '$new_password' WHERE  user_id = '$key'",
	'select_group_id'			=> "SELECT group_id,group_name FROM {$CONFIG['TABLE_USERGROUPS']}",
	'select_user_name_05'		=> "SELECT user_name,user_group FROM {$CONFIG['TABLE_USERS']} WHERE user_id = '$key'",
	'update_users_04'			=> "UPDATE {$CONFIG['TABLE_USERS']} SET user_group = '$group' WHERE  user_id = '$key'",
	'select_group_id'			=> "SELECT group_id,group_name FROM {$CONFIG['TABLE_USERGROUPS']} ORDER BY group_name",
	'select_user_name_06'		=> "SELECT user_name,user_group FROM {$CONFIG['TABLE_USERS']} WHERE user_id = '$key'",
	'select_all_from_users'		=> "SELECT * FROM {$CONFIG['TABLE_USERS']} WHERE user_id = '$key'",
	'update_users_05'			=> "UPDATE {$CONFIG['TABLE_USERS']} SET user_group_list = '$new_group_query' WHERE  user_id = '$key'",
	'select_user_name_07'		=> "SELECT user_name FROM {$CONFIG['TABLE_USERS']} WHERE user_id = '$key'",
	'select_aid_03'				=> "SELECT aid FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = '" . (FIRST_USER_CAT + $key) . "'",
	'select_count_comments_02'	=> "SELECT COUNT(*) FROM {$CONFIG['TABLE_COMMENTS']} WHERE author_id = '$key'",
	'delete_from_comments_06'	=> "DELETE FROM {$CONFIG['TABLE_COMMENTS']} WHERE author_id = '$key'",
	'update_coments_02'			=> "UPDATE {$CONFIG['TABLE_COMMENTS']} SET  author_id = '0' WHERE  author_id = '$key'",
	'select_count_pictures'		=> "SELECT COUNT(*) FROM {$CONFIG['TABLE_PICTURES']} WHERE owner_id = '$key'",
	'delete_from_pictures_03'	=> "DELETE FROM {$CONFIG['TABLE_PICTURES']} WHERE  owner_id = '$key'",
	'update_pictures_04'		=> "UPDATE {$CONFIG['TABLE_PICTURES']} SET  owner_id = '0' WHERE  owner_id = '$key'",
	'delete_from_users_02'		=> "DELETE FROM {$CONFIG['TABLE_USERS']} WHERE user_id = '$key'"
);


/******************************************************/
//queries from displayecard.php
/***********************************************************/
if (defined('DISPLAYECARD_PHP')) $cpg_db_displayecard_php = array(
	'select_link'				=> "SELECT link FROM {$CONFIG['TABLE_ECARDS']} WHERE link LIKE '{$CLEAN['data']}%'",
	'select_pwidth'				=> "SELECT pwidth, pheight from {$CONFIG['TABLE_PICTURES']} WHERE pid='{$CLEAN['data']['pid']}'"
); 


/******************************************************/
//queries from displayimage.php
/***********************************************************/
if (defined('DISPLAYIMAGE_PHP')) $cpg_db_displayimage_php = array(
	'select_cid'				=> "SELECT cid, name, description FROM {$CONFIG['TABLE_CATEGORIES']} WHERE parent = '$parent'",
	'select_aid'				=> "SELECT aid FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = {$subcat['cid']}",
	'select_category'			=> "SELECT category, title, aid, keyword, description, alb_password_hint FROM {$CONFIG['TABLE_ALBUMS']} WHERE aid='" . (- $cat) . "'",
	'select_aid'				=> "SELECT aid from {$CONFIG['TABLE_PICTURES']} WHERE pid='$pid' $ALBUM_SET LIMIT 1",
	'select_title'				=> "SELECT title, comments, votes, category, aid FROM {$CONFIG['TABLE_ALBUMS']} WHERE aid='{$ref_album}' LIMIT 1"
);


/******************************************************/
//queries from ecard.php
/***********************************************************/
if (defined('ECARDS_PHP')) $cpg_db_ecard_php = array(
	'select_all_from_pictures'	=> "SELECT * from {$CONFIG['TABLE_PICTURES']} WHERE pid='$pid' $ALBUM_SET",
	'insert_into_ecards'		=> "INSERT INTO {$CONFIG['TABLE_ECARDS']} (sender_name, sender_email, recipient_name, recipient_email, link, date, sender_ip) VALUES ('$sender_name', '$sender_email', '$recipient_name', '$recipient_email',   '$encoded_data', '$tempTime', '$raw_ip')"
);


/******************************************************/
//queries from edit_one_pic.php
/***********************************************************/
if (defined('EDITPICS_PHP')) $cpg_db_edit_one_pic_php = array(
	'select_all_from_pictures'	=> "SELECT * FROM {$CONFIG['TABLE_PICTURES']} AS p, {$CONFIG['TABLE_ALBUMS']} AS a WHERE a.aid = p.aid AND pid = '$pid'",
	'update_pictures'			=> 'update '.$CONFIG['TABLE_PICTURES'].' set galleryicon=0 where owner_id='.$pic['owner_id'].';',
	'delete_from_exif'			=> "DELETE FROM {$CONFIG['TABLE_EXIF']} WHERE filename = '$filepath'",
	'delete_from_comments'		=> "DELETE FROM {$CONFIG['TABLE_COMMENTS']} WHERE pid='$pid'",
	'update_pictures_02'		=> "UPDATE {$CONFIG['TABLE_PICTURES']} SET $update WHERE pid='$pid' LIMIT 1",
	'update_pictures_03'		=> "UPDATE {$CONFIG['TABLE_PICTURES']} SET filename = '$filename' WHERE pid = '$pid' LIMIT 1",
	'select_aid'				=> "SELECT aid, title FROM {$CONFIG['TABLE_ALBUMS']} WHERE category='".(FIRST_USER_CAT + USER_ID)."' $or ORDER BY title",
	'select_p.title'			=> "SELECT *, p.title AS title, p.votes AS votes FROM {$CONFIG['TABLE_PICTURES']} AS p, {$CONFIG['TABLE_ALBUMS']} AS a WHERE a.aid = p.aid AND pid = '$pid'",
	'select_distinct_aid'		=> "SELECT DISTINCT aid, title, IF(category = 0, CONCAT('&gt; ', title), CONCAT(name,' &lt; ',title)) AS cat_title FROM {$CONFIG['TABLE_ALBUMS']} LEFT JOIN {$CONFIG['TABLE_CATEGORIES']} ON category = cid WHERE category < '" . FIRST_USER_CAT . "' ORDER BY cat_title",
	'select_distinct_aid_02'	=> "SELECT DISTINCT aid, title, IF(category = 0, CONCAT('&gt; ', title), CONCAT(name,' &lt; ',title)) AS cat_title FROM {$CONFIG['TABLE_ALBUMS']} LEFT JOIN {$CONFIG['TABLE_CATEGORIES']} ON category = cid WHERE (category < '" . FIRST_USER_CAT . "' AND uploads = 'YES' $forbidden_set_alt) OR aid='{$CURRENT_PIC['aid']}' ORDER BY cat_title"
);


/******************************************************/
//queries from editpics.php
/***********************************************************/
if (defined('EDITPICS_PHP')) $cpg_db_editpics = array(
	'select_title'					=> "SELECT title, category FROM {$CONFIG['TABLE_ALBUMS']} WHERE aid = '$album_id'",
	'select_category'				=> "SELECT category, filepath, filename, owner_id FROM {$CONFIG['TABLE_PICTURES']}, {$CONFIG['TABLE_ALBUMS']} WHERE {$CONFIG['TABLE_PICTURES']}.aid = {$CONFIG['TABLE_ALBUMS']}.aid AND pid='$pid'",
	'update_pictures'				=> 'UPDATE '.$CONFIG['TABLE_PICTURES'].' SET galleryicon=0 WHERE owner_id='.$pic['owner_id'].';',
	'delete_from_comments'			=> "DELETE FROM {$CONFIG['TABLE_COMMENTS']} WHERE pid='$pid'",
	'delete_from_pictures'			=> "DELETE FROM {$CONFIG['TABLE_PICTURES']} WHERE pid='$pid' LIMIT 1",
	'update_pictures_02'			=> "UPDATE {$CONFIG['TABLE_PICTURES']} SET $update WHERE pid='$pid' LIMIT 1",
	'select_aid'					=> "SELECT aid, title FROM {$CONFIG['TABLE_ALBUMS']} WHERE aid IN $albStr AND category > '".FIRST_USER_CAT."' OR category='".(FIRST_USER_CAT + USER_ID)."' ORDER BY title",
	'select_aid_02'					=> "SELECT aid , title FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = $cat",
	'select_alb.aid'				=> "SELECT alb.aid AS aid, CONCAT_WS('', '(', cat.name, ') ', alb.title) AS title FROM {$CONFIG['TABLE_ALBUMS']} AS alb INNER JOIN {$CONFIG['TABLE_CATEGORIES']} AS cat ON alb.owner = '$user_id' AND alb.category = cat.cid ORDER BY alb.category DESC, alb.pos ASC",
	'select_distinct_aid'			=> "SELECT DISTINCT aid, title, IF(category = 0, CONCAT('&gt; ', title), CONCAT(name,' &lt; ',title)) AS cat_title FROM {$CONFIG['TABLE_ALBUMS']}, {$CONFIG['TABLE_CATEGORIES']} WHERE category < '" . FIRST_USER_CAT . "' AND (category = 0 OR category = cid) ORDER BY cat_title",
	'select_distinct_aid_02'		=> "SELECT DISTINCT aid, title, IF(category = 0, CONCAT('&gt; ', title), CONCAT(name,' &lt; ',title)) AS cat_title FROM {$CONFIG['TABLE_ALBUMS']}, {$CONFIG['TABLE_CATEGORIES']} WHERE aid IN $albStr AND category < '" . FIRST_USER_CAT . "' AND (category = 0 OR category = cid) ORDER BY cat_title",
	'select_count_pictures'			=> "SELECT count(*) FROM {$CONFIG['TABLE_PICTURES']} WHERE approved = 'NO' AND aid IN $albStr",
	'select_count_pictures_02'		=> "SELECT count(*) FROM {$CONFIG['TABLE_PICTURES']} WHERE approved = 'NO'",
	'select_pid'					=> "SELECT pid, owner_id FROM {$CONFIG['TABLE_PICTURES']} WHERE owner_id != 0 AND owner_name = ''",
	'update_pictures_03'			=> "UPDATE {$CONFIG['TABLE_PICTURES']} SET owner_name = '$owner_name' WHERE pid = {$row['pid']} LIMIT 1",
	'update_pictures_04'			=> "UPDATE {$CONFIG['TABLE_PICTURES']} SET owner_id = 0 WHERE pid = {$row['pid']} LIMIT 1",
	'select_all_from_pictures'		=> "SELECT * FROM {$CONFIG['TABLE_PICTURES']} WHERE approved = 'NO' AND aid IN $albStr ORDER BY pid LIMIT $start, $count",
	'select_all_from_pictures_02'	=> "SELECT * FROM {$CONFIG['TABLE_PICTURES']} WHERE approved = 'NO' ORDER BY pid LIMIT $start, $count",
	'select_count_pictures_03'		=> "SELECT count(*) FROM {$CONFIG['TABLE_PICTURES']} WHERE aid = '$album_id'",
	'select_p.all'					=> "SELECT p.*,a.category FROM {$CONFIG['TABLE_PICTURES']} as p INNER JOIN {$CONFIG['TABLE_ALBUMS']} as a ON a.aid=p.aid WHERE p.aid = '$album_id' ORDER BY p.filename LIMIT $start, $count"
);


/******************************************************/
//queries from exifmgr.php
/***********************************************************/
if (defined('DISPLAYIMAGE_PHP')) $cpg_db_exifmgr_php = array(
	'update_config'				=> "UPDATE ".$CONFIG['TABLE_CONFIG']." SET value = '".$selectedExifTags."' WHERE name = 'show_which_exif'"
);


/******************************************************/
//queries from forgot_passwd.php
/***********************************************************/
if (defined('FORGOT_PASSWD_PHP')) $cpg_db_forgot_passwd_php = array(
	'select_user_id'			=> "SELECT user_id, user_group,user_active,user_name, user_password, user_email  FROM {$CONFIG['TABLE_USERS']} WHERE user_email = '{$CLEAN['email']}' AND user_active = 'YES'",
	'inert_into_sessions'		=> 'insert into '.$cpg_udb->sessionstable.' (session_id, user_id, time, remember) values ("'.md5($randkey.$USER_DATA['user_id']).'", 0, "'.$session_life.'", 0);',
	'select_null_from_sessions'	=> "select null from {$cpg_udb->sessionstable} where session_id = md5('{$CLEAN['key']}{$CLEAN['id']}');",
	'select_field_username'		=> "select {$cpg_udb->field['username']}, {$cpg_udb->field['email']} from {$cpg_udb->usertable} where {$cpg_udb->field['user_id']}='{$CLEAN['id']}';",
	'update_users'				=> "update {$cpg_udb->usertable} set {$cpg_udb->field['password']}='$password' where {$cpg_udb->field['email']}='{$row['user_email']}'",
	'delete_from_sessions'		=> "delete from {$cpg_udb->sessionstable} where session_id=md5('{$CLEAN['key']}{$CLEAN['id']}');"
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
	'select_keywords'			=> "SELECT keywords from {$CONFIG['TABLE_PREFIX']}pictures",
	'select_keyword_02'			=> "SELECT keyword from {$CONFIG['TABLE_PREFIX']}dict WHERE keyword = '$keyword'",
	'insert_into_table'			=> "INSERT INTO {$CONFIG['TABLE_PREFIX']}dict SET keyword = '$keyword'"
);


/**********************************************************/
//queries from keyword_select.php
/***********************************************************/
if (defined('UPLOAD_PHP')) $cpg_db_keyword_select_php = array(
	'select_all_from_table'		=> "SELECT * FROM {$CONFIG['TABLE_PREFIX']}dict ORDER BY keyword"
);


/**********************************************************/
//queries from keywordmgr.php
/***********************************************************/
if(defined('KEYWORDMGR_PHP') || defined('SEARCH_PHP')) $cpg_db_keywordmgr_php = array(
	'select_keywords'			=> "select keywords from {$CONFIG['TABLE_PICTURES']}",
	'select_pid'				=> "SELECT `pid`,`keywords` FROM {$CONFIG['TABLE_PICTURES']} WHERE CONCAT(' ',`keywords`,' ') LIKE '% {$keywordEdit} %'",
	'update_pictures'			=> "UPDATE {$CONFIG['TABLE_PICTURES']} SET `keywords` = '$keywords' WHERE `pid` = '$id'",
	'update_pictures'			=> "UPDATE {$CONFIG['TABLE_PICTURES']} SET `keywords` = TRIM(REPLACE(`keywords`,'  ',' '))",
	'select_pid_02'				=> "SELECT `pid`,`keywords` FROM {$CONFIG['TABLE_PICTURES']} WHERE CONCAT(' ',`keywords`,' ') LIKE '% {$remov} %'",
	'update_pictures_02'		=> "UPDATE {$CONFIG['TABLE_PICTURES']} SET `keywords` = '$keywords' WHERE `pid` = '$id'",
	'update_pictures_03'		=> "UPDATE {$CONFIG['TABLE_PICTURES']} SET `keywords` = TRIM(REPLACE(`keywords`,'  ',' '))"
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
	'select_extension'			=> "SELECT extension FROM {$CONFIG['TABLE_FILETYPES']}"
);


/**********************************************************/
//queries from mode.php
/***********************************************************/
if (defined('MODE_PHP')) $cpg_db_mode_php = array(
	'update_config'		=> "UPDATE {$CONFIG['TABLE_CONFIG']} SET value = '$value' WHERE name = 'display_coppermine_news'"
);


/**********************************************************/
//queries from modifyalb.php
/***********************************************************/
if (defined('MODIFYALB_PHP')) $cpg_db_modifyalb_php = array(
	'select_cid'				=> "SELECT cid, name, description FROM {$CONFIG['TABLE_CATEGORIES']} WHERE parent = '$parent' AND cid != 1 ORDER BY pos",
	'select_group_id'			=> "SELECT group_id FROM {$CONFIG['TABLE_CATMAP']} WHERE group_id = '$group_id' AND cid=".$subcat['cid'],
	'select_name'				=> "SELECT name FROM {$CONFIG['TABLE_CATEGORIES']} WHERE cid = '" . $ALBUM_DATA['category'] . "' LIMIT 1",
	'select_pid'				=> "SELECT pid, filepath, filename, url_prefix FROM {$CONFIG['TABLE_PICTURES']} WHERE aid='{$CLEAN['album']}' $keyword AND approved='YES' ORDER BY filename",
	'select_group_id_02'		=> "SELECT group_id, group_name FROM {$CONFIG['TABLE_USERGROUPS']} WHERE 1",
	'select_group_id_03'		=> "SELECT group_id, group_name FROM {$CONFIG['TABLE_USERGROUPS']} WHERE group_id IN " . USER_GROUP_SET,
	'select_group_id_04'		=> "SELECT group_id, group_name FROM {$CONFIG['TABLE_USERGROUPS']} WHERE group_id > 1",
	'select_distinct_a.aid'		=> "SELECT DISTINCT a.aid as aid, a.title as title, c.name as cname FROM {$CONFIG['TABLE_ALBUMS']} as a, {$CONFIG['TABLE_CATEGORIES']} as c WHERE a.category = c.cid AND a.category < '" . FIRST_USER_CAT . "'",
	'select_aid'				=> "SELECT aid, title FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = 0 ORDER BY title",
	'select_aid_02'				=> "SELECT aid , title FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = $cat",
	'select_a.aid'				=> "SELECT a.aid, a.title, c.name AS cname FROM {$CONFIG['TABLE_ALBUMS']} AS a INNER JOIN {$CONFIG['TABLE_CATEGORIES']} AS c ON a.owner = '$user_id' AND a.category = c.cid ORDER BY a.category",
	'select_all_from_albums'	=> "SELECT * FROM {$CONFIG['TABLE_ALBUMS']} WHERE 1 LIMIT 1",
	'select_all_from_albums_02'	=> "SELECT * FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = " . (FIRST_USER_CAT + USER_ID) . " OR owner = '" . USER_ID . "' LIMIT 1",
	'select_all_from_albums_03'	=> "SELECT * FROM {$CONFIG['TABLE_ALBUMS']} WHERE aid='{$CLEAN['album']}'",
	'select_sum_hits'			=> "SELECT SUM(hits) FROM {$CONFIG['TABLE_PICTURES']} WHERE aid='{$CLEAN['album']}'",
	'select_sum_votes'			=> "SELECT SUM(votes) FROM {$CONFIG['TABLE_PICTURES']} WHERE aid='{$CLEAN['album']}' AND votes > 0",
	'select_count_pictures'		=> "SELECT COUNT(*) FROM {$CONFIG['TABLE_PICTURES']} WHERE aid='{$CLEAN['album']}'"
);


/**********************************************************/
//queries from pic_editor.php
/***********************************************************/
if (defined('EDITPICS_PHP')) $cpg_db_pic_editor_php = array(
	'select_all_from_pictures'	=> "SELECT * FROM {$CONFIG['TABLE_PICTURES']} WHERE pid = '$pid'",
	'update_pictures'			=> "UPDATE {$CONFIG['TABLE_PICTURES']} SET pheight = $height, pwidth = $width, filesize = $filesize, total_filesize = $total_filesize WHERE pid = '$pid'",
	'update_pictures_02'		=> "UPDATE {$CONFIG['TABLE_PICTURES']} SET total_filesize = $total_filesize WHERE pid = '$pid'"
	
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
	'update_config'				=> "UPDATE {$CONFIG['TABLE_CONFIG']} SET value = '$value' WHERE name = 'enable_plugins'",
	'update_plugins'			=> 'update '.$CONFIG['TABLE_PLUGINS'].' set priority='.$priority.' where priority='.($priority-1).';',
	'update_plugins_02'			=> 'update '.$CONFIG['TABLE_PLUGINS'].' set priority='.($priority-1).' where plugin_id='.$thisplugin->plugin_id.';',
	'update_plugins_03'			=> 'update '.$CONFIG['TABLE_PLUGINS'].' set priority='.($priority).' where priority='.($priority+1).';',
	'update_plugins_04'			=> 'update '.$CONFIG['TABLE_PLUGINS'].' set priority='.($priority+1).' where plugin_id='.$thisplugin->plugin_id.';'
);


/**********************************************************/
//queries from profile.php
/***********************************************************/
if (defined('PROFILE_PHP')) $cpg_db_profile_php = array(
	'select_pid'				=> "SELECT pid FROM {$CONFIG['TABLE_PICTURES']} WHERE owner_name = '".addslashes($username)."'",
	'select_count_pictures'		=> "SELECT count(*), MAX(pid) FROM {$CONFIG['TABLE_PICTURES']} AS p WHERE owner_id = '$uid' AND approved = 'YES' $FORBIDDEN_SET",
	'select_count_albums'		=> "SELECT count(*) FROM {$CONFIG['TABLE_ALBUMS']} AS p WHERE category = '" . (FIRST_USER_CAT + $uid) . "' $FORBIDDEN_SET",
	'select_filepath'			=> "SELECT filepath, filename, url_prefix, pwidth, pheight " . "FROM {$CONFIG['TABLE_PICTURES']} " . "WHERE pid='" . $thumb_pid . "'",
	'select_count_pictures_02'	=> "SELECT count(*), MAX(msg_id) FROM {$CONFIG['TABLE_COMMENTS']} as c, {$CONFIG['TABLE_PICTURES']} as p WHERE c.pid = p.pid AND approval='YES' AND author_id = '$uid' $FORBIDDEN_SET",
	'select_filepath_02'		=> "SELECT filepath, filename, url_prefix, pwidth, pheight, msg_author, UNIX_TIMESTAMP(msg_date) as msg_date, msg_body, approval " . "FROM {$CONFIG['TABLE_COMMENTS']} AS c, {$CONFIG['TABLE_PICTURES']} AS p " . "WHERE msg_id='" . $lastcom_id . "' AND approval = 'YES' AND c.pid = p.pid",
	'select_user_id'			=> "SELECT user_id " . "FROM {$CONFIG['TABLE_USERS']} " . "WHERE user_email = '" . $email . "'",
	'update_users'				=> "UPDATE {$CONFIG['TABLE_USERS']} SET " . "user_profile1 = '$profile1', " . "user_profile2 = '$profile2', " . "user_profile3 = '$profile3', " . "user_profile4 = '$profile4', " . "user_profile5 = '$profile5', " . "user_profile6 = '$profile6'" . ($CONFIG['allow_email_change'] && !$error ? ", user_email = '$email'" : "") . " WHERE user_id = '" . USER_ID . "'",
	'update_usertable'			=> "UPDATE {$cpg_udb->usertable} SET ".$cpg_udb->field['password']." = '$new_pass' WHERE {$cpg_udb->field['user_id']} = '" . USER_ID . "' AND BINARY {$cpg_udb->field['password']} = '$current_pass'",
	'select_username'			=> "SELECT user_name, user_email, user_group, UNIX_TIMESTAMP(user_regdate) as user_regdate, group_name, " . "user_profile1, user_profile2, user_profile3, user_profile4, user_profile5, user_profile6, user_group_list, " . "COUNT(pid) as pic_count, ROUND(SUM(total_filesize)/1024) as disk_usage, group_quota " . "FROM {$CONFIG['TABLE_USERS']} AS u " . "INNER JOIN {$CONFIG['TABLE_USERGROUPS']} AS g ON user_group = group_id " . "LEFT JOIN {$CONFIG['TABLE_PICTURES']} AS p ON p.owner_id = u.user_id " . "WHERE user_id ='" . USER_ID . "' " . "GROUP BY user_id ",
	'select_group_name'			=> "SELECT group_name " . "FROM {$CONFIG['TABLE_USERGROUPS']} " . "WHERE group_id IN ({$user_data['user_group_list']}) AND group_id != {$user_data['user_group']} " . "ORDER BY group_name"
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
	'count_comments'				=> "SELECT count(*) FROM {$CONFIG['TABLE_COMMENTS']} WHERE 1",
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
	'select_aid'				=> "SELECT aid, title FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = 0",
	'select_distinct_a.aid'		=> "SELECT DISTINCT a.aid as aid, a.title as title, c.name as cname FROM {$CONFIG['TABLE_ALBUMS']} as a, {$CONFIG['TABLE_CATEGORIES']} as c WHERE a.category = c.cid AND a.category < '" . FIRST_USER_CAT . "'",
	'select_filepath'			=> "SELECT filepath, filename " . "FROM {$CONFIG['TABLE_PICTURES']} " . "WHERE filepath LIKE '$startdir%'",
	'select_aid'				=> "SELECT aid, title " . "FROM {$CONFIG['TABLE_ALBUMS']} " . "WHERE 1",
	'update_config'				=> "UPDATE {$CONFIG['TABLE_CONFIG']} SET value = '$browse_batch_add' WHERE name = 'browse_batch_add'",
	'update_config_02'			=> "UPDATE {$CONFIG['TABLE_CONFIG']} SET value = '$display_thumbs_batch_add' WHERE name = 'display_thumbs_batch_add'"
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
	'get_alb_pwrd'				=> "SELECT aid FROM ". $CONFIG['TABLE_ALBUMS'] .
								   " WHERE MD5(alb_password)='%1\$s' AND aid='%2\$s'"
);


/**********************************************************/
//queries from update.php
/***********************************************************/
 $cpg_db_update_php = array(
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
								   " WHERE group_id = '%1\$s' AND albums.visibility = groups.group_id",
//	'delete_from_users_03'		=> "DELETE FROM {$CONFIG['TABLE_USERS']} WHERE user_name = '' LIMIT 1"
);


/**********************************************************/
//queries from util.php
/***********************************************************/
if (defined('UTIL_PHP') || defined('UPLOAD_PHP')) $cpg_db_util_php = array(
	'update_pictures'				=> "UPDATE {$CONFIG['TABLE_PICTURES']} SET title = '' $albstr",
	'select_all_from_pictures'		=> "SELECT * FROM {$CONFIG['TABLE_PICTURES']} $albstr",
	'update_pictures'				=> "UPDATE {$CONFIG['TABLE_PICTURES']} SET title = '$newtitle' WHERE pid = '$pid'",
	'select_aid'					=> "SELECT aid, category, IF(user_name IS NOT NULL, CONCAT('(', user_name, ') ',title), CONCAT(' - ', title)) AS title " . "FROM {$CONFIG['TABLE_ALBUMS']} AS a " . "LEFT JOIN {$CONFIG['TABLE_USERS']} AS u ON category = (" . FIRST_USER_CAT . " + user_id) " . "ORDER BY category, title",
	'select_name'					=> "SELECT name FROM {$CONFIG['TABLE_CATEGORIES']} WHERE cid = {$row['category']}",
	'select_all_from_pictures_02'	=> "SELECT * FROM {$CONFIG['TABLE_PICTURES']} $albstr LIMIT $startpic, $numpics",
	'update_pictures_02'			=> "UPDATE {$CONFIG['TABLE_PICTURES']} SET pwidth='$imagesize[0]' , pheight='$imagesize[1]' WHERE pid='".$row['pid']."' ",
	'select_all_from_pictures_03'	=> "SELECT * FROM {$CONFIG['TABLE_PICTURES']} $albstr",
	'select_all_from_pictures_04'	=> "SELECT * FROM {$CONFIG['TABLE_PICTURES']} $albstr",
	'update_pictures_03'			=> "UPDATE {$CONFIG['TABLE_PICTURES']} SET filesize='$image_filesize', total_filesize='$total_filesize', pwidth='{$imagesize[0]}', pheight='{$imagesize[1]}' WHERE pid='$pid' ",
	'select_all_from_pictures_05'	=> "SELECT * FROM {$CONFIG['TABLE_PICTURES']} $albstr",
	'update_pictures_04'			=> "UPDATE {$CONFIG['TABLE_PICTURES']} SET total_filesize='$total_filesize' WHERE pid='$pid'",
	'delete_from_comments'			=> "DELETE FROM {$CONFIG['TABLE_COMMENTS']} WHERE msg_id= '{$single}' LIMIT 1",
	'select_pid'					=> "SELECT pid FROM {$CONFIG['TABLE_PICTURES']}",
	'select_all_from_comments'		=> "SELECT * FROM {$CONFIG['TABLE_COMMENTS']} WHERE pid NOT IN $check_str",
	'delete_from_comments_02'		=> "DELETE FROM {$CONFIG['TABLE_COMMENTS']} WHERE msg_id= $msg_id",
	'select_all_from_pictures_06'	=> "SELECT * FROM {$CONFIG['TABLE_PICTURES']} $albstr",
	'delete_from_pictures'			=> "DELETE FROM {$CONFIG['TABLE_PICTURES']} WHERE pid='$pid' LIMIT 1",
	'delete_from_comments_03'		=> "DELETE FROM {$CONFIG['TABLE_COMMENTS']} WHERE pid='$pid' LIMIT 1",
	'delete_from_exif'				=> "DELETE FROM {$CONFIG['TABLE_EXIF']} WHERE filename='".addslashes($image)."' LIMIT 1",
	'update_pictures_05'			=> "UPDATE {$CONFIG['TABLE_PICTURES']} SET hits ='0' $albstr",
	'select_all_from_pictures_07'	=> "SELECT * FROM {$CONFIG['TABLE_PICTURES']} $albstr ORDER BY pid ASC LIMIT $startpic, $numpics",
	'update_pictures_06'			=> "UPDATE {$CONFIG['TABLE_PICTURES']} SET total_filesize = '$total_filesize' WHERE pid = '$db_pid' LIMIT 1",
	'update_pictures_07'			=> "UPDATE {$CONFIG['TABLE_PICTURES']} SET filesize = '$filesize' WHERE pid = '$db_pid' LIMIT 1",
	'update_pictures_08'			=> "UPDATE {$CONFIG['TABLE_PICTURES']} SET `pwidth` = '{$dimensions[0]}', `pheight` = '{$dimensions[1]}' WHERE `pid` = '$db_pid' LIMIT 1"
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
$cpg_db_cpg_APIArray_php = array(
	'select_user_id'				=> "SELECT user_id, user_name, user_password FROM {$CONFIG['TABLE_USERS']} WHERE user_name = '$username' AND BINARY user_password = '$encpassword' AND user_active = 'YES'",
	'select_u.user_id'				=> "SELECT u.user_id AS id, u.user_name AS username, u.user_password AS password,  u.user_group+100 AS group_id  FROM   {$CONFIG['TABLE_USERS']} AS u INNER JOIN {$CONFIG['TABLE_USERGROUPS']} AS g ON u.user_group = g.group_id ".  "WHERE    u.user_id = '$id'",
	'select_aid'					=> "SELECT aid  FROM   {$CONFIG['TABLE_ALBUMS']}    WHERE   visibility != '0' AND   visibility !='".(FIRST_USER_CAT + USER_ID)."' AND   visibility NOT IN ".USER_GROUP_SET,
	'select_user_group_list'		=> "SELECT  user_group_list   FROM  {$CONFIG['TABLE_USERS']} AS u   WHERE  user_id = '{$user['id']}' AND user_group_list <> '';",
	'select_max_group_quota'		=> "SELECT  MAX(group_quota) as disk_max, MIN(group_quota) as disk_min, " .
						               "MAX(can_rate_pictures) as can_rate_pictures, MAX(can_send_ecards) as can_send_ecards, " .
						               "MAX(upload_form_config) as ufc_max, MIN(upload_form_config) as ufc_min, " .
						               "MAX(custom_user_upload) as custom_user_upload, MAX(num_file_upload) as num_file_upload, " .
						               "MAX(num_URI_upload) as num_URI_upload, " .
						               "MAX(can_post_comments) as can_post_comments, MAX(can_upload_pictures) as can_upload_pictures, " .
						               "MAX(can_create_albums) as can_create_albums, " .
						               "MAX(has_admin_access) as has_admin_access, " .
						               "MIN(pub_upl_need_approval) as pub_upl_need_approval, MIN( priv_upl_need_approval) as  priv_upl_need_approval ".
						               "FROM {$CONFIG['TABLE_USERGROUPS']} WHERE group_id in (" .  implode(",", $groups). ")",
	'select_group_name'				=> "SELECT group_name FROM  {$CONFIG['TABLE_USERGROUPS']} WHERE group_id= " . $pri_group,
	'select_all_from_usergroups'	=> "SELECT * FROM {$CONFIG['TABLE_USERGROUPS']} WHERE group_id = $default_group_id"
);


/**********************************************************************************************************/
//	queries  from api/ cpgAPIcatList.php
/**********************************************************************************************************/
$cpg_db_apgAPIcatList_php = array(
	'select_cid'				=> "SELECT cid, name, description " . "FROM {$CONFIG['TABLE_CATEGORIES']} " . "WHERE cid = '$parent' " . "ORDER BY pos",
	'select_user_name'			=> "SELECT user_name, user_id FROM {$CONFIG['TABLE_USERS']}",
	'select_cid_02'				=> "SELECT cid, name, description " . "FROM {$CONFIG['TABLE_CATEGORIES']} " . "WHERE parent = '$parent' " . "ORDER BY pos",
	'select_aid'				=> "SELECT aid,title FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = $category ".$ALBUM_SET
);


/**********************************************************************************************************/
//	queries  from api/ cpgAPIinit.inc.php
/**********************************************************************************************************/
$cpg_db_cpgAPIinit_inc_php = array(
	'select_all_from_config'	=> "SELECT * FROM {$CONFIG['TABLE_CONFIG']}"
);


/**********************************************************************************************************/
//	queries  from api/ cpgAPIpicmgmt.inc.php
/**********************************************************************************************************/
$cpg_db_cpgAPIpicmgmt_inc_php = array(
	'select_sum_total_filesize'	=> "SELECT sum(total_filesize) FROM {$CONFIG['TABLE_PICTURES']}, {$CONFIG['TABLE_ALBUMS']} WHERE  {$CONFIG['TABLE_PICTURES']}.aid = {$CONFIG['TABLE_ALBUMS']}.aid AND category = '" . (FIRST_USER_CAT + USER_ID) . "'",
	'insert_into_pictures'		=> "INSERT INTO {$CONFIG['TABLE_PICTURES']} (pid, aid, filepath, filename, filesize, total_filesize, pwidth, pheight, ctime, owner_id, owner_name, title, caption, keywords, approved, user1, user2, user3, user4, pic_raw_ip, pic_hdr_ip, position) VALUES ('', '$aid', '" . addslashes($filepath) . "', '" . addslashes($filename) . "', '$image_filesize', '$total_filesize', '{$imagesize[0]}', '{$imagesize[1]}', '" . time() . "', '$user_id', '$username','$title', '$caption', '$keywords', '$approved', '$user1', '$user2', '$user3', '$user4', '$raw_ip', '$hdr_ip', '$position')"
);


/**********************************************************************************************************/
//	queries  from api/ cpgAPIupload.php
/**********************************************************************************************************/
$cpg_db_cpgAPIupload_php = array(
	'select_category'			=> "SELECT category FROM {$CONFIG['TABLE_ALBUMS']} WHERE aid='".(int)$_POST['aid']."' and (uploads = 'YES' OR category = '" . (USER_ID + FIRST_USER_CAT) . "')",
	'select_category_02'		=> "SELECT category FROM {$CONFIG['TABLE_ALBUMS']} WHERE aid='".(int)$_POST['aid']."'"
);


/**********************************************************************************************************/
//	queries  from  bridge/ coppermine.inc.php
/**********************************************************************************************************/
$cpg_db_coppermine_inc_php = array(
	'select_user_id'			=> "SELECT user_id, user_name, user_password FROM {$thisusertable} WHERE ",
									//Check the login method (username, email address or both)
									/*switch($CONFIG['login_method']){
										case 'both':
											$sql .= "(user_name = '$username' OR user_email = '$username') AND BINARY user_password = '$encpassword' AND user_active = 'YES'";
											break;
										case 'email':
											$sql .= "user_email = '$username' AND BINARY user_password = '$encpassword' AND user_active = 'YES'";
											break;
										case 'username':
										default:
											$sql .= "user_name = '$username' AND BINARY user_password = '$encpassword' AND user_active = 'YES'";
											break;	*/
	'update_usertable'			=> "UPDATE {$thisusertable} SET user_lastvisit = NOW() ",
									//Check the login method (username, email address or both)
									/*switch($CONFIG['login_method']){
										case 'both':
											$sql .= "WHERE (user_name = '$username' OR user_email = '$username') AND BINARY user_password = '$encpassword' AND user_active = 'YES'";
											break;
										case 'email':
											$sql .= "WHERE user_email = '$username' AND BINARY user_password = '$encpassword' AND user_active = 'YES'";
											break;
										case 'username':
										default:
											$sql .= "WHERE user_name = '$username' AND BINARY user_password = '$encpassword' AND user_active = 'YES'";
											break;	*/
	'update_sessiontable'			=> "update {$thissessionstable} set user_id={$USER_DATA['user_id']} $remember_sql where session_id=md5('$session_id');",
	'update_sessiontable_02'		=> "update {$thissessionstable} set user_id = 0, remember=0 where session_id=md5('$session_id');",
	'select_user_group_list'		=> "SELECT user_group_list FROM {$thisusertable} AS u WHERE {$thisfield['user_id']}='{$user['id']}' and user_group_list <> '';",
	'delete_from_sessiontable'		=> "delete from {$thissessionstable} where time<$session_life_time and remember=0;",
	'delete_from_sessiontable_02'	=> "delete from {$thissessionstable} where time<$rememberme_life_time;",
	'select_user_id'				=> 'select user_id from '.$thissessionstable.' where session_id=md5("'.$session_id.'");',
	'select_uaer_id_02'				=> 'select user_id as id, user_password as password from '.$thisusertable.' where user_id='.$row['user_id'],
	'update_sessiontable_03'		=> "update {$thissessionstable} set time='".time()."' where session_id=md5('$session_id');",
	'insert_into_sessiontable'		=> 'insert into '.$thissessionstable.' (session_id, user_id, time, remember) values ("'.md5($session_id).'", 0, "'.time().'", 0);',
	'select_session_id'				=> "SELECT session_id FROM {$thissessionstable} WHERE session_id=MD5('$session_id')",
	'select_count_user_id'			=> "select count(user_id) as num_guests from {$thissessionstable} where user_id=0;",
	'select_count_user_id_02'		=> "select count(user_id) as num_users from {$thissessionstable} where user_id>0;",
	'select_all_from_groupstable'	=> "SELECT * FROM {$thisgroupstable} WHERE {$thisfield['grouptbl_group_name']} <> ''",
	'select_group_id'				=> "SELECT group_id, group_name FROM {$CONFIG['TABLE_USERGROUPS']} WHERE 1",
	'insert_into_usergroups'		=> "INSERT INTO {$CONFIG['TABLE_USERGROUPS']} (group_id, group_name, has_admin_access) VALUES ('$i_group_id', '" . addslashes($i_group_name) . "', '$admin_access')",
	'update_usergroups'				=> "UPDATE {$CONFIG['TABLE_USERGROUPS']} SET group_name = '" . addslashes($i_group_name) . "' WHERE group_id = '$i_group_id' LIMIT 1",
	'update_usergroups_02'			=> "UPDATE {$CONFIG['TABLE_USERGROUPS']} SET has_admin_access = '1' WHERE group_id = '1' LIMIT 1"
);


/**********************************************************************************************************/
//	queries  from  bridge/ eblah.inc.php
/**********************************************************************************************************/
$cpg_db_eblah_php = array(
	'select_user_id'				=> "SELECT {$thisfield['user_id']} AS user_id FROM {$thisusertable} WHERE {$thisfield['username']}  = '$username'",
	'insert_ignore_into_usertable'	=> "INSERT IGNORE INTO {$thisusertable} (`user_name`, `user_password`, `user_email`, `user_active`, `user_group`) VALUES ( '$username', '$password', '$email', 'YES', $user_group)"
);


/**********************************************************************************************************/
//	queries  from  bridge/ invisionboard20.inc.php
/**********************************************************************************************************/
$cpg_db_invisionboard20_inc_php = array(
	'select_member_id'				=> "SELECT member_id , member_login_key FROM {$thissessionstable} AS s INNER JOIN {$thisusertable} AS u ON s.member_id = u.id WHERE s.id = '$session_id'"
);


/**********************************************************************************************************/
//	queries  from  bridge/ mambo.inc.php
/**********************************************************************************************************/
$cpg_db_mambo_inc_php = array(
	'delete_from_sessiontable'		=> 'delete from '.$thissessionstable.' where (time < '.$past.');',
	'update_sessiontable'			=> 'update '.$thissessionstable.' set time="'.time().'" where session_id=md5("'.$thissession_id.'");',
	'select_all_from_groupstable'	=> "SELECT * FROM {$thisgroupstable}",
	'select_userid'					=> 'select userid from '.$thissessionstable.' where session_id=md5("'.$sessioncookie.'");',
	'select_id'						=> 'select id, password from '.$thisusertable.' where id='.$row['userid'],
	'select_u.user_id'				=> 'select u.'.$f['user_id'].' as id, u.'.$f['password'].' as password, u.'.$f['username'].' as username, u.'.$f['usertbl_group_id'].' as usertbl_group_id, g.'.$f['grouptbl_group_id'].' as grouptbl_group_id, g.'.$f['grouptbl_group_name'].' as grouptbl_group_name '.
										'from '.$thisusertable.' as u inner join '.$thisgroupstable.' as g on gid=group_id where u.'.$f['username'].'="'.$username.'" and u.'.$f['password'].'="'.$password.'" and u.block=0;',
	'update_sessiontable'			=> 'update '.$thissessionstable.' set userid='.$row['id'].',username="'.$row['username'].'",guest=0 ,gid='.$gid.' ,usertype="'.$row['grouptbl_group_name'].'" where session_id=md5("'.$thissession_id.'");',
	'update_usertable'				=> 'update '.$thisusertable.' set lastvisitDate="'.$currentDate.'" where id='.$row['id'],
	'select_u.user_id_02'			=> 'select u.'.$f['user_id'].' as id, u.'.$f['password'].' as password, u.'.$f['username'].' as username, u.'.$f['usertbl_group_id'].' as usertbl_group_id, g.'.$f['grouptbl_group_id'].' as grouptbl_group_id, g.'.$f['grouptbl_group_name'].' as grouptbl_group_name '.
										'from '.$thisusertable.' as u inner join '.$thisgroupstable.' as g on gid=group_id where u.'.$f['username'].'="'.$username.'" and u.'.$f['password'].'="'.$password.'" and u.block=0;',
	'update_usertable_02'			=>  'update '.$thissessionstable.' set userid='.$row['id'].',username="'.$row['username'].'",guest=0 ,gid='.$gid.' ,usertype="'.$row['grouptbl_group_name'].'" where session_id=md5("'.$thissession_id.'");',
	'update_usertable_03'			=> 'update '.$thisusertable.' set lastvisitDate="'.$currentDate.'" where id='.$row['id'],
	'insert_into_sessiontable'		=> 'insert into '.$thissessionstable.' (session_id, username, guest, time, gid) values ("'.md5($thissession_id).'", "", 1, "'.time().'",0)',
	'select_session_id'				=>  "SELECT session_id FROM {$thissessionstable} WHERE session_id=MD5('$randnum')",
	'select_count_all'				=> "SELECT COUNT(*) \nFROM $table AS g1 \nLEFT JOIN $table AS g2 ON g1.lft > g2.lft AND g1.lft < g2.rgt \nWHERE g1.group_id=$grp_src AND g2.group_id=$grp_tgt",
	'select_count_all_02'			=> "SELECT COUNT(*) \nFROM $table AS g1 \nLEFT JOIN $table AS g2 ON g1.lft > g2.lft AND g1.lft < g2.rgt \nWHERE g1.name='$grp_src' AND g2.name='$grp_tgt'",
	'select_count_all_03'			=> "SELECT COUNT(*) \nFROM $table AS g1 \nLEFT JOIN $table AS g2 ON g1.lft > g2.lft AND g1.lft < g2.rgt \nWHERE g1.group_id='$grp_src' AND g2.name='$grp_tgt'",
	'select_count_all_04'			=> "SELECT COUNT(*) \nFROM $table AS g1 \nLEFT JOIN $table AS g2 ON g1.lft > g2.lft AND g1.lft < g2.rgt \nWHERE g1.name=$grp_src AND g2.group_id='$grp_tgt'"
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
$cpg_db_udb_base_inc_php = array(
	'select_u.user_id'				=> "SELECT u.{$f['user_id']} AS id, u.{$f['username']} AS username, u.{$f['password']} AS password, ug.{$f['usertbl_group_id']} AS group_id ".
	                                   "FROM {$thisusertable} AS u, {$thisusergroupstable} AS ug ".
	                                   "WHERE u.{$f['user_id']}=ug.{$f['user_id']} AND u.{$f['user_id']}='$id'",
	'select_u.user_id_02'			=> "SELECT u.{$f['user_id']} AS id, u.{$f['username']} AS username, u.{$f['password']} AS password, u.{$f['usertbl_group_id']}+100 AS group_id ".
	                                   "FROM {$thisusertable} AS u INNER JOIN {$thisgroupstable} AS g ON u.{$f['usertbl_group_id']}=g.{$f['grouptbl_group_id']} ".
	                                   "WHERE u.{$f['user_id']}='$id'",
	'select_count_all'				=> "SELECT count(*) FROM {$thisusertable} WHERE 1", $thislink_id,
	'select_user_id'				=> "SELECT {$f['user_id']} as user_id, {$f['username']} as user_name, {$f['email']} as user_email, {$f['regdate']} as user_regdate, {$f['lastvisit']} as user_lastvisit, {$f['active']} as user_active, ".
						               "COUNT(pid) as pic_count, ROUND(SUM(total_filesize)/1024) as disk_usage, group_name, group_quota ".
						               "FROM {$thisusertable} AS u ".
						               "INNER JOIN {$C['TABLE_USERGROUPS']} AS g ON u.{$f['usertbl_group_id']} = g.group_id ".
						               "LEFT JOIN {$C['TABLE_PICTURES']} AS p ON p.owner_id = u.{$f['user_id']} ".
						               $options['search'].
						               "GROUP BY user_id " . "ORDER BY " . $sort_codes[$options['sort']] . " ".
						               "LIMIT {$options['lower_limit']}, {$options['users_per_page']};",
	'select_username'				=> "SELECT {$thisfield['username']} as user_name FROM {$thisusertable} WHERE {$thisfield['user_id']} = '$uid'",
	'select_user_id_02'				=> "SELECT {$thisfield['user_id']} AS user_id FROM {$thisusertable} WHERE {$thisfield['username']}  = '$username'",
	'select_max_group_quota'		=> "SELECT MAX(group_quota) as disk_max, MIN(group_quota) as disk_min, " .
			                           "MAX(can_rate_pictures) as can_rate_pictures, MAX(can_send_ecards) as can_send_ecards, " .
			                           "MAX(upload_form_config) as ufc_max, MIN(upload_form_config) as ufc_min, " .
			                           "MAX(custom_user_upload) as custom_user_upload, MAX(num_file_upload) as num_file_upload, " .
			                           "MAX(num_URI_upload) as num_URI_upload, " .
			                           "MAX(can_post_comments) as can_post_comments, MAX(can_upload_pictures) as can_upload_pictures, " .
			                           "MAX(can_create_albums) as can_create_albums, " .
			                           "MAX(has_admin_access) as has_admin_access, " .
			                           "MIN(pub_upl_need_approval) as pub_upl_need_approval, MIN( priv_upl_need_approval) as  priv_upl_need_approval ".
			                           "FROM {$CONFIG['TABLE_USERGROUPS']} WHERE group_id in (" .  implode(",", $groups). ")",
	'select_group_name'				=> "SELECT group_name FROM  {$CONFIG['TABLE_USERGROUPS']} WHERE group_id= " . $pri_group,
	'select_all_from_usergroups'	=> "SELECT * FROM {$CONFIG['TABLE_USERGROUPS']} WHERE group_id = $default_group_id",
	'select_all_from_usertable'		=> "SELECT *, {$thisfield['username']} AS user_name,
                                       {$thisfield['email']} AS user_email,
                                       {$thisfield['regdate']} AS user_regdate,
                                       {$thisfield['location']} AS user_location,
                                       {$thisfield['website']} AS user_website
                                       FROM  {$thisusertable} WHERE {$thisfield['user_id']} = '$uid'",
	'select_null_from_albums'		=> "select null from {$CONFIG['TABLE_ALBUMS']} as p  INNER JOIN {$CONFIG['TABLE_PICTURES']} AS pics ON pics.aid = p.aid where ( category>".FIRST_USER_CAT." $forbidden) group by category;",
	'select_user_id_03'				=> "SELECT {$f['user_id']} as user_id,{$f['username']} as user_name,COUNT(DISTINCT a.aid) as alb_count,COUNT(DISTINCT pid) as pic_count,MAX(pid) as thumb_pid, MAX(galleryicon) as gallery_pid ".
									   "FROM {$CONFIG['TABLE_ALBUMS']} AS a ".
									   "INNER JOIN {$thisusertable} as u on u.{$f['user_id']} = a.category - " . FIRST_USER_CAT . " ".
									   "INNER JOIN {$CONFIG['TABLE_PICTURES']} AS p ON p.aid = a.aid ".
									   "WHERE ((isnull(approved) or approved='YES') AND category > " . FIRST_USER_CAT . ") $forbidden_with_icon GROUP BY user_id ".
									   "ORDER BY category "."LIMIT $lower_limit, $users_per_page ",
	'select_category'				=> "SELECT category - 10000 as user_id ".
									   "FROM {$CONFIG['TABLE_ALBUMS']} AS a ".
									   "INNER JOIN {$CONFIG['TABLE_PICTURES']} AS p ON p.aid = a.aid ".
									   "WHERE ((isnull(approved) or approved='YES') ".
									   "AND category > " . FIRST_USER_CAT . ") $forbidden_with_icon GROUP BY category ".
									   "LIMIT $lower_limit, $users_per_page ",
	'select_user_id_04'				=> "SELECT {$thisfield['user_id']} AS user_id, {$thisfield['username']} AS user_name FROM {$thisusertable} WHERE {$thisfield['user_id']} IN ($userlist)", $thislink_id,
	'select_owner_id'				=> "SELECT owner_id as user_id, COUNT(DISTINCT a.aid) as alb_count, COUNT(DISTINCT pid) as pic_count, MAX(pid) as thumb_pid, MAX(galleryicon) as gallery_pid ".
									   "FROM {$CONFIG['TABLE_ALBUMS']} AS a INNER JOIN {$CONFIG['TABLE_PICTURES']} AS p ON p.aid = a.aid ".
									   "WHERE ((isnull(approved) or approved='YES') AND category > " . FIRST_USER_CAT . ") $forbidden_with_icon GROUP BY user_id ".
									   "ORDER BY category LIMIT $lower_limit, $users_per_page ",
	'select_all_from_groupstable'	=> "SELECT * FROM {$thisgroupstable} WHERE {$thisfield['grouptbl_group_name']} <> ''",
	'select_group_id'				=> "SELECT group_id, group_name FROM {$CONFIG['TABLE_USERGROUPS']} WHERE 1",
	'delete_from_usergroups'		=> "DELETE FROM {$CONFIG['TABLE_USERGROUPS']} WHERE group_id = '" . $c_group_id . "' LIMIT 1",
	'insert_into_usergroups'		=> "INSERT INTO {$CONFIG['TABLE_USERGROUPS']} (group_id, group_name, has_admin_access) VALUES ('$i_group_id', '" . addslashes($i_group_name) . "', '$admin_access')",
	'update_usergroups'				=> "UPDATE {$CONFIG['TABLE_USERGROUPS']} SET group_name = '" . addslashes($i_group_name) . "' WHERE group_id = '$i_group_id' LIMIT 1",
	'update_usergroups_02'			=> "UPDATE {$CONFIG['TABLE_USERGROUPS']} SET has_admin_access = '1' WHERE group_id = '1' LIMIT 1",
	'select_aid'					=> "SELECT aid, CONCAT('(', {$thisfield['username']}, ') ', a.title) AS title
                                        FROM {$CONFIG['TABLE_ALBUMS']} AS a
                                        INNER JOIN {$thisusertable} AS u  ON category = (" . FIRST_USER_CAT . " + {$thisfield['user_id']})
                                        ORDER BY title",
	'select_aid_02'					=> "SELECT aid, IF(category > " . FIRST_USER_CAT . ", CONCAT('* ', title), CONCAT(' ', title)) AS title " . "FROM {$CONFIG['TABLE_ALBUMS']} " . "ORDER BY title",
	'select_aid_03'					=> "SELECT aid, CONCAT('(', {$thisfield['username']}, ') ', a.title) AS title
                                       FROM {$CONFIG['TABLE_ALBUMS']} AS a  INNER JOIN {$thisusertable} AS u
                                       ON category = (" . FIRST_USER_CAT . " + ".USER_ID.") AND {$thisfield['user_id']} = ".USER_ID." ORDER BY title",
	'select_aid_04'					=> "SELECT aid, IF(category > " . FIRST_USER_CAT . ", CONCAT('* ', title), CONCAT(' ', title)) AS title " . "FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = ".(FIRST_USER_CAT+USER_ID)." ORDER BY title",
	'select_aid_05'					=> "SELECT aid, IF({$thisfield['username']} IS NOT NULL,
                                       CONCAT('(', {$thisfield['username']}, ') ', a.title), CONCAT(' - ', a.title)) AS title
                                       FROM {$CONFIG['TABLE_ALBUMS']} AS a INNER JOIN {$thisusertable} AS u
                                       ON category = (" . FIRST_USER_CAT . " + {$thisfield['user_id']}) ORDER BY a.title",
	'select_aid_06'					=> "SELECT aid, title, name FROM {$CONFIG['TABLE_ALBUMS']} LEFT JOIN {$CONFIG['TABLE_CATEGORIES']} ON cid = category WHERE category < " . FIRST_USER_CAT . " ORDER BY title",
	'select_aid_07'					=> "SELECT aid, title, category FROM {$CONFIG['TABLE_ALBUMS']} WHERE category < " . FIRST_USER_CAT . " ORDER BY title",
	'select_name'					=> "SELECT name, parent FROM " . $CONFIG['TABLE_CATEGORIES'] . " WHERE cid='" . $public_result[$i]['category'] . "'",
	'select_aid'					=> "SELECT aid, title, category FROM {$CONFIG['TABLE_ALBUMS']} WHERE category >= " . FIRST_USER_CAT . " ORDER BY aid",
	'select_user_id_05'				=> "SELECT ({$thisfield['user_id']} + ".FIRST_USER_CAT.") AS id, CONCAT('(', {$thisfield['username']}, ') ') as name
										FROM {$thisusertable}
										ORDER BY name ASC",$thislink_id,
	'select_user_id_06'				=> "SELECT {$thisfield['user_id']} AS user_id, {$thisfield['username']} AS user_name FROM {$thisusertable}".
									   " WHERE {$thisfield['username']} = '$username' AND BINARY {$thisfield['password']} = '$encpassword'"
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
$cpg_db_crop_inc_php = array(
	'select_all_from_pictures'		=> "SELECT * FROM {$CONFIG['TABLE_PICTURES']} WHERE pid = '$pid'"
);


/**********************************************************************************************************/
//	queries  from  include/ exif_php.inc.php
/**********************************************************************************************************/
$cpg_db_exif_php_inc_php = array(
	'select_all_from_exif'		=> "SELECT * FROM {$CONFIG['TABLE_EXIF']} WHERE filename = '".addslashes($filename)."'",
	'insert_into_exif'			=> "INSERT INTO {$CONFIG['TABLE_EXIF']} VALUES ('".addslashes($filename)."', '".addslashes(serialize($exifRawData))."')"
);


/**********************************************************************************************************/
//	queries  from  include/ functions.inc.php
/**********************************************************************************************************/
$cpg_db_functions_inc_php = array(
	'select_aid'					=> "SELECT aid FROM {$CONFIG['TABLE_ALBUMS']} as a WHERE category>=" . FIRST_USER_CAT,
	'select_aid_02'					=> "SELECT aid FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = {$cid}",
	'select_cid'					=> "SELECT cid FROM {$CONFIG['TABLE_CATEGORIES']} WHERE parent = '$cid'",
	'select_aid_03'					=> "SELECT aid FROM {$CONFIG['TABLE_ALBUMS']}",
	'select_aid_04'					=> "SELECT aid, MD5(alb_password) as md5_password FROM ".$CONFIG['TABLE_ALBUMS']." WHERE aid IN ($aid_str)",
	'select_aid_05'					=> "SELECT aid FROM {$CONFIG['TABLE_ALBUMS']} WHERE visibility != '0' AND visibility !='".(FIRST_USER_CAT + USER_ID)."' AND visibility NOT IN ".USER_GROUP_SET."AND aid NOT IN ($aid_str)",
	'select_count_pid'				=> "SELECT COUNT(pid) from {$CONFIG['TABLE_PICTURES']} WHERE ((aid='$album' $forbidden_set_string ) $keyword) $approved $ALBUM_SET",
	'select_select_columns'			=> "SELECT $select_columns from {$CONFIG['TABLE_PICTURES']} WHERE ((aid='$album' $forbidden_set_string ) $keyword) $approved $ALBUM_SET ORDER BY $sort_order $limit",
	'select_count_pictures.pid'		=> "SELECT COUNT({$CONFIG['TABLE_PICTURES']}.pid) from {$CONFIG['TABLE_COMMENTS']}, {$CONFIG['TABLE_PICTURES']}  WHERE {$CONFIG['TABLE_PICTURES']}.approved = 'YES' AND {$CONFIG['TABLE_COMMENTS']}.pid = {$CONFIG['TABLE_PICTURES']}.pid AND {$CONFIG['TABLE_COMMENTS']}.approval = 'YES' $TMP_SET $keyword)",
	'select_select_columns_02'		=> "SELECT $select_columns FROM {$CONFIG['TABLE_COMMENTS']} as c, {$CONFIG['TABLE_PICTURES']} as p WHERE approved = 'YES' AND c.pid = p.pid AND c.approval = 'YES' $TMP_SET $keyword) ORDER by msg_id DESC $limit",
	'select_count_pictures.pid_02'	=> "SELECT COUNT({$CONFIG['TABLE_PICTURES']}.pid) from {$CONFIG['TABLE_COMMENTS']}, {$CONFIG['TABLE_PICTURES']}  WHERE approved = 'YES' AND author_id = '$uid' AND {$CONFIG['TABLE_COMMENTS']}.pid = {$CONFIG['TABLE_PICTURES']}.pid $META_ALBUM_SET",
	'select_select_columns_03'		=> "SELECT $select_columns FROM {$CONFIG['TABLE_COMMENTS']} as c, {$CONFIG['TABLE_PICTURES']} as p WHERE approved = 'YES' AND author_id = '$uid' AND c.pid = p.pid $META_ALBUM_SET ORDER by msg_id DESC $limit",
	'select_count_pid_02'			=> "SELECT COUNT(pid) from {$CONFIG['TABLE_PICTURES']} WHERE approved = 'YES' $META_ALBUM_SET",
	'select_select_columns_04'		=> "SELECT $select_columns FROM {$CONFIG['TABLE_PICTURES']} WHERE approved = 'YES' $META_ALBUM_SET ORDER BY pid DESC $limit",
	'select_count_pid_03'			=> "SELECT COUNT(pid) from {$CONFIG['TABLE_PICTURES']} WHERE approved = 'YES' AND owner_id = '$uid' $META_ALBUM_SET",
	'select_select_columns_05'		=> "SELECT $select_columns FROM {$CONFIG['TABLE_PICTURES']} WHERE approved = 'YES' AND owner_id = '$uid' $META_ALBUM_SET ORDER BY pid DESC $limit",
	'select_count_pid_04'			=> "SELECT COUNT(pid) from {$CONFIG['TABLE_PICTURES']} WHERE approved = 'YES' AND hits > 0  $META_ALBUM_SET $keyword",
	'select_select_columns_06'		=> "SELECT $select_columns FROM {$CONFIG['TABLE_PICTURES']} WHERE approved = 'YES'AND hits > 0 $META_ALBUM_SET $keyword ORDER BY hits DESC, filename  $limit",
	'select_count_pid_05'			=> "SELECT COUNT(pid) from {$CONFIG['TABLE_PICTURES']} WHERE approved = 'YES' AND votes >= '{$CONFIG['min_votes_for_rating']}' $META_ALBUM_SET",
	'select_select_columns_07'		=> "SELECT $select_columns FROM {$CONFIG['TABLE_PICTURES']} WHERE approved = 'YES' AND votes >= '{$CONFIG['min_votes_for_rating']}' $META_ALBUM_SET ORDER BY pic_rating DESC, votes DESC, pid DESC $limit",
	'select_count_pid_06'			=> "SELECT COUNT(pid) from {$CONFIG['TABLE_PICTURES']} WHERE approved = 'YES' and hits > 0 $META_ALBUM_SET",
	'select_select_columns_08'		=> "SELECT $select_columns FROM {$CONFIG['TABLE_PICTURES']} WHERE approved = 'YES' and hits > 0 $META_ALBUM_SET ORDER BY mtime DESC $limit",
	'select_count_pid_07'			=> "SELECT COUNT(pid) from {$CONFIG['TABLE_PICTURES']} WHERE approved = 'YES' $META_ALBUM_SET",
	'select_select_columns_09'		=> "SELECT $select_columns FROM {$CONFIG['TABLE_PICTURES']} WHERE approved = 'YES' $META_ALBUM_SET ORDER BY RAND() LIMIT $limit2",
	'select_count_album.aid'		=> "SELECT count({$CONFIG['TABLE_ALBUMS']}.aid) FROM {$CONFIG['TABLE_PICTURES']},{$CONFIG['TABLE_ALBUMS']} WHERE {$CONFIG['TABLE_PICTURES']}.aid = {$CONFIG['TABLE_ALBUMS']}.aid AND approved = 'YES' $META_ALBUM_SET GROUP  BY {$CONFIG['TABLE_PICTURES']}.aid",
	'select_all_albums.title'		=> "SELECT *,{$CONFIG['TABLE_ALBUMS']}.title AS title,{$CONFIG['TABLE_ALBUMS']}.aid AS aid FROM {$CONFIG['TABLE_PICTURES']},{$CONFIG['TABLE_ALBUMS']} WHERE {$CONFIG['TABLE_PICTURES']}.aid = {$CONFIG['TABLE_ALBUMS']}.aid AND approved = 'YES' $META_ALBUM_SET GROUP BY {$CONFIG['TABLE_PICTURES']}.aid ORDER BY {$CONFIG['TABLE_PICTURES']}.ctime DESC $limit",
	'select_count_pid_08'			=> "SELECT COUNT(pid) from {$CONFIG['TABLE_PICTURES']} WHERE approved = 'YES' AND pid IN ($favs) $META_ALBUM_SET",
	'select_select_columns_10'		=> "SELECT $select_columns FROM {$CONFIG['TABLE_PICTURES']} WHERE approved = 'YES' AND pid IN ($favs) $META_ALBUM_SET $limit",
	'select_count_pid_09'			=> "SELECT COUNT(pid) from {$CONFIG['TABLE_PICTURES']} WHERE approved = 'YES' AND substring(from_unixtime(ctime),1,10) = '".substr($date,0,10)."' $META_ALBUM_SET",
	'select_select_columns_11'		=> "SELECT $select_columns FROM {$CONFIG['TABLE_PICTURES']} WHERE approved = 'YES' AND substring(from_unixtime(ctime),1,10) = '".substr($date,0,10)."'  $META_ALBUM_SET $limit",
	'select_title'					=> "SELECT title,keyword from {$CONFIG['TABLE_ALBUMS']} WHERE aid='$aid'",
	'select_count_all_pictures'		=> "SELECT COUNT(*) FROM {$CONFIG['TABLE_PICTURES']} WHERE approved = 'NO'",
	'select_count_msg_id'			=> "SELECT count(msg_id) from {$CONFIG['TABLE_COMMENTS']} where pid=$pid and msg_id!=$skip",
	'update_pictures'				=> "UPDATE {$CONFIG['TABLE_PICTURES']} SET hits=hits+1, lasthit_ip='$raw_ip', mtime=CURRENT_TIMESTAMP WHERE pid='$pid'",
	'insert_into_hits_stats'		=> "INSERT INTO {$CONFIG['TABLE_HIT_STATS']}  SET  pid = $pid, search_phrase = '{$client_details['query_term']}',  Ip   = '$raw_ip',  sdate = '$time',  referer='$referer',  browser = '{$client_details['browser']}',  os = '{$client_details['os']}'",
	'update_albums'					=> "UPDATE {$CONFIG['TABLE_ALBUMS']} SET alb_hits=alb_hits+1 WHERE aid='$aid'",
	'select_name'					=> "SELECT name, parent FROM {$CONFIG['TABLE_CATEGORIES']} WHERE cid = '$cat'",
	'select_cid_02'					=> "SELECT cid, name, parent FROM {$CONFIG['TABLE_CATEGORIES']} WHERE cid = '{$row['parent']}'",
	'select_version'				=> "SELECT VERSION() as version",
	'select_all_from_bridge'		=> "SELECT * FROM {$CONFIG['TABLE_BRIDGE']}",
	'delete_from_hits_stats'		=> "DELETE FROM {$CONFIG['TABLE_HIT_STATS']} WHERE $clause",		
	'delete_from_votes_states'		=> "DELETE FROM {$CONFIG['TABLE_VOTE_STATS']} WHERE $clause",	
											// 	if (is_array($pid)) {  
											// 	if (!count($pid)) {	return;  } 
											//	else {  $clause = "pid IN (".implode(',', $pid).")";  }
											//	} else {    $clause = "pid = '$pid'";  }	
	'insert_into_temp_messages'		=> "INSERT INTO {$CONFIG['TABLE_TEMP_MESSAGES']}  SET   message_id = '$message_id', user_id = '$user_id', time   = '$time',  message = '$message'",
	'select_message'				=> "SELECT message AS message FROM {$CONFIG['TABLE_TEMP_MESSAGES']} WHERE message_id = '$message_id' LIMIT 1",
	'delete_from_temp_messages'		=> "DELETE FROM {$CONFIG['TABLE_TEMP_MESSAGES']} WHERE message_id = '$message_id'",
	'delete_from_temp_messages_02'	=> "DELETE FROM {$CONFIG['TABLE_TEMP_MESSAGES']} WHERE time < '$time'",
	'select_aid_06'					=> "SELECT aid FROM {$CONFIG['TABLE_ALBUMS']} WHERE owner = " . $USER_DATA['user_id'] . " LIMIT 1",
	'select_distinct_category'		=> "SELECT DISTINCT category FROM {$CONFIG['TABLE_ALBUMS']} WHERE owner = '" . $USER_DATA['user_id'] . "' AND aid='$album_id'",
	'select_distinct_aid'			=> "SELECT DISTINCT aid FROM {$CONFIG['TABLE_ALBUMS']} AS alb INNER JOIN {$CONFIG['TABLE_CATMAP']} AS catm ON alb.category=catm.cid WHERE alb.owner = '" . $USER_DATA['user_id'] . "' AND alb.aid='$album_id' AND catm.group_id='" . $USER_DATA['group_id'] . "'"
);


/**********************************************************************************************************/
//	queries  from  include/ keyword.inc.php
/**********************************************************************************************************/
$cpg_db_keyword_inc_php = array(
	'select_keywords'			=> "select keywords FROM {$CONFIG['TABLE_PICTURES']} WHERE keywords <> '' $ALBUM_SET"
);


/**********************************************************************************************************/
//	queries  from  include/ mailer.inc.php
/**********************************************************************************************************/
$cpg_db_mailer_inc_php = array(
	'select_user_email'		=> "SELECT user_email FROM {$CONFIG['TABLE_USERS']} WHERE user_group = 1"
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
$cpg_db_picmgmt_inc_php = array(
	'select_sum_total_filesize'	=> "SELECT sum(total_filesize) FROM {$CONFIG['TABLE_PICTURES']}, {$CONFIG['TABLE_ALBUMS']} WHERE  {$CONFIG['TABLE_PICTURES']}.aid = {$CONFIG['TABLE_ALBUMS']}.aid AND category = '" . (FIRST_USER_CAT + USER_ID) . "'",
	'insert_into_pictures'		=> "INSERT INTO {$CONFIG['TABLE_PICTURES']} (aid, filepath, filename, filesize, total_filesize, pwidth, pheight, ctime, owner_id, owner_name, title, caption, keywords, approved, user1, user2, user3, user4, pic_raw_ip, pic_hdr_ip, position) ".
								   "VALUES ('{$CURRENT_PIC_DATA['aid']}', '" . addslashes($CURRENT_PIC_DATA['filepath']) . "', '" . addslashes($CURRENT_PIC_DATA['filename']) . "', '{$CURRENT_PIC_DATA['filesize']}', '{$CURRENT_PIC_DATA['total_filesize']}', '{$CURRENT_PIC_DATA['pwidth']}', '{$CURRENT_PIC_DATA['pheight']}', '" . time() . "', '{$CURRENT_PIC_DATA['owner_id']}', '{$CURRENT_PIC_DATA['owner_name']}','{$CURRENT_PIC_DATA['title']}', '{$CURRENT_PIC_DATA['caption']}', '{$CURRENT_PIC_DATA['keywords']}', '{$CURRENT_PIC_DATA['approved']}', '{$CURRENT_PIC_DATA['user1']}', '{$CURRENT_PIC_DATA['user2']}', '{$CURRENT_PIC_DATA['user3']}', '{$CURRENT_PIC_DATA['user4']}', '{$CURRENT_PIC_DATA['pic_raw_ip']}', '{$CURRENT_PIC_DATA['pic_hdr_ip']}', '{$CURRENT_PIC_DATA['position']}')"
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
$cpg_db_search_inc_php = array(
	'select_all_from_pictures'	=> "SELECT * FROM {$CONFIG['TABLE_PICTURES']} WHERE ".
								   '(' . implode($type, $sections) . ')'.
								   $search_params['newer_than'] ? ' AND ctime > UNIX_TIMESTAMP() - '.( (int) $search_params['newer_than'] * 60*60*24) : ''.
								   $search_params['older_than'] ? ' AND ctime < UNIX_TIMESTAMP() - '.( (int) $search_params['older_than'] * 60*60*24) : ''.
								   " $ALBUM_SET AND approved = 'YES'".
								   " ORDER BY $sort_order $limit",
	//  $temp = str_replace('SELECT *', 'SELECT COUNT(*)', $sql);
    //    $result = cpg_db_query($temp);   // $sql is the above query without order by.
);


/**********************************************************************************************************/
//	queries  from  include/ stats.inc.php
/**********************************************************************************************************/
$cpg_db_stats_inc_php = array(
	'select_count_all'			=> "SELECT COUNT(*) FROM " .$tbl." WHERE os = '$key'"." AND pid='$pid'",	  //		if ($pid!='')
									//if ($type=='vote') {  $query .= $CONFIG['TABLE_VOTE_STATS']; }    else { $query .= $CONFIG['TABLE_HIT_STATS']; }
	'select_count_all_02'		=> "SELECT COUNT(*) FROM " .$tbl."  WHERE browser = '$key'"." AND pid='$pid'" //		if ($pid!='')
);


/**********************************************************************************************************/
//	queries  from  include/ themes.inc.php
/**********************************************************************************************************/
$cpg_db_themes_inc_php = array(
	'select_aid'				=> "SELECT aid, title FROM {$CONFIG['TABLE_ALBUMS']} WHERE category='" . (FIRST_USER_CAT + USER_ID) . "' AND aid = '$album' ORDER BY title",
	'select_aid_02'				=> "SELECT aid, title FROM {$CONFIG['TABLE_ALBUMS']} WHERE category < " . FIRST_USER_CAT . " AND uploads='YES' AND (visibility = '0' OR visibility IN ".USER_GROUP_SET.") AND aid = '$album' ORDER BY title",
	'select_msg_id'				=> "SELECT msg_id, msg_author, msg_body, UNIX_TIMESTAMP(msg_date) AS msg_date, author_id, author_md5_id, msg_raw_ip, msg_hdr_ip, pid, approval FROM {$CONFIG['TABLE_COMMENTS']} WHERE pid='$pid' ORDER BY msg_id $comment_sort_order",
	'select_all_from_pictures'	=> "SELECT * " . "FROM {$CONFIG['TABLE_PICTURES']} " . "WHERE pid='$pid' $ALBUM_SET"
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
