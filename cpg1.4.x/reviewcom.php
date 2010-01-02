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

// added sort option and link to user profile
// todo: file needs modification to work with bridged installs!
// todo: search option.

define('IN_COPPERMINE', true);
define('REVIEWCOM_PHP', true);

require('include/init.inc.php');

if (!GALLERY_ADMIN_MODE) cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);
// Delete comments if form is posted
include("include/smilies.inc.php");

$nb_com_del = 0;
if (isset($_POST['cid_array'])) {
    $cid_array = $_POST['cid_array'];
    $cid_set = '';
    foreach ($cid_array as $cid)
    $cid_set .= ($cid_set == '') ? '(' . $cid : ', ' . $cid;
    $cid_set .= ')';

    cpg_db_query("DELETE FROM {$CONFIG['TABLE_COMMENTS']} WHERE msg_id IN $cid_set");
    $nb_com_del = mysql_affected_rows();
}

$result = cpg_db_query("SELECT count(*) FROM {$CONFIG['TABLE_COMMENTS']} WHERE 1");
$nbEnr = mysql_fetch_array($result);
$comment_count = $nbEnr[0];

if (!$comment_count) cpg_die(INFORMATION , $lang_reviewcom_php['no_comment'], __FILE__, __LINE__);

$start = isset($_GET['start']) ? (int)$_GET['start'] : 0;
$count = isset($_GET['count']) ? $_GET['count'] : 25;
$next_target = $_SERVER['PHP_SELF'] . '?start=' . ($start + $count) . '&amp;count=' . $count;
$prev_target = $_SERVER['PHP_SELF'] . '?start=' . max(0, $start - $count) . '&amp;count=' . $count;
$s50 = $count == 50 ? 'selected' : '';
$s75 = $count == 75 ? 'selected' : '';
$s100 = $count == 100 ? 'selected' : '';

if ($start + $count < $comment_count) {
    $next_link = "<a href=\"$next_target\" class=\"admin_menu\">{$lang_reviewcom_php['see_next']}&raquo;</a>&nbsp;&nbsp;-&nbsp;&nbsp;";
} else {
    $next_link = '';
}

if ($start > 0) {
    $prev_link = "<a href=\"$prev_target\" class=\"admin_menu\">&laquo;{$lang_reviewcom_php['see_prev']}</a>&nbsp;&nbsp;-&nbsp;&nbsp;";
} else {
    $prev_link = '';
}

pageheader($lang_reviewcom_php['title']);

echo <<<EOT
<script type="text/javascript" language="javascript">
<!--
function textCounter(field, maxlimit) {
        if (field.value.length > maxlimit) // if too long...trim it!
        field.value = field.value.substring(0, maxlimit);
}

function selectAll(d,box) {
  var f = document.editForm;
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

    <form action="{$_SERVER['PHP_SELF']}?start=$start&amp;count=$count" method="post" name="editForm">

EOT;

// make up the table header


starttable('100%');


if ($nb_com_del > 0) {
    $msg_txt = sprintf($lang_reviewcom_php['n_comm_del'], $nb_com_del);
    echo <<<EOT
        <tr>
                <td class="tableh2" colspan="5" align="center">
                        <br /><b>$msg_txt</b><br /><br />
                </td>
        </tr>

EOT;
}

echo <<<EOT
        <tr>
                <td class="tableh1" colspan="5">
                    <table border="0" cellspacing="0" cellpadding="0" width="100%">
                        <tr>
                            <td class="tableh1">
                                {$lang_reviewcom_php['title']}
                            </td>
                            <td class="tableh1" align="center">
                                $prev_link
                                $next_link
                            </td>
                            <td class="tableh1" align="right">
                                {$lang_reviewcom_php['n_comm_disp']}
                                <select onChange="if(this.options[this.selectedIndex].value) window.location.href='{$_SERVER['PHP_SELF']}?start=$start&amp;count='+this.options[this.selectedIndex].value;"  name="count" class="listbox">
                                        <option value="25">25</option>
                                        <option value="50" $s50>50</option>
                                        <option value="75" $s75>75</option>
                                        <option value="100" $s100>100</option>
                                </select>
                            </td>
                        </tr>
                    </table>
                </td>
        </tr>

EOT;

    echo <<<EOT
        <tr>
        <td class="tableh2" valign="middle" align="center">
            <input type="checkbox" name="checkAll" onClick="selectAll(this,'cid_array');" class="checkbox" title="$lang_check_uncheck_all" />
        </td>
        <td class="tableh2" valign="top">{$lang_reviewcom_php['user_name']}
        <a href="{$_SERVER['PHP_SELF']}?start=$start&amp;count=$count&amp;sort=name_a"><img src="images/ascending.gif" width="9" height="9" border="0" alt="" title="{$lang_reviewcom_php['name_a']}" /></a>
        <a href="{$_SERVER['PHP_SELF']}?start=$start&amp;count=$count&amp;sort=name_d"><img src="images/descending.gif" width="9" height="9" border="0" alt="" title="{$lang_reviewcom_php['name_d']}" /></a>
        </td>
        <td class="tableh2" valign="top">{$lang_reviewcom_php['date']}
        <a href="{$_SERVER['PHP_SELF']}?start=$start&amp;count=$count&amp;sort=date_a"><img src="images/ascending.gif" width="9" height="9" border="0" alt="" title="{$lang_reviewcom_php['date_a']}" /></a>
        <a href="{$_SERVER['PHP_SELF']}?start=$start&amp;count=$count&amp;sort=date_d"><img src="images/descending.gif" width="9" height="9" border="0" alt="" title="{$lang_reviewcom_php['date_d']}" /></a>
        </td>
        <td class="tableh2" valign="top">{$lang_reviewcom_php['comment']}
        <a href="{$_SERVER['PHP_SELF']}?start=$start&amp;count=$count&amp;sort=comment_a"><img src="images/ascending.gif" width="9" height="9" border="0" alt="" title="{$lang_reviewcom_php['comment_a']}" /></a>
        <a href="{$_SERVER['PHP_SELF']}?start=$start&amp;count=$count&amp;sort=comment_d"><img src="images/descending.gif" width="9" height="9" border="0" alt="" title="{$lang_reviewcom_php['comment_d']}" /></a>
        </td>
        <td class="tableh2" valign="top">{$lang_reviewcom_php['file']}
        <a href="{$_SERVER['PHP_SELF']}?start=$start&amp;count=$count&amp;sort=file_a"><img src="images/ascending.gif" width="9" height="9" border="0" alt="" title="{$lang_reviewcom_php['file_a']}" /></a>
        <a href="{$_SERVER['PHP_SELF']}?start=$start&amp;count=$count&amp;sort=file_d"><img src="images/descending.gif" width="9" height="9" border="0" alt="" title="{$lang_reviewcom_php['file_d']}" /></a>
        </td>
        </tr>

EOT;

$sort_codes = array('name_a' => 'msg_author ASC',
    'name_d' => 'msg_author DESC',
    'date_a' => 'msg_id ASC',
    'date_d' => 'msg_id DESC',
    'comment_a' => 'msg_body ASC',
    'comment_d' => 'msg_body DESC',
    'file_a' => 'pid ASC',
    'file_d' => 'pid DESC',
);
$sort = (!isset($_GET['sort']) || !isset($sort_codes[$_GET['sort']])) ? 'date_d' : $_GET['sort'];


$result = cpg_db_query("SELECT msg_id, msg_author, msg_body, UNIX_TIMESTAMP(msg_date) AS msg_date, author_id, {$CONFIG['TABLE_COMMENTS']}.pid as pid, aid, filepath, filename, url_prefix, pwidth, pheight FROM {$CONFIG['TABLE_COMMENTS']}, {$CONFIG['TABLE_PICTURES']} WHERE {$CONFIG['TABLE_COMMENTS']}.pid = {$CONFIG['TABLE_PICTURES']}.pid ORDER BY {$sort_codes[$sort]} LIMIT $start, $count");

$rowcounter = 0;

while ($row = mysql_fetch_array($result)) {
    $thumb_url =  get_pic_url($row, 'thumb');
    if (!is_image($row['filename'])) {
        $image_info = getimagesize($thumb_url);
        $row['pwidth'] = $image_info[0];
        $row['pheight'] = $image_info[1];
    }
    $image_size = compute_img_size($row['pwidth'], $row['pheight'], $CONFIG['alb_list_thumb_size']);
    $thumb_link = 'displayimage.php?pos=' . - $row['pid'];
    $msg_date = localised_date($row['msg_date'], $comment_date_fmt);
    $msg_body = bb_decode(process_smilies($row['msg_body']));
    $rowcounter++;
    if ($rowcounter >=2 ) { //let the row colors alternate, for now they are the same
        $rowcounter = 0;
        $tableclass = 'tableb'; // change to "tableh2_compact" or similar for alternation
    } else {
        $tableclass = 'tableb';
    }
    // build a link to the author's profile if applicable
    if ($row['author_id'] != 0) {
        $profile_link_start = '<a href="profile.php?uid='.$row['author_id'].'">';
        $profile_link_end = '</a>';
    } else {
        $profile_link_start = '';
        $profile_link_end = '';
    }
    // output the table rows
    echo <<<EOT
        <tr>
        <td class="$tableclass" valign="top" align="center">
            <input name="cid_array[]" id="check{$row['msg_id']}" type="checkbox" value="{$row['msg_id']}" />
        </td>
        <td class="$tableclass" valign="top">$profile_link_start{$row['msg_author']}$profile_link_end</td>
        <td class="$tableclass" valign="top">{$msg_date}</td>
        <td class="$tableclass" valign="top">
                        {$msg_body}
        </td>
        <td class="$tableclass" align="center">
                        <a href="$thumb_link"><img src="$thumb_url" {$image_size['geom']} class="image" border="0" alt="" /></a>
        </td>
        </tr>

EOT;
    flush();
}

mysql_free_result($result);

echo <<<EOT
        <tr>
            <td class="tablef" valign="middle" align="center">
                <input type="checkbox" name="checkAll2" onClick="selectAll(this,'cid_array');" class="checkbox" title="$lang_check_uncheck_all" />
            </td>
            <td colspan="4" align="center" class="tablef">
                        <input type="submit" value="{$lang_reviewcom_php['del_comm']}" class="button" />
                </td>
        </tr>

EOT;
endtable();
echo '</form>';
pagefooter();
ob_end_flush();

?>
