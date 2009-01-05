<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2009 Coppermine Dev Team
  v1.1 originally written by Gregory DEMAR

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 3
  as published by the Free Software Foundation.

  ********************************************
  Coppermine version: 1.5.1
  $HeadURL$
  $Revision$
  $LastChangedBy$
  $Date$
**********************************************/

define('IN_COPPERMINE', true);
define('SEARCHNEW_PHP', true);
define('DB_INPUT_PHP', true);

require('include/init.inc.php');

if (!GALLERY_ADMIN_MODE) {
    cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);
}

js_include('js/searchnew.js');

$rowCounter = 0;

/**
 * Local functions definition
 */

/**
 * albumselect()
 *
 * return the HTML code for a listbox with name $id that contains the list
 * of all albums
 *
 * @param string $id the name of the listbox
 * @return the HTML code
 */


 function albumselect($id = "album") 
{
    global $CONFIG, $lang_search_new_php, $lang_common, $cpg_udb;
    static $select = "";

    // Reset counter
    $list_count = 0;

    if ($select == "") {
        $result = cpg_db_query("SELECT aid, title FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = 0");
        while ($row = mysql_fetch_array($result)) {
            // Add to multi-dim array for later sorting
            $listArray[$list_count]['cat'] = $lang_common['albums_no_category'];
            $listArray[$list_count]['aid'] = $row['aid'];
            $listArray[$list_count]['title'] = $row['title'];
            $listArray[$list_count]['cid'] = 0;
            $list_count++;
        }
        mysql_free_result($result);

        $result = cpg_db_query("SELECT DISTINCT a.aid AS aid, a.title AS title, c.name AS cname, c.cid AS cid FROM {$CONFIG['TABLE_ALBUMS']} AS a, {$CONFIG['TABLE_CATEGORIES']} AS c WHERE a.category = c.cid AND a.category < '" . FIRST_USER_CAT . "'");
        while ($row = mysql_fetch_array($result)) {
            // Add to multi-dim array for later sorting
            $listArray[$list_count]['cat'] = $row['cname'];
            $listArray[$list_count]['aid'] = $row['aid'];
            $listArray[$list_count]['title'] = $row['title'];
            $listArray[$list_count]['cid'] = $row['cid'];
            $list_count++;
        }
        mysql_free_result($result);

        //if (defined('UDB_INTEGRATION')) {
            $sql = $cpg_udb->get_batch_add_album_list();
        /*} else {
            $sql = "SELECT aid, CONCAT('(', user_name, ') ', title) AS title " . "FROM {$CONFIG['TABLE_ALBUMS']} AS a " . "INNER JOIN {$CONFIG['TABLE_USERS']} AS u ON category = (" . FIRST_USER_CAT . " + user_id)";
        }*/
        $result = cpg_db_query($sql);
        while ($row = mysql_fetch_array($result)) {
            // Add to multi-dim array for later sorting
            $listArray[$list_count]['cat'] = $lang_common['personal_albums'];
            $listArray[$list_count]['aid'] = $row['aid'];
            $listArray[$list_count]['title'] = $row['title'];
            $listArray[$list_count]['cid'] = -1;
            $list_count++;
        }
        mysql_free_result($result);

        $select = '<option value="0" selected="selected">' . $lang_common['select_album'] . "</option>\n";

        // Sort the pulldown options by category and album name
        $listArray = array_csort($listArray,'cat','title');

        // Create the nicely sorted and formatted drop down list
        // $alb_cat = '';
        $alb_cid = '';
        foreach ($listArray as $val) {
            //if ($val['cat'] != $alb_cat) {  // old method compared names which might not be unique
            if ($val['cid'] !== $alb_cid) {
                if ($alb_cid) {
                    $select .= "</optgroup>\n";
                }
                $select .= '<optgroup label="' . $val['cat'] . '">' . "\n";
                $alb_cid = $val['cid'];
            }
            $select .= '<option value="' . $val['aid'] . '">   ' . $val['title'] . "</option>\n";
        }
        if ($alb_cid) {
            $select .= "</optgroup>\n";
        }
    }

    return "\n<select id=\"aid\" name=\"$id\" class=\"listbox\">\n$select</select>\n";
}

/**
 * dirheader()
 *
 * return the HTML code for the row to be displayed when we start a new
 * directory
 *
 * @param  $dir the directory
 * @param  $dirid the name of the listbox that will list the albums
 * @return the HTML code
 */
function dirheader($dir, $dirid)
{
    global $CONFIG, $lang_search_new_php, $lang_common;
    $warning = '';

    if (!is_writable($CONFIG['fullpath'] . $dir))
        $warning = "<tr><td class=\"tableh2\" valign=\"middle\" colspan=\"4\">\n" . "<strong>{$lang_search_new_php['warning']}</strong>: {$lang_search_new_php['change_perm']}</td></tr>\n";
    return "<tr><td class=\"tableh2\" valign=\"middle\" align=\"right\" colspan=\"4\">\n" .
    sprintf($lang_search_new_php['target_album'], $dir, albumselect($dirid)) . "</td></tr>\n" . $warning;
}

/**
 * picrow()
 *
 * return the HTML code for a row to be displayed for an image
 * the row contains a checkbox, the image name, a thumbnail
 *
 * @param  $picfile the full path of the file that contains the picture
 * @param  $picid the name of the check box
 * @return the HTML code
 */
function picrow($picfile, $picid, $albid)
{
    global $CONFIG, $expic_array, $rowCounter;
    $rowCounter++;
    if ( ($rowCounter / 2) == floor($rowCounter / 2) ) {
      $rowStyle = 'tableb';
    } else {
      $rowStyle = 'tableb tableb_alternate';
    }

    $encoded_picfile = base64_encode($picfile);
    $picname = $CONFIG['fullpath'] . $picfile;
    $pic_url = urlencode($picfile);
    $pic_fname = basename($picfile);
    $pic_dirname = dirname($picname);

    $thumb_file = dirname($picname) . '/' . $CONFIG['thumb_pfx'] . $pic_fname;
    
    if ($CONFIG['display_thumbs_batch_add'] == 1) {
    
        if (file_exists($thumb_file)) {
        
            $thumb_info = cpg_getimagesize($picname);
            $thumb_size = compute_img_size($thumb_info[0], $thumb_info[1], 48);

            $img = '<img src="' . path2url($thumb_file) . '" ' . $thumb_size['geom'] . ' class="thumbnail" border="0" alt="" />';

        } elseif (is_image($picname)) {

            $img = '<img src="showthumb.php?picfile=' . $pic_url . '&amp;size=48" class="thumbnail" border="0" alt="" />';

        } else {
        
            $file['filepath'] = $pic_dirname.'/';
            $file['filename'] = $pic_fname;
            $filepathname = get_pic_url($file,'thumb');

            $img = '<img src="'.$filepathname.'" class="thumbnail" width="48" border="0" alt="" />';
        }  
    
    } else {
        $img = '';
    }

    if (filesize($picname) && is_readable($picname)) {
        // for video support, maybe check: http://www.getid3.org/
        // for now, hack in something that works (don't check !$fullimagesize)
        $fullimagesize = cpg_getimagesize($picname); 
        $winsizeX = ($fullimagesize[0] + 16);
        $winsizeY = ($fullimagesize[1] + 16);
        // $checked = isset($expic_array[$picfile]) || !$fullimagesize ? '' : 'checked';
        $checked = isset($expic_array[$picfile]) ? '' : 'checked="checked"';
        $return = <<<EOT
        <tr>
                <td class="$rowStyle" valign="middle" width="30">
                        <input name="pics[]" id="checkbox_p_{$picid}" type="checkbox" value="$picid" $checked />
                        <input name="album_lb_id_$picid" type="hidden" value="$albid" />
                        <input name="picfile_$picid" type="hidden" value="$encoded_picfile" />
                </td>
EOT;
        // if $fullimagesize is not null, then assume it's an image
        if ($fullimagesize) {
            $return .= <<<EOT
                <td class="$rowStyle" valign="middle">
                        <a href="javascript:;" onclick= "MM_openBrWindow('displayimage.php?fullsize=1&amp;picfile=$pic_url', 'ImageViewer', 'toolbar=yes, status=yes, resizable=yes, width=$winsizeX, height=$winsizeY')">$pic_fname</a>
                </td>
                <td class="$rowStyle" valign="middle" align="center">
                        <a href="javascript:;" onclick= "MM_openBrWindow('displayimage.php?fullsize=1&amp;picfile=$pic_url', 'ImageViewer', 'toolbar=yes, status=yes, resizable=yes, width=$winsizeX, height=$winsizeY')">
EOT;
        } else {
            // assume it's not an image so hope that browser can display/play it with a helper app
            $nonpic_url = rawurldecode($pic_url);
            $return .= <<<EOT
                <td class="$rowStyle" valign="middle">
                        <a href="javascript:;" onclick= "MM_openBrWindow('{$CONFIG['fullpath']}$nonpic_url', 'ImageViewer', 'toolbar=yes, status=yes, resizable=yes, width=$winsizeX, height=$winsizeY')">$pic_fname</a>
                </td>
                <td class="$rowStyle" valign="middle" align="center">
                        <a href="javascript:;" onclick= "MM_openBrWindow('{$CONFIG['fullpath']}$nonpic_url', 'ImageViewer', 'toolbar=yes, status=yes, resizable=yes, width=$winsizeX, height=$winsizeY')">
EOT;
        }
        if ($CONFIG['display_thumbs_batch_add'] == 1) {
          $return .= <<<EOT
                        <img src="images/spacer.gif" width="1" height="48" border="0" alt="" />
EOT;
        }
        $return .= <<<EOT
                        $img</a><br />
                </td>
                
                <td class="$rowStyle" valign="middle" width="100" height="40">
                    <p id="p_{$picid}" name="addpic.php?pic_file=$encoded_picfile"></p>
                </td>
        </tr>
EOT;
        return $return;
    } else {
        $winsizeX = (300);
        $winsizeY = (300);
        $return = <<<EOT
        <tr>
                <td class="$rowStyle" valign="middle">
                        &nbsp;
                </td>
                <td class="$rowStyle" valign="middle">
                        <i>$pic_fname</i>
                </td>
                <td class="$rowStyle" valign="middle" align="center">
                        <a href="javascript:;" onclick= "MM_openBrWindow('displayimage.php?fullsize=1&amp;picfile=$pic_url', 'ImageViewer', 'toolbar=yes, status=yes, resizable=yes, width=$winsizeX, height=$winsizeY')">
EOT;
        if ($CONFIG['display_thumbs_batch_add'] == 1) {
          $return .= <<<EOT
                        <img src="showthumb.php?picfile=$pic_url&amp;size=48" class="thumbnail" border="0" alt="" />
EOT;
        }
        $return .= <<<EOT
                        </a>
                </td>
        </tr>
EOT;
        return $return;
    }
}

/**
 * getfoldercontent()
 *
 * return the files and directories of a folder in two arrays
 *
 * @param  $folder the folder to read
 * @param  $dir_array the array that will contain name of sub-dir
 * @param  $pic_array the array that will contain name of picture
 * @param  $expic_array an array that contains pictures already in db
 * @return
 */
function getfoldercontent($folder, &$dir_array, &$pic_array, &$expic_array)
{
    global $CONFIG, $lang_db_input_php;
    $dir = opendir($CONFIG['fullpath'] . $folder);
    while ($file = readdir($dir)) {
        if (is_dir($CONFIG['fullpath'] . $folder . $file)) {
            if ($file != "." && $file != ".." && $CONFIG['fullpath'] . $folder . $file != $CONFIG['fullpath'].'/edit' && $CONFIG['fullpath'] . $folder . $file != $CONFIG['fullpath'].'/'.substr($CONFIG['userpics'],0,strlen($CONFIG['userpics'])-1)) {
                $dir_array[] = $file;
            }
        }
        if (is_file($CONFIG['fullpath'] . $folder . $file)) {
            if (strncmp($file, $CONFIG['orig_pfx'], strlen($CONFIG['orig_pfx'])) != 0 && strncmp($file, $CONFIG['thumb_pfx'], strlen($CONFIG['thumb_pfx'])) != 0 && strncmp($file, $CONFIG['normal_pfx'], strlen($CONFIG['normal_pfx'])) != 0 && $file != 'index.html') {
                $newfile = replace_forbidden($file);
                if ($newfile != $file) {
                  //File name has been changed, let's get a unique filename and rename the existing file.
                  $matches = array();
                  if (!preg_match("/(.+)\.(.*?)\Z/", $newfile, $matches)) {
                      $matches[1] = 'invalid_fname';
                      $matches[2] = 'xxx';
                  }

                  if ($matches[2] == '' || !is_known_filetype($matches)) {
                      cpg_die(ERROR, sprintf($lang_db_input_php['err_invalid_fext'], $CONFIG['allowed_file_extensions']), __FILE__, __LINE__);
                  }

                  // Create a unique name for the uploaded file
                  $nr = 0;
                  $picture_name = $matches[1] . '.' . $matches[2];
                  while (file_exists($CONFIG['fullpath'] . $folder . $picture_name)) {
                    $picture_name = $matches[1] . '~' . $nr++ . '.' . $matches[2];
                  }
                  @rename($CONFIG['fullpath'] . $folder . $file, $CONFIG['fullpath'] . $folder . $picture_name);
                  $file = $picture_name;
                }
                $pic_array[] = $file;
            }
        }
    }
    closedir($dir);

    natcasesort($dir_array);
    natcasesort($pic_array);
}

function display_dir_tree($folder, $ident)
{
    global $CONFIG, $lang_search_new_php, $CPG_PHP_SELF; //$PHP_SELF,
    $dir_path = $CONFIG['fullpath'] . $folder;

    if (!is_readable($dir_path)) return;

    $dir = opendir($dir_path);
    static $dirCounter = 0;
    $folder_icon = cpg_fetch_icon('folder', 0);
    while ($file = readdir($dir)) { // loop looking for files - start
        if (is_dir($CONFIG['fullpath'] . $folder . $file) &&
            substr($file,0,1) != "." &&
            strpos($file,"'") == FALSE &&
            strpos($file,trim($CONFIG['userpics'],'/')) === FALSE &&
            strpos($file,'edit') === FALSE &&
            strpos($file,'.svn') === FALSE) {
                $start_target = $folder . $file;
                $dir_path = $CONFIG['fullpath'] . $folder . $file;

                $warnings = '';
                if (!is_writable($dir_path)) $warnings .= $lang_search_new_php['dir_ro'];
                if (!is_readable($dir_path)) $warnings .= $lang_search_new_php['dir_cant_read'];

                if ($warnings) $warnings = '&nbsp;&nbsp;&nbsp;<strong>' . $warnings . '<strong>';

                echo <<<EOT
                            <tr>
                                    <td class="tableb">
                                            {$ident}{$folder_icon}&nbsp;<a href= "{$CPG_PHP_SELF}?startdir=$start_target">$file</a>$warnings
                                    </td>
                            </tr>
EOT;
                $dirCounter++;
                display_dir_tree($folder . $file . '/', $ident . '&nbsp;&nbsp;&nbsp;&nbsp;');
        }
    } // loop looking for files - end
    closedir($dir);
    if ($dirCounter == 0) {
    echo '
                        <tr>
                                <td class="tableb">';
    echo '                                   ' . sprintf($lang_search_new_php['no_folders'],trim($CONFIG['fullpath'],'/'),trim($CONFIG['fullpath'],'/'),trim($CONFIG['userpics'],'/'));
    echo '
                                    </td>
                        </tr>';
    }

}

/**
 * getallpicindb()
 *
 * Fill an array where keys are the full path of all images in the picture table
 *
 * @param  $pic_array the array to be filled
 * @return
 */
function getallpicindb(&$pic_array, $startdir)
{
    global $CONFIG;

    $sql = "SELECT filepath, filename " . "FROM {$CONFIG['TABLE_PICTURES']} " . "WHERE filepath LIKE '$startdir%'";
    $result = cpg_db_query($sql);
    while ($row = mysql_fetch_array($result)) {
        $pic_file = $row['filepath'] . $row['filename'];
        $pic_array[$pic_file] = 1;
    }
    mysql_free_result($result);
}

/**
 * getallalbumsindb()
 *
 * Fill an array with all albums where keys are aid of albums and values are
 * album title
 *
 * @param  $album_array the array to be filled
 * @return
 */
function getallalbumsindb(&$album_array)
{
    global $CONFIG;

    $sql = "SELECT aid, title " . "FROM {$CONFIG['TABLE_ALBUMS']} " . "WHERE 1";
    $result = cpg_db_query($sql);

    while ($row = mysql_fetch_array($result)) {
        $album_array[$row['aid']] = $row['title'];
    }
    mysql_free_result($result);
}

/**
 * CPGscandir() //renamed because php5 has same function as scandir()
 *
 * recursive function that scan a directory, create the HTML code for each
 * picture and add new pictures in an array
 *
 * @param  $dir the directory to be scanned
 * @param  $expic_array the array that contains pictures already in DB
 * @param  $newpic_array the array that contains new pictures found
 * @return
 */
function CPGscandir($dir, &$expic_array)
{
    global $lang_search_new_php, $lang_common, $rowCounter;
    $dir = str_replace(".","" ,$dir);
    static $dir_id = 0;
    static $count = 0;
    static $pic_id = 0;

    $pic_array = array();
    $dir_array = array();
    getfoldercontent($dir, $dir_array, $pic_array, $expic_array);

    if (count($pic_array) > 0) {
        $dir_id_str = sprintf("d%04d", $dir_id++);
        echo dirheader($dir, $dir_id_str);
        echo <<< EOT
        <tr>
                <td class="tablef">
                    <input type="checkbox" name="checkAll2" onClick="selectAll(this,'pics');" class="checkbox" title="{$lang_common['check_uncheck_all']}" />
                </td>
                <td colspan="3" align="right" class="tablef">
                        <input type="submit" class="button" name="insert" value="{$lang_search_new_php['insert_selected']}" id="submit_button" />
                </td>
        </tr>
EOT;
        foreach ($pic_array as $picture) {
            $count++;
            $rowCounter++;
            $pic_id_str = sprintf("i%04d", $pic_id++);
            echo picrow($dir . $picture, $pic_id_str, $dir_id_str);
        }
    }
    if (count($dir_array) > 0) {
        foreach ($dir_array as $directory) {
            if (substr($directory,0,1) != ".") // added do not show folders with dots: gaugau 03-11-02
            CPGscandir($dir . $directory . '/', $expic_array);
        }
    }
    return $count;
}

/**
 * Main code
 */

$album_array = array();
getallalbumsindb($album_array);
// We need at least one album
if (!count($album_array)) {
    cpg_die(ERROR, $lang_search_new_php['need_one_album'].'<br />&nbsp;<br /><a href="albmgr.php" title="'.$lang_gallery_admin_menu['albums_title'].'" class="admin_menu">'.$lang_gallery_admin_menu['albums_lnk'].'</a>', __FILE__, __LINE__);
}

//if (isset($_POST['insert'])) {
if ($superCage->post->keyExists('insert')) {
    //if (!isset($_POST['pics'])) cpg_die(ERROR, $lang_search_new_php['no_pic_to_add'], __FILE__, __LINE__);
        if ($superCage->post->keyExists('pics')){
                $pics = $superCage->post->getAlnum('pics');
        }else{
                cpg_die(ERROR, $lang_search_new_php['no_pic_to_add'], __FILE__, __LINE__);
        }
    pageheader($lang_search_new_php['page_title']);
    $help = '&nbsp;'.cpg_display_help('f=uploading.htm&amp;as=ftp&amp;ae=ftp_end&amp;top=1#ftp_show_result', '600', '400');
    starttable("100%");
    echo <<<EOT
        <tr>
                <td colspan="4" class="tableh1"><h2>{$lang_search_new_php['insert']}$help</h2></td>
        </tr>
        <tr>
                <td class="tableh2" valign="middle" align="center"><strong>{$lang_search_new_php['folder']}</strong></td>
                <td class="tableh2" valign="middle" align="center"><strong>{$lang_search_new_php['image']}</strong></td>
                <td class="tableh2" valign="middle" align="center"><strong>{$lang_common['album']}</strong></td>
                <td class="tableh2" valign="middle" align="center"><strong>{$lang_search_new_php['result']}</strong></td>
        </tr>
EOT;

    $count = 0;
    foreach ($pics as $pic_id) {
        //$album_lb_id = $_POST['album_lb_id_' . $pic_id];
        $album_lb_id = $superCage->post->getAlnum('album_lb_id_'.$pic_id);
        //$album_id = $_POST[$album_lb_id];
        $album_id = $superCage->post->getInt($album_lb_id);

        $edit_album_array[] = $album_id; //Load the album number into an array for later
        $matches = $superCage->post->getMatched('picfile_'.$pic_id, '/^[a-zA-A0-9=]+$/');
        $picfile = $superCage->post->getAlnum('picfile_'.$pic_id);
        //$pic_file = base64_decode($_POST['picfile_' . $pic_id]);
        $pic_file = base64_decode($picfile);
        $dir_name = dirname($pic_file) . "/";
        $file_name = basename($pic_file);

        if ($album_id) {
            // To avoid problems with PHP scripts max execution time limit, each picture is
            // added individually using a separate script that returns an image
            $status = "<a href=\"addpic.php?aid=$album_id&pic_file=" . ($picfile) . "&amp;reload=" . uniqid('') . "\"><img src=\"addpic.php?aid=$album_id&amp;pic_file=" . ($picfile) . "&amp;reload=" . uniqid('') . "\" class=\"thumbnail\" border=\"0\" width=\"48\" height=\"48\" alt=\"{$lang_search_new_php['result_icon']}\" /><br /></a>";
            $album_name = $album_array[$album_id];
            //$edit_pics_content .= '<a href="editpics.php?album='.$album_id. '">' . $lang_search_new_php['edit_pics'] . ' : ' . $album_name . '</a><br />';
        } else {
            $album_name = $lang_search_new_php['no_album'];
            $status = "<img src=\"images/batch/back.png\" alt=\"" . $lang_search_new_php['no_album'] . "\" class=\"thumbnail\" border=\"0\" width=\"48\" height=\"48\" /><br />";
        }
        if ( ($count/2) == floor($count/2) ) {
          $rowStyle = 'tableb';
        }  else {
          $rowStyle = 'tableb tableb_alternate';
        }
        echo "<tr>\n";
        echo "<td class=\"".$rowStyle."\" valign=\"middle\" align=\"left\">$dir_name</td>\n";
        echo "<td class=\"".$rowStyle."\" valign=\"middle\" align=\"left\">$file_name</td>\n";
        echo "<td class=\"".$rowStyle."\" valign=\"middle\" align=\"left\">$album_name</td>\n";
        echo "<td class=\"".$rowStyle."\" valign=\"middle\" align=\"center\">$status</td>\n";
        echo "</tr>\n";
        $count++;
        flush();
    }

    // Eliminate the duplicate albums from the edit_album_array
    $edit_album_array = array_unique($edit_album_array);
    // Display the albums that have new pictures added
    foreach ($edit_album_array as $edit_album)
    {
      $edit_pics_content .= $lang_common['album'] . ' &laquo;' . $album_array[$edit_album] .'&raquo;: ';
      $edit_pics_content .= '<a href="editpics.php?album='.$edit_album. '" class="admin_menu">' . $lang_search_new_php['edit_pics'] . '</a> ';
      $edit_pics_content .= '<a href="modifyalb.php?album='.$edit_album. '" class="admin_menu">' . $lang_search_new_php['edit_properties'] . '</a> ';
      $edit_pics_content .= '<a href="thumbnails.php?album='.$edit_album. '" class="admin_menu">' . $lang_search_new_php['view_thumbs'] . '</a> ';
      $edit_pics_content .= '<br />';
    }
    $add_more_folder = '<a href="'.$CPG_PHP_SELF.'?startdir='.rtrim($dir_name, '/').'" class="admin_menu">'.sprintf($lang_search_new_php['add_more_folder'], '&laquo;'.rtrim($dir_name, '/').'&raquo;').'</a>';
    $notes = sprintf($lang_search_new_php['notes'], 
    				'<img src="images/batch/ok_small.png" border="0" width="16" height="16" alt="" />',
    				'<img src="images/batch/duplicate_small.png" border="0" width="16" height="16" alt="" />',
    				'<img src="images/batch/folder_locked_small.png" border="0" width="16" height="16" alt="" />',
    				'<img src="images/batch/back_small.png" border="0" width="16" height="16" alt="" />',
    				'<img src="images/batch/file_broken_small.png" border="0" width="16" height="16" alt="" />',
    				'<img src="images/batch/unknown_small.png" border="0" width="16" height="16" alt="" />',
    				'<img src="images/batch/gif_small.png" border="0" width="16" height="16" alt="" />'
    				);

    echo <<<EOT
        <tr>
                <td class="tableh2" colspan="4">
                        {$lang_search_new_php['be_patient']}
                </td>
        </tr>
        <tr>
                <td class="tableb" colspan="4">
                        {$notes}
                </td>
        </tr>
        <tr>
                <td class="tablef" colspan="4" align="center">
                {$edit_pics_content}
                </td>
        </tr>
        <tr>
                <td class="tablef" colspan="4" align="center">
                {$add_more_folder}
                </td>
        </tr>
EOT;
    endtable();
    pagefooter();
    ob_end_flush();
//} elseif (isset($_GET['startdir'])) {
} elseif ($superCage->get->keyExists('startdir') && $matches = $superCage->get->getMatched('startdir', '/^[0-9A-Za-z\/_-]+$/')) {
    $startdir = $matches[0];
    
    set_js_var('no_album_selected', $lang_search_new_php['no_album']);
    set_js_var('proc_limit', 2);
    
    pageheader($lang_search_new_php['page_title']);
    
    $help = '&nbsp;'.cpg_display_help('f=uploading.htm&amp;as=ftp&amp;ae=ftp_end&amp;top=1#ftp_select_file', '550', '400');
    echo <<<EOT
        <script language="javascript" type="text/javascript">
        <!--
        function selectAll(d,box) {
          var f = document.selectPics;
          for (i = 0; i < f.length; i++) {
            //alert (f[i].name.indexOf(box));
            if (f[i].type == "checkbox" && f[i].name.indexOf(box) >= 0) {
              if (d.checked) {
                f[i].checked = true;
              } else {
                f[i].checked = false;
              }
            }
          }
          if (d.name == "checkAll") {
              document.getElementsByName('checkAll2')[0].checked = document.getElementsByName('checkAll')[0].checked;
          } else {
              document.getElementsByName('checkAll')[0].checked = document.getElementsByName('checkAll2')[0].checked;
          }
        }
        -->
        </script>
        <form method="post" action="{$CPG_PHP_SELF}?insert=1" name="selectPics" id="cpgform" style="margin:0px;padding:0px">
EOT;
    
    echo '<div id="queue">';
    
    starttable("100%");
    echo <<<EOT
        <tr>
                <td colspan="4" class="tableh1"><h2>{$lang_search_new_php['list_new_pic']}$help</h2></td>
        </tr>

EOT;
    $expic_array = array();
    getallpicindb($expic_array, $startdir);
    if (CPGscandir($startdir . '/', $expic_array)) {
        echo <<<EOT
        <tr>
                <td class="tablef">
                    <input type="checkbox" name="checkAll" onClick="selectAll(this,'pics');" class="checkbox" title="{$lang_common['check_uncheck_all']}" />
                </td>
                <td colspan="3" align="right" class="tablef">
                        <input type="submit" class="button" name="insert" value="{$lang_search_new_php['insert_selected']}" onclick="process(); return false;" />
                </td>
        </tr>

EOT;
    } else {
        echo <<<EOT
        <tr>
                <td colspan="3" align="center" class="tableb">
                        <br /><br />
                        <strong>{$lang_search_new_php['no_pic_found']}</strong>
                        <br /><br /><br />
                </td>
        </tr>

EOT;
    }
    endtable();
    echo '</div>';
    print '        </form>';
    pagefooter();
    ob_end_flush();
} else {
    pageheader($lang_search_new_php['page_title']);
    $help = '&nbsp;'.cpg_display_help('f=uploading.htm&amp;as=ftp&amp;ae=ftp_end&amp;top=1', '600', '450');
    print '<form name="interfaceconfig" id="cpgform" action="'.$CPG_PHP_SELF.'" method="post" style="margin:0px;padding:0px">';
    starttable(-1, $lang_search_new_php['select_dir'].$help);

    // write the interface change to the db
    //if (isset($_POST['update_config'])) {
    if ($superCage->post->keyExists('update_config')){
        //$browse_batch_add = (int)$_POST['browse_batch_add'];
        $browse_batch_add = $superCage->post->getInt('browse_batch_add');
        if ($browse_batch_add != $CONFIG['browse_batch_add']) {
        	 cpg_config_set('browse_batch_add', $browse_batch_add);
        }
        //$display_thumbs_batch_add = (int)$_POST['display_thumbs_batch_add'];
        $display_thumbs_batch_add = $superCage->post->getInt('display_thumbs_batch_add');
        if ($display_thumbs_batch_add != $CONFIG['display_thumbs_batch_add']) {
        	 cpg_config_set('display_thumbs_batch_add', $display_thumbs_batch_add);
        }
    }


    $iframe_startfolder = str_replace('searchnew.php', '', __FILE__).rtrim($CONFIG['fullpath'], '/').'/';
    $iframe_hide = rawurlencode('.,..,.svn,edit,'.rtrim($CONFIG['userpics'], '/'));
    print '    <tr>'."\n";
    print '        <td class="tableb" align="center">'."\n";

    if ($CONFIG['browse_batch_add'] == 1) {
        print '            <iframe src="minibrowser.php?startfolder='.$iframe_startfolder.'&amp;parentform=choosefolder&amp;formelementname=startdir&amp;no_popup=1&amp;limitfolder='.$iframe_startfolder.'&amp;hidefolders='.$iframe_hide.'&amp;linktarget='.$CPG_PHP_SELF.'&amp;searchnew_php=1&amp;radio=0" width="95%" height="400" name="popup_in_a_box"></iframe>'."\n";
    } else {
        echo '<table width="100%">';
        display_dir_tree('', '');
        echo '</table>';
    }
    
    print '        </td>'."\n";
    print '    </tr>'."\n";

    // configure batch-add interface (classic or browsable)
    $yes_selected = $CONFIG['browse_batch_add'] ? 'checked="checked"' : '';
    $no_selected = !$CONFIG['browse_batch_add'] ? 'checked="checked"' : '';
    $help = cpg_display_help('f=configuration.htm&amp;as=admin_general_browsable_batch_add&amp;ae=admin_general_browsable_batch_add_end', '500', '300');
    // configure preview thumbnail interface (enabled or disabled)
    $thumb_yes_selected = $CONFIG['display_thumbs_batch_add'] ? 'checked="checked"' : '';
    $thumb_no_selected = !$CONFIG['display_thumbs_batch_add'] ? 'checked="checked"' : '';
    $help_thumb = cpg_display_help('f=configuration.htm&amp;as=admin_general_display_thumbs_batch_add&amp;ae=admin_general_display_thumbs_batch_add_end', '600', '250');
    echo <<<EOT
        <tr>
                <td class="tableb">
                        <strong>{$lang_search_new_php['select_dir_msg']}</strong>
                </td>
        </tr>
        <tr>
            <td class="tablef" colspan="6">
                        {$lang_search_new_php['browse_batch_add']}
                        $help
                        &nbsp;&nbsp;
                        <input type="radio" id="browse_batch_add1" name="browse_batch_add" value="1"  onclick="document.interfaceconfig.submit();" $yes_selected /><label for="browse_batch_add1" class="clickable_option">{$lang_common['yes']}</label>
                        &nbsp;&nbsp;
                        <input type="radio" id="browse_batch_add0" name="browse_batch_add" value="0"  onclick="document.interfaceconfig.submit();" $no_selected /><label for="browse_batch_add0" class="clickable_option">{$lang_common['no']}</label>
                        &nbsp;&nbsp;
                        <input type="hidden" name="update_config" value="1" />
                </td>
        </tr>
        <tr>
            <td class="tablef" colspan="6">
                        {$lang_search_new_php['display_thumbs_batch_add']}
                        $help_thumb
                        &nbsp;&nbsp;
                        <input type="radio" id="display_thumbs_batch_add1" name="display_thumbs_batch_add" value="1"  onclick="document.interfaceconfig.submit();" $thumb_yes_selected /><label for="display_thumbs_batch_add1" class="clickable_option">{$lang_common['yes']}</label>
                        &nbsp;&nbsp;
                        <input type="radio" id="display_thumbs_batch_add0" name="display_thumbs_batch_add" value="0"  onclick="document.interfaceconfig.submit();" $thumb_no_selected /><label for="display_thumbs_batch_add0" class="clickable_option">{$lang_common['no']}</label>
                        &nbsp;&nbsp;
                </td>
        </tr>
EOT;

    endtable();
    print '        </form>';
    pagefooter();
    ob_end_flush();
}

?>