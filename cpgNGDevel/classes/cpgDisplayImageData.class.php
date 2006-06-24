<?php
/**
 * cpgDisplayImageData.class.php
 *
 * Class for displaying the image on displayimage.php
 *
 * @package cpgNG
 * @author Abbas <abbas@sanisoft.com>
 * @version $Id$
 */

/**
 * Include the base class file
 */
require_once ('cpgAlbumData.class.php');

/**
 * Include the exif file
 */
require_once ('include/exif_php.inc.php');

/**
 * Include the iptc file
 */
require_once ('include/iptc.inc.php');

/**
 * Include the media file
 */
require_once ('include/media.functions.inc.php');

class cpgDisplayImageData extends cpgAlbumData {
    /**
     *
     * @var object $db
     */
    var $db;

    /**
     *
     * @var $auth Authentication object
     */
    var $auth;

    /**
     *
     * @var $config Config object
     */
    var $config;

    /**
     *
     * @var $picData array
     */
    var $picData;

    /**
     * Constructor of the class
     */
    /**
     * cpgDisplayImageData::cpgDisplayImageData()
     *
     * @return
     */
    function cpgDisplayImageData()
    {
        $this->db = cpgDB::getInstance();
        $this->auth = cpgAuth::getInstance();
        $this->config = cpgConfig::getInstance();
    }

    /**
     * cpgDisplayImageData::getPicHtmlData()
     *
     * @param  $album
     * @return
     */
    function getPicHtmlData ($album)
    {
        global $comment_date_fmt, $template_display_picture;

        $pid = $this->picData['pid'];

        if (!isset($this->auth->user['liv']) || !is_array($this->auth->user['liv'])) {
            $this->auth->user['liv'] = array();
        }
        // Add 1 to hit counter
        if (!$this->auth->isDefined("USER_IS_ADMIN") && $album != 'lasthits' && !in_array($pid, $this->auth->user['liv']) && isset($_COOKIE[$this->config->conf['cookie_name'] . '_data'])) {
            $this->addHit($pid);
            if (count($this->auth->user['liv']) > 4) array_shift($this->auth->user['liv']);
            array_push($this->auth->user['liv'], $pid);
        }

        if ($this->config->conf['thumb_use'] == 'ht' && $this->picData['pheight'] > $this->config->conf['picture_width']) { // The wierd comparision is because only picture_width is stored
            $condition = true;
        } elseif ($this->config->conf['thumb_use'] == 'wd' && $this->picData['pwidth'] > $this->config->conf['picture_width']) {
            $condition = true;
        } elseif ($this->config->conf['thumb_use'] == 'any' && max($this->picData['pwidth'], $this->picData['pheight']) > $this->config->conf['picture_width']) {
            $condition = true;
        } else {
            $condition = false;
        }

        if ($this->config->conf['make_intermediate'] && $condition) {
            $this->picData['picUrl'] = $this->__getPicUrl($this->picData, 'normal');
        } else {
            $this->picData['picUrl'] = $this->__getPicUrl($this->picData, 'fullsize');
        }

        $image_size = $this->computeImgSize($this->picData['pwidth'], $this->picData['pheight'], $this->config->conf['picture_width']);

        $mime_content = cpg_get_type($this->picData['filename']);

        if ($this->picData['pwidth'] == 0 || $this->picData['pheight'] == 0) {
            $image_size['geom'] = '';
            $image_size['whole'] = '';
        } elseif ($mime_content['content'] == 'movie' || $mime_content['content'] == 'audio') {
            $ctrl_offset['mov'] = 15;
            $ctrl_offset['wmv'] = 45;
            $ctrl_offset['swf'] = 0;
            $ctrl_offset['rm'] = 0;
            $ctrl_offset_default = 45;
            $ctrl_height = (isset($ctrl_offset[$mime_content['extension']]))?($ctrl_offset[$mime_content['extension']]):$ctrl_offset_default;
            $image_size['whole'] = 'width="' . $this->picData['pwidth'] . '" height="' . ($this->picData['pheight'] + $ctrl_height) . '"';
        }

        if ($mime_content['content'] == 'image') {
            if (isset($image_size['reduced'])) {
                $this->picData['winsizeX'] = $this->picData['pwidth'] + 16;
                // The height of the window needs to be large as we have added a 'Close' link in popup.html
                $this->picData['winsizeY'] = $this->picData['pheight'] + 90;
            }
        } elseif ($mime_content['content'] == 'document') {
            $this->picData['pic_thumb_url'] = $this->__getPicUrl($this->picData, 'thumb');
        } else {
            $this->picData['autostart'] = ($this->config->conf['mv_autostart']) ? ('true'):('false');
        }

        $this->picData['image_size'] = $image_size;
        $this->picData['mime_content'] = $mime_content;

        /**
         * If user is admin then show the edit menu or logged in user for his/her albums
         */
       // if ((USER_ADMIN_MODE && $this->currentAlbumData['category'] == FIRST_USER_CAT + $this->auth->isDefined("USER_ID")) || GALLERY_ADMIN_MODE) {

        if ((USER_ADMIN_MODE && $this->currentAlbumData['user_Id'] == $this->auth->isDefined("USER_ID")) || GALLERY_ADMIN_MODE) {
            $this->picData['menu'] = "show";
        }

        ///$this->picData = CPGPluginAPI::filter('file_data', $this->picData);
    }

    /**
     * cpgDisplayImageData::getPicInfo()
     *
     * @return
     */
    function getPicInfo()
    {
        global $lang_picinfo, $lang_display_image_php, $lang_byte_units, $lastup_date_fmt;
        global $THEME_DIR;

        /**
         * Check whether the cookie for showing pic info is set and display pic info accordingly
         */
        $this->picData['displayPicInfo'] = isset($_COOKIE['picinfo']) ? $_COOKIE['picinfo'] : ($this->config->conf['display_pic_info'] ? 'block' : 'none');

        if ($this->picData['owner_id'] && $this->picData['owner_name']) {
            $picInfo['ownerUid'] = $this->picData['owner_id'];
            $picInfo['ownerName'] = $this->picData['owner_name'];
        } else {
            $picInfo['ownerUid'] = '';
        }

        $picInfo['pid'] = $this->picData['pid'];

        if (GALLERY_ADMIN_MODE && $this->picData['pic_raw_ip']) {
            if ($this->picData['pic_hdr_ip']) {
                $picInfo['ipinfo'] = ' (' . $this->picData['pic_hdr_ip'] . '[' . $this->picData['pic_raw_ip'] . ']) / ';
            } else {
                $picInfo['ipinfo'] = ' (' . $this->picData['pic_raw_ip'] . ') / ';
            }
        } else {
            if ($picInfo['ownerUid']) {
                $picInfo['ipinfo'] = '/ ';
            } else {
                $picInfo['ipinfo'] = '';
            }
        }

        $picInfo['fileName'] = htmlspecialchars($this->picData['filename']);
        $picInfo['aid'] = $this->picData['aid'];
        $albumName = $this->getAlbumName($this->picData['aid']);
        $picInfo['albumName'] = $albumName['title'];

        if ($this->picData['votes'] > 0) {
            if (defined('THEME_HAS_RATING_GRAPHICS')) {
                $prefix = $THEME_DIR;
            } else {
                $prefix = '';
            }
            if (GALLERY_ADMIN_MODE) {
                $picInfo['width'] = 978;
                $picInfo['height'] = 504;
            } else {
                $picInfo['width'] = 418;
                $picInfo['height'] = 232;
            }

            $picInfo['voteDetailsLink'] = $this->config->conf['vote_details'] ? 'show' : '';

            $picInfo['rating'] = sprintf($lang_picinfo['Rating'], $this->picData['votes']);
            $picInfo['ratingImgPath'] = $prefix . 'images/rating' . round($this->picData['pic_rating'] / 2000) . '.gif';
        }

        if ($this->picData['keywords'] != '') {
            $picInfo['keywordLink'] = preg_replace("/(\S+)/", "<a href=\"thumbnails.php?meta=search&amp;search=\\1\">\\1</a>" , $this->picData['keywords']);
            $picInfo['keywords'] = $this->picData['keywords'];
        }

        for ($i = 1; $i <= 4; $i++) {
            if ($this->config->conf['user_field' . $i . '_name']) {
                if ($this->picData['user' . $i] != '') {
                    $picInfo['userFields'][$this->config->conf['user_field' . $i . '_name']] = cpgUtils::makeClickable($this->picData['user' . $i]);
                }
            }
        }

        $picInfo['fileSize'] = ($this->picData['filesize'] > 10240 ? ($this->picData['filesize'] >> 10) . '&nbsp;' . $lang_byte_units[1] : $this->picData['filesize'] . '&nbsp;' . $lang_byte_units[0]);

        $picInfo['dateAdded'] = cpgUtils::localisedDate($this->picData['ctime'], $lastup_date_fmt);

        $picInfo['dimensions'] = sprintf($lang_display_image_php['size'], $this->picData['pwidth'], $this->picData['pheight']);

        $picInfo['hitsDetailsLink'] = ($this->picData['hits'] && $this->config->conf['vote_details'] && GALLERY_ADMIN_MODE) ? 'show' : '';

        $picInfo['displayed'] = sprintf($lang_display_image_php['views'], $this->picData['hits']);

        $pathToPic = $this->config->conf['fullpath'] . $this->picData['filepath'] . $this->picData['filename'];

        if ($this->config->conf['read_exif_data']) {
            $picInfo['exifInfo'] = exif_parse_file($pathToPic);
        }

        if (isset($picInfo['exifInfo']) && is_array($picInfo['exifInfo'])) {
            foreach ($picInfo['exifInfo'] as $key => $data) {
                $picInfo['exifInfo'][$key] = htmlentities(strip_tags(trim($data, "\x7f..\xff\x0..\x1f")), ENT_QUOTES); // sanitize data against sql/html injection; trim any nongraphical non-ASCII character
            }
        }

        if ($this->config->conf['read_iptc_data']) {
            $iptc = get_IPTC($pathToPic);
        }

        if (isset($iptc) && is_array($iptc)) {
            foreach ($iptc as $key => $data) {
                if (is_array($data)) {
                    reset($data);

                    foreach ($data as $k => $v) {
                        $iptc[$key][$k] = htmlentities(strip_tags(trim($v, "\x7f..\xff\x0..\x1f")), ENT_QUOTES); // sanitize data against sql/html injection; trim any nongraphical non-ASCII character
                    }
                } else {
                    $iptc[$key] = htmlentities(strip_tags(trim($data, "\x7f..\xff\x0..\x1f")), ENT_QUOTES); // sanitize data against sql/html injection; trim any nongraphical non-ASCII character
                }
            }

            if (isset($iptc['Title'])) $picInfo['iptcTitle'] = trim($iptc['Title']);
            if (isset($iptc['Copyright'])) $picInfo['iptcCopyright'] = trim($iptc['Copyright']);
            if (isset($iptc['Keywords'])) $picInfo['iptcKeywords'] = trim(implode(" ", $iptc['Keywords']));
            if (isset($iptc['Category'])) $picInfo['iptcCategory'] = trim($iptc['Category']);
            if (isset($iptc['SubCategories'])) $picInfo['iptcSubCategories'] = trim(implode(" ", $iptc['SubCategories']));
        }
        // Create the absolute URL for display in info
        if ($this->config->conf['short_url']) {
            $picInfo['URL'] = $this->config->conf['ecards_more_pic_target'] . "image/{$this->picData['pid']}";
        } else {
            $picInfo['URL'] = $this->config->conf['ecards_more_pic_target'] . (substr($this->config->conf['ecards_more_pic_target'], -1) == '/' ? '' : '/') . basename($_SERVER['PHP_SELF']) . "?pid=" . $this->picData['pid'];
        }
        // with subdomains the variable is $_SERVER["SERVER_NAME"] does not return the right value instead of using a new config variable I reused $this->config->conf["ecards_more_pic_target"] no trailing slash in the configure
        // Create the add to fav link
        if (!in_array($this->picData['pid'], $this->auth->favPics)) {
            $picInfo['favPhrase'] = $lang_picinfo['addFav'];
        } else {
            $picInfo['favPhrase'] = $lang_picinfo['remFav'];
        }

        return ($picInfo);
    }

    function getAlbumData()
    {
        global $lang_errors;

        $query = "SELECT title, comments, votes, category, aid, user_Id FROM {$this->config->conf['TABLE_ALBUMS']} WHERE aid='" . $this->picData['aid'] . "' LIMIT 1";

        $this->db->query($query);

        if (!$this->db->nf()) {
            cpgUtils::cpgDie(CRITICAL_ERROR, sprintf($lang_errors['pic_in_invalid_album'], $this->picData['aid']), __FILE__, __LINE__);
        }

        $this->currentAlbumData = $this->db->fetchRow();
    }

    /**
     * cpgDisplayImageData::buildLinks()
     *
     * @param  $meta
     * @param  $album
     * @param  $cat
     * @param  $pos
     * @param  $picCount
     * @return
     */
    function buildLinks($meta, $album, $cat, $pos, $picCount)
    {
        global $lang_img_nav_bar;

        /**
         * Check whether user can send ecards and display the Send Ecards link accordingly
         */
        if ($this->auth->isDefined("USER_CAN_SEND_ECARDS")) {
            $this->picData['ecardTgt'] = 'ecard.php?';

            if (!empty($meta)) {
                $this->picData['ecardTgt'] .= 'meta='.$meta.'&amp;pos='.$pos.'&amp;';

                if (!empty($cat)) {
                    $this->picData['ecardTgt'] .= 'cat='.$cat.'&amp;';
                }
            } else if (!empty($album)) {
                $this->picData['ecardTgt'] .= 'album='.$album.'&amp;pos='.$pos.'&amp;';
            }

            $this->picData['ecardTgt'] .= 'pid='.$this->picData['pid'];
            $this->picData['ecardTitle'] = $lang_img_nav_bar['ecard_title'];

            if ($meta == 'lastupby') {
              $this->picData['ecardTgt'] .= '&amp;uid='.(int)$_GET['uid'];
            }
        } else {
            $this->picData['ecardTgt'] = '" onClick="'."alert('".addslashes($lang_img_nav_bar['ecard_disabled_msg'])."'); return false;";
            $this->picData['ecardTitle'] = $lang_img_nav_bar['ecard_disabled'];
        }

        $thumbPage = ceil(($pos + 1) / ($this->config->conf['thumbrows'] * $this->config->conf['thumbcols']));

        /**
         * Target link for thumbnail page and slideshow button
         */
        if (!empty($meta)) {
            $this->picData['slideShowTarget'] = $this->config->conf['ecards_more_pic_target'] . "slideShow.php?meta=$meta&amp;pid=" . $this->picData['pid'];
            $this->picData['thumbPageTarget'] = $this->config->conf['ecards_more_pic_target'] . "thumbnails.php?meta=$meta&amp;";

            if ($meta == 'lastupby') {
              $this->picData['slideShowTarget'] .= '&amp;uid='.(int)$_GET['uid'];
              $this->picData['thumbPageTarget'] .= 'uid='.(int)$_GET['uid'].'&amp;';
            }
        } else {
            $this->picData['slideShowTarget'] = $this->config->conf['ecards_more_pic_target'] . "slideShow.php?pid=" . $this->picData['pid'];
            $this->picData['thumbPageTarget'] = $this->config->conf['ecards_more_pic_target'] . "thumbnails.php?";
        }

        if (!empty($album)) {
            $this->picData['slideShowTarget'] .= "&amp;album=$album";
            $this->picData['thumbPageTarget'] .= "album=$album&amp;";
        } elseif (!empty($cat)) {
            $this->picData['slideShowTarget'] .= "&amp;cat=$cat";
            $this->picData['thumbPageTarget'] .= "cat=$cat&amp;";
        }

        $this->picData['thumbPageTarget'] .= "page=$thumbPage";
        $this->picData['slideShowTarget'] .= "&amp;slideshow=" . $this->config->conf['slideshow_interval'];

        /**
         * Target link for previous pic
         */
        if ($pos > 0) {
            if (!empty($meta)) {
                $this->picData['prevTarget'] = $this->config->conf['ecards_more_pic_target'] . "displayimage.php?meta=$meta&amp;pos=" . ($pos - 1);

                if ($meta == 'lastupby') {
                  $this->picData['prevTarget'] .= '&amp;uid='.(int)$_GET['uid'];
                }
            } else {
                $this->picData['prevTarget'] = $this->config->conf['ecards_more_pic_target'] . "displayimage.php?pos=" . ($pos - 1);
            }

            if (!empty($album)) {
                $this->picData['prevTarget'] .= "&amp;album=$album";
            } elseif (!empty($cat)) {
                $this->picData['prevTarget'] .= "&amp;cat=$cat";
            }
        } else {
            $this->picData['prevTarget'] = "#";
        }

        /**
         * Target link for next pic
         */
        if ($pos < ($picCount - 1)) {
            if (!empty($meta)) {
                $this->picData['nextTarget'] = $this->config->conf['ecards_more_pic_target'] . "displayimage.php?meta=$meta&amp;pos=" . ($pos + 1);

                if ($meta == 'lastupby') {
                  $this->picData['nextTarget'] .= '&amp;uid='.(int)$_GET['uid'];
                }
            } else {
                $this->picData['nextTarget'] = $this->config->conf['ecards_more_pic_target'] . "displayimage.php?pos=" . ($pos + 1);
            }

            if (!empty($album)) {
                $this->picData['nextTarget'] .= "&amp;album=$album";
            } elseif (!empty($cat)) {
                $this->picData['nextTarget'] .= "&amp;cat=$cat";
            }
        } else {
            $this->picData['nextTarget'] = "#";
        }

        /**
         * Code to build some arguments for edit comment link
         */
        $this->picData['editCommentLink'] = '';

        if ($pos >= 0 && !$_GET['pid']) {
          if (!empty($cat) && !empty($meta)) {
            $this->picData['editCommentLink'] = 'cat='.$cat.'&amp;meta='.$meta.'&amp;pos='.$pos;
          } else if (!empty($meta)) {
            $this->picData['editCommentLink'] = 'meta='.$meta.'&amp;pos='.$pos;
          } else if (!empty($album)) {
            $this->picData['editCommentLink'] = 'cat='.$cat.'&amp;pos='.$pos;
          }
        }

        if ($meta == 'lastupby') {
          $this->picData['editCommentLink'] .= 'uid='.(int)$_GET['uid'].'&amp;';
        }

        if (empty($this->picData['editCommentLink'])) {
          $this->picData['editCommentLink'] = 'pid='.$this->picData['pid'];
        }
    }
}

?>
