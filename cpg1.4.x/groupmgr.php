<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2010 Coppermine Dev Team
  v1.0 originally written by Gregory Demar

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 3
  as published by the Free Software Foundation.
  
  ********************************************
  Coppermine version: 1.4.27
  $HeadURL$
  $Revision$
  $Author$
  $Date$
**********************************************/

define('IN_COPPERMINE', true);
define('GROUPMGR_PHP', true);

require('include/init.inc.php');

if (!GALLERY_ADMIN_MODE) cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);

$cpg_udb->synchronize_groups();

function display_group_list()
{
    global $CONFIG, $custom_group_counter;
    global $lang_groupmgr_php, $lang_byte_units, $lang_yes, $lang_no;
    $row_counter = 0;
    $table_start = '<table border="0" cellspacing="0" cellpadding="0" style="white-space:nowrap;font-size:90%;">'."\n";
    $table_end = '</table>'."\n";
    $tr_start = '<tr>'."\n";
    $tr_end = '</tr>'."\n";
    $td_start = '<td>'."\n";
    $td_end = '</td>'."\n";
    //$approval_needed = ', admin approval needed';
    //$approval_not_needed = ', visible instantly';
    $default_group_names = array(
        '1' => 'Administrators',
        '2' => 'Registered',
        '3' => 'Anonymous',
        '4' => 'Banned',
    );

    $result = cpg_db_query("SELECT * FROM {$CONFIG['TABLE_USERGROUPS']} WHERE 1 ORDER BY group_id");
    if (!mysql_num_rows($result)) {
        cpg_db_query("INSERT INTO {$CONFIG['TABLE_USERGROUPS']}
        VALUES (1, 'Administrators', 0, 1, 1, 1, 1, 1, 1, 0, 0, 3, 0, 5, 3)");
        cpg_db_query("INSERT INTO {$CONFIG['TABLE_USERGROUPS']}
        VALUES (2, 'Registered', 1024, 0, 1, 1, 1, 1, 1, 1, 0, 3, 0, 5, 3)");
        cpg_db_query("INSERT INTO {$CONFIG['TABLE_USERGROUPS']}
        VALUES (3, 'Anonymous', 0, 0, 1, 0, 0, 0, 0, 1, 1, 0, 0, 5, 3)");
        cpg_db_query("INSERT INTO {$CONFIG['TABLE_USERGROUPS']}
        VALUES (4, 'Banned', 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 5, 3)");
        cpg_die(CRITICAL_ERROR, $lang_groupmgr_php['error_group_empty'], __FILE__, __LINE__);
    }

    $field_list = array('can_rate_pictures', 'can_send_ecards', 'can_post_comments', 'can_upload_pictures', 'pub_upl_need_approval', 'can_create_albums', 'priv_upl_need_approval');
    $custom_group_counter = 0;

    while ($group = mysql_fetch_array($result)) {
        $group['group_name'] = $group['group_name'];
        $row_counter++;
        if ($row_counter == 1 ) {$table_background = 'tableb';}else{$table_background = 'tableh2';$row_counter = 0;}


        if ($group['group_id'] > 4 && UDB_INTEGRATION == 'coppermine') {
            $custom_group_counter++;
            echo <<< EOT
        <tr>
                <td class="$table_background" align="center" valign="top" style="padding-left: 1px; padding-right: 1px" >
                        <input type="checkbox" name="delete_group[]" value="{$group['group_id']}" class="checkbox" />
                </td>

EOT;
        } else {
            echo <<< EOT
        <tr>
                <td class="$table_background" >
                        &nbsp;
                </td>

EOT;
        }
        // disable row if applicable
        if ($group['group_id'] == 3 && $CONFIG['allow_unlogged_access'] == 0) {
            $disabled = 'disabled="disabled" style="background-color:InactiveCaptionText;color:GrayText"';
            $explain_greyedout = '&nbsp;'.cpg_display_help('f=index.htm&amp;base=64&h='.urlencode(base64_encode(serialize($lang_groupmgr_php['explain_greyed_out_title']))).'&amp;t='.urlencode(base64_encode(serialize(sprintf($lang_groupmgr_php['explain_guests_greyed_out_text'],'<i>'.$group['group_name'].'</i>')))), '450', '300');
        } elseif ($group['group_id'] == 4) {
            $disabled = 'disabled="disabled" style="background-color:InactiveCaptionText;color:GrayText"';
            $explain_greyedout = '&nbsp;'.cpg_display_help('f=index.htm&amp;base=64&amp;h='.urlencode(base64_encode(serialize($lang_groupmgr_php['explain_greyed_out_title']))).'&amp;t='.urlencode(base64_encode(serialize(sprintf($lang_groupmgr_php['explain_banned_greyed_out_text'],'<i>'.$group['group_name'].'</i>')))), '450', '300');
        } else {
            $disabled = '';
            $explain_greyedout = '';
        }
        echo <<< EOT
                <td class="$table_background" align="left" valign="top" style="white-space:nowrap">
                        <input type="hidden" name="group_id[]" value="{$group['group_id']}" />
                        <input type="text" name="group_name_{$group['group_id']}" value="{$group['group_name']}" class="textinput" size="18" style="font-size:80%;" />
                        $explain_greyedout
EOT;
        // show reset option if applicable
        if (UDB_INTEGRATION == 'coppermine' and isset($default_group_names[$group['group_id']])) {
            if ($group['group_name'] != $default_group_names[$group['group_id']] && $default_group_names[$group['group_id']] != '') {
                // we have a group here that doesn't have the default name
                print '<img src="images/flags/reset.gif" width="16" height="11" border="0" alt="" title="'.sprintf($lang_groupmgr_php['reset_to_default'], $default_group_names[$group['group_id']]).'" style="cursor:pointer" onclick="document.groupmanager.group_name_'.$group['group_id'].'.value=\''.$default_group_names[$group['group_id']].'\'" />';
            }
        }
        echo <<< EOT
                        <br />
                        {$lang_groupmgr_php['disk_quota']}: <input type="text" name="group_quota_{$group['group_id']}" value="{$group['group_quota']}" size="5" class="textinput" $disabled /> {$lang_byte_units[1]}
                <br /><br /><a href="usermgr.php?op=group_alb_access&amp;gid={$group['group_id']}" class="admin_menu">{$lang_groupmgr_php['group_assigned_album']}</a>
                                                                </td>
                <td class="$table_background" align="left" valign="top">
EOT;
        foreach ($field_list as $field_name) {
            $value = $group[$field_name];
            $yes_selected = ($value == 1) ? 'checked="checked"' : '';
            $no_selected = ($value == 0) ? 'checked="checked"' : '';
            if ($field_name=='can_rate_pictures'){
                echo $table_start.$tr_start.$td_start.$lang_groupmgr_php['rating'].$td_end;
            }
            elseif ($field_name=='can_send_ecards') {
                echo $tr_start.$td_start.$lang_groupmgr_php['ecards'].$td_end;
            }
            elseif ($field_name=='can_post_comments') {
                echo $tr_start.$td_start.$lang_groupmgr_php['comments'].$td_end;
            }
            elseif ($field_name=='can_upload_pictures') {
                echo $table_start.$tr_start.$td_start.$lang_groupmgr_php['allowed'].$td_end;
            }
            elseif ($field_name=='pub_upl_need_approval') {
                echo $tr_start.$td_start.$lang_groupmgr_php['approval'].$td_end;
            }
            elseif ($field_name=='can_create_albums') {
                echo $table_start.$tr_start.$td_start.$lang_groupmgr_php['allowed'].$td_end;
            }
            elseif ($field_name=='priv_upl_need_approval') {
                echo $tr_start.$td_start.$lang_groupmgr_php['approval'].$td_end;
            }
            if ($group['group_id'] == 3 && $CONFIG['allow_unlogged_access'] == 0) {
                $disabled_yes = 'disabled="disabled"';
                $disabled_no = 'disabled="disabled"';
            } elseif ($group['group_id'] == 4) {
                $disabled_yes = 'disabled="disabled"';
                $disabled_no = 'disabled="disabled"';
            } else {
                $disabled_yes = '';
                $disabled_no = '';
            }
            echo <<< EOT
            $td_start
            <input type="radio" id="{$field_name}_{$group['group_id']}1" name="{$field_name}_{$group['group_id']}" value="1" $yes_selected $disabled_yes /><label for="{$field_name}_{$group['group_id']}1" class="clickable_option">$lang_yes</label>
            $td_end
            $td_start
                        <input type="radio" id="{$field_name}_{$group['group_id']}0" name="{$field_name}_{$group['group_id']}" value="0" $no_selected $disabled_no /><label for="{$field_name}_{$group['group_id']}0" class="clickable_option">$lang_no</label>
                        $td_end
                        $tr_end

EOT;
    if ($field_name== 'can_post_comments' || $field_name== 'pub_upl_need_approval'){ echo $table_end . "</td><td class=\"$table_background\" align=\"left\" valign=\"top\">";}else{echo "<!--<br />-->";}
        }

     echo $table_end . "</td><td class=\"$table_background\" align=\"left\" valign=\"top\">";

     // Determine if yes or no should be the selected option in the form.
     $custom_upload_yes = ($group['custom_user_upload'] == 1) ? 'checked="checked"' : '';
     $custom_upload_no = ($group['custom_user_upload'] == 0) ? 'checked="checked"' : '';

     // Create select list.
    if ($group['group_id'] == 3 && $CONFIG['allow_unlogged_access'] == 0) {
        $disabled = 'disabled="disabled" style="background-color:InactiveCaptionText;color:GrayText"';
    } elseif ($group['group_id'] == 4) {
        $disabled = 'disabled="disabled" style="background-color:InactiveCaptionText;color:GrayText"';
    } else {
        $disabled = '';
    }
     echo $table_start;
     echo $tr_start.$td_start;
     echo <<< EOT
     {$lang_groupmgr_php['boxes_number']}
     $td_end
     $td_start
     <input type="radio" id="custom_user_upload_{$group['group_id']}1" name="custom_user_upload_{$group['group_id']}" value="1" $custom_upload_yes $disabled /><label for="custom_user_upload_{$group['group_id']}1" class="clickable_option">{$lang_groupmgr_php['variable']}</label>
     $td_end
     $td_start
     <input type="radio" id="custom_user_upload_{$group['group_id']}0" name="custom_user_upload_{$group['group_id']}" value="0" $custom_upload_no $disabled /><label for="custom_user_upload_{$group['group_id']}0" class="clickable_option">{$lang_groupmgr_php['fixed']}</label>
     $td_end
     $tr_end
EOT;
     //echo "<br />";

     // Create permissible number of file upload boxes box.
     echo $tr_start.'<td style="white-space:nowrap">';
     echo $lang_groupmgr_php['num_file_upload'].":";
     echo $td_end.$td_start;
     echo "<select name=\"num_file_upload_{$group['group_id']}\" class=\"listbox_lang\" $disabled>";
     for ($i = 0; $i <= 10; $i++) {
     echo "<option value=\"$i\"";
     if($group['num_file_upload']==$i){echo "selected=\"selected\"";}
     echo " >$i</option>";
     }
     echo "</select>";
     echo $td_end.$td_start.$td_end.$tr_end;
     //echo "<br />";

     // Create permissible number of URI upload boxes box.
     echo $tr_start.'<td style="white-space:nowrap">';
     echo $lang_groupmgr_php['num_URI_upload'].":";
     echo $td_end.$td_start;
     echo "<select name=\"num_URI_upload_{$group['group_id']}\" class=\"listbox_lang\" $disabled>";
     for ($i = 0; $i <= 10; $i++) {
     echo "<option value=\"$i\"";
     if($group['num_URI_upload']==$i){echo "selected=\"selected\"";}
     echo " >$i</option>";
     }
     echo "</select>";
     echo $td_end.$td_start.$td_end.$tr_end;
     echo $table_end;
     echo "</td>";


        echo <<< EOT
        </tr>

EOT;
    } // while
    mysql_free_result($result);
}

function get_post_var($var)
{
    global $lang_errors;

    if (!isset($_POST[$var])) cpg_die(CRITICAL_ERROR, $lang_errors['param_missing'] . " ($var)", __FILE__, __LINE__);
    return $_POST[$var];
}

function process_post_data()
{
    global $CONFIG;

    $field_list = array('group_name', 'group_quota', 'can_rate_pictures', 'can_send_ecards', 'can_post_comments', 'can_upload_pictures', 'pub_upl_need_approval', 'can_create_albums', 'priv_upl_need_approval', 'upload_form_config', 'custom_user_upload', 'num_file_upload', 'num_URI_upload');

    $group_id_array = get_post_var('group_id');
    foreach ($group_id_array as $key => $group_id) {
        $set_statment = '';
        foreach ($field_list as $field) {
            //if (!isset($_POST[$field . '_' . $group_id])) cpg_die(CRITICAL_ERROR, $lang_errors['param_missing'] . " ({$field}_{$group_id})", __FILE__, __LINE__);
            //set the 'upload_form_config' entry
            // case File upload boxes=1 and URI upload boxes=0 => single uploads (0)
            if ($_POST['num_file_upload_' . $group_id] == 1 && $_POST['num_URI_upload_' . $group_id] == 0) {
                $_POST['upload_form_config_' . $group_id] = 0;
            }
            // case File upload boxes>1 and URI upload boxes=0 => multi file uploads (1)
            if ($_POST['num_file_upload_' . $group_id] > 1 && $_POST['num_URI_upload_' . $group_id] == 0) {
                $_POST['upload_form_config_' . $group_id] = 1;
            }
            // case File upload boxes=0 and URI upload boxes>0 => multi uri uploads (2)
            if ($_POST['num_file_upload_' . $group_id] == 0 && $_POST['num_URI_upload_' . $group_id] > 0) {
                $_POST['upload_form_config_' . $group_id] = 2;
            }
            // case File upload boxes>0 and URI upload boxes>0 => File and URI uploads (3)
            if ($_POST['num_file_upload_' . $group_id] > 0 && $_POST['num_URI_upload_' . $group_id] > 0) {
                $_POST['upload_form_config_' . $group_id] = 3;
            }
            // case File upload boxes=0 and URI upload boxes=0 => input error, default to single uploads (0)
            if ($_POST['num_file_upload_' . $group_id] == 0 && $_POST['num_URI_upload_' . $group_id] == 0) {
                $_POST['upload_form_config_' . $group_id] = 0;
            }
            if ($field == 'group_name') {
                $set_statment .= $field . "='" . addslashes($_POST[$field . '_' . $group_id]) . "',";
            } else {
                $set_statment .= $field . "='" . (int)$_POST[$field . '_' . $group_id] . "',";
            }
        }
        $set_statment = substr($set_statment, 0, -1);
        cpg_db_query("UPDATE {$CONFIG['TABLE_USERGROUPS']} SET $set_statment WHERE group_id = '$group_id' LIMIT 1");
    }
}

if (isset($_POST) && count($_POST)) {
    if (isset($_POST['del_sel']) && isset($_POST['delete_group']) && is_array($_POST['delete_group'])) {
        foreach($_POST['delete_group'] as $group_id) {
            cpg_db_query("DELETE FROM {$CONFIG['TABLE_USERGROUPS']} WHERE group_id = '" . (int)$group_id . "' LIMIT 1");
            cpg_db_query("UPDATE {$CONFIG['TABLE_USERS']} SET user_group = '2' WHERE user_group = '" . (int)$group_id . "'");
        }
    } elseif (isset($_POST['new_group'])) {
        cpg_db_query("INSERT INTO {$CONFIG['TABLE_USERGROUPS']} (group_name) VALUES ('')");
    } elseif (isset($_POST['apply_modifs'])) {
        process_post_data();
    }
}

pageheader($lang_groupmgr_php['title']);
echo <<<EOT

<script language="javascript" type="text/javascript">
<!--//<![CDATA[
function confirmDel()
{
    return confirm("{$lang_groupmgr_php['confirm_del']}");
}

function selectAll(d,box) {
  var f = document.groupmanager;
  for (i = 0; i < f.length; i++) {
    //alert (f[i].name.indexOf(box));
    if (f[i].type == "checkbox" && f[i].name.indexOf(box) >= 0) {
      if (d.checked) {
        f[i].checked = true;
      } else {
        f[i].checked = false;
      }
    }
  }
  if (d.name == "checkAll") {
      document.getElementsByName('checkAll2')[0].checked = document.getElementsByName('checkAll')[0].checked;
  } else {
      document.getElementsByName('checkAll')[0].checked = document.getElementsByName('checkAll2')[0].checked;
  }
}

function selectall()
{
        for( var i = 0; i < document.groupmanager.elements.length; i++ )
        {
                var e = document.groupmanager.elements[i];
                if( ( e.name != 'allbox' ) && ( e.type == 'checkbox' ) )
                {
                        e.checked = document.groupmanager.allbox.checked;
                        if( document.groupmanager.allbox.checked )
                                select( e );
                        else
                                unselect( e );
                }
        }
}
//]]>-->
</script>

<form method="post" action="{$_SERVER['PHP_SELF']}" name="groupmanager">
EOT;

starttable('100%');
$help_group = '&nbsp;'.cpg_display_help('f=index.htm&amp;as=group_cp&amp;ae=group_cp_end&amp;top=1', '700', '500');
$help_permissions = '&nbsp;'.cpg_display_help('f=index.htm&amp;as=group_cp_permissions&amp;ae=group_cp_permissions_end&amp;top=1', '500', '200');
$help_personal = '&nbsp;'.cpg_display_help('f=index.htm&amp;as=group_cp_personal&amp;ae=group_cp_personal_end&amp;top=1', '500', '200');
$help_upload_method = '&nbsp;'.cpg_display_help('f=index.htm&amp;as=group_cp_upload_method&amp;ae=group_cp_upload_method_end&amp;top=1', '700', '400');
echo <<<EOT

        <tr style="white-space:nowrap">
                <td class="tableh1"><input type="checkbox" name="checkAll" onclick="selectAll(this,'delete_group');" class="checkbox" title="$lang_check_uncheck_all" /></td>
                <td class="tableh1"><b><span class="statlink">{$lang_groupmgr_php['group_name']}</span></b>$help_group</td>
                <td class="tableh1"><b><span class="statlink">{$lang_groupmgr_php['permissions']}</span></b>$help_permissions</td>
                <td class="tableh1"><b><span class="statlink">{$lang_groupmgr_php['public_albums']}</span></b></td>
                <td class="tableh1"><b><span class="statlink">{$lang_groupmgr_php['personal_gallery']}</span></b>$help_personal</td>
                <td class="tableh1"><b><span class="statlink">{$lang_groupmgr_php['upload_method']}</span></b>$help_upload_method</td>
        </tr>

EOT;

display_group_list();

if (UDB_INTEGRATION != 'coppermine') {
    echo <<<EOT
        <tr>
            <td colspan="14" align="center" class="tablef">
                        <input type="submit" name="apply_modifs" value="{$lang_groupmgr_php['apply']}" class="button" />&nbsp;&nbsp;&nbsp;
                </td>
        </tr>

EOT;
} else {
    echo <<<EOT
        <tr>
            <td class="tablef"><input type="checkbox" name="checkAll2" onClick="selectAll(this,'delete_group');" class="checkbox" title="$lang_check_uncheck_all" /></td>
            <td colspan="13" align="center" class="tablef">
                        <input type="submit" name="apply_modifs" value="{$lang_groupmgr_php['apply']}" class="button" />&nbsp;&nbsp;&nbsp;
                        <input type="submit" name="new_group" value="{$lang_groupmgr_php['create_new_group']}" class="button" />&nbsp;&nbsp;&nbsp;
EOT;
    if($custom_group_counter > 0) {
        print '                        <input type="submit" name="del_sel" value="'.$lang_groupmgr_php['del_groups'].'" onClick="return confirmDel()" class="button" />';
    }
    echo <<<EOT
                </td>

        </tr>

EOT;
}
endtable();
echo "</form>";
pagefooter();
ob_end_flush();

?>
