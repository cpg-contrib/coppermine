<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2005 Coppermine Dev Team
  v1.1 originaly written by Gregory DEMAR

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation; either version 2 of the License, or
  (at your option) any later version.
  ********************************************
  Coppermine version: 1.4.1
  $Source$
  $Revision$
  $Author$
  $Date$
**********************************************/

define('IN_COPPERMINE', true);
define('REGISTER_PHP', true);

require('include/init.inc.php');
require('include/mailer.inc.php');

if (!$CONFIG['allow_user_registration'] || USER_ID) cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);

if (defined('UDB_INTEGRATION')) udb_register_page();
// Display the disclaimer
function display_disclaimer()
{
    global $CONFIG; //, $PHP_SELF;
    global $lang_register_disclamer, $lang_register_php;

    starttable(-1, $lang_register_php['term_cond']);
    echo <<<EOT
        <form method="post" action="{$_SERVER['PHP_SELF']}">
        <tr>
                <td class="tableb" style="padding: 10px;">

EOT;
    echo str_replace('{SITE_NAME}', $CONFIG['gallery_name'], $lang_register_disclamer);

    echo <<<EOT
                </td>
        </tr>
        <tr>
                <td colspan="2" align="center" class="tablef">
                        <input type="submit" name="agree" value="{$lang_register_php['i_agree']}" class="button">
                </td>
        </tr>
        </form>

EOT;
    endtable();
}

function input_user_info($errors = '')
{
    global $CONFIG; //, $PHP_SELF;
    global $lang_register_php;

    starttable(-1, $lang_register_php['enter_info'], 2);
    echo <<<EOT
        <form method="post" action="{$_SERVER['PHP_SELF']}">

EOT;

    $form_data = array(
        array('label', $lang_register_php['required_info']),
        array('input', 'username', $lang_register_php['username'], 25),
        array('password', 'password', $lang_register_php['password'], 25),
        array('password', 'password_verification', $lang_register_php['password_again'], 25),
        array('input', 'email', $lang_register_php['email'], 255),
        array('label', $lang_register_php['optional_info']),
                array('input', 'user_profile1', $CONFIG['user_profile1_name'], 255),
                array('input', 'user_profile2', $CONFIG['user_profile2_name'], 255),
                array('input', 'user_profile3', $CONFIG['user_profile3_name'], 255),
                array('input', 'user_profile4', $CONFIG['user_profile4_name'], 255),
                array('input', 'user_profile5', $CONFIG['user_profile5_name'], 255),
                array('textarea', 'user_profile6', $CONFIG['user_profile6_name'], 255)
        );

    foreach ($form_data as $element) switch ($element[0]) {
        case 'label' :
            echo <<<EOT
        <tr>
            <td colspan="2" class="tableh2">
                        <b>{$element[1]}<b>
        </td>
        </tr>

EOT;
            break;

        case 'input' :
            if (isset($_POST[$element[1]])) {
                $value = $_POST[$element[1]];
            } else {
                $value = '';
            }
            if ($element[2]) echo <<<EOT
        <tr>
            <td width="40%" class="tableb"  height="25">
                        {$element[2]}
        </td>
        <td width="60%" class="tableb" valign="top">
                <input type="text" style="width: 100%" name="{$element[1]}" maxlength="{$element[3]}" value="$value" class="textinput">
                </td>
        </tr>

EOT;
            break;

        case 'textarea' :
            if (isset($_POST[$element[1]])) {
                $value = $_POST[$element[1]];
            } else {
                $value = '';
            }
           if ($element[2]) echo <<<EOT
        <tr>
            <td width="40%" class="tableb"  height="25">
                        {$element[2]}
        </td>
        <td width="60%" class="tableb" valign="top">
                <textarea name="{$element[1]}" ROWS="7" WRAP="virtual"  class="textinput" STYLE="WIDTH: 100%">$value</textarea>
                </td>
        </tr>


EOT;
            break;

        case 'password' :
            echo <<<EOT
        <tr>
            <td width="40%" class="tableb"  height="25">
                        {$element[2]}
        </td>
        <td width="60%" class="tableb" valign="top">
                <input type="password" style="width: 100%" name="{$element[1]}" maxlength="{$element[3]}" value="" class="textinput">
                </td>
        </tr>

EOT;
            break;

        default:
            cpg_die(CRITICAL_ERROR, 'Invalid action for form creation ' . $element[0], __FILE__, __LINE__);
    }

    if ($errors) {
        echo <<<EOT
        <tr>
                <td colspan="2" class="tableh2" align="center">
                        <b>&#149;&nbsp;&#149;&nbsp;&#149;&nbsp;{$lang_register_php['error']}&nbsp;&#149;&nbsp;&#149;&nbsp;&#149;</b>
                </td>
        </tr>
        <tr>
                <td colspan="2" class="tableb">
                        <b><ul>$errors</ul><b>
                </td>
        </tr>

EOT;
    }
    echo <<<EOT
        <tr>
                <td colspan="2" align="center" class="tablef">
                        <input type="submit" name="submit" value="{$lang_register_php['submit']}" class="button">
                </td>
        </tr>
        </form>

EOT;
    endtable();
}

function get_post_var($var)
{
    global $lang_errors;

    if (!isset($_POST[$var])) cpg_die(CRITICAL_ERROR, $lang_errors['param_missing'] . " ($var)", __FILE__, __LINE__);
    return trim($_POST[$var]);
}

function check_user_info(&$error)
{
    global $CONFIG; //, $PHP_SELF;
    global $lang_register_php, $lang_register_confirm_email, $lang_continue, $lang_register_approve_email, $lang_register_activated_email, $lang_register_user_login;
                //$CONFIG['admin_activation'] = FALSE;
                $CONFIG['admin_activation'] = TRUE;

    $user_name = trim(get_post_var('username'));
    $password = trim(get_post_var('password'));
    $password_again = trim(get_post_var('password_verification'));
    $email = trim(get_post_var('email'));
        $profile1 = addslashes($_POST['user_profile1']);
        $profile2 = addslashes($_POST['user_profile2']);
        $profile3 = addslashes($_POST['user_profile3']);
        $profile4 = addslashes($_POST['user_profile4']);
        $profile5 = addslashes($_POST['user_profile5']);
        $profile6 = addslashes($_POST['user_profile6']);

    $sql = "SELECT user_id " . "FROM {$CONFIG['TABLE_USERS']} " . "WHERE user_name = '" . addslashes($user_name) . "'";
    $result = cpg_db_query($sql);

    if (mysql_num_rows($result)) {
        $error = '<li>' . $lang_register_php['err_user_exists'];
        return false;
    }
    mysql_free_result($result);

    if (strlen($user_name) < 2) $error .= '<li>' . $lang_register_php['err_uname_short'];
    if (strlen($password) < 2) $error .= '<li>' . $lang_register_php['err_password_short'];
    if ($password == $user_name) $error .= '<li>' . $lang_register_php['err_uname_pass_diff'];
    if ($password != $password_again) $error .= '<li>' . $lang_register_php['err_password_mismatch'];

    if (!eregi("^[_\.0-9a-z\-]+@([0-9a-z][0-9a-z-]+\.)+[a-z]{2,6}$", $email)) $error .= '<li>' . $lang_register_php['err_invalid_email'];

    if ($error != '') return false;

    if (!$CONFIG['allow_duplicate_emails_addr']) {
        $sql = "SELECT user_id " . "FROM {$CONFIG['TABLE_USERS']} " . "WHERE user_email = '" . addslashes($email) . "'";
        $result = cpg_db_query($sql);

        if (mysql_num_rows($result)) {
            $error = '<li>' . $lang_register_php['err_duplicate_email'];
            return false;
        }

        mysql_free_result($result);
    }

    if ($CONFIG['reg_requires_valid_email']) {
        $active = 'NO';
        list($usec, $sec) = explode(' ', microtime());
        $seed = (float) $sec + ((float) $usec * 100000);
        srand($seed);
        $act_key = md5(uniqid(rand(), 1));
    } else {
        $active = 'YES';
        $act_key = '';
    }

    $sql = "INSERT INTO {$CONFIG['TABLE_USERS']} ".
           "(user_regdate, user_active, user_actkey, user_name, user_password, user_email, user_profile1, user_profile2, user_profile3, user_profile4, user_profile5, user_profile6) ".
           "VALUES (NOW(), '$active', '$act_key', '" . addslashes($user_name) . "', '" . addslashes($password) . "', '" . addslashes($email) . "', '$profile1', '$profile2', '$profile3', '$profile4', '$profile5', '$profile6')";
    if ($CONFIG['log_mode']) {
        log_write('New user "'.addslashes($user_name).'" created on '.date("F j, Y, g:i a"),CPG_ACCESS_LOG);
    }
    $result = cpg_db_query($sql);

    if ($CONFIG['reg_requires_valid_email']) {
        if (!$CONFIG['admin_activation']) { //user gets activation email
                                        $act_link = rtrim($CONFIG['site_url'], '/') . '/register.php?activate=' . $act_key;
                                        $template_vars = array(
                                                        '{SITE_NAME}' => $CONFIG['gallery_name'],
                                                        '{USER_NAME}' => $user_name,
                                                        '{PASSWORD}' => $password,
                                                        '{ACT_LINK}' => $act_link
            );
                                        if (!cpg_mail($email, sprintf($lang_register_php['confirm_email_subject'], $CONFIG['gallery_name']), nl2br(strtr($lang_register_confirm_email, $template_vars)))) {
                                                        cpg_die(CRITICAL_ERROR, $lang_register_php['failed_sending_email'], __FILE__, __LINE__);
                                        }
                                }
        if ($CONFIG['admin_activation']) {
                                        msg_box($lang_register_php['information'], $lang_register_php['thank_you_admin_activation'], $lang_continue, 'index.php');
                                } else {
                                        msg_box($lang_register_php['information'], $lang_register_php['thank_you'], $lang_continue, 'index.php');
                                }
    } else {
                                        msg_box($lang_register_php['information'], $lang_register_php['acct_active'], $lang_continue, 'index.php');
    }

    // email notification to admin
        if ($CONFIG['reg_notify_admin_email']) {
                                        if ($CONFIG['admin_activation']) {
                                                        $act_link = rtrim($CONFIG['site_url'], '/') . '/register.php?activate=' . $act_key;
                                                        $template_vars = array(
                                                                        '{SITE_NAME}' => $CONFIG['gallery_name'],
                                                                        '{USER_NAME}' => $user_name,
                                                                        '{ACT_LINK}' => $act_link,
                                                        );
                                                        cpg_mail('admin', sprintf($lang_register_php['notify_admin_request_email_subject'], $CONFIG['gallery_name']), nl2br(strtr($lang_register_approve_email, $template_vars)));
                                        } else {
                                                        cpg_mail('admin', sprintf($lang_register_php['notify_admin_email_subject'], $CONFIG['gallery_name']), sprintf($lang_register_php['notify_admin_email_body'], $user_name));
                }
                                }

    return true;
}

pageheader($lang_register_php['page_title']);
if (isset($_POST['agree'])) {
    input_user_info();
} elseif (isset($_POST['submit'])) {
    $errors = '';
    if (!check_user_info($errors)) {
        input_user_info($errors);
    }
} elseif (isset($_GET['activate'])) {
                //$CONFIG['admin_activation'] = FALSE;
                $CONFIG['admin_activation'] = TRUE;

    $act_key = addslashes(substr($_GET['activate'], 0 , 32));
    if (strlen($act_key) != 32) cpg_die(ERROR, $lang_register_php['acct_act_failed'], __FILE__, __LINE__);

    $sql = "SELECT user_active user_active, user_email, user_name, user_password " . "FROM {$CONFIG['TABLE_USERS']} " . "WHERE user_actkey = '$act_key' " . "LIMIT 1";
    $result = cpg_db_query($sql);
    if (!mysql_num_rows($result)) cpg_die(ERROR, $lang_register_php['acct_act_failed'], __FILE__, __LINE__);

    $row = mysql_fetch_array($result);
    mysql_free_result($result);

    if ($row['user_active'] == 'YES') cpg_die(ERROR, $lang_register_php['acct_already_act'], __FILE__, __LINE__);

                $email = $row['user_email'];
                $user_name = $row['user_name'];
                $password = $row['user_password'];

    $sql = "UPDATE {$CONFIG['TABLE_USERS']} " . "SET user_active = 'YES' " . "WHERE user_actkey = '$act_key' " . "LIMIT 1";
    $result = cpg_db_query($sql);

                if ($CONFIG['admin_activation']) { //after admin approves, user receives email notification
                        msg_box($lang_register_php['information'], $lang_register_php['acct_active_admin_activation'], $lang_continue, 'index.php');
                        $site_link = $CONFIG['site_url'];
                        $template_vars = array(
                         '{SITE_LINK}' => $site_link,
                         '{USER_NAME}' => $user_name,
                         '{PASSWORD}' => $password,
                         '{SITE_NAME}' => $CONFIG['gallery_name'],
                                );
                        cpg_mail($email, sprintf($lang_register_php['notify_user_email_subject'], $CONFIG['gallery_name']), nl2br(strtr($lang_register_activated_email, $template_vars)));
                } else { //user self-activated, gets message box that account was activated
                        msg_box($lang_register_php['information'], $lang_register_php['acct_active'], $lang_continue, 'index.php');
                }

} else {
    display_disclaimer();
}
pagefooter();
ob_end_flush();

?>