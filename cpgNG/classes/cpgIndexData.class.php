<?php
/**
 * Index class
 */
class cpgIndexData {
  var $catData = array();
  var $catAlbList = array();
  var $albList = array();
  var $usrList = array();
  var $statistics;
  var $cat;
  var $page;
  var $totalPages = array();
  var $currentPage = array();
  var $dispAlbumCount;

  /**
   * Constructor
   */
  function cpgIndexData($cat, $page)
  {
    $this->cat = (int)$cat;
    $this->page = $page;
  }

  /**
   * __htmlAlbummenu()
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
   *  List all categories
   *
   * @return void
   */
  function getCatList()
  {
      global $CONFIG, $ALBUM_SET, $CURRENT_CAT_NAME, $BREADCRUMB_TEXT, $STATS_IN_ALB_LIST, $FORBIDDEN_SET;
      global $HIDE_USER_CAT, $cpg_show_private_album;
      global $lang_list_categories, $lang_errors;

      $album_set_array = array();
      $album_set_array = $this->__getSubcatData($this->cat, $album_set_array, $CONFIG['subcat_level']);
      $album_filter = '';
      $pic_filter = '';
      if (!empty($FORBIDDEN_SET) && !$cpg_show_private_album) {
          $album_filter = ' and ' . str_replace('p.', 'a.', $FORBIDDEN_SET);
          $pic_filter = ' and ' . $FORBIDDEN_SET;
      }
      // Add the albums in the current category to the album set
      if ($cat == USER_GAL_CAT) {
          $sql = "SELECT aid FROM {$CONFIG['TABLE_ALBUMS']} as a WHERE category >= " . FIRST_USER_CAT . $album_filter;
          $result = cpg_db_query($sql);
      } else {
          $sql = "SELECT aid FROM {$CONFIG['TABLE_ALBUMS']} as a WHERE category = '$cat'" . $album_filter;
          $result = cpg_db_query($sql);
      }
      while ($row = mysql_fetch_array($result)) {
          $album_set_array[] = $row['aid'];
      } // while
      mysql_free_result($result);
      // }
      if (count($album_set_array) && $cat) {
          $set = '';
          foreach ($album_set_array as $album) $set .= $album . ',';
          $set = substr($set, 0, -1);
          $current_album_set = "AND aid IN ($set) ";
          $ALBUM_SET .= $current_album_set;
      } elseif ($cat) {
          $current_album_set = "AND aid IN (-1) ";
          $ALBUM_SET .= $current_album_set;
      }
      // Gather gallery statistics
      if ($cat == 0) {
          $query = "SELECT count(aid) FROM {$CONFIG['TABLE_ALBUMS']} as a WHERE 1" . $album_filter;
          $result = cpg_db_query($query);
          $nbEnr = mysql_fetch_array($result);
          $album_count = $nbEnr[0];
          mysql_free_result($result);

          $sql = "SELECT count(pid) FROM {$CONFIG['TABLE_PICTURES']} as p " . 'LEFT JOIN ' . $CONFIG['TABLE_ALBUMS'] . ' as a ' . 'ON a.aid=p.aid ' . 'WHERE 1' . $pic_filter;
          $result = cpg_db_query($sql);
          $nbEnr = mysql_fetch_array($result);
          $picture_count = $nbEnr[0];
          mysql_free_result($result);

          $sql = "SELECT count(msg_id) FROM {$CONFIG['TABLE_COMMENTS']} as c " . 'LEFT JOIN ' . $CONFIG['TABLE_PICTURES'] . ' as p ' . 'ON c.pid=p.pid ' . 'LEFT JOIN ' . $CONFIG['TABLE_ALBUMS'] . ' as a ' . 'ON a.aid=p.aid ' . 'WHERE 1' . $pic_filter;
          $result = cpg_db_query($sql);
          $nbEnr = mysql_fetch_array($result);
          $comment_count = $nbEnr[0];
          mysql_free_result($result);

          $sql = "SELECT count(cid) FROM {$CONFIG['TABLE_CATEGORIES']} WHERE 1";
          $result = cpg_db_query($sql);
          $nbEnr = mysql_fetch_array($result);
          $cat_count = $nbEnr[0] - $HIDE_USER_CAT;
          mysql_free_result($result);

          $sql = "SELECT sum(hits) FROM {$CONFIG['TABLE_PICTURES']} as p " . 'LEFT JOIN ' . $CONFIG['TABLE_ALBUMS'] . ' as a ' . 'ON p.aid=a.aid ' . 'WHERE 1' . $pic_filter;
          $result = cpg_db_query($sql);
          $nbEnr = mysql_fetch_array($result);
          $hit_count = (int)$nbEnr[0];
          mysql_free_result($result);

          if (count($this->catData)) {
              $this->statistics = strtr($lang_list_categories['stat1'], array('[pictures]' => $picture_count,
                      '[albums]' => $album_count,
                      '[cat]' => $cat_count,
                      '[comments]' => $comment_count,
                      '[views]' => $hit_count));
          } else {
              $STATS_IN_ALB_LIST = true;
              $this->statistics = strtr($lang_list_categories['stat3'], array('[pictures]' => $picture_count,
                      '[albums]' => $album_count,
                      '[comments]' => $comment_count,
                      '[views]' => $hit_count));
          }
      } elseif ($cat >= FIRST_USER_CAT && $ALBUM_SET) {
          $query = "SELECT count(aid) FROM {$CONFIG['TABLE_ALBUMS']} WHERE 1 $current_album_set";
          $result = cpg_db_query($query);
          $nbEnr = mysql_fetch_array($result);
          $album_count = $nbEnr[0];
          mysql_free_result($result);

          $query = "SELECT count(pid) FROM {$CONFIG['TABLE_PICTURES']} WHERE 1 $current_album_set";
          $result = cpg_db_query($query);
          $nbEnr = mysql_fetch_array($result);
          $picture_count = $nbEnr[0];
          mysql_free_result($result);

          $query = "SELECT sum(hits) FROM {$CONFIG['TABLE_PICTURES']} WHERE 1 $current_album_set";
          $result = cpg_db_query($query);
          $nbEnr = mysql_fetch_array($result);
          $hit_count = (int)$nbEnr[0];
          mysql_free_result($result);

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
   * @param array $this->catData
   * @param array $album_set_array
   * @param integer $level Level being displayed
   * @param string $ident String to use as indentation for Categories
   * @return $album_set_array
   */
  function __getSubcatData($parent, $album_set_array, $level, $ident = '')
  {
      global $CONFIG, $HIDE_USER_CAT, $FORBIDDEN_SET, $cpg_show_private_album;

      $album_filter = '';
      $pic_filter = '';
      if (!empty($FORBIDDEN_SET) && !$cpg_show_private_album) {
          $album_filter = ' and ' . str_replace('p.', 'a.', $FORBIDDEN_SET);
          $pic_filter = ' and ' . str_replace('p.', $CONFIG['TABLE_PICTURES'] . '.', $FORBIDDEN_SET);
      }
      if ($CONFIG['categories_alpha_sort'] == 1) {$cat_sort_order = 'name';}else{$cat_sort_order = 'pos';}
      $result = cpg_db_query("SELECT cid, name, description, thumb FROM {$CONFIG['TABLE_CATEGORIES']} WHERE parent = '$parent'  ORDER BY $cat_sort_order");

      if (mysql_num_rows($result) > 0) {
          $rowset = cpg_db_fetch_rowset($result);
          foreach ($rowset as $subcat) {
              if ($subcat['cid'] == USER_GAL_CAT) {
                  $sql = "SELECT aid FROM {$CONFIG['TABLE_ALBUMS']} as a WHERE category>=" . FIRST_USER_CAT . $album_filter;
                  $result = cpg_db_query($sql);
                  $album_count = mysql_num_rows($result);
                  while ($row = mysql_fetch_array($result)) {
                      $album_set_array[] = $row['aid'];
                  } // while
                  mysql_free_result($result);

                  $result = cpg_db_query("SELECT count(*) FROM {$CONFIG['TABLE_PICTURES']} as p, {$CONFIG['TABLE_ALBUMS']} as a WHERE p.aid = a.aid AND category >= " . FIRST_USER_CAT . $album_filter);
                  $nbEnr = mysql_fetch_array($result);
                  $pic_count = $nbEnr[0];

                  $subcat['description'] = preg_replace("/<br.*?>[\r\n]*/i", '<br />' . $ident , bb_decode($subcat['description']));

                  $link = $ident . "<a href=\"indexNew.php?cat={$subcat['cid']}\">{$subcat['name']}</a>";
                  if ($album_count) {
                      $this->catData[] = array($link, $ident . $subcat['description'], $album_count, $pic_count);
                      $HIDE_USER_CAT = 0;
                  } else {
                      $HIDE_USER_CAT = 1;
                  }
              } else {
                  $unaliased_album_filter = str_replace('a.', '', $album_filter);
                  $result = cpg_db_query("SELECT aid FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = {$subcat['cid']}" . $unaliased_album_filter);
                  $album_count = mysql_num_rows($result);
                  while ($row = mysql_fetch_array($result)) {
                      $album_set_array[] = $row['aid'];
                  } // while
                  mysql_free_result($result);

                  $result = cpg_db_query("SELECT count(*) FROM {$CONFIG['TABLE_PICTURES']} as p, {$CONFIG['TABLE_ALBUMS']} as a WHERE p.aid = a.aid AND category = {$subcat['cid']}" . $album_filter);
                  $nbEnr = mysql_fetch_array($result);
                  mysql_free_result($result);
                  $pic_count = $nbEnr[0];
                  if ($subcat['thumb'] > 0) {
                      $sql = "SELECT filepath, filename, url_prefix, pwidth, pheight " . "FROM {$CONFIG['TABLE_PICTURES']} " . "WHERE pid='{$subcat['thumb']}'" . $pic_filter;
                      $result = cpg_db_query($sql);
                      if (mysql_num_rows($result)) {
                          $picture = mysql_fetch_array($result);
                          mysql_free_result($result);
                          $pic_url = get_pic_url($picture, 'thumb');
                          if (!is_image($picture['filename'])) {
                              $image_info = getimagesize($pic_url);
                              $picture['pwidth'] = $image_info[0];
                              $picture['pheight'] = $image_info[1];
                          }
                          $image_size = compute_img_size($picture['pwidth'], $picture['pheight'], $CONFIG['alb_list_thumb_size']);
                          $user_thumb = "<img src=\"" . $pic_url . "\" class=\"image\" {$image_size['geom']} border=\"0\" alt=\"\" />";
                          $user_thumb = "<a href=\"indexNew.php?cat={$subcat['cid']}\">" . $user_thumb . "</a>";
                      }
                  } else {
                      $user_thumb = "";
                  }
                  $subcat['name'] = $subcat['name'];
                  $subcat['description'] = preg_replace("/<br.*?>[\r\n]*/i", '<br />', bb_decode($subcat['description']));
                  $link = "<a href=\"indexNew.php?cat={$subcat['cid']}\">{$subcat['name']}</a>";
                  $user_thumb = $ident . $user_thumb;
                  if ($pic_count == 0 && $album_count == 0) {
                                          $user_thumb = $ident;
                      $this->catData[] = array($link, $subcat['description'], 'cat_thumb' => $user_thumb);
                  } else {
                      // Check if you need to show subcat_level
                      if ($level == $CONFIG['subcat_level']) {
                           $tmpArr = $this->__listCatAlbums($subcat['cid']);
                      } else {
                          $cat_albums = '';
                      }
                      $this->catData[] = array($link, $subcat['description'], $album_count, $pic_count, 'cat_albums' => $tmpArr[0], 'cat_thumb' => $user_thumb, 'albStats' => $tmpArr[1]);
                  }
              }
              if ($level > 1) {
                  $this->__getSubcatData($subcat['cid'], $album_set_array, $level -1, $ident . "</td><td><img src=\"images/spacer.gif\" width=\"20\" height=\"1\" border=\"0\" alt=\"\" /></td><td>");
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
* @param integer $cat Category id for which albums are needed
*/
function __listCatAlbums($cat = 0)
{
    global $CONFIG, $USER, $lastup_date_fmt, $USER_DATA, $FORBIDDEN_SET, $FORBIDDEN_SET_DATA, $cpg_show_private_album;
    global $lang_list_albums, $lang_errors, $lang_album_list;

    $PAGE = 1;
    if ($cat == 0) {
        return '';
    }

    $cat_owner_id = ($cat > 10000)?(10000 - $cat):(10001);
    $cpg_nopic_data = cpg_get_system_thumb('nopic.jpg', $cat_owner_id);
    $cpg_privatepic_data = cpg_get_system_thumb('private.jpg', $cat_owner_id);

    $alb_per_page = $CONFIG['albums_per_page'];
    $maxTab = $CONFIG['max_tabs'];

    $album_filter = '';
    $pic_filter = '';
    if (!empty($FORBIDDEN_SET) && !$cpg_show_private_album) {
        $album_filter = ' and ' . str_replace('p.', 'a.', $FORBIDDEN_SET);
        $pic_filter = ' and ' . $FORBIDDEN_SET;
    }

    $sql = "SELECT count(aid) FROM {$CONFIG['TABLE_ALBUMS']} as a WHERE category = '$cat'" . $album_filter;
    $result = cpg_db_query($sql);
    $nbEnr = mysql_fetch_array($result);
    $nbAlb = $nbEnr[0];
    mysql_free_result($result);

    if ($nbAlb == 0) {
        return;
    }

    $this->totalPages["catAlb"] = ceil($nbAlb / $alb_per_page);

    if ($PAGE > $totalPages) $PAGE = 1;
    $this->currentPage["catAlb"] = $PAGE;
    $lower_limit = ($PAGE-1) * $alb_per_page;
    $upper_limit = min($nbAlb, $PAGE * $alb_per_page);
    $limit = "LIMIT " . $lower_limit . "," . ($upper_limit - $lower_limit);

    $sql = 'SELECT a.aid, a.title, a.description, visibility, filepath, ' . 'filename, url_prefix, pwidth, pheight ' . 'FROM ' . $CONFIG['TABLE_ALBUMS'] . ' as a ' . 'LEFT JOIN ' . $CONFIG['TABLE_PICTURES'] . ' as p ' . 'ON a.thumb=p.pid ' . 'WHERE category=' . $cat . $album_filter . ' ORDER BY a.pos ' . $limit;

    $alb_thumbs_q = cpg_db_query($sql);
    $alb_thumbs = cpg_db_fetch_rowset($alb_thumbs_q);
    mysql_free_result($alb_thumbs_q);

    $disp_album_count = count($alb_thumbs);
    $album_set = '';
    foreach($alb_thumbs as $value) {
        $album_set .= $value['aid'] . ', ';
    }
    $album_set = '(' . substr($album_set, 0, -2) . ')';

    //This query will fetch album stats and keyword for the albums
    $sql = "SELECT p.aid, count(p.pid) as pic_count, max(p.pid) as last_pid, max(p.ctime) as last_upload, a.keyword " .
            "FROM {$CONFIG['TABLE_PICTURES']} AS p, {$CONFIG['TABLE_ALBUMS']} AS a " .
            "WHERE p.aid IN $album_set AND
             p.aid = a.aid AND
            p.approved = 'YES' " . "GROUP BY p.aid";
    $alb_stats_q = cpg_db_query($sql);
    $alb_stats = cpg_db_fetch_rowset($alb_stats_q);
    mysql_free_result($alb_stats_q);

    foreach($alb_stats as $key => $value) {
        $cross_ref[$value['aid']] = &$alb_stats[$key];
        if ($CONFIG['link_pic_count'] == 1) {
          if (!empty($value['keyword'])) {
            $query = "SELECT count(pid) AS link_pic_count
                      FROM {$CONFIG['TABLE_PICTURES']}
                        WHERE aid != {$value['aid']} AND
                        keywords LIKE '%{$value['keyword']}%' AND
                        approved = 'YES'";
            $result = cpg_db_query($query);
            $link_stat = mysql_fetch_array ($result);
            mysql_free_result($result);
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
        if (!in_array($aid,$FORBIDDEN_SET_DATA) || $CONFIG['allow_private_albums'] == 0) { //test for visibility
            if ($count > 0) { // Inserts a thumbnail if the album contains 1 or more images
                if ($alb_thumb['filename']) {
                    $picture = &$alb_thumb;
                } else {
                    $sql = "SELECT filepath, filename, url_prefix, pwidth, pheight " . "FROM {$CONFIG['TABLE_PICTURES']} " . "WHERE pid='{$alb_stat['last_pid']}'";
                    $result = cpg_db_query($sql);
                    $picture = mysql_fetch_array($result);
                    mysql_free_result($result);
                }
                $pic_url = get_pic_url($picture, 'thumb');
                if (!is_image($picture['filename'])) {
                    $image_info = getimagesize($pic_url);
                    $picture['pwidth'] = $image_info[0];
                    $picture['pheight'] = $image_info[1];
                }
                $image_size = compute_img_size($picture['pwidth'], $picture['pheight'], $CONFIG['alb_list_thumb_size']);
                $alb_list[$alb_idx]['thumb_pic'] = "<img src=\"" . $pic_url . "\" class=\"image\" {$image_size['geom']} border=\"0\" alt=\"{$picture['filename']}\" />";
            } else { // Inserts an empty thumbnail if the album contains 0 images
                $alb_list[$alb_idx]['thumb_pic'] = '<img src="' . $cpg_nopic_data['thumb'] . '" ' . $cpg_nopic_data['whole'] . ' class="image" border="0" alt="" />';
            }
        } elseif ($CONFIG['show_private']) {
            // $image_size = compute_img_size(100, 75, $CONFIG['alb_list_thumb_size']);
            $alb_list[$alb_idx]['thumb_pic'] = '<img src="' . $cpg_privatepic_data['thumb'] . '" ' . $cpg_privatepic_data['whole'] . ' class="image" border="0" alt="" />';
        }
        // Prepare everything
        if (!in_array($aid,$FORBIDDEN_SET_DATA) || $CONFIG['allow_private_albums'] == 0) {
            $last_upload_date = $count ? localised_date($alb_stat['last_upload'], $lastup_date_fmt) : '';
            $link_pic_count = !empty($alb_stat['link_pic_count']) ? $alb_stat['link_pic_count'] : 0;
            $alb_list[$alb_idx]['aid'] = $alb_thumb['aid'];
            $alb_list[$alb_idx]['album_title'] = $alb_thumb['title'];
            $alb_list[$alb_idx]['album_desc'] = bb_decode($alb_thumb['description']);
            $alb_list[$alb_idx]['pic_count'] = $count;
            $alb_list[$alb_idx]['last_upl'] = $last_upload_date;
            $alb_list[$alb_idx]['album_info'] = sprintf($lang_list_albums['n_pictures'], $count) . ($count ? sprintf($lang_list_albums['last_added'], $last_upload_date) : "") . (($CONFIG['link_pic_count'] && $link_pic_count > 0)  ? sprintf(", {$lang_list_albums['n_link_pictures']}, {$lang_list_albums['total_pictures']}", $link_pic_count, $count + $link_pic_count) : "");
            $alb_list[$alb_idx]['album_adm_menu'] = (GALLERY_ADMIN_MODE || (USER_ADMIN_MODE && $cat == USER_ID + FIRST_USER_CAT)) ? $this->__htmlAlbummenu($alb_thumb['aid']) : '';
        } elseif ($CONFIG['show_private']) { // uncomment this else block to show private album description
            $last_upload_date = $count ? localised_date($alb_stat['last_upload'], $lastup_date_fmt) : '';
            $link_pic_count = !empty($alb_stat['link_pic_count']) ? $alb_stat['link_pic_count'] : 0;
            $alb_list[$alb_idx]['aid'] = $alb_thumb['aid'];
            $alb_list[$alb_idx]['album_title'] = $alb_thumb['title'];
            $alb_list[$alb_idx]['album_desc'] = bb_decode($alb_thumb['description']);
            $alb_list[$alb_idx]['pic_count'] = $count;
            $alb_list[$alb_idx]['last_upl'] = $last_upload_date;
            $alb_list[$alb_idx]['album_info'] = sprintf($lang_list_albums['n_pictures'], $count) . ($count ? sprintf($lang_list_albums['last_added'], $last_upload_date) : "") . (($CONFIG['link_pic_count'] && $link_pic_count > 0 )? sprintf(", {$lang_list_albums['n_link_pictures']}, {$lang_list_albums['total_pictures']}", $link_pic_count, $count + $link_pic_count) : "");
            $alb_list[$alb_idx]['album_adm_menu'] = (GALLERY_ADMIN_MODE || (USER_ADMIN_MODE && $cat == USER_ID + FIRST_USER_CAT)) ? $this->__htmlAlbummenu($alb_thumb['aid']) : '';
        }
    }
    $albStats[$alb_idx]["statistics"] = sprintf($lang_album_list["album_on_page"], $nbAlb, $this->totalPages["catAlb"]);
    return array($alb_list, $albStats);
  }

  /**
   * listAlbums()
   *
   * Get a list of albums
   */
  function listAlbums()
  {
      global $CONFIG, $USER, $USER_DATA, $lastup_date_fmt, $FORBIDDEN_SET, $FORBIDDEN_SET_DATA;
      //global $cat;
      global $lang_list_albums, $lang_errors, $cpg_show_private_album, $lang_album_list;

      $alb_per_page = $CONFIG['albums_per_page'];
      $maxTab = $CONFIG['max_tabs'];

      $album_filter = '';
      $pic_filter = '';
      $pic_subquery = '';

      if (!empty($FORBIDDEN_SET) && !$cpg_show_private_album) {
          $album_filter = ' and ' . str_replace('p.', 'a.', $FORBIDDEN_SET);
          $pic_filter = ' and ' . $FORBIDDEN_SET;
      }

      $sql = "SELECT count(*) FROM {$CONFIG['TABLE_ALBUMS']} as a WHERE category = '".$this->cat."'" . $album_filter;
      $result = cpg_db_query($sql);
      $nbEnr = mysql_fetch_array($result);
      $nbAlb = $nbEnr[0];
      mysql_free_result($result);

      if (!$nbAlb) return;

      $this->totalPages["albums"] = ceil($nbAlb / $alb_per_page);

      if ($this->page > $this->totalPages["albums"]) {
        $this->page = 1;
      }
      //$this->currentPage["albums"] = $PAGE;
      $lower_limit = ($this->page - 1) * $alb_per_page;
      $upper_limit = min($nbAlb, $this->page * $alb_per_page);
      $limit = "LIMIT " . $lower_limit . "," . ($upper_limit - $lower_limit);

      $sql = 'SELECT a.aid, a.title, a.description, category, visibility, filepath, ' . 'filename, url_prefix, pwidth, pheight ' . 'FROM ' . $CONFIG['TABLE_ALBUMS'] . ' as a ' . 'LEFT JOIN ' . $CONFIG['TABLE_PICTURES'] . ' as p ' . 'ON a.thumb=p.pid ' . 'WHERE category=' . $this->cat . $album_filter . ' ORDER BY a.pos ' . $limit;
      $alb_thumbs_q = cpg_db_query($sql);
      $alb_thumbs = cpg_db_fetch_rowset($alb_thumbs_q);
      mysql_free_result($alb_thumbs_q);

      $this->dispAlbumCount = count($alb_thumbs);
      $album_set = '';
      foreach($alb_thumbs as $value) {
          $album_set .= $value['aid'] . ', ';
      }
      $album_set = '(' . substr($album_set, 0, -2) . ')';

      //This query will fetch album stats and keyword for the albums
      $sql = "SELECT p.aid, count(p.pid) as pic_count, max(p.pid) as last_pid, max(p.ctime) as last_upload, a.keyword " .
              "FROM {$CONFIG['TABLE_PICTURES']} AS p, {$CONFIG['TABLE_ALBUMS']} AS a " .
              "WHERE p.aid IN $album_set AND
              p.aid = a.aid AND
              p.approved = 'YES' " . "GROUP BY p.aid";
      $alb_stats_q = cpg_db_query($sql);
      $alb_stats = cpg_db_fetch_rowset($alb_stats_q);
      mysql_free_result($alb_stats_q);

      foreach($alb_stats as $key => $value) {
          $cross_ref[$value['aid']] = &$alb_stats[$key];
          if ($CONFIG['link_pic_count'] == 1) {
            if (!empty($value['keyword'])) {
              $query = "SELECT count(pid) AS link_pic_count
                        FROM {$CONFIG['TABLE_PICTURES']}
                          WHERE aid != {$value['aid']} AND
                          keywords LIKE '%{$value['keyword']}%' AND
                          approved = 'YES'";
              $result = cpg_db_query($query);
              $link_stat = mysql_fetch_array ($result);
              mysql_free_result($result);
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
          // Inserts a thumbnail if the album contains 1 or more images
          $visibility = $alb_thumb['visibility'];
          if (!in_array($aid,$FORBIDDEN_SET_DATA) || $CONFIG['allow_private_albums'] == 0) {
              if ($count > 0) {
                  if ($alb_thumb['filename']) {
                      $picture = &$alb_thumb;
                  } else {
                      $sql = "SELECT filepath, filename, url_prefix, pwidth, pheight " . "FROM {$CONFIG['TABLE_PICTURES']} " . "WHERE pid='{$alb_stat['last_pid']}'";
                      $result = cpg_db_query($sql);
                      $picture = mysql_fetch_array($result);
                      mysql_free_result($result);
                  }
                  $pic_url = get_pic_url($picture, 'thumb');
                  if (!is_image($picture['filename'])) {
                      $image_info = getimagesize($pic_url);
                      $picture['pwidth'] = $image_info[0];
                      $picture['pheight'] = $image_info[1];
                  }
                  $image_size = compute_img_size($picture['pwidth'], $picture['pheight'], $CONFIG['alb_list_thumb_size']);
                  $this->albList[$alb_idx]['thumb_pic'] = "<img src=\"" . $pic_url . "\" class=\"image\" {$image_size['geom']} border=\"0\" alt=\"{$picture['filename']}\" />";
              } else { // Inserts an empty thumbnail if the album contains 0 images
                  // $image_size = compute_img_size(100, 75, $CONFIG['alb_list_thumb_size']);
                  $cpg_nopic_data = cpg_get_system_thumb('nopic.jpg', $alb_thumb['category']);
                  $this->albList[$alb_idx]['thumb_pic'] = '<img src="' . $cpg_nopic_data['thumb'] . '" ' . $cpg_nopic_data['whole'] . ' class="image" border="0" alt="" />';
              }
          } elseif ($CONFIG['show_private']) {
              // $image_size = compute_img_size(100, 75, $CONFIG['alb_list_thumb_size']);
              $cpg_privatepic_data = cpg_get_system_thumb('private.jpg', $alb_thumb['category']);
              $this->albList[$alb_idx]['thumb_pic'] = '<img src="' . $cpg_privatepic_data['thumb'] . '" ' . $cpg_privatepic_data['whole'] . ' class="image" border="0" alt="" />';
          }
          // Prepare everything
          if (!in_array($aid,$FORBIDDEN_SET_DATA) || $CONFIG['allow_private_albums'] == 0) {
              $last_upload_date = $count ? localised_date($alb_stat['last_upload'], $lastup_date_fmt) : '';
              $link_pic_count = !empty($alb_stat['link_pic_count']) ? $alb_stat['link_pic_count'] : 0;
              $this->albList[$alb_idx]['aid'] = $alb_thumb['aid'];
              $this->albList[$alb_idx]['album_title'] = $alb_thumb['title'];
              $this->albList[$alb_idx]['album_desc'] = bb_decode($alb_thumb['description']);
              $this->albList[$alb_idx]['pic_count'] = $count;
              $this->albList[$alb_idx]['last_upl'] = $last_upload_date;
              $this->albList[$alb_idx]['link_pic_count'] = $link_pic_count;
              $this->albList[$alb_idx]['album_info'] = sprintf($lang_list_albums['n_pictures'], $count) . ($count ? sprintf($lang_list_albums['last_added'], $last_upload_date) : "") . (($CONFIG['link_pic_count'] && $link_pic_count > 0 ) ? sprintf(", {$lang_list_albums['n_link_pictures']},  {$lang_list_albums['total_pictures']}", $link_pic_count, $count + $link_pic_count) : "");
              $this->albList[$alb_idx]['album_adm_menu'] = (GALLERY_ADMIN_MODE || (USER_ADMIN_MODE && $this->cat == USER_ID + FIRST_USER_CAT)) ? $this->__htmlAlbummenu($alb_thumb['aid']) : ' ';
          } elseif ($CONFIG['show_private']) { // uncomment this else block to show private album description
              $last_upload_date = $count ? localised_date($alb_stat['last_upload'], $lastup_date_fmt) : '';
              $link_pic_count = !empty($alb_stat['link_pic_count']) ? $alb_stat['link_pic_count'] : 0;
              $this->albList[$alb_idx]['aid'] = $alb_thumb['aid'];
              $this->albList[$alb_idx]['album_title'] = $alb_thumb['title'];
              $this->albList[$alb_idx]['album_desc'] = bb_decode($alb_thumb['description']);
              $this->albList[$alb_idx]['pic_count'] = $count;
              $this->albList[$alb_idx]['last_upl'] = $last_upload_date;
              $this->albList[$alb_idx]['link_pic_count'] = $link_pic_count;
              $this->albList[$alb_idx]['album_info'] = sprintf($lang_list_albums['n_pictures'], $count) . ($count ? sprintf($lang_list_albums['last_added'], $last_upload_date) : "") . (($CONFIG['link_pic_count'] && $link_pic_count > 0 ) ? sprintf(", {$lang_list_albums['n_link_pictures']},   {$lang_list_albums['total_pictures']}", $link_pic_count, $count + $link_pic_count) : "");
              $this->albList[$alb_idx]['album_adm_menu'] = (GALLERY_ADMIN_MODE || (USER_ADMIN_MODE && $this->cat == USER_ID + FIRST_USER_CAT)) ? $this->__htmlAlbummenu($alb_thumb['aid']) : ' ';
          }
          $this->albList[$alb_idx]["statistics"] = sprintf($lang_album_list["album_on_page"], $nbAlb, $this->totalPages["albums"]);
      }
  }

  /**
   * listUsers()
   *
   * Get a list of users galleries
   */
  function listUsers()
  {
      global $CONFIG, $PAGE, $FORBIDDEN_SET;
      global $lang_list_users, $lang_errors, $template_user_list_info_box, $cpg_show_private_album, $lang_album_list;

      if (defined('UDB_INTEGRATION')) {
          $result = udb_list_users_query($user_count);
      } else {
          // Fixed correct album count DJMaze
          $sql = "SELECT user_id, " . "user_name, " . "COUNT(DISTINCT a.aid) as alb_count, " . "COUNT(DISTINCT pid) as pic_count, " . "MAX(pid) as thumb_pid " . "FROM {$CONFIG['TABLE_USERS']} AS u " . "INNER JOIN {$CONFIG['TABLE_ALBUMS']} AS a ON category = " . FIRST_USER_CAT . " + user_id " . "LEFT JOIN {$CONFIG['TABLE_PICTURES']} AS p ON (p.aid = a.aid AND approved = 'YES') ";
          if ($FORBIDDEN_SET != "" && !$cpg_show_private_album) $sql .= "WHERE $FORBIDDEN_SET ";
          $sql .= "GROUP BY user_id " . "ORDER BY user_name";

          $result = cpg_db_query($sql);

          $user_count = mysql_num_rows($result);
      }

      if (!$user_count) {
          msg_box($lang_list_users['user_list'], $lang_list_users['no_user_gal'], '', '', '100%');
          mysql_free_result($result);
          return;
      }

      $user_per_page = $CONFIG['thumbcols'] * $CONFIG['thumbrows'];
      $this->totalPages["usrAlb"] = ceil($user_count / $user_per_page);
      if ($PAGE > $this->totalPages["usrAlb"]) $PAGE = 1;
      $this->currentPage["usrAlb"] = $PAGE;
      $lower_limit = ($PAGE-1) * $user_per_page;
      $upper_limit = min($user_count, $PAGE * $user_per_page);
      $row_count = $upper_limit - $lower_limit;

      if (defined('UDB_INTEGRATION')) {
          $rowset = udb_list_users_retrieve_data($result, $lower_limit, $row_count);
      } else {
          $rowset = array();
          $i = 0;
          mysql_data_seek($result, $lower_limit);
          while (($row = mysql_fetch_array($result)) && ($i++ < $row_count)) $rowset[] = $row;
          mysql_free_result($result);
      }

      $this->usrList = array();
      foreach ($rowset as $user) {
          $cpg_nopic_data = cpg_get_system_thumb('nopic.jpg', $user['user_id']);
          $user_thumb = $cpg_nopic_data['thumb'] . '" ' . $cpg_nopic_data['whole'];
          $user_pic_count = $user['pic_count'];
          $user_thumb_pid = $user['thumb_pid'];
          $user_album_count = $user['alb_count'];

          if ($user_pic_count) {
              $sql = "SELECT filepath, filename, url_prefix, pwidth, pheight " . "FROM {$CONFIG['TABLE_PICTURES']} " . "WHERE pid='$user_thumb_pid'";
              $result = cpg_db_query($sql);
              if (mysql_num_rows($result)) {
                  $picture = mysql_fetch_array($result);
                  mysql_free_result($result);
                  $pic_url = get_pic_url($picture, 'thumb');
                  if (!is_image($picture['filename'])) {
                      $image_info = getimagesize($pic_url);
                      $picture['pwidth'] = $image_info[0];
                      $picture['pheight'] = $image_info[1];
                  }
                  $image_size = compute_img_size($picture['pwidth'], $picture['pheight'], $CONFIG['alb_list_thumb_size']);
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
              'image' => $user_thumb,
              'caption' => array("user" => $user["user_name"], "userid" => $user["user_id"], "albums" => $albums_txt, "pictures" => $pictures_txt),
              "statistics" => sprintf($lang_album_list["album_on_page"], $user_count, $this->totalPages["usrAlb"])
              );
      }
  }
}
?>