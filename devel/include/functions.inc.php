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


/**************************************************************************
   Function for managing cookie saved user profile
 **************************************************************************/

// Decode the user profile contained in a cookie
function user_get_profile()
{
	global $CONFIG, $USER, $HTTP_COOKIE_VARS;

	if (isset($HTTP_COOKIE_VARS[$CONFIG['cookie_name'].'_data'])) {
		$USER = @unserialize(@base64_decode($HTTP_COOKIE_VARS[$CONFIG['cookie_name'].'_data']));
	}

	if (!isset($USER['ID']) || strlen($USER['ID']) != 32) {
		list($usec, $sec) = explode(' ', microtime());
		$seed = (float) $sec + ((float) $usec * 100000);
		srand($seed);
		$USER=array('ID' => md5(uniqid(rand(),1)));
	} else {
		$USER['ID'] = addslashes($USER['ID']);
	}

	if (!isset($USER['am'])) $USER['am'] = 1;
}

// Save the user profile in a cookie
function user_save_profile()
{
	global $CONFIG, $USER, $HTTP_SERVER_VARS;

	$data = base64_encode(serialize($USER));
	setcookie($CONFIG['cookie_name'].'_data', $data, time()+86400*30, $CONFIG['cookie_path']);
}

/**************************************************************************
   Database functions
 **************************************************************************/

// Connect to the database
function cpg_db_connect()
{
	global $CONFIG;
	$result = @mysql_connect($CONFIG['dbserver'], $CONFIG['dbuser'], $CONFIG['dbpass']);
	if (!$result)
		return false;
	if (!mysql_select_db($CONFIG['dbname']))
		return false;
	return $result;
}

// Perform a database query
function db_query($query, $link_id = 0)
{
	global $query_stats;

	$query_start = getmicrotime();
	if (($link_id)) {
	    $result = mysql_query($query, $link_id);
	} else {
		$result = mysql_query($query);
	}
	$query_end = getmicrotime();
	$query_stats[] = $query_end - $query_start;

	if (!$result) db_error("While executing query \"$query\" on $link_id");

	return $result;
}

// Error message if a query failed
function db_error($the_error)
{
	global $CONFIG;

	if (!$CONFIG['debug_mode']) {
	    cpg_die(CRITICAL_ERROR, 'There was an error while processing a database query', __FILE__, __LINE__);
	} else {

		$the_error .= "\n\nmySQL error: ".mysql_error()."\n";

		$out = "<br />There was an error while processing a database query.<br /><br/>
		    <form name='mysql'><textarea rows=\"8\" cols=\"60\">".htmlspecialchars($the_error)."</textarea></form>";

	    cpg_die(CRITICAL_ERROR, $out, __FILE__, __LINE__);
	}
}

// Fetch all rows in an array
function db_fetch_rowset($result)
{
	$rowset = array();

	while ($row = mysql_fetch_array($result)) $rowset[] = $row;

	return $rowset;
}

/**************************************************************************
   Utilities functions
 **************************************************************************/

define ('LOC','YToyOntzOjE6ImwiO3M6OToie0dBTExFUll9IjtzOjE6InMiO3M6MTY5OiI8ZGl2IGNsYXNzPSJmb290ZXIiIGFsaWduPSJjZW50ZXIiIHN0eWxlPSJwYWRkaW5nLXRvcDogMTBweDsiPlBvd2VyZWQgYnkgPGEgaHJlZj0iaHR0cDovL3d3dy5jaGV6Z3JlZy5uZXQvY29wcGVybWluZS8iIHRhcmdldD0iX2JsYW5rIj5Db3BwZXJtaW5lIFBob3RvIEdhbGxlcnk8L2E+PC9kaXY+Ijt9');
 
// Remplacement for the die function
function cpg_die($msg_code, $msg_text,  $error_file, $error_line, $output_buffer = false)
{
	global $CONFIG, $lang_cpg_die, $template_cpg_die;
	
	// Simple output if theme file is not loaded
	if(!function_exists('pageheader')){
		echo 'Fatal error :<br />'.$msg_text;
		exit;
	}

    $ob = ob_get_contents();
	if ($ob) ob_end_clean();

	if(!$CONFIG['debug_mode']) template_extract_block($template_cpg_die, 'file_line');
	if(!$output_buffer && !$CONFIG['debug_mode']) template_extract_block($template_cpg_die, 'output_buffer');

	$params = array(
		'{MESSAGE}' => $msg_text,
		'{FILE_TXT}' => $lang_cpg_die['file'],
		'{FILE}' => $error_file,
		'{LINE_TXT}' => $lang_cpg_die['line'],
		'{LINE}' => $error_line,
		'{OUTPUT_BUFFER}' => $ob,
	);

	pageheader($lang_cpg_die[$msg_code]);
	starttable(-1, $lang_cpg_die[$msg_code]);
	echo template_eval($template_cpg_die, $params);
	endtable();
	pagefooter();
	exit;
}

// Display a localised date
function localised_date($timestamp = -1, $datefmt)
{
    global $lang_month, $lang_day_of_week;

    if ($timestamp == -1) {
        $timestamp = time();
    }

    $date = ereg_replace('%[aA]', $lang_day_of_week[(int)strftime('%w', $timestamp)], $datefmt);
    $date = ereg_replace('%[bB]', $lang_month[(int)strftime('%m', $timestamp)-1], $date);

    return strftime($date, $timestamp);
}

// Function to create correct URLs for image name with space or exotic characters
function path2url($path)
{
	return str_replace("%2F","/",rawurlencode($path));
}

// Display a 'message box like' table
function msg_box($title, $msg_text, $button_text="", $button_link="", $width="-1")
{
	global $template_msg_box;

	if (!$button_text) {
	    template_extract_block($template_msg_box, 'button');
	}

	$params = array(
		'{MESSAGE}' => $msg_text,
		'{LINK}' => $button_link,
		'{TEXT}' => $button_text
	);

	starttable($width, $title);
	echo template_eval($template_msg_box, $params);
	endtable();
}

// create tabs for multi-page navigation
// $template = array(
//	'left_text' => ,
//	'tab_header' => ,
//	'tab_trailer' => ,
//  'active_tab' => ,
//	'inactive_tab' => );
function create_tabs($items, $curr_page, $total_pages, $template)
{
	global $CONFIG;

	if (function_exists('theme_create_tabs')) {
	    theme_create_tabs($items, $curr_page, $total_pages, $template);
		return;
	}

	$maxTab = $CONFIG['max_tabs'];

	$tabs = sprintf($template['left_text'], $items, $total_pages);
	if (($total_pages == 1)) return $tabs;

	$tabs .= $template['tab_header'];
	if ($curr_page == 1) {
		$tabs .= sprintf($template['active_tab'], 1);
	} else {
		$tabs .= sprintf($template['inactive_tab'], 1, 1);
	}
	if ($total_pages > $maxTab){
		$start = max(2, $curr_page - floor(($maxTab -2)/2));
		$start = min($start, $total_pages - $maxTab +2);
		$end = $start + $maxTab -3;
	} else {
		$start = 2;
		$end = $total_pages-1;
	}
	for ($page = $start ; $page <= $end; $page++) {
		if ($page == $curr_page) {
			$tabs .= sprintf($template['active_tab'], $page);
		} else {
			$tabs .= sprintf($template['inactive_tab'], $page, $page);
		}
	}
	if ($total_pages > 1){
		if ($curr_page == $total_pages) {
			$tabs .= sprintf($template['active_tab'], $total_pages);
		} else {
			$tabs .= sprintf($template['inactive_tab'], $total_pages, $total_pages);
		}
	}
	return $tabs.$template['tab_trailer'];
}

/**
 * Rewritten by Nathan Codding - Feb 6, 2001. Taken from phpBB code
 * - Goes through the given string, and replaces xxxx://yyyy with an HTML <a> tag linking
 * 	to that URL
 * - Goes through the given string, and replaces www.xxxx.yyyy[zzzz] with an HTML <a> tag linking
 * 	to http://www.xxxx.yyyy[/zzzz]
 * - Goes through the given string, and replaces xxxx@yyyy with an HTML mailto: tag linking
 *		to that email address
 * - Only matches these 2 patterns either after a space, or at the beginning of a line
 *
 * Notes: the email one might get annoying - it's easy to make it more restrictive, though.. maybe
 * have it require something like xxxx@yyyy.zzzz or such. We'll see.
 */
function make_clickable($text)
{
	$ret = " " . $text;
	$ret = preg_replace("#([\n ])([a-z]+?)://([a-z0-9\-\.,\?!%\*_\#:;~\\&$@\/=\+]+)#i", "\\1<a href=\"\\2://\\3\" target=\"_blank\">\\2://\\3</a>", $ret);
	$ret = preg_replace("#([\n ])www\.([a-z0-9\-]+)\.([a-z0-9\-.\~]+)((?:/[a-z0-9\-\.,\?!%\*_\#:;~\\&$@\/=\+]*)?)#i", "\\1<a href=\"http://www.\\2.\\3\\4\" target=\"_blank\">www.\\2.\\3\\4</a>", $ret);
	$ret = preg_replace("#([\n ])([a-z0-9\-_.]+?)@([\w\-]+\.([\w\-\.]+\.)?[\w]+)#i", "\\1<a href=\"mailto:\\2@\\3\">\\2@\\3</a>", $ret);
	$ret = substr($ret, 1);

	return($ret);
}

// Allow the use of a limited set of phpBB bb codes in albums and image descriptions
// Taken from phpBB code
function bb_decode($text)
{
	$text = nl2br($text);

	static $bbcode_tpl = array();
	static $patterns = array();
	static $replacements = array();

	// First: If there isn't a "[" and a "]" in the message, don't bother.
	if ((strpos($text, "[") === false || strpos($text, "]") === false))
	{
		return $text;
	}

	// [b] and [/b] for bolding text.
	$text = str_replace("[b]", '<b>', $text);
	$text = str_replace("[/b]", '</b>', $text);

	// [u] and [/u] for underlining text.
	$text = str_replace("[u]", '<u>', $text);
	$text = str_replace("[/u]", '</u>', $text);

	// [i] and [/i] for italicizing text.
	$text = str_replace("[i]", '<i>', $text);
	$text = str_replace("[/i]", '</i>', $text);

	if (!count($bbcode_tpl)) {
		// We do URLs in several different ways..
		$bbcode_tpl['url']  = '<span class="bblink"><a href="{URL}" target="_blank">{DESCRIPTION}</a></span>';
		$bbcode_tpl['email']= '<span class="bblink"><a href="mailto:{EMAIL}">{EMAIL}</a></span>';

		$bbcode_tpl['url1'] = str_replace('{URL}', '\\1\\2', $bbcode_tpl['url']);
		$bbcode_tpl['url1'] = str_replace('{DESCRIPTION}', '\\1\\2', $bbcode_tpl['url1']);

		$bbcode_tpl['url2'] = str_replace('{URL}', 'http://\\1', $bbcode_tpl['url']);
		$bbcode_tpl['url2'] = str_replace('{DESCRIPTION}', '\\1', $bbcode_tpl['url2']);

		$bbcode_tpl['url3'] = str_replace('{URL}', '\\1\\2', $bbcode_tpl['url']);
		$bbcode_tpl['url3'] = str_replace('{DESCRIPTION}', '\\3', $bbcode_tpl['url3']);

		$bbcode_tpl['url4'] = str_replace('{URL}', 'http://\\1', $bbcode_tpl['url']);
		$bbcode_tpl['url4'] = str_replace('{DESCRIPTION}', '\\2', $bbcode_tpl['url4']);

		$bbcode_tpl['email'] = str_replace('{EMAIL}', '\\1', $bbcode_tpl['email']);

		// [url]xxxx://www.phpbb.com[/url] code..
		$patterns[1] = "#\[url\]([a-z]+?://){1}([a-z0-9\-\.,\?!%\*_\#:;~\\&$@\/=\+\(\)]+)\[/url\]#si";
		$replacements[1] = $bbcode_tpl['url1'];

		// [url]www.phpbb.com[/url] code.. (no xxxx:// prefix).
		$patterns[2] = "#\[url\]([a-z0-9\-\.,\?!%\*_\#:;~\\&$@\/=\+\(\)]+)\[/url\]#si";
		$replacements[2] = $bbcode_tpl['url2'];

		// [url=xxxx://www.phpbb.com]phpBB[/url] code..
		$patterns[3] = "#\[url=([a-z]+?://){1}([a-z0-9\-\.,\?!%\*_\#:;~\\&$@\/=\+\(\)]+)\](.*?)\[/url\]#si";
		$replacements[3] = $bbcode_tpl['url3'];

		// [url=www.phpbb.com]phpBB[/url] code.. (no xxxx:// prefix).
		$patterns[4] = "#\[url=([a-z0-9\-\.,\?!%\*_\#:;~\\&$@\/=\+\(\)]+)\](.*?)\[/url\]#si";
		$replacements[4] = $bbcode_tpl['url4'];

		// [email]user@domain.tld[/email] code..
		$patterns[5] = "#\[email\]([a-z0-9\-_.]+?@[\w\-]+\.([\w\-\.]+\.)?[\w]+)\[/email\]#si";
		$replacements[5] = $bbcode_tpl['email'];
	}

	$text = preg_replace($patterns, $replacements, $text);

	return $text;
}

/**************************************************************************
   Template functions
 **************************************************************************/

// Load and parse the template.html file
function load_template()
{
	global $THEME_DIR, $CONFIG, $template_header, $template_footer;

	$tmpl_loc = array();
	$tmpl_loc = unserialize(base64_decode(LOC));

	if (file_exists(TEMPLATE_FILE)) {
	    $template_file = TEMPLATE_FILE;
	} elseif (file_exists($THEME_DIR . TEMPLATE_FILE)) {
	    $template_file = $THEME_DIR . TEMPLATE_FILE;
	} else die("<b>Coppermine critical error</b>:<br />Unable to load template file ".TEMPLATE_FILE."!</b>");

	$template = fread(fopen($template_file, 'r'), filesize($template_file));

	$gallery_pos = strpos($template, $tmpl_loc['l']);
	$template = str_replace($tmpl_loc['l'], $tmpl_loc['s'] ,$template);

	$template_header = substr($template, 0, $gallery_pos);
	$template_footer = substr($template, $gallery_pos);
}

// Eval a template (substitute vars with values)
function template_eval(&$template, &$vars)
{
	return strtr($template, $vars);
}

// Extract and return block '$block_name' from the template, the block is replaced by $subst
function template_extract_block(&$template, $block_name, $subst='')
{
	$pattern = "#(<!-- BEGIN $block_name -->)(.*?)(<!-- END $block_name -->)#s";
	if ( !preg_match($pattern, $template, $matches)){
		die('<b>Template error<b><br />Failed to find block \''.$block_name.'\'('.htmlspecialchars($pattern).') in :<br /><pre>'.htmlspecialchars($template).'</pre>');
	}
	$template = str_replace($matches[1].$matches[2].$matches[3], $subst, $template);
	return $matches[2];
}

/**************************************************************************
   Functions for album/picture management
 **************************************************************************/

// Get the list of albums that the current user can't see
function get_private_album_set()
{
	global $CONFIG, $ALBUM_SET, $USER_DATA, $FORBIDDEN_SET;
	
	$result = db_query("SELECT aid FROM {$CONFIG['TABLE_ALBUMS']} WHERE visibility != '0' AND visibility !='".(FIRST_USER_CAT + USER_ID)."' AND visibility NOT IN ".USER_GROUP_SET);
	if ((mysql_num_rows($result))) {
		$set ='';
	    while($album=mysql_fetch_array($result)){
	    	$set .= $album['aid'].',';
	    } // while
		$FORBIDDEN_SET = "AND p.aid NOT IN (".substr($set, 0, -1).') ';
		$ALBUM_SET .= 'AND aid NOT IN ('.substr($set, 0, -1).') ';
	}
	mysql_free_result($result);
}

// Retrieve the data for a picture or a set of picture
function get_pic_data($album, &$count, &$album_name, $limit1=-1, $limit2=-1, $set_caption = true)
{
	global $USER, $CONFIG, $ALBUM_SET, $CURRENT_CAT_NAME, $HTTP_GET_VARS, $HTML_SUBST, $THEME_DIR;
	global $album_date_fmt, $lastcom_date_fmt, $lastup_date_fmt, $lasthit_date_fmt;
	global $lang_get_pic_data, $lang_meta_album_names, $lang_errors;

	$sort_array = array('na' => 'filename ASC', 'nd' => 'filename DESC', 'da' => 'pid ASC', 'dd' => 'pid DESC');
    $sort_code = isset($USER['sort'])? $USER['sort'] : $CONFIG['default_sort_order'];
	$sort_order = isset($sort_array[$sort_code]) ? $sort_array[$sort_code] : $sort_array[$CONFIG['default_sort_order']];
	$limit = ($limit1 != -1) ? ' LIMIT '. $limit1 : '';
	$limit .= ($limit2 != -1) ? ' ,'. $limit2 : '';

	if ($limit2 == 1) {
	    $select_columns = '*';
	} else {
	    $select_columns = 'pid, filepath, filename, url_prefix, filesize, pwidth, pheight, ctime';
	}

	// Regular albums
	if ((is_numeric($album))) {
	    $album_name = get_album_name($album);

		$approved = GALLERY_ADMIN_MODE ? '' : 'AND approved=\'YES\'';

		$result = db_query("SELECT COUNT(*) from {$CONFIG['TABLE_PICTURES']} WHERE aid='$album' $approved $ALBUM_SET");
		$nbEnr = mysql_fetch_array($result);
		$count = $nbEnr[0];
		mysql_free_result($result);

		if($select_columns != '*') $select_columns .= ', title, caption';

		$result = db_query("SELECT $select_columns from {$CONFIG['TABLE_PICTURES']} WHERE aid='$album' $approved $ALBUM_SET ORDER BY $sort_order $limit");
		$rowset = db_fetch_rowset($result);
		mysql_free_result($result);

		// Set picture caption
		if ($set_caption) foreach ($rowset as $key => $row){
			$caption = $rowset[$key]['title'] ? "<span class=\"thumb_title\">".$rowset[$key]['title']."</span>" : '';
			if ($CONFIG['caption_in_thumbview']){
           		$caption .= $rowset[$key]['caption'] ? "<span class=\"thumb_caption\">".bb_decode(($rowset[$key]['caption']))."</span>" : '';
			}
			if ($CONFIG['display_comment_count']) {
				$comments_nr = count_pic_comments($row['pid']);
				if ($comments_nr > 0) $caption .= "<span class=\"thumb_num_comments\">".sprintf($lang_get_pic_data['n_comments'], $comments_nr )."</span>";
			}
			$rowset[$key]['caption_text'] = $caption;
		}

		return $rowset;
	}


	// Meta albums
	switch($album){
	case 'lastcom': // Last comments
		if ($ALBUM_SET && $CURRENT_CAT_NAME) {
			$album_name = $album_name = $lang_meta_album_names['lastcom'].' - '. $CURRENT_CAT_NAME;
		} else {
			$album_name = $lang_meta_album_names['lastcom'];
		}
		$result = db_query("SELECT COUNT(*) from {$CONFIG['TABLE_COMMENTS']}, {$CONFIG['TABLE_PICTURES']}  WHERE approved = 'YES' AND {$CONFIG['TABLE_COMMENTS']}.pid = {$CONFIG['TABLE_PICTURES']}.pid $ALBUM_SET");
		$nbEnr = mysql_fetch_array($result);
		$count = $nbEnr[0];
		mysql_free_result($result);

		if($select_columns == '*'){
			$select_columns = 'p.*';
		} else {
			$select_columns = str_replace('pid', 'c.pid', $select_columns).', msg_id, author_id, msg_author, UNIX_TIMESTAMP(msg_date) as msg_date, msg_body';
		}

		$result = db_query("SELECT $select_columns FROM {$CONFIG['TABLE_COMMENTS']} as c, {$CONFIG['TABLE_PICTURES']} as p WHERE approved = 'YES' AND c.pid = p.pid $ALBUM_SET ORDER by msg_id DESC $limit");
		$rowset = db_fetch_rowset($result);
		mysql_free_result($result);

		if ($set_caption) foreach ($rowset as $key => $row){
			if ($row['author_id']) {
			    $user_link = '<a href ="profile.php?uid='.$row['author_id'].'">'.$row['msg_author'].'</a>';
			} else {
				$user_link = $row['msg_author'];
			}

			$caption = '<span class="thumb_title">'.$user_link.'</span>'.'<span class="thumb_caption">'.localised_date($row['msg_date'], $lastcom_date_fmt).'</span>'.'<span class="thumb_caption">'.$row['msg_body'].'</span>';
			$rowset[$key]['caption_text'] = $caption;
		}
		return $rowset;
		break;

	case 'lastcomby': // Last comments by a specific user
		if (isset($USER['uid'])) {
			$uid = (int)$USER['uid'];
		} else {
			$uid = -1;
		}

		$user_name = get_username($uid);
		if ($ALBUM_SET && $CURRENT_CAT_NAME) {
			$album_name = $album_name = $lang_meta_album_names['lastcom'].' - '. $CURRENT_CAT_NAME .' - '. $user_name;
		} else {
			$album_name = $lang_meta_album_names['lastcom'].' - '. $user_name;
		}
		$result = db_query("SELECT COUNT(*) from {$CONFIG['TABLE_COMMENTS']}, {$CONFIG['TABLE_PICTURES']}  WHERE approved = 'YES' AND author_id = '$uid' AND {$CONFIG['TABLE_COMMENTS']}.pid = {$CONFIG['TABLE_PICTURES']}.pid $ALBUM_SET");
		$nbEnr = mysql_fetch_array($result);
		$count = $nbEnr[0];
		mysql_free_result($result);

		if($select_columns == '*'){
			$select_columns = 'p.*';
		} else {
			$select_columns = str_replace('pid', 'c.pid', $select_columns).', msg_id, author_id, msg_author, UNIX_TIMESTAMP(msg_date) as msg_date, msg_body';
		}

		$result = db_query("SELECT $select_columns FROM {$CONFIG['TABLE_COMMENTS']} as c, {$CONFIG['TABLE_PICTURES']} as p WHERE approved = 'YES' AND author_id = '$uid' AND c.pid = p.pid $ALBUM_SET ORDER by msg_id DESC $limit");
		$rowset = db_fetch_rowset($result);
		mysql_free_result($result);

		if ($set_caption) foreach ($rowset as $key => $row){
			if ($row['author_id']) {
			    $user_link = '<a href ="profile.php?uid='.$row['author_id'].'">'.$row['msg_author'].'</a>';
			} else {
				$user_link = $row['msg_author'];
			}

			$caption = '<span class="thumb_title">'.$user_link.'</span>'.'<span class="thumb_caption">'.localised_date($row['msg_date'], $lastcom_date_fmt).'</span>'.'<span class="thumb_caption">'.$row['msg_body'].'</span>';
			$rowset[$key]['caption_text'] = $caption;
		}
		return $rowset;
		break;

	case 'lastup': // Last uploads
		if ($ALBUM_SET && $CURRENT_CAT_NAME) {
			$album_name = $lang_meta_album_names['lastup'].' - '. $CURRENT_CAT_NAME;
		} else {
			$album_name = $lang_meta_album_names['lastup'];
		}

		$result = db_query("SELECT COUNT(*) from {$CONFIG['TABLE_PICTURES']} WHERE approved = 'YES' $ALBUM_SET");
		$nbEnr = mysql_fetch_array($result);
		$count = $nbEnr[0];
		mysql_free_result($result);

		if($select_columns != '*' ) $select_columns .= ', owner_id, owner_name';
		
		$result = db_query("SELECT $select_columns FROM {$CONFIG['TABLE_PICTURES']} WHERE approved = 'YES' $ALBUM_SET ORDER BY pid DESC $limit");

		$rowset = db_fetch_rowset($result);
		mysql_free_result($result);

		if ($set_caption) foreach ($rowset as $key => $row){
			if ($row['owner_id'] && $row['owner_name']) {
			    $user_link = '<span class="thumb_title"><a href ="profile.php?uid='.$row['owner_id'].'">'.$row['owner_name'].'</a></span>';
			} else {
				$user_link = '';
			}
			$caption = $user_link.'<span class="thumb_caption">'.localised_date($row['ctime'], $lastup_date_fmt).'</span>';
			$rowset[$key]['caption_text'] = $caption;
		}
		return $rowset;
		break;

	case 'lastupby': // Last uploads by a specific user
		if (isset($USER['uid'])) {
			$uid = (int)$USER['uid'];
		} else {
			$uid = -1;
		}

		$user_name = get_username($uid);
		if ($ALBUM_SET && $CURRENT_CAT_NAME) {
			$album_name = $lang_meta_album_names['lastup'].' - '. $CURRENT_CAT_NAME .' - '. $user_name;
		} else {
			$album_name = $lang_meta_album_names['lastup'] .' - '. $user_name;
		}

		$result = db_query("SELECT COUNT(*) from {$CONFIG['TABLE_PICTURES']} WHERE approved = 'YES' AND owner_id = '$uid' $ALBUM_SET");
		$nbEnr = mysql_fetch_array($result);
		$count = $nbEnr[0];
		mysql_free_result($result);

		if($select_columns != '*' ) $select_columns .= ', owner_id, owner_name';
		
		$result = db_query("SELECT $select_columns FROM {$CONFIG['TABLE_PICTURES']} WHERE approved = 'YES' AND owner_id = '$uid' $ALBUM_SET ORDER BY pid DESC $limit");

		$rowset = db_fetch_rowset($result);
		mysql_free_result($result);

		if ($set_caption) foreach ($rowset as $key => $row){
			if ($row['owner_id'] && $row['owner_name']) {
			    $user_link = '<span class="thumb_title"><a href ="profile.php?uid='.$row['owner_id'].'">'.$row['owner_name'].'</a></span>';
			} else {
				$user_link = '';
			}
			$caption = $user_link.'<span class="thumb_caption">'.localised_date($row['ctime'], $lastup_date_fmt).'</span>';
			$rowset[$key]['caption_text'] = $caption;
		}
		return $rowset;
		break;

	case 'topn': // Most viewed pictures
		if ($ALBUM_SET && $CURRENT_CAT_NAME) {
			$album_name = $lang_meta_album_names['topn'].' - '. $CURRENT_CAT_NAME;
		} else {
			$album_name = $lang_meta_album_names['topn'];
		}
		$result = db_query("SELECT COUNT(*) from {$CONFIG['TABLE_PICTURES']} WHERE approved = 'YES' AND hits > 0  $ALBUM_SET");
		$nbEnr = mysql_fetch_array($result);
		$count = $nbEnr[0];
		mysql_free_result($result);

		if($select_columns != '*') $select_columns .= ', hits';

		$result = db_query("SELECT $select_columns FROM {$CONFIG['TABLE_PICTURES']} WHERE approved = 'YES'AND hits > 0 $ALBUM_SET ORDER BY hits DESC $limit");
		$rowset = db_fetch_rowset($result);
		mysql_free_result($result);

		if ($set_caption) foreach ($rowset as $key => $row){
			$caption = "<span class=\"thumb_caption\">".sprintf($lang_get_pic_data['n_views'], $row['hits']).'</span>';
			$rowset[$key]['caption_text'] = $caption;
		}
		return $rowset;
		break;

	case 'toprated': // Top rated pictures
		if ($ALBUM_SET && $CURRENT_CAT_NAME) {
			$album_name = $lang_meta_album_names['toprated'].' - '. $CURRENT_CAT_NAME;
		} else {
			$album_name = $lang_meta_album_names['toprated'];
		}
		$result = db_query("SELECT COUNT(*) from {$CONFIG['TABLE_PICTURES']} WHERE approved = 'YES' AND votes >= '{$CONFIG['min_votes_for_rating']}' $ALBUM_SET");
		$nbEnr = mysql_fetch_array($result);
		$count = $nbEnr[0];
		mysql_free_result($result);

		if($select_columns != '*') $select_columns .= ', pic_rating, votes';

		$result = db_query("SELECT $select_columns FROM {$CONFIG['TABLE_PICTURES']} WHERE approved = 'YES' AND votes >= '{$CONFIG['min_votes_for_rating']}' $ALBUM_SET ORDER BY ROUND((pic_rating+1)/2000) DESC, votes DESC $limit");
		$rowset = db_fetch_rowset($result);
		mysql_free_result($result);

		if ($set_caption) foreach ($rowset as $key => $row){
			if (defined('THEME_HAS_RATING_GRAPHICS')) {
			    $prefix= $THEME_DIR;
			} else {
			    $prefix= '';
			}
			$caption = "<span class=\"thumb_caption\">".'<img src="'.$prefix.'images/rating'.round($row['pic_rating']/2000).'.gif" align="absmiddle"/>'.'<br />'.sprintf($lang_get_pic_data['n_votes'], $row['votes']).'</span>';
			$rowset[$key]['caption_text'] = $caption;
		}
		return $rowset;
		break;

	case 'lasthits': // Last viewed pictures
		if ($ALBUM_SET && $CURRENT_CAT_NAME) {
			$album_name = $lang_meta_album_names['lasthits'].' - '. $CURRENT_CAT_NAME;
		} else {
			$album_name = $lang_meta_album_names['lasthits'];
		}
		$result = db_query("SELECT COUNT(*) from {$CONFIG['TABLE_PICTURES']} WHERE approved = 'YES' $ALBUM_SET");
		$nbEnr = mysql_fetch_array($result);
		$count = $nbEnr[0];
		mysql_free_result($result);

		if($select_columns != '*') $select_columns .= ', UNIX_TIMESTAMP(mtime) as mtime';

		$result = db_query("SELECT $select_columns FROM {$CONFIG['TABLE_PICTURES']} WHERE approved = 'YES' $ALBUM_SET ORDER BY mtime DESC $limit");
		$rowset = db_fetch_rowset($result);
		mysql_free_result($result);

		if ($set_caption) foreach ($rowset as $key => $row){
			$caption = "<span class=\"thumb_caption\">".localised_date($row['mtime'], $lasthit_date_fmt).'</span>';
			$rowset[$key]['caption_text'] = $caption;
		}
		return $rowset;
		break;

	case 'random': // Random pictures
		if ($ALBUM_SET && $CURRENT_CAT_NAME) {
			$album_name = $lang_meta_album_names['random'].' - '. $CURRENT_CAT_NAME;
		} else {
			$album_name = $lang_meta_album_names['random'];
		}
		$result = db_query("SELECT COUNT(*) from {$CONFIG['TABLE_PICTURES']} WHERE approved = 'YES' $ALBUM_SET");
		$nbEnr = mysql_fetch_array($result);
		$pic_count = $nbEnr[0];
		mysql_free_result($result);

		// if we have more than 1000 pictures, we limit the number of picture returned
		// by the SELECT statement as ORDER BY RAND() is time consuming
		if ($pic_count > 1000) {
	    	$result = db_query("SELECT COUNT(*) from {$CONFIG['TABLE_PICTURES']} WHERE approved = 'YES'");
			$nbEnr = mysql_fetch_array($result);
			$total_count = $nbEnr[0];
			mysql_free_result($result);

			$granularity = floor($total_count / RANDPOS_MAX_PIC);
			$cor_gran = ceil($total_count / $pic_count);
			srand(time());
			for ($i=1; $i<= $cor_gran; $i++) $random_num_set =rand(0, $granularity).', ';
			$random_num_set = substr($random_num_set,0, -2);
			$result = db_query("SELECT $select_columns FROM {$CONFIG['TABLE_PICTURES']} WHERE  randpos IN ($random_num_set) AND approved = 'YES' $ALBUM_SET ORDER BY RAND() LIMIT $limit2");
		} else {
			$result = db_query("SELECT $select_columns FROM {$CONFIG['TABLE_PICTURES']} WHERE approved = 'YES' $ALBUM_SET ORDER BY RAND() LIMIT $limit2");
		}

		$rowset = array();
		while($row = mysql_fetch_array($result)){
			$row['caption_text'] = '';
			$rowset[-$row['pid']] = $row;
		}
		mysql_free_result($result);

		return $rowset;
		break;

	case 'search': // Search results
		if (isset($USER['search'])) {
			$search_string = $USER['search'];
		} else {
			$search_string = '';
		}

		if (substr($search_string, 0, 3) == '###') {
		    $query_all = 1;
			$search_string = substr($search_string, 3);
		} else {
		    $query_all = 0;
		}

		if ($ALBUM_SET && $CURRENT_CAT_NAME) {
			$album_name = $lang_meta_album_names['search'].' - '. $CURRENT_CAT_NAME;
		} else {
			$album_name = $lang_meta_album_names['search'].' - "'. strtr($search_string, $HTML_SUBST) . '"';
		}
		
		include 'include/search.inc.php';
		
		return $rowset;
		break;

	default : // Invalid meta album
		cpg_die(ERROR, $lang_errors['non_exist_ap'], __FILE__, __LINE__);
	}
} // End of get_pic_data


// Get the name of an album
function get_album_name($aid)
{
	global $CONFIG;
	global $lang_errors;

	$result = db_query("SELECT title from {$CONFIG['TABLE_ALBUMS']} WHERE aid='$aid'");
	$count = mysql_num_rows($result);
	if ($count > 0) {
		$row = mysql_fetch_array($result);
		return $row['title'];
	} else {
		cpg_die(ERROR, $lang_errors['non_exist_ap'], __FILE__, __LINE__);
	}
}

// Return the name of a user
function get_username($uid)
{
	global $CONFIG;
	
	$uid = (int)$uid;
	
	if (!$uid) {
	    return 'Anonymous';
	} elseif (defined('UDB_INTEGRATION')) {
	   return udb_get_user_name($uid);
	} else {
		$result = db_query("SELECT user_name FROM {$CONFIG['TABLE_USERS']} WHERE user_id = '".$uid."'");
		if (mysql_num_rows($result) == 0) return '';
		$row = mysql_fetch_array($result);
		mysql_free_result($result);
		return $row['user_name'];
	}
}

// Return the total number of comments for a certain picture
function count_pic_comments($pid, $skip=0)
{
	global $CONFIG;
	$result = db_query("SELECT count(*) from {$CONFIG['TABLE_COMMENTS']} where pid=$pid and msg_id!=$skip");
	$nbEnr = mysql_fetch_array($result);
	$count = $nbEnr[0];
	mysql_free_result($result);

	return $count;
}

// Add 1 everytime a picture is viewed.
function add_hit($pid)
{
	global $CONFIG;

	db_query("UPDATE {$CONFIG['TABLE_PICTURES']} SET hits=hits+1 WHERE pid='$pid'");
}

// Build the breadcrumb
function breadcrumb($cat, &$breadcrumb, &$BREADCRUMB_TEXT)
{
	global $lang_errors, $lang_list_categories;
	global $CONFIG, $CURRENT_CAT_NAME;

	$breadcrumb = '';
	if ($cat != 0) {
		$breadcrumb_array = array();
		if ($cat >= FIRST_USER_CAT) {
			$user_name = get_username($cat - FIRST_USER_CAT);
			if (!$user_name) $user_name = 'Mr. X';

			$breadcrumb_array[] = array($cat, $user_name);
			$CURRENT_CAT_NAME = sprintf($lang_list_categories['xx_s_gallery'], $user_name);
			$row['parent'] = 1;
		} else {
		    $result = db_query("SELECT name, parent FROM {$CONFIG['TABLE_CATEGORIES']} WHERE cid = '$cat'");
			if (mysql_num_rows($result) == 0) cpg_die(CRITICAL_ERROR, $lang_errors['non_exist_cat'], __FILE__, __LINE__);
			$row = mysql_fetch_array($result);

			$breadcrumb_array[] = array($cat, $row['name']);
			$CURRENT_CAT_NAME = $row['name'];
			mysql_free_result($result);
		}
		while($row['parent'] != 0){
		    $result = db_query("SELECT cid, name, parent FROM {$CONFIG['TABLE_CATEGORIES']} WHERE cid = '{$row['parent']}'");
			if (mysql_num_rows($result) == 0) cpg_die(CRITICAL_ERROR, $lang_errors['orphan_cat'], __FILE__, __LINE__);
			$row = mysql_fetch_array($result);

			$breadcrumb_array[] = array($row['cid'], $row['name']);
			mysql_free_result($result);
		} // while

		$breadcrumb_array = array_reverse($breadcrumb_array);
		$breadcrumb = '<a href=index.php>'.$lang_list_categories['home'].'</a>';
		$BREADCRUMB_TEXT = $lang_list_categories['home'];
		foreach ($breadcrumb_array as $category){
			$link = "<a href=index.php?cat={$category[0]}>{$category[1]}</a>";
			$breadcrumb .= ' > ' . $link;
			$BREADCRUMB_TEXT .= ' > ' . $category[1];
		}
	}
}

/**************************************************************************

 **************************************************************************/

// Compute image geometry based on max width / height
function compute_img_size($width, $height, $max)
{
	$ratio = max($width, $height) / $max;
	if ($ratio > 1.0) {
		$image_size['reduced'] = true;
	}
	$ratio = max($ratio, 1.0);
	$image_size['width'] = ceil($width / $ratio);
	$image_size['height'] = ceil($height / $ratio);
	$image_size['geom'] = 'width="'.$image_size['width'].'" height="'.$image_size['height'].'"';

	return $image_size;
}

// Prints thumbnails of pictures in an album
function display_thumbnails($album, $cat, $page, $thumbcols, $thumbrows, $display_tabs)
{
	global $CONFIG, $AUTHORIZED, $HTTP_GET_VARS;
	global $album_date_fmt, $lang_display_thumbnails, $lang_errors, $lang_byte_units;

	$thumb_per_page = $thumbcols * $thumbrows;
	$lower_limit = ($page-1) * $thumb_per_page;

	$pic_data = get_pic_data($album, $thumb_count, $album_name, $lower_limit, $thumb_per_page);
	$total_pages = ceil($thumb_count / $thumb_per_page);

	$i = 0;
	if (count($pic_data) > 0) {
		foreach ($pic_data as $key => $row) {
			$i++;

			$image_size = compute_img_size($row['pwidth'], $row['pheight'], $CONFIG['thumb_width']);

			$pic_title =$lang_display_thumbnails['filename'].$row['filename']."\n".
				$lang_display_thumbnails['filesize'].($row['filesize'] >> 10).$lang_byte_units[1]."\n".
				$lang_display_thumbnails['dimensions'].$row['pwidth']."x".$row['pheight']."\n".
				$lang_display_thumbnails['date_added'].localised_date($row['ctime'], $album_date_fmt);

			$thumb_list[$i]['pos'] = $key < 0 ? $key : $i - 1 + $lower_limit;
			$thumb_list[$i]['image'] = "<img src=\"" . get_pic_url($row, 'thumb') . "\" class=\"image\" {$image_size['geom']} border=\"0\" alt=\"{$row['filename']}\" title=\"$pic_title\"></a>";
			$thumb_list[$i]['caption'] = $row['caption_text'];
			$thumb_list[$i]['admin_menu'] = '';

		}
		theme_display_thumbnails($thumb_list, $thumb_count, $album_name, $album, $cat, $page, $total_pages, is_numeric($album), $display_tabs);
	} else {
		theme_no_img_to_display($album_name);
	}
}

// Return the url for a picture, allows to have pictures spreaded over multiple servers
function get_pic_url(&$pic_row, $mode)
{
	global $CONFIG;

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

	return $url_prefix[$pic_row['url_prefix']]. path2url($pic_row['filepath']. $pic_prefix[$mode]. $pic_row['filename']);
}
?>