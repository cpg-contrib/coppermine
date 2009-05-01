<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2009 Coppermine Dev Team
  v1.1 originally written by Gregory DEMAR

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 3
  as published by the Free Software Foundation.
  
  ********************************************
  Coppermine version: 1.4.23
  $HeadURL$
  $Revision$
  $Author$
  $Date$
**********************************************/

define('IN_COPPERMINE', true);
define('DB_INPUT_PHP', true);

require('include/init.inc.php');
require('include/picmgmt.inc.php');
require('include/mailer.inc.php');
require('include/smilies.inc.php');

/*known issue: code was edited to not count URL in comment character count. However
this resulted in the character count not being respected at all.

With the new code, the long urls don't affect the display of the hyperlinked word.
However, I can't figure out how to make the code respect the max comment word length and max comment length.
Formatted and unformatted words that are longer than the allowed setting do not get truncated. -Thu */

function check_comment(&$str)
{
    global $CONFIG, $lang_bad_words, $queries;

    if ($CONFIG['filter_bad_words']) {
        $ercp = array();
        foreach($lang_bad_words as $word) {
            $ercp[] = '/' . ($word[0] == '*' ? '': '\b') . str_replace('*', '', $word) . ($word[(strlen($word)-1)] == '*' ? '': '\b') . '/i';
        }
        $str = preg_replace($ercp, '(...)', $str);
    }

    $com_words=explode(' ',strip_tags(bb_decode($str)));
    $replacements=array();
    foreach($com_words as $key => $word) {
       if (utf_strlen($word) > $CONFIG['max_com_wlength'] ) {
          $replacements[] = $word;
       }
    }
    $str=str_replace($replacements,'(...)',$str);
}

if (!isset($_GET['event']) && !isset($_POST['event'])) {
    cpg_die(CRITICAL_ERROR, $lang_errors['param_missing'], __FILE__, __LINE__);
}

$event = isset($_POST['event']) ? $_POST['event'] : $_GET['event'];
switch ($event) {

    // Comment update

    case 'comment_update':
        if (!(USER_CAN_POST_COMMENTS)) cpg_die(ERROR, $lang_errors['perm_denied'], __FILE__, __LINE__);

        check_comment($_POST['msg_body']);
        check_comment($_POST['msg_author']);
        $msg_body = addslashes(trim($_POST['msg_body']));
        $msg_author = addslashes(trim($_POST['msg_author']));
        $msg_id = (int)$_POST['msg_id'];

        if ($msg_body == '') cpg_die(ERROR, $lang_db_input_php['err_comment_empty'], __FILE__, __LINE__);

        if (GALLERY_ADMIN_MODE) {
            $update = cpg_db_query("UPDATE {$CONFIG['TABLE_COMMENTS']} SET msg_body='$msg_body', msg_author='$msg_author' WHERE msg_id='$msg_id'");
        } elseif (USER_ID) {
            $update = cpg_db_query("UPDATE {$CONFIG['TABLE_COMMENTS']} SET msg_body='$msg_body' WHERE msg_id='$msg_id' AND author_id ='" . USER_ID . "' LIMIT 1");
        } else {
            $update = cpg_db_query("UPDATE {$CONFIG['TABLE_COMMENTS']} SET msg_body='$msg_body' WHERE msg_id='$msg_id' AND author_md5_id ='{$USER['ID']}' AND author_id = '0' LIMIT 1");
        }

        $header_location = (@preg_match('/Microsoft|WebSTAR|Xitami/', getenv('SERVER_SOFTWARE'))) ? 'Refresh: 0; URL=' : 'Location: ';

        $result = cpg_db_query("SELECT pid FROM {$CONFIG['TABLE_COMMENTS']} WHERE msg_id='$msg_id'");
        if (!mysql_num_rows($result)) {
            mysql_free_result($result);
            $header_location = (@preg_match('/Microsoft|WebSTAR|Xitami/', getenv('SERVER_SOFTWARE'))) ? 'Refresh: 0; URL=' : 'Location: ';
            $redirect = "index.php";
            header($header_location . $redirect);
            pageheader($lang_info, "<meta http-equiv=\"refresh\" content=\"1;url=$redirect\" />");
            msg_box($lang_info, $lang_db_input_php['redirect_msg'], $lang_db_input_php['continue'], $redirect);
            pagefooter();
            ob_end_flush();
            exit;
        } else {
            $comment_data = mysql_fetch_array($result);
            mysql_free_result($result);
            $redirect = "displayimage.php?pos=" . (- $comment_data['pid']);
            header($header_location . $redirect);
            pageheader($lang_info, "<meta http-equiv=\"refresh\" content=\"1;url=$redirect\" />");
            msg_box($lang_info, $lang_db_input_php['redirect_msg'], $lang_db_input_php['continue'], $redirect);
            pagefooter();
            ob_end_flush();
            exit;
        }
        break;

    // Comment

    case 'comment':
        if (!(USER_CAN_POST_COMMENTS)) cpg_die(ERROR, $lang_errors['perm_denied'], __FILE__, __LINE__);

        check_comment($_POST['msg_body']);
                check_comment($_POST['msg_author']);
        $msg_author = addslashes(trim($_POST['msg_author']));
        $msg_body = addslashes(trim($_POST['msg_body']));
        $pid = (int)$_POST['pid'];

        if ($msg_author == '' || $msg_body == '') cpg_die(ERROR, $lang_db_input_php['empty_name_or_com'], __FILE__, __LINE__);

        $result = cpg_db_query("SELECT comments FROM {$CONFIG['TABLE_PICTURES']}, {$CONFIG['TABLE_ALBUMS']} WHERE {$CONFIG['TABLE_PICTURES']}.aid = {$CONFIG['TABLE_ALBUMS']}.aid AND pid='$pid'");
        if (!mysql_num_rows($result)) cpg_die(ERROR, $lang_errors['non_exist_ap'], __FILE__, __LINE__);
        $album_data = mysql_fetch_array($result);
        mysql_free_result($result);

        if ($album_data['comments'] != 'YES') cpg_die(ERROR, $lang_errors['perm_denied'], __FILE__, __LINE__);

        if (!$CONFIG['disable_comment_flood_protect']){
          $result = cpg_db_query("SELECT author_md5_id, author_id FROM {$CONFIG['TABLE_COMMENTS']} WHERE pid = '$pid' ORDER BY msg_id DESC LIMIT 1");
          if (mysql_num_rows($result)) {
              $last_com_data = mysql_fetch_array($result);
              if ((USER_ID && $last_com_data['author_id'] == USER_ID) || (!USER_ID && $last_com_data['author_md5_id'] == $USER['ID'])) {
                  cpg_die(ERROR, $lang_db_input_php['no_flood'], __FILE__, __LINE__);
              }
          }
        }

        if (!USER_ID) { // Anonymous users, we need to use META refresh to save the cookie
            if (mysql_result(cpg_db_query("select count(user_id) from {$CONFIG['TABLE_USERS']} where UPPER(user_name) = UPPER('$msg_author')"),0,0))
            {
              cpg_die($lang_error, $lang_db_input_php['com_author_error'],__FILE__,__LINE__);
          }

            $insert = cpg_db_query("INSERT INTO {$CONFIG['TABLE_COMMENTS']} (pid, msg_author, msg_body, msg_date, author_md5_id, author_id, msg_raw_ip, msg_hdr_ip) VALUES ('$pid', '{$CONFIG['comments_anon_pfx']}$msg_author', '$msg_body', NOW(), '{$USER['ID']}', '0', '$raw_ip', '$hdr_ip')");

            $USER['name'] = $_POST['msg_author'];
            $redirect = "displayimage.php?pos=" . (- $pid);
            if ($CONFIG['email_comment_notification']) {
                $mail_body = "<p>" . bb_decode(process_smilies($msg_body, $CONFIG['ecards_more_pic_target'])) . "</p>\n\r ".$lang_db_input_php['email_comment_body'] . " " . $CONFIG['ecards_more_pic_target'].(substr($CONFIG["ecards_more_pic_target"], -1) == '/' ? '' : '/').$redirect;
                cpg_mail('admin', $lang_db_input_php['email_comment_subject'], make_clickable($mail_body));
            }
            pageheader($lang_db_input_php['com_added'], "<meta http-equiv=\"refresh\" content=\"1;url=$redirect\" />");
            msg_box($lang_db_input_php['info'], $lang_db_input_php['com_added'], $lang_continue, $redirect);
            pagefooter();
            ob_end_flush();
            exit;
        } else { // Registered users, we can use Location to redirect
            $insert = cpg_db_query("INSERT INTO {$CONFIG['TABLE_COMMENTS']} (pid, msg_author, msg_body, msg_date, author_md5_id, author_id, msg_raw_ip, msg_hdr_ip) VALUES ('$pid', '" . addslashes(USER_NAME) . "', '$msg_body', NOW(), '', '" . USER_ID . "', '$raw_ip', '$hdr_ip')");
            $redirect = "displayimage.php?pos=" . (- $pid);
            if ($CONFIG['email_comment_notification'] && !USER_IS_ADMIN ) {
                $mail_body = "<p>" . bb_decode(process_smilies($msg_body, $CONFIG['ecards_more_pic_target'])) . "</p>\n\r ".$lang_db_input_php['email_comment_body'] . " " . $CONFIG['ecards_more_pic_target'] . (substr($CONFIG["ecards_more_pic_target"], -1) == '/' ? '' : '/') . $redirect;
                cpg_mail('admin', $lang_db_input_php['email_comment_subject'], make_clickable($mail_body));
            }
            $header_location = (@preg_match('/Microsoft|WebSTAR|Xitami/', getenv('SERVER_SOFTWARE'))) ? 'Refresh: 0; URL=' : 'Location: ';
            header($header_location . $redirect);
            pageheader($lang_db_input_php['com_added'], "<meta http-equiv=\"refresh\" content=\"1;url=$redirect\" />");
            msg_box($lang_db_input_php['info'], $lang_db_input_php['com_added'], $lang_continue, $redirect);
            pagefooter();
            ob_end_flush();
            exit;
        }
        break;

    // Update album

    case 'album_update':
        if (!(USER_ADMIN_MODE || GALLERY_ADMIN_MODE)) cpg_die(ERROR, $lang_errors['perm_denied'], __FILE__, __LINE__);

        $aid = (int)$_POST['aid'];
        $title = addslashes(trim($_POST['title']));
        $category = (int)$_POST['category'];
        $description = addslashes(trim($_POST['description']));
                $keyword = addslashes(trim($_POST['keyword']));
        $thumb = (int)$_POST['thumb'];
        $visibility = (int)$_POST['visibility'];
        $uploads = $_POST['uploads'] == 'YES' ? 'YES' : 'NO';
        $comments = $_POST['comments'] == 'YES' ? 'YES' : 'NO';
        $votes = $_POST['votes'] == 'YES' ? 'YES' : 'NO';
        $password = $_POST['alb_password'];
                $password_hint = addslashes(trim($_POST['alb_password_hint']));
        $visibility = !empty($password) ? FIRST_USER_CAT + USER_ID : $visibility;

        if (!$title) cpg_die(ERROR, $lang_db_input_php['alb_need_title'], __FILE__, __LINE__);

        if (GALLERY_ADMIN_MODE) {
            $query = "UPDATE {$CONFIG['TABLE_ALBUMS']} SET title='$title', description='$description', category='$category', thumb='$thumb', uploads='$uploads', comments='$comments', votes='$votes', visibility='$visibility', alb_password='$password', alb_password_hint='$password_hint', keyword='$keyword' WHERE aid='$aid' LIMIT 1";
        } else {
            $category = FIRST_USER_CAT + USER_ID;
            $query = "UPDATE {$CONFIG['TABLE_ALBUMS']} SET title='$title', description='$description', thumb='$thumb',  comments='$comments', votes='$votes', visibility='$visibility', alb_password='$password', alb_password_hint='$password_hint',keyword='$keyword' WHERE aid='$aid' AND category='$category' LIMIT 1";
        }

        $update = cpg_db_query($query);

        if (!mysql_affected_rows()) cpg_die(INFORMATION, $lang_db_input_php['no_udp_needed'], __FILE__, __LINE__);
                pageheader($lang_db_input_php['alb_updated'], "<meta http-equiv=\"refresh\" content=\"1;url=modifyalb.php?album=$aid\" />");
        msg_box($lang_db_input_php['info'], $lang_db_input_php['alb_updated'], $lang_continue, "modifyalb.php?album=$aid");
        pagefooter();
        ob_end_flush();
        exit;
        break;

    // Reset album

    case 'album_reset':
        if (!GALLERY_ADMIN_MODE) cpg_die(ERROR, $lang_errors['perm_denied'], __FILE__, __LINE__);

        $counter_affected_rows = 0;
        $aid = (int)$_POST['aid'];
        $reset_views = (int)($_POST['reset_views']);
        $reset_rating = (int)$_POST['reset_rating'];
        $delete_comments = (int)($_POST['delete_comments']);
        $delete_files = (int)$_POST['delete_files'];

        if ($reset_views || $reset_rating) {
            // Get all pids for this album and reset their details hit stats
            $query = "SELECT pid FROM {$CONFIG['TABLE_PICTURES']} WHERE aid = '$aid'";
            $result = cpg_db_query($query);
            while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
              $pid[] = $row['pid'];
            }
        }

        if ($reset_views) { // if reset_views start
            $query = "UPDATE {$CONFIG['TABLE_PICTURES']} SET hits='0' WHERE aid='$aid'";
                $update = cpg_db_query($query);
            if (isset($CONFIG['debug_mode']) && ($CONFIG['debug_mode'] == 1)) {
                $queries[] = $query;
            }
            if (mysql_affected_rows()) {
                $counter_affected_rows++;
            }
            resetDetailHits($pid);
        } // if reset_views end

        if ($reset_rating) { // if reset_rating start
            $query = "UPDATE {$CONFIG['TABLE_PICTURES']} SET  pic_rating='0',  votes='0' WHERE aid='$aid'";
                $update = cpg_db_query($query);
            if (isset($CONFIG['debug_mode']) && ($CONFIG['debug_mode'] == 1)) {
                $queries[] = $query;
            }
            if (mysql_affected_rows()) {
                $counter_affected_rows++;
            }
            resetDetailVotes($pid);
        } // if reset_rating end

        if ($delete_files) { // if delete_files start
            $query = "DELETE FROM {$CONFIG['TABLE_PICTURES']} WHERE aid='$aid'";
                $update = cpg_db_query($query);
            if (isset($CONFIG['debug_mode']) && ($CONFIG['debug_mode'] == 1)) {
                $queries[] = $query;
            }
            if (mysql_affected_rows()) {
                $counter_affected_rows++;
            }
        } // if delete_files end


        if ($counter_affected_rows == 0) cpg_die(INFORMATION, $lang_db_input_php['no_udp_needed'], __FILE__, __LINE__);
        if ($CONFIG['debug_mode'] == 0) {
            pageheader($lang_db_input_php['alb_updated'], "<meta http-equiv=\"refresh\" content=\"1;url=modifyalb.php?album=$aid\" />");
        }
        msg_box($lang_db_input_php['info'], $lang_db_input_php['alb_updated'], $lang_continue, "modifyalb.php?album=$aid");
        pagefooter();
        ob_end_flush();
        exit;
        break;

    // Picture upload


    case 'picture':
        if (!USER_CAN_UPLOAD_PICTURES) cpg_die(ERROR, $lang_errors['perm_denied'], __FILE__, __LINE__);

        $album = (int)$_POST['album'];
        $title = addslashes($_POST['title']);
        $caption = addslashes($_POST['caption']);
        $keywords = addslashes($_POST['keywords']);
        $user1 = addslashes($_POST['user1']);
        $user2 = addslashes($_POST['user2']);
        $user3 = addslashes($_POST['user3']);
        $user4 = addslashes($_POST['user4']);
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
        if ($_FILES['userpicture']['tmp_name'] == '') cpg_die(ERROR, $lang_db_input_php['no_pic_uploaded'], __FILE__, __LINE__);
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
        if (get_magic_quotes_gpc()) $_FILES['userpicture']['name'] = stripslashes($_FILES['userpicture']['name']);
        // Replace forbidden chars with underscores
                $picture_name = replace_forbidden($_FILES['userpicture']['name']);
        // Check that the file uploaded has a valid extension
        $matches = array();
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
        if (!move_uploaded_file($_FILES['userpicture']['tmp_name'], $uploaded_pic))
            cpg_die(CRITICAL_ERROR, sprintf($lang_db_input_php['err_move'], $picture_name, $dest_dir), __FILE__, __LINE__, true);
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
            // JPEG and PNG only are allowed with GD
            //} elseif ($imginfo[2] != GIS_JPG && $imginfo[2] != GIS_PNG && ($CONFIG['thumb_method'] == 'gd1' || $CONFIG['thumb_method'] == 'gd2')) {
            } elseif ($imginfo[2] != GIS_JPG && $imginfo[2] != GIS_PNG && $CONFIG['GIF_support'] == 0) {
                @unlink($uploaded_pic);
                cpg_die(ERROR, $lang_errors['gd_file_type_err'], __FILE__, __LINE__, true);
            // *** NOT NEEDED CHECK DONE BY 'is_image'
            // Check image type is among those allowed for ImageMagick
            //} elseif (!stristr($CONFIG['allowed_img_types'], $IMG_TYPES[$imginfo[2]]) && $CONFIG['thumb_method'] == 'im') {
                //@unlink($uploaded_pic);
                //cpg_die(ERROR, sprintf($lang_db_input_php['allowed_img_types'], $CONFIG['allowed_img_types']), __FILE__, __LINE__);
            // Check that picture size (in pixels) is lower than the maximum allowed
            } elseif (max($imginfo[0], $imginfo[1]) > $CONFIG['max_upl_width_height']) {
              if ((USER_IS_ADMIN && $CONFIG['auto_resize'] == 1) || (!USER_IS_ADMIN && $CONFIG['auto_resize'] > 0))
              {
                //resize_image($uploaded_pic, $uploaded_pic, $CONFIG['max_upl_width_height'], $CONFIG['thumb_method'], $imginfo[0] > $CONFIG['max_upl_width_height'] ? 'wd' : 'ht');
                resize_image($uploaded_pic, $uploaded_pic, $CONFIG['max_upl_width_height'], $CONFIG['thumb_method'], $CONFIG['thumb_use']);
              }
              else
              {
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
            pageheader($lang_info);
            msg_box($lang_info, $lang_db_input_php['upload_success'], $lang_continue, 'index.php');
            // start: send admin approval mail added by gaugau: 03-11-09
            if ($CONFIG['upl_notify_admin_email'])
            {
                include_once('include/mailer.inc.php');
                cpg_mail('admin', sprintf($lang_db_input_php['notify_admin_email_subject'], $CONFIG['gallery_name']), sprintf($lang_db_input_php['notify_admin_email_body'], USER_NAME,  $CONFIG['ecards_more_pic_target'].(substr($CONFIG["ecards_more_pic_target"], -1) == '/' ? '' : '/') .'editpics.php?mode=upload_approval' ));
            }
            // end: send admin approval mail
            ob_end_flush();
        } else {
            $header_location = (@preg_match('/Microsoft|WebSTAR|Xitami/', getenv('SERVER_SOFTWARE'))) ? 'Refresh: 0; URL=' : 'Location: ';
            $redirect = "displayimage.php?pos=" . (- mysql_insert_id($CONFIG['LINK_ID']));
            header($header_location . $redirect);
            pageheader($lang_info, "<meta http-equiv=\"refresh\" content=\"1;url=$redirect\" />");
            msg_box($lang_info, $lang_db_input_php['upl_success'], $lang_continue, $redirect);
            pagefooter();
            ob_end_flush();
            exit;
        }
        break;

    // Unknow event

    default:
        cpg_die(CRITICAL_ERROR, $lang_errors['param_missing'], __FILE__, __LINE__);
}
?>
