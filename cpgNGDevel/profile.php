<?php
/**
 * profile.php
 *
 * Script to update user information and password.
 * This controller is still messy. Lot of this stuff needs to be
 * moved to model - cpgProcessUsers.class.php
 *
 * @package cpgNG
 * @author Aditya <adityamooley@sanisoft.com>
 * @version $Id$
 */

/**#@+
 * Constant to prevent direct execution of config.inc.php
 */
define('IN_COPPERMINE', true);
define('PROFILE_PHP', true);
/**#@-*/

require('include/init.inc.php');
include("include/smilies.inc.php");

/**#@+
 * Include all the classes
 */
require_once('classes/cpgTemplate.class.php');
require_once('classes/cpgProcessUsers.class.php');
/**#@-*/

$objUser = new cpgProcessUsers;

$auth->view_profile($_GET['uid']);

$op = isset($_GET['op']) ? $_GET['op'] : '';
$uid = isset($_GET['uid']) ? (int)$_GET['uid'] : -1;
if (isset($_POST['change_pass'])) {
  $op = 'change_pass';
}

if (isset($_POST['change_profile']) && USER_ID && UDB_INTEGRATION == 'coppermine') {
  if ($objUser->changeProfile()) {
    $miscArr['success']['profileChanged'] = 1;
  } else {
    $miscArr['error']['profileChange'] = 1;
  }
  $op = 'edit_profile';
}

if (isset($_POST['change_password']) && USER_ID && UDB_INTEGRATION == 'coppermine') { //!defined('UDB_INTEGRATION')) {
  $result = $objUser->changePassword();

  if ($result == 1) {
    $miscArr['success']['passwordChanged'] = 1; //$lang_register_php['pass_chg_success'];
    $op = 'edit_profile';
  } else {
    $miscArr['error'] = $result;
    $op = 'change_pass';
  }
}


switch ($op) {
  case 'edit_profile' :
    if (!$auth->isDefined("USER_ID")) {
      cpgUtils::cpgDie(ERROR, $lang_errors['access_denied']);
    }

    if (defined('UDB_INTEGRATION')) {
      $auth->edit_profile($auth->isDefined("USER_ID"));
    }

    $sql = "SELECT
              user_name, user_email, user_group, UNIX_TIMESTAMP(user_regdate) as user_regdate, group_name,
              user_profile1, user_profile2, user_profile3, user_profile4, user_profile5, user_profile6, user_group_list,
              COUNT(pid) as pic_count, ROUND(SUM(total_filesize)/1024) as disk_usage, group_quota
            FROM
              {$config->conf['TABLE_USERS']} AS u
            INNER JOIN
              {$config->conf['TABLE_USERGROUPS']} AS g
            ON
              user_group = group_id
            LEFT JOIN
              {$config->conf['TABLE_PICTURES']} AS p
            ON
              p.owner_id = u.user_id
            WHERE
              user_id ='" . $auth->isDefined("USER_ID") . "'
            GROUP BY
              user_id ";

    $db->query($sql);

    if (!$db->nf()) {
      cpgUtils::cpgDie(ERROR, $lang_register_php['err_unk_user']);
    }
    $userData = $db->fetchRow();

    $group_list = '';
    if ($userData['user_group_list'] != '') {
      $sql = "SELECT group_name " . "FROM {$config->conf['TABLE_USERGROUPS']} " . "WHERE group_id IN ({$userData['user_group_list']}) AND group_id != {$userData['user_group']} " . "ORDER BY group_name";
      $db->query($sql);
      while ($row = $db->fetchRow()) {
          $group_list .= $row['group_name'] . ', ';
      }
      $group_list = '<br /><i>(' . substr($group_list, 0, -2) . ')</i>';
    }

    $formData = array($lang_register_php['username'] => $userData['user_name'],
                      $lang_register_php['reg_date'] => cpgUtils::localisedDate($userData['user_regdate'], $register_date_fmt),
                      $lang_register_php['group'] => $userData['group_name'] . $group_list,
                      $lang_register_php['email'] => $userData['user_email'],
                      $lang_register_php['disk_usage'] => $userData['disk_usage'] .
                      ($userData['group_quota'] ? '/' . $userData['group_quota'] : '') . '&nbsp;' . $lang_byte_units[1],
                      );

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
    $title = sprintf($lang_register_php['x_s_profile'], USER_NAME);
    $subTitle = $title;
    break;

  case 'change_pass' :
    if (!$auth->isDefined("USER_ID")) {
      cpgUtils::cpgDie(ERROR, $lang_errors['access_denied']);
    }

    // Just a sanity check (should get caught when user clicks 'My Profile')
    if (UDB_INTEGRATION != 'coppermine') {
      $auth->edit_profile($auth->isDefined("USER_ID"));
    }

    $title = $lang_register_php['change_pass'];
    $subTitle = $title;
    break;

  default:
    $userData = $auth->get_user_infos($uid);

    if (count($auth->forbiddenSetData)) {
      $albStr = ' AND aid NOT IN (' . implode (',', $auth->forbiddenSetData) . ')';
    }

    $query = "SELECT count(pid) AS totalPic, MAX(pid) maxpid
              FROM
                  {$config->conf['TABLE_PICTURES']} WHERE owner_id = '$uid' AND
                  approved = 'YES'
                  $albStr";
    $db->query($query);
    $pictureCount = $db->f('totalPic');
    $thumbpid = $db->f('maxpid');

    $query = "SELECT count(aid) totalAlbum FROM {$config->conf['TABLE_ALBUMS']} WHERE category = '" . (FIRST_USER_CAT + $uid) . "' $albStr";
    $db->query($query);
    $albumCount = $db->f('totalAlbum');

    $query = "SELECT count(msg_id) totalComment, MAX(msg_id) AS maxComment
              FROM
                {$config->conf['TABLE_COMMENTS']} as c, {$config->conf['TABLE_PICTURES']} as p WHERE c.pid = p.pid AND author_id = '$uid' $albStr";
    $db->query($query);
    $commentCount = $db->f('totalComment');
    $lastCommentid = $db->f('maxComment');

    $query = "SELECT count(pid) AS totalPic FROM {$config->conf['TABLE_PICTURES']} WHERE owner_name = '{$userData['user_name']}'";
    $db->query($query);
    $picCount = $db->f('totalPic');

    $lastcom = '';
    if ($commentCount) {
      $sql = "SELECT filepath, filename, url_prefix, pwidth, pheight, msg_author, UNIX_TIMESTAMP(msg_date) as msg_date, msg_body
              FROM {$config->conf['TABLE_COMMENTS']} AS c, {$config->conf['TABLE_PICTURES']} AS p
              WHERE
                msg_id='$lastCommentid' AND c.pid = p.pid";
      $db->query($sql);
      if ($db->nf()) {
        $row = $db->fetchRow();
        $miscArr['lastCommentPic'] =  cpgUtils::getPicUrl($row, 'thumb');
        if (!is_image($row['filename'])) {
          $image_info = getimagesize(urldecode($pic_url));
          $row['pwidth'] = $image_info[0];
          $row['pheight'] = $image_info[1];
        }
        $mime_content = cpg_get_type($row['filename']);
        $miscArr['lastCommentDate'] = cpgUtils::localisedDate($row['msg_date'], $lastcom_date_fmt);
        $miscArr['lastCommentMesg'] = cpgUtils::bbDecode(process_smilies($row['msg_body']));
      }
    }

    $user_thumb = '';
    if ($pictureCount) {
      $sql = "SELECT filepath, filename, url_prefix, pwidth, pheight FROM {$config->conf['TABLE_PICTURES']} WHERE pid='$thumbpid'";
      $db->query($sql);
      if ($db->nf()) {
          $picture = $db->fetchRow();
          $miscArr['lastupPic'] =  cpgUtils::getPicUrl($picture, 'thumb');
          if (!is_image($picture['filename'])) {
            $image_info = getimagesize(urldecode($pic_url));
            $picture['pwidth'] = $image_info[0];
            $picture['pheight'] = $image_info[1];
          }
          $mime_content = cpg_get_type($picture['filename']);
      }
    }

    $formData = array('username' => $userData['user_name'],
                      'reg_date' => cpgUtils::localisedDate($userData['user_regdate'], $register_date_fmt),
                      'group' => $userData['group_name'],
                      'user_profile1' => $userData['user_profile1'],
                      'user_profile2' => $userData['user_profile2'],
                      'user_profile3' => $userData['user_profile3'],
                      'user_profile4' => $userData['user_profile4'],
                      'user_profile5' => $userData['user_profile5'],
                      'user_profile6' => cpgutils::bbDecode($userData['user_profile6']),
                      'pic_count'     => $picCount
                      );

    $subTitle = sprintf($lang_register_php['x_s_profile'], $userData['user_name']);
    break;
}

$t = new cpgTemplate;

/**#@+
 * Assign all the data to smarty
 */

$t->assign('SUB_TITLE', $subTitle);
$t->assign('GALLERY_DESCRIPTION', $config->conf['gallery_description']);

$t->assign('formData', $formData);
$t->assign('userData', $userData);
$t->assign('userFields', $userFields);
$t->assign('miscArr', $miscArr);

$t->assign('lang_usermgr_php', $lang_usermgr_php);
$t->assign('lang_byte_units', $lang_byte_units);
$t->assign('lang_register_php', $lang_register_php);

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
$t->assign('op', $op);
/**#@-*/

$t->assign("CONTENT", $t->fetchHTML("common/profile.html"));

/**
 * Cleanup connections, freeze objects in session, set user cookie.
 */
include ('include/cleanUp.inc.php');

$t->display ('main.html');

?>
