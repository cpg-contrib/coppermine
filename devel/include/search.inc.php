<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2005 Coppermine Dev Team
  v1.1 originaly written by Gregory DEMAR

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation; either version 2 of the License, or
  (at your option) any later version.
  ********************************************
  Coppermine version: 1.4.1
  $Source$
  $Revision$
  $Author$
  $Date$
**********************************************/

if (!defined('IN_COPPERMINE')) { die('Not in Coppermine...');}

// encoding match for workaround

$multibyte_charset = 'utf-8, big5, shift_jis, euc-kr, gb2312';

$charset = $CONFIG['charset'] == 'language file' ? $GLOBALS['lang_charset'] : $CONFIG['charset'];

$sort_array = array('na' => 'filename ASC', 'nd' => 'filename DESC', 'ta'=>'title ASC', 'td'=>'title DESC', 'da' => 'pid ASC', 'dd' => 'pid DESC', 'pa' => 'position ASC', 'pd' => 'position DESC');
$sort_code = isset($USER['sort'])? $USER['sort'] : $CONFIG['default_sort_order'];
$sort_order = isset($sort_array[$sort_code]) ? $sort_array[$sort_code] : $sort_array[$CONFIG['default_sort_order']];

$mb_charset = stristr($multibyte_charset, $charset);

$search_string = str_replace('*', '%', addslashes($search_string));
$search_string = preg_replace('/&.*;/i', '', $search_string);

if (!$mb_charset)
        $search_string = preg_replace('/[^0-9a-z %]/i', '', $search_string);

if (!isset($USER['search']['params'])){
        $USER['search']['params']['title'] = $USER['search']['params']['caption'] = $USER['search']['params']['keywords'] = 1;
}

if (isset($_GET['album']) && $_GET['album'] == 'search')
        $_POST = $USER['search'];


$type = $_POST['type'] ? " {$_POST['type']} " : " OR ";

$_POST['params']['pic_hdr_ip']  = $_POST['params']['pic_raw_ip'];

if ($search_string && isset($_POST['params'])) {
        $sql = "SELECT * FROM {$CONFIG['TABLE_PICTURES']} WHERE ";
        $split_search = explode(' ', $search_string);
        $sections = array();

        foreach($split_search as $word) {

                $fields = array();

                foreach ($_POST['params'] as $param => $value)
                        $fields[] = "$param LIKE '%$word%'";

                $sections[] = '(' . implode(' OR ', $fields) . ')';
        }

        $sql .= implode($type, $sections);

        $sql .= $_POST['newer_than'] ? ' AND ctime > UNIX_TIMESTAMP() - '.($_POST['newer_than'] * 60*60*24) : '';
        $sql .= $_POST['older_than'] ? ' AND ctime < UNIX_TIMESTAMP() - '.($_POST['older_than'] * 60*60*24) : '';
        $sql .=  " $ALBUM_SET";

        $temp = str_replace('SELECT *', 'SELECT COUNT(*)', $sql);
        $result = cpg_db_query($temp);
        $row = mysql_fetch_row($result);
        $count = $row[0];

        $sql .= " ORDER BY $sort_order $limit";
        $result = cpg_db_query($sql);
        $rowset = cpg_db_fetch_rowset($result);
        mysql_free_result($result);

        if ($set_caption) {
                foreach ($rowset as $key => $row) {
                        $user_link = ($CONFIG['display_uploader'] && $rowset[$key]['owner_id'] && $rowset[$key]['owner_name'] && !($CONFIG['hide_admin_uploader'] && in_array($rowset[$key]['owner_id'],$CONFIG['ADMIN_USERS']))) ? '<span class="thumb_title"><a href ="profile.php?uid='.$rowset[$key]['owner_id'].'">'.$rowset[$key]['owner_name'].'</a></span>' : '';
                        $caption = $rowset[$key]['title'] ? "<span class=\"thumb_title\">" . $rowset[$key]['title'] . "</span>" : '';
                        if ($CONFIG['caption_in_thumbview']) {
                                $caption .= $rowset[$key]['caption'] ? "<span class=\"thumb_caption\">" . bb_decode($rowset[$key]['caption']) . "</span>" : '';
                        }
                        $rowset[$key]['caption_text'] = $user_link . $caption;
                }
        }
}
?> 