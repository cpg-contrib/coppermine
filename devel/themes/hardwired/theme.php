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
// This theme has had redundant CORE items removed                           //
// ------------------------------------------------------------------------- //
define('THEME_HAS_RATING_GRAPHICS', 1);
define('THEME_HAS_NAVBAR_GRAPHICS', 1);
define('THEME_IS_XHTML10_TRANSITIONAL',1);  // Remove this if you edit this template until
                                            // you have validated it. See docs/theme.htm.

// HTML template for main menu
$template_sys_menu = <<<EOT

                        <table border="0" cellpadding="0" cellspacing="0">
                                <tr>
<!-- BEGIN my_gallery -->
                                        <td><img name="spacer" src="images/spacer.gif" width="5" height="25" border="0" alt="" /></td>
                                        <td><img name="buttonleftmy" src="themes/hardwired/images/buttonleftmy.gif" width="17" height="25" border="0" alt="" /></td>
                                        <td style="background: url(themes/hardwired/images/buttoncenter.gif);">
                                                <a href="{MY_GAL_TGT}" title="{MY_GAL_TITLE}">{MY_GAL_LNK}</a>
                                        </td>
                                        <td><img name="buttonright" src="themes/hardwired/images/buttonright.gif" width="7" height="25" border="0"  alt="" /></td>
<!-- END my_gallery -->
<!-- BEGIN allow_memberlist -->
                                        <td><img name="spacer" src="images/spacer.gif" width="5" height="25" border="0" alt="" /></td>
                                        <td><img name="buttonleft" src="themes/hardwired/images/buttonleftmemb.gif" width="17" height="25" border="0" alt="" /></td>
                                        <td style="background: url(themes/hardwired/images/buttoncenter.gif);">
                                                <a href="{MEMBERLIST_TGT}" title="{MEMBERLIST_TITLE}">{MEMBERLIST_LNK}</a>
                                        </td>
                                        <td><img name="buttonright" src="themes/hardwired/images/buttonright.gif" width="7" height="25" border="0"  alt="" /></td>
<!-- END allow_memberlist -->
<!-- BEGIN my_profile -->
                                        <td><img name="spacer" src="images/spacer.gif" width="5" height="25" border="0" alt="" /></td>
                                        <td><img name="buttonleft" src="themes/hardwired/images/buttonleft.gif" width="17" height="25" border="0" alt="" /></td>
                                        <td style="background: url(themes/hardwired/images/buttoncenter.gif);">
                                                <a href="{MY_PROF_TGT}" title="{MY_PROF_LNK}">{MY_PROF_LNK}</a>
                                        </td>
                                        <td><img name="buttonright" src="themes/hardwired/images/buttonright.gif" width="7" height="25" border="0"  alt="" /></td>
<!-- END my_profile -->
<!-- BEGIN faq -->
                                        <td><img name="spacer" src="images/spacer.gif" width="5" height="25" border="0" alt="" /></td>
                                        <td><img name="buttonleft" src="themes/hardwired/images/buttonleftfaq.gif" width="17" height="25" border="0" alt="" /></td>
                                        <td style="background: url(themes/hardwired/images/buttoncenter.gif);">
                        <a href="{FAQ_TGT}" title="{FAQ_TITLE}">{FAQ_LNK}</a>
                                        </td>
                                        <td><img name="buttonright" src="themes/hardwired/images/buttonright.gif" width="7" height="25" border="0"  alt="" /></td>
<!-- END faq -->
<!-- BEGIN enter_admin_mode -->
                                        <td><img name="spacer" src="images/spacer.gif" width="5" height="25" border="0" alt="" /></td>
                                        <td><img name="buttonleftad" src="themes/hardwired/images/buttonleftad.gif" width="17" height="25" border="0" alt="" /></td>
                                        <td style="background: url(themes/hardwired/images/buttoncenter.gif);">
                                                <a href="{ADM_MODE_TGT}" title="{ADM_MODE_TITLE}">{ADM_MODE_LNK}</a>
                                        </td>
                                        <td><img name="buttonright" src="themes/hardwired/images/buttonright.gif" width="7" height="25" border="0"  alt="" /></td>
<!-- END enter_admin_mode -->
<!-- BEGIN leave_admin_mode -->
                                        <td><img name="spacer" src="images/spacer.gif" width="5" height="25" border="0" alt="" /></td>
                                        <td><img name="buttonleftad" src="themes/hardwired/images/buttonleftad.gif" width="17" height="25" border="0" alt="" /></td>
                                        <td style="background: url(themes/hardwired/images/buttoncenter.gif);">
                                                <a href="{USR_MODE_TGT}" title="{USR_MODE_TITLE}">{USR_MODE_LNK}</a>
                                        </td>
                                        <td><img name="buttonright" src="themes/hardwired/images/buttonright.gif" width="7" height="25" border="0" alt="" /></td>
<!-- END leave_admin_mode -->
<!-- BEGIN upload_pic -->
                                        <td><img name="spacer" src="images/spacer.gif" width="5" height="25" border="0" alt="" /></td>
                                        <td><img name="buttonleftup" src="themes/hardwired/images/buttonleftup.gif" width="17" height="25" border="0" alt="" /></td>
                                       <td style="background: url(themes/hardwired/images/buttoncenter.gif);">
                                                <a href="{UPL_PIC_TGT}" title="{UPL_PIC_TITLE}">{UPL_PIC_LNK}</a>
                                        </td>
                                        <td><img name="buttonright" src="themes/hardwired/images/buttonright.gif" width="7" height="25" border="0"  alt="" /></td>
<!-- END upload_pic -->
<!-- BEGIN register -->
                                        <td><img name="spacer" src="images/spacer.gif" width="5" height="25" border="0" alt="" /></td>
                                        <td><img name="buttonleft" src="themes/hardwired/images/buttonleft.gif" width="17" height="25" border="0" alt="" /></td>
                                        <td style="background: url(themes/hardwired/images/buttoncenter.gif);">
                                                <a href="{REGISTER_TGT}" title="{REGISTER_TITLE}">{REGISTER_LNK}</a>
                                        </td>
                                        <td><img name="buttonright" src="themes/hardwired/images/buttonright.gif" width="7" height="25" border="0"  alt="" /></td>
<!-- END register -->
<!-- BEGIN login -->
                                        <td><img name="spacer" src="images/spacer.gif" width="5" height="25" border="0" alt="" /></td>
                                        <td><img name="buttonleft" src="themes/hardwired/images/buttonleft.gif" width="17" height="25" border="0" alt="" /></td>
                                       <td style="background: url(themes/hardwired/images/buttoncenter.gif);">
                                                <a href="{LOGIN_TGT}" title="{LOGIN_LNK}">{LOGIN_LNK}</a>
                                        </td>
                                        <td><img name="buttonright" src="themes/hardwired/images/buttonright.gif" width="7" height="25" border="0"  alt="" /></td>
<!-- END login -->
<!-- BEGIN logout -->
                                        <td><img name="spacer" src="images/spacer.gif" width="5" height="25" border="0" alt="" /></td>
                                        <td><img name="buttonleftout" src="themes/hardwired/images/buttonleftout.gif" width="17" height="25" border="0" alt="" /></td>
                                        <td style="background: url(themes/hardwired/images/buttoncenter.gif);">
                                                <a href="{LOGOUT_TGT}" title="{LOGOUT_LNK}">{LOGOUT_LNK}</a>
                                        </td>
                                        <td><img name="buttonright" src="themes/hardwired/images/buttonright.gif" width="7" height="25" border="0" alt="" /></td>
<!-- END logout -->
                                </tr>
                        </table>

EOT;
$template_sub_menu = <<<EOT

                        <table border="0" cellpadding="0" cellspacing="0">
                                <tr>
<!-- BEGIN album_list -->
                                        <td><img name="spacer" src="images/spacer.gif" width="5" height="25" border="0" alt="" /></td>
                                        <td><img name="buttonleft1" src="themes/hardwired/images/buttonleft1.gif" width="7" height="25" border="0" alt="" /></td>
                                        <td style="background: url(themes/hardwired/images/buttoncenter.gif);">
                                                <a href="{ALB_LIST_TGT}" title="{ALB_LIST_TITLE}">{ALB_LIST_LNK}</a>
                                        </td>
                                        <td><img name="buttonright1" src="themes/hardwired/images/buttonright1.gif" width="7" height="25" border="0" alt="" /></td>
<!-- END album_list -->
                                        <td><img name="spacer" src="images/spacer.gif" width="5" height="25" border="0" alt="" /></td>
                                        <td><img name="buttonleft1" src="themes/hardwired/images/buttonleft1.gif" width="7" height="25" border="0" alt="" /></td>
                                       <td style="background: url(themes/hardwired/images/buttoncenter.gif);">
                                                <a href="{LASTUP_TGT}" title="{LASTUP_LNK}">{LASTUP_LNK}</a>
                                        </td>
                                        <td><img name="buttonright1" src="themes/hardwired/images/buttonright1.gif" width="7" height="25" border="0" alt="" /></td>
                                        <td><img name="spacer" src="images/spacer.gif" width="5" height="25" border="0" alt="" /></td>
                                        <td><img name="buttonleft1" src="themes/hardwired/images/buttonleft1.gif" width="7" height="25" border="0" alt="" /></td>
                                       <td style="background: url(themes/hardwired/images/buttoncenter.gif);">
                                                <a href="{LASTCOM_TGT}" title="{LASTCOM_LNK}">{LASTCOM_LNK}</a>
                                        </td>
                                        <td><img name="buttonright1" src="themes/hardwired/images/buttonright1.gif" width="7" height="25" border="0" alt="" /></td>
                                        <td><img name="spacer" src="images/spacer.gif" width="5" height="25" border="0" alt="" /></td>
                                        <td><img name="buttonleft1" src="themes/hardwired/images/buttonleft1.gif" width="7" height="25" border="0" alt="" /></td>
                                        <td style="background: url(themes/hardwired/images/buttoncenter.gif);">
                                                <a href="{TOPN_TGT}" title="{TOPN_LNK}">{TOPN_LNK}</a>
                                        </td>
                                        <td><img name="buttonright1" src="themes/hardwired/images/buttonright1.gif" width="7" height="25" border="0" alt="" /></td>
                                        <td><img name="spacer" src="images/spacer.gif" width="5" height="25" border="0" alt="" /></td>
                                        <td><img name="buttonleft1" src="themes/hardwired/images/buttonleft1.gif" width="7" height="25" border="0" alt="" /></td>
                                        <td style="background: url(themes/hardwired/images/buttoncenter.gif);">
                                                <a href="{TOPRATED_TGT}" title="{TOPRATED_LNK}">{TOPRATED_LNK}</a>
                                        </td>
                                        <td><img name="buttonright1" src="themes/hardwired/images/buttonright1.gif" width="7" height="25" border="0" alt="" /></td>
                                        <td><img name="spacer" src="images/spacer.gif" width="5" height="25" border="0" alt="" /></td>
                                        <td><img name="buttonleft1" src="themes/hardwired/images/buttonleft1.gif" width="7" height="25" border="0" alt="" /></td>
                                        <td style="background: url(themes/hardwired/images/buttoncenter.gif);">
                                                <a href="{FAV_TGT}" title="{FAV_LNK}">{FAV_LNK}</a>
                                        </td>
                                        <td><img name="buttonright1" src="themes/hardwired/images/buttonright1.gif" width="7" height="25" border="0" alt="" /></td>
                                        <td><img name="spacer" src="images/spacer.gif" width="5" height="25" border="0" alt="" /></td>
                                        <td><img name="buttonleft1" src="themes/hardwired/images/buttonleft1.gif" width="7" height="25" border="0" alt="" /></td>
                                        <td style="background: url(themes/hardwired/images/buttoncenter.gif);">
                                                <a href="{SEARCH_TGT}" title="{SEARCH_LNK}">{SEARCH_LNK}</a>
                                        </td>
                                        <td><img name="buttonright1" src="themes/hardwired/images/buttonright1.gif" width="7" height="25" border="0" alt="" /></td>
                                </tr>
                        </table>

EOT;
// HTML template for gallery admin menu
$template_gallery_admin_menu = <<<EOT

                <div align="center">
                <table cellpadding="0" cellspacing="1">
                        <tr>
<!-- BEGIN admin_approval -->
                                <td class="admin_menu" id="admin_menu_anim"><a href="editpics.php?mode=upload_approval" title="{UPL_APP_TITLE}">{UPL_APP_LNK}</a></td>
<!-- END admin_approval -->
                                <td class="admin_menu"><a href="admin.php" title="{ADMIN_TITLE}">{ADMIN_LNK}</a></td>
                                <td class="admin_menu"><a href="catmgr.php" title="{CATEGORIES_TITLE}">{CATEGORIES_LNK}</a></td>
                                <td class="admin_menu"><a href="albmgr.php{CATL}" title="{ALBUMS_TITLE}">{ALBUMS_LNK}</a></td>
                                <td class="admin_menu"><a href="groupmgr.php" title="{GROUPS_TITLE}">{GROUPS_LNK}</a></td>
                                <td class="admin_menu"><a href="usermgr.php" title="{USERS_TITLE}">{USERS_LNK}</a></td>
                                <td class="admin_menu"><a href="banning.php" title="{BAN_TITLE}">{BAN_LNK}</a></td>
                                </tr><tr>
                                <td class="admin_menu"><a href="reviewcom.php" title="{COMMENTS_TITLE}">{COMMENTS_LNK}</a></td>
<!-- BEGIN log_ecards -->
                                <td class="admin_menu"><a href="db_ecard.php" title="{DB_ECARD_TITLE}">{DB_ECARD_LNK}</a></td>
<!-- END log_ecards -->
                                <td class="admin_menu"><a href="picmgr.php" title="{PICTURES_TITLE}">{PICTURES_LNK}</a></td>
                                <td class="admin_menu"><a href="searchnew.php" title="{SEARCHNEW_TITLE}">{SEARCHNEW_LNK}</a></td>
                                <td class="admin_menu"><a href="util.php" title="{UTIL_TITLE}">{UTIL_LNK}</a></td>
                                <td class="admin_menu"><a href="profile.php?op=edit_profile" title="{MY_PROF_TITLE}">{MY_PROF_LNK}</a></td>
                        </tr>
                </table>
                </div>
EOT;



?>