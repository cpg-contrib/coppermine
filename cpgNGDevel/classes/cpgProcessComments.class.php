<?php
/**
 * cpgProcessComments.class.php
 *
 * Class containing static function which are used for different kind of data processing related comments
 *
 * @package cpgNG
 * @author Abbas <abbas@sanisoft.com>
 * @version $Id$
 */

class cpgProcessComments {

  function cpgProcessComments()
  {
    $this->db = cpgDB::getInstance();
    $this->config = cpgConfig::getInstance();
    $this->auth = cpgAuth::getInstance();
  }

  function addComment($pid, $msgAuthor, $msgBody)
  {
    global $lang_error, $lang_db_input_php;

    if (!$this->auth->isDefined('USER_CAN_POST_COMMENTS')) {
      cpgUtils::cpgDie(ERROR, $lang_errors['perm_denied'], __FILE__, __LINE__);
    }

    $msgBody = $this->checkComment($_POST['msg_body']);
    $msgAuthor = $this->checkComment($_POST['msg_author']);

    $msgAuthor = addslashes(trim($msgAuthor));
    $msgBody = addslashes(trim($msgBody));

    if ($msgAuthor == '' || $msgBody == '') {
      cpgUtils::cpgDie(ERROR, $lang_db_input_php['empty_name_or_com'], __FILE__, __LINE__);
    }

    $query = "SELECT comments FROM {$this->config->conf['TABLE_PICTURES']}, {$this->config->conf['TABLE_ALBUMS']} WHERE {$this->config->conf['TABLE_PICTURES']}.aid = {$this->config->conf['TABLE_ALBUMS']}.aid AND pid='$pid'";

    $this->db->query($query);

    if (!$this->db->nf()) {
      cpgUtils::cpgDie(ERROR, $lang_errors['non_exist_ap'], __FILE__, __LINE__);
    }

    $album_data = $this->db->fetchRow();

    if ($album_data['comments'] != 'YES') {
      cpgUtils::cpgDie(ERROR, $lang_errors['perm_denied'], __FILE__, __LINE__);
    }

    if (!$this->config->conf['disable_comment_flood_protect']){
      $query = "SELECT author_md5_id, author_id FROM {$this->config->conf['TABLE_COMMENTS']} WHERE pid = '$pid' ORDER BY msg_id DESC LIMIT 1";

      $this->db->query($query);

      if ($this->db->nf()) {
        $last_com_data = $this->db->fetchRow();
        if (($this->auth->isDefined('USER_ID') && $last_com_data['author_id'] == $this->auth->isDefined('USER_ID')) || (!$this->auth->isDefined('USER_ID') && $last_com_data['author_md5_id'] == $this->auth->user['ID'])) {
          cpgUtils::cpgDie(ERROR, $lang_db_input_php['no_flood'], __FILE__, __LINE__);
        }
      }
    }

    $msg_parent = (int)$_POST['parent'];

    if (!$this->auth->isDefined('USER_ID')) { // Anonymous users
      $query = "SELECT user_id FROM {$this->config->conf['TABLE_USERS']} WHERE UPPER(user_name) = UPPER('$msgAuthor')";

      $this->db->query($query);

      if ($this->db->nf()) {
        cpgUtils::cpgDie($lang_error, $lang_db_input_php['com_author_error'],__FILE__,__LINE__);
      }

      $query = "INSERT INTO {$this->config->conf['TABLE_COMMENTS']} (pid, msg_parent, msg_author, msg_body, msg_date, author_md5_id, author_id, msg_raw_ip, msg_hdr_ip) VALUES ('$pid', '$msg_parent', '{$this->config->conf['comments_anon_pfx']}$msgAuthor', '$msgBody', NOW(), '{$this->auth->user['ID']}', '0', '$raw_ip', '$hdr_ip')";

      $this->db->query($query);

      $this->auth->user['name'] = stripslashes($msgAuthor);

      if ($this->config->conf['email_comment_notification']) {
        $mailBody = '<p>'.cpgUtils::bbDecode(process_smilies($msgBody)).'</p>'."\n\r".$lang_db_input_php['email_comment_body'].' '.$this->config->conf['ecards_more_pic_target'].(substr($this->config->conf['ecards_more_pic_target'], -1) == '/' ? '' : '/').'displayimage.php?pid='.$pid;
        cpgUtils::cpgMail('admin', $lang_db_input_php['email_comment_subject'], cpgUtils::makeClickable($mailBody));
      }
    } else { // Registered users
      $query = "INSERT INTO {$this->config->conf['TABLE_COMMENTS']} (pid, msg_parent, msg_author, msg_body, msg_date, author_md5_id, author_id, msg_raw_ip, msg_hdr_ip) VALUES ('$pid', '$msg_parent', '" . addslashes(USER_NAME) . "', '$msgBody', NOW(), '', '" . USER_ID . "', '$raw_ip', '$hdr_ip')";

      $this->db->query($query);

      if ($this->config->conf['email_comment_notification']) {
        $mailBody = '<p>'.cpgUtils::bbDecode(process_smilies($msgBody)).'</p>'."\n\r".$lang_db_input_php['email_comment_body'].' '.$this->config->conf['ecards_more_pic_target'].(substr($this->config->conf['ecards_more_pic_target'], -1) == '/' ? '' : '/').'displayimage.php?pid='.$pid;
        cpgUtils::cpgMail('admin', $lang_db_input_php['email_comment_subject'], cpgUtils::makeClickable($mailBody));
      }

    }

    return $lang_db_input_php['com_added'];
  }

  function checkComment($str)
  {
    global $lang_bad_words;

    $ercp = array('/\S{' . ($this->config->conf['max_com_wlength'] + 1) . ',}/i');
    if ($this->config->conf['filter_bad_words']) foreach($lang_bad_words as $word) {
        $ercp[] = '/' . ($word[0] == '*' ? '': '\b') . str_replace('*', '', $word) . ($word[(strlen($word)-1)] == '*' ? '': '\b') . '/i';
    }
    $strippedStr = strip_tags($str);
    if (strlen($strippedStr) > $this->config->conf['max_com_size']) {
      $strippedStr = substr($strippedStr, 0, ($this->config->conf['max_com_size'] -3)) . '...';
    }
    $strippedStr = preg_replace($ercp, '(...)', $strippedStr);

    return $str;
  }

  /**
    * Get the picture comments
    */
  /**
    * cpgDisplayImageData::getPicComments()
    *
    * @return
    */
  function getPicComments($picData)
  {
    global $comment_date_fmt, $lang_display_comments, $HTML_SUBST;

    $params = array();

    $query = "SELECT msg_id, msg_parent, msg_author, msg_body, UNIX_TIMESTAMP(msg_date) AS msg_date, author_id, author_md5_id, msg_raw_ip, msg_hdr_ip, deleted FROM {$this->config->conf['TABLE_COMMENTS']} WHERE pid = '".$picData['pid']."' ORDER BY msg_id ASC";
    $this->db->query($query);

    while ($row = $this->db->fetchRow()) {
      $user_can_edit = (GALLERY_ADMIN_MODE) || ($this->auth->isDefined("USER_ID") && $this->auth->isDefined("USER_ID") == $row['author_id'] && $this->auth->isDefined("USER_CAN_POST_COMMENTS")) || (!$this->auth->isDefined("USER_ID") && $this->auth->isDefined("USER_CAN_POST_COMMENTS") && ($this->auth->user['ID'] == $row['author_md5_id']));

      $comment_ipinfo = ($row['msg_raw_ip'] && GALLERY_ADMIN_MODE);

      if ($this->config->conf['enable_smilies']) {
        $comment_body = process_smilies(cpgUtils::makeClickable($row['msg_body']));
      } else {
        $comment_body = cpgUtils::makeClickable($row['msg_body']);
      }

      /**
       * Code to show/hide edit box for edit comment when javascript is OFF
       */
      if (isset($_GET['event']) && $_GET['event'] == 'editComment' && isset($_GET['msg_id']) && $_GET['msg_id'] == $row['msg_id']) {
        $editBox = 'Y';
      } else {
        $editBox = 'N';
      }

      /**
       * Code to show/hide reply box for reply comment when javascript is OFF
       */
      if (isset($_GET['event']) && $_GET['event'] == 'replyComment' && isset($_GET['msg_id']) && $_GET['msg_id'] == $row['msg_id']) {
        $replyBox = 'Y';
      } else {
        $replyBox = 'N';
      }

      $params[(int)$row['msg_id']] = array(
                                           'edit' => $user_can_edit ? 'enabled' : '',
                                           'ipinfo' => $comment_ipinfo ? 'show' : '',
                                           'msg_author' => $row['msg_author'],
                                           'msg_parent' => (int)$row['msg_parent'],
                                           'msg_date' => cpgUtils::localisedDate($row['msg_date'], $comment_date_fmt),
                                           'msg_body' => cpgUtils::bbDecode($comment_body),
                                           'msg_body_raw' => $row['msg_body'],
                                           'hdr_ip' => $row['msg_hdr_ip'],
                                           'raw_ip' => $row['msg_raw_ip'],
                                           'deleted' => (int)$row['deleted'],
                                           'editBox' => $editBox,
                                           'replyBox' => $replyBox
                                           );
    }

    if (count($params) > 0) {
        return ($params);
    } else {
        return (0);
    }
  }

  /**
   * getAllComments()
   *
   * @param integer $start
   * @param integer $count
   * @return array $commentArr
   */
  function getAllComments($start, $count)
  {
    global $comment_date_fmt;

    $sortCodes = array(
                        'name_a' => 'msg_author ASC',
                        'name_d' => 'msg_author DESC',
                        'date_a' => 'msg_id ASC',
                        'date_d' => 'msg_id DESC',
                        'comment_a' => 'msg_body ASC',
                        'comment_d' => 'msg_body DESC',
                        'file_a' => 'pid ASC',
                        'file_d' => 'pid DESC',
                      );
    $sort = (!isset($_GET['sort']) || !isset($sortCodes[$_GET['sort']])) ? 'date_d' : $_GET['sort'];

    $query = "SELECT
                msg_id, msg_author, msg_body, UNIX_TIMESTAMP(msg_date) AS msg_date, author_id,
                {$this->config->conf['TABLE_COMMENTS']}.pid as pid, aid, filepath, filename, url_prefix, pwidth, pheight
              FROM
                {$this->config->conf['TABLE_COMMENTS']}, {$this->config->conf['TABLE_PICTURES']}
              WHERE
                {$this->config->conf['TABLE_COMMENTS']}.pid = {$this->config->conf['TABLE_PICTURES']}.pid
              ORDER BY ".
                $sortCodes[$sort]."
              LIMIT
                $start, $count";
    $this->db->query($query);

    $i = 0;
    $commentArr = array();
    while ($row = $this->db->fetchRow()) {
      $thumb_url =  cpgUtils::getPicUrl($row, 'thumb');
      if (!is_image($row['filename'])) {
          $image_info = getimagesize($thumb_url);
          $row['pwidth'] = $image_info[0];
          $row['pheight'] = $image_info[1];
      }
      $commentArr[$i] = $row;
    // $image_size = compute_img_size($row['pwidth'], $row['pheight'], $CONFIG['alb_list_thumb_size']);
      //$thumb_link = 'displayimage.php?pos=' . - $row['pid'];
      $msg_date = cpgUtils::localisedDate($row['msg_date'], $comment_date_fmt);
      $msg_body = cpgUtils::bbDecode(process_smilies($row['msg_body']));
      $commentArr[$i]['msg_body'] = $msg_body;
      $commentArr[$i]['msg_date'] = $msg_date;
      $commentArr[$i]['thumb_url'] = $thumb_url;
      $i++;
    }

    return $commentArr;
  }

  /**
   * deleteSelectedComments()
   *
   * @return integer $affectedRows
   */
  function deleteSelectedComments()
  {
    $cidArray = $_POST['cid_array'];
    $cidSet = '';
    foreach ($cidArray as $cid) {
      $cidSet .= ($cidSet == '') ? '(' . $cid : ', ' . $cid;
    }
    $cidSet .= ')';

    $query = "DELETE FROM {$this->config->conf['TABLE_COMMENTS']} WHERE msg_id IN $cidSet";
    $this->db->query($query);

    return $this->db->affectedRows();
  }

  /**
   * deleteComment()
   *
   * Function to delete a particular comment
   *
   * @param $commentId
   * @return
   */
  function deleteComment($commentId)
  {
    global $lang_info, $lang_errors, $lang_continue, $lang_delete_php;

    $commentId = (int)$commentId;

    $query = "SELECT pid FROM {$this->config->conf['TABLE_COMMENTS']} WHERE msg_id = '$commentId'";
    $this->db->query($query);

    if ($this->db->nf() <= 0) {
      cpgUtils::cpgDie(CRITICAL_ERROR, $lang_errors['non_exist_comment'], __FILE__, __LINE__);
    }

    $query = '';

    if ($this->hasChild($commentId)) {
      // Query to set deleted to true
      if (GALLERY_ADMIN_MODE) {
        $query = "UPDATE {$this->config->conf['TABLE_COMMENTS']} SET deleted = '1' WHERE msg_id = '$commentId'";
      } elseif (USER_ID) {
        $query = "UPDATE {$this->config->conf['TABLE_COMMENTS']} SET deleted = '1' WHERE msg_id = '$commentId' AND author_id = '".USER_ID."' LIMIT 1";
      } else {
        $query = "UPDATE {$this->config->conf['TABLE_COMMENTS']} SET deleted = '1' WHERE msg_id = '$commentId' AND author_md5_id = '{$this->auth->user['ID']}' AND author_id = '0' LIMIT 1";
      }
    } else {
      // Query to delete a comment
      if (GALLERY_ADMIN_MODE) {
        $query = "DELETE FROM {$this->config->conf['TABLE_COMMENTS']} WHERE msg_id = '$commentId'";
      } elseif (USER_ID) {
        $query = "DELETE FROM {$this->config->conf['TABLE_COMMENTS']} WHERE msg_id = '$commentId' AND author_id = '".USER_ID."' LIMIT 1";
      } else {
        $query = "DELETE FROM {$this->config->conf['TABLE_COMMENTS']} WHERE msg_id = '$commentId' AND author_md5_id = '{$this->auth->user['ID']}' AND author_id = '0' LIMIT 1";
      }
    }

    if (!empty($query)) {
      $this->db->query($query);

      $referer = $_GET['referer'] ? $_GET['referer'] : 'index.php';

      if (strpos($referer, 'http') !== false) {
        $referer = 'index.php';
      }

      cpgUtils::msgBox($lang_info, $lang_delete_php['comment_deleted'], $lang_continue, $referer, $width = '-1', true);
      exit;
    }
  }

  /**
   * hasChild()
   *
   * Function to check a particular comment has atleast one child comment or not
   *
   * @param $commentId
   * @return
   */
  function hasChild($commentId)
  {
    $commentId = (int)$commentId;

    // Query to check a particular comment has atleast one child comment or not
    $query = "SELECT * FROM {$this->config->conf['TABLE_COMMENTS']} WHERE msg_parent = '$commentId' LIMIT 1";
    $this->db->query($query);

    if ($this->db->nf() > 0) {
      return true;
    } else {
      return false;
    }
  }

  /**
   * updateComment()
   *
   * Function to update a particular comment
   *
   * @param $commentId
   * @param $commentAuthor
   * @param $commentBody
   * @return
   */
  function updateComment($commentId, $commentAuthor, $commentBody)
  {
    global $lang_errors, $lang_db_input_php, $lang_display_comments;

    if (!($this->auth->isDefined('USER_CAN_POST_COMMENTS'))) cpgUtils::cpgDie(ERROR, $lang_errors['perm_denied'], __FILE__, __LINE__);

    $commentAuthor = $this->checkComment($commentAuthor);
    $commentBody = $this->checkComment($commentBody);
    $commentAuthor = addslashes(trim($commentAuthor));
    $commentBody = addslashes(trim($commentBody));
    $commentId = (int)$commentId;

    if ($commentBody == '') cpgUtils::cpgDie(ERROR, $lang_db_input_php['err_comment_empty'], __FILE__, __LINE__);

    $query = "SELECT * FROM {$this->config->conf['TABLE_COMMENTS']} WHERE msg_id = '$commentId'";
    $this->db->query($query);

    if ($this->db->nf() <= 0) {
      cpgUtils::cpgDie(ERROR, $lang_errors['non_exist_comment'], __FILE__, __LINE__);
    }

    $row = $this->db->fetchRow();
    $pid = (int)$row['pid'];

    $query = '';

    if (GALLERY_ADMIN_MODE) {
      $query = "UPDATE {$this->config->conf['TABLE_COMMENTS']} SET msg_body = '$commentBody', msg_author = '$commentAuthor' WHERE msg_id = '$commentId'";
    } elseif ($auth->isDefined('USER_ID')) {
      $query = "UPDATE {$this->config->conf['TABLE_COMMENTS']} SET msg_body = '$commentBody' WHERE msg_id = '$commentId' AND author_id = '".USER_ID."' LIMIT 1";
    } else {
      $query = "UPDATE {$this->config->conf['TABLE_COMMENTS']} SET msg_body = '$commentBody' WHERE msg_id = '$commentId' AND author_md5_id = '{$this->auth->user['ID']}' AND author_id = '0' LIMIT 1";
    }

    if (!empty($query)) {
      $this->db->query($query);

      if ($this->config->conf['email_comment_notification']) {
        $commentBody = '<p>'.cpgUtils::bbDecode(process_smilies($commentBody)).'</p>'."\n\r".$lang_db_input_php['email_update_comment_body'].' '.$this->config->conf['ecards_more_pic_target'].(substr($this->config->conf['ecards_more_pic_target'], -1) == '/' ? '' : '/').'displayimage.php?pid='.$pid;
        cpgUtils::cpgMail('admin', $lang_db_input_php['email_update_comment_subject'], cpgUtils::makeClickable($commentBody));
      }

      return $lang_display_comments['comment_updated'];
    }

    return '';
  }
}
?>
