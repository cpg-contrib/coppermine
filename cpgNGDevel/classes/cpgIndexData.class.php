<?php
require_once ('cpgAlbumData.class.php');
/**
 * cpgIndexData
 *
 * @package
 * @author tarique
 * @copyright Copyright (c) 2005
 * @version $Id$
 * @access public
 */
class cpgIndexData extends cpgAlbumData {
    var $catData = array();
    var $catAlbList = array();
    var $albList = array();
    var $usrList = array();
    var $statistics;
    var $album;
    var $cat;
    var $page;
    var $totalPages = array();
    var $currentPage = array();
    var $dispAlbumCount;
    var $db;
    var $config;
    /**
     *
     * @var $auth Authentication object
     */
    var $auth;

    /**
     * cpgIndexData::cpgIndexData()
     *
     * Constructor
     *
     * @param  $cat
     * @param  $album
     * @param  $page
     * @return
     */
    function cpgIndexData($cat, $album, $page)
    {
        $this->cat = (int)$cat;
        $this->album = $album;
        $this->page = $page;
        $this->db = cpgDB::getInstance();
        $this->auth = cpgAuth::getInstance();
        $this->config = cpgConfig::getInstance();
    }

    /**
     * cpgIndexData::__htmlAlbumMenu()
     *
     * This function draws the links for admin menu of Albums
     *
     * @param integer $id ID of the album for which the links are being drawn
     * @return string The evaluated template block with links
     */
    function __htmlAlbumMenu($id)
    {
        global $lang_album_admin_menu;

        static $params = array();

        if (count($params) == 0) {
            $params = array('confirmDelete' => $lang_album_admin_menu['confirm_delete'],
                'delete' => $lang_album_admin_menu['delete'],
                'modify' => $lang_album_admin_menu['modify'],
                'eidtPics' => $lang_album_admin_menu['edit_pics']
                );
        }
        $params = array('aid' => $id);
        return ($params);
    }

    /**
     * getCatList()
     *
     *    List all categories
     *
     * @return void
     */
    function getCatList()
    {
        global $HIDE_USER_CAT;
        global $lang_list_categories, $lang_errors;

        $cpg_show_private_album = $this->config->conf['allow_private_albums'] ? $this->config->conf['show_private'] : true;

        $album_set_array = array();
        $album_set_array = $this->__getSubcatData($this->cat, $album_set_array, $this->config->conf['subcat_level']);

        $album_filter = '';
        $pic_filter = '';
        if (!empty($this->auth->forbiddenSet) && !$cpg_show_private_album) {
            $album_filter = ' and ' . str_replace('p.', 'a.', $this->auth->forbiddenSet);
            $pic_filter = ' and ' . $this->auth->forbiddenSet;
        }
        // Add the albums in the current category to the album set
        if ($this->cat == USER_GAL_CAT) {
            $sql = "SELECT aid FROM {$this->config->conf['TABLE_ALBUMS']} as a WHERE category >= " . FIRST_USER_CAT . $album_filter;
            $this->db->query($sql);
        } else {
            $sql = "SELECT aid FROM {$this->config->conf['TABLE_ALBUMS']} as a WHERE category = '" . $this->cat . "'" . $album_filter;
            $this->db->query($sql);
        } while ($row = $this->db->fetchRow()) {
            $album_set_array[] = $row['aid'];
        } // while
        // }
        if (count($album_set_array) && $this->cat) {
            $set = '';
            foreach ($album_set_array as $album) $set .= $album . ',';
            $set = substr($set, 0, -1);
            $current_album_set = "AND aid IN ($set) ";
            $this->auth->albumSet .= $current_album_set;
        } elseif ($this->cat) {
            $current_album_set = "AND aid IN (-1) ";
            $this->auth->albumSet .= $current_album_set;
        }
        // Gather gallery statistics
        if ($this->cat == 0) {
            $query = "SELECT count(aid) FROM {$this->config->conf['TABLE_ALBUMS']} as a WHERE 1" . $album_filter;
            $this->db->query($query);
            $nbEnr = $this->db->fetchRow();
            $album_count = $nbEnr[0];

            $sql = "SELECT count(pid) FROM {$this->config->conf['TABLE_PICTURES']} as p " . 'LEFT JOIN ' . $this->config->conf['TABLE_ALBUMS'] . ' as a ' . 'ON a.aid=p.aid ' . 'WHERE 1' . $pic_filter;
            $this->db->query($sql);
            $nbEnr = $this->db->fetchRow();
            $picture_count = $nbEnr[0];

            $sql = "SELECT count(msg_id) FROM {$this->config->conf['TABLE_COMMENTS']} as c " . 'LEFT JOIN ' . $this->config->conf['TABLE_PICTURES'] . ' as p ' . 'ON c.pid=p.pid ' . 'LEFT JOIN ' . $this->config->conf['TABLE_ALBUMS'] . ' as a ' . 'ON a.aid=p.aid ' . 'WHERE 1' . $pic_filter;
            $this->db->query($sql);
            $nbEnr = $this->db->fetchRow();
            $comment_count = $nbEnr[0];

            $sql = "SELECT count(cid) FROM {$this->config->conf['TABLE_CATEGORIES']} WHERE 1";
            $this->db->query($sql);
            $nbEnr = $this->db->fetchRow();
            $cat_count = $nbEnr[0] - $HIDE_USER_CAT;

            $sql = "SELECT sum(hits) FROM {$this->config->conf['TABLE_PICTURES']} as p " . 'LEFT JOIN ' . $this->config->conf['TABLE_ALBUMS'] . ' as a ' . 'ON p.aid=a.aid ' . 'WHERE 1' . $pic_filter;
            $this->db->query($sql);
            $nbEnr = $this->db->fetchRow();
            $hit_count = (int)$nbEnr[0];

            if (count($this->catData)) {
                $this->statistics = strtr($lang_list_categories['stat1'], array('[pictures]' => $picture_count,
                        '[albums]' => $album_count,
                        '[cat]' => $cat_count,
                        '[comments]' => $comment_count,
                        '[views]' => $hit_count));
            } else {
                $this->statistics = strtr($lang_list_categories['stat3'], array('[pictures]' => $picture_count,
                        '[albums]' => $album_count,
                        '[comments]' => $comment_count,
                        '[views]' => $hit_count));
            }
        } elseif ($this->cat >= FIRST_USER_CAT && $this->auth->albumSet) {
            $query = "SELECT count(aid) FROM {$this->config->conf['TABLE_ALBUMS']} WHERE 1 $current_album_set";
            $this->db->query($query);
            $nbEnr = $this->db->fetchRow();
            $album_count = $nbEnr[0];

            $query = "SELECT count(pid) FROM {$this->config->conf['TABLE_PICTURES']} WHERE 1 $current_album_set";
            $this->db->query($query);
            $nbEnr = $this->db->fetchRow();
            $picture_count = $nbEnr[0];

            $query = "SELECT sum(hits) FROM {$this->config->conf['TABLE_PICTURES']} WHERE 1 $current_album_set";
            $this->db->query($query);
            $nbEnr = $this->db->fetchRow();
            $hit_count = (int)$nbEnr[0];

            $this->statistics = strtr($lang_list_categories['stat2'], array('[pictures]' => $picture_count,
                    '[albums]' => $album_count,
                    '[views]' => $hit_count));
        } else {
            $this->statistics = '';
        }
    }

    /**
     * __getSubcatData()
     *
     * Get the data about the sub categories which are going to be shown on the index page, this function is called recursively
     *
     * @param integer $parent Parent Category
     * @param array $this ->catData
     * @param array $album_set_array
     * @param integer $level Level being displayed
     * @param string $ident String to use as indentation for Categories
     * @return $album_set_array
     */
    function __getSubcatData($parent, $album_set_array, $level, $ident = 0)
    {
        global $HIDE_USER_CAT;
        $tmpArr = array();

        $cpg_show_private_album = $this->config->conf['allow_private_albums'] ? $this->config->conf['show_private'] : true;
        $album_filter = '';
        $pic_filter = '';
        if (!empty($this->auth->forbiddenSet) && !$cpg_show_private_album) {
            $album_filter = ' and ' . str_replace('p.', 'a.', $this->auth->forbiddenSet);
            $pic_filter = ' and ' . str_replace('p.', $this->config->conf['TABLE_PICTURES'] . '.', $this->auth->forbiddenSet);
        }
        if ($this->config->conf['categories_alpha_sort'] == 1) {
            $cat_sort_order = 'name';
        } else {
            $cat_sort_order = 'pos';
        }

        $query = "SELECT cid, name, description, thumb FROM {$this->config->conf['TABLE_CATEGORIES']} WHERE parent = '$parent'  ORDER BY $cat_sort_order";
        $this->db->query($query);
        if ($this->db->nf() > 0) {
            $rowset = $this->db->fetchRowSet();
            foreach ($rowset as $subcat) {
                if ($subcat['cid'] == USER_GAL_CAT) {
                    $sql = "SELECT aid FROM {$this->config->conf['TABLE_ALBUMS']} as a WHERE category>=" . FIRST_USER_CAT . $album_filter;

                    $this->db->query($sql);
                    $album_count = $this->db->nf();
                    while ($row = $this->db->fetchRow()) {
                        $album_set_array[] = $row['aid'];
                    } // while
                    $query = "SELECT count(p.pid) FROM {$this->config->conf['TABLE_PICTURES']} as p, {$this->config->conf['TABLE_ALBUMS']} as a WHERE p.aid = a.aid AND category >= " . FIRST_USER_CAT . $album_filter;
                    $this->db->query($query);
                    $nbEnr = $this->db->fetchRow();
                    $pic_count = $nbEnr[0];

                    $subcat['description'] = preg_replace("/<br.*?>[\r\n]*/i", '<br />' . $ident , cpgUtils::bbDecode($subcat['description']));

                    if ($this->config->conf['short_url']) {
                        // $link = "<a href=\"{$this->config->conf['ecards_more_pic_target']}cat/{$subcat['cid']}\">{$subcat['name']}</a>";
                        $link = $subcat['name'];
                    } else {
                        // $link = "<a href=\"index.php?cat={$subcat['cid']}\">{$subcat['name']}</a>";
                        $link = $subcat['name'];
                    }
                    if ($album_count) {
                        $this->catData[] = array($link, $subcat['description'], $album_count, $pic_count, 'catName' => $subcat['name'], 'catid' => $subcat['cid'], 'ident' => $ident);
                        $HIDE_USER_CAT = 0;
                    } else {
                        $HIDE_USER_CAT = 1;
                    }
                } else {
                    $unaliased_album_filter = str_replace('a.', '', $album_filter);

                    $query = "SELECT aid FROM {$this->config->conf['TABLE_ALBUMS']} WHERE category = {$subcat['cid']}" . $unaliased_album_filter;
                    $this->db->query($query);
                    $album_count = $this->db->nf();
                    while ($row = $this->db->fetchRow()) {
                        $album_set_array[] = $row['aid'];
                    } // while
                    $query = "SELECT count(p.pid) FROM {$this->config->conf['TABLE_PICTURES']} as p, {$this->config->conf['TABLE_ALBUMS']} as a WHERE p.aid = a.aid AND category = {$subcat['cid']}" . $album_filter;
                    $this->db->query($query);
                    $nbEnr = $this->db->fetchRow();
                    $pic_count = $nbEnr[0];
                    if ($subcat['thumb'] > 0) {
                        $sql = "SELECT filepath, filename, url_prefix, pwidth, pheight " . "FROM {$this->config->conf['TABLE_PICTURES']} " . "WHERE pid='{$subcat['thumb']}'" . $pic_filter;

                        $this->db->query($sql);
                        if ($this->db->nf() > 0) {
                            $picture = $this->db->fetchRow();
                            $pic_url = $this->__getPicUrl($picture, 'thumb');
                            if (!is_image($picture['filename'])) {
                                $image_info = getimagesize($pic_url);
                                $picture['pwidth'] = $image_info[0];
                                $picture['pheight'] = $image_info[1];
                            }
                            $image_size = $this->computeImgSize($picture['pwidth'], $picture['pheight'], $this->config->conf['alb_list_thumb_size']);
                            $user_thumb = "<img src=\"" . $this->config->conf['ecards_more_pic_target'] . $pic_url . "\" class=\"image\" {$image_size['geom']} border=\"0\" alt=\"\" />";
                            if ($this->config->conf['short_url']) {
                                $user_thumb = "<a href=\"{$this->config->conf['ecards_more_pic_target']}cat/{$subcat['cid']}\">" . $user_thumb . "</a>";
                            } else {
                                $user_thumb = "<a href=\"index.php?cat={$subcat['cid']}\">" . $user_thumb . "</a>";
                            }
                        }
                    } else {
                        $user_thumb = "";
                    }
                    $subcat['name'] = $subcat['name'];
                    $subcat['description'] = preg_replace("/<br.*?>[\r\n]*/i", '<br />', cpgUtils::bbDecode($subcat['description']));
                    if ($this->config->conf['short_url']) {
                        // $link = "<a href=\"{$this->config->conf['ecards_more_pic_target']}cat/{$subcat['cid']}\">{$subcat['name']}</a>";
                        $link = $subcat['name'];
                    } else {
                        // $link = "<a href=\"index.php?cat={$subcat['cid']}\">{$subcat['name']}</a>";
                        $link = $subcat['name'];
                    }
                    $user_thumb = $user_thumb;
                    if ($pic_count == 0 && $album_count == 0) {
                        $user_thumb = '';
                        $this->catData[] = array($link, $subcat['description'], 'cat_thumb' => $user_thumb, 'ident' => $ident, 'catid' => $subcat['cid']);
                    } else {
                        // Check if you need to show subcat_level
                        if ($level == $this->config->conf['subcat_level']) {
                            $tmpArr = $this->__listCatAlbums($subcat['cid']);
                        } else {
                            $cat_albums = '';
                            unset($tmpArr);
                            $tmpArr = array();
                        }
                        $this->catData[] = array($link, $subcat['description'], $album_count, $pic_count, 'cat_albums' => $tmpArr[0], 'cat_thumb' => $user_thumb, 'albStats' => $tmpArr[1], 'catName' => $subcat['name'], 'catid' => $subcat['cid'], 'ident' => $ident);
                        unset($tmpArr);
                    }
                }
                if ($level > 1) {
                    $this->__getSubcatData($subcat['cid'], $album_set_array, $level -1, $ident + 1);
                }
            }
        }
        return $album_set_array;
    }

    /**
     * __listCatAlbums()
     *
     * This has been added to list the albums in a category, used for showing first level albumslargely a repetition of code elsewhere
     * Redone for a cleaner approach
     *
     * @param integer $cat Category id for which albums are needed
     */
    function __listCatAlbums($cat = 0)
    {
        global $USER, $lastup_date_fmt;
        global $lang_list_albums, $lang_errors, $lang_album_list;

        $cpg_show_private_album = $this->config->conf['allow_private_albums'] ? $this->config->conf['show_private'] : true;

        $PAGE = 1;
        if ($cat == 0) {
            return '';
        }

        $cat_owner_id = ($cat > 10000)?(10000 - $cat):(10001);
        $cpg_nopic_data = $this->cpgGetSystemThumb('nopic.jpg', $cat_owner_id);
        $cpg_privatepic_data = $this->cpgGetSystemThumb('private.jpg', $cat_owner_id);

        $alb_per_page = $this->config->conf['albums_per_page'];
        $maxTab = $this->config->conf['max_tabs'];

        $album_filter = '';
        $pic_filter = '';
        if (!empty($this->auth->forbiddenSet) && !$cpg_show_private_album) {
            $album_filter = ' and ' . str_replace('p.', 'a.', $this->auth->forbiddenSet);
            $pic_filter = ' and ' . $this->auth->forbiddenSet;
        }

        $where = "category = '" . $cat . "' and a.parent = '0'";
        $sql = "SELECT count(aid) FROM {$this->config->conf['TABLE_ALBUMS']} as a WHERE " . $where . $album_filter;
        $this->db->query($sql);
        $nbEnr = $this->db->fetchRow();
        $nbAlb = $nbEnr[0];

        if ($nbAlb == 0) {
            return;
        }

        $this->totalPages['catAlb'] = ceil($nbAlb / $alb_per_page);

        if ($PAGE > $this->totalPages['catAlb']) $PAGE = 1;
        $this->currentPage['catAlb'] = $PAGE;
        $lower_limit = ($PAGE-1) * $alb_per_page;
        $upper_limit = min($nbAlb, $PAGE * $alb_per_page);
        $limit = "LIMIT " . $lower_limit . "," . ($upper_limit - $lower_limit);

        $sql = 'SELECT a.aid, a.title, a.description, visibility, user_id, filepath, ' . 'filename, url_prefix, pwidth, pheight ' . 'FROM ' . $this->config->conf['TABLE_ALBUMS'] . ' as a ' . 'LEFT JOIN ' . $this->config->conf['TABLE_PICTURES'] . ' as p ' . 'ON a.thumb=p.pid ' . 'WHERE ' . $where . $album_filter . ' ORDER BY a.pos ' . $limit;

        $this->db->query($sql);
        $alb_thumbs = $this->db->fetchRowSet();

        $disp_album_count = count($alb_thumbs);
        $album_set = '';
        foreach($alb_thumbs as $value) {
            $album_set .= $value['aid'] . ', ';
        }
        $album_set = '(' . substr($album_set, 0, -2) . ')';
        // This query will fetch album stats and keyword for the albums
        $sql = "SELECT p.aid, count(p.pid) as pic_count, max(p.pid) as last_pid, max(p.ctime) as last_upload, a.keyword " . "FROM {$this->config->conf['TABLE_PICTURES']} AS p, {$this->config->conf['TABLE_ALBUMS']} AS a " . "WHERE p.aid IN $album_set AND
             p.aid = a.aid AND
            p.approved = 'YES' " . "GROUP BY p.aid";

        $this->db->query($sql);
        $alb_stats = $this->db->fetchRowSet();

        foreach($alb_stats as $key => $value) {
            $cross_ref[$value['aid']] = &$alb_stats[$key];
            if ($this->config->conf['link_pic_count'] == 1) {
                if (!empty($value['keyword'])) {
                    $query = "SELECT count(pid) AS link_pic_count
                      FROM {$this->config->conf['TABLE_PICTURES']}
                        WHERE aid != {$value['aid']} AND
                        keywords LIKE '%{$value['keyword']}%' AND
                        approved = 'YES'";

                    $this->db->query($query);
                    $link_stat = $this->db->fetchRow();
                    $alb_stats[$key]['link_pic_count'] = $link_stat['link_pic_count'];
                }
            }
        }

        for ($alb_idx = 0; $alb_idx < $disp_album_count; $alb_idx++) {
            $alb_thumb = &$alb_thumbs[$alb_idx];
            $aid = $alb_thumb['aid'];

            if (isset($cross_ref[$aid])) {
                $alb_stat = $cross_ref[$aid];
                $count = $alb_stat['pic_count'];
            } else {
                $alb_stat = array();
                $count = 0;
            }
            // Inserts a thumbnail if the album contains 1 or more images
            $visibility = $alb_thumb['visibility'];
            if (!in_array($aid, $this->auth->forbiddenSetData) || $this->config->conf['allow_private_albums'] == 0) { // test for visibility
                if ($count > 0) { // Inserts a thumbnail if the album contains 1 or more images
                    if ($alb_thumb['filename']) {
                        $picture = &$alb_thumb;
                    } else {
                        $sql = "SELECT filepath, filename, url_prefix, pwidth, pheight " . "FROM {$this->config->conf['TABLE_PICTURES']} " . "WHERE pid='{$alb_stat['last_pid']}'";

                        $this->db->query($sql);
                        $picture = $this->db->fetchRow();
                    }
                    $pic_url = $this->__getPicUrl($picture, 'thumb');
                    if (!is_image($picture['filename'])) {
                        $image_info = getimagesize($pic_url);
                        $picture['pwidth'] = $image_info[0];
                        $picture['pheight'] = $image_info[1];
                    }
                    $image_size = $this->computeImgSize($picture['pwidth'], $picture['pheight'], $this->config->conf['alb_list_thumb_size']);
                    $alb_list[$alb_idx]['thumb_pic'] = "<img src=\"" . $this->config->conf['ecards_more_pic_target'] . $pic_url . "\" class=\"image\" {$image_size['geom']} border=\"0\" alt=\"{$picture['filename']}\" />";
                } else { // Inserts an empty thumbnail if the album contains 0 images
                    $alb_list[$alb_idx]['thumb_pic'] = '<img src="' . $cpg_nopic_data['thumb'] . '" ' . $cpg_nopic_data['whole'] . ' class="image" border="0" alt="" />';
                }
            } elseif ($this->config->conf['show_private']) {
                // $image_size = $this->computeImgSize(100, 75, $this->config->conf['alb_list_thumb_size']);
                $alb_list[$alb_idx]['thumb_pic'] = '<img src="' . $cpg_privatepic_data['thumb'] . '" ' . $cpg_privatepic_data['whole'] . ' class="image" border="0" alt="" />';
            }
            // Prepare everything
            if (!in_array($aid, $this->auth->forbiddenSetData) || $this->config->conf['allow_private_albums'] == 0) {
                $last_upload_date = $count ? cpgUtils::localisedDate($alb_stat['last_upload'], $lastup_date_fmt) : '';
                $link_pic_count = !empty($alb_stat['link_pic_count']) ? $alb_stat['link_pic_count'] : 0;
                $alb_list[$alb_idx]['aid'] = $alb_thumb['aid'];
                $alb_list[$alb_idx]['album_owner'] = ($alb_thumb['user_id'] == $this->auth->isDefined('USER_ID')) ? 1 : '';
                $alb_list[$alb_idx]['album_title'] = $alb_thumb['title'];
                $alb_list[$alb_idx]['album_desc'] = cpgUtils::bbDecode($alb_thumb['description']);
                $alb_list[$alb_idx]['pic_count'] = $count;
                $alb_list[$alb_idx]['last_upl'] = $last_upload_date;
                $alb_list[$alb_idx]['album_info'] = sprintf($lang_list_albums['n_pictures'], $count) . ($count ? sprintf($lang_list_albums['last_added'], $last_upload_date) : "") . (($this->config->conf['link_pic_count'] && $link_pic_count > 0) ? sprintf(", {$lang_list_albums['n_link_pictures']}, {$lang_list_albums['total_pictures']}", $link_pic_count, $count + $link_pic_count) : "");
                $alb_list[$alb_idx]['album_adm_menu'] = (GALLERY_ADMIN_MODE || (USER_ADMIN_MODE && $cat == $this->auth->isDefined("USER_ID") + FIRST_USER_CAT)) ? $this->__htmlAlbummenu($alb_thumb['aid']) : '';
            } elseif ($this->config->conf['show_private']) { // uncomment this else block to show private album description
                $last_upload_date = $count ? cpgUtils::localisedDate($alb_stat['last_upload'], $lastup_date_fmt) : '';
                $link_pic_count = !empty($alb_stat['link_pic_count']) ? $alb_stat['link_pic_count'] : 0;
                $alb_list[$alb_idx]['aid'] = $alb_thumb['aid'];
                $alb_list[$alb_idx]['album_owner'] = ($alb_thumb['user_id'] == $this->auth->isDefined('USER_ID')) ? 1 : '';
                $alb_list[$alb_idx]['album_title'] = $alb_thumb['title'];
                $alb_list[$alb_idx]['album_desc'] = cpgUtils::bbDecode($alb_thumb['description']);
                $alb_list[$alb_idx]['pic_count'] = $count;
                $alb_list[$alb_idx]['last_upl'] = $last_upload_date;
                $alb_list[$alb_idx]['album_info'] = sprintf($lang_list_albums['n_pictures'], $count) . ($count ? sprintf($lang_list_albums['last_added'], $last_upload_date) : "") . (($this->config->conf['link_pic_count'] && $link_pic_count > 0)? sprintf(", {$lang_list_albums['n_link_pictures']}, {$lang_list_albums['total_pictures']}", $link_pic_count, $count + $link_pic_count) : "");
                $alb_list[$alb_idx]['album_adm_menu'] = (GALLERY_ADMIN_MODE || (USER_ADMIN_MODE && $cat == $this->auth->isDefined("USER_ID") + FIRST_USER_CAT)) ? $this->__htmlAlbummenu($alb_thumb['aid']) : '';
            }
        }
        $albStats[$alb_idx]['statistics'] = sprintf($lang_album_list['album_on_page'], $nbAlb, $this->totalPages['catAlb']);
        return array($alb_list, $albStats);
    }

    /**
     * listAlbums()
     *
     * Get a list of albums
     */
    /**
     * cpgIndexData::listAlbums()
     *
     * @return
     */
    function listAlbums()
    {
        global $USER, $lastup_date_fmt;
        global $lang_list_albums, $lang_errors, $lang_album_list;

        $cpg_show_private_album = $this->config->conf['allow_private_albums'] ? $this->config->conf['show_private'] : true;

        $alb_per_page = $this->config->conf['albums_per_page'];
        $maxTab = $this->config->conf['max_tabs'];

        $album_filter = '';
        $pic_filter = '';
        $pic_subquery = '';

        if (!empty($this->auth->forbiddenSet) && !$cpg_show_private_album) {
            $album_filter = ' and ' . str_replace('p.', 'a.', $this->auth->forbiddenSet);
            $pic_filter = ' and ' . $this->auth->forbiddenSet;
        }

        if ($this->album) {
            $where = "a.parent ='" . $this->album . "'";
        } else {
            $where = "category = '" . $this->cat . "' AND a.parent ='0'";
        }
        /**
         * fetch the albums from admin allowed categories
         */
        if (($this->cat > 10000) && empty($this->album)) {
           $uid = (int) ($this->cat - 10000);
           $where.= "OR user_id = '" .$uid. "'";
        }

        $sql = "SELECT count(aid) FROM {$this->config->conf['TABLE_ALBUMS']} as a WHERE " . $where . $album_filter;
        $this->db->query($sql);
        $nbEnr = $this->db->fetchRow();
        $nbAlb = $nbEnr[0];
        if (!$nbAlb) return;

        $this->totalPages['albums'] = ceil($nbAlb / $alb_per_page);

        if ($this->page > $this->totalPages['albums']) {
            $this->page = 1;
        }
        // $this->currentPage["albums"] = $PAGE;
        $lower_limit = ($this->page - 1) * $alb_per_page;
        $upper_limit = min($nbAlb, $this->page * $alb_per_page);
        $limit = "LIMIT " . $lower_limit . "," . ($upper_limit - $lower_limit);

        $sql = 'SELECT a.aid, a.title, a.description, category, visibility, user_id, filepath, ' . 'filename, url_prefix, pwidth, pheight ' . 'FROM ' . $this->config->conf['TABLE_ALBUMS'] . ' as a ' . 'LEFT JOIN ' . $this->config->conf['TABLE_PICTURES'] . ' as p ' . 'ON a.thumb=p.pid ' . 'WHERE ' . $where . $album_filter . ' ORDER BY a.pos ' . $limit;

        $this->db->query($sql);
        $alb_thumbs = $this->db->fetchRowSet();

        $this->dispAlbumCount = count($alb_thumbs);
        $album_set = '';
        foreach($alb_thumbs as $value) {
            $album_set .= $value['aid'] . ', ';
        }
        $album_set = '(' . substr($album_set, 0, -2) . ')';
        // This query will fetch album stats and keyword for the albums
        $sql = "SELECT p.aid, count(p.pid) as pic_count, max(p.pid) as last_pid, max(p.ctime) as last_upload, a.keyword " . "FROM {$this->config->conf['TABLE_PICTURES']} AS p, {$this->config->conf['TABLE_ALBUMS']} AS a " . "WHERE p.aid IN $album_set AND
              p.aid = a.aid AND
              p.approved = 'YES' " . "GROUP BY p.aid";

        $this->db->query($sql);
        $alb_stats = $this->db->fetchRowSet();

        foreach($alb_stats as $key => $value) {
            $cross_ref[$value['aid']] = &$alb_stats[$key];
            if ($this->config->conf['link_pic_count'] == 1) {
                if (!empty($value['keyword'])) {
                    $query = "SELECT count(pid) AS link_pic_count
                        FROM {$this->config->conf['TABLE_PICTURES']}
                          WHERE aid != {$value['aid']} AND
                          keywords LIKE '%{$value['keyword']}%' AND
                          approved = 'YES'";

                    $this->db->query($query);
                    $link_stat = $this->db->fetchRow();
                    $alb_stats[$key]['link_pic_count'] = $link_stat['link_pic_count'];
                }
            }
        }

        for ($alb_idx = 0; $alb_idx < $this->dispAlbumCount; $alb_idx++) {
            $alb_thumb = &$alb_thumbs[$alb_idx];
            $aid = $alb_thumb['aid'];

            if (isset($cross_ref[$aid])) {
                $alb_stat = $cross_ref[$aid];
                $count = $alb_stat['pic_count'];
            } else {
                $alb_stat = array();
                $count = 0;
            }

            /**
             * Get the parent category name of the current picture. We need this for short URL's
             */
            if ($this->config->conf['short_url'] && $alb_thumb['category'] != 0) {
                $query = "SELECT name FROM {$this->config->conf['TABLE_CATEGORIES']} WHERE cid = '{$alb_thumb['category']}'";
                $this->db->query($query);
                $row = $this->db->fetchRow();
                $this->albList[$alb_idx]['catName'] = $row['name'];
            } else {
                $this->albList[$alb_idx]['catName'] = "";
            }
            // Inserts a thumbnail if the album contains 1 or more images
            $visibility = $alb_thumb['visibility'];
            if ((is_array($this->auth->forbiddenSetData) && !in_array($aid, $this->auth->forbiddenSetData)) || $this->config->conf['allow_private_albums'] == 0) {
                if ($count > 0) {
                    if ($alb_thumb['filename']) {
                        $picture = &$alb_thumb;
                    } else {
                        $sql = "SELECT filepath, filename, url_prefix, pwidth, pheight " . "FROM {$this->config->conf['TABLE_PICTURES']} " . "WHERE pid='{$alb_stat['last_pid']}'";

                        $this->db->query($sql);
                        $picture = $this->db->fetchRow();
                    }
                    $pic_url = $this->__getPicUrl($picture, 'thumb');
                    if (!is_image($picture['filename'])) {
                        $image_info = getimagesize($pic_url);
                        $picture['pwidth'] = $image_info[0];
                        $picture['pheight'] = $image_info[1];
                    }
                    $image_size = $this->computeImgSize($picture['pwidth'], $picture['pheight'], $this->config->conf['alb_list_thumb_size']);
                    $this->albList[$alb_idx]['thumb_pic'] = "<img src=\"" . $this->config->conf['ecards_more_pic_target'] . $pic_url . "\" class=\"image\" {$image_size['geom']} border=\"0\" alt=\"{$picture['filename']}\" />";
                } else { // Inserts an empty thumbnail if the album contains 0 images
                    // $image_size = compute_img_size(100, 75, $this->config->conf['alb_list_thumb_size']);
                    $cpg_nopic_data = $this->cpgGetSystemThumb('nopic.jpg', $alb_thumb['category']);
                    $this->albList[$alb_idx]['thumb_pic'] = '<img src="' . $this->config->conf['ecards_more_pic_target'] . $cpg_nopic_data['thumb'] . '" ' . $cpg_nopic_data['whole'] . ' class="image" border="0" alt="" />';
                }
            } elseif ($this->config->conf['show_private']) {
                // $image_size = $this->computeImgSize(100, 75, $this->config->conf['alb_list_thumb_size']);
                $cpg_privatepic_data = $this->cpgGetSystemThumb('private.jpg', $alb_thumb['category']);
                $this->albList[$alb_idx]['thumb_pic'] = '<img src="' . $this->config->conf['ecards_more_pic_target'] . $cpg_privatepic_data['thumb'] . '" ' . $cpg_privatepic_data['whole'] . ' class="image" border="0" alt="" />';
            }
            // Prepare everything
            if (!in_array($aid, $this->auth->forbiddenSetData) || $this->config->conf['allow_private_albums'] == 0) {
                $last_upload_date = $count ? cpgUtils::localisedDate($alb_stat['last_upload'], $lastup_date_fmt) : '';
                $link_pic_count = !empty($alb_stat['link_pic_count']) ? $alb_stat['link_pic_count'] : 0;
                $this->albList[$alb_idx]['aid'] = $alb_thumb['aid'];
                $this->albList[$alb_idx]['album_owner'] = ($alb_thumb['user_id'] == $this->auth->isDefined('USER_ID')) ? 1 : '';
                $this->albList[$alb_idx]['album_title'] = $alb_thumb['title'];
                $this->albList[$alb_idx]['album_desc'] = cpgUtils::bbDecode($alb_thumb['description']);
                $this->albList[$alb_idx]['pic_count'] = $count;
                $this->albList[$alb_idx]['last_upl'] = $last_upload_date;
                $this->albList[$alb_idx]['link_pic_count'] = $link_pic_count;
                $this->albList[$alb_idx]['album_info'] = sprintf($lang_list_albums['n_pictures'], $count) . ($count ? sprintf($lang_list_albums['last_added'], $last_upload_date) : "") . (($this->config->conf['link_pic_count'] && $link_pic_count > 0) ? sprintf(", {$lang_list_albums['n_link_pictures']},  {$lang_list_albums['total_pictures']}", $link_pic_count, $count + $link_pic_count) : "");
                $this->albList[$alb_idx]['album_adm_menu'] = (GALLERY_ADMIN_MODE || (USER_ADMIN_MODE && $this->cat == $this->auth->isDefined("USER_ID") + FIRST_USER_CAT)) ? $this->__htmlAlbummenu($alb_thumb['aid']) : ' ';
            } elseif ($this->config->conf['show_private']) { // uncomment this else block to show private album description
                $last_upload_date = $count ? cpgUtils::localisedDate($alb_stat['last_upload'], $lastup_date_fmt) : '';
                $link_pic_count = !empty($alb_stat['link_pic_count']) ? $alb_stat['link_pic_count'] : 0;
                $this->albList[$alb_idx]['aid'] = $alb_thumb['aid'];
                $this->albList[$alb_idx]['album_owner'] = ($alb_thumb['user_id'] == $this->auth->isDefined('USER_ID')) ? 1 : '';
                $this->albList[$alb_idx]['album_title'] = $alb_thumb['title'];
                $this->albList[$alb_idx]['album_desc'] = cpgUtils::bbDecode($alb_thumb['description']);
                $this->albList[$alb_idx]['pic_count'] = $count;
                $this->albList[$alb_idx]['last_upl'] = $last_upload_date;
                $this->albList[$alb_idx]['link_pic_count'] = $link_pic_count;
                $this->albList[$alb_idx]['album_info'] = sprintf($lang_list_albums['n_pictures'], $count) . ($count ? sprintf($lang_list_albums['last_added'], $last_upload_date) : "") . (($this->config->conf['link_pic_count'] && $link_pic_count > 0) ? sprintf(", {$lang_list_albums['n_link_pictures']},   {$lang_list_albums['total_pictures']}", $link_pic_count, $count + $link_pic_count) : "");
                $this->albList[$alb_idx]['album_adm_menu'] = (GALLERY_ADMIN_MODE || (USER_ADMIN_MODE && $this->cat == $this->auth->isDefined("USER_ID") + FIRST_USER_CAT)) ? $this->__htmlAlbummenu($alb_thumb['aid']) : ' ';
            }
            $this->albList[$alb_idx]['statistics'] = sprintf($lang_album_list['album_on_page'], $nbAlb, $this->totalPages['albums']);
        }
    }

    /**
     * cpgIndexData::listUsers()
     *
     * @return
     */
    function listUsers()
    {
        global $PAGE;
        global $lang_list_users, $lang_errors, $lang_album_list, $lang_continue;

        $cpg_show_private_album = $this->config->conf['allow_private_albums'] ? $this->config->conf['show_private'] : true;

        $result = $this->auth->list_users_query($user_count);

        if (!$user_count) {
            cpgUtils::msgBox($lang_list_users['user_list'], $lang_list_users['no_user_gal'], $lang_continue, 'index.php', '100%');
            return;
        }

        $user_per_page = $this->config->conf['thumbcols'] * $this->config->conf['thumbrows'];
        $this->totalPages['usrAlb'] = ceil($user_count / $user_per_page);
        if ($PAGE > $this->totalPages['usrAlb']) $PAGE = 1;
        $this->currentPage['usrAlb'] = $PAGE;
        $lower_limit = ($PAGE-1) * $user_per_page;
        $upper_limit = min($user_count, $PAGE * $user_per_page);
        $row_count = $upper_limit - $lower_limit;

        $rowset = $this->auth->list_users_retrieve_data($result, $lower_limit, $row_count);

        $this->usrList = array();
        foreach ($rowset as $user) {
            $cpg_nopic_data = $this->cpgGetSystemThumb('nopic.jpg', $user['user_id']);
            $user_thumb = $cpg_nopic_data['thumb'] . '" ' . $cpg_nopic_data['whole'];
            $user_pic_count = $user['pic_count'];
            $user_thumb_pid = $user['thumb_pid'];
            $user_album_count = $user['alb_count'];

            if ($user_pic_count) {
                $sql = "SELECT filepath, filename, url_prefix, pwidth, pheight " . "FROM {$this->config->conf['TABLE_PICTURES']} " . "WHERE pid='$user_thumb_pid'";

                $this->db->query($sql);
                if ($this->db->nf() > 0) {
                    $picture = $this->db->fetchRow();
                    $pic_url = $this->__getPicUrl($picture, 'thumb');
                    if (!is_image($picture['filename'])) {
                        $image_info = getimagesize($pic_url);
                        $picture['pwidth'] = $image_info[0];
                        $picture['pheight'] = $image_info[1];
                    }
                    $image_size = $this->computeImgSize($picture['pwidth'], $picture['pheight'], $this->config->conf['alb_list_thumb_size']);
                    $user_thumb = $pic_url;
                }
            }

            $albums_txt = sprintf($lang_list_users['n_albums'], $user_album_count);
            $pictures_txt = sprintf($lang_list_users['n_pics'], $user_pic_count);

            $params = array('{USER_NAME}' => $user['user_name'],
                '{USER_ID}' => $user['user_id'],
                '{ALBUMS}' => $albums_txt,
                '{PICTURES}' => $pictures_txt,
                );

            $this->usrList[] = array('cat' => FIRST_USER_CAT + $user['user_id'],
                'image' => $this->config->conf['ecards_more_pic_target'] . $user_thumb,
                'caption' => array('user' => $user['user_name'], 'userid' => $user['user_id'], 'albums' => $albums_txt, 'pictures' => $pictures_txt),
                'statistics' => sprintf($lang_album_list['album_on_page'], $user_count, $this->totalPages['usrAlb'])
                );
        }
    }
}

?>
