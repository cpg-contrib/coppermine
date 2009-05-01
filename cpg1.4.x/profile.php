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
  Coppermine version: 1.4.23
  $HeadURL$
  $Revision$
  $Author$
  $Date$
**********************************************/

define('IN_COPPERMINE', true);
define('PROFILE_PHP', true);

require('include/init.inc.php');
include("include/smilies.inc.php");

//if (defined('UDB_INTEGRATION')){
  $cpg_udb->view_profile($_GET['uid']);
//}

$edit_profile_form_param = array(
    array('text', 'username', $lang_register_php['username']),
    array('text', 'reg_date', $lang_register_php['reg_date']),
    array('text', 'group', $lang_register_php['group']),
    array('text', 'email', $lang_register_php['email'],255),
    array('text', 'disk_usage', $lang_register_php['disk_usage']),
        array('input', 'user_profile1', $CONFIG['user_profile1_name'], 255),
        array('input', 'user_profile2', $CONFIG['user_profile2_name'], 255),
        array('input', 'user_profile3', $CONFIG['user_profile3_name'], 255),
        array('input', 'user_profile4', $CONFIG['user_profile4_name'], 255),
        array('input', 'user_profile5', $CONFIG['user_profile5_name'], 255),
        array('textarea', 'user_profile6', $CONFIG['user_profile6_name'], 255),
    );


if ($CONFIG['allow_email_change'] == 1) {
  $edit_profile_form_param[3][0]='input';
}

        // profile mod test
$display_profile_form_param = array(
    array('text', 'username', $lang_register_php['username']),
    array('text', 'reg_date', $lang_register_php['reg_date']),
    array('text', 'group', $lang_register_php['group']),
    array('text', 'user_profile1', $CONFIG['user_profile1_name']),
    array('text', 'user_profile2', $CONFIG['user_profile2_name']),
    array('text', 'user_profile3', $CONFIG['user_profile3_name']),
    array('text', 'user_profile4', $CONFIG['user_profile4_name']),
    array('text', 'user_profile5', $CONFIG['user_profile5_name']),
    array('text', 'user_profile6', $CONFIG['user_profile6_name']),
    array('text', 'pic_count', $lang_register_php['pic_count']),
    array('thumb', 'user_thumb'),
    );




$change_password_form_param = array(
    array('password', 'current_pass', $lang_register_php['current_pass'], 25),
    array('password', 'new_pass', $lang_register_php['new_pass'], 25),
    array('password', 'new_pass_again', $lang_register_php['new_pass_again'], 25),
    );

function make_form($form_param, $form_data)
{
    global $CONFIG; //, $PHP_SELF;
    global $lang_register_php;

    foreach ($form_param as $element) switch ($element[0]) {
        case 'label' :
            echo <<<EOT
    <tr>
        <td colspan="2" class="tableh2">
            <b>{$element[1]}<b>
        </td>
    </tr>

EOT;
            break;

        case 'text' :
            if ($form_data[$element[1]] == '') break;
            echo <<<EOT
    <tr>
        <td width="40%" class="tableb" height="25">
            {$element[2]}
        </td>
        <td width="60%" class="tableb">
            {$form_data[$element[1]]}
        </td>
    </tr>

EOT;

            break;
        case 'input' :
            $value = $form_data[$element[1]];

        if ($element[2]) echo <<<EOT
    <tr>
        <td width="40%" class="tableb"  height="25">
            {$element[2]}
        </td>
        <td width="60%" class="tableb" valign="top">
            <input type="text" style="width: 100%" name="{$element[1]}" maxlength="{$element[3]}" value="$value" class="textinput" />
        </td>
    </tr>


EOT;
            break;

        case 'textarea' :
            $value = $form_data[$element[1]];

           if ($element[2]) echo <<<EOT
        <tr>
            <td width="40%" class="tableb"  height="25">
                        {$element[2]}
        </td>
        <td width="60%" class="tableb" valign="top">
                <textarea name="{$element[1]}" rows="7" cols="40" class="textinput" style="width: 100%">$value</textarea>
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
            <input type="password" style="width: 100%" name="{$element[1]}" maxlength="{$element[3]}" value="" class="textinput" />
        </td>
    </tr>

EOT;
            break;
        case 'thumb' :
            $value = $form_data[$element[1]];

            if ($value) echo <<<EOT
    <tr>
        <td valign="top" colspan="2" class="thumbnails" align="center">
            <table width="100%" cellpadding="0" cellspacing="0">
                <tr>
                    <td align="center">
                        $value
                    </td>
                </tr>
            </table>
        </td>
    </tr>
EOT;
            break;

        default:
            cpg_die(CRITICAL_ERROR, 'Invalid action for form creation ' . $element[0], __FILE__, __LINE__);
    }
}

function get_post_var($var)
{
    global $lang_errors;

    if (!isset($_POST[$var])) cpg_die(CRITICAL_ERROR, $lang_errors['param_missing'] . " ($var)", __FILE__, __LINE__);
    return addslashes(trim($_POST[$var]));
}

$op = isset($_GET['op']) ? $_GET['op'] : '';
$uid = isset($_GET['uid']) ? (int)$_GET['uid'] : -1;
if (isset($_POST['change_pass'])) $op = 'change_pass';

if (isset($_POST['change_profile']) && USER_ID && UDB_INTEGRATION == 'coppermine') { //!defined('UDB_INTEGRATION')) {

	$profile1 = addslashes($_POST['user_profile1']);
	$profile2 = addslashes($_POST['user_profile2']);
	$profile3 = addslashes($_POST['user_profile3']);
	$profile4 = addslashes($_POST['user_profile4']);
	$profile5 = addslashes($_POST['user_profile5']);
	$profile6 = addslashes($_POST['user_profile6']);
	
	$error = false;
	
	if ($CONFIG['allow_email_change']){
	
		$email = addslashes($_POST['email']);
		
		if (!eregi("^[_\.0-9a-z\-]+@([0-9a-z][0-9a-z-]+\.)+[a-z]{2,6}$", $email)){
			$error = $lang_register_php['err_invalid_email'];
			
		} elseif (!$CONFIG['allow_duplicate_emails_addr']) {
		
			$sql = "SELECT user_id " . "FROM {$CONFIG['TABLE_USERS']} " . "WHERE user_email = '" . $email . "' AND user_id <> " . USER_ID;
			$result = cpg_db_query($sql);

			if (mysql_num_rows($result)) {
				$error = $lang_register_php['err_duplicate_email'];
			}
		}
    }
    
    $sql = "UPDATE {$CONFIG['TABLE_USERS']} SET " . "user_profile1 = '$profile1', " . "user_profile2 = '$profile2', " . "user_profile3 = '$profile3', " . "user_profile4 = '$profile4', " . "user_profile5 = '$profile5', " . "user_profile6 = '$profile6'" . ($CONFIG['allow_email_change'] && !$error ? ", user_email = '$email'" : "") . " WHERE user_id = '" . USER_ID . "'";

    $result = cpg_db_query($sql);

    $title = sprintf($lang_register_php['x_s_profile'], stripslashes(USER_NAME));
    
    if (!$error){
    	$redirect = "index.php";
 		pageheader($title, "<META http-equiv=\"refresh\" content=\"3;url=$redirect\">");
    	msg_box($lang_info, $lang_register_php['update_success'], $lang_continue, $redirect);
    } else {
		$redirect = 'profile.php?op=edit_profile';
		pageheader($title, "<META http-equiv=\"refresh\" content=\"3;url=$redirect\">");
		msg_box($lang_error, $error, $lang_back, $redirect);
    }
    
    pagefooter();
    ob_end_flush();
    exit;
}

if (isset($_POST['change_password']) && USER_ID && UDB_INTEGRATION == 'coppermine') { //!defined('UDB_INTEGRATION')) {
    $current_pass = get_post_var('current_pass');
    $new_pass = get_post_var('new_pass');
    $new_pass_again = get_post_var('new_pass_again');

    if (utf_strlen($new_pass) < 2) cpg_die(ERROR, $lang_register_php['err_password_short'], __FILE__, __LINE__);
    if ($new_pass != $new_pass_again) cpg_die(ERROR, $lang_register_php['err_password_mismatch'], __FILE__, __LINE__);

  if ($CONFIG['enable_encrypted_passwords']) {
    $new_pass = md5($new_pass);
    $current_pass = md5($current_pass);
  }

    $sql = "UPDATE {$cpg_udb->usertable} SET " .
           $cpg_udb->field['password']." = '$new_pass' " .
           "WHERE {$cpg_udb->field['user_id']} = '" . USER_ID . "' AND BINARY {$cpg_udb->field['password']} = '$current_pass'";

    $result = cpg_db_query($sql);
    if (!mysql_affected_rows()) cpg_die(ERROR, $lang_register_php['pass_chg_error'], __FILE__, __LINE__);


/**

    TODO:

    add setcookie function to udb objects (omni)

*/



    setcookie($CONFIG['cookie_name'] . '_pass', md5($_POST['new_pass']), time() + 86400, $CONFIG['cookie_path']);

    $title = sprintf($lang_register_php['x_s_profile'], stripslashes(USER_NAME));
    $redirect = $_SERVER['PHP_SELF'] . "?op=edit_profile";
    pageheader($title, "<META http-equiv=\"refresh\" content=\"3;url=$redirect\">");
    msg_box($lang_info, $lang_register_php['pass_chg_success'], $lang_continue, $redirect);
    pagefooter();
    ob_end_flush();
    exit;
}

switch ($op) {
    // ------------------------------------------------------------------------- //
    case 'edit_profile' :
        if (!USER_ID) cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);

        if (defined('UDB_INTEGRATION')) $cpg_udb->edit_profile(USER_ID);

        $sql = "SELECT user_name, user_email, user_group, UNIX_TIMESTAMP(user_regdate) as user_regdate, group_name, " . "user_profile1, user_profile2, user_profile3, user_profile4, user_profile5, user_profile6, user_group_list, " . "COUNT(pid) as pic_count, ROUND(SUM(total_filesize)/1024) as disk_usage, group_quota " . "FROM {$CONFIG['TABLE_USERS']} AS u " . "INNER JOIN {$CONFIG['TABLE_USERGROUPS']} AS g ON user_group = group_id " . "LEFT JOIN {$CONFIG['TABLE_PICTURES']} AS p ON p.owner_id = u.user_id " . "WHERE user_id ='" . USER_ID . "' " . "GROUP BY user_id ";

        $result = cpg_db_query($sql);

        if (!mysql_num_rows($result)) cpg_die(ERROR, $lang_register_php['err_unk_user'], __FILE__, __LINE__);
        $user_data = mysql_fetch_array($result);
        mysql_free_result($result);

        $group_list = '';
        if ($user_data['user_group_list'] != '') {
            $sql = "SELECT group_name " . "FROM {$CONFIG['TABLE_USERGROUPS']} " . "WHERE group_id IN ({$user_data['user_group_list']}) AND group_id != {$user_data['user_group']} " . "ORDER BY group_name";
            $result = cpg_db_query($sql);
            while ($row = mysql_fetch_array($result)) {
                $group_list .= $row['group_name'] . ', ';
            }
            mysql_free_result($result);
            $group_list = '<br /><i>(' . substr($group_list, 0, -2) . ')</i>';
        }

        $form_data = array('username' => $user_data['user_name'],
            'reg_date' => localised_date($user_data['user_regdate'], $register_date_fmt),
            'group' => $user_data['group_name'] . $group_list,
            'email' => $user_data['user_email'],
            'disk_usage' => $user_data['disk_usage'] .
            ($user_data['group_quota'] ? '/' . $user_data['group_quota'] : '') . '&nbsp;' . $lang_byte_units[1],
                        'user_profile1' => $user_data['user_profile1'],
                        'user_profile2' => $user_data['user_profile2'],
                        'user_profile3' => $user_data['user_profile3'],
                        'user_profile4' => $user_data['user_profile4'],
                        'user_profile5' => $user_data['user_profile5'],
                        'user_profile6' => $user_data['user_profile6'],
            );

        $title = sprintf($lang_register_php['x_s_profile'], stripslashes(USER_NAME));
        pageheader($title);

        echo <<<EOT
    <form method="post" action="{$_SERVER['PHP_SELF']}">

EOT;
        starttable(-1, $title, 2);
        make_form($edit_profile_form_param, $form_data);
        echo <<<EOT
    <tr>
        <td colspan="2" align="center" class="tablef">
            <input type="submit" name="change_profile" value="{$lang_register_php['apply_modif']}" class="button" />
            <img src="images/spacer.gif" width="20" height="1" border="0" alt="" />
            <input type="submit" name="change_pass" value="{$lang_register_php['change_pass']}" class="button" />
        </td>
    </tr>
EOT;
        endtable();
        echo "</form>";
        pagefooter();
        ob_end_flush();
        break;
    // ------------------------------------------------------------------------- //
    case 'change_pass' :
        if (!USER_ID /*|| defined('UDB_INTEGRATION')*/) cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);

        // Just a sanity check (should get caught when user clicks 'My Profile')
        if (UDB_INTEGRATION != 'coppermine') {
            $cpg_udb->edit_profile(USER_ID);
        }

        $title = $lang_register_php['change_pass'];
        pageheader($title);
        echo <<<EOT
         <form method="post" action="{$_SERVER['PHP_SELF']}">
EOT;
        starttable(-1, $title, 2);
        make_form($change_password_form_param, '');
        echo <<<EOT
    <tr>
        <td colspan="2" align="center" class="tablef">
            <input type="submit" name="change_password" value="$title" class="button" />
        </td>
    </tr>
EOT;
        endtable();
        echo "    </form>";
        pagefooter();
        ob_end_flush();
        break;
    // ------------------------------------------------------------------------- //
    default :

        //if (defined('UDB_INTEGRATION')) {
            $user_data = $cpg_udb->get_user_infos($uid);
        /*} else {
            $sql = "SELECT user_name, user_email, UNIX_TIMESTAMP(user_regdate) as user_regdate, group_name, " . "user_profile1, user_profile2, user_profile3, user_profile4, user_profile5, user_profile6 " . "FROM {$CONFIG['TABLE_USERS']} AS u " . "INNER JOIN {$CONFIG['TABLE_USERGROUPS']} AS g ON user_group = group_id " . "WHERE user_id ='$uid'";

            $result = cpg_db_query($sql);

            if (!mysql_num_rows($result)) cpg_die(ERROR, $lang_register_php['err_unk_user'], __FILE__, __LINE__);
            $user_data = mysql_fetch_array($result);
            mysql_free_result($result);
        }*/

        if ($FORBIDDEN_SET != "") $FORBIDDEN_SET = "AND $FORBIDDEN_SET";
        $query = "SELECT count(*), MAX(pid) FROM {$CONFIG['TABLE_PICTURES']} AS p WHERE owner_id = '$uid' AND approved = 'YES' $FORBIDDEN_SET";
        $result = cpg_db_query($query);
        $nbEnr = mysql_fetch_array($result);
        $picture_count = $nbEnr[0];
        $thumb_pid = $nbEnr[1];
        mysql_free_result($result);

        $result = cpg_db_query("SELECT count(*) FROM {$CONFIG['TABLE_ALBUMS']} AS p WHERE category = '" . (FIRST_USER_CAT + $uid) . "' $FORBIDDEN_SET");
        $nbEnr = mysql_fetch_array($result);
        $album_count = $nbEnr[0];
        mysql_free_result($result);

        $result = cpg_db_query("SELECT count(*), MAX(msg_id) FROM {$CONFIG['TABLE_COMMENTS']} as c, {$CONFIG['TABLE_PICTURES']} as p WHERE c.pid = p.pid AND author_id = '$uid' $FORBIDDEN_SET");
        $nbEnr = mysql_fetch_array($result);
        $comment_count = $nbEnr[0];
        $lastcom_id = $nbEnr[1];
        mysql_free_result($result);

        $result = cpg_db_query("SELECT pid FROM {$CONFIG['TABLE_PICTURES']} WHERE owner_name = '".addslashes($user_data['user_name'])."'");
        $pic_count = mysql_num_rows($result);
        mysql_free_result($result);

        $lastcom = '';
        if ($comment_count) {
            $sql = "SELECT filepath, filename, url_prefix, pwidth, pheight, msg_author, UNIX_TIMESTAMP(msg_date) as msg_date, msg_body " . "FROM {$CONFIG['TABLE_COMMENTS']} AS c, {$CONFIG['TABLE_PICTURES']} AS p " . "WHERE msg_id='" . $lastcom_id . "' AND c.pid = p.pid";
            $result = cpg_db_query($sql);
            if (mysql_num_rows($result)) {
                $row = mysql_fetch_array($result);
                mysql_free_result($result);
                $pic_url =  get_pic_url($row, 'thumb');
                if (!is_image($row['filename'])) {
                        $image_info = getimagesize(urldecode($pic_url));
                        $row['pwidth'] = $image_info[0];
                        $row['pheight'] = $image_info[1];
                }
                $image_size = compute_img_size($row['pwidth'], $row['pheight'], $CONFIG['thumb_width']);
                $mime_content = cpg_get_type($row['filename']);
                $lastcom = '<img src="' . $pic_url . '" class="image"' . $image_size['geom'] . ' border="0" alt="" />';
                $lastcom = '<td width="50%" valign="top" align="center">'
                            . '<a href="thumbnails.php?album=lastcomby&amp;uid=' . $uid . '">'
                            . '<span class="thumb_title">' . $lang_register_php['last_comments'] . ' ' . $user_data['user_name'] . '<br /></span>'
                            . $lastcom
                            . '</a><br />';
                $lastcom .= "<span class=\"thumb_caption\">" . localised_date($row['msg_date'], $lastcom_date_fmt) . '</span>' . "<span class=\"thumb_caption\">" . bb_decode(process_smilies($row['msg_body'])) . '</span></td>';
            }
        }

        $user_thumb = '';
        if ($picture_count) {
            $sql = "SELECT filepath, filename, url_prefix, pwidth, pheight " . "FROM {$CONFIG['TABLE_PICTURES']} " . "WHERE pid='" . $thumb_pid . "'";
            $result = cpg_db_query($sql);
            if (mysql_num_rows($result)) {
                $picture = mysql_fetch_array($result);
                mysql_free_result($result);
                $pic_url =  get_pic_url($picture, 'thumb');
                if (!is_image($picture['filename'])) {
                        $image_info = getimagesize(urldecode($pic_url));
                        $picture['pwidth'] = $image_info[0];
                        $picture['pheight'] = $image_info[1];
                }
                $image_size = compute_img_size($picture['pwidth'], $picture['pheight'], $CONFIG['thumb_width']);
                $mime_content = cpg_get_type($picture['filename']);
                $user_thumb = '<img src="' . $pic_url . '" class="image"'
                                . $image_size['geom'] . ' border="0" alt="" />';
                $user_thumb = '<td width="50%" valign="top" align="center">'
                            . '<a href="thumbnails.php?album=lastupby&amp;uid=' . $uid . '">'
                            . '<span class="thumb_title">' . $lang_register_php['last_uploads'] . ' ' . $user_data['user_name'] . '<br /></span>'
                            . $user_thumb
                            . '</a></td>';
            }
        }

        $quick_jump = ($user_thumb . $lastcom) ? '<table width="100%" border="0" cellspacing="5"><tr>' . $user_thumb . $lastcom . '</tr></table>' : '';

        $form_data = array('username' => $user_data['user_name'],
            'reg_date' => localised_date($user_data['user_regdate'], $register_date_fmt),
            'group' => $user_data['group_name'],
                        'user_profile1' => $user_data['user_profile1'],
                        'user_profile2' => $user_data['user_profile2'],
                        'user_profile3' => $user_data['user_profile3'],
                        'user_profile4' => $user_data['user_profile4'],
                        'user_profile5' => $user_data['user_profile5'],
                        'user_profile6' => bb_decode($user_data['user_profile6']),
                        'user_thumb' => $quick_jump,
                        'pic_count' => $pic_count,
            );

        $title = sprintf($lang_register_php['x_s_profile'], $user_data['user_name']);
        pageheader($title);
        starttable(-1, $title, 2);
        make_form($display_profile_form_param, $form_data);
        endtable();
        pagefooter();
        ob_end_flush();
        break;
}

?>
