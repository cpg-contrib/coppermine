<?php
/**
 * Coppermine Photo Gallery Next Gen
 *
 * Copyright (c) 2003-2005 Coppermine Dev Team
 * v1.1 originaly written by Gregory DEMAR
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * Coppermine version: 1.4.1
 * $Source: /home/cvs/cpgNGDevel/classes/cpgNumericAlbumData.class.php,v $
 * $Revision$
 * $Author$
 * $Date$
 */

require_once ('cpgAlbumData.class.php');
/**
 * cpgNumericAlbumData
 *
 * @package
 * @author tarique
 * @copyright Copyright (c) 2005
 * @version $Id$
 * @access public
 */
class cpgNumericAlbumData extends cpgAlbumData {
    var $cpgAlbumName;
    var $db;
    var $config;
    var $auth;

    /**
     * cpgNumericAlbumData::cpgNumericAlbumData()
     *
     * @return
     */
    function cpgNumericAlbumData()
    {
        $this->db = cpgDB::getInstance();
        $this->config = cpgConfig::getInstance();
        $this->auth = cpgAuth::getInstance();
    }

    /**
     * cpgNumericAlbumData::getThumbnailData()
     *
     * @param  $album
     * @param  $cat
     * @param  $page
     * @param  $thumbcols
     * @param  $thumbrows
     * @param  $display_tabs
     * @return
     */
    function getThumbnailData($album, $cat, $page, $thumbcols, $thumbrows, $display_tabs)
    {
        global $AUTHORIZED;
        global $album_date_fmt, $lang_display_thumbnails, $lang_errors, $lang_byte_units, $album_name;

        $thumb_per_page = $thumbcols * $thumbrows;
        $lower_limit = ($page-1) * $thumb_per_page;
        // $lower_limit = 0;
        $pic_data = $this->getPicData($album, $thumb_count, $album_name, $lower_limit, $thumb_per_page);

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
                $thumb_list[$i]['image'] = array('url' => $this->config->conf['ecards_more_pic_target'] . $pic_url, 'alt' => $row['filename'], 'title' => $pic_title);
                $thumb_list[$i]['caption'] = $row['caption_text'];
                $thumb_list[$i]['comment'] = $row['comment_text'];
                if ($this->config->conf['display_uploader']) {
                    $thumb_list[$i]['owner'] = $row['owner_name'];
                    $thumb_list[$i]['ownerLink'] = $row['owner_id'];
                }
                $thumb_list[$i]['admin_menu'] = '';
                $thumb_list[$i]['aid'] = $row['aid'];
                if ($this->config->conf['short_url']) {
                    $thumb_list[$i]['displayURL'] = $this->config->conf['ecards_more_pic_target'] . "image/{$row['pid']}";
                } else {
                    $thumb_list[$i]['displayURL'] = $this->config->conf['ecards_more_pic_target'] . "displayimage.php?pid={$row['pid']}&amp;album=$album";
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
                        $thumb_list[$i]['ecardURL'] = 'ecard.php?album='.$album.'&amp;pid='.$row['pid'];
                    } else {
                        $thumb_list[$i]['ecardURL'] = '';
                    }
                }

                $i++;
            }
            $thumb_list['totalPages'] = $total_pages;
            $thumb_list['albumName'] = $album_name;
            $thumb_list['thumbCount'] = $thumb_count;
            $thumb_list['currentPage'] = $page;
            $thumb_list['album'] = $album;

            /**
             * Query to grab album's description
             */
            $query = "SELECT description FROM {$this->config->conf['TABLE_ALBUMS']} WHERE aid = '$album'";
            $this->db->query($query);

            if ($this->db->nf() > 0) {
              $row = $this->db->fetchRow();

              $thumb_list['albumDescription'] = cpgUtils::bbDecode($row['description']);
            }

            return $thumb_list;
        } else {
            $thumb_list['albumName'] = $album_name;
            $thumb_list['thumbCount'] = 0;
            return $thumb_list;
        }
    }

    /**
     * Public getPicData
     */
    /**
     * cpgNumericAlbumData::getPicData()
     *
     * @param  $album
     * @param  $count
     * @param  $album_name
     * @param integer $limit1
     * @param integer $limit2
     * @param boolean $set_caption
     * @return
     */
    function getPicData($album, &$count, &$album_name, $limit1 = -1, $limit2 = -1, $set_caption = true)
    {
        global $USER, $ALBUM_SET, $CURRENT_CAT_NAME, $CURRENT_ALBUM_KEYWORD, $HTML_SUBST, $THEME_DIR, $FAVPICS, $FORBIDDEN_SET_DATA;
        global $album_date_fmt, $lastcom_date_fmt, $lastup_date_fmt, $lasthit_date_fmt, $cat;
        global $lang_get_pic_data, $lang_meta_album_names, $lang_errors;
        $forbidden_set_string = '';

        if (count($this->auth->forbiddenSetData) && in_array($album, $this->auth->forbiddenSetData)) {
            $count = 0;
            list($album_name, $keyword) = $this->getAlbumName($album);
            $rowset = array();
            return $rowset;
        }
        $sort_array = array('na' => 'filename ASC',
            'nd' => 'filename DESC',
            'ta' => 'title ASC',
            'td' => 'title DESC',
            'da' => 'pid ASC',
            'dd' => 'pid DESC',
            'pa' => 'position ASC',
            'pd' => 'position DESC',
            );
        $sort_code = isset($USER['sort'])? $USER['sort'] : $this->config->conf['default_sort_order'];
        $sort_order = isset($sort_array[$sort_code]) ? $sort_array[$sort_code] : $sort_array[$this->config->conf['default_sort_order']];
        $limit = ($limit1 != -1) ? ' LIMIT ' . $limit1 : '';
        $limit .= ($limit2 != -1) ? ' ,' . $limit2 : '';

        if ($limit2 == 1) {
            $select_columns = '*';
        } else {
            $select_columns = 'pid, filepath, filename, url_prefix, filesize, pwidth, pheight, ctime, aid';
        }

        if (count($this->auth->forbiddenSetData)) {
            $albStr = ' AND aid NOT IN (' . implode (',', $this->auth->forbiddenSetData) . ')';
        }
        // Keyword
        if (!empty($CURRENT_ALBUM_KEYWORD)) {
            $keyword = "OR (keywords like '%$CURRENT_ALBUM_KEYWORD%' $albStr )";
        } else $keyword = '';

        list($album_name, $album_keyword) = $this->getAlbumName($album);

        if (!empty($album_keyword)) {
            $keyword = "OR (keywords like '%$album_keyword%' $albStr )";
        } else {
            $keyword = '';
        }

        $approved = GALLERY_ADMIN_MODE ? '' : 'AND approved=\'YES\'';

        $query = "SELECT COUNT(pid) from {$this->config->conf['TABLE_PICTURES']} WHERE (aid='$album' $albStr ) $keyword $approved";
        $this->db->query($query);
        $nbEnr = $this->db->fetchRow();
        $count = $nbEnr[0];

        if ($select_columns != '*') $select_columns .= ', title, caption,hits,owner_id,owner_name';

        $query = "SELECT $select_columns from {$this->config->conf['TABLE_PICTURES']} WHERE (aid='$album' $albStr ) $keyword $approved ORDER BY $sort_order $limit";

        $this->db->query($query);
        $rowset = $this->db->fetchRowSet();
        // Set picture caption
        if ($set_caption) {
            foreach ($rowset as $key => $row) {
                $caption = '';
                $comment = '';
                $owner = '';
                $ownerLink = '';
                $caption .= ($rowset[$key]['title'] || $rowset[$key]['hits']) ? $rowset[$key]['title'] : '';
                if ($this->config->conf['views_in_thumbview']) {
                    if ($rowset[$key]['title']) {
                        $caption .= '&nbsp;&ndash;&nbsp;';
                    }
                    $caption .= sprintf($lang_get_pic_data['n_views'], $rowset[$key]['hits']);
                }
                if ($this->config->conf['caption_in_thumbview']) {
                    $caption .= $rowset[$key]['caption'] ? '<br />' . cpgUtils::bbDecode(($rowset[$key]['caption'])) : '';
                }
                if ($this->config->conf['display_comment_count']) {
                    $comments_nr = cpgUtils::countPicComments((int)$row['pid']);
                    if ($comments_nr > 0) {
                        $comment .= sprintf($lang_get_pic_data['n_comments'], $comments_nr);
                    }
                }
                $rowset[$key]['caption_text'] = $caption;
                $rowset[$key]['comment_text'] = $comment;
            }
        }
        ///$rowset = CPGPluginAPI::filter('thumb_caption_regular', $rowset);
        return $rowset;
    }
}

?>
