<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2007 Coppermine Dev Team
  v1.1 originally written by Gregory DEMAR

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 3
  as published by the Free Software Foundation.
  
  ********************************************
  Coppermine version: 1.5.0
  $HeadURL$
  $Revision$
  $LastChangedBy$
  $Date$
**********************************************/

if (!defined('IN_COPPERMINE')) { die('Not in Coppermine...');}

// encoding match for workaround

$multibyte_charset = 'utf-8, big5, shift_jis, euc-kr, gb2312';

$charset = $CONFIG['charset'] == 'language file' ? $GLOBALS['lang_charset'] : $CONFIG['charset'];

$sort_array = array('na' => 'filename ASC', 'nd' => 'filename DESC', 'ta'=>'title ASC', 'td'=>'title DESC', 'da' => 'pid ASC', 'dd' => 'pid DESC', 'pa' => 'position ASC', 'pd' => 'position DESC');
$sort_code = isset($USER['sort'])? $USER['sort'] : $CONFIG['default_sort_order'];
$sort_order = isset($sort_array[$sort_code]) ? $sort_array[$sort_code] : $sort_array[$CONFIG['default_sort_order']];

$allowed = array('title', 'caption', 'keywords', 'owner_name', 'filename', 'pic_raw_ip', 'pic_hrd_ip', 'user1', 'user2', 'user3', 'user4');

$mb_charset = stristr($multibyte_charset, $charset);

$search_string = preg_replace('/&.*;/i', '', $search_string);

if (!$mb_charset){
	$search_string = preg_replace('/[^0-9a-z %]/i', '', $search_string);
}

if (!isset($USER['search']['params'])){
        $USER['search']['params']['title'] = $USER['search']['params']['caption'] = $USER['search']['params']['keywords'] = $USER['search']['params']['filename'] = 1;
}

//if (isset($_GET['album']) && $_GET['album'] == 'search'){
//	$_POST = $USER['search'];
//}
if ($superCage->get->keyExists('album') && $superCage->get->getAlpha('album') == 'search'){
	$search_params = $USER['search'];
	$search_params['type'] = $superCage->get->getAlpha('type');
}else{
	//put all original $_POST vars in $search_params, don't know if this could be used???
	$search_params = $superCage->post->_source;
}


$type = $search_params['type'] == 'AND' ? " AND " : " OR ";

if (isset($search_params['params']['pic_raw_ip'])) $search_params['params']['pic_hdr_ip']  = $search_params['params']['pic_raw_ip'];

if ($search_string && isset($search_params['params'])) {
        $sql = "SELECT * FROM {$CONFIG['TABLE_PICTURES']} WHERE ";
        $search_string = strtr($search_string, array('_' => '\_', '%' => '\%', '*' => '%'));
        $split_search = explode(' ', $search_string);
        $sections = array();

        foreach($split_search as $word) {
          $word = addslashes($word);
          $fields = array();

          foreach ($search_params['params'] as $param => $value){
            if (in_array($param, $allowed))$fields[] = "$param LIKE '%$word%'";
          }
          $sections[] = '(' . implode(' OR ', $fields) . ')';
        }

        $sql .= '(' . implode($type, $sections) . ')';

        $sql .= $search_params['newer_than'] ? ' AND ctime > UNIX_TIMESTAMP() - '.( (int) $search_params['newer_than'] * 60*60*24) : '';
        $sql .= $search_params['older_than'] ? ' AND ctime < UNIX_TIMESTAMP() - '.( (int) $search_params['older_than'] * 60*60*24) : '';
       $sql .=  " $ALBUM_SET AND approved = 'YES'";

        $temp = str_replace('SELECT *', 'SELECT COUNT(*)', $sql);
        $result = cpg_db_query($temp);
        $row = mysql_fetch_row($result);
        $count = $row[0];

        $sql .= " ORDER BY $sort_order $limit";
        $result = cpg_db_query($sql);
        $rowset = cpg_db_fetch_rowset($result);
        mysql_free_result($result);

        if ($set_caption) build_caption($rowset);


}
?>
