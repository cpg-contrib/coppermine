<?php
define('IN_COPPERMINE', true);
define('DISPLAYIMAGE_PHP', true);
define('INDEX_PHP', true);
//define('SMILIES_PHP', true);
error_reporting(E_ALL);
require('include/init.inc.php');

require_once('classes/cpgTemplate.class.php');

function check_comment(&$str)
{
    global $CONFIG, $lang_bad_words, $queries;

    $ercp = array('/\S{' . ($CONFIG['max_com_wlength'] + 1) . ',}/i');
    if ($CONFIG['filter_bad_words']) foreach($lang_bad_words as $word) {
        $ercp[] = '/' . ($word[0] == '*' ? '': '\b') . str_replace('*', '', $word) . ($word[(strlen($word)-1)] == '*' ? '': '\b') . '/i';
    }

    if (strlen($str) > $CONFIG['max_com_size']) $str = substr($str, 0, ($CONFIG['max_com_size'] -3)) . '...';
    $str = preg_replace($ercp, '(...)', $str);
}

if (isset($_POST["event"])) {
  $event = $_POST["event"];

        if (!(USER_CAN_POST_COMMENTS)) cpg_die(ERROR, $lang_errors['perm_denied'], __FILE__, __LINE__);

        check_comment($_POST['msg_body']);
        check_comment($_POST['msg_author']);
        $msg_body = addslashes(trim($_POST['msg_body']));
        $msg_author = addslashes(trim($_POST['msg_author']));
        $msg_id = (int)$_POST['msg_id'];

        if ($msg_body == '') cpg_die(ERROR, $lang_db_input_php['err_comment_empty'], __FILE__, __LINE__);

        if (GALLERY_ADMIN_MODE) {
            $query = "UPDATE {$CONFIG['TABLE_COMMENTS']} SET msg_body='$msg_body', msg_author='$msg_author' WHERE msg_id='$msg_id'";
            $update = $db->query($query);
        } elseif (USER_ID) {
            $query = "UPDATE {$CONFIG['TABLE_COMMENTS']} SET msg_body='$msg_body' WHERE msg_id='$msg_id' AND author_id ='" . USER_ID . "' LIMIT 1";
            $update = $db->query($query);
        } else {
            $query = "UPDATE {$CONFIG['TABLE_COMMENTS']} SET msg_body='$msg_body' WHERE msg_id='$msg_id' AND author_md5_id ='{$USER['ID']}' AND author_id = '0' LIMIT 1";
            $update = $db->query($query);
        }

        $commentUpdated = 1;
}

if ($CONFIG['enable_smilies']) include("include/smilies.inc.php");

if (isset($_GET['msg_id'])) {
  $msg_id = (int)$_GET['msg_id'];
} else {
  cpg_die(ERROR, $lang_errors["non_exist_comment"], __FILE__, __LINE__);
}

$query = "SELECT msg_author, msg_body FROM {$CONFIG['TABLE_COMMENTS']} WHERE msg_id = '$msg_id'";

$db->query($query);

if ($db->nf() == 0) {
  cpg_die(ERROR, $lang_errors["non_exist_comment"], __FILE__, __LINE__);
}

$row = $db->fetchRow();

$comment = array (
                  "msg_id" => $msg_id,
                  "msg_author" => $row["msg_author"],
                  "msg_body" => $row["msg_body"]
                 );

$t = new cpgTemplate;

if ($CONFIG["enable_smilies"]) {
  $comment["smilies"] = "enabled";
} else {
  $comment["smilies"] = "disabled";
}

if (isset($commentUpdated)) {
  $t->assign("commentUpdated", $commentUpdated);
  $t->assign("successMessage", $lang_success["comment_updated"]);
}
$t->assign("comment", $comment);
$t->assign("lang_display_comments", $lang_display_comments);
$t->assign("CONTENT", $t->fetchHTML("common/editComment.html"));
$t->assign("PAGE_TITLE", $CONFIG["gallery_name"]);
$t->assign("CHARSET", $CONFIG['charset'] == 'language file' ? $lang_charset : $CONFIG['charset']);

/**
  * Using print $t->fetchHTML() instead of $t->display() so that fallback for popup.html can be implemented.
  */
print $t->fetchHTML("common/popup.html");
?>