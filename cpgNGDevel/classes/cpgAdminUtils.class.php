<?php
/**
 * cpgAdminUtils.class.php
 *
 * Class containing static function which are used for different action of util.php
 *
 * @package cpgNG
 * @author Abbas <abbas@sanisoft.com>
 * @version $Id$
 */

class cpgAdminUtils {

  /**
   * utilFillOptions()
   *
   * @return array $users
   */
  function utilFillOptions()
  {
    $db = cpgDB::getInstance();
    $config = cpgConfig::getInstance();
    $auth = cpgAuth::getInstance();    
    global $lang_util_php;

    if (UDB_CAN_JOIN_TABLES) {

      $query = "SELECT 
                  aid, category, 
                IF({$auth->field['username']} IS NOT NULL, 
                CONCAT('(', {$auth->field['username']}, ') ', a.title), 
                CONCAT(' - ', a.title)) AS title 
                FROM 
                  {$config->conf['TABLE_ALBUMS']} AS a 
                LEFT JOIN 
                  {$auth->usertable} AS u 
                ON 
                  category = (" . FIRST_USER_CAT . " + a.{$auth->field['user_id']}) 
                ORDER BY 
                  category, title";
                                              
      $db->query($query, $auth->link_id);
      
      $albumOptions[0] = array (
                                "label" => "All Albums",
                                "value" => 0
                               );

      $db2 = new cpgDB;
      $i = 1;
      while ($row = $db->fetchRow()) {
        $sql = "SELECT name FROM {$config->conf['TABLE_CATEGORIES']} WHERE cid = " . $row["category"];
        $db2->query($sql);
        $row2 = $db2->fetchRow();
        $albumOptions[$i++] = array (
                                 "label" => $row2["name"] . $row["title"],
                                 "value" => $row["aid"]
                                );
      }
    } else {

      // Query for list of public albums
        
      $query = "SELECT aid, title, category FROM {$config->conf['TABLE_ALBUMS']} WHERE category < " . FIRST_USER_CAT . " ORDER BY title";

      $db->query($query);
      
      if ($db->nf() > 0) {
        $public_result = $db->fetchRowSet();
      } else {
        $public_result = array();
      }

      // Initialize $merged_array
      $merged_array = array();

      // Count the number of albums returned.
      $end = count($public_result);

      // Cylce through the User albums.
      for($i=0;$i<$end;$i++) {

        //Create a new array sow we may sort the final results.
        $merged_array[$i]['id'] = $public_result[$i]['aid'];
        $merged_array[$i]['album_name'] = $public_result[$i]['title'];

        // Query the database to get the category name.
        $vQuery = "SELECT name, parent FROM " . $config->conf['TABLE_CATEGORIES'] . " WHERE cid='" . $public_result[$i]['category'] . "'";
        $db->query($vQuery);
        $vRes = $db->fetchRow();
        if (isset($merged_array[$i]['username_category'])) {
          $merged_array[$i]['username_category'] = (($vRes['name']) ? '(' . $vRes['name'] . ') ' : '').$merged_array[$i]['username_category'];
        } else {
          $merged_array[$i]['username_category'] = (($vRes['name']) ? '(' . $vRes['name'] . ') ' : '');
        }
      }

      // We transpose and divide the matrix into columns to prepare it for use in array_multisort().
      foreach ($merged_array as $key => $row) {
        $aid[$key] = $row['id'];
        $title[$key] = $row['album_name'];
        $album_lineage[$key] = $row['username_category'];
      }

      // We sort all columns in descending order and plug in $album_menu at the end so it is sorted by the common key.
      array_multisort($album_lineage, SORT_ASC, $title, SORT_ASC, $aid, SORT_ASC, $merged_array);

      // Query for list of user albums

      $query = "SELECT aid, title, category FROM {$config->conf['TABLE_ALBUMS']} WHERE category >= " . FIRST_USER_CAT . " ORDER BY aid";

      $db->query($query);
      
      if ($db->nf()) {
        $user_albums_list = $db->fetchRowSet();
      } else {
        $user_albums_list = array();
      }

      // Query for list of user IDs and names

      $query = "SELECT ({$auth->field['user_id']} + ".FIRST_USER_CAT.") AS id,
                CONCAT('(', {$auth->field['username']}, ') ') as name 
                FROM {$auth->usertable} 
                ORDER BY name ASC";
                
      $db->query($query, $auth->link_id);

      if ($db->nf()) {
        $user_album_ids_and_names_list = $db->fetchRowSet();
      } else {
        $user_album_ids_and_names_list = array();
      }

      // Glue what we've got together.

      // Initialize $udb_i as a counter.
      if (count($merged_array)) {
        $udb_i = count($merged_array);
      } else {
        $udb_i = 0;
      }

      //Begin a set of nested loops to merge the various query results.
      foreach ($user_albums_list as $aq) {
        foreach ($user_album_ids_and_names_list as $uq) {
          if ($aq['category'] == $uq['id']) {
            $merged_array[$udb_i]['id']= $aq['category'];
            $merged_array[$udb_i]['album_name']= $aq['title'];
            $merged_array[$udb_i]['username_category']= $uq['name'];
            $udb_i++;
          }
        }
      }
      $albumOptions[0] = array (
                                "label" => "All Albums",
                                "value" => 0
                               );
      $i = 1;
      foreach ($merged_array as $menu_item) {
        $albumOptions[$i++] = array (
                                     "label" => (isset($menu_item['username_category']) ? $menu_item['username_category'] : '') . $menu_item['album_name'],
                                     "value" => $menu_item['id']
                                    );
      }
    }
    return $albumOptions;
  }

  /**
   * Function to update thumbs and/or resized photos
   */
  function update_thumbs()
  {
    $db = cpgDB::getInstance();
    $config = cpgConfig::getInstance();

    global $lang_util_php;

    $_SESSION['pageHeading'] = $lang_util_php['thumbs_wait'];

    $albumid = (isset($_POST['albumid'])) ? (int)$_POST['albumid'] : 0;
    $albstr = ($albumid) ? " WHERE aid = '$albumid'" : '';

    $numpics = (int)$_POST['numpics'];
    $updatetype = (int)$_POST['updatetype'];
    $startpic = (isset($_POST['startpic'])) ? (int)$_POST['startpic'] : 0;

    /**
     * Query to fetch picture's details for all albums or for a particular album in limit
     */
    $query = "SELECT * FROM ".$config->conf['TABLE_PICTURES']."$albstr LIMIT $startpic, $numpics";
    $db->query($query);

    $count = $db->nf();

    $i = 0;
    $_SESSION['message'] = '';
    $_SESSION['data'] = array();
    $_SESSION['processMore'] = array();

    while ($row = $db->fetchRow()) {
      $_SESSION['data'][$i]['image'] = $config->conf['fullpath'].$row['filepath'].$row['filename'];
      $_SESSION['data'][$i]['normal'] = $config->conf['fullpath'].$row['filepath'].$config->conf['normal_pfx'].$row['filename'];
      $_SESSION['data'][$i++]['thumb'] = $config->conf['fullpath'].$row['filepath'].$config->conf['thumb_pfx'].$row['filename'];
    }

    $_SESSION['albumid'] = $albumid;
    $_SESSION['action'] = 'update_thumbs';
    $_SESSION['updatetype'] = $updatetype;

    if ($count == $numpics) {
      $startpic += $numpics;

      /**
       * Store values in session to display 'Continue' button
       */
      $_SESSION['processMore'] = array(
                                       'albumid' => $albumid,
                                       'numpics' => $numpics,
                                       'startpic' => $startpic,
                                       'updatetype' => $updatetype,
                                       'action' => 'update_thumbs'
                                       );
    }
  }

  /**
   * Function to change file titles
   */
  function filename_to_title()
  {
    $db = cpgDB::getInstance();
    $config = cpgConfig::getInstance();

    global $lang_util_php;

    $_SESSION['pageHeading'] = $lang_util_php['titles_wait'];

    $albumid = (isset($_POST['albumid'])) ? (int)$_POST['albumid'] : 0;
    $albstr = ($albumid) ? " WHERE aid = '$albumid'" : '';
    $parsemode = (int)$_POST['parsemode'];

    $_SESSION['albumid'] = $albumid;
    $_SESSION['parsemode'] = $parsemode;
    $_SESSION['action'] = 'filename_to_title';

    /**
     * Query to fetch picture's details for all albums or for a particular album
     */
    $query = "SELECT * FROM ".$config->conf['TABLE_PICTURES'].$albstr;
    $db->query($query);

    $i = 0;
    $_SESSION['message'] = '';
    $_SESSION['data'] = array();
    $_SESSION['processMore'] = array();

    while ($row = $db->fetchRow()) {
      $_SESSION['data'][$i]['pid'] = (int)$row['pid'];
      $_SESSION['data'][$i]['filename'] = $row['filename'];
      $_SESSION['data'][$i++]['image'] = $config->conf['fullpath'].$row['filepath'].$row['filename'];
    }
  } // End of function 'filename_to_title'

  /**
   * Function to delete file titles
   */
  function del_titles()
  {
    $db = cpgDB::getInstance();
    $config = cpgConfig::getInstance();

    global $lang_util_php;

    $_SESSION['pageHeading'] = $lang_util_php['delete_wait'];

    $albumid = (isset($_POST['albumid'])) ? (int)$_POST['albumid'] : 0;
    $albstr = ($albumid) ? " WHERE aid = '$albumid'" : '';

    $_SESSION['message'] = '';
    $_SESSION['data'] = array();
    $_SESSION['processMore'] = array();

    $_SESSION['albumid'] = $albumid;
    $_SESSION['action'] = 'del_titles';

    /**
     * Query to reset file titles
     */
    $query = "UPDATE ".$config->conf['TABLE_PICTURES']." SET title = ''".$albstr;
    $db->query($query);

    $_SESSION['message'] = $lang_util_php['titles_deleted'];
  } // End of function 'del_titles'

  /**
   * Function to delete original size photos
   */
  function del_orig()
  {
    $db = cpgDB::getInstance();
    $config = cpgConfig::getInstance();

    global $lang_util_php;

    $_SESSION['pageHeading'] = $lang_util_php['replace_wait'];

    $albumid = (isset($_POST['albumid'])) ? (int)$_POST['albumid'] : 0;
    $albstr = ($albumid) ? " WHERE aid = '$albumid'" : '';

    $_SESSION['albumid'] = $albumid;
    $_SESSION['action'] = 'del_orig';

    /**
     * Query to fetch picture's details for all albums or for a particular album
     */
    $query = "SELECT * FROM ".$config->conf['TABLE_PICTURES'].$albstr;
    $db->query($query);

    $i = 0;
    $_SESSION['message'] = '';
    $_SESSION['data'] = array();
    $_SESSION['processMore'] = array();

    while ($row = $db->fetchRow()) {
      if (!file_exists($config->conf['fullpath'].$row['filepath'].$config->conf['normal_pfx'].$row['filename'])) continue;

      $_SESSION['data'][$i]['pid'] = (int)$row['pid'];
      $_SESSION['data'][$i]['image'] = $config->conf['fullpath'].$row['filepath'].$row['filename'];
      $_SESSION['data'][$i]['normal'] = $config->conf['fullpath'].$row['filepath'].$config->conf['normal_pfx'].$row['filename'];
      $_SESSION['data'][$i++]['thumb'] = $config->conf['fullpath'].$row['filepath'].$config->conf['thumb_pfx'].$row['filename'];
    }
  } // End of function 'del_orig'

  /**
   * Function to delete intermediate photos
   */
  function del_norm()
  {
    $db = cpgDB::getInstance();
    $config = cpgConfig::getInstance();

    global $lang_util_php;

    $_SESSION['pageHeading'] = $lang_util_php['deleting_intermediates'];

    $albumid = (isset($_POST['albumid'])) ? (int)$_POST['albumid'] : 0;
    $albstr = ($albumid) ? " WHERE aid = '$albumid'" : '';

    $_SESSION['albumid'] = $albumid;
    $_SESSION['action'] = 'del_norm';

    /**
     * Query to fetch picture's details for all albums or for a particular album
     */
    $query = "SELECT * FROM ".$config->conf['TABLE_PICTURES'].$albstr;
    $db->query($query);

    $i = 0;
    $_SESSION['message'] = '';
    $_SESSION['data'] = array();
    $_SESSION['processMore'] = array();

    while ($row = $db->fetchRow()) {
      if (!file_exists($config->conf['fullpath'].$row['filepath'].$config->conf['normal_pfx'].$row['filename'])) continue;

      $_SESSION['data'][$i]['pid'] = (int)$row['pid'];
      $_SESSION['data'][$i]['image'] = $config->conf['fullpath'].$row['filepath'].$row['filename'];
      $_SESSION['data'][$i]['normal'] = $config->conf['fullpath'].$row['filepath'].$config->conf['normal_pfx'].$row['filename'];
      $_SESSION['data'][$i++]['thumb'] = $config->conf['fullpath'].$row['filepath'].$config->conf['thumb_pfx'].$row['filename'];
    }
  } // End of function 'del_norm'

  /**
   * Function to delete comments on missing files
   */
  function del_orphans()
  {
    $db = cpgDB::getInstance();
    $config = cpgConfig::getInstance();

    global $lang_util_php;

    $_SESSION['pageHeading'] = $lang_util_php['searching_orphans'];

    $_SESSION['message'] = '';
    $_SESSION['data'] = array();
    $_SESSION['processMore'] = array();
    $_SESSION['action'] = 'del_orphans';

    /**
     * Query to fetch ids of all pictures
     */
    $query = 'SELECT pid FROM '.$config->conf['TABLE_PICTURES'];
    $db->query($query);

    $pidArr = array();

    while ($row = $db->fetchRow()) {
      $pidArr[] = (int)$row['pid'];
    }

    if (is_array($_POST['msgId'])) {
      reset($_POST['msgId']);

      foreach ($_POST['msgId'] as $k => $msgId) {
        $_POST['msgId'][$k] = (int)$msgId;
      }
    }

    /**
     * Query to fetch those comments for which picture doesn't exist
     */
    $query = 'SELECT * FROM '.$config->conf['TABLE_COMMENTS'].' WHERE pid NOT IN ('.implode(', ', $pidArr).')';
    $db->query($query);

    $i = 0;

    while ($row = $db->fetchRow()) {
      if (is_array($_POST['msgId']) && in_array((int)$row['msg_id'], $_POST['msgId'])) {
        /**
         * Query top delelte a particular orphaned comment
         */
        $query = 'DELETE FROM '.$config->conf['TABLE_COMMENTS'].' WHERE msg_id = '.$_POST['msgId'];
        $db->query($query);

        $_SESSION['message'] = $lang_util_php['views_reset'];
      } else {
        $_SESSION['data'][$i]['pid'] = (int)$row['pid'];
        $_SESSION['data'][$i]['msgId'] = (int)$row['msg_id'];
        $_SESSION['data'][$i++]['msgBody'] = $row['msg_body'];
      }
    }
  } // End of function 'del_orphans'

  /**
   * Function to reload file dimensions and size information
   */
  function refresh_db()
  {
    $db = cpgDB::getInstance();
    $config = cpgConfig::getInstance();

    global $lang_util_php;

    $_SESSION['pageHeading'] = $lang_util_php['page_heading_refresh_db'];

    $albumid = (isset($_POST['albumid']) ? (int)$_POST['albumid'] : 0);
    $albstr = ($albumid) ? " WHERE aid = '$albumid'" : '';

    $numpics = (int)$_POST['refresh_numpics'];
    $startpic = (isset($_POST['refresh_startpic'])) ? (int)$_POST['refresh_startpic'] : 0;

    /**
     * Query to fetch picture's details for all albums or for a particular album in limit
     */
    $query = 'SELECT * FROM '.$config->conf['TABLE_PICTURES'].$albstr." ORDER BY pid ASC LIMIT $startpic, $numpics";
    $db->query($query);

    $count = $db->nf();

    $i = 0;
    $_SESSION['message'] = '';
    $_SESSION['data'] = array();
    $_SESSION['processMore'] = array();

    while ($row = $db->fetchRow()) {
      extract($row, EXTR_PREFIX_ALL, 'db');

      $_SESSION['data'][$i]['dbPid'] = $db_pid;
      $_SESSION['data'][$i]['dbPwidth'] = $db_pwidth;
      $_SESSION['data'][$i]['dbPheight'] = $db_pheight;
      $_SESSION['data'][$i]['dbFilesize'] = $db_filesize;
      $_SESSION['data'][$i]['dbTotalFilesize'] = $db_total_filesize;
      $_SESSION['data'][$i]['image'] = $config->conf['fullpath'].$db_filepath.$db_filename;
      $_SESSION['data'][$i]['fullPicUrl'] = $config->conf['fullpath'].$db_filepath.$db_filename;
      $_SESSION['data'][$i]['thumbUrl'] = $config->conf['fullpath'].$db_filepath.$config->conf['thumb_pfx'].$db_filename;
      $_SESSION['data'][$i]['normalUrl'] = $config->conf['fullpath'].$db_filepath.$config->conf['normal_pfx'].$db_filename;
      $_SESSION['data'][$i++]['url'] = '<a href="'.$config->conf['ecards_more_pic_target'].(substr($config->conf['ecards_more_pic_target'], -1) == '/' ? '' : '/').'displayimage.php?pos=-'.$db_pid.'" target="_blank">'.$db_title.' ('.$db_pid.')</a>';
    }

    $_SESSION['albumid'] = $albumid;
    $_SESSION['action'] = 'refresh_db';

    if ($count == $numpics) {
      $startpic += $numpics;

      /**
       * Store values in session to display 'Continue' button
       */
      $_SESSION['processMore'] = array(
                                       'albumid' => $albumid,
                                       'action' => 'refresh_db',
                                       'refresh_numpics' => $numpics,
                                       'refresh_startpic' => $startpic
                                       );
    }
  } // End of function 'refresh_db'

  /**
   * Function to reset file's views
   */
  function reset_views()
  {
    $db = cpgDB::getInstance();
    $config = cpgConfig::getInstance();

    global $lang_util_php;

    $_SESSION['pageHeading'] = $lang_util_php['page_heading_reset_views'];

    $albumid = (isset($_POST['albumid'])) ? (int)$_POST['albumid'] : 0;
    $albstr = ($albumid) ? " WHERE aid = '$albumid'" : '';

    $_SESSION['message'] = '';
    $_SESSION['data'] = array();
    $_SESSION['processMore'] = array();

    $_SESSION['albumid'] = $albumid;
    $_SESSION['action'] = 'reset_views';

    $query = "UPDATE ".$config->conf['TABLE_PICTURES']." SET hits ='0'".$albstr;
    $db->query($query);

    $_SESSION['message'] = $lang_util_php['views_reset'];
  } // End of function 'reset_views'
}
?>
