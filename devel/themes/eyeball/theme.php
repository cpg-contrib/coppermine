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
                        <table border="0" cellpadding="0" cellspacing="0" border="0" class="top_menu_bttn">
                                <tr>
                                        <td><img src="themes/eyeball/images/top_menu_left.gif" border="0" alt="" /><br /></td>
                                        <td background="themes/eyeball/images/top_menu_button.gif">
                                                <a href="index.php" onMouseOver="MM_showHideLayers('Menu1','','show')"><img src="themes/eyeball/images/home.gif" border="0" alt="" /><br /></a>
                                        </td>
                                        <td><img src="themes/eyeball/images/top_menu_spacer.gif" border="0" alt="" /><br /></td>
                                        <td background="themes/eyeball/images/top_menu_button.gif">
                                                <a href="{ALB_LIST_TGT}" title="{ALB_LIST_TITLE}">{ALB_LIST_LNK}</a>
                                        </td>
                                        <td><img src="themes/eyeball/images/top_menu_spacer.gif" border="0" alt="" /><br /></td>
                                        <td background="themes/eyeball/images/top_menu_button.gif">
                                                <a href="{LASTUP_TGT}" title="{LASTUP_LNK}">{LASTUP_LNK}</a>
                                        </td>
                                        <td><img src="themes/eyeball/images/top_menu_spacer.gif" border="0" alt="" /><br /></td>
                                        <td background="themes/eyeball/images/top_menu_button.gif">
                                                <a href="{LASTCOM_TGT}" onMouseOver="MM_showHideLayers('Menu1','','hide')" title="{LASTCOM_LNK}">{LASTCOM_LNK}</a>
                                        </td>
                                        <td><img src="themes/eyeball/images/top_menu_spacer.gif" border="0" alt="" /><br /></td>
                                        <td background="themes/eyeball/images/top_menu_button.gif">
                                                <a href="{TOPN_TGT}" onMouseOver="MM_showHideLayers('Menu1','','hide')" title="{TOPN_LNK}">{TOPN_LNK}</a>
                                        </td>
                                        <td><img src="themes/eyeball/images/top_menu_spacer.gif" border="0" alt="" /><br /></td>
                                        <td background="themes/eyeball/images/top_menu_button.gif">
                                                <a href="{TOPRATED_TGT}" onMouseOver="MM_showHideLayers('Menu1','','hide')" title="{TOPRATED_LNK}">{TOPRATED_LNK}</a>
                                        </td>
                                        <td><img src="themes/eyeball/images/top_menu_spacer.gif" border="0" alt="" /><br /></td>
                                        <td background="themes/eyeball/images/top_menu_button.gif">
                                        <a href="{FAV_TGT}" onMouseOver="MM_showHideLayers('Menu1','','hide')" title="{FAV_LNK}">{FAV_LNK}</a>
                                        </td>
                                        <td><img src="themes/eyeball/images/top_menu_spacer.gif" border="0" alt="" /><br /></td>
                                         <td background="themes/eyeball/images/top_menu_button.gif">
                                                <a href="{SEARCH_TGT}" onMouseOver="MM_showHideLayers('Menu1','','hide')" title="{SEARCH_LNK}">{SEARCH_LNK}</a>
                                        </td>
                                        <td><img src="themes/eyeball/images/top_menu_right.gif" border="0" alt="" /><br /></td>
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
                                        <td class="tableh1a"><img src="themes/eyeball/images/tableh1a_bg_left.gif" /></td>
                                        <td class="tableh1a" width="100%">$title</td>
                                        <td class="tableh1a"><img src="themes/eyeball/images/tableh1a_bg_right.gif" /></td>
                                </tr>
                        </table>
                </td>
        </tr>
</table>
<!-- Start standard table -->
<table align="center" width="$width" cellspacing="0" cellpadding="0">
  <tr>
   <td><img name="spacer" src="images/spacer.gif" width="20" height="1" border="0" alt="" /></td>
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
   <td><img name="spacer" src="images/spacer.gif" width="20" height="1" border="0" alt="" /></td>
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
        '{MY_PROF_LNK}' => $lang_main_menu['my_prof_lnk'],
        '{FAQ_TGT}' => "faq.php",
        '{FAQ_TITLE}' => $lang_main_menu['faq_title'],
        '{FAQ_LNK}' => $lang_main_menu['faq_lnk'],
        '{ADM_MODE_TGT}' => "mode.php?admin_mode=1&referer=$REFERER",
        '{ADM_MODE_TITLE}' => $lang_main_menu['adm_mode_title'],
        '{ADM_MODE_LNK}' => $lang_main_menu['adm_mode_lnk'],
        '{USR_MODE_TGT}' => "mode.php?admin_mode=0&referer=$REFERER",
        '{USR_MODE_TITLE}' => $lang_main_menu['usr_mode_title'],
        '{USR_MODE_LNK}' => $lang_main_menu['usr_mode_lnk'],
        '{UPL_PIC_TGT}' => "upload.php",
        '{UPL_PIC_TITLE}' => $lang_main_menu['upload_pic_title'],
        '{UPL_PIC_LNK}' => $lang_main_menu['upload_pic_lnk'],
        '{REGISTER_TGT}' => "register.php",
        '{REGISTER_TITLE}' => $lang_main_menu['register_title'],
        '{REGISTER_LNK}' => $lang_main_menu['register_lnk'],
        '{LOGIN_TGT}' => "login.php?referer=$REFERER",
        '{LOGIN_LNK}' => $lang_main_menu['login_lnk'],
        '{LOGOUT_TGT}' => "logout.php?referer=$REFERER",
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
        '{LASTUP_LNK}' => $lang_main_menu['lastup_lnk'],
        '{LASTCOM_TGT}' => "thumbnails.php?album=lastcom$cat_l2",
        '{LASTCOM_LNK}' => $lang_main_menu['lastcom_lnk'],
        '{TOPN_TGT}' => "thumbnails.php?album=topn$cat_l2",
        '{TOPN_LNK}' => $lang_main_menu['topn_lnk'],
        '{TOPRATED_TGT}' => "thumbnails.php?album=toprated$cat_l2",
        '{TOPRATED_LNK}' => $lang_main_menu['toprated_lnk'],
        '{FAV_TGT}' => "thumbnails.php?album=favpics",
        '{FAV_LNK}' => $lang_main_menu['fav_lnk'],
        '{SEARCH_TGT}' => "search.php",
        '{SEARCH_LNK}' => $lang_main_menu['search_lnk'],
        );

    $main_menu = template_eval($template_main_menu, $param);
    return $main_menu;
}





















function theme_display_image($nav_menu, $picture, $votes, $pic_info, $comments, $film_strip)
{
    global $CONFIG;

    $spacer = <<<EOT
        <tr>
                <td><img src="themes/eyeball/images/hline_left.gif" alt="" /><br /></td>
                <td width="100%" background="themes/eyeball/images/hline_bg.gif" align="center"><img src="themes/eyeball/images/hline_blue_ball.gif" alt="" /><br /></td>
                <td><img src="themes/eyeball/images/hline_right.gif" alt="" /><br /></td>
        </tr>

EOT;

    echo '        <img src="images/spacer.gif" width="1" height="25" /><br />' . "\n";
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
        starttable();
        echo $votes;
        endtable();
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
        starttable();
        echo $comments;
        endtable();
    }
}

?>