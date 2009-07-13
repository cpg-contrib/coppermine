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
  Coppermine version: 1.4.26
  $HeadURL$
  $Revision$
  $Author$
  $Date$
**********************************************/

// ------------------------------------------------------------------------- //
// This theme has had redundant CORE items removed                           //
// ------------------------------------------------------------------------- //
define('THEME_HAS_RATING_GRAPHICS', 1);
define('THEME_HAS_NO_SUB_MENU_BUTTONS',1);
define('THEME_IS_XHTML10_TRANSITIONAL',1);  // Remove this if you edit this template until
                                            // you have validated it. See docs/theme.htm.

// HTML template for sys_menu
$template_sys_menu = <<<EOT
         |{BUTTONS}|
EOT;

// HTML template for template sys_menu spacer
$template_sys_menu_spacer ="|";

// HTML template for template sub_menu
// special note: I left the java 'hide' off of the first and third buttons to help avoid trouble keeping sys_menu open. :Donnoman

$template_sub_menu = <<<EOT
<table cellpadding="0" cellspacing="0" border="0" width="100%">
<tr>
    <td width="50%"></td>
<!-- BEGIN custom_link -->
	<td><img src="themes/mac_ox_x/images/menu_button_bg_left.gif" border="0" alt="" /><br /></td>
    <td style="background-image:url(themes/mac_ox_x/images/menu_button_bg_middle.gif);" valign="top">
            <a href="{CUSTOM_LNK_TGT}" title="{CUSTOM_LNK_TITLE}">{CUSTOM_LNK_LNK}</a>
    </td>
    <td><img src="themes/mac_ox_x/images/menu_button_bg_right.gif" border="0" alt="" /><br /></td>
<!-- END custom_link -->
    <td><img src="themes/mac_ox_x/images/menu_button_bg_left.gif" border="0" alt="" /><br /></td>
    <td style="background-image:url(themes/mac_ox_x/images/menu_button_bg_middle.gif);" valign="top">
            <a href="index.php"><img src="themes/mac_ox_x/images/home.gif" border="0" alt="" /><br /></a>
    </td>
    <td><img src="themes/mac_ox_x/images/menu_button_bg_right.gif" border="0" alt="" /><br /></td>
    <td><img src="themes/mac_ox_x/images/menu_button_bg_left.gif" border="0" alt="" /><br /></td>
    <td style="background-image:url(themes/mac_ox_x/images/menu_button_bg_middle.gif);" valign="top">
            <a href="javascript:;" onmouseover="MM_showHideLayers('SYS_MENU','','show')">@</a>
    </td>
    <td><img src="themes/mac_ox_x/images/menu_button_bg_right.gif" border="0" alt="" /><br /></td>
    <td><img src="themes/mac_ox_x/images/menu_button_bg_left.gif" border="0" alt="" /><br /></td>
    <td style="background-image:url(themes/mac_ox_x/images/menu_button_bg_middle.gif);" valign="top">
            <a href="{ALB_LIST_TGT}" title="{ALB_LIST_TITLE}">{ALB_LIST_LNK}</a>
    </td>
    <td><img src="themes/mac_ox_x/images/menu_button_bg_right.gif" border="0" alt="" /><br /></td>
    <td><img src="themes/mac_ox_x/images/menu_button_bg_left.gif" border="0" alt="" /><br /></td>
    <td style="background-image:url(themes/mac_ox_x/images/menu_button_bg_middle.gif);" valign="top">
            <a href="{LASTUP_TGT}" onmouseover="MM_showHideLayers('SYS_MENU','','hide')" title="{LASTUP_LNK}">{LASTUP_LNK}</a>
    </td>
    <td><img src="themes/mac_ox_x/images/menu_button_bg_right.gif" border="0" alt="" /><br /></td>
    <td><img src="themes/mac_ox_x/images/menu_button_bg_left.gif" border="0" alt="" /><br /></td>
    <td style="background-image:url(themes/mac_ox_x/images/menu_button_bg_middle.gif);" valign="top">
            <a href="{LASTCOM_TGT}" onmouseover="MM_showHideLayers('SYS_MENU','','hide')" title="{LASTCOM_LNK}">{LASTCOM_LNK}</a>
    </td>
    <td><img src="themes/mac_ox_x/images/menu_button_bg_right.gif" border="0" alt="" /><br /></td>
    <td><img src="themes/mac_ox_x/images/menu_button_bg_left.gif" border="0" alt="" /><br /></td>
    <td style="background-image:url(themes/mac_ox_x/images/menu_button_bg_middle.gif);" valign="top">
            <a href="{TOPN_TGT}" onmouseover="MM_showHideLayers('SYS_MENU','','hide')" title="{TOPN_LNK}">{TOPN_LNK}</a>
    </td>
    <td><img src="themes/mac_ox_x/images/menu_button_bg_right.gif" border="0" alt="" /><br /></td>
    <td><img src="themes/mac_ox_x/images/menu_button_bg_left.gif" border="0" alt="" /><br /></td>
    <td style="background-image:url(themes/mac_ox_x/images/menu_button_bg_middle.gif);" valign="top">
            <a href="{TOPRATED_TGT}" onmouseover="MM_showHideLayers('SYS_MENU','','hide')" title="{TOPRATED_LNK}">{TOPRATED_LNK}</a>
    </td>
    <td><img src="themes/mac_ox_x/images/menu_button_bg_right.gif" border="0" alt="" /><br /></td>
    <td><img src="themes/mac_ox_x/images/menu_button_bg_left.gif" border="0" alt="" /><br /></td>
    <td style="background-image:url(themes/mac_ox_x/images/menu_button_bg_middle.gif);" valign="top">
            <a href="{FAV_TGT}" onmouseover="MM_showHideLayers('SYS_MENU','','hide')" title="{FAV_LNK}">{FAV_LNK}</a>
    </td>
    <td><img src="themes/mac_ox_x/images/menu_button_bg_right.gif" border="0" alt="" /><br /></td>
    <td><img src="themes/mac_ox_x/images/menu_button_bg_left.gif" border="0" alt="" /><br /></td>
    <td style="background-image:url(themes/mac_ox_x/images/menu_button_bg_middle.gif);" valign="top">
            <a href="{SEARCH_TGT}" onmouseover="MM_showHideLayers('SYS_MENU','','hide')" title="{SEARCH_LNK}">{SEARCH_LNK}</a>
    </td>
    <td><img src="themes/mac_ox_x/images/menu_button_bg_right.gif" border="0" alt="" /><br /></td>
    <td width="50%"></td>
  </tr>
</table>

EOT;


// HTML template for title row of the thumbnail view (album title + sort options)
$template_thumb_view_title_row = <<<EOT

                        <table width="100%" cellpadding="0" cellspacing="0">
                        <tr>
                                <td width="100%" class="statlink">{ALBUM_NAME}</td>
                                <td class="sortorder_options" style="font-size: 100%;">{TITLE}</td>
                                <td class="sortorder_options" style="font-size: 100%;"><span class="statlink"><a href="thumbnails.php?album={AID}&amp;page={PAGE}&amp;sort=ta" title="{SORT_TA}">&nbsp;+&nbsp;</a></span></td>
                                <td class="sortorder_options" style="font-size: 100%;"><span class="statlink"><a href="thumbnails.php?album={AID}&amp;page={PAGE}&amp;sort=td" title="{SORT_TD}">&nbsp;-&nbsp;</a></span></td>
                                <td>&nbsp;&nbsp;</td>
                                <td class="sortorder_options" style="font-size: 100%;">{NAME}</td>
                                <td class="sortorder_options" style="font-size: 100%;"><span class="statlink"><a href="thumbnails.php?album={AID}&amp;page={PAGE}&amp;sort=na" title="{SORT_NA}">&nbsp;+&nbsp;</a></span></td>
                                <td class="sortorder_options" style="font-size: 100%;"><span class="statlink"><a href="thumbnails.php?album={AID}&amp;page={PAGE}&amp;sort=nd" title="{SORT_ND}">&nbsp;-&nbsp;</a></span></td>
                                <td>&nbsp;&nbsp;</td>
                                <td class="sortorder_options" style="font-size: 100%;">{DATE}</td>
                                <td class="sortorder_options" style="font-size: 100%;"><span class="statlink"><a href="thumbnails.php?album={AID}&amp;page={PAGE}&amp;sort=da" title="{SORT_DA}">&nbsp;+&nbsp;</a></span></td>
                                <td class="sortorder_options" style="font-size: 100%;"><span class="statlink"><a href="thumbnails.php?album={AID}&amp;page={PAGE}&amp;sort=dd" title="{SORT_DD}">&nbsp;-&nbsp;</a></span></td>
                                <td>&nbsp;&nbsp;</td>
                                <td class="sortorder_options" style="font-size: 100%;">{POSITION}</td>
                                <td class="sortorder_options" style="font-size: 100%;"><span class="statlink"><a href="thumbnails.php?album={AID}&amp;page={PAGE}&amp;sort=pa" title="{SORT_PA}">&nbsp;+&nbsp;</a></span></td>
                                <td class="sortorder_options" style="font-size: 100%;"><span class="statlink"><a href="thumbnails.php?album={AID}&amp;page={PAGE}&amp;sort=pd" title="{SORT_PD}">&nbsp;-&nbsp;</a></span></td>
                        </tr>
                        </table>

EOT;






// Function to start a 'standard' table
function starttable($width = '-1', $title = '', $title_colspan = '1')
{
    global $CONFIG;

    if ($width == '-1') $width = $CONFIG['picture_table_width'];
    if ($width == '100%') $width = $CONFIG['main_table_width'];
    if ($title) {
        echo <<<EOT
<!-- Start standard table title -->
<table align="center" width="$width" cellspacing="0" cellpadding="0" class="maintablea">
        <tr>
                <td>
                        <table width="100%" cellspacing="0" cellpadding="0" class="tableh1a">
                                <tr>
                                        <td class="tableh1a"><img src="themes/mac_ox_x/images/tableh1a_bg_left.gif" alt="" /></td>
                                        <td class="tableh1a" style="background-image:url(themes/mac_ox_x/images/tableh1a_bg_middle.gif);" width="100%">$title</td>
                                        <td class="tableh1a"><img src="themes/mac_ox_x/images/tableh1a_bg_right.gif" alt="" /></td>
                                </tr>
                        </table>
                </td>
        </tr>
</table>
<!-- Start standard table -->
<table align="center" width="$width" cellspacing="0" cellpadding="0">
  <tr>
   <td style="background-image:url(themes/mac_ox_x/images/main_table_r1_c1b.gif);" valign="top"><img name="main_table_r1_c1" src="themes/mac_ox_x/images/main_table_r1_c1.gif" border="0"  alt="" /></td>
        <td width="100%"><table width="100%" cellspacing="1" cellpadding="0" class="maintableb">

EOT;
    } else {
        echo <<<EOT

<!-- Start standard table -->
<table align="center" width="$width" cellspacing="0" cellpadding="0">
  <tr>
   <td style="background-image:url(themes/mac_ox_x/images/main_table_r1_c1b.gif);" valign="top"><img name="main_table_r1_c1" src="themes/mac_ox_x/images/main_table_r1_c1.gif" border="0"  alt="" /></td>
        <td width="100%"><table width="100%" cellspacing="1" cellpadding="0" class="maintable">

EOT;
    }
}

function endtable()
{
    echo <<<EOT
        </table>
   </td>
   <td style="background-image:url(themes/mac_ox_x/images/main_table_r1_c3b.gif);" valign="top"><img name="main_table_r1_c3" src="themes/mac_ox_x/images/main_table_r1_c3.gif" border="0"  alt="" /></td>
  </tr>
  <tr>
   <td><img name="main_table_r2_c1" src="themes/mac_ox_x/images/main_table_r2_c1.gif" width="10" height="4" border="0"  alt="" /></td>
   <td style="background-image:url(themes/mac_ox_x/images/main_table_r2_c2b.gif);"><img name="main_table_r2_c2" src="themes/mac_ox_x/images/main_table_r2_c2.gif" border="0"  alt="" /></td>
   <td><img name="main_table_r2_c3" src="themes/mac_ox_x/images/main_table_r2_c3.gif" width="10" height="4" border="0"  alt="" /></td>
  </tr>
</table>
<!-- End standard table -->

EOT;
}



?>
