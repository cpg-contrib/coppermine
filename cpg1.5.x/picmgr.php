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
  Coppermine version: 1.5.2
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

if (GALLERY_ADMIN_MODE || USER_ADMIN_MODE) {

    $options = album_selection_options($aid);
    
    echo <<<EOT
      <tr class="head-album">
         <td>
            <select name="aid" class="listbox">
                <option value="0">{$lang_common['select_album']}</option>
                $options
            </select>
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
?>
