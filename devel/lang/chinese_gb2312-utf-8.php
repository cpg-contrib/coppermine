<?php
// ------------------------------------------------------------------------- //
//  Coppermine Photo Gallery                                                 //
// ------------------------------------------------------------------------- //
//  Copyright (C) 2002,2003  Gregory DEMAR <gdemar@wanadoo.fr>               //
//  http://www.chezgreg.net/coppermine/                                      //
// ------------------------------------------------------------------------- //
//  Based on PHPhotoalbum by Henning Stoverud <henning@stoverud.com>         //
//  http://www.stoverud.com/PHPhotoalbum/                                    //
// ------------------------------------------------------------------------- //
//  Hacked by Tarique Sani <tarique@sanisoft.com> and Girsh Nair             //
//  <girish@sanisoft.com> see http://www.sanisoft.com/cpg/README.txt for     //
//  details                                                                  //
// ------------------------------------------------------------------------- //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
// ------------------------------------------------------------------------- //

// info about translators and translated language
$lang_translation_info = array(
'lang_name_english' => 'chinese',  //the name of your language in English, e.g. 'Greek' or 'Spanish'
'lang_name_native' => 'ÖÐÎÄ', //the name of your language in your mother tongue (for non-latin alphabets, use unicode), e.g. '&#917;&#955;&#955;&#951;&#957;&#953;&#954;&#940;' or 'Espa&ntilde;ol'
'lang_country_code' => 'cn', //the two-letter code for the country your language is most-often spoken (refer to http://www.iana.org/cctld/cctld-whois.htm), e.g. 'gr' or 'es'
'trans_name'=> 'Jking Jin', //the name of the translator - can be a nickname
'trans_email' => 'jkingyy@eyou.com', //translator's email address (optional)
'trans_website' => 'http://jking.vip.cn/', //translator's website (optional)
'trans_date' => '2003-10-13', //the date the translation was created / last modified
);

$lang_charset = 'GB2312';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('Bytes', 'KB', 'MB');

// Day of weeks and months
$lang_day_of_week = array('ÐÇÆÚÈÕ', 'ÐÇÆÚÒ»', 'ÐÇÆÚ¶þ', 'ÐÇÆÚÈý', 'ÐÇÆÚËÄ', 'ÐÇÆÚÎå', 'ÐÇÆÚÁù');
$lang_month = array('Ò»ÔÂ', '¶þÔÂ', 'ÈýÔÂ', 'ËÄÔÂ', 'ÎåÔÂ', 'ÁùÔÂ', 'ÆßÔÂ', '°ËÔÂ', '¾ÅÔÂ', 'Ê®ÔÂ', 'Ê®Ò»ÔÂ', 'Ê®¶þÔÂ');

// Some common strings
$lang_yes = 'ÊÇ';
$lang_no  = '·ñ';
$lang_back = '·µ»Ø';
$lang_continue = '¼ÌÐø';
$lang_info = 'Ñ¶Ï¢';
$lang_error = '´íÎó';

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
        'random' => 'Ëæ»úÍ¼Æ¬',
        'lastup' => '×îÐÂÔö¼ÓÍ¼Æ¬',
        'lastalb'=> '×îºó¸üÐÂµÄÏà²á', //new in cpg1.2.0
        'lastcom' => '×îÐÂµÄÆÀÂÛ',
        'topn' => 'ÈÈÃÅÍ¼Æ¬',
        'toprated' => 'ÈÈÃÅÍ¶Æ±',
        'lasthits' => '×îÐÂ¹Û¿´',
        'search' => 'ËÑË÷½á¹û', //new in cpg1.2.0
        'favpics'=> 'ÊÕ²ØµÄÍ¼Æ¬' //new in cpg1.2.0
);

$lang_errors = array(
        'access_denied' => 'ÄãÃ»ÓÐÈ¨ÏÞ·ÃÎÊ´ËÒ³Ãæ.',
        'perm_denied' => 'ÄãÃ»ÓÐÈ¨ÏÞÖ´ÐÐ´Ë²Ù×÷.',
        'param_missing' => '³ÌÐòÈ±ÉÙÐèÒªµÄ²ÎÊý.',
        'non_exist_ap' => 'Ñ¡ÔñµÄÏà²á/Í¼Æ¬²»´æÔÚ!',
        'quota_exceeded' => '¿Õ¼ä³¬³ö<br><br>Äã¿ÉÒÔÊ¹ÓÃµÄ¿Õ¼äÓÐ [quota]K, Ä¿Ç°Ê¹ÓÃÁË [space]K, ¼ÓÈë´ËÍ¼Æ¬¿ÉÄÜ³¬³öÄã¿ÉÒÔÊ¹ÓÃµÄ¿Õ¼ä´óÐ¡.',
        'gd_file_type_err' => 'Ê¹ÓÃGDÍ¼ÐÎ³ÌÐò¿âÊ±¿ÉÊ¹ÓÃµÄÍ¼Æ¬¸ñÊ½ÎªJPEGºÍPNG.',
        'invalid_image' => 'ÄãÉÏ´«µÄÍ¼Æ¬ÒÑ¾­Ëð»µ»òÎÞ·¨±»GD³ÌÐò¿â´¦Àí',
        'resize_failed' => 'ÎÞ·¨½¨Á¢Î¢ËõÍ¼»òÊÊÖÐµÄÍ¼Æ¬.',
        'no_img_to_display' => 'Ã»ÓÐ¿ÉÒÔÏÔÊ¾µÄÍ¼Æ¬',
        'non_exist_cat' => 'Ñ¡ÔñµÄÀà±ð²»´æÔÚ',
        'orphan_cat' => 'Õâ¸öÀà±ðµÄ¸¸Àà±ð²»´æÔÚ, ÇëÏÈÔÚÀà±ð¹ÜÀíÖÐÐÞÕýÕâ¸öÎÊÌâ.',
        'directory_ro' => 'Ä¿Â¼ \'%s\' ÊÇ²»¿ÉÐ´µÄ, Í¼Æ¬²»ÄÜÉ¾³ý',
        'non_exist_comment' => 'Ñ¡ÔñµÄÆÀÂÛ²»´æÔÚ.',
        'pic_in_invalid_album' => 'Í¼Æ¬ÔÚÒ»¸ö²»´æÔÚµÄÏà²á (%s)!?', //new in cpg1.2.0
        'banned' => 'ÄãÒÑ¾­±»½ûÖ¹ä¯ÀÀÕâ¸öÍøÕ¾.', //new in cpg1.2.0
        'not_with_udb' => 'Ïà²áÖÐÕâ¸ö¹¦ÄÜÊÇ²»¿ÉÓÃµÄ£¬ÒòÎªËüÊÇºÍÂÛÌ³¼¯³ÉµÄ£¬»ò×ÅÏà²áµÄÅäÖÃ²»Ö§³Ö£¬»ò×ÅÕâ¸ö¹¦ÄÜÓ¦¸Ã¼®ÓÉÂÛÌ³À´Íê³É.', //new in cpg1.2.0
);

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
        'alb_list_title' => '·µ»Øµ½×¨¼­ÁÐ±í',
        'alb_list_lnk' => '×¨¼­ÁÐ±í',
        'my_gal_title' => '·µ»Øµ½ÎÒµÄ¸öÈËÏà²á',
        'my_gal_lnk' => 'ÎÒµÄÏà²á',
        'my_prof_lnk' => 'ÎÒµÄ¸öÈË×ÊÁÏ',
        'adm_mode_title' => 'ÇÐ»»µ½¹ÜÀíÄ£Ê½',
        'adm_mode_lnk' => '¹ÜÀíÄ£Ê½',
        'usr_mode_title' => 'ÇÐ»»µ½ÓÃ»§Ä£Ê½',
        'usr_mode_lnk' => 'ÓÃ»§Ä£Ê½',
        'upload_pic_title' => 'ÉÏ´«Ò»¸öÍ¼Æ¬µ½Ïà²áÖÐ',
        'upload_pic_lnk' => 'ÉÏ´«Í¼Æ¬',
        'register_title' => '½¨Á¢Ò»¸öÕÊ»§',
        'register_lnk' => '×¢²á',
        'login_lnk' => 'µÇÈë',
        'logout_lnk' => 'µÇ³ö',
        'lastup_lnk' => '×îÐÂÉÏ´«',
        'lastcom_lnk' => '×îÐÂÆÀÂÛ',
        'topn_lnk' => 'ÈÈÃÅÍ¼Æ¬',
        'toprated_lnk' => 'ÈÈÃÅÍ¶Æ±',
        'search_lnk' => 'ËÑË÷',
        'fav_lnk' => 'ÎÒµÄÊÕ²Ø¼Ð', //new in cpg1.2.0

);

$lang_gallery_admin_menu = array(
      	'upl_app_lnk' => 'ÉóºËÉÏ´«',
	'config_lnk' => 'ÅäÖÃ',
	'albums_lnk' => '×¨¼­',
	'categories_lnk' => 'Àà±ð',
	'users_lnk' => 'ÓÃ»§',
	'groups_lnk' => 'ÓÃ»§×é',
	'comments_lnk' => 'ÆÀÂÛ',
	'searchnew_lnk' => 'ÅúÁ¿ÉÏ´«Í¼Æ¬',
        'util_lnk' => 'µ÷ÕûÍ¼Æ¬´óÐ¡', //new in cpg1.2.0
        'ban_lnk' => '½ûÖ¹ÓÃ»§', //new in cpg1.2.0
);

$lang_user_admin_menu = array(
	'albmgr_lnk' => '×¨¼­¹ÜÀí',
	'modifyalb_lnk' => '±à¼­ÎÒµÄ×¨¼­',
	'my_prof_lnk' => '¸öÈË×ÊÁÏ',
);

$lang_cat_list = array(
	'category' => 'Àà±ð',
	'albums' => '×¨¼­',
	'pictures' => 'Í¼Æ¬',
);

$lang_album_list = array(
        'album_on_page' => '%d ¸ö×¨¼­ÓÚ %d Ò³'
);

$lang_thumb_view = array(
        'date' => 'ÈÕÆÚ',
        //Sort by filename and title
        'name' => 'ÎÄ¼þÃû', //new in cpg1.2.0
        'title' => '±êÌâ', //new in cpg1.2.0
        'sort_da' => '°´ÈÕÆÚÉýÐòÅÅÁÐ',
        'sort_dd' => '°´ÈÕÆÚ½µÐòÅÅÁÐ',
        'sort_na' => '°´ÎÄ¼þÃûÉýÐòÅÅÁÐ',
        'sort_nd' => '°´ÎÄ¼þÃû½µÐòÅÅÁÐ',
        'sort_ta' => '°´±êÌâÉýÐòÅÅÁÐ', //new in cpg1.2.0
        'sort_td' => '°´±êÌâ½µÐòÅÅÁÐ', //new in cpg1.2.0
        'pic_on_page' => '%d ÕÅÍ¼Æ¬ÓÚ %d Ò³',
        'user_on_page' => '%d ÓÃ»§ÓÚ %d Ò³'
);

$lang_img_nav_bar = array(
	'thumb_title' => '·µ»Øµ½Î¢ËõÍ¼Ò³',
	'pic_info_title' => 'ÏÔÊ¾/Òþ²ØÍ¼Æ¬Ñ¶Ï¢',
	'slideshow_title' => '»ÃµÆÆ¬²¥·Å',
	'ecard_title' => '×÷Îªµç×Ó¿¨Æ¬¼ÄËÍ³öÕâ¸öÍ¼Æ¬',
	'ecard_disabled' => 'µç×Ó¿¨Æ¬²»¿ÉÓÃ',
	'ecard_disabled_msg' => 'Äã²»±»ÔÊÐíËÍ³öÕâ¸öµç×Ó¿¨Æ¬',
	'prev_title' => '¹Û¿´Ç°Ò»ÕÅÍ¼Æ¬',
	'next_title' => '¹Û¿´ÏÂÒ»ÕÅÍ¼Æ¬',
	'pic_pos' => 'Í¼Æ¬ %s/%s',
);

$lang_rate_pic = array(
        'rate_this_pic' => 'Í¶Æ±',
        'no_votes' => '(Ã»ÓÐÍ¶Æ±)',
        'rating' => '(Ä¿Ç°µÄÍ¶Æ± : %s / 5 ÓÚ %s Í¶Æ±)',
        'rubbish' => 'ºÜ²î',
        'poor' => '²î',
        'fair' => 'Ò»°ã',
        'good' => 'ºÃ',
        'excellent' => '¼«¼ÑµÄ',
        'great' => 'Ì«°ôÁË',
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
        CRITICAL_ERROR => '´íÎó ',
        'file' => 'ÎÄ¼þ : ',
        'line' => 'ÐÐºÅ : ',
);

$lang_display_thumbnails = array(
        'filename' => 'ÎÄ¼þÃû : ',
        'filesize' => 'ÎÄ¼þ´óÐ¡ : ',
        'dimensions' => 'Î¬¶È : ',
        'date_added' => 'ÐÂÔöÈÕÆÚ : '
);

$lang_get_pic_data = array(
        'n_comments' => '%s ÆÀÂÛ',
        'n_views' => '%s ´Î¹Û¿´',
        'n_votes' => '(%s ¸öÍ¶Æ±)'
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
        'Exclamation' => '¾ªÌ¾',
        'Question' => 'ÎÊÌâ',
        'Very Happy' => '·Ç³£¸ßÐË',
        'Smile' => 'Î¢Ð¦',
        'Sad' => 'ÄÑ¹ý',
        'Surprised' => '¾ªÆæ',
        'Shocked' => 'Õð¾ª',
        'Confused' => 'À§»ó',
        'Cool' => '¿á',
        'Laughing' => '´óÐ¦',
        'Mad' => '·¢¿ñ',
        'Razz' => '³°Ð¦',
        'Embarassed' => 'Embarassed',
        'Crying or Very sad' => '·Ç³£ÄÑ¹ý',
        'Evil or Very Mad' => 'Evil or Very Mad',
        'Twisted Evil' => 'Twisted Evil',
        'Rolling Eyes' => '×ª¶¯µÄÑÛ¾¦',
        'Wink' => 'Õ£ÑÛ',
        'Idea' => 'Ïë·¨',
        'Arrow' => '¼ý',
        'Neutral' => 'ÖÐÁ¢',
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
	0 => 'ÕýÀë¿ª¹ÜÀíÄ£Ê½...',
	1 => 'Õý½øÈë¹ÜÀíÄ£Ê½...',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
        'alb_need_name' => '×¨¼­±ØÐëÓÐÒ»¸öÃû×Ö£¡',
        'confirm_modifs' => 'È·¶¨Òª×öÕâÐ©ÐÞ¸ÄÂð£¿',
        'no_change' => 'ÄãÃ»ÓÐ×öÈÎºÎ¸Ä±ä£¡',
        'new_album' => 'ÐÂ×¨¼­',
        'confirm_delete1' => 'È·¶¨ÒªÉ¾³ý´Ë×¨¼­Âð£¿',
        'confirm_delete2' => '\n´Ë×¨¼­ÀïËùÓÐµÄÍ¼Æ¬ºÍÆÀÂÛ¶¼½«±»É¾³ý£¡',
        'select_first' => 'ÏÈÑ¡ÔñÒ»¸ö×¨¼­',
        'alb_mrg' => '×¨¼­¹ÜÀí',
        'my_gallery' => '* ÎÒµÄÏà²á *',
        'no_category' => '* Ã»ÓÐÀà±ð *',
        'delete' => 'É¾³ý',
        'new' => 'ÐÂÔö',
        'apply_modifs' => 'Ìá½»ÐÞ¸Ä',
        'select_category' => 'Ñ¡ÔñÀà±ð',
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
        'miss_param' => ' \'%s\' ²Ù×÷ÐèÒªµÄ²ÎÊýÃ»ÓÐ±»Ìá¹©£¡',
        'unknown_cat' => 'Ñ¡ÔñµÄÀà±ð²»´æÔÚ',
        'usergal_cat_ro' => 'ÓÃ»§Ïà²áÀà±ð²»ÄÜ±»É¾³ý',
        'manage_cat' => 'Àà±ð¹ÜÀí',
        'confirm_delete' => 'È·¶¨ÒªÉ¾³ý´ËÀà±ðÂð',
        'category' => 'Àà±ð',
        'operations' => '²Ù×÷',
        'move_into' => 'ÒÆ¶¯µ½',
        'update_create' => '¸üÐÂ/½¨Á¢ Àà±ð',
        'parent_cat' => '¸¸Àà±ð',
        'cat_title' => 'Àà±ðÃû³Æ',
        'cat_desc' => 'Àà±ðÃèÊö'
);

// ------------------------------------------------------------------------- //
// File config.php
// ------------------------------------------------------------------------- //

if (defined('CONFIG_PHP')) $lang_config_php = array(
        'title' => 'ÅäÖÃ',
        'restore_cfg' => '»Ö¸´µ½Ä¬ÈÏÅäÖÃ',
        'save_cfg' => '±£´æÐÂµÄÅäÖÃ',
        'notes' => '×¢ÊÍ',
        'info' => 'Ñ¶Ï¢',
        'upd_success' => 'ÅäÖÃÒÑ¾­¸üÐÂ',
        'restore_success' => 'È±Ê¡ÅäÖÃÒÑ¾­»Ö¸´',
        'name_a' => 'Ãû³ÆÉýÐòÅÅÁÐ',
        'name_d' => 'Ãû³Æ½µÐòÅÅÁÐ',
        'title_a' => 'ÅäÖÃÉýÐòÅÅÁÐ', //new in cpg1.2.0
        'title_d' => 'ÅäÖÃ½µÐòÅÅÁÐ', //new in cpg1.2.0
        'date_a' => 'ÈÕÆÚÉýÐòÅÅÁÐ',
        'date_d' => 'ÈÕÆÚ½µÐòÅÅÁÐ'
);

if (defined('CONFIG_PHP')) $lang_config_data = array(
        '»ù±¾Éè¶¨',
        array('Ïà²áÃû', 'gallery_name', 0),
        array('Ïà²áÃèÊö', 'gallery_description', 0),
        array('Ïà²á¹ÜÀíÕßµç×ÓÓÊ¼þ', 'gallery_admin_email', 0),
        array('µç×Ó¿¨Æ¬ÖÐ°üº¬ \'²î¿´¸ü¶àµÄÍ¼Æ¬\' µÄÁ´½Ó', 'ecards_more_pic_target', 0),
        array('ÓïÑÔ', 'lang', 5),
        array('·ç¸ñ', 'theme', 6),

        '×¨¼­ÁÐ±íÊÓÍ¼',
        array('Ö÷±í¸ñ¿í¶È (ÏñËØ»ò°Ù·Ö±È)', 'main_table_width', 0),
        array('Í¬Ò»Àà±ðÖÐ×ÓÀà±ðÏÔÊ¾Êý', 'subcat_level', 0),
        array('ÏÔÊ¾µÄ×¨¼­Êý', 'albums_per_page', 0),
        array('×¨¼­ÁÐ±íÖÐµÄÁÐÊý', 'album_list_cols', 0),
        array('Î¢ËõÍ¼µÄ´óÐ¡(ÏñËØ)', 'alb_list_thumb_size', 0),
        array('Ö÷Ò³ÃæµÄÄÚÈÝ', 'main_page_layout', 0),
        array('ÔÚÀà±ðÖÐÏÔÊ¾µÚÒ»¸ö×¨¼­µÄÎ¢ËõÍ¼','first_level',1), //new in cpg1.2.0

        'Î¢ËõÍ¼ÉèÖÃ',
        array('Î¢ËõÍ¼Ò³µÄÁÐÊý', 'thumbcols', 0),
        array('Î¢ËõÍ¼Ò³µÄÐÐÊý', 'thumbrows', 0),
        array('ÏÔÊ¾µÄ×î´ó±êÇ©Êý', 'max_tabs', 0),
        array('ÏÔÊ¾ÓÚÎ¢ËõÍ¼ÏÂ·½Í¼Æ¬±êÌâ(¸½¼ÓµÄ±êÌâ)', 'caption_in_thumbview', 1),
        array('ÏÔÊ¾ÓÚÎ¢ËõÍ¼ÏÂ·½µÄÆÀÂÛÊý', 'display_comment_count', 1),
        array('Í¼Æ¬È±Ê¡µÄÅÅÁÐ´ÎÐò', 'default_sort_order', 3),
        array('ÏÔÊ¾Îª \'ÈÈÃÅÍ¶Æ±\' µÄÍ¼Æ¬×îÉÙËùÐèÆ±Êý', 'min_votes_for_rating', 0),

        '¹Û¿´Í¼Æ¬ &amp; ÆÀÂÛÉèÖÃ',
        array('Í¼Æ¬ÏÔÊ¾µÄ±í¸ñ¿í¶È (ÏñËØ»ò°Ù·Ö±È)', 'picture_table_width', 0),
        array('È±Ê¡Í¼Æ¬Ñ¶Ï¢ÊÇ²»¿É¼ûµÄ', 'display_pic_info', 1),
        array('ÒªÔÚÆÀÂÛÖÐ¹ýÂËµÄ²»Á¼ÎÄ×Ö', 'filter_bad_words', 1),
        array('ÔÊÐíÔÚÆÀÂÛÖÐÊ¹ÓÃÐ¦Á³Í¼Ê¾', 'enable_smilies', 1),
        array('Í¼Æ¬ÃèÊöµÄ×î´ó³¤¶È', 'max_img_desc_length', 0),
        array('ÆÀÂÛÖÐÃ¿¸öµ¥´ÊµÄ×î´ó×Ö·ûÊý', 'max_com_wlength', 0),
        array('ÆÀÂÛÖÐÃ¿ÐÐÎÄ×ÖµÄ×î´ó×ÖÊý', 'max_com_lines', 0),
        array('ÆÀÂÛµÄ×î´ó³¤¶È', 'max_com_size', 0),
        array('Õ¹Ê¾µçÓ°¼ô¼­', 'display_film_strip', 1), //new in cpg1.2.0
        array('µçÓ°¼ô¼­ÖÐµÄÏîÄ¿Êý', 'max_film_strip_items', 0), //new in cpg1.2.0

        'Pictures and thumbnails settings',
        array('JPEGÎÄ¼þÆ·ÖÊ', 'jpeg_qual', 0),
        array('Î¢ËõÍ¼µÄ×î´ó¿í¶È¼°¸ß¶È <b>*</b>', 'thumb_width', 0), //new in cpg1.2.0
        array('ÓÃ³ß´ç(Î¢ËõÍ¼Æ¬µÄ¿í¶È»ò¸ß¶È»òÌØÖÊ)<b>*</b>', //new in cpg1.2.0 'thumb_use', 7),
        array('½¨Á¢ÖÐµÈ´óÐ¡Í¼Æ¬','make_intermediate',1),
        array('ÖÐµÈ´óÐ¡Í¼Æ¬µÄ¿í¶È»ò¸ß¶È <b>*</b>', 'picture_width', 0),
        array('ÉÏ´«Í¼Æ¬µÄ×î´ó×Ö·ûÊý(KB)', 'max_upl_size', 0),
        array('ÉÏ´«Í¼Æ¬µÄ×î´ó¿í¶È»ò¸ß¶È(ÏñËØ)', 'max_upl_width_height', 0),

	'ÓÃ»§ÉèÖÃ',
	array('ÔÊÐíÐÂÓÃ»§×¢²á', 'allow_user_registration', 1),
	array('ÐÂÓÃ»§ÐèÒªµç×ÓÓÊ¼þÑéÖ¤', 'reg_requires_valid_email', 1),
	array('ÔÊÐí²»Í¬ÓÃ»§Ê¹ÓÃÍ¬Ò»¸öµç×ÓÓÊ¼þ', 'allow_duplicate_emails_addr', 1),
	array('ÓÃ»§¿ÉÒÔÓÐË½ÈËµÄ×¨¼­', 'allow_private_albums', 1),

	'Í¼Æ¬ÃèÊö¶¨ÖÆ×Ö¶Î(Èç¹û²»Ê¹ÓÃÇëÁô¿Õ)',
	array('×Ö¶Î1', 'user_field1_name', 0),
	array('×Ö¶Î2', 'user_field2_name', 0),
	array('×Ö¶Î3', 'user_field3_name', 0),
	array('×Ö¶Î4', 'user_field4_name', 0),

        'Í¼Æ¬ºÍÎ¢ËõÍ¼µÄ¸ß¼¶Éè¶¨',
        array('¶ÔÎ´µÇÈëµÄÓÃ»§ÏÔÊ¾Ë½ÈË×¨¼­Í¼±ê','show_private',1), //new in cpg1.2.0
        array('ÎÄ¼þÃûÖÐ²»ÔÊÐí³öÏÖµÄ×Ö·û', 'forbiden_fname_char',0),
        array('ÉÏ´«Í¼Æ¬¿É½ÓÊÜµÄÎÄ¼þÀ©Õ¹Ãû', 'allowed_file_extensions',0),
        array('½¨Á¢Î¢ËõÍ¼µÄ·½·¨','thumb_method',2),
        array('ImageMagick \'convert\' ³ÌÐòÂ·¾¶ (ÀýÓÚ /usr/bin/X11/)', 'impath', 0),
        array('ÔÊÐíÍ¼Æ¬ÀàÐÍ (½ö½ö¶ÔImageMagickÓÐÐ§)', 'allowed_img_types',0),
        array('ImageMagickµÄÃüÁî²ÎÊýÑ¡Ïî', 'im_options', 0),
        array('ÔÚJPEGÎÄ¼þÖÐ¶ÁEXIF×ÊÁÏ', 'read_exif_data', 1),
        array('×¨¼­ <b>*</b>', 'fullpath', 0),
        array('ÓÃ»§Í¼Æ¬µÄÄ¿Â¼ <b>*</b>', 'userpics', 0),
        array('ÖÐµÈ´óÐ¡Í¼Æ¬ÎÄ¼þÃûµÄÇ°×º <b>*</b>', 'normal_pfx', 0),
        array('Î¢ËõÍ¼Æ¬ÎÄ¼þÃûµÄÇ°×º <b>*</b>', 'thumb_pfx', 0),
        array('Ä¿Â¼È±Ê¡Ä£Ê½', 'default_dir_mode', 0),
        array('Í¼Æ¬È±Ê¡Ä£Ê½', 'default_file_mode', 0),
        array('È«ÆÁµ¯³ö´°¿ÚÏÂ½ûÖ¹Êó±êÓÒ¼ü¹¦ÄÜ', 'disable_popup_rightclick', 1), //new in cpg1.2.0
        array('ÔÚËùÓÐ &quot;³£¹æ&quot; Ò³Ãæ (JavaScript - no foolproof method) ½ûÖ¹Êó±êÓÒ¼ü¹¦ÄÜ', 'disable_gallery_rightclick', 1), //new in cpg1.2.0

        'Cookies &amp; ×Ö·û¼¯ÉèÖÃ',
        array('cookieÃû³Æ', 'cookie_name', 0),
        array('cookieÂ·¾¶', 'cookie_path', 0),
        array('×Ö·û±àÂë', 'charset', 4),

        'ÔÓÏîÉèÖÃ',
        array('Æô¶¯µ÷ÊÔÄ£Ê½', 'debug_mode', 1),

        '<br /><div align="center">Èç¹ûÄãµÄÏà²áÖÐÓÐÍ¼Æ¬£¬±ê¼ÇÎª*µÄ×Ö¶Î±ØÐë±»¸Ä±ä</div><br />'
);

// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
	'empty_name_or_com' => 'ÇëÊäÈëÄãµÄÃû×ÖºÍÆÀÂÛÄÚÈÝ',
	'com_added' => 'ÄãµÄÆÀÂÛÒÑ¾­¼ÓÈë',
	'alb_need_title' => 'Äã±ØÐëÎª×¨¼­Ìá¹©Ò»¸ö±êÌâ£¡',
	'no_udp_needed' => '²»±ØÒª½øÐÐ¸üÐÂ¡£',
	'alb_updated' => '×¨¼­ÒÑ¾­¸üÐÂ',
	'unknown_album' => 'ËùÑ¡ÔñµÄ×¨¼­²»´æÔÚ»òÄãÃ»ÓÐÈ¨ÏÞÉÏ´«Í¼Æ¬µ½´Ë×¨¼­ÖÐ',
	'no_pic_uploaded' => 'Ã»ÓÐÍ¼Æ¬±»ÉÏ´« !<br><br>Èç¹ûÄãÈ·¶¨ÓÐÑ¡ÔñÍ¼Æ¬ÉÏ´«, Çë¼ì²é·þÎñÆ÷ÊÇ·ñÔÊÐíÉÏ´«ÎÄ¼þ...',
	'err_mkdir' => '²»ÄÜ½¨Á¢Ä¿Â¼ %s !',
	'dest_dir_ro' => 'Ä¿µÄÄ¿Â¼ %s ²»ÄÜÐ´Èë !',
	'err_move' => '²»ÄÜÒÆ¶¯ %s µ½ %s !',
	'err_fsize_too_large' => 'ÄãÉÏ´«µÄÍ¼Æ¬Ì«´ó (×î´óÍ¼Æ¬³ß´çÊÇ %s x %s) !',
	'err_imgsize_too_large' => 'ÄãÉÏ´«µÄÍ¼Æ¬Ì«´ó (×î´óÍ¼Æ¬×Ö½ÚÊýÊÇ %s KB) !',
	'err_invalid_img' => 'ÉÏ´«µÄÎÄ¼þ²»ÊÇÓÐÐ§µÄÍ¼Æ¬¸ñÊ½ !',
	'allowed_img_types' => 'ÄãÖ»¿ÉÒÔÉÏ´« %s ÕÅÍ¼Æ¬.',
	'err_insert_pic' => 'Í¼Æ¬ \'%s\' ÎÞ·¨¼ÓÈë´Ë×¨¼­ÖÐ ',
	'upload_success' => 'Í¼Æ¬³É¹¦ÉÏ´«<br><br>µ±¹ÜÀíÕßÉóºËºóÄã¾Í¿ÉÒÔ¿´µ½Í¼Æ¬ÁË.',
	'info' => 'Ñ¶Ï¢',
	'com_added' => 'ÆÀÂÛÒÑ¼ÓÈë',
	'alb_updated' => '×¨¼­ÒÑ¸üÐÂ',
	'err_comment_empty' => 'ÆÀÂÛÄÚÈÝÊÇ¿ÕµÄ !',
	'err_invalid_fext' => 'Ö»ÓÐÏÂÁÐµÄÎÄ¼þÀ©Õ¹Ãû²Å¿ÉÒÔÊ¹ÓÃ : <br><br>%s.',
	'no_flood' => '±§Ç¸£¬ÄãÒÑ¾­ÊÇ×îºóÒ»¸öÎª´ËÍ¼Æ¬Ìá¹©ÆÀÂÛ<br><br>Äã¿ÉÒÔÐÞ¸ÄÄã·¢±í¹ýµÄÆÀÂÛ',
	'redirect_msg' => 'ÄãÕýÔÚ×ªÏò.<br><br><br>°´ \'¼ÌÐø\' Èç¹ûÒ³ÃæÃ»ÓÐ×Ô¶¯Ë¢ÐÂ',
	'upl_success' => 'ÄãµÄÍ¼Æ¬ÒÑ¾­³É¹¦Ìí¼Ó',
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
	'caption' => '±êÌâ',
	'fs_pic' => 'Êµ¼Ê´óÐ¡Í¼Æ¬',
	'del_success' => '³É¹¦É¾³ý',
	'ns_pic' => '³£¹æ´óÐ¡Í¼Æ¬',
	'err_del' => '²»ÄÜÉ¾³ý',
	'thumb_pic' => 'Î¢ËõÍ¼',
	'comment' => 'ÆÀÂÛ',
	'im_in_alb' => '×¨¼­ÖÐµÄÍ¼Æ¬',
	'alb_del_success' => '×¨¼­ \'%s\' ÒÑÉ¾³ý',
	'alb_mgr' => '×¨¼­¹ÜÀí',
	'err_invalid_data' => '½ÓÊÕµ½ÎÞÐ§µÄÊý¾ÝÓÚ \'%s\'',
	'create_alb' => '½¨Á¢×¨¼­ \'%s\'',
	'update_alb' => '¸üÐÂ×¨¼­ \'%s\' ±êÌâÎª \'%s\' Ë÷ÒýÖµÎª \'%s\'',
	'del_pic' => 'É¾³ýÍ¼Æ¬',
	'del_alb' => 'É¾³ý×¨¼­',
	'del_user' => 'É¾³ýÓÃ»§',
	'err_unknown_user' => 'ËùÑ¡ÔñµÄÓÃ»§²»´æÔÚ !',
	'comment_deleted' => 'ÆÀÂÛÒÑ¾­É¾³ý',
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
	'confirm_del' => 'È·¶¨ÒªÉ¾³ý´ËÍ¼Æ¬Âð ? \\nÏà¹ØÆÀÂÛÒ²»á±»É¾³ý.',
	'del_pic' => 'É¾³ý´ËÍ¼Æ¬',
	'size' => '%s x %s ÏñËØ',
	'views' => '%s ´Î',
	'slideshow' => '»ÃµÆÆ¬²¥·Å',
	'stop_slideshow' => 'Í£Ö¹»ÃµÆÆ¬²¥·Å',
	'view_fs' => 'µã»÷¹Û¿´È«ÆÁÍ¼Æ¬',
);

$lang_picinfo = array(
	'title' =>'Í¼Æ¬ÐÅÏ¢',
	'Filename' => 'ÎÄ¼þÃû³Æ',
	'Album name' => '×¨¼­Ãû³Æ',
	'Rating' => 'ÆÀ·Ö (%s ´ÎÍ¶Æ±)',
	'Keywords' => '¹Ø¼ü×Ö',
	'File Size' => 'ÎÄ¼þ´óÐ¡',
	'Dimensions' => 'Î¬¶È',
	'Displayed' => 'ÏÔÊ¾',
	'Camera' => 'ÕÕÏà',
	'Date taken' => 'È¡µÃÈÕÆÚ',
	'Aperture' => '¿×Ï¶',
	'Exposure time' => 'ÆØ¹âÊ±¼ä',
	'Focal length' => '¾Û½¹¿í¶È',
	'Comment' => 'ÆÀÂÛ'
        'addFav'=>'Ôö¼Óµ½ÊÕ²Ø¼ÐÖÐ', //new in cpg1.2.0
        'addFavPhrase'=>'ÊÕ²Ø¼Ð', //new in cpg1.2.0
        'remFav'=>'´ÓÊÕ²Ø¼ÐÖÐÒÆ³ý', //new in cpg1.2.0
);

$lang_display_comments = array(
	'OK' => 'ºÃ',
	'edit_title' => '±à¼­´ËÆÀÂÛ',
	'confirm_delete' => 'È·¶¨ÒªÉ¾³ý´ËÆÀÂÛÂð ?',
	'add_your_comment' => 'Ìí¼ÓÆÀÂÛ',
        'name'=>'Ãû×Ö', //new in cpg1.2.0
        'comment'=>'ÆÀÂÛ', //new in cpg1.2.0
        'your_name' => 'Anon', //new in cpg1.2.0
);

$lang_fullsize_popup = array(
        'click_to_close' => 'µã»÷Í¼Æ¬¹Ø±ÕÕâ¸ö´°¿Ú', //new in cpg1.2.0
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
	'title' => '¼ÄËÍµç×Ó¿¨Æ¬',
	'invalid_email' => '<b>¾¯¸æ</b> : ²»ÕýÈ·µÄµç×ÓÓÊ¼þµØÖ· !',
	'ecard_title' => 'Ò»ÕÅµç×Ó¿¨Æ¬ ÓÉ %s ¼ÄÀ´¸øÄã',
	'view_ecard' => 'Èç¹ûµç×Ó¿¨Æ¬ÎÞ·¨ÕýÈ·ÏÔÊ¾, Çë°´Õâ¸öÁ´½Ó',
	'view_more_pics' => 'µãÕâ¸öÁ´½Ó²é¿´¸ü¶àµÄÍ¼Æ¬ !',
	'send_success' => 'ÄãµÄµç×Ó¿¨Æ¬ÒÑ¾­ËÍ³ö',
	'send_failed' => '±§Ç¸,·þÎñÆ÷ÎÞ·¨ÎªÄã¼ÄËÍµç×Ó¿¨Æ¬...',
	'from' => '´Ó',
	'your_name' => 'ÄãµÄÃû×Ö',
	'your_email' => 'ÄãµÄµç×ÓÓÊ¼þ',
	'to' => 'µ½',
	'rcpt_name' => 'ÊÕ¼þÕßÐÕÃû',
	'rcpt_email' => 'ÊÕ¼þÕßµç×ÓÓÊ¼þ',
	'greetings' => '×£¸£Óï',
	'message' => 'Ñ¶Ï¢',
);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
	'pic_info' => 'Í¼Æ¬&nbsp;Ñ¶Ï¢',
	'album' => '×¨¼­',
	'title' => '±êÌâ',
	'desc' => 'ÃèÊö',
	'keywords' => '¹Ø¼ü×Ö',
	'pic_info_str' => '%sx%s - %sKB - %s ´Î¹Û¿´ - %s ´ÎÍ¶Æ±',
	'approve' => 'ÉóºËÍ¼Æ¬',
	'postpone_app' => 'ÑÓ³ÙÉóºË',
	'del_pic' => 'É¾³ýÍ¼Æ¬',
	'reset_view_count' => 'ÖØÖÃ¹Û¿´Êý',
	'reset_votes' => 'ÖØÖÃÍ¶Æ±',
	'del_comm' => 'É¾³ýÆÀÂÛ',
	'upl_approval' => 'ÉóºËÉÏ´«',
	'edit_pics' => '±à¼­Í¼Æ¬',
	'see_next' => '¹Û¿´ÏÂÒ»ÕÅÍ¼Æ¬',
	'see_prev' => '¹Û¿´ÉÏÒ»ÕÅÍ¼Æ¬',
	'n_pic' => '%s ÕÅÍ¼Æ¬',
	'n_of_pic_to_disp' => 'Í¼Æ¬ÏÔÊ¾ÊýÁ¿',
	'apply' => 'Ìá½»ÐÞ¸Ä'
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
	'group_name' => 'ÓÃ»§×éÃû³Æ',
	'disk_quota' => '¿Õ¼äÈÝÁ¿',
	'can_rate' => '¿ÉÒÔÎªÍ¼Æ¬ÆÀ·Ö',
	'can_send_ecards' => '¿ÉÒÔ¼ÄËÍµç×Ó¿¨Æ¬',
	'can_post_com' => '¿ÉÒÔ·¢±íÆÀÂÛ',
	'can_upload' => '¿ÉÒÔÉÏ´«Í¼Æ¬',
	'can_have_gallery' => '¿ÉÒÔÊ¹ÓÃ¸öÈËÏà²á',
	'apply' => 'Ìá½»ÐÞ¸Ä',
	'create_new_group' => '½¨Á¢ÐÂÓÃ»§×é',
	'del_groups' => 'É¾³ýÑ¡ÔñµÄÓÃ»§×é',
	'confirm_del' => '¾¯¸æ, µ±É¾³ýÁËÒ»¸öÓÃ»§×é, ÊôÓÚ¸ÃÓÃ»§×éµÄÓÃ»§½«±»×ªÒÆÖÁ \'Î´×¢²á\' ÓÃ»§×éÖÐ !Ò²¾ÍÊÇËµ£¬ËûÃÇ½«Ê§È¥²¿·ÝÈ¨ÏÞ\n\nÈ·¶¨ÒªÉ¾³ýÂð ?',
	'title' => '¹ÜÀíÓÃ»§×é',
	'approval_1' => '¹«ÓÃ×¨¼­ÉÏ´«ÉóºË (1)',
	'approval_2' => 'Ë½ÈË×¨¼­ÉÏ´«ÉóºË (2)',
	'note1' => '<b>(1)</b> ÉÏ´«Í¼Æ¬ÖÁ¹«ÓÃµÄ×¨¼­Ðè¹ÜÀíÕßÉóºË',
	'note2' => '<b>(2)</b> ÉÏ´«Í¼Æ¬ÖÁ×Ô¼ºµÄ×¨¼­Ðè¹ÜÀíÕßÉóºË',
	'notes' => '×¢ÊÍ'
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
	'welcome' => '»¶Ó­ !'
);

$lang_album_admin_menu = array(
	'confirm_delete' => 'È·¶¨ÒªÉ¾³ýÕâ¸ö×¨¼­Âð ? \\n¸Ã×¨¼­ÖÐËùÓÐÍ¼Æ¬ºÍÆÀÂÛ½«»áÍ¬Ê±±»É¾³ý.',
	'delete' => 'É¾³ý',
	'modify' => 'ÊôÐÔ',
	'edit_pics' => '±à¼­Í¼Æ¬',
);

$lang_list_categories = array(
	'home' => 'Ö÷Ò³',
	'stat1' => '<b>[pictures]</b> ÕÅÍ¼Æ¬ÓÚ <b>[albums]</b> ¸ö×¨¼­£¬ <b>[cat]</b> ¸öÀà±ð£¬<b>[comments]</b> ¸öÆÀÂÛÆÀÂÛ£¬ ¹Û¿´ <b>[views]</b> ´Î',
	'stat2' => '<b>[pictures]</b> ÕÅÍ¼Æ¬ÓÚ <b>[albums]</b> ¸ö×¨¼­£¬ ¹Û¿´ <b>[views]</b> ´Î',
	'xx_s_gallery' => '%s µÄÏà²á',
	'stat3' => '<b>[pictures]</b> ÕÅÍ¼Æ¬ÓÚ <b>[albums]</b> ¸ö×¨¼­£¬ <b>[comments]</b> ¸öÆÀÂÛÆÀÂÛ£¬¹Û¿´ <b>[views]</b> ´Î'
);

$lang_list_users = array(
	'user_list' => 'ÓÃ»§ÁÐ±í',
	'no_user_gal' => 'Ã»ÓÐÓÃ»§Ïà²á',
	'n_albums' => '%s ¸öÏà²á',
	'n_pics' => '%s ÕÅÍ¼Æ¬'
);

$lang_list_albums = array(
	'n_pictures' => '%s ÕÅÍ¼Æ¬',
	'last_added' => ', ×îÐÂÐÂÔöÓÚ %s'
);

}

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
	'login' => 'µÇÈë',
	'enter_login_pswd' => 'ÊäÈëÓÃ»§ÃûºÍÃÜÂë',
	'username' => 'ÓÃ»§Ãû',
	'password' => 'ÃÜÂë',
	'remember_me' => '¼Ç×¡ÃÜÂë',
	'welcome' => '»¶Ó­ %s ...',
	'err_login' => '*** ²»ÄÜµÇÈë. ÇëÖØÊÔ ***',
	'err_already_logged_in' => 'ÄãÒÑ¾­µÇÈë !',
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
	'logout' => 'µÇ³ö',
	'bye' => 'ÔÙ¼û %s £¬»¶Ó­ÄãÔÙÀ´£¡',
	'err_not_loged_in' => 'ÄãÃ»ÓÐµÇÈë !',
);

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
	'upd_alb_n' => '¸üÐÂ×¨¼­ %s',
	'general_settings' => 'ÆÕÍ¨ÉèÖÃ',
	'alb_title' => '×¨¼­±êÌâ',
	'alb_cat' => '×¨¼­Àà±ð',
	'alb_desc' => '×¨¼­ÃèÊö',
	'alb_thumb' => '×¨¼­Î¢ËõÍ¼',
	'alb_perm' => '²»ÄÜ·ÃÎÊ¸Ã×¨¼­',
	'can_view' => '×¨¼­¿ÉÒÔ¹Û¿´±»',
	'can_upload' => '·Ã¿Í¿ÉÒÔÉÏ´«Í¼Æ¬',
	'can_post_comments' => '·Ã¿Í¿ÉÒÔ·¢±íÆÀÂÛ',
	'can_rate' => '·Ã¿Í¿ÉÒÔÎªÍ¼Æ¬ÆÀ·Ö',
	'user_gal' => 'ÓÃ»§Ïà²á',
	'no_cat' => '* Ã»ÓÐÀà±ð *',
	'alb_empty' => '×¨¼­ÊÇ¿ÕµÄ',
	'last_uploaded' => '×îÐÂÉÏ´«',
	'public_alb' => 'ÈÎºÎÈË (¹«ÓÃ×¨¼­)',
	'me_only' => 'Ö»ÓÐÎÒ',
	'owner_only' => 'Ö»ÓÐ×¨¼­ÓµÓÐ×Å (%s)',
	'groupp_only' => 'Ö»ÓÐÓÃ»§×é»áÔ± \'%s\'',
	'err_no_alb_to_modify' => 'Êý¾Ý¿âÖÐÃ»ÓÐÄã¿ÉÒÔÐÞ¸ÄµÄ×¨¼­.',
	'update' => '¸üÐÂ×¨¼­'
);

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
	'already_rated' => '±§Ç¸,ÄãÒÑ¾­Îª´ËÍ¼Æ¬ÆÀ¹ý·ÖÁË',
	'rate_ok' => 'ÄãµÄÍ¶Æ±ÒÑ¾­±»½ÓÊÜ',
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
<B> {SITE_NAME} </B>µÄ¹ÜÀíÔ±»á¾¡¿ì²é¿´ÄãµÄÌû×Ó,µ«ÎÒÃÇ²»¿ÉÄÜËæÊ±ÏêÏ¸¹Û¿´Ã¿Ò»¸öÌû×Ó. Òò´ËÄã±ØÐèÍ¬ÒâÈÃ±¾Õ¾ÓÐÈ¨ÀûÔÚÈÎºÎÊ±ºò×öÊÊµ±µÄµ÷ÕûÄã·¢±íµÄÌû×Ó,ÒÔ±£³Ö±¾Õ¾¹ßÓÐµÄÆ·ÖÊ.<br>
<br>
Äã±ØÐëÍ¬Òâ²»¿É·¢±íÉæ¼°ÈÎºÎÓÐ¹ØÉ«Çé, ±©Á¦, ²»Á¼, ²»Õýµ±, ²»½¡¿µ, ·Áº¦¹ú¼Ò°²È«µÄÌû×Ó.<B> {SITE_NAME} </B>ÔÚÈÎºÎÊ±ºò¶¼ÓÐÈ¨Àû¹ýÂË²¢±à¼­Äã·¢±íµÄÄÚÈÝ,²¢ÓÐÈ¨ÐÞ¸ÄÄãÁôÔÚ±¾Õ¾ÄÚÄãµÄ×ÊÁÏ. µ«Çë·ÅÐÄ,ÎÒÃÇ²»»á½«ÄãµÄ×ÊÁÏ×ª¸øÆäËûÈËÊ¹ÓÃ.³ý´ËÖ®Íâ,ÄãÔÚ±¾Õ¾·¢±íµÄÄÚÈÝ±¾Õ¾¶¼²»»áÎªÄã¸ºÈÎºÎÔðÈÎ.<br>
<br>
±¾Õ¾Ê¹ÓÃCOOKIESÀ´´¢´æÄãµÄµçÄÔÉÏÑ¶Ï¢. ÕâÑùÊÇ·½±ãÄã¸ü¿ìËÙÔÄ¶Á±¾Õ¾Ñ¶Ï¢. ÄãµÄµç×ÓÓÊ¼þÖ»ÊÇÈÃÎÒÃÇÈÏÖ¤ÄãµÄ×ÊÁÏ¶øÒÑ,ÎÒÃÇ²»»áÍâÐ¹.<br>
<br>
°´ÏÂ 'ÎÒÍ¬Òâ' ¼ÌÐø.
EOT;

$lang_register_php = array(
	'page_title' => '×¢²áÓÃ»§',
	'term_cond' => 'Ìõ¼þÓë¹æÔò',
	'i_agree' => 'ÎÒÍ¬Òâ',
	'submit' => 'Ìá½»×¢²á',
	'err_user_exists' => 'ÄãËùÌîÐ´µÄÓÃ»§ÃûÒÑ±»ËýÈËÊ¹ÓÃ, ÇëÖØÌîÒ»¸ö',
	'err_password_mismatch' => 'Á½´ÎÃÜÂë²»Ò»Ñù, ÇëÖØÌîÒ»´Î',
	'err_uname_short' => 'ÓÃ»§Ãû³ÆÖÁÉÙÐè 2 ¸ö×Ö·û',
	'err_password_short' => 'ÃÜÂëÖÁÉÙÐè 2 ¸ö×Ö·û',
	'err_uname_pass_diff' => 'ÓÃ»§ÃûºÍÃÜÂë²»¿ÉÒÔÏàÍ¬',
	'err_invalid_email' => 'ÓÊ¼þµØÖ·²»ÕýÈ·',
	'err_duplicate_email' => 'Õâ¸öµç×ÓÓÊ¼þµØÖ·ÒÑ¾­±»ÆäËûÈËÊ¹ÓÃ¹ýÁË',
	'enter_info' => 'ÊäÈë×¢²áÑ¶Ï¢',
	'required_info' => '±ØÌîµÄ×ÊÁÏ',
	'optional_info' => 'Ñ¡ÌîµÄ×ÊÁÏ',
	'username' => 'ÓÃ»§Ãû',
	'password' => 'ÃÜÂë',
	'password_again' => 'È·ÈÏÃÜÂë',
	'email' => 'µç×ÓÓÊ¼þ',
	'location' => 'Î»ÖÃ',
	'interests' => 'ÐËÈ¤',
	'website' => 'Ö÷Ò³',
	'occupation' => 'Ö°Òµ',
	'error' => '´íÎó',
	'confirm_email_subject' => '%s - ×¢²áÈ·ÈÏ',
	'information' => 'Ñ¶Ï¢',
	'failed_sending_email' => '²»ÄÜËÍµ½Äã×¢²áËùÌá¹©µÄÓÊ¼þÖÐ£¡',
	'thank_you' => '¸ÐÐ»ÄãµÄ×¢²á.<br><br>Ò»·â¼¤»îÄãÕÊºÅµÄÓÊ¼þ½«±»ËÍµ½Äã×¢²áËùÌá¹©µÄÓÊÏäÖÐ.',
	'acct_created' => 'ÄãµÄÕÊºÅÒÑ¾­½¨Á¢£¬ÄãÏÖÔÚ¿ÉÒÔÓÃÄãµÄÓÃ»§ÃûºÍÃÜÂëµÇÈë',
	'acct_active' => 'ÄãµÄÕÊºÅÒÑ¾­¼¤»î£¬ÄãÏÖÔÚ¿ÉÒÔÓÃÄãµÄÓÃ»§ÃûºÍÃÜÂëµÇÈë',
	'acct_already_act' => 'ÄãµÄÕÊºÅÒÑ¾­¼¤»î£¡',
	'acct_act_failed' => '´ËÕÊºÅ²»ÄÜ¼¤»î£¡',
	'err_unk_user' => 'Ñ¡ÔñµÄÓÃ»§²»´æÔÚ£¡',
	'x_s_profile' => '%s\' µÄ¸öÈË×ÊÁÏ',
	'group' => 'ÓÃ»§×é',
	'reg_date' => '¼ÓÈëÈÕÆÚ',
	'disk_usage' => '¿Õ¼äÊ¹ÓÃÁ¿',
	'change_pass' => 'ÐÞ¸ÄÃÜÂë',
	'current_pass' => 'µ±Ç°ÃÜÂë',
	'new_pass' => 'ÐÂÃÜÂë',
	'new_pass_again' => 'ÔÙÊäÒ»´ÎÐÂÃÜÂë',
	'err_curr_pass' => 'µ±Ç°ÃÜÂë²»ÕýÈ·',
	'apply_modif' => 'Ìá½»ÐÞ¸Ä',
	'change_pass' => 'ÐÞ¸ÄÎÒµÄÃÜÂë',
	'update_success' => 'ÄãµÄ¸öÈË×ÊÁÏÒÑ¾­¸üÐÂ',
	'pass_chg_success' => 'ÄãµÄÃÜÂëÒÑ¾­¸Ä±ä',
	'pass_chg_error' => 'ÄãµÄÃÜÂëÃ»ÓÐ¸Ä±ä',
);

$lang_register_confirm_email = <<<EOT
¸ÐÐ»ÄãÔÚ {SITE_NAME} µÄ×¢²á

ÄãµÄÕÊºÅ : "{USER_NAME}"
ÄãµÄÃÜÂë : "{PASSWORD}"

ÎªÁË¼¤»îÄãµÄÕÊºÅ£¬Äã±ØÐëµã»÷ÏÂÃæµÄÁ´½Ó
»òÕß¿½±´Õâ¸öÁ´½ÓÈ»ºóÕ³Ìùµ½ÄãµÄä¯ÀÀÆ÷ÖÐ¡£

{ACT_LINK}

×£¸£Äã£¬

{SITE_NAME} ¹ÜÀíÍÅ¶Ó

EOT;

}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
	'title' => '¹Û¿´ÆÀÂÛ',
	'no_comment' => 'Ã»ÓÐÆÀÂÛ¿ÉÒÔ¹Û¿´',
	'n_comm_del' => '%s ¸öÆÀÂÛÒÑ¾­É¾³ý',
	'n_comm_disp' => 'ÒªÏÔÊ¾µÄÆÀÂÛÊýÁ¿',
	'see_prev' => '¿´Ç°Ò»¸ö',
	'see_next' => '¿´ÏÂÒ»¸ö',
	'del_comm' => 'É¾³ýËùÑ¡µÄÆÀÂÛ',
);


// ------------------------------------------------------------------------- //
// File search.php - OK
// ------------------------------------------------------------------------- //

if (defined('SEARCH_PHP')) $lang_search_php = array(
	0 => 'ËÑË÷Í¼Æ¬',
);

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
	'page_title' => 'ËÑË÷ÐÂÍ¼Æ¬',
	'select_dir' => 'Ñ¡ÔñÄ¿Â¼',
	'select_dir_msg' => '±¾¹¦ÄÜ¿ÉÒÔÈÃÄãÅú´Î¼ÓÈëÄãÓÃFTPÉÏ´«µÄÍ¼Æ¬.<br><br>ÇëÑ¡ÔñÄãËùÉÏ´«µÄÍ¼Æ¬Ä¿Â¼',
	'no_pic_to_add' => 'Ã»ÓÐÍ¼Æ¬¿ÉÒÔ¼ÓÈë',
	'need_one_album' => 'ÒªÊ¹ÓÃ´Ë¹¦ÄÜÖÁÉÙÒªÓÐÒ»¸ö×¨¼­',
	'warning' => '¾¯¸æ',
	'change_perm' => '³ÌÐòÎÞ·¨Ð´ÈëÕâ¸öÄ¿Â¼, ÇëÐÞ¸ÄÄ¿Â¼µÄÊôÐÔ Îª 755 »ò 777 ºóÔÙÊÔÒ»´Î!',
	'target_album' => '<b>ÐÂÔöÍ¼Æ¬ &quot;</b>%s<b>&quot; µ½ </b>%s',
	'folder' => 'ÎÄ¼þ¼Ð',
	'image' => 'Í¼Æ¬',
	'album' => 'Ïà²á',
	'result' => '½á¹û',
	'dir_ro' => '²»ÄÜÐ´Èë. ',
	'dir_cant_read' => '²»ÄÜ¶ÁÈ¡. ',
	'insert' => 'ÐÂÔöÍ¼Æ¬ÖÁÏà²á',
	'list_new_pic' => 'ÐÂÍ¼Æ¬ÁÐ±í',
	'insert_selected' => '¼ÓÈëÑ¡ÔñµÄÍ¼Æ¬',
	'no_pic_found' => 'Ã»ÓÐÐÂµÄÍ¼Æ¬',
	'be_patient' => 'ÇëÄÍÐÄÒ»µã, ³ÌÐòÐèÒªÒ»Ð©Ê±¼äÀ´ÐÂÔöÍ¼Æ¬',
	'notes' =>  '<ul>'.
				'<li><b>OK</b> : ±íÃ÷Í¼Æ¬ÒÑ³É¹¦¼ÓÈë'.
				'<li><b>DP</b> : ±íÃ÷Í¼Æ¬ÖØ¸´»òÒÑ´æÔÚÓÚÊý¾Ý¿âÖÐ'.
				'<li><b>PB</b> : ±íÃ÷Í¼Æ¬ÎÞ·¨¼ÓÈë, Çë¼ì²éÉèÖÃ»òÍ¼Æ¬´æ·ÅÄ¿Â¼µÄÊ¹ÓÃÈ¨ÏÞ'.
				'<li>Èç¹û OK, DP, PB \'·ûºÅ\' Ã»ÓÐÏÔÊ¾Çë°´»µµôµÄÍ¼Æ¬¿´¿´ PHP ÏÔÊ¾µÄ´íÎóÑ¶Ï¢'.
				'<li>Èç¹ûä¯ÀÀÆ÷ÓâÊ±, Çëµã»÷Ë¢ÐÂ°´Å¥'.
				'</ul>',
);


// ------------------------------------------------------------------------- //
// File thumbnails.php
// ------------------------------------------------------------------------- //

// Void

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) $lang_banning_php = array(
                'title' => '½ûÖ¹ÓÃ»§', //new in cpg1.2.0
                'user_name' => 'ÓÃ»§Ãû', //new in cpg1.2.0
                'ip_address' => 'IPµØÖ·', //new in cpg1.2.0
                'expiry' => 'ÓâÆÚ(Áô¿Õ´ú±íÓÀ¾Ã½ûÖ¹¸ÃÓÃ»§)', //new in cpg1.2.0
                'edit_ban' => '±£´æÉè¶¨', //new in cpg1.2.0
                'delete_ban' => 'É¾³ý', //new in cpg1.2.0
                'add_new' => 'ÐÂÔö½ûÖ¹ÓÃ»§', //new in cpg1.2.0
                'add_ban' => 'Ôö¼Ó', //new in cpg1.2.0
);

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) $lang_upload_php = array(
	'title' => 'ÉÏ´«Í¼Æ¬',
	'max_fsize' => 'ÔÊÐíÉÏ´«ÎÄ¼þ×î´ó³ß´çÎª %s KB',
	'album' => '×¨¼­',
	'picture' => 'Í¼Æ¬',
	'pic_title' => 'Í¼Æ¬±êÌâ',
	'description' => 'Í¼Æ¬ÃèÊö',
	'keywords' => '¹Ø¼ü×Ö(ÇëÒÔ¿Õ¸ñ·Ö¿ª)',
	'err_no_alb_uploadables' => '±§Ç¸£¬Ã»ÓÐ¿ÉÒÔÉÏ´«Í¼Æ¬µÄ×¨¼­',
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
	'title' => 'ÓÃ»§¹ÜÀí',
	'name_a' => 'Ãû³ÆÉýÐòÅÅÁÐ',
	'name_d' => 'Ãû×Ö½µÐòÅÅÁÐ',
	'group_a' => 'ÓÃ»§×éÉýÐòÅÅÁÐ',
	'group_d' => 'ÓÃ»§×é½µÐòÅÅÁÐ',
	'reg_a' => '×¢²áÈÕÆÚÉýÐòÅÅÁÐ',
	'reg_d' => '×¢²áÈÕÆÚ½µÐòÅÅÁÐ',
	'pic_a' => 'Í¼Æ¬ÊýÉýÐòÅÅÁÐ',
	'pic_d' => 'Í¼Æ¬Êý½µÐòÅÅÁÐ',
	'disku_a' => '´ÅÅÌÊ¹ÓÃÁ¿ÉýÐòÅÅÁÐ',
	'disku_d' => '´ÅÅÌÊ¹ÓÃÁ¿½µÐòÅÅÁÐ',
	'sort_by' => 'ÓÃ»§ÅÅÐò°´ÕÕ',
	'err_no_users' => 'ÓÃ»§×ÊÁÏ±íÊÇ¿ÕµÄ !',
	'err_edit_self' => 'ÄãÎÞ·¨±à¼­ÄãµÄ¸öÈË×ÊÁÏ, ÇëÀûÓÃ \'ÎÒµÄ¸öÈË×ÊÁÏ\' À´±à¼­',
	'edit' => '±à¼­',
	'delete' => 'É¾³ý',
	'name' => 'ÓÃ»§Ãû',
	'group' => 'ÓÃ»§×é',
	'inactive' => 'Î´¼¤»î',
	'operations' => '²Ù×÷',
	'pictures' => 'Í¼Æ¬',
	'disk_space' => '¿Õ¼ä ÒÑÊ¹ÓÃ / ×Ü¼Æ',
	'registered_on' => '×¢²áÓÚ',
	'u_user_on_p_pages' => '%d ¸öÓÃ»§ÓÚ %d Ò³',
	'confirm_del' => 'È·¶¨ÒªÉ¾³ýÕâ¸öÓÃ»§Âð£¿\\nËùÓÐËûµÄÏà²áºÍÍ¼Æ¬¶¼½«±»É¾³ý¡£',
	'mail' => 'ÓÊ¼þ',
	'err_unknown_user' => 'Ñ¡ÔñµÄÓÃ»§²»´æÔÚ£¡',
	'modify_user' => '±à¼­ÓÃ»§',
	'notes' => '×¢Òâ',
	'note_list' => '<li>Èç¹ûÄã²»Ïë¸Ä±äµ±Ç°µÄÃÜÂë, Çë½«"ÃÜÂë"À¸Áô¿Õ',
	'password' => 'ÃÜÂë',
	'user_active' => 'ÓÃ»§ÊÇ¼¤»îµÄ',
	'user_group' => 'ÓÃ»§×é',
	'user_email' => 'ÓÃ»§µç×ÓÓÊ¼þ',
	'user_web_site' => 'ÓÃ»§ÍøÕ¾',
	'create_new_user' => '½¨Á¢ÐÂÓÃ»§',
	'user_location' => 'ÓÃ»§Î»ÖÃ',
	'user_interests' => 'ÓÃ»§ÐËÈ¤',
	'user_occupation' => 'ÓÃ»§Ö°Òµ',
);

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //

if (defined('UTIL_PHP')) $lang_util_php = array(
        'title' => 'ÖØÐÂµ÷ÕûÍ¼Æ¬³ß´ç', //new in cpg1.2.0
        'what_it_does' => '×öÊ²Ã´', //new in cpg1.2.0
        'what_update_titles' => 'ÓÃÎÄ¼þÃû¸üÐÂ±êÌâ', //new in cpg1.2.0
        'what_delete_title' => 'É¾³ý±êÌâ', //new in cpg1.2.0
        'what_rebuild' => 'ÖØ½¨Î¢ËõÍ¼ºÍÖØÐÂµ÷Õû¹ý³ß´çµÄÍ¼Æ¬', //new in cpg1.2.0
        'what_delete_originals' => 'É¾³ýÔ­Ê¼³ß´çµÄÍ¼Æ¬²¢ÓÃÐÂ³ß´çÍ¼Æ¬Ìæ´ú', //new in cpg1.2.0
        'file' => 'ÎÄ¼þ', //new in cpg1.2.0
        'title_set_to' => '±êÌâÉèÖÃÎª', //new in cpg1.2.0
        'submit_form' => 'Ìá½»', //new in cpg1.2.0
        'updated_succesfully' => '³É¹¦¸üÐÂ', //new in cpg1.2.0
        'error_create' => '½¨Á¢´íÎó', //new in cpg1.2.0
        'continue' => '´¦Àí¸ü¶àµÄÍ¼Æ¬', //new in cpg1.2.0
        'main_success' => 'ÎÄ¼þ %s ÒÑ¾­³É¹¦µÄ×÷ÎªÒ»¸öÖ÷Í¼Æ¬', //new in cpg1.2.0
        'error_rename' => ' %s µ½ %s ¸üÃû´íÎó', //new in cpg1.2.0
        'error_not_found' => 'ÎÄ¼þ %s ²»ÄÜ±»ÕÒµ½', //new in cpg1.2.0
        'back' => '·µ»ØÖ÷Ò³Ãæ', //new in cpg1.2.0
        'thumbs_wait' => '¸üÐÂÎ¢ËõÍ¼ºÍ/»òÖØÐÂµ÷ÕûÍ¼Æ¬³ß´ç,ÇëµÈºò...', //new in cpg1.2.0
        'thumbs_continue_wait' => '¼ÌÐø¸üÐÂÎ¢ËõÍ¼ºÍ/»òÖØÐÂµ÷ÕûÍ¼Æ¬³ß´ç...', //new in cpg1.2.0
        'titles_wait' => '¸üÐÂ±êÌâ, ÇëµÈºò...', //new in cpg1.2.0
        'delete_wait' => 'É¾³ý±êÌâ, ÇëµÈºò...', //new in cpg1.2.0
        'replace_wait' => 'É¾³ýÔ­Ê¼Í¼Æ¬²¢ÓÃµ÷Õû¹ý³ß´çµÄÍ¼Æ¬Ìæ´ú£¬ÇëµÈºò..', //new in cpg1.2.0
        'instruction' => '¿ìËÙÖ¸Áî', //new in cpg1.2.0
        'instruction_action' => 'Ñ¡Ôñ¶¯×÷', //new in cpg1.2.0
        'instruction_parameter' => 'ÉèÖÃ²ÎÊý', //new in cpg1.2.0
        'instruction_album' => 'Ñ¡Ôñ×¨¼­', //new in cpg1.2.0
        'instruction_press' => 'µã»÷ %s', //new in cpg1.2.0
        'update' => '¸üÐÂÏà²áºÍ/»òÖØÐÂµ÷ÕûÍ¼Æ¬³ß´ç', //new in cpg1.2.0
        'update_what' => 'Ê²Ã´Ó¦¸Ã±»¸üÐÂ', //new in cpg1.2.0
        'update_thumb' => '½ö½öÎ¢ËõÍ¼', //new in cpg1.2.0
        'update_pic' => '½ö½öÖØÐÂµ÷Õû¹ý³ß´çµÄÍ¼Æ¬', //new in cpg1.2.0
        'update_both' => 'Î¢ËõÍ¼ºÍÖØÐÂµ÷Õû¹ý³ß´çµÄÍ¼Æ¬', //new in cpg1.2.0
        'update_number' => 'Ã¿´Îµã»÷´¦ÀíÍ¼Æ¬µÄÊýÁ¿', //new in cpg1.2.0
        'update_option' => '(¼ÙÈçÎÊÌâÒÀÈ»´æÔÚ£¬ÊÔ×Åµ÷µÍÕâ¸öÉèÖÃ)', //new in cpg1.2.0
        'filename_title' => 'ÎÄ¼þÃû &rArr; Í¼Æ¬±êÌâ', //new in cpg1.2.0
        'filename_how' => 'ÎÄ¼þÃûÓ¦¸ÃÈçºÎÐÞ¸Ä', //new in cpg1.2.0
        'filename_remove' => 'ÒÆ×ß.jpg½áÎ²²¢ÓÃ´ø¿Õ¸ñµÄ _(ÏÂ»®Ïß)Ìæ´ú', //new in cpg1.2.0
        'filename_euro' => '¸Ä±ä 2003_11_23_13_20_20.jpg µ½ 23/11/2003 13:20', //new in cpg1.2.0
        'filename_us' => '¸Ä±ä 2003_11_23_13_20_20.jpg µ½ 11/23/2003 13:20', //new in cpg1.2.0
        'filename_time' => '¸Ä±ä 2003_11_23_13_20_20.jpg to 13:20', //new in cpg1.2.0
        'delete' => 'É¾³ýÍ¼Æ¬±êÌâ»òÕßÔ­Ê¼³ß´çµÄÍ¼Æ¬', //new in cpg1.2.0
        'delete_title' => 'É¾³ýÍ¼Æ¬±êÌâ', //new in cpg1.2.0
        'delete_original' => 'É¾³ýÔ­Ê¼³ß´çµÄÍ¼Æ¬', //new in cpg1.2.0
        'delete_replace' => 'É¾³ýÔ­Ê¼µÄÍ¼Æ¬²¢ÓÃÐÂµÄÍ¼Æ¬Ìæ´ú', //new in cpg1.2.0
        'select_album' => 'Ñ¡Ôñ×¨¼­', //new in cpg1.2.0
);

?>