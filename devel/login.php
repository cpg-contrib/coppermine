<?php
// ------------------------------------------------------------------------- //
// Coppermine Photo Gallery 1.4.0                                            //
// ------------------------------------------------------------------------- //
// Copyright (C) 2002-2004 Gregory DEMAR                                     //
// http://www.chezgreg.net/coppermine/                                       //
// ------------------------------------------------------------------------- //
// Updated by the Coppermine Dev Team                                        //
// see /docs/credits.html for details                                        //
// ------------------------------------------------------------------------- //
// This program is free software; you can redistribute it and/or modify      //
// it under the terms of the GNU General Public License as published by      //
// the Free Software Foundation; either version 2 of the License, or         //
// (at your option) any later version.                                       //
// ------------------------------------------------------------------------- //
// $Id$
// ------------------------------------------------------------------------- //

define('IN_COPPERMINE', true);
define('LOGIN_PHP', true);

require('include/init.inc.php');

if (USER_ID) cpg_die(ERROR, $lang_login_php['err_already_logged_in'], __FILE__, __LINE__);

if (defined('UDB_INTEGRATION')) udb_login_page();

$referer = $_GET['referer'] ? $_GET['referer'] : 'index.php';
$login_failed = '';
$cookie_warning = '';

if (isset($_POST['submitted'])) {
    $results = cpg_db_query("SELECT user_id, user_name, user_password FROM {$CONFIG['TABLE_USERS']} WHERE user_name = '" . addslashes($_POST['username']) . "' AND BINARY user_password = '" . addslashes($_POST['password']) . "' AND user_active = 'YES'");
    $lastvisit = cpg_db_query("UPDATE {$CONFIG['TABLE_USERS']} SET user_lastvisit = NOW() WHERE user_name = '" . addslashes($_POST['username']) . "' AND BINARY user_password = '" . addslashes($_POST['password']) . "' AND user_active = 'YES'");
    if (mysql_num_rows($results)) {
        $USER_DATA = mysql_fetch_array($results);
        if (isset($_POST['remember_me'])) {
            $cookie_life_time = 86400 * 30;
        } else {
            $cookie_life_time = 86400;
        }
        setcookie($CONFIG['cookie_name'] . '_uid', $USER_DATA['user_id'], time() + $cookie_life_time, $CONFIG['cookie_path']);
        setcookie($CONFIG['cookie_name'] . '_pass', md5($_POST['password']), time() + $cookie_life_time, $CONFIG['cookie_path']);

        pageheader($lang_login_php['login'], "<META http-equiv=\"refresh\" content=\"3;url=$referer\">");
        msg_box($lang_login_php['login'], sprintf($lang_login_php['welcome'], $USER_DATA['user_name']), $lang_continue, $referer);
        pagefooter();
        exit;
    } else {
            log_write("Failed login attempt with Username: {$_POST['username']} Password: {$_POST['password']} from IP {$_SERVER['REMOTE_ADDR']} on " . localised_date(-1,$log_date_fmt),CPG_SECURITY_LOG);

        $login_failed = <<<EOT
                  <tr>
                          <td colspan="2" align="center" class="tableh2">
                        <font size="1" color="red"><b>{$lang_login_php['err_login']}<b></font>
                        </td>
                  </tr>

EOT;

// get IP address of the person who tried to log in, look it up on the banning table and increase the brute force counter. If the brute force counter has reached a critical limit, set a regular banning record
$result = cpg_db_query("SELECT * FROM {$CONFIG['TABLE_BANNED']} WHERE ip_addr='$raw_ip' OR ip_addr='$hdr_ip'");
$failed_logon_counter = mysql_fetch_array($result);
mysql_free_result($result);
$expiry_date = date("Y-m-d H:i:s", mktime(date('H'), date('i')+$CONFIG['login_expiry'], date('s'), date('m'), date('d'),date('Y')));
if ($failed_logon_counter['brute_force']) {
    $failed_logon_counter['brute_force'] = $failed_logon_counter['brute_force'] - 1;
    $query_string = "UPDATE {$CONFIG['TABLE_BANNED']} SET brute_force='".$failed_logon_counter['brute_force']."',  expiry='".$expiry_date."' WHERE ban_id=".$failed_logon_counter['ban_id'];
}else{
    $failed_logon_counter['brute_force'] = $CONFIG['login_threshold'];
    $query_string = "INSERT INTO {$CONFIG['TABLE_BANNED']} (ip_addr, expiry, brute_force) VALUES ('$raw_ip', '$expiry_date','".$failed_logon_counter['brute_force']."')";
}

//write the logon counter to the database
cpg_db_query($query_string);
    }
}

if (!isset($_COOKIE[$CONFIG['cookie_name'] . '_data'])) {
    $cookie_warning = <<<EOT
                  <tr>
                          <td colspan="2" align="center" class="tableh2">
                        <font size="1" color="red"><b>{$lang_login_php['cookie_warning']}<b></font>
                        </td>
                  </tr>

EOT;
}

pageheader($lang_login_php['login']);
$referer = urlencode($referer);
starttable('-1', $lang_login_php['enter_login_pswd'], 2);
echo <<< EOT
                  $login_failed
                  $cookie_warning
                  <tr>
                    <form action="login.php?referer=$referer" method="post" name="loginbox">
                        <td class="tableb" width="40%">{$lang_login_php['username']}</td>
                        <td class="tableb" width="60%"><input type="text" class="textinput" name="username" style="width: 100%" /></td>
                        <script language="javascript" type="text/javascript">
                        <!--
                        document.loginbox.username.focus();
                        -->
                        </script>
                  </tr>
                  <tr>
                          <td class="tableb">{$lang_login_php['password']}</td>
                        <td class="tableb"><input type="password" class="textinput" name="password" style="width: 100%" /></td>
                  </tr>
                  <tr>
                    <td colspan="2" align="center" class="tableb">{$lang_login_php['remember_me']} <input name="remember_me" type="checkbox" class="checkbox" value="1"></td>
                  </tr>
                  <tr>
                    <td align="center" class="tablef"><a href="forgot_passwd.php" class="topmenu">{$lang_login_php['forgot_password_link']}</a></td>
                    <td align="left" class="tablef"><input name="submitted" type="submit" class="button" value="{$lang_login_php['login']}"></td>
                    </form>
                  </tr>

EOT;

endtable();
pagefooter();
ob_end_flush();

?>