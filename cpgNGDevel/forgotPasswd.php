<?php
/**
 * fogot_passwd.php
 *
 * Script to retrieve the login password
 *
 * @package cpgNG
 * @author Himlal Pun <himlal@sanisoft.com>
 * @version $Id$
 */

/**
 * Constant to prevent direct execution of config.inc.php
 */
define('IN_COPPERMINE', true);
define('FORGOT_PASSWD_PHP', true);
define('INDEX_PHP', true);

include('include/init.inc.php');
include('include/smilies.inc.php');
/**
 * Include all the classes
 */
require_once('classes/cpgTemplate.class.php');
require_once('classes/cpgProcessUsers.class.php');

/**
 * display error if user already logged in
 */
if ($auth->isDefined('USER_ID')) {
    cpgUtils::cpgDie(ERROR, $lang_forgot_passwd_php['err_already_logged_in'], __FILE__, __LINE__);
}

$userObj = new cpgProcessUsers;

/**
 * send the mail of notice of change password to user
 */
if (isset($_POST['submited']) && !empty($_POST['submited'])) {
    /**
     * generate unique key
     */
    list($usec, $sec) = explode(' ', microtime());
    $seed = (float) $sec + ((float) $usec * 100000);
    srand($seed);
    $reset_key = md5(uniqid(rand(), 1));

    // require function to send notice mail to user
    $userObj->forgotPwdNoticeMail($reset_key);
}

/**
 * call function to reset password and send login details to user
 */
$userObj->resetNewPassword();

$t = cpgTemplate::getInstance();

/**
 * Assign all the data to smarty
 */
$t->assign('SUB_TITLE', $lang_forgot_passwd_php['page_title']);
// $t->assign('miscArr', $miscArr);
$t->assign('lang_forgot_passwd_php', $lang_forgot_passwd_php);

$t->assign("CONTENT", $t->fetchHTML('common/forgotPasswd.html'));

/**
 * Cleanup connections, freeze objects in session, set user cookie.
 */
include ('include/cleanUp.inc.php');

$t->display ('main.html');

?>
