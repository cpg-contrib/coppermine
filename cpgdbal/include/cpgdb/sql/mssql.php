<?php
if (!defined('IN_COPPERMINE')) { die('Not in Coppermine...');}

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
	'subcat_user_gal_cat'			=> "SELECT count(*) FROM {$CONFIG['TABLE_PICTURES']} as p, {$CONFIG['TABLE_ALBUMS']} as a ".
									   "WHERE p.aid = a.aid AND approved='YES' AND category >= %1\$s %2\$s ",
	'subcat_unaliased_alb_filter'	=> "SELECT aid FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = '%1\$s' %2\$s",
	'subcat_not_user_gal_cat'		=> "SELECT count(*) FROM {$CONFIG['TABLE_PICTURES']} as p, {$CONFIG['TABLE_ALBUMS']} as a ".
									   "WHERE p.aid = a.aid AND approved='YES' AND category = '%1\$s' %2\$s",
	'subcat_pic'					=> "SELECT filepath, filename, url_prefix, pwidth, pheight FROM {$CONFIG['TABLE_PICTURES']} ".
									   "WHERE pid='%1\$s' %2\$s",
	'cat_list_user_gal_cat'			=> "SELECT aid FROM {$CONFIG['TABLE_ALBUMS']} as a WHERE category >= %1\$s %2\$s",
	'cat_list_not_user_gal_cat'		=> "SELECT aid FROM {$CONFIG['TABLE_ALBUMS']} as a WHERE category = '%1\$s' %2\$s",
	'cat_list_count_alb'			=> "SELECT count(aid) FROM {$CONFIG['TABLE_ALBUMS']} WHERE 1=1 %1\$s",
	'cat_list_count_pic_alb'		=> "SELECT count(pid) FROM {$CONFIG['TABLE_PICTURES']} as p LEFT JOIN " . $CONFIG['TABLE_ALBUMS'] . 
									   " as a ON a.aid=p.aid WHERE 1=1 %1\$s AND approved='YES'",
	'cat_list_count_comm_pic'		=> "SELECT count(msg_id) FROM {$CONFIG['TABLE_COMMENTS']} as c LEFT JOIN " . $CONFIG['TABLE_PICTURES'] .
									   " as p ON c.pid=p.pid  LEFT JOIN " . $CONFIG['TABLE_ALBUMS'] . " as a  ON a.aid=p.aid ".
									   " WHERE 1=1  %1\$s AND approval='YES'",
	'cat_list_count_cat'			=> "SELECT count(cid) FROM {$CONFIG['TABLE_CATEGORIES']} WHERE 1=1",
	'cat_list_sum_pic_alb'			=> "SELECT sum(hits) FROM {$CONFIG['TABLE_PICTURES']} as p LEFT JOIN " . $CONFIG['TABLE_ALBUMS'] . 
									   " as a  ON p.aid=a.aid  WHERE 1=1 %1\$s",
	'cat_list_current_alb_set'		=> "SELECT count(aid) FROM {$CONFIG['TABLE_ALBUMS']}  WHERE 1 %1\$s",
	'cat_list_count_pic'			=> "SELECT count(pid) FROM {$CONFIG['TABLE_PICTURES']} WHERE 1=1 %1\$s",
	'cat_list_sum_pic'				=> "SELECT sum(hits) FROM {$CONFIG['TABLE_PICTURES']} WHERE 1=1 %1\$s AND approved='YES'",
	'list_user_pic'					=> "SELECT filepath, filename, url_prefix, pwidth, pheight  FROM {$CONFIG['TABLE_PICTURES']} " . 
									   "WHERE pid='%1\$s' AND approved='YES'",
	'list_albums_alb_owner'			=> "SELECT count(aid) FROM {$CONFIG['TABLE_ALBUMS']} as a WHERE owner = '%1\$s' %2\$s",
	'list_albums_alb_cats'			=> "SELECT count(aid) FROM {$CONFIG['TABLE_ALBUMS']} as a WHERE category = '%1\$s' %2\$s",
	'list_albums_alb_pic_owner'		=> "SELECT TOP %4\$s a.aid, a.title, a.description, a.thumb, category, visibility, filepath, ".
									   "filename, url_prefix, pwidth, pheight  FROM " . $CONFIG['TABLE_ALBUMS'] . 
									   " as a  'LEFT JOIN " . $CONFIG['TABLE_PICTURES'] . " as p " . 
									   "ON a.thumb=p.pid  WHERE a.owner= %1\$s %2\$s AND a.category NOT IN ".
									   "(SELECT TOP %3\$s category FROM {$CONFIG['TABLE_ALBUMS']} ORDER BY category DESC, pos) ".
									   "ORDER BY a.category DESC , a.pos ",	###	cpgdb_AL
	'list_albums_concat'			=> "SELECT TOP %4\$s a.title + '%1\$s <i>' + c. name + '</i>' FROM ". $CONFIG['TABLE_ALBUMS'] . 
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
									   "WHERE aid != '%1\$s' AND keywords LIKE '%%2\$s%'  AND approved = 'YES'",
	'random_pictures'				=> "SELECT TOP 1 filepath, filename, url_prefix, pwidth, pheight  FROM {$CONFIG['TABLE_PICTURES']} ".
									   "WHERE aid = '%1\$s' ORDER BY NEWID()",
	'get_pictures'					=> "SELECT filepath, filename, url_prefix, pwidth, pheight  FROM {$CONFIG['TABLE_PICTURES']} ".
									   "WHERE pid='%1\$s'",
	'album_adm_menu_get_alb'		=> "SELECT * FROM {$CONFIG['TABLE_ALBUMS']} WHERE aid='%1\$s' AND owner='%2\$s'",
	'album_adm_menu_dist_alb_cat'	=> "SELECT DISTINCT alb.category FROM {$CONFIG['TABLE_ALBUMS']} AS alb ".
									   "INNER JOIN {$CONFIG['TABLE_CATMAP']} AS catm ON alb.category=catm.cid ".
									   "WHERE alb.owner = '%1\$s' AND alb.aid='%2\$s' AND catm.group_id='%3\$s'",
	'list_cat_alb_count_alb'		=> "SELECT count(aid) FROM {$CONFIG['TABLE_ALBUMS']} as a WHERE category = '%1\$s' %2\$s",
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
									   "AND keywords LIKE '%%2\$s%' AND approved = 'YES'",
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
	//'update_comments_04'			=> "UPDATE {$CONFIG['TABLE_COMMENTS']} SET `approval` = 'YES' WHERE msg_id IN $cid_set",
	//'update_comments_05'			=> "UPDATE {$CONFIG['TABLE_COMMENTS']} SET `approval` = 'NO' WHERE msg_id IN $cid_set",
	'count_comments'				=> "SELECT count(*) FROM {$CONFIG['TABLE_COMMENTS']} WHERE 1=1",
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
	'switch_new_user'			=> "INSERT INTO {$CONFIG['TABLE_USERS']}(user_regdate, user_active, user_profile6) VALUES (getdate(), 'YES', '')",
	'switch_group_alb_access'	=> "SELECT group_name  FROM {$CONFIG['TABLE_USERGROUPS']} AS groups, {$CONFIG['TABLE_ALBUMS']} AS albums ".
								   " WHERE group_id = '%1\$s' AND albums.visibility = groups.group_id",
//	'delete_from_users_03'		=> "DELETE FROM {$CONFIG['TABLE_USERS']} WHERE user_name = '' LIMIT 1"
);


#########################################
//	bridge files
#########################################

#########################################
//	include files
#########################################

/******************************************************/
//queries from /include/init.inc.php
/***********************************************************/
$cpg_db_init_inc = array(
	'get_db_configuration'		=> "SELECT * FROM {$CONFIG['TABLE_CONFIG']}",
	'select_distinct_aid'		=> "SELECT DISTINCT(aid) FROM {$CONFIG['TABLE_ALBUMS']} WHERE moderator_group IN %1\$s",
	'get_user_favpics'			=> "SELECT user_favpics FROM {$CONFIG['TABLE_FAVPICS']} WHERE user_id = ".USER_ID,
	'delete_expired_ban'		=> "DELETE FROM {$CONFIG['TABLE_BANNED']} WHERE expiry < '%1\$s'",
	'get_all_banned'			=> "SELECT * FROM {$CONFIG['TABLE_BANNED']} WHERE (ip_addr='%1\$s' OR ip_addr='%2\$s' OR user_id='%3\$s') AND brute_force=0"
);

/**********************************************************************************************************/
//	queries  from  include/ media.functions.inc.php
/**********************************************************************************************************/
$cpg_db_media_functions_inc = array(
	'get_filetypes'			=> 'SELECT extension, mime, content, player FROM '.$CONFIG['TABLE_FILETYPES']
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

?>