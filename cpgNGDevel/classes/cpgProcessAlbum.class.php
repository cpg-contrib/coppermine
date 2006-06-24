<?php
/**
 * cpgProcessAlbum.class.php
 *
 * Class containing static function which are used for different kind of data processing
 *
 * @package cpgNG
 * @author Abbas <abbas@sanisoft.com>
 * @version $Id$
 */
require_once('classes/cpgProcessPicture.class.php');
require_once('classes/cpgProcessCategory.class.php');

class cpgProcessAlbum {
    var $album;
    var $albumData = array();
    var $db;
    var $config;
    var $auth;
    var $catList = array();

    function cpgProcessAlbum($aid=0)
    {
        $this->db = cpgDB::getInstance();
        $this->config = cpgConfig::getInstance();
        $this->auth = cpgAuth::getInstance();

        $this->album = $aid;
    }

    function getAlbumData()
    {
        global $lang_errors;

        if (!$this->album) {
          if (GALLERY_ADMIN_MODE) {
              $query = "SELECT * FROM {$this->config->conf['TABLE_ALBUMS']} WHERE 1 LIMIT 1";
          } else {
              $query = "SELECT * FROM {$this->config->conf['TABLE_ALBUMS']} WHERE category = " . (FIRST_USER_CAT + $this->auth->isDefined('USER_ID')) . " OR user_Id = '". $this->auth->isDefined('USER_ID'). "' LIMIT 1";
          }
        } else {
          $query = "SELECT * FROM {$this->config->conf['TABLE_ALBUMS']} WHERE aid='{$this->album}'";
        }

        $this->db->query($query);

        if (!$this->db->nf()) {
          cpgUtils::cpgDie(CRITICAL_ERROR, $lang_errors['non_exist_ap'], __FILE__, __LINE__);
        }

        $this->albumData = $this->db->fetchRow();

        $this->album = $this->albumData['aid'];

/*        if (!GALLERY_ADMIN_MODE && $this->albumData['category'] != FIRST_USER_CAT + $this->auth->isDefined('USER_ID')) {
            cpgUtils::cpgDie(ERROR, $lang_errors['perm_denied'], __FILE__, __LINE__);
        }
*/
    }

    function buildCatList()
    {
/*        if (!GALLERY_ADMIN_MODE || $this->albumData['category'] > FIRST_USER_CAT) {
          return;
        } else {
*/
          global $lang_modifyalb_php;

          $this->catList[] = array(0, $lang_modifyalb_php['no_cat']);
          $categoryObj = new cpgProcessCategory;
          $this->catList = $categoryObj->getSubcatData(0, $this->catList, '');
//        }
    }

    function buildPicListBox()
    {
        global $lang_modifyalb_php;

        $cpgNopicData = cpgUtils::cpgGetSystemThumb('nopic.jpg',$this->auth->userData['user_id']);

        $query = "SELECT pid, filepath, filename, url_prefix FROM {$this->config->conf['TABLE_PICTURES']} WHERE aid='{$this->album}' AND approved='YES' ORDER BY filename";

        $this->db->query($query);

        if ($this->db->nf()) {
          $this->miscArr['initialThumbUrl'] = $cpgNopicData['thumb']; //'images/nopic.jpg';

          $this->imgList = array(0 => $lang_modifyalb_php['last_uploaded']);
          $this->miscArr['thumbUrl'][0] = $this->miscArr['initialThumbUrl'];

          while ($picture = $this->db->fetchRow()) {
              $this->miscArr['thumbUrl'][$picture['pid']] = cpgUtils::getPicUrl($picture, 'thumb');
              if ($picture['pid'] == $this->albumData['thumb']) {
                $this->miscArr['initialThumbUrl'] = $this->miscArr['thumbUrl'][$picture['pid']];
              }
              $this->imgList[$picture['pid']] = htmlspecialchars($picture['filename']);
          } // while
          $this->miscArr['thumbCellHeight'] = $this->config->conf['thumb_width'] + 17;
        }
    }

    function buildAlbumPermList()
    {
        global $lang_modifyalb_php;

        if (GALLERY_ADMIN_MODE) {
          //$this->permOptions = array (0 => $lang_modifyalb_php['public_alb'], FIRST_USER_CAT + $this->auth->isDefined('USER_ID') => $lang_modifyalb_php['me_only']);
		  $this->permOptions = array (0 => $lang_modifyalb_php['public_alb'], FIRST_USER_CAT + $this->albumData['user_id'] => $lang_modifyalb_php['me_only']);
          if ($this->albumData['category'] > FIRST_USER_CAT) {
              if (defined('UDB_INTEGRATION')) {
                  $ownerName = $this->auth->get_user_name($this->albumData['category'] - FIRST_USER_CAT);
              } else {
                  $query = "SELECT user_name FROM {$this->config->conf['TABLE_USERS']} WHERE user_id='" . ($this->albumData['category'] - FIRST_USER_CAT) . "'";
                  $this->db->query($query);

                  if ($this->db->nf()) {
                      $user = $this->db->fetchRow();
                      $ownerName = $user['user_name'];
                  }
              }
              $this->permOptions[$this->albumData['category']] = sprintf($lang_modifyalb_php['owner_only'], $ownerName);
          }

          $query = "SELECT group_id, group_name FROM {$this->config->conf['TABLE_USERGROUPS']} WHERE 1";
          $this->db->query($query);
          while ($group = $this->db->fetchRow()) {
                $this->permOptions[$group['group_id']] = sprintf($lang_modifyalb_php['groupp_only'], $group['group_name']);
          } // while
        } else {
          $this->permOptions = array(0 => $lang_modifyalb_php['public_alb'], FIRST_USER_CAT + $this->albumData['user_id'] => $lang_modifyalb_php['me_only']);

          $query = "SELECT group_id, group_name FROM {$this->config->conf['TABLE_USERGROUPS']} WHERE group_id IN " . USER_GROUP_SET;

          while ($group = $this->db->fetchRow()) {
            $this->permOptions[$group['group_id']] = sprintf($lang_modifyalb_php['groupp_only'], $group['group_name']);
          } // while
        }
    }

    function getAlbumStats()
    {
        // get the album stats
        $query = "SELECT SUM(hits) FROM {$this->config->conf['TABLE_PICTURES']} WHERE aid='{$this->album}'";
        $this->db->query($query);
        $nbEnr = $this->db->fetchRow();
        $this->miscArr['hits'] = $nbEnr[0];

        if (!$this->miscArr['hits']) {
          $this->miscArr['hits'] = 0;
        }

        $query = "SELECT SUM(votes) FROM {$this->config->conf['TABLE_PICTURES']} WHERE aid='{$this->album}' AND votes > 0";
        $this->db->query($query);
        $nbEnr = $this->db->fetchRow();
        $this->miscArr['votes'] = $nbEnr[0];

        if (!$this->miscArr['votes']) {
          $this->miscArr['votes'] = 0;
        }

        $query = "SELECT COUNT(pid) FROM {$this->config->conf['TABLE_PICTURES']} WHERE aid='{$this->album}'";
        $this->db->query($query);
        $nbEnr = $this->db->fetchRow();
        $this->miscArr['files'] = $nbEnr[0];

        if (!$this->miscArr['files']) {
          $this->miscArr['files'] = 0;
        }
    }
    /**
     * cpgProcessAlbum::updateAlbum()
     *
     * @return
     */
    function updateAlbum()
    {
        global $lang_errors, $lang_delete_php;

        if (!(GALLERY_ADMIN_MODE || USER_ADMIN_MODE)) {
            cpgUtils::cpgDie(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);
        }

        $category = (int)$_POST['cat'];

        if (USER_ADMIN_MODE) {
            $categories = cpgUtils::cpgGetCategories();
            if (!array_key_exists($category, $categories) && $category >= 0) {
                cpgUtils::cpgDie(ERROR, $lang_errors['perm_denied'], __FILE__, __LINE__);
            }
        }

        if (!GALLERY_ADMIN_MODE) {
            $restrict = "AND category = '" .$category. "' AND user_Id = '" .$this->auth->isDefined('USER_ID'). "'";
        } else {
            $restrict = '';
        }

        $orig_sort_order = $this->parseList($_POST['sort_order']);

        foreach ($orig_sort_order as $album) {
            $op = $this->parseOrigSortOrder($album);
            if (count ($op) == 2) {
                $query = "UPDATE {$this->config->conf['TABLE_ALBUMS']} SET pos='{$op['pos']}' WHERE aid='{$op['aid']}' $restrict LIMIT 1";
                $this->db->query($query);
            } else {
                cpgUtils::cpgDie (sprintf(CRITICAL_ERROR, $lang_delete_php['err_invalid_data'], $_POST['sort_order']), __FILE__, __LINE__);
            }
        }

        $to_delete = $this->parseList($_POST['delete_album']);
        foreach ($to_delete as $album_id) {
            $this->deleteAlbum[] = $this->deleteAlbum((int)$album_id);
        }

        if (isset($_POST['to'])) foreach ($_POST['to'] as $option_value) {
            $op = $this->parseSelectOption(stripslashes($option_value));
            switch ($op['action']) {
                case '0':
                    break;
                case '1':
                    $this->newAlbum[] = sprintf($lang_delete_php['create_alb'], $op['album_nm']);
                    $query = "INSERT INTO {$this->config->conf['TABLE_ALBUMS']} (category, title, uploads, pos, user_Id) VALUES ('$category', '" . addslashes($op['album_nm']) . "', 'NO',  '{$op['album_sort']}', '" .$this->auth->isDefined('USER_ID'). "')";

                    $this->db->query($query);
                    break;
                case '2':
                    $this->updateAlbum[] = sprintf($lang_delete_php['update_alb'], $op['album_no'], $op['album_nm'], $op['album_sort']);
                    $query = "UPDATE {$this->config->conf['TABLE_ALBUMS']} SET title='" . addslashes($op['album_nm']) . "', pos='{$op['album_sort']}' WHERE aid='{$op['album_no']}' $restrict LIMIT 1";

                    $this->db->query($query);
                    break;
                default:
                    cpgUtils::cpgDie (CRITICAL_ERROR, $lang_delete_php['err_invalid_data'], __FILE__, __LINE__);
            }
        }
    }

    /**
     * cpgProcessAlbum::deleteAlbum()
     *
     * @param  $aid
     * @return
     */
    function deleteAlbum($aid=0)
    {

        global $lang_errors, $lang_delete_php;

        if ($aid == 0) {
          $aid = $this->album;
        }
/*
        $query = "SELECT title, category FROM {$this->config->conf['TABLE_ALBUMS']} WHERE aid ='$aid'";
        $this->db->query($query);

        if (!$this->db->nf()) {
            cpgUtils::cpgDie(CRITICAL_ERROR, $lang_errors['non_exist_ap'], __FILE__, __LINE__);
        }

        $album_data = $this->db->fetchRow();

        if (!GALLERY_ADMIN_MODE) {
            if ($album_data['category'] != FIRST_USER_CAT + $this->auth->isDefined('USER_ID')) {
                cpgUtils::cpgDie(ERROR, $lang_errors['perm_denied'], __FILE__, __LINE__);
            }
        }
*/
        $query = "SELECT pid FROM {$this->config->conf['TABLE_PICTURES']} WHERE aid='$aid'";
        $this->db->query($query);

        if ($this->db->nf()) {
            $allPics = $this->db->fetchRowSet();
            // Delete all files
            foreach ($allPics as $pic) {
                $params['pictures'][] = cpgProcessPicture::deletePicture($pic['pid']);
            }
        }
        // Delete album
        $query = "DELETE from {$this->config->conf['TABLE_ALBUMS']} WHERE aid='$aid'";
        $this->db->query($query);

        if ($this->db->affectedRows() > 0) {
            $params['albumDeleted'] = sprintf($lang_delete_php['alb_del_success'], $album_data['title']);
        }

        return $params;
    }

    /**
     * cpgProcessAlbum::parseSelectOption()
     *
     * @param  $value
     * @return
     */
    function parseSelectOption($value)
    {
        global $HTML_SUBST;

        if (!preg_match("/.+?no=(\d+),album_nm='(.+?)',album_sort=(\d+),action=(\d)/", $value, $matches)) {
            return false;
        }

        return array('album_no' => (int)$matches[1],
            'album_nm' => get_magic_quotes_gpc() ? strtr(stripslashes($matches[2]), $HTML_SUBST) : strtr($matches[2], $HTML_SUBST),
            'album_sort' => (int)$matches[3],
            'action' => (int)$matches[4]
            );
    }

    /**
     * cpgProcessAlbum::parseOrigSortOrder()
     *
     * @param  $value
     * @return
     */
    function parseOrigSortOrder($value)
    {
        if (!preg_match("/(\d+)@(\d+)/", $value, $matches)) {
            return false;
        }

        return array('aid' => (int)$matches[1],
            'pos' => (int)$matches[2],
            );
    }

    /**
     * cpgProcessAlbum::parseList()
     *
     * @param  $value
     * @return
     */
    function parseList($value)
    {
        return preg_split("/,/", $value, -1, PREG_SPLIT_NO_EMPTY);
    }

    /**
     * cpgProcessAlbum::getAllAlbums()
     *
     * @return
     */
    function getAllAlbums()
    {
        if (GALLERY_ADMIN_MODE) {
            $query = "SELECT aid, title FROM {$this->config->conf['TABLE_ALBUMS']} WHERE category < '" . FIRST_USER_CAT . "' ORDER BY title";

            $this->db->query($query);

            $this->albListArr = $this->db->fetchRowSet();

            if (defined('UDB_INTEGRATION')) {
                $sql = $this->auth->get_admin_album_list();
            } else {
                $sql = "SELECT aid, CONCAT('(', user_name, ') ', title) AS title " . "FROM {$this->config->conf['TABLE_ALBUMS']} AS a " . "INNER JOIN {$this->config->conf['TABLE_USERS']} AS u ON category = (" . FIRST_USER_CAT . " + u.user_id) " . "ORDER BY title";
            }
            $this->db->query($sql);

            while ($row = $this->db->fetchRow()) {
                $this->albListArr[] = $row;
            }
        } else {
            $query = "SELECT aid, title FROM {$this->config->conf['TABLE_ALBUMS']} WHERE user_Id = '" . $this->auth->isDefined('USER_ID') . "' ORDER BY title";

            $this->db->query($query);
            $this->albListArr = $this->db->fetchRowSet();
        }
    }

    /**
     * cpgProcessAlbum::modifyAlbum()
     *
     * @return
     */
    function modifyAlbum($event)
    {
        global $lang_db_input_php, $lang_errors;

        if (!(USER_ADMIN_MODE || GALLERY_ADMIN_MODE)) {
            cpgUtils::cpgDie(ERROR, $lang_errors['perm_denied'], __FILE__, __LINE__);
        }

        switch ($event) {
            case 'album_update':
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
                $passwordHint = addslashes(trim($_POST['alb_password_hint']));
                $visibility = !empty($password) ? FIRST_USER_CAT + $this->auth->isDefined('USER_ID') : $visibility;

                if (!$title) {
                    cpgUtils::cpgDie(ERROR, $lang_db_input_php['alb_need_title'], __FILE__, __LINE__);
                }

                //if (GALLERY_ADMIN_MODE) {
                    $query = "UPDATE {$this->config->conf['TABLE_ALBUMS']} SET title='$title', description='$description', category='$category', thumb='$thumb', uploads='$uploads', comments='$comments', votes='$votes', visibility='$visibility', alb_password='$password', alb_password_hint='$passwordHint', keyword='$keyword' WHERE aid='{$this->album}' LIMIT 1";
                /*} else {
                    //$category = FIRST_USER_CAT + $this->auth->isDefined('USER_ID');
                    $query = "UPDATE {$this->config->conf['TABLE_ALBUMS']} SET title='$title', description='$description', thumb='$thumb',  comments='$comments', votes='$votes', visibility='$visibility', alb_password='$password', alb_password_hint='$passwordHint',keyword='$keyword' WHERE aid='{$this->album}' AND category='$category' LIMIT 1";
                }*/

                $this->db->query($query);

                if (!$this->db->affectedRows()) {
                    cpgUtils::cpgDie(INFORMATION, $lang_db_input_php['no_udp_needed'], __FILE__, __LINE__);
                }
                break;

            case 'album_reset':
                if (!GALLERY_ADMIN_MODE) {
                    cpgUtils::cpgDie(ERROR, $lang_errors['perm_denied'], __FILE__, __LINE__);
                }

                $counterAffectedRows = 0;
                $resetViews = (int)($_POST['reset_views']);
                $resetRating = (int)$_POST['reset_rating'];
                $deleteFiles = (int)$_POST['delete_files'];

                if ($resetViews) { // if resetViews start
                    $query = "UPDATE {$this->config->conf['TABLE_PICTURES']} SET hits='0' WHERE aid='{$this->album}'";
                    $this->db->query($query);

                    if ($this->db->affectedRows()) {
                        $counterAffectedRows++;
                    }
                } // if resetViews end
                if ($resetRating) { // if reset_rating start
                    $query = "UPDATE {$this->config->conf['TABLE_PICTURES']} SET  pic_rating='0',  votes='0' WHERE aid='{$this->album}'";
                    $this->db->query($query);

                    if ($this->db->affectedRows()) {
                        $counterAffectedRows++;
                    }
                } // if reset_rating end
                if ($deleteFiles) { // if delete_files start
                    $query = "DELETE FROM {$this->config->conf['TABLE_PICTURES']} WHERE aid='{$this->album}'";
                    $this->db->query($query);

                    if ($db->affectedRows()) {
                        $counterAffectedRows++;
                    }
                } // if delete_files end
                if ($counterAffectedRows == 0) {
                    cpgUtils::cpgDie(INFORMATION, $lang_db_input_php['no_udp_needed'], __FILE__, __LINE__);
                }

                break;

            default:
                cpgUtils::cpgDie(ERROR, $lang_errors['param_missing'], __FILE__, __LINE__);
        }
    }
}

?>