<?php 
// ------------------------------------------------------------------------- //
// Coppermine Photo Gallery 1.2.1                                            //
// ------------------------------------------------------------------------- //
// Copyright (C) 2002,2003 Gregory DEMAR                                     //
// http://www.chezgreg.net/coppermine/                                       //
// ------------------------------------------------------------------------- //
// Updated by the Coppermine Dev Team                                        //
// (http://coppermine.sf.net/team/)                                          //
// see /docs/credits.html for details                                        //
// ------------------------------------------------------------------------- //
// This program is free software; you can redistribute it and/or modify      //
// it under the terms of the GNU General Public License as published by      //
// the Free Software Foundation; either version 2 of the License, or         //
// (at your option) any later version.                                       //
// ------------------------------------------------------------------------- // 

define('IN_COPPERMINE', true);
define('BANNING_PHP', true);

require('include/init.inc.php');
require('include/sql_parse.php');

if (!GALLERY_ADMIN_MODE) cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);
// if (defined('UDB_INTEGRATION')) cpg_die(ERROR, $lang_errors['not_with_udb'], __FILE__, __LINE__);
function create_banlist()
{
    global $CONFIG, $PHP_SELF, $lang_banning_php;

    $result = db_query ("SELECT * FROM {$CONFIG['TABLE_BANNED']}");
    $count = mysql_num_rows($result);
    if ($count > 0) {
        echo <<<EOHEAD
        	<tr>
        	<th align="center">{$lang_banning_php['user_name']}</th>
        	<th align="center">{$lang_banning_php['ip_address']}</th>
        	<th align="center">{$lang_banning_php['expiry']}</th>
        	<th align="center"></th>
        	</tr>
EOHEAD;

        while ($row = mysql_fetch_array($result)) {
            if ($row['user_id']) {
                $username = get_username($row['user_id']);
            } else {
                $username = '';
            } 
            if ($row['expiry']) {
                $expiry = strftime ('%H:%M:%S %d %b %Y %Z', $row['expiry']);
            } else {
                $expiry = '';
            } 
            echo <<<EOROW
					<tr>
		    	   		<form action="$PHP_SELF" method="post">
			           	  	<td width="20%" class="tableb" valign="top">
			           	  		<input type="hidden" name="ban_id" value="{$row['ban_id']}">
                				<input type="text" class="textinput" style="width: 100%" name="edit_ban_user_name" value="$username">
                			</td>
                				<td width="20%" class="tableb" valign="top">
                				<input type="text" class="textinput" style="width: 100%" name="edit_ban_ip_addr" value="{$row['ip_addr']}">
                			</td>
                				<td width="20%" class="tableb" valign="top">
                				<input type="text" class="textinput" style="width: 100%" name="edit_ban_expires" value="$expiry">
                			</td>
                			<td width="40%" class="tableb" valign="top">
								<input type="submit" class="button" name="edit_ban" value="{$lang_banning_php['edit_ban']}">
                        		&nbsp;&nbsp;
								<input type="submit" class="button" name="delete_ban" value="{$lang_banning_php['delete_ban']}">
                			</td>
                		</form>
        			</tr>
EOROW;
        } 
    } 
    mysql_free_result($result);
} 

if (count($HTTP_POST_VARS) > 0) {
    if (isset($HTTP_POST_VARS['add_ban'])) {
        if ($HTTP_POST_VARS['add_ban_user_name']) {
            if (!($ban_uid = get_userid($HTTP_POST_VARS['add_ban_user_name']))) {
                cpg_die(CRITICAL_ERROR, "Cannot find user '{$HTTP_POST_VARS['add_ban_user_name']}'", __FILE__, __LINE__);
            } 
        } else {
            $ban_uid = 'NULL';
        } 

        if (isset($HTTP_POST_VARS['add_ban_ip_addr'])) {
            $ban_ip_addr = "'" . addslashes($HTTP_POST_VARS['add_ban_ip_addr']) . "'";
        } else {
            $ban_ip_addr = 'NULL';
        } 

        if (isset($HTTP_POST_VARS['add_ban_expires'])) {
            if (($HTTP_POST_VARS['add_ban_expires']) && ($HTTP_POST_VARS['add_ban_expires'] != 'never')) {
                if (!($ban_expires = strtotime($HTTP_POST_VARS['add_ban_expires']))) {
                    $ban_expires = 'NULL';
                } 
            } else {
                $ban_expires = 'NULL';
            } 
        } else {
            $ban_expires = 'NULL';
        } 

        if ($ban_expires < 0) $ban_expires = 'NULL';

        if ($ban_uid || $ban_ip_addr) {
            db_query("INSERT INTO {$CONFIG['TABLE_BANNED']} (user_id, ip_addr, expiry) VALUES ($ban_uid, $ban_ip_addr, $ban_expires)");
        } else {
            cpg_die(CRITICAL_ERROR, "You need to specifiy either a user name or an IP address.", __FILE__, __LINE__);
        } 
    } elseif (isset($HTTP_POST_VARS['delete_ban'])) {
        if (isset($HTTP_POST_VARS['ban_id'])) {
            $ban_id = (int)$HTTP_POST_VARS['ban_id'];
            if ($ban_id) {
                db_query("DELETE FROM {$CONFIG['TABLE_BANNED']} WHERE ban_id=$ban_id");
            } else {
                cpg_die(CRITICAL_ERROR, "Invalid ban ID!", __FILE__, __LINE__);
            } 
        } 
    } elseif (isset($HTTP_POST_VARS['edit_ban'])) {
        if (isset($HTTP_POST_VARS['ban_id'])) {
            $ban_id = (int)$HTTP_POST_VARS['ban_id'];
            if ($ban_id) {
                if ($HTTP_POST_VARS['edit_ban_user_name']) {
                    if (!($ban_uid = get_userid($HTTP_POST_VARS['edit_ban_user_name']))) {
                        cpg_die(CRITICAL_ERROR, "Cannot find user '{$HTTP_POST_VARS['edit_ban_user_name']}'", __FILE__, __LINE__);
                    } 
                } else {
                    $ban_uid = 'NULL';
                } 

                if (isset($HTTP_POST_VARS['edit_ban_ip_addr'])) {
                    $ban_ip_addr = "'" . addslashes($HTTP_POST_VARS['edit_ban_ip_addr']) . "'";
                } else {
                    $ban_ip_addr = 'NULL';
                } 

                if (isset($HTTP_POST_VARS['edit_ban_expires'])) {
                    if (($HTTP_POST_VARS['edit_ban_expires']) && ($HTTP_POST_VARS['edit_ban_expires'] != 'never')) {
                        if (!($ban_expires = strtotime($HTTP_POST_VARS['edit_ban_expires']))) {
                            $ban_expires = 'NULL';
                        } 
                    } else {
                        $ban_expires = 'NULL';
                    } 
                } else {
                    $ban_expires = 'NULL';
                } 

                if ((int)$ban_expires < 0) $ban_expires = 'NULL';

                if ($ban_uid || $ban_ip_addr) {
                    db_query("UPDATE {$CONFIG['TABLE_BANNED']} SET user_id=$ban_uid, ip_addr=$ban_ip_addr, expiry=$ban_expires where ban_id=$ban_id");
                } else {
                    cpg_die(CRITICAL_ERROR, "You need to specifiy either a user name or an IP address.", __FILE__, __LINE__);
                } 
            } else {
                cpg_die(CRITICAL_ERROR, "Invalid ban ID!", __FILE__, __LINE__);
            } 
        } 
    } 
} 

pageheader($lang_banning_php['title']);

$signature = 'Coppermine Photo Gallery ' . COPPERMINE_VERSION;

starttable('100%', "{$lang_banning_php['title']} - $signature", 4);

create_banlist();

echo <<<EOT
					<tr>
					<tr>
					<th width="100%" class="tableb" valign="top" align="center" colspan=4>
						{$lang_banning_php['add_new']}
					</th>
					</tr>
					<tr>
						<th align="center">{$lang_banning_php['user_name']}</th>
						<th align="center">{$lang_banning_php['ip_address']}</th>
						<th align="center">{$lang_banning_php['expiry']}</th>
						<th align="center"></th>
					</tr>
					
					<tr>
			       		<form action="$PHP_SELF" method="post">
			           	  	<td width="20%" class="tableb" valign="top">
                				<input type="text" class="textinput" style="width: 100%" name="add_ban_user_name" value="">
                			</td>
                				<td width="20%" class="tableb" valign="top">
                				<input type="text" class="textinput" style="width: 100%" name="add_ban_ip_addr" value="">
                			</td>
                				<td width="20%" class="tableb" valign="top">
                				<input type="text" class="textinput" style="width: 100%" name="add_ban_expires" value="">
                			</td>
                			<td width="40%" class="tableb" valign="top">
								<input type="submit" class="button" name="add_ban" value="{$lang_banning_php['add_ban']}">
                			</td>
                		</form>
        			</tr>
EOT;

endtable();
pagefooter();
ob_end_flush();

?>
