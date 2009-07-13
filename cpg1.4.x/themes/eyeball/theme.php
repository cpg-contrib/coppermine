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
  ********************************************
  This theme has had redundant CORE items removed
**********************************************/

define('THEME_HAS_RATING_GRAPHICS', 1);
define('THEME_HAS_NAVBAR_GRAPHICS', 1);
define('THEME_HAS_NO_SUB_MENU_BUTTONS',1);
define('THEME_IS_XHTML10_TRANSITIONAL',1);  // Remove this if you edit this template until
                                            // you have validated it. See docs/theme.htm.
// HTML template for template sys_menu spacer
$template_sys_menu_spacer ='|';

// HTML template for template sub_menu
$template_sub_menu = <<<EOT
                        <table cellpadding="0" cellspacing="0" border="0" class="top_menu_bttn">
                                <tr>
                                        <td><img src="themes/eyeball/images/top_menu_left.gif" border="0" alt="" /><br /></td>
                                        <!-- BEGIN custom_link -->
                                                                                <td style="background-image:url(themes/eyeball/images/top_menu_button.gif);">
                                                <a href="{CUSTOM_LNK_TGT}" title="{CUSTOM_LNK_TITLE}">{CUSTOM_LNK_LNK}</a>
                                        </td>
                                        <td><img src="themes/eyeball/images/top_menu_spacer.gif" border="0" alt="" /><br /></td>
                                        <!-- END custom_link -->
                                        <td style="background-image:url(themes/eyeball/images/top_menu_button.gif);">
                                                <a href="index.php" onmouseover="MM_showHideLayers('Menu1','','show')"><img src="themes/eyeball/images/home.gif" border="0" alt="" /><br /></a>
                                        </td>
                                        <td><img src="themes/eyeball/images/top_menu_spacer.gif" border="0" alt="" /><br /></td>
                                        <td style="background-image:url(themes/eyeball/images/top_menu_button.gif);">
                                                <a href="{ALB_LIST_TGT}" title="{ALB_LIST_TITLE}">{ALB_LIST_LNK}</a>
                                        </td>
                                        <td><img src="themes/eyeball/images/top_menu_spacer.gif" border="0" alt="" /><br /></td>
                                        <td style="background-image:url(themes/eyeball/images/top_menu_button.gif);">
                                                <a href="{LASTUP_TGT}" onmouseover="MM_showHideLayers('Menu1','','hide')" title="{LASTUP_LNK}">{LASTUP_LNK}</a>
                                        </td>
                                        <td><img src="themes/eyeball/images/top_menu_spacer.gif" border="0" alt="" /><br /></td>
                                        <td style="background-image:url(themes/eyeball/images/top_menu_button.gif);">
                                                <a href="{LASTCOM_TGT}" onmouseover="MM_showHideLayers('Menu1','','hide')" title="{LASTCOM_LNK}">{LASTCOM_LNK}</a>
                                        </td>
                                        <td><img src="themes/eyeball/images/top_menu_spacer.gif" border="0" alt="" /><br /></td>
                                        <td style="background-image:url(themes/eyeball/images/top_menu_button.gif);">
                                                <a href="{TOPN_TGT}" onmouseover="MM_showHideLayers('Menu1','','hide')" title="{TOPN_LNK}">{TOPN_LNK}</a>
                                        </td>
                                        <td><img src="themes/eyeball/images/top_menu_spacer.gif" border="0" alt="" /><br /></td>
                                        <td style="background-image:url(themes/eyeball/images/top_menu_button.gif);">
                                                <a href="{TOPRATED_TGT}" onmouseover="MM_showHideLayers('Menu1','','hide')" title="{TOPRATED_LNK}">{TOPRATED_LNK}</a>
                                        </td>
                                        <td><img src="themes/eyeball/images/top_menu_spacer.gif" border="0" alt="" /><br /></td>
                                        <td style="background-image:url(themes/eyeball/images/top_menu_button.gif);">
                                        <a href="{FAV_TGT}" onmouseover="MM_showHideLayers('Menu1','','hide')" title="{FAV_LNK}">{FAV_LNK}</a>
                                        </td>
                                        <td><img src="themes/eyeball/images/top_menu_spacer.gif" border="0" alt="" /><br /></td>
                                         <td style="background-image:url(themes/eyeball/images/top_menu_button.gif);">
                                                <a href="{SEARCH_TGT}" onmouseover="MM_showHideLayers('Menu1','','hide')" title="{SEARCH_LNK}">{SEARCH_LNK}</a>
                                        </td>
                                        <td><img src="themes/eyeball/images/top_menu_right.gif" border="0" alt="" /><br /></td>

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
    global $table_need_close;

    if ($width == '-1') $width = $CONFIG['picture_table_width'];
    if ($width == '100%') $width = $CONFIG['main_table_width'];
    if ($title) {
        $table_need_close = true;
        echo <<<EOT
<!-- Start standard table title -->
<table align="center" width="$width" cellspacing="0" cellpadding="0" class="maintablea">
        <tr>
                <td>
                        <table width="100%" cellspacing="0" cellpadding="0" class="tableh1a">
                                <tr>
                                        <td class="tableh1a"><img src="themes/eyeball/images/tableh1a_bg_left.gif" alt="" /></td>
                                        <td class="tableh1a" width="100%">$title</td>
                                        <td class="tableh1a"><img src="themes/eyeball/images/tableh1a_bg_right.gif" alt="" /></td>
                                </tr>
                        </table>
                </td>
        </tr>
</table>
<!-- Start standard table -->
<table align="center" width="$width" cellspacing="0" cellpadding="0">
  <tr>
   <td><img src="images/spacer.gif" width="20" height="1" border="0" alt="" /></td>
        <td width="100%"><table width="100%" cellspacing="1" cellpadding="0" class="maintableb">

EOT;
    } else {
        echo <<<EOT

<!-- Start standard table -->
<table align="center" width="$width" cellspacing="0" cellpadding="0" class="maintable">

EOT;
    }
}

function endtable()
{
    global $table_need_close;

    if ($table_need_close) {
        $table_need_close = false;
        echo <<<EOT
        </table>
   </td>
   <td><img src="images/spacer.gif" width="20" height="1" border="0" alt="" /></td>
  </tr>
</table>
<!-- End standard table -->

EOT;
    } else {
        echo <<<EOT
</table>
<!-- End standard table -->

EOT;
    }
}

function theme_display_image($nav_menu, $picture, $votes, $pic_info, $comments, $film_strip)
{
    global $CONFIG;

    $spacer = <<<EOT
        <tr>
                <td><img src="themes/eyeball/images/hline_left.gif" alt="" /><br /></td>
                <td width="100%" style="background-image:url(themes/eyeball/images/hline_bg.gif);" align="center"><img src="themes/eyeball/images/hline_blue_ball.gif" alt="" /><br /></td>
                <td><img src="themes/eyeball/images/hline_right.gif" alt="" /><br /></td>
        </tr>

EOT;

    echo '        <img src="images/spacer.gif" width="1" height="25" alt="" /><br />' . "\n";
    starttable();
    echo $nav_menu;
    endtable();

    starttable();
    echo $picture;
    endtable();
    if ($CONFIG['display_film_strip'] == 1) {
        echo $film_strip;
    }
    if ($votes) {
        starttable();
        echo $spacer;
        endtable();

        echo $votes;

    }

    $picinfo = isset($_COOKIE['picinfo']) ? $_COOKIE['picinfo'] : ($CONFIG['display_pic_info'] ? 'block' : 'none');
    echo "<div id=\"picinfo\" style=\"display: $picinfo;\">\n";
    starttable();
    echo $spacer;
    endtable();
    starttable();
    echo $pic_info;
    endtable();
    echo "</div>\n";

    if ($comments) {
        starttable();
        echo $spacer;
        endtable();
        echo "<div id=\"comments\">\n";
        echo $comments;
        echo "</div>\n";
    }
}

?>