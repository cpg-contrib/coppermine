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
  'lang_name_english' => 'Hungarian', //cpg1.4
  'lang_name_native' => 'Magyar', //cpg1.4
  'lang_country_code' => 'hu', //cpg1.4
  'trans_name'=> 'Zsolt Fenyvesvölgyi, Nagymáté Péter',
  'trans_email' => 'mailfed@gmail.com',
  'trans_email2' => 'pepe@ludens.elte.hu',
  'trans_website' => 'http://www.egermuzeum.hu',
  'trans_website2' => 'http://www.beagle.hu',
  'trans_date' => '2007-04-10',
  'trans_date2' => '2006-02-25',
);

$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('Bytes', 'KB', 'MB');

// Day of weeks and months
$lang_day_of_week = array('Vasárnap', 'Hétfő', 'Kedd', 'Szerda', 'Csütörtök', 'Péntek', 'Szombat');
$lang_month = array('Január', 'Február', 'Március', 'Április', 'Május', 'Június', 'Július', 'Augusztus', 'Szeptember', 'Október', 'November', 'December');

// Some common strings
$lang_yes = 'Igen';
$lang_no  = 'Nem';
$lang_back = 'vissza';
$lang_continue = 'folytatás';
$lang_info = 'Információ';
$lang_error = 'Hiba';
$lang_check_uncheck_all = 'összes ellenőrzése'; //cpg1.4

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$album_date_fmt =    '%Y %B %d.';
$lastcom_date_fmt =  '%y.%m.%d %H:%M kor';
$lastup_date_fmt = '%Y %B %d.';
$register_date_fmt = '%Y %B %d.';
$lasthit_date_fmt = '%Y %B %d. %H:%M kor';
$comment_date_fmt =  '%Y %B %d. %H:%M kor';
$log_date_fmt = '%Y %B %d. %H:%M kor'; //cpg1.4

// For the word censor
$lang_bad_words = array('*fuck*', 'Fu\(*', 'fuk*', 'masturbat*', 'motherfucker', 'nigger*', 'penis', 'pussy', 'shit', 'titties', 'titty',  'arsch*', 'fick*', 'fotze', 'votze', 'Sieg Heil', 'Heil Hitler', 'Nutte', 'Möse', 'Moese', 'Pimmel', 'Schwengel', 'Titte*', 'bums*', 'Scheiss*', 'Scheiß*');

$lang_meta_album_names = array(
  'random' => 'Válogatás',
  'lastup' => 'Legutóbb feltöltött',
  'lastalb'=> 'Legutóbb frissített album',
  'lastcom' => 'Legújabb hozászólás',
  'topn' => 'Legtöbbet nézett',
  'toprated' => 'Legjobb helyezett',
  'lasthits' => 'Legutóbb megnézett',
  'search' => 'Keresés eredménye',
  'favpics'=> 'Kedvenc képek',  //cpg1.4
);

$lang_errors = array(
  'access_denied' => 'Nincs jogod megnézni ezt az oldalt.',
  'perm_denied' => 'Nincs jogosultságod a művelethez.',
  'param_missing' => 'Hiányzó paraméterek.',
  'non_exist_ap' => 'A kiválasztott album vagy kép nem létezik!',
  'quota_exceeded' => 'Lemez terület kvóta túllépés<br /><br />A Te kvótád [quota] kB, jellenleg ennyi [space] kB-ot foglalsz, ennek a képnek a feltöltésekor túlléped a kvótád.',
  'gd_file_type_err' => 'Amikor GD-könyvtárat használsz, a megengedett fájlformátum csak JPG vagy PNG .',
  'invalid_image' => 'A feltöltött kép sérült vagy a GD könyvtár nem kezeli a fáljformátumot',
  'resize_failed' => 'Nem lehet a képet átméretezni.',
  'no_img_to_display' => 'Nincs megjeleníthető kép',
  'non_exist_cat' => 'A kiválasztott kategória nem létezik',
  'orphan_cat' => 'A kategóriának nem létezik szülője, futtassd a kategória rendezőt a hiba kijavításához!',
  'directory_ro' => 'A \'%s\' könyvtár nem írható, a fájlt nem lehet törölni',
  'non_exist_comment' => 'A kiválasztott megjegyzés nem létezik.',
  'pic_in_invalid_album' => 'A kép egy nem létező albumban van (%s)!?',
  'banned' => 'Jelenleg ki vagy zárva erről a weboldalról',
  'not_with_udb' => 'Ez a funkció le van tiltva a Coppemine-ban , mert integrálva van egy fórum programmal. a kért művelet nincs támogatva, vagy a funkciót a fórum program kezeli.',
  'offline_title' => 'Kikapcsolva',
  'offline_text' => 'Ez a képgaléria kikapcsolt állapotban van - néz vissza később.', //cpg1.3.0
  'ecards_empty' => 'Jellenleg egyetlen Ecard-ot sem lehet megjeleníteni!',
  'action_failed' => 'Hibás művelet.A Coppermine nem tudja kiszolgálni a kérést.', //cpg1.3.0
  'no_zip' => 'Nincs feltelepítve program a zip fájlok kezeléséhez. Keresd fel a rendszergazdát!',
  'zip_type' => 'Nincs jogosultságod zip fájlok feltöltésére.',
  'database_query' => 'Hiba történt az adatbázis lekérdezése közben.', //cpg1.4
  'non_exist_comment' => 'A kiválasztott megjegyzés nem létezik', //cpg1.4
);

$lang_bbcode_help_title = 'Bulletin Board kód segítség'; //cpg1.4
$lang_bbcode_help = 'Lehetőség van linkek hozzáadására és néhány formázásra, ha használod ezeket a BBCode formázókat: <li>[b]Kövér[/b] =&gt; <b>Kövér</b></li><li>[i]Dőlt[/i] =&gt; <i>Dőlt</i></li><li>[url=http://weblapod.hu/]Url szöveg[/url] =&gt; <a href="http://weblapod.hu">Url szöveg</a></li><li>[email]felhasználó@weblapod.hu[/email] =&gt; <a href="mailto:felhasználó@weblapod.hu">felhasználó@weblapod.hu</a></li><li>[color=red]Valami szöveg[/color] =&gt; <span style="color:red">Valami szöveg</span></li><li>[img]http://coppermine-gallery.net/demo/cpg14x/images/red.gif[/img] => <img src="../images/red.gif" border="0" alt="" /></li>'; //cpg1.4

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
  'home_title' => 'Ugrás a kezdőlapra',
  'home_lnk' => 'Kezdőlap',
  'alb_list_title' => 'Ugrás az album listára',
  'alb_list_lnk' => 'Album lista',
  'my_gal_title' => 'Ugrás a személyes képtárba',
  'my_gal_lnk' => 'Személyes képtáram',
  'my_prof_title' => 'Ugrás a profilomhoz', //cpg1.4
  'my_prof_lnk' => 'Profilom',
  'adm_mode_title' => 'Átváltás admin módba',
  'adm_mode_lnk' => 'Admin mód',
  'usr_mode_title' => 'Átváltás felhasználói módba',
  'usr_mode_lnk' => 'Felhasználói mód',
  'upload_pic_title' => 'Fájl feltöltése az albumba',
  'upload_pic_lnk' => 'Fájl feltöltése',
  'register_title' => 'Felhasználó létrehozása',
  'register_lnk' => 'Regisztráció',
  'login_title' => 'Léptess be!', //cpg1.4
  'login_lnk' => 'Bejelentkezés',
  'logout_title' => 'Léptess ki!', //cpg1.4
  'logout_lnk' => 'Kijelentkezés',
  'lastup_title' => 'Mutasd a legutóbbi feltöltéseket', //cpg1.4
  'lastup_lnk' => 'Legújabb feltöltések',
  'lastcom_title' => 'Mutasd a legutóbbi hozzászólásokat', //cpg1.4
  'lastcom_lnk' => 'Legutolsó hozzászólás',
  'topn_title' => 'Mutasd a legtöbbet nézet képeket', //cpg1.4
  'topn_lnk' => 'Legtöbbet nézett',
  'toprated_title' => 'Mutasd a tegtöbb szavazatot kapott képeket', //cpg1.4
  'toprated_lnk' => 'Legjobb helyezett',
  'search_title' => 'Keresés a képtárban', //cpg1.4
  'search_lnk' => 'Keresés',
  'fav_title' => 'Ugrás a kedvencekhez', //cpg1.4
  'fav_lnk' => 'Kedvencek',
  'memberlist_title' => 'Mutasd a felhasználók listáját',
  'memberlist_lnk' => 'Felhasználók listája',
  'faq_title' => 'Gyakran felett kérdések (Frequently Asked Questions)',
  'faq_lnk' => 'GYIK',
);

$lang_gallery_admin_menu = array(
  'upl_app_title' => 'Új feltöltések jóváhagyása', //cpg1.4
  'upl_app_lnk' => 'Feltöltés jóváhagyás',
  'admin_title' => 'Ugrás a beállításokhoz', //cpg1.4
  'admin_lnk' => 'Beállítások', //cpg1.4
  'albums_title' => 'Ugrás az album beállításhoz', //cpg1.4
  'albums_lnk' => 'Albumok',
  'categories_title' => 'Ugrás a kategória beállításhoz', //cpg1.4
  'categories_lnk' => 'Kategóriák',
  'users_title' => 'Ugrás a felhasználó beállításhoz', //cpg1.4
  'users_lnk' => 'Felhasználók',
  'groups_title' => 'Ugrás a csoport beállításhoz', //cpg1.4
  'groups_lnk' => 'Csoportok',
  'comments_title' => 'Az összes hozzászólás megtekintése', //cpg1.4
  'comments_lnk' => 'Hozzászólások',
  'searchnew_title' => 'Ugrás a csoportos hozzáadáshoz', //cpg1.4
  'searchnew_lnk' => 'Csoportos hozzáadás',
  'util_title' => 'Ugrás az admin eszközökhöz', //cpg1.4
  'util_lnk' => 'Admin eszközök',
  'key_title' => 'Ugrás a kulcsszavakhoz', //cpg1.4
  'key_lnk' => 'Kulcsszavak', //cpg1.4
  'ban_title' => 'Ugrás a kitiltottak listájához ', //cpg1.4
  'ban_lnk' => 'Kitiltott felhasználók',
  'db_ecard_title' => 'Képeslapok megtekintése', //cpg1.4
  'db_ecard_lnk' => 'Képeslapok',
  'pictures_title' => 'Képek rendezése', //cpg1.4
  'pictures_lnk' => 'Képek rendezése', //cpg1.4
  'documentation_lnk' => 'Dokumentáció', //cpg1.4
  'documentation_title' => 'Coppermine - Felhasználói Kézikönyv', //cpg1.4
);

$lang_user_admin_menu = array(
  'albmgr_title' => 'Saját albumok készítése és rendezése', //cpg1.4
  'albmgr_lnk' => 'Album készítés/rendezés',
  'modifyalb_title' => 'Ugrás az album módosításhoz',  //cpg1.4
  'modifyalb_lnk' => 'Az albumom módosítása',
  'my_prof_title' => 'Ugrás a személyes beállításaimhoz', //cpg1.4
  'my_prof_lnk' => 'Személyes beállításaim',
);

$lang_cat_list = array(
  'category' => 'Kategória',
  'albums' => 'Albumok',
  'pictures' => 'Képek',
);

$lang_album_list = array(
  'album_on_page' => '%d Album %d Oldalakon',
);

$lang_thumb_view = array(
  'date' => 'Dátum',
  //Sort by filename and title
  'name' => 'Fájl neve',
  'title' => 'Címe',
  'sort_da' => 'Rendezés dátum szerint növekvő',
  'sort_dd' => 'Rendezés dátum szerint csökkenő',
  'sort_na' => 'Rendezés név szerint növekvő',
  'sort_nd' => 'Rendezés név szerint csökkenő',
  'sort_ta' => 'Rendezés cím szerint növekvő',
  'sort_td' => 'Rendezés cím szerint csökenő',
  'position' => 'Pozíció', //cpg1.4
  'sort_pa' => 'Rendezés pozició szerint növekvő', //cpg1.4
  'sort_pd' => 'Rendezés pozició szerint csökkenő', //cpg1.4
  'download_zip' => 'Letöltés zip fájlként',
  'pic_on_page' => '%d fájl %d oldalon',
  'user_on_page' => '%d felhasználó %d oldalon',
  'enter_alb_pass' => 'Add meg a jelszót az albumhoz', //cpg1.4
  'invalid_pass' => 'Hibás jelszó', //cpg1.4
  'pass' => 'Jelszó', //cpg1.4
  'submit' => 'Mehet', //cpg1.4
);

$lang_img_nav_bar = array(
  'thumb_title' => 'Vissza az áttekintő oldalra',
  'pic_info_title' => 'Fájl információk megjelenítése/elrejtése',
  'slideshow_title' => 'Diavetítés',
  'ecard_title' => 'Kép küldése képeslapként ',
  'ecard_disabled' => 'Képeslap funkció letiltva',
  'ecard_disabled_msg' => 'Nincs jogod képeslapot küldeni',
  'prev_title' => 'előző kép',
  'next_title' => 'következő kép',
  'pic_pos' => 'Kép %s/%s',
  'report_title' => 'Jelezd ezt a képet a rendszergazdának', //cpg1.4
  'go_album_end' => 'Ugrás a végére', //cpg1.4
  'go_album_start' => 'Ugrás az elejére', //cpg1.4
  'go_back_x_items' => 'menj vissza %s képet', //cpg1.4
  'go_forward_x_items' => 'menj előre %s képet', //cpg1.4
);

$lang_rate_pic = array(
  'rate_this_pic' => 'Szavazz erre a képre',
  'no_votes' => '(nem kapott szavazatot)',
  'rating' => 'jelenlegi helyezés : %s/5 %s szavazatból',
  'rubbish' => 'vacak',
  'poor' => 'gyenge',
  'fair' => 'közepes',
  'good' => 'jó',
  'excellent' => 'nagyon jó',
  'great' => 'tökéletes',
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
  CRITICAL_ERROR => 'Súlyos hiba',
  'file' => 'Fájl: ',
  'line' => 'Sor: ',
);

$lang_display_thumbnails = array(
  'filename' => 'Fájlnév : ',
  'filesize' => 'Fájlméret : ',
  'dimensions' => 'Méretek : ',
  'date_added' => 'Hozzáadás dátuma : ',
);

$lang_get_pic_data = array(
  'n_comments' => '%s Hozászólások',
  'n_views' => '%s Megtekintés',
  'n_votes' => '(%s Szavazat)',
);

$lang_cpg_debug_output = array(
  'debug_info' => 'Debug információ',
  'select_all' => 'Összes kiválasztása',
  'copy_and_paste_instructions' => 'Ha segítségre van szükséged, akkor másold ki és küld el ezt a hibajelenség leírást a Coppermine Technikai Támogatásnak. Ügyelj arra, hogy jelszavak helyére *** -at írj.<br />Megjegyzés: ez csak egy információ, és nem jeleni azt, hogy baj van a képtáraddal.', //cpg1.4
  'phpinfo' => 'php információk',
  'notices' => 'Megjegyzések', //cpg1.4
);

$lang_language_selection = array(
  'reset_language' => 'Alapértelmezett nyelv',
  'choose_language' => 'Válassz nyelvet!',
);

$lang_theme_selection = array(
  'reset_theme' => 'Alapértelmezett Téma',
  'choose_theme' => 'Válassz témát!',
);

$lang_version_alert = array(
  'version_alert' => 'Nem támogatott verzió!', //cpg1.4
  'security_alert' => 'Biztonsági riasztás!', //cpg1.4.3
  'relocate_exists' => 'Távolítsd el a <a href="http://coppermine-gallery.net/forum/index.php?topic=24217.0" target=_blank>relocate_server.php</a> fájlt a webszerveredről!',
  'no_stable_version' => 'Te most a Coppermine %s (%s) verziót használod, melyhez nem tartozik támogatás. Csak saját felelősségedre használd!', //cpg1.4
  'gallery_offline' => 'A képtár jelenleg kikapcsolt állapotban van, csak rendszergazdaként léphetsz be. Ha végeztél a karbantartással, ne felejtsd el bekapcsolni.', //cpg1.4
);

$lang_create_tabs = array(
  'previous' => 'előző', //cpg1.4
  'next' => 'következő', //cpg1.4
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
  'error_wakeup' => "Ezt a plugint '%s' nem tudtam aktíválni", //cpg1.4
  'error_install' => "Ezt a plugint '%s' nem sikerült telepíteni", //cpg1.4
  'error_uninstall' => "Ezt a plugint '%s' nem sikerült eltávolítani", //cpg1.4
  'error_sleep' => "Ezt a plugint '%s' nem tudtam inaktíválni.<br />", //cpg1.4
);

// ------------------------------------------------------------------------- //
// File include/smilies.inc.php
// ------------------------------------------------------------------------- //

if (defined('SMILIES_PHP')) $lang_smilies_inc_php = array(
  'Exclamation' => 'Kiáltás',
  'Question' => 'Kérdés',
  'Very Happy' => 'Nagyon boldog',
  'Smile' => 'Mosolyog',
  'Sad' => 'Bús',
  'Surprised' => 'Meglepett',
  'Shocked' => 'Sokkolt',
  'Confused' => 'Zavarodott',
  'Cool' => 'Cool',
  'Laughing' => 'Nevet',
  'Mad' => 'Őrült',
  'Razz' => 'Gúnyos',
  'Embarassed' => 'Zavarban van',
  'Crying or Very sad' => 'Üvőlt',
  'Evil or Very Mad' => 'Ördögi',
  'Twisted Evil' => 'Kirekesztő',
  'Rolling Eyes' => 'Jojózik a szeme',
  'Wink' => 'Kacsintás',
  'Idea' => 'Ötlet',
  'Arrow' => 'Nyíl',
  'Neutral' => 'Természetes',
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
  0 => 'Kilépés rendszergazda módból...',
  1 => 'Belépés rendszergazda módba...',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
  'alb_need_name' => 'Kötelező nevet adni az albumnak!', //js-alert
  'confirm_modifs' => 'Biztos, hogy végrehajtsuk a változtatásokat ?', //js-alert
  'no_change' => 'Nem történt változtatás!', //js-alert
  'new_album' => 'Új album',
  'confirm_delete1' => 'Biztos, hogy törölni akarod?', //js-alert
  'confirm_delete2' => '\nAz öszses fájl és hozzászólás törlődni fog!', //js-alert
  'select_first' => 'Először válasz egy albumot', //js-alert
  'alb_mrg' => 'Alben-kezelő',
  'my_gallery' => '* Saját képtár *',
  'no_category' => '* Nincs kategória *',
  'delete' => 'Törlés',
  'new' => 'Új',
  'apply_modifs' => 'Változtatások elfogadása',
  'select_category' => 'Válassz kategóriát',
);

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) $lang_banning_php = array(
  'title' => 'Kitiltott felhasználók', //cpg1.4
  'user_name' => 'Felhasználó neve', //cpg1.4
  'ip_address' => 'IP-cím', //cpg1.4
  'expiry' => 'Lejár (üres, ha állandó)', //cpg1.4
  'edit_ban' => 'Változások mentése', //cpg1.4
  'delete_ban' => 'Törlés', //cpg1.4
  'add_new' => 'Új letiltás hozzáadása', //cpg1.4
  'add_ban' => 'Hozzáadás', //cpg1.4
  'error_user' => 'Ismeretlen felhasználó', //cpg1.4
  'error_specify' => 'Meg kell adni a felhasználónevet vagy IP címet!', //cpg1.4
  'error_ban_id' => 'Hibás tiltás azonosító!', //cpg1.4
  'error_admin_ban' => 'Saját magad nem tudod letiltani!', //cpg1.4
  'error_server_ban' => 'Ki akarod tiltani a saját szerverünket? Tán nem kéne...', //cpg1.4
  'error_ip_forbidden' => 'Ezt az IP címet nem lehet letiltani, mert ez egy belső cím!<br />Ha engedélyezni akarod a belső IP-k tiltását, változtasd meg a beállítást a <a href="admin.php">Konfiguráció</a> nál (csak akkor műkődik, ha a képtár helyi hálózaton fut).', //cpg1.4
  'lookup_ip' => 'IP-cím keresése', //cpg1.4
  'submit' => 'Mehet!', //cpg1.4
  'select_date' => 'Válassz dátumot', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File bridgemgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('BRIDGEMGR_PHP')) $lang_bridgemgr_php = array(
  'title' => 'Kötés varázsló',
  'warning' => 'Figyelmeztetés: a varázsló használatával személyes adatokat küldesz html űrlapokon keresztül. Csak a saját PC-den futtasd (ne nyilvános gépen, mint pl. Internet kávézó), és bizonyosodj meg arról, hogy a böngésződ kiűritette az ideiglenes tárolóját a használat után, különben mások is hozzáférhetnek az adataidhoz! ',
  'back' => 'vissza',
  'next' => 'következő',
  'start_wizard' => 'A kötés varázsló indítása',
  'finish' => 'Befejezés',
  'hide_unused_fields' => 'nem használt mezők elrejtése (ajánlott)',
  'clear_unused_db_fields' => 'érvénytelen adatok törlése (ajánlott)',
  'custom_bridge_file' => 'saját kötésfájl neve (ha a kötésfájl neve:  <i>sajátfájl.inc.php</i> akkor <i>sajátfájl</i>-t írj ebbe a mezőbe)',
  'no_action_needed' => 'Ennél a lépésnél nincs más feladatod, kattints a &quot;következő&quot;-re a folytatáshoz',
  'reset_to_default' => 'Beállítás alapértelmezetre',
  'choose_bbs_app' => 'Válassz alkalmazást, amit összekötni kivánsz a Coppermine-nal',
  'support_url' => 'Támogatási információk',
  'settings_path' => 'a saját fórum program útvonala',
  'database_connection' => 'Adatbázis kapcsolat',
  'database_tables' => 'Adatbázis táblák',
  'bbs_groups' => 'Fórum csoportok',
  'license_number' => 'Szériaszám',
  'license_number_explanation' => 'Add meg a szériaszámot (ha létezik)',
  'db_database_name' => 'Adatbázis neve',
  'db_database_name_explanation' => 'Add meg a fórum által használt adatbázis nevét',
  'db_hostname' => 'Adatbázis szerver',
  'db_hostname_explanation' => 'Szerver neve, ahol a mySQL adatbázis található. Általában &quot;localhost&quot;',
  'db_username' => 'Adatbázis felhasználó',
  'db_username_explanation' => 'mySQL felhasználó, amit a fórum program használ',
  'db_password' => 'Adatbázis jelszó',
  'db_password_explanation' => 'A mySQL felhasználó jelszava',
  'full_forum_url' => 'Fórum-Url',
  'full_forum_url_explanation' => 'A fórum teljes webcíme ( http:// előtaggal együtt , pl. http://www.sajátoldal.hu/forum)',
  'relative_path_of_forum_from_webroot' => 'Relatív útvonal a fórumhoz',
  'relative_path_of_forum_from_webroot_explanation' => 'A fórum relatív elérési útvonala a dokumentum gyökértől (Például: ha a fórum URL-je http://www.sajátoldal.hu/forum/ , akkor írj &quot;/forum/&quot;-ot ebbe a mezőbe)',
  'relative_path_to_config_file' => 'Relatív elérés a fórum konfigurációs fájljához',
  'relative_path_to_config_file_explanation' => 'A fórum relatív elérési útvonala a Coppermine könyvtárától  (pl.:. &quot;../forum/&quot; ha a fórum URL-je http://www.sajátoldal.hu/forum/  és a Coppermine URL-je http://www.sajátgép.hu/gallery/)',
  'cookie_prefix' => 'Süti előtag',
  'cookie_prefix_explanation' => 'ez lesz a fórum süti neve',
  'table_prefix' => 'Tábla előtag (prefix)',
  'table_prefix_explanation' => 'Az előtagnak(prefix) meg kell egyeznie azzal, amit a fórumban használsz.',
  'user_table' => 'Felhasználói táblák',
  'user_table_explanation' => '(Az alapértelmezett érték jó, kivéve, ha a fórum nem az alapértelmezett telepítés)',
  'session_table' => 'Session-tábla',
  'session_table_explanation' => '(Az alapértelmezett érték jó, kivéve, ha a fórum nem az alapértelmezett telepítés)',
  'group_table' => 'Csoport-tábla',
  'group_table_explanation' => '(Az alapértelmezett érték jó, kivéve, ha a fórum nem az alapértelmezett telepítés)',
  'group_relation_table' => 'Csoport-kapcsolat tábla',
  'group_relation_table_explanation' => '(Az alapértelmezett érték jó, kivéve, ha a fórum nem az alapértelmezett telepítés)',
  'group_mapping_table' => 'Csoport átfedés tábla',
  'group_mapping_table_explanation' => '(Az alapértelmezett érték jó, kivéve, ha a fórum nem az alapértelmezett telepítés)',
  'use_standard_groups' => 'használd az alapértelmezett fórum felhasználói csoportokat ',
  'use_standard_groups_explanation' => 'Használd a beépített felhasználói csoportokat (ajánlott). Ez az opcíó érvényteleníti az összes egyedi felhasználói csoport beállítást. Csak akkor tilts le ezt az opciót, ha TÉNYLEG tudod mit csinálsz!',
  'validating_group' => 'jóváhagyó csoport',
  'validating_group_explanation' => 'Ez annak csoportnak az ID-ja a fórumban, ahol a engedély kell a felhasználóknak  (Az alapértelmezett érték jó, kivéve, ha a fórum nem az alapértelmezett telepítés)',
  'guest_group' => 'Vendég csoport',
  'guest_group_explanation' => 'Ez a vendég csoport ID-ja a fórumban  (Az alapértelmezett érték jó, kivéve, ha a fórum nem az alapértelmezett telepítés)',
  'member_group' => 'Tagság csoport',
  'member_group_explanation' => 'Normál felhasználók csoport ID-ja (Az alapértelmezett érték jó, csak akkor módosítsd, ha tudod mit csinálsz)',
  'admin_group' => 'Admin csoport',
  'admin_group_explanation' => 'Adminisztrátorok csoport ID-ja (Az alapértelmezett érték jó, csak akkor módosítsd, ha tudod mit csinálsz)',
  'banned_group' => 'Kitiltottak csoport',
  'banned_group_explanation' => 'Kitiltottak csoport ID -ja (Az alapértelmezett érték jó, csak akkor módosítsd, ha tudod mit csinálsz)',
  'global_moderators_group' => 'Globális moderátor csoport',
  'global_moderators_group_explanation' => 'Moderátorok csoport ID-ja (Az alapértelmezett érték jó, csak akkor módosítsd, ha tudod mit csinálsz)',
  'special_settings' => 'Fórum specifikus beállítások',
  'logout_flag' => 'phpBB Verzió (kilépés jelző)',
  'logout_flag_explanation' => 'A használt fórum verziója (ez a beállítása adja meg a kilépés módját)',
  'use_post_based_groups' => 'Kötött küldésű csoport?',
  'logout_flag_yes' => '2.0.5, vagy újabb',
  'logout_flag_no' => '2.0.4, vagy régebbi',
  'use_post_based_groups_explanation' => 'Ennél a csoportnál meghatározott a beküldések száma (részletes beállítások), vagy az alap csoport (könnyű adminisztráció, ajánlott). Késöbb is megváltoztathatod.',
  'use_post_based_groups_yes' => 'igen',
  'use_post_based_groups_no' => 'nem',
  'error_title' => 'Háritsd el a hibát, mielött tovább lépnél. Menj vissza az elöző képernyőre!',
  'error_specify_bbs' => 'Meg kell adnod melyik programmal akarod összekötni a Coppermine-t',
  'error_no_blank_name' => 'Nem hagyhatod üresen a saját kötésfájl nevét.',
  'error_no_special_chars' => 'A kötésfájl neve nem tartalmazhat speciális karaktereket kivéve az aláhúzást (_) és a kötőjelet (-)!',
  'error_bridge_file_not_exist' => 'A fájl %s nem található a szerveren. Ellenőrizd, ha most töltötted fel.',
  'finalize' => 'Fórum integráció engedélyezés / tiltás',
  'finalize_explanation' => 'Tehát a megadott beállítások rögzítve lettek az adatbázisban, de a fórum-integráció (kötés) nincs engedélyezve. Az integrációt bármikor ki/be lehet kapcsolni. Jegyezzd meg a rendszergazda nevét és jelszavát, mert szükség lehet rá a késöbbi változtatásokhoz. Ha bármi hiba adódik, akkor menj ide %s, és tiltsd le az integrációt, használd a telepítéskor megadott felhasználó nevet és jelszót.',
  'your_bridge_settings' => 'Saját kötés beállításaid',
  'title_enable' => 'Az integráció/kötés engedélyezése  %s -val',
  'bridge_enable_yes' => 'engedélyez',
  'bridge_enable_no' => 'letilt',
  'error_must_not_be_empty' => 'nem lehet üres',
  'error_either_be' => 'az egyiknek %s vagy %s kell lennie',
  'error_folder_not_exist' => '%s nem létezik. Add meg a helyes adatokat %s számára',
  'error_cookie_not_readible' => 'A Coppermine nem tudja olvasni a %s nevű sütit. Add meg a helyes adatokat %s számára , vagy menj a fórum adminisztrációs felületére és ellenőrizd, hogy a süti útvonala olvasható a Coppermin számára.',
  'error_mandatory_field_empty' => 'A %s mező nem lehet üres - töltsd ki a megfelelő adattal.',
  'error_no_trailing_slash' => 'A %s mezőben nem kell használni könytárlezárót (ferdevonal).',
  'error_trailing_slash' => 'A %s mezőben kell használni könytárlezárót (ferdevonal).',
  'error_db_connect' => 'Nem lehetséges kapcsolódni a mySQL adatbázishoz. A mySQL hibaüzenete:',
  'error_db_name' => 'A Coppermine nem tudja létrehozni a kapcsolatot, mert nem találja az %s adatbázist. Ellenőrizd, hogy a(z) %s adatbázisnév helyes. A MYSQL hibaüzenet:',
  'error_prefix_and_table' => '%s és',
  'error_db_table' => 'A %s tábla nem található. Ellenőrízd, hogy  %s táblanév helyes.',
  'recovery_title' => 'Kötés-kezelő: vész helyreállítás',
  'recovery_explanation' => 'Ha adminisztrálni akkarod a Coppermine képtár fórum integrációját, először rendszergazdaként kell bejelentkezni. Ha nem sikerül bejelentkezned, mert nem működik megfelelően a kötés, akkor ezen az oldalon ki tudod kapcsolni az integrációt. A megadott felhasználónévvel és jelszóval nem lépsz be, csak kikapcsolod az integrációt. További infóért nézd meg a dokumentációt.',
  'username' => 'Felhasználó',
  'password' => 'Jelszó',
  'disable_submit' => 'Tovább!',
  'recovery_success_title' => 'Azonosítás elfogadva',
  'recovery_success_content' => 'Sikerült kikapcsolni az integrációt. A képtár most önálló szerver módban van.',
  'recovery_success_advice_login' => 'Jelentkezz be rendszergazdaként, hogy megváltoztasd a kötés beállításokat és(vagy) engedélyezd újra az integrációt',
  'goto_login' => 'Ugrás a bejelentkezéshez',
  'goto_bridgemgr' => 'Ugrás a kötés kezelőhöz',
  'recovery_failure_title' => 'Azonosítás elutasítva',
  'recovery_failure_content' => 'Rossz azonosító adatok. Az önálló szerver változat rendszergazda adatait kell megadni (általában a telepítéskor megadott adatok).',
  'try_again' => 'próbáld újra',
  'recovery_wait_title' => 'a várakozás idő nem telt le',
  'recovery_wait_content' => 'Biztonsági okokból a script nem enged több probálkozást egymás után, tehát várnod kell egy keveset, míg újra megpróbálhatod az azonosítást.',
  'wait' => 'Várakozás',
  'create_redir_file' => 'Átirányítási fájl létrehozása (ajánlott)',
  'create_redir_file_explanation' => 'Hogy a fórumba bejelentkezett felhasználókat átírányithasd a képtárba, szükség van erre a fájlra a fórum könyvtárban. Ha ezt az opciót kiválasztod akkor a kötés-kezelő létrehozza neked, vagy megadja a bemásolásra kész kódot, ha kézzel akarod létrehozni ',
  'browse' => 'böngészés',
);

// ------------------------------------------------------------------------- //
// File calendar.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('CALENDAR_PHP')) $lang_calendar_php = array(
  'title' => 'Naptár', //cpg1.4
  'close' => 'Becsuk', //cpg1.4
  'clear_date' => 'Dátum törlése', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
  'miss_param' => 'Paraméter szükséges \'%s\' művelet nincs végrehajtva',
  'unknown_cat' => 'A választott kategória nem létezik az adatbázisban',
  'usergal_cat_ro' => 'A felhasználói képtár kategória nem törölhető!',
  'manage_cat' => 'Kategóriák kezelése',
  'confirm_delete' => 'Biztos, hogy törölni akarod ezt a kategóriát?', //js-alert
  'category' => 'Kategória',
  'operations' => 'Műveletek',
  'move_into' => 'Átmozgatás',
  'update_create' => 'Kategória frissítés/létrehozás',
  'parent_cat' => 'Szülő kategória',
  'cat_title' => 'Kategória címe',
  'cat_thumb' => 'Kategória áttekintő',
  'cat_desc' => 'Kategória leírás',
  'categories_alpha_sort' => 'Kategóriák névsorba rendezése (vagy saját rendezés)', //cpg1.4
  'save_cfg' => 'Beállítások elmentése', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File admin.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('ADMIN_PHP')) $lang_admin_php = array(
  'title' => 'Képtár konfiguráció', //cpg1.4
  'manage_exif' => 'Exif (cserélhető képformátum) képernyő kezelése', //cpg1.4
  'manage_plugins' => 'Beépülők kezelése', //cpg1.4
  'manage_keyword' => 'Kulcsszavak kezelése', //cpg1.4
  'restore_cfg' => 'Gyári beállítások visszaállítása',
  'save_cfg' => 'Új konfiguráció mentése',
  'notes' => 'Megjegyzések',
  'info' => 'Információ',
  'upd_success' => 'Coppermine konfiguráció frissítve.',
  'restore_success' => 'Coppermine alapértelmezett konfiguráció visszaállítva.',
  'name_a' => 'Név szerint növekvő',
  'name_d' => 'Név szerint csökkenő',
  'title_a' => 'Cím szerint növekvő',
  'title_d' => 'Cím szerint csökkenő',
  'date_a' => 'Dátum szerint növekvő',
  'date_d' => 'Dátum szerint csökkenő',
  'pos_a' => 'Pozíció szerint növekvő', //cpg1.4
  'pos_d' => 'Pozíció szerint csökkenő', //cpg1.4
  'th_any' => 'Legnagyobb nézet',
  'th_ht' => 'Magasság',
  'th_wd' => 'Szélesség',
  'label' => 'Címke',
  'item' => 'Elem',
  'debug_everyone' => 'Mindenki',
  'debug_admin' => 'Csak rendszergazda',
  'no_logs'=> 'Ki', //cpg1.4
  'log_normal'=> 'Normál', //cpg1.4
  'log_all' => 'Minden', //cpg1.4
  'view_logs' => 'Log megtekintése', //cpg1.4
  'click_expand' => 'Kattints a szekció nevére a kibontáshoz', //cpg1.4
  'expand_all' => 'Összes kibontása', //cpg1.4
  'notice1' => '(*) Ezek a beállítások nem változnak, ha már vannak fájlok az adatbázisban.', //cpg1.4 - (relocated)
  'notice2' => '(**) A változtatások csak az ezután feltöltött fájlokra érvényesek, a régebbi fájlokra nem. Ha a már létező fájloknál is érvényre akarod juttani, menj a &quot;<a href="util.php">Rendszergazda eszközök</a> > Képek átméretezése&quot; menübe.', //cpg1.4 - (relocated)
  'notice3' => '(***) Minden log fájl angol nyelvű.', //cpg1.4 - (relocated)
  'bbs_disabled' => 'Funkció letiltva, ha az integráció használatban van', //cpg1.4
  'auto_resize_everyone' => 'Mindenki', //cpg1.4
  'auto_resize_user' => 'Csak felhasználók', //cpg1.4
  'ascending' => 'Növekvő', //cpg1.4
  'descending' => 'Csökkenő', //cpg1.4
);

if (defined('ADMIN_PHP')) $lang_admin_data = array(
  'Általános beállítások',
  array('Képtár neve', 'gallery_name', 0, 'f=index.htm&amp;as=admin_general_name&amp;ae=admin_general_name_end'), //cpg1.4
  array('Képtár leírása', 'gallery_description', 0, 'f=index.htm&amp;as=admin_general_description&amp;ae=admin_general_description_end'), //cpg1.4
  array('Képtár rendszergazda email címe', 'gallery_admin_email', 0, 'f=index.htm&amp;as=admin_general_email&amp;ae=admin_general_email_end'), //cpg1.4
  array('Coppermine képtár URL címe (elég a könyvtár címe, ne használj \'index.php\' végű URL-t)', 'ecards_more_pic_target', 0, 'f=index.htm&amp;as=admin_general_coppermine-url&amp;ae=admin_general_coppermine-url_end'), //cpg1.4
  array('Honlapod címe', 'home_target', 0, 'f=index.htm&amp;as=admin_general_home-url&amp;ae=admin_general_home-url_end'), //cpg1.4
  array('Kedvencek zippelt letöltésének engedélyezése', 'enable_zipdownload', 1, 'f=index.htm&amp;as=admin_general_zip-download&amp;ae=admin_general_zip-download_end'), //cpg1.4
  array('Az időzóna eltérése a Greenwich-i középidőtől (jelenlegi idő: ' . localised_date(-1, $comment_date_fmt) . ')','time_offset',0, 'f=index.htm&amp;as=admin_general_time-offset&amp;ae=admin_general_time-offset_end&amp;top=1'), //cpg1.4
  array('Titkosított jelszavak engedélyezése (nem lehet visszavonni)','enable_encrypted_passwords',1, 'f=index.htm&amp;as=admin_general_encrypt_password_start&amp;ae=admin_general_encrypt_password_end&amp;top=1'), // cpg 1.4
  array('Súgó ikonos engedélyezése (a súgó csak angolul érhető el.)','enable_help',9, 'f=index.htm&amp;as=admin_general_help&amp;ae=admin_general_help_end'), //cpg1.4
  array('Kulcsszó kiválasztás keresés engedélyezése','clickable_keyword_search',14, 'f=index.htm&amp;as=admin_general_keywords_start&amp;ae=admin_general_keywords_end'), //cpg1.4
  array('Beépülők engedélyezése', 'enable_plugins', 12, 'f=index.htm&amp;as=admin_general_enable-plugins&amp;ae=admin_general_enable-plugins_end'),  //cpg1.4
  array('Belső IP címek tiltásának engedélyezése ', 'ban_private_ip', 1,  'f=index.htm&amp;as=admin_general_private-ip&amp;ae=admin_general_private-ip_end'), //cpg1.4
  array('Böngészhető kötegelt hozzáadás felület', 'browse_batch_add', 1, 'f=index.htm&amp;as=admin_general_browsable_batch_add&amp;ae=admin_general_browsable_batch_add_end'), //cpg1.4

  'Nyelv &amp; karakterkészlet beállítás',
  array('Nyelv', 'lang', 5, 'f=index.htm&amp;as=admin_language_language&amp;ae=admin_language_language_end'), //cpg1.4
  array('Angol felirat használata, ha nincs lefordítva?', 'language_fallback', 1, 'f=index.htm&amp;as=admin_language_fallback&amp;ae=admin_language_fallback_end'), //cpg1.4
  array('Karakter kódolás', 'charset', 4, 'f=index.htm&amp;as=admin_language_charset&amp;ae=admin_language_charset_end'), //cpg1.4
  array('Mutassa a nyelvek listáját', 'language_list', 1, 'f=index.htm&amp;as=admin_language_list&amp;ae=admin_language_list_end'), //cpg1.4
  array('Mutassa a nyelvek zászlóját', 'language_flags', 8, 'f=index.htm&amp;as=admin_language_flags&amp;ae=admin_language_flags_end&amp;top=1'), //cpg1.4
  array('Mutassa az alapértelmezett nyelvet a nyelvi menűben', 'language_reset', 1, 'f=index.htm&amp;as=admin_language_reset&amp;ae=admin_language_reset_end&amp;top=1'), //cpg1.4
  //array('Mutassa az elöző/következő -t a fülecskés oldalakon', 'previous_next_tab', 1), //cpg1.4

  'Téma beállítások',
  array('Témák', 'theme', 6, 'f=index.htm&amp;as=admin_theme_theme&amp;ae=admin_theme_theme_end'), //cpg1.4
  array('Mutassa a téma választékot', 'theme_list', 1, 'f=index.htm&amp;as=admin_theme_theme_list&amp;ae=admin_theme_theme_list_end'), //cpg1.4
  array('Mutassa az alapértelmezett témát a téma választó menüben', 'theme_reset', 1, 'f=index.htm&amp;as=admin_theme_theme_reset&amp;ae=admin_theme_theme_reset_end'), //cpg1.4
  array('Mutassa a GYIK-ot', 'display_faq', 1, 'f=index.htm&amp;as=admin_theme_faq&amp;ae=admin_theme_faq_end'), //cpg1.4
  array('Saját menü neve', 'custom_lnk_name', 0,'f=index.htm&amp;as=admin_theme_custom_lnk_name&amp;ae=admin_theme_custom_lnk_name_end'), //cpg1.4
  array('Saját menü URL címe', 'custom_lnk_url', 0,'f=index.htm&amp;as=admin_language_custom_lnk_url&amp;ae=admin_language_custom_lnk_url_end'), //cpg1.4
  array('BBCode segítség megjelenítése', 'show_bbcode_help', 1, 'f=index.htm&amp;as=admin_theme_bbcode&amp;ae=admin_theme_bbcode_end&amp;top=1'), //cpg1.4
  array('Mutassa az XHTML vagy CSS validitásra utaló lábrészt a témában?','vanity_block',1, 'f=index.htm&amp;as=vanity_block&amp;ae=vanity_block_end'), //cpg1.4
  array('Saját fejléc helye', 'custom_header_path', 0, 'f=index.htm&amp;as=admin_theme_include_path_start&amp;ae=admin_theme_include_path_end'), //cpg1.4
  array('Saját lábléc helye', 'custom_footer_path', 0, 'f=index.htm&amp;as=admin_theme_include_path_start&amp;ae=admin_theme_include_path_end'), //cpg1.4

  'Képalbum lista nézet',
  array('A fő tábla szélessége (képpontban vagy % -ban)', 'main_table_width', 0, 'f=index.htm&amp;as=admin_album_table-width&amp;ae=admin_album_table-width_end'), //cpg1.4
  array('Hány szintig mutassa a kategóriákat', 'subcat_level', 0, 'f=index.htm&amp;as=admin_album_category-levels&amp;ae=admin_album_category-levels_end'), //cpg1.4
  array('Oldalanként hány képalbum jelenjen meg', 'albums_per_page', 0, 'f=index.htm&amp;as=admin_album_number&amp;ae=admin_album_number_end'), //cpg1.4
  array('A képalbum lista hány oszlopból álljon', 'album_list_cols', 0, 'f=index.htm&amp;as=admin_album_columns&amp;ae=admin_album_columns_end'), //cpg1.4
  array('Indexképek mérete képpontban', 'alb_list_thumb_size', 0, 'f=index.htm&amp;as=admin_album_thumbnail-size&amp;ae=admin_album_thumbnail-size_end'), //cpg1.4
  array('A főoldal tartalma', 'main_page_layout', 0, 'f=index.htm&amp;as=admin_album_list_content&amp;ae=admin_album_list_content_end'), //cpg1.4
  array('Mutassa az első szintű képalbum indexképet a kategóriában','first_level',1, 'f=index.htm&amp;as=admin_album_first-level_thumbs&amp;ae=admin_album_first-level_thumbs_end'), //cpg1.4
  array('Kategóriák névsorba rendezése (esteleg saját rendezés használata)','categories_alpha_sort',1, 'f=index.htm&amp;as=admin_album_list_alphasort_start&amp;ae=admin_album_list_alphasort_end'), //cpg1.4
  array('Mutassa a kapcsolt fájlok számát','link_pic_count',1, 'f=index.htm&amp;as=admin_album_linked_files_start&amp;ae=admin_album_linked_files_end'), //cpg1.4

  'Indexkép nézet',
  array('Oszlopok száma az indexkép oldalon', 'thumbcols', 0, 'f=index.htm&amp;as=admin_thumbnail_columns&amp;ae=admin_thumbnail_columns_end'), //cpg1.4
  array('Sorok száma az indexkép oldalon', 'thumbrows', 0, 'f=index.htm&amp;as=admin_thumbnail_rows&amp;ae=admin_thumbnail_rows_end'), //cpg1.4
  array('A fülek maximális száma', 'max_tabs', 10, 'f=index.htm&amp;as=admin_thumbnail_tabs&amp;ae=admin_thumbnail_tabs_end'), //cpg1.4
  array('A képek feliratának megjelenítése (a címén kivül) az indexkép alatt', 'caption_in_thumbview', 1, 'f=index.htm&amp;as=admin_thumbnail_display_caption&amp;ae=admin_thumbnail_display_caption_end'), //cpg1.4
  array('A megtekintések számának megjelenítése az indexkép alatt', 'views_in_thumbview', 1, 'f=index.htm&amp;as=admin_thumbnail_display_views&amp;ae=admin_thumbnail_display_views_end'), //cpg1.4
  array('A hozászólások számának megjelenítése az indexkép alatt', 'display_comment_count', 1, 'f=index.htm&amp;as=admin_thumbnail_display_comments&amp;ae=admin_thumbnail_display_comments_end'), //cpg1.4
  array('A feltöltő nevének megjelenítése az indexkép alatt', 'display_uploader', 1, 'f=index.htm&amp;as=admin_thumbnail_display_uploader&amp;ae=admin_thumbnail_display_uploader_end'), //cpg1.4
  //array('A deltöltő Rendszergazda nevének megjelenítése az indexkép alatt ', 'display_admin_uploader', 1, 'f=index.htm&amp;as=admin_thumbnail_display_admin_uploader&amp;ae=admin_thumbnail_display_admin_uploader_end'), //cpg1.4
  array('A fájl név megjelenítése az indexkép alatt', 'display_filename', 1, 'f=index.htm&amp;as=admin_thumbnail_display_filename&amp;ae=admin_thumbnail_display_filename_end'), //cpg1.4
  //array('A képalbum elnevezésének megjelenítése', 'alb_desc_thumb', 1, 'f=index.htm&amp;as=admin_thumbnail_display_description&amp;ae=admin_thumbnail_display_description_end'), //cpg1.4
  array('A képek alapértelmezett sorrendje', 'default_sort_order', 3, 'f=index.htm&amp;as=admin_thumbnail_default_sortorder&amp;ae=admin_thumbnail_default_sortorder_end'), //cpg1.4
  array('A szükséges szavazatok száma a megjelenéshez  \'A legtöbb szavazatot kapottak\'-listájában', 'min_votes_for_rating', 0, 'f=index.htm&amp;as=admin_thumbnail_minimum_votes&amp;ae=admin_thumbnail_minimum_votes_end'), //cpg1.4

  'Kép nézet', //cpg1.4
  array('A tábla szélessége (képpontban vagy %-ban)', 'picture_table_width', 0, 'f=index.htm&amp;as=admin_image_comment_table-width&amp;ae=admin_image_comment_table-width_end'), //cpg1.4
  array('A kép információ megjelenése alapértelmezetten', 'display_pic_info', 1, 'f=index.htm&amp;as=admin_image_comment_info_visible&amp;ae=admin_image_comment_info_visible_end'), //cpg1.4
  array('A kép leírás maximális hossza', 'max_img_desc_length', 0, 'f=index.htm&amp;as=admin_image_comment_descr_length&amp;ae=admin_image_comment_descr_length_end'), //cpg1.4
  array('A szavak maximális hossza', 'max_com_wlength', 0, 'f=index.htm&amp;as=admin_image_comment_chars_per_word&amp;ae=admin_image_comment_chars_per_word_end'), //cpg1.4
  array('Filmszalag megjelenítése', 'display_film_strip', 1, 'f=index.htm&amp;as=admin_image_comment_filmstrip_toggle&amp;ae=admin_image_comment_filmstrip_toggle_end'), //cpg1.4
  array('Fájlnév megjelenítése a filmszalag alatt', 'display_film_strip_filename', 1, 'f=index.htm&amp;as=admin_image_comment_display_film_strip_filename&amp;ae=admin_image_comment_display_film_strip_filename_end'), //cpg1.4
  array('Elemek száma a filmszalagban', 'max_film_strip_items', 0, 'f=index.htm&amp;as=admin_image_comment_filmstrip_number&amp;ae=admin_image_comment_filmstrip_number_end'), //cpg1.4
  array('Diavetítés időzítése ezredmásodpercben (1 mp = 1000 ezredmásodperc)', 'slideshow_interval', 0, 'f=index.htm&amp;as=admin_image_comment_slideshow_interval&amp;ae=admin_image_comment_slideshow_interval_end'), //cpg1.4

  'Hozzászólás beállítások', //cpg1.4
  array('Csúnya szavak kiszűrése', 'filter_bad_words', 1, 'f=index.htm&amp;as=admin_image_comment_bad_words&amp;ae=admin_image_comment_bad_words_end'), //cpg1.4
  array('Szmájlik engedélyezése a hozzászólásokban', 'enable_smilies', 1, 'f=index.htm&amp;as=admin_image_comment_smilies&amp;ae=admin_image_comment_smilies_end'), //cpg1.4
  array('Több folyamatos hozzászólás enegedélyezése egy képhez ugyanazon felhasználótól (elárasztás -flood- védelem kikapcsolása)', 'disable_comment_flood_protect', 1, 'f=index.htm&amp;as=admin_image_comment_flood&amp;ae=admin_image_comment_flood_end'), //cpg1.4
  array('A hozzászólás sorainak maximumma', 'max_com_lines', 0, 'f=index.htm&amp;as=admin_image_comment_lines&amp;ae=admin_image_comment_lines_end'), //cpg1.4
  array('A hozzászólás maximális hossza', 'max_com_size', 0, 'f=index.htm&amp;as=admin_image_comment_length&amp;ae=admin_image_comment_length_end'), //cpg1.4
  array('A rendszergazda értesítése a hozzászólásról', 'email_comment_notification', 1, 'f=index.htm&amp;as=admin_image_comment_admin_notify&amp;ae=admin_image_comment_admin_notify_end'), //cpg1.4
  array('Hozzászólások sorrendje', 'comments_sort_descending', 17, 'f=index.htm&amp;as=admin_comment_sort_start&amp;ae=admin_comment_sort_end'), //cpg1.4
  array('Előtag a névtelen hozzászólások számára ', 'comments_anon_pfx', 0, 'f=index.htm&amp;as=comments_anon_pfx&amp;ae=comments_anon_pfx_end'), //cpg1.4

  'Kép és indexkép beállítások',
  array('A jpeg képek minősége', 'jpeg_qual', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_jpeg_quality&amp;ae=admin_picture_thumbnail_jpeg_quality_end'), //cpg1.4
  array('Az indexkép maximális mérete <a href="#notice2" class="clickable_option">**</a>', 'thumb_width', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max-dimension&amp;ae=admin_picture_thumbnail_max-dimension_end'), //cpg1.4
  array('Méretezés (szélesség vagy magasság vagy legnagyobb nézet)<a href="#notice1" class="clickable_option">**</a>', 'thumb_use', 7, 'f=index.htm&amp;as=admin_picture_thumbnail_use-dimension&amp;ae=admin_picture_thumbnail_use-dimension_end'), //cpg1.4
  array('Közbenső kép készítése','make_intermediate',1, 'f=index.htm&amp;as=admin_picture_thumbnail_intermediate_toggle&amp;ae=admin_picture_thumbnail_intermediate_toggle_end'), //cpg1.4
  array('A közbenső kép vagy videó legnagyobb szélessége vagy magassága<a href="#notice2" class="clickable_option">**</a>', 'picture_width', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_intermediate_dimension&amp;ae=admin_picture_thumbnail_intermediate_dimension_end'), //cpg1.4
  array('A feltölhető fájl maximális mérete (kB)', 'max_upl_size', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max_upload_size&amp;ae=admin_picture_thumbnail_max_upload_size_end'), //cpg1.4
  array('A feltölthető kép vagy videó legnagyobb szélessége vagy magassága (képpontban)', 'max_upl_width_height', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max_upload_dimension&amp;ae=admin_picture_thumbnail_max_upload_dimension_end'), //cpg1.4
  array('Automatikus átméretezés, ha nagyobb mint a megengedett méret', 'auto_resize', 16, 'f=index.htm&amp;as=admin_picture_thumbnail_auto-resize&amp;ae=admin_picture_thumbnail_auto-resize_end'), //cpg1.4

  'Kép és indexkép haladó beállítások',
  array('Lehetséges magán képalbum (megjegyzés: ha átváltasz \'igen\' -ből \'nem\' -be az <i>összes</i> magán képalbum nyilvános lesz)', 'allow_private_albums', 1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_private_toggle&amp;ae=admin_picture_thumb_advanced_private_toggle_end'), //cpg1.4
  array('Magán album ikon megjelenítése látogatóknak?','show_private',1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_private_icon_show&amp;ae=admin_picture_thumb_advanced_private_icon_show_end'), //cpg1.4
  array('Nem használható karakterek a fájlnévben', 'forbiden_fname_char',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_filename_forbidden_chars&amp;ae=admin_picture_thumb_advanced_filename_forbidden_chars_end'), //cpg1.4
  //array('Elfogadott fájl kiterjesztések', 'allowed_file_extensions',0, 'f=index.htm&amp;as=&amp;ae=_end'), //cpg1.4
  array('Megengedett kép formátumok', 'allowed_img_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_pic_extensions&amp;ae=admin_picture_thumb_advanced_pic_extensions_end'), //cpg1.4
  array('Megengedett videó formátumok', 'allowed_mov_types',0, 'f=index.htm&amp;as=admin_thumbs_advanced_movie&amp;ae=admin_thumbs_advanced_movie_end'), //cpg1.4
  array('Automatikus film lejátszás', 'media_autostart',1, 'f=index.htm&amp;as=admin_movie_autoplay&amp;ae=admin_movie_autoplay_end'), //cpg1.4
  array('Megengedett audió formátumok', 'allowed_snd_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_audio_extensions&amp;ae=admin_picture_thumb_advanced_audio_extensions_end'), //cpg1.4
  array('Megengedett dokumentum formátumok', 'allowed_doc_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_doc_extensions&amp;ae=admin_picture_thumb_advanced_doc_extensions_end'), //cpg1.4
  array('Képátméretezési eljárások','thumb_method',2, 'f=index.htm&amp;as=admin_picture_thumb_advanced_resize_method&amp;ae=admin_picture_thumb_advanced_resize_method_end'), //cpg1.4
  array('Az ImageMagick program \'convert\' eszköz elérési útvonala (pl.: /usr/bin/X11/)', 'impath', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_im_path&amp;ae=admin_picture_thumb_advanced_im_path_end'), //cpg1.4
  //array('Megengedett kép formátumok (csak az ImageMagick számára)', 'allowed_img_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_allowed_imagetypes&amp;ae=admin_picture_thumb_advanced_allowed_imagetypes_end'), //cpg1.4
  array('Parancssori opciók az ImageMagick számára', 'im_options', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_im_commandline&amp;ae=admin_picture_thumb_advanced_im_commandline_end'), //cpg1.4
  array('EXIF adat olvasásása jpeg fájlban', 'read_exif_data', 13, 'f=index.htm&amp;as=admin_picture_thumb_advanced_exif&amp;ae=admin_picture_thumb_advanced_exif_end'), //cpg1.4
  array('IPTC adat olvasásása jpeg fájlban', 'read_iptc_data', 1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_iptc&amp;ae=admin_picture_thumb_advanced_iptc_end'), //cpg1.4
  array('Album könyvtár <a href="#notice1" class="clickable_option">*</a>', 'fullpath', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_albums_dir&amp;ae=admin_picture_thumb_advanced_albums_dir_end'), //cpg1.4
  array('A felhasználói fájlok könyvtára <a href="#notice1" class="clickable_option">*</a>', 'userpics', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_userpics_dir&amp;ae=admin_picture_thumb_advanced_userpics_dir_end'), //cpg1.4
  array('Közbenső képek előtagja <a href="#notice1" class="clickable_option">*</a>', 'normal_pfx', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_intermediate_prefix&amp;ae=admin_picture_thumb_advanced_intermediate_prefix_end'), //cpg1.4
  array('Indexképek előtagja <a href="#notice1" class="clickable_option">*</a>', 'thumb_pfx', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_thumbs_prefix&amp;ae=admin_picture_thumb_advanced_thumbs_prefix_end'), //cpg1.4
  array('Alapértelmezett mód a könyvtárak számára', 'default_dir_mode', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_chmod_folder&amp;ae=admin_picture_thumb_advanced_chmod_folder_end'), //cpg1.4
  array('Alapértelmezett mód a fájlok számára', 'default_file_mode', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_chmod_files&amp;ae=admin_picture_thumb_advanced_chmod_files_end'), //cpg1.4

  'Felhasználó beállítások',
  array('Új felhasználó regisztrációjának engedélyezése', 'allow_user_registration', 1, 'f=index.htm&amp;as=admin_allow_registration&amp;ae=admin_allow_registration_end'), //cpg1.4
  array('Vendég hozzáférés engedélyezése', 'allow_unlogged_access', 1, 'f=index.htm&amp;as=admin_allow_unlogged_access&amp;ae=admin_allow_unlogged_access_end'), //cpg1.4
  array('Regisztráció igazolása email-ben', 'reg_requires_valid_email', 1, 'f=index.htm&amp;as=admin_registration_verify&amp;ae=admin_registration_verify_end'), //cpg1.4
  array('Rendszergazda értesítése email-ben a regisztrációról', 'reg_notify_admin_email', 1, 'f=index.htm&amp;as=admin_registration_notify&amp;ae=admin_registration_notify_end'), //cpg1.4
  array('A regisztráció rendszergazdai jóváhagyása', 'admin_activation', 1, 'f=index.htm&amp;as=admin_activation&amp;ae=admin_activation_end'),  //cpg1.4
  array('2 felhasználó azonos email címének engedélyezése', 'allow_duplicate_emails_addr', 1, 'f=index.htm&amp;as=admin_allow_duplicate_emails_addr&amp;ae=admin_allow_duplicate_emails_addr_end'), //cpg1.4
  array('Rendszergazda értesítése a jóváhagyásra váró feltöltésekről', 'upl_notify_admin_email', 1, 'f=index.htm&amp;as=admin_approval_notify&amp;ae=admin_approval_notify_end'), //cpg1.4
  array('Taglista megtekintése bejelentkezett felhasználóknak', 'allow_memberlist', 1, 'f=index.htm&amp;as=admin_user_memberlist&amp;ae=admin_user_memberlist_end'), //cpg1.4
  array('A felhasználó megváltoztathatja az email címét', 'allow_email_change', 1, 'f=index.htm&amp;as=admin_user_allow_email_change&amp;ae=admin_user_allow_email_change_end'), //cpg1.4
  array('A felhasználó kiterjesztett jogainak engélyezése a publikus képtáraiban lévő képekre', 'users_can_edit_pics', 1, 'f=index.htm&amp;as=admin_user_editpics_public_start&amp;ae=admin_user_editpics_public_end'), //cpg1.4
  array('Hibás bejelentkezések száma, ami után ideiglenes tiltásba kerül (nyers erő támadás elleni védelem)', 'login_threshold', 0, 'f=index.htm&amp;as=admin_user_login_start&amp;ae=admin_user_login_end'), //cpg1.4
  array('Ideiglenes tiltás időtartama', 'login_expiry', 0, 'f=index.htm&amp;as=admin_user_login_start&amp;ae=admin_user_login_end'), //cpg1.4
  array('&quot;Jelentés a rendszergazdának&quot; engedélyezése', 'report_post', 1, 'f=index.htm&amp;as=admin_user_enable_report&amp;ae=admin_user_enable_report_end'),  //cpg1.4

// custom profile fields,  //cpg1.4
  'Saját mezők a felhasználói profilokban (hagyd üresen, ha nem használod).
  Használd a 6. mezőt a hosszú bejegyzésekhez, például életrajzhoz.', //cpg1.4
  array('Saját mező 1', 'user_profile1_name', 0, 'f=index.htm&amp;as=admin_custom&amp;ae=admin_custom_end'), //cpg1.4
  array('Saját mező 2', 'user_profile2_name', 0), //cpg1.4
  array('Saját mező 3', 'user_profile3_name', 0), //cpg1.4
  array('Saját mező 4', 'user_profile4_name', 0), //cpg1.4
  array('Saját mező 5', 'user_profile5_name', 0), //cpg1.4
  array('Saját mező 6', 'user_profile6_name', 0), //cpg1.4

  'Saját mezők a képek leírására (hagyd üresen, ha nem használod).',
  array('Saját mező 1', 'user_field1_name', 0, 'f=index.htm&amp;as=admin_custom_image&amp;ae=admin_custom_image_end'), //cpg1.4
  array('Saját mező 2', 'user_field2_name', 0),
  array('Saját mező 3', 'user_field3_name', 0),
  array('Saját mező 4', 'user_field4_name', 0),

  'Süti beállítások',
  array('Süti neve', 'cookie_name', 0, 'f=index.htm&amp;as=admin_cookie_name&amp;ae=admin_cookie_name_end'), //cpg1.4
  array('Süti útvonala', 'cookie_path', 0, 'f=index.htm&amp;as=admin_cookie_path&amp;ae=admin_cookie_path_end'), //cpg1.4

  'Email beállítások (rendszerint nem kell változtatni rajta; hagyj minden mezőt üresen, ha nem vagy biztos benne)', //cpg1.4
  array('Kimenő levélkiszolgáló (smtp) , ha üres akkor a sendmail az alapértelmezett', 'smtp_host', 0, 'f=index.htm&amp;as=admin_email&amp;ae=admin_email_end'), //cpg1.4
  array('Kimenő levélkiszolgáló felhasználó', 'smtp_username', 0), //cpg1.4
  array('Kimenő levélkiszolgáló jelszó', 'smtp_password', 0), //cpg1.4

  'Naplózás és statisztika', //cpg1.4
  array('Naplózási mód <a href="#notice3" class="clickable_option">***</a>', 'log_mode', 11, 'f=index.htm&amp;as=admin_logging_log_mode&amp;ae=admin_logging_log_mode_end'), //cpg1.4
  array('Képeslapok naplózása ', 'log_ecards', 1, 'f=index.htm&amp;as=admin_general_log_ecards&amp;ae=admin_general_log_ecards_end'), //cpg1.4
  array('Részletes szavazási statisztika','vote_details',1, 'f=index.htm&amp;as=admin_logging_votedetails&amp;ae=admin_logging_votedetails_end'), //cpg1.4
  array('Részletes találati statisztika','hit_details',1, 'f=index.htm&amp;as=admin_logging_hitdetails&amp;ae=admin_logging_hitdetails_end'), //cpg1.4

  'Karbantartási beállítások', //cpg1.4
  array('Nyomkövetési mód bekapcsolása', 'debug_mode', 9, 'f=index.htm&amp;as=debug_mode&amp;ae=debug_mode_end'), //cpg1.4
  array('Nyomkövetési módra való figyelmesztetés', 'debug_notice', 1, 'f=index.htm&amp;as=admin_misc_debug_notices&amp;ae=admin_misc_debug_notices_end'), //cpg1.4
  array('Képtár kikapcsolva', 'offline', 1, 'f=index.htm&amp;as=admin_general_offline&amp;ae=admin_general_offline_end'), //cpg1.4
);


// ------------------------------------------------------------------------- //
// File db_ecard.php
// ------------------------------------------------------------------------- //

if (defined('DB_ECARD_PHP')) $lang_db_ecard_php = array(
  'title' => 'Elküldött képeslapok',
  'ecard_sender' => 'Feladó',
  'ecard_recipient' => 'Címzett',
  'ecard_date' => 'Dátum',
  'ecard_display' => 'Képeslap megjelenítése',
  'ecard_name' => 'Név',
  'ecard_email' => 'E-mail cím',
  'ecard_ip' => 'IP cím',
  'ecard_ascending' => 'növekvő',
  'ecard_descending' => 'csökkenő',
  'ecard_sorted' => 'Rendezett',
  'ecard_by_date' => 'Dátum szerint',
  'ecard_by_sender_name' => 'Feladó szerint',
  'ecard_by_sender_email' => 'Feladó email címe szerint',
  'ecard_by_sender_ip' => 'A feladó IP címe szerint',
  'ecard_by_recipient_name' => 'Címzett szerint',
  'ecard_by_recipient_email' => 'Címzett email címe szerint',
  'ecard_number' => 'Rekordok megjelenítése  %s -tól %s -ig %s -ból',
  'ecard_goto_page' => 'Ugráss az oldalra',
  'ecard_records_per_page' => 'Rekordok oldalanként',
  'check_all' => 'Összes bejelölése',
  'uncheck_all' => 'Összes bejelölés törlése',
  'ecards_delete_selected' => 'Kiválasztott képeslapok törlése',
  'ecards_delete_confirm' => 'Biztos törölni akarod ezeket a rekordokat? Jelöld be a négyzetet!',
  'ecards_delete_sure' => 'Biztos',
);


// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
  'empty_name_or_com' => 'Szükséges megadnod a neved és a hozzászólásod',
  'com_added' => 'Hozzászólásodat feljegyeztük',
  'alb_need_title' => 'A képalbumnak címet kell adni!',
  'no_udp_needed' => 'Nincs szükség frissítésre.',
  'alb_updated' => 'A képalbumot frissítettük',
  'unknown_album' => 'A kiválasztott képalbum nem létezik, vagy nincs jogod képet feltölteni',
  'no_pic_uploaded' => 'Nem lett fájl feltöltve!<br /><br />Ha volt feltöltésre kiválasztott kép, akkor ellenőrizd, hogy engedélyezett a feltöltés...',
  'err_mkdir' => 'Hiba a %s könyvtár létrehozásakor!',
  'dest_dir_ro' => 'A cél könyvtár %s nem írható!',
  'err_move' => 'Lehetetlen %st átmozgatni a %s könyvtárba!',
  'err_fsize_too_large' => 'Túl nagy fájlméret (A megendett legnagyobb méret %s x %s) !', //obsolete since cpg1.3 - consider removal in cpg1.4 once upload.php has been overhauled
  'err_imgsize_too_large' => 'Túl nagy fájlméret (A megendett legnagyobb méret %s kB) !', //obsolete since cpg1.3 - consider removal in cpg1.4 once upload.php has been overhauled
  'err_invalid_img' => 'A feltöltött fájl nem megfelelő formátumú!',
  'allowed_img_types' => 'Csak %s db fájlt tölthetsz fel.',
  'err_insert_pic' => 'A \'%s\' képet nem lehet elhelyezni a képalbumba ',
  'upload_success' => 'Sikeres feltöltés.<br /><br />Látható lesz, amint a rendszergazda jóváhagyja.',
  'notify_admin_email_subject' => '%s - Feltöltési értesítő',
  'notify_admin_email_body' => '%s által feltöltött kép jóváhagyásra vár. Nézd meg %s',
  'info' => 'Információ',
  'com_added' => 'Hozzászólás bejegyezve',
  'alb_updated' => 'Képalbum frissítve',
  'err_comment_empty' => 'Üres hozzászólás!',
  'err_invalid_fext' => 'Csak a következő kiterjesztésű fájlok elfogadottak: <br /><br />%s.',
  'no_flood' => 'Sajnálom, de te voltál az útolsó hozzászóló ehhez a képhez.<br /><br />Szerkezd újra a hozzászólásodat, ha módosítani akarsz rajta',
  'redirect_msg' => 'Át lettél irányítva.<br /><br /><br />Kattints a \'folytatás\'-ra, ha az oldal nem frissül automatikusan',
  'upl_success' => 'A képet sikeresen hozzáadtuk',
  'email_comment_subject' => 'Hozzászólás érkezet a Coppermine Képtárba',
  'email_comment_body' => 'Valaki hozzászólást küldött a képtáradba. A megtekintéshez kattints ide: ',
  'album_not_selected' => 'Nincs kiválasztva képalbum', //cpg1.4
  'com_author_error' => 'Ezt a nevet egy regisztrált tag használja, jelentkezz be vagy használj másik nevet.', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
  'caption' => 'Felirat',
  'fs_pic' => 'Teljes méretű kép ',
  'del_success' => 'Sikeresen törölve',
  'ns_pic' => 'Normál méretű kép',
  'err_del' => 'Nem lehet törölni',
  'thumb_pic' => 'Indexkép',
  'comment' => 'Hozzászólás',
  'im_in_alb' => 'Kép az albumban',
  'alb_del_success' => '&laquo;%s&raquo; album törölve', //cpg1.4
  'alb_mgr' => 'Album kezelő',
  'err_invalid_data' => 'Hibás adat \'%s\'-ban',
  'create_alb' => 'A \'%s\'képalbum létrehozása',
  'update_alb' => 'A \'%s\' képalbum frissítve  \'%s\' címmel és \'%s\' indexszel',
  'del_pic' => 'Kép törlése',
  'del_alb' => 'Album törlése',
  'del_user' => 'Felhasználó törlése',
  'err_unknown_user' => 'A kiválasztott felhasználó nem létezik!',
  'err_empty_groups' => 'Nincs egyetlen csoporttábla sem vagy a csoporttábla üres!', //cpg1.4
  'comment_deleted' => 'Hozzászólás sikeresen törölve',
  'npic' => 'Kép', //cpg1.4
  'pic_mgr' => 'Képkezelő', //cpg1.4
  'update_pic' => 'A \'%s\' kép frissítve \'%s\' fájlnévvel \'%s\'és indexszel', //cpg1.4
  'username' => 'felhasználónév', //cpg1.4
  'anonymized_comments' => '%s Névtelen hozzászólás', //cpg1.4
  'anonymized_uploads' => '%s Névtelen publikus feltöltés', //cpg1.4
  'deleted_comments' => '%s Törölt hozzászólás', //cpg1.4
  'deleted_uploads' => '%s Törölt publikus feltöltés', //cpg1.4
  'user_deleted' => '%s felhasználó törölve', //cpg1.4
  'activate_user' => 'Felhasználó engedélyezése', //cpg1.4
  'user_already_active' => 'A felhasználó már engedélyezett', //cpg1.4
  'activated' => 'Engedélyezés', //cpg1.4
  'deactivate_user' => 'Felhasználó tiltása ', //cpg1.4
  'user_already_inactive' => 'A felhasználó már le van tiltva', //cpg1.4
  'deactivated' => 'tiltás', //cpg1.4
  'reset_password' => 'Jelszó visszaállítás', //cpg1.4
  'password_reset' => 'Jelszó beállítva %s -re', //cpg1.4
  'change_group' => 'Elsődleges csoport választás', //cpg1.4
  'change_group_to_group' => 'Változtatás %s -ről  %s -re', //cpg1.4
  'add_group' => 'Másodlagogos csoport hozzáadása', //cpg1.4
  'add_group_to_group' => 'A %s felhasználó hozzáadása %s csoporthoz. Ő most a(z)  %s elsődleges csoport tagja és %s a másodlagos csoportja.', //cpg1.4
  'status' => 'Státusz', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File displayecard.php
// ------------------------------------------------------------------------- //

if (defined('DISPLAYECARD_PHP')) {

$lang_displayecard_php = array(
  'invalid_data' => 'Sérült adatok a képeslapodhoz az email kliens szerint. További információért ellenőrizd a linket.', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File displayimage.php
// ------------------------------------------------------------------------- //

if (defined('DISPLAYIMAGE_PHP')){

$lang_display_image_php = array(
  'confirm_del' => 'Biztos, hogy törölni akarod ezt a képet? \\nKommentare werden ebenfalls gelöscht.',
  'del_pic' => 'Kép törlése',
  'size' => '%s x %s képpont',
  'views' => '%s szor',
  'slideshow' => 'Diavetítés indítása',
  'stop_slideshow' => 'Dia',
  'view_fs' => 'Kattints ide a teljes kép megtekintéséhez',
  'edit_pic' => 'Kép információk szerkesztése', //cpg1.4
  'crop_pic' => 'Vágás és forgatás',
  'set_player' => 'Lejátszó választás',
);

$lang_picinfo = array(
  'title' =>'Kép információ',
  'Filename' => 'Fájlnév',
  'Album name' => 'A képalbum neve',
  'Rating' => 'Helyezés (%s szavazat)',
  'Keywords' => 'Kulcsszavak',
  'File Size' => 'Fájlméret',
  'Date Added' => 'Hozzáadás dátuma', //cpg1.4
  'Dimensions' => 'Méretek',
  'Displayed' => 'Megjelenítve',
  'URL' => 'URL', //cpg1.4
  'Make' => 'Készítő', //cpg1.4
  'Model' => 'Modell', //cpg1.4
  'DateTime' => 'Dátum &amp; idő', //cpg1.4
  'DateTimeOriginal' => 'Eredeti idő', //cpg1.4
  'ISOSpeedRatings'=>'ISO', //cpg1.4
  'MaxApertureValue' => 'Legnagyobb blende nyílás', //cpg1.4
  'FocalLength' => 'Fókusz távolság', //cpg1.4
  'Comment' => 'Hozzászólás',
  'addFav'=>'Hozzáadás a kedvencekhez',
  'addFavPhrase'=>'Kedvencek',
  'remFav'=>'Eltávolítás a kedvencekből',
  'iptcTitle'=>'IPTC cím',
  'iptcCopyright'=>'IPTC copyright',
  'iptcKeywords'=>'IPTC kulcsszavak',
  'iptcCategory'=>'IPTC kategória',
  'iptcSubCategories'=>'IPTC alkategóriák',
  'ColorSpace' => 'Színtér', //cpg1.4
  'ExposureProgram' => 'Expozíciós program', //cpg1.4
  'Flash' => 'Vaku', //cpg1.4
  'MeteringMode' => 'Mérési mód', //cpg1.4
  'ExposureTime' => 'Expozíciós idő', //cpg1.4
  'ExposureBiasValue' => 'Expozíciós előlállítás', //cpg1.4
  'ImageDescription' => ' Kép meghatározás', //cpg1.4
  'Orientation' => 'Orientáció', //cpg1.4
  'xResolution' => 'x felbontás', //cpg1.4
  'yResolution' => 'y felbontás', //cpg1.4
  'ResolutionUnit' => 'A felbontás egysége', //cpg1.4
  'Software' => 'Program', //cpg1.4
  'YCbCrPositioning' => 'YCbCr pozíció', //cpg1.4
  'ExifOffset' => 'Exif eltolás', //cpg1.4
  'IFD1Offset' => 'IFD1 eltolás', //cpg1.4
  'FNumber' => 'Blende', //cpg1.4
  'ExifVersion' => 'Exif verzió', //cpg1.4
  'DateTimeOriginal' => 'Eredeti dátum & idő', //cpg1.4
  'DateTimedigitized' => 'Digitalizálás dátuma & ideje', //cpg1.4
  'ComponentsConfiguration' => 'Komponens konfiguráció', //cpg1.4
  'CompressedBitsPerPixel' => 'Tömörített bitek száma képpontonként', //cpg1.4
  'LightSource' => 'Fényforrás', //cpg1.4
  'ISOSetting' => 'ISO beállítás', //cpg1.4
  'ColorMode' => 'Színmód', //cpg1.4
  'Quality' => 'Minőség', //cpg1.4
  'ImageSharpening' => 'Kép élesség', //cpg1.4
  'FocusMode' => 'Fókusz mód', //cpg1.4
  'FlashSetting' => 'Vaku beállítás', //cpg1.4
  'ISOSelection' => 'ISO választás', //cpg1.4
  'ImageAdjustment' => 'Képbeállítás', //cpg1.4
  'Adapter' => 'Adapter', //cpg1.4
  'ManualFocusDistance' => 'Kézi fókusztáv', //cpg1.4
  'DigitalZoom' => 'Digitális zoom', //cpg1.4
  'AFFocusPosition' => 'Autofókusz pozició', //cpg1.4
  'Saturation' => 'Telítettség', //cpg1.4
  'NoiseReduction' => 'Zaj csökkentés', //cpg1.4
  'FlashPixVersion' => 'Vaku Pix verzió', //cpg1.4
  'ExifImageWidth' => 'Exif képszélesség', //cpg1.4
  'ExifImageHeight' => 'Exif képmagasság', //cpg1.4
  'ExifInteroperabilityOffset' => 'Exif együttműködési ellenérték', //cpg1.4
  'FileSource' => 'Fájl forrás', //cpg1.4
  'SceneType' => 'Színhely típus', //cpg1.4
  'CustomerRender' => 'Ügyfél beállítás', //cpg1.4
  'ExposureMode' => 'Expozíciós mód', //cpg1.4
  'WhiteBalance' => 'Fehér egyensúly', //cpg1.4
  'DigitalZoomRatio' => 'Digitális zoom arány', //cpg1.4
  'SceneCaptureMode' => 'Táj felvételi mód', //cpg1.4
  'GainControl' => 'Nyereség kontroll', //cpg1.4
  'Contrast' => 'Kontraszt', //cpg1.4
  'Saturation' => 'Telítetség', //cpg1.4
  'Sharpness' => 'Élesség', //cpg1.4
  'ManageExifDisplay' => 'Exif képernyő kezelés', //cpg1.4
  'submit' => 'Tovább', //cpg1.4
  'success' => 'Információ sikeresen frissítve.', //cpg1.4
  'details' => 'Részletek', //cpg1.4
);

$lang_display_comments = array(
  'OK' => 'OK',
  'edit_title' => 'Hozzászólás szerkesztése',
  'confirm_delete' => 'Biztos, hogy törölni akarod ezt a hozzászólást?', //js-alert
  'add_your_comment' => 'Hozzászólásod hozzáadása',
  'name'=>'Név',
  'comment'=>'Hozzászólás',
  'your_name' => 'Saját neved',
  'report_comment_title' => 'Jelentés a hozzászólásról a rendszergazdának', //cpg1.4
);

$lang_fullsize_popup = array(
  'click_to_close' => 'Kattints a képre az ablak bezárásához!',
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
  'title' => 'Képeslap küldés',
  'invalid_email' => '<b>Figyelem</b>: Hibás email cím!',
  'ecard_title' => 'Egy képeslap neked %s -től',
  'error_not_image' => 'Csak kép küldhető képeslapként.', //cpg1.3.0
  'view_ecard' => 'Alternatív link, ha a kép nem jelenik meg helyesen: ',
  'view_ecard_plaintext' => 'Hogy megtekintsd ezt a képeslapot, másold ki és illesztd be ezt az URL-t a böngésződ címsorába:', //cpg1.4
  'view_more_pics' => 'Még több kép megtekintése!', //cpg1.4
  'send_success' => 'A képeslapod elküldve',
  'send_failed' => 'Sajnáljuk, de szerver nem tudta kézbesíteni a képeslapod...',
  'from' => 'Feladó',
  'your_name' => 'A Te neved',
  'your_email' => 'A Te email címed',
  'to' => 'Cimzett',
  'rcpt_name' => 'Cimzett neve',
  'rcpt_email' => 'Cimzett Email címe',
  'greetings' => 'Üdvözlet', //cpg1.4
  'message' => 'Üzenet', //cpg1.4
  'ecards_footer' => 'Küldte: %s erről az %s IP címről %s -kor (képgaléria ideje)', //cpg1.4
  'preview' => 'Képeslap megtekintése', //cpg1.4
  'preview_button' => 'Megtekintés', //cpg1.4
  'submit_button' => 'Képeslap küldése', //cpg1.4
  'preview_view_ecard' => 'Ez egy alternatív link a képeslaphoz, ami egyszer lett legenerálva. A megtekintéshez nem fog működni.', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File report_file.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('REPORT_FILE_PHP') || defined('DISPLAYREPORT_PHP')) $lang_report_php =array(
  'title' => 'Jelentés a rendszergazdának', //cpg1.4
  'invalid_email' => '<b>Figyelem</b>: hibás email cím!', //cpg1.4
  'report_subject' => 'Jelentés %s -tól ezen %s Képtárról', //cpg1.4
  'view_report' => 'Alternativ link, ha nem jelenik meg helyesen a képernyőn', //cpg1.4
  'view_report_plaintext' => 'Hogy megtekintsd ezt a jelentést, másold ki és illesztd be ezt az URL-t a böngésződ címsorába:', //cpg1.4
  'view_more_pics' => 'Képtár', //cpg1.4
  'send_success' => 'A jelentés elküldve', //cpg1.4
  'send_failed' => 'Sajnáljuk, de szerver nem tudta kézbesíteni a jelentésed...', //cpg1.4
  'from' => 'Feladó', //cpg1.4
  'your_name' => 'Saját neved', //cpg1.4
  'your_email' => 'Saját email címed', //cpg1.4
  'to' => 'Cimzett', //cpg1.4
  'administrator' => 'Renszergazda/moderátor', //cpg1.4
  'subject' => 'Tárgy', //cpg1.4
  'comment_field_name' => 'Jelentés a hozzászólásról "%s"-tól', //cpg1.4
  'reason' => 'Indíték', //cpg1.4
  'message' => 'Üzenet', //cpg1.4
  'report_footer' => 'Küldte: %s erről az %s IP címről %s -kor (képgaléria ideje)', //cpg1.4
  'obscene' => 'trágár ', //cpg1.4
  'offensive' => 'erőszakos', //cpg1.4
  'misplaced' => 'Lezárt téma/eltévesztett', //cpg1.4
  'missing' => 'hiányzó', //cpg1.4
  'issue' => 'hiba/nem lehet megnézni', //cpg1.4
  'other' => 'másik', //cpg1.4
  'refers_to' => 'Kép jelentése', //cpg1.4
  'reasons_list_heading' => 'A jelntés oka:', //cpg1.4
  'no_reason_given' => 'Nincs ok megadva', //cpg1.4
  'go_comment' => 'Ugrás a hozzászóláshoz', //cpg1.4
  'view_comment' => 'Teljes jelentés hozzászólásokkal', //cpg1.4
  'type_file' => 'Fájl', //cpg1.4
  'type_comment' => 'Hozzászólás', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
  'pic_info' => 'Kép információ',
  'album' => 'Képalbum',
  'title' => 'Cím',
  'filename' => 'Fájlnév', //cpg1.4
  'desc' => 'Meghatározás',
  'keywords' => 'Kulcsszavak',
  'new_keyword' => 'Új kulcsszó', //cpg1.4
  'new_keywords' => 'Új kulcsszavak keresése', //cpg1.4
  'existing_keyword' => 'Létező kulcsszó', //cpg1.4
  'pic_info_str' => '%sx%s - %s kB - %s x megtekintés - %s x szavazat',
  'approve' => 'Kép jóváhagyása',
  'postpone_app' => 'Elhalasztott jóváhagyás',
  'del_pic' => 'Kép törlése',
  'del_all' => 'Összes kép törlése', //cpg1.4
  'read_exif' => 'EXIF adatok újraolvasása',
  'reset_view_count' => 'Nézettségi számláló nullázása',
  'reset_all_view_count' => 'Az összes nézettségi számláló nullázása', //cpg1.4
  'reset_votes' => 'Szavazatok nullázása',
  'reset_all_votes' => 'Összes szavazatok nullázása', //cpg1.4
  'del_comm' => 'Hozzászólás törlése',
  'del_all_comm' => 'Összes hozzászólás törlése', //cpg1.4
  'upl_approval' => 'Feltöltés jóváhagyása', //cpg1.4
  'edit_pics' => 'Kép szerkesztése',
  'see_next' => 'A következő kép',
  'see_prev' => 'Az előző kép',
  'n_pic' => '%s Kép',
  'n_of_pic_to_disp' => 'Kép oldalanként',
  'apply' => 'Módosítások elfogadása',
  'crop_title' => 'Coppermine képszerkesztő',
  'preview' => 'Megtekintés',
  'save' => 'Kép mentése',
  'save_thumb' =>'Mentés indexképként',
  'gallery_icon' => 'Legyen ez a képtáram ikonja', //cpg1.4
  'sel_on_img' =>'A teljes kép kiválasztása', //js-alert
  'album_properties' =>'Album tulajdonságok', //cpg1.4
  'parent_category' =>'Szülő kategória', //cpg1.4
  'thumbnail_view' =>'Indexkép nézet', //cpg1.4
  'select_unselect' =>'Összes kiválasztása', //cpg1.4
  'file_exists' => "A célfájl '%s' már létezik.", //cpg1.4
  'rename_failed' => "Az átnevezés'%s'-ről '%s'-re nem sikerült.", //cpg1.4
  'src_file_missing' => "A forrásfájl '%s' hiányzik.", // cpg 1.4
  'mime_conv' => "Nem lehet átkonvertálni '%s'-ről '%s'-re",//cpg1.4
  'forb_ext' => 'Tiltott fájlkiterjesztés.',//cpg1.4
);

// ------------------------------------------------------------------------- //
// File faq.php
// ------------------------------------------------------------------------- //

if (defined('FAQ_PHP')) $lang_faq_php = array(
  'faq' => 'Gyakran Ismételt Kérdések (Frequently Asked Questions)',
  'toc' => 'Tárgymutató',
  'question' => 'Kérdés: ',
  'answer' => 'Válasz: ',
);

if (defined('FAQ_PHP')) $lang_faq_data = array(
  'Általános',
  array('Miért szükséges regisztrálni?', 'A regisztráció szükségességét a rendszergazda dönti el. A regisztrált tagok plusz funkciókat érnek el, mint pl.: képfeltöltés, kedvencek listája, kép értékelés, hozzászólások stb. ', 'allow_user_registration', '0'),
  array('Hogy tudok regisztrálni?', 'Kattints a &quot;Registráció&quot;-ra és töltsd ki a szükséges mezőket (az opcionális mezők kitöltése nem kötelező).<br />Ha a rendszergazda engedélyezte az email aktiválást, akkor az adatok elfogadása után kapsz egy email üzenetet arra a címre , amelyet a regisztrációkor megadtál. A levél részletes utasításokat tartalmaz a regisztráció aktíválásának lépéseiről. Hogy be tudj jelentkezni, szükséges aktivált tagság.', 'allow_user_registration', '1'),
  array('Hogy tudok bejelentkezni?', 'Kattints a &quot;Bejelentkezés&quot;-re, és add meg felhasználó neved és jelszavad, és jelöld be az &quot;Emlékezz rám&quot;opciót, hogy a képtár emlékezzen rád .<br /><b>Fontos: Hogy müködjön el kell fogadnos a sütiket erről az oldalról a böngésződben.</b>', 'offline', 0),
  array('Miért nem tudok bejelentkezni?', 'Regisztráltál? Előfordulhat, hogy a képtár látogatása regisztrációhoz kötött. Ki lettél tiltva a képtárból (ezt egy üzenet jelzi)? Lépj kapcsolatba a webmesterrel, vagy az adminisztrátorral, hogy megtudd az okát. Ha regisztrált vagy, és nem vagy kitiltva az oldalról, akkor ellenőrizd, hogy nem gépelted-e el a nevet, vagy a jelszót. Ellenőrizd kétszer is, mivel legtöbbször ez a hiba. Ha a hiba még mindig fennáll, akkor lépj kapcsolatba az adminisztrátorral, pontosan leírva a hibajelenséget.', 'offline', 0),
  array('Mit tegyek, ha elfelejtettem a jelszavam?', ' Ha van &quot;Elfejetettem a jelszót&quot; link, akkor használd. Más esetekben keresd meg a rendszergazdát', 'offline', 0),
  //array('Mit tegyek ha meg akarom változtatni az Email címemet?', 'Egyszerüen jelentkezz be és menj a &quot; saját profil&quot;-ra', 'offline', 0),
  array('Hogy vehetem fel a képet a &quot;Kedvenceim&quot; közé?', 'Kattints a képre , majd kattints a &quot;kép információ&quot;-ra (<img src="images/info.gif" width="16" height="16" border="0" alt="Kép-információ" />); menj az adatok aljára és kattints a &quot;Kedvencek hozzáadása&quot;-ra.<br />A rendszergazda engedélyezheti alapból a képinformációkat.<br />Fontos: A sütiket engedélyezned kell.', 'offline', 0),
  array('Hogy tudom értékelni a képet?', 'Kattints az indexképre és a kép alján válassz egy helyezést.', 'offline', 0),
  array('Hogy tudok hozzászolni a képhez?', 'Kattints az indexképre és menj az aljára, ahol be tudod írni a hozzászólásod.', 'offline', 0),
  array('Hogy lehet képet feltölteni?', 'Kattints a &quot;Kép feltöltés&quot;-re és válassz albumot, hogy hova akarsz feltölteni.Kattints a &quot;Böngészés&quot;-re keresd meg a fájlt amit fel akarsz tölteni és kattints a &quot;megnyitás&quot; -ra. Adj neki címet és meghatározást ha akarsz, majd kattints az &quot;Elfogad&quot;-ra', 'allow_private_albums', 0),
  array('Hova tudok képet feltölteni?', 'A saját albumaid közül bármelyikbe, amelyek a &quot;Saját képtár&quot;-adban találhatóak ', 'allow_private_albums', 0),
  array('Milyen formátumú és méretű képet lehet feltölteni?', 'A formátumot (jpg,png stb..) és a méretet a rendszergazda határozza meg.', 'allow_private_albums', 0),
  array('Mi az a  &quot;Saját képtár &quot;?', 'A &quot;Saját képtár&quot; az hely ahova el tudod helyezni az albumaidat.', 'allow_private_albums', 0),
  array('Hogyan tudok létrehozni, átnevezni és törölni albumot a &quot;saját Képtár&quot;-ban?', 'Ehhez rendszergazda módban kell lenni.Menj a &quot; Saját album létrehozás/rendezés&quot;menübe és kattints az &quot;új&quot;-ra. Írd át az &quot;Új album&quot;nevet amire szeretnéd nevezni az albumodat .<br />Itt bármelyik létező albumod nevét meg tudod változtatni .<br />Kattints a &quot;Változtatások elfogadás&quot;-ára .', 'allow_private_albums', 0),
  array('Hogy tudom módosítani az albumom tulajdonságait?', 'Ehhez rendszergazda módban kell lenni.<br />Meny a &quot; Saját album módosítása&quot; menübe. Az &quot;album frissítése&quot; listában válaszd ki a módosítani kivánt albumot.<br />Itt tudsz nevet, leírást, indexképet, megtekintés korlátozást és véleményezés korlátozást változtatni.<br />A végén kattints az  &quot;Album frissítés&quot; -re.', 'allow_private_albums', 0),
  array('Mik azok a sütik?', 'A sütik kisméretü text fájlok , melyet a webszerver küld a számítógépednek. A sütik segítségével jegyzi meg a böngésző a felhasználó beálításait.<br /> ', 'offline', 0),
  array('Hogyan használhatnám ezt a programot a saját weboldalomon?', 'A Coppermine egy szabadon felhasználható multimédiás képtár,mely a GNU alatt ljelent meg. Az összes szolgáltatása elérhető különböző platformokon. Láttogasd meg a  <a href="http://coppermine.sf.net/">Coppermine weboldalát</a> további információkért és a program letöltéséhez .', 'offline', 0),

  'Navigálás az oldalon',
  array('Mi az &quot;Album lista&quot;?', 'Itt tudod megnézni az egész képtárat, minden albumhoz tartozik link. Ha nem vagy benne valamelyik képtárban akkor a képtárak listáját látod.', 'offline', 0),
  array('Mi a  &quot;Saját képtár;?', 'Itt tud a felhasználó létrehozni saját albumot, törölni vagy módosítani már meglévőket.', 'allow_private_albums', 1), //cpg1.4
  array('Mi a különbség az &quot;Rendszergazda mód&quot; és &quot;Felhasználó mód&quot; között?', 'Rendszergazda módban lehet módosítani a saját albumokon, képtárakon', 'allow_private_albums', 0),
  array('Mi a &quot;Kép feltöltés&quot;?', 'Itt lehet képeket feltölteni a képtárba (méret és formátum a rendszergazda által meghatározva)', 'allow_private_albums', 0),
  array('Mi a &quot;Legújabb feltöltések&quot;?', 'Itt lehet megnézni az utolsó feltöltéseket.', 'offline', 0),
  array('Mi a &quot;Legújabb hozzászólások&quot;?', 'itt lehet megnézni a legújabb hozászólásokat, amelyeket a felhasználók beküldtek .', 'offline', 0),
  array('Mi a &quot;Legtöbbet nézet&quot;?', 'Itt lehet megtekinteni a legtöbbször nézett képet az összes kép közül.', 'offline', 0),
  array('Mi a &quot;Legtöbb szavazatot&quot;?', 'Ez a szolgáltatás mutatja a felhasználók által legjobban kedvelt képeket, megjelenítve az átlagos osztályzatot (pl. 5 néző ad  <img src="images/rating3.gif" width="65" height="14" border="0" alt="" />:-ot, akkor a kép átlagos osztályzata <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> ;Ha 5 néző osztályozza a képet  1-től 5-ig (1,2,3,4,5), akkor az átlag: <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> .)<br />A helyezés skála  <img src="images/rating5.gif" width="65" height="14" border="0" alt="" /> (legjobb)-tól a <img src="images/rating0.gif" width="65" height="14" border="0" alt="" /> (legrosszabb) -ig terjed.', 'offline', 0),
  array('Mi a &quot;Kedvenceim&quot;?', 'Ez a szolgáltatás tárolja a felhasználó kedvenc képeit, melyet a sütiben el is küld a felhasználó számítógépére.', 'offline', 0),
);


// ------------------------------------------------------------------------- //
// File forgot_passwd.php
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) $lang_forgot_passwd_php = array(
  'forgot_passwd' => 'Jelszó emlékeztető',
  'err_already_logged_in' => 'Már be vagy jelentkezve!',
  'enter_email' => 'Add meg az email címedet', //cpg1.4
  'submit' => 'Tovább!',
  'illegal_session' => 'Az elfelejtett jelszó időszak érvénytelen vagy lejárt.', //cpg1.4
  'failed_sending_email' => 'Nem lehet elküldeni a jelszó emlékeztető email-t!',
  'email_sent' => 'A felhasználó nevet és jelszót tartalmazó levelet elküldtük a(z) %s címre.', //cpg1.4
  'verify_email_sent' => 'Az email elküldve %s címre. Kérjük, ellenőrizd a postaládádat a folyamat befejezéséhez.', //cpg1.4
  'err_unk_user' => 'Nemlétező felhasználó!',
  'account_verify_subject' => '%s - Új jelszót kér', //cpg1.4
  'account_verify_body' => 'Új jelszót kértél. Ha azt akarod , hogy az új jelszót elküldjük, kattints a következő linkre:

%s', //cpg1.4
  'passwd_reset_subject' => '%s - Az új jelszavad', //cpg1.4
  'passwd_reset_body' => 'A kért új jelszó:
Felhasználónév: %s
Jelszó: %s
Kattints %s-ra, a bejelentkezéshez.', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
  'group_name' => 'Csoport neve', //cpg1.4
  'permissions' => 'Jogosultságok', //cpg1.4
  'public_albums' => 'Nyilvános feltöltési album', //cpg1.4
  'personal_gallery' => 'Személyes képtár', //cpg1.4
  'upload_method' => 'Feltöltési módszerek', //cpg1.4
  'disk_quota' => 'Lemezterület', //cpg1.4
  'rating' => 'Osztályozás', //cpg1.4
  'ecards' => 'Képeslapok', //cpg1.4
  'comments' => 'Hozzászólások', //cpg1.4
  'allowed' => 'Engedélyezett', //cpg1.4
  'approval' => 'Elfogadott', //cpg1.4
  'boxes_number' => 'Dobozok száma', //cpg1.4
  'variable' => 'Változó', //cpg1.4
  'fixed' => 'Állandó', //cpg1.4
  'apply' => 'Módosítások elfogadása',
  'create_new_group' => 'Új csoport létrehozása',
  'del_groups' => 'Csoport(ok) törlése',
  'confirm_del' => 'Figyelem: amikor egy csoport törlésre kerül, akkor a csoportba tartozó felhasználók át lesznek mozgatva a  \'Regisztrált felhasználók\' csoportba!\n\nBiztos, hogy ezt akarod?', //js-alert
  'title' => 'Felhasználói csoportok kezelése',
  'num_file_upload' => 'Kép feltöltő doboz', //cpg1.4
  'num_URI_upload' => 'URI feltöltő doboz', //cpg1.4
  'reset_to_default' => 'Alapértelmezett névre állítás (%s) - ajánlott!', //cpg1.4
  'error_group_empty' => 'A csoport tábla üres!<br /><br />Az alap csoportok elkészítve, töltsd újra az oldalt', //cpg1.4
  'explain_greyed_out_title' => 'Miért szürke ez a sor?', //cpg1.4
  'explain_guests_greyed_out_text' => 'Nem tudod változtatni ezt a tulajdonságot, mert kikapcsoltad a  &quot;Vendég felhasználók engedélyezése&quot; opciót a Coppermine konfigurációs oldalán. A vendégek (a %s csoport tagjai) semmit sem tudnak csinálni a bejelentkezésen kivűl, tehát a csoportbeállítások nem érvényesek rájuk.', //cpg1.4
  'explain_banned_greyed_out_text' => 'Die Eigenschaften der Gruppe %s können nicht verändert werden, da deren Mitglieder sowieso nichts tun dürfen.', //cpg1.4
  'group_assigned_album' => 'Hozzárendelt album', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
  'welcome' => 'Üdvözlet !',
);

$lang_album_admin_menu = array(
  'confirm_delete' => 'Biztos, hogy TÖRÖLNI akarod ezt az albumot? \\n Az összes kép és hozzászólás törölve lesz.',
  'delete' => 'Törlés',
  'modify' => 'Módosítás',
  'edit_pics' => 'Kép szerkesztés',
);

$lang_list_categories = array(
  'home' => 'Képtár',
  'stat1' => '<b>[pictures]</b> kép <b>[albums]</b> albumban és <b>[cat]</b> kategoriában, <b>[comments]</b> hozzászólással, <b>[views]</b> alkalommal megtekintve',
  'stat2' => '<b>[pictures]</b> kép <b>[albums]</b> albumban, <b>[views]</b> alkalommal megtekintve',
  'xx_s_gallery' => '%s képtára',
  'stat3' => '<b>[pictures]</b> kép <b>[albums]</b> albumban, <b>[comments]</b> hozzászólással, <b>[views]</b> alkalommal megtekintve'
);

$lang_list_users = array(
  'user_list' => 'Felhasználó lista',
  'no_user_gal' => 'Nincs felhasználó a képtárban.',
  'n_albums' => '%s album',
  'n_pics' => '%s kép',
);

$lang_list_albums = array(
  'n_pictures' => '%s kép',
  'last_added' => ', utoljára ez lett hozzáadva %s',
  'n_link_pictures' => '%s kapcsolt kép', //cpg1.4
  'total_pictures' => '%s kép összesen', //cpg1.4
);

}

// ------------------------------------------------------------------------- //
// File keywordmgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('KEYWORDMGR_PHP')) $lang_keywordmgr_php = array(
  'title' => 'Kulcsszavak kezelése', //cpg1.4
  'edit' => 'szerkesztés', //cpg1.4
  'delete' => 'törlés', //cpg1.4
  'search' => 'keresés', //cpg1.4
  'keyword_test_search' => 'a(z) %s keresése új ablakban', //cpg1.4
  'keyword_del' => 'a(z) %s kulcsszó törlése', //cpg1.4
  'confirm_delete' => 'Biztos, hogy törölni akarod a(z) %s kulcszót a képtárból?', //cpg1.4  // js-alert
  'change_keyword' => 'Kulcsszó változtatása', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
  'login' => 'Bejelentkezés (Login)',
  'enter_login_pswd' => 'Add meg a felhasználóneved és jelszavad a bejelentkezéshez',
  'username' => 'Felhasználó név',
  'password' => 'Jelszó',
  'remember_me' => 'Emlékezz rám',
  'welcome' => 'Üdvözöllek %s ...',
  'err_login' => '*** Nem sikerült bejelentkezned. Próbáld újra ***',
  'err_already_logged_in' => 'Már be vagy jelentkezve!',
  'forgot_password_link' => 'Elfelejtettem a jelszavam',
  'cookie_warning' => 'Figyelmeztetés: a böngésződ nem fogadja el a sütiket', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
  'logout' => 'Kijelentkezés',
  'bye' => 'Viszlát %s ...',
  'err_not_loged_in' => 'Nem vagy bejelentkezve!',
);

// ------------------------------------------------------------------------- //
// File minibrowser.php  //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('MINIBROWSER_PHP')) $lang_minibrowser_php = array(
  'close' => 'bezárás', //cpg1.4
  'submit' => 'OK', //cpg1.4
  'up' => 'egy szinttel feljebb', //cpg1.4
  'current_path' => 'mostani útvonal', //cpg1.4
  'select_directory' => 'válassz könyvtárat', //cpg1.4
  'click_to_close' => 'Kattints a képre az ablak bezárásához',
);

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
  'upd_alb_n' => 'A(z)%s album frissítve',
  'general_settings' => 'Általános beállítások',
  'alb_title' => 'Album címe',
  'alb_cat' => 'Album kategória',
  'alb_desc' => 'Album meghatározás',
  'alb_keyword' => 'Album kulcsszó', //cpg1.4
  'alb_thumb' => 'Album indexkép',
  'alb_perm' => 'Jogosultságok erre az albumra',
  'can_view' => 'Album megtekinthetik',
  'can_upload' => 'Vendégek is feltölthetnek képeket',
  'can_post_comments' => 'Vendégek is hozzászolhatnak',
  'can_rate' => 'Vendégek is osztályozhatnak',
  'user_gal' => 'Felhasználói képtár',
  'no_cat' => '* nincs kategória *',
  'alb_empty' => 'Üres album',
  'last_uploaded' => 'utoljára feltöltött',
  'public_alb' => 'Mindenki (nyilvános album)',
  'me_only' => 'Csak én',
  'owner_only' => 'Csak az album tulajdonos (%s)',
  'groupp_only' => 'A(z) \'%s\'csoport tagjai',
  'err_no_alb_to_modify' => 'Nincs modósítható album az adatbázisban.',
  'update' => 'Album frissítve',
  'reset_album' => 'Album visszaállítása', //cpg1.4
  'reset_views' => 'Megtekintési számláló visszaállítása &quot;0&quot; -ra %s -ban', //cpg1.4
  'reset_rating' => 'Az összes kép helyezésének alaphelyzetbe állítása a(z) %s albumban', //cpg1.4
  'delete_comments' => 'Összes hozzászólás törlése a(z) %s albumban', //cpg1.4
  'delete_files' => 'Az összes kép törlése %sVisszavonhatatlanul%s a(z) %s albumban', //cpg1.4
  'views' => 'Megtekintések', //cpg1.4
  'votes' => 'Szavazatok', //cpg1.4
  'comments' => 'Hozzászólások', //cpg1.4
  'files' => 'Képek', //cpg1.4
  'submit_reset' => 'változások elfogadása', //cpg1.4
  'reset_views_confirm' => 'Biztos vagyok benne!', //cpg1.4
  'notice1' => '(*) függ a  %sCsoport%s beállításoktól',  //cpg1.4 //(do not translate %s!)
  'alb_password' => 'Az album jelszava', //cpg1.4
  'alb_password_hint' => 'Tipp album jelszóra', //cpg1.4
  'edit_files' =>'Képek szerkesztése', //cpg1.4
  'parent_category' =>'Szülő kategória', //cpg1.4
  'thumbnail_view' =>'Indexkép nézet', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File phpinfo.php
// ------------------------------------------------------------------------- //

if (defined('PHPINFO_PHP')) $lang_phpinfo_php = array(
  'php_info' => 'PHP információ',
  'explanation' => 'Ez a kimenet a PHP-Funkció által lett generálva <a href="http://www.php.net/phpinfo">phpinfo()</a> A Coppermine-on belül megjelenítve.',
  'no_link' => 'A phpinfo mások általi megtekintése biztonsági kockázatot jelent, ezért lehet csak rendszergazdaként megtekinteni.',
);

// ------------------------------------------------------------------------- //
// File picmgr.php //cpg1.4
// ------------------------------------------------------------------------- //
if (defined('PICMGR_PHP')) $lang_picmgr_php = array(
  'pic_mgr' => 'Képkezelő', //cpg1.4
  'select_album' => 'Válassz albumot', //cpg1.4
  'delete' => 'Törlés', //cpg1.4
  'confirm_delete1' => 'Biztos hogy törölni akarod?', //cpg1.4
  'confirm_delete2' => '\nA kép törlése folyamatban.', //cpg1.4
  'apply_modifs' => 'Módosítások alkalmazása', //cpg1.4
  'confirm_modifs' => 'Módosítások megerősítése', //cpg1.4
  'pic_need_name' => 'A képnek kötelező nevet adni', //cpg1.4
  'no_change' => 'Nem tudsz változtatni semmit!', //cpg1.4
  'no_album' => '* Nincs album *', //cpg1.4
  'explanation_header' => 'Az itt beállított egyéni sorrend csak erre a felhasználóra érvényes', //cpg1.4
  'explanation1' => 'A rendszergazda be tudja állítani az alapértelmezett sorrendet növekvőre vagy csökkenőre (ez mindenkire vonatkozik, akinek nincs joga egyéni beállításhoz)', //cpg1.4
  'explanation2' => 'A felhasználó választhat a növekvő vagy csökkenő sorrend között, az indexkép nézetben', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File pluginmgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('PLUGINMGR_PHP')){

$lang_pluginmgr_php = array(
  'confirm_uninstall' => 'Biztos, hogy el akarod távolítani ezt a beépülőt (plugin)?', //cpg1.4
  'confirm_delete' => 'Biztos, hogy törölni akarod a beépülőt?', //cpg1.4
  'pmgr' => 'Beépülő kezelő', //cpg1.4
  'name' => 'Név', //cpg1.4
  'author' => 'Szerző', //cpg1.4
  'desc' => 'leírás', //cpg1.4
  'vers' => 'v', //cpg1.4
  'i_plugins' => 'Telepített beépülők', //cpg1.4
  'n_plugins' => 'Nincs telepítve beépülő', //cpg1.4
  'none_installed' => 'Nincs telepítve semmi', //cpg1.4
  'operation' => 'Művelet', //cpg1.4
  'not_plugin_package' => 'A feltöltött fájl nem beépülő csomag.', //cpg1.4
  'copy_error' => 'Hiba történt a csomag a beépülő könyvtárba másolásakor.', //cpg1.4
  'upload' => 'Feltöltés', //cpg1.4
  'configure_plugin' => 'Beépülő konfigurálása', //cpg1.4
  'cleanup_plugin' => 'Beépülő takarítása', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
  'already_rated' => 'Bocsi, már osztályoztad a képet',
  'rate_ok' => 'Szavazatod elfogadva',
  'forbidden' => 'A saját képedet nem osztályozhatod.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
 Noha a(z) {SITE_NAME} adminisztrátorai mindent megtesznek, hogy minél hamarabb eltávolítsák vagy töröljék a képtárból az általánosan kifogásolható anyagokat, lehetetlen, hogy minden egyes hozzászólást és képet átnézzenek. Ebből adódóan elfogadom, hogy a képtárban található összes hozzászólás és kép a szerző nézeteit tükrözi, és nem az adminisztrátorok, vagy a webmester álláspontját - így ők nem vállalnak felelősséget a hozzászólások és képek tartalmáért.<br />
<br />
Beleegyezek, hogy nem küldök sértegető, obszcén, vulgáris, rágalmazó, gyűlöletkeltő, támadó anyagot vagy bármely más olyan tartalmat, mely törvényt sért. Sem olyan anyagot, mely ellentétes az általános közízléssel, mivel ez egy nyilvános képtár. A fentiek megsértése azonnali és végleges törlést von maga után.
Elfogadom, hogy a képtár webmesterének, az adminisztrátornak  jogában áll eltávolítani, szerkeszteni a hozzászólásaimat, vagy törölni az általam felrakott képeket, amennyiben úgy ítéli meg, hogy ez szükséges. Mint felhasználó, elfogadom, hogy néhány, általam megadott információ tárolásra kerül a képtár adatbázisában. Ezek az adatok semmilyen módon nem kerülnek ki egy harmadik félhez, de az adminisztrátorok sem tudnak felelősséget vállalni, amennyiben az adatokat harmadik fél törvénytelen eszközökkel szerzi meg (például a képtár feltörésével).<br />
<br />
A Képtár "cookie"-kat (sütiket) használ, hogy adatokat tároljon a felhasználó számítógépén, de egyik sem tartalmaz személyes adatokat, melyek a regisztrációnál kerültek megadásra: a sütik pusztán technikai szempontból szükségesek (például ezek segítségével jegyzi meg a böngésző az egyéni beállításokat). A megadott email cím csak a regisztráció (és új jelszó) érvényesítésénél kerül felhasználásra.
<br />
<br />
Az 'Elfogadom'-ra kattintva elfogadom a fenti feltételeket.
EOT;

$lang_register_php = array(
  'page_title' => 'Felhasználó regisztráció',
  'term_cond' => 'Felhasználói szabályzat',
  'i_agree' => 'Elfogadom',
  'submit' => 'Regisztráció elfogadása',
  'err_user_exists' => 'A megadott felhasználónév már létezik, válassz egy másikat!',
  'err_password_mismatch' => 'A két jelszó nem egyezik, írd be újra',
  'err_uname_short' => 'A felhasználó név legalább 2 karakter hosszú legyen',
  'err_password_short' => 'A jelszó legalább 2 karakter hosszú legyen',
  'err_uname_pass_diff' => 'A felhasználónév és a jelszó nem lehet azonos',
  'err_invalid_email' => 'Nem érvényes email cím',
  'err_duplicate_email' => 'A megadott email címmel már valaki regisztrálta magát',
  'enter_info' => 'Add meg a regisztrációs adatokat',
  'required_info' => 'Kötelező',
  'optional_info' => 'Válaszható',
  'username' => 'Felhasználónév',
  'password' => 'Jelszó',
  'password_again' => 'Jelszó újra',
  'email' => 'Email cím',
  'location' => 'Helység',
  'interests' => 'Hobbi',
  'website' => 'Honlap',
  'occupation' => 'Foglalkozás',
  'error' => 'HIBA',
  'confirm_email_subject' => '%s - Regisztráció megerősítés',
  'information' => 'Információ',
  'failed_sending_email' => 'A regisztráció megerősítéséhez szükséges levél nem lett elküldve',
  'thank_you' => 'Köszönjük a regisztrációt.<br /><br />Az emailt a felhasználói azonosító aktíválásának ismertetésével elküldtük a megadott címre.',
  'acct_created' => 'Az azonosító elkészült, bejelentkezés a felhasználó névvel és jelszóval',
  'acct_active' => 'Az azonosító aktiválva, bejelentkezés a felhasználó névvel és jelszóval',
  'acct_already_act' => 'Az azonosító már aktív!', //cpg1.4
  'acct_act_failed' => 'Az azonosító aktíválása nem lehetséges!',
  'err_unk_user' => 'Nem létező felhasználó!',
  'x_s_profile' => '%s felhasználói adatai',
  'group' => 'Csoport',
  'reg_date' => 'Regisztrálás ideje',
  'disk_usage' => 'Lemez használat',
  'change_pass' => 'Jelszó változtatás',
  'current_pass' => 'Jelenlegi jelszó',
  'new_pass' => 'Új jelszó',
  'new_pass_again' => 'Új jelszó mégegyszer',
  'err_curr_pass' => 'A jelenlegi jelszó hibás',
  'apply_modif' => 'Módosítások jóváhagyása',
  'change_pass' => 'Jelszó változtatás',
  'update_success' => 'A felhasználói adatok frissítve',
  'pass_chg_success' => 'A jelszavad megváltoztatva',
  'pass_chg_error' => 'A jelszavad nem változott',
  'notify_admin_email_subject' => '%s - Regisztrációs értesítő',
  'last_uploads' => 'Utoljára feltöltött fájl.<br />Kattints ide az összes feltöltésének megtekintéséhez', //cpg1.4
  'last_comments' => 'Utolsó hozzászólás.<br />Kattints ide az öszzes hozzászólás megtekintéséhez', //cpg1.4
  'notify_admin_email_body' => 'Egy új felhasználó "%s" néven regisztrálta magát a képtáradba',
  'pic_count' => 'Feltöltött képek', //cpg1.4
  'notify_admin_request_email_subject' => '%s - Regisztrációs kérés', //cpg1.4
  'thank_you_admin_activation' => 'Köszönjük.<br /><br />Az azonosító aktíválási kérelem elküldve a rendszergazdának. Email-ben értesítünk az elfogadásról.', //cpg1.4
  'acct_active_admin_activation' => 'Az azonosító aktív, email elküldve a felhasználónak.', //cpg1.4
  'notify_user_email_subject' => '%s - Aktíválási értesitő', //cpg1.4
);

$lang_register_confirm_email = <<<EOT
Köszönjük, hogy regisztrált a {SITE_NAME}-ra

Az Ön felhasználóneve : "{USER_NAME}"
Az Ön jelszava : "{PASSWORD}"

Az azonosító aktíválásához kattintson az alábbi linkre, vagy másolja a böngésző címsorába.
<a href="{ACT_LINK}">{ACT_LINK}</a>

Üdvözlettel:

A {SITE_NAME} csapata.

EOT;

$lang_register_approve_email = <<<EOT
A(z) "{USER_NAME}" nevű felhasználó regisztrálta magát a képtárban.

Az azonosító aktíválásához kattintson az alábbi linkre, vagy másolja a böngésző címsorába.

<a href="{ACT_LINK}">{ACT_LINK}</a>

EOT;

$lang_register_activated_email = <<<EOT
A kért azonosítót elfogadtuk és aktíváltuk.

A bejelentkezéshez a(z) <a href="{SITE_LINK}">{SITE_LINK}</a> oldalon használd a(z) "{USER_NAME}" felhasználónevet.


Üdvözlettel,

A(z) {SITE_NAME} csapata

EOT;
}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
  'title' => 'Hozzászólások megtekintése',
  'no_comment' => 'Nincs megtekinthető hozzászólás',
  'n_comm_del' => '%s db hozzászólás törölve',
  'n_comm_disp' => 'A megjelenített hozzászólások száma',
  'see_prev' => 'elöző',
  'see_next' => 'következő',
  'del_comm' => 'Kiválasztott hozzászólások törlése',
  'user_name' => 'Név', //cpg1.4
  'date' => 'Dátum', //cpg1.4
  'comment' => 'Hozzászólás', //cpg1.4
  'file' => 'Fájl', //cpg1.4
  'name_a' => 'név szerint növekvő', //cpg1.4
  'name_d' => 'név szerint csökkenő', //cpg1.4
  'date_a' => 'Dátum szerint növekvő', //cpg1.4
  'date_d' => 'Dátum szerint csökkenő', //cpg1.4
  'comment_a' => 'Hozzászólás szerint növekvő', //cpg1.4
  'comment_d' => 'Hozzászólás szerint csökkenő', //cpg1.4
  'file_a' => 'Fájl szerint növekvő', //cpg1.4
  'file_d' => 'Fájl szerint csökkenő', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File search.php                                                           //
// ------------------------------------------------------------------------- //


if (defined('SEARCH_PHP')){

$lang_search_php = array(
  'title' => 'Képgyüjtemény keresés', //cpg1.4
  'submit_search' => 'keresés', //cpg1.4
  'keyword_list_title' => 'Kulcsszavak listája', //cpg1.4
  'keyword_msg' => 'A fenti lista nem tartalmaz mindent - nincsenek benne a képek címeinek és leírásainak szavai. Próbáld meg a keresést ateljes szövegben.',  //cpg1.4
  'edit_keywords' => 'Kulcsszavak szerkesztése', //cpg1.4
  'search in' => 'Keresés itt:', //cpg1.4
  'ip_address' => 'IP-cím', //cpg1.4
  'fields' => 'Keresési mezők', //cpg1.4
  'age' => 'Kor', //cpg1.4
  'newer_than' => 'újabb mint', //cpg1.4
  'older_than' => 'régebbi mint', //cpg1.4
  'days' => 'Napok', //cpg1.4
  'all_words' => 'Teljes egyezés (és)', //cpg1.4
  'any_words' => 'Részleges egyezés (vagy)', //cpg1.4
);

$lang_adv_opts = array(
  'title' => 'Cím', //cpg1.4
  'caption' => 'Felirat', //cpg1.4
  'keywords' => 'Kulcsszó', //cpg1.4
  'owner_name' => 'Tulajdonos neve', //cpg1.4
  'filename' => 'Fájlnév', //cpg1.4
);

}

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
  'page_title' => 'Új képek keresése',
  'select_dir' => 'Válassz könyvtárat',
  'select_dir_msg' => 'Ez a szólgáltatás lehetővé teszi egynél több kép egyidejü feltöltését FTP-n keresztül.<br /><br />Válassz könyvtárat, ahová feltölteni kívánsz.', //cpg1.4
  'no_pic_to_add' => 'Nem lett hozzáadva semmi sem',
  'need_one_album' => 'Legalább 1 albumnak léteznie kell a szolgáltatás használatához',
  'warning' => 'Figyelem',
  'change_perm' => 'A program nem tud írni a könyvtárba. Meg kell változtatnod a jogosultságokat (chmod) 755-ra vagy 777-re, mielőtt fájlokat adnál hozzá!',
  'target_album' => '<b>Tedd a  &quot;</b>%s<b>&quot; képeit </b>%s helyre',
  'folder' => 'Könyvtár',
  'image' => 'Kép',
  'album' => 'Album',
  'result' => 'Eredmény',
  'dir_ro' => 'Nem írható',
  'dir_cant_read' => 'Nem olvasható',
  'insert' => 'Új kép beillesztése a képtárba',
  'list_new_pic' => 'Új képek listája',
  'insert_selected' => 'Kiválasztott képek beillesztése',
  'no_pic_found' => 'Nincs új kép',
  'be_patient' => 'Légy türelemmel, a képek hozzáadása időbe telik',
  'no_album' => 'Nincs album kiválasztva',
  'result_icon' => 'Kattints ide a részletekért',  //cpg1.4
  'notes' =>  '<ul>'.
    '<li><b>OK</b> : jelentése - a kép sikeresen hozzáadva'.
    '<li><b>DP</b> : jelentése - a kép már szerepel az adatbázisban'.
    '<li><b>PB</b> : Jelentése - a képet nem sikerült hozzáadni, ellenőrizd a konfigurációt és a könyvtár jogusultságokat'.
    '<li><b>NA</b> : jelentése - nem lett album kiválasztva, kattints a \'<a href="javascript:history.back(1)">vissza</a>\' -ra és válassz egyet. Ha nincs kiválasztható album, akkor <a href="albmgr.php">hozz létre elöszőr egyet</a>.</li>'.
    '<li>Ha OK, DP, PB \'jelek\' nem jelennek meg, kattints a törött fájlra, hogy megnézhesd a PHP által adott hibaüzenetet'.
    '<li>Ha a böngésződ időtúllépést jelez, kattints az Újratöltés (F5) gombra'.
    '</ul>',
  'select_album' => 'Válassz albumot',
  'check_all' => 'Összes kiválasztása',
  'uncheck_all' => 'Összes kiválasztás törlése',
  'no_folders' => 'Nincs könyvtár létrehozva az "albums" könyvtáron belül. Létre kell hoznod legalább 1 felhasználói könyvtárat az "albums" könyvtár alatt és fájlokat kell feltöltened. Tilos feltöltésre használni a "userpics" vagy az "edit" könyvtárakat, e könyvtárak fenntartva vannak belső használatra.', //cpg1.4
   'albums_no_category' => 'Kategória nélküli albumok', //cpg1.4 // album pulldown mod, added by frogfoot
  'personal_albums' => '* Személyes albumok', //cpg1.4 // album pulldown mod, added by frogfoot
  'browse_batch_add' => 'Böngészhető felület (ajánlott)', //cpg1.4
  'edit_pics' => 'Képek szerkesztése', //cpg1.4
  'edit_properties' => 'Album tulajdonságok', //cpg1.4
  'view_thumbs' => 'Indexkép nézet', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File stat_details.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('STAT_DETAILS_PHP')) $lang_stat_details_php = array(
  'show_hide' => 'Oszlop megjelenítése/elrejtése', //cpg1.4
  'vote' => 'Szavazat részletei', //cpg1.4
  'hits' => 'Találat részletei', //cpg1.4
  'stats' => 'Szavazat statisztika', //cpg1.4
  'sdate' => 'Dátum', //cpg1.4
  'rating' => 'Helyezés', //cpg1.4
  'search_phrase' => 'Kereső kifejezés', //cpg1.4
  'referer' => 'Hivatkozás', //cpg1.4
  'browser' => 'Böngésző', //cpg1.4
  'os' => 'Operációs rendszer', //cpg1.4
  'ip' => 'IP-cím', //cpg1.4
  'sort_by_xxx' => 'Rendezés %s szerint', //cpg1.4
  'ascending' => 'növekvő', //cpg1.4
  'descending' => 'csökkenő', //cpg1.4
  'internal' => 'belső', //cpg1.4
  'close' => 'bezár', //cpg1.4
  'hide_internal_referers' => 'belső hivatkozások elrejtése', //cpg1.4
  'date_display' => 'Dátum formátum', //cpg1.4
  'submit' => 'elfogad/frissít', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File thumbnails.php
// ------------------------------------------------------------------------- //

// Void

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) $lang_upload_php = array(
  'title' => 'Kép feltöltése',
  'custom_title' => 'Egyedi kérdőív',
  'cust_instr_1' => 'Választhatsz egyedi feltölő dobozokat, de nem választhatsz többet az alábbi értékeknél.',
  'cust_instr_2' => 'Kérhető doboz számok',
  'cust_instr_3' => 'Kép feltöltő doboz: %s',
  'cust_instr_4' => 'URI/URL feltöltő doboz: %s',
  'cust_instr_5' => 'URI/URL feltöltő doboz:',
  'cust_instr_6' => 'Kép feltöltő doboz:',
  'cust_instr_7' => 'Töltsd ki adatokkal az itt megadott dobozokat, majd kattints a  \'tovább\'-ra.',
  'reg_instr_1' => 'Érvénytelen művelet az űrlap létrehozásakor.',
  'reg_instr_2' => 'Most feltöltheted a képeid a lenti dobozok használatával. A kép mérete nem lehet nagyobb %s kB-nál. Zip fájlok tömörítve kerülnek feltöltésre.',
  'reg_instr_3' => 'Ha azt akarod, hogy a zip fájlok ki legyenek csomagolva, akkor a megfelelő feltöltő dobozt kell használnod.',
  'reg_instr_4' => 'Ha az URI/URL feltöltő módot használod, akkor add meg a kép útvonalát pl. ilyen formában: \'http://www.sajat.hu/kepek/kepneve.jpg\'',
  'reg_instr_5' => 'Ha végeztél a kitöltéssel, kattints a \'tovább\'-ra.',
  'reg_instr_6' => 'Zip feltöltés:',
  'reg_instr_7' => 'Kép feltöltés:',
  'reg_instr_8' => 'URI/URL feltöltés:',
  'error_report' => 'Hiba jelentés',
  'error_instr' => 'A következő feltöltésekkel volt probléma:',
  'file_name_url' => 'Fájlnév/URL',
  'error_message' => 'Hibaüzenet',
  'no_post' => 'A kép nem lett feltöltve .',
  'forb_ext' => 'Nem megengedett kiterjesztés.',
  'exc_php_ini' => 'A fájlméret túllépte a php.ini-ben megadott értéket.',
  'exc_file_size' => 'A fájlméret túllépte a Coppermine konfigurációban megadottat.',
  'partial_upload' => 'Csak részleges feltöltés.',
  'no_upload' => 'Nem történt feltöltés.',
  'unknown_code' => 'Ismeretlen PHP-Upload hibakód.',
  'no_temp_name' => 'Nincs feltöltés - Nincs ideiglenes név.',
  'no_file_size' => 'Nem tartalamaz adatot/sérült',
  'impossible' => 'Nem lehet mozgatni.',
  'not_image' => 'Nem kép/sérült',
  'not_GD' => 'Nem GD kiterjesztés.',
  'pixel_allowance' => 'Túl nagy képszélesség vagy képmagasság.',
  'incorrect_prefix' => 'Hibás URI/URL előtag',
  'could_not_open_URI' => 'Nem lehet kapcsolodni az URI-hoz.',
  'unsafe_URI' => 'Nem biztonságos cím.',
  'meta_data_failure' => 'Meta adat hiba',
  'http_401' => '401 Nem azonosított felhasználó',
  'http_402' => '402 Fizetés szükséges',
  'http_403' => '403 Tiltott',
  'http_404' => '404 Nem található',
  'http_500' => '500 Belső hiba',
  'http_503' => '503 A szolgáltatás nem elérhető',
  'MIME_extraction_failure' => 'Ismeretlen MIME tartalom.',
  'MIME_type_unknown' => 'Ismeretlen MIME típus',
  'cant_create_write' => 'Nem lehet létrehozni az írásfájlt.',
  'not_writable' => 'Nem lehet írni az írásfájlba.',
  'cant_read_URI' => 'Nem lehet olvasni az  URI/URL-t',
  'cant_open_write_file' => 'Nem lehet megnyitni az URI/URL írásfájlt.',
  'cant_write_write_file' => 'Nem lehet írni az URI írásfájlba.',
  'cant_unzip' => 'Nem lehet kicsomagolni.',
  'unknown' => 'Ismeretlen hiba',
  'succ' => 'Sikeres feltöltés',
  'success' => '%s db feltöltés sikeres.',
  'add' => 'Kattints a  \'tovább\'-ra, a képek albumba helyezéséhez.',
  'failure' => 'Feltöltési hiba',
  'f_info' => 'Fájl információ',
  'no_place' => 'Az elöző fájl nem lett elhelyezve.',
  'yes_place' => 'Az elöző fájl sikeresen elhelyezve.',
  'max_fsize' => 'A megengedett legnagyobb fájlméret: %s kB',
  'album' => 'Album',
  'picture' => 'Kép',
  'pic_title' => 'Kép címe',
  'description' => 'Kép leírása',
  'keywords' => 'Kulcsszavak (veszővel elválasztva)<br /><a href="#" onClick="return MM_openBrWindow(\'keyword_select.php\',\'selectKey\',\'width=250, height=400, scrollbars=yes,toolbar=no,status=yes,resizable=yes\')">beillesztés listából</a>', //cpg1.4
  'keywords_sel' =>'Válassz kulcsszót', //cpg1.4
  'err_no_alb_uploadables' => 'Sajnálom, de nincs egy album se, ahova fel tudnád tölteni a képet',
  'place_instr_1' => 'Kérünk, most helyezd el a képet az albumban.  Minden egyes képnek add meg a lényeges adatait.',
  'place_instr_2' => 'További fájlok elhelyezéséhez kattints a \'folytatás\'-ra!',
  'process_complete' => 'Összes fájl sikeresen elhelyezve.',
  'albums_no_category' => 'Album kategória nélkül', //cpg1.4. //album pulldown mod, added by frogfoot
  'personal_albums' => '* Személyes album', //cpg1.4 //album pulldown mod, added by frogfoot
  'select_album' => 'Válassz albumot', //cpg1.4 //album pulldown mod, added by frogfoot
  'close' => 'bezárás', //cpg1.4
  'no_keywords' => 'Nincs elérhető kulcsszó!', //cpg1.4
  'regenerate_dictionary' => 'Szótár frissítése', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
  'memberlist' => 'Tagok listája', //cpg1.4
  'user_manager' => 'Felhasználó kezelés', //cpg1.4
  'title' => 'Felhasználó kezelő',
  'name_a' => 'Név szerint növekvő',
  'name_d' => 'Név szerint csökkenő',
  'group_a' => 'Csoport szerint növekvő',
  'group_d' => 'Csoport szerint csökkenő',
  'reg_a' => 'Regisztráció ideje szerint növekvő',
  'reg_d' => 'Regisztráció ideje szerint csökkenő',
  'pic_a' => 'Kép szám szerint növekvő',
  'pic_d' => 'Kép szám szerint csökkenő',
  'disku_a' => 'Lemez használat szerint növekvő',
  'disku_d' => 'Lemez használat szerint csökkenő',
  'lv_a' => 'Utolsó bejelentkezés szerint növekvő',
  'lv_d' => 'Utolsó bejelentkezés szerint csökkenő',
  'sort_by' => 'Felhasználók rendezése',
  'err_no_users' => 'A felhasználó-tábla üres!',
  'err_edit_self' => 'Nem tudod szerkeszteni a saját adataidat, használd erre a \'Saját adatok\' menüt!',
  'edit' => 'szerkesztés', //cpg1.4
  'with_selected' => 'kiválasztva:', //cpg1.4
  'delete' => 'törlés', //cpg1.4
  'delete_files_no' => 'tartsd meg a nyilvános képeket (de névtelenítsd)', //cpg1.4
  'delete_files_yes' => 'a nyilvános képek törlése is', //cpg1.4
  'delete_comments_no' => 'tartsd meg a nyilvános hozzászólásokat (de névtelenítsd)', //cpg1.4
  'delete_comments_yes' => 'a nyilvános hozzászólások törlése is', //cpg1.4
  'activate' => 'Bekapcsolva', //cpg1.4
  'deactivate' => 'Kikapcsolva', //cpg1.4
  'reset_password' => 'Jelszó alaphelyzetbe állítása', //cpg1.4
  'change_primary_membergroup' => 'Elsődleges csoport beállítása', //cpg1.4
  'add_secondary_membergroup' => 'Másodlagos csoport beállítása', //cpg1.4
  'name' => 'Felhasználói név',
  'group' => 'Csoport',
  'inactive' => 'Inaktív',
  'operations' => 'Művelet',
  'pictures' => 'Képek',
  'disk_space_used' => 'Használt lemezterület', //cpg1.4
  'disk_space_quota' => 'Lemezkvóta', //cpg1.4
  'registered_on' => 'Regisztráció', //cpg1.4
  'last_visit' => 'Utolsó bejelentkezés',
  'u_user_on_p_pages' => '%d felhasználó %d oldalon',
  'confirm_del' => 'Biztos, hogy törlöd ezt a felhasználót? \\nAz összes fájla is törlődni fog.', //js-alert
  'mail' => 'Levél',
  'err_unknown_user' => 'Nem létező felhasználó!',
  'modify_user' => 'Felhasználó módosítása',
  'notes' => 'Megjegyzések',
  'note_list' => '<li>Ha nem változtatsz jelszót, akkor hagyd a "Jelszó" mezőt üresen.',
  'password' => 'Jelszó',
  'user_active' => 'Aktív felhasználó',
  'user_group' => 'Felhasználó csoportja',
  'user_email' => 'Felhasználó email címe',
  'user_web_site' => 'Felhasználó honlapja',
  'create_new_user' => 'Új felhasználó létrehozása',
  'user_location' => 'Helység',
  'user_interests' => 'Hobbi/érdeklődési kör',
  'user_occupation' => 'Foglalkozás',
  'user_profile1' => '$user_profile1', //cpg1.4
  'user_profile2' => '$user_profile2', //cpg1.4
  'user_profile3' => '$user_profile3', //cpg1.4
  'user_profile4' => '$user_profile4', //cpg1.4
  'user_profile5' => '$user_profile5', //cpg1.4
  'user_profile6' => '$user_profile6', //cpg1.4
  'latest_upload' => 'Legújabb feltöltések',
  'never' => 'Soha',
  'search' => 'Felhasználó keresése', //cpg1.4
  'submit' => 'Elfogad', //cpg1.4
  'search_submit' => 'Tovább!', //cpg1.4
  'search_result' => 'Keresés eredménye: ', //cpg1.4
  'alert_no_selection' => 'Először válassz egy felhasználót!', //cpg1.4 //js-alert
  'password' => 'Jelszó', //cpg1.4
  'select_group' => 'Válassz csoportot!', //cpg1.4
  'groups_alb_access' => 'A csoport album-jogosultságai', //cpg1.4
  'album' => 'Album', //cpg1.4
  'category' => 'Kategória', //cpg1.4
  'modify' => 'Módosítod?', //cpg1.4
  'group_no_access' => 'Ennek a csoportnak nincs speciális hozzáférése', //cpg1.4
  'notice' => 'Értesítés', //cpg1.4
  'group_can_access' => 'Az Album(ok)-hoz , csak "%s" férhet hozzá', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //

if (defined('UTIL_PHP')) {
$lang_util_desc_php = array(
'Címek frissítése fájlból', //cpg1.4
'Címek törlése', //cpg1.4
'Indexképek újragenerálása és a képek átméretezése', //cpg1.4
'Az eredeti képek felülírása az átméretezett képekkel', //cpg1.4
'Az eredeti és köztes képek törlése hely felszabadításhoz', //cpg1.4
'Árva hozzászólások törlése', //cpg1.4
'A fájlméretek újraolvasása (ha kézzel szerkesztettük a képet)', //cpg1.4
'Megtekintési számláló nullázása', //cpg1.4
'phpinfo megjelenítése', //cpg1.4
'Adatbázis frissítése', //cpg1.4
'Naplófájlok megjelenítése', //cpg1.4
);
$lang_util_php = array(
  'title' => 'Rendszergazda eszközök (kép átméretezés)',
  'what_it_does' => 'Mit csinál',
  'file' => 'Kép',
  'problem' => 'Hiba', //cpg1.4
  'status' => 'Státusz', //cpg1.4
  'title_set_to' => 'A cím beállítva erre',
  'submit_form' => 'tovább',
  'updated_succesfully' => 'sikeres frissítés',
  'error_create' => 'Hibás létrehozás',
  'continue' => 'további kép',
  'main_success' => 'A(z) %s sikeresen használható fő fájlként',
  'error_rename' => 'Hiba az átnevezéskor %s erről %s erre',
  'error_not_found' => 'A(z) %s fájl nem található',
  'back' => 'Vissza a főoldalra',
  'thumbs_wait' => 'Indexképek frissítése vagy a a képek átméretezése folyik, türelmedet kérjük...',
  'thumbs_continue_wait' => 'tovább a indexképek frissítéséhez vagy az átméretezéshez...',
  'titles_wait' => 'Címek frissítése, türelmedet kérjük...',
  'delete_wait' => 'Címek törlése, türelmedet kérjük...',
  'replace_wait' => 'Az eredeti képek felülírása az átméretezett képekkel, türelmedet kérjük...',
  'instruction' => 'Gyors útmutató',
  'instruction_action' => 'Válassz műveletet',
  'instruction_parameter' => 'Válasz paramétert',
  'instruction_album' => 'Válasz albumot',
  'instruction_press' => 'Kattints %s -ra',
  'update' => 'Indexképek és átméretezett képek frissítése',
  'update_what' => 'Mi lett frissítve',
  'update_thumb' => 'Csak az indexkép',
  'update_pic' => 'Csak az átméretezett kép',
  'update_both' => 'A kép és az indexkép is',
  'update_number' => 'Egyszerre feldolgozott képek száma',
  'update_option' => '(Csökkentsd a számot, ha időtúllépést tapasztalsz)',
  'filename_title' => 'Fájlnév &rArr; képcím',
  'filename_how' => 'Mi legyen a fájnévvel',
  'filename_remove' => 'A .jpg kiterjesztés törlése és kicserélése _ (aláhúzás)-ra',
  'filename_euro' => '2003_11_23_13_20_20.jpg változtatása 23/11/2003 13:20 -ra',
  'filename_us' => '2003_11_23_13_20_20.jpg változtatása 11/23/2003 13:20 -ra',
  'filename_time' => '2003_11_23_13_20_20.jpg változtatása 13:20 -ra',
  'delete' => 'A képcímek és eredeti képek törlése',
  'delete_title' => 'Képcímek törlése',
  'delete_title_explanation' => 'Az összes cím és kép törlése a megadott albumból', //cpg1.4
  'delete_original' => 'Az eredeti képek törlése',
  'delete_original_explanation' => 'Teljes méretű képek törlése', //cpg1.4
  'delete_intermediate' => 'Köztes képek törlése', //cpg1.4
  'delete_intermediate_explanation' => 'A köztes képek törlése.<br />Használd ezt a lemez terület felszabadításra, ha a \'köztes kép létrehozzása\' opció letiltva a beállításoknál.', //cpg1.4
  'delete_replace' => 'Az eredeti képek felülírása az átméretezett képekkel',
  'titles_deleted' => 'Az összes cím eltávolítva a megadott albumból', //cpg1.4
  'deleting_intermediates' => 'Köztes képek törlése , türelmedet kérjük...', //cpg1.4
  'searching_orphans' => 'Árva fájlok keresése, türelmedet kérjük...', //cpg1.4
  'select_album' => 'Válasz albumot',
  'delete_orphans' => 'A hiányzó képekhez tartozó hozzászólások törlése', //cpg1.4
  'delete_orphans_explanation' => 'Ez az opció azonosítja és lehetővé teszi a képekhez nem tartozó hozzászólások törlését.<br />Az összes albumot ellenőrizd.', //cpg1.4
  'refresh_db' => 'A fájméret és képméret adatok újraolvasása.', //cpg1.4
  'refresh_db_explanation' => 'Az kép adatok újraolvasása. Használata ajánlott kvóta problémák esetén, vagy a kép kézi szerkesztése után..', //cpg1.4
  'reset_views' => 'Megtekintési számláló nullázása', //cpg1.4
  'reset_views_explanation' => 'Az összes számláló nullázása a megadott albumban.', //cpg1.4
  'orphan_comment' => 'Árva hozzászólás található',
  'delete' => 'törlés',
  'delete_all' => 'mind törlése',
  'delete_all_orphans' => 'Az összes árva hozzászólást törlöd?', //cpg1.4
  'comment' => 'Hozzászólás: ',
  'nonexist' => 'nem létező fájlhoz csatolva # ',
  'phpinfo' => 'phpinfo megjelenítése',
  'phpinfo_explanation' => 'Technikai információk megjelenítése a szerverről.', //cpg1.4
  'update_db' => 'Adatbázis frissítése',
  'update_db_explanation' => 'Ha visszamented a Coppermine program fájlait, vagy újabb verzióra cserélted, akkor ajánlott egyszer lefuttattni a frissítést, hogy a megfelelő táblák létrejöjjenek, illetve helyes értékeket tartalmazzanak.',
  'view_log' => 'Naplófájl megtekintése', //cpg1.4
  'view_log_explanation' => 'Coppermine sokféle felhasználói műveletet tud rögzíteni. A naplók között keresgélhetünk, ha a naplózás engedélyezve van a <a href="admin.php">Beállítások</a>-ban.', //cpg1.4
  'versioncheck' => 'Verzió ellenőrzése', //cpg1.4
  'versioncheck_explanation' => 'A fájl verzió számának ellenőrzése a coppermine program frissítése után.', //cpg1.4
  'bridgemanager' => 'Kötés kezelő', //cpg1.4
  'bridgemanager_explanation' => 'Az együttműködés (kötés) engedélyezése/tiltása a Coppermine és más programok (pl. fórum) közt.', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File versioncheck.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('VERSIONCHECK_PHP')) $lang_versioncheck_php = array(
  'title' => 'Verzió ellenőrzés', //cpg1.4
  'what_it_does' => 'Ez az oldal jelentést ad azon felhasználóknak, akik frissítették a programjukat. Ez a eljárás ellenőrzi, hogy a webszerveren található fájlok verziója megegyezik-e http://coppermine.sourceforge.net webhelyen találhatókkal. Így áttekintés kapunk a frissítés sikerességéről.<br />Pirossal azokat mutatja, melyeket muszáj cserélni újabbra. Sárgával azokat, melyeket ajánlott cserélni. Zölddel (vagy az alapértelmezett betűszínnel) azokat mutatja, amely fájlok legújabb verziójúak.<br />Kattints az ikonra a részletekért.', //cpg1.4
  'online_repository_unable' => 'Nem lehet kapcsolódni a fájlraktárhoz', //cpg1.4
  'online_repository_noconnect' => 'Coppermine nem tud kapcsolódni a fájlraktárhoz. Ennek két oka lehet:', //cpg1.4
  'online_repository_reason1' => 'A Coppermine fájlraktár kikapcsolt állapotban van. Ellenőrizd, hogy megtekinthető-e ez a weboldal: %s - ha nem, akkor probálkozz később.', //cpg1.4
  'online_repository_reason2' => 'A PHP  %s beállítás a böngésződben ki van kapcsolva (alapértelmezetten bekapcsolva van). Ha rendszergazdája vagy a webszervernek akkor kapcsold be a<i>php.ini</i>-ben (%s felülírásának engedélyezése). Ha csak webhostolt vagy, akkor bele kell törődnöd, hogy nem tudod interneten keresztül ellenőrízni a fájlok frisseségét. Ekkor az oldal csak a telepített fájlok verzióját jeleníti meg.', //cpg1.4
  'online_repository_skipped' => 'A fájlraktárhoz való kapcsolódás kihagyva', //cpg1.4
  'online_repository_to_local' => 'A program a jelenlegi fájl verziókat veszi alapértelmezetnek. Az adatok pontatlanokká válnak, ha a Coppermine frissítésekor nem sikerül az összes fájlt feltőlteni. Ekkor nem lesz minden fájl a megfelő kiadású.', //cpg1.4
  'local_repository_unable' => 'Nem lehet a helyi fájlraktárhoz kapcsolódni', //cpg1.4
  'local_repository_explanation' => 'Coppermine nem tud a(z) %s fájlraktárhoz kapcsolódni a szerveren. Ez azt jelenti, hogy a raktárkészlet fájl nem lett feltöltve. Probáld meg az oldalt újra futattni (kattits a "frissítés"-re).<br />Ha hibát jelez, akkor a webhostodon tiltottak a webelemek számára a <a href="http://www.php.net/manual/de/ref.filesystem.php">PHP fájlműveletek</a> . Ez esetben sajnáljuk, de nem használhatod ezt az eszközt.', //cpg1.4
  'coppermine_version_header' => 'Telepített Coppermine verzió', //cpg1.4
  'coppermine_version_info' => 'Jelenleg telepített: %s', //cpg1.4
  'coppermine_version_explanation' => 'Ha szerinted hibás a megjelenő adat, akkor lehet, hogy nem lett feltöltve a legfrisseb adatokat tartalmazzó <i>include/init.inc.php</i> fájl', //cpg1.4
  'version_comparison' => 'Verzió összehasonlítás', //cpg1.4
  'folder_file' => 'Könyvtár/fájl', //cpg1.4
  'coppermine_version' => 'cpg verzió', //cpg1.4
  'file_version' => 'Fájl verzió', //cpg1.4
  'webcvs' => 'web svn', //cpg1.4
  'writable' => 'írható', //cpg1.4
  'not_writable' => 'nem írható', //cpg1.4
  'help' => 'Segítség', //cpg1.4
  'help_file_not_exist_optional1' => 'Fájl/mappa nem létezik', //cpg1.4
  'help_file_not_exist_optional2' => 'A(z) %s nem található a szerveren. Ez a fájl opciónális, a probléma megoldásához töltsd fel a szervere valamilyen FTP programot használva.', //cpg1.4
  'help_file_not_exist_mandatory1' => 'Fájl/mappa nem létezik', //cpg1.4
  'help_file_not_exist_mandatory2' => 'A(z) %s nem található a szerveren. Ez a fájl szükséges, a probléma megoldásához töltsd fel a szervere valamilyen FTP programot használva.', //cpg1.4
  'help_no_local_version1' => 'Nincs lokális fájl verzió', //cpg1.4
  'help_no_local_version2' => 'Nem lehet meghatározni a fájl verzióját. A fájl régi vagy módosítva lett, esetleg eltávolították a fejlécét. Ajánlott a frissítése', //cpg1.4
  'help_local_version_outdated1' => 'Lejárt a fájl verziója', //cpg1.4
  'help_local_version_outdated2' => 'Ez a fájl valószinűleg egy régebbi Coppermine verzióhoz tartozik. Bizonyosodj meg, hogy nincs-e újabb.', //cpg1.4
  'help_local_version_na1' => 'Nem lehet meghatározni a CVS adatokat', //cpg1.4
  'help_local_version_na2' => 'A program nem tudja eldönteni a CVS verzió adatokat a webszerver fájljairól. A fájlokat felrakhatod csomagból.', //cpg1.4
  'help_local_version_dev1' => 'Fejlesztői verzió', //cpg1.4
  'help_local_version_dev2' => 'A fájlok a webszerveren újabbak mint a  Coppermine verziód. Ez azért lehet, mert fejlesztői változatott használsz vagy frissítés után nem töltötted fel az include/init.inc.php fájlt.', //cpg1.4
  'help_not_writable1' => 'Nem irható könyvtár', //cpg1.4
  'help_not_writable2' => 'Módosítsd a jogosultságokat (CHMOD), hogy a program írni tudja %s a könyvtárat mindenki számára.', //cpg1.4
  'help_writable1' => 'A könyvtár írható', //cpg1.4
  'help_writable2' => 'A %s könyvtár írható. Ez felesleges biztonsági rés, a Coppermine programnak csak olvasási és futtatási jog kell.', //cpg1.4
  'help_writable_undetermined' => 'Nem lehet meghatározni, hogy a könyvtár írható-e.', //cpg1.4
  'your_file' => 'Saját fájl', //cpg1.4
  'reference_file' => 'Referencia fájl', //cpg1.4
  'summary' => 'Összefoglaló', //cpg1.4
  'total' => 'Összes fájl/mappa ellenőrízve', //cpg1.4
  'mandatory_files_missing' => 'Hiányzó szükséges fájlok', //cpg1.4
  'optional_files_missing' => 'Hiányzó opcionális fájlok', //cpg1.4
  'files_from_older_version' => 'Régebbi verziójú fájlok', //cpg1.4
  'file_version_outdated' => 'Lejárt verziójú fájlok', //cpg1.4
  'error_no_data' => 'A program hibázott, nem tudja meghatározni az információkat, sajnáljuk', //cpg1.4
  'go_to_webcvs' => 'Ugrás %s -ra', //cpg1.4
  'options' => 'Opciók', //cpg1.4
  'show_optional_files' => 'Opciónális fájlok megjelenítése', //cpg1.4
  'show_mandatory_files' => 'Szükséges fájlok megjelenítése', //cpg1.4
  'show_file_versions' => 'Fájl verziók megjelenítése', //cpg1.4
  'show_errors_only' => 'Csak a hibásak megjelenítése', //cpg1.4
  'show_permissions' => 'Könyvtár jogosultságok', //cpg1.4
  'show_condensed_output' => 'Tömőrített jelentés (könnyebb screenshot-ot készíteni)', //cpg1.4
  'coppermine_in_webroot' => 'Coppermine a dokumentum gyökérbe van telepítve', //cpg1.4
  'connect_online_repository' => 'Kapcsolódás az internetes fájlraktárhoz', //cpg1.4
  'show_additional_information' => 'Kiegészítő adatok megjelenítése', //cpg1.4
  'no_webcvs_link' => 'Ne mutassa a Web-CVS linkeket ', //cpg1.4
  'stable_webcvs_link' => 'A Web-CVS linkek  megjelenítése a "végleges állapot" részben', //cpg1.4
  'devel_webcvs_link' => 'A Web-CVSl inkek megjelenítése a "fejlesztői állapot" részben', //cpg1.4
  'submit' => 'változások elfogadása/frissítés', //cpg1.4
  'reset_to_defaults' => 'Visszaállítás alaphelyzetbe', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File view_log.php  //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('VIEWLOG_PHP')) $lang_viewlog_php = array(
  'delete_all' => 'Összes naplófájl törlése', //cpg1.4
  'delete_this' => 'Ennek a naplónak a törlése', //cpg1.4
  'view_logs' => 'Napló megtekintése', //cpg1.4
  'no_logs' => 'Nem lett napló létrehozva', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File xp_publish.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('XP_PUBLISH_PHP')) {

$lang_xp_publish_client = <<<EOT
<h1>XP web közététel varázsló</h1><p>Ez a modul lehetővé teszi a  <b>Windows XP</b> web közététel varázsló használatát a Coppermine Képtárral.</p><p>A kód újságcikkre alapul, beküldte:
EOT;

$lang_xp_publish_required = <<<EOT
<h2>Mi szükséges hozzá</h2><ul><li>Windows XP, beépített varázslója.</li><li>Működő Coppermine Képtár<b> helyesen működő webes feltöltéssel</b></li></ul><h2>Mit kell telepíteni a kliens oldalon</h2><ul><li>Jobb kattintás a 
EOT;

$lang_xp_publish_select = <<<EOT
Válaszd a &quot;Mentés másként..&quot; pontot. Mentsd le a helyi lemezre. A lementés után ellenőrízd, hogy a fájlnév  <b>cpg_###.reg</b> (A ###-időbélyeget mutat). Kattints kettőt a fájlra, hogy regisztráld a szervered a webes közététel varázsló számára.</li></ul>
EOT;

$lang_xp_publish_testing = <<<EOT
<h2>Próba</h2><ul><li>A Windows intézőjében válassz ki néhány képet és kattints a <b>xxx közététele a weben</b> menüre a bal-panelen</li><li>Erősítsd meg a kiválasztásokat, majd kattints a <b>következő</b>-re.</li><li>A megjelenő listából válasszd ki a fotóképtárat (a neve a te képtárad neve). Ha nem látszik a listában, akkor ellenőrízd, hogy telepítve van a <b>cpg_pub_wizard.reg</b> a fent leírtak szerint.</li><li>Add meg a bejelentkezési információkat, ha szükséges.</li><li>Válassz cél albumot a képek számára vagy hoz létre újat.</li><li>Kattints a <b>tovább</b>-ra. A feltöltés elkezdődik.</li><li>Ha befejeződik a feltöltés, ellenőrizd, hogy a képek rendben bekerültek a képtárba.</li></ul>
EOT;

$lang_xp_publish_notes = <<<EOT
<h2>Anmerkungen :</h2><ul> Ha a feltöltés elindult, akkor a program már nem tud hibaüzeneteket megjeleníteni, ezért addig nem tudod, hogy sikeres volt-e a feltöltés, amig nem nézed meg a képtárban.</li><li>Ha sikertelen volt akkor, engedélyezd a &quot;Debug-Módquot;-ot a képtár rendszergazdai oldalán, majd 1 képpel probálkoz újra, és nézd meg a hibaüzenetet a
EOT;

$lang_xp_publish_flood = <<<EOT
A fájl, amely a szervered Coppermine könyvtárában található.</li><li>Hogy elkerüljük a képtár támadását a képfeltöltő varázslón keresztül, csak a képtár rendszergazdái, illetve azok a felhasználók használhatják ezt a funkciót, akik saját albummal rendelkeznek,</li>
EOT;



$lang_xp_publish_php = array(
  'title' => 'Coppermine - XP Web közzététel segítő', //cpg1.4
  'welcome' => 'Üdvözzőlek <b>%s</b>,', //cpg1.4
  'need_login' => 'Be kell jelentkezned a képtárba a böngésződet használva, mielőtt használnád a varázslót.<p/><p>Bejelentkezéskor ne felejts el bejelölni az &quot;<b>Emlékezz rám</b>&quot; opciót.', //cpg1.4
  'no_alb' => 'Sajnáljuk, de nincs egy album sem, ahova fel tudnál tölteni képet a varázslóval.', //cpg1.4
  'upload' => 'Képek feltöltése létező albumra', //cpg1.4
  'create_new' => 'Új album létrehozása a képek számára', //cpg1.4
  'album' => 'Album', //cpg1.4
  'category' => 'Kategória', //cpg1.4
  'new_alb_created' => 'Az új &quot;<b>%s</b>&quot; albumod elkészítve.', //cpg1.4
  'continue' => 'Kattints a &quot;tovább&quot;-ra, a képek feltöltésére', //cpg1.4
  'link' => 'Ez a Link', //cpg1.4
);
}
?>