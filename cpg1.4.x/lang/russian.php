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
**********************************************/

if (!defined('IN_COPPERMINE')) { die('Not in Coppermine...');}

// info about translators and translated language
$lang_translation_info = array(
  'lang_name_english' => 'Russian', //cpg1.4
  'lang_name_native' => 'Русский', //cpg1.4
  'lang_country_code' => 'ru', //cpg1.4
  'trans_name'=> 'Makc666',
  'trans_email' => 'makc666@yahoo.com',
  'trans_website' => 'http://makc666.com',
  'trans_date' => '2009-05-25',
);

$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('Байты', 'КБ', 'МБ');

// Day of weeks and months
$lang_day_of_week = array('Вс', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб');
$lang_month = array('Янв', 'Фев', 'Март', 'Апр', 'Май', 'Июнь', 'Июль', 'Авг', 'Сент', 'Окт', 'Нояб', 'Дек');

// Some common strings
$lang_yes = 'Да';
$lang_no  = 'Нет';
$lang_back = 'НАЗАД';
$lang_continue = 'ПРОДОЛЖИТЬ';
$lang_info = 'Информация';
$lang_error = 'Ошибка';
$lang_check_uncheck_all = 'отметить/снять выделение'; //cpg1.4

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$album_date_fmt =    '%B %d, %Y';
$lastcom_date_fmt =  '%m/%d/%y в %H:%M';
$lastup_date_fmt = '%B %d, %Y';
$register_date_fmt = '%B %d, %Y';
$lasthit_date_fmt = '%B %d, %Y в %H:%M';
$comment_date_fmt =  '%B %d, %Y в %H:%M';
$log_date_fmt = '%B %d, %Y в %H:%M'; //cpg1.4

// For the word censor
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*');

$lang_meta_album_names = array(
  'random' => 'Случайные файлы',
  'lastup' => 'Последние добавления',
  'lastalb'=> 'Последнее изменения альбомов',
  'lastcom' => 'Последние комментарии',
  'topn' => 'Часто просматриваемые',
  'toprated' => 'Лучшие по рейтингу',
  'lasthits' => 'Последние просмотренные',
  'search' => 'Результаты поиска',
  'favpics'=> 'Избранные файлы',  //cpg1.4
);

$lang_errors = array(
  'access_denied' => 'У Вас нет прав для просмотра этой страницы.',
  'perm_denied' => 'У Вас нет прав на выполнение этой операции.',
  'param_missing' => 'Скрипт вызван без требуемых параметров.',
  'non_exist_ap' => 'Выбранный альбом/фото не существует!',
  'quota_exceeded' => 'Дисковая квота превышена<br /><br />Для Вас дисковая квота составляет [quota]К, Ваши файлы сейчас занимают [space]К, добавление этого файла приведет к превышению Вашей квоты.',
  'gd_file_type_err' => 'Когда используется библиотека GD, разрешенные типы файлов только JPEG и PNG.',
  'invalid_image' => 'Изображение, которое Вы загрузили, повреждено или не может быть обработано библиотекой GD',
  'resize_failed' => 'Не могу создать миниатюру или уменьшить размер изображения.',
  'no_img_to_display' => 'Нет фото',
  'non_exist_cat' => 'Выбранная категория не существует',
  'orphan_cat' => 'У категории нет соответствующей категории верхнего уровня, запустите менеджер категорий, чтобы исправить эту проблему!',
  'directory_ro' => 'Директория \'%s\' не имеет прав на запись, файлы не могут быть удалены',
  'non_exist_comment' => 'Выбранный комментарий не существует.',
  'pic_in_invalid_album' => 'Файл находится в несуществующем альбоме (%s)!?',
  'banned' => 'В данный момент Вы забанены на данном сайте.',
  'not_with_udb' => 'Эта функция отключена в Coppermine, потому что она интегрирована с движком форума. То, что Вы пытаетесь сделать, или недоступно в данной конфигурации, или должно изменяться с помощью движка форума.',
  'offline_title' => 'Отключена',
  'offline_text' => 'Галерея в настоящее время отключена - попробуйте зайти позже',
  'ecards_empty' => 'В данный момент отсутствуют открытки занесенные в логи. Проверьте, что Вы включили лог открыток в настройках сайта!',
  'action_failed' => 'Действие не удалось. Coppermine не смог выполнить Ваш запрос.',
  'no_zip' => 'Необходимые библиотеки для обработки ZIP файлов недоступны. Пожалуйста, свяжитесь с администрацией сайта.',
  'zip_type' => 'У вас нет прав для загрузки ZIP файлов.',
  'database_query' => 'Произошла ошибка при обращении к базе данных', //cpg1.4
  'register_globals_on' => 'На вашем сервере включена опция PHP register_globals, что является плохой идеей с точки зрения безопасности. Настоятельно рекомендуется её выключить. [<a href="http://forum.coppermine-gallery.net/index.php/topic,59569.0.html" rel="external" class="external">подробнее</a>]',
);

$lang_bbcode_help_title = 'помощь по bbcode'; //cpg1.4
$lang_bbcode_help = 'Вы можете добавлять ссылки и форматирование в этом поле, использую тэги bbcode: <li>[b]Жирный[/b] =&gt; <b>Жирный</b></li><li>[i]Курсив[/i] =&gt; <i>Курсив</i></li><li>[url=http://вашсайт.ru/]Описание ссылки[/url] =&gt; <a href="http://вашсайт.ru">Описание ссылки</a></li><li>[email]пользователь@сайт.ru[/email] =&gt; <a href="mailto:пользователь@сайт.ru">пользователь@сайт.ru</a></li><li>[color=red]любой текст[/color] =&gt; <span style="color:red">любой текст</span></li><li>[img]http://coppermine-gallery.net/demo/cpg14x/images/red.gif[/img] => <img src="../images/red.gif" border="0" alt="" /></li>'; //cpg1.4

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
'home_title' => 'Перейти на домашнюю страницу',
'home_lnk' => 'Домой',
  'alb_list_title' => 'Перейти к списку альбомов',
  'alb_list_lnk' => 'Список альбомов',
  'my_gal_title' => 'В персональную галерею',
  'my_gal_lnk' => 'Моя галерея',
  'my_prof_title' => 'Перейти к своему профилю', //cpg1.4
  'my_prof_lnk' => 'Мой профиль',
  'adm_mode_title' => 'Переключиться в режим администратора',
  'adm_mode_lnk' => 'Режим администратора',
  'usr_mode_title' => 'Переключиться в режим пользователя',
  'usr_mode_lnk' => 'Режим пользователя',
  'upload_pic_title' => 'Загрузить файл в альбом',
  'upload_pic_lnk' => 'Загрузить файл',
  'register_title' => 'Создать учётную запись',
  'register_lnk' => 'Регистрация',
  'login_title' => 'Войти на сайт', //cpg1.4
  'login_lnk' => 'Вход',
  'logout_title' => 'Выйти с сайта', //cpg1.4
  'logout_lnk' => 'Выход',
  'lastup_title' => 'Показать последние добавления', //cpg1.4
  'lastup_lnk' => 'Последние добавления',
  'lastcom_title' => 'Показать последние комментарии', //cpg1.4
  'lastcom_lnk' => 'Последние комментарии',
  'topn_title' => 'Показать часто просматриваемые', //cpg1.4
  'topn_lnk' => 'Часто просматриваемые',
  'toprated_title' => 'Показать лучшие по рейтингу', //cpg1.4
  'toprated_lnk' => 'Лучшие по рейтингу',
  'search_title' => 'Поиск по сайту', //cpg1.4
  'search_lnk' => 'Поиск',
  'fav_title' => 'Перейти в Избранные', //cpg1.4
  'fav_lnk' => 'Избранные',
  'memberlist_title' => 'Показать список пользователей',
  'memberlist_lnk' => 'Пользователи',
  'faq_title' => 'Часто задаваемые вопросы о галерее &quot;Coppermine&quot;',
  'faq_lnk' => 'FAQ',
);

$lang_gallery_admin_menu = array(
  'upl_app_title' => 'Подтвердить новые закачки', //cpg1.4
  'upl_app_lnk' => 'Подтверждение закачки',
  'admin_title' => 'Перейти к настройкам сайта', //cpg1.4
  'admin_lnk' => 'Конфиг', //cpg1.4
  'albums_title' => 'Перейти к настройкам альбомов', //cpg1.4
  'albums_lnk' => 'Альбомы',
  'categories_title' => 'Перейти к настройкам категорий', //cpg1.4
  'categories_lnk' => 'Категории',
  'users_title' => 'Перейти к настройкам пользователей', //cpg1.4
  'users_lnk' => 'Пользователи',
  'groups_title' => 'Перейти к настройкам групп', //cpg1.4
  'groups_lnk' => 'Группы',
  'comments_title' => 'Просмотр всех комментариев', //cpg1.4
  'comments_lnk' => 'Просмотр комментариев',
  'searchnew_title' => 'Перейти к групповому добавлению файлов', //cpg1.4
  'searchnew_lnk' => 'Групповое добавление файлов',
  'util_title' => 'Перейти в инструменты администратора', //cpg1.4
  'util_lnk' => 'Инструменты администратора',
  'key_title' => 'Перейти к словарю ключевых слов', //cpg1.4
  'key_lnk' => 'Словарь ключевых слов', //cpg1.4
  'ban_title' => 'Перейти к блокировке пользователей', //cpg1.4
  'ban_lnk' => 'Бан пользователей',
  'db_ecard_title' => 'Просмотр созданных открыток', //cpg1.4
  'db_ecard_lnk' => 'Показать открытки',
  'pictures_title' => 'Сортировать мои изображения', //cpg1.4
  'pictures_lnk' => 'Сортировать мои изображения', //cpg1.4
  'documentation_lnk' => 'Документация', //cpg1.4
  'documentation_title' => 'Руководство по Coppermine', //cpg1.4
);

$lang_user_admin_menu = array(
  'albmgr_title' => 'Создать и упорядочить мои альбомы', //cpg1.4
  'albmgr_lnk' => 'Создать и упорядочить мои альбомы',
  'modifyalb_title' => 'Перейти к изменению моих альбомов',  //cpg1.4
  'modifyalb_lnk' => 'Изменить мои альбомы',
  'my_prof_title' => 'Перейти в личный профиль', //cpg1.4
  'my_prof_lnk' => 'Профиль',
);

$lang_cat_list = array(
  'category' => 'Категория',
  'albums' => 'Альбомы',
  'pictures' => 'Файлы',
);

$lang_album_list = array(
  'album_on_page' => 'Альбомов: %d / Страниц: %d',
);

$lang_thumb_view = array(
  'date' => 'ДАТА',
  //Sort by filename and title
  'name' => 'ИМЯ ФАЙЛА',
  'title' => 'НАЗВАНИЕ',
  'sort_da' => 'Сортировать по дате [возрастание]',
  'sort_dd' => 'Сортировать по дате [убывание]',
  'sort_na' => 'Сортировать по имени [возрастание]',
  'sort_nd' => 'Сортировать по имени [убывание]',
  'sort_ta' => 'Сортировать по названию [возрастание]',
  'sort_td' => 'Сортировать по названию [убывание]',
  'position' => 'ПОЗИЦИЯ', //cpg1.4
  'sort_pa' => 'Сортировать по позиции [возрастание]', //cpg1.4
  'sort_pd' => 'Сортировать по позиции [убывание]', //cpg1.4
  'download_zip' => 'Скачать как Zip файл',
  'pic_on_page' => 'Файлов: %d / Страниц: %d',
  'user_on_page' => '%d пользователей на %d страницах',
  'enter_alb_pass' => 'Введите пароль альбома', //cpg1.4
  'invalid_pass' => 'Неправильный пароль', //cpg1.4
  'pass' => 'Пароль', //cpg1.4
  'submit' => 'Продолжить', //cpg1.4
);

$lang_img_nav_bar = array(
  'thumb_title' => 'Вернуться на страницу с миниатюрами',
  'pic_info_title' => 'Показать/спрятать информацию о файле',
  'slideshow_title' => 'Слайд-шоу',
  'ecard_title' => 'Послать этот файл как открытку',
  'ecard_disabled' => 'Открытки отключены',
  'ecard_disabled_msg' => 'У Вас нет прав на отправку открыток', //js-alert
  'prev_title' => 'Смотреть предыдущий файл',
  'next_title' => 'Смотреть следующий файл',
  'pic_pos' => 'ФАЙЛОВ %s/%s',
  'report_title' => 'Пожаловаться модератору на этот файл', //cpg1.4
  'go_album_end' => 'Перейти в конец', //cpg1.4
  'go_album_start' => 'Вернуться в начало', //cpg1.4
  'go_back_x_items' => 'перейти назад на %s файлов', //cpg1.4
  'go_forward_x_items' => 'перейти вперед на %s файлов', //cpg1.4
);

$lang_rate_pic = array(
  'rate_this_pic' => 'Оценить этот файл ',
  'no_votes' => '(Голосов ещё нет)',
  'rating' => '(текущий рейтинг: %s / 5 - Голосов: %s)',
  'rubbish' => 'Мусор',
  'poor' => 'Плохо',
  'fair' => 'Средне',
  'good' => 'Хорошо',
  'excellent' => 'Отлично',
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
  CRITICAL_ERROR => 'Критическая ошибка',
  'file' => 'Файл: ',
  'line' => 'Строка: ',
);

$lang_display_thumbnails = array(
  'filename' => 'Файл=', //cpg1.4
  'filesize' => 'Объём=', //cpg1.4
  'dimensions' => 'Размеры=', //cpg1.4
  'date_added' => 'Дата=', //cpg1.4
);

$lang_get_pic_data = array(
  'n_comments' => 'Комментариев: %s ',
  'n_views' => 'Просмотров: %s',
  'n_votes' => '(%s голосов)',
);

$lang_cpg_debug_output = array(
  'debug_info' => 'Отладочная информация',
  'select_all' => 'Выбрать всё',
  'copy_and_paste_instructions' => 'Если Вы собираетесь просить о помощи на форумах Coppermine, скопируйте и вставьте эту отладочную информацию в Ваше сообщение вместе с сообщение об ошибке (если она есть). Убедитесь, что Вы заменили все пароли на ***, перед созданием своего сообщения. <br />Внимание: Это информационное сообщение и оно не означает, что в Вашей галерее содержится ошибка.', //cpg1.4
  'phpinfo' => 'отобразить phpinfo',
  'notices' => 'Заметки', //cpg1.4
);

$lang_language_selection = array(
  'reset_language' => 'Язык по умолчанию',
  'choose_language' => 'Выберите Ваш язык',
);

$lang_theme_selection = array(
  'reset_theme' => 'Тема по умолчанию',
  'choose_theme' => 'Выберите тему',
);

$lang_version_alert = array(
  'version_alert' => 'Неподдерживаемая версия!', //cpg1.4
  'security_alert' => 'Предупреждение об опасности!', //cpg1.4.3
  'relocate_exists' => 'Удалите файл <a href="http://coppermine-gallery.net/forum/index.php?topic=24217.0">relocate_server.php</a> с вашего сайта!',
  'no_stable_version' => 'Вы используете версию Coppermine %s (%s), которая предназначена только для продвинутых пользователей - данная версия предоставляется без поддержки и каких-либо гарантий со стороны разработчиков. Используйте её на Ваш страх и риск или установите последнюю стабильную версию, чтобы получить поддержку!', //cpg1.4
  'gallery_offline' => 'Галерея в данный момент отключена и будет доступна только Вам в качестве администратора. Не забудьте включить галерею обратно после завершения всех запланированных работ.', //cpg1.4
);

$lang_create_tabs = array(
  'previous' => 'предыдущий', //cpg1.4
  'next' => 'следующий', //cpg1.4
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
  'error_wakeup' => "Не могу включить плугин '%s'", //cpg1.4
  'error_install' => "Не могу установить плугин '%s'", //cpg1.4
  'error_uninstall' => "Не могу удалить плугин '%s'", //cpg1.4
  'error_sleep' => "Не могу отключить плугин '%s'<br />", //cpg1.4
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
  0 => 'Покидаю режим администратора...',
  1 => 'Вхожу в режим администратора...',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
  'alb_need_name' => 'Альбомы должны иметь название!', //js-alert
  'confirm_modifs' => 'Вы уверены, что хотите сделать эти изменения?', //js-alert
  'no_change' => 'Вы не сделали никаких изменений!', //js-alert
  'new_album' => 'Новый альбом',
  'confirm_delete1' => 'Вы уверены, что хотите удалить этот альбом?', //js-alert
  'confirm_delete2' => '\nВсе файлы и комментарии к ним будут утеряны!', //js-alert
  'select_first' => 'Сначала выберите альбом', //js-alert
  'alb_mrg' => 'Менеджер альбомов',
  'my_gallery' => '* Моя галерея *',
  'no_category' => '* Нет категории *',
  'delete' => 'Удалить',
  'new' => 'Новый',
  'apply_modifs' => 'Применить изменения',
  'select_category' => 'Выберите категорию',
);

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) $lang_banning_php = array(
  'title' => 'Бан пользователей', //cpg1.4
  'user_name' => 'Имя пользователя', //cpg1.4
  'ip_address' => 'IP адрес', //cpg1.4
  'expiry' => 'Истекает (пустой = навсегда)', //cpg1.4
  'edit_ban' => 'Сохранить изменения', //cpg1.4
  'delete_ban' => 'Удалить', //cpg1.4
  'add_new' => 'Добавить новый бан', //cpg1.4
  'add_ban' => 'Добавить', //cpg1.4
  'error_user' => 'Не могу найти пользователя', //cpg1.4
  'error_specify' => 'Вам нужно указать или имя пользователя, или IP адрес', //cpg1.4
  'error_ban_id' => 'Неправильный ID бана!', //cpg1.4
  'error_admin_ban' => 'Вы не можете забанить самого себя!', //cpg1.4
  'error_server_ban' => 'Вы собираетесь забанить свой личный сервер? Не могу сделать этого...', //cpg1.4
  'error_ip_forbidden' => 'Вы не можете забанить этот IP адрес - он используется только в локальных сетях!<br />Если Вы хотите разрешить бан для локальных IP адресов, измените соответствующую настройку в <a href="admin.php">Конфигурации галереи</a> (играет роль, только когда Coppermine используется в локальных сетях).', //cpg1.4
  'lookup_ip' => 'WHOIS для IP адреса', //cpg1.4
  'submit' => 'Выполнить!', //cpg1.4
  'select_date' => 'выберите дату', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File bridgemgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('BRIDGEMGR_PHP')) $lang_bridgemgr_php = array(
  'title' => 'Менеджер интеграции',
  'warning' => 'Внимание: используя этот менеджер, Вы должны понимать, что приватная информация посылается через html формы. Запускайте данный менеджер только у себя на компьютере (не на публичных компьютерах, например в интернет кафе), и убедитесь, что Вы очистили кэш браузера и временные файлы после того, как завершили Вашу работу с данным менеджером, иначе посторонние могут получить доступ к Вашим данным!',
  'back' => 'назад',
  'next' => 'дальше',
  'start_wizard' => 'Запустить менеджер интеграции',
  'finish' => 'Закончить',
  'hide_unused_fields' => 'спрятать неиспользуемые поля (рекомендуется)',
  'clear_unused_db_fields' => 'очистить неверные записи в базе данных (рекомендуется)',
  'custom_bridge_file' => 'Ваш собственный файл интеграции (если имя файла <i>myfile.inc.php</i>, введите <i>myfile</i> в данное поле)',
  'no_action_needed' => 'Нет необходимых действий на этом шаге. Нажмите \'дальше\', чтобы продолжить.',
  'reset_to_default' => 'Сбросить на значения по умолчанию',
  'choose_bbs_app' => 'выберите приложение для интеграции Coppermine с',
  'support_url' => 'Перейти за помощью для данного приложения',
  'settings_path' => 'путь используемый Вашим приложением',
  'database_connection' => 'соединение с базой данных',
  'database_tables' => 'таблицы базы данных',
  'bbs_groups' => 'группы форумов',
  'license_number' => 'Номер лицензии',
  'license_number_explanation' => 'введите номер Вашей лицензии (если доступна)',
  'db_database_name' => 'Имя базы данных',
  'db_database_name_explanation' => 'Введите имя базы данных, используемое Вашим приложением',
  'db_hostname' => 'Сервер базы данных',
  'db_hostname_explanation' => 'Сервер, где расположена Ваша база данных mySQL, обычно &quot;localhost&quot;',
  'db_username' => 'Учетная запись пользователя базы данных',
  'db_username_explanation' => 'Имя пользователя используемое для подключения к базе данных mySQL приложения',
  'db_password' => 'Пароль базы данных',
  'db_password_explanation' => 'Пароль базы данных mySQL к учетной записи пользователя',
  'full_forum_url' => 'Ссылка форума',
  'full_forum_url_explanation' => 'Полная ссылка Вашего приложения (включаю тег http:// в начале, к примеру http://www.yourdomain.tld/forum)',
  'relative_path_of_forum_from_webroot' => 'Относительный путь форума',
  'relative_path_of_forum_from_webroot_explanation' => 'Относительный путь к Вашему форуму от корня сайта (Пример: если Ваш форум находится на http://www.yourdomain.tld/forum/, введите &quot;/forum/&quot; в данное поле)',
  'relative_path_to_config_file' => 'Относительный путь к файлу конфигурации Вашего форума',
  'relative_path_to_config_file_explanation' => 'Относительный путь к Вашему форуму, исходя из папки Coppermine (например &quot;../forum/&quot; если Ваш форум находится по адресу http://www.yourdomain.tld/forum/ и Coppermine галерея по адресу http://www.yourdomain.tld/gallery/)',
  'cookie_prefix' => 'Префикс Cookie',
  'cookie_prefix_explanation' => 'Тут должно быть имя cookie Вашего форума',
  'table_prefix' => 'Префикс таблицы',
  'table_prefix_explanation' => 'Должен совпадать с префиксом, который Вы выбрали во время установки Вашего форума.',
  'user_table' => 'Таблица пользователей',
  'user_table_explanation' => '(обычно подходит значение по умолчанию, если только установка Вашего форума не является стандартной)',
  'session_table' => 'Таблица сессии',
  'session_table_explanation' => '(обычно подходит значение по умолчанию, если только установка Вашего форума не является стандартной)',
  'group_table' => 'Таблица группы',
  'group_table_explanation' => '(обычно подходит значение по умолчанию, если только установка Вашего форума не является стандартной)',
  'group_relation_table' => 'Таблица связанных групп',
  'group_relation_table_explanation' => '(обычно подходит значение по умолчанию, если только установка Вашего форума не является стандартной)',
  'group_mapping_table' => 'Таблица помеченных групп',
  'group_mapping_table_explanation' => '(обычно подходит значение по умолчанию, если только установка Вашего форума не является стандартной)',
  'use_standard_groups' => 'Использовать стандартные группы форума',
  'use_standard_groups_explanation' => 'Использовать стандартные (встроенные) группы (рекомендуется). Аннулирует все настройки дополнительных групп на этой странице. Отключайте эту опцию, только если Вы действительно знаете, что делаете!',
  'validating_group' => 'Группа ожидающая активации',
  'validating_group_explanation' => 'ID группы на Вашем форуме, где находятся учетные записи пользователей, которые требуют активации (обычно подходит значение по умолчанию, если только установка Вашего форума не является стандартной)',
  'guest_group' => 'Группа анонимных пользователей',
  'guest_group_explanation' => 'ID группы на Вашем форуме, где находятся учетные записи гостей (анонимных пользователей) (обычно подходит значение по умолчанию, изменяйте только, если Вы знаете, что делаете)',
  'member_group' => 'Группа постоянных участников',
  'member_group_explanation' => 'ID группы на Вашем форуме, где находятся учетные записи &quot;постоянных участников&quot; (обычно подходит значение по умолчанию, изменяйте только, если Вы знаете, что делаете)',
  'admin_group' => 'Группа администраторов',
  'admin_group_explanation' => 'ID группы на Вашем форуме, где находятся учетные записи администраторов (обычно подходит значение по умолчанию, изменяйте только, если Вы знаете, что делаете)',
  'banned_group' => 'Группа забаненных пользователей',
  'banned_group_explanation' => 'ID группы на Вашем форуме, где находятся учетные записи забаненных пользователей (обычно подходит значение по умолчанию, изменяйте только, если Вы знаете, что делаете)',
  'global_moderators_group' => 'Группа модераторов',
  'global_moderators_group_explanation' => 'ID группы на Вашем форуме, где находятся учетные записи модераторов (обычно подходит значение по умолчанию, изменяйте только, если Вы знаете, что делаете)',
  'special_settings' => 'Специфические настройки форума',
  'logout_flag' => 'версия phpBB (тип выхода)',
  'logout_flag_explanation' => 'Какая у Вас версия форума (данная настройка определяет механизм осуществления выхода с форума)',
  'use_post_based_groups' => 'Использовать группы, основанные на постах пользователей?',
  'logout_flag_yes' => '2.0.5 или выше',
  'logout_flag_no' => '2.0.4 или ниже',
  'use_post_based_groups_explanation' => 'Должны ли использоваться группы с форума, которые определяются количеством постов, набранных пользователями (позволяет частичное управление группами) или только группы по умолчанию (делает администрирование легче, рекомендуется). Также, Вы можете изменить данную настройку позже.',
  'use_post_based_groups_yes' => 'да',
  'use_post_based_groups_no' => 'нет',
  'error_title' => 'Вы должны исправить данные ошибки, прежде чем продолжить. Перейдите на предыдущую страницу.',
  'error_specify_bbs' => 'Вы должны указать, с каким приложением Вы хотите интегрировать Ваш Coppermine.',
  'error_no_blank_name' => 'Вы не можете оставить имя файла Вашей собственной интеграции пустым.',
  'error_no_special_chars' => 'Имя файла интеграции недолжно содержать никаких специальных символов кроме подчеркивания (_) и черты (-)!',
  'error_bridge_file_not_exist' => 'Файл интеграции %s отсутствует на сервере. Проверьте, действительно ли Вы загрузили его.',
  'finalize' => 'включить/выключить интеграцию',
  'finalize_explanation' => 'Настройки, которые Вы указали, были записаны в базу данных, но интеграция не была включена. Вы можете включать/выключать интеграцию позже в любое время. Убедитесь, что Вы не забудете имя учетной записи администратора и её пароль от самой галереи Coppermine, он может потребоваться Вам позже, чтобы вносить нужные изменения. Если что-то пошло не так, перейдите %s и отключите интеграцию, использую Вашу учетную запись администратора основной галереи (обычно ту, что Вы указали во время установки Coppermine галереи).',
  'your_bridge_settings' => 'Ваши настройки интеграции',
  'title_enable' => 'Включить интеграцию с %s',
  'bridge_enable_yes' => 'включить',
  'bridge_enable_no' => 'выключить',
  'error_must_not_be_empty' => 'не должно быть пустым',
  'error_either_be' => 'должно быть или %s, или %s',
  'error_folder_not_exist' => '%s не существует. Исправьте значение введенное для %s',
  'error_cookie_not_readible' => 'Coppermine не может прочитать cookie с именем %s. Исправьте значение, которое Вы ввели для %s или перейдите в администраторскую панель Вашего приложения и убедитесь, что путь cookie доступен для чтения Coppermine.',
  'error_mandatory_field_empty' => 'Вы не можете оставить поля %s пустыми - заполните их правильными значениями.',
  'error_no_trailing_slash' => 'Недолжно быть слеша в поле %s.',
  'error_trailing_slash' => 'Должен быть слеш в поле %s.',
  'error_db_connect' => 'Не могу подключиться к базе данных mySQL с указанными Вами данными. Вот что сообщает mySQL:',
  'error_db_name' => 'Coppermine не смог установить соединение, он не смог найти базу данных %s. Убедитесь, что Вы указали %s правильно. Вот что сообщает mySQL:',
  'error_prefix_and_table' => '%s и ',
  'error_db_table' => 'Не могу найти таблицу %s. Убедитесь, что Вы указали %s правильно.',
  'recovery_title' => 'Менеджер интеграции: экстренное восстановление',
  'recovery_explanation' => 'Если Вы пришли сюда, чтобы управлять интеграцией Coppermine галереи, Вы должны сначала войти в галерею в качестве администратора. Если Вы не можете войти, потому что интеграция не работает так, как ожидалось, Вы можете отключить интеграцию на этой странице. Ввод Вашего имя пользователя и пароля не позволит войти Вам в систему, он лишь отключить интеграцию. Обратитесь к документации за подробностями.',
  'username' => 'Имя пользователя',
  'password' => 'Пароль',
  'disable_submit' => 'выполнить',
  'recovery_success_title' => 'Авторизация прошла успешно',
  'recovery_success_content' => 'Вы успешно отключили интеграцию. Ваша галерея Coppermine теперь работает в независимом режиме.',
  'recovery_success_advice_login' => 'Войдите в галерею в качестве администратора, чтобы изменить настройки Вашей интеграции и/или включить интеграцию снова.',
  'goto_login' => 'Перейти на страницу входа',
  'goto_bridgemgr' => 'Перейти к менеджеру интеграции',
  'recovery_failure_title' => 'Авторизация провалилась',
  'recovery_failure_content' => 'Вы указали неверные данный авторизации. Вы должны указать данные учетной записи администратора Вашей независимой версии галереи (обычно данные учетной записи, которые Вы указывали во время установки Coppermine).',
  'try_again' => 'попытайтесь снова',
  'recovery_wait_title' => 'Время ожидания ещё не прошло',
  'recovery_wait_content' => 'Из соображений безопасности данный скрипт не позволяет повторять неудавшуюся авторизацию через такой короткий промежуток времени, Вам придется подождать некоторое время, пока Вам снова не разрешать попытаться произвести авторизацию.',
  'wait' => 'подождите',
  'create_redir_file' => 'Создать файл перенаправления (рекомендуется)',
  'create_redir_file_explanation' => 'Чтобы перенаправлять пользователей после того как они вошли на Ваш форум, Вам нужно создать файл перенаправления в папке Вашего форума. Когда данная опция отмечена, менеджер интеграции попытается создаться данный файл для Вас или предоставит Вам готовый код данного файла, чтобы Вы могли создать его вручную.',
  'browse' => 'просмотр',
);

// ------------------------------------------------------------------------- //
// File calendar.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('CALENDAR_PHP')) $lang_calendar_php = array(
  'title' => 'Календарь', //cpg1.4
  'close' => 'закрыть', //cpg1.4
  'clear_date' => 'очистить дату', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
  'miss_param' => 'Параметры, требуемые для выполнения операции \'%s\', не предоставлены!',
  'unknown_cat' => 'Выбранная категория не существует в базе',
  'usergal_cat_ro' => 'Категория альбомов пользователей не может быть удалена!',
  'manage_cat' => 'Управление категориями',
  'confirm_delete' => 'Вы уверены, что хотите УДАЛИТЬ эту категорию?', //js-alert
  'category' => 'Категория',
  'operations' => 'Операции',
  'move_into' => 'Перенести в',
  'update_create' => 'Обновить/Создать категорию',
  'parent_cat' => 'Категория верхнего уровня',
  'cat_title' => 'Название категории',
  'cat_thumb' => 'Миниатюра категории',
  'cat_desc' => 'Описание категории',
  'categories_alpha_sort' => 'Сортировать категории по алфавиту (вместо выбранного порядка сортировки)', //cpg1.4
  'save_cfg' => 'Сохранить конфигурацию', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File admin.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('ADMIN_PHP')) $lang_admin_php = array(
  'title' => 'Конфигурация галереи', //cpg1.4
  'manage_exif' => 'Управлять отображением Exif информации', //cpg1.4
  'manage_plugins' => 'Управлять плугинами', //cpg1.4
  'manage_keyword' => 'Управлять ключевыми словами', //cpg1.4
  'restore_cfg' => 'Восстановить настройки по умолчанию',
  'save_cfg' => 'Сохранить новую конфигурацию',
  'notes' => 'Заметки',
  'info' => 'Информация',
  'upd_success' => 'Конфигурация галереи была обновлена',
  'restore_success' => 'Настройки галереи по умолчанию были восстановлены',
  'name_a' => 'Имя [возрастание]',
  'name_d' => 'Имя [убывание]',
  'title_a' => 'Название [возрастание]',
  'title_d' => 'Название [убывание]',
  'date_a' => 'Дата [возрастание]',
  'date_d' => 'Дата [убывание]',
  'pos_a' => 'Позиция [возрастание]', //cpg1.4
  'pos_d' => 'Позиция [убывание]', //cpg1.4
  'th_any' => 'Макс. размер',
  'th_ht' => 'Высота',
  'th_wd' => 'Ширина',
  'label' => 'описание',
  'item' => 'флаг',
  'debug_everyone' => 'Всем',
  'debug_admin' => 'Только админы',
  'no_logs'=> 'Выключен', //cpg1.4
  'log_normal'=> 'Стандартный', //cpg1.4
  'log_all' => 'Все', //cpg1.4
  'view_logs' => 'Просмотр логов', //cpg1.4
  'click_expand' => 'кликните на секцию, чтобы развернуть', //cpg1.4
  'expand_all' => 'Развернуть все', //cpg1.4
  'notice1' => '(*) Эти настройки недолжны изменяться, если у Вас уже есть файлы в базе данных.', //cpg1.4 - (relocated)
  'notice2' => '(**) Когда изменяете эти настройки, то будут затронуты файлы, добавленные после данного изменения, поэтому не рекомендуется изменять эти настройки, если у Вас уже есть файлы в галерее. Несмотря на это Вы можете применить изменения к существующим файлам с помощью &quot;<a href="util.php">Инструмент администратора</a>&quot;.', //cpg1.4 - (relocated)
  'notice3' => '(***) Все лог файлы ведутся на английском языке.', //cpg1.4 - (relocated)
  'bbs_disabled' => 'Функция недоступна, когда используется интеграция', //cpg1.4
  'auto_resize_everyone' => 'Все', //cpg1.4
  'auto_resize_user' => 'Только пользователи', //cpg1.4
  'ascending' => 'возрастание', //cpg1.4
  'descending' => 'убывание', //cpg1.4
);

if (defined('ADMIN_PHP')) $lang_admin_data = array(
  'Общий настройки',
  array('Название галереи', 'gallery_name', 0, 'f=index.htm&amp;as=admin_general_name&amp;ae=admin_general_name_end'), //cpg1.4
  array('Описание галереи', 'gallery_description', 0, 'f=index.htm&amp;as=admin_general_description&amp;ae=admin_general_description_end'), //cpg1.4
  array('Email адрес администратора', 'gallery_admin_email', 0, 'f=index.htm&amp;as=admin_general_email&amp;ae=admin_general_email_end'), //cpg1.4
  array('Ссылка на папку Вашей галереи (никаких \'index.php\' или что-то подобного на конце ссылки)<br /><font size="-7">Ранее пункт назывался: Начальный адрес для ссылки \'Посмотреть остальные картинки!\' в открытках</font>', 'ecards_more_pic_target', 0, 'f=index.htm&amp;as=admin_general_coppermine-url&amp;ae=admin_general_coppermine-url_end'), //cpg1.4
  array('Ссылка на Вашу домашнюю страницу', 'home_target', 0, 'f=index.htm&amp;as=admin_general_home-url&amp;ae=admin_general_home-url_end'), //cpg1.4
  array('Включить ZIP-скачивание в избранном', 'enable_zipdownload', 1, 'f=index.htm&amp;as=admin_general_zip-download&amp;ae=admin_general_zip-download_end'), //cpg1.4
  array('Разница во времени относительно GMT (текущее время: ' . localised_date(-1, $comment_date_fmt) . ')','time_offset',0, 'f=index.htm&amp;as=admin_general_time-offset&amp;ae=admin_general_time-offset_end&amp;top=1'), //cpg1.4
  array('Включить шифрование паролей (нельзя отменить)','enable_encrypted_passwords',1, 'f=index.htm&amp;as=admin_general_encrypt_password_start&amp;ae=admin_general_encrypt_password_end&amp;top=1'), // cpg 1.4
  array('Включить иконки помощи (помощь доступна только на английском языке)','enable_help',9, 'f=index.htm&amp;as=admin_general_help&amp;ae=admin_general_help_end'), //cpg1.4
  array('Включить кликабельность ключевых слов в поиске','clickable_keyword_search',14, 'f=index.htm&amp;as=admin_general_keywords_start&amp;ae=admin_general_keywords_end'), //cpg1.4
  array('Включить плугины', 'enable_plugins', 12, 'f=index.htm&amp;as=admin_general_enable-plugins&amp;ae=admin_general_enable-plugins_end'),  //cpg1.4
  array('Разрешить бан локальных IP адресов', 'ban_private_ip', 1,  'f=index.htm&amp;as=admin_general_private-ip&amp;ae=admin_general_private-ip_end'), //cpg1.4
  array('Встроенный проводник в групповом добавление файлов', 'browse_batch_add', 1, 'f=index.htm&amp;as=admin_general_browsable_batch_add&amp;ae=admin_general_browsable_batch_add_end'), //cpg1.4

  'Язык &amp; Настройка кодировки',
  array('Язык', 'lang', 5, 'f=index.htm&amp;as=admin_language_language&amp;ae=admin_language_language_end'), //cpg1.4
  array('Использовать английский вариант, если фраза не найдена?', 'language_fallback', 1, 'f=index.htm&amp;as=admin_language_fallback&amp;ae=admin_language_fallback_end'), //cpg1.4
  array('Кодировка символов', 'charset', 4, 'f=index.htm&amp;as=admin_language_charset&amp;ae=admin_language_charset_end'), //cpg1.4
  array('Отображать список языков', 'language_list', 1, 'f=index.htm&amp;as=admin_language_list&amp;ae=admin_language_list_end'), //cpg1.4
  array('Отображать флаги языков', 'language_flags', 8, 'f=index.htm&amp;as=admin_language_flags&amp;ae=admin_language_flags_end&amp;top=1'), //cpg1.4
  array('Отображать &quot;Язык по умолчанию&quot; в выборе языков', 'language_reset', 1, 'f=index.htm&amp;as=admin_language_reset&amp;ae=admin_language_reset_end&amp;top=1'), //cpg1.4
  //array('Отображать предыдущий/следующий на закладках', 'previous_next_tab', 1), //cpg1.4

  'Настройки тем',
  array('Тема', 'theme', 6, 'f=index.htm&amp;as=admin_theme_theme&amp;ae=admin_theme_theme_end'), //cpg1.4
  array('Отображать список тем', 'theme_list', 1, 'f=index.htm&amp;as=admin_theme_theme_list&amp;ae=admin_theme_theme_list_end'), //cpg1.4
  array('Отображать &quot;Тема по умолчанию&quot; в выборе тем', 'theme_reset', 1, 'f=index.htm&amp;as=admin_theme_theme_reset&amp;ae=admin_theme_theme_reset_end'), //cpg1.4
  array('Отображать FAQ', 'display_faq', 1, 'f=index.htm&amp;as=admin_theme_faq&amp;ae=admin_theme_faq_end'), //cpg1.4
  array('Название дополнительной ссылки в меню', 'custom_lnk_name', 0,'f=index.htm&amp;as=admin_theme_custom_lnk_name&amp;ae=admin_theme_custom_lnk_name_end'), //cpg1.4
  array('Адрес дополнительной ссылки в меню', 'custom_lnk_url', 0,'f=index.htm&amp;as=admin_language_custom_lnk_url&amp;ae=admin_language_custom_lnk_url_end'), //cpg1.4
  array('Отображать помощь по bbcode', 'show_bbcode_help', 1, 'f=index.htm&amp;as=admin_theme_bbcode&amp;ae=admin_theme_bbcode_end&amp;top=1'), //cpg1.4
  array('Отображать иконки совместимости внизу страницы для тем, которые поддерживают XHTML и CSS','vanity_block',1, 'f=index.htm&amp;as=vanity_block&amp;ae=vanity_block_end'), //cpg1.4
  array('Путь к дополнительному файлу верхней части галереи', 'custom_header_path', 0, 'f=index.htm&amp;as=admin_theme_include_path_start&amp;ae=admin_theme_include_path_end'), //cpg1.4
  array('Путь к дополнительному файлу нижней части галереи', 'custom_footer_path', 0, 'f=index.htm&amp;as=admin_theme_include_path_start&amp;ae=admin_theme_include_path_end'), //cpg1.4

  'Отображение списка альбомов',
  array('Ширина главной таблицы (пиксели или %)', 'main_table_width', 0, 'f=index.htm&amp;as=admin_album_table-width&amp;ae=admin_album_table-width_end'), //cpg1.4
  array('Количество отображаемых уровней категорий', 'subcat_level', 0, 'f=index.htm&amp;as=admin_album_category-levels&amp;ae=admin_album_category-levels_end'), //cpg1.4
  array('Количество отображаемых альбомов', 'albums_per_page', 0, 'f=index.htm&amp;as=admin_album_number&amp;ae=admin_album_number_end'), //cpg1.4
  array('Количество колонок для списка альбомов', 'album_list_cols', 0, 'f=index.htm&amp;as=admin_album_columns&amp;ae=admin_album_columns_end'), //cpg1.4
  array('Размер миниатюр в пикселях', 'alb_list_thumb_size', 0, 'f=index.htm&amp;as=admin_album_thumbnail-size&amp;ae=admin_album_thumbnail-size_end'), //cpg1.4
  array('Содержание главной страницы', 'main_page_layout', 0, 'f=index.htm&amp;as=admin_album_list_content&amp;ae=admin_album_list_content_end'), //cpg1.4
  array('Отображать миниатюры альбомов первого уровня в категориях','first_level',1, 'f=index.htm&amp;as=admin_album_first-level_thumbs&amp;ae=admin_album_first-level_thumbs_end'), //cpg1.4
  array('Сортировать категории по алфавиту (вместо выбранного порядка сортировки)','categories_alpha_sort',1, 'f=index.htm&amp;as=admin_album_list_alphasort_start&amp;ae=admin_album_list_alphasort_end'), //cpg1.4
  array('Отображать число присоединенных файлов','link_pic_count',1, 'f=index.htm&amp;as=admin_album_linked_files_start&amp;ae=admin_album_linked_files_end'), //cpg1.4

  'Отображение миниатюр',
  array('Количество колонок на странице с миниатюрами', 'thumbcols', 0, 'f=index.htm&amp;as=admin_thumbnail_columns&amp;ae=admin_thumbnail_columns_end'), //cpg1.4
  array('Количество строк на странице с миниатюрами', 'thumbrows', 0, 'f=index.htm&amp;as=admin_thumbnail_rows&amp;ae=admin_thumbnail_rows_end'), //cpg1.4
  array('Максимальное количество отображаемых вкладок', 'max_tabs', 10, 'f=index.htm&amp;as=admin_thumbnail_tabs&amp;ae=admin_thumbnail_tabs_end'), //cpg1.4
  array('Отображать под миниатюрой описание файла (в дополнение к названию)', 'caption_in_thumbview', 1, 'f=index.htm&amp;as=admin_thumbnail_display_caption&amp;ae=admin_thumbnail_display_caption_end'), //cpg1.4
  array('Отображать под миниатюрой количество просмотров', 'views_in_thumbview', 1, 'f=index.htm&amp;as=admin_thumbnail_display_views&amp;ae=admin_thumbnail_display_views_end'), //cpg1.4
  array('Отображать под миниатюрой количество комментариев', 'display_comment_count', 1, 'f=index.htm&amp;as=admin_thumbnail_display_comments&amp;ae=admin_thumbnail_display_comments_end'), //cpg1.4
  array('Отображать под миниатюрой имя пользователя загрузившего файл', 'display_uploader', 1, 'f=index.htm&amp;as=admin_thumbnail_display_uploader&amp;ae=admin_thumbnail_display_uploader_end'), //cpg1.4
  //array('Отображать под миниатюрой имена админов загрузивших файл', 'display_admin_uploader', 1, 'f=index.htm&amp;as=admin_thumbnail_display_admin_uploader&amp;ae=admin_thumbnail_display_admin_uploader_end'), //cpg1.4
  array('Отображать под миниатюрой имя файла', 'display_filename', 1, 'f=index.htm&amp;as=admin_thumbnail_display_filename&amp;ae=admin_thumbnail_display_filename_end'), //cpg1.4
  //array('Отображать описание альбома', 'alb_desc_thumb', 1, 'f=index.htm&amp;as=admin_thumbnail_display_description&amp;ae=admin_thumbnail_display_description_end'), //cpg1.4
  array('Порядок сортировки файлов по умолчанию', 'default_sort_order', 3, 'f=index.htm&amp;as=admin_thumbnail_default_sortorder&amp;ae=admin_thumbnail_default_sortorder_end'), //cpg1.4
  array('Минимальное количество голосов для файла, чтобы он появился в списке \'Лучшие по рейтингу\'', 'min_votes_for_rating', 0, 'f=index.htm&amp;as=admin_thumbnail_minimum_votes&amp;ae=admin_thumbnail_minimum_votes_end'), //cpg1.4

  'Отображение изображений', //cpg1.4
  array('Ширина таблицы для отображения файла (пиксели или %)', 'picture_table_width', 0, 'f=index.htm&amp;as=admin_image_comment_table-width&amp;ae=admin_image_comment_table-width_end'), //cpg1.4
  array('Информация о файле видна по умолчанию', 'display_pic_info', 1, 'f=index.htm&amp;as=admin_image_comment_info_visible&amp;ae=admin_image_comment_info_visible_end'), //cpg1.4
  array('Максимальная длина описания файла', 'max_img_desc_length', 0, 'f=index.htm&amp;as=admin_image_comment_descr_length&amp;ae=admin_image_comment_descr_length_end'), //cpg1.4
  array('Максимальное количество символов в слове', 'max_com_wlength', 0, 'f=index.htm&amp;as=admin_image_comment_chars_per_word&amp;ae=admin_image_comment_chars_per_word_end'), //cpg1.4
  array('Показывать диафильм', 'display_film_strip', 1, 'f=index.htm&amp;as=admin_image_comment_filmstrip_toggle&amp;ae=admin_image_comment_filmstrip_toggle_end'), //cpg1.4
  array('Отображать имена файлов под кадрами диафильма', 'display_film_strip_filename', 1, 'f=index.htm&amp;as=admin_image_comment_display_film_strip_filename&amp;ae=admin_image_comment_display_film_strip_filename_end'), //cpg1.4
  array('Количество кадров в диафильме', 'max_film_strip_items', 0, 'f=index.htm&amp;as=admin_image_comment_filmstrip_number&amp;ae=admin_image_comment_filmstrip_number_end'), //cpg1.4
  array('Интервал слайд-шой в миллисекундах (1 секунда = 1000 миллисекунд)', 'slideshow_interval', 0, 'f=index.htm&amp;as=admin_image_comment_slideshow_interval&amp;ae=admin_image_comment_slideshow_interval_end'), //cpg1.4

  'Настройки комментариев', //cpg1.4
  array('Фильтровать плохие слова в комментариях', 'filter_bad_words', 1, 'f=index.htm&amp;as=admin_image_comment_bad_words&amp;ae=admin_image_comment_bad_words_end'), //cpg1.4
  array('Разрешить смайлы в комментариях', 'enable_smilies', 1, 'f=index.htm&amp;as=admin_image_comment_smilies&amp;ae=admin_image_comment_smilies_end'), //cpg1.4
  array('Разрешить несколько последовательных комментариев к одному файлу от одного и того же пользователя (отключить защиту от флуда)', 'disable_comment_flood_protect', 1, 'f=index.htm&amp;as=admin_image_comment_flood&amp;ae=admin_image_comment_flood_end'), //cpg1.4
  array('Максимальное количество строк в комментарии', 'max_com_lines', 0, 'f=index.htm&amp;as=admin_image_comment_lines&amp;ae=admin_image_comment_lines_end'), //cpg1.4
  array('Максимальная длина комментария', 'max_com_size', 0, 'f=index.htm&amp;as=admin_image_comment_length&amp;ae=admin_image_comment_length_end'), //cpg1.4
  array('Уведомлять админа по email о добавленных комментариях', 'email_comment_notification', 1, 'f=index.htm&amp;as=admin_image_comment_admin_notify&amp;ae=admin_image_comment_admin_notify_end'), //cpg1.4
  array('Порядок сортировки комментариев', 'comments_sort_descending', 17, 'f=index.htm&amp;as=admin_comment_sort_start&amp;ae=admin_comment_sort_end'), //cpg1.4
  array('Префикс для комментариев анонимных пользователей', 'comments_anon_pfx', 0, 'f=index.htm&amp;as=comments_anon_pfx&amp;ae=comments_anon_pfx_end'), //cpg1.4

  'Настройки файлов и миниатюр',
  array('Качество для JPEG файлов (в %)', 'jpeg_qual', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_jpeg_quality&amp;ae=admin_picture_thumbnail_jpeg_quality_end'), //cpg1.4
  array('Максимальный размер миниатюры <a href="#notice2" class="clickable_option">**</a>', 'thumb_width', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max-dimension&amp;ae=admin_picture_thumbnail_max-dimension_end'), //cpg1.4
  array('Использовать размер (ширина или высота или максимальный размер для миниатюры) <a href="#notice2" class="clickable_option">**</a>', 'thumb_use', 7, 'f=index.htm&amp;as=admin_picture_thumbnail_use-dimension&amp;ae=admin_picture_thumbnail_use-dimension_end'), //cpg1.4
  array('Создавать промежуточные изображения','make_intermediate',1, 'f=index.htm&amp;as=admin_picture_thumbnail_intermediate_toggle&amp;ae=admin_picture_thumbnail_intermediate_toggle_end'), //cpg1.4
  array('Максимальная ширина или высота для промежуточных изображений/видео (пиксели) <a href="#notice2" class="clickable_option">**</a>', 'picture_width', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_intermediate_dimension&amp;ae=admin_picture_thumbnail_intermediate_dimension_end'), //cpg1.4
  array('Максимальных размер загружаемых файлов (KB)', 'max_upl_size', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max_upload_size&amp;ae=admin_picture_thumbnail_max_upload_size_end'), //cpg1.4
  array('Максимальная ширина или высота для загруженных изображений/видео (пиксели)', 'max_upl_width_height', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max_upload_dimension&amp;ae=admin_picture_thumbnail_max_upload_dimension_end'), //cpg1.4
  array('Автоматически изменять размер изображений, которые больше чем макс. ширина или высота', 'auto_resize', 16, 'f=index.htm&amp;as=admin_picture_thumbnail_auto-resize&amp;ae=admin_picture_thumbnail_auto-resize_end'), //cpg1.4

  'Дополнительные настройки файлов и миниатюр',
  array('Пользователи могут иметь приватные альбомы (Внимание: если Вы переключите с \'Да\' на \'Нет\', текущие приватные альбомы станут публичными)', 'allow_private_albums', 1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_private_toggle&amp;ae=admin_picture_thumb_advanced_private_toggle_end'), //cpg1.4
  array('Показывать иконку приватного альбома для гостя','show_private',1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_private_icon_show&amp;ae=admin_picture_thumb_advanced_private_icon_show_end'), //cpg1.4
  array('Символы, запрещенные в именах файлов', 'forbiden_fname_char',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_filename_forbidden_chars&amp;ae=admin_picture_thumb_advanced_filename_forbidden_chars_end'), //cpg1.4
  //array('Разрешенные типы файлов для загрузки картинок', 'allowed_file_extensions',0, 'f=index.htm&amp;as=&amp;ae=_end'), //cpg1.4
  array('Разрешенные типы изображений', 'allowed_img_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_pic_extensions&amp;ae=admin_picture_thumb_advanced_pic_extensions_end'), //cpg1.4
  array('Разрешенные типы видео файлов', 'allowed_mov_types',0, 'f=index.htm&amp;as=admin_thumbs_advanced_movie&amp;ae=admin_thumbs_advanced_movie_end'), //cpg1.4
  array('Автоматический просмотр видео', 'media_autostart',1, 'f=index.htm&amp;as=admin_movie_autoplay&amp;ae=admin_movie_autoplay_end'), //cpg1.4
  array('Разрешенные типы аудио файлов', 'allowed_snd_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_audio_extensions&amp;ae=admin_picture_thumb_advanced_audio_extensions_end'), //cpg1.4
  array('Разрешенные типы документов', 'allowed_doc_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_doc_extensions&amp;ae=admin_picture_thumb_advanced_doc_extensions_end'), //cpg1.4
  array('Метод изменения размеров изображений','thumb_method',2, 'f=index.htm&amp;as=admin_picture_thumb_advanced_resize_method&amp;ae=admin_picture_thumb_advanced_resize_method_end'), //cpg1.4
  array('Путь к утилите ImageMagick \'convert\' (пример /usr/bin/X11/)', 'impath', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_im_path&amp;ae=admin_picture_thumb_advanced_im_path_end'), //cpg1.4
  //array('Разрешенные типы изображений (действительно только для ImageMagick)', 'allowed_img_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_allowed_imagetypes&amp;ae=admin_picture_thumb_advanced_allowed_imagetypes_end'), //cpg1.4
  array('Параметры командной строки для ImageMagick', 'im_options', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_im_commandline&amp;ae=admin_picture_thumb_advanced_im_commandline_end'), //cpg1.4
  array('Считывать EXIF информацию в JPEG файлах', 'read_exif_data', 13, 'f=index.htm&amp;as=admin_picture_thumb_advanced_exif&amp;ae=admin_picture_thumb_advanced_exif_end'), //cpg1.4
  array('Считывать IPTC информацию в JPEG файлах', 'read_iptc_data', 1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_iptc&amp;ae=admin_picture_thumb_advanced_iptc_end'), //cpg1.4
  array('Директория альбома <a href="#notice1" class="clickable_option">*</a>', 'fullpath', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_albums_dir&amp;ae=admin_picture_thumb_advanced_albums_dir_end'), //cpg1.4
  array('Директория для файлов пользователей <a href="#notice1" class="clickable_option">*</a>', 'userpics', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_userpics_dir&amp;ae=admin_picture_thumb_advanced_userpics_dir_end'), //cpg1.4
  array('Префикс для промежуточных изображений <a href="#notice1" class="clickable_option">*</a>', 'normal_pfx', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_intermediate_prefix&amp;ae=admin_picture_thumb_advanced_intermediate_prefix_end'), //cpg1.4
  array('Префикс для миниатюр <a href="#notice1" class="clickable_option">*</a>', 'thumb_pfx', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_thumbs_prefix&amp;ae=admin_picture_thumb_advanced_thumbs_prefix_end'), //cpg1.4
  array('Режим по умолчанию для директорий', 'default_dir_mode', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_chmod_folder&amp;ae=admin_picture_thumb_advanced_chmod_folder_end'), //cpg1.4
  array('Режим по умолчанию для файлов', 'default_file_mode', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_chmod_files&amp;ae=admin_picture_thumb_advanced_chmod_files_end'), //cpg1.4

  'Настройки пользователей',
  array('Разрешить регистрацию новых пользователей', 'allow_user_registration', 1, 'f=index.htm&amp;as=admin_allow_registration&amp;ae=admin_allow_registration_end'), //cpg1.4
  array('Разрешить анонимный доступ (гости или анонимные пользователи)', 'allow_unlogged_access', 1, 'f=index.htm&amp;as=admin_allow_unlogged_access&amp;ae=admin_allow_unlogged_access_end'), //cpg1.4
  array('Регистрация требует проверку подлинности через email', 'reg_requires_valid_email', 1, 'f=index.htm&amp;as=admin_registration_verify&amp;ae=admin_registration_verify_end'), //cpg1.4
  array('Уведомлять админа о регистрации нового пользователя по email', 'reg_notify_admin_email', 1, 'f=index.htm&amp;as=admin_registration_notify&amp;ae=admin_registration_notify_end'), //cpg1.4
  array('Активация регистрации пользователей админом', 'admin_activation', 1, 'f=index.htm&amp;as=admin_activation&amp;ae=admin_activation_end'),  //cpg1.4
  array('Разрешить двум пользователям иметь один и тот же email адрес', 'allow_duplicate_emails_addr', 1, 'f=index.htm&amp;as=admin_allow_duplicate_emails_addr&amp;ae=admin_allow_duplicate_emails_addr_end'), //cpg1.4
  array('Уведомлять админа об ожидании пользователем подтверждения загрузки', 'upl_notify_admin_email', 1, 'f=index.htm&amp;as=admin_approval_notify&amp;ae=admin_approval_notify_end'), //cpg1.4
  array('Разрешить вошедшим пользователям просматривать список пользователей', 'allow_memberlist', 1, 'f=index.htm&amp;as=admin_user_memberlist&amp;ae=admin_user_memberlist_end'), //cpg1.4
  array('Разрешить пользователям изменять их email адрес в профиле', 'allow_email_change', 1, 'f=index.htm&amp;as=admin_user_allow_email_change&amp;ae=admin_user_allow_email_change_end'), //cpg1.4
  array('Разрешить пользователям вносить изменения в их файлы в публичных галереях', 'users_can_edit_pics', 1, 'f=index.htm&amp;as=admin_user_editpics_public_start&amp;ae=admin_user_editpics_public_end'), //cpg1.4
  array('Количество неудавшихся попыток входа в галерею для получения временного бана (чтобы избежать попыток подбора паролей)', 'login_threshold', 0, 'f=index.htm&amp;as=admin_user_login_start&amp;ae=admin_user_login_end'), //cpg1.4
  array('Продолжительность временного бана (в минутах)', 'login_expiry', 0, 'f=index.htm&amp;as=admin_user_login_start&amp;ae=admin_user_login_end'), //cpg1.4
  array('Включить уведомление администратора', 'report_post', 1, 'f=index.htm&amp;as=admin_user_enable_report&amp;ae=admin_user_enable_report_end'),  //cpg1.4

// custom profile fields,  //cpg1.4
  'Дополнительные поля для профиля пользователя (оставьте пустыми, если не хотите использовать)<br />
  Используйте поле 6 для длинных описаний, к примеру, для биографии', //cpg1.4
  array('Имя поля 1', 'user_profile1_name', 0, 'f=index.htm&amp;as=admin_custom&amp;ae=admin_custom_end'), //cpg1.4
  array('Имя поля 2', 'user_profile2_name', 0), //cpg1.4
  array('Имя поля 3', 'user_profile3_name', 0), //cpg1.4
  array('Имя поля 4', 'user_profile4_name', 0), //cpg1.4
  array('Имя поля 5', 'user_profile5_name', 0), //cpg1.4
  array('Имя поля 6', 'user_profile6_name', 0), //cpg1.4

  'Дополнительные поля для описания изображений (оставьте пустыми, если не хотите использовать)',
  array('Имя поля 1', 'user_field1_name', 0, 'f=index.htm&amp;as=admin_custom_image&amp;ae=admin_custom_image_end'), //cpg1.4
  array('Имя поля 2', 'user_field2_name', 0),
  array('Имя поля 3', 'user_field3_name', 0),
  array('Имя поля 4', 'user_field4_name', 0),

  'Настройки cookie',
  array('Имя куки', 'cookie_name', 0, 'f=index.htm&amp;as=admin_cookie_name&amp;ae=admin_cookie_name_end'), //cpg1.4
  array('Путь куки', 'cookie_path', 0, 'f=index.htm&amp;as=admin_cookie_path&amp;ae=admin_cookie_path_end'), //cpg1.4

  'Настройки email (обычно ничего изменять не нужно; оставьте все поля пустыми, если не уверены в настройках)', //cpg1.4
  array('Адрес сервера SMTP (если пусто, будет использоваться sendmail)', 'smtp_host', 0, 'f=index.htm&amp;as=admin_email&amp;ae=admin_email_end'), //cpg1.4
  array('Имя пользователя для SMTP', 'smtp_username', 0), //cpg1.4
  array('Пароль для SMTP', 'smtp_password', 0), //cpg1.4

  'Логи и статистика', //cpg1.4
  array('Режим ведения логов <a href="#notice3" class="clickable_option">***</a>', 'log_mode', 11, 'f=index.htm&amp;as=admin_logging_log_mode&amp;ae=admin_logging_log_mode_end'), //cpg1.4
  array('Вести логи для открыток', 'log_ecards', 1, 'f=index.htm&amp;as=admin_general_log_ecards&amp;ae=admin_general_log_ecards_end'), //cpg1.4
  array('Вести детализированную статистику голосования','vote_details',1, 'f=index.htm&amp;as=admin_logging_votedetails&amp;ae=admin_logging_votedetails_end'), //cpg1.4
  array('Вести детализированную статистику хитов','hit_details',1, 'f=index.htm&amp;as=admin_logging_hitdetails&amp;ae=admin_logging_hitdetails_end'), //cpg1.4

  'Настройки для отладочных работ', //cpg1.4
  array('Включить режим отладки', 'debug_mode', 9, 'f=index.htm&amp;as=debug_mode&amp;ae=debug_mode_end'), //cpg1.4
  array('Отображать сообщения в режиме отладки', 'debug_notice', 1, 'f=index.htm&amp;as=admin_misc_debug_notices&amp;ae=admin_misc_debug_notices_end'), //cpg1.4
  array('Галерея отключена', 'offline', 1, 'f=index.htm&amp;as=admin_general_offline&amp;ae=admin_general_offline_end'), //cpg1.4
);


// ------------------------------------------------------------------------- //
// File db_ecard.php
// ------------------------------------------------------------------------- //

if (defined('DB_ECARD_PHP')) $lang_db_ecard_php = array(
  'title' => 'Послать открытки',
  'ecard_sender' => 'Отправитель',
  'ecard_recipient' => 'Получатель',
  'ecard_date' => 'Дата',
  'ecard_display' => 'Показать открытку',
  'ecard_name' => 'Имя',
  'ecard_email' => 'Email',
  'ecard_ip' => 'IP #',
  'ecard_ascending' => '[по возрастанию]',
  'ecard_descending' => '[по убыванию]',
  'ecard_sorted' => 'Отсортированы',
  'ecard_by_date' => 'по дате',
  'ecard_by_sender_name' => 'по имени отправителя',
  'ecard_by_sender_email' => 'по email отправителя',
  'ecard_by_sender_ip' => 'по IP отправителя',
  'ecard_by_recipient_name' => 'по имени получателя',
  'ecard_by_recipient_email' => 'по email получателя',
  'ecard_number' => 'отображаю записи от %s до %s из %s',
  'ecard_goto_page' => 'перейти на страницу',
  'ecard_records_per_page' => 'Записей на странице',
  'check_all' => 'Отметить все',
  'uncheck_all' => 'Снять отметки',
  'ecards_delete_selected' => 'Удалить выбранные открытки',
  'ecards_delete_confirm' => 'Вы уверены, что хотите удалить записи? Отметьте галкой!',
  'ecards_delete_sure' => 'Я уверен',
);


// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
  'empty_name_or_com' => 'Вы должны ввести своё имя и комментарий',
  'com_added' => 'Ваш комментарий был добавлен',
  'alb_need_title' => 'Вы должны задать название альбому!',
  'no_udp_needed' => 'Обновление не требуется.',
  'alb_updated' => 'Альбом был обновлен',
  'unknown_album' => 'Выбранный альбом не существует или у Вас нет прав добавлять в этот альбом',
  'no_pic_uploaded' => 'Ни один файл не был загружен!<br /><br />Если Вы действительно выбрали файл для закачки, проверьте, разрешает ли сервер производить закачки...',
  'err_mkdir' => 'Ошибка в создании директории %s !',
  'dest_dir_ro' => 'Указанная директория %s не имеет прав на запись!',
  'err_move' => 'Не могу перенести %s в %s !',
  'err_fsize_too_large' => 'Размер файла, который Вы загрузили, слишком большой (максимально разрешено %s x %s) !', //obsolete since cpg1.3 - consider removal in cpg1.4 once upload.php has been overhauled
  'err_imgsize_too_large' => 'Размер файла, который Вы загрузили, слишком большой (максимально разрешено %s КБ) !', //obsolete since cpg1.3 - consider removal in cpg1.4 once upload.php has been overhauled
  'err_invalid_img' => 'Файл, который Вы загрузили, не является правильным изображением!',
  'allowed_img_types' => 'Вы можете загружать только %s изображения.',
  'err_insert_pic' => 'Файл \'%s\' не может быть добавлен в альбом ',
  'upload_success' => 'Ваш файл был успешно добавлен.<br /><br />Он станет доступным после подтверждения администрацией сайта.',
  'notify_admin_email_subject' => '%s - Уведомление о загрузке файла',
  'notify_admin_email_body' => 'Было загружено изображение пользователем %s, которое трубует подтверждения. Посетите %s',
  'info' => 'Информация',
  'com_added' => 'Добавлен комментарий',
  'alb_updated' => 'Альбом обновлен',
  'err_comment_empty' => 'Ваш комментарий пуст!',
  'err_invalid_fext' => 'Разрешены только файлы с расширениями: <br /><br />%s.',
  'no_flood' => 'Простите, но Вы являетесь автором последнего комментария для данного файла.<br /><br />Отредактируйте Ваш комментарий, если Вы хотите его изменить.',
  'redirect_msg' => 'Вы перенаправляетесь.<br /><br /><br />Нажмите \'ПРОДОЛЖИТЬ\', если страница не обновится автоматически.',
  'upl_success' => 'Ваш файл был успешно добавлен',
  'email_comment_subject' => 'Добавлен комментарий в Coppermine Photo Gallery',
  'email_comment_body' => 'Кто-то разместил комментарий в Вашей галерее. Просмотрите его.',
  'album_not_selected' => 'Альбом не выбран', //cpg1.4
  'com_author_error' => 'Зарегистрированный пользователь использует это имя, войдите или используйте другое имя', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
  'caption' => 'Описание',
  'fs_pic' => 'полный размер изображения',
  'del_success' => 'успешно удалено',
  'ns_pic' => 'нормальный размер изображения',
  'err_del' => 'не может быть удалено',
  'thumb_pic' => 'миниатюра',
  'comment' => 'комментарий',
  'im_in_alb' => 'изображение в альбоме',
  'alb_del_success' => 'Альбом &laquo;%s&raquo; удален', //cpg1.4
  'alb_mgr' => 'Менеджер альбомов',
  'err_invalid_data' => 'Получена неправильная информация в \'%s\'',
  'create_alb' => 'Создаю альбом \'%s\'',
  'update_alb' => 'Обновляю альбом \'%s\' с названием \'%s\' и индексом \'%s\'',
  'del_pic' => 'Удалить файл',
  'del_alb' => 'Удалить альбом',
  'del_user' => 'Удалить пользователя',
  'err_unknown_user' => 'Выбранный пользователь не существует!',
  'err_empty_groups' => 'Отсутствует таблица группы или таблица группы пуста!', //cpg1.4
  'comment_deleted' => 'Комментарий был успешно удален',
  'npic' => 'Изображение', //cpg1.4
  'pic_mgr' => 'Менеджер изображений', //cpg1.4
  'update_pic' => 'Обновляю изображение \'%s\' с именем файла \'%s\' и индексом \'%s\'', //cpg1.4
  'username' => 'Имя пользователя', //cpg1.4
  'anonymized_comments' => '%s комментариев стали анонимными', //cpg1.4
  'anonymized_uploads' => '%s публичных загрузок стали анонимными', //cpg1.4
  'deleted_comments' => 'Удалено комментариев: %s', //cpg1.4
  'deleted_uploads' => 'Удалено публичных загрузок: %s', //cpg1.4
  'user_deleted' => 'пользователь %s удален', //cpg1.4
  'activate_user' => 'Активировать пользователя', //cpg1.4
  'user_already_active' => 'Учетная запись уже была активирована', //cpg1.4
  'activated' => 'Активирован', //cpg1.4
  'deactivate_user' => 'Деактивировать пользователя', //cpg1.4
  'user_already_inactive' => 'Учетная запись уже была деактивирована', //cpg1.4
  'deactivated' => 'Деактивирован', //cpg1.4
  'reset_password' => 'Сбросить пароль', //cpg1.4
  'password_reset' => 'Пароль сброшен для %s', //cpg1.4
  'change_group' => 'Изменить основную группу', //cpg1.4
  'change_group_to_group' => 'Изменение с %s на %s', //cpg1.4
  'add_group' => 'Добавить вторичную группу', //cpg1.4
  'add_group_to_group' => 'Добавляю пользователя %s в группу %s. Теперь он входит в основную группу %s и вторичную группу %s.', //cpg1.4
  'status' => 'Статус', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File displayecard.php
// ------------------------------------------------------------------------- //

if (defined('DISPLAYECARD_PHP')) {

$lang_displayecard_php = array(
  'invalid_data' => 'Служебная информация для открытки, которую Вы пытаетесь просмотреть, была повреждена Вашей почтовой программой. Проверьте правильность ссылки.', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File displayimage.php
// ------------------------------------------------------------------------- //

if (defined('DISPLAYIMAGE_PHP')){

$lang_display_image_php = array(
  'confirm_del' => 'Вы уверены что хотите УДАЛИТЬ этот файл?\\nКомментарии тоже будут удалены.', //js-alert
  'del_pic' => 'УДАЛИТЬ ЭТОТ ФАЙЛ',
  'size' => '%s x %s пикселей',
  'views' => '%s раз(а)',
  'slideshow' => 'Слайд-шоу',
  'stop_slideshow' => 'ОСТАНОВИТЬ СЛАЙД-ШОУ',
  'view_fs' => 'Нажмите, чтобы посмотреть в полный размер',
  'edit_pic' => 'Изменить свойства файла', //cpg1.4
  'crop_pic' => 'Обрезать и Повернуть',
  'set_player' => 'Изменить проигрыватель', //cpg1.4
);

$lang_picinfo = array(
  'title' =>'Информация о файле',
  'Filename' => 'Имя файла',
  'Album name' => 'Альбом',
  'Rating' => 'Рейтинг (голосов: %s)',
  'Keywords' => 'Ключевые слова',
  'File Size' => 'Размер файла',
  'Date Added' => 'Добавлен', //cpg1.4
  'Dimensions' => 'Размеры',
  'Displayed' => 'Просмотрен',
  'URL' => 'Ссылка', //cpg1.4
  'Make' => 'Производитель камеры', //cpg1.4
  'Model' => 'Модель', //cpg1.4
  'DateTime' => 'Дата Время', //cpg1.4
  'ISOSpeedRatings'=>'ISO', //cpg1.4
  'MaxApertureValue' => 'Макс. апертура', //cpg1.4
  'FocalLength' => 'Фокусное расстояние', //cpg1.4
  'Comment' => 'Комментарий',
  'addFav'=>'Добавить в Избранное',
  'addFavPhrase'=>'Избранные',
  'remFav'=>'Удалить из Избранного',
  'iptcTitle'=>'IPTC название',
  'iptcCopyright'=>'IPTC авторское право',
  'iptcKeywords'=>'IPTC ключевые слова',
  'iptcCategory'=>'IPTC категория',
  'iptcSubCategories'=>'IPTC под категория',
  'ColorSpace' => 'Цветовое пространство', //cpg1.4
  'ExposureProgram' => 'Режим выдержки', //cpg1.4
  'Flash' => 'Вспышка', //cpg1.4
  'MeteringMode' => 'Режим измерения', //cpg1.4
  'ExposureTime' => 'Выдержка', //cpg1.4
  'ExposureBiasValue' => 'Компенсация экспозиции', //cpg1.4
  'ImageDescription' => 'Описание изображения', //cpg1.4
  'Orientation' => 'Ориентация', //cpg1.4
  'xResolution' => 'X разрешение', //cpg1.4
  'yResolution' => 'Y разрешение', //cpg1.4
  'ResolutionUnit' => 'Единица длины', //cpg1.4
  'Software' => 'Программа', //cpg1.4
  'YCbCrPositioning' => 'Положение точки в ячейке YСbCr', //cpg1.4
  'ExifOffset' => 'сдвиг Exif', //cpg1.4
  'IFD1Offset' => 'сдвиг IFD1', //cpg1.4
  'FNumber' => 'Число диафрагмы', //cpg1.4
  'ExifVersion' => 'Версия Exif', //cpg1.4
  'DateTimeOriginal' => 'Время съемки', //cpg1.4
  'DateTimedigitized' => 'Время создания цифрового файла', //cpg1.4
  'ComponentsConfiguration' => 'Формат представления данных', //cpg1.4
  'CompressedBitsPerPixel' => 'Средняя степень компрессии JPEG', //cpg1.4
  'LightSource' => 'Источник света', //cpg1.4
  'ISOSetting' => 'Режим ISO', //cpg1.4
  'ColorMode' => 'Режим цвета', //cpg1.4
  'Quality' => 'Качество', //cpg1.4
  'ImageSharpening' => 'Резкость изображения', //cpg1.4
  'FocusMode' => 'Режим фокуса', //cpg1.4
  'FlashSetting' => 'Настройки вспышки', //cpg1.4
  'ISOSelection' => 'Установленный ISO', //cpg1.4
  'ImageAdjustment' => 'Контрастность изображения', //cpg1.4
  'Adapter' => 'Адаптер', //cpg1.4
  'ManualFocusDistance' => 'Дистанция ручного фокуса', //cpg1.4
  'DigitalZoom' => 'Цифровой зум', //cpg1.4
  'AFFocusPosition' => 'Выбор зоны фокусировки', //cpg1.4
  'Saturation' => 'Насыщенность', //cpg1.4
  'NoiseReduction' => 'Подавление шума', //cpg1.4
  'FlashPixVersion' => 'Формат FlashPix', //cpg1.4
  'ExifImageWidth' => 'Ширина изображения', //cpg1.4
  'ExifImageHeight' => 'Высота изображения', //cpg1.4
  'ExifInteroperabilityOffset' => 'Положение блока изображения', //cpg1.4
  'FileSource' => 'Источник файла', //cpg1.4
  'SceneType' => 'Тип сюжета', //cpg1.4
  'CustomerRender' => 'Обработка изображения', //cpg1.4
  'ExposureMode' => 'Режим выдержки', //cpg1.4
  'WhiteBalance' => 'Баланс белого', //cpg1.4
  'DigitalZoomRatio' => 'Коэффициент цифрового зума', //cpg1.4
  'SceneCaptureMode' => 'Режим сюжетной программы', //cpg1.4
  'GainControl' => 'Коэффициент усиления', //cpg1.4
  'Contrast' => 'Контраст', //cpg1.4 
  'Sharpness' => 'Резкость', //cpg1.4
  'ManageExifDisplay' => 'Настроить отображение Exif', //cpg1.4
  'submit' => 'Отправить', //cpg1.4
  'success' => 'Информация успешно обновлена.', //cpg1.4
  'details' => 'Детали', //cpg1.4
);

$lang_display_comments = array(
  'OK' => 'OK',
  'edit_title' => 'Изменить этот комментарий',
  'confirm_delete' => 'Вы уверены, что хотите удалить этот комментарий?', //js-alert
  'add_your_comment' => 'Добавить Ваш комментарий',
  'name'=>'Имя',
  'comment'=>'Комментарий',
  'your_name' => 'Гость',
  'report_comment_title' => 'Пожаловаться администратору на этот комментарий', //cpg1.4
);

$lang_fullsize_popup = array(
  'click_to_close' => 'Нажмите на изображение, чтобы закрыть окно',
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
  'title' => 'Послать открытку',
  'invalid_email' => '<font color="red"><b>Внимание</b></font>: неправильный формат email адреса!', //cpg1.4
  'ecard_title' => 'Для Вас есть открытка от %s',
  'error_not_image' => 'Только изображения могут быть посланы в качестве открытки.',
  'view_ecard' => 'Если открытка не отображается корректно, пройдите по этой ссылке', //cpg1.4
  'view_ecard_plaintext' => 'Чтобы просмотреть открытку, скопируйте и вставьте в Ваш браузер эту ссылку:', //cpg1.4
  'view_more_pics' => 'Посмотреть остальные картинки!', //cpg1.4
  'send_success' => 'Ваша открытка была отправлена',
  'send_failed' => 'Извините, но сервер не может отправить Вашу открытку...',
  'from' => 'От',
  'your_name' => 'Ваше имя',
  'your_email' => 'Ваш email адрес',
  'to' => 'Кому',
  'rcpt_name' => 'Имя получателя',
  'rcpt_email' => 'Email адрес получателя',
  'greetings' => 'Приветствие', //cpg1.4
  'message' => 'Сообщение', //cpg1.4
  'ecards_footer' => 'Отправлено %s с IP %s от %s (время галереи)', //cpg1.4
  'preview' => 'Предварительный просмотр открытки', //cpg1.4
  'preview_button' => 'Предварительный просмотр', //cpg1.4
  'submit_button' => 'Отправить открытку', //cpg1.4
  'preview_view_ecard' => 'Это будет дополнительная ссылка на открытку после её отправки. Ссылка не будет работать для предварительного просмотра.', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File report_file.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('REPORT_FILE_PHP') || defined('DISPLAYREPORT_PHP')) $lang_report_php =array(
  'title' => 'Сообщить администратору', //cpg1.4
  'invalid_email' => '<b>Внимание</b>: неправильный email адрес!', //cpg1.4
  'report_subject' => 'Жалоба от %s на %s в галерее', //cpg1.4
  'view_report' => 'Дополнительная ссылка, если сообщение не отображается корректно', //cpg1.4
  'view_report_plaintext' => 'Чтобы просмотреть сообщение, скопируйте и вставьте в Ваш браузер эту ссылку:', //cpg1.4
  'view_more_pics' => 'Галерея', //cpg1.4
  'send_success' => 'Ваше сообщение было отправлено', //cpg1.4
  'send_failed' => 'Извините, но сервер не может отправить Ваше сообщение...', //cpg1.4
  'from' => 'От', //cpg1.4
  'your_name' => 'Ваше имя', //cpg1.4
  'your_email' => 'Ваш email адрес', //cpg1.4
  'to' => 'Кому', //cpg1.4
  'administrator' => 'Администратор', //cpg1.4
  'subject' => 'Тема', //cpg1.4
  'comment_field_name' => 'Жалоба на комментарии "%s"', //cpg1.4
  'reason' => 'Причина', //cpg1.4
  'message' => 'Сообщение', //cpg1.4
  'report_footer' => 'Отправлено %s с IP %s от %s (время галереи)', //cpg1.4
  'obscene' => 'неприличный', //cpg1.4
  'offensive' => 'оскорбление', //cpg1.4
  'misplaced' => 'флуд/не в том месте', //cpg1.4
  'missing' => 'потерявшийся', //cpg1.4
  'issue' => 'ошибка/нельзя просмотреть', //cpg1.4
  'other' => 'другое', //cpg1.4
  'refers_to' => 'Жалоба на файл', //cpg1.4
  'reasons_list_heading' => 'причина для сообщения:', //cpg1.4
  'no_reason_given' => 'причина не указана', //cpg1.4
  'go_comment' => 'Перейти к комментарию', //cpg1.4
  'view_comment' => 'Просмотреть полный отчёт с комментарием', //cpg1.4
  'type_file' => 'файл', //cpg1.4
  'type_comment' => 'комментарий', //cpg1.4
  'invalid_data' => 'Служебная информация для сообщения, которую Вы пытаетесь просмотреть, была повреждена Вашей почтовой программой. Проверьте правильность ссылки.', //cpg1.4

);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
  'pic_info' => 'Информация',
  'album' => 'Альбом',
  'title' => 'Название',
  'filename' => 'Имя файла', //cpg1.4
  'desc' => 'Описание',
  'keywords' => 'Ключевые слова',
  'new_keyword' => 'Новое ключевое слово', //cpg1.4
  'new_keywords' => 'Найдено новое ключевое слово', //cpg1.4
  'existing_keyword' => 'Имеющееся ключевое слово', //cpg1.4
  'pic_info_str' => '%s &times; %s - %s КБ - просмотров %s - голосов %s',
  'approve' => 'Одобрить файл',
  'postpone_app' => 'Отложить одобрение',
  'del_pic' => 'Удалить файл',
  'del_all' => 'Удалить ВСЕ файлы', //cpg1.4
  'read_exif' => 'Считать EXIF данные снова',
  'reset_view_count' => 'Сбросить счетчик просмотров',
  'reset_all_view_count' => 'Сбросить ВСЕ счетчики просмотров', //cpg1.4
  'reset_votes' => 'Сбросить голоса',
  'reset_all_votes' => 'Сбросить ВСЕ голоса', //cpg1.4
  'del_comm' => 'Удалить комментарии',
  'del_all_comm' => 'Удалить ВСЕ комментарии', //cpg1.4
  'upl_approval' => 'Одобрение загрузки', //cpg1.4
  'edit_pics' => 'Изменить файлы',
  'see_next' => 'Посмотреть следующие файлы',
  'see_prev' => 'Посмотреть предыдущие файлы',
  'n_pic' => 'файлов %s',
  'n_of_pic_to_disp' => 'Количество файлов для просмотра',
  'apply' => 'Применить изменения',
  'crop_title' => 'Coppermine Редактор Изображений',
  'preview' => 'Предварительный просмотр',
  'save' => 'Сохранить изображение',
  'save_thumb' =>'Сохранить как миниатюру',
  'gallery_icon' => 'Сделать это моей иконкой', //cpg1.4
  'sel_on_img' =>'Выбор должен быть целиком расположен на изображении!', //js-alert
  'album_properties' =>'Свойства альбома', //cpg1.4
  'parent_category' =>'Родительская категория', //cpg1.4
  'thumbnail_view' =>'Отображение миниатюр', //cpg1.4
  'select_unselect' =>'выбрать всё/снять выделение', //cpg1.4
  'file_exists' => "Такой файл '%s' уже существует.", //cpg1.4
  'rename_failed' => "Ошибка переименования '%s' в '%s'.", //cpg1.4
  'src_file_missing' => "Исходный файл '%s' отсутствует.", // cpg 1.4
  'mime_conv' => "Не могу конвертировать файл из '%s' в '%s'",//cpg1.4
  'forb_ext' => 'Запрещенное расширение файла.',//cpg1.4
);

// ------------------------------------------------------------------------- //
// File faq.php
// ------------------------------------------------------------------------- //

if (defined('FAQ_PHP')) $lang_faq_php = array(
  'faq' => 'Часто Задаваемые Вопросы',
  'toc' => 'Оглавление',
  'question' => 'Вопрос: ',
  'answer' => 'Ответ: ',
);

if (defined('FAQ_PHP')) $lang_faq_data = array(
  'Основной FAQ',
  array('Почему я должен регистрироваться?', 'Регистрация может быть затребована или нет администрацией сайта. Регистрация предоставляет пользователю дополнительные возможности: загрузка файлов, свой список избранных файлов, возможность оценивать изображения, оставлять к ним комментарии и т.п.', 'allow_user_registration', '1'),
  array('Как я могу зарегистрироваться?', 'Пройдите в пункт &quot;Регистрация&quot; и заполните необходимые данные (также, если хотите, можете заполнить дополнительную информацию о себе).<br />Если Администрация требует подтверждения регистрации через email, то после заполнения Вашей информации, Вы должны получить электронное письмо на указанный при регистрации в Ваших данных email адрес с инструкциями как активизировать Вашу учётную запись на сайте. Ваша учётная запись должна быть активирована, чтобы Вы могли войти на сайт.', 'allow_user_registration', '1'), //cpg1.4
  array('Как осуществить вход?', 'Пройдите в пункт &quot;Вход&quot;, введите Ваше имя пользователя и пароль и, если хотите, отметьте &quot;Автоматически входить при каждом посещении&quot;, чтобы Вам не приходилось каждый раз заново вводить имя пользователя и пароль при входе на сайт.<br /><b>ВАЖНО: У Вас должны быть включены cookies/куки для данного сайта. И впоследствии cookies/куки с данного сайта не должны удаляться, чтобы Вы могли использовать эту возможность &quot;Автоматически входить при каждом посещении&quot;.</b>', 'offline', 0),
  array('Почему я не могу войти?', 'Вы зарегистрировались и открыли ссылку присланную вам по email?. Данная ссылка активирует Вашу учётную запись. В случае других проблем входа на сайт свяжитесь с администрацией сайта.', 'offline', 0),
  array('Что делать, если я забыл пароль?', 'Если при входе на сайт по ссылке (&quot;Вход&quot;) есть ссылка &quot;Забыли пароль?&quot;, тогда воспользуйтесь ей. В противном случае свяжитесь с администрацией сайта для получения нового пароля.', 'offline', 0),
  //array('Чтобы будет, если я изменю адрес email?', 'Просто войдите на сайт и измените Ваш email адрес через кнопку &quot;Профиль&quot;. Вы должны находиться в режиме администратора.', 'offline', 0),
  array('Как я могу добавить картинку в &quot;Избранные&quot;?', 'Кликните на изображение, затем на значок-ссылку &quot;Показать/спрятать информацию о файле&quot; (<img src="images/info.gif" width="16" height="16" border="0" alt="Показать/спрятать информацию о файле" />), прокрутите информацию об изображении вниз и выберите &quot;Добавить в Избранное&quot;.<br />Администрация может включить отображение информации о файл с самого начала, тогда вам не нужно будет нажимать этот значок-ссылку.<br /><b>ВАЖНО: У Вас должны быть включены cookies/куки для данного сайта. И впоследствии cookies/куки с данного сайта не должны удаляться, так как в них будет хранится информация о тех файлах, которые Вы добавили в избранное.</b>', 'offline', 0),
  array('Как оценить файл (рейтинг)?', 'Кликните по миниатюре, проследуйте вниз изображения и выберите желаемую оценку/рейтинг.', 'offline', 0),
  array('Как добавить комментарий к изображению?', 'Кликните по миниатюре, проследуйте вниз изображения и добавьте комментарий.', 'offline', 0),
  array('Как загрузить файл?', 'Пройдите в пункт &quot;Загрузить файл&quot;, нажмите &quot;Browse&quot;, найдите необходимый для загрузки файл, нажмите &quot;Открыть&quot; и нажмите &quot;ПРОДОЛЖИТЬ&quot;. После предварительной загрузки выберите альбом, куда Вы хотите загрузить файл, и нажмите &quot;ПРОДОЛЖИТЬ&quot;. Также при желании можете добавить название и описание.<br /><br />Допольнительно, для тех пользователей, которые используют <b>Windows XP</b>: Вы можете загружать сразу несколько файлов напрямую в Ваши приватные альбомы, используя помощник веб публикации (XP Publishing wizard).<br />Для получения необходимых инструкций и файла, для внесения нужных изменений в реестр, <a href="xp_publish.php">нажмите здесь.</a>', 'offline', 0), //cpg1.4
  array('Куда я должен загружать изображения?', 'Вы можете загружать файлы в Ваши альбомы в &quot;Моя галерея&quot;. Также Администрация можете разрешить Вам загружать файлы в один или несколько альбомов Основной Галереи.', 'offline', 0),
  array('Какие типы и размер файлов я могу загружать?', 'Какой размер и тип файлов (jpg, png, и т.д.) можно загружать решает администратор.', 'offline', 0),
  array('Как я могу создавать, переименовывать или удалять альбомы в &quot;Моя галерея&quot;?', 'Вы должны перейти в &quot;Режим администратора&quot;.<br />Пройдите в &quot;Создать / упорядочить мои альбомы&quot; и нажать &quot;Новый&quot;. Измените в списке &quot;Новый альбом&quot; на желаемое название.<br />Вы также можете переименовать любой альбом в Вашей галерее.<br />Нажмите &quot;Применить изменения&quot;.', 'allow_private_albums', 1),
  array('Как я могу изменять и ограничивать пользователей от просмотра моих альбомов?', 'Вы должны перейти в &quot;Режим администратора&quot;.<br />Пройдите в &quot;Изменить мои альбомы&quot;. На панели &quot;Обновить альбом&quot; выберите нужный альбом.<br />Теперь Вы можете изменить название, описание, миниатюру альбома. Ограничить пользователей от просмотра, оставления комментариев и оценки файлов.<br />Нажмите &quot;Обновить альбом&quot;.', 'allow_private_albums', 1),
  array('Как я могу просмотреть галереи других пользователей?', 'Перейдите в корневую часть сайта, нажмите &quot;Список альбомов&quot; и выберите &quot;Галереи пользователей&quot;.', 'allow_private_albums', 1),
  array('Что такое cookies/куки?', 'Cookies/куки - это кусок текста с данными, который посылается с сайта и сохраняется у вас на компьютере.<br />Cookies/куки обычно позволяют пользователю покидать и возвращаться на сайт без необходимости каждый раз вводить логин и пароль, плюс некоторые другие возможности.', 'offline', 0),
  array('Где я могу взять эту программу для своего сайта?', 'Coppermine - это бесплатная Мультимедийная Галерея, распространяемая по GNU GPL лицензии. В ней много разнообразных функций и она была портирована на различные платформы. Посетите <a href="http://coppermine-gallery.net/">домашнюю страницу Coppermine</a>, чтобы узнать больше или скачать данную галерею.', 'offline', 0),

  'Управление сайтом',
  array('Что такое &quot;Список альбомов&quot;?', 'При нажатии &quot;Список альбомов&quot; в той категории, в которой Вы находились в данный момент, открывается основная страница категории со ссылками на каждый альбом. Если Вы не находитесь в какой-либо категории, Вы попадете на основную страницу галереи со ссылками на категории. Миниатюры могут являться ссылками в категории.', 'offline', 0),
  array('Что такое &quot;Моя галерея&quot;?', 'Эта возможность позволяет пользователю создавать свою галерею - добавлять, удалять или изменять альбомы по своему усмотрению и загружать в них файлы.', 'allow_private_albums', 1), //cpg1.4
  array('Какая разница между &quot;Режим администратора&quot; и &quot;Режим пользователя&quot;?', 'Находясь в режиме администратора, Вы можете изменять Вашу галерею (также можете изменять галереи других пользователей, если это разрешено администратором).', 'allow_private_albums', 1),
  array('Что такое &quot;Загрузить файл&quot;?', 'При нажатии позволяет пользователю загрузить файл в галерею выбранную им или администратором сайта. Размер и тип файлов устанавливается администратором.', 'offline', 0),
  array('Что такое &quot;Последние добавления&quot;?', 'При нажатии отображает последние загруженные файлы на сайт.', 'offline', 0),
  array('Что такое &quot;Последние комментарии&quot;?', 'При нажатии отображает последние добавленные комментарии и файлы, к которым они были добавлены.', 'offline', 0),
  array('Что такое &quot;Часто просматриваемые&quot;?', 'При нажатии отображает наиболее просматриваемые файлы всеми пользователями на сайте (в независимости от того, вошли они на сайт или нет).', 'offline', 0),
  array('Что такое &quot;Лучшие по рейтингу&quot;?', 'При нажатии отображает самые высокие по рейтингу/оценке пользователей файлы. Также отображает средний рейтинг/оценку.<br />К примеру, пять пользователей оценили файл по <img src="images/rating4.gif" width="65" height="14" border="0" alt="" />: файл будет иметь рейтинг/оценку <img src="images/rating4.gif" width="65" height="14" border="0" alt="" />.<br />Или пять пользователей оценили файл от 1 до 5 (1,2,3,4,5), тогда общий рейтинг/оценка файла будет <img src="images/rating3.gif" width="65" height="14" border="0" alt="" />. 1+2+3+4+5=15 15/5=3<br />Значение рейтинга/оценки идёт от <img src="images/rating5.gif" width="65" height="14" border="0" alt="best" /> (самая лучшая) к <img src="images/rating0.gif" width="65" height="14" border="0" alt="worst" /> (самая плохая).', 'offline', 0),
  array('Что такое &quot;Избранные&quot;?', 'При нажатии отображает те файлы, которые пользователь добавил в избранное на данном компьютере.<br /><b>ВАЖНО: Так как записи об избранных файлах сохраняются в cookie/куки текущего компьютера пользователя, то на другом компьютере Вы не сможете увидеть те файлы, которые Вы добавили в избранное на первом компьютере.', 'offline', 0),
);


// ------------------------------------------------------------------------- //
// File forgot_passwd.php
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) $lang_forgot_passwd_php = array(
  'forgot_passwd' => 'Напомнить пароль',
  'err_already_logged_in' => 'Вы уже вошли в систему!',
  'enter_email' => 'Введите Ваш email адрес', //cpg1.4
  'submit' => 'Выполнить',
  'illegal_session' => 'Сессия восстановления пароля неправильная или истекла.', //cpg1.4
  'failed_sending_email' => 'Письмо с напоминанием пароля не может быть послано!',
  'email_sent' => 'Письмо с Вашим именем пользователя и новым паролем было послано на %s', //cpg1.4
  'verify_email_sent' => 'Письмо было послано на %s. Пожалуйста, проверьте Вашу почту, чтобы завершить процесс.', //cpg1.4
  'err_unk_user' => 'Выбранный пользователь не существует!',
  'account_verify_subject' => '%s - Запрос нового пароля', //cpg1.4
  'account_verify_body' => 'Вы запросили новый пароль. Если Вы хотите, чтобы Вам был послан новый пароль, пройдите по следующей ссылке:

%s', //cpg1.4
  'passwd_reset_subject' => '%s - Ваш новый пароль', //cpg1.4
  'passwd_reset_body' => 'Ваш новый пароль:
==============================
   Имя: %s
Пароль: %s
==============================

Нажмите %s, чтобы войти в галерею.', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
  'group_name' => 'Имя группы', //cpg1.4
  'permissions' => 'Разрешения', //cpg1.4
  'public_albums' => 'Загрузка в публичные альбомы', //cpg1.4
  'personal_gallery' => 'Персональная галерея', //cpg1.4
  'upload_method' => 'Метод загрузки', //cpg1.4
  'disk_quota' => 'Дисковая квота', //cpg1.4
  'rating' => 'Голосование', //cpg1.4
  'ecards' => 'Открытки', //cpg1.4
  'comments' => 'Комментарии', //cpg1.4
  'allowed' => 'Разрешено', //cpg1.4
  'approval' => 'Подтверждение', //cpg1.4
  'boxes_number' => 'Количество полей', //cpg1.4
  'variable' => 'изменяемо', //cpg1.4
  'fixed' => 'фиксировано', //cpg1.4
  'apply' => 'Применить изменения',
  'create_new_group' => 'Создать новую группу',
  'del_groups' => 'Удалить выбранные группы',
  'confirm_del' => 'Внимание, когда Вы удаляете группу, пользователи из этой группы будут автоматически переведены в группу \'Registered\'!\n\nВы хотите продолжить?', //js-alert
  'title' => 'Управлять группами',
  'num_file_upload' => 'Полей для загрузки файлов', //cpg1.4
  'num_URI_upload' => 'Полей для загрузки ссылок', //cpg1.4
  'reset_to_default' => 'Установить имя по умолчанию (%s) - рекомендуется!', //cpg1.4
  'error_group_empty' => 'Таблица группы была пустая!<br /><br />Были созданы группы по умолчанию, пожалуйста, перезагрузите эту страницу', //cpg1.4
  'explain_greyed_out_title' => 'Почему эта опция выделена серым?', //cpg1.4
  'explain_guests_greyed_out_text' => 'Вы не можете изменять свойства этой группы, потому что Вы установили опцию &quot;Разрешить анонимный доступ (гости или анонимные пользователи)&quot; в положение &quot;Нет&quot; на странице конфигурации. Все гости (члены группы %s) ничего не могут делать, даже входить в галерею; поэтому настройки группы не влияют на них.', //cpg1.4
  'explain_banned_greyed_out_text' => 'Вы не можете изменять свойства группы %s, потому что её пользователи и так ничего не могут делать.', //cpg1.4
  'group_assigned_album' => 'назначенные альбомы', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
  'welcome' => 'Добро пожаловать!',
);

$lang_album_admin_menu = array(
  'confirm_delete' => 'Вы уверены, что хотите УДАЛИТЬ этот альбом? \\nВсе файлы и комментарии также будут удалены.', //js-alert
  'delete' => 'УДАЛИТЬ',
  'modify' => 'СВОЙСТВА',
  'edit_pics' => 'РЕДАКТИРОВАТЬ ФАЙЛЫ',
);

$lang_list_categories = array(
  'home' => 'Главная',
  'stat1' => '<b>[pictures]</b> файлов в <b>[albums]</b> альбомах и <b>[cat]</b> категориях просмотренных <b>[views]</b> раз / комментариев всего <b>[comments]</b> ',
  'stat2' => '<b>[pictures]</b> файлов в <b>[albums]</b> альбомах просмотренных <b>[views]</b> раз',
  'xx_s_gallery' => '%s\'s Gallery',
  'stat3' => '<b>[pictures]</b> файлов в <b>[albums]</b> альбомах с <b>[comments]</b> комментариями просмотренных <b>[views]</b> раз',
);

$lang_list_users = array(
  'user_list' => 'Список пользователей',
  'no_user_gal' => 'Отсутствуют галереи пользователей',
  'n_albums' => 'Альбомов: %s',
  'n_pics' => 'Файлов: %s',
);

$lang_list_albums = array(
  'n_pictures' => 'Файлов: %s',
  'last_added' => '. Последний добавлен: %s',
  'n_link_pictures' => '%s прикрепленных файлов', //cpg1.4
  'total_pictures' => '%s всего файлов', //cpg1.4
);

}

// ------------------------------------------------------------------------- //
// File keywordmgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('KEYWORDMGR_PHP')) $lang_keywordmgr_php = array(
  'title' => 'Менеджер ключевых слов', //cpg1.4
  'edit' => 'редактировать', //cpg1.4
  'delete' => 'удалить', //cpg1.4
  'search' => 'искать', //cpg1.4
  'keyword_test_search' => 'искать %s в новом окне', //cpg1.4
  'keyword_del' => 'удалить ключевое слово %s', //cpg1.4
  'confirm_delete' => 'Вы уверены, что хотите удалить ключевое слово %s во всей галерее?', //cpg1.4  // js-alert
  'change_keyword' => 'изменить ключевое слово', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
  'login' => 'Вход',
  'enter_login_pswd' => 'Введите имя пользователя и пароль для входа',
  'username' => 'Имя (ник)',
  'password' => 'Пароль',
  'remember_me' => 'Автоматически входить при каждом посещении',
  'welcome' => 'Добро пожаловать, %s',
  'err_login' => 'Вы ввели неверное/неактивное имя пользователя или неверный пароль.<br />Попробуйте снова.',
  'err_already_logged_in' => 'Вы уже осуществили вход в систему!',
  'forgot_password_link' => 'Забыли пароль?',
  'cookie_warning' => 'Внимание! Ваш браузер не принимает cookies/куки', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
  'logout' => 'Выйти',
  'bye' => 'До свидания, %s',
  'err_not_loged_in' => 'Вы не осуществили вход в систему!',
);

// ------------------------------------------------------------------------- //
// File minibrowser.php  //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('MINIBROWSER_PHP')) $lang_minibrowser_php = array(
  'close' => 'закрыть', //cpg1.4
  'submit' => 'OK', //cpg1.4
  'up' => 'на один уровень вверх', //cpg1.4
  'current_path' => 'текущий путь', //cpg1.4
  'select_directory' => 'пожалуйста, выберите директорию', //cpg1.4
  'click_to_close' => 'Нажмите на изображение, чтобы закрыть окно',
);

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
  'upd_alb_n' => 'Обновление альбома -> %s',
  'general_settings' => 'Общие настройки',
  'alb_title' => 'Название альбома',
  'alb_cat' => 'Категория альбома',
  'alb_desc' => 'Описание альбома',
  'alb_keyword' => 'Ключевые слова альбома', //cpg1.4
  'alb_thumb' => 'Миниатюра альбома',
  'alb_perm' => 'Права доступа для данного альбома',
  'can_view' => 'Альбом могут просматривать',
  'can_upload' => 'Посетители могут загружать файлы',
  'can_post_comments' => 'Посетители могу делать комментарии',
  'can_rate' => 'Посетители могут голосовать',
  'user_gal' => 'Галерея пользователя',
  'no_cat' => '* Нет категории *',
  'alb_empty' => 'Альбом пуст',
  'last_uploaded' => 'Последний загруженный файл',
  'public_alb' => 'Все (публичный альбом)',
  'me_only' => 'Только я',
  'owner_only' => 'Только владелец альбома (%s)',
  'groupp_only' => 'Участники группы \'%s\'',
  'err_no_alb_to_modify' => 'Нет альбомов в базе данных, которые Вы можете изменять.',
  'update' => 'Обновить альбом',
  'reset_album' => 'Сбросить альбом', //cpg1.4
  'reset_views' => 'Сбросить счетчик просмотров на &quot;0&quot; в %s', //cpg1.4
  'reset_rating' => 'Сбросить голоса для всех файлов в %s', //cpg1.4
  'delete_comments' => 'Удалить все комментарии сделанные в %s', //cpg1.4
  'delete_files' => '%sБезвозвратно%s удалить все файлы в %s', //cpg1.4
  'views' => 'просмотры', //cpg1.4
  'votes' => 'голоса', //cpg1.4
  'comments' => 'комментарии', //cpg1.4
  'files' => 'файлы', //cpg1.4
  'submit_reset' => 'применить изменения', //cpg1.4
  'reset_views_confirm' => 'Я уверен', //cpg1.4
  'notice1' => '(*) в зависимости от настроек %sгрупп%s', //cpg1.4 //(do not translate %s!)
  'alb_password' => 'Пароль альбома', //cpg1.4
  'alb_password_hint' => 'Подсказка к паролю альбома', //cpg1.4
  'edit_files' =>'Редактировать файлы', //cpg1.4
  'parent_category' =>'Родительская категория', //cpg1.4
  'thumbnail_view' =>'Отображение миниатюр', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File phpinfo.php
// ------------------------------------------------------------------------- //

if (defined('PHPINFO_PHP')) $lang_phpinfo_php = array(
  'php_info' => 'PHP информация',
  'explanation' => 'Это страница сгенерирована функцией PHP <a href="http://www.php.net/phpinfo">phpinfo()</a> и отображается внутри Coppermine.',
  'no_link' => 'Просмотр информации phpinfo другими людьми может быть очень опасным, поэтому данная страница видима только для Вас и только в момент, когда Вы вошли в систему в качестве администратора. Передавать ссылку на эту страницу кому-либо ещё бесполезно. Они всё равно получат отказ при попытке просмотреть данную страницу.',
);

// ------------------------------------------------------------------------- //
// File picmgr.php //cpg1.4
// ------------------------------------------------------------------------- //
if (defined('PICMGR_PHP')) $lang_picmgr_php = array(
  'pic_mgr' => 'Менеджер изображений', //cpg1.4
  'select_album' => 'Выберите альбом', //cpg1.4
  'delete' => 'Удалить', //cpg1.4
  'confirm_delete1' => 'Вы уверены, что хотите удалить это изображение?', //cpg1.4
  'confirm_delete2' => '\nИзображение будет удалено навсегда.', //cpg1.4
  'apply_modifs' => 'Применить изменения', //cpg1.4
  'confirm_modifs' => 'Подтвердить изменения', //cpg1.4
  'pic_need_name' => 'Изображения должно иметь имя!', //cpg1.4
  'no_change' => 'Вы не внесли никаких изменений!', //cpg1.4
  'no_album' => '* Нет альбома *', //cpg1.4
  'explanation_header' => 'Выборочный режим сортировки, который Вы можете использовать на данной странице, будет работать, только если', //cpg1.4
  'explanation1' => 'администратор установил в настройках галереи опцию "Порядок сортировки файлов по умолчанию" в положение "Позиция [убывание]" или "Позиция [возрастание]" (настройки по умолчанию для тех пользователей, которые не выбрали режим сортировки самостоятельно)', //cpg1.4
  'explanation2' => 'пользователь выбрал "Позиция [убывание]" или "Позиция [возрастание]" на странице миниатюр (индивидуальная настройка для каждого пользователя)', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File pluginmgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('PLUGINMGR_PHP')){

$lang_pluginmgr_php = array(
  'confirm_uninstall' => 'Вы уверены, что хотите ОТКЛЮЧИТЬ этот плугин', //cpg1.4
  'confirm_delete' => 'Вы уверены, что хотите УДАЛИТЬ этот плугин', //cpg1.4
  'pmgr' => 'Менеджер плугинов', //cpg1.4
  'name' => 'Имя', //cpg1.4
  'author' => 'Автор', //cpg1.4
  'desc' => 'Описание', //cpg1.4
  'vers' => 'v', //cpg1.4
  'i_plugins' => 'Установленные плугины', //cpg1.4
  'n_plugins' => 'Не установленные плугины', //cpg1.4
  'none_installed' => 'Ничего не установлено', //cpg1.4
  'operation' => 'Операция', //cpg1.4
  'not_plugin_package' => 'Загруженный файл не является файлом плугина.', //cpg1.4
  'copy_error' => 'Произошла ошибка при копировании плугина в папку плугинов.', //cpg1.4
  'upload' => 'Загрузить', //cpg1.4
  'configure_plugin' => 'Настроить плугин', //cpg1.4
  'cleanup_plugin' => 'Очистить плугин', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
  'already_rated' => 'Простите, но Вы уже проголосовали за этот файл',
  'rate_ok' => 'Ваш голос был учтен',
  'forbidden' => 'Вы не можете голосовать за свои файлы.',
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
Хотя администраторы {SITE_NAME} стараются удалять или редактировать неприемлемую информацию как можно быстрее, все сообщения просмотреть невозможно. Таким образом Вы признаёте, что сообщения на этом сайте отражают точки зрения и мнения их авторов, а не администрации сайта (кроме сообщений, размещённых её представителями) и администрация не может быть ответственна за их содержание.<br />
<br />
Вы соглашаетесь не размещать оскорбительных, угрожающих, клеветнических, порнографических и прочих материалов, а также призывов к национальной розни, способных нарушить соответствующие законы. Попытки размещения таких материалов могут привести к Вашему немедленному отключению от сайта (при этом Ваш провайдер будет поставлен в известность). IP адреса всех сообщений сохраняются для возможности проведения такой политики. Вы соглашаетесь с тем, что администраторы {SITE_NAME} имеют право удалить, отредактировать, перенести или закрыть любую информацию в любое время по своему усмотрению. Как пользователь Вы согласны с тем, что введённая вами информация будет храниться в базе данных. Хотя эта информация не будет открыта третьим лицам без Вашего разрешения, администрация сайта не может быть ответственна за действия хакеров, которые могут привести к несанкционированному доступу к ней.<br />
<br />
Этот сайт использует cookies/куки для хранения информации на Вашем компьютере. Эти cookies/куки не содержат никакой информации из введённой вами и служат лишь для улучшения качества работы сайта.<br /><br />Ваш email адрес используется лишь для подтверждения Вашей регистрации и для высылки нового пароля, если вы забудете текущий.<br />
<br />
Нажимая 'Я согласен', Вы соглашаетесь быть ограниченными этими условиями.
EOT;

$lang_register_php = array(
  'page_title' => 'Регистрация пользователей',
  'term_cond' => 'Условия регистрации',
  'i_agree' => 'Я согласен',
  'submit' => 'Подтвердить регистрацию',
  'err_user_exists' => 'Имя (ник) пользователя, которое Вы выбрали, уже существует, пожалуйста, выберите другое',
  'err_password_mismatch' => 'Пароли не совпадают, пожалуйста, введите их ещё раз.',
  'err_uname_short' => 'Имя (ник) пользователя должно быть более двух символов длиной',
  'err_password_short' => 'Пароль должен быть более двух символов длиной',
  'err_uname_pass_diff' => 'Имя (ник) пользователя и пароль должны быть разные',
  'err_invalid_email' => 'Неправильный email адрес',
  'err_duplicate_email' => 'Этот адрес email уже занят другим пользователем',
  'enter_info' => 'Регистрационная информация',
  'required_info' => 'Поля обязательные к заполнению',
  'optional_info' => 'Поля необязательные к заполнению',
  'username' => 'Имя (ник) пользователя',
  'password' => 'Пароль',
  'password_again' => 'Подтвердите пароль',
  'email' => 'Email',
  'location' => 'Откуда',
  'interests' => 'Интересы',
  'website' => 'Домашняя страница',
  'occupation' => 'Род занятий',
  'error' => 'ОШИБКА',
  'confirm_email_subject' => '%s - Подтверждение регистрации',
  'information' => 'Информация',
  'failed_sending_email' => 'Email с подтверждением регистрации не может быть отправлен!',
  'thank_you' => 'Спасибо за регистрацию.<br /><br />Письмо с информацией, как активировать Вашу учётную запись, было отправлено по указанному Вами email адресу.',
  'acct_created' => 'Ваша учётная запись была создана. Вы можете войти в систему, используя Ваше имя и пароль.',
  'acct_active' => 'Ваша учётная запись была активизирована. Вы можете войти в систему, используя Ваше имя и пароль.',
  'acct_already_act' => 'Учётная запись уже активирована!', //cpg1.4
  'acct_act_failed' => 'Эта учётная запись не может быть активирована!',
  'err_unk_user' => 'Выбранный пользователь не существует!',
  'x_s_profile' => 'Профиль пользователя %s',
  'group' => 'Группа',
  'reg_date' => 'Зарегистрирован',
  'disk_usage' => 'Использование места',
  'change_pass' => 'Изменить пароль',
  'current_pass' => 'Текущий пароль',
  'new_pass' => 'Новый пароль',
  'new_pass_again' => 'Подтвердите новый пароль',
  'err_curr_pass' => 'Текущий пароль неправильный',
  'apply_modif' => 'Применить изменения',
  'change_pass' => 'Изменить мой пароль',
  'update_success' => 'Ваш профиль был изменён',
  'pass_chg_success' => 'Ваш пароль был изменен',
  'pass_chg_error' => 'Ваш пароль не был изменен',
  'notify_admin_email_subject' => '%s - Уведомление о регистрации',
  'last_uploads' => 'Последний загруженный файл.<br />Нажмите, чтобы увидеть все файлы загруженные', //cpg1.4
  'last_comments' => 'Последний комментарий.<br />Нажмите, чтобы увидеть все комментарии оставленные', //cpg1.4
  'notify_admin_email_body' => 'Новый пользователь "%s" зарегистрировался в Вашей галерее',
  'pic_count' => 'Файлы загружены', //cpg1.4
  'notify_admin_request_email_subject' => '%s - Запрос на регистрацию', //cpg1.4
  'thank_you_admin_activation' => 'Спасибо.<br /><br />Ваш запрос на регистрацию был отправлен администрации сайта. Вы получите письмо, если регистрация будет разрешена.', //cpg1.4
  'acct_active_admin_activation' => 'Учетная запись активирована. Письмо с уведомлением было послано пользователю.', //cpg1.4
  'notify_user_email_subject' => '%s - Уведомление об активации', //cpg1.4
);

$lang_register_confirm_email = <<<EOT
Спасибо за регистрацию на сайте {SITE_NAME}

Чтобы активировать Вашу учётную запись "{USER_NAME}", Вам нужно перейти по ссылке ниже или скопировать её в Ваш браузер.

<a href="{ACT_LINK}">{ACT_LINK}</a>

С уважением,

Администрация {SITE_NAME}

EOT;

$lang_register_approve_email = <<<EOT
В Вашей галерее была создана новая учётная запись "{USER_NAME}".

Чтобы активировать учётную запись, Вам нужно перейти по ссылке ниже или скопировать её в Ваш браузер.

<a href="{ACT_LINK}">{ACT_LINK}</a>

EOT;

$lang_register_activated_email = <<<EOT
Ваша учётная запись была одобрена и активирована.

Теперь Вы можете войти на сайт <a href="{SITE_LINK}">{SITE_LINK}</a> использую учётную запись "{USER_NAME}"


С уважением,

Администрация {SITE_NAME}

EOT;
}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
  'title' => 'Просмотреть комментарии',
  'no_comment' => 'Отсутствуют комментарии для просмотра',
  'n_comm_del' => 'Комментариев удалено: %s',
  'n_comm_disp' => 'Количество комментариев для отображения',
  'see_prev' => 'Посмотреть предыдущий',
  'see_next' => 'Посмотреть следующий',
  'del_comm' => 'Удалить выбранные комментарии',
  'user_name' => 'Имя', //cpg1.4
  'date' => 'Дата', //cpg1.4
  'comment' => 'Комментарий', //cpg1.4
  'file' => 'Файл', //cpg1.4
  'name_a' => 'Имя [возрастание]', //cpg1.4
  'name_d' => 'Имя [убывание]', //cpg1.4
  'date_a' => 'Дата [возрастание]', //cpg1.4
  'date_d' => 'Дата [убывание]', //cpg1.4
  'comment_a' => 'Комментарий [возрастание]', //cpg1.4
  'comment_d' => 'Комментарий [убывание]', //cpg1.4
  'file_a' => 'Файл [возрастание]', //cpg1.4
  'file_d' => 'Файл [убывание]', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File search.php
// ------------------------------------------------------------------------- //


if (defined('SEARCH_PHP')){

$lang_search_php = array(
  'title' => 'Поиск по коллекции файлов', //cpg1.4
  'submit_search' => 'поиск', //cpg1.4
  'keyword_list_title' => 'Список ключевых слов', //cpg1.4
  'keyword_msg' => 'Данный список не включает все слова. Он не включает слова из заголовков изображений и их описаний. Попробуйте использовать полноценный поиск.',  //cpg1.4
  'edit_keywords' => 'Редактировать список ключевых слов', //cpg1.4
  'search in' => 'Искать в:', //cpg1.4
  'ip_address' => 'IP адрес', //cpg1.4
  'fields' => 'Искать в', //cpg1.4
  'age' => 'Возраст', //cpg1.4
  'newer_than' => 'Новее чем', //cpg1.4
  'older_than' => 'Старее чем', //cpg1.4
  'days' => 'дней', //cpg1.4
  'all_words' => 'Искать все слова (AND)', //cpg1.4
  'any_words' => 'Искать любые слова (OR)', //cpg1.4
);

$lang_adv_opts = array(
  'title' => 'Название', //cpg1.4
  'caption' => 'Описание', //cpg1.4
  'keywords' => 'Ключевые слова', //cpg1.4
  'owner_name' => 'Имя владельца', //cpg1.4
  'filename' => 'Имя файла', //cpg1.4
);

}

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
  'page_title' => 'Искать новые файлы',
  'select_dir' => 'Выберите директорию',
  'select_dir_msg' => 'Эта функция позволяет Вам добавлять группу файлов, которую Вы закачали на Ваш сервер по FTP протоколу.<br /><br />Выберите директорию, куда Вы закачали Ваши файлы.', //cpg1.4
  'no_pic_to_add' => 'Отсутствуют файлы для добавления',
  'need_one_album' => 'Вам необходим хотя бы один альбом, чтобы использовать эту функцию',
  'warning' => 'Внимание',
  'change_perm' => 'скрипт не может записать в эту директорию, Вам нужно изменить её права на 755 или 777, чтобы добавить файлы!',
  'target_album' => '<b>Поместить файлы из &quot;</b>%s<b>&quot; в </b>%s',
  'folder' => 'Папка',
  'image' => 'Файл',
  'album' => 'Альбом',
  'result' => 'Результат',
  'dir_ro' => 'Нет прав на запись. ',
  'dir_cant_read' => 'Нет прав на чтение. ',
  'insert' => 'Идёт добавление новых файлов в галерею',
  'list_new_pic' => 'Список новых файлов',
  'insert_selected' => 'Вставить выбранные файлы',
  'no_pic_found' => 'Новые файлы не найдены',
  'be_patient' => 'Пожалуйста, подождите, скрипту нужно время, чтобы добавить файлы',
  'no_album' => 'не выбран альбом',
  'result_icon' => 'нажмите для подробностей или для перезагрузки',  //cpg1.4
  'notes' =>  '<ul>'.
                          '<li><b>OK</b> : означает что файл успешно добавлен'.
                          '<li><b>DP</b> : означает что файл дубликат и уже есть в базе данных'.
                          '<li><b>PB</b> : означает что файл не был добавлен, проверьте Ваши настройки и права директории, где расположены файлы'.
                          '<li><b>NA</b> : означает что Вы не выбрали альбом для файлов, нажмите \'<a href="javascript:history.back(1)">назад</a>\' и выберите альбом. Если у вас нет альбома, <a href="albmgr.php">сначала создайте хотя бы один</a></li>'.
                          '<li>Если OK, DP, PB \'значки\' не появились, нажмите на сломанном файле, чтобы увидеть сообщение об ошибке выдаваемое PHP'.
                          '<li>Если Ваш браузер показал таймаут, нажмите кнопку обновить'.
                          '</ul>',
  'select_album' => 'выберите альбом',
  'check_all' => 'Отметить все',
  'uncheck_all' => 'Снять выделение',
  'no_folders' => 'В папке "albums" отсутствуют созданные Вами папки.<br />Убедитесь, что Вы создали хотя бы одну свою папку внутри папки "albums" и загрузили в неё по FTP свои файлы.<br />Вы недолжны ничего загружать в папки "userpics" и "edit", они зарезервированы для http загрузок и внутренних нужд.', //cpg1.4
   'albums_no_category' => 'Альбомы без категорий', //cpg1.4 // album pulldown mod, added by frogfoot
  'personal_albums' => '* Персональные альбомы', //cpg1.4 // album pulldown mod, added by frogfoot
  'browse_batch_add' => 'Встроенный проводник (рекомендуется)', //cpg1.4
  'edit_pics' => 'Редактировать файлы', //cpg1.4
  'edit_properties' => 'Свойства альбома', //cpg1.4
  'view_thumbs' => 'Отображение миниатюр', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File stat_details.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('STAT_DETAILS_PHP')) $lang_stat_details_php = array(
  'show_hide' => 'показать/спрятать эту колонку', //cpg1.4
  'vote' => 'Детали голосования', //cpg1.4
  'hits' => 'Детали просмотров', //cpg1.4
  'stats' => 'Статистика голосования', //cpg1.4
  'sdate' => 'Дата', //cpg1.4
  'rating' => 'Рейтинг', //cpg1.4
  'search_phrase' => 'Поисковая фраза', //cpg1.4
  'referer' => 'Реферер', //cpg1.4
  'browser' => 'Браузер', //cpg1.4
  'os' => 'Операционная система', //cpg1.4
  'ip' => 'IP', //cpg1.4
  'sort_by_xxx' => 'Сортировать %s', //cpg1.4
  'ascending' => '[возрастание]', //cpg1.4
  'descending' => '[убывание]', //cpg1.4
  'internal' => 'внутренний', //cpg1.4
  'close' => 'закрыть', //cpg1.4
  'hide_internal_referers' => 'Спрятать внутренние рефереры', //cpg1.4
  'date_display' => 'Отображение даты', //cpg1.4
  'submit' => 'выполнить / обновить', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File thumbnails.php
// ------------------------------------------------------------------------- //

// Void

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) $lang_upload_php = array(
  'title' => 'Загрузить файл',
  'custom_title' => 'Изменяемая форма запроса',
  'cust_instr_1' => 'Вы можете выбрать изменяемое число строк для загрузки файлов.<br />Тем не менее, Вы не можете выбирать больше, чем лимиты указанные ниже.',
  'cust_instr_2' => 'Запрос количества строк',
  'cust_instr_3' => 'Строк для загрузки файлов: %s',
  'cust_instr_4' => 'Строк для загрузки ссылок: %s',
  'cust_instr_5' => 'Загрузка ссылок:',
  'cust_instr_6' => 'Загрузка файлов:',
  'cust_instr_7' => 'Пожалуйста, введите количество строк для каждого типа необходимое Вам на этот раз. Потом нажмите \'ПРОДОЛЖИТЬ\'. ',
  'reg_instr_1' => 'Неправильное действие для создания формы.',
  'reg_instr_2' => 'Теперь Вы можете загрузить файлы, используя соответствующие строчки ниже. Объем файлов загружаемых из под Вашего пользователя на сервер не должен превышать %s КБ каждый. ZIP файлы загруженные в \'Загрузка файлов\' и \'Загрузка ссылок\' секции останутся запакованными.',
  'reg_instr_3' => 'Если Вы хотите, чтобы ZIP файлы или архивы была распакованы после загрузки, Вы должны использовать строчки для загрузки в секции \'ZIP загрузки для распаковки\'.',
  'reg_instr_4' => 'Когда используете загрузку ссылок, пожалуйста, указывайте путь к файлу в виде: http://www.mysite.com/images/example.jpg',
  'reg_instr_5' => 'Когда Вы заполнили форму, пожалуйста, нажмите \'ПРОДОЛЖИТЬ\'.',
  'reg_instr_6' => 'ZIP загрузки для распаковки:',
  'reg_instr_7' => 'Загрузка файлов:',
  'reg_instr_8' => 'Загрузка ссылок:',
  'error_report' => 'Отчет об ошибке',
  'error_instr' => 'Следующие загрузки вызвали ошибки:',
  'file_name_url' => 'Имя файла/Ссылка',
  'error_message' => 'Сообщение об ошибке',
  'no_post' => 'Файл не был загружен с POST.',
  'forb_ext' => 'Запрещенное расширение файла.',
  'exc_php_ini' => 'Превышен разрешенный размер для файлов в php.ini.',
  'exc_file_size' => 'Превышен разрешенный размер для файлов в галерее.',
  'partial_upload' => 'Неполная загрузка.',
  'no_upload' => 'Загрузка не удалась.',
  'unknown_code' => 'Неизвестный код ошибки PHP.',
  'no_temp_name' => 'Нет загрузки - Нет временного названия.',
  'no_file_size' => 'Не содержит данных/Поврежден',
  'impossible' => 'Невозможно переместить.',
  'not_image' => 'Не изображение/поврежден',
  'not_GD' => 'Не GD расширение.',
  'pixel_allowance' => 'Высота или ширина загруженного изображения больше, чем разрешено в настройках галереи.', //cpg1.4
  'incorrect_prefix' => 'Неправильный префикс ссылки',
  'could_not_open_URI' => 'Не могу открыть ссылку URI.',
  'unsafe_URI' => 'Безопасность не поддаётся проверке.',
  'meta_data_failure' => 'Ошибка мета данных',
  'http_401' => '401 Unauthorized',
  'http_402' => '402 Payment Required',
  'http_403' => '403 Forbidden',
  'http_404' => '404 Not Found',
  'http_500' => '500 Internal Server Error',
  'http_503' => '503 Service Unavailable',
  'MIME_extraction_failure' => 'Тип MIME не может быть определен.',
  'MIME_type_unknown' => 'Неизвестный тип MIME',
  'cant_create_write' => 'Не могу создать записываемый файл.',
  'not_writable' => 'Не могу записать в обрабатываемый файл.',
  'cant_read_URI' => 'Не могу прочитать ссылку',
  'cant_open_write_file' => 'Не могу открыть URI записываемый файл.',
  'cant_write_write_file' => 'Не могу записать в URI записываемый файл.',
  'cant_unzip' => 'Не могу распаковать.',
  'unknown' => 'Неизвестная ошибка',
  'succ' => 'Удачная загрузка',
  'success' => 'Удачных загрузок: %s.',
  'add' => 'Пожалуйста, нажмите \'ПРОДОЛЖИТЬ\', чтобы добавить файлы в альбомы.',
  'failure' => 'Загрузка не удалась',
  'f_info' => 'Информация о файле',
  'no_place' => 'Предыдущий файл не может быть добавлен.',
  'yes_place' => 'Предыдущий файл успешно добавлен.',
  'max_fsize' => 'Максимально разрешенный объем %s КБ',
  'album' => 'Альбом',
  'picture' => 'Файл',
  'pic_title' => 'Название файла',
  'description' => 'Описание файла',
  'keywords' => 'Ключевые слова (отделяются пробелами)<br /><a href="#" onClick="return MM_openBrWindow(\'keyword_select.php\',\'selectKey\',\'width=250, height=400, scrollbars=yes,toolbar=no,status=yes,resizable=yes\')">Вставить из списка</a>', //cpg1.4
  'keywords_sel' =>'Выберите ключевое слово', //cpg1.4
  'err_no_alb_uploadables' => 'Извините, но нет ни одного альбома, куда Вам разрешено загружать файлы',
  'place_instr_1' => 'Пожалуйста, расположите файлы по альбомам. Вы также можете заполнить соответствующую информацию для каждого файла.',
  'place_instr_2' => 'Есть ещё файлы, которые требуют размещения. Пожалуйста, нажмите \'ПРОДОЛЖИТЬ\'.',
  'process_complete' => 'Вы успешно разместили все файлы.',
   'albums_no_category' => 'Альбомы без категорий', //cpg1.4. //album pulldown mod, added by frogfoot
  'personal_albums' => '* Персональные альбомы', //cpg1.4 //album pulldown mod, added by frogfoot
  'select_album' => 'Выберите альбом', //cpg1.4 //album pulldown mod, added by frogfoot
  'close' => 'Закрыть', //cpg1.4
  'no_keywords' => 'Простите, доступные ключевые слова отсутствуют!', //cpg1.4
  'regenerate_dictionary' => 'Пересобрать Словарь', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
  'memberlist' => 'Список пользователей', //cpg1.4
  'user_manager' => 'Менеджер пользователей', //cpg1.4
  'title' => 'Управление пользователями',
  'name_a' => 'Имя [возрастание]',
  'name_d' => 'Имя [убывание]',
  'group_a' => 'Группа [возрастание]',
  'group_d' => 'Группа [убывание]',
  'reg_a' => 'Дата регистрации [возрастание]',
  'reg_d' => 'Дата регистрации [убывание]',
  'pic_a' => 'Количество файлов [возрастание]',
  'pic_d' => 'Количество файлов [убывание]',
  'disku_a' => 'Использование места [возрастание]',
  'disku_d' => 'Использование места [убывание]',
  'lv_a' => 'Последний визит [возрастание]',
  'lv_d' => 'Последний визит [убывание]',
  'sort_by' => 'Сортировать пользователей',
  'err_no_users' => 'Таблица пользователей пуста!',
  'err_edit_self' => 'Вы не можете изменять Ваш личный профиль, используйте ссылку \'Профиль\' для этого',
  'edit' => 'РЕДАКТИРОВАТЬ', //cpg1.4
  'with_selected' => 'С выбранными:', //cpg1.4
  'delete' => 'УДАЛИТЬ', //cpg1.4
  'delete_files_no' => 'сохранить публичные файлы (но сделать их анонимными)', //cpg1.4
  'delete_files_yes' => 'удалить публичные файлы тоже', //cpg1.4
  'delete_comments_no' => 'сохранить комментарии (но сделать их анонимными)', //cpg1.4
  'delete_comments_yes' => 'удалить комментарии тоже', //cpg1.4
  'activate' => 'Активировать', //cpg1.4
  'deactivate' => 'Деактивировать', //cpg1.4
  'reset_password' => 'Сбросить пароль', //cpg1.4
  'change_primary_membergroup' => 'Изменить основную группу', //cpg1.4
  'add_secondary_membergroup' => 'Добавить вторичную группу', //cpg1.4
  'name' => 'Имя пользователя',
  'group' => 'Группа',
  'inactive' => 'Неактивен',
  'operations' => 'Действия',
  'pictures' => 'Файлы',
  'disk_space_used' => 'Использовано места', //cpg1.4
  'disk_space_quota' => 'Доступно места', //cpg1.4
  'registered_on' => 'Регистрация', //cpg1.4
  'last_visit' => 'Последний визит',
  'u_user_on_p_pages' => 'Пользователей: %d / Страниц: %d',
  'confirm_del' => 'Вы уверены, что хотите УДАЛИТЬ этого пользователя? \\nВсе его файлы и альбомы также будут удалены.', //js-alert
  'mail' => 'MAIL',
  'err_unknown_user' => 'Выбранный пользователь не существует',
  'modify_user' => 'Изменить пользователя',
  'notes' => 'Заметки',
  'note_list' => '<li>Если Вы не хотите изменять текущий пароль, оставьте поле "Пароль" пустым',
  'password' => 'Пароль',
  'user_active' => 'Пользователь активен',
  'user_group' => 'Группа пользователя',
  'user_email' => 'Email пользователя',
  'user_web_site' => 'Домашняя страница',
  'create_new_user' => 'Создать нового пользователя',
  'user_location' => 'Расположение пользователя',
  'user_interests' => 'Интересы пользователя',
  'user_occupation' => 'Род занятий пользователя',
  'user_profile1' => '$user_profile1', //cpg1.4
  'user_profile2' => '$user_profile2', //cpg1.4
  'user_profile3' => '$user_profile3', //cpg1.4
  'user_profile4' => '$user_profile4', //cpg1.4
  'user_profile5' => '$user_profile5', //cpg1.4
  'user_profile6' => '$user_profile6', //cpg1.4
  'latest_upload' => 'Последние добавления',
  'never' => 'никогда',
  'search' => 'Поиск пользователя', //cpg1.4
  'submit' => 'Выполнить', //cpg1.4
  'search_submit' => 'Искать!', //cpg1.4
  'search_result' => 'Результат поиска для: ', //cpg1.4
  'alert_no_selection' => 'Вы должны выбрать хотя бы одного пользователя!', //cpg1.4 //js-alert
  'password' => 'Пароль', //cpg1.4
  'select_group' => 'Выберите группу', //cpg1.4
  'groups_alb_access' => 'Права альбома по группам', //cpg1.4
  'album' => 'Альбом', //cpg1.4
  'category' => 'Категория', //cpg1.4
  'modify' => 'Изменить?', //cpg1.4
  'group_no_access' => 'У данной группы нет специального доступа', //cpg1.4
  'notice' => 'Внимание', //cpg1.4
  'group_can_access' => 'Альбомы, к которым имеют доступ только "%s"', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //

if (defined('UTIL_PHP')) {
$lang_util_desc_php = array(
'Обновляет названия файлов из имен файлов', //cpg1.4
'Удаляет названия файлов', //cpg1.4
'Восстанавливает миниатюры и изменяет размеры изображений', //cpg1.4
'Удаляет оригинальные изображения, заменяя их измененными в размерах версиями', //cpg1.4
'Удаляет оригинальные изображения или промежуточные, чтобы освободить дисковое пространство', //cpg1.4
'Удаляет осиротевшие комментарии', //cpg1.4
'Пересчитывает объем и размеры файлов (если Вы вручную изменяли изображения)', //cpg1.4
'Сбрасывает счетчик просмотров', //cpg1.4
'Отобржает phpinfo', //cpg1.4
'Обновляет базу данных', //cpg1.4
'Отображает лог файлы', //cpg1.4
);
$lang_util_php = array(
  'title' => 'Утилита администратора (Изменение размера изображений)',
  'what_it_does' => 'Что она делает',
  'file' => 'Файл',
  'problem' => 'Проблема', //cpg1.4
  'status' => 'Статус', //cpg1.4
  'title_set_to' => 'установить название на',
  'submit_form' => 'выполнить',
  'updated_succesfully' => 'обновлено успешно',
  'error_create' => 'ОШИБКА при создании',
  'continue' => 'Обработать изображения дальше',
  'main_success' => 'Файл %s был успешно использован как главный файл',
  'error_rename' => 'Ошибка при переименовании %s в %s',
  'error_not_found' => 'Файл %s не был найден',
  'back' => 'назад на главную',
  'thumbs_wait' => 'Обновляю миниатюры и/или измененные изображения, пожалуйста, подождите...',
  'thumbs_continue_wait' => 'Продолжаю обновлять миниатюры и/или измененные изображения...',
  'titles_wait' => 'Обновляю название, пожалуйста, подождите...',
  'delete_wait' => 'Удаляю файлы, пожалуйста, подождите...',
  'replace_wait' => 'Удаляю оригинальные файлы и заменяю их на измененные изображение, пожалуйста, подождите...',
  'instruction' => 'Быстрые инструкции',
  'instruction_action' => 'Выберите действие',
  'instruction_parameter' => 'Установите параметры',
  'instruction_album' => 'Выберите альбом',
  'instruction_press' => 'Нажмите %s',
  'update' => 'Обновить миниатюры и/или измененные изображения',
  'update_what' => 'Что должно быть заменено',
  'update_thumb' => 'Только миниатюры',
  'update_pic' => 'Только измененные изображения',
  'update_both' => 'Как миниатюры, так и измененные изображения',
  'update_number' => 'Количество обрабатываемых изображений по одному клику',
  'update_option' => '(Попробуйте установить это значение ниже, если возникают проблемы с таймаутами)',
  'filename_title' => 'Имя файла -&gt; Название файла',
  'filename_how' => 'Как должен быть изменен заголовок файла',
  'filename_remove' => 'Удалить окончание .jpg и заменить _ (подчеркивание) на пробелы',
  'filename_euro' => 'Изменить 2003_11_23_13_20_20.jpg на 23/11/2003 13:20',
  'filename_us' => 'Изменить 2003_11_23_13_20_20.jpg на 11/23/2003 13:20',
  'filename_time' => 'Изменить 2003_11_23_13_20_20.jpg на 13:20',
  'delete' => 'Удалить названия файлов или изображения исходного размера',
  'delete_title' => 'Удалить названия файлов',
  'delete_title_explanation' => 'Удалит все названия файлов в указанном Вами альбоме.', //cpg1.4
  'delete_original' => 'Удалить изображения исходного размера',
  'delete_original_explanation' => 'Удалит изображения исходного размера.', //cpg1.4
  'delete_intermediate' => 'Удалить промежуточные изображения', //cpg1.4
  'delete_intermediate_explanation' => 'Удалит промежуточные изображения.<br />Используйте, чтобы освободить место на диске, если Вы отключили в настройках \'Создавать промежуточные изображения\' после того, как Вы уже добавили файлы в галерею.', //cpg1.4
  'delete_replace' => 'Удалить оригинальные изображения, заменяя их на измененные версии',
  'titles_deleted' => 'Все названия в указанном альбоме удалены', //cpg1.4
  'deleting_intermediates' => 'Удаляю промежуточные изображения, пожалуйста, подождите...', //cpg1.4
  'searching_orphans' => 'Идёт поиск осиротевших комментариев, пожалуйста, подождите...', //cpg1.4
  'select_album' => 'Выберите альбом',
  'delete_orphans' => 'Удалить осиротевшие комментарии',
  'delete_orphans_explanation' => 'Позволит найти и удалить комментарии к файлам, которых уже нет в галерее.<br />Ищет во всех альбомах.', //cpg1.4
  'refresh_db' => 'Перезагрузить информацию о размере и объеме файлов', //cpg1.4
  'refresh_db_explanation' => 'Перечитает информацию о размере и объеме файлов. Используйте это, если дисковая квота отображается неверно или если Вы изменяли файлы вручную.', //cpg1.4
  'reset_views' => 'Сбросить счетчики просмотров', //cpg1.4
  'reset_views_explanation' => 'Установить количество просмотров файлов равное нулю в указанном альбоме.', //cpg1.4
  'orphan_comment' => 'осиротевших комментариев найдено',
  'delete' => 'Удалить',
  'delete_all' => 'Удалить все',
  'delete_all_orphans' => 'Удалить все осиротевшие комментарии?', //cpg1.4
  'comment' => 'Комментарий: ',
  'nonexist' => 'прикреплен к несуществующему файлу # ',
  'phpinfo' => 'Отобразить phpinfo',
  'phpinfo_explanation' => 'Содержит техническую информацию о Вашем сервере.<br /> - Вас могут попросить предоставить эту информацию, если Вы будите просить оказать помощь по галерее.', //cpg1.4
  'update_db' => 'Обновить базу данных',
  'update_db_explanation' => 'Если Вы заменили системные файлы галереи, добавили модификации или обновили старую версию галереи на новую, убедитесь, что Вы обновили базу данных один раз. Это создаст необходимые таблицы и/или значения настроек в базе данных галереи.',
  'view_log' => 'Просмотр лог файлов', //cpg1.4
  'view_log_explanation' => 'Coppermine может следить за различными действиями, которые совершают пользователи. Вы можете просматривать эти логи, если Вы включили запись логов в <a href="admin.php">конфигурации галереи</a>.', //cpg1.4
  'versioncheck' => 'Проверить версии файлов', //cpg1.4
  'versioncheck_explanation' => 'Проверить версии файлов, чтобы определить, заменили ли Вы все файлы после обновления, или исходные файлы Coppermine были обновлены после выхода данной версии.', //cpg1.4
  'bridgemanager' => 'Менеджер интеграции', //cpg1.4
  'bridgemanager_explanation' => 'Включает/выключает интеграцию (bridging) Coppermine галереи с другими приложениями (например Вашим форумом).', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File versioncheck.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('VERSIONCHECK_PHP')) $lang_versioncheck_php = array(
  'title' => 'Проверка версии файлов', //cpg1.4
  'what_it_does' => 'Данная страница предназначена для пользователей, которые обновили установку Coppermine. Данный скрипт обрабатывает файлы на Вашем сервере и пытается определить, является ли Ваша локальная версия файлов на сервере такой же, как на сайте http://coppermine.sourceforge.net, таким образом, давая Вам понять, какие файлы требуют обновления.<br />Скрипт отобразит красным те данные, которые нужно исправить. Данный отображенные желтым цветом требуют, чтобы на них обратили внимание. Данные отображенные зеленым цветом (или Вашим цветом по умолчанию) находятся в порядке.<br />Нажмите на иконки помощи, чтобы получить дополнительную информацию.', //cpg1.4
  'online_repository_unable' => 'Не могу подключиться к удаленному сайту', //cpg1.4
  'online_repository_noconnect' => 'Coppermine не смог подключиться к удаленному сайту. Может быть две причины:', //cpg1.4
  'online_repository_reason1' => 'удаленный сайт в данный момент не работает - проверьте, можете ли Вы открыть данную страницу в Вашем браузере: %s - если не можете, попытайтесь позже.', //cpg1.4
  'online_repository_reason2' => 'PHP на Вашем сервере настроен с отключенным %s (по умолчанию, он включен). Если сервер находится под Вашим контролем, включите данную опцию в <i>php.ini</i> (по крайней мере разрешите ей быть замещенным %s). Если Вы пользуетесь удаленным хостингом, всего скорее Вам придется смириться с мыслью, что Вы не сможете сравнивать файлы через удаленный сайт. Данная страница тогда будет отображать только версии файлов, которые находятся в текущей установке сайта - обновления отображаться не будут.', //cpg1.4
  'online_repository_skipped' => 'Соединение с удаленным сайтом пропущено', //cpg1.4
  'online_repository_to_local' => 'Скрипт сравнивает с локальной копией файлов эталонов. Данные могут быть неточные, если Вы обновили Coppermine и не загрузили все файлы. Изменения в файлах после релиза не будут приниматься во внимание.', //cpg1.4
  'local_repository_unable' => 'Не могу подключиться к данным сравнения на Вашем сайте', //cpg1.4
  'local_repository_explanation' => 'Coppermine не смог подключится к данным сравнения %s на Вашем сервер. Всего скорее это означает, что Вы не загрузили файлы для сравнения на Ваш сервер. Сделайте это и затем откройте эту страницу снова (нажмите обновить).<br />Если скрипт по прежнему выдаёт ошибку, возможно Ваш хостинг полностью отключил <a href="http://www.php.net/manual/ru/ref.filesystem.php">функции для работы с файловой системой PHP</a>. В этом случае Вы не сможете использовать данную утили вообще, извините.', //cpg1.4
  'coppermine_version_header' => 'Установленная версия Coppermine', //cpg1.4
  'coppermine_version_info' => 'У Вас установлена: %s', //cpg1.4
  'coppermine_version_explanation' => 'Если Вы считаете, что данная информация в корне неверна и Вы используете версию Coppermine старше, всего скорее Вы не загрузили самую последнюю версию файла <i>include/init.inc.php</i>', //cpg1.4
  'version_comparison' => 'Сравнение версий', //cpg1.4
  'folder_file' => 'папка/файл', //cpg1.4
  'coppermine_version' => 'cpg версия', //cpg1.4
  'file_version' => 'версия файла', //cpg1.4
  'webcvs' => 'web svn', //cpg1.4
  'writable' => 'есть права на запись', //cpg1.4
  'not_writable' => 'нет прав на запись', //cpg1.4
  'help' => 'Помощь', //cpg1.4
  'help_file_not_exist_optional1' => 'файл/папка не существует', //cpg1.4
  'help_file_not_exist_optional2' => 'Файл/папка %s не найден на Вашем сервере. Вы можете загрузить его (используя FTP клиент) на Ваш сервер, если Вы испытываете проблемы.', //cpg1.4
  'help_file_not_exist_mandatory1' => 'файл/папка не существует', //cpg1.4
  'help_file_not_exist_mandatory2' => 'Файл/папка %s не найден на Вашем сервере, несмотря на то, что он обязателен к наличию. Загрузите файл на Ваш сервер (используя FTP клиент).', //cpg1.4
  'help_no_local_version1' => 'Нет локальной версии файла', //cpg1.4
  'help_no_local_version2' => 'Скрипт не смог извлечь версию локального файла - Ваш файл или устарел, или был модифицирован путём удаления информации в заголовке файла. Рекомендуется обновить файл.', //cpg1.4
  'help_local_version_outdated1' => 'Локальная версия устарела', //cpg1.4
  'help_local_version_outdated2' => 'Похоже, что Ваша версия данного файла из старой версии Coppermine (возможно Вы недавно обновлялись). Убедитесь, что Вы также обновили этот файл.', //cpg1.4
  'help_local_version_na1' => 'Не могу извлечь информацию о версии svn', //cpg1.4
  'help_local_version_na2' => 'Скрипт не смог определить svn версию файла на Вашем сервере. Вы должны загрузить файл из Вашего архива.', //cpg1.4
  'help_local_version_dev1' => 'Разрабатываемая версия', //cpg1.4
  'help_local_version_dev2' => 'Похоже, что файл на Вашем сервере новее, чем Ваша версия Coppermine. Вы или используете разрабатываемую версию файла (Вы должны так поступать, если действительно знаете, что делаете), или Вы обновили Вашу версию Coppermine и не загрузили файл include/init.inc.php', //cpg1.4
  'help_not_writable1' => 'Папка не имеет прав на запись', //cpg1.4
  'help_not_writable2' => 'Изменить права (CHMOD), чтобы дать скрипту права на запись в папку %s и всё что находится внутри неё.', //cpg1.4
  'help_writable1' => 'Папка имеет права на запись', //cpg1.4
  'help_writable2' => 'Папка %s имеет права на запись. Это неоправданный риск, Coppermine требуются только права на чтение/выполнение.', //cpg1.4
  'help_writable_undetermined' => 'Coppermine не смог определить, имеет ли папка права на запись.', //cpg1.4
  'your_file' => 'Ваш файл', //cpg1.4
  'reference_file' => 'файл сравнения', //cpg1.4
  'summary' => 'Итог', //cpg1.4
  'total' => 'Всего файлов/папок отмечено', //cpg1.4
  'mandatory_files_missing' => 'Отсутствует обязательных файлов', //cpg1.4
  'optional_files_missing' => 'Отсутствует необязательных файлов', //cpg1.4
  'files_from_older_version' => 'Файлов осталось от старой версии Coppermine', //cpg1.4
  'file_version_outdated' => 'Устаревших файлов', //cpg1.4
  'error_no_data' => 'Этот скрипт ничего не сделал и не смог получить никакую информацию. Простите за беспокойство.', //cpg1.4
  'go_to_webcvs' => 'перейти к %s', //cpg1.4
  'options' => 'Настройки', //cpg1.4
  'show_optional_files' => 'показать необязательные папки/файлы', //cpg1.4
  'show_mandatory_files' => 'показать обязательные папки/файлы', //cpg1.4
  'show_file_versions' => 'показать версии файлов', //cpg1.4
  'show_errors_only' => 'показать только папки/файлы с ошибками', //cpg1.4
  'show_permissions' => 'показать права папок', //cpg1.4
  'show_condensed_output' => 'показать сокращенный вариант (для снятия скриншотов)', //cpg1.4
  'coppermine_in_webroot' => 'Coppermine установлен в корне сайта', //cpg1.4
  'connect_online_repository' => 'попытка подключения к онлайн сайту', //cpg1.4
  'show_additional_information' => 'показать дополнительную информацию', //cpg1.4
  'no_webcvs_link' => 'не отображать интернет ссылки на svn', //cpg1.4
  'stable_webcvs_link' => 'отображать интернет ссылку на стабильную версию svn', //cpg1.4
  'devel_webcvs_link' => 'отображать интернет ссылку на разрабатываемую версию svn', //cpg1.4
  'submit' => 'применить изменения / обновить', //cpg1.4
  'reset_to_defaults' => 'сбросить на значения по умолчанию', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File view_log.php  //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('VIEWLOG_PHP')) $lang_viewlog_php = array(
  'delete_all' => 'Удалить все логи', //cpg1.4
  'delete_this' => 'Удалить этот лог', //cpg1.4
  'view_logs' => 'Просмотр логов', //cpg1.4
  'no_logs' => 'Логи не созданы.', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File xp_publish.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('XP_PUBLISH_PHP')) {

$lang_xp_publish_client = <<<EOT
<h1>Помощник веб публикации (XP Web Publishing)</h1><p>Данный модуль позволяет использовать механизм веб публикации <b>Windows XP</b> с Coppermine.</p><p>Код основан на статье опубликованной
EOT;

$lang_xp_publish_required = <<<EOT
<h2>Что необходимо</h2><ul><li>Windows XP, чтобы был в наличии сам помощник.</li><li>Работающая версия Coppermine, в которой <b>корректно работает механизм веб загрузки.</b></li></ul><h2>Как установить клиентскую часть</h2><ul><li>Правый клик на
EOT;

$lang_xp_publish_select = <<<EOT
Выберите &quot;Сохранить объект как...&quot;. Сохраните файл на Вашем компьютере. Во время сохранения проверьте, что предлагаемое имя файла <b>cpg_###.reg</b> (где ### представляет из себя цифровой набор времени). Измените его на указанное имя в случае необходимости (в ### должны быть только цифры). Когда файл загружен, сделайте по нему двойной щелчок, чтобы зарегистрировать Ваш сервер в помощнике веб публикаций.</li></ul>
EOT;

$lang_xp_publish_testing = <<<EOT
<h2>Тестирование</h2><ul><li>В Проводнике Windows, выберите любые файлы и кликните по <b>Опубликовать выбранные объекты в вебе</b> в левой части панели Проводника.</li><li>Подтвердите Ваш выбор файлов. Нажмите <b>Далее</b>.</li><li>В появившемся списке служб, выберите службу для Вашей фото галереи (служба называется также, как Ваша галерея). Если служба не появилась, проверьте, установили ли Вы <b>cpg_pub_wizard.reg</b> как описано выше.</li><li>Введите информацию Вашей учетной записи, если потребуется.</li><li>Выберите альбом для Ваших изображений или создайте новый.</li><li>Нажмите <b>Далее</b>. Начнется загрузка Ваших изображений.</li><li>Когда загрузка завершится, проверьте Вашу галерею, чтобы убедится, что изображения были добавлены правильно.</li></ul>
EOT;

$lang_xp_publish_notes = <<<EOT
<h2>Замечаения</h2><ul><li>После начала загрузки, помощник не отображать никакие сообщения об ошибка, передаваемых скриптом, поэтому Вы не сможете узнать, правильно ли добавились Ваши изображения или нет, до тех пор, пока не посетите Вашу галерею.</li><li>Если процесс загрузки будет неудачным, выберите &quot;Включить режим отладки&quot; в конфигурации Coppermine и попытайтесь загрузить одно единственное изображение, а затем проверьте сообщения об ошибках в файле
EOT;

$lang_xp_publish_flood = <<<EOT
, который расположен в директории Coppermine Вашего сервера.</li><li>Чтобы избежать загромождения галереи <i>ненужными</i> изображениями, загруженными через помощника, только <b>администраторы галереи</b> и <b>пользователи, которые могут иметь собственные альбомы</b>, могут использовать данный модуль.</li>
EOT;

$lang_xp_publish_php = array(
  'title' => 'Coppermine - Помощник веб публикации XP', //cpg1.4
  'welcome' => 'Добро пожаловать, <b>%s</b>', //cpg1.4
  'need_login' => 'Вы должны войти в галерею, используя Ваш веб браузер, прежде чем Вы сможете использовать данный помощник.<p/><p>Когда входите в галерею, не забудьте отметить опцию <b>Автоматически входить при каждом посещении</b>, если она присутствует.', //cpg1.4
  'no_alb' => 'Извините, но нет ни одного доступного альбома, куда Вам разрешено загружать изображения с помощью данного помощника.', //cpg1.4
  'upload' => 'Загрузите Ваши изображения в существующий альбом', //cpg1.4
  'create_new' => 'Создайте новый альбом для Ваших изображений', //cpg1.4
  'album' => 'Альбом', //cpg1.4
  'category' => 'Категория', //cpg1.4
  'new_alb_created' => 'Ваш новый альбом &quot;<b>%s</b>&quot; был создан.', //cpg1.4
  'continue' => 'Нажмите &quot;Далее&quot;, чтобы начать загрузку Ваших изображений', //cpg1.4
  'link' => 'эту ссылку', //cpg1.4
);
}
?>