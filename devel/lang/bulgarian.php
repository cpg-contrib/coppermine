<?php
// ------------------------------------------------------------------------- //
//  Coppermine Photo Gallery                                                 //
// ------------------------------------------------------------------------- //
//  Copyright (C) 2002,2003  Gr&eacute;gory DEMAR <gdemar@wanadoo.fr>               //
//  http://www.chezgreg.net/coppermine/                                      //
// ------------------------------------------------------------------------- //
//  Based on PHPhotoalbum by Henning Stшverud <henning@stoverud.com>         //
//  http://www.stoverud.com/PHPhotoalbum/                                    //
// ------------------------------------------------------------------------- //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
// ------------------------------------------------------------------------- //

$lang_charset = 'windows-1251';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('&aacute;&agrave;&eacute;&ograve;', 'K&aacute;', 'M&aacute;');

// Day of weeks and months
$lang_day_of_week = array('&Iacute;е&auml;', 'П&icirc;&iacute;', '&Acirc;&ograve;&icirc;', 'Сря', 'Че&ograve;', 'Пе&ograve;', 'С&uacute;&aacute;');
$lang_month = array('&szlig;&iacute;&oacute;', '&Ocirc;е&acirc;', '&Igrave;&agrave;р', '&Agrave;пр', '&Igrave;&agrave;&eacute;', 'Ю&iacute;&egrave;', 'Юл&egrave;', '&Agrave;&acirc;г', 'Сеп', '&Icirc;&ecirc;&ograve;', '&Iacute;&icirc;е', '&Auml;е&ecirc;');

// Some common strings
$lang_yes = '&Auml;&agrave;';
$lang_no  = '&Iacute;е';
$lang_back = '&Iacute;&Agrave;З&Agrave;&Auml;';
$lang_continue = 'Пр&icirc;&auml;&uacute;лж&egrave;';
$lang_info = '&Egrave;&iacute;&ocirc;&icirc;р&igrave;&agrave;&ouml;&egrave;я';
$lang_error = 'Греш&ecirc;&agrave;';

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$album_date_fmt =    '%B %d, %Y';
$lastcom_date_fmt =  '%m/%d/%y &acirc; %H:%M';
$lastup_date_fmt = '%B %d, %Y';
$register_date_fmt = '%B %d, %Y';
$lasthit_date_fmt = '%B %d, %Y &acirc; %I:%M %p';
$comment_date_fmt =  '%B %d, %Y &acirc; %I:%M %p';

// For the word censor
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*');

$lang_meta_album_names = array(
	'random' => 'Сл&oacute;ч&agrave;&eacute;&iacute;&egrave; &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&egrave;',
	'lastup' => 'П&icirc;сле&auml;&iacute;&icirc; &auml;&icirc;&aacute;&agrave;&acirc;е&iacute;&egrave;',
	'lastcom' => 'П&icirc;сле&auml;&iacute;&egrave; &ecirc;&icirc;&igrave;е&iacute;&ograve;&agrave;р&egrave;',
	'topn' => '&Iacute;&agrave;&eacute; гле&auml;&agrave;&iacute;&egrave;',
	'toprated' => '&Iacute;&agrave;&eacute; &icirc;&ouml;е&iacute;е&iacute;&egrave;',
	'lasthits' => 'П&icirc;сле&auml;&iacute;&icirc; &acirc;&egrave;&auml;я&iacute;&egrave;',
	'search' => 'Рез&oacute;л&ograve;&agrave;&ograve;&egrave; &icirc;&ograve; &ograve;&uacute;рсе&iacute;е'
);

$lang_errors = array(
	'access_denied' => '&Acirc;&egrave;е &iacute;я&igrave;&agrave;&ograve;е пр&agrave;&acirc;&agrave; з&agrave; &auml;&icirc;с&ograve;&uacute;п &auml;&icirc; &ograve;&agrave;з&egrave; с&ograve;р&agrave;&iacute;&egrave;&ouml;&agrave;.',
	'perm_denied' => '&Acirc;&egrave;е &iacute;я&igrave;&agrave;&ograve;е пр&agrave;&acirc;&agrave; з&agrave; &auml;&agrave; &egrave;зп&uacute;л&iacute;&egrave;&ograve;е &ograve;&agrave;з&egrave; &icirc;пер&agrave;&ouml;&egrave;я.',
	'param_missing' => 'С&ecirc;р&egrave;п&ograve;&agrave; е &egrave;з&acirc;&egrave;&ecirc;&agrave;&iacute; &aacute;ез &iacute;е&icirc;&aacute;х&icirc;&auml;&egrave;&igrave;&egrave;&ograve;е п&agrave;р&agrave;&igrave;е&ograve;р&egrave;.',
	'non_exist_ap' => '&Egrave;з&aacute;р&agrave;&iacute;&egrave;я&ograve; &agrave;л&aacute;&oacute;&igrave;/&ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&agrave; &iacute;е с&uacute;&ugrave;ес&ograve;&acirc;&oacute;&acirc;&agrave; !',
	'quota_exceeded' => 'Л&egrave;&igrave;&egrave;&ograve;&agrave; з&agrave; &igrave;яс&ograve;&icirc; е пре&acirc;&egrave;ше&iacute;<br /><br />&Acirc;&egrave;е &egrave;&igrave;&agrave;&ograve;е &icirc;&ograve;&auml;еле&iacute;&icirc; &igrave;яс&ograve;&icirc; &icirc;&ograve; [quota]K, &Acirc;&agrave;ш&egrave;&ograve;е &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&egrave; з&agrave;е&igrave;&agrave;&ograve; [space]K, &agrave; &auml;&icirc;&aacute;&agrave;&acirc;я&eacute;&ecirc;&egrave; &ograve;&agrave;з&egrave; &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&agrave; &ugrave;е пре&acirc;&egrave;ш&egrave; л&egrave;&igrave;&egrave;&ograve;&agrave;.',
	'gd_file_type_err' => '&Ecirc;&icirc;г&agrave;&ograve;&icirc; се &egrave;зп&icirc;лз&acirc;&agrave; GD &aacute;&egrave;&aacute;л&egrave;&icirc;&ograve;е&ecirc;&agrave;&ograve;&agrave; р&agrave;зреше&iacute;&egrave;&ograve;е &acirc;&egrave;&auml;&icirc;&acirc;е &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&egrave; с&agrave; с&agrave;&igrave;&icirc; JPEG &egrave; PNG.',
	'invalid_image' => '&Ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&agrave;&ograve;&agrave; &ecirc;&icirc;я&ograve;&icirc; с&ograve;е &ecirc;&agrave;ч&egrave;л&egrave; е п&icirc;&acirc;ре&auml;е&iacute;&agrave; &egrave; &iacute;е &igrave;&icirc;же &auml;&agrave; се &icirc;&aacute;р&agrave;&aacute;&icirc;&ograve;&egrave;',
	'resize_failed' => '&Iacute;е &igrave;&icirc;же &auml;&agrave; се с&uacute;з&auml;&agrave;&auml;е &igrave;&agrave;л&ecirc;&agrave; &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&agrave;.',
	'no_img_to_display' => '&Iacute;я&igrave;&agrave; &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&agrave; з&agrave; п&icirc;&ecirc;&agrave;з&acirc;&agrave;&iacute;е',
	'non_exist_cat' => '&Egrave;з&aacute;р&agrave;&iacute;&agrave;&ograve;&agrave; &ecirc;&agrave;&ograve;ег&icirc;р&egrave;я &iacute;е с&uacute;&ugrave;ес&ograve;&acirc;&oacute;&acirc;&agrave;',
	'orphan_cat' => '&Ecirc;&agrave;&ograve;ег&icirc;р&egrave;я&ograve;&agrave; &egrave;&igrave;&agrave; &iacute;ес&uacute;&ugrave;ес&ograve;&acirc;&oacute;&acirc;&agrave;&ugrave; р&icirc;&auml;&egrave;&ograve;ел, с&ograve;&agrave;р&ograve;&egrave;р&agrave;&eacute;&ograve;е &igrave;е&iacute;&agrave;жер&agrave; &iacute;&agrave; &ecirc;&agrave;&ograve;ег&icirc;р&egrave;&egrave; з&agrave; &auml;&agrave; &ecirc;&icirc;р&egrave;г&egrave;р&agrave;&ograve;е пр&icirc;&aacute;ле&igrave;&agrave;.',
	'directory_ro' => '&Acirc; &auml;&egrave;ре&ecirc;&ograve;&icirc;р&egrave;я \'%s\' &iacute;е &igrave;&icirc;же &auml;&agrave; се з&agrave;п&egrave;с&acirc;&agrave;, &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&agrave;&ograve;&agrave; &iacute;е &igrave;&icirc;же &auml;&agrave; се &egrave;з&ograve;р&egrave;е',
	'non_exist_comment' => '&Egrave;з&aacute;р&agrave;&iacute;&egrave;я &ecirc;&icirc;&igrave;е&iacute;&ograve;&agrave;р &iacute;е с&uacute;&ugrave;ес&ograve;&acirc;&oacute;&acirc;&agrave;.',
	'pic_in_invalid_album' => '&Ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&agrave;&ograve;&agrave; &iacute;е с&uacute;&ugrave;ес&ograve;&acirc;&oacute;&acirc;&agrave; &acirc; &agrave;л&aacute;&oacute;&igrave; (%s)!?'
);

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
	'alb_list_title' => '&Acirc;&egrave;ж сп&egrave;с&uacute;&ecirc;&agrave; &iacute;&agrave; &agrave;л&aacute;&oacute;&igrave;&egrave;&ograve;е',
	'alb_list_lnk' => 'Сп&egrave;с&uacute;&ecirc; &iacute;&agrave; &agrave;л&aacute;&oacute;&igrave;&egrave;&ograve;е',
	'my_gal_title' => '&Icirc;&ograve;&egrave;&auml;&egrave; &acirc; л&egrave;ч&iacute;&agrave;&ograve;&agrave; г&agrave;лер&egrave;я',
	'my_gal_lnk' => 'Л&egrave;ч&iacute;&agrave; г&agrave;лер&egrave;я',
	'my_prof_lnk' => '&Igrave;&icirc;я пр&icirc;&ocirc;&egrave;л',
	'adm_mode_title' => 'Пре&igrave;&egrave;&iacute;&egrave; &acirc; &agrave;&auml;&igrave;&egrave;&iacute;&egrave;с&ograve;р&agrave;&ograve;&egrave;&acirc;е&iacute; реж&egrave;&igrave;',
	'adm_mode_lnk' => '&Agrave;&auml;&igrave;&egrave;&iacute;&egrave;с&ograve;р&agrave;&ograve;&egrave;&acirc;е&iacute; реж&egrave;&igrave;',
	'usr_mode_title' => 'Пре&igrave;&egrave;&iacute;&egrave; &acirc; п&icirc;&ograve;ре&aacute;&egrave;&ograve;елс&ecirc;&egrave; реж&egrave;&igrave;',
	'usr_mode_lnk' => 'П&icirc;&ograve;ре&aacute;&egrave;&ograve;елс&ecirc;&egrave; реж&egrave;&igrave;',
	'upload_pic_title' => '&Auml;&icirc;&aacute;&agrave;&acirc;&egrave; &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&agrave; &acirc; &agrave;л&aacute;&oacute;&igrave;',
	'upload_pic_lnk' => '&Auml;&icirc;&aacute;&agrave;&acirc;&egrave; &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&agrave;',
	'register_title' => 'С&uacute;з&auml;&agrave;&eacute; &iacute;&icirc;&acirc; п&icirc;&ograve;ре&aacute;&egrave;&ograve;ел',
	'register_lnk' => 'Рег&egrave;с&ograve;р&egrave;р&agrave;&eacute; се',
	'login_lnk' => '&Acirc;х&icirc;&auml;',
	'logout_lnk' => '&Egrave;зх&icirc;&auml;',
	'lastup_lnk' => 'П&icirc;сле&auml;&iacute;&icirc; &auml;&icirc;&aacute;&agrave;&acirc;е&iacute;&egrave;',
	'lastcom_lnk' => 'П&icirc;сле&auml;&iacute;&egrave; &ecirc;&icirc;&igrave;е&iacute;&ograve;&agrave;р&egrave;',
	'topn_lnk' => '&Iacute;&agrave;&eacute; гле&auml;&agrave;&iacute;&egrave;',
	'toprated_lnk' => '&Iacute;&agrave;&eacute; &icirc;&ouml;е&iacute;е&iacute;&egrave;',
	'search_lnk' => '&Ograve;&uacute;рсе&iacute;е',
);

$lang_gallery_admin_menu = array(
	'upl_app_lnk' => '&Icirc;&auml;&icirc;&aacute;ре&iacute;&egrave;е &iacute;&agrave; &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&egrave;',
	'config_lnk' => '&Ecirc;&icirc;&iacute;&ocirc;&egrave;г&oacute;р&agrave;&ouml;&egrave;я',
	'albums_lnk' => '&Agrave;л&aacute;&oacute;&igrave;&egrave;',
	'categories_lnk' => '&Ecirc;&agrave;&ograve;ег&icirc;р&egrave;&egrave;',
	'users_lnk' => 'П&icirc;&ograve;ре&aacute;&egrave;&ograve;ел&egrave;',
	'groups_lnk' => 'Гр&oacute;п&egrave;',
	'comments_lnk' => '&Ecirc;&icirc;&igrave;е&iacute;&ograve;&agrave;р&egrave;',
	'searchnew_lnk' => 'П&agrave;&ecirc;е&ograve;&iacute;&icirc; &auml;&icirc;&aacute;&agrave;&acirc;я&iacute;е &iacute;&agrave; с&iacute;&egrave;&igrave;&ecirc;&egrave;',
);

$lang_user_admin_menu = array(
	'albmgr_lnk' => 'С&uacute;з&auml;&agrave;&eacute;/п&icirc;&auml;ре&auml;&egrave; &igrave;&icirc;&egrave;&ograve;е &agrave;л&aacute;&oacute;&igrave;&egrave;',
	'modifyalb_lnk' => 'Пр&icirc;&igrave;е&iacute;&egrave; &igrave;&icirc;&egrave;&ograve;е &agrave;л&aacute;&oacute;&igrave;&egrave;',
	'my_prof_lnk' => '&Igrave;&icirc;я пр&icirc;&ocirc;&egrave;л',
);

$lang_cat_list = array(
	'category' => '&Ecirc;&agrave;&ograve;ег&icirc;р&egrave;я',
	'albums' => '&Agrave;л&aacute;&oacute;&igrave;&egrave;',
	'pictures' => '&Ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&egrave;',
);

$lang_album_list = array(
	'album_on_page' => '%d &agrave;л&aacute;&oacute;&igrave;&egrave; &iacute;&agrave; %d с&ograve;&agrave;&iacute;&egrave;&ouml;&agrave;(&egrave;)'
);

$lang_thumb_view = array(
	'date' => '&Auml;&Agrave;&Ograve;&Agrave;',
	'name' => '&Egrave;&Igrave;Е',
	'sort_da' => 'С&icirc;р&ograve;. п&icirc; &auml;&agrave;&ograve;&agrave; &acirc;&uacute;зх&icirc;&auml;я&ugrave;&icirc;',
	'sort_dd' => 'С&icirc;р&ograve;. п&icirc; &auml;&agrave;&ograve;&agrave; &iacute;&egrave;зх&icirc;&auml;я&ugrave;&icirc;',
	'sort_na' => 'С&icirc;р&ograve;. п&icirc; &egrave;&igrave;е &acirc;&uacute;зх&icirc;&auml;я&ugrave;&icirc;',
	'sort_nd' => 'С&icirc;р&ograve;. п&icirc; &auml;&agrave;&ograve;&agrave; &iacute;&egrave;зх&icirc;&auml;я&ugrave;&icirc;',
	'pic_on_page' => '%d &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&egrave; &iacute;&agrave; %d с&ograve;р&agrave;&iacute;&egrave;&ouml;&agrave;(&egrave;)',
	'user_on_page' => '%d п&icirc;&ograve;ре&aacute;&egrave;&ograve;ел&egrave; &iacute;&agrave; %d с&ograve;р&agrave;&iacute;&egrave;&ouml;&agrave;(&egrave;)'
);

$lang_img_nav_bar = array(
	'thumb_title' => '&Acirc;&uacute;р&iacute;&egrave; се &iacute;&agrave; с&ograve;р&agrave;&iacute;&egrave;&ouml;&agrave;&ograve;&agrave; с &igrave;&agrave;л&ecirc;&egrave;&ograve;е &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&egrave;',
	'pic_info_title' => 'П&icirc;&ecirc;&agrave;ж&egrave;/с&ecirc;р&egrave;&eacute; &egrave;&iacute;&ocirc;&icirc;р&igrave;&agrave;&ouml;&egrave;я з&agrave; &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&agrave;&ograve;&agrave;',
	'slideshow_title' => 'Сл&agrave;&eacute;&auml; ш&icirc;&oacute;',
	'ecard_title' => '&Egrave;зпр&agrave;&ograve;&egrave; &ograve;&agrave;з&egrave; &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&agrave; &ecirc;&agrave;&ograve;&icirc; е-&ecirc;&agrave;р&ograve;&egrave;ч&ecirc;&agrave;',
	'ecard_disabled' => 'е-&ecirc;&agrave;р&ograve;&egrave;ч&ecirc;&egrave; с&agrave; &egrave;з&ecirc;люче&iacute;&egrave;',
	'ecard_disabled_msg' => '&Iacute;я&igrave;&agrave;ш пр&agrave;&acirc;&agrave; &auml;&agrave; &egrave;зпр&agrave;&ugrave;&agrave;ш е-&ecirc;&agrave;р&ograve;&egrave;ч&ecirc;&egrave;',
	'prev_title' => '&Acirc;&egrave;ж пре&auml;&egrave;ш&iacute;&agrave;&ograve;&agrave; &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&agrave;',
	'next_title' => '&Acirc;&egrave;ж сле&auml;&acirc;&agrave;&ugrave;&agrave;&ograve;&agrave; &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&agrave;',
	'pic_pos' => '&Ecirc;&Agrave;Р&Ograve;&Egrave;&Iacute;&Ecirc;&Agrave; %s/%s',
);

$lang_rate_pic = array(
	'rate_this_pic' => '&Icirc;&ouml;е&iacute;&egrave; &ograve;&agrave;з&egrave; &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&agrave; ',
	'no_votes' => '(&iacute;я&igrave;&agrave; гл&agrave;с&oacute;&acirc;&agrave;&iacute;е)',
	'rating' => '(&ograve;е&ecirc;&oacute;&ugrave;&agrave; &icirc;&ouml;е&iacute;&ecirc;&agrave; : %s / 5 с&uacute;с %s гл&agrave;с&icirc;&acirc;е)',
	'rubbish' => '&Iacute;&egrave;&ecirc;&agrave;&ecirc;',
	'poor' => '&Igrave;&iacute;&icirc;г&icirc; л&icirc;ш&agrave;',
	'fair' => 'Л&icirc;ш&agrave;',
	'good' => 'Сре&auml;&iacute;&agrave;',
	'excellent' => '&Auml;&icirc;&aacute;р&agrave;',
	'great' => '&Igrave;&iacute;&icirc;г&icirc; &auml;&icirc;&aacute;р&agrave;',
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
	CRITICAL_ERROR => '&Ecirc;р&egrave;&ograve;&egrave;ч&iacute;&agrave; греш&ecirc;&agrave;',
	'file' => '&Ocirc;&agrave;&eacute;л: ',
	'line' => 'Л&egrave;&iacute;&egrave;я: ',
);

$lang_display_thumbnails = array(
	'filename' => '&Ocirc;&agrave;&eacute;л : ',
	'filesize' => 'Г&icirc;ле&igrave;&egrave;&iacute;&agrave; : ',
	'dimensions' => 'Р&agrave;з&igrave;ер : ',
	'date_added' => '&Auml;&icirc;&aacute;&agrave;&acirc;е&iacute; &iacute;&agrave; : '
);

$lang_get_pic_data = array(
	'n_comments' => '%s &ecirc;&icirc;&igrave;е&iacute;&ograve;&agrave;р&agrave;',
	'n_views' => '%s прегле&auml;&agrave;',
	'n_votes' => '(%s гл&agrave;с&icirc;&acirc;е)'
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
	0 => '&Egrave;зх&icirc;&auml; &icirc;&ograve; &agrave;&auml;&igrave;&egrave;&iacute;&egrave;с&ograve;р&agrave;&ograve;&egrave;&acirc;е&iacute; реж&egrave;&igrave;...',
	1 => '&Acirc;х&icirc;&auml; &agrave;&auml;&igrave;&egrave;&iacute;&egrave;с&ograve;р&agrave;&ograve;&egrave;&acirc;е&iacute; реж&egrave;&igrave;...',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
	'alb_need_name' => '&Agrave;л&aacute;&oacute;&igrave;&agrave; &ograve;ря&aacute;&acirc;&agrave; &auml;&agrave; &egrave;&igrave;&agrave; &egrave;&igrave;е !',
	'confirm_modifs' => 'С&egrave;г&oacute;ре&iacute; л&egrave; с&egrave;, че &egrave;с&ecirc;&agrave;ш &auml;&agrave; &iacute;&agrave;пр&agrave;&acirc;&egrave;ш &ograve;ез&egrave; пр&icirc;&igrave;е&iacute;&egrave; ?',
	'no_change' => '&Iacute;е с&egrave; &iacute;&agrave;пр&agrave;&acirc;&egrave;л &iacute;&egrave;&ecirc;&agrave;&ecirc;&acirc;&agrave; пр&icirc;&igrave;я&iacute;&agrave; !',
	'new_album' => '&Iacute;&icirc;&acirc; &agrave;л&aacute;&oacute;&igrave;',
	'confirm_delete1' => 'С&egrave;г&oacute;ре&iacute; л&egrave; с&egrave;, че &egrave;с&ecirc;&agrave;ш &auml;&agrave; &egrave;з&ograve;р&egrave;еш &ograve;&icirc;з&egrave; &agrave;л&aacute;&oacute;&igrave; ?',
	'confirm_delete2' => '\n&Acirc;с&egrave;ч&ecirc;&egrave; &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&egrave; &egrave; &ecirc;&icirc;&igrave;е&iacute;&ograve;&agrave;р&egrave; &ecirc;&icirc;&egrave;&ograve;&icirc; с&uacute;&auml;&uacute;рж&agrave;, &ugrave;е &aacute;&uacute;&auml;&agrave;&ograve; &egrave;з&ograve;р&egrave;&ograve;&egrave; !',
	'select_first' => '&Egrave;з&aacute;ер&egrave; &agrave;л&aacute;&oacute;&igrave; п&uacute;р&acirc;&icirc;',
	'alb_mrg' => '&Igrave;е&iacute;&agrave;жер &iacute;&agrave; &agrave;л&aacute;&oacute;&igrave;&egrave;&ograve;е',
	'my_gallery' => '* &Igrave;&icirc;я&ograve;&agrave; г&agrave;лер&egrave;я *',
	'no_category' => '* &Iacute;я&igrave;&agrave; &ecirc;&agrave;&ograve;ег&icirc;р&egrave;я *',
	'delete' => '&Egrave;з&ograve;р&egrave;&eacute;',
	'new' => '&Iacute;&icirc;&acirc;',
	'apply_modifs' => '&Egrave;з&acirc;&uacute;рш&egrave; &igrave;&icirc;&auml;&egrave;&ocirc;&egrave;&ecirc;&agrave;&ouml;&egrave;&eacute;&ograve;е',
	'select_category' => '&Egrave;з&aacute;ер&egrave; &ecirc;&agrave;&ograve;ег&icirc;р&egrave;я',
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
	'miss_param' => 'П&agrave;р&agrave;&igrave;е&ograve;&uacute;р &egrave;з&egrave;с&ecirc;&acirc;&agrave;&iacute; з&agrave; &icirc;пер&agrave;&ouml;&egrave;я \'%s\' &iacute;е е &auml;&icirc;&aacute;&agrave;&acirc;е&iacute; !',
	'unknown_cat' => '&Egrave;з&aacute;р&agrave;&iacute;&agrave;&ograve;&agrave; &ecirc;&agrave;&ograve;ег&icirc;р&egrave;я &iacute;е с&uacute;&ugrave;ес&ograve;&acirc;&oacute;&acirc;&agrave;',
	'usergal_cat_ro' => '&Ecirc;&agrave;&ograve;ег&icirc;р&egrave;я &iacute;&agrave; п&icirc;&ograve;ре&aacute;&egrave;&ograve;елс&ecirc;&egrave; г&agrave;лер&egrave;&egrave; &iacute;&agrave; &igrave;&icirc;же &auml;&agrave; &aacute;&uacute;&auml;е &egrave;з&ograve;р&egrave;&ograve;&agrave; !',
	'manage_cat' => '&Oacute;пр&agrave;&acirc;ле&iacute;&egrave;е &iacute;&agrave; &ecirc;&agrave;&ograve;ег&icirc;р&egrave;&eacute;&ograve;е',
	'confirm_delete' => 'С&egrave;г&oacute;ре&iacute; л&egrave; с&egrave;, че &egrave;с&ecirc;&agrave;ш &auml;&agrave; &Egrave;З&Ograve;Р&Egrave;ЕШ &ograve;&agrave;з&egrave; &ecirc;&agrave;&ograve;ег&icirc;р&egrave;я',
	'category' => '&Ecirc;&agrave;&ograve;ег&icirc;р&egrave;я',
	'operations' => '&Icirc;пер&agrave;&ouml;&egrave;&egrave;',
	'move_into' => 'Пре&igrave;ес&ograve;&egrave; &acirc;',
	'update_create' => '&Icirc;&aacute;&iacute;&icirc;&acirc;&egrave;/С&uacute;з&auml;&agrave;&eacute; &ecirc;&agrave;&ograve;ег&icirc;р&egrave;я',
	'parent_cat' => 'Гл&agrave;&acirc;&iacute;&agrave; &ecirc;&agrave;&ograve;ег&icirc;р&egrave;я',
	'cat_title' => 'З&agrave;гл&agrave;&acirc;&egrave;е &iacute;&agrave; &ecirc;&agrave;&ograve;ег&icirc;р&egrave;я',
	'cat_desc' => '&Icirc;п&egrave;с&agrave;&iacute;&egrave;е &iacute;&agrave; &ecirc;&agrave;&ograve;ег&icirc;р&egrave;я'
);

// ------------------------------------------------------------------------- //
// File config.php
// ------------------------------------------------------------------------- //

if (defined('CONFIG_PHP')) $lang_config_php = array(
	'title' => '&Ecirc;&icirc;&iacute;&ocirc;&egrave;г&oacute;р&agrave;&ouml;&egrave;я',
	'restore_cfg' => '&Acirc;&uacute;зс&ograve;&agrave;&iacute;&icirc;&acirc;я&acirc;&agrave;&iacute;е &iacute;&agrave; с&ograve;&icirc;&eacute;&iacute;&icirc;с&ograve;&egrave;&ograve;е п&icirc; п&icirc;&auml;р&agrave;з&aacute;&egrave;р&agrave;&iacute;е',
	'save_cfg' => 'З&agrave;п&egrave;ш&egrave; &iacute;&icirc;&acirc;&agrave;&ograve;&agrave; &ecirc;&icirc;&iacute;&ocirc;&egrave;г&oacute;р&agrave;&ouml;&egrave;я',
	'notes' => '&Aacute;ележ&ecirc;&egrave;',
	'info' => '&Egrave;&iacute;&ocirc;&icirc;р&igrave;&agrave;&ouml;&egrave;я',
	'upd_success' => '&Ecirc;&icirc;&iacute;&ocirc;&egrave;г&oacute;р&agrave;&ouml;&egrave;я&ograve;&agrave; е &icirc;&aacute;&iacute;&icirc;&acirc;е&iacute;&agrave;',
	'restore_success' => '&Ecirc;&icirc;&iacute;&ocirc;&egrave;г&oacute;р&agrave;&ouml;&egrave;я&ograve;&agrave; п&icirc; п&icirc;&auml;р&agrave;з&aacute;&egrave;р&agrave;&iacute;е е &acirc;&uacute;зс&ograve;&agrave;&iacute;&icirc;&acirc;е&iacute;&agrave;',
	'name_a' => '&Egrave;&igrave;е &acirc;&uacute;зх&icirc;&auml;я&ugrave;',
	'name_d' => '&Egrave;&igrave;е &iacute;&egrave;зх&icirc;&auml;я&ugrave;',
	'date_a' => '&Auml;&agrave;&ograve;&agrave; &acirc;&uacute;зх&icirc;&auml;я&ugrave;&agrave;',
	'date_d' => '&Auml;&agrave;&ograve;&agrave; &iacute;&egrave;зх&icirc;&auml;я&ugrave;&agrave;'
);

if (defined('CONFIG_PHP')) $lang_config_data = array(
	'&Icirc;&aacute;&ugrave;&egrave; &iacute;&agrave;с&ograve;р&icirc;&eacute;&ecirc;&egrave;',
	array('&Egrave;&igrave;е &iacute;&agrave; г&agrave;лер&egrave;я', 'gallery_name', 0),
	array('&Icirc;п&egrave;с&agrave;&iacute;&egrave;е &iacute;&agrave; г&agrave;лер&egrave;я', 'gallery_description', 0),
	array('е-&igrave;&agrave;&eacute;л &iacute;&agrave; &agrave;&auml;&igrave;&egrave;&iacute;&egrave;с&ograve;р&agrave;&ograve;&icirc;р&agrave; &iacute;&agrave; г&agrave;лер&egrave;я&ograve;&agrave;', 'gallery_admin_email', 0),
	array('&Agrave;&auml;рес з&agrave; &acirc;р&uacute;з&ecirc;&agrave;&ograve;&agrave; \'&Acirc;&egrave;ж &icirc;&ugrave;е &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&egrave;\' &acirc; е-&ecirc;&agrave;р&ograve;&egrave;ч&ecirc;&agrave;', 'ecards_more_pic_target', 0),
	array('Ез&egrave;&ecirc;', 'lang', 5),
	array('&Acirc;&egrave;з&oacute;&agrave;л&iacute;&agrave; &ograve;е&igrave;&agrave;', 'theme', 6),

	'Прегле&auml; &iacute;&agrave; л&egrave;с&ograve;&agrave; с &agrave;л&aacute;&oacute;&igrave;&egrave;',
	array('Ш&egrave;р&egrave;&iacute;&agrave; &iacute;&agrave; гл&agrave;&acirc;&agrave;&iacute;&ograve;&agrave; &ograve;&agrave;&aacute;л&egrave;&ouml;&agrave; (п&egrave;&ecirc;сел&egrave; &egrave;л&egrave; %)', 'main_table_width', 0),
	array('&Aacute;р&icirc;&eacute; &iacute;&egrave;&acirc;&agrave; &icirc;&ograve; &ecirc;&agrave;&ograve;ег&icirc;р&egrave;&eacute;&ograve;е з&agrave; &acirc;&egrave;з&oacute;&agrave;л&egrave;з&agrave;&ouml;&egrave;я', 'subcat_level', 0),
	array('&Aacute;р&icirc;&eacute; &agrave;л&aacute;&oacute;&igrave;&egrave; &iacute;&agrave; с&ograve;р&agrave;&iacute;&egrave;&ouml;&agrave;', 'albums_per_page', 0),
	array('&Aacute;р&icirc;&eacute; &ecirc;&icirc;л&icirc;&iacute;&egrave; з&agrave; л&egrave;с&ograve;&agrave; &iacute;&agrave; &agrave;л&aacute;&oacute;&igrave;&egrave;&ograve;е', 'album_list_cols', 0),
	array('Г&icirc;ле&igrave;&egrave;&iacute;&agrave; &iacute;&agrave; &igrave;&agrave;л&ecirc;&agrave;&ograve;&agrave; &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&agrave; &acirc; п&egrave;&ecirc;сел&egrave;', 'alb_list_thumb_size', 0),
	array('С&uacute;&auml;&uacute;рж&agrave;&iacute;&egrave;е &iacute;&agrave; гл&agrave;&acirc;&iacute;&agrave;&ograve;&agrave; с&ograve;р&agrave;&iacute;&egrave;&ouml;&agrave;', 'main_page_layout', 0),

	'Прегле&auml; &iacute;&agrave; &igrave;&agrave;л&ecirc;&egrave; &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&egrave;',
	array('&Ecirc;&icirc;л&egrave;чес&ograve;&acirc;&icirc; &ecirc;&icirc;л&icirc;&iacute;&ecirc;&egrave; &iacute;&agrave; с&ograve;р&agrave;&iacute;&egrave;&ouml;&agrave;&ograve;&agrave;', 'thumbcols', 0),
	array('&Ecirc;&icirc;л&egrave;чес&ograve;&acirc;&icirc; ре&auml;&icirc;&acirc;е &iacute;&agrave; с&ograve;р&agrave;&iacute;&egrave;&ouml;&agrave;&ograve;&agrave;', 'thumbrows', 0),
	array('&Igrave;&agrave;&ecirc;с&egrave;&igrave;&agrave;л&iacute;&icirc; &ecirc;&icirc;л&egrave;чес&ograve;&acirc;&icirc; &iacute;&agrave; &ograve;&agrave;&aacute;&oacute;л&agrave;&ouml;&egrave;&egrave;', 'max_tabs', 0),
	array('П&icirc;&ecirc;&agrave;з&acirc;&agrave;&iacute;е &iacute;&agrave; &iacute;&agrave;&auml;п&egrave;с&agrave; &iacute;&agrave; &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&agrave; (&acirc; &auml;&icirc;п&uacute;л&iacute;е&iacute;&egrave;е &iacute;&agrave; з&agrave;гл&agrave;&acirc;&egrave;е&ograve;&icirc;) п&icirc;&auml; &igrave;&agrave;л&ecirc;&agrave;&ograve;&agrave; &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&agrave;', 'caption_in_thumbview', 1),
	array('П&icirc;&ecirc;&agrave;з&acirc;&agrave;&iacute;е &iacute;&agrave; &aacute;р&icirc;я &ecirc;&icirc;&igrave;е&iacute;&ograve;&agrave;р&egrave; п&icirc;&auml; &igrave;&agrave;л&ecirc;&agrave;&ograve;&agrave; &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&agrave;', 'display_comment_count', 1),
	array('С&icirc;р&ograve;&egrave;р&agrave;&iacute;е п&icirc; п&icirc;&auml;р&agrave;з&aacute;&egrave;р&agrave;&iacute;е &iacute;&agrave; &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&egrave;&ograve;е', 'default_sort_order', 3),
	array('&Igrave;&egrave;&iacute;&egrave;&igrave;&agrave;ле&iacute; &aacute;р&icirc;&eacute; гл&agrave;с&oacute;&acirc;&agrave;&iacute;&egrave;я з&agrave; &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&agrave; з&agrave; &auml;&agrave; се &acirc;&ecirc;люч&egrave; &acirc; л&egrave;с&ograve;&agrave;&ograve;&agrave; &iacute;&agrave; \'&iacute;&agrave;&eacute;-гле&auml;&agrave;&iacute;&egrave;\'', 'min_votes_for_rating', 0),

	'Прегле&auml; &iacute;&agrave; &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&agrave; &amp; &Iacute;&agrave;ср&icirc;&eacute;&ecirc;&agrave; &iacute;&agrave; &ecirc;&icirc;&igrave;е&iacute;&ograve;&agrave;р',
	array('Ш&egrave;р&egrave;&iacute;&agrave; &iacute;&agrave; &ograve;&agrave;&aacute;л&egrave;&ouml;&agrave;&ograve;&agrave; з&agrave; п&icirc;&ecirc;&agrave;з&acirc;&agrave;&iacute;е &iacute;&agrave; &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&agrave; (п&egrave;&ecirc;сел&egrave; &egrave;л&egrave; %)', 'picture_table_width', 0),
	array('&Egrave;&iacute;&ocirc;&icirc;р&igrave;&agrave;&ouml;&egrave;я з&agrave; &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&agrave;&ograve;&agrave; се &acirc;&egrave;ж&auml;&agrave; п&icirc; п&icirc;&auml;р&agrave;з&aacute;&egrave;р&agrave;&iacute;е', 'display_pic_info', 1),
	array('&Ocirc;&egrave;л&ograve;р&egrave;р&agrave;&eacute; \'л&icirc;ш&egrave;&ograve;е\' &auml;&oacute;&igrave;&egrave; &acirc; &ecirc;&icirc;&igrave;е&iacute;&ograve;&agrave;р&egrave;&ograve;е', 'filter_bad_words', 1),
	array('П&icirc;з&acirc;&icirc;л&egrave; &oacute;с&igrave;&egrave;&acirc;&ecirc;&egrave; &acirc;', 'enable_smilies', 1),
	array('&Igrave;&agrave;&ecirc;с&egrave;&igrave;&agrave;л&iacute;&agrave; &auml;&uacute;лж&egrave;&iacute;&agrave; &iacute;&agrave; &icirc;п&egrave;с&agrave;&iacute;&egrave;е &iacute;&agrave; &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&agrave;', 'max_img_desc_length', 0),
	array('&Igrave;&agrave;&ecirc;с&egrave;&igrave;&agrave;ле&iacute; &aacute;р&icirc;&eacute; &iacute;&agrave; с&egrave;&igrave;&acirc;&icirc;л&egrave; &acirc; &auml;&oacute;&igrave;&agrave;', 'max_com_wlength', 0),
	array('&Igrave;&agrave;&ecirc;с&egrave;&igrave;&agrave;ле&iacute; &aacute;р&icirc;&eacute; &iacute;&agrave; ре&auml;&icirc;&acirc;е &acirc; &ecirc;&icirc;&igrave;е&iacute;&ograve;&agrave;р', 'max_com_lines', 0),
	array('&Igrave;&agrave;&ecirc;с&egrave;&igrave;&agrave;л&iacute;&agrave; &auml;&uacute;лж&egrave;&iacute;&agrave; &iacute;&agrave; &ecirc;&icirc;&igrave;е&iacute;&ograve;&agrave;р &acirc; с&egrave;&igrave;&acirc;&icirc;л&egrave;', 'max_com_size', 0),

	'&Iacute;&agrave;с&ograve;&icirc;р&eacute;&ecirc;&egrave; &iacute;&agrave; &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&egrave; &egrave; &igrave;&agrave;л&ecirc;&egrave; &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&egrave;',
	array('&Ecirc;&agrave;чес&ograve;&acirc;&icirc; &iacute;&agrave; JPEG &ocirc;&agrave;&eacute;л&icirc;&acirc;е&ograve;е', 'jpeg_qual', 0),
	array('&Igrave;&agrave;&ecirc;с&egrave;&igrave;&agrave;л&iacute;&agrave; &acirc;&egrave;с&icirc;ч&egrave;&iacute;&agrave; &egrave;л&egrave; ш&egrave;р&egrave;&iacute;&agrave; &iacute;&agrave; &igrave;&agrave;л&ecirc;&agrave; &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&agrave; <b>*</b>', 'thumb_width', 0),
	array('С&uacute;з&auml;&agrave;&eacute; &igrave;еж&auml;&egrave;&iacute;&iacute;&egrave; &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&egrave;','make_intermediate',1),
	array('&Igrave;&agrave;&ecirc;с&egrave;&igrave;&agrave;л&iacute;&agrave; &acirc;&egrave;с&icirc;ч&egrave;&iacute;&agrave; &egrave;л&egrave; ш&egrave;р&egrave;&iacute;&agrave; &iacute;&agrave; &igrave;еж&auml;&egrave;&iacute;&iacute;&egrave;&ograve;е &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&egrave; <b>*</b>', 'picture_width', 0),
	array('&Igrave;&agrave;&ecirc;с&egrave;&igrave;&agrave;л&iacute;&agrave; г&icirc;ле&igrave;&egrave;&iacute;&agrave; &iacute;&agrave; &auml;&icirc;&aacute;&agrave;&acirc;е&iacute;&egrave;&ograve;е &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&egrave; (KB)', 'max_upl_size', 0),
	array('&Igrave;&agrave;&ecirc;с&egrave;&igrave;&agrave;л&iacute;&agrave; &acirc;&egrave;с&icirc;ч&egrave;&iacute;&agrave; &egrave;л&egrave; ш&egrave;р&egrave;&iacute;&agrave; з&agrave; &auml;&icirc;&aacute;&agrave;&acirc;е&iacute;&agrave;&ograve;&agrave; &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&agrave; (п&egrave;&ecirc;сел&egrave;)', 'max_upl_width_height', 0),

	'П&icirc;&ograve;ре&aacute;&egrave;&ograve;елс&ecirc;&egrave; &iacute;&agrave;с&ograve;р&icirc;&eacute;&ecirc;&egrave;',
	array('Р&agrave;зреше&iacute;&egrave;е з&agrave; с&uacute;з&auml;&agrave;&acirc;&agrave;&iacute;е &iacute;&agrave; &iacute;&icirc;&acirc;&egrave; п&icirc;&ograve;ре&aacute;&egrave;&ograve;ел&egrave;', 'allow_user_registration', 1),
	array('Рег&egrave;с&ograve;р&egrave;р&agrave;&iacute;е&ograve;&icirc; &iacute;&agrave; п&icirc;&ograve;ре&aacute;&egrave;&ograve;ел &egrave;з&egrave;с&ecirc;&agrave;&acirc;&agrave; п&icirc;&ograve;&acirc;&uacute;рж&auml;е&iacute;&egrave;е с е-&igrave;е&eacute;л', 'reg_requires_valid_email', 1),
	array('П&icirc;з&acirc;&icirc;л&egrave; &iacute;&agrave; &auml;&acirc;&agrave;&igrave;&agrave; п&icirc;&ograve;ре&aacute;&egrave;&ograve;ел&egrave; &auml;&agrave; &egrave;&igrave;&agrave;&ograve; е&auml;&iacute;&agrave;&ecirc;&acirc;&egrave; е-&igrave;е&eacute;л &agrave;&auml;рес&egrave;', 'allow_duplicate_emails_addr', 1),
	array('П&icirc;&ograve;ре&aacute;&egrave;&ograve;ел&egrave;&ograve;е &igrave;&icirc;г&agrave;&ograve; &auml;&agrave; &egrave;&igrave;&agrave;&ograve; л&egrave;ч&iacute;&egrave; &agrave;л&aacute;&oacute;&igrave;&egrave;', 'allow_private_albums', 1),

	'П&icirc;&ograve;ре&aacute;&egrave;&ograve;елс&egrave; п&icirc;ле&ograve;&agrave; пр&egrave; &icirc;п&egrave;с&agrave;&iacute;&egrave;е&ograve;&icirc; &iacute;&agrave; &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&agrave; (&icirc;с&ograve;&agrave;&acirc;&egrave; пр&agrave;з&iacute;&icirc;, &agrave;&ecirc;&icirc; &iacute;е се п&icirc;лз&acirc;&agrave;)',
	array('&Egrave;&igrave;е &iacute;&agrave; п&icirc;ле 1', 'user_field1_name', 0),
	array('&Egrave;&igrave;е &iacute;&agrave; п&icirc;ле 2', 'user_field2_name', 0),
	array('&Egrave;&igrave;е &iacute;&agrave; п&icirc;ле 3', 'user_field3_name', 0),
	array('&Egrave;&igrave;е &iacute;&agrave; п&icirc;ле 4', 'user_field4_name', 0),

	'Р&agrave;зш&egrave;ре&iacute;&egrave; &iacute;&agrave;с&ograve;&icirc;р&eacute;&ecirc;&egrave; &iacute;&agrave; &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&egrave; &egrave; &igrave;&agrave;л&ecirc;&egrave; &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&egrave;',
	array('С&egrave;&igrave;&acirc;&icirc;л&egrave; з&agrave;&aacute;р&agrave;&iacute;е&iacute;&egrave; &acirc; &egrave;&igrave;е&ograve;&icirc; &iacute;&agrave; &ocirc;&agrave;&eacute;л&icirc;&acirc;е&ograve;е', 'forbiden_fname_char',0),
	array('&Icirc;&auml;&icirc;&aacute;ре&iacute;&egrave; &ocirc;&agrave;&eacute;л&icirc;&acirc;&egrave; р&agrave;зш&egrave;ре&iacute;&egrave;я з&agrave; &auml;&icirc;&aacute;&agrave;&acirc;е&iacute;&egrave; &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&egrave;', 'allowed_file_extensions',0),
	array('&Igrave;е&ograve;&icirc;&auml; &iacute;&agrave; ре&igrave;&agrave;&ugrave;&agrave;&aacute;&egrave;р&agrave;&iacute;е &iacute;&agrave; &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&egrave;&ograve;е','thumb_method',2),
	array('П&uacute;&ograve; &ecirc;&uacute;&igrave; ImageMagick \'&ecirc;&icirc;&iacute;&acirc;ер&ograve;&egrave;р&agrave;&ugrave;&agrave;\' пр&icirc;гр&agrave;&igrave;&agrave; (пр&egrave;&igrave;ер /usr/bin/X11/)', 'impath', 0),
	array('Р&agrave;зреше&iacute;&egrave; &ograve;&egrave;п&icirc;&acirc;е &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&egrave; (&acirc;&agrave;л&egrave;&auml;&iacute;&icirc; с&agrave;&igrave;&icirc; з&agrave; ImageMagick)', 'allowed_img_types',0),
	array('&Icirc;п&ouml;&egrave;&egrave; &icirc;&ograve; &ecirc;&icirc;&igrave;&agrave;&iacute;&auml;е&iacute; ре&auml; з&agrave; ImageMagick', 'im_options', 0),
	array('Че&ograve;&egrave; EXIF &egrave;&iacute;&ocirc;&icirc;р&igrave;&agrave;&ouml;&egrave;я &acirc; JPEG &ocirc;&agrave;&eacute;л&icirc;&acirc;е&ograve;е', 'read_exif_data', 1),
	array('&Agrave;л&aacute;&oacute;&igrave; &auml;&egrave;ре&ecirc;&ograve;&icirc;р&egrave;я <b>*</b>', 'fullpath', 0),
	array('&Auml;&egrave;ре&ecirc;&ograve;&icirc;р&egrave;я з&agrave; п&icirc;&ograve;ре&aacute;&egrave;&ograve;елс&ecirc;&egrave; &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&egrave; <b>*</b>', 'userpics', 0),
	array('Пре&ocirc;&egrave;&ecirc;с з&agrave; &igrave;еж&auml;&egrave;&iacute;&iacute;&egrave;&ograve;е &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&egrave; <b>*</b>', 'normal_pfx', 0),
	array('Пре&ocirc;&egrave;&ecirc;с з&agrave; &igrave;&agrave;л&ecirc;&egrave;&ograve;е &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&egrave; <b>*</b>', 'thumb_pfx', 0),
	array('&Agrave;&ograve;р&egrave;&aacute;&oacute;&ograve;&egrave; п&icirc; п&icirc;&auml;р&agrave;з&aacute;&egrave;р&agrave;&iacute;е &iacute;&agrave; &auml;&egrave;ре&ecirc;&ograve;&icirc;р&egrave;&eacute;&ograve;е', 'default_dir_mode', 0),
	array('&Agrave;&ograve;р&egrave;&aacute;&oacute;&ograve;&egrave; п&icirc; п&icirc;&auml;р&agrave;з&aacute;&egrave;р&agrave;&iacute;е &iacute;&agrave; &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&egrave;&ograve;е', 'default_file_mode', 0),

	'Cookies &amp; &Iacute;&agrave;с&ograve;р&icirc;&eacute;&ecirc;&egrave; &iacute;&agrave; е&iacute;&ecirc;&icirc;&auml;&egrave;&iacute;г&agrave;',
	array('&Egrave;&igrave;е &iacute;&agrave; cookie-&ograve;&icirc; &egrave;зп&icirc;лз&acirc;&agrave;&iacute;&icirc; &icirc;&ograve; с&ecirc;р&egrave;п&ograve;&agrave;', 'cookie_name', 0),
	array('П&uacute;&ograve; &iacute;&agrave; cookie-&ograve;&icirc; &egrave;зп&icirc;лз&acirc;&agrave;&iacute;&icirc; &ograve;&icirc; с&ecirc;р&egrave;п&ograve;&agrave;', 'cookie_path', 0),
	array('С&egrave;&igrave;&acirc;&icirc;ле&iacute; е&iacute;&ecirc;&icirc;&auml;&egrave;&iacute;г', 'charset', 4),

	'&Auml;&icirc;п&uacute;л&iacute;&egrave;&ograve;ел&iacute;&egrave; &iacute;&agrave;с&ograve;р&icirc;&eacute;&ecirc;&egrave;',
	array('&Acirc;&ecirc;люч&egrave; реж&egrave;&igrave;&agrave; &iacute;&agrave; &auml;е&aacute;&uacute;г&acirc;&agrave;&iacute;е', 'debug_mode', 1),

	'<br /><div align="center">(*) П&icirc;ле&ograve;&agrave;&ograve;&agrave; &igrave;&agrave;р&ecirc;&egrave;р&agrave;&iacute;&egrave; с&uacute;с с&egrave;&igrave;&acirc;&icirc;л&agrave; * &iacute;е &ograve;ря&iacute;&acirc;&agrave; &auml;&agrave; се пр&icirc;&igrave;е&iacute;я&ograve; &agrave;&ecirc;&icirc; &egrave;&igrave;&agrave;&ograve;е &Acirc;ЕЧЕ &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&egrave; &acirc; г&agrave;лер&egrave;я&ograve;&agrave;</div><br />'
);

// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
	'empty_name_or_com' => '&Ograve;ря&aacute;&acirc;&agrave; &auml;&agrave; &acirc;&uacute;&acirc;е&auml;е&ograve;е &acirc;&agrave;ше&ograve;&icirc; &egrave;&igrave;е &egrave; &ecirc;&icirc;&igrave;е&iacute;&ograve;&agrave;р',
	'com_added' => '&Acirc;&agrave;ш&egrave;я &ecirc;&icirc;&igrave;е&iacute;&ograve;&agrave;р е &auml;&icirc;&aacute;&agrave;&acirc;е&iacute;',
	'alb_need_title' => '&Ograve;ря&aacute;&acirc;&agrave; &auml;&agrave; &acirc;&uacute;&acirc;е&auml;е&ograve;е з&agrave;гл&agrave;&acirc;&egrave;е &iacute;&agrave; &agrave;л&aacute;&oacute;&igrave;&agrave; !',
	'no_udp_needed' => '&Iacute;я&igrave;&agrave; &iacute;&oacute;ж&auml;&agrave; &icirc;&ograve; &icirc;&aacute;&iacute;&icirc;&acirc;я&acirc;&agrave;&iacute;е.',
	'alb_updated' => '&Agrave;л&aacute;&oacute;&igrave;&agrave; е &icirc;&aacute;&iacute;&icirc;&acirc;е&iacute;',
	'unknown_album' => '&Egrave;з&aacute;р&agrave;&iacute;&egrave;я &agrave;л&aacute;&oacute;&igrave; &iacute;е с&uacute;&ugrave;ес&ograve;&acirc;&oacute;&acirc;&agrave; &egrave;л&egrave; &iacute;я&igrave;&agrave;ш &auml;&icirc;с&ograve;&uacute;п &auml;&icirc; &auml;&icirc;&aacute;&agrave;&acirc;я&iacute;е &iacute;&agrave; &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&egrave; &acirc; &ograve;&icirc;з&egrave; &agrave;л&aacute;&oacute;&igrave;',
	'no_pic_uploaded' => '&Ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&agrave;&ograve;&agrave; &iacute;е &aacute;еше &auml;&icirc;&aacute;&agrave;&acirc;е&iacute;&agrave; !<br /><br />&Agrave;&ecirc;&icirc; &iacute;&agrave;&egrave;с&ograve;&egrave;&iacute;&agrave; с&ograve;е &egrave;з&aacute;р&agrave;л&egrave; &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&agrave; з&agrave; &auml;&icirc;&aacute;&agrave;&acirc;я&iacute;е, пр&icirc;&acirc;ере&ograve;е &auml;&agrave;л&egrave; с&uacute;р&acirc;&uacute;р&agrave; п&icirc;з&acirc;&icirc;ля&acirc;&agrave; &ecirc;&agrave;ч&acirc;&agrave;&iacute;е &iacute;&agrave; &ocirc;&agrave;&eacute;л&icirc;&acirc;е...',
	'err_mkdir' => '&Iacute;е &igrave;&icirc;же &auml;&agrave; &aacute;&uacute;&auml;е с&uacute;з&auml;&agrave;&auml;е&iacute;&agrave; &auml;&egrave;ре&ecirc;&ograve;&icirc;р&egrave;я %s !',
	'dest_dir_ro' => '&Acirc; &auml;&egrave;ре&ecirc;&ograve;&icirc;р&egrave;я %s с&ecirc;р&egrave;п&ograve;&agrave; &iacute;е &igrave;&icirc;же &auml;&agrave; з&agrave;п&egrave;с&acirc;&agrave; !',
	'err_move' => '&Iacute;е&acirc;&uacute;з&igrave;&icirc;ж&iacute;&icirc; е пре&igrave;ес&ograve;&acirc;&agrave;&iacute;е&ograve;&icirc; &iacute;&agrave; %s &acirc; %s !',
	'err_fsize_too_large' => 'Р&agrave;з&igrave;ер&agrave; &iacute;&agrave; &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&agrave;&ograve;&agrave; &ecirc;&icirc;я&ograve;&icirc; &auml;&icirc;&aacute;&agrave;&acirc;я&ograve;е е &igrave;&iacute;&icirc;г&icirc; г&icirc;ля&igrave; (&igrave;&agrave;&ecirc;с&egrave;&igrave;&oacute;&igrave; р&agrave;зреше&iacute; р&agrave;з&igrave;ер е %s x %s) !',
	'err_imgsize_too_large' => 'Г&icirc;ле&igrave;&egrave;&iacute;&agrave;&ograve;&agrave; &iacute;&agrave; &ocirc;&agrave;&eacute;л&agrave; &ecirc;&icirc;&eacute;&ograve;&icirc; &auml;&icirc;&aacute;&agrave;&acirc;я&ograve;е е &igrave;&iacute;&icirc;г&icirc; г&icirc;ля&igrave; (&igrave;&agrave;&ecirc;с&egrave;&igrave;&agrave;л&iacute;&agrave;&ograve;&agrave; г&icirc;ле&igrave;&egrave;&iacute;&agrave; е %s KB) !',
	'err_invalid_img' => '&Ocirc;&agrave;&eacute;л&agrave;, &ecirc;&icirc;&eacute;&ograve;&icirc; &auml;&icirc;&aacute;&agrave;&acirc;я&ograve;е &iacute;е е &acirc;&agrave;л&egrave;&auml;&iacute;&agrave; &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&agrave; !',
	'allowed_img_types' => '&Igrave;&icirc;же &auml;&agrave; &auml;&icirc;&aacute;&agrave;&acirc;я&ograve;е с&agrave;&igrave;&icirc; %s &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&egrave;.',
	'err_insert_pic' => '&Ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&agrave;&ograve;&agrave; \'%s\' &iacute;е &igrave;&icirc;же &auml;&agrave; &aacute;&uacute;&auml;е &auml;&icirc;&aacute;&agrave;&acirc;е&iacute;&agrave; &acirc; &agrave;л&aacute;&oacute;&igrave;&agrave; ',
	'upload_success' => '&Acirc;&agrave;ш&agrave;&ograve;&agrave; &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&agrave; &aacute;еше &auml;&icirc;&aacute;&agrave;&acirc;е&iacute;&agrave; &oacute;спеш&iacute;&icirc;<br /><br />&Ograve;я &ugrave;е &aacute;&uacute;&auml;е &acirc;&egrave;&auml;&egrave;&igrave;&agrave; сле&auml; &icirc;&aacute;&icirc;&aacute;ре&iacute;&egrave;е&ograve;&icirc; &iacute;&agrave; &agrave;&auml;&igrave;&egrave;&iacute;&egrave;с&ograve;р&agrave;&ograve;&icirc;р&agrave;.',
	'info' => '&Egrave;&iacute;&ocirc;&icirc;р&igrave;&agrave;&ouml;&egrave;я',
	'com_added' => '&Ecirc;&icirc;&igrave;е&iacute;&ograve;&agrave;р&agrave; е &auml;&icirc;&aacute;&agrave;&acirc;е&iacute;',
	'alb_updated' => '&Agrave;л&aacute;&oacute;&igrave;&agrave; е &icirc;&aacute;&iacute;&icirc;&acirc;е&iacute;',
	'err_comment_empty' => '&Acirc;&agrave;ш&egrave;я &ecirc;&icirc;&igrave;е&iacute;&ograve;&agrave;р &acirc; пр&agrave;зе&iacute; !',
	'err_invalid_fext' => 'С&agrave;&igrave;&icirc; &ocirc;&agrave;&eacute;л&icirc;&acirc;е с&uacute;с сле&auml;&iacute;&egrave;&ograve;е р&agrave;зш&egrave;ре&iacute;&egrave;я се пр&egrave;е&igrave;&agrave;&ograve; : <br /><br />%s.',
	'no_flood' => 'С&uacute;ж&agrave;ля&acirc;&agrave;&igrave;е, &iacute;&icirc; &Acirc;&egrave;е с&ograve;е &agrave;&acirc;&ograve;&icirc;р&agrave; &iacute;&agrave; п&icirc;сле&auml;&iacute;&egrave;я &ecirc;&icirc;&igrave;е&iacute;&ograve;&agrave;р з&agrave; &ograve;&agrave;з&egrave; &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&agrave;.<br /><br />Ре&auml;&agrave;&ecirc;&ograve;&egrave;р&agrave;&eacute;&ograve;е &ecirc;&icirc;&igrave;е&ograve;&agrave;р&agrave;, &agrave;&ecirc;&icirc; &egrave;с&ecirc;&agrave;&ograve;е &auml;&agrave; &iacute;&agrave;пр&agrave;&acirc;&egrave;&ograve;е пр&icirc;&igrave;е&iacute;&egrave;',
	'redirect_msg' => '&Acirc;&egrave;е с&ograve;е пре&iacute;&agrave;с&icirc;че&iacute;&egrave;.<br /><br /><br />&Iacute;&agrave;&ograve;&egrave;с&iacute;е&ograve;е \'ПР&Icirc;&Auml;&Uacute;ЛЖЕ&Iacute;&Egrave;Е\' &agrave;&ecirc;&icirc; с&ograve;р&agrave;&iacute;&egrave;&ouml;&agrave;&ograve;&agrave; &iacute;е се &icirc;&aacute;&iacute;&icirc;&acirc;&egrave; &agrave;&acirc;&ograve;&icirc;&igrave;&agrave;&ograve;&egrave;ч&iacute;&icirc;',
	'upl_success' => '&Acirc;&agrave;ш&agrave;&ograve;&agrave; &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&agrave; е &auml;&icirc;&aacute;&agrave;&acirc;е&iacute;&agrave; &oacute;спеш&iacute;&icirc;',
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
	'caption' => 'З&agrave;гл&agrave;&acirc;&egrave;е',
	'fs_pic' => 'п&uacute;ле&iacute; р&agrave;з&igrave;ер &iacute;&agrave; &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&agrave;',
	'del_success' => '&egrave;з&ograve;р&egrave;&ograve;&agrave; &oacute;спеш&iacute;&icirc;',
	'ns_pic' => '&iacute;&icirc;р&igrave;&agrave;ле&iacute; р&agrave;з&igrave;ер &iacute;&agrave; &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&agrave;',
	'err_del' => '&iacute;е &igrave;&icirc;же &auml;&agrave; &aacute;&uacute;&auml;е &egrave;з&ograve;р&egrave;&ograve;&agrave;',
	'thumb_pic' => '&igrave;&agrave;л&ecirc;&agrave; &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&agrave;',
	'comment' => '&ecirc;&icirc;&igrave;е&iacute;&ograve;&agrave;р',
	'im_in_alb' => '&ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&agrave; &acirc; &agrave;л&aacute;&oacute;&igrave;',
	'alb_del_success' => '&Agrave;л&aacute;&oacute;&igrave;&uacute;&ograve; \'%s\' е &egrave;з&ograve;р&egrave;&ograve;',
	'alb_mgr' => '&Igrave;е&iacute;&agrave;жер &iacute;&agrave; &agrave;л&aacute;&oacute;&igrave;',
	'err_invalid_data' => '&Iacute;е&acirc;&agrave;л&egrave;&auml;&iacute;&agrave; &egrave;&iacute;&ocirc;&icirc;р&igrave;&agrave;&ouml;&egrave;я е п&icirc;л&oacute;че&iacute;&agrave; &acirc; \'%s\'',
	'create_alb' => 'С&uacute;з&auml;&agrave;&acirc;&agrave;&iacute;е &iacute;&agrave; &agrave;л&aacute;&oacute;&igrave; \'%s\'',
	'update_alb' => '&Icirc;&aacute;&iacute;&icirc;&acirc;я&acirc;&agrave;&iacute;е &iacute;&agrave; &agrave;л&aacute;&oacute;&igrave; \'%s\' с&uacute;с з&agrave;гл&agrave;&acirc;&egrave;е \'%s\' &egrave; &egrave;&iacute;&auml;е&ecirc;с \'%s\'',
	'del_pic' => '&Egrave;з&ograve;р&egrave;&eacute; &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&agrave;',
	'del_alb' => '&Egrave;з&ograve;р&egrave;&eacute; &agrave;л&aacute;&oacute;&igrave;',
	'del_user' => '&Egrave;з&ograve;р&egrave;&eacute; п&icirc;&ograve;ре&aacute;&egrave;&ograve;ел',
	'err_unknown_user' => '&Egrave;з&aacute;р&agrave;&iacute;&egrave;я п&icirc;&ograve;ре&aacute;&egrave;&ograve;ел &iacute;е с&uacute;&ugrave;ес&ograve;&acirc;&oacute;&acirc;&agrave; !',
	'comment_deleted' => '&Ecirc;&icirc;&igrave;е&iacute;&ograve;&agrave;р&agrave; е &egrave;з&ograve;р&egrave;&ograve; &oacute;спеш&iacute;&icirc;',
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
	'confirm_del' => 'С&egrave;г&oacute;ре&iacute; л&egrave; с&ograve;е, че &egrave;с&ecirc;&agrave;&ograve;е &auml;&agrave; &Egrave;З&Ograve;Р&Egrave;Е&Ograve;Е &ograve;&agrave;з&egrave; &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&agrave; ? \\n&Ecirc;&icirc;&igrave;е&iacute;&ograve;&agrave;р&egrave;&ograve;е &ecirc;&uacute;&igrave; &iacute;ея с&uacute;&ugrave;&icirc; &ugrave;е &aacute;&uacute;&auml;&agrave;&ograve; &egrave;з&ograve;р&egrave;&ograve;&egrave;.',
	'del_pic' => '&Egrave;З&Ograve;Р&Egrave;&Eacute; &Ograve;&Agrave;З&Egrave; &Ecirc;&Agrave;Р&Ograve;&Egrave;&Iacute;&Ecirc;&Agrave;',
	'size' => '%s x %s п&egrave;&ecirc;сел&agrave;',
	'views' => '%s п&uacute;&ograve;&egrave;',
	'slideshow' => 'Сл&agrave;&eacute;&auml; ш&icirc;&oacute;',
	'stop_slideshow' => 'СПР&Egrave; СЛ&Agrave;&Eacute;&Auml; Ш&Icirc;&Oacute;',
	'view_fs' => '&Ugrave;р&agrave;&ecirc;&iacute;е&ograve;е з&agrave; &auml;&agrave; &acirc;&egrave;&auml;&egrave;&ograve;е п&uacute;л&iacute;&agrave;&ograve;&agrave; г&icirc;ле&igrave;&egrave;&iacute;&agrave; &iacute;&agrave; &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&agrave;&ograve;&agrave;',
);

$lang_picinfo = array(
	'title' =>'&Egrave;&iacute;&ocirc;&icirc;р&igrave;&agrave;&ouml;&egrave;я з&agrave; &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&agrave;&ograve;&agrave;',
	'Filename' => '&Egrave;&igrave;е &iacute;&agrave; &ocirc;&agrave;&eacute;л&agrave;',
	'Album name' => '&Egrave;&igrave;е &iacute;&agrave; &agrave;л&aacute;&oacute;&igrave;&agrave;',
	'Rating' => 'Ре&eacute;&ograve;&egrave;&iacute;г (%s гл&agrave;с&icirc;&acirc;е)',
	'Keywords' => '&Ecirc;люч&icirc;&acirc;&egrave; &auml;&oacute;&igrave;&egrave;',
	'File Size' => 'Г&icirc;ле&igrave;&egrave;&iacute;&agrave; &iacute;&agrave; &ocirc;&agrave;&eacute;л&agrave;',
	'Dimensions' => 'Р&agrave;з&igrave;ер&egrave;',
	'Displayed' => 'П&icirc;&ecirc;&agrave;з&acirc;&agrave;&iacute;&egrave;я',
	'Camera' => '&Ecirc;&agrave;&igrave;ер&agrave;',
	'Date taken' => '&Auml;&agrave;&ograve;&agrave; &iacute;&agrave; з&agrave;с&iacute;е&igrave;&agrave;&iacute;е',
	'Aperture' => '&Agrave;пер&ograve;&oacute;р&agrave;',
	'Exposure time' => '&Acirc;ре&igrave;е &iacute;&agrave; &egrave;зл&agrave;г&agrave;&iacute;е',
	'Focal length' => '&Ocirc;&icirc;&ecirc;&oacute;с&iacute;&agrave; &auml;&uacute;лж&egrave;&iacute;&agrave;',
	'Comment' => '&Ecirc;&icirc;&igrave;е&iacute;&ograve;&agrave;р'
);

$lang_display_comments = array(
	'OK' => 'OK',
	'edit_title' => 'Ре&auml;&agrave;&ecirc;&ograve;&egrave;р&agrave;&eacute; &ograve;&icirc;з&egrave; &ecirc;&icirc;&igrave;е&iacute;&ograve;&agrave;р',
	'confirm_delete' => 'С&egrave;г&oacute;ре&iacute; л&egrave; с&ograve;е, че &egrave;с&ecirc;&agrave;&ograve;е &auml;&agrave; &egrave;з&ograve;р&egrave;е&ograve;е &ograve;&icirc;з&egrave; &ecirc;&icirc;&igrave;е&ograve;&agrave;р ?',
	'add_your_comment' => '&Auml;&icirc;&aacute;&agrave;&acirc;&egrave; &ecirc;&icirc;&igrave;е&iacute;&ograve;&agrave;р',
	'your_name' => '&Acirc;&agrave;ше&ograve;&icirc; &egrave;&igrave;е',
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
	'title' => '&Egrave;зпр&agrave;&ograve;&egrave; e-&ecirc;&agrave;р&ograve;&egrave;ч&ecirc;&agrave;',
	'invalid_email' => '<b>&Acirc;&iacute;&egrave;&igrave;&agrave;&iacute;&egrave;е</b> : &iacute;е&acirc;&agrave;л&egrave;&auml;е&iacute; e-mail &agrave;&auml;рес !',
	'ecard_title' => 'Е&auml;&iacute;&agrave; е-&ecirc;&agrave;р&ograve;&egrave;ч&ecirc;&agrave; &icirc;&ograve; %s з&agrave; &ograve;е&aacute;',
	'view_ecard' => '&Agrave;&ecirc;&icirc; е-&ecirc;&agrave;р&ograve;&egrave;ч&ecirc;&agrave; &iacute;е се п&icirc;&ecirc;&agrave;з&acirc;&agrave; &ecirc;&icirc;ре&ecirc;&ograve;&iacute;&icirc;, &igrave;&icirc;ля шр&agrave;&ecirc;&iacute;е&ograve;е &ograve;&icirc;з&agrave; &acirc;р&uacute;з&ecirc;&agrave;',
	'view_more_pics' => '&Ugrave;р&agrave;&ecirc;&iacute;е&ograve;е &iacute;&agrave; &ograve;&agrave;з&egrave; &acirc;р&uacute;з&ecirc;&agrave; з&agrave; &auml;&agrave; &acirc;&egrave;&auml;&egrave;&ograve;е &icirc;&ugrave;е &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&egrave; !',
	'send_success' => '&Acirc;&agrave;ш&agrave;&ograve;е е-&ecirc;&agrave;р&ograve;&egrave;ч&ecirc;&agrave; &aacute;еше &egrave;зпр&agrave;&ograve;е&iacute;&agrave;',
	'send_failed' => 'С&uacute;ж&agrave;ля&acirc;&agrave;&igrave;е, &iacute;&icirc; с&uacute;р&acirc;&uacute;р&agrave; &iacute;е &igrave;&icirc;же &auml;&agrave; &egrave;зпр&agrave;&ograve;&egrave; &Acirc;&agrave;ш&agrave;&ograve;&agrave; е-&ecirc;&agrave;р&ograve;&egrave;ч&ecirc;&agrave;...',
	'from' => '&Icirc;&ograve;',
	'your_name' => '&Acirc;&agrave;ше&ograve;&icirc; &egrave;&igrave;е',
	'your_email' => '&Acirc;&agrave;ш&egrave;я&ograve; e-mail &agrave;&auml;рес',
	'to' => 'З&agrave;',
	'rcpt_name' => '&Egrave;&igrave;е&ograve;&icirc; &iacute;&agrave; п&icirc;л&oacute;ч&agrave;&ograve;еля',
	'rcpt_email' => 'e-mail &agrave;&auml;рес &iacute;&agrave; п&icirc;л&oacute;ч&agrave;&ograve;еля',
	'greetings' => 'П&icirc;з&auml;р&agrave;&acirc;',
	'message' => 'С&uacute;&icirc;&aacute;&ugrave;е&iacute;&egrave;е',
);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
	'pic_info' => '&Egrave;&iacute;&ocirc;&icirc;р&igrave;&agrave;&ouml;&egrave;я з&agrave; &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&agrave;',
	'album' => '&Agrave;л&aacute;&oacute;&igrave;',
	'title' => 'З&agrave;гл&agrave;&acirc;&egrave;е',
	'desc' => '&Icirc;п&egrave;с&agrave;&iacute;&egrave;е',
	'keywords' => '&Ecirc;люч&icirc;&acirc;&egrave; &auml;&oacute;&igrave;&egrave;',
	'pic_info_str' => '%sx%s - %sKB - %s прегле&auml;&agrave; - %s гл&agrave;с&icirc;&acirc;е',
	'approve' => '&Icirc;&auml;&icirc;&aacute;р&egrave; &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&agrave;',
	'postpone_app' => '&Icirc;&ograve;ср&icirc;че&iacute;&icirc; &icirc;&auml;&icirc;&aacute;ре&iacute;&egrave;е',
	'del_pic' => '&Egrave;з&ograve;р&egrave;&eacute; &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&agrave;&ograve;&agrave;',
	'reset_view_count' => '&Iacute;&oacute;л&egrave;р&agrave;&eacute; &aacute;р&icirc;яч&agrave; &iacute;&agrave; прегле&auml;&egrave;',
	'reset_votes' => '&Iacute;&oacute;л&egrave;р&agrave;&eacute; гл&agrave;с&icirc;&acirc;е&ograve;е',
	'del_comm' => '&Egrave;з&ograve;р&egrave;&eacute; &ecirc;&icirc;&igrave;е&iacute;&ograve;&agrave;р&egrave;&ograve;е',
	'upl_approval' => '&Icirc;&auml;&icirc;&aacute;ре&iacute;&egrave;е &iacute;&agrave; &auml;&icirc;&aacute;&agrave;&acirc;я&iacute;е',
	'edit_pics' => 'Ре&auml;&agrave;&ecirc;&ograve;&egrave;р&agrave;&eacute; &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&egrave;',
	'see_next' => '&Acirc;&egrave;ж сле&auml;&acirc;&agrave;&ugrave;&egrave;&ograve;е &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&egrave;',
	'see_prev' => '&Acirc;&egrave;ж пре&auml;&egrave;ш&iacute;&egrave;&ograve;е &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&egrave;',
	'n_pic' => '%s &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&egrave;',
	'n_of_pic_to_disp' => '&Aacute;р&icirc;&eacute; &iacute;&agrave; &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&egrave; з&agrave; п&icirc;&ecirc;&agrave;з&acirc;&agrave;&iacute;е',
	'apply' => '&Auml;&icirc;&aacute;&agrave;&acirc;&egrave; &igrave;&icirc;&auml;&egrave;&ocirc;&egrave;&ecirc;&agrave;&ouml;&egrave;&eacute;&ograve;е'
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
	'group_name' => '&Egrave;&igrave;е &iacute;&agrave; гр&oacute;п&agrave;',
	'disk_quota' => '&Auml;&egrave;с&ecirc;&icirc;&acirc; л&egrave;&igrave;&egrave;&ograve;',
	'can_rate' => '&Igrave;&icirc;же &auml;&agrave; гл&agrave;с&oacute;&acirc;&agrave; з&agrave; &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&egrave;',
	'can_send_ecards' => '&Igrave;&icirc;же &auml;&agrave; &egrave;зпр&agrave;&ugrave;&agrave; е-&ecirc;&agrave;р&ograve;&egrave;ч&ecirc;&egrave;',
	'can_post_com' => '&Igrave;&icirc;же &auml;&agrave; &auml;&icirc;&aacute;&agrave;&acirc;я &ecirc;&icirc;&igrave;е&iacute;&ograve;&agrave;р&egrave;',
	'can_upload' => '&Igrave;&icirc;же &auml;&agrave; &auml;&icirc;&aacute;&agrave;&acirc;я &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&egrave;',
	'can_have_gallery' => '&Igrave;&icirc;же &auml;&agrave; &egrave;&igrave;&agrave; с&icirc;&aacute;с&ograve;&acirc;е&iacute;&agrave; г&agrave;лер&egrave;я',
	'apply' => '&Auml;&icirc;&aacute;&agrave;&acirc;&egrave; &igrave;&icirc;&auml;&egrave;&ocirc;&egrave;&ecirc;&agrave;&ouml;&egrave;&eacute;&ograve;е',
	'create_new_group' => 'С&uacute;з&auml;&agrave;&eacute; &iacute;&icirc;&acirc;&agrave; гр&oacute;п&agrave;',
	'del_groups' => '&Egrave;з&ograve;р&egrave;&eacute; &egrave;з&aacute;р&agrave;&iacute;&agrave;&ograve;&agrave; гр&oacute;п&agrave;(&egrave;)',
	'confirm_del' => '&Acirc;&iacute;&egrave;&igrave;&agrave;&iacute;&egrave;е, &ecirc;&icirc;г&agrave;&ograve;&icirc; &egrave;з&ograve;р&egrave;е&ograve;е гр&oacute;п&agrave;, п&icirc;&ograve;ре&aacute;&egrave;&ograve;ел&egrave;&ograve;е &ecirc;&icirc;&egrave;&ograve;&icirc; пр&egrave;&iacute;&agrave;&auml;леж&agrave;&ograve; &ecirc;&uacute;&igrave; &ograve;&agrave;з&egrave; гр&oacute;п&agrave; &ugrave;е &aacute;&uacute;&auml;&agrave; прех&acirc;&uacute;рле&iacute;&egrave; &acirc; гр&oacute;п&agrave; \'Registered\' !\n\n&Egrave;с&ecirc;&agrave;&ograve;е л&egrave; &auml;&agrave; пр&icirc;&auml;&uacute;лж&egrave;&ograve;е ?',
	'title' => '&Oacute;пр&agrave;&acirc;ле&iacute;&egrave;е &iacute;&agrave; п&icirc;&ograve;ре&aacute;&egrave;&ograve;елс&ecirc;&egrave;&ograve;е гр&oacute;п&egrave;',
	'approval_1' => '&Icirc;&auml;&icirc;&aacute;ре&iacute;&egrave;е П&oacute;&aacute;. &Auml;&icirc;&aacute;. (1)',
	'approval_2' => '&Icirc;&auml;&icirc;&aacute;ре&iacute;&egrave;е Ч&agrave;с&ograve;. &Auml;&icirc;&aacute;. (2)',
	'note1' => '<b>(1)</b> &Auml;&icirc;&aacute;&agrave;&acirc;я&iacute;е &acirc; п&oacute;&aacute;л&egrave;че&iacute; &agrave;л&aacute;&oacute;&igrave; &egrave;з&egrave;с&ecirc;&acirc;&agrave; &agrave;&auml;&igrave;&egrave;&iacute;&egrave;с&ograve;р&agrave;&ograve;&icirc;рс&ecirc;&icirc; &icirc;&auml;&icirc;&aacute;ре&iacute;&egrave;е',
	'note2' => '<b>(2)</b> &Auml;&icirc;&aacute;&agrave;&acirc;я&iacute;е &acirc; &agrave;л&aacute;&oacute;&igrave; &ecirc;&icirc;&eacute;&ograve;&icirc; е &iacute;&agrave; п&icirc;&ograve;ре&aacute;&egrave;&ograve;еля &egrave;з&egrave;с&ecirc;&acirc;&agrave; &agrave;&auml;&igrave;&egrave;&iacute;&egrave;с&ograve;р&agrave;&ograve;&icirc;рс&ecirc;&icirc; &icirc;&auml;&icirc;&aacute;ре&iacute;&egrave;е',
	'notes' => '&Aacute;ележ&ecirc;&egrave;'
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
	'welcome' => '&Auml;&icirc;&aacute;ре &auml;&icirc;шл&egrave; !'
);

$lang_album_admin_menu = array(
	'confirm_delete' => 'С&egrave;г&oacute;ре&iacute; л&egrave; с&ograve;е, че &egrave;с&ecirc;&agrave;&ograve;е &auml;&agrave; &Egrave;З&Ograve;Р&Egrave;Е&Ograve;Е &ograve;&icirc;з&egrave; &agrave;л&aacute;&oacute;&igrave; ? \\n&Acirc;с&egrave;ч&ecirc;&egrave; &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&egrave; &egrave; &ecirc;&icirc;&igrave;е&iacute;&ograve;&agrave;р&egrave; с&uacute;&ugrave;&icirc; &ugrave;е &aacute;&uacute;&auml;&agrave;&ograve; &egrave;з&ograve;р&egrave;&ograve;&egrave;.',
	'delete' => '&Egrave;З&Ograve;Р&Egrave;&Eacute;',
	'modify' => '&Iacute;&Agrave;С&Ograve;Р&Icirc;&Eacute;&Ecirc;&Egrave;',
	'edit_pics' => 'РЕ&Ecirc;&Auml;&Agrave;&Ecirc;&Ograve;&Egrave;Р&Agrave;&Eacute; &Ecirc;&Agrave;Р&Ograve;&Egrave;&Iacute;&Ecirc;&Egrave;',
);

$lang_list_categories = array(
	'home' => '&iacute;&agrave;ч&agrave;л&icirc;',
	'stat1' => '<b>[pictures]</b> &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&egrave; &acirc; <b>[albums]</b> &agrave;л&aacute;&oacute;&igrave;&agrave; &egrave; <b>[cat]</b> &ecirc;&agrave;&ograve;ег&icirc;р&egrave;&egrave; с <b>[comments]</b> &ecirc;&icirc;&igrave;е&iacute;&ograve;&agrave;р&agrave; прегле&auml;&agrave;&iacute;&egrave; <b>[views]</b> п&uacute;&ograve;&egrave;',
	'stat2' => '<b>[pictures]</b> &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&egrave; &acirc; <b>[albums]</b> &agrave;л&aacute;&oacute;&igrave;&agrave; прегле&auml;&agrave;&iacute;&egrave; <b>[views]</b> п&uacute;&ograve;&egrave;',
	'xx_s_gallery' => 'Г&agrave;рер&egrave;я &iacute;&agrave; %s\'',
	'stat3' => '<b>[pictures]</b> &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&egrave; &acirc; <b>[albums]</b> &agrave;л&aacute;&oacute;&igrave;&agrave; с <b>[comments]</b> &ecirc;&icirc;&igrave;е&iacute;&ograve;&agrave;р&agrave; прегле&auml;&agrave;&iacute;&egrave; <b>[views]</b> п&uacute;&ograve;&egrave;'
);

$lang_list_users = array(
	'user_list' => 'П&icirc;&ograve;ре&aacute;&egrave;&ograve;елс&ecirc;&agrave; л&egrave;с&ograve;&agrave;',
	'no_user_gal' => '&Iacute;я&igrave;&agrave; п&icirc;&ograve;ре&aacute;&egrave;&ograve;елс&ecirc;&egrave; г&agrave;лер&egrave;&egrave;',
	'n_albums' => '%s &agrave;л&aacute;&oacute;&igrave;(&egrave;)',
	'n_pics' => '%s &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&agrave;(&egrave;)'
);

$lang_list_albums = array(
	'n_pictures' => '%s &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&egrave;',
	'last_added' => ', п&icirc;сле&auml;&iacute;&icirc; &auml;&icirc;&aacute;&agrave;&acirc;е&iacute;&agrave; &iacute;&agrave; %s'
);

}

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
	'login' => '&Acirc;х&icirc;&auml;',
	'enter_login_pswd' => '&Acirc;&uacute;&acirc;е&auml;е&ograve;е п&icirc;&ograve;ре&aacute;&egrave;&ograve;елс&ecirc;&icirc; &egrave;&igrave;е &egrave; п&agrave;р&icirc;л&agrave;',
	'username' => 'П&icirc;&ograve;ре&aacute;&egrave;&ograve;ел',
	'password' => 'П&agrave;р&icirc;л&agrave;',
	'remember_me' => 'З&agrave;п&icirc;&igrave;&iacute;&egrave; &igrave;е',
	'welcome' => '&Auml;&icirc;&aacute;ре &auml;&icirc;ш&uacute;л %s ...',
	'err_login' => '*** &Iacute;е &igrave;&icirc;же &auml;&agrave; &acirc;лезе&ograve;е. &Icirc;п&egrave;&ograve;&agrave;&eacute;&ograve;е п&agrave;&ecirc;  ***',
	'err_already_logged_in' => '&Egrave;&igrave;&agrave; &acirc;&ecirc;люче&iacute; п&icirc;&ograve;ре&aacute;&egrave;&ograve;ел с &ograve;&icirc;&acirc;&agrave; &egrave;&igrave;е &egrave; п&agrave;р&icirc;л&agrave; !',
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
	'logout' => '&Egrave;зх&icirc;&auml;',
	'bye' => '&Auml;&icirc;&acirc;&egrave;ж&auml;&agrave;&iacute;е %s ...',
	'err_not_loged_in' => '&Acirc;&egrave;е &iacute;е с&ograve;е &acirc;&ecirc;люче&iacute; !',
);

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
	'upd_alb_n' => '&Icirc;&aacute;&iacute;&icirc;&acirc;&egrave; &agrave;л&aacute;&oacute;&igrave; %s',
	'general_settings' => 'Гл&agrave;&acirc;&iacute;&egrave; &iacute;&agrave;с&ograve;р&icirc;&eacute;&ecirc;&egrave;',
	'alb_title' => 'З&agrave;гл&agrave;&acirc;&egrave;е &iacute;&agrave; &agrave;л&aacute;&oacute;&igrave;&agrave;',
	'alb_cat' => '&Ecirc;&agrave;&ograve;ег&icirc;р&egrave;я &iacute;&agrave; &agrave;л&aacute;&oacute;&igrave;&agrave;',
	'alb_desc' => '&Icirc;п&egrave;с&agrave;&iacute;&egrave;е &iacute;&agrave; &agrave;л&aacute;&oacute;&igrave;&agrave;',
	'alb_thumb' => '&Igrave;&agrave;л&ecirc;&agrave; &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&agrave; &iacute;&agrave; &agrave;л&aacute;&oacute;&igrave;&agrave;',
	'alb_perm' => 'Р&agrave;зреше&iacute;&egrave;я з&agrave; &ograve;&icirc;з&egrave; &agrave;л&aacute;&oacute;&igrave;',
	'can_view' => '&Agrave;л&aacute;&oacute;&igrave;&agrave; &igrave;&icirc;же &auml;&agrave; се &acirc;&egrave;&auml;&egrave; &icirc;&ograve;',
	'can_upload' => 'П&icirc;се&ograve;&egrave;&ograve;ел&egrave;&ograve;е &igrave;&icirc;же &auml;&agrave; &auml;&icirc;&aacute;&agrave;&acirc;я&ograve; &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&egrave;',
	'can_post_comments' => 'П&icirc;се&ograve;&egrave;&ograve;ел&egrave;&ograve;е &igrave;&icirc;же &auml;&agrave; &auml;&icirc;&aacute;&agrave;&acirc;я&ograve; &ecirc;&icirc;&igrave;е&iacute;&ograve;&agrave;р&egrave;',
	'can_rate' => 'П&icirc;се&ograve;&egrave;&ograve;ел&egrave;&ograve;е &igrave;&icirc;же &auml;&agrave; гл&agrave;с&oacute;&acirc;&agrave;&ograve; з&agrave; &ecirc;&agrave;&ograve;&egrave;&iacute;&ecirc;&egrave;',
	'user_gal' => 'П&icirc;&ograve;ре&aacute;&egrave;&ograve;елс&ecirc;&egrave; г&agrave;лер&egrave;&egrave;',
	'no_cat' => '* &Iacute;&agrave;&igrave;&agrave; &ecirc;&agrave;&ograve;ег&icirc;р&egrave;я *',
	'alb_empty' => '&Agrave;л&aacute;&oacute;&igrave;&agrave; е пр&agrave;зе&iacute;',
	'last_uploaded' => 'П&icirc;сле&auml;&iacute;&icirc; &auml;&icirc;&aacute;&agrave;&acirc;е&iacute;&egrave;',
	'public_alb' => '&Acirc;се&ecirc;&egrave; (п&oacute;&aacute;л&egrave;че&iacute; &agrave;л&aacute;&oacute;&igrave;)',
	'me_only' => 'С&agrave;&igrave;&icirc; &Agrave;З',
	'owner_only' => 'С&icirc;&aacute;с&ograve;&acirc;е&iacute;&egrave;&ecirc;&agrave; (%s) &iacute;&agrave; &agrave;л&aacute;&oacute;&igrave;&agrave; с&agrave;&igrave;&icirc;',
	'groupp_only' => 'П&icirc;&ograve;ре&aacute;&egrave;&ograve;ел&egrave; &icirc;&ograve; \'%s\' гр&oacute;п&agrave;',
	'err_no_alb_to_modify' => '&Iacute;я&igrave;&agrave; &agrave;л&aacute;&oacute;&igrave;&egrave; &ecirc;&icirc;&egrave;&ograve;&icirc; &igrave;&icirc;же &auml;&agrave; &igrave;&icirc;&auml;&egrave;&ocirc;&egrave;&ouml;&egrave;р&agrave;&ograve;е.',
	'update' => '&Icirc;&aacute;&iacute;&icirc;&acirc;&egrave; &agrave;л&aacute;&oacute;&igrave;&agrave;'
);

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
	'already_rated' => 'С&uacute;ж&agrave;ля&acirc;&agrave;&igrave;е, &iacute;&icirc; с&ograve;е гл&agrave;с&oacute;&acirc;&agrave;л&egrave; &acirc;ече з&agrave; &ograve;&agrave;з&egrave; &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&agrave;',
	'rate_ok' => '&Acirc;&agrave;ше&ograve;&icirc; гл&agrave;с&oacute;&acirc;&agrave;&iacute;е е пр&egrave;е&ograve;&icirc;',
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
&Agrave;&auml;&igrave;&egrave;&iacute;&egrave;с&ograve;р&agrave;&ograve;&icirc;р&agrave; &iacute;&agrave; <b>{SITE_NAME}</b> &ugrave;е се &icirc;п&egrave;&ograve;&agrave; &auml;&agrave; пре&igrave;&agrave;х&iacute;е &egrave;л&egrave; ре&auml;&agrave;&ecirc;&ograve;&egrave;р&agrave; &acirc;се&ecirc;&egrave; &iacute;ежел&agrave;&iacute; &igrave;&agrave;&ograve;ер&egrave;&agrave;л &acirc;&uacute;з&igrave;&icirc;ж&iacute;&icirc; &iacute;&agrave;&eacute;-&aacute;&uacute;рз&icirc; (п&icirc;&iacute;еже &iacute;е &igrave;&icirc;же &auml;&agrave; се преглеж&auml;&agrave; &acirc;ся&ecirc;&icirc; &auml;&icirc;&aacute;&agrave;&acirc;я&iacute;е), &Acirc;&egrave;е се с&uacute;гл&agrave;ся&acirc;&agrave;&ograve;е, че &acirc;с&egrave;ч&ecirc;&egrave; &auml;&icirc;&aacute;&agrave;&acirc;я&iacute;&egrave;я &iacute;&agrave; &ograve;&icirc;з&egrave; с&agrave;&eacute;&ograve; &egrave;зр&agrave;зя&acirc;&agrave;&ograve; &acirc;&uacute;згле&auml;&egrave;&ograve;е &egrave; &igrave;&iacute;е&iacute;&egrave;е&ograve;&icirc; &iacute;&agrave; &agrave;&acirc;&ograve;&icirc;р&agrave;, &agrave; &iacute;е &iacute;&agrave; &agrave;&auml;&igrave;&egrave;&iacute;&egrave;с&ograve;р&agrave;&ograve;&icirc;р&agrave; &egrave; &oacute;е&aacute;&igrave;&agrave;с&ograve;ер (с &egrave;з&ecirc;люче&iacute;&egrave;е &iacute;&agrave; &iacute;е&ugrave;&agrave; &auml;&icirc;&aacute;&agrave;&acirc;е&iacute;&egrave; &icirc;&ograve; &ograve;ях) &egrave; сле&auml;&icirc;&acirc;&agrave;&ograve;ел&iacute;&icirc; &iacute;я&igrave;&agrave; &auml;&agrave; &aacute;&uacute;&auml;&agrave;&ograve; &icirc;&ograve;&acirc;е&ograve;&iacute;&egrave; л&egrave;&ouml;&agrave;.<br />
<br />
&Acirc;&egrave;е се с&uacute;гл&agrave;ся&acirc;&agrave;&ograve;е &auml;&agrave; &iacute;е &auml;&icirc;&aacute;&agrave;&acirc;я&ograve;е &icirc;с&ecirc;&uacute;р&aacute;&egrave;&ograve;ел&iacute;&egrave;, &iacute;епр&egrave;с&ograve;&icirc;&eacute;&iacute;&egrave;, &ecirc;ле&acirc;е&ograve;&iacute;&egrave;чес&ecirc;&egrave;, &iacute;е&iacute;&agrave;&acirc;&egrave;с&ograve;&iacute;&egrave;, з&agrave;пл&agrave;ш&egrave;&ograve;ел&iacute;&egrave;, се&ecirc;с&oacute;&agrave;л&iacute;&icirc;-&icirc;р&egrave;е&iacute;&ograve;&egrave;р&agrave;&iacute;&egrave; &egrave;л&egrave; &ecirc;&agrave;&ecirc;&acirc;&egrave;&ograve;&icirc; &egrave; &auml;&agrave; е &auml;р&oacute;г&egrave; &igrave;&agrave;&ograve;ер&egrave;&agrave;л&egrave; &ecirc;&icirc;&egrave;&ograve;&icirc; &iacute;&agrave;р&oacute;ш&agrave;&acirc;&agrave;&ograve; &acirc;ся&ecirc;&agrave;&acirc;&egrave; пр&egrave;л&icirc;ж&egrave;&igrave;&egrave; з&agrave;&ecirc;&icirc;&iacute;&egrave;. &Acirc;&egrave;е се с&uacute;гл&agrave;ся&acirc;&agrave;&ograve;е, че &oacute;е&aacute;&igrave;&agrave;с&ograve;ер&agrave;, &agrave;&auml;&igrave;&egrave;&iacute;&egrave;с&ograve;р&agrave;&ograve;&icirc;р&agrave; &egrave; &igrave;&icirc;&auml;ер&agrave;&ograve;&icirc;р&egrave;&ograve;е &iacute;&agrave; <b>{SITE_NAME}</b> &egrave;&igrave;&agrave;&ograve; пр&agrave;&acirc;&icirc; &auml;&agrave; пре&igrave;&agrave;х&iacute;&agrave;&ograve; &egrave;л&egrave; ре&auml;&agrave;&ecirc;&ograve;&egrave;р&agrave;&ograve; п&icirc; &acirc;ся&ecirc;&icirc; &acirc;ре&igrave;е, &acirc;ся&ecirc;&icirc; с&uacute;&auml;&uacute;рж&agrave;&iacute;&egrave;е. &Ecirc;&agrave;&ograve;&icirc; п&icirc;&ograve;ре&aacute;&egrave;&ograve;ел &Acirc;&egrave;е се с&uacute;гл&agrave;ся&acirc;&agrave;&ograve;е, че &acirc;я&ecirc;&agrave; &egrave;&iacute;&ocirc;&icirc;р&igrave;&agrave;&ouml;&egrave;я &acirc;&uacute;&acirc;е&auml;е&iacute;&agrave; &icirc;&ograve; &Acirc;&agrave;с, &ugrave;е &aacute;&uacute;&auml;е з&agrave;п&egrave;с&agrave;&iacute;&agrave; &acirc; &aacute;&agrave;з&agrave; &auml;&agrave;&iacute;&iacute;&egrave;. &Ograve;&agrave;з&egrave; &egrave;&iacute;&ocirc;&icirc;р&igrave;&agrave;&ouml;&egrave;я &iacute;я&igrave;&agrave; &auml;&agrave; &aacute;&uacute;&auml;е р&agrave;з&ecirc;р&egrave;&acirc;&agrave;&iacute;&agrave; &iacute;&agrave; &ograve;ре&ograve;&egrave; л&egrave;&ouml;&agrave; &aacute;ез &Acirc;&agrave;ше&ograve;&icirc; с&uacute;гл&agrave;с&egrave;е. &Oacute;е&aacute;&igrave;&agrave;с&ograve;ер&agrave; &egrave; &agrave;&auml;&igrave;&egrave;&iacute;&egrave;с&ograve;р&agrave;&ograve;&icirc;р&agrave; &iacute;е &iacute;&icirc;ся&ograve; &icirc;&ograve;г&icirc;&acirc;&icirc;р&iacute;&icirc;с&ograve; з&agrave; &icirc;п&egrave;&ograve;(&egrave;) з&agrave; х&agrave;&ecirc;&acirc;&agrave;&iacute;е, &ecirc;&icirc;&egrave;&ograve;&icirc; &igrave;&icirc;г&agrave;&ograve; &auml;&agrave; &auml;&icirc;&acirc;е&auml;&agrave;&ograve; &auml;&icirc; &ecirc;&icirc;&igrave;пр&icirc;&igrave;е&ograve;&egrave;р&agrave;&iacute;е &iacute;&agrave; &auml;&agrave;&iacute;&iacute;&egrave;.<br />
<br />
&Ograve;&icirc;з&egrave; с&agrave;&eacute;&ograve; &egrave;зп&icirc;лз&acirc;&agrave; 'cookies' з&agrave; &auml;&agrave; з&agrave;п&agrave;з&egrave; &egrave;&iacute;&ocirc;&icirc;р&igrave;&agrave;&ouml;&egrave;я &iacute;&agrave; &Acirc;&agrave;ш&egrave;я л&icirc;&ecirc;&agrave;ле&iacute; &ecirc;&icirc;&igrave;пю&ograve;&uacute;р. &Ograve;ез&egrave; 'cookies' сл&oacute;ж&agrave;&ograve; с&agrave;&igrave;&icirc; з&agrave; п&icirc;&auml;&icirc;&aacute;ре&iacute;&egrave;е &iacute;&agrave; прегле&auml;&agrave; &iacute;&agrave; с&agrave;&eacute;&ograve;&agrave;. &Acirc;&agrave;ш&egrave;я&ograve; е-&igrave;е&eacute;л &agrave;&auml;рес се &egrave;зп&icirc;лз&acirc;&agrave; с&agrave;&igrave;&icirc; з&agrave; &auml;&agrave; п&icirc;л&oacute;ч&egrave;&ograve;е п&icirc;&ograve;&acirc;&uacute;рж&auml;&agrave;&acirc;&agrave;&ugrave;&icirc; п&egrave;с&igrave;&icirc; с рег&egrave;с&ograve;р&agrave;&ouml;&egrave;&icirc;&iacute;&iacute;&egrave; &auml;е&ograve;&agrave;&eacute;л&egrave; &egrave; п&agrave;&acirc;&icirc;л&agrave;.<br>
С &iacute;&agrave;&ograve;&egrave;с&ecirc;&agrave;&iacute;е &iacute;&agrave; 'С&uacute;гл&agrave;се&iacute; с&uacute;&igrave;' &Acirc;&egrave;е се с&uacute;гл&agrave;ся&acirc;&agrave;&ograve;е с &acirc;с&egrave;ч&ecirc;&egrave; &egrave;з&aacute;р&icirc;е&iacute;&egrave; &oacute;сл&icirc;&acirc;&egrave;я.
EOT;

$lang_register_php = array(
	'page_title' => 'П&icirc;&ograve;ре&aacute;&egrave;&ograve;елс&ecirc;&agrave; рег&egrave;с&ograve;р&agrave;&ouml;&egrave;я',
	'term_cond' => '&Oacute;сл&icirc;&acirc;&egrave;я &egrave; &ograve;ер&igrave;&egrave;&iacute;&egrave;',
	'i_agree' => 'С&uacute;гл&agrave;се&iacute; с&uacute;&igrave;',
	'submit' => 'Пр&icirc;&auml;&uacute;лж&egrave; рег&egrave;с&ograve;р&agrave;&ouml;&egrave;я&ograve;&agrave;',
	'err_user_exists' => 'П&icirc;&ograve;ре&aacute;&egrave;&ograve;елс&ecirc;&icirc;&ograve;&icirc; &egrave;&igrave;е &ecirc;&icirc;е&ograve;&icirc; с&ograve;е &iacute;&agrave;п&egrave;с&agrave;л&egrave;, &acirc;ече е з&agrave;е&ograve;&icirc;. &Igrave;&icirc;ля &egrave;з&aacute;ере&ograve;е &auml;р&oacute;г&icirc;',
	'err_password_mismatch' => '&Auml;&acirc;е&ograve;е п&agrave;р&icirc;л&egrave; &iacute;е с&uacute;&acirc;п&agrave;&auml;&agrave;&ograve;. &Igrave;&icirc;ля п&icirc;п&uacute;л&iacute;е&ograve;е г&egrave; &icirc;&ograve;&iacute;&icirc;&acirc;&icirc;',
	'err_uname_short' => 'П&icirc;&ograve;ре&aacute;&egrave;&ograve;елс&ecirc;&icirc;&ograve;&icirc; &egrave;&igrave;е &ograve;ря&aacute;&acirc;&agrave; &auml;&agrave; е п&icirc;&iacute;е 2 с&egrave;&igrave;&acirc;&icirc;л&agrave;',
	'err_password_short' => 'П&agrave;р&icirc;л&agrave;&ograve;&agrave; &ograve;ря&aacute;&acirc;&agrave; &auml;&agrave; е п&icirc;&iacute;е 2 с&egrave;&igrave;&acirc;&icirc;л&agrave;',
	'err_uname_pass_diff' => 'П&icirc;&ograve;ре&aacute;&egrave;&ograve;елс&ecirc;&icirc;&ograve;&icirc; &egrave;&igrave;е &egrave; п&agrave;р&icirc;л&agrave; &ograve;ря&aacute;&acirc;&agrave; &auml;&agrave; с&agrave; р&agrave;зл&egrave;ч&iacute;&egrave;',
	'err_invalid_email' => 'E-mail &agrave;&auml;рес&agrave; &iacute;е е &acirc;&agrave;л&egrave;&auml;е&iacute;',
	'err_duplicate_email' => '&Auml;р&oacute;г п&icirc;&ograve;ре&aacute;&egrave;&ograve;ел &acirc;ече е рег&egrave;с&ograve;р&egrave;р&agrave;&iacute; с &ograve;&icirc;з&egrave; е-&igrave;е&eacute;л &agrave;&auml;рес',
	'enter_info' => '&Acirc;&uacute;&acirc;е&auml;е&ograve;е рег&egrave;с&ograve;р&agrave;&ouml;&egrave;&icirc;&iacute;&iacute;&agrave;&ograve;&agrave; &egrave;&iacute;&ocirc;&icirc;р&igrave;&agrave;&ouml;&egrave;я',
	'required_info' => '&Egrave;з&egrave;с&ecirc;&acirc;&agrave;&iacute;&agrave; &egrave;&iacute;&ocirc;&icirc;р&igrave;&agrave;&ouml;&egrave;я',
	'optional_info' => '&Icirc;п&ouml;&egrave;&icirc;&iacute;&agrave;л&iacute;&agrave; &egrave;&iacute;&ocirc;&icirc;р&igrave;&agrave;&ouml;&egrave;я',
	'username' => 'П&icirc;&ograve;ре&aacute;&egrave;&ograve;ел',
	'password' => 'П&agrave;р&icirc;л&agrave;',
	'password_again' => 'П&agrave;р&icirc;л&agrave; &icirc;&ograve;&iacute;&icirc;&acirc;&icirc;',
	'email' => 'E-&igrave;е&eacute;л',
	'location' => '&Igrave;ес&ograve;&icirc;&iacute;&agrave;х&icirc;ж&auml;е&iacute;&egrave;е',
	'interests' => '&Egrave;&iacute;&ograve;ерес&egrave;',
	'website' => 'Л&egrave;ч&iacute;&agrave; с&ograve;р&agrave;&iacute;&egrave;&ouml;&agrave;',
	'occupation' => 'З&agrave;&iacute;&egrave;&igrave;&agrave;&iacute;&egrave;е',
	'error' => 'ГРЕПШ&Ecirc;&Agrave;',
	'confirm_email_subject' => '%s - П&icirc;&ograve;&acirc;&uacute;рж&auml;е&iacute;&egrave;е &iacute;&agrave; рег&egrave;с&ograve;р&agrave;&ouml;&egrave;я&ograve;&agrave;',
	'information' => '&Egrave;&iacute;&ocirc;&icirc;р&igrave;&agrave;&ouml;&egrave;я',
	'failed_sending_email' => 'П&icirc;&ograve;&acirc;&uacute;рж&auml;е&iacute;&egrave;е&ograve;&icirc; &iacute;&agrave; рег&egrave;с&ograve;р&agrave;&ouml;&egrave;я&ograve;&agrave; &iacute;е &igrave;&icirc;же &auml;&agrave; &aacute;&uacute;&auml;е &egrave;зпр&agrave;&ograve;е&iacute;&icirc; !',
	'thank_you' => '&Aacute;л&agrave;г&icirc;&auml;&agrave;ря з&agrave; рег&egrave;с&ograve;р&agrave;&ouml;&egrave;я&ograve;&agrave;.<br /><br />Е-&igrave;е&eacute;л с &egrave;&iacute;&ocirc;&icirc;р&igrave;&agrave;&ouml;&egrave;я &ecirc;&agrave;&ecirc; &auml;&agrave; &agrave;&ecirc;&ograve;&egrave;&acirc;&egrave;р&agrave;&ograve;е &Acirc;&agrave;ш&egrave;я п&icirc;&ograve;ре&aacute;&egrave;&ograve;ел е &egrave;зпр&agrave;&ograve;е&iacute; &iacute;&agrave; &agrave;&auml;рес&agrave; &ecirc;&icirc;&eacute;&ograve;&icirc; &acirc;&uacute;&acirc;е&auml;&icirc;х&ograve;е.',
	'acct_created' => '&Acirc;&agrave;ш&egrave;я&ograve; п&icirc;&ograve;ре&aacute;&egrave;&ograve;ел &aacute;еше с&uacute;з&auml;&agrave;&auml;е&iacute; &egrave; &igrave;&icirc;же &auml;&agrave; се &acirc;&ecirc;люч&egrave;&ograve;е с п&icirc;&ograve;ре&aacute;&egrave;&ograve;ел &egrave; п&agrave;р&icirc;л&agrave;',
	'acct_active' => '&Acirc;&agrave;ш&egrave;я&ograve; п&icirc;&ograve;ре&aacute;&egrave;&ograve;ел &aacute;еше &agrave;&ecirc;&ograve;&egrave;&acirc;&egrave;р&agrave;&iacute; &egrave; &igrave;&icirc;же &auml;&agrave; се &acirc;&ecirc;люч&egrave;&ograve;е с п&icirc;&ograve;ре&aacute;&egrave;&ograve;ел &egrave; п&agrave;р&icirc;л&agrave;',
	'acct_already_act' => '&Acirc;&agrave;ш&egrave;я&ograve; п&icirc;&ograve;ре&aacute;&egrave;&ograve;ел е &acirc;ече &agrave;&ecirc;&ograve;&egrave;&acirc;е&iacute; !',
	'acct_act_failed' => '&Ograve;&icirc;з&egrave; п&icirc;&ograve;ре&aacute;&egrave;&ograve;ел &iacute;е &igrave;&icirc;же &auml;&agrave; &aacute;&uacute;&auml;е &agrave;&ecirc;&ograve;&egrave;&acirc;&egrave;р&agrave;&iacute; !',
	'err_unk_user' => '&Egrave;з&aacute;р&agrave;&iacute;&egrave;я п&icirc;&ograve;ре&aacute;&egrave;&ograve;ел &iacute;е с&uacute;&ugrave;ес&ograve;&acirc;&oacute;&acirc;&agrave; !',
	'x_s_profile' => 'Пр&icirc;&ocirc;&egrave;л &iacute;&agrave; %s\'',
	'group' => 'Гр&oacute;п&agrave;',
	'reg_date' => '&Auml;&agrave;&ograve;&agrave; &iacute;&agrave; рег&egrave;с&ograve;р&agrave;&ouml;&egrave;я',
	'disk_usage' => 'П&icirc;&ograve;ре&aacute;ле&iacute;&egrave;е &iacute;&agrave; &auml;&egrave;с&ecirc;&agrave;',
	'change_pass' => 'С&igrave;е&iacute;&egrave; п&agrave;р&icirc;л&agrave;',
	'current_pass' => '&Ograve;е&ecirc;&oacute;&ugrave;&agrave; п&agrave;р&icirc;л&agrave;',
	'new_pass' => '&Iacute;&icirc;&acirc;&agrave; п&agrave;р&icirc;л&agrave;',
	'new_pass_again' => '&Iacute;&icirc;&acirc;&agrave; п&agrave;р&icirc;л&agrave; &icirc;&ograve;&iacute;&icirc;&acirc;&icirc;',
	'err_curr_pass' => '&Ograve;е&ecirc;&oacute;&ugrave;&agrave;&ograve;&agrave; п&agrave;р&icirc;ля &iacute;е е &acirc;яр&iacute;&agrave;',
	'apply_modif' => '&Auml;&icirc;&aacute;&agrave;&acirc;&egrave; &igrave;&icirc;&auml;&egrave;&ocirc;&egrave;&ecirc;&agrave;&ouml;&egrave;&eacute;&ograve;е',
	'change_pass' => 'С&igrave;е&iacute;&egrave; &igrave;&icirc;я&ograve;&agrave; п&agrave;р&icirc;л&agrave;',
	'update_success' => '&Acirc;&agrave;ш&egrave;я&ograve; пр&icirc;&ocirc;&egrave;л е &icirc;&aacute;&iacute;&icirc;&acirc;е&iacute;',
	'pass_chg_success' => '&Acirc;&agrave;ш&agrave;&ograve;&agrave; п&agrave;р&icirc;л&agrave; е пр&icirc;&igrave;е&iacute;е&iacute;&agrave;',
	'pass_chg_error' => '&Acirc;&agrave;ш&agrave;&ograve;&agrave; п&agrave;р&icirc;л&agrave; &Iacute;Е е пр&icirc;&igrave;е&iacute;е&iacute;&agrave;',
);

$lang_register_confirm_email = <<<EOT
&Aacute;л&agrave;г&icirc;&auml;&agrave;р&egrave;&igrave; &Acirc;&egrave; з&agrave; рег&egrave;с&ograve;р&agrave;&ouml;&egrave;я &acirc; {SITE_NAME}

П&icirc;&ograve;ре&aacute;&egrave;&ograve;ел : "{USER_NAME}"
П&agrave;р&icirc;л&agrave; : "{PASSWORD}"

З&agrave; &agrave;&ecirc;&ograve;&egrave;&acirc;&egrave;р&agrave;&iacute;е &iacute;&agrave; &Acirc;&agrave;ш&egrave;я п&icirc;&ograve;ре&aacute;&egrave;&ograve;ел, &iacute;&agrave;&ograve;&egrave;с&iacute;е&ograve;е &acirc;р&uacute;з&ecirc;&agrave;&ograve;&agrave; п&icirc;-&auml;&icirc;л&oacute;
&egrave;л&egrave; &ecirc;&icirc;п&egrave;р&agrave;&eacute;&ograve;е &agrave;&auml;рес&agrave; &acirc; &oacute;е&aacute; &aacute;р&icirc;&oacute;зер.

{ACT_LINK}

С &oacute;&acirc;&agrave;же&iacute;&egrave;е,

&Agrave;&auml;&igrave;&egrave;&iacute;&egrave;с&ograve;р&agrave;&ouml;&egrave;я &iacute;&agrave;  {SITE_NAME}

EOT;

}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
	'title' => 'Прегле&auml; &iacute;&agrave; &ecirc;&icirc;&igrave;е&iacute;&ograve;&agrave;р&egrave;',
	'no_comment' => '&Iacute;я&igrave;&agrave; &ecirc;&icirc;&igrave;е&iacute;&ograve;&agrave;р з&agrave; прегле&auml;',
	'n_comm_del' => '%s &ecirc;&icirc;&igrave;е&iacute;&ograve;&agrave;р(&egrave;) &egrave;з&ograve;р&egrave;&ograve;(&egrave;)',
	'n_comm_disp' => '&Aacute;р&icirc;&eacute; &iacute;&agrave; п&icirc;&ecirc;&agrave;з&acirc;&agrave;&iacute;&egrave; &ecirc;&icirc;&igrave;е&iacute;&ograve;&agrave;р&egrave;',
	'see_prev' => '&Acirc;&egrave;ж пре&auml;&egrave;ше&iacute;',
	'see_next' => '&Acirc;&egrave;ж сле&auml;&acirc;&agrave;&ugrave;',
	'del_comm' => '&Egrave;з&ograve;р&egrave;&eacute; &egrave;з&aacute;р&agrave;&iacute;&egrave;&ograve;е &ecirc;&icirc;&igrave;е&iacute;&ograve;&agrave;р&egrave;',
);


// ------------------------------------------------------------------------- //
// File search.php - OK
// ------------------------------------------------------------------------- //

if (defined('SEARCH_PHP')) $lang_search_php = array(
	0 => '&Ograve;&uacute;рсе&iacute;е &acirc; &ecirc;&icirc;ле&ecirc;&ouml;&egrave;&egrave;&ograve;е &icirc;&ograve; &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&egrave;',
);

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
	'page_title' => '&Ograve;&uacute;рсе&iacute;е &iacute;&agrave; &iacute;&icirc;&acirc;&egrave; &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&egrave;',
	'select_dir' => '&Egrave;з&aacute;ер&egrave; п&agrave;п&ecirc;&agrave;',
	'select_dir_msg' => '&Ograve;&agrave;з&egrave; &ocirc;&oacute;&iacute;&ecirc;&ouml;&egrave;я п&icirc;з&acirc;&icirc;ля&acirc;&agrave; &auml;&agrave; &auml;&icirc;&aacute;&agrave;&acirc;я&ograve;е гр&oacute;п&agrave; &icirc;&ograve; &ecirc;&agrave;р&egrave;&iacute;&ecirc;&egrave; &ecirc;&agrave;че&iacute;&egrave; &iacute;&agrave; с&uacute;р&acirc;&uacute;р&agrave;.<br /><br />&Egrave;з&aacute;ере&ograve;е п&agrave;п&ecirc;&agrave; &ecirc;&uacute;&auml;е&ograve;&icirc; с&agrave; &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&egrave;&ograve;е',
	'no_pic_to_add' => '&Iacute;я&igrave;&agrave; &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&egrave; з&agrave; &auml;&icirc;&aacute;&agrave;&acirc;я&iacute;е',
	'need_one_album' => '&Ograve;ря&aacute;&acirc;&agrave; &auml;&agrave; &egrave;&igrave;&agrave; п&icirc;&iacute;е е&auml;&egrave;&iacute; &agrave;л&aacute;&oacute;&igrave; з&agrave; &auml;&agrave; п&icirc;лз&acirc;&agrave;&ograve;е &ograve;&agrave;з&egrave; &ocirc;&oacute;&iacute;&ecirc;&ouml;&egrave;я',
	'warning' => '&Acirc;&Iacute;&Egrave;&Igrave;&Agrave;&Iacute;&Egrave;Е',
	'change_perm' => 'с&ecirc;р&egrave;п&ograve;&agrave; &iacute;е &igrave;&icirc;же &auml;&agrave; п&egrave;ше &acirc; &ograve;&agrave;з&egrave; &auml;&egrave;ре&ecirc;&ograve;&icirc;р&egrave;я, с&igrave;е&iacute;е&ograve;е &agrave;&ograve;р&egrave;&aacute;&oacute;&ograve;&egrave;&ograve;е &iacute;&agrave; &auml;&egrave;ре&ecirc;&ograve;&icirc;р&egrave;я&ograve;&agrave; &iacute;&agrave; 755 &egrave;л&egrave; 777 пре&auml;&egrave; &auml;&agrave; &icirc;п&egrave;&ograve;&acirc;&agrave;&ograve;е &auml;&agrave; &auml;&icirc;&aacute;&agrave;&acirc;я&ograve;е &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&egrave; !',
	'target_album' => '<b>Сл&icirc;ж&egrave; &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&egrave;&ograve;е &icirc;&ograve; &quot;</b>%s<b>&quot; &acirc; </b>%s',
	'folder' => 'П&agrave;п&ecirc;&agrave;',
	'image' => '&Ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&agrave;',
	'album' => '&Agrave;л&aacute;&oacute;&igrave;',
	'result' => 'Рез&oacute;л&ograve;&agrave;&ograve;',
	'dir_ro' => 'С&agrave;&igrave;&icirc; з&agrave; че&ograve;е&iacute;е. ',
	'dir_cant_read' => '&Iacute;е &igrave;&icirc;же &auml;&agrave; се пр&icirc;че&ograve;е. ',
	'insert' => '&Auml;&icirc;&aacute;&agrave;&acirc;я&iacute;е &iacute;&agrave; &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&egrave; &acirc; г&agrave;лер&egrave;я&ograve;&agrave;',
	'list_new_pic' => 'Сп&egrave;с&uacute;&ecirc; &iacute;&agrave; &iacute;&icirc;&acirc;&egrave;&ograve;е &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&egrave;',
	'insert_selected' => '&Auml;&icirc;&aacute;&agrave;&acirc;&egrave; &egrave;з&aacute;р&agrave;&iacute;&egrave;&ograve;е &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&egrave;',
	'no_pic_found' => '&Iacute;е с&agrave; &iacute;&agrave;&igrave;ере&iacute;&egrave; &iacute;&icirc;&acirc;&egrave; &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&egrave;',
	'be_patient' => '&Igrave;&icirc;ля, &aacute;&uacute;&auml;е&ograve;е &ograve;&uacute;рпел&egrave;&acirc;&egrave;, с&ecirc;р&egrave;п&ograve;&agrave; &egrave;&igrave;&agrave; &iacute;&oacute;ж&auml;&agrave; &icirc;&ograve; &acirc;ре&igrave;е з&agrave; &auml;&agrave; &auml;&icirc;&aacute;&agrave;&acirc;&egrave; &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&egrave;&ograve;е',
	'notes' =>  '<ul>'.
				'<li><b>OK</b> : &icirc;з&iacute;&agrave;ч&agrave;&acirc;&agrave;, че &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&agrave;&ograve;&agrave; е &auml;&icirc;&aacute;&agrave;&acirc;е&iacute;&agrave; &oacute;спеш&iacute;&icirc;'.
				'<li><b>DP</b> : &icirc;з&iacute;&agrave;ч&agrave;&acirc;&agrave;, че &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&agrave;&ograve;&agrave; е &auml;&oacute;&aacute;л&egrave;&ecirc;&agrave;&ograve; &egrave; я &egrave;&igrave;&agrave; &acirc;ече &acirc; &aacute;&agrave;з&agrave;&ograve;&agrave; &auml;&agrave;&iacute;&iacute;&egrave;'.
				'<li><b>PB</b> : &icirc;з&iacute;&agrave;ч&agrave;&acirc;&agrave;, че &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&agrave;&ograve;&agrave; &iacute;е е &auml;&icirc;&aacute;&agrave;&acirc;е&iacute;&agrave;. Пр&icirc;&acirc;ере&ograve;е &iacute;&agrave;с&ograve;р&icirc;&eacute;&ecirc;&egrave;&ograve;е &egrave; &agrave;&ograve;р&egrave;&aacute;&oacute;&ograve;&egrave;&ograve;е &iacute;&agrave; &auml;&egrave;ре&ecirc;&ograve;&icirc;р&egrave;я&ograve;&agrave; &ecirc;&uacute;&auml;е&ograve;&icirc; се &iacute;&agrave;&igrave;&egrave;р&agrave;&ograve; &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&egrave;&ograve;е'.
				'<li>&Agrave;&ecirc;&icirc; OK, DP, PB \'з&iacute;&agrave;&ouml;&egrave;\' &iacute;е се п&icirc;я&acirc;я&ograve;, &ugrave;р&agrave;&ecirc;&iacute;е&ograve;е &iacute;&agrave; \'л&icirc;ш&agrave;&ograve;&agrave;\' &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&agrave; &egrave; &acirc;&uacute;ж&ograve;е с&uacute;&icirc;&aacute;&ugrave;е&iacute;&egrave;е&ograve;&icirc; з&agrave; греш&ecirc;&agrave; ге&iacute;ер&egrave;р&agrave;&iacute;&icirc; &icirc;&ograve; PHP'.
				'<li>&Agrave;&ecirc;&icirc; п&icirc;л&oacute;ч&egrave;&ograve;е с&uacute;&icirc;&aacute;&ugrave;е&iacute;&egrave;е з&agrave; &egrave;з&ograve;&egrave;ч&agrave;&iacute;е &iacute;&agrave; &acirc;ре&igrave;е, &ugrave;р&agrave;&ecirc;&iacute;е&ograve;е &iacute;&agrave; &aacute;&oacute;&ograve;&icirc;&iacute;&agrave; з&agrave; &icirc;прес&iacute;я&acirc;&agrave;&iacute;е'.
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
	'title' => '&Auml;&icirc;&aacute;&agrave;&acirc;&egrave; &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&agrave;',
	'max_fsize' => '&Igrave;&agrave;&ecirc;с&egrave;&igrave;&agrave;л&iacute;&icirc; р&agrave;зреше&iacute;&agrave; г&icirc;ле&igrave;&egrave;&iacute;&agrave; &iacute;&agrave; &ocirc;&agrave;&eacute;л&agrave; е %s KB',
	'album' => '&Agrave;л&aacute;&oacute;&igrave;',
	'picture' => '&Ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&agrave;',
	'pic_title' => 'З&agrave;гл&agrave;&acirc;&egrave;е &iacute;&agrave; &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&agrave;&ograve;&agrave;',
	'description' => '&Icirc;п&egrave;с&agrave;&iacute;&egrave;е &iacute;&agrave; &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&agrave;&ograve;&agrave;',
	'keywords' => '&Ecirc;люч&icirc;&acirc;&egrave; &auml;&oacute;&igrave;&egrave; (р&agrave;з&auml;еле&iacute;&egrave; с&uacute;с &egrave;&iacute;&ograve;ер&acirc;&agrave;л&egrave;)',
	'err_no_alb_uploadables' => 'С&uacute;ж&agrave;ля&acirc;&agrave;&igrave;е, &iacute;я&igrave;&agrave; &agrave;л&aacute;&oacute;&igrave; &acirc; &ecirc;&icirc;&eacute;&ograve;&icirc; &auml;&agrave; е р&agrave;зреше&iacute;&icirc; &auml;&agrave; &auml;&icirc;&aacute;&agrave;&acirc;я&ograve;е &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&egrave;',
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
	'title' => '&Oacute;пр&agrave;&acirc;ле&iacute;&egrave;е &iacute;&agrave; п&icirc;&ograve;ре&aacute;&egrave;&ograve;ел&egrave;',
	'name_a' => '&Egrave;&igrave;е &acirc;&uacute;зх&icirc;&auml;я&ugrave;&icirc;',
	'name_d' => '&Egrave;&igrave;е &iacute;&egrave;зх&icirc;&auml;я&ugrave;&icirc;',
	'group_a' => 'Гр&oacute;п&agrave; &acirc;&uacute;зх&icirc;&auml;я&ugrave;&icirc;',
	'group_d' => 'Гр&oacute;п&agrave; &iacute;&egrave;зх&icirc;&auml;я&ugrave;&icirc;',
	'reg_a' => 'Рег. &auml;&agrave;&ograve;&agrave; &acirc;&uacute;зх&icirc;&auml;я&ugrave;&agrave;',
	'reg_d' => 'Рег. &auml;&agrave;&ograve;&agrave; &iacute;&egrave;зх&icirc;&auml;я&ugrave;&agrave;',
	'pic_a' => '&Aacute;р. &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&egrave; &acirc;&uacute;зх&icirc;&auml;я&ugrave;&icirc;',
	'pic_d' => '&Aacute;р. &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&egrave; &iacute;&egrave;зх&icirc;&auml;я&ugrave;п',
	'disku_a' => '&Auml;&egrave;с&ecirc;&icirc;&acirc;&icirc; &igrave;яс&ograve;&icirc; &acirc;&uacute;зх&icirc;&auml;я&ugrave;&icirc;',
	'disku_d' => '&Auml;&egrave;с&ecirc;&icirc;&acirc;&icirc; &igrave;яс&ograve;&icirc; &iacute;&egrave;зх&icirc;&auml;я&ugrave;&icirc;',
	'sort_by' => 'С&icirc;р&ograve;&egrave;р&agrave; п&icirc;&ograve;ре&aacute;&egrave;&ograve;ел&egrave;&ograve;е п&icirc;',
	'err_no_users' => '&Iacute;я&igrave;&agrave; п&icirc;&ograve;ре&aacute;&egrave;&ograve;ел&egrave; !',
	'err_edit_self' => '&Iacute;е &igrave;&icirc;же &auml;&agrave; ре&auml;&agrave;&ecirc;&ograve;&egrave;р&agrave;&ograve;е с&acirc;&icirc;я с&icirc;&aacute;с&ograve;&acirc;е&iacute; пр&icirc;&ocirc;&egrave;л. &Egrave;зп&icirc;лз&acirc;&agrave;&eacute;&ograve;е \'&Igrave;&icirc;я пр&icirc;&ocirc;&egrave;л\' з&agrave; &ograve;&agrave;з&egrave; &ouml;ел',
	'edit' => 'РЕ&Auml;&Agrave;&Ecirc;&Ograve;&Egrave;Р&Agrave;&Iacute;Е',
	'delete' => '&Egrave;З&Ograve;Р&Egrave;&Acirc;&Agrave;&Iacute;Е',
	'name' => 'П&icirc;&ograve;ре&aacute;&egrave;&ograve;елс&ecirc;&icirc; &egrave;&igrave;е',
	'group' => 'Гр&oacute;п&agrave;',
	'inactive' => '&Iacute;е&agrave;&ecirc;&ograve;&egrave;&acirc;е&iacute;',
	'operations' => '&Icirc;пер&agrave;&ouml;&egrave;&egrave;',
	'pictures' => '&Ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&egrave;',
	'disk_space' => '&Egrave;зп&icirc;лз&acirc;&agrave;&iacute;&icirc; &igrave;яс&ograve;&icirc; / Л&egrave;&igrave;&egrave;&ograve;',
	'registered_on' => 'Рег&egrave;с&ograve;р&egrave;р&agrave;&iacute; &iacute;&agrave;',
	'u_user_on_p_pages' => '%d п&icirc;&ograve;ре&aacute;&egrave;&ograve;ел&egrave; &iacute;&agrave; %d с&ograve;р&agrave;&iacute;&egrave;&ouml;&agrave;(&egrave;)',
	'confirm_del' => 'С&egrave;г&oacute;ре&iacute; л&egrave;с&ograve;е, че &egrave;с&ecirc;&agrave;&ograve;е &auml;&agrave; &Egrave;З&Ograve;Р&Egrave;Е&Ograve;Е &ograve;&icirc;з&egrave; п&icirc;&ograve;ре&aacute;&egrave;&ograve;ел ? \\n&Acirc;с&egrave;ч&ecirc;&egrave; &iacute;ег&icirc;&acirc;&egrave; &ecirc;&agrave;р&ograve;&egrave;&iacute;&ecirc;&egrave; &egrave; &agrave;л&aacute;&oacute;&igrave;&egrave; &ugrave;е &aacute;&uacute;&auml;&agrave;&ograve; &egrave;з&ograve;р&egrave;&ograve;&egrave;.',
	'mail' => 'П&Icirc;&Ugrave;&Agrave;',
	'err_unknown_user' => '&Egrave;з&aacute;р&agrave;&iacute;&egrave;я п&icirc;&ograve;ре&aacute;&egrave;&ograve;е &iacute;е с&uacute;&ugrave;ес&ograve;&acirc;&oacute;&acirc;&agrave; !',
	'modify_user' => 'Пр&icirc;&igrave;е&iacute;&egrave; п&icirc;&ograve;ре&aacute;&egrave;&ograve;еля',
	'notes' => '&Aacute;ележ&ecirc;&egrave;',
	'note_list' => '<li>&Agrave;&ecirc;&icirc; &iacute;е жел&agrave;е&ograve;е &auml;&agrave; с&egrave; пр&icirc;&igrave;е&iacute;&egrave;&ograve;е &ograve;е&ecirc;&oacute;&ugrave;&agrave;&ograve;&agrave; п&agrave;р&icirc;л&agrave;, &icirc;с&ograve;&agrave;&acirc;е&ograve;е п&icirc;ле&iacute;&ouml;е&ograve;&icirc; "п&agrave;р&icirc;л&agrave;" пр&agrave;з&iacute;&icirc;',
	'password' => 'П&agrave;р&icirc;л&agrave;',
	'user_active' => 'П&icirc;&ograve;ре&aacute;&egrave;&ograve;еля е &agrave;&ecirc;&ograve;&egrave;&acirc;е&iacute;',
	'user_group' => 'П&icirc;&ograve;ре&aacute;&egrave;&ograve;елс&ecirc;&agrave; гр&oacute;п&agrave;',
	'user_email' => 'П&icirc;&ograve;ре&aacute;&egrave;&ograve;елс&ecirc;&egrave; e-mail',
	'user_web_site' => 'П&icirc;&ograve;ре&aacute;&egrave;&ograve;елс&ecirc;&egrave; &oacute;е&aacute; с&agrave;&eacute;&ograve;',
	'create_new_user' => 'С&uacute;з&auml;&agrave;&eacute; &iacute;&icirc;&acirc; п&icirc;&ograve;ре&aacute;&egrave;&ograve;ел',
	'user_location' => '&Igrave;ес&ograve;&icirc;&iacute;&agrave;х&icirc;ж&auml;е&iacute;&egrave;е &iacute;&agrave; п&icirc;&ograve;ре&aacute;&egrave;&ograve;еля',
	'user_interests' => '&Egrave;&iacute;&ograve;ерес&egrave; &iacute;&agrave; п&icirc;&ograve;ре&aacute;&egrave;&ograve;еля',
	'user_occupation' => 'З&agrave;&iacute;&egrave;&igrave;&agrave;&iacute;&egrave;е &iacute;&agrave; п&icirc;&ograve;ре&aacute;&egrave;&ograve;еля',
);
?>
