<?php
/**
 * editOnePic.php
 *
 * Script to edit single picture.
 *
 * @package cpgNG
 * @author Abbas <abbas@sanisoft.com>
 * @version $Id$
 */

/**#@+
 * Constant to prevent direct execution of config.inc.php
 */
define('IN_COPPERMINE', true);
define('EDITPICS_PHP', true);
define('UPLOAD_PHP', true);
/**#@-*/

require('include/init.inc.php');

/**#@+
 * Include all the classes
 */
require_once('classes/cpgTemplate.class.php');
require_once('classes/cpgProcessPicture.class.php');
require_once('classes/cpgAlbumFactory.class.php');
/**#@-*/

if (!(GALLERY_ADMIN_MODE || USER_ADMIN_MODE)) {
  cpgUtils::cpgDie(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);
}

$t = new cpgTemplate;

if (isset($_REQUEST['pid'])) {
  $pid = (int)$_REQUEST['pid'];
} else {
  cpgUtils::cpgDie(ERROR, $lang_errors['non_exist_ap'], __FILE__, __LINE__);
}

if (isset($_POST['submitDescription'])) {
  cpgProcessPicture::updatePicture($pid);
  $picUpdated = $lang_editpics_php['update_success'];
  $t->assign('picUpdated', $picUpdated);
}

$query = "SELECT *, p.title AS title FROM {$config->conf['TABLE_PICTURES']} AS p, {$config->conf['TABLE_ALBUMS']} AS a WHERE a.aid = p.aid AND pid = '$pid'";

$db->query($query);

if ($db->nf()) {
  $currentPic = $db->fetchRow();
} else {
  cpgUtils::cpgDie(ERROR, $lang_errors['non_exist_ap'], __FILE__, __LINE__);
}

/**
 * permission to edit file to admin or picture owner only
 */

if (!(GALLERY_ADMIN_MODE || $currentPic['owner_id'] == $auth->isDefined('USER_ID')) || ($config->conf['users_can_edit_pics'] && $currentPic['owner_id'] == $auth->isDefined('USER_ID'))) {
  cpgUtils::cpgDie(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);
}

$aid = $currentPic['aid'];

/**
 * Create a new album object
 */
$albumData = cpgAlbumFactory::getAlbumObj($aid);

$currentPic['thumbUrl'] = $albumData->__getPicUrl($currentPic, 'thumb');

$currentPic['thumbLink'] = 'displayimage.php?pid='.$currentPic['pid'];

$currentPic['displayFilename'] = htmlspecialchars($currentPic['filename']);

if (GALLERY_ADMIN_MODE && $currentPic['owner_id'] != $auth->isDefined('USER_ID')) {
  $albListArray = cpgUtils::getAlbumListArray($currentPic['owner_id']);
} else {
  $albListArray = cpgUtils::getAlbumListArray();
}

// Sort the pulldown options by category and album name
$albListArray = cpgUtils::array_csort($albListArray,'cat','title');

if (!is_movie($currentPic['filename'])) {
        $currentPic['picInfo'] = sprintf($lang_editpics_php['pic_info_str'], $currentPic['pwidth'], $currentPic['pheight'], ($currentPic['filesize'] >> 10), $currentPic['hits'], $currentPic['votes']);
} else {
        $currentPic['picInfo'] = sprintf($lang_editpics_php['pic_info_str'], '<input type="text" name="pwidth'.$pid.'" value="'.$currentPic['pwidth'].'" size="5" maxlength="5" class="textinput" />', '<input type="text" name="pheight'.$pid.'" value="'.$currentPic['pheight'].'" size="5" maxlength="5" class="textinput" />', ($currentPic['filesize'] >> 10), $currentPic['hits'], $currentPic['votes']);
}

if (defined('UPLOAD_APPROVAL_MODE')) {
        if ($currentPic['owner_name']){
                $currentPic['picInfo'] .= ' - <a href ="profile.php?uid='.$currentPic['owner_id'].'" target="_blank">'.$currentPic['owner_name'].'</a>';
        }
}

/**
* Get the user fields that are set.
*/
$userFields = array();
$thumbRowSpan = 5;
for ($i = 1; $i <= 4; $i++) {
  if (!empty($config->conf["user_field".$i."_name"])) {
    $userFields[$i] = array(
                            "name" => $config->conf["user_field".$i."_name"],
                            "value" => $currentPic["user$i"],
                           );
    $thumbRowSpan++;
  }
}
$currentPic['thumbRowSpan'] = $thumbRowSpan;
$currentPic['maxDescLength'] = $config->conf['max_img_desc_length'];

$t->assign("currentPic", $currentPic);
$t->assign("albListArray", $albListArray);
$t->assign("userFields", $userFields);
$t->assign("lang_editpics_php", $lang_editpics_php);
$t->assign("CONTENT", $t->fetchHTML("common/editOnePic.html"));

/**
 * Assign lang array's
 */
$t->assign("SUB_TITLE", $lang_editpics_php['edit_pics']);

/**
 * Assign user related data
 */
if (!USER_ID) {
  $t->assign("loggedin", 0);
} else {
  $t->assign("loggedin", 1);
}

/**
* Cleanup connections, freeze objects in session, set user cookie.
*/
include ('include/cleanUp.inc.php');

/**
 * Display the common html file
 */
$t->display ("main.html");
?>