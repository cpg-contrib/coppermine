<?php
define('IN_COPPERMINE', true);
define('UPLOAD_PHP', true);
define('DB_INPUT_PHP', true);
define('ADMIN_PHP', true);

require('include/init.inc.php');
require('include/picmgmt.inc.php');
require('include/mailer.inc.php');

require_once('classes/cpgTemplate.class.php');

/**
 * If user submit's the form
 */
if (isset($_POST['continue'])) {
  if (!USER_CAN_UPLOAD_PICTURES) cpg_die(ERROR, $lang_errors['perm_denied'], __FILE__, __LINE__);
  for ($i=0; $i < count($_POST["album"]); $i++) {
    $album = (int)$_POST['album'][$i];
    $title = addslashes($_POST['title'][$i]);
    $caption = addslashes($_POST['caption'][$i]);
    $keywords = addslashes($_POST['keywords'][$i]);
    $user1 = addslashes($_POST['user1'][$i]);
    $user2 = addslashes($_POST['user2'][$i]);
    $user3 = addslashes($_POST['user3'][$i]);
    $user4 = addslashes($_POST['user4'][$i]);
    // Check if the album id provided is valid
    if (!GALLERY_ADMIN_MODE) {
        $result = cpg_db_query("SELECT category FROM {$CONFIG['TABLE_ALBUMS']} WHERE aid='$album' and (uploads = 'YES' OR category = '" . (USER_ID + FIRST_USER_CAT) . "')");
        if (mysql_num_rows($result) == 0)cpg_die(ERROR, $lang_db_input_php['unknown_album'], __FILE__, __LINE__);
        $row = mysql_fetch_array($result);
        mysql_free_result($result);
        $category = $row['category'];
    } else {
        $result = cpg_db_query("SELECT category FROM {$CONFIG['TABLE_ALBUMS']} WHERE aid='$album'");
        if (mysql_num_rows($result) == 0)cpg_die(ERROR, $lang_db_input_php['unknown_album'], __FILE__, __LINE__);
        $row = mysql_fetch_array($result);
        mysql_free_result($result);
        $category = $row['category'];
    }
    // Test if the filename of the temporary uploaded picture is empty
    if ($_FILES['userpicture']['tmp_name'][$i] == '') {
      cpg_die(ERROR, $lang_db_input_php['no_pic_uploaded'], __FILE__, __LINE__);
    }
    // Pictures are moved in a directory named 10000 + USER_ID
    if (USER_ID && !defined('SILLY_SAFE_MODE')) {
        $filepath = $CONFIG['userpics'] . (USER_ID + FIRST_USER_CAT);
        $dest_dir = $CONFIG['fullpath'] . $filepath;
        if (!is_dir($dest_dir)) {
            mkdir($dest_dir, octdec($CONFIG['default_dir_mode']));
            if (!is_dir($dest_dir)) cpg_die(CRITICAL_ERROR, sprintf($lang_db_input_php['err_mkdir'], $dest_dir), __FILE__, __LINE__, true);
            chmod($dest_dir, octdec($CONFIG['default_dir_mode']));
            $fp = fopen($dest_dir . '/index.html', 'w');
            fwrite($fp, ' ');
            fclose($fp);
        }
        $dest_dir .= '/';
        $filepath .= '/';
    } else {
        $filepath = $CONFIG['userpics'];
        $dest_dir = $CONFIG['fullpath'] . $filepath;
    }
    // Check that target dir is writable
    if (!is_writable($dest_dir)) cpg_die(CRITICAL_ERROR, sprintf($lang_db_input_php['dest_dir_ro'], $dest_dir), __FILE__, __LINE__, true);
    // Replace forbidden chars with underscores
    $matches = array();
    $forbidden_chars = strtr($CONFIG['forbiden_fname_char'], array('&amp;' => '&', '&quot;' => '"', '&lt;' => '<', '&gt;' => '>'));
    // Check that the file uploaded has a valid extension
    if (get_magic_quotes_gpc()) $_FILES['userpicture']['name'][$i] = stripslashes($_FILES['userpicture']['name'][$i]);
    $picture_name = strtr($_FILES['userpicture']['name'][$i], $forbidden_chars, str_repeat('_', strlen($CONFIG['forbiden_fname_char'])));
    if (!preg_match("/(.+)\.(.*?)\Z/", $picture_name, $matches)) {
        $matches[1] = 'invalid_fname';
        $matches[2] = 'xxx';
    }

    if ($matches[2] == '' || !is_known_filetype($matches)) {
        cpg_die(ERROR, sprintf($lang_db_input_php['err_invalid_fext'], $CONFIG['allowed_file_extensions']), __FILE__, __LINE__);
    }

    // Create a unique name for the uploaded file
    $nr = 0;
    $picture_name = $matches[1] . '.' . $matches[2];
    while (file_exists($dest_dir . $picture_name)) {
        $picture_name = $matches[1] . '~' . $nr++ . '.' . $matches[2];
    }
    $uploaded_pic = $dest_dir . $picture_name;
    // Move the picture into its final location
    if (!move_uploaded_file($_FILES['userpicture']['tmp_name'][$i], $uploaded_pic)) {
      cpg_die(CRITICAL_ERROR, sprintf($lang_db_input_php['err_move'], $picture_name, $dest_dir), __FILE__, __LINE__, true);
    }
    // Change file permission
    chmod($uploaded_pic, octdec($CONFIG['default_file_mode']));
    // Get picture information


    // Check that picture file size is lower than the maximum allowed
    if (filesize($uploaded_pic) > ($CONFIG['max_upl_size'] << 10)) {
        @unlink($uploaded_pic);
        cpg_die(ERROR, sprintf($lang_db_input_php['err_imgsize_too_large'], $CONFIG['max_upl_size']), __FILE__, __LINE__);
    } elseif (is_image($picture_name)) {
        $imginfo = getimagesize($uploaded_pic);
        // getimagesize does not recognize the file as a picture
        if ($imginfo == null) {
            @unlink($uploaded_pic);
            cpg_die(ERROR, $lang_db_input_php['err_invalid_img'], __FILE__, __LINE__, true);
        } elseif ($imginfo[2] != GIS_JPG && $imginfo[2] != GIS_PNG && $CONFIG['GIF_support'] == 0) {
            @unlink($uploaded_pic);
            cpg_die(ERROR, $lang_errors['gd_file_type_err'], __FILE__, __LINE__, true);
        // Check that picture size (in pixels) is lower than the maximum allowed
        } elseif (max($imginfo[0], $imginfo[1]) > $CONFIG['max_upl_width_height']) {
          if ((USER_IS_ADMIN && $CONFIG['auto_resize'] == 1) || (!USER_IS_ADMIN && $CONFIG['auto_resize'] > 0)) {
            resize_image($uploaded_pic, $uploaded_pic, $CONFIG['max_upl_width_height'], $CONFIG['thumb_method'], $CONFIG['thumb_use']);
          } else {
            @unlink($uploaded_pic);
            cpg_die(ERROR, sprintf($lang_db_input_php['err_fsize_too_large'], $CONFIG['max_upl_width_height'], $CONFIG['max_upl_width_height']), __FILE__, __LINE__);
          }
        } // Image is ok
    }

    // Upload is ok
    // Create thumbnail and internediate image and add the image into the DB
    $result = add_picture($album, $filepath, $picture_name, 0, $title, $caption, $keywords, $user1, $user2, $user3, $user4, $category, $raw_ip, $hdr_ip,(int) $_POST['width'],(int) $_POST['height']);

    if (!$result) {
        @unlink($uploaded_pic);
        cpg_die(CRITICAL_ERROR, sprintf($lang_db_input_php['err_insert_pic'], $uploaded_pic) . '<br /><br />' . $ERROR, __FILE__, __LINE__, true);
    } elseif ($PIC_NEED_APPROVAL) {
        /*pageheader($lang_info);
        msg_box($lang_info, $lang_db_input_php['upload_success'], $lang_continue, 'index.php');*/
        // start: send admin approval mail added by gaugau: 03-11-09
        if ($CONFIG['upl_notify_admin_email']) {
            include_once('include/mailer.inc.php');
            cpg_mail('admin', sprintf($lang_db_input_php['notify_admin_email_subject'], $CONFIG['gallery_name']), sprintf($lang_db_input_php['notify_admin_email_body'], USER_NAME,  $CONFIG['ecards_more_pic_target'].(substr($CONFIG["ecards_more_pic_target"], -1) == '/' ? '' : '/') .'editpics.php?mode=upload_approval' ));
        }
        // end: send admin approval mail
        //ob_end_flush();
    }
  }
  pageheader($lang_info);
  msg_box($lang_info, $lang_db_input_php['upl_success'], $lang_continue, $redirect);
  pagefooter();
} else {
  /**
   * Main code
   */
  $t = new cpgTemplate;

  if (GALLERY_ADMIN_MODE) {
      $query = "SELECT aid, title FROM {$CONFIG['TABLE_ALBUMS']} WHERE category < " . FIRST_USER_CAT . " ORDER BY title";
      $public_albums = cpg_db_query($query);
  } else {
      $query = "SELECT aid, title FROM {$CONFIG['TABLE_ALBUMS']} WHERE category < " . FIRST_USER_CAT . " AND uploads='YES' ORDER BY title";
      $public_albums = cpg_db_query($query);
  }
  if (mysql_num_rows($public_albums)) {
      $public_albums_list = cpg_db_fetch_rowset($public_albums);
  } else {
      $public_albums_list = array();
  }

  if (USER_ID) {
      $query = "SELECT aid, title FROM {$CONFIG['TABLE_ALBUMS']} WHERE category='" . (FIRST_USER_CAT + USER_ID) . "' ORDER BY title";
      $user_albums = cpg_db_query($query);
      if (mysql_num_rows($user_albums)) {
          $user_albums_list = cpg_db_fetch_rowset($user_albums);
      } else {
          $user_albums_list = array();
      }
  } else {
      $user_albums_list = array();
  }

  if (!count($public_albums_list) && !count($user_albums_list)) {
      cpg_die (ERROR, $lang_upload_php['err_no_alb_uploadables'], __FILE__, __LINE__);
  }

  // Assign maximum file size for browser crontrols.
  $max_file_size = $CONFIG['max_upl_size'] << 10;

  // Reset counter
  $list_count = 0;

  // Cycle through the User albums
  foreach($user_albums_list as $album) {

      // Add to multi-dim array for later sorting
      $listArray[$list_count]['cat'] = $lang_upload_php['personal_albums'];
      $listArray[$list_count]['aid'] = $album['aid'];
      $listArray[$list_count]['title'] = $album['title'];
      $list_count++;
  }

  // Cycle through the public albums
  foreach($public_albums_list as $album) {
    // Set $album_id to the actual album ID
    $album_id = $album['aid'];

    // Get the category name
    $vQuery = "SELECT cat.name FROM " . $CONFIG['TABLE_CATEGORIES'] . " cat, " . $CONFIG['TABLE_ALBUMS'] . " alb WHERE alb.aid='" . $album_id . "' AND cat.cid=alb.category";
    $vRes = cpg_db_query($vQuery);
    $vRes = mysql_fetch_array($vRes);

    // Add to multi-dim array for sorting later
    if ($vRes['name']) {
        $listArray[$list_count]['cat'] = $vRes['name'];
    } else {
        $listArray[$list_count]['cat'] = $lang_upload_php['albums_no_category'];
    }
    $listArray[$list_count]['aid'] = $album['aid'];
    $listArray[$list_count]['title'] = $album['title'];
    $list_count++;
  }

  // Sort the pulldown options by category and album name
  $listArray = array_csort($listArray,'cat','title');

  // Check to see if an album has been preselected by URL addition. If so, make $sel_album the album number. Otherwise, make $sel_album 0.
  $sel_album = isset($_GET['album']) ? $_GET['album'] : 0;

  /**
  * Get the user fields that are set.
  */
  $userFields = array();
  for ($i = 1; $i <= 4; $i++) {
    if (!empty($CONFIG["user_field".$i."_name"])) {
      $userFields[$i] = $CONFIG["user_field".$i."_name"];
    }
  }
}
$t->assign("sel_album", $sel_album);
$t->assign("lang_upload_php", $lang_upload_php);
$t->assign("listArray", $listArray);
$t->assign("userFields", $userFields);
$t->assign("CONTENT", $t->fetch($CONFIG['theme']."/upload.html"));

/**
 * Assign lang array's
 */
$t->assign("lang_main_menu", $lang_main_menu);
$t->assign("lang_gallery_admin_menu", $lang_gallery_admin_menu);

$t->assign("allowRegistration", $CONFIG['allow_user_registration']);
$t->assign("GALLERY_ADMIN_MODE", GALLERY_ADMIN_MODE);
$t->assign("USER_ADMIN_MODE", USER_ADMIN_MODE);
$t->assign("USER_CAN_CREATE_ALBUMS", USER_CAN_CREATE_ALBUMS);
$t->assign("USER_IS_ADMIN", USER_IS_ADMIN);
$t->assign("USER_CAN_UPLOAD_PICTURES", USER_CAN_UPLOAD_PICTURES);
$t->assign("REFERER", $REFERER);
$t->assign("USER_NAME", USER_NAME);
$t->assign("my_cat_id", FIRST_USER_CAT + USER_ID);
$t->assign("breadcrumbHTML", $breadcrumbHTML);
$t->assign("PAGE_TITLE", $lang_index_php['welcome']);
$t->assign("GALLERY_DESCRIPTION", $CONFIG["gallery_name"]);
$t->assign("USER_NAME", USER_NAME);
$t->assign("my_cat_id", FIRST_USER_CAT + USER_ID);

/**
 * Assign user related data
 */
if (!USER_ID) {
  $t->assign("loggedin", 0);
} else {
  $t->assign("loggedin", 1);
}
/**
 * Display the common html file
 */
$t->display ($CONFIG['theme']."/main.html");
?>