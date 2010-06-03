<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2010 Coppermine Dev Team
  v1.0 originally written by Gregory Demar

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 3
  as published by the Free Software Foundation.

  ********************************************
  Coppermine version: 1.4.28
  $Source$
  $Revision$
  $Author$
  $Date$
**********************************************/

if (!defined('IN_COPPERMINE')) { die('Not in Coppermine...');}

// info about translators and translated language
$lang_translation_info = array(
  'lang_name_english' => 'Serbian', //cpg1.4
  'lang_name_native' => 'Srpski', //cpg1.4
  'lang_country_code' => 'sr', //cpg1.4
  'trans_name'=> 'Pajo',
  'trans_email' => 'pajoooo@gmail.com',
  'trans_website' => 'http://www.pttbn.com/',
  'trans_date' => '2007-11-16',
);

$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('Bajta', 'KB', 'MB');

// Day of weeks and months
$lang_day_of_week = array('Ne', 'Po', 'Ut', 'Sr', 'Če', 'Pe', 'Su');
$lang_month = array('Jan', 'Feb', 'Mar', 'Apr', 'Maj', 'Jun', 'Jul', 'Avg', 'Sep', 'Okt', 'Nov', 'Dec');

// Some common strings
$lang_yes = 'Da';
$lang_no  = 'Ne';
$lang_back = 'NAZAD';
$lang_continue = 'NASTAVI';
$lang_info = 'Informacije';
$lang_error = 'Greška';
$lang_check_uncheck_all = 'selektuj/deselektuj sve'; //cpg1.4

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
  'random' => 'Nasumične slike',
  'lastup' => 'Najnovije slike',
  'lastalb'=> 'Zadnji dodani albumi',
  'lastcom' => 'Zadnji komentari',
  'topn' => 'Najgledanije',
  'toprated' => 'Najbolje ocjenjene',
  'lasthits' => 'Zadnja viđena',
  'search' => 'Rezultati pretrage',
  'favpics'=> 'Omiljene slike',  //cpg1.4
);

$lang_errors = array(
  'access_denied' => 'Nemate dozvolu da pristupite ovoj stranici.',
  'perm_denied' => 'Nemate dozvolu da izvršite ovu operaciju.',
  'param_missing' => 'Nedostaju podaci za izvršenje...',
  'non_exist_ap' => 'Izabrani album/slika ne postoji !',
  'quota_exceeded' => 'Disk je pun<br /><br />Na raspolaganju imate [quota]K, vaše slike trenutno zauzimaju [space]K, dodavanjem još slika, prekoračili biste vaš prostor na disku.',
  'gd_file_type_err' => 'Pri upotrebi GD biblioteke dozvoljene su samo JPEG i PNG ekstenije.',
  'invalid_image' => 'Poslata slika je oštećena ili nije u pravilnom formatu za GD biblioteku',
  'resize_failed' => 'Ne mogu kreirati ikonu ili umanjenu sliku.',
  'no_img_to_display' => 'Nema slike za prikaz',
  'non_exist_cat' => 'Odabrana kategorija ne postoji',
  'orphan_cat' => 'Kategorija ima nepostojeću nadređenu kategoriju, riješi problem prije nastavka!',
  'directory_ro' => 'Direktorij \'%s\' ne dopušta pisanje, sliku nije moguće obrisati',
  'non_exist_comment' => 'Odabrani komentar ne postoji.',
  'pic_in_invalid_album' => 'Slika je u nepostojećem albumu (%s)!?',
  'banned' => 'Trenutno imate zabranu pristupa ovoj stranici.',
  'not_with_udb' => 'Ta funkcija je onemogućena jer je prebačena na forum. To što pokušavate uraditi nije moguće u ovoj postavci, ili je predviđeno za izvršenje na forumu.',
  'offline_title' => 'Nije u funkciji',
  'offline_text' => 'Galerija trenutno nije u funkciji - navratite uskoro',
  'ecards_empty' => 'Trenutno nema podataka o e-razglednicama.',
  'action_failed' => 'Radnja nije uspjela.  Coppermine ne može obaviti ovu radnju.',
  'no_zip' => 'Potrebne biblioteke za procesuiranje ZIP dokumenata ne postoje.  Molimo Vas, kontaktirajte administratora.',
  'zip_type' => 'Nemate dopuštenje za slanje ZIP dokumenata.',
  'database_query' => 'Došlo je do greške pri izvedbi u bazi podataka', //cpg1.4
  'register_globals_on' => 'The PHP setting register_globals is enabled on your server, which is a bad idea in terms of security. It\'s strongly recommended to turn it off. [<a href="http://forum.coppermine-gallery.net/index.php/topic,59569.0.html" rel="external" class="external">more</a>]',
);

$lang_bbcode_help_title = 'Pomoć za bbcode'; //cpg1.4
$lang_bbcode_help = 'Možete formatirati tekst koristeći bbcode oznake: <li>[b]Bold[/b] =&gt; <b>Podebljano</b></li><li>[i]Nakošeno[/i] =&gt; <i>Nakošeno</i></li><li>[url=http://vasastrana.com/]Url To je moja strana...[/url] =&gt; <a href="http://vasastrana.com">To je moja stra...</a></li><li>[email]user@domain.com[/email] =&gt; <a href="mailto:user@domain.com">user@domain.com</a></li><li>[color=red]neki tekst[/color] =&gt; <span style="color:red">neki tekst</span></li><li>[img]http://coppermine-gallery.net/demo/cpg14x/images/red.gif[/img] => <img src="../images/red.gif" border="0" alt="" /></li>'; //cpg1.4

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
  'home_title' => 'Idi na početnu stranicu',
  'home_lnk' => 'Početna',
  'alb_list_title' => 'Idi na popis albuma',
  'alb_list_lnk' => 'Popis albuma',
  'my_gal_title' => 'Idi u moju ličnu galeriju',
  'my_gal_lnk' => 'Moja galerija',
  'my_prof_title' => 'Idi u moj lični profil', //cpg1.4
  'my_prof_lnk' => 'Moj profil',
  'adm_mode_title' => 'Prijeđi na administraciju',
  'adm_mode_lnk' => 'Administracija',
  'usr_mode_title' => 'Prijeđi na korisnički način',
  'usr_mode_lnk' => 'Korisnički način',
  'upload_pic_title' => 'Dodavanje slika u album',
  'upload_pic_lnk' => 'Dodavanje slika',
  'register_title' => 'Kreiraj nalog',
  'register_lnk' => 'Registracija',
  'login_title' => 'Prijavi me', //cpg1.4
  'login_lnk' => 'Prijava',
  'logout_title' => 'Odjavi me', //cpg1.4
  'logout_lnk' => 'Odjava',
  'lastup_title' => 'Prikaži najnovije slike', //cpg1.4
  'lastup_lnk' => 'Najnovije slike',
  'lastcom_title' => 'Prikaži zadnje komentare', //cpg1.4
  'lastcom_lnk' => 'Zadnji komentari',
  'topn_title' => 'Prikaži najgledanije slike', //cpg1.4
  'topn_lnk' => 'Najgledanije',
  'toprated_title' => 'Prikaži najbolje ocijenjene slike', //cpg1.4
  'toprated_lnk' => 'Najbolje ocijenjene',
  'search_title' => 'Pretraži galeriju', //cpg1.4
  'search_lnk' => 'Pretraga',
  'fav_title' => 'Idi u moje omiljene slike', //cpg1.4
  'fav_lnk' => 'Omiljene slike',
  'memberlist_title' => 'Pokaži popis članova',
  'memberlist_lnk' => 'Popis članova',
  'faq_title' => 'Često postavljana pitanja o galeriji slika',
  'faq_lnk' => 'ČPP',
);

$lang_gallery_admin_menu = array(
  'upl_app_title' => 'Odobravanje novih slanja', //cpg1.4
  'upl_app_lnk' => 'Dozvola za slanje',
  'admin_title' => 'Idi u Konfiguraciju', //cpg1.4
  'admin_lnk' => 'Konfiguracija', //cpg1.4
  'albums_title' => 'Idi u konfiguraciju albuma', //cpg1.4
  'albums_lnk' => 'Albumi',
  'categories_title' => 'Idi u konfiguraciju kategorija', //cpg1.4
  'categories_lnk' => 'Kategorije',
  'users_title' => 'Idi u konfiguraciju korisnika', //cpg1.4
  'users_lnk' => 'Korisnici',
  'groups_title' => 'Idi u konfiguraciju grupa', //cpg1.4
  'groups_lnk' => 'Grupe',
  'comments_title' => 'Pogledaj sve komentare', //cpg1.4
  'comments_lnk' => 'Pogledaj komentare',
  'searchnew_title' => 'Idi na paketno dodavanje slika', //cpg1.4
  'searchnew_lnk' => 'Paketno dodavanje slika',
  'util_title' => 'Idi na administrativne alate', //cpg1.4
  'util_lnk' => 'Admin alati',
  'key_title' => 'Idi u riječnik ključnih riječi', //cpg1.4
  'key_lnk' => 'Riječnik ključnih riječi', //cpg1.4
  'ban_title' => 'Idi na korisnike pod zabranom', //cpg1.4
  'ban_lnk' => 'Krisnici pod zabranom',
  'db_ecard_title' => 'Pregledaj e-razglednice', //cpg1.4
  'db_ecard_lnk' => 'Prikaži e-razglednice',
  'pictures_title' => 'Sortiranje slika', //cpg1.4
  'pictures_lnk' => 'Sortiranje slika', //cpg1.4
  'documentation_lnk' => 'Dokumentacija', //cpg1.4
  'documentation_title' => 'Coppermine uputstva', //cpg1.4
);

$lang_user_admin_menu = array(
  'albmgr_title' => 'Kreiraj i poredaj moje albume', //cpg1.4
  'albmgr_lnk' => 'Kreiraj / poredaj moje albume',
  'modifyalb_title' => 'Idi na Izmijeni moje albume',  //cpg1.4
  'modifyalb_lnk' => 'Izmijeni moje albume',
  'my_prof_title' => 'Idi u Moj profil', //cpg1.4
  'my_prof_lnk' => 'Moj profil',
);

$lang_cat_list = array(
  'category' => 'Kategorije',
  'albums' => 'Albuma',
  'pictures' => 'Slika',
);

$lang_album_list = array(
  'album_on_page' => '%d albuma na %d stranici',
);

$lang_thumb_view = array(
  'date' => 'DATUM',
  //Sort by filename and title
  'name' => 'NAZIV SLIKE',
  'title' => 'NASLOV',
  'sort_da' => 'Poredaj po datumu uzlazno',
  'sort_dd' => 'Poredaj po datumu silazno',
  'sort_na' => 'Poredaj po imenu uzlazno',
  'sort_nd' => 'Poredaj po imenu silazno',
  'sort_ta' => 'Poredaj po nazivu uzlazno',
  'sort_td' => 'Poredaj po nazivu silazno',
  'position' => 'POZICIJA', //cpg1.4
  'sort_pa' => 'Poredaj po poziciji uzlazno', //cpg1.4
  'sort_pd' => 'Poredaj po poziciji silazno', //cpg1.4
  'download_zip' => 'Preuzmi kao Zip datoteku',
  'pic_on_page' => 'Slika: %d | Stranica: %d',
  'user_on_page' => '%d korisnika na %d stranici',
  'enter_alb_pass' => 'Unesite lozinku za taj album', //cpg1.4
  'invalid_pass' => 'Neispravna lozinka', //cpg1.4
  'pass' => 'Lozinka', //cpg1.4
  'submit' => 'Pošalji', //cpg1.4
);

$lang_img_nav_bar = array(
  'thumb_title' => 'Vrati se na stranicu sa ikonama',
  'pic_info_title' => 'Prikaži/sakrij podatke o slici',
  'slideshow_title' => 'Slajd prikaz',
  'ecard_title' => 'Pošalji ovu sliku kao e-razglednicu',
  'ecard_disabled' => 'e-razglednice nisu omogućene',
  'ecard_disabled_msg' => 'Nemate dopuštenje slati e-razglednice', //js-alert
  'prev_title' => 'Pogledaj prethodnu sliku',
  'next_title' => 'Pogledaj slijedeću sliku',
  'pic_pos' => 'SLIKA %s/%s',
  'report_title' => 'Obavijesti administratora o toj slici', //cpg1.4
  'go_album_end' => 'Na kraj', //cpg1.4
  'go_album_start' => 'Na početak', //cpg1.4
  'go_back_x_items' => 'nazad za %s slika', //cpg1.4
  'go_forward_x_items' => 'naprijed za %s slika', //cpg1.4
);

$lang_rate_pic = array(
  'rate_this_pic' => 'Ocijenite ovu sliku ',
  'no_votes' => '(Nije još ocijenjena)',
  'rating' => '(Trenutna ocjena : %s/5 | Glasanja: %s)',
  'rubbish' => 'Loše',
  'poor' => 'Slabo',
  'fair' => 'Pristojno',
  'good' => 'Dobro',
  'excellent' => 'Jako dobro',
  'great' => 'Izvrsno',
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
  CRITICAL_ERROR => 'Kritična greška',
  'file' => 'Slika: ',
  'line' => 'Linija: ',
);

$lang_display_thumbnails = array(
  'filename' => 'Naziv slike=', //cpg1.4
  'filesize' => 'Veličina slike=', //cpg1.4
  'dimensions' => 'Dimenzije=', //cpg1.4
  'date_added' => 'Dodana dana=', //cpg1.4
);

$lang_get_pic_data = array(
  'n_comments' => '%s komentara',
  'n_views' => 'Pogledana %s puta',
  'n_votes' => '(br. glasova: %s)',
);

$lang_cpg_debug_output = array(
  'debug_info' => 'Debug Info',
  'select_all' => 'Select All',
  'copy_and_paste_instructions' => 'Ako želite zatražiti pomoć na forumu, copy-and-paste ovaj debug kod u vaš post. Provjerite da li ste zamijenili sve lozinke u postu sa *** prije objavljivanja posta. <br />Bilješka: Ovo je samo informacija i ne znači da postoji greška u vašoj galeriji.', //cpg1.4
  'phpinfo' => 'Prikaži phpinfo',
  'notices' => 'Bilješke', //cpg1.4
);

$lang_language_selection = array(
  'reset_language' => 'Podrazumijevani jezik',
  'choose_language' => 'Odaberite Vaš jezik',
);

$lang_theme_selection = array(
  'reset_theme' => 'Podrazumijevana tema',
  'choose_theme' => 'Odaberite Vašu temu',
);

$lang_version_alert = array(
  'version_alert' => 'Nepodržana verzija!', //cpg1.4
  'security_alert' => 'Sigurnosno upozorenje!', //cpg1.4.3
  'relocate_exists' => 'Odstranite <a href="http://coppermine-gallery.net/forum/index.php?topic=24217.0">relocate_server.php</a> datoteku sa svog servera!',
  'no_stable_version' => 'Koristite Coppermine %s (%s) koji je namijenjen samo iskusnim korisnicima - uz ovu verziju ne dolazi podrška niti bilo kakva garancija. Koristite je na svoj rizik ili skinite stariju stabilnu verziju ako trebate podršku!', //cpg1.4
  'gallery_offline' => 'Galerija trenutno nije u funkciji i biće vidljiva samo za Vas kao Administratora. Ne zaboravite da je vratite u funkciju nakon što završite prepravke.', //cpg1.4
);

$lang_create_tabs = array(
  'previous' => 'nazad', //cpg1.4
  'next' => 'naprijed', //cpg1.4
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
  'error_wakeup' => "dodatak '%s' nije moguće aktivirati ", //cpg1.4
  'error_install' => "Instalacija dodatka '%s' nije uspjela", //cpg1.4
  'error_uninstall' => "Deinstalacija dodatka '%s' nije uspjela", //cpg1.4
  'error_sleep' => "Neuspješna deinstalacija dodatka '%s'<br />", //cpg1.4
);

// ------------------------------------------------------------------------- //
// File include/smilies.inc.php
// ------------------------------------------------------------------------- //

if (defined('SMILIES_PHP')) $lang_smilies_inc_php = array(
  'Exclamation' => 'Uzvičnik',
  'Question' => 'Upitnik',
  'Very Happy' => 'Jako sretan',
  'Smile' => 'Smješko',
  'Sad' => 'Tužan',
  'Surprised' => 'Iznenađen',
  'Shocked' => 'Šokiran',
  'Confused' => 'Zbunjen',
  'Cool' => 'Zadovoljan',
  'Laughing' => 'Nasmijan',
  'Mad' => 'Lud',
  'Razz' => 'Razjaren',
  'Embarassed' => 'Postiđen',
  'Crying or Very sad' => 'Plače ili je jako tužan',
  'Evil or Very Mad' => 'Zao ili jako lud',
  'Twisted Evil' => 'Izopačeno zlo',
  'Rolling Eyes' => 'Okreće očima',
  'Wink' => 'Namiguje',
  'Idea' => 'Ima ideju',
  'Arrow' => 'Strjelica',
  'Neutral' => 'Neutralan',
  'Mr. Green' => 'Gospodin Zelenko',
);

// ------------------------------------------------------------------------- //
// File addpic.php
// ------------------------------------------------------------------------- //

// void

// ------------------------------------------------------------------------- //
// File mode.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('MODE_PHP')) $lang_mode_php = array(
  0 => 'Napuštanje administracije...',
  1 => 'Ulazak u administraciju...',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
  'alb_need_name' => 'Album mora imati ime !', //js-alert
  'confirm_modifs' => 'Jeste li sigurni da želite učiniti ove izmjene ?', //js-alert
  'no_change' => 'Niste ništa izmijenili !', //js-alert
  'new_album' => 'Novi album',
  'confirm_delete1' => 'Jeste li sigurni da želite izbrisati ovaj album ?', //js-alert
  'confirm_delete2' => '\nSve slike i komentari će biti izbrisani !', //js-alert
  'select_first' => 'Prvo odaberite album', //js-alert
  'alb_mrg' => 'Uređivanje albuma',
  'my_gallery' => '* Moja galerija *',
  'no_category' => '* Nema kategorije *',
  'delete' => 'Izbriši',
  'new' => 'Novo',
  'apply_modifs' => 'Prihvati izmjene',
  'select_category' => 'Odaberi kategoriju',
);

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) $lang_banning_php = array(
  'title' => 'Zabrana korisnika', //cpg1.4
  'user_name' => 'Korisničko ime', //cpg1.4
  'ip_address' => 'IP Adresa', //cpg1.4
  'expiry' => 'Ističe (prazno znači stalno)', //cpg1.4
  'edit_ban' => 'Sačuvaj izmjene', //cpg1.4
  'delete_ban' => 'Izbriši', //cpg1.4
  'add_new' => 'Dodaj novu zabranu', //cpg1.4
  'add_ban' => 'Dodaj', //cpg1.4
  'error_user' => 'Ne mogu naći korisnika', //cpg1.4
  'error_specify' => 'Trebate odrediti ili korisničko ime ili IP adresu', //cpg1.4
  'error_ban_id' => 'Nepravilna zabrana ID-a!', //cpg1.4
  'error_admin_ban' => 'Ne možete napraviti zabranu sebi!', //cpg1.4
  'error_server_ban' => 'Jeste li htjeli zabraniti pristup vlastitom serveru? Ne možete to učiniti...', //cpg1.4
  'error_ip_forbidden' => 'Taj IP ne možete zabraniti!<br />Ako želite zabraniti posebne IP-e, učinite to u <a href="admin.php">Konfiguracija</a> (ima smisla samo u LAN-u).', //cpg1.4
  'lookup_ip' => 'Pogledajte IP adresu', //cpg1.4
  'submit' => 'Naprijed!', //cpg1.4
  'select_date' => 'odaberi datum', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File bridgemgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('BRIDGEMGR_PHP')) $lang_bridgemgr_php = array(
  'title' => 'Bridge Čarobnjak',
  'warning' => 'Upozorenje: kod upotrebe čarobnjaka morate imati na umu da osjetljive podatke šaljete koristeći html forme. Pokrećite ga samo na vlastitom PC-u (nikako na javnim klijentima kao internet kafe...), i nakon upotrebe obavezno brišite keš svog preglednika kao i privremene datoteke. U protivnom, neko neovlašten može pristupiti Vašim podacima!',
  'back' => 'nazad',
  'next' => 'naprijed',
  'start_wizard' => 'Pokretanje Bridge čarobnjaka',
  'finish' => 'Završi',
  'hide_unused_fields' => 'sakrij polja formi koje se ne koriste (preporučeno)',
  'clear_unused_db_fields' => 'briši pogrešne unose u bazi podataka (preporučeno)',
  'custom_bridge_file' => 'ime Vaše bridge datoteke (ako je <i>myfile.inc.php</i>, unesi <i>myfile</i> u to polje)',
  'no_action_needed' => 'U ovom koraku ne trebate ništa raditi. Samo kliknite \'naprijed\' da biste nastavili.',
  'reset_to_default' => 'Resetujte na osnovne vrijednosti',
  'choose_bbs_app' => 'izaberite aplikaciju s kojom želite integrisati Vašu galeriju',
  'support_url' => 'Idite ovdje po podršku za tu aplikaciju',
  'settings_path' => 'staza koju koristi Vaš BBS',
  'database_connection' => 'veza s bazom podataka',
  'database_tables' => 'tabele baze podataka',
  'bbs_groups' => 'BBS grupe',
  'license_number' => 'Broj licence',
  'license_number_explanation' => 'Unesite broj licence (ako ga posjedujete)',
  'db_database_name' => 'Ime baze podataka',
  'db_database_name_explanation' => 'Unesite ime baze podataka koju koristi BBS',
  'db_hostname' => 'Host baze podataka',
  'db_hostname_explanation' => 'Host-ime Vaše mySQL baze podataka, obično &quot;localhost&quot;',
  'db_username' => 'Korisnički nalog baze podataka',
  'db_username_explanation' => 'mySQL korisnički nalog za vezu sa BBS',
  'db_password' => 'Lozinka baze podataka',
  'db_password_explanation' => 'Lozinka za taj mySQL korisnički nalog',
  'full_forum_url' => 'URL Foruma',
  'full_forum_url_explanation' => 'Pun URL Vašeg BBS (uključujući http:// dio, npr. http://www.vasdomen.tld/forum)',
  'relative_path_of_forum_from_webroot' => 'Relativna staza foruma',
  'relative_path_of_forum_from_webroot_explanation' => 'Relativna staza do Vašeg BBS (Primjer: ako je Vaš BBS na http://www.vasdomen.tld/forum/, unesite &quot;/forum/&quot; u to polje)',
  'relative_path_to_config_file' => 'Relativna staza do config datoteke Vašeg BBS',
  'relative_path_to_config_file_explanation' => 'Relativna staza do Vašeg BBS, gledano iz direktorija Vaše galerije (npr. &quot;../forum/&quot; ako je Vaš BBS na http://www.vasdomen.tld/forum/ i galerija na http://www.vasdomen.tld/gallery/)',
  'cookie_prefix' => 'Prefiks kukija',
  'cookie_prefix_explanation' => 'to će biti ime kukija Vašeg BBS',
  'table_prefix' => 'Prefiks tabele',
  'table_prefix_explanation' => 'Mora se poklapati sa prefiksom koji, prilikom postavke, odaberete za Vaš BBS.',
  'user_table' => 'Korisnička tabela',
  'user_table_explanation' => '(obično je osnovna postavka OK, sve dok je osnovna instalacija Vašeg BBS standardna)',
  'session_table' => 'Tabela sesije',
  'session_table_explanation' => '(obično je osnovna postavka OK, sve dok je osnovna instalacija Vašeg BBS standardna)',
  'group_table' => 'Tabela grupe',
  'group_table_explanation' => '(obično je osnovna postavka OK, sve dok je osnovna instalacija Vašeg BBS standardna)',
  'group_relation_table' => 'Tabela odnosa grupe',
  'group_relation_table_explanation' => '(obično je osnovna postavka OK, sve dok je osnovna instalacija Vašeg BBS standardna)',
  'group_mapping_table' => 'Tabela mapiranja grupe',
  'group_mapping_table_explanation' => '(obično je osnovna postavka OK, sve dok je osnovna instalacija Vašeg BBS standardna)',
  'use_standard_groups' => 'Koristi standardne BBS korisničke grupe',
  'use_standard_groups_explanation' => 'Koristi standardne (ugrađene) korisničke grupe (preporučeno). Time ćete postići da podešavanja svih proizvoljnih korisničkih grupa napravljenih na toj stranici postanu beskorisna. Onemogućite tu opciju samo ako STVARNO znate šta radite!',
  'validating_group' => 'Validacija grupe',
  'validating_group_explanation' => 'ID grupe Vašeg BBS u kojoj su korisnički nalozi za koje je potrebna validacija (obično je osnovna postavka OK, sve dok je osnovna instalacija Vašeg BBS standardna)',
  'guest_group' => 'Grupa gostiju',
  'guest_group_explanation' => 'ID grupe Vašeg BBS u kojoj su gosti (anonimni korisnici) (obično je osnovna postavka OK, mijenjajte samo ako znate šta radite)',
  'member_group' => 'Grupa člnova',
  'member_group_explanation' => 'ID grupe Vašeg BBS u kojoj su &quot;regularni&quot; korisnički nalozi (obično je osnovna postavka OK, mijenjajte samo ako znate šta radite)',
  'admin_group' => 'Admin grupa',
  'admin_group_explanation' => 'ID grupe Vašeg BBS u kojoj su administratori (obično je osnovna postavka OK, mijenjajte samo ako znate šta radite)',
  'banned_group' => 'Grupa zabrana',
  'banned_group_explanation' => 'ID grupe Vašeg BBS u kojoj su korisnici pod zabranom (obično je osnovna postavka OK, mijenjajte samo ako znate šta radite)',
  'global_moderators_group' => 'Grupa globalnih moderatora',
  'global_moderators_group_explanation' => 'ID grupe Vašeg BBS u kojoj su globalni moderatori Vašeg BBS (obično je osnovna postavka OK, mijenjajte samo ako znate šta radite)',
  'special_settings' => 'BBS-posebna podešavanja',
  'logout_flag' => 'phpBB verzija (oznaka odjave)',
  'logout_flag_explanation' => 'Koja je verzija Vašeg BBS (ovim podešavanjem se uređuje način odjava)',
  'use_post_based_groups' => 'Koristi post-based grupe?',
  'logout_flag_yes' => '2.0.5 ili viša',
  'logout_flag_no' => '2.0.4 ili niža',
  'use_post_based_groups_explanation' => 'Da li da i grupe sa BBS koje su definisane brojem postova dobiju nalog (dopušta veći nadzor dozvola) ili samo osnovne grupe (lakša administracija, preporučeno). Ovo podešavanje možete kasnije mijenjati.',
  'use_post_based_groups_yes' => 'da',
  'use_post_based_groups_no' => 'ne',
  'error_title' => 'Prije nastavka morate ispraviti ove greške. Idite na prethodni prikaz.',
  'error_specify_bbs' => 'Morate navesti aplikaciju s kojom želite sjediniti Vašu galeriju.',
  'error_no_blank_name' => 'Morate navesti ime bridge datoteke.',
  'error_no_special_chars' => 'Ime bridge datoteke ne može sadržati specijalne znakove izuzev (_) i (-)!',
  'error_bridge_file_not_exist' => 'Bridge datoteka %s ne postoji na serveru. Provjerite da li ste je prebacili na server.',
  'finalize' => 'omogući/onemogući BBS integraciju',
  'finalize_explanation' => 'Dakle, Vaša podešavanja su upisana u bazu podataka, ali BBS integracija nije bila omogućena. Integraciju možete omogućiti/onemogućiti bilo kada kasnije. Obavezno zapamtite admin korisničko ime i lozinku samostalne Galerije, može Vam zatrebati kasnije. Ako bilo šta pođe po zlu, idite u %s i onemogućite BBS integraciju, koristeći samostalni admin nalog (postavili ste ga tokom instalacije Galerije).',
  'your_bridge_settings' => 'Bridge podešavanja',
  'title_enable' => 'Omogućite integraciju sa %s',
  'bridge_enable_yes' => 'omogući',
  'bridge_enable_no' => 'onemogući',
  'error_must_not_be_empty' => 'ne mora biti prazan',
  'error_either_be' => 'moraju biti %s ili %s',
  'error_folder_not_exist' => '%s ne postoji. Ispravite unešenu vrijednost za %s',
  'error_cookie_not_readible' => 'Galerija ne može čitati kuki %s. Ispravite unešenu vrijednost za %s, ili idite u  BBS administracioni panel i provjerite da li je staza kukija čitljiva za galeriju.',
  'error_mandatory_field_empty' => 'Polje %s ne može biti prazno - unesite ispravnu vrijednost.',
  'error_no_trailing_slash' => 'Ne smije biti crtica u polju %s.',
  'error_trailing_slash' => 'Mora postojati crtica u polju %s.',
  'error_db_connect' => 'Nemoguće se povezati sa mySQL bazom sa navedenim podacima. Odgovor mySQL-a:',
  'error_db_name' => 'Dok god Galerija ne uspostavi vezu, neće moći naći bazu podataka %s. Provjerite jeste li %s naveli ispravno. Odgovor mySQL-a:',
  'error_prefix_and_table' => '%s i ',
  'error_db_table' => 'Ne mogu pronaći tabelu %s. Provjerite jeste li %s naveli ispravno.',
  'recovery_title' => 'Bridge urednik: hitno obnavljanje',
  'recovery_explanation' => 'Ako želite odavde administrirati BBS integraciju Vaše galerije, prvo se morate prijaviti kao admin. Ako se ne možete prijaviti, jer integracija ne radi kako ste očekivali, možete onemogućiti BBS integraciju sa tom stranom. Unos korisničkog imena i lozinke Vas neće prijaviti, nego će onemogućiti BBS integraciju. Za detaljnije informacije morate pogledati dokumentaciju.',
  'username' => 'Korisničko ime',
  'password' => 'Lozinka',
  'disable_submit' => 'Pošalji',
  'recovery_success_title' => 'Autorizacija uspješna',
  'recovery_success_content' => 'Uspješno ste onemogućili BBS integraciju. Instalacija Vaše galerije je sada pokrenuta u samostalnom modu.',
  'recovery_success_advice_login' => 'Prijavite se kao admin da biste uredili bridge podešavanja i/ili opet omogućili  BBS integraciju.',
  'goto_login' => 'Prijavi se',
  'goto_bridgemgr' => 'Idi u bridge urednika',
  'recovery_failure_title' => 'Autorizacija nije uspjela',
  'recovery_failure_content' => 'Dali ste pogrešne podatke. Morate navesti podatke admin naloga samostalne verzije (postavili ste ga tokom instalacije Galerije).',
  'try_again' => 'pokušaj ponovo',
  'recovery_wait_title' => 'Vrijeme čekanja nije proteklo',
  'recovery_wait_content' => 'Iz sigurnosnih razloga skripta ne dopušta višestruku pogrešnu prijavu, tako da morate čekati da Vam prijava ponovo bude dopuštena.',
  'wait' => 'čekaj',
  'create_redir_file' => 'Kreirajte datoteku za preusmjeravanje (preporučeno)',
  'create_redir_file_explanation' => 'Da biste preusmjerili korisnike nazad u Galeriju, kada su prijavljeni na Vaš  BBS, potrebna Vam je datoteka za preusmjeravanje u Vašem BBS direktoriju. Kada je ta opcija čekirana, bridge urednik će pokušati da napravi tu datoteku za Vas, ili da Vam da kod spreman za copy-paste da biste datoteku kreirali ručno.',
  'browse' => 'pregledaj',
);

// ------------------------------------------------------------------------- //
// File calendar.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('CALENDAR_PHP')) $lang_calendar_php = array(
  'title' => 'Kalendar', //cpg1.4
  'close' => 'zatvori', //cpg1.4
  'clear_date' => 'obriši datum', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
  'miss_param' => 'Nema parametara za \'%s\'operaciju !',
  'unknown_cat' => 'Odabrana kategorija ne postoji u bazi podataka',
  'usergal_cat_ro' => 'Kategorija galerija korisnika se ne može brisati !',
  'manage_cat' => 'Obrada kategorija',
  'confirm_delete' => 'Jeste li sigurni da želite IZBRISATI ovu kategoriju', //js-alert
  'category' => 'Kategorija',
  'operations' => 'Operacije',
  'move_into' => 'Prebaci u',
  'update_create' => 'Osvježi/kreiraj kategoriju',
  'parent_cat' => 'Nadređena kategorija',
  'cat_title' => 'Naziv kategorije',
  'cat_thumb' => 'Ikona kategorije',
  'cat_desc' => 'Opis kategorije',
  'categories_alpha_sort' => 'Sortiraj kategorije po abecedi (umjesto uobičajenog načina sortiranja)', //cpg1.4
  'save_cfg' => 'Sačuvaj konfiguraciju', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File admin.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('ADMIN_PHP')) $lang_admin_php = array(
  'title' => 'Konfiguracija', //cpg1.4
  'manage_exif' => 'Uređivanje prikaza exif podataka', //cpg1.4
  'manage_plugins' => 'Uređivanje dodataka', //cpg1.4
  'manage_keyword' => 'Uređivanje ključnih riječi', //cpg1.4
  'restore_cfg' => 'Povrati osnovne postavke',
  'save_cfg' => 'Sačuvaj novu konfiguraciju',
  'notes' => 'Bilješke',
  'info' => 'Informacije',
  'upd_success' => 'Konfiguracija je osvježena',
  'restore_success' => 'Osnovne postavke galerije su vraćene',
  'name_a' => 'Naziv uzlazno',
  'name_d' => 'Naziv silazno',
  'title_a' => 'Naslov uzlazno',
  'title_d' => 'Naslov silazno',
  'date_a' => 'Datum uzlazno',
  'date_d' => 'Datum silazno',
  'pos_a' => 'Pozicija uzlazno', //cpg1.4
  'pos_d' => 'Pozicija silazno', //cpg1.4
  'th_any' => 'Max aspekt',
  'th_ht' => 'Visina',
  'th_wd' => 'Širina',
  'label' => 'oznaka',
  'item' => 'stavka',
  'debug_everyone' => 'Svi',
  'debug_admin' => 'Samo administrator',
  'no_logs'=> 'Isključeno', //cpg1.4
  'log_normal'=> 'Normalno', //cpg1.4
  'log_all' => 'Sve', //cpg1.4
  'view_logs' => 'Prikaz događaja', //cpg1.4
  'click_expand' => 'Kliknite na ime za više podataka', //cpg1.4
  'expand_all' => 'Raširi sve', //cpg1.4
  'notice1' => '(*) Te postavke ne smijete sačuvatu ako već imate slika u galeriji.', //cpg1.4 - (relocated)
  'notice2' => '(**) Kad sačuvate te postavke, one će se odnositi samo na slike koje dodate ubuduće. Savjet je da te postavke ne mijenjate ako već imate slika u galeriji. Možete, ipak, izvršiti izmjene na postojećim slikama upotrebom &quot;<a href="util.php">Alati</a> (promjena veličine)&quot; u administrativnom meniju.', //cpg1.4 - (relocated)
  'notice3' => '(***) Log podaci se zapisuju na engleskom.', //cpg1.4 - (relocated)
  'bbs_disabled' => 'Funkcija je isključena ako se koristi forum', //cpg1.4
  'auto_resize_everyone' => 'Svi', //cpg1.4
  'auto_resize_user' => 'Samo korisnici', //cpg1.4
  'ascending' => 'uzlazno', //cpg1.4
  'descending' => 'silazno', //cpg1.4
);

if (defined('ADMIN_PHP')) $lang_admin_data = array(
  'Osnovne postavke',
  array('Naziv galerije', 'gallery_name', 0, 'f=index.htm&amp;as=admin_general_name&amp;ae=admin_general_name_end'), //cpg1.4
  array('Opis galerije', 'gallery_description', 0, 'f=index.htm&amp;as=admin_general_description&amp;ae=admin_general_description_end'), //cpg1.4
  array('E-mail administratora galerije', 'gallery_admin_email', 0, 'f=index.htm&amp;as=admin_general_email&amp;ae=admin_general_email_end'), //cpg1.4
  array('URL foldera vaše galerije (bez \'index.php\' ili slično na kraju)', 'ecards_more_pic_target', 0, 'f=index.htm&amp;as=admin_general_coppermine-url&amp;ae=admin_general_coppermine-url_end'), //cpg1.4
  array('URL početne stranice', 'home_target', 0, 'f=index.htm&amp;as=admin_general_home-url&amp;ae=admin_general_home-url_end'), //cpg1.4
  array('Dopusti ZIP-preuzimanje omiljenih slika', 'enable_zipdownload', 1, 'f=index.htm&amp;as=admin_general_zip-download&amp;ae=admin_general_zip-download_end'), //cpg1.4
  array('Vremenska zona u odnosu na GMT (trenutno vrijeme: ' . localised_date(-1, $comment_date_fmt) . ')','time_offset',0, 'f=index.htm&amp;as=admin_general_time-offset&amp;ae=admin_general_time-offset_end&amp;top=1'), //cpg1.4
  array('Omogući šifrirane lozinke (ova radnja je nepovratna)','enable_encrypted_passwords',1, 'f=index.htm&amp;as=admin_general_encrypt_password_start&amp;ae=admin_general_encrypt_password_end&amp;top=1'), // cpg 1.4
  array('Prikaz ikone za pomoć (pomoć samo na engleskom)','enable_help',9, 'f=index.htm&amp;as=admin_general_help&amp;ae=admin_general_help_end'), //cpg1.4
  array('Omogući klik na ključne riječi u pretrazi','clickable_keyword_search',14, 'f=index.htm&amp;as=admin_general_keywords_start&amp;ae=admin_general_keywords_end'), //cpg1.4
  array('Omogući dodatke', 'enable_plugins', 12, 'f=index.htm&amp;as=admin_general_enable-plugins&amp;ae=admin_general_enable-plugins_end'),  //cpg1.4
  array('Omogući zabranu zasebnih (non-routable) IP adresa', 'ban_private_ip', 1,  'f=index.htm&amp;as=admin_general_private-ip&amp;ae=admin_general_private-ip_end'), //cpg1.4
  array('Pregledni interfejs pri paketnom dodavanju slika', 'browse_batch_add', 1, 'f=index.htm&amp;as=admin_general_browsable_batch_add&amp;ae=admin_general_browsable_batch_add_end'), //cpg1.4

  'Jezik i kodiranje znakova',
  array('Jezik', 'lang', 5, 'f=index.htm&amp;as=admin_language_language&amp;ae=admin_language_language_end'), //cpg1.4
  array('Da upotrebim engleski izraz ako nema prevoda?', 'language_fallback', 1, 'f=index.htm&amp;as=admin_language_fallback&amp;ae=admin_language_fallback_end'), //cpg1.4
  array('Kodna tabela', 'charset', 4, 'f=index.htm&amp;as=admin_language_charset&amp;ae=admin_language_charset_end'), //cpg1.4
  array('Prikaz liste jezika', 'language_list', 1, 'f=index.htm&amp;as=admin_language_list&amp;ae=admin_language_list_end'), //cpg1.4
  array('Prikaz zastavica za izbor jezika', 'language_flags', 8, 'f=index.htm&amp;as=admin_language_flags&amp;ae=admin_language_flags_end&amp;top=1'), //cpg1.4
  array('Prikaži tipku &quot;povrati jezik&quot; pri izboru jezika', 'language_reset', 1, 'f=index.htm&amp;as=admin_language_reset&amp;ae=admin_language_reset_end&amp;top=1'), //cpg1.4
  //array('Display previous/next on tabbed pages', 'previous_next_tab', 1), //cpg1.4

  'Postavke izgleda galerije - teme',
  array('Izgled galerije', 'theme', 6, 'f=index.htm&amp;as=admin_theme_theme&amp;ae=admin_theme_theme_end'), //cpg1.4
  array('Prikaži listu tema', 'theme_list', 1, 'f=index.htm&amp;as=admin_theme_theme_list&amp;ae=admin_theme_theme_list_end'), //cpg1.4
  array('Prikaži tipku &quot;povrati temu&quot; pri izboru teme', 'theme_reset', 1, 'f=index.htm&amp;as=admin_theme_theme_reset&amp;ae=admin_theme_theme_reset_end'), //cpg1.4
  array('Prikaži ČPP (često postavljana pitanja)', 'display_faq', 1, 'f=index.htm&amp;as=admin_theme_faq&amp;ae=admin_theme_faq_end'), //cpg1.4
  array('Ime korisnikovog linka u meniju', 'custom_lnk_name', 0,'f=index.htm&amp;as=admin_theme_custom_lnk_name&amp;ae=admin_theme_custom_lnk_name_end'), //cpg1.4
  array('URL korisnikovog linka u meniju', 'custom_lnk_url', 0,'f=index.htm&amp;as=admin_language_custom_lnk_url&amp;ae=admin_language_custom_lnk_url_end'), //cpg1.4
  array('Prikaži pomoć za bbcode', 'show_bbcode_help', 1, 'f=index.htm&amp;as=admin_theme_bbcode&amp;ae=admin_theme_bbcode_end&amp;top=1'), //cpg1.4
  array('Označi teme koje su definisane XHTML-om i CSS-om','vanity_block',1, 'f=index.htm&amp;as=vanity_block&amp;ae=vanity_block_end'), //cpg1.4
  array('Staza do korisnikovog zaglavlja na vrhu', 'custom_header_path', 0, 'f=index.htm&amp;as=admin_theme_include_path_start&amp;ae=admin_theme_include_path_end'), //cpg1.4
  array('Staza do korisnikovog zaglavlja na dnu', 'custom_footer_path', 0, 'f=index.htm&amp;as=admin_theme_include_path_start&amp;ae=admin_theme_include_path_end'), //cpg1.4

  'Postavke za prikaz albuma',
  array('Širina glavne tabele (pikseli ili %)', 'main_table_width', 0, 'f=index.htm&amp;as=admin_album_table-width&amp;ae=admin_album_table-width_end'), //cpg1.4
  array('Broj nivoa za prikaz kategorija', 'subcat_level', 0, 'f=index.htm&amp;as=admin_album_category-levels&amp;ae=admin_album_category-levels_end'), //cpg1.4
  array('Broj albuma na strani', 'albums_per_page', 0, 'f=index.htm&amp;as=admin_album_number&amp;ae=admin_album_number_end'), //cpg1.4
  array('Broj stupaca za popis albuma', 'album_list_cols', 0, 'f=index.htm&amp;as=admin_album_columns&amp;ae=admin_album_columns_end'), //cpg1.4
  array('Veličina ikona u pikselima', 'alb_list_thumb_size', 0, 'f=index.htm&amp;as=admin_album_thumbnail-size&amp;ae=admin_album_thumbnail-size_end'), //cpg1.4
  array('Sadržaj glavne stranice', 'main_page_layout', 0, 'f=index.htm&amp;as=admin_album_list_content&amp;ae=admin_album_list_content_end'), //cpg1.4
  array('Pokaži ikone albuma prvog nivoa u kategorijama','first_level',1, 'f=index.htm&amp;as=admin_album_first-level_thumbs&amp;ae=admin_album_first-level_thumbs_end'), //cpg1.4
  array('Sortiraj kategorije po abecedi','categories_alpha_sort',1, 'f=index.htm&amp;as=admin_album_list_alphasort_start&amp;ae=admin_album_list_alphasort_end'), //cpg1.4
  array('Prikaz broja povezanih slika','link_pic_count',1, 'f=index.htm&amp;as=admin_album_linked_files_start&amp;ae=admin_album_linked_files_end'), //cpg1.4

  'Postavke za prikaz ikona',
  array('Broj stupaca na stranici sa ikonama', 'thumbcols', 0, 'f=index.htm&amp;as=admin_thumbnail_columns&amp;ae=admin_thumbnail_columns_end'), //cpg1.4
  array('Broj redova na stranici sa ikonama', 'thumbrows', 0, 'f=index.htm&amp;as=admin_thumbnail_rows&amp;ae=admin_thumbnail_rows_end'), //cpg1.4
  array('Maksimalan broj traka za prikaz', 'max_tabs', 10, 'f=index.htm&amp;as=admin_thumbnail_tabs&amp;ae=admin_thumbnail_tabs_end'), //cpg1.4
  array('Prikaži opis slike (pored naslova) ispod ikone', 'caption_in_thumbview', 1, 'f=index.htm&amp;as=admin_thumbnail_display_caption&amp;ae=admin_thumbnail_display_caption_end'), //cpg1.4
  array('Prikaži broj pregleda ispod ikone', 'views_in_thumbview', 1, 'f=index.htm&amp;as=admin_thumbnail_display_views&amp;ae=admin_thumbnail_display_views_end'), //cpg1.4
  array('Prikaži broj komentara ispod ikone', 'display_comment_count', 1, 'f=index.htm&amp;as=admin_thumbnail_display_comments&amp;ae=admin_thumbnail_display_comments_end'), //cpg1.4
  array('Prikaži ime pošiljaoca ispod ikone', 'display_uploader', 1, 'f=index.htm&amp;as=admin_thumbnail_display_uploader&amp;ae=admin_thumbnail_display_uploader_end'), //cpg1.4
  //array('Display name of admin uploaders below the thumbnail', 'display_admin_uploader', 1, 'f=index.htm&amp;as=admin_thumbnail_display_admin_uploader&amp;ae=admin_thumbnail_display_admin_uploader_end'), //cpg1.4
  array('Prikaži ime datoteke ispod ikone', 'display_filename', 1, 'f=index.htm&amp;as=admin_thumbnail_display_filename&amp;ae=admin_thumbnail_display_filename_end'), //cpg1.4
  //array('Display album description', 'alb_desc_thumb', 1, 'f=index.htm&amp;as=admin_thumbnail_display_description&amp;ae=admin_thumbnail_display_description_end'), //cpg1.4
  array('Osnovni poredak za slike', 'default_sort_order', 3, 'f=index.htm&amp;as=admin_thumbnail_default_sortorder&amp;ae=admin_thumbnail_default_sortorder_end'), //cpg1.4
  array('Najmanji broj ocjena za sliku da se uvrsti na listu \'Najbolje ocijenjene\'', 'min_votes_for_rating', 0, 'f=index.htm&amp;as=admin_thumbnail_minimum_votes&amp;ae=admin_thumbnail_minimum_votes_end'), //cpg1.4

  'Prikaz slika', //cpg1.4
  array('Širina tabele za prikaz slika (pikseli ili %)', 'picture_table_width', 0, 'f=index.htm&amp;as=admin_image_comment_table-width&amp;ae=admin_image_comment_table-width_end'), //cpg1.4
  array('Informacija  o slici se vidi (osnovna postavka)', 'display_pic_info', 1, 'f=index.htm&amp;as=admin_image_comment_info_visible&amp;ae=admin_image_comment_info_visible_end'), //cpg1.4
  array('Maksimalna dužina opisa slike', 'max_img_desc_length', 0, 'f=index.htm&amp;as=admin_image_comment_descr_length&amp;ae=admin_image_comment_descr_length_end'), //cpg1.4
  array('Maksimalni broj znakova u riječi', 'max_com_wlength', 0, 'f=index.htm&amp;as=admin_image_comment_chars_per_word&amp;ae=admin_image_comment_chars_per_word_end'), //cpg1.4
  array('Prikaži filmsku traku s ikonama', 'display_film_strip', 1, 'f=index.htm&amp;as=admin_image_comment_filmstrip_toggle&amp;ae=admin_image_comment_filmstrip_toggle_end'), //cpg1.4
  array('Prikaži ime datoteke pod filmskom trakom', 'display_film_strip_filename', 1, 'f=index.htm&amp;as=admin_image_comment_display_film_strip_filename&amp;ae=admin_image_comment_display_film_strip_filename_end'), //cpg1.4
  array('Broj slika u filmskoj traci', 'max_film_strip_items', 0, 'f=index.htm&amp;as=admin_image_comment_filmstrip_number&amp;ae=admin_image_comment_filmstrip_number_end'), //cpg1.4
  array('Slajd šou pauza u milisekundama (1 sekunda = 1000 milisekundi)', 'slideshow_interval', 0, 'f=index.htm&amp;as=admin_image_comment_slideshow_interval&amp;ae=admin_image_comment_slideshow_interval_end'), //cpg1.4

  'Postavke za komentare', //cpg1.4
  array('Filtriraj ružne riječi u komentarima', 'filter_bad_words', 1, 'f=index.htm&amp;as=admin_image_comment_bad_words&amp;ae=admin_image_comment_bad_words_end'), //cpg1.4
  array('Dopusti smješka u komentarima', 'enable_smilies', 1, 'f=index.htm&amp;as=admin_image_comment_smilies&amp;ae=admin_image_comment_smilies_end'), //cpg1.4
  array('Dopusti nekoliko  uzastopnih komentara o nekoj slici od istog korisnika', 'disable_comment_flood_protect', 1, 'f=index.htm&amp;as=admin_image_comment_flood&amp;ae=admin_image_comment_flood_end'), //cpg1.4
  array('Maksimalni broj linija u komentaru', 'max_com_lines', 0, 'f=index.htm&amp;as=admin_image_comment_lines&amp;ae=admin_image_comment_lines_end'), //cpg1.4
  array('Maksimalna dužina komentara', 'max_com_size', 0, 'f=index.htm&amp;as=admin_image_comment_length&amp;ae=admin_image_comment_length_end'), //cpg1.4
  array('Obavijesti administratora o novom komentaru', 'email_comment_notification', 1, 'f=index.htm&amp;as=admin_image_comment_admin_notify&amp;ae=admin_image_comment_admin_notify_end'), //cpg1.4
  array('Sortiranje komentara', 'comments_sort_descending', 17, 'f=index.htm&amp;as=admin_comment_sort_start&amp;ae=admin_comment_sort_end'), //cpg1.4
  array('Oznaka za anonimni komentar', 'comments_anon_pfx', 0, 'f=index.htm&amp;as=comments_anon_pfx&amp;ae=comments_anon_pfx_end'), //cpg1.4

  'Postavke slika i ikona',
  array('Kvalitet JPEG slika', 'jpeg_qual', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_jpeg_quality&amp;ae=admin_picture_thumbnail_jpeg_quality_end'), //cpg1.4
  array('Maksimalna veličina ikone <a href="#notice2" class="clickable_option">**</a>', 'thumb_width', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max-dimension&amp;ae=admin_picture_thumbnail_max-dimension_end'), //cpg1.4
  array('Koristi dimenziju ( širinu, visinu ili veću od obje ) <a href="#notice2" class="clickable_option">**</a>', 'thumb_use', 7, 'f=index.htm&amp;as=admin_picture_thumbnail_use-dimension&amp;ae=admin_picture_thumbnail_use-dimension_end'), //cpg1.4
  array('Kreiraj srednjevelike slike','make_intermediate',1, 'f=index.htm&amp;as=admin_picture_thumbnail_intermediate_toggle&amp;ae=admin_picture_thumbnail_intermediate_toggle_end'), //cpg1.4
  array('Maksimalna širina ili visina srednjevelikih slika/videa <a href="#notice2" class="clickable_option">**</a>', 'picture_width', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_intermediate_dimension&amp;ae=admin_picture_thumbnail_intermediate_dimension_end'), //cpg1.4
  array('Maksimalna veličina za poslate dokumente (KB)', 'max_upl_size', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max_upload_size&amp;ae=admin_picture_thumbnail_max_upload_size_end'), //cpg1.4
  array('Maksimalna širina ili visina za poslate slike/video (pikseli)', 'max_upl_width_height', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max_upload_dimension&amp;ae=admin_picture_thumbnail_max_upload_dimension_end'), //cpg1.4
  array('Automatski smanji slike koje su veće od maksimalne širine ili visine', 'auto_resize', 16, 'f=index.htm&amp;as=admin_picture_thumbnail_auto-resize&amp;ae=admin_picture_thumbnail_auto-resize_end'), //cpg1.4

  'Dodatne postavke za datoteke i ikone',
  array('Albumi mogu biti privatni (Bilješka: ako prebacite sa DA na NE, svi trenutno privatni albumi će postati javni)', 'allow_private_albums', 1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_private_toggle&amp;ae=admin_picture_thumb_advanced_private_toggle_end'), //cpg1.4
  array('Prikaži ikonu privatnog albuma neprijavljenom korisniku','show_private',1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_private_icon_show&amp;ae=admin_picture_thumb_advanced_private_icon_show_end'), //cpg1.4
  array('Zabranjeni znakovi u nazivima slika', 'forbiden_fname_char',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_filename_forbidden_chars&amp;ae=admin_picture_thumb_advanced_filename_forbidden_chars_end'), //cpg1.4
  //array('Accepted file extensions for uploaded pictures', 'allowed_file_extensions',0, 'f=index.htm&amp;as=&amp;ae=_end'), //cpg1.4
  array('Dopušteni tipovi slika', 'allowed_img_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_pic_extensions&amp;ae=admin_picture_thumb_advanced_pic_extensions_end'), //cpg1.4
  array('Dopušteni tipovi filmova', 'allowed_mov_types',0, 'f=index.htm&amp;as=admin_thumbs_advanced_movie&amp;ae=admin_thumbs_advanced_movie_end'), //cpg1.4
  array('Autostart filmova', 'media_autostart',1, 'f=index.htm&amp;as=admin_movie_autoplay&amp;ae=admin_movie_autoplay_end'), //cpg1.4
  array('Dopušteni audio tipovi', 'allowed_snd_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_audio_extensions&amp;ae=admin_picture_thumb_advanced_audio_extensions_end'), //cpg1.4
  array('Dopušteni tipovi dokumenata', 'allowed_doc_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_doc_extensions&amp;ae=admin_picture_thumb_advanced_doc_extensions_end'), //cpg1.4
  array('Način mijenjanja veličine slika','thumb_method',2, 'f=index.htm&amp;as=admin_picture_thumb_advanced_resize_method&amp;ae=admin_picture_thumb_advanced_resize_method_end'), //cpg1.4
  array('Staza do programa ImageMagick (primjer /usr/bin/X11/)', 'impath', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_im_path&amp;ae=admin_picture_thumb_advanced_im_path_end'), //cpg1.4
  //array('Allowed image types (only valid for ImageMagick)', 'allowed_img_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_allowed_imagetypes&amp;ae=admin_picture_thumb_advanced_allowed_imagetypes_end'), //cpg1.4
  array('Komandne opcije za ImageMagick', 'im_options', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_im_commandline&amp;ae=admin_picture_thumb_advanced_im_commandline_end'), //cpg1.4
  array('Pročitaj EXIF podatke kod JPEG dokumenata', 'read_exif_data', 13, 'f=index.htm&amp;as=admin_picture_thumb_advanced_exif&amp;ae=admin_picture_thumb_advanced_exif_end'), //cpg1.4
  array('Pročitaj IPTC podatke kod JPEG dokumenata', 'read_iptc_data', 1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_iptc&amp;ae=admin_picture_thumb_advanced_iptc_end'), //cpg1.4
  array('Direktorij za albume <a href="#notice1" class="clickable_option">*</a>', 'fullpath', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_albums_dir&amp;ae=admin_picture_thumb_advanced_albums_dir_end'), //cpg1.4
  array('Direktorij za slike korisnika <a href="#notice1" class="clickable_option">*</a>', 'userpics', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_userpics_dir&amp;ae=admin_picture_thumb_advanced_userpics_dir_end'), //cpg1.4
  array('Prefix za srednjevelike slike <a href="#notice1" class="clickable_option">*</a>', 'normal_pfx', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_intermediate_prefix&amp;ae=admin_picture_thumb_advanced_intermediate_prefix_end'), //cpg1.4
  array('Prefix za ikone <a href="#notice1" class="clickable_option">*</a>', 'thumb_pfx', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_thumbs_prefix&amp;ae=admin_picture_thumb_advanced_thumbs_prefix_end'), //cpg1.4
  array('Osnovna postavka za direktorije', 'default_dir_mode', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_chmod_folder&amp;ae=admin_picture_thumb_advanced_chmod_folder_end'), //cpg1.4
  array('Osnovna postavka za dokumente', 'default_file_mode', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_chmod_files&amp;ae=admin_picture_thumb_advanced_chmod_files_end'), //cpg1.4

  'Postavke korisnika',
  array('Dopusti registraciju novih korisnika', 'allow_user_registration', 1, 'f=index.htm&amp;as=admin_allow_registration&amp;ae=admin_allow_registration_end'), //cpg1.4
  array('Dopusti pristup neprijavljenim korisnicima', 'allow_unlogged_access', 1, 'f=index.htm&amp;as=admin_allow_unlogged_access&amp;ae=admin_allow_unlogged_access_end'), //cpg1.4
  array('Registracija korisnika zahtijeva potvrdu e-mailom', 'reg_requires_valid_email', 1, 'f=index.htm&amp;as=admin_registration_verify&amp;ae=admin_registration_verify_end'), //cpg1.4
  array('Obavijesti administratora o registraciji e-mailom', 'reg_notify_admin_email', 1, 'f=index.htm&amp;as=admin_registration_notify&amp;ae=admin_registration_notify_end'), //cpg1.4
  array('Registracija zahtijeva odobrenje administratora', 'admin_activation', 1, 'f=index.htm&amp;as=admin_activation&amp;ae=admin_activation_end'),  //cpg1.4
  array('Dopusti da dva korisnika imaju istu e-mail adresu', 'allow_duplicate_emails_addr', 1, 'f=index.htm&amp;as=admin_allow_duplicate_emails_addr&amp;ae=admin_allow_duplicate_emails_addr_end'), //cpg1.4
  array('Obavijesti administratora o slikama koje čekaju na odobrenje', 'upl_notify_admin_email', 1, 'f=index.htm&amp;as=admin_approval_notify&amp;ae=admin_approval_notify_end'), //cpg1.4
  array('Dopusti prijavljenim korisnicima da vide popis korisnika', 'allow_memberlist', 1, 'f=index.htm&amp;as=admin_user_memberlist&amp;ae=admin_user_memberlist_end'), //cpg1.4
  array('Dopusti korisnicima da promijene svoju email adresu u profilu', 'allow_email_change', 1, 'f=index.htm&amp;as=admin_user_allow_email_change&amp;ae=admin_user_allow_email_change_end'), //cpg1.4
  array('Dopusti korisnicima da kontrolišu svoje slike u javnim galerijama', 'users_can_edit_pics', 1, 'f=index.htm&amp;as=admin_user_editpics_public_start&amp;ae=admin_user_editpics_public_end'), //cpg1.4
  array('Broj neuspješnih pokušaja prijave do privremene zabrane (da bi se spriječili napadi)', 'login_threshold', 0, 'f=index.htm&amp;as=admin_user_login_start&amp;ae=admin_user_login_end'), //cpg1.4
  array('Trajanje privremene zabrane nakon neuspješnih prijava', 'login_expiry', 0, 'f=index.htm&amp;as=admin_user_login_start&amp;ae=admin_user_login_end'), //cpg1.4
  array('Dopusti poruke administratoru', 'report_post', 1, 'f=index.htm&amp;as=admin_user_enable_report&amp;ae=admin_user_enable_report_end'),  //cpg1.4

// custom profile fields,  //cpg1.4
  'Dodatna polja za profil korisnika (ostavi prazno ako je nepotrebno).
  Upotrebi Profile 6 za duge unose, kao npr. biografija', //cpg1.4
  array('Profil 1', 'user_profile1_name', 0, 'f=index.htm&amp;as=admin_custom&amp;ae=admin_custom_end'), //cpg1.4
  array('Profil 2', 'user_profile2_name', 0), //cpg1.4
  array('Profil 3', 'user_profile3_name', 0), //cpg1.4
  array('Profil 4', 'user_profile4_name', 0), //cpg1.4
  array('Profil 5', 'user_profile5_name', 0), //cpg1.4
  array('Profil 6', 'user_profile6_name', 0), //cpg1.4

  'Dodatna polja za upis informacija o slici (ostavi prazno ako je nepotrebno)',
  array('Polje 1', 'user_field1_name', 0, 'f=index.htm&amp;as=admin_custom_image&amp;ae=admin_custom_image_end'), //cpg1.4
  array('Polje 2', 'user_field2_name', 0),
  array('Polje 3', 'user_field3_name', 0),
  array('Polje 4', 'user_field4_name', 0),

  'Postavke kukija',
  array('Ime za kuki', 'cookie_name', 0, 'f=index.htm&amp;as=admin_cookie_name&amp;ae=admin_cookie_name_end'), //cpg1.4
  array('Staza do kukija', 'cookie_path', 0, 'f=index.htm&amp;as=admin_cookie_path&amp;ae=admin_cookie_path_end'), //cpg1.4

  'Postavke Email-a  (ovdje se obično ništa ne mijenja; ostavi sva polja prazna ako nisi siguran)', //cpg1.4
  array('SMTP poslužitelj (ako je prazno, upotrbljava se sendmail)', 'smtp_host', 0, 'f=index.htm&amp;as=admin_email&amp;ae=admin_email_end'), //cpg1.4
  array('SMTP korisničko ime', 'smtp_username', 0), //cpg1.4
  array('SMTP lozinka', 'smtp_password', 0), //cpg1.4

  'Logovi i statistika', //cpg1.4
  array('Način zapisivanja logova <a href="#notice3" class="clickable_option">***</a>', 'log_mode', 11, 'f=index.htm&amp;as=admin_logging_log_mode&amp;ae=admin_logging_log_mode_end'), //cpg1.4
  array('Logiranje slanja e-razglednica', 'log_ecards', 1, 'f=index.htm&amp;as=admin_general_log_ecards&amp;ae=admin_general_log_ecards_end'), //cpg1.4
  array('Logiraj detaljnu statistiku o glasanju','vote_details',1, 'f=index.htm&amp;as=admin_logging_votedetails&amp;ae=admin_logging_votedetails_end'), //cpg1.4
  array('Logiraj detaljnu statistiku o posjetama','hit_details',1, 'f=index.htm&amp;as=admin_logging_hitdetails&amp;ae=admin_logging_hitdetails_end'), //cpg1.4

  'Održavanje galerije', //cpg1.4
  array('Omogući debug mode', 'debug_mode', 9, 'f=index.htm&amp;as=debug_mode&amp;ae=debug_mode_end'), //cpg1.4
  array('Prikaži obavijesti u debug modu', 'debug_notice', 1, 'f=index.htm&amp;as=admin_misc_debug_notices&amp;ae=admin_misc_debug_notices_end'), //cpg1.4
  array('Galerija nije u funkciji', 'offline', 1, 'f=index.htm&amp;as=admin_general_offline&amp;ae=admin_general_offline_end'), //cpg1.4
);


// ------------------------------------------------------------------------- //
// File db_ecard.php
// ------------------------------------------------------------------------- //

if (defined('DB_ECARD_PHP')) $lang_db_ecard_php = array(
  'title' => 'Poslane e-razglednice',
  'ecard_sender' => 'Pošiljalac',
  'ecard_recipient' => 'Primalac',
  'ecard_date' => 'Datum',
  'ecard_display' => 'Prikaži e-razglednicu',
  'ecard_name' => 'Ime',
  'ecard_email' => 'Email',
  'ecard_ip' => 'IP #',
  'ecard_ascending' => 'uzlazno',
  'ecard_descending' => 'silazno',
  'ecard_sorted' => 'Sortirano',
  'ecard_by_date' => 'po datumu',
  'ecard_by_sender_name' => 'po pošiljaocu',
  'ecard_by_sender_email' => 'po email-u pošiljaoca',
  'ecard_by_sender_ip' => 'po IP adresi pošiljaoca',
  'ecard_by_recipient_name' => 'po primaocu',
  'ecard_by_recipient_email' => 'po email-u primaoca',
  'ecard_number' => 'prikazani zapisi od %s do %s od %s',
  'ecard_goto_page' => 'idi na stranicu',
  'ecard_records_per_page' => 'Zapisa po stranici',
  'check_all' => 'Označi sve',
  'uncheck_all' => 'Nemoj označiti ništa',
  'ecards_delete_selected' => 'Briši označene e-razglednice',
  'ecards_delete_confirm' => 'Jeste li sigurni da želite izbrisati zapise? Označite kućicu!',
  'ecards_delete_sure' => 'Siguran sam',
);


// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
  'empty_name_or_com' => 'Trebate upisati svoje ime i komentar',
  'com_added' => 'Vaš komentar je dodan',
  'alb_need_title' => 'Trebate upisati naziv albuma !',
  'no_udp_needed' => 'Nije potrebno osvježavanje.',
  'alb_updated' => 'Album je osvježen',
  'unknown_album' => 'Odabrani album ne postoji ili nemate dopuštenje za prebacivanje slika u ovaj album',
  'no_pic_uploaded' => 'Nije prebačena nijedna slika !<br /><br />Ako ste sigurno odabrali sliku za prebacivanje, provjerite da li je prebacivanje dozvoljeno...',
  'err_mkdir' => 'Direktorij %s nije kreiran !',
  'dest_dir_ro' => 'U traženi direktorij %s se ne može pisati !',
  'err_move' => 'Nemoguće premjestiti %s u %s !',
  'err_fsize_too_large' => 'Dimenzije slike su prevelike (dozvoljeno je %s x %s) !', //obsolete since cpg1.3 - consider removal in cpg1.4 once upload.php has been overhauled
  'err_imgsize_too_large' => 'Veličina dokumenta je prevelika (maksimalna dopuštena je %s KB) !', //obsolete since cpg1.3 - consider removal in cpg1.4 once upload.php has been overhauled
  'err_invalid_img' => 'Poslata slika nije u dozvoljenom formatu !',
  'allowed_img_types' => 'Možete poslati samo %s slike.',
  'err_insert_pic' => 'Dokument \'%s\' se ne može dodati u album ',
  'upload_success' => 'Vaša slika je uspješno prebačena.<br /><br />Biće vidljiva nakon odobrenja administratora.',
  'notify_admin_email_subject' => '%s - Obavijest o poslatoj slici',
  'notify_admin_email_body' => 'Na odobrenje čeka slika koju je dodao %s. Posjetite %s',
  'info' => 'Informacije',
  'com_added' => 'Komentar dodan',
  'alb_updated' => 'Album osvježen',
  'err_comment_empty' => 'Komentar je prazan !',
  'err_invalid_fext' => 'Prihvaćaju se samo dokumenti sa slijedećim ekstenzijama : <br /><br />%s.',
  'no_flood' => 'Žao mi je, ali Vi ste već autor posljednjeg komentara za ovu sliku<br /><br />Uredite komentar kojeg ste napisali, ako ga želite izmijeniti',
  'redirect_msg' => 'Preusmjereni ste.<br /><br /><br />Kliknite \'NAPRIJED\' ako se stranica automatski ne obnovi',
  'upl_success' => 'Vaše slike su uspješno dodane',
  'email_comment_subject' => 'Dodani komentar u galeriju',
  'email_comment_body' => 'Neko je napisao novi komentar. Pogledajte ga na',
  'album_not_selected' => 'Album nije izabran', //cpg1.4
  'com_author_error' => 'Registrovani korisnik koristi taj nik, prijavi se ili izaberi drugi', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
  'caption' => 'Naslov',
  'fs_pic' => 'slika u punoj veličini',
  'del_success' => 'Uspješno izbrisano',
  'ns_pic' => 'normalna veličina slike',
  'err_del' => 'ne može se izbrisati',
  'thumb_pic' => 'ikona',
  'comment' => 'komentar',
  'im_in_alb' => 'slika u albumu',
  'alb_del_success' => 'Album &laquo;%s&raquo; izbrisan', //cpg1.4
  'alb_mgr' => 'Uređivanje albuma',
  'err_invalid_data' => 'Pogrešni podaci u \'%s\'',
  'create_alb' => 'Kreiram album \'%s\'',
  'update_alb' => 'Osvježavam album \'%s\' s naslovom \'%s\' i indeksom \'%s\'',
  'del_pic' => 'Izbriši sliku',
  'del_alb' => 'Izbriši album',
  'del_user' => 'Izbriši korisnika',
  'err_unknown_user' => 'Odabrani korisnik ne postoji !',
  'err_empty_groups' => 'Grupa ne postoji ili je prazna!', //cpg1.4
  'comment_deleted' => 'Komentar je uspješno izbrisan',
  'npic' => 'Slike', //cpg1.4
  'pic_mgr' => 'Uređivanje slika', //cpg1.4
  'update_pic' => 'Osvježavam sliku \'%s\' s naslovom \'%s\' i indeksom \'%s\'', //cpg1.4
  'username' => 'Korisničko ime', //cpg1.4
  'anonymized_comments' => '%s anonimnih komentara', //cpg1.4
  'anonymized_uploads' => '%s anonimno poslatih slika', //cpg1.4
  'deleted_comments' => '%s izbrisanih komentara', //cpg1.4
  'deleted_uploads' => '%s izbrisanih poslatih slika', //cpg1.4
  'user_deleted' => 'korisnik %s izbrisan', //cpg1.4
  'activate_user' => 'Aktiviraj korisnika', //cpg1.4
  'user_already_active' => 'Nalog je već aktiviran', //cpg1.4
  'activated' => 'Aktiviran', //cpg1.4
  'deactivate_user' => 'Deaktiviraj korisnika', //cpg1.4
  'user_already_inactive' => 'Nalog je već deaktiviran', //cpg1.4
  'deactivated' => 'Deaktiviran', //cpg1.4
  'reset_password' => 'Reset lozinke', //cpg1.4
  'password_reset' => 'Lozinka resetovana u %s', //cpg1.4
  'change_group' => 'Promijeni osnovnu grupu', //cpg1.4
  'change_group_to_group' => 'Mijenjam iz %s u %s', //cpg1.4
  'add_group' => 'Dodaj sekundarnu grupu', //cpg1.4
  'add_group_to_group' => 'Dodavanje korisnika %s u grupu %s. Korisnik je sada član primarne grupe %s i član sekundarne grupe %s.', //cpg1.4
  'status' => 'Status', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File displayecard.php
// ------------------------------------------------------------------------- //

if (defined('DISPLAYECARD_PHP')) {

$lang_displayecard_php = array(
  'invalid_data' => 'Podaci za prikaz e-razglednice su oštećeni od strane vašeg mail programa.', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File displayimage.php
// ------------------------------------------------------------------------- //

if (defined('DISPLAYIMAGE_PHP')){

$lang_display_image_php = array(
  'confirm_del' => 'Jeste li sigurni da želite IZBRISATI ovu sliku ? \\nKomentari o njoj će takođe biti izbrisani.', //js-alert
  'del_pic' => 'IZBRIŠI OVU SLIKU',
  'size' => '%s x %s piksela',
  'views' => '%s puta',
  'slideshow' => 'Slajd šou',
  'stop_slideshow' => 'ZAUSTAVI SLAJD ŠOU',
  'view_fs' => 'Klikni za sliku u punoj veličini',
  'edit_pic' => 'Uredu opis', //cpg1.4
  'crop_pic' => 'Smanji i rotiraj',
  'set_player' => 'Promijeni plejer',
);

$lang_picinfo = array(
  'title' =>'Podaci o slici',
  'Filename' => 'Naziv dokumenta',
  'Album name' => 'Naziv albuma',
  'Rating' => 'Ocjena (br. glasova:%s)',
  'Keywords' => 'Ključne riječi',
  'File Size' => 'Veličina dokumenta',
  'Date Added' => 'Datum dodavanja', //cpg1.4
  'Dimensions' => 'Dimenzije',
  'Displayed' => 'Prikazana',
  'URL' => 'URL', //cpg1.4
  'Make' => 'Proizvođač', //cpg1.4
  'Model' => 'Model fotoaparata', //cpg1.4
  'DateTime' => 'Datum i vrijeme', //cpg1.4
  'ISOSpeedRatings'=>'Ocjena ISO brzine', //cpg1.4
  'MaxApertureValue' => 'Maks. otvor blende', //cpg1.4
  'FocalLength' => 'Dužina žarišta', //cpg1.4
  'Comment' => 'Komentar',
  'addFav'=>'Dodaj u Omiljene slike',
  'addFavPhrase'=>'Omiljene slike',
  'remFav'=>'Ukloni iz Omiljenih slika',
  'iptcTitle'=>'IPTC Naslov',
  'iptcCopyright'=>'IPTC Copyright',
  'iptcKeywords'=>'IPTC ključne riječi',
  'iptcCategory'=>'IPTC kategorija',
  'iptcSubCategories'=>'IPTC podkategorija',
  'ColorSpace' => 'Kolorit', //cpg1.4
  'ExposureProgram' => 'Program ekspozicije', //cpg1.4
  'Flash' => 'Blic', //cpg1.4
  'MeteringMode' => 'Način mjerenja', //cpg1.4
  'ExposureTime' => 'Vrijeme ekspozicije', //cpg1.4
  'ExposureBiasValue' => 'Nastavak ekspozicije', //cpg1.4
  'ImageDescription' => ' Opis slike', //cpg1.4
  'Orientation' => 'Orjentacija', //cpg1.4
  'xResolution' => 'X rezolucija', //cpg1.4
  'yResolution' => 'Y rezolucija', //cpg1.4
  'ResolutionUnit' => 'Jedinica rezolucije', //cpg1.4
  'Software' => 'Softver', //cpg1.4
  'YCbCrPositioning' => 'Položaj YCbCr', //cpg1.4
  'ExifOffset' => 'Exif Offset', //cpg1.4
  'IFD1Offset' => 'IFD1 Offset', //cpg1.4
  'FNumber' => 'FBroj', //cpg1.4
  'ExifVersion' => 'Exif verzija', //cpg1.4
  'DateTimeOriginal' => 'Originalni datum i vrijeme', //cpg1.4
  'DateTimedigitized' => 'Datum i vrijeme digitalizacije', //cpg1.4
  'ComponentsConfiguration' => 'Postavke komponenti', //cpg1.4
  'CompressedBitsPerPixel' => 'Kompresovanih bita po pikselu', //cpg1.4
  'LightSource' => 'Izvor svjetlosti', //cpg1.4
  'ISOSetting' => 'ISO postavke', //cpg1.4
  'ColorMode' => 'Boja', //cpg1.4
  'Quality' => 'Kvalitet', //cpg1.4
  'ImageSharpening' => 'Oštrina slike', //cpg1.4
  'FocusMode' => 'Fokus', //cpg1.4
  'FlashSetting' => 'Postavke blica', //cpg1.4
  'ISOSelection' => 'Izbor ISO', //cpg1.4
  'ImageAdjustment' => 'Dotjerivanje slike', //cpg1.4
  'Adapter' => 'Adapter', //cpg1.4
  'ManualFocusDistance' => 'Ručna žarišna dužina', //cpg1.4
  'DigitalZoom' => 'Digitalni zum', //cpg1.4
  'AFFocusPosition' => 'Položaj auto fokusa', //cpg1.4
  'Saturation' => 'Zasićenost', //cpg1.4
  'NoiseReduction' => 'Smanjenje šuma', //cpg1.4
  'FlashPixVersion' => 'Verzija Blic piks.', //cpg1.4
  'ExifImageWidth' => 'Exif širina slike', //cpg1.4
  'ExifImageHeight' => 'Exif visina slike', //cpg1.4
  'ExifInteroperabilityOffset' => 'Exif Interoperability Offset', //cpg1.4
  'FileSource' => 'Izvorna datoteka', //cpg1.4
  'SceneType' => 'Tip scene', //cpg1.4
  'CustomerRender' => 'Customer Render', //cpg1.4
  'ExposureMode' => 'Način osvjetljenja', //cpg1.4
  'WhiteBalance' => 'Poravnanje bjeline', //cpg1.4
  'DigitalZoomRatio' => 'Razmjera digitalnog zuma', //cpg1.4
  'SceneCaptureMode' => 'Način hvatanja pozadine', //cpg1.4
  'GainControl' => 'Kontrola uvećanja', //cpg1.4
  'Contrast' => 'Kontrast', //cpg1.4
  'Saturation' => 'Zasičenje', //cpg1.4
  'Sharpness' => 'Oštrina', //cpg1.4
  'ManageExifDisplay' => 'Uređivanje prikaza Exif', //cpg1.4
  'submit' => 'Pošalji', //cpg1.4
  'success' => 'Podaci uspješno osvježeni.', //cpg1.4
  'details' => 'Pojedinosti', //cpg1.4
);

$lang_display_comments = array(
  'OK' => 'U redu',
  'edit_title' => 'Uredi komentar',
  'confirm_delete' => 'Jeste li sigurni da želite izbrisati komentar ?', //js-alert
  'add_your_comment' => 'Dodaj komentar',
  'name'=>'Ime',
  'comment'=>'Komentar',
  'your_name' => 'Anonimus',
  'report_comment_title' => 'Obavijesti administratora o ovom komentaru', //cpg1.4
);

$lang_fullsize_popup = array(
  'click_to_close' => 'Klikni sliku za zatvaranje prozora',
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
  'title' => 'Pošalji e-razglednicu',
  'invalid_email' => '<font color="red"><b>Upozorenje</b></font>: nevažeća e-mail adresa:', //cpg1.4
  'ecard_title' => 'E-razglednica od %s za Vas',
  'error_not_image' => 'Samo se slike mogu poslati kao e-razglednice.',
  'view_ecard' => 'Ako se e-razglednica ne prikaže pravilno, kliknite na ovaj link', //cpg1.4
  'view_ecard_plaintext' => 'Da biste vidjeli e-razglednicu, copy-paste uvaj url u adresnu traku svog preglednika:', //cpg1.4
  'view_more_pics' => 'Kliknite na ovaj link da biste vidjeli više slika !', //cpg1.4
  'send_success' => 'Razglednica je poslata',
  'send_failed' => 'Žao nam je, ali server ne može poslati Vašu razglednicu...',
  'from' => 'Od',
  'your_name' => 'Vaše ime',
  'your_email' => 'Vaša e-mail adresa',
  'to' => 'Za',
  'rcpt_name' => 'Ime primaoca',
  'rcpt_email' => 'E-mail adresa primaoca',
  'greetings' => 'Pozdrav', //cpg1.4
  'message' => 'Poruka', //cpg1.4
  'ecards_footer' => 'Poslato od %s sa IP %s u %s', //cpg1.4
  'preview' => 'Prethodni pregled e-razglednice', //cpg1.4
  'preview_button' => 'Prethodni pregled', //cpg1.4
  'submit_button' => 'Pošalji', //cpg1.4
  'preview_view_ecard' => 'To je alternativni link za pregled razglednice -  nije upotrebljiv pri pregledu .', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File report_file.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('REPORT_FILE_PHP') || defined('DISPLAYREPORT_PHP')) $lang_report_php =array(
  'title' => 'Prijava administratoru', //cpg1.4
  'invalid_email' => '<b>Upozorenje</b> : neispravna email adresa !', //cpg1.4
  'report_subject' => 'Prijava %s o galeriji %s', //cpg1.4
  'view_report' => 'Alternativni link ako prijava nije ispravno prikazana', //cpg1.4
  'view_report_plaintext' => 'Da bi vidio prijavu, copy-paste ovaj url u adresnu traku svog preglednika:', //cpg1.4
  'view_more_pics' => 'Galerija', //cpg1.4
  'send_success' => 'Vaša prijava je poslata', //cpg1.4
  'send_failed' => 'Žalim, server ne može poslati vašu prijavu...', //cpg1.4
  'from' => 'Od', //cpg1.4
  'your_name' => 'Vaše ime', //cpg1.4
  'your_email' => 'Vaša email adresa', //cpg1.4
  'to' => 'Za', //cpg1.4
  'administrator' => 'Administrator/Mod', //cpg1.4
  'subject' => 'Subjekt', //cpg1.4
  'comment_field_name' => 'Prijava o komentaru od "%s"', //cpg1.4
  'reason' => 'Razlog', //cpg1.4
  'message' => 'Poruka', //cpg1.4
  'report_footer' => 'Poslato od %s sa IP %s u %s (vrijeme na serveru)', //cpg1.4
  'obscene' => 'nepristojno', //cpg1.4
  'offensive' => 'agresivno', //cpg1.4
  'misplaced' => 'ne odnosi se na temu/neumjesno', //cpg1.4
  'missing' => 'propušteno', //cpg1.4
  'issue' => 'greška/ne može se vidjeti', //cpg1.4
  'other' => 'ostalo', //cpg1.4
  'refers_to' => 'Datoteka sa prijavom se odnosi na', //cpg1.4
  'reasons_list_heading' => 'razlog za prijavu:', //cpg1.4
  'no_reason_given' => 'razlog nije naveden', //cpg1.4
  'go_comment' => 'Pođite na komentar', //cpg1.4
  'view_comment' => 'Vidite prijavu sa komentarom', //cpg1.4
  'type_file' => 'datoteka', //cpg1.4
  'type_comment' => 'komentar', //cpg1.4
  'invalid_data' => 'Podaci o prijavi su oštećeni od vašeg mail klijenta. Provjerite da li je link kompletan.', //cpg1.4

);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
  'pic_info' => 'Informacija o slici',
  'album' => 'Album',
  'title' => 'Naslov',
  'filename' => 'Ime datoteke', //cpg1.4
  'desc' => 'Opis',
  'keywords' => 'Ključne riječi',
  'new_keyword' => 'Nova ključna riječ', //cpg1.4
  'new_keywords' => 'Nove ključne riječi', //cpg1.4
  'existing_keyword' => 'Postojeće ključne riječi', //cpg1.4
  'pic_info_str' => '%sx%s - %sKB - %s viđenja - %s ocjena',
  'approve' => 'Odobri sliku',
  'postpone_app' => 'Odgodi odobrenje',
  'del_pic' => 'Obriši sliku',
  'del_all' => 'Obriši sve slike', //cpg1.4
  'read_exif' => 'Ponovo pročitaj EXIF podatke',
  'reset_view_count' => 'Resetuj brojač viđenja',
  'reset_all_view_count' => 'Resetuj SVE brojače viđenja', //cpg1.4
  'reset_votes' => 'Resetuj ocjene',
  'reset_all_votes' => 'Resetuj SVE ocjene', //cpg1.4
  'del_comm' => 'Obriši komentare',
  'del_all_comm' => 'Obriši SVE komentare', //cpg1.4
  'upl_approval' => 'Odobrenje poslatog materijala', //cpg1.4
  'edit_pics' => 'Uredi sliku',
  'see_next' => 'Sljedeća slika',
  'see_prev' => 'Prethodna slika',
  'n_pic' => '%s slika',
  'n_of_pic_to_disp' => 'Broj slika za prikaz',
  'apply' => 'Prihvati izmjene',
  'crop_title' => 'Koperminov uređivač slika',
  'preview' => 'Prethodni pregled',
  'save' => 'Sačuvaj sliku',
  'save_thumb' =>'Sačuvaj kao ikonu',
  'gallery_icon' => 'Napravi iz te slike moju korisničku ikonu', //cpg1.4
  'sel_on_img' =>'Selekcija je moguća samo unutar slike!', //js-alert
  'album_properties' =>'Atributi albuma', //cpg1.4
  'parent_category' =>'Nadređena kategorija', //cpg1.4
  'thumbnail_view' =>'Prikaz ikona', //cpg1.4
  'select_unselect' =>'selektuj/deselektuj sve', //cpg1.4
  'file_exists' => "Odredišna datoteka '%s' već postoji.", //cpg1.4
  'rename_failed' => "Preimenovanje '%s' u '%s nije uspjelo'.", //cpg1.4
  'src_file_missing' => "Nedostaje izvorna datoteka '%s'.", // cpg 1.4
  'mime_conv' => "Ne mogu konvertovati '%s' u '%s'",//cpg1.4
  'forb_ext' => 'Nedopuštena ekstenzija datoteke.',//cpg1.4
);

// ------------------------------------------------------------------------- //
// File faq.php
// ------------------------------------------------------------------------- //

if (defined('FAQ_PHP')) $lang_faq_php = array(
  'faq' => 'Često postavljana pitanja',
  'toc' => 'Sadržaj',
  'question' => 'Pitanje: ',
  'answer' => 'Odgovor: ',
);

if (defined('FAQ_PHP')) $lang_faq_data = array(
  'Opšta ČPP',
  array('Zašto se trebam registrovati?', 'Administrator može, ali ne mora zahtijevati registraciju. Registracija korisniku omogućava dodatne mogućnosti, kao dodavanje slika, posjedovanje liste omiljenih slika, mogućnost ocjenjivanja slika, pisanja komentara, itd.', 'allow_user_registration', '1'),
  array('Kako se registrovati?', 'Kliknite na &quot;Registracija&quot; i ispunite potrebna polja (i opcionalna ako to želite).<br />Ako administrator ima e-mail aktivaciju , tada ćete nakon slanja Vaših podataka primiti e-mail na adresu koju ste naveli prilikom registracije, u kojem su uputstva o tome kako aktivirati Vaše članstvo. Morate aktivirati članstvo kako biste se mogli prijaviti.', 'allow_user_registration', '1'), //cpg1.4
  array('Kako da se prijavim?', 'Kliknite na &quot;Prijava&quot;, unesite Vaše korisničko ime i lozinku i kliknite na &quot;Upamti me&quot; tako ćete biti prijavljeni i ako napustite stranicu.<br /><b>VAŽNO:Kukiji moraju biti uključeni i kuki s ovih stranica se ne smije izbrisati kako bi se mogla koristiti opcija &quot;Upamti me&quot;.</b>', 'offline', 0),
  array('Zašto se ne mogu prijaviti?', 'Jeste li se registrovali i odgovorili na link koji Vam je poslat u e-mail poruci?. Ovaj link aktivira Vaše članstvo. Za druge probleme u vezi prijave kontaktirajte administratora.', 'offline', 0),
  array('Šta ako sam zaboravio lozinku?', 'Ako ova stranica ima &quot;Zaboravljena lozinka&quot; link onda ga upotrijebite. U drugim slučajevima kontaktirajte administratora za novu lozinku.', 'offline', 0),
  //array('What if I changed my email address?', 'Just simply login and change your email address through &quot;Profile&quot;', 'offline', 0),
  array('Kako ću sačuvati sliku u &quot;Omiljene slike&quot;?', 'Kliknite na sliku i kliknite na &quot;info o slici&quot; link (<img src="images/info.gif" width="16" height="16" border="0" alt="Informacije o slici" />); odite na informacije o slici i kliknite &quot;Dodaj u omiljena&quot;.<br />Administrator može omogućiti &quot;informacije o slici&quot; u osnovnoj postavci.<br />VAŽNO:Kukiji moraju biti uključeni i kuki s ovih stranica se ne smije izbrisati.', 'offline', 0),
  array('Kako ću ocijeniti sliku?', 'Kliknite na ikonu slike, idite na dno, te odaberite ocjenu.', 'offline', 0),
  array('Kako ću napisati komentar za sliku?', 'Kliknite na ikonu slike, idite na dno, te napišite komentar.', 'offline', 0),
  array('Kako da dodam sliku?', 'Kliknite na &quot;Pošalji sliku&quot;i odaberite album u koji želite da je pošaljete. Kliknite na &quot;Browse,&quot; odaberite sliku za slanje, i kliknite &quot;open.&quot; Dodajte naslov i opis, ako želite. Kliknite na &quot;Pošalji&quot;.<br /><br />Alternativno, za korisnike <b>Windows XP-a</b>, možete poslati više slika direktno u svoj privatni album koristeći XP Publishing wizard.<br />Za instrukcije i za preuzimanje neophodnih registry datoteka, kliknite <a href="xp_publish.php">ovdje.</a>', 'allow_private_albums', 1), //cpg1.4
  array('Gdje ću poslati sliku?', 'Moći ćete poslati sliku u jedan od Vaših albuma u &quot;Moja galerija&quot;. The Administrator Vam može dopustiti da pošaljete jednu ili više slika u albume u glavnoj galeriji.', 'allow_private_albums', 0),
  array('Koji tip i koju veličinu slika mogu poslati?', 'Veličina i tip (jpg,gif,..itd.) zavise od administratora.', 'offline', 0),
  array('Kako ću kreirati, promijeniti naziv ili izbrisati album u &quot;Moja galerija&quot;?', 'Morate biti u &quot;Administracija&quot;<br />Kliknite na &quot;Kreiraj/Poredaj moje albume&quot;i kliknite na &quot;Novo&quot;. Promijenite &quot;Novi album&quot; u željeno ime.<br />Takođe možete preimenovati bilo koji album u Vašoj galeriji.<br />Kliknite na &quot;Prihvati promjene&quot;.', 'allow_private_albums', 0),
  array('Kako mogu izmijeniti i onemogućiti korisnike da gledaju moje albume?', 'Morate biti u &quot;Administracija&quot;<br />Kliknite na &quot;Promijeni moje albume&quot;. Na &quot;Osvježi album&quot; baru, odaberite album kojeg želite izmijeniti.<br />Ovdje možete promijeniti naziv, opis, ikonu, ograničiti dopuštenje za pregledanje i komentarisanje/ocjenjivanje.<br />Kliknite na &quot;Osvježi album&quot;.', 'allow_private_albums', 0),
  array('Kako mogu gledati albume drugih korisnika?', 'Kliknite na &quot;Popis albuma&quot; i odaberite &quot;Korisničke galerije&quot;.', 'allow_private_albums', 0),
  array('to su kukiji (cookies)?', 'Kukiji su tekstualni podaci koji se šalju sa stranica i koji se postavljaju na Vaš kompjuter.<br />Kukiji obično dopuštaju korisniku da napusti neke stranice i da se kasnije na njih vrati bez ponovne prijave.', 'offline', 0),


  'Navigacija po galeriji',
  array('Šta je &quot;Popis albuma&quot;?', 'Taj link će Vam pokazati cijelu galeriju u kojoj se trenutno nalazite, sa linkom za svaki album. Ako se ne nalazite ni u jednoj kategoriji, biće Vam prikazana cijela galerija sa linkovima za svaku kategoriju. Ikone mugu biti link za kategorije.', 'offline', 0),
  array('Šta je &quot;Moja galerija&quot;?', 'Ovim se omogućuje korisnicima da otvaraju vlastite galerije i da dodaju/brišu ili mijenjaju albume kao i da u njih šalju slike.', 'allow_private_albums', 1), //cpg1.4
  array('Kakva je razlika između &quot;Administracija&quot; and &quot;Korisnici&quot;?', 'Kada ste u admin-modu, možete modifikovati svoje galerije (kao i druge ako Vam to dopusti administrator).', 'allow_private_albums', 0),
  array('Šta je &quot;Pošalji sliku&quot;?', 'Ova mogućnost dopušta korisniku da pošalje sliku (veličinu i vrstu određuje administrator) u galeriju koju odabere ili korisnik ili administrator.', 'allow_private_albums', 0),
  array('Šta je &quot;Zadnje dodate slike&quot;?', 'Ova rubrika pokazuje posljednje slike poslate u galeriju.', 'offline', 0),
  array('Šta je &quot;Posljednji komentari&quot;?', 'Ova rubrika pokazuje posljednje komentare uz slike koje su napisali korisnici.', 'offline', 0),
  array('Šta je &quot;Najgledanije&quot;?', 'Ova rubrika pokazuje najgledanije slike od strane korisnika (bilo da su prijavljeni ili ne).', 'offline', 0),
  array('Šta je &quot;Najbolje ocijenjene&quot;?', 'Ova rubrika pokazuje najbolje ocijenjene slike od strane korisnika, te pokazuje prosječnu ocjenu (npr: pet korisnika, svaki je dao ocjenu <img src="images/rating3.gif" width="65" height="14" border="0" alt="" />: slika bi imala prosječnu ocjenu <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> ;Ako pet korisnika ocijeni sliku od 1 do 5 (1,2,3,4,5), rezultat je prosjek <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> .)<br />Ocjene se kreću od <img src="images/rating5.gif" width="65" height="14" border="0" alt="odlično" /> (odlično) do <img src="images/rating0.gif" width="65" height="14" border="0" alt="loše" /> (loše).', 'offline', 0),
  array('Šta je &quot;Omiljene slike&quot;?', 'Ova rubrika omogućava korisnicima da sačuvaju omiljene slike u kukiju koji je poslat na kompjuter.', 'offline', 0),
);


// ------------------------------------------------------------------------- //
// File forgot_passwd.php
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) $lang_forgot_passwd_php = array(
  'forgot_passwd' => 'Obnova lozinke',
  'err_already_logged_in' => 'Već ste prijavljeni !',
  'enter_email' => 'Unesite svoju email adresu', //cpg1.4
  'submit' => 'Naprijed',
  'illegal_session' => 'Sesija za obnovu lozinke je pogrešna ili istekla.', //cpg1.4
  'failed_sending_email' => 'E-mail za obnovu lozinke se ne može poslati !',
  'email_sent' => 'E-mail sa Vašim korisničkim imenom i lozinkom je poslat %s', //cpg1.4
  'verify_email_sent' => 'E-mail je poslat na %s. Provjerite email da bi okončali proces.', //cpg1.4
  'err_unk_user' => 'Odabrani korisnik ne postoji!',
  'account_verify_subject' => '%s - Zahtjev za novu lozinku', //cpg1.4
  'account_verify_body' => 'Zahtijevali ste novu lozinku. Ako želite nastaviti, kliknite na slijedeći link:

%s', //cpg1.4
  'passwd_reset_subject' => '%s - Obnova lozinke', //cpg1.4
  'passwd_reset_body' => 'Dole je nova lozinka koju ste zahtijevali:
Korisničko ime: %s
Lozinka: %s
Kliknite %s za prijavu.', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
  'group_name' => 'Ime grupe', //cpg1.4
  'permissions' => 'Dozvole', //cpg1.4
  'public_albums' => 'Dodavanje u javne albume', //cpg1.4
  'personal_gallery' => 'Lične galerije', //cpg1.4
  'upload_method' => 'Način slanja fotografija', //cpg1.4
  'disk_quota' => 'Disk', //cpg1.4
  'rating' => 'Ocjenjivanje', //cpg1.4
  'ecards' => 'Razglednice', //cpg1.4
  'comments' => 'Komentari', //cpg1.4
  'allowed' => 'Dozvoljeno', //cpg1.4
  'approval' => 'Odobrenje', //cpg1.4
  'boxes_number' => 'Broj polja', //cpg1.4
  'variable' => 'promjenljivo', //cpg1.4
  'fixed' => 'fiksno', //cpg1.4
  'apply' => 'Prihvati promjene',
  'create_new_group' => 'Dodaj novu grupu',
  'del_groups' => 'Briši označene grupe',
  'confirm_del' => 'Upozorenje: kada obrišete grupu, svi njeni korisnici će biti prebačeni u grupu \'Registered\' group !\n\nŽelite li nastaviti ?', //js-alert
  'title' => 'Uređivanje korisničkih grupa',
  'num_file_upload' => 'Polja pri slanju datoteke', //cpg1.4
  'num_URI_upload' => 'Polja pri slanju URI', //cpg1.4
  'reset_to_default' => 'Resetuj u osnovno ime (%s) - preporučeno!', //cpg1.4
  'error_group_empty' => 'Tabela grupe je prazna !<br /><br />Osnovne grupe su kreirane, molim osvježite ovu stranicu', //cpg1.4
  'explain_greyed_out_title' => 'Zašto je redak posivljen?', //cpg1.4
  'explain_guests_greyed_out_text' => 'Ne možete promijeniti atribute ove grupe jer ste postavili opciju &quot; Dozvoli neprijavljenim korisnicima (gost ili anonimus) pristup; na &quot;NE&quot; na strani sa postavkama. Svi članovi grupe %s) se mogu samo prijaviti; Zbog toga postavke grupe na njih ne utiču.', //cpg1.4
  'explain_banned_greyed_out_text' => 'Ne možete promijeniti atribute grupe %s jer njeni članovi ionako ne mogu učiniti ništa.', //cpg1.4
  'group_assigned_album' => 'pripadajući album(i)', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
  'welcome' => 'Dobro došli !',
);

$lang_album_admin_menu = array(
  'confirm_delete' => 'Jeste li sigurni da želite IZBRISATI ovaj album ? \\nSve slike i komentari će takođe biti izbrisani.', //js-alert
  'delete' => 'BRISANJE',
  'modify' => 'KARAKTERISTIKE',
  'edit_pics' => 'UREĐIVANJE',
);

$lang_list_categories = array(
  'home' => 'Početna',
  'stat1' => 'Br. slika:<b>[pictures]</b> - br. albuma:<b>[albums]</b> - br. kategorija:<b>[cat]</b>  - br. komentara:<b>[comments]</b> - br. viđenja:<b>[views]</b>',
        'stat2' => 'Br. slika:<b>[pictures]</b> - br. albuma:<b>[albums]</b> - br. viđenja<b>[views]</b>',
        'xx_s_gallery' => 'Galerija - %s',
        'stat3' => 'Br. slika:<b>[pictures]</b> - br. albuma:<b>[albums]</b> - br. komentara:<b>[comments]</b>  - br. viđenja:<b>[views]</b>'
);

$lang_list_users = array(
  'user_list' => 'Popis korisnika',
  'no_user_gal' => 'Nema galerija korisnika',
  'n_albums' => 'Br. albuma:%s',
  'n_pics' => 'Br. slika:%s',
);

$lang_list_albums = array(
  'n_pictures' => 'Br. slika:%s',
  'last_added' => ', zadnja dodana %s',
  'n_link_pictures' => '%s povezanih slika', //cpg1.4
  'total_pictures' => 'Ukupno slika:%s', //cpg1.4
);

}

// ------------------------------------------------------------------------- //
// File keywordmgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('KEYWORDMGR_PHP')) $lang_keywordmgr_php = array(
  'title' => 'Uređivanje ključnih riječi', //cpg1.4
  'edit' => 'uredi', //cpg1.4
  'delete' => 'briši', //cpg1.4
  'search' => 'traži', //cpg1.4
  'keyword_test_search' => 'traži %s u novom prozoru', //cpg1.4
  'keyword_del' => 'briši ključnu riječ %s', //cpg1.4
  'confirm_delete' => 'Jeste li sigurni da želite obrisati ključnu riječ %s iz cijele galerije?', //cpg1.4  // js-alert
  'change_keyword' => 'promijeni ključnu riječ', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
  'login' => 'Prijava',
  'enter_login_pswd' => 'Unesite Vaše korisničko ime i lozinku',
  'username' => 'Korisničko ime',
  'password' => 'Lozinka',
  'remember_me' => 'Upamti me',
  'welcome' => 'Dobro došli %s ...',
  'err_login' => '*** Neuspjela prijava. Pokušajte ponovno ***',
  'err_already_logged_in' => 'Već ste prijavljeni !',
  'forgot_password_link' => 'Zaboravio sam lozinku',
  'cookie_warning' => 'Upozorenje: Vaš preglednik ne omogućava upotrebu kukija', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
  'logout' => 'Odjava',
  'bye' => 'Do viđenja %s ...',
  'err_not_loged_in' => 'Niste prijavljeni !',
);

// ------------------------------------------------------------------------- //
// File minibrowser.php  //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('MINIBROWSER_PHP')) $lang_minibrowser_php = array(
  'close' => 'zatvori', //cpg1.4
  'submit' => 'Naprijed', //cpg1.4
  'up' => 'gore za jedan nivo', //cpg1.4
  'current_path' => 'trenutna staza', //cpg1.4
  'select_directory' => 'izaberite direktorij', //cpg1.4
  'click_to_close' => 'Kliknite na sliku da zatvorite prozor',
);

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
  'upd_alb_n' => 'Osvježi album %s',
  'general_settings' => 'Osnovne postavke',
  'alb_title' => 'Naziv albuma',
  'alb_cat' => 'Kategorija albuma',
  'alb_desc' => 'Opis albuma',
  'alb_keyword' => 'Ključna riječ za album', //cpg1.4
  'alb_thumb' => 'Ikona albuma',
  'alb_perm' => 'Dozvole za ovaj album',
  'can_view' => 'Album mogu vidjeti',
  'can_upload' => 'Posjetioci mogu slati slike',
  'can_post_comments' => 'Posjetioci mogu pisati komentare',
  'can_rate' => 'Posjetioci mogu ocjenjivati slike',
  'user_gal' => 'Galerija korisnika',
  'no_cat' => '* Nema kategorije *',
  'alb_empty' => 'Album je prazan',
  'last_uploaded' => 'Zadnje poslato...',
  'public_alb' => 'Svi (javni album)',
  'me_only' => 'Samo ja',
  'owner_only' => 'Samo vlasnik albuma (%s)',
  'groupp_only' => 'Članovi grupe \'%s\'',
  'err_no_alb_to_modify' => 'U bazi podataka nema albuma koji se mogu mijenjati.',
  'update' => 'Osvježi album',
  'reset_album' => 'Resetuj album', //cpg1.4
  'reset_views' => 'Resetuj brojač viđenja na &quot;0&quot; u %s', //cpg1.4
  'reset_rating' => 'Resetuj ocjene svih slika u %s', //cpg1.4
  'delete_comments' => 'Briši sve komentare u %s', //cpg1.4
  'delete_files' => '%sNepovratno briše sve slike u %s', //cpg1.4
  'views' => 'viđenja', //cpg1.4
  'votes' => 'glasova', //cpg1.4
  'comments' => 'komentara', //cpg1.4
  'files' => 'datoteka', //cpg1.4
  'submit_reset' => 'pošalji izmjene', //cpg1.4
  'reset_views_confirm' => 'Siguran sam', //cpg1.4
  'notice1' => '(*) zavisno od postavki %sgroups%s',  //cpg1.4 //(do not translate %s!)
  'alb_password' => 'Lozinka za album', //cpg1.4
  'alb_password_hint' => 'Aluzija na lozinku za album', //cpg1.4
  'edit_files' =>'Uređivanje datoteke', //cpg1.4
  'parent_category' =>'Nadređena kategorija', //cpg1.4
  'thumbnail_view' =>'Pogled ikonama', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File phpinfo.php
// ------------------------------------------------------------------------- //

if (defined('PHPINFO_PHP')) $lang_phpinfo_php = array(
  'php_info' => 'PHP info',
  'explanation' => 'To je rezultat izvedbe PHP funkcije <a href="http://www.php.net/phpinfo">phpinfo()</a>, prikazan u okviru galerije.',
  'no_link' => 'Nije naročito pametno da drugi vide te podatke, te se zato ta stranica može vidjeti samo ako ste prijavljeni kao admin. Možete drugima poslati link (npr. greškom) na tu stranicu, biće im zabranjen pristup.',
);

// ------------------------------------------------------------------------- //
// File picmgr.php //cpg1.4
// ------------------------------------------------------------------------- //
if (defined('PICMGR_PHP')) $lang_picmgr_php = array(
  'pic_mgr' => 'Uređivanje fotografije', //cpg1.4
  'select_album' => 'Izberite album', //cpg1.4
  'delete' => 'Briši', //cpg1.4
  'confirm_delete1' => 'Jeste li sigurni da želite obrisati ovu sliku ?', //cpg1.4
  'confirm_delete2' => '\nSlika će biti trajno obrisana.', //cpg1.4
  'apply_modifs' => 'Prihvati izmjene', //cpg1.4
  'confirm_modifs' => 'Potvrdi izmjene', //cpg1.4
  'pic_need_name' => 'Slika mora imati ime !', //cpg1.4
  'no_change' => 'Niste napravili nikakve izmjene !', //cpg1.4
  'no_album' => '* Nema albuma *', //cpg1.4
  'explanation_header' => 'Sortiranje koje odaberete na ovoj stranici biće prihvaćeno samo ako', //cpg1.4
  'explanation1' => 'je administrator odabrao u postavkama "Pozicija silazno" ili "Pozicija uzlazno" (globalna postavka za sve korisnike koji nisu sami odabrali drugačiji način sortiranja)', //cpg1.4
  'explanation2' => 'korisnik ima postavljenu "Pozicija silazno" ili "Pozicija uzlazno" na strani sa ikonama', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File pluginmgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('PLUGINMGR_PHP')){

$lang_pluginmgr_php = array(
  'confirm_uninstall' => 'Jeste li sigurni da želite DEINSTALIRATI ovaj dodatak', //cpg1.4
  'confirm_delete' => 'Jeste li sigurni da želite BRISATI ovaj dodatak', //cpg1.4
  'pmgr' => 'Uređivanje dodataka', //cpg1.4
  'name' => 'Ime', //cpg1.4
  'author' => 'Autor', //cpg1.4
  'desc' => 'Opis', //cpg1.4
  'vers' => 'u', //cpg1.4
  'i_plugins' => 'Instalirani dodaci', //cpg1.4
  'n_plugins' => 'Dodaci koji nisu instalirani', //cpg1.4
  'none_installed' => 'Bez dodataka', //cpg1.4
  'operation' => 'Operacija', //cpg1.4
  'not_plugin_package' => 'Datoteka koju ste poslali NIJE valjan dodatak za galeriju.', //cpg1.4
  'copy_error' => 'Pri kopiranju dodatka u folder sa dodacima je došlo do greške.', //cpg1.4
  'upload' => 'Slanje', //cpg1.4
  'configure_plugin' => 'Uredi dodatak', //cpg1.4
  'cleanup_plugin' => 'Očisti dodatak', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
  'already_rated' => 'Žao nam je, ali već ste ocijenili ovu sliku',
  'rate_ok' => 'Vaša ocjena je prihvaćena',
  'forbidden' => 'Ne možete ocijeniti Vaše vlastite slike.',
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
Iako će administrator {SITE_NAME} brisati ili izmijeniti svaki neprihvatljivi materijal čim prije, nemoguće je pregledati baš svaki komentar. Stoga, prihvaćate da stavovi objavljeni na ovim stranicama izražavaju poglede i mišljenja autora, a ne administratora ili webmastera (osim za njihove vlastite), te oni neće biti odgovorni za iste.<br />
<br />
Prihvaćate klauzulu da nećete objavljivati nikakav materijal koji je uvrjedljiv, opscen, vulgaran, prepun mržnje, prijetnji, ili bilo kakav drugi koji bi mogao povrijediti postojeće zakone. Slažete se da webmaster, administrator i moderatori {SITE_NAME} imaju pravo ukloniti ili izmijeniti bilo koji sadržaj u bilo koje vrijeme ako budu smatrali to potrebnim. Kao korisnik slažete se da sve informacije koje upišete bude spremljene u bazu podataka. Iako ove informacije neće biti proslijeđene trećim stranama bez Vašeg dopuštenja, webmaster i administrator ne mogu biti odgovorni za bilo kakvo hakiranje, koje bi dovelo do kompromitiranja podataka.<br />
<br />
Ove stranice koriste kukije za pohranu informacija na Vaš kompjuter. Oni služe samo za Vaše jednostavnije gledanje ovih stranica. E-mail adresa koju ste naveli koristi se samo za potvrdu detalja Vaše registracije i lozinke.<br />
<br />
Kliknuvši na 'Slažem se' ispod, potvrđujete da se slažete sa gore navedenim uslovima.
EOT;

$lang_register_php = array(
  'page_title' => 'Registracija',
  'term_cond' => 'Uslovi korištenja',
  'i_agree' => 'Slažem se',
  'submit' => 'Provedi registraciju',
  'err_user_exists' => 'Korisničko ime koje ste naveli već postoji, molimo Vas, odaberite drugo ime',
  'err_password_mismatch' => 'Dvije lozinke se ne poklapaju, molimo Vas unesite ih ponovno',
  'err_uname_short' => 'Korisničko ime mora imati makar dva znaka',
  'err_password_short' => 'Lozinka mora imati makar dva znaka',
  'err_uname_pass_diff' => 'Korisničko ime i lozinka moraju biti različiti',
  'err_invalid_email' => 'E-mail adresa nije važeća',
  'err_duplicate_email' => 'Drugi korisnik već je registrovan s ovom e-mail adresom',
  'enter_info' => 'Upis podataka za registraciju',
  'required_info' => 'Obavezne informacije',
  'optional_info' => 'Neobavezan upis',
  'username' => 'Korisničko ime',
  'password' => 'Lozinka',
  'password_again' => 'Ponovno unesite lozinku',
  'email' => 'Email',
  'location' => 'Mjesto',
  'interests' => 'Hobiji',
  'website' => 'Website',
  'occupation' => 'Zanimanje',
  'error' => 'GREŠKA',
  'confirm_email_subject' => '%s - Potvrda registracije',
  'information' => 'Informacija',
  'failed_sending_email' => 'E-mail o potvrdi registracije se ne može poslati !',
  'thank_you' => 'Hvala na registraciji.<br /><br />E-mail sa informacijama o tome kako aktivirati Vaše članstvo poslan je na e-mail adresu koju ste naveli pri registraciji.',
  'acct_created' => 'Vaš nalog je otvoren i sada se možete prijaviti s Vašim korisničkim imenom i lozinkom',
  'acct_active' => 'Vaš nalog je aktivan i sada se možete prijaviti s Vašim korisničkim imenom i lozinkom',
  'acct_already_act' => 'Nalog je već aktivan!', //cpg1.4
  'acct_act_failed' => 'Ovaj nalog se ne može aktivirati !',
  'err_unk_user' => 'Odabrani korisnik ne postoji !',
  'x_s_profile' => 'Profil %s',
  'group' => 'Grupa',
  'reg_date' => 'Datum pristupa',
  'disk_usage' => 'Upotrijebljenost diska',
  'change_pass' => 'Izmijeni lozinku',
  'current_pass' => 'Stara lozinka',
  'new_pass' => 'Nova lozinka',
  'new_pass_again' => 'Nova lozinka ponovo',
  'err_curr_pass' => 'Stara lozinka je netačna',
  'apply_modif' => 'Prihvati izmjene',
  'change_pass' => 'Promijeni moju lozinku',
  'update_success' => 'Vaš profil je osvježen',
  'pass_chg_success' => 'Vaša lozinka je promijenjena',
  'pass_chg_error' => 'Vaša lozinka nije promijenjena',
  'notify_admin_email_subject' => '%s - Obavijest o registraciji',
  'last_uploads' => 'Zadnje dodate datoteke.<br />Kliknite da biste vidjeli sve dodate datoteke', //cpg1.4
  'last_comments' => 'Zadnji komentari.<br />Kliknite da biste vidjeli sve komentare', //cpg1.4
  'notify_admin_email_body' => 'Novi korisnik s korisničkim imenom "%s" se upravo registrovao u Vašoj galeriji',
  'pic_count' => 'Dodatih datoteka', //cpg1.4
  'notify_admin_request_email_subject' => '%s - Zahtjev za registraciju', //cpg1.4
  'thank_you_admin_activation' => 'Hvala za registraciju.<br /><br />Vaš zahtjev za aktiviranje naloga je poslat administratoru. Kada Vaš nalog bude odobren biće Vam poslat email sa obavještenjem o aktiviranju.', //cpg1.4
  'acct_active_admin_activation' => 'Nalog je aktiviran, korisniku je poslat email sa obavještenjem o aktiviranju.', //cpg1.4
  'notify_user_email_subject' => '%s - Obavijest o aktiviranju naloga', //cpg1.4
);

$lang_register_confirm_email = <<<EOT
Hvala za registraciju na {SITE_NAME}

Da biste aktivirali Vaš nalog sa korisničkim imenom "{USER_NAME}", trebate kliknuti na link ispod, ili ga kopirati u Vaš preglednik.

<a href="{ACT_LINK}">{ACT_LINK}</a>

Srdačan pozdrav,

administrator {SITE_NAME}

EOT;

$lang_register_approve_email = <<<EOT
Novi korisnik sa korisničkim imenom "{USER_NAME}" je registrovan u Vašoj galeriji.

Da biste aktivirali Vaš nalog, trebate kliknuti na link ispod, ili ga kopirati u Vaš preglednik.

<a href="{ACT_LINK}">{ACT_LINK}</a>

EOT;

$lang_register_activated_email = <<<EOT
Vaš nalog je odobren i aktiviran.

Sada se možete prijaviti na <a href="{SITE_LINK}">{SITE_LINK}</a> sa korisničkim imenom "{USER_NAME}"


Srdačan pozdrav,

urednik {SITE_NAME}

EOT;
}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
  'title' => 'Pregled komentara',
  'no_comment' => 'Nema komentara za pregled',
  'n_comm_del' => 'Br. obrisanih komentara:%s',
  'n_comm_disp' => 'Br. prikazanih komentara',
  'see_prev' => 'Prikaz prethodnih',
  'see_next' => 'Prikaz sljedećih',
  'del_comm' => 'Obriši izabrane komentare',
  'user_name' => 'Ime', //cpg1.4
  'date' => 'Datum', //cpg1.4
  'comment' => 'Komentar', //cpg1.4
  'file' => 'Datoteka', //cpg1.4
  'name_a' => 'Korisničko ime uzlazno', //cpg1.4
  'name_d' => 'Korisničko ime silazno', //cpg1.4
  'date_a' => 'Datum uzlazno', //cpg1.4
  'date_d' => 'Datum silazno', //cpg1.4
  'comment_a' => 'Komentar uzlazno', //cpg1.4
  'comment_d' => 'Komentar silazno', //cpg1.4
  'file_a' => 'Datoteka uzlazno', //cpg1.4
  'file_d' => 'Datoteka silazno', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File search.php                                                           //
// ------------------------------------------------------------------------- //


if (defined('SEARCH_PHP')){

$lang_search_php = array(
  'title' => 'Pretraga', //cpg1.4
  'submit_search' => 'Nađi', //cpg1.4
  'keyword_list_title' => 'Lista ključnih riječi', //cpg1.4
  'keyword_msg' => 'Gornja lista nije potpuna. Ne uključuje riječi iz naslova ili opisa slike. Pokušaj proširenu pretragu.',  //cpg1.4
  'edit_keywords' => 'Uredi ključne riječi', //cpg1.4
  'search in' => 'Traži u:', //cpg1.4
  'ip_address' => 'IP adresa', //cpg1.4
  'fields' => 'Traži u', //cpg1.4
  'age' => 'Starost', //cpg1.4
  'newer_than' => 'Novije od', //cpg1.4
  'older_than' => 'Starije od', //cpg1.4
  'days' => 'dana', //cpg1.4
  'all_words' => 'Sve riječi (I)', //cpg1.4
  'any_words' => 'Neke riječi (ILI)', //cpg1.4
);

$lang_adv_opts = array(
  'title' => 'Naslov', //cpg1.4
  'caption' => 'Opis', //cpg1.4
  'keywords' => 'Kljčne riječi', //cpg1.4
  'owner_name' => 'Ime vlasnika', //cpg1.4
  'filename' => 'Ime datoteke', //cpg1.4
);

}

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
  'page_title' => 'Pretraži nove slike',
  'select_dir' => 'Odaberi direktorij',
  'select_dir_msg' => 'Ova funkcija Vam omogućava da dodate paket slika koje ste poslali na Vaš server preko FTP-a.<br /><br />Odaberite direktorij u koji ste poslali svoje slike.', //cpg1.4
  'no_pic_to_add' => 'Nema slike za dodati',
  'need_one_album' => 'Potreban Vam je bar jedan album za korištenje ove funkcije',
  'warning' => 'Upozorenje',
  'change_perm' => 'skripta ne može pisati u ovaj direktorij, trebate promijeniti njegov mod na 755 ili 777 prije nego pokušate dodati slike !',
  'target_album' => '<b>Dodaj slike &quot;</b>%s<b>&quot; u </b>%s',
  'folder' => 'Direktorij',
  'image' => 'slika',
  'album' => 'Album',
  'result' => 'Rezultat',
  'dir_ro' => 'Pisanje onemogućeno. ',
  'dir_cant_read' => 'Čitanje onemogućeno. ',
  'insert' => 'Dodavanje novih slika u galeriju',
  'list_new_pic' => 'Popis novih slika',
  'insert_selected' => 'Unesi odabrane slike',
  'no_pic_found' => 'Nije pronađena niti jedna nova slika',
  'be_patient' => 'Molimo Vas da budete strpljivi, skripti je potrebno vremena za dodavanje slika',
  'no_album' => 'nije odabran album',
  'result_icon' => 'kliknite za pojedinosti ili osvježite prikaz strane',  //cpg1.4
  'notes' =>  '<ul>'.
                          '<li><b>OK</b> : znači da je slika uspješno dodata'.
                          '<li><b>DP</b> : znači da je slika duplikat i da se već nalazi u bazi podataka'.
                          '<li><b>PB</b> : znači da se slika nije mogla dodati, provjerite Vaše postavke i dozvole za direktorije gdje su smještene slike'.
                          '<li><b>NA</b> :  znači da niste odabrali album u kojeg idu slike, kliknite na \'<a href="javascript:history.back(1)">back</a>\' i odaberite album. Ako nemate album, najprije ga <a href="albmgr.php">kreirajte</a></li>'.
                          '<li>Ako se  OK, DP, PB \'znakovi\' ne pojave kliknite na sliku za provjeru poruke o PHP grešci'.
                          '<li>Za osvježenje prikaza, kliknite na Reload dugme u svom pregledniku'.
                          '</ul>',
  'select_album' => 'Izberite album',
  'check_all' => 'Označi sve',
  'uncheck_all' => 'Odzači sve',
  'no_folders' => 'U direktorijumu "albums" nema direktorijuma. Kreirajte najmanje jedan novi direktorijum i prebacite Vaše slike u njega putem FTP-a. Putem FTP-a ne smijete slati slike u "userpics" niti "edit" direktorije, oni su rezervisani za http slanje i interne namjene.', //cpg1.4
   'albums_no_category' => 'Albumi bez kategorije', //cpg1.4 // album pulldown mod, added by frogfoot
  'personal_albums' => '* Lični albumi', //cpg1.4 // album pulldown mod, added by frogfoot
  'browse_batch_add' => 'Interfejs preglednika (preporučeno)', //cpg1.4
  'edit_pics' => 'Uređivanje slika', //cpg1.4
  'edit_properties' => 'Atributi albuma', //cpg1.4
  'view_thumbs' => 'Prikaz ikona', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File stat_details.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('STAT_DETAILS_PHP')) $lang_stat_details_php = array(
  'show_hide' => 'prikaži/sakrij tu kolonu', //cpg1.4
  'vote' => 'Pojediosti glasanja', //cpg1.4
  'hits' => 'Pojedinosti posjeta', //cpg1.4
  'stats' => 'Statistika glasanja', //cpg1.4
  'sdate' => 'Datum', //cpg1.4
  'rating' => 'Ocjena', //cpg1.4
  'search_phrase' => 'Traženi izraz', //cpg1.4
  'referer' => 'Odzivatelj', //cpg1.4
  'browser' => 'Preglednik', //cpg1.4
  'os' => 'Operativni sistem', //cpg1.4
  'ip' => 'IP', //cpg1.4
  'sort_by_xxx' => 'Sortiraj po %s', //cpg1.4
  'ascending' => 'uzlazno', //cpg1.4
  'descending' => 'silazno', //cpg1.4
  'internal' => 'int', //cpg1.4
  'close' => 'zatvori', //cpg1.4
  'hide_internal_referers' => 'sakrij interne odzivatelje', //cpg1.4
  'date_display' => 'Prikaz datuma', //cpg1.4
  'submit' => 'pošalji / osvježi', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File thumbnails.php
// ------------------------------------------------------------------------- //

// Void

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) $lang_upload_php = array(
  'title' => 'Dodavanje slika',
  'custom_title' => 'Kreiranje obrazca za dodavanje slika',
  'cust_instr_1' => 'Možete odabrati proizvoljan broj kućica za dodavanje slika. Ne možete odabrati više od ograničenja naznačenog ispod.',
  'cust_instr_2' => 'Zahtjev za kreiranje obrazca',
  'cust_instr_3' => 'Polja za lokalne slike: %s',
  'cust_instr_4' => 'URI/URL polja: %s',
  'cust_instr_5' => 'URI/URL polja:',
  'cust_instr_6' => 'Polja za lokalne slike:',
  'cust_instr_7' => 'Upišite broj polja za svaku vrstu i kliknite na \'Nastavi\'. ',
  'reg_instr_1' => 'Neispravna radnja pri kreiranju obrasca.',
  'reg_instr_2' => 'Sada možete dodati Vaše slike koristeći kućice za dodavanje ispod. Veličina dodatih slika na server ne smije prijeći %s KB svaka. Kompresovane (ZIP) datoteke, koje budete dodali, ostaće neraspakovane.',
  'reg_instr_3' => 'Ako želite dekompresirati zip slike ili arhiv, morate koristiti kućicu za dodavanje slika koja se nalazi \'Dodavanje ZIP sa raspakivanjem\' rubrici.',
  'reg_instr_4' => 'Kada koristite URI/URL dodavanje, unesite put do slike kao ovdje: http://www.mojastrana.com/slike/example.jpg',
  'reg_instr_5' => 'Kada kompletirate obrazac, kliknite na \'Nastavi\'.',
  'reg_instr_6' => 'Dodavanje ZIP sa raspakivanjem:',
  'reg_instr_7' => 'Dodavanje slika sa diska:',
  'reg_instr_8' => 'Dodavanje slika sa URI/URL:',
  'error_report' => 'Poruka o grešci',
  'error_instr' => 'Kod sljedećih datoteka je došlo do greške:',
  'file_name_url' => 'Ime datoteke/URL',
  'error_message' => 'Poruka o grešci',
  'no_post' => 'Slike nisu poslate.',
  'forb_ext' => 'Zabranjena ekstenzija slike.',
  'exc_php_ini' => 'Premašena dopuštena veličina slike u php.ini.',
  'exc_file_size' => 'Premašena veličina slike dozvoljena po CPG.',
  'partial_upload' => 'Dodavanje je samo djelimično uspjelo.',
  'no_upload' => 'Nije bilo dodavanja.',
  'unknown_code' => 'Nepoznata PHP greška.',
  'no_temp_name' => 'Nema uploada - Nema privremenog imena.',
  'no_file_size' => 'Ne sadrži podatke/Oštećena',
  'impossible' => 'Nemoguće prebaciti.',
  'not_image' => 'Nije slika/oštećeno',
  'not_GD' => 'Nije GD ekstenzija.',
  'pixel_allowance' => 'Visina i/ili širina je veća nego što je dozvoljeno postavkama galerije.', //cpg1.4
  'incorrect_prefix' => 'Netačan URI/URL prefiks',
  'could_not_open_URI' => 'Ne može se otvoriti URI.',
  'unsafe_URI' => 'Sigurnost nije verifikovna.',
  'meta_data_failure' => 'Nedostaju metapodaci',
  'http_401' => '401 Neautorizovano',
  'http_402' => '402 Potrebno plaćanje',
  'http_403' => '403 Zabranjeno',
  'http_404' => '404 Nije pronađeno',
  'http_500' => '500 Greška na serveru',
  'http_503' => '503 Servis nedostupan',
  'MIME_extraction_failure' => 'MIME tip nije prepoznat.',
  'MIME_type_unknown' => 'Nepoznat MIME tip',
  'cant_create_write' => 'Datoteke za pisanje nije moguće kreirati.',
  'not_writable' => 'Pisanje u datoteku nije moguće.',
  'cant_read_URI' => 'Ne može se pročitati URI/URL',
  'cant_open_write_file' => 'Ne može se otvoriti URI dokument za pisanje.',
  'cant_write_write_file' => 'Ne može se pisati u URI dokument za pisanje.',
  'cant_unzip' => 'Ne može se izvršiti dekompresija.',
  'unknown' => 'Nepoznata greška',
  'succ' => 'Uspješno dodato',
  'success' => 'Br. uspješno dodatih datoteka:%s.',
  'add' => 'Molimo Vas, kliknite na \'Nastavi\' da biste dodali slike u album.',
  'failure' => 'Dodavanje nije uspjelo',
  'f_info' => 'Informacije o datoteci',
  'no_place' => 'Prethodna slika se nije mogla smjestiti.',
  'yes_place' => 'Prethodna slika je smještena uspješno.',
  'max_fsize' => 'Maksimalna dopuštena veličina slika je %s KB',
  'album' => 'Album',
  'picture' => 'Slika',
  'pic_title' => 'Ime slike',
  'description' => 'Opis slike',
  'keywords' => 'Ključne riječi (odvojene praznim mjestima)<br /><a href="#" onClick="return MM_openBrWindow(\'keyword_select.php\',\'selectKey\',\'width=250, height=400, scrollbars=yes,toolbar=no,status=yes,resizable=yes\')">Izaberite s popisa</a>', //cpg1.4
  'keywords_sel' =>'Izaberite ključnu riječ', //cpg1.4
  'err_no_alb_uploadables' => 'Žao nam je, nema albuma u koji Vam je dopušteno dodavati slike',
  'place_instr_1' => 'Molimo Vas, stavite slike u albume.  Možete takođe unijeti informacije o svakoj slici.',
  'place_instr_2' => 'Treba smjestiti više slika. Molimo Vas, kliknite na \'Nastavi\'.',
  'process_complete' => 'Uspješno ste smjestili sve slike.',
   'albums_no_category' => 'Albumi bez kategorije', //cpg1.4. //album pulldown mod, added by frogfoot
  'personal_albums' => '* Lični albumi', //cpg1.4 //album pulldown mod, added by frogfoot
  'select_album' => 'Izaberite album', //cpg1.4 //album pulldown mod, added by frogfoot
  'close' => 'Zatvori', //cpg1.4
  'no_keywords' => 'Žalim, nema dostupnih ključnih riječi!', //cpg1.4
  'regenerate_dictionary' => 'Osvježi riječnik', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
  'memberlist' => 'Popis korisnika', //cpg1.4
  'user_manager' => 'Uređivanje korisnika', //cpg1.4
  'title' => 'Uređivanje korisnika',
  'name_a' => 'Imena uzlazno',
  'name_d' => 'Imena silazno',
  'group_a' => 'Grupa uzlazno',
  'group_d' => 'Grupa silazno',
  'reg_a' => 'Datum reg. uzlazno',
  'reg_d' => 'Datum reg. silazno',
  'pic_a' => 'Broj slika uzlazno',
  'pic_d' => 'Broj slika silazno',
  'disku_a' => 'Upotrebljenost diska uzlazno',
  'disku_d' => 'Upotrebljenost diska silazno',
  'lv_a' => 'Posljednja posjeta uzlazno',
  'lv_d' => 'Posljednja posjeta silazno',
  'sort_by' => 'Poredaj korisnike po',
  'err_no_users' => 'Tabela s podacima je prazna !',
  'err_edit_self' => 'Ne možete mijenjati Vaš profil, upotrijebite \'Moj profil\' link za to',
  'edit' => 'Uređivanje', //cpg1.4
  'with_selected' => 'Sa označenim:', //cpg1.4
  'delete' => 'Brisanje', //cpg1.4
  'delete_files_no' => 'zadrži slike (označi kao anonimni podnesak)', //cpg1.4
  'delete_files_yes' => 'izbriši javne slike', //cpg1.4
  'delete_comments_no' => 'zadrži komentare (označi kao anonimni podnesak)', //cpg1.4
  'delete_comments_yes' => 'izbriši komentare', //cpg1.4
  'activate' => 'Aktiviraj', //cpg1.4
  'deactivate' => 'Deaktiviraj', //cpg1.4
  'reset_password' => 'Resetuj lozinku', //cpg1.4
  'change_primary_membergroup' => 'Promijeni osnovnu grupu', //cpg1.4
  'add_secondary_membergroup' => 'Dodaj sekundarnu grupu', //cpg1.4
  'name' => 'Korisničko ime',
  'group' => 'Grupa',
  'inactive' => 'Neaktivni',
  'operations' => 'Operacije',
  'pictures' => 'Slike',
  'disk_space_used' => 'Iskorišteni prostor', //cpg1.4
  'disk_space_quota' => 'Dodijeljeni prostor', //cpg1.4
  'registered_on' => 'Registracija', //cpg1.4
  'last_visit' => 'Poslednja posjeta',
  'u_user_on_p_pages' => 'Br. korisnika: %d (br. strana: %d)',
  'confirm_del' => 'Jeste li sigurni da želite IZBRISATI ovog korisnika ? \\nSve njegove slike i albumi će takođe biti izbrisani.', //js-alert
  'mail' => 'E-MAIL',
  'err_unknown_user' => 'Odabrani korisnik ne postoji !',
  'modify_user' => 'Uredi korisnika',
  'notes' => 'Bilješke',
  'note_list' => '<li>Ako ne želite mijenjati trenutnu lozinku, ostavite polje za lozinku praznim',
  'password' => 'Lozinka',
  'user_active' => 'Korisnik je aktivan',
  'user_group' => 'Korisnička grupa',
  'user_email' => 'Korisnikov e-mail',
  'user_web_site' => 'Korisnikov web site',
  'create_new_user' => 'Dodaj novog korisnika',
  'user_location' => 'Mjesto boravka korisnika',
  'user_interests' => 'Korisnikovi hobiji',
  'user_occupation' => 'Korisnikovo zanimanje',
  'user_profile1' => '$user_profile1', //cpg1.4
  'user_profile2' => '$user_profile2', //cpg1.4
  'user_profile3' => '$user_profile3', //cpg1.4
  'user_profile4' => '$user_profile4', //cpg1.4
  'user_profile5' => '$user_profile5', //cpg1.4
  'user_profile6' => '$user_profile6', //cpg1.4
  'latest_upload' => 'Poslednja dodavanja',
  'never' => 'nikad',
  'search' => 'Pretraga korisnika', //cpg1.4
  'submit' => 'Pošalji', //cpg1.4
  'search_submit' => 'Naprijed!', //cpg1.4
  'search_result' => 'Rezultati pretrage za: ', //cpg1.4
  'alert_no_selection' => 'Morate odabrati najmanje jednog korisnika!', //cpg1.4 //js-alert
  'password' => 'lozinka', //cpg1.4
  'select_group' => 'Odaberite grupu', //cpg1.4
  'groups_alb_access' => 'Dozvole grupe za album', //cpg1.4
  'album' => 'Album', //cpg1.4
  'category' => 'Kategorija', //cpg1.4
  'modify' => 'Promijeniti?', //cpg1.4
  'group_no_access' => 'Ta grupa nema posebna prava', //cpg1.4
  'notice' => 'Bilješka', //cpg1.4
  'group_can_access' => 'Album(i) kojima samo "%s" mogu pristupiti', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //

if (defined('UTIL_PHP')) {
$lang_util_desc_php = array(
'Preuzmi nazive slika iz naziva datoteka', //cpg1.4
'Brisanje naziva', //cpg1.4
'Obnovi ikone i slike sa izmjenjenom veličinom', //cpg1.4
'Briše originalne slike i zamijeni ih s novim', //cpg1.4
'Briše originalne ili pomoćne slike da bi oslobodio prostor na disku', //cpg1.4
'Briše komentare bez pripadajućih slika', //cpg1.4
'Ponovo provjerava veličine i dimenzije slika (koje su prije toga ručno uređene)', //cpg1.4
'Resetuje broj viđenja', //cpg1.4
'Prikazuje phpinfo', //cpg1.4
'Osvježava bazu podataka', //cpg1.4
'Prikazuje log datoteke', //cpg1.4
);
$lang_util_php = array(
  'title' => 'Administratorski alati',
  'what_it_does' => 'Šta to radi',
  'file' => 'Datoteka',
  'problem' => 'Problem', //cpg1.4
  'status' => 'Status', //cpg1.4
  'title_set_to' => 'naslov postavljen na',
  'submit_form' => 'pošalji',
  'updated_succesfully' => 'uspješno osvježeno',
  'error_create' => 'GREŠKA pri kreiranju',
  'continue' => 'Procesuira više slika',
  'main_success' => 'Slika %s je bila uspješno upotrijebljena kao glavna slika',
  'error_rename' => 'Greška pri preimenovanju %s u %s',
  'error_not_found' => 'Slika %s nije pronađena',
  'back' => 'natrag na glavnu',
  'thumbs_wait' => 'Osvježava ikone i/ili slike promijenjene veličine, molimo Vas, sačekajte...',
  'thumbs_continue_wait' => 'Nastavlja osvježavanje ikona i/ili slika promijenjene veličine...',
  'titles_wait' => 'Osvježava naslove, sačekajte...',
  'delete_wait' => 'Briše naslove, sačekajte...',
  'replace_wait' => 'Briše originale i mijenja ih slikama promijenjene veličine, sačekajte..',
  'instruction' => 'Kratka uputstva',
  'instruction_action' => 'Odaberite radnju',
  'instruction_parameter' => 'Postavite parametre',
  'instruction_album' => 'Odaberite album',
  'instruction_press' => 'Pritisnite %s',
  'update' => 'Osvježava ikone i/ili slike promijenjene veličine',
  'update_what' => 'Što treba osvježiti',
  'update_thumb' => 'Samo ikone',
  'update_pic' => 'Samo slike promijenjene veličine',
  'update_both' => 'I ikone i slike promijenjene veličine',
  'update_number' => 'Broj procesuiranih slika po kliku',
  'update_option' => '(Pokušajte postaviti ovu opciju s nižim vrijednostima ako dođe do timeout problema)',
  'filename_title' => 'Ime datoteke &rArr; Naslov slike',
  'filename_how' => 'Kako treba promijeniti naziv slike',
  'filename_remove' => 'Odstranite .jpg nastavak i zamijenite _ (podcrta) praznim prostorom',
  'filename_euro' => 'Izmijeni 2003_11_23_13_20_20.jpg u 23/11/2003 13:20',
  'filename_us' => 'Izmijeni 2003_11_23_13_20_20.jpg u 11/23/2003 13:20',
  'filename_time' => 'Izmijeni 2003_11_23_13_20_20.jpg u 13:20',
  'delete' => 'Briši naslove fotografija ili fotografije originalne veličine',
  'delete_title' => 'Brisanje naslovoa fotografija',
  'delete_title_explanation' => 'Ovo će ukloniti sve naslove slika u odabranom albumu.', //cpg1.4
  'delete_original' => 'Brisanje fotografija originalnih veličina',
  'delete_original_explanation' => 'Brisanje svih VELIKIH slika.', //cpg1.4
  'delete_intermediate' => 'Brisanje međuslika', //cpg1.4
  'delete_intermediate_explanation' => 'Biće obrisane sve slike normalnih vrijednosti.<br />koristite za oslobađanje prostora na disku ako je onemogućeno \'Kreirajte normalne slike\' u podešavanjima nakon dodavanja slika.', //cpg1.4
  'delete_replace' => 'Briše originalne slike i zamjenjuje ih promijenjenim verzijama',
  'titles_deleted' => 'Svi naslovi u navedenom albumu su uklonjeni', //cpg1.4
  'deleting_intermediates' => 'Brisanje normalnih slika, molim sačekajte...', //cpg1.4
  'searching_orphans' => 'Traženje otpadaka, molim sačekajte...', //cpg1.4
  'select_album' => 'Izberite album',
  'delete_orphans' => 'Brisanje komentara koji nemaju pripadajuću sliku', //cpg1.4
  'delete_orphans_explanation' => 'Biće pronađeni svi komentari bez pripadajućih slika koje ćete lako obrisati.<br />Označite sve albume.', //cpg1.4
  'refresh_db' => 'Osvježite podatke o dimenzijama i veličini slika', //cpg1.4
  'refresh_db_explanation' => 'Ovim će biti osvježeni podaci o dimenzijama i veličini slika. Koristite ovo ako je u pitanju veličina prostora na disku ili ste ručno mijenjali datotke.', //cpg1.4
  'reset_views' => 'Resetovanje brojača viđenja', //cpg1.4
  'reset_views_explanation' => 'Postavite sve brojače viđenja slika na nulu u navedenom albumu.', //cpg1.4
  'orphan_comment' => 'pronađen komentar-siroče',
  'delete' => 'Briši',
  'delete_all' => 'Briši sve',
  'delete_all_orphans' => 'Briši sve siročiće?', //cpg1.4
  'comment' => 'Komentar: ',
  'nonexist' => 'priključen k nepostojećoj fotografiji # ',
  'phpinfo' => 'Prikaži phpinfo',
  'phpinfo_explanation' => 'Prikazuje tehničke podatke o serveru.<br /> - Ti podaci Vam mogu trebati ako biste tražili podršku za galeriju.', //cpg1.4
  'update_db' => 'Osvježi bazu podataka',
  'update_db_explanation' => 'Ako ste mijenjali datoteke aplikacije, dodavali, modifikovali ili nadograđivali iz prethodne verzije, obavezno pokrenite osvježavanje baze podataka. Time ćete kreirati neophodne tabele i/ili konfig vrijednosti u Vašoj bazi podataka.',
  'view_log' => 'Prikaz log datotaka', //cpg1.4
  'view_log_explanation' => 'Galerija bilježi različite aktivnosti korisnika. Logove možete praviti ako omogućite logovanje u <a href="admin.php">postavke galerije</a>.', //cpg1.4
  'versioncheck' => 'Provjeravanje verzije galerije', //cpg1.4
  'versioncheck_explanation' => 'Provjerava verziju svih datoteka. Na taj način je osigurano da su zamijenjene sve datoteke po nadgradnji.', //cpg1.4
  'bridgemanager' => 'Povezivanje galerije', //cpg1.4
  'bridgemanager_explanation' => 'Omogućava povezivanje galerije s drugim aplikacijama (npr. Vaš BBS).', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File versioncheck.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('VERSIONCHECK_PHP')) $lang_versioncheck_php = array(
  'title' => 'Provjeravanje verzije galerije', //cpg1.4
  'what_it_does' => 'Ta strana je namijenjena svima koji su nadgradili svoju galeriju. Program će pokušati uporediti sve datoteke na vašem serveru s istim na http://coppermine.sourceforge.net. Na taj način biće nađene sve datoteke kojima su potrebne zamjene s novijim verzijama.<br />Datoteke koje budu označene crvenom bojom potrebno je  zamijeniti, datoteke označene narandžasto je potrebno provjeriti (i po potrebi zamijeniti). Datoteke označene zelenim su ispravne i njih nije potrebno dirati.<br />Klikom na ikonicu za pomoć naći ćete još pojedinosti.', //cpg1.4
  'online_repository_unable' => 'Povezivanje sa onlajn spremištem nije uspjelo', //cpg1.4
  'online_repository_noconnect' => 'Galerija se nije uspjela povezati sa onlajn spremištem. Za to mogu postojati dva razloga:', //cpg1.4
  'online_repository_reason1' => 'Onlajn spremište je trenutno van funkcije - provjerite možete li pristupiti toj strani: %s - ako ne možete, pokušajte kasnije ponovo.', //cpg1.4
  'online_repository_reason2' => 'PHP na Vašem serveru ima postavljeno %s na OFF (po osnovnoj postavci, postavljeno je na ON). Ako imate pristup serveru, podesite tu opciju na ON u <i>php.ini</i>. Ako nemate pristup serveru, morate se pomiriti sa činjenicom da ne možete upoređivati svoje datoteke sa onlajn spremištem. Ta strana će onda prikazivati samo verzije datoteka koje dolaze sa Vašom distribucijom - nadograđene neće biti prikazane.', //cpg1.4
  'online_repository_skipped' => 'Povezivanje sa onlajn spremištem preskočeno', //cpg1.4
  'online_repository_to_local' => 'Program po osnovnoj postavci pokazuje lokalnu kopiju datoteke za prikaz verzije. Moguće je da su podaci netačni ako ste izvršili nadogradnju a niste prebacili sve datoteke. Promjene nakon nadgradnje neće biti prikazane.', //cpg1.4
  'local_repository_unable' => 'Povezivanje s podatkom na Vašem serveru nije uspjelo', //cpg1.4
  'local_repository_explanation' => 'Coppermine se nije uspio povezati s podatkom %s na Vašem serveru. To vjerovatno znači da niste prebacili sve podatke na server. Uradite to sada i osvježite prikaz strane.<br />Ako program opet ne uspije prikazati podatak, onda je vjerovatno Vaš webhost onemogućio <a href="http://www.php.net/manual/en/ref.filesystem.php">PHP funkciju za rad sa datotečnim sistemom</a>. U tom slučaju, taj alat ne možete koristiti.', //cpg1.4
  'coppermine_version_header' => 'Instalirana verzija galerije', //cpg1.4
  'coppermine_version_info' => 'Trenutno koristite verziju: %s', //cpg1.4
  'coppermine_version_explanation' => 'Ako mislite da koristite veću verziju Galerije od prikazane, vjerovatno niste  dodali najnoviju verziju datoteke <i>include/init.inc.php</i>', //cpg1.4
  'version_comparison' => 'Upoređivanje verzije', //cpg1.4
  'folder_file' => 'direktorij/datoteka', //cpg1.4
  'coppermine_version' => 'cpg verzija', //cpg1.4
  'file_version' => 'verzija datoteke', //cpg1.4
  'webcvs' => 'web svn', //cpg1.4
  'writable' => 'omogućava pisanje', //cpg1.4
  'not_writable' => 'ne omogućava pisanje', //cpg1.4
  'help' => 'Pomoć', //cpg1.4
  'help_file_not_exist_optional1' => 'datoteka/direktorij ne postoji', //cpg1.4
  'help_file_not_exist_optional2' => 'Datoteka/direktorij %s ne može biti pronađen na Vašem serveru. Mada nije obavezna, trebate je dodati (koristeći FTP klijent) na svoj server da bi predupredili probleme.', //cpg1.4
  'help_file_not_exist_mandatory1' => 'datoteka/direktorij ne postoji', //cpg1.4
  'help_file_not_exist_mandatory2' => 'Datoteka/direktorij %s ne može biti pronađen na Vašem serveru, iako je obavezna. Dodajte datoteku na server (koristeći FTP klijent).', //cpg1.4
  'help_no_local_version1' => 'Nema lokalne verzije datoteke', //cpg1.4
  'help_no_local_version2' => 'Program nije uspio izdvojiti verzije lokalne datoteke - Vaša datoteka je ili zastarjela ili izmijenjena, uklanjanjem podataka iz zaglavlja datoteke. Osvježenje datoteke je preporučeno.', //cpg1.4
  'help_local_version_outdated1' => 'Lokalna verzija je zastarjela', //cpg1.4
  'help_local_version_outdated2' => 'Vaša datoteka je iz starije verzije galerije (vjerovatno ste izvršili nadogradnju). Osvježite/zamijenite tu datoteku.', //cpg1.4
  'help_local_version_na1' => 'Provjera cvs verzije nije uspjela', //cpg1.4
  'help_local_version_na2' => 'Programu nije uspjelo provjeriti, koju verziju galerije upotrebljavate. Trebate dodati datoteku iz originalnog paketa aplikacije.', //cpg1.4
  'help_local_version_dev1' => 'Razvojna verzija', //cpg1.4
  'help_local_version_dev2' => 'Datoteka na vašem serveru izgleda novija nego što je trenutna verzija galerije. Vjerovatno upotrebljavate razvojnu verziju (preporučljivo samo ako znate šta radite), ili ste izvršili nadogradnju a niste osvježili datoteke include/init.inc.php', //cpg1.4
  'help_not_writable1' => 'Direktorij ne omogućava pisanje', //cpg1.4
  'help_not_writable2' => 'Promjenite dozvolu za datoteku (CHMOD) i omogućite pisanje u direktorij %s i u sve što je u njemu.', //cpg1.4
  'help_writable1' => 'Direktorij omogućava pisanje', //cpg1.4
  'help_writable2' => 'Direktorij %s omogućava pisanje. To je nepotreban rizik koji galeriji nije potreban.', //cpg1.4
  'help_writable_undetermined' => 'Galerija nije mogla odrediti da li je omogućeno pisanje u direktorij.', //cpg1.4
  'your_file' => 'vaša datoteka', //cpg1.4
  'reference_file' => 'referentna datoteka', //cpg1.4
  'summary' => 'Sažetak', //cpg1.4
  'total' => 'Ukupno provjerenih datoteka/direktorija', //cpg1.4
  'mandatory_files_missing' => 'Nedostaju obavezne datoteke', //cpg1.4
  'optional_files_missing' => 'Nedostaju neobavezne datoteke', //cpg1.4
  'files_from_older_version' => 'Datoteke, preostale od prijašnjih verzija', //cpg1.4
  'file_version_outdated' => 'Zastarjele datoteke', //cpg1.4
  'error_no_data' => 'Skripta nije mogla da pronađe željene informacije. Oprostite zbog neugodnosti.', //cpg1.4
  'go_to_webcvs' => 'idi na %s', //cpg1.4
  'options' => 'Opcije', //cpg1.4
  'show_optional_files' => 'prikaži neobavezne direktorije/datoteke', //cpg1.4
  'show_mandatory_files' => 'prikaži obavezne datoteke', //cpg1.4
  'show_file_versions' => 'prikaži verziju datoteke', //cpg1.4
  'show_errors_only' => 'prikaži samo direktorije/datoteke sa greškom', //cpg1.4
  'show_permissions' => 'prikaži dozvole za direktorije', //cpg1.4
  'show_condensed_output' => 'prikaži zbijene podatke (zbog lakšeg prikaza)', //cpg1.4
  'coppermine_in_webroot' => 'galerija je instalirana u root direktorij', //cpg1.4
  'connect_online_repository' => 'pokušaj se povezati na onlajn izvor podataka', //cpg1.4
  'show_additional_information' => 'prikaži dodatne informacije', //cpg1.4
  'no_webcvs_link' => 'nemoj prikazati web svn link', //cpg1.4
  'stable_webcvs_link' => 'prikaži web svn link do stabilne verzije', //cpg1.4
  'devel_webcvs_link' => 'prikaži web svn link do razvojne verzije', //cpg1.4
  'submit' => 'prihvati izmjene / osvježi', //cpg1.4
  'reset_to_defaults' => 'resetuj na osnovne vrijednosti', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File view_log.php  //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('VIEWLOG_PHP')) $lang_viewlog_php = array(
  'delete_all' => 'Briši sve logove', //cpg1.4
  'delete_this' => 'Briši ovaj log', //cpg1.4
  'view_logs' => 'Pregled logova', //cpg1.4
  'no_logs' => 'Nema logova.', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File xp_publish.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('XP_PUBLISH_PHP')) {

$lang_xp_publish_client = <<<EOT
<h1>XP Web čarobnjak za objavljivnje</h1><p>Ovaj modul omogućava upotrebu čarobnjaka <b>Windows XP</b> za prenos datoteka na server Vaše galerije.</p><p>Code is based on article posted by
EOT;

$lang_xp_publish_required = <<<EOT
<h2>Šta je potrebno</h2><ul><li>Windows XP da biste uopšte imali čarobnjaka.</li><li>Ispravna instalacija galerije na kojoj <b>radi funkcija za objavljivanje preko servera.</b></li></ul><h2>Kako to podesiti</h2><ul><li>Desni klik na
EOT;

$lang_xp_publish_select = <<<EOT
Izaberite &quot;save target as..&quot;. Sačuvajte datoteku na svom hardu. Prilikom pamćenja datoteke, provjerite da je predloženo ime datoteke <b>cpg_###.reg</b> (the ### predstavlja oznaku vremena). Promijenite u takvo ime, ako je potrebno (ostavite brojeve). Po preuzimanju, 2x kliknite na datoteku da biste registrovali svoj server sa čarobnjakom za objavljivanje.</li></ul>
EOT;

$lang_xp_publish_testing = <<<EOT
<h2>Testing</h2><ul><li>U Windows Explorer-u, odaberite neku datoteku i kliknite na <b>Publish xxx on the web</b> u lijevom oknu.</li><li>Potvrdite izbor datoteke. Kliknite <b>Next</b>.</li><li>Na popisu servisa, odaberite jedan za Vašu galeriju (ima ime Vaše galerije). Ako servis nije na popisu, provjerite da li imate instaliran <b>cpg_pub_wizard.reg</b> kako je opisano gore.</li><li>Upišite podatke za prijavu ako je potrebno.</li><li>Izaberite ciljni album za Vaše fotografije ili napravite novi.</li><li>Kliknite <b>next</b>. Započinje prenos fotografija.</li><li>Kada je prenos završen, provjerite u galeriji da li su fotografije pravilno dodate.</li></ul>
EOT;

$lang_xp_publish_notes = <<<EOT
<h2>Bilješka :</h2><ul><li>Kada prenos započne, čarobnjak ne može prikazati greške od strane galerije. Do okončanja procesa ne možete provjeriti da li su fotografije pravilno dodate, to možete samo u samoj galeriji.</li><li>Ako prenos ne uspije, omogućite &quot;Debug mode&quot; u postavkama galerije, pokušajte dodati samo jednu fotografiju i provjerite poruku o grešci u
EOT;

$lang_xp_publish_flood = <<<EOT
datoteci koja se nalazi u direktoriju galerije na Vašem serveru.</li><li>Da biste spriječili <i>poplavu fotografija</i> dodatih čarobnjakom, samo <b>administrator</b> i <b>korisnici koji imaju svoje vlastite albume</b> mogu koristiti ovu mogućnost.</li>
EOT;



$lang_xp_publish_php = array(
  'title' => 'Coppermine - XP Web čarobnjak', //cpg1.4
  'welcome' => 'Dobro došli <b>%s</b>,', //cpg1.4
  'need_login' => 'Prije nego što započnete upotrebu čarobnjaka, morate se prijaviti.<p/><p>Prilikom prijave ne zaboravite odabrati <b>upamti me</b> opciju, ako postoji.', //cpg1.4
  'no_alb' => 'Žalim, ali nema albuma u koje biste dodali fotografije pomoću čarobnja.', //cpg1.4
  'upload' => 'Dodavanje fotografija u postojeći album', //cpg1.4
  'create_new' => 'Kreiranje novog albuma', //cpg1.4
  'album' => 'Album', //cpg1.4
  'category' => 'Kategorija', //cpg1.4
  'new_alb_created' => 'Vaš novi album &quot;<b>%s</b>&quot; je kreiran.', //cpg1.4
  'continue' => 'Pritisnite &quot;NAPRIJED&quot; za početak dodavanja fotografija', //cpg1.4
  'link' => 'taj link', //cpg1.4
);
}
?>