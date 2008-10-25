<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2008 Dev Team
  v1.1 originally written by Gregory DEMAR

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 3
  as published by the Free Software Foundation.
  
  ********************************************
  Coppermine version: 1.5.0
  $HeadURL: https://coppermine.svn.sourceforge.net/svnroot/coppermine/trunk/cpg1.5.x/include/search.inc.php $
  $Revision: 5129 $
  $LastChangedBy: gaugau $
  $Date: 2008-10-18 16:03:12 +0530 (Sat, 18 Oct 2008) $
**********************************************/

if (!defined('IN_COPPERMINE')) { die('Not in Coppermine...');}
##########  DB   ##########
global $cpg_db_search_inc;
########################
// encoding match for workaround

$multibyte_charset = 'utf-8, big5, shift_jis, euc-kr, gb2312';

$charset = $CONFIG['charset'] == 'language file' ? $GLOBALS['lang_charset'] : $CONFIG['charset'];

$sort_array = array('na' => 'filename ASC', 'nd' => 'filename DESC', 'ta'=>'title ASC', 'td'=>'title DESC', 'da' => 'pid ASC', 'dd' => 'pid DESC', 'pa' => 'position ASC', 'pd' => 'position DESC');
$sort_code = isset($USER['sort'])? $USER['sort'] : $CONFIG['default_sort_order'];
$sort_order = isset($sort_array[$sort_code]) ? $sort_array[$sort_code] : $sort_array[$CONFIG['default_sort_order']];

$allowed = array('title', 'caption', 'keywords', 'owner_name', 'filename', 'pic_raw_ip', 'pic_hdr_ip', 'user1', 'user2', 'user3', 'user4');

$mb_charset = stristr($multibyte_charset, $charset);

$search_string = str_replace('&quot;', '"', $search_string);
$search_string = str_replace('\'', '"', $search_string);
$search_string = preg_replace('/&.*;/i', '', $search_string);

if (!$mb_charset) {
    $search_string = preg_replace('/[^0-9a-z %]/i', '', $search_string);
}

if (!isset($USER['search']['params'])) {
        $USER['search']['params']['title'] = $USER['search']['params']['caption'] = $USER['search']['params']['keywords'] = $USER['search']['params']['filename'] = 1;
}

//if (isset($_GET['album']) && $_GET['album'] == 'search') {
//  $_POST = $USER['search'];
//}
if ($superCage->get->keyExists('album') && $superCage->get->getAlpha('album') == 'search') {
    $search_params = $USER['search'];
    $search_params['type'] = $superCage->get->getAlpha('type');
} else {
    //put all original $_POST vars in $search_params, don't know if this could be used???
    $search_params = $superCage->post->_source;
}


$type = $search_params['type'] == 'AND' ? " AND " : " OR ";

if (isset($search_params['params']['pic_raw_ip'])) $search_params['params']['pic_hdr_ip']  = $search_params['params']['pic_raw_ip'];

$sql = '';

if ($search_string && isset($search_params['params'])) {
        $sections = array();
        $albcat_terms = array(); // For Album & Category Title Search: populated as needed
        if ($search_params['type'] == 'regex') {
                $fields = array();
                $search_string = preg_replace('/[^\w\+\*\?\{\,\}\|\(\)\\\^\$\[\]\:\<\>\-\.]/','',$search_string);
                $search_string = addslashes($search_string);
                if ($superCage->get->keyExists('album_title') || $superCage->get->keyExists('category_title')) $albcat_terms[] = " REGEXP '$search_string'";                
                foreach ($search_params['params'] as $param => $value) {
                        if (in_array($param, $allowed)) $fields[] = "$param REGEXP '$search_string'";
                }
                //$sql .= count($fields) ? ('((' . implode(' OR ', $fields) . '))') : '';
				########################		DB		#######################
				$sql_search_params = count($fields) ? ('((' . implode(' OR ', $fields) . '))') : '';
				#############################################################
         } else {
                $search_string = strtr($search_string, array('_' => '\_', '%' => '\%', '*' => '%'));

                $split_search = explode('"',$search_string);
                foreach ($split_search as $index => $string) {
                        if (($index & 1) && strlen($string)) {
                                $fields = array();
                                if ($superCage->get->keyExists('album_title') || $superCage->get->keyExists('category_title')) $albcat_terms[] = " LIKE '%$string%'";                                
                                foreach ($search_params['params'] as $param => $value) {
                                        if (in_array($param, $allowed)) $fields[] = "$param LIKE '%$string%'";
                                }
                                $sections[] = count($fields) ? '(' . implode(' OR ', $fields) . ')' : '';  
                        } elseif (strlen($string)) {
                                $words = explode(' ', $string);
                                foreach ($words as $word) {
                                        if (strlen($word)) {
                                                $word = addslashes($word);
                                                $fields = array();
                                                if ($superCage->get->keyExists('album_title') || $superCage->get->keyExists('category_title')) $albcat_terms[] = " LIKE '%$word%'";
                                                foreach ($search_params['params'] as $param => $value) {
                                                        if (in_array($param, $allowed)) $fields[] = "$param LIKE '%$word%'";
                                                }
                                                $sections[] = count($fields) ? '(' . implode(' OR ', $fields) . ')' : '';  
                                        }
                                }
                        }
                }
                
                //$sql .= count($sections) ? '(' . implode($type, $sections) . ')' : '0';
				############################		DB		###########################
				$sql_search_params = count($sections) ? '(' . implode($type, $sections) . ')' : '0';
				####################################################################
        }

        /*$sql .= $superCage->get->getInt('newer_than') ? ' AND ( ctime > UNIX_TIMESTAMP() - '.( $superCage->get->getInt('newer_than') * 60*60*24).')' : '';
        $sql .= $superCage->get->getInt('older_than') ? ' AND ( ctime < UNIX_TIMESTAMP() - '.( $superCage->get->getInt('older_than') * 60*60*24).')' : '';
        $sql .=  " AND approved = 'YES' $FORBIDDEN_SET";*/
		############################################		DB		###############################################
		$sql_newer_than = $superCage->get->getInt('newer_than') ? ' AND ( ctime > '.$cpgdb->timestamp().' - '.( $superCage->get->getInt('newer_than') * 60*60*24).')' : '';
		$sql_older_than = $superCage->get->getInt('older_than') ? ' AND ( ctime < '.$cpgdb->timestamp().' - '.( $superCage->get->getInt('older_than') * 60*60*24).')' : '';
		$sql .= "$sql_search_params  $sql_newer_than  $sql_older_than AND approved = 'YES' $FORBIDDEN_SET";
		##########################################################################################################

        if ($superCage->get->keyExists('album_title')) {
                /*$album_query = "SELECT * FROM `{$CONFIG['TABLE_ALBUMS']}` "
                        ." WHERE (`title` " . implode(" $type `title` ",$albcat_terms) . ')';
                $result = cpg_db_query($album_query);
                if (mysql_num_rows($result) > 0) {*/
				#################################		DB		##################################
				$cpgdb->query($cpg_db_search_inc['alb_title_album_query'], implode(" $type title ",$albcat_terms));
				$rowset = $cpgdb->fetchRowSet();
				if(count($rowset) > 0) {
				#################################################################################
                        starttable('100%', $lang_meta_album_names['album_search'],2);
                        //while($alb = mysql_fetch_assoc($result)) {
						foreach ($rowset as $alb) {	########	cpgdb_AL
                                /*$thumb_query = "SELECT filepath, filename, url_prefix, pwidth, pheight "
                                        ." FROM `{$CONFIG['TABLE_PICTURES']}` "
                                        ." WHERE (`aid` = '{$alb['aid']}') "
                                        ." ORDER BY `pid` DESC";
                                $thumb_result = cpg_db_query($thumb_query);
                                $thumb = mysql_fetch_assoc($thumb_result);*/
								#################################		DB		#################################
								$cpgdb->query($cpg_db_search_inc['alb_title_thumb_query'], $alb['aid']);
								$thumb = $cpgdb->fetchRow();
								################################################################################
                                // TO DO: query above only pulls in last_pid in each album, not correct album thumb as set by user

                                $thumb_url = get_pic_url($thumb, 'thumb');
                                $thumb_size = compute_img_size($thumb['pwidth'], $thumb['pheight'], $CONFIG['alb_list_thumb_size'], true, 'cat_thumb');
                                ?>
                                <tr>
                                  <td colspan="3" height="1" valign="top" class="tableh2">
                                    <span class="alblink"><a href="<?php printf("thumbnails.php?album=%u", $alb['aid']); ?>"><?php echo $alb['title'] ?></a></span>
                                  </td>  
                                </tr>
                                <tr>
                                        <td colspan="3">
                                                <img src="images/spacer.gif" width="1" height="1" border="0" alt="" /><br />
                                        </td>
                                </tr>                                
                                <tr>
                                  <td>
                                    <a href="<?php printf("thumbnails.php?album=%u", $alb['aid']); ?> "> 
                                        <img src="<?php echo $thumb_url?>"  class="image" <?php echo $thumb_size['geom'] ?> border="0" alt="<?php echo $thumb['filename'] ?>">
                                    </a>
                                  </td>
                                  <td width=100% valign=top>
                                    <?php if ($alb['description'] == "") { echo '&nbsp;'; } else { echo $alb['description']; } ?>
                                  </td>
                                </tr>
                                <?php
                        }	//foreach
                        endtable();
                        echo '<br/>';                        
                }
        }
                                              
        if ($superCage->get->keyExists('category_title')) {
                /*$category_query = "SELECT * FROM `{$CONFIG['TABLE_CATEGORIES']}` WHERE (`name` " . implode(" $type `name` ",$albcat_terms) . ')';
				$result = cpg_db_query($category_query);
				if (mysql_num_rows($result) > 0) {*/
				##################################		DB		##################################
				$cpgdb->query($cpg_db_search_inc['cat_title_category_query'], implode(" $type name ",$albcat_terms));
				$rowset = $cpgdb->fetchRowSet();
				if (count($rowset) > 0) {
				#################################################################################
                        starttable('100%', $lang_meta_album_names['category_search'],2);
                        //while ($cat = mysql_fetch_array($result,MYSQL_ASSOC)) {
						foreach ($rowset as $cat) {	########	cpgdb_AL
                                /*$album_q = "SELECT * FROM `{$CONFIG['TABLE_ALBUMS']}` WHERE (`category` = '{$cat['cid']}') ORDER BY `aid` DESC LIMIT 1";
                                $album_r = cpg_db_query($album_q);
                                $album = mysql_fetch_array($album_r);

                                // TO DO: This is weird.  It seems to pull in the largest aid's thumb for the category image?
                                $thumb_query = "SELECT filepath, filename, url_prefix, pwidth, pheight "
                                        ." FROM `{$CONFIG['TABLE_PICTURES']}` "
                                        ." WHERE (`aid` = '{$album['aid']}') "
                                        ." ORDER BY `pid` DESC";
                                $thumb_result = cpg_db_query($thumb_query);
                                $thumb = mysql_fetch_assoc($thumb_result);*/
								##################################		DB		#####################################
								$cpgdb->query($cpg_db_search_inc['cat_title_album_q'], $cat['cid']);
								$album = $cpgdb->fetchRow();

                                // TO DO: This is weird.  It seems to pull in the largest aid's thumb for the category image?
								$cpgdb->query($cpg_db_search_inc['cat_title_thumb_query'], $album['aid']);
								$cpgdb->fetchRow();
								####################################################################################
                                $thumb_url = get_pic_url($thumb, 'thumb');
                                $thumb_size = compute_img_size($thumb['pwidth'], $thumb['pheight'], $CONFIG['alb_list_thumb_size'], true, 'cat_thumb');

                                ?>
                                <tr>
                                  <td colspan="3" height="1" valign="top" class="tableh2">
                                    <span class="alblink"><a href="<?php printf("index.php?cat=%u", $cat['cid']); ?>"><?php echo $cat['name'] ?></a></span>
                                  </td>  
                                </tr>
                                <tr>
                                        <td colspan="3">
                                                <img src="images/spacer.gif" width="1" height="1" border="0" alt="" /><br />
                                        </td>
                                </tr>                                
                                <tr>
                                  <td>
                                    <a href="<?php printf("thumbnails.php?album=%u", $album['aid']); ?> "> 
                                        <img src="<?php echo $thumb_url?>"  class="image" <?php echo $thumb_size['geom'] ?> border="0" alt="<?php echo $thumb['filename'] ?>"><br/>
                                        <?php if ($album['title'] == "") { echo '&nbsp;'; } else { printf("<a href='thumbnails.php?album=%u'>{$album['title']}</a>", $album['aid']); } ?>
                                    </a>
                                  </td>
                                </tr>
                                <?php

                        }
                        endtable();
                        echo '<br/>';
                }
        }                                              

        // Make sure they selected some parameter other than album/category
        $other = 0;
        foreach ($search_params['params'] as $param => $value) {
            if (in_array($param, $allowed)) {
                $other = 1;
            }
        }
        
        
        /*if (!$other) {
            $sql = '0';
        }


        $query = "SELECT * FROM {$CONFIG['TABLE_PICTURES']} AS p WHERE " . $sql;

        $temp = str_replace('SELECT *', 'SELECT COUNT(*)', $query);
        $result = cpg_db_query($temp);	
        $row = mysql_fetch_row($result);
        $count = $row[0];

        $query .= " ORDER BY $sort_order $limit";
        $result = cpg_db_query($query);
        $rowset = cpg_db_fetch_rowset($result);
        mysql_free_result($result);*/
		####################################		DB		###################################
		if (!$other) {
            $sql = '1!=1';
        }
		$cpgdb->query($cpg_db_search_inc['temp_search_string'], $sql);
		$row = $cpgdb->fetchRow();
		$count = $row['count'];

		$cpgdb->query($cpg_db_search_inc['final_search_string'], $sql, $sort_order, $limit, $first_record, $records_per_page);
		$rowset = $cpgdb->fetchRowSet();
		$cpgdb->free();
		###################################################################################### 

        if ($set_caption) {
            build_caption($rowset);
        }


}
?>
