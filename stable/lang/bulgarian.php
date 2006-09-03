<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2005 Coppermine Dev Team
  v1.1 originally written by Gregory DEMAR

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation; either version 2 of the License, or
  (at your option) any later version.
  ********************************************
  Coppermine version: 1.4.10
  $Source: /cvsroot/coppermine/devel/lang/english.php,v $
  $Revision: 1.287 $
  $Author: gaugau $
  $Date: 2006/03/06 06:52:32 $
**********************************************/

if (!defined('IN_COPPERMINE')) { die('Не в Coppermine...');}

// info about translators and translated language
$lang_translation_info = array(
  'lang_name_english' => 'Bulgarian (UTF-8)',
  'lang_name_native' => 'Български (UTF-8)',
  'lang_country_code' => 'bg-utf-8',
  'trans_name'=> 'Aleksandar Aleksiev',
  'trans_email' => 'al.alexiev@gmail.com',
  'trans_website' => 'http://www.baf.org/',
  'trans_date' => '2006-04-10',
);

$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('Bytes', 'KB', 'MB');

// Day of weeks and months
$lang_day_of_week = array('неделя', 'понеделник', 'вторник', 'сряда', 'четвъртък', 'петък', 'събота');
$lang_month = array('януари', 'февруари', 'март', 'април', 'май', 'юни', 'юли', 'август', 'септември', 'октомври', 'ноември', 'декември');

// Some common strings
$lang_yes = 'Да';
$lang_no  = 'Не';
$lang_back = 'НАЗАД';
$lang_continue = 'ПРОДЪЛЖИ';
$lang_info = 'Информация';
$lang_error = 'Грешка';
$lang_check_uncheck_all = '(от)маркирай всичко'; //cpg1.4

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$album_date_fmt =    '%B %d %Y';
$lastcom_date_fmt =  '%d/%m/%y в %H:%M'; //cpg1.3.0
$lastup_date_fmt = '%d %B %Y';
$register_date_fmt = '%d %B %Y';
$lasthit_date_fmt = '%d %B %Y в %I:%M %p'; //cpg1.3.0
$comment_date_fmt =  '%d %B %Y в %I:%M %p'; //cpg1.3.0
$log_date_fmt = '%B %d, %Y at %I:%M %p'; //cpg1.4

// For the word censor
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*');

$lang_meta_album_names = array(
  'random' => 'Случайни снимки', //cpg1.3.0
  'lastup' => 'Последно добавени',
  'lastalb'=> 'Последно актуализирани албуми',
  'lastcom' => 'Последни коментари',
  'topn' => 'Най-гледани',
  'toprated' => 'Най-високо оценени',
  'lasthits' => 'Последно видяни',
  'search' => 'Резултати от търсенето',
  'favpics'=> 'Любими снимки', //cpg1.3.0
);

$lang_errors = array(
  'access_denied' => 'Нямате достъп до тази страница.',
  'perm_denied' => 'Нямате позволение за тази операция.',
  'param_missing' => 'Скриптът е извикан без нужните параметри.',
  'non_exist_ap' => 'Избраният албум/файл не съществува !', //cpg1.3.0
  'quota_exceeded' => 'Достигната е дисковата квота<br /><br />Имате квота от [quota]K, в момента файловете ви използват [space]K, добавянето на този файл ще надмине квотата ви.', //cpg1.3.0
  'gd_file_type_err' => 'Ако употребявате GD библиотеката ще можете да използвате само JPEG и PNG.',
  'invalid_image' => 'Файлът който качихте е дефектен и не може да бъде обработен от библиотеката GD',
  'resize_failed' => 'Не е възможно създаването на умалена картинка (thumnail) или образ с умалени размери.',
  'no_img_to_display' => 'Няма снимки за показване',
  'non_exist_cat' => 'Избраната категория не съществува',
  'orphan_cat' => 'Категорията има несъществуваща родителска категория, пуснете мениджъра за категории за да коригирате проблема!', //cpg1.3.0
  'directory_ro' => 'Не може да се пише в директорията \'%s\' , файловете не могат да бъдат изтрити', //cpg1.3.0
  'non_exist_comment' => 'Избраният коментар не съществува.',
  'pic_in_invalid_album' => 'Файлът е в несъществуващ албум (%s)!?', //cpg1.3.0
  'banned' => 'В момента ви е забранено да използвате сайта.',
  'not_with_udb' => 'Функцията е забранена от администратора на Coppermine, защото е интегрирана в софтуера на форума. Това, което се опитвате, или не е поддържано в тази конфигурация, или функцията трябва да се обслужва от форумния софтуер.',
  'offline_title' => 'Offline', //cpg1.3.0
  'offline_text' => 'Галерията е offline - проверете по-късно', //cpg1.3.0
  'ecards_empty' => 'В момента няма записи на картички. Проверете дали сте позволили логването на електронните картички в конфигурацията на coppermine!', //cpg1.3.0
  'action_failed' => 'Командата не бе изпълнена. Coppermine не може да я изпълни.', //cpg1.3.0
  'no_zip' => 'Нужните библиотеки за обработка на ZIP файлове не са в наличност. Обърнете се , моля, към администратора на Coppermine.', //cpg1.3.0
  'zip_type' => 'Не ви е позволено да качвате ZIP файлове.', //cpg1.3.0
  'database_query' => 'Възникна грешка в обработваната от базата данни заявка', //cpg1.4
  'non_exist_comment' => 'Избраният коментар не съществува', //cpg1.4
);

$lang_bbcode_help_title = 'bbcode помощ'; //cpg1.4
$lang_bbcode_help = 'Следните кодове могат да ви бъдат от полза: <li>[b]<b>Bold</b>[/b]</li> <li>[i]<i>Italic</i>[/i]</li> <li>[url=http://yoursite.com/]Url Text[/url]</li> <li>[email]user@domain.com[/email]</li>'; //cpg1.3.0

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
  'home_title' => 'Отиди в home страница',
  'home_lnk' => 'Home',
  'alb_list_title' => 'Списък с албуми',
  'alb_list_lnk' => 'Списък с албуми',
  'my_gal_title' => 'Отиди в личната галерия',
  'my_gal_lnk' => 'Галерията ми',
  'my_prof_title' => 'Отиди в моя профил', //cpg1.4
  'my_prof_lnk' => 'Профил',
  'adm_mode_title' => 'Админ режим',
  'adm_mode_lnk' => 'Админ режим',
  'usr_mode_title' => 'Потребителски режим',
  'usr_mode_lnk' => 'Като потребител',
  'upload_pic_title' => 'Качи файл в албума', //cpg1.3.0
  'upload_pic_lnk' => 'Качи файл', //cpg1.3.0
  'register_title' => 'Създай акаунт',
  'register_lnk' => 'Регистрация',
  'login_title' => 'Закачи ме', //cpg1.4
  'login_lnk' => 'Вход',
  'logout_title' => 'Разкачи ме', //cpg1.4
  'logout_lnk' => 'Изход',
  'lastup_title' => 'Покажи повече последно качени', //cpg1.4
  'lastup_lnk' => 'Последно качени',
  'lastcom_title' => 'Покажи повече последни коментари', //cpg1.4
  'lastcom_lnk' => 'Последни коментари',
  'topn_title' => 'Покажи повече най-гледани', //cpg1.4
  'topn_lnk' => 'Най-гледани',
  'toprated_title' => 'Покажи повече най-високо оценени', //cpg1.4
  'toprated_lnk' => 'Най-високо оценени',
  'search_title' => 'Претърси галерията', //cpg1.4
  'search_lnk' => 'Търсене',
  'fav_title' => 'Отиди в предпочитани', //cpg1.4
  'fav_lnk' => 'Любими снимки',
  'memberlist_title' => 'Покажи списъка от потребители', //cpg1.3.0
  'memberlist_lnk' => 'Списък с потребители', //cpg1.3.0
  'faq_title' => 'Често Задавани Въпроси за картинната галерия &quot;Coppermine&quot;', //cpg1.3.0
  'faq_lnk' => 'ЧЗВ', //cpg1.3.0
);

$lang_gallery_admin_menu = array(
  'upl_app_title' => 'Одобри новокачените', //cpg1.4
  'upl_app_lnk' => 'Одобрение',
  'admin_title' => 'Отиди в конфигурация', //cpg1.4
  'admin_lnk' => 'Конфигурация', //cpg1.4
  'albums_title' => 'Отиди в конфигурация на албуми', //cpg1.4
  'albums_lnk' => 'Албуми',
  'categories_title' => 'Отиди в конфигурация на кетегории', //cpg1.4
  'categories_lnk' => 'Категории',
  'users_title' => 'Отиди в конфигурация на потребители', //cpg1.4
  'users_lnk' => 'Потребители',
  'groups_title' => 'Отиди в конфигурация на групи', //cpg1.4
  'groups_lnk' => 'Групи',
  'comments_title' => 'Прегледай всички коментари', //cpg1.4
  'comments_lnk' => 'Коментари', //cpg1.3.0
  'searchnew_title' => 'Отиди във Файлове на куп', //cpg1.4
  'searchnew_lnk' => 'Файлове на куп', //cpg1.3.0
  'util_title' => 'Отиди в Админ средства', //cpg1.4
  'util_lnk' => 'Админ средства', //cpg1.3.0
  'key_title' => 'Отиди в речник на ключови думи', //cpg1.4
  'key_lnk' => 'Речник на ключови думи', //cpg1.4
  'ban_title' => 'Отиди в забранени потребители', //cpg1.4
  'ban_lnk' => 'Забранени потребители',
  'db_ecard_title' => 'Прегледай картички', //cpg1.4
  'db_ecard_lnk' => 'Картички', //cpg1.3.0
  'pictures_title' => 'Сортирай изображенията ми', //cpg1.4
  'pictures_lnk' => 'Сортирай изображения', //cpg1.4
  'documentation_lnk' => 'Документация', //cpg1.4
  'documentation_title' => 'Coppermine ръководство', //cpg1.4
);

$lang_user_admin_menu = array(
  'albmgr_title' => 'Създай и подреди албумите ми', //cpg1.4
  'albmgr_lnk' => 'Създаване / подреждане на албумите ми',
  'modifyalb_title' => 'Промени албумите ми',  //cpg1.4
  'modifyalb_lnk' => 'Промяна на албумите ми',
  'my_prof_title' => 'Отиди в моя профил', //cpg1.4
  'my_prof_lnk' => 'Профил',
);

$lang_cat_list = array(
  'category' => 'Категория',
  'albums' => 'Албуми',
  'pictures' => 'Файлове', //cpg1.3.0
);

$lang_album_list = array(
  'album_on_page' => '%d албум(а) на %d страница(и)',
);

$lang_thumb_view = array(
  'date' => 'ДАТА',
  //Сортиране по filename and title
  'name' => 'ИМЕ НА ФАЙЛА',
  'title' => 'ЗАГЛАВИЕ',
  'sort_da' => 'Сортиране по дата възходящо',
  'sort_dd' => 'Сортиране по дата низходящо',
  'sort_na' => 'Сортиране по име възходящо',
  'sort_nd' => 'Сортиране по име низходящо',
  'sort_ta' => 'Сортиране по заглавие възходящо',
  'sort_td' => 'Сортиране по заглавие низходящо',
  'position' => 'ПОЗИЦИЯ', //cpg1.4
  'sort_pa' => 'Сортиране по позиция възходящо', //cpg1.4
  'sort_pd' => 'Сортиране по позиция низходящо', //cpg1.4
  'download_zip' => 'Свали като Zip файл', //cpg1.3.0
  'pic_on_page' => '%d файл(а) в %d страница(и)',
  'user_on_page' => '%d потребител(и) на %d страница(и)', //cpg1.3.0
  'enter_alb_pass' => 'Въведи парола за Албума', //cpg1.4
  'invalid_pass' => 'Невалидна парола', //cpg1.4
  'pass' => 'Парола', //cpg1.4
  'submit' => 'Прати', //cpg1.4
);

$lang_img_nav_bar = array(
  'thumb_title' => 'Връщане в страницата с умалените снимки',
  'pic_info_title' => 'Покажи/скрий информация за файла', //cpg1.3.0
  'slideshow_title' => 'Слайдшоу',
  'ecard_title' => 'Изпратете файла като електронна картичка', //cpg1.3.0
  'ecard_disabled' => 'Електронните картички за изключени',
  'ecard_disabled_msg' => 'Нямате право да изпращате картички', //js-alert //cpg1.3.0
  'prev_title' => 'Вж. предишния файл', //cpg1.3.0
  'next_title' => 'Вж. следващия файл', //cpg1.3.0
  'pic_pos' => 'ФАЙЛ %s/%s', //cpg1.3.0
  'report_title' => 'Докладвай файла на администратора', //cpg1.4
  'go_album_end' => 'Пропусни до края', //cpg1.4
  'go_album_start' => 'Върни до начало', //cpg1.4
  'go_back_x_items' => 'назад с %s пункта', //cpg1.4
  'go_forward_x_items' => 'напред с %s пункта', //cpg1.4
);

$lang_rate_pic = array(
  'rate_this_pic' => 'Оцени файла ', //cpg1.3.0
  'no_votes' => '(Все още не е гласувано)',
  'rating' => '(настояща оценка : %s / 5 от %s гласа)',
  'rubbish' => 'За боклука',
  'poor' => 'Лош',
  'fair' => 'Става',
  'good' => 'Добър',
  'excellent' => 'Отличен',
  'great' => 'Велик',
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
  CRITICAL_ERROR => 'Критична грешка',
  'file' => 'Файл: ',
  'line' => 'Ред: ',
);

$lang_display_thumbnails = array(
  'filename' => 'Име : ',
  'filesize' => 'Големина : ',
  'dimensions' => 'Размери : ',
  'date_added' => 'Дата на добавяне : ', //cpg1.3.0
);

$lang_get_pic_data = array(
  'n_comments' => '%s коментара',
  'n_views' => '%s пъти видяна',
  'n_votes' => '(%s гласа)',
);

$lang_cpg_debug_output = array(
  'debug_info' => 'Debug информация', //cpg1.3.0
  'select_all' => 'Избери всичко', //cpg1.3.0
  'copy_and_paste_instructions' => 'Ако ще търсите помощ от форума на coppermine , копирайте тази debug информация във вашето съобщение. Сменете всички пароли от питането с  *** преди да пуснете съобщението си.', //cpg1.3.0
  'phpinfo' => 'Изведи php-информация', //cpg1.3.0
  'notices' => 'Предупреждения', //cpg1.4
);

$lang_language_selection = array(
  'reset_language' => 'По подразбиране', //cpg1.3.0
  'choose_language' => 'Избери език', //cpg1.3.0
);

$lang_theme_selection = array(
  'reset_theme' => 'По подразбиране', //cpg1.3.0
  'choose_theme' => 'Избери тема', //cpg1.3.0
);

$lang_version_alert = array(
  'version_alert' => 'Неподдържана версия!', //cpg1.4
  'no_stable_version' => 'Вие сте стартирали Coppermine %s (%s) - подходящ само за много напреднали потребители. Версията е без поддръжка и гаранция. Ползвайте я на собствен риск или се върнете към последната стабилна версия при нужда от поддръжка...!', //cpg1.4
  'gallery_offline' => 'В момента галерията е offline и ще е видима само за администратора. Не забравяйте да я активирате отново след сервизната дейност.', //cpg1.4
);

$lang_create_tabs = array(
  'previous' => 'преден', //cpg1.4
  'next' => 'следващ', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File include/init.inc.php
// ------------------------------------------------------------------------- //

// void

// ------------------------------------------------------------------------- //
// File keyword.inc.php                                                      //
// ------------------------------------------------------------------------- //

// void

// ------------------------------------------------------------------------- //
// File include/picmgmt.inc.php
// ------------------------------------------------------------------------- //

// void

// ------------------------------------------------------------------------- //
// File include/plugin_api.inc.php
// ------------------------------------------------------------------------- //
$lang_plugin_api = array(
  'error_wakeup' => "Не мога да подкарам plugin '%s'", //cpg1.4
  'error_install' => "Не мога да инсталирам plugin '%s'", //cpg1.4
  'error_uninstall' => "Не мога да деинсталирам plugin '%s'", //cpg1.4
  'error_sleep' => "Не мога да спра plugin '%s'<br />", //cpg1.4
);

// ------------------------------------------------------------------------- //
// File include/smilies.inc.php
// ------------------------------------------------------------------------- //

if (defined('SMILIES_PHP')) $lang_smilies_inc_php = array(
  'Exclamation' => 'Възклицание',
  'Question' => 'Въпрос',
  'Very Happy' => 'Много съм щастлив',
  'Smile' => 'Усмивка',
  'Sad' => 'Тъжен съм',
  'Surprised' => 'Учуден съм',
  'Shocked' => 'Шокиран съм',
  'Confused' => 'Объркан съм',
  'Cool' => 'Гот ми е',
  'Laughing' => 'Смея се',
  'Mad' => 'Ще полудея',
  'Razz' => 'Освиркване',
  'Embarassed' => 'Засрамен съм',
  'Crying or Very sad' => 'Плачещ или много тъжен',
  'Evil or Very Mad' => 'Зъл или много луд',
  'Twisted Evil' => 'Извратено зъл',
  'Rolling Eyes' => 'Въртящи се очички',
  'Wink' => 'Намигам',
  'Idea' => 'Имам идея',
  'Arrow' => 'Стрелка',
  'Neutral' => 'Неутрален съм',
  'Mr. Green' => 'Чичко-тревичко',
);

// ------------------------------------------------------------------------- //
// File addpic.php
// ------------------------------------------------------------------------- //

// void

// ------------------------------------------------------------------------- //
// File mode.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('MODE_PHP')) $lang_mode_php = array(
  0 => 'Напускане на админ режим ...',
  1 => 'Влизане в админ режим...',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
  'alb_need_name' => 'Албумите се нуждаят от име !', //js-alert
  'confirm_modifs' => 'Сигурни ли сте че искате тези промени ?', //js-alert
  'no_change' => 'Не сте променили нищо !', //js-alert
  'new_album' => 'Нов албум',
  'confirm_delete1' => 'Наистина ли искате да изтриете албума ?', //js-alert
  'confirm_delete2' => '\nВсички файлове и коментари ще бъдат загубени безвъзвратно !', //js-alert
  'select_first' => 'Първо изберете албум', //js-alert
  'alb_mrg' => 'Албумен мениджър',
  'my_gallery' => '* Галерията ми *',
  'no_category' => '* Без категория *',
  'delete' => 'Изтрийте',
  'new' => 'Нов',
  'apply_modifs' => 'Промени',
  'select_category' => 'Изберете категория',
);

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) $lang_banning_php = array(
  'title' => 'Забрана на потребители',
  'user_name' => 'Потребителско име',
  'ip_address' => 'IP адрес',
  'expiry' => 'Изтича на: (празно е равностойно на постоянна забрана)',
  'edit_ban' => 'Запис на промените',
  'delete_ban' => 'Изтриване',
  'add_new' => 'Добавяне на нова забрана',
  'add_ban' => 'Добавяне',
  'error_user' => 'Не може да бъде открит потребител', //cpg1.3.0
  'error_specify' => 'Трябва да дадете или име или IP адрес', //cpg1.3.0
  'error_ban_id' => 'Невалидно ID на забрана!', //cpg1.3.0
  'error_admin_ban' => 'Не можете да забраните сам себе си!', //cpg1.3.0
  'error_server_ban' => 'Щяхте да забраните собствения си сървър? Вай, вай, не може ...', //cpg1.3.0
  'error_ip_forbidden' => 'Не можете да забраните това IP - не е routable!', //cpg1.3.0
  'lookup_ip' => 'Проверка на IP адрес', //cpg1.3.0
  'submit' => 'прати!', //cpg1.3.0
  'select_date' => 'избери дата', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File bridgemgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('BRIDGEMGR_PHP')) $lang_bridgemgr_php = array(
  'title' => 'Bridge помощник',
  'warning' => 'Warning: when using this wizard you have to understand that sensitive data is being sent using html forms. Only run it on your own PC (not on a public client like an internet cafe), and make sure to clear the browser cache and temporary files after you have finished, or others might be able to access your data!',
  'back' => 'назад',
  'next' => 'следващ',
  'start_wizard' => 'Start bridging wizard',
  'finish' => 'Finish',
  'hide_unused_fields' => 'hide unused form fields (recommended)',
  'clear_unused_db_fields' => 'clear invalid database entries (recommended)',
  'custom_bridge_file' => 'your custom bridge file\'s name (if the bridge file\'s name is <i>myfile.inc.php</i>, enter <i>myfile</i> into this field)',
  'no_action_needed' => 'No action needed in this step. Just click \'next\' to continue.',
  'reset_to_default' => 'Reset to default value',
  'choose_bbs_app' => 'choose application to bridge coppermine with',
  'support_url' => 'Go here for support on this application',
  'settings_path' => 'path(s) used by your BBS app',
  'database_connection' => 'database connection',
  'database_tables' => 'database tables',
  'bbs_groups' => 'BBS groups',
  'license_number' => 'License number',
  'license_number_explanation' => 'enter your license number (if applicable)',
  'db_database_name' => 'Database name',
  'db_database_name_explanation' => 'Enter the name of the database your BBS app uses',
  'db_hostname' => 'Database host',
  'db_hostname_explanation' => 'Hostname where your mySQL database resides, usually &quot;localhost&quot;',
  'db_username' => 'Database user account',
  'db_username_explanation' => 'mySQL user account to use for connection with BBS',
  'db_password' => 'Database passsword',
  'db_password_explanation' => 'Passsword for this mySQL user account',
  'full_forum_url' => 'Forum URL',
  'full_forum_url_explanation' => 'Full URL of your BBS app (including the leading http:// bit, e.g. http://www.yourdomain.tld/forum)',
  'relative_path_of_forum_from_webroot' => 'Relative forum path',
  'relative_path_of_forum_from_webroot_explanation' => 'Relative path to your BBS app from the webroot (Example: if your BBS is at http://www.yourdomain.tld/forum/, enter &quot;/forum/&quot; into this field)',
  'relative_path_to_config_file' => 'Relative path to your BBS\'s config file',
  'relative_path_to_config_file_explanation' => 'Relative path to your BBS, seen from your Coppermine folder (e.g. &quot;../forum/&quot; if your BBS is at http://www.yourdomain.tld/forum/ and Coppermine at http://www.yourdomain.tld/gallery/)',
  'cookie_prefix' => 'Cookie prefix',
  'cookie_prefix_explanation' => 'this has to be your BBS\'s cookie name',
  'table_prefix' => 'Table prefix',
  'table_prefix_explanation' => 'Must match the prefix you chose for your BBS when setting it up.',
  'user_table' => 'User table',
  'user_table_explanation' => '(usually default value should be OK, unless your BBS install isn\'t standard)',
  'session_table' => 'Session table',
  'session_table_explanation' => '(usually default value should be OK, unless your BBS install isn\'t standard)',
  'group_table' => 'Group table',
  'group_table_explanation' => '(usually default value should be OK, unless your BBS install isn\'t standard)',
  'group_relation_table' => 'Group relation table',
  'group_relation_table_explanation' => '(usually default value should be OK, unless your BBS install isn\'t standard)',
  'group_mapping_table' => 'Group mapping table',
  'group_mapping_table_explanation' => '(usually default value should be OK, unless your BBS install isn\'t standard)',
  'use_standard_groups' => 'Use standard BBS usergroups',
  'use_standard_groups_explanation' => 'Use standard (built-in) usergroups (recommended). This will make all custom usergroups settings made on this page become void. Only disable this option if you REALLY know what you\'re doing!',
  'validating_group' => 'Validating group',
  'validating_group_explanation' => 'The group ID of your BBS where users accounts that need validation are in (usually default value should be OK, unless your BBS install isn\'t standard)',
  'guest_group' => 'Guest group',
  'guest_group_explanation' => 'Group ID of your BBS where guests (anonymous users) are in (default value should be OK, only edit if you know what you\'re doing)',
  'member_group' => 'Member group',
  'member_group_explanation' => 'Group ID of your BBS where &quot;regular&quot; users accounts are in (default value should be OK, only edit if you know what you\'re doing)',
  'admin_group' => 'Admin group',
  'admin_group_explanation' => 'Group ID of your BBS where admins are in (default value should be OK, only edit if you know what you\'re doing)',
  'banned_group' => 'Banned group',
  'banned_group_explanation' => 'Group ID of your BBS where banned users are in (default value should be OK, only edit if you know what you\'re doing)',
  'global_moderators_group' => 'Global moderators group',
  'global_moderators_group_explanation' => 'Group ID of your BBS where global moderators of your BBS are in (default value should be OK, only edit if you know what you\'re doing)',
  'special_settings' => 'BBS-specific settings',
  'logout_flag' => 'phpBB version (logout flag)',
  'logout_flag_explanation' => 'What\'s your BBS version (this setting specifies how logouts are being handled)',
  'use_post_based_groups' => 'Use post-based groups?',
  'logout_flag_yes' => '2.0.5 or higher',
  'logout_flag_no' => '2.0.4 or lower',
  'use_post_based_groups_explanation' => 'Should the groups from the BBS that are defined by the number of posts be taken into account (allows a granular permissions management) or just the default groups (makes administration easier, recommended). You can change this setting later as well.',
  'use_post_based_groups_yes' => 'yes',
  'use_post_based_groups_no' => 'no',
  'error_title' => 'You need to correct these errors before you can continue. Go to the previous screen.',
  'error_specify_bbs' => 'You have to specify what application you want to bridge your Coppermine install with.',
  'error_no_blank_name' => 'You can\'t leave the name of your custom bridge file blank.',
  'error_no_special_chars' => 'The bridge file name mustn\'t contain any special chars except underscore (_) and dash (-)!',
  'error_bridge_file_not_exist' => 'The bridge file %s doesn\'t exist on the server. Check if you have actually uploaded it.',
  'finalize' => 'enable/disable BBS integration',
  'finalize_explanation' => 'So far, the settings you specified have been written into the database, but BBS integration hasn\'t been enabled. You can switch integration on/off later at any time. Make sure to remember the admin username and password from standalone Coppermine, you might need it later to be able to make any changes. If anything goes wrong, go to %s and disable BBS integration there, using your standalone (unbridged) admin account (usually the one you set up during Coppermine install).',
  'your_bridge_settings' => 'Your bridge settings',
  'title_enable' => 'Enable integration/bridging with %s',
  'bridge_enable_yes' => 'enable',
  'bridge_enable_no' => 'disable',
  'error_must_not_be_empty' => 'must not be empty',
  'error_either_be' => 'must either be %s or %s',
  'error_folder_not_exist' => '%s doesn\'t exist. Correct the value you entered for %s',
  'error_cookie_not_readible' => 'Coppermine can\'t read a cookie named %s. Correct the value you entered for %s, or go to your BBS administration panel and make sure that the cookie path is readible for coppermine.',
  'error_mandatory_field_empty' => 'You can not leave the field %s blank - fill in the proper value.',
  'error_no_trailing_slash' => 'There mustn\'t be a trailing slash in the field %s.',
  'error_trailing_slash' => 'There must be a trailing slash in the field %s.',
  'error_db_connect' => 'Could not connect to the mySQL database with the data you specified. Here\'s what mySQL said:',
  'error_db_name' => 'Although Coppermine could establish a connection, it wasn\'t able to find the database %s. Make sure you have specified %s properly. Here\'s what mySQL said:',
  'error_prefix_and_table' => '%s and ',
  'error_db_table' => 'Could not find the table %s. Make sure you have specified %s correctly.',
  'recovery_title' => 'Bridge Manager: emergency recovery',
  'recovery_explanation' => 'If you came here to administer the BBS integration of your Coppermine gallery, you have to log in first as admin. If you can not log in because bridging doesn\'t work as expected, you can disable BBS integration with this page. Entering your username and password will not log you in, it will only disable BBS integration. Refer to the documentation for details.',
  'username' => 'Username',
  'password' => 'Password',
  'disable_submit' => 'submit',
  'recovery_success_title' => 'Authorization successful',
  'recovery_success_content' => 'You have successfully disabled BBS bridging. Your Coppermine install runs now in standalone mode.',
  'recovery_success_advice_login' => 'Log in as admin to edit your bridge settings and/or enable BBS integration again.',
  'goto_login' => 'Go to login page',
  'goto_bridgemgr' => 'Go to bridge manager',
  'recovery_failure_title' => 'Authorization failed',
  'recovery_failure_content' => 'You supplied the wrong credentials. You will have to supply the admin account data of the standalone version (usually the account you set up during Coppermine install).',
  'try_again' => 'try again',
  'recovery_wait_title' => 'Wait time has not elapsed',
  'recovery_wait_content' => 'For security reasons this script does not allow failed logons in short succession, so you will have to wait a bit untill you\'re allowed to try to authenticate.',
  'wait' => 'wait',
  'create_redir_file' => 'Create redirection file (recommended)',
  'create_redir_file_explanation' => 'To redirect users back to Coppermine once they logged into your BBS, you need a redirection file to be created within your BBS folder. When this option is checked, the bridge manager will attempt to create this file for you, or give you code ready to copy-and-paste to create the file manually.',
  'browse' => 'browse',
);

// ------------------------------------------------------------------------- //
// File calendar.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('CALENDAR_PHP')) $lang_calendar_php = array(
  'title' => 'Календар', //cpg1.4
  'close' => 'затвори', //cpg1.4
  'clear_date' => 'изчисти дата', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
  'miss_param' => 'Параметрите изисквани за операцията \'%s\' не са зададени !',
  'unknown_cat' => 'Избраната категория не съществува в базата данни',
  'usergal_cat_ro' => 'Галериите на потребителите не могат да бъдат изтрити !',
  'manage_cat' => 'Управление на категории',
  'confirm_delete' => 'Наистина ли искате да изтриете категорията', //js-alert
  'category' => 'Категория',
  'operations' => 'Операции',
  'move_into' => 'Премести в',
  'update_create' => 'Актуализиране/Създаване на категория',
  'parent_cat' => 'Родителска категория',
  'cat_title' => 'Заглавие на категорията',
  'cat_thumb' => 'Умалена картинка на категорията', //cpg1.3.0
  'cat_desc' => 'Описание на категорията',
  'categories_alpha_sort' => 'Сортирай категориите азбучно (вместо текущото сортиране)', //cpg1.4
  'save_cfg' => 'Запис на конфигурация', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File admin.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('ADMIN_PHP')) $lang_admin_php = array(
  'title' => 'Конфигурация',
  'manage_exif' => 'Управление на exif извеждането', //cpg1.4
  'manage_plugins' => 'Управление на plugins', //cpg1.4
  'manage_keyword' => 'Управление на ключови думи', //cpg1.4
  'restore_cfg' => 'Възстановяване на системните настройки',
  'save_cfg' => 'Запис на новата конфигурация',
  'notes' => 'Бележки',
  'info' => 'Информация',
  'upd_success' => 'Конфигурацията на Coppermine бе актуализирана',
  'restore_success' => 'Конфигурацията по подразбиране Coppermine бе възстановена',
  'name_a' => 'По име възходящо',
  'name_d' => 'По име низходящо',
  'title_a' => 'По заглавие възходящо',
  'title_d' => 'По заглавие низходящо',
  'date_a' => 'По дата възходящо',
  'date_d' => 'По дата низходящо',
  'pos_a' => 'Положение възходящо', //cpg1.4
  'pos_d' => 'Положение низходящо', //cpg1.4
  'th_any' => 'Максимално отношение',
  'th_ht' => 'Височина',
  'th_wd' => 'Ширина',
  'label' => 'табела', //cpg1.3.0
  'item' => 'флаг', //cpg1.3.0
  'debug_everyone' => 'Всеки', //cpg1.3.0
  'debug_admin' => 'Само администратори', //cpg1.3.0
  'no_logs'=> 'Изкл.', //cpg1.4
  'log_normal'=> 'Нормален', //cpg1.4
  'log_all' => 'Всички', //cpg1.4
  'view_logs' => 'Виж log-овете', //cpg1.4
  'click_expand' => 'избери секция за разтваряне', //cpg1.4
  'expand_all' => 'Разтвори всички', //cpg1.4
  'notice1' => '(*) Тези настройки не бива да се сменят ако вече имате файлове в базата си данни.', //cpg1.4 - (relocated)
  'notice2' => '(**) При промяна на тази настройка, само файловете добавени от този момент ще бъдат повлияни, sпрепоръчително е тази настройка да не се променя ако вече имате файлове в галерията. Бихте могли, обаче, да приложите промените върху съществуващите файлове с &quot;<a href="util.php">Админ средства</a> (Актуализация на снимки с променени размери)&quot; инструмент от Административното меню.', //cpg1.4 - (relocated)
  'notice3' => '(***) Всички log-файлове са на Английски.', //cpg1.4 - (relocated)
  'bbs_disabled' => 'Невалидна функция при ползване на bb интеграция', //cpg1.4
  'auto_resize_everyone' => 'Всеки', //cpg1.4
  'auto_resize_user' => 'Само потребител', //cpg1.4
  'ascending' => 'възходящ', //cpg1.4
  'descending' => 'низходящ', //cpg1.4
        );

if (defined('ADMIN_PHP')) $lang_admin_data = array(
  'Общи настройки',
  array('Име на галерията', 'gallery_name', 0, 'f=index.htm&amp;as=admin_general_name&amp;ae=admin_general_name_end'), //cpg1.4
  array('Описание на галерията', 'gallery_description', 0, 'f=index.htm&amp;as=admin_general_description&amp;ae=admin_general_description_end'), //cpg1.4
  array('Email на администратора на галерията', 'gallery_admin_email', 0, 'f=index.htm&amp;as=admin_general_email&amp;ae=admin_general_email_end'), //cpg1.4
  array('Адресът за линка \'Повече снимки\' в електронните картички', 'ecards_more_pic_target', 0, 'f=index.htm&amp;as=admin_general_coppermine-url&amp;ae=admin_general_coppermine-url_end'), //cpg1.4
  array('URL на вашата домашна страница', 'home_target', 0, 'f=index.htm&amp;as=admin_general_home-url&amp;ae=admin_general_home-url_end'), //cpg1.4
  array('Позволяване на ZIP-сваляне на любимите', 'enable_zipdownload', 1, 'f=index.htm&amp;as=admin_general_zip-download&amp;ae=admin_general_zip-download_end'), //cpg1.4
  array('Часова разлика спрямо GMT (текущо време: ' . localised_date(-1, $comment_date_fmt) . ')','time_offset',0, 'f=index.htm&amp;as=admin_general_time-offset&amp;ae=admin_general_time-offset_end&amp;top=1'), //cpg1.4
  array('Включи криптирани пароли (невъзвратимо)','enable_encrypted_passwords',1, 'f=index.htm&amp;as=admin_general_encrypt_password_start&amp;ae=admin_general_encrypt_password_end&amp;top=1'), // cpg 1.4
  array('Включи помощни икони (помоща е само на Английски)','enable_help',9, 'f=index.htm&amp;as=admin_general_help&amp;ae=admin_general_help_end'), //cpg1.4
  array('Включи ключови думи в търсене','clickable_keyword_search',14, 'f=index.htm&amp;as=admin_general_keywords_start&amp;ae=admin_general_keywords_end'), //cpg1.4
  array('Включи plugins', 'enable_plugins', 12, 'f=index.htm&amp;as=admin_general_enable-plugins&amp;ae=admin_general_enable-plugins_end'),  //cpg1.4
  array('Позволи банване на (частни) IP адреси', 'ban_private_ip', 1,  'f=index.htm&amp;as=admin_general_private-ip&amp;ae=admin_general_private-ip_end'), //cpg1.4
  array('Прелистващ се бид на файлове на куп', 'browse_batch_add', 1, 'f=index.htm&amp;as=admin_general_browsable_batch_add&amp;ae=admin_general_browsable_batch_add_end'), //cpg1.4

  'Language &amp; Charset settings',
  array('Език', 'lang', 5, 'f=index.htm&amp;as=admin_language_language&amp;ae=admin_language_language_end'), //cpg1.4
  array('Върни се на Английски при липса на превод?', 'language_fallback', 1, 'f=index.htm&amp;as=admin_language_fallback&amp;ae=admin_language_fallback_end'), //cpg1.4
  array('Символна кодова таблица', 'charset', 4, 'f=index.htm&amp;as=admin_language_charset&amp;ae=admin_language_charset_end'), //cpg1.4
  array('Показване на списъка с езици', 'language_list', 1, 'f=index.htm&amp;as=admin_language_list&amp;ae=admin_language_list_end'), //cpg1.4
  array('Показване на езиковите флагчета', 'language_flags', 8, 'f=index.htm&amp;as=admin_language_flags&amp;ae=admin_language_flags_end&amp;top=1'), //cpg1.4
  array('Показване на &quot;нулиране&quot; в езиковия избор', 'language_reset', 1, 'f=index.htm&amp;as=admin_language_reset&amp;ae=admin_language_reset_end&amp;top=1'), //cpg1.4
  //array('Извеждане на предишен/следващ в tabbed pages', 'previous_next_tab', 1), //cpg1.4

  'Език, Теми &amp; Charset',
  array('Тема', 'theme', 6, 'f=index.htm&amp;as=admin_theme_theme&amp;ae=admin_theme_theme_end'), //cpg1.4
  array('Показване на списъка с теми', 'theme_list', 1, 'f=index.htm&amp;as=admin_theme_theme_list&amp;ae=admin_theme_theme_list_end'), //cpg1.4
  array('Показване на &quot;нулиране&quot; в списъка с теми', 'theme_reset', 1, 'f=index.htm&amp;as=admin_theme_theme_reset&amp;ae=admin_theme_theme_reset_end'), //cpg1.4
  array('Показване на ЧЗВ', 'display_faq', 1, 'f=index.htm&amp;as=admin_theme_faq&amp;ae=admin_theme_faq_end'), //cpg1.4
  array('Име на потребителско меню', 'custom_lnk_name', 0,'f=index.htm&amp;as=admin_theme_custom_lnk_name&amp;ae=admin_theme_custom_lnk_name_end'), //cpg1.4
  array('URL на потребителско меню', 'custom_lnk_url', 0,'f=index.htm&amp;as=admin_language_custom_lnk_url&amp;ae=admin_language_custom_lnk_url_end'), //cpg1.4
  array('Показване на bbcode помощта', 'show_bbcode_help', 1, 'f=index.htm&amp;as=admin_theme_bbcode&amp;ae=admin_theme_bbcode_end&amp;top=1'), //cpg1.4
  array('Показвай празните сектори в теми определени като XHTML и CSS съвместими','vanity_block',1, 'f=index.htm&amp;as=vanity_block&amp;ae=vanity_block_end'), //cpg1.4
  array('Път към добавено потребителско заглавие', 'custom_header_path', 0, 'f=index.htm&amp;as=admin_theme_include_path_start&amp;ae=admin_theme_include_path_end'), //cpg1.4
  array('Път към добавен потребителски завършек', 'custom_footer_path', 0, 'f=index.htm&amp;as=admin_theme_include_path_start&amp;ae=admin_theme_include_path_end'), //cpg1.4

  'Изглед на списъка с албуми',
  array('Ширина на главната таблица (пиксели или %)', 'main_table_width', 0, 'f=index.htm&amp;as=admin_album_table-width&amp;ae=admin_album_table-width_end'), //cpg1.4
  array('Брой нива от категория за показване', 'subcat_level', 0, 'f=index.htm&amp;as=admin_album_category-levels&amp;ae=admin_album_category-levels_end'), //cpg1.4
  array('Брой албуми за показване', 'albums_per_page', 0, 'f=index.htm&amp;as=admin_album_number&amp;ae=admin_album_number_end'), //cpg1.4
  array('Брой колони за списъка от албуми', 'album_list_cols', 0, 'f=index.htm&amp;as=admin_album_columns&amp;ae=admin_album_columns_end'), //cpg1.4
  array('Размер на умалените картинки в пиксели', 'alb_list_thumb_size', 0, 'f=index.htm&amp;as=admin_album_thumbnail-size&amp;ae=admin_album_thumbnail-size_end'), //cpg1.4
  array('Съдържание на главната страница', 'main_page_layout', 0, 'f=index.htm&amp;as=admin_album_list_content&amp;ae=admin_album_list_content_end'), //cpg1.4
  array('Показване на албумни умалени картинки от първо ниво в категориите','first_level',1, 'f=index.htm&amp;as=admin_album_first-level_thumbs&amp;ae=admin_album_first-level_thumbs_end'), //cpg1.4
  array('Азбучно сортиране на категориите (вместо потребителското)','categories_alpha_sort',1, 'f=index.htm&amp;as=admin_album_list_alphasort_start&amp;ae=admin_album_list_alphasort_end'), //cpg1.4
  array('Покажи броя свързани файлове','link_pic_count',1, 'f=index.htm&amp;as=admin_album_linked_files_start&amp;ae=admin_album_linked_files_end'), //cpg1.4

  'Изглед на умалените картинки',
  array('Брой колони в страница с умалени картинки', 'thumbcols', 0, 'f=index.htm&amp;as=admin_thumbnail_columns&amp;ae=admin_thumbnail_columns_end'), //cpg1.4
  array('Брой редове на страница с умалени картинки', 'thumbrows', 0, 'f=index.htm&amp;as=admin_thumbnail_rows&amp;ae=admin_thumbnail_rows_end'), //cpg1.4
  array('Максимум умалени картинки за показване', 'max_tabs', 10, 'f=index.htm&amp;as=admin_thumbnail_tabs&amp;ae=admin_thumbnail_tabs_end'), //cpg1.4
  array('Показване на пояснение (в допълнение към заглавието) под умалената картинка', 'caption_in_thumbview', 1, 'f=index.htm&amp;as=admin_thumbnail_display_caption&amp;ae=admin_thumbnail_display_caption_end'), //cpg1.4
  array('Показване на броя виждания под умалената картинка', 'views_in_thumbview', 1, 'f=index.htm&amp;as=admin_thumbnail_display_views&amp;ae=admin_thumbnail_display_views_end'), //cpg1.4
  array('Показване на броя коментари под умалената картинка', 'display_comment_count', 1, 'f=index.htm&amp;as=admin_thumbnail_display_comments&amp;ae=admin_thumbnail_display_comments_end'), //cpg1.4
  array('Показване на потребителя качил файла под умалената картинка', 'display_uploader', 1, 'f=index.htm&amp;as=admin_thumbnail_display_uploader&amp;ae=admin_thumbnail_display_uploader_end'), //cpg1.4
  //array('Display name of admin uploaders below the thumbnail', 'display_admin_uploader', 1, 'f=index.htm&amp;as=admin_thumbnail_display_admin_uploader&amp;ae=admin_thumbnail_display_admin_uploader_end'), //cpg1.4
  array('Показване името на файла под умалената картинка', 'display_filename', 1, 'f=index.htm&amp;as=admin_thumbnail_display_filename&amp;ae=admin_thumbnail_display_filename_end'), //cpg1.4
  array('Показване описанието на албум', 'alb_desc_thumb', 1, 'f=index.htm&amp;as=admin_thumbnail_display_description&amp;ae=admin_thumbnail_display_description_end'), //cpg1.4
  array('Ред по подразбиране за сортиране на файловете', 'default_sort_order', 3, 'f=index.htm&amp;as=admin_thumbnail_default_sortorder&amp;ae=admin_thumbnail_default_sortorder_end'), //cpg1.4
  array('Минимален брой гласове за да се появи даден файл в \'Най-високо оценени\'', 'min_votes_for_rating', 0, 'f=index.htm&amp;as=admin_thumbnail_minimum_votes&amp;ae=admin_thumbnail_minimum_votes_end'), //cpg1.4

  'Изглед на снимката', //cpg1.4
  array('Ширина на таблицата за показване на файлове (пиксели или %)', 'picture_table_width', 0, 'f=index.htm&amp;as=admin_image_comment_table-width&amp;ae=admin_image_comment_table-width_end'), //cpg1.4
  array('Информацията за файла да се вижда по подразбиране', 'display_pic_info', 1, 'f=index.htm&amp;as=admin_image_comment_info_visible&amp;ae=admin_image_comment_info_visible_end'), //cpg1.4
  array('Максимална дължина на описанието', 'max_img_desc_length', 0, 'f=index.htm&amp;as=admin_image_comment_descr_length&amp;ae=admin_image_comment_descr_length_end'), //cpg1.4
  array('Максимален брой символи за дума', 'max_com_wlength', 0, 'f=index.htm&amp;as=admin_image_comment_chars_per_word&amp;ae=admin_image_comment_chars_per_word_end'), //cpg1.4
  array('Показване на филмовата лента', 'display_film_strip', 1, 'f=index.htm&amp;as=admin_image_comment_filmstrip_toggle&amp;ae=admin_image_comment_filmstrip_toggle_end'), //cpg1.4
  array('Показване името на файла под филмовата лента', 'display_film_strip_filename', 1, 'f=index.htm&amp;as=admin_image_comment_display_film_strip_filename&amp;ae=admin_image_comment_display_film_strip_filename_end'), //cpg1.4
  array('Брой снимки във филмовата лента', 'max_film_strip_items', 0, 'f=index.htm&amp;as=admin_image_comment_filmstrip_number&amp;ae=admin_image_comment_filmstrip_number_end'), //cpg1.4
  array('Интервал на Slideshow в милисекунди (1 секунда = 1000 милисекунди)', 'slideshow_interval', 0, 'f=index.htm&amp;as=admin_image_comment_slideshow_interval&amp;ae=admin_image_comment_slideshow_interval_end'), //cpg1.4

  'Настройки на коментарите', //cpg1.4
  array('Цензуриране на коментарите', 'filter_bad_words', 1, 'f=index.htm&amp;as=admin_image_comment_bad_words&amp;ae=admin_image_comment_bad_words_end'), //cpg1.4
  array('Позволяване на емотикони в коментарите', 'enable_smilies', 1, 'f=index.htm&amp;as=admin_image_comment_smilies&amp;ae=admin_image_comment_smilies_end'), //cpg1.4
  array('Позволяване на няколко последователни коментара от един и същ потребител (изключване на flood protection)', 'disable_comment_flood_protect', 1, 'f=index.htm&amp;as=admin_image_comment_flood&amp;ae=admin_image_comment_flood_end'), //cpg1.4
  array('Максимален брой редове за коментар', 'max_com_lines', 0, 'f=index.htm&amp;as=admin_image_comment_lines&amp;ae=admin_image_comment_lines_end'), //cpg1.4
  array('Максимална дължина на коментар', 'max_com_size', 0, 'f=index.htm&amp;as=admin_image_comment_length&amp;ae=admin_image_comment_length_end'), //cpg1.4
  array('Уведомяване на администратора за коментари по email', 'email_comment_notification', 1, 'f=index.htm&amp;as=admin_image_comment_admin_notify&amp;ae=admin_image_comment_admin_notify_end'), //cpg1.4
  array('Сортиране на коментари', 'comments_sort_descending', 17, 'f=index.htm&amp;as=admin_comment_sort_start&amp;ae=admin_comment_sort_end'), //cpg1.4
  array('Представка за анонимните автори на коментари', 'comments_anon_pfx', 0, 'f=index.htm&amp;as=comments_anon_pfx&amp;ae=comments_anon_pfx_end'), //cpg1.4

  'Настройки на файловете и умалените картинки', //cpg1.3.0
  array('Качество за JPEG файловете', 'jpeg_qual', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_jpeg_quality&amp;ae=admin_picture_thumbnail_jpeg_quality_end'), //cpg1.4
  array('Максимален размер на умалената картинка <a href="#notice2" class="clickable_option">**</a>', 'thumb_width', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max-dimension&amp;ae=admin_picture_thumbnail_max-dimension_end'), //cpg1.4
  array('Използван размер ( ширина или височина или максимално отношение за умалената картинка )<b>**</b>', 'thumb_use', 7, 'f=index.htm&amp;as=admin_picture_thumbnail_use-dimension&amp;ae=admin_picture_thumbnail_use-dimension_end'), //cpg1.4
  array('Създаване на междинни образи','make_intermediate',1, 'f=index.htm&amp;as=admin_picture_thumbnail_intermediate_toggle&amp;ae=admin_picture_thumbnail_intermediate_toggle_end'), //cpg1.4
  array('Максимална ширина или височина на междинния образ/видео <a href="#notice2" class="clickable_option">**</a>', 'picture_width', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_intermediate_dimension&amp;ae=admin_picture_thumbnail_intermediate_dimension_end'), //cpg1.4
  array('Максимална големина на качен файл (KB)', 'max_upl_size', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max_upload_size&amp;ae=admin_picture_thumbnail_max_upload_size_end'), //cpg1.4
  array('Максимална ширина или височина на качените образи/видео (пиксели)', 'max_upl_width_height', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max_upload_dimension&amp;ae=admin_picture_thumbnail_max_upload_dimension_end'), //cpg1.4
  array('Авто-преоразмеряване на картинки по-големи от макс. ширина/височина', 'auto_resize', 16, 'f=index.htm&amp;as=admin_picture_thumbnail_auto-resize&amp;ae=admin_picture_thumbnail_auto-resize_end'), //cpg1.4

  'Настройки на файловете и умалените картинки за напреднали', //cpg1.3.0
  array('Албумите могат да са лични (Заб.: ако превключите от \'yes\' на \'no\' всеки личен албум ще стане общодостъпен)', 'allow_private_albums', 1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_private_toggle&amp;ae=admin_picture_thumb_advanced_private_toggle_end'), //cpg1.4
  array('Показване на икона за частен албум на нелогнат потребител','show_private',1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_private_icon_show&amp;ae=admin_picture_thumb_advanced_private_icon_show_end'), //cpg1.4
  array('Забранение символи в имената на файловете', 'forbiden_fname_char',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_filename_forbidden_chars&amp;ae=admin_picture_thumb_advanced_filename_forbidden_chars_end'), //cpg1.4
  //array('Accepted file extensions for uploaded pictures', 'allowed_file_extensions',0, 'f=index.htm&amp;as=&amp;ae=_end'), //cpg1.4
  array('Позволени видове образи', 'allowed_img_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_pic_extensions&amp;ae=admin_picture_thumb_advanced_pic_extensions_end'), //cpg1.4
  array('Позволени видове видео', 'allowed_mov_types',0, 'f=index.htm&amp;as=admin_thumbs_advanced_movie&amp;ae=admin_thumbs_advanced_movie_end'), //cpg1.4
  array('Movie Playback Autostart', 'media_autostart',1, 'f=index.htm&amp;as=admin_movie_autoplay&amp;ae=admin_movie_autoplay_end'), //cpg1.4
  array('Позволени видове аудио', 'allowed_snd_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_audio_extensions&amp;ae=admin_picture_thumb_advanced_audio_extensions_end'), //cpg1.4
  array('Позволение видове документи', 'allowed_doc_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_doc_extensions&amp;ae=admin_picture_thumb_advanced_doc_extensions_end'), //cpg1.4
  array('Метод за променяне на размера на образите','thumb_method',2, 'f=index.htm&amp;as=admin_picture_thumb_advanced_resize_method&amp;ae=admin_picture_thumb_advanced_resize_method_end'), //cpg1.4
  array('Път до програмата на ImageMagick \'convert\' (пример /usr/bin/X11/)', 'impath', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_im_path&amp;ae=admin_picture_thumb_advanced_im_path_end'), //cpg1.4
  //array('Allowed image types (only valid for ImageMagick)', 'allowed_img_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_allowed_imagetypes&amp;ae=admin_picture_thumb_advanced_allowed_imagetypes_end'), //cpg1.4
  array('Опции към ImageMagick', 'im_options', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_im_commandline&amp;ae=admin_picture_thumb_advanced_im_commandline_end'), //cpg1.4
  array('Четене на EXIF данните в JPEG файловете', 'read_exif_data', 13, 'f=index.htm&amp;as=admin_picture_thumb_advanced_exif&amp;ae=admin_picture_thumb_advanced_exif_end'), //cpg1.4
  array('Четене IPTC данните в JPEG файловете', 'read_iptc_data', 1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_iptc&amp;ae=admin_picture_thumb_advanced_iptc_end'), //cpg1.4
  array('Директория с албумите <a href="#notice1" class="clickable_option">*</a>', 'fullpath', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_albums_dir&amp;ae=admin_picture_thumb_advanced_albums_dir_end'), //cpg1.4
  array('Директория за потребителските файлове <a href="#notice1" class="clickable_option">*</a>', 'userpics', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_userpics_dir&amp;ae=admin_picture_thumb_advanced_userpics_dir_end'), //cpg1.4
  array('Представка за междинните образи <a href="#notice1" class="clickable_option">*</a>', 'normal_pfx', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_intermediate_prefix&amp;ae=admin_picture_thumb_advanced_intermediate_prefix_end'), //cpg1.4
  array('Представка за умалените картинки <a href="#notice1" class="clickable_option">*</a>', 'thumb_pfx', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_thumbs_prefix&amp;ae=admin_picture_thumb_advanced_thumbs_prefix_end'), //cpg1.4
  array('Режим по подразбиране за директориите', 'default_dir_mode', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_chmod_folder&amp;ae=admin_picture_thumb_advanced_chmod_folder_end'), //cpg1.4
  array('Режим по подразбиране за файловете', 'default_file_mode', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_chmod_files&amp;ae=admin_picture_thumb_advanced_chmod_files_end'), //cpg1.4

  'Настройки за потребителите',
  array('Позволяване на регистрация на нови потребители', 'allow_user_registration', 1, 'f=index.htm&amp;as=admin_allow_registration&amp;ae=admin_allow_registration_end'), //cpg1.4
  array('Позволи достъп на не-log-нати потребители (guest или anonymous)', 'allow_unlogged_access', 1, 'f=index.htm&amp;as=admin_allow_unlogged_access&amp;ae=admin_allow_unlogged_access_end'), //cpg1.4
  array('Регистрацията на потребители изисква потвърждение по email', 'reg_requires_valid_email', 1, 'f=index.htm&amp;as=admin_registration_verify&amp;ae=admin_registration_verify_end'), //cpg1.4
  array('Уведомяване на администратора по email за регистрация на потребител', 'reg_notify_admin_email', 1, 'f=index.htm&amp;as=admin_registration_notify&amp;ae=admin_registration_notify_end'), //cpg1.4
  array('Административно активиране на регистрация', 'admin_activation', 1, 'f=index.htm&amp;as=admin_activation&amp;ae=admin_activation_end'),  //cpg1.4
  array('Позволяване на двама потребители да имат един и същ email', 'allow_duplicate_emails_addr', 1, 'f=index.htm&amp;as=admin_allow_duplicate_emails_addr&amp;ae=admin_allow_duplicate_emails_addr_end'), //cpg1.4
  array('Уведомяване на администратора за качени файлове чакащи одобряване', 'upl_notify_admin_email', 1, 'f=index.htm&amp;as=admin_approval_notify&amp;ae=admin_approval_notify_end'), //cpg1.4
  array('Позволяване на логнатите потребители да виждат потребителския списък', 'allow_memberlist', 1, 'f=index.htm&amp;as=admin_user_memberlist&amp;ae=admin_user_memberlist_end'), //cpg1.4
  array('Позволи на потребителите да сменят своя email в профила си', 'allow_email_change', 1, 'f=index.htm&amp;as=admin_user_allow_email_change&amp;ae=admin_user_allow_email_change_end'), //cpg1.4
  array('Позволи на потребителите да запазят контрол в/у картинките си в публична галерия', 'users_can_edit_pics', 1, 'f=index.htm&amp;as=admin_user_editpics_public_start&amp;ae=admin_user_editpics_public_end'), //cpg1.4
  array('Брой неуспешни опити за вход преди временен ban (възпира brute force атаки)', 'login_threshold', 0, 'f=index.htm&amp;as=admin_user_login_start&amp;ae=admin_user_login_end'), //cpg1.4
  array('Продължителност на временен ban след неуспешен вход', 'login_expiry', 0, 'f=index.htm&amp;as=admin_user_login_start&amp;ae=admin_user_login_end'), //cpg1.4
  array('Включи доклад за Админа', 'report_post', 1, 'f=index.htm&amp;as=admin_user_enable_report&amp;ae=admin_user_enable_report_end'),  //cpg1.4

// custom profile fields,  //cpg1.4
  'Допълнителни полета за потребителски профил (празно за неизползване).
  Use Profile 6 for long entries, such as biographies', //cpg1.4
  array('Профил 1', 'user_profile1_name', 0, 'f=index.htm&amp;as=admin_custom&amp;ae=admin_custom_end'), //cpg1.4
  array('Профил 2', 'user_profile2_name', 0), //cpg1.4
  array('Профил 3', 'user_profile3_name', 0), //cpg1.4
  array('Профил 4', 'user_profile4_name', 0), //cpg1.4
  array('Профил 5', 'user_profile5_name', 0), //cpg1.4
  array('Профил 6', 'user_profile6_name', 0), //cpg1.4

  'Допълнителни полета за описание на снимките (оставете празни ако няма да ги използвате)',
  array('Поле 1', 'user_field1_name', 0),
  array('Поле 2', 'user_field2_name', 0),
  array('Поле 3', 'user_field3_name', 0),
  array('Поле 4', 'user_field4_name', 0),

  'Настройки за Cookies',
  array('Име на cookie-то използвано от скрипта (когато се използва bbs интегриране, внимавайте да се различава от cookie-то на bbs-а)', 'cookie_name', 0),
  array('Път до cookie-то използвано от скрипта', 'cookie_path', 0),

  'Email настройки  (usually nothing has to be changed here; leave all fields blank when not sure)', //cpg1.4
  array('SMTP Хост (при празно се ползва sendmail-а)', 'smtp_host', 0, 'f=index.htm&amp;as=admin_email&amp;ae=admin_email_end'), //cpg1.4
  array('SMTP Потребител', 'smtp_username', 0), //cpg1.4
  array('SMTP Парола', 'smtp_password', 0), //cpg1.4

  'Logging and statistics', //cpg1.4
  array('Записващ режим <a href="#notice3" class="clickable_option">***</a>', 'log_mode', 11, 'f=index.htm&amp;as=admin_logging_log_mode&amp;ae=admin_logging_log_mode_end'), //cpg1.4
  array('Ел. картички', 'log_ecards', 1, 'f=index.htm&amp;as=admin_general_log_ecards&amp;ae=admin_general_log_ecards_end'), //cpg1.4
  array('Подробна статистика за гласуване','vote_details',1, 'f=index.htm&amp;as=admin_logging_votedetails&amp;ae=admin_logging_votedetails_end'), //cpg1.4
  array('Подробна статистика за разглеждане','hit_details',1, 'f=index.htm&amp;as=admin_logging_hitdetails&amp;ae=admin_logging_hitdetails_end'), //cpg1.4

  'Разни настройки',
  array('Позволяване на debug режим', 'debug_mode', 9), //cpg1.3.0
  array('Показване на съобщения в debug режим', 'debug_notice', 1), //cpg1.3.0
  array('Галерията е offline', 'offline', 1, 'f=index.htm&amp;as=admin_general_offline&amp;ae=admin_general_offline_end'), //cpg1.4
);


// ------------------------------------------------------------------------- //
// File db_ecard.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('DB_ECARD_PHP')) $lang_db_ecard_php = array(
  'title' => 'Изпращане на картичка', //cpg1.3.0
  'ecard_sender' => 'Подател', //cpg1.3.0
  'ecard_recipient' => 'Получател', //cpg1.3.0
  'ecard_date' => 'Дата', //cpg1.3.0
  'ecard_display' => 'Показване на картичка', //cpg1.3.0
  'ecard_name' => 'Име', //cpg1.3.0
  'ecard_email' => 'Email', //cpg1.3.0
  'ecard_ip' => 'IP #', //cpg1.3.0
  'ecard_възходящо' => 'възходящо', //cpg1.3.0
  'ecard_низходящо' => 'низходящо', //cpg1.3.0
  'ecard_sorted' => 'Сортиране', //cpg1.3.0
  'ecard_by_date' => 'по дата', //cpg1.3.0
  'ecard_by_sender_name' => 'по име на подател', //cpg1.3.0
  'ecard_by_sender_email' => 'по подателски email', //cpg1.3.0
  'ecard_by_sender_ip' => 'по име на подателски IP адрес', //cpg1.3.0
  'ecard_by_recipient_name' => 'по име на получател', //cpg1.3.0
  'ecard_by_recipient_email' => 'по получателски email', //cpg1.3.0
  'ecard_number' => 'показване на записи %s до %s от %s', //cpg1.3.0
  'ecard_goto_page' => 'отиване на страница', //cpg1.3.0
  'ecard_records_per_page' => 'Записи за страница', //cpg1.3.0
  'check_all' => 'Маркиране на всички', //cpg1.3.0
  'uncheck_all' => 'Отмаркиране', //cpg1.3.0
  'ecards_delete_selected' => 'Изтриване на избраните картички', //cpg1.3.0
  'ecards_delete_confirm' => 'Сигурни ли сте че искате да изтриете записите? Маркирайте кутийката!', //cpg1.3.0
  'ecards_delete_sure' => 'Сигурен съм', //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
  'empty_name_or_com' => 'Трябва да напишете име и коментар',
  'com_added' => 'Коментарът ви бе добавен',
  'alb_need_title' => 'Трябва да дадете заглавие на албума !',
  'no_udp_needed' => 'Няма нужда от актуализация.',
  'alb_updated' => 'Албумът бе актуализиран',
  'unknown_album' => 'Избраният албум не съществува или вие нямате разрешение да качвате в него',
  'no_pic_uploaded' => 'Не бе качен нито един файл !<br /><br />Ако наистина сте избрали  файл за качване, проверете дали сървъра позволява качване на файлове...', //cpg1.3.0
  'err_mkdir' => 'Създаването на директория %s бе неуспешно  !',
  'dest_dir_ro' => 'Целевата директория %s не позволява писане от скрипта !',
  'err_move' => 'Преместването от %s в %s невъзможно !',
  'err_fsize_too_large' => 'Размерът на файла, който качихте е твърде голям (максимум позволени размери %s x %s) !', //cpg1.3.0
  'err_imgsize_too_large' => 'Размерът на файла, който качихте е твърде голям (максимум позволени размер %s KB) !',
  'err_invalid_img' => 'Файлът, който качихте е в невалиден формат !',
  'allowed_img_types' => 'Можете да качите само %s образи.',
  'err_insert_pic' => 'Файлът \'%s\' не може да бъде включен в албума ', //cpg1.3.0
  'upload_success' => 'Файлът ви бе качен успешно<br /><br />Ще стане видим след одобрение от администратора.', //cpg1.3.0
  'notify_admin_email_subject' => '%s - Известие за ъплоуд', //cpg1.3.0
  'notify_admin_email_body' => 'Снимка, качена от %s се нуждае от одобрението ви. Посетете %s', //cpg1.3.0
  'info' => 'Информация',
  'com_added' => 'Бе добавен коментар',
  'alb_updated' => 'Албумът бе актуализиран',
  'err_comment_empty' => 'Коментарът ви е празен !',
  'err_invalid_fext' => 'Само файлове със следните разширения се приемат : <br /><br />%s.',
  'no_flood' => 'Съжаляваме но вие сте автор вече на последния качен коментар.<br /><br />Можете ако искате да модифицирате вече качения коментар', //cpg1.3.0
  'redirect_msg' => 'Пренасочване.<br /><br /><br />Натиснете \'ПРОДЪЛЖЕТЕ\' ако страницата не се презареди автоматично',
  'upl_success' => 'Файлът ви бе добавен успешно', //cpg1.3.0
  'email_comment_subject' => 'Коментар вписан в Coppermine Photo Gallery', //cpg1.3.0
  'email_comment_body' => 'Някой е написал коментар в галерията ви. Вижте го на', //cpg1.3.0
  'album_not_selected' => 'Няма избран албум', //cpg1.4
  'com_author_error' => 'Регистриран потребител ползва този прякор, влезте или ползвайте друг', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
  'caption' => 'Пояснение',
  'fs_pic' => 'образ в цял размер',
  'del_success' => 'успешно изтрит',
  'ns_pic' => 'образ с нормален размер',
  'err_del' => 'не може да бъде изтрит',
  'thumb_pic' => 'умалена картинка',
  'comment' => 'коментар',
  'im_in_alb' => 'образ в албума',
  'alb_del_success' => 'Албумът \'%s\' бе изтрит',
  'alb_mgr' => 'Албумен мениджър',
  'err_invalid_data' => 'Невалидна информация се получи в \'%s\'',
  'create_alb' => 'Създаване на албум \'%s\'',
  'update_alb' => 'Актуализиране на албум \'%s\' със заглавие \'%s\' и индекс \'%s\'',
  'del_pic' => 'Изтриване на файл', //cpg1.3.0
  'del_alb' => 'Изтриване на албум',
  'del_user' => 'Изтриване на потребител',
  'err_unknown_user' => 'Избраният потребител не съществува !',
  'err_empty_groups' => 'Няма групова таблица или груповата таблица е празна!', //cpg1.4
  'comment_deleted' => 'Коментарът успешно бе изтрит',
  'npic' => 'Картинка', //cpg1.4
  'pic_mgr' => 'Картинков мениджър', //cpg1.4
  'update_pic' => 'Актуализиране на картинка \'%s\' с файлово име \'%s\' и индекс \'%s\'', //cpg1.4
  'username' => 'Потребител', //cpg1.4
  'anonymized_comments' => '%s аноним(ен/ни) коментар(а)', //cpg1.4
  'anonymized_uploads' => '%s аноним(ен/ни) общодостъп(ен/ни) ъплоуд(и)', //cpg1.4
  'deleted_comments' => '%s изтрит(и) коментар(а)', //cpg1.4
  'deleted_uploads' => '%s изтрит(и) общодостъп(ен/ни) ъплоуд(и)', //cpg1.4
  'user_deleted' => 'потребител %s е изтрит', //cpg1.4
  'activate_user' => 'Активира потребител', //cpg1.4
  'user_already_active' => 'Регистрацията е вече активна', //cpg1.4
  'activated' => 'Активиран', //cpg1.4
  'deactivate_user' => 'Дезактивира потребител', //cpg1.4
  'user_already_inactive' => 'Регистрацията е вече дезактивирана', //cpg1.4
  'deactivated' => 'Дезактивиран', //cpg1.4
  'reset_password' => 'Промени парол(а/и)', //cpg1.4
  'password_reset' => 'Променена парола на %s', //cpg1.4
  'change_group' => 'Смяна на основна група', //cpg1.4
  'change_group_to_group' => 'Смяна от %s на %s', //cpg1.4
  'add_group' => 'Добавя вторична група', //cpg1.4
  'add_group_to_group' => 'Добавя потребител %s към група %s. Основната му група сега е %s , а вторичната - %s.', //cpg1.4
  'status' => 'Състояние', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File displayecard.php
// ------------------------------------------------------------------------- //

if (defined('DISPLAYECARD_PHP')) {

$lang_displayecard_php = array(
  'invalid_data' => 'Данните за картичката, които се опитвате да видите са били повредени от мейл клиента Ви. Проверката е завършена.', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File displayimage.php
// ------------------------------------------------------------------------- //

if (defined('DISPLAYIMAGE_PHP')){

$lang_display_image_php = array(
  'confirm_del' => 'Сигурни ли сте че искате да ИЗТРИЕТЕ този файл ? \\nКоментарите също ще бъдат изтрити.', //js-alert //cpg1.3.0
  'del_pic' => 'ИЗТРИВАНЕ НА ФАЙЛА', //cpg1.3.0
  'size' => '%s x %s пиксела',
  'views' => '%s пъти',
  'slideshow' => 'Слайдшоу',
  'stop_slideshow' => 'СПРИ ШОУТО',
  'view_fs' => 'Натиснете за да видите снимката уголемена',
  'edit_pic' => 'Редактиране на описание', //cpg1.3.0
  'crop_pic' => 'Изрязване и ротиране', //cpg1.3.0
  'set_player' => 'Смени плеъра',
);

$lang_picinfo = array(
  'title' =>'Информация за файла', //cpg1.3.0
  'Filename' => 'Име',
  'Album name' => 'Албум',
  'Rating' => 'Оценка ( %s глас(а) )',
  'Keywords' => 'Ключови думи',
  'File Size' => 'Размер на файла',
  'Date Added' => 'Дата на добавяне', //cpg1.4
  'Dimensions' => 'Размери',
  'Displayed' => 'Показан',
  'URL' => 'URL', //cpg1.4
  'Make' => 'Заснет', //cpg1.4
  'Model' => 'Модел', //cpg1.4
  'DateTime' => 'Дата на заснемане', //cpg1.4
  'ISOSpeedRatings'=>'ISO', //cpg1.4
  'MaxApertureValue' => 'Max Апертура', //cpg1.4
  'FocalLength' => 'Фокусно разстояние', //cpg1.4
  'Comment' => 'Коментар',
  'addFav'=>'Добави към любими', //cpg1.3.0
  'addFavPhrase'=>'Любими', //cpg1.3.0
  'remFav'=>'Махни от любими снимки', //cpg1.3.0
  'iptcTitle'=>'IPTC заглавие', //cpg1.3.0
  'iptcCopyright'=>'IPTC Авт. права', //cpg1.3.0
  'iptcKeywords'=>'IPTC ключови думи', //cpg1.3.0
  'iptcCategory'=>'IPTC категория', //cpg1.3.0
  'iptcSubCategories'=>'IPTC подкатегория', //cpg1.3.0
  'ColorSpace' => 'Цветова разредка', //cpg1.4
  'ExposureProgram' => 'Програма на експониране', //cpg1.4
  'Flash' => 'Светкавица', //cpg1.4
  'MeteringMode' => 'Метричен режим', //cpg1.4
  'ExposureTime' => 'Експозиционно време', //cpg1.4
  'ExposureBiasValue' => 'Exposure Bias', //cpg1.4
  'ImageDescription' => ' Описание', //cpg1.4
  'Orientation' => 'Ориентация', //cpg1.4
  'xResolution' => 'X Резолюция', //cpg1.4
  'yResolution' => 'Y Резолюция', //cpg1.4
  'ResolutionUnit' => 'Единица резолюцич', //cpg1.4
  'Software' => 'Софтуер', //cpg1.4
  'YCbCrPositioning' => 'YCbCr Позиция', //cpg1.4
  'ExifOffset' => 'Exif Отместване', //cpg1.4
  'IFD1Offset' => 'IFD1 Отместване', //cpg1.4
  'FNumber' => 'FNumber', //cpg1.4
  'ExifVersion' => 'Exif Версия', //cpg1.4
  'DateTimeOriginal' => 'Оригинална Дата', //cpg1.4
  'DateTimedigitized' => 'Цифрова Дата', //cpg1.4
  'ComponentsConfiguration' => 'Съставни Конфигурации', //cpg1.4
  'CompressedBitsPerPixel' => 'Компресия Bits Per Pixel', //cpg1.4
  'LightSource' => 'Светлинен източник', //cpg1.4
  'ISOSetting' => 'ISO Настройки', //cpg1.4
  'ColorMode' => 'Цветен режим', //cpg1.4
  'Quality' => 'Качество', //cpg1.4
  'ImageSharpening' => 'Изостряне', //cpg1.4
  'FocusMode' => 'Фокусен режим', //cpg1.4
  'FlashSetting' => 'Настройки на светкавица', //cpg1.4
  'ISOSelection' => 'ISO Избор', //cpg1.4
  'ImageAdjustment' => 'Корекция', //cpg1.4
  'Adapter' => 'Адаптор', //cpg1.4
  'ManualFocusDistance' => 'Ръчно фокусно разстояние', //cpg1.4
  'DigitalZoom' => 'Цифрово увеличение', //cpg1.4
  'AFFocusPosition' => 'AF позиция на фокуса', //cpg1.4
  'Saturation' => 'Наситеност', //cpg1.4
  'NoiseReduction' => 'Понижение на шума', //cpg1.4
  'FlashPixVersion' => 'Flash Pix Версия', //cpg1.4
  'ExifImageWidth' => 'Exif ширина', //cpg1.4
  'ExifImageHeight' => 'Exif височина', //cpg1.4
  'ExifInteroperabilityOffset' => 'Exif Interoperability отместване', //cpg1.4
  'FileSource' => 'Файлов източник', //cpg1.4
  'SceneType' => 'Вид сцена', //cpg1.4
  'CustomerRender' => 'Клиентски рендер', //cpg1.4
  'ExposureMode' => 'Експозиционен режим', //cpg1.4
  'WhiteBalance' => 'Бял баланс', //cpg1.4
  'DigitalZoomRatio' => 'Коефициент на цифрово увеличение', //cpg1.4
  'SceneCaptureMode' => 'Режим на прихващане', //cpg1.4
  'GainControl' => 'Контрол усилване', //cpg1.4
  'Contrast' => 'Контраст', //cpg1.4
  'Sharpness' => 'Острота', //cpg1.4
  'ManageExifDisplay' => 'Манипулирано Exif извеждане', //cpg1.4
  'submit' => 'Прати', //cpg1.4
  'success' => 'Успешно обновяване на информацията.', //cpg1.4
  'details' => 'Подробности', //cpg1.4
);

$lang_display_comments = array(
  'OK' => 'OK',
  'edit_title' => 'Редактирайте коментара',
  'confirm_delete' => 'Сигурен ли сте че искате да изтриете коментара ?', //js-alert
  'add_your_comment' => 'Добавете коментар',
  'name'=>'Име',
  'comment'=>'Коментар',
  'your_name' => 'анонимен',
  'report_comment_title' => 'Докладвайте този коментар на администратора', //cpg1.4
);

$lang_fullsize_popup = array(
  'click_to_close' => 'Натиснете върху образа за да затворите прозореца',
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
  'title' => 'Изпращане на електронна картичка',
  'invalid_email' => '<font color="red"><b>Предупреждение</b></font>: невалиден email адрес !',
  'ecard_title' => 'Електронна картичка до вас от %s',
  'error_not_image' => 'Само образи могат да бъдат пращани като картичка.', //cpg1.3.0
  'view_ecard' => 'Ако картичката не се показва коректно, натиснете върху този линк',
  'view_ecard_plaintext' => 'За да видите картичката, копитайте и поставете този URL в адресното поле на браузера си:', //cpg1.4
  'view_more_pics' => 'Натиснете върху линка за да видите още картинки !',
  'send_success' => 'Картичката ви бе пратена',
  'send_failed' => 'Съжаляваме но сървърът ви не може да праща картичките ви...',
  'from' => 'От',
  'your_name' => 'Името ви',
  'your_email' => 'Email адресът ви',
  'to' => 'To',
  'rcpt_name' => 'Име на получателя',
  'rcpt_email' => 'Email адрес на получателя',
  'greetings' => 'Поздравления',
  'message' => 'Съобщение',
  'ecards_footer' => 'Изпратено от %s с IP %s в %s (локално за Галерията време)', //cpg1.4
  'preview' => 'Преглед на картичката', //cpg1.4
  'preview_button' => 'Преглед', //cpg1.4
  'submit_button' => 'Изпрати картичка', //cpg1.4
  'preview_view_ecard' => 'Това ще е алтернативната връзка към картичката, еднократно създадена. Не става за преглед.', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File report_file.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('REPORT_FILE_PHP') || defined('DISPLAYREPORT_PHP')) $lang_report_php =array(
  'title' => 'Доклад до администратора', //cpg1.4
  'invalid_email' => '<b>Предупреждение</b> : невалиден мейл адрес !', //cpg1.4
  'report_subject' => 'Доклад от %s в галерия %s', //cpg1.4
  'view_report' => 'Алтернативна връзка при некоректно извеждане на доклада', //cpg1.4
  'view_report_plaintext' => 'За да видите доклада, копирайте и поставете този url в адресното поле на браузера си:', //cpg1.4
  'view_more_pics' => 'Галерия', //cpg1.4
  'send_success' => 'Доклада Ви беше изпратен', //cpg1.4
  'send_failed' => 'Съжалявам, но сървъра не може да изпрати Вашия доклад...', //cpg1.4
  'from' => 'От', //cpg1.4
  'your_name' => 'Вашето име', //cpg1.4
  'your_email' => 'Вашия email адрес', //cpg1.4
  'to' => 'За', //cpg1.4
  'administrator' => 'Администратор/Мод', //cpg1.4
  'subject' => 'Тема', //cpg1.4
  'comment_field_name' => 'Сведение за коментар от "%s"', //cpg1.4
  'reason' => 'Основание', //cpg1.4
  'message' => 'Съобщение', //cpg1.4
  'report_footer' => 'Пратен от %s с IP %s в %s (локално за галерията време)', //cpg1.4
  'obscene' => 'нецензурен', //cpg1.4
  'offensive' => 'обиден', //cpg1.4
  'misplaced' => 'извън темата/неуместен', //cpg1.4
  'missing' => 'липсващ', //cpg1.4
  'issue' => 'грешка/невъзможен изглед', //cpg1.4
  'other' => 'друг', //cpg1.4
  'refers_to' => 'Докладна препратка за', //cpg1.4
  'reasons_list_heading' => 'причин(а/и) за доклад:', //cpg1.4
  'no_reason_given' => 'няма дадена причина', //cpg1.4
  'go_comment' => 'Отиди в коментар', //cpg1.4
  'view_comment' => 'Виж пълния доклад с коментар', //cpg1.4
  'type_file' => 'файл', //cpg1.4
  'type_comment' => 'коментар', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
  'pic_info' => 'Информация за&nbsp;файла', //cpg1.3.0
  'album' => 'Албум',
  'title' => 'Заглавие',
  'filename' => 'Име на файл', //cpg1.4
  'desc' => 'Описание',
  'keywords' => 'Ключови думи',
  'new_keyword' => 'Нови ключови думи', //cpg1.4
  'new_keywords' => 'Намерени нови ключови думи', //cpg1.4
  'existing_keyword' => 'Съществуващи ключови думи', //cpg1.4
  'pic_info_str' => '%s пъти; %s - %s KB - %s разглеждания - %s гласа',
  'approve' => 'Одобрение на файл', //cpg1.3.0
  'postpone_app' => 'Отлагане на одобряването',
  'del_pic' => 'Изтриване на файла', //cpg1.3.0
  'del_all' => 'Изтрий ВСИЧКИ файлове', //cpg1.4
  'read_exif' => 'Прочитане на EXIF информацията отново', //cpg1.3.0
  'reset_view_count' => 'Нулиране на брояча за разглежданията',
  'reset_all_view_count' => 'Изтрий ВСИЧКИ броячи за разглеждания', //cpg1.4
  'reset_votes' => 'Нулиране на гласовете',
  'reset_all_votes' => 'Изтрий ВСИЧКИ гласувания', //cpg1.4
  'del_comm' => 'Изтриване на коментари',
  'del_all_comm' => 'Изтрий ВСИЧКИ коментари', //cpg1.4
  'upl_approval' => 'Одобрение на качени файлове',
  'edit_pics' => 'Редактиране на файлове', //cpg1.3.0
  'see_next' => 'Вижте следващите файлове', //cpg1.3.0
  'see_prev' => 'Вижте предишните файлове', //cpg1.3.0
  'n_pic' => '%s файла', //cpg1.3.0
  'n_of_pic_to_disp' => 'Брой файлове за показване', //cpg1.3.0
  'apply' => 'Приложете измененията', //cpg1.3.0
  'crop_title' => 'Coppermine Редактор на Снимки', //cpg1.3.0
  'preview' => 'Предварителен преглед', //cpg1.3.0
  'save' => 'Запис на образа', //cpg1.3.0
  'save_thumb' =>'Записване като умалена картинка', //cpg1.3.0
  'gallery_icon' => 'Направи това моя икона', //cpg1.4
  'sel_on_img' =>'Селекцията трябва да бъде изцяло над образа!', //js-alert //cpg1.3.0
  'album_properties' =>'Характеристики на албум', //cpg1.4
  'parent_category' =>'Родителска категория', //cpg1.4
  'thumbnail_view' =>'Умален изглед', //cpg1.4
  'select_unselect' =>'маркирай/размаркирай всичко', //cpg1.4
  'file_exists' => "Назначения файл '%s' вече съществува.", //cpg1.4
  'rename_failed' => "Неуспешно преименуване на '%s' в '%s'.", //cpg1.4
  'src_file_missing' => "Файла източник '%s' липсва.", // cpg 1.4
  'mime_conv' => "Не мога да конвертирам файла от '%s' в '%s'",//cpg1.4
  'forb_ext' => 'Забранено разширение на файл.',//cpg1.4
);

// ------------------------------------------------------------------------- //
// File faq.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('FAQ_PHP')) $lang_faq_php = array(
  'faq' => 'Често Задавани Въпроси', //cpg1.3.0
  'toc' => 'Съдържание', //cpg1.3.0
  'question' => 'Въпрос: ', //cpg1.3.0
  'answer' => 'Отговор: ', //cpg1.3.0
);

if (defined('FAQ_PHP')) $lang_faq_data = array(
  'General FAQ',
  array('Why do I need to register?', 'Registration may or may not be required by the administrator. Registration gives a member additional features such as uploading, having a favorite list, rating pictures and posting comments etc.', 'allow_user_registration', '1'),
  array('How do I register?', 'Go to &quot;Register&quot; and fill out the required fields (and the optional ones if you want to).<br />If the Administrator has Email Activation enabled, then after submitting your information you should recieve an email message at the address that you have submitted while registering, giving you instructions on how to activate your membership. Your membership must be activated in order for you to login.', 'allow_user_registration', '1'), //cpg1.4
  array('How Do I login?', 'Go to &quot;Login&quot;, submit your username and password and check &quot;Remember Me&quot; so you will be logged in on the site if you should leave it.<br /><b>IMPORTANT:Cookies must be enabled and the cookie from this site must not be deleted in order to use &quot;Remember Me&quot;.</b>', 'offline', 0),
  array('Why can I not login?', 'Did you register and click the link that was sent to you via email?. The link will activate your account. For other login problems contact the site administrator.', 'offline', 0),
  array('What if I forgot my password?', 'If this site has a &quot;Forgot password&quot; link then use it. Other than that contact the site administrator for a new password.', 'offline', 0),
  //array('What if I changed my email address?', 'Just simply login and change your email address through &quot;Profile&quot;', 'offline', 0),
  array('How do I save a picture to &quot;My Favorites&quot;?', 'Click on a picture and click on the &quot;picture info&quot; link (<img src="images/info.gif" width="16" height="16" border="0" alt="Picture information" />); scroll down to the picture information set and click &quot;Add to fav&quot;.<br />The administrator may have the &quot;picture information&quot; on by default.<br />IMPORTANT:Cookies must be enabled and the cookie from this site must not be deleted.', 'offline', 0),
  array('How do I rate a file?', 'Click on a thumbnail and go to the bottom and choose a rating.', 'offline', 0),
  array('How do I post a comment for a picture?', 'Click on a thumbnail and go to the bottom and post a comment.', 'offline', 0),
  array('How do I upload a file?', 'Go to &quot;Upload&quot;and select the album that you want to upload to. Click &quot;Browse,&quot; find the file to upload, and click &quot;open.&quot; Add a title and description if you want. Click &quot;Submit&quot;.<br /><br />Alternatively, for those users using <b>Windows XP</b>, you can upload multiple files directly to your own private albums using the XP Publishing wizard.<br />For instructions on how, and to get the required registry file, click <a href="xp_publish.php">here.</a>', 'allow_private_albums', 1), //cpg1.4
  array('Where do I upload a picture to?', 'You will be able to upload a file to one of your albums in &quot;My Gallery&quot;. The Administrator may also allow you to upload a file to one or more of the albums in the Main Gallery.', 'allow_private_albums', 0),
  array('What type and size of a file can I upload?', 'The size and type (jpg, png, etc.) is up to the administrator.', 'offline', 0),
  array('How do I create, rename or delete an album in &quot;My Gallery&quot;?', 'You should already be in &quot;Admin-Mode&quot;<br />Go to &quot;Create/Order My Albums&quot;and click &quot;New&quot;. Change &quot;New Album&quot; to your desired name.<br />You can also rename any of the albums in your gallery.<br />Click &quot;Apply Modifications&quot;.', 'allow_private_albums', 0),
  array('How can I modify and restrict users from viewing my albums?', 'You should already be in &quot;Admin Mode&quot;<br />Go to &quot;Modify My Albums. On the &quot;Update Album&quot; bar, select the album that you want to modify.<br />Here, you can change the name, description, thumbnail picture, restrict viewing and comment/rating permissions.<br />Click &quot;Update Album&quot;.', 'allow_private_albums', 0),
  array('How can I view other users\' galleries?', 'Go to &quot;Album List&quot; and select &quot;User Galleries&quot;.', 'allow_private_albums', 0),
  array('What are cookies?', 'Cookies are a plain text piece of data that is sent from a website and is put on to your computer.<br />Cookies usually allow a user to leave and return to the site without having to login again and other various chores.', 'offline', 0),
  array('Where can I get this program for my site?', 'Coppermine is a free Multimedia Gallery, released under GNU GPL. It is full of features and has been ported to various platforms. Visit the <a href="http://coppermine.sf.net/">Coppermine Home Page</a> to find out more or download it.', 'offline', 0),

  'Navigating the Site',
  array('What\'s &quot;Album List&quot;?', 'This will show you the entire category you are currently in, with a link to each album. If you are not in a category, it will show you the entire gallery with a link to each category. Thumbnails may be a link to the category.', 'offline', 0),
  array('What\'s &quot;My Gallery&quot;?', 'This feature lets users create their own galleries and add, delete or modify albums as well as upload to them.', 'allow_private_albums', 1), //cpg1.4
  array('What\'s &quot;Upload Picture&quot;?', 'This feature allows a user to upload a file (size and type is set by the site administrator) to a gallery selected by either you or the administrator.', 'allow_private_albums', 0),
  array('What\'s &quot;Last Uploads&quot;?', 'This feature shows the last uploads to the site.', 'offline', 0),
  array('What\'s &quot;Last Comments&quot;?', 'This feature shows the last comments along with the files posted by users.', 'offline', 0),
  array('What\'s &quot;Most Viewed&quot;?', 'This feature shows the most viewed files by all users (whether logged in or not).', 'offline', 0),
  array('What\'s &quot;Top Rated&quot;?', 'This feature shows the top rated files rated by the users, showing the average rating (e.g: five users each gave a <img src="images/rating3.gif" width="65" height="14" border="0" alt="" />: the file would have an average rating of <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> ;Five users rated the file from 1 to 5 (1,2,3,4,5) would result in an average <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> .)<br />The ratings go from <img src="images/rating5.gif" width="65" height="14" border="0" alt="best" /> (best) to <img src="images/rating0.gif" width="65" height="14" border="0" alt="worst" /> (worst).', 'offline', 0),
  array('What\'s &quot;My Favorites&quot;?', 'This feature will let a user store a favorite file in the cookie that was sent to your computer.', 'offline', 0),
);


// ------------------------------------------------------------------------- //
// File forgot_passwd.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) $lang_forgot_passwd_php = array(
  'forgot_passwd' => 'Напомняне за парола', //cpg1.3.0
  'err_already_logged_in' => 'Вече сте логнат !', //cpg1.3.0
  'enter_email' => 'Въведете email адреса си', //cpg1.3.0
  'submit' => 'прати', //cpg1.3.0
  'illegal_session' => 'Сесията за забравена парола е невалидна или изтекла.', //cpg1.4
  'failed_sending_email' => 'Писмото с паролата не може да бъде пратено !', //cpg1.3.0
  'email_sent' => 'Email с потребителското ви име и парола бе пратен на %s', //cpg1.3.0
  'verify_email_sent' => 'Мейл беше изпратен на %s. Моля проверете си мейла за завършване на процеса.', //cpg1.4
  'err_unk_user' => 'Избраният потребител не съществува!', //cpg1.3.0
  'account_verify_subject' => '%s - Искане на нова парола', //cpg1.4
  'account_verify_body' => 'Поръчахте нова парола. Ако искате да получите нова парола на мейла си, кликнете бърху слдната връзка:

%s', //cpg1.4
  'passwd_reset_subject' => '%s - Вашата Нова Парола', //cpg1.4
  'passwd_reset_body' => 'Това е новата парола, която поискахте:
Име: %s
Парола: %s
Натиснете %s за да влезнете.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
  'group_name' => 'Име на група',
  'permissions' => 'Позволения', //cpg1.4
  'public_albums' => 'Албуми с общодостъпно качване', //cpg1.4
  'personal_gallery' => 'Лична галерия', //cpg1.4
  'upload_method' => 'Метод на качване', //cpg1.4
  'disk_quota' => 'Дискова квота',
  'rating' => 'Оценяване', //cpg1.4
  'ecards' => 'Картички', //cpg1.4
  'comments' => 'Коментари', //cpg1.4
  'allowed' => 'Допуснат', //cpg1.4
  'approval' => 'Одобрени', //cpg1.4
  'boxes_number' => 'Бр. кутийки', //cpg1.4
  'variable' => 'променлив', //cpg1.4
  'fixed' => 'постоянен', //cpg1.4
  'apply' => 'Приложете измененията',
  'create_new_group' => 'Създаване на нова група',
  'del_groups' => 'Изтриване на избраната група',
  'confirm_del' => 'Предупреждение, когато изтриете група, потребителите от нея ще бъдат преместени в групата  \'Регистрирани\' !\n\nЖелаете ли да продължите ?', //js-alert //cpg1.3.0
  'title' => 'Управление на потребителските групи',
  'num_file_upload'=>'Максимум/точен брой на полетата за качване на файлове', //cpg1.3.0
  'num_URI_upload'=>'Максимум/точен брой на полетата за качване на URI', //cpg1.3.0
  'reset_to_default' => 'Нулирай към подразбиращо се име (%s) - препоръчително!', //cpg1.4
  'error_group_empty' => 'Празна групова таблица !<br /><br />Създадена е нова по подразбиране, моля презаредете страницата', //cpg1.4
  'explain_greyed_out_title' => 'Защо този ред е по-сив?', //cpg1.4
  'explain_guests_greyed_out_text' => 'Не можете да промените характеристиките на тази група, защото сте избрали &quot; Позволи достъп на нерегистрирани потребители (guest или anonymous)&quot; да е &quot;Не&quot; в конфигурацията. Всички гости (членове на групата %s) не могат да влезнат; затова груповите условия не им влияят.', //cpg1.4
  'explain_banned_greyed_out_text' => 'Не можете да промените характеристиките на групата %s, защото нейните членове не могат да правят нищо по принцип.', //cpg1.4
  'group_assigned_album' => 'зададен(и) албум(и)', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
  'welcome' => 'Добре дошли !',
);

$lang_album_admin_menu = array(
  'confirm_delete' => 'Сигурни ли сте че искате да ИЗТРИЕТЕ този албум ? \\nВсички файлове и коментари ще бъдат изтрити.', //js-alert //cpg1.3.0
  'delete' => 'ИЗТРИЙ',
  'modify' => 'СВОЙСТВА',
  'edit_pics' => 'РЕДАКЦИЯ НА ФАЙЛ', //cpg1.3.0
);

$lang_list_categories = array(
  'home' => 'начало',
  'stat1' => '<b>[pictures]</b> файл(а) в <b>[albums]</b> албум(а) и <b>[cat]</b> категория(и) с <b>[comments]</b> коментар(а), видян(и) <b>[views]</b> път(и)', //cpg1.3.0
  'stat2' => '<b>[pictures]</b> файл(а) в <b>[albums]</b> албум(а), видян(и) <b>[views]</b> път(и)', //cpg1.3.0
  'xx_s_gallery' => 'Галерия на %s',
  'stat3' => '<b>[pictures]</b> файл(а) в <b>[albums]</b> албум(a) с <b>[comments]</b> коментар(а), видян(и) <b>[views]</b> път(и)', //cpg1.3.0
);

$lang_list_users = array(
  'user_list' => 'Списък с потребители',
  'no_user_gal' => 'Няма потребителски галерии',
  'n_albums' => '%s албум(а)',
  'n_pics' => '%s файл(а)', //cpg1.3.0
);

$lang_list_albums = array(
  'n_pictures' => '%s файл(а)', //cpg1.3.0
  'last_added' => ', последният добавен на %s',
  'n_link_pictures' => '%s свързани файлове', //cpg1.4
  'total_pictures' => '%s файлове общо', //cpg1.4
);

}

// ------------------------------------------------------------------------- //
// File keywordmgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('KEYWORDMGR_PHP')) $lang_keywordmgr_php = array(
  'title' => 'Управление на ключови думи', //cpg1.4
  'edit' => 'редакция', //cpg1.4
  'delete' => 'изтриване', //cpg1.4
  'search' => 'търсене', //cpg1.4
  'keyword_test_search' => 'търси за %s в нов прозорец', //cpg1.4
  'keyword_del' => 'изтрий ключовата дума %s', //cpg1.4
  'confirm_delete' => 'Сигурен ли сте, че искате да изтриете ключовата дума %s от цялата Галерия?', //cpg1.4  // js-alert
  'change_keyword' => 'смени ключова дума', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
  'login' => 'Вход',
  'enter_login_pswd' => 'Въведете име и парола за вход',
  'username' => 'Име',
  'password' => 'Парола',
  'remember_me' => 'Помни ме',
  'welcome' => 'Добре дошли %s ...',
  'err_login' => '*** Не можете да влезнете. Опитайте пак. ***',
  'err_already_logged_in' => 'Вече сте влязъл !',
  'forgot_password_link' => 'Забравих си паролата', //cpg1.3.0
  'cookie_warning' => 'Внимание! Браузера Ви на приема бисквитки (cookies)!', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
  'logout' => 'Изход',
  'bye' => 'Всичко хубаво %s ...',
  'err_not_loged_in' => 'Не сте влязъл !',
);

// ------------------------------------------------------------------------- //
// File minibrowser.php  //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('MINIBROWSER_PHP')) $lang_minibrowser_php = array(
  'close' => 'затвори', //cpg1.4
  'submit' => 'OK', //cpg1.4
  'up' => 'ниво нагоре', //cpg1.4
  'current_path' => 'текущ път', //cpg1.4
  'select_directory' => 'моля изберете папка', //cpg1.4
  'click_to_close' => 'Кликнете изображението, за да затворите прозореца',
);

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
  'upd_alb_n' => 'Актуализация на албум %s',
  'general_settings' => 'Общи настройки',
  'alb_title' => 'Заглавие на албум',
  'alb_cat' => 'Категория на албум',
  'alb_desc' => 'Описание на албум',
  'alb_keyword' => 'Ключови думи', //cpg1.4
  'alb_thumb' => 'Умалена картинка на албума',
  'alb_perm' => 'Разрешения за този албум',
  'can_view' => 'Албумът може да бъде разглеждан само от',
  'can_upload' => 'Посетителите могат да качват файлове',
  'can_post_comments' => 'Посетителите могат да пишат коментари',
  'can_rate' => 'Посетителите могат да оценяват файлове',
  'user_gal' => 'Потребителски галерии',
  'no_cat' => '* Без категория *',
  'alb_empty' => 'Празен албум',
  'last_uploaded' => 'Последно качени',
  'public_alb' => 'Всеки (публичен албум)',
  'me_only' => 'Само мен',
  'owner_only' => 'Само собственика на албума (%s) ',
  'groupp_only' => 'Членовете на групата \'%s\' ',
  'err_no_alb_to_modify' => 'Нито един албум не можете да променяте в базата данни.',
  'update' => 'Актуализация на албум', //cpg1.3.0
  'reset_album' => 'Нулирай албум', //cpg1.4
  'reset_views' => 'Нулирай брояча за разглеждане на &quot;0&quot; в %s', //cpg1.4
  'reset_rating' => 'Нулирай класирането на всички файлове в %s', //cpg1.4
  'delete_comments' => 'Изтрий всички коментари от %s', //cpg1.4
  'delete_files' => '%sIrreversibly%s изтрий всички файлове в %s', //cpg1.4
  'views' => 'разглеждания', //cpg1.4
  'votes' => 'гласувания', //cpg1.4
  'comments' => 'коментари', //cpg1.4
  'files' => 'файлове', //cpg1.4
  'submit_reset' => 'заяви промените', //cpg1.4
  'reset_views_confirm' => 'Сигурен съм', //cpg1.4
  'notice1' => '(*) зависи от настройките на групата %sgroups%s ', //cpg1.3.0 (do not translate %s!)
  'alb_password' => 'Парола за албума', //cpg1.4
  'alb_password_hint' => 'Гатанка за паролата', //cpg1.4
  'edit_files' =>'Редактирай файлове', //cpg1.4
  'parent_category' =>'Родителска категория', //cpg1.4
  'thumbnail_view' =>'Умален изглед', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File phpinfo.php
// ------------------------------------------------------------------------- //

if (defined('PHPINFO_PHP')) $lang_phpinfo_php = array(
  'php_info' => 'PHP информация',
  'explanation' => 'Това е генерирана от PHP-функция <a href="http://www.php.net/phpinfo">phpinfo()</a> информация, показана в Coppermine.',
  'no_link' => 'Показването на тази информация е рисково за сигурността, поради което тя е видима само за администратора. Всеки опит за връзка от друг потребител ще бъде отказана.',
);

// ------------------------------------------------------------------------- //
// File picmgr.php //cpg1.4
// ------------------------------------------------------------------------- //
if (defined('PICMGR_PHP')) $lang_picmgr_php = array(
  'pic_mgr' => 'Фото Менажер', //cpg1.4
  'select_album' => 'Избери Албум', //cpg1.4
  'delete' => 'Изтриване', //cpg1.4
  'confirm_delete1' => 'Сигурни ли сте, че искате да изтриете това изображение ?', //cpg1.4
  'confirm_delete2' => '\nИзображението ще бъде изтрито завинаги.', //cpg1.4
  'apply_modifs' => 'Приложи измененията', //cpg1.4
  'confirm_modifs' => 'Потвърди измененията', //cpg1.4
  'pic_need_name' => 'Изображението трябва да има име !', //cpg1.4
  'no_change' => 'Не сте променили нищо !', //cpg1.4
  'no_album' => '* Няма Албум *', //cpg1.4
  'explanation_header' => 'Текущото сортиране може да бъде установено от Вас за тази страница само ако', //cpg1.4
  'explanation1' => 'администратора е позволил "Подразбиращо се сортиране за файлове" в конфигурацията като "Низходяща позиция" или "Възходяща позиция" (общи настройки за всички потребители избрали друго сортиране)', //cpg1.4
  'explanation2' => 'потребителят избрал "Низходяща позиция" или "Възходяща позиция" в страницата с умалени картинки (настройка за всеки потребител)', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File pluginmgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('PLUGINMGR_PHP')){

$lang_pluginmgr_php = array(
  'confirm_uninstall' => 'Сигурни ли сте, че искате да ДЕИНСТАЛИРАТЕ този плъг-ин', //cpg1.4
  'confirm_delete' => 'Сигурни ли сте, че искате да ИЗТРИЕТЕ този плъг-ин', //cpg1.4
  'pmgr' => 'Плъг-ин Менажер', //cpg1.4
  'name' => 'Име', //cpg1.4
  'author' => 'Автор', //cpg1.4
  'desc' => 'Описание', //cpg1.4
  'vers' => 'вер.', //cpg1.4
  'i_plugins' => 'Инсталирани Плъг-ини', //cpg1.4
  'n_plugins' => 'Не инсталирани Плъг-ини', //cpg1.4
  'none_installed' => 'Не е инсталиран', //cpg1.4
  'operation' => 'Действие', //cpg1.4
  'not_plugin_package' => 'Качения файл не е пакет на Плъг-ин.', //cpg1.4
  'copy_error' => 'Грешка при копирането на пакета в папката на Плъг-ините.', //cpg1.4
  'upload' => 'Качване', //cpg1.4
  'configure_plugin' => 'Конфигуриране на Плъг-ин', //cpg1.4
  'cleanup_plugin' => 'Чистене на Плъг-ин', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
  'already_rated' => 'Съжаляваме но вече сте оценили този файл', //cpg1.3.0
  'rate_ok' => 'Гласът ви бе получен',
  'forbidden' => 'Не можете да оценявате собствените си файлове.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
Въпреки че администраторите на {SITE_NAME} ще се опитват да премахват или редактират всеки нежелателен материал възможно най-бързо, не е възможно да се преглежда всеки файл. Затова трябва да се съгласите с това че всички файлове в този сайт отразяват само вижданията или мнението на авторите им, а не на администраторите или уебмастъра (освен файловете на последните) и следователно не могат да бъдат отговорни за тях.<br />
<br />
Съгласявате се да не качвате обидни, вулгарни, клеветнически, предизвикващи омраза, заплашващи, сексуално-ориентирани или други материали, които могат да нарушават действащите закони. Съгласявате се и че уебмастъра, администратора и модераторите на {SITE_NAME} имат правото да премахват или редактират всеки файл по всяко време когато им е удобно. Като потребител давате съгласието всяка информация, която въведете да бъде въведена в база данни. Въпреки че тази информация няма да бъде предавана на трети страни без съгласието ви, уебмастърът и администраторът не могат да бъдат подвеждани под отговорност за хакерски атаки, които могат да компрометират тайната на вашите данни.<br />
<br />
Сайтът използва cookies за да съхранява информация на локалния ви компютър. Тези cookies служат само за да подобрят удоволстието ви от разглеждането. Email aдресът ви ще се използва само за потвърждение на регистрационните ви детайли и за паролата.<br />
<br />
Като натиснете 'Съгласен съм' отдолу , се съгласявате с тези условия.
EOT;

$lang_register_php = array(
  'page_title' => 'Регистрация на потребител',
  'term_cond' => 'Условия',
  'i_agree' => 'Съгласен съм',
  'submit' => 'Изпращане на регистрация',
  'err_user_exists' => 'Потребителското име, което сте въвели вече съществува, моля изберете друго',
  'err_password_mismatch' => 'Двете пароли не съвпадат, въведете ги, моля, отново',
  'err_uname_short' => 'Потребителското име трябва да е поне 2 символа дълго',
  'err_password_short' => 'Паролата трябва да е поне 2 символа дълга',
  'err_uname_pass_diff' => 'Потребителското име и паролата трябва да са различни',
  'err_invalid_email' => 'Email адресът е невалиден',
  'err_duplicate_email' => 'Друг регистриран вече потребител има същия email, който въведохте',
  'enter_info' => 'Входна регистрационна информация',
  'required_info' => 'Задължителна информация',
  'optional_info' => 'Незадължителна информация',
  'username' => 'Потребителско име',
  'password' => 'Парола',
  'password_again' => 'Въведете отново паролата',
  'email' => 'Email',
  'location' => 'Място',
  'interests' => 'Интереси',
  'website' => 'Лична страница',
  'occupation' => 'Професия/занимание',
  'error' => 'ГРЕШКА',
  'confirm_email_subject' => '%s - Потвърждение на регистрация',
  'information' => 'Информация',
  'failed_sending_email' => 'Регистрационният email за потвърждаване не може да бъде изпратен !',
  'thank_you' => 'Благодарим ви за регистрацията.<br /><br />Email с информация за това как да активирате акаунта си бе пратен на email адресът, който дадохте.',
  'acct_created' => 'Акаунтът ви бе създаден и вече можете да влезнете с вашето име и парола',
  'acct_active' => 'Акаунтът ви вече е активен и можете да влезнете с името и паролата си',
  'acct_already_act' => 'Акаунтът ви вече бе активиран !',
  'acct_act_failed' => 'Този акаунт не може да бъде активиран !',
  'err_unk_user' => 'Избраният потребител не съществува !',
  'x_s_profile' => 'Профил на %s\'',
  'group' => 'Група',
  'reg_date' => 'Присъединил се на:',
  'disk_usage' => 'Използвано пространство',
  'change_pass' => 'Смяна на парола',
  'current_pass' => 'Сегашна парола',
  'new_pass' => 'Нова парола',
  'new_pass_again' => 'Нова парола отново',
  'err_curr_pass' => 'Настоящата парола е сгрешена',
  'apply_modif' => 'Промени',
  'change_pass' => 'Промяна на паролата ми',
  'update_success' => 'Профилът ви бе актуализиран',
  'pass_chg_success' => 'Паролата ви бе променена',
  'pass_chg_error' => 'Паролата ви не бе променена',
  'notify_admin_email_subject' => '%s - Известие за регистрация', //cpg1.3.0
  'last_uploads' => 'Последно качен файл.<br />Кликнете, за да видите всички качвания от', //cpg1.4
  'last_comments' => 'Последен коментар.<br />Кликнете, за да видите всички коментари от', //cpg1.4
  'notify_admin_email_body' => 'Нов потребител с име "%s" се регистрира в галерията ви', //cpg1.3.0
  'pic_count' => 'Качени файла', //cpg1.4
  'notify_admin_request_email_subject' => '%s - Молба за регистрация', //cpg1.4
  'thank_you_admin_activation' => 'Благодаря Ви.<br /><br />Вашата молба за активиране беше изпратена на администратора. При одобряване ще получите мейл.', //cpg1.4
  'acct_active_admin_activation' => 'Регистрацията е активирана и на потребителя беше изпратен мейл.', //cpg1.4
  'notify_user_email_subject' => '%s - Известие за активация', //cpg1.4
);

$lang_register_confirm_email = <<<EOT
Благодарим ви за регистриране в {SITE_NAME}

За да активирате акаунта си с потребителско име "{USER_NAME}", трябва да кликнете линка отдолу или да го копирате в адресния прозорец на уеб браузера ви.

<a href="{ACT_LINK}">{ACT_LINK}</a>

С най-добри пожелания,

Екипът на {SITE_NAME}

EOT;

$lang_register_approve_email = <<<EOT
Нов потребител с името "{USER_NAME}" беше регистриран във вашата Галерия.

За да активирате регистрацията трябва да кликнете на връзката отдолу или да я копирате и поставите в адресното поле на браузера си.

<a href="{ACT_LINK}">{ACT_LINK}</a>

EOT;

$lang_register_activated_email = <<<EOT
Вашата регистрация беше одобрена и активирана.

Сега можете да влезнете от <a href="{SITE_LINK}">{SITE_LINK}</a> чрез потребителско име "{USER_NAME}"


С уважение,

Екипът на {SITE_NAME}

EOT;
}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
  'title' => 'Разглеждане на коментарите',
  'no_comment' => 'Няма коментари за разглеждане',
  'n_comm_del' => '%s коментар(а) изтрити',
  'n_comm_disp' => 'Брой коментари за показване',
  'see_prev' => 'Вж. предишните',
  'see_next' => 'Вж. следващите',
  'del_comm' => 'Изтрий избраните',
  'user_name' => 'Име', //cpg1.4
  'date' => 'Дата', //cpg1.4
  'comment' => 'Коментар', //cpg1.4
  'file' => 'Файл', //cpg1.4
  'name_a' => 'Възходящи потребители', //cpg1.4
  'name_d' => 'Низходящи потребители', //cpg1.4
  'date_a' => 'Възходящи дати', //cpg1.4
  'date_d' => 'Низходящи дати', //cpg1.4
  'comment_a' => 'Възходящи коментари', //cpg1.4
  'comment_d' => 'Низходящи коментари', //cpg1.4
  'file_a' => 'Възходящи файлове', //cpg1.4
  'file_d' => 'Низходящи файлове', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File search.php                                                           //
// ------------------------------------------------------------------------- //


if (defined('SEARCH_PHP')){

$lang_search_php = array(
  'title' => 'Търсене в колекцията', //cpg1.4
  'submit_search' => 'търси', //cpg1.4
  'keyword_list_title' => 'Списък от ключови думи', //cpg1.4
  'keyword_msg' => 'Горният списък не е всеобхватен. Той не включва думи от заглавието и описанието на снимките. Пробвайте търсене на пълен текст.',  //cpg1.4
  'edit_keywords' => 'Редактирай ключови думи', //cpg1.4
  'search in' => 'Търси в:', //cpg1.4
  'ip_address' => 'IP адрес', //cpg1.4
  'fields' => 'Търси в', //cpg1.4
  'age' => 'Години', //cpg1.4
  'newer_than' => 'По-нови от', //cpg1.4
  'older_than' => 'По-стари от', //cpg1.4
  'days' => 'ден(дни)', //cpg1.4
  'all_words' => 'Пълно съответствие (AND)', //cpg1.4
  'any_words' => 'Която и да е дума (OR)', //cpg1.4
);

$lang_adv_opts = array(
  'title' => 'Заглавие', //cpg1.4
  'caption' => 'Обяснение', //cpg1.4
  'keywords' => 'Ключови думи', //cpg1.4
  'owner_name' => 'Име на собственик', //cpg1.4
  'filename' => 'Име на файл', //cpg1.4
);

}

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
  'page_title' => 'Търсене на нови файлове', //cpg1.3.0
  'select_dir' => 'Изберете директория',
  'select_dir_msg' => 'Тази функция Ви позволява да добавяте \' накуп\', които предварително сте качили чрез FTP на сървъра си<br /><br />Изберете папката, където ще качвате файловете си', //cpg1.3.0
  'no_pic_to_add' => 'Няма файлове за добавяне', //cpg1.3.0
  'need_one_album' => 'Трябва ви поне един албум за да ползвате функцията.',
  'warning' => 'Предупреждение',
  'change_perm' => 'скрипта не може да пише в тази директория, трябва да смените разрешенията й на 755 или 777 преди да се опитвате да добавяте файлове !', //cpg1.3.0
  'target_album' => '<b>Сложете файловете от &quot;</b>%s<b>&quot; в </b>%s', //cpg1.3.0
  'folder' => 'Папка',
  'image' => 'файл',
  'album' => 'Албум',
  'result' => 'Резултат',
  'dir_ro' => 'Не може да се чете. ',
  'dir_cant_read' => 'Не може да се записва върху него. ',
  'insert' => 'Добавяне на файлове в галерията', //cpg1.3.0
  'list_new_pic' => 'Списък на новите файлове', //cpg1.3.0
  'insert_selected' => 'Вкарайте избраните файлове', //cpg1.3.0
  'no_pic_found' => 'Не бе открит нов файл', //cpg1.3.0
  'be_patient' => 'Бъдете търпеливи, скрипта има нужда от време за да добави файловете', //cpg1.3.0
  'no_album' => 'няма избрани албуми',  //cpg1.3.0
  'result_icon' => 'кликнете за подробности или презареждане',  //cpg1.4
  'бележки' =>  '<ul>'.
                          '<li><b>OK</b> : означава че файлът бе успешно добавен'.
                          '<li><b>DP</b> : означава че файлът е дубликат и вече е в базата данни'.
                          '<li><b>PB</b> : означава че файлът не може да бъде добавен, проверете конфигурацията и позволенията на директориите където са разположени файловете'.
                          '<li><b>NA</b> : означава че не сте избрали албум, в който да отиде файлът, натиснете \'<a href="javascript:history.back(1)">назад</a>\' и изберете албум. Ако нямате албум <a href="albmgr.php">създайте си първо</a></li>'.
                          '<li>Ако знакът OK, DP, PB  не се появи, натиснете върху дефектния файл за да видите съобщението за грешка дадено от PHP'.
                          '<li>Ако браузерът ви даде: \' Timeout\', натиснете бутона за презареждане'.
                          '</ul>', //cpg1.3.0
  'select_album' => 'изберете албум', //cpg1.3.0
  'check_all' => 'Изберете всички', //cpg1.3.0
  'uncheck_all' => 'Нулиране', //cpg1.3.0
  'no_folders' => 'Още няма папки в папката "албуми". Създайте поне една потребителска папка и качете (през FTP например) вашите файлове там. Не можете да качвате нито в "userpics", нито в "edit" папките, те са запазени за http качвания и служебни цели.', //cpg1.4
  'albums_no_category' => 'Албум без категория', //cpg1.4 // album pulldown mod, added by frogfoot
  'personal_albums' => '* Лични албуми', //cpg1.4 // album pulldown mod, added by frogfoot
  'browse_batch_add' => 'Прелистващ интерфейс (препоръчително)', //cpg1.4
  'edit_pics' => 'Редактирай файлове', //cpg1.4
  'edit_properties' => 'Характеристики на албума', //cpg1.4
  'view_thumbs' => 'Умален изглед', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File stat_details.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('STAT_DETAILS_PHP')) $lang_stat_details_php = array(
  'show_hide' => 'покажи/скрий тази колона', //cpg1.4
  'vote' => 'Подробности за гласуване', //cpg1.4
  'hits' => 'Подробности за разглеждане', //cpg1.4
  'stats' => 'Статистика на гласуване', //cpg1.4
  'sdate' => 'Дата', //cpg1.4
  'rating' => 'Класиране', //cpg1.4
  'search_phrase' => 'Търсещ израз', //cpg1.4
  'referer' => 'Препратка', //cpg1.4
  'browser' => 'Браузер', //cpg1.4
  'os' => 'Операционна система', //cpg1.4
  'ip' => 'IP', //cpg1.4
  'sort_by_xxx' => 'Сортирай по %s', //cpg1.4
  'ascending' => 'възходящо', //cpg1.4
  'descending' => 'низходящо', //cpg1.4
  'internal' => 'вътрешен', //cpg1.4
  'close' => 'затвори', //cpg1.4
  'hide_internal_referers' => 'скрий вътрешните препратки', //cpg1.4
  'date_display' => 'Извеждай дата', //cpg1.4
  'submit' => 'приложи / опресни', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File thumbnails.php
// ------------------------------------------------------------------------- //

// Void

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) $lang_upload_php = array(
  'title' => 'Качване на файл', //cpg1.3.0
  'custom_title' => 'Форма по желание', //cpg1.3.0
  'cust_instr_1' => 'Можете да изберете по желание броя на полета за качване. Обаче, не може да изберете повече от лимитите изброени по-долу.', //cpg1.3.0
  'cust_instr_2' => 'Желан брой полета', //cpg1.3.0
  'cust_instr_3' => 'Полета за качване на файлове: %s', //cpg1.3.0
  'cust_instr_4' => 'Полета за качване от URI/URL: %s', //cpg1.3.0
  'cust_instr_5' => 'Полета за качване от URI/URL:', //cpg1.3.0
  'cust_instr_6' => 'Полета за качване на файлове:', //cpg1.3.0
  'cust_instr_7' => 'Моля въведете броя полета от всеки тип за качване, който желате този път. След това натиснете \'Продължете\'. ', //cpg1.3.0
  'reg_instr_1' => 'Невалидно действие при създаване на формата.', //cpg1.3.0
  'reg_instr_2' => 'Сега можете да качите файлове като използвате полетата по-долу. Размерът на качените файлове качени от вас на сървъра не трябва да надвишава %s KB всеки. ZIP файловете качени чрез \'Качване на файл\' и \'Качване на URI/URL\' секциите ще останат компресирани.', //cpg1.3.0
  'reg_instr_3' => 'Ако искате zip файла или архива да бъде декомпресиран, трябва да използвате полето за качване дадено в  \'Декомпресирано ZIP качване\'.', //cpg1.3.0
  'reg_instr_4' => 'Когато използвате секцията за качване от URI/URL, моля въведете пътя към файла по този модел: http://www.mysite.com/images/example.jpg', //cpg1.3.0
  'reg_instr_5' => 'След като попълните формата, натиснете \'Продължете\'.', //cpg1.3.0
  'reg_instr_6' => 'Декомпресирано ZIP качване:', //cpg1.3.0
  'reg_instr_7' => 'Качване на файлове:', //cpg1.3.0
  'reg_instr_8' => 'Качване от URI/URL:', //cpg1.3.0
  'error_report' => 'Съобщение за грешка', //cpg1.3.0
  'error_instr' => 'Следните качвания се сблъскаха с грешка:', //cpg1.3.0
  'file_name_url' => 'Име на файл/URL', //cpg1.3.0
  'error_message' => 'Съобщение за грешка', //cpg1.3.0
  'no_post' => 'Файлът не бе качен чрез POST.', //cpg1.3.0
  'forb_ext' => 'Забранено файлово разширение.', //cpg1.3.0
  'exc_php_ini' => 'Надвишен размер на файла позволен в php.ini.', //cpg1.3.0
  'exc_file_size' => 'Надвишен размер на файла позволен от CPG.', //cpg1.3.0
  'partial_upload' => 'Само частично качване.', //cpg1.3.0
  'no_upload' => 'Качване не се състоя.', //cpg1.3.0
  'unknown_code' => 'Неизвестна PHP грешка при качване.', //cpg1.3.0
  'no_temp_name' => 'No upload - No temp name.', //cpg1.3.0
  'no_file_size' => 'Не съдържа данни/Дефектен', //cpg1.3.0
  'impossible' => 'Не може да бъде преместен.', //cpg1.3.0
  'not_image' => 'Не е образ/дефектен', //cpg1.3.0
  'not_GD' => 'Не е GD разширение.', //cpg1.3.0
  'pixel_allowance' => 'Надвишен максимума от разрешени пиксели.', //cpg1.3.0
  'incorrect_prefix' => 'Невалидна URI/URL представка', //cpg1.3.0
  'could_not_open_URI' => 'Не може да бъде отворен URI.', //cpg1.3.0
  'unsafe_URI' => 'Не може да бъде проверена безопасносттаSafety not verifiable.', //cpg1.3.0
  'meta_data_failure' => 'Повредени Мета-данни', //cpg1.3.0
  'http_401' => '401 Неупълномощен', //cpg1.3.0
  'http_402' => '402 Изисква плащане', //cpg1.3.0
  'http_403' => '403 Забранен', //cpg1.3.0
  'http_404' => '404 Не намерен', //cpg1.3.0
  'http_500' => '500 Вътрешна Сървърна Грешка', //cpg1.3.0
  'http_503' => '503 Недостъпна Услуга', //cpg1.3.0
  'MIME_extraction_failure' => 'Неустановимо MIME.', //cpg1.3.0
  'MIME_type_unknown' => 'Непознат MIME вид', //cpg1.3.0
  'cant_create_write' => 'Не може да се създаде файл за писане.', //cpg1.3.0
  'not_writable' => 'Не може да пише във файла за писане.', //cpg1.3.0
  'cant_read_URI' => 'Не може да бъде прочетен URI/URL', //cpg1.3.0
  'cant_open_write_file' => 'Не може да отвори URI-файла за писане.', //cpg1.3.0
  'cant_write_write_file' => 'Не може да пише във URI-файла за писане.', //cpg1.3.0
  'cant_unzip' => 'Не може да бъде разархивиран zip файла.', //cpg1.3.0
  'unknown' => 'Неизвестна грешка', //cpg1.3.0
  'succ' => 'Успешни качвания', //cpg1.3.0
  'success' => '%s качвания бяха успешни.', //cpg1.3.0
  'add' => 'Натиснте моля \'Продължете\' за да добавите файловете към албумите.', //cpg1.3.0
  'failure' => 'Грешка при качване', //cpg1.3.0
  'f_info' => 'Информация за файла', //cpg1.3.0
  'no_place' => 'Предишният файл не може да бъде поставен.', //cpg1.3.0
  'yes_place' => 'Предишният файл беше поставен успешно.', //cpg1.3.0
  'max_fsize' => 'Максимумът позволен за големина на файле е %s KB',
  'album' => 'Албум',
  'picture' => 'Файл', //cpg1.3.0
  'pic_title' => 'Заглавие', //cpg1.3.0
  'description' => 'Описание на файла', //cpg1.3.0
  'keywords' => 'Ключови думи (отделени с интервали)',
  'keywords_sel' =>'Подберете ключови думи', //cpg1.4
  'err_no_alb_uploadables' => 'Съжаляваме, но няма албуми в които да ви е позволено да качвате файлове', //cpg1.3.0
  'place_instr_1' => 'Моля поставете файловете в албуми. Също така може да дадете и подходяща информация за всеки един от тях.', //cpg1.3.0
  'place_instr_2' => 'Още файлове трябва да бъдат поставени. Моля натиснете \'Продължете\'.', //cpg1.3.0
  'process_complete' => 'Успешно поставихте всички файлове.', //cpg1.3.0
  'albums_no_category' => 'Албум без категория', //cpg1.4. //album pulldown mod, added by frogfoot
  'personal_albums' => '* Лични албуми', //cpg1.4 //album pulldown mod, added by frogfoot
  'select_album' => 'Избери албум', //cpg1.4 //album pulldown mod, added by frogfoot
  'close' => 'Затвори', //cpg1.4
  'no_keywords' => 'Съжалявам, ключовите думи не са открити!', //cpg1.4
  'regenerate_dictionary' => 'Възстанови речника', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
  'memberlist' => 'Членски списък', //cpg1.4
  'user_manager' => 'Мениджър на потребители', //cpg1.4
  'title' => 'Управление на потребители',
  'name_a' => 'По име възходящо',
  'name_d' => 'По име низходящо',
  'group_a' => 'По група възходящо',
  'group_d' => 'По група низходящо',
  'reg_a' => 'По дата на регистрация възходящо',
  'reg_d' => 'По дата на регистрация низходящо',
  'pic_a' => 'По брой файлове възходящо',
  'pic_d' => 'По брой файлове низходящо',
  'disku_a' => 'По използване на диска възходящо',
  'disku_d' => 'По използване на диска низходящо',
  'lv_a' => 'По последно посещение възходящо', //cpg1.3.0
  'lv_d' => 'По последно посещение низходящо', //cpg1.3.0
  'sort_by' => 'Сортиране на потребителите по',
  'err_no_users' => 'Таблицата с потребители е празна !',
  'err_edit_self' => 'Не можете да редактирате собствения си профил, вместо това използвайте линка \'Профил\'',
  'edit' => 'РЕДАКЦИЯ',
  'with_selected' => 'С избраните:', //cpg1.4
  'delete' => 'ИЗТРИЙ',
  'delete_files_no' => 'запази общодостъпни файлове (но анонимни)', //cpg1.4
  'delete_files_yes' => 'изтрий също и общодостъпни файлове', //cpg1.4
  'delete_comments_no' => 'запази коментари (но анонимни)', //cpg1.4
  'delete_comments_yes' => 'изтрий също и коментари', //cpg1.4
  'activate' => 'Активирай', //cpg1.4
  'deactivate' => 'Дезактивирай', //cpg1.4
  'reset_password' => 'Смени парола', //cpg1.4
  'change_primary_membergroup' => 'Смени основна членска група', //cpg1.4
  'add_secondary_membergroup' => 'Добави вторична членска група', //cpg1.4
  'name' => 'Потребителско име',
  'group' => 'Група',
  'inactive' => 'Неактивен',
  'operations' => 'Операции',
  'pictures' => 'Файлове', //cpg1.3.0
  'disk_space_used' => 'Използвано пространство', //cpg1.4
  'disk_space_quota' => 'Използвана квота', //cpg1.4
  'registered_on' => 'Регистриран на',
  'last_visit' => 'Последно посещение', //cpg1.3.0
  'u_user_on_p_pages' => '%d потребители на %d страници',
  'confirm_del' => 'Сигурни ли сте че искате да ИЗТРИЕТЕ този потребител ? \\nВсички негови файлове и албуми ще бъдат изтрити.', //js-alert //cpg1.3.0
  'mail' => 'ПОЩА',
  'err_unknown_user' => 'Избраният потребител не съществува !',
  'modify_user' => 'Промяна на потребител',
  'notes' => 'Бележки',
  'note_list' => '<li>Ако не искате да променяте сегашната парола, оставете полето с "парола" празно',
  'password' => 'Парола',
  'user_active' => 'Потребителят е активен',
  'user_group' => 'Потребителска група',
  'user_email' => 'Потребителски email',
  'user_web_site' => 'Потребителски уеб сайт',
  'create_new_user' => 'Създаване на нов потребител',
  'user_location' => 'Потребителско местонахождение',
  'user_interests' => 'Потребителски интереси',
  'user_occupation' => 'Потребителска професия',
  'user_profile1' => '$user_profile1', //cpg1.4
  'user_profile2' => '$user_profile2', //cpg1.4
  'user_profile3' => '$user_profile3', //cpg1.4
  'user_profile4' => '$user_profile4', //cpg1.4
  'user_profile5' => '$user_profile5', //cpg1.4
  'user_profile6' => '$user_profile6', //cpg1.4
  'latest_upload' => 'Скорошно качени файлове', //cpg1.3.0
  'never' => 'никога', //cpg1.3.0
  'search' => 'Търси потребител', //cpg1.4
  'submit' => 'Приложи', //cpg1.4
  'search_submit' => 'Давай!', //cpg1.4
  'search_result' => 'Търси в резултата за: ', //cpg1.4
  'alert_no_selection' => 'Първо изберете поне един потребител!', //cpg1.4 //js-alert
  'password' => 'парола', //cpg1.4
  'select_group' => 'Избери група', //cpg1.4
  'groups_alb_access' => 'Албумни разрешения за група', //cpg1.4
  'album' => 'Албум', //cpg1.4
  'category' => 'Категория', //cpg1.4
  'modify' => 'Промяна?', //cpg1.4
  'group_no_access' => 'Тази група е без специален достъп', //cpg1.4
  'notice' => 'Забележка', //cpg1.4
  'group_can_access' => 'Албум(и) с достъп само от "%s"', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //

if (defined('UTIL_PHP')) {
$lang_util_desc_php = array(
'Променя заглавията от имената на файловете', //cpg1.4
'Изтрива заглавия', //cpg1.4
'Пресъздава умалените картинки и променя размерите на снимките', //cpg1.4
'Изтрива първоначалните снимки и ги замества със снимки с променените размери', //cpg1.4
'Изтрива първоначалните или междинните снимки, за да освободи място', //cpg1.4
'Изтрива коментарите останали без собственик (осиротяли)', //cpg1.4
'Препрочите файлова големина и размери (ако редактирате ръчно изображения)', //cpg1.4
'Нулиране на брояча за разглежданията', //cpg1.4
'Извежда php-инфо', //cpg1.4
'Обновява базата данни', //cpg1.4
'Извежда файловете със записи', //cpg1.4
);
$lang_util_php = array(
  'title' => 'Администраторски средства (Промяна на размерите на образи)', //cpg1.3.0
  'what_it_does' => 'Какво прави',
  'file' => 'Файл',
  'problem' => 'Проблем', //cpg1.4
  'status' => 'Състояние', //cpg1.4
  'title_set_to' => 'заглавие сменено на',
  'submit_form' => 'прати',
  'updated_succesfully' => 'актуализирани успешно',
  'error_create' => 'ГРЕШКА при създаване',
  'continue' => 'Обработване на повече образи',
  'main_success' => 'Файлът %s бе успешно използван като главен файл', //cpg1.3.0
  'error_rename' => 'Грешка при преименуването от %s в %s',
  'error_not_found' => 'Файлът %s не бе открит',
  'back' => 'обратно в главната страница',
  'thumbs_wait' => 'Актуализация на умалени картинки и/или образи с променени размери, моля изчакайте...',
  'thumbs_continue_wait' => 'Продължават да се актуализират умалени картинки и/или образи с променени размери...',
  'titles_wait' => 'Актуализация на файлове, моля изчакайте...',
  'delete_wait' => 'Триене на заглавия, моля изчакайте...',
  'replace_wait' => 'Триене на оригинали и заместването им с образи с променени размери, моля изчакайте...',
  'instruction' => 'Бързи инструкции',
  'instruction_action' => 'Изберете действие',
  'instruction_parameter' => 'Нагласете параметрите',
  'instruction_album' => 'Изберете албум',
  'instruction_press' => 'Натиснете %s',
  'update' => 'Актуализация на умалени картинки и/или снимки с променени размери',
  'update_what' => 'Какво трябва да бъде актуализирано',
  'update_thumb' => 'Само умалените картинки',
  'update_pic' => 'Само картините с променени размери',
  'update_both' => 'И умалените картинки и картините с променени размери',
  'update_number' => 'Брой обработвани образи при натискане',
  'update_option' => '(Опитайте да сложите по-ниски стойности на тази опция ако получавате проблеми с грешка от типа "Тimeout" )',
  'filename_title' => 'Име на файл &rArr; Заглавие на файл', //cpg1.3.0
  'filename_how' => 'Как да бъде променено името на файла',
  'filename_remove' => 'Премахване на .jpg разширението и замяна на _ (долна черта) с интервали',
  'filename_euro' => 'От 2003_11_23_13_20_20.jpg в 23/11/2003 13:20',
  'filename_us' => 'От 2003_11_23_13_20_20.jpg в 11/23/2003 13:20',
  'filename_time' => 'От 2003_11_23_13_20_20.jpg в 13:20',
  'delete' => 'Изтриване на заглавията на файлове или снимките с първоначалния размер', //cpg1.3.0
  'delete_title' => 'Изтриване на заглавията на файлове', //cpg1.3.0
  'delete_title_explanation' => 'Това ще премахне всички заглавия в упоменатия от Вас албум.', //cpg1.4
  'delete_original' => 'Изтриване на снимките с първоначалния размер',
  'delete_original_explanation' => 'Това ще премахне пълноформатните снимки.', //cpg1.4
  'delete_intermediate' => 'Изтрива междинните снимки', //cpg1.4
  'delete_intermediate_explanation' => 'Това ще премахне междинните снимки.<br />Ползвайте това за освобождаване на дисково пространство ако сте забранили \'Създай междинни изображения\' в конфигурацията след добави снимки.', //cpg1.4
  'delete_replace' => 'Изтриване на снимките с първоначалния размер и замяната им с версия с променени размери',
  'titles_deleted' => 'Всички заглавия в упоменатия албум са премахнати', //cpg1.4
  'deleting_intermediates' => 'Изтриване на междинни изображения, моля изчакайте...', //cpg1.4
  'searching_orphans' => 'Търсене на "осиротяли", моля изчакайте...', //cpg1.4
  'select_album' => 'Избор на албум',
  'delete_orphans' => 'Изтриване на "осиротяли" коментари (действа върху всички албуми)', //cpg1.3.0
  'delete_orphans_explanation' => 'Установява и Ви позволява да изтриете коментари свързани с отдавна несъществуващи файлове.<br />Проверява всички албуми.', //cpg1.4
  'refresh_db' => 'Презарежда големините и размерите на файловете', //cpg1.4
  'refresh_db_explanation' => 'Препрочите файловите размери и големина. Ползвайте го при некоректна квота или след ръчна промяна на файловете.', //cpg1.4
  'reset_views' => 'Нулира броячите за разглеждане', //cpg1.4
  'reset_views_explanation' => 'Нулира броячите за разглеждане на указан албум.', //cpg1.4
  'orphan_comment' => 'осиротял коментар бе открит', //cpg1.3.0
  'delete' => 'Изтриване', //cpg1.3.0
  'delete_all' => 'Изтриване на всички', //cpg1.3.0
  'delete_all_orphans' => 'Да изтрия всички "сираци"?', //cpg1.4
  'comment' => 'Коментар: ', //cpg1.3.0
  'nonexist' => 'прикачен към несъществуващ файл # ', //cpg1.3.0
  'phpinfo' => 'Показване на php-инфо', //cpg1.3.0
  'phpinfo_explanation' => 'Съдържа техническа информация относно Вашия сървър.<br /> - Може да Ви бъде поискана при заявка към поддръжката.', //cpg1.4
  'update_db' => 'Актуализация на базата данни', //cpg1.3.0
  'update_db_explanation' => 'Ако се подменили файловете на coppermine, или сте направили модификация или сте извършили ъпгрейд от предишна версия на coppermine, непременно извършете еднократна актуализация на базата данни. Това ще създаде необходимите таблици и/или конфигурационни стойности в базата ви данни.', //cpg1.3.0
  'view_log' => 'Разгледай записи', //cpg1.4
  'view_log_explanation' => 'Coppermine може да следи различни действия на потребителите. Можете да разглеждате записите ако сте позволили записването в <a href="admin.php">coppermine конфигурация</a>.', //cpg1.4
  'versioncheck' => 'Провери версията', //cpg1.4
  'versioncheck_explanation' => 'Проверява версията на файловете които сте променили след извършено подобрение или ако началните файлове са били актуализирани от ново издание на пакета.', //cpg1.4
  'bridgemanager' => 'Мостов Менажер', //cpg1.4
  'bridgemanager_explanation' => 'Позволява/Забранява интегрирането на Coppermine с друго приложение (напр. вашия BBS).', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File versioncheck.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('VERSIONCHECK_PHP')) $lang_versioncheck_php = array(
  'title' => 'Versioncheck', //cpg1.4
  'what_it_does' => 'This page is meant for users who have updated their coppermine install. This script goes through the files on your webserver and tries to determine if your local file versions on the webserver are the same as the ones from the repository at http://coppermine.sourceforge.net, this way displaying the files you were meant to update as well.<br />It will show everything in red that needs to be fixed. Entries in yellow need looking into. Entries in green (or your default font color) are OK.<br />Click on the help icons to find out more.', //cpg1.4
  'online_repository_unable' => 'Unable to connect to online repository', //cpg1.4
  'online_repository_noconnect' => 'Coppermine was unable to connect to the online repository. This can have two reasons:', //cpg1.4
  'online_repository_reason1' => 'the coppermine online repository is currently down - check if you can browse this page: %s - if you can\'t access this page, try again later.', //cpg1.4
  'online_repository_reason2' => 'PHP on your webserver is configured with %s turned off (by default, it\'s turned on). If the server is yours to administer, turn this option on in <i>php.ini</i> (at least allow it to be overridden with %s). If you\'re webhosted, you will probably have to live with the fact that you can\'t compare your files to the online repository. This page will then only display the file versions that came with your distribution - updates will not be displayed.', //cpg1.4
  'online_repository_skipped' => 'Connection to online repository skipped', //cpg1.4
  'online_repository_to_local' => 'The script is defaulting to the local copy of the version-files now. The data may be inacurate if you have upgraded Coppermine and you haven\'t uploaded all files. Changes to the files after the release won\'t be taken into account as well.', //cpg1.4
  'local_repository_unable' => 'Unable to connect to the repository on your server', //cpg1.4
  'local_repository_explanation' => 'Coppermine was unable to connect to the repository file %s on your webserver. This probably means that you haven\'t uploaded the repository file to your webserver. Do so now and then try to run this page once more (hit refresh).<br />If the script still fails, your webhost might have disabled parts of <a href="http://www.php.net/manual/en/ref.filesystem.php">PHP\'s filesystem functions</a> completely. In this case, you simply won\'t be able to use this tool at all, sorry.', //cpg1.4
  'coppermine_version_header' => 'Installed Coppermine version', //cpg1.4
  'coppermine_version_info' => 'You have currently installed: %s', //cpg1.4
  'coppermine_version_explanation' => 'If you think this is entirely wrong and you\'re supposed to be running a higher version of Coppermine, you probably haven\'t uploaded the most recent version of the file <i>include/init.inc.php</i>', //cpg1.4
  'version_comparison' => 'Version comparison', //cpg1.4
  'folder_file' => 'folder/file', //cpg1.4
  'coppermine_version' => 'cpg version', //cpg1.4
  'file_version' => 'file version', //cpg1.4
  'webcvs' => 'web cvs', //cpg1.4
  'writable' => 'writable', //cpg1.4
  'not_writable' => 'not writable', //cpg1.4
  'help' => 'Help', //cpg1.4
  'help_file_not_exist_optional1' => 'file/folder does not exist', //cpg1.4
  'help_file_not_exist_optional2' => 'The file/folder %s has not been found on your server. Although it is optional you should upload it (using your FTP client) to your webserver if you are experiencing problems.', //cpg1.4
  'help_file_not_exist_mandatory1' => 'file/folder does not exist', //cpg1.4
  'help_file_not_exist_mandatory2' => 'The file/folder %s has not been found on your server, although it is mandatory. Upload the file to your webserver (using your FTP client).', //cpg1.4
  'help_no_local_version1' => 'No local file version', //cpg1.4
  'help_no_local_version2' => 'The script was unable to extract a local file version - your file is either outdated or you have modified it, removing the header information on the way. Updating the file is recommended.', //cpg1.4
  'help_local_version_outdated1' => 'Local version outdated', //cpg1.4
  'help_local_version_outdated2' => 'Your version of this file seems to be from an older version of Coppermine (you probably upgraded). Make sure to update this file as well.', //cpg1.4
  'help_local_version_na1' => 'Unable to extract cvs version info', //cpg1.4
  'help_local_version_na2' => 'The script could not determine what cvs version the file on your webserver is. You should upload the file from your package.', //cpg1.4
  'help_local_version_dev1' => 'Development version', //cpg1.4
  'help_local_version_dev2' => 'The file on your webserver seems to be newer than your Coppermine version. You are either using a development file (you should only do so if you know what you are doing), or you have upgraded your Coppermine install and not uploaded include/init.inc.php', //cpg1.4
  'help_not_writable1' => 'Folder not writable', //cpg1.4
  'help_not_writable2' => 'Change file permissions (CHMOD) to grant the script write access to the folder %s and everything within it.', //cpg1.4
  'help_writable1' => 'Folder writable', //cpg1.4
  'help_writable2' => 'The folder %s is writable. This is an unnecessary risk, coppermine only needs read/execute access.', //cpg1.4
  'help_writable_undetermined' => 'Coppermine was not able to determine wether the folder is writable.', //cpg1.4
  'your_file' => 'your file', //cpg1.4
  'reference_file' => 'reference file', //cpg1.4
  'summary' => 'Summary', //cpg1.4
  'total' => 'Total files/folders checked', //cpg1.4
  'mandatory_files_missing' => 'Mandatory files missing', //cpg1.4
  'optional_files_missing' => 'Optional files missing', //cpg1.4
  'files_from_older_version' => 'Files left over from outdated Coppermine version', //cpg1.4
  'file_version_outdated' => 'Outdated file versions', //cpg1.4
  'error_no_data' => 'The script made a boo, it was not able to retrieve any information. Sorry for the inconvenience.', //cpg1.4
  'go_to_webcvs' => 'go to %s', //cpg1.4
  'options' => 'Options', //cpg1.4
  'show_optional_files' => 'show optional folders/files', //cpg1.4
  'show_mandatory_files' => 'show mandatory files', //cpg1.4
  'show_file_versions' => 'show file versions', //cpg1.4
  'show_errors_only' => 'show folders/files with errors only', //cpg1.4
  'show_permissions' => 'show folder permissions', //cpg1.4
  'show_condensed_output' => 'show condensed ouput (for easier screenshots)', //cpg1.4
  'coppermine_in_webroot' => 'coppermine is installed in the webroot', //cpg1.4
  'connect_online_repository' => 'try connecting to the online repository', //cpg1.4
  'show_additional_information' => 'show additional information', //cpg1.4
  'no_webcvs_link' => 'don\'t display web cvs link', //cpg1.4
  'stable_webcvs_link' => 'display web cvs link to stable branch', //cpg1.4
  'devel_webcvs_link' => 'display web cvs link to devel branch', //cpg1.4
  'submit' => 'apply changes / refresh', //cpg1.4
  'reset_to_defaults' => 'reset to default values', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File view_log.php  //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('VIEWLOG_PHP')) $lang_viewlog_php = array(
  'delete_all' => 'Изтрий всички записи', //cpg1.4
  'delete_this' => 'Изтрий този запис', //cpg1.4
  'view_logs' => 'Разгледай записите', //cpg1.4
  'no_logs' => 'Няма създадени записи.', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File xp_publish.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('XP_PUBLISH_PHP')) {

$lang_xp_publish_client = <<<EOT
<h1>XP Web Publishing Wizard Client</h1><p>Този модул Ви позволява да изпозвате<b>Windows XP</b> web publishing wizard с Coppermine.</p><p>Кода е базиран на статия публикувана от
EOT;

$lang_xp_publish_required = <<<EOT
<h2>Какво се изисква</h2><ul><li>Windows XP, за да имате wizard.</li><li>Работаща инсталация на Coppermine, където <b>уеб качването работи правилно.</b></li></ul><h2>Каква е инсталацията откъм клиента</h2><ul><li>Дясно кликване върху
EOT;

$lang_xp_publish_select = <<<EOT
Изберете &quot;save target as..&quot;. Съхранете файла на диска си. Докато съхранявате, проверете дали предложеното име е <b>cpg_###.reg</b> (където ### представлява цифров израз на часа). Ако е необходимо го променете (оставете цифрите). Когато е свален, кликнете двойно върху файла, за да регистрира сървъра Ви в web publishing wizard-а.</li></ul>
EOT;

$lang_xp_publish_testing = <<<EOT
<h2>Testing</h2><ul><li>В Windows Explorer, изберете няколко файла и кликнете на <b>Publish xxx on the web</b> в левия панел.</li><li>Потвърдете избора си. Кликнете на <b>Next</b>.</li><li>В списъка с услуги, който ще се появи, изберете този за вашата фото галерия (той е с нейното име). Ако не се появат услуги, проверете дали <b>cpg_pub_wizard.reg</b> е инсталиран по гореописания начин.</li><li>Ако е необходимо въведете информация за Вход.</li><li>Изберете Албум за снимките си или създайте нов.</li><li>Кликнете на <b>next</b>. Качването на снимките Ви започна.</li><li>Когато приключи, проверете галерията, за да видите дали снимките са добавени правилно.</li></ul>
EOT;

$lang_xp_publish_notes = <<<EOT
<h2>Забележки :</h2><ul><li>При започнало качване, wizard-а не може да извежда съобщения за грешки върнати от скрипта, така че Вие не можете да знаете дали качването е успешно докато не проверите галерията си.</li><li>Ако качването се провали, позволете &quot;Debug режим&quot; в конфигурациите на Coppermine, пробвайте с една снимка и проверете съобщенията за грешки в
EOT;

$lang_xp_publish_flood = <<<EOT
файл намиращ се в Coppermine папката на Вашия сървър.</li><li>За да избегнете <i>заливането</i> на галерията от снимки качвани чрез wizard-а, самоe <b>администраторите</b> и <b>потребители със собствени албуми</b> могат да ползват тази функционалност.</li>
EOT;



$lang_xp_publish_php = array(
  'title' => 'Coppermine - XP Web Publishing Wizard', //cpg1.4
  'welcome' => 'Добре Дошли <b>%s</b>,', //cpg1.4
  'need_login' => 'Трябва да Влезнете в галерията през уеб-браузера си преди да ползвате wizard-а.<p/><p>Когато влезнете не забравяйте да изберете <b>запомни ме</b>, освен ако вече не сте го направили.', //cpg1.4
  'no_alb' => 'Съжалявам, но няма албум където Ви е позволено да качвате снимки с този wizard.', //cpg1.4
  'upload' => 'Качване на снимките в съществуващ албум', //cpg1.4
  'create_new' => 'Създаване на нов албум за Вашите снимки', //cpg1.4
  'album' => 'Албум', //cpg1.4
  'category' => 'Категория', //cpg1.4
  'new_alb_created' => 'Вашия нов албум &quot;<b>%s</b>&quot; беше създаден.', //cpg1.4
  'continue' => 'Натиснете &quot;Next&quot; за започване на качването на Вашите снимки', //cpg1.4
  'link' => 'тази връзка', //cpg1.4
);
}
?>
