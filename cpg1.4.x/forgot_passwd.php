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
  Coppermine version: 1.4.28
  $HeadURL$
  $Revision$
  $Author$
  $Date$
**********************************************/

define('IN_COPPERMINE', true);
define('FORGOT_PASSWD_PHP', true);
global $CONFIG;


require('include/init.inc.php');
include_once('include/mailer.inc.php');

if (USER_ID) cpg_die(ERROR, $lang_forgot_passwd_php['err_already_logged_in'], __FILE__, __LINE__);

$lookup_failed = '';

if (!empty($_POST['email'])) {
    $emailaddress = addslashes($_POST['email']);

    $sql = "SELECT user_id, user_group,user_active,user_name, user_password, user_email  FROM {$CONFIG['TABLE_USERS']} WHERE user_email = '$emailaddress' AND user_active = 'YES'";

    $results = cpg_db_query($sql);
    if (mysql_num_rows($results))
        { // something has been found start
        $USER_DATA = mysql_fetch_array($results);
        // check if we have an admin account (with empty email address)
        if ($USER_DATA['user_email'] == '') {
          // the password is empty. Is the current user the gallery admin?
          if ($USER_DATA['user_group'] == 1) {
            $USER_DATA['user_email'] = $CONFIG['gallery_admin_email'];
          } else {
            cpg_die(CRITICAL_ERROR, $lang_forgot_passwd_php['failed_sending_email'], __FILE__, __LINE__); //not the gallery admin account
          }
        }

        $randkey = $cpg_udb->generateId();

        // Session life = 1hour - session life (5 minutes)
        $session_life = time()-(CPG_MINUTE*55);

        $sql =  'insert into '.$cpg_udb->sessionstable.' (session_id, user_id, time, remember) values ';
        $sql .= '("'.md5($randkey.$USER_DATA['user_id']).'", 0, "'.$session_life.'", 0);';

        cpg_db_query($sql);


        // send the email
        if (!cpg_mail($USER_DATA['user_email'], sprintf($lang_forgot_passwd_php['account_verify_subject'], $CONFIG['gallery_name']), sprintf($lang_forgot_passwd_php['account_verify_body'],
            $CONFIG['ecards_more_pic_target'].(substr($CONFIG["ecards_more_pic_target"], -1) == '/' ? '' : '/') .'forgot_passwd.php?key='.$randkey.'&id='.$USER_DATA['user_id']))){

            cpg_die(CRITICAL_ERROR, $lang_forgot_passwd_php['failed_sending_email'], __FILE__, __LINE__);
        }

        // output the message
        pageheader($lang_forgot_passwd_php['forgot_passwd'], "<META http-equiv=\"refresh\" content=\"3;url=index.php\">");
        $referer = 'index.php';
        msg_box($lang_forgot_passwd_php['forgot_passwd'], sprintf($lang_forgot_passwd_php['verify_email_sent'], $USER_DATA['user_email']), $lang_continue, $referer);
        $USER_DATA['user_password'] = '***********';
        pagefooter();
        exit;
        // something has been found end
    } else {
        $lookup_failed = <<<EOT
                  <tr>
                          <td colspan="2" align="center" class="tableh2">
                        <span style="color:red;font-weight:bold;">{$lang_forgot_passwd_php['err_unk_user']}</span>
                        </td>
                  </tr>

EOT;
    }
} elseif (isset($_GET['key']) && isset($_GET['id'])) {

    $randkey = addslashes($_GET['key']);
    $user_id = addslashes($_GET['id']);

    $sql = "select null from {$cpg_udb->sessionstable} where session_id = md5('{$randkey}{$user_id}');";

    $result = cpg_db_query($sql);

    if (!mysql_num_rows($result)) {
        cpg_die($lang_forgot_passwd_php['forgot_passwd'], $lang_forgot_passwd_php['illegal_session']);
    }

    mysql_free_result($result);

    $sql = "select {$cpg_udb->field['username']}, {$cpg_udb->field['email']} from {$cpg_udb->usertable} where {$cpg_udb->field['user_id']}='$user_id';";

    $result = cpg_db_query($sql);

    if (!mysql_num_rows($result)) {
        cpg_die($lang_forgot_passwd_php['forgot_passwd'], $lang_forgot_passwd_php['err_unk_user']);
    }

    $row = mysql_fetch_assoc($result);
    mysql_free_result($sql);

    // Reset Password
    $new_password = $cpg_udb->make_password();

    if ($CONFIG['enable_encrypted_passwords']) {
        $password = md5($new_password);
    } else {
        $password = $new_password;
    }

    $sql =  "update {$cpg_udb->usertable} set ";
    $sql .= "{$cpg_udb->field['password']}='$password' ";
    $sql .= "where {$cpg_udb->field['email']}='{$row['user_email']}'";
    cpg_db_query($sql);

    // send the password
    if (!cpg_mail($row['user_email'],
        sprintf($lang_forgot_passwd_php['passwd_reset_subject'], $CONFIG['gallery_name']),
        sprintf($lang_forgot_passwd_php['passwd_reset_body'], $row['user_name'], $new_password,
        $CONFIG['ecards_more_pic_target'].(substr($CONFIG["ecards_more_pic_target"], -1) == '/' ? '' : '/') .'login.php'))){

        cpg_die(CRITICAL_ERROR, $lang_forgot_passwd_php['failed_sending_email'], __FILE__, __LINE__);
    }

    $sql = "delete from {$cpg_udb->sessionstable} where session_id=md5('{$randkey}{$user_id}');";
    cpg_db_query($sql);

    // output the message
    pageheader($lang_forgot_passwd_php['forgot_passwd'], "<META http-equiv=\"refresh\" content=\"3;url=login.php\">");
    $referer = 'login.php';
    msg_box($lang_forgot_passwd_php['forgot_passwd'], sprintf($lang_forgot_passwd_php['email_sent'], $row['user_email']), $lang_continue, $referer);
    $USER_DATA['user_password'] = '***********';
    pagefooter();
    exit;
}

pageheader($lang_forgot_passwd_php['forgot_passwd']);

echo '<form action="forgot_passwd.php" method="post" name="passwordreminder">';
starttable('-1', $lang_forgot_passwd_php['forgot_passwd'], 2);
echo <<< EOT
            $lookup_failed
                 <tr>
                        <td class="tableb" width="40%">{$lang_forgot_passwd_php['enter_email']}</td>
                        <td class="tableb" width="60%"><input type="text" class="textinput" name="email" style="width: 100%" /></td>

                  </tr>
                  <tr>
                        <td colspan="2" align="center" class="tablef"><script language="javascript" type="text/javascript">
                        <!--
                        document.passwordreminder.email.focus();
                        -->
                        </script>
                                                <input name="submitted" type="submit" class="button" value="{$lang_forgot_passwd_php['submit']}" /></td>
                  </tr>

EOT;
endtable();
echo '</form>';

pagefooter();
ob_end_flush();

?>