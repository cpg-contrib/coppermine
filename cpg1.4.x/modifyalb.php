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
define('MODIFYALB_PHP', true);

include("include/init.inc.php");

if (!(GALLERY_ADMIN_MODE || USER_ADMIN_MODE)) {
    cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);
}
// Type 0 => input
// 1 => yes/no
// 2 => Category
// 3 => Textarea
// 4 => Album thumbnail
// 5 => Album visibility

// add footnote
$notice1 = ' *';
$help_can_upload = '&nbsp;'.cpg_display_help('f=index.htm&amp;as=album_prop_visitor_start&amp;ae=album_prop_visitor_end&amp;top=1', '400', '200');
$help_album_keywords = '&nbsp;'.cpg_display_help('f=index.htm&amp;as=album_prop_keyword_start&amp;ae=album_prop_keyword_end&amp;top=1', '400', '200');
$help_album_password = '&nbsp;'.cpg_display_help('f=index.htm&amp;as=album_prop_password_start&amp;ae=album_prop_password_end&amp;top=1', '500', '250');

$captionLabel = $lang_modifyalb_php['alb_desc'];
if ($CONFIG['show_bbcode_help']) {$captionLabel .= '&nbsp;'. cpg_display_help('f=index.html&amp;base=64&amp;h='.urlencode(base64_encode(serialize($lang_bbcode_help_title))).'&amp;t='.urlencode(base64_encode(serialize($lang_bbcode_help))),470,245);}
$data = array($lang_modifyalb_php['general_settings'],
    array($lang_modifyalb_php['alb_title'], 'title', 0),
    array($lang_modifyalb_php['alb_cat'], 'category', 2),
    array($captionLabel, 'description', 3),
    array($lang_modifyalb_php['alb_keyword'].$help_album_keywords, 'keyword', 0),
    array($lang_modifyalb_php['alb_thumb'], 'thumb', 4), $lang_modifyalb_php['alb_perm'],
    array($lang_modifyalb_php['can_view'], 'visibility', 5),
    array($lang_modifyalb_php['alb_password'].$help_album_password, 'alb_password', 6),
    array($lang_modifyalb_php['alb_password_hint'].$help_album_password, 'alb_password_hint', 7),
    array($lang_modifyalb_php['can_upload'].$notice1.$help_can_upload, 'uploads', 1),
    array($lang_modifyalb_php['can_post_comments'].$notice1, 'comments', 1),
    array($lang_modifyalb_php['can_rate'].$notice1, 'votes', 1),
    );

function get_subcat_data($parent, $ident = '')
{
    global $CONFIG, $CAT_LIST;

    $result = cpg_db_query("SELECT cid, name, description FROM {$CONFIG['TABLE_CATEGORIES']} WHERE parent = '$parent' AND cid != 1 ORDER BY pos");
    if (mysql_num_rows($result) > 0) {
        $rowset = cpg_db_fetch_rowset($result);
        foreach ($rowset as $subcat) {
            $CAT_LIST[] = array($subcat['cid'], $ident . $subcat['name']);
            get_subcat_data($subcat['cid'], $ident . '&nbsp;&nbsp;&nbsp;');
        }
    }
}

function form_label($text)
{
    echo <<<EOT
        <tr>
                <td class="tableh2" colspan="2">
                        <b>$text</b>
                </td>
        </tr>

EOT;
}

function form_input($text, $name)
{
    global $ALBUM_DATA;

    $value = $ALBUM_DATA[$name];

    echo <<<EOT
        <tr>
            <td width="40%" class="tableb">
                        $text
        </td>
        <td width="60%" class="tableb" valign="top">
                <input type="text" style="width: 100%" name="$name" value="$value" class="textinput" />
                </td>
        </tr>

EOT;
}

function form_yes_no($text, $name)
{
    global $ALBUM_DATA, $lang_yes, $lang_no;

    if ($name == 'uploads' && USER_ADMIN_MODE) {
        echo "        <input type=\"hidden\" name=\"$name\" value=\"{$ALBUM_DATA['uploads']}\" />";
        return;
    }

    $value = isset($ALBUM_DATA[$name]) ? $ALBUM_DATA[$name] : false;
    $yes_selected = $value == 'YES' ? 'checked="checked"' : '';
    $no_selected = $value == 'NO' ? 'checked="checked"' : '';

    echo <<<EOT
        <tr>
            <td class="tableb">
                        $text
        </td>
        <td class="tableb" valign="top">
                        <input type="radio" id="{$name}1" name="$name" value="YES" $yes_selected /><label for="{$name}1" class="clickable_option">$lang_yes</label>
                        &nbsp;&nbsp;
                        <input type="radio" id="{$name}0" name="$name" value="NO" $no_selected /><label for="{$name}0" class="clickable_option">$lang_no</label>
                </td>
        </tr>

EOT;
}

function form_category($text, $name)
{
    global $ALBUM_DATA, $CAT_LIST, $USER_DATA, $lang_modifyalb_php;

    if (!GALLERY_ADMIN_MODE || $ALBUM_DATA['category'] > FIRST_USER_CAT) {
        echo <<<EOT
        <tr>
            <td class="tableb">
                        $text
        </td>
        <td class="tableb" valign="top">
                        <i>{$lang_modifyalb_php['user_gal']}</i>
                        <input type="hidden" name="$name" value="{$ALBUM_DATA['category']}" />
                </td>

EOT;
        return;
    }

    $CAT_LIST = array();
    $CAT_LIST[] = array(0, $lang_modifyalb_php['no_cat']);
    get_subcat_data(0, '');

    echo <<<EOT
        <tr>
            <td class="tableb">
                        $text
        </td>
        <td class="tableb" valign="top">
                        <select name="$name" class="listbox">
EOT;
    foreach($CAT_LIST as $category) {
        echo '                                <option value="' . $category[0] . '"' . ($ALBUM_DATA['category'] == $category[0] ? ' selected': '') . ">" . $category[1] . "</option>\n";
    }
    echo <<<EOT
                        </select>
                </td>
        </tr>

EOT;
}

function form_textarea($text, $name)
{
    global $ALBUM_DATA;

    $value = $ALBUM_DATA[$name];

    echo <<<EOT
        <tr>
                <td class="tableb" valign="top">
                        $text
                </td>
                <td class="tableb" valign="top">
                        <textarea name="$name" rows="5" cols="40" wrap="virtual" class="textinput" style="width: 100%;">{$ALBUM_DATA['description']}</textarea>
                </td>
        </tr>
EOT;
}

function form_alb_thumb($text, $name)
{
    global $CONFIG, $ALBUM_DATA, $album, $lang_modifyalb_php,$USER_DATA;

    $cpg_nopic_data = cpg_get_system_thumb('nopic.jpg',$USER_DATA['user_id']);

    $results = cpg_db_query("SELECT pid, filepath, filename, url_prefix FROM {$CONFIG['TABLE_PICTURES']} WHERE aid='$album' AND approved='YES' ORDER BY filename");
    if (mysql_num_rows($results) == 0) {
        echo <<<EOT
        <tr>
                <td class="tableb" valign="top">
                        $text
                </td>
                <td class="tableb" valign="top">
                        <i>{$lang_modifyalb_php['alb_empty']}</i>
                        <input type="hidden" name="$name" value="0" />
                </td>
        </tr>

EOT;
        return;
    }

    $initial_thumb_url = $cpg_nopic_data['thumb']; //'images/nopic.jpg';

    echo <<<EOT
<script language="JavaScript" type="text/JavaScript">
<!--
var Pic = new Array()

Pic[0] = '$initial_thumb_url'

EOT;

    $img_list = array(0 => $lang_modifyalb_php['last_uploaded']);
    while ($picture = mysql_fetch_array($results)) {
        $thumb_url = get_pic_url($picture, 'thumb');
        echo "Pic[{$picture['pid']}] = '" . $thumb_url . "'\n";
        if ($picture['pid'] == $ALBUM_DATA[$name]) $initial_thumb_url = $thumb_url;
        $img_list[$picture['pid']] = htmlspecialchars($picture['filename']);
    } // while
    echo <<<EOT

function ChangeThumb(index)
{
        document.images.Thumb.src = Pic[index]
}

var checkobj

function agreesubmit(el){
    checkobj=el
    if (document.all||document.getElementById){
        for (i=0;i<checkobj.form.length;i++){  //hunt down submit button
            var tempobj=checkobj.form.elements[i]
            if(tempobj.type.toLowerCase()=="submit")
                tempobj.disabled=!checkobj.checked
        }
    }
}

function defaultagree(el){
    if (!document.all&&!document.getElementById){
        if (window.checkobj&&checkobj.checked)
            return true
        else{
            alert("{$lang_modifyalb_php['reset_views_confirm']}")
            return false
        }
    }
}

-->
</script>

EOT;
    $thumb_cell_height = $CONFIG['thumb_width'] + 17;
    echo <<<EOT
        <tr>
                <td class="tableb" valign="top">
                        $text
                </td>
                <td class="tableb" align="center">
                        <table cellspacing="0" cellpadding="5" border="0">
                                <tr>
                                        <td width="$thumb_cell_height" height="$thumb_cell_height" align="center"><img src="$initial_thumb_url" name='Thumb' class='image' /><br /></td>
                                </tr>
                        </table>
                        <select name="$name" class="listbox" onChange="if(this.options[this.selectedIndex].value) ChangeThumb(this.options[this.selectedIndex].value);" onKeyUp="if(this.options[this.selectedIndex].value) ChangeThumb(this.options[this.selectedIndex].value);">

EOT;
    foreach($img_list as $pid => $pic_name) {
        echo '                                <option value="' . $pid . '"' . ($pid == $ALBUM_DATA[$name] ? ' selected':'') . '>' . $pic_name . "</option>\n";
    }
    echo <<<EOT
                        </select>
                </td>
        </tr>

EOT;
}

function form_password($text, $name)
{
  global $ALBUM_DATA;
  $value = $ALBUM_DATA[$name];

  echo <<<EOT
        <tr>
          <td width="40%" class="tableb">
              $text
          </td>
          <td width="60%" class="tableb" valign="top">
            <input type="password" name="$name" value="$value" class="textinput" maxlength="32" size="34" />
          </td>
        </tr>
EOT;
}

function form_password_hint($text, $name)
{
  global $ALBUM_DATA;
  $value = $ALBUM_DATA[$name];

  echo <<<EOT
        <tr>
          <td width="40%" class="tableb">
              $text
          </td>
          <td width="60%" class="tableb" valign="top">
            <input type="text" name="$name" value="$value" class="textinput" maxlength="32" size="34" />
          </td>
        </tr>
EOT;
}

function form_visibility($text, $name)
{
    global $CONFIG, $USER_DATA, $ALBUM_DATA, $lang_modifyalb_php, $cpg_udb;

    if (!$CONFIG['allow_private_albums']) {
        echo '        <input type="hidden" name="' . $name . '" value="0" />' . "\n";
        return;
    }

    if (GALLERY_ADMIN_MODE) {
        $options = array(0 => $lang_modifyalb_php['public_alb'], FIRST_USER_CAT + USER_ID => $lang_modifyalb_php['me_only']);
        if ($ALBUM_DATA['category'] > FIRST_USER_CAT) {
            //if (defined('UDB_INTEGRATION')) {
                $owner_name = $cpg_udb->get_user_name($ALBUM_DATA['category'] - FIRST_USER_CAT);
            /*} else {
                $result = cpg_db_query("SELECT user_name FROM {$CONFIG['TABLE_USERS']} WHERE user_id='" . ($ALBUM_DATA['category'] - FIRST_USER_CAT) . "'");
                if (mysql_num_rows($result)) {
                    $user = mysql_fetch_array($result);
                    $owner_name = $user['user_name'];
                }*/
            //}
            $options[$ALBUM_DATA['category']] = sprintf($lang_modifyalb_php['owner_only'], $owner_name);
        }
        $result = cpg_db_query("SELECT group_id, group_name FROM {$CONFIG['TABLE_USERGROUPS']} WHERE 1");
        while ($group = mysql_fetch_array($result)) {
            $options[$group['group_id']] = sprintf($lang_modifyalb_php['groupp_only'], $group['group_name']);
        } // while
    } else {
        $options = array(0 => $lang_modifyalb_php['public_alb'],
            FIRST_USER_CAT + USER_ID => $lang_modifyalb_php['me_only'],
            );
        $result = cpg_db_query("SELECT group_id, group_name FROM {$CONFIG['TABLE_USERGROUPS']} WHERE group_id IN " . USER_GROUP_SET);
        while ($group = mysql_fetch_array($result)) {
            $options[$group['group_id']] = sprintf($lang_modifyalb_php['groupp_only'], $group['group_name']);
        } // while
    }
    echo <<<EOT
        <tr>
                <td class="tableb">
                        $text
                </td>
                <td class="tableb" valign="top">
                        <select name="$name" class="listbox">

EOT;
    foreach ($options as $value => $caption) {
        echo '                                <option value ="' . $value . '"' . ($ALBUM_DATA['visibility'] == $value ? ' selected': '') . '>' . $caption . "</option>\n";
    }
    echo <<<EOT
                        </select>
                </td>
        </tr>

EOT;
}

function create_form(&$data)
{
    foreach($data as $element) {
        if ((is_array($element))) {
            switch ($element[2]) {
                case 0 :
                    form_input($element[0], $element[1]);
                    break;
                case 1 :
                    form_yes_no($element[0], $element[1]);
                    break;
                case 2 :
                    form_category($element[0], $element[1]);
                    break;
                case 3 :
                    form_textarea($element[0], $element[1]);
                    break;
                case 4 :
                    form_alb_thumb($element[0], $element[1]);
                    break;
                case 5 :
                    form_visibility($element[0], $element[1]);
                    break;
                case 6:
                    form_password($element[0],$element[1]);
                    break;
                case 7:
                    form_password_hint($element[0],$element[1]);
                    break;
                default:
                    cpg_die(CRITICAL_ERROR, 'Invalid action for form creation', __FILE__, __LINE__);
            } // switch
        } else {
            form_label($element);
        }
    }
}

function alb_list_box()
{
    global $CONFIG, $album, $cpg_udb; //, $PHP_SELF;

    if (GALLERY_ADMIN_MODE) {
        $result = cpg_db_query("SELECT aid, title FROM {$CONFIG['TABLE_ALBUMS']} WHERE category < '" . FIRST_USER_CAT . "' ORDER BY title");
        $rowset = cpg_db_fetch_rowset($result);
        mysql_free_result($result);

        //if (defined('UDB_INTEGRATION')) {
            $sql = $cpg_udb->get_admin_album_list();
        /*} else {
            $sql = "SELECT aid, CONCAT('(', user_name, ') ', title) AS title " . "FROM {$CONFIG['TABLE_ALBUMS']} AS a " . "INNER JOIN {$CONFIG['TABLE_USERS']} AS u ON category = (" . FIRST_USER_CAT . " + user_id) " . "ORDER BY title";
        }*/
        $result = cpg_db_query($sql);
        while ($row = mysql_fetch_array($result)) $rowset[] = $row;
        mysql_free_result($result);
    } else {
        $result = cpg_db_query("SELECT aid, title FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = '" . (FIRST_USER_CAT + USER_ID) . "' ORDER BY title");
        $rowset = cpg_db_fetch_rowset($result);
        mysql_free_result($result);
    }

    if (count($rowset)) {
        $lb = "<select name=\"album_listbox\" class=\"listbox\" onChange=\"if(this.options[this.selectedIndex].value) window.location.href='{$_SERVER['PHP_SELF']}?album='+this.options[this.selectedIndex].value;\">\n";
        foreach ($rowset as $row) {
            $selected = ($row['aid'] == $album) ? "SELECTED" : "";
            $lb .= "        <option value=\"" . $row['aid'] . "\" $selected>" . $row['title'] . "</option>\n";
        }
        $lb .= "</select>\n";
        return $lb;
    }
}

if (!isset($_GET['album'])) {
    if (GALLERY_ADMIN_MODE) {
        $results = cpg_db_query("SELECT * FROM {$CONFIG['TABLE_ALBUMS']} WHERE 1 LIMIT 1");
    } else {
        $results = cpg_db_query("SELECT * FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = " . (FIRST_USER_CAT + USER_ID) . " LIMIT 1");
    }
    if (mysql_num_rows($results) == 0) cpg_die(ERROR, $lang_modifyalb_php['err_no_alb_to_modify'], __FILE__, __LINE__);
    $ALBUM_DATA = mysql_fetch_array($results);
    $album = $ALBUM_DATA['aid'];
} else {
    $album = (int)$_GET['album'];
    $results = cpg_db_query("SELECT * FROM {$CONFIG['TABLE_ALBUMS']} WHERE aid='$album'");
    if (!mysql_num_rows($results)) cpg_die(CRITICAL_ERROR, $lang_errors['non_exist_ap'], __FILE__, __LINE__);
    $ALBUM_DATA = mysql_fetch_array($results);
}

$cat = $ALBUM_DATA['category'];
$actual_cat = $cat;

if (!GALLERY_ADMIN_MODE && $ALBUM_DATA['category'] != FIRST_USER_CAT + USER_ID) {
    cpg_die(ERROR, $lang_errors['perm_denied'], __FILE__, __LINE__);
}


//////////// main code start ///////////////////

pageheader(sprintf($lang_modifyalb_php['upd_alb_n'], $ALBUM_DATA['title']));

$album_lb = alb_list_box();
$help = '&nbsp;'.cpg_display_help('f=index.htm&amp;as=album_prop&amp;ae=album_prop_end&amp;top=1', '600', '400');
echo <<< EOT
    <form method="post" name="modifyalbum" action="db_input.php">
    <input type="hidden" name="event" value="album_update" />
    <input type="hidden" name="aid" value="$album" />
EOT;
starttable("100%",$lang_modifyalb_php['update'].$help, 2);
echo <<<EOT
        <tr>
            <td class="tableh2" align="center">
                <a href="editpics.php?album=$album" class="admin_menu">{$lang_modifyalb_php['edit_files']}</a>
                &nbsp;&nbsp;-&nbsp;&nbsp;
                <a href="index.php?cat={$ALBUM_DATA['category']}" class="admin_menu">{$lang_modifyalb_php['parent_category']}</a>
                &nbsp;&nbsp;-&nbsp;&nbsp;
                <a href="thumbnails.php?album=$album" class="admin_menu">{$lang_modifyalb_php['thumbnail_view']}</a>
            </td>
            <td class="tableh2" align="right">
            $album_lb
            </td>
        </tr>
EOT;

create_form($data);

echo <<<EOT
<tr>
        <td colspan="2" align="left" class="tablef">
EOT;
if (GALLERY_ADMIN_MODE) {
printf($lang_modifyalb_php['notice1'],'<a href="groupmgr.php">','</a>');
}
else {
printf($lang_modifyalb_php['notice1'],'','');
}
echo <<<EOT
        </td>
</tr>
<tr>
        <td colspan="2" align="center" class="tablef">
        <input type="submit" class="button" value="{$lang_modifyalb_php['update']}" />
        </td>
</tr>
EOT;

endtable();
echo '</form>';

if (GALLERY_ADMIN_MODE) {
    // get the album stats
    $result = cpg_db_query("SELECT SUM(hits) FROM {$CONFIG['TABLE_PICTURES']} WHERE aid='$album'");
    $nbEnr = mysql_fetch_array($result);
    $hits = $nbEnr[0];
    if (!$hits) { $hits = 0; }
    mysql_free_result($result);
    $result = cpg_db_query("SELECT SUM(votes) FROM {$CONFIG['TABLE_PICTURES']} WHERE aid='$album' AND votes > 0");
    $nbEnr = mysql_fetch_array($result);
    $votes = $nbEnr[0];
    if (!$votes) { $votes = 0; }
    mysql_free_result($result);
    $result = cpg_db_query("SELECT COUNT(*) FROM {$CONFIG['TABLE_PICTURES']} WHERE aid='$album'");
    $nbEnr = mysql_fetch_array($result);
    $files = $nbEnr[0];
    if (!$files) { $files = 0; }
    mysql_free_result($result);

    echo <<<EOT
    <br />
    <form action="db_input.php" method="post" name="reset_views_form" onSubmit="return defaultagree(this)">
    <input type="hidden" name="event" value="album_reset" />
    <input type="hidden" name="aid" value="$album" />
EOT;
// set up the translation strings
$translation_reset_views = sprintf($lang_modifyalb_php['reset_views'], '&quot;'.$ALBUM_DATA['title'].'&quot;');
$translation_reset_rating = sprintf($lang_modifyalb_php['reset_rating'], '&quot;'.$ALBUM_DATA['title'].'&quot;');
$translation_delete_comments = sprintf($lang_modifyalb_php['delete_comments'], '&quot;'.$ALBUM_DATA['title'].'&quot;');
$translation_delete_files = sprintf($lang_modifyalb_php['delete_files'], '<span style="color:red;font-weight:bold">', '</span>', '&quot;'.$ALBUM_DATA['title'].'&quot;');
    starttable('100%',$lang_modifyalb_php['reset_album'], 2);
    echo <<<EOT
    <tr>
            <td align="left" class="tableb">
                <b>$hits</b> {$lang_modifyalb_php['views']}
            </td>
            <td align="left" class="tableb">
                <input type="Checkbox" name="reset_views" id="reset_views" value="1" class="checkbox" /><label for="reset_views" class="clickable_option">$translation_reset_views</label>
            </td>
    </tr>
    <tr>
            <td align="left" class="tableb">
                <b>$votes</b> {$lang_modifyalb_php['votes']}
            </td>
            <td align="left" class="tableb">
                <input type="Checkbox" name="reset_rating" id="reset_rating" value="1" class="checkbox" /><label for="reset_rating" class="clickable_option">$translation_reset_rating</label>
            </td>
    </tr>
    <!--not implemented yet
    <tr>
            <td align="left" class="tableb">
                <b>$comments</b> {$lang_modifyalb_php['comments']}
            </td>
            <td align="left" class="tableb">
                <input type="Checkbox" name="delete_comments" id="delete_comments" value="1" class="checkbox" /><label for="delete_comments" class="clickable_option">$translation_delete_comments</label>
            </td>
    </tr>
    -->
    <tr>
            <td align="left" class="tableb">
                <b>$files</b> {$lang_modifyalb_php['files']}
            </td>
            <td align="left" class="tableb">
                <input type="Checkbox" name="delete_files" id="delete_files" value="1" class="checkbox" /><label for="delete_files" class="clickable_option">$translation_delete_files</label>
            </td>
    </tr>
    <tr>
            <td class="tablef" colspan="2" align="center" valign="bottom">
                <input type="submit" class="button" value="{$lang_modifyalb_php['submit_reset']}" disabled="disabled" />
                <input name="agreecheck" type="checkbox" onClick="agreesubmit(this)" />{$lang_modifyalb_php['reset_views_confirm']}
            </td>
    </tr>
EOT;
    endtable();
    print "</form>\n";
}

pagefooter();
ob_end_flush();
?>
