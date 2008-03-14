<?php
if (!defined('IN_COPPERMINE')) { die('Not in Coppermine...');}

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
//queries from albmgr.php
/***********************************************************/
if (defined('ALBMGR_PHP')) $cpg_db_albmgr_php = array(
	'get_cat_to_change_albums'	=> "SELECT cid, name, description FROM {$CONFIG['TABLE_CATEGORIES']} WHERE parent = '%1\$s' AND cid != 1 ORDER BY pos",
	'get_user_group'			=> "SELECT group_id FROM {$CONFIG['TABLE_CATMAP']} WHERE group_id = '%1\$s' AND cid='%2\$s'",
	'get_gallery_admin_albums'	=> "SELECT aid, title FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = '%1\$s' ORDER BY pos ASC",
	'get_user_admin_albums'		=> "SELECT aid, title FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = '%1\$s' AND owner = '%2\$s' ORDER BY pos ASC"
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
	'deletecat_delete_cats'		=> "DELETE FROM {$CONFIG['TABLE_CATEGORIES']} WHERE cid='%1\$s' LIMIT 1",
	'deletecat_delete_catmap'	=> "DELETE FROM {$CONFIG['TABLE_CATMAP']} WHERE cid='%1\$s'"
);



?>