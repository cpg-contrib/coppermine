<?php
// ------------------------------------------------------------------------- //
//  Coppermine Photo Gallery                                                 //
// ------------------------------------------------------------------------- //
//  Copyright (C) 2002,2003  Grégory DEMAR <gdemar@wanadoo.fr>               //
//  http://www.chezgreg.net/coppermine/                                      //
// ------------------------------------------------------------------------- //
//  Based on PHPhotoalbum by Henning Støverud <henning@stoverud.com>         //
//  http://www.stoverud.com/PHPhotoalbum/                                    //
// ------------------------------------------------------------------------- //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
// ------------------------------------------------------------------------- //

define('IN_COPPERMINE', true);
define('INDEX_PHP', true);

require('include/init.inc.php');

/**************************************************************************
 * Local functions definition
 **************************************************************************/

function html_albummenu($id)
{
	global $template_album_admin_menu, $lang_album_admin_menu;

	static $template = '';

	if($template == ''){
		$params = array(
			'{CONFIRM_DELETE}' => $lang_album_admin_menu['confirm_delete'],
			'{DELETE}' => $lang_album_admin_menu['delete'],
			'{MODIFY}' => $lang_album_admin_menu['modify'],
			'{EDIT_PICS}' => $lang_album_admin_menu['edit_pics'],
		);

		$template = template_eval($template_album_admin_menu, $params);
	}

	$params = array(
		'{ALBUM_ID}' => $id,
	);

	return template_eval($template, $params);
}

function get_subcat_data($parent, &$cat_data, &$album_set_array, $level, $ident='')
{
    global $CONFIG, $HIDE_USER_CAT;

	$result = db_query("SELECT cid, name, description FROM {$CONFIG['TABLE_CATEGORIES']} WHERE parent = '$parent'  ORDER BY pos");

	if (mysql_num_rows($result) > 0){
		$rowset = db_fetch_rowset($result);
		foreach ($rowset as $subcat){

			if ($subcat['cid'] == USER_GAL_CAT) {
				$result=db_query("SELECT aid FROM {$CONFIG['TABLE_ALBUMS']} WHERE category >= ".FIRST_USER_CAT);
				$album_count = mysql_num_rows($result);
				while($row = mysql_fetch_array($result)){
					$album_set_array[] = $row['aid'];
				} // while
				mysql_free_result($result);

				$result=db_query("SELECT count(*) FROM {$CONFIG['TABLE_PICTURES']}, {$CONFIG['TABLE_ALBUMS']} WHERE {$CONFIG['TABLE_PICTURES']}.aid = {$CONFIG['TABLE_ALBUMS']}.aid AND category >= ".FIRST_USER_CAT);
				$nbEnr = mysql_fetch_array($result);
				$pic_count = $nbEnr[0];

				$subcat['description'] = preg_replace("/<br.*?>[\r\n]*/i",'<br />'.$ident , bb_decode($subcat['description']));
				$link = $ident."<a href=index.php?cat={$subcat['cid']}>{$subcat['name']}</a>";
				if($album_count){
					$cat_data[]=array($link, $ident.$subcat['description'], $album_count, $pic_count);
					$HIDE_USER_CAT = 0;
				} else {
					$HIDE_USER_CAT = 1;
				}

			} else {
				$result=db_query("SELECT aid FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = {$subcat['cid']}");
				$album_count = mysql_num_rows($result);
				while($row = mysql_fetch_array($result)){
					$album_set_array[] = $row['aid'];
				} // while
				mysql_free_result($result);

				$result=db_query("SELECT count(*) FROM {$CONFIG['TABLE_PICTURES']}, {$CONFIG['TABLE_ALBUMS']} WHERE {$CONFIG['TABLE_PICTURES']}.aid = {$CONFIG['TABLE_ALBUMS']}.aid AND category = {$subcat['cid']}");
				$nbEnr = mysql_fetch_array($result);
				mysql_free_result($result);
				$pic_count = $nbEnr[0];

				$subcat['name'] = $subcat['name'];
				$subcat['description'] = preg_replace("/<br.*?>[\r\n]*/i",'<br />'.$ident , bb_decode($subcat['description']));
				$link = $ident."<a href=\"index.php?cat={$subcat['cid']}\">{$subcat['name']}</a>";
				if($pic_count == 0 && $album_count ==0 ){
					$cat_data[]=array($link, $ident.$subcat['description']);
				} else {
					$cat_data[]=array($link, $ident.$subcat['description'], $album_count, $pic_count);
				}
			}

			if ($level > 1) get_subcat_data($subcat['cid'], $cat_data, $album_set_array, $level -1, $ident."<img src=\"images/spacer.gif\" width=\"20\" height=\"1\">");
		}
	}
}

// List all categories
function get_cat_list(&$breadcrumb, &$cat_data, &$statistics)
{
	global $HTTP_GET_VARS, $CONFIG, $ALBUM_SET, $CURRENT_CAT_NAME, $BREADCRUMB_TEXT, $STATS_IN_ALB_LIST;
	global $HIDE_USER_CAT;
	global $cat;
	global $lang_list_categories, $lang_errors;

	// Build the breadcrumb
	breadcrumb($cat, $breadcrumb, $BREADCRUMB_TEXT);

	// Build the category list
	$cat_data = array();
	$album_set_array = array();
	get_subcat_data($cat, $cat_data, $album_set_array, $CONFIG['subcat_level']);

	// Add the albums in the current category to the album set
	if ($cat) {
		if ($cat == USER_GAL_CAT) {
			$result=db_query("SELECT aid FROM {$CONFIG['TABLE_ALBUMS']} WHERE category >= ".FIRST_USER_CAT);
		} else {
			$result=db_query("SELECT aid FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = '$cat'");
		}
		while($row = mysql_fetch_array($result)){
			$album_set_array[] = $row['aid'];
		} // while
		mysql_free_result($result);
	}
	if (count($album_set_array) && $cat) {
		$set ='';
	    foreach ($album_set_array as $album) $set .= $album.',';
		$set = substr($set, 0, -1);
		$current_album_set = "AND aid IN ($set) ";
		$ALBUM_SET .= $current_album_set;
	} elseif ($cat) {
		$current_album_set = "AND aid IN (-1) ";
		$ALBUM_SET .= $current_album_set;
	}

	// Gather gallery statistics
	if ($cat == 0) {
		$result=db_query("SELECT count(*) FROM {$CONFIG['TABLE_ALBUMS']} WHERE 1");
		$nbEnr = mysql_fetch_array($result);
		$album_count = $nbEnr[0];
		mysql_free_result($result);

		$result=db_query("SELECT count(*) FROM {$CONFIG['TABLE_PICTURES']} WHERE 1");
		$nbEnr = mysql_fetch_array($result);
		$picture_count = $nbEnr[0];
		mysql_free_result($result);

		$result=db_query("SELECT count(*) FROM {$CONFIG['TABLE_COMMENTS']} WHERE 1");
		$nbEnr = mysql_fetch_array($result);
		$comment_count = $nbEnr[0];
		mysql_free_result($result);

		$result=db_query("SELECT count(*) FROM {$CONFIG['TABLE_CATEGORIES']} WHERE 1");
		$nbEnr = mysql_fetch_array($result);
		$cat_count = $nbEnr[0] - $HIDE_USER_CAT;
		mysql_free_result($result);

		$result=db_query("SELECT sum(hits) FROM {$CONFIG['TABLE_PICTURES']} WHERE 1");
		$nbEnr = mysql_fetch_array($result);
		$hit_count = (int)$nbEnr[0];
		mysql_free_result($result);

		if (count($cat_data)) {
			$statistics = strtr($lang_list_categories['stat1'], array(
				'[pictures]' => $picture_count,
				'[albums]' => $album_count,
				'[cat]' => $cat_count,
				'[comments]' => $comment_count,
				'[views]' => $hit_count));
		} else {
			$STATS_IN_ALB_LIST = true;
			$statistics = strtr($lang_list_categories['stat3'], array(
				'[pictures]' => $picture_count,
				'[albums]' => $album_count,
				'[comments]' => $comment_count,
				'[views]' => $hit_count));
		}

	} elseif ($cat >= FIRST_USER_CAT && $ALBUM_SET) {
		$result=db_query("SELECT count(*) FROM {$CONFIG['TABLE_ALBUMS']} WHERE 1 $current_album_set");
		$nbEnr = mysql_fetch_array($result);
		$album_count = $nbEnr[0];
		mysql_free_result($result);

		$result=db_query("SELECT count(*) FROM {$CONFIG['TABLE_PICTURES']} WHERE 1 $current_album_set");
		$nbEnr = mysql_fetch_array($result);
		$picture_count = $nbEnr[0];
		mysql_free_result($result);

		$result=db_query("SELECT sum(hits) FROM {$CONFIG['TABLE_PICTURES']} WHERE 1 $current_album_set");
		$nbEnr = mysql_fetch_array($result);
		$hit_count = (int)$nbEnr[0];
		mysql_free_result($result);

		$statistics = strtr($lang_list_categories['stat2'], array(
				'[pictures]' => $picture_count,
				'[albums]' => $album_count,
				'[views]' => $hit_count));

	} else {
		$statistics = '';
	}

}

function list_users()
{
	global $CONFIG, $PAGE, $FORBIDDEN_SET;
	global $lang_list_users, $lang_errors, $template_user_list_info_box;

	if (defined('UDB_INTEGRATION')) {
	    $result = udb_list_users_query($user_count);
	} else {
		$sql =  "SELECT user_id,".
				"		user_name,".
				"		COUNT(DISTINCT a.aid) as alb_count,".
				"		COUNT(DISTINCT pid) as pic_count,".
				"		MAX(pid) as thumb_pid ".
				"FROM {$CONFIG['TABLE_USERS']} AS u ".
				"INNER JOIN {$CONFIG['TABLE_ALBUMS']} AS a ON category = ".FIRST_USER_CAT." + user_id ".
				"INNER JOIN {$CONFIG['TABLE_PICTURES']} AS p ON p.aid = a.aid ".
				"WHERE approved = 'YES' ".
				"$FORBIDDEN_SET ".
				"GROUP BY user_id ".
				"ORDER BY user_name ";
		$result=db_query($sql);

		$user_count = mysql_num_rows($result);
	}

	if (!$user_count) {
	    msg_box($lang_list_users['user_list'], $lang_list_users['no_user_gal'], '', '', '100%');
		mysql_free_result($result);
		return;
	}

	$user_per_page = $CONFIG['thumbcols'] * $CONFIG['thumbrows'];
	$totalPages = ceil($user_count / $user_per_page);
	if ($PAGE > $totalPages) $PAGE = 1;
	$lower_limit = ($PAGE-1) * $user_per_page;
	$upper_limit = min($user_count, $PAGE * $user_per_page);
	$row_count = $upper_limit-$lower_limit;

	if (defined('UDB_INTEGRATION')) {
	    $rowset = udb_list_users_retrieve_data($result, $lower_limit, $row_count);
	} else {
		$rowset = array();
		$i=0;
		mysql_data_seek($result, $lower_limit);
		while (($row = mysql_fetch_array($result)) && ($i++ < $row_count)) $rowset[] = $row;
		mysql_free_result($result);
	}

	$user_list = array();
	foreach ($rowset as $user){
		$user_thumb = '<img src="images/nopic.jpg" class="image" border="0" />';
		$user_pic_count   = $user['pic_count'];
		$user_thumb_pid   = $user['thumb_pid'];
		$user_album_count = $user['alb_count'];

		if ($user_pic_count) {
			$sql =  "SELECT filepath, filename, url_prefix, pwidth, pheight ".
					"FROM {$CONFIG['TABLE_PICTURES']} ".
					"WHERE pid='$user_thumb_pid'";
			$result = db_query($sql);
			if (mysql_num_rows($result)) {
				$picture = mysql_fetch_array($result);
				mysql_free_result($result);

				$image_size = compute_img_size($picture['pwidth'], $picture['pheight'], $CONFIG['thumb_width']);
				$user_thumb = "<img src=\"" .get_pic_url($picture, 'thumb')."\" {$image_size['geom']} alt=\"\" border=\"0\" class=\"image\" />";
			 }
		}

		$albums_txt = sprintf($lang_list_users['n_albums'], $user_album_count);
		$pictures_txt = sprintf($lang_list_users['n_pics'], $user_pic_count);

		$params = array(
			'{USER_NAME}' => $user['user_name'],
			'{USER_ID}' => $user['user_id'],
			'{ALBUMS}' => $albums_txt,
			'{PICTURES}' => $pictures_txt,
		);
		$caption = template_eval($template_user_list_info_box, $params);

		$user_list[]=array(
			'cat' => FIRST_USER_CAT + $user['user_id'],
			'image' => $user_thumb,
			'caption' => $caption,
		);
	}
	theme_display_thumbnails($user_list, $user_count, '', '', 1, $PAGE, $totalPages, false, true, 'user');
}


// List all albums
function list_albums()
{
	global $CONFIG, $USER, $PAGE, $lastup_date_fmt;
	global $cat;
	global $lang_list_albums, $lang_errors;

	$alb_per_page = $CONFIG['albums_per_page'];
	$maxTab = $CONFIG['max_tabs'];

	$result = db_query("SELECT count(*) FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = '$cat'");
	$nbEnr = mysql_fetch_array($result);
	$nbAlb = $nbEnr[0];
	mysql_free_result($result);

	if (!$nbAlb) return;

	$totalPages = ceil($nbAlb / $alb_per_page);

	if ($PAGE > $totalPages) $PAGE = 1;
	$lower_limit = ($PAGE-1) * $alb_per_page;
	$upper_limit = min($nbAlb, $PAGE * $alb_per_page);
	$limit = "LIMIT ". $lower_limit . "," . ($upper_limit-$lower_limit);

	$sql =  "SELECT a.aid, a.title, description, visibility, filepath, ".
			"		filename, url_prefix, pwidth, pheight ".
			"FROM {$CONFIG['TABLE_ALBUMS']} as a ".
			"LEFT JOIN {$CONFIG['TABLE_PICTURES']} as p ON thumb=pid ".
			"WHERE category = '$cat' ORDER BY pos ".
			"$limit";
	$alb_thumbs_q = db_query($sql);
	$alb_thumbs = db_fetch_rowset($alb_thumbs_q);
	mysql_free_result($alb_thumbs_q);

	$disp_album_count = count($alb_thumbs);
	$album_set = '';
	foreach($alb_thumbs as $value){
		$album_set .= $value['aid'].', ';
	}
	$album_set = '('.substr($album_set,0, -2).')';

	$sql =  "SELECT aid, count(pid) as pic_count, max(pid) as last_pid, max(ctime) as last_upload ".
			"FROM {$CONFIG['TABLE_PICTURES']} ".
			"WHERE aid IN $album_set AND approved = 'YES' ".
			"GROUP BY aid";
	$alb_stats_q = db_query($sql);
	$alb_stats = db_fetch_rowset($alb_stats_q);
	mysql_free_result($alb_stats_q);

	foreach($alb_stats as $key => $value){
		$cross_ref[$value['aid']] = &$alb_stats[$key];
	}


	for ($alb_idx=0; $alb_idx < $disp_album_count; $alb_idx++) {

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
		if ($count > 0) {
			$visibility = $alb_thumb['visibility'];
			if ($visibility == '0' || $visibility == (FIRST_USER_CAT + USER_ID) || strstr(USER_GROUP_SET, $visibility)) {
				if ($alb_thumb['filename']) {
				    $picture = &$alb_thumb;
				} else {
					$sql =  "SELECT filepath, filename, url_prefix, pwidth, pheight ".
							"FROM {$CONFIG['TABLE_PICTURES']} ".
							"WHERE pid='{$alb_stat['last_pid']}'";
					$result = db_query($sql);
					$picture = mysql_fetch_array($result);
					mysql_free_result($result);
				}
				$image_size = compute_img_size($picture['pwidth'], $picture['pheight'], $CONFIG['alb_list_thumb_size']);
				$alb_list[$alb_idx]['thumb_pic'] = "<img src=\"" . get_pic_url($picture, 'thumb') ."\" {$image_size['geom']} alt=\"\" border=\"0\" class=\"image\" />";
			} else {
				$image_size = compute_img_size(100, 75, $CONFIG['alb_list_thumb_size']);
				$alb_list[$alb_idx]['thumb_pic'] = "<img src=\"images/private.jpg\" {$image_size['geom']} alt=\"\" border=\"0\" class=\"image\" />";
			}
		} else {
			$image_size = compute_img_size(100, 75, $CONFIG['alb_list_thumb_size']);
			$alb_list[$alb_idx]['thumb_pic'] = "<img src=\"images/nopic.jpg\" {$image_size['geom']} alt=\"\" border=\"0\" class=\"image\" />";
		}

		// Prepare everything
		$last_upload_date = $count ? localised_date($alb_stat['last_upload'], $lastup_date_fmt) : '';
		$alb_list[$alb_idx]['aid']            = $alb_thumb['aid'];
		$alb_list[$alb_idx]['album_title']    = $alb_thumb['title'];
		$alb_list[$alb_idx]['album_desc']     = bb_decode($alb_thumb['description']);
		$alb_list[$alb_idx]['pic_count']      = $count;
		$alb_list[$alb_idx]['last_upl']       = $last_upload_date;
		$alb_list[$alb_idx]['album_info']     = sprintf($lang_list_albums['n_pictures'], $count).($count ? sprintf($lang_list_albums['last_added'], $last_upload_date) : "" );

		$alb_list[$alb_idx]['album_adm_menu'] = (GALLERY_ADMIN_MODE || (USER_ADMIN_MODE && $cat == USER_ID + FIRST_USER_CAT)) ? html_albummenu($alb_thumb['aid']) : '';
	}

	theme_display_album_list($alb_list, $nbAlb, $cat, $PAGE, $totalPages);
}

/**************************************************************************
 * Main code
 **************************************************************************/

if (isset($HTTP_GET_VARS['page'])){
	$PAGE = max((int)$HTTP_GET_VARS['page'], 1);
	$USER['lap'] = $PAGE;
} elseif (isset($USER['lap'])){
	$PAGE = max((int)$USER['lap'],1);
} else {
	$PAGE = 1;
}

if (isset($HTTP_GET_VARS['cat'])) {
    $cat = (int)$HTTP_GET_VARS['cat'];
}

// Gather data for categories
$breadcrumb = '';
$cat_data = array();
$statistics = '';
$STATS_IN_ALB_LIST = false;
get_cat_list($breadcrumb, $cat_data, $statistics );

pageheader($BREADCRUMB_TEXT ? $BREADCRUMB_TEXT : $lang_index_php['welcome']);

$elements = preg_split("|/|", $CONFIG['main_page_layout'], -1, PREG_SPLIT_NO_EMPTY);
foreach ($elements as $element){
	if (preg_match("/(\w+),*(\d+)*/", $element, $matches))	switch($matches[1]){
		case 'catlist':
		if ($breadcrumb != '' || count($cat_data) > 0) theme_display_cat_list($breadcrumb, $cat_data, $statistics);
		if (isset($cat) && $cat == USER_GAL_CAT) list_users();
		flush();
		break;

		case 'alblist':
		list_albums();
		flush();
		break;

		case 'random':
		display_thumbnails('random', $cat, 1, $CONFIG['thumbcols'], max(1,$matches[2]), false);
		flush();
		break;

		case 'lastup':
		display_thumbnails('lastup', $cat, 1, $CONFIG['thumbcols'], max(1,$matches[2]), false);
		flush();
		break;

		case 'topn':
		display_thumbnails('topn', $cat, 1, $CONFIG['thumbcols'], max(1,$matches[2]), false);
		flush();
		break;

		case 'toprated':
		display_thumbnails('toprated', $cat, 1, $CONFIG['thumbcols'], max(1,$matches[2]), false);
		flush();
		break;

		case 'lastcom':
		display_thumbnails('lastcom', $cat, 1, $CONFIG['thumbcols'], max(1,$matches[2]), false);
		flush();
		break;
	}
}

pagefooter();
ob_end_flush();

// Speed-up the random image query by 'keying' the image table
if(time() - $CONFIG['randpos_interval'] > 86400){
	$result = db_query("SELECT count(*) FROM {$CONFIG['TABLE_PICTURES']} WHERE 1");
	$nbEnr = mysql_fetch_array($result);
	mysql_free_result($result);
	$pic_count = $nbEnr[0];
	$granularity = floor($pic_count / RANDPOS_MAX_PIC);
	$result=db_query("UPDATE {$CONFIG['TABLE_PICTURES']} SET randpos = ROUND(RAND()*$granularity) WHERE 1");
	$result=db_query("UPDATE {$CONFIG['TABLE_CONFIG']} SET value = '".time()."' WHERE name = 'randpos_interval'");
}
?>