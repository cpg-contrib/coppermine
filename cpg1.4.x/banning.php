<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2009 Coppermine Dev Team
  v1.1 originally written by Gregory DEMAR

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 3
  as published by the Free Software Foundation.
  
  ********************************************
  Coppermine version: 1.4.25
  $HeadURL$
  $Revision$
  $Author$
  $Date$
**********************************************/

/**
* Coppermine Photo Gallery 1.4.14 banning.php
*
* Someone please add a description
*
* @copyright 2002-2006 Gregory DEMAR, Coppermine Dev Team
* @license http://www.gnu.org/licenses/gpl.html GNU General Public License V3
* @package Coppermine
* @version $Id$
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
    global $CONFIG, $lang_banning_php, $album_date_fmt; //$PHP_SELF,

    $result = cpg_db_query ("SELECT *, UNIX_TIMESTAMP(expiry) AS expiry FROM {$CONFIG['TABLE_BANNED']} WHERE brute_force=0");
    $count = mysql_num_rows($result);
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
        while ($row = mysql_fetch_array($result)) {
            if ($row['user_id']) {
                $username = get_username($row['user_id']);
            } else {
                $username = '';
            }

            if ($row['expiry']) {;
                $expiry = localised_date($row['expiry'], '%Y-%m-%d');
            } else {
                $expiry = '';
            }
            echo <<<EOROW
                                        <tr>
                                               <form action="{$_SERVER['PHP_SELF']}" method="post" name="banlist$row_counter">
                                                     <td width="20%" class="tableb" valign="middle">
                                                             <input type="hidden" name="ban_id" value="{$row['ban_id']}" />
                                                <input type="text" class="textinput" style="width: 100%" name="edit_ban_user_name" value="$username" />
                                        </td>
                                                <td class="tableb" valign="middle">
                                                <input type="text" class="textinput" size="15" name="edit_ban_ip_addr" value="{$row['ip_addr']}" />
                                        </td>
                                                <td class="tableb" valign="middle">
                                                <input type="text" class="listbox_lang" size="20" name="edit_ban_expires" value="$expiry" readonly="readonly" title="{$lang_banning_php['select_date']}" />
                                                <a href="javascript:;"  onclick="return getCalendar(document.banlist$row_counter.edit_ban_expires);" title="{$lang_banning_php['select_date']}"><img src="images/calendar.gif" width="16" height="16" border="0" alt="" /></a>
                                        </td>
                                        <td class="tableb" valign="middle">
                                                                <input type="submit" class="button" name="edit_ban" value="{$lang_banning_php['edit_ban']}" />
                                        &nbsp;&nbsp;
                                                                <input type="submit" class="button" name="delete_ban" value="{$lang_banning_php['delete_ban']}" />
                                        </td>
                                </form>
                                </tr>
EOROW;
          $row_counter++;
        }
    }
    mysql_free_result($result);
}

if (count($_POST) > 0) {
    if (isset($_POST['add_ban'])) {
        if ($_POST['add_ban_user_name']) {
            if (!($ban_uid = get_userid($_POST['add_ban_user_name']))) {
                cpg_die(CRITICAL_ERROR, $lang_banning_php['error_user']. ' '. $_POST['add_ban_user_name'], __FILE__, __LINE__);
            }
            // check that admin doesn't ban himself
            if ($_POST['add_ban_user_name'] == USER_NAME) {
               cpg_die(ERROR, $lang_banning_php['error_admin_ban'], __FILE__, __LINE__);
               }
        } else {
            $ban_uid = 'NULL';
        }

        if ($_POST['add_ban_ip_addr']) {
            $ban_ip_addr = "'" . addslashes($_POST['add_ban_ip_addr']) . "'";
            //check admin ip address
            if ($_POST['add_ban_ip_addr'] == $REMOTE_ADDR || $_POST['add_ban_ip_addr'] == $_SERVER["REMOTE_ADDR"] || ($_POST['add_ban_ip_addr'] == $_ENV["REMOTE_ADDR"] && $_ENV["REMOTE_ADDR"])) {
               cpg_die(ERROR, $lang_banning_php['error_admin_ban'], __FILE__, __LINE__);
               }
            //check server ip adress
            if ($_POST['add_ban_ip_addr'] == $SERVER_ADDR || $_POST['add_ban_ip_addr'] == $_SERVER["SERVER_ADDR"] || $_POST['add_ban_ip_addr'] == $_ENV["SERVER_ADDR"]) {
               cpg_die(ERROR, $lang_banning_php['error_server_ban'], __FILE__, __LINE__);
               }
            //check illegal ip addresses
            $ip_to_check = 'ip'.$_POST['add_ban_ip_addr'];
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
            cpg_die(ERROR, $lang_banning_php['error_ip_forbidden'], __FILE__, __LINE__);
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
$ban_expires = $_POST['add_ban_expires'];
if ($ban_expires == '') {
    $ban_expires = 'NULL';
} else {
    $ban_expires = "'".$ban_expires.' 00:00:00'."'";
}
if ($ban_expires == '\' 00:00:00\'') {
    $ban_expires = 'NULL';
}

//print 'expiry date|'.$ban_expires.'|'; //added for debugging

        if ($ban_expires < 0) { $ban_expires = 'NULL';}
        // check if anything has been submit at all
        if (!$_POST['add_ban_user_name'] && !$_POST['add_ban_ip_addr']) {
          cpg_die(CRITICAL_ERROR, $lang_banning_php['error_specify'], __FILE__, __LINE__);
          }
        if ($ban_uid || $ban_ip_addr) {
            cpg_db_query("INSERT INTO {$CONFIG['TABLE_BANNED']} (user_id, ip_addr, expiry) VALUES ($ban_uid, $ban_ip_addr, $ban_expires)");
        } else {
            cpg_die(CRITICAL_ERROR, $lang_banning_php['error_specify'], __FILE__, __LINE__);
        }
    } elseif (isset($_POST['delete_ban'])) {
        if (isset($_POST['ban_id'])) {
            $ban_id = (int)$_POST['ban_id'];
            if ($ban_id) {
                cpg_db_query("DELETE FROM {$CONFIG['TABLE_BANNED']} WHERE ban_id=$ban_id");
            } else {
                cpg_die(CRITICAL_ERROR, $lang_banning_php['error_ban_id'], __FILE__, __LINE__);
            }
        }
    } elseif (isset($_POST['edit_ban'])) {
        if (isset($_POST['ban_id'])) {
            $ban_id = (int)$_POST['ban_id'];
            if ($ban_id) {
                if ($_POST['edit_ban_user_name']) {
                    if (!($ban_uid = get_userid($_POST['edit_ban_user_name']))) {
                        cpg_die(CRITICAL_ERROR, $lang_banning_php['error_user'] . ' ' . $_POST['edit_ban_user_name'], __FILE__, __LINE__);
                    }
                } else {
                    $ban_uid = 'NULL';
                }

                if (isset($_POST['edit_ban_ip_addr'])) {
                    $ban_ip_addr = "'" . addslashes($_POST['edit_ban_ip_addr']) . "'";
                } else {
                    $ban_ip_addr = 'NULL';
                }

                /*
                if (isset($_POST['edit_ban_expires'])) {
                    if (($_POST['edit_ban_expires']) && ($_POST['edit_ban_expires'] != 'never')) {
                        if (!($ban_expires = strtotime($_POST['edit_ban_expires']))) {
                            $ban_expires = 'NULL';
                        }
                    } else {
                        $ban_expires = 'NULL';
                    }
                } else {
                    $ban_expires = 'NULL';
                }
                */
                $ban_expires = $_POST['edit_ban_expires'];
                if ($ban_expires == '') {
                      $ban_expires = 'NULL';
                } else {
                    $ban_expires = "'".$ban_expires."'";
                }

                if ((int)$ban_expires < 0) $ban_expires = 'NULL';

                if ($ban_uid || $ban_ip_addr) {
                    cpg_db_query("UPDATE {$CONFIG['TABLE_BANNED']} SET user_id=$ban_uid, ip_addr=$ban_ip_addr, expiry=$ban_expires where ban_id=$ban_id");
                } else {
                    cpg_die(CRITICAL_ERROR, $lang_banning_php['error_specify'], __FILE__, __LINE__);
                }
            } else {
                cpg_die(CRITICAL_ERROR, $lang_banning_php['error_ban_id'], __FILE__, __LINE__);
            }
        }
    }
}

pageheader($lang_banning_php['title']);

$signature = 'Coppermine Photo Gallery ' . COPPERMINE_VERSION . ' (' . COPPERMINE_VERSION_STATUS . ')';
//print "<div align=\"left\">\n";
starttable('100%', "{$lang_banning_php['title']} - $signature", 4);
create_banlist();
endtable();
//print "</div>\n";
$calendar_link_new = 'calendar.php?action=banning&amp;month='.ltrim(strftime('%m'),'0').'&amp;year='.strftime('%Y');
print <<<EOT
<script language="javascript" type="text/javascript">
var calendarWindow = null;
var calendarFormat = 'y-m-d';

function getCalendar(in_dateField)
{
    if (calendarWindow && !calendarWindow.closed) {
        alert('Calendar window already open.  Attempting focus...');
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
starttable('100%', $lang_banning_php['add_new'], 4);
echo <<<EOT
                                        <tr>
                                                <th class="tableh2">{$lang_banning_php['user_name']}</th>
                                                <th class="tableh2">{$lang_banning_php['ip_address']}</th>
                                                <th class="tableh2">{$lang_banning_php['expiry']}</th>
                                                <th class="tableh2"></th>
                                        </tr>

                                        <tr>
                                               <form action="{$_SERVER['PHP_SELF']}" method="post" name="list">
                                                     <td class="tableb" valign="middle">
                                                <input type="text" class="textinput" style="width: 100%" name="add_ban_user_name" value="" />
                                        </td>
                                                <td class="tableb" valign="middle">
                                                <input type="text" class="textinput" name="add_ban_ip_addr" value="" size="15" maxlength="15" />
                                        </td>
                                                <td class="tableb" valign="middle">
                                                <input type="text" class="listbox_lang"  name="add_ban_expires" value="" size="20" readonly="readonly" title="{$lang_banning_php['select_date']}" />
                                                <a href="javascript:;"  onclick="return getCalendar(document.list.add_ban_expires);" title="{$lang_banning_php['select_date']}"><img src="images/calendar.gif" width="16" height="16" border="0" alt="" /></a>
                                        </td>
                                        <td class="tableb" valign="top">
                                                                <input type="submit" class="button" name="add_ban" value="{$lang_banning_php['add_ban']}" />
                                        </td>
                                </form>
                                </tr>
EOT;
endtable();
print "<form action=\"http://ws.arin.net/cgi-bin/whois.pl\" method=\"post\" name=\"lookup\">\n";

//starttable('-2', $lang_banning_php['lookup_ip'], 2);
starttable('-2');
print "<tr>\n";
print "<td class=\"tablef\">\n";
print "<b>".$lang_banning_php['lookup_ip']."</b>\n";
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
