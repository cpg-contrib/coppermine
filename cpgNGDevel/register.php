<?php
/**
 * register.php
 *
 * Script to register new user
 *
 * @package cpgNG
 * @author Himlal Pun <himlal@sanisoft.com>
 * @version $Id$
 */

/**
 * Constant to prevent direct execution of config.inc.php
 */
define('IN_COPPERMINE', true);
define('REGISTER_PHP', true);
define('INDEX_PHP', true);

include('include/init.inc.php');
include('include/smilies.inc.php');
/**
 * Include all the classes
 */
require_once('classes/cpgTemplate.class.php');
require_once('classes/cpgProcessUsers.class.php');

if (!$config->conf['allow_user_registration']) {
    cpgUtils::cpgDie(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);
}

if ($config->conf['allow_user_registration'] == 2 && !isset($_GET['activate'])) {
	$invitationCode = $_GET['invite'] ? $_GET['invite'] : $_POST['invite'];
	$length = strlen($invitationCode);
	if ($length != 32 || !preg_match('/^[a-z0-9]*$/', $invitationCode) ) {
		cpgUtils::cpgDie(ERROR, $lang_register_php['invalid_invitation_code'], __FILE__, __LINE__);
	} else {
		$miscArr['byInvitation'] = $invitationCode;
	}
}

if (defined('UDB_INTEGRATION')) {
    $auth->register_page();
}

$userObj = new cpgProcessUsers;

/**
 * Get the user fields that are set.
 */
$userFields = array();
for ($i = 1; $i <= 5; $i++) {
    if (!empty($config->conf["user_profile".$i."_name"])) {
        $userFields["user_profile".$i] = $config->conf["user_profile".$i."_name"];
    }
}

/**
 * The last field in user profile is textarea. So check it seperately and place it in miscArr if not empty
 */
if (!empty($config->conf['user_profile6_name'])) {
    $miscArr['user_profile6_name'] = $config->conf['user_profile6_name'];
}

/**
 * perfrom the task after submission of registration form
 */
if (!isset($_POST['agree']) && !isset($_POST['register'])) {
    $lang_register_disclamer = str_replace('{SITE_NAME}', $config->conf['gallery_name'], $lang_register_disclamer);
    $miscArr['disclamer'] = 1;
}
if (isset($_POST['register']) && !empty($_POST['register'])) {
    $miscArr['user_id'] = '';

    /**
     * generate unique activation key
     */
    if ($config->conf['reg_requires_valid_email']) {
      list($usec, $sec) = explode(' ', microtime());
      $seed = (float) $sec + ((float) $usec * 100000);
      srand($seed);
      $act_key = md5(uniqid(rand(), 1));
    } else {
      $act_key = '';
    }
	if ($config->conf['allow_user_registration'] == 2) {
		$validCode = $userObj->checkInvitationCode($invitationCode);
		if (!$validCode){
			cpgUtils::cpgDie(ERROR, $lang_register_php['invalid_invitation_code'], __FILE__, __LINE__);
		}
	}
    if ($userName = $userObj->updateUser($miscArr['user_id'], $act_key)) {
		if ($config->conf['allow_user_registration'] == 2) {
			$userId = $db->insertId();
			$userObj->updateInvitations($userId, $invitationCode);
		}
        if ($config->conf['reg_requires_valid_email']) {
            $userObj->registerNoticeMail($act_key); // function to send register mail notice to admin OR user
        } else {
            $miscArr['success'] = 1;
        }
    }
	//Call function to delete the inactive user
	$userObj->deleteInactiveUsers();
}

// call function to activate user
$userObj->activateNewUser();

//Set $REFERER to index.php
$REFERER = 'index.php';

$t = new cpgTemplate;

/**
 * Assign all the data to smarty
 */
$t->assign('SUB_TITLE', $lang_register_php['page_title']);
$t->assign('userFields', $userFields);
$t->assign('miscArr', $miscArr);
$t->assign('lang_usermgr_php', $lang_usermgr_php);
$t->assign('lang_byte_units', $lang_byte_units);
$t->assign('lang_register_php', $lang_register_php);
$t->assign('lang_register_disclamer',$lang_register_disclamer);

$t->assign("CONTENT", $t->fetchHTML('common/register.html'));

/**
 * Cleanup connections, freeze objects in session, set user cookie.
 */
include ('include/cleanUp.inc.php');

$t->display ('main.html');

?>
