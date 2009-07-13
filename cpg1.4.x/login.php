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
  Coppermine version: 1.4.26
  $HeadURL$
  $Revision$
  $Author$
  $Date$
**********************************************/

define('IN_COPPERMINE', true);
define('LOGIN_PHP', true);

require('include/init.inc.php');

if (USER_ID) cpg_die(ERROR, $lang_login_php['err_already_logged_in'], __FILE__, __LINE__);

if (defined('UDB_INTEGRATION')) $cpg_udb->login_page();

$referer = $_GET['referer'] ? $_GET['referer'] : 'index.php';
if (strpos($referer, "http") !== false || strpos($referer, "logout.php") !== false) {
  $referer = "index.php";
}
$login_failed = '';
$cookie_warning = '';

if (isset($_POST['submitted'])) {
    if ( $USER_DATA = $cpg_udb->login( addslashes($_POST['username']), addslashes($_POST['password']), isset($_POST['remember_me']) ) ) {
        $referer=preg_replace("'&amp;'","&",$referer);
        pageheader($lang_login_php['login'], "<META http-equiv=\"refresh\" content=\"3;url=$referer\">");
        msg_box($lang_login_php['login'], sprintf($lang_login_php['welcome'], $USER_DATA['user_name']), $lang_continue, $referer);
        pagefooter();
        exit;
    } else {
        log_write("Failed login attempt with Username: {$_POST['username']} from IP {$_SERVER['REMOTE_ADDR']} on " . localised_date(-1,$log_date_fmt),CPG_SECURITY_LOG);

        $login_failed = <<<EOT
                  <tr>
                          <td colspan="2" align="center" class="tableh2">
                        <span style="color:red"><b>{$lang_login_php['err_login']}<b></span>
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
                        <span style="color:red"><b>{$lang_login_php['cookie_warning']}</b></span>
                        </td>
                  </tr>

EOT;
}

pageheader($lang_login_php['login']);
$referer = urlencode($referer);
echo '<form action="login.php?referer='.$referer.'" method="post" name="loginbox">';

starttable('-1', $lang_login_php['enter_login_pswd'], 2);
echo <<< EOT
                  $login_failed
                  $cookie_warning
                  <tr>
                        <td class="tableb" width="40%">{$lang_login_php['username']}</td>
                        <td class="tableb" width="60%"><input type="text" class="textinput" name="username" style="width: 100%" tabindex="1" /></td>
                  </tr>
                  <tr>
                          <td class="tableb">{$lang_login_php['password']}</td>
                        <td class="tableb"><input type="password" class="textinput" name="password" style="width: 100%" tabindex="2" /></td>
                  </tr>
                  <tr>
                    <td colspan="2" align="center" class="tableb">{$lang_login_php['remember_me']} <input name="remember_me" type="checkbox" class="checkbox" value="1" tabindex="3" /></td>
                  </tr>
                  <tr>
                    <td align="center" class="tablef"><a href="forgot_passwd.php" class="topmenu">{$lang_login_php['forgot_password_link']}</a></td>
                    <td align="left" class="tablef"><input name="submitted" type="submit" class="button" value="{$lang_login_php['login']}" tabindex="4" /></td>
                  </tr>

EOT;

endtable();

echo <<< EOT

</form>
<script language="javascript" type="text/javascript">
<!--
document.loginbox.username.focus();
-->
</script>
EOT;

pagefooter();
ob_end_flush();

?>