<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2010 Coppermine Dev Team
  v1.0 originally written by Gregory Demar

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 3
  as published by the Free Software Foundation.
  
  ********************************************
  Coppermine version: 1.4.26
  $HeadURL$
  $Revision$
  $Author$
  $Date$
**********************************************/

define('IN_COPPERMINE', true);
define('SEARCHNEW_PHP', true);
define('DB_INPUT_PHP', true);

require('include/init.inc.php');

if (!GALLERY_ADMIN_MODE) cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);

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


 function albumselect($id = "album") {
// frogfoot re-wrote this function to present the list in categorized, sorted and nicely formatted order

    global $CONFIG, $lang_search_new_php, $cpg_udb;
    static $select = "";

    // Reset counter
    $list_count = 0;

    if ($select == "") {
        $result = cpg_db_query("SELECT aid, title FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = 0");
        while ($row = mysql_fetch_array($result)) {
            // Add to multi-dim array for later sorting
            $listArray[$list_count]['cat'] = $lang_search_new_php['albums_no_category'];
            $listArray[$list_count]['aid'] = $row['aid'];
            $listArray[$list_count]['title'] = $row['title'];
            $list_count++;
        }
        mysql_free_result($result);

        $result = cpg_db_query("SELECT DISTINCT a.aid as aid, a.title as title, c.name as cname FROM {$CONFIG['TABLE_ALBUMS']} as a, {$CONFIG['TABLE_CATEGORIES']} as c WHERE a.category = c.cid AND a.category < '" . FIRST_USER_CAT . "'");
        while ($row = mysql_fetch_array($result)) {
            // Add to multi-dim array for later sorting
            $listArray[$list_count]['cat'] = $row['cname'];
            $listArray[$list_count]['aid'] = $row['aid'];
            $listArray[$list_count]['title'] = $row['title'];
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
            $listArray[$list_count]['cat'] = $lang_search_new_php['personal_albums'];
            $listArray[$list_count]['aid'] = $row['aid'];
            $listArray[$list_count]['title'] = $row['title'];
            $list_count++;
        }
        mysql_free_result($result);

        $select = '<option value="0">' . $lang_search_new_php['select_album'] . "</option>\n";

        // Sort the pulldown options by category and album name
        $listArray = array_csort($listArray,'cat','title');

        // Create the nicely sorted and formatted drop down list
        $alb_cat = '';
        foreach ($listArray as $val) {
            if ($val['cat'] != $alb_cat) {
          if ($alb_cat) $select .= "</optgroup>\n";
                $select .= '<optgroup label="' . $val['cat'] . '">' . "\n";
                $alb_cat = $val['cat'];
            }
            $select .= '<option value="' . $val['aid'] . '"' . ($val['aid'] == $sel_album ? ' selected' : '') . '>   ' . $val['title'] . "</option>\n";
        }
        if ($alb_cat) $select .= "</optgroup>\n";
    }

    return "\n<select name=\"$id\" class=\"listbox\">\n$select</select>\n";
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
    global $CONFIG, $lang_search_new_php,$lang_check_uncheck_all;
    $warning = '';

    if (!is_writable($CONFIG['fullpath'] . $dir))
        $warning = "<tr><td class=\"tableh2\" valign=\"middle\" colspan=\"3\">\n" . "<b>{$lang_search_new_php['warning']}</b>: {$lang_search_new_php['change_perm']}</td></tr>\n";
    return "<tr><td class=\"tableh2\"><input type=\"checkbox\" name=\"checkAll2\" onClick=\"selectAll(this,'pics');\" class=\"checkbox\" title=\"".$lang_check_uncheck_all."\" /></td><td class=\"tableh2\" valign=\"middle\" align=\"right\" colspan=\"2\">\n" .
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
    global $CONFIG, $expic_array;

    $encoded_picfile = base64_encode($picfile);
    $picname = $CONFIG['fullpath'] . $picfile;
    $pic_url = urlencode($picfile);
    $pic_fname = basename($picfile);
    $pic_dirname = dirname($picname);

    $thumb_file = dirname($picname) . '/' . $CONFIG['thumb_pfx'] . $pic_fname;
    if (file_exists($thumb_file)) {
        $thumb_info = getimagesize($picname);
        $thumb_size = compute_img_size($thumb_info[0], $thumb_info[1], 48);
        $img = '<img src="' . path2url($thumb_file) . '" ' . $thumb_size['geom'] . ' class="thumbnail" border="0" alt="" />';
    } elseif (is_image($picname)) {
        $img = '<img src="showthumb.php?picfile=' . $pic_url . '&amp;size=48" class="thumbnail" border="0" alt="" />';
    } else {
        $file['filepath'] = $pic_dirname.'/'; //substr($picname,0,strrpos($picname,'/'))
        $file['filename'] = $pic_fname;
        $filepathname = get_pic_url($file,'thumb');
        //$mime_content = cpg_get_type($picname);
        //$extension = file_exists("images/thumb_{$mime_content['extension']}.jpg") ? $mime_content['extension']:$mime_content['content'];
        //$img = '<img src="images/thumb_'.$extension.'.jpg" class="thumbnail" width="48" border="0" alt="" />';
        $img = '<img src="'.$filepathname.'" class="thumbnail" width="48" border="0" alt="" />';
    }

    if (filesize($picname) && is_readable($picname)) {
        //$fullimagesize = getimagesize($picname); COMMENTED OUT FOR VIDEO SUPPORT
        $winsizeX = ($fullimagesize[0] + 16);
        $winsizeY = ($fullimagesize[1] + 16);

        //$checked = isset($expic_array[$picfile]) || !$fullimagesize ? '' : 'checked';

        $checked = isset($expic_array[$picfile]) ? '' : 'checked';

        return <<<EOT
        <tr>
                <td class="tableb" valign="middle">
                        <input name="pics[]" id="picselector" type="checkbox" value="$picid" $checked />
                        <input name="album_lb_id_$picid" type="hidden" value="$albid" />
                        <input name="picfile_$picid" type="hidden" value="$encoded_picfile" />
                </td>
                <td class="tableb" valign="middle" width="100%">
                        <a href="javascript:;" onclick= "MM_openBrWindow('displayimage.php?fullsize=1&amp;picfile=$pic_url', 'ImageViewer', 'toolbar=yes, status=yes, resizable=yes, width=$winsizeX, height=$winsizeY')">$pic_fname</a>
                </td>
                <td class="tableb" valign="middle" align="center">
                        <a href="javascript:;" onclick= "MM_openBrWindow('displayimage.php?fullsize=1&amp;picfile=$pic_url', 'ImageViewer', 'toolbar=yes, status=yes, resizable=yes, width=$winsizeX, height=$winsizeY')"><img src="images/spacer.gif" width="1" height="48" border="0" alt="" />$img<br /></a>
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
                        <a href="javascript:;" onclick= "MM_openBrWindow('displayimage.php?fullsize=1&amp;picfile=$pic_url', 'ImageViewer', 'toolbar=yes, status=yes, resizable=yes, width=$winsizeX, height=$winsizeY')"><img src="showthumb.php?picfile=$pic_url&amp;size=48" class="thumbnail" border="0" alt="" /><br /></a>
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
    while (($file = readdir($dir)) !== FALSE) {
        if (is_dir($CONFIG['fullpath'] . $folder . $file)) {
            if ($file != "." && $file != ".." && $CONFIG['fullpath'] . $folder . $file != $CONFIG['fullpath'].'/edit' && $CONFIG['fullpath'] . $folder . $file != $CONFIG['fullpath'].'/'.substr($CONFIG['userpics'],0,strlen($CONFIG['userpics'])-1)) {
                $dir_array[] = $file;
            }
        }
        if (is_file($CONFIG['fullpath'] . $folder . $file) && !in_array($file, $pic_array)) {
            if (strncmp($file, $CONFIG['thumb_pfx'], strlen($CONFIG['thumb_pfx'])) != 0 && strncmp($file, $CONFIG['normal_pfx'], strlen($CONFIG['normal_pfx'])) != 0 && $file != 'index.html') {
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
    global $CONFIG, $lang_search_new_php; //$PHP_SELF,
    $dir_path = $CONFIG['fullpath'] . $folder;

    if (!is_readable($dir_path)) return;

    $dir = opendir($dir_path);
    static $dirCounter = 0;
    while (($file = readdir($dir)) !== FALSE) { // loop looking for files - start
        if (is_dir($CONFIG['fullpath'] . $folder . $file) &&
            substr($file,0,1) != "." &&
            strpos($file,"'") == FALSE &&
            strpos($file,trim($CONFIG['userpics'],'/')) === FALSE &&
            strpos($file,'edit') === FALSE &&
            strpos($file,'svn') === FALSE &&
            strpos($file,'.svn') === FALSE &&
            strpos($file,'CVS') === FALSE) {
                $start_target = $folder . $file;
                $dir_path = $CONFIG['fullpath'] . $folder . $file;

                $warnings = '';
                if (!is_writable($dir_path)) $warnings .= $lang_search_new_php['dir_ro'];
                if (!is_readable($dir_path)) $warnings .= $lang_search_new_php['dir_cant_read'];

                if ($warnings) $warnings = '&nbsp;&nbsp;&nbsp;<b>' . $warnings . '<b>';

                echo <<<EOT
                            <tr>
                                    <td class="tableb">
                                            $ident<img src="images/folder.gif" border="0" alt="" />&nbsp;<a href= "{$_SERVER['PHP_SELF']}?startdir=$start_target">$file</a>$warnings
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
        foreach ($pic_array as $picture) {
            $count++;
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
    cpg_die(ERROR, $lang_search_new_php['need_one_album'], __FILE__, __LINE__);
}

if (isset($_POST['insert'])) {
    if (!isset($_POST['pics'])) cpg_die(ERROR, $lang_search_new_php['no_pic_to_add'], __FILE__, __LINE__);

    pageheader($lang_search_new_php['page_title']);
    $help = '&nbsp;'.cpg_display_help('f=index.htm&amp;as=ftp&amp;ae=ftp_end&amp;top=1#ftp_show_result', '600', '400');
    starttable("100%");
    echo <<<EOT
        <tr>
                <td colspan="4" class="tableh1"><h2>{$lang_search_new_php['insert']}$help</h2></td>
        </tr>
        <tr>
                <td class="tableh2" valign="middle" align="center"><b>{$lang_search_new_php['folder']}</b></td>
                <td class="tableh2" valign="middle" align="center"><b>{$lang_search_new_php['image']}</b></td>
                <td class="tableh2" valign="middle" align="center"><b>{$lang_search_new_php['album']}</b></td>
                <td class="tableh2" valign="middle" align="center"><b>{$lang_search_new_php['result']}</b></td>
        </tr>
EOT;

    $count = 0;
    foreach ($_POST['pics'] as $pic_id) {
        $album_lb_id = $_POST['album_lb_id_' . $pic_id];
        $album_id = $_POST[$album_lb_id];

        $edit_album_array[] = $album_id; //Load the album number into an array for later

        $pic_file = base64_decode($_POST['picfile_' . $pic_id]);
        $dir_name = dirname($pic_file) . "/";
        $file_name = basename($pic_file);

        if ($album_id) {
            // To avoid problems with PHP scripts max execution time limit, each picture is
            // added individually using a separate script that returns an image
            $status = "<a href=\"addpic.php?aid=$album_id&pic_file=" . ($_POST['picfile_' . $pic_id]) . "&amp;reload=" . uniqid('') . "\"><img src=\"addpic.php?aid=$album_id&amp;pic_file=" . ($_POST['picfile_' . $pic_id]) . "&amp;reload=" . uniqid('') . "\" class=\"thumbnail\" border=\"0\" width=\"24\" height=\"24\" alt=\"{$lang_search_new_php['result_icon']}\" /><br /></a>";
            $album_name = $album_array[$album_id];
            //$edit_pics_content .= '<a href="editpics.php?album='.$album_id. '">' . $lang_search_new_php['edit_pics'] . ' : ' . $album_name . '</a><br />';
        } else {
            $album_name = $lang_search_new_php['no_album'];
            $status = "<img src=\"images/up_na.gif\" alt=\"" . $lang_search_new_php['no_album'] . "\" class=\"thumbnail\" border=\"0\" width=\"24\" height=\"24\" /><br />";
        }
        echo "<tr>\n";
        echo "<td class=\"tableb\" valign=\"middle\" align=\"left\">$dir_name</td>\n";
        echo "<td class=\"tableb\" valign=\"middle\" align=\"left\">$file_name</td>\n";
        echo "<td class=\"tableb\" valign=\"middle\" align=\"left\">$album_name</td>\n";
        echo "<td class=\"tableb\" valign=\"middle\" align=\"center\">$status</td>\n";
        echo "</tr>\n";
        $count++;
        flush();
    }

    // Eliminate the duplicate albums from the edit_album_array
    $edit_album_array = array_unique($edit_album_array);
    // Display the albums that have new pictures added
    foreach ($edit_album_array as $edit_album)
    {
      $edit_pics_content .= $lang_search_new_php['album'] . ' &laquo;' . $album_array[$edit_album] .'&raquo;: ';
      $edit_pics_content .= '<a href="editpics.php?album='.$edit_album. '" class="admin_menu">' . $lang_search_new_php['edit_pics'] . '</a> ';
      $edit_pics_content .= '<a href="modifyalb.php?album='.$edit_album. '" class="admin_menu">' . $lang_search_new_php['edit_properties'] . '</a> ';
      $edit_pics_content .= '<a href="thumbnails.php?album='.$edit_album. '" class="admin_menu">' . $lang_search_new_php['view_thumbs'] . '</a> ';
      $edit_pics_content .= '<br />';
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
        <tr>
                <td class="tableb" colspan="4">
                <p align="center">{$edit_pics_content}</p>
                </td>
        </tr>

EOT;
    endtable();
    pagefooter();
    ob_end_flush();
} elseif (isset($_GET['startdir'])) {
    pageheader($lang_search_new_php['page_title']);
    $help = '&nbsp;'.cpg_display_help('f=index.htm&amp;as=ftp&amp;ae=ftp_end&amp;top=1#ftp_select_file', '550', '400');
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
        <form method="post" action="{$_SERVER['PHP_SELF']}?insert=1" name="selectPics" style="margin:0px;padding:0px">
EOT;
    starttable("100%");
    echo <<<EOT
        <tr>
                <td colspan="3" class="tableh1"><h2>{$lang_search_new_php['list_new_pic']}$help</h2></td>
        </tr>

EOT;
    $expic_array = array();
    getallpicindb($expic_array, $_GET['startdir']);
    if (CPGscandir($_GET['startdir'] . '/', $expic_array)) {
        echo <<<EOT
        <tr>
                <td class="tablef">
                    <input type="checkbox" name="checkAll" onClick="selectAll(this,'pics');" class="checkbox" title="$lang_check_uncheck_all" />
                </td>
                <td colspan="2" align="center" class="tablef">
                        <input type="submit" class="button" name="insert" value="{$lang_search_new_php['insert_selected']}" />
                </td>
        </tr>

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

EOT;
    }
    endtable();
    print '        </form>';
    pagefooter();
    ob_end_flush();
} else {
    pageheader($lang_search_new_php['page_title']);
    $help = '&nbsp;'.cpg_display_help('f=index.htm&amp;as=ftp&amp;ae=ftp_end&amp;top=1', '600', '450');
    print '<form name="interfaceconfig" action="'.$_SERVER['PHP_SELF'].'" method="post" style="margin:0px;padding:0px">';
    starttable(-1, $lang_search_new_php['select_dir'].$help);

    // write the interface change to the db
    if (isset($_POST['update_config'])) {
        $value = $_POST['browse_batch_add'];
        cpg_db_query("UPDATE {$CONFIG['TABLE_CONFIG']} SET value = '$value' WHERE name = 'browse_batch_add'");
        $CONFIG['browse_batch_add'] = $value;
        if ($CONFIG['log_mode'] == CPG_LOG_ALL) {
            log_write('CONFIG UPDATE SQL: '.
              "UPDATE {$CONFIG['TABLE_CONFIG']} SET value = '$value' WHERE name = 'browse_batch_add'\n".
              'TIME: '.date("F j, Y, g:i a")."\n".
              'USER: '.$USER_DATA['user_name'],
              CPG_DATABASE_LOG
              );
        }
    }


    $iframe_startfolder .= str_replace('searchnew.php', '', __FILE__).rtrim($CONFIG['fullpath'], '/').'/';
    $iframe_hide = rawurlencode('.,..,CVS,.svn,svn,edit,'.rtrim($CONFIG['userpics'], '/'));
    print '    <tr>'."\n";
    print '        <td class="tableb" align="center">'."\n";
    if ($CONFIG['browse_batch_add'] == 1) {
        print '            <iframe src="minibrowser.php?startfolder='.$iframe_startfolder.'&amp;parentform=choosefolder&amp;formelementname=startdir&amp;no_popup=1&amp;limitfolder='.$iframe_startfolder.'&amp;hidefolders='.$iframe_hide.'&amp;linktarget='.$_SERVER['PHP_SELF'].'&amp;searchnew_php=1&amp;radio=0" width="95%" height="400" name="popup_in_a_box">'."\n";
    }
    display_dir_tree('', '');
    if ($CONFIG['browse_batch_add'] == 1) {
        print '            </iframe>'."\n";
    }
    print '        </td>'."\n";
    print '    </tr>'."\n";

    // configure batch-add interface (classic or browsable)
    $yes_selected = $CONFIG['browse_batch_add'] ? 'checked="checked"' : '';
    $no_selected = !$CONFIG['browse_batch_add'] ? 'checked="checked"' : '';
    $help = cpg_display_help('f=index.htm&amp;as=admin_general_browsable_batch_add&amp;ae=admin_general_browsable_batch_add_end', '500', '300');
    echo <<<EOT
        <tr>
                <td class="tableb">
                        <b>{$lang_search_new_php['select_dir_msg']}</b>
                </td>
        </tr>
        <tr>
            <td class="tablef" colspan="6">
                        {$lang_search_new_php['browse_batch_add']}
                        $help
                        &nbsp;&nbsp;
                        <input type="radio" id="browse_batch_add1" name="browse_batch_add" value="1"  onclick="document.interfaceconfig.submit();" $yes_selected /><label for="browse_batch_add1" class="clickable_option">$lang_yes</label>
                        &nbsp;&nbsp;
                        <input type="radio" id="browse_batch_add0" name="browse_batch_add" value="0"  onclick="document.interfaceconfig.submit();" $no_selected /><label for="browse_batch_add0" class="clickable_option">$lang_no</label>
                        &nbsp;&nbsp;
                        <input type="hidden" name="update_config" value="1" />
                </td>
        </tr>
EOT;

    endtable();
    print '        </form>';
    pagefooter();
    ob_end_flush();
}

?>