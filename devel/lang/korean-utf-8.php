<?php
// ------------------------------------------------------------------------- //
// Coppermine Photo Gallery 1.2.0                                            //
// ------------------------------------------------------------------------- //
// Copyright (C) 2002,2003 Gregory DEMAR <gdemar@wanadoo.fr>                 //
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
$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('Bytes', 'KB', 'MB');

// Day of weeks and months
$lang_day_of_week = array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat');
$lang_month = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');

// Some common strings
$lang_yes = '¿¹';
$lang_no  = '¾Æ´Ï¿&Agrave;';
$lang_back = '&micro;&Uacute;·&Icirc;';
$lang_continue = '´&Ugrave;&Agrave;½';
$lang_info = '¾&Egrave;&sup3;»';
$lang_error = '¿¡·¯';

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$album_date_fmt =    '%B %d, %Y';
$lastcom_date_fmt =  '%m/%d/%y at %H:%M';
$lastup_date_fmt = '%B %d, %Y';
$register_date_fmt = '%B %d, %Y';
$lasthit_date_fmt = '%B %d, %Y at %I:%M %p';
$comment_date_fmt =  '%B %d, %Y at %I:%M %p';

// For the word censor
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*');

$lang_meta_album_names = array(
	'random' => 'Æ÷Å&auml;´º½º °¶·¯¸®',
	'lastup' => 'Ã&Ouml;±&Ugrave; &Agrave;&Igrave;¹&Igrave;&Aacute;&ouml;',
	'lastcom' => 'Ã&Ouml;±&Ugrave; &Auml;&Uacute;¸&agrave;Æ®',
	'topn' => 'Ã&Ouml;´&Ugrave; &Aacute;¶&Egrave;¸',
	'toprated' => 'Ã&Ouml;°&iacute; Æ&ograve;&Aacute;¡',
	'lasthits' => '¸¶&Aacute;&ouml;¸· &Aacute;¶&Egrave;¸',
	'search' => '°Ë»&ouml; °&aacute;°&uacute;'
);

$lang_errors = array(
	'access_denied' => '&Egrave;¸¿ø´&Ocirc;&Agrave;Ç ±ÇÇÑ&Agrave;¸·&Icirc; &Agrave;&Igrave;Æ&auml;&Aacute;&ouml;¸¦ º¸½Ç ¼&ouml; ¾ø½&Agrave;´Ï´&Ugrave;. °&uuml;¸®&Agrave;&Uacute;¿¡°&Ocirc; ¹®&Agrave;ÇÇÏ¼¼¿&auml;.',
	'perm_denied' => '&Egrave;¸¿ø´&Ocirc;&Agrave;Ç ±ÇÇÑ&Agrave;¸·&Icirc; ½ÇÇ&agrave;Ç&Ograve; ¼&ouml; ¾ø´&Acirc; ¸&iacute;·&Eacute;&Agrave;&Ocirc;´Ï´&Ugrave;.',
	'param_missing' => 'Ç&Ecirc;¼&ouml;Ç×¸ñ&Agrave;» &Egrave;®&Agrave;&Icirc;ÇÏ¼¼¿&auml;.',
	'non_exist_ap' => '¼±ÅÃÇÑ ¾&Ugrave;¹&uuml;&Agrave;&Igrave;&sup3;ª &Agrave;&Igrave;¹&Igrave;&Aacute;&ouml;°¡ &Aacute;¸&Agrave;çÇÏ&Aacute;&ouml; ¾&Ecirc;½&Agrave;´Ï´&Ugrave; !',
	'quota_exceeded' => 'Ç&Ograve;´ç¿ë·® Ã&Ecirc;°&uacute;,<br /><br />Ç&Ograve;´ç&micro;&Egrave; &micro;ð½ºÅ©[quota]K, »ç¿ë°¡´&Eacute;ÇÑ ¿ë·®[space]K, Ç&Ograve;´ç¿ë·® Ã&Ecirc;°&uacute;·&Icirc; ¾÷·&Icirc;&micro;åÇ&Ograve; ¼&ouml; ¾ø&Agrave;½,',
	'gd_file_type_err' => 'JPEG¿&Iacute; PNGÆ&Auml;&Agrave;Ï¸¸ &Aacute;&ouml;¿ø&micro;&Ecirc;,',
	'invalid_image' => 'ºñ&Aacute;¤»&oacute; Æ&Auml;&Agrave;Ï ¶Ç´&Acirc; °¶·¯¸®¿¡¼­ &Aacute;&ouml;¿ø&micro;Ç&Aacute;&ouml;¾&Ecirc;´&Acirc; Æ&Auml;&Agrave;Ï&Agrave;&Ocirc;´Ï´&Ugrave;.',
	'resize_failed' => '½æ&sup3;×&Agrave;Ï&Agrave;&Igrave; »ý¼º&micro;Ç&Aacute;&ouml; ¾&Ecirc;¾&Ograve;½&Agrave;´Ï´&Ugrave;.',
	'no_img_to_display' => 'Ç¥½ÃÇ&Ograve; &Agrave;&Igrave;¹&Igrave;&Aacute;&ouml;°¡ ¾ø½&Agrave;´Ï´&Ugrave;.',
	'non_exist_cat' => '¼±ÅÃÇÑ &Auml;«Å×°&iacute;¸®´&Acirc; &Aacute;¸&Agrave;çÇÏ&Aacute;&ouml; ¾&Ecirc;½&Agrave;´Ï´&Ugrave;.',
	'orphan_cat' => '»&oacute;&Agrave;§ &Auml;«Å×°&iacute;¸®°¡ &Aacute;¸&Agrave;çÇÏ&Aacute;&ouml;¾&Ecirc;½&Agrave;´Ï´&Ugrave;. °&uuml;¸®&Agrave;&Uacute;¿¡°&Ocirc; ¹®&Agrave;ÇÇÏ¼¼¿&auml;.',
	'directory_ro' => '\'%s\'¿¡ &micro;¥&Egrave;&ugrave; ¸&iacute;·&Eacute;&Agrave;» ½ÇÇ&agrave;Ç&Ograve; ¼&ouml; ¾ø½&Agrave;´Ï´&Ugrave;.',
	'non_exist_comment' => '¼±ÅÃÇÑ &Auml;&Uacute;¸&agrave;Æ®´&Acirc; &Aacute;¸&Agrave;çÇÏ&Aacute;&ouml; ¾&Ecirc;½&Agrave;´Ï´&Ugrave;.',
	'pic_in_invalid_album' => '&Aacute;¸&Agrave;çÇÏ&Aacute;&ouml;¾&Ecirc;´&Acirc; ¾&Ugrave;¹&uuml;&Agrave;&Igrave;¹&Igrave;&Aacute;&ouml;(%s)!?'
);

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
	'alb_list_title' => '¾&Ugrave;¹&uuml; ¸ñ·Ï&Agrave;¸·&Icirc;',
	'alb_list_lnk' => '¾&Ugrave;¹&uuml;¸ñ·Ï',
	'my_gal_title' => '°&sup3;&Agrave;&Icirc;¾&Ugrave;¹&uuml;&Agrave;¸·&Icirc;',
	'my_gal_lnk' => '°&sup3;&Agrave;&Icirc;¾&Ugrave;¹&uuml;',
	'my_prof_lnk' => '°&sup3;&Agrave;&Icirc;&Aacute;¤º¸',
	'adm_mode_title' => '°&uuml;¸®¸ð&micro;å·&Icirc; &Agrave;&uuml;&Egrave;¯',
	'adm_mode_lnk' => '°&uuml;¸®¸ð&micro;å',
	'usr_mode_title' => '&Agrave;Ï¹Ý¸ð&micro;å·&Icirc; &Agrave;&uuml;&Egrave;¯',
	'usr_mode_lnk' => '&Agrave;Ï¹Ý¸ð&micro;å',
	'upload_pic_title' => '¾&Ugrave;¹&uuml;¿¡ &Agrave;&Igrave;¹&Igrave;&Aacute;&ouml; ¾÷·&Icirc;&micro;å',
	'upload_pic_lnk' => '&Agrave;&Igrave;¹&Igrave;&Aacute;&ouml;¾÷·&Icirc;&micro;å',
	'register_title' => '°&egrave;&Aacute;¤»ý¼º',
	'register_lnk' => '&Egrave;¸¿ø&micro;&icirc;·Ï',
	'login_lnk' => '·&Icirc;±×&Agrave;&Icirc;',
	'logout_lnk' => '·&Icirc;±×¾Æ¿&ocirc;',
	'lastup_lnk' => 'Ã&Ouml;±&Ugrave;&Agrave;&Igrave;¹&Igrave;&Aacute;&ouml;',
	'lastcom_lnk' => 'Ã&Ouml;±&Ugrave;&Auml;&Uacute;¸&agrave;Æ®',
	'topn_lnk' => 'Ã&Ouml;´&Ugrave;&Aacute;¶&Egrave;¸',
	'toprated_lnk' => 'Ã&Ouml;°&iacute;Æ&ograve;&Aacute;¡',
	'search_lnk' => '°Ë»&ouml;',
);

$lang_gallery_admin_menu = array(
	'upl_app_lnk' => '¾÷·&Icirc;&micro;å½&Acirc;&Agrave;&Icirc;',
	'config_lnk' => '&Egrave;¯°æ¼&sup3;&Aacute;¤',
	'albums_lnk' => '¾&Ugrave;¹&uuml;°&uuml;¸®',
	'categories_lnk' => '&Auml;«Å×°&iacute;¸®°&uuml;¸®',
	'users_lnk' => '&Egrave;¸¿ø°&uuml;¸®',
	'groups_lnk' => '±×·&igrave;°&uuml;¸®',
	'comments_lnk' => '&Auml;&Uacute;¸&agrave;Æ®°&uuml;¸®',
	'searchnew_lnk' => 'FTP¾÷·&Icirc;&micro;åÆ&Auml;&Agrave;Ï¿¬°&aacute;',
);

$lang_user_admin_menu = array(
	'albmgr_lnk' => '°&sup3;&Agrave;&Icirc;¾&Ugrave;¹&uuml; »ý¼º ¹× °&uuml;¸®',
	'modifyalb_lnk' => '°&sup3;&Agrave;&Icirc;¾&Ugrave;¹&uuml; ¼&ouml;&Aacute;¤',
	'my_prof_lnk' => '°&sup3;&Agrave;&Icirc;&Aacute;¤º¸',
);

$lang_cat_list = array(
	'category' => '°¶·¯¸® ¹&Ugrave;·&Icirc;°¡±&acirc;',
	'albums' => '¾&Ugrave;¹&uuml;',
	'pictures' => '&Agrave;&Igrave;¹&Igrave;&Aacute;&ouml;',
);

$lang_album_list = array(
	'album_on_page' => '¾&Ugrave;¹&uuml; %d Æ&auml;&Agrave;&Igrave;&Aacute;&ouml; %d'
);

$lang_thumb_view = array(
	'date' => 'DATE',
	'name' => 'NAME',
	'sort_da' => '(a-z)',
	'sort_dd' => '(z-a)',
	'sort_na' => '(a-z)',
	'sort_nd' => '(z-a)',
	'pic_on_page' => '&Agrave;&Igrave;¹&Igrave;&Aacute;&ouml; %d Æ&auml;&Agrave;&Igrave;&Aacute;&ouml; %d',
	'user_on_page' => '»ç¿ë&Agrave;&Uacute;(&Egrave;¸¿ø): %d Æ&auml;&Agrave;&Igrave;&Aacute;&ouml;: %d'
);

$lang_img_nav_bar = array(
	'thumb_title' => '¸ñ·Ï&Agrave;¸·&Icirc; &micro;¹¾Æ°¡±&acirc;',
	'pic_info_title' => '»&oacute;¼¼&Aacute;¤º¸ º¸±&acirc;/¼&ucirc;±&acirc;±&acirc;',
	'slideshow_title' => '½½¶&oacute;&Agrave;&Igrave;&micro;å¼&icirc;',
	'ecard_title' => '&Agrave;&Igrave;¹&Igrave;&Aacute;&ouml;¸¦ Ã·º&Icirc;ÇÑ &Auml;«&micro;åº¸&sup3;»±&acirc;',
	'ecard_disabled' => '&Auml;«&micro;åº¸&sup3;»±&acirc; &Agrave;&aacute;±&egrave;',
	'ecard_disabled_msg' => '&Auml;«&micro;åº¸&sup3;»±&acirc; ±ÇÇÑ¾ø&Agrave;½',
	'prev_title' => '&Agrave;&Igrave;&Agrave;&uuml;',
	'next_title' => '´&Ugrave;&Agrave;½',
	'pic_pos' => '&micro;&icirc;·Ï &Agrave;&Igrave;¹&Igrave;&Aacute;&ouml; %s/%s',
);

$lang_rate_pic = array(
	'rate_this_pic' => 'Æ&ograve;°¡',
	'no_votes' => '(Æ&ograve;°¡°¡´&Eacute;)',
	'rating' => '(Æ&ograve;&Aacute;¡¼ø&Agrave;§ : %s / 5 Æ&ograve;°¡&Egrave;½¼&ouml; %s &Egrave;¸)',
	'rubbish' => 'Rubbish',
	'poor' => 'Poor',
	'fair' => 'Fair',
	'good' => 'Good',
	'excellent' => 'Excellent',
	'great' => 'Great',
);

// ------------------------------------------------------------------------- //
// File include/exif.inc.php
// ------------------------------------------------------------------------- //

// void

// ------------------------------------------------------------------------- //
// File include/functions.inc.php
// ------------------------------------------------------------------------- //

$lang_cpg_die = array(
	INFORMATION => $lang_info,
	ERROR => $lang_error,
	CRITICAL_ERROR => 'Critical error',
	'file' => 'File: ',
	'line' => 'Line: ',
);

$lang_display_thumbnails = array(
	'filename' => 'Æ&Auml;&Agrave;Ï&Agrave;&Igrave;¸§ : ',
	'filesize' => 'Æ&Auml;&Agrave;Ï¿ë·® : ',
	'dimensions' => '°¡·&Icirc;,¼¼·&Icirc; : ',
	'date_added' => '&micro;&icirc;·Ï&Agrave;Ï : '
);

$lang_get_pic_data = array(
	'n_comments' => '%s comments',
	'n_views' => '%s views',
	'n_votes' => '%s votes'
);

// ------------------------------------------------------------------------- //
// File include/init.inc.php
// ------------------------------------------------------------------------- //

// void

// ------------------------------------------------------------------------- //
// File include/picmgmt.inc.php
// ------------------------------------------------------------------------- //

// void

// ------------------------------------------------------------------------- //
// File include/smilies.inc.php
// ------------------------------------------------------------------------- //

if (defined('SMILIES_PHP')) $lang_smilies_inc_php = array(
	'Exclamation' => 'Exclamation',
	'Question' => 'Question',
	'Very Happy' => 'Very Happy',
	'Smile' => 'Smile',
	'Sad' => 'Sad',
	'Surprised' => 'Surprised',
	'Shocked' => 'Shocked',
	'Confused' => 'Confused',
	'Cool' => 'Cool',
	'Laughing' => 'Laughing',
	'Mad' => 'Mad',
	'Razz' => 'Razz',
	'Embarassed' => 'Embarassed',
	'Crying or Very sad' => 'Crying or Very sad',
	'Evil or Very Mad' => 'Evil or Very Mad',
	'Twisted Evil' => 'Twisted Evil',
	'Rolling Eyes' => 'Rolling Eyes',
	'Wink' => 'Wink',
	'Idea' => 'Idea',
	'Arrow' => 'Arrow',
	'Neutral' => 'Neutral',
	'Mr. Green' => 'Mr. Green',
);

// ------------------------------------------------------------------------- //
// File addpic.php
// ------------------------------------------------------------------------- //

// void

// ------------------------------------------------------------------------- //
// File admin.php
// ------------------------------------------------------------------------- //

if (defined('ADMIN_PHP')) $lang_admin_php = array(
	0 => '&Agrave;Ï¹Ý ¸ð&micro;å·&Icirc; &Agrave;&uuml;&Egrave;¯ÇÕ´Ï´&Ugrave;...',
	1 => '°&uuml;¸® ¸ð&micro;å·&Icirc; &Agrave;&uuml;&Egrave;¯ÇÕ´Ï´&Ugrave;...',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
	'alb_need_name' => '¾&Ugrave;¹&uuml;&Agrave;&Igrave;¸§&Agrave;&Igrave; Ç&Ecirc;¿&auml;ÇÕ´Ï´&Ugrave; !',
	'confirm_modifs' => 'º¯°æ»çÇ×&Agrave;» &Agrave;&uacute;&Agrave;åÇÏ½Ã°&Uacute;½&Agrave;´Ï±&icirc; ?',
	'no_change' => 'º¯°æ&micro;Ç¾&uacute;½&Agrave;´Ï´&Ugrave; !',
	'new_album' => '»õ ¾&Ugrave;¹&uuml;',
	'confirm_delete1' => '¾&Ugrave;¹&uuml;&Agrave;» »&egrave;&Aacute;¦ÇÏ½Ã°&Uacute;½&Agrave;´Ï±&icirc; ?',
	'confirm_delete2' => '\n¾&Ugrave;¹&uuml;¿¡ &micro;&icirc;·Ï&micro;&Egrave; &Agrave;&Igrave;¹&Igrave;&Aacute;&ouml;¿&Iacute; &Auml;&Uacute;¸&agrave;Æ®¸¦ ¸ð&micro;&Icirc; »&egrave;&Aacute;¦ÇÕ´Ï´&Ugrave; !',
	'select_first' => '¸Õ&Agrave;&uacute; ¾&Ugrave;¹&uuml;&Agrave;» ¼±ÅÃÇÏ¼¼¿&auml;',
	'alb_mrg' => '¾&Ugrave;¹&uuml;°&uuml;¸®',
	'my_gallery' => '°&sup3;&Agrave;&Icirc;¾&Ugrave;¹&uuml;',
	'no_category' => '*Ã&Ouml;»&oacute;&Agrave;§ &Auml;«Å×°&iacute;¸®(¸Þ&Agrave;&Icirc;)',
	'delete' => '»&egrave;&Aacute;¦',
	'new' => '»ý¼º',
	'apply_modifs' => 'º¯°æ&micro;&icirc;·Ï',
	'select_category' => '&Auml;«Å×°&iacute;¸® ¼±ÅÃ',
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
	'miss_param' => 'Parameters required for \'%s\'operation not supplied !',
	'unknown_cat' => '¼±ÅÃÇÑ &Auml;«Å×°&iacute;¸®´&Acirc; &Aacute;¸&Agrave;çÇÏ&Aacute;&ouml; ¾&Ecirc;½&Agrave;´Ï´&Ugrave;.',
	'usergal_cat_ro' => '&Egrave;¸¿ø °¶·¯¸®´&Acirc; »&egrave;&Aacute;¦Ç&Ograve; ¼&ouml; ¾ø½&Agrave;´Ï´&Ugrave; !',
	'manage_cat' => '&Auml;«Å×°&iacute;¸®°&uuml;¸®',
	'confirm_delete' => '&Auml;«Å×°&iacute;¸®¸¦ »&egrave;&Aacute;¦ÇÏ½Ã°&Uacute;½&Agrave;´Ï±&icirc; ?',
	'category' => '&Auml;«Å×°&iacute;¸®',
	'operations' => '½ÇÇ&agrave;¸Þ´º',
	'move_into' => '&Auml;«Å×°&iacute;¸® º¯°æ',
	'update_create' => '&Auml;«Å×°&iacute;¸® »ý¼º/º¯°æ',
	'parent_cat' => '»&oacute;&Agrave;§ &Auml;«Å×°&iacute;¸®',
	'cat_title' => '&Auml;«Å×°&iacute;¸® &Agrave;&Igrave;¸§',
	'cat_desc' => '&Auml;«Å×°&iacute;¸® ¼&sup3;¸&iacute;'
);

// ------------------------------------------------------------------------- //
// File config.php
// ------------------------------------------------------------------------- //

if (defined('CONFIG_PHP')) $lang_config_php = array(
	'title' => '¼&sup3;&Aacute;¤º¯°æ',
	'restore_cfg' => '±&acirc;º»¼&sup3;&Aacute;¤&Agrave;¸·&Icirc;',
	'save_cfg' => 'º¯°æ»çÇ×&Agrave;&uacute;&Agrave;å',
	'notes' => '&sup3;ëÆ®',
	'info' => '&Aacute;¤º¸',
	'upd_success' => 'º¯°æ»çÇ×&Agrave;&Igrave; &Agrave;&ucirc;¿ë&micro;Ç¾&uacute;½&Agrave;´Ï´&Ugrave;!',
	'restore_success' => '±&acirc;º»¼&sup3;&Aacute;¤&Agrave;¸·&Icirc; º¯°æ&micro;Ç¾&uacute;½&Agrave;´Ï´&Ugrave;!',
	'name_a' => '&Agrave;&Igrave;¸§ (a-z)',
	'name_d' => '&Agrave;&Igrave;¸§ (z-a)',
	'date_a' => 'Ã&Ouml;½Å±&Ucirc; º&Icirc;Å&Iacute;',
	'date_d' => '¿&Agrave;·£±&Ucirc; º&Icirc;Å&Iacute;'
);

if (defined('CONFIG_PHP')) $lang_config_data = array(
	'±&acirc;º»¼&sup3;&Aacute;¤',
	array('°¶·¯¸® &Agrave;&Igrave;¸§', 'gallery_name', 0),
	array('°¶·¯¸® ¼&sup3;¸&iacute;', 'gallery_description', 0),
	array('°&uuml;¸®&Agrave;&Uacute; &Agrave;&Igrave;¸Þ&Agrave;Ï', 'gallery_admin_email', 0),
	array('e-card &Agrave;Ç »&oacute;¼¼&Aacute;¤º¸¿¡ ¸&micro;Å©&micro;&Eacute; URL', 'ecards_more_pic_target', 0),
	array('¾ð¾&icirc;¼±ÅÃ', 'lang', 5),
	array('Å×¸¶¼±ÅÃ', 'theme', 6),

	'¾&Ugrave;¹&uuml;¸ñ·Ï ¼&sup3;&Aacute;¤',
	array('¸Þ&Agrave;&Icirc;Å×&Agrave;&Igrave;º&iacute;&Agrave;Ç Æø (pixels or %)', 'main_table_width', 0),
	array('Ç¥½ÃÇ&Ograve; &Auml;«Å×°&iacute;¸® ·¹º§¼&ouml;', 'subcat_level', 0),
	array('Ç¥½ÃÇ&Ograve; ¾&Ugrave;¹&uuml;&Agrave;Ç ¼&ouml;', 'albums_per_page', 0),
	array('¾&Ugrave;¹&uuml;&Agrave;Ç ¼¼·&Icirc; ¿­', 'album_list_cols', 0),
	array('½æ&sup3;×&Agrave;Ï Å©±&acirc;(pixels)', 'alb_list_thumb_size', 0),
	array('¸Þ&Agrave;&Icirc;Æ&auml;&Agrave;&Igrave;&Aacute;&ouml;¿¡ º&Ograve;·¯¿Ã &Auml;&Aacute;Å&Ugrave;Æ®', 'main_page_layout', 0),

	'½æ&sup3;×&Agrave;Ï¸ñ·Ï ¼&sup3;&Aacute;¤',
	array('½æ&sup3;×&Agrave;Ï &Auml;Ã·&sup3;¼&ouml;', 'thumbcols', 0),
	array('½æ&sup3;×&Agrave;Ï Ç&agrave;¼&ouml;', 'thumbrows', 0),
	array('º&Ograve;·¯¿Ã ¼¶&sup3;×&Agrave;Ï ÃÑ¼&ouml;', 'max_tabs', 0),
	array('½æ&sup3;×&Agrave;Ï°&uacute; Ç&Ocirc;&sup2;&sup2; »&oacute;¼¼&Aacute;¤º¸ Ã&acirc;·&Acirc;', 'caption_in_thumbview', 1),
	array('½æ&sup3;×&Agrave;Ï°&uacute; Ç&Ocirc;°&Ocirc; &Auml;&Uacute;¸&agrave;Æ® ¼&ouml;¸¦ Ã&acirc;·&Acirc;', 'display_comment_count', 1),
	array('&Agrave;&Igrave;¹&Igrave;&Aacute;&ouml; &Aacute;¤·&Auml;¹æ¹ý', 'default_sort_order', 3),
	array('Ã&Ouml;°&iacute;Æ&ograve;&Aacute;¡¿¡ &sup3;ªÅ¸&sup3;¾ Ã&Ouml;¼&Ograve; Æ&ograve;°¡&Egrave;½¼&ouml;', 'min_votes_for_rating', 0),

	'&Agrave;&Igrave;¹&Igrave;&Aacute;&ouml;º¸±&acirc;¸Þ´º ¹× &Auml;&Uacute;¸&agrave;Æ® ¼&sup3;&Aacute;¤',
	array('&Agrave;&Igrave;¹&Igrave;&Aacute;&ouml;º¸±&acirc; Å×&Agrave;&Igrave;º&iacute;&Agrave;Ç Æø(pixels or %)', 'picture_table_width', 0),
	array('&Agrave;&Igrave;¹&Igrave;&Aacute;&ouml;&Agrave;Ç »&oacute;¼¼&Aacute;¤º¸¸¦ ±&acirc;º»&Agrave;&ucirc;&Agrave;¸·&Icirc; Ã&acirc;·&Acirc;', 'display_pic_info', 1),
	array('»ç¿ë±Ý&Aacute;&ouml;¾&icirc; Ç&Ecirc;Å&Iacute;¸&micro; »ç¿ë', 'filter_bad_words', 1),
	array('&Auml;&Uacute;¸&agrave;Æ®¿¡ ½º¸¶&Agrave;Ï ¾Æ&Agrave;&Igrave;&Auml;&Uuml; »ç¿ë', 'enable_smilies', 1),
	array('&Agrave;&Igrave;¹&Igrave;&Aacute;&ouml; ¼&sup3;¸&iacute; Ã&Ouml;´ë ¹®&Agrave;&Uacute;¼&ouml;', 'max_img_desc_length', 0),
	array('´&Uuml;¾&icirc;¹®&Agrave;&Uacute; ±æ&Agrave;&Igrave;(¶ç¿&ouml;¾&sup2;±&acirc;¾ø&Agrave;&Igrave;)', 'max_com_wlength', 0),
	array('&Auml;&Uacute;¸&agrave;Æ® ¶&oacute;&Agrave;&Icirc; &Aacute;¦ÇÑ', 'max_com_lines', 0),
	array('&Auml;&Uacute;¸&agrave;Æ® Ã&Ecirc;´ë ¹®&Agrave;&Uacute;¼&ouml;', 'max_com_size', 0),

	'&Agrave;&Igrave;¹&Igrave;&Aacute;&ouml; ¹× ½æ&sup3;×&Agrave;Ï ¼&sup3;&Aacute;¤',
	array('JPEG &Auml;÷¸®Æ¼', 'jpeg_qual', 0),
	array('½æ&sup3;×&Agrave;Ï °¡·&Icirc;,¼­·&Icirc; Ã&Ouml;´ë<b>*</b>', 'thumb_width', 0),
	array('&Agrave;&Igrave;¹&Igrave;&Aacute;&ouml; º¸±&acirc;¿¡ »õ·&Icirc;¿&icirc; Æ&Auml;&Agrave;Ï»ý¼º','make_intermediate',1),
	array('»õ·&Icirc; »ý¼º&micro;&Eacute; Æ&Auml;&Agrave;Ï&Agrave;Ç Ã&Ouml;´ëÅ©±&acirc;(Æø)<b>*</b>', 'picture_width', 0),
	array('¾÷·&Icirc;&micro;å &Agrave;&Igrave;¹&Igrave;&Aacute;&ouml; Ã&Ouml;´ë¿ë·® (KB)', 'max_upl_size', 0),
	array('¾÷·&Icirc;&micro;å &Agrave;&Igrave;¹&Igrave;&Aacute;&ouml; °¡·&Icirc;,¼¼·&Icirc; Ã&Ouml;´ëÅ©±&acirc;(pixels)', 'max_upl_width_height', 0),

	'»ç¿ë»ç(&Egrave;¸¿ø)¼&sup3;&Aacute;¤',
	array('&Egrave;¸¿ø°¡&Agrave;&Ocirc; Çã¿ë', 'allow_user_registration', 1),
	array('&Egrave;¸¿ø°¡&Agrave;&Ocirc;½Ã &Agrave;&Igrave;¸Þ&Agrave;Ï &Agrave;¯&Egrave;¿¿©º&Icirc; °Ë&Aacute;õ', 'reg_requires_valid_email', 1),
	array('&Agrave;&Igrave;¸Þ&Agrave;Ï &Aacute;&szlig;º¹Çã¿ë ¿©º&Icirc;', 'allow_duplicate_emails_addr', 1),
	array('»ç¿ë&Agrave;&Uacute; °&sup3;&Agrave;&Icirc;¾&Ugrave;¹&uuml; »ý¼º Çã¿ë', 'allow_private_albums', 1),

	'Custom fields for image description (leave blank if unused)',
	array('Field 1 name', 'user_field1_name', 0),
	array('Field 2 name', 'user_field2_name', 0),
	array('Field 3 name', 'user_field3_name', 0),
	array('Field 4 name', 'user_field4_name', 0),

	'&Agrave;&Igrave;¹&Igrave;&Aacute;&ouml; ¹× ½æ&sup3;×&Agrave;Ï °&iacute;±Þ¼&sup3;&Aacute;¤',
	array('Æ&Auml;&Agrave;Ï &Agrave;&Igrave;¸§¿¡ »ç¿ë±Ý&Aacute;&ouml;Ç&Ograve; ¹®&Agrave;&Uacute;', 'forbiden_fname_char',0),
	array('Çã¿ëÇ&Ograve; &Agrave;&Igrave;¹&Igrave;&Aacute;&ouml; &Egrave;®&Agrave;å&Agrave;&Uacute;', 'allowed_file_extensions',0),
	array('&Agrave;&Igrave;¹&Igrave;&Aacute;&ouml; ¸®»ç&Agrave;&Igrave;&Acirc;¡¿¡ &Agrave;&Igrave;¿ëÇ&Ograve; Method','thumb_method',2),
	array('Path to ImageMagick \'convert\' utility (example /usr/bin/X11/)', 'impath', 0),
	array('Allowed image types (only valid for ImageMagick)', 'allowed_img_types',0),
	array('Command line options for ImageMagick', 'im_options', 0),
	array('Read EXIF data in JPEG files', 'read_exif_data', 1),
	array('¾&Ugrave;¹&uuml; &micro;ð·ºÅ&auml;¸® °æ·&Icirc; <b>*</b>', 'fullpath', 0),
	array('»ç¿ë&Agrave;&Uacute;(&Egrave;¸¿ø) ¾÷·&Icirc;&micro;å &Agrave;&Igrave;¹&Igrave;&Aacute;&ouml; °æ·&Icirc; <b>*</b>', 'userpics', 0),
	array('»õ·&Icirc; »ý¼º&micro;&Eacute; &Agrave;&Igrave;¹&Igrave;&Aacute;&ouml;&Agrave;Ç &Aacute;¢&micro;&Icirc;¾&icirc; <b>*</b>', 'normal_pfx', 0),
	array('½æ&sup3;×&Agrave;Ï&Agrave;Ç &Aacute;¢&micro;&Icirc;¾&icirc; <b>*</b>', 'thumb_pfx', 0),
	array('&micro;ð·ºÅ&auml;¸® ±&acirc;º» Æ&Ucirc;¹&Igrave;¼Ç', 'default_dir_mode', 0),
	array('&Agrave;&Igrave;¹&Igrave;&Aacute;&ouml; ±&acirc;º» Æ&Ucirc;¹&Igrave;¼Ç', 'default_file_mode', 0),

	'&Auml;&iacute;Å° ¹× ¹®¼­ &Agrave;&Icirc;&Auml;&Uacute;&micro;&ugrave; ¼&sup3;&Aacute;¤',
	array('&Auml;&iacute;Å°&Agrave;&Igrave;¸§', 'cookie_name', 0),
	array('&Auml;&iacute;Å°°æ·&Icirc;', 'cookie_path', 0),
	array('&Agrave;&Icirc;&Auml;&Uacute;&micro;&ugrave;', 'charset', 4),

	'±&acirc;Å¸¼&sup3;&Aacute;¤',
	array('Enable debug mode', 'debug_mode', 1),

	'<br /><div align="center"> * Ç¥½Ã&micro;&Egrave; º&Icirc;ºÐ&Agrave;Ç ¿&Eacute;¼Ç&Agrave;º &Agrave;&Igrave;¹&Igrave;&Aacute;&ouml;°¡ &micro;&icirc;·Ï&micro;&Egrave; &Agrave;&Igrave;&Egrave;&Auml;¿¡ º¯°æÇÏ&Aacute;&ouml; ¸¶¼¼¿&auml;.</div><br />'
);

// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
	'empty_name_or_com' => '&Agrave;&Igrave;¸§&Agrave;» &Agrave;&Ocirc;·&Acirc;ÇÏ¼¼¿&auml;.',
	'com_added' => '&Auml;&Uacute;¸&agrave;Æ®°¡ &micro;&icirc;·Ï&micro;Ç¾&uacute;½&Agrave;´Ï´&Ugrave;.',
	'alb_need_title' => '°Ç&Agrave;&uuml;ÇÑ ¾&Ugrave;¹&uuml; Å¸&Agrave;&Igrave;Æ&sup2;&Agrave;» &Aacute;¤ÇÏ¼¼¿&auml; !',
	'no_udp_needed' => '¾÷&micro;¥&Agrave;&Igrave;Æ®Ç&Ograve; Ç&Ecirc;¿&auml;¾ø½¿.',
	'alb_updated' => 'The ¾÷&micro;¥&Agrave;&Igrave;Æ® &micro;Ç¾&uacute;½&Agrave;´Ï´&Ugrave;.',
	'unknown_album' => '¼±ÅÃÇÑ ¾&Ugrave;¹&uuml;&Agrave;&Igrave; ¾ø°Å&sup3;ª, ¾÷·&Icirc;&micro;åÇ&Ograve; ±ÇÇÑ&Agrave;&Igrave; °&uuml;¸®&Agrave;&Uacute;¿¡ &Agrave;ÇÇØ &Aacute;¦ÇÑ&micro;Ç¾&icirc;&Agrave;&Ouml;½&Agrave;´Ï´&Ugrave;.',
	'no_pic_uploaded' => '¾÷·&Icirc;&micro;å &Agrave;&Igrave;¹&Igrave;&Aacute;&ouml; ¾ø½&Agrave;´Ï´&Ugrave; !<br /><br />¼­¹&ouml;¿¡¼­ Çã¿ë&micro;Ç´&Acirc; &Agrave;&Igrave;¹&Igrave;&Aacute;&ouml; Æ&Auml;&Agrave;Ï&Agrave;» ¾÷·&Icirc;&micro;åÇÏ¼¼¿&auml;.',
	'err_mkdir' => '%s &micro;ð·ºÅ&auml;¸® »ý¼º½ÇÆÐ !',
	'dest_dir_ro' => '%s &micro;ð·ºÅ&auml;¸®´&Acirc; ¾&sup2;±&acirc;±Ý&Aacute;&ouml;&micro;Ç¾&icirc;&Agrave;&Ouml;½&Agrave;´Ï´&Ugrave; !',
	'err_move' => '%s°&uacute; %s¸¦ ¿¬°&aacute;ÇÏ&Aacute;&ouml;¸øÇ&szlig;½&Agrave;´Ï´&Ugrave;  !',
	'err_fsize_too_large' => '»ç&Agrave;&Igrave;&Aacute;&icirc;Ã&Ecirc;°&uacute;(maximum %s x %s) !',
	'err_imgsize_too_large' => '¿ë·®Ã&Ecirc;°&uacute; (maximum %s KB) !',
	'err_invalid_img' => '&Aacute;¤´çÇÑ &Agrave;&Igrave;¹&Igrave;&Aacute;&ouml;¸¸ ¾÷·&Icirc;&micro;åÇÏ½&Ecirc;½Ã¿&Agrave; !',
	'allowed_img_types' => '%s &Agrave;&Igrave;¹&Igrave;&Aacute;&ouml;¸¸ ¾÷·&Icirc;&micro;åÇ&Ograve; ¼&ouml; &Agrave;&Ouml;½&Agrave;´Ï´&Ugrave;.',
	'err_insert_pic' => '\'%s\' &Agrave;&Igrave;¹&Igrave;&Aacute;&ouml;´&Acirc; ¾&Ugrave;¹&uuml;¿¡ &micro;&icirc;·ÏÇ&Ograve; ¼&ouml; ¾ø½&Agrave;´Ï´&Ugrave;. ',
	'upload_success' => '&Agrave;&Igrave;¹&Igrave;&Aacute;&ouml;°¡ ¼º°ø&Agrave;&ucirc;&Agrave;¸·&Icirc; ¾÷·&Icirc;&micro;å &micro;Ç¾&uacute;½&Agrave;´Ï´&Ugrave;.<br /><br />°&uuml;¸®&Agrave;&Uacute;&Agrave;Ç ½&Acirc;&Agrave;&Icirc;&Egrave;&Auml; °&Ocirc;½Ã&micro;Ë´Ï´&Ugrave;.',
	'info' => '¾&Egrave;&sup3;»',
	'com_added' => '&Auml;&Uacute;¸&agrave;Æ® &micro;&icirc;·Ï',
	'alb_updated' => '¾&Ugrave;¹&uuml; ¾÷&micro;¥&Agrave;&Igrave;Æ®',
	'err_comment_empty' => '&Auml;&Uacute;¸&agrave;Æ® ºñ¾&icirc;&Agrave;&Ouml;&Agrave;½ !',
	'err_invalid_fext' => 'Only files with the following extensions are accepted : <br /><br />%s.',
	'no_flood' => '&Auml;&Uacute;¸&agrave;Æ®¸¦ ¼&ouml;&Aacute;¤ÇÏ°Å&sup3;ª &micro;&icirc;·ÏÇ&Ograve; ¼&ouml; ¾ø½&Agrave;´Ï´&Ugrave;.',
	'redirect_msg' => '\'´&Ugrave;&Agrave;½\' ¹&ouml;Æ°&Agrave;» ´©¸£±&acirc; &Agrave;&uuml;¿¡ º&ecirc;¶&oacute;¿&igrave;&Agrave;&uacute;&Agrave;Ç »õ·&Icirc;°&iacute;&Auml;§ ¹&ouml;Æ°&Agrave;» »ç¿ëÇÏ&Aacute;&ouml; ¸¶¼¼¿&auml;.',
	'upl_success' => '&Agrave;&Igrave;¹&Igrave;&Aacute;&ouml;°¡ ¼º°ø&Agrave;&ucirc;&Agrave;¸·&Icirc; ¾÷·&Icirc;&micro;å&micro;Ç¾&uacute;½&Agrave;´Ï´&Ugrave;.',
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
	'caption' => '&Auml;¸¼Ç',
	'fs_pic' => '¿øº» &Agrave;&Igrave;¹&Igrave;&Aacute;&ouml;',
	'del_success' => '»&egrave;&Aacute;¦&micro;Ç¾&uacute;½&Agrave;´Ï´&Ugrave;!',
	'ns_pic' => '&Agrave;&uuml;½Ã¸¦ &Agrave;§ÇÑ »õ&Agrave;&Igrave;¹&Igrave;&Aacute;&ouml;',
	'err_del' => '»&egrave;&Aacute;¦&micro;Ç&Aacute;&ouml; ¾&Ecirc;¾&Ograve;½&Agrave;´Ï´&Ugrave;!!',
	'thumb_pic' => '½æ&sup3;×&Agrave;Ï',
	'comment' => '&Auml;&Uacute;¸&agrave;Æ®',
	'im_in_alb' => '¾&Ugrave;¹&uuml; &Agrave;&Igrave;¹&Igrave;&Aacute;&ouml;',
	'alb_del_success' => '\'%s\' ¾&Ugrave;¹&uuml;»&egrave;&Aacute;¦',
	'alb_mgr' => '¾&Ugrave;¹&uuml;°&uuml;¸®',
	'err_invalid_data' => '\'%s\' &micro;¥&Agrave;&Igrave;Å¸ ¾ø½&Agrave;´Ï´&Ugrave;!',
	'create_alb' => '\'%s\' ¾&Ugrave;¹&uuml;»ý¼º',
	'update_alb' => '\'%s\' ¾&Ugrave;¹&uuml; ¾÷&micro;¥&Agrave;&Igrave;Æ® \'%s\' &Agrave;&Igrave;¹&Igrave;&Aacute;&ouml; \'%s\' &Agrave;&Icirc;&micro;¦½º',
	'del_pic' => '&Agrave;&Igrave;¹&Igrave;&Aacute;&ouml;»&egrave;&Aacute;¦',
	'del_alb' => '¾&Ugrave;¹&uuml;»&egrave;&Aacute;¦',
	'del_user' => '»ç¿ë&Agrave;&Uacute;»&egrave;&Aacute;¦',
	'err_unknown_user' => '¼±ÅÃÇÑ »ç¿ë&Agrave;&Uacute;´&Acirc; ¾ø½&Agrave;´Ï´&Ugrave; !',
	'comment_deleted' => '&Auml;&Uacute;¸&agrave;Æ®°¡ ¼º°ø&Agrave;&ucirc;&Agrave;¸·&Icirc; »&egrave;&Aacute;¦&micro;Ç¾&uacute;½&Agrave;´Ï´&Ugrave;.',
);

// ------------------------------------------------------------------------- //
// File displayecard.php
// ------------------------------------------------------------------------- //

// Void

// ------------------------------------------------------------------------- //
// File displayimage.php
// ------------------------------------------------------------------------- //

if (defined('DISPLAYIMAGE_PHP')){

$lang_display_image_php = array(
	'confirm_del' => '&Agrave;&Igrave;¹&Igrave;&Aacute;&ouml;¸¦ »&egrave;&Aacute;¦ÇÏ½Ã°&Ugrave;½&Agrave;´Ï±&icirc; ? \\n&Auml;&Uacute;¸&agrave;Æ®&micro;&micro; Ç&Ocirc;&sup2;&sup2; »&egrave;&Aacute;¦&micro;Ë´Ï´&Ugrave;.',
	'del_pic' => '&Agrave;&Igrave;¹&Igrave;&Aacute;&ouml;»&egrave;&Aacute;¦ (°&uuml;¸®&Agrave;&Uacute;¸Þ´º)',
	'size' => '%s x %s pixels',
	'views' => '%s times',
	'slideshow' => '½½¶&oacute;&Agrave;&Igrave;&micro;å¼&icirc;',
	'stop_slideshow' => '½½¶&oacute;&Agrave;&Igrave;&micro;å¼&icirc;-&Aacute;¤&Aacute;&ouml;',
	'view_fs' => '¿øº» &Agrave;&Igrave;¹&Igrave;&Aacute;&ouml; º¸±&acirc;',
);

$lang_picinfo = array(
	'title' =>'Information',
	'Filename' => 'Filename',
	'Album name' => 'Album name',
	'Rating' => 'Rating (%s votes)',
	'Keywords' => 'Keywords',
	'File Size' => 'File Size',
	'Dimensions' => 'Dimensions',
	'Displayed' => 'Displayed',
	'Camera' => 'Camera',
	'Date taken' => 'Date taken',
	'Aperture' => 'Aperture',
	'Exposure time' => 'Exposure time',
	'Focal length' => 'Focal length',
	'Comment' => 'Comment'
);

$lang_display_comments = array(
	'OK' => '&micro;&icirc;·Ï',
	'edit_title' => '&Auml;&Uacute;¸&agrave;Æ® ¼&ouml;&Aacute;¤',
	'confirm_delete' => '&Auml;&Uacute;¸&agrave;Æ®¸¦ »&egrave;&Aacute;¦ÇÏ½Ã°&Uacute;½&Agrave;´Ï±&icirc; ?',
	'add_your_comment' => '&Auml;&Uacute;¸&agrave;Æ® &micro;&icirc;·Ï',
	'your_name' => '&Agrave;&Igrave;¸§',
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
	'title' => 'e-card º¸&sup3;»±&acirc;',
	'invalid_email' => '<b>Warning</b> : &Agrave;¯&Egrave;¿ÇÏ&Aacute;&ouml; ¾&Ecirc;&Agrave;º &Agrave;&Igrave;¸Þ&Agrave;Ï&Agrave;&Ocirc;´Ï´&Ugrave; !',
	'ecard_title' => '%s´&Ocirc;&sup2;&sup2;¼­ º¸&sup3;»½Å e-card &Agrave;&Ocirc;´Ï´&Ugrave;!',
	'view_ecard' => '&Auml;«&micro;å°¡ º¸&Agrave;&Igrave;&Aacute;&ouml;¾&Ecirc;´&Acirc; »ç¿ë&Agrave;&Uacute;&sup2;&sup2;¼­´&Acirc; &Agrave;&Igrave;¸&micro;Å©¸¦ Å¬¸¯ÇÏ¼¼¿&auml; !',
	'view_more_pics' => '´õ ¸¹&Agrave;º &Agrave;&Igrave;¹&Igrave;&Aacute;&ouml;¸¦ °¨»&oacute;ÇÏ½Ã·&Aacute;¸&eacute; Å¬¸¯ÇÏ¼¼¿&auml; !',
	'send_success' => 'e-card¸¦ º¸&sup3;&Acirc;½&Agrave;´Ï´&Ugrave;!',
	'send_failed' => '&Aacute;Ë¼&Ucirc;ÇÕ´Ï´&Ugrave;, e-card ¹&szlig;¼&Ucirc;¿¡ ½ÇÆÐÇÏ¿´½&Agrave;´Ï´&Ugrave;.',
	'from' => 'e-card &Agrave;&Ucirc;¼ºÆ&ucirc;',
	'your_name' => 'º¸&sup3;»´&Acirc; »ç¶÷ &Agrave;&Igrave;¸§',
	'your_email' => 'º¸&sup3;»´&Acirc; »ç¶÷ &Agrave;&Igrave;¸Þ&Agrave;Ï',
	'to' => 'To',
	'rcpt_name' => '¹Þ´&Acirc; »ç¶÷ &Agrave;&Igrave;¸§',
	'rcpt_email' => '¹Þ´&Acirc; »ç¶÷ &Agrave;&Igrave;¸Þ&Agrave;Ï',
	'greetings' => '&Aacute;¦¸ñ',
	'message' => '¸Þ¼¼&Aacute;&ouml;',
);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
	'pic_info' => '&Agrave;&Igrave;¹&Igrave;&Aacute;&ouml; »&oacute;¼¼&Aacute;¤º¸',
	'album' => '¾&Ugrave;¹&uuml;',
	'title' => '&Agrave;&Igrave;¹&Igrave;&Aacute;&ouml; &Aacute;¦¸ñ',
	'desc' => '&Agrave;&Igrave;¹&Igrave;&Aacute;&ouml; ¼&sup3;¸&iacute;',
	'keywords' => '°Ë»&ouml; Å°¿&ouml;&micro;å',
	'pic_info_str' => '%sx%s - %sKB - %s views - %s votes',
	'approve' => '&Agrave;&Igrave;¹&Igrave;&Aacute;&ouml; ½&Acirc;&Agrave;&Icirc;',
	'postpone_app' => '½&Acirc;&Agrave;&Icirc; º¸·&ugrave;',
	'del_pic' => '&Agrave;&Igrave;¹&Igrave;&Aacute;&ouml; »&egrave;&Aacute;¦',
	'reset_view_count' => '&Aacute;¶&Egrave;¸¼&ouml; Ã&Ecirc;±&acirc;&Egrave;­',
	'reset_votes' => 'Æ&ograve;°¡ Ã&Ecirc;±&acirc;&Egrave;­',
	'del_comm' => '&Auml;&Uacute;¸&agrave;Æ® »&egrave;&Aacute;¦',
	'upl_approval' => '¾÷·&Icirc;&micro;å ½&Acirc;&Agrave;&Icirc;',
	'edit_pics' => '&Agrave;&Igrave;¹&Igrave;&Aacute;&ouml; Æ&iacute;&Aacute;ý',
	'see_next' => '´&Ugrave;&Agrave;½',
	'see_prev' => '&Agrave;&Igrave;&Agrave;&uuml;',
	'n_pic' => '´ë±&acirc;&Aacute;&szlig;&Agrave;&Icirc; &Agrave;&Igrave;¹&Igrave;&Aacute;&ouml; (%s)',
	'n_of_pic_to_disp' => 'Æ&auml;&Agrave;&Igrave;&Aacute;&ouml;´ç Ã&acirc;·&Acirc;Ç&Ograve; &Agrave;&Igrave;¹&Igrave;&Aacute;&ouml;',
	'apply' => 'º¯°æ»çÇ× &Agrave;&uacute;&Agrave;å'
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
	'group_name' => '±×·&igrave;&Agrave;&Igrave;¸§',
	'disk_quota' => '&micro;ð½ºÅ© Ç&Ograve;´ç',
	'can_rate' => 'Æ&ograve;°¡°¡´&Eacute;',
	'can_send_ecards' => 'e-card ¹&szlig;¼&Ucirc;°¡´&Eacute;',
	'can_post_com' => '&Auml;&Uacute;¸&agrave;Æ® &micro;&icirc;·Ï°¡´&Eacute;',
	'can_upload' => '&Agrave;&Igrave;¹&Igrave;&Aacute;&ouml; ¾÷·&Icirc;&micro;å°¡´&Eacute;',
	'can_have_gallery' => '°&sup3;&Agrave;&Icirc;¾&Ugrave;¹&uuml; »ý¼º°¡´&Eacute;',
	'apply' => 'º¯°æ»çÇ× &Agrave;&uacute;&Agrave;å',
	'create_new_group' => '»õ ±×·&igrave;»ý¼º',
	'del_groups' => '¼±ÅÃÇÑ ±×·&igrave;»&egrave;&Aacute;¦',
	'confirm_del' => 'Warning, when you delete a group, users that belong to this group will be transfered to the \'Registered\' group !\n\nDo you want to proceed ?',
	'title' => '»ç¿ë&Agrave;&Uacute; ±×·&igrave;°&uuml;¸®',
	'approval_1' => 'Pub. Upl. approval (1)',
	'approval_2' => 'Priv. Upl. approval (2)',
	'note1' => '<b>(1)</b> public album ¿¡ ¾÷·&Icirc;&micro;åÇ&Ograve; &Agrave;&Igrave;¹&Igrave;&Aacute;&ouml;´&Acirc; °&uuml;¸®&Agrave;&Uacute;&Agrave;Ç ½&Acirc;&Agrave;&Icirc;&Agrave;ý&Acirc;÷¸¦ °ÅÃ&Auml; °&Ocirc;½Ã&micro;Ë´Ï´&Ugrave;.',
	'note2' => '<b>(2)</b> »ç¿ë&Agrave;&Uacute;(&Egrave;¸¿ø)°¡ ¾÷·&Icirc;&micro;åÇÑ &Agrave;&Igrave;¹&Igrave;&Aacute;&ouml;´&Acirc; &Agrave;&uacute;&Agrave;&Ucirc;±Ç¹ý¿¡ &Agrave;§¹&egrave;&micro;Ç&Aacute;&ouml; ¾&Ecirc;¾Æ¾&szlig; °&Ocirc;½Ã&micro;Ë´Ï´&Ugrave;. ',
	'notes' => 'Notes'
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
	'welcome' => '&Egrave;¯¿&micro;ÇÕ´Ï´&Ugrave; !'
);

$lang_album_admin_menu = array(
	'confirm_delete' => '¾&Ugrave;¹&uuml;&Agrave;» »&egrave;&Aacute;¦ÇÏ½Ã°&Uacute;½&Agrave;´Ï±&icirc; ? \\n¸ð&micro;ç &Agrave;&Igrave;¹&Igrave;&Aacute;&ouml;¿&Iacute; &Auml;&Uacute;¸&agrave;Æ®&micro;&micro; Ç&Ocirc;&sup2;&sup2; »&egrave;&Aacute;¦&micro;Ë´Ï´&Ugrave;.',
	'delete' => '»&egrave;&Aacute;¦',
	'modify' => '¾&Ugrave;¹&uuml;¼&sup3;&Aacute;¤',
	'edit_pics' => '&Agrave;&Igrave;¹&Igrave;&Aacute;&ouml;º° &Aacute;¤º¸¼&ouml;&Aacute;¤ ',
);

$lang_list_categories = array(
	'home' => '°¶·¯¸® ¸Þ&Agrave;&Icirc;',
	'stat1' => '<b>&Auml;«Å×°&iacute;¸®:[cat] ¾&Ugrave;¹&uuml;:[albums] &Agrave;&Igrave;¹&Igrave;&Aacute;&ouml;:[pictures] &Auml;&Uacute;¸&agrave;Æ®:[comments] &Aacute;¶&Egrave;¸:[views]</b>',
	'stat2' => '<b>¾&Ugrave;¹&uuml;:[albums] &Agrave;&Igrave;¹&Igrave;&Aacute;&ouml;:[pictures] &Aacute;¶&Egrave;¸:[views]</b>',
	'xx_s_gallery' => '%s\'°¶·¯¸®',
	'stat3' => '<b>&Auml;«Å×°&iacute;¸®:[cat] ¾&Ugrave;¹&uuml;:[albums] &Agrave;&Igrave;¹&Igrave;&Aacute;&ouml;:[pictures] &Auml;&Uacute;¸&agrave;Æ®:[comments] &Aacute;¶&Egrave;¸:[views]</b>'
);

$lang_list_users = array(
	'user_list' => '»ç¿ë&Agrave;&Uacute;(&Egrave;¸¿ø)¸ñ·Ï',
	'no_user_gal' => '»ç¿ë&Agrave;&Uacute;(&Egrave;¸¿ø) °¶·¯¸®°¡ ¾ø½&Agrave;´Ï´&Ugrave;.',
	'n_albums' => '%s ¾&Ugrave;¹&uuml;',
	'n_pics' => '%s &Agrave;&Igrave;¹&Igrave;&Aacute;&ouml;'
);

$lang_list_albums = array(
	'n_pictures' => '%s images',
	'last_added' => ', last one added on %s'
);

}

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
	'login' => '·&Icirc;±×&Agrave;&Icirc;',
	'enter_login_pswd' => '¾Æ&Agrave;&Igrave;&micro;ð¿&Iacute; ºñ¹Ð¹ø&Egrave;£¸¦ &Agrave;&Ocirc;·&Acirc;ÇÏ¼¼¿&auml;!',
	'username' => '¾Æ&Agrave;&Igrave;&micro;ð',
	'password' => 'ºñ¹Ð¹ø&Egrave;£',
	'remember_me' => '±&acirc;¾ïÇÏ±&acirc;',
	'welcome' => '%s´&Ocirc; ·&Icirc;±×&Agrave;&Icirc;&micro;Ç¾&uacute;½&Agrave;´Ï´&Ugrave; !!',
	'err_login' => '*** ·&Icirc;±×&Agrave;&Icirc;&micro;Ç&Aacute;&ouml; ¾&Ecirc;¾&Ograve;½&Agrave;´Ï´&Ugrave;. ***',
	'err_already_logged_in' => '&Agrave;&Igrave;¹&Igrave; ·&Icirc;±×&Agrave;&Icirc;&micro;Ç¾&uacute;½&Agrave;´Ï´&Ugrave; !',
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
	'logout' => '·&Icirc;±×¾Æ¿&ocirc;',
	'bye' => '%s´&Ocirc; ·&Icirc;±×¾Æ¿&ocirc;&micro;Ç¾&uacute;½&Agrave;´Ï´&Ugrave; !!',
	'err_not_loged_in' => '·&Icirc;±×&Agrave;&Icirc;&micro;Ç&Aacute;&ouml; ¾&Ecirc;¾&Ograve;½&Agrave;´Ï´&Ugrave; !',
);

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
	'upd_alb_n' => '%s´&Ocirc; ¾&Ugrave;¹&uuml; ¾÷&micro;¥&Agrave;&Igrave;Æ®',
	'general_settings' => '±&acirc;º»¼&sup3;&Aacute;¤',
	'alb_title' => '¾&Ugrave;¹&uuml; &Aacute;¦¸ñ',
	'alb_cat' => '¾&Ugrave;¹&uuml; &Auml;«Å×°&iacute;¸®',
	'alb_desc' => '¾&Ugrave;¹&uuml; ¼&sup3;¸&iacute;',
	'alb_thumb' => '¾&Ugrave;¹&uuml; ½æ&sup3;×&Agrave;Ï',
	'alb_perm' => '¾&Ugrave;¹&uuml; ±ÇÇÑ¼&sup3;&Aacute;¤',
	'can_view' => '¾&Ugrave;¹&uuml; °ø°&sup3;¼&sup3;&Aacute;¤',
	'can_upload' => '¹æ¹®&Agrave;&Uacute;°¡ &Agrave;&Igrave;¹&Igrave;&Aacute;&ouml;¸¦ ¾÷·&Icirc;&micro;åÇ&Ograve;¼&ouml; &Agrave;&Ouml;&Agrave;½',
	'can_post_comments' => '¹æ¹®&Agrave;&Uacute;°¡ &Auml;&Uacute;¸&agrave;Æ®¸¦ ¾&micro;¼&ouml; &Agrave;&Ouml;&Agrave;½',
	'can_rate' => '¹æ¹®&Agrave;&Uacute;°¡ Æ&ograve;°¡Ç&Ograve; ¼&ouml; &Agrave;&Ouml;&Agrave;½',
	'user_gal' => '»ç¿ë&Agrave;&Uacute;(&Egrave;¸¿ø) °¶·¯¸®',
	'no_cat' => '*Ã&Ouml;»&oacute;&Agrave;§ &Auml;«Å×°&iacute;¸®(¸Þ&Agrave;&Icirc;)',
	'alb_empty' => '¾&Ugrave;¹&uuml;&Agrave;&Igrave; ºñ¾&icirc;&Agrave;&Ouml;½&Agrave;´Ï´&Ugrave;.',
	'last_uploaded' => '¸¶&Aacute;&ouml;¸· ¾÷·&Icirc;&micro;å',
	'public_alb' => '¸ð&micro;&Icirc;°ø°&sup3;(public album)',
	'me_only' => '&sup3;ª¸¸º¸±&acirc;',
	'owner_only' => '(%s)¸¸ º¸±&acirc;',
	'groupp_only' => '\'%s\' ±×·&igrave;',
	'err_no_alb_to_modify' => '¼&ouml;&Aacute;¤Ç&Ograve; ¼&ouml; ¾ø½&Agrave;´Ï´&Ugrave;.',
	'update' => '¾&Ugrave;¹&uuml; ¾÷&micro;¥&Agrave;&Igrave;Æ®'
);

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
	'already_rated' => '&Aacute;Ë¼&Ucirc;ÇÕ´Ï´&Ugrave;. &Agrave;&Igrave;¹&Igrave; Æ&ograve;°¡ÇÏ¼&Igrave;½&Agrave;´Ï´&Ugrave;.',
	'rate_ok' => 'Æ&ograve;°¡ÇØ &Aacute;&Ouml;¼Å¼­ °¨»çÇÕ´Ï´&Ugrave; !',
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
{SITE_NAME}¿¡ ¿&Agrave;½Å °&Iacute;&Agrave;» &Egrave;¯¿&micro;ÇÕ´Ï´&Ugrave;.<br />
&Egrave;¸¿ø´&Ocirc;&Agrave;Ç °&sup3;&Agrave;&Icirc;¾&Ugrave;¹&uuml;&Agrave;» »ý¼º °&uuml;¸®Ç&Ograve;¼&ouml; &Agrave;&Ouml;´&Acirc; ½Ã½ºÅ&Ucirc;&Agrave;» &Aacute;Øºñ&Aacute;&szlig;¿¡ &Agrave;&Ouml;½&Agrave;´Ï´&Ugrave;.<br />
Ç&ouml;&Agrave;ç´&Acirc; Å×½ºÆ®&Aacute;&szlig;&Agrave;&Igrave;¹Ç·&Icirc;, &Egrave;¸¿ø°¡&Agrave;&Ocirc;&Agrave;&Igrave;&sup3;ª ±&acirc;Å¸ °¶·¯¸® Ç&Aacute;·&Icirc;±×·¥¿¡¼­&Agrave;Ç Æ&Auml;&Agrave;Ï &Agrave;¯½Ç&micro;&icirc;&Agrave;º Ã¥&Agrave;&Oacute;&Aacute;&ouml;&Aacute;&ouml; ¾&Ecirc;½&Agrave;´Ï´&Ugrave;.<br />
&Agrave;Ï´&Uuml; &Egrave;¸¿ø&micro;&icirc;·ÏÇÑ ºÐ&sup2;&sup2;´&Acirc; &Aacute;¤½&Auml; ¿&Agrave;Ç&Acirc;½Ã &Agrave;&Igrave;¸Þ&Agrave;Ï&Agrave;» ÅëÇØ ¾Ë·&Aacute;&micro;å¸± °&Iacute;&Agrave;&Igrave;¸ç, ½ÃÇ&egrave; ±&acirc;°£&micro;¿¾&Egrave; °¡&Agrave;&Ocirc;ÇÑ &Egrave;¸¿ø&Agrave;» ´ë»&oacute;&Agrave;¸·&Icirc; Æ¯º°ÇÑ &Agrave;&Igrave;º¥Æ®¸¦ &Aacute;ØºñÇÏ°&iacute; &Agrave;&Ouml;½&Agrave;´Ï´&Ugrave;.<br />&Egrave;¸¿ø°¡&Agrave;&Ocirc;½Ã &Agrave;&Igrave;¸Þ&Agrave;Ï&Agrave;Ç &Agrave;¯&Egrave;¿¼º Ã¼Å©¸¦ ÅëÇØ &Agrave;¯&Egrave;¿ÇÏ&Aacute;&ouml; ¾&Ecirc;&Agrave;º &Agrave;&Igrave;¸Þ&Agrave;Ï&Agrave;º &micro;&icirc;·Ï&micro;Ç&Aacute;&ouml; ¾&Ecirc;´&Acirc;&Aacute;¡ &Acirc;&uuml;°&iacute;ÇÏ¼¼¿&auml;.<br /><br />
´&Ugrave;½ÃÇÑ¹ø {SITE_NAME}¸¦ ¹æ¹®ÇØ &Aacute;&Ouml;¼Å¼­ °¨»çÇÕ´Ï´&Ugrave;.
EOT;

$lang_register_php = array(
	'page_title' => '&Egrave;¸¿ø&micro;&icirc;·Ï',
	'term_cond' => '&micro;&icirc;·Ï¾&agrave;°&uuml; ¹× &Agrave;&Igrave;¿ë¾&Egrave;&sup3;»',
	'i_agree' => '&micro;¿&Agrave;ÇÇÕ´Ï´&Ugrave;!',
	'submit' => '&Egrave;¸¿ø&micro;&icirc;·Ï',
	'err_user_exists' => '&Agrave;&Igrave;¹&Igrave; »ç¿ë&Aacute;&szlig;&Agrave;&Icirc; ¾Æ&Agrave;&Igrave;&micro;ð&Agrave;&Ocirc;´Ï´&Ugrave;. ´&Ugrave;¸¥ ¾Æ&Agrave;&Igrave;&micro;ð·&Icirc; &micro;&icirc;·ÏÇÏ¼¼¿&auml;.',
	'err_password_mismatch' => '&micro;&Icirc; ºñ¹Ð¹ø&Egrave;£°¡ &Agrave;Ï&Auml;¡ÇÏ&Aacute;&ouml; ¾&Ecirc;½&Agrave;´Ï´&Ugrave;.',
	'err_uname_short' => '¾Æ&Agrave;&Igrave;&micro;ð´&Acirc; Ã&Ouml;¼&Ograve;4~10&Agrave;&Uacute; &Agrave;&Igrave;&sup3;»·&Icirc; &Agrave;&Ucirc;¼ºÇØ¾&szlig; ÇÕ´Ï´&Ugrave;.',
	'err_password_short' => 'ºñ¹Ð¹ø&Egrave;£´&Acirc; Ã&Ouml;¼&Ograve;4~12&Agrave;&Uacute; &Agrave;&Igrave;&sup3;»·&Icirc; &Agrave;&Ucirc;¼ºÇØ¾&szlig; ÇÕ´Ï´&Ugrave;.',
	'err_uname_pass_diff' => '¾Æ&Agrave;&Igrave;&micro;ð¿&Iacute; ºñ¹Ð¹ø&Egrave;£°¡ &Agrave;Ï&Auml;¡ÇÏ&Aacute;&ouml; ¾&Ecirc;½&Agrave;´Ï´&Ugrave;.',
	'err_invalid_email' => '&Agrave;&Igrave;¸Þ&Agrave;Ï&Agrave;» &Agrave;&Ocirc;·&Acirc;ÇÏ¼¼¿&auml;.',
	'err_duplicate_email' => '&Agrave;&Igrave;¹&Igrave; &micro;&icirc;·Ï&micro;&Egrave; &Agrave;&Igrave;¸Þ&Agrave;Ï &Aacute;&Ouml;¼&Ograve;&Agrave;&Ocirc;´Ï´&Ugrave;.',
	'enter_info' => '&Egrave;¸¿ø&micro;&icirc;·Ï Æ&ucirc;',
	'required_info' => 'Ç&Ecirc;¼&ouml;&Agrave;&Ocirc;·&Acirc; Ç×¸ñ',
	'optional_info' => 'Ã&szlig;°¡&Aacute;¤º¸',
	'username' => '¾Æ&Agrave;&Igrave;&micro;ð',
	'password' => 'ºñ¹Ð¹ø&Egrave;£',
	'password_again' => 'ºñ¹Ð¹ø&Egrave;£ &Agrave;ç&Agrave;&Ocirc;·&Acirc;',
	'email' => '&Agrave;&Igrave;¸Þ&Agrave;Ï',
	'location' => '&Aacute;&ouml;¿ª',
	'interests' => '°&uuml;½&Eacute;ºÐ¾&szlig;',
	'website' => '&Egrave;¨Æ&auml;&Agrave;&Igrave;&Aacute;&ouml;',
	'occupation' => 'ÇÏ½Ã´&Acirc; &Agrave;Ï',
	'error' => '¿¡·¯..',
	'confirm_email_subject' => '%s &Egrave;¸¿ø&micro;&icirc;·Ï',
	'information' => '¾&Egrave;&sup3;»',
	'failed_sending_email' => '&micro;&icirc;·Ï&Aacute;¤º¸ &Agrave;&Igrave;¸Þ&Agrave;Ï ¹&szlig;¼&Ucirc;½ÇÆÐ !',
	'thank_you' => '&micro;&icirc;·ÏÇØ&Aacute;&Ouml;¼Å¼­ °¨»çÇÕ´Ï´&Ugrave;.<br />&Agrave;&Ocirc;·&Acirc;ÇÑ &Agrave;&Igrave;¸Þ&Agrave;Ï &Aacute;&Ouml;¼&Ograve;·&Icirc; &Egrave;°¼º&Egrave;­ &Auml;&Uacute;&micro;å°¡ ´ã±&auml; &Agrave;&Igrave;¸Þ&Agrave;Ï&Agrave;» º¸&sup3;&Acirc;½&Agrave;´Ï´&Ugrave;.<br />&micro;&icirc;·Ï&Agrave;ý&Acirc;÷¸¦ ¿Ï·&aacute;ÇÏ·&Aacute;¸&eacute; &Agrave;&Igrave;¸Þ&Agrave;Ï&Agrave;Ç &Egrave;°¼º&Egrave;­ &Auml;&Uacute;&micro;å¸¦ Å¬¸¯ÇØ&Aacute;&Ouml;½&Ecirc;½Ã¿&Agrave;.',
	'acct_created' => '&Egrave;¸¿ø´&Ocirc;&Agrave;Ç &micro;&icirc;·Ï&Agrave;ý&Acirc;÷°¡ &Aacute;¤»&oacute;&Agrave;&ucirc;&Agrave;¸·&Icirc; ¿Ï·&aacute;&micro;Ç¾&uacute;½&Agrave;´Ï´&Ugrave;. ·&Icirc;±×&Agrave;&Icirc;&Egrave;&Auml; °&sup3;&Agrave;&Icirc;&Aacute;¤º¸¸¦ ¼&ouml;&Aacute;¤ÇØ&Aacute;&Ouml;½&Ecirc;½Ã¿&Agrave;.',
	'acct_active' => '&Egrave;¸¿ø´&Ocirc;&Agrave;Ç °&egrave;&Aacute;¤&Agrave;&Igrave; &Aacute;¤»&oacute;&Agrave;&ucirc;&Agrave;¸·&Icirc; &Egrave;°¼º&Egrave;­&micro;Ç¾&uacute;½&Agrave;´Ï´&Ugrave;. ·&Icirc;±×&Agrave;&Icirc;&Egrave;&Auml; &Agrave;&Igrave;¿ëÇØ&Aacute;&Ouml;½&Ecirc;½Ã¿&Agrave;.',
	'acct_already_act' => '&Egrave;¸¿ø´&Ocirc;&Agrave;Ç °&egrave;&Aacute;¤&Agrave;&Igrave; &Agrave;&Igrave;¹&Igrave; &Egrave;°¼º&Egrave;­&micro;Ç¾&uacute;½&Agrave;´Ï´&Ugrave; !',
	'acct_act_failed' => '&Agrave;&Igrave; °&egrave;&Aacute;¤&Agrave;º &Egrave;°¼º&Egrave;­&micro;Ç&Aacute;&ouml; ¾&Ecirc;¾&Ograve;½&Agrave;´Ï´&Ugrave; !',
	'err_unk_user' => '¼±ÅÃÇÑ »ç¿ë&Agrave;&Uacute;´&Acirc; &Aacute;¸&Agrave;çÇÏ&Aacute;&ouml; ¾&Ecirc;½&Agrave;´Ï´&Ugrave; !',
	'x_s_profile' => '%s\'´&Ocirc;&Agrave;Ç °&sup3;&Agrave;&Icirc;&Aacute;¤º¸',
	'group' => '±×·&igrave;',
	'reg_date' => '&Egrave;¸¿ø°¡&Agrave;&Ocirc;',
	'disk_usage' => '&micro;ð½ºÅ© »ç¿ë·®',
	'change_pass' => 'ºñ¹Ð¹ø&Egrave;£ º¯°æ',
	'current_pass' => 'Ç&ouml;&Agrave;ç ºñ¹Ð¹ø&Egrave;£',
	'new_pass' => '»õ·&Icirc;¿&icirc; ºñ¹Ð¹ø&Egrave;£',
	'new_pass_again' => 'ºñ¹Ð¹ø&Egrave;£ &Agrave;ç&Agrave;&Ocirc;·&Acirc;',
	'err_curr_pass' => 'Ç&ouml;&Agrave;ç ºñ¹Ð¹ø&Egrave;£°¡ Æ&sup2;¸&sup3;´Ï´&Ugrave;.',
	'apply_modif' => 'º¯°æ»çÇ× &Agrave;&uacute;&Agrave;å',
	'change_pass' => 'ºñ¹Ð¹ø&Egrave;£ º¯°æ',
	'update_success' => '°&sup3;&Agrave;&Icirc;&Aacute;¤º¸°¡ ¾÷&micro;¥&Agrave;&Igrave;Æ® &micro;Ç¾&uacute;½&Agrave;´Ï´&Ugrave;.',
	'pass_chg_success' => 'ºñ¹Ð¹ø&Egrave;£°¡ º¯°æ &micro;Ç¾&uacute;½&Agrave;´Ï´&Ugrave;.',
	'pass_chg_error' => 'ºñ¹Ð¹ø&Egrave;£°¡ º¯°æ&micro;Ç&Aacute;&ouml; ¾&Ecirc;¾&Ograve;½&Agrave;´Ï´&Ugrave;.',
);

$lang_register_confirm_email = <<<EOT
¹Ý°©½&Agrave;´Ï´&Ugrave; !! 

&Agrave;&Igrave; ¸Þ&Agrave;Ï&Agrave;º '{SITE_NAME}' &Egrave;¸¿ø&micro;&icirc;·Ï ½ÅÃ»&Agrave;&Uacute;¿¡°&Ocirc; º¸&sup3;»&micro;å¸®´&Acirc; ¸Þ&Agrave;Ï&Agrave;&Ocirc;´Ï´&Ugrave;.

¾Æ·¡ ¾Æ&Agrave;&Igrave;&micro;ð¿&Iacute; ºñ¹Ð¹ø&Egrave;£´&Acirc; &Agrave;Ø&Aacute;&ouml;¾&Ecirc;&micro;&micro;·Ï ¸Þ¸ðÇØ&micro;&Icirc;½Ã±&acirc; ¹&Ugrave;¶ø´Ï´&Ugrave;.

¾Æ&Agrave;&Igrave;&micro;ð : '{USER_NAME}'
ºñ¹Ð¹ø&Egrave;£ : '{PASSWORD}'

Ã&szlig;°¡·&Icirc; ¾Æ·¡ ¸&micro;Å©¸¦ Å¬¸¯ÇØ¼­ &Egrave;¸¿ø´&Ocirc;&Agrave;Ç °&egrave;&Aacute;¤&Agrave;» &Egrave;°¼º&Egrave;­ ½ÃÅ&sup2;´&Ugrave;&Agrave;½ ·&Icirc;±×&Agrave;&Icirc;ÇÏ¼¼¿&auml;. 

{ACT_LINK}

±&acirc;Å¸ ¹®&Agrave;Ç»çÇ×&Agrave;º ¿&icirc;¿&micro;&Agrave;&Uacute; ¸Þ&Agrave;Ï tmax@puchonphoto.com ·&Icirc; &Aacute;&Ouml;½Ã±&acirc; ¹&Ugrave;¶ø´Ï´&Ugrave;.

{SITE_NAME} ¿&icirc;¿&micro;&Agrave;&Uacute;

EOT;

}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
	'title' => '&Auml;&Uacute;¸&agrave;Æ® ´&Ugrave;½Ãº¸±&acirc;',
	'no_comment' => '&Auml;&Uacute;¸&agrave;Æ® ¾ø½&Agrave;´Ï´&Ugrave;.',
	'n_comm_del' => '%s comment(s) deleted',
	'n_comm_disp' => 'Æ&auml;&Agrave;&Igrave;&Aacute;&ouml;´ç Ã&acirc;·&Acirc;±&Ucirc;¼&ouml;',
	'see_prev' => '&Agrave;&Igrave;&Agrave;&uuml;',
	'see_next' => '´&Ugrave;&Agrave;½',
	'del_comm' => '¼±ÅÃÇÑ &Auml;&Uacute;¸&agrave;Æ® »&egrave;&Aacute;¦',
);


// ------------------------------------------------------------------------- //
// File search.php - OK
// ------------------------------------------------------------------------- //

if (defined('SEARCH_PHP')) $lang_search_php = array(
	0 => '&Agrave;&Igrave;¹&Igrave;&Aacute;&ouml; °¶·¯¸® °Ë»&ouml;',
);

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
	'page_title' => '»õ &Agrave;&Igrave;¹&Igrave;&Aacute;&ouml; °Ë»&ouml;',
	'select_dir' => '¾÷·&Icirc;&micro;å &micro;ð·ºÅ&auml;¸®',
	'select_dir_msg' => 'FTP¸¦ &Agrave;&Igrave;¿ë &Aacute;¤ÇØ&Aacute;ø Æ&uacute;´õ¿¡ &Agrave;&Igrave;¹&Igrave; ¾÷·&Icirc;&micro;åÇÑ Æ&Auml;&Agrave;Ï&Agrave;» ¿øÇÏ´&Acirc; °¶·¯¸®¿&Iacute; ¿¬°&aacute;½Ã&Auml;Ñ &Aacute;&Ouml;´&Acirc; &Agrave;&Ucirc;¾÷&Agrave;» ÇÏ´&Acirc; °÷&Agrave;&Ocirc;´Ï´&Ugrave;. <br /><br />*&Agrave;&Igrave;¹&Igrave;&Aacute;&ouml; Æ&Auml;&Agrave;Ï&Agrave;»(public_html/gallery/Albums/userpics)Æ&uacute;´õ·&Icirc; &Agrave;&uuml;¼&Ucirc;ÇÑ ´&Ugrave;&Agrave;½ ¾Æ·¡ &Agrave;&Ucirc;¾÷&Agrave;» &Aacute;øÇ&agrave;ÇÕ´Ï´&Ugrave;.<br /><br />1) userpics ¸¦ Å¬¸¯ÇÏ¸&eacute; &Agrave;&uuml;Ã¼ ¸®½ºÆ® °¡¿&icirc;&micro;¥ »õ·&Icirc; ¾÷·&Icirc;&micro;å&micro;&Egrave; Æ&Auml;&Agrave;Ï¸¸ Ã¼Å©&micro;Ç¾&icirc; &Agrave;&Ouml;½&Agrave;´Ï´&Ugrave;.<br />2) ¿øÇÏ´&Acirc; °¶·¯¸®¸¦ ¼±ÅÃÇÑ ´&Ugrave;&Agrave;½ "¼±ÅÃÇÑ &Agrave;&Igrave;¹&Igrave;&Aacute;&ouml; ¿¬°&aacute;" ¹&ouml;Æ°&Agrave;» Å¬¸¯ &micro;&icirc;·ÏÇÕ´Ï´&Ugrave;.<br /><br />*ÇÏ&sup3;ª&Agrave;Ç Æ&Auml;&Agrave;Ï&Agrave;» &micro;&Icirc; °÷&Agrave;Ç °¶·¯¸®¿¡ ¸&micro;Å©Ç&Ograve; ¼&ouml; ¾ø½&Agrave;´Ï´&Ugrave;. ÇØ´ç °¶·¯¸®¿¡¼­ »&egrave;&Aacute;¦&Egrave;&Auml; &Agrave;ç&micro;&icirc;·Ï ÇÏ¼¼¿&auml;.',
	'no_pic_to_add' => '¿¬°&aacute;&micro;&Egrave; &Agrave;&Igrave;¹&Igrave;&Aacute;&ouml; ¾ø½&Agrave;´Ï´&Ugrave;.',
	'need_one_album' => 'ÇÏ&sup3;ª &Agrave;&Igrave;»&oacute;&Agrave;Ç ¾&Ugrave;¹&uuml;&Agrave;» »ý¼ºÇÑ ´&Ugrave;&Agrave;½ &Agrave;&Igrave;¿ëÇÏ¼¼¿&auml;.',
	'warning' => '&Aacute;&Ouml;&Agrave;Ç',
	'change_perm' => '&Agrave;&Igrave;¹&Igrave;&Aacute;&ouml;¸¦ ¾÷·&Icirc;&micro;åÇÏ±&acirc; &Agrave;&uuml;¿¡ ÇØ´ç &micro;ð·ºÅ&auml;¸®&Agrave;Ç Æ&Ucirc;¹&Igrave;¼Ç&Agrave;» 755 ¶Ç´&Acirc; 777 ·&Icirc; º¯°æÇØ¾&szlig; ÇÕ´Ï´&Ugrave; !',
	'target_album' => '<b>&quot; %s &quot; Æ&uacute;´õ&Agrave;Ç &Agrave;&Igrave;¹&Igrave;&Aacute;&ouml;¸¦ ¿¬°&aacute;Ç&Ograve; °¶·¯¸® ¼±ÅÃ </b>%s',
	'folder' => '¾÷·&Icirc;&micro;å Æ&uacute;´õ',
	'image' => '&Agrave;&Igrave;¹&Igrave;&Aacute;&ouml;',
	'album' => '°¶·¯¸®',
	'result' => '°&aacute;°&uacute;',
	'dir_ro' => '¾&sup2;±&acirc; ±ÇÇÑ ¾ø½&Agrave;´Ï´&Ugrave;. ',
	'dir_cant_read' => '&Agrave;Ð±&acirc; ±ÇÇÑ ¾ø½&Agrave;´Ï´&Ugrave;. ',
	'insert' => '°¶·¯¸®¿¡ »õ·&Icirc;¿&icirc; &Agrave;&Igrave;¹&Igrave;&Aacute;&ouml; ¿¬°&aacute;',
	'list_new_pic' => '»õ &Agrave;&Igrave;¹&Igrave;&Aacute;&ouml; ¸ñ·Ï',
	'insert_selected' => '¼±ÅÃÇÑ &Agrave;&Igrave;¹&Igrave;&Aacute;&ouml; ¿¬°&aacute;',
	'no_pic_found' => '»õ &Agrave;&Igrave;¹&Igrave;&Aacute;&ouml;¸¦ Ã£&Aacute;&ouml; ¸øÇÏ¿´½&Agrave;´Ï´&Ugrave;.',
	'be_patient' => '°&aacute;°&uacute; ¾Æ&Agrave;&Igrave;&Auml;&Uuml;&Agrave;» &Acirc;&uuml;&Aacute;¶ÇÏ¼¼¿&auml;.',
	'notes' =>  '<ul>'.
				'<li><b>OK</b> : ¿¬°&aacute;¼º°ø'.
				'<li><b>DP</b> : ´&Ugrave;¸¥ °¶·¯¸®¿¡ &Agrave;&Igrave;¹&Igrave; &micro;&icirc;·Ï&micro;Ç¾&icirc;&Agrave;&Ouml;&Agrave;½'.
				'<li><b>PB</b> : ½ÇÆÐ, ¾÷·&Icirc;&micro;å &micro;ð·ºÅ&auml;¸®&Agrave;Ç Æ&Ucirc;¹&Igrave;¼Ç&micro;&icirc; Ã&szlig;°¡&Agrave;&Ucirc;¾÷ Ç&Ecirc;¿&auml;'.
				'<li>¸¸¾&agrave; °&aacute;°&uacute;Ã¢¿¡ OK, DP, PB &micro;&icirc;&Agrave;Ç ¾Æ&Agrave;&Igrave;&Auml;&Uuml;&Agrave;&Igrave; Ç¥½Ã&micro;Ç&Aacute;&ouml; ¾&Ecirc;¾&Ograve;´&Ugrave;¸&eacute; Ç&Aacute;·&Icirc;±×·¥&Agrave;» &Aacute;¡°ËÇÏ¼¼¿&auml;.'.
				'</ul>',
);


// ------------------------------------------------------------------------- //
// File thumbnails.php
// ------------------------------------------------------------------------- //

// Void


// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) $lang_upload_php = array(
	'title' => '&Agrave;&Igrave;¹&Igrave;&Aacute;&ouml; ¾÷·&Icirc;&micro;å',
	'max_fsize' => '¾÷·&Icirc;&micro;å Çã¿ë Ã&Ouml;´ë Æ&Auml;&Agrave;ÏÅ©±&acirc; %s KB',
	'album' => '¾&Ugrave;¹&uuml;',
	'picture' => '&Agrave;&Igrave;¹&Igrave;&Aacute;&ouml;',
	'pic_title' => '&Agrave;&Igrave;¹&Igrave;&Aacute;&ouml; &Aacute;¦¸ñ',
	'description' => '&Agrave;&Igrave;¹&Igrave;&Aacute;&ouml; ¼&sup3;¸&iacute;',
	'keywords' => 'Å°¿&ouml;&micro;å (°Ë»&ouml;¾&icirc;)',
	'err_no_alb_uploadables' => 'ÇØ´ç Æ&Auml;&Agrave;Ï ¾ø½&Agrave;´Ï´&Ugrave;.',
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
	'title' => '»ç¿ë&Agrave;&Uacute;(&Egrave;¸¿ø)°&uuml;¸®',
	'name_a' => '&Agrave;&Igrave;¸§ (a-z)',
	'name_d' => '&Agrave;&Igrave;¸§ (z-a)',
	'group_a' => '±×·&igrave; (a-z)',
	'group_d' => '±×·&igrave; (z-a)',
	'reg_a' => '&micro;&icirc;·Ï (a-z)',
	'reg_d' => '&micro;&icirc;·Ï (z-a)',
	'pic_a' => '&Aacute;¶&Egrave;¸ (a-z)',
	'pic_d' => '&Aacute;¶&Egrave;¸ (z-a)',
	'disku_a' => '»ç¿ë·® (a-z)',
	'disku_d' => '»ç¿ë·® (z-a)',
	'sort_by' => '&Aacute;¤·&Auml;¼ø¼­',
	'err_no_users' => '»ç¿ë&Agrave;&Uacute;(&Egrave;¸¿ø) Å×&Agrave;&Igrave;º&iacute;&Agrave;&Igrave; ºñ¾&icirc;&Agrave;&Ouml;½&Agrave;´Ï´&Ugrave; !',
	'err_edit_self' => '¼&ouml;&Aacute;¤Ç&Ograve; ¼&ouml; ¾ø½&Agrave;´Ï´&Ugrave;. °&sup3;&Agrave;&Icirc;&Aacute;¤º¸ ¼&ouml;&Aacute;¤ Æ&auml;&Agrave;&Igrave;&Aacute;&ouml;¸¦ &Agrave;&Igrave;¿ëÇÏ¼¼¿&auml;.',
	'edit' => 'Æ&iacute;&Aacute;ý',
	'delete' => '»&egrave;&Aacute;¦',
	'name' => '»ç¿ë&Agrave;&Uacute; &Agrave;&Igrave;¸§',
	'group' => '±×·&igrave;',
	'inactive' => 'ºñ&Egrave;°¼º',
	'operations' => '½ÇÇ&agrave;¸Þ´º',
	'pictures' => '&Agrave;&Igrave;¹&Igrave;&Aacute;&ouml;',
	'disk_space' => '»ç¿ë·®/Ç&Ograve;´ç·®',
	'registered_on' => '&Egrave;¸¿ø',
	'u_user_on_p_pages' => '%d &Agrave;&uuml;Ã¼ %d Æ&auml;&Agrave;&Igrave;&Aacute;&ouml;',
	'confirm_del' => '»&egrave;&Aacute;¦ ÇÏ½Ã°&Uacute;½&Agrave;´Ï±&icirc; ? \\n&micro;&icirc;·Ï&micro;&Egrave; ¸ð&micro;ç Æ&Auml;&Agrave;Ï&Agrave;&Igrave; »&egrave;&Aacute;¦&micro;Ë´Ï´&Ugrave;.',
	'mail' => '&Agrave;&Igrave;¸Þ&Agrave;Ï',
	'err_unknown_user' => '¼±ÅÃÇÑ &Egrave;¸¿ø&Agrave;&Igrave; &Aacute;¸&Agrave;çÇÏ&Aacute;&ouml; ¾&Ecirc;½&Agrave;´Ï´&Ugrave; !',
	'modify_user' => '&Egrave;¸¿ø&Aacute;¤º¸ ¼&ouml;&Aacute;¤',
	'notes' => '¸Þ¸ð',
	'note_list' => '<li>ºñ¹Ð¹ø&Egrave;£¸¦ ¼&ouml;&Aacute;¤ÇÏ&Aacute;&ouml; ¾&Ecirc;&Agrave;»°æ¿&igrave; ºñ¿&ouml;&micro;&Icirc;½Ã¸&eacute; &micro;Ë´Ï´&Ugrave;.',
	'password' => 'ºñ¹Ð¹ø&Egrave;£',
	'user_active' => '&Egrave;°¼º&Egrave;­&micro;&Egrave; »ç¿ë&Agrave;&Uacute;',
	'user_group' => '»ç¿ë&Agrave;&Uacute; ±×·&igrave;',
	'user_email' => '»ç¿ë&Agrave;&Uacute; &Agrave;&Igrave;¸Þ&Agrave;Ï',
	'user_web_site' => '»ç¿ë&Agrave;&Uacute; &Egrave;¨Æ&auml;&Agrave;&Igrave;&Aacute;&ouml;',
	'create_new_user' => '»õ·&Icirc;¿&icirc; »ç¿ë&Agrave;&Uacute; »ý¼º',
	'user_location' => '&Aacute;¢¼&Oacute;&Aacute;&ouml;',
	'user_interests' => '°&uuml;½&Eacute;ºÐ¾&szlig;',
	'user_occupation' => 'ÇÏ½Ã´&Acirc; &Agrave;Ï',
);
?>
