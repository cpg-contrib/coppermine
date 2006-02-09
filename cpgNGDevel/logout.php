<?php
/**
 * logout.php
 *
 * This script is used for logout and empties the cookie
 *
 * @package cpgNG
 * @author Abbas <abbas@sanisoft.com>
 * @version $Id$
 */
define('IN_COPPERMINE', true);
define('LOGOUT_PHP', true);

require('include/init.inc.php');
require_once('classes/cpgTemplate.class.php');

$t = new cpgTemplate;

if (!$auth->isDefined('USER_ID')) {
  cpgUtils::cpgDie(ERROR, $lang_logout_php['err_not_loged_in'], __FILE__, __LINE__);
}

if (defined('UDB_INTEGRATION')) {
  $auth->logout_page();
}

setcookie($config->conf['cookie_name'] . '_pass', '', time()-86400, $config->conf['cookie_path']);
setcookie($config->conf['cookie_name'] . '_uid', '', time()-86400, $config->conf['cookie_path']);

$referer = 'index.php';

$t->assign('SUB_TITLE', $lang_logout_php['logout']);

/**
 * Cleanup connections, freeze objects in session, set user cookie.
 */
include ('include/cleanUp.inc.php');
cpgUtils::msgBox($lang_logout_php['logout'], sprintf($lang_logout_php['bye'], $auth->isDefined('USER_NAME')), $lang_continue, $referer, $width = "-1", true);
exit;
?>
