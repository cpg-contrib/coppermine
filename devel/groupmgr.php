<?php
// ------------------------------------------------------------------------- //
//  Coppermine Photo Gallery                                                 //
// ------------------------------------------------------------------------- //
//  Copyright (C) 2002,2003  Grégory DEMAR <gdemar@wanadoo.fr>               //
//  http://www.chezgreg.net/coppermine/                                      //
// ------------------------------------------------------------------------- //
//  Based on PHPhotoalbum by Henning Støverud <henning@stoverud.com>         //
//  http://www.stoverud.com/PHPhotoalbum/                                    //
// ------------------------------------------------------------------------- //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
// ------------------------------------------------------------------------- //

define('IN_COPPERMINE', true);
define('GROUPMGR_PHP', true);

require('include/init.inc.php');

if (!GALLERY_ADMIN_MODE) cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);

if(defined('UDB_INTEGRATION')) udb_synchronize_groups();

function display_group_list()
{
	global $CONFIG;
	global $lang_byte_units, $lang_yes, $lang_no;

	$result = db_query("SELECT * FROM {$CONFIG['TABLE_USERGROUPS']} WHERE 1 ORDER BY group_id");
	if (!mysql_num_rows($result)) {
	    db_query("INSERT INTO {$CONFIG['TABLE_USERGROUPS']} VALUES (1, 'Administrators', 0, 1, 1, 1, 1, 1, 1)");
	    db_query("INSERT INTO {$CONFIG['TABLE_USERGROUPS']} VALUES (2, 'Registered', 1024, 0, 1, 1, 1, 1, 1)");
	    db_query("INSERT INTO {$CONFIG['TABLE_USERGROUPS']} VALUES (3, 'Anonymous', 0, 0, 0, 0, 1, 0, 0)");
	    db_query("INSERT INTO {$CONFIG['TABLE_USERGROUPS']} VALUES (4, 'Banned', 0, 0, 0, 0, 0, 0, 0);");
		cpg_die(CRITICAL_ERROR, 'Group table was empty !<br /><br />Default groups created, please reload this page', __FILE__, __LINE__);
	}

	$field_list = array('can_rate_pictures', 'can_send_ecards', 'can_post_comments', 'can_upload_pictures', 'pub_upl_need_approval', 'can_create_albums', 'priv_upl_need_approval');

	while($group=mysql_fetch_array($result)){
		$group['group_name'] = $group['group_name'];

		if ($group['group_id'] > 4 && !defined('UDB_INTEGRATION')) {
			echo <<< EOT
	<tr>
		<td class="tableb" style="padding-left: 1px; padding-right: 1px">
			<input type="checkbox" name="delete_group[]" value="{$group['group_id']}" class="checkbox">
		</td>

EOT;
		} else {
			echo <<< EOT
	<tr>
		<td class="tableb">
			&nbsp;
		</td>

EOT;
		}
		echo <<< EOT
		<td class="tableb">
			<input type="hidden" name="group_id[]" value="{$group['group_id']}">
			<input type="text" name="group_name_{$group['group_id']}" value="{$group['group_name']}" class="textinput">
		</td>
		<td class="tableb" style="white-space: nowrap;">
			<input type="text" name="group_quota_{$group['group_id']}" value="{$group['group_quota']}" size="10" class="textinput"> {$lang_byte_units[1]}
		</td>

EOT;
		foreach ($field_list as $field_name){
			$value = $group[$field_name];
			$yes_selected = ($value == 1) ? 'selected' : '';
			$no_selected  = ($value == 0) ? 'selected' : '';
			echo <<< EOT
		<td class="tableb" align="center">
			<select name="{$field_name}_{$group['group_id']}" class="listbox">
				<option value="1" $yes_selected>$lang_yes</option>
				<option value="0" $no_selected>$lang_no</option>
			</select>
		</td>

EOT;
		}
		echo <<< EOT
	</tr>

EOT;
	} // while
	mysql_free_result($result);
}

function get_post_var($var)
{
	global $HTTP_POST_VARS, $lang_errors;

	if(!isset($HTTP_POST_VARS[$var])) cpg_die(CRITICAL_ERROR, $lang_errors['param_missing']." ($var)", __FILE__, __LINE__);
	return $HTTP_POST_VARS[$var];
}

function process_post_data()
{
	global $CONFIG, $HTTP_POST_VARS;

	$field_list = array('group_name', 'group_quota', 'can_rate_pictures', 'can_send_ecards', 'can_post_comments', 'can_upload_pictures', 'pub_upl_need_approval', 'can_create_albums', 'priv_upl_need_approval');

	$group_id_array = get_post_var('group_id');
	foreach ($group_id_array as $key => $group_id){
		$set_statment = '';
		foreach ($field_list as $field){
			if (!isset($HTTP_POST_VARS[$field.'_'.$group_id])) cpg_die(CRITICAL_ERROR, $lang_errors['param_missing']." ({$field}_{$group_id})", __FILE__, __LINE__);
			if ($field == 'group_name') {
			    $set_statment .= $field ."='".addslashes($HTTP_POST_VARS[$field.'_'.$group_id])."',";
			} else {
				$set_statment .= $field ."='".(int)$HTTP_POST_VARS[$field.'_'.$group_id]."',";
			}
		}
		$set_statment = substr($set_statment, 0, -1);
		db_query("UPDATE {$CONFIG['TABLE_USERGROUPS']} SET $set_statment WHERE group_id = '$group_id' LIMIT 1");
	}
}

if (isset($HTTP_POST_VARS) && count($HTTP_POST_VARS)) {
    if (isset($HTTP_POST_VARS['del_sel']) && isset($HTTP_POST_VARS['delete_group']) && is_array($HTTP_POST_VARS['delete_group'])) {
        foreach($HTTP_POST_VARS['delete_group'] as $group_id){
			db_query("DELETE FROM {$CONFIG['TABLE_USERGROUPS']} WHERE group_id = '".(int)$group_id."' LIMIT 1");
			db_query("UPDATE {$CONFIG['TABLE_USERS']} SET user_group = '2' WHERE user_group = '".(int)$group_id."'");
		}
    } elseif (isset($HTTP_POST_VARS['new_group'])) {
		db_query("INSERT INTO {$CONFIG['TABLE_USERGROUPS']} (group_name) VALUES ('')");
	} elseif (isset($HTTP_POST_VARS['apply_modifs'])) {
		process_post_data();
	}
}

pageheader($lang_groupmgr_php['title']);
echo <<<EOT

<script language="javascript">
function confirmDel()
{
    return confirm("{$lang_groupmgr_php['confirm_del']}");
}
</script>


EOT;

starttable('100%');

echo <<<EOT
	<tr>
		<td class="tableh1" colspan="2"><b><span class="statlink">{$lang_groupmgr_php['group_name']}</span></b></td>
		<td class="tableh1"><b><span class="statlink">{$lang_groupmgr_php['disk_quota']}</span></b></td>
		<td class="tableh1" align="center"><b><span class="statlink">{$lang_groupmgr_php['can_rate']}</span></b></td>
		<td class="tableh1" align="center"><b><span class="statlink">{$lang_groupmgr_php['can_send_ecards']}</span></b></td>
		<td class="tableh1" align="center"><b><span class="statlink">{$lang_groupmgr_php['can_post_com']}</span></b></td>
		<td class="tableh1" align="center"><b><span class="statlink">{$lang_groupmgr_php['can_upload']}</span></b></td>
		<td class="tableh1" align="center"><b><span class="statlink">{$lang_groupmgr_php['approval_1']}</span></b></td>
		<td class="tableh1" align="center"><b><span class="statlink">{$lang_groupmgr_php['can_have_gallery']}</span></b></td>
		<td class="tableh1" align="center"><b><span class="statlink">{$lang_groupmgr_php['approval_2']}</span></b></td>
	</tr>
	<form method="post" action="$PHP_SELF">

EOT;

display_group_list();

echo <<<EOT
	<tr>
    	<td colspan="10" class="tableh2">
		<b>{$lang_groupmgr_php['notes']}</b>
		</td>
	</tr>
	<tr>
    	<td colspan="10" class="tableb">
		{$lang_groupmgr_php['note1']}
		</td>
	</tr>
	<tr>
    	<td colspan="10" class="tableb">
		{$lang_groupmgr_php['note2']}
		</td>
	</tr>

EOT;

if(defined('UDB_INTEGRATION')) {
	echo <<<EOT
	<tr>
    	<td colspan="10" align="center" class="tablef">
			<input type="submit" name="apply_modifs" value="{$lang_groupmgr_php['apply']}" class="button">&nbsp;&nbsp;&nbsp;
		</td>
	</form>
	</tr>

EOT;
} else {
	echo <<<EOT
	<tr>
    	<td colspan="10" align="center" class="tablef">
			<input type="submit" name="apply_modifs" value="{$lang_groupmgr_php['apply']}" class="button">&nbsp;&nbsp;&nbsp;
			<input type="submit" name="new_group" value="{$lang_groupmgr_php['create_new_group']}" class="button">&nbsp;&nbsp;&nbsp;
			<input type="submit" name="del_sel" value="{$lang_groupmgr_php['del_groups']}" onClick="return confirmDel()" class="button">
		</td>
	</form>
	</tr>

EOT;
}
endtable();
pagefooter();
ob_end_flush();
?>