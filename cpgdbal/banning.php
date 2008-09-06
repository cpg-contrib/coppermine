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
  $Revision: 4981 $
  $LastChangedBy: gaugau $
  $Date: 2008-09-01 13:37:08 +0530 (Mon, 01 Sep 2008) $
**********************************************/

/**
* Coppermine Photo Gallery 1.4.2 banning.php
*
* Someone please add a description
*
* @copyright 2002-2006 Gregory DEMAR, Coppermine Dev Team
* @license http://opensource.org/licenses/gpl-license.php GNU General Public License V2
* @package Coppermine
* @version $Id: banning.php 4981 2008-09-01 08:07:08Z gaugau $
*/


define('IN_COPPERMINE', true);
define('BANNING_PHP', true);

require('include/init.inc.php');
require('include/sql_parse.php');

if (!GALLERY_ADMIN_MODE) cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);
// if (defined('UDB_INTEGRATION')) cpg_die(ERROR, $lang_errors['not_with_udb'], __FILE__, __LINE__);

/**
 * create_banlist()
 *
 * @return
 **/
function create_banlist()
{
    global $CONFIG, $lang_banning_php, $lang_common, $album_date_fmt, $CPG_PHP_SELF; //$PHP_SELF,
	global $cpg_db_banning_php;
	####################### DB #########################	
		$cpgdb =& cpgDB::getInstance();
		$cpgdb->connect_to_existing($CONFIG['LINK_ID']);
	##################################################			

    /*$result = cpg_db_query ("SELECT *, UNIX_TIMESTAMP(expiry) AS expiry FROM {$CONFIG['TABLE_BANNED']} WHERE brute_force=0");
    $count = mysql_num_rows($result);*/
	#####################  DB  #########################
	$cpgdb->query($cpg_db_banning_php['create_banlist']);
	$rowset = $cpgdb->fetchRowSet();
	$count = count($rowset);
	#################################################
    if ($count > 0) {
        echo <<<EOHEAD
                <tr>
                <th align="center" class="tableh2">{$lang_banning_php['user_name']}</th>
                <th align="center" class="tableh2">{$lang_banning_php['ip_address']}</th>
                <th align="center" class="tableh2">{$lang_banning_php['expiry']}</th>
                <th align="center" class="tableh2"></th>
                </tr>
EOHEAD;

        $row_counter = 0;
        $loop_counter = 0;
        //while ($row = mysql_fetch_array($result)) {
		foreach ($rowset as $row) {		#################	cpgdb_AL
            if ($loop_counter == 0) {
                $row_style_class = 'tableb';
            } else {
                $row_style_class = 'tableb tableb_alternate';
            }
            $loop_counter++;
            if ($loop_counter > 1) {
                $loop_counter = 0;
            }
            if ($row['user_id']) {
                $username = get_username($row['user_id']);
            } else {
                $username = '';
            }

            if ($row['expiry']) {
                $expiry = localised_date($row['expiry'], '%Y-%m-%d');
            } else {
                $expiry = '';
            }
            echo <<<EOROW
                                        <tr>
                                               <form action="{$CPG_PHP_SELF}" method="post" name="banlist$row_counter" id="banlist$row_counter">
                                                     <td width="20%" class="{$row_style_class}" valign="middle">
                                                             <input type="hidden" name="ban_id" value="{$row['ban_id']}" />
                                                <input type="text" class="textinput" style="width: 100%" name="edit_ban_user_name" value="$username" />
                                        </td>
                                                <td class="{$row_style_class}" valign="middle">
                                                <input type="text" class="textinput" size="15" name="edit_ban_ip_addr" value="{$row['ip_addr']}" />
                                        </td>
                                                <td class="{$row_style_class}" valign="middle">
                                                <input type="text" class="listbox_lang" size="20" name="edit_ban_expires" value="$expiry" readonly="readonly" title="{$lang_banning_php['select_date']}" />
                                                <script type="text/javascript">
                                                    document.write('<a href="javascript:;"  onclick="return getCalendar(document.banlist$row_counter.edit_ban_expires);" title="{$lang_banning_php['select_date']}"><img src="images/calendar.gif" width="16" height="16" border="0" alt="" /></a>');
                                                </script>
                                        </td>
                                        <td class="{$row_style_class}" valign="middle">
                                                                <input type="submit" class="button" name="edit_ban" value="{$lang_banning_php['edit_ban']}" />
                                        &nbsp;&nbsp;
                                                                <input type="submit" class="button" name="delete_ban" value="{$lang_common['delete']}" />
                                        </td>
                                </form>
                                </tr>
EOROW;
          $row_counter++;
        }
    }
    //mysql_free_result($result);
	$cpgdb->free();		#####################	cpgdb_AL
}

    if ($superCage->post->keyExists('add_ban')) {
        if ($superCage->post->getEscaped('add_ban_user_name')) {
            $ban_username = $superCage->post->getEscaped('add_ban_user_name');
            if (!($ban_uid = get_userid($ban_username))) {
                cpg_die(CRITICAL_ERROR, $lang_banning_php['error_user']. ' '. $superCage->post->getEscaped('add_ban_user_name'), __FILE__, __LINE__);
            }
            // check that admin doesn't ban himself
            //Using getRaw() for comparison
            if ($superCage->post->getRaw('add_ban_user_name') == USER_NAME) {
               cpg_die(ERROR, $lang_banning_php['error_admin_ban'], __FILE__, __LINE__);
               }
        } else {
            $ban_uid = 'NULL';
        }

        if ($superCage->post->testIp('add_ban_ip_addr')) {
            //Using getRaw() since we have already tested the IP.
            $ban_ip_addr = "'" . $superCage->post->getEscaped('add_ban_ip_addr') . "'";
            $ip_addr = $superCage->post->getEscaped('add_ban_ip_addr');
            //check admin ip address. Using getRaw() for comparison only
            if ($ip_addr == $REMOTE_ADDR || $ip_addr == $superCage->server->getEscaped("REMOTE_ADDR") || ($superCage->env->getEscaped("REMOTE_ADDR") && $ip_addr == $superCage->post->getEscaped("REMOTE_ADDR"))) {
               cpg_die(ERROR, $lang_banning_php['error_admin_ban'], __FILE__, __LINE__);
            }
            //check server ip adress. Using getRaw() for comparison only.
            if ($ip_addr == $SERVER_ADDR || $ip_addr == $superCage->server->getEscaped("SERVER_ADDR") || $ip_addr == $superCage->env->getEscaped("SERVER_ADDR")) {
               cpg_die(ERROR, $lang_banning_php['error_server_ban'], __FILE__, __LINE__);
            }
            //check illegal ip addresses
            $ip_to_check = 'ip'.$ip_addr;
            $ip_is_illegal = 0;
            $illegal_ip = array('192.168.','10.','172.16.','172.17.','172.18.','172.19.','172.20.','172.21.','172.22.','172.23.','172.24.','172.25.','172.26.','172.27.','172.28.','172.29.','172.30.','172.31.','169.254.','127.', '192.0.','1.0.0.0','204.152.64.','204.152.65.');
            foreach ($illegal_ip as $not_allowed_ip) {
              if (strpos($ip_to_check,$not_allowed_ip) == 2){$ip_is_illegal++;}
            }
            //higher than 224 in first byte
            for ($i = 224; $i <= 255; $i++) {
            if (strpos($ip_to_check,$i.'.') == 2){$ip_is_illegal++;}
            }
            if ($ip_is_illegal != 0 && $CONFIG['ban_private_ip'] == 0) {
              cpg_die(ERROR, sprintf($lang_banning_php['error_ip_forbidden'], '<a href="admin.php">', '</a>'), __FILE__, __LINE__);
            }
        } else {
            $ban_ip_addr = 'NULL';
        }

/* The existing validity check for expiry date stinks, have to create a new one
        if (isset($_POST['add_ban_expires'])) { //expiry date has been set: start
            if (($_POST['add_ban_expires']) && ($_POST['add_ban_expires'] != 'never')) { //expiry date contains data and is not set to 'never': start
                if (!($ban_expires = strtotime($_POST['add_ban_expires']))) {
                    $ban_expires = 'NULL';
                }
            } else {
                $ban_expires = 'NULL';
            }
        } else {
            $ban_expires = 'NULL';
        }
*/
$matches = $superCage->post->getMatched('add_ban_expires', '/^[0-9-]+$/');
$ban_expires = $matches[0];
if ($ban_expires == '') {
    $ban_expires = 'NULL';
} else {
    $ban_expires = "'".$ban_expires.' 00:00:00'."'";
}
if ($ban_expires == '\' 00:00:00\'') {
    $ban_expires = 'NULL';
}

//print 'expiry date|'.$ban_expires.'|'; //added for debugging

if ($ban_expires < 0) {
    $ban_expires = 'NULL';
}
    // check if anything has been submit at all
    if (!$ban_username && !$ip_addr) {
        cpg_die(CRITICAL_ERROR, $lang_banning_php['error_specify'], __FILE__, __LINE__);
    }
    /*if ($ban_uid || $ban_ip_addr) {
        cpg_db_query("INSERT INTO {$CONFIG['TABLE_BANNED']} (user_id, ip_addr, expiry) VALUES ($ban_uid, $ban_ip_addr, $ban_expires)");
		//check if we have to delete comments too
		if($superCage->post->keyExists('delete_comment') && $superCage->post->keyExists('comment_id')) {
			$delete_what = $superCage->post->getInt('delete_comment');
			if ($delete_what == 1) { // delete the current comment only
				$comm_id = $superCage->post->getInt('comment_id');
				cpg_db_query("DELETE FROM {$CONFIG['TABLE_COMMENTS']} WHERE msg_id = $comm_id");
			} elseif ($delete_what == 2) { //delete all comments by this author
				cpg_db_query("DELETE FROM {$CONFIG['TABLE_COMMENTS']} WHERE author_id = $ban_uid");
			} //no need for an "else" - we don't delete a comment if else, i.e. if "none" has been selected
		}
    } */
################################  DB  ######################################
    if ($ban_uid || $ban_ip_addr) {
        $cpgdb->query($cpg_db_banning_php['ban_user'], $ban_uid, $ban_ip_addr, $ban_expires);
		//check if we have to delete comments to
		if($superCage->post->keyExists('delete_comment') && $superCage->post->keyExists('comment_id')) {
			$delete_what = $superCage->post->getInt('delete_comment');
			if ($delete_what == 1) { // delete the current comment only
				$comm_id = $superCage->post->getInt('comment_id');
				$cpgdb->query($cpg_db_banning_php['delete_current_comments'], $comm_id);
			} elseif ($delete_what == 2) { //delete all comments by this author
				$cpgdb->query($cpg_db_banning_php['delete_all_comments'], $ban_uid);
			} //no need for an "else" - we don't delete a comment if else, i.e. if "none" has been selected
		}
    }
#######################################################################	
	else {
        cpg_die(CRITICAL_ERROR, $lang_banning_php['error_specify'], __FILE__, __LINE__);
    }
    } elseif ($superCage->post->keyExists('delete_ban')) {
        if ($superCage->post->keyExists('ban_id')) {
            $ban_id = $superCage->post->getInt('ban_id');
            if ($ban_id) {
                //cpg_db_query("DELETE FROM {$CONFIG['TABLE_BANNED']} WHERE ban_id=$ban_id");
				######################		DB		#####################
				$cpgdb->query($cpg_db_banning_php['delete_banned'], $ban_id);	
				###########################################################
            } else {
                cpg_die(CRITICAL_ERROR, $lang_banning_php['error_ban_id'], __FILE__, __LINE__);
            }
        }
    } elseif ($superCage->post->keyExists('edit_ban')) {
        if ($superCage->post->keyExists('ban_id')) {
            $ban_id = $superCage->post->getInt('ban_id');
            if ($ban_id) {
                if ($superCage->post->getEscaped('edit_ban_user_name')) {
                    if (!($ban_uid = get_userid($superCage->post->getEscaped('edit_ban_user_name')))) {
                        cpg_die(CRITICAL_ERROR, $lang_banning_php['error_user'] . ' ' . $superCage->post->getEscaped('edit_ban_user_name'), __FILE__, __LINE__);
                    }
                } else {
                    $ban_uid = 'NULL';
                }

                if ($superCage->post->testIp('edit_ban_ip_addr')) {
                    //Using getRaw() as we have already tested for IP
                    $ban_ip_addr = "'" . $superCage->post->getEscaped('edit_ban_ip_addr') . "'";
                } else {
                    $ban_ip_addr = 'NULL';
                }

                $matches = $superCage->post->getMatched('edit_ban_expires', '/^[0-9-]+$/');
                $ban_expires = $matches[0];
                if ($ban_expires == '') {
                      $ban_expires = 'NULL';
                } else {
                    $ban_expires = "'".$ban_expires."'";
                }

                if ((int)$ban_expires < 0) $ban_expires = 'NULL';

                if ($ban_uid || $ban_ip_addr) {
                    //cpg_db_query("UPDATE {$CONFIG['TABLE_BANNED']} SET user_id=$ban_uid, ip_addr=$ban_ip_addr, expiry=$ban_expires where ban_id=$ban_id");
					###################################		DB		##################################
					$cpgdb->query($cpg_db_banning_php['update_banned_data'], $ban_uid, $ban_ip_addr, $ban_expires, $ban_id);	
					###################################################################################
                } else {
                    cpg_die(CRITICAL_ERROR, $lang_banning_php['error_specify'], __FILE__, __LINE__);
                }
            } else {
                cpg_die(CRITICAL_ERROR, $lang_banning_php['error_ban_id'], __FILE__, __LINE__);
            }
        }
    }

$see_all_comments = '';
$checked_single = 'disabled="disabled"';
$checked_all = 'checked="checked"';
$checked_none = '';
$new_ban_user_id = '';

//check if there is a ban_user parameter in the URL that we have to ban
if($superCage->get->keyExists('ban_user') && $superCage->get->getInt('ban_user') != "")	{
	$new_ban_user_id = $superCage->get->getInt('ban_user');
	/*$sql = "SELECT user_name FROM {$CONFIG['TABLE_USERS']} WHERE user_id = '$new_ban_user_id' LIMIT 1";
	$result = cpg_db_query($sql);
	if (!mysql_num_rows($result)) {
		$comm_info['msg_author'] = '';
	} else {
		$user_data = mysql_fetch_array($result);
		$comm_info['msg_author'] = $user_data['user_name'];
		unset($user_data);
	}
	mysql_free_result($result);*/
	###########################     DB    ############################
	$result = $cpgdb->query($cpg_db_banning_php['get_ban_user_param'], $new_ban_user_id);
	$rowset = $cpgdb->fetchRowSet();
	if(!count($rowset)) {
		$comm_info['msg_author'] = '';
	} else {
		$user_data = $rowset[0];
		$comm_info['msg_author'] = $user_data['user_name'];
		unset($user_data);
	}
	$cpgdb->free();
	#############################################################
}

//check if there is a delete_comment_id parameter in the URL that we have to ban
if($superCage->get->keyExists('delete_comment_id') && $superCage->get->getInt('delete_comment_id') != "")	{
	//get info on user
	$comm_id = $superCage->get->getInt('delete_comment_id');
	//check if there is a comment who's creator we have to ban
	//$comm_info = mysql_fetch_array(cpg_db_query("SELECT msg_author, msg_hdr_ip, msg_raw_ip FROM {$CONFIG['TABLE_COMMENTS']} WHERE msg_id = $comm_id"));
	##############################		DB		#################################
	$comm_info = $cpgdb->fetchRow($cpgdb->query($cpg_db_banning_php['get_comment_info'], $comm_id));
	###############################################################################
	($comm_info['msg_hdr_ip'] == '') ? $comm_info['msg_ip'] = $comm_info['msg_hdr_ip'] : $comm_info['msg_ip'] = $comm_info['msg_raw_ip'];
	$checked_single = 'checked="checked"';
	$checked_none = '';
	if (!$new_ban_user_id) { // comment has been made by a guest, so there is no point in populating the username field
		$comm_info['msg_author'] = '';
		$checked_all = 'disabled="disabled"';
		$see_all_comments = '';
	} else { // coment has been made by a registered user
		$checked_all = '';
		$see_all_comments = '(<a href="thumbnails.php?album=lastcomby&amp;uid=' . $new_ban_user_id . '">' . $lang_banning_php['view'] . '</a>)';
	}
}



pageheader($lang_banning_php['title']);

starttable('100%', cpg_fetch_icon('ban_user', 2) . $lang_banning_php['title'], 4);
create_banlist();
endtable();
$calendar_link_new = 'calendar.php?action=banning&amp;month='.ltrim(strftime('%m'),'0').'&amp;year='.strftime('%Y');
print <<<EOT
<script language="javascript" type="text/javascript">
var calendarWindow = null;
var calendarFormat = 'y-m-d';

function getCalendar(in_dateField)
{
    if (calendarWindow && !calendarWindow.closed) {
        alert('{$lang_banning_php['calender_already_open']}');
        try {
            calendarWindow.focus();
        }
        catch(e) {}

        return false;
    }

    var cal_width = 300;
    var cal_height = 260;

    // IE needs less space to make this thing
    if ((document.all) && (navigator.userAgent.indexOf("Konqueror") == -1)) {
        cal_width = 290;
    }

    calendarTarget = in_dateField;
    calendarWindow = window.open('{$calendar_link_new}', 'dateSelectorPopup','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=1,dependent=no,width='+cal_width+',height='+cal_height);
    return false;
}

function killCalendar()
{
    if (calendarWindow && !calendarWindow.closed) {
        calendarWindow.close();
    }
}
</script>
EOT;
print "<br />\n";
print '<form action="'.$CPG_PHP_SELF.'" method="post" name="list" id="cpgform">'."\r\n";
starttable('100%', $lang_banning_php['add_new'], 5);
echo <<<EOT
	<tr>
		<th class="tableh2">{$lang_banning_php['user_name']}</th>
		<th class="tableh2">{$lang_banning_php['ip_address']}</th>
		<th class="tableh2">{$lang_banning_php['delete_comments']}</th>
		<th class="tableh2">{$lang_banning_php['expiry']}</th>
		<th class="tableh2"></th>
	</tr>
	<tr>
		<td class="tableb" valign="middle">
			<input type="text" class="textinput" style="width: 100%" name="add_ban_user_name" value="{$comm_info['msg_author']}" />
		</td>
		<td class="tableb" valign="middle">
			<input type="text" class="textinput" name="add_ban_ip_addr" value="{$comm_info['msg_ip']}" size="15" maxlength="15" />
		</td>
		<td class="tableb" valign="middle">
			<input type="radio" id="single" name="delete_comment" value="1" {$checked_single} /><label for="single" class="clickable_option">{$lang_banning_php['current']}</label>&nbsp;&nbsp;
			<input type="radio" id="all" name="delete_comment" value="2" {$checked_all} /><label for="all" class="clickable_option">{$lang_banning_php['all']}</label> {$see_all_comments}&nbsp;&nbsp;
			<input type="radio" id="none" name="delete_comment" value="0" {$checked_none} /><label for="none" class="clickable_option">{$lang_banning_php['none']}</label>
			<input type="hidden" name="comment_id" value="{$comm_id}"/>
		</td>
		<td class="tableb" valign="middle">
			<input type="text" class="listbox_lang"  name="add_ban_expires" value="" size="20" readonly="readonly" title="{$lang_banning_php['select_date']}" />
			<script type="text/javascript">
			document.write('<a href="javascript:;"  onclick="return getCalendar(document.list.add_ban_expires);" title="{$lang_banning_php['select_date']}"><img src="images/calendar.gif" width="16" height="16" border="0" alt="" /></a>');
			</script>
		</td>
		<td class="tableb" valign="top">
			<input type="submit" class="button" name="add_ban" value="{$lang_banning_php['add_ban']}" />
		</td>
	</tr>
EOT;
endtable();
print "</form>\r\n";
print "<br />\r\n";
print '<form action="http://ws.arin.net/whois/" method="get" name="lookup" id="cpgform2" target="_blank">' . "\n";
//starttable('-2', $lang_banning_php['lookup_ip'], 2);
starttable('-2');
print "<tr>\n";
print "<td class=\"tablef\">\n";
print "<strong>".$lang_banning_php['lookup_ip']."</strong>\n";
print "</td>\n";
print "<td class=\"tableb\">\n";
print "<input type=\"text\" class=\"textinput\" size=\"20\" name=\"queryinput\" value=\"\" maxlength=\"15\" />\n";
print "</td>\n";
print "<td class=\"tableb\">\n";
print "<input type=\"submit\" class=\"button\" name=\"submit\" value=\"{$lang_banning_php['submit']}\" />\n";
print "</td>\n";
print "</tr>\n";
endtable();
print "</form>\n";

pagefooter();
ob_end_flush();

?>