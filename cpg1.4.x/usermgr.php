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
  Coppermine version: 1.4.24
  $HeadURL$
  $Revision$
  $Author$
  $Date$
**********************************************/

define('IN_COPPERMINE', true);
define('USERMGR_PHP', true);
define('PROFILE_PHP', true);

require('include/init.inc.php');

$cpg_udb->view_users();

if (USER_ID !='') {
 if (GALLERY_ADMIN_MODE) {
  $lim_user = 0;
  $number_of_columns = 9;
 }
 elseif ($CONFIG['allow_memberlist']) {
  $lim_user = 1;
  $number_of_columns = 7;
  show_memberlist;
 }
 else {
  $lim_user = 2;
  cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);
 }
}
else {
 $lim_user = 3;
 cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);
}

function show_memberlist()
{
        cpg_db_query("DELETE FROM {$CONFIG['TABLE_USERS']} WHERE user_name = '' LIMIT 1");
        pageheader($lang_usermgr_php['title']);
        list_users();
        pagefooter();
        ob_end_flush();
}

function list_group_alb_access($group_id) {  //shows a list of albums a specific group can see. Categories are listed with albums for clarity
    global $CONFIG, $group_id, $aid;

    $query = "
      SELECT
        group_id, albums.aid AS aid, group_name, categories.name AS category, albums.title AS album
      FROM
        {$CONFIG['TABLE_USERGROUPS']} AS groups,
        {$CONFIG['TABLE_ALBUMS']} AS albums
      LEFT JOIN
        {$CONFIG['TABLE_CATEGORIES']} AS categories
      ON
        albums.category = categories.cid
      WHERE
        group_id = $group_id AND albums.visibility = groups.group_id
      ORDER BY
        category, album";
    $result = cpg_db_query($query);
    $albs = cpg_db_fetch_rowset($result);
    mysql_free_result($result);

    foreach($albs as $album) {
      $aid = $album['aid'];
      echo '
        <tr>
        <td>' . $album['category'] . '</td>
        <td>' . $album['album'] . '</td>
        <td>&nbsp;<a href="modifyalb.php?album=' . $album['aid'] . '"><img src="images/edit.gif" border="0" alt="" /></a></td>
        </tr>
        ';
   }
}

function list_groups_alb_access() //shows a list of albums each group can see. Categories are listed with albums for clarity
{
    global $CONFIG;
    global $lang_usermgr_php, $group_id;

    starttable(500, $lang_usermgr_php['groups_alb_access'], 3);

    $sql = "
      SELECT
        group_id, group_name, categories.name AS category, albums.title AS album
      FROM
        {$CONFIG['TABLE_USERGROUPS']} AS groups, {$CONFIG['TABLE_ALBUMS']} AS albums
      LEFT JOIN
        {$CONFIG['TABLE_CATEGORIES']} AS categories
      ON
        albums.category = categories.cid
      WHERE
        albums.visibility = groups.group_id
      GROUP BY
        group_name
      ORDER BY
        group_name, category, album
    ";

    $result = cpg_db_query($sql);
    $groups = cpg_db_fetch_rowset($result);
    mysql_free_result($result);

    echo "
    <td><b>{$lang_usermgr_php['category']}</b></td>
    <td><b>{$lang_usermgr_php['album']}</b></td>
    <td><b>{$lang_usermgr_php['modify']}</b></td>
    ";
    foreach($groups as $group) {
        $group_name = $group['group_name'];
        $group_id = $group['group_id'];
        echo '<tr><td colspan="3" class="tableh1_compact">' . $group_name . '</td></tr>';
        list_group_alb_access($group_id);
    }
    endtable();
}


function list_users($search = '')
{
    global $CONFIG, $cpg_udb; //, $PHP_SELF;
    global $lang_usermgr_php, $lang_byte_units, $register_date_fmt,$lang_check_uncheck_all;
    global $lim_user,$number_of_columns;
    global $USER_DATA;

    $number_of_columns_minus_one = $number_of_columns - 1;

    $sort_codes = array('name_a' => 'user_name ASC',
        'name_d' => 'user_name DESC',
        'group_a' => 'group_name ASC',
        'group_d' => 'group_name DESC',
        'reg_a' => 'user_regdate ASC',
        'reg_d' => 'user_regdate DESC',
        'pic_a' => 'pic_count ASC',
        'pic_d' => 'pic_count DESC',
        'disku_a' => 'disk_usage ASC',
        'disku_d' => 'disk_usage DESC',
        'lv_a' => 'user_lastvisit ASC',
        'lv_d' => 'user_lastvisit DESC',
        );

    $sort = (!isset($_GET['sort']) || !isset($sort_codes[$_GET['sort']])) ? 'reg_d' : $_GET['sort'];

    $tab_tmpl = array('left_text' => '<td width="100%" align="left" valign="middle" class="tableh1_compact" style="white-space: nowrap"><b>' . $lang_usermgr_php['u_user_on_p_pages'] . '</b></td>' . "\n",
        'tab_header' => '',
        'tab_trailer' => '',
        'active_tab' => '<td><img src="images/spacer.gif" width="1" height="1" border="0" alt="" /></td>' . "\n" . '<td align="center" valign="middle" class="tableb_compact"><b>%d</b></td>',
        'inactive_tab' => '<td><img src="images/spacer.gif" width="1" height="1" border="0" alt="" /></td>' . "\n" . '<td align="center" valign="middle" class="navmenu"><a href="' . $_SERVER['PHP_SELF'] . '?page=%d&amp;sort=' . $sort . '"<b>%d</b></a></td>' . "\n"
        );

    $makereadonly = ($CONFIG['bridge_enable']) ? 'style="display:none;" disabled="disabled" ':'';

    $user_count = $cpg_udb->get_user_count();

    if (!$user_count) cpg_die(CRITICAL_ERROR, $lang_usermgr_php['err_no_users'], __FILE__, __LINE__);

    $user_per_page = 25;
    $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
    $lower_limit = ($page-1) * $user_per_page;
    $total_pages = ceil($user_count / $user_per_page);


    /*
   * Commented out to support bridge files -Omni
   *
  $sql = "SELECT user_id, user_name, user_email, UNIX_TIMESTAMP(user_regdate) as user_regdate, UNIX_TIMESTAMP(user_lastvisit) as user_lastvisit, user_active, ".
           "COUNT(pid) as pic_count, ROUND(SUM(total_filesize)/1024) as disk_usage, group_name, group_quota ".
           "FROM {$CONFIG['TABLE_USERS']} AS u ".
           "INNER JOIN {$CONFIG['TABLE_USERGROUPS']} AS g ON user_group = group_id ".
           "LEFT JOIN {$CONFIG['TABLE_PICTURES']} AS p ON p.owner_id = u.user_id ".
           $search.
           "GROUP BY user_id " . "ORDER BY " . $sort_codes[$sort] . " ".
           "LIMIT $lower_limit, $user_per_page";
    */

    $users = $cpg_udb->get_users(
                                  array(
                                        'users_per_page' => $user_per_page,
                                        'lower_limit' => $lower_limit,
                                        'search' => $search,
                                        'sort' => $sort
                                       )
                                  );


    /*
   * Commented out to support bridge files -Omni
   *
   */
    //$result = cpg_db_query($sql);

    $tabs = create_tabs($user_count, $page, $total_pages, $tab_tmpl);

    $lb = "<select name=\"album_listbox\" class=\"listbox\" onChange=\"if(this.options[this.selectedIndex].value) window.location.href='{$_SERVER['PHP_SELF']}?page=$page&amp;sort='+this.options[this.selectedIndex].value;\">\n";
    foreach($sort_codes as $key => $value) {
        $selected = ($key == $sort) ? "SELECTED" : "";
        $lb .= "        <option value=\"" . $key . "\" $selected>" . $lang_usermgr_php[$key] . "</option>\n";
    }
    $lb .= "</select>\n";

echo <<<EOT
<script type="text/javascript" language="javascript">
<!--
function selectAll(d,box) {
  var f = document.editForm;
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

function selectaction(d,box) {
// check if an action has been selected
  var action = document.editForm.action.value;
  if (action == '') {
    return false;
  }
// check if at least one user has been selected
  var checked_counter = 0;
  var checked_string = '';
  var f = document.editForm;
  for (i = 0; i < f.length; i++) {
    if (f[i].type == "checkbox" && f[i].name.indexOf(box) >= 0) {
      if (f[i].checked) {
        checked_counter = checked_counter + 1;
        if (checked_string == '') {
          checked_string = f[i].name;
        } else {
          checked_string = checked_string + ',' + f[i].name;
        }
      }
    }
  }
  if (checked_counter == 0) {
    document.editForm.action.value = '';
    alert('{$lang_usermgr_php['alert_no_selection']}');
    return false;
  }
  document.editForm.id.value = checked_string;
  document.editForm.new_password.style.display = "none";
  document.editForm.group.style.display = "none";
  document.editForm.go.style.display = "none";
  document.editForm.delete_files.style.display = "none";
  document.editForm.delete_comments.style.display = "none";
  switch(document.editForm.action.value) {
    case "delete":
      document.editForm.delete_files.style.display = "inline";
      document.editForm.delete_comments.style.display = "inline";
      document.editForm.go.style.display = "inline";
    break;
    case "reset_password":
      document.editForm.new_password.style.display = "inline";
      document.editForm.go.style.display = "inline";
    break;
    case "change_group":
      document.editForm.new_password.value = '';
      document.editForm.group.style.display = "inline";
      if (document.editForm.group.value != '') {
      document.editForm.submit();
      }
    break;
    case "add_group":
      document.editForm.new_password.value = '';
      document.editForm.group.style.display = "inline";
      if (document.editForm.group.value != '') {
      document.editForm.submit();
      }
    break;
    default:
      document.editForm.new_password.value = '';
      document.editForm.submit();
    break;
  }
}
-->
</script>
EOT;

    starttable('100%');
        if (isset($_POST['username'])){
            $search_filter = '<td class="tableh1" align="center">'.$lang_usermgr_php['search_result'].'&laquo;'.$_POST['username'].'&raquo;</td>';
        } else {
            $search_filter = '';
        }
        $help = '&nbsp;'.cpg_display_help('f=index.htm&amp;as=user_cp&amp;ae=user_cp_end&amp;top=1', '650', '500');
    echo <<<EOT
        <tr>
            <td colspan="$number_of_columns" class="tableh1">
                <table border="0" cellspacing="0" cellpadding="0" width="100%">
                    <tr>
                        <td class="tableh1">
EOT;
if (!$lim_user) {
    echo '<h2>'.$lang_usermgr_php['user_manager'].$help.'</h2>';
} else {
    echo '<h2>'.$lang_usermgr_php['memberlist'].'</h2>';
}
echo <<<EOT
                        </td>
                        $search_filter
                        <td class="tableh1" align="right"><b>{$lang_usermgr_php['sort_by']}</b>:
                        $lb</td>
                    </tr>
                </table>
            </td>
        </tr>
EOT;

  // Accept header addons
  echo CPGPluginAPI::filter('usermgr_header','');

    print '<form method="get" action="delete.php" name="editForm">'."\n";
    print '<input type="hidden" name="id" value="" />';
    if (!$lim_user) {
     echo <<< EOT

        <tr>
                <td class="tableh1" align="center"><input type="checkbox" {$makereadonly}name="checkAll" onClick="selectAll(this,'u');" class="checkbox" title="$lang_check_uncheck_all" /></td>
                <td class="tableh1" colspan="2"><b><span class="statlink">{$lang_usermgr_php['name']}</span></b>
                <a href="{$_SERVER['PHP_SELF']}?page=$page&amp;sort=name_a"><img src="images/ascending.gif" width="9" height="9" border="0" alt="" title="{$lang_usermgr_php['name_a']}" /></a>
                <a href="{$_SERVER['PHP_SELF']}?page=$page&amp;sort=name_d"><img src="images/descending.gif" width="9" height="9" border="0" alt="" title="{$lang_usermgr_php['name_d']}" /></a>
                </td>
                <td class="tableh1"><b><a href="groupmgr.php" class="statlink">{$lang_usermgr_php['group']}</a></b>
                <a href="{$_SERVER['PHP_SELF']}?page=$page&amp;sort=group_a"><img src="images/ascending.gif" width="9" height="9" border="0" alt="" title="{$lang_usermgr_php['group_a']}" /></a>
                <a href="{$_SERVER['PHP_SELF']}?page=$page&amp;sort=group_d"><img src="images/descending.gif" width="9" height="9" border="0" alt="" title="{$lang_usermgr_php['group_d']}" /></a>
                </td>
                <td class="tableh1"><b><span class="statlink">{$lang_usermgr_php['registered_on']}</span></b>
                <a href="{$_SERVER['PHP_SELF']}?page=$page&amp;sort=reg_a"><img src="images/ascending.gif" width="9" height="9" border="0" alt="" title="{$lang_usermgr_php['reg_a']}" /></a>
                <a href="{$_SERVER['PHP_SELF']}?page=$page&amp;sort=reg_d"><img src="images/descending.gif" width="9" height="9" border="0" alt="" title="{$lang_usermgr_php['reg_d']}" /></a>
                </td>
                <td class="tableh1"><b><span class="statlink">{$lang_usermgr_php['last_visit']}</span></b>
                <a href="{$_SERVER['PHP_SELF']}?page=$page&amp;sort=lv_a"><img src="images/ascending.gif" width="9" height="9" border="0" alt="" title="{$lang_usermgr_php['lv_a']}" /></a>
                <a href="{$_SERVER['PHP_SELF']}?page=$page&amp;sort=lv_d"><img src="images/descending.gif" width="9" height="9" border="0" alt="" title="{$lang_usermgr_php['lv_d']}" /></a>
                </td>
                <td class="tableh1" align="center"><b><span class="statlink">{$lang_usermgr_php['pictures']}</span></b>
                <a href="{$_SERVER['PHP_SELF']}?page=$page&amp;sort=pic_a"><img src="images/ascending.gif" width="9" height="9" border="0" alt="" title="{$lang_usermgr_php['pic_a']}" /></a>
                <a href="{$_SERVER['PHP_SELF']}?page=$page&amp;sort=pic_d"><img src="images/descending.gif" width="9" height="9" border="0" alt="" title="{$lang_usermgr_php['pic_d']}" /></a>
                </td>
                <td class="tableh1" align="center"><b><span class="statlink">{$lang_usermgr_php['disk_space_used']}</span></b>
                <a href="{$_SERVER['PHP_SELF']}?page=$page&amp;sort=disku_a"><img src="images/ascending.gif" width="9" height="9" border="0" alt="" title="{$lang_usermgr_php['disku_a']}" /></a>
                <a href="{$_SERVER['PHP_SELF']}?page=$page&amp;sort=disku_d"><img src="images/descending.gif" width="9" height="9" border="0" alt="" title="{$lang_usermgr_php['disku_d']}" /></a>
                </td>
                <td class="tableh1" align="center"><b><span class="statlink">{$lang_usermgr_php['disk_space_quota']}</span></b>
                </td>
        </tr>
EOT;
    }
    else {
     echo <<< EOT

        <tr>
                <td class="tableh1"><b><span class="statlink">{$lang_usermgr_php['name']}</span></b></td>
                <td class="tableh1"><b><span class="statlink">{$lang_usermgr_php['group']}</span></b></td>
                <td class="tableh1"><b><span class="statlink">{$lang_usermgr_php['registered_on']}</span></b></td>
                <td class="tableh1"><b><span class="statlink">{$lang_usermgr_php['last_visit']}</span></b></td>
                <td class="tableh1" align="center"><b><span class="statlink">{$lang_usermgr_php['pictures']}</span></b></td>
                <td class="tableh1" align="center"><b><span class="statlink">{$lang_usermgr_php['disk_space_used']}</span></b></td>
                <td class="tableh1" align="center"><b><span class="statlink">{$lang_usermgr_php['disk_space_quota']}</span></b></td>
        </tr>
EOT;
    }


    foreach ($users as $user) {
        if ($user['disk_usage'] == '') {
            $user['disk_usage'] = 0;
        }
        if ($user['user_active'] == 'NO') {
            $user['group_name'] = '<i>' . $lang_usermgr_php['inactive'] . '</i>';
        }
        $user['user_regdate'] = localised_date($user['user_regdate'], $register_date_fmt);
        if ($user['user_lastvisit']) {
            $user['user_lastvisit'] = localised_date($user['user_lastvisit'], $register_date_fmt);
        }
        else {
            $user['user_lastvisit'] = $lang_usermgr_php['never'];
        }

        $usr_link = '<a href="profile.php?uid=' . $user['user_id'] . '">' . $user['user_name'];
        if ($user['pic_count']) {
            $usr_link .= '</a> (<a href="thumbnails.php?album=lastupby&uid=' . $user['user_id'] . '">' . $lang_usermgr_php['latest_upload'] . '</a>)';
        } else {
            $usr_link .= '</a>';
        }


        if (!$lim_user) {
                if ($user['user_id'] == $USER_DATA['user_id']) {
                    $profile_link = 'profile.php?op=edit_profile';
                    $checkbox_html = '';
                } else {
                    $profile_link = $_SERVER['PHP_SELF'].'?op=edit&user_id='.$user['user_id'];
                    $checkbox_html = '<input name="u'.$user['user_id'].'" '.$makereadonly.'type="checkbox" value="" class="checkbox" />';
                }
                echo <<< EOT
        <tr>
                <td class="tableb" align="center">$checkbox_html</td>
                <td class="tableb">$usr_link</td>
                <td class="tableb" align="center">
                    <button type="button" class="button" {$makereadonly}onclick="window.location.href ='$profile_link';">
                        <img src="images/edit.gif" width="16" height="16" border="0" alt="" title="{$lang_usermgr_php['edit']}" />
                    </button>
                </td>
                <td class="tableb">{$user['group_name']}</td>
                <td class="tableb">{$user['user_regdate']}</td>
                <td class="tableb">{$user['user_lastvisit']}</td>
                <td class="tableb" align="right">{$user['pic_count']}</td>
                <td class="tableb" align="right">{$user['disk_usage']}&nbsp;{$lang_byte_units[1]}</td>
                <td class="tableb" align="right">{$user['group_quota']}&nbsp;{$lang_byte_units[1]}</td>
        </tr>

EOT;
        } else {
                  echo <<< EOT
        <tr>
                <td class="tableb">$usr_link</td>
                <td class="tableb">{$user['group_name']}</td>
                <td class="tableb">{$user['user_regdate']}</td>
                <td class="tableb">{$user['user_lastvisit']}</td>
                <td class="tableb" align="right">{$user['pic_count']}</td>
                <td class="tableb" align="right">{$user['disk_usage']}&nbsp;{$lang_byte_units[1]}</td>
                <td class="tableb" align="right">{$user['group_quota']}&nbsp;{$lang_byte_units[1]}</td>
        </tr>

EOT;
        }

    } // while
    //mysql_free_result($result);



    if (!$lim_user) {
        if (isset($_POST['username'])){
            $search_string_default = 'value="'.$_POST['username'].'"';
        } else {
            $search_string_default = 'value="'.$lang_usermgr_php['search'].'" onfocus="this.value=\'\'"';
        }
            $help = cpg_display_help('f=index.htm&as=user_cp_search&ae=user_cp_search_end&top=1', '400', '150');
        echo <<<EOT
        <tr>
                <td class="tablef" align="center"><input type="checkbox" name="checkAll2" {$makereadonly}onClick="selectAll(this,'u');" class="checkbox" title="$lang_check_uncheck_all" /></td>
                <td colspan="$number_of_columns_minus_one"  class="tablef">
                <table cellpadding="0" cellspacing="0" width="100%" border="0">
                <tr>
                        <td align="left">
                            <select name="action" size="1" class="listbox" {$makereadonly}onchange="return selectaction(this,'u');">
                                <option value="" checked="checked">{$lang_usermgr_php['with_selected']}</option>
                                <option value="delete">{$lang_usermgr_php['delete']}</option>
                                <option value="activate">{$lang_usermgr_php['activate']}</option>
                                <option value="deactivate">{$lang_usermgr_php['deactivate']}</option>
                                <option value="reset_password">{$lang_usermgr_php['reset_password']}</option>
                                <option value="change_group">{$lang_usermgr_php['change_primary_membergroup']}</option>
                                <option value="add_group">{$lang_usermgr_php['add_secondary_membergroup']}</option>
                            </select>
                            <input type="hidden" name="what" value="user"/>
                              <input type="text" name="new_password" value="{$lang_usermgr_php['password']}" size="8" maxlength="25" class="textinput" onfocus="this.value='';" style="display:none" />
                              <select name="group" size="1" class="listbox" style="display:none" onchange="return selectaction(this,'u');">
                                  <option value="">{$lang_usermgr_php['select_group']}</option>

EOT;
        $sql = "SELECT group_id, group_name FROM {$CONFIG['TABLE_USERGROUPS']} ORDER BY group_name";
        $result = cpg_db_query($sql);
        $group_list = cpg_db_fetch_rowset($result);
        mysql_free_result($result);

        if (isset($element[1])) {
            $sel_group = $user_data[$element[1]];
        } else {
            $sel_group = '';
        }
        $user_group_list = ($user_data['user_group_list'] == '') ? ',' . $sel_group . ',' : ',' . $user_data['user_group_list'] . ',' . $sel_group . ',';


        foreach($group_list as $group) {
            print '                                  <option value="' . $group['group_id'] . '"' . ($group['group_id'] == $sel_group ? ' selected' : '') . '>' . $group['group_name'] . "</option>\n";
        }

    echo <<<EOT
                              </select>
                            <select name="delete_files" size="1" class="listbox" style="display:none">
                                <option value="no">{$lang_usermgr_php['delete_files_no']}</option>
                                <option value="yes">{$lang_usermgr_php['delete_files_yes']}</option>
                            </select>
                            <select name="delete_comments" size="1" class="listbox" style="display:none">
                                <option value="no">{$lang_usermgr_php['delete_comments_no']}</option>
                                <option value="yes">{$lang_usermgr_php['delete_comments_yes']}</option>
                            </select>
                            <input type="submit" name="go" value="{$lang_usermgr_php['submit']}" class="button" style="display:none" />
                        </td>
                        <td align="center">
                        <a href="{$_SERVER['PHP_SELF']}?op=new_user" {$makereadonly}class="admin_menu">{$lang_usermgr_php['create_new_user']}</a>
                        </td>
                        </form>
                </tr>
                </table>
                </td>
        </tr>
        <tr>
            <td colspan="$number_of_columns"  class="tablef" align="center" valign="middle">
                <form method="post" action="{$_SERVER['PHP_SELF']}" name="searchUser">
                <input type="text" name="username" class="textinput" $search_string_default />
                <input type="submit" name="user_search" value="{$lang_usermgr_php['search_submit']}" class="button" />
                $help
                </form>
            </td>
        </tr>
EOT;
    }

  // Accept footer addons for the user manager
  echo CPGPluginAPI::filter('usermgr_footer','');

    echo <<<EOT
        <tr>
                <td colspan="$number_of_columns" style="padding: 0px;">
                        <table width="100%" cellspacing="0" cellpadding="0">
                                <tr>
                                        $tabs
                                </tr>
                        </table>
                </td>
        </tr>

EOT;


    endtable();
}

function edit_user($user_id)
{
    global $CONFIG; //, $PHP_SELF;
    global $lang_usermgr_php, $lang_yes, $lang_no;

    $form_data = array(
        array('input', 'user_name', $lang_usermgr_php['name'], 25),
        array('password', 'user_password', $lang_usermgr_php['password'], 25),
        array('yesno', 'user_active', $lang_usermgr_php['user_active']),
        array('group_list', 'user_group', $lang_usermgr_php['user_group']),
        array('input', 'user_email', $lang_usermgr_php['user_email'], 255),
        array('input', 'user_profile1', $CONFIG['user_profile1_name'], 255),
        array('input', 'user_profile2', $CONFIG['user_profile2_name'], 255),
        array('input', 'user_profile3', $CONFIG['user_profile3_name'], 255),
        array('input', 'user_profile4', $CONFIG['user_profile4_name'], 255),
        array('input', 'user_profile5', $CONFIG['user_profile5_name'], 255),
        array('textarea', 'user_profile6', $CONFIG['user_profile6_name'], 255)
        );

    $sql = "SELECT * FROM {$CONFIG['TABLE_USERS']} WHERE user_id = '$user_id'";
    $result = cpg_db_query($sql);
    if (!mysql_num_rows($result)) cpg_die(CRITICAL_ERROR, $lang_usermgr_php['err_unknown_user'], __FILE__, __LINE__);
    $user_data = mysql_fetch_array($result);
    mysql_free_result($result);

    starttable(500, $lang_usermgr_php['modify_user'], 2);
    echo <<<EOT
        <form method="post" action="{$_SERVER['PHP_SELF']}?op=update&user_id=$user_id">

EOT;

    foreach ($form_data as $element) switch ($element[0]) {
        case 'input' :
            $user_data[$element[1]] = $user_data[$element[1]];
            if ($element[2]) echo <<<EOT
        <tr>
            <td width="40%" class="tableb">
                        {$element[2]}
        </td>
        <td width="60%" class="tableb" valign="top">
                <input type="text" style="width: 100%" name="{$element[1]}" maxlength="{$element[3]}" value="{$user_data[$element[1]]}" class="textinput" />
                </td>
        </tr>


EOT;
            break;

        case 'textarea' :

           $value = $user_data[$element[1]];

           if ($element[2]) echo <<<EOT
        <tr>
            <td width="40%" class="tableb"  height="25">
                        {$element[2]}
        </td>
        <td width="60%" class="tableb" valign="top">
                <textarea name="{$element[1]}" rows="7" class="textinput" style="width: 100%">$value</textarea>
                </td>
        </tr>


EOT;
            break;

        case 'password' :
            echo <<<EOT
        <tr>
            <td width="40%" class="tableb">
                        {$element[2]}
        </td>
        <td width="60%" class="tableb" valign="top">
                <input type="input" style="width: 100%" name="{$element[1]}" maxlength="{$element[3]}" value="" class="textinput" />
                </td>
        </tr>

EOT;
            break;

        case 'yesno' :
            $value = $user_data[$element[1]];
            $yes_selected = ($value == 'YES') ? 'checked="checked"' : '';
            $no_selected = ($value == 'NO') ? 'checked="checked"' : '';
            //$yes_selected = ($value == 'YES') ? 'selected' : '';
            //$no_selected = ($value == 'NO') ? 'selected' : '';
            echo <<< EOT
        <tr>
            <td class="tableb">
                        {$element[2]}
        </td>
                <td class="tableb">
                    <input type="radio" id="yes" name="{$element[1]}" value="YES" $yes_selected /><label for="yes" class="clickable_option">$lang_yes</label>
                    &nbsp;&nbsp;
                    <input type="radio" id="no" name="{$element[1]}" value="NO" $no_selected /><label for="no" class="clickable_option">$lang_no</label>
                </td>
        </tr>

EOT;
            break;

        case 'group_list' :
            $sql = "SELECT group_id, group_name FROM {$CONFIG['TABLE_USERGROUPS']} ORDER BY group_name";
            $result = cpg_db_query($sql);
            $group_list = cpg_db_fetch_rowset($result);
            mysql_free_result($result);

            $sel_group = $user_data[$element[1]];
            $user_group_list = ($user_data['user_group_list'] == '') ? ',' . $sel_group . ',' : ',' . $user_data['user_group_list'] . ',' . $sel_group . ',';

            echo <<<EOT
        <tr>
            <td class="tableb">
                        {$element[2]}
        </td>
        <td class="tableb" valign="top">
                <select name="{$element[1]}" class="listbox">

EOT;
            $group_cb = '';
            foreach($group_list as $group) {
                echo '                        <option value="' . $group['group_id'] . '"' . ($group['group_id'] == $sel_group ? ' selected' : '') . '>' . $group['group_name'] . "</option>\n";

                /**
                 * If the group is registered, don't show it here as all the users must be a member of this group
                 * Also there is no point in displaying the 'Banned' group as checking banned here does not ban the user.
                 * Also remove Administrators group from secondary list as it won't give a user admin access.
                 */
                if ($group['group_id'] != 1 && $group['group_id'] != 2 && $group['group_id'] != 4) {
                  $checked = strpos(' ' . $user_group_list, ',' . $group['group_id'] . ',') ? 'checked' : '';
                  $group_cb .= '<input name="group_list[]" type="checkbox" value="' . $group['group_id'] . '" ' . $checked . ' />' . $group['group_name'] . "<br />\n";
                }
            }
            echo <<<EOT
                        </select><br />
                        $group_cb
                        <br />
                        <a href="usermgr.php?op=groups_alb_access" class="admin_menu">{$lang_usermgr_php['groups_alb_access']}</a>

          </td>
        </tr>

EOT;
            break;

        default:
            cpg_die(CRITICAL_ERROR, 'Invalid action for form creation ' . $element[0], __FILE__, __LINE__);
    }

    echo <<<EOT
        <tr>
                <td colspan="2" class="tableh2">
                        <b>{$lang_usermgr_php['notes']}</b>
                </td>
        </tr>
        <tr>
                <td colspan="2" class="tableb">
                        <ul>
                        {$lang_usermgr_php['note_list']}
                        </ul>
                </td>
        </tr>
        <tr>
                <td colspan="2" align="center" class="tablef">
                        <input type="submit" value="{$lang_usermgr_php['modify_user']}" class="button" />
                </td>
                </form>
        </tr>

EOT;

    endtable();
}

function update_user($user_id)
{
    global $CONFIG; //, $PHP_SELF;
    global $lang_usermgr_php, $lang_register_php;

    $user_name = addslashes(trim($_POST['user_name']));
    $user_password = addslashes(trim($_POST['user_password']));
    $user_email = addslashes(trim($_POST['user_email']));
    $profile1 = addslashes($_POST['user_profile1']);
    $profile2 = addslashes($_POST['user_profile2']);
    $profile3 = addslashes($_POST['user_profile3']);
    $profile4 = addslashes($_POST['user_profile4']);
    $profile5 = addslashes($_POST['user_profile5']);
    $profile6 = addslashes($_POST['user_profile6']);
    $user_active = $_POST['user_active'];
    $user_group = $_POST['user_group'];
    $group_list = isset($_POST['group_list']) ? $_POST['group_list'] : '';

    $sql = "SELECT user_id " . "FROM {$CONFIG['TABLE_USERS']} " . "WHERE user_name = '" . addslashes($user_name) . "' AND user_id != $user_id";
    $result = cpg_db_query($sql);

    if (mysql_num_rows($result)) {
        cpg_die(ERROR, $lang_register_php['err_user_exists'], __FILE__, __LINE__);
        return false;
    }
    mysql_free_result($result);

    if (utf_strlen($user_name) < 2) cpg_die(ERROR, $lang_register_php['err_uname_short'], __FILE__, __LINE__);
        if ($user_password && utf_strlen($user_password) < 2) cpg_die(ERROR, $lang_register_php['err_password_short'], __FILE__, __LINE__);

    if (is_array($group_list)) {
        $user_group_list = '';
        foreach($group_list as $group) $user_group_list .= ($group != $user_group) ? $group . ',' : '';
        $user_group_list = substr($user_group_list, 0, -1);
    } else {
        $user_group_list = '';
    }

    $sql_update = "UPDATE {$CONFIG['TABLE_USERS']} SET " .
                  "user_name = '$user_name', " .
          "user_email = '$user_email', " .
          "user_active = '$user_active', " .
          "user_group = '$user_group', " .
          "user_profile1 = '$profile1', " .
          "user_profile2 = '$profile2', " .
          "user_profile3 = '$profile3', " .
          "user_profile4 = '$profile4', " .
          "user_profile5 = '$profile5', " .
          "user_profile6 = '$profile6', " .
          "user_group_list = '$user_group_list'";

    if (!empty($user_password)) $sql_update .= ", user_password = '".(($CONFIG['enable_encrypted_passwords'])?md5($user_password):$user_password)."'";
    $sql_update .= " WHERE user_id = '$user_id'";

    cpg_db_query($sql_update);
    
    // Update pictures' owner name
    cpg_db_query("UPDATE {$CONFIG['TABLE_PICTURES']} SET owner_name = '$user_name' WHERE owner_id = $user_id");

    // Update comments' author name
    cpg_db_query("UPDATE {$CONFIG['TABLE_COMMENTS']} SET msg_author = '$user_name' WHERE author_id = $user_id");    
}

$op = (GALLERY_ADMIN_MODE && isset($_GET['op'])) ? $_GET['op'] : '';

switch ($op) {
    case 'edit' :
        $user_id = isset($_GET['user_id']) ? (int)$_GET['user_id'] : -1;

        if (USER_ID == $user_id) cpg_die(ERROR, $lang_usermgr_php['err_edit_self'], __FILE__, __LINE__);
    $cpg_udb->edit_users($user_id);

        pageheader($lang_usermgr_php['title']);
        edit_user($user_id);
        pagefooter();
        ob_end_flush();
        break;

    case 'update' :
        $user_id = isset($_GET['user_id']) ? (int)$_GET['user_id'] : -1;
    $cpg_udb->edit_users($user_id);

        update_user($user_id);

        cpg_db_query("DELETE FROM {$CONFIG['TABLE_USERS']} WHERE user_name = '' LIMIT 1");

        pageheader($lang_usermgr_php['title']);
        list_users();
        pagefooter();
        ob_end_flush();
        break;

    case 'new_user' :
        $cpg_udb->edit_users();
        cpg_db_query("INSERT INTO {$CONFIG['TABLE_USERS']}(user_regdate, user_active, user_profile6) VALUES (NOW(), 'YES', '')");

        $user_id = mysql_insert_id();

        pageheader($lang_usermgr_php['title']);
        edit_user($user_id);
        pagefooter();
        ob_end_flush();
        break;

    case 'groups_alb_access' : //show what albums user groups can see
        pageheader($lang_usermgr_php['groups_alb_access']);
        list_groups_alb_access();
        pagefooter();
        ob_end_flush();
        break;

    case 'group_alb_access' : //show what albums specific group can see
        if (isset($_GET['gid'])) {
          $group_id = $_GET['gid'];
        }
        $sql = "
          SELECT group_name
          FROM {$CONFIG['TABLE_USERGROUPS']} AS groups, {$CONFIG['TABLE_ALBUMS']} AS albums
          WHERE group_id = $group_id AND albums.visibility = groups.group_id
        ";
        $result = cpg_db_query($sql);
        $group = mysql_fetch_array($result);

        if (!mysql_num_rows($result)) {
          pageheader($lang_usermgr_php['group_no_access']);
          msg_box($lang_usermgr_php['notice'], $lang_usermgr_php['group_no_access']);
        } else {
            mysql_free_result($result);
            $group_name = $group['group_name'];
            pageheader(sprintf($lang_usermgr_php['group_can_access'], $group_name));
            starttable(500, sprintf($lang_usermgr_php['group_can_access'], $group_name), 3);
            echo "
            <td><b>{$lang_usermgr_php['category']}</b></td>
            <td><b>{$lang_usermgr_php['album']}</b></td>
            <td><b>{$lang_usermgr_php['modify']}</b></td>
            ";

            list_group_alb_access($group_id);
            endtable();
        }
        pagefooter();
        ob_end_flush();
        break;

    default :
        cpg_db_query("DELETE FROM {$CONFIG['TABLE_USERS']} WHERE user_name = '' LIMIT 1");

        pageheader($lang_usermgr_php['title']);
        if (isset($_POST['username'])){
                $name = addslashes($_POST['username']);
                $wildcards = array("*" => "%", "?" => "_");
                $search = strtr($name, $wildcards);
        }
        if (isset($search) == false) {$search = '';}
        list_users($search);
        pagefooter();
        ob_end_flush();
        break;
}

?>
