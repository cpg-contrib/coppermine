<?php
/**
 * usermgr.php
 *
 * Script to add/edit/delete the users.
 *
 * @package cpgNG
 * @author Aditya <adityamooley@sanisoft.com>
 * @version $Id$
 */

/**#@+
 * Constant to prevent direct execution of config.inc.php
 */
define('IN_COPPERMINE', true);
define('USERMGR_PHP', true);
define('REGISTER_PHP', true);
define('PROFILE_PHP', true);
define('DELETE_PHP', true);
/**#@-*/

require('include/init.inc.php');

$auth->view_users();

/**#@+
 * Include all the classes
 */
require_once('classes/cpgTemplate.class.php');
require_once('classes/cpgProcessUsers.class.php');
/**#@-*/

/**
 * Check whether the user has proper permissions to view this script and set the parameters for displaying the table.
 */
if (USER_ID !='') {
 if (GALLERY_ADMIN_MODE) {
  $limUser = 0;
  $numColumns = 9;
 }
 elseif ($config->conf['allow_memberlist']) {
  $limUser = 1;
  $numColumns = 7;
  show_memberlist;
 }
 else {
  $limUser = 2;
  cpgUtils::cpgDie(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);
 }
}
else {
 $limUser = 3;
 cpgUtils::cpgDie(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);
}

/**
 * Get the details of the users. This data will come from the bridge.
 */
$userCount = $auth->get_user_count();

if (!$userCount) {
  cpgUtils::cpgDie(CRITICAL_ERROR, $lang_usermgr_php['err_no_users']);
}

/**
 * Code for pagination
 */
$userPerPage = 5;
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$lowerLimit = ($page-1) * $userPerPage;
$totalPages = ceil($userCount / $userPerPage);

/**
 * Array to store the misc variables
 */
$miscArr = array();

/**
 * Array for sort codes
 */
$sortCodes = array('name_a' => 'user_name ASC',
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

$miscArr['sort'] = (!isset($_GET['sort']) || !isset($sortCodes[$_GET['sort']])) ? 'reg_d' : $_GET['sort'];

/**
 * Get all the groups from the database.
 */
$query = "SELECT group_id, group_name FROM {$config->conf['TABLE_USERGROUPS']} ORDER BY group_name";
$db->query($query);
$groupList = $db->fetchRowset();

/**
 * See whether we need to perform any action like delete, reset password, etc...
 */
$action = isset($_GET['action']) ? $_GET['action'] : '';
$userObj = new cpgProcessUsers;
switch ($action) {
  case 'delete':
    if ($userData = $userObj->deleteUsers()) {
      $miscArr['success'] = 'User ' . $userData . ' ' . $lang_delete_php['del_success'];
    } else {
      $miscArr['error'] = $lang_delete_php['err_unknown_user'];
    }
    break;

  case 'activate':
    if ($actionArr = $userObj->activateUsers()) {
      $miscArr['success'] = $actionArr;
    } else {
      $miscArr['error'] = $lang_delete_php['err_unknown_user'];
    }
    break;

  case 'deactivate':
    if ($actionArr = $userObj->deactivateUsers()) {
      $miscArr['success'] = $actionArr;
    } else {
      $miscArr['error'] = $lang_delete_php['err_unknown_user'];
    }
    break;

  case 'reset_password':
    if ($actionArr = $userObj->resetPassword()) {
      $miscArr['success'] = $actionArr;
    } else {
      $miscArr['error'] = $lang_delete_php['err_unknown_user'];
    }
    break;

  case 'change_group':
    if ($actionArr = $userObj->changeGroup()) {
      $miscArr['success'] = $actionArr;
    } else {
      $miscArr['error'] = $lang_delete_php['err_unknown_user'];
    }
    break;

  case 'add_group':
    if ($actionArr = $userObj->addGroup()) {
      $miscArr['success'] = $actionArr;
    } else {
      $miscArr['error'] = $lang_delete_php['err_unknown_user'];
    }
    break;
}

/**
 * See what operation has to be performed. In case of invalid operation show the main page.
 */
$op = isset($_GET['op']) ? $_GET['op'] : '';

switch ($op) {
  case 'edit' :
    $miscArr['user_id'] = isset($_GET['user_id']) ? (int)$_GET['user_id'] : -1;

    if (USER_ID == $miscArr['user_id']) {
      cpgutils::cpgDie(ERROR, $lang_usermgr_php['err_edit_self']);
    }
    $auth->edit_users($miscArr['user_id']);

    $subTitle = $lang_usermgr_php['title'];
    $sql = "SELECT * FROM {$config->conf['TABLE_USERS']} WHERE user_id = '{$miscArr['user_id']}'";
    $db->query($sql);
    if (!$db->nf()) {
      cpgUtils::cpgDie(CRITICAL_ERROR, $lang_usermgr_php['err_unknown_user']);
    }

    $userData = $db->fetchRow();
    $selGroup = $userData['user_group'];
    $userGroupList = ($userData['user_group_list'] == '') ? ',' . $selGroup . ',' : ',' . $userData['user_group_list'] . ',' . $selGroup . ',';

    foreach ($groupList as $key => $group) {
      $groupList[$key]['checked'] = (strpos(' ' . $userGroupList, ',' . $group['group_id'] . ',')) ? 'checked' : '';
    }

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

    break;

  case 'update' :
    $miscArr['user_id'] = isset($_GET['user_id']) ? (int)$_GET['user_id'] : -1;
    $auth->edit_users($miscArr['user_id']);

    if ($userName = $userObj->updateUser($miscArr['user_id'])) {
      $miscArr['success'] = sprintf($lang_delete_php['user_updated'], $userName);
    }

    $subTitle = $lang_usermgr_php['title'];
    $users = $userObj->getUserList($miscArr['sort'], $search, $userPerPage, $lowerLimit);
    break;

  case 'new_user' :
    $auth->edit_users();
    $subTitle = $lang_usermgr_php['title'];
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
    break;

  case 'groups_alb_access' : //show what albums user groups can see
    $subTitle = $lang_usermgr_php['groups_alb_access'];
    $groups = $userObj->listGroupsAlbAccess();
    break;

  case 'group_alb_access' : //show what albums specific group can see
/*
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
        $subTitle = sprintf($lang_usermgr_php['group_can_access'], $group_name);
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
*/
    $albums = $userObj->listGroupAlbAccess((int)$_GET['gid']);
    //print_r($albums);

    if (!is_array($albums[0])) {
      cpgUtils::msgBox($lang_usermgr_php['notice'], $lang_usermgr_php['group_no_access'], $lang_continue, 'groupmgr.php');
    }

    $lang_usermgr_php['group_can_access'] = sprintf($lang_usermgr_php['group_can_access'], $albums[0]['group_name']);
    $subTitle = $lang_usermgr_php['group_can_access'];
    break;

  default :
    $subTitle = $lang_usermgr_php['title'];
    if (isset($_POST['username'])) {
      $name = addslashes($_POST['username']);
      $wildcards = array("*" => "%", "?" => "_");
      $search = strtr($name, $wildcards);
    }
    if (isset($search) == false) {
      $search = '';
    }

    $users = $userObj->getUserList($miscArr['sort'], $search, $userPerPage, $lowerLimit);
    break;
}

/**
 * Create help icons
 */
$miscArr['usermgrHelp'] = '&nbsp;'.cpgUtils::cpgDisplayHelp('f=index.htm&as=user_cp&ae=user_cp_end&top=1', '650', '500');
$miscArr['searchHelp'] = cpgutils::cpgDisplayHelp('f=index.htm&as=user_cp_search&ae=user_cp_search_end&top=1', '400', '150');

$t = new cpgTemplate;

/**#@+
 * Assign all the data to smarty
 */
$t->assign('breadcrumbHTML', $breadcrumbHTML);
$t->assign('CONTENT', $CONTENT);
$t->assign('SUB_TITLE', $subTitle);
$t->assign('GALLERY_DESCRIPTION', $config->conf['gallery_description']);

$t->assign('users', $users);
$t->assign('userData', $userData);
$t->assign('groupList', $groupList);
$t->assign('userFields', $userFields);
$t->assign('sortCodes', $sortCodes);
$t->assign('limUser', $limUser);
$t->assign('numColumns', $numColumns);
$t->assign('numColumnsMinusOne', $numColumns - 1);
$t->assign('readOnly', $config->conf['bridge_enable'] ? 1 : 0);
$t->assign('miscArr', $miscArr);
$t->assign('selGroup', $selGroup);
$t->assign('groups', $groups);
$t->assign('albums', $albums);
$t->assign('totalPages', $totalPages);
$t->assign('page', $page);

$t->assign('lang_usermgr_php', $lang_usermgr_php);
$t->assign('lang_register_php', $lang_register_php);
$t->assign('lang_byte_units', $lang_byte_units);
$t->assign('lang_yes', $lang_yes);
$t->assign('lang_no', $lang_no);

if (!USER_ID) {
  $t->assign('loggedin', 0);
} else {
  $t->assign('loggedin', 1);
}

$t->assign('GALLERY_ADMIN_MODE', GALLERY_ADMIN_MODE);
$t->assign('USER_ADMIN_MODE', USER_ADMIN_MODE);
$t->assign('USER_CAN_CREATE_ALBUMS', $auth->isDefined("USER_CAN_CREATE_ALBUMS"));
$t->assign('USER_IS_ADMIN', $auth->isDefined("USER_IS_ADMIN"));
$t->assign('USER_CAN_UPLOAD_PICTURES', $auth->isDefined("USER_CAN_UPLOAD_PICTURES"));
$t->assign('REFERER', $REFERER);
$t->assign('cat', $cat);
$t->assign('USER_NAME', $auth->isDefined("USER_NAME"));
$t->assign('my_cat_id', FIRST_USER_CAT + $auth->isDefined("USER_ID"));
/**#@-*/

$t->assign("CONTENT", $t->fetchHTML("common/usermgr.html"));

/**
 * Cleanup connections, freeze objects in session, set user cookie.
 */
include ('include/cleanUp.inc.php');

$t->display ('main.html');

?>
