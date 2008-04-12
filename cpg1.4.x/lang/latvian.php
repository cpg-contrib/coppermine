<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2007 Coppermine Dev Team
  v1.1 originally written by Gregory DEMAR

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 3
  as published by the Free Software Foundation.
  
  ********************************************
  Coppermine version: 1.4.18
  $Source$
  $Revision: 3966 $
  $Author: gaugau $
  $Date: 200-09-17 08:53:13 +0200 (Mo, 17 Sep 2007) $
**********************************************/
// ------------------------------------------------------------------------- //
// $Id: latvian.php 3966 2008-01-12 06:53:13Z gaugau $
// ------------------------------------------------------------------------- //

if (!defined('IN_COPPERMINE')) { die('Not in Coppermine...');}

// info about translators and translated language
$lang_translation_info = array(
  'lang_name_english' => 'Latvian', //cpg1.4
  'lang_name_native' => 'Latviešu', //cpg1.4
  'lang_country_code' => 'lv', //cpg1.4
  'trans_name'=> 'ImantsJasmans',
  'trans_email' => 'jasmans_imants@inbox.lv',
  'trans_website' => 'imants.filer.lv',
  'trans_date' => '2008-01-14',
);

$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('Baiti', 'Kb', 'Mb');

// Day of weeks and months
$lang_day_of_week = array('Sv', 'Pi', 'Ot', 'Tr', 'Ce', 'Pi', 'Se');
$lang_month = array('Jan', 'Feb', 'Mar', 'Apr', 'Mai', 'Jūn', 'Jūl', 'Aug', 'Sep', 'Okt', 'Nov', 'Dec');

// Some common strings
$lang_yes = 'Jā';
$lang_no  = 'Nē';
$lang_back = 'Atpakaļ';
$lang_continue = 'Turpināt';
$lang_info = 'Informācija';
$lang_error = 'Kļūda';
$lang_check_uncheck_all = 'atcelt/noņemt iezīmēšanu'; //cpg1.4

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$album_date_fmt = '%d/%m/%Y %H:%M';
$lastcom_date_fmt = '%d/%m/%Y %H:%M';
$lastup_date_fmt = '%d/%m/%Y %H:%M';
$register_date_fmt = '%d/%m/%Y %H:%M';
$lasthit_date_fmt = '%d/%m/%Y %H:%M';
$comment_date_fmt = '%d/%m/%Y %H:%M';
$log_date_fmt = '%B %d, %Y в %H:%M'; //cpg1.4

// For the word censor
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*');

$lang_meta_album_names = array(
  'random' => 'Gadījuma faili',
  'lastup' => 'Jaunākie faili',
  'lastalb'=> 'Jaunākais albūmos',
  'lastcom' => 'Jaunākie komentāri',
  'topn' => 'Biežāk skatītie',
  'toprated' => 'Labākie',
  'lasthits' => 'Pēdējie skatītie',
  'search' => 'Meklēšanas rezultāti',
  'favpics'=> 'Favorīti',  //cpg1.4
);

$lang_errors = array(
    'access_denied' => 'Tev nav pieejas tiesību šai lapai.',
    'perm_denied' => 'Tev nav tiesību veikt šādu darbību.',
    'param_missing' => 'Tika izsaukta komanda bez parametriem.',
    'non_exist_ap' => 'Izvēlētais albums/attēls neeksistē!',
    'quota_exceeded' => 'Nav vietas uz diska.<br /><br />Tev ir piešķirts ierobežojums [quota]K, bet pašlaik jau aizņemti [space]K, tāpēc šī attēla pievienošana nav ieteicama (tiks pārsniegts ierobežojums).',
    'gd_file_type_err' => 'Izmantojot GD attēlu bibliotēku, atļauts izmantot tikai JPEG un PNG formātus.',
    'invalid_image' => 'Attēls bojāts vai arī sistēmas GD attēlu bibliotēka nespēj to atkodēt.',
    'resize_failed' => 'Nav iespējams izveidot mazo attēlu vai izmainīt tā izmērus.',
    'no_img_to_display' => 'Nav attēla',
    'non_exist_cat' => 'Izvēlētā sadaļa neeksistē',
    'orphan_cat' => 'Šai apakšsadaļai nav sadaļas, kam tā piederētu, lūdzu izmanto sadaļu menedžeri, lai atrisinātu problēmu.',
    'directory_ro' => 'Direktorijā \'%s\' nav atļauts rakstīt, tāpēc attēlus nav iespējams izdzēst.',
    'non_exist_comment' => 'Izvēlētais komentārs neeksistē.',
    'pic_in_invalid_album' => 'Attēls atrodas neeksistējošā albumā (%s)!?', //new in cpg1.2.0
    'banned' => 'Pieeja foto galerijai aizliegta.', //new in cpg1.2.0
    'not_with_udb' => 'Šī iespēja ir atslēgta, jo tai jābūt integrētai kopā ar foruma programmatūru. Trūkst attiecīgās konfigurācijas, vai nepieciešams uzinstalēt forumu.', //new in cpg1.2.0
    'offline_title' => 'Paziņojums', //cpg1.3.0
    'offline_text' => 'Pašlaik notiek tehniski uzlabojumi - ienāc vēlāk', //cpg1.3.0
    'ecards_empty' => 'E-karšu sistēma nav aktivizēta!', //cpg1.3.0
    'action_failed' => 'Operācija pārtraukta, jo notikusi kļūda.', //cpg1.3.0
    'no_zip' => 'Kompresēšana ZIP formātā nav pieejama.', //cpg1.3.0
    'zip_type' => 'Nav atļaujas pievienot ZIP formāta failus.', //cpg1.3.0
    'database_query' => 'Kļūda pieslēdzoties datubāzei', //cpg1.4
    'non_exist_comment' => 'Izvēlētais komentārs neeksistē', //cpg1.4
);

$lang_bbcode_help_title = 'par bbcode'; //cpg1.4
$lang_bbcode_help = 'Teksta formatēšanai atļauts izmantot: <li>[b]trekni[/b] =&gt; <b>trekni</b></li><li>[i]slīpi[/i] =&gt; <i>slīpi</i></li><li>[url=http://jusulapa.lv/]Norādes teksts[/url] =&gt; <a href="http://jusulapa.lv">Norādes teksts</a></li><li>[email]es@rezekne.lv[/email] =&gt; <a href="mailto:es@rezekne.lv">es@rezekne.lv</a></li><li>[color=red]jebkurš teksts[/color] =&gt; <span style="color:red">jebkurš teksts</span></li><li>[img]http://coppermine-gallery.net/demo/cpg14x/images/red.gif[/img] => <img src="../images/red.gif" border="0" alt="" /></li>'; //cpg1.4
// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
    'home_title' => 'Uz sākumu',
    'home_lnk' => 'Sākums',
    'alb_list_title' => 'Uz albūmu sarakstu',
    'alb_list_lnk' => 'Albūmu saraksts',
    'my_gal_title' => 'Uz savu galeriju',
    'my_gal_lnk' => 'Mana galerija',
    'my_prof_title' => 'Uz savu profilu', //cpg1.4
    'my_prof_lnk' => 'Mans profils',
    'adm_mode_title' => 'Pārslēgties Administratora režīmā',
    'adm_mode_lnk' => 'Administratora režīms',
    'usr_mode_title' => 'Pārslēgties lietotāja režīmā',
    'usr_mode_lnk' => 'Lietotāja režīms',
    'upload_pic_title' => 'Ielikt attēlu albumā',
    'upload_pic_lnk' => 'Pievienot attēlu',
    'register_title' => 'Izveidot kontu',
    'register_lnk' => 'Reģistrēties',
    'login_title' => 'Ieiet lapā', //cpg1.4
    'login_lnk' => 'Pieslēgties',  
    'logout_title' => 'Iziet no lapas', //cpg1.4
    'logout_lnk' => 'Beigt darbu', 
    'lastup_title' => 'Parādīt jaunākos attēlus', //cpg1.4
    'lastup_lnk' => 'Jaunākie attēli',
    'lastcom_title' => 'Parādīt jaunākos komentārus', //cpg1.4
    'lastcom_lnk' => 'Jaunākie komentāri',  
    'topn_title' => 'Parādīt skatītākos attēlus', //cpg1.4
    'topn_lnk' => 'Skatītākie attēli', 
    'toprated_title' => 'Parādīt vispopulārākos', //cpg1.4
    'toprated_lnk' => 'Vispopulārākie',  
    'search_title' => 'Meklēšana lapā', //cpg1.4
    'search_lnk' => 'Meklēšana',
    'fav_title' => 'Parādīt favorītus', //cpg1.4
    'fav_lnk' => 'Favorīti',
    'memberlist_title' => 'Visi dalībnieki', //cpg1.3.0
    'memberlist_lnk' => 'Dalībnieku saraksts', //cpg1.3.0
    'faq_title' => 'Biežāk uzdotie jautājumi par &quot;Coppermine&quot;', //cpg1.3.0
    'faq_lnk' => 'FAQ', //cpg1.3.0
);

$lang_gallery_admin_menu = array(
  'upl_app_title' => 'Apstiprināt', //cpg1.4
  'upl_app_lnk' => 'Apstiprināt',
  'admin_title' => 'Konfigurēt', //cpg1.4
  'config_lnk' => 'Konfigurēt',
  'albums_title' => 'Albumi', //cpg1.4
  'albums_lnk' => 'Albumi', 
  'categories_title' => 'Sadaļas', //cpg1.4
  'categories_lnk' => 'Sadaļas',
  'users_title' => 'Lietotāji', //cpg1.4
  'users_lnk' => 'Lietotāji',
  'groups_title' => 'Grupas', //cpg1.4
  'groups_lnk' => 'Grupas',
  'comments_title' => 'Komentāri', //cpg1.4
  'comments_lnk' => 'Komentāri',
  'searchnew_title' => 'Attēlu grupas...', //cpg1.4
  'searchnew_lnk' => 'Attēlu grupas...',
  'util_title' => 'Administratora rīki', //cpg1.4
  'util_lnk' => 'Administratora rīki',
  'key_title' => 'Atslēgas vārdu vārdnīca', //cpg1.4
  'key_lnk' => 'Atslēgas vārdu vārdnīca', //cpg1.4
  'ban_title' => 'Aiziegt piekļuvi', //cpg1.4
  'ban_lnk' => 'Aiziegt piekļuvi',
  'db_ecard_title' => 'Apsveikuma kartiņas', //cpg1.4
  'db_ecard_lnk' => 'Apsveikuma kartiņas',
  'pictures_title' => 'Kārtot manus attēlus', //cpg1.4
  'pictures_lnk' => 'Kārtot manus attēlus', //cpg1.4
  'documentation_lnk' => 'Dokumentācija', //cpg1.4
  'documentation_title' => 'Coppermine dokumentācija', //cpg1.4
);

$lang_user_admin_menu = array(
  'albmgr_title' => 'Izveidot manu albumu', //cpg1.4
  'albmgr_lnk' => 'Izveidot manu albumu',
  'modifyalb_title' => 'Mainīt manu albumu',  //cpg1.4
  'modifyalb_lnk' => 'Mainīt manu albumu',
  'my_prof_title' => 'Profils', //cpg1.4
  'my_prof_lnk' => 'Profils',
);

$lang_cat_list = array(
    'category' => 'Sadaļas',
    'albums' => 'Albumi',
    'pictures' => 'Attēli',
);

$lang_album_list = array(
  'album_on_page' => '%d albums(-i) %d lapā(s)' 
);

$lang_thumb_view = array(
    'date' => 'LAIKS',
    //Sort by filename and title
    'name' => 'NOSAUKUMS', //new in cpg1.2.0
    'title' => 'VIRSRAKSTS', //new in cpg1.2.0
    'sort_da' => 'pēc datuma augoši',
    'sort_dd' => 'pēc datuma dilstoši',
    'sort_na' => 'pēc nosaukuma augoši',
    'sort_nd' => 'pēc nosaukuma dilstoši',
    'sort_ta' => 'pēc virsraksta augoši', //new in cpg1.2.0
    'sort_td' => 'pēc virsraksta dilstoši',
    'position' => 'pozīcija', //cpg1.4
    'sort_pa' => 'pēc pozīcijas augoši', //cpg1.4
    'sort_pd' => 'pēc pozīcijas augoši', //cpg1.4
    'download_zip' => 'Lejupielādēt kā arhīvu',
    'pic_on_page' => '%d attēls(-i) %d lapā(s)',  
    'user_on_page' => '%d lietotājs(-i) %d lapā(s)', 
    'enter_alb_pass' => 'Ievadiet albuma paroli', //cpg1.4
    'invalid_pass' => 'Parole ievadīta nepareizi', //cpg1.4
    'pass' => 'Parole', //cpg1.4
    'submit' => 'Turpināt', //cpg1.4
);

$lang_img_nav_bar = array(
    'thumb_title' => 'Atgriezties uz attēlu indeksu',
    'pic_info_title' => 'Rādīt/paslēpt informāciju par attēlu',
    'slideshow_title' => 'Slaidšovs',
    'ecard_title' => 'Sūtīt kā e-kartiņu',
    'ecard_disabled' => 'e-kartiņu sūtīšana atslēgta',
    'ecard_disabled_msg' => 'Tev nav pietiekamu tiesību, lai sūtītu e-kartiņas',
    'prev_title' => 'Iepriekšējais attēls',
    'next_title' => 'Nākamais attēls',
    'pic_pos' => 'ATTĒLS %s/%s',
    'report_title' => 'Sūdzēties moderatoram par šo failu', //cpg1.4
    'go_album_end' => 'Uz beigām', //cpg1.4
    'go_album_start' => 'Uz sākumu', //cpg1.4
    'go_back_x_items' => 'atpakaļ par %s failiem', //cpg1.4
    'go_forward_x_items' => 'uz priekšu par %s failiem', //cpg1.4
);

$lang_rate_pic = array(
    'rate_this_pic' => 'Novērtēt ',
    'no_votes' => '(novērtējuma nav)',
    'rating' => '(novērtējums: %s balsis no 5 (balsots %s reizi(-es))',
    'rubbish' => 'Mēsls',
    'poor' => 'Vāji',
    'fair' => 'Viduvēji',
    'good' => 'Labi',
    'excellent' => 'Teicami',
    'great' => 'Lieliski',
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
  CRITICAL_ERROR => 'Kritiska kļūda',
    'file' => 'Fails: ',
    'line' => 'Rinda: ',
);

$lang_display_thumbnails = array(
    'filename' => 'Fails=', //cpg1.4
    'filesize' => 'Apjoms=', //cpg1.4
    'dimensions' => 'Izmēri=', //cpg1.4
    'date_added' => 'Datums=', //cpg1.4
);

$lang_get_pic_data = array(
    'n_comments' => 'komentāri: <b>%s</b>',
    'n_views' => 'skatījumi: <b>%s</b>',
    'n_votes' => 'vērtējumi: <b>%s</b>'
);

$lang_cpg_debug_output = array(
  'debug_info' => 'Debug Info', //cpg1.3.0
  'select_all' => 'Select All', //cpg1.3.0
  'copy_and_paste_instructions' => 'If you\'re going to request help on the coppermine support board, copy-and-paste this debug output into your posting. Make sure to replace any passwords from the query with *** before posting.', //cpg1.3.0
  'phpinfo' => 'display phpinfo', //cpg1.3.0
  'notices' => 'Notices', //cpg1.4
);

$lang_language_selection = array(
  'reset_language' => 'Valoda pēc noklusēšanas', //cpg1.3.0
  'choose_language' => 'Izvēlies valodu', //cpg1.3.0
);

$lang_theme_selection = array(
  'reset_theme' => 'Tēma pēc noklusēšanas', //cpg1.3.0
  'choose_theme' => 'Izvēlies tēmu', //cpg1.3.0
);

$lang_version_alert = array(
  'version_alert' => 'Neatbalstāma versija!', //cpg1.4
  'security_alert' => 'Brīdinājums par bīstamību!', //cpg1.4.3
  'relocate_exists' => 'izdzēsiet failu <a href="http://coppermine-gallery.net/forum/index.php?topic=24217.0" target=_blank>relocate_server.php</a> no jūsu lapas!',
  'no_stable_version' => 'Jūs izmantojat Coppermine %s (%s) versiju, kas paredzēta zinošiem lietotājiem!', //cpg1.4
  'gallery_offline' => 'Galerija šobrīd ir atslēgta un būs pieejama tikai administratoram. Neaizmirstiet atkal ieslēgt galeriju pēc paveiktajiem darbiem.', //cpg1.4
);

$lang_create_tabs = array(
  'previous' => 'iepriekšējais', //cpg1.4
  'next' => 'nākamais', //cpg1.4
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
  'error_wakeup' => "Nevaru ieslēgt paplašinājumu '%s'", //cpg1.4
  'error_install' => "Nevaru uzstādīt paplašinājumu '%s'", //cpg1.4
  'error_uninstall' => "Nevaru izdzēst paplašinājumu '%s'", //cpg1.4
  'error_sleep' => "Nevaru atslēgt paplašinājumu '%s'<br />", //cpg1.4
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

if (defined('ADMIN_PHP')) $lang_admin_php = array(
    0 => 'Pametam administrēšanas režīmu...',
    1 => 'Uz administrēšanas režīmu...',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
    'alb_need_name' => 'Kā sauksim albumu?',
    'confirm_modifs' => 'Apstiprināt veiktās izmaiņas?',
    'no_change' => 'Nekas nav mainīts!',
    'new_album' => 'Jauns albums',
    'confirm_delete1' => 'Tiešām dzēst šo albumu?',
    'confirm_delete2' => '\nVisi attēli un komentāri tajā tiks izdzēsti!',
    'select_first' => 'Vispirms jāizvēlas albumu',
    'alb_mrg' => 'Albumu menedžeris',
    'my_gallery' => '* Mana galerija *',
    'no_category' => '* Mana sadaļa *',
    'delete' => 'Dzēst',
    'new' => 'Jauns',
    'apply_modifs' => 'Apstiprināt izmaiņas',
    'select_category' => 'Izvēlēties sadaļu',
);


// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) $lang_banning_php = array(
  'title' => 'Lietotāju bloķēšana', //cpg1.4
  'user_name' => 'Lietotāja vārds', //cpg1.4
  'ip_address' => 'IP adrese', //cpg1.4
  'expiry' => 'Beidzas', //cpg1.4
  'edit_ban' => 'Saglabāt izmaiņas', //cpg1.4
  'delete_ban' => 'Dzēst', //cpg1.4
  'add_new' => 'Bloķēt jaunu', //cpg1.4
  'add_ban' => 'Bloķēt', //cpg1.4
  'error_user' => 'Nevaru atrast lietotāju', //cpg1.4
  'error_specify' => 'Jums ir jānorāda lietotāja vārds vai IP adrese', //cpg1.4
  'error_ban_id' => 'Nepareizs bloķēšanas ID!', //cpg1.4
  'error_admin_ban' => 'Jūs nevarat nobloķēt sevi!', //cpg1.4
  'error_server_ban' => 'Jūs nevarat nobloķēt savu serveri', //cpg1.4
  'error_ip_forbidden' => 'Jūs nevarat nobloķēt šo IP adresi - tā izmantojas tikai lokālajā tīklā!<br />ja Jūs vēlaties bloķēt lokālās IP adreses tad nomainiet atbilstošu iestādījumu šeit <a href="admin.php">Galerijas iestādījumi</a>.', //cpg1.4
  'lookup_ip' => 'WHOIS IP adresei', //cpg1.4
  'submit' => 'Izpildīt!', //cpg1.4
  'select_date' => 'norādiet datumu', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File bridgemgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('BRIDGEMGR_PHP')) $lang_bridgemgr_php = array(
  'title' => 'Bridge Wizard',
  'warning' => 'Warning: when using this wizard you have to understand that sensitive data is being sent using html forms. Only run it on your own PC (not on a public client like an internet cafe), and make sure to clear the browser cache and temporary files after you have finished, or others might be able to access your data!',
  'back' => 'back',
  'next' => 'next',
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
  'title' => 'Kalendārs', //cpg1.4
  'close' => 'aizvērt', //cpg1.4
  'clear_date' => 'attīrīt datumu', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
    'miss_param' => 'Komandas \'%s\' izpildīšanai trūkst nepieciešamie parametri!',
    'unknown_cat' => 'Izvēlētā sadaļa datu bāzē neeksistē',
    'usergal_cat_ro' => 'Lietotāja galerijas sadaļa nevar tikt dzēsta!',
    'manage_cat' => 'Administrēt sadaļas',
    'confirm_delete' => 'Tiešām dzēst šo sadaļu',
    'category' => 'Sadaļa',
    'operations' => 'Darbības',
    'move_into' => 'Pārvietot uz',
    'update_create' => 'Modificēt/izveidot sadaļu',
    'parent_cat' => 'Pieder sadaļai',
    'cat_title' => 'Sadaļas virsraksts',
    'cat_thumb' => 'Sadaļas starpattēls', //cpg1.3.0
    'cat_desc' => 'Sadaļas apraksts',
    'categories_alpha_sort' => 'Kārtot sadaļas pēc alfabēta', //cpg1.4
    'save_cfg' => 'Saglabāt', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File admin.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('ADMIN_PHP')) $lang_admin_php = array(
  'title' => 'Galerijas konfigurācija', //cpg1.4
  'manage_exif' => 'Pārvaldīt Exif datus', //cpg1.4
  'manage_plugins' => 'Pārvaldīt paplašinājumus', //cpg1.4
  'manage_keyword' => 'Pārvaldīt atslēgas vārdus', //cpg1.4
  'restore_cfg' => 'Atjaunot sākotnējo konfigurāciju',
  'save_cfg' => 'Saglabāt jauno konfigurāciju',
  'notes' => 'Piezīmes',
  'info' => 'Informācija',
  'upd_success' => 'Galerijas konfigurācija atjaunota',
  'restore_success' => 'Galerijas sākotnējā konfigurācija tika atjaunota',
  'name_a' => 'Vārds [augoši]',
  'name_d' => 'Vārds [dilstoši]',
  'title_a' => 'Nosaukums [augoši]',
  'title_d' => 'Nosaukums [dilstoši]',
  'date_a' => 'Datums [augoši]',
  'date_d' => 'Datums [dilstoši]',
  'pos_a' => 'Pozīcija [augoši]', //cpg1.4
  'pos_d' => 'Pozīcija [dilstoši]', //cpg1.4
  'th_any' => 'Max. izmērs',
  'th_ht' => 'Augstums',
  'th_wd' => 'Platums',
  'label' => 'apraksts',
  'item' => 'att.',
  'debug_everyone' => 'Jebkurš', //cpg1.3.0
  'debug_admin' => 'Tikai administrators', //cpg1.3.0
  'no_logs'=> 'Izslēgts', //cpg1.4
  'log_normal'=> 'Standarta', //cpg1.4
  'log_all' => 'Visi', //cpg1.4
  'view_logs' => 'Skatīt atskaites', //cpg1.4
  'click_expand' => 'uzklikšķiniet uz sekcijas lai izvērst', //cpg1.4
  'expand_all' => 'izvērst visu', //cpg1.4
  'notice1' => '(*) Šie iestādījumumi nemainās ja Jums jau ir faili datubāze.', //cpg1.4 - (relocated)
  'notice2' => '(**) Mainot šos iestādījumus, tiks aizskarti faili kas pievienoti pēc šīm izmaiņām, tāpēc šos iestādījumus labāk nemainīt ja galerijā jau ir faili. neskatoties uz to jau pievienotos failus jūs varat mainīt ar &quot;<a href="util.php">Administratora rīku</a>&quot;.', //cpg1.4 - (relocated)
  'notice3' => '(***) Visi atskaišu faili tiek veidoti angļu valodā.', //cpg1.4 - (relocated)
  'bbs_disabled' => 'Funkcija nav pieejama kad tiek izmantota integrācija.', //cpg1.4
  'auto_resize_everyone' => 'Visi', //cpg1.4
  'auto_resize_user' => 'Tikai lietotāji', //cpg1.4
  'ascending' => 'augoši', //cpg1.4
  'descending' => 'dilstoši', //cpg1.4
);

if (defined('ADMIN_PHP')) $lang_admin_data = array(
  'Pamatiestatījumi',
  array('Galerijas nosaukums', 'gallery_name', 0, 'f=index.htm&amp;as=admin_general_name&amp;ae=admin_general_name_end'), //cpg1.4
  array('Galerijas apraksts', 'gallery_description', 0, 'f=index.htm&amp;as=admin_general_description&amp;ae=admin_general_description_end'), //cpg1.4
  array('Administratora e-pasts', 'gallery_admin_email', 0, 'f=index.htm&amp;as=admin_general_email&amp;ae=admin_general_email_end'), //cpg1.4
  array('Saite uz jūsu galerijas mapi (nekādu \'index.php\' vai kaut kā tam līdzīga saites galā)', 'ecards_more_pic_target', 0, 'f=index.htm&amp;as=admin_general_coppermine-url&amp;ae=admin_general_coppermine-url_end'), //cpg1.4
  array('Saite uz mājas lapu', 'home_target', 0, 'f=index.htm&amp;as=admin_general_home-url&amp;ae=admin_general_home-url_end'), //cpg1.4
  array('Ieslēgt ZIP-lejupielādī izvēlētajos', 'enable_zipdownload', 1, 'f=index.htm&amp;as=admin_general_zip-download&amp;ae=admin_general_zip-download_end'), //cpg1.4
  array('Starpība laikā attiecībā pret GMT (Tekošais laiks: ' . localised_date(-1, $comment_date_fmt) . ')','time_offset',0, 'f=index.htm&amp;as=admin_general_time-offset&amp;ae=admin_general_time-offset_end&amp;top=1'), //cpg1.4
  array('Ieslēgt paroļu šifrēšanu (atcelt nevar)','enable_encrypted_passwords',1, 'f=index.htm&amp;as=admin_general_encrypt_password_start&amp;ae=admin_general_encrypt_password_end&amp;top=1'), // cpg 1.4
  array('Ieslēgt palīdzības ikonas','enable_help',9, 'f=index.htm&amp;as=admin_general_help&amp;ae=admin_general_help_end'), //cpg1.4
  array('Padarīt atslēgas vārdus meklēšanā kā saites','clickable_keyword_search',14, 'f=index.htm&amp;as=admin_general_keywords_start&amp;ae=admin_general_keywords_end'), //cpg1.4
  array('Ieslēgt paplašinājumus', 'enable_plugins', 12, 'f=index.htm&amp;as=admin_general_enable-plugins&amp;ae=admin_general_enable-plugins_end'),  //cpg1.4
  array('Atļaut lokālo IP adrešu bloķēšanu', 'ban_private_ip', 1,  'f=index.htm&amp;as=admin_general_private-ip&amp;ae=admin_general_private-ip_end'), //cpg1.4
  array('Iebūvēts pārlūks failu grupveida pievienošanā', 'browse_batch_add', 1, 'f=index.htm&amp;as=admin_general_browsable_batch_add&amp;ae=admin_general_browsable_batch_add_end'), //cpg1.4

  'Valoda &amp; Kodējums',
  array('Valoda', 'lang', 5, 'f=index.htm&amp;as=admin_language_language&amp;ae=admin_language_language_end'), //cpg1.4
  array('Rādīt angļu tulkojumu ja tulkojums netika atrasts?', 'language_fallback', 1, 'f=index.htm&amp;as=admin_language_fallback&amp;ae=admin_language_fallback_end'), //cpg1.4
  array('Kodējums', 'charset', 4, 'f=index.htm&amp;as=admin_language_charset&amp;ae=admin_language_charset_end'), //cpg1.4
  array('Rādīt valodu sarakstu', 'language_list', 1, 'f=index.htm&amp;as=admin_language_list&amp;ae=admin_language_list_end'), //cpg1.4
  array('Rādīt valodu karogus', 'language_flags', 8, 'f=index.htm&amp;as=admin_language_flags&amp;ae=admin_language_flags_end&amp;top=1'), //cpg1.4
  array('Valodu izvēlnē rādīt &quot;valodu pēc noklusējuma&quot;', 'language_reset', 1, 'f=index.htm&amp;as=admin_language_reset&amp;ae=admin_language_reset_end&amp;top=1'), //cpg1.4

  'Tēmas',
  array('Tēma', 'theme', 6, 'f=index.htm&amp;as=admin_theme_theme&amp;ae=admin_theme_theme_end'), //cpg1.4
  array('Rādīt tēmu sarakstu', 'theme_list', 1, 'f=index.htm&amp;as=admin_theme_theme_list&amp;ae=admin_theme_theme_list_end'), //cpg1.4
  array('Tēmu izvēlnē rādīt &quot;Tēmu pēc noklusējuma&quot;', 'theme_reset', 1, 'f=index.htm&amp;as=admin_theme_theme_reset&amp;ae=admin_theme_theme_reset_end'), //cpg1.4
  array('Rādīt FAQ', 'display_faq', 1, 'f=index.htm&amp;as=admin_theme_faq&amp;ae=admin_theme_faq_end'), //cpg1.4
  array('Papildus saites nosaukums', 'custom_lnk_name', 0,'f=index.htm&amp;as=admin_theme_custom_lnk_name&amp;ae=admin_theme_custom_lnk_name_end'), //cpg1.4
  array('Papildus saites adrese', 'custom_lnk_url', 0,'f=index.htm&amp;as=admin_language_custom_lnk_url&amp;ae=admin_language_custom_lnk_url_end'), //cpg1.4
  array('Rādīt palīdzību par bbcode', 'show_bbcode_help', 1, 'f=index.htm&amp;as=admin_theme_bbcode&amp;ae=admin_theme_bbcode_end&amp;top=1'), //cpg1.4
  array('Rādīt savietojamības ikonas lapas lejas daļā tēmām kas atbalsta XHTML un CSS','vanity_block',1, 'f=index.htm&amp;as=vanity_block&amp;ae=vanity_block_end'), //cpg1.4
  array('Ceļš līdz papildus failam galerijas augšējā daļā', 'custom_header_path', 0, 'f=index.htm&amp;as=admin_theme_include_path_start&amp;ae=admin_theme_include_path_end'), //cpg1.4
  array('Ceļš līdz papildus failam galerijas apakšējā daļā', 'custom_footer_path', 0, 'f=index.htm&amp;as=admin_theme_include_path_start&amp;ae=admin_theme_include_path_end'), //cpg1.4

  'Albumu saraksta skatījums',
  array('Galvenās tabulas platums (pikseļos vai %)', 'main_table_width', 0, 'f=index.htm&amp;as=admin_album_table-width&amp;ae=admin_album_table-width_end'), //cpg1.4
  array('Cik līmeņos sadaļas atspoguļot', 'subcat_level', 0, 'f=index.htm&amp;as=admin_album_category-levels&amp;ae=admin_album_category-levels_end'), //cpg1.4
  array('Cik albumus atspoguļot', 'albums_per_page', 0, 'f=index.htm&amp;as=admin_album_number&amp;ae=admin_album_number_end'), //cpg1.4
  array('Cik kolonnās atspoguļot albūmus', 'album_list_cols', 0, 'f=index.htm&amp;as=admin_album_columns&amp;ae=admin_album_columns_end'), //cpg1.4
  array('Cik lieli pikseļos būs sīkattēli', 'alb_list_thumb_size', 0, 'f=index.htm&amp;as=admin_album_thumbnail-size&amp;ae=admin_album_thumbnail-size_end'), //cpg1.4
  array('Galvenās lapas saturs', 'main_page_layout', 0, 'f=index.htm&amp;as=admin_album_list_content&amp;ae=admin_album_list_content_end'), //cpg1.4
  array('Rādīt pirmā līmeņa mazos attēlus pa sadaļām','first_level',1, 'f=index.htm&amp;as=admin_album_first-level_thumbs&amp;ae=admin_album_first-level_thumbs_end'), //cpg1.4
  array('Kārtot sadaļas pēc alfabēta','categories_alpha_sort',1, 'f=index.htm&amp;as=admin_album_list_alphasort_start&amp;ae=admin_album_list_alphasort_end'), //cpg1.4
  array('Rādīt pievienoto failu skaitu','link_pic_count',1, 'f=index.htm&amp;as=admin_album_linked_files_start&amp;ae=admin_album_linked_files_end'), //cpg1.4

  'Sīkattēlu skatījums',
  array('Cik kolonnās rādīt sīkattēlus', 'thumbcols', 0, 'f=index.htm&amp;as=admin_thumbnail_columns&amp;ae=admin_thumbnail_columns_end'), //cpg1.4
  array('Cik rindās rādīt sīkattēlus', 'thumbrows', 0, 'f=index.htm&amp;as=admin_thumbnail_rows&amp;ae=admin_thumbnail_rows_end'), //cpg1.4
  array('Cik ieliktņu atspoguļot', 'max_tabs', 10, 'f=index.htm&amp;as=admin_thumbnail_tabs&amp;ae=admin_thumbnail_tabs_end'), //cpg1.4
  array('Blakus sīkattēlam atspoguļot ne tikai attēla virsrakstu, bet arī aprakstu', 'caption_in_thumbview', 1, 'f=index.htm&amp;as=admin_thumbnail_display_caption&amp;ae=admin_thumbnail_display_caption_end'), //cpg1.4
  array('Rādīt skatīšanās reižu skaitu blakus sīkattēlam', 'views_in_thumbview', 1, 'f=index.htm&amp;as=admin_thumbnail_display_views&amp;ae=admin_thumbnail_display_views_end'), //cpg1.4
  array('Atspoguļot komentāru skaitu', 'display_comment_count', 1, 'f=index.htm&amp;as=admin_thumbnail_display_comments&amp;ae=admin_thumbnail_display_comments_end'), //cpg1.4
  array('Rādīt, kurš uzlicis attēlu', 'display_uploader', 1, 'f=index.htm&amp;as=admin_thumbnail_display_uploader&amp;ae=admin_thumbnail_display_uploader_end'), //cpg1.4

  array('Rādīt faila nosaukumu', 'display_filename', 1, 'f=index.htm&amp;as=admin_thumbnail_display_filename&amp;ae=admin_thumbnail_display_filename_end'), //cpg1.4

  array('Kā kārtot attēlus', 'default_sort_order', 3, 'f=index.htm&amp;as=admin_thumbnail_default_sortorder&amp;ae=admin_thumbnail_default_sortorder_end'), //cpg1.4
  array('Minimālais balsu skaits, lai attēls tiktu iekļauts vispopulārāko sarakstā', 'min_votes_for_rating', 0, 'f=index.htm&amp;as=admin_thumbnail_minimum_votes&amp;ae=admin_thumbnail_minimum_votes_end'), //cpg1.4

  'Attēlu skatīšanās', //cpg1.4
  array('Attēla tabulas platums (pikseļos vai %)', 'picture_table_width', 0, 'f=index.htm&amp;as=admin_image_comment_table-width&amp;ae=admin_image_comment_table-width_end'), //cpg1.4
  array('Attēla informācija redzama pēc noklusēšanas', 'display_pic_info', 1, 'f=index.htm&amp;as=admin_image_comment_info_visible&amp;ae=admin_image_comment_info_visible_end'), //cpg1.4
  array('Max attēla apraksta garums', 'max_img_desc_length', 0, 'f=index.htm&amp;as=admin_image_comment_descr_length&amp;ae=admin_image_comment_descr_length_end'), //cpg1.4
  array('Max simbolu skaits vienā vārdā', 'max_com_wlength', 0, 'f=index.htm&amp;as=admin_image_comment_chars_per_word&amp;ae=admin_image_comment_chars_per_word_end'), //cpg1.4
  array('Filmas skatījums', 'display_film_strip', 1, 'f=index.htm&amp;as=admin_image_comment_filmstrip_toggle&amp;ae=admin_image_comment_filmstrip_toggle_end'), //cpg1.4
  array('Rādīt failu vārdus filmas skatījumā', 'display_film_strip_filename', 1, 'f=index.htm&amp;as=admin_image_comment_display_film_strip_filename&amp;ae=admin_image_comment_display_film_strip_filename_end'), //cpg1.4
  array('Attēlu skaits filmas skatījumā', 'max_film_strip_items', 0, 'f=index.htm&amp;as=admin_image_comment_filmstrip_number&amp;ae=admin_image_comment_filmstrip_number_end'), //cpg1.4
  array('Intervāls milisekundēs filmas skatījumā (1 sekunde = 1000 milisekundes)', 'slideshow_interval', 0, 'f=index.htm&amp;as=admin_image_comment_slideshow_interval&amp;ae=admin_image_comment_slideshow_interval_end'), //cpg1.4

  'Komentāri', //cpg1.4
  array('Filtrēt sliktus vārdus komentāros', 'filter_bad_words', 1, 'f=index.htm&amp;as=admin_image_comment_bad_words&amp;ae=admin_image_comment_bad_words_end'), //cpg1.4
  array('Atļaut sejiņas komentāros', 'enable_smilies', 1, 'f=index.htm&amp;as=admin_image_comment_smilies&amp;ae=admin_image_comment_smilies_end'), //cpg1.4
  array('Atļaut vairākkārtējus komentārus no vienas personas par vienu attēlu (atslēgt -flood protection-)', 'disable_comment_flood_protect', 1, 'f=index.htm&amp;as=admin_image_comment_flood&amp;ae=admin_image_comment_flood_end'), //cpg1.4
  array('Max rindu skaits komentārā', 'max_com_lines', 0, 'f=index.htm&amp;as=admin_image_comment_lines&amp;ae=admin_image_comment_lines_end'), //cpg1.4
  array('Max komentāra garums', 'max_com_size', 0, 'f=index.htm&amp;as=admin_image_comment_length&amp;ae=admin_image_comment_length_end'), //cpg1.4
  array('Paziņot Administratoram par jaunu komentāru', 'email_comment_notification', 1, 'f=index.htm&amp;as=admin_image_comment_admin_notify&amp;ae=admin_image_comment_admin_notify_end'), //cpg1.4
  array('Kā kārtot komentārus', 'comments_sort_descending', 17, 'f=index.htm&amp;as=admin_comment_sort_start&amp;ae=admin_comment_sort_end'), //cpg1.4
  array('Prefikss anonīmo lietotāju komentāriem', 'comments_anon_pfx', 0, 'f=index.htm&amp;as=comments_anon_pfx&amp;ae=comments_anon_pfx_end'), //cpg1.4

  'Failu un sīkattēlu kvalitāte',
  array('JPEG failu kvalitāte (%)', 'jpeg_qual', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_jpeg_quality&amp;ae=admin_picture_thumbnail_jpeg_quality_end'), //cpg1.4
  array('Maksimālais sīkattēla izmērs <a href="#notice2" class="clickable_option">**</a>', 'thumb_width', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max-dimension&amp;ae=admin_picture_thumbnail_max-dimension_end'), //cpg1.4
  array('Izmantojamie izmēri ( platums vai augstums ) <a href="#notice2" class="clickable_option">**</a>', 'thumb_use', 7, 'f=index.htm&amp;as=admin_picture_thumbnail_use-dimension&amp;ae=admin_picture_thumbnail_use-dimension_end'), //cpg1.4
  array('Izveidot arī starpattēlus','make_intermediate',1, 'f=index.htm&amp;as=admin_picture_thumbnail_intermediate_toggle&amp;ae=admin_picture_thumbnail_intermediate_toggle_end'), //cpg1.4
  array('Max starpattēla platums vai augstums <a href="#notice2" class="clickable_option">**</a>', 'picture_width', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_intermediate_dimension&amp;ae=admin_picture_thumbnail_intermediate_dimension_end'), //cpg1.4
  array('Max uzliktā attēla lielums (KB)', 'max_upl_size', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max_upload_size&amp;ae=admin_picture_thumbnail_max_upload_size_end'), //cpg1.4
  array('Max uzliktā attēla platums vai augstums (pikseļos)', 'max_upl_width_height', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max_upload_dimension&amp;ae=admin_picture_thumbnail_max_upload_dimension_end'), //cpg1.4
  array('Automātiski mainīt to attēlu izmēru kas pārsniedz maksimālo platumu vai augstumu', 'auto_resize', 16, 'f=index.htm&amp;as=admin_picture_thumbnail_auto-resize&amp;ae=admin_picture_thumbnail_auto-resize_end'), //cpg1.4

  'Failu un sīkattēlu sīkāki uzstādījumi',
  array('Lietotāji var veidot privātos albūmus (uzmanību: ja pārslēgsiet no \'Jā\' uz \'Нет\', tekošie privātie albūmi kļūs publiski)', 'allow_private_albums', 1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_private_toggle&amp;ae=admin_picture_thumb_advanced_private_toggle_end'), //cpg1.4
  array('Rādīt privāta albūma ikonu tiem, kas nav pieslēgušies','show_private',1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_private_icon_show&amp;ae=admin_picture_thumb_advanced_private_icon_show_end'), //cpg1.4
  array('Aizliegtie simboli failu nosaukumos', 'forbiden_fname_char',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_filename_forbidden_chars&amp;ae=admin_picture_thumb_advanced_filename_forbidden_chars_end'), //cpg1.4

  array('Atļautie attēlu formāti', 'allowed_img_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_pic_extensions&amp;ae=admin_picture_thumb_advanced_pic_extensions_end'), //cpg1.4
  array('Atļautie īsfilmu formāti', 'allowed_mov_types',0, 'f=index.htm&amp;as=admin_thumbs_advanced_movie&amp;ae=admin_thumbs_advanced_movie_end'), //cpg1.4
  array('Īsfilmu autostarts', 'media_autostart',1, 'f=index.htm&amp;as=admin_movie_autoplay&amp;ae=admin_movie_autoplay_end'), //cpg1.4
  array('Atļautie audio formāti', 'allowed_snd_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_audio_extensions&amp;ae=admin_picture_thumb_advanced_audio_extensions_end'), //cpg1.4
  array('Atļautie dokumentu formāti', 'allowed_doc_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_doc_extensions&amp;ae=admin_picture_thumb_advanced_doc_extensions_end'), //cpg1.4
  array('Attēlu izmēru koriģēšanas metode','thumb_method',2, 'f=index.htm&amp;as=admin_picture_thumb_advanced_resize_method&amp;ae=admin_picture_thumb_advanced_resize_method_end'), //cpg1.4
  array('Kur sistēmā atrodas ImageMagick \'convert\' utilīta (piemēram, /usr/bin/X11/)', 'impath', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_im_path&amp;ae=admin_picture_thumb_advanced_im_path_end'), //cpg1.4

  array('ImageMagick komandrindas opcijas', 'im_options', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_im_commandline&amp;ae=admin_picture_thumb_advanced_im_commandline_end'), //cpg1.4
  array('Lasīt EXIF informāciju no JPEG failiem', 'read_exif_data', 13, 'f=index.htm&amp;as=admin_picture_thumb_advanced_exif&amp;ae=admin_picture_thumb_advanced_exif_end'), //cpg1.4
  array('Lasīt IPTC informāciju no JPEG failiem', 'read_iptc_data', 1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_iptc&amp;ae=admin_picture_thumb_advanced_iptc_end'), //cpg1.4
  array('Albūma direktorija <a href="#notice1" class="clickable_option">*</a>', 'fullpath', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_albums_dir&amp;ae=admin_picture_thumb_advanced_albums_dir_end'), //cpg1.4
  array('Dalībnieku failu direktorija <a href="#notice1" class="clickable_option">*</a>', 'userpics', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_userpics_dir&amp;ae=admin_picture_thumb_advanced_userpics_dir_end'), //cpg1.4
  array('Prefikss vidēja izmēra attēlu glabāšanai <a href="#notice1" class="clickable_option">*</a>', 'normal_pfx', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_intermediate_prefix&amp;ae=admin_picture_thumb_advanced_intermediate_prefix_end'), //cpg1.4
  array('Prefikss sīkattēliem <a href="#notice1" class="clickable_option">*</a>', 'thumb_pfx', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_thumbs_prefix&amp;ae=admin_picture_thumb_advanced_thumbs_prefix_end'), //cpg1.4
  array('Direktoriju opcijas', 'default_dir_mode', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_chmod_folder&amp;ae=admin_picture_thumb_advanced_chmod_folder_end'), //cpg1.4
  array('Failu opcijas', 'default_file_mode', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_chmod_files&amp;ae=admin_picture_thumb_advanced_chmod_files_end'), //cpg1.4

  'Lietotāju uzstādījumi',
  array('Atļaut jaunu lietotāju piereģistrēšanos', 'allow_user_registration', 1, 'f=index.htm&amp;as=admin_allow_registration&amp;ae=admin_allow_registration_end'), //cpg1.4
  array('Atļaut anonīmo piekļuvi', 'allow_unlogged_access', 1, 'f=index.htm&amp;as=admin_allow_unlogged_access&amp;ae=admin_allow_unlogged_access_end'), //cpg1.4
  array('Lietotāja sekmīgai reģistrācija nepieciešams e-pasta apstiprinājums', 'reg_requires_valid_email', 1, 'f=index.htm&amp;as=admin_registration_verify&amp;ae=admin_registration_verify_end'), //cpg1.4
  array('Paziņot administratoram par jaunu dalībnieka reģistrāciju', 'reg_notify_admin_email', 1, 'f=index.htm&amp;as=admin_registration_notify&amp;ae=admin_registration_notify_end'), //cpg1.4
  array('Administrators aktivizē reģistrāciju', 'admin_activation', 1, 'f=index.htm&amp;as=admin_activation&amp;ae=admin_activation_end'),  //cpg1.4
  array('Atļaut diviem dažādiem lietotājiem izmantot vienādas e-pasta adreses', 'allow_duplicate_emails_addr', 1, 'f=index.htm&amp;as=admin_allow_duplicate_emails_addr&amp;ae=admin_allow_duplicate_emails_addr_end'), //cpg1.4
  array('Paziņot Administratoram par dalībnieku, kam jāapstiprina faila pievienošana', 'upl_notify_admin_email', 1, 'f=index.htm&amp;as=admin_approval_notify&amp;ae=admin_approval_notify_end'), //cpg1.4
  array('Atļaut skatīties informāciju par citiem dalībniekiem, ja ir notikusi veiksmīga pieslēgšanās sistēmai', 'allow_memberlist', 1, 'f=index.htm&amp;as=admin_user_memberlist&amp;ae=admin_user_memberlist_end'), //cpg1.4
  array('Atļaut lietotājiem mainīt savu e-pasta adresi profilā', 'allow_email_change', 1, 'f=index.htm&amp;as=admin_user_allow_email_change&amp;ae=admin_user_allow_email_change_end'), //cpg1.4
  array('Atļaut lietotājiem mainīt failu datus publiskās galerijās', 'users_can_edit_pics', 1, 'f=index.htm&amp;as=admin_user_editpics_public_start&amp;ae=admin_user_editpics_public_end'), //cpg1.4
  array('Neveiksmīgu paroļu ievadīšanas skaits, lai dabūt īslaicīgu bloķēšanu', 'login_threshold', 0, 'f=index.htm&amp;as=admin_user_login_start&amp;ae=admin_user_login_end'), //cpg1.4
  array('Islaicīgas bloķēšanas ilgums minūtēs', 'login_expiry', 0, 'f=index.htm&amp;as=admin_user_login_start&amp;ae=admin_user_login_end'), //cpg1.4
  array('Ieslēgt ziņojumu sūtīšanu administratoram', 'report_post', 1, 'f=index.htm&amp;as=admin_user_enable_report&amp;ae=admin_user_enable_report_end'),  //cpg1.4

// custom profile fields,  //cpg1.4
  'Rezerves lauki lietotāja profilam (ja neizmanto, atstāj tukšus)', //cpg1.4
  array('Имя поля 1', 'user_profile1_name', 0, 'f=index.htm&amp;as=admin_custom&amp;ae=admin_custom_end'), //cpg1.4
  array('Имя поля 2', 'user_profile2_name', 0), //cpg1.4
  array('Имя поля 3', 'user_profile3_name', 0), //cpg1.4
  array('Имя поля 4', 'user_profile4_name', 0), //cpg1.4
  array('Имя поля 5', 'user_profile5_name', 0), //cpg1.4
  array('Имя поля 6', 'user_profile6_name', 0), //cpg1.4

  'Rezerves lauki attēla aprakstam (ja neizmanto, atstāj tukšus)',
  array('Имя поля 1', 'user_field1_name', 0, 'f=index.htm&amp;as=admin_custom_image&amp;ae=admin_custom_image_end'), //cpg1.4
  array('Имя поля 2', 'user_field2_name', 0),
  array('Имя поля 3', 'user_field3_name', 0),
  array('Имя поля 4', 'user_field4_name', 0),

  'Cepumi (cookies)',
  array('Cookie nosaukumus', 'cookie_name', 0, 'f=index.htm&amp;as=admin_cookie_name&amp;ae=admin_cookie_name_end'), //cpg1.4
  array('Cookie ceļš', 'cookie_path', 0, 'f=index.htm&amp;as=admin_cookie_path&amp;ae=admin_cookie_path_end'), //cpg1.4

  'E-pasta iestādījumi (ja neesat pārliecināti - nemainiet)', //cpg1.4
  array('SMTP adrese (ja tukšs, tiks izmantots sendmail)', 'smtp_host', 0, 'f=index.htm&amp;as=admin_email&amp;ae=admin_email_end'), //cpg1.4
  array('SMTP lietotājs', 'smtp_username', 0), //cpg1.4
  array('SMTP parole', 'smtp_password', 0), //cpg1.4

  'Atskaites un statistika', //cpg1.4
  array('Atskaišu režīms <a href="#notice3" class="clickable_option">***</a>', 'log_mode', 11, 'f=index.htm&amp;as=admin_logging_log_mode&amp;ae=admin_logging_log_mode_end'), //cpg1.4
  array('Veikt atskaites atklātnēm', 'log_ecards', 1, 'f=index.htm&amp;as=admin_general_log_ecards&amp;ae=admin_general_log_ecards_end'), //cpg1.4
  array('Veikt detalizētu balsošanas statistiku','vote_details',1, 'f=index.htm&amp;as=admin_logging_votedetails&amp;ae=admin_logging_votedetails_end'), //cpg1.4
  array('Veikt klikšķu statistiku','hit_details',1, 'f=index.htm&amp;as=admin_logging_hitdetails&amp;ae=admin_logging_hitdetails_end'), //cpg1.4

  'Debug režīma iestādījumi', //cpg1.4
  array('Ieslēgt Debug režīmu', 'debug_mode', 9, 'f=index.htm&amp;as=debug_mode&amp;ae=debug_mode_end'), //cpg1.4
  array('Rādīt paziņojumus Debug režīmā', 'debug_notice', 1, 'f=index.htm&amp;as=admin_misc_debug_notices&amp;ae=admin_misc_debug_notices_end'), //cpg1.4
  array('Galerija atslēgta', 'offline', 1, 'f=index.htm&amp;as=admin_general_offline&amp;ae=admin_general_offline_end'), //cpg1.4
);


// ------------------------------------------------------------------------- //
// File db_ecard.php
// ------------------------------------------------------------------------- //

if (defined('DB_ECARD_PHP')) $lang_db_ecard_php = array(
    'title' => 'Nosūtīt e-kartiņu', //cpg1.3.0
    'ecard_sender' => 'Sūtītājs', //cpg1.3.0
    'ecard_recipient' => 'Saņēmējs', //cpg1.3.0
    'ecard_date' => 'Datums', //cpg1.3.0
    'ecard_display' => 'Rādīt e-kartiņu', //cpg1.3.0
    'ecard_name' => 'Vārds', //cpg1.3.0
    'ecard_email' => 'Epasts', //cpg1.3.0
    'ecard_ip' => 'IP #', //cpg1.3.0
    'ecard_ascending' => 'augoši', //cpg1.3.0
    'ecard_descending' => 'dilstoši', //cpg1.3.0
    'ecard_sorted' => 'Sakārtots', //cpg1.3.0
    'ecard_by_date' => 'pēc datuma', //cpg1.3.0
    'ecard_by_sender_name' => 'pēc vārda', //cpg1.3.0
    'ecard_by_sender_email' => 'pēc sūtītāja epasta adreses', //cpg1.3.0
    'ecard_by_sender_ip' => 'pēc sūtītāja IP adreses', //cpg1.3.0
    'ecard_by_recipient_name' => 'pēc saņēmēja vārda', //cpg1.3.0
    'ecard_by_recipient_email' => 'pēc saņēmēja epasta', //cpg1.3.0
    'ecard_number' => 'atspoguļoti %s ieraksti no %s (kopā %s)', //cpg1.3.0
    'ecard_goto_page' => 'uz lapu', //cpg1.3.0
    'ecard_records_per_page' => 'ieraksti vienā lapā', //cpg1.3.0
    'check_all' => 'Ieķeksēt visus', //cpg1.3.0
    'uncheck_all' => 'Atķeksēt visus', //cpg1.3.0
    'ecards_delete_selected' => 'Dzēst izvēlētās kartiņas', //cpg1.3.0
    'ecards_delete_confirm' => 'Vai tiešām dzēst? Apstiprini!', //cpg1.3.0
    'ecards_delete_sure' => 'Esmu guvis nelaužamu pārliecību, ka tā jādara', //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
    'empty_name_or_com' => 'Ja nebūs vārds un komentāra teksts, nekas nesanāks',
    'com_added' => 'Komentārs pievienots',
    'alb_need_title' => 'Kāds ir albuma virsraksts (nosaukums)?',
    'no_udp_needed' => 'Izmaiņas nav nepieciešamas.',
    'alb_updated' => 'Albumā veiksmīgi veiktas izmaiņas',
    'unknown_album' => 'Izvēlētais albums neeksistē vai arī nav tiesību tajā pievienot attēlus',
    'no_pic_uploaded' => 'Attēls netika uzlikts!<br /><br />Vai uz servera ir uzlikta atļauja šādām operācijām?',
    'err_mkdir' => 'Direktorija %s NEtika izveidota!',
    'dest_dir_ro' => 'Nav tiesību veikt ierakstu direktrijā %s!',
    'err_move' => 'Nav iespējams pārvietot %s uz %s !',
    'err_fsize_too_large' => 'Uzliekamā attēla izmērs pārsniedz max atļauto (max atļautais ir %s x %s) !',
    'err_imgsize_too_large' => 'Uzliekamā attēla faila izmērs pārsniedz max atļauto (max atļautais ir %s KB) !',
    'err_invalid_img' => 'Uzliekamais fails nav klasificējams kā attēls!',
    'allowed_img_types' => 'Tu drīksti uzlikt %s attēlus.',
    'err_insert_pic' => 'Attēls \'%s\' nevar tikt pievienots ',
    'upload_success' => 'Attēls veiksmīgi uzlikts<br /><br />Tas būs redzams galerijā, tiklīdz Administrators to būs akceptējis.',
    'info' => 'Informācija',
    'com_added' => 'Komentārs pievienots',
    'alb_updated' => 'Albums modificēts',
    'err_comment_empty' => 'Nav komentāra!',
    'err_invalid_fext' => 'Atļauti faili ar šādiem paplašinājumiem : <br /><br />%s.',
    'no_flood' => 'Atvaino, bet tieši tu arī esi pēdējā iesūtītā komentāra autors.<br /><br />Modificē sava pēdējā iesūtītā komentāra tekstu',
    'redirect_msg' => 'Notiek pāradresācija.<br /><br /><br />Spied uz \'TURPINĀT\', ja lapa nepārlādējas',
    'upl_success' => 'Attēls veiksmīgi pievienots',
    'email_comment_subject' => 'Jauns foto galerijas komentārs', //cpg1.3.0
    'email_comment_body' => 'Kāds pievienojis komentāru, apskaties', //cpg1.3.0
    'album_not_selected' => 'Nav norādīts albūms', //cpg1.4
    'com_author_error' => 'Reģistrēts lietotājs izmanto šo vārdu, ievadiet citu.', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
    'caption' => 'Teksts',
    'fs_pic' => 'pilnā izmēra attēls',
    'del_success' => 'veiksmīgi izdzēsts',
    'ns_pic' => 'normāla izmēra attēls',
    'err_del' => 'nevar tikt izdzēsts',
    'thumb_pic' => 'mazais attēls',
    'comment' => 'komentārs',
    'im_in_alb' => 'attēls albumā',
    'alb_del_success' => 'Albums \'%s\' izdzēsts',
    'alb_mgr' => 'Albuma menedžeris',
    'err_invalid_data' => 'Saņemta nekorekta informācija \'%s\'',
    'create_alb' => 'Tiek veidots albums \'%s\'',
    'update_alb' => 'Tiek modificēts albums \'%s\' ar virsrakstu \'%s\' un indeksu \'%s\'',
    'del_pic' => 'Dzēst attēlu',
    'del_alb' => 'Dzēst albumu',
    'del_user' => 'Dzēst lietotāju',
    'err_unknown_user' => 'Izvēlētais lietotājs neeksistē!',
    'err_empty_groups' => 'Grupu tabulas nav vai tā ir tukša!', //cpg1.4
    'comment_deleted' => 'Komentārs veiksmīgi izdzēsts',  
  'npic' => 'Attēls', //cpg1.4
  'pic_mgr' => 'Attēlu menedžers', //cpg1.4
  'update_pic' => 'Atjaunoju attēlu \'%s\' ar faila vārdu \'%s\' un indeksu \'%s\'', //cpg1.4
  'username' => 'Lietotāja vārds', //cpg1.4
  'anonymized_comments' => '%s komentāri kļuva anonīmi', //cpg1.4
  'anonymized_uploads' => '%s publiskas ielādes kļuva anonīmas', //cpg1.4
  'deleted_comments' => 'Izdzēsto komentāru skaits: %s', //cpg1.4
  'deleted_uploads' => 'Izdzēsto publisko ielāžu skaits: %s', //cpg1.4
  'user_deleted' => 'lietotājs %s izdzēsts', //cpg1.4
  'activate_user' => 'Aktivizēt lietotāju', //cpg1.4
  'user_already_active' => 'Profils jau bija aktivizēts', //cpg1.4
  'activated' => 'Aktivizēts', //cpg1.4
  'deactivate_user' => 'Deaktivizēt lietotāju', //cpg1.4
  'user_already_inactive' => 'Profils jau bija deaktivizēts', //cpg1.4
  'deactivated' => 'Deaktivizēts', //cpg1.4
  'reset_password' => 'Noņemt paroli', //cpg1.4
  'password_reset' => 'Lietotāja %s parole tika noņemta', //cpg1.4
  'change_group' => 'Izmainīt pamatgrupu', //cpg1.4
  'change_group_to_group' => 'Izmainīt no %s uz %s', //cpg1.4
  'add_group' => 'Pievienot otrā līmeņa grupu', //cpg1.4
  'add_group_to_group' => 'Pievienoju lietotāju %s grupā %s. Tagad viņš ir iekļauts pamatgrupā %s un otrā līmeņa grupā %s.', //cpg1.4
  'status' => 'Stāvoklis', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File displayecard.php
// ------------------------------------------------------------------------- //

if (defined('DISPLAYECARD_PHP')) {

$lang_displayecard_php = array(
  'invalid_data' => 'Informāciju par Apsveikuma kartiņu kuru Jūs vēlējaties apskatīt sabojāja pasta programma. Pārbaudiet saiti.', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File displayimage.php
// ------------------------------------------------------------------------- //

if (defined('DISPLAYIMAGE_PHP')){
$lang_display_image_php = array(
    'confirm_del' => 'Tiešām DZĒST šo attēlu? \\nArī komentāri tiks izdzēsti.',
    'del_pic' => 'IZDZĒST ŠO ATTĒLU',
    'size' => '%s x %s px',
    'views' => '%s reizes',
    'slideshow' => 'Slaidšovs',
    'stop_slideshow' => 'APSTĀDINĀT SLAIDŠOVU',
    'view_fs' => 'Uzspied, lai redzētu pilna izmēra attēlu',
    'edit_pic' => 'Rediģēt aprakstu', //cpg1.3.0
    'crop_pic' => 'Izgriezt un sagriezt (Crop and Rotate)', //cpg1.3.0
    'set_player' => 'Nomainīt atskaņotāju', //cpg1.4 
);


$lang_picinfo = array(
  'title' =>'Informācija par attēlu',
    'Filename' => 'Attēls',
    'Album name' => 'Albums',
    'Rating' => 'Vērtējums (%s balsis)',
    'Keywords' => 'Atslēgas vārdi',
    'File Size' => 'Faila lielums',
  'Date Added' => 'Pievienots', //cpg1.4
  'Dimensions' => 'Izmēri',
  'Displayed' => 'Attēlots',
  'URL' => 'Saite', //cpg1.4
  'Make' => 'Kameras ražotājs', //cpg1.4
  'Model' => 'Kameras modelis', //cpg1.4
  'DateTime' => 'Datums laiks', //cpg1.4
  'ISOSpeedRatings'=>'ISO', //cpg1.4
  'MaxApertureValue' => 'Max. apertūra', //cpg1.4
  'FocalLength' => 'Fokusa attālums', //cpg1.4
  'Comment' => 'Komentārs',
  'addFav'=>'Pievienot favorītiem',
  'addFavPhrase'=>'Favorīti',
  'remFav'=>'Izdzēst no favorītiem',
  'iptcTitle'=>'IPTC nosaukums',
  'iptcCopyright'=>'IPTC autortiesības',
  'iptcKeywords'=>'IPTC atslēgas vārdi',
  'iptcCategory'=>'IPTC kategorija',
  'iptcSubCategories'=>'IPTC apakškategorija',
  'ColorSpace' => 'Krāsas plašums', //cpg1.4
  'ExposureProgram' => 'Aiztures režīms', //cpg1.4
  'Flash' => 'Zibspuldze', //cpg1.4
  'MeteringMode' => 'Metriskais režīms', //cpg1.4
  'ExposureTime' => 'Aizture', //cpg1.4
  'ExposureBiasValue' => 'Ekspozīcijas kompensācija', //cpg1.4
  'ImageDescription' => 'Attēla apraksts', //cpg1.4
  'Orientation' => 'Orientācija', //cpg1.4
  'xResolution' => 'X izšķirtspēja', //cpg1.4
  'yResolution' => 'Y izšķirtspēja', //cpg1.4
  'ResolutionUnit' => 'Garuma vienība', //cpg1.4
  'Software' => 'Programma', //cpg1.4
  'YCbCrPositioning' => 'Punkta izvietojums šūnā YСbCr', //cpg1.4
  'ExifOffset' => 'Exif nobīde', //cpg1.4
  'IFD1Offset' => 'IFD1 nobīde', //cpg1.4
  'FNumber' => 'Diafragmas numurs', //cpg1.4
  'ExifVersion' => 'Exif versija', //cpg1.4
  'DateTimeOriginal' => 'Uzņemšanas laiks', //cpg1.4
  'DateTimedigitized' => 'Faila izveidošanas laiks', //cpg1.4
  'ComponentsConfiguration' => 'Datu formāts', //cpg1.4
  'CompressedBitsPerPixel' => 'JPEG vidējais kompresijas līmenis', //cpg1.4
  'LightSource' => 'Gaismas avots', //cpg1.4
  'ISOSetting' => 'ISO režīms', //cpg1.4
  'ColorMode' => 'Gaismas režīms', //cpg1.4
  'Quality' => 'Kvalitāte', //cpg1.4
  'ImageSharpening' => 'Attēla asums', //cpg1.4
  'FocusMode' => 'Fokusa režīms', //cpg1.4
  'FlashSetting' => 'Zibspuldzes iestādījumi', //cpg1.4
  'ISOSelection' => 'Uzstādītais ISO', //cpg1.4
  'ImageAdjustment' => 'Attēla kontrasts', //cpg1.4
  'Adapter' => 'Adapteris', //cpg1.4
  'ManualFocusDistance' => 'Manuālā fokusa distance', //cpg1.4
  'DigitalZoom' => 'Digital Zoom', //cpg1.4
  'AFFocusPosition' => 'Fokusēšanās zonas izvēle', //cpg1.4
  'Saturation' => 'Piesātinājums', //cpg1.4
  'NoiseReduction' => 'Trokšņu slāpēšana', //cpg1.4
  'FlashPixVersion' => 'Formāts FlashPix', //cpg1.4
  'ExifImageWidth' => 'Attēla platums', //cpg1.4
  'ExifImageHeight' => 'Attēla augstums', //cpg1.4
  'ExifInteroperabilityOffset' => 'Attēla bloka stāvoklis', //cpg1.4
  'FileSource' => 'Faila avots', //cpg1.4
  'SceneType' => 'Sižeta veids', //cpg1.4
  'CustomerRender' => 'Attēla apstrāde', //cpg1.4
  'ExposureMode' => 'Aiztures režīms', //cpg1.4
  'WhiteBalance' => 'Baltā balanss', //cpg1.4
  'DigitalZoomRatio' => 'Digital Zoom koeficients ', //cpg1.4
  'SceneCaptureMode' => 'Sižeta programmas režīms', //cpg1.4
  'GainControl' => 'Gain Control', //cpg1.4
  'Contrast' => 'Kontrasts', //cpg1.4 
  'Sharpness' => 'Asums', //cpg1.4
  'ManageExifDisplay' => 'Konfigurēt Exif attēlošnu', //cpg1.4
  'submit' => 'Nosūtīt', //cpg1.4
  'success' => 'Informācija veiksmīgi saglabāta.', //cpg1.4
  'details' => 'Detaļas', //cpg1.4
);

$lang_display_comments = array(
    'OK' => 'OK',
    'edit_title' => 'Modificēt komentāru',
    'confirm_delete' => 'Tiešām DZĒST šo komentāru?',
    'add_your_comment' => 'Pievienot komentāru',
    'name'=>'Vārds', //new in cpg1.2.0
    'comment'=>'Komentārs', //new in cpg1.2.0
    'your_name' => 'Anonīms', //new in cpg1.2.0
    'report_comment_title' => 'Sūdzēties administratoram par šo komentāru', //cpg1.4
);

$lang_fullsize_popup = array(
        'click_to_close' => 'Uzklikšķini uz attēla, lai aizvērtu šo logu', //new in cpg1.2.0
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //
if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
    'title' => 'Nosūtīt e-kartiņu',
    'invalid_email' => '<b>UZMANĪBU</b> : kļūdaina adrese!',
    'ecard_title' => 'Sveiciens no %s',
    'view_ecard' => 'Šo sveicienu var redzēt arī sekojoša adresē',
    'view_ecard_plaintext' => 'Lai apskatīt kartiņu nokopējiet šo saiti un ievietojiet pārlūkā:', //cpg1.4   
    'view_more_pics' => 'Citi forši attēli...',
    'send_success' => 'E-kartiņa nosūtīta',
    'send_failed' => 'Atvaino, serveris nevar nosūtīt tavu E-kartiņu...',
    'from' => 'No kā',
    'your_name' => 'Vārds',
    'your_email' => 'E-pasta adrese',
    'to' => 'Kam',
    'rcpt_name' => 'Saņemēja vārds',
    'rcpt_email' => 'Saņēmēja e-pasta adrese',
    'greetings' => 'Sveiciens',
    'message' => 'Pilnais teksts',  
    'ecards_footer' => 'Nosūtīts %s no IP %s no %s (galerijas laiks)', //cpg1.4
    'preview' => 'E-kartiņas priekšskatījums', //cpg1.4
    'preview_button' => 'Priekšskatījums', //cpg1.4
    'submit_button' => 'Nosūtīt E-kartiņu', //cpg1.4
    'preview_view_ecard' => 'Šī būs papildsaite uz E-kartiņu pēc tās nosūtīšanas. Saite nestrādās priekšskatījumam.', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File report_file.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('REPORT_FILE_PHP') || defined('DISPLAYREPORT_PHP')) $lang_report_php =array(
  'title' => 'Paziņot administratoram', //cpg1.4
  'invalid_email' => '<b>Uzmanību</b>: nekorekta e-pasta adrese!', //cpg1.4
  'report_subject' => 'Sūdzība no %s par %s galerijā', //cpg1.4
  'view_report' => 'Papildsaite, ja attēls tiek attēlots nekorekti', //cpg1.4
  'view_report_plaintext' => 'Lai apskatīt paziņojumu nokopējiet un ievietojiet pārlūkā šo saiti:', //cpg1.4
  'view_more_pics' => 'Galerija', //cpg1.4
  'send_success' => 'Jūsu ziņojums tika nosūtīts', //cpg1.4
  'send_failed' => 'Atvainojiet, bet serveris nevar nosūtīt Jūsu ziņojumu...', //cpg1.4
  'from' => 'No', //cpg1.4
  'your_name' => 'Jūsu vārds', //cpg1.4
  'your_email' => 'Jūsu e-pasts', //cpg1.4
  'to' => 'Kam', //cpg1.4
  'administrator' => 'Administrators', //cpg1.4
  'subject' => 'Tēma', //cpg1.4
  'comment_field_name' => 'Sūdzība par komentāriem "%s"', //cpg1.4
  'reason' => 'Iemesls', //cpg1.4
  'message' => 'Ziņojums', //cpg1.4
  'report_footer' => 'nosūtīts %s no IP %s no %s (galerijas laiks)', //cpg1.4
  'obscene' => 'nepieklājīgs', //cpg1.4
  'offensive' => 'apvainojums', //cpg1.4
  'misplaced' => 'ne pa tēmai', //cpg1.4
  'missing' => 'pazudis', //cpg1.4
  'issue' => 'kļūda/nevar apskatīt', //cpg1.4
  'other' => 'cits', //cpg1.4
  'refers_to' => 'Sūdzība par failu', //cpg1.4
  'reasons_list_heading' => 'Ziņojuma iemesls:', //cpg1.4
  'no_reason_given' => 'Iemesls netika norādīts', //cpg1.4
  'go_comment' => 'Skatīt komentāru', //cpg1.4
  'view_comment' => 'Apskatīt pilnu atskaiti ar komentāru', //cpg1.4
  'type_file' => 'Fails', //cpg1.4
  'type_comment' => 'Komentārs', //cpg1.4
  'invalid_data' => 'Informāciju par komentāru kuru Jūs vēlējaties apskatīt sabojāja pasta programma. Pārbaudiet saiti.', //cpg1.4

);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
  'pic_info' => 'Attēla&nbsp;dati',
    'album' => 'Albums',
    'title' => 'Virsraksts',
  'filename' => 'Faila vārds', //cpg1.4
  'desc' => 'Apraksts',
    'keywords' => 'Atslēgas vārdi',
  'new_keyword' => 'Jauns atslēgas vārds', //cpg1.4
  'new_keywords' => 'Atrasts jauns atslēgas vārds', //cpg1.4
  'existing_keyword' => 'Eksistējošs atslēgas vārds', //cpg1.4
  'pic_info_str' => '%sx%s - %sKB - %s skatījumi - %s balsis',  
   'approve' => 'Apstiprināt attēla pievienošanu',
    'postpone_app' => 'Noraidīt attēla pievienošanu',
    'del_pic' => 'Dzēst attēlu',
  'del_all' => 'Dzēst visus failus', //cpg1.4
  'read_exif' => 'Nolasīt EXIF datus atkārtoti',
  'reset_view_count' => 'Nodzēst skatījumu skaitītāju',
  'reset_all_view_count' => 'Nodzēst visus skatījumu skaitītājus', //cpg1.4
  'reset_votes' => 'Nodzēst balsojumu skaitu',   
  'reset_all_votes' => 'Nodzēst visu balsojumu skaitu', //cpg1.4
  'del_comm' => 'Dzēst komentārus',
  'del_all_comm' => 'Dzēst visus komentārus', //cpg1.4
  'upl_approval' => 'Uzlikšanas apstiprinājums',
    'edit_pics' => 'Modificēt attēlus',
    'see_next' => 'Iepriekšējie attēli',
    'see_prev' => 'Nākamie attēli',
    'n_pic' => '%s attēli',
    'n_of_pic_to_disp' => 'Cik attēlus atspoguļot',
    'apply' => 'Apstiprināt izmaiņas',
  'crop_title' => 'Saīsināt virsrakstus',
  'preview' => 'Priekšskatījums',
  'save' => 'Saglabāt attēlu',
  'save_thumb' =>'Saglabāt kā sīkattēlu',
  'gallery_icon' => 'Lietot kā manu ikonu', //cpg1.4
  'sel_on_img' =>'Izvēlei jābūt pilnībā novietotai uz attēla!', //js-alert
  'album_properties' =>'Albūma īpašības', //cpg1.4
  'parent_category' =>'Vecāku kategorija', //cpg1.4
  'thumbnail_view' =>'Sīkattēlu skats', //cpg1.4
  'select_unselect' =>'iezīmēt visu/atcelt iezīmēšanu', //cpg1.4
  'file_exists' => "Fails '%s' jau eksistē.", //cpg1.4
  'rename_failed' => "Kļūda pārsaucot failu no '%s' uz '%s'.", //cpg1.4
  'src_file_missing' => "Gala fails '%s' neeksistē.", // cpg 1.4
  'mime_conv' => "Nevaru konvertēt failu no '%s' uz '%s'",//cpg1.4
  'forb_ext' => 'Aizliegta izšķirtspēja.',//cpg1.4
);

// ------------------------------------------------------------------------- //
// File faq.php
// ------------------------------------------------------------------------- //

if (defined('FAQ_PHP')) $lang_faq_php = array(
  'faq' => 'Frequently Asked Questions',
  'toc' => 'Table of contents',
  'question' => 'Question: ',
  'answer' => 'Answer: ',
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
  array('What\'s the difference between &quot;Admin Mode&quot; and &quot;User Mode&quot;?', 'This feature, when in admin-mode, allows a user to modify their gallery (as well as others if allowed by the administrator).', 'allow_private_albums', 0),
  array('What\'s &quot;Upload Picture&quot;?', 'This feature allows a user to upload a file (size and type is set by the site administrator) to a gallery selected by either you or the administrator.', 'allow_private_albums', 0),
  array('What\'s &quot;Last Uploads&quot;?', 'This feature shows the last uploads to the site.', 'offline', 0),
  array('What\'s &quot;Last Comments&quot;?', 'This feature shows the last comments along with the files posted by users.', 'offline', 0),
  array('What\'s &quot;Most Viewed&quot;?', 'This feature shows the most viewed files by all users (whether logged in or not).', 'offline', 0),
  array('What\'s &quot;Top Rated&quot;?', 'This feature shows the top rated files rated by the users, showing the average rating (e.g: five users each gave a <img src="images/rating3.gif" width="65" height="14" border="0" alt="" />: the file would have an average rating of <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> ;Five users rated the file from 1 to 5 (1,2,3,4,5) would result in an average <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> .)<br />The ratings go from <img src="images/rating5.gif" width="65" height="14" border="0" alt="best" /> (best) to <img src="images/rating0.gif" width="65" height="14" border="0" alt="worst" /> (worst).', 'offline', 0),
  array('What\'s &quot;My Favorites&quot;?', 'This feature will let a user store a favorite file in the cookie that was sent to your computer.', 'offline', 0),
);


// ------------------------------------------------------------------------- //
// File forgot_passwd.php
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) $lang_forgot_passwd_php = array(
  'forgot_passwd' => 'Paroles atgādinātājs', //cpg1.3.0   
  'err_already_logged_in' => 'Tu jau esi pieslēdzies!', //cpg1.3.0 
  'enter_email' => 'Ievadiet savu e-pastu', //cpg1.4
  'submit' => 'Izpildīt',
  'illegal_session' => 'Paroles atjaunošanas sesija ir nepareiza vai beigusies.', //cpg1.4
  'failed_sending_email' => 'Vēstule ar paroles atgādinājumu nevar tikt izsutīta!',
  'email_sent' => 'Vēstule ar Jūsu lietotājvārdu un jauno paroli tika izsūtīta uz %s', //cpg1.4
  'verify_email_sent' => 'Vēstule tika izsūtīta uz %s. Lūdzu, pārbaudiet savu e-pastu lai pabeigt procesu.', //cpg1.4
  'err_unk_user' => 'Šāds lietotājs neeksistē!',
  'account_verify_subject' => '%s - Vaicājums pēc jaunas paroles', //cpg1.4
  'account_verify_body' => 'Jūs vaicājāt jaunu paroli. Ja vēlaties jaunu paroli uzklikšķiniet uz sekojošas saites:

%s', //cpg1.4
  'passwd_reset_subject' => '%s - Jūsu jaunā parole', //cpg1.4
  'passwd_reset_body' => 'Jūsu jaunā parole:
==============================
   Vārds: %s
Parole: %s
==============================

Nospiediet %s, lai ienākt galerijā.', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
  'group_name' => 'Grupa', //cpg1.4
  'permissions' => 'Tiesības', //cpg1.4
  'public_albums' => 'Ielāde publiskajos albūmos', //cpg1.4
  'personal_gallery' => 'Sava galerija', //cpg1.4
  'upload_method' => 'Ielādes veids', //cpg1.4
  'disk_quota' => 'Diska vieta', //cpg1.4
  'rating' => 'Balsošana', //cpg1.4
  'ecards' => 'E-kartiņas', //cpg1.4
  'comments' => 'Komentāri', //cpg1.4
  'allowed' => 'Atļauts', //cpg1.4
  'approval' => 'Apstiprināšana', //cpg1.4
  'boxes_number' => 'Lauku skaits', //cpg1.4
  'variable' => 'maināms', //cpg1.4
  'fixed' => 'fiksēts', //cpg1.4
  'apply' => 'Pielietot izmaiņas',
  'create_new_group' => 'Izveidot jaunu grupu',
   'del_groups' => 'Dzēst grupu(-as)',
    'confirm_del' => 'Uzmanību! Dzēšot grupu, visi tai piederīgie lietotāji tiks pārvietoti uz reģistrēto lietotāju grupu!\n\nTurpināt?',
    'title' => 'Administrēt lietotāju grupas',
  'num_file_upload' => 'Lauku failu ielādei', //cpg1.4
  'num_URI_upload' => 'Lauku saišu ielādei', //cpg1.4
  'reset_to_default' => 'Uzstādīt vārdu pēc noklusējuma (%s) - rekomendē!', //cpg1.4
  'error_group_empty' => 'Grupas tabula bija tukša!<br /><br />tika izveidotas grupas pēc noklusējuma, lūdzu, pārlādējiet šo lapu.', //cpg1.4
  'explain_greyed_out_title' => 'Kāpēc šī opcija izcelta pelēkā krāsā?', //cpg1.4
  'explain_guests_greyed_out_text' => 'Jūs nevarat mainīt šīs grupas iestādījumus, jo uzstādījāt parametru &quot;Atļaut anonīmu piekļuvi&quot; kā &quot;Nē&quot; konfigurēšanas lapā. Visi ciemiņi (grupas %s dalībnieki) nevar neko darīt, pat ieiet galerijā; tāpēc grupas iestādījumi tos neietekmē.', //cpg1.4
  'explain_banned_greyed_out_text' => 'Jūs nevarat mainīt grupas %s iestādījumus, jo tās dalībnieki tāpat nevar neko darīt.', //cpg1.4
  'group_assigned_album' => 'nozīmētie albūmi', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
    'welcome' => 'Laipni lūdzam!'
);

$lang_album_admin_menu = array(
    'confirm_delete' => 'Tiešām DZĒST šo albumu? \\nVisi attēli un komentāri tajā tiks izdzēsti.',
    'delete' => 'IZDZĒST',
    'modify' => 'UZSTĀDĪJUMI',
    'edit_pics' => 'MODIFICĒT ATTĒLUS',
);

$lang_list_categories = array(
    'home' => 'Galvenā lapa',
    'stat1' => 'attēli: <b>[pictures]</b> | albumi: <b>[albums]</b> | sadaļas: <b>[cat]</b> | komentāri: <b>[comments]</b> | <b>skatīts [views]</b> reizes',
    'stat2' => 'attēli: <b>[pictures]</b> | albumi: <b>[albums]</b> | skatīti <b>[views]</b> reizes',
    'xx_s_gallery' => 'Autors %s',
    'stat3' => '<b>[pictures]</b> attēli | <b>[albums]</b> albumi | <b>[comments]</b> komentāri | skatīti <b>[views]</b> reizes'
);

$lang_list_users = array(
    'user_list' => 'Lietotāju saraksts',
    'no_user_gal' => 'Nav lietotāju galerijas',
    'n_albums' => 'albumi: <b>%s</b>',
    'n_pics' => 'attēli: <b>%s</b>'
);

$lang_list_albums = array(
    'n_pictures' => '<b>%s</b> attēli',
    'last_added' => ', pēdējais pievienots <b>%s</b>',
    'n_link_pictures' => '%s piesaistītu failu', //cpg1.4
    'total_pictures' => '%s failu pavisam', //cpg1.4
);

}

// ------------------------------------------------------------------------- //
// File keywordmgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('KEYWORDMGR_PHP')) $lang_keywordmgr_php = array(
  'title' => 'Atslēgas vārdu pārvaldnieks', //cpg1.4
  'edit' => 'Rediģēt', //cpg1.4
  'delete' => 'dzēst', //cpg1.4
  'search' => 'meklēt', //cpg1.4
  'keyword_test_search' => 'meklēt %s jaunā logā', //cpg1.4
  'keyword_del' => 'dzēst atslēgas vārdu %s', //cpg1.4
  'confirm_delete' => 'Vai tiešām dzēst atslēgas vārdu %s visā galerijā?', //cpg1.4  // js-alert
  'change_keyword' => 'Mainīt vārdu skaitu', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
    'login' => 'Pieslēgties',
    'enter_login_pswd' => 'Pieslēdzies ar savu lietotāja vārdu un paroli',
    'username' => 'Vārds',
    'password' => 'Parole',
    'remember_me' => 'Atcerēties mani arī turpmāk',
    'welcome' => 'Sveicināts, %s ...',
    'err_login' => '*** Vārds vai/un parole nepareizi. Mēģināsi vēlreiz? ***',
    'err_already_logged_in' => 'Tu jau esi sistēmā!',
    'forgot_password_link' => 'Aizmirsu paroli!', //cpg1.3.0
    'cookie_warning' => 'Uzmanību! jūsu pārlūks neatbalsta Cookies', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
    'logout' => 'Iziet',
    'bye' => 'Visu labu,  %s ...',
    'err_not_loged_in' => 'Jāpieslēdzas sistēmai!',
);

// ------------------------------------------------------------------------- //
// File minibrowser.php  //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('MINIBROWSER_PHP')) $lang_minibrowser_php = array(
  'close' => 'aizvērt', //cpg1.4
  'submit' => 'OK', //cpg1.4
  'up' => 'par vienu līmeni uz augšu', //cpg1.4
  'current_path' => 'tekošais ceļš', //cpg1.4
  'select_directory' => 'Lūdzu, norādiet direktoriju', //cpg1.4
  'click_to_close' => 'Uzklikšķiniet uz attēla lai aizvērt logu',
);

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
    'upd_alb_n' => 'Modificēt albumu %s',
    'general_settings' => 'Galvenie uzstādījumi',
    'alb_title' => 'Albuma virsraksts',
    'alb_cat' => 'Sadaļa',
    'alb_desc' => 'Albuma apraksts',
    'alb_keyword' => 'Atslēgas vārdi', //cpg1.4   
    'alb_thumb' => 'Albuma mazais attēls',
    'alb_perm' => 'Albuma lietotāju tiesības',
    'can_view' => 'Albumu var skatīties',
    'can_upload' => 'Apmeklētājie drīkst pievienot attēlus',
    'can_post_comments' => 'Apmeklētāji drīkst komentēt',
    'can_rate' => 'Apmeklētāji drīkst vērtēt attēlus',
    'user_gal' => 'Lietotāja galerija',
    'no_cat' => '* Kategorijas nav *',
    'alb_empty' => 'Albums ir tukšs',
    'last_uploaded' => 'Pēdejoreiz uzlikts attēls',
    'public_alb' => 'Ikviens (publiskais albums)',
    'me_only' => 'Tikai es',
    'owner_only' => 'Tikai albuma īpašnieks (%s)',
    'groupp_only' => 'Tikai \'%s\' grupā esošie',
    'err_no_alb_to_modify' => 'Tev nav tiesību modificēt albumus.',
    'update' => 'Saglabāt izmaiņas',
  'reset_album' => 'Nomest albūmu', //cpg1.4
  'reset_views' => 'Nomest skatījumu skaitītāju uz &quot;0&quot; iekš %s', //cpg1.4
  'reset_rating' => 'Nomest vērtējumus visiem failiem iekš %s', //cpg1.4
  'delete_comments' => 'Dzēst visus komentārus iekš %s', //cpg1.4
  'delete_files' => '%sNeatgriezeniski%s dzēst visus failus iekš %s', //cpg1.4
  'views' => 'skatījumi', //cpg1.4
  'votes' => 'vērtējumi', //cpg1.4
  'comments' => 'komentāri', //cpg1.4
  'files' => 'faili', //cpg1.4
  'submit_reset' => 'pielietot izmaiņas', //cpg1.4
  'reset_views_confirm' => 'Jā', //cpg1.4
  'notice1' => '(*) atkarībā no  %sgrupu%s iestādījumiem', //cpg1.4 //(do not translate %s!)
  'alb_password' => 'Albūma parole', //cpg1.4
  'alb_password_hint' => 'Mājiens albūma parolei', //cpg1.4
  'edit_files' =>'Rediģēt failus', //cpg1.4
  'parent_category' =>'Vecāku kategorija', //cpg1.4
  'thumbnail_view' =>'Sīkattēlu skatījums', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File phpinfo.php
// ------------------------------------------------------------------------- //

if (defined('PHPINFO_PHP')) $lang_phpinfo_php = array(
  'php_info' => 'PHP info', //cpg1.3.0
  'explanation' => 'This is the output generated by the PHP-function <a href="http://www.php.net/phpinfo">phpinfo()</a>, displayed within Copermine (trimming the output at the right corner).', //cpg1.3.0
  'no_link' => 'Having others see your phpinfo can be a security risk, that\'s why this page is only visible when you\'re logged in as admin. You can not post a link to this page for others, they will be denied access.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File picmgr.php //cpg1.4
// ------------------------------------------------------------------------- //
if (defined('PICMGR_PHP')) $lang_picmgr_php = array(
  'pic_mgr' => 'Attļu pārvaldnieks', //cpg1.4
  'select_album' => 'Izvēlieties albūmu', //cpg1.4
  'delete' => 'Dzēst', //cpg1.4
  'confirm_delete1' => 'Vai tiešām dzēst?', //cpg1.4
  'confirm_delete2' => '\nAttēls tiks neatgriezeniski dzēsts.', //cpg1.4
  'apply_modifs' => 'Pielietot izmaiņas', //cpg1.4
  'confirm_modifs' => 'Apstiprināt izmaiņas', //cpg1.4
  'pic_need_name' => 'Nepieciešams attēla nosaukums!', //cpg1.4
  'no_change' => 'Jūs neveicāt nekādas izmaiņas!', //cpg1.4
  'no_album' => '* Nav albūma *', //cpg1.4
  'explanation_header' => 'izvēlnes kārtošanas režīms strādās tikai ja', //cpg1.4
  'explanation1' => 'administrators galerijas iestādījumos opcijai "Failu kārtošanas secība pēc noklusējuma" norādīja "Pozīcija [dilstoši]" vai "Pozīcija [augoši]"', //cpg1.4
  'explanation2' => 'lietotājs izvēlējās "Pozīcija [dilstoši]" vai "Pozīcija [augoši]" sīkattēlu lapā', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File pluginmgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('PLUGINMGR_PHP')){

$lang_pluginmgr_php = array(
  'confirm_uninstall' => 'Vai tiešām atslēgt šo paplašinājumu', //cpg1.4
  'confirm_delete' => 'Vai tiešām dzēst šo paplašinājumu', //cpg1.4
  'pmgr' => 'Paplašinājumu pārvaldnieks', //cpg1.4
  'name' => 'Vārds', //cpg1.4
  'author' => 'Autors', //cpg1.4
  'desc' => 'Apraksts', //cpg1.4
  'vers' => 'v', //cpg1.4
  'i_plugins' => 'Uzstādītie paplašinājumi', //cpg1.4
  'n_plugins' => 'Neuzstādītie paplašinājumi', //cpg1.4
  'none_installed' => 'Nekas nav uzstādīts', //cpg1.4
  'operation' => 'Operācija', //cpg1.4
  'not_plugin_package' => 'Ielādētais fails nav paplašinājuma fails.', //cpg1.4
  'copy_error' => 'Notika paplašinājuma koēšanas kļūda.', //cpg1.4
  'upload' => 'Ielādēt', //cpg1.4
  'configure_plugin' => 'Konfigurēt paplašinājumu', //cpg1.4
  'cleanup_plugin' => 'Attīrīt paplašinājumu', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
    'already_rated' => 'Atvaino, bet tu jau esi iesniedzis savu vērtējumu',
    'rate_ok' => 'Vērtējums pieņemts',
    'forbidden' => 'Vērtēsi pats savus attēlus?', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
Ar šo Tu apņemies neievietot citus aizskarošus, piedauzīgus, vulgārus,
apmelojošus, pretīgus, draudošus, seksuāli orientētus, vai jebkādus citus
materiālus, kas pārkāpj jebkādus likumus. Likumu nezināšana neatbrīvo
no atbildības!!! Tu piekrīti, ka šīs lapas webmasters, administrators un
moderators ir tiesīgi izdzēst vai mainīt saturu jebkurā laikā, kad vien
vēlās. Kā lietotājs Tu piekrīti, ka visa informācija ko Tu ievadīsi
tiks saglabāta datubāzē.<br />
<br />
Šī lapa izmanto <em>cookies</em> tehnoloģiju, lai saglabātu informāciju tavā datorā.
<em>Cookies</em> vienīgi uzlabo lapas parādīšanas kvalitāti. E-pasta adrese
tiek izmantota vienīgi Tavas reģistrācijas apstiprināšanai,
lai nosūtītu paroli.<br />
<br />
Izvēloties zemāk <bold>Es piekrītu</bold> Tu piekrīti visam iepriekš rakstītajam.
EOT;

$lang_register_php = array(
    'page_title' => 'Lietotāja reģistrācija',
    'term_cond' => 'Vienošanās nosacījumi',
    'i_agree' => 'Es piekrītu',
    'submit' => 'Apstiprināt reģistrāciju',
    'err_user_exists' => 'Šis lietotāja vārds jau ir reģistrēts, izvēlies citu',
    'err_password_mismatch' => 'Paroles nesakrīt, raksti vēlreiz',
    'err_uname_short' => 'Lietotāja vārda minimālais simbolu skaits ir 2',
    'err_password_short' => 'Parolē jābūt ne mazāk kā 2 simboliem',
    'err_uname_pass_diff' => 'Lietotāja vārds un parole nedrīkst būt vienādi',
    'err_invalid_email' => 'E-pasta adres ir nepareiza',
    'err_duplicate_email' => 'Šāda email adrese jau ir datu bāzē',
    'enter_info' => 'Reģistrācijas informācija',
    'required_info' => 'Nepieciešamā informācija',
    'optional_info' => 'Neobligātā informācija',
    'username' => 'Lietotāja vārds',
    'password' => 'Parole',
    'password_again' => 'Vēlreiz parole',
    'email' => 'E-pasts',
    'location' => 'Atrašanās vieta',
    'interests' => 'Intereses',
    'website' => 'Mājas lapa',
    'occupation' => 'Nodarbošanās',
    'error' => 'KĻŪDA',
    'confirm_email_subject' => '%s - Reģistrācijas apstiprinājums',
    'information' => 'Informācija',
    'failed_sending_email' => 'Nevar tikt nosūtīta reģistrācijas apstiprinājuma vēstule!',
    'thank_you' => 'Paldies par reģistrēšanos.<br /><br />Vēstule ar sīkāku informāciju, kā pabeigt reģistrēšanās procesu, tika nosūtīta uz iepriekš minēto adresi.',
    'acct_created' => 'Konts izveidots un tu vari pieslēgties ar savu lietotāja vārdu un paroli',
    'acct_active' => 'Konts ir aktīvs un tu tagad vari pieslēgties sistēmai',
    'acct_already_act' => 'Konts jau ir aktīvs!',
    'acct_act_failed' => 'Šis konts nevar tikt aktivizēts!',
    'err_unk_user' => 'Izvēlētais lietotājs neeksistē!',
    'x_s_profile' => '%s : profails',
    'group' => 'Grupa',
    'reg_date' => 'Pievienojies',
    'disk_usage' => 'Diska izmantošana',
    'change_pass' => 'Nomainīt paroli',
    'current_pass' => 'Pašreizējā parole',
    'new_pass' => 'Jauna parole',
    'new_pass_again' => 'Vēlreiz jaunā parole',
    'err_curr_pass' => 'Pašreizējā parole nepareiza',
    'apply_modif' => 'Apstiprināt izmaiņas',
    'change_pass' => 'Nomainīt paroli',
    'update_success' => 'Profails izmainīts',
    'pass_chg_success' => 'Parole nomainīta',
    'pass_chg_error' => 'Parole netika nomainīta',
    'notify_admin_email_subject' => '%s - reģistrācijas paziņojums', //cpg1.3.0  
    'last_uploads' => 'Pēdējais ielādētais fails.<br />Spiediet šeit, lai redzēt visus ielādētos failus', //cpg1.4
    'last_comments' => 'Pēdējais komentārs.<br />Spiediet šeit, lai redzēt visus atstātos komentārus', //cpg1.4
    'notify_admin_email_body' => 'Jauns dalībnieks "%s" piereģistrējies', //cpg1.3.0    
    'pic_count' => 'Faili ieladēti', //cpg1.4
    'notify_admin_request_email_subject' => '%s - Pieprasījums reģistrācijai', //cpg1.4
    'thank_you_admin_activation' => 'paldies.<br /><br />Jūsu pieprasījums reģistrācijai tika nosūtīts. Jūs saņemsiet vēstuli ja reģistrācija tiks atļauta.', //cpg1.4
    'acct_active_admin_activation' => 'Profils aktivēts. Vēstule ar paziņojumu tika nosūtīta lietotājam.', //cpg1.4
    'notify_user_email_subject' => '%s - paziņojums par aktivēšanu', //cpg1.4
);

$lang_register_confirm_email = <<<EOT
Paldies par reģistrēšanos {SITE_NAME}

Lai aktivizētu savu profilu, nepieciešams ielādēt zemāk redzamo lapu.

<a href="{ACT_LINK}">{ACT_LINK}</a>

Lai veicas,

{SITE_NAME}

EOT;

$lang_register_approve_email = <<<EOT
Jūsu galerijā tika izveidots jauns profils "{USER_NAME}".

Lai aktivizēt profilu, nepieciešams ielādēt zemāk redzamo lapu.  

<a href="{ACT_LINK}">{ACT_LINK}</a>

EOT;

$lang_register_activated_email = <<<EOT
Jūsu profils tika akceptēts un aktivizēts.

tagad Jūs varat ieiet lapā <a href="{SITE_LINK}">{SITE_LINK}</a> ar profilu "{USER_NAME}"


Lai veicas,

{SITE_NAME}

EOT;
}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
    'title' => 'Apskatīties komentārus',
    'no_comment' => 'Komentāru nav',
    'n_comm_del' => '%s komentāri izdzēsti',
    'n_comm_disp' => 'Cik komentārus atspoguļot',
    'see_prev' => 'Iepriekšējie',
    'see_next' => 'Nākamie',
    'del_comm' => 'Dzēst izvēlētos komentārus',
    'user_name' => 'Vārds', //cpg1.4
    'date' => 'Datums', //cpg1.4
    'comment' => 'Komentārs', //cpg1.4
    'file' => 'Fails', //cpg1.4
    'name_a' => 'Vārds [augoši]', //cpg1.4
    'name_d' => 'Vārds [dilstoši]', //cpg1.4
    'date_a' => 'Datums [augoši]', //cpg1.4
    'date_d' => 'Datums [dilstoši]', //cpg1.4
    'comment_a' => 'Komentārs [augoši]', //cpg1.4
    'comment_d' => 'Komentārs [dilstoši]', //cpg1.4
    'file_a' => 'Fails [augoši]', //cpg1.4
    'file_d' => 'Fails [dilstoši]', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File search.php
// ------------------------------------------------------------------------- //


if (defined('SEARCH_PHP')){

$lang_search_php = array(
  'title' => 'Meklēšana failu kolekcijā', //cpg1.4
  'submit_search' => 'meklēt', //cpg1.4
  'keyword_list_title' => 'Atslēgas vārdu saraksts', //cpg1.4
  'keyword_msg' => 'Sekojošais saraksts neiekļauj sevī visus vārdus. Netiek iekļauti vārdi no attēlu virsrakstiem un to aprakstiem. Pamēģiniet izmantot pilno meklēšanu.',  //cpg1.4
  'edit_keywords' => 'Rediģēt atslēgas vārdu sarakstu.', //cpg1.4
  'search in' => 'Meklēt:', //cpg1.4
  'ip_address' => 'IP adrese', //cpg1.4
  'fields' => 'Meklēt:', //cpg1.4
  'age' => 'Vecums', //cpg1.4
  'newer_than' => 'Jaunāki par', //cpg1.4
  'older_than' => 'Vecāki par', //cpg1.4
  'days' => 'dienām', //cpg1.4
  'all_words' => 'Meklēt visus vārdus (AND)', //cpg1.4
  'any_words' => 'Meklēt jebkuru vārdu (OR)', //cpg1.4
);

$lang_adv_opts = array(
  'title' => 'Nosaukums', //cpg1.4
  'caption' => 'Apraksts', //cpg1.4
  'keywords' => 'Atslēgas vārdi', //cpg1.4
  'owner_name' => 'Īpašnieka vārds', //cpg1.4
  'filename' => 'Faila vārds', //cpg1.4
);

}

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
    'page_title' => 'Meklēt jaunus attēlus',
    'select_dir' => 'Izvēlēties direktoriju',
    'select_dir_msg' => 'Šī funkcija ļauj pievienot daudzus attēlus vienlaikus, ja tie iepriekš uzlikti ar FTP.<br /><br />Izvēlies direktoriju, kur tika uzlikti attēli',
    'no_pic_to_add' => 'Nav attēlu, ko varētu pievienot',
    'need_one_album' => 'Lai izmantotu šo funkciju, nepieciešams vismaz viens albums',
    'warning' => 'Uzmanību',
    'change_perm' => 'nav pieeja direktorijai, tai jāizmaina tiesības (chmod) no 755 uz 777, lai varētu pievienot attēlus!',
    'target_album' => '<b>Ievietot attēlus &quot;</b>%s<b>&quot; </b>%s',
    'folder' => 'Direktorija',
    'image' => 'Attēls',
    'album' => 'Albums',
    'result' => 'Rezultāti',
    'dir_ro' => 'Nav rakstīšanas tiesību. ',
    'dir_cant_read' => 'Nav lasīšanas tiesību. ',
    'insert' => 'Jaunu attēlu pievienošana',
    'list_new_pic' => 'Jauno attēlu saraksts',
    'insert_selected' => 'Pievienot izvēlētos attēlus',
    'no_pic_found' => 'Jauni attēli netika atrasti',
    'be_patient' => 'Lūdzu esiet pacietīgi, kamēr tiek pievienoti jaunie attēli',
        'no_album' => 'Albūms nav izvēlēts',  //cpg1.3.0
    'result_icon' => 'nospiediet detalizācijai vai pārlādei.',  //cpg1.4
    'notes' =>  '<ul>'.
                '<li><b>OK</b> : attēls veiksmīgi pievienots'.
                '<li><b>DP</b> : nozīmē, ka tāds attēls jau ir datu bāzē'.
                '<li><b>PB</b> : attēlu nevar pievienot, jāpārbauda pieejas tiesības'.
                                '<li><b>NA</b> : nozīmē, ka neesi izvēlējies albūmu, kur ievietot šos foto. Spied \'<a href="javascript:history.back(1)">atpakaļ pogu</a>\' un izvēlies. Ja nav neviena albūma, <a href="albmgr.php">vispirms izveidot</a></li>'.
                '<li>Ja OK, DP, PB \'zīmes\' neparādās, jāklikšķina uz attēla, kas parādās, lai iegūtu detalizētāku kļūdas aprakstu'.
                '<li>Ja pārlūkā parādās paziņojums par taimautu, lapa ir jāpārlādē'.
                '</ul>',
    'select_album' => 'izvēlēties albūmu', //cpg1.3.0
        'check_all' => 'ieķeksēt visu', //cpg1.3.0
        'uncheck_all' => 'atķeksēt visu', //cpg1.3.0
    'no_folders' => 'Mapē "albums" nav Jūsu veidoto mapju.<br />Pārliecinieties,ka Jūs izveidojāt vismaz vienu mapi mapē "albums" un ielādējāt tajā caur FTP savus failus.<br />Jums nekas nav jāielādē mapēs "userpics" un "edit", tās ir rezervētas priekš http ielādēm un iekšējām vaja dzībām.', //cpg1.4
    'albums_no_category' => 'Albūmi bez sadaļām', //cpg1.4 // album pulldown mod, added by frogfoot
    'personal_albums' => '* Personālie albūmi', //cpg1.4 // album pulldown mod, added by frogfoot
    'browse_batch_add' => 'Iebūvētais pārlūks (rekomendējam)', //cpg1.4
    'edit_pics' => 'Rediģēt failus', //cpg1.4
    'edit_properties' => 'Albūma iestatījumi', //cpg1.4
    'view_thumbs' => 'Sīkattēlu skatījums', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File stat_details.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('STAT_DETAILS_PHP')) $lang_stat_details_php = array(
  'show_hide' => 'parādīt/noslēpt šo kollonnu', //cpg1.4
  'vote' => 'Plašāk par balsošanu', //cpg1.4
  'hits' => 'Plašāk par skatījumiem', //cpg1.4
  'stats' => 'Balsošanas statistika', //cpg1.4
  'sdate' => 'Datums', //cpg1.4
  'rating' => 'Reitings', //cpg1.4
  'search_phrase' => 'Meklēšana', //cpg1.4
  'referer' => 'Atsauce', //cpg1.4
  'browser' => 'Pārlūks', //cpg1.4
  'os' => 'Operētājsistēma', //cpg1.4
  'ip' => 'IP', //cpg1.4
  'sort_by_xxx' => 'Kārtot pēc %s', //cpg1.4
  'ascending' => '[augoši]', //cpg1.4
  'descending' => '[dilstoši]', //cpg1.4
  'internal' => 'iekšējā', //cpg1.4
  'close' => 'aizvērt', //cpg1.4
  'hide_internal_referers' => 'Slēpt iekšējās atsauces', //cpg1.4
  'date_display' => 'Datuma attēlošana', //cpg1.4
  'submit' => 'izpildīt / atjaunināt', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File thumbnails.php
// ------------------------------------------------------------------------- //

// Void

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) $lang_upload_php = array(
  'title' => 'Pievienot', //cpg1.3.0
  'custom_title' => 'Modificēta pievienošanas forma', //cpg1.3.0
  'cust_instr_1' => 'Izvēlies, cik lauciņus atspoguļot (ierobežots lielums).', //cpg1.3.0
  'cust_instr_2' => 'Pievienošanas lauciņu skaits', //cpg1.3.0
  'cust_instr_3' => 'Max pievienošanas lauciņu skaits: %s', //cpg1.3.0
  'cust_instr_4' => 'URI/URL lauciņu skaits: %s', //cpg1.3.0
  'cust_instr_5' => 'URI/URL lauciņu skaits:', //cpg1.3.0
  'cust_instr_6' => 'Pievienošanas lauciņu skaits:', //cpg1.3.0
  'cust_instr_7' => 'Izvēlies katra tipa lauciņu skaitu. pēc tam spied \'Turpināt\'. ', //cpg1.3.0
  'reg_instr_1' => 'Kļūda opcijās.', //cpg1.3.0
  'reg_instr_2' => '<small style="color:white;">Iespējama vairāku failu vienlaicīga pievienošana. Failiem nevajadzētu būt lielākiem par %s KB (katram). Pievienojot ZIP failus, tie paliek tādā pašā formātā (netiek atvērti).</small>', //cpg1.3.0
  'reg_instr_3' => 'Ja vēlies, lai ZIP formāta faili tiktu atkompresēti automātiski, pievieno tos sadaļā \'Decompressive ZIP Upload\'.', //cpg1.3.0
  'reg_instr_4' => '<small style="color:white;">Izmantojot URI/URL, izmanto pilnu ceļu uz failu: <code>http://www.mysite.com/images/example.jpg</code></small>', //cpg1.3.0
  'reg_instr_5' => '<small style="color:white;">Ja viss aizpildīt un pārbaudīts, spied \'Turpināt\'.</small><br/>', //cpg1.3.0
  'reg_instr_6' => 'Decompressive ZIP Uploads:', //cpg1.3.0
  'reg_instr_7' => 'Faili:', //cpg1.3.0
  'reg_instr_8' => 'URI/URL:', //cpg1.3.0
  'error_report' => 'Kļūdas', //cpg1.3.0
  'error_instr' => 'Bija sekojošas kļūdas:', //cpg1.3.0
  'file_name_url' => 'Fails nosaukums/URL', //cpg1.3.0
  'error_message' => 'Kļūdas paziņojums', //cpg1.3.0
  'no_post' => 'Fails netika pievienots ar POST metodi.', //cpg1.3.0
  'forb_ext' => 'Aizliegts faila formāts.', //cpg1.3.0
  'exc_php_ini' => 'Pārsniegts php.ini norādītais pievienojamo failu lielums.', //cpg1.3.0
  'exc_file_size' => 'Pārsniegts CPG uzstādītais failu lielums.', //cpg1.3.0
  'partial_upload' => 'Only a partial upload.', //cpg1.3.0
  'no_upload' => 'Pievienošana nenotika.', //cpg1.3.0
  'unknown_code' => 'Nezināma PHP kļūda.', //cpg1.3.0
  'no_temp_name' => 'No upload - No temp name.', //cpg1.3.0
  'no_file_size' => 'Contains no data/Corrupted', //cpg1.3.0
  'impossible' => 'Impossible to move.', //cpg1.3.0
  'not_image' => 'Tas nav attēls/attēls ir ķļūdains', //cpg1.3.0
  'not_GD' => 'Not a GD extension.', //cpg1.3.0
  'pixel_allowance' => 'Pārāk daudz pikseļi.', //cpg1.3.0
  'incorrect_prefix' => 'Nepareiza formāta URI/URL', //cpg1.3.0
  'could_not_open_URI' => 'Nav iespējams atvērt URI.', //cpg1.3.0
  'unsafe_URI' => 'Safety not verifiable.', //cpg1.3.0
  'meta_data_failure' => 'Meta data kļūda', //cpg1.3.0
  'http_401' => '401 Unauthorized', //cpg1.3.0
  'http_402' => '402 Payment Required', //cpg1.3.0
  'http_403' => '403 Forbidden', //cpg1.3.0
  'http_404' => '404 Not Found', //cpg1.3.0
  'http_500' => '500 Internal Server Error', //cpg1.3.0
  'http_503' => '503 Service Unavailable', //cpg1.3.0
  'MIME_extraction_failure' => 'MIME could not be determined.', //cpg1.3.0
  'MIME_type_unknown' => 'Unknown MIME type', //cpg1.3.0
  'cant_create_write' => 'Cannot create write file.', //cpg1.3.0
  'not_writable' => 'Cannot write to write file.', //cpg1.3.0
  'cant_read_URI' => 'Cannot read URI/URL', //cpg1.3.0
  'cant_open_write_file' => 'Cannot open URI write file.', //cpg1.3.0
  'cant_write_write_file' => 'Cannot write to URI write file.', //cpg1.3.0
  'cant_unzip' => 'Nav iespējams atkompresēt.', //cpg1.3.0
  'unknown' => 'Nedefinēta kļuda', //cpg1.3.0
  'succ' => 'Veiksmīgi pievienots', //cpg1.3.0
  'success' => '<small style="color:white;">Fails nr. %s veiksmīgi pievienots</small>', //cpg1.3.0
  'add' => '<small style="color:white;">Spied uz \'Turpināt\', lai albūmam pievienotu attēlus.<br/></small>', //cpg1.3.0
  'failure' => 'Pievienošanas kļūda', //cpg1.3.0
  'f_info' => 'Informācija par datiem', //cpg1.3.0
  'no_place' => 'Nav iespējams nomainīt jau esošu failu.', //cpg1.3.0
  'yes_place' => 'Iepriekšējais fails veiksmīgi pievienots.', //cpg1.3.0
  'max_fsize' => 'Atļautais viena faila lielums %s KB',
  'album' => 'Albūms',
  'picture' => 'Fails', //cpg1.3.0
  'pic_title' => 'Faila nosaukums (virsraksts)', //cpg1.3.0
  'description' => 'Fila apraksts', //cpg1.3.0
  'keywords' => 'Atslēgas vārdi (vairākus atdali ar atstarpēm)<br /><a href="#" onClick="return MM_openBrWindow(\'keyword_select.php\',\'selectKey\',\'width=250, height=400, scrollbars=yes,toolbar=no,status=yes,resizable=yes\')">Ievietot no saraksta</a>', //cpg1.4
  'keywords_sel' =>'Izvēlieties atslēgas vārdu', //cpg1.4
  'err_no_alb_uploadables' => 'Atvaino, bet nav neviena albūma, kur tu varētu likt attēlus', //cpg1.3.0   
  'place_instr_1' => 'Ievieto katru attēlu vajadzīgajā albūmā, ja vajadzīgs, katram pievieno sīkāku informāciju.', //cpg1.3.0
  'place_instr_2' => 'Spied uz \'Turpināt\' un norādi, kur ievietot pārējos failus.', //cpg1.3.0
   'process_complete' => 'Visi dati veiksmīgi pievienoti.', //cpg1.3.0      
   'albums_no_category' => 'Albūmi bez kategorijām', //cpg1.4. //album pulldown mod, added by frogfoot
  'personal_albums' => '* Personālie albūmi', //cpg1.4 //album pulldown mod, added by frogfoot
  'select_album' => 'Izvēlieties albūmu', //cpg1.4 //album pulldown mod, added by frogfoot
  'close' => 'Aizvērt', //cpg1.4
  'no_keywords' => 'Atvainojiet, atslēgas vārdu nav!', //cpg1.4
  'regenerate_dictionary' => 'Atjaunot vārdnīcu', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
  'memberlist' => 'Lietotāju saraksts', //cpg1.4
  'user_manager' => 'Lietotāju pārvaldnieks', //cpg1.4
  'title' => 'Administrēt lietotājus',
    'name_a' => 'Vārds augoši',
    'name_d' => 'Vārds dilstoši',
    'group_a' => 'Grupa augoši',
    'group_d' => 'Grupa dilstoši',
    'reg_a' => 'Reg datums augoši',
    'reg_d' => 'Reg datums dilstoši',
    'pic_a' => 'Attēlu skaits augoši',
    'pic_d' => 'Attēlu skaits dilstoši',
    'disku_a' => 'Diska atmiņa augoši',
    'disku_d' => 'Diska atmiņa dilstoši',
        'lv_a' => 'Pedējais apmeklējums augoši', //cpg1.3.0
        'lv_d' => 'Pēdējais apmeklējums dilstoši', //cpg1.3.0
    'sort_by' => 'Kārtot',
    'err_no_users' => 'Lietotāju tabulā nav datu!',
    'err_edit_self' => 'Nemaini te savu profailu, tam izmanto \'Mans profails\'',
    'edit' => 'MODIFICĒT',
  'with_selected' => 'Ar izvēlētajiem:', //cpg1.4
  'delete' => 'DZĒST', //cpg1.4
  'delete_files_no' => 'atstāt publiskos failus (bet padarīt anonīmus)', //cpg1.4
  'delete_files_yes' => 'dzēst arī publiskos failus', //cpg1.4
  'delete_comments_no' => 'atstāt komentārus (bet padarīt anonīmus)', //cpg1.4
  'delete_comments_yes' => 'dzēst arī komentārus', //cpg1.4
  'activate' => 'Aktivizēt', //cpg1.4
  'deactivate' => 'Deaktivizēt', //cpg1.4
  'reset_password' => 'Atcelt paroli', //cpg1.4
  'change_primary_membergroup' => 'Izmainīt pamatgrupu', //cpg1.4
  'add_secondary_membergroup' => 'Pievienot apakšgrupu', //cpg1.4
  'name' => 'Lietotāja vārds',
  'group' => 'Grupa',
  'inactive' => 'Neaktīvs',
  'operations' => 'Darbības',
  'pictures' => 'Faili',
  'disk_space_used' => 'Izmantotās vietas', //cpg1.4
  'disk_space_quota' => 'Piejamās vietas', //cpg1.4
  'registered_on' => 'Reģistrācija', //cpg1.4
   'last_visit' => 'Pēdējais apmeklējums', //cpg1.3.0
    'u_user_on_p_pages' => '%d lietotāji %d lapā(s)',
    'confirm_del' => 'Tiešām DZĒST šo lietotāju? \\nVisi viņa attēli un komentāri arī tiks izdzēsti',
    'mail' => 'MAIL',
    'err_unknown_user' => 'Izvēlētais lietotājs neeksistē!',
    'modify_user' => 'Mainīt datus',
    'notes' => 'Piezīmes',
    'note_list' => '<li>Ja nevēlies mainīt paroli, atstāj paroles lauku tukšu',
    'password' => 'Parole',
    'user_active' => 'Lietotājs aktīvs',
    'user_group' => 'Grupa',
    'user_email' => 'Emails',
    'user_web_site' => 'Mājas lapa',
    'create_new_user' => 'Izveidot',
    'user_location' => 'Atrašanās',
    'user_interests' => 'Intereses',
    'user_occupation' => 'Nodarbošanās',
  'user_profile1' => '$user_profile1', //cpg1.4
  'user_profile2' => '$user_profile2', //cpg1.4
  'user_profile3' => '$user_profile3', //cpg1.4
  'user_profile4' => '$user_profile4', //cpg1.4
  'user_profile5' => '$user_profile5', //cpg1.4
  'user_profile6' => '$user_profile6', //cpg1.4
  'latest_upload' => 'Jaunākās ielādes',
  'never' => 'nekad',
  'search' => 'Lietotāju meklēšana', //cpg1.4
  'submit' => 'Izpildīt', //cpg1.4
  'search_submit' => 'Meklēt!', //cpg1.4
  'search_result' => 'Meklēšanas rezultāti: ', //cpg1.4
  'alert_no_selection' => 'Jums ir jāizvēlās vismaz viens lietotājs!', //cpg1.4 //js-alert
  'password' => 'Parole', //cpg1.4
  'select_group' => 'Izvēlieties grupu', //cpg1.4
  'groups_alb_access' => 'Albūma tiesības pa grupām', //cpg1.4
  'album' => 'Albūms', //cpg1.4
  'category' => 'Kategorija', //cpg1.4
  'modify' => 'Izmainīt?', //cpg1.4
  'group_no_access' => 'Šai grupai nav atbilstošas pieejas', //cpg1.4
  'notice' => 'Uzmanību', //cpg1.4
  'group_can_access' => 'Albūmi uz kuriem "%s" ir piekļuves tiesības', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //

if (defined('UTIL_PHP')) {
$lang_util_desc_php = array(
'Atjauno failu nosaukumus no failu vārdiem', //cpg1.4
'Dzēš failu nosaukumus', //cpg1.4
'Atjauno šīkattēlus un izmaia izmērus', //cpg1.4
'Dzēš oriģinālus un aizvieto tos ar atbilstoša izmēra versijām', //cpg1.4
'Dzēš oriģinālos vai starpattēlus lai atbrīvot vietu uz diska', //cpg1.4
'Dzēš bez failiem palikušos komentārus', //cpg1.4
'Pārskaita attēlu apjomu un izmēru (ja Jūs manuāli mainījāt attēlus)', //cpg1.4
'Nostāda skatījumu skaitītāju šākuma stāvoklī', //cpg1.4
'Attēlo phpinfo', //cpg1.4
'Atjauno datubāzi', //cpg1.4
'Attēlo atskaišu failus', //cpg1.4
);
$lang_util_php = array(
    'title' => 'Attēlu izmēri', //new in cpg1.2.0
    'what_it_does' => 'Funkcijas', //new in cpg1.2.0
    'file' => 'Fails',
    'problem' => 'Problēma', //cpg1.4
    'status' => 'Stāvolis', //cpg1.4
    'title_set_to' => 'virsraksts', //new in cpg1.2.0
    'submit_form' => 'Apstiprināt', //new in cpg1.2.0
    'updated_succesfully' => 'Veiksmīgi izmanīts', //new in cpg1.2.0
    'error_create' => 'Kļūda', //new in cpg1.2.0
    'continue' => 'Turpināt ar citiem attēliem', //new in cpg1.2.0
    'main_success' => 'Fails %s tiek izmantots kā galvenais attēls', //new in cpg1.2.0
    'error_rename' => 'Kļūda %s pārsaucot par %s', //new in cpg1.2.0
    'error_not_found' => 'Fails %s nav atrasts', //new in cpg1.2.0
    'back' => 'Atgriezties', //new in cpg1.2.0
    'thumbs_wait' => 'Notiek mazo un normālo attēlu modificēšana, lūdzu uzgaidi...', //new in cpg1.2.0
    'thumbs_continue_wait' => 'Turpinam modificēt mazos un normālos attēlus...', //new in cpg1.2.0
    'titles_wait' => 'Norit sparīga virsrakstu modificēšana, uzgaidi...', //new in cpg1.2.0
    'delete_wait' => 'Dzēšu virsrakstus, lūdzu uzgaidi...', //new in cpg1.2.0
    'replace_wait' => 'Dzēšu oriģinālus, nomainot tos ar modificētajiem attēliem, lūdzu uzgaidi...', //new in cpg1.2.0
    'instruction' => 'Ieteikumi', //new in cpg1.2.0
    'instruction_action' => 'Izvēlies darbību', //new in cpg1.2.0
    'instruction_parameter' => 'Uzliec parametrus', //new in cpg1.2.0
    'instruction_album' => 'Izvēlies albumu', //new in cpg1.2.0
    'instruction_press' => 'Nospied %s', //new in cpg1.2.0
    'update' => 'Modificē mazos un/vai normālos attēlus', //new in cpg1.2.0
    'update_what' => 'Kas jāmodificē', //new in cpg1.2.0
    'update_thumb' => 'Tikai mazos attēlus', //new in cpg1.2.0
    'update_pic' => 'Tikai modificētos attēlus', //new in cpg1.2.0
    'update_both' => 'Gan mazie, gan normālie attēli', //new in cpg1.2.0
    'update_number' => 'Cik attēlus var modificēt ar vienu klikšķi', //new in cpg1.2.0
    'update_option' => '(Šo parametru samazini, ja ir problēmas ar modificēšanu)', //new in cpg1.2.0
    'filename_title' => 'Faila nosaukums &rArr; Attēla virsraksts', //new in cpg1.2.0
    'filename_how' => 'Kā modificēt attēlu', //new in cpg1.2.0
    'filename_remove' => 'Dzēst .jpg paplašinājumu un _ nomainīt ar atstarpi', //new in cpg1.2.0
    'filename_euro' => 'Konvertēt 2003_11_23_13_20_20.jpg uz 23/11/2003 13:20', //new in cpg1.2.0
    'filename_us' => 'Konevertēt 2003_11_23_13_20_20.jpg uz 11/23/2003 13:20', //new in cpg1.2.0
    'filename_time' => 'Konvertēt 2003_11_23_13_20_20.jpg uz 13:20', //new in cpg1.2.0
    'delete' => 'Attēlu virsrakstu un attēlu dzēšana', //new in cpg1.2.0
    'delete_title' => 'Dzēst attēlu virsrakstus', //new in cpg1.2.0
  'delete_title_explanation' => 'Dzēst visus failu nosaukumus norādītajā albūmā.', //cpg1.4
  'delete_original' => 'Dzēst oriģinālus', //new in cpg1.2.0  
  'delete_original_explanation' => 'Dzēst oriģinālus.', //cpg1.4
  'delete_intermediate' => 'Dzēst starpattēlus', //cpg1.4
  'delete_intermediate_explanation' => 'Dzēst starpattēlus.<br />izmantojiet lai atbrīvot vietu uz diska, ja iestādījumos atslēgts \'veidot starpattēlus\', pēc tam kad Jūs jau pievienojāt failus galerijai.', //cpg1.4
  'delete_replace' => 'Dzēst oriģinālus aizstājot tos ar modificētajiem attēliem', //new in cpg1.2.0  
  'titles_deleted' => 'Visi nosaukumi izvēlētajā albūmā ir dzēsti', //cpg1.4
  'deleting_intermediates' => 'Starpattēli tiekdzēsti, lūdzu uzgaidiet...', //cpg1.4
  'searching_orphans' => 'Tiek meklēti komentāri kas...', //cpg1.4
   'select_album' => 'Izvēlies albumu', //new in cpg1.2.0    
   'delete_orphans' => 'Dzēst komentārus kas palikuši bez failiem (visos albūmos)', //cpg1.3.0   
  'delete_orphans_explanation' => 'Palīdzēs atrast komentārus failiem kuru vairāk nav galerijā.<br />Meklē visos albūmos.', //cpg1.4
  'refresh_db' => 'Pārlādēt inoformāciju par failu izmēru un apjomu', //cpg1.4
  'refresh_db_explanation' => 'Pārskaitļo informāciju par failu izmēru un apjomu. Izmantojiet ja diska kvota tiek attēlota nekorekti vai arī Jūs mainījāt failus manuāli.', //cpg1.4
  'reset_views' => 'Nostādīt skatījumu skaitītāju sākuma stāvolī', //cpg1.4
  'reset_views_explanation' => 'Atbilstošajā albūmā skatījumu skaitu uzstāda uz nulli.', //cpg1.4
   'orphan_comment' => 'Komentāri kas palikuši bez failiem netika atrasti', //cpg1.3.0  
   'delete' => 'Dzēst', //cpg1.3.0 
  'delete_all' => 'Dzēst visu', //cpg1.3.0 
  'delete_all_orphans' => 'Dzēst visus komentārus kas palikuši bez failiem?', //cpg1.4
  'comment' => 'Komentāri: ', //cpg1.3.0     
 'nonexist' => 'Pievienots neeksistējošam dailam # ', //cpg1.3.0
'phpinfo' => 'Rādīt phpinfo', //cpg1.3.0        
  'phpinfo_explanation' => 'Satur tehnisko informāciju par Jūsu serveri.<br />', //cpg1.4
 'update_db' => 'Atjaunot datu bāzi', //cpg1.3.0 
  'update_db_explanation' => 'Ja jūs aizvietojāt galerijas sistēmfailus, pievienojāt modifikācijas vai atjauninājāt galerijas veco versiju uz jaunu, pārliecinieties, ka atjaunojāt datubāzi vienu reizi. Tas izveidos nepieciešamās tabulas un/vai uzstādījumus galerijas datubāzē.',
  'view_log' => 'Rādīt atskaites', //cpg1.4
  'view_log_explanation' => 'Coppermine var sekot dažādām lietotāju darbībām. Jūs varat apskatīt šīs atskaites ja to ierakstīšana ir ieslēgta <a href="admin.php">galerijas administrēšanā</a>.', //cpg1.4
  'versioncheck' => 'Pārbaudīt failu versijas', //cpg1.4
  'versioncheck_explanation' => 'Pārbauda vai visi faili pēc jaunās versijas uzstādīšanas tika aizvietototi.', //cpg1.4
  'bridgemanager' => 'Integrācijas pārvaldnieks', //cpg1.4
  'bridgemanager_explanation' => 'Ieslēdz/izslēdz Coppermine integrāciju (bridging) ar citiem pielikumiem (piemēram forumu).', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File versioncheck.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('VERSIONCHECK_PHP')) $lang_versioncheck_php = array(
  'title' => 'Failu versijas pārbaude', //cpg1.4
  'what_it_does' => 'Šī lapa paredzēta tiem kas atjaunoja Coppermine iestādījumus. Šis skripts salīdzina Jūsu lokālo versiju ar atbilstošu versiju uz servera http://coppermine.sourceforge.net, tādā veidā pažiņojot Jums kādus failus ir jāatjauno.<br />Tos datus kas ir jāatjauno skripts attēlos sarkanā krāsā. Dati kas attēloti dzeltenā krāsā liek pievērst tiem uzmanību. Dati kas attēloti zaļā krāsā ir kārtībā.<br />Uzklikšķiniet uz palīdzības ikonas lai uzzināt papildinformāciju.', //cpg1.4
  'online_repository_unable' => 'Nevaru pieslēgties attālinātajam serverim', //cpg1.4
  'online_repository_noconnect' => 'Coppermine nevarēja pieslēgties attālinātajam serverim. Iemesli var būt divi:', //cpg1.4
  'online_repository_reason1' => 'attālinātais serveris šobrīd nestrādā - pamēģiniet atvērt šo lapu savā pārlūkā: %s - ja neizdevās, mēģiniet vēlāk.', //cpg1.4
  'online_repository_reason2' => 'PHP uz jūsu servera ir atslēgts %s (pēc noklusējuma ieslēgts). Ja jJums ir piekļuve serverim, uzstādiet šo iestādījumu failā <i>php.ini</i> (vai atļaujiet tai tikt nomainītai uz %s).', //cpg1.4
  'online_repository_skipped' => 'Savienojums ar attālināto serveri izlaists', //cpg1.4
  'online_repository_to_local' => 'The script is defaulting to the local copy of the version-files now. The data may be inacurate if you have upgraded Coppermine and you haven\'t uploaded all files. Changes to the files after the release won\'t be taken into account as well.', //cpg1.4
  'local_repository_unable' => 'Unable to connect to the repository on your server', //cpg1.4
  'local_repository_explanation' => 'Coppermine was unable to connect to the repository file %s on your webserver. This probably means that you haven\'t uploaded the repository file to your webserver. Do so now and then try to run this page once more (hit refresh).<br />If the script still fails, your webhost might have disabled parts of <a href="http://www.php.net/manual/en/ref.filesystem.php">PHP\'s filesystem functions</a> completely. In this case, you simply won\'t be able to use this tool at all, sorry.', //cpg1.4
  'coppermine_version_header' => 'Coppermine instalētā versija', //cpg1.4
  'coppermine_version_info' => 'Ir instalēta: %s', //cpg1.4
  'coppermine_version_explanation' => 'Ja domājat ka informācija par Coppermine neatbilst patiesībai, pārliecinieties vai ielādēts svaigākais fails <i>include/init.inc.php</i>', //cpg1.4
  'version_comparison' => 'Versiju salīdzināšana', //cpg1.4
  'folder_file' => 'mape/fails', //cpg1.4
  'coppermine_version' => 'cpg versija', //cpg1.4
  'file_version' => 'faila versija', //cpg1.4
  'webcvs' => 'web svn', //cpg1.4
  'writable' => 'ir ieraksta tiesības', //cpg1.4
  'not_writable' => 'nav ieraksta tiesību', //cpg1.4
  'help' => 'Palīgs', //cpg1.4
  'help_file_not_exist_optional1' => 'Mape/fails neeksistē', //cpg1.4
  'help_file_not_exist_optional2' => 'Mape/fails %s netika atrasts uz servera, tam obligāti ir jābūt. Augšupielādējiet šo failu (izmantojot FTP klientu).', //cpg1.4
  'help_file_not_exist_mandatory1' => 'Mape/fails neeksistē', //cpg1.4
  'help_file_not_exist_mandatory2' => 'Mape/fails %s netika atrasts uz servera, tam obligāti ir jābūt. Augšupielādējiet šo failu (izmantojot FTP klientu).', //cpg1.4
  'help_no_local_version1' => 'Nav lokālā faila versijas', //cpg1.4
  'help_no_local_version2' => 'Skriptam neizdevās noteikt lokālā faila versiju - fails vai nu ir novecojis vai arī rediģēts. Ieteicams atjaunināt failu.', //cpg1.4
  'help_local_version_outdated1' => 'Lokālā versija ir novecojusi', //cpg1.4
  'help_local_version_outdated2' => 'Izskatās ka fails vecāks par uzstādīto Coppermine.. Ja nesen atjauninājāt Coppermine, pārliecinieties vai tika atjaunināts šis fails.', //cpg1.4
  'help_local_version_na1' => 'Neizdevās noteikt svn versiju', //cpg1.4
  'help_local_version_na2' => 'Skriptam neizdevās noteikt faila svn versiju. Jums jāielādē fails no arhīva.', //cpg1.4
  'help_local_version_dev1' => 'Izstrādes versija', //cpg1.4
  'help_local_version_dev2' => 'Izskatās ka fails jaunāks par uzstādīto Coppermine. Tas nozīme, ka vai nu tiek izmantota Coppermine izstrādes versija (ja tā rīkojaties, tad Jūs noteikti zināt ko darāt), vai arī Jūs atjauninājat Coppermine versiju, bet neielādējāt failu include/init.inc.php', //cpg1.4
  'help_not_writable1' => 'Mapei nav rakstīšanas tiesību', //cpg1.4
  'help_not_writable2' => 'Nomainīt tiesības (CHMOD), ļaut skriptam rakstīt mapē %s un citās mapēs, kas atrodas šajā mapē.', //cpg1.4
  'help_writable1' => 'Mapei ir rakstīšanas tiesības', //cpg1.4
  'help_writable2' => 'Mapei %s atļautas rakstīšanas tiešibas. Tas ir riskanti, priekš Coppermine vajadzīgas tikai lasīšanas/izpildīšanas tiesības.', //cpg1.4
  'help_writable_undetermined' => 'Coppermine nevarēja noteikt vai Jums ir rakstīšanas tiesības šajā mapē.', //cpg1.4
  'your_file' => 'jūsu fails', //cpg1.4
  'reference_file' => 'Atšķirību fails', //cpg1.4
  'summary' => 'Kopā', //cpg1.4
  'total' => 'Atzīmēto mapju un failu skaits', //cpg1.4
  'mandatory_files_missing' => 'Nav obligāto failu', //cpg1.4
  'optional_files_missing' => 'Nav neobligāto failu', //cpg1.4
  'files_from_older_version' => 'No vecās Coppermine versijas palikušie faili', //cpg1.4
  'file_version_outdated' => 'Novecojošo failu', //cpg1.4
  'error_no_data' => 'Šis skripts neko neizdarīja un nevar sniegt jebkādu informāciju. Atvainojiet.', //cpg1.4
  'go_to_webcvs' => 'iet uz %s', //cpg1.4
  'options' => 'Iestatījumi', //cpg1.4
  'show_optional_files' => 'rādīt neobligātās mapes un failus', //cpg1.4
  'show_mandatory_files' => 'rādīt obligātās mapes un failus', //cpg1.4
  'show_file_versions' => 'rādīt failu versijas', //cpg1.4
  'show_errors_only' => 'rādīt tikai mapes un failus ar kļūdām', //cpg1.4
  'show_permissions' => 'показать права папок', //cpg1.4
  'show_condensed_output' => 'rādīt saīsināto variantu (priekš ekrānšāviņiem)', //cpg1.4
  'coppermine_in_webroot' => 'Coppermine instalēts servera pamatmapē', //cpg1.4
  'connect_online_repository' => 'mēginājums pieslēgties tiešsaites serverim', //cpg1.4
  'show_additional_information' => 'rādīt papildinformāciju', //cpg1.4
  'no_webcvs_link' => 'nerādīt saites uz svn', //cpg1.4
  'stable_webcvs_link' => 'rādīt saiti uz stabilās versijas svn', //cpg1.4
  'devel_webcvs_link' => 'rādīt saiti uz izstrādājamās versijas svn', //cpg1.4
  'submit' => 'apstiprināt izmaiņas / atsvaidzināt', //cpg1.4
  'reset_to_defaults' => 'uzstādīt pēc noklusējuma', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File view_log.php  //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('VIEWLOG_PHP')) $lang_viewlog_php = array(
  'delete_all' => 'Dzēst visas atskaites', //cpg1.4
  'delete_this' => 'Dzēst šo atskaiti', //cpg1.4
  'view_logs' => 'Skatīt atskaites', //cpg1.4
  'no_logs' => 'Atskaites nav izveidotas.', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File xp_publish.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('XP_PUBLISH_PHP')) {

$lang_xp_publish_client = <<<EOT
<h1>WEB publikāciju palīgs (XP Web Publishing)</h1><p>Šis modulis ļauj sasaistīt  <b>Windows XP</b> WEB publicēšanu ar Coppermine.</p><p>Skat. rakstu
EOT;

$lang_xp_publish_required = <<<EOT
<h2>Nepieciešamais</h2><ul><li>Windows XP, ar WEB publicēšanu.</li><li>Strādājošs Coppermine ar<b>korektu WEB ielādes mehānismu.</b></li></ul><h2>Kā pievienot klienta daļu</h2><ul><li>Labais klikškis
EOT;

$lang_xp_publish_select = <<<EOT
Izvēlaties &quot;Saglabāt kā...&quot;. Saglabājiet failu Jūsu datora cietajā diskā. Pirms saglabāšanas pārbaudiet faila nosaukumu <b>cpg_###.reg</b> (kur ### ir datums ciparu formātā). Samainiet to ja ir vajadzība ( ### jābūt tikai cipariem). Kad fails saglabāts uzklikškiniet uz tā, lai pieregistrētu Jūsu serveri WEB publikāciju palīgā.</li></ul>
EOT;

$lang_xp_publish_testing = <<<EOT
<h2>Testēšana</h2><ul><li>Pārlūkprogrammā izvēlaties failus un nospiediet <b>Publicēt izvēlētos objektus WEBā</b> .</li><li>Apstpriniet izvēli. Spiediet <b>Turpināt</b>.</li><li>Izlēcošajā sarakstā izvēlaties nosaukumu (nosaukums sakrīt ar Jūsu galerijas nosaukumu). Ja vajadzīgā nosaukuma sarakstā nav, pārbaudiet vai ir uzstādīts <b>cpg_pub_wizard.reg</b> kā bija skaidrots augstāk.</li><li>Ja vajadzīgs ierakstiet savus profila datus.</li><li>Izvēlaties albumu vai izveidojiet jaunu.</li><li>Spiediet <b>Turpināt</b>. Sāksies Jūsu attēlu augšupielāde.</li><li>Pēc procesa beigām apskatiet galeriju un pārliecinieties vai attēli ir pievienoti.</li></ul>
EOT;

$lang_xp_publish_notes = <<<EOT
<h2>Piezīmes</h2><ul><li>Pēc attēlu augšupielādes palīgs nerādu nekādus ziņojumus par kļūdām, par veiksmīgu attēlu augšupielādi Jūs varēsiet pārliecināties tikai apskatot galeriju.</li><li>Ja augšupielāde beidzās neveiksmīgi, izvēlaties &quot;Ieslēgt debug režīmu&quot; Coppermine iestatījumos un mēginiet ievietot tikai vienu attēlu, pēc tam pārbaudiet kļūdu ziņojumu failu
EOT;

$lang_xp_publish_flood = <<<EOT
, kas atrodas Jūsu servera Coppermine mapē.</li><li>Lai nepiesārņotu galeriju ar  <i>nevajadzīgiem</i> attēliem, kas ievietoti ar palīga starpniecību, tikai <b>galeriju administratori</b> un <b>lietotāji, kuriem ir tiesības veidot albumus</b>, var izmantot šo moduli.</li>
EOT;

$lang_xp_publish_php = array(
  'title' => 'Coppermine - WEB publikāciju palīgs', //cpg1.4
  'welcome' => 'Laipni lūgti, <b>%s</b>', //cpg1.4
  'need_login' => 'Jums jāienāk galerijā, izmantojot pārlūkprogrammu, pēc tam tikai Jūs varēsiet izmantot šo palīgu.<p/><p>Ienākot galerijā atzīmējiet opciju  <b>Auto ienākšana</b>, ja tāda ir.', //cpg1.4
  'no_alb' => 'Nav neviena albuma, kurā Jūs varētu ievietot attēlus.', //cpg1.4
  'upload' => 'Ievietot attēlus jau esošajā albumā', //cpg1.4
  'create_new' => 'Izveidojiet saviem attēliem jaunu albumu', //cpg1.4
  'album' => 'Albums', //cpg1.4
  'category' => 'Kategorija', //cpg1.4
  'new_alb_created' => 'Jūsu jaunais albums &quot;<b>%s</b>&quot; tika izveidots.', //cpg1.4
  'continue' => 'Spiediet &quot;Tālāk&quot;, lai sāktu attēlu augšupielādi', //cpg1.4
  'link' => 'šo saiti', //cpg1.4
);
}
?>

