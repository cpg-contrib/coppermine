<?php
/**
 * login.php
 *
 * This script is used for log in and call
 *
 * @package cpgNG
 * @author Abbas <abbas@sanisoft.com>
 * @version $Id$
 */

define('IN_COPPERMINE', true);
define('LOGIN_PHP', true);

require('include/init.inc.php');
require_once('classes/cpgTemplate.class.php');

$t = cpgTemplate::getInstance();

if ($auth->isDefined('USER_ID')) {
  cpgUtils::cpgDie(ERROR, $lang_login_php['err_already_logged_in'], __FILE__, __LINE__);
}

if (defined('UDB_INTEGRATION')) {
  $auth->login_page();
}

$referer = $_GET['referer'] ? $_GET['referer'] : 'index.php';

if (strpos($referer, "http") !== false) {
  $referer = "index.php";
}

$login_failed = '';
$cookie_warning = '';

if (isset($_POST['submitted'])) {

  if ($auth->login($raw_ip, $hdr_ip)) {
    //if ($auth->login( addslashes($_POST['username']), addslashes($_POST['password']), isset($_POST['remember_me']) ) ) {

    cpgUtils::msgBox($lang_login_php['login'], sprintf($lang_login_php['welcome'], $auth->userData['user_name']), $lang_continue, $referer, $width = "-1", true);
    exit;
  } else {
    $t->assign('loginFailed', 1);
  }
}

if (!isset($_COOKIE[$config->conf['cookie_name'] . '_data'])) {
  $t->assign('cookieWarning', 1);
}

$t->assign('SUB_TITLE', $lang_login_php['login']);
$t->assign('lang_login_php', $lang_login_php);
$t->assign('referer', $referer);
$t->assign('CONTENT', $t->fetchHTML('common/login.html'));

/**
 * Cleanup connections, freeze objects in session, set user cookie.
 */
include ('include/cleanUp.inc.php');

$t->display('main.html');
?>
