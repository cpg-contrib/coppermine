<?php
/**
 * $Id:
 */
class cpgAlbumData {

  function cgpAlbumData()
  {
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
 **/

  function __getPicUrl(&$pic_row, $mode,$system_pic = false)
  {
    global $CONFIG,$THEME_DIR;

    static $pic_prefix = array();
    static $url_prefix = array();

    if (!count($pic_prefix)) {
            $pic_prefix = array(
                    'thumb' => $CONFIG['thumb_pfx'],
                    'normal' => $CONFIG['normal_pfx'],
                    'fullsize' => ''
            );

            $url_prefix = array(
                    0 => $CONFIG['fullpath'],
            );
    }

    $mime_content = cpg_get_type($pic_row['filename']);
    $pic_row = array_merge($pic_row,$mime_content);

    $filepathname = null;

    // Code to handle custom thumbnails
    // If fullsize or normal mode use regular file
    if ($mime_content['content'] != 'image' && $mode== 'normal') {
            $mode = 'fullsize';
    } elseif (($mime_content['content'] != 'image' && $mode == 'thumb') || $system_pic) {
            $thumb_extensions = Array('.gif','.png','.jpg');
            // Check for user-level custom thumbnails
            // Create custom thumb path and erase extension using filename; Erase filename's extension
            $custom_thumb_path = $url_prefix[$pic_row['url_prefix']].$pic_row['filepath'].$pic_prefix[$mode];
            $file_base_name = str_replace('.'.$mime_content['extension'],'',basename($pic_row['filename']));
            // Check for file-specific thumbs
            foreach ($thumb_extensions as $extension) {
                    if (file_exists($custom_thumb_path.$file_base_name.$extension)) {
                            $filepathname = $custom_thumb_path.$file_base_name.$extension;
                            break;
                    }
            }
            if (!$system_pic) {
                    // Check for extension-specific thumbs
                    if (is_null($filepathname)) {
                            foreach ($thumb_extensions as $extension) {
                                    if (file_exists($custom_thumb_path.$mime_content['extension'].$extension)) {
                                            $filepathname = $custom_thumb_path.$mime_content['extension'].$extension;
                                            break;
                                    }
                            }
                    }
                    // Check for content-specific thumbs
                    if (is_null($filepathname)) {
                            foreach ($thumb_extensions as $extension) {
                                    if (file_exists($custom_thumb_path.$mime_content['content'].$extension)) {
                                            $filepathname = $custom_thumb_path.$mime_content['content'].$extension;
                                            break;
                                    }
                            }
                    }
            }
            // Use default thumbs
            if (is_null($filepathname)) {
                            // Check for default theme- and global-level thumbs
                            $thumb_paths[] = $THEME_DIR.'images/';                 // Used for custom theme thumbs
                            $thumb_paths[] = 'images/';                             // Default Coppermine thumbs
                            foreach ($thumb_paths as $default_thumb_path) {
                                    if (is_dir($default_thumb_path)) {
                                            if (!$system_pic) {
                                                    foreach ($thumb_extensions as $extension) {
                                                            // Check for extension-specific thumbs
                                                            if (file_exists($default_thumb_path.$CONFIG['thumb_pfx'].$mime_content['extension'].$extension)) {
                                                                    $filepathname = $default_thumb_path.$CONFIG['thumb_pfx'].$mime_content['extension'].$extension;
                                                                    break 2;
                                                            }
                                                    }
                                                    foreach ($thumb_extensions as $extension) {
                                                            // Check for media-specific thumbs (movie,document,audio)
                                                            if (file_exists($default_thumb_path.$CONFIG['thumb_pfx'].$mime_content['content'].$extension)) {
                                                                    $filepathname = $default_thumb_path.$CONFIG['thumb_pfx'].$mime_content['content'].$extension;
                                                                    break 2;
                                                            }
                                                    }
                                            } else {
                                                    // Check for file-specific thumbs for system files
                                                    foreach ($thumb_extensions as $extension) {
                                                            if (file_exists($default_thumb_path.$CONFIG['thumb_pfx'].$file_base_name.$extension)) {
                                                                    $filepathname = $default_thumb_path.$CONFIG['thumb_pfx'].$file_base_name.$extension;
                                                                    break 2;
                                                            }
                                                    }
                                            }
                                    }
                            }
            }
            $filepathname = path2url($filepathname);
    }

    if (is_null($filepathname)) {
        $filepathname = $url_prefix[$pic_row['url_prefix']]. path2url($pic_row['filepath']. $pic_prefix[$mode]. $pic_row['filename']);
    }

    // Added hack:  "&& !isset($pic_row['mode'])" thumb_data filter isn't executed for the fullsize image
    if ($mode == 'thumb' && !isset($pic_row['mode'])) {
        $pic_row['url'] = $filepathname;
        $pic_row['mode'] = $mode;
        $pic_row = CPGPluginAPI::filter('thumb_data',$pic_row);
    } elseif ($mode != 'thumb') {
        $pic_row['url'] = $filepathname;
        $pic_row['mode'] = $mode;
    } else {
        $pic_row['url'] = $filepathname;
    }

    return $pic_row['url'];
  }

  /**
   * protected __computeImgSize()
   *
   * Compute image geometry based on max, width / height
   *
   * @param integer $width
   * @param integer $height
   * @param integer $max
   * @return array
   **/
  function __computeImgSize($width, $height, $max)
  {
    global $CONFIG;
    $thumb_use=$CONFIG['thumb_use'];
    if($thumb_use=='ht') {
      $ratio = $height / $max;
    } elseif($thumb_use=='wd') {
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
    $image_size['whole'] = 'width="'.$image_size['width'].'" height="'.$image_size['height'].'"';
    if($thumb_use=='ht') {
      $image_size['geom'] = ' height="'.$image_size['height'].'"';
    } elseif($thumb_use=='wd') {
      $image_size['geom'] = 'width="'.$image_size['width'].'"';
    } else {
      $image_size['geom'] = 'width="'.$image_size['width'].'" height="'.$image_size['height'].'"';
    }
    return $image_size;
  }

  /**
   * getBreadCrumData
   */
  function getBreadcrumbData ($albumName, $albumid=0, $cat=0)
  {
    global $CONFIG, $lang_errors, $cat;
    $breadcrumb_array = array();
    $breadcrumb = array();

    if (!empty($albumName)) {
      $query = "SELECT aid, title, category FROM {$CONFIG['TABLE_ALBUMS']} WHERE aid = '$albumName'";
      $result = cpg_db_query($query);

      if (mysql_num_rows($result) == 0) {
        cpg_die(CRITICAL_ERROR, $lang_errors['non_exist_ap']);
      }

      $row = mysql_fetch_array($result);
      //$breadcrumb_array[] = array($albumName, $row["title"]);

      if ($row["category"] == 0) {
        $breadcrumb[0]["link"] = "thumbnails.php?album={$row['aid']}";
        $breadcrumb[0]["title"] = $row["title"];
        return $breadcrumb;
      }
      $albLink = "thumbnailsNew.php?album={$row['aid']}";
      $albTitle = $row["title"];
    } else {
      /**
       * Category is set, breadcrumb will be displayed on index page
       */
      $row["category"] = $cat;
    }
    if ($row["category"] >= FIRST_USER_CAT) {
      $cat = $row["category"];
      $userName = $this->__getUsername($row["category"] - FIRST_USER_CAT);
      if (!$userName) {
        $userName = "Mr. X";
      }
      $breadcrumb_array[] = array($row["category"], $userName);
      $row["parent"] = 1;
      $CURRENT_CAT_NAME = sprintf($lang_list_categories['xx_s_gallery'], $user_name);
    } else {
      $cat = $row["category"];
      $query = "SELECT cid, name, parent FROM {$CONFIG['TABLE_CATEGORIES']} WHERE cid = '".$row["category"]."'";
      $result = cpg_db_query($query);
      if (mysql_num_rows($result) == 0) {
        cpg_die(CRITICAL_ERROR, $lang_errors['non_exist_cat'], __FILE__, __LINE__);
      }
      $row = mysql_fetch_array($result);

      $breadcrumb_array[] = array($row["cid"], $row['name']);
      $CURRENT_CAT_NAME = $row['name'];
      mysql_free_result($result);
    }
    while($row['parent'] != 0){
      $query = "SELECT cid, name, parent FROM {$CONFIG['TABLE_CATEGORIES']} WHERE cid = '{$row['parent']}'";
      $result = cpg_db_query($query);
      if (mysql_num_rows($result) == 0) {
        cpg_die(CRITICAL_ERROR, $lang_errors['orphan_cat'], __FILE__, __LINE__);
      }
      $row = mysql_fetch_array($result);

      $breadcrumb_array[] = array($row['cid'], $row['name']);
      mysql_free_result($result);
    } // while

    $breadcrumb_array = array_reverse($breadcrumb_array);

    /**
     * Loop counter
     */
    $i = 0;
    foreach ($breadcrumb_array as $category){
      $breadcrumb[$i]["link"] = "indexNew.php?cat={$category[0]}";
      $breadcrumb[$i]["title"] = $category[1];
      $i++;
    }
    if (!empty($albLink)) {
      $i++;
      $breadcrumb[$i]["link"] = $albLink;
      $breadcrumb[$i]["title"] = $albTitle;
    }
    return $breadcrumb;
  }

  /**
  * getAlbumName()
  *
  * @param $aid
  * @return
  **/

  function getAlbumName($aid)
  {
          global $CONFIG;
          global $lang_errors;

          $result = cpg_db_query("SELECT title,keyword from {$CONFIG['TABLE_ALBUMS']} WHERE aid='$aid'");
          $count = mysql_num_rows($result);
          if ($count > 0) {
                  $row = mysql_fetch_array($result);
                  return $row;
          } else {
                  cpg_die(ERROR, $lang_errors['non_exist_ap'], __FILE__, __LINE__);
          }
  }

  // Return the name of a user

  /**
   * __getUsername()
   *
   * @param $uid
   * @return
   **/
  function __getUsername($uid)
  {
          global $CONFIG;

          $uid = (int)$uid;

          if (!$uid) {
              return 'Anonymous';
          } elseif (defined('UDB_INTEGRATION')) {
            return udb_get_user_name($uid);
          } else {
                  $result = cpg_db_query("SELECT user_name FROM {$CONFIG['TABLE_USERS']} WHERE user_id = '".$uid."'");
                  if (mysql_num_rows($result) == 0) return '';
                  $row = mysql_fetch_array($result);
                  mysql_free_result($result);
                  return $row['user_name'];
          }
  }
}
?>
