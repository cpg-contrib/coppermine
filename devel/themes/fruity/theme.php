<?php
// ------------------------------------------------------------------------- //
// Coppermine Photo Gallery 1.4.1                                            //
// ------------------------------------------------------------------------- //
// Copyright (C) 2002-2004 Gregory DEMAR                                     //
// http://www.chezgreg.net/coppermine/                                       //
// ------------------------------------------------------------------------- //
// Updated by the Coppermine Dev Team                                        //
// (http://coppermine.sf.net/team/)                                          //
// see /docs/credits.html for details                                        //
// ------------------------------------------------------------------------- //
// This program is free software; you can redistribute it and/or modify      //
// it under the terms of the GNU General Public License as published by      //
// the Free Software Foundation; either version 2 of the License, or         //
// (at your option) any later version.                                       //
// ------------------------------------------------------------------------- //
// $Id$
// ------------------------------------------------------------------------- //
// This theme has had redundant CORE items removed                           //
// ------------------------------------------------------------------------- //


// HTML template for main menu
$template_main_menu = <<<EOT
                <span class="topmenu">
<!-- BEGIN album_list -->
                        <a href="{ALB_LIST_TGT}" title="{ALB_LIST_TITLE}">{ALB_LIST_LNK}</a>
<!-- END album_list -->
<!-- BEGIN my_gallery -->
                        <a href="{MY_GAL_TGT}" title="{MY_GAL_TITLE}">{MY_GAL_LNK}</a>
<!-- END my_gallery -->
<!-- BEGIN allow_memberlist -->
                                                <a href="{MEMBERLIST_TGT}" title="{MEMBERLIST_TITLE}">{MEMBERLIST_LNK}</a>
<!-- END allow_memberlist -->
<!-- BEGIN my_profile -->
                        <a href="{MY_PROF_TGT}" title="{MY_PROF_LNK}">{MY_PROF_LNK}</a>
<!-- END my_profile -->
<!-- BEGIN faq -->
                        <a href="{FAQ_TGT}" title="{FAQ_TITLE}">{FAQ_LNK}</a>
<!-- END faq -->
<!-- BEGIN enter_admin_mode -->
                        <a href="{ADM_MODE_TGT}" title="{ADM_MODE_TITLE}">{ADM_MODE_LNK}</a>
<!-- END enter_admin_mode -->
<!-- BEGIN leave_admin_mode -->
                        <a href="{USR_MODE_TGT}" title="{USR_MODE_TITLE}">{USR_MODE_LNK}</a>
<!-- END leave_admin_mode -->
<!-- BEGIN upload_pic -->
                        <a href="{UPL_PIC_TGT}" title="{UPL_PIC_TITLE}">{UPL_PIC_LNK}</a>
<!-- END upload_pic -->
<!-- BEGIN register -->
                        <a href="{REGISTER_TGT}" title="{REGISTER_TITLE}">{REGISTER_LNK}</a>
<!-- END register -->
<!-- BEGIN login -->
                        <a href="{LOGIN_TGT}" title="{LOGIN_LNK}">{LOGIN_LNK}</a>
<!-- END login -->
<!-- BEGIN logout -->
                        <a href="{LOGOUT_TGT}" title="{LOGOUT_LNK}">{LOGOUT_LNK}</a>
<!-- END logout -->
                        <br />
                        <a href="{LASTUP_TGT}" title="{LASTUP_LNK}">{LASTUP_LNK}</a>
                        <a href="{LASTCOM_TGT}" title="{LASTCOM_LNK}">{LASTCOM_LNK}</a>
                        <a href="{TOPN_TGT}" title="{TOPN_LNK}">{TOPN_LNK}</a>
                        <a href="{TOPRATED_TGT}" title="{TOPRATED_LNK}">{TOPRATED_LNK}</a>
                        <a href="{FAV_TGT}" title="{FAV_LNK}">{FAV_LNK}</a>
                        <a href="{SEARCH_TGT}" title="{SEARCH_LNK}">{SEARCH_LNK}</a>
                </span>
EOT;



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
                        <img src="images/spacer.gif" width="1" height="1" alt="" /><br />
                </td>
        </tr>
        <tr>
                <td align="center" valign="middle" class="thumbnails">
                        <img src="images/spacer.gif" width="{THUMB_CELL_WIDTH}" height="1" class="image" style="margin-top: 0px; margin-bottom: 0px; border: none;" alt="" /><br />
                        <a href="{ALB_LINK_TGT}" class="albums">{ALB_LINK_PIC}</a><br />
                </td>
                <td>
                        <img src="images/spacer.gif" width="1" height="1" alt="" />
                </td>
                <td width="100%" valign="top" class="tableb_compact">
                        {ADMIN_MENU}
                        <p>{ALB_DESC}</p>
                        <p class="album_stat">{ALB_INFOS}</p>
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
                &nbsp;
                </td>
        </tr>
        <tr>
                <td>
                        <img src="images/spacer.gif" width="1" height="1" border="0" alt="" /><br />
                </td>
        </tr>
        <tr>
                <td align="center" class="empty">
                        <img src="images/spacer.gif" width="1" height="2" border="0" alt="" /><br />
                        <img src="images/spacer.gif" width="1" height="{SPACER_HEIGHT}" class="blank_image" alt="" /><br />
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
        <img src="images/spacer.gif" width="1" height="17" alt="" /><br />
<!-- END spacer -->

EOT;




// HTML template for the image navigation bar
$template_img_navbar = <<<EOT

        <tr>
                <td align="center" valign="middle" class="navmenu" width="48">
                        <a href="{THUMB_TGT}" class="navmenu_pic" title="{THUMB_TITLE}"><img src="themes/fruity/images/thumbnail.gif" width="17" height="17" align="middle" border="0" alt="{THUMB_TITLE}" /></a>
                </td>
                <td align="center" valign="middle" class="navmenu" width="48">
                        <a href="javascript:;" onclick="blocking('picinfo','yes', 'block'); return false;" title="{PIC_INFO_TITLE}"><img src="themes/fruity/images/info.gif" width="17" height="17" border="0" align="middle" alt="{PIC_INFO_TITLE}" /></a>
                </td>
                <td align="center" valign="middle" class="navmenu" width="48">
                        <a href="{SLIDESHOW_TGT}" title="{SLIDESHOW_TITLE}"><img src="themes/fruity/images/slideshow.gif" width="17" height="17" border="0" align="middle" alt="{SLIDESHOW_TITLE}" /></a>
                </td>
                <td align="center" valign="middle" class="navmenu" width="100%">
                        {PIC_POS}
                </td>
				<!-- BEGIN report_file_button -->
                <td align="center" valign="middle" class="navmenu" width="48px">
                        <a href="{REPORT_TGT}" title="{REPORT_TITLE}"><img src="images/report.gif" width="16" height="16" border="0" align="center" alt="{REPORT_TITLE}" /></a>
                </td>
<!-- END report_file_button -->
<!-- BEGIN ecard_button -->
                <td align="center" valign="middle" class="navmenu" width="48">
                        <a href="{ECARD_TGT}" title="{ECARD_TITLE}"><img src="themes/fruity/images/ecard.gif" width="17" height="17" border="0" align="middle" alt="{ECARD_TITLE}" /></a>
                </td>
<!-- END ecard_button -->
                <td align="center" valign="middle" class="navmenu" width="48">
                        <a href="{PREV_TGT}" class="navmenu_pic" title="{PREV_TITLE}"><img src="themes/fruity/images/prev.gif" width="17" height="17" border="0" align="middle" alt="{PREV_TITLE}" /></a>
                </td>
                <td align="center" valign="middle" class="navmenu" width="48">
                        <a href="{NEXT_TGT}" class="navmenu_pic" title="{NEXT_TITLE}"><img src="themes/fruity/images/next.gif" width="17" height="17" border="0" align="middle" alt="{NEXT_TITLE}" /></a>
                </td>
        </tr>

EOT;


?>