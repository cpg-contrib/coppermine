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
define('PICMGR_PHP', true);

require('include/init.inc.php');

if (!(GALLERY_ADMIN_MODE || USER_ADMIN_MODE)) cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);

function get_album_data()
{
    global $CONFIG, $ALBUM_LIST;

   $result = cpg_db_query("SELECT aid, title FROM {$CONFIG['TABLE_ALBUMS']} ORDER BY title");
   if (mysql_num_rows($result) > 0){
      $rowset = cpg_db_fetch_rowset($result);
      foreach ($rowset as $alb){
         $ALBUM_LIST[]=array($alb['aid'], $alb['title']);
      }
   }
}

function albumselect($id = "album") {
// frogfoot re-wrote this function to present the list in categorized, sorted and nicely formatted order

    global $CONFIG, $lang_picmgr_php, $aid, $lang_errors, $cpg_udb;
    static $select = "";

    // Reset counter
    $list_count = 0;

    if ($select == "") {
        // albums in root category
        if (GALLERY_ADMIN_MODE) {
            $result = cpg_db_query("SELECT aid, title FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = 0");
            while ($row = mysql_fetch_array($result)) {
                // Add to multi-dim array for later sorting
                $listArray[$list_count]['cat'] = $lang_search_new_php['albums_no_category'];
                $listArray[$list_count]['aid'] = $row['aid'];
                $listArray[$list_count]['title'] = $row['title'];
                $list_count++;
            }
            mysql_free_result($result);
        }

        // albums in public categories
        if (GALLERY_ADMIN_MODE) {
            $result = cpg_db_query("SELECT DISTINCT a.aid AS aid, a.title AS title, c.name AS cname FROM {$CONFIG['TABLE_ALBUMS']} AS a, {$CONFIG['TABLE_CATEGORIES']} AS c WHERE a.category = c.cid AND a.category < '" . FIRST_USER_CAT . "'");
            while ($row = mysql_fetch_array($result)) {
                // Add to multi-dim array for later sorting
                $listArray[$list_count]['cat'] = $row['cname'];
                $listArray[$list_count]['aid'] = $row['aid'];
                $listArray[$list_count]['title'] = $row['title'];
                $list_count++;
            }
            mysql_free_result($result);
        }

        // albums in user's personal galleries
//        if (defined('UDB_INTEGRATION')) {
            //if (GALLERY_ADMIN_MODE) {
//                $sql = $cpg_udb->get_admin_album_list();
            /*} else {
                $sql = "SELECT aid, title FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = ".(FIRST_USER_CAT + USER_ID);
            }*/
//       } else {
            if (GALLERY_ADMIN_MODE) {
//                $sql = "SELECT aid, CONCAT('(', user_name, ') ', title) AS title " . "FROM {$CONFIG['TABLE_ALBUMS']} AS a " . "INNER JOIN {$CONFIG['TABLE_USERS']} AS u ON category = (" . FIRST_USER_CAT . " + user_id)";
                $sql = $cpg_udb->get_admin_album_list();  //it's always bridged so we no longer need to check.
            } else {
                $sql = "SELECT aid, title AS title FROM {$CONFIG['TABLE_ALBUMS']}  WHERE category = " . (FIRST_USER_CAT + USER_ID);
            }
//       }
        $result = cpg_db_query($sql);
        while ($row = mysql_fetch_array($result)) {
            // Add to multi-dim array for later sorting
            $listArray[$list_count]['cat'] = $lang_search_new_php['personal_albums'];
            $listArray[$list_count]['aid'] = $row['aid'];
            $listArray[$list_count]['title'] = $row['title'];
            $list_count++;
        }
        mysql_free_result($result);

        if (!$aid) {
            $select = '<option value="0">' . $lang_picmgr_php['no_album'] . "</option>\n";
        }

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
            $select .= '<option value="' . $val['aid'] . '"' . ($val['aid'] == $aid ? ' selected="selected"' : '') . '>   ' . $val['title'] . "</option>\n";
        }
        if ($alb_cat) $select .= "</optgroup>\n";
    }

    return "\n<select name=\"$id\" class=\"listbox\"  onChange=\"if(this.options[this.selectedIndex].value) window.location.href='{$_SERVER['PHP_SELF']}?aid='+this.options[this.selectedIndex].value;\" >\n$select</select>\n";
}

pageheader($lang_picmgr_php['pic_mgr']);
?>

<script language="javascript" type="text/javascript">
<!--
    function CheckPictureForm(frm)
    {
        var select_len = frm.to.length;
        var picture = new Object();
        var changed = false;

        for (i=0; i<select_len; i++) {
            picture = new parseSelectValue(frm.to, i);

            if (picture.action != '0') {
                if (picture.picture_nm == '') {
                    alert("<?php echo $lang_picmgr_php['pic_need_name'] ?>");
                    frm.to.options[i].selected = true;
                    return false;
                }
                changed = true;
            }
        }

        if (frm.delete_picture.value.len !=0)
            changed = true;

        if (changed) {
            if (confirm("<?php echo $lang_picmgr_php['confirm_modifs'] ?>")) {
                for (i=0; i<select_len; i++) {
                    picture = new parseSelectValue(frm.to, i);
                    if (picture.action != '0') {
                        frm.to.options[i].selected = true;
                    }
                }
                return true;
            }
            else
                return false;
        }
        else {
            alert("<?php echo $lang_picmgr_php['no_change'] ?>");
            return false;
        }
    }

    function page_init()
    {
        document.picture_menu.delete_picture.value = "";
    }
-->
</script>

<script language="javascript" type="text/javascript">
<!--
    var selectedOptIndex;

    function Picture_Select(selectedIndex)
    {
        selectedOptIndex = selectedIndex;

        for (i=0; i<document.picture_menu.to.length; i++) {
            document.picture_menu.to.options[i].selected = false;
        }
        document.picture_menu.to.options[selectedIndex].selected = true;

        var picture = new Object();
        picture = new parseSelectValue(document.picture_menu.to, selectedIndex);

        picture.deleteFrm();
        picture.changeFrm();
    }

    function Moveup_Option()
    {
        var to = document.picture_menu.to;
        var pos = selectedOptIndex;
        if (pos == 0) {
            return;
        }

        swap_option(to, pos, pos-1);
        selected_option(to, pos-1);
    }

    function Movedown_Option()
    {
        var to = document.picture_menu.to;
        var pos = selectedOptIndex;
        if (pos == to.length-1) {
            return;
        }

        swap_option(to, pos, pos+1);
        selected_option(to, pos+1);
    }


    function Picture_Delete()
    {
        var picture = new Object();
        var to = document.picture_menu.to;
        picture = new parseSelectValue(to, selectedOptIndex);

        var msg = "<?php echo $lang_picmgr_php['confirm_delete1'] ?>";

        if (picture.action == '1') {
            if (confirm(msg)) {
                to.options[selectedOptIndex] = null;
                document.picture_menu.picture_nm.value='';
            }
            else {
                return;
            }
        }
        else {
            msg = msg + "<?php echo $lang_picmgr_php['confirm_delete2'] ?>";

            if (confirm(msg)) {
                var picture = new Object();
                picture =  new parseSelectValue(to, selectedOptIndex);
                to.options[selectedOptIndex] = null;
                document.picture_menu.picture_nm.value='';

                document.picture_menu.delete_picture.value = document.picture_menu.delete_picture.value + picture.picture_no + ',';
            }
            else {
                return;
            }
        }
    }

    function make_option(text, value, target, index)
    {
        target[index] = new Option(text, value);
    }

    function move_list(target, pos)
    {
        var picture = new Object();
        var listlen = target.length;

        for (j=listlen-1; j>pos-1; j--) {
            picture = new parseSelectValue(target, j)
            if (picture.action == '1') {
                value = make_value(picture.picture_no, picture.picture_nm, Number(picture.picture_sort)+1, '1');
            }
            else {
                value = make_value(picture.picture_no, picture.picture_nm, Number(picture.picture_sort)+1, '2');
            }
            text  = target.options[j].text;

            make_option(text, value, target, j+1);
        }
    }

    function _private_update_frm_element(name)
    {
        var frm = document.picture_menu;
        frm.picture_nm.value = name;
    }

    function _private_change()
    {
        _private_update_frm_element(this.picture_nm);
    }

    function _private_delete()
    {
        _private_update_frm_element('');
    }

    function parseSelectValue(select, selectedIndex)
    {
        var temp_nm
        var option_value = select.options[selectedIndex].value;

        this.picture_no = option_value.substring(option_value.indexOf('picture_no=') + 11, option_value.indexOf(','));
        option_value = option_value.substring(option_value.indexOf(',') + 1);

        temp_nm = option_value.substring(option_value.indexOf('picture_nm=') + 11, option_value.indexOf('picture_sort=')-1);
        this.picture_nm = temp_nm.substring(1, temp_nm.length-1);
        option_value = option_value.substring(option_value.indexOf('picture_sort='));

        this.picture_sort = option_value.substring(option_value.indexOf('picture_sort=') + 13 ,option_value.indexOf(','));
        option_value = option_value.substring(option_value.indexOf(',') + 1);

        this.action = option_value.substring(option_value.indexOf('action=') + 7);

        this.changeFrm = _private_change;
        this.deleteFrm = _private_delete;

        return this;
    }

    function selected_option(target, pos)
    {
        target.options[pos].selected = true;
        Picture_Select(pos);
    }

    function swap_option(target, swap_a, swap_b)
    {
        var picture_a = new Object();
        var picture_b = new Object();

        picture_a = new parseSelectValue(target, swap_a);
        picture_b = new parseSelectValue(target, swap_b);

        if (picture_a.action == '0') picture_a.action = '2';
        if (picture_b.action == '0') picture_b.action = '2';

        var temp_option = new Option(target.options[swap_a].text, make_value(picture_a.picture_no, picture_a.picture_nm,picture_b.picture_sort,picture_a.action));
        target[swap_a] = new Option(target.options[swap_b].text, make_value(picture_b.picture_no, picture_b.picture_nm,picture_a.picture_sort,picture_b.action));
        target[swap_b] = temp_option;
    }

    function make_value(picture_no, picture_nm, picture_sort, action)
    {
        return "picture_no=" + picture_no + ",picture_nm='" + picture_nm + "',picture_sort=" + picture_sort + ",action=" + action;
    }
-->
</script>

<form name="picture_menu" method="post" action="delete.php?what=picmgr" onSubmit="return CheckPictureForm(this);">
<?php starttable("100%", $lang_picmgr_php['pic_mgr'], 1); ?>
<tr>
<?php
   $aid = isset($_GET['aid']) ? (int) $_GET['aid'] : 0;

   if (GALLERY_ADMIN_MODE || USER_ADMIN_MODE) {
      $result = cpg_db_query("SELECT aid, pid, filename FROM {$CONFIG['TABLE_PICTURES']} WHERE aid = $aid ORDER BY position ASC, pid");
//BM in case I have to fix an album      $result = cpg_db_query("SELECT aid, pid, filename FROM {$CONFIG['TABLE_PICTURES']} WHERE aid = $aid ORDER BY filename");
   } else cpg_die(ERROR, $lang_errors['perm_denied'], __FILE__, __LINE__);

   $rowset = cpg_db_fetch_rowset($result);
   $i=100;
   $sort_order = '';

   if (count ($rowset) > 0) foreach ($rowset as $picture){
      $sort_order .= $picture['pid'].'@'.($i++).',';
   }
?>
   <td class="tableb" valign="top" align="center">
	   <input type="hidden" name="delete_picture" value="" />
	   <input type="hidden" name="sort_order" value="<?php echo $sort_order ?>" />
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
            <b>{$lang_picmgr_php['select_album']}</b>
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
            <select id="to" name="to[]" size="<?php echo min(max(count ($rowset)+3,15), 40) ?>" multiple onChange="Picture_Select(this.selectedIndex);" class="listbox" style="width: 300px">
<?php
   $i=100;
   $lb = '';
   if (count ($rowset) > 0) foreach ($rowset as $picture){
         $lb .= '               <option value="picture_no=' . $picture['pid'] .',picture_nm=\'' . $picture['filename'] .'\',picture_sort=' .($i++). ',action=0">' . stripslashes($picture['filename']) . "</option>\n";
   }
   echo $lb;
   echo <<<EOT
   </select>
         </td>
      </tr>
      <tr>
         <td>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
               <td><a href="javascript:Moveup_Option();"><img src="images/move_up.gif" width="26" height="21" border="0" alt="" /></a><a href="javascript:Movedown_Option();"><img src="images/move_down.gif" width="26" height="21" border="0" alt="" /></a>
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
   <input type="submit" class="button" value="{$lang_picmgr_php['apply_modifs']}" />
   </td>
</tr>
EOT;
   endtable();
   echo '</form>';
   pagefooter();
   ob_end_flush();
?>
