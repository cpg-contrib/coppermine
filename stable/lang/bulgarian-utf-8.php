<?php
// ------------------------------------------------------------------------- //
//  Coppermine Photo Gallery                                                 //
// ------------------------------------------------------------------------- //
//  Copyright (C) 2002,2003  Grйgory DEMAR <gdemar@wanadoo.fr>               //
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

$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('байт', 'Kб', 'Mб');

// Day of weeks and months
$lang_day_of_week = array('Н�&micro;д', 'Пон', 'Вто', 'Сря', 'Ч�&micro;т', 'П�&micro;т', 'Съб');
$lang_month = array('Яну', 'Ф�&micro;�&sup2;', 'Мар', 'Апр', 'Май', 'Юни', 'Юли', 'А�&sup2;�&sup3;', 'С�&micro;п', 'Окт', 'Но�&micro;', 'Д�&micro;к');

// Some common strings
$lang_yes = 'Да';
$lang_no  = 'Н�&micro;';
$lang_back = 'НАЗАД';
$lang_continue = 'Продължи';
$lang_info = 'Информация';
$lang_error = 'Гр�&micro;шка';

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$album_date_fmt =    '%B %d, %Y';
$lastcom_date_fmt =  '%m/%d/%y �&sup2; %H:%M';
$lastup_date_fmt = '%B %d, %Y';
$register_date_fmt = '%B %d, %Y';
$lasthit_date_fmt = '%B %d, %Y �&sup2; %I:%M %p';
$comment_date_fmt =  '%B %d, %Y �&sup2; %I:%M %p';

// For the word censor
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*');

$lang_meta_album_names = array(
	'random' => 'Случайни картинки',
	'lastup' => 'Посл�&micro;дно доба�&sup2;�&micro;ни',
	'lastcom' => 'Посл�&micro;дни ком�&micro;нтари',
	'topn' => 'Най �&sup3;л�&micro;дани',
	'toprated' => 'Най оц�&micro;н�&micro;ни',
	'lasthits' => 'Посл�&micro;дно �&sup2;идяни',
	'search' => 'Р�&micro;зултати от търс�&micro;н�&micro;'
);

$lang_errors = array(
	'access_denied' => 'Ви�&micro; нямат�&micro; пра�&sup2;а за достъп до тази страница.',
	'perm_denied' => 'Ви�&micro; нямат�&micro; пра�&sup2;а за да изпълнит�&micro; тази оп�&micro;рация.',
	'param_missing' => 'Скрипта �&micro; из�&sup2;икан б�&micro;з н�&micro;обходимит�&micro; парам�&micro;три.',
	'non_exist_ap' => 'Избраният албум/картинка н�&micro; същ�&micro;ст�&sup2;у�&sup2;а !',
	'quota_exceeded' => 'Лимита за място �&micro; пр�&micro;�&sup2;иш�&micro;н<br /><br />Ви�&micro; имат�&micro; отд�&micro;л�&micro;но място от [quota]K, Вашит�&micro; картинки за�&micro;мат [space]K, а доба�&sup2;яйки тази картинка щ�&micro; пр�&micro;�&sup2;иши лимита.',
	'gd_file_type_err' => 'Ко�&sup3;ато с�&micro; използ�&sup2;а GD библиот�&micro;ката разр�&micro;ш�&micro;нит�&micro; �&sup2;идо�&sup2;�&micro; картинки са само JPEG и PNG.',
	'invalid_image' => 'Картинката която ст�&micro; качили �&micro; по�&sup2;р�&micro;д�&micro;на и н�&micro; мож�&micro; да с�&micro; обработи',
	'resize_failed' => 'Н�&micro; мож�&micro; да с�&micro; създад�&micro; малка картинка.',
	'no_img_to_display' => 'Няма картинка за показ�&sup2;ан�&micro;',
	'non_exist_cat' => 'Избраната кат�&micro;�&sup3;ория н�&micro; същ�&micro;ст�&sup2;у�&sup2;а',
	'orphan_cat' => 'Кат�&micro;�&sup3;орията има н�&micro;същ�&micro;ст�&sup2;у�&sup2;ащ родит�&micro;л, стартирайт�&micro; м�&micro;наж�&micro;ра на кат�&micro;�&sup3;ории за да кори�&sup3;ират�&micro; пробл�&micro;ма.',
	'directory_ro' => 'В дир�&micro;ктория \'%s\' н�&micro; мож�&micro; да с�&micro; запис�&sup2;а, картинката н�&micro; мож�&micro; да с�&micro; изтри�&micro;',
	'non_exist_comment' => 'Избрания ком�&micro;нтар н�&micro; същ�&micro;ст�&sup2;у�&sup2;а.',
	'pic_in_invalid_album' => 'Картинката н�&micro; същ�&micro;ст�&sup2;у�&sup2;а �&sup2; албум (%s)!?'
);

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
	'alb_list_title' => 'Виж списъка на албумит�&micro;',
	'alb_list_lnk' => 'Списък на албумит�&micro;',
	'my_gal_title' => 'Отиди �&sup2; личната �&sup3;ал�&micro;рия',
	'my_gal_lnk' => 'Лична �&sup3;ал�&micro;рия',
	'my_prof_lnk' => 'Моя профил',
	'adm_mode_title' => 'Пр�&micro;мини �&sup2; администрати�&sup2;�&micro;н р�&micro;жим',
	'adm_mode_lnk' => 'Администрати�&sup2;�&micro;н р�&micro;жим',
	'usr_mode_title' => 'Пр�&micro;мини �&sup2; потр�&micro;бит�&micro;лски р�&micro;жим',
	'usr_mode_lnk' => 'Потр�&micro;бит�&micro;лски р�&micro;жим',
	'upload_pic_title' => 'Доба�&sup2;и картинка �&sup2; албум',
	'upload_pic_lnk' => 'Доба�&sup2;и картинка',
	'register_title' => 'Създай но�&sup2; потр�&micro;бит�&micro;л',
	'register_lnk' => 'Р�&micro;�&sup3;истрирай с�&micro;',
	'login_lnk' => 'Вход',
	'logout_lnk' => 'Изход',
	'lastup_lnk' => 'Посл�&micro;дно доба�&sup2;�&micro;ни',
	'lastcom_lnk' => 'Посл�&micro;дни ком�&micro;нтари',
	'topn_lnk' => 'Най �&sup3;л�&micro;дани',
	'toprated_lnk' => 'Най оц�&micro;н�&micro;ни',
	'search_lnk' => 'Търс�&micro;н�&micro;',
);

$lang_gallery_admin_menu = array(
	'upl_app_lnk' => 'Одобр�&micro;ни�&micro; на картинки',
	'config_lnk' => 'Конфи�&sup3;урация',
	'albums_lnk' => 'Албуми',
	'categories_lnk' => 'Кат�&micro;�&sup3;ории',
	'users_lnk' => 'Потр�&micro;бит�&micro;ли',
	'groups_lnk' => 'Групи',
	'comments_lnk' => 'Ком�&micro;нтари',
	'searchnew_lnk' => 'Пак�&micro;тно доба�&sup2;ян�&micro; на снимки',
);

$lang_user_admin_menu = array(
	'albmgr_lnk' => 'Създай/подр�&micro;ди моит�&micro; албуми',
	'modifyalb_lnk' => 'Пром�&micro;ни моит�&micro; албуми',
	'my_prof_lnk' => 'Моя профил',
);

$lang_cat_list = array(
	'category' => 'Кат�&micro;�&sup3;ория',
	'albums' => 'Албуми',
	'pictures' => 'Картинки',
);

$lang_album_list = array(
	'album_on_page' => '%d албуми на %d станица(и)'
);

$lang_thumb_view = array(
	'date' => 'ДАТА',
	'name' => 'ИМЕ',
	'sort_da' => 'Сорт. по дата �&sup2;ъзходящо',
	'sort_dd' => 'Сорт. по дата низходящо',
	'sort_na' => 'Сорт. по им�&micro; �&sup2;ъзходящо',
	'sort_nd' => 'Сорт. по дата низходящо',
	'pic_on_page' => '%d картинки на %d страница(и)',
	'user_on_page' => '%d потр�&micro;бит�&micro;ли на %d страница(и)'
);

$lang_img_nav_bar = array(
	'thumb_title' => 'Върни с�&micro; на страницата с малкит�&micro; картинки',
	'pic_info_title' => 'Покажи/скрий информация за картинката',
	'slideshow_title' => 'Слайд шоу',
	'ecard_title' => 'Изпрати тази картинка като �&micro;-картичка',
	'ecard_disabled' => '�&micro;-картички са изключ�&micro;ни',
	'ecard_disabled_msg' => 'Нямаш пра�&sup2;а да изпращаш �&micro;-картички',
	'prev_title' => 'Виж пр�&micro;дишната картинка',
	'next_title' => 'Виж сл�&micro;д�&sup2;ащата картинка',
	'pic_pos' => 'КАРТИНКА %s/%s',
);

$lang_rate_pic = array(
	'rate_this_pic' => 'Оц�&micro;ни тази картинка ',
	'no_votes' => '(няма �&sup3;ласу�&sup2;ан�&micro;)',
	'rating' => '(т�&micro;куща оц�&micro;нка : %s / 5 със %s �&sup3;ласо�&sup2;�&micro;)',
	'rubbish' => 'Никак',
	'poor' => 'Мно�&sup3;о лоша',
	'fair' => 'Лоша',
	'good' => 'Ср�&micro;дна',
	'excellent' => 'Добра',
	'great' => 'Мно�&sup3;о добра',
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
	CRITICAL_ERROR => 'Критична �&sup3;р�&micro;шка',
	'file' => 'Файл: ',
	'line' => 'Линия: ',
);

$lang_display_thumbnails = array(
	'filename' => 'Файл : ',
	'filesize' => 'Гол�&micro;мина : ',
	'dimensions' => 'Разм�&micro;р : ',
	'date_added' => 'Доба�&sup2;�&micro;н на : '
);

$lang_get_pic_data = array(
	'n_comments' => '%s ком�&micro;нтара',
	'n_views' => '%s пр�&micro;�&sup3;л�&micro;да',
	'n_votes' => '(%s �&sup3;ласо�&sup2;�&micro;)'
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
	0 => 'Изход от администрати�&sup2;�&micro;н р�&micro;жим...',
	1 => 'Вход администрати�&sup2;�&micro;н р�&micro;жим...',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
	'alb_need_name' => 'Албума тряб�&sup2;а да има им�&micro; !',
	'confirm_modifs' => 'Си�&sup3;ур�&micro;н ли си, ч�&micro; искаш да напра�&sup2;иш т�&micro;зи пром�&micro;ни ?',
	'no_change' => 'Н�&micro; си напра�&sup2;ил никак�&sup2;а промяна !',
	'new_album' => 'Но�&sup2; албум',
	'confirm_delete1' => 'Си�&sup3;ур�&micro;н ли си, ч�&micro; искаш да изтри�&micro;ш този албум ?',
	'confirm_delete2' => '\nВсички картинки и ком�&micro;нтари които съдържа, щ�&micro; бъдат изтрити !',
	'select_first' => 'Изб�&micro;ри албум пър�&sup2;о',
	'alb_mrg' => 'М�&micro;наж�&micro;р на албумит�&micro;',
	'my_gallery' => '* Моята �&sup3;ал�&micro;рия *',
	'no_category' => '* Няма кат�&micro;�&sup3;ория *',
	'delete' => 'Изтрий',
	'new' => 'Но�&sup2;',
	'apply_modifs' => 'Из�&sup2;ърши модификацийт�&micro;',
	'select_category' => 'Изб�&micro;ри кат�&micro;�&sup3;ория',
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
	'miss_param' => 'Парам�&micro;тър изиск�&sup2;ан за оп�&micro;рация \'%s\' н�&micro; �&micro; доба�&sup2;�&micro;н !',
	'unknown_cat' => 'Избраната кат�&micro;�&sup3;ория н�&micro; същ�&micro;ст�&sup2;у�&sup2;а',
	'usergal_cat_ro' => 'Кат�&micro;�&sup3;ория на потр�&micro;бит�&micro;лски �&sup3;ал�&micro;рии на мож�&micro; да бъд�&micro; изтрита !',
	'manage_cat' => 'Упра�&sup2;л�&micro;ни�&micro; на кат�&micro;�&sup3;орийт�&micro;',
	'confirm_delete' => 'Си�&sup3;ур�&micro;н ли си, ч�&micro; искаш да ИЗТРИЕШ тази кат�&micro;�&sup3;ория',
	'category' => 'Кат�&micro;�&sup3;ория',
	'operations' => 'Оп�&micro;рации',
	'move_into' => 'Пр�&micro;м�&micro;сти �&sup2;',
	'update_create' => 'Обно�&sup2;и/Създай кат�&micro;�&sup3;ория',
	'parent_cat' => 'Гла�&sup2;на кат�&micro;�&sup3;ория',
	'cat_title' => 'За�&sup3;ла�&sup2;и�&micro; на кат�&micro;�&sup3;ория',
	'cat_desc' => 'Описани�&micro; на кат�&micro;�&sup3;ория'
);

// ------------------------------------------------------------------------- //
// File config.php
// ------------------------------------------------------------------------- //

if (defined('CONFIG_PHP')) $lang_config_php = array(
	'title' => 'Конфи�&sup3;урация',
	'restore_cfg' => 'Възстано�&sup2;я�&sup2;ан�&micro; на стойностит�&micro; по подразбиран�&micro;',
	'save_cfg' => 'Запиши но�&sup2;ата конфи�&sup3;урация',
	'notes' => 'Б�&micro;л�&micro;жки',
	'info' => 'Информация',
	'upd_success' => 'Конфи�&sup3;урацията �&micro; обно�&sup2;�&micro;на',
	'restore_success' => 'Конфи�&sup3;урацията по подразбиран�&micro; �&micro; �&sup2;ъзстано�&sup2;�&micro;на',
	'name_a' => 'Им�&micro; �&sup2;ъзходящ',
	'name_d' => 'Им�&micro; низходящ',
	'date_a' => 'Дата �&sup2;ъзходяща',
	'date_d' => 'Дата низходяща'
);

if (defined('CONFIG_PHP')) $lang_config_data = array(
	'Общи настройки',
	array('Им�&micro; на �&sup3;ал�&micro;рия', 'gallery_name', 0),
	array('Описани�&micro; на �&sup3;ал�&micro;рия', 'gallery_description', 0),
	array('�&micro;-майл на администратора на �&sup3;ал�&micro;рията', 'gallery_admin_email', 0),
	array('Адр�&micro;с за �&sup2;ръзката \'Виж ощ�&micro; картинки\' �&sup2; �&micro;-картичка', 'ecards_more_pic_target', 0),
	array('Език', 'lang', 5),
	array('Визуална т�&micro;ма', 'theme', 6),

	'Пр�&micro;�&sup3;л�&micro;д на листа с албуми',
	array('Ширина на �&sup3;ла�&sup2;анта таблица (пикс�&micro;ли или %)', 'main_table_width', 0),
	array('Брой ни�&sup2;а от кат�&micro;�&sup3;орийт�&micro; за �&sup2;изуализация', 'subcat_level', 0),
	array('Брой албуми на страница', 'albums_per_page', 0),
	array('Брой колони за листа на албумит�&micro;', 'album_list_cols', 0),
	array('Гол�&micro;мина на малката картинка �&sup2; пикс�&micro;ли', 'alb_list_thumb_size', 0),
	array('Съдържани�&micro; на �&sup3;ла�&sup2;ната страница', 'main_page_layout', 0),

	'Пр�&micro;�&sup3;л�&micro;д на малки картинки',
	array('Колич�&micro;ст�&sup2;о колонки на страницата', 'thumbcols', 0),
	array('Колич�&micro;ст�&sup2;о р�&micro;до�&sup2;�&micro; на страницата', 'thumbrows', 0),
	array('Максимално колич�&micro;ст�&sup2;о на табулации', 'max_tabs', 0),
	array('Показ�&sup2;ан�&micro; на надписа на картинка (�&sup2; допълн�&micro;ни�&micro; на за�&sup3;ла�&sup2;и�&micro;то) под малката картинка', 'caption_in_thumbview', 1),
	array('Показ�&sup2;ан�&micro; на броя ком�&micro;нтари под малката картинка', 'display_comment_count', 1),
	array('Сортиран�&micro; по подразбиран�&micro; на картинкит�&micro;', 'default_sort_order', 3),
	array('Минимал�&micro;н брой �&sup3;ласу�&sup2;ания за картинка за да с�&micro; �&sup2;ключи �&sup2; листата на \'най-�&sup3;л�&micro;дани\'', 'min_votes_for_rating', 0),

	'Пр�&micro;�&sup3;л�&micro;д на картинка &amp; Насройка на ком�&micro;нтар',
	array('Ширина на таблицата за показ�&sup2;ан�&micro; на картинка (пикс�&micro;ли или %)', 'picture_table_width', 0),
	array('Информация за картинката с�&micro; �&sup2;ижда по подразбиран�&micro;', 'display_pic_info', 1),
	array('Филтрирай \'лошит�&micro;\' думи �&sup2; ком�&micro;нтарит�&micro;', 'filter_bad_words', 1),
	array('Поз�&sup2;оли усми�&sup2;ки �&sup2;', 'enable_smilies', 1),
	array('Максимална дължина на описани�&micro; на картинка', 'max_img_desc_length', 0),
	array('Максимал�&micro;н брой на сим�&sup2;оли �&sup2; дума', 'max_com_wlength', 0),
	array('Максимал�&micro;н брой на р�&micro;до�&sup2;�&micro; �&sup2; ком�&micro;нтар', 'max_com_lines', 0),
	array('Максимална дължина на ком�&micro;нтар �&sup2; сим�&sup2;оли', 'max_com_size', 0),

	'Насторйки на картинки и малки картинки',
	array('Кач�&micro;ст�&sup2;о на JPEG файло�&sup2;�&micro;т�&micro;', 'jpeg_qual', 0),
	array('Максимална �&sup2;исочина или ширина на малка картинка <b>*</b>', 'thumb_width', 0),
	array('Създай м�&micro;ждинни картинки','make_intermediate',1),
	array('Максимална �&sup2;исочина или ширина на м�&micro;ждиннит�&micro; картинки <b>*</b>', 'picture_width', 0),
	array('Максимална �&sup3;ол�&micro;мина на доба�&sup2;�&micro;нит�&micro; картинки (KB)', 'max_upl_size', 0),
	array('Максимална �&sup2;исочина или ширина за доба�&sup2;�&micro;ната картинка (пикс�&micro;ли)', 'max_upl_width_height', 0),

	'Потр�&micro;бит�&micro;лски настройки',
	array('Разр�&micro;ш�&micro;ни�&micro; за създа�&sup2;ан�&micro; на но�&sup2;и потр�&micro;бит�&micro;ли', 'allow_user_registration', 1),
	array('Р�&micro;�&sup3;истриран�&micro;то на потр�&micro;бит�&micro;л изиска�&sup2;а пот�&sup2;ържд�&micro;ни�&micro; с �&micro;-м�&micro;йл', 'reg_requires_valid_email', 1),
	array('Поз�&sup2;оли на д�&sup2;ама потр�&micro;бит�&micro;ли да имат �&micro;днак�&sup2;и �&micro;-м�&micro;йл адр�&micro;си', 'allow_duplicate_emails_addr', 1),
	array('Потр�&micro;бит�&micro;лит�&micro; мо�&sup3;ат да имат лични албуми', 'allow_private_albums', 1),

	'Потр�&micro;бит�&micro;лси пол�&micro;та при описани�&micro;то на картинка (оста�&sup2;и празно, ако н�&micro; с�&micro; полз�&sup2;а)',
	array('Им�&micro; на пол�&micro; 1', 'user_field1_name', 0),
	array('Им�&micro; на пол�&micro; 2', 'user_field2_name', 0),
	array('Им�&micro; на пол�&micro; 3', 'user_field3_name', 0),
	array('Им�&micro; на пол�&micro; 4', 'user_field4_name', 0),

	'Разшир�&micro;ни насторйки на картинки и малки картинки',
	array('Сим�&sup2;оли забран�&micro;ни �&sup2; им�&micro;то на файло�&sup2;�&micro;т�&micro;', 'forbiden_fname_char',0),
	array('Одобр�&micro;ни файло�&sup2;и разшир�&micro;ния за доба�&sup2;�&micro;ни картинки', 'allowed_file_extensions',0),
	array('М�&micro;тод на р�&micro;мащабиран�&micro; на картинкит�&micro;','thumb_method',2),
	array('Път към ImageMagick \'кон�&sup2;�&micro;ртираща\' про�&sup3;рама (прим�&micro;р /usr/bin/X11/)', 'impath', 0),
	array('Разр�&micro;ш�&micro;ни типо�&sup2;�&micro; картинки (�&sup2;алидно само за ImageMagick)', 'allowed_img_types',0),
	array('Опции от команд�&micro;н р�&micro;д за ImageMagick', 'im_options', 0),
	array('Ч�&micro;ти EXIF информация �&sup2; JPEG файло�&sup2;�&micro;т�&micro;', 'read_exif_data', 1),
	array('Албум дир�&micro;ктория <b>*</b>', 'fullpath', 0),
	array('Дир�&micro;ктория за потр�&micro;бит�&micro;лски картинки <b>*</b>', 'userpics', 0),
	array('Пр�&micro;фикс за м�&micro;ждиннит�&micro; картинки <b>*</b>', 'normal_pfx', 0),
	array('Пр�&micro;фикс за малкит�&micro; картинки <b>*</b>', 'thumb_pfx', 0),
	array('Атрибути по подразбиран�&micro; на дир�&micro;кторийт�&micro;', 'default_dir_mode', 0),
	array('Атрибути по подразбиран�&micro; на картинкит�&micro;', 'default_file_mode', 0),

	'Cookies &amp; Настройки на �&micro;нкодин�&sup3;а',
	array('Им�&micro; на cookie-то използ�&sup2;ано от скрипта', 'cookie_name', 0),
	array('Път на cookie-то използ�&sup2;ано то скрипта', 'cookie_path', 0),
	array('Сим�&sup2;ол�&micro;н �&micro;нкодин�&sup3;', 'charset', 4),

	'Допълнит�&micro;лни настройки',
	array('Включи р�&micro;жима на д�&micro;бъ�&sup3;�&sup2;ан�&micro;', 'debug_mode', 1),

	'<br /><div align="center">(*) Пол�&micro;тата маркирани със сим�&sup2;ола * н�&micro; трян�&sup2;а да с�&micro; пром�&micro;нят ако имат�&micro; ВЕЧЕ картинки �&sup2; �&sup3;ал�&micro;рията</div><br />'
);

// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
	'empty_name_or_com' => 'Тряб�&sup2;а да �&sup2;ъ�&sup2;�&micro;д�&micro;т�&micro; �&sup2;аш�&micro;то им�&micro; и ком�&micro;нтар',
	'com_added' => 'Вашия ком�&micro;нтар �&micro; доба�&sup2;�&micro;н',
	'alb_need_title' => 'Тряб�&sup2;а да �&sup2;ъ�&sup2;�&micro;д�&micro;т�&micro; за�&sup3;ла�&sup2;и�&micro; на албума !',
	'no_udp_needed' => 'Няма нужда от обно�&sup2;я�&sup2;ан�&micro;.',
	'alb_updated' => 'Албума �&micro; обно�&sup2;�&micro;н',
	'unknown_album' => 'Избрания албум н�&micro; същ�&micro;ст�&sup2;у�&sup2;а или нямаш достъп до доба�&sup2;ян�&micro; на картинки �&sup2; този албум',
	'no_pic_uploaded' => 'Картинката н�&micro; б�&micro;ш�&micro; доба�&sup2;�&micro;на !<br /><br />Ако наистина ст�&micro; избрали картинка за доба�&sup2;ян�&micro;, про�&sup2;�&micro;р�&micro;т�&micro; дали сър�&sup2;ъра поз�&sup2;оля�&sup2;а кач�&sup2;ан�&micro; на файло�&sup2;�&micro;...',
	'err_mkdir' => 'Н�&micro; мож�&micro; да бъд�&micro; създад�&micro;на дир�&micro;ктория %s !',
	'dest_dir_ro' => 'В дир�&micro;ктория %s скрипта н�&micro; мож�&micro; да запис�&sup2;а !',
	'err_move' => 'Н�&micro;�&sup2;ъзможно �&micro; пр�&micro;м�&micro;ст�&sup2;ан�&micro;то на %s �&sup2; %s !',
	'err_fsize_too_large' => 'Разм�&micro;ра на картинката която доба�&sup2;ят�&micro; �&micro; мно�&sup3;о �&sup3;олям (максимум разр�&micro;ш�&micro;н разм�&micro;р �&micro; %s x %s) !',
	'err_imgsize_too_large' => 'Гол�&micro;мината на файла който доба�&sup2;ят�&micro; �&micro; мно�&sup3;о �&sup3;олям (максималната �&sup3;ол�&micro;мина �&micro; %s KB) !',
	'err_invalid_img' => 'Файла, който доба�&sup2;ят�&micro; н�&micro; �&micro; �&sup2;алидна картинка !',
	'allowed_img_types' => 'Мож�&micro; да доба�&sup2;ят�&micro; само %s картинки.',
	'err_insert_pic' => 'Картинката \'%s\' н�&micro; мож�&micro; да бъд�&micro; доба�&sup2;�&micro;на �&sup2; албума ',
	'upload_success' => 'Вашата картинка б�&micro;ш�&micro; доба�&sup2;�&micro;на усп�&micro;шно<br /><br />Тя щ�&micro; бъд�&micro; �&sup2;идима сл�&micro;д обобр�&micro;ни�&micro;то на администратора.',
	'info' => 'Информация',
	'com_added' => 'Ком�&micro;нтара �&micro; доба�&sup2;�&micro;н',
	'alb_updated' => 'Албума �&micro; обно�&sup2;�&micro;н',
	'err_comment_empty' => 'Вашия ком�&micro;нтар �&sup2; праз�&micro;н !',
	'err_invalid_fext' => 'Само файло�&sup2;�&micro; със сл�&micro;днит�&micro; разшир�&micro;ния с�&micro; при�&micro;мат : <br /><br />%s.',
	'no_flood' => 'Съжаля�&sup2;ам�&micro;, но Ви�&micro; ст�&micro; а�&sup2;тора на посл�&micro;дния ком�&micro;нтар за тази картинка.<br /><br />Р�&micro;дактирайт�&micro; ком�&micro;тара, ако искат�&micro; да напра�&sup2;ит�&micro; пром�&micro;ни',
	'redirect_msg' => 'Ви�&micro; ст�&micro; пр�&micro;насоч�&micro;ни.<br /><br /><br />Натисн�&micro;т�&micro; \'ПРОДЪЛЖЕНИЕ\' ако страницата н�&micro; с�&micro; обно�&sup2;и а�&sup2;томатично',
	'upl_success' => 'Вашата картинка �&micro; доба�&sup2;�&micro;на усп�&micro;шно',
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
	'caption' => 'За�&sup3;ла�&sup2;и�&micro;',
	'fs_pic' => 'пъл�&micro;н разм�&micro;р на картинка',
	'del_success' => 'изтрита усп�&micro;шно',
	'ns_pic' => 'нормал�&micro;н разм�&micro;р на картинка',
	'err_del' => 'н�&micro; мож�&micro; да бъд�&micro; изтрита',
	'thumb_pic' => 'малка картинка',
	'comment' => 'ком�&micro;нтар',
	'im_in_alb' => 'картинка �&sup2; албум',
	'alb_del_success' => 'Албумът \'%s\' �&micro; изтрит',
	'alb_mgr' => 'М�&micro;наж�&micro;р на албум',
	'err_invalid_data' => 'Н�&micro;�&sup2;алидна информация �&micro; получ�&micro;на �&sup2; \'%s\'',
	'create_alb' => 'Създа�&sup2;ан�&micro; на албум \'%s\'',
	'update_alb' => 'Обно�&sup2;я�&sup2;ан�&micro; на албум \'%s\' със за�&sup3;ла�&sup2;и�&micro; \'%s\' и инд�&micro;кс \'%s\'',
	'del_pic' => 'Изтрий картинка',
	'del_alb' => 'Изтрий албум',
	'del_user' => 'Изтрий потр�&micro;бит�&micro;л',
	'err_unknown_user' => 'Избрания потр�&micro;бит�&micro;л н�&micro; същ�&micro;ст�&sup2;у�&sup2;а !',
	'comment_deleted' => 'Ком�&micro;нтара �&micro; изтрит усп�&micro;шно',
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
	'confirm_del' => 'Си�&sup3;ур�&micro;н ли ст�&micro;, ч�&micro; искат�&micro; да ИЗТРИЕТЕ тази картинка ? \\nКом�&micro;нтарит�&micro; към н�&micro;я също щ�&micro; бъдат изтрити.',
	'del_pic' => 'ИЗТРИЙ ТАЗИ КАРТИНКА',
	'size' => '%s x %s пикс�&micro;ла',
	'views' => '%s пъти',
	'slideshow' => 'Слайд шоу',
	'stop_slideshow' => 'СПРИ СЛАЙД ШОУ',
	'view_fs' => 'Щракн�&micro;т�&micro; за да �&sup2;идит�&micro; пълната �&sup3;ол�&micro;мина на картинката',
);

$lang_picinfo = array(
	'title' =>'Информация за картинката',
	'Filename' => 'Им�&micro; на файла',
	'Album name' => 'Им�&micro; на албума',
	'Rating' => 'Р�&micro;йтин�&sup3; (%s �&sup3;ласо�&sup2;�&micro;)',
	'Keywords' => 'Ключо�&sup2;и думи',
	'File Size' => 'Гол�&micro;мина на файла',
	'Dimensions' => 'Разм�&micro;ри',
	'Displayed' => 'Показ�&sup2;ания',
	'Camera' => 'Кам�&micro;ра',
	'Date taken' => 'Дата на засн�&micro;ман�&micro;',
	'Aperture' => 'Ап�&micro;ртура',
	'Exposure time' => 'Вр�&micro;м�&micro; на изла�&sup3;ан�&micro;',
	'Focal length' => 'Фокусна дължина',
	'Comment' => 'Ком�&micro;нтар'
);

$lang_display_comments = array(
	'OK' => 'OK',
	'edit_title' => 'Р�&micro;дактирай този ком�&micro;нтар',
	'confirm_delete' => 'Си�&sup3;ур�&micro;н ли ст�&micro;, ч�&micro; искат�&micro; да изтри�&micro;т�&micro; този ком�&micro;тар ?',
	'add_your_comment' => 'Доба�&sup2;и ком�&micro;нтар',
	'your_name' => 'Ваш�&micro;то им�&micro;',
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
	'title' => 'Изпрати e-картичка',
	'invalid_email' => '<b>Внимани�&micro;</b> : н�&micro;�&sup2;алид�&micro;н e-mail адр�&micro;с !',
	'ecard_title' => 'Една �&micro;-картичка от %s за т�&micro;б',
	'view_ecard' => 'Ако �&micro;-картичка н�&micro; с�&micro; показ�&sup2;а кор�&micro;ктно, моля шракн�&micro;т�&micro; тоза �&sup2;ръзка',
	'view_more_pics' => 'Щракн�&micro;т�&micro; на тази �&sup2;ръзка за да �&sup2;идит�&micro; ощ�&micro; картинки !',
	'send_success' => 'Вашат�&micro; �&micro;-картичка б�&micro;ш�&micro; изпрат�&micro;на',
	'send_failed' => 'Съжаля�&sup2;ам�&micro;, но сър�&sup2;ъра н�&micro; мож�&micro; да изпрати Вашата �&micro;-картичка...',
	'from' => 'От',
	'your_name' => 'Ваш�&micro;то им�&micro;',
	'your_email' => 'Вашият e-mail адр�&micro;с',
	'to' => 'За',
	'rcpt_name' => 'Им�&micro;то на получат�&micro;ля',
	'rcpt_email' => 'e-mail адр�&micro;с на получат�&micro;ля',
	'greetings' => 'Поздра�&sup2;',
	'message' => 'Съобщ�&micro;ни�&micro;',
);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
	'pic_info' => 'Информация за картинка',
	'album' => 'Албум',
	'title' => 'За�&sup3;ла�&sup2;и�&micro;',
	'desc' => 'Описани�&micro;',
	'keywords' => 'Ключо�&sup2;и думи',
	'pic_info_str' => '%sx%s - %sKB - %s пр�&micro;�&sup3;л�&micro;да - %s �&sup3;ласо�&sup2;�&micro;',
	'approve' => 'Одобри картинка',
	'postpone_app' => 'Отсроч�&micro;но одобр�&micro;ни�&micro;',
	'del_pic' => 'Изтрий картинката',
	'reset_view_count' => 'Нулирай брояча на пр�&micro;�&sup3;л�&micro;ди',
	'reset_votes' => 'Нулирай �&sup3;ласо�&sup2;�&micro;т�&micro;',
	'del_comm' => 'Изтрий ком�&micro;нтарит�&micro;',
	'upl_approval' => 'Одобр�&micro;ни�&micro; на доба�&sup2;ян�&micro;',
	'edit_pics' => 'Р�&micro;дактирай картинки',
	'see_next' => 'Виж сл�&micro;д�&sup2;ащит�&micro; картинки',
	'see_prev' => 'Виж пр�&micro;дишнит�&micro; картинки',
	'n_pic' => '%s картинки',
	'n_of_pic_to_disp' => 'Брой на картинки за показ�&sup2;ан�&micro;',
	'apply' => 'Доба�&sup2;и модификацийт�&micro;'
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
	'group_name' => 'Им�&micro; на �&sup3;рупа',
	'disk_quota' => 'Диско�&sup2; лимит',
	'can_rate' => 'Мож�&micro; да �&sup3;ласу�&sup2;а за картинки',
	'can_send_ecards' => 'Мож�&micro; да изпраща �&micro;-картички',
	'can_post_com' => 'Мож�&micro; да доба�&sup2;я ком�&micro;нтари',
	'can_upload' => 'Мож�&micro; да доба�&sup2;я картинки',
	'can_have_gallery' => 'Мож�&micro; да има собст�&sup2;�&micro;на �&sup3;ал�&micro;рия',
	'apply' => 'Доба�&sup2;и модификацийт�&micro;',
	'create_new_group' => 'Създай но�&sup2;а �&sup3;рупа',
	'del_groups' => 'Изтрий избраната �&sup3;рупа(и)',
	'confirm_del' => 'Внимани�&micro;, ко�&sup3;ато изтри�&micro;т�&micro; �&sup3;рупа, потр�&micro;бит�&micro;лит�&micro; които принадл�&micro;жат към тази �&sup3;рупа щ�&micro; бъда пр�&micro;х�&sup2;ърл�&micro;ни �&sup2; �&sup3;рупа \'Registered\' !\n\nИскат�&micro; ли да продължит�&micro; ?',
	'title' => 'Упра�&sup2;л�&micro;ни�&micro; на потр�&micro;бит�&micro;лскит�&micro; �&sup3;рупи',
	'approval_1' => 'Одобр�&micro;ни�&micro; Пуб. Доб. (1)',
	'approval_2' => 'Одобр�&micro;ни�&micro; Част. Доб. (2)',
	'note1' => '<b>(1)</b> Доба�&sup2;ян�&micro; �&sup2; публич�&micro;н албум изиск�&sup2;а администраторско одобр�&micro;ни�&micro;',
	'note2' => '<b>(2)</b> Доба�&sup2;ян�&micro; �&sup2; албум който �&micro; на потр�&micro;бит�&micro;ля изиск�&sup2;а администраторско одобр�&micro;ни�&micro;',
	'notes' => 'Б�&micro;л�&micro;жки'
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
	'welcome' => 'Добр�&micro; дошли !'
);

$lang_album_admin_menu = array(
	'confirm_delete' => 'Си�&sup3;ур�&micro;н ли ст�&micro;, ч�&micro; искат�&micro; да ИЗТРИЕТЕ този албум ? \\nВсички картинки и ком�&micro;нтари също щ�&micro; бъдат изтрити.',
	'delete' => 'ИЗТРИЙ',
	'modify' => 'НАСТРОЙКИ',
	'edit_pics' => 'РЕКДАКТИРАЙ КАРТИНКИ',
);

$lang_list_categories = array(
	'home' => 'начало',
	'stat1' => '<b>[pictures]</b> картинки �&sup2; <b>[albums]</b> албума и <b>[cat]</b> кат�&micro;�&sup3;ории с <b>[comments]</b> ком�&micro;нтара пр�&micro;�&sup3;л�&micro;дани <b>[views]</b> пъти',
	'stat2' => '<b>[pictures]</b> картинки �&sup2; <b>[albums]</b> албума пр�&micro;�&sup3;л�&micro;дани <b>[views]</b> пъти',
	'xx_s_gallery' => 'Гар�&micro;рия на %s\'',
	'stat3' => '<b>[pictures]</b> картинки �&sup2; <b>[albums]</b> албума с <b>[comments]</b> ком�&micro;нтара пр�&micro;�&sup3;л�&micro;дани <b>[views]</b> пъти'
);

$lang_list_users = array(
	'user_list' => 'Потр�&micro;бит�&micro;лска листа',
	'no_user_gal' => 'Няма потр�&micro;бит�&micro;лски �&sup3;ал�&micro;рии',
	'n_albums' => '%s албум(и)',
	'n_pics' => '%s картинка(и)'
);

$lang_list_albums = array(
	'n_pictures' => '%s картинки',
	'last_added' => ', посл�&micro;дно доба�&sup2;�&micro;на на %s'
);

}

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
	'login' => 'Вход',
	'enter_login_pswd' => 'Въ�&sup2;�&micro;д�&micro;т�&micro; потр�&micro;бит�&micro;лско им�&micro; и парола',
	'username' => 'Потр�&micro;бит�&micro;л',
	'password' => 'Парола',
	'remember_me' => 'Запомни м�&micro;',
	'welcome' => 'Добр�&micro; дошъл %s ...',
	'err_login' => '*** Н�&micro; мож�&micro; да �&sup2;л�&micro;з�&micro;т�&micro;. Опитайт�&micro; пак  ***',
	'err_already_logged_in' => 'Има �&sup2;ключ�&micro;н потр�&micro;бит�&micro;л с то�&sup2;а им�&micro; и парола !',
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
	'logout' => 'Изход',
	'bye' => 'До�&sup2;иждан�&micro; %s ...',
	'err_not_loged_in' => 'Ви�&micro; н�&micro; ст�&micro; �&sup2;ключ�&micro;н !',
);

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
	'upd_alb_n' => 'Обно�&sup2;и албум %s',
	'general_settings' => 'Гла�&sup2;ни настройки',
	'alb_title' => 'За�&sup3;ла�&sup2;и�&micro; на албума',
	'alb_cat' => 'Кат�&micro;�&sup3;ория на албума',
	'alb_desc' => 'Описани�&micro; на албума',
	'alb_thumb' => 'Малка картинка на албума',
	'alb_perm' => 'Разр�&micro;ш�&micro;ния за този албум',
	'can_view' => 'Албума мож�&micro; да с�&micro; �&sup2;иди от',
	'can_upload' => 'Пос�&micro;тит�&micro;лит�&micro; мож�&micro; да доба�&sup2;ят картинки',
	'can_post_comments' => 'Пос�&micro;тит�&micro;лит�&micro; мож�&micro; да доба�&sup2;ят ком�&micro;нтари',
	'can_rate' => 'Пос�&micro;тит�&micro;лит�&micro; мож�&micro; да �&sup3;ласу�&sup2;ат за катинки',
	'user_gal' => 'Потр�&micro;бит�&micro;лски �&sup3;ал�&micro;рии',
	'no_cat' => '* Нама кат�&micro;�&sup3;ория *',
	'alb_empty' => 'Албума �&micro; праз�&micro;н',
	'last_uploaded' => 'Посл�&micro;дно доба�&sup2;�&micro;ни',
	'public_alb' => 'Вс�&micro;ки (публич�&micro;н албум)',
	'me_only' => 'Само АЗ',
	'owner_only' => 'Собст�&sup2;�&micro;ника (%s) на албума само',
	'groupp_only' => 'Потр�&micro;бит�&micro;ли от \'%s\' �&sup3;рупа',
	'err_no_alb_to_modify' => 'Няма албуми които мож�&micro; да модифицират�&micro;.',
	'update' => 'Обно�&sup2;и албума'
);

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
	'already_rated' => 'Съжаля�&sup2;ам�&micro;, но ст�&micro; �&sup3;ласу�&sup2;али �&sup2;�&micro;ч�&micro; за тази картинка',
	'rate_ok' => 'Ваш�&micro;то �&sup3;ласу�&sup2;ан�&micro; �&micro; при�&micro;то',
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
Администратора на <b>{SITE_NAME}</b> щ�&micro; с�&micro; опита да пр�&micro;махн�&micro; или р�&micro;дактира �&sup2;с�&micro;ки н�&micro;ж�&micro;лан мат�&micro;риал �&sup2;ъзможно най-бързо (пон�&micro;ж�&micro; н�&micro; мож�&micro; да с�&micro; пр�&micro;�&sup3;л�&micro;жда �&sup2;сяко доба�&sup2;ян�&micro;), Ви�&micro; с�&micro; съ�&sup3;лася�&sup2;ат�&micro;, ч�&micro; �&sup2;сички доба�&sup2;яния на този сайт изразя�&sup2;ат �&sup2;ъз�&sup3;л�&micro;дит�&micro; и мн�&micro;ни�&micro;то на а�&sup2;тора, а н�&micro; на администратора и у�&micro;бмаст�&micro;р (с изключ�&micro;ни�&micro; на н�&micro;ща доба�&sup2;�&micro;ни от тях) и сл�&micro;до�&sup2;ат�&micro;лно няма да бъдат от�&sup2;�&micro;тни лица.<br />
<br />
Ви�&micro; с�&micro; съ�&sup3;лася�&sup2;ат�&micro; да н�&micro; доба�&sup2;ят�&micro; оскърбит�&micro;лни, н�&micro;пристойни, кл�&micro;�&sup2;�&micro;тнич�&micro;ски, н�&micro;на�&sup2;истни, заплашит�&micro;лни, с�&micro;ксуално-ори�&micro;нтирани или как�&sup2;ито и да �&micro; дру�&sup3;и мат�&micro;риали които наруша�&sup2;ат �&sup2;сяка�&sup2;и приложими закони. Ви�&micro; с�&micro; съ�&sup3;лася�&sup2;ат�&micro;, ч�&micro; у�&micro;бмаст�&micro;ра, администратора и мод�&micro;раторит�&micro; на <b>{SITE_NAME}</b> имат пра�&sup2;о да пр�&micro;махнат или р�&micro;дактират по �&sup2;сяко �&sup2;р�&micro;м�&micro;, �&sup2;сяко съдържани�&micro;. Като потр�&micro;бит�&micro;л Ви�&micro; с�&micro; съ�&sup3;лася�&sup2;ат�&micro;, ч�&micro; �&sup2;яка информация �&sup2;ъ�&sup2;�&micro;д�&micro;на от Вас, щ�&micro; бъд�&micro; записана �&sup2; база данни. Тази информация няма да бъд�&micro; разкри�&sup2;ана на тр�&micro;ти лица б�&micro;з Ваш�&micro;то съ�&sup3;ласи�&micro;. У�&micro;бмаст�&micro;ра и администратора н�&micro; носят от�&sup3;о�&sup2;орност за опит(и) за хак�&sup2;ан�&micro;, които мо�&sup3;ат да до�&sup2;�&micro;дат до компром�&micro;тиран�&micro; на данни.<br />
<br />
Този сайт използ�&sup2;а 'cookies' за да запази информация на Вашия локал�&micro;н компютър. Т�&micro;зи 'cookies' служат само за подобр�&micro;ни�&micro; на пр�&micro;�&sup3;л�&micro;да на сайта. Вашият �&micro;-м�&micro;йл адр�&micro;с с�&micro; използ�&sup2;а само за да получит�&micro; пот�&sup2;ържда�&sup2;ащо писмо с р�&micro;�&sup3;истрационни д�&micro;тайли и па�&sup2;ола.<br>
С натискан�&micro; на 'Съ�&sup3;лас�&micro;н съм' Ви�&micro; с�&micro; съ�&sup3;лася�&sup2;ат�&micro; с �&sup2;сички избро�&micro;ни усло�&sup2;ия.
EOT;

$lang_register_php = array(
	'page_title' => 'Потр�&micro;бит�&micro;лска р�&micro;�&sup3;истрация',
	'term_cond' => 'Усло�&sup2;ия и т�&micro;рмини',
	'i_agree' => 'Съ�&sup3;лас�&micro;н съм',
	'submit' => 'Продължи р�&micro;�&sup3;истрацията',
	'err_user_exists' => 'Потр�&micro;бит�&micro;лското им�&micro; ко�&micro;то ст�&micro; написали, �&sup2;�&micro;ч�&micro; �&micro; за�&micro;то. Моля изб�&micro;р�&micro;т�&micro; дру�&sup3;о',
	'err_password_mismatch' => 'Д�&sup2;�&micro;т�&micro; пароли н�&micro; съ�&sup2;падат. Моля попълн�&micro;т�&micro; �&sup3;и отно�&sup2;о',
	'err_uname_short' => 'Потр�&micro;бит�&micro;лското им�&micro; тряб�&sup2;а да �&micro; пон�&micro; 2 сим�&sup2;ола',
	'err_password_short' => 'Паролата тряб�&sup2;а да �&micro; пон�&micro; 2 сим�&sup2;ола',
	'err_uname_pass_diff' => 'Потр�&micro;бит�&micro;лското им�&micro; и парола тряб�&sup2;а да са различни',
	'err_invalid_email' => 'E-mail адр�&micro;са н�&micro; �&micro; �&sup2;алид�&micro;н',
	'err_duplicate_email' => 'Дру�&sup3; потр�&micro;бит�&micro;л �&sup2;�&micro;ч�&micro; �&micro; р�&micro;�&sup3;истриран с този �&micro;-м�&micro;йл адр�&micro;с',
	'enter_info' => 'Въ�&sup2;�&micro;д�&micro;т�&micro; р�&micro;�&sup3;истрационната информация',
	'required_info' => 'Изиск�&sup2;ана информация',
	'optional_info' => 'Опционална информация',
	'username' => 'Потр�&micro;бит�&micro;л',
	'password' => 'Парола',
	'password_again' => 'Парола отно�&sup2;о',
	'email' => 'E-м�&micro;йл',
	'location' => 'М�&micro;стонахожд�&micro;ни�&micro;',
	'interests' => 'Инт�&micro;р�&micro;си',
	'website' => 'Лична страница',
	'occupation' => 'Занимани�&micro;',
	'error' => 'ГРЕПШКА',
	'confirm_email_subject' => '%s - Пот�&sup2;ържд�&micro;ни�&micro; на р�&micro;�&sup3;истрацията',
	'information' => 'Информация',
	'failed_sending_email' => 'Пот�&sup2;ържд�&micro;ни�&micro;то на р�&micro;�&sup3;истрацията н�&micro; мож�&micro; да бъд�&micro; изпрат�&micro;но !',
	'thank_you' => 'Бла�&sup3;одаря за р�&micro;�&sup3;истрацията.<br /><br />Е-м�&micro;йл с информация как да акти�&sup2;ират�&micro; Вашия потр�&micro;бит�&micro;л �&micro; изпрат�&micro;н на адр�&micro;са който �&sup2;ъ�&sup2;�&micro;дохт�&micro;.',
	'acct_created' => 'Вашият потр�&micro;бит�&micro;л б�&micro;ш�&micro; създад�&micro;н и мож�&micro; да с�&micro; �&sup2;ключит�&micro; с потр�&micro;бит�&micro;л и парола',
	'acct_active' => 'Вашият потр�&micro;бит�&micro;л б�&micro;ш�&micro; акти�&sup2;иран и мож�&micro; да с�&micro; �&sup2;ключит�&micro; с потр�&micro;бит�&micro;л и парола',
	'acct_already_act' => 'Вашият потр�&micro;бит�&micro;л �&micro; �&sup2;�&micro;ч�&micro; акти�&sup2;�&micro;н !',
	'acct_act_failed' => 'Този потр�&micro;бит�&micro;л н�&micro; мож�&micro; да бъд�&micro; акти�&sup2;иран !',
	'err_unk_user' => 'Избрания потр�&micro;бит�&micro;л н�&micro; същ�&micro;ст�&sup2;у�&sup2;а !',
	'x_s_profile' => 'Профил на %s\'',
	'group' => 'Група',
	'reg_date' => 'Дата на р�&micro;�&sup3;истрация',
	'disk_usage' => 'Потр�&micro;бл�&micro;ни�&micro; на диска',
	'change_pass' => 'См�&micro;ни парола',
	'current_pass' => 'Т�&micro;куща парола',
	'new_pass' => 'Но�&sup2;а парола',
	'new_pass_again' => 'Но�&sup2;а парола отно�&sup2;о',
	'err_curr_pass' => 'Т�&micro;кущата пароля н�&micro; �&micro; �&sup2;ярна',
	'apply_modif' => 'Доба�&sup2;и модификацийт�&micro;',
	'change_pass' => 'См�&micro;ни моята парола',
	'update_success' => 'Вашият профил �&micro; обно�&sup2;�&micro;н',
	'pass_chg_success' => 'Вашата парола �&micro; пром�&micro;н�&micro;на',
	'pass_chg_error' => 'Вашата парола НЕ �&micro; пром�&micro;н�&micro;на',
);

$lang_register_confirm_email = <<<EOT
Бла�&sup3;одарим Ви за р�&micro;�&sup3;истрация �&sup2; {SITE_NAME}

Потр�&micro;бит�&micro;л : "{USER_NAME}"
Парола : "{PASSWORD}"

За акти�&sup2;иран�&micro; на Вашия потр�&micro;бит�&micro;л, натисн�&micro;т�&micro; �&sup2;ръзката по-долу
или копирайт�&micro; адр�&micro;са �&sup2; у�&micro;б броуз�&micro;р.

{ACT_LINK}

С у�&sup2;аж�&micro;ни�&micro;,

Администрация на  {SITE_NAME}

EOT;

}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
	'title' => 'Пр�&micro;�&sup3;л�&micro;д на ком�&micro;нтари',
	'no_comment' => 'Няма ком�&micro;нтар за пр�&micro;�&sup3;л�&micro;д',
	'n_comm_del' => '%s ком�&micro;нтар(и) изтрит(и)',
	'n_comm_disp' => 'Брой на показ�&sup2;ани ком�&micro;нтари',
	'see_prev' => 'Виж пр�&micro;диш�&micro;н',
	'see_next' => 'Виж сл�&micro;д�&sup2;ащ',
	'del_comm' => 'Изтрий избранит�&micro; ком�&micro;нтари',
);


// ------------------------------------------------------------------------- //
// File search.php - OK
// ------------------------------------------------------------------------- //

if (defined('SEARCH_PHP')) $lang_search_php = array(
	0 => 'Търс�&micro;н�&micro; �&sup2; кол�&micro;кциит�&micro; от картинки',
);

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
	'page_title' => 'Търс�&micro;н�&micro; на но�&sup2;и картинки',
	'select_dir' => 'Изб�&micro;ри папка',
	'select_dir_msg' => 'Тази функция поз�&sup2;оля�&sup2;а да доба�&sup2;ят�&micro; �&sup3;рупа от каринки кач�&micro;ни на сър�&sup2;ъра.<br /><br />Изб�&micro;р�&micro;т�&micro; папка къд�&micro;то са картинкит�&micro;',
	'no_pic_to_add' => 'Няма картинки за доба�&sup2;ян�&micro;',
	'need_one_album' => 'Тряб�&sup2;а да има пон�&micro; �&micro;дин албум за да полз�&sup2;ат�&micro; тази функция',
	'warning' => 'ВНИМАНИЕ',
	'change_perm' => 'скрипта н�&micro; мож�&micro; да пиш�&micro; �&sup2; тази дир�&micro;ктория, см�&micro;н�&micro;т�&micro; атрибутит�&micro; на дир�&micro;кторията на 755 или 777 пр�&micro;ди да опит�&sup2;ат�&micro; да доба�&sup2;ят�&micro; картинки !',
	'target_album' => '<b>Сложи картинкит�&micro; от &quot;</b>%s<b>&quot; �&sup2; </b>%s',
	'folder' => 'Папка',
	'image' => 'Картинка',
	'album' => 'Албум',
	'result' => 'Р�&micro;зултат',
	'dir_ro' => 'Само за ч�&micro;т�&micro;н�&micro;. ',
	'dir_cant_read' => 'Н�&micro; мож�&micro; да с�&micro; проч�&micro;т�&micro;. ',
	'insert' => 'Доба�&sup2;ян�&micro; на картинки �&sup2; �&sup3;ал�&micro;рията',
	'list_new_pic' => 'Списък на но�&sup2;ит�&micro; картинки',
	'insert_selected' => 'Доба�&sup2;и избранит�&micro; картинки',
	'no_pic_found' => 'Н�&micro; са нам�&micro;р�&micro;ни но�&sup2;и картинки',
	'be_patient' => 'Моля, бъд�&micro;т�&micro; търп�&micro;ли�&sup2;и, скрипта има нужда от �&sup2;р�&micro;м�&micro; за да доба�&sup2;и картинкит�&micro;',
	'notes' =>  '<ul>'.
				'<li><b>OK</b> : означа�&sup2;а, ч�&micro; картинката �&micro; доба�&sup2;�&micro;на усп�&micro;шно'.
				'<li><b>DP</b> : означа�&sup2;а, ч�&micro; картинката �&micro; дубликат и я има �&sup2;�&micro;ч�&micro; �&sup2; базата данни'.
				'<li><b>PB</b> : означа�&sup2;а, ч�&micro; картинката н�&micro; �&micro; доба�&sup2;�&micro;на. Про�&sup2;�&micro;р�&micro;т�&micro; настройкит�&micro; и атрибутит�&micro; на дир�&micro;кторията къд�&micro;то с�&micro; намират картинкит�&micro;'.
				'<li>Ако OK, DP, PB \'знаци\' н�&micro; с�&micro; поя�&sup2;ят, щракн�&micro;т�&micro; на \'лошата\' картинка и �&sup2;ъжт�&micro; съобщ�&micro;ни�&micro;то за �&sup3;р�&micro;шка �&sup3;�&micro;н�&micro;рирано от PHP'.
				'<li>Ако получит�&micro; съобщ�&micro;ни�&micro; за изтичан�&micro; на �&sup2;р�&micro;м�&micro;, щракн�&micro;т�&micro; на бутона за опр�&micro;сня�&sup2;ан�&micro;'.
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
	'title' => 'Доба�&sup2;и картинка',
	'max_fsize' => 'Максимално разр�&micro;ш�&micro;на �&sup3;ол�&micro;мина на файла �&micro; %s KB',
	'album' => 'Албум',
	'picture' => 'Картинка',
	'pic_title' => 'За�&sup3;ла�&sup2;и�&micro; на картинката',
	'description' => 'Описани�&micro; на картинката',
	'keywords' => 'Ключо�&sup2;и думи (разд�&micro;л�&micro;ни със инт�&micro;р�&sup2;али)',
	'err_no_alb_uploadables' => 'Съжаля�&sup2;ам�&micro;, няма албум �&sup2; който да �&micro; разр�&micro;ш�&micro;но да доба�&sup2;ят�&micro; картинки',
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
	'title' => 'Упра�&sup2;л�&micro;ни�&micro; на потр�&micro;бит�&micro;ли',
	'name_a' => 'Им�&micro; �&sup2;ъзходящо',
	'name_d' => 'Им�&micro; низходящо',
	'group_a' => 'Група �&sup2;ъзходящо',
	'group_d' => 'Група низходящо',
	'reg_a' => 'Р�&micro;�&sup3;. дата �&sup2;ъзходяща',
	'reg_d' => 'Р�&micro;�&sup3;. дата низходяща',
	'pic_a' => 'Бр. картинки �&sup2;ъзходящо',
	'pic_d' => 'Бр. картинки низходящп',
	'disku_a' => 'Диско�&sup2;о място �&sup2;ъзходящо',
	'disku_d' => 'Диско�&sup2;о място низходящо',
	'sort_by' => 'Сортира потр�&micro;бит�&micro;лит�&micro; по',
	'err_no_users' => 'Няма потр�&micro;бит�&micro;ли !',
	'err_edit_self' => 'Н�&micro; мож�&micro; да р�&micro;дактират�&micro; с�&sup2;оя собст�&sup2;�&micro;н профил. Използ�&sup2;айт�&micro; \'Моя профил\' за тази ц�&micro;л',
	'edit' => 'РЕДАКТИРАНЕ',
	'delete' => 'ИЗТРИВАНЕ',
	'name' => 'Потр�&micro;бит�&micro;лско им�&micro;',
	'group' => 'Група',
	'inactive' => 'Н�&micro;акти�&sup2;�&micro;н',
	'operations' => 'Оп�&micro;рации',
	'pictures' => 'Картинки',
	'disk_space' => 'Използ�&sup2;ано място / Лимит',
	'registered_on' => 'Р�&micro;�&sup3;истриран на',
	'u_user_on_p_pages' => '%d потр�&micro;бит�&micro;ли на %d страница(и)',
	'confirm_del' => 'Си�&sup3;ур�&micro;н лист�&micro;, ч�&micro; искат�&micro; да ИЗТРИЕТЕ този потр�&micro;бит�&micro;л ? \\nВсички н�&micro;�&sup3;о�&sup2;и картинки и албуми щ�&micro; бъдат изтрити.',
	'mail' => 'ПОЩА',
	'err_unknown_user' => 'Избрания потр�&micro;бит�&micro; н�&micro; същ�&micro;ст�&sup2;у�&sup2;а !',
	'modify_user' => 'Пром�&micro;ни потр�&micro;бит�&micro;ля',
	'notes' => 'Б�&micro;л�&micro;жки',
	'note_list' => '<li>Ако н�&micro; ж�&micro;ла�&micro;т�&micro; да си пром�&micro;нит�&micro; т�&micro;кущата парола, оста�&sup2;�&micro;т�&micro; пол�&micro;нц�&micro;то "парола" празно',
	'password' => 'Парола',
	'user_active' => 'Потр�&micro;бит�&micro;ля �&micro; акти�&sup2;�&micro;н',
	'user_group' => 'Потр�&micro;бит�&micro;лска �&sup3;рупа',
	'user_email' => 'Потр�&micro;бит�&micro;лски e-mail',
	'user_web_site' => 'Потр�&micro;бит�&micro;лски у�&micro;б сайт',
	'create_new_user' => 'Създай но�&sup2; потр�&micro;бит�&micro;л',
	'user_location' => 'М�&micro;стонахожд�&micro;ни�&micro; на потр�&micro;бит�&micro;ля',
	'user_interests' => 'Инт�&micro;р�&micro;си на потр�&micro;бит�&micro;ля',
	'user_occupation' => 'Занимани�&micro; на потр�&micro;бит�&micro;ля',
);
?>
