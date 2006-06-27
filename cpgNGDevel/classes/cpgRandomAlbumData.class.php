<?php

require_once ('cpgAlbumData.class.php');
/**
 * cpgRandomAlbumData
 *
 * @package
 * @author tarique
 * @copyright Copyright (c) 2005
 * @version $Id$
 * @access public
 */
class cpgRandomAlbumData extends cpgAlbumData {
    var $cpgAlbumName;
    var $db;
    var $config;
    var $auth;

    /**
     * cpgRandomAlbumData::cpgRandomAlbumData()
     *
     * @return
     */
    function cpgRandomAlbumData()
    {
        $this->db = cpgDB::getInstance();
        $this->auth = cpgAuth::getInstance();
        $this->config = cpgConfig::getInstance();
    }

    /**
     * cpgRandomAlbumData::getThumbnailData()
     *
     * @param  $album
     * @param  $cat
     * @param  $page
     * @param  $thumbcols
     * @param  $thumbrows
     * @param  $display_tabs
     * @param boolean $indexPage
     * @return
     */
    function getThumbnailData($album, $cat, $page, $thumbcols, $thumbrows, $display_tabs, $indexPage = false)
    {
        global $lang_display_thumbnails, $lang_errors, $lang_byte_units, $album_name, $lang_meta_album_names, $lastcom_date_fmt, $album_date_fmt;

        $thumb_per_page = $thumbcols * $thumbrows;
        // $lower_limit = ($page-1) * $thumb_per_page;
        $lower_limit = $indexPage ? 0 : ($page-1) * $thumb_per_page;
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
                $thumb_list[$i]['admin_menu'] = '';
                $thumb_list[$i]['aid'] = $row['aid'];
                $thumb_list[$i]['displayURL'] = $this->config->conf['ecards_more_pic_target'] . 'displayimage.php?pid=' . $row['pid'];

                $i++;
            }
            $thumb_list['totalPages'] = $total_pages;
            $thumb_list['albumName'] .= $album_name;
            $thumb_list['thumbCount'] = $thumb_count;
            $thumb_list['currentPage'] = $page;
            $thumb_list['album'] = 'random';
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
     * cpgRandomAlbumData::getPicData()
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
        global $lang_meta_album_names;
        $row = array();
        $limit = ($limit1 != -1) ? ' LIMIT ' . $limit1 : '';
        $limit .= ($limit2 != -1) ? ' ,' . $limit2 : '';

        if ($album && in_array($album, $this->auth->forbiddenSetData)) {
            $count = 0;
            $album_name = $lang_meta_album_names['random'];
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
            $select_columns = 'aid, pid, filepath, filename, url_prefix, filesize, pwidth, pheight, ctime, aid, keywords, hits, votes, pic_rating';
        }

        $album_name = $lang_meta_album_names['random'];
        if ($album) {
            list($an, $dummy) = $this->getAlbumName($album);
            $album_name .= " - $an";
        }

        if (!$indexPage) {
            $query = "SELECT COUNT(pid) from {$this->config->conf['TABLE_PICTURES']} WHERE approved = 'YES' $albStr";
            $this->db->query($query);
            $row = $this->db->fetchRow();
            $count = $row['totalPic'];
            unset($row);
        }

        $query = "SELECT $select_columns FROM {$this->config->conf['TABLE_PICTURES']} WHERE approved = 'YES' $albStr ORDER BY RAND() LIMIT $limit2";
        $this->db->query($query);
        $rowset = $this->db->fetchRowSet();
        if (!$count) {
            $count = $this->db->nf();
        }

        ///$rowset = CPGPluginAPI::filter('thumb_caption_random', $rowset);

        return $rowset;
    }
}

?>
