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
        // we can always use $cpg_udb now, so we don't have to check if bridged
/*
        // check if bridged
        if (defined('UDB_INTEGRATION')) {
            if (GALLERY_ADMIN_MODE) {
                $sql = $cpg_udb->get_admin_album_list();
            } else {
                $sql = "SELECT aid, title FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = ".(FIRST_USER_CAT + USER_ID);
            }
        } else {
            if (GALLERY_ADMIN_MODE) {
                $sql = "SELECT aid, CONCAT('(', user_name, ') ', title) AS title " . "FROM {$CONFIG['TABLE_ALBUMS']} AS a " . "INNER JOIN {$CONFIG['TABLE_USERS']} AS u ON category = (" . FIRST_USER_CAT . " + user_id)";
            } else {
                $sql = "SELECT aid, title AS title FROM {$CONFIG['TABLE_ALBUMS']}  WHERE category = " . (FIRST_USER_CAT + USER_ID);
            }
        }
*/
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
            //if ($val['cat'] != $alb_cat) {  // old method compared names which might not be unique
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
        /**set js variable to changes albums*/
     set_js_var('change_album', $lang_picmgr_php['change_album']);
     set_js_var('confirm_modifs', $lang_picmgr_php['confirm_modifs']);
     
     pageheader($lang_picmgr_php['pic_mgr']);


?>

<form name="picture_menu" id="cpgformPic" method="post" action="delete.php?what=picmgr" >
<?php starttable("100%", cpg_fetch_icon('picture_sort', 2) . $lang_picmgr_php['pic_mgr'], 1); ?>
    <noscript>
        <tr>
            <td colspan="2" class="tableh2">
            <?php echo $lang_common['javascript_needed'] ?>
            </td>
        </tr>
    </noscript>
<tr>

<?php
    $aid = ($superCage->get->keyExists('aid')) ? $superCage->get->getInt('aid') : 0;
    
    if (GALLERY_ADMIN_MODE || USER_ADMIN_MODE) {
        $result = cpg_db_query("SELECT aid, pid, filename, title FROM {$CONFIG['TABLE_PICTURES']} WHERE aid = $aid ORDER BY position ASC, pid");
    }
    else cpg_die(ERROR, $lang_errors['perm_denied'], __FILE__, __LINE__);

    $rowset = cpg_db_fetch_rowset($result);
    $i=100;
    $sort_order = '';

   if (count ($rowset) > 0) foreach ($rowset as $picture){
      $sort_order .= $picture['pid'].'@'.($i++).',';
   }
?>

   <td class="tableb" valign="top" align="center">
       <input type="hidden" name="albunm_id" value="<?php echo $aid; ?>" />
       <input type="hidden" name="delete_picture" value="" />
       <input type="hidden" name="sort_order" value="<?php echo $sort_order ?>" />
       <input type="hidden" id="pictur_order" name="pictur_order" value="" />  
        <br />
        <table width="300" border="0" cellspacing="0" cellpadding="0">
<?php
    //Joe Ernst - Added USER_ADMIN_MODE
    if (GALLERY_ADMIN_MODE || USER_ADMIN_MODE) {
        $ALBUM_LIST = array();
        $ALBUM_LIST[] = array(0, $lang_picmgr_php['no_album']);
        get_album_data(FIRST_USER_CAT + USER_ID,'');

echo <<<EOT
      <tr>
         <td>
            <strong>{$lang_common['select_album']}</strong>
EOT;
        print albumselect('aid');
echo <<<EOT
         </td>
      </tr>

EOT;
}
?>
    <tr>
        <td>
        <div id="sort">
            <table id="pic_sort">
<?php
       $i   =   100;
       $lb  =   '';
       $j   =   1;
        /** create a table to sort the picture*/  
    if (count ($rowset) > 0) 
        foreach ($rowset as $picture){
            $lb .='<tr id=sort'.$picture["pid"].' title='.$picture["pid"].'><td width="10%" style="padding-left:20px" >'.$j.'</td><td><img src="images/bullet.png"  /><td style="width:335px;padding-left:10px;">'.$picture["title"].'</td><td style="width:300px;padding-left:10px;">'.$picture["filename"].'</td></tr>';
            $j++;
        }
        
    echo $lb;

    $up_arrow = cpg_fetch_icon('up', 0, $lang_common['move_up']);
    $down_arrow = cpg_fetch_icon('down', 0, $lang_common['move_down']);
    echo <<<EOT
      </table>
      </div>
    </td>
     </tr>
     
      <tr>
         <td>
            <table>
               <tr>
               <td style="float:left; margin-left:50px;"><a class="photoUp">$up_arrow</a>
               <a class="photoDown">$down_arrow</a>
               </td>
<!-- Joe Ernst: I commented this out because I can't get it to work. -->
               <td align="center" style="width: 1px;"><img src="images/spacer.gif" width="1" alt=""><br />
               </td>
            </tr>
            </table>
         </td>
      </tr>
      <tr>
         <td><br />
            <br />
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
   <td colspan="2" align="center" class="tablef">
   <button type="submit" class="button" name="apply" id="apply" value="{$lang_common['apply_changes']}">{$icon_array['ok']}{$lang_common['apply_changes']}</button>
   </td>
</tr>
EOT;
   endtable();
   print '</form>';
   pagefooter();
   ob_end_flush();
?>