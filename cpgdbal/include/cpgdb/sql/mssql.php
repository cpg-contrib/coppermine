<?php

/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2008 Dev Team
  v1.1 originally written by Gregory DEMAR

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 3
  as published by the Free Software Foundation.
  
  ********************************************
  Coppermine version: 1.5.0
  $HeadURL$
  $Revision: 4932 $
  $LastChangedBy: abbas-ali $
  $Date: 2008-08-28 20:47:20 +0530 (Thu, 28 Aug 2008) $
**********************************************/

//if (!defined('IN_COPPERMINE')) { die('Not in Coppermine...');}


/******************************************************/
//queries from addfav.php
/***********************************************************/
if (defined('RATEPIC_PHP')) {
    $cpg_db_addfav_php = array(
    'user_new_favpics'      => "UPDATE {$CONFIG['TABLE_FAVPICS']} SET user_favpics = '%1\$s' WHERE user_id = %2\$s",
    'user_first_favpics'    => "INSERT INTO {$CONFIG['TABLE_FAVPICS']} ( user_id, user_favpics) VALUES (%1\$s, '%2\$s')"
    );
}

/******************************************************/
//queries from addpic.php
/***********************************************************/
if(defined('ADDPIC_PHP')) {
    $cpg_db_addpic_php = array(
    'addpic_get_pid'    => "SELECT TOP 1 pid FROM {$CONFIG['TABLE_PICTURES']} WHERE filepath='%1\$s' AND filename='%2\$s'"
    );
}

/******************************************************/
//queries from admin.php
/***********************************************************/
if (defined('ADMIN_PHP')) {
    $cpg_db_admin_php = array(
    'truncate_config'       => "TRUNCATE TABLE {$CONFIG['TABLE_CONFIG']}",
    'truncate_filetypes'    => "TRUNCATE TABLE {$CONFIG['TABLE_FILETYPES']}",
    //'undo_reset_config'     => "UPDATE {$CONFIG['TABLE_CONFIG']} SET value = '%1\$s' WHERE name = '%2\$s'",
    'update_config_data'    => "UPDATE {$CONFIG['TABLE_CONFIG']} SET value = '%1\$s' WHERE name = '%2\$s'",
    //'get_user_passwords'    => "SELECT user_password FROM {$CONFIG['TABLE_USERS']}",
    //'encrypt_passwords'     => "update {$CONFIG['TABLE_USERS']} set user_password='%1\$s' WHERE user_password = '%2\$s';"
    );
}

/******************************************************/
//queries from albmgr.php
/***********************************************************/
if (defined('ALBMGR_PHP')) {
    $cpg_db_albmgr_php = array(
    'get_cat_to_change_albums'  => "SELECT cid, name, description FROM {$CONFIG['TABLE_CATEGORIES']} WHERE parent = '%1\$s' AND cid != 1 ORDER BY pos",
    'get_user_group'            => "SELECT group_id FROM {$CONFIG['TABLE_CATMAP']} WHERE group_id = '%1\$s' AND cid='%2\$s'",
    'get_gallery_admin_albums'  => "SELECT aid, title FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = '%1\$s' ORDER BY pos ASC",
    'get_user_admin_albums'     => "SELECT aid, title FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = '%1\$s' AND owner = '%2\$s' ORDER BY pos ASC"
    );
}

/******************************************************/
//queries from banning.php
/***********************************************************/
if (defined('BANNING_PHP')) {
    $cpg_db_banning_php = array(
    'create_banlist'            => "SELECT *, DATEDIFF(s, '19700101', expiry) AS expiry FROM {$CONFIG['TABLE_BANNED']} WHERE brute_force=0",
    'ban_user'                  => "INSERT INTO {$CONFIG['TABLE_BANNED']} (user_id, ip_addr, expiry) VALUES ('%1\$s', %2\$s, %3\$s)",
    'delete_all_comments'       => "DELETE FROM {$CONFIG['TABLE_COMMENTS']} WHERE author_id = '%1\$s'",
    'delete_current_comments'   => "DELETE FROM {$CONFIG['TABLE_COMMENTS']} WHERE msg_id = '%1\$s'",
    'delete_banned'             => "DELETE FROM {$CONFIG['TABLE_BANNED']} WHERE ban_id= '%1\$s'",
    'update_banned_data'        => "UPDATE {$CONFIG['TABLE_BANNED']} SET user_id='%1\$s', ip_addr=%2\$s, expiry=%3\$s WHERE ban_id='%4\$s'",
    'get_ban_user_param'        => "SELECT TOP 1 user_name FROM {$CONFIG['TABLE_USERS']} WHERE user_id = '%1\$s'",
    'get_comment_info'          => "SELECT msg_author, msg_hdr_ip, msg_raw_ip FROM {$CONFIG['TABLE_COMMENTS']} WHERE msg_id = '%1\$s'"
    );
}

/******************************************************/
//queries from bridgemgr.php
/***********************************************************/
if (defined('BRIDGEMGR_PHP')) {
    $cpg_db_bridgemgr_php = array(
    'get_db_tables'                 => "SELECT * FROM %1\$s",
    'update_bridge'                 => "UPDATE {$CONFIG['TABLE_BRIDGE']} SET value = '%1\$s' WHERE name = '%2\$s'",
    'enable_disable_bridge'         => "UPDATE {$CONFIG['TABLE_CONFIG']} SET value = '%1\$s' WHERE name = 'bridge_enable'",
    'get_all_config'                => "SELECT * FROM {$CONFIG['TABLE_CONFIG']}",
    'usergroup_delete'              => "TRUNCATE TABLE {$CONFIG['TABLE_USERGROUPS']}",//"DELETE FROM {$CONFIG['TABLE_USERGROUPS']} WHERE 1=1",
    'insert_admin'                  => "INSERT INTO {$CONFIG['TABLE_USERGROUPS']} ".
                                       "VALUES ('Administrators', 0, 1, 1, 1, 1, 1, 1, 0, 0, 3, 0, 5, 3)",
    'insert_registered'             => "INSERT INTO {$CONFIG['TABLE_USERGROUPS']} ".
                                       "VALUES ('Registered', 1024, 0, 1, 1, 1, 1, 1, 1, 0, 3, 0, 5, 3)",
    'insert_anonymous'              => "INSERT INTO {$CONFIG['TABLE_USERGROUPS']} ".
                                       "VALUES ('Anonymous', 0, 0, 1, 0, 0, 0, 0, 1, 1, 0, 0, 5, 3)",
    'insert_banned'                 => "INSERT INTO {$CONFIG['TABLE_USERGROUPS']} ".
                                       "VALUES ('Banned', 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 5, 3)",
    'get_recovery_logon_timestamp'  => "SELECT value FROM {$CONFIG['TABLE_BRIDGE']} WHERE name = 'recovery_logon_timestamp'",
    'get_recovery_logon_failures'   => "SELECT value FROM {$CONFIG['TABLE_BRIDGE']} WHERE name = 'recovery_logon_failures'",
    'get_user_data'                 => "SELECT user_id, user_name, user_password FROM %1\$s WHERE user_name = '%2\$s' ".
                                       "AND user_password = '%3\$s' AND user_active = 'YES' AND user_group = '1'",    ## BINARY user password
    'unset_bridge_enable'           => "UPDATE {$CONFIG['TABLE_CONFIG']} SET value = '0' WHERE name = 'bridge_enable'",
    'reset_recovery_logon_failures' => "UPDATE {$CONFIG['TABLE_BRIDGE']} SET value = '0' WHERE name = 'recovery_logon_failures'",
    'set_recovery_logon_timestamp'  => "UPDATE {$CONFIG['TABLE_BRIDGE']} SET value = GETDATE() WHERE name = 'recovery_logon_timestamp'",
    //'delete_from_usergroups_02'     => "DELETE FROM {$CONFIG['TABLE_USERGROUPS']} WHERE 1",
    //'insert_into_usergroups_05'     => "INSERT INTO {$CONFIG['TABLE_USERGROUPS']} VALUES (1, 'Administrators', 0, 1, 1, 1, 1, 1, 1, 0, 0, 3, 0, 5, 3)",
    //'insert_into_usergroups_06'     => "INSERT INTO {$CONFIG['TABLE_USERGROUPS']} VALUES (2, 'Registered', 1024, 0, 1, 1, 1, 1, 1, 1, 0, 3, 0, 5, 3)",
    //'insert_into_usergroups_07'     => "INSERT INTO {$CONFIG['TABLE_USERGROUPS']} VALUES (3, 'Anonymous', 0, 0, 1, 0, 0, 0, 0, 1, 1, 0, 0, 5, 3)",
    //'insert_into_usergroups_08'     => "INSERT INTO {$CONFIG['TABLE_USERGROUPS']} VALUES (4, 'Banned', 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 5, 3)",
    //'update_bridge_04'              => "UPDATE {$CONFIG['TABLE_BRIDGE']} SET value = NOW() WHERE name = 'recovery_logon_timestamp'",
    //'select_value_03'               => "SELECT value FROM {$CONFIG['TABLE_BRIDGE']} WHERE name = 'recovery_logon_failures'",
    'set_recovery_logon_failures'   => "UPDATE {$CONFIG['TABLE_BRIDGE']} SET value = '%1\$s' WHERE name = 'recovery_logon_failures'"
    //'select_value_04'               => "SELECT value FROM {$CONFIG['TABLE_BRIDGE']} WHERE name = 'recovery_logon_timestamp'",
    //'select_value_05'               => "SELECT value FROM {$CONFIG['TABLE_BRIDGE']} WHERE name = 'recovery_logon_failures'"
    );
}

/******************************************************/
//queries from calendar.php
/***********************************************************/
if (defined('CALENDAR_PHP')) {
    $cpg_db_calendar_php = array(
    'get_date_link'     => "DECLARE @UNIX_TIMESTAMP int  ".
                           "SELECT @UNIX_TIMESTAMP = ctime FROM {$CONFIG['TABLE_PICTURES']} ".
                           "SELECT COUNT(pid) AS count FROM {$CONFIG['TABLE_PICTURES']} AS p WHERE approved = 'YES' ".
                           "AND CONVERT(VARCHAR(10), DATEADD(s, @UNIX_TIMESTAMP, '01/01/1970'), 105) = '%1\$s' %2\$s"
    );
}

/******************************************************/
//queries from catmgr.php
/***********************************************************/
if (defined('CATMGR_PHP')) {
    $cpg_db_catmgr_php = array(
    'get_cid_fixed_cat_table'   => "SELECT cid FROM {$CONFIG['TABLE_CATEGORIES']} WHERE 1=1",
    'edit_fixed_cat_table'      => "UPDATE {$CONFIG['TABLE_CATEGORIES']} SET parent = '0' WHERE parent=cid OR parent NOT IN %1\$s",
    'get_subcat_data'           => "SELECT rgt, cid, parent, name, description " . "FROM {$CONFIG['TABLE_CATEGORIES']} ORDER BY lft ASC",
    'update_cat_order'          => "UPDATE {$CONFIG['TABLE_CATEGORIES']} SET pos='%1\$s' WHERE cid = '%2\$s'",
    'get_usergroup_list_box'    => "SELECT ug.group_name AS name, ug.group_id AS id, catm.group_id AS catm_gid FROM {$CONFIG['TABLE_USERGROUPS']} ".
                                   "AS ug LEFT JOIN {$CONFIG['TABLE_CATMAP']} AS catm ON catm.group_id=ug.group_id AND catm.cid= '%1\$s'",
    'get_form_alb_thumb'        => "SELECT pid, filepath, filename, url_prefix FROM {$CONFIG['TABLE_PICTURES']},{$CONFIG['TABLE_ALBUMS']} ".
                                   "WHERE {$CONFIG['TABLE_PICTURES']}.aid = {$CONFIG['TABLE_ALBUMS']}.aid ".
                                   "AND {$CONFIG['TABLE_ALBUMS']}.category = '%1\$s' AND approved='YES' ORDER BY filename",
    'get_verify_child_cat'      => "SELECT cid " . "FROM {$CONFIG['TABLE_CATEGORIES']} " . "WHERE parent = '%1\$s' ",
    'edit_cat_alpha_sort'       => "UPDATE {$CONFIG['TABLE_CONFIG']} SET value = '%1\$s' WHERE name = 'categories_alpha_sort'",
    'getalpha_move'             => "UPDATE {$CONFIG['TABLE_CATEGORIES']} SET pos='%1\$s', lft=0 WHERE cid = '%2\$s'",
    //'update_categories_04'      => "UPDATE {$CONFIG['TABLE_CATEGORIES']} SET pos='$pos2' WHERE cid = '$cid2' LIMIT 1",
    'getalpha_setparent'        => "UPDATE {$CONFIG['TABLE_CATEGORIES']} SET parent='%1\$s', pos='-1', lft=0 WHERE cid = '%2\$s'",
    'getalpha_editcat'          => "SELECT TOP 1 cid, name, parent, description, thumb FROM {$CONFIG['TABLE_CATEGORIES']} WHERE cid = '%1\$s'",
    'updatecat_no_parent'       => "UPDATE {$CONFIG['TABLE_CATEGORIES']} SET parent='%1\$s', name='%2\$s', description='%3\$s', ".
                                   "thumb='%4\$s', lft=0 WHERE cid = '%5\$s'",
    'updatecat_parent'          => "UPDATE {$CONFIG['TABLE_CATEGORIES']} SET name='%1\$s', description='%2\$s', thumb='%3\$s', lft=0 WHERE cid = '%4\$s'",
    'updatecat_delete'          => "DELETE FROM {$CONFIG['TABLE_CATMAP']} WHERE cid='%1\$s'",
    'updatecat_insert'          => "INSERT INTO {$CONFIG['TABLE_CATMAP']} (cid, group_id) VALUES('%1\$s', '%2\$s')",
    'createcat_insert_cats'     => "INSERT INTO {$CONFIG['TABLE_CATEGORIES']} (pos, parent, name, description) ".
                                   "VALUES ('10000', '%1\$s', '%2\$s', '%3\$s'); SELECT SCOPE_IDENTITY() AS cid",
    'createcat_insert_catmaps'  => "INSERT INTO {$CONFIG['TABLE_CATMAP']} (cid, group_id) VALUES('%1\$s', '%2\$s')",
    'deletecat_select_parent'   => "SELECT TOP 1 parent FROM {$CONFIG['TABLE_CATEGORIES']} WHERE cid = '%1\$s'",
    'deletecat_edit_cats'       => "UPDATE {$CONFIG['TABLE_CATEGORIES']} SET parent='%1\$s', lft=0 WHERE parent = '%2\$s'",
    'deletecat_edit_albums'     => "UPDATE {$CONFIG['TABLE_ALBUMS']} SET category='%1\$s' WHERE category = '%2\$s'",
    'deletecat_delete_cats'     => "DELETE FROM {$CONFIG['TABLE_CATEGORIES']} WHERE cid='%1\$s'",
    'deletecat_delete_catmap'   => "DELETE FROM {$CONFIG['TABLE_CATMAP']} WHERE cid='%1\$s'"
    );
}

/******************************************************/
//queries from charsetmgr.php
/***********************************************************/
$cpg_db_charsetmgr_php = array(
    'get_charset_convert_data'  => "SELECT * FROM %1\$s",
    'charset_convert'           => "UPDATE %1\$s SET %2\$s='%3\$s' WHERE %4\$s=%5\$s",
    'set_config'                => "UPDATE {$CONFIG['TABLE_CONFIG']} SET value='%1\$s' WHERE name='%2\$s'"
);


/******************************************************/
//queries from db_ecard.php
/***********************************************************/
if (defined('DB_ECARD')) {
    $cpg_db_dbecard_php = array(
    'delete_ecards' => "DELETE FROM {$CONFIG['TABLE_ECARDS']} WHERE eid='%1\$s'",
    'count_ecards'  => "SELECT COUNT(*) AS count FROM {$CONFIG['TABLE_ECARDS']}",
    'get_ecards'    => "SELECT TOP %4\$s eid, sender_name, sender_email, recipient_name, recipient_email, link, date, sender_ip ".
                       "FROM {$CONFIG['TABLE_ECARDS']} WHERE eid NOT IN ".
                       "(SELECT TOP %3\$s eid FROM {$CONFIG['TABLE_ECARDS']} ORDER BY %1\$s %2\$s)ORDER BY %1\$s %2\$s "
    );
}

/******************************************************/
//queries from db_input.php
/***********************************************************/
if (defined('DB_INPUT_PHP') || defined('DISPLAYIMAGE_PHP')) {
    $cpg_db_dbinput_php = array(
    'gal_admin_update'          => "UPDATE {$CONFIG['TABLE_COMMENTS']} SET msg_body='%1\$s' WHERE msg_id='%2\$s'",
    'user_admin_approval_2'     => "UPDATE {$CONFIG['TABLE_COMMENTS']} SET msg_body='%1\$s', approval='NO' ".
                                   "WHERE msg_id='%2\$s' AND author_id ='%3\$s'",
    'user_admin_approval'       => "UPDATE {$CONFIG['TABLE_COMMENTS']} SET msg_body='%1\$s' ".
                                   "WHERE msg_id='%2\$s' AND author_id ='%3\$s'",
    'update_approval_non_zero'  => "UPDATE {$CONFIG['TABLE_COMMENTS']} SET msg_body='%1\$s', approval='NO' ".
                                   "WHERE msg_id='%2\$s' AND author_md5_id ='%3\$s' AND author_id = '0'",
    'update_approval_zero'      => "UPDATE {$CONFIG['TABLE_COMMENTS']} SET msg_body='%1\$s' ".
                                   "WHERE msg_id='%2\$s' AND author_md5_id ='%3\$s' AND author_id = '0' ",
    'get_comments_pic_id'       => "SELECT pid FROM {$CONFIG['TABLE_COMMENTS']} WHERE msg_id='%1\$s'",
    'get_pic_comments'          => "SELECT comments FROM {$CONFIG['TABLE_PICTURES']}, {$CONFIG['TABLE_ALBUMS']} ".
                                   "WHERE {$CONFIG['TABLE_PICTURES']}.aid = {$CONFIG['TABLE_ALBUMS']}.aid AND pid='%1\$s'",
    'get_last_commment_data'    => "SELECT TOP 1 author_md5_id, author_id FROM {$CONFIG['TABLE_COMMENTS']} ".
                                   "WHERE pid = '%1\$s' ORDER BY msg_id DESC ",
    'get_anonymous_user_count'  => "SELECT COUNT(user_id) AS count FROM {$CONFIG['TABLE_USERS']} ".
                                   "WHERE UPPER(user_name) = UPPER('%1\$s')",
    'anonymous_user_comment'    => "INSERT INTO {$CONFIG['TABLE_COMMENTS']} (pid, msg_author, msg_body, msg_date, ".
                                   "author_md5_id, author_id, msg_raw_ip, msg_hdr_ip, approval) ".
                                   "VALUES ('%1\$s', '%2\$s', '%3\$s', GETDATE(), '%4\$s', '0', '%5\$s', '%6\$s', '%7\$s')",
    //'approval_not_needed_comm'  => "INSERT INTO {$CONFIG['TABLE_COMMENTS']} (pid, msg_author, msg_body, msg_date, author_md5_id, author_id, msg_raw_ip, msg_hdr_ip, approval) VALUES ('$pid', '{$CONFIG['comments_anon_pfx']}$msg_author', '$msg_body', NOW(), '{$USER['ID']}', '0', '$raw_ip', '$hdr_ip', 'YES')",
    'registered_user_comment'   => "INSERT INTO {$CONFIG['TABLE_COMMENTS']} (pid, msg_author, msg_body, msg_date, ".
                                   "author_md5_id, author_id, msg_raw_ip, msg_hdr_ip, approval) ".
                                   "VALUES ('%1\$s', '%2\$s', '%3\$s', GETDATE(), '', '%4\$s', '%5\$s', '%6\$s', '%7\$s')",
    //'registered_user_comment'   => "INSERT INTO {$CONFIG['TABLE_COMMENTS']} (pid, msg_author, msg_body, msg_date, author_md5_id, author_id, msg_raw_ip, msg_hdr_ip, approval) VALUES ('$pid', '" . addslashes(USER_NAME) . "', '$msg_body', NOW(), '', '" . USER_ID . "', '$raw_ip', '$hdr_ip', 'YES')",
    'gal_admin_update_albums'   => "UPDATE {$CONFIG['TABLE_ALBUMS']} SET title='%1\$s', description='%2\$s', category='%3\$s', ".
                                   "thumb='%4\$s', uploads='%5\$s', comments='%6\$s', votes='%7\$s', visibility='%8\$s', ".
                                   "alb_password='%9\$s', alb_password_hint='%10\$s', keyword='%11\$s', moderator_group='%12\$s' ".
                                   "WHERE aid='%13\$s' ",
    'user_admin_update_albums'  => "UPDATE {$CONFIG['TABLE_ALBUMS']} SET title='%1\$s', description='%2\$s', category='%3\$s', ".
                                   "thumb='%4\$s', comments='%5\$s', votes='%6\$s', visibility='%7\$s', alb_password='%8\$s', ".
                                   "alb_password_hint='%9\$s',keyword='%10\$s' WHERE aid='%11\$s' ",
    'get_pic_id'                => "SELECT pid FROM {$CONFIG['TABLE_PICTURES']} WHERE aid = '%1\$s'",
    'update_pic_reset_views'    => "UPDATE {$CONFIG['TABLE_PICTURES']} SET hits='0' WHERE aid='%1\$s'",
    'update_pic_reset_rating'   => "UPDATE {$CONFIG['TABLE_PICTURES']} SET  pic_rating='0', votes='0' WHERE aid='%1\$s'",
    'delete_pic'                => "DELETE FROM {$CONFIG['TABLE_PICTURES']} WHERE aid='%1\$s'",
    'check_valid_alb_id'        => "SELECT category FROM {$CONFIG['TABLE_ALBUMS']} WHERE aid='%1\$s' ".
                                   "AND (uploads = 'YES' OR category = '%2\$s')",
    'get_valid_alb_id'          => "SELECT category FROM {$CONFIG['TABLE_ALBUMS']} WHERE aid='%1\$s'"
    );
}

/******************************************************/
//queries from delete.php
/***********************************************************/
if (defined('DELETE_PHP')) {
    $cpg_db_delete_php = array(
    'del_pic_gal_admin'         => "SELECT pid, aid, filepath, filename FROM {$CONFIG['TABLE_PICTURES']} WHERE pid='%1\$s'",
    'del_pic_user_admin'        => "SELECT pid, {$CONFIG['TABLE_PICTURES']}.aid AS aid, category, filepath, filename, owner_id ".
                                   "FROM {$CONFIG['TABLE_PICTURES']}, {$CONFIG['TABLE_ALBUMS']} ".
                                   "WHERE {$CONFIG['TABLE_PICTURES']}.aid = {$CONFIG['TABLE_ALBUMS']}.aid AND pid='%1\$s'",
    'del_pic_comment'           => "DELETE FROM {$CONFIG['TABLE_COMMENTS']} WHERE pid='%1\$s'",
    'del_pic_exif'              => "DELETE FROM {$CONFIG['TABLE_EXIF']} WHERE filename='%1\$s' ",
    'delete_picture'            => "DELETE FROM {$CONFIG['TABLE_PICTURES']} WHERE pid='%1\$s' ",
    'del_alb_get_title_cat'     => "SELECT title, category FROM {$CONFIG['TABLE_ALBUMS']} WHERE aid ='%1\$s'",
    'del_alb_get_pic_id'        => "SELECT pid FROM {$CONFIG['TABLE_PICTURES']} WHERE aid='%1\$s'",
    'delete_album'              => "DELETE FROM {$CONFIG['TABLE_ALBUMS']} WHERE aid='%1\$s'",
    'albmgr_dist_catmap_cid'    => "SELECT DISTINCT cid FROM {$CONFIG[TABLE_CATMAP]} WHERE group_id = %1\$s",
    'albmgr_set_pos'            => "UPDATE {$CONFIG['TABLE_ALBUMS']} SET pos='%1\$s' WHERE aid='%2\$s' %3\$s ",
    'albmgr_add_album'          => "INSERT INTO {$CONFIG['TABLE_ALBUMS']} (category, title, uploads, pos, description, owner) ".
                                   "VALUES ('%1\$s', '%2\$s', 'NO', '%3\$s', '', '%4\$s')",
    'albmgr_update_album'       => "UPDATE {$CONFIG['TABLE_ALBUMS']} SET title='%1\$s', pos='%2\$s' WHERE aid='%3\$s' %4\$s ",
    'picmgr_set_op_pos'         => "UPDATE {$CONFIG['TABLE_PICTURES']} SET position='%1\$s' WHERE pid='%2\$s' %3\$s ",
    'picmgr_add_alb'            => "INSERT INTO {$CONFIG['TABLE_ALBUMS']} (category, title, uploads, pos, description) ".
                                   "VALUES ('%1\$s', '%2\$s', 'NO', '%3\$s', '')",
    'picmgr_set_op_pic_sort'    => "UPDATE {$CONFIG['TABLE_PICTURES']} SET position='%1\$s' WHERE pid='%2\$s' %3\$s ",
    'comment_get_pic_id'        => "SELECT pid FROM {$CONFIG['TABLE_COMMENTS']} WHERE msg_id='%1\$s'",
    'comment_del_gal_admin'     => "DELETE FROM {$CONFIG['TABLE_COMMENTS']} WHERE msg_id='%1\$s'",
    'comment_del_user_admin'    => "DELETE FROM {$CONFIG['TABLE_COMMENTS']} WHERE msg_id='%1\$s' AND author_id ='%2\$s' ",
    'comment_del_not_admin'     => "DELETE FROM {$CONFIG['TABLE_COMMENTS']} WHERE msg_id='%1\$s' AND author_md5_id ='%2\$s' ".
                                   "AND author_id = '0' ",
    'user_get_name'             => "SELECT user_name FROM {$CONFIG['TABLE_USERS']} WHERE user_id = '%1\$s'",
    'user_get_alb_id'           => "SELECT aid FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = '%1\$s'",
    'user_count_comments'       => "SELECT COUNT(*) AS count FROM {$CONFIG['TABLE_COMMENTS']} WHERE author_id = '%1\$s'",
    'user_del_comments'         => "DELETE FROM {$CONFIG['TABLE_COMMENTS']} WHERE author_id = '%1\$s'",
    'user_update_comments'      => "UPDATE {$CONFIG['TABLE_COMMENTS']} SET author_id = '0' WHERE author_id = '%1\$s'",
    'user_count_pictures'       => "SELECT COUNT(*) AS count FROM {$CONFIG['TABLE_PICTURES']} WHERE owner_id = '%1\$s'",
    'user_del_pictures'         => "DELETE FROM {$CONFIG['TABLE_PICTURES']} WHERE owner_id = '%1\$s'",
    'user_update_pictures'      => "UPDATE {$CONFIG['TABLE_PICTURES']} SET owner_id = '0' WHERE owner_id = '%1\$s'",
    'user_del_users'            => "DELETE FROM {$CONFIG['TABLE_USERS']} WHERE user_id = '%1\$s'",
    'user_get_name_active'      => "SELECT user_name,user_active FROM {$CONFIG['TABLE_USERS']} WHERE user_id = '%1\$s'",
    'user_set_active_yes'       => "UPDATE {$CONFIG['TABLE_USERS']} SET user_active = 'YES' WHERE user_id = '%1\$s'",
    //'select_user_name_03'       => "SELECT user_name,user_active FROM {$CONFIG['TABLE_USERS']} WHERE user_id = '".(int)$key."'",
    'user_set_active_no'        => "UPDATE {$CONFIG['TABLE_USERS']} SET user_active = 'NO' WHERE user_id = '%1\$s'",
    //'select_user_name_04'       => "SELECT user_name FROM {$CONFIG['TABLE_USERS']} WHERE user_id = '".(int)$key."'",
    'user_set_password'         => "UPDATE {$CONFIG['TABLE_USERS']} SET user_password = '%1\$s' WHERE user_id = '%2\$s'",
    'user_get_usergrp'          => "SELECT group_id,group_name FROM {$CONFIG['TABLE_USERGROUPS']}",
    'user_get_name_group'       => "SELECT user_name,user_group FROM {$CONFIG['TABLE_USERS']} WHERE user_id = '%1\$s'",
    'user_set_usergrp'          => "UPDATE {$CONFIG['TABLE_USERS']} SET user_group = '%1\$s' WHERE user_id = '%2\$s'",
    'user_get_usergrp_order'    => "SELECT group_id,group_name FROM {$CONFIG['TABLE_USERGROUPS']} ORDER BY group_name",
    //'select_user_name_06'       => "SELECT user_name,user_group FROM {$CONFIG['TABLE_USERS']} WHERE user_id = '".(int)$key."'",
    'user_get_all'              => "SELECT * FROM {$CONFIG['TABLE_USERS']} WHERE user_id = '%1\$s'",
    'user_set_usergrp_list'     => "UPDATE {$CONFIG['TABLE_USERS']} SET user_group_list = '%1\$s' WHERE user_id = '%2\$s'"
    //'select_user_name_07'       => "SELECT user_name FROM {$CONFIG['TABLE_USERS']} WHERE user_id = '".(int)$key."'",
    //'select_aid_03'             => "SELECT aid FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = '" . (FIRST_USER_CAT + $key) . "'",
    //'select_count_comments_02'  => "SELECT COUNT(*) as count FROM {$CONFIG['TABLE_COMMENTS']} WHERE author_id = '".(int)$key."'",
    //'delete_from_comments_06'   => "DELETE FROM {$CONFIG['TABLE_COMMENTS']} WHERE author_id = '".(int)$key."'",
    //'update_coments_02'         => "UPDATE {$CONFIG['TABLE_COMMENTS']} SET  author_id = '0' WHERE  author_id = '".(int)$key."'",
    //'select_count_pictures'     => "SELECT COUNT(*) as count FROM {$CONFIG['TABLE_PICTURES']} WHERE owner_id = '".(int)$key."'",
    //'delete_from_pictures_03'   => "DELETE FROM {$CONFIG['TABLE_PICTURES']} WHERE  owner_id = '".(int)$key."'",
    //'update_pictures_04'        => "UPDATE {$CONFIG['TABLE_PICTURES']} SET  owner_id = '0' WHERE  owner_id = '".(int)$key."'",
    //'delete_from_users_02'      => "DELETE FROM {$CONFIG['TABLE_USERS']} WHERE user_id = '".(int)$key."'"
    );
}

/******************************************************/
//queries from displayecard.php
/***********************************************************/
if (defined('DISPLAYECARD_PHP')) {
    $cpg_db_displayecard_php = array(
    'get_ecard_link'        => "SELECT link FROM {$CONFIG['TABLE_ECARDS']} WHERE link LIKE '%1\$s'",
    'get_pic_dimensions'    => "SELECT pwidth, pheight FROM {$CONFIG['TABLE_PICTURES']} WHERE pid='%1\$s'"
    ); 
}

/******************************************************/
//queries from displayimage.php
/***********************************************************/
if (defined('DISPLAYIMAGE_PHP')) {
    $cpg_db_displayimage_php = array(
    'get_subcat_data'       => "SELECT cid, name, description FROM {$CONFIG['TABLE_CATEGORIES']} WHERE parent = '%1\$s'",
    'alb_set_array'         => "SELECT aid FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = %1\$s",
    'fix_topn_images'       => "SELECT category, title, aid, keyword, description, alb_password_hint ".
                               "FROM {$CONFIG['TABLE_ALBUMS']} WHERE aid='%1\$s'",
    'get_current_pic_data'  => "SELECT TOP 1 aid FROM {$CONFIG['TABLE_PICTURES']} AS p WHERE pid='%1\$s' %2\$s ",
    'get_current_alb_data'  => "SELECT TOP 1 title, comments, votes, category, aid ".
                               "FROM {$CONFIG['TABLE_ALBUMS']} WHERE aid='%1\$s'"
    );
}

/******************************************************/
//queries from ecard.php
/***********************************************************/
if (defined('ECARDS_PHP')) {
    $cpg_db_ecard_php = array(
    'get_pic_thumbnail_url' => "SELECT * FROM {$CONFIG['TABLE_PICTURES']} AS p WHERE pid='%1\$s' %2\$s",
    'write_ecard_log'       => "INSERT INTO {$CONFIG['TABLE_ECARDS']} (sender_name, sender_email, recipient_name, ".
                               "recipient_email, link, date, sender_ip) ".
                               "VALUES ('%1\$s', '%2\$s', '%3\$s', '%4\$s', '%5\$s', '%6\$s', '%7\$s')"
    );
}

/******************************************************/
//queries from edit_one_pic.php
/***********************************************************/
if (defined('EDITPICS_PHP')) {
    $cpg_db_edit_one_pic_php = array(
    'process_data_get_pic_alb'      => "SELECT * FROM {$CONFIG['TABLE_PICTURES']} AS p, {$CONFIG['TABLE_ALBUMS']} AS a ".
                                       "WHERE a.aid = p.aid AND pid = '%1\$s'",
    'process_data_set_gal_icon'     => "UPDATE {$CONFIG['TABLE_PICTURES']} SET galleryicon=0 WHERE owner_id=%1\$s;",
    'process_data_delete_exif'      => "DELETE FROM {$CONFIG['TABLE_EXIF']} WHERE filename = '%1\$s'",
    'process_data_delete_comments'  => "DELETE FROM {$CONFIG['TABLE_COMMENTS']} WHERE pid='%1\$s'",
    'process_data_set_hits_ratings' => "UPDATE {$CONFIG['TABLE_PICTURES']} SET %1\$s WHERE pid='%2\$s' ",
    'process_data_set_filename'     => "UPDATE {$CONFIG['TABLE_PICTURES']} SET filename = '%1\$s' WHERE pid = '%2\$s' ",
    'get_user_album'                => "SELECT aid, title FROM {$CONFIG['TABLE_ALBUMS']} ".
                                       "WHERE category='%1\$s' %2\$s ORDER BY title",
    'get_pictures_albums'           => "SELECT *, p.title AS title, p.votes AS votes FROM {$CONFIG['TABLE_PICTURES']} AS p, ".
                                       "{$CONFIG['TABLE_ALBUMS']} AS a WHERE a.aid = p.aid AND pid = '%1\$s'",
    'get_gal_admin_public_alb'      => "SELECT DISTINCT aid, title, CASE WHEN category = 0 THEN '&gt; ' + title ".
                                       "ELSE name + ' &lt; ' + title END   AS cat_title FROM {$CONFIG['TABLE_ALBUMS']} ".
                                       "LEFT JOIN {$CONFIG['TABLE_CATEGORIES']} ON category = cid  ".
                                       "WHERE category < '%1\$s' ORDER BY cat_title",
    'get_user_admin_public_alb'     => "SELECT DISTINCT aid, title, CASE WHEN category = 0 THEN '&gt; '+ title ".
                                       "ELSE name + ' &lt; ' + title END  AS cat_title FROM {$CONFIG['TABLE_ALBUMS']} ".
                                       "LEFT JOIN {$CONFIG['TABLE_CATEGORIES']} ON category = cid ".
                                       "WHERE (category < '%1\$s' AND uploads = 'YES' %2\$s) ".
                                       "OR aid='%3\$s' ORDER BY cat_title"
    );
}

/******************************************************/
//queries from editpics.php
/***********************************************************/
if (defined('EDITPICS_PHP')) {
    $cpg_db_editpics_php = array(
    'edit_pic_mode_get_alb'             => "SELECT title, category FROM {$CONFIG['TABLE_ALBUMS']} WHERE aid = '%1\$s'",
    'process_data_get_pic_alb'          => "SELECT pid, category, filepath, filename, owner_id ".
                                           "FROM {$CONFIG['TABLE_PICTURES']}, {$CONFIG['TABLE_ALBUMS']} ".
                                           "WHERE {$CONFIG['TABLE_PICTURES']}.aid = {$CONFIG['TABLE_ALBUMS']}.aid AND pid='%1\$s'",
    'process_data_set_gal_icon'         => "UPDATE {$CONFIG['TABLE_PICTURES']} SET galleryicon=0 WHERE owner_id=%1\$s;",
    'process_data_del_comments'         => "DELETE FROM {$CONFIG['TABLE_COMMENTS']} WHERE pid='%1\$s'",
    'process_data_del_pictures'         => "DELETE FROM {$CONFIG['TABLE_PICTURES']} WHERE pid='%1\$s' ",
    'process_data_set_approved'         => "UPDATE {$CONFIG['TABLE_PICTURES']} SET %1\$s WHERE pid='%2\$s' ",
    'get_user_albums'                   => "SELECT aid, title FROM {$CONFIG['TABLE_ALBUMS']} WHERE aid IN %1\$s ".
                                           "AND category > '%2\$s' OR category='%3\$s' ORDER BY title",
    'get_my_albums'                     => "SELECT aid, title FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = %1\$s",
    'get_public_albums'                 => "SELECT alb.aid AS aid, '(' + cat.name + ') ' + alb.title  AS title ".
                                           "FROM {$CONFIG['TABLE_ALBUMS']} AS alb INNER JOIN {$CONFIG['TABLE_CATEGORIES']} AS cat ".
                                           "ON alb.owner = '%1\$s' AND alb.category = cat.cid ".
                                           "ORDER BY alb.category DESC, alb.pos ASC",
    'get_gal_admin_public_alb'          => "SELECT DISTINCT aid, title, CASE WHEN category = 0 THEN '&gt; ' +  title ".
                                           "ELSE name + ' &lt; ' + title END  AS cat_title FROM {$CONFIG['TABLE_ALBUMS']}, ".
                                           "{$CONFIG['TABLE_CATEGORIES']} WHERE category < '%1\$s' ".
                                           "AND (category = 0 OR category = cid) ORDER BY cat_title",
    'get_moderator_public_alb'          => "SELECT DISTINCT aid, title, CASE WHEN category = 0 THEN '&gt; ' +  title ".
                                           "ELSE name + ' &lt; ' + title END AS cat_title FROM {$CONFIG['TABLE_ALBUMS']}, ".
                                           "{$CONFIG['TABLE_CATEGORIES']} WHERE aid IN %1\$s  AND category < '%2\$s' ".
                                           "AND (category = 0 OR category = cid) ORDER BY cat_title",
    'moderator_count_pic_not_approved'  => "SELECT COUNT(*) AS count FROM {$CONFIG['TABLE_PICTURES']} ".
                                           "WHERE approved = 'NO' AND aid IN %1\$s",
    'count_pic_not_approved'            => "SELECT COUNT(*) AS count FROM {$CONFIG['TABLE_PICTURES']} WHERE approved = 'NO'",
    'get_pic_owner'                     => "SELECT pid, owner_id FROM {$CONFIG['TABLE_PICTURES']} ".
                                           "WHERE owner_id != 0 AND owner_name = ''",
    'set_pic_owner_name'                => "UPDATE {$CONFIG['TABLE_PICTURES']} SET owner_name = '%1\$s' WHERE pid = %2\$s ",
    'set_pic_owner_id'                  => "UPDATE {$CONFIG['TABLE_PICTURES']} SET owner_id = 0 WHERE pid = %1\$s ",
    'moderator_get_pic_not_approved'    => "SELECT TOP %3\$s * FROM {$CONFIG['TABLE_PICTURES']} WHERE approved = 'NO' ".
                                           "AND aid IN %1\$s AND pid NOT IN (SELECT TOP %2\$s pid FROM {$CONFIG['TABLE_PICTURES']} ".
                                           "WHERE approved = 'NO' AND aid IN %1\$s ORDER BY pid) ORDER BY pid ",
    'get_pic_not_approved'              => "SELECT TOP %2\$s * FROM {$CONFIG['TABLE_PICTURES']} WHERE approved = 'NO' ".
                                           "AND pid NOT IN (SELECT TOP %1\$s pid FROM {$CONFIG['TABLE_PICTURES']} ".
                                           "WHERE approved = 'NO' ORDER BY pid) ORDER BY pid ",
    'count_album_pics'                  => "SELECT COUNT(*) AS count FROM {$CONFIG['TABLE_PICTURES']} WHERE aid = '%1\$s'",
    'get_album_pics'                    => "SELECT TOP %3\$s p.*,a.category FROM {$CONFIG['TABLE_PICTURES']} AS p ".
                                           "INNER JOIN {$CONFIG['TABLE_ALBUMS']} AS a ON a.aid=p.aid ".
                                           "WHERE p.aid = '%1\$s' AND pid NOT IN (SELECT TOP %2\$s  pid ".
                                           "FROM {$CONFIG['TABLE_PICTURES']} AS p INNER JOIN {$CONFIG['TABLE_ALBUMS']} AS a ".
                                           "ON a.aid=p.aid WHERE p.aid = '%1\$s' ORDER BY p.filename) ORDER BY p.filename "
    );
}

/******************************************************/
//queries from exifmgr.php
/***********************************************************/
if (defined('DISPLAYIMAGE_PHP')) {
    $cpg_db_exifmgr_php = array(
    'config_set_show_which_exif'    => "UPDATE {$CONFIG['TABLE_CONFIG']} SET value = '%1\$s' WHERE name = 'show_which_exif'"
    );
}

/*********************************************************/
//queries from export.php
/**********************************************************/
if (defined('EXPORT_PHP')) {
    $cpg_db_export_php = array(
    'get_albums'        => "SELECT aid, title FROM {$CONFIG['TABLE_ALBUMS']} ORDER BY title",
    'init_html_export'  => "SELECT pid, title, filename, filepath, url_prefix FROM {$CONFIG['TABLE_PICTURES']} ".
                           "WHERE aid = '%1\$s'",
    'export_thumb_page' => "SELECT pid, title, filename, filepath FROM {$CONFIG['TABLE_PICTURES']} WHERE aid = '%1\$s'",
    'get_config_theme'  => "SELECT value FROM {$CONFIG['TABLE_CONFIG']} WHERE name = 'theme'",
    'copy_photo'        => "SELECT TOP 1 filename, filepath, title FROM {$CONFIG['TABLE_PICTURES']} WHERE pid = '%1\$s'",
    'init_photocopy'    => "SELECT pid, title, filename, filepath FROM {$CONFIG['TABLE_PICTURES']} WHERE aid = '%1\$s'"
    );
}

/******************************************************/
//queries from forgot_passwd.php
/***********************************************************/
if (defined('FORGOT_PASSWD_PHP')) {
    $cpg_db_forgot_passwd_php = array(
    'get_user_data'         => "SELECT user_id, user_group, user_active, user_name, user_password, user_email  ".
                               "FROM {$CONFIG['TABLE_USERS']} WHERE user_email = '%1\$s' AND user_active = 'YES'",
    'session_life'          => "INSERT INTO %1\$s (session_id, user_id, time, remember) ".
                               "VALUES ('%2\$s', 0, '%3\$s', 0);",
    'get_null_sessions'     => "SELECT NULL FROM %1\$s WHERE session_id = '%2\$s';",
    'get_field_user_data'   => "SELECT %1\$s, %2\$s FROM %3\$s WHERE %4\$s='%5\$s';",
    'set_new_passwd'        => "UPDATE %1\$s SET %2\$s='%3\$s' WHERE %4\$s='%5\$s'",
    'delete_sesion'         => "DELETE FROM %1\$s WHERE session_id='%2\$s';"
    );
}

/******************************************************/
//queries from groupmgr.php
/***********************************************************/
if (defined('GROUPMGR_PHP')) {
    $cpg_db_groupmgr_php = array(
    'display_group_list'    => "SELECT * FROM {$CONFIG['TABLE_USERGROUPS']} WHERE 1=1 ORDER BY group_id",
    'insert_administrators' => "INSERT INTO {$CONFIG['TABLE_USERGROUPS']} VALUES ('Administrators', 0, 1, 1, 1, 1, 1, 1, 0, 0, 3, 0, 5, 3);SELECT SCOPE_IDENTITY() AS group_id",
    'insert_registered'     => "INSERT INTO {$CONFIG['TABLE_USERGROUPS']} VALUES ('Registered', 1024, 0, 1, 1, 1, 1, 1, 1, 0, 3, 0, 5, 3);SELECT SCOPE_IDENTITY() AS group_id",
    'insert_anonymous'      => "INSERT INTO {$CONFIG['TABLE_USERGROUPS']} VALUES ('Anonymous', 0, 0, 1, 0, 0, 0, 0, 1, 1, 0, 0, 5, 3);SELECT SCOPE_IDENTITY() AS group_id",
    'insert_banned'         => "INSERT INTO {$CONFIG['TABLE_USERGROUPS']} VALUES ('Banned', 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 5, 3);SELECT SCOPE_IDENTITY() AS group_id",
    'process_post_data'     => "UPDATE {$CONFIG['TABLE_USERGROUPS']} SET %1\$s WHERE group_id = '%2\$s'",
    'delete_usergroup'      => "DELETE FROM {$CONFIG['TABLE_USERGROUPS']} WHERE group_id = '%1\$s' ",
    'set_default_usergroup' => "UPDATE {$CONFIG['TABLE_USERS']} SET user_group = '2' WHERE user_group = '%1\$s'",
    'new_blank_usergroup'   => "INSERT INTO {$CONFIG['TABLE_USERGROUPS']} (group_name) VALUES ('')"
    );
}

/******************************************************/
//queries from index.php
/***********************************************************/
if (defined('INDEX_PHP')) {
    $cpg_db_index_php = array(
    'get_user_gal_album_info'       => "SELECT title, description, keyword, category, aid, alb_hits, visibility    ".
                                       "FROM {$CONFIG['TABLE_ALBUMS']} AS a WHERE category > %1\$s ",
    'get_user_gal_cat_info'         => "SELECT name, description, thumb FROM {$CONFIG['TABLE_CATEGORIES']} WHERE cid = %1\$s",
    'count_get_alb_pics'            => "SELECT COUNT(DISTINCT(p.aid)) AS alb_count, COUNT(*) AS pic_count FROM {$CONFIG['TABLE_ALBUMS']} AS a ".
                                       "INNER JOIN {$CONFIG['TABLE_PICTURES']} AS p ON p.aid = a.aid ".
                                       "WHERE a.category > %1\$s AND approved = 'YES' %2\$s ",
    'get_normal_cat_info'           => "SELECT name, description, cid, thumb, depth, lft FROM {$CONFIG['TABLE_CATEGORIES']} AS c ".
                                       "WHERE depth BETWEEN %1\$s + 1 AND %1\$s + %2\$s %3\$s ",
    'get_visible_alb_count'         => "SELECT category, COUNT(*) AS num FROM {$CONFIG['TABLE_ALBUMS']} ".
                                       "INNER JOIN {$CONFIG['TABLE_CATEGORIES']} ON cid = category ".
                                       "WHERE depth BETWEEN %1\$s + 1 AND %1\$s + %2\$s %3\$s ",
    'get_album_info'                => "SELECT title, r.description, keyword, category, aid, alb_hits, visibility, r.thumb ".
                                       "FROM {$CONFIG['TABLE_CATEGORIES']} AS c INNER JOIN {$CONFIG['TABLE_ALBUMS']} AS r ON r.category = c.cid ".
                                       "WHERE c.depth = %1\$s + 1 %2\$s ",
    'get_regular_alb_stats'         => "SELECT c.cid, r.aid, COUNT(pid) AS pic_count, MAX(pid) AS last_pid, MAX(ctime) AS last_upload ".
                                       "FROM {$CONFIG['TABLE_CATEGORIES']} AS c INNER JOIN {$CONFIG['TABLE_ALBUMS']} AS r ON r.category = c.cid ".
                                       "INNER JOIN {$CONFIG['TABLE_PICTURES']} AS p ON p.aid = r.aid %1\$s AND approved = 'YES' ".
                                       "AND c.depth = %2\$s + 1 GROUP BY r.aid, c.cid ",
    'subcat_categories'             => "SELECT cid, name, description, thumb FROM {$CONFIG['TABLE_CATEGORIES']} ".
                                       "WHERE parent = '%1\$s' ORDER BY %2\$s",
    'subcat_alb_filter'             => "SELECT aid FROM {$CONFIG['TABLE_ALBUMS']} AS a WHERE category>= %1\$s %2\$s ",
    'subcat_user_gal_cat'           => "SELECT COUNT(*) AS count FROM {$CONFIG['TABLE_PICTURES']} AS p, {$CONFIG['TABLE_ALBUMS']} AS a ".
                                       "WHERE p.aid = a.aid AND approved='YES' AND category >= %1\$s %2\$s ",
    'subcat_unaliased_alb_filter'   => "SELECT aid FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = '%1\$s' %2\$s",
    'subcat_not_user_gal_cat'       => "SELECT COUNT(*) AS count FROM {$CONFIG['TABLE_PICTURES']} AS p, {$CONFIG['TABLE_ALBUMS']} AS a ".
                                       "WHERE p.aid = a.aid AND approved='YES' AND category = '%1\$s' %2\$s",
    'subcat_pic'                    => "SELECT filepath, filename, url_prefix, pwidth, pheight FROM {$CONFIG['TABLE_PICTURES']} ".
                                       "WHERE pid='%1\$s' %2\$s",
    'cat_list_user_gal_cat'         => "SELECT aid FROM {$CONFIG['TABLE_ALBUMS']} AS a WHERE category >= %1\$s %2\$s",
    'cat_list_not_user_gal_cat'     => "SELECT aid FROM {$CONFIG['TABLE_ALBUMS']} AS a WHERE category = '%1\$s' %2\$s",
    'cat_list_count_alb'            => "SELECT COUNT(aid) AS count FROM {$CONFIG['TABLE_ALBUMS']} AS a WHERE 1=1 %1\$s",
    'cat_list_count_pic_alb'        => "SELECT COUNT(pid) AS count FROM {$CONFIG['TABLE_PICTURES']} AS p LEFT JOIN " . $CONFIG['TABLE_ALBUMS'] . 
                                       " AS a ON a.aid=p.aid WHERE 1=1 %1\$s AND approved='YES'",
    'cat_list_count_comm_pic'       => "SELECT COUNT(msg_id) AS count FROM {$CONFIG['TABLE_COMMENTS']} AS c LEFT JOIN " . $CONFIG['TABLE_PICTURES'] .
                                       " AS p ON c.pid=p.pid LEFT JOIN " . $CONFIG['TABLE_ALBUMS'] . " AS a ON a.aid=p.aid ".
                                       " WHERE 1=1 %1\$s AND approval='YES'",
    'cat_list_count_cat'            => "SELECT COUNT(cid) AS count FROM {$CONFIG['TABLE_CATEGORIES']} WHERE 1=1",
    'cat_list_sum_pic_alb'          => "SELECT SUM(hits) AS sum_count FROM {$CONFIG['TABLE_PICTURES']} AS p LEFT JOIN " . $CONFIG['TABLE_ALBUMS'] . 
                                       " AS a ON p.aid=a.aid WHERE 1=1 %1\$s",
    'cat_list_current_alb_set'      => "SELECT COUNT(aid) AS count FROM {$CONFIG['TABLE_ALBUMS']} WHERE 1=1 %1\$s",
    'cat_list_count_pic'            => "SELECT COUNT(pid) AS count FROM {$CONFIG['TABLE_PICTURES']} WHERE 1=1 %1\$s",
    'cat_list_sum_pic'              => "SELECT SUM(hits) AS sum_count FROM {$CONFIG['TABLE_PICTURES']} WHERE 1=1 %1\$s AND approved='YES'",
    'list_user_pic'                 => "SELECT filepath, filename, url_prefix, pwidth, pheight FROM {$CONFIG['TABLE_PICTURES']} " . 
                                       "WHERE pid='%1\$s' AND approved='YES'",
    'list_albums_alb_owner'         => "SELECT COUNT(aid) AS count FROM {$CONFIG['TABLE_ALBUMS']} AS a WHERE owner = '%1\$s' %2\$s",
    'list_albums_alb_cats'          => "SELECT COUNT(aid) AS count FROM {$CONFIG['TABLE_ALBUMS']} AS a WHERE category = '%1\$s' %2\$s",
    'list_albums_alb_pic_owner'     => "SELECT TOP %4\$s a.aid, a.title, a.description, a.thumb, category, visibility, filepath, ".
                                       "filename, url_prefix, pwidth, pheight  FROM " . $CONFIG['TABLE_ALBUMS'] . 
                                       " AS a LEFT JOIN " . $CONFIG['TABLE_PICTURES'] . " AS p " . 
                                       "ON a.thumb=p.pid WHERE a.owner= %1\$s %2\$s AND a.category NOT IN ".
                                       "(SELECT TOP %3\$s category FROM {$CONFIG['TABLE_ALBUMS']} ORDER BY category DESC, pos) ".
                                       "ORDER BY a.category DESC, a.pos ",    ###    cpgdb_AL
    'list_albums_concat'            => "SELECT TOP %4\$s a.title + '%1\$s <i>' + c. name + '</i>' AS concat FROM ". $CONFIG['TABLE_ALBUMS'] . 
                                       " AS a LEFT JOIN ". $CONFIG['TABLE_CATEGORIES'] ." AS c ON a.category=c.cid  WHERE a.owner = %2\$s ".
                                       "AND a.category NOT IN (SELECT TOP %3\$s category FROM {$CONFIG['TABLE_ALBUMS']} ORDER BY category DESC, pos)".
                                       " ORDER BY a.category DESC, a.pos",    ###    cpgdb_AL
    'list_albums_alb_pic_cat'       => "SELECT TOP %4\$s a.aid, a.title, a.description, a.thumb, category, visibility, filepath, ".
                                       "filename, url_prefix, pwidth, pheight  FROM " . $CONFIG['TABLE_ALBUMS'] ." AS a ".
                                       "LEFT JOIN ". $CONFIG['TABLE_PICTURES'] ." AS p ON a.thumb=p.pid  WHERE a.category= %1\$s %2\$s ".
                                       "AND a.pos NOT IN (SELECT TOP %3\$s pos FROM {$CONFIG['TABLE_ALBUMS']} ORDER BY pos) ".
                                       "ORDER BY a.pos",    ###    cpgdb_AL
    'alb_stats_kwrd'                => "SELECT TOP %5\$s a.aid, COUNT( p.pid ) AS pic_count, MAX( p.pid ) AS last_pid, MAX( p.ctime ) ".
                                       "AS last_upload, a.keyword, a.alb_hits FROM {$CONFIG['TABLE_ALBUMS']} AS a ".
                                       "LEFT JOIN {$CONFIG['TABLE_PICTURES']} AS p ON a.aid = p.aid AND p.approved = 'YES' ".
                                       "WHERE a.category = %1\$s %2\$s AND a.aid NOT IN (SELECT TOP %4\$s a.aid FROM {$CONFIG['TABLE_ALBUMS']} AS a ".
                                       "LEFT JOIN {$CONFIG['TABLE_PICTURES']} AS p ON a.aid = p.aid AND p.approved = 'YES' ".
                                       "GROUP BY a.aid, a.keyword, a.alb_hits) GROUP BY a.aid, a.keyword, a.alb_hits",    ### cpgdb_AL
    'list_albums_get_pic_kwrd'      => "SELECT COUNT(pid) AS link_pic_count, max(pid) AS link_last_pid FROM {$CONFIG['TABLE_PICTURES']} ".
                                       "WHERE aid != '%1\$s' AND keywords LIKE '%2\$s' AND approved = 'YES'",
    'random_pictures'               => "SELECT TOP 1 filepath, filename, url_prefix, pwidth, pheight FROM {$CONFIG['TABLE_PICTURES']} ".
                                       "WHERE aid = '%1\$s' ORDER BY NEWID()",
    'get_pictures'                  => "SELECT filepath, filename, url_prefix, pwidth, pheight FROM {$CONFIG['TABLE_PICTURES']} ".
                                       "WHERE pid='%1\$s' ",
    'album_adm_menu_get_alb'        => "SELECT * FROM {$CONFIG['TABLE_ALBUMS']} WHERE aid='%1\$s' AND owner='%2\$s'",
    'album_adm_menu_dist_alb_cat'   => "SELECT DISTINCT alb.category FROM {$CONFIG['TABLE_ALBUMS']} AS alb ".
                                       "INNER JOIN {$CONFIG['TABLE_CATMAP']} AS catm ON alb.category=catm.cid ".
                                       "WHERE alb.owner = '%1\$s' AND alb.aid='%2\$s' AND catm.group_id='%3\$s'",
    'list_cat_alb_count_alb'        => "SELECT COUNT(aid) AS count FROM {$CONFIG['TABLE_ALBUMS']} AS a WHERE category = '%1\$s' %2\$s",
    'list_cat_alb_join_pic'         => "SELECT TOP %4\$s a.aid, a.title, a.description, a.thumb, visibility, filepath, filename, ".
                                       "url_prefix, pwidth, pheight FROM ". $CONFIG['TABLE_ALBUMS'] ." AS a ".
                                       "LEFT JOIN ". $CONFIG['TABLE_PICTURES'] ." AS p ON a.thumb=p.pid " . 
                                       "WHERE category=%1\$s %2\$s ".
                                       "AND a.pos NOT IN (SELECT TOP %3\$s pos FROM {$CONFIG['TABLE_ALBUMS']} ORDER BY pos)".
                                       "ORDER BY a.pos", ### cpgdb_AL
    //'list_cat_alb_count_alb_pic'    => "SELECT a.aid, count( p.pid ) AS pic_count, max( p.pid )  AS last_pid, max( p.ctime )  AS last_upload,".
                                       //" a.keyword, a.alb_hits   FROM {$CONFIG['TABLE_ALBUMS']} AS a   LEFT JOIN {$CONFIG['TABLE_PICTURES']} AS p ".
                                       //"ON a.aid = p.aid AND p.approved =  'YES' ". "WHERE a.aid IN %1\$s" . "GROUP BY a.aid",
    'list_cat_alb_kwrd_pic_srch'    => "SELECT COUNT(pid) AS link_pic_count FROM {$CONFIG['TABLE_PICTURES']} WHERE aid != %1\$s ".
                                       "AND keywords LIKE '%2\$s' AND approved = 'YES'"
    //'list_cat_alb_vis_test_aid'     => "SELECT filepath, filename, url_prefix, pwidth, pheight  FROM {$CONFIG['TABLE_PICTURES']} ".
                                       //"WHERE aid = '%1\$s' ORDER BY RAND() LIMIT 0,1",
    //'list_cat_alb_vis_test_pid'     => "SELECT filepath, filename, url_prefix, pwidth, pheight  FROM {$CONFIG['TABLE_PICTURES']} " . 
                                       //"WHERE pid='%1\$s'"
    );
}

/******************************************************/
//queries from install.php
/***********************************************************/
if (defined('INSTALL_PHP')) {
    $cpg_db_install_php = array(
    'create_db'                     => "CREATE DATABASE %1\$s",
    'config_thumb_method'           => "IF EXISTS (SELECT * FROM CPG_config WHERE name = 'thumb_method') ".
                                       "UPDATE CPG_config SET value ='%1\$s' WHERE name = 'thumb_method' ".
                                       "ELSE INSERT INTO CPG_config VALUES ('thumb_method', '%1\$s');\n",
    'config_im_path'                => "IF EXISTS (SELECT * FROM CPG_config WHERE name = 'impath') ".
                                       "UPDATE CPG_config SET value ='%1\$s' WHERE name = 'impath' ".
                                       "ELSE INSERT INTO CPG_config VALUES ('impath', '%1\$s');\n",
    'config_ecards_more_pic_target' => "IF EXISTS (SELECT * FROM CPG_config WHERE name = 'ecards_more_pic_target') ".
                                       "UPDATE CPG_config SET value ='%1\$s' WHERE name = 'ecards_more_pic_target' ".
                                       "ELSE INSERT INTO CPG_config VALUES ('ecards_more_pic_target', '%1\$s');\n",
    'config_gallery_admin_email'    => "IF EXISTS (SELECT * FROM CPG_config WHERE name = 'gallery_admin_email') ".
                                       "UPDATE CPG_config SET value ='%1\$s' WHERE name = 'gallery_admin_email' ".
                                       "ELSE INSERT INTO CPG_config VALUES ('gallery_admin_email', '%1\$s');\n",
    'config_silly_safe_mode'        => "IF EXISTS (SELECT * FROM CPG_config WHERE name = 'silly_safe_mode') ".
                                       "UPDATE CPG_config SET value ='1' WHERE name = 'silly_safe_mode' ".
                                       "ELSE INSERT INTO CPG_config VALUES ('silly_safe_mode', '1');\n",
    'config_default_dir_mode'       => "IF EXISTS (SELECT * FROM CPG_config WHERE name = 'default_dir_mode') ".
                                       "UPDATE CPG_config SET value ='0777' WHERE name = 'default_dir_mode' ".
                                       "ELSE INSERT INTO CPG_config VALUES ('default_dir_mode', '0777');\n",
    'config_default_file_mode'      => "IF EXISTS (SELECT * FROM CPG_config WHERE name = 'default_file_mode') ".
                                       "UPDATE CPG_config SET value ='0666' WHERE name = 'default_file_mode' ".
                                       "ELSE INSERT INTO CPG_config VALUES ('default_file_mode', '0666');\n",
    'add_admin_user'                => "INSERT INTO %1\$susers (user_group, user_active, user_name, user_password, ".
                                       "user_lastvisit, user_regdate, user_group_list, user_email, user_profile1, user_profile2, ".
                                       "user_profile3, user_profile4, user_profile5, user_profile6, user_actkey ) ".
                                       "VALUES (1, 'YES', '%2\$s', '%3\$s', GETDATE(), GETDATE(), '', '%4\$s', ".
                                       "'', '', '', '', '', '', '');\n"
    );
}

/**********************************************************/
//queries from keyword_create_dict.php
/***********************************************************/
if (defined('EDITPICS_PHP')) {
    $cpg_db_keyword_create_dict_php = array(
    'get_pic_keywords'  => "SELECT keywords FROM {$CONFIG['TABLE_PREFIX']}pictures",
    'get_dict_keyword'  => "SELECT keyword FROM {$CONFIG['TABLE_PREFIX']}dict WHERE keyword = '%1\$s'",
    'set_dict_keyword'  => "INSERT INTO {$CONFIG['TABLE_PREFIX']}dict (keyword) VALUES ('%1\$s')"
    );
}

/**********************************************************/
//queries from keyword_select.php
/***********************************************************/
if (defined('UPLOAD_PHP')) {
    $cpg_db_keyword_select_php = array(
    'get_all_dict'  => "SELECT * FROM {$CONFIG['TABLE_PREFIX']}dict ORDER BY keyword"
    );
}

/**********************************************************/
//queries from keywordmgr.php
/***********************************************************/
if(defined('KEYWORDMGR_PHP') || defined('SEARCH_PHP')) {
    $cpg_db_keywordmgr_php = array(
    'display_get_keywords'  => "SELECT keywords FROM {$CONFIG['TABLE_PICTURES']}",
    'get_pic_keywords'      => "SELECT pid,keywords FROM {$CONFIG['TABLE_PICTURES']} ".
                               "WHERE ' ' + keywords + ' ' LIKE '%1\$s'",
    'set_pic_keywords'      => "UPDATE {$CONFIG['TABLE_PICTURES']} SET keywords = '%1\$s' WHERE pid = '%2\$s'",
    'set_pic_trim_keywords' => "UPDATE {$CONFIG['TABLE_PICTURES']} SET keywords = LTRIM(RTRIM(REPLACE(keywords,'  ',' ')))"
    //'select_pid_02'         => "SELECT `pid`,`keywords` FROM {$CONFIG['TABLE_PICTURES']} WHERE CONCAT(' ',`keywords`,' ') LIKE '% {$remov} %'",
    //'update_pictures_02'    => "UPDATE {$CONFIG['TABLE_PICTURES']} SET `keywords` = '$keywords' WHERE `pid` = '$id'",
    //'update_pictures_03'    => "UPDATE {$CONFIG['TABLE_PICTURES']} SET `keywords` = TRIM(REPLACE(`keywords`,'  ',' '))"
    );
}

/**********************************************************/
//queries from langmgr.php
/***********************************************************/
if(defined('ADMIN_PHP') || defined('LANGMGR_PHP')) {
    $cpg_db_langmgr_php = array(
    'add_new_language'  => "INSERT INTO ".$CONFIG['TABLE_LANGUAGE']." ( lang_id , english_name , ".
                           "native_name, custom_name, flag, available, enabled, complete ) ".
                           "VALUES ( '%1\$s', '%2\$s', '%3\$s', '%4\$s', '%5\$s', '%6\$s', '%7\$s', '%8\$s' )",
    'edit_language'     => "UPDATE ".$CONFIG['TABLE_LANGUAGE']." SET english_name = '%1\$s', native_name = '%2\$s', ".
                           "custom_name = '%3\$s', flag = '%4\$s', available = '%5\$s', enabled = '%6\$s', complete = '%7\$s' ".
                           "WHERE lang_id = '%8\$s';",
    'get_all_languages' => "SELECT * FROM {$CONFIG['TABLE_LANGUAGE']}"
    );
}

/**********************************************************/
//queries from login.php
/***********************************************************/
if (defined('LOGIN_PHP')) {
    $cpg_db_login_php = array(
    'get_all_banned'    => "SELECT * FROM {$CONFIG['TABLE_BANNED']} WHERE ip_addr LIKE '%1\$s' OR ip_addr LIKE '%2\$s'",
    'update_banned'     => "UPDATE {$CONFIG['TABLE_BANNED']} SET brute_force='%1\$s', expiry='%2\$s' WHERE ban_id='%3\$s'",
    'new_banned'        => "INSERT INTO {$CONFIG['TABLE_BANNED']} (ip_addr, expiry, brute_force) VALUES ('%1\$s', '%2\$s', '%3\$s')"
    );
}

/**********************************************************/
//queries from minibrowser.php
/***********************************************************/
if (defined('MINIBROWSER_PHP') || defined('SEARCHNEW_PHP')) {
    $cpg_db_minibrowser_php = array(
    'get_allowed_extensions'    => "SELECT extension FROM {$CONFIG['TABLE_FILETYPES']}"
    );
}

/**********************************************************/
//queries from mode.php
/***********************************************************/
if (defined('MODE_PHP')) {
    $cpg_db_mode_php = array(
    'coppermine_news'   => "UPDATE {$CONFIG['TABLE_CONFIG']} SET value = '%1\$s' WHERE name = 'display_coppermine_news'"
    );
}

/**********************************************************/
//queries from modifyalb.php
/***********************************************************/
if (defined('MODIFYALB_PHP')) {
    $cpg_db_modifyalb_php = array(
    'get_subcat_data'           => "SELECT cid, name, description FROM {$CONFIG['TABLE_CATEGORIES']} ".
                                   "WHERE parent = '%1\$s' AND cid != 1 ORDER BY pos",
    'get_catmap_group_id'       => "SELECT group_id FROM {$CONFIG['TABLE_CATMAP']} WHERE group_id = '%1\$s' AND cid=%2\$s",
    'form_cat_get_name'         => "SELECT TOP 1 name FROM {$CONFIG['TABLE_CATEGORIES']} WHERE cid = '%1\$s' ",
    'form_alb_thumb_get_pic'    => "SELECT pid, filepath, filename, url_prefix FROM {$CONFIG['TABLE_PICTURES']} ".
                                   "WHERE approved='YES' AND ( aid='%1\$s' %2\$s ) ORDER BY filename",
    'form_vis_gal_admin'        => "SELECT group_id, group_name FROM {$CONFIG['TABLE_USERGROUPS']} WHERE 1=1",
    'form_vis_user_admin'       => "SELECT group_id, group_name FROM {$CONFIG['TABLE_USERGROUPS']} WHERE group_id IN %1\$s",
    'form_moderator'            => "SELECT group_id, group_name FROM {$CONFIG['TABLE_USERGROUPS']} WHERE group_id > 1",
    'get_distinct_alb'          => "SELECT DISTINCT a.aid AS aid, a.title AS title, c.name AS cname ".
                                   "FROM {$CONFIG['TABLE_ALBUMS']} AS a, {$CONFIG['TABLE_CATEGORIES']} AS c ".
                                   "WHERE a.category = c.cid AND a.category < '%1\$s'",
    'get_alb_without_cat'       => "SELECT aid, title FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = 0 ORDER BY title",
    'list_box_get_my_alb'       => "SELECT aid, title FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = %1\$s",
    'list_box_public_alb'       => "SELECT a.aid, a.title, c.name AS cname FROM {$CONFIG['TABLE_ALBUMS']} AS a ".
                                   "INNER JOIN {$CONFIG['TABLE_CATEGORIES']} AS c ON a.owner = '%1\$s' ".
                                   "AND a.category = c.cid ORDER BY a.category",
    'get_gal_admin_alb'         => "SELECT TOP 1 * FROM {$CONFIG['TABLE_ALBUMS']} WHERE 1=1 ",
    'get_user_admin_alb'        => "SELECT TOP 1 * FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = %1\$s OR owner = '%2\$s' ",
    'get_clean_alb'             => "SELECT * FROM {$CONFIG['TABLE_ALBUMS']} WHERE aid='%1\$s'",
    'get_pic_sum_hits'          => "SELECT SUM(hits) AS sum FROM {$CONFIG['TABLE_PICTURES']} WHERE aid='%1\$s'",
    'get_pic_sum_votes'         => "SELECT SUM(votes) AS sum FROM {$CONFIG['TABLE_PICTURES']} WHERE aid='%1\$s' AND votes > 0",
    'count_pic_clean_alb'       => "SELECT COUNT(*) AS count FROM {$CONFIG['TABLE_PICTURES']} WHERE aid='%1\$s'"
    );
}

/**********************************************************/
//queries from pic_editor.php
/***********************************************************/
if (defined('EDITPICS_PHP')) {
    $cpg_db_pic_editor_php = array(
    'get_pic_data'  => "SELECT * FROM {$CONFIG['TABLE_PICTURES']} WHERE pid = '%1\$s'",
    'save_image'    => "UPDATE {$CONFIG['TABLE_PICTURES']} SET pheight = %1\$s, pwidth = %2\$s, filesize = %3\%s, ".
                       "total_filesize = %4\$s WHERE pid = '%5\$s'",
    'save_thumb'    => "UPDATE {$CONFIG['TABLE_PICTURES']} SET total_filesize = %1\$s WHERE pid = '%2\$s'"
    
    );
}

/**********************************************************/
//queries from picmgr.php
/***********************************************************/
if (defined('PICMGR_PHP')) {
    $cpg_db_picmgr_php = array(
    'get_album_data'    => "SELECT aid, title FROM {$CONFIG['TABLE_ALBUMS']} ORDER BY title",
    'alb_root_cat'      => "SELECT aid, title FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = 0",
    'alb_public_cat'    => "SELECT DISTINCT a.aid AS aid, a.title AS title, c.name AS cname, c.cid AS cid ".
                           "FROM {$CONFIG['TABLE_ALBUMS']} AS a, {$CONFIG['TABLE_CATEGORIES']} AS c ".
                           "WHERE a.category = c.cid AND a.category < '%1\$s'",
    'alb_user_personal' => "SELECT aid, title AS title FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = '%1\$s'",
    'get_picture_sort'  => "SELECT aid, pid, filename FROM {$CONFIG['TABLE_PICTURES']} WHERE aid = '%1\$s' ORDER BY position ASC, pid"
    );
}

/**********************************************************/
//queries from pluginmgr.php
/***********************************************************/
if (defined('PLUGINMGR_PHP') || defined('CORE_PLUGIN')) {
    $cpg_db_pluginmgr_php = array(
    'update_config'         => "UPDATE {$CONFIG['TABLE_CONFIG']} SET value = '%1\$s' WHERE name = 'enable_plugins'",
    'get_installed_plugins' => "SELECT * FROM ".$CONFIG['TABLE_PLUGINS']." ORDER BY priority ASC;",
    'get_plugin'            => "SELECT TOP 1 * FROM ".$CONFIG['TABLE_PLUGINS']." WHERE plugin_id=%1\$s ;",
    'delete_plugin'         => "DELETE FROM ".$CONFIG['TABLE_PLUGINS']." WHERE plugin_id=%1\$s;",
    'shift_plugin_up'       => "UPDATE ".$CONFIG['TABLE_PLUGINS']." SET priority=priority-1 WHERE priority>%1\$s;",
    'set_priority'          => "UPDATE ".$CONFIG['TABLE_PLUGINS']." SET priority=%1\$s WHERE priority=%2\$s;",
    'set_priority_plugin'   => "UPDATE ".$CONFIG['TABLE_PLUGINS']." SET priority=%1\$s WHERE plugin_id=%2\$s;"
    //'update_plugins_03'     => 'update '.$CONFIG['TABLE_PLUGINS'].' set priority='.($priority).' where priority='.($priority+1).';',
    //'update_plugins_04'     => 'update '.$CONFIG['TABLE_PLUGINS'].' set priority='.($priority+1).' where plugin_id='.$thisplugin->plugin_id.';'
    );
}

/**********************************************************/
//queries from profile.php
/***********************************************************/
if (defined('PROFILE_PHP')) {
    $cpg_db_profile_php = array(
    'cpg_user_pic_count'        => "SELECT pid FROM {$CONFIG['TABLE_PICTURES']} WHERE owner_name = '%1\$s'",
    'count_owner_approved_pics' => "SELECT COUNT(*) AS count, MAX(pid) AS max FROM {$CONFIG['TABLE_PICTURES']} AS p ".
                                   "WHERE owner_id = '%1\$s' AND approved = 'YES' %2\$s",
    'count_owner_albums'        => "SELECT COUNT(*) AS count FROM {$CONFIG['TABLE_ALBUMS']} AS p WHERE category = '%1\$s' %2\$s",
    'cpg_user_thumb'            => "SELECT filepath, filename, url_prefix, pwidth, pheight FROM {$CONFIG['TABLE_PICTURES']} ".
                                   "WHERE pid='%1\$s'",
    'count_approved_comments'   => "SELECT COUNT(*) AS count, MAX(msg_id) AS max FROM {$CONFIG['TABLE_COMMENTS']} AS c, ".
                                   "{$CONFIG['TABLE_PICTURES']} AS p WHERE c.pid = p.pid AND approval='YES' ".
                                   "AND author_id = '%1\$s' %2\$s",
    'cpg_user_last_comment'     => "SELECT filepath, filename, url_prefix, pwidth, pheight, msg_author, ".
                                   "DATEDIFF(s, '19700101', msg_date) AS msg_date, msg_body, approval ".
                                   "FROM {$CONFIG['TABLE_COMMENTS']} AS c, {$CONFIG['TABLE_PICTURES']} AS p ".
                                   "WHERE msg_id='%1\$s' AND approval = 'YES' AND c.pid = p.pid",
    'get_user_id_verify_email'  => "SELECT user_id FROM {$CONFIG['TABLE_USERS']} WHERE user_email = '%1\$s' AND user_id <> %2\$s",
    'update_user_profile'       => "UPDATE {$CONFIG['TABLE_USERS']} SET user_profile1 = '%1\$s', user_profile2 = '%2\$s', ".
                                   "user_profile3 = '%3\$s', user_profile4 = '%4\$s', user_profile5 = '%5\$s', ".
                                   "user_profile6 = '%6\$s' %7\$s WHERE user_id = '%8\$s'",
    'update_user_password'      => "UPDATE %1\$s SET %2\$s = '%3\$s' WHERE %4\$s = '%5\$s' AND %6\$s = '%7\$s'",    ###### BINARY  cpgdb_AL
    /*'get_user_profile'          => "SELECT user_name, user_email, user_group, DATEDIFF(s, '19700101', user_regdate) as user_regdate, ".
                                   "group_name, user_profile1, user_profile2, user_profile3, user_profile4, user_profile5, ".
                                   "user_profile6, user_group_list, COUNT(pid) as pic_count, ROUND(SUM(total_filesize)/1024, 0) ".
                                   "as disk_usage, group_quota  FROM {$CONFIG['TABLE_USERS']} AS u ".
                                   "INNER JOIN {$CONFIG['TABLE_USERGROUPS']} AS g ON user_group = group_id  ".
                                   "LEFT JOIN {$CONFIG['TABLE_PICTURES']} AS p ON p.owner_id = u.user_id  ".
                                   "WHERE user_id ='%1\$s'  GROUP BY user_id, user_name, user_email, user_group, user_regdate,".
                                   "group_name, user_profile1, user_profile2, user_profile3, user_profile4, user_profile5, ".
                                   "user_profile6, user_group_list, group_quota; ",    ######    cpgdb_AL    */
    'get_usergroup_profile'     => "SELECT group_name, COUNT(pid) AS pic_count, ".
                                   "ROUND(SUM(total_filesize)/1024, 0) AS disk_usage, ".
                                   "group_quota FROM {$CONFIG['TABLE_USERS']} AS u ".
                                   "INNER JOIN {$CONFIG['TABLE_USERGROUPS']} AS g ON user_group = group_id ".
                                   "LEFT JOIN {$CONFIG['TABLE_PICTURES']} AS p ON p.owner_id = u.user_id ".
                                   "WHERE user_id ='%1\$s' GROUP BY user_id, group_name, group_quota; ",
    'get_user_profile'          => "SELECT user_name, user_email, user_group, DATEDIFF(s, '19700101', user_regdate) ".
                                   "AS user_regdate, user_profile1, user_profile2, user_profile3, user_profile4, user_profile5, ".
                                   "user_profile6, user_group_list FROM {$CONFIG['TABLE_USERS']} WHERE user_id = '%1\$s'",
    'get_group_name'            => "SELECT group_name FROM {$CONFIG['TABLE_USERGROUPS']} WHERE group_id IN (%1\$s) ".
                                   "AND group_id != %2\$s ORDER BY group_name"
    );
}

/**********************************************************/
//queries from ratepic.php
/***********************************************************/
if (defined('RATEPIC_PHP')) {
    $cpg_db_ratepic_php = array(
    'verify_user'           => "SELECT * FROM {$CONFIG['TABLE_PREFIX']}sessions WHERE session_id='%1\$s' AND user_id=%2\$s",
    'get_pic_info'          => "SELECT TOP 1 a.votes AS votes_allowed, p.votes AS votes, pic_rating, owner_id ".
                               "FROM {$CONFIG['TABLE_PICTURES']} AS p, {$CONFIG['TABLE_ALBUMS']} AS a ".
                               "WHERE p.aid = a.aid AND pid = '%1\$s' ",
    'clean_older_votes'     => "DELETE FROM {$CONFIG['TABLE_VOTES']} WHERE vote_time < %1\$s",
    'check_already_rated'   => "SELECT * FROM {$CONFIG['TABLE_VOTES']} WHERE pic_id = '%1\$s' AND user_md5_id = '%2\$s'",
    'update_pic_rating'     => "UPDATE {$CONFIG['TABLE_PICTURES']} SET pic_rating = '%1\$s', votes = votes + 1 ".
                               "WHERE pid = '%2\$s' ",
    'update_pic_votes'      => "INSERT INTO {$CONFIG['TABLE_VOTES']} VALUES ('%1\$s', '%2\$s', '%3\$s')",
    'add_vote_stats'        => "INSERT INTO {$CONFIG['TABLE_VOTE_STATS']} (pid, rating, Ip, sdate, referer, browser, os, uid)".
                               "VALUES (%1\$s, %2\$s, '%3\$s', '%4\$s', '%5\$s', '%6\$s', '%7\$s', '%8\$s')"
    );
}

/**********************************************************/
//queries from register.php
/***********************************************************/
if (defined('REGISTER_PHP')) {
    $cpg_db_register_php = array(
    'get_user_id_by_name'   => "SELECT user_id FROM {$CONFIG['TABLE_USERS']} WHERE user_name = '%1\$s'",
    'get_user_id_by_email'  => "SELECT user_id FROM {$CONFIG['TABLE_USERS']} WHERE user_email = '%1\$s'",
    'add_user'              => "INSERT INTO {$CONFIG['TABLE_USERS']} (user_regdate, user_active, user_actkey, ".
                               "user_name, user_password, user_email, user_profile1, user_profile2, user_profile3, ".
                               "user_profile4, user_profile5, user_profile6) VALUES (GETDATE(), '%1\$s', '%2\$s', ".
                               "'%3\$s', '%4\$s', '%5\$s', '%6\$s', '%7\$s', '%8\$s', '%9\$s', '%10\$s', '%11\$s'); ".
                               "SELECT SCOPE_IDENTITY() AS user_id",
    'add_user_album'        => "INSERT INTO {$CONFIG['TABLE_ALBUMS']} (title, category) VALUES ('%1\$s', %2\$s)",
    'get_user_data'         => "SELECT TOP 1 user_active, user_email, user_name, user_password FROM {$CONFIG['TABLE_USERS']} ".
                               "WHERE user_actkey = '%1\$s' ",
    'set_user_active'       => "UPDATE {$CONFIG['TABLE_USERS']} SET user_active = 'YES' WHERE user_actkey = '%1\$s' "
    );
}

/**********************************************************/
//queries from report_file.php
/***********************************************************/
if (defined('REPORT_FILE_PHP')) {
    $cpg_db_report_file_php = array(
    'get_pic_thumb_url' => "SELECT * FROM {$CONFIG['TABLE_PICTURES']} WHERE pid='%1\$s' %2\$s",
    'get_comment_info'  => "SELECT msg_id, msg_author, msg_body, DATEDIFF(s, '19700101', msg_date) AS msg_date, ".
                           "author_id, author_md5_id, msg_raw_ip, msg_hdr_ip, approval FROM {$CONFIG['TABLE_COMMENTS']} ".
                           "WHERE msg_id='%1\$s' AND approval = 'YES' AND pid='%2\$s'"
    );
}

/**********************************************************/
//queries from reviewcom.php
/***********************************************************/
if (defined('REVIEWCOM_PHP')) {
    $cpg_db_reviewcom_php = array(
    'verify_admin'                  => "SELECT TOP 1 msg_id, msg_author, msg_body, DATEDIFF(s, '19700101', msg_date) AS msg_date, approval, author_id, ".
                                       "{$CONFIG['TABLE_COMMENTS']}.pid AS pid, aid, filepath, filename, url_prefix, pwidth, pheight ".
                                       "FROM {$CONFIG['TABLE_COMMENTS']}, {$CONFIG['TABLE_PICTURES']} ".
                                       "WHERE {$CONFIG['TABLE_COMMENTS']}.pid = {$CONFIG['TABLE_PICTURES']}.pid ".
                                       "AND {$CONFIG['TABLE_COMMENTS']}.msg_id = '%1\$s'",
    'comments_query_approval'       => "UPDATE {$CONFIG['TABLE_COMMENTS']} SET approval = '%1\$s' WHERE msg_id = '%2\$s'",
    'display_comment_approval_only' => "UPDATE {$CONFIG['TABLE_CONFIG']} SET value = '%1\$s' WHERE name = 'display_comment_approval_only'",
    'set_approval_yes'              => "UPDATE {$CONFIG['TABLE_COMMENTS']} SET approval = 'YES' WHERE msg_id IN (%1\$s)",
    'set_approval_no'               => "UPDATE {$CONFIG['TABLE_COMMENTS']} SET approval = 'NO' WHERE msg_id IN (%1\$s)",
    'delete_selected_comments'      => "DELETE FROM {$CONFIG['TABLE_COMMENTS']} WHERE msg_id IN (%1\$s)",
    //'update_comments_04'            => "UPDATE {$CONFIG['TABLE_COMMENTS']} SET approval = 'YES' WHERE msg_id IN $cid_set",
    //'update_comments_05'            => "UPDATE {$CONFIG['TABLE_COMMENTS']} SET approval = 'NO' WHERE msg_id IN $cid_set",
    'count_comments'                => "SELECT COUNT(*) AS count FROM {$CONFIG['TABLE_COMMENTS']} WHERE 1=1",
    'only_comments_needing_approval'=> "SELECT TOP %4\$s msg_id, msg_author, msg_body, DATEDIFF(s, '19700101', msg_date) AS msg_date, approval, author_id, ".
                                       "{$CONFIG['TABLE_COMMENTS']}.pid AS pid, aid, filepath, filename, url_prefix, pwidth, pheight ".
                                       "FROM {$CONFIG['TABLE_COMMENTS']}, {$CONFIG['TABLE_PICTURES']} ".
                                       "WHERE {$CONFIG['TABLE_COMMENTS']}.pid = {$CONFIG['TABLE_PICTURES']}.pid %1\$s AND msg_id NOT IN ".
                                       "(SELECT TOP %3\$s msg_id FROM {$CONFIG['TABLE_COMMENTS']}, {$CONFIG['TABLE_PICTURES']} ".
                                       "WHERE {$CONFIG['TABLE_COMMENTS']}.pid = {$CONFIG['TABLE_PICTURES']}.pid) ORDER BY %2\$s "
    );
}

/**********************************************************/
//queries from search.php
/***********************************************************/
if (defined('SEARCH_PHP')) {
    $cpg_db_search_php = array(
    'get_all_config'    => "SELECT * FROM {$CONFIG['TABLE_CONFIG']} WHERE name LIKE '%1\$s' AND value <> '' ORDER BY name ASC"
    );
}

/**********************************************************/
//queries from searchnew.php
/***********************************************************/
if (defined('SEARCHNEW_PHP') || defined('DB_INPUT_PHP')) {
    $cpg_db_searchnew_php = array(
    'get_alb_def_cat'               => "SELECT aid, title FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = 0",
    'get_alb_cat'                   => "SELECT DISTINCT a.aid AS aid, a.title AS title, c.name AS cname, c.cid AS cid FROM ".
                                       "{$CONFIG['TABLE_ALBUMS']} AS a, {$CONFIG['TABLE_CATEGORIES']} AS c ".
                                       "WHERE a.category = c.cid AND a.category < '%1\$s'",
    'get_all_pic_in_db'             => "SELECT filepath, filename FROM {$CONFIG['TABLE_PICTURES']} WHERE filepath LIKE '%1\$s'",
    'get_all_alb_in_db'             => "SELECT aid, title FROM {$CONFIG['TABLE_ALBUMS']} WHERE 1=1",
    'browse_batch_add_edit'         => "UPDATE {$CONFIG['TABLE_CONFIG']} SET value = '%1\$s' WHERE name = 'browse_batch_add'",
    'display_thumbs_batch_add_edit' => "UPDATE {$CONFIG['TABLE_CONFIG']} SET value = '%1\$s' WHERE name = 'display_thumbs_batch_add'"
    );
}

/**********************************************************/
//queries from send_activation.php
/***********************************************************/
if (defined('SEND_ACTIVATION_PHP') || defined('REGISTER_PHP')) {
    $cpg_db_send_activation_php = array(
    'get_user_inactive' => "SELECT user_id, user_group,user_active,user_name, user_email, user_actkey ".
                           "FROM {$CONFIG['TABLE_USERS']} WHERE user_email = '%1\$s' AND user_active = 'NO'"
    );
}

/**********************************************************/
//queries from sidebar.php
/***********************************************************/
if (defined('SIDEBAR_PHP')) {
    $cpg_db_sidebar_php = array(
    'get_alb_id'        => "SELECT aid FROM {$CONFIG['TABLE_ALBUMS']} AS a WHERE category>=%1\$s ",
    'get_cat'           => "SELECT cid, name FROM {$CONFIG['TABLE_CATEGORIES']} WHERE parent = '%1\$s' ".
                           "ORDER BY %2\$s",
    'get_distinct_user' => "SELECT DISTINCT user_id, user_name FROM {$CONFIG['TABLE_USERS']}, {$CONFIG['TABLE_ALBUMS']} ".
                           "WHERE 10000 + {$CONFIG['TABLE_USERS']}.user_id = {$CONFIG['TABLE_ALBUMS']}.category ".
                           "ORDER BY user_name ASC",
    'get_alb_title'     => "SELECT aid, title FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = %1\$s %2\$s ORDER BY pos",
    //'select_aid'        => "SELECT aid,title FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = $category ".$ALBUM_SET .$unaliased_album_filter . " ORDER BY pos"
    );
}

/**********************************************************/
//queries from stat_details.php
/***********************************************************/
if (defined('STAT_DETAILS_PHP')) {
    $cpg_db_stat_details_php = array(
    'set_hit_details'       => "UPDATE {$CONFIG['TABLE_CONFIG']} SET value = '%1\$s' WHERE name = 'hit_details'",
    'set_vote_details'      => "UPDATE {$CONFIG['TABLE_CONFIG']} SET value = '%1\$s' WHERE name = 'vote_details'",
    'get_pic_rating'        => "SELECT rating, COUNT(rating) AS totalVotes FROM {$CONFIG['TABLE_VOTE_STATS']} ".
                               "WHERE pid=%1\$s GROUP BY rating",
    'count_pic_stats'       => "SELECT COUNT(pid) AS count FROM %1\$s %2\$s",
    'get_pic_stat_details'  => "SELECT TOP %9\$s %1\$s.* %2\$s FROM %3\$s %4\$s WHERE %5\$s ".
                               "AND pid NOT IN (SELECT TOP %8\$s pid FROM %3\$s %4\$s WHERE %5\$s ".
                               "ORDER BY %6\$s %7\$s ) ORDER BY %6\$s %7\$s "
    );
}

/**********************************************************/
//queries from thumbnails.php
/***********************************************************/
if (defined('THUMBNAILS_PHP')) {
    $cpg_db_thumbnails_php = array(
    'get_parent_cat_data'       => "SELECT cid FROM {$CONFIG['TABLE_CATEGORIES']} WHERE parent = '%1\$s'",
    'get_parent_subcat_data'    => "SELECT aid FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = '%1\$s'",
    'get_alb_numeric_data'      => "SELECT category, title, aid, keyword, description, alb_password_hint ".
                                   "FROM {$CONFIG['TABLE_ALBUMS']} WHERE aid='%1\$s'",
    'get_alb_data'              => "SELECT category, title, aid, keyword, description, alb_password_hint ".
                                   "FROM {$CONFIG['TABLE_ALBUMS']} WHERE aid='%1\$s'",
    'get_alb_aid'               => "SELECT aid FROM {$CONFIG['TABLE_ALBUMS']} WHERE %1\$s",
    'get_cat_name'              => "SELECT name FROM {$CONFIG['TABLE_CATEGORIES']} WHERE cid = '%1\$s'",
    'get_validate_alb'          => "SELECT aid FROM ". $CONFIG['TABLE_ALBUMS'] ." WHERE alb_password='%1\$s' AND aid='%2\$s'",
    'get_alb_if_pwrd'           => "SELECT aid FROM ". $CONFIG['TABLE_ALBUMS'] ." WHERE aid='%1\$s' AND alb_password != ''",
    'get_alb_pwrd'              => "SELECT alb_password FROM ". $CONFIG['TABLE_ALBUMS'] ."WHERE aid = '%1\$s'"
                                   //" WHERE MD5(alb_password)='%1\$s' AND aid='%2\$s'"
    );
}

/**********************************************************/
//queries from update.php
/***********************************************************/
if (defined('UPDATE_PHP')) {
    $cpg_db_update_php = array(
    'get_active_admin_user' => "SELECT user_active FROM {$CONFIG['TABLE_PREFIX']}users WHERE user_group = 1 ".
                               "AND user_name = '%1\$s' AND (user_password = '%2\$s' OR user_password = '%3\$s')",
    'get_all_config'        => "SELECT * FROM ".$CONFIG['TABLE_PREFIX']."config;",
    'get_config_value'      => "SELECT TOP 1 value FROM ".$CONFIG['TABLE_PREFIX']."config WHERE name='%1\$s' ",
    'get_table_structure'   => "SELECT * FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = N'%1\$s' ",
    //'show_warnings'         => 'SHOW WARNINGS',
    'get_user_passwords'    => "SELECT user_id, user_password FROM {$CONFIG['TABLE_PREFIX']}users",
    'encrypt_passwords'     => "UPDATE {$CONFIG['TABLE_PREFIX']}users SET user_password='%1\$s' WHERE user_id = '%2\$s';",
    'enable_encryption'     => "UPDATE {$CONFIG['TABLE_PREFIX']}config SET value = 1 WHERE name = 'enable_encrypted_passwords'",
    'add_encryption_switch' => "INSERT INTO {$CONFIG['TABLE_PREFIX']}config ( name , value ) VALUES ('enable_encrypted_passwords', '1')"
    //'describe_02'           => "DESCRIBE ".$query[2],
    //'show_warnings'         => 'SHOW WARNINGS;'
    );
}

/**********************************************************/
//queries from upload.php
/***********************************************************/
if (defined('UPLOAD_PHP') || defined('DB_INPUT_PHP') || defined('ADMIN_PHP')) {
    $cpg_db_upload_php = array(
    'get_cat_ancestry'              => "SELECT cid, parent, name FROM " . $CONFIG['TABLE_CATEGORIES'] . " WHERE 1=1",
    'get_all_tempdata_id'           => "SELECT unique_ID FROM {$CONFIG['TABLE_TEMPDATA']}",
    'add_tempdata'                  => "INSERT INTO {$CONFIG['TABLE_TEMPDATA']} ".
                                       "VALUES ('%1\$s', CONVERT(VARBINARY(MAX), '%2\$s'), '%3\$s')",
    'update_record_tempdata'        => "UPDATE {$CONFIG['TABLE_TEMPDATA']} SET encoded_string = CONVERT(VARBINARY(MAX), '%1\$s') ".
                                       "WHERE unique_ID = '%2\$s'",
    'delete_record_tempdata'        => "DELETE FROM {$CONFIG['TABLE_TEMPDATA']} WHERE unique_ID = '%1\$s'",
    'retrieve_record_tempdata'      => "SELECT CONVERT(VARCHAR(MAX), encoded_string) AS encoded_string ".
                                       "FROM {$CONFIG['TABLE_TEMPDATA']} WHERE unique_ID = '%1\$s'",
    'clean_table_tempdata'          => "DELETE FROM {$CONFIG['TABLE_TEMPDATA']} WHERE timestamp < %1\$s",
    'gal_admin_public_alb'          => "SELECT aid, title, cid, name FROM {$CONFIG['TABLE_ALBUMS']} ".
                                       "INNER JOIN {$CONFIG['TABLE_CATEGORIES']} ON cid = category WHERE category < %1\$s"  ,
    'gal_admin_public_alb_no_cat'   => "SELECT aid, title FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = 0",
    'public_alb'                    => "SELECT aid, title, cid, name FROM {$CONFIG['TABLE_ALBUMS']} ".
                                       "INNER JOIN {$CONFIG['TABLE_CATEGORIES']} ON cid = category  WHERE category < %1\$s  ".
                                       "AND ((uploads='YES' AND (visibility = '0' OR visibility IN %2\$s)) OR (owner=%3\$s))",
    'public_alb_no_cat'             => "SELECT aid, title FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = 0 ".
                                       "AND ((uploads='YES' AND (visibility = '0' OR visibility IN %1\$s)) OR (owner=%2\$s))",
    'user_alb'                      => "SELECT aid, title FROM {$CONFIG['TABLE_ALBUMS']} WHERE category='%1\$s' ORDER BY title",
    //'select_extension'              => "SELECT extension FROM {$CONFIG['TABLE_FILETYPES']} WHERE mime='$URI_MIME_type'",    //query is removed
    'check_valid_alb'               => "SELECT category FROM {$CONFIG['TABLE_ALBUMS']} WHERE aid='%1\$s' ".
                                       "AND (uploads = 'YES' OR category = '%2\$s' OR owner = '%3\$s')",
    'check_gal_admin_valid_alb'     => "SELECT category FROM {$CONFIG['TABLE_ALBUMS']} WHERE aid='%1\$s'"
    );
}

/**********************************************************/
//queries from usermgr.php
/***********************************************************/
if (defined('USERMGR_PHP') || defined('PROFILE_PHP')) {
    $cpg_db_usermgr_php = array(
    'delete_user'               => "DELETE FROM {$CONFIG['TABLE_USERS']} WHERE user_name = '' ",
    'list_group_alb_access'     => "SELECT group_id, albums.aid AS aid, group_name, categories.name AS category, albums.title AS album ".
                                   "FROM {$CONFIG['TABLE_USERGROUPS']} AS groups, {$CONFIG['TABLE_ALBUMS']} AS albums ".
                                   "LEFT JOIN {$CONFIG['TABLE_CATEGORIES']} AS categories ON albums.category = categories.cid ".
                                   "WHERE group_id = '%1\$s' AND albums.visibility = groups.group_id ORDER BY category, album",
    'list_groups_alb_access'    => "SELECT group_id, group_name, categories.name AS category, albums.title AS album ".
                                   "FROM {$CONFIG['TABLE_USERGROUPS']} AS groups, {$CONFIG['TABLE_ALBUMS']} AS albums ".
                                   "LEFT JOIN {$CONFIG['TABLE_CATEGORIES']} AS categories ON albums.category = categories.cid ".
                                   "WHERE albums.visibility = groups.group_id GROUP BY group_name ORDER BY group_name, category, album",
    'total_files_uploaded'      => "SELECT COUNT(*) AS count FROM {$CONFIG['TABLE_PICTURES']}",
    'total_space_used'          => "SELECT SUM(total_filesize) AS sum FROM {$CONFIG['TABLE_PICTURES']}",
    'total_comments_posted'     => "SELECT COUNT(*) AS count FROM {$CONFIG['TABLE_COMMENTS']}",
    'get_comment_count'         => "SELECT COUNT(*) AS count FROM {$CONFIG['TABLE_COMMENTS']} WHERE author_id = %1\$s %2\$s",
    'list_users'                => "SELECT group_id, group_name FROM {$CONFIG['TABLE_USERGROUPS']} ORDER BY group_name",
    'get_edit_user'             => "SELECT * FROM {$CONFIG['TABLE_USERS']} WHERE user_id = '%1\$s'",
    'get_update_user'           => "SELECT user_id FROM {$CONFIG['TABLE_USERS']} WHERE user_name = '%1\$s' AND user_id != '%2\$s'",
    'update_user'               => "UPDATE {$CONFIG['TABLE_USERS']} SET user_name = '%1\$s', user_email = '%2\$s', user_active = '%3\$s', ".
                                   "user_group = '%4\$s', user_profile1 = '%5\$s', user_profile2 = '%6\$s', user_profile3 = '%7\$s', ".
                                   "user_profile4 = '%8\$s', user_profile5 = '%9\$s', user_profile6 = '%10\$s', user_group_list = '%11\$s' ".
                                   "%12\$s WHERE user_id = '%13\$s'",
    'switch_new_user'           => "INSERT INTO {$CONFIG['TABLE_USERS']} (user_regdate, user_active, user_profile6) ".
                                   "VALUES (GETDATE(), 'YES', '');".    #####    cpgdb_AL
                                   "SELECT SCOPE_IDENTITY() AS user_id",    ###### for mssql to get the last insert id.
    'switch_group_alb_access'   => "SELECT group_name FROM {$CONFIG['TABLE_USERGROUPS']} AS groups, {$CONFIG['TABLE_ALBUMS']} AS albums ".
                                   "WHERE group_id = '%1\$s' AND albums.visibility = groups.group_id"
    );
}

/**********************************************************/
//queries from util.php
/***********************************************************/
if (defined('UTIL_PHP') || defined('UPLOAD_PHP')) {
    $cpg_db_util_php = array(
    'del_titles_update'             => "UPDATE {$CONFIG['TABLE_PICTURES']} SET title = '' %1\$s",
    'get_all_pics'                  => "SELECT * FROM {$CONFIG['TABLE_PICTURES']} %1\$s",
    'filename_to_title_update'      => "UPDATE {$CONFIG['TABLE_PICTURES']} SET title = '%1\$s' WHERE pid = '%2\$s'",
    'filloptions'                   => "SELECT aid, category, ".
                                       "CASE ".
                                            "WHEN user_name IS NOT NULL ".
                                            "THEN '(' + user_name + ') ' + title ".
                                            "ELSE ' - ' + title ".
                                       "END ".
                                       "AS title FROM {$CONFIG['TABLE_ALBUMS']} AS a ".
                                       "LEFT JOIN {$CONFIG['TABLE_USERS']} AS u ON category = (%1\$s + user_id) ".
                                       "ORDER BY category, title",
    'filloptions_get_name'          => "SELECT name FROM {$CONFIG['TABLE_CATEGORIES']} WHERE cid = %1\$s",
    'update_thumbs_get_pics'        => "SELECT TOP %3\$s * FROM {$CONFIG['TABLE_PICTURES']} %1\$s AND pid NOT IN ".
                                       "(SELECT TOP %2\$s pid FROM {$CONFIG['TABLE_PICTURES']} %1\$s)",
    'update_thumbs_update_pic'      => "UPDATE {$CONFIG['TABLE_PICTURES']} SET pwidth='%1\$s', pheight='%2\$s' WHERE pid='%3\$s' ",
    'del_orig_update_pic'           => "UPDATE {$CONFIG['TABLE_PICTURES']} SET filesize='%1\$s', total_filesize='%2\$s', ".
                                       "pwidth='%3\$s', pheight='%4\$s' WHERE pid='%5\$s' ",
    'del_norm_update_pic'           => "UPDATE {$CONFIG['TABLE_PICTURES']} SET total_filesize='%1\$s' WHERE pid='%2\$s'",
    'del_orphans_single_comment'    => "DELETE FROM {$CONFIG['TABLE_COMMENTS']} WHERE msg_id= '%1\$s' ",
    'del_orphans_get_pic_id'        => "SELECT pid FROM {$CONFIG['TABLE_PICTURES']}",
    'del_orphans_get_all_comment'   => "SELECT * FROM {$CONFIG['TABLE_COMMENTS']} WHERE pid NOT IN %1\$s",
    'del_orphans_comment'           => "DELETE FROM {$CONFIG['TABLE_COMMENTS']} WHERE msg_id= %1\$s",
    'del_old_pics'                  => "DELETE FROM {$CONFIG['TABLE_PICTURES']} WHERE pid='%1\$s' ",
    'del_old_comment'               => "DELETE FROM {$CONFIG['TABLE_COMMENTS']} WHERE pid='%1\$s' ",
    'del_old_exif'                  => "DELETE FROM {$CONFIG['TABLE_EXIF']} WHERE filename='%1\$s' ",
    'reset_views_update_pics'       => "UPDATE {$CONFIG['TABLE_PICTURES']} SET hits ='0' %1\$s",
    'refresh_db_get_all_pics'       => "SELECT TOP %3\$s * FROM {$CONFIG['TABLE_PICTURES']} %1\$s AND pid NOT IN ".
                                       "(SELECT TOP %2\$s pid FROM {$CONFIG['TABLE_PICTURES']} %1\$s) ORDER BY pid ASC ",
    'refresh_db_set_total_filesize' => "UPDATE {$CONFIG['TABLE_PICTURES']} SET total_filesize = '%1\$s' ".
                                       "WHERE pid = '%2\$s' ",
    'refresh_db_set_filesize'       => "UPDATE {$CONFIG['TABLE_PICTURES']} SET filesize = '%1\$s' WHERE pid = '%2\$s' ",
    'refresh_db_set_dimensions'     => "UPDATE {$CONFIG['TABLE_PICTURES']} SET pwidth = '%1\$s', pheight = '%2\$s' ".
                                       "WHERE pid = '%3\$s' "
    );
}

/**********************************************************/
//queries from xp_publish.php
/***********************************************************/
if (defined('XP_PUBLISH_PHP') || defined('LOGIN_PHP') || defined('DB_INPUT_PHP') || defined('ALBMGR_PHP')) {
    $cpg_db_xp_publish_php = array(
    'get_subcat_data'           => "SELECT cid, name, description FROM {$CONFIG['TABLE_CATEGORIES']} ".
                                   "WHERE parent = '%1\$s' AND cid != 1 ORDER BY pos",
    'get_public_albums'         => "SELECT aid, title FROM {$CONFIG['TABLE_ALBUMS']} WHERE category < %1\$s ORDER BY title",
    'get_user_albums'           => "SELECT aid, title FROM {$CONFIG['TABLE_ALBUMS']} WHERE category='%1\$s' ORDER BY title",
    'create_album'              => "INSERT INTO {$CONFIG['TABLE_ALBUMS']} (category, title, uploads, pos) ".
                                   "VALUES ('%1\$s', '%2\$s', 'NO', '0'); SELECT SCOPE_IDENTITY() AS aid",
    'check_alb_user_not_admin'  => "SELECT category FROM {$CONFIG['TABLE_ALBUMS']} WHERE aid='%1\$s' AND category = '%2\$s'",
    'check_alb_user_admin'      => "SELECT category FROM {$CONFIG['TABLE_ALBUMS']} WHERE aid='%1\$s'",
    'get_position'              => "SELECT position FROM {$CONFIG['TABLE_PICTURES']} WHERE aid='%1\$s' ORDER BY position DESC"
    );
}

/**********************************************************/
//queries from zipdownload.php
/***********************************************************/
if (defined('THUMBNAILS_PHP') || defined('INDEX_PHP')) {
    $cpg_db_zipdownload_php = array(
    'get_favpics'   => "SELECT %1\$s FROM {$CONFIG['TABLE_PICTURES']} WHERE approved = 'YES' AND pid IN (%2\$s)"
    );
}


#########################################
############           bridge files           #############
#########################################

/**********************************************************************************************************/
//    queries  from  bridge/ coppermine.inc.php
/**********************************************************************************************************/
$cpg_db_coppermine_inc = array(
    'login_get_user_info'       => "SELECT user_id, user_name, user_password FROM %1\$s WHERE %2\$s",
    'login_set_user_lastvisit'  => "UPDATE %1\$s SET user_lastvisit = GETDATE() WHERE %2\$s",
    'update_guestsession'       => "UPDATE %1\$s SET user_id=%2\$s %3\$s WHERE session_id='%4\$s';",
    'logout_session'            => "UPDATE %1\$s SET user_id = 0, remember=0 WHERE session_id='%2\$s';",
    'get_user_group'            => "SELECT user_group_list FROM %1\$s AS u WHERE %2\$s='%3\$s' AND user_group_list <> '';",
    'delete_old_sessions'       => "DELETE FROM %1\$s WHERE time<%2\$s AND remember=0;",
    'delete_remember_sessions'  => "DELETE FROM %1\$s WHERE time<%2\$s;",
    'check_valid_session'       => "SELECT user_id, time FROM %1\$s WHERE session_id='%2\$s';",
    'check_session_user'        => "SELECT user_id AS id, user_password AS password FROM %1\$s WHERE user_id=%2\$s",
    'session_update'            => "UPDATE %1\$s SET time='%2\$s' WHERE session_id='%3\$s';",
    'create_session'            => "INSERT INTO %1\$s (session_id, user_id, time, remember) VALUES ('%2\$s', 0, '%3\$s', 0);",
    'generate_session_id'       => "SELECT session_id FROM %1\$s WHERE session_id='%2\$s'",
    'get_guest_count'           => "SELECT COUNT(user_id) AS num_guests FROM %1\$s WHERE user_id=0;",
    'get_auth_user_count'       => "SELECT COUNT(user_id) AS num_users FROM %1\$s WHERE user_id>0;",
    'get_group_no_override'     => "SELECT * FROM %1\$s WHERE $2\$s <> ''",
    'get_group_data'            => "SELECT group_id, group_name FROM {$CONFIG['TABLE_USERGROUPS']} WHERE 1=1",
    'add_admin_info'            => "INSERT INTO {$CONFIG['TABLE_USERGROUPS']} (group_id, group_name, has_admin_access) ".
                                   "VALUES ('%1\$s', '%2\$s', '%3\$s')",
    'update_group_names'        => "UPDATE {$CONFIG['TABLE_USERGROUPS']} SET group_name = '%1\$s' WHERE group_id = '%2\$s'",
    'fix_admin_group'           => "UPDATE {$CONFIG['TABLE_USERGROUPS']} SET has_admin_access = '1' WHERE group_id = '1'"
);


/**********************************************************************************************************/
//    queries  from  bridge/ eblah.inc.php
/**********************************************************************************************************/
$cpg_db_eblah_inc = array(
    'get_user_id'   => "SELECT %1\$s AS user_id FROM %2\$s WHERE %3\$s = '%4\$s'",
    'get_username'  => "SELECT user_name FROM {$CONFIG['TABLE_USERS']}",
    'sync_users'    => "INSERT INTO %1\$s (user_name, user_password, user_email, user_active, user_group) ".
                       "VALUES ( '%2\$s', '%3\$s', '%4\$s', 'YES', %5\$s)"
);


/**********************************************************************************************************/
//    queries  from  bridge/ invisionboard20.inc.php
/**********************************************************************************************************/
$cpg_db_invisionboard20_inc = array(
    'session_extract'   => "SELECT member_id , member_login_key FROM %1\$s AS s INNER JOIN %2\$s AS u ".
                           "ON s.member_id = u.id WHERE s.id = '%3\$s'"
);


/**********************************************************************************************************/
//    queries  from  bridge/ mambo.inc.php
/**********************************************************************************************************/
$cpg_db_mambo_inc = array(
    'delete_old_sessions'       => "DELETE FROM %1\$s WHERE (time < %2\$s);",
    'session_update'            => "UPDATE %1\$s SET time='%2\$s' WHERE session_id='%3\$s';",
    'collect_groups'            => "SELECT * FROM %1\$s",
    'check_session_cookie'      => "SELECT userid FROM %1\$s WHERE session_id='%2\$s';",
    'session_exists_check_user' => "SELECT id, password FROM %1\$s WHERE id='%2\$s'",
    'get_id_from_mambo'         => "SELECT u.%1\$s AS id, u.%2\$s AS password, u.%3\$s AS username, u.%4\$s AS usertbl_group_id, ".
                                   "g.%5\$s AS grouptbl_group_id, g.%6\$s AS grouptbl_group_name ".
                                   "FROM %7\$s AS u INNER JOIN %8\$s AS g ON gid=group_id ".
                                   "WHERE u.%3\$s='%9\$s' AND u.%2\$s='%10\$s' AND u.block=0;",
    'update_session_info'       => "UPDATE %1\$s SET userid=%2\$s,username='%3\$s',guest=0 ,gid=%4\$s ,usertype='%5\$s' ".
                                   "WHERE session_id='%6\$s';",
    'update_lastvisit'          => "UPDATE %1\$s SET lastvisitDate='%2\$s' WHERE id=%3\$s",
    /*'login_get_mambo_id'        => 'select u.%1\$s as id, u.%2\$s as password, u.%3\$s as username, u.%4\$s as usertbl_group_id, '.
                                   'g.%5\$s as grouptbl_group_id, g.%6\$s as grouptbl_group_name '.
                                   'from %7\$s as u inner join %8\$s as g on gid=group_id '.
                                   'where u.%3\$s="%9\$s" and u.%2\$s="%10\$s" and u.block=0;',
    'login_update_session'      => 'update %1\$s set userid=%2\$s,username="%3\$s",guest=0 ,gid=%4\$s ,usertype="%5\$s" '.
                                   'where session_id="%6\$s";',
    'login_update_lastvisit'    => 'update %1\$s set lastvisitDate="%2\$s" where id=%3\$s',*/
    'create_session'            => "INSERT INTO %1\$s (session_id, username, guest, time, gid) VALUES ('%2\$s', '', 1, '%3\$s',0)",
    'generate_id'               => "SELECT session_id FROM %1\$s WHERE session_id='%2\$s'",
    'int_src_int_tgt'           => "SELECT COUNT(*) AS count FROM %1\$s AS g1 LEFT JOIN %1\$s AS g2 ON g1.lft > g2.lft ".
                                   "AND g1.lft < g2.rgt WHERE g1.group_id=%2\$s AND g2.group_id=%3\$s",
    'str_src_str_tgt'           => "SELECT COUNT(*) AS count FROM %1\$s AS g1 LEFT JOIN %1\$s AS g2 ON g1.lft > g2.lft ".
                                   "AND g1.lft < g2.rgt WHERE g1.name='%2\$s' AND g2.name='%3\$s'",
    'int_src_str_tgt'           => "SELECT COUNT(*) AS count FROM %1\$s AS g1 LEFT JOIN %1\$s AS g2 ON g1.lft > g2.lft ".
                                   "AND g1.lft < g2.rgt WHERE g1.group_id='%2\$s' AND g2.name='%3\$s'",
    'src_tgt_else'              => "SELECT COUNT(*) AS count FROM %1\$s AS g1 LEFT JOIN %1\$s AS g2 ON g1.lft > g2.lft ".
                                   "AND g1.lft < g2.rgt WHERE g1.name=%2\$s AND g2.group_id='%3\$s'"
);


/**********************************************************************************************************/
//    queries  from  bridge/ mybb.inc.php
/**********************************************************************************************************/
$cpg_db_mybb_inc = array(
    'session_extract'   => "SELECT u.%1\$s, u.%2\$s FROM %3\$s AS s INNER JOIN %4\$s AS u ON u.uid = s.uid ".
                           "WHERE sid='%5\$s' AND ip='%6\$s'",
);


/**********************************************************************************************************/
//    queries  from  bridge/ phorum.inc.php
/**********************************************************************************************************/
$cpg_db_phorum_inc = array(
    'collect_groups'    => "SELECT * FROM %1\$s"
);


/**********************************************************************************************************/
//    queries  from  bridge/ phpbb3.inc.php
/**********************************************************************************************************/
$cpg_db_phpbb3_inc = array(
    'session_extraction'    => "SELECT user_id, user_password FROM %1\$s INNER JOIN %2\$s ".
                               "ON session_user_id = user_id WHERE session_id='%3\$s';",
    'get_cpg_usergroups'    => "SELECT group_id, group_name, group_quota FROM %1\$s",
    'get_udb_group_id'      => "SELECT group_id FROM %1\$s WHERE group_id != 6",
    'get_users'             => "SELECT TOP %11\$s u.%1\$s AS user_id, u.%2\$s AS user_group, %3\$s AS user_name, ".
                               "%4\$s AS user_email, %5\$s AS user_regdate, %6\$s AS user_lastvisit, ".
                               "'' AS user_active, 0 AS pic_count, 0 AS disk_usage FROM %7\$s AS u ".
                               "WHERE u.%1\$s <> 1 AND u.%2\$s <> 6 %8\$s AND u.%1\$s NOT IN (SELECT %10\$s u.%1\$s ".
                               "FROM %7\$s AS u WHERE u.%1\$s <> 1 AND u.%2\$s <> 6 %8\$s %9\$s) %9\$s ",
    'get_pic_owner'         => "SELECT owner_id, COUNT(pid) as pic_count, ROUND(SUM(total_filesize)/1024, 0) as disk_usage ".
                               "FROM %1\$s WHERE owner_id IN (%2\$s) GROUP BY owner_id"
);


/**********************************************************************************************************/
//    queries  from  bridge/ phpbb2018.inc.php
/**********************************************************************************************************/
$cpg_db_phpbb2018_inc = array(
    'collect_groups'        => "SELECT * FROM %1\$s WHERE group_single_user = 0",
    'session_extraction'    => "SELECT u.%1\$s AS user_id, u.%2\$s AS password, u.user_level FROM %3\$s AS u, %4\$s AS s ".
                               "WHERE u.%1\$s=s.session_user_id AND s.session_id = '%5\$s' AND u.user_id > 0",
    'get_groups'            => "SELECT ug.%1\$s+100 AS group_id FROM %2\$s AS u, %3\$s AS ug, %4\$s AS g ".
                               "WHERE u.%5\$s=ug.%5\$s AND u.%5\$s='%6\$s' AND g.%7\$s = ug.%7\$s",
    'cookie_extraction'     => "SELECT u.user_id, u.user_password FROM %1\$s AS s INNER JOIN %2\$s AS u ".
                               "ON s.user_id = u.user_id WHERE u.user_id = '%3\$s' AND u.user_active = 1 AND s.key_id = '%4\$s'",
    'get_usergroups'        => "SELECT group_id, group_name, group_quota FROM %1\$s",
    'get_group_id'          => "SELECT group_id FROM %1\$s WHERE group_single_user = 0",
    'get_user_usergroups'   => "SELECT TOP %13\$s u.%1\$s AS user_id, MIN(ug.%2\$s) AS user_group, %3\$s AS user_name, %4\$s AS user_email, ".
                               "%5\$s AS user_regdate, %6\$s AS user_lastvisit, '' AS user_active, 0 AS pic_count, 0 AS disk_usage ".
                               "FROM %7\$s AS u  INNER JOIN %8\$s AS ug ON u.%9\$s=ug.%9\$s   ".
                               "WHERE u.%1\$s > 0 %10\$s  AND u.user_id NOT IN (SELECT TOP %12\$s u.user_id FROM %7\$s AS u  ".
                               "INNER JOIN %8\$s AS ug ON u.%9\$s=ug.%9\$s WHERE u.%1\$s > 0 %10\$s  ".
                               "GROUP BY ug.%1\$s %11\$s ) GROUP BY ug.%1\$s, %3\$s, %4\$s, %5\$s, %6\$s  %11\$s ;",
    'get_user_pic_data'     => "SELECT owner_id, COUNT(pid) AS pic_count, ROUND(SUM(total_filesize)/1024, 0) AS disk_usage ".
                               "FROM %1\$s WHERE owner_id IN (%2\$s) GROUP BY owner_id" 
);


/**********************************************************************************************************/
//    queries  from  bridge/ phpbb.inc.php
/**********************************************************************************************************/
$cpg_db_phpbb_inc = array(
    'collect_groups'        => "SELECT * FROM %1\$s WHERE group_single_user = 0",
    'session_extraction'    => "SELECT u.%1\$s AS user_id, u.%2\$s AS password FROM %3\$s AS u, %4\$s AS s ".
                               "WHERE u.%1\$s=s.session_user_id AND s.session_id = '%5\$s' AND u.user_id > 0",
    'get_groups'            => "SELECT ug.%1\$s+100 AS group_id FROM %2\$s AS u, %3\$s AS ug, %4\$s AS g  ".
                               "WHERE u.%5\$s=ug.%5\$s AND u.%5\$s='%6\$s' AND g.%7\$s = ug.%7\$s",
    'get_usergroups'        => "SELECT group_id, group_name, group_quota FROM %1\$s",
    'get_group_id'          => "SELECT group_id FROM %1\$s WHERE group_single_user = 0",
    'get_user_grouops'      => "SELECT TOP %13\$s u.%1\$s AS user_id, MIN(ug.%2\$s) AS user_group, %3\$s AS user_name, %4\$s AS user_email, ".
                               "%5\$s AS user_regdate, %6\$s AS user_lastvisit, '' AS user_active, 0 AS pic_count, 0 AS disk_usage ".
                               "FROM %7\$s AS u INNER JOIN %8\$s AS ug ON u.%9\$s=ug.%9\$s  ".
                               "WHERE u.%1\$s > 0 %10\$s AND u.user_id NOT IN (SELECT TOP %12\$s u.user_id FROM %7\$s AS u ".
                               "INNER JOIN %8\$s AS ug ON u.%9\$s=ug.%9\$s WHERE u.%1\$s > 0 %10\$s  ".
                               "GROUP BY ug.%1\$s %11\$s) GROUP BY ug.%1\$s, %3\$s, %4\$s, %5\$s, %6\$s %11\$s ;",
    'get_user_pic_data'     => "SELECT owner_id, COUNT(pid) AS pic_count, ROUND(SUM(total_filesize)/1024, 0) AS disk_usage ".
                               "FROM %1\$s WHERE owner_id IN (%2\$s) GROUP BY owner_id"
);


/**********************************************************************************************************/
//    queries  from  bridge/ punbb12.inc.php
/**********************************************************************************************************/
$cpg_db_punbb12_inc = array(
    'get_usergroups'        => "SELECT group_id, group_name, group_quota FROM %1\$s",
    'get_group_id'          => "SELECT %1\$s FROM %2\$s",
    'get_user_usergroups'   => "SELECT TOP %11\$s u.%1\$s AS user_id, u.%2\$s AS user_group, %3\$s AS user_name, ".
                               "%4\$s AS user_email, %5\$s AS user_regdate, %6\$s AS user_lastvisit, ".
                               "'' AS user_active, 0 AS pic_count FROM %7\$s AS u ".
                               "WHERE u.%1\$s > 1 %8\$s AND u.user_id NOT IN (SELECT TOP %10\$s u.user_id ".
                               "FROM %7\$s AS u WHERE u.%1\$s > 1 %8\$s %9\$s ) %9\$s ",
    'get_user_pic_data'     => "SELECT owner_id, COUNT(pid) AS pic_count, ROUND(SUM(total_filesize)/1024, 0) AS disk_usage ".
                               "FROM %1\$s WHERE owner_id IN (%2\$s) GROUP BY owner_id"
);


/**********************************************************************************************************/
//    queries  from  bridge/ punbb115.inc.php
/**********************************************************************************************************/
$cpg_db_punbb115_inc = array(
    'session_extraction'    => "SELECT id, username, status+100 AS status FROM %1\$s ".
                               "WHERE username = '%2\$s' AND password = '%3\$s'"
);


/**********************************************************************************************************/
//    queries  from  bridge/ smf10.inc.php
/**********************************************************************************************************/
$cpg_db_smf10_inc = array(
    'get_all_groups'    => "SELECT * FROM %1\$s"
);


/**********************************************************************************************************/
//    queries  from  bridge/ smf20.inc.php
/**********************************************************************************************************/
$cpg_db_smf20_inc = array(
    'get_all_groups'    => "SELECT * FROM %1\$s"
);


/**********************************************************************************************************/
//    queries  from  bridge/ udb_base.inc.php
/**********************************************************************************************************/
$cpg_db_udb_base_inc = array(
    'auth_set_usergrptbl'           => "SELECT u.%1\$s AS id, u.%2\$s AS username, u.%3\$s AS password, ug.%4\$s AS group_id ".
                                       "FROM %5\$s AS u, %6\$s AS ug  WHERE u.%1\$s =ug.%1\$s AND u.%1\$s ='%7\$s'",
    'auth_notset_usergrptbl'        => "SELECT u.%1\$s AS id, u.%2\$s AS username, u.%3\$s AS password, ".
                                       "u.%4\$s+100 AS group_id  FROM %5\$s AS u INNER JOIN %6\$s AS g ".
                                       "ON u.%4\$s=g.%7\$s WHERE u.%1\$s='%8\$s'",
    'get_user_count'                => "SELECT COUNT(*) AS count FROM %1\$s WHERE 1=1",
    'get_users'                     => "SELECT TOP %14\$s %1\$s AS user_id, %2\$s AS user_name, %3\$s AS user_email, ".
                                       "DATEDIFF(s, '19700101', %4\$s) AS user_regdate, DATEDIFF(s, '19700101', %5\$s) AS user_lastvisit, ".
                                       "%6\$s AS user_active, COUNT(pid) AS pic_count, ROUND(SUM(total_filesize)/1024, 0) AS disk_usage, ".
                                       "group_name, group_quota FROM %7\$s AS u INNER JOIN %8\$s AS g ON u.%9\$s = g.group_id ".
                                       "LEFT JOIN %10\$s AS p ON p.owner_id = u.%1\$s %11\$s".
                                       "AND %1\$s NOT IN (SELECT TOP %13\$s user_id FROM %7\$s AS u ".
                                       "INNER JOIN %8\$s AS g ON u.%9\$s = g.group_id ".
                                       "LEFT JOIN %10\$s AS p ON p.owner_id = u.%1\$s ORDER BY %1\$s)".
                                       "GROUP BY user_id, user_name, user_email, user_regdate, user_lastvisit, user_active, group_name, ".
                                       "group_quota ORDER BY %12\$s ;",
    'get_username'                  => "SELECT %1\$s AS user_name FROM %2\$s WHERE %3\$s = '%4\$s'",
    'get_user_id'                   => "SELECT %1\$s AS user_id FROM %2\$s WHERE %3\$s = '%4\$s'",
    'get_user_data'                 => "SELECT MAX(group_quota) AS disk_max, MIN(group_quota) AS disk_min, " .
                                       "MAX(can_rate_pictures) AS can_rate_pictures, MAX(can_send_ecards) AS can_send_ecards, " .
                                       "MAX(upload_form_config) AS ufc_max, MIN(upload_form_config) AS ufc_min, " .
                                       "MAX(custom_user_upload) AS custom_user_upload, MAX(num_file_upload) AS num_file_upload, " .
                                       "MAX(num_URI_upload) AS num_URI_upload, " .
                                       "MAX(can_post_comments) AS can_post_comments, MAX(can_upload_pictures) AS can_upload_pictures, " .
                                       "MAX(can_create_albums) AS can_create_albums, " .
                                       "MAX(has_admin_access) AS has_admin_access, " .
                                       "MIN(pub_upl_need_approval) AS pub_upl_need_approval, MIN( priv_upl_need_approval) ".
                                       "AS priv_upl_need_approval FROM {$CONFIG['TABLE_USERGROUPS']} WHERE group_id IN ( %1\$s )",
    'get_user_data_group_name'      => "SELECT group_name FROM {$CONFIG['TABLE_USERGROUPS']} WHERE group_id= %1\$s",
    'get_user_data_all_usergroups'  => "SELECT * FROM {$CONFIG['TABLE_USERGROUPS']} WHERE group_id = %1\$s",
    'get_user_info'                 => "SELECT *, %1\$s AS user_name, %2\$s AS user_email, DATEDIFF(s, '19700101', %3\$s) AS user_regdate, ".
                                       "%4\$s AS user_location, %5\$s AS user_website FROM %6\$s WHERE %7\$s = '%8\$s'",
    'list_users_with_alb'           => "SELECT p.aid FROM {$CONFIG['TABLE_ALBUMS']} AS p INNER JOIN {$CONFIG['TABLE_PICTURES']} AS pics ".
                                       "ON pics.aid = p.aid WHERE (category>%1\$s %2\$s) GROUP BY category, p.aid;",
    'list_users_can_join_tables'    => "SELECT TOP %7\$s %1\$s AS user_id,%2\$s AS user_name,COUNT(DISTINCT a.aid) AS alb_count,".
                                       "COUNT(DISTINCT pid) AS pic_count,MAX(pid) AS thumb_pid, MAX(galleryicon) AS gallery_pid ".
                                       "FROM {$CONFIG['TABLE_ALBUMS']} AS a ".
                                       "INNER JOIN %3\$s AS u ON u.%1\$s = a.category - %4\$s ".
                                       "INNER JOIN {$CONFIG['TABLE_PICTURES']} AS p ON p.aid = a.aid ".
                                       "WHERE ((approved IS NULL OR approved='YES') AND category > %4\$s ) %5\$s ".
                                       "AND %1\$s NOT IN (SELECT TOP %6\$s %1\$s FROM {$CONFIG['TABLE_ALBUMS']} AS a ".
                                       "INNER JOIN %3\$s AS u ON u.%1\$s = a.category - %4\$s ".
                                       "INNER JOIN {$CONFIG['TABLE_PICTURES']} AS p ON p.aid = a.aid ".
                                       "WHERE ((approved IS NULL OR approved='YES') AND category > %4\$s ) %5\$s  ".
                                       "GROUP BY user_id, user_name, category ORDER BY category )".
                                       "GROUP BY user_id, user_name, category ORDER BY category ",
    'list_users_cannot_join_tables' => "SELECT TOP %4\$s category - 10000 AS user_id ".
                                       "FROM {$CONFIG['TABLE_ALBUMS']} AS a ".
                                       "INNER JOIN {$CONFIG['TABLE_PICTURES']} AS p ON p.aid = a.aid ".
                                       "WHERE ((approved IS NULL OR approved='YES') AND category > %1\$s) %2\$s ".
                                       "AND a.category NOT IN (SELECT category FROM {$CONFIG['TABLE_ALBUMS']} GROUP BY category)".
                                       "GROUP BY category",
    'list_users_mappings'           => "SELECT %1\$s AS user_id, %2\$s AS user_name ".
                                       "FROM %3\$s WHERE %1\$s IN (%4\$s)",
    'list_users_main_query'         => "SELECT TOP %4\$s owner_id AS user_id, COUNT(DISTINCT a.aid) AS alb_count, COUNT(DISTINCT pid) ".
                                       "AS pic_count, MAX(pid) AS thumb_pid, MAX(galleryicon) AS gallery_pid FROM {$CONFIG['TABLE_ALBUMS']} ".
                                       "AS a INNER JOIN {$CONFIG['TABLE_PICTURES']} AS p ON p.aid = a.aid ".
                                       "WHERE ((approved IS NULL OR approved='YES') AND category > %1\$s) %2\$s ".
                                       "AND a.category NOT IN (SELECT TOP %3\$s category FROM {$CONFIG['TABLE_ALBUMS']} GROUP BY category)".
                                       "GROUP BY owner_id, category ORDER BY category",
    'sync_use_post_based_grp'       => "SELECT * FROM %1\$s WHERE %2\$s <> ''",
    'sync_not_use_post_based_grp'   => "SELECT group_id, group_name FROM {$CONFIG['TABLE_USERGROUPS']} WHERE 1=1",
    'sync_delete_usergroups'        => "DELETE FROM {$CONFIG['TABLE_USERGROUPS']} WHERE group_id = '%1\$s'",
    'sync_insert_usergroups'        => "INSERT INTO {$CONFIG['TABLE_USERGROUPS']} (group_id, group_name, has_admin_access) ".
                                       "VALUES ('%1\$s', '%2\$s', '%3\$s')",
    'sync_update_usergroups'        => "UPDATE {$CONFIG['TABLE_USERGROUPS']} SET group_name = '%1\$s' ".
                                       "WHERE group_id = '%2\$s'",
    'sync_fix_admin_grp'            => "UPDATE {$CONFIG['TABLE_USERGROUPS']} SET has_admin_access = '1' WHERE group_id = '1'",
    'admin_alb_can_join_tbl'        => "SELECT aid, '(' + %1\$s + ') ' + a.title AS title FROM {$CONFIG['TABLE_ALBUMS']} ".
                                       "AS a INNER JOIN %2\$s AS u ON category = ( %3\$s + %4\$s) ORDER BY title",
    'admin_alb_cannot_join_tbl'     => "SELECT aid, ".
                                       "CASE ".
                                            "WHEN category > %1\$s ".
                                            "THEN '* ' + title ".
                                            "ELSE ' ' + title ".
                                       "END ".
                                       "AS title FROM {$CONFIG['TABLE_ALBUMS']} ORDER BY title",
    'batch_add_can_join_tbl'        => "SELECT aid, '(' + %1\$s + ') ' + a.title  AS title FROM {$CONFIG['TABLE_ALBUMS']} AS a ".
                                       "INNER JOIN %2\$s AS u ON category = (%3\$s + %4\$s) ".
                                       "AND %5\$s = %4\$s ORDER BY title",
    'batch_add_cannot_join_tbl'     => "SELECT aid, CASE WHEN category > %1\$s THEN '* ' + title ELSE ' ' + title END  AS title ".
                                       "FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = '(%1\$s + %2\$s)' ORDER BY title",
    'load_all_albums'               => "SELECT aid, title, category FROM {$CONFIG['TABLE_ALBUMS']} ORDER BY pos",
    'load_all_categories'           => "SELECT cid, rgt, name FROM {$CONFIG['TABLE_CATEGORIES']} ORDER BY lft",
    'user_galleries'                => "SELECT %1\$s AS user_id, %2\$s AS user_name ".
                                       "FROM %3\$s ORDER BY %2\$s",
    /*'user_alb_can_join_tbl'         => "SELECT aid, CASE WHEN %1\$s IS NOT NULL  THEN '(' + %1\$s + ') ' + a.title ".
                                       "ELSE ' - ' + a.title END  AS title  FROM {$CONFIG['TABLE_ALBUMS']} AS a ".
                                       "INNER JOIN %2\$s AS u  ON category = ( %3\$s + %4\$s ) ORDER BY a.title",
    'public_alb_can_join_tbl'       => "SELECT aid, title, name FROM {$CONFIG['TABLE_ALBUMS']} LEFT JOIN {$CONFIG['TABLE_CATEGORIES']} ".
                                       "ON cid = category WHERE category < %1\$s ORDER BY title",
    'public_alb_cannot_join_tbl'    => "SELECT aid, title, category FROM {$CONFIG['TABLE_ALBUMS']} WHERE category < %1\$s ORDER BY title",
    'get_cat_name'                  => "SELECT name, parent FROM " . $CONFIG['TABLE_CATEGORIES'] . " WHERE cid='%1\$s'",
    'user_alb_cannot_join_tbl'      => "SELECT aid, title, category FROM {$CONFIG['TABLE_ALBUMS']} WHERE category >= %1\$s ORDER BY aid",
    'user_alb_ids_and_names'        => "SELECT (%1\$s + %2\$s) AS id, '(' + %3\$s + ') '  AS name ".
                                        "FROM %4\$s ORDER BY name ASC",*/
    'get_login_data'                => "SELECT %1\$s AS user_id, %2\$s AS user_name FROM %3\$s ".
                                       "WHERE %2\$s = '%4\$s' AND  %5\$s = '%6\$s'"
);


/**********************************************************************************************************/
//    queries  from  bridge/ vbulletin30.inc.php
/**********************************************************************************************************/
$cpg_db_vbulletin30_inc = array(
    'session_extraction'    => "SELECT u.%1\$s, u.%2\$s, u.%3\$s+100 AS usergroupid FROM %4\$s AS u, %5\$s AS s  ".
                               "WHERE s.%1\$s=u.%1\$s AND s.sessionhash='%6\$s'",
    'get_groups'            => "SELECT g.%1\$s+100 AS group_id, u.* FROM %2\$s AS u, %3\$s AS g ".
                               "WHERE g.%4\$s = u.%1\$s AND u.%5\$s = '%6\$s'"
);


/**********************************************************************************************************/
//    queries  from  bridge/ xmb.inc.php
/**********************************************************************************************************/
$cpg_db_xmb_inc = array(
    'collect_groups'    => "SELECT * FROM %1\$s",
    'get_groups'        => "SELECT id FROM %1\$s, %2\$s WHERE %3\$s = %4\$s AND %5\$s='%6\$s'",
    'get_user'          => "SELECT TOP %13\$s %1\$s AS user_id, %2\$s AS user_name, %3\$s AS user_email, %4\$s AS user_regdate, ".
                           "lastvisit AS user_lastvisit, '' AS user_active, ".
                           "COUNT(pid) AS pic_count, ROUND(SUM(total_filesize)/1024, 0) AS disk_usage, group_name, group_quota ".
                           "FROM %5\$s AS u INNER JOIN %6\$s AS rank ON u.status = rank.title ".
                           "INNER JOIN %7\$s AS g ON g.group_id = rank.%8\$s ".
                           "LEFT JOIN %9\$s AS p ON p.owner_id = u.%1\$s %10\$s AND user_id NOT IN (SELECT TOP %12\$s user_id ".
                           "FROM %5\$s AS u INNER JOIN %6\$s AS rank ON u.status = rank.title ".
                           "INNER JOIN %7\$s AS g ON g.group_id = rank.%8\$s LEFT JOIN %9\$s AS p ON p.owner_id = u.%1\$s ".
                           "%10\$s GROUP BY user_id ORDER BY %11\$s ) GROUP BY user_id, user_name, user_email, user_regdate, ".
                           "user_lastvisit, group_name, group_quota ORDER BY %11\$s ;"
);


/**********************************************************************************************************/
//    queries  from  bridge/ xoops.inc.php
/**********************************************************************************************************/
$cpg_db_xoops_inc = array(
    'get_users' => "SELECT TOP %14\$s u.%1\$s AS user_id, %2\$s AS user_name, %3\$s AS user_email, %4\$s AS user_regdate,  ".
                   "%5\$s AS user_lastvisit, '' AS user_active, COUNT(pid) AS pic_count, ".
                   "ROUND(SUM(total_filesize)/1024, 0) AS disk_usage, group_name, group_quota ".
                   "FROM %6\$s AS u INNER JOIN %7\$s AS ug ON u.uid = ug.uid  ".
                   "INNER JOIN %8\$s AS g ON g.group_id = ug.%9\$s ".
                   "LEFT JOIN %10\$s AS p ON p.owner_id = u.%1\$s %11\$s AND u.user_id NOT IN ".
                   "(SELECT TOP %13\$s u.user_id FROM %6\$s AS u INNER JOIN %7\$s AS ug ON u.uid = ug.uid ".
                   "INNER JOIN %8\$s AS g ON  g.group_id = ug.%9\$s LEFT JOIN %10\$s AS p ".
                   "ON p.owner_id = u.%1\$s %11\$s GROUP BY user_id ORDER BY %12\$s )".
                   "GROUP BY user_id, user_name, user_email, user_regdate, user_lastvisit, group_name, group_quota ".
                   " ORDER BY %12\$s ;"
);



#########################################
###########            INCLUDE FILES            ##########
#########################################


/**********************************************************************************************************/
//    queries  from  include/ crop.inc.php
/**********************************************************************************************************/
$cpg_db_crop_inc = array(
    'get_pic_to_crop'   => "SELECT * FROM {$CONFIG['TABLE_PICTURES']} WHERE pid = '%1\$s'"
);


/**********************************************************************************************************/
//    queries  from  include/ exif_php.inc.php
/**********************************************************************************************************/
$cpg_db_exif_php_inc = array(
    'check_exif_data'   => "SELECT * FROM {$CONFIG['TABLE_EXIF']} WHERE filename = '%1\$s'",
    'add_exif_data'     => "INSERT INTO {$CONFIG['TABLE_EXIF']} VALUES ('%1\$s', '%2\$s')"
);


/**********************************************************************************************************/
//    queries  from  include/ functions.inc.php
/**********************************************************************************************************/
$cpg_db_functions_inc = array(
    'alb_set_data_USER_GAL_CAT'     => "SELECT aid FROM {$CONFIG['TABLE_ALBUMS']} AS a WHERE category>= %1\$s",
    'alb_set_data_not_USER_GAL_CAT' => "SELECT aid FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = %1\$s",
    'meta_alb_set_data'             => "SELECT cid FROM {$CONFIG['TABLE_CATEGORIES']} WHERE parent = '%1\$s'",
    'get_meta_album_set'            => "SELECT aid FROM {$CONFIG['TABLE_ALBUMS']}",
    'get_rgt_lft_depth'             => "SELECT TOP 1 rgt, lft, depth FROM {$CONFIG['TABLE_CATEGORIES']} WHERE cid = %1\$s ",
    'get_private_alb_set_pwrd'      => "SELECT aid, alb_password FROM ".$CONFIG['TABLE_ALBUMS']." WHERE aid IN (%1\$s)",
    'get_private_alb_set'           => "SELECT aid FROM {$CONFIG['TABLE_ALBUMS']} %1\$s AND visibility != '0' ".
                                       "AND visibility !='%2\$s' AND visibility NOT IN %3\$s %4\$s )",
    'count_get_pic_data'            => "SELECT COUNT(*) AS count FROM {$CONFIG['TABLE_PICTURES']} ".
                                       "WHERE ((aid='%1\$s' %2\$s ) %3\$s) %4\$s ",
    'get_pic_data'                  => "SELECT %9\$s %1\$s FROM {$CONFIG['TABLE_PICTURES']} WHERE ((aid='%2\$s' %3\$s ) %4\$s) ".
                                       "%5\$s AND pid NOT IN (SELECT %8\$s pid FROM {$CONFIG['TABLE_PICTURES']} ORDER BY %6\$s) ORDER BY %6\$s",
    'count_get_pic_data_lastcom'    => "SELECT COUNT(*) AS count FROM {$CONFIG['TABLE_COMMENTS']} AS c ".
                                       "INNER JOIN {$CONFIG['TABLE_PICTURES']} AS r ON r.pid = c.pid ".
                                       "INNER JOIN {$CONFIG['TABLE_ALBUMS']} AS a ON a.aid = r.aid %1\$s  ".
                                       "AND r.approved = 'YES' AND c.approval = 'YES'",
    'get_pic_data_lastcom'          => "SELECT %5\$s %1\$s FROM {$CONFIG['TABLE_COMMENTS']} AS c ".
                                       "INNER JOIN {$CONFIG['TABLE_PICTURES']} AS r ON r.pid = c.pid ".
                                       "INNER JOIN {$CONFIG['TABLE_ALBUMS']} AS a ON a.aid = r.aid %2\$s ".
                                       "AND r.approved = 'YES' AND c.approval = 'YES' AND r.pid NOT IN ".
                                       "(SELECT %4\$s r.pid FROM {$CONFIG['TABLE_COMMENTS']} AS c ".
                                       "INNER JOIN {$CONFIG['TABLE_PICTURES']} AS r ON r.pid = c.pid ".
                                       "INNER JOIN {$CONFIG['TABLE_ALBUMS']} AS a ON a.aid = r.aid %2\$s ".
                                       " ORDER BY msg_id DESC) ORDER BY msg_id DESC ", 
    'count_get_pic_data_lastcomby'  => "SELECT COUNT(*) AS count FROM {$CONFIG['TABLE_COMMENTS']} AS c ".
                                       "INNER JOIN {$CONFIG['TABLE_PICTURES']} AS r ON r.pid = c.pid ".
                                       "INNER JOIN {$CONFIG['TABLE_ALBUMS']} AS a ON a.aid = r.aid %1\$s AND author_id = '%2\$s'".
                                       "AND r.approved = 'YES' AND c.approval = 'YES' ",
    'get_pic_data_lastcomby'        => "SELECT  %6\$s %1\$s FROM {$CONFIG['TABLE_COMMENTS']} AS c ". 
                                       "INNER JOIN {$CONFIG['TABLE_PICTURES']} AS r ON r.pid = c.pid ".
                                       "INNER JOIN {$CONFIG['TABLE_ALBUMS']} AS a ON a.aid = r.aid %2\$s ".
                                       "AND author_id = '%3\$s' AND r.approved = 'YES' AND c.approval = 'YES' AND r.pid NOT IN ".
                                       "(SELECT %5\$s r.pid FROM {$CONFIG['TABLE_COMMENTS']} AS c ".
                                       "INNER JOIN {$CONFIG['TABLE_PICTURES']} AS r ON r.pid = c.pid ".
                                       "INNER JOIN {$CONFIG['TABLE_ALBUMS']} AS a ON a.aid = r.aid %2\$s ".
                                       "AND author_id = '%3\$s' AND r.approved = 'YES' AND c.approval = 'YES'".
                                       "ORDER BY msg_id DESC) ORDER BY msg_id DESC ",
    'count_get_pic_data_lastup'     => "SELECT COUNT(*) AS count FROM {$CONFIG['TABLE_PICTURES']} AS p ".
                                       "INNER JOIN {$CONFIG['TABLE_ALBUMS']} AS r ON r.aid = p.aid %1\$s AND approved = 'YES'",
    'get_pic_data_lastup'           => "SELECT %5\$s %1\$s FROM {$CONFIG['TABLE_PICTURES']} AS p ".
                                       "INNER JOIN {$CONFIG['TABLE_ALBUMS']} AS r ON r.aid = p.aid %2\$s AND approved = 'YES' ".
                                       "AND pid NOT IN (SELECT %4\$s pid FROM {$CONFIG['TABLE_PICTURES']} AS p ".
                                       "INNER JOIN {$CONFIG['TABLE_ALBUMS']} AS r ON r.aid = p.aid %2\$s AND approved = 'YES' ".
                                       "ORDER BY p.pid DESC) ORDER BY p.pid DESC ",
    'count_get_pic_data_lastupby'   => "SELECT COUNT(*) AS count FROM {$CONFIG['TABLE_PICTURES']} AS p ".
                                       "INNER JOIN {$CONFIG['TABLE_ALBUMS']} AS r ON r.aid = p.aid %1\$s ".
                                       "AND p.owner_id = '%2\$s' AND approved = 'YES'",
    'get_pic_data_lastupby'         => "SELECT %6\$s  %1\$s FROM {$CONFIG['TABLE_PICTURES']} AS p ".
                                       "INNER JOIN {$CONFIG['TABLE_ALBUMS']} AS r ON r.aid = p.aid ".
                                       "%2\$s AND p.owner_id = '%3\$s' AND approved = 'YES' AND pid NOT IN (SELECT %5\$s pid ".
                                       "FROM {$CONFIG['TABLE_PICTURES']} AS p INNER JOIN {$CONFIG['TABLE_ALBUMS']} AS r ON r.aid = p.aid ".
                                       "%2\$s AND p.owner_id = '%3\$s' AND approved = 'YES' ORDER BY pid DESC) ORDER BY pid DESC ",
    'count_get_pic_data_topn'       => "SELECT COUNT(*) AS count FROM {$CONFIG['TABLE_PICTURES']} AS p ".
                                       "INNER JOIN {$CONFIG['TABLE_ALBUMS']} AS r ON r.aid = p.aid %1\$s AND approved = 'YES' AND hits > 0",
    'get_pic_data_topn'             => "SELECT  %5\$s  %1\$s FROM {$CONFIG['TABLE_PICTURES']} AS p ".
                                       "INNER JOIN {$CONFIG['TABLE_ALBUMS']} AS r ON r.aid = p.aid %2\$s ".
                                       "AND approved = 'YES' AND hits > 0 AND pid NOT IN (SELECT %4\$s pid FROM {$CONFIG['TABLE_PICTURES']} AS p ".
                                       "INNER JOIN {$CONFIG['TABLE_ALBUMS']} AS r ON r.aid = p.aid %2\$s AND approved = 'YES' AND hits > 0 ".
                                       "ORDER BY hits DESC, pid ) ORDER BY hits DESC, pid ",
    'count_get_pic_data_toprated'   => "SELECT COUNT(*) AS count FROM {$CONFIG['TABLE_PICTURES']} AS p ".
                                       "INNER JOIN {$CONFIG['TABLE_ALBUMS']} AS r ON r.aid = p.aid %1\$s ".
                                       "AND approved = 'YES' AND p.votes > '%2\$s'",
    'get_pic_data_toprated'         => "SELECT  %6\$s  %1\$s FROM {$CONFIG['TABLE_PICTURES']} AS p ".
                                       "INNER JOIN {$CONFIG['TABLE_ALBUMS']} AS r ON r.aid = p.aid %2\$s AND approved = 'YES' ".
                                       "AND p.votes > '%3\$s' AND pid NOT IN (SELECT %5\$s pid FROM {$CONFIG['TABLE_PICTURES']} AS p ".
                                       "INNER JOIN {$CONFIG['TABLE_ALBUMS']} AS r ON r.aid = p.aid %2\$s AND approved = 'YES' ".
                                       "ORDER BY pic_rating DESC, p.votes DESC, pid DESC) ORDER BY pic_rating DESC, votes DESC, pid DESC ",
    'count_get_pic_data_lasthits'   => "SELECT COUNT(*) AS count FROM {$CONFIG['TABLE_PICTURES']} AS p ".
                                       "INNER JOIN {$CONFIG['TABLE_ALBUMS']} AS r ON r.aid = p.aid %1\$s AND hits > 0 ",
    'get_pic_data_lasthits'         => "SELECT %5\$s %1\$s FROM {$CONFIG['TABLE_PICTURES']} AS p ".
                                       "INNER JOIN {$CONFIG['TABLE_ALBUMS']} AS r ON r.aid = p.aid %2\$s AND approved = 'YES' ".
                                       "AND hits > 0 AND pid NOT IN (SELECT %4\$s pid FROM {$CONFIG['TABLE_PICTURES']} AS p ".
                                       "INNER JOIN {$CONFIG['TABLE_ALBUMS']} AS r ON r.aid = p.aid %2\$s AND approved = 'YES' ".
                                       "AND hits > 0 ORDER BY mtime DESC) ORDER BY mtime DESC ",
    'count_get_pic_data_random'     => "SELECT COUNT(*) AS count FROM {$CONFIG['TABLE_PICTURES']} AS p ".
                                       "INNER JOIN {$CONFIG['TABLE_ALBUMS']} AS r ON r.aid = p.aid %1\$s AND approved = 'YES'",
    'get_pic_data_random'           => "SELECT %5\$s %1\$s FROM {$CONFIG['TABLE_PICTURES']} AS p ".
                                       "INNER JOIN {$CONFIG['TABLE_ALBUMS']} AS r ON r.aid = p.aid %2\$s AND approved = 'YES' ".
                                       "AND pid NOT IN (SELECT %4\$s pid FROM {$CONFIG['TABLE_PICTURES']} AS p ".
                                       "INNER JOIN {$CONFIG['TABLE_ALBUMS']} AS r ON r.aid = p.aid %2\$s AND approved = 'YES' ".
                                       "ORDER BY NEWID()) ORDER BY NEWID()",
    'count_get_pic_data_lastalb'    => "SELECT COUNT(*) AS count FROM {$CONFIG['TABLE_PICTURES']} AS p ".
                                       "INNER JOIN {$CONFIG['TABLE_ALBUMS']} AS r ON r.aid = p.aid  %1\$s ".
                                       "AND approved = 'YES' GROUP BY p.aid",
    'get_pic_data_lastalb'          => "SELECT %4\$s a.title AS title,a.aid AS aid, MAX(p.ctime) AS max_ctime".
                                       "FROM {$CONFIG['TABLE_PICTURES']} AS p INNER JOIN {$CONFIG['TABLE_ALBUMS']} AS r ".
                                       "ON r.aid = p.aid  %1\$s  AND approved = 'YES' AND p.ctime NOT IN (SELECT %3\$s MAX(p.ctime) ".
                                       "AS max_ctime FROM {$CONFIG['TABLE_PICTURES']} AS p INNER JOIN {$CONFIG['TABLE_ALBUMS']} AS r ".
                                       "ON r.aid = p.aid  %1\$s  AND approved = 'YES' GROUP BY p.aid ORDER BY  max_ctime DESC) ".
                                       "GROUP BY p.aid, a.aid, a.title ORDER BY  max_ctime DESC ",
    'count_get_pic_data_favpics'    => "SELECT COUNT(*) AS count FROM {$CONFIG['TABLE_PICTURES']} AS p ".
                                       "INNER JOIN {$CONFIG['TABLE_ALBUMS']} AS r ON r.aid = p.aid %1\$s ".
                                       "AND approved = 'YES' AND pid IN (%2\$s) ",
    'get_pic_data_favpics'          => "SELECT %6\$s  %1\$s FROM {$CONFIG['TABLE_PICTURES']} AS p ".
                                       "INNER JOIN {$CONFIG['TABLE_ALBUMS']} AS r ON r.aid = p.aid %2\$s AND approved = 'YES' AND pid IN (%3\$s) ".
                                       "AND pid NOT IN (SELECT %5\$s pid FROM {$CONFIG['TABLE_PICTURES']} AS p ".
                                       "INNER JOIN {$CONFIG['TABLE_ALBUMS']} AS r ON r.aid = p.aid %2\$s AND approved = 'YES' AND pid IN (%3\$s)) ",
    /*'count_get_pic_data_datebrowse'    => "DECLARE @UNIX_TIMESTAMP int ".
                                       "SELECT @UNIX_TIMESTAMP = ctime FROM {$CONFIG['TABLE_PICTURES']} ".
                                       "SELECT COUNT(pid) AS count FROM {$CONFIG['TABLE_PICTURES']} WHERE approved = 'YES' ".
                                       "AND CONVERT(VARCHAR(10), DATEADD(s, @UNIX_TIMESTAMP, '01/01/1970'), 105) = '%1\$s' %2\$s",*/
    'count_get_pic_data_datebrowse' => "DECLARE @UNIX_TIMESTAMP int ".
                                       "SELECT @UNIX_TIMESTAMP = ctime FROM {$CONFIG['TABLE_PICTURES']} ".
                                       "SELECT COUNT(*) AS count FROM {$CONFIG['TABLE_PICTURES']} AS p ".
                                       "INNER JOIN {$CONFIG['TABLE_ALBUMS']} AS r ON r.aid = p.aid %1\$s AND approved = 'YES' ".
                                       "AND CONVERT(VARCHAR(10), DATEADD(s, @UNIX_TIMESTAMP, '01/01/1970'), 105) = '%2\$s'",
    /*'get_pic_data_datebrowse'        => "DECLARE @UNIX_TIMESTAMP int ".
                                       "SELECT @UNIX_TIMESTAMP = ctime FROM {$CONFIG['TABLE_PICTURES']} ".
                                       "SELECT %6\$s  %1\$s FROM {$CONFIG['TABLE_PICTURES']} WHERE approved = 'YES' ".
                                       "AND CONVERT(VARCHAR(10), DATEADD(s, @UNIX_TIMESTAMP, '01/01/1970'), 105) = '%2\$s'  %3\$s ".
                                       "AND pid NOT IN (SELECT %5\$s pid FROM {$CONFIG['TABLE_PICTURES']} WHERE approved = 'YES' ".
                                       "AND CONVERT(VARCHAR(10), DATEADD(s, @UNIX_TIMESTAMP, '01/01/1970'), 105) = '%2\$s'  %3\$s) ",*/
    'get_pic_data_datebrowse'       => "DECLARE @UNIX_TIMESTAMP int ".
                                       "SELECT @UNIX_TIMESTAMP = ctime FROM {$CONFIG['TABLE_PICTURES']} ".
                                       "SELECT %6\$s  %1\$s FROM {$CONFIG['TABLE_PICTURES']} AS p ".
                                       "INNER JOIN {$CONFIG['TABLE_ALBUMS']} AS r ON r.aid = p.aid %2\$s AND approved = 'YES' ".
                                       "AND CONVERT(VARCHAR(10), DATEADD(s, @UNIX_TIMESTAMP, '01/01/1970'), 105) = '%3\$s' ".
                                       "AND pid NOT IN (SELECT %5\$s pid FROM {$CONFIG['TABLE_PICTURES']} AS p ".
                                       "INNER JOIN {$CONFIG['TABLE_ALBUMS']} AS r ON r.aid = p.aid %2\$s AND approved = 'YES' ".
                                       "AND CONVERT(VARCHAR(10), DATEADD(s, @UNIX_TIMESTAMP, '01/01/1970'), 105) = '%3\$s') ",
    'get_album_name'                => "SELECT title,keyword FROM {$CONFIG['TABLE_ALBUMS']} WHERE aid='%1\$s'",
    'get_pending_approvals'         => "SELECT COUNT(*) AS count FROM {$CONFIG['TABLE_PICTURES']} WHERE approved = 'NO'",
    'count_pic_comments'            => "SELECT COUNT(msg_id) AS count FROM {$CONFIG['TABLE_COMMENTS']} WHERE pid=%1\$s AND msg_id!=%2\$s",
    'add_hit_update_pics'           => "UPDATE {$CONFIG['TABLE_PICTURES']} SET hits=hits+1, lasthit_ip='%1\$s',".
                                       " mtime=CURRENT_TIMESTAMP WHERE pid='%2\$s'",
    'add_hit_record'                => "INSERT INTO {$CONFIG['TABLE_HIT_STATS']}  ".
                                       "(pid, search_phrase, Ip, sdate, referer, browser, os, uid)".
                                       "VALUES(%1\$s, '%2\$s', '%3\$s', '%4\$s', '%5\$s', '%6\$s', '%7\$s', '%8\$s')",
    'add_album_hit'                 => "UPDATE {$CONFIG['TABLE_ALBUMS']} SET alb_hits=alb_hits+1 WHERE aid='%1\$s'",
    'get_user_gal_cat_name'         => "SELECT name FROM {$CONFIG['TABLE_CATEGORIES']} WHERE cid = %1\$s",
    'get_current_cat_name'          => "SELECT p.cid, p.name FROM {$CONFIG['TABLE_CATEGORIES']} AS c, {$CONFIG['TABLE_CATEGORIES']} AS p ".
                                       "WHERE c.lft BETWEEN p.lft AND p.rgt    AND c.cid = %1\$s ORDER BY p.lft ",
    //'breadcrumb_cat_not_zero'        => "SELECT name, parent FROM {$CONFIG['TABLE_CATEGORIES']} WHERE cid = '%1\$s'",
    //'breadcrumb_parent_not_zero'    => "SELECT cid, name, parent FROM {$CONFIG['TABLE_CATEGORIES']} WHERE cid = '%1\$s'",
    'get_dbversion'                 => "SELECT CONVERT(VARCHAR(30), SERVERPROPERTY('productversion')) AS version",
    'chk_langtbl_exists'            => "SELECT table_name FROM INFORMATION_SCHEMA.TABLES WHERE table_name LIKE '{$CONFIG['TABLE_LANGUAGE']}';",
    'get_language'                  => "SELECT * FROM {$CONFIG['TABLE_LANGUAGE']}",
    'get_bridge_db_values'          => "SELECT * FROM {$CONFIG['TABLE_BRIDGE']}",
    'reset_detail_hits'             => "DELETE FROM {$CONFIG['TABLE_HIT_STATS']} WHERE %1\$s",        
    'reset_detail_votes'            => "DELETE FROM {$CONFIG['TABLE_VOTE_STATS']} WHERE %1\$s",    
    'store_temp_message'            => "INSERT INTO {$CONFIG['TABLE_TEMP_MESSAGES']} (message_id, user_id, time, message) ".
                                       "VALUES ('%1\$s', '%2\$s', '%3\$s', '%4\$s')",
    'read_temp_message'             => "SELECT TOP 1 message AS message FROM {$CONFIG['TABLE_TEMP_MESSAGES']} ".
                                       "WHERE message_id = '%1\$s'",
    'delete_temp_message'           => "DELETE FROM {$CONFIG['TABLE_TEMP_MESSAGES']} WHERE message_id = '%1\$s'",
    'clean_temp_message'            => "DELETE FROM {$CONFIG['TABLE_TEMP_MESSAGES']} WHERE time < '%1\$s'",
    'check_alb_available'           => "SELECT TOP 1 aid FROM {$CONFIG['TABLE_ALBUMS']} WHERE owner = %1\$s",
    'get_available_alb'             => "SELECT DISTINCT category FROM {$CONFIG['TABLE_ALBUMS']} WHERE owner = '%1\$s' ".
                                       "AND aid='%2\$s'",
    'check_edit_allowed'            => "SELECT DISTINCT aid FROM {$CONFIG['TABLE_ALBUMS']} AS alb ".
                                       "INNER JOIN {$CONFIG['TABLE_CATMAP']} AS catm ON alb.category=catm.cid ".
                                       "WHERE alb.owner = '%1\$s' AND alb.aid='%2\$s' AND catm.group_id='%3\$s'",
    'get_cat_lft_zero'              => "SELECT COUNT(*) AS count FROM {$CONFIG['TABLE_PREFIX']}categories WHERE lft = 0",
    'get_child'                     => "SELECT cid FROM {$CONFIG['TABLE_PREFIX']}categories WHERE parent = %1\$s ORDER BY %2\$s, cid",
    'update_cat'                    => "UPDATE {$CONFIG['TABLE_PREFIX']}categories SET lft = %1\$s, rgt = %2\$s, depth = %3\$s, ".
                                       "pos = %4\$s WHERE cid = %5\$s ",
    'update_config_data'            => "UPDATE {$CONFIG['TABLE_CONFIG']} SET value = '%1\$s' WHERE name = '%2\$s'",
);


/******************************************************/
//queries from include/init.inc.php
/***********************************************************/
$cpg_db_init_inc = array(
    'get_db_configuration'  => "SELECT * FROM {$CONFIG['TABLE_CONFIG']}",
    'select_distinct_aid'   => "SELECT DISTINCT(aid) FROM {$CONFIG['TABLE_ALBUMS']} WHERE moderator_group IN %1\$s",
    'get_user_favpics'      => "SELECT user_favpics FROM {$CONFIG['TABLE_FAVPICS']} WHERE user_id = %1\$s",
    'delete_expired_ban'    => "DELETE FROM {$CONFIG['TABLE_BANNED']} WHERE expiry < '%1\$s'",
    'get_all_banned'        => "SELECT * FROM {$CONFIG['TABLE_BANNED']} WHERE (ip_addr LIKE '%1\$s' OR ip_addr LIKE '%2\$s' OR user_id='%3\$s') AND brute_force=0"
);


/**********************************************************************************************************/
//    queries  from  include/ keyword.inc.php
/**********************************************************************************************************/
$cpg_db_keyword_inc = array(
    'get_pic_keywords'  => "SELECT keywords FROM {$CONFIG['TABLE_PICTURES']} WHERE keywords <> '' %1\$s"
);


/**********************************************************************************************************/
//    queries  from  include/ mailer.inc.php
/**********************************************************************************************************/
$cpg_db_mailer_inc = array(
    'get_admin_email'   => "SELECT user_email FROM {$CONFIG['TABLE_USERS']} WHERE user_group = 1"
);


/**********************************************************************************************************/
//    queries  from  include/ media.functions.inc.php
/**********************************************************************************************************/
$cpg_db_media_functions_inc = array(
    'get_filetypes' => 'SELECT extension, mime, content, player FROM '.$CONFIG['TABLE_FILETYPES']
);


/**********************************************************************************************************/
//    queries  from  include/ picmgmt.inc.php
/**********************************************************************************************************/
$cpg_db_picmgmt_inc = array(
    'test_disk_quota_exceeded'  => "SELECT SUM(total_filesize) AS sum_filesize FROM {$CONFIG['TABLE_PICTURES']}, {$CONFIG['TABLE_ALBUMS']} ".
                                   "WHERE  {$CONFIG['TABLE_PICTURES']}.aid = {$CONFIG['TABLE_ALBUMS']}.aid AND category = '%1\$s'",
    'insert_current_pic_data'   => "INSERT INTO {$CONFIG['TABLE_PICTURES']} (aid, filepath, filename, filesize, total_filesize, ".
                                   "pwidth, pheight, ctime, owner_id, owner_name, title, caption, keywords, approved, ".
                                   "user1, user2, user3, user4, pic_raw_ip, pic_hdr_ip, position) ".
                                   "VALUES ('%1\$s', '%2\$s', '%3\$s', '%4\$s', '%5\$s', '%6\$s', '%7\$s', '%8\$s', ".
                                   "'%9\$s', '%10\$s','%11\$s', '%12\$s', '%13\$s', '%14\$s', '%15\$s', '%16\$s', ".
                                   "'%17\$s', '%18\$s', '%19\$s', '%20\$s', '%21\$s'); SELECT SCOPE_IDENTITY() AS pid"
);


/**********************************************************************************************************/
//    queries  from  include/ plugin_api.inc.php
/**********************************************************************************************************/
$cpg_db_plugin_api_inc = array(
    'load_plugins'          => "SELECT * FROM ".$CONFIG['TABLE_PLUGINS']." ORDER BY priority ASC;",
    'get_installed_plugin'  => "SELECT plugin_id FROM ".$CONFIG['TABLE_PLUGINS']." WHERE path='%1\$s';",
    'get_plugin_priority'   => "SELECT TOP 1 priority FROM ".$CONFIG['TABLE_PLUGINS']." ORDER BY priority DESC;",
    'install_plugin'        => "INSERT INTO ".$CONFIG['TABLE_PLUGINS']." (name, path,priority)  ".
                               "VALUES ('%1\$s','%2\$s',%3\$s);",
    'plugin_delete'         => "DELETE FROM ".$CONFIG['TABLE_PLUGINS']." WHERE plugin_id=%1\$s;",
    'plugin_update'         => "UPDATE ".$CONFIG['TABLE_PLUGINS']." SET priority=priority-1 WHERE priority> %1\$s;"
);


/**********************************************************************************************************/
//    queries  from  include/ search.inc.php    
/**********************************************************************************************************/
$cpg_db_search_inc = array(
    'alb_title_album_query'     => "SELECT * FROM {$CONFIG['TABLE_ALBUMS']} WHERE (title %1\$s)",
    'alb_title_thumb_query'     => "SELECT filename, url_prefix, pwidth, pheight FROM {$CONFIG['TABLE_PICTURES']} ". 
                                   "WHERE (aid = '%1\$s') ORDER BY pid DESC",
    'cat_title_category_query'  => "SELECT * FROM {$CONFIG['TABLE_CATEGORIES']} WHERE (name %1\$s)",
    'cat_title_album_q'         => "SELECT TOP 1 * FROM {$CONFIG['TABLE_ALBUMS']} WHERE (category = '%1\$s') ORDER BY aid DESC",
    'cat_title_thumb_query'     => "SELECT filename, url_prefix, pwidth, pheight FROM {$CONFIG['TABLE_PICTURES']} ".
                                   "WHERE (aid = '%1\$s') ORDER BY pid DESC",
    'temp_search_string'        => "SELECT COUNT(*) AS count FROM {$CONFIG['TABLE_PICTURES']} AS p WHERE %1\$s",
    'final_search_string'       => "SELECT %5\$s * FROM {$CONFIG['TABLE_PICTURES']} AS p WHERE %1\$s ".
                                   "AND pid NOT IN (SELECT %4\$s pid FROM {$CONFIG['TABLE_PICTURES']} WHERE %1\$s ORDER BY %2\$s)".
                                   "ORDER BY %2\$s "
);


/**********************************************************************************************************/
//    queries  from  include/ stats.inc.php
/**********************************************************************************************************/
$cpg_db_stats_inc = array(
    'individual_stats_by_os'        => "SELECT COUNT(*) AS count FROM %1\$s WHERE os = '%2\$s' %3\$s",
    'individual_stats_by_browser'   => "SELECT COUNT(*) AS count FROM %1\$s WHERE browser = '%2\$s' %3\$s" 
);


/**********************************************************************************************************/
//    queries  from  include/ themes.inc.php
/**********************************************************************************************************/
$cpg_db_themes_inc = array(
    'check_upload_permission'   => "SELECT aid, title FROM {$CONFIG['TABLE_ALBUMS']} WHERE category='%1\$s'   ORDER BY title",    //AND aid = '%2\$s'
    'upload_not_allowed'        => "SELECT aid, title FROM {$CONFIG['TABLE_ALBUMS']} WHERE category < %1\$s AND uploads='YES' ".
                                   "AND (visibility = '0' OR visibility IN %2\$s) ORDER BY title",    // AND aid = '%3\$s'
    'html_rating_box'           => "SELECT * FROM {$CONFIG['TABLE_VOTES']} WHERE pic_id=%1\$s AND user_md5_id='%2\$s'",
    'html_comments'             => "SELECT msg_id, msg_author, msg_body, DATEDIFF(s, '19700101', msg_date) AS msg_date, author_id, ".
                                   "author_md5_id, msg_raw_ip, msg_hdr_ip, pid, approval FROM {$CONFIG['TABLE_COMMENTS']} ".
                                   "WHERE pid='%1\$s' ORDER BY msg_id %2\$s",
    'display_fullsize_pic'      => "SELECT * FROM {$CONFIG['TABLE_PICTURES']} AS p WHERE pid='%1\$s' %2\$s"

);


######################################################
#################               PLUGIN FILES            #################
######################################################


/**********************************************************************************************************/
//    queries  from  plugins/ onlinstats/codebase.php
/**********************************************************************************************************/
if (defined('CORE_PLUGIN')) $cpg_db_onlinestats = array(
    'login_delete_online'           => "DELETE FROM {$CONFIG['TABLE_PREFIX']}mod_online WHERE user_id = 0 AND user_ip = '%1\$s'",
    'logout_delete_online'          => "DELETE FROM {$CONFIG['TABLE_PREFIX']}mod_online WHERE user_id = %1\$s",
    'lastact_delete_online'         => "DELETE FROM {$CONFIG['TABLE_PREFIX']}mod_online ".
                                       "WHERE last_action < DATEADD(n, -%1\$s, GETDATE()) ",
    'online_delete_values'          => "DELETE FROM {$CONFIG['TABLE_PREFIX']}mod_online WHERE user_id = '%1\$s' AND user_ip = '%2\$s'",
    'online_insert_values'          => "INSERT INTO {$CONFIG['TABLE_PREFIX']}mod_online (user_id, user_name, user_ip, last_action) ".
                                       "VALUES ('%1\$s', '%2\$s', '%3\$s', GETDATE())",
    'get_online_user_ip'            => "SELECT user_ip AS user_ip FROM {$CONFIG['TABLE_PREFIX']}mod_online WHERE user_ip LIKE '%1\$s'",
    'lastact_update_online'         => "UPDATE {$CONFIG['TABLE_PREFIX']}mod_online SET last_action = GETDATE() WHERE user_ip = '%1\$s' ",
    //'online_insert_values'            => "INSERT INTO {$CONFIG['TABLE_ONLINE']} (user_id, user_name, user_ip, last_action) ".
        //                               "VALUES ('%1\$s', '%2\$s', '%3\$s', GETDATE())",
    'count_num_online'              => "SELECT COUNT(*) AS count FROM {$CONFIG['TABLE_PREFIX']}mod_online",
    'count_num_reg_online'          => "SELECT COUNT(*) AS count FROM {$CONFIG['TABLE_PREFIX']}mod_online WHERE user_id <> 0",
    'get_user'                      => "SELECT TOP 1 %1\$s AS user_id, %2\$s AS user_name FROM %3\$s ORDER BY user_id DESC ",
    'online_get_user'               => "SELECT user_id, user_name FROM {$CONFIG['TABLE_PREFIX']}mod_online WHERE user_id <> 0",
    'mainpage_record_online_users'  => "UPDATE {$CONFIG['TABLE_CONFIG']} SET value = '%1\$s' WHERE name = 'record_online_users'",
    'mainpage_record_online_date'   => "UPDATE {$CONFIG['TABLE_CONFIG']} SET value = DATEDIFF(s, '19700101', GETDATE()) ".
                                       "WHERE name = 'record_online_date'",
    'get_mod_updates_duration'      => "SELECT * FROM {$CONFIG['TABLE_CONFIG']} WHERE name ='mod_updates_duration'",
    'add_mod_updates_duration'      => "INSERT INTO {$CONFIG['TABLE_CONFIG']} (name, value) VALUES ('mod_updates_duration', '%1\$s')",
    'set_main_page_layout'          => "UPDATE {$CONFIG['TABLE_CONFIG']} SET value = '%1\$s' WHERE name = 'main_page_layout'",
    'drop_online'                   => "IF EXISTS(SELECT * FROM dbo.sysobjects WHERE id = object_id(N'{$CONFIG['TABLE_PREFIX']}mod_online') AND TYPE = 'U') ".
                                       "BEGIN DROP TABLE {$CONFIG['TABLE_PREFIX']}mod_online END;",
    'del_mod_updates_duration'      => "DELETE FROM {$CONFIG['TABLE_CONFIG']} WHERE name = 'mod_updates_duration'",
    'del_record_online_users'       => "DELETE FROM {$CONFIG['TABLE_CONFIG']} WHERE name = 'record_online_users'",
    'del_record_online_data'        => "DELETE FROM {$CONFIG['TABLE_CONFIG']} WHERE name = 'record_online_date'",
    'reset_main_page_layout'        => "UPDATE {$CONFIG['TABLE_CONFIG']} SET value = '%1\$s' WHERE name = 'main_page_layout'"
);


/**********************************************************************************************************/
//    queries  from  plugins/ usergal_alphatabs/codebase.php
/**********************************************************************************************************/
if (defined('CORE_PLUGIN')) $cpg_db_usergal_alphatabs = array(
    'list_users_can_join_tables'    => "SELECT TOP %7\$s %1\$s AS user_id, {$f['username']} AS user_name, ".
                                        "COUNT(DISTINCT a.aid) AS alb_count, COUNT(DISTINCT pid) AS pic_count, ".
                                        "MAX(pid) AS thumb_pid, MAX(galleryicon) AS gallery_pid ".
                                        "FROM {$CONFIG['TABLE_ALBUMS']} AS a ".
                                        "INNER JOIN %2\$s AS u ON u.%1\$s = a.category - %3\$s ".
                                        "INNER JOIN {$CONFIG['TABLE_PICTURES']} AS p ON p.aid = a.aid ".
                                        "WHERE (((approved is null) OR approved='YES') AND category > %3\$s) %4\$s ".
                                        "%5\$s AND a.aid NOT IN (SELECT TOP %6\$s a.aid FROM {$CONFIG['TABLE_ALBUMS']} AS a ".
                                        "INNER JOIN %2\$s AS u ON u.%1\$s = a.category - %3\$s ".
                                        "INNER JOIN {$CONFIG['TABLE_PICTURES']} AS p ON p.aid = a.aid ".
                                        "WHERE (((approved is null) OR approved='YES') AND category > %3\$s) %4\$s ".
                                        "%5\$s GROUP BY category, a.aid  ORDER BY category) GROUP BY category ORDER BY category ",
    'user_have_alb_pics'            => "SELECT TOP %4\$s category - 10000 AS user_id  FROM {$CONFIG['TABLE_ALBUMS']} AS a ".
                                        "INNER JOIN {$CONFIG['TABLE_PICTURES']} AS p ON p.aid = a.aid ".
                                        "WHERE (((approved is null) OR approved='YES') ".
                                        "AND category > %1\$s) %2\$s  AND a.aid NOT IN (SELECT TOP %3\$s a.aid ".
                                        " FROM {$CONFIG['TABLE_ALBUMS']} AS a INNER JOIN %2\$s AS u ".
                                        "ON u.%1\$s = a.category - %3\$s  %4\$s  %5\$s GROUP BY category, a.aid) ".
                                        "GROUP BY category ",
    'get_user_data'                 => "SELECT %1\$s AS user_id, %2\$s AS user_name ".
                                        "FROM %3\$s WHERE %1\$s IN (%4\$s) %5\$s",
    'list_users_main_query'         => "SELECT owner_id AS user_id, COUNT(DISTINCT a.aid) AS alb_count,".
                                        "COUNT(DISTINCT pid) AS pic_count, MAX(pid) AS thumb_pid, ".
                                        "MAX(galleryicon) AS gallery_pid FROM {$CONFIG['TABLE_ALBUMS']} AS a ".
                                        "INNER JOIN {$CONFIG['TABLE_PICTURES']} AS p ON p.aid = a.aid ".
                                        "WHERE (((approved is null) OR approved='YES') AND category > %1\$s) %2\$s ".
                                        "GROUP BY category, owner_id  ORDER BY category "
);


/**********************************************************************************************************/
//    queries  from  plugins/ visiblehookpoints/codebase.php
/**********************************************************************************************************/
$cpg_db_visiblehookpoints = array(
    'add_visiblehookpoints' => "INSERT INTO {$CONFIG['TABLE_CONFIG']} VALUES ('plugin_visiblehookpoints_display', '%1\$s')",
    'set_visiblehookpoints' => "UPDATE {$CONFIG['TABLE_CONFIG']} SET value = '%1\$s' ".
                               "WHERE name = 'plugin_visiblehookpoints_display'",
    'del_visiblehookpoints' => "DELETE FROM {$CONFIG['TABLE_CONFIG']} WHERE name = 'plugin_visiblehookpoints_display'"
);


/**********************************************************************************************************/
//    queries  from  plugins/ visiblehookpoints/index.php
/**********************************************************************************************************/
$cpg_db_visiblhookpoints_index_php = array(
    'set_visualhookpoints'  => "UPDATE {$CONFIG['TABLE_CONFIG']} SET value = '%1\$s' ".
                               "WHERE name = 'plugin_visiblehookpoints_display'"
);


#################################################################
#########################         THEMES FILES          #######################
#################################################################


/**********************************************************************************************************/
//    queries  from  themes/ sample/theme.php
/**********************************************************************************************************/
$cpg_db_sample_theme_php = array(
    'user_admin_get_alb'        => "SELECT aid, title FROM {$CONFIG['TABLE_ALBUMS']} WHERE category='%1\$s'  ".
                                   "AND aid = '%2\$s' ORDER BY title",
    'alb_upload_not_allowed'    => "SELECT aid, title FROM {$CONFIG['TABLE_ALBUMS']} WHERE category < %1\$s AND uploads='YES' ".
                                   "AND (visibility = '0' OR visibility IN %2\$s) AND aid = '%3\$s' ORDER BY title",
    'get_pic_ratings'           => "SELECT * FROM {$CONFIG['TABLE_VOTES']} WHERE pic_id=%1\$s  ".
                                   "AND user_md5_id='%2\$s'",
    'get_comments'              => "SELECT msg_id, msg_author, msg_body, DATEDIFF(s, '19700101', msg_date) AS msg_date, ".
                                   "author_id, author_md5_id, msg_raw_ip, msg_hdr_ip, pid, approval  ".
                                   "FROM {$CONFIG['TABLE_COMMENTS']} WHERE pid='%1\$s' ORDER BY msg_id %2\$s",
    'display_fullsize_pic'      => "SELECT *  FROM {$CONFIG['TABLE_PICTURES']}  WHERE pid='%1\$s' %2\$s"
);


?>