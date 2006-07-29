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
 * $Source: /home/cvs/cpgNGDevel/classes/cpgAlbumData.class.php,v $
 * $Revision$
 * $Author$
 * $Date$
 */

error_reporting(E_ALL);
/**
 * cpgAlbumData
 *
 * @package
 * @author tarique
 * @copyright Copyright (c) 2005
 * @version $Id$
 * @access public
 */
class cpgAlbumData {
    var $config;
    var $auth;

    /**
     * cpgAlbumData::cpgAlbumData()
     *
     * @return
     */
    function cpgAlbumData()
    {
        $this->config = cpgConfig::getInstance();
        $this->auth = cpgAuth::getInstance();
    }
    /**
     * protected get_pic_url()
     *
     * Return the url for a picture
     *
     * @param array $pic_row
     * @param string $mode
     * @param boolean $system_pic
     * @return string
     */

    function __getPicUrl(&$pic_row, $mode, $system_pic = false)
    {
        global $THEME_DIR;
        static $pic_prefix = array();
        static $url_prefix = array();

        if (!count($pic_prefix)) {
            $pic_prefix = array('thumb' => $this->config->conf['thumb_pfx'],
                'normal' => $this->config->conf['normal_pfx'],
                'fullsize' => ''
                );

            $url_prefix = array(0 => $this->config->conf['fullpath'],
                );
        }

        $mime_content = cpg_get_type($pic_row['filename']);

        $pic_row = array_merge($pic_row, $mime_content);

        $filepathname = null;
        // Code to handle custom thumbnails
        // If fullsize or normal mode use regular file
        if ($mime_content['content'] != 'image' && $mode == 'normal') {
            $mode = 'fullsize';
        } elseif (($mime_content['content'] != 'image' && $mode == 'thumb') || $system_pic) {
            $thumb_extensions = Array('.gif', '.png', '.jpg');
            // Check for user-level custom thumbnails
            // Create custom thumb path and erase extension using filename; Erase filename's extension
            $custom_thumb_path = $url_prefix[$pic_row['url_prefix']] . $pic_row['filepath'] . $pic_prefix[$mode];
            $file_base_name = str_replace('.' . $mime_content['extension'], '', basename($pic_row['filename']));
            // Check for file-specific thumbs
            foreach ($thumb_extensions as $extension) {
                if (file_exists($custom_thumb_path . $file_base_name . $extension)) {
                    $filepathname = $custom_thumb_path . $file_base_name . $extension;
                    break;
                }
            }
            if (!$system_pic) {
                // Check for extension-specific thumbs
                if (is_null($filepathname)) {
                    foreach ($thumb_extensions as $extension) {
                        if (file_exists($custom_thumb_path . $mime_content['extension'] . $extension)) {
                            $filepathname = $custom_thumb_path . $mime_content['extension'] . $extension;
                            break;
                        }
                    }
                }
                // Check for content-specific thumbs
                if (is_null($filepathname)) {
                    foreach ($thumb_extensions as $extension) {
                        if (file_exists($custom_thumb_path . $mime_content['content'] . $extension)) {
                            $filepathname = $custom_thumb_path . $mime_content['content'] . $extension;
                            break;
                        }
                    }
                }
            }
            // Use default thumbs
            if (is_null($filepathname)) {
                // Check for default theme- and global-level thumbs
                $thumb_paths[] = $THEME_DIR . 'images/'; // Used for custom theme thumbs
                $thumb_paths[] = 'images/'; // Default Coppermine thumbs
                foreach ($thumb_paths as $default_thumb_path) {
                    if (is_dir($default_thumb_path)) {
                        if (!$system_pic) {
                            foreach ($thumb_extensions as $extension) {
                                // Check for extension-specific thumbs
                                if (file_exists($default_thumb_path . $this->config->conf['thumb_pfx'] . $mime_content['extension'] . $extension)) {
                                    $filepathname = $default_thumb_path . $this->config->conf['thumb_pfx'] . $mime_content['extension'] . $extension;
                                    break 2;
                                }
                            }
                            foreach ($thumb_extensions as $extension) {
                                // Check for media-specific thumbs (movie,document,audio)
                                if (file_exists($default_thumb_path . $this->config->conf['thumb_pfx'] . $mime_content['content'] . $extension)) {
                                    $filepathname = $default_thumb_path . $this->config->conf['thumb_pfx'] . $mime_content['content'] . $extension;
                                    break 2;
                                }
                            }
                        } else {
                            // Check for file-specific thumbs for system files
                            foreach ($thumb_extensions as $extension) {
                                if (file_exists($default_thumb_path . $this->config->conf['thumb_pfx'] . $file_base_name . $extension)) {
                                    $filepathname = $default_thumb_path . $this->config->conf['thumb_pfx'] . $file_base_name . $extension;
                                    break 2;
                                }
                            }
                        }
                    }
                }
            }
            $filepathname = cpgUtils::path2Url($filepathname);
        }

        if (is_null($filepathname)) {
            $filepathname = $url_prefix[$pic_row['url_prefix']] . cpgUtils::path2Url($pic_row['filepath'] . $pic_prefix[$mode] . $pic_row['filename']);
        }
        // Added hack:  "&& !isset($pic_row['mode'])" thumb_data filter isn't executed for the fullsize image
        if ($mode == 'thumb' && !isset($pic_row['mode'])) {
            $pic_row['url'] = $filepathname;
            $pic_row['mode'] = $mode;
            ///$pic_row = CPGPluginAPI::filter('thumb_data', $pic_row);
        } elseif ($mode != 'thumb') {
            $pic_row['url'] = $filepathname;
            $pic_row['mode'] = $mode;
        } else {
            $pic_row['url'] = $filepathname;
        }

        return $pic_row['url'];
    }

    /**
     * getBreadCrumData
     */
    /**
     * cpgAlbumData::getBreadcrumbData()
     *
     * @param  $album
     * @param integer $cat
     * @param string $meta
     * @return
     */
    function getBreadcrumbData ($album, $cat = 0, $meta = '')
    {
        global $lang_errors, $lang_meta_album_names, $lang_list_categories;
        $breadcrumb_array = array();
        $breadcrumb_alb_array = array();
        $breadcrumb = array();
        $breadcrumb_alb = array();
        $db = cpgDB::getInstance();
        /**
         * Loop counter
         */
        $i = 0;

        /**
         * Keep copy of cat & album with us.
         */
        $tmpCat = $cat;
        $tmpAlbum = $album;

        if (!empty($album)) {
            $query = "SELECT aid, title, category, parent FROM {$this->config->conf['TABLE_ALBUMS']} WHERE aid = '$album'";
            $db->query($query);

            if ($db->nf() == 0) {
                cpgUtils::cpgDie(CRITICAL_ERROR, $lang_errors['non_exist_ap']);
            }

            $row = $db->fetchRow();
            $row_alb = $row;

            /*$query = "SELECT aid, title, parent FROM {$this->config->conf['TABLE_ALBUMS']} WHERE aid = '".$row['aid']."'";
      $db->query($query);
      if ($db->nf() == 0) {
        cpgUtils::cpgDie(CRITICAL_ERROR, $lang_errors['non_exist_alb'], __FILE__, __LINE__);
      }
      $row_alb = $db->fetchRow();*/
            $breadcrumb_alb_array[] = array($row_alb['aid'], $row_alb['title']);
            // $CURRENT_ALB_TITLE = $row['title'];
            while ($row_alb['parent']) {
                $query = "SELECT aid, title, parent FROM {$this->config->conf['TABLE_ALBUMS']} WHERE aid = '{$row_alb['parent']}'";
                $db->query($query);
                if ($db->nf() == 0) {
                    cpgUtils::cpgDie(CRITICAL_ERROR, $lang_errors['orphan_alb'], __FILE__, __LINE__);
                }
                $row_alb = $db->fetchRow();
                $breadcrumb_alb_array[] = array($row_alb['aid'], $row_alb['title']);
            } // while
            $breadcrumb_alb_array = array_reverse($breadcrumb_alb_array);
            $i = 0;
            foreach ($breadcrumb_alb_array as $album) {
                if ($this->config->conf['short_url']) {
                    /**
                     * Get the parent category of the current album
                     */
                    $query = "SELECT name FROM {$this->config->conf['TABLE_ALBUMS']}, {$this->config->conf['TABLE_CATEGORIES']}
                      WHERE
                        aid='{$album[0]}' AND
                        category = cid
                     ";
                    $db->query($query);
                    $r = $db->fetchRow();
                    if ($r['name']) {
                        // Album has a parent category
                        $breadcrumb_alb[$i]['link'] = $this->config->conf['ecards_more_pic_target'] . "cat/{$r['name']}/album/{$album[1]}";
                    } else {
                        // Album is a first level album
                        $breadcrumb_alb[$i]['link'] = $this->config->conf['ecards_more_pic_target'] . "album/{$album[1]}";
                    }
                } else {
                    $breadcrumb_alb[$i]['link'] = $this->config->conf['ecards_more_pic_target'] . "thumbnails.php?album={$album[0]}";
                }
                $breadcrumb_alb[$i]['title'] = $album[1];
                $i++;
            }

            if ($row['category'] == 0) {
                if ($meta) {
                    $i++;
                    $breadcrumb_alb[$i]['link'] = $this->config->conf['ecards_more_pic_target'] . "thumbnails.php?meta=$meta&cat=$tmpCat&album=$tmpAlbum";
                    $breadcrumb_alb[$i]['title'] = $lang_meta_album_names[$meta];
                }
                return $breadcrumb_alb;
            }
        } elseif ($cat) {
            /**
             * Category is set, breadcrumb will be displayed on index page
             */
            $row['category'] = $cat; // this doesn't make sense to me why is it overwriting the data from the query
        }
        if ($row['category']) {
            if ($row['category'] >= FIRST_USER_CAT) {
                $cat = $row['category'];
                $userName = $this->__getUsername($row['category'] - FIRST_USER_CAT);
                if (!$userName) {
                    $userName = "Mr. X";
                }
                $breadcrumb_array[] = array($row['category'], $userName);
                $row['parent'] = 1;
                $CURRENT_CAT_NAME = sprintf($lang_list_categories['xx_s_gallery'], $userName);
            } else {
                $cat = $row['category'];
                $query = "SELECT cid, name, parent FROM {$this->config->conf['TABLE_CATEGORIES']} WHERE cid = '" . $row['category'] . "'";
                $db->query($query);
                if ($db->nf() == 0) {
                    cpgUtils::cpgDie(CRITICAL_ERROR, $lang_errors['non_exist_cat'], __FILE__, __LINE__);
                }
                $row = $db->fetchRow();

                $breadcrumb_array[] = array($row['cid'], $row['name']);
                $CURRENT_CAT_NAME = $row['name'];
            } while ($row['parent'] != 0) {
                $query = "SELECT cid, name, parent FROM {$this->config->conf['TABLE_CATEGORIES']} WHERE cid = '{$row['parent']}'";
                $db->query($query);
                if ($db->nf() == 0) {
                    cpgUtils::cpgDie(CRITICAL_ERROR, $lang_errors['orphan_cat'], __FILE__, __LINE__);
                }
                $row = $db->fetchRow();

                $breadcrumb_array[] = array($row['cid'], $row['name']);
            } // while
            $breadcrumb_array = array_reverse($breadcrumb_array);

            foreach ($breadcrumb_array as $category) {
                $breadcrumb[$i]['link'] = ($this->config->conf['short_url']) ? $this->config->conf['ecards_more_pic_target'] . "cat/{$category[0]}" : $this->config->conf['ecards_more_pic_target'] . "index.php?cat={$category[0]}";
                $breadcrumb[$i]['title'] = $category[1];
                $i++;
            }
        }
        $breadcrumb = array_merge($breadcrumb, $breadcrumb_alb);
        if ($meta) {
            $i++;
            $breadcrumb[$i]['link'] = $this->config->conf['ecards_more_pic_target'] . "thumbnails.php?meta=$meta&cat=$tmpCat&album=$tmpAlbum";
            $breadcrumb[$i]['title'] = $lang_meta_album_names[$meta];

            if ($meta == 'lastupby') {
              $breadcrumb[$i]['link'] .= '&amp;uid='.(int)$_GET['uid'];
              $breadcrumb[$i]['title'] .= ' `'.$this->auth->get_user_name((int)$_GET['uid']).'`';
            }
        }
        return $breadcrumb;
    }

    /**
     * cpgAlbumData::getAlbumName()
     *
     * @param  $aid
     * @return
     */
    function getAlbumName($aid)
    {
        global $lang_errors;

        $query = "SELECT title,keyword from {$this->config->conf['TABLE_ALBUMS']} WHERE aid='$aid'";
        $this->db->query($query);
        if ($this->db->nf() > 0) {
            $row = $this->db->fetchRow();
            return $row;
        } else {
            cpgUtils::cpgDie(ERROR, $lang_errors['non_exist_ap'], __FILE__, __LINE__);
        }
    }

    /**
     * cpgAlbumData::getCategoryName()
     *
     * @param  $cat
     * @return
     */
    function getCategoryName($cat)
    {
        global $lang_errors;

        $query = "SELECT name from {$config->conf['TABLE_CATEGORIES']} WHERE cid='$cat'";
        $this->db->query($query);
        if ($this->db->nf() > 0) {
            $row = $this->db->fetchRow();
            return $row;
        } else {
            cpgUtils::cpgDie(ERROR, $lang_errors['non_exist_ap'], __FILE__, __LINE__);
        }
    }

    /**
     * cpgAlbumData::__getUsername()
     *
     * @param  $uid
     * @return
     */
    function __getUsername($uid)
    {
        $uid = (int)$uid;
        $db = cpgDB::getInstance();

        if (!$uid) {
            return 'Anonymous';
        } elseif (defined('UDB_INTEGRATION')) {
            return $this->auth->get_user_name($uid);
        } else {
            $query = "SELECT user_name FROM {$this->config->conf['TABLE_USERS']} WHERE user_id = '" . $uid . "'";
            $db->query($query);
            if ($db->nf() == 0) {
                return '';
            }
            $row = $db->fetchRow();
            return $row['user_name'];
        }
    }

    /**
     * cpgAlbumData::getFilmStripData()
     *
     * @param  $meta
     * @param  $album
     * @param  $pos
     * @param  $cat
     * @return
     */
    function getFilmStripData($meta, $album, $pos, $cat)
    {
        global $album_date_fmt, $lang_display_thumbnails, $lang_errors, $lang_byte_units;
        $max_item = $this->config->conf['max_film_strip_items'];
        // $thumb_per_page = $pos+$this->config->conf['max_film_strip_items'];
        $thumb_per_page = $max_item * 2;
        $l_limit = max(0, $pos - $this->config->conf['max_film_strip_items']);
        $new_pos = max(0, $pos - $l_limit);

        $pic_data = $this->getPicData(is_numeric($album) ? $album : 0, $thumb_count, $album_name, $l_limit, $thumb_per_page, $cat);

        if (count($pic_data) < $max_item) {
            $max_item = count($pic_data);
        }
        $lower_limit = 3;

        if (!isset($pic_data[$new_pos + 1])) {
            $lower_limit = $new_pos - $max_item + 1;
        } else if (!isset($pic_data[$new_pos + 2])) {
            $lower_limit = $new_pos - $max_item + 2;
        } else if (!isset($pic_data[$new_pos - 1])) {
            $lower_limit = $new_pos;
        } else {
            $hf = $max_item / 2;
            $ihf = (int)($max_item / 2);
            if ($new_pos > $hf) {
                $lower_limit = $new_pos - $ihf;
            } elseif ($new_pos < $hf) {
                $lower_limit = 0;
            }
        }

        $pic_data = array_slice($pic_data, $lower_limit, $max_item);
        $i = $l_limit;
        if (count($pic_data) > 0) {
            foreach ($pic_data as $key => $row) {
                $hi = (($pos == ($i + $lower_limit)) ? '1': '');
                $i++;

                $pic_title = $lang_display_thumbnails['filename'] . $row['filename'] . "\n" . $lang_display_thumbnails['filesize'] . ($row['filesize'] >> 10) . $lang_byte_units[1] . "\n" . $lang_display_thumbnails['dimensions'] . $row['pwidth'] . "x" . $row['pheight'] . "\n" . $lang_display_thumbnails['date_added'] . cpgUtils::localisedDate($row['ctime'], $album_date_fmt);

                $pic_url = $this->__getPicUrl($row, 'thumb');
                if (!is_image($row['filename'])) {
                    $image_info = getimagesize($pic_url);
                    $row['pwidth'] = $image_info[0];
                    $row['pheight'] = $image_info[1];
                }

                $image_size = $this->computeImgSize($row['pwidth'], $row['pheight'], $this->config->conf['thumb_width']);

                $p = $i - 1 + $lower_limit;
                $p = ($p < 0 ? 0 : $p);
                $picPos = $key < 0 ? $key : $p;
                $thumb_list[$i]['geom'] = $image_size['geom'];
                $thumb_list[$i]['picUrl'] = $pic_url;
                $thumb_list[$i]['picTitle'] = $pic_title;
                $thumb_list[$i]['filename'] = $row['filename'];
                $thumb_list[$i]['target'] = $this->createLink($row['pid'], $album, $cat, $meta);
                /*$thumb_list[$i]['target'] = $this->config->conf['ecards_more_pic_target'] . "displayimage.php?pid=".$row['pid'];

                if (!empty($meta)) {
                    $thumb_list[$i]['target'] .= "&amp;meta=$meta";

                    if ($meta == 'lastupby') {
                      $thumb_list[$i]['target'] .= '&amp;uid='.(int)$_GET['uid'];
                    }
                }

                if (!empty($album)) {
                    $thumb_list[$i]['target'] .= "&amp;album=$album";
                }

                if (!empty($cat)) {
                    $thumb_list[$i]['target'] .= "&amp;cat=$cat";
                }*/

                $thumb_list[$i]['pid'] = $row['pid'];
            }
            return ($thumb_list);
        }
    }

    /**
     * cpgAlbumData::computeImgSize()
     *
     * @param  $width
     * @param  $height
     * @param  $max
     * @return
     */
    function computeImgSize($width, $height, $max)
    {
        $thumb_use = $this->config->conf['thumb_use'];
        if ($thumb_use == 'ht') {
            $ratio = $height / $max;
        } elseif ($thumb_use == 'wd') {
            $ratio = $width / $max;
        } else {
            $ratio = max($width, $height) / $max;
        }
        if ($ratio > 1.0) {
            $image_size['reduced'] = true;
        }
        $ratio = max($ratio, 1.0);
        $image_size['width'] = ceil($width / $ratio);
        $image_size['height'] = ceil($height / $ratio);
        $image_size['whole'] = 'width="' . $image_size['width'] . '" height="' . $image_size['height'] . '"';
        if ($thumb_use == 'ht') {
            $image_size['geom'] = ' height="' . $image_size['height'] . '"';
        } elseif ($thumb_use == 'wd') {
            $image_size['geom'] = 'width="' . $image_size['width'] . '"';
        } else {
            $image_size['geom'] = 'width="' . $image_size['width'] . '" height="' . $image_size['height'] . '"';
        }
        return $image_size;
    }

    /**
     * cpgAlbumData::cpgGetSystemThumb()
     *
     * @param  $filename
     * @param integer $user
     * @return
     */
    function cpgGetSystemThumb($filename, $user = 10001)
    {
        // Correct user_id
        if ($user < 10000) {
            $user += 10000;
        }

        if ($user == 10000) {
            $user = 10001;
        }
        // Get image data for thumb
        $picdata = array('filename' => $filename,
            'filepath' => $this->config->conf['userpics'] . $user . '/',
            'url_prefix' => 0);
        $pic_url = $this->__getPicUrl($picdata, 'thumb', true);
        $picdata['thumb'] = $pic_url;
        $image_info = getimagesize($pic_url);
        $picdata['pwidth'] = $image_info[0];
        $picdata['pheight'] = $image_info[1];
        $image_size = $this->computeImgSize($picdata['pwidth'], $picdata['pheight'], $this->config->conf['alb_list_thumb_size']);
        $picdata['whole'] = $image_size['whole'];
        $picdata['reduced'] = (isset($image_size['reduced']) && $image_size['reduced']);
        return $picdata;
    }
    // Add 1 everytime a picture is viewed.
    /**
     * cpgAlbumData::addHit()
     *
     * @param  $pid
     * @return
     */
    function addHit($pid)
    {
        global $raw_ip;
        
        $query = "UPDATE {$this->config->conf['TABLE_PICTURES']} SET hits=hits+1, lasthit_ip='$raw_ip' WHERE pid='$pid'";
        $this->db->query($query);

        /**
         * Code to record the details of hits for the picture, if the option is set in CONFIG
         */
        if ($this->config->conf['hit_details']) {
            // Get the details of user browser, IP, OS, etc
            $os = "Unknown";
            if (eregi("Linux", $_SERVER["HTTP_USER_AGENT"])) {
                $os = "Linux";
            } else if (eregi("Windows NT 5.0", $_SERVER["HTTP_USER_AGENT"])) {
                $os = "Windows 2000";
            } else if (eregi("win98|Windows 98", $_SERVER["HTTP_USER_AGENT"])) {
                $os = "Windows 98";
            } else if (eregi("Windows NT 5.1", $_SERVER["HTTP_USER_AGENT"])) {
                $os = "Windows XP";
            } else if (eregi("Windows", $_SERVER["HTTP_USER_AGENT"])) {
                $os = "Windows";
            }

            $browser = 'Unknown';
            if (eregi("MSIE", $browser)) {
                if (eregi("MSIE 5.5", $browser)) {
                    $browser = "Microsoft Internet Explorer 5.5";
                } else if (eregi("MSIE 6.0", $browser)) {
                    $browser = "Microsoft Internet Explorer 6.0";
                }
            } else if (eregi("Mozilla Firebird", $browser)) {
                $browser = "Mozilla Firebird";
            } else if (eregi("netscape", $browser)) {
                $browser = "Netscape";
            } else if (eregi("Firefox", $browser)) {
                $browser = "Firefox";
            }
            // Code to get the search string if the referrer is any of the following
            $search_engines = array('google', 'lycos', 'yahoo');

            foreach ($search_engines as $engine) {
                if (cpgUtils::isRefererSearchEngine($engine)) {
                    $query_terms = cpgUtils::getSearchQueryTerms($engine);
                    break;
                }
            }

            $time = time();

            $referer = urlencode(addslashes($_SERVER['HTTP_REFERER']));
            
            // Insert the record in database
            $query = "INSERT INTO {$this->config->conf['TABLE_HIT_STATS']}
                            SET
                              pid = $pid,
                              search_phrase = '$query_term',
                              Ip   = '$raw_ip',
                              sdate = '$time',
                              referer='$referer',
                              browser = '$browser',
                              os = '$os'";
            $this->db->query($query);
        }
    }

    /**
     * cpgAlbumData::createLink()
     *
     * Decide whether to create short or long url's and return the created url
     *
     * @param  $pid
     * @param  $album
     * @param  $cat
     * @param  $meta
     * @param  $page
     * 
     * @return String
     */
    function createLink($pid, $album, $cat, $meta, $page='')
    {
        if ($this->config->conf['short_url']) {
            //Short URL is ON
            $url = substr($this->config->conf['ecards_more_pic_target'], 0, -1);
            if ($pid) {
                $url .=  "/image/$pid";
            }
            if ($meta) {
                $url .= "/meta/$meta";
            }
            if ($cat) {
                $url .= "/cat/$cat";
            }
            if ($album) {
                $res = $this->getAlbumName($album);
                $url .= "/album/{$res['title']}";
            }
            if ($page) {
                $url .= "/page/$page";
            }
          } else {
            //Short URL is OFF
            $url = $this->config->conf['ecards_more_pic_target'].'displayimage.php?';
            $tmpurl = '';
            if ($pid) {
                $tmpurl .= "&amp;pid=$pid";
            }
            if ($meta) {
                $tmpurl .= "&amp;meta=$meta";
            }
            if ($cat) {
                $tmpurl .= "&amp;cat=$cat";
            }
            if ($album) {
                $tmpurl .= "&amp;album=$album";
            }
            if ($page) {
                $tmpurl .= "&amp;page=$page";
            }
            $tmpurl = substr($tmpurl, 5);
            $url .= $tmpurl;
        }
        return $url;
    }
}

?>
