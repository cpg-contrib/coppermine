<?php
// ------------------------------------------------------------------------- //
//  Coppermine Photo Gallery                                                 //
// ------------------------------------------------------------------------- //
//  Copyright (C) 2002,2003  GrñÈory DEMAR <gdemar@wanadoo.fr>               //
//  http://www.chezgreg.net/coppermine/                                      //
// ------------------------------------------------------------------------- //
//  Based on PHPhotoalbum by Henning Støverud <henning@stoverud.com>         //
//  http://www.stoverud.com/PHPhotoalbum/                                    //
// ------------------------------------------------------------------------- //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
// ------------------------------------------------------------------------- //
//  Japanese translation by Mitsuhiro Yoshida<mits@mitstek.com>              //
//  http://mitstek.com/                                                      //
// ------------------------------------------------------------------------- //

$lang_charset = 'EUC-JP';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('¥Ð¥¤¥È', 'KB', 'MB');

// Day of weeks and months
$lang_day_of_week = array('Æü', '·î', '²Ð', '¿å', 'ÌÚ', '¶â', 'ÅÚ');
$lang_month = array('01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12');

// Some common strings
$lang_yes = 'Yes';
$lang_no  = 'No';
$lang_back = 'Ìá¤ë';
$lang_continue = 'Â³¤±¤ë';
$lang_info = '¾ðÊó';
$lang_error = '¥¨¥é¡¼';

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$album_date_fmt =    '%YÇ¯%B·î%dÆü';
$lastcom_date_fmt =  '%y/%m/%d/ %H:%M';
$lastup_date_fmt =   '%YÇ¯%B·î%dÆü';
$register_date_fmt = '%YÇ¯%B·î%dÆü';
$lasthit_date_fmt =  '%YÇ¯%B·î%dÆü %I:%M %p';
$comment_date_fmt =  '%YÇ¯%B·î%dÆü %I:%M %p';

// For the word censor
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*');

$lang_meta_album_names = array(
	'random' => '¥é¥ó¥À¥à¼Ì¿¿',
	'lastup' => '¿·Ãå¼Ì¿¿',
	'lastcom' => 'ºÇ¿·¥³¥á¥ó¥È',
	'topn' => 'ºÇÂ¿±ÜÍ÷',
	'toprated' => '¥È¥Ã¥×¥ì¡¼¥È',
	'lasthits' => 'ºÇ½ª±ÜÍ÷',
	'search' => '¸¡º÷·ë²Ì'
);

$lang_errors = array(
	'access_denied' => '¤³¤Î¥Ú¡¼¥¸¤ËÂÐ¤¹¤ë¥¢¥¯¥»¥¹¸¢¤¬¤¢¤ê¤Þ¤»¤ó¡£',
	'perm_denied' => '¤³¤ÎÁàºî¤ò¹Ô¤¦¸¢¸Â¤¬¤¢¤ê¤Þ¤»¤ó¡£',
	'param_missing' => 'É¬Í×¤Ê¥Ñ¥é¥á¡¼¥¿Ìµ¤·¤Ç¥¹¥¯¥ê¥×¥È¤¬¼Â¹Ô¤µ¤ì¤Þ¤·¤¿¡£',
	'non_exist_ap' => 'ÁªÂò¤µ¤ì¤¿¥¢¥ë¥Ð¥à/¼Ì¿¿¤¬Â¸ºß¤·¤Þ¤»¤ó !',
	'quota_exceeded' => '¥Ç¥£¥¹¥¯»ÈÍÑÎÌ¥ª¡¼¥Ð¡¼<br /><br />¤¢¤Ê¤¿¤¬»ÈÍÑ¤Ç¤­¤ë¥Ç¥£¥¹¥¯ÍÆÎÌ¤Ï [quota]K¤Ç¤¹¡¢¸½ºß [space]K¤ò»ÈÍÑ¤·¤Æ¤¤¤Þ¤¹¡¢¤³¤Î¼Ì¿¿¤òÄÉ²Ã¤¹¤ë¤³¤È¤Ç¥Ç¥£¥¹¥¯ÍÆÎÌ¤ò¥ª¡¼¥Ð¡¼¤·¤Þ¤¹¡£',
	'gd_file_type_err' => 'GD¥¤¥á¡¼¥¸¥é¥¤¥Ö¥é¥ê¡¼¤ò»ÈÍÑ¤¹¤ë¾ì¹ç¡¢JPEG¤ÈPNG·Á¼°¤Î¥Õ¥¡¥¤¥ë¤Î¤ßÍøÍÑ²ÄÇ½¤Ç¤¹¡£',
	'invalid_image' => '¤¢¤Ê¤¿¤¬¥¢¥Ã¥×¥í¡¼¥É¤·¤¿²èÁü¤ÏÇËÂ»¤·¤¿¤«¡¢GD¥é¥¤¥Ö¥é¥ê¡¼¤Ç½èÍý¤¹¤ë¤³¤È¤¬½ÐÍè¤Þ¤»¤ó¡£',
	'resize_failed' => '²èÁü¥µ¥¤¥º¤¬¾®¤µ¤¤¤¿¤á¡¢¥µ¥à¥Í¥¤¥ë¤òºîÀ®½ÐÍè¤Þ¤»¤ó¡£',
	'no_img_to_display' => 'É½¼¨¤¹¤ë²èÁü¤Ï¤¢¤ê¤Þ¤»¤ó¡£',
	'non_exist_cat' => 'ÁªÂò¤·¤¿¥«¥Æ¥´¥ê¡¼¤ÏÂ¸ºß¤·¤Þ¤»¤ó¡£',
	'orphan_cat' => '¥«¥Æ¥´¥ê¡¼¤¬Â¸ºß¤·¤Ê¤¤¿Æ¥«¥Æ¥´¥ê¡¼¤ò»ý¤Ã¤Æ¤¤¤Þ¤¹¡£¥«¥Æ¥´¥ê¡¼¥Þ¥Í¡¼¥¸¥ã¡¼¤ò»È¤Ã¤ÆÌäÂê¤ò²ò·è¤·¤Æ¤¯¤À¤µ¤¤¡£',
	'directory_ro' => '¥Ç¥£¥ì¥¯¥È¥ê \'%s\' ¤Ë½ñ¹þ¤ß¸¢¤¬¤¢¤ê¤Þ¤»¤ó¡£¼Ì¿¿¤Îºï½ü¤Ï½ÐÍè¤Þ¤»¤ó¡£',
	'non_exist_comment' => 'ÁªÂò¤·¤¿¥³¥á¥ó¥È¤ÏÂ¸ºß¤·¤Þ¤»¤ó¡£',
	'pic_in_invalid_album' => '¼Ì¿¿¤¬Â¸ºß¤·¤Ê¤¤¥¢¥ë¥Ð¥à(%s)Æâ¤Ë¤¢¤ê¤Þ¤¹ !?'
);

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
	'alb_list_title' => '¥¢¥ë¥Ð¥à¥ê¥¹¥È¤Ø°ÜÆ°',
	'alb_list_lnk' => '¥¢¥ë¥Ð¥à¥ê¥¹¥È',
	'my_gal_title' => '¥Ñ¡¼¥½¥Ê¥ë¥®¥ã¥é¥ê¡¼¤Ø°ÜÆ°',
	'my_gal_lnk' => '¥Þ¥¤¥®¥ã¥é¥ê¡¼',
	'my_prof_lnk' => '¥Þ¥¤¥×¥í¥Õ¥£¡¼¥ë',
	'adm_mode_title' => '´ÉÍý¼Ô¥â¡¼¥É¤ËÊÑ¹¹',
	'adm_mode_lnk' => '´ÉÍý¼Ô¥â¡¼¥É',
	'usr_mode_title' => '¥æ¡¼¥¶¥â¡¼¥É¤ËÊÑ¹¹',
	'usr_mode_lnk' => '¥æ¡¼¥¶¥â¡¼¥É',
	'upload_pic_title' => '¥¢¥ë¥Ð¥à¤Ë¼Ì¿¿¤ò¥¢¥Ã¥×¥í¡¼¥É',
	'upload_pic_lnk' => '¼Ì¿¿¤Î¥¢¥Ã¥×¥í¡¼¥É',
	'register_title' => '¥¢¥«¥¦¥ó¥È¤ÎºîÀ®',
	'register_lnk' => '¥æ¡¼¥¶ÅÐÏ¿',
	'login_lnk' => '¥í¥°¥¤¥ó',
	'logout_lnk' => '¥í¥°¥¢¥¦¥È',
	'lastup_lnk' => 'ºÇ¿·¥¢¥Ã¥×¥í¡¼¥É',
	'lastcom_lnk' => 'ºÇ¿·¥³¥á¥ó¥È',
	'topn_lnk' => 'ºÇÂ¿±ÜÍ÷',
	'toprated_lnk' => '¥È¥Ã¥×¥ì¡¼¥È',
	'search_lnk' => '¸¡º÷',
);

$lang_gallery_admin_menu = array(
	'upl_app_lnk' => '¥¢¥Ã¥×¥í¡¼¥É¾µÇ§',
	'config_lnk' => 'ÀßÄê',
	'albums_lnk' => '¥¢¥ë¥Ð¥à',
	'categories_lnk' => '¥«¥Æ¥´¥ê',
	'users_lnk' => '¥æ¡¼¥¶',
	'groups_lnk' => '¥°¥ë¡¼¥×',
	'comments_lnk' => '¥³¥á¥ó¥È',
	'searchnew_lnk' => '¼Ì¿¿¤Î°ì³çÅÐÏ¿',
);

$lang_user_admin_menu = array(
	'albmgr_lnk' => '¥Þ¥¤¥¢¥ë¥Ð¥à¤ÎºîÀ® / À°Íý',
	'modifyalb_lnk' => '¥Þ¥¤¥¢¥ë¥Ð¥à¤Î½¤Àµ',
	'my_prof_lnk' => '¥Þ¥¤¥×¥í¥Õ¥£¡¼¥ë',
);

$lang_cat_list = array(
	'category' => '¥«¥Æ¥´¥ê',
	'albums' => '¥¢¥ë¥Ð¥à',
	'pictures' => '¼Ì¿¿',
);

$lang_album_list = array(
	'album_on_page' => '¥¢¥ë¥Ð¥à¿ô %d / %d¥Ú¡¼¥¸Ãæ'
);

$lang_thumb_view = array(
	'date' => 'ÆüÉÕ',
	'name' => '¼Ì¿¿Ì¾',
	'sort_da' => 'ÆüÉÕ¤Î¾º½ç¤ÇÊÂ¤ÓÂØ¤¨',
	'sort_dd' => 'ÆüÉÕ¤Î¹ß½ç¤ÇÊÂ¤ÓÂØ¤¨',
	'sort_na' => '¼Ì¿¿Ì¾¤Î¾º½ç¤ÇÊÂ¤ÓÂØ¤¨',
	'sort_nd' => '¼Ì¿¿Ì¾¤Î¹ß½ç¤ÇÊÂ¤ÓÂØ¤¨',
	'pic_on_page' => '¼Ì¿¿Ëç¿ô %d / %d¥Ú¡¼¥¸Ãæ',
	'user_on_page' => '¥æ¡¼¥¶¿ô %d / %d¥Ú¡¼¥¸Ãæ'
);

$lang_img_nav_bar = array(
	'thumb_title' => '¥µ¥à¥Í¥¤¥ë¥Ú¡¼¥¸¤ËÌá¤ë',
	'pic_info_title' => '¼Ì¿¿¾ðÊó¤ÎÉ½¼¨/ÈóÉ½¼¨',
	'slideshow_title' => '¥¹¥é¥¤¥É¥·¥ç¡¼',
	'ecard_title' => '¤³¤Î¼Ì¿¿¤òe-¥«¡¼¥É¤È¤·¤ÆÁ÷¿®¤¹¤ë',
	'ecard_disabled' => 'e-¥«¡¼¥É¤ÏÁ÷¿®½ÐÍè¤Þ¤»¤ó',
	'ecard_disabled_msg' => 'e-¥«¡¼¥É¤òÁ÷¿®¤¹¤ë¸¢¸Â¤¬¤¢¤ê¤Þ¤»¤ó¡£',
	'prev_title' => 'Á°¤Ø',
	'next_title' => '¼¡¤Ø',
	'pic_pos' => '¼Ì¿¿ %s/%s',
);

$lang_rate_pic = array(
	'rate_this_pic' => '¤³¤Î¼Ì¿¿¤òÉ¾²Á¤¹¤ë',
	'no_votes' => '(Ì¤ÅêÉ¼)',
	'rating' => '(¸½ºß¤Î¥ì¡¼¥Æ¥£¥ó¥°: %s/5&nbsp;&nbsp;&nbsp;ÅêÉ¼¿ô %s·ï)',
	'rubbish' => '¹ó¤¤',
	'poor' => '°­¤¤',
	'fair' => 'ÉáÄÌ',
	'good' => 'ÎÉ¤¤',
	'excellent' => 'ÁÇÀ²¤é¤·¤¤',
	'great' => 'À¨¤¤',
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
	CRITICAL_ERROR => 'Ã×Ì¿Åª¤Ê¥¨¥é¡¼',
	'file' => '¥Õ¥¡¥¤¥ë: ',
	'line' => '¹Ô: ',
);

$lang_display_thumbnails = array(
	'filename' => '¥Õ¥¡¥¤¥ëÌ¾ : ',
	'filesize' => '¥Õ¥¡¥¤¥ë¥µ¥¤¥º : ',
	'dimensions' => 'Âç¤­¤µ : ',
	'date_added' => 'ÅÐÏ¿Æü : '
);

$lang_get_pic_data = array(
	'n_comments' => '¥³¥á¥ó¥È¿ô %s',
	'n_views' => '±ÜÍ÷²ó¿ô %s',
	'n_votes' => '(ÅêÉ¼¿ô %s)'
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
	'Exclamation' => '¥Ó¥Ã¥¯¥ê',
	'Question' => '¼ÁÌä',
	'Very Happy' => '¤È¤Æ¤â¹¬¤»',
	'Smile' => '¥¹¥Þ¥¤¥ë',
	'Sad' => 'Èá¤·¤¤',
	'Surprised' => '¶Ã¤­',
	'Shocked' => '¥·¥ç¥Ã¥¯',
	'Confused' => 'º®Íð',
	'Cool' => '¥¯¡¼¥ë',
	'Laughing' => '¾Ð¤¤',
	'Mad' => 'ÅÜ¤ê',
	'Razz' => '¶ì¾Ð¤¤',
	'Embarassed' => 'ÃÑ¤º¤«¤·¤¤',
	'Crying or Very sad' => 'µã¤¯Ëô¤Ï¤È¤Æ¤âÈá¤·¤¤',
	'Evil or Very Mad' => '°­¤¤Ëô¤Ï¤È¤Æ¤âÅÜ¤Ã¤¿',
	'Twisted Evil' => '°ÕÃÏ°­¤¤',
	'Rolling Eyes' => 'Å¾¤¬¤ëÌÜ',
	'Wink' => '¥¦¥¤¥ó¥¯',
	'Idea' => '¥¢¥¤¥Ç¥£¥¢',
	'Arrow' => 'µö²Ä',
	'Neutral' => 'ÃæÎ©',
	'Mr. Green' => '¥ß¥¹¥¿¡¼¡¦¥°¥ê¡¼¥ó',
);

// ------------------------------------------------------------------------- //
// File addpic.php
// ------------------------------------------------------------------------- //

// void

// ------------------------------------------------------------------------- //
// File admin.php
// ------------------------------------------------------------------------- //

if (defined('ADMIN_PHP')) $lang_admin_php = array(
	0 => '´ÉÍý¼Ô¥â¡¼¥É¤ò½ªÎ»Ãæ ...',
	1 => '´ÉÍý¼Ô¥â¡¼¥É¤Ë°Ü¹ÔÃæ ...',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
	'alb_need_name' => '¥¢¥ë¥Ð¥à¤Ë¤Ï¥¢¥ë¥Ð¥àÌ¾¤¬É¬Í×¤Ç¤¹ !',
	'confirm_modifs' => 'ËÜÅö¤Ë¹¹¿·¤·¤Æ¤âµ¹¤·¤¤¤Ç¤¹¤« ?',
	'no_change' => '²¿¤âÊÑ¹¹¤µ¤ì¤Æ¤¤¤Þ¤»¤ó !',
	'new_album' => '¿·¤·¤¤¥¢¥ë¥Ð¥à',
	'confirm_delete1' => 'ËÜÅö¤Ë¤³¤Î¥¢¥ë¥Ð¥à¤òºï½ü¤·¤Æ¤âµ¹¤·¤¤¤Ç¤¹¤« ?',
	'confirm_delete2' => '\n¥¢¥ë¥Ð¥à¤Ë´Þ¤Þ¤ì¤ëÁ´¤Æ¤Î¼Ì¿¿¤È¥³¥á¥ó¥È¤Ïºï½ü¤µ¤ì¤Þ¤¹ !',
	'select_first' => 'ºÇ½é¤Ë¥¢¥ë¥Ð¥à¤òÁªÂò¤·¤Æ¤¯¤À¤µ¤¤¡£',
	'alb_mrg' => '¥¢¥ë¥Ð¥à´ÉÍý',
	'my_gallery' => '* ¥Þ¥¤¥®¥ã¥é¥ê¡¼ *',
	'no_category' => '* ¥«¥Æ¥´¥êÌµ¤· *',
	'delete' => 'ºï½ü',
	'new' => '¿·µ¬ºîÀ®',
	'apply_modifs' => '¹¹¿·¤ÎÅ¬ÍÑ',
	'select_category' => '¥«¥Æ¥´¥êÁªÂò',
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
	'miss_param' => '¡Ö%s¡×¤ÎÁàºî¤ËÉ¬Í×¤Ê¥Ñ¥é¥á¡¼¥¿¤¬ÅÏ¤µ¤ì¤Æ¤¤¤Þ¤»¤ó !',
	'unknown_cat' => 'ÁªÂò¤·¤¿¥«¥Æ¥´¥ê¤Ï¥Ç¡¼¥¿¥Ù¡¼¥¹¤ËÂ¸ºß¤·¤Þ¤»¤ó¡£',
	'usergal_cat_ro' => '¥æ¡¼¥¶¥®¥ã¥é¥ê¡¼¤Î¥«¥Æ¥´¥ê¡¼¤Ïºï½ü½ÐÍè¤Þ¤»¤ó !',
	'manage_cat' => '¥«¥Æ¥´¥ê¤Î´ÉÍý',
	'confirm_delete' => 'ËÜÅö¤Ë¤³¤Î¥«¥Æ¥´¥ê¤òºï½ü¤·¤Æ¤âµ¹¤·¤¤¤Ç¤¹¤« ?',
	'category' => '¥«¥Æ¥´¥ê',
	'operations' => 'Áàºî',
	'move_into' => '°ÜÆ°Àè',
	'update_create' => '¥«¥Æ¥´¥ê¤ÎºîÀ®/¹¹¿·',
	'parent_cat' => '¿Æ¥«¥Æ¥´¥ê',
	'cat_title' => '¥«¥Æ¥´¥êÌ¾',
	'cat_desc' => '¥«¥Æ¥´¥êÀâÌÀ'
);

// ------------------------------------------------------------------------- //
// File config.php
// ------------------------------------------------------------------------- //

if (defined('CONFIG_PHP')) $lang_config_php = array(
	'title' => 'ÀßÄê',
	'restore_cfg' => '¥¤¥ó¥¹¥È¡¼¥ëÄ¾¸å¤Î¾õÂÖ¤ËÌá¤¹',
	'save_cfg' => '¿·¤·¤¤ÀßÄê¤òÊÝÂ¸¤¹¤ë',
	'notes' => 'Notes',
	'info' => '¾ðÊó',
	'upd_success' => 'Coppermine¤ÎÀßÄê¤¬¹¹¿·¤µ¤ì¤Þ¤·¤¿¡£',
	'restore_success' => 'Coppermine¥Ç¥Õ¥©¥ë¥È¤ÎÀßÄê¤Ë¥ê¥¹¥È¥¢¤µ¤ì¤Þ¤·¤¿¡£',
	'name_a' => '¼Ì¿¿Ì¾¤Î¾º½ç',
	'name_d' => '¼Ì¿¿Ì¾¤Î¹ß½ç',
	'date_a' => 'ÆüÉÕ¤Î¾º½ç',
	'date_d' => 'ÆüÉÕ¤Î¹ß½ç'
);

if (defined('CONFIG_PHP')) $lang_config_data = array(
	'°ìÈÌÀßÄê',
	array('¥®¥ã¥é¥ê¡¼Ì¾', 'gallery_name', 0),
	array('¥®¥ã¥é¥ê¡¼¤ÎÀâÌÀ', 'gallery_description', 0),
	array('´ÉÍý¼Ô¤Î¥á¡¼¥ë¥¢¥É¥ì¥¹', 'gallery_admin_email', 0),
	array('e-¥«¡¼¥É¤Î¡Ö¤â¤Ã¤È¼Ì¿¿¤ò¸«¤ë¡×¥ê¥ó¥¯¤Î¥¿¡¼¥²¥Ã¥È¥¢¥É¥ì¥¹', 'ecards_more_pic_target', 0),
	array('¸À¸ì', 'lang', 5),
	array('¥Æ¡¼¥Þ', 'theme', 6),

	'¥¢¥ë¥Ð¥à¥ê¥¹¥ÈÉ½¼¨',
	array('¥á¥¤¥ó¥Æ¡¼¥Ö¥ë¤ÎÉý (¥Ô¥¯¥»¥ëËô¤Ï%)', 'main_table_width', 0),
	array('¥«¥Æ¥´¥ê³¬ÁØ¤ÎÉ½¼¨¿ô', 'subcat_level', 0),
	array('¥¢¥ë¥Ð¥à¤ÎÉ½¼¨¿ô', 'albums_per_page', 0),
	array('¥¢¥ë¥Ð¥à¥ê¥¹¥È¤ÎÎó¿ô', 'album_list_cols', 0),
	array('¥µ¥à¥Í¥¤¥ë¤Î¥µ¥¤¥º (¥Ô¥¯¥»¥ë)', 'alb_list_thumb_size', 0),
	array('¥á¥¤¥ó¥Ú¡¼¥¸¤Î¥³¥ó¥Æ¥ó¥Ä', 'main_page_layout', 0),

	'¥µ¥à¥Í¥¤¥ëÉ½¼¨',
	array('¥µ¥à¥Í¥¤¥ë¥Ú¡¼¥¸¤ÎÎó¿ô', 'thumbcols', 0),
	array('¥µ¥à¥Í¥¤¥ë¥Ú¡¼¥¸¤Î¹Ô¿ô', 'thumbrows', 0),
	array('¥¿¥Ö¤ÎºÇÂçÉ½¼¨¿ô', 'max_tabs', 0),
	array('¥µ¥à¥Í¥¤¥ë¤Î²¼¤Ë¼Ì¿¿ÀâÌÀ¤òÉ½¼¨¤¹¤ë (¼Ì¿¿Ì¾¤ËÄÉ²Ã)', 'caption_in_thumbview', 1),
	array('¥µ¥à¥Í¥¤¥ë¤Î²¼¤ËÉ½¼¨¤¹¤ë¥³¥á¥ó¥È¿ô', 'display_comment_count', 1),
	array('¼Ì¿¿É½¼¨½ç¤Î¥Ç¥Õ¥©¥ë¥È', 'default_sort_order', 3),
	array('¡Ö¥È¥Ã¥×¥ì¡¼¥È¡×¥ê¥¹¥È¤ËÉ½¼¨¤µ¤ì¤ë¼Ì¿¿¤ÎºÇÄãÅêÉ¼¿ô', 'min_votes_for_rating', 0),

	'²èÁü±ÜÍ÷¤È¥³¥á¥ó¥ÈÀßÄê',
	array('¼Ì¿¿É½¼¨¤Î¥Æ¡¼¥Ö¥ëÉý (¥Ô¥¯¥»¥ëËô¤Ï%)', 'picture_table_width', 0),
	array('¼Ì¿¿¾ðÊó¤ò¥Ç¥Õ¥©¥ë¥È¤ÇÉ½¼¨¤¹¤ë', 'display_pic_info', 1),
	array('¥³¥á¥ó¥ÈÃæ¤Î°­¤¤¸ÀÍÕ¤ò¼è½ü¤¯', 'filter_bad_words', 1),
	array('¥³¥á¥ó¥È¤Î¥¹¥Þ¥¤¥ê¡¼»ÈÍÑ¤òµö²Ä¤¹¤ë', 'enable_smilies', 1),
	array('¼Ì¿¿ÀâÌÀ¤ÎºÇÂçÄ¹', 'max_img_desc_length', 0),
	array('1¸ì¤¢¤¿¤ê¤ÎºÇÂçÊ¸»ú¿ô (Ãí°Õ: ÆüËÜ¸ì¤Î¾ì¹ç¡¢¥³¥á¥ó¥È¤ÎºÇÂçÄ¹¤ÈÆ±ÃÍ)', 'max_com_wlength', 0),
	array('¥³¥á¥ó¥È¤ÎºÇÂç¹Ô¿ô', 'max_com_lines', 0),
	array('¥³¥á¥ó¥È¤ÎºÇÂçÄ¹ (È¾³Ñ´¹»»)', 'max_com_size', 0),

	'¼Ì¿¿¤È¥µ¥à¥Í¥¤¥ëÀßÄê',
	array('JPEG¥Õ¥¡¥¤¥ë¤Î¥¯¥ª¥ê¥Æ¥£¡¼', 'jpeg_qual', 0),
	array('¥µ¥à¥Í¥¤¥ë¤ÎºÇÂçÉýËô¤Ï¹â¤µ <b>*</b>', 'thumb_width', 0),
	array('Ãæ´Ö¼Ì¿¿¤òºîÀ®¤¹¤ë','make_intermediate',1),
	array('Ãæ´Ö¼Ì¿¿¤ÎºÇÂçÉýËô¤Ï¹â¤µ <b>*</b>', 'picture_width', 0),
	array('¥¢¥Ã¥×¥í¡¼¥É¼Ì¿¿¤ÎºÇÂç¥µ¥¤¥º (KB)', 'max_upl_size', 0),
	array('¥¢¥Ã¥×¥í¡¼¥É¼Ì¿¿¤ÎºÇÂçÉýËô¤Ï¹â¤µ (¥Ô¥¯¥»¥ë)', 'max_upl_width_height', 0),

	'¥æ¡¼¥¶ÀßÄê',
	array('¥æ¡¼¥¶ÅÐÏ¿¤òµö²Ä¤¹¤ë', 'allow_user_registration', 1),
	array('¥æ¡¼¥¶ÅÐÏ¿¤Ë¥á¡¼¥ë¾µÇ§¤òÉ¬Í×¤È¤¹¤ë', 'reg_requires_valid_email', 1),
	array('2¿Í¤Î¥æ¡¼¥¶¤Ë¤è¤ëÆ±°ì¥á¡¼¥ë¥¢¥É¥ì¥¹¤ÎÅÐÏ¿¤òµö²Ä¤¹¤ë', 'allow_duplicate_emails_addr', 1),
	array('¥æ¡¼¥¶¤¬¥×¥é¥¤¥Ù¡¼¥È¥¢¥ë¥Ð¥à¤òºîÀ®½ÐÍè¤ë', 'allow_private_albums', 1),

	'²èÁüÀâÌÀ¤Î¤¿¤á¤Î¥«¥¹¥¿¥à¥Õ¥£¡¼¥ë¥É (»ÈÍÑ¤·¤Ê¤¤¾ì¹ç¤Ï¶õÇò)',
	array('¥Õ¥£¡¼¥ë¥ÉÌ¾ 1', 'user_field1_name', 0),
	array('¥Õ¥£¡¼¥ë¥ÉÌ¾ 2', 'user_field2_name', 0),
	array('¥Õ¥£¡¼¥ë¥ÉÌ¾ 3', 'user_field3_name', 0),
	array('¥Õ¥£¡¼¥ë¥ÉÌ¾ 4', 'user_field4_name', 0),

	'¼Ì¿¿¤È¥µ¥à¥Í¥¤¥ë¤Î¹âÅÙ¤ÊÀßÄê',
	array('¥Õ¥¡¥¤¥ëÌ¾¤Î»ÈÍÑ¶Ø»ßÊ¸»ú', 'forbiden_fname_char',0),
	array('¼Ì¿¿¤Î¥¢¥Ã¥×¥í¡¼¥É¤Ç»ÈÍÑ½ÐÍè¤ë¥Õ¥¡¥¤¥ë¤Î³ÈÄ¥»Ò', 'allowed_file_extensions',0),
	array('¥¤¥á¡¼¥¸¥ê¥µ¥¤¥º¤ÎÊýË¡','thumb_method',2),
	array('ImageMagick convert¥æ¡¼¥Æ¥£¥ê¥Æ¥£¡¼¤Î¥Ñ¥¹ (Îã /usr/bin/X11/)', 'impath', 0),
	array('»ÈÍÑ¤Ç¤­¤ë²èÁü¥¿¥¤¥× (ImageMagick¤Î¤ß¤ËÍ­¸ú)', 'allowed_img_types',0),
	array('ImageMagick¤Î¥³¥Þ¥ó¥É¥é¥¤¥ó¥ª¥×¥·¥ç¥ó', 'im_options', 0),
	array('JPEG¥Õ¥¡¥¤¥ë¤ÎEXIF¥Ç¡¼¥¿¤òÆÉ¤ß¼è¤ë', 'read_exif_data', 1),
	array('¥¢¥ë¥Ð¥à¥Ç¥£¥ì¥¯¥È¥ê <b>*</b>', 'fullpath', 0),
	array('¥æ¡¼¥¶¼Ì¿¿¤Î¥Ç¥£¥ì¥¯¥È¥ê <b>*</b>', 'userpics', 0),
	array('Ãæ´Ö¼Ì¿¿¤ÎÀÜÆ¬¼­ <b>*</b>', 'normal_pfx', 0),
	array('¥µ¥à¥Í¥¤¥ë¤ÎÀÜÆ¬¼­ <b>*</b>', 'thumb_pfx', 0),
	array('¥Ç¥£¥ì¥¯¥È¥ê¤Î¥Ç¥Õ¥©¥ë¥È¡¦¥Ñ¡¼¥ß¥Ã¥·¥ç¥ó¥â¡¼¥É¥â¡¼¥É', 'default_dir_mode', 0),
	array('¼Ì¿¿¤Î¥Ç¥Õ¥©¥ë¥È¡¦¥Ñ¡¼¥ß¥Ã¥·¥ç¥ó¥â¡¼¥É', 'default_file_mode', 0),

	'¥¯¥Ã¥­¡¼¤È¥­¥ã¥é¥¯¥¿¡¼¥»¥Ã¥ÈÀßÄê',
	array('¥¹¥¯¥ê¥×¥È¤Ç»ÈÍÑ¤¹¤ë¥¯¥Ã¥­¡¼Ì¾', 'cookie_name', 0),
	array('¥¹¥¯¥ê¥×¥È¤Ç»ÈÍÑ¤¹¤ë¥¯¥Ã¥­¡¼¤ÎÊÝÂ¸Àè', 'cookie_path', 0),
	array('¥¨¥ó¥³¡¼¥É', 'charset', 4),

	'¤½¤ÎÂ¾¤ÎÀßÄê',
	array('¥Ç¥Ð¥Ã¥°¥â¡¼¥É¤ò»ÈÍÑ¤¹¤ë', 'debug_mode', 1),

	'<br /><div align="center">(*) ´û¤Ë¥®¥ã¥é¥ê¡¼¤Ë¼Ì¿¿¤¬ÅÐÏ¿¤µ¤ì¤Æ¤¤¤ë¾ì¹ç¡¢*¥Þ¡¼¥¯¤¬ÉÕ¤¤¤Æ¤¤¤ë¥Õ¥£¡¼¥ë¥É¤ÏÊÑ¹¹¤·¤Ê¤¤¤Ç¤¯¤À¤µ¤¤</div><br />'
);

// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
	'empty_name_or_com' => '¤ªÌ¾Á°¤È¥³¥á¥ó¥È¤òÆþÎÏ¤·¤Æ¤¯¤À¤µ¤¤¡£',
	'com_added' => '¤¢¤Ê¤¿¤Î¥³¥á¥ó¥È¤ÏÄÉ²Ã¤µ¤ì¤Þ¤·¤¿¡£',
	'alb_need_title' => '¥¢¥ë¥Ð¥àÌ¾¤òÆþÎÏ¤·¤Æ¤¯¤À¤µ¤¤ !',
	'no_udp_needed' => '¹¹¿·¤ÏÉ¬Í×¤¢¤ê¤Þ¤»¤ó¡£',
	'alb_updated' => '¥¢¥ë¥Ð¥à¤¬¹¹¿·¤µ¤ì¤Þ¤·¤¿¡£',
	'unknown_album' => 'ÁªÂò¤·¤¿¥¢¥ë¥Ð¥à¤¬Â¸ºß¤·¤Ê¤¤¡¢Ëô¤Ï¤³¤Î¥¢¥ë¥Ð¥à¤Ë¥¢¥Ã¥×¥í¡¼¥É¤¹¤ë¸¢¸Â¤¬¤¢¤ê¤Þ¤»¤ó¡£',
	'no_pic_uploaded' => '¼Ì¿¿¤Ï¥¢¥Ã¥×¥í¡¼¥É¤µ¤ì¤Þ¤»¤ó¤Ç¤·¤¿ !<br /><br />¥¢¥Ã¥×¥í¡¼¥É¤¹¤ë¼Ì¿¿¤òÀµ¤·¤¯ÁªÂò¤·¤¿¾ì¹ç¡¢¥µ¡¼¥Ð¤¬</br>¥Õ¥¡¥¤¥ë¤Î¥¢¥Ã¥×¥í¡¼¥É¤òµö²Ä¤·¤Æ¤¤¤ë¤«³ÎÇ§¤·¤Æ¤¯¤À¤µ¤¤ ...',
	'err_mkdir' => '¥Ç¥£¥ì¥¯¥È¥ê %s ¤ÎºîÀ®¤Ë¼ºÇÔ¤·¤Þ¤·¤¿ !',
	'dest_dir_ro' => 'ÂÐ¾Ý¥Ç¥£¥ì¥¯¥È¥ê %s ¤Ï¥¹¥¯¥ê¥×¥È¤Ë¤è¤ë½ñ¹þ¤ß¤¬½ÐÍè¤Þ¤»¤ó !',
	'err_move' => '%s ¤ò %s ¤Ë°ÜÆ°¤Ç¤­¤Þ¤»¤ó !',
	'err_fsize_too_large' => '¤¢¤Ê¤¿¤¬¥¢¥Ã¥×¥í¡¼¥É¤·¤¿¼Ì¿¿¤Î¥µ¥¤¥º¤ÏÂç¤­²á¤®¤Þ¤¹ (ºÇÂç¥µ¥¤¥º¤Ï%sx%s¤Ç¤¹) !',
	'err_imgsize_too_large' => '¤¢¤Ê¤¿¤¬¥¢¥Ã¥×¥í¡¼¥É¤·¤¿¥Õ¥¡¥¤¥ë¤Î¥µ¥¤¥º¤ÏÂç¤­²á¤®¤Þ¤¹ (ºÇÂç¥µ¥¤¥º¤Ï%sKB¤Ç¤¹) !',
	'err_invalid_img' => '¤¢¤Ê¤¿¤¬¥¢¥Ã¥×¥í¡¼¥É¤·¤¿¥Õ¥¡¥¤¥ë¤ÏÍ­¸ú¤Ê²èÁü¤Ç¤Ï¤¢¤ê¤Þ¤»¤ó !',
	'allowed_img_types' => '%s ¤Î²èÁü¤Î¤ß¥¢¥Ã¥×¥í¡¼¥É½ÐÍè¤Þ¤¹¡£',
	'err_insert_pic' => '¼Ì¿¿¡Ö%s¡×¤Ï¥¢¥ë¥Ð¥à¤ËÅÐÏ¿¤Ç¤­¤Þ¤»¤ó¡£ ',
	'upload_success' => '¤¢¤Ê¤¿¤Î¼Ì¿¿¤ÏÀµ¾ï¤Ë¥¢¥Ã¥×¥í¡¼¥É¤µ¤ì¤Þ¤·¤¿<br /><br />´ÉÍý¼Ô¤Î¾µÇ§¸å¤ËÉ½¼¨¤µ¤ì¤Þ¤¹¡£',
	'info' => '¾ðÊó',
	'com_added' => '¥³¥á¥ó¥È¤¬ÄÉ²Ã¤µ¤ì¤Þ¤·¤¿¡£',
	'alb_updated' => '¥¢¥ë¥Ð¥à¤¬¹¹¿·¤µ¤ì¤Þ¤·¤¿¡£',
	'err_comment_empty' => '¥³¥á¥ó¥È¤¬¶õÇò¤Ç¤¹ !',
	'err_invalid_fext' => '¼¡¤Î³ÈÄ¥»Ò¤Î¥Õ¥¡¥¤¥ë¤Î¤ß»ÈÍÑ¤Ç¤­¤Þ¤¹: <br /><br />%s.',
	'no_flood' => '¿½¤·Ìõ¤´¤¶¤¤¤Þ¤»¤ó¡¢¤¢¤Ê¤¿¤Ï´û¤Ë¤³¤Î¼Ì¿¿¤ËºÇ¿·¥³¥á¥ó¥È¤òÅê¹Æ¤·¤Æ¤¤¤Þ¤¹<br /><br />½¤Àµ¤·¤¿¤¤¾ì¹ç¤Ï¡¢¥³¥á¥ó¥È¤òÊÔ½¸¤·¤Æ¤¯¤À¤µ¤¤¡£',
	'redirect_msg' => '¥ê¥À¥¤¥ì¥¯¥È¤µ¤ì¤Þ¤·¤¿¡£<br /><br /><br />¥Ú¡¼¥¸¤¬¼«Æ°Åª¤Ë¹¹¿·¤µ¤ì¤Ê¤¤¾ì¹ç¤Ï¡¢¡ÖÂ³¤¯¡×¤ò¥¯¥ê¥Ã¥¯¤·¤Æ¤¯¤À¤µ¤¤¡£',
	'upl_success' => '¤¢¤Ê¤¿¤Î¼Ì¿¿¤ÏÀµ¾ï¤ËÅÐÏ¿¤µ¤ì¤Þ¤·¤¿¡£',
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
	'caption' => 'Caption',
	'fs_pic' => '¥Õ¥ë¥µ¥¤¥º²èÁü',
	'del_success' => 'ºï½üÀ®¸ù',
	'ns_pic' => '¥Î¡¼¥Þ¥ë¥µ¥¤¥º²èÁü',
	'err_del' => 'ºï½üÉÔ²Ä',
	'thumb_pic' => '¥µ¥à¥Í¥¤¥ë',
	'comment' => '¥³¥á¥ó¥È',
	'im_in_alb' => '¥¢¥ë¥Ð¥àÆâ¤Î²èÁü',
	'alb_del_success' => '¥¢¥ë¥Ð¥à¡Ö%s¡×¤¬ºï½ü¤µ¤ì¤Þ¤·¤¿¡£',
	'alb_mgr' => '¥¢¥ë¥Ð¥à¥Þ¥Í¡¼¥¸¥ã¡¼',
	'err_invalid_data' => '¡Ö%s¡×¤ËÉÔÀµ¤Ê¥Ç¡¼¥¿¤¬È¯À¸¤·¤Þ¤·¤¿¡£',
	'create_alb' => '¥¢¥ë¥Ð¥à¡Ö%s¡×¤ÎºîÀ®Ãæ',
	'update_alb' => '¥¢¥ë¥Ð¥à¡Ö%s¡× ¥¢¥ë¥Ð¥àÌ¾¡Ö%s¡× ¥¤¥ó¥Ç¥Ã¥¯¥¹¡Ö%s\¡×¤ò¹¹¿·¤·¤Æ¤¤¤Þ¤¹¡£',
	'del_pic' => '¼Ì¿¿¤Îºï½ü',
	'del_alb' => '¥¢¥ë¥Ð¥à¤Îºï½ü',
	'del_user' => '¥æ¡¼¥¶¤Îºï½ü',
	'err_unknown_user' => 'ÁªÂò¤·¤¿¥æ¡¼¥¶¤ÏÂ¸ºß¤·¤Þ¤»¤ó !',
	'comment_deleted' => '¥³¥á¥ó¥È¤¬ºï½ü¤µ¤ì¤Þ¤·¤¿¡£',
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
	'confirm_del' => 'ËÜÅö¤Ë¤³¤Î¼Ì¿¿¤òºï½ü¤·¤Æ¤âµ¹¤·¤¤¤Ç¤¹¤« ? \\nÆ±»þ¤Ë¥³¥á¥ó¥È¤âºï½ü¤µ¤ì¤Þ¤¹¡£',
	'del_pic' => '¤³¤Î¼Ì¿¿¤òºï½ü¤¹¤ë',
	'size' => '%s x %s ¥Ô¥¯¥»¥ë',
	'views' => '%s ²ó',
	'slideshow' => '¥¹¥é¥¤¥É¥·¥ç¡¼',
	'stop_slideshow' => '¥¹¥é¥¤¥É¥·¥ç¡¼¤òÄä»ß',
	'view_fs' => '¥¯¥ê¥Ã¥¯¤Ç¥Õ¥ë¥µ¥¤¥º¤Î²èÁü¤òÉ½¼¨',
);

$lang_picinfo = array(
	'title' =>'¼Ì¿¿¾ðÊó',
	'Filename' => '¥Õ¥¡¥¤¥ëÌ¾',
	'Album name' => '¥¢¥ë¥Ð¥àÌ¾',
	'Rating' => '¥ì¡¼¥Æ¥£¥ó¥° (ÅêÉ¼¿ô %s·ï)',
	'Keywords' => '¥­¡¼¥ï¡¼¥É',
	'File Size' => '¥Õ¥¡¥¤¥ë¥µ¥¤¥º',
	'Dimensions' => 'Âç¤­¤µ',
	'Displayed' => 'É½¼¨',
	'Camera' => '¥«¥á¥é',
	'Date taken' => '»£±ÆÆü',
	'Aperture' => '¥ì¥ó¥º',
	'Exposure time' => 'Ïª½Ð»þ´Ö',
	'Focal length' => '¾ÇÅÀµ÷Î¥',
	'Comment' => '¥³¥á¥ó¥È'
);

$lang_display_comments = array(
	'OK' => 'OK',
	'edit_title' => '¤³¤Î¥³¥á¥ó¥È¤òÊÔ½¸¤¹¤ë',
	'confirm_delete' => 'ËÜÅö¤Ë¤³¤Î¥³¥á¥ó¥È¤òºï½ü¤·¤Æ¤âµ¹¤·¤¤¤Ç¤¹¤« ?',
	'add_your_comment' => '¥³¥á¥ó¥È¤òÄÉ²Ã¤¹¤ë',
	'your_name' => '¤ªÌ¾Á°',
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
	'title' => 'e-¥«¡¼¥É¤ÎÁ÷¿®',
	'invalid_email' => '<b>·Ù¹ð</b> : ¥á¡¼¥ë¥¢¥É¥ì¥¹¤¬Àµ¤·¤¯¤¢¤ê¤Þ¤»¤ó !',
	'ecard_title' => 'An e-card from %s for you',
	'view_ecard' => 'e-¥«¡¼¥É¤¬Àµ¾ï¤ËÉ½¼¨¤µ¤ì¤Ê¤¤¾ì¹ç¤Ï¡¢¤³¤Î¥ê¥ó¥¯¤ò¥¯¥ê¥Ã¥¯¤·¤Æ¤¯¤À¤µ¤¤¡£',
	'view_more_pics' => '¤â¤Ã¤È¼Ì¿¿¤ò¸«¤ë¾ì¹ç¤Ï¡¢¤³¤Î¥ê¥ó¥¯¤ò¥¯¥ê¥Ã¥¯¤·¤Æ¤¯¤À¤µ¤¤ !',
	'send_success' => 'e-¥«¡¼¥É¤¬Á÷¿®¤µ¤ì¤Þ¤·¤¿¡£',
	'send_failed' => '¿½¤·Ìõ¤´¤¶¤¤¤Þ¤»¤ó¡¢e-card¤òÁ÷¿®½ÐÍè¤Þ¤»¤ó¤Ç¤·¤¿ ...',
	'from' => 'From',
	'your_name' => '¤ªÌ¾Á°',
	'your_email' => '¥á¡¼¥ë¥¢¥É¥ì¥¹',
	'to' => 'To',
	'rcpt_name' => '¼õ¼è¿Í¤Î¤ªÌ¾Á°',
	'rcpt_email' => '¼õ¼è¿Í¤Î¥á¡¼¥ë¥¢¥É¥ì¥¹',
	'greetings' => '¤¢¤¤¤µ¤Ä',
	'message' => '¥á¥Ã¥»¡¼¥¸',
);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
	'pic_info' => '¼Ì¿¿¾ðÊó',
	'album' => '¥¢¥ë¥Ð¥à',
	'title' => '¼Ì¿¿Ì¾',
	'desc' => 'ÀâÌÀ',
	'keywords' => '¥­¡¼¥ï¡¼¥É',
	'pic_info_str' => '%sx%s - %sKB - ±ÜÍ÷²ó¿ô %s - ÅêÉ¼¿ô %s',
	'approve' => '¼Ì¿¿¤Î¾µÇ§',
	'postpone_app' => '¾µÇ§¤Î±ä´ü',
	'del_pic' => '¼Ì¿¿¤Îºï½ü',
	'reset_view_count' => '±ÜÍ÷¥«¥¦¥ó¥¿¤Î¥ê¥»¥Ã¥È',
	'reset_votes' => 'ÅêÉ¼¤Î¥ê¥»¥Ã¥È',
	'del_comm' => '¥³¥á¥ó¥È¤Îºï½ü',
	'upl_approval' => '¥¢¥Ã¥×¥í¡¼¥É¾µÇ§',
	'edit_pics' => '¼Ì¿¿¤ÎÊÔ½¸',
	'see_next' => 'Á°¤Ø',
	'see_prev' => '¼¡¤Ø',
	'n_pic' => '¼Ì¿¿Ëç¿ô %s',
	'n_of_pic_to_disp' => '¼Ì¿¿É½¼¨¿ô',
	'apply' => '¹¹¿·¤ÎÅ¬ÍÑ'
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
	'group_name' => '¥°¥ë¡¼¥×Ì¾',
	'disk_quota' => '¥Ç¥£¥¹¥¯ÍÆÎÌ',
	'can_rate' => '¼Ì¿¿¤òÉ¾²Á²ÄÇ½',
	'can_send_ecards' => 'e-¥«¡¼¥É¤òÁ÷¿®²ÄÇ½',
	'can_post_com' => '¥³¥á¥ó¥È¤òÅê¹Æ²ÄÇ½',
	'can_upload' => '¼Ì¿¿¤ò¥¢¥Ã¥×¥í¡¼¥É²ÄÇ½',
	'can_have_gallery' => '¥Ñ¡¼¥½¥Ê¥ë¥®¥ã¥é¥ê¡¼¤òºîÀ®²ÄÇ½',
	'apply' => '¹¹¿·¤ÎÅ¬ÍÑ',
	'create_new_group' => '¿·µ¬¥°¥ë¡¼¥×¤ÎºîÀ®',
	'del_groups' => 'ÁªÂò¤·¤¿¥°¥ë¡¼¥×¤Îºï½ü',
	'confirm_del' => '·Ù¹ð¡¢¥°¥ë¡¼¥×¤òºï½ü¤·¤¿¾ì¹ç¡¢¥°¥ë¡¼¥×¤ËÂ°¤·¤Æ¤¤¤¿¥æ¡¼¥¶¤Ï\'Registered\'¥°¥ë¡¼¥×¤Ë°ÜÆ°¤µ¤ì¤Þ¤¹ !\n\n½èÍý¤òÂ³¤±¤Þ¤¹¤« ?',
	'title' => '¥æ¡¼¥¶¥°¥ë¡¼¥×¤Î´ÉÍý',
	'approval_1' => '¥Ñ¥Ö¥ê¥Ã¥¯¥¢¥Ã¥×¥í¡¼¥É¾µÇ§ (1)',
	'approval_2' => '¥×¥é¥¤¥Ù¡¼¥È¥¢¥Ã¥×¥í¡¼¥É¾µÇ§ (2)',
	'note1' => '<b>(1)</b> ¥Ñ¥Ö¥ê¥Ã¥¯¥¢¥ë¥Ð¥à¤Ø¥¢¥Ã¥×¥í¡¼¥É¤µ¤ì¤¿¼Ì¿¿¤Ï´ÉÍý¼Ô¤Î¾µÇ§¤¬É¬Í×¤Ç¤¹¡£',
	'note2' => '<b>(2)</b> ¥æ¡¼¥¶¤Î¥¢¥ë¥Ð¥à¤Ø¥¢¥Ã¥×¥í¡¼¥É¤µ¤ì¤¿¼Ì¿¿¤Ï´ÉÍý¼Ô¤Î¾µÇ§¤¬É¬Í×¤Ç¤¹¡£',
	'notes' => 'Ãí°Õ'
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
	'welcome' => '¤è¤¦¤³¤½ !'
);

$lang_album_admin_menu = array(
	'confirm_delete' => 'ËÜÅö¤Ë¤³¤Î¥¢¥ë¥Ð¥à¤òºï½ü¤·¤Æ¤âµ¹¤·¤¤¤Ç¤¹¤« ? \\nÆ±»þ¤ËÁ´¤Æ¤Î¼Ì¿¿¤È¥³¥á¥ó¥È¤Ïºï½ü¤µ¤ì¤Þ¤¹¡£',
	'delete' => 'ºï½ü',
	'modify' => '¥×¥í¥Ñ¥Æ¥£',
	'edit_pics' => '¼Ì¿¿¤ÎÊÔ½¸',
);

$lang_list_categories = array(
	'home' => 'Home',
	'stat1' => '¥«¥Æ¥´¥ê¿ô:<b>[cat]</b>&nbsp;&nbsp;&nbsp;¥¢¥ë¥Ð¥à¿ô:<b>[albums]</b>&nbsp;&nbsp;&nbsp;¼Ì¿¿Ëç¿ô:<b>[pictures]</b>&nbsp;&nbsp;&nbsp;¥³¥á¥ó¥È¿ô:<b>[comments]</b>&nbsp;&nbsp;&nbsp;±ÜÍ÷²ó¿ô:<b>[views]</b>',
	'stat2' => '¥¢¥ë¥Ð¥à¿ô:<b>[albums]</b>&nbsp;&nbsp;&nbsp;¼Ì¿¿Ëç¿ô:<b>[pictures]</b>&nbsp;&nbsp;&nbsp;±ÜÍ÷²ó¿ô:<b>[views]</b>',
	'xx_s_gallery' => '%s¤Î¥®¥ã¥é¥ê¡¼',
	'stat3' => '¥¢¥ë¥Ð¥à¿ô:<b>[albums]</b>&nbsp;&nbsp;&nbsp;¼Ì¿¿Ëç¿ô:<b>[pictures]</b>&nbsp;&nbsp;&nbsp;¥³¥á¥ó¥È¿ô:<b>[comments]</b>&nbsp;&nbsp;&nbsp;±ÜÍ÷²ó¿ô:<b>[views]</b>'
);

$lang_list_users = array(
	'user_list' => '¥æ¡¼¥¶¥ê¥¹¥È',
	'no_user_gal' => '¥æ¡¼¥¶¥®¥ã¥é¥ê¡¼¤Ï¤¢¤ê¤Þ¤»¤ó¡£',
	'n_albums' => '¥¢¥ë¥Ð¥à¿ô %s',
	'n_pics' => '¼Ì¿¿Ëç¿ô %s'
);

$lang_list_albums = array(
	'n_pictures' => '¼Ì¿¿Ëç¿ô %s',
	'last_added' => '¡¢ºÇ½ªÄÉ²ÃÆü:%s'
);

}

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
	'login' => '¥í¥°¥¤¥ó',
	'enter_login_pswd' => '¥æ¡¼¥¶Ì¾¤È¥Ñ¥¹¥ï¡¼¥É¤òÆþÎÏ¤·¤Æ¤¯¤À¤µ¤¤¡£',
	'username' => '¥æ¡¼¥¶Ì¾',
	'password' => '¥Ñ¥¹¥ï¡¼¥É',
	'remember_me' => '¥æ¡¼¥¶Ì¾¡¦¥Ñ¥¹¥ï¡¼¥É¤òÊÝÂ¸',
	'welcome' => '¤è¤¦¤³¤½ %s¤µ¤ó...',
	'err_login' => '*** ¥í¥°¥¤¥ó½ÐÍè¤Þ¤»¤ó¤Ç¤·¤¿¡£ºÆÅÙ¥í¥°¥¤¥ó¤·¤Æ¤¯¤À¤µ¤¤ ***',
	'err_already_logged_in' => '´û¤Ë¥í¥°¥¤¥ó¤·¤Æ¤¤¤Þ¤¹ !',
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
	'logout' => '¥í¥°¥¢¥¦¥È',
	'bye' => '%s¤µ¤ó¡¢¤µ¤è¤¦¤Ê¤é...',
	'err_not_loged_in' => '¥í¥°¥¤¥ó¤·¤Æ¤¤¤Þ¤»¤ó !',
);

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
	'upd_alb_n' => '¥¢¥ë¥Ð¥à¤Î¹¹¿· %s',
	'general_settings' => '°ìÈÌÀßÄê',
	'alb_title' => '¥¢¥ë¥Ð¥àÌ¾',
	'alb_cat' => '¥«¥Æ¥´¥ê',
	'alb_desc' => 'ÀâÌÀ',
	'alb_thumb' => '¥µ¥à¥Í¥¤¥ë',
	'alb_perm' => '¤³¤Î¥¢¥ë¥Ð¥à¤ËÂÐ¤¹¤ë¥Ñ¡¼¥ß¥Ã¥·¥ç¥ó',
	'can_view' => '¥¢¥ë¥Ð¥à±ÜÍ÷²ÄÇ½',
	'can_upload' => '¥Ó¥¸¥¿¡¼¤Ï¼Ì¿¿¤ò¥¢¥Ã¥×¥í¡¼¥É½ÐÍè¤ë',
	'can_post_comments' => '¥Ó¥¸¥¿¡¼¤Ï¥³¥á¥ó¥È¤òÅê¹Æ¤Ç¤­¤ë',
	'can_rate' => '¥Ó¥¸¥¿¡¼¤Ï¼Ì¿¿¤òÉ¾²Á½ÐÍè¤ë',
	'user_gal' => '¥æ¡¼¥¶¥®¥ã¥é¥ê¡¼',
	'no_cat' => '* ¥«¥Æ¥´¥ê¡¼Ìµ¤· *',
	'alb_empty' => '¥¢¥ë¥Ð¥à¤Ë¤Ï²¿¤âÆþ¤Ã¤Æ¤¤¤Þ¤»¤ó',
	'last_uploaded' => 'ºÇ¿·¥¢¥Ã¥×¥í¡¼¥É',
	'public_alb' => 'Á´°÷ (¥Ñ¥Ö¥ê¥Ã¥¯¥¢¥ë¥Ð¥à)',
	'me_only' => '»ä¤Î¤ß',
	'owner_only' => '¥¢¥ë¥Ð¥à¤Î½êÍ­¼Ô (%s) ¤Î¤ß',
	'groupp_only' => '%s¥°¥ë¡¼¥×¥á¥ó¥Ð¡¼¤Î¤ß',
	'err_no_alb_to_modify' => '½¤Àµ¤Ç¤­¤ë¥¢¥ë¥Ð¥à¤¬¥Ç¡¼¥¿¥Ù¡¼¥¹¤Ë¤¢¤ê¤Þ¤»¤ó¡£',
	'update' => '¥¢¥ë¥Ð¥à¤Î¹¹¿·'
);

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
	'already_rated' => '¿½¤·Ìõ¤´¤¶¤¤¤Þ¤»¤ó¡¢¤¢¤Ê¤¿¤Ï´û¤Ë¤³¤Î¼Ì¿¿¤òÉ¾²Á¤·¤Æ¤¤¤Þ¤¹¡£',
	'rate_ok' => '¤¢¤Ê¤¿¤ÎÅêÉ¼¤Ï¼õÍý¤µ¤ì¤Þ¤·¤¿¡£',
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
{SITE_NAME}¤Î´ÉÍý¼Ô¤Ï¡¢°ìÈÌÅª¤Ë¹¥¤Þ¤·¤¯¤Ê¤¤Åê¹Æ¤ò½ÐÍè¤ë¤À¤±Â®¤ä¤«¤Ëºï½ü¤¹¤ë¤è¤¦»î¤ß¤Þ¤¹¤¬¡¢Á´¤Æ¤ÎÅê¹Æ¤ò±ÜÍ÷¤¹¤ë¤³¤È¤ÏÉÔ²ÄÇ½¤Ç¤¹¡£½¾¤Ã¤Æ¡¢¤³¤Î¥µ¥¤¥È¤ËÂÐ¤¹¤ëÁ´Åê¹Æ¤Î¸«²ò¤¬Åê¹Æ¼Ô¤Ë¤è¤ë¤â¤Î¤Ç¤¢¤ê¡¢´ÉÍý¼Ô¤ä¥¦¥§¥Ö¥Þ¥¹¥¿¡¼¤Î¤â¤Î¤ÇÌµ¤¯(¤³¤ì¤é¤Î¿Í¡¹¤ÎÅê¹Æ¤Ï½ü¤¯)¡¢´ÉÍý¼Ô¤ä¥¦¥§¥Ö¥Þ¥¹¥¿¡¼¤ËÅê¹Æ¤ÎÀÕÇ¤¤¬Ìµ¤¤¤³¤È¤ò¤¢¤Ê¤¿¤ÏÇ§¤á¤Þ¤¹¡£
<br>
<br>
¤¢¤Ê¤¿¤Ï¡¢¸ø½øÎÉÂ¯¤ËÈ¿¤¹¤ëÅê¹Æ¤ä¡¢¸Ä¿Í¤Ø¤ÎÈðëîÃæ½ý¤ÎÅê¹Æ¡¢À­Åª¤ÊÅê¹Æ¡¢¤½¤ÎÂ¾Ë¡¤ËÈ¿¤¹¤ëÅê¹Æ¤ò¤·¤Ê¤¤»ö¤ËÆ±°Õ¤·¤Þ¤¹¡£
¤¢¤Ê¤¿¤Ï¡¢{SITE_NAME}¤Î´ÉÍý¼Ô¡¢¥¦¥§¥Ö¥Þ¥¹¥¿¡¼¡¢¥â¥Ç¥ì¡¼¥¿¡¼¤¬Ç¡²¿¤Ê¤ë»þ¤âÅê¹ÆÆâÍÆ¤òÊÔ½¸¡¦ºï½ü¤¹¤ë¸¢Íø¤òÍ­¤¹¤ë¤³¤È¤ËÆ±°Õ¤·¤Þ¤¹¡£¤¢¤Ê¤¿¤Ï¡¢¥æ¡¼¥¶¤È¤·¤Æ¤¢¤Ê¤¿¤¬Åê¹Æ¤·¤¿¾ðÊó¤¬¥Ç¡¼¥¿¥Ù¡¼¥¹¤ËÊÝÂ¸¤µ¤ì¤ë¤³¤È¤ËÆ±°Õ¤·¤Þ¤¹¡£¤³¤Î¾ðÊó¤Ï¡¢¤¢¤Ê¤¿¤ÎÆ±°ÕÌµ¤·¤Ë´ÉÍý¼Ô¡¢¥¦¥§¥Ö¥Þ¥¹¥¿¡¼¤è¤êÂè»°¼Ô¤Ë³«¼¨¤µ¤ì¤ë¤³¤È¤Ï¤¢¤ê¤Þ¤»¤ó¤¬¡¢¥Ç¡¼¥¿¤¬Î®½Ð¤¹¤ë¶²¤ì¤Î¤¢¤ë¥Ï¥Ã¥­¥ó¥°Åù¤Î¹Ô°Ù¤ËÂÐ¤·¤Æ´ÉÍý¼Ô¡¢¥¦¥§¥Ö¥Þ¥¹¥¿¡¼¤ÏÀÕÇ¤¤òÉé¤¦¤³¤È¤Ï¤¢¤ê¤Þ¤»¤ó¡£
<br>
<br>
¤³¤Î¥µ¥¤¥È¤Ç¤Ï¡¢¤¢¤Ê¤¿¤Î¥³¥ó¥Ô¥å¡¼¥¿¤Ë¾ðÊó¤òÊÝÂ¸¤¹¤ë¤¿¤á¤Ë¥¯¥Ã¥­¡¼¤ò»ÈÍÑ¤·¤Þ¤¹¡£¥¯¥Ã¥­¡¼¤Ï¤¢¤Ê¤¿¤Î±ÜÍ÷¤ò²÷Å¬¤Ë¤¹¤ë°Ù¤À¤±¤Ë»ÈÍÑ¤µ¤ì¤Þ¤¹¡£¥á¡¼¥ë¥¢¥É¥ì¥¹¤Ï¡¢¤¢¤Ê¤¿¤ÎÅÐÏ¿¤Ë´Ø¤¹¤ë¾ÜºÙµÚ¤Ó¥Ñ¥¹¥ï¡¼¥É¤ÎÇ§¾Ú¤Î°Ù¤À¤±¤Ë»ÈÍÑ¤µ¤ì¤Þ¤¹¡£ 
<br>
<br>
¡ÖÆ±°Õ¤·¤Þ¤¹¡×¤ò¥¯¥ê¥Ã¥¯¤¹¤ë¤³¤È¤Ç¡¢¤¢¤Ê¤¿¤Ï¾åµ­¤ÎÍøÍÑµ¬Ìó¤ËÆ±°Õ¤·¤Þ¤¹¡£
EOT;
$lang_register_php = array(
	'page_title' => '¥æ¡¼¥¶ÅÐÏ¿',
	'term_cond' => 'ÍøÍÑµ¬Ìó',
	'i_agree' => 'Æ±°Õ¤·¤Þ¤¹',
	'submit' => 'ÅÐÏ¿¼Â¹Ô',
	'err_user_exists' => 'ÆþÎÏ¤µ¤ì¤¿¥æ¡¼¥¶Ì¾¤Ï´û¤ËÅÐÏ¿¤µ¤ì¤Æ¤¤¤Þ¤¹¡¢ÊÌ¤Î¥æ¡¼¥¶Ì¾¤òÆþÎÏ¤·¤Æ¤¯¤À¤µ¤¤¡£',
	'err_password_mismatch' => '¥Ñ¥¹¥ï¡¼¥É¤¬°ìÃ×¤·¤Þ¤»¤ó¡¢ºÆÅÙÆþÎÏ¤·¤Æ¤¯¤À¤µ¤¤¡£',
	'err_uname_short' => '¥æ¡¼¥¶Ì¾¤Ï2Ê¸»ú°Ê¾å¤Ë¤·¤Æ¤¯¤À¤µ¤¤¡£',
	'err_password_short' => '¥Ñ¥¹¥ï¡¼¥É¤Ï2Ê¸»ú°Ê¾å¤Ë¤·¤Æ¤¯¤À¤µ¤¤¡£',
	'err_uname_pass_diff' => '¥æ¡¼¥¶Ì¾¤È¥Ñ¥¹¥ï¡¼¥É¤Ï°Û¤Ê¤ëÉ¬Í×¤¬¤¢¤ê¤Þ¤¹¡£',
	'err_invalid_email' => '¥á¡¼¥ë¥¢¥É¥ì¥¹¤¬Àµ¤·¤¯¤¢¤ê¤Þ¤»¤ó¡£',
	'err_duplicate_email' => 'Â¾¤Î¥æ¡¼¥¶¤¬´û¤ËÆ±¤¸¥á¡¼¥ë¥¢¥É¥ì¥¹¤òÅÐÏ¿¤·¤Æ¤¤¤Þ¤¹¡£',
	'enter_info' => 'ÅÐÏ¿¾ðÊó¤òÆþÎÏ¤·¤Æ¤¯¤À¤µ¤¤¡£',
	'required_info' => 'É¬¿Ü¹àÌÜ',
	'optional_info' => 'Ç¤°Õ¹àÌÜ',
	'username' => '¥æ¡¼¥¶Ì¾',
	'password' => '¥Ñ¥¹¥ï¡¼¥É',
	'password_again' => '¥Ñ¥¹¥ï¡¼¥É¤ò¤â¤¦°ìÅÙ',
	'email' => '¥á¡¼¥ë¥¢¥É¥ì¥¹',
	'location' => 'µï½»ÃÏ',
	'interests' => '¶½Ì£¤Î¤¢¤ë¤³¤È',
	'website' => '¥Û¡¼¥à¥Ú¡¼¥¸',
	'occupation' => '¿¦¶È',
	'error' => '¥¨¥é¡¼',
	'confirm_email_subject' => '%s - Registration confirmation',
	'information' => '¾ðÊó',
	'failed_sending_email' => 'ÅÐÏ¿³ÎÇ§¥á¡¼¥ë¤¬Á÷¿®¤Ç¤­¤Þ¤»¤ó !',
	'thank_you' => '¤´ÅÐÏ¿¤¢¤ê¤¬¤È¤¦¤´¤¶¤¤¤Þ¤¹¡£<br /><br />¥¢¥«¥¦¥ó¥È¤Î³èÀ­²½¤Ë´Ø¤¹¤ë¾ðÊó¤¬ÅÐÏ¿¤µ¤ì¤¿¥á¡¼¥ë¥¢¥É¥ì¥¹°¸¤ËÁ÷¿®¤µ¤ì¤Þ¤·¤¿¡£',
	'acct_created' => '¤¢¤Ê¤¿¤Î¥¢¥«¥¦¥ó¥È¤¬ºîÀ®¤µ¤ì¤Þ¤·¤¿¡£¥æ¡¼¥¶Ì¾¤È¥Ñ¥¹¥ï¡¼¥É¤Ç¥í¥°¥¤¥ó½ÐÍè¤Þ¤¹¡£',
	'acct_active' => '¤¢¤Ê¤¿¤Î¥¢¥«¥¦¥ó¥È¤¬³èÀ­²½¤µ¤ì¤Þ¤·¤¿¡£¥æ¡¼¥¶Ì¾¤È¥Ñ¥¹¥ï¡¼¥É¤Ç¥í¥°¥¤¥ó½ÐÍè¤Þ¤¹¡£',
	'acct_already_act' => '¤¢¤Ê¤¿¤Î¥¢¥«¥¦¥ó¥È¤Ï´û¤Ë³èÀ­²½¤µ¤ì¤Æ¤¤¤Þ¤¹ !',
	'acct_act_failed' => '¤³¤Î¥¢¥«¥¦¥ó¥È¤Ï³èÀ­²½½ÐÍè¤Þ¤»¤ó !',
	'err_unk_user' => 'ÁªÂò¤·¤¿¥æ¡¼¥¶¤ÏÂ¸ºß¤·¤Þ¤»¤ó !',
	'x_s_profile' => '%s ¤Î¥×¥í¥Õ¥£¡¼¥ë',
	'group' => '¥°¥ë¡¼¥×',
	'reg_date' => 'ÅÐÏ¿Ç¯·îÆü',
	'disk_usage' => '¥Ç¥£¥¹¥¯»ÈÍÑÎÌ',
	'change_pass' => '¥Ñ¥¹¥ï¡¼¥É¤ÎÊÑ¹¹',
	'current_pass' => '¸½ºß¤Î¥Ñ¥¹¥ï¡¼¥É',
	'new_pass' => '¿·¤·¤¤¥Ñ¥¹¥ï¡¼¥É',
	'new_pass_again' => '¿·¤·¤¤¥Ñ¥¹¥ï¡¼¥É¤ò¤â¤¦°ìÅÙ',
	'err_curr_pass' => '¸½ºß¤Î¥Ñ¥¹¥ï¡¼¥É¤¬Àµ¤·¤¯¤¢¤ê¤Þ¤»¤ó¡£',
	'apply_modif' => '¹¹¿·¤ÎÅ¬ÍÑ',
	'change_pass' => '¥Ñ¥¹¥ï¡¼¥É¤ÎÊÑ¹¹',
	'update_success' => '¥×¥í¥Õ¥£¡¼¥ë¤¬¹¹¿·¤µ¤ì¤Þ¤·¤¿¡£',
	'pass_chg_success' => '¥Ñ¥¹¥ï¡¼¥É¤¬ÊÑ¹¹¤µ¤ì¤Þ¤·¤¿¡£',
	'pass_chg_error' => '¥Ñ¥¹¥ï¡¼¥É¤¬ÊÑ¹¹¤µ¤ì¤Þ¤»¤ó¤Ç¤·¤¿¡£',
);

$lang_register_confirm_email = <<<EOT
{SITE_NAME} ¤Ø¤Î¤´ÅÐÏ¿¤¢¤ê¤¬¤È¤¦¤´¤¶¤¤¤Þ¤¹¡£

¤¢¤Ê¤¿¤Î¥æ¡¼¥¶Ì¾¤Ï "{USER_NAME}" ¤Ç¤¹¡£
¤¢¤Ê¤¿¤Î¥Ñ¥¹¥ï¡¼¥É¤Ï "{PASSWORD}" ¤Ç¤¹¡£

¥¢¥«¥¦¥ó¥È¤Î³èÀ­²½¤ò¤¹¤ë¤Ë¤Ï²¼µ­¤Î¥ê¥ó¥¯¤ò¥¯¥ê¥Ã¥¯Ëô¤Ï
¥Ö¥é¥¦¥¶¤Î¥¢¥É¥ì¥¹Íó¤Ë¥³¥Ô¡¼¤·¤Æ¤¯¤À¤µ¤¤¡£

{ACT_LINK}´ÉÍý¼Ô


{SITE_NAME}

EOT;

}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
	'title' => '¥³¥á¥ó¥È¤Î¥ì¥Ó¥å¡¼',
	'no_comment' => '¥ì¥Ó¥å¡¼¤¹¤ë¥³¥á¥ó¥È¤Ï¤¢¤ê¤Þ¤»¤ó¡£',
	'n_comm_del' => '%s·ï¤Î¥³¥á¥ó¥È¤¬ºï½ü¤µ¤ì¤Þ¤·¤¿¡£',
	'n_comm_disp' => 'É½¼¨¤¹¤ë¥³¥á¥ó¥È¿ô',
	'see_prev' => 'Á°¤Ø',
	'see_next' => '¼¡¤Ø',
	'del_comm' => 'ÁªÂò¤·¤¿¥³¥á¥ó¥È¤òºï½ü',
);


// ------------------------------------------------------------------------- //
// File search.php - OK
// ------------------------------------------------------------------------- //

if (defined('SEARCH_PHP')) $lang_search_php = array(
	0 => '¼Ì¿¿¤Î¸¡º÷',
);

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
	'page_title' => '¿·¤·¤¤¼Ì¿¿¤Î¸¡º÷',
	'select_dir' => '¥Ç¥£¥ì¥¯¥È¥êÁªÂò',
	'select_dir_msg' => '¤³¤³¤Ç¤ÏFTP¤Ë¤è¤ê¥µ¡¼¥Ð¤Ë¥¢¥Ã¥×¥í¡¼¥É¤·¤¿¼Ì¿¿¤ò¥¢¥ë¥Ð¥à¤Ë°ì³çÅÐÏ¿¤·¤Þ¤¹<br /><br />¼Ì¿¿¤ò¥¢¥Ã¥×¥í¡¼¥É¤·¤¿¥Ç¥£¥ì¥¯¥È¥ê¤òÁªÂò¤·¤Æ¤¯¤À¤µ¤¤¡£',
	'no_pic_to_add' => 'ÄÉ²Ã¤¹¤ë¼Ì¿¿¤Ï¤¢¤ê¤Þ¤»¤ó¡£',
	'need_one_album' => '¤³¤Îµ¡Ç½¤ò»È¤¦¤¿¤á¤Ë¤Ï1¤Ä°Ê¾å¤Î¥¢¥ë¥Ð¥à¤¬É¬Í×¤Ç¤¹¡£',
	'warning' => '·Ù¹ð',
	'change_perm' => '¥¹¥¯¥ê¥×¥È¤¬¤³¤Î¥Ç¥£¥ì¥¯¥È¥ê¤Ë½ñ¹þ¤á¤Þ¤»¤ó¤Ç¤·¤¿¡¢¼Ì¿¿¤òÄÉ²Ã¤¹¤ëÁ°¤Ë¥Ç¥£¥ì¥¯¥È¥ê¤Î¥Ñ¡¼¥ß¥Ã¥·¥ç¥ó¥â¡¼¥É¤ò755Ëô¤Ï777¤ËÊÑ¹¹¤¹¤ëÉ¬Í×¤¬¤¢¤ê¤Þ¤¹ !',
	'target_album' => '<b>¡Ö</b>%s<b>¡×Æâ¤Î¼Ì¿¿¤ò</b>%s<b>¤ËÄÉ²Ã¤¹¤ë</b>',
	'folder' => '¥Õ¥©¥ë¥À',
	'image' => '²èÁü',
	'album' => '¥¢¥ë¥Ð¥à',
	'result' => '·ë²Ì',
	'dir_ro' => '½ñ¹þ¤ß¸¢¤¬¤¢¤ê¤Þ¤»¤ó¡£',
	'dir_cant_read' => 'ÆÉ¼è¤ê¸¢¤¬¤¢¤ê¤Þ¤»¤ó¡£',
	'insert' => '¿·µ¬¼Ì¿¿¤Î¥®¥ã¥é¥ê¡¼¤Ø¤ÎÄÉ²Ã',
	'list_new_pic' => '¿·µ¬¼Ì¿¿°ìÍ÷',
	'insert_selected' => 'ÁªÂò¤·¤¿¼Ì¿¿¤ÎÄÉ²Ã',
	'no_pic_found' => '¿·¤·¤¤¼Ì¿¿¤Ï¸«¤Ä¤«¤ê¤Þ¤»¤ó¤Ç¤·¤¿¡£',
	'be_patient' => '»Ã¤¯¤ªÂÔ¤Á¤¯¤À¤µ¤¤¡¢¥¹¥¯¥ê¥×¥È¤¬¼Ì¿¿¤òÄÉ²Ã¤¹¤ë¤Ë¤Ï»þ´Ö¤¬É¬Í×¤Ç¤¹¡£',
	'notes' =>  '<ul>'.
				'<li><b>OK</b> : Àµ¾ï¤Ë¼Ì¿¿¤¬ÄÉ²Ã¤µ¤ì¤Þ¤·¤¿¡£'.
				'<li><b>DP</b> : ¼Ì¿¿¤¬½ÅÊ£¤·¤Æ´û¤Ë¥Ç¡¼¥¿¥Ù¡¼¥¹¤ËÅÐÏ¿¤µ¤ì¤Æ¤¤¤Þ¤¹¡£'.
				'<li><b>PB</b> : ¼Ì¿¿¤òÄÉ²Ã½ÐÍè¤Þ¤»¤ó¤Ç¤·¤¿¡¢ÀßÄêµÚ¤Ó¼Ì¿¿¤¬ÅÐÏ¿¤µ¤ì¤ë¥Ç¥£¥ì¥¯¥È¥ê¤Î¥Ñ¡¼¥ß¥Ã¥·¥ç¥ó¤ò³ÎÇ§¤·¤Æ¤¯¤À¤µ¤¤¡£'.
				'<li>OK¡¢DP¡¢PB¥µ¥¤¥ó¤Î¤¤¤º¤ì¤âÉ½¼¨¤µ¤ì¤Ê¤«¤Ã¤¿¾ì¹ç¤Ï¡¢PHP¥¨¥é¡¼¤òÉ½¼¨¤¹¤ë¤¿¤á¤ËÇËÂ»¤·¤¿¼Ì¿¿¤ò¥¯¥ê¥Ã¥¯¤·¤Æ¤¯¤À¤µ¤¤¡£'.
				'<li>¥¿¥¤¥à¥¢¥¦¥È¤¬È¯À¸¤·¤¿¾ì¹ç¡¢¥Ö¥é¥¦¥¶¤Î¹¹¿·¥Ü¥¿¥ó¤ò¥¯¥ê¥Ã¥¯¤·¤Æ¤¯¤À¤µ¤¤¡£'.
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
	'title' => '¼Ì¿¿¤Î¥¢¥Ã¥×¥í¡¼¥É',
	'max_fsize' => '¥¢¥Ã¥×¥í¡¼¥É²ÄÇ½¤ÊºÇÂç¥Õ¥¡¥¤¥ë¥µ¥¤¥º¤Ï%sKB¤Ç¤¹¡£',
	'album' => '¥¢¥ë¥Ð¥à',
	'picture' => '¼Ì¿¿',
	'pic_title' => '¼Ì¿¿Ì¾',
	'description' => '¼Ì¿¿¤ÎÀâÌÀ',
	'keywords' => '¥­¡¼¥ï¡¼¥É (È¾³Ñ¥¹¥Ú¡¼¥¹¤Ç¶èÀÚ¤ë)',
	'err_no_alb_uploadables' => '¼Ì¿¿¤Î¥¢¥Ã¥×¥í¡¼¥É¤¬µö²Ä¤µ¤ì¤¿¥¢¥ë¥Ð¥à¤Ï¤¢¤ê¤Þ¤»¤ó¡£',
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
	'title' => '¥æ¡¼¥¶¤Î´ÉÍý',
	'name_a' => '¥æ¡¼¥¶Ì¾¤Î¾º½ç',
	'name_d' => '¥æ¡¼¥¶Ì¾¤Î¹ß½ç',
	'group_a' => '¥°¥ë¡¼¥×Ì¾¤Î¾º½ç',
	'group_d' => '¥°¥ë¡¼¥×Ì¾¤Î¹ß½ç',
	'reg_a' => 'ÅÐÏ¿Æü¤Î¾º½ç',
	'reg_d' => 'ÅÐÏ¿Æü¤Î¹ß½ç',
	'pic_a' => '¼Ì¿¿Ëç¿ô¤Î¾º½ç',
	'pic_d' => '¼Ì¿¿Ëç¿ô¤Î¹ß½ç',
	'disku_a' => '¥Ç¥£¥¹¥¯»ÈÍÑÎÌ¤Î¾º½ç',
	'disku_d' => '¥Ç¥£¥¹¥¯»ÈÍÑÎÌ¤Î¹ß½ç',
	'sort_by' => '¥æ¡¼¥¶¤ÎÊÂ¤ÓÂØ¤¨',
	'err_no_users' => '¥æ¡¼¥¶¥Æ¡¼¥Ö¥ë¤¬¶õ¤Ç¤¹ !',
	'err_edit_self' => '¼«Ê¬¼«¿È¤Î¥×¥í¥Õ¥£¡¼¥ë¤ÏÊÔ½¸¤Ç¤­¤Þ¤»¤ó¡£¡Ö¥Þ¥¤¥×¥í¥Õ¥£¡¼¥ë¡×¤ò»ÈÍÑ¤·¤Æ¤¯¤À¤µ¤¤¡£',
	'edit' => 'ÊÔ½¸',
	'delete' => 'ºï½ü',
	'name' => '¥æ¡¼¥¶Ì¾',
	'group' => '¥°¥ë¡¼¥×',
	'inactive' => 'Èó³èÀ­',
	'operations' => 'Áàºî',
	'pictures' => '¼Ì¿¿',
	'disk_space' => '»ÈÍÑºÑ¤ßÍÆÎÌ / ÍÆÎÌ',
	'registered_on' => 'ÅÐÏ¿Ç¯·îÆü',
	'u_user_on_p_pages' => '¥æ¡¼¥¶¿ô %d / %d¥Ú¡¼¥¸Ãæ',
	'confirm_del' => 'ËÜÅö¤Ë¤³¤Î¥æ¡¼¥¶¤òºï½ü¤·¤Æ¤âµ¹¤·¤¤¤Ç¤¹¤« ? \\¥æ¡¼¥¶¤ËÂ°¤¹¤ëÁ´¤Æ¤Î¼Ì¿¿¤È¥¢¥ë¥Ð¥à¤Ïºï½ü¤µ¤ì¤Þ¤¹¡£',
	'mail' => '¥á¡¼¥ë',
	'err_unknown_user' => 'ÁªÂò¤·¤¿¥æ¡¼¥¶¤ÏÂ¸ºß¤·¤Þ¤»¤ó !',
	'modify_user' => '¥æ¡¼¥¶¤ÎÊÑ¹¹',
	'notes' => 'Ãí°Õ',
	'note_list' => '<li>¸½ºß¤Î¥Ñ¥¹¥ï¡¼¥É¤òÊÑ¹¹¤·¤¿¤¯¤Ê¤¤¾ì¹ç¤Ï¡¢¡Ö¥Ñ¥¹¥ï¡¼¥É¡×¥Õ¥£¡¼¥ë¥É¤ò¶õÇò¤Ë¤·¤Æ¤¯¤À¤µ¤¤¡£',
	'password' => '¥Ñ¥¹¥ï¡¼¥É',
	'user_active' => '¥æ¡¼¥¶¤ò³èÀ­²½¤¹¤ë',
	'user_group' => '¥°¥ë¡¼¥×',
	'user_email' => '¥á¡¼¥ë¥¢¥É¥ì¥¹',
	'user_web_site' => '¥Û¡¼¥à¥Ú¡¼¥¸',
	'create_new_user' => '¿·µ¬¥æ¡¼¥¶¤ÎºîÀ®',
	'user_location' => 'µï½»ÃÏ',
	'user_interests' => '¶½Ì£¤Î¤¢¤ë¤³¤È',
	'user_occupation' => '¿¦¶È',
);
?>