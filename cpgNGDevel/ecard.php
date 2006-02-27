<?php

/**
 * ecard.php
 *
 * This script is used to send/preview ecard
 *
 * @package cpgNG
 * @author Amit <amit@sanisoft.com>
 * @version $Id$
 */

/**
 * Constant to prevent direct execution of config.inc.php
 */
define('IN_COPPERMINE', true);
define('ECARDS_PHP', true);

/**
 * Require files
 */
require('include/init.inc.php');
require('include/smilies.inc.php');
require_once('classes/cpgTemplate.class.php');
require_once('classes/cpgProcessEcard.class.php');

if (!USER_CAN_SEND_ECARDS) cpgUtils::cpgDie(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);

$meta = $_GET['meta'];
$cat = (int)$_GET['cat'];
$pid = (int)$_GET['pid'];
$pos = (int)$_GET['pos'];
$album = (int)$_GET['album'];

/**
 * Create new template object
 */
$t = new cpgTemplate;

/**
 * Create new ecard object
 */
$ecard = new cpgProcessEcard;

$ecard->buildSendEcardForm($pid);

$t->assign('pid', $pid);
$t->assign('showEcardForm', 1);
$t->assign('lang_ecard_php', $lang_ecard_php);

if (isset($_POST['preview'])) {
  $ecard->buildEcardPreview($pid);

  $t->assign('ecard', $ecard);
  $t->assign('showHeaderFooter', 0);
  $t->assign('templateType', 'html');

  $t->assign('ecardOutput', $t->fetch('common/ecardTemplate.html'));

  $t->assign('showEcard', 1);
} else if (isset($_POST['submit'])) {
  if (empty($ecard->senderEmailWarning) && empty($ecard->recipientEmailWarning)) {
    $ecard->sendEcard($pid);

    $t->assign('ecard', $ecard);
    $t->assign('showHeaderFooter', 0);
    $t->assign('templateType', 'html');

    $t->assign('ecardOutput', $t->fetch('common/ecardTemplate.html'));

    $t->assign('showEcard', 1);
    $t->assign('showEcardForm', 0);

    $t->assign('msgTitle', $lang_cpg_die[INFORMATION]);
    $t->assign('msgText', $lang_ecard_php['send_success']);
    $t->assign('buttonText', $lang_continue);

    $buttonLink = 'displayimage.php?';

    if (!empty($album)) {
      $buttonLink .= 'album='.$album.'&amp;';
    }

    if (!empty($cat)) {
      $buttonLink .= 'cat='.$cat.'&amp;';
    }

    if (!empty($meta)) {
      $buttonLink .= 'meta='.$meta.'&amp;';

      if ($meta == 'lastupby') {
        $buttonLink .= 'uid='.(int)$_GET['uid'].'&amp;';
      }
    }

    if (empty($album) && empty($cat) && empty($meta)) {
      $buttonLink .= 'pid='.$pid;
    } else {
      $buttonLink .= 'pos='.$pos;
    }

    $t->assign('buttonLink', $buttonLink);
    $t->assign('width', $config->conf['picture_table_width']);

    $ecard->continueBox = $t->fetch('common/msgBox.html');
  }
}

$t->assign('ecard', $ecard);

/**
 * Fetch page content
 */
$t->assign('CONTENT', $t->fetchHTML('common/ecard.html'));

/**
 * Code to show/display 'Logout' link
 */
if (!USER_ID) {
  $t->assign('loggedin', 0);
} else {
  $t->assign('loggedin', 1);
}

/**
 * Assign sub-title of page
 */
$t->assign('SUB_TITLE', $lang_ecard_php['title']);

/**
 * Cleanup connections, freeze objects in session, set user cookie.
 */
include ('include/cleanUp.inc.php');

/**
 * Display common template
 */
$t->display('main.html');

?>
