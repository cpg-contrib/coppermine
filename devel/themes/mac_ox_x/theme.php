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
// This theme has had redundant CORE items removed                             //
// ------------------------------------------------------------------------- //


define('THEME_HAS_RATING_GRAPHICS', 1);
// HTML template for main menu
$template_main_menu1 = <<<EOT
                                                |
<!-- BEGIN my_gallery -->
                                                <a href="{MY_GAL_TGT}" title="{MY_GAL_TITLE}">{MY_GAL_LNK}</a> |
<!-- END my_gallery -->
<!-- BEGIN allow_memberlist -->
                                                <a href="{MEMBERLIST_TGT}" title="{MEMBERLIST_TITLE}">{MEMBERLIST_LNK}</a> |
<!-- END allow_memberlist -->
<!-- BEGIN my_profile -->
                                                <a href="{MY_PROF_TGT}" title="{MY_PROF_LNK}">{MY_PROF_LNK}</a> |
<!-- END my_profile -->
<!-- BEGIN faq -->
                        <a href="{FAQ_TGT}" title="{FAQ_TITLE}">{FAQ_LNK}</a> |
<!-- END faq -->
<!-- BEGIN enter_admin_mode -->
                                                <a href="{ADM_MODE_TGT}" title="{ADM_MODE_TITLE}">{ADM_MODE_LNK}</a> |
<!-- END enter_admin_mode -->
<!-- BEGIN leave_admin_mode -->
                                                <a href="{USR_MODE_TGT}" title="{USR_MODE_TITLE}">{USR_MODE_LNK}</a> |
<!-- END leave_admin_mode -->
<!-- BEGIN upload_pic -->
                                                <a href="{UPL_PIC_TGT}" title="{UPL_PIC_TITLE}">{UPL_PIC_LNK}</a> |
<!-- END upload_pic -->
<!-- BEGIN register -->
                                                <a href="{REGISTER_TGT}" title="{REGISTER_TITLE}">{REGISTER_LNK}</a> |
<!-- END register -->
<!-- BEGIN login -->
                                                <a href="{LOGIN_TGT}" title="{LOGIN_LNK}">{LOGIN_LNK}</a> |
<!-- END login -->
<!-- BEGIN logout -->
                                                <a href="{LOGOUT_TGT}" title="{LOGOUT_LNK}">{LOGOUT_LNK}</a> |
<!-- END logout -->
EOT;

$template_main_menu2 = <<<EOT
                                        <td><img src="themes/mac_ox_x/images/menu_button_bg_left.gif" border="0" alt="" /><br /></td>
                                        <td background="themes/mac_ox_x/images/menu_button_bg_middle.gif" valign="top">
                                                <a href="index.php"><img src="themes/mac_ox_x/images/home.gif" border="0" alt="" /><br /></a>
                                        </td>
                                        <td><img src="themes/mac_ox_x/images/menu_button_bg_right.gif" border="0" alt="" /><br /></td>
                                        <td><img src="themes/mac_ox_x/images/menu_button_bg_left.gif" border="0" alt="" /><br /></td>
                                        <td background="themes/mac_ox_x/images/menu_button_bg_middle.gif" valign="top">
                                                <a href="javascript:;" onMouseOver="MM_showHideLayers('Menu1','','show')">@</a>
                                        </td>
                                        <td><img src="themes/mac_ox_x/images/menu_button_bg_right.gif" border="0" alt="" /><br /></td>
                                        <td><img src="themes/mac_ox_x/images/menu_button_bg_left.gif" border="0" alt="" /><br /></td>
                                        <td background="themes/mac_ox_x/images/menu_button_bg_middle.gif" valign="top">
                                                <a href="{ALB_LIST_TGT}" title="{ALB_LIST_TITLE}">{ALB_LIST_LNK}</a>
                                        </td>
                                        <td><img src="themes/mac_ox_x/images/menu_button_bg_right.gif" border="0" alt="" /><br /></td>
                                        <td><img src="themes/mac_ox_x/images/menu_button_bg_left.gif" border="0" alt="" /><br /></td>
                                        <td background="themes/mac_ox_x/images/menu_button_bg_middle.gif" valign="top">
                                                <a href="{LASTUP_TGT}" title="{LASTUP_LNK}">{LASTUP_LNK}</a>
                                        </td>
                                        <td><img src="themes/mac_ox_x/images/menu_button_bg_right.gif" border="0" alt="" /><br /></td>
                                        <td><img src="themes/mac_ox_x/images/menu_button_bg_left.gif" border="0" alt="" /><br /></td>
                                        <td background="themes/mac_ox_x/images/menu_button_bg_middle.gif" valign="top">
                                                <a href="{LASTCOM_TGT}" onMouseOver="MM_showHideLayers('Menu1','','hide')" title="{LASTCOM_LNK}">{LASTCOM_LNK}</a>
                                        </td>
                                        <td><img src="themes/mac_ox_x/images/menu_button_bg_right.gif" border="0" alt="" /><br /></td>
                                        <td><img src="themes/mac_ox_x/images/menu_button_bg_left.gif" border="0" alt="" /><br /></td>
                                        <td background="themes/mac_ox_x/images/menu_button_bg_middle.gif" valign="top">
                                                <a href="{TOPN_TGT}" onMouseOver="MM_showHideLayers('Menu1','','hide')" title="{TOPN_LNK}">{TOPN_LNK}</a>
                                        </td>
                                        <td><img src="themes/mac_ox_x/images/menu_button_bg_right.gif" border="0" alt="" /><br /></td>
                                        <td><img src="themes/mac_ox_x/images/menu_button_bg_left.gif" border="0" alt="" /><br /></td>
                                        <td background="themes/mac_ox_x/images/menu_button_bg_middle.gif" valign="top">
                                                <a href="{TOPRATED_TGT}" onMouseOver="MM_showHideLayers('Menu1','','hide')" title="{TOPRATED_LNK}">{TOPRATED_LNK}</a>
                                        </td>
                                        <td><img src="themes/mac_ox_x/images/menu_button_bg_right.gif" border="0" alt="" /><br /></td>
                                        <td><img src="themes/mac_ox_x/images/menu_button_bg_left.gif" border="0" alt="" /><br /></td>
                                        <td background="themes/mac_ox_x/images/menu_button_bg_middle.gif" valign="top">
                                                <a href="{FAV_TGT}" onMouseOver="MM_showHideLayers('Menu1','','hide')" title="{FAV_LNK}">{FAV_LNK}</a>
                                        </td>
                                        <td><img src="themes/mac_ox_x/images/menu_button_bg_right.gif" border="0" alt="" /><br /></td>
                                        <td><img src="themes/mac_ox_x/images/menu_button_bg_left.gif" border="0" alt="" /><br /></td>
                                        <td background="themes/mac_ox_x/images/menu_button_bg_middle.gif" valign="top">
                                                <a href="{SEARCH_TGT}" onMouseOver="MM_showHideLayers('Menu1','','hide')" title="{SEARCH_LNK}">{SEARCH_LNK}</a>
                                        </td>
                                        <td><img src="themes/mac_ox_x/images/menu_button_bg_right.gif" border="0" alt="" /><br /></td>
EOT;
// HTML template for title row of the thumbnail view (album title + sort options)
$template_thumb_view_title_row = <<<EOT

                        <table width="100%" cellpadding="0" cellspacing="0">
                        <tr>
                                <td width="100%" class="statlink">{ALBUM_NAME}</td>
                                <td class="sortorder_options" style="font-size: 100%;">{TITLE}</td>
                                <td class="sortorder_options" style="font-size: 100%;"><span class="statlink"><a href="thumbnails.php?album={AID}&page={PAGE}&sort=ta" title="{SORT_TA}">&nbsp;+&nbsp;</a></span></td>
                                <td class="sortorder_options" style="font-size: 100%;"><span class="statlink"><a href="thumbnails.php?album={AID}&page={PAGE}&sort=td" title="{SORT_TD}">&nbsp;-&nbsp;</a></span></td>
                                <td>&nbsp;&nbsp;</td>
                                <td class="sortorder_options" style="font-size: 100%;">{NAME}</td>
                                <td class="sortorder_options" style="font-size: 100%;"><span class="statlink"><a href="thumbnails.php?album={AID}&page={PAGE}&sort=na" title="{SORT_NA}">&nbsp;+&nbsp;</a></span></td>
                                <td class="sortorder_options" style="font-size: 100%;"><span class="statlink"><a href="thumbnails.php?album={AID}&page={PAGE}&sort=nd" title="{SORT_ND}">&nbsp;-&nbsp;</a></span></td>
                                <td>&nbsp;&nbsp;</td>
                                <td class="sortorder_options" style="font-size: 100%;">{DATE}</td>
                                <td class="sortorder_options" style="font-size: 100%;"><span class="statlink"><a href="thumbnails.php?album={AID}&page={PAGE}&sort=da" title="{SORT_DA}">&nbsp;+&nbsp;</a></span></td>
                                <td class="sortorder_options" style="font-size: 100%;"><span class="statlink"><a href="thumbnails.php?album={AID}&page={PAGE}&sort=dd" title="{SORT_DD}">&nbsp;-&nbsp;</a></span></td>
                                <td>&nbsp;&nbsp;</td>
                                <td class="sortorder_options" style="font-size: 100%;">{POSITION}</td>
                                <td class="sortorder_options" style="font-size: 100%;"><span class="statlink"><a href="thumbnails.php?album={AID}&page={PAGE}&sort=pa" title="{SORT_PA}">&nbsp;+&nbsp;</a></span></td>
                                <td class="sortorder_options" style="font-size: 100%;"><span class="statlink"><a href="thumbnails.php?album={AID}&page={PAGE}&sort=pd" title="{SORT_PD}">&nbsp;-&nbsp;</a></span></td>
                        </tr>
                        </table>

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

// Function for writing a pagefooter
function pagefooter()
{
    global $HTTP_GET_VARS, $HTTP_POST_VARS, $HTTP_SERVER_VARS;
    global $USER, $USER_DATA, $ALBUM_SET, $CONFIG, $time_start, $query_stats, $queries;;
    global $template_footer;

    $custom_footer = cpg_get_custom_include($CONFIG['custom_footer_path']);

    if ($CONFIG['debug_mode']==1 || ($CONFIG['debug_mode']==2 && GALLERY_ADMIN_MODE)) {
    cpg_debug_output();
    }

    $template_vars = array(
        '{CUSTOM_FOOTER}' => $custom_footer,
    );

    echo template_eval($template_footer, $template_vars);
}


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
                                        <td class="tableh1a"><img src="themes/mac_ox_x/images/tableh1a_bg_left.gif"></td>
                                        <td class="tableh1a" background="themes/mac_ox_x/images/tableh1a_bg_middle.gif" width="100%">$title</td>
                                        <td class="tableh1a"><img src="themes/mac_ox_x/images/tableh1a_bg_right.gif"></td>
                                </tr>
                        </table>
                </td>
        </tr>
</table>
<!-- Start standard table -->
<table align="center" width="$width" cellspacing="0" cellpadding="0">
  <tr>
   <td background="themes/mac_ox_x/images/main_table_r1_c1b.gif" valign="top"><img name="main_table_r1_c1" src="themes/mac_ox_x/images/main_table_r1_c1.gif" border="0" id="main_table_r1_c1" alt="" /></td>
        <td width="100%"><table width="100%" cellspacing="1" cellpadding="0" class="maintableb">

EOT;
    } else {
        echo <<<EOT

<!-- Start standard table -->
<table align="center" width="$width" cellspacing="0" cellpadding="0">
  <tr>
   <td background="themes/mac_ox_x/images/main_table_r1_c1b.gif" valign="top"><img name="main_table_r1_c1" src="themes/mac_ox_x/images/main_table_r1_c1.gif" border="0" id="main_table_r1_c1" alt="" /></td>
        <td width="100%"><table width="100%" cellspacing="1" cellpadding="0" class="maintable">

EOT;
    }
}

function endtable()
{
    echo <<<EOT
        </table>
   </td>
   <td background="themes/mac_ox_x/images/main_table_r1_c3b.gif" valign="top"><img name="main_table_r1_c3" src="themes/mac_ox_x/images/main_table_r1_c3.gif" border="0" id="main_table_r1_c3" alt="" /></td>
  </tr>
  <tr>
   <td><img name="main_table_r2_c1" src="themes/mac_ox_x/images/main_table_r2_c1.gif" width="10" height="4" border="0" id="main_table_r2_c1" alt="" /></td>
   <td background="themes/mac_ox_x/images/main_table_r2_c2b.gif"><img name="main_table_r2_c2" src="themes/mac_ox_x/images/main_table_r2_c2.gif" border="0" id="main_table_r2_c2" alt="" /></td>
   <td><img name="main_table_r2_c3" src="themes/mac_ox_x/images/main_table_r2_c3.gif" width="10" height="4" border="0" id="main_table_r2_c3" alt="" /></td>
  </tr>
</table>
<!-- End standard table -->

EOT;
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
        '{ADM_MODE_TGT}' => "mode.php?admin_mode=1&referer=$REFERER",
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
    $cat_l2 = isset($cat) ? "&cat=$cat" : '';

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