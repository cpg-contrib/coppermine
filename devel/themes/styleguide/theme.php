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

// ------------------------------------------------------------------------- //
// This theme has had all redundant CORE items removed                       //
// ------------------------------------------------------------------------- //

// HTML template for sys_menu
$template_sys_menu = <<<EOT
<span class="topmenu">
    {BUTTONS}
</span>
EOT;

// HTML template for template sys_menu spacer
$template_sys_menu_spacer ="|";


// HTML template for the album list
$template_album_list = <<<EOT

<!-- BEGIN stat_row -->
        <tr>
                <td colspan="{COLUMNS}" class="tableh1" align="center"><span class="statlink"><b>{STATISTICS}</b></span></td>
        </tr>
<!-- END stat_row -->
<!-- BEGIN header -->
        <tr>
<!-- END header -->

<!-- BEGIN album_cell -->
<td width="{COL_WIDTH}%" valign="top">
<table width="100%" cellspacing="0" cellpadding="0">
<tr>
<td colspan="3" height="1" valign="top" class="tableh2">
<a href="{ALB_LINK_TGT}" class="alblink"><b>{ALBUM_TITLE}</b></a>
</td>
</tr>
<tr>
<td colspan="3">
<img src="images/spacer.gif" width="1" height="1" border="0" alt="" /><br />
</td>
</tr>
<tr>
<td align="center" valign="middle" class="thumbnails">
<!-- <img src="images/spacer.gif" width="{THUMB_CELL_WIDTH}" height="1" class="image" style="margin-top: 0px;margin-bottom: 0px; border: none;" alt="" /><br /> -->
<a href="{ALB_LINK_TGT}" class="albums">{ALB_LINK_PIC}<br /></a>
</td>
<td>
<img src="images/spacer.gif" width="1" height="1" border="0" alt="" />
</td>
<td width="100%" valign="top" class="album_stat">

<div style="width:100%;height:150px;position:relative;overflow:auto; padding-right:10px">
{ADMIN_MENU}
<p class="album_stat">{ALB_DESC}</p>
<p class="album_stat">{ALB_INFOS}</p>
</div>

</td>
</tr>
</table>
</td>
<!-- END album_cell -->

<!-- BEGIN empty_cell -->
        <td width="{COL_WIDTH}%" valign="top">
        <table width="100%" cellspacing="0" cellpadding="0">
        <tr>
                <td height="1" valign="top" class="tableh2">
                        <b>&nbsp;</b>
                </td>
        </tr>
        <tr>
                <td>
                        <img src="images/spacer.gif" width="1" height="1" border="0" alt="" /><br />
                </td>
        </tr>
        <tr>
                <td width="100%" valign="top" class="tableb_compact">
                    <div class="thumbnails" style="background-color:transparent"><img src="images/spacer.gif" width="1" height="{SPACER}" border="0" class="image" style="border:0;margin-top:1;margin-bottom:0" alt="" /></div>
                </td>
        </tr>
        </table>
        </td>
<!-- END empty_cell -->
<!-- BEGIN row_separator -->
        </tr>
        <tr>
<!-- END row_separator -->
<!-- BEGIN footer -->
        </tr>
<!-- END footer -->
<!-- BEGIN tabs -->
        <tr>
                <td colspan="{COLUMNS}" style="padding: 0px;">
                        <table width="100%" cellspacing="0" cellpadding="0">
                                <tr>
                                       {TABS}
                                </tr>
                        </table>
                </td>
        </tr>
<!-- END tabs -->
<!-- BEGIN spacer -->
        <img src="images/spacer.gif" width="1" height="7" border="" alt="" /><br />
<!-- END spacer -->

EOT;

function pageheader($section, $meta = '')
{
    global $CONFIG, $THEME_DIR;
    global $template_header, $lang_charset, $lang_text_dir;

    // this is the place where the custom header file gets included
    $custom_header = cpg_get_custom_include($CONFIG['custom_header_path']);

    $charset = ($CONFIG['charset'] == 'language file') ? $lang_charset : $CONFIG['charset'];

    header('P3P: CP="CAO DSP COR CURa ADMa DEVa OUR IND PHY ONL UNI COM NAV INT DEM PRE"');
    header("Content-Type: text/html; charset=$charset");
    user_save_profile();

    $template_vars = array('{LANG_DIR}' => $lang_text_dir,
        '{TITLE}' => $CONFIG['gallery_name'] . ' - ' . $section,
        '{CHARSET}' => $charset,
        '{META}' => $meta,
        '{GAL_NAME}' => $CONFIG['gallery_name'],
        '{GAL_DESCRIPTION}' => $CONFIG['gallery_description'],
        '{SYS_MENU}' => theme_main_menu('sys_menu'),
        '{SUB_MENU}' => theme_main_menu('sub_menu'),
        '{ADMIN_MENU}' => theme_admin_mode_menu(),
        '{CUSTOM_STYLESHEET}' => customStylesheet(),
        '{STYLEGUIDE_HEADER}' => styleGuideHeader(),
        '{CUSTOM_HEADER}' => $custom_header,
        );

    echo template_eval($template_header, $template_vars);
}


function styleGuideHeader()
{
$backToDefaultTheme = customGetUrlVars('theme').'xxx';
$highlightUrl = customGetUrlVars2('highlight').'highlight';
//$return='|'.customGetUrlVars2('highlight').'|';
$return=<<<EOT
<table border="0" cellspacing="0" cellpadding="0">
<tr><td class="stgsm">
<ul style="margin-top:0px;margin-bottom:0px;">
<li>visible for <span class="bgg">everyone</span>/<span class="bgy">admin and logged-in user</span>/<span class="bgr">admin only</span></li>
<li>X = applies, C = depending on config, A = when in admin mode</li>
<li><a href="javascript:;" onClick="MM_openBrWindow('themes/styleguide/readme.htm','styleguide','scrollbars=yes,toolbar=no,status=no,resizable=yes,width=600,height=300')">view styleguide readme</a></li>
<li><a href="$backToDefaultTheme">back to default theme</a></li>
</ul>
</td>
<td class="bgy" valign="bottom"><img src="themes/styleguide/images/albmgr_php.gif" width="11" height="50" border="0" alt="" /></td>
<td class="bgr" valign="bottom"><img src="themes/styleguide/images/banning_php.gif" width="11" height="55" border="0" alt="" /></td>
<td class="bgr" valign="bottom"><img src="themes/styleguide/images/catmgr_php.gif" width="12" height="83" border="0" alt="" /></td>
<td class="bgr" valign="bottom"><img src="themes/styleguide/images/config_php.gif" width="11" height="46" border="0" alt="" /></td>
<td class="bgy" valign="bottom"><img src="themes/styleguide/images/delete_php.gif" width="11" height="47" border="0" alt="" /></td>
<td class="bgg" valign="bottom"><img src="themes/styleguide/images/displayimage_php.gif" width="12" height="76" border="0" alt="" /></td>
<td class="bgg" valign="bottom"><img src="themes/styleguide/images/ecard_php.gif" width="11" height="44" border="0" alt="" /></td>
<td class="bgy" valign="bottom"><img src="themes/styleguide/images/editpics_php.gif" width="11" height="53" border="0" alt="" /></td>
<td class="bgg" valign="bottom"><img src="themes/styleguide/images/forgot_passwd_php.gif" width="11" height="83" border="0" alt="" /></td>
<td class="bgr" valign="bottom"><img src="themes/styleguide/images/groupmgr_php.gif" width="12" height="62" border="0" alt="" /></td>
<td class="bgg" valign="bottom"><img src="themes/styleguide/images/index_php.gif" width="11" height="41" border="0" alt="" /></td>
<td class="bgg" valign="bottom"><img src="themes/styleguide/images/login_php.gif" width="11" height="41" border="0" alt="" /></td>
<td class="bgy" valign="bottom"><img src="themes/styleguide/images/logout_php.gif" width="12" height="47" border="0" alt="" /></td>
<td class="bgy" valign="bottom"><img src="themes/styleguide/images/modifyalb_php.gif" width="11" height="62" border="0" alt="" /></td>
<td class="bgy" valign="bottom"><img src="themes/styleguide/images/profile_php.gif" width="11" height="47" border="0" alt="" /></td>
<td class="bgr" valign="bottom"><img src="themes/styleguide/images/reviewcom_php.gif" width="12" height="66" border="0" alt="" /></td>
<td class="bgg" valign="bottom"><img src="themes/styleguide/images/search_php.gif" width="11" height="48" border="0" alt="" /></td>
<td class="bgr" valign="bottom"><img src="themes/styleguide/images/searchnew_php.gif" width="11" height="66" border="0" alt="" /></td>
<td class="bgg" valign="bottom"><img src="themes/styleguide/images/thumbnails_php.gif" width="11" height="68" border="0" alt="" /></td>
<td class="bgg" valign="bottom"><img src="themes/styleguide/images/upload_php.gif" width="12" height="49" border="0" alt="" /></td>
<td class="bgr" valign="bottom"><img src="themes/styleguide/images/usermgr_php.gif" width="11" height="56" border="0" alt="" /></td>
<td class="bgr" valign="bottom"><img src="themes/styleguide/images/util_php.gif" width="11" height="34" border="0" alt="" />
<td class="bgr" valign="bottom"><img src="themes/styleguide/images/db_ecard_php.gif" width="11" height="56" border="0" alt="" />
</tr>
<tr><td class="bgsm"><a href="$highlightUrl=admin_menu" onmouseover="return makeTrue(domTT_activate(this, event, 'caption', 'admin_menu', 'content', 'Controls the admin menu buttons.<br />The row of admin fuction buttons across the top of the gallery in admin mode. If you allow users to login, they will have an admin mode as well (user admin mode), so you better configure this to look nicely!',   'trail', true));">admin_menu</a></td><td class="bgsm">A</td><td class="bgsm">A</td><td class="bgsm">A</td><td class="bgsm">A</td><td class="bgsm">A</td><td class="bgsm">A</td><td class="bgsm">A</td><td class="bgsm">A</td><td class="bgsm">A</td><td class="bgsm">A</td><td class="bgsm">A</td><td class="bgsm">&nbsp;</td><td class="bgsm">A</td><td class="bgsm">A</td><td class="bgsm">A</td><td class="bgsm">A</td><td class="bgsm">A</td><td class="bgsm">A</td><td class="bgsm">A</td><td class="bgsm">A</td><td class="bgsm">A</td><td class="bgsm">A</td><td class="bgsm">A</td></tr>
<tr><td class="bgsm"><a href="$highlightUrl=admin_menu_thumb" onmouseover="return makeTrue(domTT_activate(this, event, 'caption', 'admin_menu_thumb', 'content', 'Only available on delete.php, visible for a short instance. This class will vanish in future versions, as it is not needed any longer.',   'trail', true));">admin_menu_thumb</a></td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td></tr>
<tr><td class="bgsm"><a href="$highlightUrl=alblink" onmouseover="return makeTrue(domTT_activate(this, event, 'caption', 'alblink', 'content', 'On displayimage.php, this controls the link back to an album in the information area.',   'trail', true));">alblink</a></td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td></tr>
<tr><td class="bgsm"><a href="$highlightUrl=album_stat" onmouseover="return makeTrue(domTT_activate(this, event, 'caption', 'album_stat', 'content', 'Controls the album stats text.<br />e.g. 57 pictures, last one added on Jan 03, 2004',   'trail', true));">album_stat</a></td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">C</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td></tr>
<tr><td class="bgsm"><a href="$highlightUrl=button" onmouseover="return makeTrue(domTT_activate(this, event, 'caption', 'button', 'content', 'Controls the look of the buttons used to submit forms.',   'trail', true));">button</a></td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td></tr>
<tr><td class="bgsm"><a href="$highlightUrl=catlink" onmouseover="return makeTrue(domTT_activate(this, event, 'caption', 'catlink', 'content', '',   'trail', true));">catlink</a></td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td></tr>
<tr><td class="bgsm"><a href="$highlightUrl=checkbox" onmouseover="return makeTrue(domTT_activate(this, event, 'caption', 'checkbox', 'content', 'Controls the look of checkboxes. In cpg1.3.0 it is only used on forgot_passwd.php.<br />Make sure to set background color properly when experiencing &quot;strange&quot; borders around the checkbox.',   'trail', true));">checkbox</a></td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td></tr>
<tr><td class="bgsm"><a href="$highlightUrl=clickable_option" onmouseover="return makeTrue(domTT_activate(this, event, 'caption', 'clickable_option', 'content', 'Class for label text of checkboxes and radio buttons - user does not have to click on radio buttons, but can click to corresponding text as well.',   'trail', true));">clickable_option</a></td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">X</td></tr>
<tr><td class="bgsm"><a href="$highlightUrl=comment_date" onmouseover="return makeTrue(domTT_activate(this, event, 'caption', 'comment_date', 'content', 'Controls the text on displayimage.php that tells the date a comment was made.',   'trail', true));">comment_date</a></td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td></tr>
<tr><td class="bgsm"><a href="$highlightUrl=debug_text" onmouseover="return makeTrue(domTT_activate(this, event, 'caption', 'debug_text', 'content', 'Visible on every page, but only debug_mode is switched on in coppermine config.',   'trail', true));">debug_text</a></td><td class="bgsm">C</td><td class="bgsm">C</td><td class="bgsm">C</td><td class="bgsm">C</td><td class="bgsm">C</td><td class="bgsm">C</td><td class="bgsm">C</td><td class="bgsm">C</td><td class="bgsm">C</td><td class="bgsm">C</td><td class="bgsm">C</td><td class="bgsm">C</td><td class="bgsm">C</td><td class="bgsm">C</td><td class="bgsm">C</td><td class="bgsm">C</td><td class="bgsm">C</td><td class="bgsm">C</td><td class="bgsm">C</td><td class="bgsm">C</td><td class="bgsm">C</td><td class="bgsm">C</td><td class="bgsm">C</td></tr>
<tr><td class="bgsm"><a href="$highlightUrl=footer" onmouseover="return makeTrue(domTT_activate(this, event, 'caption', 'footer', 'content', 'Controls the &quot;Powered by Coppermine&quot; text at the bottom of the gallery. ',   'trail', true));">footer</a></td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td></tr>
<tr><td class="bgsm"><a href="$highlightUrl=image" onmouseover="return makeTrue(domTT_activate(this, event, 'caption', 'image', 'content', 'Controls settings like border size and color for images on displayimage.php.',   'trail', true));">image</a></td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td></tr>
<tr><td class="bgsm"><a href="$highlightUrl=image" onmouseover="return makeTrue(domTT_activate(this, event, 'caption', 'imageborder', 'content', 'Controls border around intermediate picture on displayimage.php',   'trail', true));">imageborder</a></td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td></tr>
<tr><td class="bgsm"><a href="$highlightUrl=listbox" onmouseover="return makeTrue(domTT_activate(this, event, 'caption', 'listbox', 'content', 'Controls the look of dropdown fields',   'trail', true));">listbox</a></td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td></tr>
<tr><td class="bgsm"><a href="$highlightUrl=listbox_lang" onmouseover="return makeTrue(domTT_activate(this, event, 'caption', 'listbox_lang', 'content', 'The language and theme selection dropdown boxes (only in cpg1.3.0 or better), if switched on in config and existing in template.html. Will appear on all pages.',   'trail', true));">listbox_lang</a></td><td class="bgsm">C</td><td class="bgsm">C</td><td class="bgsm">C</td><td class="bgsm">C</td><td class="bgsm">C</td><td class="bgsm">C</td><td class="bgsm">C</td><td class="bgsm">C</td><td class="bgsm">C</td><td class="bgsm">C</td><td class="bgsm">C</td><td class="bgsm">C</td><td class="bgsm">C</td><td class="bgsm">C</td><td class="bgsm">C</td><td class="bgsm">C</td><td class="bgsm">C</td><td class="bgsm">C</td><td class="bgsm">C</td><td class="bgsm">C</td><td class="bgsm">C</td><td class="bgsm">C</td><td class="bgsm">&nbsp;</td></tr>
<tr><td class="bgsm"><a href="$highlightUrl=maintable" onmouseover="return makeTrue(domTT_activate(this, event, 'caption', 'maintable', 'content', 'Shows on every coppermine page: maintable controls (as the name suggests) the main table that has the gallery content in it.',   'trail', true));">maintable</a></td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td></tr>
<tr><td class="bgsm"><a href="$highlightUrl=navmenu" onmouseover="return makeTrue(domTT_activate(this, event, 'caption', 'navmenu', 'content', 'On thumbnails.php, this controls the cells at the bottom that contain page numbers. On displayimage.php, this controls the header where the e-card, information, previous, next, etc... images are.<br />&quot;navmenu img&quot; controls spacing for images which use the navmenu style.',   'trail', true));">navmenu</a></td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td></tr>
<tr><td class="bgsm"><a href="$highlightUrl=sortorder_cell" onmouseover="return makeTrue(domTT_activate(this, event, 'caption', 'sortorder_cell', 'content', 'Controls the appearance of the cells that have options for sorting the images on thumbnails.php.',   'trail', true));">sortorder_cell</a></td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td></tr>
<tr><td class="bgsm"><a href="$highlightUrl=sortorder_options" onmouseover="return makeTrue(domTT_activate(this, event, 'caption', 'sortorder_options', 'content', 'Controls the appearance of the cells that have options for sorting the images on thumbnails.php. This controls the actual text contents of the cell as well.',   'trail', true));">sortorder_options</a></td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td></tr>
<tr><td class="bgsm"><a href="$highlightUrl=statlink" onmouseover="return makeTrue(domTT_activate(this, event, 'caption', 'statlink', 'content', 'Controls the stats text at the top of the main page,<br />e.g. xx pictures in yy Albums',   'trail', true));">statlink</a></td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td></tr>
<tr><td class="bgsm"><a href="$highlightUrl=tableb" onmouseover="return makeTrue(domTT_activate(this, event, 'caption', 'tableb', 'content', 'Controls the table cell on displayimage.php where the image is.',   'trail', true));">tableb</a></td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td></tr>
<tr><td class="bgsm"><a href="$highlightUrl=tableb_compact" onmouseover="return makeTrue(domTT_activate(this, event, 'caption', 'tableb_compact', 'content', 'Controls all of the &quot;information&quot; fields on displayimage.php as well as the area where the rating stars are and the cell that the add comment area is in.',   'trail', true));">tableb_compact</a></td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">C</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">C</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td></tr>
<tr><td class="bgsm"><a href="$highlightUrl=tablef" onmouseover="return makeTrue(domTT_activate(this, event, 'caption', 'tablef', 'content', 'Controls cells of tables on some pages with form submission buttons.<br />It controls cells on the search, upload and on the page that appears when you enter admin mode.',   'trail', true));">tablef</a></td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td></tr>
<tr><td class="bgsm"><a href="$highlightUrl=tableh1" onmouseover="return makeTrue(domTT_activate(this, event, 'caption', 'tableh1', 'content', 'Controls the main table header areas.',   'trail', true));">tableh1</a></td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td></tr>
<tr><td class="bgsm"><a href="$highlightUrl=tableh1_compact" onmouseover="return makeTrue(domTT_activate(this, event, 'caption', 'tableh1_compact', 'content', 'Controls the areas at the bottoms of the main tables.',   'trail', true));">tableh1_compact</a></td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td></tr>
<tr><td class="bgsm"><a href="$highlightUrl=tableh2" onmouseover="return makeTrue(domTT_activate(this, event, 'caption', 'tableh2', 'content', 'On the main page, it controls the title area under the main table header.',   'trail', true));">tableh2</a></td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">C</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td></tr>
<tr><td class="bgsm"><a href="$highlightUrl=textinput" onmouseover="return makeTrue(domTT_activate(this, event, 'caption', 'textinput', 'content', 'Controls the look of all textinput fields (like comments)',   'trail', true));">textinput</a></td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td></tr>
<tr><td class="bgsm"><a href="$highlightUrl=thumb_caption" onmouseover="return makeTrue(domTT_activate(this, event, 'caption', 'thumb_caption', 'content', 'Only visible on the thumbnails pages - used to control the caption of a thumbnail.',   'trail', true));">thumb_caption</a></td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">C</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td></tr>
<tr><td class="bgsm"><a href="$highlightUrl=thumb_num_comments" onmouseover="return makeTrue(domTT_activate(this, event, 'caption', 'thumb_num_comments', 'content', 'Only visible on the thumbnails page - controls the way the number of comments are displayed.',   'trail', true));">thumb_num_comments</a></td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td></tr>
<tr><td class="bgsm"><a href="$highlightUrl=thumb_title" onmouseover="return makeTrue(domTT_activate(this, event, 'caption', 'thumb_title', 'content', 'Controls text that appears under thumbnails.<br />e.g. X views. A title that you have given to an image.',   'trail', true));">thumb_title</a></td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">C</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td></tr>
<tr><td class="bgsm"><a href="$highlightUrl=thumb_filename" onmouseover="return makeTrue(domTT_activate(this, event, 'caption', 'thumb_filename', 'content', 'Controls text that appears under thumbnails.<br />e.g. XYZ.JPG. The filename of the thumbnail.',   'trail', true));">thumb_filename</a></td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">C</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td></tr>
<tr><td class="bgsm"><a href="$highlightUrl=thumbnails" onmouseover="return makeTrue(domTT_activate(this, event, 'caption', 'thumbnails', 'content', 'Controls the cells that thumbnail images are in.<br />The cells on the main page and on thumbnails.php',   'trail', true));">thumbnails</a></td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">C</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">C</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">X</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td><td class="bgsm">&nbsp;</td></tr>
<tr><td class="bgsm"><a href="$highlightUrl=topmenu" onmouseover="return makeTrue(domTT_activate(this, event, 'caption', 'topmenu', 'content', 'Controls the menu at the top of the gallery.<br />The search, upload picture, favorites, most viewed, last uploaded, etc links. Visible on all coppermine pages.',   'trail', true));">topmenu</a></td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td><td class="bgsm">X</td></tr>
</table>
EOT;



return $return;
}

function customStylesheet()
{
//initialize class definitions that can be highlighted
$cssClassDef = array(
'admin_menu' => ' font-family: Arial, Helvetica, sans-serif; font-size: 85%; border: 1px solid #005D8C; background-image : url(images/button_bg.gif); background-position : bottom; color: #000000; margin-top: 0px; margin-bottom: 0px; text-align: center; ',
'admin_menu a' => ' color: #000000; text-decoration: none; display: block; position: relative; padding-top: 1px; padding-bottom: 1px; padding-left: 2px; padding-right: 2px; ',
'admin_menu a:hover' => ' color: #000000; text-decoration: underline; ',
'admin_menu_thumb' => ' font-family: Arial, Helvetica, sans-serif; font-size: 85%; border: 1px solid #005D8C; background-image : url(images/button_bg.gif); background-position : bottom; color: #000000; font-weight: bold; margin-top: 0px; margin-bottom: 0px; width: 85px; ',
'admin_menu_thumb a' => ' color: #000000; text-decoration: none; display: block; position: relative; padding-top: 1px; padding-bottom: 1px; padding-left: 10px; padding-right: 10px; ',
'admin_menu_thumb a:hover' => ' color: #000000; text-decoration: underline; ',
'alblink a' => ' text-decoration: underline; color: #000000; ',
'alblink a:hover' => ' color: #000000; text-decoration: underline; ',
'album_stat' => ' font-size: 85%; margin: 5px 0px; ',
'bblink a' => ' color: #7F7F7F; text-decoration: none; ',
'bblink a:hover' => ' color: #7F7F7F; text-decoration: underline; ',
'button' => ' font-family: Arial, Helvetica, sans-serif; font-size: 100%; border: 1px solid #005D8C; background-image : url(images/button_bg.gif); background-position : bottom; ',
'catlink' => ' display: block; margin-bottom: 2px; ',
'catlink a' => ' text-decoration: underline; color: #000000; ',
'catlink a:hover' => ' color: #000000; text-decoration: underline; ',
'checkbox' => ' font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 100%; vertical-align : middle; ',
'clickable_option' => ' cursor : hand; ',
'comment_button' => ' font-family: Arial, Helvetica, sans-serif; font-size: 85%; border: 1px solid #005D8C; background-image : url(images/button_bg.gif); background-position : bottom; padding-left: 3px; padding-right: 3px; ',
'comment_date{ color : #5F5F5F; font-size : 90%; vertical-align : middle; ',
'debug_text' => ' border: #BDBEBD; background-color: #EFEFEF; width : 100%; margin : 0px; ',
'footer' => ' font-size : 9px; ',
'footer a' => ' text-decoration: none; color: #000000; ',
'footer a:hover' => ' color: #000000; text-decoration: underline; ',
'image' => ' border-style: solid; border-width:1px; border-color: #000000; margin: 2px; ',
'imageborder' => ' border: 1px solid #000000; background-color: #FFFFFF; margin-top: 30px; margin-bottom: 30px; ',
'img_caption_table' => ' border: none; background-color: #FFFFFF; width : 100%; margin : 0px; ',
'img_caption_table th' => ' background: #D1D7DC ; font-size: 100%; color : #000000; padding-top: 4px; padding-right: 10px; padding-bottom: 4px; padding-left: 10px; border-top : 1px solid #FFFFFF; ',
'img_caption_table td' => 'background: #EFEFEF; padding-top: 6px; padding-right: 10px; padding-bottom: 6px; padding-left: 10px; border-top : 1px solid #FFFFFF; white-space: normal;',
'listbox' => ' font-family: Verdana, Arial, Arial, Helvetica, sans-serif; font-size: 100%; border: 1px solid #D1D7DC; vertical-align : middle; ',
'listbox_lang' => ' color: #000000; background-color: #D1D7DC; border: 1px solid #D1D7DC; font-size: 80%; font-family: Arial, Helvetica, sans-serif; vertical-align : middle; ',
'maintable' => ' border: 1px solid #C0C0C0; background-color: #FFFFFF; margin-top: 1px; margin-bottom: 1px; ',
'navmenu' => ' font-family: Verdana, Arial, Helvetica, sans-serif; color: #FFFFFF; font-size: 100%; font-weight: bold; background : #C0C0C0 ; border-style: none; ',
'navmenu a' => ' position: relative; display: block; padding-top: 2px; padding-right: 5px; padding-bottom: 2px; padding-left: 5px; text-decoration: none; color: #FFFFFF; ',
'navmenu a:hover' => ' background : #EFEFEF ; text-decoration: none; color:         #000000; ',
'navmenu img' => ' margin-top: 1px; margin-right: 5px; margin-bottom: 1px; margin-left: 5px; ',
'radio' => ' font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 100%; vertical-align : middle; ',
'sortorder_cell' => ' background : #C0C0C0 ; color : #FFFFFF; padding: 0px; margin: 0px; ',
'sortorder_options' => ' font-family: Verdana, Arial, Helvetica, sans-serif; background : #C0C0C0 ; color : #FFFFFF; padding: 0px; margin: 0px; font-weight: normal; font-size: 80%; white-space: nowrap; ',
'statlink' => ' color: #FFFFFF; ',
'statlink a' => ' text-decoration: none; color: #FFFFFF; ',
'statlink a:hover' => ' color: #FFFFFF; text-decoration: underline; ',
'tableb' => ' background: #EFEFEF ; padding-top: 3px; padding-right: 10px; padding-bottom: 3px; padding-left: 10px; ',
'tableb_compact' => ' background: #EFEFEF ; padding-top: 2px; padding-right: 5px; padding-bottom: 2px; padding-left: 5px; ',
'tablef' => ' background: #D1D7DC; padding-top: 10px; padding-right: 10px; padding-bottom: 10px; padding-left: 10px; ',
'tableh1' => ' background : #C0C0C0 ; color : #FFFFFF; padding-top: 3px; padding-right: 10px; padding-bottom: 3px; padding-left: 10px; ',
'tableh1_compact' => ' background : #C0C0C0 ; color : #FFFFFF; padding-top: 2px; padding-right: 5px; padding-bottom: 2px; padding-left: 5px; ',
'tableh2' => ' background: #D1D7DC ; color : #000000; padding-top: 3px; padding-right: 10px; padding-bottom: 3px; padding-left: 10px; ',
'tableh2_compact' => ' background: #D1D7DC ; color : #000000; padding-top: 2px; padding-right: 5px; padding-bottom: 2px; padding-left: 5px; ',
'textinput' => 'font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 100%; border: 1px solid #D1D7DC; padding-right: 3px; padding-left: 3px; ',
'thumb_caption' => ' font-size: 80%; padding: 1px; display : block; ',
'thumb_caption a' => ' text-decoration: underline; color: #000000; ',
'thumb_num_comments' => ' font-weight: normal; font-size: 80%; padding: 2px; font-style : italic; display : block; ',
'thumb_title' => ' font-weight : bold; font-size: 80%; padding: 2px; display : block; ',
'thumb_filename' => ' font-size: 80%; display: block; ',
'thumbnails' => ' background: #EFEFEF ; padding: 5px; ',
'topmenu' => ' line-height : 130%; font-size: 100%; ',
'topmenu a' => ' color : #7F7F7F; text-decoration : none; ',
'topmenu a:hover ' => ' color : #7F7F7F; text-decoration : underline; ',
'user_thumb_infobox' => ' margin-top: 1px; margin-bottom: 1px; ',
'user_thumb_infobox a' => ' text-decoration: none; color: #000000; ',
'user_thumb_infobox a:hover' => ' color: #000000; text-decoration: underline; ',
'user_thumb_infobox td' => ' font-size: 80%; margin-top: 1px; margin-bottom: 1px; text-align : center; ',
'user_thumb_infobox th' => ' font-weight : bold; font-size: 100%; margin-top: 1px; margin-bottom: 1px; text-align : center; ',
);


$return = <<<EOT
<style type="text/css">
body {font-family : Verdana, Arial, Helvetica, sans-serif;font-size: 12px;background : #FFFFFF ;color : Black;margin: 0px;}

table {font-size: 12px;}

h1{font-weight: bold;font-size: 22px; font-family: "Trebuchet MS", Verdana, Arial, Helvetica, sans-serif; text-decoration: none; line-height : 120%; color : #000000; margin: 2px; }

h2 {font-family: Arial, Helvetica, sans-serif; font-size: 18px; margin: 0px;}

h3 {font-weight: normal; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; margin: 2px; }

p {font-family: Arial, Helvetica, sans-serif; font-size: 100%; margin: 2px 0px; }

ul { margin-left: 5px; padding: 0px;}

li { margin-left: 10px; margin-top: 4px; margin-bottom: 4px; padding: 0px; list-style-position: outside; list-style-type: disc; }

a { color: #7F7F7F; text-decoration: none; }

a:hover { color: #7F7F7F; text-decoration: underline;}

td #admin_menu_anim {
        background-image : url(images/button_bg_anim.gif);
}

/* Default DOM Tooltip Style */
div.domTT {
    border: 1px solid #333333;
}
div.domTTCaption {
    font-family: serif;
    font-size: 12px;
    font-weight: bold;
    padding: 1px 2px;
    color: #FFFFFF;
    background-color: #333333;
}
div.domTTContent {
    font-size: 12px;
    font-family: sans-serif;
    padding: 3px 2px;
    background-color: #F1F1FF;
}
/* Classic Style */
div.domTTClassic {
    border: 1px solid black;
    background-color: #FBF4D4;
}
div.domTTClassicCaption {
    font-family: serif;
    font-size: 12px;
    font-weight: bold;
    font-style: italic;
    padding: 1px 2px;
}
div.domTTClassicContent {
    font-size: 12px;
    font-family: Arial, sans-serif;
    padding: 1px 2px 0 2px;
}
/* Win9x Style */
div.domTTWin {
  border: 2px outset #BFBFBF;
  background-color: #808080
}
div.domTTWinCaption {
  border: 0px solid #BFBFBF;
  border-width: 1px 1px 0px 1px;
  background-color: #00007F;
  padding: 2px;
  font-size: 12px;
  font-weight: bold;
  font-family: sans-serif;
  color: white;
}
div.domTTWinContent {
  border: 1px solid #BFBFBF;
}
/* Overlib Style */
div.domTTOverlib {
    border: 1px solid #333366;
}
div.domTTOverlibCaption {
    font-family: Verdana, Helvetica;
    font-size: 10px;
    font-weight: bold;
    color: #FFFFFF;
    background-color: #333366;
}
div.domTTOverlibContent {
    font-size: 10px;
    font-family: Verdana, Helvetica;
    padding: 2px;
    background-color: #F1F1FF;
}
div.domTTMenu {
  width: 150px;
  border: 2px outset #E6E6E6;
}
div.domTTMenuCaption {
  font-size: 12px;
  font-family: sans-serif;
  background-color: #E6E6E6;
}
div.domTTMenuContent {
  padding: 1px 0;
  background-color: #E6E6E6;
}
.bgg {
background-color: #00E090;
padding:0px;
margin: 0px
text-align : center;
font-size:8px;
}
.bgy {
background-color: #FFDF00;
padding:0px;
margin: 0px
text-align : center;
font-size:8px;
}
.bgr {
background-color: #FF3F00;
padding:0px;
margin:0px
text-align : center;
font-size:8px;
}
.stgsm {
font-size:9px;
}
.bgsm {
font-size:9px;
border-color:#EFEFEF; border-width:1px; border-style:solid;
}

#vanity a {
        display:block;
        width:57px;
        height:20px;
        margin: 3px 20px;
}
#vanity img {border:0}
#v_php {float:left;background-image:url(../../images/powered-php.gif);}
#v_php:hover {background-image:url(../../images/h_powered-php.gif);}
#v_mysql {float:left;background-image:url(../../images/powered-mysql.gif);}
#v_mysql:hover  {background-image:url(../../images/h_powered-mysql.gif);}
#v_xhtml {float:right;background-image:url(../../images/valid-xhtml10.gif);}
#v_xhtml:hover {background-image:url(../../images/h_valid-xhtml10.gif);}
#v_css {float:right;background-image:url(../../images/valid-css.gif);}
#v_css:hover{background-image:url(../../images/h_valid-css.gif);}


EOT;

foreach ($cssClassDef as $key => $value) {
  $return.= '.' . $key .'{';
  $return.= $value;
  if (isset($_GET['highlight'])) {
      if ($_GET['highlight'] == $key){
          $return.= 'background:red;border: 2px solid green;color:black;font-style: italic;font-weight:bold;font-variant:small-caps ;';
      }
  }
  $return.= "}\n";
}

$return.= '</style>';

return $return;
}

function customGetUrlVars($exception)
// get the url vars
{
 $cpgGetUrl = $_SERVER["SCRIPT_NAME"]."?";
 foreach ($_GET as $key => $value) {
    if ($key!=$exception){$cpgGetUrl.= $key . "=" . $value . "&";}
 }
 $cpgGetUrl.= $exception . '=';
 return $cpgGetUrl;
}

function customGetUrlVars2($exception)
// get the url vars
{
 $cpgGetUrl = $_SERVER["SCRIPT_NAME"]."?";
 foreach ($_GET as $key => $value) {
    if ($key!=$exception){$cpgGetUrl.= $key . "=" . $value . "&";}
 }
 //$cpgGetUrl.= $exception . '=';
 return $cpgGetUrl;
}
?>
