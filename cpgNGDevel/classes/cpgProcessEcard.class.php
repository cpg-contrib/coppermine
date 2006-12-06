<?php

/**
 * cpgProcessEcard
 *
 * This class is used to process ecards
 *
 * @package cpgNG
 * @author amit
 * @copyright Copyright (c) 2005
 * @version $Id$
 * @access public
 */
class cpgProcessEcard {
  var $config;

  /**
   * cpgProcessEcard()
   *
   * Constructor of class
   *
   * @param
   * @return
   */
  function cpgProcessEcard() {
    $this->config = cpgConfig::getInstance();
  } // End of method 'cpgProcessEcard'

  /**
   * getPostVar()
   *
   * Method to return value of a particular key if it is in $_POST array or return default value
   *
   * @param $name
   * @param $default
   * @return
   */
  function getPostVar($name, $default = '') {
    return (isset($_POST[$name]) ? $_POST[$name] : $default);
  } // End of method 'getPostVar'

  /**
   * buildSendEcardForm()
   *
   * Method to build values for send ecard form
   *
   * @param $pid
   * @return
   */
  function buildSendEcardForm($pid) {
    global $lang_errors, $lang_ecard_php, $lang_bbcode_help, $lang_bbcode_help_title;

    $pid = (int)$pid;

    $db = cpgDB::getInstance();
    $auth = cpgAuth::getInstance();

    /**
     * Code to get picture thumbnail url
     */
    $query = 'SELECT * FROM '.$this->config->conf['TABLE_PICTURES']." WHERE pid = '$pid'";
    $db->query($query);

    if ($db->nf() <= 0) {
      cpgUtils::cpgDie(ERROR, $lang_errors['non_exist_ap'], __FILE__, __LINE__);
    }

    $row = $db->fetchRow();

    if (!is_image($row['filename'])) cpgUtils::cpgDie(ERROR, $lang_ecard_php['error_not_image'], __FILE__, __LINE__);

    $this->thumbPicUrl = cpgUtils::getPicUrl($row, 'thumb');

    if (count($_POST) > 0) {
      $this->picTitle = $row['title'];
      $this->picCaption = cpgUtils::bbDecode($row['caption']);

      if ($this->config->conf['make_intermediate'] && max($row['pwidth'], $row['pheight']) > $this->config->conf['picture_width']) {
        $this->nPicname = cpgUtils::getPicUrl($row, 'normal');
      } else {
        $this->nPicname = cpgUtils::getPicUrl($row, 'fullsize');
      }
    }

    $USER_DATA = array();
    $USER_DATA = $auth->userData;

    $this->senderName = $this->getPostVar('sender_name', USER_NAME ? USER_NAME : (isset($auth->user['name']) ? $auth->user['name'] : ''));
    /* UDB_INTEGRATION exception No longer needed. --Donnoman */
/*    if (UDB_INTEGRATION != 'coppermine' && USER_ID) $USER_DATA = array_merge($USER_DATA, $auth->get_user_infos(USER_ID));*/
    if (USER_ID) $USER_DATA = array_merge($USER_DATA, $auth->get_user_infos(USER_ID));


    if ($USER_DATA['user_email']){
      $this->senderEmail = $USER_DATA['user_email'];
      $this->senderEmailBox = 'N';
    } else {
      $this->senderEmail = $this->getPostVar('sender_email', $auth->user['email'] ? $auth->user['email'] : '');
      $this->senderEmailBox = 'Y';
    }

    $this->senderEmailWarning = '';
    $this->recipientName = $this->getPostVar('recipient_name');
    $this->recipientEmail = $this->getPostVar('recipient_email');
    $this->recipientEmailWarning = '';
    $this->greetings = $this->getPostVar('greetings');

    if ($this->config->conf['show_bbcode_help']) {
      $this->captionLabel = '&nbsp;'.cpgUtils::cpgDisplayHelp('f=index.html&amp;base=64&amp;h='.urlencode(base64_encode(serialize($lang_bbcode_help_title))).'&amp;t='.urlencode(base64_encode(serialize($lang_bbcode_help))), 470, 245);
    } else {
      $this->captionLabel = '';
    }

    $this->message = $this->getPostVar('message');

    $validEmailPattern = '^[_\.0-9a-z\-]+@([0-9a-z][0-9a-z-]+\.)+[a-z]{2,6}$';
    $validSenderEmail = eregi($validEmailPattern, $this->senderEmail);
    $validRecipientEmail = eregi($validEmailPattern, $this->recipientEmail);

    if (!$validSenderEmail && count($_POST) > 0) $this->senderEmailWarning = '<font size="1">'.$lang_ecard_php['invalid_email'].' ('.$this->senderEmail.')</font>';
    if (!$validRecipientEmail && count($_POST) > 0) $this->recipientEmailWarning = '<font size="1">'.$lang_ecard_php['invalid_email'].' ('.$this->recipientEmail.')</font>';
  } // End of method 'buildSendEcardForm'

  /**
   * buildEcardPreview()
   *
   * Method to build values for ecard preview
   *
   * @param $pid
   * @return
   */
  function buildEcardPreview($pid) {
    global $lang_ecard_php;

    $pid = (int)$pid;

    $galleryUrlPrefix = $this->config->conf['ecards_more_pic_target'].(substr($this->config->conf['ecards_more_pic_target'], -1) == '/' ? '' : '/');

    if (!stristr($this->nPicname, 'http:')) $this->nPicname = $galleryUrlPrefix.$this->nPicname;

    $msgContent = process_smilies($this->message, $galleryUrlPrefix);

    $this->viewEcardTgt = $galleryUrlPrefix.'displayecard.php?data=';
    $this->viewEcardLnk = $lang_ecard_php['preview_view_ecard'];
    $this->picUrl = $this->nPicname;
    $this->urlPrefix = $galleryUrlPrefix;
    $this->messagePreview = cpgUtils::bbDecode($msgContent);
    $this->viewMoreTgt = $this->config->conf['ecards_more_pic_target'];
    $this->viewMoreLnk = $lang_ecard_php['view_more_pics'];
  } // End of method 'buildEcardPreview'

  /**
   * sendEcard()
   *
   * Method to send ecard
   *
   * @param $pid
   * @return
   */
  function sendEcard($pid) {
    global $lang_charset, $lang_text_dir, $lang_ecard_php, $comment_date_fmt;

    $pid = (int)$pid;

    $db = cpgDB::getInstance();
    $auth = cpgAuth::getInstance();

    $galleryUrlPrefix = $this->config->conf['ecards_more_pic_target'].(substr($this->config->conf['ecards_more_pic_target'], -1) == '/' ? '' : '/');

    if (!stristr($this->nPicname, 'http:')) $this->nPicname = $galleryUrlPrefix.$this->nPicname;

    $msgContent = process_smilies($this->message, $galleryUrlPrefix);

    $data = array(
                  'sn' => $_POST['sender_name'],
                  'se' => $this->senderEmail,
                  'p' => $this->nPicname,
                  'g' => $this->greetings,
                  'm' => $this->message,
                  'pid' => $pid,
                  'pt' => $this->picTitle,
                  'pc' => $this->picCaption,
                  );

    $encodedData = urlencode(base64_encode(serialize($data)));

    $this->langDir = $lang_text_dir;
    $this->title = sprintf($lang_ecard_php['ecard_title'], $this->senderName);
    $this->charset = ($this->config->conf['charset'] == 'language file' ? $lang_charset : $this->config->conf['charset']);
    $this->viewEcardTgt = $galleryUrlPrefix.'displayecard.php?data='.$encodedData;
    $this->viewEcardLnk = $lang_ecard_php['view_ecard'];
    $this->viewEcardLnkPlaintext = $lang_ecard_php['view_ecard_plaintext'];
    $this->picUrl = $this->nPicname;
    $this->urlPrefix = $galleryUrlPrefix;
    $this->messagePreview = cpgUtils::bbDecode($msgContent);
    $this->plaintextMessage = $this->message;
    $this->viewMoreTgt = $this->config->conf['ecards_more_pic_target'];
    $this->viewMoreLnk = $lang_ecard_php['view_more_pics'];

    $t = cpgTemplate::getInstance();

    $t->assign('pid', $pid);
    $t->assign('ecard', $this);
    $t->assign('showHeaderFooter', 1);
    $t->assign('templateType', 'html');

    $message = $t->fetch('common/ecardTemplate.html');

    $t->assign('showHeaderFooter', 0);
    $t->assign('templateType', 'text');

    $plaintextMessage = $t->fetch('common/ecardTemplate.html');

    $tempTime = time();
    $message .= sprintf($lang_ecard_php['ecards_footer'], $this->senderName, $_SERVER['REMOTE_ADDR'], cpgUtils::localisedDate(-1, $comment_date_fmt));
    $subject = sprintf($lang_ecard_php['ecard_title'], $this->senderName);

    $result = cpgUtils::cpgMail($this->recipientEmail, $subject, $message, 'text/html', $this->senderName, $this->senderEmail, $plaintextMessage);

    /**
     * Code to write ecard log
     */
    if ($this->config->conf['log_ecards'] == 1) {
      $query = 'INSERT INTO '.$this->config->conf['TABLE_ECARDS']." SET sender_name = '".$this->senderName."', sender_email = '".$this->senderEmail."', recipient_name = '".$this->recipientName."', recipient_email = '".$this->recipientEmail."', link = '$encodedData', date = '$tempTime', sender_ip = '".$_SERVER['REMOTE_ADDR']."'";
      $db->query($query);
    }

    if (!USER_ID) {
      $auth->user['name'] = $this->senderName;
      $auth->user['email'] = $this->senderEmail;
    }

    if (!$result) {
      cpgUtils::cpgDie(ERROR, $lang_ecard_php['send_failed'], __FILE__, __LINE__);
    }
  } // End of method 'sendEcard'

  /**
   * cpgGetUrlVars()
   *
   * Method to build URL with arguments from $_GET except $exception
   *
   * @param $exception
   * @return $cpgGetUrl
   */
  function cpgGetUrlVars($exception) {
    $cpgGetUrl = $_SERVER['SCRIPT_NAME'].'?';

    foreach ($_GET as $key => $value) {
      if ($key != $exception) {
        $cpgGetUrl .= $key.'='.$value.'&';
      }
    }

    return $cpgGetUrl;
  } // End of method 'cpgGetUrlVars'

  /**
   * buildEcards()
   *
   * Method to build ecards
   *
   * @param
   * @return
   */
  function buildEcards() {
    global $lastcom_date_fmt, $lang_db_ecard_php, $lang_errors;

    $this->ecards = array();
    $db = cpgDB::getInstance();

    $query = 'SELECT COUNT(*) AS totalEcards FROM '.$this->config->conf['TABLE_ECARDS'];
    $db->query($query);

    $row = $db->fetchRow();

    if ($row['totalEcards'] <= 0) {
      cpgUtils::cpgDie(INFORMATION, $lang_errors['ecards_empty'], __FILE__, __LINE__);
    }

    $totalEcards = (int)$row['totalEcards'];

    $sort = (isset($_REQUEST['sort']) ? $_REQUEST['sort'] : '');
    $start = (isset($_REQUEST['start']) ? $_REQUEST['start'] : '');
    $count = (isset($_REQUEST['count']) ? $_REQUEST['count'] : '');

    $sortBy = 'date';
    $sortDirection = 'DESC';
    $sortText = $lang_db_ecard_php['ecard_by_date'];
    $sortDirectionText = $lang_db_ecard_php['ecard_descending'];

    if (!$start) {
      $startFrom = 0;
    } else {
      $startFrom = (int)$start;
    }

    if (!$count) {
      $countTo = 25;
    } else {
      $countTo = (int)$count;
    }

    $tabOutput = '';

    switch ($sort) {
      case 'snd' :
        $sortBy = 'sender_name';
        $sortDirection = 'DESC';
        $sortText = $lang_db_ecard_php['ecard_by_sender_name'];
        break;
      case 'sna' :
        $sortBy = 'sender_name';
        $sortDirection = 'ASC';
        $sortText = $lang_db_ecard_php['ecard_by_sender_name'];
        break;
      case 'sed' :
        $sortBy = 'sender_email';
        $sortDirection = 'DESC';
        $sortText = $lang_db_ecard_php['ecard_by_sender_email'];
        break;
      case 'sea' :
        $sortBy = 'sender_email';
        $sortDirection = 'ASC';
        $sortText = $lang_db_ecard_php['ecard_by_sender_email'];
        break;
      case 'id' :
        $sortBy = 'sender_ip';
        $sortDirection = 'DESC';
        $sortText = $lang_db_ecard_php['ecard_by_sender_ip'];
        break;
      case 'ia' :
        $sortBy = 'sender_ip';
        $sortDirection = 'ASC';
        $sortText = $lang_db_ecard_php['ecard_by_sender_ip'];
        break;
      case 'rnd' :
        $sortBy = 'recipient_name';
        $sortDirection = 'DESC';
        $sortText = $lang_db_ecard_php['ecard_by_recipient_name'];
        break;
      case 'rna' :
        $sortBy = 'recipient_name';
        $sortDirection = 'ASC';
        $sortText = $lang_db_ecard_php['ecard_by_recipient_name'];
        break;
      case 'red' :
        $sortBy = 'recipient_email';
        $sortDirection = 'DESC';
        $sortText = $lang_db_ecard_php['ecard_by_recipient_email'];
        break;
      case 'rea' :
        $sortBy = 'recipient_email';
        $sortDirection = 'ASC';
        $sortText = $lang_db_ecard_php['ecard_by_recipient_email'];
        break;
      case 'da' :
        $sortBy = 'date';
        $sortDirection = 'ASC';
        break;
    }

    if ($sortDirection == 'ASC') {
      $sortDirectionText = $lang_db_ecard_php['ecard_ascending'];
    }

    // create tabbed display (non-coppermine standard); maybe this could be changed later using the coppermine standard method
    // step 1: calculate the number of pages
    $pageTotal = ceil($totalEcards / $countTo);

    // step 2: get the current url without 'start' and 'count'
    $urlWithoutStart = $_SERVER['SCRIPT_NAME'].'?';

    foreach ($_GET as $key => $value) {
      if ($key != 'start' && $key != 'count') {
        $urlWithoutStart .= $key.'='.$value.'&amp;';
      }
    }

    // step 3: loop through the pages & create the links
    for ($page = 1; $page <= $pageTotal; $page++) {
      if ($page != (($startFrom / $countTo) + 1)) {
        $tabOutput .= '<a href="'.$urlWithoutStart.'start='.(($page - 1) * $countTo).'&amp;count='.$countTo.'">';
      } else {
        $currentPage = $page;
        $currentStart = ((($page - 1) * $countTo) + 1);
        $currentEnd = ($currentStart + $countTo - 1);

        if ($currentEnd > $totalEcards) {
          $currentEnd = $totalEcards;
        }
      }

      $tabOutput .= $page;

      if ($page != (($startFrom / $countTo) + 1)) {
        $tabOutput .= '</a>';
      }

      $tabOutput .= '&nbsp;';
    }

    $maxPage = ($page - 1);

    $this->countTo = $countTo;
    $this->maxPage = $maxPage;
    $this->sortText = $sortText;
    $this->tabOutput = $tabOutput;
    $this->sortDirectionText = $sortDirectionText;
    $this->formTarget = $this->cpgGetUrlVars('count');
    $this->urlWithoutSort = $this->cpgGetUrlVars('sort');
    $this->displayRecordText = sprintf($lang_db_ecard_php['ecard_number'], $currentStart, $currentEnd, $totalEcards);

    $query = 'SELECT * FROM '.$this->config->conf['TABLE_ECARDS'].' ORDER BY '.$sortBy.' '.$sortDirection.' LIMIT '.$startFrom.', '.$countTo;
    $db->query($query);

    $tempClass = 'tableb';

    while ($line = $db->fetchRow()) {
      $this->ecards[] = array(
                              'tempClass' => $tempClass,
                              'eid' => (int)$line['eid'],
                              'senderName' => $line['sender_name'],
                              'senderEmail' => $line['sender_email'],
                              'senderIp' => $line['sender_ip'],
                              'recipientName' => $line['recipient_name'],
                              'recipientEmail' => $line['recipient_email'],
                              'date' => strftime($lastcom_date_fmt, $line['date']),
                              'link' => $line['link']
                              );

      if ($tempClass == 'tableb') {
        $tempClass = 'tableh2';
      } else {
        $tempClass = 'tableb';
      }
    }
  } // End of method 'buildEcards'

  /**
   * deleteEcards()
   *
   * Method to delete ecards
   *
   * @param
   * @return
   */
  function deleteEcards() {
    $db = cpgDB::getInstance();

    foreach ($_POST['eid'] as $key) {
      /**
       * Query to delete an ecard
       */
      $query = 'DELETE FROM '.$this->config->conf['TABLE_ECARDS']." WHERE eid = '".(int)$key."'";
      $db->query($query);
    }
  } // End of method 'deleteEcards'
} // End of class 'cpgProcessEcard'

?>
