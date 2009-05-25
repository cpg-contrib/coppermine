<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2009 Coppermine Dev Team
  v1.1 originally written by Gregory DEMAR

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 3
  as published by the Free Software Foundation.
  
  ********************************************
  Coppermine version: 1.4.24
  $HeadURL$
  $Revision$
  $Author$
  $Date$
  ********************************************
  This translation is made for the Coppermine version 1.4.x
  It is based on the old translation by Kostya Jakovchuk

  In the memory of Marko Kyshchun, who taught me to fight even if there is no hope. - MR
**********************************************/

if (!defined('IN_COPPERMINE')) { die('Not in Coppermine...');}

// info about translators and translated language
$lang_translation_info = array(
  'lang_name_english' => 'Ukrainian', //cpg1.4
  'lang_name_native' => 'Українська', //cpg1.4
  'lang_country_code' => 'ua', //cpg1.4
  'trans_name'=> 'Maryan Rachynskyy',
  'trans_email' => 'mrach@users.sourceforge.net',
  'trans_website' => '',
  'trans_date' => '2005-12-20',
);

$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('Байт', 'KB', 'MB');

// Day of weeks and months
$lang_day_of_week = array('Неділя', 'Понеділок', 'Вівторок', 'Середа', 'Четвер', 'П`ятниця', 'Субота');
$lang_month = array('Січ', 'Лют', 'Бер', 'Квіт', 'Трав', 'Черв', 'Лип', 'Серп', 'Вер', 'Жовт', 'Лист', 'Груд');

// Some common strings
$lang_yes = 'Так';
$lang_no  = 'Ні';
$lang_back = 'Назад';
$lang_continue = 'Вперед';
$lang_info = 'Інформація';
$lang_error = 'Помилка';
$lang_check_uncheck_all = 'виділити все/зняти виділення'; //cpg1.4

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$album_date_fmt =    '%d %B %Yр.';
$lastcom_date_fmt =  '%d %B %Yр. о %H:%M';
$lastup_date_fmt = '%d.%m.%Yр.';
$register_date_fmt = '%d %B %Yр.';
$lasthit_date_fmt = '%d %B %Yр. о %I:%M';
$comment_date_fmt =  '%d %B %Yр. о %H:%M';
$log_date_fmt = '%d %B %Yр. о %H:%M'; //cpg1.4

// For the word censor
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*');

$lang_meta_album_names = array(
  'random' => 'Випадкові фото',
  'lastup' => 'Останні долучення',
  'lastalb'=> 'Останнє поновлення альбому',
  'lastcom' => 'Останні коментарі',
  'topn' => 'Популярні',
  'toprated' => 'Кращі за рейтингом',
  'lasthits' => 'Останні переглянуті',
  'search' => 'Результати пошуку',
  'favpics'=> 'Вибрані',  //cpg1.4
);

$lang_errors = array(
  'access_denied' => 'Ви маєте недостатньо повноважень для перегляду цієї сторінки.',
  'perm_denied' => 'Ви маєте недостатньо повноважень для виконання цієї дії.',
  'param_missing' => 'Скрипт викликано без потрібних параметрів.',
  'non_exist_ap' => 'Обраний Вами альбом/фото не існує!',
  'quota_exceeded' => 'Розмір дискового простору перевищено.<br /><br />Для Вас дисковий простір становить [quota]Kб. Ваші фото займають [space]Kб. Долучення цього фото перевищить припустиму межу.',
  'gd_file_type_err' => 'Якщо використовується бібліотека GD - дозволені формати зображень тільки JPEG та PNG.',
  'invalid_image' => 'Завантажене фото зіпсоване, або не може бути опрацьоване бібліотекою GD',
  'resize_failed' => 'Неможливо створити слайд або зменшити розмір фото.',
  'no_img_to_display' => 'Нема фото',
  'non_exist_cat' => 'Вибрана категорія не існує',
  'orphan_cat' => 'Категорія не має категорії вищого рівня. Запустіть Керування категоріями для виправлення ситуації.',
  'directory_ro' => 'Тека \'%s\' тільки для перегляду, фото неможливо видалити',
  'non_exist_comment' => 'Вибраний коментар не існує.',
  'pic_in_invalid_album' => 'Фото з альбому, що не існує (%s)!?',
  'banned' => 'Вам сюди не дозволено заходити.',
  'not_with_udb' => 'Цю функцію вимкнено в Coppermine, оскільки вона є приєднана до форуму. Або те, що Ви намагаєтеся виконати, на підтримується конфігурацією, або вам треба зробити це зі сторони програми форуму.',
  'offline_title' => 'Вимкнено',
  'offline_text' => 'На даний момент галерею вимкнено - спробуйте зайти пізніше',
  'ecards_empty' => 'Нема листівок.',
  'action_failed' => 'Сталася помилка.  Галерея не може виконати ваш запит.',
  'no_zip' => 'Нема бібліотек для опрацювання ZIP файлів.  Будь ласка зв`яжіться з адміністратором галереї.',
  'zip_type' => 'Ви не маєте достатньо прав для закачування ZIP файлів.',
  'database_query' => 'Сталася помилка при звертанні до бази даних', //cpg1.4
  'register_globals_on' => 'The PHP setting register_globals is enabled on your server, which is a bad idea in terms of security. It\'s strongly recommended to turn it off. [<a href="http://forum.coppermine-gallery.net/index.php/topic,59569.0.html" rel="external" class="external">more</a>]',
);

$lang_bbcode_help_title = 'Допомога у bbcode'; //cpg1.4
$lang_bbcode_help = 'Ви можете додати посилання і сяке-таке форматування до цього поля використовуючи теги bbcode: <li>[b]Bold[/b] =&gt; <b>Bold</b></li><li>[i]Italic[/i] =&gt; <i>Italic</i></li><li>[url=http://yoursite.com/]Url Text[/url] =&gt; <a href="http://yoursite.com">Url Text</a></li><li>[email]user@domain.com[/email] =&gt; <a href="mailto:user@domain.com">user@domain.com</a></li><li>[color=red]some text[/color] =&gt; <span style="color:red">some text</span></li><li>[img]http://coppermine-gallery.net/demo/cpg14x/images/red.gif[/img] => <img src="../images/red.gif" border="0" alt="" /></li>'; //cpg1.4

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
  'home_title' => 'На головну сторінку',
  'home_lnk' => 'Головна',
  'alb_list_title' => 'До списка альбомів',
  'alb_list_lnk' => 'Список альбомів',
  'my_gal_title' => 'До персональної галереї',
  'my_gal_lnk' => 'Моя галерея',
  'my_prof_title' => 'До мого профілю', //cpg1.4
  'my_prof_lnk' => 'Профіль',
  'adm_mode_title' => 'Перейти в режим адміністратора',
  'adm_mode_lnk' => 'Режим адміністратора',
  'usr_mode_title' => 'Перейти в режим користувача',
  'usr_mode_lnk' => 'Режим користувача',
  'upload_pic_title' => 'Долучення фото до альбому',
  'upload_pic_lnk' => 'Долучити фото',
  'register_title' => 'Зареєструватися',
  'register_lnk' => 'Реєстрація',
  'login_title' => 'Ввійти', //cpg1.4
  'login_lnk' => 'Вхід',
  'logout_title' => 'Вийти', //cpg1.4
  'logout_lnk' => 'Вихід',
  'lastup_title' => 'Показати останні долучення', //cpg1.4
  'lastup_lnk' => 'Останні долучення',
  'lastcom_title' => 'Показати останні коментарі', //cpg1.4
  'lastcom_lnk' => 'Останні коментарі',
  'topn_title' => 'Показати популярні', //cpg1.4
  'topn_lnk' => 'Популярні',
  'toprated_title' => 'Показати кращі за рейтингом', //cpg1.4
  'toprated_lnk' => 'Кращі за рейтингом',
  'search_title' => 'Шукати в галереї', //cpg1.4
  'search_lnk' => 'Пошук',
  'fav_title' => 'Перейти у вибрані', //cpg1.4
  'fav_lnk' => 'Вибрані',
  'memberlist_title' => 'Показати список учасників',
  'memberlist_lnk' => 'Список учасників',
  'faq_title' => 'ЧАсті Питання про галерею &quot;Coppermine&quot;',
  'faq_lnk' => 'ЧАПи',
);

$lang_gallery_admin_menu = array(
  'upl_app_title' => 'Підтвердити нові фото', //cpg1.4
  'upl_app_lnk' => 'Підтвердження нових фото',
  'admin_title' => 'Відкрити налаштування', //cpg1.4
  'admin_lnk' => 'Налаштування', //cpg1.4
  'albums_title' => 'Перейти до налаштування альбомів', //cpg1.4
  'albums_lnk' => 'Альбоми',
  'categories_title' => 'Перейти до налаштування категорій', //cpg1.4
  'categories_lnk' => 'Категорії',
  'users_title' => 'Перейти до налаштування користувачів', //cpg1.4
  'users_lnk' => 'Користувачі',
  'groups_title' => 'Перейти до налаштування груп', //cpg1.4
  'groups_lnk' => 'Групи',
  'comments_title' => 'Переглянути всі коментарі', //cpg1.4
  'comments_lnk' => 'Коментарі',
  'searchnew_title' => 'Перейти до автодолучення', //cpg1.4
  'searchnew_lnk' => 'Автодолучення',
  'util_title' => 'Перейти до інструментів адміністратора', //cpg1.4
  'util_lnk' => 'Інструменти адміністратора',
  'key_title' => 'Перейти до словника ключових слів', //cpg1.4
  'key_lnk' => 'Словник ключових слів', //cpg1.4
  'ban_title' => 'Перейти до блокування користувачів', //cpg1.4
  'ban_lnk' => 'Блокування користувачів',
  'db_ecard_title' => 'Переглянути листівки', //cpg1.4
  'db_ecard_lnk' => 'Перегляд листівок',
  'pictures_title' => 'Сортувати власні фото', //cpg1.4
  'pictures_lnk' => 'Сортування власних фото', //cpg1.4
  'documentation_lnk' => 'Документація (Англ)', //cpg1.4
  'documentation_title' => 'Довідник Coppermine', //cpg1.4
);

$lang_user_admin_menu = array(
  'albmgr_title' => 'Створити/впорядкувати мої альбоми', //cpg1.4
  'albmgr_lnk' => 'Керування моїми альбомами',
  'modifyalb_title' => 'Корегувати мої альбоми',  //cpg1.4
  'modifyalb_lnk' => 'Корегування моїх альбомів',
  'my_prof_title' => 'Перехід до мого профілю', //cpg1.4
  'my_prof_lnk' => 'Профіль',
);

$lang_cat_list = array(
  'category' => 'Категорія',
  'albums' => 'Альбомів',
  'pictures' => 'Фото',
);

$lang_album_list = array(
  'album_on_page' => '%d альбомів на %d сторінках',
);

$lang_thumb_view = array(
  'date' => 'Дата',
  //Sort by filename and title
  'name' => 'Ім`я файла',
  'title' => 'Назва',
  'sort_da' => 'Сорт. за датою [зростання]',
  'sort_dd' => 'Сорт. за датою [спадання]',
  'sort_na' => 'Сорт. за іменем файла [зростання]',
  'sort_nd' => 'Сорт. за іменем файла [спадання]',
  'sort_ta' => 'Сорт. за назвою [зростання]',
  'sort_td' => 'Сорт. за назвою [спадання]',
  'position' => 'Пор. номер', //cpg1.4
  'sort_pa' => 'Сорт. за пор. номером [зростання]', //cpg1.4
  'sort_pd' => 'Сорт. за пор. [спадання]', //cpg1.4
  'download_zip' => 'Викачати як файл Zip',
  'pic_on_page' => '%d фото на %d сторінці(ах)',
  'user_on_page' => '%d користувачів на %d сторінці(ах)',
  'enter_alb_pass' => 'Введіть пароль для альбому', //cpg1.4
  'invalid_pass' => 'Невірний пароль', //cpg1.4
  'pass' => 'Пароль', //cpg1.4
  'submit' => 'Послати', //cpg1.4
);

$lang_img_nav_bar = array(
  'thumb_title' => 'Повернутись на сторінку зі слайдами',
  'pic_info_title' => 'Показати/заховати інформацію про фото',
  'slideshow_title' => 'Слайд-шоу',
  'ecard_title' => 'Надіслати це фото як листівку',
  'ecard_disabled' => 'Листівки вимкнено',
  'ecard_disabled_msg' => 'У вас нема повноважень, щоб відсилати листівки', //js-alert
  'prev_title' => 'Попереднє фото',
  'next_title' => 'Наступне фото',
  'pic_pos' => 'Фото %s/%s',
  'report_title' => 'Повідомити про це фото адміністратору', //cpg1.4
  'go_album_end' => 'Стрибнути в кінець', //cpg1.4
  'go_album_start' => 'Повернутися на початок', //cpg1.4
  'go_back_x_items' => 'повернутися на %s фото', //cpg1.4
  'go_forward_x_items' => 'перестрибнути через %s фото', //cpg1.4
);

$lang_rate_pic = array(
  'rate_this_pic' => 'Оцінити це фото ',
  'no_votes' => '(Ще нема голосів)',
  'rating' => '(рейтинг: %s з 5 з %s голосами)',
  'rubbish' => 'Сміття',
  'poor' => 'Погано',
  'fair' => 'Може бути',
  'good' => 'Добре',
  'excellent' => 'Дуже добре',
  'great' => 'Супер',
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
  CRITICAL_ERROR => 'Критична помилка',
  'file' => 'Файл: ',
  'line' => 'Рядок: ',
);

$lang_display_thumbnails = array(
  'filename' => 'Файл=', //cpg1.4
  'filesize' => 'Розмір файлу=', //cpg1.4
  'dimensions' => 'Розміри фото=', //cpg1.4
  'date_added' => 'Дата долучення=', //cpg1.4
);

$lang_get_pic_data = array(
  'n_comments' => '%s коментарів',
  'n_views' => '%s переглядів',
  'n_votes' => '(%s голосів)',
);

$lang_cpg_debug_output = array(
  'debug_info' => 'Налагоджувальна інформація',
  'select_all' => 'Вибрати все',
  'copy_and_paste_instructions' => 'Якщо ви збираєтеся просити допомоги на форумі підтримки Coppermine, скопіюйте цю налагоджувальну інформацію у текст вашого звертання, якщо вас про це попросять, разом з текстом повідомлення про помилку, якщо є. Не забудьте замінити всі паролі з коду звертання до бази на зірочки *** перед тим, як публікувати повідомлення. <br />Зауваження: це інформаційне повідомлення - воно не означає, що з вашою галереєю щось не так.', //cpg1.4
  'phpinfo' => 'показати phpinfo',
  'notices' => 'Повідомлення', //cpg1.4
);

$lang_language_selection = array(
  'reset_language' => 'Типова мова',
  'choose_language' => 'Виберіть мову',
);

$lang_theme_selection = array(
  'reset_theme' => 'Типова тема',
  'choose_theme' => 'Виберіть тему',
);

$lang_version_alert = array(
  'version_alert' => 'Ця версія не підтримується!', //cpg1.4
  'security_alert' => 'Ризик для безпеки!', //cpg1.4.3
  'relocate_exists' => 'Видаліть файл <a href="http://coppermine-gallery.net/forum/index.php?topic=24217.0">relocate_server.php</a> з вашого сайта!',
  'no_stable_version' => 'Ви використовуєте версію Coppermine %s (%s) яка призначена лише для дуже досвічених користувачів - цю версію надано без супроводу і гарантій. Використовуйте її на свій страх і ризик або поверніться до старішої версії, яка є стабільною!', //cpg1.4
  'gallery_offline' => 'Галерея зараз є відключеною і доступна лише вам як адміну. Не забудьте включити її після завершення адміністрування.' //cpg1.4
);

$lang_create_tabs = array(
  'previous' => 'назад', //cpg1.4
  'next' => 'вперед', //cpg1.4
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
  'error_wakeup' => "Не можу запустити плагін '%s'", //cpg1.4
  'error_install' => "Не можу інсталювати плагін '%s'", //cpg1.4
  'error_uninstall' => "Не можу деінсталювати плагін '%s'", //cpg1.4
  'error_sleep' => "Не можу відключити плагін '%s'<br />", //cpg1.4
);

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
// File mode.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('MODE_PHP')) $lang_mode_php = array(
  0 => 'Вихід з режиму адміністратора...',
  1 => 'Вхід в режим адміністратора...',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
  'alb_need_name' => 'Альбом повинен мати назву !', //js-alert
  'confirm_modifs' => 'Ви дійсно бажаєте зробити ці зміни ?', //js-alert
  'no_change' => 'Ви нічого не змінили !', //js-alert
  'new_album' => 'Новий альбом',
  'confirm_delete1' => 'Ви дійсно бажаєте видалити цей альбом ?', //js-alert
  'confirm_delete2' => '\Всі його фото і коментарі зникнуть !', //js-alert
  'select_first' => 'Спочатку оберіть альбом', //js-alert
  'alb_mrg' => 'Керування альбомами',
  'my_gallery' => '* Моя галерея *',
  'no_category' => '* Немає категорії *',
  'delete' => 'Видалити',
  'new' => 'Новий',
  'apply_modifs' => 'Застосувати зміни',
  'select_category' => 'Вибрати категорію',
);

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) $lang_banning_php = array(
  'title' => 'Блокування Користувачів', //cpg1.4
  'user_name' => 'Ім\'я Користувача', //cpg1.4
  'ip_address' => 'IP Адреса', //cpg1.4
  'expiry' => 'Завершення терміну дії (пусто - без обмежень)', //cpg1.4
  'edit_ban' => 'Зберегти Зміни', //cpg1.4
  'delete_ban' => 'Видалити', //cpg1.4
  'add_new' => 'Додати нове блокування', //cpg1.4
  'add_ban' => 'Додати', //cpg1.4
  'error_user' => 'Не можу знайти користувача', //cpg1.4
  'error_specify' => 'Вам треба вказати або ім\'я користувача, або IP адресу', //cpg1.4
  'error_ban_id' => 'Неправильний ID блокування!', //cpg1.4
  'error_admin_ban' => 'Ви не можете блокувати самі себе!', //cpg1.4
  'error_server_ban' => 'Ви хочете заблокувати власний сервер? Гмм... Я не можу це зробити...', //cpg1.4
  'error_ip_forbidden' => 'Ви не можете блокувати це IP - воно все одно недосяжне (з приватної підмережі)!<br />Якщо ви хочете дозволити блокування приватних IP, вкажіть це у ваших <a href="admin.php">Налаштуваннях</a> (має сенс тільки якщо Coppermine працює в локальній мережі).', //cpg1.4
  'lookup_ip' => 'Розв\'язати IP адресу', //cpg1.4
  'submit' => 'Вперед!', //cpg1.4
  'select_date' => 'вибрати дати', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File bridgemgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('BRIDGEMGR_PHP')) $lang_bridgemgr_php = array(
  'title' => 'Майстер Інтеграції',
  'warning' => 'УВАГА: при використанні цієї програми будьте свідомими того, що конфіденційна інформація буде пересилатися за допомогою форм HTML. Запускайте її лише на власному комп`ютері (а не в публічному місці типу інтернет кафе). Крім того не забудьте вичистити кеші та тимчасові файли переглядача після того як ви закінчите роботу!',
  'back' => 'назад',
  'next' => 'вперед',
  'start_wizard' => 'Запустити майстер інтеграції',
  'finish' => 'Завершити',
  'hide_unused_fields' => 'заховати поля, що не використовуються (рекомендується)',
  'clear_unused_db_fields' => 'витерти неправильні записи в базі даних (рекомендується)',
  'custom_bridge_file' => 'назва вашого власного файлу інтеграції (якщо файл називається <i>myfile.inc.php</i>, введіть <i>myfile</i>)',
  'no_action_needed' => 'Жодних дій не виконується на цьому кроці. Просто натисніть \'далі\' для продовження.',
  'reset_to_default' => 'Відновити типове значення',
  'choose_bbs_app' => 'виберіть систему для інтегрування',
  'support_url' => 'Ідіть сюди за додатковою інформацією про цю систему',
  'settings_path' => 'шлях(и) що використовуються вашою BBS системою',
  'database_connection' => 'зв`язок з базою даних',
  'database_tables' => 'таблиці бази даних',
  'bbs_groups' => 'групи з BBS',
  'license_number' => 'Номер ліцензії',
  'license_number_explanation' => 'введіть ваш номер ліцензії (якщо є)',
  'db_database_name' => 'Назва бази даних',
  'db_database_name_explanation' => 'Введіть назву бази даних що використовує ваша BBS',
  'db_hostname' => 'Сервер БД',
  'db_hostname_explanation' => 'Назва комп`ютера, де працює ваша база mySQL, як правило &quot;localhost&quot;',
  'db_username' => 'Користувач БД',
  'db_username_explanation' => 'користувач mySQL, що використовується вашою BBS',
  'db_password' => 'Пароль користувача БД',
  'db_password_explanation' => 'Пароль користувача mySQL',
  'full_forum_url' => 'URL форуму',
  'full_forum_url_explanation' => 'Повний URL до вашої BBS (включаючи http://, напр. http://www.yourdomain.tld/forum)',
  'relative_path_of_forum_from_webroot' => 'Відносний шлях до форуму',
  'relative_path_of_forum_from_webroot_explanation' => 'Відносний шлях вашої BBS від кореня сервера тенет (Приклад: якщо ваш форум має адресу http://www.yourdomain.tld/forum/, введіть &quot;/forum/&quot;)',
  'relative_path_to_config_file' => 'Відносний шлях до конфігураційного файлу вашої BBS',
  'relative_path_to_config_file_explanation' => 'Відносний шлях до конфігураційного файлу вашої BBS, який починається з теки Coppermine (напр. &quot;../forum/&quot; якщо ваш форум є за адресою http://www.yourdomain.tld/forum/, а Coppermine - http://www.yourdomain.tld/gallery/)',
  'cookie_prefix' => 'Префікс для коржиків',
  'cookie_prefix_explanation' => 'це має бути префікс для коржиків вашого форуму',
  'table_prefix' => 'Префікс таблиць',
  'table_prefix_explanation' => 'Повинен відповідати префіксу, який було обрано при інсталяції вашого форуму.',
  'user_table' => 'Таблиця з користувачами',
  'user_table_explanation' => '(як правило, типове значення має підійти, хіба якщо ваш форум було інстальовано нестандартним чином)',
  'session_table' => 'Таблиця сесій',
  'session_table_explanation' => '(як правило, типове значення має підійти, хіба якщо ваш форум було інстальовано нестандартним чином)',
  'group_table' => 'Таблиця груп',
  'group_table_explanation' => '(як правило, типове значення має підійти, хіба якщо ваш форум було інстальовано нестандартним чином)',
  'group_relation_table' => 'Таблиця відношень груп',
  'group_relation_table_explanation' => '(як правило, типове значення має підійти, хіба якщо ваш форум було інстальовано нестандартним чином)',
  'group_mapping_table' => 'Таблиця відповідності груп',
  'group_mapping_table_explanation' => '(як правило, типове значення має підійти, хіба якщо ваш форум було інстальовано нестандартним чином)',
  'use_standard_groups' => 'Використовувати стандартні групи форуму',
  'use_standard_groups_explanation' => 'Використовувати стандартні (вбудовані) групи користувачів (рекомендується). Це скасує всі нестандартні налаштування на цій сторінці. Відключайте цю опцію тільки якщо ТОЧНО знаєте, що робите!',
  'validating_group' => 'Група до перевірки',
  'validating_group_explanation' => 'ID групи вашої BBS куди заносяться користувачі BBS, які очікують на підтвердження своєї реєстрації (як правило, типове значення має підійти, хіба якщо ваш форум було інстальовано нестандартним чином)',
  'guest_group' => 'Гостьова група',
  'guest_group_explanation' => 'ID групи вашої BBS куди заносяться гості (анонімні користувачі) (типове значення має підійти, міняйте це тільки якщо точно знаєте що робите)',
  'member_group' => 'Група учасників',
  'member_group_explanation' => 'ID групи вашої BBS до якої належать &quot;звичайні&quot; користувачі (типове значення має підійти, міняйте це тільки якщо точно знаєте що робите)',
  'admin_group' => 'Група адміністраторів',
  'admin_group_explanation' => 'ID групи вашої BBS до якої належать адміністратори (типове значення має підійти, міняйте це тільки якщо точно знаєте що робите)',
  'banned_group' => 'Блокована група',
  'banned_group_explanation' => 'ID групи вашої BBS до якої належать заблоковані користувачі (типове значення має підійти, міняйте це тільки якщо точно знаєте що робите)',
  'global_moderators_group' => 'Група глобальних модераторів',
  'global_moderators_group_explanation' => 'ID групи вашої BBS до якої належать глобальні модератори (типове значення має підійти, міняйте це тільки якщо точно знаєте що робите)',
  'special_settings' => 'Особливі налаштування',
  'logout_flag' => 'Версія phpBB (прапорець виходу)',
  'logout_flag_explanation' => 'Введіть версію вашої BBS (у залежності від версії phpBB по різному буде виконуватися вихід з системи)',
  'use_post_based_groups' => 'Використовувати групи, що базуються на кількості повідомлень?',
  'logout_flag_yes' => '2.0.5 або вище',
  'logout_flag_no' => '2.0.4 або нижче',
  'use_post_based_groups_explanation' => 'Чи повинні групи з BBS враховувати кількість постів на форумі (дозволяє дуже точне керування правами) або одноразово згенерувати групи (простіше в адмініструванні - рекомендовано). Це налаштування можна змінити потім.',
  'use_post_based_groups_yes' => 'так',
  'use_post_based_groups_no' => 'ні',
  'error_title' => 'Усуньте ці помилки перед тим як продовжити. Поверніться на попередній екран.',
  'error_specify_bbs' => 'Ви повинні вказати з якою програмою ви хочете інтегрувати Coppermine.',
  'error_no_blank_name' => 'Введіть назву власного файлу інтеграції.',
  'error_no_special_chars' => 'Назва власного файлу інтеграції не повинна містити спеціальних символів крім підкреслення (_) та мінуса (-)!',
  'error_bridge_file_not_exist' => 'Файл інтеграції %s не знайдено на сервері. Переконайтеся, що ви дійсно його туди поклали.',
  'finalize' => 'активувати/відключити інтеграцію з BBS',
  'finalize_explanation' => 'На даний момент налаштування вказані вами було збережено в базу даних, але інтеграцію з BBS не було активовано. Ви можете активовувати або відключати інтеграцію в будь-який час. Пильнуйте, щоб не забути адміністративний пароль Coppermine для автономного режиму, він вам може згодитися пізніше, коли ви захочете внести зміни у ці налаштування. Якщо щось працюватиме неправильно, перейдіть до %s та відключіть там інтеграцію з BBS, використовуючи ваш автономний адмінський доступ (без інтеграції) - як правило, цей доступ налаштовується під час інсталяції Coppermine).',
  'your_bridge_settings' => 'Налаштування вашого інтегратора',
  'title_enable' => 'Активувати інтеграцію з %s',
  'bridge_enable_yes' => 'активувати',
  'bridge_enable_no' => 'відключити',
  'error_must_not_be_empty' => 'не може бути порожнім',
  'error_either_be' => 'має бути або %s, або %s',
  'error_folder_not_exist' => '%s не існує. Виправте значення, введене для %s',
  'error_cookie_not_readible' => 'Coppermine не може прочитати коржика %s. Виправте значення, що ви ввели для %s, або запустіть панель адміністрування вашої BBS і переконайтеся що шлях до коржика доступний для читання галереєю.',
  'error_mandatory_field_empty' => 'Не залишайте поле %s порожнім - введіть правильне значення.',
  'error_no_trailing_slash' => 'Поле %s не повинно завершуватися слешами.',
  'error_trailing_slash' => 'Поле %s повинно завершуватися слешами.',
  'error_db_connect' => 'Не можу під`єднатися до mySQL використовуючи інформацію, що ви вказали. mySQL каже:',
	'error_db_name' => 'Хоча Coppermine вдалося під`єднатися до сервера, йому не вдалося знайти базу %s. Переконайтеся, що ви вказали %s правильно. mySQL каже:',
  'error_prefix_and_table' => '%s та ',
  'error_db_table' => 'Не можу знайти таблицю %s. Переконайтеся, що ви вказали %s правильно.',
  'recovery_title' => 'Майстер Інтеграції: аварійне відновлення',
  'recovery_explanation' => 'Якщо ви хочете налаштувати інтеграцію галереї з вашою BBS, вам необхідно спочатку авторизуватися як адміністратор. Якщо ви не можете авторизуватися через некоректну роботу інтегратора, ви можете відключити інтеграцію на цій же ж сторінці. Введення імені та пароля не дасть вам доступу до системи, а просто відключить інтеграцію з BBS. Перегляньте документацію якщо потребуєте детальнішої інформації.',
  'username' => 'Користувач',
  'password' => 'Пароль',
  'disable_submit' => 'submit',
  'recovery_success_title' => 'Авторизація відбулася успішно',
  'recovery_success_content' => 'Ви відключили інтеграцію з BBS. Ваша галерея Coppermine тепер працює в автономному режимі.',
  'recovery_success_advice_login' => 'Ввійдіть як адміністратор для редагування налаштувань та/або повторного ввімкнення інтеграції з BBS.',
  'goto_login' => 'Перейти на сторінку входу',
  'goto_bridgemgr' => 'Перейти до менеджера інтеграції',
  'recovery_failure_title' => 'Авторизація зазнала невдачі',
  'recovery_failure_content' => 'Ви вказали неправильні дані для входу. Вкажіть дані адміністратора автономного режиму (зазвичай, це користувач, якого було створено при встановлення Coppermine).',
  'try_again' => 'спробуйте знову',
  'recovery_wait_title' => 'Час затримки ще не закінчився',
  'recovery_wait_content' => 'З причин безпеки цей скрипт не дозволяє авторизовуватися зразу ж після невдалої спроби, зачекайте трохи часу перш, ніж пробувати знову.',
  'wait' => 'чекайте',
  'create_redir_file' => 'Створити файл перенаправлення (рекомендовано)',
  'create_redir_file_explanation' => 'Для перенаправлення користувачів назад у Coppermine після успішної авторизації вам знадобиться файл перенаправлення, який має зберігатися у теці BBS. Коли ця опція увімкнена, менеджер інтеграції спробує його створити, або просто згенерує для вас фрагмент коду, який можна буде скопіювати при створенні такого файла вручну.',
  'browse' => 'перегляд',
);

// ------------------------------------------------------------------------- //
// File calendar.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('CALENDAR_PHP')) $lang_calendar_php = array(
  'title' => 'Календар', //cpg1.4
  'close' => 'закрити', //cpg1.4
  'clear_date' => 'очистити дату', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
  'miss_param' => 'Не надано параметри, потрібні для виконання операції \'%s\'!',
  'unknown_cat' => 'Вибрана категорія не існує в базі',
  'usergal_cat_ro' => 'Категорію галерей користувачів не може бути видалено!',
  'manage_cat' => 'Керування категоріями',
  'confirm_delete' => 'Ви дійсно бажаєте видалити цю категорію?', //js-alert
  'category' => 'Категорія',
  'operations' => 'Дії',
  'move_into' => 'Перемістити до',
  'update_create' => 'Поновити/Створити категорію',
  'parent_cat' => 'Категорія вищого рівня',
  'cat_title' => 'Назва категорії',
  'cat_thumb' => 'Лого категорії',
  'cat_desc' => 'Опис категорії',
  'categories_alpha_sort' => 'Сортувати категорії за алфавітом (замість ручного режиму сортування)', //cpg1.4
  'save_cfg' => 'Зберегти налаштування', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File admin.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('ADMIN_PHP')) $lang_admin_php = array(
  'title' => 'Налаштування', //cpg1.4
  'manage_exif' => 'Керування показом exif', //cpg1.4
  'manage_plugins' => 'Керування плагінами', //cpg1.4
  'manage_keyword' => 'Керування ключовими словами', //cpg1.4
  'restore_cfg' => 'Відновити типові налаштування',
  'save_cfg' => 'Зберегти нові налаштування',
  'notes' => 'Нотатки',
  'info' => 'Інформація',
  'upd_success' => 'Налаштування було поновлено',
  'restore_success' => 'Типові налаштування відновлено',
  'name_a' => 'Ім`я [зростання]',
  'name_d' => 'Ім`я [спадання]',
  'title_a' => 'Назва [зростання]',
  'title_d' => 'Назва [спадання]',
  'date_a' => 'Дата [зростання]',
  'date_d' => 'Дата [спадання]',
  'pos_a' => 'Пор. номер [зростання]', //cpg1.4
  'pos_d' => 'Пор. номер [спадання]', //cpg1.4
  'th_any' => 'Макс. розмір',
  'th_ht' => 'Висота',
  'th_wd' => 'Ширина',
  'label' => 'мітка',
  'item' => 'елемент',
  'debug_everyone' => 'Будь-хто',
  'debug_admin' => 'Тільки адміністратор',
  'no_logs'=> 'Вимкнено', //cpg1.4
  'log_normal'=> 'Нормально', //cpg1.4
  'log_all' => 'Все', //cpg1.4
  'view_logs' => 'Подивитися журнали', //cpg1.4
  'click_expand' => 'клацніть по назві секції для розгортання', //cpg1.4
  'expand_all' => 'Розгорнути все', //cpg1.4
  'notice1' => '(*) Ці налаштування не повинні мінятися, якщо ви вже маєте файли у базі даних.', //cpg1.4 - (relocated)
  'notice2' => '(**) Після зміни цього налаштування, тільки файли, що додаються з цього моменту будуть створені згідно нових правил, тому це налаштування не рекомендується змінювати, якщо у вас вже є в базі якісь файли. Однак, ви можете перетворити існуючі файли згідно змін налаштувань, використовуючи пункт &quot;<a href="util.php">інструменти адміністратора</a> (зміна розмірів)&quot; з меню адміністратора.', //cpg1.4 - (relocated)
  'notice3' => '(***) Всі журнали ведуться англійською мовою.', //cpg1.4 - (relocated)
  'bbs_disabled' => 'Функція відключена якщо працює інтеграція з bb', //cpg1.4
  'auto_resize_everyone' => 'Всі', //cpg1.4
  'auto_resize_user' => 'Тільки користувач', //cpg1.4
  'ascending' => 'за зростанням', //cpg1.4
  'descending' => 'за спаданням', //cpg1.4
);

if (defined('ADMIN_PHP')) $lang_admin_data = array(
  'Загальні Налаштування',
  array('Назва галереї', 'gallery_name', 0, 'f=index.htm&amp;as=admin_general_name&amp;ae=admin_general_name_end'), //cpg1.4
  array('Опис галереї', 'gallery_description', 0, 'f=index.htm&amp;as=admin_general_description&amp;ae=admin_general_description_end'), //cpg1.4
  array('Email адміністратора', 'gallery_admin_email', 0, 'f=index.htm&amp;as=admin_general_email&amp;ae=admin_general_email_end'), //cpg1.4
  array('Повний URL до вашої галереї (без \'index.php\' чи чогось такого в кінці)', 'ecards_more_pic_target', 0, 'f=index.htm&amp;as=admin_general_coppermine-url&amp;ae=admin_general_coppermine-url_end'), //cpg1.4
  array('URL вашої домашньої сторінки', 'home_target', 0, 'f=index.htm&amp;as=admin_general_home-url&amp;ae=admin_general_home-url_end'), //cpg1.4
  array('Дозволити викачування ZIP-архіву улюблених фото', 'enable_zipdownload', 1, 'f=index.htm&amp;as=admin_general_zip-download&amp;ae=admin_general_zip-download_end'), //cpg1.4
  array('Відхилення вашого часового поясу від GMT (теперішній час: ' . localised_date(-1, $comment_date_fmt) . ')','time_offset',0, 'f=index.htm&amp;as=admin_general_time-offset&amp;ae=admin_general_time-offset_end&amp;top=1'), //cpg1.4
  array('Дозволити шифрування паролів (не може бути потім скасовано)','enable_encrypted_passwords',1, 'f=index.htm&amp;as=admin_general_encrypt_password_start&amp;ae=admin_general_encrypt_password_end&amp;top=1'), // cpg 1.4
  array('Дозволити іконки довідки (довідка є тільки англійською мовою)','enable_help',9, 'f=index.htm&amp;as=admin_general_help&amp;ae=admin_general_help_end'), //cpg1.4
  array('Дозволити клацання по ключових словах під час пошуку','clickable_keyword_search',14, 'f=index.htm&amp;as=admin_general_keywords_start&amp;ae=admin_general_keywords_end'), //cpg1.4
  array('Дозволити плагіни', 'enable_plugins', 12, 'f=index.htm&amp;as=admin_general_enable-plugins&amp;ae=admin_general_enable-plugins_end'),  //cpg1.4
  array('Дозволити блокування IP адрес з приватних підмереж', 'ban_private_ip', 1,  'f=index.htm&amp;as=admin_general_private-ip&amp;ae=admin_general_private-ip_end'), //cpg1.4
  array('Інтерфейс додавання пачками', 'browse_batch_add', 1, 'f=index.htm&amp;as=admin_general_browsable_batch_add&amp;ae=admin_general_browsable_batch_add_end'), //cpg1.4

  'Мови та таблиці кодування',
  array('Мова', 'lang', 5, 'f=index.htm&amp;as=admin_language_language&amp;ae=admin_language_language_end'), //cpg1.4
  array('Знайти англійський замінник у випадку неповного перекладу?', 'language_fallback', 1, 'f=index.htm&amp;as=admin_language_fallback&amp;ae=admin_language_fallback_end'), //cpg1.4
  array('Таблиця кодування', 'charset', 4, 'f=index.htm&amp;as=admin_language_charset&amp;ae=admin_language_charset_end'), //cpg1.4
  array('Показувати список мов', 'language_list', 1, 'f=index.htm&amp;as=admin_language_list&amp;ae=admin_language_list_end'), //cpg1.4
  array('Показувати прапорці мов', 'language_flags', 8, 'f=index.htm&amp;as=admin_language_flags&amp;ae=admin_language_flags_end&amp;top=1'), //cpg1.4
  array('Дозволити &quot;скидання&quot; мови у списку мов', 'language_reset', 1, 'f=index.htm&amp;as=admin_language_reset&amp;ae=admin_language_reset_end&amp;top=1'), //cpg1.4
  //array('Display previous/next on tabbed pages', 'previous_next_tab', 1), //cpg1.4

  'Налаштування тем',
  array('Тема', 'theme', 6, 'f=index.htm&amp;as=admin_theme_theme&amp;ae=admin_theme_theme_end'), //cpg1.4
  array('Показувати список тем', 'theme_list', 1, 'f=index.htm&amp;as=admin_theme_theme_list&amp;ae=admin_theme_theme_list_end'), //cpg1.4
  array('Дозволити &quot;скидання&quot; при виборі тем', 'theme_reset', 1, 'f=index.htm&amp;as=admin_theme_theme_reset&amp;ae=admin_theme_theme_reset_end'), //cpg1.4
  array('Показати ЧАПи', 'display_faq', 1, 'f=index.htm&amp;as=admin_theme_faq&amp;ae=admin_theme_faq_end'), //cpg1.4
  array('Назва додаткового пункту меню', 'custom_lnk_name', 0,'f=index.htm&amp;as=admin_theme_custom_lnk_name&amp;ae=admin_theme_custom_lnk_name_end'), //cpg1.4
  array('URL додаткового пункту меню', 'custom_lnk_url', 0,'f=index.htm&amp;as=admin_language_custom_lnk_url&amp;ae=admin_language_custom_lnk_url_end'), //cpg1.4
  array('Показувати підказки bbcode', 'show_bbcode_help', 1, 'f=index.htm&amp;as=admin_theme_bbcode&amp;ae=admin_theme_bbcode_end&amp;top=1'), //cpg1.4
  array('Позначати спеціально теми, які задекларовано як XHTML та CSS сумісні','vanity_block',1, 'f=index.htm&amp;as=vanity_block&amp;ae=vanity_block_end'), //cpg1.4
  array('Шлях до файла з вашим кодом шапки сторінки', 'custom_header_path', 0, 'f=index.htm&amp;as=admin_theme_include_path_start&amp;ae=admin_theme_include_path_end'), //cpg1.4
  array('Шлях до файла з вашим кодом низу сторінки', 'custom_footer_path', 0, 'f=index.htm&amp;as=admin_theme_include_path_start&amp;ae=admin_theme_include_path_end'), //cpg1.4

  'Сторінка списку альбомів',
  array('Ширина головної таблиці (пікселі або %)', 'main_table_width', 0, 'f=index.htm&amp;as=admin_album_table-width&amp;ae=admin_album_table-width_end'), //cpg1.4
  array('Глибина рівнів категорій до показу', 'subcat_level', 0, 'f=index.htm&amp;as=admin_album_category-levels&amp;ae=admin_album_category-levels_end'), //cpg1.4
  array('Макс кількість альбомів на сторінку', 'albums_per_page', 0, 'f=index.htm&amp;as=admin_album_number&amp;ae=admin_album_number_end'), //cpg1.4
  array('Кількість колонок у списку альбомів', 'album_list_cols', 0, 'f=index.htm&amp;as=admin_album_columns&amp;ae=admin_album_columns_end'), //cpg1.4
  array('Розмір слайдів в пікселях', 'alb_list_thumb_size', 0, 'f=index.htm&amp;as=admin_album_thumbnail-size&amp;ae=admin_album_thumbnail-size_end'), //cpg1.4
  array('Наповнення головної сторінки', 'main_page_layout', 0, 'f=index.htm&amp;as=admin_album_list_content&amp;ae=admin_album_list_content_end'), //cpg1.4
  array('Показати для категорій слайди фото з альбомів першого рівня','first_level',1, 'f=index.htm&amp;as=admin_album_first-level_thumbs&amp;ae=admin_album_first-level_thumbs_end'), //cpg1.4
  array('Сортувати категорії за алфавітом (замість довільного способу сортування)','categories_alpha_sort',1, 'f=index.htm&amp;as=admin_album_list_alphasort_start&amp;ae=admin_album_list_alphasort_end'), //cpg1.4
  array('Показувати кількість під`єднаних файлів','link_pic_count',1, 'f=index.htm&amp;as=admin_album_linked_files_start&amp;ae=admin_album_linked_files_end'), //cpg1.4

  'Показ слайдів',
  array('Кількість колонок на сторінці слайдів', 'thumbcols', 0, 'f=index.htm&amp;as=admin_thumbnail_columns&amp;ae=admin_thumbnail_columns_end'), //cpg1.4
  array('Кількість рядочків на сторінці слайдів', 'thumbrows', 0, 'f=index.htm&amp;as=admin_thumbnail_rows&amp;ae=admin_thumbnail_rows_end'), //cpg1.4
  array('Макс. кількість закладок', 'max_tabs', 10, 'f=index.htm&amp;as=admin_thumbnail_tabs&amp;ae=admin_thumbnail_tabs_end'), //cpg1.4
  array('Показувати заголовок (на додачу до назви фото) під слайдом', 'caption_in_thumbview', 1, 'f=index.htm&amp;as=admin_thumbnail_display_caption&amp;ae=admin_thumbnail_display_caption_end'), //cpg1.4
  array('Показувати кількість переглядів під слайдом', 'views_in_thumbview', 1, 'f=index.htm&amp;as=admin_thumbnail_display_views&amp;ae=admin_thumbnail_display_views_end'), //cpg1.4
  array('Показувати кількість коментарів під слайдом', 'display_comment_count', 1, 'f=index.htm&amp;as=admin_thumbnail_display_comments&amp;ae=admin_thumbnail_display_comments_end'), //cpg1.4
  array('Показувати ім`я власника під слайдом', 'display_uploader', 1, 'f=index.htm&amp;as=admin_thumbnail_display_uploader&amp;ae=admin_thumbnail_display_uploader_end'), //cpg1.4
  //array('Display name of admin uploaders below the thumbnail', 'display_admin_uploader', 1, 'f=index.htm&amp;as=admin_thumbnail_display_admin_uploader&amp;ae=admin_thumbnail_display_admin_uploader_end'), //cpg1.4
  array('Показувати назву файла під слайдом', 'display_filename', 1, 'f=index.htm&amp;as=admin_thumbnail_display_filename&amp;ae=admin_thumbnail_display_filename_end'), //cpg1.4
  //array('Показувати опис альбому', 'alb_desc_thumb', 1, 'f=index.htm&amp;as=admin_thumbnail_display_description&amp;ae=admin_thumbnail_display_description_end'), //cpg1.4
  array('Типовий спосіб сортування', 'default_sort_order', 3, 'f=index.htm&amp;as=admin_thumbnail_default_sortorder&amp;ae=admin_thumbnail_default_sortorder_end'), //cpg1.4
  array('Мін. кількість голосів для потрапляння у список \'популярних\'', 'min_votes_for_rating', 0, 'f=index.htm&amp;as=admin_thumbnail_minimum_votes&amp;ae=admin_thumbnail_minimum_votes_end'), //cpg1.4

  'Сторінка перегляду фото', //cpg1.4
  array('Ширина таблиці для показу фото (пікселі або %)', 'picture_table_width', 0, 'f=index.htm&amp;as=admin_image_comment_table-width&amp;ae=admin_image_comment_table-width_end'), //cpg1.4
  array('Показувати типово інформація про файл', 'display_pic_info', 1, 'f=index.htm&amp;as=admin_image_comment_info_visible&amp;ae=admin_image_comment_info_visible_end'), //cpg1.4
  array('Макс. довжина опису фото', 'max_img_desc_length', 0, 'f=index.htm&amp;as=admin_image_comment_descr_length&amp;ae=admin_image_comment_descr_length_end'), //cpg1.4
  array('Макс. кількість символів у слові', 'max_com_wlength', 0, 'f=index.htm&amp;as=admin_image_comment_chars_per_word&amp;ae=admin_image_comment_chars_per_word_end'), //cpg1.4
  array('Показати фото як кадри плівки', 'display_film_strip', 1, 'f=index.htm&amp;as=admin_image_comment_filmstrip_toggle&amp;ae=admin_image_comment_filmstrip_toggle_end'), //cpg1.4
  array('Показати імена файлів під кадрами плівки', 'display_film_strip_filename', 1, 'f=index.htm&amp;as=admin_image_comment_display_film_strip_filename&amp;ae=admin_image_comment_display_film_strip_filename_end'), //cpg1.4
  array('Кількість фото в стрічці плівки', 'max_film_strip_items', 0, 'f=index.htm&amp;as=admin_image_comment_filmstrip_number&amp;ae=admin_image_comment_filmstrip_number_end'), //cpg1.4
  array('Затримка показу слайдів (1 секунда = 1000 мілісекунд :-)', 'slideshow_interval', 0, 'f=index.htm&amp;as=admin_image_comment_slideshow_interval&amp;ae=admin_image_comment_slideshow_interval_end'), //cpg1.4

  'Коментарі', //cpg1.4
  array('Відфільтровувати погані слова у коментарях', 'filter_bad_words', 1, 'f=index.htm&amp;as=admin_image_comment_bad_words&amp;ae=admin_image_comment_bad_words_end'), //cpg1.4
  array('Дозволити смайлики у коментарях', 'enable_smilies', 1, 'f=index.htm&amp;as=admin_image_comment_smilies&amp;ae=admin_image_comment_smilies_end'), //cpg1.4
  array('Дозволити кілька коментарів до одного фото від одного користувача (відключити захист від флуду)', 'disable_comment_flood_protect', 1, 'f=index.htm&amp;as=admin_image_comment_flood&amp;ae=admin_image_comment_flood_end'), //cpg1.4
  array('Макс. кількість стрічок в коментарі', 'max_com_lines', 0, 'f=index.htm&amp;as=admin_image_comment_lines&amp;ae=admin_image_comment_lines_end'), //cpg1.4
  array('Макс довжина коментаря', 'max_com_size', 0, 'f=index.htm&amp;as=admin_image_comment_length&amp;ae=admin_image_comment_length_end'), //cpg1.4
  array('Повідомляти адміністратора поштою про появу коментарів', 'email_comment_notification', 1, 'f=index.htm&amp;as=admin_image_comment_admin_notify&amp;ae=admin_image_comment_admin_notify_end'), //cpg1.4
  array('Сортування коментарів', 'comments_sort_descending', 17, 'f=index.htm&amp;as=admin_comment_sort_start&amp;ae=admin_comment_sort_end'), //cpg1.4
  array('Префікс для коментарів анонімних авторів', 'comments_anon_pfx', 0, 'f=index.htm&amp;as=comments_anon_pfx&amp;ae=comments_anon_pfx_end'), //cpg1.4

  'Файли і слайди',
  array('Рівень якості JPEG файлів', 'jpeg_qual', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_jpeg_quality&amp;ae=admin_picture_thumbnail_jpeg_quality_end'), //cpg1.4
  array('Макс. розміри слайдів <a href="#notice2" class="clickable_option">**</a>', 'thumb_width', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max-dimension&amp;ae=admin_picture_thumbnail_max-dimension_end'), //cpg1.4
  array('Обмежити розміри ( ширина або висота ) <a href="#notice2" class="clickable_option">**</a>', 'thumb_use', 7, 'f=index.htm&amp;as=admin_picture_thumbnail_use-dimension&amp;ae=admin_picture_thumbnail_use-dimension_end'), //cpg1.4
  array('Створювати проміжні фото','make_intermediate',1, 'f=index.htm&amp;as=admin_picture_thumbnail_intermediate_toggle&amp;ae=admin_picture_thumbnail_intermediate_toggle_end'), //cpg1.4
  array('Макс. висота або ширина проміжних фото/відео <a href="#notice2" class="clickable_option">**</a>', 'picture_width', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_intermediate_dimension&amp;ae=admin_picture_thumbnail_intermediate_dimension_end'), //cpg1.4
  array('Макс розмір файлів до закачування (KB)', 'max_upl_size', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max_upload_size&amp;ae=admin_picture_thumbnail_max_upload_size_end'), //cpg1.4
  array('Макс. висота або ширина фото/відео файлів під час закачуваня', 'max_upl_width_height', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max_upload_dimension&amp;ae=admin_picture_thumbnail_max_upload_dimension_end'), //cpg1.4
  array('Автоматично масштабувати фото, які перевищують граничні розміри', 'auto_resize', 16, 'f=index.htm&amp;as=admin_picture_thumbnail_auto-resize&amp;ae=admin_picture_thumbnail_auto-resize_end'), //cpg1.4

  'Файли і слайди - тонкі налаштування',
  array('Альбоми можуть бути приватними (Примітка: якщо ви переключаєтеся з  \'так\' на \'ні\' всі приватні альбоми стануть публічними)', 'allow_private_albums', 1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_private_toggle&amp;ae=admin_picture_thumb_advanced_private_toggle_end'), //cpg1.4
  array('Показувати піктограму приватного альбому незареєстрованим користувачам','show_private',1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_private_icon_show&amp;ae=admin_picture_thumb_advanced_private_icon_show_end'), //cpg1.4
  array('Символи, заборонені в іменах файлів', 'forbiden_fname_char',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_filename_forbidden_chars&amp;ae=admin_picture_thumb_advanced_filename_forbidden_chars_end'), //cpg1.4
  //array('Accepted file extensions for uploaded pictures', 'allowed_file_extensions',0, 'f=index.htm&amp;as=&amp;ae=_end'), //cpg1.4
  array('Дозволені типи файлів зображень', 'allowed_img_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_pic_extensions&amp;ae=admin_picture_thumb_advanced_pic_extensions_end'), //cpg1.4
  array('Дозволені типи файлів відео', 'allowed_mov_types',0, 'f=index.htm&amp;as=admin_thumbs_advanced_movie&amp;ae=admin_thumbs_advanced_movie_end'), //cpg1.4
  array('Автоматично стартувати відтворення відео', 'media_autostart',1, 'f=index.htm&amp;as=admin_movie_autoplay&amp;ae=admin_movie_autoplay_end'), //cpg1.4
  array('Дозволені типи файлів звуку', 'allowed_snd_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_audio_extensions&amp;ae=admin_picture_thumb_advanced_audio_extensions_end'), //cpg1.4
  array('Дозволені типи файлів документів', 'allowed_doc_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_doc_extensions&amp;ae=admin_picture_thumb_advanced_doc_extensions_end'), //cpg1.4
  array('Метод мастабування фото','thumb_method',2, 'f=index.htm&amp;as=admin_picture_thumb_advanced_resize_method&amp;ae=admin_picture_thumb_advanced_resize_method_end'), //cpg1.4
  array('Шлях до утиліти ImageMagick \'convert\' (напр. /usr/bin/X11/)', 'impath', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_im_path&amp;ae=admin_picture_thumb_advanced_im_path_end'), //cpg1.4
  //array('Allowed image types (only valid for ImageMagick)', 'allowed_img_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_allowed_imagetypes&amp;ae=admin_picture_thumb_advanced_allowed_imagetypes_end'), //cpg1.4
  array('Параметри командної стрічки для ImageMagick', 'im_options', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_im_commandline&amp;ae=admin_picture_thumb_advanced_im_commandline_end'), //cpg1.4
  array('Вичитувати дані EXIF із JPEG файлів', 'read_exif_data', 13, 'f=index.htm&amp;as=admin_picture_thumb_advanced_exif&amp;ae=admin_picture_thumb_advanced_exif_end'), //cpg1.4
  array('Вичитувати IPTC дані із JPEG файлів', 'read_iptc_data', 1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_iptc&amp;ae=admin_picture_thumb_advanced_iptc_end'), //cpg1.4
  array('Тека з вмістом альбомів <a href="#notice1" class="clickable_option">*</a>', 'fullpath', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_albums_dir&amp;ae=admin_picture_thumb_advanced_albums_dir_end'), //cpg1.4
  array('Тека для файлів користувачів <a href="#notice1" class="clickable_option">*</a>', 'userpics', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_userpics_dir&amp;ae=admin_picture_thumb_advanced_userpics_dir_end'), //cpg1.4
  array('Префікс для проміжних файлів<a href="#notice1" class="clickable_option">*</a>', 'normal_pfx', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_intermediate_prefix&amp;ae=admin_picture_thumb_advanced_intermediate_prefix_end'), //cpg1.4
  array('Префікс для слайдів <a href="#notice1" class="clickable_option">*</a>', 'thumb_pfx', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_thumbs_prefix&amp;ae=admin_picture_thumb_advanced_thumbs_prefix_end'), //cpg1.4
  array('Стандартні атрибути доступу для тек галереї', 'default_dir_mode', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_chmod_folder&amp;ae=admin_picture_thumb_advanced_chmod_folder_end'), //cpg1.4
  array('Стандартні атрибути доступу для файлів галереї', 'default_file_mode', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_chmod_files&amp;ae=admin_picture_thumb_advanced_chmod_files_end'), //cpg1.4

  'Користувачі',
  array('Дозволити реєстрацію нових користувачів', 'allow_user_registration', 1, 'f=index.htm&amp;as=admin_allow_registration&amp;ae=admin_allow_registration_end'), //cpg1.4
  array('Дозволити доступ неавторизованим користувачам (гостям або анонімним)', 'allow_unlogged_access', 1, 'f=index.htm&amp;as=admin_allow_unlogged_access&amp;ae=admin_allow_unlogged_access_end'), //cpg1.4
  array('Реєстрація користувача вимагає підтвердження поштою', 'reg_requires_valid_email', 1, 'f=index.htm&amp;as=admin_registration_verify&amp;ae=admin_registration_verify_end'), //cpg1.4
  array('Повідомити адміністратора поштою про реєстрацію нового користувача', 'reg_notify_admin_email', 1, 'f=index.htm&amp;as=admin_registration_notify&amp;ae=admin_registration_notify_end'), //cpg1.4
  array('Реєстрація вимагає підтвердження адміністратора', 'admin_activation', 1, 'f=index.htm&amp;as=admin_activation&amp;ae=admin_activation_end'),  //cpg1.4
  array('Дозволити кільком користувачам мати однакову Email адресу', 'allow_duplicate_emails_addr', 1, 'f=index.htm&amp;as=admin_allow_duplicate_emails_addr&amp;ae=admin_allow_duplicate_emails_addr_end'), //cpg1.4
  array('Повідомляти адміністратора про додані файли, що вимагають підтвердження', 'upl_notify_admin_email', 1, 'f=index.htm&amp;as=admin_approval_notify&amp;ae=admin_approval_notify_end'), //cpg1.4
  array('Дозволити авторизованим користувачам бачити список всіх користувачів', 'allow_memberlist', 1, 'f=index.htm&amp;as=admin_user_memberlist&amp;ae=admin_user_memberlist_end'), //cpg1.4
  array('Дозволити зареєстрованим користувачам змінювати свою електронну адресу', 'allow_email_change', 1, 'f=index.htm&amp;as=admin_user_allow_email_change&amp;ae=admin_user_allow_email_change_end'), //cpg1.4
  array('Дозволити користувачам контролювати їхні фотографії в загальних галереях', 'users_can_edit_pics', 1, 'f=index.htm&amp;as=admin_user_editpics_public_start&amp;ae=admin_user_editpics_public_end'), //cpg1.4
  array('Кількість невдалих спроб авторизації до тимчасового блокування користувача (щоб уникнути підбору паролів)', 'login_threshold', 0, 'f=index.htm&amp;as=admin_user_login_start&amp;ae=admin_user_login_end'), //cpg1.4
  array('Тривалість тимчасового блокування після невдалих спроб авторизації', 'login_expiry', 0, 'f=index.htm&amp;as=admin_user_login_start&amp;ae=admin_user_login_end'), //cpg1.4
  array('Дозволити відсилання скарг адміністратору', 'report_post', 1, 'f=index.htm&amp;as=admin_user_enable_report&amp;ae=admin_user_enable_report_end'),  //cpg1.4

// custom profile fields,  //cpg1.4
  'Користувацькі поля в профайлі користувача (залишіть порожніми, якщо не використовується).
  Використовуйте Поле 6 для довгих текстів типу біографій', //cpg1.4
  array('Назва поля 1', 'user_profile1_name', 0, 'f=index.htm&amp;as=admin_custom&amp;ae=admin_custom_end'), //cpg1.4
  array('Назва поля 2', 'user_profile2_name', 0), //cpg1.4
  array('Назва поля 3', 'user_profile3_name', 0), //cpg1.4
  array('Назва поля 4', 'user_profile4_name', 0), //cpg1.4
  array('Назва поля 5', 'user_profile5_name', 0), //cpg1.4
  array('Назва поля 6', 'user_profile6_name', 0), //cpg1.4

  'Користувацькі поля в описі фотографії (залишіть порожніми, якщо не використовується)',
  array('Назва поля 1', 'user_field1_name', 0, 'f=index.htm&amp;as=admin_custom_image&amp;ae=admin_custom_image_end'), //cpg1.4
  array('Назва поля 2', 'user_field2_name', 0),
  array('Назва поля 3', 'user_field3_name', 0),
  array('Назва поля 4', 'user_field4_name', 0),

  'Коржики',
  array('Назва коржика', 'cookie_name', 0, 'f=index.htm&amp;as=admin_cookie_name&amp;ae=admin_cookie_name_end'), //cpg1.4
  array('Шлях коржика', 'cookie_path', 0, 'f=index.htm&amp;as=admin_cookie_path&amp;ae=admin_cookie_path_end'), //cpg1.4

  'Налаштування електронної пошти (як правило тут нічого міняти не треба; залишіть все пустим, якщо не впевнені)', //cpg1.4
  array('SMTP хост (якщо залишено пустим, буде використано sendmail)', 'smtp_host', 0, 'f=index.htm&amp;as=admin_email&amp;ae=admin_email_end'), //cpg1.4
  array('Користувач SMTP', 'smtp_username', 0), //cpg1.4
  array('Пароль SMTP', 'smtp_password', 0), //cpg1.4

  'Журнали і статистика', //cpg1.4
  array('Режим журналювання <a href="#notice3" class="clickable_option">***</a>', 'log_mode', 11, 'f=index.htm&amp;as=admin_logging_log_mode&amp;ae=admin_logging_log_mode_end'), //cpg1.4
  array('Журналювати електронні листівки', 'log_ecards', 1, 'f=index.htm&amp;as=admin_general_log_ecards&amp;ae=admin_general_log_ecards_end'), //cpg1.4
  array('Зберігати детальну статистику про голосування','vote_details',1, 'f=index.htm&amp;as=admin_logging_votedetails&amp;ae=admin_logging_votedetails_end'), //cpg1.4
  array('Зберігати детальну статистику відвідувань','hit_details',1, 'f=index.htm&amp;as=admin_logging_hitdetails&amp;ae=admin_logging_hitdetails_end'), //cpg1.4

  'Підтримка', //cpg1.4
  array('Включити режим відлагодження', 'debug_mode', 9, 'f=index.htm&amp;as=debug_mode&amp;ae=debug_mode_end'), //cpg1.4
  array('Показувати повідомлення у режимі відлагоджування', 'debug_notice', 1, 'f=index.htm&amp;as=admin_misc_debug_notices&amp;ae=admin_misc_debug_notices_end'), //cpg1.4
  array('Галерея зараз відключена', 'offline', 1, 'f=index.htm&amp;as=admin_general_offline&amp;ae=admin_general_offline_end'), //cpg1.4
);


// ------------------------------------------------------------------------- //
// File db_ecard.php
// ------------------------------------------------------------------------- //

if (defined('DB_ECARD_PHP')) $lang_db_ecard_php = array(
  'title' => 'Надіслати листівку',
  'ecard_sender' => 'Відправник',
  'ecard_recipient' => 'Отримувач',
  'ecard_date' => 'Дата',
  'ecard_display' => 'Показати листівку',
  'ecard_name' => 'Назва листівки',
  'ecard_email' => 'Email',
  'ecard_ip' => 'IP #',
  'ecard_ascending' => 'за зростанням',
  'ecard_descending' => 'за спаданням',
  'ecard_sorted' => 'Сортовано',
  'ecard_by_date' => 'за датою',
  'ecard_by_sender_name' => 'за іменем відправника',
  'ecard_by_sender_email' => 'за Email відправника',
  'ecard_by_sender_ip' => 'за IP адресою відправника',
  'ecard_by_recipient_name' => 'за іменем отримувача',
  'ecard_by_recipient_email' => 'за Email отримувача',
  'ecard_number' => 'показано записи від %s до %s із %s',
  'ecard_goto_page' => 'на сторінку',
  'ecard_records_per_page' => 'Записів на сторінку',
  'check_all' => 'Відмітити всі',
  'uncheck_all' => 'Зняти всі відмітки',
  'ecards_delete_selected' => 'Витерти вибрані листівки',
  'ecards_delete_confirm' => 'Ви впевнені, що хочете витерти ці листівки? Поставте галочку для підтвердження!',
  'ecards_delete_sure' => 'Я впевнений',
);


// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
  'empty_name_or_com' => 'Ви повинні набрати ваше ім`я та коментар',
  'com_added' => 'Ваш коментар долучено',
  'alb_need_title' => 'Вкажіть назву альбому!',
  'no_udp_needed' => 'Оновлення не потрібне.',
  'alb_updated' => 'Альбом оновлено',
  'unknown_album' => 'Обраний альбом не існує, або Ви не маєте повноважень для долучення фото до цього альбому',
  'no_pic_uploaded' => 'Фото не долучено!<br /><br />Перевірте сервер на можливість долучення фото!',
  'err_mkdir' => 'Помилка при створенні папки %s !',
  'dest_dir_ro' => 'Папка призначення %s є тільки для читання (для скрипта)!',
  'err_move' => 'Неможливо перемістити %s в %s !',
  'err_fsize_too_large' => 'Розмір фото, яке ви долучаєте, завеликий (максимальний: %s x %s) !', //obsolete since cpg1.3 - consider removal in cpg1.4 once upload.php has been overhauled
  'err_imgsize_too_large' => 'Розмір файлу, який ви долучаєте, завеликий (максимальний: %s Kб) !', //obsolete since cpg1.3 - consider removal in cpg1.4 once upload.php has been overhauled
  'err_invalid_img' => 'Файл, який ви долучаєте, не виглядає правильним малюнком !',
  'allowed_img_types' => 'Ви можете долучити тільки %s фото.',
  'err_insert_pic' => 'Фото \'%s\' не може бути долучене до альбому ',
  'upload_success' => 'Фото долучено.<br /><br />Після перевірки адміністратором воно з`явиться в альбомі.',
  'notify_admin_email_subject' => '%s - Повідомлення про долучення',
  'notify_admin_email_body' => 'Нещодавно %s долучив фото яке потребує вашого підтвердження. Відвідайте %s',
  'info' => 'Інформація',
  'com_added' => 'Коментар додано',
  'alb_updated' => 'Альбом оновлено',
  'err_comment_empty' => 'Ваш коментар порожній !',
  'err_invalid_fext' => 'Приймаються файли тільки наступних форматів: <br /><br />%s.',
  'no_flood' => 'Перепрошую, Ви - автор останнього коментаря до цього фото.<br /><br />Відредагуйте попередній коментар, якщо бажаєте його виправити.',
  'redirect_msg' => 'Вас буде перенаправлено.<br /><br /><br />Тисніть \'ДАЛІ\' якщо сторінка не оновиться автоматично',
  'upl_success' => 'Ваші фото долучено',
  'email_comment_subject' => 'Коментар додано до галереї Coppermine',
  'email_comment_body' => 'Хтось додав коментар до вашої галереї. Читайте його тут ',
  'album_not_selected' => 'Альбом не вибрано', //cpg1.4
  'com_author_error' => 'Зареєстрований користувач вже використовує таке псевдо, авторизуйтеся, або використайте інше', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
  'caption' => 'Напис',
  'fs_pic' => 'повний розмір фото',
  'del_success' => 'успішно видалено',
  'ns_pic' => 'нормальний розмір фото',
  'err_del' => 'видалити неможливо',
  'thumb_pic' => 'слайд',
  'comment' => 'коментар',
  'im_in_alb' => 'фото в альбомі',
  'alb_del_success' => 'Альбом &laquo;%s&raquo; видалено', //cpg1.4
  'alb_mgr' => 'Керування альбомом',
  'err_invalid_data' => 'Невірні дані отримано в \'%s\'',
  'create_alb' => 'Створення альбому \'%s\'',
  'update_alb' => 'Оновлення альбому \'%s\' з назвою \'%s\' та індексом \'%s\'',
  'del_pic' => 'Видалити фото',
  'del_alb' => 'Видалити альбом',
  'del_user' => 'Видалити користувача',
  'err_unknown_user' => 'Обраний користувач не існує !',
  'err_empty_groups' => 'Таблиці груп не існує, або вона порожня!', //cpg1.4
  'comment_deleted' => 'Коментар було видалено',
  'npic' => 'Фото', //cpg1.4
  'pic_mgr' => 'Керування Фото', //cpg1.4
  'update_pic' => 'Оновлення фото \'%s\' з назвою \'%s\' та індексом \'%s\'', //cpg1.4
  'username' => 'Користувач', //cpg1.4
  'anonymized_comments' => '%s коментар(ів) анонімізовано', //cpg1.4
  'anonymized_uploads' => '%s публічних долучень анонімізовано', //cpg1.4
  'deleted_comments' => '%s коментар(ів) видалено', //cpg1.4
  'deleted_uploads' => '%s публічних долучень видалено', //cpg1.4
  'user_deleted' => 'користувача %s видалено', //cpg1.4
  'activate_user' => 'Активувати користувача', //cpg1.4
  'user_already_active' => 'Користувач вже був активним', //cpg1.4
  'activated' => 'Активовано', //cpg1.4
  'deactivate_user' => 'Деактивувати користувача', //cpg1.4
  'user_already_inactive' => 'Користувач вже був неактивним', //cpg1.4
  'deactivated' => 'Деактивовано', //cpg1.4
  'reset_password' => 'Перевстановити пароль(і)', //cpg1.4
  'password_reset' => 'Пароль перевстановлено на %s', //cpg1.4
  'change_group' => 'Змінити первинну групу', //cpg1.4
  'change_group_to_group' => 'Змінюю з %s на %s', //cpg1.4
  'add_group' => 'Додати вторинну групу', //cpg1.4
  'add_group_to_group' => 'Додаю користувача %s до групи %s. Він вже є членом групи %s як первинної та %s вторинної(их).', //cpg1.4
  'status' => 'Статус', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File displayecard.php
// ------------------------------------------------------------------------- //

if (defined('DISPLAYECARD_PHP')) {

$lang_displayecard_php = array(
  'invalid_data' => 'Дані листівки, яку ви хочете подивитися, були пошкоджені вашою поштовою програмою. Переконайтеся, що передачу завершено.', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File displayimage.php
// ------------------------------------------------------------------------- //

if (defined('DISPLAYIMAGE_PHP')){

$lang_display_image_php = array(
  'confirm_del' => 'Ви справді бажаєте видалити це фото? \\nКоментарі теж зникнуть.', //js-alert
  'del_pic' => 'ВИДАЛИТИ ФОТО',
  'size' => '%s x %s пікселів',
  'views' => '%s разів',
  'slideshow' => 'Слайд-шоу',
  'stop_slideshow' => 'ЗУПИНИТИ СЛАЙД-ШОУ',
  'view_fs' => 'Клікніть щоб побачити фото повного розміру',
  'edit_pic' => 'Редагувати дані фото', //cpg1.4
  'crop_pic' => 'Обрізання та обертання',
  'set_player' => 'Змінити програвач',
);

$lang_picinfo = array(
  'title' =>'Інформація про фото',
  'Filename' => 'Файл',
  'Album name' => 'Альбом',
  'Rating' => 'Рейтинг (%s голосів)',
  'Keywords' => 'Ключові слова',
  'File Size' => 'Розмір файлу',
  'Date Added' => 'Дата долучення', //cpg1.4
  'Dimensions' => 'Розміри',
  'Displayed' => 'Переглядів',
  'URL' => 'URL', //cpg1.4
  'Make' => 'Виробник', //cpg1.4
  'Model' => 'Модель', //cpg1.4
  'DateTime' => 'Дата і час', //cpg1.4
  'ISOSpeedRatings'=>'ISO', //cpg1.4
  'MaxApertureValue' => 'Світлосила об`єктива', //cpg1.4
  'FocalLength' => 'Фокусна відстань', //cpg1.4
  'Comment' => 'Коментар',
  'addFav'=>'Долучити до вибраних',
  'addFavPhrase'=>'Вибрані',
  'remFav'=>'Видалити з вибраних',
  'iptcTitle'=>'IPTC назва',
  'iptcCopyright'=>'IPTC Copyright',
  'iptcKeywords'=>'IPTC ключові слова',
  'iptcCategory'=>'IPTC Категорія',
  'iptcSubCategories'=>'IPTC Підкатегорії',
  'ColorSpace' => 'Простір кольорів', //cpg1.4
  'ExposureProgram' => 'Програма експозиції', //cpg1.4
  'Flash' => 'Спалах', //cpg1.4
  'MeteringMode' => 'Режим заміру експозиції', //cpg1.4
  'ExposureTime' => 'Витримка', //cpg1.4
  'ExposureBiasValue' => 'Експокорекція', //cpg1.4
  'ImageDescription' => ' Опис фото', //cpg1.4
  'Orientation' => 'Орієнтація', //cpg1.4
  'xResolution' => 'Роздільна здатність по X', //cpg1.4
  'yResolution' => 'Роздільна здатність по Y', //cpg1.4
  'ResolutionUnit' => 'Одинця виміру роздільної здатності', //cpg1.4
  'Software' => 'Програмне забезпечення', //cpg1.4
  'YCbCrPositioning' => 'YCbCrPositioning', //cpg1.4
  'ExifOffset' => 'Зміщення Exif', //cpg1.4
  'IFD1Offset' => 'Зміщення IFD1', //cpg1.4
  'FNumber' => 'Діафрагма', //cpg1.4
  'ExifVersion' => 'Версія Exif', //cpg1.4
  'DateTimeOriginal' => 'Дата і час знімка', //cpg1.4
  'DateTimedigitized' => 'Дата і час оцифровки', //cpg1.4
  'ComponentsConfiguration' => 'Кофігурація компонент', //cpg1.4
  'CompressedBitsPerPixel' => 'Компресованих біт на піксель', //cpg1.4
  'LightSource' => 'Джерело світла', //cpg1.4
  'ISOSetting' => 'ISO', //cpg1.4
  'ColorMode' => 'Режим кольорів', //cpg1.4
  'Quality' => 'Якість', //cpg1.4
  'ImageSharpening' => 'Image Sharpening', //cpg1.4
  'FocusMode' => 'Режим фокусування', //cpg1.4
  'FlashSetting' => 'Режим спалаху', //cpg1.4
  'ISOSelection' => 'ISO', //cpg1.4
  'ImageAdjustment' => 'Підлаштування фото', //cpg1.4
  'Adapter' => 'Адаптер', //cpg1.4
  'ManualFocusDistance' => 'Ручна фокусна відстань', //cpg1.4
  'DigitalZoom' => 'Цифровий зум', //cpg1.4
  'AFFocusPosition' => 'Точка автофокусування', //cpg1.4
  'Saturation' => 'Saturation', //cpg1.4
  'NoiseReduction' => 'Зниження шуму', //cpg1.4
  'FlashPixVersion' => 'Версія Flash Pix', //cpg1.4
  'ExifImageWidth' => 'Ширина фото в Exif', //cpg1.4
  'ExifImageHeight' => 'Висота фото в Exif', //cpg1.4
  'ExifInteroperabilityOffset' => 'Exif Interoperability Offset', //cpg1.4
  'FileSource' => 'Джерело файла', //cpg1.4
  'SceneType' => 'Тип сюжету', //cpg1.4
  'CustomerRender' => 'Customer Render', //cpg1.4
  'ExposureMode' => 'Режим заміру експозиції', //cpg1.4
  'WhiteBalance' => 'Баланс білого', //cpg1.4
  'DigitalZoomRatio' => 'Кратність цифрового зума', //cpg1.4
  'SceneCaptureMode' => 'Сюжетний режим', //cpg1.4
  'GainControl' => 'Gain Control', //cpg1.4
  'Contrast' => 'Контраст', //cpg1.4
  'Sharpness' => 'Sharpness', //cpg1.4
  'ManageExifDisplay' => 'Керування показом Exif', //cpg1.4
  'submit' => 'Підтвердити', //cpg1.4
  'success' => 'Інформацію змінено.', //cpg1.4
  'details' => 'Деталі', //cpg1.4
);

$lang_display_comments = array(
  'OK' => 'OK',
  'edit_title' => 'Редагувати',
  'confirm_delete' => 'Ви дійсно хочете видалити цей коментар ?', //js-alert
  'add_your_comment' => 'Додати коментар',
  'name'=>'Ім`я',
  'comment'=>'Коментар',
  'your_name' => 'Анонімно',
  'report_comment_title' => 'Пожалітися на цей коментар адміністратору', //cpg1.4
);

$lang_fullsize_popup = array(
  'click_to_close' => 'Натисніть на зображення, щоб закрити вікно',
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
  'title' => 'Надіслати електронну листівку',
  'invalid_email' => '<font color="red"><b>Увага</b></font>: неправильна електронна адреса:', //cpg1.4
  'ecard_title' => 'Листівка від %s для вас',
  'error_not_image' => 'Тільки фото можуть бути надіслані у листівках.',
  'view_ecard' => 'Надати альтернативне посилання, якщо листівка не показується правильно', //cpg1.4
  'view_ecard_plaintext' => 'Для того, щоб побачити цю листівку, скопіюйте до вашого інтернет-переглядача наступну адресу:', //cpg1.4
  'view_more_pics' => 'Подивитися всі фото !', //cpg1.4
  'send_success' => 'Вашу листівку надіслано',
  'send_failed' => 'Сервер не може надіслати вашу листівку...',
  'from' => 'Від',
  'your_name' => 'Ваше ім`я',
  'your_email' => 'Ваша електронна адреса',
  'to' => 'Кому',
  'rcpt_name' => 'Ім`я отримувача',
  'rcpt_email' => 'Електронна адреса отримувача',
  'greetings' => 'Привітання', //cpg1.4
  'message' => 'Повідомлення', //cpg1.4
  'ecards_footer' => 'Відіслано %s з IP адреси %s о %s (час сайту галереї)', //cpg1.4
  'preview' => 'Попередній перегляд листівки', //cpg1.4
  'preview_button' => 'Попередній перегляд', //cpg1.4
  'submit_button' => 'Послати листівку', //cpg1.4
  'preview_view_ecard' => 'Таким буде альтернативне посилання на листівку, після того як вона буде згенерована. Це посилання не працює поки листівку не було надіслано.', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File report_file.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('REPORT_FILE_PHP') || defined('DISPLAYREPORT_PHP')) $lang_report_php =array(
  'title' => 'Повідомити адміністратора', //cpg1.4
  'invalid_email' => '<b>Увага</b> : неправильна електронна адреса !', //cpg1.4
  'report_subject' => 'Повідомлення %s щодо галереї %s', //cpg1.4
  'view_report' => 'Альтернативне посилання, якщо повідомлення не показується правильно', //cpg1.4
  'view_report_plaintext' => 'Щоб побачити повідомлення, скопіюйте до вашого інтернет-переглядача наступну адресу:', //cpg1.4
  'view_more_pics' => 'Галерея', //cpg1.4
  'send_success' => 'Ваше повідомлення було переслано', //cpg1.4
  'send_failed' => 'Сервер не може надіслати ваше повідомлення...', //cpg1.4
  'from' => 'Від', //cpg1.4
  'your_name' => 'Ваше ім`я', //cpg1.4
  'your_email' => 'Ваша адреса', //cpg1.4
  'to' => 'Кому', //cpg1.4
  'administrator' => 'Адміністратор/модератор', //cpg1.4
  'subject' => 'Тема', //cpg1.4
  'comment_field_name' => 'Повідомлення щодо коментаря "%s"', //cpg1.4
  'reason' => 'Причина', //cpg1.4
  'message' => 'Повідомлення', //cpg1.4
  'report_footer' => 'Вислано %s з IP адреси %s о %s (час сайту галереї)', //cpg1.4
  'obscene' => 'непристойний', //cpg1.4
  'offensive' => 'образливий', //cpg1.4
  'misplaced' => 'не по темі', //cpg1.4
  'missing' => 'відсутній', //cpg1.4
  'issue' => 'помилка/не можу побачити', //cpg1.4
  'other' => 'інше', //cpg1.4
  'refers_to' => 'Повідомлення стосується', //cpg1.4
  'reasons_list_heading' => 'причини повідомлення:', //cpg1.4
  'no_reason_given' => 'причину не вказано', //cpg1.4
  'go_comment' => 'Перейти до коментаря', //cpg1.4
  'view_comment' => 'Показати повний звіт про коментар', //cpg1.4
  'type_file' => 'файл', //cpg1.4
  'type_comment' => 'коментар', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
  'pic_info' => 'Інформація про фото',
  'album' => 'Альбом',
  'title' => 'Назва',
  'filename' => 'Назва файлу', //cpg1.4
  'desc' => 'Опис',
  'keywords' => 'Keywords',
  'new_keyword' => 'Ключові слова', //cpg1.4
  'new_keywords' => 'Знайдено нові ключові слова', //cpg1.4
  'existing_keyword' => 'Існуючі ключові слова', //cpg1.4
  'pic_info_str' => '%s &times; %s - %s KB - %s переглядів - %s голосів',
  'approve' => 'Схвалити фото',
  'postpone_app' => 'Відхилити схвалення',
  'del_pic' => 'Видалити фото',
  'del_all' => 'Видалити ВСІ фото', //cpg1.4
  'read_exif' => 'Перечитати інформацію EXIF',
  'reset_view_count' => 'Скинути лічильник переглядів',
  'reset_all_view_count' => 'Скинути ВСІ лічильники переглядів', //cpg1.4
  'reset_votes' => 'Вилучити голоси',
  'reset_all_votes' => 'Вилучити ВСІ голоси', //cpg1.4
  'del_comm' => 'Вилучити коментар',
  'del_all_comm' => 'Вилучити ВСІ коментарі', //cpg1.4
  'upl_approval' => 'Схвалити фото', //cpg1.4
  'edit_pics' => 'Редагувати фото',
  'see_next' => 'Переглянути наступні фото',
  'see_prev' => 'Переглянути попередні фото',
  'n_pic' => '%s фото',
  'n_of_pic_to_disp' => 'Кількість фото на сторінку',
  'apply' => 'Застосувати зміни',
  'crop_title' => 'Редагування фото',
  'preview' => 'Попередній перегляд',
  'save' => 'Зберегти зміни',
  'save_thumb' =>'Зберегти слайд',
  'gallery_icon' => 'Встановити це як мій аватар', //cpg1.4
  'sel_on_img' =>'Область повинна повністю бути в межах малюнка!', //js-alert
  'album_properties' =>'Властивості альбому', //cpg1.4
  'parent_category' =>'Категорія вищого рівня', //cpg1.4
  'thumbnail_view' =>'Перегляд слайдів', //cpg1.4
  'select_unselect' =>'вибрати все/зняти виділення', //cpg1.4
  'file_exists' => "Цільовий файл '%s' вже існує.", //cpg1.4
  'rename_failed' => "Не можу переіменувати '%s' на '%s'.", //cpg1.4
  'src_file_missing' => "Файл '%s' не існує.", // cpg 1.4
  'mime_conv' => "Не можу перетворити файл з '%s' у '%s'",//cpg1.4
  'forb_ext' => 'Заборонене розширення файла.',//cpg1.4
);

// ------------------------------------------------------------------------- //
// File faq.php
// ------------------------------------------------------------------------- //

if (defined('FAQ_PHP')) $lang_faq_php = array(
  'faq' => 'ЧАсті ПИтання',
  'toc' => 'Зміст',
  'question' => 'Питання: ',
  'answer' => 'Відповідь: ',
);

if (defined('FAQ_PHP')) $lang_faq_data = array(
  'Загальні ЧАПи',
  array('Чому я повинен реєструватися?', 'Реєстрація може бути, а може не бути обов`язковою, залежно від рішення адміністратора галереї. Реєстрація дає користувачеві додаткові можливості - такі, як долучення файлів, списки вибраних фото, голосування на написання відгуків.', 'allow_user_registration', '1'),
  array('Як мені зареєструватися?', 'Перейдіть на сторінку &quot;Реєстрація&quot; і заповніть обов`язкові поля (і необов`язкові, якщо маєте бажання).<br />Якщо адміністрація вимагає підтвердження реєстрації електронною поштою, ви повинні отримати листа на адресу, що була введена під час реєстрації, з настановами щодо наступних кроків, необхідних для активування вашого членства. Після такого активування ви зможете увійти в систему.', 'allow_user_registration', '1'), //cpg1.4
  array('Як увійти в систему?', 'Перейдіть на сторінку &quot;Вхід&quot;, введіть ваше ім`я користувача і пароль та поставте галочку &quot;Запам`ятати мене&quot; щоб наступного разу галерея впізнала вас.<br /><b>ВАЖЛИВО: ваш переглядач тенет повинен приймати коржики, і коржик галереї не повинен вилучатися для того, щоб опція &quot;Запам`ятати мене&quot; працювала.</b>', 'offline', 0),
  array('Чому мене не пускає в систему?', 'Чи ви зареєструвалися і запустили посилання з листа, відісланого на вашу адресу? Це посилання активує вашу реєстрацію. У випадку інших проблем з авторизацією звертайтеся до адміністратора.', 'offline', 0),
  array('Що, якщо я забув пароль?', 'Якщо на цьому сайті є посилання &quot;Я забув пароль&quot; - скористайтеся ним. В інших випадках - звертайтеся до адміністратора.', 'offline', 0),
  //array('What if I changed my email address?', 'Just simply login and change your email address through &quot;Profile&quot;', 'offline', 0),
  array('Як додати фото до &quot;Вибраних&quot;?', 'На сторінці з фото натисніть на посилання &quot;інформація про фото&quot; (<img src="images/info.gif" width="16" height="16" border="0" alt="Інформація про фото" />); перейдіть до інформації про фото і натисніть на посилання &quot;Долучити до вибраних&quot;.<br />Адміністратор може бачити &quot;інформацію про фото&quot; зразу.<br />ВАЖЛИВО:ваш переглядач тенет повинен приймати коржики, і коржики галереї не повинні видалятися.', 'offline', 0),
  array('Як мені оцінити фото?', 'Відкрийте сторінку з великим зображенням та внизу виберіть оцінку.', 'offline', 0),
  array('Як мені написати коментар до фото?', 'Відкрийте сторінку з великим зображенням та внизу напишіть і коментар.', 'offline', 0),
  array('Як мені долучити фото?', 'Перейдіть на сторінку &quot;Долучити фото&quot;. Натисніть &quot;Browse,&quot; виберіть файл, який ви хочете закачати, натисніть &quot;Вперед.&quot; Вкажіть назву фото та опис, якщо бажаєте. Натисніть &quot;Вперед&quot;.<br /><br />Крім того, якщо ви раптом користуєтеся <b>Windows XP</b>, ви можете скористатися можливістю долучити один або більше файлів напряму у ваш приватний альбом, використовуючи XP Майстер тенет-публікації.<br />Детальнішу інформацію можна отримати на <a href="xp_publish.php">цій сторінці.</a>', 'allow_private_albums', 1), //cpg1.4
  array('Куди я можу долучати фото?', 'Ви можете долучати фото до ваших особистих альбомів у &quot;Особисту галерею&quot;. Адміністратор також може дозволити вам долучати фото до альбомів головної галереї.', 'allow_private_albums', 0),
  array('Файли яких типів і яких розмірів я можу закачувати?', 'Обмеження розмірів та типів файлів (jpg, png, і т.п.) задаються адміністратором.', 'offline', 0),
  array('Як мені створити, переіменувати чи вилучити альбом у &quot;Особистій галереї&quot;?', 'Перейдіть в режим &quot;Адміністратора&quot;<br />активуйте &quot;Створити/впорядкувати мої альбоми&quot; та натисніть &quot;Новий&quot;. Замініть &quot;Новий альбом&quot; на потрібну назву.<br />Там же ж можна змінити назву або вилучити існуючий альбом.<br />Натисніть &quot;Корегувати мої альбоми&quot;.', 'allow_private_albums', 0),
  array('Як я можу заборонити користувачам переглядати мої альбоми?', 'Перейдіть в режим &quot;Адміністратора&quot;<br />, активуйте Моя Галерея. В панелі &quot;Редагувати альбом&quot;, виберіть альбом, який ви хочете редагувати.<br />Ви зможете редагувати назву альбому, опис, емблему альбому, заборонити перегляди, оцінювання або коментування.<br />Натисніть &quot;Зберегти зміни&quot;.', 'allow_private_albums', 0),
  array('Як я можу подивитися альбоми інших користувачів?', 'Перейдіть на сторінку &quot;Список альбомів&quot; та виберіть &quot;Альбоми користувачів&quot;.', 'allow_private_albums', 0),
  array('Що таке коржики?', 'Коржики це фрагменти тексту, який передається сайтом на ваш комп`ютер для зберігання. <br />Коржики зазвичай використовуються для того, щоб користувач міг покинути сайт а потім повернутися на нього, не виконуючи процедуру входу у систему знову.', 'offline', 0),
  array('Де я можу отримати цю програму для використання на моєму сайті?', 'Coppermine є вільною мультимедіа галереєю, яка поширюється на умовах ліцензії GNU GPL. Галерея має багато різноманітних можливостей і працює на багатьох платформах. Відвідайте <a href="http://coppermine-gallery.net/">Домашню Сторінку Coppermine</a> для детальнішої інформації та для отримання коду.', 'offline', 0),

  'Переміщення по сайту',
  array('Що таке &quot;Список альбомів&quot;?', 'Ця сторінка покаже вам список всіх альбомів для поточної категорії. Якщо жодна категорія не вибрана, буде показано список категорій всієї галереї. Слайди можуть бути посиланням на категорію.', 'offline', 0),
  array('Що таке &quot;Моя галерея&quot;?', 'Ця річ дає можливість користувачам створювати власні галереї та додавати, вилучати або змінювати альбоми та фотографії в них за власним бажанням.', 'allow_private_albums', 1), //cpg1.4
  array('Яка різниця між &quot;Режимом користувача&quot; та &quot;режимом адміністратора&quot;?', 'Режим адміністратора має спеціальні засоби для керування особистими галереями (а також іншими, якщо це дозволено адміністратором).', 'allow_private_albums', 0),
  array('Що таке &quot;Долучити фото&quot;?', 'Ця сторінка дозволяє користувачам долучати свої фото до вибраної галереї (обмеження по розміру та дисковому простору виставляється адміністратором).', 'allow_private_albums', 0),
  array('Що таке &quot;Останні долучення&quot;?', 'Ця сторінка показує останні фото, що були долучені до галереї.', 'offline', 0),
  array('Що таке &quot;Останні коментарі&quot;?', 'Ця сторінка показує останні коментарі, що були додані користувачами.', 'offline', 0),
  array('Що таке &quot;Популярні&quot;?', 'Ця сторінка показує фото, які переглядалися найбільше (враховуючи як анонімних, так і зареєстрованих користувачів).', 'offline', 0),
  array('Що таке &quot;Кращі за рейтингом&quot;?', 'Ця сторінка показує фото, які набрали найбільше балів згідно оцінок користувачів, при цьому показується середній бал (тобто якщо 5 користувачів поставили оцінку <img src="images/rating3.gif" width="65" height="14" border="0" alt="" />: середньою оцінкою буде також <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> ; Якщо 5 користувачів дали оцінки від 1 до 5 (1,2,3,4,5), середній бал буде<img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> .)<br />Оцінки можуть бути від <img src="images/rating5.gif" width="65" height="14" border="0" alt="best" /> (найвища) до <img src="images/rating0.gif" width="65" height="14" border="0" alt="worst" /> (найнижча).', 'offline', 0),
  array('Що таке &quot;Вибрані&quot;?', 'На цій сторінці показуються улюблені фото користувача, які були вибрані ним під час переглядання галереї. Інформація про вибрані фото зберігається в коржиках на комп`ютері користувача.', 'offline', 0),
);


// ------------------------------------------------------------------------- //
// File forgot_passwd.php
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) $lang_forgot_passwd_php = array(
  'forgot_passwd' => 'Нагадування пароля',
  'err_already_logged_in' => 'Ви вже авторизовані !',
  'enter_email' => 'Введіть вашу Email адресу', //cpg1.4
  'submit' => 'OK',
  'illegal_session' => 'Сесія відновлення пароля неправильна або застаріла.', //cpg1.4
  'failed_sending_email' => 'Лист з нагадуванням пароля не може бути відіслано !',
  'email_sent' => 'Листа з вашим іменем користувача і паролем було надіслано на адресу %s', //cpg1.4
  'verify_email_sent' => 'Листа було надіслано на адресу %s. Будь ласка перегляньте вашу пошту для завершення процесу.', //cpg1.4
  'err_unk_user' => 'Вибраний користувач не існує!',
  'account_verify_subject' => '%s - Вимога нового пароля', //cpg1.4
  'account_verify_body' => 'Ви замовили новий пароль. Якщо ви хочете, щоб його було згенеровано і надіслано вам, активуйте наступне посилання:

%s', //cpg1.4
  'passwd_reset_subject' => '%s - ваш новий пароль', //cpg1.4
  'passwd_reset_body' => 'Ось новий пароль, що ви замовили:
Користувач: %s
Пароль: %s
Натисніть %s для входу.', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
  'group_name' => 'Група', //cpg1.4
  'permissions' => 'Права', //cpg1.4
  'public_albums' => 'Долучення в публічні альбоми', //cpg1.4
  'personal_gallery' => 'Особиста галерея', //cpg1.4
  'upload_method' => 'Метод долучення файлів', //cpg1.4
  'disk_quota' => 'Квота', //cpg1.4
  'rating' => 'Рейтинг', //cpg1.4
  'ecards' => 'Електронна листівка', //cpg1.4
  'comments' => 'Коментарі', //cpg1.4
  'allowed' => 'Дозволено', //cpg1.4
  'approval' => 'Затверджено', //cpg1.4
  'boxes_number' => 'Кількість полів для вводу', //cpg1.4
  'variable' => 'змінна', //cpg1.4
  'fixed' => 'постійна', //cpg1.4
  'apply' => 'Застосувати зміни',
  'create_new_group' => 'Створити нову групу',
  'del_groups' => 'Видалити вибрані групи',
  'confirm_del' => 'Увага, при видаленні групи, користувачі, що до неї належали будуть переведені до групи \'Зареєстровані\' !\n\nПродовжити ?', //js-alert
  'title' => 'Керування групами користувачів',
  'num_file_upload' => 'Полів для долучення файлів', //cpg1.4
  'num_URI_upload' => 'Полів для долучення URI', //cpg1.4
  'reset_to_default' => 'Відновити стандартну назву (%s) - рекомендовано!', //cpg1.4
  'error_group_empty' => 'Список груп був порожній !<br /><br />Типові групи створено, будь ласка перезавантажте цю сторінку', //cpg1.4
  'explain_greyed_out_title' => 'Чому цей рядок засірено?', //cpg1.4
  'explain_guests_greyed_out_text' => 'Ви не можете змінювати налаштування цієї групи бо  ви встановили опцію &quot; Дозволити доступ неавторизованим користувачам (гостям або анонімним)&quot; в &quot;Ні&quot; на сторінці налаштувань. Всі гості (члени групи %s) не можуть робити нічого крім входу в систему; тому налаштування групи є для них недоступними.', //cpg1.4
  'explain_banned_greyed_out_text' => 'Ви не можете змінювати налаштування групи %s тому, що її члени все одно не можуть нічого робити.', //cpg1.4
  'group_assigned_album' => 'приєднані альбоми', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
  'welcome' => 'Вітаємо !',
);

$lang_album_admin_menu = array(
  'confirm_delete' => 'Бажаєте видалити цей альбом? \\nВсі фото і коментарі зникнуть.', //js-alert
  'delete' => 'ВИДАЛИТИ',
  'modify' => 'НАЛАШТУВАННЯ',
  'edit_pics' => 'РЕДАГУВАТИ',
);

$lang_list_categories = array(
  'home' => 'Початок',
  'stat1' => '<b>[pictures]</b> фото в <b>[albums]</b> альбомах та <b>[cat]</b> категоріях з <b>[comments]</b> коментарями, переглянуто <b>[views]</b> разів',
  'stat2' => '<b>[pictures]</b> фото в <b>[albums]</b> альбомах переглянуто <b>[views]</b> разів',
	'xx_s_gallery' => 'Галерея %s\'а',
  'stat3' => '<b>[pictures]</b> фото в <b>[albums]</b> альбомах <b>[comments]</b> коментарями, переглянуто <b>[views]</b> разів',
);

$lang_list_users = array(
  'user_list' => 'Список користувачів',
  'no_user_gal' => 'Тут немає галерей користувачів',
  'n_albums' => '%s альбомів',
  'n_pics' => '%s фото',
);

$lang_list_albums = array(
  'n_pictures' => '%s фото',
  'last_added' => ', останнє долучено %s',
  'n_link_pictures' => '%s приєднаних фото', //cpg1.4
  'total_pictures' => '%s фото всього', //cpg1.4
);

}

// ------------------------------------------------------------------------- //
// File keywordmgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('KEYWORDMGR_PHP')) $lang_keywordmgr_php = array(
  'title' => 'Керування ключовими словами', //cpg1.4
  'edit' => 'редагувати', //cpg1.4
  'delete' => 'стерти', //cpg1.4
  'search' => 'шукати', //cpg1.4
  'keyword_test_search' => 'пошук %s у новому вікні', //cpg1.4
  'keyword_del' => 'витирання ключового слова %s', //cpg1.4
  'confirm_delete' => 'Ви дійсно хочете витерти ключове слово %s з усієї галереї?', //cpg1.4  // js-alert
  'change_keyword' => 'змінити ключове слово', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
  'login' => 'Вхід',
  'enter_login_pswd' => 'Введіть ім`я та пароль для входу',
  'username' => 'Користувач',
  'password' => 'Пароль',
  'remember_me' => 'Запам`ятати мене',
  'welcome' => 'Привіт %s ...',
  'err_login' => '*** Зайти неможливо. Спробуйте ще ***',
  'err_already_logged_in' => 'Ви вже увійшли!',
  'forgot_password_link' => 'Я забув пароль',
  'cookie_warning' => 'Увага! Ваш переглядач не приймає скриптових коржиків!', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
  'logout' => 'Вихід',
  'bye' => 'На все добре, %s ...',
  'err_not_loged_in' => 'Ви не увійшли!',
);

// ------------------------------------------------------------------------- //
// File minibrowser.php  //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('MINIBROWSER_PHP')) $lang_minibrowser_php = array(
  'close' => 'закрити', //cpg1.4
  'submit' => 'OK', //cpg1.4
  'up' => 'на рівень вище', //cpg1.4
  'current_path' => 'поточний шлях', //cpg1.4
  'select_directory' => 'виберіть теку', //cpg1.4
  'click_to_close' => 'Натисніть на фото щоб закрити це вікно',
);

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
  'upd_alb_n' => 'Оновлення альбому %s',
  'general_settings' => 'Загальні налаштування',
  'alb_title' => 'Назва альбому',
  'alb_cat' => 'Категорія альбому',
  'alb_desc' => 'Опис альбому',
  'alb_keyword' => 'Ключове слово альбому', //cpg1.4
  'alb_thumb' => 'Лого альбому',
  'alb_perm' => 'Права доступу до альбому',
  'can_view' => 'Альбом можна переглянути',
  'can_upload' => 'Відвідувачі можуть долучати фото',
  'can_post_comments' => 'Відвідувачі можуть залишати коментарі',
  'can_rate' => 'Відвідувачі можуть оцінювати фото',
  'user_gal' => 'Галерея користувачів',
  'no_cat' => '* Немає категорії *',
  'alb_empty' => 'Альбом порожній',
  'last_uploaded' => 'Останні долучення',
  'public_alb' => 'Публічний альбом',
  'me_only' => 'Тільки я',
  'owner_only' => 'Тільки власник альбому (%s)',
  'groupp_only' => 'Члени групи \'%s\'',
  'err_no_alb_to_modify' => 'В базі даних немає альбомів, які б Ви могли корегувати.',
  'update' => 'Оновити альбом',
  'reset_album' => 'Встановити типові налаштування альбому', //cpg1.4
  'reset_views' => 'Онулити лічильник переглядів для %s', //cpg1.4
  'reset_rating' => 'Очистити голоси для всіх файлів %s', //cpg1.4
  'delete_comments' => 'Вилучити всі коментарі файлів %s', //cpg1.4
  'delete_files' => '%sБезповоротно%s стерти всі файли у %s', //cpg1.4
  'views' => 'переглядів', //cpg1.4
  'votes' => 'голосів', //cpg1.4
  'comments' => 'коментарів', //cpg1.4
  'files' => 'фото', //cpg1.4
  'submit_reset' => 'зміна долучень', //cpg1.4
  'reset_views_confirm' => 'Впевнений', //cpg1.4
  'notice1' => '(*) залежить від налаштувань %s груп %s',  //cpg1.4 //(do not translate %s!)
  'alb_password' => 'Пароль альбому', //cpg1.4
  'alb_password_hint' => 'Підказка паролю альбому', //cpg1.4
  'edit_files' =>'Редагувати фото', //cpg1.4
  'parent_category' =>'Категорія вищого рівня', //cpg1.4
  'thumbnail_view' =>'Перегляд слайдів', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File phpinfo.php
// ------------------------------------------------------------------------- //

if (defined('PHPINFO_PHP')) $lang_phpinfo_php = array(
  'php_info' => 'PHP info',
  'explanation' => 'Це те, що виводить функція PHP <a href="http://www.php.net/phpinfo">phpinfo()</a>, запущена з Coppermine (можливе обмеження ширини тексту справа).',
  'no_link' => 'Дозволяти іншим читати вашу сторінку phpinfo є потенційним ризиком, тому ця сторінка є доступною для перегляду лише адміну. Ви не можете дати посилання на цю сторінку іншим - їм буде відмовлено у доступі.',
);

// ------------------------------------------------------------------------- //
// File picmgr.php //cpg1.4
// ------------------------------------------------------------------------- //
if (defined('PICMGR_PHP')) $lang_picmgr_php = array(
  'pic_mgr' => 'Керування фото', //cpg1.4
  'select_album' => 'Вибрати альбом', //cpg1.4
  'delete' => 'Стерти', //cpg1.4
  'confirm_delete1' => 'Ви дійсно хочете стерти це фото ?', //cpg1.4
  'confirm_delete2' => '\nФото буде остаточно вилучено.', //cpg1.4
  'apply_modifs' => 'Застосувати зміни', //cpg1.4
  'confirm_modifs' => 'Підтвердіть зміни', //cpg1.4
  'pic_need_name' => 'Фото потребує назви !', //cpg1.4
  'no_change' => 'Ви не зробили жодних змін !', //cpg1.4
  'no_album' => '* Нема альбому *', //cpg1.4
  'explanation_header' => 'Вільний спосіб сортування який можна задати на цій сторінці буде враховано тільки за умови', //cpg1.4
  'explanation1' => 'що адміністратор встановив "Типовий спосіб сортування" у налаштуваннях у режим сортування "за порядковим номером" (глобальне налаштування для всіх користувачів, хто не вказав явно бажаний спосіб сортування)', //cpg1.4
  'explanation2' => 'що користувач вибрав режим сортування "за порядковим номером" на сторінці показу слайдів (налаштовується окремо для кожного користувача)', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File pluginmgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('PLUGINMGR_PHP')){

$lang_pluginmgr_php = array(
  'confirm_uninstall' => 'Ви дійсно хочете відключити цей плагін', //cpg1.4
  'confirm_delete' => 'Ви дійсно хочете видалити цей плагін', //cpg1.4
  'pmgr' => 'Керування плагінами', //cpg1.4
  'name' => 'Назва', //cpg1.4
  'author' => 'Автор', //cpg1.4
  'desc' => 'Опис', //cpg1.4
  'vers' => 'v', //cpg1.4
  'i_plugins' => 'Встановлені плагіни', //cpg1.4
  'n_plugins' => 'Не встановлені плагіни', //cpg1.4
  'none_installed' => 'Нічого не встановлено', //cpg1.4
  'operation' => 'Дія', //cpg1.4
  'not_plugin_package' => 'Закачаний файл не є пакетом плагіна.', //cpg1.4
  'copy_error' => 'Сталася помилка при копіюванні плагіна у відповідну теку.', //cpg1.4
  'upload' => 'Закачати', //cpg1.4
  'configure_plugin' => 'Налаштувати плагін', //cpg1.4
  'cleanup_plugin' => 'Очистити плагін', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
  'already_rated' => 'Це фото Ви вже оцінили',
  'rate_ok' => 'Ваш голос зараховано',
  'forbidden' => 'Ви не можете оцінювати власні фото.',
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
Хоча адміністратори '<b>{SITE_NAME}</b>' намагатимуться якнайшвидше редагувати будь - який небажаний матеріал все одно неможливо переглядати всі долучення і коментарі. Ви підтверджуєте, що всі повідомлення показують Вашу, а не адміністраторів сайту, позицію.  <br />
<br />
Ви обіцяєте не надсилати образливої, брутальної, неправдивої і т.д інформації, і погоджуєтесь з тим, що всі Ваші повідомлення буде записано в базу даних, адміністратори можуть корегувати та видаляти Ваші повідомлення та долучення на свій розсуд. За всі спроби зламати сайт чи базу даних, і за пов`язані з цим втрати інформації, які можуть зашкодити роботі фотогалереї, ні вебмайстер, ні адміністратори відповідальності не несуть.<br />
<br />
Галерея використовує технологію 'cookies' для покращення перегляду. Адреса E-mail використовується тільки для підтвердження Ваших реєстраційних даних та паролю.<br />
<br />
Натиснувши на "згоден", ви погоджуєтесь з усім вищепереліченим.
EOT;

$lang_register_php = array(
  'page_title' => 'Реєстрація користувача',
  'term_cond' => 'Умови',
  'i_agree' => 'Згоден',
  'submit' => 'Продовжити реєстрацію',
  'err_user_exists' => 'Ім`я користувача вже зайняте. Спробуйте інше!',
  'err_password_mismatch' => 'Паролі не співпадають, введіть знову',
  'err_uname_short' => 'Ім`я користувача повинне містити мінімум 2 символи',
  'err_password_short' => 'Пароль повинен містити мінімум 2 символи',
  'err_uname_pass_diff' => 'Ім`я користувача та пароль не повинні співпадати',
  'err_invalid_email' => 'Адресу Email вказано невірно',
  'err_duplicate_email' => 'Вже хтось зареєструвався з таким Email',
  'enter_info' => 'Надайте реєстраційну інформацію',
  'required_info' => 'Необхідна інформація',
  'optional_info' => 'Додаткова інформація',
  'username' => 'Користувач',
  'password' => 'Пароль',
  'password_again' => 'Повтор паролю',
  'email' => 'Email',
  'location' => 'Звідки',
  'interests' => 'Захоплення',
  'website' => 'Сайт',
  'occupation' => 'Чим займаєтеся',
  'error' => 'ПОМИЛКА',
  'confirm_email_subject' => '%s - Підтвердження реєстрації',
  'information' => 'Інформація',
  'failed_sending_email' => 'Email про підтвердження реєстрації не може бути відправлено!',
  'thank_you' => 'Дякуємо.<br /><br />На вашу адресу буде надіслано листа з наступними вказівками.',
  'acct_created' => 'Запис про Вас створено. Ви зможете зайти, користуючись іменем та паролем',
  'acct_active' => 'Ваш рахунок активовано. Ви зможете зайти, користуючись іменем та паролем',
  'acct_already_act' => 'Рахунок вже було активовано!', //cpg1.4
  'acct_act_failed' => 'Цей рахунок не може бути активовано!',
  'err_unk_user' => 'Обраний користувач не існує!',
  'x_s_profile' => 'Профіль %s',
  'group' => 'Група',
  'reg_date' => 'Дата реєстрації',
  'disk_usage' => 'Використання диска',
  'change_pass' => 'Змінити пароль',
  'current_pass' => 'Теперішній пароль',
  'new_pass' => 'Новий пароль',
  'new_pass_again' => 'Новий пароль (ще раз)',
  'err_curr_pass' => 'Теперішній пароль - невірний',
  'apply_modif' => 'Застосувати зміни',
  'change_pass' => 'Змінити мій пароль',
  'update_success' => 'Ваш профіль оновлено',
  'pass_chg_success' => 'Ваш пароль змінено',
  'pass_chg_error' => 'Ваш пароль не змінено',
  'notify_admin_email_subject' => '%s - повідомлення про реєстрацію',
  'last_uploads' => 'Останнє долучення.<br />Натисніть тут, щоб побачити всі долучення', //cpg1.4
  'last_comments' => 'Останній коментар.<br />Натисніть тут, щоб побачити всі коментарі', //cpg1.4
  'notify_admin_email_body' => 'Новий користувач "%s" зареєструвався у вашій галереї',
  'pic_count' => 'Фото долучено', //cpg1.4
  'notify_admin_request_email_subject' => '%s - прохання про реєстрацію', //cpg1.4
  'thank_you_admin_activation' => 'Дякуємо.<br /><br />Ваше прохання про реєстрацію було надіслано адміністратору. Після затвердження ви отримаєте листа.', //cpg1.4
  'acct_active_admin_activation' => 'Реєстрацію затверджено і листа відправлено користувачеві.', //cpg1.4
  'notify_user_email_subject' => '%s - повідомлення про затвердження реєстрації', //cpg1.4
);

$lang_register_confirm_email = <<<EOT
Дякуємо за реєстрацію на {SITE_NAME}

Ваше ім`я  : "{USER_NAME}"
Ваш пароль: "{PASSWORD}"

Щоб активувати ваш рахунок, натисніть на посилання наведене нижче, або скопіюйте його до переглядача тенет.

<a href="{ACT_LINK}">{ACT_LINK}</a>

З повагою,

Адміністрація {SITE_NAME}

EOT;

$lang_register_approve_email = <<<EOT
Новий користувач "{USER_NAME}" зареєструвався у вашій галереї.

Для того, щоб активувати його реєстрацію, натисніть на посилання наведене нижче, або скопіюйте його до переглядача тенет.

<a href="{ACT_LINK}">{ACT_LINK}</a>

З повагою,
Ваша галерея

EOT;

$lang_register_activated_email = <<<EOT
Вашу реєстрацію було затверджено

Тепер ви можете увійти в галерею <a href="{SITE_LINK}">{SITE_LINK}</a> під іменем  "{USER_NAME}"

З повагою,

Адміністрація {SITE_NAME}

EOT;
}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
  'title' => 'Перевірка коментарів',
  'no_comment' => 'Тут немає коментарів для перевірки',
  'n_comm_del' => '%s коментарів видалено',
  'n_comm_disp' => 'Кількість коментарів для показу',
  'see_prev' => 'Переглянути попередній',
  'see_next' => 'Переглянути наступний',
  'del_comm' => 'Видалити вибрані коментарі',
  'user_name' => 'Ім`я', //cpg1.4
  'date' => 'Дата', //cpg1.4
  'comment' => 'Коментар', //cpg1.4
  'file' => 'Фото', //cpg1.4
  'name_a' => 'Ім`я користувача за зростанням', //cpg1.4
  'name_d' => 'Ім`я користувача за спаданням', //cpg1.4
  'date_a' => 'Дата за зростанням', //cpg1.4
  'date_d' => 'Дата за спаданням', //cpg1.4
  'comment_a' => 'Коментар за зростанням', //cpg1.4
  'comment_d' => 'Коментар за спаданням', //cpg1.4
  'file_a' => 'Фото за зростанням', //cpg1.4
  'file_d' => 'Фото за спаданням', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File search.php                                                           //
// ------------------------------------------------------------------------- //


if (defined('SEARCH_PHP')){

$lang_search_php = array(
  'title' => 'Пошук у колекції фото', //cpg1.4
  'submit_search' => 'пошук', //cpg1.4
  'keyword_list_title' => 'Список ключових слів', //cpg1.4
  'keyword_msg' => 'Цей список не покриває всі варіанти. Він не включає слова з назв та описів фото. Спробуйте пошук по всьому тексту.',  //cpg1.4
  'edit_keywords' => 'Редагувати ключові слова', //cpg1.4
  'search in' => 'Пошук у:', //cpg1.4
  'ip_address' => 'IP адреса', //cpg1.4
  'fields' => 'Пошук у', //cpg1.4
  'age' => 'Давність', //cpg1.4
  'newer_than' => 'Новіші, ніж', //cpg1.4
  'older_than' => 'Старіші, ніж', //cpg1.4
  'days' => 'днів', //cpg1.4
  'all_words' => 'Шукати всі слова (І - AND)', //cpg1.4
  'any_words' => 'Шукати будь-яке слово (АБО - OR)', //cpg1.4
);

$lang_adv_opts = array(
  'title' => 'Назва', //cpg1.4
  'caption' => 'Напис', //cpg1.4
  'keywords' => 'Ключові слова', //cpg1.4
  'owner_name' => 'Власник', //cpg1.4
  'filename' => 'Назва файла', //cpg1.4
);

}

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
  'page_title' => 'Шукати нові фото',
  'select_dir' => 'Вибрати теку',
  'select_dir_msg' => 'Ця функція дозволяє долучати фото, що ви закачали на сайт по FTP в \'пакетному режимі\'.<br /><br />Оберіть теку з вашими фото.', //cpg1.4
  'no_pic_to_add' => 'Немає фото для долучення',
  'need_one_album' => 'Для використання цієї функції Вам потрібен щонайменше один альбом',
  'warning' => 'Увага',
  'change_perm' => 'скрипт не може записати дані до папки. Змініть права доступу на 755 чи 777 перед спробою долучити фото!',
  'target_album' => '<b>Перемістити фото з &quot;</b>%s<b>&quot; до </b>%s',
  'folder' => 'Тека',
  'image' => 'Фото',
  'album' => 'Альбом',
  'result' => 'Результат',
  'dir_ro' => 'Тільки для читання. ',
  'dir_cant_read' => 'Неможливо прочитати. ',
  'insert' => 'Долучення нових фото до галереї',
  'list_new_pic' => 'Список нових фото',
  'insert_selected' => 'Долучити вибрані фото',
  'no_pic_found' => 'Нових фото не знайдено',
  'be_patient' => 'Для долучення фото потрібно трохи часу. Зачекайте.',
  'no_album' => 'альбом не вибрано',
  'result_icon' => 'натисніть для детальнішої інформації або для перевантаження',  //cpg1.4
  'notes' =>  '<ul>'.
                          '<li><b>OK</b> : означає, що фото долучено'.
                          '<li><b>DP</b> : означає, що таке фото вже є в базі'.
                          '<li><b>PB</b> : означає, що фото не долучено. Варто перевірити  дозволи на налаштування в папках, де знаходиться фото'.
                          '<li><b>NA</b> : означає, що ви не вибрали альбому куди треба було додати фото, натисніть \'<a href="javascript:history.back(1)">назад</a>\' і виберіть альбом. Якщо у вас нема жодного альбому - <a href="albmgr.php">створіть якийсь спочатку</a></li>'.
                          '<li>Якщо \'знаки\' OK, DP, PB не з`являються, натисніть на поганому фото, щоб побачити пояснення від PHP'.
                          '<li>Якщо переглядач каже \'timeout\', натисніть кнопку \'Оновити\' (Refresh)'.
                          '</ul>',
  'select_album' => 'вибрати альбом',
  'check_all' => 'Вибрати всі',
  'uncheck_all' => 'Скасувати вибір',
  'no_folders' => 'Тека "albums" поки не містить жодних тек. Створіть хоча б одну теку в "albums" і закачайте свої файли туди. Але ви не повинні завантажувати файли ні у "userpics", ні у "edit", вони зарезервовані для HTTP закачувань і створення проміжних файлів.', //cpg1.4
   'albums_no_category' => 'Альбом без категорії', //cpg1.4 // album pulldown mod, added by frogfoot
  'personal_albums' => '* Особисті альбоми', //cpg1.4 // album pulldown mod, added by frogfoot
  'browse_batch_add' => 'Інтерфейс для перегляду (рекомендується)', //cpg1.4
  'edit_pics' => 'Редагувати фото', //cpg1.4
  'edit_properties' => 'Налаштування альбому', //cpg1.4
  'view_thumbs' => 'Перегляд слайдів', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File stat_details.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('STAT_DETAILS_PHP')) $lang_stat_details_php = array(
  'show_hide' => 'показати/заховати цю колонку', //cpg1.4
  'vote' => 'Детальніше про голосування', //cpg1.4
  'hits' => 'Детальніше про перегляди', //cpg1.4
  'stats' => 'Статистика голосування', //cpg1.4
  'sdate' => 'Дата', //cpg1.4
  'rating' => 'Рейтинг', //cpg1.4
  'search_phrase' => 'Ключова фраза', //cpg1.4
  'referer' => 'Звідки прийшли', //cpg1.4
  'browser' => 'Переглядач', //cpg1.4
  'os' => 'Операційна Система', //cpg1.4
  'ip' => 'IP', //cpg1.4
  'sort_by_xxx' => 'Сортувати за %s', //cpg1.4
  'ascending' => 'зростанням', //cpg1.4
  'descending' => 'спаданням', //cpg1.4
  'internal' => 'внутр.', //cpg1.4
  'close' => 'закрити', //cpg1.4
  'hide_internal_referers' => 'заховати внутрішні посилання', //cpg1.4
  'date_display' => 'Показ дати', //cpg1.4
  'submit' => 'зберегти / оновити', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File thumbnails.php
// ------------------------------------------------------------------------- //

// Void

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) $lang_upload_php = array(
  'title' => 'Долучити фото',
  'custom_title' => 'Налаштування форми завантаження',
  'cust_instr_1' => 'Ви можете вказати необхідну кількість полів для завантаження на сторінку. Однак вона не повинна перевищувати наступні обмеження.',
  'cust_instr_2' => 'Запит кількості полів',
  'cust_instr_3' => 'Поля для вказання файлів: %s',
  'cust_instr_4' => 'Поля для вказання URI/URL: %s',
  'cust_instr_5' => 'Поля для вказання URI/URL:',
  'cust_instr_6' => 'Поля для вказання файлів:',
  'cust_instr_7' => 'Вкажіть будь ласка кількість полів вводу кожного типу.  Потім натисніть \'Продовжити\'. ',
  'reg_instr_1' => 'Неправильна дія при створенні форми.',
  'reg_instr_2' => 'Тепер ви можете долучити файли, використовуючи наступні поля. Розмір кожного файлу, який ви хочете закачати на сервер не повинен перевищувати %s KB . ZIP файли, завантажені через поля \'Долучення файлів\' та \'Долучення URI/URL\' залишаться у стисненому вигляді.',
  'reg_instr_3' => 'Якщо ви хочете, щоб архіви розпаковувалися перед долученням, використовуйте поля вводу в області \'Долучення із розпакуванням ZIP\'.',
  'reg_instr_4' => 'Використовуючи секцію долучення URI/URL, вводьте шлях до файла у вигляді: http://www.mysite.com/images/example.jpg',
  'reg_instr_5' => 'Після заповнення форми натисніть \'Продовжити\'.',
  'reg_instr_6' => 'Долучення із розпакуванням ZIP:',
  'reg_instr_7' => 'Долучення файлів:',
  'reg_instr_8' => 'Долучення URI/URL:',
  'error_report' => 'Звіт про помилки',
  'error_instr' => 'Наступні спроби долучення завершилися невдало:',
  'file_name_url' => 'Назва файлу/URL',
  'error_message' => 'Помилка',
  'no_post' => 'Файл не вдалося завантажити через POST.',
  'forb_ext' => 'Заборонене розширення файла.',
  'exc_php_ini' => 'Перевищено макс. розмір файлу, заданий у php.ini.',
  'exc_file_size' => 'Перевищено макс. розмір файлу, заданий у налаштуваннях галереї.',
  'partial_upload' => 'Завантаження вдалося частково.',
  'no_upload' => 'Завантаження не відбулося.',
  'unknown_code' => 'Невідома помилка PHP при завантаженні.',
  'no_temp_name' => 'Не завантажено - не вдалося згенерувати назву тимчасового файлу.',
  'no_file_size' => 'Не містить даних або пошкоджений',
  'impossible' => 'Неможливо перемістити.',
  'not_image' => 'Не є малюнком або пошкоджений',
  'not_GD' => 'Тип файла не підтримується GD.',
  'pixel_allowance' => 'Висота і/або ширина долученого фото перевищує межі встановлені в налаштуваннях галереї.', //cpg1.4
  'incorrect_prefix' => 'Некоректний префікс URI/URL',
  'could_not_open_URI' => 'Не можу відкрити URI.',
  'unsafe_URI' => 'Перевірити безпечність неможливо.',
  'meta_data_failure' => 'Помилка метаданих',
  'http_401' => '401 Нема авторизації',
  'http_402' => '402 Вимагається оплата',
  'http_403' => '403 Заборонено',
  'http_404' => '404 Не знайдено',
  'http_500' => '500 Внутрішня помилка сервера',
  'http_503' => '503 Сервіс недоступний',
  'MIME_extraction_failure' => 'MIME тип не може бути визначено.',
  'MIME_type_unknown' => 'Невідомий тип MIME',
  'cant_create_write' => 'Не можу створити файл для запису.',
  'not_writable' => 'Не можу писати у файл збереження.',
  'cant_read_URI' => 'Не можу читати URI/URL',
  'cant_open_write_file' => 'Не можу відкрити файл збереження URI.',
  'cant_write_write_file' => 'Не можу писати у файл збереження URI.',
  'cant_unzip' => 'Не можу розпакувати.',
  'unknown' => 'Невідома помилка',
  'succ' => 'Успішні долучення',
  'success' => '%s долучень відбулося успішно.',
  'add' => 'Натисніть \'Вперед\' щоб додати файли до альбомів.',
  'failure' => 'Помилка закачування',
  'f_info' => 'Інформація про файл',
  'no_place' => 'Попередній файл не може бути додано.',
  'yes_place' => 'Попередній файл було успішно додано.',
  'max_fsize' => 'Максимальний  розмір файлу: %s KB',
  'album' => 'Альбом',
  'picture' => 'Фото',
  'pic_title' => 'Назва фото',
  'description' => 'Опис фото',
  'keywords' => 'Ключові слова (розділені пробілами)<br /><a href="#" onClick="return MM_openBrWindow(\'keyword_select.php\',\'selectKey\',\'width=250, height=400, scrollbars=yes,toolbar=no,status=yes,resizable=yes\')">Вибрати зі списку</a>', //cpg1.4
  'keywords_sel' =>'Виберіть ключове слово', //cpg1.4
  'err_no_alb_uploadables' => 'Перепрошую, тут немає альбому, куди б Ви могли долучити фото',
  'place_instr_1' => 'А тепер розмістіть долучені фото у альбомах.  Ви також можете ввести додаткову інформацію для кожного фото.',
  'place_instr_2' => 'Ще є фото, які потрібно розмістити. Натисніть \'Продовжити\'.',
  'process_complete' => 'Ви розмістили всі файли.',
   'albums_no_category' => 'Альбом без категорії', //cpg1.4. //album pulldown mod, added by frogfoot
  'personal_albums' => '* Особисті альбоми', //cpg1.4 //album pulldown mod, added by frogfoot
  'select_album' => 'Вибрати альбом', //cpg1.4 //album pulldown mod, added by frogfoot
  'close' => 'Закрити', //cpg1.4
  'no_keywords' => 'Нема ключового слова!', //cpg1.4
  'regenerate_dictionary' => 'Перегенерувати словник', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
  'memberlist' => 'Список користувачів', //cpg1.4
  'user_manager' => 'Керування користувачами', //cpg1.4
  'title' => 'Керування користувачами',
  'name_a' => 'Імені [зростання]',
  'name_d' => 'Імені [спадання]',
  'group_a' => 'Групі [зростання]',
  'group_d' => 'Групі [спадання]',
  'reg_a' => 'Даті реєстрації [зростання]',
  'reg_d' => 'Даті реєстрації [спадання]',
  'pic_a' => 'Кількості зображень [зростання]',
  'pic_d' => 'Кількості зображень [спадання]',
  'disku_a' => 'Використання диску [зростання]',
  'disku_d' => 'Використання диску [спадання]',
  'lv_a' => 'Останньому візиту [зростання]',
  'lv_d' => 'Останньому візиту [спадання]',
  'sort_by' => 'Сортувати користувачів по',
  'err_no_users' => 'Таблиця користувачів порожня!',
  'err_edit_self' => 'Ви не можете корегувати свій власний профіль, для цього натисніть посилання \'Профіль\'',
  'edit' => 'КОРЕГУВАТИ', //cpg1.4
  'with_selected' => 'З вибраними:', //cpg1.4
  'delete' => 'ВИДАЛИТИ', //cpg1.4
  'delete_files_no' => 'залишити публічні файли (як анонімні)', //cpg1.4
  'delete_files_yes' => 'витерти також і публічні файли', //cpg1.4
  'delete_comments_no' => 'зберегти коментарі (як анонімні)', //cpg1.4
  'delete_comments_yes' => 'витерти також і коментарі', //cpg1.4
  'activate' => 'Активувати', //cpg1.4
  'deactivate' => 'Деактивувати', //cpg1.4
  'reset_password' => 'Перевстановити пароль', //cpg1.4
  'change_primary_membergroup' => 'Змінити первинну групу', //cpg1.4
  'add_secondary_membergroup' => 'Додати до вторинної групи', //cpg1.4
  'name' => 'Ім`я користувача',
  'group' => 'Група',
  'inactive' => 'Неактивний',
  'operations' => 'Дії',
  'pictures' => 'Фото',
  'disk_space_used' => 'Дисковий простір', //cpg1.4
  'disk_space_quota' => 'Квота', //cpg1.4
  'registered_on' => 'Реєстрація', //cpg1.4
  'last_visit' => 'Останній візит',
  'u_user_on_p_pages' => '%d користувач(ів) на %d сторінці(ах)',
  'confirm_del' => 'Бажаєте видалити цього користувача? \\nДолучені ним фото та альбоми теж зникнуть.', //js-alert
  'mail' => 'ПОШТА',
  'err_unknown_user' => 'Обраний користувач не існує!',
  'modify_user' => 'Зміна користувача',
  'notes' => 'Зауваження',
  'note_list' => '<li>Якщо ви не бажаєте змінювати пароль, залиште поле "пароль" порожнім',
  'password' => 'Пароль',
  'user_active' => 'Користувач активний',
  'user_group' => 'Група',
  'user_email' => 'Email',
  'user_web_site' => 'Сайт',
  'create_new_user' => 'Створити нового користувача',
  'user_location' => 'Звідки',
  'user_interests' => 'Захоплення',
  'user_occupation' => 'Чим займаєтеся',
  'user_profile1' => '$user_profile1', //cpg1.4
  'user_profile2' => '$user_profile2', //cpg1.4
  'user_profile3' => '$user_profile3', //cpg1.4
  'user_profile4' => '$user_profile4', //cpg1.4
  'user_profile5' => '$user_profile5', //cpg1.4
  'user_profile6' => '$user_profile6', //cpg1.4
  'latest_upload' => 'Останні долучення',
  'never' => 'ніколи',
  'search' => 'Пошук користувача', //cpg1.4
  'submit' => 'ОК', //cpg1.4
  'search_submit' => 'Шукати', //cpg1.4
  'search_result' => 'Результати пошуку за: ', //cpg1.4
  'alert_no_selection' => 'Спочатку виберіть хоча б одного користувача!', //cpg1.4 //js-alert
  'password' => 'пароль', //cpg1.4
  'select_group' => 'Виберіть групу', //cpg1.4
  'groups_alb_access' => 'Регулювання доступу до альбому на рівні групи', //cpg1.4
  'album' => 'Альбом', //cpg1.4
  'category' => 'Категорія', //cpg1.4
  'modify' => 'Змінити?', //cpg1.4
  'group_no_access' => 'Ця група не має спеціальних прав доступу', //cpg1.4
  'notice' => 'Попередження', //cpg1.4
  'group_can_access' => 'Альбом(и) до яких має доступ тільки "%s"', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //

if (defined('UTIL_PHP')) {
$lang_util_desc_php = array(
'Отримати назви фото з імен файлів', //cpg1.4
'Очистити назви фото', //cpg1.4
'Перебудувати слайди та масштабовані фото', //cpg1.4
'Витерти початкову версію фото, замінивши його на змінену версію', //cpg1.4
'Витерти початкові та проміжні фото щоб звільнити місце', //cpg1.4
'Вилучити неприв`язані коментарі', //cpg1.4
'Перечитати розміри та об`єми файлів (якщо ви редагували їх вручну)', //cpg1.4
'Скидає лічильник переглядів', //cpg1.4
'Показати phpinfo', //cpg1.4
'Поновити базу даних', //cpg1.4
'Показати журнали роботи', //cpg1.4
);
$lang_util_php = array(
  'title' => 'Утиліти адміністратора (масштабування фото)',
  'what_it_does' => 'Що це дасть',
  'file' => 'Файл',
  'problem' => 'Проблема', //cpg1.4
  'status' => 'Статус', //cpg1.4
  'title_set_to' => 'встановлено назву',
  'submit_form' => 'зберегти',
  'updated_succesfully' => 'успішно збережено',
  'error_create' => 'ПОМИЛКА при створенні',
  'continue' => 'Опрацювати наступну групу фото',
  'main_success' => 'Файл %s було використано як головне зображення',
  'error_rename' => 'Помилка перейменування %s в %s',
  'error_not_found' => 'Файл %s не знайдено',
  'back' => 'на головну',
  'thumbs_wait' => 'Оновлення слайдів та зміна розмірів, прошу зачекати ...',
  'thumbs_continue_wait' => 'Продовження оновлення ескізів та зміна розмірів...',
  'titles_wait' => 'Оновлення назв, прошу зачекати ...',
  'delete_wait' => 'Видалення назв, прошу зачекати ...',
  'replace_wait' => 'Видалення оригіналів та заміна масштабованими зображеннями, прошу зачекати ...',
  'instruction' => 'Інструкції',
  'instruction_action' => 'Оберіть дію',
  'instruction_parameter' => 'Встановити параметри',
  'instruction_album' => 'Обрати альбом',
  'instruction_press' => 'Натисніть %s',
  'update' => 'Оновлення слайдів або розмірів фото',
  'update_what' => 'Що має бути оновлене',
  'update_thumb' => 'Тільки слайди',
  'update_pic' => 'Тільки зміна розмірів',
  'update_both' => 'Слайди та масштабування',
  'update_number' => 'Кількість корегованих зображень за один захід',
  'update_option' => '(Якщо у Вас проблеми з timeout, спробуйте зменшити значення цієї опції)',
  'filename_title' => 'Назва файлу? Назва зображення',
  'filename_how' => 'Як має бути змінена назва зображення',
  'filename_remove' => 'Видалити .jpg і замінити _ (підкреслення) пробілами',
  'filename_euro' => 'Змінити 2003_11_23_13_20_20.jpg на 23/11/2003 13:20',
  'filename_us' => 'Змінити 2003_11_23_13_20_20.jpg на 11/23/2003 13:20',
  'filename_time' => 'Змінити 2003_11_23_13_20_20.jpg на 13:20',
  'delete' => 'Видалити назву зображення та оригінальний розмір фото',
  'delete_title' => 'Видалити назви зображень',
  'delete_title_explanation' => 'Це знищить всі назви фото у вказаному альбомі.', //cpg1.4
  'delete_original' => 'Видалити зображення оригінального розміру',
  'delete_original_explanation' => 'Це вилучить фотографії оригінального розміру.', //cpg1.4
  'delete_intermediate' => 'Видалити проміжні (нормальні) фото.', //cpg1.4
  'delete_intermediate_explanation' => 'Це видалить проміжні (нормальні) фото.<br />Використовуйте це для звільнення дискового простору якщо ви відключили \'Створення проміжних фото\' вже тоді, коли якісь фото були в галереї.', //cpg1.4
  'delete_replace' => 'Видалити початкові зображення, замінивши їх на змінені',
  'titles_deleted' => 'Всі назви у вказаному альбомі видалено', //cpg1.4
  'deleting_intermediates' => 'Вилучаю проміжні фото...', //cpg1.4
  'searching_orphans' => 'Шукаю за неприв`язані елементами...', //cpg1.4
  'select_album' => 'Виберіть альбом',
  'delete_orphans' => 'Вилучити коментарі стертих файлів', //cpg1.4
  'delete_orphans_explanation' => 'Ця опція дозволяє витерти коментарі для фото, яких вже нема в галереї.<br />Перевіряє всі альбоми.', //cpg1.4
  'refresh_db' => 'Перечитати розміри та об`єми файлів', //cpg1.4
  'refresh_db_explanation' => 'Розміри та об`єми файлів буде перечитано. Використовуйте цю можливість якщо квоти для вас працюють неправильно або ви змінювали файли вручну.', //cpg1.4
  'reset_views' => 'Скинути лічильник переглядів', //cpg1.4
  'reset_views_explanation' => 'Встановити кількість переглядів для всіх фото вибраного альбому в нуль.', //cpg1.4
  'orphan_comment' => 'знайдено неприв`язані коментарі',
  'delete' => 'Видалити',
  'delete_all' => 'Видалити все',
  'delete_all_orphans' => 'Видалити файли, що не використовуються?', //cpg1.4
  'comment' => 'Коментар: ',
  'nonexist' => 'приєднано до файла, що не існує # ',
  'phpinfo' => 'Показати phpinfo',
  'phpinfo_explanation' => 'Містить технічну інформацію про ваш сервер.<br /> - Вас можуть попросити надати деяку інформацію з цієї сторінки коли ви звертатиметеся за допомогою щодо Coppermine.', //cpg1.4
  'update_db' => 'Поновити базу даних',
  'update_db_explanation' => 'Якщо ви міняли файли Coppermine, або поновлювалися но нової версії, не забудьте один раз запустити поновлення бази даних. Цей процес здійснить необхідні зміни до структури та вмісту бази.',
  'view_log' => 'Показати журнали роботи', //cpg1.4
  'view_log_explanation' => 'Coppermine може занотовувати різноманітні дії, які виконують його користувачі. Ви можете переглядати ці журнали, якщо ви ввімкнули ведення журналів у <a href="admin.php">налаштуваннях галереї</a>.', //cpg1.4
  'versioncheck' => 'Перевірити версії', //cpg1.4
  'versioncheck_explanation' => 'Перевірити версії всіх файлів щоб переконатися що під час попереднього поновлення всі файли було належним чином замінено.', //cpg1.4
  'bridgemanager' => 'Майстер Інтеграції', //cpg1.4
  'bridgemanager_explanation' => 'Дозволити/відключити інтеграцію Coppermine з іншою системою (напр. вашим форумом).', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File versioncheck.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('VERSIONCHECK_PHP')) $lang_versioncheck_php = array(
  'title' => 'Перевірка версій', //cpg1.4
   'what_it_does' => 'Ця сторінка призначена для користувачів, які поновлювали свою галерею. Цей скрипт перебирає всі файли на вашому сервері і намагається визначити чи вони співпадають з файлами в еталонному репозиторії на http://coppermine.sourceforge.net, показуючи які відмінності було знайдено.<br />Все, що вимагає виправлень позначається червоним кольором. Файли, позначені жовтим вимагають перегляду. Файли, позначені зеленим (або вашим типовим кольором) не потребують корекцій.<br />Натисніть на іконку допомоги для отримання детальнішої інформації.', //cpg1.4
  'online_repository_unable' => 'Не можу під`єднатися до головного репозиторія', //cpg1.4
  'online_repository_noconnect' => 'Coppermine не зміг під`єднатися до головного репозиторія. Це могло статися з двох причин:', //cpg1.4
  'online_repository_reason1' => 'головний репозиторій може зараз не працювати - перевірте чи ви можете відкрити наступну сторінку: %s - якщо ні, спробуйте пізніше.', //cpg1.4
  'online_repository_reason2' => 'PHP на вашому сервері сконфігуроване з відключеним %s (як правило це є включеним). Якщо ви адмініструєте цей сервер, включіть цю опцію в <i>php.ini</i> (або хоча б дозвольте її перекрити в %s). Якщо ж ви хоститеся в сторонньої фірми - мабуть вам доведеться змиритися з відсутністю порівняння ваших файлів з файлами головного репозиторію. Тоді ця сторінка зможе лише показати версії файлів, які було інстальовано - наявність поновлень не буде вказано.', //cpg1.4
  'online_repository_skipped' => 'Під`єднання до головного репозиторія пропущено', //cpg1.4
  'online_repository_to_local' => 'Тепер програма буде звірятися з локальними копіями файлів. Результати можуть бути неточними, якщо ви поновлювали галерею і пропустили якийсь файл при цьому. Ваші зміни до файлів не будуть враховані також.', //cpg1.4
  'local_repository_unable' => 'Не можу під`єднатися до репозиторія на вашому сервері', //cpg1.4
  'local_repository_explanation' => 'Coppermine не зміг прочитати файл %s з репозиторія на вашому сервері. Це може означати, що ви не закачали належним чином файли у ваш репозиторій. Спробуйте знову і натисніть Refresh у веб переглядачі.<br />Якщо скрипт все одно не виконується, можливо на вашому сервері відключено частину <a href="http://www.php.net/manual/en/ref.filesystem.php">функцій PHP для доступу до файлової системи</a>. В такому випадку ви не зможете використовувати цю програму взагалі.', //cpg1.4
  'coppermine_version_header' => 'Встановлена версія Coppermine', //cpg1.4
  'coppermine_version_info' => 'Ви маєте зараз встановлено: %s', //cpg1.4
  'coppermine_version_explanation' => 'Якщо насправді ви переконані, що використовуєте новішу версію, можливо, під час минулого поновлення ви забули поставити останню версію файла <i>include/init.inc.php</i>', //cpg1.4
  'version_comparison' => 'Порівняння версії', //cpg1.4
  'folder_file' => 'тека/файл', //cpg1.4
  'coppermine_version' => 'версія cpg', //cpg1.4
  'file_version' => 'версія файла', //cpg1.4
  'webcvs' => 'web svn', //cpg1.4
  'writable' => 'запис дозволено', //cpg1.4
  'not_writable' => 'запис заборонено', //cpg1.4
  'help' => 'Допомога', //cpg1.4
  'help_file_not_exist_optional1' => 'файл/тека не існує', //cpg1.4
  'help_file_not_exist_optional2' => 'Файл/тека %s не існує на вашому сервері. Хоча він і не обов`язковий, але якщо у вас виникають якісь проблеми в роботі галереї, закачайте цей файл на сервер (через FTP).', //cpg1.4
  'help_file_not_exist_mandatory1' => 'файл/тека не існує', //cpg1.4
  'help_file_not_exist_mandatory2' => 'Файл/тека %s не існує на вашому сервері. Хоча він є обов`язковим. Закачайте цей файл на сервер (через FTP).', //cpg1.4
  'help_no_local_version1' => 'Версія локального файлу невідома', //cpg1.4
  'help_no_local_version2' => 'Програмі не вдалося визначити версію локального файла - це означає, що файл є або застарілим, або ви самі вносили до нього зміни і витерли інформацію про версію із заголовка. Рекомендуємо поновити цей файл.', //cpg1.4
  'help_local_version_outdated1' => 'Локальна версія застаріла', //cpg1.4
  'help_local_version_outdated2' => 'Схоже на те, що версія цього файла відповідає старішій версії Coppermine. Оновіть також і цей файл.', //cpg1.4
  'help_local_version_na1' => 'Неможливо добути інформацію про CVS версію файла', //cpg1.4
  'help_local_version_na2' => 'Програма не може визначити CVS версію файла на вашому веб сервері. Перепишіть цей файл знову.', //cpg1.4
  'help_local_version_dev1' => 'Файл з нестабільної гілки', //cpg1.4
  'help_local_version_dev2' => 'Файл на вашому веб сервері виглядає новішим, ніж мав би бути для цієї версії Coppermine. Ви або взяли файл з нестабільної гілки (що варто робити лише якщо ви дійсно знаєте, що робите), або під час поновлення вашої галереї ви пропустили файл include/init.inc.php', //cpg1.4
  'help_not_writable1' => 'Тека недоступна для запису', //cpg1.4
  'help_not_writable2' => 'Змініть права доступу до теки %s (CHMOD) щоб надати право запису до неї і всього, що у ній є.', //cpg1.4
  'help_writable1' => 'Тека доступна для запису', //cpg1.4
  'help_writable2' => 'Тека %s є доступною для запису. Це дає зайвий ризик, оскільки Coppermine потребує лише прав читання та запуску.', //cpg1.4
  'help_writable_undetermined' => 'Coppermine не зміг визначити чи тека є доступною для запису.', //cpg1.4
  'your_file' => 'ваш файл', //cpg1.4
  'reference_file' => 'еталонний файл', //cpg1.4
  'summary' => 'Підсумок', //cpg1.4
  'total' => 'Всього перевірено файлів/тек', //cpg1.4
  'mandatory_files_missing' => 'Загублені обов`язкові файли', //cpg1.4
  'optional_files_missing' => 'Загублені необов`язкові файли', //cpg1.4
  'files_from_older_version' => 'Файли, залишені від застарілої версії Coppermine', //cpg1.4
  'file_version_outdated' => 'Застарілі файли', //cpg1.4
  'error_no_data' => 'Програмі не вдалося отримати жодної інформації. Вибачте за незручності.', //cpg1.4
  'go_to_webcvs' => 'перейти до %s', //cpg1.4
  'options' => 'Налаштування', //cpg1.4
  'show_optional_files' => 'показати необов`язкові файли/теки', //cpg1.4
  'show_mandatory_files' => 'показати обов`язкові файли', //cpg1.4
  'show_file_versions' => 'показати версії файлів', //cpg1.4
  'show_errors_only' => 'показати тільки теки/файли де є помилки', //cpg1.4
  'show_permissions' => 'показати права доступу до тек', //cpg1.4
  'show_condensed_output' => 'здійснювати концентрований вивід інформації (щоб полегшити зняття відбитків екрану)', //cpg1.4
  'coppermine_in_webroot' => 'coppermine було встановлено в корінь веб сайту', //cpg1.4
  'connect_online_repository' => 'спробувати під`єднатися до головного репозиторія', //cpg1.4
  'show_additional_information' => 'показати додаткову інформацію', //cpg1.4
  'no_webcvs_link' => 'не показувати посилання на CVS', //cpg1.4
  'stable_webcvs_link' => 'показати посилання на стабільну гілку в CVS', //cpg1.4
  'devel_webcvs_link' => 'показати посилання на гілку розробки в CVS', //cpg1.4
  'submit' => 'застосувати зміни / оновити', //cpg1.4
  'reset_to_defaults' => 'відновити типові значення', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File view_log.php  //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('VIEWLOG_PHP')) $lang_viewlog_php = array(
  'delete_all' => 'Очистити всі журнали', //cpg1.4
  'delete_this' => 'Стерти цей журнал', //cpg1.4
  'view_logs' => 'Подивитися журнали', //cpg1.4
  'no_logs' => 'Журнали ще не створено.', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File xp_publish.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('XP_PUBLISH_PHP')) {

$lang_xp_publish_client = <<<EOT
<h1> Клієнт майстра тенет-публікації XP</h1><p>Цей модуль дозволяє використання з Coppermine майстра тенет-публікації <b>Windows XP</b>.</p><p>Цей код базується на статті опублікованій
EOT;

$lang_xp_publish_required = <<<EOT
<h2>Вимоги</h2><ul><li>Windows XP яка власне має майстра публікації.</li><li>Робоча інсталяція Coppermine у якій <b>функція закачування працює належним чином.</b></li></ul><h2>Налаштування на стороні клієнта</h2><ul><li>Клацніть правою кнопкою миші на
EOT;

$lang_xp_publish_select = <<<EOT
Виберіть &quot;save target as..&quot;. Збережіть файл в себе на диску. Під час збереження файла, переконайтеся, що запропоноване ім`я файла <b>cpg_###.reg</b> (де ### відповідає числовій часовий мітці). Змініть його до відповідного формату при необхідності (залишіть номери). Після завантаження, клацніть двічі по файлу для того, щоб зареєструвати ваш сервер для майстра публікації.</li></ul>
EOT;

$lang_xp_publish_testing = <<<EOT
<h2>Перевірка</h2><ul><li>У Windows Explorer, виберіть якісь файли і виберіть <b>Publish xxx on the web</b> у панелі зліва.</li><li>Підтвердіть свій вибір. Натисніть <b>Далі</b>.</li><li>У списку сервісів, виберіть сервіс вашої галереї (він буде мати назву вашої галереї). Якщо потрібного сервісу не буде у списку, переконайтеся, що ви встановили <b>cpg_pub_wizard.reg</b> як це було описано вище.</li><li>Авторизуйтеся, якщо це буде необхідно.</li><li>Виберіть альбом куди будуть додані фото або створіть новий.</li><li>Натисніть <b>далі</b>. Почнеться закачування ваших фото.</li><li>Після завершення, переконайтеся, що фото були правильно додані в галерею.</li></ul>
EOT;

$lang_xp_publish_notes = <<<EOT
<h2>Примітки :</h2><ul><li>Після початку закачування, майстер не може показувати жодних повідомлень про помилки з сервера тому єдиний спосіб перевірити чи фото були успішно додані це зайти в галерею і подивитися безпосередньо там.</li><li>Якщо закачування відбулося невдало, включіть &quot;Режим відлагодження&quot; в налаштуваннях галереї, спробуйте закачати єдине фото і подивіться на повідомлення
EOT;

$lang_xp_publish_flood = <<<EOT
у файлі, що знаходиться в теці Coppermine на вашому сервері.</li><li>Для уникнення переповнення галереї зображеннями, долученими за допомогою цього майстра, тільки <b>адміністратори галереї</b> та <b>користувачі, що мають право мати свої альбоми</b> можуть використовувати цей засіб.</li>
EOT;


$lang_xp_publish_php = array(
  'title' => 'Coppermine - XP Майстер тенет-публікації', //cpg1.4
  'welcome' => 'Вітаємо <b>%s</b>,', //cpg1.4
  'need_login' => 'Ви повинні авторизуватися у галереї перш, ніж використовувати цю програму.<p/><p>під час входу у систему не забудьте активувати опцію <b>запам`ятати мене</b> якщо вона є доступною.', //cpg1.4
  'no_alb' => 'Нажаль, не вдається знайти альбом, у який ви маєте право додавати фото за допомогою цього майстра.', //cpg1.4
  'upload' => 'Долучити фото до існуючого альбому', //cpg1.4
  'create_new' => 'Створити новий альбом', //cpg1.4
  'album' => 'Альбом', //cpg1.4
  'category' => 'Категорія', //cpg1.4
  'new_alb_created' => 'Новий альбом &quot;<b>%s</b>&quot; було створено.', //cpg1.4
  'continue' => 'Натисніть &quot;Продовжити&quot; щоб почати закачування ваших файлів', //cpg1.4
  'link' => 'це посилання', //cpg1.4
);
}
?>
