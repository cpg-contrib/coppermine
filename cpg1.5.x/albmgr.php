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

/**
* Coppermine Photo Gallery albmgr.php
*
* This file is the which allows creation of new Albums and editing the names of albums,
* this is not the file which allows you to set album properties,
* also see documentation for this file's {@relativelink ../_albmgr.php.php Free Standing Code}
*
* @copyright 2002-2006 Gregory DEMAR, Coppermine Dev Team
* @license http://opensource.org/licenses/gpl-license.php GNU General Public License V2
* @package Coppermine
* @version $Id$
*/

/**
* @ignore
*/
define('IN_COPPERMINE', true);

define('ALBMGR_PHP', true);

require('include/init.inc.php');

/** sort the album manager**/
js_include('js/jquery.sort.js');

if (!(GALLERY_ADMIN_MODE || USER_ADMIN_MODE)) {
    cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);
}

/**set the message varialble to javascript file*/
$confirm_modifs = $lang_albmgr_php['confirm_modifs'];
set_js_var('confirm_modifs', $confirm_modifs);
/**Albums delete confirem message*/
$confirm_delete = $lang_albmgr_php['confirm_delete1'] . $lang_albmgr_php['confirm_delete2'];
set_js_var("confirm_delete", $confirm_delete);
/**When user try to delete albums without any selections*/
$delete_not_selected = $lang_albmgr_php['select_first'];
set_js_var('dontDelete', $delete_not_selected);
/**when user change the category*/
$category_change = $lang_albmgr_php['category_change'];
set_js_var('category_change', $category_change);
set_js_var('new_album', $lang_albmgr_php['new_album']);

<<<<<<< .mine
/**
 * alb_get_subcat_data()
 *
 * @param integer $parent
 * @param string $ident
 **/
function alb_get_subcat_data($parent, $ident = '')
{
    global $CONFIG, $CAT_LIST, $USER_DATA;
    
    //select cats where the users can change the albums
    $group_id = $USER_DATA['group_id'];
    $result = cpg_db_query("SELECT cid, name, description FROM {$CONFIG['TABLE_CATEGORIES']} WHERE parent = '$parent' AND cid != 1 ORDER BY pos");

    if (mysql_num_rows($result) > 0) {
        $rowset = cpg_db_fetch_rowset($result);
        foreach ($rowset as $subcat) {
            if (!GALLERY_ADMIN_MODE) {
                $check_group = cpg_db_query("SELECT group_id FROM {$CONFIG['TABLE_CATMAP']} WHERE group_id = '$group_id' AND cid=".$subcat['cid']);
                $check_group_rowset = cpg_db_fetch_rowset($check_group);
                if ($check_group_rowset) {
                    $CAT_LIST[] = array($subcat['cid'], $ident . $subcat['name']);
                }
            } else {
                $CAT_LIST[] = array($subcat['cid'], $ident . $subcat['name']);
            }
            alb_get_subcat_data($subcat['cid'], $ident . '&nbsp;&nbsp;&nbsp;');
        }
    }
}
        

    /**set the message varialble to javascript file*/
    $confirm_modifs =  $lang_albmgr_php['confirm_modifs'];
    set_js_var('confirm_modifs', $confirm_modifs) ;
    /**Albums delete confirem message*/
    $confirm_delete  = $lang_albmgr_php['confirm_delete1'] . $lang_albmgr_php['confirm_delete2'];
    set_js_var("confirm_delete", $confirm_delete);
    /**When user try to delete albums without any selections*/
    $delete_not_selected = $lang_albmgr_php['select_first'];
    set_js_var('dontDelete', $delete_not_selected);
    /**when user change the category*/
    $category_change = $lang_albmgr_php['category_change'];
    set_js_var('category_change', $category_change);
    /**get the category value */
    if ($superCage->get->keyExists('cat')) {
    	$cat = $superCage->get->getInt('cat');
	} else {
	    $cat = 0;
	}
	if ($cat == 1) {
	    $cat = 0;
	}
	/** set the cat value to sort.js*/
	set_js_var('category', $cat);

=======
>>>>>>> .r5581
pageheader($lang_albmgr_php['title']);

<<<<<<< .mine
	
=======
if ($superCage->get->keyExists('cat')) {
    $cat = $superCage->get->getInt('cat');
} else {
    $cat = 0;
}

if ($cat == 1) {
    $cat = 0;
}

>>>>>>> .r5581
if (GALLERY_ADMIN_MODE) {
    $result = cpg_db_query("SELECT aid, title FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = $cat ORDER BY pos ASC");
} elseif (USER_ADMIN_MODE) {

    //Only list the albums owned by the user
    if ($cat == 0) {
        $cat = USER_ID + FIRST_USER_CAT;
    }

    $result = cpg_db_query("SELECT aid, title FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = $cat AND owner = " . USER_ID . " ORDER BY pos ASC");

} else {
    cpg_die(ERROR, $lang_errors['perm_denied'], __FILE__, __LINE__);
}
<<<<<<< .mine
	$rowset = cpg_db_fetch_rowset($result);
	$i = 100;
	$sort_order = '';
=======

$rowset = cpg_db_fetch_rowset($result);

$i = 100;

$sort_order = '';
>>>>>>> .r5581

if (count($rowset) > 0) {
    foreach ($rowset as $album) {
        $sort_order .= $album['aid'] . '@' . ($i++) . ',';
    }
}

echo <<< EOT
<<<<<<< .mine
    <input type="hidden" id="sort_order" name="sort_order" value="" />
    <input type="hidden" name="category" value="<?= $cat; ?>">
     
    <td class="tableb" >
        <table class="head-album" border="0" cellspacing="0" cellpadding="0">
<?php
=======

<form name="album_menu" id="cpgformAlbum" method="post" action="delete.php?what=albmgr">
    <input type="hidden" name="delete_album" value="" />
    <input id="sort_order" type="hidden" name="sort_order_album" value="" />
    <input type="hidden" name="sort_order" value="$sort_order" />

EOT;
        
starttable("100%", cpg_fetch_icon('alb_mgr', 2).$lang_albmgr_php['title'].'&nbsp;'.cpg_display_help('f=albums.htm&amp;as=albmgr&amp;ae=albmgr_end&amp;top=1', '600', '400'), 1);

echo <<< EOT

<tr>
    <td colspan="2" class="tableh2">
        <noscript>
            {$lang_common['javascript_needed']}
        </noscript>
    </td>
</tr>

<tr>
    <td class="tableb" valign="top" align="center">
        <br />
        <table width="300" border="0" cellspacing="0" cellpadding="0">

EOT;

>>>>>>> .r5581
if (GALLERY_ADMIN_MODE||USER_ADMIN_MODE) {

    $CAT_LIST = array();
    
    $CAT_LIST[] = array(FIRST_USER_CAT + USER_ID, $lang_albmgr_php['my_gallery']);
    
    //only add 'no category' when user is admin
    if (GALLERY_ADMIN_MODE) {
        $CAT_LIST[] = array(0, $lang_albmgr_php['no_category']);
    }
    
    get_cat_data();

<<<<<<< .mine
    echo <<<EOT
                    <tr>
                        <td>
                            <strong>{$lang_albmgr_php['select_category']}</strong>
                            &nbsp;
                            <select name="cat" class="listbox">
=======
    echo <<< EOT
>>>>>>> .r5581

            <tr>
                <td>
                    <strong>{$lang_albmgr_php['select_category']}</strong>
                    <select name="cat" class="listbox">

EOT;

    foreach ($CAT_LIST as $category) {
        if ($category[0] == 1) {
            continue;
        }
        echo '<option value="' . $category[0] . '"' . ($cat == $category[0] ? ' selected="selected"': '') . ">" . $category[1] . "</option>\n";
    }
    
    echo <<<EOT
                        </select>
                </td>
             </tr>

EOT;

}

echo <<< EOT

</table>
<<<<<<< .mine
      <div id="sort">
          <table id="album_sort" cellspacing="0" cellpadding="0" border="0">
<?php
=======
    <div id="sort">
        
>>>>>>> .r5581

<<<<<<< .mine
    $album_list = '';
    if (count ($rowset) > 0) 
=======
EOT;

$i = 100;
$j = 1;
echo '<table id="album_sort">';
if (count($rowset) > 0) {
>>>>>>> .r5581
    foreach ($rowset as $album) {
<<<<<<< .mine
        $album_list .='<tr id="sort-'.$album['aid'].'" ><td class="dragHandle"></td><td class="album_text" width="96%"><span class="albumName">'.stripslashes($album['title']).'</span><span class="editAlbum">Edit</span></td></tr>';

=======
    
        $album['title'] = stripslashes($album['title']);
        
        echo <<< EOT
        
            <tr id="sort{$j}" title="{$album['aid']}@{$album['title']}@0">
                <td width="10%" style="padding-left:20px" >
                    $j
                </td>
                <td>
                    <img src="images/bullet.png" alt="" />
                </td>
                <td class="album_text" style="width:400px;">{$album['title']}</td>
            </tr>
EOT;

        $j++;
>>>>>>> .r5581
<<<<<<< .mine
    }       
    echo $album_list;
?>
</table>
=======
    }
}
echo '</table>';
echo <<< EOT

>>>>>>> .r5581
    </div>
    <table class="album-operate" cellspacing="0" cellpadding="0" border="0">
        <tr>
<<<<<<< .mine
      
<?php
=======
            <td>
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
EOT;

>>>>>>> .r5581
// Only show move-buttons when admin or in user's private category.
// Sorting is also prevented in delete.php when user doesn't have the rights.
<<<<<<< .mine
  if(GALLERY_ADMIN_MODE||($cat == USER_ID + FIRST_USER_CAT))
  {
  	
    $up_arrow 		= cpg_fetch_icon('up', 0, $lang_common['move_up']);
    $down_arrow 	= cpg_fetch_icon('down', 0, $lang_common['move_down']);
    $icon_new 		= cpg_fetch_icon('add', 0, $lang_albmgr_php['new_album']);
	$icon_delete 	= cpg_fetch_icon('delete', 0, $lang_albmgr_php['delete_album']);
	
=======
if (GALLERY_ADMIN_MODE || ($cat == USER_ID + FIRST_USER_CAT)) {

    $up_arrow   = cpg_fetch_icon('up', 0, $lang_common['move_up']);
    $down_arrow = cpg_fetch_icon('down', 0, $lang_common['move_down']);
>>>>>>> .r5581
    
    echo <<< EOT
<<<<<<< .mine
	<td style="width: 115px" id="control">
		<a id="up_click" class="click">{$up_arrow}</a>
		<a id="down_click" class="click">{$down_arrow}</a>
     	<a id="deleteEvent" class="click" title="addAlbumButton">$icon_delete</a>
    	<a id="add_new_album"  class="click" title="New" >$icon_new</a>
    	<img id="loadin" class="icon" src="images/loadin.gif" style="margin-left: 10px; display: none;" />
	</td>
=======

                        <td>
                            <a id="up_click" class="click">{$up_arrow}</a>
                            <a id="down_click" class="click">{$down_arrow}</a>
                        </td>
>>>>>>> .r5581
EOT;
<<<<<<< .mine
  }
  else
  {
=======

} else {
>>>>>>> .r5581
    echo '<td></td>';
<<<<<<< .mine
  }

=======
}

$icon_new    = cpg_fetch_icon('add', 0, $lang_albmgr_php['new_album']);
$icon_delete = cpg_fetch_icon('delete', 0, $lang_albmgr_php['delete_album']);
>>>>>>> .r5581

echo <<< EOT
<<<<<<< .mine
	
        <td id="add-box" style="display: none;">
			<input type="text" id="add-name" name="add-name" size="27" maxlength="80" class="textinput" value="" />
			<button id="addEvent" class="button">Publish</button> <span>or</span>
			<a title="Cancel" class="addCancel close">Cancel</a>
		</td>
		<td id="edit-box" style="display: none;">
			<input type="text" id="edit-name" name="edit-name" size="27" maxlength="80" class="textinput" value="" />
			<button id="updateEvent" class="button">Update</button> <span>or</span>
			<a title="Cancel" class="albumCancel close">Cancel</a>
		</td>
    </tr>
</table>
<table class="album-save" style="display: none;" cellspacing="0" cellpadding="0" border="0">
	<tr class='message'>
		<td>
	    <input type="submit" class="button" value="{$lang_common['apply_changes']}" />
		</td>
		<td><span>*</span> Sorting Changes made in this list will not be saved until the form is submitted.</td>

	</tr>
</table>
        </td>
      </tr>
=======
                        <td align="center" style="width: 10px;"><img src="images/spacer.gif" width="1" alt="" /><br /></td>
                        <td align="center" class="click"><a id="deleteEvent" title="addAlbumButton">$icon_delete</a></td>
                        <td align="center" style="width: 10px;"><img src="images/spacer.gif" width="1" alt="" /><br /></td>
                        <td align="center" class="click"><a id="add_new_album" title="New" >$icon_new</a></td>
                        <td align="center" style="width: 10px;"><img src="images/spacer.gif" width="1" alt="" /><br /></td>
                        <td><input type="text" id="album_nm" name="album_nm" size="27" maxlength="80" class="textinput" value="" disabled="disabled" /></td>
                        <td align="center" style="width: 10px;"><img src="images/spacer.gif" width="1" alt="" /><br /></td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</td>
</tr>
<tr>
    <td colspan="2" align="center" class="tablef">
        <input type="submit" class="button" value="{$lang_common['apply_changes']}" />
    </td>
</tr>
>>>>>>> .r5581

EOT;
<<<<<<< .mine
	
=======

endtable();
print '                </form>';
pagefooter();
>>>>>>> .r5581

	endtable();
	pagefooter();
	ob_end_flush();

?>