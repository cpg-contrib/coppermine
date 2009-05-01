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
  $HeadURL$
  $Revision$
  $Author$
  $Date$
**********************************************/

if (!defined('IN_COPPERMINE')) { die('Not in Coppermine...');}

// info about translators and translated language
$lang_translation_info = array(
  'lang_name_english' => 'Slovak', //cpg1.4
  'lang_name_native' => 'Slovensky', //cpg1.4
  'lang_country_code' => 'sk', //cpg1.4
  'trans_name'=> 'Piranha',
  'trans_email' => 'rc@rc.sk',
  'trans_website' => 'http://www.kravata.sk',
  'trans_date' => '2006-02-02',
);

$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('Bytov', 'KB', 'MB');

// Day of weeks and months
$lang_day_of_week = array('Ne', 'Po', 'Ut', 'St', 'Št', 'Pi', 'So');
$lang_month = array('Január', 'Február', 'Marec', 'Apríl', 'Máj', 'Jún', 'Júl', 'August', 'September', 'Október', 'November', 'December');

// Some common strings
$lang_yes = 'Áno';
$lang_no  = 'Nie';
$lang_back = 'SPÄŤ';
$lang_continue = 'POKRAČOVAŤ';
$lang_info = 'Informácia';
$lang_error = 'Chyba';
$lang_check_uncheck_all = 'označ/odznač všetko'; //cpg1.4

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
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*', 'piča', 'hovno', '*fuck*', 'prdel', 'čurák', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*', 'kokot');

$lang_meta_album_names = array(
  'random' => 'Náhodné súbory',
  'lastup' => 'Najnovšie pridané',
  'lastalb'=> 'Naposledy aktualizovaná galéria',
  'lastcom' => 'Najnovšie komentáre',
  'topn' => 'Najprezeranejšie',
  'toprated' => 'Najvyššie hodnotené',
  'lasthits' => 'Naposledy zobrazené',
  'search' => 'Výsledky hľadania',
  'favpics'=> 'Obľúbené súbory',  //cpg1.4
);

$lang_errors = array(
  'access_denied' => 'Nemáte oprávnenie pre vstup na túto stránku.',
  'perm_denied' => 'Nemáte oprávnenie vykonať túto operáciu.',
  'param_missing' => 'Skript vyvolaný bez potrebných parametrov.',
  'non_exist_ap' => 'Zvolený album/súbor neexistuje !',
  'quota_exceeded' => 'Vyčerpali ste miesto na disku.<br /><br />Vaša kvóta je[quota]K, Vaše súbory zaberajú [space]K, pridaním tohto súboru by ste svoju kvótu prekročili.',
  'gd_file_type_err' => 'Ak používate GD knižnicu sú podporované len obrázky JPG a PNG.',
  'invalid_image' => 'Tento obrázok je poškodený/porušený alebo GD knihovňa s ním nemôže pracovať.',
  'resize_failed' => 'Nemožno vytvoriť náhľad alebo zmenšený obrázok.',
  'no_img_to_display' => 'Žiadny obrázok k zobrazeniu',
  'non_exist_cat' => 'Zvolená kategória neexistuje',
  'orphan_cat' => 'Táto kategória nemá nadradenú kategóriu. Problém opravte cez nastavenie kategorií!',
  'directory_ro' => 'Do adresára \'%s\' nemožno zapisovať, súbor nemožno zmazať.',
  'non_exist_comment' => 'Zvolený komentár neexistuje.',
  'pic_in_invalid_album' => 'Súbor je v neexistujúcom albume (%s)!?',
  'banned' => 'Momentálne máte zakázaný prístup k týmto stránkam.',
  'not_with_udb' => 'Táto funkcia je vypnutá pretože je integrovaná vo fóre. Buď nie je požadovaná fukcia dostupná na tomto systéme, alebo túto funkciu plní fórum..',
  'offline_title' => 'Odpojené',
  'offline_text' => 'Galéria je momentálne nedostupná - skúste neskôr.',
  'ecards_empty' => 'Teraz nie sú žiadne e-pohľadnice k zobrazeniu.',
  'action_failed' => 'Akcia zlyhala. Galéria nie je schopná vašu požiadavku vykonať.',
  'no_zip' => 'Knižnice potrebné pre zpracovanie ZIP súborov nie sú dostupné.  Prosím kontaktujte Vášho administrátora galérie.',
  'zip_type' => 'Nemáte oprávnenie pridávať ZIP súbory.',
  'database_query' => 'Vyskytla sa chyba pri spracovávaní databázovej požiadavky.', //cpg1.4
  'non_exist_comment' => 'Zvolený komentár neexistuje.', //cpg1.4
);

$lang_bbcode_help_title = 'bbcode pomoc'; //cpg1.4
$lang_bbcode_help = 'Môžete pridať klikateľné linky a formátovanie použitím bbcode tagov: <li>[b]Bold[/b] =&gt; <b>Bold</b></li><li>[i]Italic[/i] =&gt; <i>Italic</i></li><li>[url=http://yoursite.com/]Url Text[/url] =&gt; <a href="http://yoursite.com">Url Text</a></li><li>[email]user@domain.com[/email] =&gt; <a href="mailto:user@domain.com">user@domain.com</a></li><li>[color=red]some text[/color] =&gt; <span style="color:red">some text</span></li><li>[img]http://coppermine-gallery.net/demo/cpg14x/images/red.gif[/img] => <img src="../images/red.gif" border="0" alt="" /></li>'; //cpg1.4

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
  'home_title' => 'Choď na hlavnú stránku',
  'home_lnk' => 'Domov',
  'alb_list_title' => 'Choď na zoznam albumov',
  'alb_list_lnk' => 'Zoznam albumov',
  'my_gal_title' => 'Choď do osobnej galérie',
  'my_gal_lnk' => 'Moja galéria',
  'my_prof_title' => 'Choď na môj profil', //cpg1.4
  'my_prof_lnk' => 'Môj profil',
  'adm_mode_title' => 'Prepnúť do admin módu',
  'adm_mode_lnk' => 'Admin mód',
  'usr_mode_title' => 'Prepnúť do užívateľského módu',
  'usr_mode_lnk' => 'Užívateľský mód',
  'upload_pic_title' => 'Pridať súbor do albumu',
  'upload_pic_lnk' => 'Pridať súbor',
  'register_title' => 'Vytvoriť účet',
  'register_lnk' => 'Registruj',
  'login_title' => 'Prihlás ma', //cpg1.4
  'login_lnk' => 'Prihlásiť',
  'logout_title' => 'Odhlás ma', //cpg1.4
  'logout_lnk' => 'Odhlásiť',
  'lastup_title' => 'Zobraz najnovšie pridané', //cpg1.4
  'lastup_lnk' => 'Najnovšie pridané',
  'lastcom_title' => 'Zobraz najnovšie komentáre', //cpg1.4
  'lastcom_lnk' => 'Najnovšie komentáre',
  'topn_title' => 'Zobraz najprezeranejšie', //cpg1.4
  'topn_lnk' => 'Najprezeranejšie',
  'toprated_title' => 'Zobraz najvyššie hodnotené', //cpg1.4
  'toprated_lnk' => 'Najvyššie hodnotené',
  'search_title' => 'Hľadaj v galérii', //cpg1.4
  'search_lnk' => 'Hľadať',
  'fav_title' => 'Choď do mojich obľúbených', //cpg1.4
  'fav_lnk' => 'Moje obľúbené',
  'memberlist_title' => 'Zobraz členov',
  'memberlist_lnk' => 'Zoznam členov',
  'faq_title' => 'Často kladené otázky na galériu &quot;Coppermine&quot;',
  'faq_lnk' => 'FAQ',
);

$lang_gallery_admin_menu = array(
  'upl_app_title' => 'Schváliť pridanie súboru', //cpg1.4
  'upl_app_lnk' => 'Potvrdiť pridanie',
  'admin_title' => 'Choď do konfigurácie galérie', //cpg1.4
  'admin_lnk' => 'Konfigurácia', //cpg1.4
  'albums_title' => 'Choď do konfigurácie albumov', //cpg1.4
  'albums_lnk' => 'Albumy',
  'categories_title' => 'Choď do konfigurácie kategórií', //cpg1.4
  'categories_lnk' => 'Kategórie',
  'users_title' => 'Choď do konfigurácie členov', //cpg1.4
  'users_lnk' => 'Členovia',
  'groups_title' => 'Choď do konfigurácie skupín', //cpg1.4
  'groups_lnk' => 'Skupiny',
  'comments_title' => 'Prezerať komentáre', //cpg1.4
  'comments_lnk' => 'Prezerať komentáre',
  'searchnew_title' => 'Choď na hromadné pridanie súborov', //cpg1.4
  'searchnew_lnk' => 'Hromadné pridanie',
  'util_title' => 'Choď do administračného menu', //cpg1.4
  'util_lnk' => 'Administrácia',
  'key_title' => 'Choď do zoznamu kľúčových slov', //cpg1.4
  'key_lnk' => 'Kľúčové slová', //cpg1.4
  'ban_title' => 'Choď do zoznamu zakázaných členov', //cpg1.4
  'ban_lnk' => 'Zakáž člena',
  'db_ecard_title' => 'Prezrieť e-pohľadnice', //cpg1.4
  'db_ecard_lnk' => 'Zobraziť e-pohľadnice',
  'pictures_title' => 'Usporiadať moje obrázky', //cpg1.4
  'pictures_lnk' => 'Usporiadať obrázky', //cpg1.4
  'documentation_lnk' => 'Dokumentácia', //cpg1.4
  'documentation_title' => 'Coppermine manuál', //cpg1.4
);

$lang_user_admin_menu = array(
  'albmgr_title' => 'Vytvoriť a usporiadať albumy', //cpg1.4
  'albmgr_lnk' => 'Vytvoriť/usporiadať albumy',
  'modifyalb_title' => 'Choď na úpravu albumov',  //cpg1.4
  'modifyalb_lnk' => 'Úprava albumov',
  'my_prof_title' => 'Choď na úpravu môjho profilu', //cpg1.4
  'my_prof_lnk' => 'Môj profil',
);

$lang_cat_list = array(
  'category' => 'Kategórie',
  'albums' => 'Albumy',
  'pictures' => 'Súbory',
);

$lang_album_list = array(
  'album_on_page' => '%d albumov na %d stránkach',
);

$lang_thumb_view = array(
  'date' => 'DÁTUM',
  //Sort by filename and title
  'name' => 'MENO SÚBORU',
  'title' => 'NADPIS',
  'sort_da' => 'Zoradiť vzostupne podľa dátumu',
    'sort_dd' => 'Zoradiť zostupne podľa dátumu',
    'sort_na' => 'Zoradiť vzostupne podľa mena',
    'sort_nd' => 'Zoradiť zostupne podľa mena',
    'sort_ta' => 'Zoradiť vzostupne podľa nadpisu',
    'sort_td' => 'Zoradiť zostupne podľa nadpisu',
  'position' => 'UMIESTNENIE', //cpg1.4
  'sort_pa' => 'Zoradiť vzostupne podľa umiestnenia', //cpg1.4
  'sort_pd' => 'Zoradiť zostupne podľa umiestnenia', //cpg1.4
  'download_zip' => 'Stiahnuť ako Zip súbor',
  'pic_on_page' => '%d súborov na %d stránkach',
  'user_on_page' => '%d užívateľov na %d stránkach',
  'enter_alb_pass' => 'Zadajte heslo pre album', //cpg1.4
  'invalid_pass' => 'Neplatné heslo', //cpg1.4
  'pass' => 'Heslo', //cpg1.4
  'submit' => 'Potvrdiť', //cpg1.4
);

$lang_img_nav_bar = array(
  'thumb_title' => 'Návrat na stránku náhľadov',
  'pic_info_title' => 'Zobraziť/schovať informácie o súbore',
  'slideshow_title' => 'Slideshow - automatické posúvanie obrázkov',
  'ecard_title' => 'Pošli súbor ako e-pohľadnicu ',
  'ecard_disabled' => 'zasielanie e-pohľadníc je vypnuté',
  'ecard_disabled_msg' => 'Nemáte oprávnenie na posielanie e-pohľadníc', //js-alert
  'prev_title' => 'Pozri predchádzajúci súbor',
  'next_title' => 'Pozri ďaľší súbor',
  'pic_pos' => 'SÚBOR %s/%s',
  'report_title' => 'Upozorni administrátora na tento súbor', //cpg1.4
  'go_album_end' => 'Skoč na koniec', //cpg1.4
  'go_album_start' => 'Skoč na začiatok', //cpg1.4
  'go_back_x_items' => 'choď späť o %s položku/y', //cpg1.4
  'go_forward_x_items' => 'choď vpred o %s položku/y', //cpg1.4
);

$lang_rate_pic = array(
  'rate_this_pic' => 'Hodnotiť tento súbor ',
  'no_votes' => '(zatiaľ nehodnotené)',
  'rating' => '(Aktuálne hodnotenie : %s / 5 hlasované %s krát)',
  'rubbish' => 'Odpad',
  'poor' => 'Slabý',
  'fair' => 'Dá sa vydržať',
  'good' => 'Dobrý',
  'excellent' => 'Výborný',
  'great' => 'Dokonalý',
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
  CRITICAL_ERROR => 'Kritická chyba',
  'file' => 'Súbor: ',
  'line' => 'Riadok: ',
);

$lang_display_thumbnails = array(
  'filename' => 'Meno súboru=', //cpg1.4
  'filesize' => 'Veľkost súboru=', //cpg1.4
  'dimensions' => 'Rozmery=', //cpg1.4
  'date_added' => 'Dátum pridania=', //cpg1.4
);

$lang_get_pic_data = array(
  'n_comments' => '%s komentár(ov)',
  'n_views' => '%s zobrazení',
  'n_votes' => '(%s hlas(ov))',
);

$lang_cpg_debug_output = array(
  'debug_info' => 'Informácia o chybách',
  'select_all' => 'Vybrať všetko',
  'copy_and_paste_instructions' => 'Pokiaľ sa chystáte požadovať pomoc u podpory coppermine, vložte tento ladiaci výstup do vášho príspevku. Pred takýmto vložením sa uistite, že ste všetky vaše heslá z tohto textu nahradili pomocou "***". <br /> Toto je len informácia, neznamená to chybu vo Vašej galérii.', //cpg1.4
  'phpinfo' => 'zobraziť phpinfo',
  'notices' => 'Oznamy', //cpg1.4
);

$lang_language_selection = array(
  'reset_language' => 'Prednastavený jazyk',
  'choose_language' => 'Vyberte si Váš jazyk',
);

$lang_theme_selection = array(
  'reset_theme' => 'Prednastavená téma',
  'choose_theme' => 'Vyberte tému',
);

$lang_version_alert = array(
  'version_alert' => 'Nepodporovaná verzia!', //cpg1.4
  'security_alert' => 'Bezpečnostná výstraha!', //cpg1.4.3
  'relocate_exists' => 'Odstráňte <a href="http://coppermine-gallery.net/forum/index.php?topic=24217.0" target=_blank>relocate_server.php</a> z vašich stránok!',
  'no_stable_version' => 'Prevádzkujete verziu Coppermine %s (%s) ,ktorá je len pre veľmi skúsených užívateľov - táto verzia je bez podpory a záruky. použitie je na vlastnú zodpovednosť a nebezpečie!', //cpg1.4
  'gallery_offline' => 'Galéria je momentálne offline a je viditeľná len pre administrátorov. Nezabudnite ju pripojiť online po ukončení údržby.', //cpg1.4
);

$lang_create_tabs = array(
  'previous' => 'predchádzajúci', //cpg1.4
  'next' => 'ďaľší', //cpg1.4
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
  'error_wakeup' => "Nemôžem použiť zásuvný modul '%s'", //cpg1.4
  'error_install' => "Nemôžem inštalovať zásuvný modul '%s'", //cpg1.4
  'error_uninstall' => "Nemôžem odinštalovať zásuvný modul '%s'", //cpg1.4
  'error_sleep' => "Nemôžem odinštalovať zásuvný modul '%s'<br />", //cpg1.4
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
  0 => 'Opúšťam admin mód ...',
  1 => 'Aktivujem admin mód...',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
  'alb_need_name' => 'Album musí mať meno !', //js-alert
  'confirm_modifs' => 'Chcete vykonať tieto zmeny ?', //js-alert
  'no_change' => 'Nevykonali sa žiadne zmeny !', //js-alert
  'new_album' => 'Nový album',
  'confirm_delete1' => 'Určite chcete zmazať tento album ?', //js-alert
  'confirm_delete2' => '\nVšetky súbory a komentáre budú stratené !', //js-alert
  'select_first' => 'Najprv vyberte album', //js-alert
  'alb_mrg' => 'Správca albumov',
  'my_gallery' => '* Moja galéria *',
  'no_category' => '* Žiadna kategória *',
  'delete' => 'Odstrániť',
  'new' => 'Nový',
  'apply_modifs' => 'Vykonať zmeny',
  'select_category' => 'Vybrať kategóriu',
);

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) $lang_banning_php = array(
  'title' => 'Zakáž člena', //cpg1.4
  'user_name' => 'Meno', //cpg1.4
  'ip_address' => 'IP Adresa', //cpg1.4
  'expiry' => 'Expiruje (prázdne znamená nastálo)', //cpg1.4
  'edit_ban' => 'Ulož zmeny', //cpg1.4
  'delete_ban' => 'Zmazať', //cpg1.4
  'add_new' => 'Pridaj nový zákaz', //cpg1.4
  'add_ban' => 'Pridaj', //cpg1.4
  'error_user' => 'Nemožno nájsť člena', //cpg1.4
  'error_specify' => 'Je nutné zadať meno člena alebo IP Adresu', //cpg1.4
  'error_ban_id' => 'Nesprávne ID!', //cpg1.4
  'error_admin_ban' => 'Nemožno zakázať sám seba!', //cpg1.4
  'error_server_ban' => 'Chcete zakázať vlastný server? To sa nedá ...', //cpg1.4
  'error_ip_forbidden' => 'Nemožno zakázať túto IP - určite nie je trasovateľna !<br />If you want to allow banning for private IPs, change this in your <a href="admin.php">Config</a> (only makes sense when Coppermine runs on a LAN).', //cpg1.4
  'lookup_ip' => 'Vyhľadávanie IP adresy', //cpg1.4
  'submit' => 'vykonať!', //cpg1.4
  'select_date' => 'vybrať dátum', //cpg1.4
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
  'title' => 'Kalendár', //cpg1.4
  'close' => 'zatvoriť', //cpg1.4
  'clear_date' => 'vymazať dátum', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
  'miss_param' => 'Parametre potrebné pre \'%s\'operáciu nie su dostupné !',
  'unknown_cat' => 'Vybraná kategória v databáze neexistuje',
  'usergal_cat_ro' => 'Uživateľské kategórie nie je možné zmazať !',
  'manage_cat' => 'Upraviť kategórie',
  'confirm_delete' => 'Naozaj chcete VYMAZAŤ túto kategóriu', //js-alert
  'category' => 'Kategória',
  'operations' => 'Operácie',
  'move_into' => 'Presunúť do',
  'update_create' => 'Aktualizovať/Vytvoriť kategóriu',
  'parent_cat' => 'Nadradená kategória',
  'cat_title' => 'Názov kategórie',
  'cat_thumb' => 'Miniatúra kategórie',
  'cat_desc' => 'Popis kategórie',
  'categories_alpha_sort' => 'Usporiadať kategórie abecedne (namiesto voliteľného)', //cpg1.4
  'save_cfg' => 'Uložiť konfiguráciu', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File admin.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('ADMIN_PHP')) $lang_admin_php = array(
  'title' => 'Konfigurácia galérie', //cpg1.4
  'manage_exif' => 'Spravuj Exif zobrazenie', //cpg1.4
  'manage_plugins' => 'Spravuj zásuvné moduly', //cpg1.4
  'manage_keyword' => 'Spravuj kľúčové slová', //cpg1.4
  'restore_cfg' => 'Obnoviť východzie nastavenia',
  'save_cfg' => 'Uložiť novú konfiguráciu',
  'notes' => 'Poznámky',
  'info' => 'Oznam',
  'upd_success' => 'Konfigurácia bola aktualizovaná',
  'restore_success' => 'Východzie nastavenia boli obnovené',
  'name_a' => 'Meno vzostupne',
  'name_d' => 'Meno zostupne',
  'title_a' => 'Nadpis vzostupne',
  'title_d' => 'Nadpis zostupne',
  'date_a' => 'Dátum vzostupne',
  'date_d' => 'Dátum zostupne',
  'pos_a' => 'Pozícia vzostupne', //cpg1.4
  'pos_d' => 'Pozícia zostupne', //cpg1.4
  'th_any' => 'Max pomer',
  'th_ht' => 'Výška',
  'th_wd' => 'Šírka',
  'label' => 'návesť',
  'item' => 'vlajočky',
  'debug_everyone' => 'Každý',
  'debug_admin' => 'iba Admin',
  'no_logs'=> 'Vyp.', //cpg1.4
  'log_normal'=> 'Normal', //cpg1.4
  'log_all' => 'Všetko', //cpg1.4
  'view_logs' => 'Ukáž logy', //cpg1.4
  'click_expand' => 'klikni pre rozbalenie', //cpg1.4
  'expand_all' => 'Rozbaliť všetko', //cpg1.4
  'notice1' => '(*) Tieto nastavenia netreba meniť ak už máte súbory uložené v databáze .', //cpg1.4 - (relocated)
  'notice2' => '(**) Meniť tieto nastavenia má význam len pred pridávaním súborov do databázy. Existujúce súbory upravíte pomocou &quot;<a href="util.php">administrácie</a> (administračné nástroje)&quot; .', //cpg1.4 - (relocated)
  'notice3' => '(***) Všetky logy sú v anglickom jazyku.', //cpg1.4 - (relocated)
  'bbs_disabled' => 'Funkcia je vypnutá ak je použitá bb integrácia', //cpg1.4
  'auto_resize_everyone' => 'Každý', //cpg1.4
  'auto_resize_user' => 'Len užívateľ', //cpg1.4
  'ascending' => 'vzostupne', //cpg1.4
  'descending' => 'zostupne', //cpg1.4
);

if (defined('ADMIN_PHP')) $lang_admin_data = array(
  'Obecné nastavenia',
  array('Názov galérie', 'gallery_name', 0, 'f=index.htm&amp;as=admin_general_name&amp;ae=admin_general_name_end'), //cpg1.4
  array('Popis galérie', 'gallery_description', 0, 'f=index.htm&amp;as=admin_general_description&amp;ae=admin_general_description_end'), //cpg1.4
  array('Adminov email', 'gallery_admin_email', 0, 'f=index.htm&amp;as=admin_general_email&amp;ae=admin_general_email_end'), //cpg1.4
  array('URL adresára galérie (neuvádzajte tu \'index.php\' alebo podobné na konci)', 'ecards_more_pic_target', 0, 'f=index.htm&amp;as=admin_general_coppermine-url&amp;ae=admin_general_coppermine-url_end'), //cpg1.4
  array('URL Vašej domácej stránky', 'home_target', 0, 'f=index.htm&amp;as=admin_general_home-url&amp;ae=admin_general_home-url_end'), //cpg1.4
  array('Povoliť ZIP-download z obľúbených', 'enable_zipdownload', 1, 'f=index.htm&amp;as=admin_general_zip-download&amp;ae=admin_general_zip-download_end'), //cpg1.4
  array('Časový posun proti GMT (aktuálny čas: ' . localised_date(-1, $comment_date_fmt) . ')','time_offset',0, 'f=index.htm&amp;as=admin_general_time-offset&amp;ae=admin_general_time-offset_end&amp;top=1'), //cpg1.4
  array('Zapnúť kryptované heslá (nedá sa vrátiť)','enable_encrypted_passwords',1, 'f=index.htm&amp;as=admin_general_encrypt_password_start&amp;ae=admin_general_encrypt_password_end&amp;top=1'), // cpg 1.4
  array('Zapnúť help-ikony (help iba v angličtine)','enable_help',9, 'f=index.htm&amp;as=admin_general_help&amp;ae=admin_general_help_end'), //cpg1.4
  array('Zapnúť klikateľné kľúčové slová vo vyhľadávaní','clickable_keyword_search',14, 'f=index.htm&amp;as=admin_general_keywords_start&amp;ae=admin_general_keywords_end'), //cpg1.4
  array('Zapnúť zásuvné moduly', 'enable_plugins', 12, 'f=index.htm&amp;as=admin_general_enable-plugins&amp;ae=admin_general_enable-plugins_end'),  //cpg1.4
  array('Povoliť zakazovanie netrasovateľných IP adries ', 'ban_private_ip', 1,  'f=index.htm&amp;as=admin_general_private-ip&amp;ae=admin_general_private-ip_end'), //cpg1.4
  array('Vizuálne rozhranie hromadného pridávania súborov', 'browse_batch_add', 1, 'f=index.htm&amp;as=admin_general_browsable_batch_add&amp;ae=admin_general_browsable_batch_add_end'), //cpg1.4

  'Jazyky &amp; Znakové sady(kódovanie)',
  array('Jazyk', 'lang', 5, 'f=index.htm&amp;as=admin_language_language&amp;ae=admin_language_language_end'), //cpg1.4
  array('Prepnúť na angličtinu ak sa preklad nenájde?', 'language_fallback', 1, 'f=index.htm&amp;as=admin_language_fallback&amp;ae=admin_language_fallback_end'), //cpg1.4
  array('Kódovanie - Znakové sady', 'charset', 4, 'f=index.htm&amp;as=admin_language_charset&amp;ae=admin_language_charset_end'), //cpg1.4
  array('Zobraziť zoznam jazykov', 'language_list', 1, 'f=index.htm&amp;as=admin_language_list&amp;ae=admin_language_list_end'), //cpg1.4
  array('Zobraziť vlajočky jazykov', 'language_flags', 8, 'f=index.htm&amp;as=admin_language_flags&amp;ae=admin_language_flags_end&amp;top=1'), //cpg1.4
  array('Zobraziť &quot;reset&quot; vo voľbe jazykov', 'language_reset', 1, 'f=index.htm&amp;as=admin_language_reset&amp;ae=admin_language_reset_end&amp;top=1'), //cpg1.4
  //array('Display previous/next on tabbed pages', 'previous_next_tab', 1), //cpg1.4

  'Nastavenia vzhľadu',
  array('Vzhľad', 'theme', 6, 'f=index.htm&amp;as=admin_theme_theme&amp;ae=admin_theme_theme_end'), //cpg1.4
  array('Zobraziť zoznam vzhľadov', 'theme_list', 1, 'f=index.htm&amp;as=admin_theme_theme_list&amp;ae=admin_theme_theme_list_end'), //cpg1.4
  array('Zobraziť &quot;reset&quot; v zozname vzhľadov', 'theme_reset', 1, 'f=index.htm&amp;as=admin_theme_theme_reset&amp;ae=admin_theme_theme_reset_end'), //cpg1.4
  array('Zobraziť FAQ', 'display_faq', 1, 'f=index.htm&amp;as=admin_theme_faq&amp;ae=admin_theme_faq_end'), //cpg1.4
  array('Názov vlastnej linky v menu', 'custom_lnk_name', 0,'f=index.htm&amp;as=admin_theme_custom_lnk_name&amp;ae=admin_theme_custom_lnk_name_end'), //cpg1.4
  array('URL vlastnej linky v menu', 'custom_lnk_url', 0,'f=index.htm&amp;as=admin_language_custom_lnk_url&amp;ae=admin_language_custom_lnk_url_end'), //cpg1.4
  array('Zobrazovať bbcode help', 'show_bbcode_help', 1, 'f=index.htm&amp;as=admin_theme_bbcode&amp;ae=admin_theme_bbcode_end&amp;top=1'), //cpg1.4
  array('Zobraziť Vanity Block ktorý je definavaný v súlade s XHTML a CSS','vanity_block',1, 'f=index.htm&amp;as=vanity_block&amp;ae=vanity_block_end'), //cpg1.4
  array('Cesta pre zákaznícky header include', 'custom_header_path', 0, 'f=index.htm&amp;as=admin_theme_include_path_start&amp;ae=admin_theme_include_path_end'), //cpg1.4
  array('Cesta pre zákaznícky footer include', 'custom_footer_path', 0, 'f=index.htm&amp;as=admin_theme_include_path_start&amp;ae=admin_theme_include_path_end'), //cpg1.4

  'Zobrazovanie zoznamu albumov',
  array('Šírka hlavnej tabuľky (pixely alebo %)', 'main_table_width', 0, 'f=index.htm&amp;as=admin_album_table-width&amp;ae=admin_album_table-width_end'), //cpg1.4
  array('Počet úrovní kategórií k zobrazeniu', 'subcat_level', 0, 'f=index.htm&amp;as=admin_album_category-levels&amp;ae=admin_album_category-levels_end'), //cpg1.4
  array('Počet albumov k zobrazeniu', 'albums_per_page', 0, 'f=index.htm&amp;as=admin_album_number&amp;ae=admin_album_number_end'), //cpg1.4
  array('Počet stĺpcov pre zoznam albumov', 'album_list_cols', 0, 'f=index.htm&amp;as=admin_album_columns&amp;ae=admin_album_columns_end'), //cpg1.4
  array('Veľkosť náhľadu v pixeloch', 'alb_list_thumb_size', 0, 'f=index.htm&amp;as=admin_album_thumbnail-size&amp;ae=admin_album_thumbnail-size_end'), //cpg1.4
  array('Obsah hlavnej stánky', 'main_page_layout', 0, 'f=index.htm&amp;as=admin_album_list_content&amp;ae=admin_album_list_content_end'), //cpg1.4
  array('Zobraziť náhľady z albumu prvej úrovne v kategórii','first_level',1, 'f=index.htm&amp;as=admin_album_first-level_thumbs&amp;ae=admin_album_first-level_thumbs_end'), //cpg1.4
  array('Triediť kategórie abecedne (namiesto užívateľského)','categories_alpha_sort',1, 'f=index.htm&amp;as=admin_album_list_alphasort_start&amp;ae=admin_album_list_alphasort_end'), //cpg1.4
  array('Zobraziť počet linkovaných súborov','link_pic_count',1, 'f=index.htm&amp;as=admin_album_linked_files_start&amp;ae=admin_album_linked_files_end'), //cpg1.4

  'Zobrazovanie náhľadov',
  array('Počet stĺpcov na stránke náhľadov', 'thumbcols', 0, 'f=index.htm&amp;as=admin_thumbnail_columns&amp;ae=admin_thumbnail_columns_end'), //cpg1.4
  array('Počet riadkov na stránke náhľadov', 'thumbrows', 0, 'f=index.htm&amp;as=admin_thumbnail_rows&amp;ae=admin_thumbnail_rows_end'), //cpg1.4
  array('Maximum pre zobrazenie Tabs', 'max_tabs', 10, 'f=index.htm&amp;as=admin_thumbnail_tabs&amp;ae=admin_thumbnail_tabs_end'), //cpg1.4
  array('Zobraziť popis súboru pod náhľadom', 'caption_in_thumbview', 1, 'f=index.htm&amp;as=admin_thumbnail_display_caption&amp;ae=admin_thumbnail_display_caption_end'), //cpg1.4
  array('Zobraziť počet zobrazení pod náhľadom', 'views_in_thumbview', 1, 'f=index.htm&amp;as=admin_thumbnail_display_views&amp;ae=admin_thumbnail_display_views_end'), //cpg1.4
  array('Zobraziť počet komentárov pod náhľadom', 'display_comment_count', 1, 'f=index.htm&amp;as=admin_thumbnail_display_comments&amp;ae=admin_thumbnail_display_comments_end'), //cpg1.4
  array('Zobraziť meno pridávajúceho člena pod náhľadom', 'display_uploader', 1, 'f=index.htm&amp;as=admin_thumbnail_display_uploader&amp;ae=admin_thumbnail_display_uploader_end'), //cpg1.4
  //array('Display name of admin uploaders below the thumbnail', 'display_admin_uploader', 1, 'f=index.htm&amp;as=admin_thumbnail_display_admin_uploader&amp;ae=admin_thumbnail_display_admin_uploader_end'), //cpg1.4
  array('Zobraziť meno súboru pod náhľadom', 'display_filename', 1, 'f=index.htm&amp;as=admin_thumbnail_display_filename&amp;ae=admin_thumbnail_display_filename_end'), //cpg1.4
  //array('Zobraziť popis albumu', 'alb_desc_thumb', 1, 'f=index.htm&amp;as=admin_thumbnail_display_description&amp;ae=admin_thumbnail_display_description_end'), //cpg1.4
  array('Východzie zoradenie súborov', 'default_sort_order', 3, 'f=index.htm&amp;as=admin_thumbnail_default_sortorder&amp;ae=admin_thumbnail_default_sortorder_end'), //cpg1.4
  array('Minimum počet hlasov pre zaradenie do zoznamu \'top-hodnotený\'', 'min_votes_for_rating', 0, 'f=index.htm&amp;as=admin_thumbnail_minimum_votes&amp;ae=admin_thumbnail_minimum_votes_end'), //cpg1.4

  'Zobrazovanie obrázkov', //cpg1.4
  array('Šírka hlavnej tabuľky (pixely alebo %)', 'picture_table_width', 0, 'f=index.htm&amp;as=admin_image_comment_table-width&amp;ae=admin_image_comment_table-width_end'), //cpg1.4
  array('Informácie o súbore sú viditeľné súčasne s obrázkom', 'display_pic_info', 1, 'f=index.htm&amp;as=admin_image_comment_info_visible&amp;ae=admin_image_comment_info_visible_end'), //cpg1.4
  array('Maximálny počet znakov pre popis obrázku', 'max_img_desc_length', 0, 'f=index.htm&amp;as=admin_image_comment_descr_length&amp;ae=admin_image_comment_descr_length_end'), //cpg1.4
  array('Maximálny počet znakov v slove', 'max_com_wlength', 0, 'f=index.htm&amp;as=admin_image_comment_chars_per_word&amp;ae=admin_image_comment_chars_per_word_end'), //cpg1.4
  array('Zobrazovať prúžok filmu', 'display_film_strip', 1, 'f=index.htm&amp;as=admin_image_comment_filmstrip_toggle&amp;ae=admin_image_comment_filmstrip_toggle_end'), //cpg1.4
  array('Zobrazovať názov súboru pod prúžkom filmu', 'display_film_strip_filename', 1, 'f=index.htm&amp;as=admin_image_comment_display_film_strip_filename&amp;ae=admin_image_comment_display_film_strip_filename_end'), //cpg1.4
  array('Počet náhľadov v prúžku filmu', 'max_film_strip_items', 0, 'f=index.htm&amp;as=admin_image_comment_filmstrip_number&amp;ae=admin_image_comment_filmstrip_number_end'), //cpg1.4
  array('Slideshow interval v milisekundách (1 s = 1000 ms)', 'slideshow_interval', 0, 'f=index.htm&amp;as=admin_image_comment_slideshow_interval&amp;ae=admin_image_comment_slideshow_interval_end'), //cpg1.4

  'Nastavenia komentárov', //cpg1.4
  array('Filter nevhodných slov v komentároch', 'filter_bad_words', 1, 'f=index.htm&amp;as=admin_image_comment_bad_words&amp;ae=admin_image_comment_bad_words_end'), //cpg1.4
  array('Povoliť smajlíkov', 'enable_smilies', 1, 'f=index.htm&amp;as=admin_image_comment_smilies&amp;ae=admin_image_comment_smilies_end'), //cpg1.4
  array('Povoliť ďašie komentáre k jednému súboru od rovnakého člena (odporúčame:NIE)', 'disable_comment_flood_protect', 1, 'f=index.htm&amp;as=admin_image_comment_flood&amp;ae=admin_image_comment_flood_end'), //cpg1.4
  array('Maximálny počet riadkov', 'max_com_lines', 0, 'f=index.htm&amp;as=admin_image_comment_lines&amp;ae=admin_image_comment_lines_end'), //cpg1.4
  array('Maximálny počet znakov pre komentár', 'max_com_size', 0, 'f=index.htm&amp;as=admin_image_comment_length&amp;ae=admin_image_comment_length_end'), //cpg1.4
  array('Upozorniť admina emailom na nový komentár', 'email_comment_notification', 1, 'f=index.htm&amp;as=admin_image_comment_admin_notify&amp;ae=admin_image_comment_admin_notify_end'), //cpg1.4
  array('Usporiadanie zoznamu', 'comments_sort_descending', 17, 'f=index.htm&amp;as=admin_comment_sort_start&amp;ae=admin_comment_sort_end'), //cpg1.4
  array('Prefix pre anonymov', 'comments_anon_pfx', 0, 'f=index.htm&amp;as=comments_anon_pfx&amp;ae=comments_anon_pfx_end'), //cpg1.4

  'Nastavenia pre súbory a náhľady',
  array('Kvalita pre JPEG súbory', 'jpeg_qual', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_jpeg_quality&amp;ae=admin_picture_thumbnail_jpeg_quality_end'), //cpg1.4
  array('Maximálny rozmer náhľadu <a href="#notice2" class="clickable_option">**</a>', 'thumb_width', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max-dimension&amp;ae=admin_picture_thumbnail_max-dimension_end'), //cpg1.4
  array('Použi rozmer pre náhľad <a href="#notice2" class="clickable_option">**</a>', 'thumb_use', 7, 'f=index.htm&amp;as=admin_picture_thumbnail_use-dimension&amp;ae=admin_picture_thumbnail_use-dimension_end'), //cpg1.4
  array('Vytvárať stredné obrázky ','make_intermediate',1, 'f=index.htm&amp;as=admin_picture_thumbnail_intermediate_toggle&amp;ae=admin_picture_thumbnail_intermediate_toggle_end'), //cpg1.4
  array('Max šírka alebo výška pre stredný obrázok/video <a href="#notice2" class="clickable_option">**</a>', 'picture_width', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_intermediate_dimension&amp;ae=admin_picture_thumbnail_intermediate_dimension_end'), //cpg1.4
  array('Max veľkosť pre pridávaný súbor (KB)', 'max_upl_size', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max_upload_size&amp;ae=admin_picture_thumbnail_max_upload_size_end'), //cpg1.4
  array('Max šírka alebo výška pre pridávaný obrázok/video (pixely)', 'max_upl_width_height', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max_upload_dimension&amp;ae=admin_picture_thumbnail_max_upload_dimension_end'), //cpg1.4
  array('Automaticky zmenšiť pridávané obrázky (ak sú väčšie ako povolené maximá)', 'auto_resize', 16, 'f=index.htm&amp;as=admin_picture_thumbnail_auto-resize&amp;ae=admin_picture_thumbnail_auto-resize_end'), //cpg1.4

  'Nastavenia (rozšírené) pre súbory a náhľady',
  array('Povoliť privátne albumy ', 'allow_private_albums', 1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_private_toggle&amp;ae=admin_picture_thumb_advanced_private_toggle_end'), //cpg1.4
  array('Zobraziť ikonu privatnych albumov pre neprihlásených','show_private',1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_private_icon_show&amp;ae=admin_picture_thumb_advanced_private_icon_show_end'), //cpg1.4
  array('Nepovolené znaky v názvoch', 'forbiden_fname_char',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_filename_forbidden_chars&amp;ae=admin_picture_thumb_advanced_filename_forbidden_chars_end'), //cpg1.4
  //array('Accepted file extensions for uploaded pictures', 'allowed_file_extensions',0, 'f=index.htm&amp;as=&amp;ae=_end'), //cpg1.4
  array('Povolené typy obrázkov', 'allowed_img_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_pic_extensions&amp;ae=admin_picture_thumb_advanced_pic_extensions_end'), //cpg1.4
  array('Povolené typy videa', 'allowed_mov_types',0, 'f=index.htm&amp;as=admin_thumbs_advanced_movie&amp;ae=admin_thumbs_advanced_movie_end'), //cpg1.4
  array('Automaticky prehrať video', 'media_autostart',1, 'f=index.htm&amp;as=admin_movie_autoplay&amp;ae=admin_movie_autoplay_end'), //cpg1.4
  array('Povolené typy pre audio', 'allowed_snd_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_audio_extensions&amp;ae=admin_picture_thumb_advanced_audio_extensions_end'), //cpg1.4
  array('Povolené typy dokumentov', 'allowed_doc_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_doc_extensions&amp;ae=admin_picture_thumb_advanced_doc_extensions_end'), //cpg1.4
  array('Metóda spracovania obrázkov','thumb_method',2, 'f=index.htm&amp;as=admin_picture_thumb_advanced_resize_method&amp;ae=admin_picture_thumb_advanced_resize_method_end'), //cpg1.4
  array('Cesta pre ImageMagick \'convert\' utility (napr. /usr/bin/X11/)', 'impath', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_im_path&amp;ae=admin_picture_thumb_advanced_im_path_end'), //cpg1.4
  //array('Allowed image types (only valid for ImageMagick)', 'allowed_img_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_allowed_imagetypes&amp;ae=admin_picture_thumb_advanced_allowed_imagetypes_end'), //cpg1.4
  array('Príkazový riadok pre ImageMagick', 'im_options', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_im_commandline&amp;ae=admin_picture_thumb_advanced_im_commandline_end'), //cpg1.4
  array('Čítať EXIF dáta z JPEG ', 'read_exif_data', 13, 'f=index.htm&amp;as=admin_picture_thumb_advanced_exif&amp;ae=admin_picture_thumb_advanced_exif_end'), //cpg1.4
  array('Čítať IPTC dáta z JPEG', 'read_iptc_data', 1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_iptc&amp;ae=admin_picture_thumb_advanced_iptc_end'), //cpg1.4
  array('Adresár albumov <a href="#notice1" class="clickable_option">*</a>', 'fullpath', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_albums_dir&amp;ae=admin_picture_thumb_advanced_albums_dir_end'), //cpg1.4
  array('Adresár užívateľských súborov <a href="#notice1" class="clickable_option">*</a>', 'userpics', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_userpics_dir&amp;ae=admin_picture_thumb_advanced_userpics_dir_end'), //cpg1.4
  array('Prefix pre stredné obrázky <a href="#notice1" class="clickable_option">*</a>', 'normal_pfx', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_intermediate_prefix&amp;ae=admin_picture_thumb_advanced_intermediate_prefix_end'), //cpg1.4
  array('Prefix pre náhľady <a href="#notice1" class="clickable_option">*</a>', 'thumb_pfx', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_thumbs_prefix&amp;ae=admin_picture_thumb_advanced_thumbs_prefix_end'), //cpg1.4
  array('Default mód pre adresáre', 'default_dir_mode', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_chmod_folder&amp;ae=admin_picture_thumb_advanced_chmod_folder_end'), //cpg1.4
  array('Default mód pre súbory', 'default_file_mode', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_chmod_files&amp;ae=admin_picture_thumb_advanced_chmod_files_end'), //cpg1.4

  'Nastavenia užívateľov',
  array('Povoliť návštevníkom registráciu', 'allow_user_registration', 1, 'f=index.htm&amp;as=admin_allow_registration&amp;ae=admin_allow_registration_end'), //cpg1.4
  array('Povoliť prístup neprihláseným', 'allow_unlogged_access', 1, 'f=index.htm&amp;as=admin_allow_unlogged_access&amp;ae=admin_allow_unlogged_access_end'), //cpg1.4
  array('Aktivácia registrácie emailom', 'reg_requires_valid_email', 1, 'f=index.htm&amp;as=admin_registration_verify&amp;ae=admin_registration_verify_end'), //cpg1.4
  array('Upozorni admina na novú registráciu', 'reg_notify_admin_email', 1, 'f=index.htm&amp;as=admin_registration_notify&amp;ae=admin_registration_notify_end'), //cpg1.4
  array('Admin aktivuje registrácie', 'admin_activation', 1, 'f=index.htm&amp;as=admin_activation&amp;ae=admin_activation_end'),  //cpg1.4
  array('Povoliť dvom užívateľom použiť rovnaký email', 'allow_duplicate_emails_addr', 1, 'f=index.htm&amp;as=admin_allow_duplicate_emails_addr&amp;ae=admin_allow_duplicate_emails_addr_end'), //cpg1.4
  array('Upozorniť admina na schválenie užívateľského pridania súborov', 'upl_notify_admin_email', 1, 'f=index.htm&amp;as=admin_approval_notify&amp;ae=admin_approval_notify_end'), //cpg1.4
  array('Umožniť prihláseným vidieť zoznam členov', 'allow_memberlist', 1, 'f=index.htm&amp;as=admin_user_memberlist&amp;ae=admin_user_memberlist_end'), //cpg1.4
  array('Umožniť členom meniť svoj email', 'allow_email_change', 1, 'f=index.htm&amp;as=admin_user_allow_email_change&amp;ae=admin_user_allow_email_change_end'), //cpg1.4
  array('Umožniť členom kontrolu nad ich obr. vo verejných albumoch', 'users_can_edit_pics', 1, 'f=index.htm&amp;as=admin_user_editpics_public_start&amp;ae=admin_user_editpics_public_end'), //cpg1.4
  array('Počet neplatných prihlásení pred dočasným zakázaním', 'login_threshold', 0, 'f=index.htm&amp;as=admin_user_login_start&amp;ae=admin_user_login_end'), //cpg1.4
  array('Trvanie dočasného zakázania', 'login_expiry', 0, 'f=index.htm&amp;as=admin_user_login_start&amp;ae=admin_user_login_end'), //cpg1.4
  array('Zapnúť hlásenia adminovi', 'report_post', 1, 'f=index.htm&amp;as=admin_user_enable_report&amp;ae=admin_user_enable_report_end'),  //cpg1.4

// custom profile fields,  //cpg1.4
  'Vlastné názvy vstupných užív. profilov (môže byť prázdne).
  Profile 6 je pre dlhé texty.', //cpg1.4
  array('Profil 1 názov', 'user_profile1_name', 0, 'f=index.htm&amp;as=admin_custom&amp;ae=admin_custom_end'), //cpg1.4
  array('Profil 2 názov', 'user_profile2_name', 0), //cpg1.4
  array('Profil 3 názov', 'user_profile3_name', 0), //cpg1.4
  array('Profil 4 názov', 'user_profile4_name', 0), //cpg1.4
  array('Profil 5 názov', 'user_profile5_name', 0), //cpg1.4
  array('Profil 6 názov', 'user_profile6_name', 0), //cpg1.4

  'Vlastné názvy vstupných políčiek popisu obrázkov (môže byť prázdne)',
  array('Políčko 1 názov', 'user_field1_name', 0, 'f=index.htm&amp;as=admin_custom_image&amp;ae=admin_custom_image_end'), //cpg1.4
  array('Políčko 2 názov', 'user_field2_name', 0),
  array('Políčko 3 názov', 'user_field3_name', 0),
  array('Políčko 4 názov', 'user_field4_name', 0),

  'Nastavenia Cookies',
  array('Cookie názov', 'cookie_name', 0, 'f=index.htm&amp;as=admin_cookie_name&amp;ae=admin_cookie_name_end'), //cpg1.4
  array('Cookie cesta', 'cookie_path', 0, 'f=index.htm&amp;as=admin_cookie_path&amp;ae=admin_cookie_path_end'), //cpg1.4

  'Nastavenia Emailu (nechať prázdne, ak ste si nie istý)', //cpg1.4
  array('SMTP Host (when left blank, sendmail will be used)', 'smtp_host', 0, 'f=index.htm&amp;as=admin_email&amp;ae=admin_email_end'), //cpg1.4
  array('SMTP Username', 'smtp_username', 0), //cpg1.4
  array('SMTP Password', 'smtp_password', 0), //cpg1.4

  'Logging a štatistiky', //cpg1.4
  array('Logging mód <a href="#notice3" class="clickable_option">***</a>', 'log_mode', 11, 'f=index.htm&amp;as=admin_logging_log_mode&amp;ae=admin_logging_log_mode_end'), //cpg1.4
  array('Loguj e-pohľadnice', 'log_ecards', 1, 'f=index.htm&amp;as=admin_general_log_ecards&amp;ae=admin_general_log_ecards_end'), //cpg1.4
  array('Udržiavať detailnú štatistiku hlasovaní','vote_details',1, 'f=index.htm&amp;as=admin_logging_votedetails&amp;ae=admin_logging_votedetails_end'), //cpg1.4
  array('Udržiavať detailnú štatistiku prehliadania','hit_details',1, 'f=index.htm&amp;as=admin_logging_hitdetails&amp;ae=admin_logging_hitdetails_end'), //cpg1.4

  'Nastavenia údržbárske (pre skúsených)', //cpg1.4
  array('Zapnúť debug mód', 'debug_mode', 9, 'f=index.htm&amp;as=debug_mode&amp;ae=debug_mode_end'), //cpg1.4
  array('Zobrazovať poznámky v debug móde', 'debug_notice', 1, 'f=index.htm&amp;as=admin_misc_debug_notices&amp;ae=admin_misc_debug_notices_end'), //cpg1.4
  array('Galéria je OFFLINE (neprístupná)', 'offline', 1, 'f=index.htm&amp;as=admin_general_offline&amp;ae=admin_general_offline_end'), //cpg1.4
);


// ------------------------------------------------------------------------- //
// File db_ecard.php
// ------------------------------------------------------------------------- //

if (defined('DB_ECARD_PHP')) $lang_db_ecard_php = array(
  'title' => 'Poslať e-pohľadnicu',
  'ecard_sender' => 'Odosielateľ',
  'ecard_recipient' => 'Príjemca',
  'ecard_date' => 'Dátum',
  'ecard_display' => 'Zobraziť e-pohľadnicu',
  'ecard_name' => 'Meno',
  'ecard_email' => 'Email',
  'ecard_ip' => 'IP #',
  'ecard_ascending' => 'vzostupne',
  'ecard_descending' => 'zostupne',
  'ecard_sorted' => 'Zotriedené',
  'ecard_by_date' => 'podľa dátumu',
  'ecard_by_sender_name' => 'podľa mena odosielateľa',
  'ecard_by_sender_email' => 'podľa emailu odesielateľa',
  'ecard_by_sender_ip' => 'podľa IP addressy odesielateľa',
  'ecard_by_recipient_name' => 'podľa mena príjemcu',
  'ecard_by_recipient_email' => 'podľa emailu príjemcu',
  'ecard_number' => 'zobrazenie záznamu %s až %s z %s',
  'ecard_goto_page' => 'choď na stranu',
  'ecard_records_per_page' => 'Záznamov na strane',
  'check_all' => 'Označit všetko',
  'uncheck_all' => 'Odznačit všetko',
  'ecards_delete_selected' => 'Zmazať vybrané e-pohľadnice',
  'ecards_delete_confirm' => 'Ste si istý, že chcete zmazať záznamy? Označte kontrolné okienko!',
  'ecards_delete_sure' => 'Som si istý.',
);


// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
  'empty_name_or_com' => 'Vložte Vaše meno a Váš komentár',
  'com_added' => 'Váš komentár bol pridaný',
  'alb_need_title' => 'Zadajte názov pre album !',
  'no_udp_needed' => 'Aktualizácia nie je potrebná.',
  'alb_updated' => 'Album bol aktualizovaný',
  'unknown_album' => 'Vybraný album neexistuje alebo nemáte práva pre pridávanie do tejto galérie',
  'no_pic_uploaded' => 'Žiadny súbor nebol pridaný !<br /><br />Skontrlujte, či server podporuje pridávanie súborov...',
  'err_mkdir' => 'Vytvorenie adresára %s zlyhalo!',
  'dest_dir_ro' => 'Do adresára %s nemôže skript zapisovať !',
  'err_move' => 'Nemožno presunúť %s do %s !',
  'err_fsize_too_large' => 'Veľkosť súboru bola prekročená (maximum je %s x %s) !', //obsolete since cpg1.3 - consider removal in cpg1.4 once upload.php has been overhauled
  'err_imgsize_too_large' => 'Veľkosť súboru bola prekročená (maximum je %s KB) !', //obsolete since cpg1.3 - consider removal in cpg1.4 once upload.php has been overhauled
  'err_invalid_img' => 'Súbor nie je povolený obrázok !',
  'allowed_img_types' => 'Môžete pridať iba %s obrázkov.',
  'err_insert_pic' => 'Obrázok \'%s\' nie je možné vložiť do albumu ',
  'upload_success' => 'Váš súbor bol pridaný.<br /><br />Bude viditeľný po schválení administrátorom.',
  'notify_admin_email_subject' => '%s - Hlásenie pridania',
  'notify_admin_email_body' => 'Člen %s pridal súbor, ktorý vyžaduje autorizáciu. Navštívte %s',
  'info' => 'Informácia',
  'com_added' => 'Komentár pridaný',
  'alb_updated' => 'Album aktualizovaný',
  'err_comment_empty' => 'Váš komentár je prázdny !',
  'err_invalid_fext' => 'Iba súbory s následujúcimi koncovkami sú podporované : <br /><br />%s.',
  'no_flood' => 'Prepáčte, ale ste autor posledného komentára k tomuto súboru.<br /><br />Použite voľbu na úpravu komentára',
  'redirect_msg' => 'Práve ste boli presmerovaný.<br /><br /><br />Kliknite na \'POKRAČOVAT\' pokiaľ sa stránka nepresmeruje sama',
  'upl_success' => 'Váš súbor bol v poriadku pridaný',
  'email_comment_subject' => 'Komentár bol pridaný do Coppermine Photo Gallery',
  'email_comment_body' => 'Niekto pridal komentár do Vašej galérie. Prezrite si ho na',
  'album_not_selected' => 'Album nebol vybraný', //cpg1.4
  'com_author_error' => 'Registrovaný člen už používa túto prezývku, login or use another one', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
  'caption' => 'Záhlavie',
  'fs_pic' => 'plná veľkosť obrázku',
  'del_success' => 'úspešne zmazané',
  'ns_pic' => 'normálna veľkosť obrázku',
  'err_del' => 'nemožno zmazať',
  'thumb_pic' => 'náhľad',
  'comment' => 'komentár',
  'im_in_alb' => 'obrázok v albume',
  'alb_del_success' => 'Album &laquo;%s&raquo; zmazaný', //cpg1.4
  'alb_mgr' => 'Správca albumov',
  'err_invalid_data' => 'Chybné dáta prijaté v \'%s\'',
  'create_alb' => 'Vytváram album \'%s\'',
  'update_alb' => 'Aktualizujem album \'%s\' s nadpisom \'%s\' a zoznamom \'%s\'',
  'del_pic' => 'Zmazať obrázok',
  'del_alb' => 'Zmazať album',
  'del_user' => 'Zmazať člena',
  'err_unknown_user' => 'Vybraný člen neexistuje !',
  'err_empty_groups' => 'Neexistuje tabuľka skupiny, alebo tabuľka nie je prázdna!', //cpg1.4
  'comment_deleted' => 'Komentár bol úspešne zmazaný',
  'npic' => 'Obrázok', //cpg1.4
  'pic_mgr' => 'Správca obrázkov', //cpg1.4
  'update_pic' => 'Aktualizujem obrázok \'%s\' s názvom \'%s\' a indexom \'%s\'', //cpg1.4
  'username' => 'Meno člena', //cpg1.4
  'anonymized_comments' => '%s komentár anonymizovaný', //cpg1.4
  'anonymized_uploads' => '%s verejné pridanie anonymizované', //cpg1.4
  'deleted_comments' => '%s komentár zmazaný', //cpg1.4
  'deleted_uploads' => '%s verejné pridanie zmazané', //cpg1.4
  'user_deleted' => 'člen %s zmazaný', //cpg1.4
  'activate_user' => 'Aktivovať člena', //cpg1.4
  'user_already_active' => 'Účet už je aktívny', //cpg1.4
  'activated' => 'Aktivované', //cpg1.4
  'deactivate_user' => 'Deaktivovať člena', //cpg1.4
  'user_already_inactive' => 'Účet už je neaktívny', //cpg1.4
  'deactivated' => 'Deaktivované', //cpg1.4
  'reset_password' => 'Resetovať heslo', //cpg1.4
  'password_reset' => 'Heslo resetované na %s', //cpg1.4
  'change_group' => 'Zmeniť primárnu skupinu', //cpg1.4
  'change_group_to_group' => 'Zmeniť z %s na %s', //cpg1.4
  'add_group' => 'Pridať sekundárnu skupinu', //cpg1.4
  'add_group_to_group' => 'Pridávanie člena %s do skupiny %s. Teraz je členom %s ako primárnej a členom %s ako sekundárnej skupiny členov.', //cpg1.4
  'status' => 'Stav', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File displayecard.php
// ------------------------------------------------------------------------- //

if (defined('DISPLAYECARD_PHP')) {

$lang_displayecard_php = array(
  'invalid_data' => 'The data for the ecard you are trying to access has been corrupted by your mail client. Check the link is complete.', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File displayimage.php
// ------------------------------------------------------------------------- //

if (defined('DISPLAYIMAGE_PHP')){

$lang_display_image_php = array(
  'confirm_del' => 'Ste si istý, že chcete ZMAZAŤ tento súbor? \\nPriložené komentáre budú tiež zmazané.', //js-alert
  'del_pic' => 'ZMAZAŤ TENTO SÚBOR',
  'size' => '%s x %s pixelov',
  'views' => '%s krát',
  'slideshow' => 'Automatické prezeranie',
  'stop_slideshow' => 'ZASTAVIŤ PREZERANIE',
  'view_fs' => 'Kliknite pre zobrazenie v plnom rozlíšení',
  'edit_pic' => 'Edituj info o súbore', //cpg1.4
  'crop_pic' => 'Orezať/Otočiť',
  'set_player' => 'Zmeniť prehrávač',
);

$lang_picinfo = array(
  'title' =>'Informácie o súbore',
  'Filename' => 'Názov súboru',
  'Album name' => 'Názov albumu',
  'Rating' => 'Hodnotenie (%s hlasov)',
  'Keywords' => 'Kľúčové slová',
  'File Size' => 'Veľkosť súboru',
  'Date Added' => 'Dátum pridania', //cpg1.4
  'Dimensions' => 'Rozmery',
  'Displayed' => 'Zobrazené',
  'URL' => 'URL', //cpg1.4
  'Make' => 'Vytvorené', //cpg1.4
  'Model' => 'Model', //cpg1.4
  'DateTime' => 'Dátum Čas', //cpg1.4
  'ISOSpeedRatings'=>'ISO', //cpg1.4
  'MaxApertureValue' => 'Max. clona', //cpg1.4
  'FocalLength' => 'Ohnisková vzdialenosť', //cpg1.4
  'Comment' => 'Komentár',
  'addFav'=>'Pridať k obľúbeným',
  'addFavPhrase'=>'Obľúbené',
  'remFav'=>'Odobrať z obľúbených',
  'iptcTitle'=>'IPTC Title',
  'iptcCopyright'=>'IPTC Copyright',
  'iptcKeywords'=>'IPTC Keywords',
  'iptcCategory'=>'IPTC Category',
  'iptcSubCategories'=>'IPTC Sub Categories',
  'ColorSpace' => 'Farebný priestor', //cpg1.4
  'ExposureProgram' => 'Expozičný program', //cpg1.4
  'Flash' => 'Blesk', //cpg1.4
  'MeteringMode' => 'Mód merania', //cpg1.4
  'ExposureTime' => 'Expozičný čas', //cpg1.4
  'ExposureBiasValue' => 'Korekcia expozície', //cpg1.4
  'ImageDescription' => 'Popis obrázku', //cpg1.4
  'Orientation' => 'Orientácia', //cpg1.4
  'xResolution' => 'X Rozlíšenie', //cpg1.4
  'yResolution' => 'Y Rozlíšenie', //cpg1.4
  'ResolutionUnit' => 'Jednotka rozlíšenia', //cpg1.4
  'Software' => 'Software', //cpg1.4
  'YCbCrPositioning' => 'YCbCrPositioning', //cpg1.4
  'ExifOffset' => 'Exif Offset', //cpg1.4
  'IFD1Offset' => 'IFD1 Offset', //cpg1.4
  'FNumber' => 'F číslo', //cpg1.4
  'ExifVersion' => 'Exif verzia', //cpg1.4
  'DateTimeOriginal' => 'Dátum/Čas Original', //cpg1.4
  'DateTimedigitized' => 'Dátum/Čas digitalizácie', //cpg1.4
  'ComponentsConfiguration' => 'Components Configuration', //cpg1.4
  'CompressedBitsPerPixel' => 'Kompresia Bitov na Pixel', //cpg1.4
  'LightSource' => 'Zdroj svetla', //cpg1.4
  'ISOSetting' => 'ISO nastavenie', //cpg1.4
  'ColorMode' => 'Farebný mód', //cpg1.4
  'Quality' => 'Kvalita', //cpg1.4
  'ImageSharpening' => 'Doostrenie', //cpg1.4
  'FocusMode' => 'Fokus mód', //cpg1.4
  'FlashSetting' => 'Nastavenie blesku', //cpg1.4
  'ISOSelection' => 'ISO voľba', //cpg1.4
  'ImageAdjustment' => 'Upravenie obrázku', //cpg1.4
  'Adapter' => 'Adaptér', //cpg1.4
  'ManualFocusDistance' => 'Manual Fokus vzdialenosť', //cpg1.4
  'DigitalZoom' => 'Digital Zoom', //cpg1.4
  'AFFocusPosition' => 'AF Focus pozícia', //cpg1.4
  'Saturation' => 'Saturácia', //cpg1.4
  'NoiseReduction' => 'Redukcia šumu', //cpg1.4
  'FlashPixVersion' => 'Flash Pix Version', //cpg1.4
  'ExifImageWidth' => 'Exif šírka', //cpg1.4
  'ExifImageHeight' => 'Exif výška', //cpg1.4
  'ExifInteroperabilityOffset' => 'Exif Interoperability Offset', //cpg1.4
  'FileSource' => 'Zdroj', //cpg1.4
  'SceneType' => 'Typ scény', //cpg1.4
  'CustomerRender' => 'Customer Render', //cpg1.4
  'ExposureMode' => 'Expozičný mód', //cpg1.4
  'WhiteBalance' => 'Vyváženie bielej', //cpg1.4
  'DigitalZoomRatio' => 'Digital Zoom pomer', //cpg1.4
  'SceneCaptureMode' => 'Scene Capture Mode', //cpg1.4
  'GainControl' => 'Citlivosť', //cpg1.4
  'Contrast' => 'Kontrast', //cpg1.4
  'Sharpness' => 'Doostrenie', //cpg1.4
  'ManageExifDisplay' => 'Vybrať Exif položky k zobrazeniu', //cpg1.4
  'submit' => 'Odoslať', //cpg1.4
  'success' => 'Informácia úspešne aktualizovaná.', //cpg1.4
  'details' => 'Detaily', //cpg1.4
);

$lang_display_comments = array(
  'OK' => 'OK',
  'edit_title' => 'Upraviť tento komentár',
  'confirm_delete' => 'Ste si istý, že chcete zmazať tento komentár ?', //js-alert
  'add_your_comment' => 'Pridať komentár',
  'name'=>'Meno',
  'comment'=>'Komentár',
  'your_name' => 'Anonym',
  'report_comment_title' => 'Upozorni administrátora na tento príspevok', //cpg1.4
);

$lang_fullsize_popup = array(
  'click_to_close' => 'Kliknutím na obrázok zatvoríte okno.',
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
  'title' => 'Pošli e-pohľadnicu',
  'invalid_email' => '<font color="red"><b>Warning</b></font>: neplatná emailová adresa:', //cpg1.4
  'ecard_title' => 'Pohľadnica od %s pre Teba',
  'error_not_image' => 'Iba obrázky môžu byť poslané ako e-pohľadnica.',
  'view_ecard' => 'Alternatívna linka ak sa pohľadnica nezobrazila správne.', //cpg1.4
  'view_ecard_plaintext' => 'Pre zobrazenie pohľadnice, kopíruj a vlož túto url do adresného riadku prehliadača:', //cpg1.4
  'view_more_pics' => 'Ďaľšie obrázky tu!', //cpg1.4
  'send_success' => 'Pohľadnica bola odoslaná',
  'send_failed' => 'Prepáčte, ale server nemohol odoslať Vašu pohľadnicu...',
  'from' => 'Od',
  'your_name' => 'Vaše meno',
  'your_email' => 'Váš email',
  'to' => 'Komu',
  'rcpt_name' => 'Meno príjemcu',
  'rcpt_email' => 'Email príjemcu',
  'greetings' => 'Záhlavie', //cpg1.4
  'message' => 'Správa', //cpg1.4
  'ecards_footer' => 'Poslal %s s IP %s o %s (Gallery time)', //cpg1.4
  'preview' => 'Náhľad pohľadnice', //cpg1.4
  'preview_button' => 'Náhľad', //cpg1.4
  'submit_button' => 'Pošli pohľadnicu', //cpg1.4
  'preview_view_ecard' => 'Toto je alternatívna linka k pohľadnici ak bola skutočne vygenerovaná, neslúži ako náhľad.', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File report_file.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('REPORT_FILE_PHP') || defined('DISPLAYREPORT_PHP')) $lang_report_php =array(
  'title' => 'Upozornenie pre administrátora', //cpg1.4
  'invalid_email' => '<b>Varovanie</b> : neplatná emailová adresa !', //cpg1.4
  'report_subject' => 'Hlásenie od %s z galérie %s', //cpg1.4
  'view_report' => 'Náhradná linka ak sa hlásenie nezobrazilo správne', //cpg1.4
  'view_report_plaintext' => 'Pre zobrazenie komentára, kopíruj a vlož túto url do adresného riadku prehliadača:', //cpg1.4
  'view_more_pics' => 'Galéria', //cpg1.4
  'send_success' => 'Hlásenie bolo odoslané', //cpg1.4
  'send_failed' => 'Server nemôže odoslať Vaše hlásenie...', //cpg1.4
  'from' => 'Od', //cpg1.4
  'your_name' => 'Vaše meno', //cpg1.4
  'your_email' => 'Váš email', //cpg1.4
  'to' => 'Komu', //cpg1.4
  'administrator' => 'Admonistrátor/Mod', //cpg1.4
  'subject' => 'Predmet', //cpg1.4
  'comment_field_name' => 'Hlásenie ku komentáru od "%s"', //cpg1.4
  'reason' => 'Dôvod', //cpg1.4
  'message' => 'Správa', //cpg1.4
  'report_footer' => 'Odoslal %s z IP %s o %s (Gallery time)', //cpg1.4
  'obscene' => 'obscénne', //cpg1.4
  'offensive' => 'útočné', //cpg1.4
  'misplaced' => 'zle zaradené', //cpg1.4
  'missing' => 'chýbajúce', //cpg1.4
  'issue' => 'chyba/nezobrazuje sa', //cpg1.4
  'other' => 'iné', //cpg1.4
  'refers_to' => 'Hlásenie o súbore odkazuje na', //cpg1.4
  'reasons_list_heading' => 'dôvod hlásenia:', //cpg1.4
  'no_reason_given' => 'dôvod neudaný', //cpg1.4
  'go_comment' => 'Choď do komentárov', //cpg1.4
  'view_comment' => 'Zobraziť celé hlásenie', //cpg1.4
  'type_file' => 'súbor', //cpg1.4
  'type_comment' => 'komentár', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
  'pic_info' => 'Info o súbore',
  'album' => 'Album',
  'title' => 'Nadpis',
  'filename' => 'Meno súboru', //cpg1.4
  'desc' => 'Popis',
  'keywords' => 'Kľúčové slová',
  'new_keyword' => 'Nové kľúčové slovo', //cpg1.4
  'new_keywords' => 'Nové kľúčové slová nájdené', //cpg1.4
  'existing_keyword' => 'Existujúce kľúčové slovo ', //cpg1.4
  'pic_info_str' => '%s &krát; %s - %s KB - %s zobrazení - %s hlasov',
  'approve' => 'Schváliť súbor',
  'postpone_app' => 'Odložiť schválenie',
  'del_pic' => 'Zmazať súbor',
  'del_all' => 'Zmazať všetky súbory', //cpg1.4
  'read_exif' => 'Načítať EXIF info znova',
  'reset_view_count' => 'Vynulovať počítadlo zobrazení',
  'reset_all_view_count' => 'Vynulovať všetky počítadlá zobrazení', //cpg1.4
  'reset_votes' => 'Nulovať hlasovania',
  'reset_all_votes' => 'Nulovať všetky hlasovania', //cpg1.4
  'del_comm' => 'Vymazať komentáre',
  'del_all_comm' => 'Vymazať všetky komentáre', //cpg1.4
  'upl_approval' => 'Schválenie pridania', //cpg1.4
  'edit_pics' => 'Upraviť súbory',
  'see_next' => 'Ukáž ďaľšie súbory',
  'see_prev' => 'Ukáž predchádzajúce súbory',
  'n_pic' => '%s súborov',
  'n_of_pic_to_disp' => 'Počet súborov na zobrazenie',
  'apply' => 'Vykonaj modifikácie',
  'crop_title' => 'Coppermine Picture Editor',
  'preview' => 'Náhľad',
  'save' => 'Uložiť obrázok',
  'save_thumb' =>'Uložiť ako náhľad',
  'gallery_icon' => 'Ulož ako moju ikonu', //cpg1.4
  'sel_on_img' =>'Výber musí celý ležať vo vnútri obrázku!', //js-alert
  'album_properties' =>'Vlastnosti albumov', //cpg1.4
  'parent_category' =>'Nadradená kategória', //cpg1.4
  'thumbnail_view' =>'Náhľadové zobrazenie', //cpg1.4
  'select_unselect' =>'označ/odznač všetko', //cpg1.4
  'file_exists' => "Súbor '%s' už existuje.", //cpg1.4
  'rename_failed' => "Nemožno premenovať '%s' na '%s'.", //cpg1.4
  'src_file_missing' => "Zdrojový súbor '%s' chýba.", // cpg 1.4
  'mime_conv' => "Nemožno konvertovať z '%s' na '%s'",//cpg1.4
  'forb_ext' => 'Nepovolená prípona súboru.',//cpg1.4
);

// ------------------------------------------------------------------------- //
// File faq.php
// ------------------------------------------------------------------------- //

if (defined('FAQ_PHP')) $lang_faq_php = array(
  'faq' => 'Často kladené otázky',
  'toc' => 'Obsah',
  'question' => 'Otázka: ',
  'answer' => 'Odpoveď: ',
);
// FAQ translation : Willant Zoltán - KONTACT : http://kontakt.sturovo.com
if (defined('FAQ_PHP')) $lang_faq_data = array(
  'Všeobecné otázky FAQ.',
  array('Prečo by som sa mal registrovať?', 'Registrácie sú schvaľované mailom alebo samotným administrátorom. Registrácia dáva členovi rozšírené možnosti, ako pridávanie fotiek, obľúbený zoznam, hodnotenia a možnosť komentovať jednotlivé obrázky.', '1'),
  array('Ako sa môžem registrovať?', 'Kliknite na hore na odkaz <B>"Registruj"</B>. Ak sa chcete registrovať musíte najprv súhlasiť s pravidlami fotofóra. <br /> Kliknite dole na odkaz "Súhlasím". Vyplňte požadované údaje. Povinné údaje musíte vyplniť. Musíte zadať platnú e-mail adresu na ktorú vám príde odkaz. Po kliknutí na tento odkaz aktivujete vašu registráciu. Ak sa takto nestane tak vašu registráciu musí schváliť administrátor tohto fotofóra.', 'allow_user_registration', '1'), //cpg1.4
  array('Ako sa môžem prihlásiť do systému?', 'Kliknite na hore na odkaz <B>"Prihlásiť"</B>.<br /> Zadajte vaše meno a heslo. 
Ak označíte " Pamätaj si ma" Tak ostanete prihlásený aj keď zatvoríte okno vášho prehliadača.<b><br /> Dôležité: pre správne fungovanie prihlásenia musíte mať povolené ukladanie  súborov COOKIES!
</b>', 'offline', 0),
  array('Prečo sa neviem prihlásiť ?', 'Vyplnili ste povinné údaje?  Zadali ste platnú e-mail adresu?<br /> Dostali ste mail? Klikli ste na odkaz aktivácie? Ak problém naďalej pretrváva napíšte administrátorovi.
Možno vám poskytne vysvetlenie.
', 'offline', 0),
  array('Čo keď som zabudol heslo?', 'Po nesprávnom prihlásení sa zobrazí ponuka <B>"Pripomenutie hesla"</B>.<br /> Zadajte Vašu emailovú adresu a heslo vám bude automaticky odoslané a zároveň vám systém pridelí toto nové heslo. Administrátori nijako nevedia zmeniť vaše heslo. (heslo je zašifrované v MySQL databáze.)<br /> <FONT SIZE="" COLOR="#CC0000"><B>Administrátori alebo iný správcovia od vás NIKDY nebudú žiadať heslo!
Ak ste dostali takýto list ignorujte ho!</B></FONT>
', 'offline', 0),
  //array('What if I changed my email address?', 'Just simply login and change your email address through &quot;Profile&quot;', 'offline', 0),
  array('Ako môžem vytvárať "Moje obľúbené"?', 'Túto funkciu môžete použiť len keď ste prihlásený. Kliknite na hociktorí obrázok.
Zobrazí sa vám tzv. stredný náhľad, ak sa presuniete na dolný koniec stránky nájdete tam časť Informácie o súbore. Ak táto informácia chýba najprv úplne hore kliknite na obrázok.<img src="images/info.gif" width="16" height="16" border="0" alt="Picture information" /><br />(podrobné info. zobraz/skryť)<br />V tejto sekcii je riadok : Obľúbené a za ním je odkaz <B>"Pridať k obľúbeným"</B> už stačí len kliknúť. Prehľad vašich obľúbených obrázkov nájdete ak si 
zvolíte v hornom menu <B>"Moje obľúbené"</B>. Ak si potom na tu zobrazený obrázok kliknete, na tom istom mieste kde bol odkaz "Pridať k obľúbeným" nájdete teraz odkaz <B>"Odobrať z obľúbených"</B>.<br />Ak máte povolené cookies a po vypnutí vášho PC ich neodstránite alebo inak nevymažete táto funkcia je dostupná aj pre neregistrovaných užívateľov.
', 'offline', 0),
  array('Ako môžem hodnotiť jednotlivé obrázky?', 'Kliknite na miniatúru obrázku, zobrazí sa vám tzv. stredný náhľad. Tam nájdete
<B>"Hodnotiť tento súbor"</B> Tam si zvoľte počet hviezdičiek a kliknutím na ne ohodnotíte obrázok.
', 'offline', 0),
  array('Ako môžem pridať komentár k obrázku?', 'Kliknite na miniatúru obrázku, zobrazí sa vám tzv. stredný náhľad, ak sa presuniete na dolný koniec stránky s obrázkom nájdete tam časť <B>"Pridať komentár"</B>
Prosím uvedomte si že počet slov alebo dĺžka komentáru je závislá na administrátorských nastaveniach. Ak by sa stalo že váš komentár sa nedá odoslať je pravdepodobne príliš dlhý. 
', 'offline', 0),
  array('Ako môžem pridať obrázok do galérie?', 'Kliknite na hore na odkaz <B>"Pridať súbor"</B> Zobrazí sa vám stránka Pridanie súborov. Pomocou boxov dole môžete na server nahrať súbory. Veľkosť a druh jednotlivých povolených súborov k odosielaniu je závislá na administrátorských nastaveniach.
Návod ako exportovať v systéme <B>Windows XP</B> hromadne do svojich albumov viac súborov na raz nájdete
<a href="xp_publish.php">tu.(návod je po anglicky)</a>', 'allow_private_albums', 1), //cpg1.4
  array('Kde budem odosielať obrázok?', 'V prvom rade do svojej galérie ktorú si musíte vytvoriť.
Ak máte povolenie posielať do spoločných môžete aj tam.
Kto, alebo kde sa dajú pridávať jednotlivé obrázky záleží na nastaveniach  jednotlivých albumov. Niektoré albumy môžu byť len pre registrovaných užívateľov, iné môžu byť chránené heslom len pre určitých návštevníkov.
', 'allow_private_albums', 0),
  array('Aký typ a veľkosť súboru môžem odoslať?', 'Veľkosť a typ povolených súborov je závislí na administrátorských nastaveniach.', 'offline', 0),
  array('Ako môžem vytvárať premenovať a vymazať albumy?', 'Na toto slúži odkaz <B>"Albumy"</B> po kliknutí na tento odkaz uvidíte nadpis <B>"Vybrať kategóriu"</B> v rozbalovacom menu si zvoľte <B>"* Moja Galéria *"</B> kliknite na tlačítko NOVÝ.
Potom pomenujte vašu novú galériu.
Nakoniec použite tlačítko <B>"Vykonať zmeny"</B>
Na tomto mieste môžete aj odstraňovať nepotrebné albumy.
Zasahovať do úpravy spoločných albumov môže len administrátor alebo osoba tým poverená.
', 'allow_private_albums', 0),
  array('Ako upraviť prístupové práva a nastavenia albumov?', 'Musíte sa najprv prihlásiť.
Môžete meniť len vlastné albumy, zasahovať do úpravy spoločných albumov môže len administrátor alebo osoba tým poverená.
Po zobrazení albumov kliknite prosím na tlačítko <B>VLASTNOSTI</B>.
V Základných nastaveniach môžete zmeniť nadpis, popis albumu a zobrazenie náhľadového obrázku.
V Oprávneniach pre album môžete zmeniť kto môže vaše album vidieť, pridať vstup len na heslo, povoliť alebo zakázať hodnotenia a komentáre.
<B>Nastavenie hodnotení a komentárov je závislé aj od globálnej konfigurácie fóra a a prístupových práv jednotlivých skupín (Administrators Registered Banned Guests) prípadne iné.</B>
', 'allow_private_albums', 0),
  array('Ako si viem pozrieť galérie ostatných užívateľov?', 'Kliknite na odkaz "Galérie užívateľov" Táto kategória obsahuje albumy užívateľov tejto fotogalérie.', 'allow_private_albums', 0),
  array('Čo sú cookies?', 'Cookies sú malé kusy textových  údajov posielané na vaše PC do špecifického adresára.<br /> Tento súbor je odoslaný zo stránky ktorú prezeráte lebo nastavujete. Do tohto súboru sa ukladajú vaše nastavenia a pri ďalšom prezeraní alebo návšteve tejto stránky sú tieto údaje znova načítané z vášho PC.', 'offline', 0),
  array('Kde môžem získať takúto vynikajúcu fotogalériu?', 'Coppermine je voľne šírená Multimediálna Galéria licencovaná pod GNU GPL. Je prispôsobená pre všetky platformy a operačné systémy.  Navštívte prosím <a href="http://coppermine-gallery.net/"><B>Coppermine hlavnú stránku</B></a> a zistite si viac podrobností a stiahnite si túto aplikáciu.', 'offline', 0),

  'Navigácia na týchto stránkach.',
  array('Čo je Zoznam albumov?', 'Tento odkaz vám ukáže všetky kategórie. Je to vlastne hlavná stránka fotogalérie kde sú potom ďalej rozdelené jednotlivé albumy s ich zmenšenými úvodnými obrázkami.
Najvyššie sú galérie jednotlivých užívateľov a nižšie sú spoločné hlavné kategórie.
Kto, alebo kde sa dajú pridávať jednotlivé obrázky záleží na nastaveniach  jednotlivých albumov. Niektoré albumy môžu byť len pre registrovaných užívateľov, iné môžu byť chránené heslom a sú len pre určitých návštevníkov.
', 'offline', 0),
  array('Čo je Moja galéria?', 'To je vaša galéria do ktorej si môžete poslať obrázky alebo súbory. Môžete pridávať albumy mazať súbory modifikovať premenovať.<br /> Prosím uvedomte si že každý užívateľ má limitovanú kapacitu. Štandardne je to 20 MB. Toto nastavenie môže zmeniť administrátor fóra.', 'allow_private_albums', 1), //cpg1.4
  array('Aký je rozdiel medzi administratívnym a užívateľským režimom?', 'Administrátor má takmer neobmedzené možnosti.
Môže vytvárať upravovať mazať jednotlivé obrázky a galérie. Môže odstrániť hlasovania alebo komentáre. V prípade potreby zablokovať užívateľa alebo ho aj vyhodiť.
Administrátor ale nemôže meniť vaše heslo a mailovú adresu. Taktiež nijakým spôsobom nevie zistiť vaše heslo. Nevie prebrať vlastníctvo vašich obrázkov alebo súborov.
Užívateľ má obmedzené oprávnenia. Limitovaný priestor pre ukladanie, môže si vytvárať len svoje albumy. Pridávanie do spoločných albumov je riadené skupinovými oprávneniami.
Môže komentovať a hlasovať. Všetko ale záleží na globálnych nastaveniach skupiny.   
', 'allow_private_albums', 0),
  array('Čo je to Pridať súbor?', 'Kliknite na hore na odkaz <B>"Pridať súbor"</B> Zobrazí sa vám stránka Pridanie súborov. Pomocou boxov dole môžete na server nahrať súbory.', 'allow_private_albums', 0),
  array('Čo je to Najnovšie pridané?', 'Po kliknutí na tento odkaz sa vám zobrazia najnovšie poslané súbory a obrázky galérie.', 'offline', 0),
  array('Čo sú Najnovšie komentáre?', 'Po kliknutí na tento odkaz sa vám zobrazia najnovšie komentáre spolu s obrázkami jednotlivých užívateľov.', 'offline', 0),
  array('Čo je to Najprezeranejšie?', 'Po kliknutí na tento odkaz sa vám zobrazia najviac prezerané (najpopulárnejšie) obrázky s počtom pozretí, nezávisle na dátume odoslania.', 'offline', 0),
  array('Čo je to Najvyššie hodnotené?', 'Po kliknutí na tento odkaz sa vám zobrazia najlepšie ohodnotené  obrázky jednotlivými užívateľmi. Toto hodnotenie je priemerné. To znamená že jednotlivé body hodnotiacich sa spočítavajú podľa toho koľko tzv. hviezdičiek <img src="images/rating5.gif" width="65" height="14" border="0" alt="best" /> udelili návštevníci týchto stránok fotografiám.<br /> Hodnoty sú od 1 do 5 jedna hviezdička až 5 hviezdičiek.
<B>5 hviezdičiek zodpovedá najlepšiemu hodnoteniu.</B>', 'offline', 0),
  array(' Čo je to Moje obľúbené?', 'Po kliknutí na tento odkaz sa vám zobrazia vaše uložené najobľúbenejšie obrázky.
Táto funkcia je dostupná len po registrácii.<br />Ak máte povolené cookies a po vypnutí vášho PC ich neodstránite alebo inak nevymažete táto funkcia je dostupná aj pre neregistrovaných užívateľov.<br />FAQ  preložil 15.5.2008 : Willant Zoltán - <A HREF="http://kontakt.sturovo.com">http://kontakt.sturovo.com</A>', 'offline', 0),
);


// ------------------------------------------------------------------------- //
// File forgot_passwd.php
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) $lang_forgot_passwd_php = array(
  'forgot_passwd' => 'Pripomenutie hesla',
  'err_already_logged_in' => 'Už ste prihlásený !',
  'enter_email' => 'Zadajte Vašu emailovú adresu', //cpg1.4
  'submit' => 'go',
  'illegal_session' => 'Akcia zaslania zabudnutého hesla zlyhala alebo expirovala.', //cpg1.4
  'failed_sending_email' => 'Email s heslom nemohol byť zaslaný !',
  'email_sent' => 'Email s prístupovými údajmi bol zaslaný pre %s', //cpg1.4
  'verify_email_sent' => 'Email bol zaslaný pre %s. Skontrolujte si Vašu emailovú schránku pre kompletnosť procesu.', //cpg1.4
  'err_unk_user' => 'Vybraný člen neexistuje!',
  'account_verify_subject' => '%s - Vyžiadanie nového hesla.', //cpg1.4
  'account_verify_body' => 'Požiadali ste o nové heslo. Ak si prajet pokračovať vo vyžiadaní kliknite na nasl. link:

%s', //cpg1.4
  'passwd_reset_subject' => '%s - Vaše nové heslo', //cpg1.4
  'passwd_reset_body' => 'Tu sú nové prihlasovacie údaje:
Meno: %s
Heslo: %s
Kliknúť na %s pre prihlásenie.', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
  'group_name' => 'Meno skupiny', //cpg1.4
  'permissions' => 'Oprávnenia', //cpg1.4
  'public_albums' => 'Pridávanie do verejných albumov', //cpg1.4
  'personal_gallery' => 'Osobná galéria', //cpg1.4
  'upload_method' => 'Metóda pridávania', //cpg1.4
  'disk_quota' => 'Limit', //cpg1.4
  'rating' => 'Hodnotenia', //cpg1.4
  'ecards' => 'Pohľadnice', //cpg1.4
  'comments' => 'Komentáre', //cpg1.4
  'allowed' => 'Dovolené', //cpg1.4
  'approval' => 'Overenie', //cpg1.4
  'boxes_number' => 'Počet boxov', //cpg1.4
  'variable' => 'premenné', //cpg1.4
  'fixed' => 'pevné', //cpg1.4
  'apply' => 'Potvrď zmeny',
  'create_new_group' => 'Vytvoriť novú skupinu',
  'del_groups' => 'Vymazať označené skupiny',
  'confirm_del' => 'Pokiaľ zmažete túto skupinu, všetci užívatelia, patriaci do tejto skupiny budú presunutí do skupiny \'Registered\' !\n\nPrajete si pokračovať ?', //js-alert
  'title' => 'Spravovať užívateľské skupiny',
  'num_file_upload' => 'Boxy pre pridávanie súborov', //cpg1.4
  'num_URI_upload' => 'Boxy pre pridávanie URI', //cpg1.4
  'reset_to_default' => 'Obnoviť predvolené meno (%s) - odporúčané!', //cpg1.4
  'error_group_empty' => 'Tabuľka skupín je prázdna !<br /><br />Predvolené skupiny vytvorené, načítajte znovu túto stránku', //cpg1.4
  'explain_greyed_out_title' => 'Prečo je tonto riadok sivý?', //cpg1.4
  'explain_guests_greyed_out_text' => 'Nemožno meniť vlastnosti tejto skupiny, pretože ste zvoli možnosť &quot; Allow unlogged users (guest or anonymous) access&quot; to &quot;No&quot; on the config page. All guest (members of the group %s) can\'t do anything but login; therefor group settings don\'t apply for them.', //cpg1.4
  'explain_banned_greyed_out_text' => 'Nemožno meniť vlastnosti tejto skupiny, pretože aj tak nič nemôžu robiť.', //cpg1.4
  'group_assigned_album' => 'priradené albumy', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
  'welcome' => 'Welcome !',
);

$lang_album_admin_menu = array(
  'confirm_delete' => 'Ste si istý, že chcete zmazať tento album ? \\nVšetky súbory a komentáre budú tiež zmazané.', //js-alert
  'delete' => 'ZMAZAŤ',
  'modify' => 'VLASTNOSTI',
  'edit_pics' => 'UPRAVIŤ SÚBOR',
);

$lang_list_categories = array(
  'home' => 'Home',
  'stat1' => '<b>[pictures]</b> súborov v <b>[albums]</b> albumoch a <b>[cat]</b> kategóriách s <b>[comments]</b> komentármi zobrazené <b>[views]</b> krát',
  'stat2' => '<b>[pictures]</b> súborov v <b>[albums]</b> albumoch zobrazených <b>[views]</b> krát',
  'xx_s_gallery' => '%s\'s galérií',
  'stat3' => '<b>[pictures]</b> súborov v <b>[albums]</b> albumoch s <b>[comments]</b> komentármi zobrazené <b>[views]</b> krát',
);

$lang_list_users = array(
  'user_list' => 'Zoznam užívateľov',
  'no_user_gal' => 'Nie sú žiadne užívateľské galérie',
  'n_albums' => '%s album(ov)',
  'n_pics' => '%s súbor(ov)',
);

$lang_list_albums = array(
  'n_pictures' => '%s súborov',
  'last_added' => ', posledný pridaný do %s',
  'n_link_pictures' => '%s vzdialené súbory', //cpg1.4
  'total_pictures' => '%s súborov celkom', //cpg1.4
);

}

// ------------------------------------------------------------------------- //
// File keywordmgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('KEYWORDMGR_PHP')) $lang_keywordmgr_php = array(
  'title' => 'Spravuj kľúčové slová', //cpg1.4
  'edit' => 'upraviť', //cpg1.4
  'delete' => 'zmazať', //cpg1.4
  'search' => 'hľadať', //cpg1.4
  'keyword_test_search' => 'hľadať %s v novom okne', //cpg1.4
  'keyword_del' => 'zmazať kľúčové slovo %s', //cpg1.4
  'confirm_delete' => 'Chcete skutočne zmazať kľúčové slovo %s z celej galérie?', //cpg1.4  // js-alert
  'change_keyword' => 'zmeniť kľúčové slovo', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
  'login' => 'Prihlásenie',
  'enter_login_pswd' => 'Zadajte Vaše meno a heslo pre prihlásenie',
  'username' => 'Meno',
  'password' => 'Heslo',
  'remember_me' => 'Pamätaj si ma',
  'welcome' => 'Vítame Vás, %s ...',
  'err_login' => '*** Chyba pri prihlásení. Skúste to znova! ***',
  'err_already_logged_in' => 'Už ste prihlásený !',
  'forgot_password_link' => 'Zabudol som svoje heslo',
  'cookie_warning' => 'Upozornenie, Váš prehliadač neakceptuje cookies.', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
  'logout' => 'Odhlásiť',
  'bye' => 'Ďakujeme za návštevu %s ...',
  'err_not_loged_in' => 'Nie ste prihlásený !',
);

// ------------------------------------------------------------------------- //
// File minibrowser.php  //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('MINIBROWSER_PHP')) $lang_minibrowser_php = array(
  'close' => 'zatvoriť', //cpg1.4
  'submit' => 'OK', //cpg1.4
  'up' => 'hore o jednu úroveň', //cpg1.4
  'current_path' => 'súčasná cesta', //cpg1.4
  'select_directory' => 'zvoľte adresár', //cpg1.4
  'click_to_close' => 'Kliknutím na obrázok zatvoríte okno',
);

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
  'upd_alb_n' => 'Aktualizovať album %s',
  'general_settings' => 'Základné nastavenia',
  'alb_title' => 'Nadpis albumu',
  'alb_cat' => 'Kategória albumu',
  'alb_desc' => 'Popis albumu',
  'alb_keyword' => 'Kľúčové slovo pre album', //cpg1.4
  'alb_thumb' => 'Náhľad albumu',
  'alb_perm' => 'Oprávnenia pre album',
  'can_view' => 'Album môžu vidieť',
  'can_upload' => 'Návštevníci môžu pridávať súbory',
  'can_post_comments' => 'Návštevníci môžu pridávať komentáre',
  'can_rate' => 'Návštevníci môžu hodnotiť súbory',
  'user_gal' => 'Užívateľská galéria',
  'no_cat' => '* Žiadna kategória *',
  'alb_empty' => 'Album je prázdny',
  'last_uploaded' => 'Naposledy pridané',
  'public_alb' => 'Každý (verejný album)',
  'me_only' => 'Len ja',
  'owner_only' => 'Vlastník albumu (%s) len',
  'groupp_only' => 'Členovia skupiny \'%s\'',
  'err_no_alb_to_modify' => 'žiadny album k modifikácii.',
  'update' => 'Aktualizovať album',
  'reset_album' => 'Reset album', //cpg1.4
  'reset_views' => 'Resetovať počítadlo zobrazení na &quot;0&quot; v %s', //cpg1.4
  'reset_rating' => 'Resetovať hodnotenia súborov v %s', //cpg1.4
  'delete_comments' => 'Zmazať všetky komentáre v %s', //cpg1.4
  'delete_files' => '%sNEZVRATNÉ%s zmazanie všetkých súborov v %s', //cpg1.4
  'views' => 'zobrazení', //cpg1.4
  'votes' => 'hlasov', //cpg1.4
  'comments' => 'komentárov', //cpg1.4
  'files' => 'súborov', //cpg1.4
  'submit_reset' => 'Odoslať zmeny', //cpg1.4
  'reset_views_confirm' => 'Súhlasím', //cpg1.4
  'notice1' => '(*) závislé od nastavenia %sskupín%s ',  //cpg1.4 //(do not translate %s!)
  'alb_password' => 'Heslo pre album', //cpg1.4
  'alb_password_hint' => 'Heslo pre album - naznačenie', //cpg1.4
  'edit_files' =>'Upraviť súbory', //cpg1.4
  'parent_category' =>'Nadradená kategória', //cpg1.4
  'thumbnail_view' =>'Zobrazenie náhľadov', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File phpinfo.php
// ------------------------------------------------------------------------- //

if (defined('PHPINFO_PHP')) $lang_phpinfo_php = array(
  'php_info' => 'PHP info',
  'explanation' => 'This is the output generated by the PHP-function <a href="http://www.php.net/phpinfo">phpinfo()</a>, displayed within Coppermine (trimming the output at the right side).',
  'no_link' => 'Having others see your phpinfo can be a security risk, that\'s why this page is only visible when you\'re logged in as admin. You can not post a link to this page for others, they will be denied access.',
);

// ------------------------------------------------------------------------- //
// File picmgr.php //cpg1.4
// ------------------------------------------------------------------------- //
if (defined('PICMGR_PHP')) $lang_picmgr_php = array(
  'pic_mgr' => 'Správca obrázkov', //cpg1.4
  'select_album' => 'Vybrať album', //cpg1.4
  'delete' => 'Zmazať', //cpg1.4
  'confirm_delete1' => 'Určite chcete zmazať tento obrázok ?', //cpg1.4
  'confirm_delete2' => '\nObrázok bude navždy zmazaný.', //cpg1.4
  'apply_modifs' => 'Vykonať zmeny', //cpg1.4
  'confirm_modifs' => 'Potvrdiť zmeny', //cpg1.4
  'pic_need_name' => 'Obrázok musí mať meno !', //cpg1.4
  'no_change' => 'Nemôžete robiť žiadne zmeny !', //cpg1.4
  'no_album' => '* Žiadny album *', //cpg1.4
  'explanation_header' => 'Užívateľsky môžete usporadúvať súbory iba ak', //cpg1.4
  'explanation1' => 'administrátor nastavil východzie usporiadanie podľa pozície', //cpg1.4
  'explanation2' => 'užívateľ nastavil usporiadanie podľa pozície na stránke náhľadov', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File pluginmgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('PLUGINMGR_PHP')){

$lang_pluginmgr_php = array(
  'confirm_uninstall' => 'Určite chcete odinštalovať tento zásuvný modul', //cpg1.4
  'confirm_delete' => 'Určite chcete zmazať tento zásuvný modul', //cpg1.4
  'pmgr' => 'Správca zásuvných modulov', //cpg1.4
  'name' => 'Meno', //cpg1.4
  'author' => 'Autor', //cpg1.4
  'desc' => 'Popis', //cpg1.4
  'vers' => 'ver.', //cpg1.4
  'i_plugins' => 'Inštalované zásuvné moduly', //cpg1.4
  'n_plugins' => 'Neinštalované zásuvné moduly', //cpg1.4
  'none_installed' => 'Nič nenainštalované', //cpg1.4
  'operation' => 'Operácia', //cpg1.4
  'not_plugin_package' => 'Súbor nie je zásuvný modul.', //cpg1.4
  'copy_error' => 'Chyba pri kopírovaní do adresára.', //cpg1.4
  'upload' => 'Pridať', //cpg1.4
  'configure_plugin' => 'Konfigurovať zásuvný modul.', //cpg1.4
  'cleanup_plugin' => 'Odstrániť zásuvný modul.', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
  'already_rated' => 'Tento súbor ste už hodnotili',
  'rate_ok' => 'Váš hlas bol prijatý. Ďakujeme.',
  'forbidden' => 'YNemôžete hodnotiť vlastný súbor.',
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
Aj keď správca {SITE_NAME} bude opravovať prípadne odstraňovať nepríjemný materiál čo najskôr, nie je možné recenzovať každé podanie ihneď. Preto týmto priznávate zodpovednosť za pridávaný materiál v plnej miere, vlastným menom. Nie všetci členovia majú možnosť pridávať súbory, komentáre, hodnotenia na týchto stránkach. Autor pridania prehlasuje, že neporušuje autorské práva tretej strany.<br />
<br />
Vy súhlasíte, že nebudete pridávať nijaký hrubý, odporný, nevychovaný, ohováračský, výhražný, nábožensky alebo sexuálne-orientovaný alebo každý iný materiál, ktorý porušuje nejaké platné práva v ktorejkoľvek krajine. Správca má právo odstrániť akýkoľvek príspevok (súbor,hodnotenie,komentár) podľa vlastného uváženia kedykoľvek to uzná za vhodné. Správca nie je povinný schváliť Vašu registráciu, pri porušovaní pravidiel prípadne autorských práv  môže Vašu registráciu zrušiť, či prípadne úplne zakázať prístup k stránkam {SITE_NAME}. Všetky dáta uložené v databáze sú použité výhradne pre chod galérie a nie sú nijak inak spracovávané. Pokiaľ nie je uvedené inak, všetky obrázky zverejnené v albumoch {SITE_NAME} sú chránené autorským právom a nie je dovolené ich kopírovať, upravovať, šíriť ďalej, komerčne využívať či inak reprodukovať. <br />
<br />
Tieto stránky používajú cookies k ukladaniu informácií do Vášho počítača. Tieto cookies zlepšujú potešenie z prehliadania. E-mail je použitý iba na zaslanie aktivačných údajov a hesiel.<br />
<br />
Stlačením tlačidla 'Súhlasím' potvrdzujete porozumenie s týmito podmienkami.
EOT;

$lang_register_php = array(
  'page_title' => 'Registrácia nového užívateľa',
  'term_cond' => 'Podmienky a pravidlá',
  'i_agree' => 'Súhlasím',
  'submit' => 'Odoslať registráciu',
  'err_user_exists' => 'Zadané užívateľské meno už existuje vyberte si prosím iné',
  'err_password_mismatch' => 'Zadané heslo sa musí zhodovať v oboch riadkoch, zadajte znova',
  'err_uname_short' => 'Minimálna dĺžka uživateľskeho mena je 2 znaky',
  'err_password_short' => 'Minimálna dĺžka hesla je 2 znaky',
  'err_uname_pass_diff' => 'Meno a heslo se nesmie zhodovať',
  'err_invalid_email' => 'Bola zadaná neplatná emailová adresa',
  'err_duplicate_email' => 'Táto emailová adresa je už ragistrovaná, zadajte inú.',
  'enter_info' => 'Zadať registračné informácie',
  'required_info' => 'Povinné údaje',
  'optional_info' => 'Voliteľné údaje',
  'username' => 'Meno',
  'password' => 'Heslo',
  'password_again' => 'Zopakuj heslo',
  'email' => 'Email',
  'location' => 'Miesto',
  'interests' => 'Záujmy',
  'website' => 'www',
  'occupation' => 'Zamestnanie',
  'error' => 'CHYBA',
  'confirm_email_subject' => '%s - Potvrdenie registrácie',
  'information' => 'Informácia',
  'failed_sending_email' => 'Nie je možné odoslať email o potvrdení registrácie !',
  'thank_you' => 'Ďakujeme za registráciu.<br /><br />Na email adresu zadanú pri registrácii Vám budú doručené informácie o aktiváci vášho účtu.',
  'acct_created' => 'Váš užívateľský účet bol úspešne vytvorený. Teraz sa môžete prihláste pomocou vášho mena a hesla',
  'acct_active' => 'Váš užívateľský účet je odteraz aktívny a Vy sa môžete prihlásiť pomocou vášho mena a hesla ',
  'acct_already_act' => 'Váš účet je už aktivny!', //cpg1.4
  'acct_act_failed' => 'Tento účet nemôže byť aktivovaný !',
  'err_unk_user' => 'Vybraný užívateľ neexistuje !',
  'x_s_profile' => '%s\'s profil',
  'group' => 'Skupina',
  'reg_date' => 'Pripojený',
  'disk_usage' => 'Využitie disku',
  'change_pass' => 'Zmeniť heslo',
  'current_pass' => 'Súčasné heslo',
  'new_pass' => 'Nové heslo',
  'new_pass_again' => 'Nové heslo znova',
  'err_curr_pass' => 'Súčasné heslo je nesprávne',
  'apply_modif' => 'Vykonať zmeny',
  'change_pass' => 'Zmeniť moje heslo',
  'update_success' => 'Váš profil bol aktualizovaný',
  'pass_chg_success' => 'Vaše heslo bolo zmenené',
  'pass_chg_error' => 'Vaše heslo nebolo zmenené',
  'notify_admin_email_subject' => '%s - Upozornenie na registráciu',
  'last_uploads' => 'Posledný pridaný súbor.<br />Klikni pre zobrazenie všetkých pridaní od', //cpg1.4
  'last_comments' => 'Posledný komentár.<br />Klikni pre zobrazenie všetkých komentárov od', //cpg1.4
  'notify_admin_email_body' => 'Nový užívateľ "%s" zaregistrovaný v galérii',
  'pic_count' => 'Súborov pridaných', //cpg1.4
  'notify_admin_request_email_subject' => '%s - Požiadavka registrácie.', //cpg1.4
  'thank_you_admin_activation' => 'Ďakujeme.<br /><br />Vaša požiadavka o registráciu bolo odoslaná administrátorovi. Čoskoro obdržíte email.', //cpg1.4
  'acct_active_admin_activation' => 'ˇUčet bol vytvorený a email bol zaslaný užívateľovi.', //cpg1.4
  'notify_user_email_subject' => '%s - Oznámenie o aktivácii', //cpg1.4
);

$lang_register_confirm_email = <<<EOT
Ďakujeme za registráciu na {SITE_NAME}

Pre aktiváciu účtu užívateľa "{USER_NAME}", treba kliknúť na link ďalej alebo skopírovať do prehliadača.

<a href="{ACT_LINK}">{ACT_LINK}</a>

S pozdravom,

Administrátor od {SITE_NAME}

EOT;

$lang_register_approve_email = <<<EOT
Nový užívateľ "{USER_NAME}" sa zaregistroval v galérii.

Pre aktiváciu účtu užívateľa, treba kliknúť na link ďalej alebo skopírovať do prehliadača.

<a href="{ACT_LINK}">{ACT_LINK}</a>

EOT;

$lang_register_activated_email = <<<EOT
Váš účet bol vytvorený a aktivovaný
Teraz sa môžete prihlásiť na  <a href="{SITE_LINK}">{SITE_LINK}</a> použitím mena "{USER_NAME}"


S pozdravom,

Administrátor od {SITE_NAME}

EOT;
}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
  'title' => 'Kontrola komentárov',
  'no_comment' => 'Nie sú žiadne komentáre na kontrolu',
  'n_comm_del' => '%s komentárov zmazaných',
  'n_comm_disp' => 'Počet komentárov k zobrazeniu',
  'see_prev' => 'Predchádzajúci',
  'see_next' => 'Ďaľší',
  'del_comm' => 'Zmazať vybrané komentáre',
  'user_name' => 'Meno', //cpg1.4
  'date' => 'Dátum', //cpg1.4
  'comment' => 'Komentár', //cpg1.4
  'file' => 'Súbor', //cpg1.4
  'name_a' => 'Užívatelia vzostupne', //cpg1.4
  'name_d' => 'Užívatelia zostupne', //cpg1.4
  'date_a' => 'Dátum vzostupne', //cpg1.4
  'date_d' => 'Dátum zostupne', //cpg1.4
  'comment_a' => 'Komentáre vzostupne', //cpg1.4
  'comment_d' => 'Komentáre zostupne', //cpg1.4
  'file_a' => 'Súbory vzostupne', //cpg1.4
  'file_d' => 'Súbory zostupne', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File search.php                                                           //
// ------------------------------------------------------------------------- //


if (defined('SEARCH_PHP')){

$lang_search_php = array(
  'title' => 'Vyhľadávanie v albumoch', //cpg1.4
  'submit_search' => 'hľadať', //cpg1.4
  'keyword_list_title' => 'Zoznam kľúčových slov', //cpg1.4
  'keyword_msg' => 'Uvedený list neobsahuje všetko.  Skúste full-textové vyhľadávanie.',  //cpg1.4
  'edit_keywords' => 'Upraviť kľúčové slovo', //cpg1.4
  'search in' => 'Hľadať v:', //cpg1.4
  'ip_address' => 'IP adresa', //cpg1.4
  'fields' => 'Hľadať v', //cpg1.4
  'age' => 'Vek súboru', //cpg1.4
  'newer_than' => 'Mladší ako', //cpg1.4
  'older_than' => 'Starší ako', //cpg1.4
  'days' => 'dní', //cpg1.4
  'all_words' => 'Zhodné všetky výrazy (A)', //cpg1.4
  'any_words' => 'Zhodné niektoré výrazy (ALEBO)', //cpg1.4
);

$lang_adv_opts = array(
  'title' => 'Nadpis', //cpg1.4
  'caption' => 'Záhlavie', //cpg1.4
  'keywords' => 'Kľúčové slovo', //cpg1.4
  'owner_name' => 'Vlastník', //cpg1.4
  'filename' => 'Názov súboru', //cpg1.4
);

}

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
  'page_title' => 'Hľadať nové súbory',
  'select_dir' => 'Zvoliť adresár',
  'select_dir_msg' => 'Táto funkcia vám umožní dávkovo pridať obrázky nahrané na server cez FTP.<br /><br />Vyberte adresár kam boli uložené súbory', //cpg1.4
  'no_pic_to_add' => 'Žiadne súbory na pridanie',
  'need_one_album' => 'Je potrebné, aby ste mali aspoň jeden album',
  'warning' => 'Upozornenie',
  'change_perm' => 'Skript nemôže zapisovať do tohto adresára, musíte nastaviť na CHMOD 755 alebo 777 pred pridaním súborov!',
  'target_album' => '<b>Vložiť súbory z &quot;</b>%s<b>&quot; do </b>%s',
  'folder' => 'Zložka',
  'image' => 'súbor',
  'album' => 'Album',
  'result' => 'Result',
  'dir_ro' => 'Nezapisovateľná. ',
  'dir_cant_read' => 'Nečitateľná. ',
  'insert' => 'Pridávanie nových súborov do galérie',
  'list_new_pic' => 'Zoznam nových súborov',
  'insert_selected' => 'Vložiť vybrané súbory',
  'no_pic_found' => 'Žiadne nové súbory',
  'be_patient' => 'Buďte trpezlivý, skript potrebuje trocha času na spracovanie...',
  'no_album' => 'žiadny album vybraný',
  'result_icon' => 'klikni pre detaily alebo znovunačítanie',  //cpg1.4
  'notes' =>  '<ul>'.
                          '<li><b>OK</b> : súbor bol pridaný'.
                          '<li><b>DP</b> : súbor je duplikát a už je v galérii'.
                          '<li><b>PB</b> : súbor nemohol byť pridaný, zkontrolujte konfiguráciu a oprávnenia'.
                          '<li><b>NA</b> : nebol vybraný cieľový album, klikni \'<a href="javascript:history.back(1)">späť</a>\' a vyber existujúci album.</li>'.
                          '<li>Ak sa neukáže \'označenie\' OK, DP, PB klepnite na súbor a uvidíte chybovú hlášku generovanú PHP, ktorá Vám pomôže zistiť príčinu problému'.
                          '<li>Ak prehliadaču vypršal čas. limit, obnovte stránku'.
                          '</ul>',
  'select_album' => 'zvoľte album',
  'check_all' => 'Označiť všetko',
  'uncheck_all' => 'Odznačiť všetko',
  'no_folders' => 'Žiadny adresár v adresári "albums". Vytvorte aspoň jeden adresár v adresári "albums" a pridajte doň svoje súbory pomocou FTP. Nepoužívajte adresáre "userpics" alebo "edit".', //cpg1.4
   'albums_no_category' => 'Albumy bez kategórie', //cpg1.4 // album pulldown mod, added by frogfoot
  'personal_albums' => '* Súkromné albumy', //cpg1.4 // album pulldown mod, added by frogfoot
  'browse_batch_add' => 'Rozhranie s prehliadaním (odporúčame)', //cpg1.4
  'edit_pics' => 'Uprav súbory', //cpg1.4
  'edit_properties' => 'Vlastnosti albumu', //cpg1.4
  'view_thumbs' => 'Náhľady', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File stat_details.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('STAT_DETAILS_PHP')) $lang_stat_details_php = array(
  'show_hide' => 'ukáž/schovaj tento stĺpec', //cpg1.4
  'vote' => 'Detaily hlasovania', //cpg1.4
  'hits' => 'Detaily videní', //cpg1.4
  'stats' => 'Štatistika hlasovania', //cpg1.4
  'sdate' => 'Dátum', //cpg1.4
  'rating' => 'Hodnotenie', //cpg1.4
  'search_phrase' => 'Hľadaný výraz', //cpg1.4
  'referer' => 'Odkazavač', //cpg1.4
  'browser' => 'Prehliadač', //cpg1.4
  'os' => 'Operačný systém', //cpg1.4
  'ip' => 'IP', //cpg1.4
  'sort_by_xxx' => 'Usporiadať podľa %s', //cpg1.4
  'ascending' => 'vzostupne', //cpg1.4
  'descending' => 'zostupne', //cpg1.4
  'internal' => 'int', //cpg1.4
  'close' => 'zatvoriť', //cpg1.4
  'hide_internal_referers' => 'skryť interné odkazovače', //cpg1.4
  'date_display' => 'Dátum', //cpg1.4
  'submit' => 'odoslať/vykonať', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File thumbnails.php
// ------------------------------------------------------------------------- //

// Void

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) $lang_upload_php = array(
  'title' => 'Upload file',
  'custom_title' => 'Upravený Formulár',
  'cust_instr_1' => 'Môžete zvoliť požadovaný počet vstupných boxov. Nie je možné prekročiť maximum uvedené nižšie.',
  'cust_instr_2' => 'Požiadavka na boxy',
  'cust_instr_3' => 'Boxy pre súbory: %s',
  'cust_instr_4' => 'Boxy pre URI/URL: %s',
  'cust_instr_5' => 'Boxy pre URI/URL:',
  'cust_instr_6' => 'Boxy pre súbory:',
  'cust_instr_7' => 'Prosím zadajte požadovaný počet boxov ku každému typu. Potom stlačte \'Pokračovať\'. ',
  'reg_instr_1' => 'Neplatná akcia pre vytváranie formulára.',
  'reg_instr_2' => 'Pomocou boxov dole môžete na server nahrať súbory. Veľkosť jednotlivých nahrávaných súborov pri uploade na server by nemala presiahnuť %s KB. Súbory ZIP nahrané pomocou sekcií \'Pridanie súborov\' alebo \'URI/URL pridanie\' zostanú zkomprimované ako jeden súbor aj po nahraní na server.',
  'reg_instr_3' => 'Ak chcete, aby súbory zbalené v archíve ZIP boli rozbalené, musíte použiť pre zadanie súboru políčko v sekci \'Pridanie ZIP s rozbalením\'.',
  'reg_instr_4' => 'Ak používate sekciu URI/URL pridanie, prosím zadávajte cestu k súboru takto: http://www.mojadomena.sk/obrazky/priklad.jpg',
  'reg_instr_5' => 'Po vyplnení formulára stlačte tlačídlo \'Pokračovať\'.',
  'reg_instr_6' => 'Pridanie ZIP s rozbalením:',
  'reg_instr_7' => 'Pridanie súborov:',
  'reg_instr_8' => 'URI/URL pridanie:',
  'error_report' => 'Chybové hlásenie',
  'error_instr' => 'Toto vykazuje chyby:',
  'file_name_url' => 'Súbor meno/URL',
  'error_message' => 'Chybová správa',
  'no_post' => 'Súbor nebol pridaný cez POST.',
  'forb_ext' => 'Nepovolená prípona súboru.',
  'exc_php_ini' => 'Prekročená veľkosť súboru povolená v php.ini.',
  'exc_file_size' => 'Prekročená veľkosť súboru povolená konfiguráciou.',
  'partial_upload' => 'Iba čiastočné pridanie.',
  'no_upload' => 'Nevykonalo sa žiadne pridanie.',
  'unknown_code' => 'Neznáma PHP chyba.',
  'no_temp_name' => 'Žiadne pridanie - žiadne dočasné meno.',
  'no_file_size' => 'Neobsahuje dáta/poškodené',
  'impossible' => 'Nemožno presunúť.',
  'not_image' => 'Neobsahuje obrázok/poškodené',
  'not_GD' => 'Chýba GD.',
  'pixel_allowance' => 'Prekročená šírka alebo výška obrázku povolená konfiguráciou.', //cpg1.4
  'incorrect_prefix' => 'Neplatný URI/URL prefix',
  'could_not_open_URI' => 'Nemožno otvoriť URI.',
  'unsafe_URI' => 'Neoverená bezpečnosť.',
  'meta_data_failure' => 'Chyba v meta dátach',
  'http_401' => '401 Neautorizovaný prístup',
  'http_402' => '402 Požadovaná platba',
  'http_403' => '403 Zakázaný prístup',
  'http_404' => '404 Nebolo nájdené',
  'http_500' => '500 Interná chyba serveru',
  'http_503' => '503 Služba je nedostupná',
  'MIME_extraction_failure' => 'MIME nebolo rozpoznané.',
  'MIME_type_unknown' => 'Neznámy MIME typ',
  'cant_create_write' => 'Nemožno vytvoriť súbor pre zápis.',
  'not_writable' => 'Nemožno zapisovať do súboru pre zápis.',
  'cant_read_URI' => 'Nemožno čítať URI/URL',
  'cant_open_write_file' => 'Nebolo možné otvoriť súbor URI.',
  'cant_write_write_file' => 'Nebolo možné zapisovať do súboru URI.',
  'cant_unzip' => 'Nemožno rozbaliť.',
  'unknown' => 'Neznámá chyba',
  'succ' => 'Úspešné pridanie',
  'success' => '%s pridaní bolo úspešných.',
  'add' => 'Prosím stlačte \'Pokračovať\' pre pridanie súborov do galérie.',
  'failure' => 'Chyba pridania',
  'f_info' => 'Informácie o súbore',
  'no_place' => 'Predchádzajúci súbor nie je možné umiestniť.',
  'yes_place' => 'Predchádzajúci súbor bol úspešne umiestnený.',
  'max_fsize' => 'Max. veľkosť súboru je %s KB',
  'album' => 'Album',
  'picture' => 'Súbor',
  'pic_title' => 'Nadpis súboru',
  'description' => 'Popis súboru',
  'keywords' => 'Kľúčové slová ( oddelené medzerami)<br /><a href="#" onClick="return MM_openBrWindow(\'keyword_select.php\',\'selectKey\',\'width=250, height=400, scrollbars=yes,toolbar=no,status=yes,resizable=yes\')">Vložiť zo zoznamu</a>', //cpg1.4
  'keywords_sel' =>'Vybrať kľúčové slovo', //cpg1.4
  'err_no_alb_uploadables' => 'Tu sa nenachádza album do ktorého môžete pridávať',
  'place_instr_1' => 'Prosím umiestnite teraz súbory do albumov. Môžete tiež zadať informácie týkajúce sa jednotlivých súborov.',
  'place_instr_2' => 'Viac súborov je potreba umiestniť. Prosím stlačte \'Pokračovať\'.',
  'process_complete' => 'Úspešne ste umiestnili všetky súbory.',
   'albums_no_category' => 'Albumy bez kategórie', //cpg1.4. //album pulldown mod, added by frogfoot
  'personal_albums' => '* Osobný album', //cpg1.4 //album pulldown mod, added by frogfoot
  'select_album' => 'Vybrať album', //cpg1.4 //album pulldown mod, added by frogfoot
  'close' => 'Zatvoriť', //cpg1.4
  'no_keywords' => 'Žiadne kľúčové slová k výberu!', //cpg1.4
  'regenerate_dictionary' => 'Obnoviť adresár', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
  'memberlist' => 'Zoznam členov', //cpg1.4
  'user_manager' => 'Správca užívateľov', //cpg1.4
  'title' => 'Spravuj užívateľov',
  'name_a' => 'Meno vzostupne',
  'name_d' => 'Meno zostupne',
  'group_a' => 'Skupina vzostupne',
  'group_d' => 'Skupina zostupne',
  'reg_a' => 'Reg. dátum vzostupne',
  'reg_d' => 'Reg. dátum zostupne',
  'pic_a' => 'Počet súborov vzostupne',
  'pic_d' => 'Počet súborov zostupne',
  'disku_a' => 'Priestor vzostupne',
  'disku_d' => 'Priestor zostupne',
  'lv_a' => 'Posledná návšteva vzostupne',
  'lv_d' => 'Posledná návšteva zostupne',
  'sort_by' => 'Triediť užívateľov podľa:',
  'err_no_users' => 'Tabuľka užívateľov je prázdna !',
  'err_edit_self' => 'Na úpravu vlastného profilu použite link \'Môj profil\'',
  'edit' => 'Upraviť', //cpg1.4
  'with_selected' => 'Akcia pre označených:', //cpg1.4
  'delete' => 'Vymazať', //cpg1.4
  'delete_files_no' => 'ponechať verejné súbory (ale anonymizovať)', //cpg1.4
  'delete_files_yes' => 'zmazať verejné súbory', //cpg1.4
  'delete_comments_no' => 'ponechať komentáre (ale anonymizovať)', //cpg1.4
  'delete_comments_yes' => 'zmazať verejné komentáre', //cpg1.4
  'activate' => 'Aktivovať', //cpg1.4
  'deactivate' => 'Deaktivovať', //cpg1.4
  'reset_password' => 'Resetovať heslo', //cpg1.4
  'change_primary_membergroup' => 'Zmeniť primárnu skupinu', //cpg1.4
  'add_secondary_membergroup' => 'Zmeniť sekundárnu skupinu', //cpg1.4
  'name' => 'Užívateľské meno',
  'group' => 'Skupina',
  'inactive' => 'Neaktívny',
  'operations' => 'Operácie',
  'pictures' => 'Súbory',
  'disk_space_used' => 'Priestor(využitie)', //cpg1.4
  'disk_space_quota' => 'Priestor(limit)', //cpg1.4
  'registered_on' => 'Registrácia', //cpg1.4
  'last_visit' => 'Posledná návšt.',
  'u_user_on_p_pages' => '%d užívateľov na %d str.',
  'confirm_del' => 'Naozaj chcete zmazať tohoto užívateľa? \\nVšetky jeho albumy a súbory budú tiež zmazané.', //js-alert
  'mail' => 'MAIL',
  'err_unknown_user' => 'Vybraný užívateľ neexistuje !',
  'modify_user' => 'Upraviť užívateľa',
  'notes' => 'Pozn.',
  'note_list' => '<li>Pokiaľ nechcete zmeniť heslo ponechajte políčko pre heslo prázdne',
  'password' => 'Password',
  'user_active' => 'Užívateľ je aktívny',
  'user_group' => 'Užív. skupina',
  'user_email' => 'Užív. email',
  'user_web_site' => 'Užív. www',
  'create_new_user' => 'Vytvoriť užívateľa',
  'user_location' => 'Užív. mesto',
  'user_interests' => 'Užív. záujmy',
  'user_occupation' => 'Užív. práca',
  'user_profile1' => '$user_profile1', //cpg1.4
  'user_profile2' => '$user_profile2', //cpg1.4
  'user_profile3' => '$user_profile3', //cpg1.4
  'user_profile4' => '$user_profile4', //cpg1.4
  'user_profile5' => '$user_profile5', //cpg1.4
  'user_profile6' => '$user_profile6', //cpg1.4
  'latest_upload' => 'Čerstvé pridanie',
  'never' => 'nikdy',
  'search' => 'Vyhľadaj člena', //cpg1.4
  'submit' => 'Odošli', //cpg1.4
  'search_submit' => 'Choď!', //cpg1.4
  'search_result' => 'Hľadaj výsledky pre: ', //cpg1.4
  'alert_no_selection' => 'Najprvtreba aspoň jedného člena označiť!', //cpg1.4 //js-alert
  'password' => 'Heslo', //cpg1.4
  'select_group' => 'Vyber skupinu', //cpg1.4
  'groups_alb_access' => 'Obmedzenia albumu podľa skupiny', //cpg1.4
  'album' => 'Album', //cpg1.4
  'category' => 'Kategória', //cpg1.4
  'modify' => 'Zmeniť?', //cpg1.4
  'group_no_access' => 'Táto skupina nemá špeciálny prístup', //cpg1.4
  'notice' => 'Oznam', //cpg1.4
  'group_can_access' => 'Album do ktorého len "%s" má vstup', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //

if (defined('UTIL_PHP')) {
$lang_util_desc_php = array(
'Aktualizovať nadpisy z názvu súboru', //cpg1.4
'Vymazať nadpisy', //cpg1.4
'Obnoviť náhľady a zmenšené obrázky', //cpg1.4
'Vymazať originálne obrázky a nahradiť zmenšenými', //cpg1.4
'Vymazať originálne a dočasné obrázky kvôli úspore web miesta', //cpg1.4
'Vymazať osamelé komentáre', //cpg1.4
'Znovu načítať veľkosť a rozmery obrázkov', //cpg1.4
'Resetovať počítadlá zobrazení', //cpg1.4
'Zobraziť phpinfo', //cpg1.4
'Aktualizovať databázu', //cpg1.4
'Zobraziť log súbory', //cpg1.4
);
$lang_util_php = array(
  'title' => 'Administračné nástroje',
  'what_it_does' => 'Čo robia',
  'file' => 'Súbor',
  'problem' => 'Problém', //cpg1.4
  'status' => 'Stav', //cpg1.4
  'title_set_to' => 'nadpis nastaviť na',
  'submit_form' => 'poslať',
  'updated_succesfully' => 'aktualizované',
  'error_create' => 'ERROR vytvorenie',
  'continue' => 'Spracovať viac obrázkov',
  'main_success' => 'Súbor %s bol úspešne použitý ako hlavný',
  'error_rename' => 'Chybné premenovanie %s na %s',
  'error_not_found' => 'Súbor nebol %s nenájdený',
  'back' => 'späť',
  'thumbs_wait' => 'Aktualizujem, počkajte chvíľu...',
  'thumbs_continue_wait' => 'Pokračujem v aktualizácii...',
  'titles_wait' => 'Aktualizujem nadpisy, počkajte chvíľu...',
  'delete_wait' => 'Mažem nadpisy, počkajte chvíľu...',
  'replace_wait' => 'Vymazávam originálne obrázky a nahrádzam zmenšenými, počkajte chvíľu...',
  'instruction' => 'Návod',
  'instruction_action' => 'Zvoľte akciu',
  'instruction_parameter' => 'Nastavte parametre',
  'instruction_album' => 'Vyberte album',
  'instruction_press' => 'Stlačte %s',
  'update' => 'Aktualizovať náhľady a/alebo zmenšeniny',
  'update_what' => 'Čo sa bude aktualizovať',
  'update_thumb' => 'Len náhľady',
  'update_pic' => 'Len zmenšeniny',
  'update_both' => 'Aj náhľady aj zmenšeniny',
  'update_number' => 'Počet obrázkov na klik ',
  'update_option' => '(Nastavte menej, ak dochádza k časovým výpadkom prehliadača)',
  'filename_title' => 'Názov súboru &rArr; Nadpis súboru',
  'filename_how' => 'Ako vytvoriť nadpis súboru z názvu súboru',
  'filename_remove' => 'Odobrať .jpg príponu a nahradiť _ (podčiarnik) medzerou',
  'filename_euro' => 'Zmeniť 2003_11_23_13_20_20.jpg na 23/11/2003 13:20',
  'filename_us' => 'Zmeniť 2003_11_23_13_20_20.jpg na 11/23/2003 13:20',
  'filename_time' => 'Zmeniť 2003_11_23_13_20_20.jpg na 13:20',
  'delete' => 'Vymazať nadpisy alebo originál súbory',
  'delete_title' => 'Vymazať nadpisy',
  'delete_title_explanation' => 'Vymaže všetky nadpisy vo zvolenom albume.', //cpg1.4
  'delete_original' => 'Vymazať originál súbory',
  'delete_original_explanation' => 'Vymaže všetky originál súbory vo zvolenom albume.', //cpg1.4
  'delete_intermediate' => 'Zmazať pomocné obrázky', //cpg1.4
  'delete_intermediate_explanation' => 'Vymaže všetky pomocné (normal) obrázky vo zvolenom albume.<br />Použiť na uvoľnenie miesta, ak je v konfigurácii vypnutá funkcia \'Vytvoriť pomocné obrázky\' (po pridaní súborov).', //cpg1.4
  'delete_replace' => 'Vymaže originálne obrázky a nahradí zmenšenými',
  'titles_deleted' => 'Všetky nadpisy vo zvolenom albume odobraté', //cpg1.4
  'deleting_intermediates' => 'Mažem pomocné obrázky, počkajte chvíľu...', //cpg1.4
  'searching_orphans' => 'Hľadám osamotené, počkajte chvíľu...', //cpg1.4
  'select_album' => 'Vybrať album',
  'delete_orphans' => 'Vymazať komentáre k chýbajúcim súborom', //cpg1.4
  'delete_orphans_explanation' => 'Vymaže komentáre k chýbajúcim súborom, ktoré už nie sú v galérii.<br />Skontrolujte všetky albumy.', //cpg1.4
  'refresh_db' => 'Znovunačítanie veľkostí a rozmerov súborov', //cpg1.4
  'refresh_db_explanation' => 'Znovunačítanie veľkostí a rozmerov súborov použite na korkciu správnosti veľkosti priestoru.', //cpg1.4
  'reset_views' => 'Nulovať počítadlá zobrazení', //cpg1.4
  'reset_views_explanation' => 'Vo vybranom albume vynuluje počítadlá zobrazení.', //cpg1.4
  'orphan_comment' => 'osamotený komentár nájdený',
  'delete' => 'Zmazať',
  'delete_all' => 'Zmazať všetko',
  'delete_all_orphans' => 'Zmazať všetky osamotené?', //cpg1.4
  'comment' => 'Komentár: ',
  'nonexist' => 'priložiť k neexistujúcemu súboru # ',
  'phpinfo' => 'Zobraziť phpinfo',
  'phpinfo_explanation' => 'Technické info o Vašom serveri.<br /> - Zobrazí sa iba ak hosting povoľuje.', //cpg1.4
  'update_db' => 'Aktualizovať databázu',
  'update_db_explanation' => 'Použiť pri aktualizácii galérie, pri pridaní systémových súborov, zmene verzie CPG atd. Funkcia pre systémových inštalátorov.',
  'view_log' => 'Zobraziť log súbory', //cpg1.4
  'view_log_explanation' => 'Prehľad logov nastavených v <a href="admin.php">konfigurácii</a>.', //cpg1.4
  'versioncheck' => 'Skontrolovať verzie', //cpg1.4
  'versioncheck_explanation' => 'Kontrola správnosti a aktuálnosti systémových súborov galérie. Funkcia pre systémových inštalátorov.', //cpg1.4
  'bridgemanager' => 'Správca prepojenia', //cpg1.4
  'bridgemanager_explanation' => 'Zapína/vypína integráciu CPG galérie do prostredia inej aplikácie.', //cpg1.4
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
  'webcvs' => 'web svn', //cpg1.4
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
  'no_webcvs_link' => 'don\'t display web svn link', //cpg1.4
  'stable_webcvs_link' => 'display web svn link to stable branch', //cpg1.4
  'devel_webcvs_link' => 'display web svn link to devel branch', //cpg1.4
  'submit' => 'apply changes / refresh', //cpg1.4
  'reset_to_defaults' => 'reset to default values', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File view_log.php  //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('VIEWLOG_PHP')) $lang_viewlog_php = array(
  'delete_all' => 'Vymazať všetky logy', //cpg1.4
  'delete_this' => 'Vymazať tento log', //cpg1.4
  'view_logs' => 'Zobraziť logy', //cpg1.4
  'no_logs' => 'Nie sú žiadne logy vytvorené.', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File xp_publish.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('XP_PUBLISH_PHP')) {

$lang_xp_publish_client = <<<EOT
<h1>XP Web Publishing Wizard Client</h1><p>This module allows to use <b>Windows XP</b> web publishing wizard with Coppermine.</p><p>Code is based on article posted by
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
file that is located in Coppermine directory on your server.</li><li>In order to avoid that the gallery be <i>flooded</i> by pictures uploaded through the wizard, only the <b>gallery admins</b> and <b>users that can have their own albums</b> can use this feature.</li>
EOT;



$lang_xp_publish_php = array(
  'title' => 'Coppermine - XP Web Publishing Wizard', //cpg1.4
  'welcome' => 'Welcome <b>%s</b>,', //cpg1.4
  'need_login' => 'You need to login to the gallery using your web browser before you can use this wizard.<p/><p>When you login don\'t forget to select the <b>remember me</b> option if it is present.', //cpg1.4
  'no_alb' => 'Sorry but there is no album where you are allowed to upload pictures with this wizard.', //cpg1.4
  'upload' => 'Upload your pictures into an existing album', //cpg1.4
  'create_new' => 'Create a new album for your pictures', //cpg1.4
  'album' => 'Album', //cpg1.4
  'category' => 'Category', //cpg1.4
  'new_alb_created' => 'Your new album &quot;<b>%s</b>&quot; was created.', //cpg1.4
  'continue' => 'Press &quot;Next&quot; to start to upload your pictures', //cpg1.4
  'link' => 'this link', //cpg1.4
);
}
?>