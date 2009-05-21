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
  Coppermine version: 1.4.23
  $Source$
  $Revision: 3966 $
  $Author: gaugau $
  $Date: 2007-09-17 08:53:13 +0200 (Mo, 17 Sep 2007) $
**********************************************/

if (!defined('IN_COPPERMINE')) { die('Not in Coppermine...');}

// info about translators and translated language
$lang_translation_info = array(
  'lang_name_english' => 'Serbian', //cpg1.4
  'lang_name_native' => 'Српски', //cpg1.4
  'lang_country_code' => 'sr', //cpg1.4
  'trans_name'=> 'Пајо',
  'trans_email' => 'pajoooo@gmail.com',
  'trans_website' => 'http://www.pttbn.com/',
  'trans_date' => '2007-11-16',
);

$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('Бајта', 'КБ', 'МБ');

// Day of weeks and months
$lang_day_of_week = array('Не', 'По', 'Ут', 'Ср', 'Че', 'Пе', 'Су');
$lang_month = array('Јан', 'Феб', 'Мар', 'Апр', 'Мај', 'Јун', 'Јул', 'Авг', 'Сеп', 'Окт', 'Нов', 'Дец');

// Some common strings
$lang_yes = 'Да';
$lang_no  = 'Не';
$lang_back = 'НАЗАД';
$lang_continue = 'НАСТАВИ';
$lang_info = 'Информације';
$lang_error = 'Грешка';
$lang_check_uncheck_all = 'селектуј/деселектуј све'; //cpg1.4

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$album_date_fmt =    '%d %m, %Y';
$lastcom_date_fmt =  '%d/%m/%y u %H:%M';
$lastup_date_fmt = '%d %m, %Y';
$register_date_fmt = '%d %m, %Y';
$lasthit_date_fmt = '%d %m, %Y u %I:%M %p';
$comment_date_fmt =  '%d %m, %Y u %I:%M %p';
$log_date_fmt = '%d %m, %Y u %I:%M %p'; //cpg1.4

// For the word censor
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*');

$lang_meta_album_names = array(
  'random' => 'Насумичне слике',
  'lastup' => 'Најновије слике',
  'lastalb'=> 'Задњи додани албуми',
  'lastcom' => 'Задњи коментари',
  'topn' => 'Најгледаније',
  'toprated' => 'Најбоље оцењене',
  'lasthits' => 'Задња виђена',
  'search' => 'Резултати претраге',
  'favpics'=> 'Омиљене слике',  //cpg1.4
);

$lang_errors = array(
  'access_denied' => 'Немате дозволу да приступите овој страници.',
  'perm_denied' => 'Немате дозволу да извршите ову операцију.',
  'param_missing' => 'Недостају подаци за извршење...',
  'non_exist_ap' => 'Изабрани албум/слика не постоји !',
  'quota_exceeded' => 'Диск је пун<br /><br />На располагању имате [quota]K, ваше слике тренутно заузимају [space]K, додавањем још слика, прекорачили бисте ваш простор на диску.',
  'gd_file_type_err' => 'При употреби GD библиотеке дозвољене су само JPEG и PNG екстензије.',
  'invalid_image' => 'Пoсlata слика је оштећена или није у правилном формату за GD библиотеку',
  'resize_failed' => 'Не могу креирати икону или умањену слику.',
  'no_img_to_display' => 'Нема слике за приказ',
  'non_exist_cat' => 'Одабрана категорија не постоји',
  'orphan_cat' => 'Категорија има непостојећу надређену категорију, реши проблем пре наставка!',
  'directory_ro' => 'Директориј \'%s\' не допушта писање, слику није могуће обрисати',
  'non_exist_comment' => 'Одабрани коментар не постоји.',
  'pic_in_invalid_album' => 'Слика је у непостојећем албуму (%s)!?',
  'banned' => 'Тренутно имате забрану приступа овој страници.',
  'not_with_udb' => 'Та функција је онемогућена јер је пребачена на форум. То што покушавате урадити није могуће у овој поставци, или је предвиђено за извршење на форуму.',
  'offline_title' => 'Није у функцији',
  'offline_text' => 'Галерија тренутно није у функцији - навратите ускоро',
  'ecards_empty' => 'Тренутно нема података о е-разгледницама.',
  'action_failed' => 'Радња није успела.  Coppermine не може обавити ову радњу.',
  'no_zip' => 'Потребне библиотеке за процесуирање ZIP докумената не постоје.  Молимо Вас, контактирајте администратора.',
  'zip_type' => 'Немате допуштење за слање ZIP докумената.',
  'database_query' => 'Дошло је до грешке при изведби у бази података', //cpg1.4
  'register_globals_on' => 'The PHP setting register_globals is enabled on your server, which is a bad idea in terms of security. It\'s strongly recommended to turn it off. [<a href="http://forum.coppermine-gallery.net/index.php/topic,59569.0.html" rel="external" class="external">more</a>]',
);

$lang_bbcode_help_title = 'Помоћ за bbcode'; //cpg1.4
$lang_bbcode_help = 'Можете форматирати текст користећи bbcode ознаке: <li>[b]Bold[/b] =&gt; <b>Подебљано</b></li><li>[i]Накошено[/i] =&gt; <i>Накошено</i></li><li>[url=http://vasastrana.com/]Url То је моја страна...[/url] =&gt; <a href="http://vasastrana.com">То је моја стра...</a></li><li>[email]user@domain.com[/email] =&gt; <a href="mailto:user@domain.com">user@domain.com</a></li><li>[color=red]неки текст[/color] =&gt; <span style="color:red">неки текст</span></li><li>[img]http://coppermine-gallery.net/demo/cpg14x/images/red.gif[/img] => <img src="../images/red.gif" border="0" alt="" /></li>'; //cpg1.4

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
  'home_title' => 'Иди на почетну страницу',
  'home_lnk' => 'Почетна',
  'alb_list_title' => 'Иди на попис албума',
  'alb_list_lnk' => 'Попис албума',
  'my_gal_title' => 'Иди у моју личну галерију',
  'my_gal_lnk' => 'Моја галерија',
  'my_prof_title' => 'Иди у мој лични профил', //cpg1.4
  'my_prof_lnk' => 'Мој профил',
  'adm_mode_title' => 'Пређи на администрацију',
  'adm_mode_lnk' => 'Администрација',
  'usr_mode_title' => 'Пређи на кориснички начин',
  'usr_mode_lnk' => 'Кориснички начин',
  'upload_pic_title' => 'Додавање слика у албум',
  'upload_pic_lnk' => 'Додавање слика',
  'register_title' => 'Креирај налог',
  'register_lnk' => 'Регистрација',
  'login_title' => 'Пријави ме', //cpg1.4
  'login_lnk' => 'Пријава',
  'logout_title' => 'Одјави ме', //cpg1.4
  'logout_lnk' => 'Одјава',
  'lastup_title' => 'Прикажи најновије слике', //cpg1.4
  'lastup_lnk' => 'Најновије слике',
  'lastcom_title' => 'Прикажи задње коментаре', //cpg1.4
  'lastcom_lnk' => 'Задњи коментари',
  'topn_title' => 'Прикажи најгледаније слике', //cpg1.4
  'topn_lnk' => 'Најгледаније',
  'toprated_title' => 'Прикажи најбоље оцењене слике', //cpg1.4
  'toprated_lnk' => 'Најбоље оцењене',
  'search_title' => 'Претражи галерију', //cpg1.4
  'search_lnk' => 'Претрага',
  'fav_title' => 'Иди у моје омиљене слике', //cpg1.4
  'fav_lnk' => 'Омиљене слике',
  'memberlist_title' => 'Покажи попис чланова',
  'memberlist_lnk' => 'Попис чланова',
  'faq_title' => 'Често постављана питања о галерији слика',
  'faq_lnk' => 'ЧПП',
);

$lang_gallery_admin_menu = array(
  'upl_app_title' => 'Одобравање нових слања', //cpg1.4
  'upl_app_lnk' => 'Дозвола за слање',
  'admin_title' => 'Иди у Конфигурацију', //cpg1.4
  'admin_lnk' => 'Конфигурација', //cpg1.4
  'albums_title' => 'Иди у конфигурацију албума', //cpg1.4
  'albums_lnk' => 'Албуми',
  'categories_title' => 'Иди у конфигурацију категорија', //cpg1.4
  'categories_lnk' => 'Категорије',
  'users_title' => 'Иди у конфигурацију корисника', //cpg1.4
  'users_lnk' => 'Корисници',
  'groups_title' => 'Иди у конфигурацију група', //cpg1.4
  'groups_lnk' => 'Групе',
  'comments_title' => 'Погледај све коментаре', //cpg1.4
  'comments_lnk' => 'Погледај коментаре',
  'searchnew_title' => 'Иди на пакетно додавање слика', //cpg1.4
  'searchnew_lnk' => 'Пакетно додавање слика',
  'util_title' => 'Иди на административне алате', //cpg1.4
  'util_lnk' => 'Админ алати',
  'key_title' => 'Иди у речник кључних речи', //cpg1.4
  'key_lnk' => 'Речник кључних речи', //cpg1.4
  'ban_title' => 'Иди на кориснике под забраном', //cpg1.4
  'ban_lnk' => 'Крисници под забраном',
  'db_ecard_title' => 'Прегледај е-разгледнице', //cpg1.4
  'db_ecard_lnk' => 'Прикажи е-разгледнице',
  'pictures_title' => 'Сортирање слика', //cpg1.4
  'pictures_lnk' => 'Сортирање слика', //cpg1.4
  'documentation_lnk' => 'Документација', //cpg1.4
  'documentation_title' => 'Coppermine упутства', //cpg1.4
);

$lang_user_admin_menu = array(
  'albmgr_title' => 'Креирај и поредај моје албуме', //cpg1.4
  'albmgr_lnk' => 'Креирај / поредај моје албуме',
  'modifyalb_title' => 'Иди на Измени моје албуме',  //cpg1.4
  'modifyalb_lnk' => 'Измени моје албуме',
  'my_prof_title' => 'Иди у Мој профил', //cpg1.4
  'my_prof_lnk' => 'Мој профил',
);

$lang_cat_list = array(
  'category' => 'Категорије',
  'albums' => 'Албума',
  'pictures' => 'Слика',
);

$lang_album_list = array(
  'album_on_page' => '%d албума на %d страници',
);

$lang_thumb_view = array(
  'date' => 'ДАТУМ',
  //Sort by filename and title
  'name' => 'НАЗИВ СЛИКЕ',
  'title' => 'НАСЛОВ',
  'sort_da' => 'Поредај по датуму узлазно',
  'sort_dd' => 'Поредај по датуму силазно',
  'sort_na' => 'Поредај по имену узлазно',
  'sort_nd' => 'Поредај по имену силазно',
  'sort_ta' => 'Поредај по називу узлазно',
  'sort_td' => 'Поредај по називу силазно',
  'position' => 'ПОЗИЦИЈА', //cpg1.4
  'sort_pa' => 'Поредај по позицији узлазно', //cpg1.4
  'sort_pd' => 'Поредај по позицији силазно', //cpg1.4
  'download_zip' => 'Преузми као Zip датотеку',
  'pic_on_page' => 'Слика: %d | Страница: %d',
  'user_on_page' => '%d корисника на %d страници',
  'enter_alb_pass' => 'Унесите лозинку за тај албум', //cpg1.4
  'invalid_pass' => 'Неисправна лозинка', //cpg1.4
  'pass' => 'Лозинка', //cpg1.4
  'submit' => 'Пошаљи', //cpg1.4
);

$lang_img_nav_bar = array(
  'thumb_title' => 'Врати се на страницу са иконама',
  'pic_info_title' => 'Прикажи/сакриј податке о слици',
  'slideshow_title' => 'Слајд приказ',
  'ecard_title' => 'Пошаљи ову слику као е-разгледницу',
  'ecard_disabled' => 'е-разгледнице нису омогућене',
  'ecard_disabled_msg' => 'Немате допуштење слати е-разгледнице', //js-alert
  'prev_title' => 'Погледај претходну слику',
  'next_title' => 'Погледај следећу слику',
  'pic_pos' => 'СЛИКА %s/%s',
  'report_title' => 'Обавести администратора о тој слици', //cpg1.4
  'go_album_end' => 'На крај', //cpg1.4
  'go_album_start' => 'На почетак', //cpg1.4
  'go_back_x_items' => 'назад за %s слика', //cpg1.4
  'go_forward_x_items' => 'напред за %s слика', //cpg1.4
);

$lang_rate_pic = array(
  'rate_this_pic' => 'Оцените ову слику ',
  'no_votes' => '(Није још оцењена)',
  'rating' => '(Тренутна оцена : %s/5 | Гласања: %s)',
  'rubbish' => 'Лоше',
  'poor' => 'Слабо',
  'fair' => 'Пристојно',
  'good' => 'Добро',
  'excellent' => 'Јако добро',
  'great' => 'Изврсно',
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
  'file' => 'Слика: ',
  'line' => 'Линија: ',
);

$lang_display_thumbnails = array(
  'filename' => 'Назив слике=', //cpg1.4
  'filesize' => 'Величина слике=', //cpg1.4
  'dimensions' => 'Димензије=', //cpg1.4
  'date_added' => 'Додана дана=', //cpg1.4
);

$lang_get_pic_data = array(
  'n_comments' => '%s коментара',
  'n_views' => 'Погледана %s пута',
  'n_votes' => '(бр. гласова: %s)',
);

$lang_cpg_debug_output = array(
  'debug_info' => 'Debug Info',
  'select_all' => 'Одабери све',
  'copy_and_paste_instructions' => 'Ако желите затражити помоћ на форуму, copy-and-paste овај debug код у ваш пост. Проверите да ли сте заменили све лозинке у посту са *** пре објављивања поста. <br />Белешка: Ово је само информација и не значи да постоји грешка у вашој галерији.', //cpg1.4
  'phpinfo' => 'Прикажи phpinfo',
  'notices' => 'Белешке', //cpg1.4
);

$lang_language_selection = array(
  'reset_language' => 'Подразумевани језик',
  'choose_language' => 'Одаберите Ваш језик',
);

$lang_theme_selection = array(
  'reset_theme' => 'Подразумевана тема',
  'choose_theme' => 'Одаберите Вашу тему',
);

$lang_version_alert = array(
  'version_alert' => 'Неподржана верзија!', //cpg1.4
  'security_alert' => 'Сигурносно упозорење!', //cpg1.4.3
  'relocate_exists' => 'Одстраните <a href="http://coppermine-gallery.net/forum/index.php?topic=24217.0" target=_blank>relocate_server.php</a> датотеку са свог сервера!',
  'no_stable_version' => 'Користите Coppermine %s (%s) који је намењен само искусним корисницима - уз ову верзију не долази подршка нити било каква гаранција. Користите је на свој ризик или скините старију стабилну верзију ако требате подршку!', //cpg1.4
  'gallery_offline' => 'Галерија тренутно није у функцији и биће видљива само за Вас као Администратора. Не заборавите да је вратите у функцију након што завршите преправке.', //cpg1.4
);

$lang_create_tabs = array(
  'previous' => 'назад', //cpg1.4
  'next' => 'напред', //cpg1.4
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
  'error_wakeup' => "додатак '%s' није могуће активирати ", //cpg1.4
  'error_install' => "Инсталација додатка '%s' није успела", //cpg1.4
  'error_uninstall' => "Деинсталација додатка '%s' није успела", //cpg1.4
  'error_sleep' => "Неуспешна деинсталација додатка '%s'<br />", //cpg1.4
);

// ------------------------------------------------------------------------- //
// File include/smilies.inc.php
// ------------------------------------------------------------------------- //

if (defined('SMILIES_PHP')) $lang_smilies_inc_php = array(
  'Exclamation' => 'Узвичник',
  'Question' => 'Упитник',
  'Very Happy' => 'Јако сретан',
  'Smile' => 'Смешко',
  'Sad' => 'Тужан',
  'Surprised' => 'Изненађен',
  'Shocked' => 'Шокиран',
  'Confused' => 'Збуњен',
  'Cool' => 'Задовољан',
  'Laughing' => 'Насмејан',
  'Mad' => 'Луд',
  'Razz' => 'Разјарен',
  'Embarassed' => 'Постиђен',
  'Crying or Very sad' => 'Плаче или је јако тужан',
  'Evil or Very Mad' => 'Зао или јако луд',
  'Twisted Evil' => 'Изопачено зло',
  'Rolling Eyes' => 'Окреће очима',
  'Wink' => 'Намигује',
  'Idea' => 'Има идеју',
  'Arrow' => 'Стрелица',
  'Neutral' => 'Неутралан',
  'Mr. Green' => 'Господин Зеленко',
);

// ------------------------------------------------------------------------- //
// File addpic.php
// ------------------------------------------------------------------------- //

// void

// ------------------------------------------------------------------------- //
// File mode.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('MODE_PHP')) $lang_mode_php = array(
  0 => 'Напуштање администрације...',
  1 => 'Улазак у администрацију...',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
  'alb_need_name' => 'Албум мора имати име !', //js-alert
  'confirm_modifs' => 'Јесте ли сигурни да желите учинити ове измене ?', //js-alert
  'no_change' => 'Нисте ништа изменили !', //js-alert
  'new_album' => 'Нови албум',
  'confirm_delete1' => 'Јесте ли сигурни да желите избрисати овај албум ?', //js-alert
  'confirm_delete2' => '\nСве слике и коментари ће бити избрисани !', //js-alert
  'select_first' => 'Прво одаберите албум', //js-alert
  'alb_mrg' => 'Уређивање албума',
  'my_gallery' => '* Моја галерија *',
  'no_category' => '* Нема категорије *',
  'delete' => 'Избриши',
  'new' => 'Ново',
  'apply_modifs' => 'Прихвати измене',
  'select_category' => 'Одабери категорију',
);

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) $lang_banning_php = array(
  'title' => 'Забрана корисника', //cpg1.4
  'user_name' => 'Корисничко име', //cpg1.4
  'ip_address' => 'IP Адреса', //cpg1.4
  'expiry' => 'Истиче (празно значи стално)', //cpg1.4
  'edit_ban' => 'Сачувај измене', //cpg1.4
  'delete_ban' => 'Избриши', //cpg1.4
  'add_new' => 'Додај нову забрану', //cpg1.4
  'add_ban' => 'Додај', //cpg1.4
  'error_user' => 'Не могу наћи корисника', //cpg1.4
  'error_specify' => 'Требате одредити или корисничко име или IP адресу', //cpg1.4
  'error_ban_id' => 'Неправилна забрана ID-a!', //cpg1.4
  'error_admin_ban' => 'Не можете направити забрану себи!', //cpg1.4
  'error_server_ban' => 'Јесте ли хтели забранити приступ властитом серверу? Не можете то учинити...', //cpg1.4
  'error_ip_forbidden' => 'Тај IP не можете забранити!<br />Ако желите забранити посебне IP-e, учините то у <a href="admin.php">Konfiguracija</a> (има смисла само у LAN-у).', //cpg1.4
  'lookup_ip' => 'Погледајте IP адресу', //cpg1.4
  'submit' => 'Напред!', //cpg1.4
  'select_date' => 'одабери датум', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File bridgemgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('BRIDGEMGR_PHP')) $lang_bridgemgr_php = array(
  'title' => 'Bridge Чаробњак',
  'warning' => 'Упозорење: код употребе чаробњака морате имати на уму да осетљиве податке шаљете користећи html форме. Покрећите га само на властитом PC-у (никако на јавним клијентима као интернет кафе...), и након употребе обавезно бришите кеш свог прегледника као и привремене датотеке. У противном, неко неовлаштен може приступити Вашим подацима!',
  'back' => 'назад',
  'next' => 'напред',
  'start_wizard' => 'Покретање Bridge чаробњака',
  'finish' => 'Заврши',
  'hide_unused_fields' => 'сакриј поља форми које се не користе (препоручено)',
  'clear_unused_db_fields' => 'бриши погрешне уносе у бази података (препоручено)',
  'custom_bridge_file' => 'име Ваше bridge датотеке (ако је <i>myfile.inc.php</i>, унеси <i>myfile</i> у то поље)',
  'no_action_needed' => 'У овом кораку не требате ништа радити. Само кликните \'напред\' да бисте наставили.',
  'reset_to_default' => 'Ресетујте на основне вредности',
  'choose_bbs_app' => 'изаберите апликацију с којом желите интегрисати Вашу галерију',
  'support_url' => 'Идите овде по подршку за ту апликацију',
  'settings_path' => 'стаза коју користи Ваш BBS',
  'database_connection' => 'веза с базом података',
  'database_tables' => 'табеле базе података',
  'bbs_groups' => 'BBS групе',
  'license_number' => 'Број лиценце',
  'license_number_explanation' => 'Унесите број лиценце (ако је поседујете)',
  'db_database_name' => 'Име базе података',
  'db_database_name_explanation' => 'Унесите име базе података коју користи BBS',
  'db_hostname' => 'Host базе података',
  'db_hostname_explanation' => 'Host-име Ваше mySQL базе података, обично &quot;localhost&quot;',
  'db_username' => 'Кориснички налог базе података',
  'db_username_explanation' => 'mySQL кориснички налог за везу са BBS',
  'db_password' => 'Лозинка базе података',
  'db_password_explanation' => 'Лозинка за тај mySQL кориснички налог',
  'full_forum_url' => 'URL Форума',
  'full_forum_url_explanation' => 'Пун URL Вашег BBS (укључујући http:// дио, нпр. http://www.vasdomen.tld/forum)',
  'relative_path_of_forum_from_webroot' => 'Релативна стаза форума',
  'relative_path_of_forum_from_webroot_explanation' => 'Релативна стаза до Вашег BBS (Пример: ако је Ваш BBS на http://www.vasdomen.tld/forum/, унесите &quot;/forum/&quot; у то поље)',
  'relative_path_to_config_file' => 'Релативна стаза до config датотеке Вашег BBS',
  'relative_path_to_config_file_explanation' => 'Релативна стаза до Вашег BBS, гледано из директорија Ваше галерије (нпр. &quot;../forum/&quot; ако је Ваш BBS на http://www.vasdomen.tld/forum/ и галерија на http://www.vasdomen.tld/gallery/)',
  'cookie_prefix' => 'Префикс кукија',
  'cookie_prefix_explanation' => 'то ће бити име кукија Вашег BBS',
  'table_prefix' => 'Префикс табеле',
  'table_prefix_explanation' => 'Мора се поклапати са префиксом који, приликом поставке, одаберете за Ваш BBS.',
  'user_table' => 'Корисничка табела',
  'user_table_explanation' => '(обично је основна поставка OK, све док је основна инсталација Вашег BBS стандардна)',
  'session_table' => 'Табела сесије',
  'session_table_explanation' => '(обично је основна поставка OK, све док је основна инсталација Вашег BBS стандардна)',
  'group_table' => 'Табела групе',
  'group_table_explanation' => '(обично је основна поставка OK, све док је основна инсталација Вашег BBS стандардна)',
  'group_relation_table' => 'Табела односа групе',
  'group_relation_table_explanation' => '(обично је основна поставка OK, све док је основна инсталација Вашег BBS стандардна)',
  'group_mapping_table' => 'Табела мапирања групе',
  'group_mapping_table_explanation' => '(обично је основна поставка OK, све док је основна инсталација Вашег BBS стандардна)',
  'use_standard_groups' => 'Користи стандардне BBS корисничке групе',
  'use_standard_groups_explanation' => 'Користи стандардне (уграђене) корисничке групе (препоручено). Тиме ћете постићи да подешавања свих произвољних корисничких група направљених на тој страници постану бескорисна. Онемогућите ту опцију само ако СТВАРНО знате шта радите!',
  'validating_group' => 'Валидација групе',
  'validating_group_explanation' => 'ID групе Вашег BBS у којој су кориснички налози за које је потребна валидација (обично је основна поставка ОК, све док је основна инсталација Вашег BBS стандардна)',
  'guest_group' => 'Група гостију',
  'guest_group_explanation' => 'ID групе Вашег BBS у којој су гости (анонимни корисници) (обично је основна поставка ОК, мењајте само ако знате шта радите)',
  'member_group' => 'Група члнова',
  'member_group_explanation' => 'ID групе Вашег BBS у којој су &quot;regularni&quot; кориснички налози (обично је основна поставка ОК, мењајте само ако знате шта радите)',
  'admin_group' => 'Админ група',
  'admin_group_explanation' => 'ID групе Вашег BBS у којој су администратори (обично је основна поставка OK, мењајте само ако знате шта радите)',
  'banned_group' => 'Група забрана',
  'banned_group_explanation' => 'ID групе Вашег BBS у којој су корисници под забраном (обично је основна поставка OK, мењајте само ако знате шта радите)',
  'global_moderators_group' => 'Група глобалних модератора',
  'global_moderators_group_explanation' => 'ID групе Вашег BBS у којој су глобални модератори Вашег BBS (обично је основна поставка OK, мењајте само ако знате шта радите)',
  'special_settings' => 'BBS-посебна подешавања',
  'logout_flag' => 'phpBB верзија (ознака одјаве)',
  'logout_flag_explanation' => 'Koja je верзија Вашег BBS (овим подешавањем се уређује начин одјава)',
  'use_post_based_groups' => 'Користи post-based групе?',
  'logout_flag_yes' => '2.0.5 или виша',
  'logout_flag_no' => '2.0.4 или нижа',
  'use_post_based_groups_explanation' => 'Да ли да и групе са BBS које су дефинисане бројем постова добију налог (допушта већи надзор дозвола) или само основне групе (лакша администрација, препоручено). Ово подешавање можете касније мењати.',
  'use_post_based_groups_yes' => 'да',
  'use_post_based_groups_no' => 'не',
  'error_title' => 'Пре наставка морате исправити ове грешке. Идите на претходни приказ.',
  'error_specify_bbs' => 'Морате навести апликацију с којом желите сјединити Вашу галерију.',
  'error_no_blank_name' => 'Морате навести име bridge датотеке.',
  'error_no_special_chars' => 'Име bridge датотеке не може садржати специјалне знакове изузев (_) и (-)!',
  'error_bridge_file_not_exist' => 'Bridge датотека %s не постоји на серверу. Проверите да ли сте је пребацили на сервер.',
  'finalize' => 'омогући/онемогући BBS интеграцију',
  'finalize_explanation' => 'Дакле, Ваша подешавања су уписана у базу података, али BBS интеграција није била омогућена. Интеграцију можете омогућити/онемогућити било када касније. Обавезно запамтите админ корисничко име и лозинку самосталне Галерије, може Вам затребати касније. Ако било шта пође по злу, идите у %s и онемогућите BBS интеграцију, користећи самостални админ налог (поставили сте га током инсталације Галерије).',
  'your_bridge_settings' => 'Bridge подешавања',
  'title_enable' => 'Омогућите интеграцију са %s',
  'bridge_enable_yes' => 'омогући',
  'bridge_enable_no' => 'онемогући',
  'error_must_not_be_empty' => 'не мора бити празан',
  'error_either_be' => 'морају бити %s или %s',
  'error_folder_not_exist' => '%s не постоји. Исправите унешену вредност за %s',
  'error_cookie_not_readible' => 'Галерија не може читати куки %s. Исправите унешену вредност за %s, или идите у  BBS администрациони панел и проверите да ли је стаза кукија читљива за галерију.',
  'error_mandatory_field_empty' => 'Поље %s не може бити празно - унесите исправну вредност.',
  'error_no_trailing_slash' => 'Не сме бити цртица у пољу %s.',
  'error_trailing_slash' => 'Мора постојати цртица у пољу %s.',
  'error_db_connect' => 'Немогуће се повезати са mySQL базом са наведеним подацима. Одговор mySQL-a:',
  'error_db_name' => 'Док год Галерија не успостави везу, неће моћи наћи базу података %s. Проверите јесте ли %s навели исправно. Одговор mySQL-a:',
  'error_prefix_and_table' => '%s и ',
  'error_db_table' => 'Не могу пронаћи табелу %s. Проверите јесте ли %s навели исправно.',
  'recovery_title' => 'Bridge уредник: хитно обнављање',
  'recovery_explanation' => 'Ако желите одавде администрирати BBS integraciju Ваше галерије, прво се морате пријавити као админ. Ако се не можете пријавити, јер интеграција не ради како сте очекивали, можете онемогућити BBS интеграцију са том страном. Унос корисничког имена и лозинке Вас неће пријавити, него ће онемогућити BBS интеграцију. За детаљније информације морате погледати документацију.',
  'username' => 'Корисничко име',
  'password' => 'Лозинка',
  'disable_submit' => 'Пошаљи',
  'recovery_success_title' => 'Ауторизација успешна',
  'recovery_success_content' => 'Успешно сте онемогућили BBS интеграцију. Инсталација Ваше галерије је сада покренута у самосталном моду.',
  'recovery_success_advice_login' => 'Пријавите се као админ да бисте уредили bridge подешавања и/или опет омогућили  BBS интеграцију.',
  'goto_login' => 'Пријави се',
  'goto_bridgemgr' => 'Иди у bridge уредника',
  'recovery_failure_title' => 'Ауторизација није успела',
  'recovery_failure_content' => 'Дали сте погрешне податке. Морате навести податке админ налога самосталне верзије (поставили сте га током инсталације Галерије).',
  'try_again' => 'покушај поново',
  'recovery_wait_title' => 'Време чекања није протекло',
  'recovery_wait_content' => 'Из сигурносних разлога скрипта не допушта вишеструку погрешну пријаву, тако да морате чекати да Вам пријава поново буде допуштена.',
  'wait' => 'чекај',
  'create_redir_file' => 'Креирајте датотеку за преусмеравање (препоручено)',
  'create_redir_file_explanation' => 'Да бисте преусмерили кориснике назад у Галерију, када су пријављени на Ваш  BBS, потребна Вам је датотека за преусмеравање у Вашем BBS директорију. Када је та опција чекирана, bridge уредник ће покушати да направи ту датотеку за Вас, или да Вам да код спреман за copy-paste да бисте датотеку креирали ручно.',
  'browse' => 'прегледај',
);

// ------------------------------------------------------------------------- //
// File calendar.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('CALENDAR_PHP')) $lang_calendar_php = array(
  'title' => 'Календар', //cpg1.4
  'close' => 'затвори', //cpg1.4
  'clear_date' => 'обриши датум', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
  'miss_param' => 'Нема параметара за \'%s\'операцију !',
  'unknown_cat' => 'Одабрана категорија не постоји у бази података',
  'usergal_cat_ro' => 'Категорија галерија корисника се не може брисати !',
  'manage_cat' => 'Обрада категорија',
  'confirm_delete' => 'Јесте ли сигурни да желите ИЗБРИСАТИ ову категорију', //js-alert
  'category' => 'Категорија',
  'operations' => 'Операције',
  'move_into' => 'Пребаци у',
  'update_create' => 'Освежи/креирај категорију',
  'parent_cat' => 'Надређена категорија',
  'cat_title' => 'Назив категорије',
  'cat_thumb' => 'Икона категорије',
  'cat_desc' => 'Опис категорије',
  'categories_alpha_sort' => 'Сортирај категорије по абецеди (уместо уобичајеног начина сортирања)', //cpg1.4
  'save_cfg' => 'Сачувај конфигурацију', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File admin.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('ADMIN_PHP')) $lang_admin_php = array(
  'title' => 'Конфигурација', //cpg1.4
  'manage_exif' => 'Уређивање приказа exif података', //cpg1.4
  'manage_plugins' => 'Уређивање додатака', //cpg1.4
  'manage_keyword' => 'Уређивање кључних речи', //cpg1.4
  'restore_cfg' => 'Поврати основне поставке',
  'save_cfg' => 'Сачувај нову конфигурацију',
  'notes' => 'Бeлешке',
  'info' => 'Информације',
  'upd_success' => 'Конфигурација је освежена',
  'restore_success' => 'Основне поставке галерије су враћене',
  'name_a' => 'Назив узлазно',
  'name_d' => 'Назив силазно',
  'title_a' => 'Наслов узлазно',
  'title_d' => 'Наслов силазно',
  'date_a' => 'Датум узлазно',
  'date_d' => 'Датум силазно',
  'pos_a' => 'Позиција узлазно', //cpg1.4
  'pos_d' => 'Позиција силазно', //cpg1.4
  'th_any' => 'Maкс. аспект',
  'th_ht' => 'Висина',
  'th_wd' => 'Ширина',
  'label' => 'ознака',
  'item' => 'ставка',
  'debug_everyone' => 'Сви',
  'debug_admin' => 'Само администратор',
  'no_logs'=> 'Искључено', //cpg1.4
  'log_normal'=> 'Нормално', //cpg1.4
  'log_all' => 'Све', //cpg1.4
  'view_logs' => 'Приказ догађаја', //cpg1.4
  'click_expand' => 'Кликните на име за више података', //cpg1.4
  'expand_all' => 'Рашири све', //cpg1.4
  'notice1' => '(*) Те поставке не смете сачувату ако већ имате слика у галерији.', //cpg1.4 - (relocated)
  'notice2' => '(**) Кад сачувате те поставке, оне ће се односити само на слике које додате убудуће. Савет је да те поставке не мењате ако већ имате слика у галерији. Можете, ипак, извршити измене на постојећим сликама употребом &quot;<a href="util.php">Алати</a> (промена величине)&quot; у административном менију.', //cpg1.4 - (relocated)
  'notice3' => '(***) Лог подаци се записују на енглеском.', //cpg1.4 - (relocated)
  'bbs_disabled' => 'Функција је искључена ако се користи форум', //cpg1.4
  'auto_resize_everyone' => 'Сви', //cpg1.4
  'auto_resize_user' => 'Само корисници', //cpg1.4
  'ascending' => 'узлазно', //cpg1.4
  'descending' => 'силазно', //cpg1.4
);

if (defined('ADMIN_PHP')) $lang_admin_data = array(
  'Основне поставке',
  array('Назив галерије', 'gallery_name', 0, 'f=index.htm&amp;as=admin_general_name&amp;ae=admin_general_name_end'), //cpg1.4
  array('Опис галерије', 'gallery_description', 0, 'f=index.htm&amp;as=admin_general_description&amp;ae=admin_general_description_end'), //cpg1.4
  array('E-mail администратора галерије', 'gallery_admin_email', 0, 'f=index.htm&amp;as=admin_general_email&amp;ae=admin_general_email_end'), //cpg1.4
  array('URL фолдера ваше галерије (без \'index.php\' или слично на крају)', 'ecards_more_pic_target', 0, 'f=index.htm&amp;as=admin_general_coppermine-url&amp;ae=admin_general_coppermine-url_end'), //cpg1.4
  array('URL почетне странице', 'home_target', 0, 'f=index.htm&amp;as=admin_general_home-url&amp;ae=admin_general_home-url_end'), //cpg1.4
  array('Допусти ZIP-преузимање омиљених слика', 'enable_zipdownload', 1, 'f=index.htm&amp;as=admin_general_zip-download&amp;ae=admin_general_zip-download_end'), //cpg1.4
  array('Временска зона у односу на GMT (тренутно време: ' . localised_date(-1, $comment_date_fmt) . ')','time_offset',0, 'f=index.htm&amp;as=admin_general_time-offset&amp;ae=admin_general_time-offset_end&amp;top=1'), //cpg1.4
  array('Омогући шифриране лозинке (ова радња је неповратна)','enable_encrypted_passwords',1, 'f=index.htm&amp;as=admin_general_encrypt_password_start&amp;ae=admin_general_encrypt_password_end&amp;top=1'), // cpg 1.4
  array('Приказ иконе за помоћ (помоћ само на енглеском)','enable_help',9, 'f=index.htm&amp;as=admin_general_help&amp;ae=admin_general_help_end'), //cpg1.4
  array('Омогући клик на кључне речи у претрази','clickable_keyword_search',14, 'f=index.htm&amp;as=admin_general_keywords_start&amp;ae=admin_general_keywords_end'), //cpg1.4
  array('Омогући додатке', 'enable_plugins', 12, 'f=index.htm&amp;as=admin_general_enable-plugins&amp;ae=admin_general_enable-plugins_end'),  //cpg1.4
  array('Омогући забрану засебних (non-routable) IP адреса', 'ban_private_ip', 1,  'f=index.htm&amp;as=admin_general_private-ip&amp;ae=admin_general_private-ip_end'), //cpg1.4
  array('Прегледни интерфејс при пакетном додавању слика', 'browse_batch_add', 1, 'f=index.htm&amp;as=admin_general_browsable_batch_add&amp;ae=admin_general_browsable_batch_add_end'), //cpg1.4

  'Језик и кодирање знакова',
  array('Језик', 'lang', 5, 'f=index.htm&amp;as=admin_language_language&amp;ae=admin_language_language_end'), //cpg1.4
  array('Да употребим енглески израз ако нема превода?', 'language_fallback', 1, 'f=index.htm&amp;as=admin_language_fallback&amp;ae=admin_language_fallback_end'), //cpg1.4
  array('Кодна табела', 'charset', 4, 'f=index.htm&amp;as=admin_language_charset&amp;ae=admin_language_charset_end'), //cpg1.4
  array('Приказ листе језика', 'language_list', 1, 'f=index.htm&amp;as=admin_language_list&amp;ae=admin_language_list_end'), //cpg1.4
  array('Приказ заставица за избор језика', 'language_flags', 8, 'f=index.htm&amp;as=admin_language_flags&amp;ae=admin_language_flags_end&amp;top=1'), //cpg1.4
  array('Прикажи типку &quot;поврати језик&quot; при избору језика', 'language_reset', 1, 'f=index.htm&amp;as=admin_language_reset&amp;ae=admin_language_reset_end&amp;top=1'), //cpg1.4
  //array('Прикажи претходна/следећа на приказаним страницама, 'previous_next_tab', 1), //cpg1.4

  'Поставке изгледа галерије - теме',
  array('Изглед галерије', 'theme', 6, 'f=index.htm&amp;as=admin_theme_theme&amp;ae=admin_theme_theme_end'), //cpg1.4
  array('Прикажи листу тема', 'theme_list', 1, 'f=index.htm&amp;as=admin_theme_theme_list&amp;ae=admin_theme_theme_list_end'), //cpg1.4
  array('Прикажи типку &quot;поврати тему&quot; при избору теме', 'theme_reset', 1, 'f=index.htm&amp;as=admin_theme_theme_reset&amp;ae=admin_theme_theme_reset_end'), //cpg1.4
  array('Прикажи ЧПП (често постављана питања)', 'display_faq', 1, 'f=index.htm&amp;as=admin_theme_faq&amp;ae=admin_theme_faq_end'), //cpg1.4
  array('Име корисниковог линка у менију', 'custom_lnk_name', 0,'f=index.htm&amp;as=admin_theme_custom_lnk_name&amp;ae=admin_theme_custom_lnk_name_end'), //cpg1.4
  array('URL корисниковог линка у менију', 'custom_lnk_url', 0,'f=index.htm&amp;as=admin_language_custom_lnk_url&amp;ae=admin_language_custom_lnk_url_end'), //cpg1.4
  array('Прикажи помоћ за bbcode', 'show_bbcode_help', 1, 'f=index.htm&amp;as=admin_theme_bbcode&amp;ae=admin_theme_bbcode_end&amp;top=1'), //cpg1.4
  array('Означи теме које су дефинисане XHTML-ом и CSS-ом','vanity_block',1, 'f=index.htm&amp;as=vanity_block&amp;ae=vanity_block_end'), //cpg1.4
  array('Стаза до корисниковог заглавља на врху', 'custom_header_path', 0, 'f=index.htm&amp;as=admin_theme_include_path_start&amp;ae=admin_theme_include_path_end'), //cpg1.4
  array('Стаза до корисниковог заглавља на дну', 'custom_footer_path', 0, 'f=index.htm&amp;as=admin_theme_include_path_start&amp;ae=admin_theme_include_path_end'), //cpg1.4

  'Поставке за приказ албума',
  array('Ширина главне табеле (пиксели или %)', 'main_table_width', 0, 'f=index.htm&amp;as=admin_album_table-width&amp;ae=admin_album_table-width_end'), //cpg1.4
  array('Број нивоа за приказ категорија', 'subcat_level', 0, 'f=index.htm&amp;as=admin_album_category-levels&amp;ae=admin_album_category-levels_end'), //cpg1.4
  array('Број албума на страни', 'albums_per_page', 0, 'f=index.htm&amp;as=admin_album_number&amp;ae=admin_album_number_end'), //cpg1.4
  array('Број ступаца за попис албума', 'album_list_cols', 0, 'f=index.htm&amp;as=admin_album_columns&amp;ae=admin_album_columns_end'), //cpg1.4
  array('Величина икона у пикселима', 'alb_list_thumb_size', 0, 'f=index.htm&amp;as=admin_album_thumbnail-size&amp;ae=admin_album_thumbnail-size_end'), //cpg1.4
  array('Садржај главне странице', 'main_page_layout', 0, 'f=index.htm&amp;as=admin_album_list_content&amp;ae=admin_album_list_content_end'), //cpg1.4
  array('Покажи иконе албума првог нивоа у категоријама','first_level',1, 'f=index.htm&amp;as=admin_album_first-level_thumbs&amp;ae=admin_album_first-level_thumbs_end'), //cpg1.4
  array('Сортирај категорије по абецеди','categories_alpha_sort',1, 'f=index.htm&amp;as=admin_album_list_alphasort_start&amp;ae=admin_album_list_alphasort_end'), //cpg1.4
  array('Приказ броја повезаних слика','link_pic_count',1, 'f=index.htm&amp;as=admin_album_linked_files_start&amp;ae=admin_album_linked_files_end'), //cpg1.4

  'Поставке за приказ икона',
  array('Број ступаца на страници са иконама', 'thumbcols', 0, 'f=index.htm&amp;as=admin_thumbnail_columns&amp;ae=admin_thumbnail_columns_end'), //cpg1.4
  array('Број редова на страници са иконама', 'thumbrows', 0, 'f=index.htm&amp;as=admin_thumbnail_rows&amp;ae=admin_thumbnail_rows_end'), //cpg1.4
  array('Максималан број трака за приказ', 'max_tabs', 10, 'f=index.htm&amp;as=admin_thumbnail_tabs&amp;ae=admin_thumbnail_tabs_end'), //cpg1.4
  array('Прикажи опис слике (поред наслова) испод иконе', 'caption_in_thumbview', 1, 'f=index.htm&amp;as=admin_thumbnail_display_caption&amp;ae=admin_thumbnail_display_caption_end'), //cpg1.4
  array('Прикажи број прегледа испод иконе', 'views_in_thumbview', 1, 'f=index.htm&amp;as=admin_thumbnail_display_views&amp;ae=admin_thumbnail_display_views_end'), //cpg1.4
  array('Прикажи број коментара испод иконе', 'display_comment_count', 1, 'f=index.htm&amp;as=admin_thumbnail_display_comments&amp;ae=admin_thumbnail_display_comments_end'), //cpg1.4
  array('Прикажи име пошиљаоца испод иконе', 'display_uploader', 1, 'f=index.htm&amp;as=admin_thumbnail_display_uploader&amp;ae=admin_thumbnail_display_uploader_end'), //cpg1.4
  //array('Прикажи име админа испод иконе', 'display_admin_uploader', 1, 'f=index.htm&amp;as=admin_thumbnail_display_admin_uploader&amp;ae=admin_thumbnail_display_admin_uploader_end'), //cpg1.4
  array('Прикажи име датотеке испод иконе', 'display_filename', 1, 'f=index.htm&amp;as=admin_thumbnail_display_filename&amp;ae=admin_thumbnail_display_filename_end'), //cpg1.4
  //array(' Прикажи опис албума', 'alb_desc_thumb', 1, 'f=index.htm&amp;as=admin_thumbnail_display_description&amp;ae=admin_thumbnail_display_description_end'), //cpg1.4
  array('Основни поредак за слике', 'default_sort_order', 3, 'f=index.htm&amp;as=admin_thumbnail_default_sortorder&amp;ae=admin_thumbnail_default_sortorder_end'), //cpg1.4
  array('Најмањи број оцена за слику да се уврсти на листу \'Најбоље оцењене\'', 'min_votes_for_rating', 0, 'f=index.htm&amp;as=admin_thumbnail_minimum_votes&amp;ae=admin_thumbnail_minimum_votes_end'), //cpg1.4

  'Приказ слика', //cpg1.4
  array('Ширина табеле за приказ слика (пиксели или %)', 'picture_table_width', 0, 'f=index.htm&amp;as=admin_image_comment_table-width&amp;ae=admin_image_comment_table-width_end'), //cpg1.4
  array('Информација  о слици се види (основна поставка)', 'display_pic_info', 1, 'f=index.htm&amp;as=admin_image_comment_info_visible&amp;ae=admin_image_comment_info_visible_end'), //cpg1.4
  array('Максимална дужина описа слике', 'max_img_desc_length', 0, 'f=index.htm&amp;as=admin_image_comment_descr_length&amp;ae=admin_image_comment_descr_length_end'), //cpg1.4
  array('Максимални број знакова у речи', 'max_com_wlength', 0, 'f=index.htm&amp;as=admin_image_comment_chars_per_word&amp;ae=admin_image_comment_chars_per_word_end'), //cpg1.4
  array('Прикажи филмску траку с иконама', 'display_film_strip', 1, 'f=index.htm&amp;as=admin_image_comment_filmstrip_toggle&amp;ae=admin_image_comment_filmstrip_toggle_end'), //cpg1.4
  array('Прикажи име датотеке под филмском траком', 'display_film_strip_filename', 1, 'f=index.htm&amp;as=admin_image_comment_display_film_strip_filename&amp;ae=admin_image_comment_display_film_strip_filename_end'), //cpg1.4
  array('Број слика у филмској траци', 'max_film_strip_items', 0, 'f=index.htm&amp;as=admin_image_comment_filmstrip_number&amp;ae=admin_image_comment_filmstrip_number_end'), //cpg1.4
  array('Слајд шоу пауза у милисекундама (1 секунда = 1000 милисекунди)', 'slideshow_interval', 0, 'f=index.htm&amp;as=admin_image_comment_slideshow_interval&amp;ae=admin_image_comment_slideshow_interval_end'), //cpg1.4

  'Поставке за коментаре', //cpg1.4
  array('Филтрирај ружне речи у коментарима', 'filter_bad_words', 1, 'f=index.htm&amp;as=admin_image_comment_bad_words&amp;ae=admin_image_comment_bad_words_end'), //cpg1.4
  array('Допусти смешка у коментарима', 'enable_smilies', 1, 'f=index.htm&amp;as=admin_image_comment_smilies&amp;ae=admin_image_comment_smilies_end'), //cpg1.4
  array('Допусти неколико  узастопних коментара о некој слици од истог корисника', 'disable_comment_flood_protect', 1, 'f=index.htm&amp;as=admin_image_comment_flood&amp;ae=admin_image_comment_flood_end'), //cpg1.4
  array('Максимални број линија у коментару', 'max_com_lines', 0, 'f=index.htm&amp;as=admin_image_comment_lines&amp;ae=admin_image_comment_lines_end'), //cpg1.4
  array('Максимална дужина коментара', 'max_com_size', 0, 'f=index.htm&amp;as=admin_image_comment_length&amp;ae=admin_image_comment_length_end'), //cpg1.4
  array('Обавести администратора о новом коментару', 'email_comment_notification', 1, 'f=index.htm&amp;as=admin_image_comment_admin_notify&amp;ae=admin_image_comment_admin_notify_end'), //cpg1.4
  array('Сортирање коментара', 'comments_sort_descending', 17, 'f=index.htm&amp;as=admin_comment_sort_start&amp;ae=admin_comment_sort_end'), //cpg1.4
  array('Ознака за анонимни коментар', 'comments_anon_pfx', 0, 'f=index.htm&amp;as=comments_anon_pfx&amp;ae=comments_anon_pfx_end'), //cpg1.4

  'Поставке слика и икона',
  array('Квалитет JPEG слика', 'jpeg_qual', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_jpeg_quality&amp;ae=admin_picture_thumbnail_jpeg_quality_end'), //cpg1.4
  array('Максимална величина иконе <a href="#notice2" class="clickable_option">**</a>', 'thumb_width', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max-dimension&amp;ae=admin_picture_thumbnail_max-dimension_end'), //cpg1.4
  array('Користи димензију ( ширину, висину или већу од обе ) <a href="#notice2" class="clickable_option">**</a>', 'thumb_use', 7, 'f=index.htm&amp;as=admin_picture_thumbnail_use-dimension&amp;ae=admin_picture_thumbnail_use-dimension_end'), //cpg1.4
  array('Креирај средњевелике слике','make_intermediate',1, 'f=index.htm&amp;as=admin_picture_thumbnail_intermediate_toggle&amp;ae=admin_picture_thumbnail_intermediate_toggle_end'), //cpg1.4
  array('Максимална ширина или висина средњевеликих слика/видеа <a href="#notice2" class="clickable_option">**</a>', 'picture_width', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_intermediate_dimension&amp;ae=admin_picture_thumbnail_intermediate_dimension_end'), //cpg1.4
  array('Максимална величина за послате документе (КБ)', 'max_upl_size', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max_upload_size&amp;ae=admin_picture_thumbnail_max_upload_size_end'), //cpg1.4
  array('Максимална ширина или висина за послате слике/видео (пиксели)', 'max_upl_width_height', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max_upload_dimension&amp;ae=admin_picture_thumbnail_max_upload_dimension_end'), //cpg1.4
  array('Аутоматски смањи слике које су веће од максималне ширине или висине', 'auto_resize', 16, 'f=index.htm&amp;as=admin_picture_thumbnail_auto-resize&amp;ae=admin_picture_thumbnail_auto-resize_end'), //cpg1.4

  'Додатне поставке за датотеке и иконе',
  array('Албуми могу бити приватни (Белешка: ако пребаците са ДА на НЕ, сви тренутно приватни албуми ће постати јавни)', 'allow_private_albums', 1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_private_toggle&amp;ae=admin_picture_thumb_advanced_private_toggle_end'), //cpg1.4
  array('Прикажи икону приватног албума непријављеном кориснику','show_private',1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_private_icon_show&amp;ae=admin_picture_thumb_advanced_private_icon_show_end'), //cpg1.4
  array('Забрањени знакови у називима слика', 'forbiden_fname_char',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_filename_forbidden_chars&amp;ae=admin_picture_thumb_advanced_filename_forbidden_chars_end'), //cpg1.4
  //array('Прихваћене екстензије за послате слике', 'allowed_file_extensions',0, 'f=index.htm&amp;as=&amp;ae=_end'), //cpg1.4
  array('Допуштени типови слика', 'allowed_img_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_pic_extensions&amp;ae=admin_picture_thumb_advanced_pic_extensions_end'), //cpg1.4
  array('Допуштени типови филмова', 'allowed_mov_types',0, 'f=index.htm&amp;as=admin_thumbs_advanced_movie&amp;ae=admin_thumbs_advanced_movie_end'), //cpg1.4
  array('Аутостарт филмова', 'media_autostart',1, 'f=index.htm&amp;as=admin_movie_autoplay&amp;ae=admin_movie_autoplay_end'), //cpg1.4
  array('Допуштени аудио типови', 'allowed_snd_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_audio_extensions&amp;ae=admin_picture_thumb_advanced_audio_extensions_end'), //cpg1.4
  array('Допуштени типови докумената', 'allowed_doc_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_doc_extensions&amp;ae=admin_picture_thumb_advanced_doc_extensions_end'), //cpg1.4
  array('Начин мењања величине слика','thumb_method',2, 'f=index.htm&amp;as=admin_picture_thumb_advanced_resize_method&amp;ae=admin_picture_thumb_advanced_resize_method_end'), //cpg1.4
  array('Стаза до програма ImageMagick (пример /usr/bin/X11/)', 'impath', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_im_path&amp;ae=admin_picture_thumb_advanced_im_path_end'), //cpg1.4
  //array('Допуштени типови слика (важи само за ImageMagick)', 'allowed_img_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_allowed_imagetypes&amp;ae=admin_picture_thumb_advanced_allowed_imagetypes_end'), //cpg1.4
  array('Командне опције за ImageMagick', 'im_options', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_im_commandline&amp;ae=admin_picture_thumb_advanced_im_commandline_end'), //cpg1.4
  array('Прочитај EXIF податке код JPEG докумената', 'read_exif_data', 13, 'f=index.htm&amp;as=admin_picture_thumb_advanced_exif&amp;ae=admin_picture_thumb_advanced_exif_end'), //cpg1.4
  array('Прочитај IPTC податке код JPEG докумената', 'read_iptc_data', 1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_iptc&amp;ae=admin_picture_thumb_advanced_iptc_end'), //cpg1.4
  array('Директориј за албуме <a href="#notice1" class="clickable_option">*</a>', 'fullpath', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_albums_dir&amp;ae=admin_picture_thumb_advanced_albums_dir_end'), //cpg1.4
  array('Директориј за слике корисника <a href="#notice1" class="clickable_option">*</a>', 'userpics', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_userpics_dir&amp;ae=admin_picture_thumb_advanced_userpics_dir_end'), //cpg1.4
  array('Префикс за средњевелике слике <a href="#notice1" class="clickable_option">*</a>', 'normal_pfx', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_intermediate_prefix&amp;ae=admin_picture_thumb_advanced_intermediate_prefix_end'), //cpg1.4
  array('Префикс за иконе <a href="#notice1" class="clickable_option">*</a>', 'thumb_pfx', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_thumbs_prefix&amp;ae=admin_picture_thumb_advanced_thumbs_prefix_end'), //cpg1.4
  array('Основна поставка за директорије', 'default_dir_mode', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_chmod_folder&amp;ae=admin_picture_thumb_advanced_chmod_folder_end'), //cpg1.4
  array('Основна поставка за документе', 'default_file_mode', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_chmod_files&amp;ae=admin_picture_thumb_advanced_chmod_files_end'), //cpg1.4

  'Поставке корисника',
  array('Допусти регистрацију нових корисника', 'allow_user_registration', 1, 'f=index.htm&amp;as=admin_allow_registration&amp;ae=admin_allow_registration_end'), //cpg1.4
  array('Допусти приступ непријављеним корисницима', 'allow_unlogged_access', 1, 'f=index.htm&amp;as=admin_allow_unlogged_access&amp;ae=admin_allow_unlogged_access_end'), //cpg1.4
  array('Регистрација корисника захтева потврду e-mailom', 'reg_requires_valid_email', 1, 'f=index.htm&amp;as=admin_registration_verify&amp;ae=admin_registration_verify_end'), //cpg1.4
  array('Обавести администратора о регистрацији e-mail-ом', 'reg_notify_admin_email', 1, 'f=index.htm&amp;as=admin_registration_notify&amp;ae=admin_registration_notify_end'), //cpg1.4
  array('Регистрација захтева одобрење администратора', 'admin_activation', 1, 'f=index.htm&amp;as=admin_activation&amp;ae=admin_activation_end'),  //cpg1.4
  array('Допусти да два корисника имају исту e-mail адресу', 'allow_duplicate_emails_addr', 1, 'f=index.htm&amp;as=admin_allow_duplicate_emails_addr&amp;ae=admin_allow_duplicate_emails_addr_end'), //cpg1.4
  array('Обавести администратора о сликама које чекају на одобрење', 'upl_notify_admin_email', 1, 'f=index.htm&amp;as=admin_approval_notify&amp;ae=admin_approval_notify_end'), //cpg1.4
  array('Допусти пријављеним корисницима да виде попис корисника', 'allow_memberlist', 1, 'f=index.htm&amp;as=admin_user_memberlist&amp;ae=admin_user_memberlist_end'), //cpg1.4
  array('Допусти корисницима да промене своју email адресу у профилу', 'allow_email_change', 1, 'f=index.htm&amp;as=admin_user_allow_email_change&amp;ae=admin_user_allow_email_change_end'), //cpg1.4
  array('Допусти корисницима да контролишу своје слике у јавним галеријама', 'users_can_edit_pics', 1, 'f=index.htm&amp;as=admin_user_editpics_public_start&amp;ae=admin_user_editpics_public_end'), //cpg1.4
  array('Број неуспешних покушаја пријаве до привремене забране (да би се спречили напади)', 'login_threshold', 0, 'f=index.htm&amp;as=admin_user_login_start&amp;ae=admin_user_login_end'), //cpg1.4
  array('Трајање привремене забране након неуспешних пријава', 'login_expiry', 0, 'f=index.htm&amp;as=admin_user_login_start&amp;ae=admin_user_login_end'), //cpg1.4
  array('Допусти поруке администратору', 'report_post', 1, 'f=index.htm&amp;as=admin_user_enable_report&amp;ae=admin_user_enable_report_end'),  //cpg1.4

// custom profile fields,  //cpg1.4
  'Додатна поља за профил корисника (остави празно ако је непотребно).
  Употреби Profile 6 за дуге уносе, као нпр. биографија', //cpg1.4
  array(' Профил 1', 'user_profile1_name', 0, 'f=index.htm&amp;as=admin_custom&amp;ae=admin_custom_end'), //cpg1.4
  array('Профил 2', 'user_profile2_name', 0), //cpg1.4
  array('Профил 3', 'user_profile3_name', 0), //cpg1.4
  array('Профил 4', 'user_profile4_name', 0), //cpg1.4
  array('Профил 5', 'user_profile5_name', 0), //cpg1.4
  array('Профил 6', 'user_profile6_name', 0), //cpg1.4

  'Додатна поља за упис информација о слици (остави празно ако је непотребно)',
  array('Поље 1', 'user_field1_name', 0, 'f=index.htm&amp;as=admin_custom_image&amp;ae=admin_custom_image_end'), //cpg1.4
  array('Поље 2', 'user_field2_name', 0),
  array('Поље 3', 'user_field3_name', 0),
  array('Поље 4', 'user_field4_name', 0),

  'Поставке кукија',
  array('Име за куки', 'cookie_name', 0, 'f=index.htm&amp;as=admin_cookie_name&amp;ae=admin_cookie_name_end'), //cpg1.4
  array('Стаза до кукија', 'cookie_path', 0, 'f=index.htm&amp;as=admin_cookie_path&amp;ae=admin_cookie_path_end'), //cpg1.4

  'Поставке Email-a  (овде се обично ништа не мења; остави сва поља празна ако ниси сигуран)', //cpg1.4
  array('SMTP послужитељ (ако је празно, употрбљава се sendmail)', 'smtp_host', 0, 'f=index.htm&amp;as=admin_email&amp;ae=admin_email_end'), //cpg1.4
  array('SMTP корисничко име', 'smtp_username', 0), //cpg1.4
  array('SMTP лозинка', 'smtp_password', 0), //cpg1.4

  'Логови и статистика', //cpg1.4
  array('Начин записивања логова <a href="#notice3" class="clickable_option">***</a>', 'log_mode', 11, 'f=index.htm&amp;as=admin_logging_log_mode&amp;ae=admin_logging_log_mode_end'), //cpg1.4
  array('Логирање слања е-разгледница', 'log_ecards', 1, 'f=index.htm&amp;as=admin_general_log_ecards&amp;ae=admin_general_log_ecards_end'), //cpg1.4
  array('Логирај детаљну статистику о гласању','vote_details',1, 'f=index.htm&amp;as=admin_logging_votedetails&amp;ae=admin_logging_votedetails_end'), //cpg1.4
  array('Логирај детаљну статистику о посетама','hit_details',1, 'f=index.htm&amp;as=admin_logging_hitdetails&amp;ae=admin_logging_hitdetails_end'), //cpg1.4

  'Одржавање галерије', //cpg1.4
  array('Омогући debug mode', 'debug_mode', 9, 'f=index.htm&amp;as=debug_mode&amp;ae=debug_mode_end'), //cpg1.4
  array('Прикажи обавести у debug modu', 'debug_notice', 1, 'f=index.htm&amp;as=admin_misc_debug_notices&amp;ae=admin_misc_debug_notices_end'), //cpg1.4
  array('Галерија није у функцији', 'offline', 1, 'f=index.htm&amp;as=admin_general_offline&amp;ae=admin_general_offline_end'), //cpg1.4
);


// ------------------------------------------------------------------------- //
// File db_ecard.php
// ------------------------------------------------------------------------- //

if (defined('DB_ECARD_PHP')) $lang_db_ecard_php = array(
  'title' => 'Послане е-разгледнице',
  'ecard_sender' => 'Пошиљалац',
  'ecard_recipient' => 'Прималац',
  'ecard_date' => 'Датум',
  'ecard_display' => 'Прикажи е-разгледницу',
  'ecard_name' => 'Име',
  'ecard_email' => 'Email',
  'ecard_ip' => 'IP #',
  'ecard_ascending' => 'узлазно',
  'ecard_descending' => 'силазно',
  'ecard_sorted' => 'Сортирано',
  'ecard_by_date' => 'по датуму',
  'ecard_by_sender_name' => 'по пошиљаоцу',
  'ecard_by_sender_email' => 'по email-у пошиљаоца',
  'ecard_by_sender_ip' => 'по IP адреси пошиљаоца',
  'ecard_by_recipient_name' => 'по примаоцу',
  'ecard_by_recipient_email' => 'по email-у примаоца',
  'ecard_number' => 'приказани записи од %s до %s од %s',
  'ecard_goto_page' => 'иди на страницу',
  'ecard_records_per_page' => 'Записа по страници',
  'check_all' => 'Означи све',
  'uncheck_all' => 'Немој означити ништа',
  'ecards_delete_selected' => 'Бриши означене е-разгледнице',
  'ecards_delete_confirm' => 'Јесте ли сигурни да желите избрисати записе? Означите кућицу!',
  'ecards_delete_sure' => 'Сигуран сам',
);


// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
  'empty_name_or_com' => 'Требате уписати своје име и коментар',
  'com_added' => 'Ваш коментар је додан',
  'alb_need_title' => 'Требате уписати назив албума !',
  'no_udp_needed' => 'Није потребно освежавање.',
  'alb_updated' => 'Албум је освежен',
  'unknown_album' => 'Одабрани албум не постоји или немате допуштење за пребацивање слика у овај албум',
  'no_pic_uploaded' => 'Није пребачена ниједна слика !<br /><br />Ако сте сигурно одабрали слику за пребацивање, проверите да ли је пребацивање дозвољено...',
  'err_mkdir' => 'Директориј %s није креиран !',
  'dest_dir_ro' => 'У тражени директориј %s се не може писати !',
  'err_move' => 'Немогуће преместити %s у %s !',
  'err_fsize_too_large' => 'Димензије слике су превелике (дозвољено је %s x %s) !', //obsolete since cpg1.3 - consider removal in cpg1.4 once upload.php has been overhauled
  'err_imgsize_too_large' => 'Величина документа је превелика (максимална допуштена је %s КБ) !', //obsolete since cpg1.3 - consider removal in cpg1.4 once upload.php has been overhauled
  'err_invalid_img' => 'Послата слика није у дозвољеном формату !',
  'allowed_img_types' => 'Можете послати само %s слике.',
  'err_insert_pic' => 'Документ \'%s\' се не може додати у албум ',
  'upload_success' => 'Ваша слика је успешно пребачена.<br /><br />Биће видљива након одобрења администратора.',
  'notify_admin_email_subject' => '%s - Обавест о послатој слици',
  'notify_admin_email_body' => 'На одобрење чека слика коју је додао %s. Посетите %s',
  'info' => 'Информације',
  'com_added' => 'Коментар додан',
  'alb_updated' => 'Албум освежен',
  'err_comment_empty' => 'Коментар је празан !',
  'err_invalid_fext' => 'Прихваћају се само документи са следећим екстензијама : <br /><br />%s.',
  'no_flood' => 'Žao mi je, ali Vi ste već аутор последњег коментара за ову слику<br /><br />Уредите коментар којег сте написали, ако га желите изменити',
  'redirect_msg' => 'Преусмерени сте.<br /><br /><br />Кликните \'НАПРЕД\' ако се страница аутоматски не обнови',
  'upl_success' => 'Ваше слике су успешно додане',
  'email_comment_subject' => 'Додани коментар у галерију',
  'email_comment_body' => 'Неко је написао нови коментар. Погледајте га на',
  'album_not_selected' => 'Албум није изабран', //cpg1.4
  'com_author_error' => 'Регистровани корисник користи тај ник, пријави се или изабери други', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
  'caption' => 'Наслов',
  'fs_pic' => 'слика у пуној величини',
  'del_success' => 'Успешно избрисано',
  'ns_pic' => 'нормална величина слике',
  'err_del' => 'не може се избрисати',
  'thumb_pic' => 'икона',
  'comment' => 'коментар',
  'im_in_alb' => 'слика у албуму',
  'alb_del_success' => 'Албум &laquo;%s&raquo; избрисан', //cpg1.4
  'alb_mgr' => 'Уређивање албума',
  'err_invalid_data' => 'Погрешни подаци у \'%s\'',
  'create_alb' => 'Креирам албум \'%s\'',
  'update_alb' => 'Освежавам албум \'%s\' с насловом \'%s\' и индексом \'%s\'',
  'del_pic' => 'Избриши слику',
  'del_alb' => 'Избриши албум',
  'del_user' => 'Избриши корисника',
  'err_unknown_user' => 'Одабрани корисник не постоји !',
  'err_empty_groups' => 'Група не постоји или је празна!', //cpg1.4
  'comment_deleted' => 'Коментар је успешно избрисан',
  'npic' => 'Слике', //cpg1.4
  'pic_mgr' => 'Уређивање слика', //cpg1.4
  'update_pic' => 'Освежавам слику \'%s\' с насловом \'%s\' и индексом \'%s\'', //cpg1.4
  'username' => 'Корисничко име', //cpg1.4
  'anonymized_comments' => '%s анонимних коментара', //cpg1.4
  'anonymized_uploads' => '%s анонимно послатих слика', //cpg1.4
  'deleted_comments' => '%s избрисаних коментара', //cpg1.4
  'deleted_uploads' => '%s избрисаних послатих слика', //cpg1.4
  'user_deleted' => 'корисник %s избрисан', //cpg1.4
  'activate_user' => 'Активирај корисника', //cpg1.4
  'user_already_active' => 'Налог је већ активиран', //cpg1.4
  'activated' => 'Активиран', //cpg1.4
  'deactivate_user' => 'Деактивирај корисника', //cpg1.4
  'user_already_inactive' => 'Налог је већ деактивиран', //cpg1.4
  'deactivated' => 'Деактивиран', //cpg1.4
  'reset_password' => 'Ресет лозинке', //cpg1.4
  'password_reset' => 'Лозинка ресетована у %s', //cpg1.4
  'change_group' => 'Промени основну групу', //cpg1.4
  'change_group_to_group' => 'Мењам из %s у %s', //cpg1.4
  'add_group' => 'Додај секундарну групу', //cpg1.4
  'add_group_to_group' => 'Додавање корисника %s у групу %s. Корисник је сада члан примарне групе %s и члан секундарне групе %s.', //cpg1.4
  'status' => 'Статус', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File displayecard.php
// ------------------------------------------------------------------------- //

if (defined('DISPLAYECARD_PHP')) {

$lang_displayecard_php = array(
  'invalid_data' => 'Подаци за приказ е-разгледнице су оштећени од стране вашег mail програма.', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File displayimage.php
// ------------------------------------------------------------------------- //

if (defined('DISPLAYIMAGE_PHP')){

$lang_display_image_php = array(
  'confirm_del' => 'Јесте ли сигурни да желите ИЗБРИСАТИ ову слику ? \\nКоментари о њој ће такође бити избрисани.', //js-alert
  'del_pic' => 'ИЗБРИШИ ОВУ СЛИКУ',
  'size' => '%s x %s пиксела',
  'views' => '%s пута',
  'slideshow' => 'Слајд шоу',
  'stop_slideshow' => 'ЗАУСТАВИ СЛАЈД ШОУ',
  'view_fs' => 'Кликни за слику у пуној величини',
  'edit_pic' => 'Уреду опис', //cpg1.4
  'crop_pic' => 'Смањи и ротирај',
  'set_player' => 'Промени плејер',
);

$lang_picinfo = array(
  'title' =>'Подаци о слици',
  'Filename' => 'Назив документа',
  'Album name' => 'Назив албума',
  'Rating' => 'Оцена (бр. гласова:%s)',
  'Keywords' => 'Кључне речи',
  'File Size' => 'Величина документа',
  'Date Added' => 'Датум додавања', //cpg1.4
  'Dimensions' => 'Димензије',
  'Displayed' => 'Приказана',
  'URL' => 'URL', //cpg1.4
  'Make' => 'Произвођач', //cpg1.4
  'Model' => 'Модел фотоапарата', //cpg1.4
  'DateTime' => 'Датум и време', //cpg1.4
  'ISOSpeedRatings'=>'Оцена ISO брзине', //cpg1.4
  'MaxApertureValue' => 'Макс. отвор бленде', //cpg1.4
  'FocalLength' => 'Дужина жаришта', //cpg1.4
  'Comment' => 'Коментар',
  'addFav'=>'Додај у Омиљене слике',
  'addFavPhrase'=>'Омиљене слике',
  'remFav'=>'Уклони из Омиљених слика',
  'iptcTitle'=>'IPTC Наслов',
  'iptcCopyright'=>'IPTC Copyright',
  'iptcKeywords'=>'IPTC кључне речи',
  'iptcCategory'=>'IPTC категорија',
  'iptcSubCategories'=>'IPTC подкатегорија',
  'ColorSpace' => 'Колорит', //cpg1.4
  'ExposureProgram' => 'Програм експозиције', //cpg1.4
  'Flash' => 'Блиц', //cpg1.4
  'MeteringMode' => 'Начин мерења', //cpg1.4
  'ExposureTime' => 'Време експозиције', //cpg1.4
  'ExposureBiasValue' => 'Наставак експозиције', //cpg1.4
  'ImageDescription' => ' Опис слике', //cpg1.4
  'Orientation' => 'Орјентација', //cpg1.4
  'xResolution' => 'X резолуција', //cpg1.4
  'yResolution' => 'Y резолуција', //cpg1.4
  'ResolutionUnit' => 'Јединица резолуције', //cpg1.4
  'Software' => 'Софтвер', //cpg1.4
  'YCbCrPositioning' => 'Положај YCbCr', //cpg1.4
  'ExifOffset' => 'Exif Offset', //cpg1.4
  'IFD1Offset' => 'IFD1 Offset', //cpg1.4
  'FNumber' => 'FБрој', //cpg1.4
  'ExifVersion' => 'Exif верзија', //cpg1.4
  'DateTimeOriginal' => 'Оригинални датум и време', //cpg1.4
  'DateTimedigitized' => 'Датум и време дигитализације', //cpg1.4
  'ComponentsConfiguration' => 'Поставке компоненти', //cpg1.4
  'CompressedBitsPerPixel' => 'Компресованих бита по пикселу', //cpg1.4
  'LightSource' => 'Извор светлости', //cpg1.4
  'ISOSetting' => 'ISO поставке', //cpg1.4
  'ColorMode' => 'Боја', //cpg1.4
  'Quality' => 'Квалитет', //cpg1.4
  'ImageSharpening' => 'Оштрина слике', //cpg1.4
  'FocusMode' => 'Фокус', //cpg1.4
  'FlashSetting' => 'Поставке блица', //cpg1.4
  'ISOSelection' => 'Избор ISO', //cpg1.4
  'ImageAdjustment' => 'Дотеривање слике', //cpg1.4
  'Adapter' => 'Адаптер', //cpg1.4
  'ManualFocusDistance' => 'Ручна жаришна дужина', //cpg1.4
  'DigitalZoom' => 'Дигитални зум', //cpg1.4
  'AFFocusPosition' => 'Положај ауто фокуса', //cpg1.4
  'Saturation' => 'Засићеност', //cpg1.4
  'NoiseReduction' => 'Смањење шума', //cpg1.4
  'FlashPixVersion' => 'Верзија Блиц пикс.', //cpg1.4
  'ExifImageWidth' => 'Exif ширина слике', //cpg1.4
  'ExifImageHeight' => 'Exif висина слике', //cpg1.4
  'ExifInteroperabilityOffset' => 'Exif Interoperability Offset', //cpg1.4
  'FileSource' => 'Изворна датотека', //cpg1.4
  'SceneType' => 'Тип сцене', //cpg1.4
  'CustomerRender' => 'Customer Render', //cpg1.4
  'ExposureMode' => 'Начин осветљења', //cpg1.4
  'WhiteBalance' => 'Поравнање белине', //cpg1.4
  'DigitalZoomRatio' => 'Размера дигиталног зума', //cpg1.4
  'SceneCaptureMode' => 'Начин хватања позадине', //cpg1.4
  'GainControl' => 'Контрола увећања', //cpg1.4
  'Contrast' => 'Контраст', //cpg1.4
  'Saturation' => 'Засићење', //cpg1.4
  'Sharpness' => 'Оштрина', //cpg1.4
  'ManageExifDisplay' => 'Уређивање приказа Exif', //cpg1.4
  'submit' => 'Пошаљи', //cpg1.4
  'success' => 'Подаци успешно освежени.', //cpg1.4
  'details' => 'Појединости', //cpg1.4
);

$lang_display_comments = array(
  'OK' => 'У реду',
  'edit_title' => 'Уреди коментар',
  'confirm_delete' => 'Јесте ли сигурни да желите избрисати коментар ?', //js-alert
  'add_your_comment' => 'Додај коментар',
  'name'=>'Име',
  'comment'=>'Коментар',
  'your_name' => 'Anonimus',
  'report_comment_title' => 'Обавести администратора о овом коментару', //cpg1.4
);

$lang_fullsize_popup = array(
  'click_to_close' => 'Кликни слику за затварање прозора',
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
  'title' => 'Пошаљи е-разгледницу',
  'invalid_email' => '<font color="red"><b>Упозорење</b></font>: неважећа e-mail адреса:', //cpg1.4
  'ecard_title' => 'Е-разгледница од %s за Вас',
  'error_not_image' => 'Само се слике могу послати као е-разгледнице.',
  'view_ecard' => 'Ако се е-разгледница не прикаже правилно, кликните на овај линк', //cpg1.4
  'view_ecard_plaintext' => 'Да бисте видели е-разгледницу, copy-paste увај url у адресну траку свог прегледника:', //cpg1.4
  'view_more_pics' => 'Кликните на овај линк да бисте видели више слика !', //cpg1.4
  'send_success' => 'Разгледница је послата',
  'send_failed' => 'Жао нам је, али сервер не може послати Вашу разгледницу...',
  'from' => 'Од',
  'your_name' => 'Ваше име',
  'your_email' => 'Ваша e-mail адреса',
  'to' => 'Зa',
  'rcpt_name' => 'Име примаоца',
  'rcpt_email' => 'E-mail адреса примаоца',
  'greetings' => 'Поздрав', //cpg1.4
  'message' => 'Порука', //cpg1.4
  'ecards_footer' => 'Послато од %s са IP %s у %s', //cpg1.4
  'preview' => 'Претходни преглед е-разгледнице', //cpg1.4
  'preview_button' => 'Претходни преглед', //cpg1.4
  'submit_button' => 'Пошаљи', //cpg1.4
  'preview_view_ecard' => 'То је алтернативни линк за преглед разгледнице -  није употребљив при прегледу .', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File report_file.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('REPORT_FILE_PHP') || defined('DISPLAYREPORT_PHP')) $lang_report_php =array(
  'title' => 'Пријава администратору', //cpg1.4
  'invalid_email' => '<b>Упозорење</b> : неисправна email адреса !', //cpg1.4
  'report_subject' => 'Пријава %s о галерији %s', //cpg1.4
  'view_report' => 'Алтернативни линк ако пријава није исправно приказана', //cpg1.4
  'view_report_plaintext' => 'Да би видео пријаву, copy-paste oвaj url у адресну траку свог прегледника:', //cpg1.4
  'view_more_pics' => 'Галерија', //cpg1.4
  'send_success' => 'Ваша пријава је послата', //cpg1.4
  'send_failed' => 'Жалим, сервер не може послати вашу пријаву...', //cpg1.4
  'from' => 'Од', //cpg1.4
  'your_name' => 'Ваше име', //cpg1.4
  'your_email' => 'Ваша email адреса', //cpg1.4
  'to' => 'За', //cpg1.4
  'administrator' => 'Администратор/Мод', //cpg1.4
  'subject' => 'Субјект', //cpg1.4
  'comment_field_name' => 'Пријава о коментару од "%s"', //cpg1.4
  'reason' => 'Разлог', //cpg1.4
  'message' => 'Порука', //cpg1.4
  'report_footer' => 'Послато од %s са IP %s у %s (време на серверу)', //cpg1.4
  'obscene' => 'непристојно', //cpg1.4
  'offensive' => 'агресивно', //cpg1.4
  'misplaced' => 'не односи се на тему/неумесно', //cpg1.4
  'missing' => 'пропуштено', //cpg1.4
  'issue' => 'грешка/не може се видети', //cpg1.4
  'other' => 'остало', //cpg1.4
  'refers_to' => 'Датотека са пријавом се односи на', //cpg1.4
  'reasons_list_heading' => 'разлог за пријаву:', //cpg1.4
  'no_reason_given' => 'разлог није наведен', //cpg1.4
  'go_comment' => 'Пођите на коментар', //cpg1.4
  'view_comment' => 'Видите пријаву са коментаром', //cpg1.4
  'type_file' => 'датотека', //cpg1.4
  'type_comment' => 'коментар', //cpg1.4
  'invalid_data' => 'Подаци о пријави су оштећени од вашег mail клијента. Проверите да ли је линк комплетан.', //cpg1.4

);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
  'pic_info' => 'Информација о слици',
  'album' => 'Албум',
  'title' => 'Наслов',
  'filename' => 'Име датотеке', //cpg1.4
  'desc' => 'Опис',
  'keywords' => 'Кључне речи',
  'new_keyword' => 'Нова кључна реч', //cpg1.4
  'new_keywords' => 'Нове кључне речи', //cpg1.4
  'existing_keyword' => 'Постојеће кључне речи', //cpg1.4
  'pic_info_str' => '%sx%s - %sКБ - %s виђења - %s оцена',
  'approve' => 'Одобри слику',
  'postpone_app' => 'Одгоди одобрење',
  'del_pic' => 'Обриши слику',
  'del_all' => 'Обриши све слике', //cpg1.4
  'read_exif' => 'Поново прочитај EXIF podatke',
  'reset_view_count' => 'Ресетуј бројач виђења',
  'reset_all_view_count' => 'Ресетуј СВЕ бројаче виђења', //cpg1.4
  'reset_votes' => 'Ресетуј оцене',
  'reset_all_votes' => 'Ресетуј СВЕ оцене', //cpg1.4
  'del_comm' => 'Обриши коментаре',
  'del_all_comm' => 'Обриши СВЕ коментаре', //cpg1.4
  'upl_approval' => 'Одобрење послатог материјала', //cpg1.4
  'edit_pics' => 'Уреди слику',
  'see_next' => 'Следећа слика',
  'see_prev' => 'Претходна слика',
  'n_pic' => '%s слика',
  'n_of_pic_to_disp' => 'Број слика за приказ',
  'apply' => 'Прихвати измене',
  'crop_title' => 'Коперминов уређивач слика',
  'preview' => 'Претходни преглед',
  'save' => 'Сачувај слику',
  'save_thumb' =>'Сачувај као икону',
  'gallery_icon' => 'Направи из те слике моју корисничку икону', //cpg1.4
  'sel_on_img' =>'Селекција је могућа само унутар слике!', //js-alert
  'album_properties' =>'Атрибути албума', //cpg1.4
  'parent_category' =>'Надређена категорија', //cpg1.4
  'thumbnail_view' =>'Приказ икона', //cpg1.4
  'select_unselect' =>'селектуј/деселектуј све', //cpg1.4
  'file_exists' => "Одредишна датотека '%s' већ постоји.", //cpg1.4
  'rename_failed' => "Преименовање '%s' у '%s није успело'.", //cpg1.4
  'src_file_missing' => "Недостаје изворна датотека '%s'.", // cpg 1.4
  'mime_conv' => "Не могу конвертовати '%s' у '%s'",//cpg1.4
  'forb_ext' => 'Недопуштена екстензија датотеке.',//cpg1.4
);

// ------------------------------------------------------------------------- //
// File faq.php
// ------------------------------------------------------------------------- //

if (defined('FAQ_PHP')) $lang_faq_php = array(
  'faq' => 'Често постављана питања',
  'toc' => 'Садржај',
  'question' => 'Питање: ',
  'answer' => 'Одговор: ',
);

if (defined('FAQ_PHP')) $lang_faq_data = array(
  'Општа ЧПП',
  array('Зашто се требам регистровати?', 'Администратор може, али не мора захтевати регистрацију. Регистрација кориснику омогућава додатне могућности, као додавање слика, поседовање листе омиљених слика, могућност оцењивања слика, писања коментара, итд.', 'allow_user_registration', '1'),
  array('Како се регистровати?', 'Кликните на &quot;Регистрација&quot; и испуните потребна поља (и опционална ако то желите).<br />Ако администратор има e-mail активацију , тада ћете након слања Ваших података примити e-mail на адресу коју сте навели приликом регистрације, у којем су упутства о томе како активирати Ваше чланство. Морате активирати чланство како бисте се могли пријавити.', 'allow_user_registration', '1'), //cpg1.4
  array('Како да се пријавим?', 'Кликните на &quot;Пријава&quot;, унесите Ваше корисничко име и лозинку и кликните на &quot;Упамти ме&quot; тако ћете бити пријављени и ако напустите страницу.<br /><b>ВАЖНО:Кукији морају бити укључени и куки с ових страница се не сме избрисати како би се могла користити опција &quot;Упамти ме&quot;.</b>', 'offline', 0),
  array('Зашто се не могу пријавити?', 'Јесте ли се регистровали и одговорили на линк који Вам је послат у e-mail поруци?. Овај линк активира Ваше чланство. За друге проблеме у вези пријаве контактирајте администратора.', 'offline', 0),
  array('Шта ако сам заборавио лозинку?', 'Ако ова страница има &quot;Заборављена лозинка&quot; линк онда га употребите. У другим случајевима контактирајте администратора за нову лозинку.', 'offline', 0),
  //array('Шта ако променим своју email адресу?', Пријави се и промени своју email адресу у &quot;Профил&quot;', 'offline', 0),
  array('Како ћу сачувати слику у &quot;Омиљене слике&quot;?', 'Кликните на слику и кликните на &quot;инфо о слици&quot; линк (<img src="images/info.gif" width="16" height="16" border="0" alt="Информације о слици" />); одите на информације о слици и кликните &quot;Додај у омиљена&quot;.<br />Администратор може омогућити &quot;информације о слици&quot; у основној поставци.<br />ВАЖНО:Кукији морају бити укључени и куки с ових страница се не сме избрисати.', 'offline', 0),
  array('Како ћу оценити слику?', 'Кликните на икону слике, идите на дно, те одаберите оцену.', 'offline', 0),
  array('Како ћу написати коментар за слику?', 'Кликните на икону слике, идите на дно, те напишите коментар.', 'offline', 0),
  array('Како да додам слику?', 'Кликните на &quot;Пошаљи слику&quot;и одаберите албум у који желите да је пошаљете. Кликните на &quot;Browse,&quot; одаберите слику за слање, и кликните &quot;open.&quot; Додајте наслов и опис, ако желите. Кликните на &quot;Пошаљи&quot;.<br /><br />Алтернативно, за кориснике <b>Windows XP-a</b>, можете послати више слика директно у свој приватни албум користећи XP Publishing wizard.<br />За инструкције и за преузимање неопходних registry датотека, кликните <a href="xp_publish.php">oвде.</a>', 'allow_private_albums', 1), //cpg1.4
  array('Где ћу послати слику?', 'Моћи ћете послати слику у један од Ваших албума у &quot;Moja galerija&quot;. Администратор Вам може допустити да пошаљете једну или више слика у албуме у главној галерији.', 'allow_private_albums', 0),
  array('Који тип и коју величину слика могу послати?', 'Величина и тип (jpg,gif,..итд.) зависе од администратора.', 'offline', 0),
  array('Како ћу креирати, променити назив или избрисати албум у &quot;Моја галерија&quot;?', 'Морате бити у &quot;Администрација&quot;<br />Кликните на &quot;Креирај/Поредај моје албуме&quot;и кликните на &quot;Ново&quot;. Промените &quot;Нови албум&quot; у жељено име.<br />Такође можете преименовати било који албум у Вашој галерији.<br />Кликните на &quot;Прихвати промене&quot;.', 'allow_private_albums', 0),
  array('Како могу изменити и онемогућити кориснике да гледају моје албуме?', 'Морате бити у &quot;Администрација&quot;<br />Кликните на &quot;Промени моје албуме&quot;. На &quot;Освежи албум&quot; бару, одаберите албум којег желите изменити.<br />Овде можете променити назив, опис, икону, ограничити допуштење за прегледање и коментарисање/оцењивање.<br />Кликните на &quot;Освежи албум&quot;.', 'allow_private_albums', 0),
  array('Како могу гледати албуме других корисника?', 'Кликните на &quot;Попис албума&quot; и одаберите &quot;Корисничке галерије&quot;.', 'allow_private_albums', 0),
  array('Шта су кукији (cookies)?', 'Кукији су текстуални подаци који се шаљу са страница и који се постављају на Ваш компјутер.<br />Кукији обично допуштају кориснику да напусти неке странице и да се касније на њих врати без поновне пријаве.', 'offline', 0),


  'Навигација по галерији',
  array('Шта је &quot;Попис албума&quot;?', 'Тај линк ће Вам показати целу галерију у којој се тренутно налазите, са линком за сваки албум. Ако се не налазите ни у једној категорији, биће Вам приказана цела галерија са линковима за сваку категорију. Иконе мугу бити линк за категорије.', 'offline', 0),
  array('Шта је &quot;Моја галерија&quot;?', 'Овим се омогућује корисницима да отварају властите галерије и да додају/бришу или мењају албуме као и да у њих шаљу слике.', 'allow_private_albums', 1), //cpg1.4
  array('Каква је разлика између &quot;Администрација&quot; и &quot;Корисници&quot;?', 'Када сте у админ-моду, можете модификовати своје галерије (као и друге ако Вам то допусти администратор).', 'allow_private_albums', 0),
  array('Шта је &quot;Пошаљи слику&quot;?', 'Ова могућност допушта кориснику да пошаље слику (величину и врсту одређује администратор) у галерију коју одабере или корисник или администратор.', 'allow_private_albums', 0),
  array('Шта је &quot;Задње додате слике&quot;?', 'Ова рубрика показује последње слике послате у галерију.', 'offline', 0),
  array('Шта је &quot;Последњи коментари&quot;?', 'Ова рубрика показује последње коментаре уз слике које су написали корисници.', 'offline', 0),
  array('Шта је &quot;Најгледаније&quot;?', 'Ова рубрика показује најгледаније слике од стране корисника (било да су пријављени или не).', 'offline', 0),
  array('Шта је &quot;Најбоље оцењене&quot;?', 'Ова рубрика показује најбоље оцењене слике од стране корисника, те показује просечну оцену (нпр: пет корисника, сваки је дао оцену <img src="images/rating3.gif" width="65" height="14" border="0" alt="" />: слика би имала просечну оцену <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> ;Ако пет корисника оцени слику од 1 до 5 (1,2,3,4,5), резултат је просек <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> .)<br />Оцене се крећу од <img src="images/rating5.gif" width="65" height="14" border="0" alt="одлично" /> (одлично) до <img src="images/rating0.gif" width="65" height="14" border="0" alt="лоше" /> (лоше).', 'offline', 0),
  array('Шта је &quot;Omiljene slike&quot;?', 'Ова рубрика омогућава корисницима да сачувају омиљене слике у кукију који је послат на компјутер.', 'offline', 0),
);


// ------------------------------------------------------------------------- //
// File forgot_passwd.php
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) $lang_forgot_passwd_php = array(
  'forgot_passwd' => 'Обнова лозинке',
  'err_already_logged_in' => 'Већ сте пријављени !',
  'enter_email' => 'Унесите своју email адресу', //cpg1.4
  'submit' => 'Напред',
  'illegal_session' => 'Сесија за обнову лозинке је погрешна или истекла.', //cpg1.4
  'failed_sending_email' => 'E-mail за обнову лозинке се не може послати !',
  'email_sent' => 'E-mail са Вашим корисничким именом и лозинком је послат %s', //cpg1.4
  'verify_email_sent' => 'E-mail је послат на %s. Проверите email да би окончали процес.', //cpg1.4
  'err_unk_user' => 'Одабрани корисник не постоји!',
  'account_verify_subject' => '%s - Захтев за нову лозинку', //cpg1.4
  'account_verify_body' => 'Захтевали сте нову лозинку. Ако желите наставити, кликните на следећи линк:

%s', //cpg1.4
  'passwd_reset_subject' => '%s - Обнова лозинке', //cpg1.4
  'passwd_reset_body' => 'Доле је нова лозинка коју сте захтевали:
Корисничко име: %s
Лозинка: %s
Кликните %s за пријаву.', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
  'group_name' => 'Име групе', //cpg1.4
  'permissions' => 'Дозволе', //cpg1.4
  'public_albums' => 'Додавање у јавне албуме', //cpg1.4
  'personal_gallery' => 'Личне галерије', //cpg1.4
  'upload_method' => 'Начин слања фотографија', //cpg1.4
  'disk_quota' => 'Диск', //cpg1.4
  'rating' => 'Оцењивање', //cpg1.4
  'ecards' => 'Разгледнице', //cpg1.4
  'comments' => 'Коментари', //cpg1.4
  'allowed' => 'Дозвољено', //cpg1.4
  'approval' => 'Одобрење', //cpg1.4
  'boxes_number' => 'Број поља', //cpg1.4
  'variable' => 'променљиво', //cpg1.4
  'fixed' => 'фиксно', //cpg1.4
  'apply' => 'Прихвати промене',
  'create_new_group' => 'Додај нову групу',
  'del_groups' => 'Бриши означене групе',
  'confirm_del' => 'Упозорење: када обришете групу, сви њени корисници ће бити пребачени у групу \'Registered\' group !\n\nЖелите ли наставити ?', //js-alert
  'title' => 'Уређивање корисничких група',
  'num_file_upload' => 'Поља при слању датотеке', //cpg1.4
  'num_URI_upload' => 'Поља при слању URI', //cpg1.4
  'reset_to_default' => 'Ресетуј у основно име (%s) - препоручено!', //cpg1.4
  'error_group_empty' => 'Табела групе је празна !<br /><br />Основне групе су креиране, молим освежите ову страницу', //cpg1.4
  'explain_greyed_out_title' => 'Зашто је редак посивљен?', //cpg1.4
  'explain_guests_greyed_out_text' => 'Не можете променити атрибуте ове групе јер сте поставили опцију &quot; Дозволи непријављеним корисницима (гост или анонимус) приступ; на &quot;НЕ&quot; на страни са поставкама. Сви чланови групе %s) се могу само пријавити; Због тога поставке групе на њих не утичу.', //cpg1.4
  'explain_banned_greyed_out_text' => 'Не можете променити атрибуте групе %s јер њени чланови ионако не могу учинити ништа.', //cpg1.4
  'group_assigned_album' => 'припадајући албум(и)', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
  'welcome' => 'Добро дошли !',
);

$lang_album_admin_menu = array(
  'confirm_delete' => 'Јесте ли сигурни да желите ИЗБРИСАТИ овај албум ? \\nСве слике и коментари ће такође бити избрисани.', //js-alert
  'delete' => 'БРИСАЊЕ',
  'modify' => 'КАРАКТЕРИСТИКЕ',
  'edit_pics' => 'УРЕЂИВАЊЕ',
);

$lang_list_categories = array(
  'home' => 'Почетна',
  'stat1' => 'Бр. слика:<b>[pictures]</b> - бр. албума:<b>[albums]</b> - бр. категорија:<b>[cat]</b>  - бр. коментара:<b>[comments]</b> - бр. виђења:<b>[views]</b>',
        'stat2' => 'Бр. слика:<b>[pictures]</b> - бр. албума:<b>[albums]</b> - бр. виђења<b>[views]</b>',
        'xx_s_gallery' => 'Галерија - %s',
        'stat3' => 'Бр. слика:<b>[pictures]</b> - бр. албума:<b>[albums]</b> - бр. коментара:<b>[comments]</b>  - бр. виђења:<b>[views]</b>'
);

$lang_list_users = array(
  'user_list' => 'Попис корисника',
  'no_user_gal' => 'Нема галерија корисника',
  'n_albums' => 'Бр. албума:%s',
  'n_pics' => 'Бр. слика:%s',
);

$lang_list_albums = array(
  'n_pictures' => 'Бр. слика:%s',
  'last_added' => ', задња додана %s',
  'n_link_pictures' => '%s повезаних слика', //cpg1.4
  'total_pictures' => 'Укупно слика:%s', //cpg1.4
);

}

// ------------------------------------------------------------------------- //
// File keywordmgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('KEYWORDMGR_PHP')) $lang_keywordmgr_php = array(
  'title' => 'Уређивање кључних речи', //cpg1.4
  'edit' => 'уреди', //cpg1.4
  'delete' => 'бриши', //cpg1.4
  'search' => 'тражи', //cpg1.4
  'keyword_test_search' => 'тражи %s у новом прозору', //cpg1.4
  'keyword_del' => 'бриши кључну реч %s', //cpg1.4
  'confirm_delete' => 'Јесте ли сигурни да желите обрисати кључну реч %s из целе галерије?', //cpg1.4  // js-alert
  'change_keyword' => 'промени кључну реч', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
  'login' => 'Пријава',
  'enter_login_pswd' => 'Унесите Ваше корисничко име и лозинку',
  'username' => 'Корисничко име',
  'password' => 'Лозинка',
  'remember_me' => 'Упамти ме',
  'welcome' => 'Добро дошли %s ...',
  'err_login' => '*** Неуспела пријава. Покушајте поновно ***',
  'err_already_logged_in' => 'Већ сте пријављени !',
  'forgot_password_link' => 'Заборавио сам лозинку',
  'cookie_warning' => 'Упозорење: Ваш прегледник не омогућава употребу кукија', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
  'logout' => 'Одјава',
  'bye' => 'До виђења %s ...',
  'err_not_loged_in' => 'Нисте пријављени !',
);

// ------------------------------------------------------------------------- //
// File minibrowser.php  //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('MINIBROWSER_PHP')) $lang_minibrowser_php = array(
  'close' => 'затвори', //cpg1.4
  'submit' => 'Напред', //cpg1.4
  'up' => 'горе за један ниво', //cpg1.4
  'current_path' => 'тренутна стаза', //cpg1.4
  'select_directory' => 'изаберите директориј', //cpg1.4
  'click_to_close' => 'Кликните на слику да затворите прозор',
);

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
  'upd_alb_n' => 'Освежи албум %s',
  'general_settings' => 'Основне поставке',
  'alb_title' => 'Назив албума',
  'alb_cat' => 'Категорија албума',
  'alb_desc' => 'Опис албума',
  'alb_keyword' => 'Кључна реч за албум', //cpg1.4
  'alb_thumb' => 'Икона албума',
  'alb_perm' => 'Дозволе за овај албум',
  'can_view' => 'Албум могу видети',
  'can_upload' => 'Посетиоци могу слати слике',
  'can_post_comments' => 'Посетиоци могу писати коментаре',
  'can_rate' => 'Посетиоци могу оцењивати слике',
  'user_gal' => 'Галерија корисника',
  'no_cat' => '* Нема категорије *',
  'alb_empty' => 'Албум је празан',
  'last_uploaded' => 'Задње послато...',
  'public_alb' => 'Сви (јавни албум)',
  'me_only' => 'Само ја',
  'owner_only' => 'Само власник албума (%s)',
  'groupp_only' => 'Чланови групе \'%s\'',
  'err_no_alb_to_modify' => 'У бази података нема албума који се могу мењати.',
  'update' => 'Освежи албум',
  'reset_album' => 'Ресетуј албум', //cpg1.4
  'reset_views' => 'Ресетуј бројач виђења на &quot;0&quot; у %s', //cpg1.4
  'reset_rating' => 'Ресетуј оцене свих слика у %s', //cpg1.4
  'delete_comments' => 'Бриши све коментаре у %s', //cpg1.4
  'delete_files' => '%sНеповратно брише све слике у %s', //cpg1.4
  'views' => 'виђења', //cpg1.4
  'votes' => 'гласова', //cpg1.4
  'comments' => 'коментара', //cpg1.4
  'files' => 'датотека', //cpg1.4
  'submit_reset' => 'пошаљи измене', //cpg1.4
  'reset_views_confirm' => 'Сигуран сам', //cpg1.4
  'notice1' => '(*) зависно од поставки %sgroups%s',  //cpg1.4 //(do not translate %s!)
  'alb_password' => 'Лозинка за албум', //cpg1.4
  'alb_password_hint' => 'Алузија на лозинку за албум', //cpg1.4
  'edit_files' =>'Уређивање датотеке', //cpg1.4
  'parent_category' =>'Надређена категорија', //cpg1.4
  'thumbnail_view' =>'Поглед иконама', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File phpinfo.php
// ------------------------------------------------------------------------- //

if (defined('PHPINFO_PHP')) $lang_phpinfo_php = array(
  'php_info' => 'PHP инфо',
  'explanation' => 'То је резултат изведбе PHP функције <a href="http://www.php.net/phpinfo">phpinfo()</a>, приказан у оквиру галерије.',
  'no_link' => 'Није нарочито паметно да други виде те податке, те се зато та страница може видети само ако сте пријављени као админ. Можете другима послати линк (нпр. грешком) на ту страницу, биће им забрањен приступ.',
);

// ------------------------------------------------------------------------- //
// File picmgr.php //cpg1.4
// ------------------------------------------------------------------------- //
if (defined('PICMGR_PHP')) $lang_picmgr_php = array(
  'pic_mgr' => 'Уређивање фотографије', //cpg1.4
  'select_album' => 'Изберите албум', //cpg1.4
  'delete' => 'Бриши', //cpg1.4
  'confirm_delete1' => 'Јесте ли сигурни да желите обрисати ову слику ?', //cpg1.4
  'confirm_delete2' => '\nСлика ће бити трајно обрисана.', //cpg1.4
  'apply_modifs' => 'Прихвати измене', //cpg1.4
  'confirm_modifs' => 'Потврди измене', //cpg1.4
  'pic_need_name' => 'Слика мора имати име !', //cpg1.4
  'no_change' => 'Нисте направили никакве измене !', //cpg1.4
  'no_album' => '* Нема албума *', //cpg1.4
  'explanation_header' => 'Сортирање које одаберете на овој страници биће прихваћено само ако', //cpg1.4
  'explanation1' => 'је администратор одабрао у поставкама "Позиција силазно" или "Позиција узлазно" (глобална поставка за све кориснике који нису сами одабрали другачији начин сортирања)', //cpg1.4
  'explanation2' => 'корисник има постављену "Позиција силазно" или "Позиција узлазно" на страни са иконама', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File pluginmgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('PLUGINMGR_PHP')){

$lang_pluginmgr_php = array(
  'confirm_uninstall' => 'Јесте ли сигурни да желите ДЕИНСТАЛИРАТИ овај додатак', //cpg1.4
  'confirm_delete' => 'Јесте ли сигурни да желите БРИСАТИ овај додатак', //cpg1.4
  'pmgr' => 'Уређивање додатака', //cpg1.4
  'name' => 'Име', //cpg1.4
  'author' => 'Аутор', //cpg1.4
  'desc' => 'Опис', //cpg1.4
  'vers' => 'у', //cpg1.4
  'i_plugins' => 'Инсталирани додаци', //cpg1.4
  'n_plugins' => 'Додаци који нису инсталирани', //cpg1.4
  'none_installed' => 'Без додатака', //cpg1.4
  'operation' => 'Операција', //cpg1.4
  'not_plugin_package' => 'Датотека коју сте послали НИЈЕ ваљан додатак за галерију.', //cpg1.4
  'copy_error' => 'При копирању додатка у фолдер са додацима је дошло до грешке.', //cpg1.4
  'upload' => 'Слање', //cpg1.4
  'configure_plugin' => 'Уреди додатак', //cpg1.4
  'cleanup_plugin' => 'Очисти додатак', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
  'already_rated' => 'Жао нам је, али већ сте оценили ову слику',
  'rate_ok' => 'Ваша оцена је прихваћена',
  'forbidden' => 'Не можете оценити Ваше властите слике.',
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
Иако ће администратор {SITE_NAME} брисати или изменити сваки неприхватљиви материјал чим пре, немогуће је прегледати баш сваки коментар. Стога, прихваћате да ставови објављени на овим страницама изражавају погледе и мишљења аутора, а не администратора или webmastera (осим за њихове властите), те они неће бити одговорни за исте.<br />
<br />
Прихваћате клаузулу да нећете објављивати никакав материјал који је увредљив, опсцен, вулгаран, препун мржње, претњи, или било какав други који би могао повредити постојеће законе. Слажете се да wебмастер, администратор и модератори {SITE_NAME} имају право уклонити или изменити било који садржај у било које време ако буду сматрали то потребним. Као корисник слажете се да све информације које упишете буде спремљене у базу података. Иако ове информације неће бити прослеђене трећим странама без Вашег допуштења, webmaster и администратор не могу бити одговорни за било какво хакирање, које би довело до компромитирања података.<br />
<br />
Ове странице користе кукије за похрану информација на Ваш компјутер. Они служе само за Ваше једноставније гледање ових страница. E-mail адреса коју сте навели користи се само за потврду детаља Ваше регистрације и лозинке.<br />
<br />
Кликнувши на 'Слажем се' испод, потврђујете да се слажете са горе наведеним условима.
EOT;

$lang_register_php = array(
  'page_title' => 'Регистрација',
  'term_cond' => 'Услови кориштења',
  'i_agree' => 'Слажем се',
  'submit' => 'Проведи регистрацију',
  'err_user_exists' => 'Корисничко име које сте навели већ постоји, молимо Вас, одаберите друго име',
  'err_password_mismatch' => 'Две лозинке се не поклапају, молимо Вас унесите их поновно',
  'err_uname_short' => 'Корисничко име мора имати макар два знака',
  'err_password_short' => 'Лозинка мора имати макар два знака',
  'err_uname_pass_diff' => 'Корисничко име и лозинка морају бити различити',
  'err_invalid_email' => 'E-mail адреса није важећа',
  'err_duplicate_email' => 'Други корисник већ је регистрован с овом e-mail адресом',
  'enter_info' => 'Упис података за регистрацију',
  'required_info' => 'Обавезне информације',
  'optional_info' => 'Необавезан упис',
  'username' => 'Корисничко име',
  'password' => 'Лозинка',
  'password_again' => 'Поновно унесите лозинку',
  'email' => 'Email',
  'location' => 'Место',
  'interests' => 'Хобији',
  'website' => 'Website',
  'occupation' => 'Занимање',
  'error' => 'ГРЕШКА',
  'confirm_email_subject' => '%s - Потврда регистрације',
  'information' => 'Информација',
  'failed_sending_email' => 'E-mail о потврди регистрације се не може послати !',
  'thank_you' => 'Хвала на регистрацији.<br /><br />E-mail са информацијама о томе како активирати Ваше чланство послан је на e-mail адресу коју сте навели при регистрацији.',
  'acct_created' => 'Ваш налог је отворен и сада се можете пријавити с Вашим корисничким именом и лозинком',
  'acct_active' => 'Ваш налог је активан и сада се можете пријавити с Вашим корисничким именом и лозинком',
  'acct_already_act' => 'Налог је већ активан!', //cpg1.4
  'acct_act_failed' => 'Овај налог се не може активирати !',
  'err_unk_user' => 'Одабрани корисник не постоји !',
  'x_s_profile' => 'Профил %s',
  'group' => 'Група',
  'reg_date' => 'Датум приступа',
  'disk_usage' => 'Употребљеност диска',
  'change_pass' => 'Измени лозинку',
  'current_pass' => 'Стара лозинка',
  'new_pass' => 'Нова лозинка',
  'new_pass_again' => 'Нова лозинка поново',
  'err_curr_pass' => 'Стара лозинка је нетачна',
  'apply_modif' => 'Прихвати измене',
  'change_pass' => 'Промени моју лозинку',
  'update_success' => 'Ваш профил је освежен',
  'pass_chg_success' => 'Ваша лозинка је промењена',
  'pass_chg_error' => 'Ваша лозинка није промењена',
  'notify_admin_email_subject' => '%s - Обавест о регистрацији',
  'last_uploads' => 'Задње додате датотеке.<br />Кликните да бисте видели све додате датотеке', //cpg1.4
  'last_comments' => 'Задњи коментари.<br />Кликните да бисте видели све коментаре', //cpg1.4
  'notify_admin_email_body' => 'Нови корисник с корисничким именом "%s" сe управо регистровао у Вашој галерији',
  'pic_count' => 'Додатих датотека', //cpg1.4
  'notify_admin_request_email_subject' => '%s - Захтев за регистрацију', //cpg1.4
  'thank_you_admin_activation' => 'Хвала за регистрацију.<br /><br />Ваш захтев за активирање налога је послат администратору. Када Ваш налог буде одобрен биће Вам послат email са обавештењем о активирању.', //cpg1.4
  'acct_active_admin_activation' => 'Налог је активиран, кориснику је послат email са обавештењем о активирању.', //cpg1.4
  'notify_user_email_subject' => '%s - Обавест о активирању налога', //cpg1.4
);

$lang_register_confirm_email = <<<EOT
Хвала за регистрацију на {SITE_NAME}

Да бисте активирали Ваш налог са корисничким именом "{USER_NAME}", требате кликнути на линк испод, или га копирати у Ваш прегледник.

<a href="{ACT_LINK}">{ACT_LINK}</a>

Срдачан поздрав,

администратор {SITE_NAME}

EOT;

$lang_register_approve_email = <<<EOT
Нови корисник са корисничким именом "{USER_NAME}" је регистрован у Вашој галерији.

Да бисте активирали Ваш налог, требате кликнути на линк испод, или га копирати у Ваш прегледник.

<a href="{ACT_LINK}">{ACT_LINK}</a>

EOT;

$lang_register_activated_email = <<<EOT
Ваш налог је одобрен и активиран.

Сада се можете пријавити на <a href="{SITE_LINK}">{SITE_LINK}</a> са корисничким именом "{USER_NAME}"


Срдачан поздрав,

уредник {SITE_NAME}

EOT;
}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
  'title' => 'Преглед коментара',
  'no_comment' => 'Нема коментара за преглед',
  'n_comm_del' => 'Бр. обрисаних коментара:%s',
  'n_comm_disp' => 'Бр. приказаних коментара',
  'see_prev' => 'Приказ претходних',
  'see_next' => 'Приказ следећих',
  'del_comm' => 'Обриши изабране коментаре',
  'user_name' => 'Име', //cpg1.4
  'date' => 'Датум', //cpg1.4
  'comment' => 'Коментар', //cpg1.4
  'file' => 'Датотека', //cpg1.4
  'name_a' => 'Корисничко име узлазно', //cpg1.4
  'name_d' => 'Корисничко име силазно', //cpg1.4
  'date_a' => 'Датум узлазно', //cpg1.4
  'date_d' => 'Датум силазно', //cpg1.4
  'comment_a' => 'Коментар узлазно', //cpg1.4
  'comment_d' => 'Коментар силазно', //cpg1.4
  'file_a' => 'Датотека узлазно', //cpg1.4
  'file_d' => 'Датотека силазно', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File search.php                                                           //
// ------------------------------------------------------------------------- //


if (defined('SEARCH_PHP')){

$lang_search_php = array(
  'title' => 'Претрага', //cpg1.4
  'submit_search' => 'Нађи', //cpg1.4
  'keyword_list_title' => 'Листа кључних речи', //cpg1.4
  'keyword_msg' => 'Горња листа није потпуна. Не укључује речи из наслова или описа слике. Покушај проширену претрагу.',  //cpg1.4
  'edit_keywords' => 'Уреди кључне речи', //cpg1.4
  'search in' => 'Тражи у:', //cpg1.4
  'ip_address' => 'IP адреса', //cpg1.4
  'fields' => 'Тражи у', //cpg1.4
  'age' => 'Старост', //cpg1.4
  'newer_than' => 'Новије од', //cpg1.4
  'older_than' => 'Старије од', //cpg1.4
  'days' => 'дана', //cpg1.4
  'all_words' => 'Све речи (И)', //cpg1.4
  'any_words' => 'Неке речи (ИЛИ)', //cpg1.4
);

$lang_adv_opts = array(
  'title' => 'Наслов', //cpg1.4
  'caption' => 'Опис', //cpg1.4
  'keywords' => 'Кљчне речи', //cpg1.4
  'owner_name' => 'Име власника', //cpg1.4
  'filename' => 'Име датотеке', //cpg1.4
);

}

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
  'page_title' => 'Претражи нове слике',
  'select_dir' => 'Одабери директориј',
  'select_dir_msg' => 'Ова функција Вам омогућава да додате пакет слика које сте послали на Ваш сервер преко FTP-а.<br /><br />Одаберите директориј у који сте послали своје слике.', //cpg1.4
  'no_pic_to_add' => 'Нема слике за додати',
  'need_one_album' => 'Потребан Вам је бар један албум за кориштење ове функције',
  'warning' => 'Упозорење',
  'change_perm' => 'скрипта не може писати у овај директориј, требате променити његов мод на 755 ili 777 пре него покушате додати слике !',
  'target_album' => '<b>Додај слике &quot;</b>%s<b>&quot; у </b>%s',
  'folder' => 'Директориј',
  'image' => 'слика',
  'album' => 'Албум',
  'result' => 'Резултат',
  'dir_ro' => 'Писање онемогућено. ',
  'dir_cant_read' => 'Читање онемогућено. ',
  'insert' => 'Додавање нових слика у галерију',
  'list_new_pic' => 'Попис нових слика',
  'insert_selected' => 'Унеси одабране слике',
  'no_pic_found' => 'Није пронађена нити једна нова слика',
  'be_patient' => 'Молимо Вас да будете стрпљиви, скрипти је потребно времена за додавање слика',
  'no_album' => 'није одабран албум',
  'result_icon' => 'кликните за појединости или освежите приказ стране',  //cpg1.4
  'notes' =>  '<ul>'.
                          '<li><b>OK</b> : значи да је слика успешно додата'.
                          '<li><b>DP</b> : значи да је слика дупликат и да се већ налази у бази података'.
                          '<li><b>PB</b> : значи да се слика није могла додати, проверите Ваше поставке и дозволе за директорије где су смештене слике'.
                          '<li><b>NA</b> :  значи да нисте одабрали албум у којег иду слике, кликните на \'<a href="javascript:history.back(1)">back</a>\' и одаберите албум. Ако немате албум, најпре га <a href="albmgr.php">креирајте</a></li>'.
                          '<li>Ако се  OK, DP, PB \'знакови\' не појаве кликните на слику за проверу поруке о PHP грешци'.
                          '<li>За освежење приказа, кликните на Reload дугме у свом прегледнику'.
                          '</ul>',
  'select_album' => 'Изберите албум',
  'check_all' => 'Означи све',
  'uncheck_all' => 'Одзначи све',
  'no_folders' => 'У директоријуму "albums" нема директоријума. Креирајте најмање један нови директоријум и пребаците Ваше слике у њега путем FTP-a. Путем FTP-a не смете слати слике у "userpics" нити "edit" директорије, они су резервисани за http слање и интерне намене.', //cpg1.4
   'albums_no_category' => 'Албуми без категорије', //cpg1.4 // album pulldown mod, added by frogfoot
  'personal_albums' => '* Лични албуми', //cpg1.4 // album pulldown mod, added by frogfoot
  'browse_batch_add' => 'Интерфејс прегледника (препоручено)', //cpg1.4
  'edit_pics' => 'Уређивање слика', //cpg1.4
  'edit_properties' => 'Атрибути албума', //cpg1.4
  'view_thumbs' => 'Приказ икона', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File stat_details.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('STAT_DETAILS_PHP')) $lang_stat_details_php = array(
  'show_hide' => 'прикажи/сакриј ту колону', //cpg1.4
  'vote' => 'Поједиости гласања', //cpg1.4
  'hits' => 'Појединости посета', //cpg1.4
  'stats' => 'Статистика гласања', //cpg1.4
  'sdate' => 'Датум', //cpg1.4
  'rating' => 'Оцена', //cpg1.4
  'search_phrase' => 'Тражени израз', //cpg1.4
  'referer' => 'Одзиватељ', //cpg1.4
  'browser' => 'Прегледник', //cpg1.4
  'os' => 'Оперативни систем', //cpg1.4
  'ip' => 'IP', //cpg1.4
  'sort_by_xxx' => 'Сортирај по %s', //cpg1.4
  'ascending' => 'узлазно', //cpg1.4
  'descending' => 'силазно', //cpg1.4
  'internal' => 'инт', //cpg1.4
  'close' => 'затвори', //cpg1.4
  'hide_internal_referers' => 'сакриј интерне одзиватеље', //cpg1.4
  'date_display' => 'Приказ датума', //cpg1.4
  'submit' => 'пошаљи / освежи', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File thumbnails.php
// ------------------------------------------------------------------------- //

// Void

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) $lang_upload_php = array(
  'title' => 'Додавање слика',
  'custom_title' => 'Креирање образца за додавање слика',
  'cust_instr_1' => 'Можете одабрати произвољан број кућица за додавање слика. Не можете одабрати више од ограничења назначеног испод.',
  'cust_instr_2' => 'Захтев за креирање образца',
  'cust_instr_3' => 'Поља за локалне слике: %s',
  'cust_instr_4' => 'URI/URL поља: %s',
  'cust_instr_5' => 'URI/URL поља:',
  'cust_instr_6' => 'Поља за локалне слике:',
  'cust_instr_7' => 'Упишите број поља за сваку врсту и кликните на \'Настави\'. ',
  'reg_instr_1' => 'Неисправна радња при креирању обрасца.',
  'reg_instr_2' => 'Сада можете додати Ваше слике користећи кућице за додавање испод. Величина додатих слика на сервер не сме прећи %s КБ свака. Компресоване (ZIP) датотеке, које будете додали, остаће нераспаковане.',
  'reg_instr_3' => 'Ако желите декомпресирати zip слике или архив, морате користити кућицу за додавање слика која се налази \'Додавање ZIP са распакивањем\' рубрици.',
  'reg_instr_4' => 'Када користите URI/URL додавање, унесите пут до слике као овде: http://www.mojastrana.com/slike/example.jpg',
  'reg_instr_5' => 'Када комплетирате образац, кликните на \'Настави\'.',
  'reg_instr_6' => 'Додавање ZIP са распакивањем:',
  'reg_instr_7' => 'Додавање слика са диска:',
  'reg_instr_8' => 'Додавање слика са URI/URL:',
  'error_report' => 'Порука о грешци',
  'error_instr' => 'Код следећих датотека је дошло до грешке:',
  'file_name_url' => 'Име датотеке/URL',
  'error_message' => 'Порука о грешци',
  'no_post' => 'Слике нису послате.',
  'forb_ext' => 'Забрањена екстензија слике.',
  'exc_php_ini' => 'Премашена допуштена величина слике у php.ini.',
  'exc_file_size' => 'Премашена величина слике дозвољена по CPG.',
  'partial_upload' => 'Додавање је само делимично успело.',
  'no_upload' => 'Није било додавања.',
  'unknown_code' => 'Непозната PHP грешка.',
  'no_temp_name' => 'Нема uploada - Нема привременог имена.',
  'no_file_size' => 'Не садржи податке/Оштећена',
  'impossible' => 'Немогуће пребацити.',
  'not_image' => 'Није слика/оштећено',
  'not_GD' => 'Није GD екстензија.',
  'pixel_allowance' => 'Висина и/или ширина је већа него што је дозвољено поставкама галерије.', //cpg1.4
  'incorrect_prefix' => 'Нетачан URI/URL префикс',
  'could_not_open_URI' => 'Не може се отворити URI.',
  'unsafe_URI' => 'Сигурност није верификовна.',
  'meta_data_failure' => 'Недостају метаподаци',
  'http_401' => '401 Неауторизовано',
  'http_402' => '402 Потребно плаћање',
  'http_403' => '403 Забрањено',
  'http_404' => '404 Није пронађено',
  'http_500' => '500 Грешка на серверу',
  'http_503' => '503 Сервис недоступан',
  'MIME_extraction_failure' => 'MIME тип није препознат.',
  'MIME_type_unknown' => 'Непознат MIME тип',
  'cant_create_write' => 'Датотеке за писање није могуће креирати.',
  'not_writable' => 'Писање у датотеку није могуће.',
  'cant_read_URI' => 'Не може се прочитати URI/URL',
  'cant_open_write_file' => 'Не може се отворити URI документ за писање.',
  'cant_write_write_file' => 'Не може се писати у URI документ за писање.',
  'cant_unzip' => 'Не може се извршити декомпресија.',
  'unknown' => 'Непозната грешка',
  'succ' => 'Успешно додато',
  'success' => 'Бр. успешно додатих датотека:%s.',
  'add' => 'Молимо Вас, кликните на \'Настави\' да бисте додали слике у албум.',
  'failure' => 'Додавање није успело',
  'f_info' => 'Информације о датотеци',
  'no_place' => 'Претходна слика се није могла сместити.',
  'yes_place' => 'Претходна слика је смештена успешно.',
  'max_fsize' => 'Максимална допуштена величина слика је %s КБ',
  'album' => 'Албум',
  'picture' => 'Слика',
  'pic_title' => 'Име слике',
  'description' => 'Опис слике',
  'keywords' => 'Кључне речи (одвојене празним местима)<br /><a href="#" onClick="return MM_openBrWindow(\'keyword_select.php\',\'selectKey\',\'width=250, height=400, scrollbars=yes,toolbar=no,status=yes,resizable=yes\')">Изаберите с пописа</a>', //cpg1.4
  'keywords_sel' =>'Изаберите кључну реч', //cpg1.4
  'err_no_alb_uploadables' => 'Жао нам је, нема албума у који Вам је допуштено додавати слике',
  'place_instr_1' => 'Молимо Вас, ставите слике у албуме.  Можете такође унети информације о свакој слици.',
  'place_instr_2' => 'Треба сместити више слика. Молимо Вас, кликните на \'Настави\'.',
  'process_complete' => 'Успешно сте сместили све слике.',
   'albums_no_category' => 'Албуми без категорије', //cpg1.4. //album pulldown mod, added by frogfoot
  'personal_albums' => '* Лични албуми', //cpg1.4 //album pulldown mod, added by frogfoot
  'select_album' => 'Изаберите албум', //cpg1.4 //album pulldown mod, added by frogfoot
  'close' => 'Затвори', //cpg1.4
  'no_keywords' => 'Жалим, нема доступних кључних речи!', //cpg1.4
  'regenerate_dictionary' => 'Освежи речник', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
  'memberlist' => 'Попис корисника', //cpg1.4
  'user_manager' => 'Уређивање корисника', //cpg1.4
  'title' => 'Уређивање корисника',
  'name_a' => 'Имена узлазно',
  'name_d' => 'Имена силазно',
  'group_a' => 'Група узлазно',
  'group_d' => 'Група силазно',
  'reg_a' => 'Датум рег. узлазно',
  'reg_d' => 'Датум рег. силазно',
  'pic_a' => 'Број слика узлазно',
  'pic_d' => 'Број слика силазно',
  'disku_a' => 'Употребљеност диска узлазно',
  'disku_d' => 'Употребљеност диска силазно',
  'lv_a' => 'Последња посета узлазно',
  'lv_d' => 'Последња посета силазно',
  'sort_by' => 'Поредај кориснике по',
  'err_no_users' => 'Табела с подацима је празна !',
  'err_edit_self' => 'Не можете мењати Ваш профил, употребите \'Мој профил\' линк за то',
  'edit' => 'Уређивање', //cpg1.4
  'with_selected' => 'Са означеним:', //cpg1.4
  'delete' => 'Брисање', //cpg1.4
  'delete_files_no' => 'задржи слике (означи као анонимни поднесак)', //cpg1.4
  'delete_files_yes' => 'избриши јавне слике', //cpg1.4
  'delete_comments_no' => 'задржи коментаре (означи као анонимни поднесак)', //cpg1.4
  'delete_comments_yes' => 'избриши коментаре', //cpg1.4
  'activate' => 'Активирај', //cpg1.4
  'deactivate' => 'Деактивирај', //cpg1.4
  'reset_password' => 'Ресетуј лозинку', //cpg1.4
  'change_primary_membergroup' => 'Промени основну групу', //cpg1.4
  'add_secondary_membergroup' => 'Додај секундарну групу', //cpg1.4
  'name' => 'Корисничко име',
  'group' => 'Група',
  'inactive' => 'Неактивни',
  'operations' => 'Операције',
  'pictures' => 'Слике',
  'disk_space_used' => 'Искориштени простор', //cpg1.4
  'disk_space_quota' => 'Додељени простор', //cpg1.4
  'registered_on' => 'Регистрација', //cpg1.4
  'last_visit' => 'Последња посета',
  'u_user_on_p_pages' => 'Бр. корисника: %d (бр. страна: %d)',
  'confirm_del' => 'Јесте ли сигурни да желите ИЗБРИСАТИ овог корисника ? \\nСве његове слике и албуми ће такође бити избрисани.', //js-alert
  'mail' => 'E-MAIL',
  'err_unknown_user' => 'Одабрани корисник не постоји !',
  'modify_user' => 'Уреди корисника',
  'notes' => 'Белешке',
  'note_list' => '<li>Ako не желите мењати тренутну лозинку, оставите поље за лозинку празним',
  'password' => 'Лозинка',
  'user_active' => 'Корисник је активан',
  'user_group' => 'Корисничка група',
  'user_email' => 'Корисников e-mail',
  'user_web_site' => 'Корисников web site',
  'create_new_user' => 'Додај новог корисника',
  'user_location' => 'Место боравка корисника',
  'user_interests' => 'Корисникови хобији',
  'user_occupation' => 'Корисниково занимање',
  'user_profile1' => '$user_profile1', //cpg1.4
  'user_profile2' => '$user_profile2', //cpg1.4
  'user_profile3' => '$user_profile3', //cpg1.4
  'user_profile4' => '$user_profile4', //cpg1.4
  'user_profile5' => '$user_profile5', //cpg1.4
  'user_profile6' => '$user_profile6', //cpg1.4
  'latest_upload' => 'Последња додавања',
  'never' => 'никад',
  'search' => 'Претрага корисника', //cpg1.4
  'submit' => 'Пошаљи', //cpg1.4
  'search_submit' => 'Напред!', //cpg1.4
  'search_result' => 'Резултати претраге за: ', //cpg1.4
  'alert_no_selection' => 'Морате одабрати најмање једног корисника!', //cpg1.4 //js-alert
  'password' => 'лозинка', //cpg1.4
  'select_group' => 'Одаберите групу', //cpg1.4
  'groups_alb_access' => 'Дозволе групе за албум', //cpg1.4
  'album' => 'Албум', //cpg1.4
  'category' => 'Категорија', //cpg1.4
  'modify' => 'Променити?', //cpg1.4
  'group_no_access' => 'Та група нема посебна права', //cpg1.4
  'notice' => 'Белешка', //cpg1.4
  'group_can_access' => 'Албум(и) којима само "%s" могу приступити', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //

if (defined('UTIL_PHP')) {
$lang_util_desc_php = array(
'Преузми називе слика из назива датотека', //cpg1.4
'Брисање назива', //cpg1.4
'Обнови иконе и слике са измењеном величином', //cpg1.4
'Брише оригиналне слике и замени их с новим', //cpg1.4
'Брише оригиналне или помоћне слике да би ослободио простор на диску', //cpg1.4
'Брише коментаре без припадајућих слика', //cpg1.4
'Поново проверава величине и димензије слика (које су пре тога ручно уређене)', //cpg1.4
'Ресетује број виђења', //cpg1.4
'Приказује phpinfo', //cpg1.4
'Освежава базу података', //cpg1.4
'Приказује лог датотеке', //cpg1.4
);
$lang_util_php = array(
  'title' => 'Администраторски алати',
  'what_it_does' => 'Шта то ради',
  'file' => 'Датотека',
  'problem' => 'Проблем', //cpg1.4
  'status' => 'Статус', //cpg1.4
  'title_set_to' => 'наслов постављен на',
  'submit_form' => 'пошаљи',
  'updated_succesfully' => 'успешно освежено',
  'error_create' => 'ГРЕШКА при креирању',
  'continue' => 'Процесуира више слика',
  'main_success' => 'Слика %s је била успешно употребљена као главна слика',
  'error_rename' => 'Грешка при преименовању %s у %s',
  'error_not_found' => 'Слика %s није пронађена',
  'back' => 'натраг на главну',
  'thumbs_wait' => 'Освежава иконе и/или слике промењене величине, молимо Вас, сачекајте...',
  'thumbs_continue_wait' => 'Наставља освежавање икона и/или слика промењене величине...',
  'titles_wait' => 'Освежава наслове, сачекајте...',
  'delete_wait' => 'Брише наслове, сачекајте...',
  'replace_wait' => 'Брише оригинале и мења их сликама промењене величине, сачекајте..',
  'instruction' => 'Кратка упутства',
  'instruction_action' => 'Одаберите радњу',
  'instruction_parameter' => 'Поставите параметре',
  'instruction_album' => 'Одаберите албум',
  'instruction_press' => 'Притисните %s',
  'update' => 'Освежава иконе и/или слике промењене величине',
  'update_what' => 'Што треба освежити',
  'update_thumb' => 'Само иконе',
  'update_pic' => 'Само слике промењене величине',
  'update_both' => 'И иконе и слике промењене величине',
  'update_number' => 'Број процесуираних слика по клику',
  'update_option' => '(Покушајте поставити ову опцију с нижим вредностима ако дође до timeout проблема)',
  'filename_title' => 'Име датотеке &rArr; Наслов слике',
  'filename_how' => 'Како треба променити назив слике',
  'filename_remove' => 'Одстраните .jpg наставак и замените _ (подцрта) празним простором',
  'filename_euro' => 'Измени 2003_11_23_13_20_20.jpg у 23/11/2003 13:20',
  'filename_us' => 'Измени 2003_11_23_13_20_20.jpg у 11/23/2003 13:20',
  'filename_time' => 'Измени 2003_11_23_13_20_20.jpg у 13:20',
  'delete' => 'Бриши наслове фотографија или фотографије оригиналне величине',
  'delete_title' => 'Брисање насловоа фотографија',
  'delete_title_explanation' => 'Ово ће уклонити све наслове слика у одабраном албуму.', //cpg1.4
  'delete_original' => 'Брисање фотографија оригиналних величина',
  'delete_original_explanation' => 'Брисање свих ВЕЛИКИХ слика.', //cpg1.4
  'delete_intermediate' => 'Брисање међуслика', //cpg1.4
  'delete_intermediate_explanation' => 'Биће обрисане све слике нормалних вредности.<br />користите за ослобађање простора на диску ако је онемогућено \'Креирајте нормалне слике\' у подешавањима након додавања слика.', //cpg1.4
  'delete_replace' => 'Брише оригиналне слике и замењује их промењеним верзијама',
  'titles_deleted' => 'Сви наслови у наведеном албуму су уклоњени', //cpg1.4
  'deleting_intermediates' => 'Брисање нормалних слика, молим сачекајте...', //cpg1.4
  'searching_orphans' => 'Тражење отпадака, молим сачекајте...', //cpg1.4
  'select_album' => 'Изберите албум',
  'delete_orphans' => 'Брисање коментара који немају припадајућу слику', //cpg1.4
  'delete_orphans_explanation' => 'Биће пронађени сви коментари без припадајућих слика које ћете лако обрисати.<br />Означите све албуме.', //cpg1.4
  'refresh_db' => 'Освежите податке о димензијама и величини слика', //cpg1.4
  'refresh_db_explanation' => 'Овим ће бити освежени подаци о димензијама и величини слика. Користите ово ако је у питању величина простора на диску или сте ручно мењали датотеке.', //cpg1.4
  'reset_views' => 'Ресетовање бројача виђења', //cpg1.4
  'reset_views_explanation' => 'Поставите све бројаче виђења слика на нулу у наведеном албуму.', //cpg1.4
  'orphan_comment' => 'пронађен коментар-сироче',
  'delete' => 'Бриши',
  'delete_all' => 'Бриши све',
  'delete_all_orphans' => 'Бриши све сирочиће?', //cpg1.4
  'comment' => 'Коментар: ',
  'nonexist' => 'прикључен к непостојећој фотографији # ',
  'phpinfo' => 'Прикажи phpinfo',
  'phpinfo_explanation' => 'Приказује техничке податке о серверу.<br /> - Ти подаци Вам могу требати ако бисте тражили подршку за галерију.', //cpg1.4
  'update_db' => 'Освежи базу података',
  'update_db_explanation' => 'Ако сте мењали датотеке апликације, додавали, модификовали или надограђивали из претходне верзије, обавезно покрените освежавање базе података. Тиме ћете креирати неопходне табеле и/или конфиг вредности у Вашој бази података.',
  'view_log' => 'Приказ лог датотака', //cpg1.4
  'view_log_explanation' => 'Галерија бележи различите активности корисника. Логове можете правити ако омогућите логовање у <a href="admin.php">поставке галерије</a>.', //cpg1.4
  'versioncheck' => 'Проверавање верзије галерије', //cpg1.4
  'versioncheck_explanation' => 'Проверава верзију свих датотека. На тај начин је осигурано да су замењене све датотеке по надградњи.', //cpg1.4
  'bridgemanager' => 'Повезивање галерије', //cpg1.4
  'bridgemanager_explanation' => 'Омогућава повезивање галерије с другим апликацијама (нпр. Ваш BBS).', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File versioncheck.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('VERSIONCHECK_PHP')) $lang_versioncheck_php = array(
  'title' => 'Проверавање верзије галерије', //cpg1.4
  'what_it_does' => 'Та страна је намењена свима који су надградили своју галерију. Програм ће покушати упоредити све датотеке на вашем серверу с истим на http://coppermine.sourceforge.net. На тај начин биће нађене све датотеке којима су потребне замене с новијим верзијама.<br />Датотеке које буду означене црвеном бојом потребно је  заменити, датотеке означене наранџасто је потребно проверити (и по потреби заменити). Датотеке означене зеленим су исправне и њих није потребно дирати.<br />Кликом на иконицу за помоћ наћи ћете још појединости.', //cpg1.4
  'online_repository_unable' => 'Повезивање са онлајн спремиштем није успело', //cpg1.4
  'online_repository_noconnect' => 'Галерија се није успела повезати са онлајн спремиштем. За то могу постојати два разлога:', //cpg1.4
  'online_repository_reason1' => 'Онлајн спремиште је тренутно ван функције - проверите можете ли приступити тој страни: %s - ако не можете, покушајте касније поново.', //cpg1.4
  'online_repository_reason2' => 'PHP на Вашем серверу има постављено %s на OFF (по основној поставци, постављено је на ON). Ако имате приступ серверу, подесите ту опцију на ON у <i>php.ini</i>. Ако немате приступ серверу, морате се помирити са чињеницом да не можете упоређивати своје датотеке са онлајн спремиштем. Та страна ће онда приказивати само верзије датотека које долазе са Вашом дистрибуцијом - надограђене неће бити приказане.', //cpg1.4
  'online_repository_skipped' => 'Повезивање са онлајн спремиштем прескочено', //cpg1.4
  'online_repository_to_local' => 'Програм по основној поставци показује локалну копију датотеке за приказ верзије. Могуће је да су подаци нетачни ако сте извршили надоградњу а нисте пребацили све датотеке. Промене након надградње неће бити приказане.', //cpg1.4
  'local_repository_unable' => 'Повезивање с податком на Вашем серверу није успело', //cpg1.4
  'local_repository_explanation' => 'Coppermine се није успио повезати с податком %s на Вашем серверу. То вероватно значи да нисте пребацили све податке на сервер. Урадите то сада и освежите приказ стране.<br />Ако програм опет не успе приказати податак, онда је вероватно Ваш webhost онемогућио <a href="http://www.php.net/manual/en/ref.filesystem.php">PHP функцију за рад са датотечним системом</a>. У том случају, тај алат не можете користити.', //cpg1.4
  'coppermine_version_header' => 'Инсталирана верзија галерије', //cpg1.4
  'coppermine_version_info' => 'Тренутно користите верзију: %s', //cpg1.4
  'coppermine_version_explanation' => 'Ако мислите да користите већу верзију Галерије од приказане, вероватно нисте  додали најновију верзију датотеке <i>include/init.inc.php</i>', //cpg1.4
  'version_comparison' => 'Упоређивање верзије', //cpg1.4
  'folder_file' => 'директориј/датотека', //cpg1.4
  'coppermine_version' => 'cpg верзија', //cpg1.4
  'file_version' => 'верзија датотеке', //cpg1.4
  'webcvs' => 'web svn', //cpg1.4
  'writable' => 'омогућава писање', //cpg1.4
  'not_writable' => 'не омогућава писање', //cpg1.4
  'help' => 'Помоћ', //cpg1.4
  'help_file_not_exist_optional1' => 'датотека/директориј не постоји', //cpg1.4
  'help_file_not_exist_optional2' => 'Датотека/директориј %s не може бити пронађен на Вашем серверу. Мада није обавезна, требате је додати (користећи FTP клијент) на свој сервер да би предупредили проблеме.', //cpg1.4
  'help_file_not_exist_mandatory1' => 'датотека/директориј не постоји', //cpg1.4
  'help_file_not_exist_mandatory2' => 'Датотека/директориј %s не може бити пронађен на Вашем серверу, иако је обавезна. Додајте датотеку на сервер (користећи FTP клијент).', //cpg1.4
  'help_no_local_version1' => 'Нема локалне верзије датотеке', //cpg1.4
  'help_no_local_version2' => 'Програм није успео издвојити верзије локалне датотеке - Ваша датотека је или застарела или измењена, уклањањем података из заглавља датотеке. Освежење датотеке је препоручено.', //cpg1.4
  'help_local_version_outdated1' => 'Локална верзија је застарела', //cpg1.4
  'help_local_version_outdated2' => 'Ваша датотека је из старије верзије галерије (вероватно сте извршили надоградњу). Освежите/замените ту датотеку.', //cpg1.4
  'help_local_version_na1' => 'Провера cvs верзије није успела', //cpg1.4
  'help_local_version_na2' => 'Програму није успело проверити, коју верзију галерије употребљавате. Требате додати датотеку из оригиналног пакета апликације.', //cpg1.4
  'help_local_version_dev1' => 'Развојна верзија', //cpg1.4
  'help_local_version_dev2' => 'Датотека на вашем серверу изгледа новија него што је тренутна верзија галерије. Вероватно употребљавате развојну верзију (препоручљиво само ако знате шта радите), или сте извршили надоградњу а нисте освежили датотеке include/init.inc.php', //cpg1.4
  'help_not_writable1' => 'Директориј не омогућава писање', //cpg1.4
  'help_not_writable2' => 'Промените дозволу за датотеку (CHMOD) и омогућите писање у директориј %s и у све што је у њему.', //cpg1.4
  'help_writable1' => 'Директориј омогућава писање', //cpg1.4
  'help_writable2' => 'Директориј %s омогућава писање. То је непотребан ризик који галерији није потребан.', //cpg1.4
  'help_writable_undetermined' => 'Галерија није могла одредити да ли је омогућено писање у директориј.', //cpg1.4
  'your_file' => 'ваша датотека', //cpg1.4
  'reference_file' => 'референтна датотека', //cpg1.4
  'summary' => 'Сажетак', //cpg1.4
  'total' => 'Укупно проверених датотека/директорија', //cpg1.4
  'mandatory_files_missing' => 'Недостају обавезне датотеке', //cpg1.4
  'optional_files_missing' => 'Недостају необавезне датотеке', //cpg1.4
  'files_from_older_version' => 'Датотеке, преостале од прејашњих верзија', //cpg1.4
  'file_version_outdated' => 'Застареле датотеке', //cpg1.4
  'error_no_data' => 'Скрипта није могла да пронађе жељене информације. Опростите због неугодности.', //cpg1.4
  'go_to_webcvs' => 'иди на %s', //cpg1.4
  'options' => 'Опције', //cpg1.4
  'show_optional_files' => 'прикажи необавезне директорије/датотеке', //cpg1.4
  'show_mandatory_files' => 'прикажи обавезне датотеке', //cpg1.4
  'show_file_versions' => 'прикажи верзију датотеке', //cpg1.4
  'show_errors_only' => 'прикажи само директорије/датотеке са грешком', //cpg1.4
  'show_permissions' => 'прикажи дозволе за директорије', //cpg1.4
  'show_condensed_output' => 'прикажи збијене податке (због лакшег приказа)', //cpg1.4
  'coppermine_in_webroot' => 'галерија је инсталирана у root директориј', //cpg1.4
  'connect_online_repository' => 'покушај се повезати на онлајн извор података', //cpg1.4
  'show_additional_information' => 'прикажи додатне информације', //cpg1.4
  'no_webcvs_link' => 'немој приказати web svn линк', //cpg1.4
  'stable_webcvs_link' => 'прикажи web svn линк до стабилне верзије', //cpg1.4
  'devel_webcvs_link' => 'прикажи web svn линк до развојне верзије', //cpg1.4
  'submit' => 'прихвати измене / освежи', //cpg1.4
  'reset_to_defaults' => 'ресетуј на основне вредности', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File view_log.php  //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('VIEWLOG_PHP')) $lang_viewlog_php = array(
  'delete_all' => 'Бриши све логове', //cpg1.4
  'delete_this' => 'Бриши овај лог', //cpg1.4
  'view_logs' => 'Преглед логова', //cpg1.4
  'no_logs' => 'Нема логова.', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File xp_publish.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('XP_PUBLISH_PHP')) {

$lang_xp_publish_client = <<<EOT
<h1>XP Web чаробњак за објављивње</h1><p>Овај модул омогућава употребу чаробњака <b>Windows XP</b> за пренос датотека на сервер Ваше галерије.</p><p>Code is based on article posted by
EOT;

$lang_xp_publish_required = <<<EOT
<h2>Шта је потребно</h2><ul><li>Windows XP да бисте уопште имали чаробњака.</li><li>Исправна инсталација галерије на којој <b>ради функција за објављивање преко сервера.</b></li></ul><h2>Како то подесити</h2><ul><li>Десни клик на
EOT;

$lang_xp_publish_select = <<<EOT
Изаберите &quot;save target as..&quot;. Сачувајте датотеку на свом харду. Приликом памћења датотеке, проверите да је предложено име датотеке <b>cpg_###.reg</b> (the ### представља ознаку времена). Промените у такво име, ако је потребно (оставите бројеве). По преузимању, 2x кликните на датотеку да бисте регистровали свој сервер са чаробњаком за објављивање.</li></ul>
EOT;

$lang_xp_publish_testing = <<<EOT
<h2>Testing</h2><ul><li>У Windows Explorer-у, одаберите неку датотеку и кликните на <b>Publish xxx on the web</b> у левом окну.</li><li>Потврдите избор датотеке. Кликните <b>Next</b>.</li><li>На попису сервиса, одаберите један за Вашу галерију (има име Ваше галерије). Ако сервис није на попису, проверите да ли имате инсталиран <b>cpg_pub_wizard.reg</b> како је описано горе.</li><li>Упишите податке за пријаву ако је потребно.</li><li>Изаберите циљни албум за Ваше фотографије или направите нови.</li><li>Кликните <b>next</b>. Започиње пренос фотографија.</li><li>Када је пренос завршен, проверите у галерији да ли су фотографије правилно додате.</li></ul>
EOT;

$lang_xp_publish_notes = <<<EOT
<h2>Bilješka :</h2><ul><li>Када пренос започне, чаробњак не може приказати грешке од стране галерије. До окончања процеса не можете проверити да ли су фотографије правилно додате, то можете само у самој галерији.</li><li>Ако пренос не успе, омогућите &quot;Debug mode&quot; у поставкама галерије, покушајте додати само једну фотографију и проверите поруку о грешци у
EOT;

$lang_xp_publish_flood = <<<EOT
датотеци која се налази у директорију галерије на Вашем серверу.</li><li>Да бисте спречили <i>поплаву фотографија</i> додатих чаробњаком, само <b>администратор</b> и <b>корисници који имају своје властите албуме</b> могу користити ову могућност.</li>
EOT;



$lang_xp_publish_php = array(
  'title' => 'Coppermine - XP Web чаробњак', //cpg1.4
  'welcome' => 'Добро дошли <b>%s</b>,', //cpg1.4
  'need_login' => 'Пре него што започнете употребу чаробњака, морате се пријавити.<p/><p>Приликом пријаве не заборавите одабрати <b>упамти ме</b> опцију, ако постоји.', //cpg1.4
  'no_alb' => 'Жалим, али нема албума у које бисте додали фотографије помоћу чаробња.', //cpg1.4
  'upload' => 'Додавање фотографија у постојећи албум', //cpg1.4
  'create_new' => 'Креирање новог албума', //cpg1.4
  'album' => 'Албум', //cpg1.4
  'category' => 'Категорија', //cpg1.4
  'new_alb_created' => 'Ваш нови албум &quot;<b>%s</b>&quot; је креиран.', //cpg1.4
  'continue' => 'Притисните &quot;НАПРЕД&quot; за почетак додавања фотографија', //cpg1.4
  'link' => 'тај линк', //cpg1.4
);
}
?>