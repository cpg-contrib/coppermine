<?php
require_once ('cpgAlbumData.class.php');
/**
 * cpgLastCommentsByAlbumData
 *
 * @package
 * @author tarique
 * @copyright Copyright (c) 2005
 * @version $Id$
 * @access public
 */
class cpgLastCommentsByAlbumData extends cpgAlbumData {
    var $cpgAlbumName;
    var $db;
    var $config;
    var $auth;

    /**
     * cpgLastCommentsByAlbumData::cpgLastCommentsByAlbumData()
     *
     * @return
     */
    function cpgLastCommentsByAlbumData()
    {
        $this->db = cpgDB::getInstance();
        $this->auth = cpgAuth::getInstance();
        $this->config = cpgConfig::getInstance();
    }

    /**
     * cpgLastCommentsByAlbumData::getThumbnailData()
     *
     * @param  $album
     * @param  $cat
     * @param  $page
     * @param  $thumbcols
     * @param  $thumbrows
     * @param  $display_tabs
     * @param boolean $indexPage
     * @param  $uid
     * @return
     */
    function getThumbnailData($album, $cat, $page, $thumbcols, $thumbrows, $display_tabs, $indexPage = false, $uid = -1)
    {
        global $lang_display_thumbnails, $lang_errors, $lang_byte_units, $album_name, $lang_meta_album_names, $lastcom_date_fmt, $lang_get_pic_data;

        $thumb_per_page = $thumbcols * $thumbrows;
        // $lower_limit = ($page-1) * $thumb_per_page;
        $lower_limit = $indexPage ? 0 : ($page-1) * $thumb_per_page;
        $pic_data = $this->getPicData($album, $thumb_count, $album_name, $lower_limit, $thumb_per_page, $cat, $indexPage, true, $uid);

        $total_pages = ceil($thumb_count / $thumb_per_page);

        $i = 0;
        if (count($pic_data) > 0) {
            foreach ($pic_data as $key => $row) {
                if (empty($row)) continue;

                $pic_title = $lang_display_thumbnails['filename'] . $row['filename'] . "\n" . $lang_display_thumbnails['filesize'] . ($row['filesize'] >> 10) . $lang_byte_units[1] . "\n" . $lang_display_thumbnails['dimensions'] . $row['pwidth'] . "x" . $row['pheight'] . "\n" . $lang_display_thumbnails['date_added'] . cpgUtils::localisedDate($row['ctime'], $album_date_fmt);

                $pic_url = $this->__getPicUrl($row, 'thumb');
                if (!is_image($row['filename'])) {
                    $image_info = getimagesize($pic_url);
                    $row['pwidth'] = $image_info[0];
                    $row['pheight'] = $image_info[1];
                }

                $image_size = $this->computeImgSize($row['pwidth'], $row['pheight'], $this->config->conf['thumb_width']);

                $thumb_list[$i]['pos'] = $key < 0 ? $key : $i - 1 + $lower_limit;
                $thumb_list[$i]['pid'] = $row['pid'];
                $thumb_list[$i]['image'] = array('url' => $this->config->conf['ecards_more_pic_target'] . $pic_url, 'alt' => $row['filename'], 'title' => $pic_title, 'geom' => $image_size['geom']);
                $thumb_list[$i]['msgBody'] = strlen($row['msg_body']) > 50 ? @substr($row['msg_body'], 0, 50) . "...": $row['msg_body'];
                if ($this->config->conf['enable_smilies']) {
                    $thumb_list[$i]['msgBody'] = process_smilies($thumb_list[$i]['msgBody']);
                }

                $thumb_list[$i]['totalComments'] = sprintf($lang_get_pic_data['n_comments'], cpgUtils::countPicComments($row['pid']));
                $thumb_list[$i]['msgBody'] = cpgUtils::bbDecode($thumb_list[$i]['msgBody']);
                $thumb_list[$i]['hits']  = sprintf($lang_get_pic_data['n_views'], $row['hits']);
                if ($this->config->conf['caption_in_thumbview']) {
                    $thumb_list[$i]['date'] = cpgUtils::localisedDate($row['ctime'], $lastcom_date_fmt);
                }
                if ($this->config->conf['display_uploader']) {
                    $thumb_list[$i]['owner'] = $row['owner_name'];
                    $thumb_list[$i]['ownerLink'] = $row['owner_id'];
                }

                $thumb_list[$i]['imgTitle'] = $row['title'];
                $thumb_list[$i]['fileName'] = $row['filename'];

                $thumb_list[$i]['admin_menu'] = '';
                $thumb_list[$i]['aid'] = $row['aid'];
                $thumb_list[$i]['displayURL'] = $this->config->conf['ecards_more_pic_target'] . 'displayimage.php?meta=lastcomby';

                if ($page == 1) {
                    $thumb_list[$i]['displayURL'] .= "&amp;pos=$i";
                } else {
                    $thumb_list[$i]['displayURL'] .= '&amp;pos=' . ($i + $thumbcols * $thumbrows * ($page-1));
                }
                if ($cat) {
                    $thumb_list[$i]['displayURL'] .= '&amp;cat=' . $cat;
                }
                if ($album) {
                    $thumb_list[$i]['displayURL'] .= '&amp;album=' . $album;
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
                        $thumb_list[$i]['ecardURL'] = 'ecard.php?meta=lastcomby&amp;';

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
            $thumb_list['totalPages'] = $total_pages;
            /**
             * If total pages are greater than 1, create the URL's for pagination
             */
            if ($total_pages > 1) {
                for ($i = 1; $i <= $total_pages; $i++) {
                    $thumb_list['pageURL'][$i] = $this->config->conf['ecards_more_pic_target'] . 'thumbnails.php?meta=lastcomby&amp;page=' . $i;
                    if ($cat) {
                        $thumb_list['pageURL'][$i] .= '&amp;cat=' . $cat;
                    }
                    if ($album) {
                        $thumb_list['pageURL'][$i] .= '&amp;album=' . $album;
                    }
                }
            }
            $thumb_list['albumName'] .= $album_name;
            $thumb_list['thumbCount'] = $thumb_count;
            $thumb_list['currentPage'] = $page;
            $thumb_list['album'] = 'lastcomby';
            $thumb_list['indexPage'] = $indexPage;

            return $thumb_list;
        } else {
            $thumb_list['albumName'] .= $album_name;
            $thumb_list['thumbCount'] = 0;
            return $thumb_list;
        }
    }

    /**
     * Public getPicData
     */
    /**
     * cpgLastCommentAlbumData::getPicData()
     *
     * @param  $album
     * @param  $count
     * @param  $album_name
     * @param integer $limit1
     * @param integer $limit2
     * @param  $cat
     * @param  $indexPage
     * @param boolean $set_caption
     * @param $uid
     * @return
     */
    function getPicData($album, &$count, &$album_name, $limit1 = -1, $limit2 = -1, $cat, $indexPage, $set_caption = true, $uid)
    {
        global $lang_meta_album_names;
        $row = array();
        $limit = ($limit1 != -1) ? ' LIMIT ' . $limit1 : '';
        $limit .= ($limit2 != -1) ? ' ,' . $limit2 : '';

        if ($album && in_array($album, $this->auth->forbiddenSetData)) {
            $count = 0;
            $album_name = $lang_meta_album_names['lastcomby'];
            if ($album) {
                list($an, $dummy) = $this->getAlbumName($album);
                $album_name .= " - $an";
            }
            $rowset = array();
            return $rowset;
        }
        if ($cat == USER_GAL_CAT) {
            $query = "SELECT aid FROM {$this->config->conf['TABLE_ALBUMS']} as a WHERE category >= " . FIRST_USER_CAT . $album_filter;
            $this->db->query($query);
            while ($row = $this->db->fetchRow()) {
                $album_set_array[] = $row['aid'];
            }
        } elseif (!$album && $cat) {
            /**
             * Category is set. May have the sub-categories as well. So fetch the albums for all.
             */
            $row['cid'] = $cat;
            $cidArr = array();
            $cidArr[] = $cat;
            while ($row['cid']) {
                $query = "SELECT cid, name FROM {$this->config->conf['TABLE_CATEGORIES']} WHERE parent = '{$row['cid']}'";
                $this->db->query($query);
                if ($this->db->nf() > 0) {
                    $row = $this->db->fetchRow();
                    $cidArr[] = $row['cid'];
                    $currentCatName = $row['name'];
                } else {
                    unset($row);
                }
            }
            $cidStr = implode (',', $cidArr);
            $query = "SELECT aid FROM {$this->config->conf['TABLE_ALBUMS']} as a WHERE category IN ($cidStr)";
            $this->db->query($query);
            while ($row = $this->db->fetchRow()) {
                $album_set_array[] = $row['aid'];
            }
        }

        if ($album) {
            $album_set_array[] = $album;
        }

        if (count($album_set_array)) {
            if (count($this->auth->forbiddenSetData)) {
                $albArr = array_diff($album_set_array, $this->auth->forbiddenSetData);
                if (count($albArr)) {
                    $albStr = ' AND aid IN (' . implode (',', $albArr) . ')';
                } else {
                    $albStr = ' AND aid = -1';
                }
            } else {
                $albStr = ' AND aid IN (' . implode (',', $album_set_array) . ')';
            }
        } elseif (count($this->auth->forbiddenSetData)) {
            $albStr = ' AND aid NOT IN (' . implode (',', $this->auth->forbiddenSetData) . ')';
        } else {
            $albStr = '';
        }

        if ($limit2 == 1) {
            $select_columns = 'p.*';
        } else {
            $select_columns = 'p.pid, filepath, filename, url_prefix, filesize, pwidth, pheight, ctime, aid, hits, owner_id, owner_name, title, msg_id, author_id, msg_author, UNIX_TIMESTAMP(msg_date) as msg_date, msg_body';
        }

        $album_name = $lang_meta_album_names['lastcomby'];
        if ($album) {
            list($an, $dummy) = $this->getAlbumName($album);
            $album_name .= " - $an";
        }

/*        if ($this->auth->user['uid']) {
            $uid = (int)$this->auth->user['uid'];
        } else {
            $uid = -1;
        }
*/
        $user_name = $this->auth->get_user_name($uid);
        if ($albStr && $currentCatName) {
            $album_name = $lang_meta_album_names['lastcomby'].' - '. $currentCatName .' - '. $user_name;
        } else {
            $album_name = $lang_meta_album_names['lastcomby'] .' - '. $user_name;
        }

        if (!$indexPage) {
            $query = "SELECT COUNT(c.pid) AS totalPic FROM {$this->config->conf['TABLE_COMMENTS']} c, {$this->config->conf['TABLE_PICTURES']} p
                WHERE
                  approved = 'YES' AND
                  author_id = '$uid' AND
                  c.pid = p.pid $albStr";
            $this->db->query($query);
            $row   = $this->db->fetchRow();
            $count = $row['totalPic'];
            unset($row);
        }

        $query = "SELECT $select_columns FROM {$this->config->conf['TABLE_COMMENTS']} as c, {$this->config->conf['TABLE_PICTURES']} as p WHERE approved = 'YES' AND author_id = '$uid' AND c.pid = p.pid $albStr ORDER by msg_id DESC $limit";
        $result = $this->db->query($query);
        $rowset = $this->db->fetchRowSet($result);
        $this->db->free($result);

        if (!$count) {
            $count = $this->db->nf();
        }

        // profile url of picture uploader
        if ($set_caption) foreach ($rowset as $key => $row) {
            $user_link = ($this->config->conf['display_uploader'] && $row['owner_id'] && $row['owner_name']) ? '<span class="thumb_title"><a href ="profile.php?uid=' . $row['owner_id'] . '">' . $row['owner_name'] . '</a></span>' : '';
            $caption = $user_link . '<span class="thumb_caption">' . cpgUtils::localisedDate($row['ctime'], $lastup_date_fmt) . '</span>';
            $rowset[$key]['caption_text'] = $caption;
        }

        ///$rowset = CPGPluginAPI::filter('thumb_caption_lastcom', $rowset);

        return $rowset;
    }
}

?>
