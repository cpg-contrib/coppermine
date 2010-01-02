<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2010 Coppermine Dev Team
  v1.0 originally written by Gregory Demar

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

if (!defined('IN_COPPERMINE')) { die('Not in Coppermine...');}

$lang_charset = cpg_lang_var("lang_charset");

$lang_text_dir = cpg_lang_var("lang_text_dir");

// Some common strings
$lang_yes = cpg_lang_var("lang_yes");
$lang_no  = cpg_lang_var("lang_no");
$lang_back = cpg_lang_var("lang_back");
$lang_continue = cpg_lang_var("lang_continue");
$lang_info = cpg_lang_var("lang_info");
$lang_error = cpg_lang_var("lang_error");
$lang_check_uncheck_all = cpg_lang_var("lang_check_uncheck_all");

$lang_bbcode_help = cpg_lang_var("lang_bbcode_help");
$lang_bbcode_help_title = cpg_lang_var("lang_bbcode_help_title");

$lang_register_confirm_email = cpg_lang_var("lang_register_confirm_email");
$lang_register_confirm_email = cpg_lang_var("lang_register_confirm_email");
$lang_register_approve_email = cpg_lang_var("lang_register_approve_email");
$lang_register_activated_email = cpg_lang_var("lang_register_activated_email");

// info about translators and translated language
$lang_translation_info_en = cpg_get_default_lang_var('lang_translation_info','english');
$lang_translation_info = array_merge($lang_translation_info_en, $lang_translation_info);

// shortcuts for Byte, Kilo, Mega
$lang_byte_units_en = cpg_get_default_lang_var('lang_byte_units','english');
$lang_byte_units = array_merge($lang_byte_units_en, $lang_byte_units);

// Day of weeks and months
if (!isset($lang_day_of_week)) $lang_day_of_week = cpg_get_default_lang_var('lang_day_of_week','english');
if (!isset($lang_month)) $lang_month = cpg_get_default_lang_var('lang_month','english');


$lang_meta_album_names_en = cpg_get_default_lang_var('lang_meta_album_names','english');
$lang_meta_album_names = array_merge($lang_meta_album_names_en, $lang_meta_album_names);

$lang_errors_en = cpg_get_default_lang_var('lang_errors','english');
$lang_errors = array_merge($lang_errors_en, $lang_errors);

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //
$lang_main_menu_en = cpg_get_default_lang_var('lang_main_menu','english');
$lang_main_menu = array_merge($lang_main_menu_en, $lang_main_menu);

$lang_gallery_admin_menu_en = cpg_get_default_lang_var('lang_gallery_admin_menu','english');
$lang_gallery_admin_menu = array_merge($lang_gallery_admin_menu_en, $lang_gallery_admin_menu);

$lang_user_admin_menu_en = cpg_get_default_lang_var('lang_user_admin_menu','english');
$lang_user_admin_menu = array_merge($lang_user_admin_menu_en, $lang_user_admin_menu);

$lang_cat_list_en = cpg_get_default_lang_var('lang_cat_list','english');
$lang_cat_list = array_merge($lang_cat_list_en, $lang_cat_list);

$lang_album_list_en = cpg_get_default_lang_var('lang_album_list','english');
$lang_album_list = array_merge($lang_album_list_en, $lang_album_list);

$lang_thumb_view_en = cpg_get_default_lang_var('lang_thumb_view','english');
$lang_thumb_view = array_merge($lang_thumb_view_en, $lang_thumb_view);

$lang_img_nav_bar_en = cpg_get_default_lang_var('lang_img_nav_bar','english');
$lang_img_nav_bar = array_merge($lang_img_nav_bar_en, $lang_img_nav_bar);

$lang_rate_pic_en = cpg_get_default_lang_var('lang_rate_pic','english');
$lang_rate_pic = array_merge($lang_rate_pic_en, $lang_rate_pic);

// ------------------------------------------------------------------------- //
// File include/functions.inc.php
// ------------------------------------------------------------------------- //

$lang_cpg_die_en = cpg_get_default_lang_var('lang_cpg_die','english');
$lang_cpg_die = isset($lang_cpg_die) ? $lang_cpg_die : $lang_cpg_die_en;

$lang_display_thumbnails_en = cpg_get_default_lang_var('lang_display_thumbnails','english');
$lang_display_thumbnails = array_merge($lang_display_thumbnails_en, $lang_display_thumbnails);

$lang_get_pic_data_en = cpg_get_default_lang_var('lang_get_pic_data','english');
$lang_get_pic_data = array_merge($lang_get_pic_data_en, $lang_get_pic_data);

$lang_cpg_debug_output_en = cpg_get_default_lang_var('lang_cpg_debug_output','english');
$lang_cpg_debug_output = array_merge($lang_cpg_debug_output_en, $lang_cpg_debug_output);

$lang_language_selection_en = cpg_get_default_lang_var('lang_language_selection','english');
$lang_language_selection = array_merge($lang_language_selection_en, $lang_language_selection);

$lang_theme_selection_en = cpg_get_default_lang_var('lang_theme_selection','english');
$lang_theme_selection = array_merge($lang_theme_selection_en, $lang_theme_selection);

$lang_version_alert_en = cpg_get_default_lang_var('lang_version_alert','english');
$lang_version_alert = array_merge($lang_version_alert_en, $lang_version_alert);

// ------------------------------------------------------------------------- //
// File include/smilies.inc.php
// ------------------------------------------------------------------------- //
if (defined('SMILIES_PHP')) {
  $lang_smilies_inc_php_en = cpg_get_default_lang_var('lang_smilies_inc_php','english');
  $lang_smilies_inc_php = array_merge($lang_smilies_inc_php_en, $lang_smilies_inc_php);
}

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) {
  $lang_albmgr_php_en = cpg_get_default_lang_var('lang_albmgr_php','english');
  $lang_albmgr_php = array_merge($lang_albmgr_php_en, $lang_albmgr_php);
}

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) {
  $lang_banning_php_en = cpg_get_default_lang_var('lang_banning_php','english');
  $lang_banning_php = array_merge($lang_banning_php_en, $lang_banning_php);
}


// ------------------------------------------------------------------------- //
// File bridgemgr.php
// ------------------------------------------------------------------------- //

if (defined('BRIDGEMGR_PHP')) {
  $lang_bridgemgr_php_en = cpg_get_default_lang_var('lang_bridgemgr_php','english');
  $lang_bridgemgr_php = array_merge($lang_bridgemgr_php_en, $lang_bridgemgr_php);
}


// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) {
  $lang_catmgr_php_en = cpg_get_default_lang_var('lang_catmgr_php','english');
  $lang_catmgr_php = array_merge($lang_catmgr_php_en, $lang_catmgr_php);
}

// ------------------------------------------------------------------------- //
// File admin.php
// ------------------------------------------------------------------------- //

if (defined('ADMIN_PHP')) {
  $lang_admin_php_en = cpg_get_default_lang_var('lang_admin_php','english');
  $lang_admin_php = array_merge($lang_admin_php_en, $lang_admin_php);
}



// ------------------------------------------------------------------------- //
// File calendar.php
// ------------------------------------------------------------------------- //

if (defined('CALENDAR_PHP')) {
  $lang_calendar_php_en = cpg_get_default_lang_var('lang_calendar_php','english');
  $lang_calendar_php = array_merge($lang_calendar_php_en, $lang_calendar_php);
}

// ------------------------------------------------------------------------- //
// File db_ecard.php
// ------------------------------------------------------------------------- //

if (defined('DB_ECARD_PHP')) {
  $lang_db_ecard_php_en = cpg_get_default_lang_var('lang_db_ecard_php','english');
  $lang_db_ecard_php = array_merge($lang_db_ecard_php_en, $lang_db_ecard_php);
}

// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) {
  $lang_db_input_php_en = cpg_get_default_lang_var('lang_db_input_php','english');
  $lang_db_input_php = array_merge($lang_db_input_php_en, $lang_db_input_php);
}

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) {
  $lang_delete_php_en = cpg_get_default_lang_var('lang_delete_php','english');
  $lang_delete_php = array_merge($lang_delete_php_en, $lang_delete_php);
}

// ------------------------------------------------------------------------- //
// File displayecard.php
// ------------------------------------------------------------------------- //

if (defined('DISPLAYECARD_PHP')) {
  $lang_display_image_php_en = cpg_get_default_lang_var('lang_display_image_php','english');
  $lang_display_image_php = array_merge($lang_display_image_php_en, $lang_display_image_php);
}

// ------------------------------------------------------------------------- //
// File displayimage.php
// ------------------------------------------------------------------------- //

if (defined('DISPLAYIMAGE_PHP')) {
  $lang_display_image_php_en = cpg_get_default_lang_var('lang_display_image_php','english');
  $lang_display_image_php = array_merge($lang_display_image_php_en, $lang_display_image_php);

  $lang_picinfo_en = cpg_get_default_lang_var('lang_picinfo','english');
  $lang_picinfo = array_merge($lang_picinfo_en, $lang_picinfo);


$lang_display_comments_en = cpg_get_default_lang_var('lang_display_comments','english');
$lang_display_comments = array_merge($lang_display_comments_en, $lang_display_comments);

$lang_fullsize_popup_en = cpg_get_default_lang_var('lang_fullsize_popup','english');
$lang_fullsize_popup = array_merge($lang_fullsize_popup_en, $lang_fullsize_popup);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) {
  $lang_ecard_php_en = cpg_get_default_lang_var('lang_ecard_php','english');
  $lang_ecard_php = array_merge($lang_ecard_php_en, $lang_ecard_php);
}

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) {
  $lang_editpics_php_en = cpg_get_default_lang_var('lang_editpics_php','english');
  $lang_editpics_php = array_merge($lang_editpics_php_en, $lang_editpics_php);
}

// ------------------------------------------------------------------------- //
// File faq.php
// ------------------------------------------------------------------------- //

if (defined('FAQ_PHP')) {
  $lang_faq_php_en = cpg_get_default_lang_var('lang_faq_php','english');
  $lang_faq_php = array_merge($lang_faq_php_en, $lang_faq_php);
}

if (defined('FAQ_PHP')) {
	$lang_faq_data_en = cpg_get_default_lang_var('lang_faq_data','english');
	 if (!isset($lang_faq_data)) $lang_faq_data = $lang_faq_data_en;
}

// ------------------------------------------------------------------------- //
// File forgot_passwd.php
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) {
  $lang_forgot_passwd_php_en = cpg_get_default_lang_var('lang_forgot_passwd_php','english');
  $lang_forgot_passwd_php = array_merge($lang_forgot_passwd_php_en, $lang_forgot_passwd_php);
}

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) {
  $lang_groupmgr_php_en = cpg_get_default_lang_var('lang_groupmgr_php','english');
  $lang_groupmgr_php = array_merge($lang_groupmgr_php_en, $lang_groupmgr_php);
}

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')) {
  $lang_index_php_en = cpg_get_default_lang_var('lang_index_php','english');
  $lang_index_php = array_merge($lang_index_php_en, $lang_index_php);


$lang_album_admin_menu_en = cpg_get_default_lang_var('lang_album_admin_menu','english');
$lang_album_admin_menu = array_merge($lang_album_admin_menu_en, $lang_album_admin_menu);

$lang_list_categories_en = cpg_get_default_lang_var('lang_list_categories','english');
$lang_list_categories = array_merge($lang_list_categories_en, $lang_list_categories);

$lang_list_users_en = cpg_get_default_lang_var('lang_list_users','english');
$lang_list_users = array_merge($lang_list_users_en, $lang_list_users);

$lang_list_albums_en = cpg_get_default_lang_var('lang_list_albums','english');
$lang_list_albums = array_merge($lang_list_albums_en, $lang_list_albums);
}

// ------------------------------------------------------------------------- //
// File keywordmgr.php //cpg 1.4
// ------------------------------------------------------------------------- //

if (defined('KEYWORDMGR_PHP')) {
  $lang_keywordmgr_php_en = cpg_get_default_lang_var('lang_keywordmgr_php','english');
  $lang_keywordmgr_php = array_merge($lang_keywordmgr_php_en, $lang_keywordmgr_php);
}

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) {
  $lang_login_php_en = cpg_get_default_lang_var('lang_login_php','english');
  $lang_login_php = array_merge($lang_login_php_en, $lang_login_php);
}

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) {
  $lang_logout_php_en = cpg_get_default_lang_var('lang_logout_php','english');
  $lang_logout_php = array_merge($lang_logout_php_en, $lang_logout_php);
}

// ------------------------------------------------------------------------- //
// File minibrowser.php
// ------------------------------------------------------------------------- //

if (defined('MINIBROWSER_PHP')) {
  $lang_minibrowser_php_en = cpg_get_default_lang_var('lang_minibrowser_php','english');
  $lang_minibrowser_php = array_merge($lang_minibrowser_php_en, $lang_minibrowser_php);
}

// ------------------------------------------------------------------------- //
// File mode.php
// ------------------------------------------------------------------------- //

if (defined('MODE_PHP')) {
  $lang_mode_php_en = cpg_get_default_lang_var('lang_mode_php','english');
  $lang_mode_php = isset($lang_mode_php) ? $lang_mode_php : $lang_mode_php_en;
}

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) {
  $lang_modifyalb_php_en = cpg_get_default_lang_var('lang_modifyalb_php','english');
  $lang_modifyalb_php = array_merge($lang_modifyalb_php_en, $lang_modifyalb_php);
}

// ------------------------------------------------------------------------- //
// File picmgr.php
// ------------------------------------------------------------------------- //

if (defined('PICMGR_PHP')) {
  $lang_picmgr_php_en = cpg_get_default_lang_var('lang_picmgr_php','english');
  $lang_picmgr_php = array_merge($lang_picmgr_php_en, $lang_picmgr_php);
}

// ------------------------------------------------------------------------- //
// File phpinfo.php
// ------------------------------------------------------------------------- //

if (defined('PHPINFO_PHP')) {
  $lang_phpinfo_php_en = cpg_get_default_lang_var('lang_phpinfo_php','english');
  $lang_phpinfo_php = array_merge($lang_phpinfo_php_en, $lang_phpinfo_php);
}

// ------------------------------------------------------------------------- //
// File pluginmgr.php
// ------------------------------------------------------------------------- //

if (defined('PLUGINMGR_PHP')){
  $lang_pluginmgr_php_en  = cpg_get_default_lang_var('lang_pluginmgr_php','english');
  $lang_pluginmgr_php  = array_merge($lang_pluginmgr_php_en, $lang_pluginmgr_php);
}

$lang_plugin_api_en  = cpg_get_default_lang_var('lang_plugin_api','english');
$lang_plugin_api  = array_merge($lang_plugin_api_en, $lang_plugin_api);

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) {
  $lang_rate_pic_php_en = cpg_get_default_lang_var('lang_rate_pic_php','english');
  $lang_rate_pic_php = array_merge($lang_rate_pic_php_en, $lang_rate_pic_php);
}

// ------------------------------------------------------------------------- //
// File register.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {
  $lang_register_php_en = cpg_get_default_lang_var('lang_register_php','english');
  $lang_register_php = array_merge($lang_register_php_en, $lang_register_php);
  if (!isset($lang_register_disclamer)) $lang_register_disclamer = cpg_lang_var("lang_register_disclamer");
}

// ------------------------------------------------------------------------- //
// File report_file.php
// ------------------------------------------------------------------------- //

if (defined('REPORT_FILE_PHP') || defined('DISPLAYREPORT_PHP')) {
  $lang_report_php_en = cpg_get_default_lang_var('lang_report_php','english');
  $lang_report_php = array_merge($lang_report_php_en, $lang_report_php);
}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) {
  $lang_reviewcom_php_en = cpg_get_default_lang_var('lang_reviewcom_php','english');
  $lang_reviewcom_php = array_merge($lang_reviewcom_php_en, $lang_reviewcom_php);
}

// ------------------------------------------------------------------------- //
// File search.php - OK
// ------------------------------------------------------------------------- //

if (defined('SEARCH_PHP')) {
  $lang_search_php_en = cpg_get_default_lang_var('lang_search_php','english');
  $lang_search_php = array_merge($lang_search_php_en, $lang_search_php);
  $lang_adv_opts_en = cpg_get_default_lang_var('lang_adv_opts','english');
  $lang_adv_opts = array_merge($lang_adv_opts_en, $lang_adv_opts);
}

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) {
  $lang_search_new_php_en = cpg_get_default_lang_var('lang_search_new_php','english');
  $lang_search_new_php = array_merge($lang_search_new_php_en, $lang_search_new_php);
}

// ------------------------------------------------------------------------- //
// File stat_details.php
// ------------------------------------------------------------------------- //

if (defined('STAT_DETAILS_PHP')) {
  $lang_stat_details_php_en = cpg_get_default_lang_var('lang_stat_details_php','english');
  $lang_stat_details_php = array_merge($lang_stat_details_php_en, $lang_stat_details_php);
}

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) {
  $lang_upload_php_en = cpg_get_default_lang_var('lang_upload_php','english');
  $lang_upload_php = array_merge($lang_upload_php_en, $lang_upload_php);
}

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) {
  $lang_usermgr_php_en = cpg_get_default_lang_var('lang_usermgr_php','english');
  $lang_usermgr_php = array_merge($lang_usermgr_php_en, $lang_usermgr_php);
}

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //

if (defined('UTIL_PHP')) {
	$lang_util_php_en = cpg_get_default_lang_var('lang_util_php','english');
	$lang_util_php = array_merge($lang_util_php_en, $lang_util_php);
	$lang_util_desc_php_en = cpg_get_default_lang_var('lang_util_desc_php','english');
	if (!isset($lang_util_desc_php)) $lang_util_desc_php = $lang_util_desc_php_en;
}

// ------------------------------------------------------------------------- //
// File view_log.php - OK
// ------------------------------------------------------------------------- //

if (defined('VIEWLOG_PHP')) {
  $lang_viewlog_php_en = cpg_get_default_lang_var('lang_viewlog_php','english');
  $lang_viewlog_php = array_merge($lang_viewlog_php_en, $lang_viewlog_php);
}

if (defined('VOTEDETAILS_PHP')) {
  $lang_votedetails_php_en = cpg_get_default_lang_var('lang_votedetails_php','english');
  $lang_votedetails_php = array_merge($lang_votedetails_php_en, $lang_votedetails_php);
}

if (defined('HITDETAILS_PHP')) {
  $lang_hitdetails_php_en = cpg_get_default_lang_var('lang_hitdetails_php','english');
  $lang_hitdetails_php = array_merge($lang_hitdetails_php_en, $lang_hitdetails_php);
}

// ------------------------------------------------------------------------- //
// File xp_publish.php
// ------------------------------------------------------------------------- //

if (defined('XP_PUBLISH_PHP')) {
	$lang_xp_publish_php_en = cpg_get_default_lang_var('lang_xp_publish_php','english');
	$lang_xp_publish_php = array_merge($lang_xp_publish_php_en, $lang_xp_publish_php);
	$lang_xp_publish_required_en = cpg_get_default_lang_var('lang_xp_publish_required','english');
	if (!isset($lang_xp_publish_required)) $lang_xp_publish_required = $lang_xp_publish_required_en;
	$lang_xp_publish_client_en = cpg_get_default_lang_var('lang_xp_publish_client','english');
	if (!isset($lang_xp_publish_client)) $lang_xp_publish_client =  $lang_xp_publish_client_en;
	$lang_xp_publish_select_en = cpg_get_default_lang_var('lang_xp_publish_select','english');
	if (!isset($lang_xp_publish_select)) $lang_xp_publish_select =  $lang_xp_publish_select_en;
	$lang_xp_publish_testing_en = cpg_get_default_lang_var('lang_xp_publish_testing','english');
	if (!isset($lang_xp_publish_testing)) $lang_xp_publish_testing =  $lang_xp_publish_testing_en;
	$lang_xp_publish_notes_en = cpg_get_default_lang_var('lang_xp_publish_notes','english');
	if (!isset($lang_xp_publish_notes)) $lang_xp_publish_notes =  $lang_xp_publish_notes_en;
	$lang_xp_publish_flood_en = cpg_get_default_lang_var('lang_xp_publish_flood','english');
	if (!isset($lang_xp_publish_flood)) $lang_xp_publish_flood =  $lang_xp_publish_flood_en;
}

?>
