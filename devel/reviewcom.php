<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2005 Coppermine Dev Team
  v1.1 originaly written by Gregory DEMAR

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation; either version 2 of the License, or
  (at your option) any later version.
  ********************************************
  Coppermine version: 1.4.1
  $Source$
  $Revision$
  $Author$
  $Date$
**********************************************/

define('IN_COPPERMINE', true);
define('REVIEWCOM_PHP', true);

require('include/init.inc.php');

if (!GALLERY_ADMIN_MODE) cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);
// Delete comments if form is posted
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
$next_target = $_SERVER['PHP_SELF'] . '?start=' . ($start + $count) . '&count=' . $count;
$prev_target = $_SERVER['PHP_SELF'] . '?start=' . max(0, $start - $count) . '&count=' . $count;
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
starttable('100%', $lang_reviewcom_php['title'], 3);
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

    <form action="{$_SERVER['PHP_SELF']}?start=$start&count=$count" method="post" name="editForm">

EOT;

if ($nb_com_del > 0) {
    $msg_txt = sprintf($lang_reviewcom_php['n_comm_del'], $nb_com_del);
    echo <<<EOT
        <tr>
                <td class="tableh2" colspan="4" align="center">
                        <br /><b>$msg_txt</b><br /><br />
                </td>
        </tr>

EOT;
}

echo <<<EOT
        <tr>
                <td class="tableh2">
                        <input type="checkbox" name="checkAll" onClick="selectAll(this,'cid_array');" class="checkbox" title="$lang_check_uncheck_all" />
                </td>
                <td class="tableh2" colspan="3">
                        $prev_link
                        $next_link
                        <b>{$lang_reviewcom_php['n_comm_disp']}</b>
                        <select onChange="if(this.options[this.selectedIndex].value) window.location.href='{$_SERVER['PHP_SELF']}?start=$start&count='+this.options[this.selectedIndex].value;"  name="count" class="listbox">
                                <option value="25">25</option>
                                <option value="50" $s50>50</option>
                                <option value="75" $s75>75</option>
                                <option value="100" $s100>100</option>
                        </select>
                </td>
        </tr>

EOT;

$result = cpg_db_query("SELECT msg_id, msg_author, msg_body, UNIX_TIMESTAMP(msg_date) AS msg_date, author_id, {$CONFIG['TABLE_COMMENTS']}.pid as pid, aid, filepath, filename, url_prefix, pwidth, pheight FROM {$CONFIG['TABLE_COMMENTS']}, {$CONFIG['TABLE_PICTURES']} WHERE {$CONFIG['TABLE_COMMENTS']}.pid = {$CONFIG['TABLE_PICTURES']}.pid ORDER BY msg_id DESC LIMIT $start, $count");

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
    echo <<<EOT
        <tr>
        <td class="tableb" rowspan="2">
            <input name="cid_array[]" id="check{$row['msg_id']}" type="checkbox" value="{$row['msg_id']}" />
        </td>
        <td class="tableh2_compact" valign="top">
                <table cellpadding="0" cellspacing="0" border ="0">
                        <tr>
                        <td><img src="images/spacer.gif" width="5" height="1" /><br/></td>
                        <td><b>{$row['msg_author']}</b> - {$msg_date}</td>
                        </tr>
                </table>
        </td>
        <td class="tableh2_compact" align="center" rowspan="2">
                        <a href="$thumb_link"><img src="$thumb_url" {$image_size['geom']} class="image" border="0" alt="" /><br /></a>
        </td>
        </tr>
        <tr>
        <td class="tableb" valign="top" width="100%">
                        {$row['msg_body']}
                </td>
        </tr>

EOT;
    flush();
}

mysql_free_result($result);

echo <<<EOT
        <tr>
            <td class="tablef">
                <input type="checkbox" name="checkAll2" onClick="selectAll(this,'cid_array');" class="checkbox" title="$lang_check_uncheck_all" />
            </td>
            <td colspan="3" align="center" class="tablef">
                        <input type="submit" value="{$lang_reviewcom_php['del_comm']}" class="button" />
                </td>
        </form>
        </tr>

EOT;
endtable();
pagefooter();
ob_end_flush();

?>