<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2008 Dev Team
  v1.1 originally written by Gregory DEMAR

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 3
  as published by the Free Software Foundation.

  ********************************************
  Coppermine version: 1.5.0
  $HeadURL$
  $Revision: 4323 $
  $LastChangedBy: nibbler999 $
  $Date: 2008-03-09 03:00:26 +0530 (Sun, 09 Mar 2008) $
**********************************************/

// ------------------------------------------------------------------------- //
// This theme has all CORE items that are available.                         //
// Do NOT copy the entire contents of this theme into your custom theme,     //
// but only the sections you want to see changed - this will make ugrading   //
// easier and results in slightly better performance as well.                //
// The individual sections are marked accordingly with                       //
      /***********************************
      ** Section <<<SECTIONNAME>>> - START
      ***********************************/
      // actual code here
      /***********************************
      ** Section <<<SECTIONNAME>>> - END
      ***********************************/
// Copy the whole section into your custom theme, then modify it as you see  //
// fit.                                                                      //
// ------------------------------------------------------------------------- //


// The following terms can be defined in theme.php
// ('THEME_HAS_RATING_GRAPHICS', 1) : The location for the ratings graphics will
//    be directed to the themes images folder.
//('THEME_HAS_NAVBAR_GRAPHICS', 1); : The location for the navbar graphics will
//    be directed to the themes images folder.
//    Back to thumbnails   : images/thumbnails.gif
//    Picture Information  : images/info.gif
//    Slideshow            : images/slideshow.gif
//    Report to admin      : images/report.gif
//    Ecard                : images/ecard.gif
//    Previous             : images/prev.gif
//    Next                 : images/next.gif
// ('THEME_HAS_FILM_STRIP_GRAPHIC', 1) : The location for the film strip graphics will
//    be directed to the themes images folder.
//    tile                 : images/tile.gif
// ('THEME_HAS_FILM_STRIP_GRAPHICS', 1) : The location for the film strip graphics will
//    be directed to the themes images folder.
//    tile on the top      : images/tile1.gif
//    tile on the bottom   : images/tile2.gif
//  ('THEME_HAS_NO_SYS_MENU_BUTTONS', 1) : When present the system won't attempt to replace {BUTTONS} in the SYS_MENU template
//    The entire block needs to be present like in Coppermine 1.3 themes
//  ('THEME_HAS_NO_SUB_MENU_BUTTONS', 1) When present the system won't attempt to replace {BUTTONS} in the SUB_MENU template
//    The entire block needs to be present like in Coppermine 1.3 themes
//  ('THEME_IS_XHTML10_TRANSITIONAL',1) : If theme is defined as XHTML10_TRANSITIONAL the VANITY footer will be enabled
//    if the theme has a {VANITY} token in its template.html. Don't enable this if you have modified the code! See the
//    docs/theme.html documentation for validation methodology.
// ('THEME_HAS_SIDEBAR_GRAPHICS', 1) : The location for the sidebar graphics that compose the tree menu will
//    be directed to the themes images folder, subfolder 'sidebar', i.e. themes/yourtheme/images/sidebar/.
//    Gallery root                                                             : images/sidebar/base.gif
//    Blank image                                                              : images/sidebar/empty.gif
//    Category icon, collapsed state                                           : images/sidebar/folder.gif
//    Category icon, expanded state                                            : images/sidebar/folderopen.gif
//    Line between parent folder, child folder and next folder                 : images/sidebar/join.gif
//    Line between parent folder and child folder                              : images/sidebar/joinbottom.gif
//    Line between parent and next folder                                      : images/sidebar/line.gif
//    Line between parent folder, child folder and next folder, expanded state : images/sidebar/minus.gif
//    Line between parent folder and child folder, expanded state              : images/sidebar/minusbottom.gif
//    Expanded state                                                           : images/sidebar/nolines_minus.gif
//    Collapsed state                                                          : images/sidebar/nolines_plus.gif
//    Album icon                                                               : images/sidebar/page.gif
//    Line between parent folder, child folder and next folder, collapsed state: images/sidebar/plus.gif
//    Line between parent folder and child folder, collapsed state             : images/sidebar/plusbottom.gif
//    Reload the sidebar                                                       : images/sidebar/reload.gif
//    Search icon                                                              : images/sidebar/search.gif

/******************************************************************************
** Section <<<assemble_template_buttons>>> - START
******************************************************************************/
// Creates buttons from a template using an array of tokens
// this function is used in this file it needs to be declared before being called.
function assemble_template_buttons($template_buttons,$buttons) {
    $counter=0;
    $output='';

    foreach ($buttons as $button)  {
      if (isset($button[4])) {
         $spacer=$button[4];
      } else {
      $spacer='';
      }

        $params = array(
            '{SPACER}'     => $spacer,
            '{BLOCK_ID}'   => $button[3],
            '{HREF_TGT}'   => $button[2],
            '{HREF_TITLE}' => $button[1],
            '{HREF_LNK}'   => $button[0]
            );
        $output.=template_eval($template_buttons, $params);
    }
    return $output;
}
/******************************************************************************
** Section <<<assemble_template_buttons>>> - END
******************************************************************************/

/******************************************************************************
** Section <<<addbutton>>> - START
******************************************************************************/
// Creates an array of tokens to be used with function assemble_template_buttons
// this function is used in this file it needs to be declared before being called.
function addbutton(&$menu,$href_lnk,$href_title,$href_tgt,$block_id,$spacer) {
  $menu[]=array($href_lnk,$href_title,$href_tgt,$block_id,$spacer);
}
/******************************************************************************
** Section <<<addbutton>>> - END
******************************************************************************/

/******************************************************************************
** Section <<<$template_sys_menu>>> - START
******************************************************************************/
// HTML template for sys_menu
$template_sys_menu = <<<EOT
          {BUTTONS}
EOT;
/******************************************************************************
** Section <<<$template_sys_menu>>> - END
******************************************************************************/

/******************************************************************************
** Section <<<$template_sub_menu>>> - START
******************************************************************************/
// HTML template for sub_menu
$template_sub_menu = $template_sys_menu;

if (!defined('THEME_HAS_NO_SYS_MENU_BUTTONS')) {

  // HTML template for template sys_menu spacer
  $template_sys_menu_spacer ="::";

  // HTML template for template sys_menu buttons
  $template_sys_menu_button = <<<EOT
  <!-- BEGIN {BLOCK_ID} -->
        <a href="{HREF_TGT}" title="{HREF_TITLE}">{HREF_LNK}</a> {SPACER}
  <!-- END {BLOCK_ID} -->
EOT;

  // HTML template for template sys_menu buttons
    // {HREF_LNK}{HREF_TITLE}{HREF_TGT}{BLOCK_ID}{SPACER}
    addbutton($sys_menu_buttons,'{HOME_LNK}','{HOME_TITLE}','{HOME_TGT}','home',$template_sys_menu_spacer);
    addbutton($sys_menu_buttons,'{CONTACT_LNK}','{CONTACT_TITLE}','{CONTACT_TGT}','contact',$template_sys_menu_spacer);
    addbutton($sys_menu_buttons,'{MY_GAL_LNK}','{MY_GAL_TITLE}','{MY_GAL_TGT}','my_gallery',$template_sys_menu_spacer);
    addbutton($sys_menu_buttons,'{MEMBERLIST_LNK}','{MEMBERLIST_TITLE}','{MEMBERLIST_TGT}','allow_memberlist',$template_sys_menu_spacer);
    if (is_array($USER_DATA['allowed_albums']) && count($USER_DATA['allowed_albums'])) {
      addbutton($sys_menu_buttons,'{UPL_APP_LNK}','{UPL_APP_TITLE}','{UPL_APP_TGT}','upload_approval',$template_sys_menu_spacer);
    }
    addbutton($sys_menu_buttons,'{MY_PROF_LNK}','{MY_PROF_TITLE}','{MY_PROF_TGT}','my_profile',$template_sys_menu_spacer);
    addbutton($sys_menu_buttons,'{ADM_MODE_LNK}','{ADM_MODE_TITLE}','{ADM_MODE_TGT}','enter_admin_mode',$template_sys_menu_spacer);
    addbutton($sys_menu_buttons,'{USR_MODE_LNK}','{USR_MODE_TITLE}','{USR_MODE_TGT}','leave_admin_mode',$template_sys_menu_spacer);
    addbutton($sys_menu_buttons,'{SIDEBAR_LNK}','{SIDEBAR_TITLE}','{SIDEBAR_TGT}','sidebar',$template_sys_menu_spacer);
    addbutton($sys_menu_buttons,'{UPL_PIC_LNK}','{UPL_PIC_TITLE}','{UPL_PIC_TGT}','upload_pic',$template_sys_menu_spacer);
    addbutton($sys_menu_buttons,'{REGISTER_LNK}','{REGISTER_TITLE}','{REGISTER_TGT}','register',$template_sys_menu_spacer);
    addbutton($sys_menu_buttons,'{FAQ_LNK}','{FAQ_TITLE}','{FAQ_TGT}','faq',$template_sys_menu_spacer);
    addbutton($sys_menu_buttons,'{LOGIN_LNK}','{LOGIN_TITLE}','{LOGIN_TGT}','login','');
    addbutton($sys_menu_buttons,'{LOGOUT_LNK}','{LOGOUT_TITLE}','{LOGOUT_TGT}','logout','');
    // Login and Logout don't have a spacer as only one is shown, and either would be the last option.

  $params = array('{BUTTONS}' => assemble_template_buttons($template_sys_menu_button,$sys_menu_buttons));
  $template_sys_menu = template_eval($template_sys_menu,$params);
}
/******************************************************************************
** Section <<<$template_sub_menu>>> - END
******************************************************************************/

/******************************************************************************
** Section <<<THEME_HAS_NO_SUB_MENU_BUTTONS>>> - START
******************************************************************************/
if (!defined('THEME_HAS_NO_SUB_MENU_BUTTONS')) {

  // HTML template for template sub_menu spacer
  $template_sub_menu_spacer = $template_sys_menu_spacer;

  // HTML template for template sub_menu buttons
  $template_sub_menu_button= $template_sys_menu_button;

  // HTML template for template sub_menu buttons
    // {HREF_LNK}{HREF_TITLE}{HREF_TGT}{BLOCK_ID}{SPACER}
    addbutton($sub_menu_buttons,'{CUSTOM_LNK_LNK}','{CUSTOM_LNK_TITLE}','{CUSTOM_LNK_TGT}','custom_link',$template_sub_menu_spacer);
    addbutton($sub_menu_buttons,'{ALB_LIST_LNK}','{ALB_LIST_TITLE}','{ALB_LIST_TGT}','album_list',$template_sub_menu_spacer);
    addbutton($sub_menu_buttons,'{LASTUP_LNK}','{LASTUP_TITLE}','{LASTUP_TGT}','lastup',$template_sub_menu_spacer);
    addbutton($sub_menu_buttons,'{LASTCOM_LNK}','{LASTCOM_TITLE}','{LASTCOM_TGT}','lastcom',$template_sub_menu_spacer);
    addbutton($sub_menu_buttons,'{TOPN_LNK}','{TOPN_TITLE}','{TOPN_TGT}','topn',$template_sub_menu_spacer);
    addbutton($sub_menu_buttons,'{TOPRATED_LNK}','{TOPRATED_TITLE}','{TOPRATED_TGT}','toprated',$template_sub_menu_spacer);
    addbutton($sub_menu_buttons,'{FAV_LNK}','{FAV_TITLE}','{FAV_TGT}','favpics',$template_sub_menu_spacer);
    if ($CONFIG['browse_by_date'] != 0) {
    addbutton($sub_menu_buttons, '{BROWSEBYDATE_LNK}', '{BROWSEBYDATE_TITLE}', '{BROWSEBYDATE_TGT}', 'brose_by_date', '$template_sub_menu_spacer');
    }
    addbutton($sub_menu_buttons,'{SEARCH_LNK}','{SEARCH_TITLE}','{SEARCH_TGT}','search','');

  $params = array('{BUTTONS}' => assemble_template_buttons($template_sub_menu_button,$sub_menu_buttons));
  $template_sub_menu = template_eval($template_sub_menu,$params);
}
/******************************************************************************
** Section <<<THEME_HAS_NO_SUB_MENU_BUTTONS>>> - END
******************************************************************************/

/******************************************************************************
** Section <<<$template_gallery_admin_menu>>> - START
******************************************************************************/
// HTML template for gallery admin menu
$template_gallery_admin_menu = <<<EOT

                <div class="admin_menu_wrapper">
                            <!-- BEGIN admin_approval -->
                                <div class="admin_menu admin_float" id="admin_menu_anim"><a href="editpics.php?mode=upload_approval" title="{UPL_APP_TITLE}">{UPL_APP_LNK}</a></div>
                            <!-- END admin_approval -->
                                <div class="admin_menu admin_float"><a href="admin.php" title="{ADMIN_TITLE}">{ADMIN_LNK}</a></div>
                                <div class="admin_menu admin_float"><a href="catmgr.php" title="{CATEGORIES_TITLE}">{CATEGORIES_LNK}</a></div>
                                <div class="admin_menu admin_float"><a href="albmgr.php{CATL}" title="{ALBUMS_TITLE}">{ALBUMS_LNK}</a></div>
                                <div class="admin_menu admin_float"><a href="groupmgr.php" title="{GROUPS_TITLE}">{GROUPS_LNK}</a></div>
                                <div class="admin_menu admin_float"><a href="usermgr.php" title="{USERS_TITLE}">{USERS_LNK}</a></div>
                                <div class="admin_menu admin_float"><a href="banning.php" title="{BAN_TITLE}">{BAN_LNK}</a></div>
                                <div class="admin_menu admin_float"><a href="reviewcom.php" title="{COMMENTS_TITLE}">{COMMENTS_LNK}</a></div>
                            <!-- BEGIN log_ecards -->
                                <div class="admin_menu admin_float"><a href="db_ecard.php" title="{DB_ECARD_TITLE}">{DB_ECARD_LNK}</a></div>
                            <!-- END log_ecards -->
                                <div class="admin_menu admin_float"><a href="picmgr.php" title="{PICTURES_TITLE}">{PICTURES_LNK}</a></div>
                                <div class="admin_menu admin_float"><a href="searchnew.php" title="{SEARCHNEW_TITLE}">{SEARCHNEW_LNK}</a></div>
                                <div class="admin_menu admin_float"><a href="util.php" title="{UTIL_TITLE}">{UTIL_LNK}</a></div>
                                <div class="admin_menu admin_float"><a href="profile.php?op=edit_profile" title="{MY_PROF_TITLE}">{MY_PROF_LNK}</a></div>
                            <!-- BEGIN documentation -->
                                <div class="admin_menu admin_float"><a href="{DOCUMENTATION_HREF}" title="{DOCUMENTATION_TITLE}">{DOCUMENTATION_LNK}</a></div>
                            <!-- END documentation -->
                            <!-- BEGIN plugin_manager -->
                                <div class="admin_menu admin_float"><a href="pluginmgr.php" title="{PLUGINMGR_TITLE}">{PLUGINMGR_LNK}</a></div>
                            <!-- END plugin_manager -->
                            <!-- BEGIN bridge_manager -->
                                <div class="admin_menu admin_float"><a href="bridgemgr.php" title="{BRIDGEMGR_TITLE}">{BRIDGEMGR_LNK}</a></div>
                            <!-- END bridge_manager -->
                            <!-- BEGIN php_info -->
                                <div class="admin_menu admin_float"><a href="phpinfo.php" title="{PHPINFO_TITLE}">{PHPINFO_LNK}</a></div>
                            <!-- END php_info -->
                            <!-- BEGIN update_database -->
                                <div class="admin_menu admin_float"><a href="update.php" title="{UPDATE_DATABASE_TITLE}">{UPDATE_DATABASE_LNK}</a></div>
                            <!-- END update_database -->
                            <!-- BEGIN view_log_files -->
                                <div class="admin_menu admin_float"><a href="viewlog.php" title="{VIEW_LOG_FILES_TITLE}">{VIEW_LOG_FILES_LNK}</a></div>
                            <!-- END view_log_files -->
                            <!-- BEGIN check_versions -->
                                <div class="admin_menu admin_float"><a href="versioncheck.php" title="{CHECK_VERSIONS_TITLE}">{CHECK_VERSIONS_LNK}</a></div>
                            <!-- END check_versions -->
                            <!-- BEGIN overall_stats -->
                                <div class="admin_menu admin_float"><a href="stat_details.php?type=hits&amp;sort=sdate&amp;dir=&amp;sdate=1&amp;ip=1&amp;search_phrase=0&amp;referer=0&amp;browser=1&amp;os=1&amp;mode=fullscreen&amp;page=1&amp;amount=50" title="{OVERALL_STATS_TITLE}">{OVERALL_STATS_LNK}</a></div>
                            <!-- END overall_stats -->
                            <!-- BEGIN keyword_manager -->
                                <div class="admin_menu admin_float"><a href="keywordmgr.php" title="{KEYWORDMGR_TITLE}">{KEYWORDMGR_LNK}</a></div>
                            <!-- END keyword_manager -->
                            <!-- BEGIN exif_manager -->
                                <div class="admin_menu admin_float"><a href="exifmgr.php" title="{EXIFMGR_TITLE}">{EXIFMGR_LNK}</a></div>
                            <!-- END exif_manager -->
                            <!-- BEGIN show_news -->
                                <div class="admin_menu admin_float"><a href="mode.php?what=news&amp;referer=$REFERER" title="{SHOWNEWS_TITLE}">{SHOWNEWS_LNK}</a></div>
                            <!-- END show_news -->
		                          <div class="admin_menu admin_float"><a href="export.php" title="{EXPORT_TITLE}">{EXPORT_LNK}</a></div>
                <div style="clear:left;">
                </div>
              </div>
EOT;
/******************************************************************************
** Section <<<$template_gallery_admin_menu>>> - END
******************************************************************************/

/******************************************************************************
** Section <<<$template_user_admin_menu>>> - START
******************************************************************************/
// HTML template for user admin menu
$template_user_admin_menu = <<<EOT

                <div align="center">
                <table cellpadding="0" cellspacing="1">
                        <tr>
                                <td class="admin_menu"><a href="albmgr.php" title="{ALBMGR_TITLE}">{ALBMGR_LNK}</a></td>
                                <td class="admin_menu"><a href="modifyalb.php" title="{MODIFYALB_TITLE}">{MODIFYALB_LNK}</a></td>
                                <td class="admin_menu"><a href="profile.php?op=edit_profile" title="{MY_PROF_TITLE}">{MY_PROF_LNK}</a></td>
                                <td class="admin_menu"><a href="picmgr.php" title="{PICTURES_TITLE}">{PICTURES_LNK}</a></td>
                        </tr>
                </table>
                </div>

EOT;
/******************************************************************************
** Section <<<$template_user_admin_menu>>> - END
******************************************************************************/

/******************************************************************************
** Section <<<$template_cat_list>>> - START
******************************************************************************/
// HTML template for the category list
$template_cat_list = <<<EOT
<!-- BEGIN header -->
        <tr>
                <td class="tableh1" width="80%" align="left">{CATEGORY}</td>
                <td class="tableh1" width="10%" align="center">{ALBUMS}</td>
                <td class="tableh1" width="10%" align="center">{PICTURES}</td>
        </tr>
<!-- END header -->
<!-- BEGIN catrow_noalb -->
        <tr>
                <td class="catrow_noalb" colspan="3"><table border="0"><tr><td align="left">{CAT_THUMB}</td><td align="left"><span class="catlink">{CAT_TITLE}</span>{CAT_DESC}</td></tr></table></td>
        </tr>
<!-- END catrow_noalb -->
<!-- BEGIN catrow -->
        <tr>
                <td class="catrow" align="left"><table border="0"><tr><td>{CAT_THUMB}</td><td><span class="catlink">{CAT_TITLE}</span>{CAT_DESC}</td></tr></table></td>
                <td class="catrow" align="center">{ALB_COUNT}</td>
                <td class="catrow" align="center">{PIC_COUNT}</td>
        </tr>
        <tr>
            <td class="tableb tableb_alternate tableb tableb_alternate_alternate" colspan="3">{CAT_ALBUMS}</td>
        </tr>
<!-- END catrow -->
<!-- BEGIN footer -->
        <tr>
                <td colspan="3" class="tableh1" align="center"><span class="statlink">{STATISTICS}</span></td>
        </tr>
<!-- END footer -->
<!-- BEGIN spacer -->
        <img src="images/spacer.gif" width="1" height="7" border="" alt="" /><br />
<!-- END spacer -->

EOT;
/******************************************************************************
** Section <<<$template_cat_list>>> - END
******************************************************************************/

/******************************************************************************
** Section <<<$template_breadcrumb>>> - START
******************************************************************************/
// HTML template for the breadcrumb
$template_breadcrumb = <<<EOT
<!-- BEGIN breadcrumb -->
        <tr>
                <td colspan="3" align="left" class="tableh1"><span class="statlink">{BREADCRUMB}</span></td>
        </tr>
<!-- END breadcrumb -->
<!-- BEGIN breadcrumb_user_gal -->
        <tr>
                <td colspan="3" class="tableh1">
                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                <tr>
                        <td align="left"><span class="statlink">{BREADCRUMB}</span></td>
                        <td align="right"><span class="statlink">{STATISTICS}</span></td>
                </tr>
                </table>
                </td>
        </tr>
<!-- END breadcrumb_user_gal -->

EOT;
/******************************************************************************
** Section <<<$template_breadcrumb>>> - END
******************************************************************************/

/******************************************************************************
** Section <<<$template_album_list>>> - START
******************************************************************************/
// HTML template for the album list
$template_album_list = <<<EOT

<!-- BEGIN stat_row -->
        <tr>
                <td colspan="{COLUMNS}" class="tableh1" align="center"><span class="statlink">{STATISTICS}</span></td>
        </tr>
<!-- END stat_row -->
<!-- BEGIN header -->
        <tr class="tableb tableb_alternate tableb tableb_alternate_alternate_compact">
<!-- END header -->
<!-- BEGIN album_cell -->
        <td width="{COL_WIDTH}%" valign="top">
        <table width="100%" cellspacing="0" cellpadding="0">
        <tr>
                <td colspan="3" height="1" align="left" valign="top" class="tableh2">
                        <span class="alblink"><a href="{ALB_LINK_TGT}">{ALBUM_TITLE}</a></span>
                </td>
        </tr>
        <tr>
                <td colspan="3">
                        <img src="images/spacer.gif" width="1" height="1" border="0" alt="" /><br />
                </td>
        </tr>
        <tr>
                <td align="center" valign="middle" class="thumbnails">
                        <img src="images/spacer.gif" width="{THUMB_CELL_WIDTH}" height="1" class="image" style="margin-top: 0px; margin-bottom: 0px; border: none;" alt="" /><br />
                        <a href="{ALB_LINK_TGT}" class="albums">{ALB_LINK_PIC}<br /></a>
                </td>
                <td>
                        <img src="images/spacer.gif" width="1" height="1" border="0" alt="" />
                </td>
                <td width="100%" valign="top" align="left" class="tableb tableb_alternate tableb tableb_alternate_alternate_compact">
                        {ADMIN_MENU}
                        <p>{ALB_DESC}</p>
                        <p class="album_stat">{ALB_INFOS}<br />{ALB_HITS}</p>
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
                <td width="100%" valign="top" class="tableb tableb_alternate tableb tableb_alternate_alternate_compact">
                    <div class="thumbnails" style="background-color:transparent"><img src="images/spacer.gif" width="1" height="{SPACER}" border="0" class="image" style="border:0;margin-top:1px;margin-bottom:0" alt="" /></div>
                </td>
        </tr>
        </table>
        </td>
<!-- END empty_cell -->
<!-- BEGIN row_separator -->
        </tr>
        <tr class="tableb tableb_alternate tableb tableb_alternate_alternate_compact">
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
/******************************************************************************
** Section <<<$template_album_list>>> - END
******************************************************************************/

/******************************************************************************
** Section <<<$template_film_strip>>> - START
******************************************************************************/
// HTML template for filmstrip display
$template_film_strip = <<<EOT

        <tr>
         <td valign="top" style="background-image: url({TILE1});"><img src="{TILE1}" alt="" border="0" /></td>
        </tr>
        <tr>
        <td valign="bottom" class="thumbnails" align="center" style="{THUMB_TD_STYLE}">
          <table width="100%" cellspacing="0" cellpadding="3" border="0">
              <tr>
                 <td width="50%"><span id="filmstrip_prev_link" style="display: none;">{PREV_LINK}</span></td>
                 {THUMB_STRIP}
                 <td width="50%" align="right"><span id="filmstrip_next_link" style="display: none;">{NEXT_LINK}</a></span></td>
              </tr>
          </table>
        </td>
        </tr>
        <tr>
         <td valign="top" style="background-image: url({TILE2});"><img src="{TILE2}" alt="" border="0" /></td>
        </tr>
<!-- BEGIN thumb_cell -->
                <td valign="top" align="center">
                                        <a href="{LINK_TGT}">{THUMB}</a>
                                        {CAPTION}
                                        {ADMIN_MENU}
                </td>
<!-- END thumb_cell -->
<!-- BEGIN empty_cell -->
                <td valign="top" align="center" >&nbsp;</td>
<!-- END empty_cell -->

EOT;
/******************************************************************************
** Section <<<$template_film_strip>>> - END
******************************************************************************/

/******************************************************************************
** Section <<<$template_album_list_cat>>> - START
******************************************************************************/
// HTML template for the album list
$template_album_list_cat = <<<EOT

<!-- BEGIN c_stat_row -->
        <tr>
                <td colspan="{COLUMNS}" class="tableh1" align="center"><span class="statlink">{STATISTICS}</span></td>
        </tr>
<!-- END c_stat_row -->
<!-- BEGIN c_header -->
        <tr class="tableb tableb_alternate tableb tableb_alternate_alternate_compact">
<!-- END c_header -->
<!-- BEGIN c_album_cell -->
        <td width="{COL_WIDTH}%" valign="top">
        <table width="100%" cellspacing="0" cellpadding="0">
        <tr>
                <td colspan="3" height="1" valign="top" class="tableh2">
                        <span class="alblink"><a href="{ALB_LINK_TGT}">{ALBUM_TITLE}</a></span>
                </td>
        </tr>
        <tr>
                <td colspan="3">
                        <img src="images/spacer.gif" width="1" height="1" border="0" alt="" /><br />
                </td>
        </tr>
        <tr>
                <td align="center" valign="middle" class="thumbnails">
                        <img src="images/spacer.gif" width="{THUMB_CELL_WIDTH}" height="1" class="image" style="margin-top: 0px; margin-bottom: 0px; border: none;" alt="" /><br />
                        <a href="{ALB_LINK_TGT}" class="albums">{ALB_LINK_PIC}<br /></a>
                </td>
                <td>
                        <img src="images/spacer.gif" width="1" height="1" border="0" alt="" />
                </td>
                <td width="100%" valign="top" class="tableb tableb_alternate tableb tableb_alternate_alternate_compact">
                        {ADMIN_MENU}
                        <p>{ALB_DESC}</p>
                        <p class="album_stat">{ALB_INFOS}<br />{ALB_HITS}</p>
                </td>
        </tr>
        </table>
        </td>
<!-- END c_album_cell -->
<!-- BEGIN c_empty_cell -->
        <td width="{COL_WIDTH}%" valign="top">
        <table width="100%" cellspacing="0" cellpadding="0" >
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
                <td width="100%" valign="top" class="tableb tableb_alternate tableb tableb_alternate_alternate_compact" >
                      <div class="thumbnails" style="background-color:transparent"><img src="images/spacer.gif" width="1" height="{SPACER}" border="0" class="image" style="border:0;margin-top:1px;margin-bottom:0" alt="" /></div>
                </td>
        </tr>
        </table>
        </td>
<!-- END c_empty_cell -->
<!-- BEGIN c_row_separator -->
        </tr>
        <tr class="tableb tableb_alternate tableb tableb_alternate_alternate_compact">
<!-- END c_row_separator -->
<!-- BEGIN c_footer -->
        </tr>
<!-- END c_footer -->
<!-- BEGIN c_tabs -->
        <tr>
                <td colspan="{COLUMNS}" style="padding: 0px;">
                        <table width="100%" cellspacing="0" cellpadding="0">
                                <tr>
                                       {TABS}
                                </tr>
                        </table>
                </td>
        </tr>
<!-- END c_tabs -->
<!-- BEGIN c_spacer -->
        <img src="images/spacer.gif" width="1" height="7" border="" alt="" /><br />
<!-- END c_spacer -->

EOT;
/******************************************************************************
** Section <<<$template_album_list_cat>>> - END
******************************************************************************/

/******************************************************************************
** Section <<<$template_album_admin_menu>>> - START
******************************************************************************/
// HTML template for the ALBUM admin menu displayed in the album list
$template_album_admin_menu = <<<EOT
        <table border="0" cellpadding="0" cellspacing="1">
                <tr>
                        <td align="center" valign="middle" class="admin_menu">
                                <a href="delete.php?id={ALBUM_ID}&amp;what=album"  class="adm_menu" onclick="return confirm('{CONFIRM_DELETE}');">{DELETE}</a>
                        </td>
                        <td align="center" valign="middle" class="admin_menu">
                                <a href="modifyalb.php?album={ALBUM_ID}"  class="adm_menu">{MODIFY}</a>
                        </td>
                        <td align="center" valign="middle" class="admin_menu">
                                <a href="editpics.php?album={ALBUM_ID}"  class="adm_menu">{EDIT_PICS}</a>
                        </td>
                </tr>
        </table>

EOT;
/******************************************************************************
** Section <<<$template_album_admin_menu>>> - END
******************************************************************************/

/******************************************************************************
** Section <<<$template_thumb_view_title_row>>> - START
******************************************************************************/
// HTML template for title row of the thumbnail view (album title + sort options)
$template_thumb_view_title_row = <<<EOT

                        <table width="100%" cellpadding="0" cellspacing="0">
                        <tr>
                                <td width="100%" class="statlink"><h2>{ALBUM_NAME}</h2></td>
                                <td><img src="images/spacer.gif" width="1" alt="" /></td>
                                <td class="sortorder_cell">
                                        <table cellpadding="0" cellspacing="0">
                                        <tr>
                                                <td class="sortorder_options">{TITLE}</td>
                                                <td class="sortorder_options"><span class="statlink"><a href="thumbnails.php?album={AID}&amp;page={PAGE}&amp;sort=ta" title="{SORT_TA}">&nbsp;+&nbsp;</a></span></td>
                                                <td class="sortorder_options"><span class="statlink"><a href="thumbnails.php?album={AID}&amp;page={PAGE}&amp;sort=td" title="{SORT_TD}">&nbsp;-&nbsp;</a></span></td>
                                        </tr>
                                        <tr>
                                                <td class="sortorder_options">{NAME}</td>
                                                <td class="sortorder_options"><span class="statlink"><a href="thumbnails.php?album={AID}&amp;page={PAGE}&amp;sort=na" title="{SORT_NA}">&nbsp;+&nbsp;</a></span></td>
                                                <td class="sortorder_options"><span class="statlink"><a href="thumbnails.php?album={AID}&amp;page={PAGE}&amp;sort=nd" title="{SORT_ND}">&nbsp;-&nbsp;</a></span></td>
                                        </tr>
                                        <tr>
                                                <td class="sortorder_options">{DATE}</td>
                                                <td class="sortorder_options"><span class="statlink"><a href="thumbnails.php?album={AID}&amp;page={PAGE}&amp;sort=da" title="{SORT_DA}">&nbsp;+&nbsp;</a></span></td>
                                                <td class="sortorder_options"><span class="statlink"><a href="thumbnails.php?album={AID}&amp;page={PAGE}&amp;sort=dd" title="{SORT_DD}">&nbsp;-&nbsp;</a></span></td>
                                        </tr>
                                        <tr>
                                                <td class="sortorder_options">{POSITION}</td>
                                                <td class="sortorder_options"><span class="statlink"><a href="thumbnails.php?album={AID}&amp;page={PAGE}&amp;sort=pa" title="{SORT_PA}">&nbsp;+&nbsp;</a></span></td>
                                                <td class="sortorder_options"><span class="statlink"><a href="thumbnails.php?album={AID}&amp;page={PAGE}&amp;sort=pd" title="{SORT_PD}">&nbsp;-&nbsp;</a></span></td>
                                        </tr>
                                        </table>
                                </td>
                        </tr>
                        </table>

EOT;
/******************************************************************************
** Section <<<$template_thumb_view_title_row>>> - END
******************************************************************************/

/******************************************************************************
** Section <<<$template_fav_thumb_view_title_row>>> - START
******************************************************************************/
// HTML template for title row of the fav thumbnail view (album title + download)
$template_fav_thumb_view_title_row = <<<EOT

                        <table width="100%" cellpadding="0" cellspacing="0">
                        <tr>
                                <td width="100%" class="statlink"><h2>{ALBUM_NAME}</h2></td>
                                <td><img src="images/spacer.gif" width="1" border="0" alt="" /></td>
                                <td class="sortorder_cell">
                                        <table cellpadding="0" cellspacing="0">
                                                <tr>
                                                        <td class="sortorder_options"><span class="statlink"><a href="zipdownload.php">{DOWNLOAD_ZIP}</a></span></td>
                                                </tr>
                                                </table>
                                </td>
                        </tr>
                        </table>

EOT;
/******************************************************************************
** Section <<<$template_fav_thumb_view_title_row>>> - END
******************************************************************************/

/******************************************************************************
** Section <<<$template_thumbnail_view>>> - START
******************************************************************************/
// HTML template for thumbnails display
$template_thumbnail_view = <<<EOT

<!-- BEGIN header -->
        <tr>
<!-- END header -->
<!-- BEGIN thumb_cell -->
        <td valign="top" class="thumbnails" width ="{CELL_WIDTH}" align="center">
                <table width="100%" cellpadding="0" cellspacing="0">
                        <tr>
                                <td align="center">
                                        <a href="{LINK_TGT}">{THUMB}<br /></a>
                                        {CAPTION}
                                        {ADMIN_MENU}
                                </td>
                        </tr>
                </table>
        </td>
<!-- END thumb_cell -->
<!-- BEGIN empty_cell -->
                <td valign="top" class="thumbnails" align="center">&nbsp;</td>
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
                <td colspan="{THUMB_COLS}" style="padding: 0px;">
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
/******************************************************************************
** Section <<<$template_thumbnail_view>>> - END
******************************************************************************/

/******************************************************************************
** Section <<<$template_no_img_to_display>>> - START
******************************************************************************/
// HTML template for the thumbnail view when there is no picture to show
$template_no_img_to_display = <<<EOT
        <tr>
                <td class="tableb tableb_alternate tableb tableb_alternate_alternate" height="200" align="center">
                        <span class="cpg_user_message">{TEXT}</span>
                </td>
        </tr>
<!-- BEGIN spacer -->
        <img src="images/spacer.gif" width="1" height="7" border="" alt="" /><br />
<!-- END spacer -->

EOT;
/******************************************************************************
** Section <<<$template_no_img_to_display>>> - END
******************************************************************************/

/******************************************************************************
** Section <<<$template_user_list_info_box>>> - START
******************************************************************************/
// HTML template for the USER info box in the user list view
$template_user_list_info_box = <<<EOT

        <table cellspacing="1" cellpadding="0" border="0" width="100%" class="user_thumb_infobox">
                <tr>
                        <th><a href="profile.php?uid={USER_ID}">{USER_NAME}</a></th>
                </tr>
                <tr>
                        <td>{ALBUMS}</td>
                </tr>
                <tr>
                        <td>{PICTURES}</td>
                </tr>
        </table>

EOT;
/******************************************************************************
** Section <<<$template_user_list_info_box>>> - END
******************************************************************************/

/******************************************************************************
** Section <<<$template_img_navbar>>> - START
******************************************************************************/
// HTML template for the image navigation bar
$template_img_navbar = <<<EOT

        <tr>
                <td align="center" valign="middle" class="navmenu" width="48"><a name="top_display_media"></a>
                        <a href="{THUMB_TGT}" class="navmenu_pic" title="{THUMB_TITLE}"><img src="{LOCATION}images/thumbnails.gif" align="middle" border="0" alt="{THUMB_TITLE}" /></a>
                </td>
<!-- BEGIN pic_info_button -->
                        <script type="text/javascript">
                          document.write('<td align="center" valign="middle" class="navmenu" width="48">');
                          document.write('<a href="javascript:;" class="navmenu_pic" onclick="blocking(\'picinfo\',\'yes\', \'block\'); return false;" title="{PIC_INFO_TITLE}" rel="nofollow"><img src="{LOCATION}images/info.gif" border="0" align="middle" alt="{PIC_INFO_TITLE}" /></a>');
                          document.write('</td>');
                        </script>
<!-- END pic_info_button -->
<!-- BEGIN slideshow_button -->
                        <script type="text/javascript">
                          document.write('<td align="center" valign="middle" class="navmenu" width="48">');
                          document.write('<a href="{SLIDESHOW_TGT}" class="navmenu_pic" title="{SLIDESHOW_TITLE}" rel="nofollow"><img src="{LOCATION}images/slideshow.gif" border="0" align="middle" alt="{SLIDESHOW_TITLE}" /></a>');
                          document.write('</td>');
                        </script>
<!-- END slideshow_button -->
                <td align="center" valign="middle" class="navmenu" width="100%">
                        {PIC_POS}
                </td>
<!-- BEGIN report_file_button -->
                <td align="center" valign="middle" class="navmenu" width="48">
                        <a href="{REPORT_TGT}" class="navmenu_pic" title="{REPORT_TITLE}" rel="nofollow"><img src="{LOCATION}images/report.gif" border="0" align="middle" alt="{REPORT_TITLE}" /></a>
                </td>
<!-- END report_file_button -->
<!-- BEGIN ecard_button -->
                <td align="center" valign="middle" class="navmenu" width="48">
                        <a href="{ECARD_TGT}" class="navmenu_pic" title="{ECARD_TITLE}" rel="nofollow"><img src="{LOCATION}images/ecard.gif"  border="0" align="middle" alt="{ECARD_TITLE}" /></a>
                </td>
<!-- END ecard_button -->
                <td align="center" valign="middle" class="navmenu" width="48">
                        <a href="{PREV_TGT}" class="navmenu_pic" title="{PREV_TITLE}"><img src="{LOCATION}images/prev.gif"  border="0" align="middle" alt="{PREV_TITLE}" /></a>
                </td>
                <td align="center" valign="middle" class="navmenu" width="48">
                        <a href="{NEXT_TGT}" class="navmenu_pic" title="{NEXT_TITLE}"><img src="{LOCATION}images/next.gif"  border="0" align="middle" alt="{NEXT_TITLE}" /></a>
                </td>
        </tr>

EOT;
/******************************************************************************
** Section <<<$template_img_navbar>>> - END
******************************************************************************/

/******************************************************************************
** Section <<<$template_display_media>>> - START
******************************************************************************/
// HTML template for intermediate image display
$template_display_media = <<<EOT
        <tr>
                <td align="center" class="display_media" nowrap="nowrap">
                        <table cellspacing="2" cellpadding="0" class="imageborder">
                                <tr>
                                        <td align="center">
                                                {IMAGE}

                                        </td>
                                </tr>
                        </table>
                </td></tr>
                <tr><td>
                                                <table width="100%" cellspacing="2" cellpadding="0" class="tableb tableb_alternate tableb tableb_alternate_alternate">
                                <tr>
                                        <td align="center">

                                                {ADMIN_MENU}
                                        </td>
                                </tr>
                        </table>





<!-- BEGIN img_desc -->
                        <table cellpadding="0" cellspacing="0" class="tableb tableb_alternate tableb tableb_alternate_alternate" width="100%">
<!-- BEGIN title -->
                                <tr>
                                        <td class="tableb tableb_alternate tableb tableb_alternate_alternate""><h1 class="pic_title">
                                                {TITLE}
                                        </h1></td>
                                </tr>
<!-- END title -->
<!-- BEGIN caption -->
                                <tr>
                                        <td class="tableb tableb_alternate tableb tableb_alternate_alternate"><h2 class="pic_caption">
                                                {CAPTION}
                                        </h2></td>
                                </tr>
<!-- END caption -->
                        </table>
<!-- END img_desc -->
                </td>
        </tr>

EOT;
/******************************************************************************
** Section <<<$template_display_media>>> - END
******************************************************************************/

/******************************************************************************
** Section <<<$template_image_rating>>> - START
******************************************************************************/
// HTML template for the image rating box
$template_image_rating = <<<EOT
<table align="center" width="{WIDTH}" cellspacing="1" cellpadding="0" class="maintable">
        <tr>
                <td colspan="6" class="tableh2_compact" id="voting_title"><b>{TITLE}</b> {VOTES}</td>
        </tr>
        <tr  id="rating_stars">
				{RATING}
        </tr>
		<noscript>
        <tr>
          <td class="tableb_compact" colspan="6" align="center">{JS_WARNING}</td>
        </tr>
        </noscript>
</table>
EOT;
/******************************************************************************
** Section <<<$template_image_rating>>> - END
******************************************************************************/

/******************************************************************************
** Section <<<$template_image_comments>>> - START
******************************************************************************/
// HTML template for the display of comments
$template_image_comments = <<<EOT
<table align="center" width="{WIDTH}" cellspacing="1" cellpadding="0" class="maintable" border="0">

        <tr>
                <td>
                        <table width="100%" cellpadding="0" cellspacing="0">
                           <tr>
                                <td class="tableh2_compact" nowrap="nowrap">
                                        <strong>{MSG_AUTHOR_LNK}</strong><a name="comment{MSG_ID}"></a>&nbsp;
<!-- BEGIN ipinfo -->
                                                                                 ({IP})
<!-- END ipinfo -->

</td>


                                <td class="tableh2_compact" align="right" width="100%">
<!-- BEGIN report_comment_button -->
     <a href="report_file.php?pid={PID}&amp;msg_id={MSG_ID}&amp;what=comment" title="{REPORT_COMMENT_TITLE}"><img src="images/report.gif" width="16" height="16" border="0" align="middle" alt="{REPORT_COMMENT_TITLE}" /></a>
<!-- END report_comment_button -->
<!-- BEGIN pending approval -->
                                        {PENDING_APPROVAL}
<!-- END pending approval -->
<!-- BEGIN buttons -->
                                        <script type="text/javascript">
                                          document.write('<a href="javascript:;" onclick="blocking(\'cbody{MSG_ID}\',\'\', \'block\'); blocking(\'cedit{MSG_ID}\',\'\', \'block\'); return false;" title="{EDIT_TITLE}"><img src="images/edit.gif" border="0" align="middle" alt="" /></a>');
                                        </script>
                                        <a href="delete.php?msg_id={MSG_ID}&amp;what=comment" onclick="return confirm('{CONFIRM_DELETE}');" title="{DELETE_TITLE}"><img src="images/delete.gif" border="0" align="middle" alt="" /></a>
<!-- END buttons -->
                                </td>
                                <td class="tableh2_compact" align="right" nowrap="nowrap">
                                        <span class="comment_date">[{MSG_DATE}]</span>
                                </td></tr>
                        </table>
                </td>
        </tr>
        <tr>
                <td class="tableb tableb_alternate tableb tableb_alternate_alternate_compact">
                        <div id="cbody{MSG_ID}" style="display:block">
                                {MSG_BODY}
                        </div>
                        <div id="cedit{MSG_ID}" style="display:none">
<!-- BEGIN edit_box_smilies -->
                                <form name="f{MSG_ID}" id="f{MSG_ID}" method="post" action="db_input.php">
                                    <table width="100%" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td valign="top">
                                                <!--<input type="text" name="msg_author" value="{MSG_AUTHOR}" class="textinput" size="25" />-->
                                                <input type="hidden" name="event" value="comment_update" />
                                                <input type="hidden" name="msg_id" value="{MSG_ID}" />
                                                </td>
                                                </tr>
                                                <tr>
                                                <td width="80%">
                                                        <textarea cols="40" rows="2" class="textinput" name="msg_body" onselect="storeCaret_f{MSG_ID}(this);" onclick="storeCaret_f{MSG_ID}(this);" onkeyup="storeCaret_f{MSG_ID}(this);" style="width: 100%;">{MSG_BODY_RAW}</textarea>
                                                </td>
                                                <td class="tableb tableb_alternate tableb tableb_alternate_alternate_compact">
                                                </td>
                                                <td>
                                                        <input type="submit" class="comment_button" name="submit" value="{OK}" />
                                                </td>
                                                </form>
                                        </tr>
                                        <tr>
                                                <td colspan="3">
                                                    <img src="images/spacer.gif" width="1" height="2" border="0" alt="" />
                                                    <br />
                                                </td>
                                        </tr>
                                </table>
                                {SMILIES}
<!-- END edit_box_smilies -->
<!-- BEGIN edit_box_no_smilies -->
                                <table width="100%" cellpadding="0" cellspacing="0">
                                        <tr>
                                                <form name="f{MSG_ID}" id="f{MSG_ID}" method="POST" action="db_input.php">
                                                <input type="hidden" name="event" value="comment_update" />
                                                <input type="hidden" name="msg_id" value="{MSG_ID}" />
                                                <td>
                                                <!--<input type="text" name="msg_author" value="{MSG_AUTHOR}" class="textinput" size="25" />-->
                                                </td>
                                        </tr>
                                        <tr>
                                                <td width="100%">
                                                        <textarea cols="40" rows="2" class="textinput" name="msg_body" style="width: 100%;">{MSG_BODY_RAW}</textarea>
                                                </td>
                                                <td class="tableb tableb_alternate tableb tableb_alternate_alternate_compact">
                                                </td>
                                                <td>
                                                        <input type="submit" class="comment_button" name="submit" value="{OK}" />
                                                </td>
                                                </form>
                                        </tr>
                                        <tr>
                                                <td colspan="3"><img src="images/spacer.gif" width="1" height="2" border="0" alt="" /><br /></td>
                                        </tr>
                                </table>
<!-- END edit_box_no_smilies -->
                        </div>
                </td>
        </tr>
</table>
EOT;
/******************************************************************************
** Section <<<$template_image_comments>>> - END
******************************************************************************/


/******************************************************************************
** Section <<<$template_add_your_comment>>> - START
******************************************************************************/
$template_add_your_comment = <<<EOT
        <form method="post" name="post" id="post" action="db_input.php">
                <table align="center" width="{WIDTH}" cellspacing="1" cellpadding="0" class="maintable">
                        <tr>
                                        <td width="100%" class="tableh2_compact">{ADD_YOUR_COMMENT}{HELP_ICON}</td>
                        </tr>
                        <tr>
                <td colspan="1">
                        <table width="100%" cellpadding="0" cellspacing="0">

<!-- BEGIN user_name_input -->
                                                        <tr>
                               <td class="tableb tableb_alternate tableb tableb_alternate_alternate_compact">
                                        {NAME}
                                </td>
                                <td class="tableb tableb_alternate tableb tableb_alternate_alternate_compact">
                                        <input type="text" class="textinput" name="msg_author" size="10" maxlength="20" value="{USER_NAME}" />
                                </td>
<!-- END user_name_input -->
<!-- BEGIN input_box_smilies -->
                                <td class="tableb tableb_alternate tableb tableb_alternate_alternate_compact">
                                {COMMENT}
                                                                </td>
                                <td width="100%" class="tableb tableb_alternate tableb tableb_alternate_alternate_compact">
                                <input type="text" class="textinput" id="message" name="msg_body" onselect="storeCaret_post(this);" onclick="storeCaret_post(this);" onkeyup="storeCaret_post(this);" maxlength="{MAX_COM_LENGTH}" style="width: 100%;" />
                                                                </td>
<!-- END input_box_smilies -->
<!-- BEGIN input_box_no_smilies -->
                                <td class="tableb tableb_alternate tableb tableb_alternate_alternate_compact">
                                {COMMENT}
                                                                </td>
                                <td width="100%" class="tableb tableb_alternate tableb tableb_alternate_alternate_compact">
                                <input type="text" class="textinput" id="message" name="msg_body"  maxlength="{MAX_COM_LENGTH}" style="width: 100%;" />
                                </td>
<!-- END input_box_no_smilies -->
<!-- BEGIN submit -->
                                <td class="tableb tableb_alternate tableb tableb_alternate_alternate_compact">
                                <input type="hidden" name="event" value="comment" />
                                <input type="hidden" name="pid" value="{PIC_ID}" />
                                <input type="submit" class="comment_button" name="submit" value="{OK}" onclick="return notDefaultUsername(this.form, '{DEFAULT_USERNAME}', '{DEFAULT_USERNAME_MESSAGE}');" />
                                </td>
<!-- END submit -->
                                                        </tr>
<!-- BEGIN comment_captcha -->
                                                        <tr>
                                <td class="tableb tableb_alternate tableb tableb_alternate_alternate_compact" colspan="2">
                                  {CONFIRM}
                                </td>
                                <td class="tableb tableb_alternate tableb tableb_alternate_alternate_compact" colspan="2">
                                  <input type="text" name="confirmCode" size="5" maxlength="5" class="textinput" />
                                  <img src="captcha.php" align="middle" border="0" alt="" />
                                </td>
                                                        </tr>
<!-- END comment_captcha -->
                        </table>
                </td>
        </tr>
<!-- BEGIN smilies -->
        <tr>
                <td width="100%" class="tableb tableb_alternate tableb tableb_alternate_alternate_compact">
                        {SMILIES}
                </td>
        </tr>
<!-- END smilies -->
<!-- BEGIN login_to_comment -->
        <tr>
                                <td class="tableb tableb_alternate tableb tableb_alternate_alternate_compact" colspan="2">
                                  {LOGIN_TO_COMMENT}
                                </td>
        </tr>
<!-- END login_to_comment -->
                </table>
        </form>
EOT;
/******************************************************************************
** Section <<<$template_add_your_comment>>> - END
******************************************************************************/

/******************************************************************************
** Section <<<$template_cpg_die>>> - START
******************************************************************************/
// HTML template used by the cpg_die function
$template_cpg_die = <<<EOT

        <tr>
                <td class="tableb tableb_alternate tableb tableb_alternate_alternate" align="center">
                        <span class="cpg_user_message">{MESSAGE}</span>
<!-- BEGIN file_line -->
                        <br />
                        <br />
                        {FILE_TXT}{FILE} - {LINE_TXT}{LINE}
<!-- END file_line -->
<!-- BEGIN output_buffer -->
                        <br />
                        <br />
                        <div align="left">
                                {OUTPUT_BUFFER}
                        </div>
<!-- END output_buffer -->
                        <br /><br />
                </td>
        </tr>


EOT;
/******************************************************************************
** Section <<<$template_cpg_die>>> - END
******************************************************************************/

/******************************************************************************
** Section <<<$template_msg_box>>> - START
******************************************************************************/
// HTML template used by the msg_box function
$template_msg_box = <<<EOT

        <tr>
                <td class="tableb tableb_alternate tableb tableb_alternate_alternate" align="center">
                        <span class="cpg_user_message">{MESSAGE}</span>
                </td>
        </tr>
<!-- BEGIN button -->
                <tr>
                        <td align="center" class="tablef">
                                <table cellpadding="0" cellspacing="0">
                                        <tr>
                                                <td class="admin_menu">
                                                        <a href="{LINK}">{TEXT}</a>
                                                </td>
                                        </tr>
                                </table>
                        </td>
                </tr>
<!-- END button -->

EOT;
/******************************************************************************
** Section <<<$template_msg_box>>> - END
******************************************************************************/

/******************************************************************************
** Section <<<$template_ecard>>> - START
******************************************************************************/
// HTML template for e-cards
$template_ecard = <<<EOT
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="{LANG_DIR}">
<head>
<meta http-equiv="content-type" content="text/html; charset={CHARSET}" />
<title>{TITLE}</title>
</head>
<body bgcolor="#FFFFFF" text="#0F5475" link="#0F5475" vlink="#0F5475" alink="#0F5475">
<br />
<p align="center"><a href="{VIEW_ECARD_TGT}">{VIEW_ECARD_LNK}</a></p>
<table border="0" cellspacing="0" cellpadding="1" align="center">
  <tr>
    <td bgcolor="#000000">
      <table border="0" cellspacing="0" cellpadding="10" bgcolor="#ffffff">
        <tr>
          <td valign="top">
           <a href="{VIEW_MORE_TGT}displayimage.php?pid={PID}">{PIC_MARKUP}</a>
                                         <br />
                                         <div align="center">
                                                 <h2>{PIC_TITLE}</h2>
                                         </div>

          </td>
          <td valign="top" width="300">
            <div align="right"><img src="{URL_PREFIX}images/stamp.gif" border="0" alt="" /></div>
            <br />
            <span style="font-family:Arial,Verdana,Helvetica,sans-serif;color:#000000;font-size:2.0em;font-weight:bold;">{GREETINGS}</span>
            <br />
            <br />
            <span style="font-family:Arial,Verdana,Helvetica,sans-serif;color:#000000;font-size:1.6em;font-weight:bold;">{MESSAGE}</span>
            <br />
            <br />
            <span style="font-family:Arial,Verdana,Helvetica,sans-serif;color:#000000;font-size:1.6em;font-weight:bold;">{SENDER_NAME}</span>
            (<a href="mailto:{SENDER_EMAIL}"><span style="font-family:Arial,Verdana,Helvetica,sans-serif;color:#000000;font-weight:bold;">{SENDER_EMAIL}</span></a>)
          </td>
        </tr>
                <tr>
                        <td colspan="2">
                                {PIC_CAPTION}
                        </td>
                </tr>
      </table>
    </td>
  </tr>
</table>
<p align="center"><a href="{VIEW_MORE_TGT}">{VIEW_MORE_LNK}</a></p>
</body>
</html>
EOT;
/******************************************************************************
** Section <<<$template_ecard>>> - END
******************************************************************************/

/******************************************************************************
** Section <<<$template_ecard_plaintext>>> - START
******************************************************************************/
// plain-text template for e-cards (as fallback for clients that can't display html-formatted mails)
$template_ecard_plaintext = <<<EOT
{TITLE}
=========================================

{VIEW_ECARD_LNK_PLAINTEXT}:
{VIEW_ECARD_TGT}

{GREETINGS}


{PLAINTEXT_MESSAGE}

{SENDER_NAME} ({SENDER_EMAIL})

-----------------------------------------
{VIEW_MORE_LNK}:
{VIEW_MORE_TGT}
EOT;
/******************************************************************************
** Section <<<$template_ecard_plaintext>>> - END
******************************************************************************/

/******************************************************************************
** Section <<<$template_report>>> - START
******************************************************************************/
// HTML template for report
$template_report = <<<EOT
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="{LANG_DIR}">
<head>
<meta http-equiv="content-type" content="text/html; charset={CHARSET}" />
<title>{TITLE}</title>
</head>
<body bgcolor="#FFFFFF" text="#0F5475" link="#0F5475" vlink="#0F5475" alink="#0F5475">
<br />
<p align="center"><a href="{VIEW_REPORT_TGT}">{VIEW_REPORT_LNK}</a></p>
<table border="0" cellspacing="0" cellpadding="1" align="center">
  <tr>
    <td bgcolor="#000000">
      <table border="0" cellspacing="0" cellpadding="10" bgcolor="#ffffff">
        <tr>
          <td valign="top">
           <a href="{PIC_TGT}"><img src="{PIC_URL}" border="1" alt="" /></a><br />
          </td>
          <td valign="top" width="200">
            <span style="font-family:Arial,Verdana,Helvetica,sans-serif;color:#000000;font-size:2.0em;font-weight:bold;">{SUBJECT}</span>
            <br />
                                                <br />
                                                {REASON}
            <p>
            <span style="font-family:Arial,Verdana,Helvetica,sans-serif;color:#000000;font-size:1.6em;">{MESSAGE}</span>
            </p>
            <span style="font-family:Arial,Verdana,Helvetica,sans-serif;color:#000000;font-size:1.6em;">{SENDER_NAME}</span>
            (<a href="mailto:{SENDER_EMAIL}"><span style="font-family:Arial,Verdana,Helvetica,sans-serif;color:#000000;font-size:1.6em;">{SENDER_EMAIL}</span></a>)
          </td>
        </tr>
      </table>
    </td>
  </tr>
</table>
<p align="center"><a href="{VIEW_MORE_TGT}">{VIEW_MORE_LNK}</a></p>
</body>
</html>
EOT;
/******************************************************************************
** Section <<<$template_report>>> - END
******************************************************************************/

/******************************************************************************
** Section <<<$template_report_plaintext>>> - START
******************************************************************************/
// plain-text template for reports (as fallback for clients that can't display html-formatted mails)
$template_report_plaintext = <<<EOT
{TITLE}
=========================================

{VIEW_REPORT_LNK_PLAINTEXT}:
{VIEW_REPORT_TGT}


{SUBJECT}

{REASON}

{PLAINTEXT_MESSAGE}

{SENDER_NAME} ({SENDER_EMAIL})

-----------------------------------------
{VIEW_MORE_LNK}:
{VIEW_MORE_TGT}
EOT;
/******************************************************************************
** Section <<<$template_report_plaintext>>> - END
******************************************************************************/

/******************************************************************************
** Section <<<$template_report_comment>>> - START
******************************************************************************/
// HTML template for displaying a reported comment
$template_report_comment = <<<EOT
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="{LANG_DIR}">
<head>
<meta http-equiv="content-type" content="text/html; charset={CHARSET}" />
<title>{TITLE}</title>
</head>
<body bgcolor="#FFFFFF" text="#0F5475" link="#0F5475" vlink="#0F5475" alink="#0F5475">
<br />
<p align="center"><a href="{VIEW_REPORT_TGT}">{VIEW_REPORT_LNK}</a></p>
<table border="0" cellspacing="0" cellpadding="1" align="center">
  <tr>
    <td bgcolor="#000000">
      <table border="0" cellspacing="0" cellpadding="10" bgcolor="#FFFFFF">
        <tr>
          <td valign="top">
           {COMMENT}
           <p align="center"><a href="{COMMENT_TGT}">{COMMENT_LNK}</a></p>
          </td>
        </tr>
        <tr>
          <td valign="top">
            <span style="font-family:Arial,Verdana,Helvetica,sans-serif;color:#000000;font-size:2.0em;font-weight:bold;">{SUBJECT}</span></b>
                                                <br />
              {REASON}
            <br />
            <span style="font-family:Arial,Verdana,Helvetica,sans-serif;color:#000000;font-size:1.6em;">{MESSAGE}</span>
            <br />
            <span style="font-family:Arial,Verdana,Helvetica,sans-serif;color:#000000;font-size:1.6em;">{SENDER_NAME}</span>
            (<a href="mailto:{SENDER_EMAIL}"><span style="font-family:Arial,Verdana,Helvetica,sans-serif;color:#000000;font-size:1.6em;">{SENDER_EMAIL}</span></a>)
          </td>
        </tr>
      </table>
    </td>
  </tr>
</table>
<p align="center"><a href="{VIEW_MORE_TGT}">{VIEW_MORE_LNK}</a></p>
</body>
</html>
EOT;
/******************************************************************************
** Section <<<$template_report_comment>>> - END
******************************************************************************/

/******************************************************************************
** Section <<<$template_report_comment_email>>> - START
******************************************************************************/
// plain-text template for reports (as fallback for clients that can't display html-formatted mails)
$template_report_comment_email = <<<EOT
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="{LANG_DIR}">
<head>
<meta http-equiv="content-type" content="text/html; charset={CHARSET}" />
<title>{TITLE}</title>
</head>
<body bgcolor="#FFFFFF" text="#0F5475" link="#0F5475" vlink="#0F5475" alink="#0F5475">
<p><a href="{VIEW_REPORT_TGT}">{VIEW_COMMENT_LNK}</a></p>
                <span style="font-family:Arial,Verdana,Helvetica,sans-serif;color:#000000;font-size:2.0em;font-weight:bold;">{SUBJECT}</span>
                <br />
                        {REASON}
                <br />
                <span style="font-family:Arial,Verdana,Helvetica,sans-serif;color:#000000;font-size:1.6em;">{MESSAGE}</span>
                <br />
                <span style="font-family:Arial,Verdana,Helvetica,sans-serif;color:#000000;font-size:1.6em;">{SENDER_NAME}</span>
                (<a href="mailto:{SENDER_EMAIL}"><span style="font-family:Arial,Verdana,Helvetica,sans-serif;color:#000000;font-size:1.6em;">{SENDER_EMAIL}</span></a>)
<p><a href="{VIEW_MORE_TGT}">{VIEW_MORE_LNK}</a></p>
</body>
</html>
EOT;
/******************************************************************************
** Section <<<$template_report_comment_email>>> - END
******************************************************************************/

/******************************************************************************
** Section <<<$template_tab_display>>> - START
******************************************************************************/
// Template used for tabbed display
$template_tab_display = array('left_text' => '<td width="100%%" align="left" valign="middle" class="tableh1_compact" style="white-space: nowrap">{LEFT_TEXT}</td>' . "\n",
    'tab_header' => '',
    'tab_trailer' => '',
    'active_tab' => '<td><img src="images/spacer.gif" width="1" height="1" border="0" alt="" /></td>' . "\n" . '<td align="center" valign="middle" class="tableb tableb_alternate tableb tableb_alternate_alternate_compact">%d</td>',
    'inactive_tab' => '<td><img src="images/spacer.gif" width="1" height="1" border="0" alt="" /></td>' . "\n" . '<td align="center" valign="middle" class="navmenu"><a href="{LINK}">%d</a></td>' . "\n",
    'inactive_prev_tab' => '<td><img src="images/spacer.gif" width="1" height="1" border="0" alt="" /></td>' . "\n" . '<td align="center" valign="middle" class="navmenu"><a href="{LINK}">{PREV}</a></td>' . "\n",
    'inactive_next_tab' => '<td><img src="images/spacer.gif" width="1" height="1" border="0" alt="" /></td>' . "\n" . '<td align="center" valign="middle" class="navmenu"><a href="{LINK}">{NEXT}</a></td>' . "\n",
);
/******************************************************************************
** Section <<<$template_tab_display>>> - END
******************************************************************************/

/******************************************************************************
** Section <<<$template_vanity>>> - START
******************************************************************************/
// Template used for Vanity Footer
$template_vanity = <<<EOT
<div id="vanity">
      <a id="v_php" href="http://www.php.net/"  rel="external"></a>
      <a id="v_mysql" href="http://www.mysql.com/"  rel="external"></a>
      <a id="v_xhtml" href="http://validator.w3.org/check/referer"  rel="external"></a>
      <a id="v_css" href="http://jigsaw.w3.org/css-validator/check/referer"  rel="external"></a>
</div>
EOT;
/******************************************************************************
** Section <<<$template_vanity>>> - END
******************************************************************************/

/******************************************************************************
** Section <<<pageheader>>> - START
******************************************************************************/
function pageheader($section, $meta = '')
{
    global $CONFIG, $THEME_DIR;
    global $template_header, $lang_charset, $lang_text_dir;

    $custom_header = cpg_get_custom_include($CONFIG['custom_header_path']);

    $charset = ($CONFIG['charset'] == 'language file') ? $lang_charset : $CONFIG['charset'];

    header('P3P: CP="CAO DSP COR CURa ADMa DEVa OUR IND PHY ONL UNI COM NAV INT DEM PRE"');
    header("Content-Type: text/html; charset=$charset");
    user_save_profile();

    $template_vars = array('{LANG_DIR}' => $lang_text_dir,
        '{TITLE}' => theme_page_title($section),
        '{CHARSET}' => $charset,
        '{META}' => $meta,
        '{GAL_NAME}' => $CONFIG['gallery_name'],
        '{GAL_DESCRIPTION}' => $CONFIG['gallery_description'],
        '{SYS_MENU}' => theme_main_menu('sys_menu'),
        '{SUB_MENU}' => theme_main_menu('sub_menu'),
        '{ADMIN_MENU}' => theme_admin_mode_menu(),
        '{CUSTOM_HEADER}' => $custom_header,
        '{JAVASCRIPT}' => theme_javascript_head(),
        '{MESSAGE_BLOCK}' => theme_display_message_block(),
        );

    echo template_eval($template_header, $template_vars);
}
/******************************************************************************
** Section <<<pageheader>>> - END
******************************************************************************/

/******************************************************************************
** Section <<<pagefooter>>> - START
******************************************************************************/
// Function for writing a pagefooter
function pagefooter()
{
    //global $HTTP_GET_VARS, $HTTP_POST_VARS, $HTTP_SERVER_VARS;
    global $USER, $USER_DATA, $ALBUM_SET, $CONFIG, $time_start, $query_stats, $queries;;
    global $template_footer;

    $custom_footer = cpg_get_custom_include($CONFIG['custom_footer_path']);

    if ($CONFIG['debug_mode']==1 || ($CONFIG['debug_mode']==2 && GALLERY_ADMIN_MODE)) {
    cpg_debug_output();
    }

    $template_vars = array(
        '{CUSTOM_FOOTER}' => $custom_footer,
        '{VANITY}' => (defined('THEME_IS_XHTML10_TRANSITIONAL') && $CONFIG['vanity_block']) ? theme_vanity() : '',
        '{CREDITS}' => theme_credits(),
    );

    echo template_eval($template_footer, $template_vars);
}
/******************************************************************************
** Section <<<pagefooter>>> - END
******************************************************************************/

/******************************************************************************
** Section <<<theme_javascript_head>>> - START
******************************************************************************/
// Function for the JavaScript inside the <head>-section
function theme_javascript_head() {
    global $CONFIG;
    $return = '<script type="text/javascript" src="scripts.js"></script>'."\n"; // do not remove this line unless you really know what you're doing
    $return .= <<< EOT

<script type="text/javascript">
</script>
EOT;
    return $return;
}
/******************************************************************************
** Section <<<theme_javascript_head>>> - END
******************************************************************************/

/******************************************************************************
** Section <<<theme_credits>>> - START
******************************************************************************/
/******************************************************************************
// Function for the credits-section
In previous versions of Coppermine the "Powered by Coppermine" used to be
obfuscated to make it hard for non-coders to remove the tag. The reason behind
this was an additional license add-on that disallowed users to change the line.
The dev team has reviewed this policy for cpg1.5.x and decided that end users
ARE allowed to change or remove the line in legal terms.
HOWEVER: We have a forum policy for the support board instead: support will
only be given for galleries that show the "Powered by Coppermine" tag
unobfuscated.
Before removing the credits, please consider this as well:
Coppermine is free software, the dev team ASKS you to keep the footer intact.
We're convinced that you should give credit where credit is due. So please think
twice before you decide to remove the tag.
******************************************************************************/
function theme_credits() {
    $return = <<< EOT

<div class="footer" align="center" style="padding-top:10px;display:block;visibility:visible; font-family: Verdana,Arial,sans-serif;">Powered by <a href="http://coppermine-gallery.net/" title="Coppermine Photo Gallery" rel="external">Coppermine Photo Gallery</a></div>
EOT;
    return $return;
}
/******************************************************************************
** Section <<<theme_credits>>> - END
******************************************************************************/

/******************************************************************************
** Section <<<starttable>>> - START
******************************************************************************/
// Function to start a 'standard' table
function starttable($width = '-1', $title = '', $title_colspan = '1')
{
    global $CONFIG;

    if ($width == '-1') $width = $CONFIG['picture_table_width'];
    if ($width == '100%') $width = $CONFIG['main_table_width'];
    echo <<<EOT

<!-- Start standard table -->
<table align="center" width="$width" cellspacing="1" cellpadding="0" class="maintable">

EOT;
    if ($title) {
        echo <<<EOT
        <tr>
                <td class="tableh1" colspan="$title_colspan">$title</td>
        </tr>

EOT;
    }
}
/******************************************************************************
** Section <<<starttable>>> - END
******************************************************************************/

/******************************************************************************
** Section <<<endtable>>> - START
******************************************************************************/
function endtable()
{
    echo <<<EOT
</table>
<!-- End standard table -->

EOT;
}
/******************************************************************************
** Section <<<endtable>>> - END
******************************************************************************/

/******************************************************************************
** Section <<<theme_main_menu>>> - START
******************************************************************************/
function theme_main_menu($which)
{
	global $AUTHORIZED, $CONFIG, $album, $actual_cat, $cat, $REFERER;
	global $lang_main_menu, $template_sys_menu, $template_sub_menu, $lang_gallery_admin_menu;
	#####################      DB      ######################	
	$global $cpg_db_sample_theme_php;
	$cpgdb =& cpgDB::getInstance();
	$cpgdb->connect_to_existing($CONFIG['LINK_ID']);
	##################################################	

	static $sys_menu = '', $sub_menu = '';
	if ($$which != '') {
		return $$which;
	}

	//Check whether user has permission to upload file to the current album if any
	$upload_allowed = false;
	if (isset($album)) {
		if (GALLERY_ADMIN_MODE) {
			$upload_allowed = true;
		} else {
			if (USER_ID) {
				/*$query = "SELECT aid, title FROM {$CONFIG['TABLE_ALBUMS']} WHERE category='" . (FIRST_USER_CAT + USER_ID) . "' AND aid = '$album' ORDER BY title";
				$user_albums = cpg_db_query($query);
				if (mysql_num_rows($user_albums)) {
					$upload_allowed = true;
				} else {
					$upload_allowed = false;
				}	*/
				#####################################         DB       #################################
				$user_albums = $cpgdb->query($cpg_db_sample_php['user_admin_get_alb'], (FIRST_USER_CAT + USER_ID), $album);
				if (count($cpgdb->fetchRowSet())) {
					$upload_allowed = true;
				} else {
					$upload_allowed = false;
				}
				###############################################################################
			}

			if (!$upload_allowed) {
				/*$query = "SELECT aid, title FROM {$CONFIG['TABLE_ALBUMS']} WHERE category < " . FIRST_USER_CAT . " AND uploads='YES' AND (visibility = '0' OR visibility IN ".USER_GROUP_SET.") AND aid = '$album' ORDER BY title";
				$public_albums = cpg_db_query($query);

				if (mysql_num_rows($public_albums)) {
					$upload_allowed = true;
				} else {
					$upload_allowed = false;
				}	*/
				#####################################         DB       #################################
				$public_albums = $cpgdb->query($cpg_db_sample_php['alb_upload_not_allowed'], FIRST_USER_CAT, USER_GROUP_SET, $album);
				if (count($cpgdb->fetchRowSet())) {
					$upload_allowed = true;
				} else {
					$upload_allowed = false;
				}
				###############################################################################
			}
		}
	}

	$album_l = isset($album) ? "?album=$album" : '';
	$album_12 = ($upload_allowed) ? "?album=$album" : '';
	$cat_l = (isset($actual_cat))? "?cat=$actual_cat" : (isset($cat) ? "?cat=$cat" : '');
	$cat_l2 = isset($cat) ? "&amp;cat=$cat" : '';
	$my_gallery_id = FIRST_USER_CAT + USER_ID;

	if ($which == 'sys_menu' ) {
		if (USER_ID) { // visitor is logged in
			template_extract_block($template_sys_menu, 'login');
			if ($CONFIG['contact_form_registered_enable'] == 0) {
			  template_extract_block($template_sys_menu, 'contact');
			}
			if ($CONFIG['display_sidebar_user'] != 2) {
			  template_extract_block($template_sys_menu, 'sidebar');
			}
		} else { // visitor is not logged in
			if ($CONFIG['contact_form_guest_enable'] == 0) {
			  template_extract_block($template_sys_menu, 'contact');
			}
			if ($CONFIG['display_sidebar_guest'] != 2) {
			  template_extract_block($template_sys_menu, 'sidebar');
			}
			template_extract_block($template_sys_menu, 'logout');
			template_extract_block($template_sys_menu, 'my_profile');
		}

		if (!USER_IS_ADMIN) {
			template_extract_block($template_sys_menu, 'enter_admin_mode');
			template_extract_block($template_sys_menu, 'leave_admin_mode');
		} else {
			if (GALLERY_ADMIN_MODE) {
				template_extract_block($template_sys_menu, 'enter_admin_mode');
			} else {
				template_extract_block($template_sys_menu, 'leave_admin_mode');
			}
		}

		if (!USER_CAN_CREATE_ALBUMS) {
			template_extract_block($template_sys_menu, 'my_gallery');
		}

		if (USER_CAN_CREATE_ALBUMS) {
			template_extract_block($template_sys_menu, 'my_profile');
		}

		if (!USER_CAN_UPLOAD_PICTURES && !USER_CAN_CREATE_ALBUMS) {
			template_extract_block($template_sys_menu, 'upload_pic');
		}

		if (USER_ID || !$CONFIG['allow_user_registration']) {
			template_extract_block($template_sys_menu, 'register');
		}

		if (!USER_ID || !$CONFIG['allow_memberlist']) {
			template_extract_block($template_sys_menu, 'allow_memberlist');
		}

		if (!$CONFIG['display_faq']) {
			template_extract_block($template_sys_menu, 'faq');
		}

		$param = array(
			'{HOME_TGT}' => $CONFIG['home_target'],
			'{HOME_TITLE}' => $lang_main_menu['home_title'],
			'{HOME_LNK}' => $lang_main_menu['home_lnk'],
			'{CONTACT_TGT}' => "contact.php?referer=$REFERER",
			'{CONTACT_TITLE}' => sprintf($lang_main_menu['contact_title'], $CONFIG['gallery_name']),
			'{CONTACT_LNK}' => $lang_main_menu['contact_lnk'],
			'{MY_GAL_TGT}' => "index.php?cat=$my_gallery_id",
			'{MY_GAL_TITLE}' => $lang_main_menu['my_gal_title'],
			'{MY_GAL_LNK}' => $lang_main_menu['my_gal_lnk'],
			'{MEMBERLIST_TGT}' => "usermgr.php",
			'{MEMBERLIST_TITLE}' => $lang_main_menu['memberlist_title'],
			'{MEMBERLIST_LNK}' => $lang_main_menu['memberlist_lnk'],
			'{MY_PROF_TGT}' => "profile.php?op=edit_profile",
			'{MY_PROF_TITLE}' => $lang_main_menu['my_prof_title'],
			'{MY_PROF_LNK}' => $lang_main_menu['my_prof_lnk'],
			'{ADM_MODE_TGT}' => "mode.php?admin_mode=1&amp;referer=$REFERER",
			'{ADM_MODE_TITLE}' => $lang_main_menu['adm_mode_title'],
			'{ADM_MODE_LNK}' => $lang_main_menu['adm_mode_lnk'],
			'{USR_MODE_TGT}' => "mode.php?admin_mode=0&amp;referer=$REFERER",
			'{USR_MODE_TITLE}' => $lang_main_menu['usr_mode_title'],
			'{USR_MODE_LNK}' => $lang_main_menu['usr_mode_lnk'],
			'{SIDEBAR_TGT}' => "sidebar.php?action=install",
			'{SIDEBAR_TITLE}' => $lang_main_menu['sidebar_title'],
			'{SIDEBAR_LNK}' => $lang_main_menu['sidebar_lnk'],
			'{UPL_PIC_TGT}' => "upload.php$album_12",
			'{UPL_PIC_TITLE}' => $lang_main_menu['upload_pic_title'],
			'{UPL_PIC_LNK}' => $lang_main_menu['upload_pic_lnk'],
			'{REGISTER_TGT}' => "register.php",
			'{REGISTER_TITLE}' => $lang_main_menu['register_title'],
			'{REGISTER_LNK}' => $lang_main_menu['register_lnk'],
			'{LOGIN_TGT}' => "login.php?referer=$REFERER",
			'{LOGIN_TITLE}' => $lang_main_menu['login_title'],
			'{LOGIN_LNK}' => $lang_main_menu['login_lnk'],
			'{LOGOUT_TGT}' => "logout.php?referer=$REFERER",
			'{LOGOUT_TITLE}' => $lang_main_menu['logout_title'],
			'{LOGOUT_LNK}' => $lang_main_menu['logout_lnk'] . " [" . stripslashes(USER_NAME) . "]",
			'{FAQ_TGT}' => "faq.php",
			'{FAQ_TITLE}' => $lang_main_menu['faq_title'],
			'{FAQ_LNK}' => $lang_main_menu['faq_lnk'],
			'{UPL_APP_LNK}' => $lang_gallery_admin_menu['upl_app_lnk'],
			'{UPL_APP_TGT}' => "editpics.php?mode=upload_approval",
			'{UPL_APP_TITLE}' => $lang_gallery_admin_menu['upl_app_lnk'],
			);

		$sys_menu = template_eval($template_sys_menu, $param);
	} else {

		if (!$CONFIG['custom_lnk_url']) {
			template_extract_block($template_sub_menu, 'custom_link');
		}

		$param = array(
			'{ALB_LIST_TGT}' => "index.php$cat_l",
			'{ALB_LIST_TITLE}' => $lang_main_menu['alb_list_title'],
			'{ALB_LIST_LNK}' => $lang_main_menu['alb_list_lnk'],
			'{CUSTOM_LNK_TGT}' => $CONFIG['custom_lnk_url'],
			'{CUSTOM_LNK_TITLE}' => $CONFIG['custom_lnk_name'],
			'{CUSTOM_LNK_LNK}' => $CONFIG['custom_lnk_name'],
			'{LASTUP_TGT}' => "thumbnails.php?album=lastup$cat_l2",
			'{LASTUP_TITLE}' => $lang_main_menu['lastup_title'],
			'{LASTUP_LNK}' => $lang_main_menu['lastup_lnk'],
			'{LASTCOM_TGT}' => "thumbnails.php?album=lastcom$cat_l2",
			'{LASTCOM_TITLE}' => $lang_main_menu['lastcom_title'],
			'{LASTCOM_LNK}' => $lang_main_menu['lastcom_lnk'],
			'{TOPN_TGT}' => "thumbnails.php?album=topn$cat_l2",
			'{TOPN_TITLE}' => $lang_main_menu['topn_title'],
			'{TOPN_LNK}' => $lang_main_menu['topn_lnk'],
			'{TOPRATED_TGT}' => "thumbnails.php?album=toprated$cat_l2",
			'{TOPRATED_TITLE}' => $lang_main_menu['toprated_title'],
			'{TOPRATED_LNK}' => $lang_main_menu['toprated_lnk'],
			'{FAV_TGT}' => "thumbnails.php?album=favpics",
			'{FAV_TITLE}' => $lang_main_menu['fav_title'],
			'{FAV_LNK}' => $lang_main_menu['fav_lnk'],
			'{BROWSEBYDATE_TGT}' => '"#" onclick="MM_openBrWindow(\'calendar.php?action=browsebydate&month='.ltrim(strftime('%m'),'0').'&year='.strftime('%Y').'\', \'Calendar\', \'width=300, height=200, scrollbars=no, toolbar=no, status=no, resizable=no\'); return false;',
			'{BROWSEBYDATE_LNK}' => $lang_main_menu['browse_by_date_lnk'],
			'{BROWSEBYDATE_TITLE}' => $lang_main_menu['browse_by_date_title'],
			'{SEARCH_TGT}' => "search.php",
			'{SEARCH_TITLE}' => $lang_main_menu['search_title'],
			'{SEARCH_LNK}' => $lang_main_menu['search_lnk'],
			'{UPL_APP_LNK}' => $lang_gallery_admin_menu['upl_app_lnk'],
			'{UPL_APP_TGT}' => "editpics.php?mode=upload_approval",
			'{UPL_APP_TITLE}' => $lang_gallery_admin_menu['upl_app_lnk'],
			);
		$sub_menu = template_eval($template_sub_menu, $param);
	}

	return $$which;
}
/******************************************************************************
** Section <<<theme_main_menu>>> - END
******************************************************************************/

/******************************************************************************
** Section <<<theme_admin_mode_menu>>> - START
******************************************************************************/
function theme_admin_mode_menu()
{
    global $cat;
    global $lang_gallery_admin_menu, $lang_user_admin_menu;
    global $template_gallery_admin_menu, $template_user_admin_menu;
    global $CONFIG;

    $cat_l = isset($cat) ? "?cat=$cat" : '';

    static $admin_menu = '';

    // Populate the admin menu only if empty to avoid template errors
    if ($admin_menu == '') {

        if (GALLERY_ADMIN_MODE) {

        if ($CONFIG['log_ecards'] == 0) {
            template_extract_block($template_gallery_admin_menu, 'log_ecards');
        }

        if (cpg_get_pending_approvals() == 0) {
             template_extract_block($template_gallery_admin_menu, 'admin_approval');
        }

            // do the docs exist on the webserver?
            if (file_exists('docs/index.htm') == true) {
                $documentation_href = 'docs/index.htm';
            } else {
                $documentation_href = 'http://documentation.coppermine-gallery.net/';
            }

            if (!$CONFIG['enable_plugins']) {
                template_extract_block($template_gallery_admin_menu, 'plugin_manager');
            }
            if (!$CONFIG['log_mode']) {
                template_extract_block($template_gallery_admin_menu, 'view_log_files');
            }
            if (!$CONFIG['hit_details']) {
                template_extract_block($template_gallery_admin_menu, 'overall_stats');
            }
            if (!$CONFIG['clickable_keyword_search']) {
                template_extract_block($template_gallery_admin_menu, 'keyword_manager');
            }
            if (!$CONFIG['read_exif_data']) {
                template_extract_block($template_gallery_admin_menu, 'exif_manager');
            }
            if ($CONFIG['display_coppermine_news'] != 0) {
                template_extract_block($template_gallery_admin_menu, 'show_news');
            }

            $param = array('{CATL}' => $cat_l,
                '{UPL_APP_TITLE}' => $lang_gallery_admin_menu['upl_app_title'],
                '{UPL_APP_LNK}' => $lang_gallery_admin_menu['upl_app_lnk'],
                '{ADMIN_TITLE}' => $lang_gallery_admin_menu['admin_title'],
                '{ADMIN_LNK}' => $lang_gallery_admin_menu['admin_lnk'],
                '{ALBUMS_TITLE}' => $lang_gallery_admin_menu['albums_title'],
                '{ALBUMS_LNK}' => $lang_gallery_admin_menu['albums_lnk'],
                '{CATEGORIES_TITLE}' => $lang_gallery_admin_menu['categories_title'],
                '{CATEGORIES_LNK}' => $lang_gallery_admin_menu['categories_lnk'],
                '{USERS_TITLE}' => $lang_gallery_admin_menu['users_title'],
                '{USERS_LNK}' => $lang_gallery_admin_menu['users_lnk'],
                '{GROUPS_TITLE}' => $lang_gallery_admin_menu['groups_title'],
                '{GROUPS_LNK}' => $lang_gallery_admin_menu['groups_lnk'],
                '{COMMENTS_TITLE}' => $lang_gallery_admin_menu['comments_title'],
                '{COMMENTS_LNK}' => $lang_gallery_admin_menu['comments_lnk'],
                '{SEARCHNEW_TITLE}' => $lang_gallery_admin_menu['searchnew_title'],
                '{SEARCHNEW_LNK}' => $lang_gallery_admin_menu['searchnew_lnk'],
                '{MY_PROF_TITLE}' => $lang_user_admin_menu['my_prof_title'],
                '{MY_PROF_LNK}' => $lang_user_admin_menu['my_prof_lnk'],
                '{UTIL_TITLE}' => $lang_gallery_admin_menu['util_title'],
                '{UTIL_LNK}' => $lang_gallery_admin_menu['util_lnk'],
                '{BAN_TITLE}' => $lang_gallery_admin_menu['ban_title'],
                '{BAN_LNK}' => $lang_gallery_admin_menu['ban_lnk'],
                '{DB_ECARD_TITLE}' => $lang_gallery_admin_menu['db_ecard_title'],
                '{DB_ECARD_LNK}' => $lang_gallery_admin_menu['db_ecard_lnk'],
                '{PICTURES_TITLE}' => $lang_gallery_admin_menu['pictures_title'],
                '{PICTURES_LNK}' => $lang_gallery_admin_menu['pictures_lnk'],
                '{DOCUMENTATION_HREF}' => $documentation_href,
                '{DOCUMENTATION_TITLE}' => $lang_gallery_admin_menu['documentation_title'],
                '{DOCUMENTATION_LNK}' => $lang_gallery_admin_menu['documentation_lnk'],
                '{PLUGINMGR_TITLE}' => $lang_gallery_admin_menu['pluginmgr_title'],
                '{PLUGINMGR_LNK}' => $lang_gallery_admin_menu['pluginmgr_lnk'],
                '{BRIDGEMGR_TITLE}' => $lang_gallery_admin_menu['bridgemgr_title'],
                '{BRIDGEMGR_LNK}' => $lang_gallery_admin_menu['bridgemgr_lnk'],
                '{PHPINFO_TITLE}' => $lang_gallery_admin_menu['phpinfo_title'],
                '{PHPINFO_LNK}' => $lang_gallery_admin_menu['phpinfo_lnk'],
                '{UPDATE_DATABASE_TITLE}' => $lang_gallery_admin_menu['update_database_title'],
                '{UPDATE_DATABASE_LNK}' => $lang_gallery_admin_menu['update_database_lnk'],
                '{VIEW_LOG_FILES_TITLE}' => $lang_gallery_admin_menu['view_log_files_title'],
                '{VIEW_LOG_FILES_LNK}' => $lang_gallery_admin_menu['view_log_files_lnk'],
                '{CHECK_VERSIONS_TITLE}' => $lang_gallery_admin_menu['check_versions_title'],
                '{CHECK_VERSIONS_LNK}' => $lang_gallery_admin_menu['check_versions_lnk'],
                '{OVERALL_STATS_TITLE}' => $lang_gallery_admin_menu['overall_stats_title'],
                '{OVERALL_STATS_LNK}' => $lang_gallery_admin_menu['overall_stats_lnk'],
                '{KEYWORDMGR_TITLE}' => $lang_gallery_admin_menu['keywordmgr_title'],
                '{KEYWORDMGR_LNK}' => $lang_gallery_admin_menu['keywordmgr_lnk'],
                '{EXIFMGR_TITLE}' => $lang_gallery_admin_menu['exifmgr_title'],
                '{EXIFMGR_LNK}' => $lang_gallery_admin_menu['exifmgr_lnk'],
                '{SHOWNEWS_TITLE}' => $lang_gallery_admin_menu['shownews_title'],
                '{SHOWNEWS_LNK}' => $lang_gallery_admin_menu['shownews_lnk'],
                '{EXPORT_TITLE}' => $lang_gallery_admin_menu['export_title'],
                '{EXPORT_LNK}' => $lang_gallery_admin_menu['export_lnk'],
                );

            $html = template_eval($template_gallery_admin_menu, $param);
            //$html.= cpg_alert_dev_version();
        } elseif (USER_ADMIN_MODE) {
            $param = array('{ALBMGR_TITLE}' => $lang_user_admin_menu['albmgr_title'],
                '{ALBMGR_LNK}' => $lang_user_admin_menu['albmgr_lnk'],
                '{MODIFYALB_TITLE}' => $lang_user_admin_menu['modifyalb_title'],
                '{MODIFYALB_LNK}' => $lang_user_admin_menu['modifyalb_lnk'],
                '{MY_PROF_TITLE}' => $lang_user_admin_menu['my_prof_title'],
                '{MY_PROF_LNK}' => $lang_user_admin_menu['my_prof_lnk'],
                '{PICTURES_TITLE}' => $lang_gallery_admin_menu['pictures_title'],
                '{PICTURES_LNK}' => $lang_gallery_admin_menu['pictures_lnk'],
                );

            $html = template_eval($template_user_admin_menu, $param);
        } else {
            $html = '';
        }

        $admin_menu = $html;
    }

    return $admin_menu;
}
/******************************************************************************
** Section <<<theme_admin_mode_menu>>> - END
******************************************************************************/

/******************************************************************************
** Section <<<theme_display_message_block>>> - START
******************************************************************************/
/******************************************************************************
// Function for the theme_display_message_block
The message block (not to be confused with the admin menu) will display message carried over from one page to the other and an RSS feed from the coppermine project page for the admin.
It's advisable not to change it unless you really know what you're doing.
This function composes the individual sections of the block.
******************************************************************************/
function theme_display_message_block() {
    global $lang_gallery_admin_menu, $lang_info, $CONFIG, $message_id;

    $superCage = Inspekt::makeSuperCage();
    $return = '';

    if ($superCage->get->keyExists('message_id')) {
    	$message_id = $superCage->get->getEscaped('message_id');
    }

    if ($message_id != '') {
        $tempMessage = cpgFetchTempMessage($message_id);
        if ($tempMessage != '') {
            $return .= '<a name="cpgMessageBlock"></a>';
            ob_start();
            starttable(-1, $lang_info);
            $return .= ob_get_contents();
            ob_end_clean();
            $return .= <<< EOT
            <tr>
              <td class="tableb" align="center">
                <div id="cpgMessage" class="cpg_user_message">
                  {$tempMessage}
                </div>
              </td>
            </tr>
EOT;
            ob_start();
            endtable();
            $return .= ob_get_contents();
            ob_end_clean();
        }
    }
    if (GALLERY_ADMIN_MODE) {
        cpgCleanTempMessage(); // garbage collection: when the admin is logged in, old messages that failed to display for whatever reason are being removed to keep the temp_messages table clean
        $return .= cpg_alert_dev_version();
        // $return .= cpg_display_rss(); //add RSS feed from coppermine-gallery.net later
    } else { // not in admin mode
        //$return = '';
    }
    return $return;
}
/******************************************************************************
** Section <<<theme_display_message_block>>> - END
******************************************************************************/

/******************************************************************************
** Section <<<theme_display_cat_list>>> - START
******************************************************************************/
function theme_display_cat_list($breadcrumb, &$cat_data, $statistics)
{
    global $template_cat_list, $lang_cat_list;
    if (count($cat_data) > 0) {
        starttable('100%');
        $template = template_extract_block($template_cat_list, 'header');
        $params = array('{CATEGORY}' => $lang_cat_list['category'],
            '{ALBUMS}' => $lang_cat_list['albums'],
            '{PICTURES}' => $lang_cat_list['pictures'],
            );
        echo template_eval($template, $params);
    }

    $template_noabl = template_extract_block($template_cat_list, 'catrow_noalb');
    $template = template_extract_block($template_cat_list, 'catrow');
    foreach($cat_data as $category) {
        if (!isset($category['cat_thumb'])) { $category['cat_thumb'] = ''; }
        if (count($category) == 3) {
            $params = array('{CAT_TITLE}' => $category[0],
                    '{CAT_THUMB}' => $category['cat_thumb'],
                '{CAT_DESC}' => $category[1]
                );
            echo template_eval($template_noabl, $params);
        } elseif (isset($category['cat_albums']) && ($category['cat_albums'] != '')) {
            $params = array('{CAT_TITLE}' => $category[0],
                '{CAT_THUMB}' => $category['cat_thumb'],
                '{CAT_DESC}' => $category[1],
                '{CAT_ALBUMS}' => $category['cat_albums'],
                '{ALB_COUNT}' => $category[2],
                '{PIC_COUNT}' => $category[3],
                );
            echo template_eval($template, $params);
        } else {
            $params = array('{CAT_TITLE}' => $category[0],
                '{CAT_THUMB}' => $category['cat_thumb'],
                '{CAT_DESC}' => $category[1],
                '{CAT_ALBUMS}' => '',
                '{ALB_COUNT}' => $category[2],
                '{PIC_COUNT}' => $category[3],
                );
            echo template_eval($template, $params);
        }
    }

    if ($statistics && count($cat_data) > 0) {
        $template = template_extract_block($template_cat_list, 'footer');
        $params = array('{STATISTICS}' => $statistics);
        echo template_eval($template, $params);
    }


    if (count($cat_data) > 0)
          endtable();
        echo template_extract_block($template_cat_list, 'spacer');
}
/******************************************************************************
** Section <<<theme_display_cat_list>>> - END
******************************************************************************/

/******************************************************************************
** Section <<<theme_display_breadcrumb>>> - START
******************************************************************************/
function theme_display_breadcrumb($breadcrumb, &$cat_data)
{
    /**
     * ** added breadcrumb as a seperate element
     */
    global $template_breadcrumb, $lang_breadcrumb;

    starttable('100%');
    if ($breadcrumb) {
        $template = template_extract_block($template_breadcrumb, 'breadcrumb');
        $params = array('{BREADCRUMB}' => $breadcrumb
            );
        echo template_eval($template, $params);
    }
        endtable();
}
/******************************************************************************
** Section <<<theme_display_breadcrumb>>> - END
******************************************************************************/

/******************************************************************************
** Section <<<theme_display_album_list>>> - START
******************************************************************************/
function theme_display_album_list(&$alb_list, $nbAlb, $cat, $page, $total_pages)
{

    global $CONFIG, $STATS_IN_ALB_LIST, $statistics, $template_tab_display, $template_album_list, $lang_album_list;

    $theme_alb_list_tab_tmpl = $template_tab_display;

    $theme_alb_list_tab_tmpl['left_text'] = strtr($theme_alb_list_tab_tmpl['left_text'], array('{LEFT_TEXT}' => $lang_album_list['album_on_page']));
    $theme_alb_list_tab_tmpl['inactive_tab'] = strtr($theme_alb_list_tab_tmpl['inactive_tab'], array('{LINK}' => 'index.php?cat=' . $cat . '&amp;page=%d'));
    $theme_alb_list_tab_tmpl['inactive_next_tab'] = strtr($theme_alb_list_tab_tmpl['inactive_next_tab'], array('{LINK}' => 'index.php?cat=' . $cat . '&amp;page=%d'));
    $theme_alb_list_tab_tmpl['inactive_prev_tab'] = strtr($theme_alb_list_tab_tmpl['inactive_prev_tab'], array('{LINK}' => 'index.php?cat=' . $cat . '&amp;page=%d'));

    $tabs = create_tabs($nbAlb, $page, $total_pages, $theme_alb_list_tab_tmpl);

    $album_cell = template_extract_block($template_album_list, 'album_cell');
    $empty_cell = template_extract_block($template_album_list, 'empty_cell');
    $tabs_row = template_extract_block($template_album_list, 'tabs');
    $stat_row = template_extract_block($template_album_list, 'stat_row');
    $spacer = template_extract_block($template_album_list, 'spacer');
    $header = template_extract_block($template_album_list, 'header');
    $footer = template_extract_block($template_album_list, 'footer');
    $rows_separator = template_extract_block($template_album_list, 'row_separator');

    $count = 0;

    $columns = $CONFIG['album_list_cols'];
    $column_width = ceil(100 / $columns);
    $thumb_cell_width = $CONFIG['alb_list_thumb_size'] + 2;

    starttable('100%');

    if ($STATS_IN_ALB_LIST) {
        $params = array('{STATISTICS}' => $statistics,
            '{COLUMNS}' => $columns,
            );
        echo template_eval($stat_row, $params);
    }

    echo $header;

    if (is_array($alb_list)) {
        foreach($alb_list as $album) {
            $count ++;

            $params = array('{COL_WIDTH}' => $column_width,
                '{ALBUM_TITLE}' => $album['album_title'],
                '{THUMB_CELL_WIDTH}' => $thumb_cell_width,
                '{ALB_LINK_TGT}' => "thumbnails.php?album={$album['aid']}",
                '{ALB_LINK_PIC}' => $album['thumb_pic'],
                '{ADMIN_MENU}' => $album['album_adm_menu'],
                '{ALB_DESC}' => $album['album_desc'],
                '{ALB_INFOS}' => $album['album_info'],
                '{ALB_HITS}' => $album['alb_hits'],
                );

            echo template_eval($album_cell, $params);

            if ($count % $columns == 0 && $count < count($alb_list)) {
                echo $rows_separator;
            }
        }
    }

    $params = array('{COL_WIDTH}' => $column_width,
          '{SPACER}' => $thumb_cell_width
          );
    $empty_cell = template_eval($empty_cell, $params);

    while ($count++ % $columns != 0) {
        echo $empty_cell;
    }

    echo $footer;
    // Tab display
    $params = array('{COLUMNS}' => $columns,
        '{TABS}' => $tabs,
        );
    echo template_eval($tabs_row, $params);

    endtable();

    echo $spacer;
}
/******************************************************************************
** Section <<<theme_display_album_list>>> - END
******************************************************************************/

/******************************************************************************
** Section <<<theme_display_album_list_cat>>> - START
******************************************************************************/
// Function to display first level Albums of a category
function theme_display_album_list_cat(&$alb_list, $nbAlb, $cat, $page, $total_pages)
{
    global $CONFIG, $STATS_IN_ALB_LIST, $statistics, $template_tab_display, $template_album_list_cat, $lang_album_list;
    if (!$CONFIG['first_level']) {
        return;
    }

    $theme_alb_list_tab_tmpl = $template_tab_display;

    $theme_alb_list_tab_tmpl['left_text'] = strtr($theme_alb_list_tab_tmpl['left_text'], array('{LEFT_TEXT}' => $lang_album_list['album_on_page']));
    $theme_alb_list_tab_tmpl['inactive_tab'] = strtr($theme_alb_list_tab_tmpl['inactive_tab'], array('{LINK}' => 'index.php?cat=' . $cat . '&amp;page=%d'));

    $tabs = create_tabs($nbAlb, $page, $total_pages, $theme_alb_list_tab_tmpl);
    // echo $template_album_list_cat;
    $template_album_list_cat1 = $template_album_list_cat;
    $album_cell = template_extract_block($template_album_list_cat1, 'c_album_cell');
    $empty_cell = template_extract_block($template_album_list_cat1, 'c_empty_cell');
    $tabs_row = template_extract_block($template_album_list_cat1, 'c_tabs');
    $stat_row = template_extract_block($template_album_list_cat1, 'c_stat_row');
    $spacer = template_extract_block($template_album_list_cat1, 'c_spacer');
    $header = template_extract_block($template_album_list_cat1, 'c_header');
    $footer = template_extract_block($template_album_list_cat1, 'c_footer');
    $rows_separator = template_extract_block($template_album_list_cat1, 'c_row_separator');

    $count = 0;

    $columns = $CONFIG['album_list_cols'];
    $column_width = ceil(100 / $columns);
    $thumb_cell_width = $CONFIG['alb_list_thumb_size'] + 2;

    starttable('100%');

    if ($STATS_IN_ALB_LIST) {
        $params = array('{STATISTICS}' => $statistics,
            '{COLUMNS}' => $columns,
            );
        echo template_eval($stat_row, $params);
    }

    echo $header;

    if (is_array($alb_list)) {
        foreach($alb_list as $album) {
            $count ++;

            $params = array('{COL_WIDTH}' => $column_width,
                '{ALBUM_TITLE}' => $album['album_title'],
                '{THUMB_CELL_WIDTH}' => $thumb_cell_width,
                '{ALB_LINK_TGT}' => "thumbnails.php?album={$album['aid']}",
                '{ALB_LINK_PIC}' => $album['thumb_pic'],
                '{ADMIN_MENU}' => $album['album_adm_menu'],
                '{ALB_DESC}' => $album['album_desc'],
                '{ALB_INFOS}' => $album['album_info'],
                '{ALB_HITS}' => $album['alb_hits'],
                );

            echo template_eval($album_cell, $params);

            if ($count % $columns == 0 && $count < count($alb_list)) {
                echo $rows_separator;
            }
        }
    }

    $params = array('{COL_WIDTH}' => $column_width,
          '{SPACER}' => $thumb_cell_width
          );
    $empty_cell = template_eval($empty_cell, $params);

    while ($count++ % $columns != 0) {
        echo $empty_cell;
    }

    echo $footer;
    // Tab display
    $params = array('{COLUMNS}' => $columns,
        '{TABS}' => $tabs,
        );
    echo template_eval($tabs_row, $params);

    endtable();

    echo $spacer;
}
/******************************************************************************
** Section <<<theme_display_album_list_cat>>> - END
******************************************************************************/

/******************************************************************************
** Section <<<theme_display_thumbnails>>> - START
******************************************************************************/
function theme_display_thumbnails(&$thumb_list, $nbThumb, $album_name, $aid, $cat, $page, $total_pages, $sort_options, $display_tabs, $mode = 'thumb', $date='')
{
    global $CONFIG;
    global $template_thumb_view_title_row,$template_fav_thumb_view_title_row, $lang_thumb_view,$lang_common, $template_tab_display, $template_thumbnail_view, $lang_album_list, $lang_errors;

    $superCage = Inspekt::makeSuperCage();

    static $header = '';
    static $thumb_cell = '';
    static $empty_cell = '';
    static $row_separator = '';
    static $footer = '';
    static $tabs = '';
    static $spacer = '';

    if ($header == '') {
        $thumb_cell = template_extract_block($template_thumbnail_view, 'thumb_cell');
        $tabs = template_extract_block($template_thumbnail_view, 'tabs');
        $header = template_extract_block($template_thumbnail_view, 'header');
        $empty_cell = template_extract_block($template_thumbnail_view, 'empty_cell');
        $row_separator = template_extract_block($template_thumbnail_view, 'row_separator');
        $footer = template_extract_block($template_thumbnail_view, 'footer');
        $spacer = template_extract_block($template_thumbnail_view, 'spacer');
    }

    $cat_link = is_numeric($aid) ? '' : '&amp;cat=' . $cat;
    $date_link = $date=='' ? '' : '&amp;date=' . $date;
    if ($superCage->get->getInt('uid')) {
    	$uid_link = '&amp;uid=' . $superCage->get->getInt('uid');
    } else {
    	$uid_link = '';
    }

    $theme_thumb_tab_tmpl = $template_tab_display;

    if ($mode == 'thumb') {
        $theme_thumb_tab_tmpl['left_text'] = strtr($theme_thumb_tab_tmpl['left_text'], array('{LEFT_TEXT}' => $aid == 'lastalb' ? $lang_album_list['album_on_page'] : $lang_thumb_view['pic_on_page']));
        $theme_thumb_tab_tmpl['inactive_tab'] = strtr($theme_thumb_tab_tmpl['inactive_tab'], array('{LINK}' => 'thumbnails.php?album=' . $aid . $cat_link . $date_link . $uid_link . '&amp;page=%d'));
        $theme_thumb_tab_tmpl['inactive_next_tab'] = strtr($theme_thumb_tab_tmpl['inactive_next_tab'], array('{LINK}' => 'thumbnails.php?album=' . $aid . $cat_link . $date_link . $uid_link . '&amp;page=%d'));
        $theme_thumb_tab_tmpl['inactive_prev_tab'] = strtr($theme_thumb_tab_tmpl['inactive_prev_tab'], array('{LINK}' => 'thumbnails.php?album=' . $aid . $cat_link . $date_link . $uid_link . '&amp;page=%d'));
    } else {
        $theme_thumb_tab_tmpl['left_text'] = strtr($theme_thumb_tab_tmpl['left_text'], array('{LEFT_TEXT}' => $lang_thumb_view['user_on_page']));
        $theme_thumb_tab_tmpl['inactive_tab'] = strtr($theme_thumb_tab_tmpl['inactive_tab'], array('{LINK}' => 'index.php?cat=' . $cat . '&amp;page=%d'));
        $theme_thumb_tab_tmpl['inactive_next_tab'] = strtr($theme_thumb_tab_tmpl['inactive_next_tab'], array('{LINK}' => 'index.php?cat=' . $cat . '&amp;page=%d'));
        $theme_thumb_tab_tmpl['inactive_prev_tab'] = strtr($theme_thumb_tab_tmpl['inactive_prev_tab'], array('{LINK}' => 'index.php?cat=' . $cat . '&amp;page=%d'));
    }

    $thumbcols = $CONFIG['thumbcols'];
    $cell_width = ceil(100 / $CONFIG['thumbcols']) . '%';

    $tabs_html = $display_tabs ? create_tabs($nbThumb, $page, $total_pages, $theme_thumb_tab_tmpl) : '';
    // The sort order options are not available for meta albums
    if ($sort_options) {
        $param = array('{ALBUM_NAME}' => $album_name,
            '{AID}' => $aid,
            '{PAGE}' => $page,
            '{NAME}' => $lang_thumb_view['name'],
            '{TITLE}' => $lang_common['title'],
            '{DATE}' => $lang_thumb_view['date'],
            '{SORT_TA}' => $lang_thumb_view['sort_ta'],
            '{SORT_TD}' => $lang_thumb_view['sort_td'],
            '{SORT_NA}' => $lang_thumb_view['sort_na'],
            '{SORT_ND}' => $lang_thumb_view['sort_nd'],
            '{SORT_DA}' => $lang_thumb_view['sort_da'],
            '{SORT_DD}' => $lang_thumb_view['sort_dd'],
            '{POSITION}' => $lang_thumb_view['position'],
            '{SORT_PA}' => $lang_thumb_view['sort_pa'],
            '{SORT_PD}' => $lang_thumb_view['sort_pd'],
            );
        $title = template_eval($template_thumb_view_title_row, $param);
    } else if ($aid == 'favpics' && $CONFIG['enable_zipdownload'] == 1) { //Lots of stuff can be added here later
       $param = array('{ALBUM_NAME}' => $album_name,
                             '{DOWNLOAD_ZIP}'=>$lang_thumb_view['download_zip']
                               );
       $title = template_eval($template_fav_thumb_view_title_row, $param);
    }else{
        $title = $album_name;
    }


    if ($mode == 'thumb') {
        starttable('100%', $title, $thumbcols);
    } else {
        starttable('100%');
    }

    echo $header;

    $i = 0;
    foreach($thumb_list as $thumb) {
        $i++;
        if ($mode == 'thumb') {
            if ($aid == 'lastalb') {
                $params = array('{CELL_WIDTH}' => $cell_width,
                    '{LINK_TGT}' => "thumbnails.php?album={$thumb['aid']}",
                    '{THUMB}' => $thumb['image'],
                    '{CAPTION}' => $thumb['caption'],
                    '{ADMIN_MENU}' => $thumb['admin_menu']
                    );
            ########## Commented by Abbas for new URL ###############
            // Can be removed after testing
            /*
            } else {
                $params = array('{CELL_WIDTH}' => $cell_width,
                    '{LINK_TGT}' => "displayimage.php?album=$aid$cat_link&amp;pos={$thumb['pos']}$uid_link",
                    '{THUMB}' => $thumb['image'],
                    '{CAPTION}' => $thumb['caption'],
                    '{ADMIN_MENU}' => $thumb['admin_menu']
                    );
            }
            */
            ########################################################

            ######### Added by Abbas for new URL #################
            } elseif ($aid == 'random'){
                // determine if thumbnail link targets should open in a pop-up
                if ($CONFIG['thumbnail_to_fullsize'] == 1) { // code for full-size pop-up
                    if (!USER_ID && $CONFIG['allow_unlogged_access'] <= 2) {
                       $target = 'javascript:;" onClick="alert(\''.sprintf($lang_errors['login_needed'],'','','','').'\');';
                    } else {
                      $target = 'javascript:;" onClick="MM_openBrWindow(\'displayimage.php?pid=' . $thumb['pid'] . '&fullsize=1\',\'' . uniqid(rand()) . '\',\'scrollbars=yes,toolbar=no,status=no,resizable=yes,width=' . ((int)$thumb['pwidth']+(int)$CONFIG['fullsize_padding_x']) .  ',height=' .   ((int)$thumb['pheight']+(int)$CONFIG['fullsize_padding_y']). '\');';
                    }
                } else {
                    $target = "displayimage.php?pid={$thumb['pid']}$uid_link";
                }
                $params = array('{CELL_WIDTH}' => $cell_width,
                    '{LINK_TGT}' => $target,
                    '{THUMB}' => $thumb['image'],
                    '{CAPTION}' => $thumb['caption'],
                    '{ADMIN_MENU}' => $thumb['admin_menu']
                    );
            ######################################################
            } else {
                // determine if thumbnail link targets should open in a pop-up
                if ($CONFIG['thumbnail_to_fullsize'] == 1) { // code for full-size pop-up
                    if (!USER_ID && $CONFIG['allow_unlogged_access'] <= 2) {
                       $target = 'javascript:;" onClick="alert(\''.sprintf($lang_errors['login_needed'],'','','','').'\');';
                    } else {
                       $target = 'javascript:;" onClick="MM_openBrWindow(\'displayimage.php?pid=' . $thumb['pid'] . '&fullsize=1\',\'' . uniqid(rand()) . '\',\'scrollbars=yes,toolbar=no,status=no,resizable=yes,width=' . ((int)$thumb['pwidth']+(int)$CONFIG['fullsize_padding_x']) .  ',height=' .   ((int)$thumb['pheight']+(int)$CONFIG['fullsize_padding_y']). '\');';
                    }
                } else {
                    $target = "displayimage.php?album=$aid$cat_link$date_link&amp;pid={$thumb['pid']}$uid_link";
                }
                $params = array('{CELL_WIDTH}' => $cell_width,
                    //'{LINK_TGT}' => "displayimage.php?album=$aid$cat_link&amp;pos={$thumb['pos']}",
                    '{LINK_TGT}' => $target,
                    '{THUMB}' => $thumb['image'],
                    '{CAPTION}' => $thumb['caption'],
                    '{ADMIN_MENU}' => $thumb['admin_menu']
                    );
            }

        } else {
            $params = array('{CELL_WIDTH}' => $cell_width,
                '{LINK_TGT}' => "index.php?cat={$thumb['cat']}",
                '{THUMB}' => $thumb['image'],
                '{CAPTION}' => $thumb['caption'],
                '{ADMIN_MENU}' => ''
                );
        }
        echo template_eval($thumb_cell, $params);

        if ((($i % $thumbcols) == 0) && ($i < count($thumb_list))) {
            echo $row_separator;
        }
    }
    for (;($i % $thumbcols); $i++) {
        echo $empty_cell;
    }
    echo $footer;

    if ($display_tabs) {
        $params = array('{THUMB_COLS}' => $thumbcols,
            '{TABS}' => $tabs_html
            );
        echo template_eval($tabs, $params);
    }

    endtable();
    echo $spacer;
}
/******************************************************************************
** Section <<<theme_display_thumbnails>>> - END
******************************************************************************/

/******************************************************************************
** Section <<<theme_display_film_strip>>> - START
******************************************************************************/
// Function to display the film strip
function theme_display_film_strip(&$thumb_list, $nbThumb, $album_name, $aid, $cat, $pos, $sort_options, $mode = 'thumb', $date='', $filmstrip_prev_pos, $filmstrip_next_pos) {
    global $CONFIG, $THEME_DIR;
    global $template_film_strip, $lang_film_strip, $pic_count;

    $superCage = Inspekt::makeSuperCage();

    static $template = '';
    static $thumb_cell = '';
    static $empty_cell = '';
    static $spacer = '';

    if ((!$template)) {
        $template = $template_film_strip;
        $thumb_cell = template_extract_block($template, 'thumb_cell');
        $empty_cell = template_extract_block($template, 'empty_cell');
    }

    $cat_link = is_numeric($aid) ? '' : '&amp;cat=' . $cat;
    $date_link = $date=='' ? '' : '&amp;date=' . $date;

    if ($superCage->get->getInt('uid')) {
        $uid_link = '&amp;uid=' . $superCage->get->getInt('uid');
    } else {
        $uid_link = '';
    }

    $thumbcols = $CONFIG['thumbcols'];
    $cell_width = ceil(100 / $CONFIG['max_film_strip_items']) . '%';

    $i = 0;
    $thumb_strip = '';
    foreach($thumb_list as $thumb) {
        $i++;
        if ($mode == 'thumb') {
            if ($thumb['pos'] == $pos && !$superCage->get->keyExists('film_strip')) {
                    $thumb['image'] = str_replace('class="image"', 'class="image middlethumb"', $thumb['image']);
            }
            // determine if thumbnail link targets should open in a pop-up
            if ($CONFIG['thumbnail_to_fullsize'] == 1) { // code for full-size pop-up
                if (!USER_ID && $CONFIG['allow_unlogged_access'] <= 2) {
                       $target = 'javascript:;" onClick="alert(\''.sprintf($lang_errors['login_needed'],'','','','').'\');';
                } else {
                    $target = 'javascript:;" onClick="MM_openBrWindow(\'displayimage.php?pid=' . $thumb['pid'] . '&fullsize=1\',\'' . uniqid(rand()) . '\',\'scrollbars=yes,toolbar=no,status=no,resizable=yes,width=' . ((int)$thumb['pwidth']+(int)$CONFIG['fullsize_padding_x']) .  ',height=' .   ((int)$thumb['pheight']+(int)$CONFIG['fullsize_padding_y']). '\');';
                }
            } else {
                $target = "displayimage.php?album=$aid$cat_link$date_link&amp;pid={$thumb['pid']}$uid_link";
            }
            $params = array('{CELL_WIDTH}' => $cell_width,
                '{LINK_TGT}' => $target,
                '{THUMB}' => $thumb['image'],
                '{CAPTION}' => $thumb['caption'],
                '{ADMIN_MENU}' => ''
                );
        } else {
            $params = array('{CELL_WIDTH}' => $cell_width,
                '{LINK_TGT}' => "index.php?cat={$thumb['cat']}",
                '{THUMB}' => $thumb['image'],
                '{CAPTION}' => '',
                '{ADMIN_MENU}' => ''
                );
        }
        $thumb_strip .= template_eval($thumb_cell, $params);
    }

    if (defined('THEME_HAS_FILM_STRIP_GRAPHICS')) {
        $tile1 = $THEME_DIR . 'images/tile1.gif';
        $tile2 = $THEME_DIR . 'images/tile2.gif';
    } elseif (defined('THEME_HAS_FILM_STRIP_GRAPHIC')) {
        $tile1=$tile2=$THEME_DIR . 'images/tile.gif';
    } else {
        $tile1=$tile2= 'images/tile.gif';
    }

    if (defined('THEME_HAS_NAVBAR_GRAPHICS')) {
		$location = $THEME_DIR;
	} else {
		$location= '';
	}
	$prev_tgt = "displayimage.php?film_strip=1&amp;pos=$filmstrip_prev_pos&amp;album=$aid&amp;cat=$cat";
	$next_tgt = "displayimage.php?film_strip=1&amp;pos=$filmstrip_next_pos&amp;album=$aid&amp;cat=$cat";
    $params = array('{THUMB_STRIP}' => $thumb_strip,
        '{COLS}' => $i,
        '{TILE1}' => $tile1,
        '{TILE2}' => $tile2,
        '{PREV_LINK}' => $pos > 0 ? "<a href=\"$prev_tgt\" id=\"filmstrip_prev\" rel=\"nofollow\"><img src=\"{$location}images/prev.gif\" border=\"0\" /></a>" : ' ',
        '{NEXT_LINK}' => $pos < $pic_count - 1 ? "<a href=\"$next_tgt\" id=\"filmstrip_next\" rel=\"nofollow\"><img src=\"{$location}images/next.gif\" border=\"0\" /></a>" : ' ',
        '{THUMB_TD_STYLE}' => $superCage->get->keyExists('film_strip') ? 'display: none;' : '',
        );

    ob_start();
    echo '<div id="filmstrip">';
    starttable($CONFIG['picture_table_width']);
    echo template_eval($template, $params);
    endtable();
    echo '</div>';
    $film_strip = ob_get_contents();
    ob_end_clean();

    return $film_strip;
}
/******************************************************************************
** Section <<<theme_display_film_strip>>> - END
******************************************************************************/

/******************************************************************************
** Section <<<theme_no_img_to_display>>> - START
******************************************************************************/
function theme_no_img_to_display($album_name)
{
    global $lang_errors, $template_no_img_to_display;

    static $template = '';
    static $spacer;

    if ((!$template)) {
        $template = $template_no_img_to_display;
        $spacer = template_extract_block($template, 'spacer');
    }

    $params = array('{TEXT}' => $lang_errors['no_img_to_display']);
    starttable('100%', $album_name);
    echo template_eval($template, $params);
    endtable();
}
/******************************************************************************
** Section <<<theme_no_img_to_display>>> - END
******************************************************************************/

/******************************************************************************
** Section <<<theme_display_image>>> - START
******************************************************************************/
function theme_display_image($nav_menu, $picture, $votes, $pic_info, $comments, $film_strip)
{
    global $CONFIG;

    $width = $CONFIG['picture_table_width'];

    starttable();
    echo $nav_menu;
    endtable();

    starttable();
    echo $picture;
    endtable();
    if ($CONFIG['display_film_strip'] == 1) {
        echo $film_strip;
    }


    echo $votes;



    $picinfo = $superCage->cookie->keyExists('picinfo') ? $superCage->cookie->getAlpha('picinfo') : ($CONFIG['display_pic_info'] ? 'block' : 'none');
    echo "\n\r<div id=\"picinfo\" style=\"display: $picinfo;\">\n";
    starttable();
    echo $pic_info;
    endtable();
    echo "</div>\n";

    echo "<div id=\"comments\">\n";
        echo $comments;
        echo "</div>\n";

}
/******************************************************************************
** Section <<<theme_display_image>>> - END
******************************************************************************/

/******************************************************************************
** Section <<<theme_html_picinfo>>> - START
******************************************************************************/
function theme_html_picinfo(&$info)
{
    global $lang_picinfo, $CONFIG, $CURRENT_PIC_DATA;

        if($CONFIG['picinfo_movie_download_link']){
                $path_to_pic = $CONFIG['fullpath'] . $CURRENT_PIC_DATA['filepath'] . $CURRENT_PIC_DATA['filename'];
                $mime_content = cpg_get_type($CURRENT_PIC_DATA['filename']);
                if ($mime_content['content']=='movie') {
                        $info[$lang_picinfo['download_URL']] = '<a href="' . $CONFIG["ecards_more_pic_target"] . (substr($CONFIG["ecards_more_pic_target"], -1) == '/' ? '' : '/') . $path_to_pic.'">'. $lang_picinfo['movie_player'] .'</a>';
                }
        }

    $html = '';

    $html .= "        <tr><td colspan=\"2\" class=\"tableh2_compact\">{$lang_picinfo['title']}</td></tr>\n";
    $template = "        <tr><td class=\"tableb tableb_alternate tableb tableb_alternate_alternate_compact\" valign=\"top\" >%s:</td><td class=\"tableb tableb_alternate tableb tableb_alternate_alternate_compact\">%s</td></tr>\n";
    foreach ($info as $key => $value) $html .= sprintf($template, $key, $value);

    return $html;
}
/******************************************************************************
** Section <<<theme_html_picinfo>>> - END
******************************************************************************/

/******************************************************************************
** Section <<<theme_html_picture>>> - START
******************************************************************************/
// Displays a picture
function theme_html_picture()
{
    global $CONFIG, $CURRENT_PIC_DATA, $CURRENT_ALBUM_DATA, $USER;
    global $album, $comment_date_fmt, $template_display_media;
    global $lang_display_image_php, $lang_picinfo, $lang_errors;

    $pid = $CURRENT_PIC_DATA['pid'];
    $pic_title = '';

    if (!isset($USER['liv']) || !is_array($USER['liv'])) {
        $USER['liv'] = array();
    }
    // Add 1 to hit counter
    if (!USER_IS_ADMIN && !in_array($pid, $USER['liv']) && $superCage->cookie->keyExists($CONFIG['cookie_name'] . '_data')) {
        add_hit($pid);
        if (count($USER['liv']) > 4) array_shift($USER['liv']);
        array_push($USER['liv'], $pid);
    }

    if($CONFIG['thumb_use']=='ht' && $CURRENT_PIC_DATA['pheight'] > $CONFIG['picture_width'] ){ // The wierd comparision is because only picture_width is stored
      $condition = true;
    }elseif($CONFIG['thumb_use']=='wd' && $CURRENT_PIC_DATA['pwidth'] > $CONFIG['picture_width']){
      $condition = true;
    }elseif($CONFIG['thumb_use']=='any' && max($CURRENT_PIC_DATA['pwidth'], $CURRENT_PIC_DATA['pheight']) > $CONFIG['picture_width']){
      $condition = true;
        //thumb cropping
    }elseif($CONFIG['thumb_use']=='ex' && max($CURRENT_PIC_DATA['pwidth'], $CURRENT_PIC_DATA['pheight']) > $CONFIG['picture_width']){
      $condition = true;
    }else{
     $condition = false;
    }

    if ($CURRENT_PIC_DATA['title'] != '') {
        $pic_title .= $CURRENT_PIC_DATA['title'] . "\n";
    }
    if ($CURRENT_PIC_DATA['caption'] != '') {
        $pic_title .= $CURRENT_PIC_DATA['caption'] . "\n";
    }
    if ($CURRENT_PIC_DATA['keywords'] != '') {
        $pic_title .= $lang_picinfo['Keywords'] . ": " . $CURRENT_PIC_DATA['keywords'];
    }

    if (!$CURRENT_PIC_DATA['title'] && !$CURRENT_PIC_DATA['caption']) {
        template_extract_block($template_display_media, 'img_desc');
    } else {
        if (!$CURRENT_PIC_DATA['title']) {
            template_extract_block($template_display_media, 'title');
        }
        if (!$CURRENT_PIC_DATA['caption']) {
            template_extract_block($template_display_media, 'caption');
        }
    }

    $CURRENT_PIC_DATA['menu'] = html_picture_menu(); //((USER_ADMIN_MODE && $CURRENT_ALBUM_DATA['category'] == FIRST_USER_CAT + USER_ID) || ($CONFIG['users_can_edit_pics'] && $CURRENT_PIC_DATA['owner_id'] == USER_ID && USER_ID != 0) || GALLERY_ADMIN_MODE) ? html_picture_menu($pid) : '';

    if ($CONFIG['make_intermediate'] && $condition ) {
        $picture_url = get_pic_url($CURRENT_PIC_DATA, 'normal');
    } else {
        $picture_url = get_pic_url($CURRENT_PIC_DATA, 'fullsize');
    }

        //thumb cropping
    $image_size = compute_img_size($CURRENT_PIC_DATA['pwidth'], $CURRENT_PIC_DATA['pheight'], $CONFIG['picture_width'], 'normal');

    $pic_title = '';
    $mime_content = cpg_get_type($CURRENT_PIC_DATA['filename']);


    if ($mime_content['content']=='movie' || $mime_content['content']=='audio') {

        if ($CURRENT_PIC_DATA['pwidth']==0 || $CURRENT_PIC_DATA['pheight']==0) {
            $CURRENT_PIC_DATA['pwidth']  = 320; // Default width

            // Set default height; if file is a movie
            if ($mime_content['content']=='movie') {
                $CURRENT_PIC_DATA['pheight'] = 240; // Default height
            }
        }

        $ctrl_offset['mov']=15;
        $ctrl_offset['wmv']=45;
        $ctrl_offset['swf']=0;
        $ctrl_offset['rm']=0;
        $ctrl_offset_default=45;
        $ctrl_height = (isset($ctrl_offset[$mime_content['extension']]))?($ctrl_offset[$mime_content['extension']]):$ctrl_offset_default;
        $image_size['whole']='width="'.$CURRENT_PIC_DATA['pwidth'].'" height="'.($CURRENT_PIC_DATA['pheight']+$ctrl_height).'"';
    }

    if ($mime_content['content']=='image') {
        if (isset($image_size['reduced'])) {
            $imginfo=getimagesize($picture_url);
            $winsizeX = $CURRENT_PIC_DATA['pwidth']+$CONFIG['fullsize_padding_x'];  //the +'s are the mysterious FF and IE paddings
            $winsizeY = $CURRENT_PIC_DATA['pheight']+$CONFIG['fullsize_padding_y']; //the +'s are the mysterious FF and IE paddings
            if ($CONFIG['transparent_overlay'] == 1) {
                $pic_html = "<table cellpadding=\"0\" cellspacing=\"0\" border=\"0\"><tr><td background=\"" . $picture_url . "\" width=\"{$imginfo[0]}\" height=\"{$imginfo[1]}\" class=\"image\">";
                if (!USER_ID && $CONFIG['allow_unlogged_access'] <= 2) {
                   $pic_html .= '<a href="javascript:;" onClick="alert(\''.sprintf($lang_errors['login_needed'],'','','','').'\');">';
                } else {
                  $pic_html .= "<a href=\"javascript:;\" onclick=\"MM_openBrWindow('displayimage.php?pid=$pid&amp;fullsize=1','" . uniqid(rand()) . "','scrollbars=yes,toolbar=no,status=no,resizable=yes,width=$winsizeX,height=$winsizeY')\">";
                }
                $pic_title = $lang_display_image_php['view_fs'] . "\n==============\n" . $pic_title;
                $pic_html .= "<img src=\"images/image.gif?id=".floor(rand()*1000+rand())."\" width={$imginfo[0]} height={$imginfo[1]}  border=\"0\" alt=\"{$lang_display_image_php['view_fs']}\" /><br />";
                $pic_html .= "</a>\n </td></tr></table>";
            } else {
                if (!USER_ID && $CONFIG['allow_unlogged_access'] <= 2) {
                   $pic_html = '<a href="javascript:;" onClick="alert(\''.sprintf($lang_errors['login_needed'],'','','','').'\');">';
                } else {
                  $pic_html = "<a href=\"javascript:;\" onclick=\"MM_openBrWindow('displayimage.php?pid=$pid&amp;fullsize=1','" . uniqid(rand()) . "','scrollbars=yes,toolbar=no,status=no,resizable=yes,width=$winsizeX,height=$winsizeY')\">";
                }
                $pic_title = $lang_display_image_php['view_fs'] . "\n==============\n" . $pic_title;
                $pic_html .= "<img src=\"" . $picture_url . "\" class=\"image\" border=\"0\" alt=\"{$lang_display_image_php['view_fs']}\" /><br />";
                $pic_html .= "</a>\n";
            }
        } else {
            if ($CONFIG['transparent_overlay'] == 1) {
                $pic_html = "<table cellpadding=\"0\" cellspacing=\"0\" border=\"0\"><tr><td background=\"" . $picture_url . "\" width=\"{$CURRENT_PIC_DATA['pwidth']}\" height=\"{$CURRENT_PIC_DATA['pheight']}\" class=\"image\">";
                $pic_html .= "<img src=\"images/image.gif?id=".floor(rand()*1000+rand())."\" width={$CURRENT_PIC_DATA['pwidth']} height={$CURRENT_PIC_DATA['pheight']} border=\"0\" alt=\"\" /><br />\n";
                $pic_html .= "</td></tr></table>";
            } else {
                $pic_html = "<img src=\"" . $picture_url . "\" {$image_size['geom']} class=\"image\" border=\"0\" alt=\"\" /><br />\n";
            }
        }
    } elseif ($mime_content['content']=='document') {
        $pic_thumb_url = get_pic_url($CURRENT_PIC_DATA,'thumb');
        $pic_html = "<a href=\"{$picture_url}\" target=\"_blank\" class=\"document_link\"><img src=\"".$pic_thumb_url."\" border=\"0\" class=\"image\" /></a>\n<br />";
    } else {
        $autostart = ($CONFIG['media_autostart']) ? ('true'):('false');

        $players['WMP'] = array('id' => 'MediaPlayer',
                                'clsid' => 'classid="clsid:6BF52A52-394A-11D3-B153-00C04F79FAA6" ',
                                'codebase' => 'codebase="http://activex.microsoft.com/activex/controls/mplayer/en/nsmp2inf.cab#Version=5,1,52,701" ',
                                'mime' => 'type="application/x-mplayer2" ',
                               );
        $players['RMP'] = array('id' => 'RealPlayer',
                                'clsid' => 'classid="clsid:CFCDAA03-8BE4-11cf-B84B-0020AFBBCCFA" ',
                                'codebase' => '',
                                'mime' => 'type="audio/x-pn-realaudio-plugin" '
                               );
        $players['QT']  = array('id' => 'QuickTime',
                                'clsid' => 'classid="clsid:02BF25D5-8C17-4B23-BC80-D3488ABDDC6B" ',
                                'codebase' => 'codebase="http://www.apple.com/qtactivex/qtplugin.cab" ',
                                'mime' => 'type="video/x-quicktime" '
                               );
        $players['SWF'] = array('id' => 'SWFlash',
                                'clsid' => ' classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" ',
                                'codebase' => 'codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" ',
                                'mime' => 'type="application/x-shockwave-flash" '
                               );
        $players['UNK'] = array('id' => 'DefaultPlayer',
                                'clsid' => '',
                                'codebase' => '',
                                'mime' => ''
                               );

        //if (isset($_COOKIE[$CONFIG['cookie_name'].'_'.$mime_content['extension'].'player'])) {
        if ($superCage->cookie->keyExists($CONFIG['cookie_name'].'_'.$mime_content['extension'].'player')) {
            //$user_player = $_COOKIE[$CONFIG['cookie_name'].'_'.$mime_content['extension'].'player'];
            $user_player = $superCage->cookie->noTags($CONFIG['cookie_name'].'_'.$mime_content['extension'].'player');
        } else {
            $user_player = $mime_content['player'];
        }

                // There isn't a player selected or user wants client-side control
        if (!$user_player) {
            $user_player = 'UNK';
        }

        $player = $players[$user_player];

        $pic_html  = '<object id="'.$player['id'].'" '.$player['classid'].$player['codebase'].$player['mime'].$image_size['whole'].'>';
        $pic_html .= "<param name=\"autostart\" value=\"$autostart\" /><param name=\"src\" value=\"". $picture_url . "\" />";
        $pic_html .= '<embed '.$image_size['whole'].' src="'. $picture_url . '" autostart="'.$autostart.'" '.$player['mime'].'></embed>';
        $pic_html .= "</object><br />\n";
    }

    $CURRENT_PIC_DATA['html'] = $pic_html;
    $CURRENT_PIC_DATA['header'] = '';
    $CURRENT_PIC_DATA['footer'] = '';

    $CURRENT_PIC_DATA = CPGPluginAPI::filter('file_data',$CURRENT_PIC_DATA);

    $params = array('{CELL_HEIGHT}' => '100',
        '{IMAGE}' => $CURRENT_PIC_DATA['header'].$CURRENT_PIC_DATA['html'].$CURRENT_PIC_DATA['footer'],
        '{ADMIN_MENU}' => $CURRENT_PIC_DATA['menu'],
        '{TITLE}' => bb_decode($CURRENT_PIC_DATA['title']),
        '{CAPTION}' => bb_decode($CURRENT_PIC_DATA['caption']),
        );

    return template_eval($template_display_media, $params);
}
/******************************************************************************
** Section <<<theme_html_picture>>> - END
******************************************************************************/

/******************************************************************************
** Section <<<theme_html_img_nav_menu>>> - START
******************************************************************************/
function theme_html_img_nav_menu() {
    global $CONFIG, $CURRENT_PIC_DATA, $meta_nav, $THEME_DIR, $CPG_PHP_SELF; //$PHP_SELF,
    global $album, $cat, $pos, $pic_count, $pic_data, $lang_img_nav_bar, $lang_text_dir, $template_img_navbar;

    $superCage = Inspekt::makeSuperCage();

    $cat_link = is_numeric($album) ? '' : '&amp;cat=' . $cat;
    //$date_link = $_GET['date']=='' ? '' : '&date=' . cpgValidateDate($_GET['date']);

    if ($superCage->get->keyExists('date')) {
    	//raw is used as it will be validated
    	$date_link = '&date=' . cpgValidateDate($superCage->get->getRaw('date'));
    } else {
    	$date_link = '';
    }

    //$uid_link = is_numeric($_GET['uid']) ? '&amp;uid=' . $_GET['uid'] : '';
    if ($superCage->get->getInt('uid')) {
        $uid_link = '&amp;uid=' . $superCage->get->getInt('uid');
    } else {
        $uid_link = '';
    }

    $human_pos = $pos + 1;
    $page = ceil(($pos + 1) / ($CONFIG['thumbrows'] * $CONFIG['thumbcols']));
    $pid = $CURRENT_PIC_DATA['pid'];

    $start = 0;

        //$start_tgt = "{$_SERVER['PHP_SELF']}?album=$album$cat_link&amp;pos=$start"; // Abbas - added pid in URL instead of pos
        $start_tgt = "$CPG_PHP_SELF?album=$album$cat_link$date_link&amp;pid={$pic_data[$start]['pid']}";
        $start_title = $lang_img_nav_bar['go_album_start'];
        $meta_nav .= "<link rel=\"start\" href=\"$start_tgt\" title=\"$start_title\" />\n";
        $end = $pic_count - 1;
        //$end_tgt = "{$_SERVER['PHP_SELF']}?album=$album$cat_link&amp;pos=$end";// Abbas - added pid in URL instead of pos
        $end_tgt = "$CPG_PHP_SELF?album=$album$cat_link$date_link&amp;pid={$pic_data[$end]['pid']}";
        $end_title = $lang_img_nav_bar['go_album_end'];
        $meta_nav .= "<link rel=\"last\" href=\"$end_tgt\" title=\"$end_title\" />\n";

    if ($pos > 0) {
        $prev = $pos - 1;
        //$prev_tgt = "{$_SERVER['PHP_SELF']}?album=$album$cat_link&amp;pos=$prev$uid_link";// Abbas - added pid in URL instead of pos
        $prev_tgt = "$CPG_PHP_SELF?album=$album$cat_link$date_link&amp;pid={$pic_data[$prev]['pid']}$uid_link#top_display_media";
        $prev_title = $lang_img_nav_bar['prev_title'];
        $meta_nav .= "<link rel=\"prev\" href=\"$prev_tgt\" title=\"$prev_title\" />\n";
    } else {
        $prev_tgt = "javascript:;";
        $prev_title = "";
    }

    if ($pos < ($pic_count -1)) {
        $next = $pos + 1;
        //$next_tgt = "{$_SERVER['PHP_SELF']}?album=$album$cat_link&amp;pos=$next$uid_link";// Abbas - added pid in URL instead of pos
        $next_tgt = "$CPG_PHP_SELF?album=$album$cat_link$date_link&amp;pid={$pic_data[$next]['pid']}$uid_link#top_display_media";
        $next_title = $lang_img_nav_bar['next_title'];
        $meta_nav .= "<link rel=\"next\" href=\"$next_tgt\" title=\"$next_title\"/>\n";
    } else {
        $next_tgt = "javascript:;";
        $next_title = "";
    }

    if (USER_CAN_SEND_ECARDS) {
        $ecard_tgt = "ecard.php?album=$album$cat_link$date_link&amp;pid=$pid&amp;pos=$pos";
        $ecard_title = $lang_img_nav_bar['ecard_title'];
    } else {
        template_extract_block($template_img_navbar, 'ecard_button'); // added to remove button if cannot send ecard
        /*$ecard_tgt = "javascript:alert('" . addslashes($lang_img_nav_bar['ecard_disabled_msg']) . "');";
        $ecard_title = $lang_img_nav_bar['ecard_disabled'];*/
    }

                //report to moderator buttons
    if (($CONFIG['report_post']==1) && (USER_CAN_SEND_ECARDS)) {
        $report_tgt = "report_file.php?album=$album$cat_link$date_link&amp;pid=$pid&amp;pos=$pos";
    } else { // remove button if report toggle is off
        template_extract_block($template_img_navbar, 'report_file_button');

    }

                              $thumb_tgt = "thumbnails.php?album=$album$cat_link$date_link&amp;page=$page$uid_link";
        $meta_nav .= "<link rel=\"up\" href=\"$thumb_tgt\" title=\"".$lang_img_nav_bar['thumb_title']."\"/>\n";

    $slideshow_tgt = "$CPG_PHP_SELF?album=$album$cat_link$date_link$uid_link&amp;pid=$pid&amp;slideshow=".$CONFIG['slideshow_interval'].'#top_display_media';

    $pic_pos = sprintf($lang_img_nav_bar['pic_pos'], $human_pos, $pic_count);

    if (defined('THEME_HAS_NAVBAR_GRAPHICS')) {
            $location= $THEME_DIR;
        } else {
            $location= '';
        }

    $params = array('{THUMB_TGT}' => $thumb_tgt,
        '{THUMB_TITLE}' => $lang_img_nav_bar['thumb_title'],
        '{PIC_INFO_TITLE}' => $lang_img_nav_bar['pic_info_title'],
        '{SLIDESHOW_TGT}' => $slideshow_tgt,
        '{SLIDESHOW_TITLE}' => $lang_img_nav_bar['slideshow_title'],
        '{PIC_POS}' => $pic_pos,
        '{ECARD_TGT}' => $ecard_tgt,
        '{ECARD_TITLE}' => $ecard_title,
        '{PREV_TGT}' => $prev_tgt,
        '{PREV_TITLE}' => $prev_title,
        '{NEXT_TGT}' => $next_tgt,
        '{NEXT_TITLE}' => $next_title,
        '{PREV_IMAGE}' => ($lang_text_dir=='ltr') ? 'prev' : 'next',
        '{NEXT_IMAGE}' => ($lang_text_dir=='ltr') ? 'next' : 'prev',
        '{REPORT_TGT}' => $report_tgt,
        '{REPORT_TITLE}' => $lang_img_nav_bar['report_title'],
        '{LOCATION}' => $location,
        );

    return template_eval($template_img_navbar, $params);
}
/******************************************************************************
** Section <<<theme_html_img_nav_menu>>> - END
******************************************************************************/

/******************************************************************************
** Section <<<theme_html_rating_box>>> - START
******************************************************************************/
function theme_html_rating_box()
{
	global $CONFIG, $CURRENT_PIC_DATA, $CURRENT_ALBUM_DATA, $THEME_DIR, $USER_DATA, $USER;
	global $template_image_rating, $lang_rate_pic;
	#####################      DB      ######################	
	$global $cpg_db_sample_theme_php;
	$cpgdb =& cpgDB::getInstance();
	$cpgdb->connect_to_existing($CONFIG['LINK_ID']);
	##################################################	

	if (!(USER_CAN_RATE_PICTURES && $CURRENT_ALBUM_DATA['votes'] == 'YES')){
		return '';
	}else{
		//check if the users already voted or if this user is the owner
		$user_md5_id = USER_ID ? md5(USER_ID) : $USER['ID'];
		//$result = cpg_db_query("SELECT * FROM {$CONFIG['TABLE_VOTES']} WHERE pic_id={$CURRENT_PIC_DATA['pid']} AND user_md5_id='$user_md5_id'");
		########################################        DB       ####################################
		$cpgdb->query($cpg_db_sample_theme_php['get_pic_ratings'], $CURRENT_PIC_DATA['pid'], $user_md5_id);
		$rowset = $cpgdb->fetchRowSet();
		####################################################################################
		$user_can_vote = 'false';
		if($CURRENT_PIC_DATA['owner_id'] == $USER_DATA['user_id'] && $USER_DATA['user_id'] != 0){
			//user is owner
			$rate_title = $lang_rate_pic['forbidden'];
		//}elseif(!mysql_num_rows($result)){
		}elseif(!count($rowset)){	########	cpgdb_AL
			//user hasn't voted yet, show voting things
			$rate_title = $lang_rate_pic['rate_this_pic'];
			$user_can_vote = 'true';	
		}else{
			//user has voted
			$rate_title = $lang_rate_pic['already_voted'];
		}
		$rating_stars_amount = ($CONFIG['old_style_rating']) ? 5 : $CONFIG['rating_stars_amount'];
		$votes = $CURRENT_PIC_DATA['votes'] ? sprintf($lang_rate_pic['rating'], round(($CURRENT_PIC_DATA['pic_rating'] / 2000) / (5/$rating_stars_amount), 1), $rating_stars_amount, $CURRENT_PIC_DATA['votes']) : $lang_rate_pic['no_votes'];
		$pid = $CURRENT_PIC_DATA['pid'];
	
		if (defined('THEME_HAS_RATING_GRAPHICS')) {
			$location= $THEME_DIR;
		} else {
			$location= '';
		}
		
		$superCage = Inspekt::makeSuperCage();
		$client_id = md5($superCage->server->getRaw('HTTP_USER_AGENT').$superCage->server->getRaw('SERVER_PROTOCOL').$CONFIG['site_url']);
		$vote_id = base64_encode(md5($superCage->cookie->getRaw($client_id) . $client_id). '-|-' . $USER_DATA['user_id']);
		$extra_info = '<span style="display:none" id="stars_amount">' . $rating_stars_amount . '</span>';
		$extra_info .= '<span style="display:none" id="vote_id">' . $vote_id . '</span>';
		
		if($CONFIG['old_style_rating']){
			//use old style rating
			$start_td = '<td class="tableb_compact" width="17%" align="center">';
			$end_td = '</td>';
			$empty_star = '<img style="cursor:pointer" id="' . $pid . '_0" title="0" src="' . $location . 'images/rate_empty.gif" alt="' . $lang_rate_pic['rubbish'] . '" onclick="rate(this, 0, \'' . $location . '\')" />';
			$rating_images = $start_td . $empty_star . $empty_star . $empty_star . $empty_star . $empty_star . $end_td . "\n";
			
			$empty_star = '<img style="cursor:pointer" id="' . $pid . '_1" title="1" src="' . $location . 'images/rate_empty.gif" alt="' . $lang_rate_pic['poor'] . '" onclick="rate(this, 1, \'' . $location . '\')" />';
			$full_star = '<img style="cursor:pointer" id="' . $pid . '_1" title="1" src="' . $location . 'images/rate_full.gif" alt="' . $lang_rate_pic['poor'] . '" onclick="rate(this, 1, \'' . $location . '\')" />';
			$rating_images .= $start_td . $full_star . $empty_star . $empty_star . $empty_star . $empty_star . $end_td . "\n";
			
			$empty_star = '<img style="cursor:pointer" id="' . $pid . '_2" title="2" src="' . $location . 'images/rate_empty.gif" alt="' . $lang_rate_pic['fair'] . '" onclick="rate(this, 2, \'' . $location . '\')" />';
			$full_star = '<img style="cursor:pointer" id="' . $pid . '_2" title="2" src="' . $location . 'images/rate_full.gif" alt="' . $lang_rate_pic['fair'] . '" onclick="rate(this, 2, \'' . $location . '\')" />';
			$rating_images .= $start_td . $full_star . $full_star . $empty_star . $empty_star . $empty_star . $end_td . "\n";
			
			$empty_star = '<img style="cursor:pointer" id="' . $pid . '_3" title="3" src="' . $location . 'images/rate_empty.gif" alt="' . $lang_rate_pic['good'] . '" onclick="rate(this, 3, \'' . $location . '\')" />';
			$full_star = '<img style="cursor:pointer" id="' . $pid . '_3" title="3" src="' . $location . 'images/rate_full.gif" alt="' . $lang_rate_pic['good'] . '" onclick="rate(this, 3, \'' . $location . '\')" />';
			$rating_images .= $start_td . $full_star . $full_star . $full_star . $empty_star . $empty_star . $end_td . "\n";
			
			$empty_star = '<img style="cursor:pointer" id="' . $pid . '_4" title="4" src="' . $location . 'images/rate_empty.gif" alt="' . $lang_rate_pic['excellent'] . '" onclick="rate(this, 4, \'' . $location . '\')" />';
			$full_star = '<img style="cursor:pointer" id="' . $pid . '_4" title="4" src="' . $location . 'images/rate_full.gif" alt="' . $lang_rate_pic['excellent'] . '" onclick="rate(this, 4, \'' . $location . '\')" />';
			$rating_images .= $start_td . $full_star . $full_star . $full_star . $full_star . $empty_star . $end_td . "\n";
			
			$full_star = '<img style="cursor:pointer" id="' . $pid . '_5" title="5" src="' . $location . 'images/rate_full.gif" alt="' . $lang_rate_pic['great'] . '" onclick="rate(this, 5, \'' . $location . '\')" />';
			$rating_images .= $start_td . $full_star . $full_star . $full_star . $full_star . $full_star . $end_td . "\n";
		}else{
			//use new rating
			$rating_images = '<td class="tableb_compact"><script type="text/javascript" language="javascript">displayStars(' . round(($CURRENT_PIC_DATA['pic_rating'] / 2000) / (5/$rating_stars_amount), 0) . ', ' . $pid . ', "' . $location . '", ' . $user_can_vote . ', "' . $lang_rate_pic['rollover_to_rate'] . '");</script></td>';
		}

		$params = array(
			'{TITLE}' => $rate_title,
			'{RATING}' => $extra_info . $rating_images,
			'{VOTES}' => $votes,
			'{WIDTH}' => $CONFIG['picture_table_width'],
			'{JS_WARNING}' => $lang_rate_pic['js_warning'],
			);
			
		return template_eval($template_image_rating, $params);
	}
} 
/******************************************************************************
** Section <<<theme_html_rating_box>>> - END
******************************************************************************/

/******************************************************************************
** Section <<<theme_html_comments>>> - START
******************************************************************************/
// Displays comments for a specific picture
function theme_html_comments($pid)
{
	global $CONFIG, $USER, $CURRENT_ALBUM_DATA, $comment_date_fmt, $HTML_SUBST;
	global $template_image_comments, $template_add_your_comment, $lang_display_comments, $lang_common, $REFERER;
	#####################      DB      ######################	
	$global $cpg_db_sample_theme_php;
	$cpgdb =& cpgDB::getInstance();
	$cpgdb->connect_to_existing($CONFIG['LINK_ID']);
	##################################################	

	$html = '';

	//report to moderator buttons
	if (!(($CONFIG['report_post']==1) && (USER_CAN_SEND_ECARDS))) {
		template_extract_block($template_image_comments, 'report_comment_button');
	}

	if (!$CONFIG['enable_smilies']) {
		$tmpl_comment_edit_box = template_extract_block($template_image_comments, 'edit_box_no_smilies', '{EDIT}');
		template_extract_block($template_image_comments, 'edit_box_smilies');
		template_extract_block($template_add_your_comment, 'input_box_smilies');
	} else {
		$tmpl_comment_edit_box = template_extract_block($template_image_comments, 'edit_box_smilies', '{EDIT}');
		template_extract_block($template_image_comments, 'edit_box_no_smilies');
		template_extract_block($template_add_your_comment, 'input_box_no_smilies');
	}

	$tmpl_comments_buttons = template_extract_block($template_image_comments, 'buttons', '{BUTTONS}');
	$tmpl_comments_ipinfo = template_extract_block($template_image_comments, 'ipinfo', '{IPINFO}');

	if ($CONFIG['comments_sort_descending'] == 1) {
		$comment_sort_order = 'DESC';
	} else {
		$comment_sort_order = 'ASC';
	}
	/*$result = cpg_db_query("SELECT msg_id, msg_author, msg_body, UNIX_TIMESTAMP(msg_date) AS msg_date, author_id, author_md5_id, msg_raw_ip, msg_hdr_ip, pid, approval FROM {$CONFIG['TABLE_COMMENTS']} WHERE pid='$pid' ORDER BY msg_id $comment_sort_order");

	while ($row = mysql_fetch_array($result)) { // while-loop start	*/
	############################        DB       ###########################
	$cpgdb->query($cpg_db_sample_theme_php['get_comments'], $pid, $comment_sort_order);
	
	while ($row = $cpgdb->fechRow()) { // while-loop starts
	###############################################################
		$user_can_edit = (GALLERY_ADMIN_MODE) || (USER_ID && USER_ID == $row['author_id'] && USER_CAN_POST_COMMENTS) || (!USER_ID && USER_CAN_POST_COMMENTS && ($USER['ID'] == $row['author_md5_id']));
		if (($user_can_edit != '' && $CONFIG['comment_user_edit'] != 0) || (GALLERY_ADMIN_MODE)) {
			$comment_buttons = $tmpl_comments_buttons;
			$comment_edit_box = $tmpl_comment_edit_box;
		} else {
			$comment_buttons = '';
			$comment_edit_box = '';
		}
		$comment_ipinfo = ($row['msg_raw_ip'] && GALLERY_ADMIN_MODE)?$tmpl_comments_ipinfo : '';
		$hide_comment = 0;

		// comment approval
		$pending_approval = '';
		if (USER_IS_ADMIN) {
			//display the selector approve/disapprove
			if ($row['approval'] == 'NO') {
				$pending_approval = '<a href="reviewcom.php?pos=-{PID}&amp;msg_id={MSG_ID}&amp;what=approve" title="' . $lang_display_comments['approve'] . '"><img src="images/approve.gif" border="0" alt="" align="middle" /></a>';
			} else {
				$pending_approval = '<a href="reviewcom.php?pos=-{PID}&amp;msg_id={MSG_ID}&amp;what=disapprove" title="' . $lang_display_comments['disapprove'] . '"><img src="images/disapprove.gif" border="0" alt="" align="middle" /></a>';
			}
		} else { // user or guest is logged in - start
			if ($row['approval'] == 'NO') { // the comment is not approved - start
				if ($user_can_edit) { // the comment comes from the current visitor, display it with a warning that it needs admin approval
					$pending_approval = '<img src="images/approve.gif" border="0" alt="" title="' . $lang_display_comments['pending_approval'] . '" align="middle" />';
				} else { // the comment comes from someone else - don't display it at all
					if ($CONFIG['comment_placeholder'] == 0) {
						$hide_comment = 1;
					} else {
						$row['msg_author'] = $lang_display_comments['unapproved_comment'];
						$row['msg_body'] = $lang_display_comments['pending_approval_message'];
						$row['author_id'] = 0;
					}
				}
			} // the comment is not approved - end
		} // user or guest is logged in - end

		if ($CONFIG['enable_smilies']) {
			$comment_body = process_smilies(make_clickable($row['msg_body']));
			$smilies = generate_smilies("f{$row['msg_id']}", 'msg_body');
		} else {
			$comment_body = make_clickable($row['msg_body']);
			$smilies = '';
		}

		// wrap the comment into italics if it isn't approved
		if ($row['approval'] == 'NO') {
			$comment_body = '<em>'.$comment_body.'</em>';
			$row['msg_author'] = $row['msg_author'];
		}

		$ip = $row['msg_hdr_ip'];
		if ($row['msg_hdr_ip'] != $row['msg_raw_ip']) {
			$ip .= ' [' . $row['msg_raw_ip'] . ']';
		}

		$params = array('{EDIT}' => &$comment_edit_box,
			'{BUTTONS}' => &$comment_buttons,
			'{IPINFO}' => &$comment_ipinfo,
			'{PENDING_APPROVAL}' => &$pending_approval
			);

		$template = template_eval($template_image_comments, $params);

		if ($row['author_id'] == 0) {
			$profile_lnk = stripslashes($row['msg_author']);
		} else {
			$profile_lnk = '<a href="profile.php?uid='.$row['author_id'].'">'.stripslashes($row['msg_author']).'</a>';
		}

		$params = array('{MSG_AUTHOR_LNK}' => $profile_lnk,
			'{MSG_AUTHOR}' => $row['msg_author'],
			'{MSG_ID}' => $row['msg_id'],
			'{PID}' => $row['pid'],
			'{EDIT_TITLE}' => &$lang_display_comments['edit_title'],
			'{DELETE_TITLE}' => &$lang_display_comments['delete_title'],
			'{CONFIRM_DELETE}' => &$lang_display_comments['confirm_delete'],
			'{MSG_DATE}' => localised_date($row['msg_date'], $comment_date_fmt),
			'{MSG_BODY}' => bb_decode($comment_body),
			'{MSG_BODY_RAW}' => $row['msg_body'],
			'{OK}' => &$lang_display_comments['OK'],
			'{SMILIES}' => $smilies,
			'{IP}' => $ip,
			'{REPORT_COMMENT_TITLE}' => &$lang_display_comments['report_comment_title'],
			'{WIDTH}' => $CONFIG['picture_table_width']
			);

		if ($hide_comment != 1) {
			$html .= template_eval($template, $params);
		}
	} // while-loop end

	if (USER_CAN_POST_COMMENTS && $CURRENT_ALBUM_DATA['comments'] == 'YES') {
		if (USER_ID) {
			$user_name_input = '<tr><td><input type="hidden" name="msg_author" value="' . stripslashes(USER_NAME) . '" /></td>';
			template_extract_block($template_add_your_comment, 'user_name_input', $user_name_input);
			$user_name = '';
		} else {
			if (isset($USER['name'])) {
			  $user_name = strtr($USER['name'], $HTML_SUBST);
			} else {
			  $user_name = $lang_display_comments['your_name'];
			}
		}

		if (($CONFIG['comment_captcha'] == 0) || ($CONFIG['comment_captcha'] == 1 && USER_ID)) {
			template_extract_block($template_add_your_comment, 'comment_captcha');
		}

		$params = array('{ADD_YOUR_COMMENT}' => $lang_display_comments['add_your_comment'],
			// Modified Name and comment field
			'{NAME}' => $lang_display_comments['name'],
			'{COMMENT}' => $lang_display_comments['comment'],
			'{CONFIRM}' => $lang_common['confirm'].'&nbsp;'. cpg_display_help('f=empty.htm&amp;base=64&amp;h='.urlencode(base64_encode(serialize($lang_common['captcha_help_title']))).'&amp;t='.urlencode(base64_encode(serialize($lang_common['captcha_help']))),470,245),
			'{PIC_ID}' => $pid,
			'{USER_NAME}' => $user_name,
			'{MAX_COM_LENGTH}' => $CONFIG['max_com_size'],
			'{OK}' => $lang_display_comments['OK'],
			'{DEFAULT_USERNAME}' => $lang_display_comments['your_name'],
			'{DEFAULT_USERNAME_MESSAGE}' => $lang_display_comments['default_username_message'],
			'{SMILIES}' => '',
			'{WIDTH}' => $CONFIG['picture_table_width'],
			);

		if ($CONFIG['enable_smilies']){
						$params['{SMILIES}'] = generate_smilies();
				} else {
						template_extract_block($template_add_your_comment, 'smilies');
				}

		template_extract_block($template_add_your_comment, 'login_to_comment');
		$html .= template_eval($template_add_your_comment, $params);
	} else { // user can not post comments
		if ($CONFIG['comment_promote_registration'] == 1 && $CURRENT_ALBUM_DATA['comments'] == 'YES') {
		  template_extract_block($template_add_your_comment, 'user_name_input');
		  template_extract_block($template_add_your_comment, 'input_box_smilies');
		  template_extract_block($template_add_your_comment, 'comment_captcha');
		  template_extract_block($template_add_your_comment, 'smilies');
		  template_extract_block($template_add_your_comment, 'submit');
		  $params = array('{ADD_YOUR_COMMENT}' => $lang_display_comments['add_your_comment'],
			  '{WIDTH}' => $CONFIG['picture_table_width'],
			  '{LOGIN_TO_COMMENT}' => sprintf($lang_display_comments['log_in_to_comment'], '<a href="login.php?referer='.$REFERER.'">', '</a>'),
			  );
		  $html .= template_eval($template_add_your_comment, $params);
		}
	}

	return $html;
}
/******************************************************************************
** Section <<<theme_html_comments>>> - END
******************************************************************************/

/******************************************************************************
** Section <<<theme_slideshow>>> - START
******************************************************************************/
function theme_slideshow()
{
    global $CONFIG, $lang_display_image_php, $template_display_media, $lang_common;

    pageheader($lang_display_image_php['slideshow']);

    include "include/slideshow.inc.php";

    $start_slideshow = '<script language="JavaScript" type="text/JavaScript">runSlideShow()</script>';
    template_extract_block($template_display_media, 'img_desc', $start_slideshow);

    $params = array('{CELL_HEIGHT}' => $CONFIG['picture_width'] + 100,
        '{IMAGE}' => '<img src="' . $start_img . '" name="SlideShow" class="image" /><br />',
        '{ADMIN_MENU}' => '',
        );

    starttable();
    echo <<<EOT
        <noscript>
        <tr>
            <td align="center" class="tableh2">
              {$lang_common['javascript_needed']}
            </td>
        </tr>
        </noscript>
        <tr>
            <td align="center" class="navmenu" style="white-space: nowrap;">
                <div id="Title"></div>
            </td>
        </tr>
EOT;
    endtable();

    starttable();
    echo template_eval($template_display_media, $params);
    endtable();
    starttable();
    echo <<<EOT
        <tr>
                <td align="center" class="navmenu" style="white-space: nowrap;">
                        <a href="javascript:endSlideShow()" class="navmenu">{$lang_display_image_php['stop_slideshow']}</a>
                </td>
        </tr>

EOT;
    endtable();
    pagefooter();
}
/******************************************************************************
** Section <<<theme_slideshow>>> - END
******************************************************************************/

/******************************************************************************
** Section <<<theme_display_fullsize_pic>>> - START
******************************************************************************/
// Display the full size image
function theme_display_fullsize_pic()
{
	global $CONFIG, $THEME_DIR, $ALBUM_SET, $pid;
	global $lang_errors, $lang_fullsize_popup, $lang_charset;
	#####################      DB      ######################	
	$global $cpg_db_sample_theme_php;
	$cpgdb =& cpgDB::getInstance();
	$cpgdb->connect_to_existing($CONFIG['LINK_ID']);
	##################################################	

	$superCage = Inspekt::makeSuperCage();

	if (!USER_ID && $CONFIG['allow_unlogged_access'] <= 2) {
		printf($lang_errors['login_needed'],'','','','');
		die();
	}
    //if (isset($_GET['picfile'])){
	if ($superCage->get->keyExists('picfile')) {
		if (!GALLERY_ADMIN_MODE) {
			cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);
		}
		//$picfile = $_GET['picfile'];
		$picfile = $superCage->get->getPath('picfile');
		$picname = $CONFIG['fullpath'] . $picfile;
		$imagesize = @getimagesize($picname);
		$imagedata = array('name' => $picfile, 'path' => path2url($picname), 'geometry' => $imagesize[3]);
	} elseif (pid) {
		//$pid = (int)$_GET['pid'];
		/*$sql = "SELECT * " . "FROM {$CONFIG['TABLE_PICTURES']} " . "WHERE pid='$pid' $ALBUM_SET";
		$result = cpg_db_query($sql);
		if (!mysql_num_rows($result)) {
			cpg_die(ERROR, $lang_errors['non_exist_ap'], __FILE__, __LINE__);
		}
		$row = mysql_fetch_array($result);	*/
		############################           DB          ############################
		$cpgdb->query($cpg_db_sample_theme_php['display_fullsize_pic'], $pid, $ALBUM_SET);
		$rowset = $cpgdb->fetchRowSet();
		if (!count($rowset)) {
			cpg_die(ERROR, $lang_errors['non_exist_ap'], __FILE__, __LINE__);
		}
		$row = $rowet[0];
		###################################################################
		$pic_url = get_pic_url($row, 'fullsize');
		$geom = 'width="' . $row['pwidth'] . '" height="' . $row['pheight'] . '"';
		$imagedata = array('name' => $row['filename'], 'path' => $pic_url, 'geometry' => $geom);
    }
    if (!USER_ID && $CONFIG['allow_unlogged_access'] <= 2) { // adjust the size of the window if we don't have to catter for a full-size pop-up, but only a text message
		$row['pwidth'] = 200;
		$row['pheight'] = 100;
    }

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  <head>
  <meta http-equiv="content-type" content="text/html; charset=<?php echo $CONFIG['charset'] == 'language file' ? $lang_charset : $CONFIG['charset'] ?>" />
  <title><?php echo $CONFIG['gallery_name'] ?>: <?php echo $lang_fullsize_popup['click_to_close'];
      ?></title>
  <style type="text/css">
    body { margin: 0; padding: 0; background-color: gray; }
    img { margin:0; padding:0; border:0; }
    #content { margin:0 auto; padding:0; border:0; }
    table { border:0; width:<?php echo $row['pwidth'] ?>px; height:<?php echo $row['pheight'] ?>px; border-collapse:collapse}
    td { vertical-align: middle; text-align:center; }
  </style>

  <script type="text/javascript" src="scripts.js"></script>
  </head>
  <body style="margin:0px; padding:0px; background-color: gray;">
    <script language="JavaScript" type="text/JavaScript">
      adjust_popup();
    </script>
<?php
  if ($CONFIG['transparent_overlay'] == 1) {
?>
    <table cellpadding="0" cellspacing="0" align="center" style="padding:0px;">
      <tr>
<?php
        echo '<td align="center" valign="middle" background="' . htmlspecialchars($imagedata['path']) . '" ' . $imagedata['geometry'] . ' class="image">';
        echo '<div id="content">';
        echo  '<a href="javascript: window.close()" style="border:none"><img src="images/image.gif?id='
                . floor(rand()*1000+rand())
                . '&amp;fullsize=yes" '
                . $imagedata['geometry']
                . ' alt="'
                . htmlspecialchars($imagedata['name'])
                . '" title="'
                . htmlspecialchars($imagedata['name'])
                . "\n" . $lang_fullsize_popup['click_to_close']
                . '" /></a><br />' ."\n";
?>
          </div>
        </td>
      </tr>
    </table>
<?php
  } else {
?>
    <table class="fullsize">
      <tr>
        <td>
          <div id="content">
              <?php     echo  '<a href="javascript: window.close()"><img src="'
                . htmlspecialchars($imagedata['path']) . '" '
                . $imagedata['geometry']
                . 'alt="'
                . htmlspecialchars($imagedata['name'])
                . '" title="'
                . htmlspecialchars($imagedata['name'])
                . "\n" . $lang_fullsize_popup['click_to_close']
                . '" /></a><br />' ."\n";
               ?>
          </div>
        </td>
      </tr>
    </table>
<?php
  }

?>
  </body>
</html>
<?php
}
/******************************************************************************
** Section <<<theme_display_fullsize_pic>>> - END
******************************************************************************/

/******************************************************************************
** Section <<<theme_vanity>>> - START
******************************************************************************/
function theme_vanity()
{
    global $CONFIG, $THEME_DIR, $template_vanity ;

    if (defined('THEME_HAS_VANITY_GRAPHICS')) {
            $location= $THEME_DIR;
        } else {
            $location= '';
        }

    $params = array('{LOCATION}' => $location);

    return template_eval($template_vanity, $params);
}
/******************************************************************************
** Section <<<theme_vanity>>> - END
******************************************************************************/

/******************************************************************************
** Section <<<theme_display_bar>>> - START
******************************************************************************/
/**
* theme_display_bar()
*
* Display a bar graph.
*
* @param float $actualValue
* @param float $maxValue
* @param string $textColor // color code or hex value
* @param string $textShadowColor // color code or hex value
* @param string $textUnit // text to show up after value (e.g. % or kB)
* @param string $leftBar // color code or hex value or path to background image
* @param string $rightBar // color code or hex value or path to background image
* @return string $return
**/
function theme_display_bar(
                       $actualValue = 0,
                       $maxValue = '100',
                       $maxBarSizeInPixels = '400',
                       $textColor = 'black',
                       $textShadowColor = '',
                       $textUnit = '',
                       $leftBar = 'red',
                       $rightBar = ''
                       ) {

  global $lang_errors;
  // Validate parameters
  if ($maxValue == 0 || $maxValue == '') {
    //cpg_die(ERROR, $lang_errors['param_missing'], __FILE__, __LINE__);
    $maxValue = $actualValue;
  }
  // Initialize some vars:
  $return = '';
  $cell1Width = floor(100 * $actualValue/$maxValue);
  $cell2Width = 100 - $cell1Width;
  // compose the output string
  //$return .= $cell1Width . '/' . $cell2Width;
  $return .= '<table border="0" cellspacing="0" cellpadding="0" width="'.$maxBarSizeInPixels.'">';
  $return .= '<tr>';
  $return .= '<td width="'.$cell1Width.'%" style="';
  if ($leftBar != '') {
    $leftBarColor = cpgValidateColor($leftBar);
    if ($leftBarColor != '') {
      $return .= 'background-color:'.$leftBarColor.';';
    } else {
      $return .= 'background-image:url('.$leftBar.');';
    }
  }
  $return .= '">';
  $return .= '<img src="images/spacer.gif" width="1" height="16" border="0" alt="" align="left" />';
  if ($textShadowColor != '') {
  $textShadowColor = cpgValidateColor($textShadowColor);
    $return .= '<div style="position:absolute;display:block;color:'.$textShadowColor.';padding-top:1px;padding-left:1px;height:16px;';
    $return .= '">';
    $return .= $actualValue;
    $return .= $textUnit;
    $return .= '</div>';
  }
  $return .= '<div style="position:absolute;display:block;';
  if ($textColor != '') {
    $textColor = cpgValidateColor($textColor);
    $return .= 'color:'.$textColor;
  }
  $return .= '">';
  $return .= $actualValue;
  $return .= $textUnit;
  $return .= '</div>';
  $return .= '</td>';
  $return .= '<td width="'.$cell2Width.'%" style="';
  if ($rightBar != '') {
    $rightBarColor = cpgValidateColor($rightBar);
    if ($leftBarColor != '') {
      $return .= 'background-color:'.$rightBarColor.';';
    } else {
      $return .= 'background-image:url('.$rightBar.');';
    }
  }
  $return .= '">';
  $return .= '<img src="images/spacer.gif" width="1" height="16" border="0" alt="" align="left" />';
  $return .= '</td>';
  $return .= '</tr>';
  $return .= '</table>';
  //$return .= '<br /><img src="images/rating5.gif" width="400" height="60" border="0" alt="" />'; //remove after debugging
  return $return;
}
/******************************************************************************
** Section <<<theme_display_bar>>> - END
******************************************************************************/

/******************************************************************************
** Section <<<theme_page_title>>> - START
******************************************************************************/
// Creates the title tag for each page
// For the sake of search engine friendliness, the dynamic part $section should come first
function theme_page_title($section) {
    global $CONFIG;
    $return = strip_tags(bb_decode($section)) . ' - ' . $CONFIG['gallery_name'];
    return $return;
}
/******************************************************************************
** Section <<<theme_page_title>>> - END
******************************************************************************/


/******************************************************************************
** Section <<<$template_sidebar>>> - START
******************************************************************************/
// HTML template for sidebar
if (defined('THEME_HAS_NAVBAR_GRAPHICS')) {
    $location= $THEME_DIR;
} else {
    $location= '';
}
$template_sidebar = <<<EOT
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="{LANG_DIR}">
<head>
<meta http-equiv="content-type" content="text/html; charset={CHARSET}" />
<title>{TITLE}</title>
<script type="text/javascript">
/*--------------------------------------------------|
| dTree 2.05 | www.destroydrop.com/javascript/tree/ |
|---------------------------------------------------|
| Copyright (c) 2002-2003 Geir Landro               |
|                                                   |
| This script can be used freely as long as all     |
| copyright messages are intact.                    |
|                                                   |
| Updated: 17.04.2003                               |
|--------------------------------------------------*/

// Node object
function Node(id, pid, name, url, title, target, icon, iconOpen, open) {
        var target = '_content';
        if(document.all){
          var target='_main';
        }
        this.id = id;
        this.pid = pid;
        this.name = name;
        this.url = url;
        this.title = title;
        this.target = target;
        this.icon = icon;
        this.iconOpen = iconOpen;
        this._io = open || false;
        this._is = false;
        this._ls = false;
        this._hc = false;
        this._ai = 0;
        this._p;
};

// Tree object
function dTree(objName) {
        this.config = {
                target         : null,
                folderLinks    : true,
                useSelection   : true,
                useCookies     : true,
                useLines       : true,
                useIcons       : true,
                useStatusText  : false,
                closeSameLevel : false,
                inOrder        : false
        }
        this.icon = {
                root           : '{LOCATION}images/sidebar/base.gif',
                folder         : '{LOCATION}images/sidebar/folder.gif',
                folderOpen     : '{LOCATION}images/sidebar/folderopen.gif',
                node           : '{LOCATION}images/sidebar/page.gif',
                empty          : '{LOCATION}images/sidebar/empty.gif',
                line           : '{LOCATION}images/sidebar/line.gif',
                join           : '{LOCATION}images/sidebar/join.gif',
                joinBottom     : '{LOCATION}images/sidebar/joinbottom.gif',
                plus           : '{LOCATION}images/sidebar/plus.gif',
                plusBottom     : '{LOCATION}images/sidebar/plusbottom.gif',
                minus          : '{LOCATION}images/sidebar/minus.gif',
                minusBottom    : '{LOCATION}images/sidebar/minusbottom.gif',
                nlPlus         : '{LOCATION}images/sidebar/nolines_plus.gif',
                nlMinus        : '{LOCATION}images/sidebar/nolines_minus.gif'
        };
        this.obj = objName;
        this.aNodes = [];
        this.aIndent = [];
        this.root = new Node(-1);
        this.selectedNode = null;
        this.selectedFound = false;
        this.completed = false;
};

// Adds a new node to the node array
dTree.prototype.add = function(id, pid, name, url, title, target, icon, iconOpen, open) {
        this.aNodes[this.aNodes.length] = new Node(id, pid, name, url, title, target, icon, iconOpen, open);
};

// Open/close all nodes
dTree.prototype.openAll = function() {
        this.oAll(true);
};
dTree.prototype.closeAll = function() {
        this.oAll(false);
};

// Outputs the tree to the page
dTree.prototype.toString = function() {
        var str = '<div class="dtree">';
        if (document.getElementById) {
                if (this.config.useCookies) this.selectedNode = this.getSelected();
                str += this.addNode(this.root);
        } else str += 'Browser not supported.';
        str += '</div>';
        if (!this.selectedFound) this.selectedNode = null;
        this.completed = true;
        return str;
};

// Creates the tree structure
dTree.prototype.addNode = function(pNode) {
        var str = '';
        var n=0;
        if (this.config.inOrder) n = pNode._ai;
        for (n; n<this.aNodes.length; n++) {
                if (this.aNodes[n].pid == pNode.id) {
                        var cn = this.aNodes[n];
                        cn._p = pNode;
                        cn._ai = n;
                        this.setCS(cn);
                        if (!cn.target && this.config.target) cn.target = this.config.target;
                        if (cn._hc && !cn._io && this.config.useCookies) cn._io = this.isOpen(cn.id);
                        if (!this.config.folderLinks && cn._hc) cn.url = null;
                        if (this.config.useSelection && cn.id == this.selectedNode && !this.selectedFound) {
                                        cn._is = true;
                                        this.selectedNode = n;
                                        this.selectedFound = true;
                        }
                        str += this.node(cn, n);
                        if (cn._ls) break;
                }
        }
        return str;
};

// Creates the node icon, url and text
dTree.prototype.node = function(node, nodeId) {
        var str = '<div class="dTreeNode">' + this.indent(node, nodeId);
        if (this.config.useIcons) {
                if (!node.icon) node.icon = (this.root.id == node.pid) ? this.icon.root : ((node._hc) ? this.icon.folder : this.icon.node);
                if (!node.iconOpen) node.iconOpen = (node._hc) ? this.icon.folderOpen : this.icon.node;
                if (this.root.id == node.pid) {
                        node.icon = this.icon.root;
                        node.iconOpen = this.icon.root;
                }
                str += '<img id="i' + this.obj + nodeId + '" src="' + ((node._io) ? node.iconOpen : node.icon) + '" alt="" />';
        }
        if (node.url) {
                str += '<a id="s' + this.obj + nodeId + '" class="' + ((this.config.useSelection) ? ((node._is ? 'nodeSel' : 'node')) : 'node') + '" href="' + node.url + '"';
                if (node.title) str += ' title="' + node.title + '"';
                if (node.target) str += ' target="' + node.target + '"';
                if (this.config.useStatusText) str += ' onmouseover="window.status=\'' + node.name + '\';return true;" onmouseout="window.status=\'\';return true;" ';
                if (this.config.useSelection && ((node._hc && this.config.folderLinks) || !node._hc))
                        str += ' onclick="javascript: ' + this.obj + '.s(' + nodeId + ');"';
                str += '>';
        }
        else if ((!this.config.folderLinks || !node.url) && node._hc && node.pid != this.root.id)
                str += '<a href="javascript: ' + this.obj + '.o(' + nodeId + ');" class="node">';
        str += node.name;
        if (node.url || ((!this.config.folderLinks || !node.url) && node._hc)) str += '</a>';
        str += '</div>';
        if (node._hc) {
                str += '<div id="d' + this.obj + nodeId + '" class="clip" style="display:' + ((this.root.id == node.pid || node._io) ? 'block' : 'none') + ';">';
                str += this.addNode(node);
                str += '</div>';
        }
        this.aIndent.pop();
        return str;
};

// Adds the empty and line icons
dTree.prototype.indent = function(node, nodeId) {
        var str = '';
        if (this.root.id != node.pid) {
                for (var n=0; n<this.aIndent.length; n++)
                        str += '<img src="' + ( (this.aIndent[n] == 1 && this.config.useLines) ? this.icon.line : this.icon.empty ) + '" alt="" />';
                (node._ls) ? this.aIndent.push(0) : this.aIndent.push(1);
                if (node._hc) {
                        str += '<a href="javascript: ' + this.obj + '.o(' + nodeId + ');"><img id="j' + this.obj + nodeId + '" src="';
                        if (!this.config.useLines) str += (node._io) ? this.icon.nlMinus : this.icon.nlPlus;
                        else str += ( (node._io) ? ((node._ls && this.config.useLines) ? this.icon.minusBottom : this.icon.minus) : ((node._ls && this.config.useLines) ? this.icon.plusBottom : this.icon.plus ) );
                        str += '" alt="" /></a>';
                } else str += '<img src="' + ( (this.config.useLines) ? ((node._ls) ? this.icon.joinBottom : this.icon.join ) : this.icon.empty) + '" alt="" />';
        }
        return str;
};

// Checks if a node has any children and if it is the last sibling
dTree.prototype.setCS = function(node) {
        var lastId;
        for (var n=0; n<this.aNodes.length; n++) {
                if (this.aNodes[n].pid == node.id) node._hc = true;
                if (this.aNodes[n].pid == node.pid) lastId = this.aNodes[n].id;
        }
        if (lastId==node.id) node._ls = true;
};

// Returns the selected node
dTree.prototype.getSelected = function() {
        var sn = this.getCookie('{$CONFIG['cookie_name']}_sidebar_cs' + this.obj);
        return (sn) ? sn : null;
};

// Highlights the selected node
dTree.prototype.s = function(id) {
        if (!this.config.useSelection) return;
        var cn = this.aNodes[id];
        if (cn._hc && !this.config.folderLinks) return;
        if (this.selectedNode != id) {
                if (this.selectedNode || this.selectedNode==0) {
                        eOld = document.getElementById("s" + this.obj + this.selectedNode);
                        eOld.className = "node";
                }
                eNew = document.getElementById("s" + this.obj + id);
                eNew.className = "nodeSel";
                this.selectedNode = id;
                if (this.config.useCookies) this.setCookie('{$CONFIG['cookie_name']}_sidebar_cs' + this.obj, cn.id);
        }
};

// Toggle Open or close
dTree.prototype.o = function(id) {
        var cn = this.aNodes[id];
        this.nodeStatus(!cn._io, id, cn._ls);
        cn._io = !cn._io;
        if (this.config.closeSameLevel) this.closeLevel(cn);
        if (this.config.useCookies) this.updateCookie();
};

// Open or close all nodes
dTree.prototype.oAll = function(status) {
        for (var n=0; n<this.aNodes.length; n++) {
                if (this.aNodes[n]._hc && this.aNodes[n].pid != this.root.id) {
                        this.nodeStatus(status, n, this.aNodes[n]._ls)
                        this.aNodes[n]._io = status;
                }
        }
        if (this.config.useCookies) this.updateCookie();
};

// Opens the tree to a specific node
dTree.prototype.openTo = function(nId, bSelect, bFirst) {
        if (!bFirst) {
                for (var n=0; n<this.aNodes.length; n++) {
                        if (this.aNodes[n].id == nId) {
                                nId=n;
                                break;
                        }
                }
        }
        var cn=this.aNodes[nId];
        if (cn.pid==this.root.id || !cn._p) return;
        cn._io = true;
        cn._is = bSelect;
        if (this.completed && cn._hc) this.nodeStatus(true, cn._ai, cn._ls);
        if (this.completed && bSelect) this.s(cn._ai);
        else if (bSelect) this._sn=cn._ai;
        this.openTo(cn._p._ai, false, true);
};

// Closes all nodes on the same level as certain node
dTree.prototype.closeLevel = function(node) {
        for (var n=0; n<this.aNodes.length; n++) {
                if (this.aNodes[n].pid == node.pid && this.aNodes[n].id != node.id && this.aNodes[n]._hc) {
                        this.nodeStatus(false, n, this.aNodes[n]._ls);
                        this.aNodes[n]._io = false;
                        this.closeAllChildren(this.aNodes[n]);
                }
        }
}

// Closes all children of a node
dTree.prototype.closeAllChildren = function(node) {
        for (var n=0; n<this.aNodes.length; n++) {
                if (this.aNodes[n].pid == node.id && this.aNodes[n]._hc) {
                        if (this.aNodes[n]._io) this.nodeStatus(false, n, this.aNodes[n]._ls);
                        this.aNodes[n]._io = false;
                        this.closeAllChildren(this.aNodes[n]);
                }
        }
}

// Change the status of a node(open or closed)
dTree.prototype.nodeStatus = function(status, id, bottom) {
        eDiv        = document.getElementById('d' + this.obj + id);
        eJoin        = document.getElementById('j' + this.obj + id);
        if (this.config.useIcons) {
                eIcon        = document.getElementById('i' + this.obj + id);
                eIcon.src = (status) ? this.aNodes[id].iconOpen : this.aNodes[id].icon;
        }
        eJoin.src = (this.config.useLines)?
        ((status)?((bottom)?this.icon.minusBottom:this.icon.minus):((bottom)?this.icon.plusBottom:this.icon.plus)):
        ((status)?this.icon.nlMinus:this.icon.nlPlus);
        eDiv.style.display = (status) ? 'block': 'none';
};


// [Cookie] Clears a cookie
dTree.prototype.clearCookie = function() {
        var now = new Date();
        var yesterday = new Date(now.getTime() - 1000 * 60 * 60 * 24);
        this.setCookie('{$CONFIG['cookie_name']}_sidebar_co'+this.obj, 'cookieValue', yesterday);
        this.setCookie('{$CONFIG['cookie_name']}_sidebar_cs'+this.obj, 'cookieValue', yesterday);
};

// [Cookie] Sets value in a cookie
dTree.prototype.setCookie = function(cookieName, cookieValue, expires, path, domain, secure) {
        document.cookie =
                escape(cookieName) + '=' + escape(cookieValue)
                + (expires ? '; expires=' + expires.toGMTString() : '')
                + (path ? '; path=' + path : '')
                + (domain ? '; domain=' + domain : '')
                + (secure ? '; secure' : '');
};

// [Cookie] Gets a value from a cookie
dTree.prototype.getCookie = function(cookieName) {
        var cookieValue = '';
        var posName = document.cookie.indexOf(escape(cookieName) + '=');
        if (posName != -1) {
                var posValue = posName + (escape(cookieName) + '=').length;
                var endPos = document.cookie.indexOf(';', posValue);
                if (endPos != -1) cookieValue = unescape(document.cookie.substring(posValue, endPos));
                else cookieValue = unescape(document.cookie.substring(posValue));
        }
        return (cookieValue);
};

// [Cookie] Returns ids of open nodes as a string
dTree.prototype.updateCookie = function() {
        var str = '';
        for (var n=0; n<this.aNodes.length; n++) {
                if (this.aNodes[n]._io && this.aNodes[n].pid != this.root.id) {
                        if (str) str += '.';
                        str += this.aNodes[n].id;
                }
        }
        this.setCookie('{$CONFIG['cookie_name']}_sidebar_co' + this.obj, str);
};

// [Cookie] Checks if a node id is in a cookie
dTree.prototype.isOpen = function(id) {
        var aOpen = this.getCookie('{$CONFIG['cookie_name']}_sidebar_co' + this.obj).split('.');
        for (var n=0; n<aOpen.length; n++)
                if (aOpen[n] == id) return true;
        return false;
};

// If Push and pop is not implemented by the browser
if (!Array.prototype.push) {
        Array.prototype.push = function array_push() {
                for(var i=0;i<arguments.length;i++)
                        this[this.length]=arguments[i];
                return this.length;
        }
};
if (!Array.prototype.pop) {
        Array.prototype.pop = function array_pop() {
                lastElement = this[this.length-1];
                this.length = Math.max(this.length-1,0);
                return lastElement;
        }
};
{SIDEBAR_CONTENT}
</script>
<link href="themes/{THEME}/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<form method="GET" action="thumbnails.php" target="_content">
  <input type="hidden" name="album" value="search" />
  <input type="hidden" name="type" value="full" />
  <div id="dtreeSearchWrapper" style="margin: 1px 1px;float: left;">
    <input id="dtreeSearchField" type="text" name="search" class="textinput" />
    <input id="dtreeSearchButton" type="image" src="{LOCATION}images/sidebar/search.gif" alt="" title="{SEARCH_TITLE}" />
    <a href="sidebar.php" target="_self" ><img id="dtreeReloadButton" src="{LOCATION}images/sidebar/reload.gif" border="0" width="13" height="15" alt="" title="{RELOAD_TITLE}" /></a>
  </div>
</form>
</body>
</html>
EOT;
/******************************************************************************
** Section <<<$template_sidebar>>> - END
******************************************************************************/


?>