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
define('PICMGR_PHP', true);

require('include/init.inc.php');

/** sort the piture manager**/
js_include('js/jquery.sort.js');
js_include('js/albmgr.js');

if (!(GALLERY_ADMIN_MODE || USER_ADMIN_MODE)) {
    cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);
}

$icon_array = array();
$icon_array['ok'] = cpg_fetch_icon('ok', 0);

function get_album_data()
{
    global $CONFIG, $ALBUM_LIST;

    $result = cpg_db_query("SELECT aid, title FROM {$CONFIG['TABLE_ALBUMS']} ORDER BY title");
    if (mysql_num_rows($result) > 0) {
        $rowset = cpg_db_fetch_rowset($result);
        foreach ($rowset as $alb) {
            $ALBUM_LIST[]=array($alb['aid'], $alb['title']);
        }
    }
}

function albumselect($id = "album")
{
    global $CONFIG, $aid, $cpg_udb, $CPG_PHP_SELF, $lang_picmgr_php, $lang_common, $lang_errors;
    static $select = "";

    // Reset counter
    $list_count = 0;

    if ($select == "") {
        // albums in root category
        if (GALLERY_ADMIN_MODE) {
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
        }

        // albums in public categories
        if (GALLERY_ADMIN_MODE) {
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
        }

        // Get albums in users' personal galleries

        if (GALLERY_ADMIN_MODE) {
            $sql = $cpg_udb->get_admin_album_list();  
        } else {
            $sql = "SELECT aid, title AS title FROM {$CONFIG['TABLE_ALBUMS']}  WHERE category = " . (FIRST_USER_CAT + USER_ID);
        }
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

        if (!$aid) {
            $select = '<option value="0">' . $lang_picmgr_php['no_album'] . "</option>\n";
        }

        // Sort the pulldown options by category and album name
        $listArray = array_csort($listArray,'cat','title');

        // Create the nicely sorted and formatted drop down list
        // $alb_cat = '';
        $alb_cid = '';
        foreach ($listArray as $val) {
            if ($val['cid'] !== $alb_cid) {
                if ($alb_cid) {
                    $select .= "</optgroup>\n";
                }
                $select .= '<optgroup label="' . $val['cat'] . '">' . "\n";
                $alb_cid = $val['cid'];
            }
            $select .= '<option value="' . $val['aid'] . '"' . ($val['aid'] == $aid ? ' selected="selected"' : '') . '>   ' . $val['title'] . "</option>\n";
        }
        if ($alb_cid) {
            $select .= "</optgroup>\n";
        }
    }

    return "\n<select name=\"$id\" class=\"listbox\">\n$select</select>\n";
}


// set js variable to changes albums
set_js_var('change_album', $lang_picmgr_php['change_album']);
set_js_var('confirm_modifs', $lang_picmgr_php['confirm_modifs']);

pageheader($lang_picmgr_php['pic_mgr']);

print <<<EOT

<form name="picture_menu" id="cpgformPic" method="post" action="delete.php?what=picmgr" >
EOT;

starttable("100%", cpg_fetch_icon('picture_sort', 2) . $lang_picmgr_php['pic_mgr'], 1);

print <<<EOT
    <noscript>
        <tr>
            <td colspan="2" class="tableh2">
            {$lang_common['javascript_needed']}
            </td>
        </tr>
    </noscript>
<tr>

EOT;

    $aid = ($superCage->get->keyExists('aid')) ? $superCage->get->getInt('aid') : 0;
    
    if (GALLERY_ADMIN_MODE || USER_ADMIN_MODE) {
        $result = cpg_db_query("SELECT aid, pid, filename, title FROM {$CONFIG['TABLE_PICTURES']} WHERE aid = $aid ORDER BY position ASC, pid");
    }
    else cpg_die(ERROR, $lang_errors['perm_denied'], __FILE__, __LINE__);

    $rowset = cpg_db_fetch_rowset($result);
    
    $i=100;
    $sort_order = '';

   if (count ($rowset) > 0) 
   foreach ($rowset as $picture){
      $sort_order .= $picture['pid'].'@'.($i++).',';
   }

print <<<EOT

   <td class="tableb" valign="top" >
       <input type="hidden" name="album_id" value="{$aid}" />
       <input type="hidden" name="sort_order" value="{$sort_order}" />
       <input type="hidden" id="picture_order" name="picture_order" value="" />  

       <table class="head_album" border="0" cellspacing="0" cellpadding="0">
EOT;

//Joe Ernst - Added USER_ADMIN_MODE
if (GALLERY_ADMIN_MODE || USER_ADMIN_MODE) {
    $ALBUM_LIST = array();
    $ALBUM_LIST[] = array(0, $lang_picmgr_php['no_album']);
    get_album_data(FIRST_USER_CAT + USER_ID,'');

    echo <<<EOT
      <tr class="head-album">
         <td>
            <strong>{$lang_common['select_album']}</strong>
EOT;
        print albumselect('aid');
    echo <<<EOT
         </td>
      </tr>
    </table>
EOT;
}

print <<<EOT
        <div id="sort" >
            <table id="pic_sort" cellspacing="0" cellpadding="0" border="0">

EOT;
       $i   =   100;
       $lb  =   '';
       $j   =   1;
        /** create a table to sort the picture*/  
    if (count ($rowset) > 0) 
        foreach ($rowset as $picture){
            /**get the photo name*/
            $get_pohoto_name = $picture['title'];
            /**check the photo name is available*/
            if($get_pohoto_name == ''){
                $get_pohoto_name = $picture['filename'];    
            }
            $lb .='<tr id=sort-'.$picture["pid"].' ><td class="dragHandle"></td><td width="96%">'.$get_pohoto_name.'</td></tr>';
            $j++;
        }
        
    echo $lb;

    $up_arrow = cpg_fetch_icon('up', 0, $lang_common['move_up']);
    $down_arrow = cpg_fetch_icon('down', 0, $lang_common['move_down']);
    echo <<<EOT
      </table>
      </div>
            <table class="album_operate" cellspacing="0" cellpadding="0" border="0">
                <tr>
                <td style="width: 115px" id="control">
                    <a class="photoUp">$up_arrow</a>
                    <a class="photoDown">$down_arrow</a>
                </td>
                </tr>
            </table>
   </td>
</tr>
EOT;

    if($CONFIG['default_sort_order'] != 'pa' && $CONFIG['default_sort_order'] != 'pd') {
    echo <<<EOT
<tr>
    <td colspan="2" align="left" class="tableh2">
        {$lang_picmgr_php['explanation_header']}:
        <ul style="margin-top:0px;margin-bottom:0px;">
            <li>{$lang_picmgr_php['explanation1']}</li>
            <li>{$lang_picmgr_php['explanation2']}</li>
        </ul>
    </td>
</tr>
EOT;
     }
     echo <<<EOT
<tr>
    <td colspan="2" class="tablef">
        <table class="album_save" style="display: none;" cellspacing="0" cellpadding="0" border="0">
            <tr>
                <td>
                    <button type="submit" class="button" name="apply" id="apply" value="{$lang_common['apply_changes']}">{$icon_array['ok']}{$lang_common['apply_changes']}</button>
                </td>
                <td>
                    <div class="cpg_message_warning">
                        {$lang_picmgr_php['submit_reminder']}
                    </div>
                </td>
            </tr>
        </table>
    </td>
</tr>
EOT;
   endtable();
   list($timestamp, $form_token) = getFormToken();	
   echo "<input type=\"hidden\" name=\"form_token\" value=\"{$form_token}\" />
        <input type=\"hidden\" name=\"timestamp\" value=\"{$timestamp}\" /></form>";
   pagefooter();
   ob_end_flush();
?>