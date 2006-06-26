<?php
/**
 * cpgTopRatedAlbumData.class.php
 *
 * Meta album class for showing the top rated pictures
 *
 * @package cpgNG
 * @author Himlal Pun <himlal@sanisoft.com>
 * @version $Id$
 */
require_once ('cpgAlbumData.class.php');
/**
 * cpgTopRatedAlbumData
 *
 * @package
 * @author Himlal Pun
 * @copyright Copyright (c) 2005
 * @version $Id$
 * @access public
 */
class cpgTopRatedAlbumData extends cpgAlbumData {
    var $cpgAlbumName;
    var $db;
    var $config;
    var $auth;

    /**
     * cpgTopRatedAlbumData::cpgTopRatedAlbumData()
     *
     * @return
     */
    function cpgTopRatedAlbumData()
    {
        $this->db = cpgDB::getInstance();
        $this->auth = cpgAuth::getInstance();
        $this->config = cpgConfig::getInstance();
    }

    /**
     * cpgTopRatedAlbumData::getThumbnailData()
     *
     * @param  $album
     * @param  $cat
     * @param  $page
     * @param  $thumbcols
     * @param  $thumbrows
     * @param boolean $indexPage
     * @return
     */
    function getThumbnailData($album, $cat, $page, $thumbcols, $thumbrows, $display_tabs, $indexPage = false)
    {
        global $lang_display_thumbnails, $lang_byte_units, $album_name, $album_date_fmt, $lang_get_pic_data;
        $thumb_per_page = $thumbcols * $thumbrows;
        $lower_limit = $indexPage ? 0 : ($page-1) * $thumb_per_page;

        // fetch the image details to display
        $pic_data = $this->getPicData($album, $thumb_count, $album_name, $lower_limit, $thumb_per_page, $cat, $indexPage);
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
                $thumb_list[$i]['imgTitle'] = $row['title'];
                $thumb_list[$i]['fileName'] = $row['filename'];
                $thumb_list[$i]['admin_menu'] = '';
                $thumb_list[$i]['aid'] = $row['aid'];
                $thumb_list[$i]['displayURL'] = $this->config->conf['ecards_more_pic_target'] . 'displayimage.php?meta=toprated';

                // info of image uploader
                if ($this->config->conf['display_uploader']) {
                    $thumb_list[$i]['owner'] = $row['owner_name'];
                    $thumb_list[$i]['ownerLink'] = $row['owner_id'];
                }

                // image caption
                $thumb_list[$i]['caption'] = strlen($row['caption']) > 50 ? @substr($row['caption'], 0, 50) . "...": $row['caption'];
                if ($this->config->conf['enable_smilies']) {
                    $thumb_list[$i]['caption'] = process_smilies($thumb_list[$i]['caption']);
                }
                $thumb_list[$i]['caption'] = cpgUtils::bbDecode($thumb_list[$i]['caption']);
                $thumb_list[$i]['hits']  = sprintf($lang_get_pic_data['n_views'], $row['hits']);

                // lets display rating image
                $thumb_list[$i]['rating'] = "rating".round($row['pic_rating']/2000).".gif";
                $thumb_list[$i]['votes'] = sprintf($lang_get_pic_data['n_votes'], $row['votes']);

                if ($page == 1) {
                    $thumb_list[$i]['displayURL'] .= "&amp;pid=".$row['pid'];
                } else {
                    $thumb_list[$i]['displayURL'] .= '&amp;pid='.$row['pid'];
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
                        $thumb_list[$i]['ecardURL'] = 'ecard.php?meta=toprated&amp;';

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
                    $thumb_list['pageURL'][$i] = $this->config->conf['ecards_more_pic_target'] . 'thumbnails.php?meta=toprated&amp;page=' . $i;
                    if ($cat) {
                        $thumb_list['pageURL'][$i] .= '&amp;cat=' . $cat;
                    }
                    if ($album) {
                        $thumb_list['pageURL'][$i] .= '&amp;album=' . $album;
                    }
                }
            }
            $thumb_list['albumName']  .= $album_name;
            $thumb_list['thumbCount']  = $thumb_count;
            $thumb_list['currentPage'] = $page;
            $thumb_list['album']       = 'toprated';
            $thumb_list['indexPage']   = $indexPage;
            return $thumb_list;
        } else {
            $thumb_list['albumName']  .= $album_name;
            $thumb_list['thumbCount']  = 0;
            return $thumb_list;
        }
    }

    /**
     * Public getPicData
     */
    /**
     * cpgMostViewedAlbumData::getPicData()
     *
     * @param  $album
     * @param  $count
     * @param  $album_name
     * @param integer $limit1
     * @param integer $limit2
     * @param  $cat
     * @param  $indexPage
     * @param boolean $set_caption
     * @return
     */

    function getPicData($album, &$count, &$album_name, $limit1 = -1, $limit2 = -1, $cat, $indexPage, $set_caption = true)
    {
        global $lang_meta_album_names, $lastup_date_fmt;
        $row = array();
        $limit = ($limit1 != -1) ? ' LIMIT ' . $limit1 : '';
        $limit .= ($limit2 != -1) ? ' ,' . $limit2 : '';
        if ($album && in_array($album, $this->auth->forbiddenSetData)) {
            $count = 0;
            $album_name = $lang_meta_album_names['toprated'];
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
                $query = "SELECT cid FROM {$this->config->conf['TABLE_CATEGORIES']} WHERE parent = '{$row['cid']}'";
                $this->db->query($query);
                if ($this->db->nf() > 0) {
                    $row = $this->db->fetchRow();
                    $cidArr[] = $row['cid'];
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
            $select_columns = '*';
        } else {
            $select_columns = 'pid, aid, filepath, filename, filesize, url_prefix, pwidth, pheight, hits, ctime, keywords, pic_rating, owner_id, owner_name, votes, title, caption';
        }

        $album_name = $lang_meta_album_names['toprated'];
        if ($album) {
            list($an, $dummy) = $this->getAlbumName($album);
            $album_name .= " - $an";
        }

        // query to fetch the total no. of thumnails
         if (!$indexPage) {
            $query = "SELECT COUNT(pid) AS totalPic from {$this->config->conf['TABLE_PICTURES']} WHERE approved = 'YES' AND votes >= '{$this->config->conf['min_votes_for_rating']}' $albStr";
            $this->db->query($query);
            $row   = $this->db->fetchRow();
            $count = $row['totalPic'];
            unset($row);
        }
         $query = "SELECT $select_columns FROM {$this->config->conf['TABLE_PICTURES']}
                   WHERE approved = 'YES' AND votes >= '{$this->config->conf['min_votes_for_rating']}' $albStr
                   ORDER BY pic_rating DESC, votes DESC, pid DESC $limit";
        $this->db->query($query);
        $rowset = $this->db->fetchRowSet();

        if (!$count) {
            $count = $this->db->nf();
        }

        // profile url of picture uploader
        if ($set_caption) foreach ($rowset as $key => $row) {
            $user_link = ($this->config->conf['display_uploader'] && $row['owner_id'] && $row['owner_name']) ? '<span class="thumb_title"><a href ="profile.php?uid=' . $row['owner_id'] . '">' . $row['owner_name'] . '</a></span>' : '';
            $caption = $user_link . '<span class="thumb_caption">' . cpgUtils::localisedDate($row['ctime'], $lastup_date_fmt) . '</span>';
            $rowset[$key]['caption_text'] = $caption;
        }

        ///$rowset = CPGPluginAPI::filter('thumb_caption_toprated', $rowset);
        return $rowset;
    }

}

?>
