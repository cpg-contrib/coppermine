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
define('SEARCHNEW_PHP', true);

require('include/init.inc.php');

if (!GALLERY_ADMIN_MODE) cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);

/**************************************************************************
 * Local functions definition
 **************************************************************************/

/**
 * albumselect()
 *
 * return the HTML code for a listbox with name $id that contains the list
 * of all albums
 *
 * @param string $id the name of the listbox
 * @return the HTML code
 **/
function albumselect($id="album")
{
	global $CONFIG;
	static $select = "";

	if ($select == ""){
		$result = db_query("SELECT aid, title FROM {$CONFIG['TABLE_ALBUMS']} WHERE category < '".FIRST_USER_CAT."' ORDER BY title");
		$rowset = db_fetch_rowset($result);
		mysql_free_result($result);

		if(defined('UDB_INTEGRATION')){
			$sql = udb_get_admin_album_list();
		} else {
			$sql = "SELECT aid, CONCAT('(', user_name, ') ', title) AS title ".
				   "FROM {$CONFIG['TABLE_ALBUMS']} AS a ".
				   "INNER JOIN {$CONFIG['TABLE_USERS']} AS u ON category = (".FIRST_USER_CAT." + user_id) ".
				   "ORDER BY title";
		}
		$result = db_query($sql);
		while($row=mysql_fetch_array($result)) $rowset[] = $row;
		mysql_free_result($result);

		foreach ($rowset as $row) {
			$select .= "<option value=\"" . $row["aid"] . "\">" . $row["title"] . "</option>\n";
		}
	}

	return "\n<select name=\"$id\" class=\"listbox\">\n$select</select>\n";
}

/**
 * dirheader()
 *
 * return the HTML code for the row to be displayed when we start a new
 * directory
 *
 * @param $dir the directory
 * @param $dirid the name of the listbox that will list the albums
 * @return the HTML code
 **/
function dirheader($dir, $dirid)
{
	global $CONFIG, $lang_search_new_php;
	$warning = '';

	if (!is_writable($CONFIG['fullpath'].$dir))
		$warning ="<tr><td class=\"tableh2\" valign=\"middle\" colspan=\"3\">\n".
			"<b>{$lang_search_new_php['warning']}</b>: {$lang_search_new_php['change_perm']}</td></tr>\n";
	return "<tr><td class=\"tableh2\" valign=\"middle\" colspan=\"3\">\n".
			sprintf($lang_search_new_php['target_album'], $dir, albumselect($dirid))."</td></tr>\n".$warning;
}

/**
 * picrow()
 *
 * return the HTML code for a row to be displayed for an image
 * the row contains a checkbox, the image name, a thumbnail
 *
 * @param $picfile the full path of the file that contains the picture
 * @param $picid the name of the check box
 * @return the HTML code
 **/
function picrow($picfile, $picid, $albid)
{
	global $CONFIG, $expic_array;

	$encoded_picfile = base64_encode($picfile);
	$picname = $CONFIG['fullpath'].$picfile;
	$pic_url = urlencode($picfile);
	$pic_fname = basename($picfile);

	$thumb_file = dirname($picname).'/'.$CONFIG['thumb_pfx'].$pic_fname;
	if(file_exists($thumb_file)){
		$thumb_info = getimagesize($picname);
		$thumb_size = compute_img_size($thumb_info[0], $thumb_info[1], 48);
		$img ='<img src="'.path2url($picname).'" '.$thumb_size['geom'].' class="thumbnail" border="0">';
	} else {
		$img ='<img src="showthumb.php?picfile='.$pic_url.'&size=48" class="thumbnail" border="0">';
	}

	if (filesize($picname) && is_readable($picname)) {
		$fullimagesize = getimagesize($picname);
		$winsizeX = ($fullimagesize[0] + 16);
		$winsizeY = ($fullimagesize[1] + 16);

		$checked = isset($expic_array[$picfile]) || !$fullimagesize ? '' : 'checked';

		return <<<EOT
	<tr>
		<td class="tableb" valign="middle">
			<input name="pics[]" type="checkbox" value="$picid" $checked>
			<input name="album_lb_id_$picid" type="hidden" value="$albid">
			<input name="picfile_$picid" type="hidden" value="$encoded_picfile">
		</td>
		<td class="tableb" valign="middle" width="100%">
			<a href="javascript:;" onClick= "MM_openBrWindow('displayimage.php?&fullsize=1&picfile=$pic_url', 'ImageViewer', 'toolbar=yes, status=yes, resizable=yes, width=$winsizeX, height=$winsizeY')">$pic_fname</a>
		</td>
		<td class="tableb" valign="middle" align="center">
			<a href="javascript:;" onClick= "MM_openBrWindow('displayimage.php?&fullsize=1&picfile=$pic_url', 'ImageViewer', 'toolbar=yes, status=yes, resizable=yes, width=$winsizeX, height=$winsizeY')">$img<br /></a>
		</td>
	</tr>
EOT;
	} else {
		$winsizeX = (300);
		$winsizeY = (300);
		return <<<EOT
	<tr>
		<td class="tableb" valign="middle">
			&nbsp;
		</td>
		<td class="tableb" valign="middle" width="100%">
			<i>$pic_fname</i>
		</td>
		<td class="tableb" valign="middle" align="center">
			<a href="javascript:;" onClick= "MM_openBrWindow('displayimage.php?&fullsize=1&picfile=$pic_url', 'ImageViewer', 'toolbar=yes, status=yes, resizable=yes, width=$winsizeX, height=$winsizeY')"><img src="showthumb.php?picfile=$pic_url&size=48" class="thumbnail" border="0"><br /></a>
		</td>
	</tr>
EOT;
	}
}

/**
 * getfoldercontent()
 *
 * return the files and directories of a folder in two arrays
 *
 * @param $folder the folder to read
 * @param $dir_array the array that will contain name of sub-dir
 * @param $pic_array the array that will contain name of picture
 * @param $expic_array  an array that contains pictures already in db
 * @return
 **/
function getfoldercontent($folder, &$dir_array, &$pic_array, &$expic_array)
{
	global $CONFIG;

	$dir = opendir($CONFIG['fullpath'].$folder);
	while($file = readdir($dir)){
		if(is_dir($CONFIG['fullpath'].$folder.$file)) {
			if ($file != "." && $file != "..")
				$dir_array[] = $file;
		}
		if(is_file($CONFIG['fullpath'].$folder.$file)) {
			if(strncmp($file, $CONFIG['thumb_pfx'], strlen($CONFIG['thumb_pfx'])) != 0
				&&  strncmp($file, $CONFIG['normal_pfx'], strlen($CONFIG['normal_pfx'])) != 0)
				$pic_array[] = $file;
		}
	}
	closedir($dir);

	natcasesort($dir_array);
	natcasesort($pic_array);
}

function display_dir_tree($folder, $ident)
{
	global $CONFIG, $PHP_SELF, $lang_search_new_php;

	$dir_path = $CONFIG['fullpath'].$folder;

	if (!is_readable($dir_path)) return;

	$dir = opendir($dir_path);
	while($file = readdir($dir)){
		if(is_dir($CONFIG['fullpath'].$folder.$file) && $file != "." && $file != "..") {
			$start_target = $folder.$file;
			$dir_path = $CONFIG['fullpath'].$folder.$file;

			$warnings = '';
			if (!is_writable($dir_path)) $warnings .= $lang_search_new_php['dir_ro'];
			if (!is_readable($dir_path)) $warnings .= $lang_search_new_php['dir_cant_read'];

			if ($warnings) $warnings = '&nbsp;&nbsp;&nbsp;<b>'.$warnings.'<b>';

			echo <<<EOT
			<tr>
				<td class="tableb">
					$ident<img src="images/folder.gif" alt="">&nbsp;<a href= "$PHP_SELF?startdir=$start_target">$file</a>$warnings
				</td>
			</tr>
EOT;
			display_dir_tree($folder.$file.'/', $ident.'&nbsp;&nbsp;&nbsp;&nbsp;');
		}
	}
	closedir($dir);
}

/**
 * getallpicindb()
 *
 * Fill an array where keys are the full path of all images in the picture table
 *
 * @param $pic_array the array to be filled
 * @return
 **/
function getallpicindb(&$pic_array, $startdir)
{
	global $CONFIG;

	$sql = "SELECT filepath, filename ".
		   "FROM {$CONFIG['TABLE_PICTURES']} ".
		   "WHERE filepath LIKE '$startdir%'";
	$result = db_query($sql);
	while ($row = mysql_fetch_array($result)) {
		$pic_file = $row['filepath'].$row['filename'];
		$pic_array[$pic_file]=1;
	}
	mysql_free_result($result);
}

/**
 * getallalbumsindb()
 *
 * Fill an array with all albums where keys are aid of albums and values are
 * album title
 *
 * @param $album_array the array to be filled
 * @return
 **/
function getallalbumsindb(&$album_array)
{
	global $CONFIG;

	$sql = "SELECT aid, title ".
		   "FROM {$CONFIG['TABLE_ALBUMS']} ".
		   "WHERE 1";
	$result = 	mysql_query($sql);

	while ($row = mysql_fetch_array($result)) {
		$album_array[$row['aid']]= $row['title'];
	}
	mysql_free_result($result);
}


/**
 * scandir()
 *
 * recursive function that scan a directory, create the HTML code for each
 * picture and add new pictures in an array
 *
 * @param $dir the directory to be scanned
 * @param $expic_array the array that contains pictures already in DB
 * @param $newpic_array the array that contains new pictures found
 * @return
 **/
function scandir($dir, &$expic_array)
{
	static $dir_id = 0;
	static $count =0;
	static $pic_id=0;

	$pic_array = array();
	$dir_array = array();

	getfoldercontent($dir, $dir_array, $pic_array, $expic_array );

	if (count($pic_array) > 0){
		$dir_id_str=sprintf("d%04d", $dir_id++);
		echo dirheader($dir, $dir_id_str);
		foreach ($pic_array as $picture) {
			$count++;
			$pic_id_str=sprintf("i%04d", $pic_id++);
			echo picrow($dir.$picture, $pic_id_str, $dir_id_str );
		}
	}
	if (count($dir_array) > 0){
		foreach ($dir_array as $directory) {
			scandir($dir.$directory.'/', $expic_array);
		}
	}
	return $count;
}

/**************************************************************************
 * Main code
 **************************************************************************/

$album_array = array();
getallalbumsindb($album_array);

// We need at least one album
if (!count($album_array)) cpg_die(ERROR, $lang_search_new_php['need_one_album'], __FILE__, __LINE__);

if (isset($HTTP_POST_VARS['insert'])){

	if(!isset($HTTP_POST_VARS['pics'])) cpg_die(ERROR, $lang_search_new_php['no_pic_to_add'], __FILE__, __LINE__);

	pageheader($lang_search_new_php['page_title']);
	starttable("100%");
	echo <<<EOT
	<tr>
		<td colspan="4" class="tableh1"><h2>{$lang_search_new_php['insert']}</h2></td>
	</tr>
	<tr>
		<td class="tableh2" valign="middle" align="center"><b>{$lang_search_new_php['folder']}</b></td>
		<td class="tableh2" valign="middle" align="center"><b>{$lang_search_new_php['image']}</b></td>
		<td class="tableh2" valign="middle" align="center"><b>{$lang_search_new_php['album']}</b></td>
		<td class="tableh2" valign="middle" align="center"><b>{$lang_search_new_php['result']}</b></td>
	</tr>
EOT;

	$count=0;
	foreach ($HTTP_POST_VARS['pics'] as $pic_id){
		$album_lb_id = $HTTP_POST_VARS['album_lb_id_'.$pic_id];
		$album_id    = $HTTP_POST_VARS[$album_lb_id];
		$album_name  = $album_array[$album_id];
		$pic_file    = base64_decode($HTTP_POST_VARS['picfile_'.$pic_id]);
		$dir_name    = dirname($pic_file)."/";
		$file_name   = basename($pic_file);

		// To avoid problems with PHP scripts max execution time limit, each picture is
		// added individually using a separate script that returns an image
		$status = "<a href=\"addpic.php?aid=$album_id&pic_file=".($HTTP_POST_VARS['picfile_'.$pic_id])."&reload=".uniqid('')."\"><img src=\"addpic.php?aid=$album_id&pic_file=".($HTTP_POST_VARS['picfile_'.$pic_id])."&reload=".uniqid('')."\" class=\"thumbnail\" border=\"0\" width=\"24\" height=\"24\" /><br /></a>";

		echo "<tr>\n";
		echo "<td class=\"tableb\" valign=\"middle\" align=\"left\">$dir_name</td>\n";
		echo "<td class=\"tableb\" valign=\"middle\" align=\"left\">$file_name</td>\n";
		echo "<td class=\"tableb\" valign=\"middle\" align=\"left\">$album_name</td>\n";
		echo "<td class=\"tableb\" valign=\"middle\" align=\"center\">$status</td>\n";
		echo "</tr>\n";
		$count++;
		flush();
	}
	echo <<<EOT
	<tr>
		<td class="tableh2" colspan="4">
			<b>{$lang_search_new_php['be_patient']}</b>
		</td>
	</tr>
	<tr>
		<td class="tableb" colspan="4">
			{$lang_search_new_php['notes']}
		</td>
	</tr>

EOT;
	endtable();
	pagefooter();
	ob_end_flush();
} elseif(isset($HTTP_GET_VARS['startdir'])){
	pageheader($lang_search_new_php['page_title']);
	starttable("100%");
	echo <<<EOT
	<form method="post" action="$PHP_SELF?insert=1">
	<tr>
		<td colspan="3" class="tableh1"><h2>{$lang_search_new_php['list_new_pic']}</h2></td>
	</tr>

EOT;
	$expic_array = array();

	getallpicindb($expic_array, $HTTP_GET_VARS['startdir']);
	if(scandir($HTTP_GET_VARS['startdir'].'/', $expic_array)){
	echo <<<EOT
	<tr>
		<td colspan="3" align="center" class="tablef">
			<input type="submit" class="button" name="insert" value="{$lang_search_new_php['insert_selected']}">
		</td>
	</tr>
	</form>

EOT;
	} else {
	echo <<<EOT
	<tr>
		<td colspan="3" align="center" class="tableb">
			<br /><br />
			<b>{$lang_search_new_php['no_pic_found']}</b>
			<br /><br /><br />
		</td>
	</tr>
	</form>

EOT;
	}
	endtable();
	pagefooter();
	ob_end_flush();
} else {
	pageheader($lang_search_new_php['page_title']);
	starttable(-1,$lang_search_new_php['select_dir']);
	display_dir_tree('','');
	echo <<<EOT
	<tr>
		<td class="tablef">
			<b>{$lang_search_new_php['select_dir_msg']}</b>
		</td>
	</tr>

EOT;
	endtable();
	pagefooter();
	ob_end_flush();
}
?>