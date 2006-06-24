<?php
/**
 * cpgProcessPicture.class.php
 *
 * Class containing static function which are used for adding, editing, deleting and processing pictures
 *
 * @package cpgNG
 * @author Abbas <abbas@sanisoft.com>
 * @version $Id$
 */

class cpgProcessPicture {
    /**
     * Function to insert/place a new file in database/disk
     */
    /**
     * cpgProcessPicture::insertData()
     *
     * @param  $index
     * @return
     */
    function insertData($index)
    {
        global $lang_upload_php, $lang_db_input_php;

        $db = cpgDB::getInstance();
        $config = cpgConfig::getInstance();
        $auth = cpgAuth::getInstance();
        // Check if user selected an album to upload picture to. If not, exit with error.
        $album = (int)$_SESSION['fileUpload'][$index]['album'];

        if (!$album) {
            return($lang_upload_php['no_album']);
        }

        $title = addslashes($_SESSION['fileUpload'][$index]['title']);
        $caption = addslashes($_SESSION['fileUpload'][$index]['caption']);
        $keywords = addslashes($_SESSION['fileUpload'][$index]['keywords']);
        $tmpName = addslashes($_SESSION['fileUpload'][$index]['tmpName']);
        $picture_name = addslashes($_SESSION['fileUpload'][$index]['fileName']);
        $dir_name = addslashes($_SESSION['fileUpload'][$index]['dirName']).'/';
        $user1 = addslashes($_SESSION['fileUpload'][$index]['user1']);
        $user2 = addslashes($_SESSION['fileUpload'][$index]['user2']);
        $user3 = addslashes($_SESSION['fileUpload'][$index]['user3']);
        $user4 = addslashes($_SESSION['fileUpload'][$index]['user4']);

        /**
         * Check for duplicate entry
         */
        $query = "SELECT pid FROM {$config->conf['TABLE_PICTURES']} WHERE filename = '$picture_name' AND filepath = '$dir_name'";

        $db->query($query);

        if ($db->nf()) {
            return 'dup';
        }

        if ($_SESSION['fileUpload'][$index]['ok']) {
            return 'dup';
        }
        // Capture movie or audio width and height if sent.
        if (isset($_SESSION['fileUpload'][$index]['movie_wd'])) {
            $movie_wd = (int)$_SESSION['fileUpload'][$index]['movie_wd'];
        } else {
            $movie_wd = 0;
        }

        if (isset($_SESSION['fileUpload'][$index]['movie_ht'])) {
            $movie_ht = (int)$_SESSION['fileUpload'][$index]['movie_ht'];
        } else {
            $movie_ht = 0;
        }
        // Check if the album id provided is valid
        if (!GALLERY_ADMIN_MODE) {

            //$query = "SELECT category FROM {$config->conf['TABLE_ALBUMS']} WHERE aid='$album' and (uploads = 'YES' OR category = '" . ($auth->isDefined('USER_ID') + FIRST_USER_CAT) . "')";

            $query = "SELECT category FROM {$config->conf['TABLE_ALBUMS']} WHERE aid='$album' and (uploads = 'YES' OR user_Id = '" . $auth->isDefined('USER_ID'). "')";
            $db->query($query);

            if ($db->nf() == 0) {
                return($lang_db_input_php['unknown_album']);
            }

            $row = $db->fetchRow();
            $category = $row['category'];
        } else {
            $query = "SELECT category FROM {$config->conf['TABLE_ALBUMS']} WHERE aid='$album'";

            $db->query($query);

            if ($db->nf() == 0) {
                return($lang_db_input_php['unknown_album']);
            }

            $row = $db->fetchRow();
            $category = $row['category'];
        }

        /**
         * If the picture is coming from batch upload, then we have the dirName in SESSION
         */
        if (!empty($_SESSION['fileUpload'][$index]['dirName'])) {
          $filepath = $_SESSION['fileUpload'][$index]['dirName'].'/';
          $dest_dir = $config->conf['fullpath'] . $filepath . '/';
        } elseif ($auth->isDefined('USER_ID') && !defined('SILLY_SAFE_MODE')) { // Pictures are moved in a directory named 10000 + USER_ID
            $filepath = $config->conf['userpics'] . ($auth->isDefined('USER_ID') + FIRST_USER_CAT);
            $dest_dir = $config->conf['fullpath'] . $filepath;
            if (!is_dir($dest_dir)) {
                mkdir($dest_dir, octdec($config->conf['default_dir_mode']));
                if (!is_dir($dest_dir)) {
                    return(sprintf($lang_db_input_php['err_mkdir'], $dest_dir));
                }
                @chmod($dest_dir, octdec($config->conf['default_dir_mode'])); //silence the output in case chmod is disabled
                $fp = fopen($dest_dir . '/index.html', 'w');
                fwrite($fp, ' ');
                fclose($fp);
            }
            $dest_dir .= '/';
            $filepath .= '/';
        } else {
            $filepath = $config->conf['userpics'];
            $dest_dir = $config->conf['fullpath'] . $filepath;
        }
        // Check that target dir is writable
        if (!is_writable($dest_dir)) {
            return(sprintf($lang_db_input_php['dest_dir_ro'], $dest_dir));
        }

        /**
         * Here also if user is batch uploading, then we don't need to move the file anywhere. It is alerady in the required
         * directory. Also no need for approval as only ADMIN can batch upload
         */
        if (empty($_SESSION['fileUpload'][$index]['dirName'])) {
          // Create path for final location.
          $uploaded_pic = $dest_dir . $picture_name;
          // Form path to temporary image.
          $path_to_image = './' . $config->conf['fullpath'] . 'edit/' . $tmpName;
          // prevent moving the edit directory...
          if (is_dir($path_to_image)) {
              return($lang_upload_php['failure'] . " - '$path_to_image'");
          }

          // Move the picture into its final location
          if (rename($path_to_image, $uploaded_pic) === true) {
            // Change file permission
            @chmod($uploaded_pic, octdec($config->conf['default_file_mode'])); //silence the output in case chmod is disabled
            // Test if picture requires approval
            if (GALLERY_ADMIN_MODE) {
              $approved = 'YES';
            } elseif (!$auth->userData['priv_upl_need_approval'] && $category == FIRST_USER_CAT + $auth->isDefined('USER_ID')) {
              $approved = 'YES';
            } elseif (!$auth->userData['pub_upl_need_approval']) {
              $approved = 'YES';
            } else {
              $approved = 'NO';
            }
            $picNeedApproval = ($approved == 'NO');
          } else {
            // The file was not placed successfully.
            return $lang_upload_php['no_place'];
          }
        } else {
          $approved = 'YES';
          $picNeedApproval = 0;
        }
          // Create thumbnail and internediate image and add the image into the DB
          $result = cpgProcessPicture::addPicture($album, $filepath, $picture_name, 0, $title, $caption, $keywords, $user1, $user2, $user3, $user4, $category, $approved, $movie_wd, $movie_ht);
          if ($result == 'ok') {
              $_SESSION['fileUpload'][$index]['ok'] = 1;
          }
          return $result;
    }
    // Add a picture to an album
    /**
     * cpgProcessPicture::addPicture()
     *
     * @param  $aid
     * @param  $filepath
     * @param  $filename
     * @param integer $position
     * @param string $title
     * @param string $caption
     * @param string $keywords
     * @param string $user1
     * @param string $user2
     * @param string $user3
     * @param string $user4
     * @param integer $category
     * @param  $approved
     * @return
     */
    function addPicture($aid, $filepath, $filename, $position = 0, $title = '', $caption = '', $keywords = '', $user1 = '', $user2 = '', $user3 = '', $user4 = '', $category = 0, $approved, $iwidth = 0, $iheight = 0)
    {
        global $lang_errors, $lang_upload_php;

        $db = cpgDB::getInstance();
        $config = cpgConfig::getInstance();
        $auth = cpgAuth::getInstance();

        require_once('classes/cpgImgFactory.class.php');
        $imgResize = cpgImgFactory::getInstance();

        $image = $config->conf['fullpath'] . $filepath . $filename;
        $normal = $config->conf['fullpath'] . $filepath . $config->conf['normal_pfx'] . $filename;
        $thumb = $config->conf['fullpath'] . $filepath . $config->conf['thumb_pfx'] . $filename;

        if (!is_known_filetype($image)) {
            return $lang_upload_php['forb_ext'];
        } elseif (is_image($filename)) {
            $imagesize = getimagesize($image);
            if ((($auth->isDefined('USER_IS_ADMIN') && $config->conf['auto_resize'] == 1) || (!$auth->isDefined('USER_IS_ADMIN') && $config->conf['auto_resize'] > 0)) && max($imagesize[0], $imagesize[1]) > $config->conf['max_upl_width_height']) {
                $imgResize->resizeImage($image, $image, $config->conf['max_upl_width_height'], $config->conf['thumb_use']);
                $imagesize = getimagesize($image);
            }
            if (!file_exists($thumb)) {
                if (!$imgResize->resizeImage($image, $thumb, $config->conf['thumb_width'], $config->conf['thumb_use']))
                    return $imgResize->error;
            }
            if (max($imagesize[0], $imagesize[1]) > $config->conf['picture_width'] && $config->conf['make_intermediate'] && !file_exists($normal)) {
                if (!$imgResize->resizeImage($image, $normal, $config->conf['picture_width'], $config->conf['thumb_use']))
                    return $imgResize->error;
            }
        } else {
            $imagesize[0] = $iwidth;
            $imagesize[1] = $iheight;
        }

        $image_filesize = filesize($image);
        $total_filesize = is_image($filename) ? ($image_filesize + (file_exists($normal) ? filesize($normal) : 0) + filesize($thumb)) : ($image_filesize);
        // Test if disk quota exceeded
        if (!GALLERY_ADMIN_MODE && $auth->userData['group_quota']) {

            // $query = "SELECT sum(total_filesize) FROM {$config->conf['TABLE_PICTURES']}, {$config->conf['TABLE_ALBUMS']} WHERE  {$config->conf['TABLE_PICTURES']}.aid = {$config->conf['TABLE_ALBUMS']}.aid AND category = '" . (FIRST_USER_CAT + $auth->isDefined('USER_ID')) . "'";

            $query = "SELECT sum(total_filesize) FROM {$config->conf['TABLE_PICTURES']}, {$config->conf['TABLE_ALBUMS']} WHERE  {$config->conf['TABLE_PICTURES']}.aid = {$config->conf['TABLE_ALBUMS']}.aid AND user_Id = '" . $auth->isDefined('USER_ID') . "'";

            $db->query($query);

            $record = $db->fetchRow();
            $total_space_used = $record[0];

            if ((($total_space_used + $total_filesize) >> 10) > $auth->userData['group_quota']) {
                @unlink($image);
                if (is_image($image)) {
                    @unlink($normal);
                    @unlink($thumb);
                }
                $msg = strtr($lang_errors['quota_exceeded'], array('[quota]' => ($auth->userData['group_quota']),
                        '[space]' => ($total_space_used >> 10)));
                return $msg;
            }
        }
        // User ID is now recorded when in admin mode
        $user_id = $auth->isDefined('USER_ID');
        $username = $auth->isDefined('USER_NAME');

        $query = "INSERT INTO {$config->conf['TABLE_PICTURES']} (pid, aid, filepath, filename, filesize, total_filesize, pwidth, pheight, ctime, owner_id, owner_name, title, caption, keywords, approved, user1, user2, user3, user4, pic_raw_ip, pic_hdr_ip, position) VALUES ('', '$aid', '" . addslashes($filepath) . "', '" . addslashes($filename) . "', '$image_filesize', '$total_filesize', '{$imagesize[0]}', '{$imagesize[1]}', '" . time() . "', '$user_id', '$username','$title', '$caption', '$keywords', '$approved', '$user1', '$user2', '$user3', '$user4', '" . $auth->isDefined('RAW_IP') . "', '" . $auth->isDefined('HDR_IP') . "', '$position')";

        if ($db->query($query)) {
            return 'ok';
        } else {
            return 'error';
        }
    }

    /**
     * cpgProcessPicture::deletePicture()
     *
     * @param  $pid
     * @return
     */
    function deletePicture($pid)
    {
        global $lang_errors;

        $db = cpgDB::getInstance();
        $config = cpgConfig::getInstance();
        $auth = cpgAuth::getInstance();

        if (GALLERY_ADMIN_MODE) {
            $query = "SELECT aid, filepath, filename FROM {$config->conf['TABLE_PICTURES']} WHERE pid='$pid'";
            $db->query($query);

            if (!$db->nf()) {
                cpgUtils::cpgDie(CRITICAL_ERROR, $lang_errors['non_exist_ap'], __FILE__, __LINE__);
            }

            $pic = $db->fetchRow();
        } else {
            $query = "SELECT {$config->conf['TABLE_PICTURES']}.aid as aid, category, filepath, filename, owner_id FROM {$config->conf['TABLE_PICTURES']}, {$config->conf['TABLE_ALBUMS']} WHERE {$config->conf['TABLE_PICTURES']}.aid = {$config->conf['TABLE_ALBUMS']}.aid AND pid='$pid'";

            $db->query($query);

            if (!$db->nf()) {
                cpgUtils::cpgDie(CRITICAL_ERROR, $lang_errors['non_exist_ap'], __FILE__, __LINE__);
            }

            $pic = $db->fetchRow();

            //if (($pic['category'] != FIRST_USER_CAT + $auth->isDefined('USER_ID')) && !($config->conf['users_can_edit_pics'] && $pic['owner_id'] == $auth->isDefined('USER_ID') && $auth->isDefined('USER_ID') != 0)) {

            if (!(GALLERY_ADMIN_MODE || $config->conf['users_can_edit_pics'] || $pic['owner_id'] == $auth->isDefined('USER_ID'))) {
                cpgUtils::cpgDie(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);
            }
        }

        $aid = $pic['aid'];
        $dir = $config->conf['fullpath'] . $pic['filepath'];
        $file = $pic['filename'];

        if (!is_writable($dir)) {
            cpgUtils::cpgDie(CRITICAL_ERROR, sprintf($lang_errors['directory_ro'], htmlspecialchars($dir)), __FILE__, __LINE__);
        }

        $params = array();
        $params['aid'] = $aid;
        $params['fileName'] = $file;

        if (is_file($dir . $file)) {
            if (@unlink($dir . $file)) {
                $params['imageBulb'] = 'green.gif';
            } else {
                $params['imageBulb'] = 'red.gif';
            }
        }

        if (is_file($dir . $config->conf['normal_pfx'] . $file)) {
            if (@unlink($dir . $config->conf['normal_pfx'] . $file)) {
                $params['normalBulb'] = 'green.gif';
            } else {
                $params['normalBulb'] = 'red.gif';
            }
        }

        if (is_file($dir . $config->conf['thumb_pfx'] . $file)) {
            if (@unlink($dir . $config->conf['thumb_pfx'] . $file)) {
                $params['thumbBulb'] = 'green.gif';
            } else {
                $params['thumbBulb'] = 'red.gif';
            }
        }

        $query = "DELETE FROM {$config->conf['TABLE_COMMENTS']} WHERE pid='$pid'";
        $db->query($query);

        if ($db->affectedRows() > 0) {
            $params['commentBulb'] = 'green.gif';
        }

        $query = "DELETE FROM {$config->conf['TABLE_EXIF']} WHERE filename='$dir$file' LIMIT 1";
        $db->query($query);

        // Delete hits statistics for this picture
        $query = "DELETE FROM {$config->conf['TABLE_HIT_STATS']} WHERE pid = '$pid'";
        $db->query($query);

        // Delete votes statistics for this picture
        $query = "DELETE FROM {$config->conf['TABLE_VOTE_STATS']} WHERE pid = '$pid'";
        $db->query($query);

        // Delete votes details for this picture
        $query = "DELETE FROM {$config->conf['TABLE_VOTES']} WHERE pic_id = '$pid'";
        $db->query($query);

        $query = "DELETE FROM {$config->conf['TABLE_PICTURES']} WHERE pid='$pid' LIMIT 1";
        $db->query($query);

        if ($db->affectedRows() > 0) {
            $params['fileBulb'] = 'green.gif';
        } else {
            $params['fileBulb'] = 'red.gif';
        }

        return $params;
    }

    /**
     * cpgProcessPicture::updatePicture()
     *
     * @param  $pid
     * @return
     */
    function updatePicture($pid)
    {
        global $lang_errors, $lang_editpics_php;

        $db = cpgDB::getInstance();
        $config = cpgConfig::getInstance();
        $auth = cpgAuth::getInstance();

        $aid = (int)$_POST['aid' . $pid];
        $pwidth = (int)$_POST['pwidth' . $pid];
        $pheight = (int)$_POST['pheight' . $pid];
        $title = $_POST['title' . $pid];
        $caption = $_POST['caption' . $pid];
        $keywords = $_POST['keywords' . $pid];
        $user1 = $_POST['user1' . $pid];
        $user2 = $_POST['user2' . $pid];
        $user3 = $_POST['user3' . $pid];
        $user4 = $_POST['user4' . $pid];

        $delete = isset($_POST['delete' . $pid]);
        $read_exif = isset($_POST['read_exif' . $pid]);
        $reset_vcount = isset($_POST['reset_vcount' . $pid]);
        $reset_votes = isset($_POST['reset_votes' . $pid]);
        $del_comments = isset($_POST['del_comments' . $pid]) || $delete;

        $query = "SELECT * FROM {$config->conf['TABLE_PICTURES']} AS p, {$config->conf['TABLE_ALBUMS']} AS a WHERE a.aid = p.aid AND pid = '$pid'";

        $db->query($query);

        if (!$db->nf()) {
            cpgUtils::cpgDie(CRITICAL_ERROR, $lang_errors['non_exist_ap'], __FILE__, __LINE__);
        }

        $pic = $db->fetchRow();

        if (!(GALLERY_ADMIN_MODE || $config->conf['users_can_edit_pics'] || $pic['owner_id'] == $auth->isDefined('USER_ID'))) {
            cpgUtils::cpgDie(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);
        }

        $update = "aid = '" . $aid . "'";
        if (is_movie($pic['filename'])) {
            $update .= ", pwidth = " . $pwidth;
            $update .= ", pheight = " . $pheight;
        }

        $update .= ", title = '" . addslashes($title) . "'";
        $update .= ", caption = '" . addslashes($caption) . "'";
        $update .= ", keywords = '" . addslashes($keywords) . "'";
        $update .= ", user1 = '" . addslashes($user1) . "'";
        $update .= ", user2 = '" . addslashes($user2) . "'";
        $update .= ", user3 = '" . addslashes($user3) . "'";
        $update .= ", user4 = '" . addslashes($user4) . "'";

        if ($reset_vcount) $update .= ", hits = '0'";
        if ($reset_votes) $update .= ", pic_rating = '0', votes = '0'";

        if (UPLOAD_APPROVAL_MODE) {
            $approved = $_POST['approved' . $pid];
            if ($approved == 'YES') {
                $update .= ", approved = 'YES'";
            } elseif ($approved == 'DELETE') {
                $del_comments = 1;
                $delete = 1;
            }
        }

        if ($del_comments) {
            $query = "DELETE FROM {$config->conf['TABLE_COMMENTS']} WHERE pid='$pid'";
            $db->query($query);
        }

        if ($delete) {
            // Delete picture and it's comments, votes details, stats etc.
            cpgProcessPicture::deletePicture($pid);
        } else {
            $query = "UPDATE {$config->conf['TABLE_PICTURES']} SET $update WHERE pid='$pid' LIMIT 1";
            $db->query($query);
        }

        // rename a file
        if ($_POST['filename' . $pid] != $pic['filename']) {

            if ($config->conf['thumb_use'] == 'ht' && $pic['pheight'] > $config->conf['picture_width']) {
                $condition = true;
            } elseif ($config->conf['thumb_use'] == 'wd' && $pic['pwidth'] > $config->conf['picture_width']) {
                $condition = true;
            } elseif ($config->conf['thumb_use'] == 'any' && max($pic['pwidth'], $pic['pheight']) > $config->conf['picture_width']) {
                $condition = true;
            } else {
                $condition = false;
            }

            if ($config->conf['make_intermediate'] && $condition) {
                $prefices = array('fullsize', 'normal', 'thumb');
            } else {
                $prefices = array('fullsize', 'thumb');
            }

            if (!is_image($pic['filename'])) {
                $prefices = array('fullsize');
            }

            foreach ($prefices as $prefix) {
                $oldname = cpgUtils::getPicUrl($pic, $prefix);
                $filename = cpgUtils::replaceForbidden($_POST['filename' . $pid]);
                $newname = str_replace($pic['filename'], $filename, $oldname);

                $old_mime = cpg_get_type($oldname);
                $new_mime = cpg_get_type($newname);

                if (($old_mime['mime'] != $new_mime['mime']) && isset($new_mime['mime'])) {
                    cpgUtils::cpgDie(CRITICAL_ERROR, sprintf($lang_editpics_php['mime_conv'], $old_mime['mime'], $new_mime['mime']), __FILE__, __LINE__);
                }
                if (!is_known_filetype($newname)) {
                    cpgUtils::cpgDie(CRITICAL_ERROR, $lang_editpics_php['forb_ext'], __FILE__, __LINE__);
                }
                if (file_exists($newname)) {
                    cpgUtils::cpgDie(CRITICAL_ERROR, sprintf($lang_editpics_php['file_exists'], $newname), __FILE__, __LINE__);
                }
                if (!file_exists($oldname)) {
                    cpgUtils::cpgDie(CRITICAL_ERROR, sprintf($lang_editpics_php['src_file_missing'], $oldname), __FILE__, __LINE__);
                }
                if (rename($oldname, $newname)) {
                    $query = "UPDATE {$config->conf['TABLE_PICTURES']} SET filename = '$filename' WHERE pid = '$pid' LIMIT 1";
                    $db->query($query);
                } else {
                    cpgUtils::cpgDie(CRITICAL_ERROR, sprintf($lang_editpics_php['rename_failed'], $oldname, $newname), __FILE__, __LINE__);
                }
            }
        }
    }
}

?>
