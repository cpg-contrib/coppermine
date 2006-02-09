<?php
/**
 * editpics.php
 *
 * Script to edit all the pics of an album
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
/**#@-*/

if (!(GALLERY_ADMIN_MODE || USER_ADMIN_MODE)) {
  cpgUtils::cpgDie(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);
}

$t = new cpgTemplate;

define('UPLOAD_APPROVAL_MODE', isset($_GET['mode']));
define('EDIT_PICTURES_MODE', !isset($_GET['mode']));

if (isset($_GET['album'])) {
        $albumId = (int)$_GET['album'];
} elseif (isset($_POST['album'])) {
        $albumId = (int)$_POST['album'];
} else {
        $albumId = -1;
}

//print_r($_POST);
if (count($_POST['pid'])) {
  foreach ($_POST['pid'] as $pid) {
    cpgProcessPicture::updatePicture($pid);
  }
  $picUpdated = $lang_editpics_php['update_success'];
  $t->assign('picUpdated', $picUpdated);
}

if (UPLOAD_APPROVAL_MODE && !GALLERY_ADMIN_MODE) {
  cpgUtils::cpgDie(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);
}

if (EDIT_PICTURES_MODE) {
    $query = "SELECT title, category FROM {$config->conf['TABLE_ALBUMS']} WHERE aid = '$albumId'";

    $db->query($query);

    if (!$db->nf()) {
      cpgUtils::cpgDie(CRITICAL_ERROR, $lang_errors['non_exist_ap'], __FILE__, __LINE__);
    }

    $albumData = $db->fetchRow();

    $cat = $albumData['category'];
    $actualCat = $cat;

    /*if ($cat != FIRST_USER_CAT + $auth->isDefined('USER_ID') && !GALLERY_ADMIN_MODE) {
      cpgUtils::cpgDie(ERROR, $lang_errors['perm_denied'], __FILE__, __LINE__);
    }*/

} else {
    $albumData = array();
}

$start = isset($_GET['start']) ? (int)$_GET['start'] : 0;
$count = isset($_GET['count']) ? (int)$_GET['count'] : 25;
$miscArr['nextTarget'] = $_SERVER['PHP_SELF'].'?album='.$albumId.'&amp;start='.($start+$count).'&amp;count='.$count.((UPLOAD_APPROVAL_MODE==1)?"&amp;mode=upload_approval":"");
$miscArr['prevTarget'] = $_SERVER['PHP_SELF'].'?album='.$albumId.'&amp;start='.max(0,$start-$count).'&amp;count='.$count.((UPLOAD_APPROVAL_MODE==1)?"&amp;mode=upload_approval":"");
$miscArr['s50'] = $count == 50 ? 'selected' : '';
$miscArr['s75'] = $count == 75 ? 'selected' : '';
$miscArr['s100'] = $count == 100 ? 'selected' : '';

if (UPLOAD_APPROVAL_MODE) {
    $query = "SELECT count(pid) FROM {$config->conf['TABLE_PICTURES']} WHERE approved = 'NO'";

    $db->query($query);

    $nbEnr = $db->fetchRow();
    $miscArr['picCount'] = $nbEnr[0];

    /**
     * Database oject to be used inside while loop
     */
    $db2 = new cpgDB;
    // Update user names for pictures
    $sql = "SELECT pid, owner_id FROM {$config->conf['TABLE_PICTURES']} WHERE owner_id != 0 AND owner_name = ''";

    $db->query($sql);

    while($row = $db->fetchRow()) {
            if(defined('UDB_INTEGRATION')) {
              $ownerName = $auth->get_user_name($row['owner_id']);
            } else {
              $query = "SELECT user_name FROM {$config->conf['TABLE_USERS']} WHERE user_id = '".$row['owner_id']."'";

              $db2->query($query);

              if ($db2->nf()){
                $row2 = $db2->fetchRow();
                $ownerName = $row2['user_name'];
              } else {
                $ownerName = '';
              }
            }

            if($ownerName){
              $query = "UPDATE {$config->conf['TABLE_PICTURES']} SET owner_name = '$ownerName' WHERE pid = {$row['pid']} LIMIT 1";
              $db2->query($query);
            } else {
              $query = "UPDATE {$config->conf['TABLE_PICTURES']} SET owner_id = 0 WHERE pid = {$row['pid']} LIMIT 1";
              $db2->query($query);
            }
    }


    $sql =  "SELECT * ".
                        "FROM {$config->conf['TABLE_PICTURES']} ".
                        "WHERE approved = 'NO' ".
                        "ORDER BY pid ".
                        "LIMIT $start, $count";

    $db->query($sql);
    $miscArr['formTarget'] = $_SERVER['PHP_SELF'].'?mode=upload_approval&amp;start='.$start.'&amp;count='.$count;
    $miscArr['title'] = $lang_editpics_php['upl_approval'];
    $miscArr['help'] = '';
} else {
    $query = "SELECT count(*) FROM {$config->conf['TABLE_PICTURES']} WHERE aid = '$albumId'";
    $db->query($query);
    $nbEnr = $db->fetchRow();
    $miscArr['picCount'] = $nbEnr[0];

    $query = "SELECT * FROM {$config->conf['TABLE_PICTURES']} WHERE aid = '$albumId' ORDER BY filename LIMIT $start, $count";
    $db->query($query);
    $miscArr['formTarget'] = $_SERVER['PHP_SELF'].'?album='.$albumId.'&start='.$start.'&count='.$count;
    $miscArr['title'] = $lang_editpics_php['edit_pics'];
    $miscArr['help'] = '&nbsp;'.cpgUtils::cpgDisplayHelp('f=index.htm&as=edit_pics&ae=edit_pics_end&top=1', '800', '500');
}

if (!$db->nf()) {
  cpgUtils::cpgDie(INFORMATION, $lang_errors['no_img_to_display'], __FILE__, __LINE__);
}

$picData = $db->fetchRowSet();

foreach ($picData as $key => $pic) {
  if (!is_movie($pic['filename'])) {
    $picData[$key]['picInfo'] = sprintf($lang_editpics_php['pic_info_str'], $pic['pwidth'], $pic['pheight'], ($pic['filesize'] >> 10), $pic['hits'], $pic['votes']);
  } else {
    $picData[$key]['picInfo'] = sprintf($lang_editpics_php['pic_info_str'], '<input type="text" name="pwidth'.$pic['pid'].'" value="'.$pic['pwidth'].'" size="5" maxlength="5" class="textinput" />', '<input type="text" name="pheight'.$pic['pid'].'" value="'.$pic['pheight'].'" size="5" maxlength="5" class="textinput" />', ($pic['filesize'] >> 10), $pic['hits'], $pic['votes']);
  }

  if (UPLOAD_APPROVAL_MODE) {
    if($pic['owner_name']){
      $picData[$key]['picInfo'] .= ' - <a href ="profile.php?uid='.$pic['owner_id'].'" target="_blank">'.$pic['owner_name'].'</a>';
    }
  }

  $picData[$key]['thumbUrl'] = cpgUtils::getPicUrl($pic, 'thumb');
  $picData[$key]['thumbLink'] = 'displayimage.php?pid=' . $pic['pid'];
  $picData[$key]['displayFilename'] = htmlspecialchars($pic['filename']);

  /**
  * Get the user fields that are set.
  */
  $userFields = array();
  $thumbRowSpan = 5;
  for ($i = 1; $i <= 4; $i++) {
    if (!empty($config->conf["user_field".$i."_name"])) {
      $userFields[$i] = array(
                              "name" => $config->conf["user_field".$i."_name"],
                              "value" => $pic["user$i"],
                            );
      $thumbRowSpan++;
    }
  }
  $picData[$key]['thumbRowSpan'] = $thumbRowSpan;
  $picData[$key]['userFields'] = $userFields;

  /**
   * Get the user albums
   */
    $userAlbumsArray = cpgUtils::getUserAlbums($pic['owner_id']);
    $picData[$key]['userAlbumsArray'] = $userAlbumsArray;
}

if ($start + $count < $miscArr['picCount']) {
    $miscArr['nextLink'] = "<a href=\"{$miscArr['nextTarget']}\"><b>{$lang_editpics_php['see_next']}</b></a>&nbsp;&nbsp;-&nbsp;&nbsp;";
} else {
        $miscArr['nextLink'] = '';
}

if ($start > 0) {
    $miscArr['prevLink'] = "<a href=\"{$miscArr['prevTarget']}\"><b>{$lang_editpics_php['see_prev']}</b></a>&nbsp;&nbsp;-&nbsp;&nbsp;";
} else {
        $miscArr['prevLink'] = '';
}

$miscArr['picCountText'] = sprintf($lang_editpics_php['n_pic'], $miscArr['picCount']);

if ($config->conf['show_bbcode_help']) {
  $miscArr['bbcodeHelp'] = cpgUtils::cpgDisplayHelp('f=index.html&base=64&h='.urlencode(base64_encode(serialize($lang_bbcode_help_title.'&nbsp;'))).'&t='.urlencode(base64_encode(serialize($lang_bbcode_help))),470,245);
}

$publicAlbumsArray = cpgUtils::getPublicAlbums();

// Sort the pulldown options by category and album name
$userAlbumsArray = cpgUtils::array_csort($userAlbumsArray,'cat','title');
$publicAlbumsArray = cpgUtils::array_csort($publicAlbumsArray,'cat','title');

$miscArr['mode']= (UPLOAD_APPROVAL_MODE == 1) ? "&mode=upload_approval":"";
$miscArr['cat'] = (isset($actualCat))? "?cat=$actualCat" : (isset($cat) ? "?cat=$cat" : '');
$miscArr['albumId'] = $albumId;
$miscArr['start'] = $start;
$miscArr['count'] = $count;

$t->assign("picData", $picData);
$t->assign("publicAlbumsArray", $publicAlbumsArray);
$t->assign("miscArr", $miscArr);
$t->assign("lang_editpics_php", $lang_editpics_php);
$t->assign("CONTENT", $t->fetchHTML("common/editpics.html"));

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