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
define('DISPLAYIMAGE_PHP', true);

require('include/init.inc.php');

if($CONFIG['enable_smilies']) include("include/smilies.inc.php");

if($CONFIG['read_exif_data'] && function_exists('exif_read_data')){
	include("include/exif_php.inc.php");
} elseif($CONFIG['read_exif_data']){
    cpg_die(CRITICAL_ERROR, 'PHP running on your server does not support reading EXIF data in JPEG files, please turn this off on the config page', __FILE__, __LINE__);
}

/**************************************************************************
 * Local functions definition
 **************************************************************************/

function html_picture_menu($id)
{
	global $lang_display_image_php;

	return <<<EOT
<div align="center" class="admin_menu"><a href="delete.php?id=$id&what=picture"  class="adm_menu" onclick="return confirm('{$lang_display_image_php['confirm_del']}');">{$lang_display_image_php['del_pic']}</a></div>

EOT;
}

// Prints the image-navigation menu
function html_img_nav_menu()
{
	global $CONFIG, $HTTP_SERVER_VARS, $HTTP_GET_VARS, $CURRENT_PIC_DATA, $PHP_SELF;
	global $album, $cat, $pos, $pic_count, $lang_img_nav_bar, $template_img_navbar;

	$cat_link= is_numeric($album) ? '' : '&cat='.$cat;

	$human_pos = $pos + 1;
	$page = ceil(($pos+1) / ($CONFIG['thumbrows'] * $CONFIG['thumbcols']));
	$pid = $CURRENT_PIC_DATA['pid'];

	if ($pos > 0) {
		$prev = $pos - 1;
		$prev_tgt = "$PHP_SELF?album=$album$cat_link&pos=$prev";
		$prev_title = $lang_img_nav_bar['prev_title'];
	} else {
		$prev_tgt = "javascript:;";
		$prev_title = "";
	}
	if ($pos < ($pic_count -1)) {
		$next = $pos + 1;
		$next_tgt = "$PHP_SELF?album=$album$cat_link&pos=$next";
		$next_title = $lang_img_nav_bar['next_title'];
	} else {
		$next_tgt = "javascript:;";
		$next_title = "";
	}

	if (USER_CAN_SEND_ECARDS){
		$ecard_tgt = "ecard.php?album=$album$cat_link&pid=$pid&pos=$pos";
		$ecard_title = $lang_img_nav_bar['ecard_title'];
	} else {
		$ecard_tgt = "javascript:alert('".addslashes($lang_img_nav_bar['ecard_disabled_msg'])."');";
		$ecard_title = $lang_img_nav_bar['ecard_disabled'];
	}

	$thumb_tgt = "thumbnails.php?album=$album$cat_link&page=$page";

	$slideshow_tgt = "$PHP_SELF?album=$album$cat_link&pid=$pid&slideshow=5000";

	$pic_pos = sprintf($lang_img_nav_bar['pic_pos'], $human_pos, $pic_count);

	$params = array(
		'{THUMB_TGT}' => $thumb_tgt,
		'{THUMB_TITLE}' => $lang_img_nav_bar['thumb_title'],
		'{PIC_INFO_TITLE}' => $lang_img_nav_bar['pic_info_title'],
		'{SLIDESHOW_TGT}' => $slideshow_tgt,
		'{SLIDESHOW_TITLE}' => $lang_img_nav_bar['slideshow_title'],
		'{PIC_POS}' => $pic_pos,
		'{ECARD_TGT}' => $ecard_tgt,
		'{ECARD_TITLE}' => $ecard_title,
		'{PREV_TGT}' => $prev_tgt,
		'{PREV_TITLE}' => $prev_title,
		'{NEXT_TGT}' => $next_tgt,
		'{NEXT_TITLE}' => $next_title,
	);

    return template_eval($template_img_navbar, $params);
}

// Displays a picture
function html_picture()
{
	global $CONFIG, $CURRENT_PIC_DATA, $CURRENT_ALBUM_DATA, $USER, $HTTP_COOKIE_VARS;
	global $album, $comment_date_fmt, $template_display_picture;
	global $lang_display_image_php;

	$pid = $CURRENT_PIC_DATA['pid'];

	if (!isset($USER['liv']) || !is_array($USER['liv'])) {
	    $USER['liv'] = array();
	}
	
	// Add 1 to hit counter
	if ($album != "lasthits" && !in_array($pid, $USER['liv']) && isset($HTTP_COOKIE_VARS[$CONFIG['cookie_name'].'_data'])){
		add_hit($pid);
		if (count($USER['liv']) > 4 ) array_shift($USER['liv']);
		array_push($USER['liv'], $pid);
	}

	if ($CONFIG['make_intermediate'] && max($CURRENT_PIC_DATA['pwidth'], $CURRENT_PIC_DATA['pheight']) > $CONFIG['picture_width'])  {
	    $picture_url = get_pic_url($CURRENT_PIC_DATA, 'normal');
	} else {
	    $picture_url = get_pic_url($CURRENT_PIC_DATA, 'fullsize');
	}

	$picture_menu =	((USER_ADMIN_MODE && $CURRENT_ALBUM_DATA['category'] == FIRST_USER_CAT + USER_ID) || GALLERY_ADMIN_MODE) ? html_picture_menu($pid) : '';

	$image_size = compute_img_size($CURRENT_PIC_DATA['pwidth'], $CURRENT_PIC_DATA['pheight'], $CONFIG['picture_width']);

	if (isset($image_size['reduced'])) {
		$winsizeX = $CURRENT_PIC_DATA['pwidth'] + 16;
		$winsizeY = $CURRENT_PIC_DATA['pheight'] + 16;
		$pic_html = "<a href=\"javascript:;\" onClick=\"MM_openBrWindow('displayimage.php?pid=$pid&fullsize=1','".uniqid(rand())."','toolbar=yes,status=yes,resizable=yes,width=$winsizeX,height=$winsizeY')\">";
		$pic_html .= "<img src=\"".$picture_url."\" {$image_size['geom']} class=\"image\" border=\"0\" alt=\"{$lang_display_image_php['view_fs']}\" /><br />";
		$pic_html .= "</a>\n";
	} else {
		$pic_html = "<img src=\"".$picture_url."\" {$image_size['geom']} class=\"image\" border=\"0\" /><br />\n";
	}

	if (!$CURRENT_PIC_DATA['title'] && !$CURRENT_PIC_DATA['caption']) {
		template_extract_block($template_display_picture, 'img_desc');
	} else {
		if (!$CURRENT_PIC_DATA['title']) {
			template_extract_block($template_display_picture, 'title');
		}
		if (!$CURRENT_PIC_DATA['caption']) {
			template_extract_block($template_display_picture, 'caption');
		}
	}

	$params = array(
		'{CELL_HEIGHT}' => '100',
		'{IMAGE}' => $pic_html,
		'{ADMIN_MENU}' => $picture_menu,
		'{TITLE}' => $CURRENT_PIC_DATA['title'],
		'{CAPTION}' => bb_decode($CURRENT_PIC_DATA['caption']),
	);

	return template_eval($template_display_picture, $params);
}

function html_rating_box()
{
	global $CONFIG, $CURRENT_PIC_DATA, $CURRENT_ALBUM_DATA;
	global $template_image_rating, $lang_rate_pic;

	if (!(USER_CAN_RATE_PICTURES && $CURRENT_ALBUM_DATA['votes'] == 'YES')) return '';

	$votes = $CURRENT_PIC_DATA['votes'] ? sprintf($lang_rate_pic['rating'], round($CURRENT_PIC_DATA['pic_rating']/2000, 1), $CURRENT_PIC_DATA['votes']) : $lang_rate_pic['no_votes'];
	$pid = $CURRENT_PIC_DATA['pid'];

	$params = array(
		'{TITLE}' => $lang_rate_pic['rate_this_pic'],
		'{VOTES}' => $votes,
		'{RATE0}' => "ratepic.php?pic=$pid&rate=0",
		'{RATE1}' => "ratepic.php?pic=$pid&rate=1",
		'{RATE2}' => "ratepic.php?pic=$pid&rate=2",
		'{RATE3}' => "ratepic.php?pic=$pid&rate=3",
		'{RATE4}' => "ratepic.php?pic=$pid&rate=4",
		'{RATE5}' => "ratepic.php?pic=$pid&rate=5",
		'{RUBBISH}' => $lang_rate_pic['rubbish'],
		'{POOR}' => $lang_rate_pic['poor'],
		'{FAIR}' => $lang_rate_pic['fair'],
		'{GOOD}' => $lang_rate_pic['good'],
		'{EXCELLENT}' => $lang_rate_pic['excellent'],
		'{GREAT}' => $lang_rate_pic['great'],
	);

	return template_eval($template_image_rating, $params);
}

// Display picture information
function html_picinfo()
{
	global $CONFIG, $CURRENT_PIC_DATA, $CURRENT_ALBUM_DATA, $THEME_DIR;
	global $album, $lang_picinfo, $lang_display_image_php, $lang_byte_units;

	if ($CURRENT_PIC_DATA['owner_id'] && $CURRENT_PIC_DATA['owner_name']) {
	    $owner_link = '<a href ="profile.php?uid='.$CURRENT_PIC_DATA['owner_id'].'">'.$CURRENT_PIC_DATA['owner_name'].'</a> / ';
	} else {
		$owner_link = '';
	}
	
	$info[$lang_picinfo['Filename']]   = htmlspecialchars($CURRENT_PIC_DATA['filename']);
	$info[$lang_picinfo['Album name']] = '<span class="alblink">'.$owner_link.'<a href="thumbnails.php?album=' . $CURRENT_PIC_DATA['aid'] . '">' . $CURRENT_ALBUM_DATA['title'].'</a></span>';

	if ($CURRENT_PIC_DATA['votes'] > 0) {
		if (defined('THEME_HAS_RATING_GRAPHICS')) {
		    $prefix= $THEME_DIR;
		} else {
		    $prefix= '';
		}
		$info[sprintf($lang_picinfo['Rating'], $CURRENT_PIC_DATA['votes'])] = '<img src="'.$prefix.'images/rating'.round($CURRENT_PIC_DATA['pic_rating']/2000).'.gif" align="absmiddle"/>';
	}

	$info[$lang_picinfo['Keywords']]   = '<span class="alblink">'.preg_replace("/(\S+)/","<a href=\"thumbnails.php?album=search&search=\\1\">\\1</a>" , $CURRENT_PIC_DATA['keywords']).'</span>';

	for ($i =1; $i<= 4; $i++){
		if ($CONFIG['user_field'.$i.'_name']) {
		    $info[$CONFIG['user_field'.$i.'_name']] = make_clickable($CURRENT_PIC_DATA['user'.$i]);
		}
	}

	$info[$lang_picinfo['File Size']]  = ($CURRENT_PIC_DATA['filesize'] > 10240 ? ($CURRENT_PIC_DATA['filesize'] >> 10).' '.$lang_byte_units[1] : $CURRENT_PIC_DATA['filesize'].' '.$lang_byte_units[0]);
	$info[$lang_picinfo['Dimensions']] = sprintf($lang_display_image_php['size'], $CURRENT_PIC_DATA['pwidth'], $CURRENT_PIC_DATA['pheight']);
	$info[$lang_picinfo['Displayed']]  = sprintf($lang_display_image_php['views'], $CURRENT_PIC_DATA['hits']);

	$path_to_pic = $CONFIG['fullpath'].$CURRENT_PIC_DATA['filepath'].$CURRENT_PIC_DATA['filename'];

	if ($CONFIG['read_exif_data']) $exif = exif_parse_file($path_to_pic);

	if (isset($exif) && is_array($exif)){
		if (isset($exif['Camera'])) $info[$lang_picinfo['Camera']] = $exif['Camera'];
		if (isset($exif['DateTaken'])) $info[$lang_picinfo['Date taken']] = $exif['DateTaken'];
		if (isset($exif['Aperture'])) $info[$lang_picinfo['Aperture']] = $exif['Aperture'];
		if (isset($exif['ExposureTime'])) $info[$lang_picinfo['Exposure time']] = $exif['ExposureTime'];
		if (isset($exif['FocalLength']))  $info[$lang_picinfo['Focal length']] = $exif['FocalLength'];
		if (isset($exif['Comment'])) $info[$lang_picinfo['Comment']] = $exif['Comment'];
	}

	return theme_html_picinfo($info);
}


// Displays comments for a specific picture
function html_comments($pid)
{
	global $CONFIG, $USER, $CURRENT_ALBUM_DATA, $comment_date_fmt, $HTML_SUBST;
	global $template_image_comments, $template_add_your_comment, $lang_display_comments;

	$html = '';

	if (!$CONFIG['enable_smilies']) {
		$tmpl_comment_edit_box = template_extract_block($template_image_comments, 'edit_box_no_smilies','{EDIT}');
		template_extract_block($template_image_comments, 'edit_box_smilies');
		template_extract_block($template_add_your_comment, 'input_box_smilies');
	} else {
		$tmpl_comment_edit_box = template_extract_block($template_image_comments, 'edit_box_smilies', '{EDIT}');
		template_extract_block($template_image_comments, 'edit_box_no_smilies');
		template_extract_block($template_add_your_comment, 'input_box_no_smilies');
	}

	$tmpl_comments_buttons = template_extract_block($template_image_comments, 'buttons', '{BUTTONS}');

	$result = db_query("SELECT msg_id, msg_author, msg_body, UNIX_TIMESTAMP(msg_date) AS msg_date, author_id, author_md5_id FROM {$CONFIG['TABLE_COMMENTS']} WHERE pid='$pid' ORDER BY msg_id ASC");

	while ($row = mysql_fetch_array($result)) {
		$user_can_edit = (GALLERY_ADMIN_MODE) || (USER_ID && USER_ID == $row['author_id'] && USER_CAN_POST_COMMENTS) || (!USER_ID && USER_CAN_POST_COMMENTS && ($USER['ID'] == $row['author_md5_id']));
		$comment_buttons = $user_can_edit ? $tmpl_comments_buttons : '';
		$comment_edit_box = $user_can_edit ? $tmpl_comment_edit_box : '';

		if ($CONFIG['enable_smilies']) {
			$comment_body = process_smilies(make_clickable($row['msg_body']));
			$smilies = generate_smilies("f{$row['msg_id']}", 'msg_body');
		} else {
			$comment_body = make_clickable($row['msg_body']);
			$smilies = '';
		}

		$params = array(
			'{EDIT}' => &$comment_edit_box,
			'{BUTTONS}' => &$comment_buttons,
		);

		$template = template_eval($template_image_comments, $params);

		$params = array(
			'{MSG_AUTHOR}' => $row['msg_author'],
			'{MSG_ID}' => $row['msg_id'],
			'{EDIT_TITLE}' => &$lang_display_comments['edit_title'],
			'{CONFIRM_DELETE}' => &$lang_display_comments['confirm_delete'],
			'{MSG_DATE}' => localised_date($row['msg_date'], $comment_date_fmt),
			'{MSG_BODY}' => &$comment_body,
			'{MSG_BODY_RAW}' => $row['msg_body'],
			'{OK}' => &$lang_display_comments['OK'],
			'{SMILIES}'=> $smilies,
		);

		$html .= template_eval($template, $params);
	}

	if (USER_CAN_POST_COMMENTS && $CURRENT_ALBUM_DATA['comments'] == 'YES'){
		if (USER_ID) {
			$user_name_input = '<input type="hidden" name="msg_author" value="'.USER_NAME.'">';
			template_extract_block($template_add_your_comment, 'user_name_input', $user_name_input);
			$user_name = '';
		} else {
			$user_name = isset($USER['name']) ? '"'.strtr($USER['name'], $HTML_SUBST).'"' : '"'.$lang_display_comments['your_name'].'" onClick="javascript:this.value=\'\';"';
		}

		$params = array(
			'{ADD_YOUR_COMMENT}' => $lang_display_comments['add_your_comment'],
			'{PIC_ID}' => $pid,
			'{USER_NAME}' => $user_name,
			'{MAX_COM_LENGTH}' => $CONFIG['max_com_size'],
			'{OK}' => $lang_display_comments['OK'],
			'{SMILIES}' => '',
		);

		if ($CONFIG['enable_smilies']) $params['{SMILIES}'] = generate_smilies();

		$html .= template_eval($template_add_your_comment, $params);
	}

	return $html;
}

// Display the full size image
function display_fullsize_pic()
{
	global $CONFIG, $HTTP_GET_VARS, $THEME_DIR, $ALBUM_SET;
	global $lang_errors;

	if (function_exists('theme_display_fullsize_pic')) {
	    theme_display_fullsize_pic();
		return;
	}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title><?php echo $CONFIG['gallery_name'] ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $CONFIG['charset'] ?>" />
<link rel="stylesheet" href="<?php echo $THEME_DIR ?>style.css" />
<script type="text/javascript" src="scripts.js"></script>
</head>
<body scroll="auto">
<script language="JavaScript" type="text/JavaScript">
adjust_popup();
</script>
<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="2">
 <td align="center" valign="middle">
  <table cellspacing="2" cellpadding="0" style="border: 1px solid #000000; background-color: #FFFFFF;">
   <td>
<?php
	if (isset($HTTP_GET_VARS['picfile'])){
	
		if (!GALLERY_ADMIN_MODE) cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);
		
		$picfile = $HTTP_GET_VARS['picfile'];
		$picname = $CONFIG['fullpath'].$picfile;
		$imagesize = @getimagesize($picname);
		echo "<img src=\"".path2url($picname)."\" $imagesize[3] class=\"image\" border=\"0\" alt=\"$picfile\"/><br />\n";
	} elseif (isset($HTTP_GET_VARS['pid'])) {
		$pid = (int)$HTTP_GET_VARS['pid'];
		$sql =  "SELECT * ".
				"FROM {$CONFIG['TABLE_PICTURES']} ".
				"WHERE pid='$pid' $ALBUM_SET";
		$result = db_query($sql);

		if (!mysql_num_rows($result)) cpg_die(ERROR, $lang_errors['non_exist_ap'], __FILE__, __LINE__);

		$row = mysql_fetch_array($result);
		$pic_url = get_pic_url($row, 'fullsize');
		$geom = 'width="' . $row['pwidth'] . '" height="' . $row['pheight'] . '"';
		echo "<img src=\"".$pic_url."\" $geom class=\"image\" border=\"0\" alt=\"". htmlspecialchars($row['filename']). "\"><br />\n";
	}
?>
   </td>
  </table>
 </td>
</table>
</body>
</html>
<?php
}

function slideshow()
{
	global $CONFIG, $HTTP_GET_VARS, $lang_display_image_php, $template_display_picture;

	if (function_exists('theme_slideshow')) {
	    theme_slideshow();
		return;
	}

	pageheader($lang_display_image_php['slideshow']);

	include "include/slideshow.inc.php";

	$start_slideshow = '<script language="JavaScript" type="text/JavaScript">runSlideShow()</script>';
	template_extract_block($template_display_picture, 'img_desc', $start_slideshow);

	$params = array(
		'{CELL_HEIGHT}' => $CONFIG['picture_width'] + 100,
		'{IMAGE}' => '<img src="'.$start_img.'" name="SlideShow" class="image" /><br />',
		'{ADMIN_MENU}' => '',
	);

	starttable();
	echo template_eval($template_display_picture, $params);
	endtable();
	starttable();
	echo <<<EOT
	<tr>
		<td align="center" class="navmenu" style="white-space: nowrap;">
			<a href="javascript:endSlideShow()" class="navmenu">{$lang_display_image_php['stop_slideshow']}</a>
		</td>
	</tr>

EOT;
	endtable();
	pagefooter();
}

function get_subcat_data($parent, $level)
{
    global $CONFIG, $ALBUM_SET_ARRAY;

	$result = db_query("SELECT cid, name, description FROM {$CONFIG['TABLE_CATEGORIES']} WHERE parent = '$parent'");
	if (mysql_num_rows($result) > 0){
		$rowset = db_fetch_rowset($result);
		foreach ($rowset as $subcat){
			$result=db_query("SELECT aid FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = {$subcat['cid']}");
			$album_count = mysql_num_rows($result);
			while($row = mysql_fetch_array($result)){
				$ALBUM_SET_ARRAY[] = $row['aid'];
			} // while
		}
		if ($level > 1) get_subcat_data($subcat['cid'], $level -1);
	}
}

/**************************************************************************
 * Main code
 **************************************************************************/

$pos = isset($HTTP_GET_VARS['pos']) ? (int)$HTTP_GET_VARS['pos'] : 0;
$cat = isset($HTTP_GET_VARS['cat']) ? (int)$HTTP_GET_VARS['cat'] : 0;
$album = isset($HTTP_GET_VARS['album']) ? $HTTP_GET_VARS['album'] : '';

// Build the album set if required
if (!is_numeric($album) && $cat) { // Meta albums, we need to restrict the albums to the current category
	if ($cat < 0) {
	    $ALBUM_SET .= 'AND aid IN ('.(- $cat).') ';
	} else {
		$ALBUM_SET_ARRAY = array();
		if ($cat == USER_GAL_CAT)
		    $where = 'category > '.FIRST_USER_CAT;
		else
			$where = "category = '$cat'";

		$result=db_query("SELECT aid FROM {$CONFIG['TABLE_ALBUMS']} WHERE $where");
		while($row = mysql_fetch_array($result)){
			$ALBUM_SET_ARRAY[] = $row['aid'];
		} // while
		get_subcat_data($cat, $CONFIG['subcat_level']);

		// Treat the album set
		if (count($ALBUM_SET_ARRAY)) {
			$set ='';
		    foreach ($ALBUM_SET_ARRAY as $album_id) $set .= ($set == '') ? $album_id : ','.$album_id;
			$ALBUM_SET .= "AND aid IN ($set) ";
		}
	}
}

// Retrieve data for the current picture
if ($pos < 0) {
    $pid = -$pos;
	$result = db_query("SELECT aid from {$CONFIG['TABLE_PICTURES']} WHERE pid='$pid' $ALBUM_SET LIMIT 1");
	if (mysql_num_rows($result) == 0) cpg_die(ERROR, $lang_errors['non_exist_ap'], __FILE__, __LINE__);
	$row = mysql_fetch_array($result);
	$album = $row['aid'];
	$pic_data = get_pic_data($album, $pic_count, $album_name, -1, -1, false);
	for($pos=0; $pic_data[$pos]['pid'] != $pid && $pos < $pic_count; $pos++);
	$pic_data = get_pic_data($album, $pic_count, $album_name, $pos, 1, false);
	$CURRENT_PIC_DATA = $pic_data[0];
} elseif (isset($HTTP_GET_VARS['pos'])) {
	$pic_data = get_pic_data($album, $pic_count, $album_name, $pos, 1, false);
	if ($pic_count == 0) {
	    cpg_die(INFORMATION, $lang_errors['no_img_to_display'], __FILE__, __LINE__);
	} elseif (count($pic_data) == 0 && $pos >= $pic_count) {
	    $pos = $pic_count - 1;
		$human_pos = $pos + 1;
		$pic_data = get_pic_data($album, $pic_count, $album_name, $pos, 1, false);
	}
	$CURRENT_PIC_DATA = $pic_data[0];
}

// Retrieve data for the current album
if (isset($CURRENT_PIC_DATA)) {
	$result = db_query("SELECT title, comments, votes, category FROM {$CONFIG['TABLE_ALBUMS']} WHERE aid='{$CURRENT_PIC_DATA['aid']}' LIMIT 1");
	if (!mysql_num_rows($result)) cpg_die(CRITICAL_ERROR, sprintf($lang_errors['pic_in_invalid_album'],$CURRENT_PIC_DATA['aid']), __FILE__, __LINE__);
	$CURRENT_ALBUM_DATA = mysql_fetch_array($result);

    if (is_numeric($album)) {
		$cat = - $album;
		$actual_cat = $CURRENT_ALBUM_DATA['category'];
	} else {
		$actual_cat = $CURRENT_ALBUM_DATA['category'];
	}
}


if (isset($HTTP_GET_VARS['fullsize'])){
	display_fullsize_pic();
	ob_end_flush();
} elseif (isset($HTTP_GET_VARS['slideshow'])) {
	slideshow();
	ob_end_flush();
} else {
	if (!isset($HTTP_GET_VARS['pos'])) cpg_die(ERROR, $lang_errors['non_exist_ap'], __FILE__, __LINE__);
	$picture_title = $CURRENT_PIC_DATA['title'] ? $CURRENT_PIC_DATA['title'] : strtr(preg_replace("/(.+)\..*?\Z/", "\\1", htmlspecialchars($CURRENT_PIC_DATA['filename'])), "_", " ");

	$nav_menu = html_img_nav_menu();
	$picture = html_picture();
	$votes = html_rating_box();
	$pic_info = html_picinfo();
	$comments = html_comments($CURRENT_PIC_DATA['pid']);

	pageheader($album_name.'/'.$picture_title, '', false);
	theme_display_image($nav_menu, $picture, $votes, $pic_info, $comments);
	pagefooter();
	ob_end_flush();
}
?>