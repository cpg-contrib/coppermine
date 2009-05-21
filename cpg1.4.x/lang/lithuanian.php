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

if (!defined('IN_COPPERMINE')) { die('Ne Coppermine...');}

// info about translators and translated language
$lang_translation_info = array(
  'lang_name_english' => 'Lithuanian', //cpg1.4
  'lang_name_native' => 'Lietuviškai', //cpg1.4
  'lang_country_code' => 'lt', //cpg1.4
  'trans_name'=> 'Rimantas',
  'trans_email' => 'vildoc@gmail.com',
  'trans_website' => 'http://c-4.lt/',
  'trans_date' => '2007-01-24',
);

$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('Bitai', 'KB', 'MB');

// Day of weeks and months
$lang_day_of_week = array('Sek', 'Pir', 'Ant', 'Tre', 'Ket', 'Pen', 'Šeš');
$lang_month = array('Sau', 'Vas', 'Kov', 'Bal', 'Geg', 'Bir', 'Lie', 'Rug', 'Rugs', 'Spa', 'Lap', 'Gru');

// Some common strings
$lang_yes = 'Taip';
$lang_no  = 'Ne';
$lang_back = 'ATGAL';
$lang_continue = 'TĘSTI';
$lang_info = 'Informacija';
$lang_error = 'Klaida';
$lang_check_uncheck_all = 'pažymėti/nežymėti viską'; //cpg1.4

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$album_date_fmt =    '%B %d, %Y';
$lastcom_date_fmt =  '%m/%d/%y at %H:%M';
$lastup_date_fmt = '%B %d, %Y';
$register_date_fmt = '%B %d, %Y';
$lasthit_date_fmt = '%B %d, %Y at %I:%M %p';
$comment_date_fmt =  '%B %d, %Y at %I:%M %p';
$log_date_fmt = '%B %d, %Y at %I:%M %p'; //cpg1.4

// For the word censor
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*');

$lang_meta_album_names = array(
  'random' => 'Atsitiktinė byla',
  'lastup' => 'Naujausi atnaujinimai',
  'lastalb'=> 'Atnaujinti albumai',
  'lastcom' => 'Naujausi komentarai',
  'topn' => 'Labiausiai žiūrima',
  'toprated' => 'Labiausiai vertinama',
  'lasthits' => 'Paskutinė peržiūra',
  'search' => 'Paieškos rezultatai',
  'favpics'=> 'Mėstamos bylos',  //cpg1.4
);

$lang_errors = array(
  'access_denied' => 'Jūs neturit teisės čia įeiti.',
  'perm_denied' => 'Jūs neturit teisės atlikti šio veiksmo.',
  'param_missing' => 'Skriptas iškviestas be reikalingų parametrų.',
  'non_exist_ap' => 'Pasirinktas albumas/byla neegzistuoja !',
  'quota_exceeded' => 'Diskas pilnas<br /><br />Disko vieta [quota]K, Bylos naudoja [space]K, pridėdami šia byla viršysite disko tūry.',
  'gd_file_type_err' => 'Kai naudojama GD paveiklėlių galerija leidžiamos tik JPEG ir PNG bylos.',
  'invalid_image' => 'Iliustracija kurią atsiuntėte pažeista GD bilioteka negali jos apdoroti',
  'resize_failed' => 'Neįmanoma sukurti mažos iliustracijos ar sumažinti dydi.',
  'no_img_to_display' => 'Nėra ką rodyti',
  'non_exist_cat' => 'Pasirinkta kategorija neegzistuoja',
  'orphan_cat' => 'Kategorija neturi tėvuko, sutvarkyti peržiūrėtike kategorijų valdyme!',
  'directory_ro' => 'Direktorija \'%s\' neįrašoma, bylos negali būt pašalintos',
  'non_exist_comment' => 'Pasirinktas komentaras neegzistuoja.',
  'pic_in_invalid_album' => 'Byla yra neegzistuojančiame albume (%s)!?',
  'banned' => 'Jūs užblokuotas, įeiti negalite.',
  'not_with_udb' => 'Ši funkcija išjungta, nes ji integruota į forumo programą. Arba jūsų veiksmo nepalaiko galerijos nuostatos ir funkcija turėtų atlikti forumo programa.',
  'offline_title' => 'Išjungta',
  'offline_text' => 'Galerija šiuo metu išjungta - prašome bandyti vėliau',
  'ecards_empty' => 'Nėra ecard įrašų.',
  'action_failed' => 'Klaida.  Coppermine negali atlikti jūsų užklausos.',
  'no_zip' => 'Reikalingos bibliotekos ZIP bylos apdorojimui nėra. Prašome susisiekti su Coppermine administratoriumi.',
  'zip_type' => 'Jūs neturite teisės siųsti ZIP bylų.',
  'database_query' => 'Klaida vykdant duomenų bazės užklausą', //cpg1.4
  'register_globals_on' => 'The PHP setting register_globals is enabled on your server, which is a bad idea in terms of security. It\'s strongly recommended to turn it off. [<a href="http://forum.coppermine-gallery.net/index.php/topic,59569.0.html" rel="external" class="external">more</a>]',
);

$lang_bbcode_help_title = 'bbcode pagalba'; //cpg1.4
$lang_bbcode_help = 'bbcode turi žymenis, kurie leis greitai keisti pradinį teksto stilių ar įterpti nuorodas: 
<li>[b]Pastorinta[/b] =&gt; <b>Pastorinta</b></li>
<li>[i]Pasvirę[/i] =&gt; <i>Pasvirę</i></li>
<li>[url=http://foto.c-4.lt/]Nuorodos tekstas[/url] =&gt; <a href="http://foto.c-4.lt">Nuorodos tekstas</a></li><li>[email]vardas@domainas.lt[/email] =&gt; <a href="mailto:vardas@domainas.lt">vardas@domainas.lt</a></li>
<li>[color=red]tekstas[/color] =&gt; <span style="color:red">tekstas</span></li>
<li>[img]http://coppermine-gallery.net/demo/cpg14x/images/red.gif[/img] => <img src="../images/red.gif" border="0" alt="" /></li>'; //cpg1.4

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
  'home_title' => 'Eiti į titulinį puslapį',
  'home_lnk' => 'Pirmas',
  'alb_list_title' => 'Eiti į albumų sąraša',
  'alb_list_lnk' => 'Albumų sąrašas',
  'my_gal_title' => 'Eiti į mano asmeninę galeriją',
  'my_gal_lnk' => 'Mano galerija',
  'my_prof_title' => 'Eiti į nario sritį', //cpg1.4
  'my_prof_lnk' => 'Mano anketa',
  'adm_mode_title' => 'Pereiti į administravimo būsena',
  'adm_mode_lnk' => 'Admino būsena',
  'usr_mode_title' => 'Pereiti į nario būsena',
  'usr_mode_lnk' => 'Nario būsena',
  'upload_pic_title' => 'Siųsti byas į albumą',
  'upload_pic_lnk' => 'Siųsti bylas',
  'register_title' => 'Tapk nuostabaus įvykio nariu',
  'register_lnk' => 'Registruotis',
  'login_title' => 'Prisijungti prie nuostabaus pasaulio', //cpg1.4
  'login_lnk' => 'Prisijungti',
  'logout_title' => 'Atsijungti nuo savo sąskaitos, Saugumo sumetimais', //cpg1.4
  'logout_lnk' => 'Atsijungti',
  'lastup_title' => 'Rodyti naujausius siuntinius', //cpg1.4
  'lastup_lnk' => 'Naujausi',
  'lastcom_title' => 'Peržiūrėti naujausi komentarai', //cpg1.4
  'lastcom_lnk' => 'Naujausi komentarai',
  'topn_title' => 'Peržiūrėti labiausiai žiūrimus', //cpg1.4
  'topn_lnk' => 'Labiausiai žiūrimi',
  'toprated_title' => 'Peržiūrėti labiausiai vertinamus', //cpg1.4
  'toprated_lnk' => 'Labiausiai vertinami',
  'search_title' => 'Ieškok čia jai nerandi', //cpg1.4
  'search_lnk' => 'Paieška',
  'fav_title' => 'Peržiūrėti mano mėgstamus', //cpg1.4
  'fav_lnk' => 'Mėgstami',
  'memberlist_title' => 'Peržiūrėti narių sąrašą',
  'memberlist_lnk' => 'Narių sąrašas',
  'faq_title' => 'Dažniausiai Užduodami Klausimai',
  'faq_lnk' => 'DUK',
);

$lang_gallery_admin_menu = array(
  'upl_app_title' => 'Patvirtinti naujus siuntinius', //cpg1.4
  'upl_app_lnk' => 'Siuntinių patvirtinimas',
  'admin_title' => 'Nuostatos', //cpg1.4
  'admin_lnk' => 'Nuostatos', //cpg1.4
  'albums_title' => 'Albumų nuostatos', //cpg1.4
  'albums_lnk' => 'Albumai',
  'categories_title' => 'Kategorijų nuostatos', //cpg1.4
  'categories_lnk' => 'Kategorijos',
  'users_title' => 'Narių nuostatos', //cpg1.4
  'users_lnk' => 'Nariai',
  'groups_title' => 'Grupių nuostatos', //cpg1.4
  'groups_lnk' => 'Grupės',
  'comments_title' => 'Peržiūrėti visus komentarus', //cpg1.4
  'comments_lnk' => 'Komentarai',
  'searchnew_title' => 'Dauginis bylų apdorojimas', //cpg1.4
  'searchnew_lnk' => 'Bylų pluoštinis pridėjimas',
  'util_title' => 'Pereiti į administravimo įrankius', //cpg1.4
  'util_lnk' => 'Admino įrankiai',
  'key_title' => 'Raktažodžių žinymas', //cpg1.4
  'key_lnk' => 'Raktažodžių žinymas', //cpg1.4
  'ban_title' => 'Užblokuoti nariai', //cpg1.4
  'ban_lnk' => 'Užblokuoti nariai',
  'db_ecard_title' => 'Peržiūrėti atvirukus', //cpg1.4
  'db_ecard_lnk' => 'Atvirukai',
  'pictures_title' => 'Rūšiuoti mano vaizdus', //cpg1.4
  'pictures_lnk' => 'Rūšiuoti mano vaizdus', //cpg1.4
  'documentation_lnk' => 'Dokumentacija', //cpg1.4
  'documentation_title' => 'Coppermine žinynas', //cpg1.4
);

$lang_user_admin_menu = array(
  'albmgr_title' => 'Sukurti ir tvarkyti mano albumus', //cpg1.4
  'albmgr_lnk' => 'Sukurti/tvarkyti mano albumus',
  'modifyalb_title' => 'Keisti albumus',  //cpg1.4
  'modifyalb_lnk' => 'Keisti albumus',
  'my_prof_title' => 'Mano anketa', //cpg1.4
  'my_prof_lnk' => 'Mano anketa',
);

$lang_cat_list = array(
  'category' => 'Kategorijos',
  'albums' => 'Albumai',
  'pictures' => 'Bylos',
);

$lang_album_list = array(
  'album_on_page' => '%d albumai yra %d puslapiuose(yje)',
);

$lang_thumb_view = array(
  'date' => 'DATA',
  //Sort by filename and title
  'name' => 'BYLOS PAVADINIMAS',
  'title' => 'ANTRAŠTĖ',
  'sort_da' => 'Rūšiuoti pagal datą didėjančiai',
  'sort_dd' => 'Rūšiuoti pagal datą mažėjančiai',
  'sort_na' => 'Rūšiuoti pagal pavadinimą  didėjančiai',
  'sort_nd' => 'Rūšiuoti pagal pavadinimą  mažėjančiai',
  'sort_ta' => 'Rūšiuoti pagal antraštę  didėjančiai',
  'sort_td' => 'Rūšiuoti pagal antraštę  mažėjančiai',
  'position' => 'POZICIJA', //cpg1.4
  'sort_pa' => 'Rūšiuoti pagal poziciją didėjančiai', //cpg1.4
  'sort_pd' => 'Rūšiuoti pagal poziciją mažėjančiai', //cpg1.4
  'download_zip' => 'Atsisiųsti kaip ZIP bylą',
  'pic_on_page' => '%d bylos yra %d puslapiuose(yje)',
  'user_on_page' => '%d nariai %d puslapiuose(yje)',
  'enter_alb_pass' => 'Įveskite albumo slaptažodį', //cpg1.4
  'invalid_pass' => 'Neteisingas slaptažodis', //cpg1.4
  'pass' => 'slaptažodis', //cpg1.4
  'submit' => 'Pateikti', //cpg1.4
);

$lang_img_nav_bar = array(
  'thumb_title' => 'Grįšti į albumą',
  'pic_info_title' => 'Rodyti/slėpti informaciją',
  'slideshow_title' => 'Skaidrių rodymas',
  'ecard_title' => 'Siųsti šią byla kaip atviruką',
  'ecard_disabled' => 'atvirukai išjungti',
  'ecard_disabled_msg' => 'Jūs neturite teisės siųsti atvirukų', //js-alert
  'prev_title' => 'Žiūrėti praėjusią bylą',
  'next_title' => 'Žiūrėti kitą bylą',
  'pic_pos' => 'BYLA %s/%s',
  'report_title' => 'Pranešti apie šia bylą admistratoriui', //cpg1.4
  'go_album_end' => 'Pereiti į pabaigą', //cpg1.4
  'go_album_start' => 'Grįžti į pradžią', //cpg1.4
  'go_back_x_items' => 'atgal %s ', //cpg1.4
  'go_forward_x_items' => 'į priekį %s ', //cpg1.4
);

$lang_rate_pic = array(
  'rate_this_pic' => 'Vertinti šią bylą ',
  'no_votes' => '(Neįvertintas)',
  'rating' => '(vertinimas : %s / 5 vertino %s )',
  'rubbish' => 'Niekas',
  'poor' => 'Silpnas',
  'fair' => 'Šiaip sau',
  'good' => 'Geras',
  'excellent' => 'Puikus',
  'great' => 'Didis darbas',
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
  CRITICAL_ERROR => 'Kritinės klaidos',
  'file' => 'Byla: ',
  'line' => 'Eilutė: ',
);

$lang_display_thumbnails = array(
  'filename' => 'Bylos pavadinimas=', //cpg1.4
  'filesize' => 'Bylos dydis=', //cpg1.4
  'dimensions' => 'Dimensija=', //cpg1.4
  'date_added' => 'Įdėjimo data=', //cpg1.4
);

$lang_get_pic_data = array(
  'n_comments' => '%s komentarai',
  'n_views' => '%s peržiūros',
  'n_votes' => '(%s balsai)',
);

$lang_cpg_debug_output = array(
  'debug_info' => 'Derinimo Info',
  'select_all' => 'Pažymėti viską',
  'copy_and_paste_instructions' => 'Jei ruošiatės prašyti pagalbos coppermine palaikymo forume, nukopijuokite šia derinimo informaciją į užklausos tekstą, kartu su klaidos žinute (jei yra). Pakeiskite slaptažodžius ir kita privačia informciją į *** prieš rašydami. <br />NB: Tai skirta tik informavimui ir tai nereiškia, kad galerijoje yra klaidų.', //cpg1.4
  'phpinfo' => 'rodyti phpinfo',
  'notices' => 'Įspėjimas', //cpg1.4
);

$lang_language_selection = array(
  'reset_language' => 'Įprasta kalba',
  'choose_language' => 'Pasirinkite savo kalbą',
);

$lang_theme_selection = array(
  'reset_theme' => 'Įprasta tema',
  'choose_theme' => 'Pasirinkite temą',
);

$lang_version_alert = array(
  'version_alert' => 'Nepalaikoma versija!', //cpg1.4
  'security_alert' => 'Saugumo įspėjimas!', //cpg1.4.3
  'relocate_exists' => 'Pašalinkite <a href="http://coppermine-gallery.net/forum/index.php?topic=24217.0" target=_blank>relocate_server.php</a> Bylą iš savo serverio!',
  'no_stable_version' => 'Jūs naudojate Coppermine %s (%s) versiją kuri skirta tik patyrusiems vartotojams - ši versija išleista be palaikymo ir jokių garantijų. Naudodami atsakote tik savo rizika arba atsisiųskite stabilę versiją!', //cpg1.4
  'gallery_offline' => '  Galerija šiuo metu išjungta, matoma tik administratoriams. Nepamirškite jos įjungti kai baigsite atnaujinimą.', //cpg1.4
);

$lang_create_tabs = array(
  'previous' => 'buvęs', //cpg1.4
  'next' => 'sekantis', //cpg1.4
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
  'error_wakeup' => "Neįmanoma suprasti įskiepo '%s'", //cpg1.4
  'error_install' => "Neįmanoma įdiegti įskiepo '%s'", //cpg1.4
  'error_uninstall' => " Neįmanoma pašalinti įskiepo '%s'", //cpg1.4
  'error_sleep' => "Neįmanoma pašalinti įskiepo '%s'<br />", //cpg1.4
);

// ------------------------------------------------------------------------- //
// File include/smilies.inc.php
// ------------------------------------------------------------------------- //

if (defined('SMILIES_PHP')) $lang_smilies_inc_php = array(
  'Exclamation' => 'Šauksmas',
  'Question' => 'Klausimas',
  'Very Happy' => 'Labai laimingas',
  'Smile' => 'Šypt',
  'Sad' => 'Liudna',
  'Surprised' => 'Nuostaba',
  'Shocked' => 'Šokas',
  'Confused' => 'Sutrikęs',
  'Cool' => 'Cool',
  'Laughing' => 'Juokas',
  'Mad' => 'Pasiutęs',
  'Razz' => 'Erzi',
  'Embarassed' => 'Geda',
  'Crying or Very sad' => 'Beveik verkia',
  'Evil or Very Mad' => 'Blogis',
  'Twisted Evil' => 'Blogis2',
  'Rolling Eyes' => 'Varto akis',
  'Wink' => 'Wink',
  'Idea' => 'Idėja',
  'Arrow' => 'Ten',
  'Neutral' => 'Neutralu',
  'Mr. Green' => 'ponas Žalias',
);

// ------------------------------------------------------------------------- //
// File addpic.php
// ------------------------------------------------------------------------- //

// void

// ------------------------------------------------------------------------- //
// File mode.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('MODE_PHP')) $lang_mode_php = array(
  0 => 'Paliekate administravimo būsena...',
  1 => 'Įeinate į administravimo būsena...',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
  'alb_need_name' => 'Albumas turi turėti pavadinimą !', //js-alert
  'confirm_modifs' => 'Ar jūs tikras dėl atliktų pakeitimų ?', //js-alert
  'no_change' => 'Jūs nieko nepakeitėte !', //js-alert
  'new_album' => 'Naujas albumas',
  'confirm_delete1' => 'Ar jūs tikrai norite pašalinti šį albumą ?', //js-alert
  'confirm_delete2' => '\nVisos bylos ir komentrai bus pašalinti !', //js-alert
  'select_first' => 'Pasirinkite albumą', //js-alert
  'alb_mrg' => 'Albumo tvarkymas',
  'my_gallery' => '* Mano galerija *',
  'no_category' => '* Be kategorijos *',
  'delete' => 'Šalinti',
  'new' => 'Naujas',
  'apply_modifs' => 'Pateikti pakeitimus',
  'select_category' => 'Pasirinkite kategoriją',
);

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) $lang_banning_php = array(
  'title' => 'Užblokuoti nariai', //cpg1.4
  'user_name' => 'Vardas', //cpg1.4
  'ip_address' => 'IP Adresas', //cpg1.4
  'expiry' => 'Pabaiga (tusčia visam laikui)', //cpg1.4
  'edit_ban' => 'Išsaugoti pakeitimus', //cpg1.4
  'delete_ban' => 'Šalinti', //cpg1.4
  'add_new' => 'Nujas blokavimas', //cpg1.4
  'add_ban' => 'Pridėti', //cpg1.4
  'error_user' => 'Narys nerandamas', //cpg1.4
  'error_specify' => 'Turite nurodyti nario vardą arba IP adresą.', //cpg1.4
  'error_ban_id' => 'Neteisingas bloko ID!', //cpg1.4
  'error_admin_ban' => 'Savęs blokuoti negalima!', //cpg1.4
  'error_server_ban' => 'Jūs norite užblokuiti savo serverį? Tsk tsk, em taip negalima...', //cpg1.4
  'error_ip_forbidden' => 'Jūs negalite užblokuiti šio IP - jis privatus!<br />Jei norite blokuoti privačius IP, pakeiskite tai <a href="admin.php">Nuostos</a> (turi prasmės jei Coppermine veikia ant LAN).', //cpg1.4
  'lookup_ip' => 'Ieškoma IP adreso informacijos', //cpg1.4
  'submit' => 'pirmyn!', //cpg1.4
  'select_date' => 'pasirinkite datą', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File bridgemgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('BRIDGEMGR_PHP')) $lang_bridgemgr_php = array(
  'title' => 'Sujungimo vedlys',
  'warning' => 'Dėmesio: kai naudojate šį vedlį turite suprasti, kad svarbūs duomenys bus perduoti html režimu. Todėl sekite vedlį tik savo PK (ne viešose vietose, kaip, interneto kavinėse), ir nepamirškite išvalyti naršyklės atmintinės ir pašalinkite laikinas bylas kai baigsite darbą.',
  'back' => 'atgal',
  'next' => 'toliau',
  'start_wizard' => 'Pradėti sujungimo procesą',
  'finish' => 'Baigta',
  'hide_unused_fields' => 'paslėpti nenaudojamus formos laukelius (rekomenduojama)',
  'clear_unused_db_fields' => 'valyti klaidingus duomenų bazės įrašus (rekomenduojama)',
  'custom_bridge_file' => 'sava sujungimo byla (jei bylos pavadinimas <i>manobyla.inc.php</i> tada rašykite <i>manobyla</i>)',
  'no_action_needed' => 'Šiame žingsnyje neiko daryti nereikia tiesiog spauskite \'toliau\'.',
  'reset_to_default' => 'Atstatyti pradines reikšmes',
  'choose_bbs_app' => 'pasirinkite aplikacija su kuria sujungsite coppermine ',
  'support_url' => 'Eikite čia šios aplikacijos palaikymui',
  'settings_path' => 'jūsų BBS naudojami keliai',
  'database_connection' => 'duomenų bazės prisijungimai',
  'database_tables' => 'duomenų bazės lentelės',
  'bbs_groups' => 'BBS grupės',
  'license_number' => 'Licenzijos numeris',
  'license_number_explanation' => 'įveskite licenzijos munerį (jei reikia)',
  'db_database_name' => 'Duomenų bazės pavadinimas',
  'db_database_name_explanation' => 'įveskite duomenų bazės pavadinimą kurią naudoja BBS',
  'db_hostname' => 'Duomenų bazės hostas',
  'db_hostname_explanation' => 'Hostname\'as kur yra jūsų mySQL duomenų bazė, paprastai &quot;localhost&quot;',
  'db_username' => 'Duomenų bazės vartotojas',
  'db_username_explanation' => 'mySQL vartotojas kurį naudoja BBS',
  'db_password' => 'Duomenų bazės slaptažodis',
  'db_password_explanation' => 'mySQL vartotojo slaptažodis',
  'full_forum_url' => 'Forumo URL',
  'full_forum_url_explanation' => 'Pilnas URL jūsų BBS (nepamirškite http:// ,pvz http://www.domenas.tld/forumas)',
  'relative_path_of_forum_from_webroot' => 'Bendras forumo kelias',
  'relative_path_of_forum_from_webroot_explanation' => 'Bendras kelias kurį naudoja jūsų BBS (Pvz: jei jūsų BBS yra http://www.domenas.tld/forumas/, yveskite &quot;/forumas/&quot; )',
  'relative_path_to_config_file' => 'Bendras kelias iki jūsų BBS config bylos',
  'relative_path_to_config_file_explanation' => 'Bendras kelias iki jūsų BBS, žiūrint iš Coppermine direktorijos (pvz: &quot;../forumas/&quot; jei BBS yra http://www.domenas.tld/forumas/ ir Coppermine yra http://www.domenas.tld/galerija/)',
  'cookie_prefix' => 'Sausainėlių prišdėlis',
  'cookie_prefix_explanation' => 'tai turi būt jūsų BBS sausainėlių pavadinimas',
  'table_prefix' => 'Lentelės priešdėlis',
  'table_prefix_explanation' => 'Turi sutapti su jūsų pasirinktu priešdėliu BBS, kai pradėjote vedlį.',
  'user_table' => 'Narių lentelė',
  'user_table_explanation' => '(paprastai įprastos reikšmės turėtų tikti, nebent jūsų BBS įdiegtas nestandartiškai)',
  'session_table' => 'Sesijos lentelė',
  'session_table_explanation' => '(paprastai įprastos reikšmės turėtų tikti, nebent jūsų BBS įdiegtas nestandartiškai)',
  'group_table' => 'Grupės lenelės',
  'group_table_explanation' => '(paprastai įprastos reikšmės turėtų tikti, nebent jūsų BBS įdiegtas nestandartiškai)',
  'group_relation_table' => 'Grupės santykių lenelės',
  'group_relation_table_explanation' => '(paprastai įprastos reikšmės turėtų tikti, nebent jūsų BBS įdiegtas nestandartiškai)',
  'group_mapping_table' => 'Grupės mapingo lentelės',
  'group_mapping_table_explanation' => '(paprastai įprastos reikšmės turėtų tikti, nebent jūsų BBS įdiegtas nestandartiškai)',
  'use_standard_groups' => 'Naudoti standartinas BBS grupes',
  'use_standard_groups_explanation' => 'Naudoti standartines grupes (rekomenduojama). Savitos grupės bus panaikintos. Išjunkite šį pasirinkima jei tikrai žinote ką darote!',
  'validating_group' => 'Grupės patirtinimas',
  'validating_group_explanation' => 'Grupės ID jūsų BBS kur narių sąskaitos kurias reikia patvirtinti (paprastai įprastos reikšmės turėtų tikti, nebent jūsų BBS įdiegtas nestandartiškai)',
  'guest_group' => 'Svečių grupė',
  'guest_group_explanation' => 'Grupės ID jūsų BBS kur svečiai (paprastai įprastos reikšmės turėtų tikti, redaguokit jei žinote ką darote)',
  'member_group' => 'Narių grupė',
  'member_group_explanation' => 'Grupės ID jūsų BBS &quot;regular&quot; yra narių sąskaitos (paprastai įprastos reikšmės turėtų tikti, redaguokit jei žinote ką darote)',
  'admin_group' => 'Adminų grupė',
  'admin_group_explanation' => 'Grupės ID jūsų BBS kur yra adminai (paprastai įprastos reikšmės turėtų tikti, redaguokit jei žinote ką darote)',
  'banned_group' => 'Banned grupė',
  'banned_group_explanation' => 'Grupės ID jūsų BBS kur sėdi baninti nariai (paprastai įprastos reikšmės turėtų tikti, redaguokit jei žinote ką darote)',
  'global_moderators_group' => 'Moderatorių grupė',
  'global_moderators_group_explanation' => 'Grupės ID jūsų BBS kur yra moderatoriai (paprastai įprastos reikšmės turėtų tikti, redaguokit jei žinote ką darote)',
  'special_settings' => 'BBS-specialios nuostatos',
  'logout_flag' => 'phpBB versija (atsijungimo vėliava)',
  'logout_flag_explanation' => 'Kokia jūsų BBS versija (tai nurodys kaip atsijungti nuo sąskaitos)',
  'use_post_based_groups' => 'Naudoti post-pagrįstas grupes?',
  'logout_flag_yes' => '2.0.5 ar aukščiau',
  'logout_flag_no' => '2.0.4 ar žemiau',
  'use_post_based_groups_explanation' => '
  Ar turėtų grupės iš BBS turinčios tam tikrą skaičių įrašų įrašytos į sąskaita (leisti grūdėta leidimų sistema) ar tiesiog įpratas grupes (taip lengviau administruoti, rekomenduojama) . Šias nuostatas galėsite pakeisti ir vėliau.',
  'use_post_based_groups_yes' => 'taip',
  'use_post_based_groups_no' => 'ne',
  'error_title' => 'Turite ištaisyti šias klaidas jei norite tęsti. Eikite į buvusį langą.',
  'error_specify_bbs' => 'Turite norodyti kokia aplikaciją norite sujungti su Coppermine.',
  'error_no_blank_name' => 'Negalite palikti tusčio laukelio.',
  'error_no_special_chars' => 'Sujungimo byla negali būt sudaryta iš specialių simbolių išskyrus (_) ir (-)!',
  'error_bridge_file_not_exist' => 'Sujungimo byla %s nerasta serveryje. Ar tikrai atsiuntėte jį?',
  'finalize' => 'išjungti/įjungti BBS integracija',
  'finalize_explanation' => '
  Kolkas nustatos kurias nurodėte įrašytoas į duomenų bazę, bet BBS integracija neįjungta. Jūs galite išjungti ar įjungti ją bet kuriuo metu. Tik nepamirškite admino prisijungimo duomenų Coppermine, jų gali prireikti vėliau. Jei kas nors neveiks eikita ir išjunkite integracija, naudodami Coppermine administravimo sąskaita.',
  'your_bridge_settings' => 'Sujungimo nuostatos',
  'title_enable' => 'Įjungti integracija/sujungimą su %s',
  'bridge_enable_yes' => 'įjungti',
  'bridge_enable_no' => 'išjungti',
  'error_must_not_be_empty' => 'tusčias negali būt',
  'error_either_be' => 'turi būt %s ar %s',
  'error_folder_not_exist' => '%s nėra. Pataisykite reikšmes - %s',
  'error_cookie_not_readible' => 'Coppermine negali perskaityti sausainėlių paadinimų %s.Pataisykite reikšmes - %s, arba eikite į BBS admino sąsaja ir įsitikinkite, kad coppermine gali coppermineskaityti.',
  'error_mandatory_field_empty' => 'Ytusčias negali būt %s - 5veskite tinkamas reikšmes.',
  'error_no_trailing_slash' => 'Negali būt \ laukelyje %s.',
  'error_trailing_slash' => 'Turi būt \ laukelyje %s.',
  'error_db_connect' => 'Prisijungimas su esamai duomenimis pris SQL nepavyko. mySQL atsakymas:',
  'error_db_name' => 'Net jei Coppermine prisijungė prie duomenų bazės serverio, bet nerado duomenų bazės %s. Įsitikinkite, kad reikšmės tesingos %s . mySQL atsakymas:',
  'error_prefix_and_table' => '%s ir ',
  'error_db_table' => 'Nerasta lentelė %s. Įsitikinkite, kad reikšmės tesingos %s.',
  'recovery_title' => 'Sujungimo vadovas: kritinis atstatymas',
  'recovery_explanation' => 'Jei atėjote čia administruoti BBS integracijos, turite prisijungti kaip adminas. Jei negaliteprisijungti dėl to, kad sujungimas neveikia tinkamai, jūs galite jį išjungti šiame puslapyje. Įvesdai savo vartotojo vardą ir slaptažodį jūs neprisjungsite, o tik išjungsite BBS integracija. Peržvelkite dokumentacija.',
  'username' => 'Vardas',
  'password' => 'Slaptažodis',
  'disable_submit' => 'tęsti',
  'recovery_success_title' => 'Indentifikavimas pavyko',
  'recovery_success_content' => 'Jūs sėkmingai išjungėte BBS sujungimą. Coppermine dabar veikia atskirai.',
  'recovery_success_advice_login' => 'Prisijunkite prie administravimo kur galite redaguoti sujungimo nuostatas ar išjungti/įjungti BBS integracija.',
  'goto_login' => 'Eiti į prisijungimo puslapį',
  'goto_bridgemgr' => 'Eiti į sujungimo vadovą',
  'recovery_failure_title' => 'Indentifikavimas nepavyko',
  'recovery_failure_content' => 'Duomenys neteisingi. Įveskite atskiros Coppermine instaliacijos duomenis. ',
  'try_again' => 'bandykite dar',
  'recovery_wait_title' => 'Palaukite laikas dar nesibaigė',
  'recovery_wait_content' => 'Saugumo sumetimais neleidžiami greiti bandymai prisijungti, taigi turite šiek tiek palaukti sekančiam bandymui.',
  'wait' => 'laukti',
  'create_redir_file' => 'Sukurti nukreipimo bylą (rekomenduojama)',
  'create_redir_file_explanation' => 'Nukreipti vartotojus į Coppermine kai tik jie prisijungs prie BBS jums reikia sukurti nukreipimi bylą BBS direktorijoje. Kai pažymėtas šis pasirinkimas sujungimo vadovas mėgins sukurtu bylą, arba duos kodą.',
  'browse' => 'naršyti',
);

// ------------------------------------------------------------------------- //
// File calendar.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('CALENDAR_PHP')) $lang_calendar_php = array(
  'title' => 'Kalendorius', //cpg1.4
  'close' => 'uždaryti', //cpg1.4
  'clear_date' => 'valyti datą', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
  'miss_param' => 'Reikalingi parametrai \'%s\'veiksmas neatliktas !',
  'unknown_cat' => 'Pasirinkta kategorija neegzistuoja duomenų bazėje',
  'usergal_cat_ro' => 'Narių galerijų kategorija negali būt ištrinta !',
  'manage_cat' => 'Tvarkyti kategorijas',
  'confirm_delete' => 'Ar jūs tikrai norite pašalinti šią kategoriją', //js-alert
  'category' => 'Kategorija',
  'operations' => 'Veikmas',
  'move_into' => 'Perkelti į',
  'update_create' => 'Atnaujinti/sukurti kategoriją',
  'parent_cat' => 'Tėvinė kategorija',
  'cat_title' => 'Kategorijos pavadinimas',
  'cat_thumb' => 'Kategorijos iliustracija',
  'cat_desc' => 'Kategorijos aprašymas',
  'categories_alpha_sort' => 'Rūšiuoti pagal abėcėlę (vietoj savo rūšiavimo)', //cpg1.4
  'save_cfg' => 'Išsaugoti pakeitimus', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File admin.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('ADMIN_PHP')) $lang_admin_php = array(
  'title' => 'Galerijos nuostatos', //cpg1.4
  'manage_exif' => 'Tvarkyti exif rodymą', //cpg1.4
  'manage_plugins' => 'Tvarkyti įskiepus', //cpg1.4
  'manage_keyword' => 'Tvarkyti raktažodžius', //cpg1.4
  'restore_cfg' => 'Atstatyti pradinius nustatymus',
  'save_cfg' => 'Išsaugoti pakeitimus',
  'notes' => 'Pastabos',
  'info' => 'Informacija',
  'upd_success' => 'Coppermine nuostatos atnaujintos',
  'restore_success' => 'Coppermine įprastos reikšmės atstatytos',
  'name_a' => 'Pavadinimas didėjančiai',
  'name_d' => 'Pavadinimas mažėjančiai',
  'title_a' => 'Antraštė didėjančiai',
  'title_d' => 'Antraštė mažėjančiai',
  'date_a' => 'Data didėjančiai',
  'date_d' => 'Data mažėjančiai',
  'pos_a' => 'Pozicija didėjančiai', //cpg1.4
  'pos_d' => 'Pozicija mažėjančiai', //cpg1.4
  'th_any' => 'Max reikšmė',
  'th_ht' => 'Aukštis',
  'th_wd' => 'Plotis',
  'label' => 'žymė',
  'item' => 'elementas',
  'debug_everyone' => 'Betkas',
  'debug_admin' => 'Tik Adminas',
  'no_logs'=> 'Off', //cpg1.4
  'log_normal'=> 'Normalu', //cpg1.4
  'log_all' => 'Visi', //cpg1.4
  'view_logs' => 'peržiūrėti', //cpg1.4
  'click_expand' => 'spauskite ant pavadinimo, išsiskleis', //cpg1.4
  'expand_all' => 'Išskleisti visus', //cpg1.4
  'notice1' => '(*) Šie nustymai negali būt pakeisti jei turite bylų duomenų bazėje.', //cpg1.4 - (relocated)
  'notice2' => '(**) Kai pakeisite šį nustatyma, jis įtakos tik nuo šiol pridėtas bylas, todėl patariam nekeisti šių nustatymų jei galerijose įa bylų. Bet galite ir pakeisti jau esamas bylas su &quot;<a href="util.php">admina įrankiais</a> (keisti paveiklėlių dydi)&quot;.', //cpg1.4 - (relocated)
  'notice3' => '(***) Visos istorijos bylos rašomos anglų kalba.', //cpg1.4 - (relocated)
  'bbs_disabled' => 'Funkcia išjungta kai naudojama bb integracija', //cpg1.4
  'auto_resize_everyone' => 'Betkas', //cpg1.4
  'auto_resize_user' => 'Tik nariai', //cpg1.4
  'ascending' => 'didėjančiai', //cpg1.4
  'descending' => 'mažėjančiai', //cpg1.4
);

if (defined('ADMIN_PHP')) $lang_admin_data = array(
  'Pagrindinės nuostatos',
  array('Galerijos pavadinimas', 'gallery_name', 0, 'f=index.htm&amp;as=admin_general_name&amp;ae=admin_general_name_end'), //cpg1.4
  array('Galerijos Aprašymas', 'gallery_description', 0, 'f=index.htm&amp;as=admin_general_description&amp;ae=admin_general_description_end'), //cpg1.4
  array('Galerijos administratoriaus emailas', 'gallery_admin_email', 0, 'f=index.htm&amp;as=admin_general_email&amp;ae=admin_general_email_end'), //cpg1.4
  array('Jūsų coppermine galerijos direktorijos URL (be \'index.php\' ar panašios pabaigos)', 'ecards_more_pic_target', 0, 'f=index.htm&amp;as=admin_general_coppermine-url&amp;ae=admin_general_coppermine-url_end'), //cpg1.4
  array('Pirmo puslapio URL ', 'home_target', 0, 'f=index.htm&amp;as=admin_general_home-url&amp;ae=admin_general_home-url_end'), //cpg1.4
  array('Leisti ZIP-atsisiuntimus iš mėgstamų', 'enable_zipdownload', 1, 'f=index.htm&amp;as=admin_general_zip-download&amp;ae=admin_general_zip-download_end'), //cpg1.4
  array('Laiko zonos skirtumas GMT (dabartinia laikas: ' . localised_date(-1, $comment_date_fmt) . ')','time_offset',0, 'f=index.htm&amp;as=admin_general_time-offset&amp;ae=admin_general_time-offset_end&amp;top=1'), //cpg1.4
  array('Įjungti užkoduotus slaptažodžius (nebeatstatoma)','enable_encrypted_passwords',1, 'f=index.htm&amp;as=admin_general_encrypt_password_start&amp;ae=admin_general_encrypt_password_end&amp;top=1'), // cpg 1.4
  array('Įjungti pagalbos ikonas (pagalba galima tik anglų kalba)','enable_help',9, 'f=index.htm&amp;as=admin_general_help&amp;ae=admin_general_help_end'), //cpg1.4
  array('Įjungti paspaudžiamus raktažodžius paieškoje ','clickable_keyword_search',14, 'f=index.htm&amp;as=admin_general_keywords_start&amp;ae=admin_general_keywords_end'), //cpg1.4
  array('Įjungti įskiepus', 'enable_plugins', 12, 'f=index.htm&amp;as=admin_general_enable-plugins&amp;ae=admin_general_enable-plugins_end'),  //cpg1.4
  array('Leiti užblokuoti privačius IP adresus', 'ban_private_ip', 1,  'f=index.htm&amp;as=admin_general_private-ip&amp;ae=admin_general_private-ip_end'), //cpg1.4
  array('Naršomas bylų pluoštinis pridėjimas', 'browse_batch_add', 1, 'f=index.htm&amp;as=admin_general_browsable_batch_add&amp;ae=admin_general_browsable_batch_add_end'), //cpg1.4

  'Kalbų &amp; Kodavimo nuostatos',
  array('Kalba', 'lang', 5, 'f=index.htm&amp;as=admin_language_language&amp;ae=admin_language_language_end'), //cpg1.4
  array('Pereiti į anglų kalbą jei vertimas nerastas?', 'language_fallback', 1, 'f=index.htm&amp;as=admin_language_fallback&amp;ae=admin_language_fallback_end'), //cpg1.4
  array('Simboliu kodavimas', 'charset', 4, 'f=index.htm&amp;as=admin_language_charset&amp;ae=admin_language_charset_end'), //cpg1.4
  array('Rodyti kalbų sąraša', 'language_list', 1, 'f=index.htm&amp;as=admin_language_list&amp;ae=admin_language_list_end'), //cpg1.4
  array('Rodyti kalbų vėliavas', 'language_flags', 8, 'f=index.htm&amp;as=admin_language_flags&amp;ae=admin_language_flags_end&amp;top=1'), //cpg1.4
  array('Rodyti &quot;atstatyti&quot; kalbų pasirinkime', 'language_reset', 1, 'f=index.htm&amp;as=admin_language_reset&amp;ae=admin_language_reset_end&amp;top=1'), //cpg1.4
  //array('Display previous/next on tabbed pages', 'previous_next_tab', 1), //cpg1.4

  'Temų nuostatos',
  array('Tema', 'theme', 6, 'f=index.htm&amp;as=admin_theme_theme&amp;ae=admin_theme_theme_end'), //cpg1.4
  array('Rodyti temų sąrašą', 'theme_list', 1, 'f=index.htm&amp;as=admin_theme_theme_list&amp;ae=admin_theme_theme_list_end'), //cpg1.4
  array('Rodyti &quot;atstatyti&quot; temų sąraše', 'theme_reset', 1, 'f=index.htm&amp;as=admin_theme_theme_reset&amp;ae=admin_theme_theme_reset_end'), //cpg1.4
  array('Rodyti DUK', 'display_faq', 1, 'f=index.htm&amp;as=admin_theme_faq&amp;ae=admin_theme_faq_end'), //cpg1.4
  array('Savos meniu nuorodos pavadinimas', 'custom_lnk_name', 0,'f=index.htm&amp;as=admin_theme_custom_lnk_name&amp;ae=admin_theme_custom_lnk_name_end'), //cpg1.4
  array('Savos meniu nuorodos URL', 'custom_lnk_url', 0,'f=index.htm&amp;as=admin_language_custom_lnk_url&amp;ae=admin_language_custom_lnk_url_end'), //cpg1.4
  array('Rodyti bbcode pagalbą', 'show_bbcode_help', 1, 'f=index.htm&amp;as=admin_theme_bbcode&amp;ae=admin_theme_bbcode_end&amp;top=1'), //cpg1.4
  array('Rodyti bloką kuriame patvirtinamas  XHTML ir CSS validumas','vanity_block',1, 'f=index.htm&amp;as=vanity_block&amp;ae=vanity_block_end'), //cpg1.4
  array('Kelias iki savi viršūnes(header) įterpimo', 'custom_header_path', 0, 'f=index.htm&amp;as=admin_theme_include_path_start&amp;ae=admin_theme_include_path_end'), //cpg1.4
  array('Kelias iki savi apačios(footer) įterpimo', 'custom_footer_path', 0, 'f=index.htm&amp;as=admin_theme_include_path_start&amp;ae=admin_theme_include_path_end'), //cpg1.4

  'Albumų sąrašo peržiūra',
  array('Pagrindinės lentelės plotis (pikseliais ar %)', 'main_table_width', 0, 'f=index.htm&amp;as=admin_album_table-width&amp;ae=admin_album_table-width_end'), //cpg1.4
  array('Kategorijos lygiu rodymas', 'subcat_level', 0, 'f=index.htm&amp;as=admin_album_category-levels&amp;ae=admin_album_category-levels_end'), //cpg1.4
  array('Albumų rodymo kiekis', 'albums_per_page', 0, 'f=index.htm&amp;as=admin_album_number&amp;ae=admin_album_number_end'), //cpg1.4
  array('Stulpelių kiekis albumų sąraše', 'album_list_cols', 0, 'f=index.htm&amp;as=admin_album_columns&amp;ae=admin_album_columns_end'), //cpg1.4
  array('Mažų paveikslėliu dydis', 'alb_list_thumb_size', 0, 'f=index.htm&amp;as=admin_album_thumbnail-size&amp;ae=admin_album_thumbnail-size_end'), //cpg1.4
  array('Pagrindinio puslapio turinys', 'main_page_layout', 0, 'f=index.htm&amp;as=admin_album_list_content&amp;ae=admin_album_list_content_end'), //cpg1.4
  array('Rodyti pirmo lygio albumų mažus paveikslėlius kategorijose','first_level',1, 'f=index.htm&amp;as=admin_album_first-level_thumbs&amp;ae=admin_album_first-level_thumbs_end'), //cpg1.4
  array('Rūšiuoti pagal abėcėlę (vietoj savo rūšiavimo)','categories_alpha_sort',1, 'f=index.htm&amp;as=admin_album_list_alphasort_start&amp;ae=admin_album_list_alphasort_end'), //cpg1.4
  array('Rodyti nurodytų bylų skaičių','link_pic_count',1, 'f=index.htm&amp;as=admin_album_linked_files_start&amp;ae=admin_album_linked_files_end'), //cpg1.4

  'Thumbnail rodymas',
  array('Thumbnail stulpelių skaičius puslpapyje', 'thumbcols', 0, 'f=index.htm&amp;as=admin_thumbnail_columns&amp;ae=admin_thumbnail_columns_end'), //cpg1.4
  array('Thumbnail eilučių skaičius puslapyje', 'thumbrows', 0, 'f=index.htm&amp;as=admin_thumbnail_rows&amp;ae=admin_thumbnail_rows_end'), //cpg1.4
  array('Maksimalus tabs skaičius', 'max_tabs', 10, 'f=index.htm&amp;as=admin_thumbnail_tabs&amp;ae=admin_thumbnail_tabs_end'), //cpg1.4
  array('Rodyti bylos antrašte (vietoj pavadinimo) po thumbnail', 'caption_in_thumbview', 1, 'f=index.htm&amp;as=admin_thumbnail_display_caption&amp;ae=admin_thumbnail_display_caption_end'), //cpg1.4
  array('Rodyti peržiūrų kiekį po thumbnail', 'views_in_thumbview', 1, 'f=index.htm&amp;as=admin_thumbnail_display_views&amp;ae=admin_thumbnail_display_views_end'), //cpg1.4
  array('Rodyti komentarų kiekį po thumbnail', 'display_comment_count', 1, 'f=index.htm&amp;as=admin_thumbnail_display_comments&amp;ae=admin_thumbnail_display_comments_end'), //cpg1.4
  array('Rodyti siuntėjo vardą po thumbnail', 'display_uploader', 1, 'f=index.htm&amp;as=admin_thumbnail_display_uploader&amp;ae=admin_thumbnail_display_uploader_end'), //cpg1.4
  //array('Display name of admin uploaders below the thumbnail', 'display_admin_uploader', 1, 'f=index.htm&amp;as=admin_thumbnail_display_admin_uploader&amp;ae=admin_thumbnail_display_admin_uploader_end'), //cpg1.4
  array('Rodyti bylos pavadinimo po thumbnail', 'display_filename', 1, 'f=index.htm&amp;as=admin_thumbnail_display_filename&amp;ae=admin_thumbnail_display_filename_end'), //cpg1.4
  //array('Rodyti albumo aprašymą', 'alb_desc_thumb', 1, 'f=index.htm&amp;as=admin_thumbnail_display_description&amp;ae=admin_thumbnail_display_description_end'), //cpg1.4
  array('Įprastas bylų rušiavimas', 'default_sort_order', 3, 'f=index.htm&amp;as=admin_thumbnail_default_sortorder&amp;ae=admin_thumbnail_default_sortorder_end'), //cpg1.4
  array('Mažiausiai balsų, kad byla atsirastų labiausiai vertinami sąraše', 'min_votes_for_rating', 0, 'f=index.htm&amp;as=admin_thumbnail_minimum_votes&amp;ae=admin_thumbnail_minimum_votes_end'), //cpg1.4

  'Paveikslėlių rodymas', //cpg1.4
  array('Pagrindinės lentelės plotis (pikseliais ar %)', 'picture_table_width', 0, 'f=index.htm&amp;as=admin_image_comment_table-width&amp;ae=admin_image_comment_table-width_end'), //cpg1.4
  array('Įprastai bylos informacija rodoma', 'display_pic_info', 1, 'f=index.htm&amp;as=admin_image_comment_info_visible&amp;ae=admin_image_comment_info_visible_end'), //cpg1.4
  array('Paveiklėlio aprašymo ilgis', 'max_img_desc_length', 0, 'f=index.htm&amp;as=admin_image_comment_descr_length&amp;ae=admin_image_comment_descr_length_end'), //cpg1.4
  array('Daugiausiai simbolių žodyje', 'max_com_wlength', 0, 'f=index.htm&amp;as=admin_image_comment_chars_per_word&amp;ae=admin_image_comment_chars_per_word_end'), //cpg1.4
  array('Rodyti filmo juostą', 'display_film_strip', 1, 'f=index.htm&amp;as=admin_image_comment_filmstrip_toggle&amp;ae=admin_image_comment_filmstrip_toggle_end'), //cpg1.4
  array('Rodyti bylos pavadinimą virš filmo juostos', 'display_film_strip_filename', 1, 'f=index.htm&amp;as=admin_image_comment_display_film_strip_filename&amp;ae=admin_image_comment_display_film_strip_filename_end'), //cpg1.4
  array('Elementų skaičius filmo juostoje', 'max_film_strip_items', 0, 'f=index.htm&amp;as=admin_image_comment_filmstrip_number&amp;ae=admin_image_comment_filmstrip_number_end'), //cpg1.4
  array('Skaidrių rodymo intervalas ms (1 s = 1000 ms)', 'slideshow_interval', 0, 'f=index.htm&amp;as=admin_image_comment_slideshow_interval&amp;ae=admin_image_comment_slideshow_interval_end'), //cpg1.4

  'Komentarų nuostatos', //cpg1.4
  array('Filtruoti blogus žodžius komentaruose', 'filter_bad_words', 1, 'f=index.htm&amp;as=admin_image_comment_bad_words&amp;ae=admin_image_comment_bad_words_end'), //cpg1.4
  array('Leisti šypsenas komentaruose', 'enable_smilies', 1, 'f=index.htm&amp;as=admin_image_comment_smilies&amp;ae=admin_image_comment_smilies_end'), //cpg1.4
  array('Leisti daug komentarų vino vartotojo vienai bylai (išjungti floodo apsauga)', 'disable_comment_flood_protect', 1, 'f=index.htm&amp;as=admin_image_comment_flood&amp;ae=admin_image_comment_flood_end'), //cpg1.4
  array('Eilučių kiekis komentaruose', 'max_com_lines', 0, 'f=index.htm&amp;as=admin_image_comment_lines&amp;ae=admin_image_comment_lines_end'), //cpg1.4
  array('Komentaro maksimalus ilgis', 'max_com_size', 0, 'f=index.htm&amp;as=admin_image_comment_length&amp;ae=admin_image_comment_length_end'), //cpg1.4
  array('Įspėti administratoriu apie kometrus', 'email_comment_notification', 1, 'f=index.htm&amp;as=admin_image_comment_admin_notify&amp;ae=admin_image_comment_admin_notify_end'), //cpg1.4
  array('Komentarų rūšiavimas', 'comments_sort_descending', 17, 'f=index.htm&amp;as=admin_comment_sort_start&amp;ae=admin_comment_sort_end'), //cpg1.4
  array('Anoniminių autorių priešdėlis', 'comments_anon_pfx', 0, 'f=index.htm&amp;as=comments_anon_pfx&amp;ae=comments_anon_pfx_end'), //cpg1.4

  'Bylų ir thumbnails nuostatos',
  array('JPEG bylų kokybė', 'jpeg_qual', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_jpeg_quality&amp;ae=admin_picture_thumbnail_jpeg_quality_end'), //cpg1.4
  array('Thumbnail maksimalus dydis <a href="#notice2" class="clickable_option">**</a>', 'thumb_width', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max-dimension&amp;ae=admin_picture_thumbnail_max-dimension_end'), //cpg1.4
  array('Dimensija <a href="#notice2" class="clickable_option">**</a>', 'thumb_use', 7, 'f=index.htm&amp;as=admin_picture_thumbnail_use-dimension&amp;ae=admin_picture_thumbnail_use-dimension_end'), //cpg1.4
  array('Sukurti tarpinį paveikslėlį','make_intermediate',1, 'f=index.htm&amp;as=admin_picture_thumbnail_intermediate_toggle&amp;ae=admin_picture_thumbnail_intermediate_toggle_end'), //cpg1.4
  array('Maksimalus plotis ar aukštis tarpinio paveiklėlio/video <a href="#notice2" class="clickable_option">**</a>', 'picture_width', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_intermediate_dimension&amp;ae=admin_picture_thumbnail_intermediate_dimension_end'), //cpg1.4
  array('Maksimalus siunčiamų bylų dydis (KB)', 'max_upl_size', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max_upload_size&amp;ae=admin_picture_thumbnail_max_upload_size_end'), //cpg1.4
  array('Maksimalus plotis ar aukštis siunčiamų paveiklėliu/video (pikseliais)', 'max_upl_width_height', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max_upload_dimension&amp;ae=admin_picture_thumbnail_max_upload_dimension_end'), //cpg1.4
  array('Automatiškai keisti paveiklėlių dydi jei jei didesnis už maksimalias reikšmes', 'auto_resize', 16, 'f=index.htm&amp;as=admin_picture_thumbnail_auto-resize&amp;ae=admin_picture_thumbnail_auto-resize_end'), //cpg1.4

  'Bylų ir thumbnails (pažangesnės) nuostatos',
  array('Albumai gali būt privatūs (NB: Jei išjungsite šia funkciją visi privatūs albumai taps viešais )', 'allow_private_albums', 1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_private_toggle&amp;ae=admin_picture_thumb_advanced_private_toggle_end'), //cpg1.4
  array('Rodyti privataus albumo ikona neprisijungusiems lankytojams','show_private',1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_private_icon_show&amp;ae=admin_picture_thumb_advanced_private_icon_show_end'), //cpg1.4
  array('Uždrausti simboliai bylų pavadinimuose', 'forbiden_fname_char',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_filename_forbidden_chars&amp;ae=admin_picture_thumb_advanced_filename_forbidden_chars_end'), //cpg1.4
  //array('Accepted file extensions for uploaded pictures', 'allowed_file_extensions',0, 'f=index.htm&amp;as=&amp;ae=_end'), //cpg1.4
  array('Leidžiami paveiklėliu tipai', 'allowed_img_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_pic_extensions&amp;ae=admin_picture_thumb_advanced_pic_extensions_end'), //cpg1.4
  array('Leidžiami filmų tipai', 'allowed_mov_types',0, 'f=index.htm&amp;as=admin_thumbs_advanced_movie&amp;ae=admin_thumbs_advanced_movie_end'), //cpg1.4
  array('Filmai rodomi automatiškai', 'media_autostart',1, 'f=index.htm&amp;as=admin_movie_autoplay&amp;ae=admin_movie_autoplay_end'), //cpg1.4
  array('Leidžiami audio tipai', 'allowed_snd_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_audio_extensions&amp;ae=admin_picture_thumb_advanced_audio_extensions_end'), //cpg1.4
  array('Leidžiami dokumentų tipai', 'allowed_doc_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_doc_extensions&amp;ae=admin_picture_thumb_advanced_doc_extensions_end'), //cpg1.4
  array('Paveiklėliu dydžio keitimo būdas','thumb_method',2, 'f=index.htm&amp;as=admin_picture_thumb_advanced_resize_method&amp;ae=admin_picture_thumb_advanced_resize_method_end'), //cpg1.4
  array('Kelias iki ImageMagick \'vertimo\' parankinio (pvz /usr/bin/X11/)', 'impath', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_im_path&amp;ae=admin_picture_thumb_advanced_im_path_end'), //cpg1.4
  //array('Allowed image types (only valid for ImageMagick)', 'allowed_img_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_allowed_imagetypes&amp;ae=admin_picture_thumb_advanced_allowed_imagetypes_end'), //cpg1.4
  array('Komandinė eilutė ImageMagick', 'im_options', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_im_commandline&amp;ae=admin_picture_thumb_advanced_im_commandline_end'), //cpg1.4
  array('Skaityti EXIF duomenis JPEG bylose', 'read_exif_data', 13, 'f=index.htm&amp;as=admin_picture_thumb_advanced_exif&amp;ae=admin_picture_thumb_advanced_exif_end'), //cpg1.4
  array('Skaityti IPTC duomenis JPEG bylose', 'read_iptc_data', 1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_iptc&amp;ae=admin_picture_thumb_advanced_iptc_end'), //cpg1.4
  array('Albumo direktorija <a href="#notice1" class="clickable_option">*</a>', 'fullpath', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_albums_dir&amp;ae=admin_picture_thumb_advanced_albums_dir_end'), //cpg1.4
  array('Direktorija narių byloms <a href="#notice1" class="clickable_option">*</a>', 'userpics', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_userpics_dir&amp;ae=admin_picture_thumb_advanced_userpics_dir_end'), //cpg1.4
  array('Tarpinio paveiklėlio priešdėlis <a href="#notice1" class="clickable_option">*</a>', 'normal_pfx', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_intermediate_prefix&amp;ae=admin_picture_thumb_advanced_intermediate_prefix_end'), //cpg1.4
  array('Thumbnails  priešdėlis<a href="#notice1" class="clickable_option">*</a>', 'thumb_pfx', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_thumbs_prefix&amp;ae=admin_picture_thumb_advanced_thumbs_prefix_end'), //cpg1.4
  array('Leidimai direktorijoms', 'default_dir_mode', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_chmod_folder&amp;ae=admin_picture_thumb_advanced_chmod_folder_end'), //cpg1.4
  array('Leidimai byloms', 'default_file_mode', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_chmod_files&amp;ae=admin_picture_thumb_advanced_chmod_files_end'), //cpg1.4

  'Narių nuostatos',
  array('Leisti narių regstacija', 'allow_user_registration', 1, 'f=index.htm&amp;as=admin_allow_registration&amp;ae=admin_allow_registration_end'), //cpg1.4
  array('Leisti neprisijungusių lankytojų priėjimą', 'allow_unlogged_access', 1, 'f=index.htm&amp;as=admin_allow_unlogged_access&amp;ae=admin_allow_unlogged_access_end'), //cpg1.4
  array('Registracijai reiklaingas emailo patvirtinimas', 'reg_requires_valid_email', 1, 'f=index.htm&amp;as=admin_registration_verify&amp;ae=admin_registration_verify_end'), //cpg1.4
  array('Įspėti adminą apie registracija', 'reg_notify_admin_email', 1, 'f=index.htm&amp;as=admin_registration_notify&amp;ae=admin_registration_notify_end'), //cpg1.4
  array('Admin aktyvuoja narius', 'admin_activation', 1, 'f=index.htm&amp;as=admin_activation&amp;ae=admin_activation_end'),  //cpg1.4
  array('Leisti dviem nariams turėti tą patį emaila', 'allow_duplicate_emails_addr', 1, 'f=index.htm&amp;as=admin_allow_duplicate_emails_addr&amp;ae=admin_allow_duplicate_emails_addr_end'), //cpg1.4
  array('Įspėti admina apie patvirtimo laukiančias bylas', 'upl_notify_admin_email', 1, 'f=index.htm&amp;as=admin_approval_notify&amp;ae=admin_approval_notify_end'), //cpg1.4
  array('Leisti prisijungusiems nariams peržiūrėti narių sąrašą', 'allow_memberlist', 1, 'f=index.htm&amp;as=admin_user_memberlist&amp;ae=admin_user_memberlist_end'), //cpg1.4
  array('Leisti nariams keisti emaila', 'allow_email_change', 1, 'f=index.htm&amp;as=admin_user_allow_email_change&amp;ae=admin_user_allow_email_change_end'), //cpg1.4
  array('Leisti nariams išsaugoti valdyma jų byloms viešose galerijose', 'users_can_edit_pics', 1, 'f=index.htm&amp;as=admin_user_editpics_public_start&amp;ae=admin_user_editpics_public_end'), //cpg1.4
  array('Klaidingų prisijungimų skaičius po to užblokavimas (vengiat atakų', 'login_threshold', 0, 'f=index.htm&amp;as=admin_user_login_start&amp;ae=admin_user_login_end'), //cpg1.4
  array('Laikinas užblokavimas po klaidingų prisijungimu ', 'login_expiry', 0, 'f=index.htm&amp;as=admin_user_login_start&amp;ae=admin_user_login_end'), //cpg1.4
  array('Įjungti ataskaitas adminui', 'report_post', 1, 'f=index.htm&amp;as=admin_user_enable_report&amp;ae=admin_user_enable_report_end'),  //cpg1.4

// custom profile fields,  //cpg1.4
  'Savi laukeliai narių profiliuose (tusčia jei nenaudojam).
  ilgiems įrašams naudkite 6 laukelį', //cpg1.4
  array('Laukelio 1 pavadinimas', 'user_profile1_name', 0, 'f=index.htm&amp;as=admin_custom&amp;ae=admin_custom_end'), //cpg1.4
  array('Laukelio 2 pavadinimas', 'user_profile2_name', 0), //cpg1.4
  array('Laukelio 3 pavadinimas', 'user_profile3_name', 0), //cpg1.4
  array('Laukelio 4 pavadinimas', 'user_profile4_name', 0), //cpg1.4
  array('Laukelio 5 pavadinimas', 'user_profile5_name', 0), //cpg1.4
  array('Laukelio 6 pavadinimas', 'user_profile6_name', 0), //cpg1.4

  'Savi laukeliai paveikslėlių aprašymuose (tusčia jei nenaudojam)',
  array('Laukelio 1 pavadinimas', 'user_field1_name', 0, 'f=index.htm&amp;as=admin_custom_image&amp;ae=admin_custom_image_end'), //cpg1.4
  array('Laukelio 2 pavadinimas', 'user_field2_name', 0),
  array('Laukelio 3 pavadinimas', 'user_field3_name', 0),
  array('Laukelio 4 pavadinimas', 'user_field4_name', 0),

  'Slapukų nuostatos',
  array('Slapuko pavadinimas', 'cookie_name', 0, 'f=index.htm&amp;as=admin_cookie_name&amp;ae=admin_cookie_name_end'), //cpg1.4
  array('Slapukų kelias', 'cookie_path', 0, 'f=index.htm&amp;as=admin_cookie_path&amp;ae=admin_cookie_path_end'), //cpg1.4

  'Email nuostatos  (paprastai keisti nieko nereikia; jei nežinai ką darai čia nelysk)', //cpg1.4
  array('SMTP Hostas (jei tusčia, sendmail bus naudojama)', 'smtp_host', 0, 'f=index.htm&amp;as=admin_email&amp;ae=admin_email_end'), //cpg1.4
  array('SMTP vartotojo vardas', 'smtp_username', 0), //cpg1.4
  array('SMTP Slaptažodis', 'smtp_password', 0), //cpg1.4

  'Istorija ir statistika statistics', //cpg1.4
  array('Istorijos būsena <a href="#notice3" class="clickable_option">***</a>', 'log_mode', 11, 'f=index.htm&amp;as=admin_logging_log_mode&amp;ae=admin_logging_log_mode_end'), //cpg1.4
  array('Rašyti atvirukus', 'log_ecards', 1, 'f=index.htm&amp;as=admin_general_log_ecards&amp;ae=admin_general_log_ecards_end'), //cpg1.4
  array('Sugoti detalia vertinimo statistika','vote_details',1, 'f=index.htm&amp;as=admin_logging_votedetails&amp;ae=admin_logging_votedetails_end'), //cpg1.4
  array('Saugoti detalia paspaudimų statistika','hit_details',1, 'f=index.htm&amp;as=admin_logging_hitdetails&amp;ae=admin_logging_hitdetails_end'), //cpg1.4

  'Palaikymo nuostatos', //cpg1.4
  array('Įjungti derinimo būsena', 'debug_mode', 9, 'f=index.htm&amp;as=debug_mode&amp;ae=debug_mode_end'), //cpg1.4
  array('Rodyti įspėjimus derinimo būsenoje', 'debug_notice', 1, 'f=index.htm&amp;as=admin_misc_debug_notices&amp;ae=admin_misc_debug_notices_end'), //cpg1.4
  array('Galerija išjungti', 'offline', 1, 'f=index.htm&amp;as=admin_general_offline&amp;ae=admin_general_offline_end'), //cpg1.4
);


// ------------------------------------------------------------------------- //
// File db_ecard.php
// ------------------------------------------------------------------------- //

if (defined('DB_ECARD_PHP')) $lang_db_ecard_php = array(
  'title' => 'Siųsti atvirukus',
  'ecard_sender' => 'Siuntėjas',
  'ecard_recipient' => 'Gavėjas',
  'ecard_date' => 'Data',
  'ecard_display' => 'Rodyti atviruką',
  'ecard_name' => 'Pavadinimas',
  'ecard_email' => 'El. paštas',
  'ecard_ip' => 'IP #',
  'ecard_ascending' => 'didėjančiai',
  'ecard_descending' => 'mažėjančiai',
  'ecard_sorted' => 'Rūšiuoti',
  'ecard_by_date' => 'pagal data',
  'ecard_by_sender_name' => 'pagal siuntėjo vardą',
  'ecard_by_sender_email' => 'pagal siutėjo el.paštą',
  'ecard_by_sender_ip' => 'pagal siutėjo IP',
  'ecard_by_recipient_name' => 'pagal gavėjo vardą',
  'ecard_by_recipient_email' => 'pagal gavėjo el.paštą',
  'ecard_number' => 'rodomi įrašai %s iki %s iš %s',
  'ecard_goto_page' => 'eiti į puslapį',
  'ecard_records_per_page' => 'Įrašai per puslapį',
  'check_all' => 'Pažymėti visus',
  'uncheck_all' => 'Nežymėti nieko',
  'ecards_delete_selected' => 'Trinti pasirinktus',
  'ecards_delete_confirm' => 'Ar jūs tirai norite trinti įrašus? Pažymėkite!',
  'ecards_delete_sure' => 'Taip',
);


// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
  'empty_name_or_com' => 'Įveskite savo vardą ir komentarą',
  'com_added' => 'Jūsų kometras įdėtas',
  'alb_need_title' => 'Nurodykite albumo pavadinimą !',
  'no_udp_needed' => 'Atnaujiniami nereikalingi.',
  'alb_updated' => 'Albumas atnaujintas',
  'unknown_album' => 'Pasirinktas albumas neegsistuoja arba jūs neturite teisės siųsti į šį albumą',
  'no_pic_uploaded' => 'Byla nenusiųsta !<br /><br />Jei tikrai pasirnkote bylą, patikrinkite ar serveris leidžia siųsti...',
  'err_mkdir' => 'Nepavyko sukurti direktorijos %s !',
  'dest_dir_ro' => 'Direktorija %s neįrašoma !',
  'err_move' => 'Neįmanoma perkelti %s į %s !',
  'err_fsize_too_large' => 'Byla per didelė (leidžiama %s x %s) !', //obsolete since cpg1.3 - consider removal in cpg1.4 once upload.php has been overhauled
  'err_imgsize_too_large' => 'Byla per didelė (leidžiama  %s KB) !', //obsolete since cpg1.3 - consider removal in cpg1.4 once upload.php has been overhauled
  'err_invalid_img' => 'Byla ne paveikslėlis !',
  'allowed_img_types' => 'Galite siųsti %s paveikslėlius.',
  'err_insert_pic' => 'Bylos \'%s\' neįmanoma įterpti į albumą ',
  'upload_success' => 'Jūsų byla sėkmingai nusiųsta.<br /><br />Ji bus matoma kai tik adminstratorius patvirtins.',
  'notify_admin_email_subject' => '%s - siuntimo įspėjimas',
  'notify_admin_email_body' => 'Paveikslėlis atsiųstas  %s kurį reikia patvirtinti. Aplankykite %s',
  'info' => 'Informacija',
  'com_added' => 'Komentaras pridėtas',
  'alb_updated' => 'Albumas atnaujintas',
  'err_comment_empty' => 'Komentras tusčias !',
  'err_invalid_fext' => 'Priimami tik šių plėtinių bylos : <br /><br />%s.',
  'no_flood' => 'Atsiprašome bet jūs esate paskutinio kometaro autorius<br /><br />Redaguokite savo įrašą jei norite jį pakeisti',
  'redirect_msg' => 'Būsite nukreiptas.<br /><br /><br />spaskite \'TĘSTI\' jei automatiškai nenukreipiama',
  'upl_success' => 'Jūsų byla sėkmingai pridėta',
  'email_comment_subject' => 'Kometaras Coppermine Photo Gallery',
  'email_comment_body' => 'Kažkas įrašė kometarą jūsų galerijoje. Peržiūrėti',
  'album_not_selected' => 'Albumas nepasirinktas', //cpg1.4
  'com_author_error' => 'Registruotas narys jau naudoja šį vardą. Pasirinkite kitą', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
  'caption' => 'Antraštė',
  'fs_pic' => 'pilno dydžio paveiklėlis',
  'del_success' => 'sėkmingai pašalinta',
  'ns_pic' => 'normalaus dydžio paveiklėlis',
  'err_del' => 'neįmanoma pašalinti',
  'thumb_pic' => 'thumbnail',
  'comment' => 'komentaras',
  'im_in_alb' => 'paveiklėlis albume',
  'alb_del_success' => 'Albumas &laquo;%s&raquo; pašalintas', //cpg1.4
  'alb_mgr' => 'Albumo valdymas',
  'err_invalid_data' => 'Neteisingi duomenis \'%s\'',
  'create_alb' => 'Sukuriamas albumas \'%s\'',
  'update_alb' => 'Atnaujinamas albumas \'%s\' pavadinimu \'%s\' ir indeksu \'%s\'',
  'del_pic' => 'Pašalinti bylą',
  'del_alb' => 'Pašalinti albumą',
  'del_user' => 'Pašalinti narį',
  'err_unknown_user' => 'Pasirinktas narys neegzistuoja !',
  'err_empty_groups' => 'Grupės lentelė nerasta arba ji tusčia!', //cpg1.4
  'comment_deleted' => 'Komentaras sėkmingai pašalintas',
  'npic' => 'Paveiklėliai', //cpg1.4
  'pic_mgr' => 'Paveiklėlių valdymas', //cpg1.4
  'update_pic' => 'Atnaujinami paveiklėliai \'%s\' pavadinimu \'%s\' ir indeksu \'%s\'', //cpg1.4
  'username' => 'Nario vardas', //cpg1.4
  'anonymized_comments' => '%s komentarai anoniminiai', //cpg1.4
  'anonymized_uploads' => '%s vieši siuntiniai anoniminiai', //cpg1.4
  'deleted_comments' => '%s komentarai pašalinti', //cpg1.4
  'deleted_uploads' => '%s vieši siuntiniai pašalinti', //cpg1.4
  'user_deleted' => 'nays %s pašalintas', //cpg1.4
  'activate_user' => 'Aktyvūs nariai', //cpg1.4
  'user_already_active' => 'Saskaita jau aktyvuota', //cpg1.4
  'activated' => 'Aktyvuota', //cpg1.4
  'deactivate_user' => 'Išjungti nariai', //cpg1.4
  'user_already_inactive' => 'Sąskaita jau neaktyvi', //cpg1.4
  'deactivated' => 'Išjungti', //cpg1.4
  'reset_password' => 'Atstayti slaptažodžius', //cpg1.4
  'password_reset' => 'Slaptažodžiai atstatyti į %s', //cpg1.4
  'change_group' => 'Pakeisti pirminę grupę', //cpg1.4
  'change_group_to_group' => 'Keičiama iš %s į %s', //cpg1.4
  'add_group' => 'Pridėti antrinę grupę', //cpg1.4
  'add_group_to_group' => 'Pridedami nariai %s į grupę %s. Jis jau narys %s kaip pirminės ir kaip %s antrinės grupės.', //cpg1.4
  'status' => 'Būsena', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File displayecard.php
// ------------------------------------------------------------------------- //

if (defined('DISPLAYECARD_PHP')) {

$lang_displayecard_php = array(
  'invalid_data' => 'Jūsų atviruko duomenys pažeisti pašto kliento. Patikrinkite visą nuorodą.', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File displayimage.php
// ------------------------------------------------------------------------- //

if (defined('DISPLAYIMAGE_PHP')){

$lang_display_image_php = array(
  'confirm_del' => 'Ar jūs tikrai norite pašalinti  ? \\nKomentarai taip pat bus pašalinti.', //js-alert
  'del_pic' => 'Pašalinti šią bylą',
  'size' => '%s x %s pikseliai',
  'views' => '%s kartus',
  'slideshow' => 'Skaidrės',
  'stop_slideshow' => 'Stabdyti skaidres',
  'view_fs' => 'Spauskite peržiūrėti tikro dydžio',
  'edit_pic' => 'Redaguoti bylos informacija', //cpg1.4
  'crop_pic' => 'Karpyti ir sukti',
  'set_player' => 'Keisti grotuvą',
);

$lang_picinfo = array(
  'title' =>'Bylos informacija',
  'Filename' => 'Pavadinimas',
  'Album name' => 'Albumo pavadinimas',
  'Rating' => 'Vertinimas (%s balsai)',
  'Keywords' => 'Raktažodžiai',
  'File Size' => 'Dydis',
  'Date Added' => 'Data', //cpg1.4
  'Dimensions' => 'Dydis',
  'Displayed' => 'Rodyta',
  'URL' => 'URL', //cpg1.4
  'Make' => 'Sukūrta', //cpg1.4
  'Model' => 'Modelis', //cpg1.4
  'DateTime' => 'Data laikas', //cpg1.4
  'ISOSpeedRatings'=>'ISO', //cpg1.4
  'MaxApertureValue' => 'Max Apertura', //cpg1.4
  'FocalLength' => 'Židimio nuotolis', //cpg1.4
  'Comment' => 'Kometarai',
  'addFav'=>'Pridėti į mėgstamus',
  'addFavPhrase'=>'Mėgstami',
  'remFav'=>'Pašalinti iš mėgstamų',
  'iptcTitle'=>'IPTC Antarštė',
  'iptcCopyright'=>'IPTC Teisės',
  'iptcKeywords'=>'IPTC Raktas',
  'iptcCategory'=>'IPTC Kategorija',
  'iptcSubCategories'=>'IPTC Subkategorija',
  'ColorSpace' => 'Spalvos tarpas', //cpg1.4
  'ExposureProgram' => 'Išlaikymo programa', //cpg1.4
  'Flash' => 'Bykstė', //cpg1.4
  'MeteringMode' => 'Metering Mode', //cpg1.4
  'ExposureTime' => 'Išlaikymo laikas', //cpg1.4
  'ExposureBiasValue' => 'Exposure Bias', //cpg1.4
  'ImageDescription' => 'Vaizdo aprašymas', //cpg1.4
  'Orientation' => 'Orentacija', //cpg1.4
  'xResolution' => 'X Resolution', //cpg1.4
  'yResolution' => 'Y Resolution', //cpg1.4
  'ResolutionUnit' => 'Resolution Unit', //cpg1.4
  'Software' => 'Programinė įranga', //cpg1.4
  'YCbCrPositioning' => 'YCbCrPositioning', //cpg1.4
  'ExifOffset' => 'Exif Offset', //cpg1.4
  'IFD1Offset' => 'IFD1 Offset', //cpg1.4
  'FNumber' => 'FNumber', //cpg1.4
  'ExifVersion' => 'Exif Versija', //cpg1.4
  'DateTimeOriginal' => 'DateTime Original', //cpg1.4
  'DateTimedigitized' => 'DateTime digitized', //cpg1.4
  'ComponentsConfiguration' => 'Components Configuration', //cpg1.4
  'CompressedBitsPerPixel' => 'Compressed Bits Per Pixel', //cpg1.4
  'LightSource' => 'Šviesos šaltinis', //cpg1.4
  'ISOSetting' => 'ISO Nuostatos', //cpg1.4
  'ColorMode' => 'Spalvų režimas', //cpg1.4
  'Quality' => 'Kokybė', //cpg1.4
  'ImageSharpening' => 'Image Sharpening', //cpg1.4
  'FocusMode' => 'Focus Mode', //cpg1.4
  'FlashSetting' => 'Bykstės nuostatos', //cpg1.4
  'ISOSelection' => 'ISO Pasirinkimas', //cpg1.4
  'ImageAdjustment' => 'Image Adjustment', //cpg1.4
  'Adapter' => 'Adapteris', //cpg1.4
  'ManualFocusDistance' => 'Rankinis židinio nuotolis', //cpg1.4
  'DigitalZoom' => 'Skaitmenins priartinimas', //cpg1.4
  'AFFocusPosition' => 'AF Focus Position', //cpg1.4
  'Saturation' => 'Saturacija', //cpg1.4
  'NoiseReduction' => 'Triukšmo mažinimas', //cpg1.4
  'FlashPixVersion' => 'Flash Pix Versija', //cpg1.4
  'ExifImageWidth' => 'Exif Image Plotis', //cpg1.4
  'ExifImageHeight' => 'Exif Image Aukštis', //cpg1.4
  'ExifInteroperabilityOffset' => 'Exif Interoperability Offset', //cpg1.4
  'FileSource' => 'Bylos šaltinis', //cpg1.4
  'SceneType' => 'Scenos tipas', //cpg1.4
  'CustomerRender' => 'Customer Render', //cpg1.4
  'ExposureMode' => 'Exposure režimas', //cpg1.4
  'WhiteBalance' => 'Baltas balansas', //cpg1.4
  'DigitalZoomRatio' => 'Skaitmeninio priartinimo koeficientas', //cpg1.4
  'SceneCaptureMode' => 'Scenos užfiksavimo režimas', //cpg1.4
  'GainControl' => 'Gain Valdymas', //cpg1.4
  'Contrast' => 'Kontrastas', //cpg1.4
  'Sharpness' => 'Aštrumas', //cpg1.4
  'ManageExifDisplay' => 'Tvarkyti Exif rodymą', //cpg1.4
  'submit' => 'Pateikti', //cpg1.4
  'success' => 'Informacija atnaujinta sėkmingai.', //cpg1.4
  'details' => 'Smulkiau', //cpg1.4
);

$lang_display_comments = array(
  'OK' => 'OK',
  'edit_title' => 'Redaguoti šį komentarą',
  'confirm_delete' => 'Ar tikrai norite pašalinti komentarą ?', //js-alert
  'add_your_comment' => 'Pridėti komentarą',
  'name'=>'Vardas',
  'comment'=>'Komentaras',
  'your_name' => 'Anon',
  'report_comment_title' => 'Pranešti apie kometarą', //cpg1.4
);

$lang_fullsize_popup = array(
  'click_to_close' => 'Spauskite uždarymui',
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
  'title' => 'Siųsti atviruką',
  'invalid_email' => '<font color="red"><b>Dėmesio</b></font>: neteisingas elpašto adresas:', //cpg1.4
  'ecard_title' => 'Atvirukas iš %s ',
  'error_not_image' => 'Tik paveiklėiai gali būt naudojami atvirukuose.',
  'view_ecard' => 'Alternatyvi nuoroda jei atvirukas neteisingai rodomas', //cpg1.4
  'view_ecard_plaintext' => 'Atviruko peržiūrėjimui nukopijuokite nuoroda į naršyklės adreso laukelį:', //cpg1.4
  'view_more_pics' => 'Peržiūrėti daugiau paveikslėlių !', //cpg1.4
  'send_success' => 'Jūsų atvirukas išsiųstas',
  'send_failed' => 'Atsiprašome, bet serveris negalėjo išsiųsti atviruko...',
  'from' => 'Nuo',
  'your_name' => 'Jūsų vardas',
  'your_email' => 'Jūsų el.pašto adresas',
  'to' => 'To',
  'rcpt_name' => 'Gavėjo vardas',
  'rcpt_email' => 'Gavėjo el.pašto adresas',
  'greetings' => 'Antraštė', //cpg1.4
  'message' => 'Žinutė', //cpg1.4
  'ecards_footer' => 'Atsiųsta %s iš IP %s išt %s (galerijos laikas)', //cpg1.4
  'preview' => 'atviruko vaizdas', //cpg1.4
  'preview_button' => 'Žiūrėti', //cpg1.4
  'submit_button' => 'Siųsti atviruką', //cpg1.4
  'preview_view_ecard' => 'Alternati nuorodą į atviruką. Neveikia peržiūrėjimui.', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File report_file.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('REPORT_FILE_PHP') || defined('DISPLAYREPORT_PHP')) $lang_report_php =array(
  'title' => 'Pranešti administratoriui', //cpg1.4
  'invalid_email' => '<font color="red"><b>Dėmesio</b></font>: neteisingas elpašto adresas:', //cpg1.4
  'report_subject' => 'Pranešimas iš %s galerijoje %s', //cpg1.4
  'view_report' => 'Alternatyvi nuoroda jei pranešimas nematomas', //cpg1.4
  'view_report_plaintext' => 'Pranešimo peržiūrėjimui nukopijuokite nuoroda į naršyklės adreso laukelį::', //cpg1.4
  'view_more_pics' => 'Galerija', //cpg1.4
  'send_success' => 'Pranešimas išsiųstas', //cpg1.4
  'send_failed' => 'Atsiprašome, bet serveris negalėjo išsiųsti pranešimo...', //cpg1.4
  'from' => 'Nuo', //cpg1.4
  'your_name' => 'Jūsų vardas', //cpg1.4
  'your_email' => 'Jūsų el.pašto adresas', //cpg1.4
  'to' => 'To', //cpg1.4
  'administrator' => 'Administratorius', //cpg1.4
  'subject' => 'Tema', //cpg1.4
  'comment_field_name' => 'Pranešimas komentaruose "%s"', //cpg1.4
  'reason' => 'Priežastis', //cpg1.4
  'message' => 'Žinutė', //cpg1.4
  'report_footer' => 'Atsiųsta %s iš IP %s išt %s (galerijos laikas)', //cpg1.4
  'obscene' => 'nepadorus', //cpg1.4
  'offensive' => 'agresyvus', //cpg1.4
  'misplaced' => 'neįtemą', //cpg1.4
  'missing' => 'dingęs', //cpg1.4
  'issue' => 'negalima peržiūrėti', //cpg1.4
  'other' => 'kita', //cpg1.4
  'refers_to' => 'Bylos pranešimas į', //cpg1.4
  'reasons_list_heading' => 'pranešimo priežastis:', //cpg1.4
  'no_reason_given' => 'be priežasties', //cpg1.4
  'go_comment' => 'Į kometarus', //cpg1.4
  'view_comment' => 'Pilnas pranešimas su kometarais', //cpg1.4
  'type_file' => 'byla', //cpg1.4
  'type_comment' => 'komentaras', //cpg1.4
  'invalid_data' => 'Jūsų pranešimo duomenys pažeisti pašto kliento. Patikrinkite visą nuorodą.', //cpg1.4

);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
  'pic_info' => 'bylos informacija',
  'album' => 'Albumas',
  'title' => 'Antraštė',
  'filename' => 'Pavadinimas', //cpg1.4
  'desc' => 'Aprašymas',
  'keywords' => 'Raktažodžiai',
  'new_keyword' => 'Naujas raktažodis', //cpg1.4
  'new_keywords' => 'Naujas raktažodis rastas', //cpg1.4
  'existing_keyword' => 'Esantis raktažodis', //cpg1.4
  'pic_info_str' => '%s &times; %s - %s KB - %s peržiūros - %s balsai',
  'approve' => 'Patvirtinti bylą',
  'postpone_app' => 'Atidėti patvirtinimą',
  'del_pic' => 'Pašalinti bylą',
  'del_all' => 'Pašalinti visas bylas', //cpg1.4
  'read_exif' => 'Skaityti EXIF info dar karta',
  'reset_view_count' => 'Atnaujinti skaitliuka',
  'reset_all_view_count' => 'Atnaujinti visus skaitliukus', //cpg1.4
  'reset_votes' => 'Atnaujinti balsus',
  'reset_all_votes' => 'Atnaujinti visus balsus', //cpg1.4
  'del_comm' => 'Šalinti komentarus',
  'del_all_comm' => 'Šalinti komentarus', //cpg1.4
  'upl_approval' => 'Siuntinio patvirtinimas', //cpg1.4
  'edit_pics' => 'Redaguoti bylą',
  'see_next' => 'Žiurėti sekančia bylą',
  'see_prev' => 'Žiurėti buvusia bylą',
  'n_pic' => '%s bylos',
  'n_of_pic_to_disp' => 'rodyti bylas',
  'apply' => 'Išsaugoti pakeitimus',
  'crop_title' => 'Coppermine Picture Editor',
  'preview' => 'Peržiūrėti',
  'save' => 'Išsaugoti paveiklėlį',
  'save_thumb' =>'Išsaugoti thumbnail',
  'gallery_icon' => 'Padaryta ikona', //cpg1.4
  'sel_on_img' =>'Pasirinkimas ant paveiklėlio!', //js-alert
  'album_properties' =>'Albumo ypatybės', //cpg1.4
  'parent_category' =>'Tėvinė kategorija', //cpg1.4
  'thumbnail_view' =>'Thumbnail rodymas', //cpg1.4
  'select_unselect' =>'pažymėti/nežymėti viską', //cpg1.4
  'file_exists' => "Byla '%s' jau yra.", //cpg1.4
  'rename_failed' => "Nepavyko pervadinti '%s' į '%s'.", //cpg1.4
  'src_file_missing' => "Šaltinio byla '%s' nerasta.", // cpg 1.4
  'mime_conv' => "Neįmanoma konvertuoti '%s' į '%s'",//cpg1.4
  'forb_ext' => 'Uždraustas plėtinys.',//cpg1.4
);

// ------------------------------------------------------------------------- //
// File faq.php
// ------------------------------------------------------------------------- //

if (defined('FAQ_PHP')) $lang_faq_php = array(
  'faq' => 'Dažniausiai užduodami klausimai',
  'toc' => 'Turinys',
  'question' => 'Klausimas: ',
  'answer' => 'Atsakymas: ',
);

if (defined('FAQ_PHP')) $lang_faq_data = array(
  'Pagrindiniai DUK',
  array('Kodėl aš turiu registruotis?', 'Registracija gali būt privaloma arba ne, priklausomai kaip adiminstracija nuspers. Užsiregistravę nariai turi papildomų fukcijų tokių kaip: balsavimas, komentavimas, bylų siuntimas ir pan.', 'allow_user_registration', '1'),
  array('Kaip užsiregistruoti?', 'Ekite į skiltį &quot;Registruotis&quot; ir užpildykite anketą. <br /> Po registracijos turėtumėt gauti aktyvacijos laišką, jame bus nuoodos kaip toliau elgtis. Jūsų narystė turi būt aktyvuota, kitaip negalėsite naudotis paslaugomis.', 'allow_user_registration', '1'), //cpg1.4
  array('Kaip prisijungti?', 'Ekite į skiltį &quot;Prisijungti&quot;, įveskite savo vartotojo vardą ir slaptažodį. Pažymėkite &quot;Prisimink mane&quot; jei norite vėliau eidami į svetainę nereiktų įvedinėti duomenų.<br /><b>SVARBU: Sausainėliai turi būt priimami ir neištrinkite jei norite, kad paslauga &quot;Prisimink mane&quot;.</b>', 'offline', 0),
  array('Kodėl aš negaliu prisijungti?', 'Ar kai registravotės paspaudėte aktyvavimo nuoroda gautame laiške?. Nuoroda aktyvuoja jūsų narystę. Jei tai neaktyvavimo problema susisiekite su svetainės administratoriumi.', 'offline', 0),
  array('Ka daryt? Pamiršau slaptažodį.', 'Spauskite &quot;Pamiršau slaptažodį&quot; . ', 'offline', 0),
  //array('What if I changed my email address?', 'Just simply login and change your email address through &quot;Profile&quot;', 'offline', 0),
  array('Kaip išsaugoti paveikslėlį į  &quot;Mėgstami&quot;?', 'Spaskite ant paveikslėlio ir ant &quot;paveiklėlių info&quot; nuoroda (<img src="images/info.gif" width="16" height="16" border="0" alt="Informacija" />); sekite žemiau ir spauskite nuorodą &quot;Pridėti į mėgstamus&quot;.<br />Administratorius gali būt įjungęs informacijos rodymąT.<br />IMPORTANT:Sausainėliai turi būt priimami ir nepašalinami.', 'offline', 0),
  array('Kaip vertinti bylą?', 'Žiūrėdami į paveiklėlį labai to norėkite, beto apačioje yra vertinimo skalė.', 'offline', 0),
  array('Kaip komentuoti?', 'Peržiūros lango apačioje yra pateikimo forma.', 'offline', 0),
  array('Kaip siųsti bylas?', 'Eikite į &quot;siųsti bylas&quot;ir pasirinkita albumą į kurį norite siųsti. Spauskite &quot;Browse,&quot; pasirinkite bylą, spauskite &quot;open.&quot; Jei norite pridėkite pavadinimą ir aprašymą. Spaukite &quot;Tęsti&quot;.<br /><br />
Alternatyvu pasiųlymas, tiems kurie naudojasi <b>Windows XP</b>, galite tiesiogiai siųsti bylas iš PC naudodami  XP Publikavimo vedlį.<br />
Instrukcijos ir detalesnė informacija <a href="xp_publish.php">čia.</a>
', 'allow_private_albums', 1), //cpg1.4
  array('Kur man siųsti nuotraukas?', 'Jūs galite siųsti bylas į viena iš savo albumu kurie yra "Mano galerijoje" . Administratorius taip pag gali leisti siųsti bylas ir į kitas galerijas.', 'allow_private_albums', 0),
  array('Kaip kurti, redaguoti, šalinti albumus &quot;Mano galerijoje&quot;?', 'Jūs turėtumėte būt admino būsenoje<br /> Spauskite &quot;Albumai&quot; ir &quot;naujas&quot;. Pakeiskite &quot;Naujas albumas&quot; į norima pavadinima.<br />Taip pat galite keisti kitus albumus.<br />Spauskite &quot;Pateikti pakeitimus &quot;.', 'allow_private_albums', 0),
  array('Kas yra sausainėliai?', 'Sausainėliai (Cookies) teksto dalis kuri siunčiama iš svetainės į jūsų kompiuterį<br />Sausainėliai palengvina prisijungimą, ir suteikia galimybė svetainei atpažinti jos lankytoja.', 'offline', 0),
  array('Kur gauti šią programa savo svetainei?', 'Coppermine yra nemokama Multimedia Gallery, išleista pagal GNU GPL. Tinka daugeliui platformų. Aplankykite <a href="http://coppermine.sf.net/">Coppermine namų puslapį</a> sužinosite daugiau.', 'offline', 0),

  'Svetainės navigacija',
  array('Kas yra &quot;Albumų sąrašas&quot;?', 'Čia rodomi visi svetainės albumai ir nuorodos į juos. Jei jūs neesate kategorijoje bus rodoma visa galerija ir nuorodas į kategorijas.', 'offline', 0),
  array('Kas yra &quot;Mano galerija&quot;?', '  Čia galite susikurti savo nuotarukų galerija su albumais.', 'allow_private_albums', 1), //cpg1.4
  array('Kuo skiriasi &quot;Admino būsena&quot; nuo &quot;Nario būsena&quot;?', 'Kai įjungta admino būsena leidžiama keisti galerijas.', 'allow_private_albums', 0),
  array('Kas yra &quot;Siųsti bylas&quot;?', 'Čia jūs galite siųsti bylas (dydį ir formatą nusako administratorius) į galeriją.', 'allow_private_albums', 0),
  array('Kas yra &quot;Naujausi&quot;?', 'Čia galite peržiūrėti naujausias bylas kurios atsiųstos vėliausiai.', 'offline', 0),
  array('Kas yra &quot;Naujausi komentarai&quot;?', 'Čia rodomi naujausi komentarai kuriuos paliko lankytojai.', 'offline', 0),
  array('Kas yra &quot;Labiausiai žiūrima&quot;?', 'Čia rodomi labiausiai žiūrimi paveiklėliai.', 'offline', 0),
  array('Kas yra &quot;Labiausiai vertinami&quot;?', '
  
  Čia rodomi lankytojų vertinami paveiklėliai  <br />Vertinimas <img src="images/rating5.gif" width="65" height="14" border="0" alt="best" /> (didis darbas) iki <img src="images/rating0.gif" width="65" height="14" border="0" alt="worst" /> (niekas)', 'offline', 0),
  array('Kas yra &quot;Mėgstami&quot;?', 'Čia saugomi mėgstamos bylos kurių sąrašas saugomas sausainėlių pavidalu.', 'offline', 0),
);


// ------------------------------------------------------------------------- //
// File forgot_passwd.php
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) $lang_forgot_passwd_php = array(
  'forgot_passwd' => 'Slaptažodžio priminimas',
  'err_already_logged_in' => 'Jūs jau prisijungęs !',
  'enter_email' => 'Įveskite savo el. pašto adresą', //cpg1.4
  'submit' => 'primink',
  'illegal_session' => 'Slaptažodžio priminimo sesija bloga arba baigėsi galiojimas.', //cpg1.4
  'failed_sending_email' => 'Slaptažodžio priminimo laiškas neišsiųstas.',
  'email_sent' => 'Laiškas su vartotojo vardu ir slaptažodžiu išsiųstas į %s', //cpg1.4
  'verify_email_sent' => 'Laiškas buvo išsiųstas į %s. Prašome pasitikrinti paštą.', //cpg1.4
  'err_unk_user' => 'Pasirinktas narys neegzistuoja!',
  'account_verify_subject' => '%s - naujo slaptažodžio prašymas', //cpg1.4
  'account_verify_body' => 'Sveiki.<br />Jūs prašėte naujo slaptažodžio. Jei norite tęsti spauskite nuorodą: 
  %s', //cpg1.4
  'passwd_reset_subject' => '%s - jūsų naujas slaptažodis', //cpg1.4
  'passwd_reset_body' => 'Čia jūsų naujas slaptažodis:
Nario vardas: %s
Slaptažodis: %s
Spauskite %s, jei norite prisijungti.', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
  'group_name' => 'Grupė', //cpg1.4
  'permissions' => 'Leidimai', //cpg1.4
  'public_albums' => 'Siuntimas į viešus albumus', //cpg1.4
  'personal_gallery' => 'Asmeninė galerija', //cpg1.4
  'upload_method' => 'Siuntimo metodas', //cpg1.4
  'disk_quota' => 'Kvota', //cpg1.4
  'rating' => 'Vertinimas', //cpg1.4
  'ecards' => 'Atvirukai', //cpg1.4
  'comments' => 'Komentarai', //cpg1.4
  'allowed' => 'Leista', //cpg1.4
  'approval' => 'Patvirtimas', //cpg1.4
  'boxes_number' => 'Siuntimų skaičius', //cpg1.4
  'variable' => 'Kintantis', //cpg1.4
  'fixed' => 'fiksuotas', //cpg1.4
  'apply' => 'Išsaugoti pakeitimus',
  'create_new_group' => 'Sukurti naują grupę',
  'del_groups' => 'Šalinti pasirinkta (as) grupę (es)',
  'confirm_del' => 'Įspėjimas, jei pašalinsite grupę, nariai kurie buvo joje taps standartiniais nariais!\n\nTęsti ?', //js-alert
  'title' => 'Grupių administravimas',
  'num_file_upload' => 'Bylų siuntimas', //cpg1.4
  'num_URI_upload' => 'URL siuntimas', //cpg1.4
  'reset_to_default' => 'Nustyti pradinį pavadinimą (%s) - rekomenduojama!', //cpg1.4
  'error_group_empty' => 'Grupės lentelė tusčia !<br /><br />Pagrindinės grupės sukurtos, prašome perkrauti puslapį', //cpg1.4
  'explain_greyed_out_title' => 'Kodėl čia pilka?', //cpg1.4
  'explain_guests_greyed_out_text' => 'Jūs negalite keisti šios grupės nuostatų todėl, kad nustėte &quot; Leisti neprisijungusių lankytojų priėjimą &quot;  į &quot;NE&quot;, nustymų skiltyje. Visi svečiai  (grapių %s nariai) nieko negali daryti, tik prisijungti.', //cpg1.4
  'explain_banned_greyed_out_text' => 'Jūs negalite keisti nuostatų nes grupės %s nariai vistiek nieko negali daryti.', //cpg1.4
  'group_assigned_album' => 'priskirti albumai', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
  'welcome' => 'Sveiki !',
);

$lang_album_admin_menu = array(
  'confirm_delete' => 'Ar tikrai norite pašalinti albumą ? \\nVisi komantarai bus pašalinti.', //js-alert
  'delete' => 'PAŠALINTI',
  'modify' => 'NUOSTATOS',
  'edit_pics' => 'REDAGUOTI BYLĄ',
);

$lang_list_categories = array(
  'home' => 'Pirmas',
  'stat1' => '<b>[pictures]</b> bylos <b>[albums]</b> albumai <b>[cat]</b> kategorijos su <b>[comments]</b> komentarais peržiūrėta <b>[views]</b> kartus',
  'stat2' => '<b>[pictures]</b> bylos <b>[albums]</b> albumai peržiūrėta <b>[views]</b> kartus',
  'xx_s_gallery' => '%s Galerija',
  'stat3' => '<b>[pictures]</b> bylos <b>[albums]</b> albumai su <b>[comments]</b> komentarais peržiūrėta <b>[views]</b> kartus',
);

$lang_list_users = array(
  'user_list' => 'Narių sąrašas',
  'no_user_gal' => 'Nėra narių galerijų',
  'n_albums' => '%s albumas(ai)',
  'n_pics' => '%s byla(os)',
);

$lang_list_albums = array(
  'n_pictures' => '%s bylos',
  'last_added' => ', naujausia pridėta %s',
  'n_link_pictures' => '%s nuorodytų bylų', //cpg1.4
  'total_pictures' => '%s bylų išviso', //cpg1.4
);

}

// ------------------------------------------------------------------------- //
// File keywordmgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('KEYWORDMGR_PHP')) $lang_keywordmgr_php = array(
  'title' => 'Raktažodžių valdymas', //cpg1.4
  'edit' => 'redaguoti', //cpg1.4
  'delete' => 'trinti', //cpg1.4
  'search' => 'ieškoti', //cpg1.4
  'keyword_test_search' => 'ieškoti %s naujam lange', //cpg1.4
  'keyword_del' => 'trinti šį raktažodį %s', //cpg1.4
  'confirm_delete' => 'Ar jūs tirai norite trinti raktažodį %s iš visos galerijos?', //cpg1.4  // js-alert
  'change_keyword' => 'keisti raktažodį', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
  'login' => 'Prisijungimas',
  'enter_login_pswd' => 'Įveskite nario vardą ir slaptažodį',
  'username' => 'Vardas',
  'password' => 'Slaptažodis',
  'remember_me' => 'Atsimink mane',
  'welcome' => 'Labas %s ...',
  'err_login' => '*** Neprisijungta, prašome bandyti dar ***',
  'err_already_logged_in' => 'Jūs jau prisijungęs !',
  'forgot_password_link' => 'Pamiršau slaptažodį',
  'cookie_warning' => 'Įspėjimas jūsų naršyklė nepriima sausainėlių (cookies)', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
  'logout' => 'Atsijungti',
  'bye' => 'Iki greito %s ...',
  'err_not_loged_in' => 'Jūs neprisinjugęs !',
);

// ------------------------------------------------------------------------- //
// File minibrowser.php  //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('MINIBROWSER_PHP')) $lang_minibrowser_php = array(
  'close' => 'uždaryti', //cpg1.4
  'submit' => 'OK', //cpg1.4
  'up' => 'lygiu aukščiau', //cpg1.4
  'current_path' => 'kelias', //cpg1.4
  'select_directory' => 'prašome pasirinkti direktoriją', //cpg1.4
  'click_to_close' => 'Spauskite uždaryti',
);

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
  'upd_alb_n' => 'Atnaujinti albumą %s',
  'general_settings' => 'Pagrindinės nuostatos',
  'alb_title' => 'Albumo pavadinimas',
  'alb_cat' => 'Albumo kategorija',
  'alb_desc' => 'Albumo aprašymas',
  'alb_keyword' => 'Albumo raktažodžiai', //cpg1.4
  'alb_thumb' => 'Albumo thumbnail',
  'alb_perm' => 'Leidimai šiam albumui',
  'can_view' => 'Albumas gali būt peržiūrimas',
  'can_upload' => 'Lankytojai gali siųsti bylas',
  'can_post_comments' => 'Lankytojai gali komentuoti',
  'can_rate' => 'Lankytojai gali vertinti',
  'user_gal' => 'Narių galerija',
  'no_cat' => '* Be kategorijos *',
  'alb_empty' => 'Albumas tusčias',
  'last_uploaded' => 'Naujausia atsiųsta',
  'public_alb' => 'Visi (Viešas albumas)',
  'me_only' => 'Tik aš',
  'owner_only' => 'Tik albumo savininkas (%s)',
  'groupp_only' => 'Grupės \'%s\' nariai',
  'err_no_alb_to_modify' => 'Nėra albumo negalima redaguoti.',
  'update' => 'Atnaujinti albumą',
  'reset_album' => 'Atstatyti albumą', //cpg1.4
  'reset_views' => 'Atstatyti peržiūrų skaitliuką į &quot;0&quot;  %s', //cpg1.4
  'reset_rating' => 'Atstatyti vertinimus visų bylų albume %s', //cpg1.4
  'delete_comments' => 'Pašalinti visus komentarus albume %s', //cpg1.4
  'delete_files' => '%sNegrįžtamai%s pašalinti visas bylas albume %s', //cpg1.4
  'views' => 'peržiūroas', //cpg1.4
  'votes' => 'balsai', //cpg1.4
  'comments' => 'komentarai', //cpg1.4
  'files' => 'bylos', //cpg1.4
  'submit_reset' => 'patvirtinti pakeitimus', //cpg1.4
  'reset_views_confirm' => 'Aš tuo tikras', //cpg1.4
  'notice1' => '(*) prikaulo nuo %sgrupių%s nuostatų',  //cpg1.4 //(do not translate %s!)
  'alb_password' => 'Albumo slaptažodis', //cpg1.4
  'alb_password_hint' => 'Albumo slaptažodžio užuomina', //cpg1.4
  'edit_files' =>'Redaguoti bylas', //cpg1.4
  'parent_category' =>'Tėvinė kategorija', //cpg1.4
  'thumbnail_view' =>'Thumbnail peržiūra', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File phpinfo.php
// ------------------------------------------------------------------------- //

if (defined('PHPINFO_PHP')) $lang_phpinfo_php = array(
  'php_info' => 'PHP info',
  'explanation' => 'Čia yra PHP funkcijos sugeneruotas atsakymas <a href="http://www.php.net/phpinfo">phpinfo()</a>, rodomas Coppermine.',
  'no_link' => '<br />Kitiems phpinfo rodymas gali būt rizikingas, todėl šis puslapis matomas tik prisijungusiam kaip adminas.',
);

// ------------------------------------------------------------------------- //
// File picmgr.php //cpg1.4
// ------------------------------------------------------------------------- //
if (defined('PICMGR_PHP')) $lang_picmgr_php = array(
  'pic_mgr' => 'Paveikslėlių valdymas', //cpg1.4
  'select_album' => 'Pasirinkite albumą', //cpg1.4
  'delete' => 'Šalinti', //cpg1.4
  'confirm_delete1' => 'Ar tikrai norite pašalinti šį paveiklėlį?', //cpg1.4
  'confirm_delete2' => '\nNegrįžtamai bus pašalinta.', //cpg1.4
  'apply_modifs' => 'Išsaugoti pakeitimus', //cpg1.4
  'confirm_modifs' => 'Patvirtinti pakeitimus', //cpg1.4
  'pic_need_name' => 'Paveiklėlis turi turėti pavadinimą !', //cpg1.4
  'no_change' => 'Jūs nieko nekeitėte !', //cpg1.4
  'no_album' => '* nėra albumo *', //cpg1.4
  'explanation_header' => ' Savitą rūšiavimą galite nustyti čia bet jis bus veiksnus jei', //cpg1.4
  'explanation1' => 'administratorius nustatęs "Default sort order for files" nuostatose "Position descending" ar "Position ascending" ', //cpg1.4
  'explanation2' => 'nariai pasirinkę "Pozicija mažėjančiai" ar "Pazicija didėjančiai" thumbail puslapyje (narystės nustaymuose)', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File pluginmgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('PLUGINMGR_PHP')){

$lang_pluginmgr_php = array(
  'confirm_uninstall' => 'Ar jūs tikrai norite pašalinti šį plėtinį', //cpg1.4
  'confirm_delete' => 'Ar jūs tikrai norite ištrinti šį plėtinį', //cpg1.4
  'pmgr' => 'Plėtinių valdymas', //cpg1.4
  'name' => 'Pavadinimas', //cpg1.4
  'author' => 'Autorius', //cpg1.4
  'desc' => 'aprašymas', //cpg1.4
  'vers' => 'v', //cpg1.4
  'i_plugins' => 'Įdiegti plėtiniai', //cpg1.4
  'n_plugins' => 'Neįdiegti plėtiniai', //cpg1.4
  'none_installed' => 'Niekas neįdiegta', //cpg1.4
  'operation' => 'Veiksmas', //cpg1.4
  'not_plugin_package' => 'Atsiųsta byla na plėtinys.', //cpg1.4
  'copy_error' => 'Klaida kopijuojant plėtinį į direktoriją.', //cpg1.4
  'upload' => 'Siųsti', //cpg1.4
  'configure_plugin' => 'Pletinių nuostatos', //cpg1.4
  'cleanup_plugin' => 'Valyti plėtinius', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
  'already_rated' => 'Atsiprašome, bet jūs jau vertinote šia bylą',
  'rate_ok' => 'Jūsų balsas priimtas',
  'forbidden' => 'Savų bylų vertinti negalima.',
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT

Kadangi {SITE_NAME} puslapio administratoriai bando pašalinti arba redaguoti bet kokią apskritai nepageidaujamą medžiagą kaip įmanoma greičiau, tačiau nėra įmanoma peržiūrėti kiekvieno talpinimo, todėl Jūs turite pripažinti, kad visi talpinimai, padaryti šioje svetainėje, išreiškia autoriaus požiūrį ir nuomonę, ir ne administratoriai ar puslapio redaktoriai nuo dabar bus laikomi atsakingi už pateiktą informaciją.<br />
<br />
Jūs įsipareigojate netalpinti jokių įžeidžiančių, nepadorių, vulgarių, šmeižikiškų, bjaurių, grasinančių, seksualiai orientuotų arba kitos medžiagos, kuri galėtų pažeisti bet kokią galiojančią teisę. Jūs sutinkate, kad svetainės {SITE_NAME} redaktorius, administratorius ir moderatoriai turi teisę pašalinti arba redaguoti bet kurią informaciją bet kuriuo metu. Kaip vartotojas Jūs sutinkate, kad bet kuri informacija, kurią Jūs įvedate, bus patalpinta šioje duomenų bazėje. Ši informacija nebus perduota trečiai šaliai be Jūsų sutikimo, taip pat puslapio redaktorius ir administratorius negali atsakyti už bet kokias vykdytas laužimosi atakas.<br />
<br />
Šis puslapis naudoja sausainėlius informacijai dėti į Jūsų vietinį kompiuterį. Šie sausainėliai pagerina puslapio žiūrėjimo galimybes. El. pašto adresas naudojamas tik patvirtinti Jūsų registracijos detalėms ir slaptažodžiui.
<br />
<br />
Paspausdami žemiau 'Aš sutinku', Jūs sutinkate su šiomis sąlygomis.
EOT;

$lang_register_php = array(
  'page_title' => 'Narių registracija',
  'term_cond' => 'Terminai ir sąlygos',
  'i_agree' => 'Aš sutinku',
  'submit' => 'Pateikti registraciją',
  'err_user_exists' => 'Nario vardas kurį pasirinkote jau yra prašome pasirinkti kitą',
  'err_password_mismatch' => 'Slaptažodžiai nesutampa, badykite dar kartą',
  'err_uname_short' => 'Nario vardas turi būti bent dviejų simbolių',
  'err_password_short' => 'Slaptažodis turi būti bent dviejų simbolių',
  'err_uname_pass_diff' => 'nario vardas ir slaptažodis turi būt skirtingi',
  'err_invalid_email' => 'Neteisingas el. pašto adresas.',
  'err_duplicate_email' => 'Kitas narys jau užsiregistravo su šiuo el. pašto adresu',
  'enter_info' => 'Nario registracijos anketa',
  'required_info' => 'Privaloma informacija',
  'optional_info' => 'Nebūtina informacija',
  'username' => 'Nario vardas',
  'password' => 'Slaptažodis',
  'password_again' => 'Slaptažodis dar kartą',
  'email' => 'El. pašto adresas',
  'location' => 'Vietovė',
  'interests' => 'Pomėgiai',
  'website' => 'Puslapis',
  'occupation' => 'Išsilavinimas',
  'error' => 'Klaida',
  'confirm_email_subject' => '%s - Registracijos patvirtinimas',
  'information' => 'Informacija',
  'failed_sending_email' => 'Registracijos patvirtinmo laišas neišsiųstas !',
  'thank_you' => 'Dėkojame už registracija.<br /><br />Laiškas su nuorodoms kaip aktyvuoti anketą nusiųsti į jūsų el. pašto dėžutę.',
  'acct_created' => 'Jūsų anketa sukurta galite prisijungti prie jos su savo nario vardu ir slaptažodžiu.',
  'acct_active' => 'Jūsų anketa aktyvuota galite prisijungti prie jos su savo nario vardu ir slaptažodžiu.',
  'acct_already_act' => 'Anketa jau aktyvuota!', //cpg1.4
  'acct_act_failed' => 'Ši anketa negali būt aktyvuojama !',
  'err_unk_user' => 'Pasirinktas narys neegzistuoja !',
  'x_s_profile' => '%s anketa',
  'group' => 'Grupė',
  'reg_date' => 'Įstojimo',
  'disk_usage' => 'Užima disko',
  'change_pass' => 'Keisti slaptažodį',
  'current_pass' => 'Dabartinis slapatžodis',
  'new_pass' => 'Naujas slaptažodis',
  'new_pass_again' => 'Naujas slaptažodis dar kartą',
  'err_curr_pass' => 'Dabartinis slaptažodis neteisingas',
  'apply_modif' => 'Išsaugoti pakeitimus',
  'change_pass' => 'Pakeisti mano slaptažodį',
  'update_success' => 'Jūsų anketa atnaujinta',
  'pass_chg_success' => 'Jūsų slpatažodis pakeistas',
  'pass_chg_error' => 'Jūsų slpatažodis ne pakeistas',
  'notify_admin_email_subject' => '%s - Registracijos pranešimas',
  'last_uploads' => 'Paskutinė atsiųsta byla.<br />Spauskite pažiūrėti visus', //cpg1.4
  'last_comments' => 'Naujausias komentaras.<br />Spauskita pažiūrėti visus', //cpg1.4
  'notify_admin_email_body' => 'Naujas narys "%s" užsiregistravo jūsų galerijoje',
  'pic_count' => 'Atsiųstos bylos', //cpg1.4
  'notify_admin_request_email_subject' => '%s - Registracijos prašymas', //cpg1.4
  'thank_you_admin_activation' => 'Dėkoju jums.<br /><br />Jūsų prašymas tapti nariu nusiųstas administracijai. Jūs gausite laišką jei jus patvirtins.  ', //cpg1.4
  'acct_active_admin_activation' => 'Anketa aktyvi ir laiškas nusiųstas nariai.', //cpg1.4
  'notify_user_email_subject' => '%s - Registracijos pranešimas', //cpg1.4
);

$lang_register_confirm_email = <<<EOT
Dėkojame už registracija {SITE_NAME}

Norėdami aktyvuoti narystę "{USER_NAME}", Jums reikia paspausti ant nurodytos žemiau nurodytos nuorodos arba nukopijuoti ir įdėti šią eilutę į Jūsų interneto naršyklę.

<a href="{ACT_LINK}">{ACT_LINK}</a>

Pagarbiai,

{SITE_NAME} Administracija

EOT;

$lang_register_approve_email = <<<EOT
Naujas narys "{USER_NAME}" užsiregistravo jūsų galerijoje.

Jums reikia paspausti ant nurodytos žemiau nurodytos nuorodos arba nukopijuoti ir įdėti šią eilutę į Jūsų interneto naršyklę.

<a href="{ACT_LINK}">{ACT_LINK}</a>

EOT;

$lang_register_activated_email = <<<EOT
Jūsų anketa buvo patvirtinta ir aktyvuota.

Galite prisijungti <a href="{SITE_LINK}">{SITE_LINK}</a> savo vardu "{USER_NAME}"


Pagarbiai,

{SITE_NAME} Administracija

EOT;
}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
  'title' => 'Komentarų apžvalga',
  'no_comment' => 'Nėra komentarų',
  'n_comm_del' => '%s komentaras (ai) pašalinti',
  'n_comm_disp' => 'Rodyti komentarus',
  'see_prev' => 'Buvę',
  'see_next' => 'Toliau',
  'del_comm' => 'Šalinti pasirinktus',
  'user_name' => 'Vardas', //cpg1.4
  'date' => 'Data', //cpg1.4
  'comment' => 'Komentras', //cpg1.4
  'file' => 'Byla', //cpg1.4
  'name_a' => 'pagal vardą mažėjančiai', //cpg1.4
  'name_d' => 'pagal vardą didėjančiai', //cpg1.4
  'date_a' => 'pagal datą mažėjančiai', //cpg1.4
  'date_d' => 'pagal datą didėjančiai', //cpg1.4
  'comment_a' => 'pagal komentarą mažėjančiai', //cpg1.4
  'comment_d' => 'pagal komentarą didėjančiai', //cpg1.4
  'file_a' => 'pagal bylą mažėjančiai', //cpg1.4
  'file_d' => 'pagal bylą didėjančiai', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File search.php                                                           //
// ------------------------------------------------------------------------- //


if (defined('SEARCH_PHP')){

$lang_search_php = array(
  'title' => 'Ieškoti bylų kolekcijos', //cpg1.4
  'submit_search' => 'ieškoti', //cpg1.4
  'keyword_list_title' => 'Raktažodžių sąrašas', //cpg1.4
  'keyword_msg' => 'Sąrašas viršuje neapima visko. Jis neturi žodžių iš foto pavadinimo ir aprašymo. Pabandykit pilno teksto paieška.',  //cpg1.4
  'edit_keywords' => 'Redaguoti raktažodžius', //cpg1.4
  'search in' => 'Ieškoti:', //cpg1.4
  'ip_address' => 'IP adresas', //cpg1.4
  'fields' => 'Ieškoti', //cpg1.4
  'age' => 'Amžius', //cpg1.4
  'newer_than' => 'Naujesni kaip', //cpg1.4
  'older_than' => 'Senesni kaip', //cpg1.4
  'days' => 'dienos', //cpg1.4
  'all_words' => 'Su visai žodžiais (IR)', //cpg1.4
  'any_words' => 'Su bet kuriuo žodžiu (AR)', //cpg1.4
);

$lang_adv_opts = array(
  'title' => 'Pavadinimas', //cpg1.4
  'caption' => 'Antraštė', //cpg1.4
  'keywords' => 'Raktažodžiai', //cpg1.4
  'owner_name' => 'Savininko vardas', //cpg1.4
  'filename' => 'Bylos pavadinimas', //cpg1.4
);

}

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
  'page_title' => 'Ieškoti naujų bylų',
  'select_dir' => 'Pasirikite direktoriją',
  'select_dir_msg' => 'Ši funkcija leidžia jums pridėti daug bylų kurias įkėlėte į serverį per FTP.<br /><br />Pasirinkite direktoriją kur jūs jas įkėlėte.', //cpg1.4
  'no_pic_to_add' => 'Nėra bylų pridėjimui',
  'need_one_album' => 'Jums reikia turėti bent vieną albumą',
  'warning' => 'Įspėjimas',
  'change_perm' => 'sistema negali rašyti direktorijoje, jums reikia pakeisti leidimus iš 755 į 777 !',
  'target_album' => '<b>Įdėti bylas iš &quot;</b>%s<b>&quot; į </b>%s',
  'folder' => 'Direktorija',
  'image' => 'byla',
  'album' => 'Albumas',
  'result' => 'Rezultatas',
  'dir_ro' => 'Neįrašoma. ',
  'dir_cant_read' => 'Neperskaitoma. ',
  'insert' => 'Pridedamos naujos bylos į galerija',
  'list_new_pic' => 'Naujų bylų sąrašas',
  'insert_selected' => 'Įterpti pasirinktas bylas',
  'no_pic_found' => 'Naujų bylų nerasta',
  'be_patient' => 'Prašome kantrybės, sistemai reikia laiko pridedant bylas',
  'no_album' => 'nepasirnktas albumas',
  'result_icon' => 'spauskite palčiau arba perkraukite',  //cpg1.4
  'notes' =>  '<ul>'.
                          '<li><b>OK</b> : reiškia, kad byla sėkmingai pridėta '.
                          '<li><b>DP</b> : reiškia, kad byla dubliuojasi ir jau yra duomenų bazėje '.
                          '<li><b>PB</b> : reiškia, kad byla nepridėta ir direktorija nerašoma'.
                          '<li><b>NA</b> : reiškia, kad jūs nepasirnkote albumo į kur perkelti bylas spauskite \'<a href="javascript:history.back(1)">atgal</a>\' ir pasirinkite albumą. Jei neturite albumo <a href="albmgr.php">sukurkite</a></li>'.
                          '<li>Jei  OK, DP, PB \'ženklai\' nepasirodo spauskite ant bylos ar PHP negamina klaidos'.
                          '<li>Jei naršyklė užstringa, perkraukite ją'.
                          '</ul>',
  'select_album' => 'pasirinkite albumą',
  'check_all' => 'Pažymėti viską',
  'uncheck_all' => 'Nežymėti nieko',
  'no_folders' => 'Nėra direktorijos "albums" direktorijoje. Sukurkite bent vieną direktoriją ir siųskite į ją bylas FTP..', //cpg1.4
   'albums_no_category' => 'Albumai be kategorijų', //cpg1.4 // album pulldown mod, added by frogfoot
  'personal_albums' => '* Asmeniniai albumai', //cpg1.4 // album pulldown mod, added by frogfoot
  'browse_batch_add' => 'Naršanti sąsaja (rekomenduojama)', //cpg1.4
  'edit_pics' => 'Redaguoti bylas', //cpg1.4
  'edit_properties' => 'Albumo nuostatos', //cpg1.4
  'view_thumbs' => 'Thumbnail peržiūra', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File stat_details.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('STAT_DETAILS_PHP')) $lang_stat_details_php = array(
  'show_hide' => 'rodyti/slėpti šį stulpelį', //cpg1.4
  'vote' => 'Balsavimų detalės', //cpg1.4
  'hits' => 'Paspaudimų detalės', //cpg1.4
  'stats' => 'Balsavimų statistika', //cpg1.4
  'sdate' => 'Data', //cpg1.4
  'rating' => 'Vertinimas', //cpg1.4
  'search_phrase' => 'Ieškoma frazė', //cpg1.4
  'referer' => 'Referis', //cpg1.4
  'browser' => 'Naršyklė', //cpg1.4
  'os' => 'Peracinė sistema', //cpg1.4
  'ip' => 'IP', //cpg1.4
  'sort_by_xxx' => 'Rūšiuoti pagal %s', //cpg1.4
  'ascending' => 'didėjančiai', //cpg1.4
  'descending' => 'mažėjančiai', //cpg1.4
  'internal' => 'int', //cpg1.4
  'close' => 'uždaryti', //cpg1.4
  'hide_internal_referers' => 'slpti vidinius referius', //cpg1.4
  'date_display' => 'Datos rodymas', //cpg1.4
  'submit' => 'pateikti / atnaujinti', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File thumbnails.php
// ------------------------------------------------------------------------- //

// Void

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) $lang_upload_php = array(
  'title' => 'Siųsti bylas',
  'custom_title' => 'Pritaikyti užklausos formą',
  'cust_instr_1' => 'Jūs galite pritaikyti siuntimo formą sau, žinoma iki tam tikros ribos, kuri nurodyta žemiau.',
  'cust_instr_2' => 'Siuntimų skaičius',
  'cust_instr_3' => 'Bylų siuntimas: %s',
  'cust_instr_4' => 'URI/URL siuntimas: %s',
  'cust_instr_5' => 'URI/URL siuntimui:',
  'cust_instr_6' => 'Bylų siuntimui:',
  'cust_instr_7' => 'Prašome įvesti skičių kiekvienam siuntimo tipui. Po to spauskite \'Tęsti\'. ',
  'reg_instr_1' => 'Klaidingas veiksmas formos kurime.',
  'reg_instr_2' => 'Dabar jūs galite siųsti bylas . Bylos dydis neturėtų viršyti %s KB. Zip bylos atsiųstos ir liks zip.',
  'reg_instr_3' => 'Jei norite, kad archyvai būtų automatiškai išarchyvuoti turite naudoti \'Zip bylu siuntimas\'.',
  'reg_instr_4' => 'Kai naudojate URI/URL siuntimą prašome įrašyti visą kelią iki paveiklėlio: http://www.puslapis.lt/nuotraukos/nuotrauka58.jpg',
  'reg_instr_5' => 'Kai baigsite spauskite Tęsti.',
  'reg_instr_6' => 'Zip bylu siuntimas:',
  'reg_instr_7' => 'Bylų siuntimas:',
  'reg_instr_8' => 'URI/URL siuntimas:',
  'error_report' => 'Klaidos',
  'error_instr' => 'Siuntimų klaidos:',
  'file_name_url' => 'Bylos pavadinimas/URL',
  'error_message' => 'Klaidos tekstas',
  'no_post' => 'Byla neatsiųsta dėl POST.',
  'forb_ext' => 'Draudžiamas bylos plėtinys.',
  'exc_php_ini' => 'Viršytas bylos dydis dėl php.ini.',
  'exc_file_size' => 'Viršytas bylos dydis dėl CPG.',
  'partial_upload' => 'Tik dalinins siuntimas.',
  'no_upload' => 'Siuntimas neprasidėjo.',
  'unknown_code' => 'Nežinoma PHP siunrimo klaida.',
  'no_temp_name' => 'Nėra siuntimo - Nera laikinų vardų.',
  'no_file_size' => 'Nera duomenų/pažeista',
  'impossible' => 'neįmanoma perkelti.',
  'not_image' => 'ne paveiklėlis/pažeista',
  'not_GD' => 'Nėra GD plėtinio.',
  'pixel_allowance' => 'Paveiklėlio aukštis ir plotis per didelis nei leidžiama.', //cpg1.4
  'incorrect_prefix' => 'Nateisingas URI/URL priešdėlis',
  'could_not_open_URI' => 'Nerandama URI.',
  'unsafe_URI' => 'Saugumas nepraleido.',
  'meta_data_failure' => 'Meta data klaida',
  'http_401' => '401 Nenustytas',
  'http_402' => '402 Reikia sumokėti',
  'http_403' => '403 Uždrausta',
  'http_404' => '404 Nerasta',
  'http_500' => '500 Vidinė serverio klaida',
  'http_503' => '503 Servisas neįmanomas',
  'MIME_extraction_failure' => 'MIME neparuoštas.',
  'MIME_type_unknown' => 'Nežinomas MIME tipas',
  'cant_create_write' => 'Neįmanoma sukurti bylos.',
  'not_writable' => 'Neįrašoma byla.',
  'cant_read_URI' => 'Neperskaitomas URI/URL',
  'cant_open_write_file' => 'Neatidaroma URI byla.',
  'cant_write_write_file' => 'Neįrašoma URI byla.',
  'cant_unzip' => 'Neįmanoma išarchyvuoti.',
  'unknown' => 'Nežinoma klaida',
  'succ' => 'Sėkmingi siuntimai',
  'success' => '%s siuntimai sėkmingi.',
  'add' => 'Prašom spausti \'Tęsti\' pridėsim bylas į albumus.',
  'failure' => 'Siuntimas nepavyko',
  'f_info' => 'Bylos informacija',
  'no_place' => 'Ankstenė byla nepatalpinta.',
  'yes_place' => 'Ankstenė byla patalpinta.',
  'max_fsize' => 'Maksimaliai leidžiamas bylos bydis yra %s KB',
  'album' => 'Albumas',
  'picture' => 'Byla',
  'pic_title' => 'Bylos pavadinimas',
  'description' => 'Bylos aprašymas',
  'keywords' => 'Raktažodžiai (atskirti tarpais)<br /><a href="#" onClick="return MM_openBrWindow(\'keyword_select.php\',\'selectKey\',\'width=250, height=400, scrollbars=yes,toolbar=no,status=yes,resizable=yes\')">Pasirinkti iš sąrašo</a>', //cpg1.4
  'keywords_sel' =>'Pasirinkti raktažodį', //cpg1.4
  'err_no_alb_uploadables' => 'Atsiprašome nėra albumo kur jums leidžiama siųsti bylas',
  'place_instr_1' => 'Prašome patalpinti bylas į albumus šiam kartui. Galite ir įvesti informaciją apie kiekvieną bylą.',
  'place_instr_2' => 'Daugiau bylų reikia patalpinti. Spauskite \'Tęsti\'.',
  'process_complete' => 'Sėkmingai patalpinote visas bylas.',
   'albums_no_category' => 'Albumai be kategorijos', //cpg1.4. //album pulldown mod, added by frogfoot
  'personal_albums' => '* Asmeniniai albumai', //cpg1.4 //album pulldown mod, added by frogfoot
  'select_album' => 'Pasrinkite albumą', //cpg1.4 //album pulldown mod, added by frogfoot
  'close' => 'Uždaryti', //cpg1.4
  'no_keywords' => 'Atsiprašome, nėra raktažodžių!', //cpg1.4
  'regenerate_dictionary' => 'Perkurti žodyną', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
  'memberlist' => 'Narių sąrašas', //cpg1.4
  'user_manager' => 'Narių valdymas', //cpg1.4
  'title' => 'Narių valdymas',
  'name_a' => 'Pagal vardą didėjančiai',
  'name_d' => 'Pagal vardą mažėjančiai',
  'group_a' => 'Pagal grupę didėjančiai',
  'group_d' => 'Pagal grupę mažėjančiai',
  'reg_a' => 'Pagal registarciją didėjančiai',
  'reg_d' => 'Pagal registarciją mažėjančiai',
  'pic_a' => 'Pagal bylų kiekį didėjančiai',
  'pic_d' => 'Pagal bylų kiekį mažėjančiai',
  'disku_a' => 'Pagal disko naudojimą didėjančiai',
  'disku_d' => 'Pagal disko naudojimą mažėjančiai',
  'lv_a' => 'Pagal paskutinį apsilankymą didėjančiai',
  'lv_d' => 'Pagal paskutinį apsilankymą mažėjančiai',
  'sort_by' => 'Rūšiuoti narius pagal',
  'err_no_users' => 'Narių lentelė tuščia !',
  'err_edit_self' => 'Negalite redaguoti savo anketos, naudokitės mano \'Mano anketa \' jei norite ką nors keisto',
  'edit' => 'Redaguoti', //cpg1.4
  'with_selected' => 'Su pasirinktais:', //cpg1.4
  'delete' => 'Šalinti', //cpg1.4
  'delete_files_no' => 'palikti viešas bylas (bus anoniminės)', //cpg1.4
  'delete_files_yes' => 'pašalinti ir viešas bylas', //cpg1.4
  'delete_comments_no' => 'palikti komentarus (bus anoniminė)', //cpg1.4
  'delete_comments_yes' => 'pašalinti ir komentarus', //cpg1.4
  'activate' => 'Aktyvuoti', //cpg1.4
  'deactivate' => 'Išjungti', //cpg1.4
  'reset_password' => 'Atstatyti slaptažodį', //cpg1.4
  'change_primary_membergroup' => 'Pakeisti pirminę narių grupę', //cpg1.4
  'add_secondary_membergroup' => 'Pridėti antrinę narių grupę', //cpg1.4
  'name' => 'Nario vardas',
  'group' => 'Grupė',
  'inactive' => 'Neaktyvus',
  'operations' => 'Veiksmai',
  'pictures' => 'Bylos',
  'disk_space_used' => 'Naudoja vietos', //cpg1.4
  'disk_space_quota' => 'Vietos kvota', //cpg1.4
  'registered_on' => 'Registracija', //cpg1.4
  'last_visit' => 'Paskutinis apsilankymas',
  'u_user_on_p_pages' => '%d narių, %d puslapyje (iuose)',
  'confirm_del' => 'Ar tikrai norite pašalinti šį narį? \\nVisi albumai ir visos bylos bus pašalintos.', //js-alert
  'mail' => 'Paštas',
  'err_unknown_user' => 'Pasirinktas nerys neegzistuoja !',
  'modify_user' => 'Redaguoti anketą',
  'notes' => 'Pastabos',
  'note_list' => '<li>Jei nenorite pakeisti slaptažodžio palikite laukelį tuščia',
  'password' => 'Slaptažodis',
  'user_active' => 'Narys aktyvus',
  'user_group' => 'Narių grupė',
  'user_email' => 'Nario el. pašto adresas',
  'user_web_site' => 'Nario svetainė',
  'create_new_user' => 'Sukurti naują narį',
  'user_location' => 'Nario vietovė',
  'user_interests' => 'Nario pomėgiai',
  'user_occupation' => 'Nario išsilavinimas',
  'user_profile1' => '$user_profile1', //cpg1.4
  'user_profile2' => '$user_profile2', //cpg1.4
  'user_profile3' => '$user_profile3', //cpg1.4
  'user_profile4' => '$user_profile4', //cpg1.4
  'user_profile5' => '$user_profile5', //cpg1.4
  'user_profile6' => '$user_profile6', //cpg1.4
  'latest_upload' => 'Naujausi atsiuntimai',
  'never' => 'niekada',
  'search' => 'Narių paieška', //cpg1.4
  'submit' => 'Pateikti', //cpg1.4
  'search_submit' => 'Pirmyn!', //cpg1.4
  'search_result' => 'Paieškos rezultatai: ', //cpg1.4
  'alert_no_selection' => 'Pasirinkite bent vieną narį!', //cpg1.4 //js-alert
  'password' => 'slaptažodis', //cpg1.4
  'select_group' => 'Pasirinkite grupę', //cpg1.4
  'groups_alb_access' => 'Albumų leidimai pagal grupes', //cpg1.4
  'album' => 'Albumas', //cpg1.4
  'category' => 'Kategorija', //cpg1.4
  'modify' => 'Keisti?', //cpg1.4
  'group_no_access' => 'Ši grupė neturi specialaus priėjimo', //cpg1.4
  'notice' => 'Pranešimas', //cpg1.4
  'group_can_access' => 'Albumai kur gali patekti tik "%s" ', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //

if (defined('UTIL_PHP')) {
$lang_util_desc_php = array(
'Atnaujina bylų pavadinimus', //cpg1.4
'Pašalina pavadinimus', //cpg1.4
'Perkuria thumbnails ir pakeičia fotografijų dydi', //cpg1.4
'Pašailna orginalaus dydžio nuotraukas ir pakeičia jas kitomis', //cpg1.4
'Pašalina orginalus ar vidutines nuotraukas atlaisvinti vietą serveryje', //cpg1.4
'Pašlina likusius komentarus', //cpg1.4
'Perskaito bylos dydžius ir matmenis (jei rankiniu būdu buvo redaguota)', //cpg1.4
'Atstato peržiūrų skaitliukus', //cpg1.4
'Rodo phpinfo', //cpg1.4
'Atnaujina duomenų bazes', //cpg1.4
'Rodo log bylas', //cpg1.4
);
$lang_util_php = array(
  'title' => 'Admino parankinis  (Keisti paveikslėlio dydį)',
  'what_it_does' => 'Ką tai daro',
  'file' => 'Bylos',
  'problem' => 'Problema', //cpg1.4
  'status' => 'Būsena', //cpg1.4
  'title_set_to' => 'pavdinimas nustatytas į',
  'submit_form' => 'pateikti',
  'updated_succesfully' => 'atnaujinta sėkmingai',
  'error_create' => 'Kūrimo KLAIDA',
  'continue' => 'Apdirbti daugiau paveiklėlių',
  'main_success' => 'Byla %s sėkmingai panaudota kaip pagrindinė',
  'error_rename' => 'Klaidų liko %s iki %s',
  'error_not_found' => 'Byla %s nerasta',
  'back' => 'atgal į pagrindinį',
  'thumbs_wait' => 'Atnaujinami thumbnails ir/ar mažinami paveiklėliai, prašome palaukti...',
  'thumbs_continue_wait' => 'Tęsesi atnaujinimas thumbnails ir/ar mažinami paveiklėliai...',
  'titles_wait' => 'Atnaujinami pavadinimai, prašome palaukti...',
  'delete_wait' => 'Šalinami pavadinimai, prašome palaukti...',
  'replace_wait' => 'Šainami orginalai ir pakeičiami pakeisto dydžio paveikslėliais, prašome palaukti.....',
  'instruction' => 'Greitos istrukcijos',
  'instruction_action' => 'Pasirinkti veiksmą',
  'instruction_parameter' => 'Nustatyti parametrus',
  'instruction_album' => 'Pasirinkti albumą',
  'instruction_press' => 'Spausti %s',
  'update' => 'Atnaujinti thumbs ir/ar pakeisti paveikslėliai',
  'update_what' => 'Kas turi būt atnaujinta',
  'update_thumb' => 'Tik thumbnails',
  'update_pic' => 'Tik pakeisti paveikslėliai',
  'update_both' => 'Ir thumbnails ir pakeisti paveikslėliai',
  'update_number' => 'Paveiklėlių apdirbimo kiekis per paspaudimą',
  'update_option' => '(Nustytkite mažiau, nes gali baigtis php dirbimo laikas)',
  'filename_title' => 'Bylos_pavadinimas.jpg &rArr; Bylos pavadinimas',
  'filename_how' => 'Kaip turi pasikeisti bylos pavadinimas',
  'filename_remove' => 'Pašalinti .jpg ir pakeisti  _  su tarpu',
  'filename_euro' => 'Keisti 2003_11_23_13_20_20.jpg į 23/11/2003 13:20',
  'filename_us' => 'Keisti 2003_11_23_13_20_20.jpg į 11/23/2003 13:20',
  'filename_time' => 'Keisti 2003_11_23_13_20_20.jpg į 13:20',
  'delete' => 'Pašalinti bylos pavadinimą ar orginalau dydžio paveikslėlį',
  'delete_title' => 'Pašalinti bylų pavadinimus',
  'delete_title_explanation' => 'Tai pašalins visus bylų pavadinimus, nurodytuose albumuose.', //cpg1.4
  'delete_original' => 'Pašalinti orginalaus dydžio paveikslėlį',
  'delete_original_explanation' => 'Tai pašalinti orginalaus dydžio paveikslėlį.', //cpg1.4
  'delete_intermediate' => 'Pašalinti vidutinio dydžio paveikslėlį', //cpg1.4
  'delete_intermediate_explanation' => 'Tai pašalinti vidutinio (rodomo) dydžio paveikslėlį.<br />Naudokite tai atlaisvinant disko vietą, jei jūs išjungėte Sukurti vidutinį paveiklėlį.', //cpg1.4
  'delete_replace' => 'Pašalinam orginalios nuotraukos pekeičiamos naujomis',
  'titles_deleted' => 'Visi pavadinimai nurodytame albume buvo pašalinti', //cpg1.4
  'deleting_intermediates' => 'Šalinami vidudiniai paveikslėliai, prašome palaukti...', //cpg1.4
  'searching_orphans' => 'Ieškoma našlaičių, prašome palaukti... ', //cpg1.4
  'select_album' => 'Pasirinkite albumą',
  'delete_orphans' => 'Pašalinti komentarus dingusių bylų', //cpg1.4
  'delete_orphans_explanation' => 'Tai padės nustyti ir leis pašalinti komentarus kurie susiję su bylomis kurių nėra galerijoje. <br /> Patikrina visas galerijas.', //cpg1.4
  'refresh_db' => 'Perkrauna bylos matmenų ir dydžio informacija', //cpg1.4
  'refresh_db_explanation' => 'Tai perskaitys bylos dydį ir matmenis. Naudokite tai jei ribos neteisingos ar pakeitėte bylas rankiniu būdu.', //cpg1.4
  'reset_views' => 'Atnaujinti peržiūrų skaitiklius', //cpg1.4
  'reset_views_explanation' => 'Nustato peržiūros skaitliuką 0 nurodytame albume.', //cpg1.4
  'orphan_comment' => 'komentarų našlaičių rasta',
  'delete' => 'Šalinti',
  'delete_all' => 'Šalinti visus',
  'delete_all_orphans' => 'Šalinti visus našlaičius?', //cpg1.4
  'comment' => 'Komentaras: ',
  'nonexist' => 'prijungtas prie neegzistuojančios bylos # ',
  'phpinfo' => 'Rodyti phpinfo',
  'phpinfo_explanation' => 'Techninė serverio informacija apie jūsų serverį.<br /> - Gali būt, kad bus jūsų paprašyta pateikti šiek tiek informacijos kai prašysite pagalbos.', //cpg1.4
  'update_db' => 'Atnaujinti duomenų bazę',
  'update_db_explanation' => 'Jie pakeitėte bylas, pridėjote modifikacijų ar atnaujinote versija, atnaujinkite duomenų bazę vieną kartą. Tai sukurs reikalingas lenteles ir/ar nuostatas.',
  'view_log' => 'Peržiūrėti log bylas', //cpg1.4
  'view_log_explanation' => 'Coppermine gali sekti įvairius veiksmus. Galite naršyti šiuose įrašuose jei įjungėte jų sekima <a href="admin.php">coppermine nuostatose</a>.', //cpg1.4
  'versioncheck' => 'Versijos patikrinimas', //cpg1.4
  'versioncheck_explanation' => 'Patikrinkite bylų versijas po atnaujinimo, ar coppermine šaltinio bylos buvo atnaujintos po naujo paketo.', //cpg1.4
  'bridgemanager' => 'Sujungimo vedlys', //cpg1.4
  'bridgemanager_explanation' => 'Išjungti/įjungti integracija (sujungimą) coppermine su kitomis aplikacijomis (pvz: BBS).', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File versioncheck.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('VERSIONCHECK_PHP')) $lang_versioncheck_php = array(
  'title' => 'Versijos patikrinimas', //cpg1.4
  'what_it_does' => 'Šis puslapis skirtas tiems kurie atnaujino coppermine įdiegimą. Šis scenarijus eina per bylas serveryje ir bando nustatyti ar jūsų bylos tokios pačios versijos kaip ir saugyklos http://coppermine.sourceforge.net, taip tap rodomos bylos kurias reikia atnaujinti. <br /> Ką reikai taisyti bus rodoma raudona spalva. Geltona spalva - reikia peržiūrėti. Žalia spalva (arba įprasta) - viskas gerai. <br /> Spauskite ant pagalbos ikonos jei norite sužinoti daugiau.', //cpg1.4
  'online_repository_unable' => 'Neįmanoma prisijungti prie saugyklos', //cpg1.4
  'online_repository_noconnect' => 'Coppermine nepavyko prisijungti prie saugyklos. Gali būt dvi priežastys:', //cpg1.4
  'online_repository_reason1' => 'saugykla šiuo metu neveikia - patikrinkite naršyklėje: %s - jei nepasiekiama bandykite vėliau.', //cpg1.4
  'online_repository_reason2' => 'PHP jūsų serveryje yra su išjungtu %s (įprastai būna įjungtas). Susisiekita su serverio administratoriumi.', //cpg1.4
  'online_repository_skipped' => 'Prisijungimas prie saugyklos praleistas', //cpg1.4
  'online_repository_to_local' => 'Scenarijus įprastina vietines bylų kopijas. Duomenys gali būt blogi jei atnaujinote Coppermine ir neatsiuntėte visų bylų. Paeitimas į buvusias bylas nepadės.', //cpg1.4
  'local_repository_unable' => 'Negalima prisijungti prie saugyklos jūsų serveryje', //cpg1.4
  'local_repository_explanation' => 'Coppermine negali prisijungti prie saugyklos bylų %s serveryje. Tikriausiai todėl, kad jūs neatsiutėte saugyklos bylos į serverį. Padarytkite tai dabar ir bandykite vėl. < br /> Jei scenarijus toliau neveikia, tikriausiai jūsų serveryje išjungta a href="http://www.php.net/manual/en/ref.filesystem.php">PHP bylų sitemos funkcijos</a> visiškai. Šiuo atveju jūs tiesiog negalėsite naudoti šio įrankio. Atsiprašome.', //cpg1.4
  'coppermine_version_header' => 'Įdiegta Coppermine versija', //cpg1.4
  'coppermine_version_info' => 'Dabar įdiegta: %s', //cpg1.4
  'coppermine_version_explanation' => 'Jei manote, kad tai netiesa, tikriausiai atsiuntėte ne naujausia versija  <i>include/init.inc.php</i> bylos.', //cpg1.4
  'version_comparison' => 'Versijos palyginimas', //cpg1.4
  'folder_file' => 'aplankas/bylae', //cpg1.4
  'coppermine_version' => 'cpg versija', //cpg1.4
  'file_version' => 'bylos versija', //cpg1.4
  'webcvs' => 'web svn', //cpg1.4
  'writable' => 'įrašoma', //cpg1.4
  'not_writable' => 'neįrašoma', //cpg1.4
  'help' => 'Pagalba', //cpg1.4
  'help_file_not_exist_optional1' => 'byla/aplankas neegzistuoja', //cpg1.4
  'help_file_not_exist_optional2' => 'byla/aplankas  %s nerasta serveryje. Jūs turite atsiųsti bylas į serverį.', //cpg1.4
  'help_file_not_exist_mandatory1' => 'byla/aplankas neegzistuoja', //cpg1.4
  'help_file_not_exist_mandatory2' => 'byla/aplankas  %s nerasta serveryje. Jūs turite atsiųsti bylas į serverį..', //cpg1.4
  'help_no_local_version1' => 'Nėra bylos versijos', //cpg1.4
  'help_no_local_version2' => 'Scenarijus nenustatė bylos versijos - byla pasenusi arba jūs ją pakeitėte, pašalindami informacija. Bylos atnaujinimas rekomenduojamas.', //cpg1.4
  'help_local_version_outdated1' => 'Vietinė versija pasenusi', //cpg1.4
  'help_local_version_outdated2' => 'Jūsų versija pasenusi. Atnaujinkite bylas.', //cpg1.4
  'help_local_version_na1' => 'Nepavyko ištraukti cvs versijos informacijos', //cpg1.4
  'help_local_version_na2' => 'Scenarijus nenustatė cvs versijos. Turėtumėt atsiųsti byla iš naujo paketo.', //cpg1.4
  'help_local_version_dev1' => 'Vystimo versija', //cpg1.4
  'help_local_version_dev2' => 'Bylos jūsų serveryje yra naujesnės nei Coppermine verija. Tikriausiai naudojate vystymo bylas (galite naudoti jei žinote ką darote), arba jūs atnaujinote Coppermine įdiegimą bet neatsiutėte include/init.inc.php', //cpg1.4
  'help_not_writable1' => 'Aplankas neįrašomas', //cpg1.4
  'help_not_writable2' => 'Pakeiskite leidimus (CHMOD) kad scenarijus gturėtų įrašymo teises, aplake %s ir viską jome.', //cpg1.4
  'help_writable1' => 'Aplankas įrašomas', //cpg1.4
  'help_writable2' => 'Aplankas %s įrašomas. Tai nesaugu coppermine reikia tik skaityti/šalinti teisės.', //cpg1.4
  'help_writable_undetermined' => 'Coppermine negalėjo nustyti ar aplankas įrašomas ar ne.', //cpg1.4
  'your_file' => 'jūsų byla', //cpg1.4
  'reference_file' => 'nurodyta byla', //cpg1.4
  'summary' => 'Reziumė', //cpg1.4
  'total' => 'Viso bylų/aplakų patikrinta', //cpg1.4
  'mandatory_files_missing' => 'Privalomų bylų trūksta', //cpg1.4
  'optional_files_missing' => 'Neprivalomų bylų trūksta', //cpg1.4
  'files_from_older_version' => 'Bylos liko nuo senos Coppermine versijos', //cpg1.4
  'file_version_outdated' => 'Senos versijos bylos', //cpg1.4
  'error_no_data' => 'Scenarijus padarė oii... jis negalėjo gauti jokios informacijos. Atsiprašome už nepatogumus.', //cpg1.4
  'go_to_webcvs' => 'eiti į %s', //cpg1.4
  'options' => 'Pasirinkimai', //cpg1.4
  'show_optional_files' => 'rodyti neprivalomas bylas/aplakus', //cpg1.4
  'show_mandatory_files' => 'rodyti privalomas bylas', //cpg1.4
  'show_file_versions' => 'rodyti bylos versija', //cpg1.4
  'show_errors_only' => 'rodyti tik bylos/aplanko klaidas', //cpg1.4
  'show_permissions' => 'rodyti aplanko leidimus', //cpg1.4
  'show_condensed_output' => 'rodyti suspausta info (lengvesniems screenshot)', //cpg1.4
  'coppermine_in_webroot' => 'coppermine įdiegtas webroot', //cpg1.4
  'connect_online_repository' => 'bandoma prisijungti prie saugyklos', //cpg1.4
  'show_additional_information' => 'rodyti papildoma informacija', //cpg1.4
  'no_webcvs_link' => 'nerodyti web svn nuorodų', //cpg1.4
  'stable_webcvs_link' => 'rodyti web svn nuorodas į stabilę šaką', //cpg1.4
  'devel_webcvs_link' => 'rodyti web svn nuorodas į vystomą šaką', //cpg1.4
  'submit' => 'pateikti atnaujinimus / atnaujinti', //cpg1.4
  'reset_to_defaults' => 'atstatyti į įprastas reikšmes', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File view_log.php  //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('VIEWLOG_PHP')) $lang_viewlog_php = array(
  'delete_all' => 'Pašalinti visus įrašus', //cpg1.4
  'delete_this' => 'Pašalinti šį įrašą', //cpg1.4
  'view_logs' => 'Roditi įrašsžus', //cpg1.4
  'no_logs' => 'Nėra įrašų.', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File xp_publish.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('XP_PUBLISH_PHP')) {

$lang_xp_publish_client = <<<EOT
<h1>XP Web publikavimo vedlys</h1><p>Šis modulis leidžia naudoti <b>Windows XP</b> web publikavimo vedlį į Coppermine.</p><p>Kodas paremtas straipsniu pagal
EOT;

$lang_xp_publish_required = <<<EOT
<h2>Kas reikalinga</h2><ul><li>Windows XP, kad vedlįs veiktų.</li>
<li>Veikiančios  Coppermine instaliacijos kurioje <b>web siuntimas veikia tinkamai.</b></li>
</ul>
<h2>Kaip įdiegti pas save</h2>
<ul><li>Spauskite dešnį klavišą ant 
EOT;

$lang_xp_publish_select = <<<EOT
Pasirinkite &quot;save target as..&quot; arba &quot;save link as..&quot; (priklausi nuo jūsų naršyklės). Išsaugokite byla savo kietajam diske. Kai saugote byla patikrinkita jos pavadinima <b>cpg_###.reg</b> (### skaičiai pagal laika). Pakeiskite pavadinimą į norima (skaičius palikite). Kai atsiųs spauskite du kartus ant bylos tam, kad užregitruotumėte savo servrį su publikavimo vedliu..</li></ul>
EOT;

$lang_xp_publish_testing = <<<EOT
<h2>Tikrinimas</h2><ul>
  <li>Windows Explorer naršyklėje, pasirinkite bylas ir spauskite  <b>Publish xxx on the web</b> kairėje pusėje.</li>
  <li>Patvirtinkite savo pasirinkima. Spaskite <b>Next</b>.</li>
  <li>Sąraše pasirinkite nuotraukas kurias norite publikuoti, pasirinkite galerija kurioje norite publikuoti. Jei paslauga neatsiranda patikrinkite ar įdiegėte <b>cpg_pub_wizard.reg</b> Kaip aprašyta viršuje.</li>
  <li>Įveskite prisijungimo duomenis.</li>
  <li>Pasirinkite albumą arba sukurkite nauja.</li>
  <li>Spauskite <b>next</b>. Jūsų nuotraukų siuntimas prasidėjo.</li>
  <li>Kai baigsite patikrinkite ar teisingai atsiusintė nuotraukos.</li>
</ul>
EOT;

$lang_xp_publish_notes = <<<EOT

<h2>Pastabos :</h2>
<ul><li>Kai tik siuntimas prasidėjo, vedlės negali rodyti jokių klaidų pranešimų, taigi negalite sužinoti ar siuntimas pavyko iki tol kol patikrinsite svetainėje.</li><li>Jei siuntimas nepavyko, įjunkite &quot;derinimo būsena&quot;  Coppermine admino puslapyje, pabandykite nusiųsti vieną nuotrauką ir patikrinkite klaidas
EOT;

$lang_xp_publish_flood = <<<EOT
byloje kuris yra Coppermine aplanke.</li><li>Norint išvengti galerijos šiukšlinimo <i>flood</i>, tik <b>galerijos adminas</b> ir <b>nariai kurie turi sąskaita</b> gali pasinaudoti šia galimybe.</li>
EOT;



$lang_xp_publish_php = array(
  'title' => 'Coppermine - XP Web publikavimo vedlys', //cpg1.4
  'welcome' => 'Sveiki <b>%s</b>,', //cpg1.4
  'need_login' => 'Pirmiau jūs turite prisijunti prie galerijos jei norite naudotis vedliu.<p/><p>Kai prisijungiate nespauskite <b>prisiminti mane</b>.', //cpg1.4
  'no_alb' => 'SAtsiprašome bet bėra albumų į kuriuos jums leid-iama siųsti.', //cpg1.4
  'upload' => 'Siųsti nuotraukas į jau esanti albumą', //cpg1.4
  'create_new' => 'Sukurti naują albumą', //cpg1.4
  'album' => 'Albumas', //cpg1.4
  'category' => 'Kategorija', //cpg1.4
  'new_alb_created' => 'Naujas albumas &quot;<b>%s</b>&quot; sukurtas.', //cpg1.4
  'continue' => 'Spauskite &quot;Next&quot;, kad predėtumėte siuntimą', //cpg1.4
  'link' => 'šią nuorodą', //cpg1.4
);
}
?>