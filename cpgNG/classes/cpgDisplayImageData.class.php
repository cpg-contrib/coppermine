<?php
/**
 * $Id$
 */
require_once ("cpgAlbumData.class.php");
require_once ("include/exif_php.inc.php");
require_once ("include/iptc.inc.php");
require_once ("include/media.functions.inc.php");
class cpgDisplayImageData extends cpgAlbumData {

  function getPicData ($album, &$album_name, &$count, $limit1 = -1, $limit2 = -1, $pid, $set_caption = true)
  {
        global $CONFIG, $USER, $ALBUM_SET, $FORBIDDEN_SET_DATA;

        if(count($FORBIDDEN_SET_DATA) > 0 ){
            $forbidden_set_string =" AND aid NOT IN (".implode(",", $FORBIDDEN_SET_DATA).")";
        }

        $sort_array = array(
          'na' => 'filename ASC',
          'nd' => 'filename DESC',
          'ta'=>'title ASC',
          'td'=>'title DESC',
          'da' => 'pid ASC',
          'dd' => 'pid DESC',
          'pa' => 'position ASC',
          'pd' => 'position DESC',
        );
        $sort_code = isset($USER['sort'])? $USER['sort'] : $CONFIG['default_sort_order'];
        $sort_order = isset($sort_array[$sort_code]) ? $sort_array[$sort_code] : $sort_array[$CONFIG['default_sort_order']];

        $limit = ($limit1 != -1) ? ' LIMIT '. $limit1 : '';
        $limit .= ($limit2 != -1) ? ' ,'. $limit2 : '';

        if(count($FORBIDDEN_SET_DATA) > 0 ){
            $forbidden_set_string =" AND aid NOT IN (".implode(",", $FORBIDDEN_SET_DATA).")";
        }
        // Keyword
        if (!empty($CURRENT_ALBUM_KEYWORD)){
                $keyword = "OR (keywords like '%$CURRENT_ALBUM_KEYWORD%' $forbidden_set_string )";
        } else $keyword = '';

        if ((is_numeric($album))) {
                $album_name_keyword = $this->getAlbumName($album);
                $album_name = $album_name_keyword['title'];
                $album_keyword = $album_name_keyword['keyword'];

                if (!empty($album_keyword)) {
                        $keyword = "OR (keywords like '%$album_keyword%' $forbidden_set_string )";
                } else {
                  $keyword = '';
                }

                $approved = GALLERY_ADMIN_MODE ? '' : 'AND approved=\'YES\'';

                $query = "SELECT COUNT(pid) from {$CONFIG['TABLE_PICTURES']} WHERE (aid='$album' $forbidden_set_string ) $keyword $approved $ALBUM_SET";

                $result = cpg_db_query($query);
                $nbEnr = mysql_fetch_array($result);
                $count = $nbEnr[0];
                mysql_free_result($result);

                if ($pid != 0) {
                  $query = "SELECT * from {$CONFIG['TABLE_PICTURES']} WHERE (aid='$album' $forbidden_set_string ) AND pid='$pid' $approved $ALBUM_SET ORDER BY $sort_order";
                } else {
                  $query = "SELECT * FROM {$CONFIG['TABLE_PICTURES']} WHERE (aid='$album' $forbidden_set_string ) $keyword  $approved $ALBUM_SET ORDER BY $sort_order $limit";
                }

                $result = cpg_db_query($query);

                if (mysql_num_rows($result) == 0) {
                  return;
                }

                $row = cpg_db_fetch_rowset($result);

                mysql_free_result($result);

                $row = CPGPluginAPI::filter('thumb_caption_regular',$row);

                return $row;
        }
  }

  function getPicHtmlData (&$picData)
  {
    global $CONFIG, $CURRENT_ALBUM_DATA, $USER;
    global $album, $comment_date_fmt, $template_display_picture;

    $pid = $picData['pid'];

    if (!isset($USER['liv']) || !is_array($USER['liv'])) {
        $USER['liv'] = array();
    }
    // Add 1 to hit counter
    if (!USER_IS_ADMIN && $album != "lasthits" && !in_array($pid, $USER['liv']) && isset($_COOKIE[$CONFIG['cookie_name'] . '_data'])) {
        add_hit($pid);
        if (count($USER['liv']) > 4) array_shift($USER['liv']);
        array_push($USER['liv'], $pid);
    }

    if($CONFIG['thumb_use']=='ht' && $picData['pheight'] > $CONFIG['picture_width'] ){ // The wierd comparision is because only picture_width is stored
      $condition = true;
    }elseif($CONFIG['thumb_use']=='wd' && $picData['pwidth'] > $CONFIG['picture_width']){
      $condition = true;
    }elseif($CONFIG['thumb_use']=='any' && max($picData['pwidth'], $picData['pheight']) > $CONFIG['picture_width']){
      $condition = true;
    }else{
      $condition = false;
    }

    if ($CONFIG['make_intermediate'] && $condition ) {
        $picData["picUrl"] = $this->__getPicUrl($picData, 'normal');
    } else {
        $picData["picUrl"] = $this->__getPicUrl($picData, 'fullsize');
    }

    $image_size = $this->__computeImgSize($picData['pwidth'], $picData['pheight'], $CONFIG['picture_width']);

    $mime_content = cpg_get_type($picData['filename']);

    if ($picData['pwidth']==0 || $picData['pheight']==0) {
        $image_size['geom']='';
        $image_size['whole'] = '';
    } elseif ($mime_content['content']=='movie' || $mime_content['content']=='audio') {
        $ctrl_offset['mov']=15;
        $ctrl_offset['wmv']=45;
        $ctrl_offset['swf']=0;
        $ctrl_offset['rm']=0;
        $ctrl_offset_default=45;
        $ctrl_height = (isset($ctrl_offset[$mime_content['extension']]))?($ctrl_offset[$mime_content['extension']]):$ctrl_offset_default;
        $image_size['whole']='width="'.$picData['pwidth'].'" height="'.($picData['pheight']+$ctrl_height).'"';
    }

    if ($mime_content['content']=='image') {
      if (isset($image_size['reduced'])) {
        $picData["winsizeX"] = $picData['pwidth'] + 16;
        $picData["winsizeY"] = $picData['pheight'] + 16;
      }
    } elseif ($mime_content['content']=='document') {
      $picData["pic_thumb_url"] = $this->__getPicUrl($picData,'thumb');
    } else {
      $picData["autostart"] = ($CONFIG['mv_autostart']) ? ('true'):('false');
    }

    $picData["image_size"] = $image_size;
    $picData["mime_content"] = $mime_content;

    $picData = CPGPluginAPI::filter('file_data',$picData);
  }

  function getPicComments($pid)
  {
    global $CONFIG, $CURRENT_PIC_DATA, $CURRENT_ALBUM_DATA, $USER, $comment_date_fmt;

    $query = "SELECT msg_id, msg_author, msg_body, UNIX_TIMESTAMP(msg_date) AS msg_date, author_id, author_md5_id, msg_raw_ip, msg_hdr_ip FROM {$CONFIG['TABLE_COMMENTS']} WHERE pid='$pid' ORDER BY msg_id ASC";

    $result = cpg_db_query($query);

    while ($row = mysql_fetch_array($result)) {
        $user_can_edit = (GALLERY_ADMIN_MODE) || (USER_ID && USER_ID == $row['author_id'] && USER_CAN_POST_COMMENTS) || (!USER_ID && USER_CAN_POST_COMMENTS && ($USER['ID'] == $row['author_md5_id']));

        $comment_ipinfo = ($row['msg_raw_ip'] && GALLERY_ADMIN_MODE);

        if ($CONFIG['enable_smilies']) {
            $comment_body = process_smilies(make_clickable($row['msg_body']));
        } else {
            $comment_body = make_clickable($row['msg_body']);
        }

        $params[] = array(
                          'edit'   => $user_can_edit ? 'enabled' : '',
                          'ipinfo' => $comment_ipinfo ? 'show' : '',
                          'msg_author' => $row['msg_author'],
                          'msg_id' => $row['msg_id'],
                          'msg_date' => localised_date($row['msg_date'], $comment_date_fmt),
                          'msg_body' => $comment_body,
                          'msg_body_raw' => $row['msg_body'],
                          'hdr_ip' => $row['msg_hdr_ip'],
                          'raw_ip' => $row['msg_raw_ip'],
                         );

    }
    if (count($params) > 0) {
      return ($params);
    } else {
      return (0);
    }
  }

  function getPicInfo()
  {
    global $CONFIG, $THEME_DIR, $FAVPICS;
    global $picData, $album, $album_name, $lang_picinfo, $lang_display_image_php, $lang_byte_units, $lastup_date_fmt, $pos;

    if ($picData['owner_id'] && $picData['owner_name']) {
        $picInfo["ownerUid"] = $picData['owner_id'];
        $picInfo["ownerName"] = $picData["owner_name"];
    } else {
        $picInfo["ownerUid"] = '';
    }

    $picInfo["pid"] = $picData["pid"];

    if (GALLERY_ADMIN_MODE && $picData['pic_raw_ip']) {
        if ($picData['pic_hdr_ip']) {
            $picInfo["ipinfo"] = ' (' . $picData['pic_hdr_ip'] . '[' . $picData['pic_raw_ip'] . ']) / ';
        } else {
            $picInfo["ipinfo"] = ' (' . $picData['pic_raw_ip'] . ') / ';
        }
    } else {
        if ($picInfo["ownerUid"]) {
            $picInfo["ipinfo"] = '/ ';
        } else {
            $picInfo["ipinfo"] = '';
        }
    }

    $picInfo["fileName"] = htmlspecialchars($picData['filename']);
    $picInfo["aid"] = $picData['aid'];
    $picInfo["albumName"] = $album_name;

    if ($picData['votes'] > 0) {
        if (defined('THEME_HAS_RATING_GRAPHICS')) {
            $prefix = $THEME_DIR;
        } else {
            $prefix = '';
        }
        if (GALLERY_ADMIN_MODE) {
          $picInfo["width"] = 978;
          $picInfo["height"] = 504;
        } else {
          $picInfo["width"] = 418;
          $picInfo["height"] = 232;
        }

        $picInfo["voteDetailsLink"] = $CONFIG['vote_details'] ? "show" : "";

        $picInfo["rating"] = sprintf($lang_picinfo['Rating'], $picData['votes']);
        $picInfo["ratingImgPath"] = $prefix."images/rating".round($picData['pic_rating'] / 2000).".gif";
    }

    if ($picData['keywords'] != "") {
        $picInfo["keywordLink"] = preg_replace("/(\S+)/", "<a href=\"thumbnails.php?album=search&amp;search=\\1\">\\1</a>" , $picData['keywords']);
        $picInfo["keywords"] = $picData["keywords"];
    }

    for ($i = 1; $i <= 4; $i++) {
        if ($CONFIG['user_field' . $i . '_name']) {
            if ($picData['user' . $i] != "") {
                $picInfo["userFields"][$CONFIG['user_field' . $i . '_name']] = make_clickable($picData['user' . $i]);
            }
        }
    }

    $picInfo["fileSize"] = ($picData['filesize'] > 10240 ? ($picData['filesize'] >> 10) . '&nbsp;' . $lang_byte_units[1] : $picData['filesize'] . '&nbsp;' . $lang_byte_units[0]);

    $picInfo["dateAdded"] = localised_date($picData['ctime'], $lastup_date_fmt);

    $picInfo["dimensions"] = sprintf($lang_display_image_php['size'], $picData['pwidth'], $picData['pheight']);

    $picInfo["hitsDetailsLink"] = ($picData['hits'] && $CONFIG['vote_details'] && GALLERY_ADMIN_MODE) ? "show" : "";

    $picInfo["displayed"] = sprintf($lang_display_image_php['views'], $picData['hits']);

    $pathToPic = $CONFIG['fullpath'] . $picData['filepath'] . $picData['filename'];

    if ($CONFIG['read_exif_data']) {
      $picInfo["exifInfo"] = exif_parse_file($pathToPic);
    }

    if ($CONFIG['read_iptc_data']) {
      $iptc = get_IPTC($pathToPic);
    }

    if (isset($iptc) && is_array($iptc)) {
      if (isset($iptc['Title'])) $picInfo["iptcTitle"] = trim($iptc['Title']);
      if (isset($iptc['Copyright'])) $picInfo["iptcCopyright"] = trim($iptc['Copyright']);
      if (isset($iptc['Keywords'])) $picInfo["iptcKeywords"] = trim(implode(" ",$iptc['Keywords']));
      if (isset($iptc['Category'])) $picInfo["iptcCategory"] = trim($iptc['Category']);
      if (isset($iptc['SubCategories'])) $picInfo["iptcSubCategories"] = trim(implode(" ",$iptc['SubCategories']));
    }
    // Create the absolute URL for display in info
    $picInfo["URL"] = $CONFIG["ecards_more_pic_target"] . (substr($CONFIG["ecards_more_pic_target"], -1) == '/' ? '' : '/') .basename($_SERVER['PHP_SELF']) . "?albumName=$album&amp;aid=".$picData["aid"]."&amp;pid=".$picData["pid"]."&amp;pos=$pos";

    // with subdomains the variable is $_SERVER["SERVER_NAME"] does not return the right value instead of using a new config variable I reused $CONFIG["ecards_more_pic_target"] no trailing slash in the configure
    // Create the add to fav link
    if (!in_array($picData['pid'], $FAVPICS)) {
      $picInfo["favPhrase"] = $lang_picinfo['addFav'];
    } else {
      $picInfo["favPhrase"] = $lang_picinfo['remFav'];
    }

    return ($picInfo);

  }
}
?>