<?php
/**
 * cpgManagePicture.class.php
 *
 * class for sorting picture of particular Album
 *
 * @package cpgNG
 * @author Abbas Ali <abbas@sanisoft.com>
 * @version $Id$
 */

class cpgManagePicture {
    var $db;
    var $config;
    var $auth;

    /**
     * cpgManagePicture::cpgManagePicture()
     *
     * @return
     */
    function cpgManagePicture()
    {
        $this->db = cpgDB::getInstance();
        $this->auth = cpgAuth::getInstance();
        $this->config = cpgConfig::getInstance();
    }

    /**
     * cpgManagePicture::get_album_data()
     *
     * @return
     */
    function get_album_data()
    {
        $ALBUM_LIST = array();
        $ALBUM_LIST[] = array(0, $lang_picmgr_php['no_album']);
        $sql = "SELECT aid, title FROM {$this->config->conf['TABLE_ALBUMS']} ORDER BY title";
        $this->db->query($sql);
        if ($this->db->nf() >  0) {
            $rowset = $this->db->fetchRowSet();
            foreach ($rowset as $alb) {
                $ALBUM_LIST[] = array($alb['aid'], $alb['title']);
            }
        }
        return $ALBUM_LIST;
    }

    /**
     * cpgManagePicture::albumselect()
     *
     * @return
     */
    function albumselect()
    {
        global $lang_picmgr_php, $lang_errors, $lang_search_new_php;
        $list_count = 0;
        // albums in root category
        if (GALLERY_ADMIN_MODE) {
            $sql = "SELECT aid, title FROM {$this->config->conf['TABLE_ALBUMS']} WHERE category = 0";
            $this->db->query($sql);
            if ($this->db->nf()) {
              $rowset = $this->db->fetchRowSet();
              foreach ($rowset as $row) {
                  $listArray[$list_count]['cat'] = $lang_search_new_php['albums_no_category'];
                  $listArray[$list_count]['aid'] = $row['aid'];
                  $listArray[$list_count]['title'] = $row['title'];
                  $list_count++;
              }
            }
            $this->db->free();
        }

        // albums in public categories
        if (GALLERY_ADMIN_MODE) {
            $sql = "SELECT DISTINCT a.aid AS aid, a.title AS title, c.name AS cname FROM {$this->config->conf['TABLE_ALBUMS']} AS a, {$this->config->conf['TABLE_CATEGORIES']} AS c WHERE a.category = c.cid AND a.category < '" . FIRST_USER_CAT . "'";
            $this->db->query($sql);
            if ($this->db->nf()) {
              $rowset = $this->db->fetchRowSet();
              foreach ($rowset as $row) {
                  $listArray[$list_count]['cat'] = $row['cname'];
                  $listArray[$list_count]['aid'] = $row['aid'];
                  $listArray[$list_count]['title'] = $row['title'];
                  $list_count++;
              }
            }
            $this->db->free();
        }

        if (GALLERY_ADMIN_MODE) {
            $sql = $this->auth->get_admin_album_list();  //it's always bridged so we no longer need to check.
        } else {
            // $sql = "SELECT aid, title AS title FROM {$this->config->conf['TABLE_ALBUMS']}  WHERE category = " . (FIRST_USER_CAT + $this->auth->isDefined('USER_ID'));
            $sql = "SELECT aid, title AS title FROM {$this->config->conf['TABLE_ALBUMS']}  WHERE user_Id = " . $this->auth->isDefined('USER_ID');
        }

        $this->db->query($sql);
        
        if ($this->db->nf()) {
          $rowset = $this->db->fetchRowSet();
          foreach ($rowset as $row) {
          print "HERE";
              $listArray[$list_count]['cat'] = $lang_search_new_php['personal_albums'];
              $listArray[$list_count]['aid'] = $row['aid'];
              $listArray[$list_count]['title'] = $row['title'];
              $list_count++;
          }
        }
        $this->db->free();

       // Sort the pulldown options by category and album name
        $listArray = cpgUtils::array_csort($listArray,'cat','title');

        return $listArray;
    }

    /**
     * cpgManagePicture::sortedFiles()
     *
     * @return
     */
    function sortedFiles()
    {
        global $lang_picmgr_php, $lang_errors, $lang_delete_php, $lang_continue;

        if (!(GALLERY_ADMIN_MODE || USER_ADMIN_MODE)) {
            cpgUtils::cpgDie(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);
        }
        $orig_sort_order = $this->parse_pic_list($_POST['sort_order']);
        foreach ($orig_sort_order as $picture) {
            $op = $this->parse_pic_orig_sort_order($picture);
            if (count ($op) == 2) {
                $query = "UPDATE {$this->config->conf['TABLE_PICTURES']} SET position='{$op['pos']}' WHERE pid='{$op['aid']}' LIMIT 1";
                $this->db->query($query);
            } else {
                cpgUtils::cpgDie (sprintf(CRITICAL_ERROR, $lang_delete_php['err_invalid_data'], $_POST['sort_order']), __FILE__, __LINE__);
            }
        }

        if (isset($_POST['to'])) {
            foreach ($_POST['to'] as $option_value) {
                $op = $this->parse_pic_select_option(stripslashes($option_value));
                switch ($op['action']) {
                  case '0':
                      break;
                  case '1':
                      break;
                  case '2':
                      $query = "UPDATE {$this->config->conf['TABLE_PICTURES']} SET position='{$op['picture_sort']}' WHERE pid='{$op['picture_no']}' LIMIT 1";
                      $this->db->query($query);
                      break;
                  default:
                      cpgUtils::cpgDie (CRITICAL_ERROR, $lang_delete_php['err_invalid_data'], __FILE__, __LINE__);
                }
            }
        }
        cpgUtils::msgBox($lang_picmgr_php['info'], $lang_picmgr_php['pic_updated'], $lang_continue, 'index.php');
        exit();
     }

     /**
      * cpgManagePicture::parse_pic_select_option()
      *
      * @param $value
      * @return
      */
     function parse_pic_select_option($value)
     {
        global $HTML_SUBST;

        if (!preg_match("/.+?no=(\d+),picture_nm='(.+?)',picture_sort=(\d+),action=(\d)/", $value, $matches)) {
            return false;
        }

        return array(
                    'picture_no'   => (int)$matches[1],
                    'picture_nm'   => get_magic_quotes_gpc() ? strtr(stripslashes($matches[2]), $HTML_SUBST) : strtr($matches[2], $HTML_SUBST),
                    'picture_sort' => (int)$matches[3],
                    'action'     => (int)$matches[4]);
     }

     /**
      * cpgManagePicture::parse_pic_orig_sort_order()
      *
      * @param $value
      * @return
      */
     function parse_pic_orig_sort_order($value)
     {
         if (!preg_match("/(\d+)@(\d+)/", $value, $matches)) {
             return false;
         }

         return array(
                     'aid'   => (int)$matches[1],
                     'pos'   => (int)$matches[2] );
     }

     /**
      * cpgManagePicture::parse_pic_list()
      *
      * @param $value
      * @return
      */
     function parse_pic_list($value)
     {
         return preg_split("/,/", $value, -1, PREG_SPLIT_NO_EMPTY);
     }

     /**
      * cpgManagePicture::showRatingDetails()
      *
      * @param $pid
      * @return
      */
    function showRatingDetails($pid)
    {
        $query = "SELECT rating, count(rating) AS totalVotes FROM {$this->config->conf['TABLE_VOTE_STATS']} WHERE pid='$pid' GROUP BY rating";
        $this->db->query($query);

        $voteArr = array();
        $row = $this->db->fetchRow();
        $voteArr[$row['rating']] = $row['totalVotes'];

        for ($i=0; $i<6; $i++) {
            $voteArr[$i] = isset($voteArr[$i]) ? $voteArr[$i] : 0;
        }

        return $voteArr;
    }

} // endo of class

?>
