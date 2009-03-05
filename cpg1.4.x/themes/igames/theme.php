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
  Coppermine version: 1.4.22
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
// special note: I left the JavaScript 'hide' off of the first and third buttons to help avoid trouble keeping sys_menu open. :Donnoman
if ($CONFIG['custom_lnk_url'] != '') {
$template_sub_menu = <<<EOT
                        <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                <tr>
<!-- BEGIN custom_link -->
                                                                                <td class="top_menu_left_bttn">
                                                <a href="{CUSTOM_LNK_TGT}" title="{CUSTOM_LNK_TITLE}">{CUSTOM_LNK_LNK}</a>
                                        </td>
                                        <td><img src="themes/igames/images/menu_spacer.gif" width="2" height="35" border="0" alt="" /><br /></td>
<!-- END custom_link -->
                                        <td class="top_menu_bttn">
                                                <a href="{ALB_LIST_TGT}" title="{ALB_LIST_TITLE}">{ALB_LIST_LNK}</a>
                                        </td>
                                        <td><img src="themes/igames/images/menu_spacer.gif" width="2" height="35" border="0" alt="" /><br /></td>
                                        <td class="top_menu_bttn">
                                                <a href="javascript:;" onmouseover="MM_showHideLayers('SYS_MENU','','show')">@</a>
                                        </td>
                                        <td><img src="themes/igames/images/menu_spacer.gif" width="2" height="35" border="0" alt="" /><br /></td>
                                        <td class="top_menu_bttn">
                                                <a href="{LASTUP_TGT}" title="{LASTUP_LNK}">{LASTUP_LNK}</a>
                                        </td>
                                        <td><img src="themes/igames/images/menu_spacer.gif" width="2" height="35" border="0" alt="" /><br /></td>
                                        <td class="top_menu_bttn">
                                                <a href="{LASTCOM_TGT}" onmouseover="MM_showHideLayers('SYS_MENU','','hide')" title="{LASTCOM_LNK}">{LASTCOM_LNK}</a>
                                        </td>
                                        <td><img src="themes/igames/images/menu_spacer.gif" width="2" height="35" border="0" alt="" /><br /></td>
                                        <td class="top_menu_bttn">
                                                <a href="{TOPN_TGT}" onmouseover="MM_showHideLayers('SYS_MENU','','hide')" title="{TOPN_LNK}">{TOPN_LNK}</a>
                                        </td>
                                        <td><img src="themes/igames/images/menu_spacer.gif" width="2" height="35" border="0" alt="" /><br /></td>
                                        <td class="top_menu_bttn">
                                                <a href="{TOPRATED_TGT}" onmouseover="MM_showHideLayers('SYS_MENU','','hide')" title="{TOPRATED_LNK}">{TOPRATED_LNK}</a>
                                        </td>
                                        <td><img src="themes/igames/images/menu_spacer.gif" width="2" height="35" border="0" alt="" /><br /></td>
                                        <td class="top_menu_bttn">
                                                <a href="{FAV_TGT}" onmouseover="MM_showHideLayers('SYS_MENU','','hide')" title="{FAV_LNK}">{FAV_LNK}</a>
                                        </td>
                                        <td><img src="themes/igames/images/menu_spacer.gif" width="2" height="35" border="0" alt="" /><br /></td>
                                        <td class="top_menu_right_bttn">
                                                <a href="{SEARCH_TGT}" onmouseover="MM_showHideLayers('SYS_MENU','','hide')" title="{SEARCH_LNK}">{SEARCH_LNK}</a>
                                        </td>
                                        <td width="100%">&nbsp;</td>
                                </tr>
                        </table>
EOT;

} else {

$template_sub_menu = <<<EOT
                        <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                <tr>
<!-- BEGIN custom_link -->
<!-- END custom_link -->
                                        <td class="top_menu_left_bttn">
                                                <a href="{ALB_LIST_TGT}" title="{ALB_LIST_TITLE}">{ALB_LIST_LNK}</a>
                                        </td>
                                        <td><img src="themes/igames/images/menu_spacer.gif" width="2" height="35" border="0" alt="" /><br /></td>
                                        <td class="top_menu_bttn">
                                                <a href="javascript:;" onmouseover="MM_showHideLayers('SYS_MENU','','show')">@</a>
                                        </td>
                                        <td><img src="themes/igames/images/menu_spacer.gif" width="2" height="35" border="0" alt="" /><br /></td>
                                        <td class="top_menu_bttn">
                                                <a href="{LASTUP_TGT}" title="{LASTUP_LNK}">{LASTUP_LNK}</a>
                                        </td>
                                        <td><img src="themes/igames/images/menu_spacer.gif" width="2" height="35" border="0" alt="" /><br /></td>
                                        <td class="top_menu_bttn">
                                                <a href="{LASTCOM_TGT}" onmouseover="MM_showHideLayers('SYS_MENU','','hide')" title="{LASTCOM_LNK}">{LASTCOM_LNK}</a>
                                        </td>
                                        <td><img src="themes/igames/images/menu_spacer.gif" width="2" height="35" border="0" alt="" /><br /></td>
                                        <td class="top_menu_bttn">
                                                <a href="{TOPN_TGT}" onmouseover="MM_showHideLayers('SYS_MENU','','hide')" title="{TOPN_LNK}">{TOPN_LNK}</a>
                                        </td>
                                        <td><img src="themes/igames/images/menu_spacer.gif" width="2" height="35" border="0" alt="" /><br /></td>
                                        <td class="top_menu_bttn">
                                                <a href="{TOPRATED_TGT}" onmouseover="MM_showHideLayers('SYS_MENU','','hide')" title="{TOPRATED_LNK}">{TOPRATED_LNK}</a>
                                        </td>
                                        <td><img src="themes/igames/images/menu_spacer.gif" width="2" height="35" border="0" alt="" /><br /></td>
                                        <td class="top_menu_bttn">
                                                <a href="{FAV_TGT}" onmouseover="MM_showHideLayers('SYS_MENU','','hide')" title="{FAV_LNK}">{FAV_LNK}</a>
                                        </td>
                                        <td><img src="themes/igames/images/menu_spacer.gif" width="2" height="35" border="0" alt="" /><br /></td>
                                        <td class="top_menu_right_bttn">
                                                <a href="{SEARCH_TGT}" onmouseover="MM_showHideLayers('SYS_MENU','','hide')" title="{SEARCH_LNK}">{SEARCH_LNK}</a>
                                        </td>
                                        <td width="100%">&nbsp;</td>
                                </tr>
                        </table>
EOT;
}
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
                                        <td><img src='themes/igames/images/box_left_icon.gif' hspace="5" alt="" /> </td>
                                        <td  class="tableh1a" width="95%">$title</td>
                                        <td width="5%"> &nbsp; </td>
                                </tr>
                        </table>
                </td>
        </tr>
</table>
<!-- Start standard table -->
<table align="center" width="$width" cellspacing="1" cellpadding="0" class="maintableb">

EOT;
    } else {
        echo <<<EOT

<!-- Start standard table -->
<table align="center" width="$width" cellspacing="1" cellpadding="0" class="maintable">

EOT;
    }
}




?>