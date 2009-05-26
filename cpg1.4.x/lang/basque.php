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

  Coppermine version: 1.4.25

  $HeadURL$
  $Revision$
  $Author$
  $Date$
**********************************************/

if (!defined('IN_COPPERMINE')) { die('Not in Coppermine...');}


// info about translators and translated language

$lang_translation_info = array(

'lang_name_english' => 'Basque',
'lang_name_native' => 'Euskera',
'lang_country_code' => 'basque',
'trans_name'=> 'Kurtsik', //the name of the translator - can be a nickname
'trans_email' => 'kurtsik@gmail.com', //translator's email address (optional)
'trans_website' => 'http://www.tuxtek.com', //translator's website (optional)
'trans_date' => '2005-08-18', //the date the translation was created / last modified

);

$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)


// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('Byteak', 'KB', 'MB');

// Day of weeks and months
$lang_day_of_week = array('Iga', 'Ale', 'Aar', 'Aaz', 'Ote', 'Oti', 'Lar');
$lang_month = array('Urt', 'Ots', 'Mar', 'Api', 'Mai', 'Eka', 'Uzt', 'Abu', 'Ira', 'Urr', 'Aza', 'Abe');



// Some common strings

$lang_yes = 'Bai';
$lang_no  = 'Ez';
$lang_back = 'Atzera';
$lang_continue = 'Jarraitu';
$lang_info = 'Informazioa';
$lang_error = 'Akatsa';
$lang_check_uncheck_all = 'gaitu/ezgaitu guztiak'; //cpg1.4

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$album_date_fmt =    '%Y(e)ko %B(a)ren %d(e)an';
$lastcom_date_fmt =  '%y/%m/%d %H:%M(e)an';
$lastup_date_fmt = '%Y(e)ko %B(a)ren %d(e)an';
$register_date_fmt = '%Y(e)ko %B(a)ren %d(e)an';
$lasthit_date_fmt = '%Y(e)ko %B(a)ren %d(e)an %H:%M';
$comment_date_fmt =  '%Y(e)ko %B(a)ren %d(e)an %H:%M(e)an';
$log_date_fmt = '%Y %B %d - %I:%M %p'; //cpg1.4

// For the word censor
$lang_bad_words = array();

$lang_meta_album_names = array(
        'random' => 'Ausazko irudiak',
        'lastup' => 'Azken irudiak',
        'lastalb'=> 'Eraldatutako azken bildumak',
        'lastcom' => 'Azken iruzkinak',
        'topn' => 'Bisita gehien',
        'toprated' => 'Estimatuenak',
        'lasthits' => 'Azken bisitaldiak',
        'search' => 'Bilaketaren emaitzak',
        'favpics'=> 'Gogokoak',
);

$lang_errors = array(
        'access_denied' => 'Ez duzu orri honetan sartzeko baimena.',
        'perm_denied' => 'Ez duzu hau egiteko baimena.',
        'param_missing' => 'Scriptari deia derrigorrezko parametrorik gabe.',
        'non_exist_ap' => 'Aukeratutako bilduma ez dago!',
        'quota_exceeded' => 'Disko kuota gainditu duzu<br /><br />Zure disko kuota [quota]KBekoa da, zure fitxategiek [space]KB okupatzen dute, hau gehituta kuota gaindituko duzu.',
        'gd_file_type_err' => 'GD irudi liburutegia erabiltzen denean PNG eta JPEG formatuak baino ezin dira erabili.',
        'invalid_image' => 'Gehitu duzun irudia akastuna da edo GD liburutegiak ezin du kudeatu.',
        'resize_failed' => 'Ezin izan dut miniatura sortu.',
        'no_img_to_display' => 'Ez dago erakusteko irudirik.',
        'non_exist_cat' => 'Aukeratutako kategoria ez dago.',
        'orphan_cat' => 'Kategoria umezurtza dago sisteman, kategoriak kudeatzeko tresna abiatu arazoa konpontzeko.',
        'directory_ro' => '\'%s\' direktorian ez duzu idazteko baimena, ezin ditut fitxategiak ezabatu.',
        'non_exist_comment' => 'Aukeratutako iruzkina ez dago.',
        'pic_in_invalid_album' => 'Fitxategia ez dagoen bilduma batean dago (%s)!?',
        'banned' => 'Oraingoz web honetan ezin zara sartu.',
        'not_with_udb' => 'Funtzio hau ezgaituta dago foruen funtzionalitateekin lotuta dago eta. Egin nahi duzuna ez da posible sistemaren konfigurazio honekin edo foruen aplikazioen esku dago.',
        'offline_title' => 'Ezgaitua',
        'offline_text' => 'Une honetan galeria ezgaituta dago, berehala konponduko dugu.', //cpg1.3.0
        'ecards_empty' => 'Une honetan ez dago postalarik erakusteko. Ziurtatu konfigurazioan aukera hau aktibatu duzula!',
        'action_failed' => 'Ezin izan dut zure eskaera burutu.', //cpg1.3.0
        'no_zip' => 'ZIP fitxategiak kudeatzeko liburutegiak ez daude erabilgarri. Hitzegizu bilduma honen administradorearekin.',
        'zip_type' => 'ZIP fitxategiak gehitzeko ez duzu baimenik.', //cpg1.3.0
        'database_query' => 'Akats bat gertatu da DDBBari galdetzean', //cpg1.4
        'register_globals_on' => 'The PHP setting register_globals is enabled on your server, which is a bad idea in terms of security. It\'s strongly recommended to turn it off. [<a href="http://forum.coppermine-gallery.net/index.php/topic,59569.0.html" rel="external" class="external">more</a>]',
);

$lang_bbcode_help_title = 'bbcode laguntza'; //cpg1.4

$lang_bbcode_help = 'bbcode etiketak erabiliz loturak eta nolabaiteko formatua lor dezakezu: <li>[b]Beltza[/b] =&gt; <b>Bold</b></li><li>[i]Italic[/i] =&gt; <i>Italic</i></li><li>[url=http://yoursite.com/]Url Text[/url] =&gt; <a href="http://yoursite.com">Url Testua</a></li><li>[email]user@domain.com[/email] =&gt; <a href="mailto:user@domain.com">user@domain.com</a></li><li>[color=red]testua[/color] =&gt; <span style="color:red">testua</span></li><li>[img]http://coppermine-gallery.net/demo/cpg14x/images/red.gif[/img] => <img src="../images/red.gif" border="0" alt="" /></li>'; //cpg1.4

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
        'alb_list_title' => 'Bilduma zerrendara joan',
        'alb_list_lnk' => 'Bilduma zerrenda',
        'my_gal_title' => 'Nire bilduma pertsonalera joan',
        'my_gal_lnk' => 'Nire bilduma',
        'my_prof_title' => 'Nire profilera joan', //cpg1.4
        'my_prof_lnk' => 'Nire erabiltzaile profila',
        'adm_mode_title' => 'Admin modura joan',
        'adm_mode_lnk' => 'Admin modua',
        'usr_mode_title' => 'Erabiltzaile modura joan',
        'usr_mode_lnk' => 'Erabiltzaile modua',
        'upload_pic_title' => 'Bilduma batean fitxategia gehitu',
        'upload_pic_lnk' => 'Fitxategia gehitu',
        'register_title' => 'Erabiltzailea sortu',
        'register_lnk' => 'Izena eman',
        'login_title' => 'Sar nazazu', //cpg1.4
        'login_lnk' => 'Sartu',
        'logout_title' => 'Atera nazazu', //cpg1.4
        'logout_lnk' => 'Irten',
        'lastup_title' => 'Erakutsi azken fitxategiak', //cpg1.4
        'lastup_lnk' => 'Azken fitxategiak',
        'lastcom_title' => 'Erakutsi azken iruzkinak',
        'lastcom_lnk' => 'Azken iruzkinak',
        'topn_title' => 'Erakutsi ikusienak', //cpg1.4
        'topn_lnk' => 'Ikusienak',
        'toprated_title' => 'Erakutsi estimatuenak', //cpg1.4
        'toprated_lnk' => 'Estimatuenak',
        'search_title' => 'Galeria bilatu', //cpg1.4
        'search_lnk' => 'Bilatu',
        'fav_title' => 'Nire gogokoetara joan', //cpg1.4
        'fav_lnk' => 'Nire gogokoak',
        'memberlist_title' => 'Bazkideen zerrenda erakutsi', //cpg1.3.0
        'memberlist_lnk' => 'Bazkideen zerrenda', //cpg1.3.0
        'faq_title' => '&quot;Coppermine&quot; argazki bildumari buruzko gardera arruntak', //cpg1.3.0
        'faq_lnk' => 'FAQ', //cpg1.3.0
);

$lang_gallery_admin_menu = array(
        'upl_app_title' => 'Igoera berriak baimendu', //cpg1.4
        'upl_app_lnk' => 'Igoerak baimendu',
        'admin_title' => 'Konfiguraziora joan', //cpg1.4
        'admin_lnk' => 'Konfigurazioa', //cpg1.4
        'albums_title' => 'Bildumen konfiguraziora joan', //cpg1.4
        'albums_lnk' => 'Bildumak',
        'categories_title' => 'Kategorien konfiguraziora joan', //cpg1.4
        'categories_lnk' => 'Kategoriak',
        'users_title' => 'Erabiltzaileen konfiguraziora joan', //cpg1.4
        'users_lnk' => 'Erabiltzaileak',
        'groups_title' => 'Taldeen konfiguraziora joan', //cpg1.4
        'groups_lnk' => 'Taldeak',
        'comments_title' => 'Iruzkin guztiak ikusi', //cpg1.4
        'comments_lnk' => 'Iruzkinak',
        'searchnew_title' => 'Fitxategiak gehitu atalera joan', //cpg1.4
        'searchnew_lnk' => 'Fitxategiak gehitu (Batch)',
        'util_title' => 'Administratzeko tresnetara joan', //cpg1.4
        'util_lnk' => 'Administratzeko tresnak',
        'key_title' => 'Hitz gako atalera joan', //cpg1.4
        'key_lnk' => 'Hitz gakoak', //cpg1.4
        'ban_title' => 'Erabiltzaileak kaleratu atalera joan', //cpg1.4
        'ban_lnk' => 'Erabiltzaileak kaleratu',
        'db_ecard_title' => 'Postalak ikusi', //cpg1.4
        'db_ecard_lnk' => 'Postalak erakutsi', //cpg1.3.0
        'pictures_title' => 'Erakutsi nire irudiak', //cpg1.4
        'pictures_lnk' => 'Erakutsi nire irudiak', //cpg1.4
        'documentation_lnk' => 'Dokumentazioa', //cpg1.4
        'documentation_title' => 'Coppermineren eskuliburua', //cpg1.4
);

$lang_user_admin_menu = array(
        'albmgr_title' => 'Nire bildumak sortu eta ordenatu', //cpg1.4
        'albmgr_lnk' => 'Bildumak sortu / ordenatu',
        'modifyalb_title' => 'Nire bildumak eraldatu atalera joan',  //cpg1.4
        'modifyalb_lnk' => 'Nire bildumak eraldatu',
        'my_prof_title' => 'Neure profilera joan', //cpg1.4
        'my_prof_lnk' => 'Nire profila',
);

$lang_cat_list = array(
        'category' => 'Kategoria',
        'albums' => 'Bildumak',
        'pictures' => 'Fitxategiak',
);

$lang_album_list = array(
        'album_on_page' => '%d bilduma %d orrialdetan'
);

$lang_thumb_view = array(
        'date' => 'DATA',
        //Sort by filename and title
        'name' => 'Izena',
        'title' => 'Izenburua',
        'sort_da' => 'Dataren arabera gorako ordenatua',
        'sort_dd' => 'Dataren arabera beherako ordenatua',
        'sort_na' => 'Izenaren arabera gorako ordenatua',
        'sort_nd' => 'Izenaren arabera beherako ordenatua',
        'sort_ta' => 'Tituluaren arabera gorako ordenatua',
        'sort_td' => 'Tituluaren arabera beherako ordenatua',
        'position' => 'KOKAPENA', //cpg1.4
        'sort_pa' => 'Kokapenaren arabera gorako ordenatua', //cpg1.4
        'sort_pd' => 'Kokapenaren arabera beherako ordenatua', //cpg1.4
        'download_zip' => 'ZIP fitxategian deskagatu', //cpg1.3.0
        'pic_on_page' => '%d fitxategi %d orrialdetan',
        'user_on_page' => '%d erabiltzaile %d orrialdetan',
        'enter_alb_pass' => 'Idatzi bildumaren pasahitza', //cpg1.4
        'invalid_pass' => 'Pasahitz okerra', //cpg1.4
        'pass' => 'Pasahitza', //cpg1.4
        'submit' => 'Bidali', //cpg1.4
);

$lang_img_nav_bar = array(
        'thumb_title' => 'Bildumaren aurkibidea',
        'pic_info_title' => 'Fitxategiari buruzko infoa erakutsi',
        'slideshow_title' => 'Slideshow',
        'ecard_title' => 'Postala bidali',
        'ecard_disabled' => 'Postalak bidaltzea ezgaitua',
        'ecard_disabled_msg' => 'Ez duzu postalak bidaltzeko baimena',
        'prev_title' => 'Aurreko fitxategia ikusi',
        'next_title' => 'Hurrengo fitxategia ikusi',
        'pic_pos' => 'FITXATEGIA %s/%s',
        'report_title' => 'Fitxategi honetaz ohartu administratzailea', //cpg1.4
        'go_album_end' => 'Amaierara joan', //cpg1.4
        'go_album_start' => 'Hasierara joan', //cpg1.4
        'go_back_x_items' => 'atzera %s elementu', //cpg1.4
        'go_forward_x_items' => 'aurrera %s elementu', //cpg1.4
);

$lang_rate_pic = array(
        'rate_this_pic' => 'Fitxategi hau baloratu ',
        'no_votes' => '(Ez dago boturik)',
        'rating' => '(Egungo balorazioa : %s / 5 %s boturekin)',
        'rubbish' => 'Txarra',
        'poor' => 'Halan holan',
        'fair' => 'Normala',
        'good' => 'Ona',
        'excellent' => 'Oso ona',
        'great' => 'Itzela',
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
        CRITICAL_ERROR => 'Akats larria',
        'file' => 'Fitxategia: ',
        'line' => 'Lerroa: ',
);

$lang_display_thumbnails = array(
  'filename' => 'Fitxategia=', //cpg1.4
  'filesize' => 'Tamaina=', //cpg1.4
  'dimensions' => 'Neurriak=', //cpg1.4
  'date_added' => 'Igotze data=', //cpg1.4
);

$lang_get_pic_data = array(
        'n_comments' => '%s iruzkin',
        'n_views' => '%s aldiz ikusia',
        'n_votes' => '(%s botu)'
);

$lang_cpg_debug_output = array(
        'debug_info' => 'Debug informazioa', //cpg1.3.0
        'select_all' => 'Guztiak hautatu', //cpg1.3.0
        'copy_and_paste_instructions' => 'Coppermineren foroan laguntza eskatu behar baduzu debug informazio hau kopiatu eta zure mezuan jarri. Adi ibili bidali baino lehen pasahitzei buruzko informazio guztia asteriskoekin (***) ordezkatzeko.<br />Oharra: hau informazioa baino ez da, ez du adierazi nahi inolako arazorik zure bildumarekin.',  //cpg1.4
        'phpinfo' => 'phpinfo erakutsi', //cpg1.3.0
        'notices' => 'Oharrak', //cpg1.4
);

$lang_language_selection = array(
  'reset_language' => 'Hizkuntza defektuz', //cpg1.3.0
  'choose_language' => 'Hizkuntza aukeratu', //cpg1.3.0
);

$lang_theme_selection = array(
  'reset_theme' => 'Gaia defektuz', //cpg1.3.0
  'choose_theme' => 'Gaia aukeratu (itxura)', //cpg1.3.0
);

$lang_version_alert = array(
        'version_alert' => 'Soporterik gabeko bertsioa!', //cpg1.4
        'no_stable_version' => 'Coppermine  %s (%s) ari zara erabiltzen, erabiltzaile aurreratuentzat gomendatua soilik - bertsio honek ez dauka soporterik ezta inolako bermearik. Argi ibili bertsio hau erabiltzean edo aukeratu bertsio egonkorra soportea behar baduzu', //cpg1.4
        'gallery_offline' => 'Une honetan bilduma ezin da ikusi, soilik admin kontutik ikusi ahal da. Ez ahaztu argitaratzea mantenimendua amaitu eta gero', //cpg1.4
);

$lang_create_tabs = array(
        'previous' => 'aurrekoa', //cpg1.4
        'next' => 'hurrengoa', //cpg1.4
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
  'error_wakeup' => "'%s'plugina abiaraztean akatsa", //cpg1.4
  'error_install' => "'%s' plugina ezin izan dut instalatu", //cpg1.4
  'error_uninstall' => "'%s' plugina desinstalatzean akatsa", //cpg1.4
  'error_sleep' => "'%s' plugina ezin izan dut desinstalatu<br />", //cpg1.4
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
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
        'alb_need_name' => 'Bildumek izena izan behar dute!', //js-alert
        'confirm_modifs' => 'Seguru aldaketak aplikatu nahi dituzula?', //js-alert
        'no_change' => 'Ez dut aldaketarik egin!', //js-alert
        'new_album' => 'Bilduma berria',
        'confirm_delete1' => 'Seguru bilduma hau ezabatu nahi duzula?', //js-alert
        'confirm_delete2' => '\nDauzkan fitxategi eta iruzkinak galdu egingo dira!', //js-alert
        'select_first' => 'Lehenago bilduma bat aukeratu',
        'alb_mrg' => 'Bilduma administratzailea',
        'my_gallery' => '* Nire bilduma *',
        'no_category' => '* Kategoriarik gabe *',
        'delete' => 'Ezabatu',
        'new' => 'Berria',
        'apply_modifs' => 'Aldaketak aplikatu',
        'select_category' => 'Kategoria aukeratu',
);

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) $lang_banning_php = array(
        'title' => 'Erabiltzailea baneatu', //cpg1.4
        'user_name' => 'Erabiltzaile izena', //cpg1.4
        'ip_address' => 'IP helbidea', //cpg1.4
        'expiry' => 'Noiz arte (zuri betiko bada)', //cpg1.4
        'edit_ban' => 'Gorde', //cpg1.4
        'delete_ban' => 'Ezabatu', //cpg1.4
        'add_new' => 'Baneaketa berria', //cpg1.4
        'add_ban' => 'Gehitu', //cpg1.4
        'error_user' => 'Ezin topatu erabiltzailea', //cpg1.4
        'error_specify' => 'Gutxienez IPa edo erabiltzaile izena idatzi behar duzu', //cpg1.4
        'error_ban_id' => 'Ez da banatzeko ID egokia!', //cpg1.4
        'error_admin_ban' => 'Ezin duzu zure burua baneatu!', //cpg1.4
        'error_server_ban' => 'Zeure zerbitzaria baneatu behar duzu? ia ia, ezin duzu hori egin...', //cpg1.4
        'error_ip_forbidden' => 'Ezin duzu IP hau baneatu - Ez da bideragarria (pribatua) !<br />IP pribatuak baneatzen gaitu nahi baduzu aldatu zure <a href="admin.php">konfigurazio</a> fitxategian (LAN batean bazaude soilik dauka sentzua).', //cpg1.4
        'lookup_ip' => 'IP helbide baten lookupa', //cpg1.4
        'submit' => 'joan!', //cpg1.4
        'select_date' => 'aukeratu data', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File bridgemgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('BRIDGEMGR_PHP')) $lang_bridgemgr_php = array(
        'title' => 'Bridge Wizard',
        'warning' => 'Warning: when using this wizard you have to understand that sensitive data is being sent using html forms. Only run it on your own PC (not on a public client like an internet cafe), and make sure to clear the browser cache and temporary files after you have finished, or others might be able to access your data!',
        'back' => 'atzera',
        'next' => 'hurrengoa',
        'start_wizard' => 'Start bridging wizard',
        'finish' => 'Amaitu',
        'hide_unused_fields' => 'hide unused form fields (recommended)',
        'clear_unused_db_fields' => 'clear invalid database entries (recommended)',
        'custom_bridge_file' => 'your custom bridge file\'s name (if the bridge file\'s name is <i>myfile.inc.php</i>, enter <i>myfile</i> into this field)',
        'no_action_needed' => 'No action needed in this step. Just click \'next\' to continue.',
        'reset_to_default' => 'Reset to default value',
        'choose_bbs_app' => 'choose application to bridge coppermine with',
        'support_url' => 'Go here for support on this application',
        'settings_path' => 'path(s) used by your BBS app',
        'database_connection' => 'datubasearekin konexioa',
        'database_tables' => 'datubasearen taulak',
        'bbs_groups' => 'BBS taldeak',
        'license_number' => 'Lizentzia zenbakia',
        'license_number_explanation' => 'idatzi zure lizentzia zenbakia (kasua bada)',
        'db_database_name' => 'Datubasearen izena',
        'db_database_name_explanation' => 'Enter the name of the database your BBS app uses',
        'db_hostname' => 'Database host',
        'db_hostname_explanation' => 'Hostname where your mySQL database resides, usually &quot;localhost&quot;',
        'db_username' => 'Database user account',
        'db_username_explanation' => 'mySQL user account to use for connection with BBS',
        'db_password' => 'Datubasearen pasahitza',
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
        'use_post_based_groups_yes' => 'bai',
        'use_post_based_groups_no' => 'ez',
        'error_title' => 'You need to correct these errors before you can continue. Go to the previous screen.',
        'error_specify_bbs' => 'You have to specify what application you want to bridge your Coppermine install with.',
        'error_no_blank_name' => 'You can\'t leave the name of your custom bridge file blank.',
        'error_no_special_chars' => 'The bridge file name mustn\'t contain any special chars except underscore (_) and dash (-)!',
        'error_bridge_file_not_exist' => 'The bridge file %s doesn\'t exist on the server. Check if you have actually uploaded it.',
        'finalize' => 'enable/disable BBS integration',
        'finalize_explanation' => 'So far, the settings you specified have been written into the database, but BBS integration hasn\'t been enabled. You can switch integration on/off later at any time. Make sure to remember the admin username and password from standalone Coppermine, you might need it later to be able to make any changes. If anything goes wrong, go to %s and disable BBS integration there, using your standalone (unbridged) admin account (usually the one you set up during Coppermine install).',
        'your_bridge_settings' => 'Your bridge settings',
        'title_enable' => 'Enable integration/bridging with %s',
        'bridge_enable_yes' => 'gaitu',
        'bridge_enable_no' => 'ezgaitu',
        'error_must_not_be_empty' => 'ez da utsik egon behar',
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
        'username' => 'Erabiltzailea',
        'password' => 'Pasahitza',
        'disable_submit' => 'bidali',
        'recovery_success_title' => 'Authorization successfull',
        'recovery_success_content' => 'You have successfully disabled BBS bridging. Your Coppermine install runs now in standalone mode.',
        'recovery_success_advice_login' => 'Log in as admin to edit your bridge settings and/or enable BBS integration again.',
        'goto_login' => 'Sarrera orrira joan',
        'goto_bridgemgr' => 'Go to bridge manager',
        'recovery_failure_title' => 'Authorization failed',
        'recovery_failure_content' => 'You supplied the wrong credentials. You will have to supply the admin account data of the standalone version (usually the account you set up during Coppermine install).',
        'try_again' => 'try again',
        'recovery_wait_title' => 'Wait time has not elapsed',
        'recovery_wait_content' => 'For security reasons this script does not allow failed logons in short succession, so you will have to wait a bit untill you\'re allowed to try to authenticate.',
        'wait' => 'wait',
        'create_redir_file' => 'Create redirection file (recommended)',
        'create_redir_file_explanation' => 'To redirect users back to Coppermine once they logged into your BBS, you need a redirection file to be created within your BBS folder. When this option is checked, the bridge manager will attempt to create this file for you, or give you code ready to copy-and-paste to create the file manually.',
        'browse' => 'arakatu',
);

// ------------------------------------------------------------------------- //
// File calendar.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('CALENDAR_PHP')) $lang_calendar_php = array(
        'title' => 'Egutegia', //cpg1.4
        'close' => 'Itxi', //cpg1.4
        'clear_date' => 'gabitu data', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
        'miss_param' => 'Behar ditudan parametroak: \'%s\' ez dizkidazu eman!',
        'unknown_cat' => 'Aukeratu duzun kategoria ez dago datu basean',
        'usergal_cat_ro' => 'Erabiltzaileen bildumen kategoriak ezin dituzu ezabatu!',
        'manage_cat' => 'Kategorien antolatzailea',
        'confirm_delete' => 'Seguru kategoria hau ezabatu nahi duzula?',
        'category' => 'Kategoria',
        'operations' => 'Ekintzak',
        'move_into' => 'Hona mugitu',
        'update_create' => 'Kategoria eraldatu / sortu',
        'parent_cat' => 'Kategoria nagusia',
        'cat_title' => 'Kategoriaren izenburua',
        'cat_thumb' => 'Kategoriaren miniatura', //cpg1.3.0
        'cat_desc' => 'Kategoriaren deskribapena',
        'categories_alpha_sort' => 'Kategoriak alfabetikoki ordenatu', //cpg1.4
        'save_cfg' => 'Konfigurazioa gorde', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File admin.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('ADMIN_PHP')) $lang_admin_php = array(
  'title' => 'Bildumen konfigurazioa', //cpg1.4
  'manage_exif' => 'Exif datuak kudeatu', //cpg1.4
  'manage_plugins' => 'Pluginak kudeatu', //cpg1.4
  'manage_keyword' => 'Manage keywords', //cpg1.4
  'restore_cfg' => 'Defektuzko ezarpenak berrezarri',
  'save_cfg' => 'Konfigurazio berria gorde',
  'notes' => 'Oharrak',
  'info' => 'Informazioa',
  'upd_success' => 'Coppermineren konfigurazioa eguneratu dut',
  'restore_success' => 'Coppermineren jatorrizko konfigurazioa berrezarrita',
  'name_a' => 'Izena gorako',
  'name_d' => 'Izena beherako',
  'title_a' => 'Izenburua gorako',
  'title_d' => 'Izenburua beherako',
  'date_a' => 'Data gorako',
  'date_d' => 'Data beherako',
  'pos_a' => 'Posizioa gorako', //cpg1.4
  'pos_d' => 'Posizioa beherako', //cpg1.4
  'th_any' => 'Max Aspect',
  'th_ht' => 'Zabalera',
  'th_wd' => 'Altuera',
  'label' => 'etiketa',
  'item' => 'elementua',
  'debug_everyone' => 'denek',
  'debug_admin' => 'Admin soilik',
  'no_logs'=> 'Off', //cpg1.4
  'log_normal'=> 'Normala', //cpg1.4
  'log_all' => 'Dena', //cpg1.4
  'view_logs' => 'Logak ikusi', //cpg1.4
  'click_expand' => 'atal izenean egin klik zabaltzeko', //cpg1.4
  'expand_all' => 'Zabaldu guztiak', //cpg1.4
  'notice1' => '(*) Ezarpen hauek aldatu behar dira oraindik datubasean fitxategiak badituzu.', //cpg1.4 - (relocated)
  'notice2' => '(**) Ezarpen hau aldatutakoan handik aurrera igotako fitxategietan izango du eragina, beraz ez aldatu ezarpenak bilduman fitxategiak badaude. Hala ere, lehenagoko fitxategiei ezarpen berriak aplikatu ahal dizkiozu &quot;<a href="util.php">admin tresnak</a> (irudiak moldatu)&quot; erabiliz.', //cpg1.4 - (relocated)
  'notice3' => '(***) Log guztiak ingelesez daude :-(.', //cpg1.4 - (relocated)
  'bbs_disabled' => 'Funtzio ezgaitua bb integrazioa erabiltzean', //cpg1.4
  'auto_resize_everyone' => 'Guztiak', //cpg1.4
  'auto_resize_user' => 'Erabiltzailea soilik', //cpg1.4
  'ascending' => 'gorako', //cpg1.4
  'descending' => 'beherako', //cpg1.4
);

if (defined('ADMIN_PHP')) $lang_admin_data = array(
  'Ezarpen orokorrak',
  array('Bildumaren izena', 'gallery_name', 0, 'f=index.htm&amp;as=admin_general_name&amp;ae=admin_general_name_end'), //cpg1.4
  array('Bildumaren deskripzioa', 'gallery_description', 0, 'f=index.htm&amp;as=admin_general_description&amp;ae=admin_general_description_end'), //cpg1.4
  array('Bildumaren administradorearen ePosta', 'gallery_admin_email', 0, 'f=index.htm&amp;as=admin_general_email&amp;ae=admin_general_email_end'), //cpg1.4
  array('Bildumaren direktorioaren URLa (\'index.php\' edo halakorik ez jarri amaieran)', 'ecards_more_pic_target', 0, 'f=index.htm&amp;as=admin_general_coppermine-url&amp;ae=admin_general_coppermine-url_end'), //cpg1.4
  array('Home pageren URLa', 'home_target', 0, 'f=index.htm&amp;as=admin_general_home-url&amp;ae=admin_general_home-url_end'), //cpg1.4
  array('Onartu gogokoen ZIP-deskargak', 'enable_zipdownload', 1, 'f=index.htm&amp;as=admin_general_zip-download&amp;ae=admin_general_zip-download_end'), //cpg1.4
  array('GMTrekin konparatuz desberdintasuna (Oraingo ordua: ' . localised_date(-1, $comment_date_fmt) . ')','time_offset',0, 'f=index.htm&amp;as=admin_general_time-offset&amp;ae=admin_general_time-offset_end&amp;top=1'), //cpg1.4
  array('Pasahitz enkriptatuak gaitu (gero ezin izango da aldatu)','enable_encrypted_passwords',1, 'f=index.htm&amp;as=admin_general_encrypt_password_start&amp;ae=admin_general_encrypt_password_end&amp;top=1'), // cpg 1.4
  array('Laguntza ikonoak gaitu (ingelesez soilik)','enable_help',9, 'f=index.htm&amp;as=admin_general_help&amp;ae=admin_general_help_end'), //cpg1.4
  array('Bilaketetan hitz gako klikagarriak gaitu','clickable_keyword_search',14, 'f=index.htm&amp;as=admin_general_keywords_start&amp;ae=admin_general_keywords_end'), //cpg1.4
  array('Pluginak gaitu', 'enable_plugins', 12, 'f=index.htm&amp;as=admin_general_enable-plugins&amp;ae=admin_general_enable-plugins_end'),  //cpg1.4
  array('IP ez bideragarrien (pribatuak) baneoa gaitu', 'ban_private_ip', 1,  'f=index.htm&amp;as=admin_general_private-ip&amp;ae=admin_general_private-ip_end'), //cpg1.4
  array('Batch-gehiketa interfaze nabegagarria', 'browse_batch_add', 1, 'f=index.htm&amp;as=admin_general_browsable_batch_add&amp;ae=admin_general_browsable_batch_add_end'), //cpg1.4

  'Hizkuntza eta karaktere jokuaren ezarpenak',
  array('Hizkuntza', 'lang', 5, 'f=index.htm&amp;as=admin_language_language&amp;ae=admin_language_language_end'), //cpg1.4
  array('Ingelesez pantailaratu esaldia topatu ezean?', 'language_fallback', 1, 'f=index.htm&amp;as=admin_language_fallback&amp;ae=admin_language_fallback_end'), //cpg1.4
  array('Karaktere kodeketa', 'charset', 4, 'f=index.htm&amp;as=admin_language_charset&amp;ae=admin_language_charset_end'), //cpg1.4
  array('Hizkuntza zerrenda pantailaratu', 'language_list', 1, 'f=index.htm&amp;as=admin_language_list&amp;ae=admin_language_list_end'), //cpg1.4
  array('Hizkuntzen ikurrak pantailaratu', 'language_flags', 8, 'f=index.htm&amp;as=admin_language_flags&amp;ae=admin_language_flags_end&amp;top=1'), //cpg1.4
  array('Hizkuntzen atalean &quot;reset&quot; pantailaratu', 'language_reset', 1, 'f=index.htm&amp;as=admin_language_reset&amp;ae=admin_language_reset_end&amp;top=1'), //cpg1.4
  //array('Display previous/next on tabbed pages', 'previous_next_tab', 1), //cpg1.4

  'Gaien ezarpenak (itxura)',
  array('Gaia', 'theme', 6, 'f=index.htm&amp;as=admin_theme_theme&amp;ae=admin_theme_theme_end'), //cpg1.4
  array('Gaien zerrenda pantailaratu', 'theme_list', 1, 'f=index.htm&amp;as=admin_theme_theme_list&amp;ae=admin_theme_theme_list_end'), //cpg1.4
  array('Gaien atalean &quot;reset&quot; pantailaratu', 'theme_reset', 1, 'f=index.htm&amp;as=admin_theme_theme_reset&amp;ae=admin_theme_theme_reset_end'), //cpg1.4
  array('FAQak pantailaratu', 'display_faq', 1, 'f=index.htm&amp;as=admin_theme_faq&amp;ae=admin_theme_faq_end'), //cpg1.4
  array('Menu pertsonalizatuaren loturaren izena', 'custom_lnk_name', 0,'f=index.htm&amp;as=admin_theme_custom_lnk_name&amp;ae=admin_theme_custom_lnk_name_end'), //cpg1.4
  array('Menu pertsonalizatuaren loturaren URLa', 'custom_lnk_url', 0,'f=index.htm&amp;as=admin_language_custom_lnk_url&amp;ae=admin_language_custom_lnk_url_end'), //cpg1.4
  array('bbcode laguntza pantailaratu', 'show_bbcode_help', 1, 'f=index.htm&amp;as=admin_theme_bbcode&amp;ae=admin_theme_bbcode_end&amp;top=1'), //cpg1.4
  array('Vanity block erakutsi XHTML eta CSS estandarra daukaten gaietan','vanity_block',1, 'f=index.htm&amp;as=vanity_block&amp;ae=vanity_block_end'), //cpg1.4
  array('Goiburu pertsonalizatuaren includeren PATHa', 'custom_header_path', 0, 'f=index.htm&amp;as=admin_theme_include_path_start&amp;ae=admin_theme_include_path_end'), //cpg1.4
  array('Orrioin pertsonalizatuaren includeren PATHa', 'custom_footer_path', 0, 'f=index.htm&amp;as=admin_theme_include_path_start&amp;ae=admin_theme_include_path_end'), //cpg1.4

  'Bildumen zerrendaren bista',
  array('Taula nagusiaren zabalera (pixelak edo %)', 'main_table_width', 0, 'f=index.htm&amp;as=admin_album_table-width&amp;ae=admin_album_table-width_end'), //cpg1.4
  array('Pantailaratu beharreko kategorien maila', 'subcat_level', 0, 'f=index.htm&amp;as=admin_album_category-levels&amp;ae=admin_album_category-levels_end'), //cpg1.4
  array('Pantailaratu beharreko bildumakNumber of albums to display', 'albums_per_page', 0, 'f=index.htm&amp;as=admin_album_number&amp;ae=admin_album_number_end'), //cpg1.4
  array('Zenbat zutabe bilduma zerrendan', 'album_list_cols', 0, 'f=index.htm&amp;as=admin_album_columns&amp;ae=admin_album_columns_end'), //cpg1.4
  array('Miniaturen tamaina pixeletan', 'alb_list_thumb_size', 0, 'f=index.htm&amp;as=admin_album_thumbnail-size&amp;ae=admin_album_thumbnail-size_end'), //cpg1.4
  array('Orri nagusiaren edukina', 'main_page_layout', 0, 'f=index.htm&amp;as=admin_album_list_content&amp;ae=admin_album_list_content_end'), //cpg1.4
  array('Lehenengo mailaren miniaturak kategorietan pantailaratu','first_level',1, 'f=index.htm&amp;as=admin_album_first-level_thumbs&amp;ae=admin_album_first-level_thumbs_end'), //cpg1.4
  array('Kategoriak alfabetikoki ordenatu ','categories_alpha_sort',1, 'f=index.htm&amp;as=admin_album_list_alphasort_start&amp;ae=admin_album_list_alphasort_end'), //cpg1.4
  array('Erakutsi zenbat fitxategi dagoen linkatuta','link_pic_count',1, 'f=index.htm&amp;as=admin_album_linked_files_start&amp;ae=admin_album_linked_files_end'), //cpg1.4

  'Miniaturen bista',
  array('Zenbat zutabe miniaturen orrian', 'thumbcols', 0, 'f=index.htm&amp;as=admin_thumbnail_columns&amp;ae=admin_thumbnail_columns_end'), //cpg1.4
  array('Zenbat lerro miniaturen orrian', 'thumbrows', 0, 'f=index.htm&amp;as=admin_thumbnail_rows&amp;ae=admin_thumbnail_rows_end'), //cpg1.4
  array('Fitxa gehienezko kopurua pantailaratzeko', 'max_tabs', 10, 'f=index.htm&amp;as=admin_thumbnail_tabs&amp;ae=admin_thumbnail_tabs_end'), //cpg1.4
  array('File caption pantailaratu (izenburuaz gain) miniaturaren azpian', 'caption_in_thumbview', 1, 'f=index.htm&amp;as=admin_thumbnail_display_caption&amp;ae=admin_thumbnail_display_caption_end'), //cpg1.4
  array('Zenbat aldiz ikusia pantailaratu miniaturaren azpian', 'views_in_thumbview', 1, 'f=index.htm&amp;as=admin_thumbnail_display_views&amp;ae=admin_thumbnail_display_views_end'), //cpg1.4
  array('Iruzkin kopurua pantailaratu miniaturaren azpian', 'display_comment_count', 1, 'f=index.htm&amp;as=admin_thumbnail_display_comments&amp;ae=admin_thumbnail_display_comments_end'), //cpg1.4
  array('Igo duenaren izena pantailaratu miniaturaren azpian', 'display_uploader', 1, 'f=index.htm&amp;as=admin_thumbnail_display_uploader&amp;ae=admin_thumbnail_display_uploader_end'), //cpg1.4
  //array('Display name of admin uploaders below the thumbnail', 'display_admin_uploader', 1, 'f=index.htm&amp;as=admin_thumbnail_display_admin_uploader&amp;ae=admin_thumbnail_display_admin_uploader_end'), //cpg1.4
  array('Fitxategiaren izena panatailaratu miniaturaren azpian', 'display_filename', 1, 'f=index.htm&amp;as=admin_thumbnail_display_filename&amp;ae=admin_thumbnail_display_filename_end'), //cpg1.4
  //array('Bildumaren deskripzioa pantailaratu', 'alb_desc_thumb', 1, 'f=index.htm&amp;as=admin_thumbnail_display_description&amp;ae=admin_thumbnail_display_description_end'), //cpg1.4
  array('Horrela ordenatu miniaturak', 'default_sort_order', 3, 'f=index.htm&amp;as=admin_thumbnail_default_sortorder&amp;ae=admin_thumbnail_default_sortorder_end'), //cpg1.4
  array('\'Gogokoak\' atalean agertzeko gutxienezko botu kopurua', 'min_votes_for_', 0, 'f=index.htm&amp;as=admin_thumbnail_minimum_votes&amp;ae=admin_thumbnail_minimum_votes_end'), //cpg1.4

  'Irudien bista', //cpg1.4
  array('Fitxategiak pantailaratzeko taularen zabalera (pixelak edo %)', 'picture_table_width', 0, 'f=index.htm&amp;as=admin_image_comment_table-width&amp;ae=admin_image_comment_table-width_end'), //cpg1.4
  array('Fitxategiaren infoa ikusgai defektuz', 'display_pic_info', 1, 'f=index.htm&amp;as=admin_image_comment_info_visible&amp;ae=admin_image_comment_info_visible_end'), //cpg1.4
  array('Irudien deskripzioaren luzeera gehienez', 'max_img_desc_length', 0, 'f=index.htm&amp;as=admin_image_comment_descr_length&amp;ae=admin_image_comment_descr_length_end'), //cpg1.4
  array('Hitz batean karaktere kopurua gehienez', 'max_com_wlength', 0, 'f=index.htm&amp;as=admin_image_comment_chars_per_word&amp;ae=admin_image_comment_chars_per_word_end'), //cpg1.4
  array('Pelikula tira erakutsi', 'display_film_strip', 1, 'f=index.htm&amp;as=admin_image_comment_filmstrip_toggle&amp;ae=admin_image_comment_filmstrip_toggle_end'), //cpg1.4
  array('Fitxategiaren izena pelikula tirako miniaturen azpian pantailaratu', 'display_film_strip_filename', 1, 'f=index.htm&amp;as=admin_image_comment_display_film_strip_filename&amp;ae=admin_image_comment_display_film_strip_filename_end'), //cpg1.4
  array('Zenbat elementu pelikula tiran', 'max_film_strip_items', 0, 'f=index.htm&amp;as=admin_image_comment_filmstrip_number&amp;ae=admin_image_comment_filmstrip_number_end'), //cpg1.4
  array('Diapositiba pasearen interbaloa milisegundutan (segundu 1 = 1000 milisegundu)', 'slideshow_interval', 0, 'f=index.htm&amp;as=admin_image_comment_slideshow_interval&amp;ae=admin_image_comment_slideshow_interval_end'), //cpg1.4

  'Iruzkinen ezarpenak', //cpg1.4
  array('Filtratu hitz sakarrak iruzkinetan', 'filter_bad_words', 1, 'f=index.htm&amp;as=admin_image_comment_bad_words&amp;ae=admin_image_comment_bad_words_end'), //cpg1.4
  array('Onartu smileak iruzkinetan', 'enable_smilies', 1, 'f=index.htm&amp;as=admin_image_comment_smilies&amp;ae=admin_image_comment_smilies_end'), //cpg1.4
  array('Onartu iruzkin batzuk jarraian erabiltzaile berberarenak (flood babespena ezgaitu)', 'disable_comment_flood_protect', 1, 'f=index.htm&amp;as=admin_image_comment_flood&amp;ae=admin_image_comment_flood_end'), //cpg1.4
  array('Zenbat lerro gehienez iruzkinetan', 'max_com_lines', 0, 'f=index.htm&amp;as=admin_image_comment_lines&amp;ae=admin_image_comment_lines_end'), //cpg1.4
  array('Iruzkinen luzeera gehienez', 'max_com_size', 0, 'f=index.htm&amp;as=admin_image_comment_length&amp;ae=admin_image_comment_length_end'), //cpg1.4
  array('Administradorea ePostaz ohatu iruzkinez', 'email_comment_notification', 1, 'f=index.htm&amp;as=admin_image_comment_admin_notify&amp;ae=admin_image_comment_admin_notify_end'), //cpg1.4
  array('Horrela ordenatu iruzkinak', 'comments_sort_descending', 17, 'f=index.htm&amp;as=admin_comment_sort_start&amp;ae=admin_comment_sort_end'), //cpg1.4
  array('Aurrizkia anonimoen iruzkinetarako', 'comments_anon_pfx', 0, 'f=index.htm&amp;as=comments_anon_pfx&amp;ae=comments_anon_pfx_end'), //cpg1.4

  'Fitxategi eta miniaturen ezarpenak',
  array('JPEG fitxategien kalitatea', 'jpeg_qual', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_jpeg_quality&amp;ae=admin_picture_thumbnail_jpeg_quality_end'), //cpg1.4
  array('Miniaturen gehinezko tamaina <a href="#notice2" class="clickable_option">**</a>', 'thumb_width', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max-dimension&amp;ae=admin_picture_thumbnail_max-dimension_end'), //cpg1.4
  array('Erabili beharreko dimentsioa ( altuera, zabalera edo handiena ) <a href="#notice2" class="clickable_option">**</a>', 'thumb_use', 7, 'f=index.htm&amp;as=admin_picture_thumbnail_use-dimension&amp;ae=admin_picture_thumbnail_use-dimension_end'), //cpg1.4
  array('Tarteko irudiak sortu','make_intermediate',1, 'f=index.htm&amp;as=admin_picture_thumbnail_intermediate_toggle&amp;ae=admin_picture_thumbnail_intermediate_toggle_end'), //cpg1.4
  array('Tarteko irudi/bideoen zabalera/luzeera gehienez <a href="#notice2" class="clickable_option">**</a>', 'picture_width', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_intermediate_dimension&amp;ae=admin_picture_thumbnail_intermediate_dimension_end'), //cpg1.4
  array('Igotako fitxategien tamaina gehienez (KB)', 'max_upl_size', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max_upload_size&amp;ae=admin_picture_thumbnail_max_upload_size_end'), //cpg1.4
  array('Igotako fitxtegien zabalera/luzeera gehienez (pixelak)', 'max_upl_width_height', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max_upload_dimension&amp;ae=admin_picture_thumbnail_max_upload_dimension_end'), //cpg1.4
  array('Irudi handiegiak moldatu', 'auto_resize', 16, 'f=index.htm&amp;as=admin_picture_thumbnail_auto-resize&amp;ae=admin_picture_thumbnail_auto-resize_end'), //cpg1.4

  'Fitxategi eta miniaturen ezarpen aurreratuak',
  array('Bildumak pribatuak izan daitezke (Oharra: \'BAI\' izanda \'EZ\' jarriz gero egon daitezkeen bilduma pribatuak publiko bihurtuko dira)', 'allow_private_albums', 1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_private_toggle&amp;ae=admin_picture_thumb_advanced_private_toggle_end'), //cpg1.4
  array('Erakutsi bilduma pribatuaren ikonoa logeatutako erabiltzaileei','show_private',1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_private_icon_show&amp;ae=admin_picture_thumb_advanced_private_icon_show_end'), //cpg1.4
  array('Fitxategi izenaten debekatutako karaktereak', 'forbiden_fname_char',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_filename_forbidden_chars&amp;ae=admin_picture_thumb_advanced_filename_forbidden_chars_end'), //cpg1.4
  //array('Accepted file extensions for uploaded pictures', 'allowed_file_extensions',0, 'f=index.htm&amp;as=&amp;ae=_end'), //cpg1.4
  array('Onartzen diren irudi motak', 'allowed_img_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_pic_extensions&amp;ae=admin_picture_thumb_advanced_pic_extensions_end'), //cpg1.4
  array('Onartzen diren bideo motak', 'allowed_mov_types',0, 'f=index.htm&amp;as=admin_thumbs_advanced_movie&amp;ae=admin_thumbs_advanced_movie_end'), //cpg1.4
  array('Bideoen hasiera automatikoa', 'media_autostart',1, 'f=index.htm&amp;as=admin_movie_autoplay&amp;ae=admin_movie_autoplay_end'), //cpg1.4
  array('Onartzen diren audio motak', 'allowed_snd_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_audio_extensions&amp;ae=admin_picture_thumb_advanced_audio_extensions_end'), //cpg1.4
  array('Onartzen diren dokumentu motak', 'allowed_doc_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_doc_extensions&amp;ae=admin_picture_thumb_advanced_doc_extensions_end'), //cpg1.4
  array('Irudiak moldatzeko era','thumb_method',2, 'f=index.htm&amp;as=admin_picture_thumb_advanced_resize_method&amp;ae=admin_picture_thumb_advanced_resize_method_end'), //cpg1.4
  array('ImageMagick-en \'convert\' tresnarako PATHa (adib: /usr/bin/X11/)', 'impath', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_im_path&amp;ae=admin_picture_thumb_advanced_im_path_end'), //cpg1.4
  //array('Allowed image types (only valid for ImageMagick)', 'allowed_img_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_allowed_imagetypes&amp;ae=admin_picture_thumb_advanced_allowed_imagetypes_end'), //cpg1.4
  array('ImageMagick-entzako komando lerroaren aukerak', 'im_options', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_im_commandline&amp;ae=admin_picture_thumb_advanced_im_commandline_end'), //cpg1.4
  array('JPEG fitxategien EXIF datuak irakurri', 'read_exif_data', 13, 'f=index.htm&amp;as=admin_picture_thumb_advanced_exif&amp;ae=admin_picture_thumb_advanced_exif_end'), //cpg1.4
  array('JPEG fitxategien IPTC datuak irakurri', 'read_iptc_data', 1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_iptc&amp;ae=admin_picture_thumb_advanced_iptc_end'), //cpg1.4
  array('Bildumaren direktorioa <a href="#notice1" class="clickable_option">*</a>', 'fullpath', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_albums_dir&amp;ae=admin_picture_thumb_advanced_albums_dir_end'), //cpg1.4
  array('Erabiltzaileen fitxategien direktorioa <a href="#notice1" class="clickable_option">*</a>', 'userpics', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_userpics_dir&amp;ae=admin_picture_thumb_advanced_userpics_dir_end'), //cpg1.4
  array('Tarteko irudien aurrizkia <a href="#notice1" class="clickable_option">*</a>', 'normal_pfx', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_intermediate_prefix&amp;ae=admin_picture_thumb_advanced_intermediate_prefix_end'), //cpg1.4
  array('Miniaturen aurrizkia <a href="#notice1" class="clickable_option">*</a>', 'thumb_pfx', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_thumbs_prefix&amp;ae=admin_picture_thumb_advanced_thumbs_prefix_end'), //cpg1.4
  array('Direktorioen defektuzko era', 'default_dir_mode', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_chmod_folder&amp;ae=admin_picture_thumb_advanced_chmod_folder_end'), //cpg1.4
  array('Fitxategien defektuzko era', 'default_file_mode', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_chmod_files&amp;ae=admin_picture_thumb_advanced_chmod_files_end'), //cpg1.4

  'Erabiltzaileen ezarpenak',
  array('Erabiltzaile berriak alta ematea gaitu', 'allow_user_registration', 1, 'f=index.htm&amp;as=admin_allow_registration&amp;ae=admin_allow_registration_end'), //cpg1.4
  array('Logeatu gabeko erabiltzaileak sartzea onartu (gonbidatua edo anonimoa)', 'allow_unlogged_access', 1, 'f=index.htm&amp;as=admin_allow_unlogged_access&amp;ae=admin_allow_unlogged_access_end'), //cpg1.4
  array('Erabiltzaileek alta emateko ePosta baieztapena derrigorrezkoa da', 'reg_requires_valid_email', 1, 'f=index.htm&amp;as=admin_registration_verify&amp;ae=admin_registration_verify_end'), //cpg1.4
  array('Alta berriez administradorea ePostaz ohartu', 'reg_notify_admin_email', 1, 'f=index.htm&amp;as=admin_registration_notify&amp;ae=admin_registration_notify_end'), //cpg1.4
  array('Adminaren alten aktibazioa', 'admin_activation', 1, 'f=index.htm&amp;as=admin_activation&amp;ae=admin_activation_end'),  //cpg1.4
  array('Onartu bi erabiltzailek ePosta berbera edukitzea', 'allow_duplicate_emails_addr', 1, 'f=index.htm&amp;as=admin_allow_duplicate_emails_addr&amp;ae=admin_allow_duplicate_emails_addr_end'), //cpg1.4
  array('Onarpena behar dutenen igoeraz administradorea ePostaz ohartu', 'upl_notify_admin_email', 1, 'f=index.htm&amp;as=admin_approval_notify&amp;ae=admin_approval_notify_end'), //cpg1.4
  array('Onartu logeatutako erabiltzaileek bazkideen zerrenda ikustea', 'allow_memberlist', 1, 'f=index.htm&amp;as=admin_user_memberlist&amp;ae=admin_user_memberlist_end'), //cpg1.4
  array('Onartu erabiltzaileen berhaien ePosta aldatu ahal izatea', 'allow_email_change', 1, 'f=index.htm&amp;as=admin_user_allow_email_change&amp;ae=admin_user_allow_email_change_end'), //cpg1.4
  array('Onartu erabiltzaileek mantentzea berhaien irudien kontrola bilduma publikoetan', 'users_can_edit_pics', 1, 'f=index.htm&amp;as=admin_user_editpics_public_start&amp;ae=admin_user_editpics_public_end'), //cpg1.4
  array('Zenbat login saiakera oker behin behineko baneaketa baino lehen (indar hutsezko erasoak ekiditzeko)', 'login_threshold', 0, 'f=index.htm&amp;as=admin_user_login_start&amp;ae=admin_user_login_end'), //cpg1.4
  array('Zenbat irauten du behin behineko baneoa', 'login_expiry', 0, 'f=index.htm&amp;as=admin_user_login_start&amp;ae=admin_user_login_end'), //cpg1.4
  array('Administradorearea ohartzea gaitu', 'report_post', 1, 'f=index.htm&amp;as=admin_user_enable_report&amp;ae=admin_user_enable_report_end'),  //cpg1.4

// custom profile fields,  //cpg1.4
  'Eremu pertsonalizatuak erabiltzaileen profiletarako (hutsik erabili ezean).
  Erabili profila 6 kontu luzeetarako, biografia adibidez', //cpg1.4
  array('Profila 1 izena', 'user_profile1_name', 0, 'f=index.htm&amp;as=admin_custom&amp;ae=admin_custom_end'), //cpg1.4
  array('Profila 2 izena', 'user_profile2_name', 0), //cpg1.4
  array('Profila 3 izena', 'user_profile3_name', 0), //cpg1.4
  array('Profila 4 izena', 'user_profile4_name', 0), //cpg1.4
  array('Profila 5 izena', 'user_profile5_name', 0), //cpg1.4
  array('Profila 6 izena', 'user_profile6_name', 0), //cpg1.4

  'Eremu pertsonalizatuak irudiak deskribatzeko (hutsik erabili ezean)',
  array('Eremu 1 izena', 'user_field1_name', 0, 'f=index.htm&amp;as=admin_custom_image&amp;ae=admin_custom_image_end'), //cpg1.4
  array('Eremu 2 izena', 'user_field2_name', 0),
  array('Eremu 3 izena', 'user_field3_name', 0),
  array('Eremu 4 izena', 'user_field4_name', 0),

  'Cookien ezarpenak',
  array('Cookie izena', 'cookie_name', 0, 'f=index.htm&amp;as=admin_cookie_name&amp;ae=admin_cookie_name_end'), //cpg1.4
  array('Cookie PATHa', 'cookie_path', 0, 'f=index.htm&amp;as=admin_cookie_path&amp;ae=admin_cookie_path_end'), //cpg1.4

  'ePostaren ezarpenak  (normalean hemen ez da ezer aldatu behar; seguru ez bazaude utzi eremu guztiak zuri)', //cpg1.4
  array('SMTP Host-a (zuri egonez gero Sendmail erabiliko da)', 'smtp_host', 0, 'f=index.htm&amp;as=admin_email&amp;ae=admin_email_end'), //cpg1.4
  array('SMTP Erabiltzailea', 'smtp_username', 0), //cpg1.4
  array('SMTP Pasahitza', 'smtp_password', 0), //cpg1.4

  'Logak eta estatistikak', //cpg1.4
  array('Logatzeko era <a href="#notice3" class="clickable_option">***</a>', 'log_mode', 11, 'f=index.htm&amp;as=admin_logging_log_mode&amp;ae=admin_logging_log_mode_end'), //cpg1.4
  array('eCardak logatu', 'log_ecards', 1, 'f=index.htm&amp;as=admin_general_log_ecards&amp;ae=admin_general_log_ecards_end'), //cpg1.4
  array('Gorde bozketen estatistika zehatzak','vote_details',1, 'f=index.htm&amp;as=admin_logging_votedetails&amp;ae=admin_logging_votedetails_end'), //cpg1.4
  array('Gorde hiten estatistika zehatzak','hit_details',1, 'f=index.htm&amp;as=admin_logging_hitdetails&amp;ae=admin_logging_hitdetails_end'), //cpg1.4

  'Mantenimendu ezarpenak', //cpg1.4
  array('Debug era gaitu', 'debug_mode', 9, 'f=index.htm&amp;as=debug_mode&amp;ae=debug_mode_end'), //cpg1.4
  array('Oharrak erakutsi debug eran', 'debug_notice', 1, 'f=index.htm&amp;as=admin_misc_debug_notices&amp;ae=admin_misc_debug_notices_end'), //cpg1.4
  array('Bilduma offline dago', 'offline', 1, 'f=index.htm&amp;as=admin_general_offline&amp;ae=admin_general_offline_end'), //cpg1.4
);

// ------------------------------------------------------------------------- //
// File db_ecard.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('DB_ECARD_PHP')) $lang_db_ecard_php = array(
        'title' => 'Bidalitako postalak', //cpg1.3.0
        'ecard_sender' => 'Igorlea', //cpg1.3.0
        'ecard_recipient' => 'Jasotzailea', //cpg1.3.0
        'ecard_date' => 'Data', //cpg1.3.0
        'ecard_display' => 'Postala erakutsi', //cpg1.3.0
        'ecard_name' => 'Izena', //cpg1.3.0
        'ecard_email' => 'ePosta', //cpg1.3.0
        'ecard_ip' => 'IPa #', //cpg1.3.0
        'ecard_ascending' => 'gorako', //cpg1.3.0
        'ecard_descending' => 'beherako', //cpg1.3.0
        'ecard_sorted' => 'Ordena', //cpg1.3.0
        'ecard_by_date' => 'dataren arabera', //cpg1.3.0
        'ecard_by_sender_name' => 'igorlearen arabera', //cpg1.3.0
        'ecard_by_sender_email' => 'igorlearen ePostaren arabera', //cpg1.3.0
        'ecard_by_sender_ip' => 'igorlearen IParen arabera', //cpg1.3.0
        'ecard_by_recipient_name' => 'jasotzailearen izenaren arabera', //cpg1.3.0
        'ecard_by_recipient_email' => 'jasotzailearen ePostaren arabera', //cpg1.3.0
        'ecard_number' => '%s tik %s rako errejistroak erakusten (Totala %s)', //cpg1.3.0
        'ecard_goto_page' => 'orrira joan', //cpg1.3.0
        'ecard_records_per_page' => 'Errejistroak orriko', //cpg1.3.0
        'check_all' => 'Guztiak markatu', //cpg1.3.0
        'uncheck_all' => 'Guztiak desmarkatu', //cpg1.3.0
        'ecards_delete_selected' => 'Aukeratutako postalak ezabatu', //cpg1.3.0
        'ecards_delete_confirm' => 'Seguru errejistro hauek ezabatunahi dituzula? checkboxa markatu!', //cpg1.3.0
        'ecards_delete_sure' => 'Seguru nago', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
        'empty_name_or_com' => 'Zure izena eta iruzkin batean idatzi behar duzu',
        'com_added' => 'Zure iruzkina gehitu dut',
        'alb_need_title' => 'Bildumaren izena idatzi behar duzu!',
        'no_udp_needed' => 'Ez da aldaketarik behar',
        'alb_updated' => 'Bilduma eguneratu dut',
        'unknown_album' => 'Aukeratutako bilduma ez dago edo ez daukazu irudiak gehitzeko baimena',
        'no_pic_uploaded' => 'Ez dut fitxategirik gehitu!<br /><br />Irudiak bidaltzen saiatu bazara ziurtatu zerbitzariak igoerak onartzen dituela...',
        'err_mkdir' => 'Akatsa direktoria sortzean %s!',
        'dest_dir_ro' => ' %s direktorioan ez daukazu idazteko baimena!',
        'err_move' => 'Ezin izan dut %s  %s ra mugitu!',
        'err_fsize_too_large' => 'Igo nahi duzun fitxategia handiegia da (onartzen den handiena %s x %s)',
        'err_imgsize_too_large' => 'Igo nahi duzun fitxategia handiegia da (onartzen den handiena %s KB)',
        'err_invalid_img' => 'Igo nahi duzun fitxategia ez da irudi fitxategi egokia',
        'allowed_img_types' => '%s irudi igo ahal duzu soilik.',
        'err_insert_pic' => 'Ezin izan dut \'%s\' fitxategia bilduman alta eman ',
        'upload_success' => 'Fitxategia ondo gorde dut<br /><br />administradoreek baimendu ostean ikusi ahal izango da.',
        'notify_admin_email_subject' => '%s - Oharra, fitxategi gehitua', //cpg1.3.0
        'notify_admin_email_body' => '%s k zure oniritsia behar duen irudi bat gehitu du. Visita %s', //cpg1.3.0
        'info' => 'Informazioa',
        'com_added' => 'Iruzkina gehitu dut',
        'alb_updated' => 'Bilduma eguneratua',
        'err_comment_empty' => 'Iruzkina hutsik dago!',
        'err_invalid_fext' => 'Estensio hauek dauzkaten fitxategiak onartzen dira soilik : <br /><br />%s.',
        'no_flood' => 'Barkatu baina fitxategi honetan sartutako azken iruzkinaren egilea zara.<br /><br />Eraldatu nahi baduzu edita dezakezu',
        'redirect_msg' => 'Berbidaltzen....<br /><br /><br />Sakatu \'JARRAITU\' orria automatikoki freskatzen ez bada',
        'upl_success' => 'Fitxategia ondo gehitu dut',
        'email_comment_subject' => 'Coppermine bilduman iruzkina gehitu dut', //cpg1.3.0
        'email_comment_body' => 'Norbaitek iruzkin bat gehitu dio zure bildumari. Hemen ikus dezakezu', //cpg1.3.0
        'album_not_selected' => 'Bilduma aukeratu gabe', //cpg1.4
        'com_author_error' => 'Erabiltzaile izen hori hartuta dago, beste bat aukeratu', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
        'caption' => 'Izenburua',
        'fs_pic' => 'tamaina osoko irudia',
        'del_success' => 'zuzen ezabatua',
        'ns_pic' => 'tamaina normaleko irudia',
        'err_del' => 'ezin da ezabatu',
        'thumb_pic' => 'miniatura',
        'comment' => 'iruzkina',
        'im_in_alb' => 'irudiak bilduman',
        'alb_del_success' => '\'%s\' bilduma ezabatua',
        'alb_mgr' => 'Bilduma antolatzailea',
        'err_invalid_data' => 'Datu ez balidoak jaso ditut \'%s\'n',
        'create_alb' => '\'%s\' bilduma sortzen',
        'update_alb' => '\'%s\' bilduma eguneratzen : izenburua \'%s\' eta indizea \'%s\'',
        'del_pic' => 'Fitxategia ezabatu',
        'del_alb' => 'Bilduma ezabatu',
        'del_user' => 'Erabiltzailea ezabatu',
        'err_unknown_user' => 'Aukeratu duzun erabiltzailea ez dago!',
        'err_empty_groups' => 'Ez dago taldeen taularik edo hutsik dago', //cpg1.4
        'comment_deleted' => 'Iruzkina ezabatu dut',
        'npic' => 'Irudia', //cpg1.4
        'pic_mgr' => 'Irudien kudeatzailea', //cpg1.4
        'update_pic' => ' \'%s\' eguneratzen \'%s\' fitxategi izenarekin eta \'%s\' indizearekin', //cpg1.4
        'username' => 'Erabiltzaile izena', //cpg1.4
        'anonymized_comments' => '%s iruzkin anonimizatuak', //cpg1.4
        'anonymized_uploads' => '%s igoera publiko anonimizatuak', //cpg1.4
        'deleted_comments' => '%s iruzkin ezabatuak', //cpg1.4
        'deleted_uploads' => '%s igoera publiko ezabatuak', //cpg1.4
        'user_deleted' => '%s erabiltzailea ezabatuta', //cpg1.4
        'activate_user' => 'Erabiltzaile aktiboa', //cpg1.4
        'user_already_active' => 'Kontua dagoeneko dago gaituta', //cpg1.4
        'activated' => 'Gaituta', //cpg1.4
        'deactivate_user' => 'Erabiltzailea gaitu', //cpg1.4
        'user_already_inactive' => 'Kontua dagoeneko dago ezgaituta', //cpg1.4
        'deactivated' => 'Ezgaituta', //cpg1.4
        'reset_password' => 'Pasahitza(k) berrezarri', //cpg1.4
        'password_reset' => '%s-ren pasahitza aldatuta', //cpg1.4
        'change_group' => 'Nire talde nagusia aldatu', //cpg1.4
        'change_group_to_group' => '%s-tik %s-ra aldatuta', //cpg1.4
        'add_group' => 'Talde gahiagotan sartu', //cpg1.4
        'add_group_to_group' => '%s erabiltzailea %s taldean gehituta. Orain bere talde nagusia %s da eta %s sekundarioa', //cpg1.4
        'status' => 'Egoera', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File displayecard.php
// ------------------------------------------------------------------------- //

if (defined('DISPLAYECARD_PHP')) {

$lang_displayecard_php = array(
        'invalid_data' => 'Ikusi nahi duzu eCardaren data zure posta bezeroak apuntu du, zihurtatu lotura osorik dagoela.', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File displayimage.php
// ------------------------------------------------------------------------- //

if (defined('DISPLAYIMAGE_PHP')){

$lang_display_image_php = array(
        'confirm_del' => 'Seguru fitxategi hau ezabtu nahi duzula? \\nIruzkinak ere ezabatuko ditut.',
        'del_pic' => 'FITXATEGI HAU EZABATU',
        'size' => '%s x %s pixel',
        'views' => '%s aldiz',
        'slideshow' => 'Diapositiba pasea',
        'stop_slideshow' => 'GELDITU',
        'view_fs' => 'Hemen sakatu irudia tamaina osoan ikusteko',
        'edit_pic' => 'Fixategiaren infoa editatu', //cpg1.4
        'edit_pic' => 'Deskribapena editatu', //cpg1.3.0
        'crop_pic' => 'Moztu eta biratu', //cpg1.3.0
);

$lang_picinfo = array(
        'title' =>'Fitxategiari buruzko infoa',
        'Filename' => 'Fitxategiaren izena',
        'Album name' => 'Bildumaren izena',
        'Rating' => 'Balorazioa (%s botu)',
        'Keywords' => 'Hitz gakoak',
        'File Size' => 'Fitxategiaren tamaina',
        'Date Added' => 'Gehitze data', //cpg1.4
        'Dimensions' => 'Neurriak',
        'Displayed' => 'Ikusi dute',
        'URL' => 'URLa', //cpg1.4
        'Make' => 'Egilea', //cpg1.4
        'Model' => 'Modeloa', //cpg1.4
        'DateTime' => 'Data', //cpg1.4
        'DateTimeOriginal' => 'Hartze data', //cpg1.4
        'ISOSpeedRatings'=>'ISOa', //cpg1.4
        'MaxApertureValue' => 'Max Zabalera', //cpg1.4
        'FocalLength' => 'Distantzia fokala', //cpg1.4
        'Camera' => 'Kamera',
        'Date taken' => 'Kapturaren data',
        'Aperture' => 'Zabalera',
        'Exposure time' => 'Esposizio denbora',
        'Focal length' => 'Fokoa',
        'Comment' => 'Iruzkina',
        'addFav'=>'Gogokoetan gehitu',
        'addFavPhrase'=>'Gogokoak',
        'remFav'=>'Gogokoetatik kendu',
        'iptcTitle'=>'IPTC - Izenburua', //cpg1.3.0
        'iptcCopyright'=>'IPTC - Copyrighta', //cpg1.3.0
        'iptcKeywords'=>'IPTC - Hitz gakoa', //cpg1.3.0
        'iptcCategory'=>'IPTC - Kategoria', //cpg1.3.0
        'iptcSubCategories'=>'IPTC - Azpikategoriak', //cpg1.3.0
        'ColorSpace' => 'Kolore aspazioa', //cpg1.4
        'ExposureProgram' => 'Exposizio programa', //cpg1.4
        'Flash' => 'Flashrik', //cpg1.4
        'MeteringMode' => 'Medizio era', //cpg1.4
        'ExposureTime' => 'Exposizio denbora', //cpg1.4
        'ExposureBiasValue' => 'Exposure Bias', //cpg1.4
        'ImageDescription' => ' Irudiaren deskripzioa', //cpg1.4
        'Orientation' => 'Orientazioa', //cpg1.4
        'xResolution' => 'X Erresoluzioa', //cpg1.4
        'yResolution' => 'Y Erresoluzioa', //cpg1.4
        'ResolutionUnit' => 'Erresoluzio unitatea', //cpg1.4
        'Software' => 'Softwarea', //cpg1.4
        'YCbCrPositioning' => 'YCbCrPositioning', //cpg1.4
        'ExifOffset' => 'Exif Offset', //cpg1.4
        'IFD1Offset' => 'IFD1 Offset', //cpg1.4
        'FNumber' => 'FNumber', //cpg1.4
        'ExifVersion' => 'Exif Version', //cpg1.4
        'DateTimeOriginal' => 'DateTime Original', //cpg1.4
        'DateTimedigitized' => 'DateTime digitized', //cpg1.4
        'ComponentsConfiguration' => 'Components Configuration', //cpg1.4
        'CompressedBitsPerPixel' => 'Compressed Bits Per Pixel', //cpg1.4
        'LightSource' => 'Light Source', //cpg1.4
        'ISOSetting' => 'ISO Setting', //cpg1.4
        'ColorMode' => 'Kolore era', //cpg1.4
        'Quality' => 'Kalitatea', //cpg1.4
        'ImageSharpening' => 'Image Sharpening', //cpg1.4
        'FocusMode' => 'Focus Mode', //cpg1.4
        'FlashSetting' => 'Flash Setting', //cpg1.4
        'ISOSelection' => 'ISO Selection', //cpg1.4
        'ImageAdjustment' => 'Image Adjustment', //cpg1.4
        'Adapter' => 'Adapter', //cpg1.4
        'ManualFocusDistance' => 'Manual Focus Distance', //cpg1.4
        'DigitalZoom' => 'Digital Zoom', //cpg1.4
        'AFFocusPosition' => 'AF Focus Position', //cpg1.4
        'Saturation' => 'Saturazioa', //cpg1.4
        'NoiseReduction' => 'Noise Reduction', //cpg1.4
        'FlashPixVersion' => 'Flash Pix Version', //cpg1.4
        'ExifImageWidth' => 'Exif Image Width', //cpg1.4
        'ExifImageHeight' => 'Exif Image Height', //cpg1.4
        'ExifInteroperabilityOffset' => 'Exif Interoperability Offset', //cpg1.4
        'FileSource' => 'File Source', //cpg1.4
        'SceneType' => 'Scene Type', //cpg1.4
        'CustomerRender' => 'Customer Render', //cpg1.4
        'ExposureMode' => 'Exposure Mode', //cpg1.4
        'WhiteBalance' => 'White Balance', //cpg1.4
        'DigitalZoomRatio' => 'Digital Zoom Ratio', //cpg1.4
        'SceneCaptureMode' => 'Scene Capture Mode', //cpg1.4
        'GainControl' => 'Gain Control', //cpg1.4
        'Contrast' => 'Kontrastea', //cpg1.4
        'Saturation' => 'Saturazioa', //cpg1.4
        'Sharpness' => 'Enfokea', //cpg1.4
        'ManageExifDisplay' => 'Manage Exif Display', //cpg1.4
        'submit' => 'Bidali', //cpg1.4
        'success' => 'Informazioa ondo eguneratu dut.', //cpg1.4
        'details' => 'Oharrak', //cpg1.4
);

$lang_display_comments = array(
        'OK' => 'ADOS',
        'edit_title' => 'Iruzkina editatu',
        'confirm_delete' => 'Seguru iruzkin hau ezabatu nahi duzula?',
        'add_your_comment' => 'Iruzkina gehitu',
        'name'=>'Izena',
        'comment'=>'Iruzkina',
        'your_name' => 'Anonimoa',
        'report_comment_title' => 'Iruzkin honetaz administradorea ohartu', //cpg1.4
);

$lang_fullsize_popup = array(
        'click_to_close' => 'Leiho hau ixteko irudian egin klik',
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
        'title' => 'Postala bidali',
        'invalid_email' => '<font color="red"><b>ADI</b></font>: ePosta helbidea ez da zuzena',
        'ecard_title' => '%s k postal bat bidali dizu',
        'error_not_image' => 'Soilik irudiekin sortu ahal dira postalak.', //cpg1.3.0
        'view_ecard' => 'Ordezko lotura erabili eCarda ez bada ondo ikusten', //cpg1.4
        'view_ecard_plaintext' => 'eCarda ikusteko copiatu helbide hau zure nabegadorearen helbide barran:', //cpg1.4
        'view_more_pics' => 'Irudi gehiago ikusi !', //cpg1.4
        'view_ecard' => 'Irudia ondo ikusten ez baduzu lotura honetan egin klik',
        'view_more_pics' => 'Hemen sakatu irudi gehiago ikusteko!',
        'send_success' => 'Postala bidali dut',
        'send_failed' => 'Barkatu baina zerbitzariak ezin izan du postala bidali...',
        'from' => 'Nork',
        'your_name' => 'Zure izena',
        'your_email' => 'Zure ePosta',
        'to' => 'Nori',
        'rcpt_name' => 'Jasotzailearen izena',
        'rcpt_email' => 'Jasotzaileren ePosta',
        'greetings' => 'Mezuaren izenburua',
        'message' => 'Mezua',
        'ecards_footer' => '%s-k bidali du %s IPtik %setan (sistemaren ordua)', //cpg1.4
        'preview' => 'eCardaren aurrebista', //cpg1.4
        'preview_button' => 'Aurrebista', //cpg1.4
        'submit_button' => 'eCarda bidali', //cpg1.4
        'preview_view_ecard' => 'Hau ordezko lotura da. Aurrebistan ez dabil.', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File report_file.php //cpg1.4
// ------------------------------------------------------------------------- //
if (defined('REPORT_FILE_PHP') || defined('DISPLAYREPORT_PHP')) $lang_report_php =array(
  'title' => 'Administradorea ohartu', //cpg1.4
  'invalid_email' => '<b>Adi</b> : ePosta ez dago ondo !', //cpg1.4
  'report_subject' => '%s-k emandako abisua %s galerian', //cpg1.4
  'view_report' => 'Ordezko lotura erabili oharpena ez bada ondo ikusten', //cpg1.4
  'view_report_plaintext' => 'Oharpena ikusteko kopiatu URL hau nabegadorearen helbide barran:', //cpg1.4
  'view_more_pics' => 'Bilduma', //cpg1.4
  'send_success' => 'Oharpena bidali dut', //cpg1.4
  'send_failed' => 'Sentitzen dut baina zerbitzariak ezin du mezua bidali...', //cpg1.4
  'from' => 'Nork', //cpg1.4
  'your_name' => 'Zure izena', //cpg1.4
  'your_email' => 'Zure ePosta', //cpg1.4
  'to' => 'Nori', //cpg1.4
  'administrator' => 'Admin/Mod', //cpg1.4
  'subject' => 'Gaia', //cpg1.4
  'comment_field_name' => '"%s"-k bidalitako oharpena', //cpg1.4
  'reason' => 'Arrazoia', //cpg1.4
  'message' => 'Mezua', //cpg1.4
  'report_footer' => '%s-k bidalita %s IPtik %s-etan (sistemaren ordua)', //cpg1.4
  'obscene' => 'likitsa', //cpg1.4
  'offensive' => 'gusto txarrekoa', //cpg1.4
  'misplaced' => 'off-topic', //cpg1.4
  'missing' => 'galduta', //cpg1.4
  'issue' => 'ekatsa/ezin ikusi', //cpg1.4
  'other' => 'beste bat', //cpg1.4
  'refers_to' => 'Honi egiten dio erreferentzia', //cpg1.4
  'reasons_list_heading' => 'arrazoiak:', //cpg1.4
  'no_reason_given' => 'arrazoirik ez', //cpg1.4
  'go_comment' => 'Iruzkinetara joan', //cpg1.4
  'view_comment' => 'Oharpen osoa ikusi', //cpg1.4
  'type_file' => 'fitxategia', //cpg1.4
  'type_comment' => 'iruzkina', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //
if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
        'pic_info' => 'Informazioa',
        'album' => 'Bilduma',
        'title' => 'Izenburua',
        'filename' => 'Fitxategi izena', //cpg1.4
        'desc' => 'Deskribapena',
        'keywords' => 'Hitz gakoak',
        'new_keyword' => 'Hitz gako berri', //cpg1.4
        'new_keywords' => 'Topatutako hitz gako berriak', //cpg1.4
        'existing_keyword' => 'Hitz gakoak osotara', //cpg1.4
        'pic_info_str' => '%sx%s - %sKB - %s aldiz ikusia - %s botu',
        'approve' => 'Fitxategia onartu',
        'postpone_app' => 'Beranduago onartu',
        'del_pic' => 'Fitxategia ezabatu',
        'del_all' => 'Ezabatu fitxategi GUZTIAK', //cpg1.4
        'read_exif' => 'EXIF datuak berriro irakurri', //cpg1.3.0
        'reset_view_count' => 'Ikustaldien kontadorea hutsean jarri',
        'reset_all_view_count' => 'Kontadore GUZTIAK berrezarri', //cpg1.4
        'reset_votes' => 'Botuak hutsean jarri',
        'reset_all_votes' => 'Botu GUZTIAK berrezarri', //cpg1.4
        'del_comm' => 'Iruzkinak ezabatu',
        'del_all_comm' => 'Iruzkin GUZTIAK ezabatu', //cpg1.4
        'upl_approval' => 'Igoerak onartu', //cpg1.4
        'upl_approval' => 'Gehitutako fitxategiak onartu',
        'edit_pics' => 'Irudiak editatu',
        'see_next' => 'Hurrengo fitxategiak ikusi',
        'see_prev' => 'Aurreko fitxategiak ikusi',
        'n_pic' => '%s fitxategia(k)',
        'n_of_pic_to_disp' => 'Zenbat fitxategi erakutsi',
        'apply' => 'Aldaketak onartu',
        'crop_title' => 'Coppermineren irudi editorea', //cpg1.3.0
        'preview' => 'Aurrikusi', //cpg1.3.0
        'save' => 'Irudia gorde', //cpg1.3.0
        'save_thumb' =>'Minitura gorde', //cpg1.3.0        'gallery_icon' => 'Ezarri hau nire ikono', //cpg1.4
        'sel_on_img' =>'Aukeraketa osoak irudi barruan egon behar du!', //js-alert //cpg1.3.0
        'album_properties' =>'Bildumaren propietateak', //cpg1.4
        'parent_category' =>'Kategoria nagusia', //cpg1.4
        'thumbnail_view' =>'Miniaturak ikusi', //cpg1.4
        'select_unselect' =>'dena aukeratu/ezaukeratuselect/unselect all', //cpg1.4
        'file_exists' => "'%s' fitxategi dago.", //cpg1.4
        'rename_failed' => "'%s' fitxategia '%s' berrizendatzean akatsa.", //cpg1.4
        'src_file_missing' => "'%s' jatorrizko fitxategia ez dago.", // cpg 1.4
        'mime_conv' => "'%s' fitxategia '%s' ezin dut bihurtu",//cpg1.4
        'forb_ext' => 'Debekatutako fitxategi luzapena.',//cpg1.4
);

// ------------------------------------------------------------------------- //
// File faq.php //cpg1.3.0
// ------------------------------------------------------------------------- //
if (defined('FAQ_PHP')) $lang_faq_php = array(
  'faq' => 'Galdera arruntak', //cpg1.3.0
  'toc' => 'Edukinen aurkibidea', //cpg1.3.0
  'question' => 'Galdera: ', //cpg1.3.0
  'answer' => 'Erantzuna: ', //cpg1.3.0
);

if (defined('FAQ_PHP')) $lang_faq_data = array(
  'Galdera orokorrak', //cpg1.3.0

  array('Zergatik behar dut errejistratu?', 'Administradoreak errejistroa derrigortu dezake. Errejistroaren bitartez estatistikak, gogokoen zerrenda, argazkiak bozkatu, iruzkinak gehitu, etab .. bezalako gaitasunak erabil daitezke', 'allow_user_registration', '0'), //cpg1.3.0

  array('Nola errejistra naiteke?', '&quot;Alta eman&quot;n sakatu eta derrigorrezko eremuak bete (nahi izanez gero aukerakoak ere bai).<br />ePosta bitartez egiten bada balidazioa mezu bat jasoko duzu zer egin behar duzun azaltzen (lotura batean klikatzen soilik). Kontua aktibatu arte ezin izango duzu sistema sartu.', 'allow_user_registration', '1'), //cpg1.3.0

  array('Nola egiten da logina (sistema sartu)?', '&quot;Login&quot;en sakatu, idatzi zure erabiltzaile izena eta pasahitza, nahi izanez gero &quot;Gogorarazi&quot; markatu hurrengoan ez galdetzeko.<br /><b>ADI: aukera hau funzionatzea nahi baduzu zure nabegadorean cookieak gaituta izan behar dituzu eta jasoko duzun cookiea ez duzu ezabatu behar).</b>', 'offline', 'Zergatik ezin dut login egin?', 'Errejistratu zara?, aktibatu duzu kontua (bidali dizugun ePostan loturan klikatu). Hori eginda zure kontua gaituta egon beharko litzateke, hala ez bada sistemaren administradorearekin jarri harremanetan.', 'offline', 0), //cpg1.3.0

  array('Zer gertatuko litzateke nire pasahitza ahaztuz gero?', 'Webguneak &quot;Nire pasahitza ahaztu dut&quot; ezaugarria gaituta ba du pasahitza bertan egin klik eta prozesua segitu, bestela administradorearekin jarri harremanetan berri bat eginteko.', 'offline', 0), //cpg1.3.0
  array('Zer gertatuko da pasahitza ahazten badut?', 'If this site has a &quot;Forgot password&quot; link then use it. Other than that contact the site administrator for a new password.', 'offline', 0),

  array('Zer gertatzen da nire ePosta aldatuz gero?', 'Ezer ez, login egin eta zure helbide berria idatzi &quot;Nire profila&quot; atalean.', 'offline', 0),

  array('Zelan gorde dezaket irudi bat &quot;Nire gogokoak&quot; atalean?', 'Irudian egin klik eta gero &quot;fitxategiari buruzko infoa erakutsi&quot; ikonoan (<img src="images/info.gif" width="16" height="16" border="0" alt="Fitxategiari buruzko infoa" />); joan informazio hori agertu den lekura eta &quot;Gogokoetan gehitu&quot;n sakatu.<br />Administradoreak &quot;Fitxategiari buruzko infoa erakutsi&quot; defektuz gaitu dezake.<br />ADI!: cookieak gaituta izan behar dituzu eta gune honetako cookiea ez da ezabatu behar.', 'offline', 0), //cpg1.3.0

  array('Zelan balora dezaket argazki bat?', 'Irudiaren miniaturan egin klik, bere azpikaldean begiratu eta aukeratu puntuaketa.', 'offline', 0), //cpg1.3.0

  array('Zelan gehitu diezaioket iruzkin bat argazki bati?', 'Irudiaren miniaturan egin klik, bere azpikaldean begiratu. Bertan idatz dezakezu zure iruzkina.', 'offline', 0), //cpg1.3.0

  array('How do I upload a file?', 'Go to &quot;Upload&quot;and select the album that you want to upload to. Click &quot;Browse,&quot; find the file to upload, and click &quot;open.&quot; Add a title and description if you want. Click &quot;Submit&quot;.<br /><br />Alternatively, for those users using <b>Windows XP</b>, you can upload multiple files directly to your own private albums using the XP Publishing wizard.<br />For instructions on how, and to get the required registry file, click <a href="xp_publish.php">here.</a>', 'allow_private_albums', 1), //cpg1.4

  array('Zelan igo dezaket irudi bat?', '&quot;Fitxategia gehitu&quot;n egin klik eta aukeratu zein bildumari gehituko diozun, &quot;Arakatu&quot;n sakatu eta aukeratu igo nahi duzun irudia, &quot;Ados&quot; sakatu (nahi izanez gero izenburua eta deskripzioa ere jarri ahal duzu), amaitzeko &quot;Fitxategi berria gehitu&quot;n egin klik', 'allow_private_albums', 0), //cpg1.3.0

  array('Non jar dezaket irudia?', '&quot;Nire bilduma&quot;ko bilduma batean irudiak gehitu ditzakezu. Gerta daiteke kategoria nagusiko bilduma bat baino gehiagotak administradoreak ezaugarri hau ezgaitzea.', 'allow_private_albums', 0), //cpg1.3.0

  array('Zein tamaina eta irudi mota gehitu igo dezaket?', 'Motak (jpg,gif,..etc.) eta tamainak administradoreak erabakitzen ditu.', 'offline', 0), //cpg1.3.0

  array('Zer da &quot;Nire bilduma&quot;?', '&quot;Nire bilduma&quot; bilduma pertsonala da, erabiltzaileak konfiguratu eta fitxategiak gehitu ahal ditu.', 'allow_private_albums', 0), //cpg1.3.0

  array('Zelan sortu, ezabatu edo berrizendatu dezaken bilduma bat &quot;Nire bilduma&quot;n?', 'Debes entrar en &quot;Modo administrador&quot;<br />&quot;Bildumak sortu/ordenatu&quot;n egin klik eta gero &quot;Birria&quot;n. &quot;Bilduma berria&quot; kendu eta nahi duzun izena jarri.<br />Zure edozein bildumari izena alda diezaiokezu.<br />&quot;Aldaketak aplikatu&quot;n sakatu amaitzeko.', 'allow_private_albums', 0), //cpg1.3.0

  array('Nola kudea ditzaket nire bildumak?', '&quot;Admin modua&quot;sartu.<br />&quot;Nire bildumak eraldatun&quot;n egin klik.&quot;Bilduma eraldatu&quot; barran aukeratu aldatu nahi duzun bilduma.<br />Hemen kudea dezakezu: izana, deskribapena, miniatura, nork ikusi eta komenta dezakeen, ... .<br />Sakatu &quot;Bilduma eraldatu&quot; aldaketak gordetzeko.', 'allow_private_albums', 0), //cpg1.3.0

  array('Zelan ikus ditzaket beste erabiltzaileen bildumak?', '&quot;Bildumen zerrenda&quot;ra joan eta &quot;Erabiltzaileen bildumak&quot; aukeratu.', 'allow_private_albums', 0), //cpg1.3.0

  array('Zer dira cookieak?', 'Cookieak zerbitzariak nebegagoreei bidaltzen dizkien testu fitxategi txikiak dira.<br />Normalean horien bitartez zure ezarpenak gogoratu ahal ditu zerbitzariak (beste erabilpen batzuk ere izan ditzakete).', 'offline', 0), //cpg1.3.0

  array('Non lor dezaket programa hau?', 'Coppermine galeria multimedia librea da, GNU GPL lizentziapean argitaratuta. Ezaugarriz beteta eta plataforma eta sistema anitza. Gehiago jakiteko eta programa eskuratzeko <a href="http://coppermine-gallery.net/">Coppermineren webgunea</a> bisita ezazu.', 'offline', 0), //cpg1.3.0



  'Copperminen zehar nabigatzen', //cpg1.3.0

  array('Zer da &quot;Bilduma zerrenda&quot;?', 'Hemen erabiltzaileek bilduma guztiak ikus ditzakete (baita kategorien zerrenda). Miniaturak kategoriekiko lotura zuzenak izan daitezke.', 'offline', 0), //cpg1.3.0

  array('Zer da &quot;Nire bilduma&quot;?', 'Ezaugarri honen bitartez erabiltzaileak bere bilduma propioa sor dezake eta bertan fitxategiak gehitu, ezabatu edo eraldatu.', 'allow_private_albums', 0), //cpg1.3.0

  array('Zertan desberdintzen dira &quot;Admin modua&quot; eta &quot;Erabiltzaile modua&quot;?', 'Admin moduan moduan erabiltzaileak bere bilduma eralda dezake (administradoreak baimenduz gero gauza gehiago).', 'allow_private_albums', 0), //cpg1.3.0

  array('Zer da &quot;Fitxategia gehitu&quot;?', 'Ezaugarri honen bitartez erabiltzaileak irudiak gehitu ditzakete (administradoreak zehaztutako tamaina eta moten arabera) haiek edota administradoreak aukeratutako biduma batean.', 'allow_private_albums', 0), //cpg1.3.0

  array('Zer da &quot;Azken fitxategiak&quot;?', 'Bildumetan gehitutako azken fitxategi / irudiak erakusten ditu.', 'offline', 0), //cpg1.3.0

  array('Zer da &quot;Azken iruzkinak&quot;?', 'Erabiltzaileek gehitu dituzten azken iruzkinak erakusten du (komentatutako irudiak ere agertzen dira).', 'offline', 0), //cpg1.3.0

  array('Zer da &quot;Ikusienak&quot;?', 'Erabiltzaileek gehien ikusi dituzten argazkiak erakusten ditu (errejistratuak eta bisitariak).', 'offline', 0), //cpg1.3.0

  array('Zer da &quot;Estimatuenak&quot;?', 'Erabiltzaileek gehien bozkatu dituzten (eta botuen media) argazkiak erakusten ditu, adibidez: : bost erabiltzailek esan dute <img src="images/rating3.gif" width="65" height="14" border="0" alt="" />: irudiak honako bataz besteko puntuazioa izango du <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> ; 5 erabiltzailek 1etik 5era puntuatu badute (1,2,3,4,5) bataz bestekoa izango da: <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> .)<br />Puntuaketak <img src="images/rating5.gif" width="65" height="14" border="0" alt="onena" />etik (onena) <img src="images/rating0.gif" width="65" height="14" border="0" alt="txarrena" /> arte (txarrena).', 'offline', 0), //cpg1.3.0

  array('Zer da &quot;Nire gogokoak&quot;?', 'Ezaugarri honek erabiltzaileari gogoko duen irudi bat cookiean gordetzea ahalbidetzen dio.', 'offline', 0), //cpg1.3.0

);

// ------------------------------------------------------------------------- //
// File forgot_passwd.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) $lang_forgot_passwd_php = array(
        'forgot_passwd' => 'Pasahitza berreskuratu', //cpg1.3.0
        'err_already_logged_in' => 'Dagoeneko izena eman duzu!', //cpg1.3.0
        'enter_email' => 'Idatzi zure ePosta', //cpg1.4
        'submit' => 'pasahitza bilatu', //cpg1.3.0
        'failed_sending_email' => 'Ezin izan dizut pasahitza daukan ePosta bidali!', //cpg1.3.0
        'email_sent' => '%s ra bidali dut ePosta zure erabiltzaile izena eta pasahitzarekin', //cpg1.3.0
        'err_unk_user' => 'Idatzi duzun erabiltzailea ez dago!', //cpg1.3.0
        'passwd_reminder_subject' => '%s - Pasahitza berreskuratzea', //cpg1.3.0
        'passwd_reminder_body' => 'Erabiltzaile honen pasahitza berreskuratzea eskatu duzu:
        Erabiltzailea: %s
        Pasahitza: %s
        %s sakatu onartzeko.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
        'group_name' => 'Taldea',
        'permissions' => 'Baimenak', //cpg1.4
        'public_albums' => 'Bilduma publikoetara igoera', //cpg1.4
        'personal_gallery' => 'Bilduma pertsonaletara', //cpg1.4
        'upload_method' => 'Igotzeko era', //cpg1.4
        'disk_quota' => 'Disko kuota', //cpg1.4
        'rating' => 'Bozketa', //cpg1.4
        'ecards' => 'eCardak', //cpg1.4
        'comments' => 'Iruzkinak', //cpg1.4
        'allowed' => 'Baimenduta', //cpg1.4
        'approval' => 'Onarpena', //cpg1.4
        'boxes_number' => 'Eremu kopurua', //cpg1.4
        'variable' => 'Aldagarria', //cpg1.4
        'fixed' => 'Finkoa', //cpg1.4
        'apply' => 'Ados',
        'create_new_group' => 'Talde berria sortu',
        'del_groups' => 'Ezabatu aukeratutako taldea(k)',
        'confirm_del' => 'Adi!!, talde bat ezabatzen duzunean bertako erabiltzaileak  \'Registered\' taldera pasatzen ditut!\n\nJarraitu nahi duzu?', //js-alert
        'title' => 'Taldeak kudeatu',
        'num_file_upload' => 'Fitxategiak igotzeko eremuak', //cpg1.4
        'num_URI_upload' => 'URIak igotzeko eremuak', //cpg1.4
        'reset_to_default' => '(%s) Jatorrizko izena jarri berriro- gomendatua!', //cpg1.4
        'error_group_empty' => 'Taldeen taula hutsik !<br /><br />Defektuzko taldeak sortu ditut, freskatu orria mesedez', //cpg1.4
        'explain_greyed_out_title' => 'Zergatik dago zutabe hau gristuta?', //cpg1.4
        'explain_guests_greyed_out_text' => 'Ezin duzu talde honen propietateak aldatu &quot; onartu logeatu gabeko erabiltzaileak (bisiatriak edo anonimoak) sartzea&quot; aukera gaitu duzulako konfigurazio orrian. Bisitari gustiak (%s-ren taldekoak) logeatu baino ezin dute egin; horrela taldeentzako ezarpenak ez zaizkie aplikatzen.', //cpg1.4
        'explain_banned_greyed_out_text' => 'Ezin duzu %s taldearen propietateak aldatu.', //cpg1.4
        'group_assigned_album' => 'esleitutako bilduma(k)', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){
$lang_index_php = array(
        'welcome' => 'Ongi etorri!'
);

$lang_album_admin_menu = array(
        'confirm_delete' => 'Seguru bilduma hau ezabatu nahi duzula? \\nIrudi eta iruzkin guztiak ezabatuko ditut.',
        'delete' => 'Ezabatu',
        'modify' => 'Eraldatu',
        'edit_pics' => 'Irudiak editatu',
);

$lang_list_categories = array(
        'home' => 'Hasiera',
        'stat1' => '<b>[pictures]</b> fitxategi <b>[albums]</b> bildumetan eta <b>[cat]</b> kategoria <b>[comments]</b> iruzkinekin, <b>[views]</b> aldiz bisitatua(k)',
        'stat2' => '<b>[pictures]</b> fitxategi <b>[albums]</b> bildumatan, <b>[views]</b> aldiz bisitatua(k)',
        'xx_s_gallery' => '%s (r)en bilduma',
        'stat3' => '<b>[pictures]</b> fitxategi <b>[albums]</b> bildumatan <b>[comments]</b> iruzkinekin, <b>[views]</b> aldiz bisitatua(k)'
);

$lang_list_users = array(
        'user_list' => 'Erabiltzaileen zerrenda',
        'no_user_gal' => 'Ez dago bildumak izateko eskubidea duen erabiltzailerik',
        'n_albums' => '%s bilduma',
        'n_pics' => '%s fitxategi'
);

$lang_list_albums = array(
        'n_pictures' => '%s fitxategiak',
        'last_added' => ', %s-n gehitutako azkenak',
        'n_link_pictures' => '%s linkatutako fitxategiak', //cpg1.4
        'total_pictures' => '%s fitxategi osotara', //cpg1.4
);

}

// ------------------------------------------------------------------------- //
// File keywordmgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('KEYWORDMGR_PHP')) $lang_keywordmgr_php = array(
        'title' => 'Hitz gakoak kudeatu', //cpg1.4
        'edit' => 'editatu', //cpg1.4
        'delete' => 'ezabatu', //cpg1.4
        'search' => 'bilatu', //cpg1.4
        'keyword_test_search' => '%s bilatu leiho berrian', //cpg1.4
        'keyword_del' => '%s hitz gakoa ezabatu', //cpg1.4
        'confirm_delete' => 'Seguru %s hitz gakoa ezabatu nahi duzula bilduma nagusitik?', //cpg1.4  // js-alert
        'change_keyword' => 'hitz gakoa aldatu', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
        'login' => 'Login',
        'enter_login_pswd' => 'Erabiltzailea eta pasahitza idatzi',
        'username' => 'Erabiltzaile izena',
        'password' => 'Pasahitza',
        'remember_me' => 'Gogora nazazu',
        'welcome' => 'Ongi etorri %s ...',
        'err_login' => '*** Login ez zuzena. Saiatu berriro ***',
        'err_already_logged_in' => 'Dagoeneko izena eman duzu!',
        'forgot_password_link' => 'Nire pasahitza ahaztu dut', //cpg1.3.0
        'cookie_warning' => 'ADI, zure nabegadoreak ez ditu scrptaren cookieak onartzen!', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
        'logout' => 'Irten',
        'bye' => 'Hurrenerarte, %s ...',
        'err_not_loged_in' => 'Ez duzu izena eman!',
);


// ------------------------------------------------------------------------- //
// File minibrowser.php  //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('MINIBROWSER_PHP')) $lang_minibrowser_php = array(
        'close' => 'itxi', //cpg1.4
        'submit' => 'Ados', //cpg1.4
        'up' => 'gora maila bat', //cpg1.4
        'current_path' => 'oraingo PATHa', //cpg1.4
        'select_directory' => 'direktorio bat aukeratu', //cpg1.4
        'click_to_close' => 'irudiak klik egin leiho hau ixteko',
);

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
        'upd_alb_n' => '%s bilduma eraldatu',
        'general_settings' => 'Konfigurazio orokorra',
        'alb_title' => 'Bildumaren izenburua',
        'alb_cat' => 'Bildumaren kategoria',
        'alb_desc' => 'Bildumaren deskripzioa',
        'alb_keyword' => 'Bildumaren hitz gakoa', //cpg1.4
        'alb_thumb' => 'Bildumaren miniatura',
        'alb_perm' => 'Bilduma honek baimenak',
        'can_view' => 'Hauek ikus dezakete bilduma hau',
        'can_upload' => 'Bisitariek irudiak gehitu ditzakete',
        'can_post_comments' => 'Bisitariek iruzkinak gehitu ditzakete',
        'can_rate' => 'Bisitariek argazkiak baloratu ahal dituzte',
        'user_gal' => 'Erabiltzailearen bilduma',
        'no_cat' => '* Kategoriarik gabekoa *',
        'alb_empty' => 'Bilduma hutsik dago',
        'last_uploaded' => 'Gehitutako azken irudia',
        'public_alb' => 'Denek (bilduma publikoa)',
        'me_only' => 'Nik soilik',
        'owner_only' => 'Bildumaren jabe soilik (%s)',
        'groupp_only' => '\'%s\' taldearen partaideak',
        'err_no_alb_to_modify' => 'Ez dago zuk eraldatu ahal duzun bildumarik.',
        'update' => 'Bilduma eraldatu',
        'reset_album' => 'Bilduma berrabiarazi', //cpg1.4
        'reset_views' => 'Ezarri kontadorea &quot;0&quot;n %s-n', //cpg1.4
        'reset_rating' => '%s-ko bozketa guztiak berrabiarazi', //cpg1.4
        'delete_comments' => '%s-n egindako iruzkin guztiak ezabatu', //cpg1.4
        'delete_files' => '%s-n BEHIN BETIKO ezabatu fitxategi guztiak', //cpg1.4
        'views' => 'ikusteak', //cpg1.4
        'votes' => 'botuak', //cpg1.4
        'comments' => 'iruzkinak', //cpg1.4
        'files' => 'fitxategiak', //cpg1.4
        'submit_reset' => 'Onartu', //cpg1.4
        'reset_views_confirm' => 'seguru nago', //cpg1.4
        'notice1' => '(*) %staldeen%s konfigurazioaren arabera', //cpg1.3.0 (do not translate %s!)
        'alb_password' => 'Bildumaren pasahitza', //cpg1.4
        'alb_password_hint' => 'Album password hint', //cpg1.4
        'edit_files' =>'Fitxategiak editatu', //cpg1.4
        'parent_category' =>'Kategoria nagusia', //cpg1.4
        'thumbnail_view' =>'Miniaturak ikusi', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File phpinfo.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('PHPINFO_PHP')) $lang_phpinfo_php = array(
        'php_info' => 'PHP info', //cpg1.3.0
        'explanation' => 'Hau da <a href="http://www.php.net/phpinfo">phpinfo()</a> PHP-funtzioak ematen duen irteera, Coperminek erakutsita (trimming the output at the right corner).', //cpg1.3.0
        'no_link' => 'Besteei hau ikusten uztea arriskutsua izan daiteke, horregatik administradore bezala logeatuta zaudenean soilik ikus dezakezu orri hau. Ezin diezu besteei lotura hau bidali, sarrera debekatuta baitaukate.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File picmgr.php //cpg1.4
// ------------------------------------------------------------------------- //
if (defined('PICMGR_PHP')) $lang_picmgr_php = array(
        'pic_mgr' => 'Irudiak kudeatu', //cpg1.4
        'select_album' => 'Bilduma aukeratu', //cpg1.4
        'delete' => 'Ezabatu', //cpg1.4
        'confirm_delete1' => 'Seguru irudi hau ezabatu nahi duzula?', //cpg1.4
        'confirm_delete2' => '\nIrudia behin betiko ezabatuko dut.', //cpg1.4
        'apply_modifs' => 'Aldaketak aplikatu', //cpg1.4
        'confirm_modifs' => 'Aldaketak baieztatu', //cpg1.4
        'pic_need_name' => 'Irudiek izena eduki behar dute !', //cpg1.4
        'no_change' => 'Ez duzu aldaketarik egin !', //cpg1.4
        'no_album' => '* Bildumarik ez *', //cpg1.4
        'explanation_header' => 'The custom sort order you can specify on this page will only be taken into account if', //cpg1.4
        'explanation1' => 'the admin has set the "Default sort order for files" in the config to "Position descending" or "Position ascending" (global setting for all users who haven\'t chosen another sort option individually)', //cpg1.4
        'explanation2' => 'the user has chosen "Position descending" or "Position ascending" on the thumbail page (per user setting)', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File pluginmgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('PLUGINMGR_PHP')){

$lang_pluginmgr_php = array(
        'confirm_uninstall' => 'Seguru plugin hau desinstalatu nahi duzula?', //cpg1.4
        'confirm_delete' => 'Seguru plugin hau EZABATU nahi duzula?', //cpg1.4
        'pmgr' => 'Plugin kudeaketa', //cpg1.4
        'name' => 'Izena', //cpg1.4
        'author' => 'Egilea', //cpg1.4
        'desc' => 'Deskripzioa', //cpg1.4
        'vers' => 'ber.', //cpg1.4
        'i_plugins' => 'Instalatutako Pluginak', //cpg1.4
        'n_plugins' => 'Instalatu gabeko pluginak', //cpg1.4
        'none_installed' => 'Ez instalatua', //cpg1.4
        'operation' => 'Operazioa', //cpg1.4
        'not_plugin_package' => 'Igo duzun fitxategia ez da plugin paketea.', //cpg1.4
        'copy_error' => 'Akats bat gertatu da paketea plugin direktorioan kopiatzean.', //cpg1.4
        'upload' => 'Igo', //cpg1.4
        'configure_plugin' => 'Plugina konfiguratu', //cpg1.4
        'cleanup_plugin' => 'Plugina garbitu', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
        'already_rated' => 'Barkatu baina dagoeneko bozkatu duzu',
        'rate_ok' => 'Zure botua zenbatu dut',
        'forbidden' => 'Ezin dituzu zure irudiak bozkatu.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //
if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {
$lang_register_disclamer = <<<EOT
{SITE_NAME}ko administratzaileak edukin ez egokiak edo iraingarriak azkar ezabatzen saiatuko dira, hala ere ezinenkoa da bidaltzen den informazio guzti guztia ikuskatzea. Herregatik ulertu behar duzu webgune honetan plazaratutako iritzi guztiak egileen iritzia eta ikus puntua dela, ez webmaste edo administradoreena (beraiek idatitakoak izan ezik).<br />
<br />
Zin egiten duzu ez duzula inolako material iraingarria, arrazista, gorrotagarria edo ilegala argitaratuko eta, halaber, onartzen duzu { SITE_NAME }ko webmasterrak horrelakoa den edozen materialak webgunetik ezaba dezakeela. Onartzen duzu zuk idatzitako informazio guztia datu base batean biltegiratuko dela, informazio hau ez da inoiz beste kontuetarako erabiliko. Webmasterra eta administradorea ez dira datu basearen integritatearen erantzuleak.<br />
<br />
Webgune honek cookieak erabiltzen ditu. Hauen bitartez nabegazioa hobetzen dugu. ePosta zure profila eta pasahitza ziurtatzeko baino ez dugu erabiltzen.<br />
<br />
Ados bazaude 'Ados nago'n egin klik
EOT;

$lang_register_php = array(
        'page_title' => 'Erabiltzaile berria',
        'term_cond' => 'Baldintzak',
        'i_agree' => 'Ados nago',
        'submit' => 'Alta eskaera bidali',
        'err_user_exists' => 'Aukeratu duzun erabiltzaile izena dagoeneko hartuta dago, beste bat aukeratu mesedez',
        'err_password_mismatch' => 'Bi pasahitzak ez dira berdinak, saiatu berriro',
        'err_uname_short' => 'Erabiltzaile izenak 2 karaktere izan behar du gutxienez',
        'err_password_short' => 'Pasahitzak 2 karaktere izan behar du gutxienez',
        'err_uname_pass_diff' => 'Erabiltzaile izenak eta pasahitzak desberdinak izan behar dute',
        'err_invalid_email' => 'ePosta ez da balidoa',
        'err_duplicate_email' => 'Beste erabiltzaile bat errejistratu da lehenago zuk idatzitako ePostarekin',
        'enter_info' => 'Errejistratzeko informazioa idatzi',
        'required_info' => 'Derrigorrezko informazioa',
        'optional_info' => 'Aukerako informazioa',
        'username' => 'Erabiltzaile izena',
        'password' => 'Pasahitza',
        'password_again' => 'Pasahitza (berriro)',
        'email' => 'ePosta',
        'location' => 'Bizilekua',
        'interests' => 'Gustuak',
        'website' => 'Web orria',
        'occupation' => 'Lanbidea',
        'error' => 'AKATSA',
        'confirm_email_subject' => '%s - Altaren ziurtapena',
        'information' => 'Informazioa',
        'failed_sending_email' => 'Alta ziurtatzeko ePosta ezin izan dut bidali!',
        'thank_you' => 'Mila esker alta emateagatik.<br /><br />Zuk idatzitako ePostara mezu bat bidali dut kontua aktibatzeko behar duzun informazio guztiarekin.',
        'acct_created' => 'Zure kontu sortuta dago, orain sistema erabili ahal duzu zure erabiltzailea eta zure pasahitza idatziz',
        'acct_active' => 'Zure kontua aktibo dago, orain sistema erabili ahal duzu zure erabiltzailea eta zure pasahitza idatziz',
        'acct_already_act' => 'Zure kontua aktibatuta zegoen ya!',
        'acct_act_failed' => 'Kontu hau ezin da aktibatu!',
        'err_unk_user' => 'Aukeratuta erabiltzailea ez dago!',
        'x_s_profile' => '%s ren profila',
        'group' => 'Taldea',
        'reg_date' => 'Alta data',
        'disk_usage' => 'Diskoaren erabilpena',
        'change_pass' => 'Pasahitza aldatu',
        'current_pass' => 'Egungo pasahitza',
        'new_pass' => 'Pasahitz berria',
        'new_pass_again' => 'Pasahitz berria (berriro)',
        'err_curr_pass' => 'Egungo pasahitza ez da zuzena',
        'apply_modif' => 'Aldaketak gorde',
        'change_pass' => 'Nire pasahitza aldatu',
        'update_success' => 'Profila eguneratu dut',
        'pass_chg_success' => 'Pasahitza aldatu dut',
        'pass_chg_error' => 'Ez dut pasahitza aldatu',
        'notify_admin_email_subject' => '%s - Errejistro jakinarazpena', //cpg1.3.0
        'last_uploads' => 'Igotako azken fitxategiak.<br />klik azken igoerak ikusteko', //cpg1.4
        'last_comments' => 'Azken iruzkinak.<br />klik azken iruzkinak ikusteko', //cpg1.4
        'notify_admin_email_body' => 'Erabiltzaile berria errejistratu da zure bilduman "%s" izenpean', //cpg1.3.0
        'pic_count' => 'Igotako fitxategiak', //cpg1.4
        'notify_admin_request_email_subject' => '%s - alta eskaera', //cpg1.4
        'thank_you_admin_activation' => 'Eskerrik asko.<br /><br />Administradoreari bidali diot zure alta eskaera. Onartuz gero ePosta bat jasoko duzu.', //cpg1.4
        'acct_active_admin_activation' => 'Kontua gaituta dago eta ePosta bidali diot erabiltzaileari.', //cpg1.4
        'notify_user_email_subject' => '%s - Alta oharpena', //cpg1.4
);



$lang_register_confirm_email = <<<EOT
Mila esker {SITE_NAME}n errejistratzeagatik


Zure erabiltzaile izena: "{USER_NAME}"




Aktibaketa amaitzeko bahean agertzen den loturaren gainean egin klik edo kopiatu zure nabegadoaren helbide barran.

{ACT_LINK}

Ondo ibili.



{SITE_NAME}ko administradoreak
EOT;

$lang_register_approve_email = <<<EOT
"{USER_NAME}" izenarekin norbaitek alta eman du zure bilduman.

Kontua gaitu nahi baduzu beheko loturan egin klik edo kopiatu helbidea zure nabegadorearen helbide barran.

<a href="{ACT_LINK}">{ACT_LINK}</a>
EOT;

$lang_register_activated_email = <<<EOT
Zure kontua onartuta eta aktibatuta dago.

Orain helbide honetan logeatu ahal duzu: <a href="{SITE_LINK}">{SITE_LINK}</a> "{USER_NAME}" erabiltzaile izenarekin


Ondo ibili,

{SITE_NAME} administratzailea.
EOT;
}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //
if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
        'title' => 'Iruzkinak ikuskatu',
        'no_comment' => 'Ez dago erakusteko iruzkinik',
        'n_comm_del' => '%s iruzkin ezabatuta',
        'n_comm_disp' => 'Zenbat iruzkin erakutsi',
        'see_prev' => 'Aurrekoa ikusi',
        'see_next' => 'Hurrengoa ikusi',
        'del_comm' => 'Aukeratutako iruzkinak ezabatu',
        'user_name' => 'Izena', //cpg1.4
        'date' => 'Data', //cpg1.4
        'comment' => 'Iruzkina', //cpg1.4
        'file' => 'Fitxategia', //cpg1.4
        'name_a' => 'Izenaren arabera gorako ordenatu', //cpg1.4
        'name_d' => 'Izenaren arabera beherako ordenatu', //cpg1.4
        'date_a' => 'Data gorako', //cpg1.4
        'date_d' => 'Data beherako', //cpg1.4
        'comment_a' => 'Iruzkinen arabera gorako', //cpg1.4
        'comment_d' => 'Iruzkinen arabera beherako', //cpg1.4
        'file_a' => 'Fitxategiak gorako', //cpg1.4
        'file_d' => 'Fitxategiak beherako', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File search.php - OK
// ------------------------------------------------------------------------- //
if (defined('SEARCH_PHP')){
$lang_search_php = array(
        'title' => 'Bilatu fitxaregia', //cpg1.4
        'submit_search' => 'bilatu', //cpg1.4
        'keyword_list_title' => 'Hitz gakoen zerrenda', //cpg1.4
        'keyword_msg' => 'Beheko zerrendan ez daude elemnetu guztiak, bertan ez daude irudien izenburuak edo deskribapenak. Saiatu testu bilatzailearekin.',  //cpg1.4
        'edit_keywords' => 'Hitz gakoak editatu.', //cpg1.4
        'search in' => 'Hemen bilatu:', //cpg1.4
        'ip_address' => 'IP helbideak', //cpg1.4
        'fields' => 'Hemen bilatzen', //cpg1.4
        'age' => 'Berritasuna', //cpg1.4
        'newer_than' => 'Hau baino berriagoa', //cpg1.4
        'older_than' => 'Hau baino zaharragoa', //cpg1.4
        'days' => 'egunak', //cpg1.4
        'all_words' => 'Hitz guztiak (AND)', //cpg1.4
        'any_words' => 'Edozein hitz (OR)', //cpg1.4
);

$lang_adv_opts = array(
        'title' => 'Izenburua', //cpg1.4
        'caption' => 'Caption', //cpg1.4
        'keywords' => 'Hitz gakoak', //cpg1.4
        'owner_name' => 'Jabea', //cpg1.4
        'filename' => 'Fitxategi izena', //cpg1.4
);

}

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //
if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
        'page_title' => 'Fitxategi berriak bilatu',
        'select_dir' => 'Aukeratu direktoria',
        'select_dir_msg' => 'Funtzio honekin batch eran gehitu ahal dituzu lehenago FTP bitartez edo igotako fitxategia.<br /><br />Aukeratu fitxategiak jarri dituzun direktorioa.', //cpg1.4
        'select_dir_msg' => 'Funtzio honen bitartez FTP bidez igotako fitxategi guztiak automatikoki gehituko dira.<br /><br />Aukeratu fitxategiak utzi dituzun direktorioa',
        'no_pic_to_add' => 'Ez dago fitxategirik gehitzeko',
        'need_one_album' => 'Funtzio hau erabiltzeko bilduma bat behar duzu gutxienez',
        'warning' => 'Adi',
        'change_perm' => 'Scriptak ezin izan du direktorioan idatzi, bere baimenak aldatu behar dituzu (755 edo 777) berriro saiatu baino lehen!',
        'target_album' => '<b>&quot;</b>%s<b>&quot; direktorioko fitxategiak </b>%s bilduman jarri',
        'folder' => 'Karpeta',
        'image' => 'Irudia',
        'album' => 'Bilduma',
        'result' => 'Emaitza',
        'dir_ro' => 'Ezin da idatzi. ',
        'dir_cant_read' => 'Ezin da irakurri. ',
        'insert' => 'Bilduman fitxategiak gehitzen',
        'list_new_pic' => 'Fitxategi berrien zerrenda',
        'insert_selected' => 'Aukeratutako fitxategiak gehitu',
        'no_pic_found' => 'Ez dut fitxategi berririk topatu',
        'be_patient' => 'Lasai, scriptak denbora behar du fitxategi guztiak gehitzeko',
        'no_album' => 'ez duzu bildumarik aukeratu',  //cpg1.3.0
        'result_icon' => 'klikatu oharrak ikusteko edo freskatzeko',  //cpg1.4
        'notes' =>  '<ul>'.
                                '<li><b>OK</b> : fitxategia ondo gehitu duela esan nahi du'.
                                '<li><b>DP</b> : fitxategia duplikatuta dagoela esan nahi du (dagoeneko datu basean dagoela)'.
                                '<li><b>PB</b> : fitxategia ezin izan duela gehitu esan nahi du (ziurtatu, mesedez, konfigurazioa eta direktoriaren baimenak)'.
                                '<li><b>NA</b> : fitxategiak gehitzeko bilduma ez duzula aukera esan nahi du, \'<a href="javascript:history.back(1)">Atzera</a>\' sakatu eta bilduma bat aukeratu. Bat izan ezean lehenago <a href="albmgr.php">bat sortu</a></li>'.
                                '<li>OK, DP, PB ikonoak agertu ezean, sakatu kargatu gabeko irudiaren ikonoan PHPk bueltatu duen akatsa ikusteko'.
                                '<li>Nabegadoreak timeout bueltatzen badu, eguneratzeko ikonoak sakatu'.
                                '</ul>',
        'select_album' => 'bilduma aukeratu', //cpg1.3.0
        'check_all' => 'Guztiak markatu', //cpg1.3.0
        'uncheck_all' => 'Guztiak desmarkatu', //cpg1.3.0
        'no_folders' => 'Dagoeneko ez dago direktoriorik "albums" direktorioan. Surtu direktorio bat, gutxienez, eta zure irudiak bertara. Ez duzu irudirik "userpics" eta "edit" igo behar, beste lan batzuetarako baitaude erreserbatuak.', //cpg1.4
        'albums_no_category' => 'Kategoriarik gabeko bildumak', //cpg1.4 // album pulldown mod, added by frogfoot
        'personal_albums' => '* Erabiltzaileen bildumak', //cpg1.4 // album pulldown mod, added by frogfoot
        'browse_batch_add' => 'Browsable interface (gomendatua)', //cpg1.4
        'edit_pics' => 'Fitxategiak editatu', //cpg1.4
        'edit_properties' => 'Bildumaren propietateak', //cpg1.4
        'view_thumbs' => 'Miniaturak ikusi', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File stat_details.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('STAT_DETAILS_PHP')) $lang_stat_details_php = array(
        'show_hide' => 'izkutatu/erakutsi zutabe hau', //cpg1.4
        'vote' => 'Botuak', //cpg1.4
        'hits' => 'Hitak', //cpg1.4
        'stats' => 'Botuen estatistikak', //cpg1.4
        'sdate' => 'Data', //cpg1.4
        'rating' => 'Bozketa', //cpg1.4
        'search_phrase' => 'Testu bilaketa', //cpg1.4
        'referer' => 'Referer', //cpg1.4
        'browser' => 'Nabegadorea', //cpg1.4
        'os' => 'Sistema eragilea', //cpg1.4
        'ip' => 'IP', //cpg1.4
        'sort_by_xxx' => 'Sort by %s', //cpg1.4
        'ascending' => 'gorako', //cpg1.4
        'descending' => 'beherako', //cpg1.4
        'internal' => 'int', //cpg1.4
        'close' => 'itxi', //cpg1.4
        'hide_internal_referers' => 'izkutatu barruko erreferentziak', //cpg1.4
        'date_display' => 'Data erakutsi', //cpg1.4
        'submit' => 'bidali / freskatu', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File thumbnails.php
// ------------------------------------------------------------------------- //
// Void

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //
if (defined('UPLOAD_PHP')) $lang_upload_php = array(
        'title' => 'Fitxategi berria',
        'custom_title' => 'Formularioak personalizatzeko', //cpg1.3.0
        'cust_instr_1' => 'Igotzeko gelaxken kopurua zehaztu ahal duzu. Hala ere, ezin duzu behean zehaztutako mugak gainditu.', //cpg1.3.0
        'cust_instr_2' => 'Box Number Requests', //cpg1.3.0
        'cust_instr_3' => 'Fitxategiak igoetzeko gelaxka: %s', //cpg1.3.0
        'cust_instr_4' => 'URI/URLak igoetzeko gelaxka: %s', //cpg1.3.0
        'cust_instr_5' => 'URI/URLak igoetzeko gelaxka:', //cpg1.3.0
        'cust_instr_6' => 'Fitxategiak igotzeko gelaxkak:', //cpg1.3.0
        'cust_instr_7' => 'Idatzi zenbat mota baikoitzeko gelaxka nahi duzun oraingo honetan.  Gero \'Jarraitu\' sakatu. ', //cpg1.3.0
        'reg_instr_1' => 'Ekintza ezbalidoa formularioa sortzeko.', //cpg1.3.0
        'reg_instr_2' => 'Orain fitxategiak igo ahal dituzu beheko igoera gelaxkak erabilita. Fitxategiak ezin dira  %s KB baino handiagoak. ZIP fitxategiak \'Fitxategi igotzea\' eta \'URI/URL igotzea\' ataletan konprimituta iraungo dute.', //cpg1.3.0
        'reg_instr_3' => 'Konprimitutako fitxategiak deskonprimituak izatea nahi baduzu \'Deskonprimitu ZIP igoerak\' atalean dauden igoera gelaxkak erabili behar dituzu.', //cpg1.3.0
        'reg_instr_4' => 'URI/URL igera atala erabiltzen duzunean era egokian idatzi fitxategiekiko bideak. Horrela: http://www.niregunea.org/irudiak/adibidea.jpg', //cpg1.3.0
        'reg_instr_5' => 'Formularioa osotu ostean \'Jarraitu\'n sakatu.', //cpg1.3.0
        'reg_instr_6' => 'Deskonprimitu ZIP igoerak:', //cpg1.3.0
        'reg_instr_7' => 'Fitxategi igoerak:', //cpg1.3.0
        'reg_instr_8' => 'URI/URL igoerak:', //cpg1.3.0
        'error_report' => 'Akatsak', //cpg1.3.0
        'error_instr' => 'Igoera hauekin akatsak gertatu dira:', //cpg1.3.0
        'file_name_url' => 'Fitxategia/URLa', //cpg1.3.0
        'error_message' => 'Akats mezua', //cpg1.3.0
        'no_post' => 'Ezin POSTen bitartez igo.', //cpg1.3.0
        'forb_ext' => 'Fitxategiaren luzapena debekatuta.', //cpg1.3.0
        'exc_php_ini' => 'php.ini-n zehaztutako gehienezko tamaina gaindituta.', //cpg1.3.0
        'exc_file_size' => 'CPG-ek onartutako gehienezko tamaina gainditua.', //cpg1.3.0
        'partial_upload' => 'Only a partial upload.', //cpg1.3.0
        'no_upload' => 'Igoera ez da burutu.', //cpg1.3.0
        'unknown_code' => 'PHP igoera akats ezezaguna.', //cpg1.3.0
        'no_temp_name' => 'Igoerarik ez - behin behineko izenik ez.', //cpg1.3.0
        'no_file_size' => 'Daturik gabea/apurtuta', //cpg1.3.0
        'impossible' => 'Ezin mugitu.', //cpg1.3.0
        'not_image' => 'Ez da irudia/apurtuta', //cpg1.3.0
        'not_GD' => 'Ez da GD luzapena.', //cpg1.3.0
        'pixel_allowance' => 'Irudiaren tamainak onartutakoa gainditzen du.', //cpg1.4
        'incorrect_prefix' => 'URI/URL aurrizkia ez zuzena', //cpg1.3.0
        'could_not_open_URI' => 'Ezin izan dut URIa zabaldu.', //cpg1.3.0
        'unsafe_URI' => 'Zuzentasuna ezin zehaztu.', //cpg1.3.0
        'meta_data_failure' => 'Meta datuen akatsa', //cpg1.3.0
        'http_401' => '401 Baimen gabekoa', //cpg1.3.0
        'http_402' => '402 Ordainpekoa', //cpg1.3.0
        'http_403' => '403 Debekatuta', //cpg1.3.0
        'http_404' => '404 Ez topatua', //cpg1.3.0
        'http_500' => '500 Zerbitzariaren barne akatsa', //cpg1.3.0
        'http_503' => '503 Zerbitzu ez erabilgarria', //cpg1.3.0
        'MIME_extraction_failure' => 'MIME mota ezin da zehaztu.', //cpg1.3.0
        'MIME_type_unknown' => 'MIME mota ezezaguna', //cpg1.3.0
        'cant_create_write' => 'Ezin idazteko fitxategia sortu.', //cpg1.3.0
        'not_writable' => 'Ezin idazteko fitxategian idatzi.', //cpg1.3.0
        'cant_read_URI' => 'Ezin dut URI/URLa irakurri', //cpg1.3.0
        'cant_open_write_file' => 'Ezin zabaldu URIa idazteko.', //cpg1.3.0
        'cant_write_write_file' => 'Ezin idatzi URIaren idazteko fitxategian.', //cpg1.3.0
        'cant_unzip' => 'Ezin deskonprimitu.', //cpg1.3.0
        'unknown' => 'Akats ezezaguna', //cpg1.3.0
        'succ' => 'Ondo igota', //cpg1.3.0
        'success' => '%s igoera zuzenak.', //cpg1.3.0
        'add' => '\'Jarraitu\'n sakatu fitxategiak bildumari gehitzeko.', //cpg1.3.0ari
        'failure' => 'Akatsa igotzean', //cpg1.3.0
        'f_info' => 'Fitxategiaren infoa', //cpg1.3.0
        'no_place' => 'Aurreko fitxategia ezin izan dut gehitu.', //cpg1.3.0
        'yes_place' => 'Aurreko fitxategia ondo gehitu dut.', //cpg1.3.0
        'max_fsize' => 'Onartzen diren fitxategi tamaina handiena %s KBekoa da',
        'album' => 'Bilduma',
        'picture' => 'Fitxategia',
        'pic_title' => 'Fitxategiaren izenburua',
        'description' => 'Fitxategiaren deskribapena',
        'keywords' => 'Hitz gakoak (espazioak separatuta)<br /><a href="#" onClick="return MM_openBrWindow(\'keyword_select.php\',\'selectKey\',\'width=250, height=400, scrollbars=yes,toolbar=no,status=yes,resizable=yes\')">Zerrendan aukeratu</a>', //cpg1.4
        'keywords_sel' =>'Hitz gakoa aukeratu', //cpg1.4
        'err_no_alb_uploadables' => 'Ez dago fitxategiak gehitzea onartzen duen bildumarik',
        'place_instr_1' => 'Fitxategiak bildumetan sartzen ari zara.  Orain fitxategi bakiotzari buruzko informazio garrantzitsua gehitu ahal duzu.', //cpg1.3.0
        'place_instr_2' => 'Fitxategi gehiago gehitu nahi?. \'Gehiago\'n sakatu.', //cpg1.3.0
        'process_complete' => 'Fitxategi guztiak ondo gehitu ditut.', //cpg1.3.0
        'albums_no_category' => 'Kategoriarik gabeko bildumak', //cpg1.4. //album pulldown mod, added by frogfoot
        'personal_albums' => '* Norbanakoaren bildumak', //cpg1.4 //album pulldown mod, added by frogfoot
        'select_album' => 'Bilduma aukeratu', //cpg1.4 //album pulldown mod, added by frogfoot
        'close' => 'Itxi', //cpg1.4
        'no_keywords' => 'Ez dago hitz gakorik erabilgarri!', //cpg1.4
        'regenerate_dictionary' => 'Hiztegia bersortu', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //
if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
        'memberlist' => 'Bazkideeen zerrenda', //cpg1.4
        'user_manager' => 'Erabiltzaileen kudeaketa', //cpg1.4
        'title' => 'Erabiltzaileak kudeatu',
        'name_a' => 'Izenaren arabera gorako',
        'name_d' => 'Izenaren arabera beherako',
        'group_a' => 'Taldearen arabera gorako',
        'group_d' => 'Taldearen arabera beherako',
        'reg_a' => 'Alta dataren arabera gorako',
        'reg_d' => 'Alta dataren arabera beherako',
        'pic_a' => 'Argazki kopuruaren arabera gorako',
        'pic_d' => 'Argazki kopuruaren arabera beherako',
        'disku_a' => 'Disko okupazioaren arabera gorako',
        'disku_d' => 'Disko okupazioaren arabera beherako',
        'lv_a' => 'Azken bisitaren arabera gorako', //cpg1.3.0
        'lv_d' => 'Azken bisitaren arabera beherako', //cpg1.3.0
        'sort_by' => 'Erabiltzaileak ordenatu',
        'err_no_users' => 'Erabiltzaileen taula hutsik dago!',
        'err_edit_self' => 'Ezin duzu zeure profila editatu, horretarako \'Nire erabiltzaile profila\' aukera erabili',
        'edit' => 'EDITATU',
        'with_selected' => 'aukeratutako:', //cpg1.4
        'delete' => 'Ezabatu', //cpg1.4
        'delete_files_no' => 'gorde fitxategi publikoak (anonimizatuta)', //cpg1.4
        'delete_files_yes' => 'fitxategi publikoak ere ezabatu', //cpg1.4
        'delete_comments_no' => 'gorde iruzkinak (anonimizatuta)', //cpg1.4
        'delete_comments_yes' => 'iruzkinak ere ezabatu', //cpg1.4
        'activate' => 'Gaitu', //cpg1.4
        'deactivate' => 'Ezgaitu', //cpg1.4
        'reset_password' => 'Pasahitza berrezarri', //cpg1.4
        'change_primary_membergroup' => 'Talde nagusia aldatu', //cpg1.4
        'add_secondary_membergroup' => 'Bigarren taldea gehitu', //cpg1.4
        'name' => 'Erabiltzaile izena',
        'group' => 'Taldea',
        'inactive' => 'Inaktiboa',
        'operations' => 'Ekintzak',
        'pictures' => 'Fitxategiak',
        'disk_space_used' => 'Erabilita', //cpg1.4
          'disk_space' => 'Erabilitako espazioa / kuota',
        'disk_space_quota' => 'Kuota', //cpg1.4
        'registered_on' => 'Noiz errejistratua',
        'last_visit' => 'Azken bisita', //cpg1.3.0
        'u_user_on_p_pages' => '%d erabiltzaile %d orritan',
        'confirm_del' => 'Seguru erabiltzaile hau ezabatu nahi duzula? \\nBere argazki eta bildumak guztiak ere ezabatuko ditut.',
        'mail' => 'ePOSTA',
        'err_unknown_user' => 'Aukeratutako erabiltzailea ez dago!',
        'modify_user' => 'Erabiltzailea eraldatu',
        'notes' => 'Oharrak',
        'note_list' => '<li>Egungo pasahitza aldatu nahi ez baduzu "pasahitza" atala zuri utzi',
        'password' => 'Pasahitza',
        'user_active' => 'Erabiltzailea aktibo dago',
        'user_group' => 'Erabiltzaileen taldea',
        'user_email' => 'Erabiltzailearen ePosta',
        'user_web_site' => 'Erabiltzailearen web orria',
        'create_new_user' => 'Erabiltzaile berria',
        'user_location' => 'Erabiltzailearen bizilekua',
        'user_interests' => 'Erabiltzailerean gogoak',
        'user_occupation' => 'Erabiltzailearen lanbidea',
        'user_profile1' => '$user_profile1', //cpg1.4
        'user_profile2' => '$user_profile2', //cpg1.4
        'user_profile3' => '$user_profile3', //cpg1.4
        'user_profile4' => '$user_profile4', //cpg1.4
        'user_profile5' => '$user_profile5', //cpg1.4
        'user_profile6' => '$user_profile6', //cpg1.4
        'latest_upload' => 'Azken igoerak', //cpg1.3.0
        'never' => 'inoiz ez', //cpg1.3.0
        'search' => 'Erabiltzailea bilatu', //cpg1.4
        'submit' => 'Bidali', //cpg1.4
        'search_submit' => 'Joan!', //cpg1.4
        'search_result' => 'Bilaketaren emaitza: ', //cpg1.4
        'alert_no_selection' => 'Lehenago erabiltzaile izen bat aukeratu behar duzu!', //cpg1.4 //js-alert
        'password' => 'pasahitza', //cpg1.4
        'select_group' => 'Taldea aukeratu', //cpg1.4
        'groups_alb_access' => 'Bildumaren baimenak taldeeen arabera', //cpg1.4
        'album' => 'Bilduma', //cpg1.4
        'category' => 'Kategoria', //cpg1.4
        'modify' => 'Onartu?', //cpg1.4
        'group_no_access' => 'Talde honek ez du pribilejio berezirik', //cpg1.4
        'notice' => 'Oharra', //cpg1.4
        'group_can_access' => '"%s"-k soilik ikusi ahal dituen bildumak', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //

if (defined('UTIL_PHP')) $lang_util_php = array(


        'update_db_explanation' => 'Coppermineren fitxategiak ordezkatu badituzu, aldatu edo bertsioa eguneratu datu basearen eguneraketa egikaritu beharko duzu. Horrela beharrezkoak diren taulak eta baloreak sortuko ditu datu basean.', //cpg1.3.0

);

if (defined('UTIL_PHP')) {
$lang_util_desc_php = array(
'Updates titles from filename', //cpg1.4
'Deletes titles', //cpg1.4
'Rebuilds thumbnails and resized photos', //cpg1.4
'Deletes original sized photos replacing them with the resized version', //cpg1.4
'Deletes original or intermediate size photos to free webspace', //cpg1.4
'Deletes orphaned comments', //cpg1.4
'Re-reads file sizes and dimensions (if you manually edited pics)', //cpg1.4
'Resets views counter', //cpg1.4
'Displays phpinfo', //cpg1.4
'Updates the database', //cpg1.4
'Displays log files', //cpg1.4
);
$lang_util_php = array(
  'title' => 'Tresnak (irudiak eraldatu)',
  'what_it_does' => 'Zer egiten du',
  'file' => 'Fitxategia',
  'problem' => 'Arazoa', //cpg1.4
  'status' => 'Egoera', //cpg1.4
  'title_set_to' => 'tutulua:',
  'submit_form' => 'bidali',
  'updated_succesfully' => 'ondo eguneratuta',
  'error_create' => 'Akatsa sortzean',
  'continue' => 'Irudi gehiago prozesatu',
  'main_success' => '%s fitxategia da orain fitxategi nagusia',
  'error_rename' => '%s fitxategia %s berrizendatzekoan akatsa',
  'error_not_found' => '%s fitxategia ez dut topatu',
  'back' => 'nagusira bueltatu',
'thumbs_wait' => 'Miniaturak sortzen eta irudiak prestatzen, itxaron mesedez...',
  'thumbs_continue_wait' => 'Miniaturak sortzen eta irudiak prestatzen, itxaron mesedez......',
  'titles_wait' => 'Izenburuak eguneratzen, itxaron mesedez...',
  'delete_wait' => 'Izenburuak ezabatzen, itxaron mesedez...',
  'replace_wait' => 'Jatorrizko irudiak ezabatzen, itxaron mesedez..',
  'instruction' => 'Argibide azkarrak',
  'instruction_action' => 'Ekintza aukeratu',
  'instruction_parameter' => 'Parametroak ezarri',
  'instruction_album' => 'Bilduma aukeratu',
  'instruction_press' => '%s sakatu',
  'update' => 'Miniaturak eguneratu eta/edo irudiak moldatu',
  'update_what' => 'Zer eguneratu behar dut',
  'update_thumb' => 'Miniaturak soilik',
  'update_pic' => 'Moldatutako irudiak soilik',
  'update_both' => 'Moldatutako irudiak eta miniaturak',
  'update_number' => 'Zenbat irudi prozesatuko da gehienez klik bakoitzean',
  'update_option' => '(Saiatu kopuru txikiagoa ezartzen timeout arazoak izanez gero)',
  'filename_title' => 'Filename &rArr; File title',
  'filename_how' => 'How should the filename be modified',
  'filename_remove' => 'Ezabatu .jpg amaiera eta ordezkatu hutsuneak _ ikurrarekin',
  'filename_euro' => 'Aldatu 2003_11_23_13_20_20.jpg honekin 23/11/2003 13:20',
  'filename_us' => 'Aldatu 2003_11_23_13_20_20.jpg honekin 11/23/2003 13:20',
  'filename_time' => 'Aldatu 2003_11_23_13_20_20.jpg honekin 13:20',
  'delete' => 'Ezabatu fitxategien izenak eta jatorrizko argazkiak',
  'delete_title' => 'Ezabatu fitxategien izenak',
  'delete_title_explanation' => 'Honek zuk esandako bildumaren fitxategi guztien izenburuak ezabatuko ditu.', //cpg1.4
  'delete_original' => 'Ezabatu jatorrizko argazkiak',
  'delete_original_explanation' => 'Honek jatorrizko argazkiak ezabatuko ditu.', //cpg1.4
  'delete_intermediate' => 'Ezabatu tarteko irudiak', //cpg1.4
  'delete_intermediate_explanation' => 'Honek jatorrizko irudiak ezabatuko ditu.<br />Erabili aukera hau lekua irabazteko zerbitzarian.', //cpg1.4
  'delete_replace' => 'Jatorrizko irudiak moldatutakoekin ordezkatu',
  'titles_deleted' => 'Esandako bilduman izenburuak ezbatu ditut', //cpg1.4
  'deleting_intermediates' => 'Tarteko irudiak ezabatzen, itxaron mesedez...', //cpg1.4
  'searching_orphans' => 'Umezurtzak bilatzen, itxaron mesedez...', //cpg1.4
  'select_album' => 'Bilduma aukeratu',
  'delete_orphans' => 'Ezabatu iruzkinak galdutako fitxategietan', //cpg1.4
  'delete_orphans_explanation' => 'Honek ahalbidetzen dizu identifikatzea eta ezabatzea fitxategiekin lotura ez daukaten iruzkinak.<br />Bilduma guztietan begiratzen du.', //cpg1.4
  'refresh_db' => 'Berkargatu fitxategien tamainari buruzko infoa', //cpg1.4
  'refresh_db_explanation' => 'Honek fitxategien tamaina berriro irakurtzen du. Erabili kuotak zuzenak ez badira edo eskuz aldatu badituzu fitxategiak.', //cpg1.4
  'reset_views' => 'Ikustaldien kontadoreak berrabiarazi', //cpg1.4
  'reset_views_explanation' => 'Esandako bildumaren ikustaldien kontadore guztiak zeron ezartzen ditu.', //cpg1.4
  'orphan_comment' => 'Iruzkin umezurtz topatu ditut',
  'delete' => 'Ezabatu',
  'delete_all' => 'Guztiak ezabatu',
  'delete_all_orphans' => 'Umezurtz guztiak ezabatu?', //cpg1.4
  'comment' => 'Iruzkina: ',
  'nonexist' => 'attached to non existant file # ',
  'phpinfo' => 'phpinfo pantailaratu',
  'phpinfo_explanation' => 'Zure zerbitzariari buruzko informazio teknikoa erakusten du.<br /> - Soportea eskatzean garrantzitsua da.', //cpg1.4
  'update_db' => 'Datubasea eguneratu',
  'update_db_explanation' => 'Coppermineren fitxategiak aldatu badituzu, ordezkatu edo aurreko bertsio batetik eguneratu, abiarazi hau behin gutxienez. Horrela beharrezkoak diren taulak edota konfigurazioak sotuko ditu Coppermineren datubasean.',
  'view_log' => 'Log fitxategiak ikusi', //cpg1.4
  'view_log_explanation' => 'Copperminek hainbat gertakizunen traza gorde dezake. <a href="admin.php">Coppermineren konfigurazio fitxategian</a> aukera hau gaitu baduzu ikusi ahal izango duzu.', //cpg1.4
  'versioncheck' => 'Bertsioak ziurtatu', //cpg1.4
  'versioncheck_explanation' => 'Fitxategi guztiak begiratzen ditu ziurtatzeko konfliktorik ez dagoela, oso baliagarria da eguneraketa baten ostean.', //cpg1.4
  'bridgemanager' => 'Bridge-ren kudeaketa', //cpg1.4
  'bridgemanager_explanation' => 'Gaitu/ezgaitu coppermineren integrazioa (bridging) beste aplikazio batzuekin (adib: zure BBSa).', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File versioncheck.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('VERSIONCHECK_PHP')) $lang_versioncheck_php = array(
  'title' => 'Versioncheck', //cpg1.4
  'what_it_does' => 'This page is meant for users who have updated their coppermine install. This script goes through the files on your webserver and tries to determine if your local file versions on the webserver are the same as the ones from the repository at http://coppermine.sourceforge.net, this way displaying the files you were meant to update as well.<br />It will show everything in red that needs to be fixed. Entries in yellow need looking into. Entries in green (or your default font color) are OK.<br />Click on the help icons to find out more.', //cpg1.4
  'online_repository_unable' => 'Ezin izan dut online errepositorioarekin konektatu', //cpg1.4
  'online_repository_noconnect' => 'Coppermine was unable to connect to the online repository. This can have two reasons:', //cpg1.4
  'online_repository_reason1' => 'the coppermine online repository is currently down - check if you can browse this page: %s - if you can\'t access this page, try again later.', //cpg1.4
  'online_repository_reason2' => 'PHP on your webserver is configured with %s turned off (by default, it\'s turned on). If the server is yours to administer, turn this option on in <i>php.ini</i> (at least allow it to be overridden with %s). If you\'re webhosted, you will probably have to live with the fact that you can\'t compare your files to the online repository. This page will then only display the file versions that came with your distribution - updates will not be displayed.', //cpg1.4
  'online_repository_skipped' => 'Connection to online repository skipped', //cpg1.4
  'online_repository_to_local' => 'The script is defaulting to the local copy of the version-files now. The data may be inacurate if you have upgraded Coppermine and you haven\'t uploaded all files. Changes to the files after the release won\'t be taken into account as well.', //cpg1.4
  'local_repository_unable' => 'Unable to connect to the repository on your server', //cpg1.4
  'local_repository_explanation' => 'Coppermine was unable to connect to the repository file %s on your webserver. This probably means that you haven\'t uploaded the repository file to your webserver. Do so now and then try to run this page once more (hit refresh).<br />If the script still fails, your webhost might have disabled parts of <a href="http://www.php.net/manual/en/ref.filesystem.php">PHP\'s filesystem functions</a> completely. In this case, you simply won\'t be able to use this tool at all, sorry.', //cpg1.4
  'coppermine_version_header' => 'Instalatutako Coppermineren bertsioa', //cpg1.4
  'coppermine_version_info' => 'You have currently installed: %s', //cpg1.4
  'coppermine_version_explanation' => 'If you think this is entirely wrong and you\'re supposed to be running a higher version of Coppermine, you probably haven\'t uploaded the most recent version of the file <i>include/init.inc.php</i>', //cpg1.4
  'version_comparison' => 'Bertsioen konparaketa', //cpg1.4
  'folder_file' => 'direktorio/fitxategiak', //cpg1.4
  'coppermine_version' => 'cpg bertsioa', //cpg1.4
  'file_version' => 'fitxategi bertsioa', //cpg1.4
  'webcvs' => 'web svna', //cpg1.4
  'writable' => 'writable', //cpg1.4
  'not_writable' => 'not writable', //cpg1.4
  'help' => 'Laguntza', //cpg1.4
  'help_file_not_exist_optional1' => 'fitxategi/direktorioa ez dago', //cpg1.4
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
  'go_to_webcvs' => 'hona joan %s', //cpg1.4
  'options' => 'Aukerak', //cpg1.4
  'show_optional_files' => 'erakutsi aukerako direktorioak/fitxategiak', //cpg1.4
  'show_mandatory_files' => 'erakutsi lotesle fitxategiak', //cpg1.4
  'show_file_versions' => 'erakutsi fitxategien bertsioa', //cpg1.4
  'show_errors_only' => 'erakutsi akastun fitxategiak/direktorioak soilik', //cpg1.4
  'show_permissions' => 'erakutsi direktorioen baimenak', //cpg1.4
  'show_condensed_output' => 'show condensed ouput (for easier screenshots)', //cpg1.4
  'coppermine_in_webroot' => 'coppermine zerbitzariaren erroan dago instalatuta', //cpg1.4
  'connect_online_repository' => 'saiatu online errepositorioarekin konektatzen', //cpg1.4
  'show_additional_information' => 'erakutsi info gehigarria', //cpg1.4
  'no_webcvs_link' => 'don\'t display web svn link', //cpg1.4
  'stable_webcvs_link' => 'display web svn link to stable branch', //cpg1.4
  'devel_webcvs_link' => 'display web svn link to devel branch', //cpg1.4
  'submit' => 'aldaketak aplikatu / freskatu', //cpg1.4
  'reset_to_defaults' => 'jatorrizko ezarpenak berrezarri', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File view_log.php  //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('VIEWLOG_PHP')) $lang_viewlog_php = array(
  'delete_all' => 'Log guztiak ezabatu', //cpg1.4
  'delete_this' => 'Log hau ezabatu', //cpg1.4
  'view_logs' => 'Logak ikusi', //cpg1.4
  'no_logs' => 'Ez dago logik.', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File xp_publish.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('XP_PUBLISH_PHP')) {

$lang_xp_publish_client = <<<EOT
<h1>XP Web Publishing Wizard Client</h1><p>Modulu honek <b>Windows XPren</b> web publishing wizard Copperminerekin erabiltzea ahalbidetzen dizu.</p><p>Kodigoaren ideia:
EOT;

$lang_xp_publish_required = <<<EOT
<h2>What is required</h2><ul><li>Windows XP in order to have the wizard.</li><li>A working installation of Coppermine on which <b>the web upload function works properly.</b></li></ul><h2>How to install on client side</h2><ul><li>Right click on
EOT;

$lang_xp_publish_select = <<<EOT
Select &quot;save target as..&quot;. Save the file on your hard drive. When saving the file, check that the proposed file name is <b>cpg_###.reg</b> (the ### represents a numerical timestamp). Change it to that name if necessary (leave the numbers). When downloaded, double click on the file in order to register your server with the web publishing wizard.</li></ul>
EOT;

$lang_xp_publish_testing = <<<EOT
<h2>Testing</h2><ul><li>In Windows Explorer, select some files and click on <b>Publish xxx on the web</b> in the left pane.</li><li>Confirm your file selection. Click on <b>Next</b>.</li><li>In the list of services that appear, select the one for your photo gallery (it has the name of your gallery). If the service does not appear, check that you have installed <b>cpg_pub_wizard.reg</b> as described above.</li><li>Input your login information if required.</li><li>Select the target album for your pictures or create a new one.</li><li>Click on <b>next</b>. The upload of your pictures starts.</li><li>When it is completed, check your gallery to see if pictures have been properly added.</li></ul>
EOT;

$lang_xp_publish_notes = <<<EOT
<h2>Notes :</h2><ul><li>Once the upload has started, the wizard can't display any error message returned by the script so you can't know if the upload failed or succeeded until you check your gallery.</li><li>If the upload fails, enable &quot;Debug mode&quot; on the Coppermine admin page, try with one single picture and check error messages in the
EOT;

$lang_xp_publish_flood = <<<EOT
Zerbitzarian zure Coppermine direktorioan kokatuta dagoen fitxategia.</li><li>Bilduma wizard bitartez igotako irudiek <i>floodeatuta</i> izatea ekiditzeko, soilik <b>bildumen administratzaileek</b> eta <b>bilduma propioak izan ahal dituzten erabiltzaileek</b> arabili ahal dute tresna hau.</li>
EOT;



$lang_xp_publish_php = array(
  'title' => 'Coppermine - XP Web Publishing Wizard', //cpg1.4
  'welcome' => 'Mongi etorri <b>%s</b>,', //cpg1.4
  'need_login' => 'Nabegadorea erabiliz logeatu behar duzu copperminen Wizard erabili baino lehen.<p/>.', //cpg1.4
  'no_alb' => 'Ez daukazu eskubiderik sistema honetako bildumetan Wizardekin zure irudiak argitaratzeko.', //cpg1.4
  'upload' => 'Igo zure irudiak dagoen bilduma batera', //cpg1.4
  'create_new' => 'Bilduma berria sortu', //cpg1.4
  'album' => 'Bilduma', //cpg1.4
  'category' => 'Kategoria', //cpg1.4
  'new_alb_created' => 'Zure album berria: &quot;<b>%s</b>&quot; sortuta.', //cpg1.4
  'continue' => 'Sakatu &quot;Hurrengoa&quot; irudiak igotzen hasteko', //cpg1.4
  'link' => 'lotura hau', //cpg1.4
);
}
?>
