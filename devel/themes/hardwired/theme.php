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

define('THEME_HAS_RATING_GRAPHICS', 1);
define('THEME_HAS_NAVBAR_GRAPHICS', 1);

// HTML template for main menu
$template_main_menu1 = <<<EOT
                
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
$template_main_menu2 = <<<EOT
               
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
                                <td class="admin_menu"{APPROVAL_ID}><a href="editpics.php?mode=upload_approval" title="{UPL_APP_TITLE}">{UPL_APP_LNK}</a></td>
                                <td class="admin_menu"><a href="admin.php" title="{ADMIN_TITLE}">{ADMIN_LNK}</a></td>
                                <td class="admin_menu"><a href="albmgr.php{CATL}" title="{ALBUMS_TITLE}">{ALBUMS_LNK}</a></td>
                                <td class="admin_menu"><a href="catmgr.php" title="{CATEGORIES_TITLE}">{CATEGORIES_LNK}</a></td>
                                <td class="admin_menu"><a href="usermgr.php" title="{USERS_TITLE}">{USERS_LNK}</a></td>
                                <td class="admin_menu"><a href="groupmgr.php" title="{GROUPS_TITLE}">{GROUPS_LNK}</a></td>
                                <td class="admin_menu"><a href="banning.php" title="{BAN_TITLE}">{BAN_LNK}</a></td>
                                </tr><tr>
                                <td class="admin_menu"><a href="db_ecard.php" title="{DB_ECARD_TITLE}">{DB_ECARD_LNK}</a></td>
                                <td class="admin_menu"><a href="reviewcom.php" title="{COMMENTS_TITLE}">{COMMENTS_LNK}</a></td>
                                <td class="admin_menu"><a href="picmgr.php" title="{PICTURES_TITLE}">{PICTURES_LNK}</a></td>
                                <td class="admin_menu"><a href="searchnew.php" title="{SEARCHNEW_TITLE}">{SEARCHNEW_LNK}</a></td>
                                <td class="admin_menu"><a href="util.php" title="{UTIL_TITLE}">{UTIL_LNK}</a></td>
                                <td class="admin_menu"><a href="profile.php?op=edit_profile" title="{MY_PROF_TITLE}">{MY_PROF_LNK}</a></td>
                        </tr>
                </table>
                </div>
EOT;


function pageheader($section, $meta = '')
{
    global $CONFIG, $THEME_DIR;
    global $template_header, $lang_charset, $lang_text_dir;

    $custom_header = cpg_get_custom_include($CONFIG['custom_header_path']);

    header('P3P: CP="CAO DSP COR CURa ADMa DEVa OUR IND PHY ONL UNI COM NAV INT DEM PRE"');
    user_save_profile();

    $template_vars = array('{LANG_DIR}' => $lang_text_dir,
        '{TITLE}' => $CONFIG['gallery_name'] . ' - ' . $section,
        '{CHARSET}' => $CONFIG['charset'] == 'language file' ? $lang_charset : $CONFIG['charset'],
        '{META}' => $meta,
        '{GAL_NAME}' => $CONFIG['gallery_name'],
        '{GAL_DESCRIPTION}' => $CONFIG['gallery_description'],
        '{MAIN_MENU1}' => theme_main_menu1(),
        '{MAIN_MENU2}' => theme_main_menu2(),
        '{ADMIN_MENU}' => theme_admin_mode_menu(),
        '{CUSTOM_HEADER}' => $custom_header,
        );

    echo template_eval($template_header, $template_vars);
}

function theme_main_menu1()
{
    global $CONFIG, $album, $actual_cat, $cat, $REFERER;
    global $lang_main_menu, $template_main_menu1;
    static $main_menu = '';
    if ($main_menu != '') return $main_menu;
    $album_l = isset($album) ? "?album=$album" : '';
    $cat_l = (isset($actual_cat))? "?cat=$actual_cat" : (isset($cat) ? "?cat=$cat" : '');
    $my_gallery_id = FIRST_USER_CAT + USER_ID;
    $template_main_menu = &$template_main_menu1;
    if (USER_ID) {
        template_extract_block($template_main_menu, 'login');
    } else {
        template_extract_block($template_main_menu, 'logout');
        template_extract_block($template_main_menu, 'my_profile');
    }
    if (!USER_IS_ADMIN) {
        template_extract_block($template_main_menu, 'enter_admin_mode');
        template_extract_block($template_main_menu, 'leave_admin_mode');
    } else {
        if (GALLERY_ADMIN_MODE) {
            template_extract_block($template_main_menu, 'enter_admin_mode');
        } else {
            template_extract_block($template_main_menu, 'leave_admin_mode');
        }
    }
    if (!USER_CAN_CREATE_ALBUMS) {
        template_extract_block($template_main_menu, 'my_gallery');
    }
    if (USER_CAN_CREATE_ALBUMS) {
        template_extract_block($template_main_menu, 'my_profile');
    }
    if (!USER_CAN_UPLOAD_PICTURES) {
        template_extract_block($template_main_menu, 'upload_pic');
    }
    if (USER_ID || !$CONFIG['allow_user_registration']) {
        template_extract_block($template_main_menu, 'register');
    }

    if (!USER_ID || !$CONFIG['allow_memberlist']) {
        template_extract_block($template_main_menu, 'allow_memberlist');
    }

    if (!$CONFIG['display_faq']) {
        template_extract_block($template_main_menu, 'faq');
    }

    $param = array('{MY_GAL_TGT}' => "index.php?cat=$my_gallery_id",
        '{MY_GAL_TITLE}' => $lang_main_menu['my_gal_title'],
        '{MY_GAL_LNK}' => $lang_main_menu['my_gal_lnk'],
        '{MEMBERLIST_TGT}' => "usermgr.php",
        '{MEMBERLIST_TITLE}' => $lang_main_menu['memberlist_title'],
        '{MEMBERLIST_LNK}' => $lang_main_menu['memberlist_lnk'],
        '{MY_PROF_TGT}' => "profile.php?op=edit_profile",
        '{MY_PROF_TITLE}' => $lang_main_menu['my_prof_title'],
        '{MY_PROF_LNK}' => $lang_main_menu['my_prof_lnk'],
        '{FAQ_TGT}' => "faq.php",
        '{FAQ_TITLE}' => $lang_main_menu['faq_title'],
        '{FAQ_LNK}' => $lang_main_menu['faq_lnk'],
        '{ADM_MODE_TGT}' => "mode.php?admin_mode=1&amp;referer=$REFERER",
        '{ADM_MODE_TITLE}' => $lang_main_menu['adm_mode_title'],
        '{ADM_MODE_LNK}' => $lang_main_menu['adm_mode_lnk'],
        '{USR_MODE_TGT}' => "mode.php?admin_mode=0&amp;referer=$REFERER",
        '{USR_MODE_TITLE}' => $lang_main_menu['usr_mode_title'],
        '{USR_MODE_LNK}' => $lang_main_menu['usr_mode_lnk'],
        '{UPL_PIC_TGT}' => "upload.php",
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
        '{LOGOUT_LNK}' => $lang_main_menu['logout_lnk'] . " [" . USER_NAME . "]",
        );
    $main_menu = template_eval($template_main_menu, $param);
    return $main_menu;
}
function theme_main_menu2()
{
    global $CONFIG, $album, $actual_cat, $cat, $REFERER;
    global $lang_main_menu, $template_main_menu2;
    static $main_menu = '';
    if ($main_menu != '') return $main_menu;
    $cat_l = isset($actual_cat) ? "?cat=$actual_cat" : (isset($cat) ? "?cat=$cat" : '');
    $cat_l2 = isset($cat) ? "&amp;cat=$cat" : '';
    $template_main_menu = &$template_main_menu2;
    $param = array('{ALB_LIST_TGT}' => "index.php$cat_l",
        '{ALB_LIST_TITLE}' => $lang_main_menu['alb_list_title'],
        '{ALB_LIST_LNK}' => $lang_main_menu['alb_list_lnk'],
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
        '{SEARCH_TGT}' => "search.php",
        '{SEARCH_TITLE}' => $lang_main_menu['search_title'],
        '{SEARCH_LNK}' => $lang_main_menu['search_lnk'],
        );
    $main_menu = template_eval($template_main_menu, $param);
    return $main_menu;
}

?>