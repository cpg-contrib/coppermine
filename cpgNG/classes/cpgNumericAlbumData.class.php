<?php
require_once ("cpgAlbumData.class.php");
class cpgNumericAlbumData extends cpgAlbumData{
  var $cpgAlbumName;
  function getThumbnailData($album, $cat, $page, $thumbcols, $thumbrows, $display_tabs)
  {
      global $CONFIG, $AUTHORIZED;
      global $album_date_fmt, $lang_display_thumbnails, $lang_errors, $lang_byte_units, $album_name;

      $thumb_per_page = $thumbcols * $thumbrows;
      $lower_limit = ($page-1) * $thumb_per_page;
      //$lower_limit = 0;
      $pic_data = $this->__getPicData($album, $thumb_count, $album_name, $lower_limit, $thumb_per_page);

      $total_pages = ceil($thumb_count / $thumb_per_page);

      $i = 0;
      if (count($pic_data) > 0) {
              foreach ($pic_data as $key => $row) {
                      $pic_title =$lang_display_thumbnails['filename'].$row['filename']."\n".
                              $lang_display_thumbnails['filesize'].($row['filesize'] >> 10).$lang_byte_units[1]."\n".
                              $lang_display_thumbnails['dimensions'].$row['pwidth']."x".$row['pheight']."\n".
                              $lang_display_thumbnails['date_added'].localised_date($row['ctime'], $album_date_fmt);

                      $pic_url =  $this->__getPicUrl($row, 'thumb');
                      if (!is_image($row['filename'])) {
                              $image_info = getimagesize($pic_url);
                              $row['pwidth'] = $image_info[0];
                              $row['pheight'] = $image_info[1];
                      }

                      $image_size = $this->__computeImgSize($row['pwidth'], $row['pheight'], $CONFIG['thumb_width']);

                      $thumb_list[$i]['pos'] = $key < 0 ? $key : $i - 1 + $lower_limit;
                      $thumb_list[$i]['pid'] = $row['pid'];
                      $thumb_list[$i]['image'] = array("url"=>$pic_url, "alt"=>$row['filename'], "title"=>$pic_title);
                      $thumb_list[$i]['caption'] = $row['caption_text'];
                      $thumb_list[$i]['comment'] = $row['comment_text'];
                      $thumb_list[$i]['owner'] = $row['owner_text'];
                      $thumb_list[$i]['ownerLink'] = $row['owner_text'];
                      $thumb_list[$i]['admin_menu'] = '';
                      $thumb_list[$i]['aid'] = $row['aid'];
                      $i++;
              }
              $thumb_list["totalPages"] = $total_pages;
              $thumb_list["albumName"] = $album_name;
              $thumb_list["thumbCount"] = $thumb_count;
              $thumb_list["currentPage"] = $page;
              $thumb_list["album"] = $album;
              return $thumb_list;
      } else {
              $thumb_list["albumName"] = $album_name;
              $thumb_list["thumbCount"] = 0;
              return $thumb_list;
      }
  }

  /**
   * Private getPicData
   */
   function __getPicData($album, &$count, &$album_name, $limit1=-1, $limit2=-1, $set_caption = true)
  {
        global $USER, $CONFIG, $ALBUM_SET, $CURRENT_CAT_NAME, $CURRENT_ALBUM_KEYWORD, $HTML_SUBST, $THEME_DIR, $FAVPICS, $FORBIDDEN_SET_DATA;
        global $album_date_fmt, $lastcom_date_fmt, $lastup_date_fmt, $lasthit_date_fmt, $cat;
        global $lang_get_pic_data, $lang_meta_album_names, $lang_errors;

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

        if ($limit2 == 1) {
            $select_columns = '*';
        } else {
            $select_columns = 'pid, filepath, filename, url_prefix, filesize, pwidth, pheight, ctime, aid';
        }

        if(count($FORBIDDEN_SET_DATA) > 0 ) {
            $forbidden_set_string =" AND aid NOT IN (".implode(",", $FORBIDDEN_SET_DATA).")";
        }
        // Keyword
        if (!empty($CURRENT_ALBUM_KEYWORD)) {
                $keyword = "OR (keywords like '%$CURRENT_ALBUM_KEYWORD%' $forbidden_set_string )";
        } else $keyword = '';

        // Regular albums
       // if ((is_numeric($album))) {
        $album_name_keyword = get_album_name($album);
        $album_name = $album_name_keyword['title'];
        $album_keyword = $album_name_keyword['keyword'];

        if (!empty($album_keyword)) {
                $keyword = "OR (keywords like '%$album_keyword%' $forbidden_set_string )";
        } else {
          $keyword = '';
        }

        $approved = GALLERY_ADMIN_MODE ? '' : 'AND approved=\'YES\'';

        $query = "SELECT COUNT(*) from {$CONFIG['TABLE_PICTURES']} WHERE (aid='$album' $forbidden_set_string ) $keyword $approved $ALBUM_SET";
        $result = cpg_db_query($query);
        $nbEnr = mysql_fetch_array($result);
        $count = $nbEnr[0];
        mysql_free_result($result);

        if($select_columns != '*') $select_columns .= ', title, caption,hits,owner_id,owner_name';

        $query = "SELECT $select_columns from {$CONFIG['TABLE_PICTURES']} WHERE (aid='$album' $forbidden_set_string ) $keyword $approved $ALBUM_SET ORDER BY $sort_order $limit";

        $result = cpg_db_query($query);
        $rowset = cpg_db_fetch_rowset($result);
        mysql_free_result($result);
        // Set picture caption

        if ($set_caption) {
          foreach ($rowset as $key => $row){
            $caption = "";
            $comment = "";
            $owner = "";
            $ownerLink = "";
            $caption .= ($rowset[$key]['title']||$rowset[$key]['hits']) ? $rowset[$key]['title'] : '';
            if ($CONFIG['views_in_thumbview']){
                if ($rowset[$key]['title']){
                    $caption .= "&nbsp;&ndash;&nbsp;";
                }
                $caption .= sprintf($lang_get_pic_data['n_views'], $rowset[$key]['hits']);
            }
            if ($CONFIG['caption_in_thumbview']){
                $caption .= $rowset[$key]['caption'] ? bb_decode(($rowset[$key]['caption'])) : '';
            }
            if ($CONFIG['display_comment_count']) {
                    $comments_nr = count_pic_comments($row['pid']);
                    if ($comments_nr > 0) {
                      $comment .= sprintf($lang_get_pic_data['n_comments'], $comments_nr );
                    }
            }
            if ($CONFIG['display_uploader']){
                    $ownerLink = 'profile.php?uid='.$rowset[$key]['owner_id'];
                    $owner = $rowset[$key]['owner_name'];
            }
            $rowset[$key]['caption_text'] = $caption;
            $rowset[$key]['comment_text'] = $comment;
            $rowset[$key]['owner_text'] = $owner;
            $rowset[$key]['owner_link'] = $ownerLink;
          }
        }
        /*if ($set_caption) foreach ($rowset as $key => $row){

                $caption = "<span class=\"thumb_title\">";
                $caption .= ($rowset[$key]['title']||$rowset[$key]['hits']) ? $rowset[$key]['title'] : '';

        if ($CONFIG['views_in_thumbview']){
            if ($rowset[$key]['title']){
                            $caption .= "&nbsp;&ndash;&nbsp;";
            }
            $caption .= sprintf($lang_get_pic_data['n_views'], $rowset[$key]['hits']);
        }
        $caption .= "</span>";
        if ($CONFIG['caption_in_thumbview']){
                        $caption .= $rowset[$key]['caption'] ? "<span class=\"thumb_caption\">".bb_decode(($rowset[$key]['caption']))."</span>" : '';
                    }
                    if ($CONFIG['display_comment_count']) {
                            $comments_nr = count_pic_comments($row['pid']);
                            if ($comments_nr > 0) $caption .= "<span class=\"thumb_num_comments\">".sprintf($lang_get_pic_data['n_comments'], $comments_nr )."</span>";
                    }

                    if ($CONFIG['display_uploader']){
                            $caption .= '<span class="thumb_title"><a href ="profile.php?uid='.$rowset[$key]['owner_id'].'">'.$rowset[$key]['owner_name'].'</a></span>';
                    }

                    $rowset[$key]['caption_text'] = $caption;

            }*/

        $rowset = CPGPluginAPI::filter('thumb_caption_regular',$rowset);

        return $rowset;
        //}
    }

  function getFilmStripData($album, $pos)
  {
        global $CONFIG, $AUTHORIZED;
        global $album_date_fmt, $lang_display_thumbnails, $lang_errors, $lang_byte_units;
        $max_item=$CONFIG['max_film_strip_items'];
        //$thumb_per_page = $pos+$CONFIG['max_film_strip_items'];
        $thumb_per_page = $max_item*2;
        $l_limit = max(0,$pos - $CONFIG['max_film_strip_items']);
        $new_pos = max(0,$pos - $l_limit);

        $pic_data = $this->__getPicData($album, $thumb_count, $album_name, $l_limit, $thumb_per_page);

        if (count($pic_data) < $max_item ){
                $max_item = count($pic_data);
        }
        $lower_limit = 3;

        if(!isset($pic_data[$new_pos + 1])) {
           $lower_limit = $new_pos - $max_item + 1;
        } else if(!isset($pic_data[$new_pos + 2])) {
           $lower_limit = $new_pos - $max_item + 2;
        } else if(!isset($pic_data[$new_pos - 1])) {
           $lower_limit = $new_pos;
        } else {
          $hf = $max_item / 2;
          $ihf = (int)($max_item / 2);
          if($new_pos > $hf ) {
               $lower_limit = $new_pos - $ihf;
          }
          elseif($new_pos < $hf ) {
            $lower_limit = 0;
          }
        }

        $pic_data = array_slice($pic_data,$lower_limit,$max_item);
        $i = $l_limit;
        if (count($pic_data) > 0) {
                foreach ($pic_data as $key => $row) {
                        $hi = (($pos == ($i + $lower_limit)) ? '1': '');
                        $i++;

                        $pic_title = $lang_display_thumbnails['filename'].$row['filename']."\n".
                                $lang_display_thumbnails['filesize'].($row['filesize'] >> 10).$lang_byte_units[1]."\n".
                                $lang_display_thumbnails['dimensions'].$row['pwidth']."x".$row['pheight']."\n".
                                $lang_display_thumbnails['date_added'].localised_date($row['ctime'], $album_date_fmt);

                        $pic_url =  $this->__getPicUrl($row, 'thumb');
                        if (!is_image($row['filename'])) {
                                $image_info = getimagesize($pic_url);
                                $row['pwidth'] = $image_info[0];
                                $row['pheight'] = $image_info[1];
                        }

                        $image_size = $this->__computeImgSize($row['pwidth'], $row['pheight'], $CONFIG['thumb_width']);

                        $p = $i - 1 + $lower_limit;
                        $p = ($p < 0 ? 0 : $p);
                        $thumb_list[$i]['pos'] = $key < 0 ? $key : $p;
                        $thumb_list[$i]['geom'] = $image_size['geom'];
                        $thumb_list[$i]['picUrl'] = $pic_url;
                        $thumb_list[$i]['picTitle'] = $pic_title;
                        $thumb_list[$i]['filename'] = $row['filename'];
                        if (is_numeric($album)) {
                          $thumb_list[$i]['albumName'] = $album;
                          $thumb_list[$i]['aid'] = $album;
                        } else {
                          $thumb_list[$i]['albumName'] = $album_name;
                        }
                }
                return ($thumb_list);
        }
  }
}
?>
