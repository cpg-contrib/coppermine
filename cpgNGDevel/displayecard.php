<?php

/**
 * displayecard.php
 *
 * This script is used to display ecard
 *
 * @package cpgNG
 * @author Amit <amit@sanisoft.com>
 * @version $Id$
 */

/**
 * Constant to prevent direct execution of config.inc.php
 */
define('IN_COPPERMINE', true);
define('DISPLAYECARD_PHP', true);

/**
 * Require files
 */
require('include/init.inc.php');
require('include/smilies.inc.php');
require_once('classes/cpgTemplate.class.php');
require_once('classes/cpgProcessEcard.class.php');

if (!isset($_GET['data'])) cpgUtils::cpgDie(CRITICAL_ERROR, $lang_errors['param_missing'], __FILE__, __LINE__);

$data = array();
$data = @unserialize(@base64_decode($_GET['data']));

/**
 * Code for attempt to obtain full link from db if ecard logging enabled and min 12 chars of data is provided and only 1 match
 */
if (!is_array($data) && $config->conf['log_ecards'] && (strlen($_GET['data']) > 12)) {
  $query = 'SELECT link FROM '.$config->conf['TABLE_ECARDS']." WHERE link LIKE '".$_GET['data']."%'";
  $db->query($query);

  if ($db->nf() === 1) {
    $row = $db->fetchRow();

    $data = @unserialize(@base64_decode($row['link']));
  }
}

if (is_array($data)) {
  /**
   * Code to remove HTML tags as we can't trust what we receive
   */
  foreach($data as $key => $value) $data[$key] = strtr($value, $HTML_SUBST);

  /**
   * Create new template object
   */
  $t = new cpgTemplate;

  /**
   * Create new ecard object
   */
  $ecard = new cpgProcessEcard;

  $ecard->langDir = $lang_text_dir;
  $ecard->title = sprintf($lang_ecard_php['ecard_title'], $data['sn']);
  $ecard->charset = ($config->conf['charset'] == 'language file' ? $lang_charset : $config->conf['charset']);
  $ecard->viewEcardTgt = '';
  $ecard->viewEcardLnk = '';
  $ecard->picUrl = $data['p'];
  $ecard->urlPrefix = '';
  $ecard->greetings = $data['g'];
  $ecard->messagePreview = cpgUtils::bbDecode(process_smilies($data['m']));
  $ecard->senderEmail = $data['se'];
  $ecard->senderName = $data['sn'];
  $ecard->viewMoreTgt = $config->conf['ecards_more_pic_target'];
  $ecard->viewMoreLnk = $lang_ecard_php['view_more_pics'];
  $pid = (int)$data['pid'];
  $ecard->picTitle = $data['pt'];
  $ecard->picCaption = $data['pc'];

  $t->assign('pid', $pid);
  $t->assign('ecard', $ecard);
  $t->assign('showHeaderFooter', 1);
  $t->assign('templateType', 'html');

  /**
   * Cleanup connections, freeze objects in session, set user cookie.
   */
  include ('include/cleanUp.inc.php');

  /**
   * Display template
   */
  echo $t->fetch('common/ecardTemplate.html');
} else {
  cpgUtils::cpgDie(CRITICAL_ERROR, $lang_displayecard_php['invalid_data'], __FILE__, __LINE__);
}

?>