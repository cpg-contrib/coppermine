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
  Coppermine version: 1.4.28
  $HeadURL$
  $Revision$
  $Author$
  $Date$
**********************************************/

define('IN_COPPERMINE', true);
define('UTIL_PHP', true);
define('UPLOAD_PHP', true);

require('include/init.inc.php');
require('include/picmgmt.inc.php');

// Default number of pictures to process at a time when rebuilding thumbs or normals:
$defpicnum = 45;

if (!GALLERY_ADMIN_MODE) cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);

pageheader($lang_util_php['title']);

// 'action name (for the $_REQUEST)' => array('function name','title for main page','description/options for main page')

$tasks =  array(

        'update_thumbs' => array('update_thumbs', $lang_util_php['update'],'

                <b>'.$lang_util_php['update_what'].' (2):</b><br />
                <input type="radio" name="updatetype" id="updatetype1" value="0" class="nobg" /><label for="updatetype1" class="clickable_option">'.$lang_util_php['update_thumb'].'</label><br />
                <input type="radio" name="updatetype" id="updatetype2" value="1" class="nobg" /><label for="updatetype2" class="clickable_option">'.$lang_util_php['update_pic'].'</label><br />
                <input type="radio" name="updatetype" id="updatetype3" value="2" checked="checked" class="nobg" /><label for="updatetype3" class="clickable_option">'.$lang_util_php['update_both'].'</label><br />'.$lang_util_php['update_number'].'
                <input type="text" name="numpics" value="'.$defpicnum.'" size="5" class="textinput" /><br />'.$lang_util_php['update_option'].'<br /><br />'),

        'filename_to_title' => array('filename_to_title', $lang_util_php['filename_title'],'

                <b>'.$lang_util_php['filename_how'].' (2):</b><br />
        <input type="radio" name="parsemode" id="parsemode1" value="0" checked="checked" class="nobg" /><label for="parsemode1" class="clickable_option">' . $lang_util_php['filename_remove'] . '</label><br />
                <input type="radio" name="parsemode" id="parsemode2" value="1" class="nobg" /><label for="parsemode2" class="clickable_option">'.$lang_util_php['filename_euro'].'</label><br />
                <input type="radio" name="parsemode" id="parsemode3" value="2" class="nobg" /><label for="parsemode3" class="clickable_option">'.$lang_util_php['filename_us'].'</label><br />
                <input type="radio" name="parsemode" id="parsemode4" value="3" class="nobg" /><label for="parsemode4" class="clickable_option">'.$lang_util_php['filename_time'].'</label><br /><br />'),

        'del_titles' => array('del_titles', $lang_util_php['delete_title'], $lang_util_php['delete_title_explanation']),

        'del_orig' => array('del_orig', $lang_util_php['delete_original'], $lang_util_php['delete_original_explanation']),

        'del_norm' => array('del_norm', $lang_util_php['delete_intermediate'], $lang_util_php['delete_intermediate_explanation']),

        'del_orphans' => array('del_orphans', $lang_util_php['delete_orphans'], $lang_util_php['delete_orphans_explanation']),

        'refresh_db' => array('refresh_db', $lang_util_php['refresh_db'], $lang_util_php['refresh_db'].'<br />' . $lang_util_php['update_number'].'

                <input type="text" name="refresh_numpics" value="'.$defpicnum.'" size="5" class="textinput" /><br />'.$lang_util_php['update_option']),

        'reset_views' => array('reset_views', $lang_util_php['reset_views'], $lang_util_php['reset_views_explanation']),

        'php_info' => array('', '<a href="phpinfo.php" class="statlink">' . $lang_util_php['phpinfo'] . '</a>', $lang_util_php['phpinfo_explanation']),

        'upd_db' => array('', '<a href="update.php" class="statlink">' . $lang_util_php['update_db'].'</a>',$lang_util_php['update_db_explanation']),

        'view_log' => array('', '<a href="viewlog.php" class="statlink">' . $lang_util_php['view_log'] . '</a>', $lang_util_php['view_log_explanation']),

        'versioncheck' => array('', '<a href="versioncheck.php" class="statlink">' . $lang_util_php['versioncheck'] . '</a>', $lang_util_php['versioncheck_explanation']),

        'bridgemgr' => array('', '<a href="bridgemgr.php" class="statlink">' . $lang_util_php['bridgemanager'] . '</a>', $lang_util_php['bridgemanager_explanation']),

        );

$action = (isset($_REQUEST['action'])) ? $_REQUEST['action'] : '';

if (array_key_exists($action, $tasks)){
        call_user_func($action);
        echo "<br /><a href=\"util.php\">{$lang_util_php['back']}</a>";
} else {

        $help = '&nbsp;'.cpg_display_help('f=index.htm&amp;as=admin_tools&amp;ae=admin_tools_end&amp;top=1', '600', '400');

        starttable('100%', $lang_util_php['title'].$help, 2);

        echo '<tr>
                        <td class="tablef"><b>'.$lang_util_php['what_it_does'] . '</b>:
                                <ul style="margin-top:0px;margin-bottom:0px;list-style-type:square">';
        foreach($lang_util_desc_php as $value) {
        echo "<li>$value</li>\n";
        }
        echo '                        </ul>
                          </td>
                        <td class="tableb"><b>' . $lang_util_php['instruction'] . '</b>:<br />
                                (1) ' . $lang_util_php['instruction_action'] . '<br />
                              (2) ' . $lang_util_php['instruction_parameter'] . '<br />
                              (3) ' . $lang_util_php['instruction_album'] . '<br />
                              (4) ' . sprintf($lang_util_php['instruction_press'], $lang_util_php['submit_form']).'
                          </td>
              </tr>';

        endtable();

        echo '<br /><form action="util.php" method="post">';

        foreach ($tasks as $task){

            list($name, $title, $options) = $task;

                if ($name){
                    starttable('100%', "<input type=\"radio\" name=\"action\" value=\"$name\" id=\"$name\" class=\"nobg\" /><label for=\"$name\" class=\"clickable_option\" >$title</label> (1)");
                } else {
                          starttable('100%', $title);
                }
                echo "<tr><td class=\"tablef\">$options</td></tr>";
                endtable();
            echo '<br />';
        }

        starttable('100%', $lang_util_php['select_album']);
        echo '<tr><td class="tablef"><br />';
        //if (defined('UDB_INTEGRATION')){
                $cpg_udb->util_filloptions();
        /*} else {
                filloptions();
        }*/
        echo '<br /></td></tr>';
        endtable();
        echo '</form>';
}

function my_flush()
{
        print str_repeat(" ", 4096); // force a flush;
}

function del_titles()
{
        global $CONFIG, $lang_util_php;

        $albumid = (isset($_POST['albumid'])) ? $_POST['albumid'] : 0;
        $albstr = ($albumid) ? "WHERE aid = $albumid" : '';
        echo "<h2>{$lang_util_php['delete_wait']}</h2>";
        $query = cpg_db_query("UPDATE {$CONFIG['TABLE_PICTURES']} SET title = '' $albstr");
        if ($query) {
                echo $lang_util_php['titles_deleted']."<br />";
        }
}

function filename_to_title()
{
        global $CONFIG, $lang_util_php;

        $albumid = (isset($_POST['albumid'])) ? $_POST['albumid'] : 0;
        $albstr = ($albumid) ? " WHERE aid = $albumid" : '';
        $parsemode = $_POST['parsemode'];

        $result = cpg_db_query("SELECT * FROM {$CONFIG['TABLE_PICTURES']} $albstr");

        echo "<h2>{$lang_util_php['titles_wait']}</h2>";

        while ($row = mysql_fetch_assoc($result)){

        $filename = $row['filename'];
        $pid = $row['pid'];
        // //////////////////////////////////////////
        // ADD YOUR OWN PARSEMODES HERE //
        // /////////////////////////////////////////
        $pattern = "/(\d+)(.)(\d+)(.)(\d+)(.)(\d+)(.)(\d+)(.)(\d+)(.+)/";

        switch ($parsemode){

                case 0: // REMOVE .JPG AND REPLACE _ WITH [ ]
                        $filename = substr($filename, 0, -4);
                        $newtitle = str_replace("_", " ", $filename);
                        break;
                case 1: // CHANGE 2003_11_23_13_20_20.jpg TO 23/11/2003 13:20
                        $newtitle = str_replace("%20", " ", $filename);
                        $replacement = "$5/$3/$1 $7:$9";
                        $newtitle = preg_replace($pattern, $replacement, $filename);
                        break;
                case 2: // CHANGE 2003_11_23_13_20_20.jpg TO 11/23/2003 13:20
                        $newtitle = str_replace("%20", " ", $filename);
                        $replacement = "$3/$5/$1 $7:$9";
                        $newtitle = preg_replace($pattern, $replacement, $filename);
                        break;
                case 3: // CHANGE 2003_11_23_13_20_20.jpg TO 13:20
                        $newtitle = str_replace("%20", " ", $filename);
                        $replacement = "$7:$9";
                        $newtitle = preg_replace($pattern, $replacement, $filename);
                        break;
        }

        $query = cpg_db_query("UPDATE {$CONFIG['TABLE_PICTURES']} SET title = '$newtitle' WHERE pid = '$pid'");
        if ($query){
                echo "{$lang_util_php['file']} : $filename {$lang_util_php['title_set_to']} : $newtitle<br />";
        }

        my_flush();

        }
}

function filloptions()
{
        global $CONFIG, $lang_util_php;

        $result = cpg_db_query("SELECT aid, category, IF(user_name IS NOT NULL, CONCAT('(', user_name, ') ',title), CONCAT(' - ', title)) AS title " . "FROM {$CONFIG['TABLE_ALBUMS']} AS a " . "LEFT JOIN {$CONFIG['TABLE_USERS']} AS u ON category = (" . FIRST_USER_CAT . " + user_id) " . "ORDER BY category, title");

        echo '&nbsp;&nbsp;&nbsp;&nbsp;<select size="1" name="albumid" class="listbox"><option value="0">All Albums</option>';

        while ($row = mysql_fetch_array($result)){
                $result2 = cpg_db_query("SELECT name FROM {$CONFIG['TABLE_CATEGORIES']} WHERE cid = {$row['category']}");
                $row2 = mysql_fetch_assoc($result2);
                echo "<option value=\"{$row['aid']}\">{$row2['name']} {$row['title']}</option>";
        }

        echo '</select> (3)&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="'.$lang_util_php['submit_form'].'" class="button" /> (4)';
}

function update_thumbs()
{
        global $CONFIG, $lang_util_php;

        $albumid = (isset($_POST['albumid'])) ? $_POST['albumid'] : 0;
        $albstr = ($albumid) ? "WHERE aid = $albumid" : '';

        $updatetype = $_POST['updatetype'];
        $numpics = $_POST['numpics'];
        $startpic = (isset($_POST['startpic'])) ? $_POST['startpic'] : 0;

        echo "<h2>{$lang_util_php['thumbs_wait']}</h2>";

        $result = cpg_db_query("SELECT * FROM {$CONFIG['TABLE_PICTURES']} $albstr LIMIT $startpic, $numpics");
        $count = mysql_num_rows($result);

        while ($row = mysql_fetch_assoc($result)){

                $image = $CONFIG['fullpath'] . $row['filepath'] . $row['filename'];
                $normal = $CONFIG['fullpath'] . $row['filepath'] . $CONFIG['normal_pfx'] . $row['filename'];
                $thumb = $CONFIG['fullpath'] . $row['filepath'] . $CONFIG['thumb_pfx'] . $row['filename'];

                if ($updatetype == 0 || $updatetype == 2){
                        if (resize_image($image, $thumb, $CONFIG['thumb_width'], $CONFIG['thumb_method'], $CONFIG['thumb_use'])){
                                echo "$thumb {$lang_util_php['updated_succesfully']} !<br />";
                                my_flush();
                        } else {
                                echo "{$lang_util_php['error_create']} : $thumb<br />";
                                my_flush();
                        }
                }

                if ($updatetype == 1 || $updatetype == 2){

                        $imagesize = getimagesize($image);

                        if (max($imagesize[0], $imagesize[1]) > $CONFIG['picture_width'] && $CONFIG['make_intermediate']){
                                if (resize_image($image, $normal, $CONFIG['picture_width'], $CONFIG['thumb_method'], $CONFIG['thumb_use'])){
                                        echo "$normal {$lang_util_php['updated_succesfully']} !<br />";
                                        my_flush();
                                } else {
                                        echo "{$lang_util_php['error_create']} : $normal<br />";
                                        my_flush();
                                }
                        }
                }
        }

        if ($count == $numpics){

                $startpic += $numpics;

        echo <<< EOT
                <form action="util.php" method="post">
                                <input type="hidden" name="action" value="update_thumbs" />
                                <input type="hidden" name="numpics" value="$numpics" />
                                <input type="hidden" name="startpic" value="$startpic" />
                                <input type="hidden" name="updatetype" value="$updatetype" />
                                <input type="hidden" name="albumid" value="$albumid" />
                                <input type="submit" value="{$lang_util_php['continue']}" class="button" />
                        </form>
EOT;
        }
}

function del_orig()
{
        global $CONFIG, $lang_util_php;

        $albumid = (isset($_POST['albumid'])) ? $_POST['albumid'] : 0;
        $albstr = ($albumid) ? "WHERE aid = $albumid" : '';

        $result = cpg_db_query("SELECT * FROM {$CONFIG['TABLE_PICTURES']} $albstr");
        $num = mysql_num_rows($result);
        echo "<h2>{$lang_util_php['replace_wait']}</h2>";

        while ($row = mysql_fetch_assoc($result)) {

                $pid = $row['pid'];
                $image = $CONFIG['fullpath'] . $row['filepath'] . $row['filename'];
                $normal = $CONFIG['fullpath'] . $row['filepath'] . $CONFIG['normal_pfx'] . $row['filename'];
                $thumb = $CONFIG['fullpath'] . $row['filepath'] . $CONFIG['thumb_pfx'] . $row['filename'];

                if (file_exists($normal)) {
                        $deleted = unlink($image);
                        $renamed = rename($normal, $image);
                        if ($deleted AND $renamed){
                                $imagesize = getimagesize($image); // dimensions
                                $image_filesize = filesize($image); // bytes
                                $total_filesize = $image_filesize + filesize($thumb);
                                cpg_db_query("UPDATE {$CONFIG['TABLE_PICTURES']} SET filesize='$image_filesize', total_filesize='$total_filesize', pwidth='{$imagesize[0]}', pheight='{$imagesize[1]}' WHERE pid='$pid' ");
                                printf($lang_util_php['main_success'], $normal);
                        } else {
                                echo (!$renamed) ? sprintf($lang_util_php['error_rename'], $normal, $image) : sprintf($lang_util_php['error_deleting'], $image);
                        }
                } else {
                        printf($lang_util_php['error_not_found'], $normal);
                }
                echo '<br />';
           }
}

function del_norm()
{
        global $CONFIG, $lang_util_php;

        $albumid = (isset($_POST['albumid'])) ? $_POST['albumid'] : 0;
        $albstr = ($albumid) ? "WHERE aid = $albumid" : '';
        $result = cpg_db_query("SELECT * FROM {$CONFIG['TABLE_PICTURES']} $albstr");
        $num = mysql_num_rows($result);
        echo "<h2>".$lang_util_php['deleting_intermediates']."</h2>";

        while ($row = mysql_fetch_assoc($result)){

                $pid = $row['pid'];
                $image = $CONFIG['fullpath'] . $row['filepath'] . $row['filename'];
                $normal = $CONFIG['fullpath'] . $row['filepath'] . $CONFIG['normal_pfx'] . $row['filename'];
                $thumb = $CONFIG['fullpath'] . $row['filepath'] . $CONFIG['thumb_pfx'] . $row['filename'];

                if (file_exists($normal)){
                        $test = unlink($normal);
                        if ($test){
                                $total_filesize = filesize($image) + filesize($thumb);
                                cpg_db_query("UPDATE {$CONFIG['TABLE_PICTURES']} SET total_filesize='$total_filesize' WHERE pid='$pid'");
                                printf('The intermediate pic %s was successfully deleted', $normal);
                                print '<br />';
                        } else {
                                printf('Error deleting %s !', $normal);
                        }
                } else {
                        printf($lang_util_php['error_not_found'], $normal);
                        print '<br />';
                }
           }
}

function del_orphans()
{
        global $CONFIG, $lang_util_php;

        $count = 0;
        echo "<h2>".$lang_util_php['searching_orphans']."</h2><br />";
        my_flush();

        if (isset($_GET['single'])){
                $delone = cpg_db_query("DELETE FROM {$CONFIG['TABLE_COMMENTS']} WHERE msg_id= '{$_GET['single']}' LIMIT 1");
        }

        $result = cpg_db_query("SELECT pid FROM {$CONFIG['TABLE_PICTURES']}");

        while ($row = mysql_fetch_assoc($result)){
                $ok_array[] = $row['pid'];
        }

        $check_str = '(' . implode(',',$ok_array) . ')';
        $result = cpg_db_query("SELECT * FROM {$CONFIG['TABLE_COMMENTS']} WHERE pid NOT IN $check_str");

        while ($row = mysql_fetch_array($result)){

                $pid = $row['pid'];
                $msg_id = $row['msg_id'];
                $msg_body = $row['msg_body'];

                if (isset($_POST['del'])){
                        cpg_db_query("DELETE FROM {$CONFIG['TABLE_COMMENTS']} WHERE msg_id= $msg_id");
                        echo "{$lang_util_php['comment']} $msg_body {$lang_util_php['nonexist']} $pid - <a href=\"util.php?action=del_orphans&amp;single=$msg_id\">{$lang_util_php['delete']}</a><br />";
        }

                $count = mysql_num_rows($result);
        echo "<br /><br />$count {$lang_util_php['orphan_comment']}<br /><br />";
        if ($count > 1){
                        echo <<< EOT
                        <form action="util.php" method="post">
                                <input type="hidden" name="action" value="del_orphans" />
                                <input type="hidden" name="del" value="all" />
                                {$lang_util_php['delete_all_orphans']}
                                <input type="submit" value="{$lang_util_php['delete_all']}" class="button" />
                        </form>
EOT;
        }
        }
}

function reset_views()
{
        global $CONFIG, $lang_util_php;

        $albumid = (isset($_POST['albumid'])) ? $_POST['albumid'] : 0;
        $albstr = ($albumid) ? "WHERE aid = $albumid" : '';

        if (cpg_db_query("UPDATE {$CONFIG['TABLE_PICTURES']} SET hits ='0' $albstr")) echo 'Reset successful';

}
function refresh_db()
{
        global $CONFIG, $lang_util_php;

        $albumid = (isset($_POST['albumid'])) ? $_POST['albumid'] : 0;
        $albstr = ($albumid) ? "WHERE aid = $albumid" : '';
        $numpics = $_POST['refresh_numpics'];
        $startpic = (isset($_POST['refresh_startpic'])) ? $_POST['refresh_startpic'] : 0;

        starttable('100%', "Update results", 3);

        echo "<tr><th class=\"tableh2\">{$lang_util_php['file']}</th><th class=\"tableh2\">{$lang_util_php['problem']}</th><th class=\"tableh2\">{$lang_util_php['status']}</th></tr>";

        $outcome = 'none';
        $result = cpg_db_query("SELECT * FROM {$CONFIG['TABLE_PICTURES']} $albstr ORDER BY pid ASC LIMIT $startpic, $numpics");
        $count = mysql_num_rows($result);
        $found = 0;

        while ($row = mysql_fetch_assoc($result)){

                extract($row, EXTR_PREFIX_ALL, "db");
                unset($prob);

                $full_pic_url = $CONFIG['fullpath'] . $db_filepath . $db_filename;
                $thumb_url = $CONFIG['fullpath'] . $db_filepath . $CONFIG['thumb_pfx'] . $db_filename;
                $normal_url = $CONFIG['fullpath'] . $db_filepath . $CONFIG['normal_pfx'] . $db_filename;
                $url = '<a href="' . $CONFIG["ecards_more_pic_target"] . (substr($CONFIG["ecards_more_pic_target"], -1) == '/' ? '' : '/') ."displayimage.php?pos=-$db_pid" . '" target="_blank">' . "$db_title ($db_pid)" . '</a>';

                if (@file_exists($full_pic_url)){

                        $filesize = @filesize($full_pic_url);
                        $dimensions = @getimagesize($full_pic_url);

                        if ($filesize){

                                $thumb_filesize = @filesize($thumb_url);
                                $normal_filesize = @filesize($normal_url);
                                $total_filesize = $filesize + $thumb_filesize + $normal_filesize;

                                if ($total_filesize <> $db_total_filesize){

                                        $prob .= "Total filesize is incorrect<br />Database: {$db_total_filesize} bytes<br /> Actual: {$total_filesize} bytes<br />";
                                        $fs1_upd = @cpg_db_query("UPDATE {$CONFIG['TABLE_PICTURES']} SET total_filesize = '$total_filesize' WHERE pid = '$db_pid' LIMIT 1");
                                        $outcome = ($fs1_upd) ? 'Updated' : 'Update failed.';
                                }

                                if ($filesize <> $db_filesize){

                                        $prob .= "Total filesize is incorrect<br />Database: {$db_filesize} bytes<br />Actual: {$filesize} bytes<br />";
                                        $fs2_upd = @cpg_db_query("UPDATE {$CONFIG['TABLE_PICTURES']} SET filesize = '$filesize' WHERE pid = '$db_pid' LIMIT 1");
                                        $outcome = ($fs2_upd) ? 'Updated' : 'Update failed.';
                                }
                        } else {
                                $prob .= "Could not obtain file size (may be invalid file), skipping....<br />";
                                $outcome = "Skipped";
                        }

                        if ($dimensions){
                                if (($dimensions[0] <> $db_pwidth) ||  ($dimensions[1] <> $db_pheight)){

                                        $prob .= "Dimensions are incorrect<br />Database: {$db_pwidth}x{$db_pheight}<br />Actual:{$dimensions[0]}x{$dimensions[1]}<br />";
                                        $dim_upd = @cpg_db_query("UPDATE {$CONFIG['TABLE_PICTURES']} SET `pwidth` = '{$dimensions[0]}', `pheight` = '{$dimensions[1]}' WHERE `pid` = '$db_pid' LIMIT 1");
                                        $outcome = ($dim_upd) ? 'Updated' : 'Update failed - '.mysql_error();
                                }
                        } else {
                                $prob .= "Could not obtain dimension info, skipping....<br />";
                                $outcome = "Skipped";
                        }
                } else {
                        $prob .= "File $full_pic_url does not exist !<br />";
                        $outcome = "Cannot fix";
                }

                if ($prob){

                        $found++;
                        echo "<tr><td class=\"tableb\">$url</td><td class=\"tableb\">$prob</td><td class=\"tableb\">$outcome</td></tr>";
                } else {
                        echo "<tr><td class=\"tableb\">$url</td><td class=\"tableb\">No problems detected</td><td class=\"tableb\">OK</td></tr>";
                }
                my_flush();

        }

        endtable();

        if ($outcome == 'none') echo 'No problems were found.';

        if ($count == $numpics){
                   $startpic += $numpics;
                echo <<< EOT
                        <form action="util.php" method="post">
                                <input type="hidden" name="action" value="refresh_db" />
                                <input type="hidden" name="refresh_numpics" value="$numpics" />
                                <input type="hidden" name="refresh_startpic" value="$startpic" />
                                <input type="hidden" name="albumid" value="$albumid" />
                                <input type="submit" value="{$lang_util_php['continue']}" class="button" />
                        </form>
EOT;
        }
}
pagefooter();
ob_end_flush();
?>
