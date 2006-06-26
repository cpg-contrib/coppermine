<?php

require_once('cpgAlbumData.class.php');

/**
 * cpgSearchAlbumData
 *
 * This class is used to display search records
 *
 * @package cpgNG
 * @author amit
 * @copyright Copyright (c) 2005
 * @version $Id$
 * @access public
 */
class cpgSearchAlbumData extends cpgAlbumData {
  var $db;
  var $auth;
  var $config;

  /**
   * cpgSearchAlbumData()
   *
   * Constructor of class
   *
   * @param
   * @return
   */
  function cpgSearchAlbumData() {
    $this->db = cpgDB::getInstance();
    $this->auth = cpgAuth::getInstance();
    $this->config = cpgConfig::getInstance();
  } // End of method 'cpgSearchAlbumData'

  function getThumbnailData($album, $cat, $page, $thumbcols, $thumbrows, $display_tabs) {
    global $album_date_fmt, $lang_display_thumbnails, $lang_errors, $lang_byte_units, $lang_get_pic_data, $album_name, $USER, $CURRENT_ALBUM_KEYWORD, $HTML_SUBST;

    $thumb_per_page = $thumbcols * $thumbrows;
    $lower_limit = ($page-1) * $thumb_per_page;

    $pic_data = $this->getPicData($album, $thumb_count, $album_name, $lower_limit, $thumb_per_page);

    $total_pages = ceil($thumb_count / $thumb_per_page);

    $i = 0;

    $thumb_list['albumName'] = $album_name;
    $thumb_list['thumbCount'] = 0;

    if (count($pic_data) > 0) {
      foreach ($pic_data as $key => $row) {
        if (empty($row)) continue;

        $pic_title = $lang_display_thumbnails['filename'].$row['filename']."\n".
                     $lang_display_thumbnails['filesize'].($row['filesize'] >> 10).$lang_byte_units[1]."\n".
                     $lang_display_thumbnails['dimensions'].$row['pwidth'].'x'.$row['pheight']."\n".
                     $lang_display_thumbnails['date_added'].cpgUtils::localisedDate($row['ctime'], $album_date_fmt);

        $pic_url = $this->__getPicUrl($row, 'thumb');

        if (!is_image($row['filename'])) {
          $image_info = getimagesize($pic_url);

          $row['pwidth'] = $image_info[0];
          $row['pheight'] = $image_info[1];
        }

        $image_size = $this->computeImgSize($row['pwidth'], $row['pheight'], $this->config->conf['thumb_width']);

        $thumb_list[$i]['pos'] = $key < 0 ? $key : $i - 1 + $lower_limit;
        $thumb_list[$i]['pid'] = $row['pid'];;
        $thumb_list[$i]['image'] = array('url' => $this->config->conf['ecards_more_pic_target'].$pic_url, 'alt' => $row['filename'], 'title' => $pic_title);
        $thumb_list[$i]['admin_menu'] = '';
        $thumb_list[$i]['aid'] = $row['aid'];

        $thumb_list[$i]['imgTitle'] = $row['title'];

        if ($this->config->conf['display_uploader']) {
          $thumb_list[$i]['owner'] = $row['owner_name'];
          $thumb_list[$i]['ownerLink'] = $row['owner_id'];
        }

        if ($this->config->conf['views_in_thumbview']) {
          $thumb_list[$i]['hits'] = sprintf($lang_get_pic_data['n_views'], $row['hits']);
        }

        if ($this->config->conf['caption_in_thumbview']) {
          $thumb_list[$i]['caption'] = ($row['caption'] ? strip_tags(cpgUtils::bbDecode($row['caption'])) : '');
        }

        if ($this->config->conf['display_comment_count']) {
          $comments_nr = cpgUtils::countPicComments($row['pid']);

          if ($comments_nr > 0) {
            $thumb_list[$i]['totalComments'] = sprintf($lang_get_pic_data['n_comments'], $comments_nr);
          }
        }

        $thumb_list[$i]['displayURL'] = $this->config->conf['ecards_more_pic_target'].'displayimage.php?meta=search';

        if ($page == 1) {
          $thumb_list[$i]['displayURL'] .= '&amp;pid='.$row['pid'];
        } else {
          $thumb_list[$i]['displayURL'] .= '&amp;pid='.$row['pid'];
        }

        if ($cat) {
          $thumb_list[$i]['displayURL'] .= '&amp;cat='.$cat;
        }

        if ($album) {
          $thumb_list[$i]['displayURL'] .= '&amp;album='.$album;
        }

        /**
         * If display of mini toolbar is ON
         */
        if ($this->config->conf['display_mini_toolbar'] == 1) {
          /**
           * Check whether this pic is in user's favorites or not
           */
          if (in_array($row['pid'], $this->auth->favPics)) {
            $thumb_list[$i]['fav'] = 1;
          } else {
            $thumb_list[$i]['fav'] = 0;
          }

          /**
           * Check whether user can send ecards and build the ecard link accordingly
           */
          if ($this->auth->isDefined('USER_CAN_SEND_ECARDS')) {
            $thumb_list[$i]['ecardURL'] = 'ecard.php?meta=search&amp;';

            if ($page == 1) {
              $thumb_list[$i]['ecardURL'] .= 'pos='.$i.'&amp;';
            } else {
              $thumb_list[$i]['ecardURL'] .= 'pos='.($i + ($thumbcols * $thumbrows * ($page - 1))).'&amp;';
            }

            if (!empty($cat)) {
              $thumb_list[$i]['ecardURL'] .= 'cat='.$cat.'&amp;';
            }

            if (!empty($album)) {
              $thumb_list[$i]['ecardURL'] .= 'album='.$album.'&amp;';
            }

            $thumb_list[$i]['ecardURL'] .= 'pid='.$row['pid'];
          } else {
            $thumb_list[$i]['ecardURL'] = '';
          }
        }

        $i++;
      }

      $thumb_list['album'] = $album;
      $thumb_list['currentPage'] = $page;
      $thumb_list['albumName'] = $album_name;
      $thumb_list['thumbCount'] = $thumb_count;
      $thumb_list['totalPages'] = $total_pages;

      /**
       * If total pages are greater than 1, create the URL's for pagination
       */
      if ($total_pages > 1) {
        for ($i = 1; $i <= $total_pages; $i++) {
          $thumb_list['pageURL'][$i] = $this->config->conf['ecards_more_pic_target'].'thumbnails.php?meta=search&amp;page='.$i;

          if ($cat) {
            $thumb_list['pageURL'][$i] .= '&amp;cat='.$cat;
          }

          if ($album) {
            $thumb_list['pageURL'][$i] .= '&amp;album='.$album;
          }
        }
      }
    }

    return $thumb_list;
  } // End of method 'getThumbnailData'

  function getPicData($album, &$count, &$album_name, $limit1=-1, $limit2=-1, $set_caption = true) {
    global $USER, $CURRENT_ALBUM_KEYWORD, $HTML_SUBST;
    global $album_date_fmt, $lastcom_date_fmt, $lastup_date_fmt, $lasthit_date_fmt;
    global $lang_get_pic_data, $lang_meta_album_names, $lang_errors;

    $sort_array = array(
                        'na' => 'filename ASC',
                        'nd' => 'filename DESC',
                        'ta' => 'title ASC',
                        'td' => 'title DESC',
                        'da' => 'pid ASC',
                        'dd' => 'pid DESC',
                        'pa' => 'position ASC',
                        'pd' => 'position DESC'
                        );

    $sort_code = (isset($USER['sort']) ? $USER['sort'] : $this->config->conf['default_sort_order']);
    $sort_order = (isset($sort_array[$sort_code]) ? $sort_array[$sort_code] : $sort_array[$this->config->conf['default_sort_order']]);
    $limit = (($limit1 != -1) ? ' LIMIT '.$limit1 : '');
    $limit .= (($limit2 != -1) ? ', '. $limit2 : '');

    if ($limit2 == 1) {
      $select_columns = '*';
    } else {
      $select_columns = 'pid, filepath, filename, url_prefix, filesize, pwidth, pheight, ctime, aid, keywords';
    }

    if (is_array($this->auth->forbiddenSetData) && count($this->auth->forbiddenSetData) > 0) {
      $forbidden_set_string = ' AND aid NOT IN ('.implode(', ', $this->auth->forbiddenSetData).')';
    } else {
      $forbidden_set_string = '';
    }

    // Keyword
    if (!empty($CURRENT_ALBUM_KEYWORD)) {
      $keyword = "OR (keywords LIKE '%$CURRENT_ALBUM_KEYWORD%' $forbidden_set_string)";
    } else $keyword = '';

    if (isset($this->auth->user['search']['search'])) {
      $search_string = $this->auth->user['search']['search'];
    } else {
      $search_string = '';
    }

    $album_name = $lang_meta_album_names['search'].' - "'. strtr($search_string, $HTML_SUBST).'"';

    $multibyte_charset = 'utf-8, big5, shift_jis, euc-kr, gb2312';

    $charset = ($this->config->conf['charset'] == 'language file' ? $GLOBALS['lang_charset'] : $this->config->conf['charset']);

    $allowed = array('title', 'caption', 'keywords', 'owner_name', 'filename', 'pic_raw_ip', 'pic_hrd_ip', 'user1', 'user2', 'user3', 'user4');

    $mb_charset = stristr($multibyte_charset, $charset);

    $search_string = str_replace('*', '%', addslashes($search_string));
    $search_string = preg_replace('/&.*;/i', '', $search_string);

    if (!$mb_charset)
      $search_string = preg_replace('/[^0-9a-z %]/i', '', $search_string);

    if (!isset($this->auth->user['search']['params'])) {
      $this->auth->user['search']['params']['title'] = $this->auth->user['search']['params']['caption'] = $this->auth->user['search']['params']['keywords'] = 1;
    }

    $_POST = $this->auth->user['search'];

    $type = ($_POST['type'] == 'AND' ? ' AND ' : ' OR ');

    if (isset($_POST['params']['pic_raw_ip'])) {
      $_POST['params']['pic_hdr_ip'] = $_POST['params']['pic_raw_ip'];
    }

    if ($search_string && isset($_POST['params'])) {
      $sql = 'SELECT * FROM '.$this->config->conf['TABLE_PICTURES'].' WHERE ';
      $split_search = explode(' ', $search_string);
      $sections = array();

      foreach($split_search as $word) {
        $word = addslashes($word);
        $fields = array();

        foreach ($_POST['params'] as $param => $value) {
          if (in_array($param, $allowed)) $fields[] = "$param LIKE '%$word%'";
        }

        $sections[] = '('.implode(' OR ', $fields).')';
      }

      $sql .= implode($type, $sections);

      $sql .= ($_POST['newer_than'] ? ' AND ctime > UNIX_TIMESTAMP() - '.((int)$_POST['newer_than'] * 60 * 60 * 24) : '');
      $sql .= ($_POST['older_than'] ? ' AND ctime < UNIX_TIMESTAMP() - '.((int)$_POST['older_than'] * 60 * 60 * 24) : '');
      $sql .= $forbidden_set_string;

      $temp = str_replace('SELECT *', 'SELECT COUNT(*)', $sql);
      $this->db->query($temp);
      $row = $this->db->fetchRow();
      $count = $row[0];

      $sql .= ' ORDER BY '.$sort_order.' '.$limit;
      $this->db->query($sql);
      $rowset = $this->db->fetchRowset();
    }

    ///$rowset = CPGPluginAPI::filter('thumb_caption_search', $rowset);

    return $rowset;
  } // End of method 'getPicData'
} // End of class 'cpgSearchAlbumData'

?>
