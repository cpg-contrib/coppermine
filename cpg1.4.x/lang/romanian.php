<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2007 Coppermine Dev Team
  v1.1 originally written by Gregory DEMAR

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation; either version 2 of the License, or
  (at your option) any later version.
  ********************************************
  Coppermine version: 1.4.13
  $Source$
  $Revision: 3654 $
  $Author: gaugau $
  $Date: 2007-07-02 14:49:45 +0200 (Mo, 02 Jul 2007) $
**********************************************/

if (!defined('IN_COPPERMINE')) { die('Not in Coppermine...');}

// info about translators and translated language
//
//                +-----------------------------------------------------------------+                   
//                +                                                                 +                
//                +                    Trandus de Rubeluta Iulian                   +         
//                +        Traducerea Coppermine în romaneste cu diactritice        + 
//                +               email:  nkvader at gmail dot com                  + 
//                +   created using freeware PSPad by Jan Fiala www.pspad.com       + 
//                +                                                                 + 
//                +-----------------------------------------------------------------+
//
$lang_translation_info = array(
  'lang_name_english' => 'Romanian', //cpg1.4
  'lang_name_native' => 'Românã', //cpg1.4
  'lang_country_code' => 'ro', //cpg1.4
  'trans_name'=> 'Rubeluta Iulian',
  'trans_email' => 'nkvader@gmail.com',
  'trans_website' => '',
  'trans_date' => '2007-08-07',
);

$lang_charset = 'UTF-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('Bytes', 'KB', 'MB');

// Day of weeks and months
$lang_day_of_week = array('Duminica', 'Luni', 'Marti', 'Miercuri', 'Joi', 'Vineri', 'Sâmbata');
$lang_month = array('Ianuarie', 'Februarie', 'Martie', 'Aprilie', 'Mai', 'Iunie', 'Julie', 'August', 'Septembrie', 'Octombrie', 'Noiembrie', 'Decembrie');

// Some common strings
$lang_yes = 'Da';
$lang_no  = 'Nu';
$lang_back = 'ÎNAPOI';
$lang_continue = 'CONTINUA';
$lang_info = 'Informatie';
$lang_error = 'Eroare';
$lang_check_uncheck_all = 'bifeaza/debifeaza toate'; //cpg1.4

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
$lang_bad_words = array('pula', 'pizda', 'pula*', 'pizd*', '*pizd*', 'fut', 'penis', 'pul@', 'pizd@');

$lang_meta_album_names = array(
  'random' => 'Fisiere aleatoare',
  'lastup' => 'Ultimele adaugate',
  'lastalb'=> 'Albumele recent încarcate',
  'lastcom' => 'Comentarii recente',
  'topn' => 'Cele mai vizionate',
  'toprated' => 'Cotate maxim',
  'lasthits' => 'Vizionate recent',
  'search' => 'Rezultate cautare',
  'favpics'=> 'Fisiere favorite',  //cpg1.4
);

$lang_errors = array(
  'access_denied' => 'Nu aveti permisiunea de a vizualiza aceasta pagina.',
  'perm_denied' => 'Nu aveti permisiunea de a efectua aceasta operatie.',
  'param_missing' => 'Script-ul a fost apelat fara unul sau mai multi parametri necesari.',
  'non_exist_ap' => 'Albumul/Fisierul selectat nu exista !',
  'quota_exceeded' => 'Spatiu stocare depasit.<br /><br />Aveti un spatiu de stocare de [quota]K, si fisierele dumneavoastra insumeaza un total de  [space]K, adaugand acest fisier veti depasi spatiul de stocare.',
  'gd_file_type_err' => 'Când se utilizeaza biblioteca GD , tipurile de imaini permise sunr JPEG si/sau PNG.',
  'invalid_image' => 'Imaginea trimisa este \(digital\) corupta\/malformata sau nu poate fi prelucrata de libraria GD',
  'resize_failed' => 'Crearea miniaturii imaginii a esuat sau imaginea este prea mica.',
  'no_img_to_display' => 'Nici o imagine de afisat',
  'non_exist_cat' => 'Categoria selectionata nu exista',
  'orphan_cat' => 'O categorie nu are o radacina. Utilizati Manager de Categorii pentru a corecta aceasta problema!',
  'directory_ro' => 'Dosarul \'%s\' nu este inscriptionabil, fisierele nu pot fi sterse',
  'non_exist_comment' => 'Comentariul selectionat nu exista.',
  'pic_in_invalid_album' => 'Fisierul se afla într-un album inexistent - (%s)!?',
  'banned' => 'Sunteti în lista neagra, nu puteti utiliza acest site.',
  'not_with_udb' => 'Aceasta functie este dezactivata în Coppermine deoarece este integrat într-un program tip forum. Ori ceea ce doriti sa realizati nu este permis în configuratia actuala, ori aceasta comanda ar fi trebuit sa fie executata de forum.',
  'offline_title' => 'Neconectat',
  'offline_text' => 'Galeria este momentan în constructie - Va rugam reveniti',
  'ecards_empty' => 'Im momentul de fata nu sunt inregistrari pentru ecard-uri pentru afisare.',
  'action_failed' => 'Actiune esuata.  Coppermine nu poate procesa cererea dumneavoastra.',
  'no_zip' => 'Librariile necesare procesarii fisierelor arhiva ZIP nu sunt disponibile. Va rugam sa contactati administratorul galeriei.',
  'zip_type' => 'Nu aveti permisiunea de a încarca fisiere arhiva ZIP.',
  'database_query' => 'S-a înregistrat o eroare în timpul procesarii bazei de date', //cpg1.4
  'non_exist_comment' => 'Comentariul selectionat nu exista', //cpg1.4
);

$lang_bbcode_help_title = 'Ajutor coduri bbcode'; //cpg1.4
$lang_bbcode_help = 'Puteti adauga adrese de pagini web si\/sau paginare  pentru acest câmp  utilizând urmatoarele coduri bbcode : <li>[b]Text Bold (Ingrosat)[/b] =&gt; <b>Text Bold (Ingrosat)</b></li><li>[i]Text Italic (Inclinat)[/i] =&gt; <i>Text Italic</i></li><li>[url=http://nume-de-pagina.com/]Url Text[/url] =&gt; <a href="http://nume-de-pagina.com">Text pentru adresa </a></li><li>[email]utilizator@serviciu-de-email.com[/email] =&gt; <a href="mailto:nume@serviciu-de-email.com">nume@serviciu-de-email.com</a></li><li>[color=red]Exemplu de text[/color] =&gt; <span style="color:red">Exemplu de text</span></li><li>[img]http://coppermine-gallery.net/demo/cpg14x/images/red.gif[/img] => <img src="../images/red.gif" border="0" alt="" /></li>'; //cpg1.4

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
  'home_title' => 'Pagina de start',
  'home_lnk' => 'Start',
  'alb_list_title' => 'Spre lista de albume',
  'alb_list_lnk' => 'Lista de albume',
  'my_gal_title' => 'Spre galeria mea personala',
  'my_gal_lnk' => 'Galeria mea',
  'my_prof_title' => 'Spre profilul meu personal', //cpg1.4
  'my_prof_lnk' => 'Profilul meu',
  'adm_mode_title' => 'Schimba în mod Administrare',
  'adm_mode_lnk' => 'Mod Administrare',
  'usr_mode_title' => 'Schimba în mod Utilizator',
  'usr_mode_lnk' => 'Mod Utilizator',
  'upload_pic_title' => 'Încarcati un fisier într-un album',
  'upload_pic_lnk' => 'Încarcati fisier',
  'register_title' => 'Creare cont',
  'register_lnk' => 'Inregistrare',
  'login_title' => 'Autentifica-ma', //cpg1.4
  'login_lnk' => 'Autentificare',
  'logout_title' => 'Dezautentifica-ma', //cpg1.4
  'logout_lnk' => 'Dezautentificare',
  'lastup_title' => 'Arata incarcari recente', //cpg1.4
  'lastup_lnk' => 'Încarcari recente',
  'lastcom_title' => 'Arata comentariile recente', //cpg1.4
  'lastcom_lnk' => 'Comentarii recente',
  'topn_title' => 'Arata cele mai vizionate', //cpg1.4
  'topn_lnk' => 'Cele mai vizionate',
  'toprated_title' => 'Arata cele mai bine cotate', //cpg1.4
  'toprated_lnk' => 'Cele mai bine cotate',
  'search_title' => 'Cauta în galerie', //cpg1.4
  'search_lnk' => 'Cautare',
  'fav_title' => 'Spre Favorite', //cpg1.4
  'fav_lnk' => 'Favorite',
  'memberlist_title' => 'Arata lista de membri',
  'memberlist_lnk' => 'Lista de memntri',
  'faq_title' => 'Intrebari frecvente despre &quot;Coppermine&quot;',
  'faq_lnk' => 'INF',
);

$lang_gallery_admin_menu = array(
  'upl_app_title' => 'Aproba noi incarcari', //cpg1.4
  'upl_app_lnk' => 'Acord pentru incarcari',
  'admin_title' => 'Spre configurare', //cpg1.4
  'admin_lnk' => 'Configurare', //cpg1.4
  'albums_title' => 'Spre configurare album(e)', //cpg1.4
  'albums_lnk' => 'Album(e)',
  'categories_title' => 'Spre configurare categorii', //cpg1.4
  'categories_lnk' => 'Categorii',
  'users_title' => 'Spre configurare utilizatori', //cpg1.4
  'users_lnk' => 'Utilizatori',
  'groups_title' => 'Spre configurare grupuri', //cpg1.4
  'groups_lnk' => 'Groupuri',
  'comments_title' => 'Verifica comentariile', //cpg1.4
  'comments_lnk' => 'Verificare comentarii',
  'searchnew_title' => 'Spre adaugare fisire multiple', //cpg1.4
  'searchnew_lnk' => 'Adaugare fisiere multiple',
  'util_title' => 'Spre unelte administrare', //cpg1.4
  'util_lnk' => 'Unelte administrator',
  'key_title' => 'Spre dictionar de cuvinte', //cpg1.4
  'key_lnk' => 'Dictionar de cuvinte', //cpg1.4
  'ban_title' => 'Spre utilizatorii blocati', //cpg1.4
  'ban_lnk' => 'Utilizatori blocati',
  'db_ecard_title' => 'Verifica Ecard-uri', //cpg1.4
  'db_ecard_lnk' => 'Afiseaza Ecard-uri',
  'pictures_title' => 'Sortreaza imaginile mele', //cpg1.4
  'pictures_lnk' => 'Sortare imagini', //cpg1.4
  'documentation_lnk' => 'Documentatie', //cpg1.4
  'documentation_title' => 'Manual utilizare Coppermine', //cpg1.4
);

$lang_user_admin_menu = array(
  'albmgr_title' => 'Creaza si ordoneaza albumele mele', //cpg1.4
  'albmgr_lnk' => 'Creaza / Ordoneaza albumele mele',
  'modifyalb_title' => 'Spre modificare albume',  //cpg1.4
  'modifyalb_lnk' => 'Modifica albumele mele',
  'my_prof_title' => 'Spre profilul meu personal', //cpg1.4
  'my_prof_lnk' => 'Profilul meu personal',
);

$lang_cat_list = array(
  'category' => 'Categorie',
  'albums' => 'Albume',
  'pictures' => 'Imagini',
);

$lang_album_list = array(
  'album_on_page' => '%d album(e) în %d pagina(i)',
);

$lang_thumb_view = array(
  'date' => 'DATA',
  //Sort by filename and title
  'name' => 'NUME FISIER',
  'title' => 'TITLU',
  'sort_da' => 'Sorteaza crescator dupa data',
  'sort_dd' => 'Sorteaza descrescator dupa data',
  'sort_na' => 'Sorteaza crescator dupa nume',
  'sort_nd' => 'Sorteaza descrescator dupa nume',
  'sort_ta' => 'Sorteaza crescator dupa titlu',
  'sort_td' => 'Sorteaza descrescator dupa titlu',
  'position' => 'POZITIE', //cpg1.4
  'sort_pa' => 'Sorteaza crescator dupa pozitie', //cpg1.4
  'sort_pd' => 'Sorteaza descrescator dupa pozitie', //cpg1.4
  'download_zip' => 'Descarca într-un fisier arhiva ZIP',
  'pic_on_page' => '%d imagine(i) în %d pagina(i)',
  'user_on_page' => '%d utilizator(i) în  %d pagina(i)',
  'enter_alb_pass' => 'Parola pentru album', //cpg1.4
  'invalid_pass' => 'Parola este gresita', //cpg1.4
  'pass' => 'Parola', //cpg1.4
  'submit' => 'Trimite', //cpg1.4
);

$lang_img_nav_bar = array(
  'thumb_title' => 'Inapoi în pagina de miniaturi imagini',
  'pic_info_title' => 'Arata/Ascunde informatii imagine',
  'slideshow_title' => 'Prezentare automata imagine dupa imagine',
  'ecard_title' => 'Trimite aceasta imagine ca un e-card (Carte Postala Electronica)',
  'ecard_disabled' => 'e-card-urile (Cartile Postale Electronice) sunt dezactivate',
  'ecard_disabled_msg' => 'Nu aveti permisiunea de a trimite e-cards (Carti Postale Electronice)', //js-alert
  'prev_title' => 'Vizualizeaza precedenta',
  'next_title' => 'Vizualizeaza urmatoarea',
  'pic_pos' => 'IMAGINE %s/%s',
  'report_title' => 'Raporteaza aceastea imagine administratorului', //cpg1.4
  'go_album_end' => 'Sari spre sfarsit', //cpg1.4
  'go_album_start' => 'Sari la inceput', //cpg1.4
  'go_back_x_items' => 'Sari înapoi %s obiecte', //cpg1.4
  'go_forward_x_items' => 'Sari înainte %s obiecte', //cpg1.4
);

$lang_rate_pic = array(
  'rate_this_pic' => 'Coteaza aceasta imagine ',
  'no_votes' => '(Nici un vot inca)',
  'rating' => '(Cotarea curenta este de : %s / 5 cu un numar de %s vot(uri)',
  'rubbish' => 'De aruncat',
  'poor' => 'Slab',
  'fair' => 'Acceptabil',
  'good' => 'Bine',
  'excellent' => 'Foarte bine',
  'great' => 'Extraordinar!',
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
  CRITICAL_ERROR => 'Eroare critica',
  'file' => 'Fisier: ',
  'line' => 'Linie: ',
);

$lang_display_thumbnails = array(
  'filename' => 'Nume fisier=', //cpg1.4
  'filesize' => 'Marime Fisier=', //cpg1.4
  'dimensions' => 'Dimensiuni=', //cpg1.4
  'date_added' => 'Data adaugarii=', //cpg1.4
);

$lang_get_pic_data = array(
  'n_comments' => '%s commentarii',
  'n_views' => '%s vizualizari',
  'n_votes' => '(%s voturi)',
);

$lang_cpg_debug_output = array(
  'debug_info' => 'Informatii descoperire erori',
  'select_all' => 'Selectioneaza tot',
  'copy_and_paste_instructions' => 'daca doriti sa cereti ajutor în listele de discutie pentru ajutor Coppermine, copiati acest raport impreuna cu mesajul de eroare (daca exista). Asigurati-va ca ati ÎNLOCUIT parola cu ***  înainte de a trimite mesajul. <br />Nota: Acest mesaj este doar pentru informare,acesta nu inseamna ca aveti intradevar o eroare în galeria dumneavoastra.', //cpg1.4
  'phpinfo' => 'Afiseaza detalii PHP',
  'notices' => 'Indicatii/Note', //cpg1.4
);

$lang_language_selection = array(
  'reset_language' => 'Limba preselectata',
  'choose_language' => 'Alegeti limba',
);

$lang_theme_selection = array(
  'reset_theme' => 'Tema grafica preselectata',
  'choose_theme' => 'Alegeti o tema grafica',
);

$lang_version_alert = array(
  'version_alert' => 'Versiune nesuportata !', //cpg1.4
  'security_alert' => 'Alerta SECURITATE !', //cpg1.4.3
  'relocate_exists' => 'Inlaturati <a href="http://coppermine-gallery.net/forum/index.php?topic=24217.0" target=_blank>fisierul  relocate_server.php</a> din pagina dumneavoastra!',
  'no_stable_version' => 'Rulati Coppermine %s (%s) care este destinat utilizatorilor foarte experimentati - aceasta versiune este difuzata fara suport tehnic sau garantii. Utilizarea ei presupune asumarea eventualelor riscuri. Puteti de asemenea reveni la o versiune stabila inferioara, în cazul în care doriti suport tehnic.', //cpg1.4
  'gallery_offline' => 'Galeria este momentan în mod intretinere (lucru), si este vizibila doar pentru dumneavoastra ca Administrator. Nu uitati sa schimbati în modul normal dupa ce terminati lucrarile de intretinere.', //cpg1.4
);

$lang_create_tabs = array(
  'previous' => 'Precedent', //cpg1.4
  'next' => 'Urmator', //cpg1.4
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
  'error_wakeup' => "Imposibil de apelat plug-în-ul '%s'", //cpg1.4
  'error_install' => "Imposibil de instalat plugin-ul '%s'", //cpg1.4
  'error_uninstall' => "Imposibil de sters plugin-ul '%s'", //cpg1.4
  'error_sleep' => "Imposibil de sters plugin-ul '%s'<br />", //cpg1.4
);

// ------------------------------------------------------------------------- //
// File include/smilies.inc.php
// ------------------------------------------------------------------------- //

if (defined('SMILIES_PHP')) $lang_smilies_inc_php = array(
  'Exclamation' => 'Exclamatie',
  'Question' => 'Întrebare',
  'Very Happy' => 'Foarte fericit',
  'Smile' => 'Zâmbet',
  'Sad' => 'Trist',
  'Surprised' => 'Surprins',
  'Shocked' => 'Socat',
  'Confused' => 'Confuz',
  'Cool' => 'Fain',
  'Laughing' => 'Râset',
  'Mad' => ' Nervos ',
  'Razz' => 'Razz',
  'Embarassed' => 'Intimidat',
  'Crying or Very sad' => 'Plânset sau Foarte trist',
  'Evil or Very Mad' => 'Diabolic sau Nebun-de-legat',
  'Twisted Evil' => 'Dracusor',
  'Rolling Eyes' => 'Ochi peste cap',
  'Wink' => 'Facut cu ochiul',
  'Idea' => 'Idee',
  'Arrow' => 'Sageata',
  'Neutral' => 'Neutru',
  'Mr. Green' => 'Domnul Verde',
);

// ------------------------------------------------------------------------- //
// File addpic.php
// ------------------------------------------------------------------------- //

// void

// ------------------------------------------------------------------------- //
// File mode.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('MODE_PHP')) $lang_mode_php = array(
  0 => 'Parasire mod Administrare...',
  1 => 'Intrare în mod Administrare...',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
  'alb_need_name' => 'Albumul trebuie sa aiba un nume !', //js-alert
  'confirm_modifs' => 'Sunteti sigur ca doriti sa efectuati aceste modificari ?', //js-alert
  'no_change' => 'Nu ati facut nici o modificare !', //js-alert
  'new_album' => 'Album nou',
  'confirm_delete1' => 'Sunteti sigur ca doriti sa stergeti acest album ?', //js-alert
  'confirm_delete2' => '\nToate imaginile si comentariile continute în el vor fi pierdute definitiv !', //js-alert
  'select_first' => 'Selectionati întâi un album', //js-alert
  'alb_mrg' => 'Managment Album',
  'my_gallery' => '* Galeria mea *',
  'no_category' => '* Nici o categorie *',
  'delete' => 'Sterge',
  'new' => 'Nou',
  'apply_modifs' => 'Aplica modificarile',
  'select_category' => 'Selectionati categoria',
);

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) $lang_banning_php = array(
  'title' => 'Interzicere utilizatori', //cpg1.4
  'user_name' => 'Nume Utilizator', //cpg1.4
  'ip_address' => 'Adresa IP', //cpg1.4
  'expiry' => 'Expira (Niciodatã în cazul în care nu se completeazã)', //cpg1.4
  'edit_ban' => 'Salvati schimbarile', //cpg1.4
  'delete_ban' => 'Stergere', //cpg1.4
  'add_new' => 'Adaugare restrictie', //cpg1.4
  'add_ban' => 'Adaugare', //cpg1.4
  'error_user' => 'Nu gasesc utilizatorul', //cpg1.4
  'error_specify' => 'Trebuie specificat ori un nume de utilizator ori o adresa IP', //cpg1.4
  'error_ban_id' => 'ID Restrictie incorect!', //cpg1.4
  'error_admin_ban' => 'Nu va puteti auto restrictiona!', //cpg1.4
  'error_server_ban' => 'Sunteti pe cale sa restrictionati propriul server? Actiune imposibila ...', //cpg1.4
  'error_ip_forbidden' => 'Nu puteti restrictiona aceasta adresa IP de mascarada (adresa locala ) <br />daca doriti sa permiteti banarea adreselor locale, schimbati acest lucru în <a href="admin.php">Configuratie</a> (Are sens doar daca Coppermine ruleaza intr-o retea locala gen Local Area Network - LAN).', //cpg1.4
  'lookup_ip' => 'Cauta o adresa IP', //cpg1.4
  'submit' => 'go!', //cpg1.4
  'select_date' => 'Selectionati data', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File bridgemgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('BRIDGEMGR_PHP')) $lang_bridgemgr_php = array(
  'title' => 'Asistent Pasarela (Coopermine Bridge)',
  'warning' => 'Avertisment: Utilizând acest asistent sunteti constient ca date importante vor fi trimise utilizând formulare html. Executati acest asistent pe computerul personal (nu pe un computer public, hot spot wifi sau un internet cafe), si asigurati-va ca ati sters fisirele temporare din navigator dupa ce ati terminat.Nerespectarea acestora poate duce la interpelarea datelor dumneavoastra de catre terte persoane !',
  'back' => 'Precedent',
  'next' => 'Urmator',
  'start_wizard' => 'Porneste asistentul de pasarela',
  'finish' => 'Terminare',
  'hide_unused_fields' => 'Ascunde câmpurile neutilizate (recomandat)',
  'clear_unused_db_fields' => 'Curata  înregistrari invalide din baza de date (recomandat)',
  'custom_bridge_file' => 'Fisierul pasarela personalizat (daca numele fisierului pasarela este <i>nume-fisier-pasarela.inc.php</i>, introduceti <i>nume-fisier-pasarela</i> în acest câmp)',
  'no_action_needed' => 'Nici o actiune necesara în aceasta etapa. Clic pe butonul \"Urmator\" pentru continuare.',
  'reset_to_default' => 'Reinitializare valoare standard.',
  'choose_bbs_app' => 'Alegeti aplicatia cu care Coopermine va face o pasarela',
  'support_url' => 'Vizitati aici pentru suport în legatura cu aceasta aplicatie',
  'settings_path' => 'Calea (caile) utilizate de aplicatia BBS',
  'database_connection' => 'Conexiune baza de date',
  'database_tables' => 'Tablou(uri) baza date',
  'bbs_groups' => 'Grupuri BBS (Bulletin Board System)',
  'license_number' => 'Numar Licenta',
  'license_number_explanation' => 'Introduceti numarul de licenta ( daca exista )',
  'db_database_name' => 'Nume baza de date',
  'db_database_name_explanation' => 'Introduceti numele bazei de date pe care BBS-ul dumneavoastra o utilizeaza',
  'db_hostname' => 'Gazda bazei de date',
  'db_hostname_explanation' => 'Numele gazdei unde baza de date mySQL este localizata, în mod curent aceasta valoare este &quot;localhost&quot;',
  'db_username' => 'Cont utilizator baza de date',
  'db_username_explanation' => 'Utilizatorul mySQL pentru conexiune cu BBS-ul',
  'db_password' => 'Parola bazei de date',
  'db_password_explanation' => 'Parola acestui cont utilizator mySQL',
  'full_forum_url' => 'Adresa URL a Forum-ului ',
  'full_forum_url_explanation' => 'Adresa web completa a BBS-ului (includeti http:// , exemplu:    http://www.adresa-forumului-dumneavoastra.com/forum)',
  'relative_path_of_forum_from_webroot' => 'Calea relativa a forumului ',
  'relative_path_of_forum_from_webroot_explanation' => 'Calea relativa spre BBS-ul dumneavoastra începând cu dosarul radacina (Exemplu: Daca BBS-ul se afla la aceasta adresa: http://www.adresa-forumului-dumneavoastra.com/forum/ , atunci introduceti  &quot;/forum/&quot; în acest câmp)',
  'relative_path_to_config_file' => 'Calea relativa spre fisierul configuratie al BBS-ului dumneavoastra ',
  'relative_path_to_config_file_explanation' => 'Calea relativa spre BBS, vazuta din perspectiva dosarului Coppermine. (Exemplu  &quot;../forum/&quot; daca BBS-ul se afla la aceasta adresa  http://www.adresa-forumului-dumneavoastra.com/forum/ si  Coppermine se afla la aceasta adresa http://www.adresa-forumului-dumneavoastra.com/galerie/  În acest exemplu , &quot; .. &quot; semnifica un dosar înainte (spre a ajunge în radacina / ).)',
  'cookie_prefix' => 'Prefix Cookie',
  'cookie_prefix_explanation' => 'Prefixul trebuie sa fie prefixul utilizat de cookie-urile BBS-ului (pentru PhpBB standard este phpbb2mysql )',
  'table_prefix' => 'Prefixul Tablourilor',
  'table_prefix_explanation' => 'Trebuie sa fie acelasi prefix ca cel utilizat de BBS (pentru phpBB standard este phpbb_ ). ',
  'user_table' => 'Tabou utilizator',
  'user_table_explanation' => '(În mod normal, valoarea standard ar trebui sa fie OK.În mod contrar BBS-ul dumneavoastrã a avut o instalare personalizata.)',
  'session_table' => 'Sesiune Tablou',
  'session_table_explanation' => '(În mod normal, valoarea standard ar trebui sa fie OK.În mod contrar BBS-ul dumneavoastra a avut o instalare personalizata.)',
  'group_table' => 'Grupur Tablou',
  'group_table_explanation' => '(În mod normal, valoarea standard ar trebui sa fie OK.În mod contrar BBS-ul dumneavoastra a avut o instalare personalizata.)',
  'group_relation_table' => 'Relatia grup tablou',
  'group_relation_table_explanation' => 'În mod normal, valoarea standard ar trebui sa fie OK.În mod contrar BBS-ul dumneavoastra a avut o instalare personalizata.',
  'group_mapping_table' => 'Maparea tabelului grup',
  'group_mapping_table_explanation' => '(În mod normal, valoarea standard ar trebui sa fie OK.În mod contrar BBS-ul dumneavoastra a avut o instalare personalizata.)',
  'use_standard_groups' => 'Utilizeaza grupuri utilizator BBS standard',
  'use_standard_groups_explanation' => 'Utilizarea grupuri de utilizatori standard (continute deja) (valoare recomandata). Aceasta va face ca toate grupurile de utilizatori personalizate sa devina nule. Dezactivati aceasta optiune doar daca sunteti SIGUR de ceea ce faceti !',
  'validating_group' => 'Grupul Validare',
  'validating_group_explanation' => 'ID-ul grupului unde conturile utilizatorilor care asteapta validarea administratorului se afla . (În mod normal, valoarea standard ar trebui sa fie OK.În mod contrar BBS-ul dumneavoastra a avut o instalare personalizata.)',
  'guest_group' => 'Grupul Anonimilor',
  'guest_group_explanation' => 'ID-ul grupului unde utilizatorii anonimi se afla. (Valoarea standard ar trebui sa fie OK. Editati doar daca suneti SIGUR de ceea ce faceti)',
  'member_group' => 'Grup Memnri',
  'member_group_explanation' => 'ID-ul grupului unde se afla membrii &quot;generali&quot; (Valoarea standard ar trebui sa fie OK. Editati doar daca suneti SIGUR de ceea ce faceti)',
  'admin_group' => 'Grup Admin',
  'admin_group_explanation' => 'ID-ul grupului unde se afla administratorul(ii) (Valoarea standard ar trebui sa fie OK. Editati doar daca suneti SIGUR de ceea ce faceti)',
  'banned_group' => 'Banned group',
  'banned_group_explanation' => 'ID-ul grupului unde se afla utilizatorii blocati (Valoarea standard ar trebui sa fie OK. Editati doar daca suneti SIGUR de ceea ce faceti)',
  'global_moderators_group' => 'Grupul normal al moderatorilor',
  'global_moderators_group_explanation' => 'ID-ul grupului unde se afla moderatorii normali (Valoarea standard ar trebui sa fie OK. Editati doar daca suneti SIGUR de ceea ce faceti)',
  'special_settings' => 'Setari specifice BBS',
  'logout_flag' => 'Versiunea phpBB',
  'logout_flag_explanation' => 'Care este versiunea BBS-lui dumneavoastra (aceasta valoare specifica modul în care se realizeaza dezautentificarea )',
  'use_post_based_groups' => 'Se utilizeaza grupuri post-based ?',
  'logout_flag_yes' => '2.0.5 sau mai nou',
  'logout_flag_no' => '2.0.4 sau mai vechi',
  'use_post_based_groups_explanation' => 'Ar trebui ca grupurile din BBS care sunt definite dupa numarul de postari sa fie adaugat în cont (permite o plaja mai mare de management) sau doar grupurile standard (face administrarea mai usoara , recomandat). Puteti reveni asupra acestei setari mai târziu pentru a o modifica.',
  'use_post_based_groups_yes' => 'Da',
  'use_post_based_groups_no' => 'Nu',
  'error_title' => 'Aceste erori trebuie corectate înainte de a continua. Reveniti în ecranul anterior.',
  'error_specify_bbs' => 'Trebuie sa specificati ce aplicatie doriti sa fie integrata cu Coppermine.',
  'error_no_blank_name' => 'Numele pentru fisierul pasarela personalizat nu poate fi vid.',
  'error_no_special_chars' => 'Fisierul pasarela nu poate contine caractere speciale, cu exceptia underscore (_) si dash (-)!',
  'error_bridge_file_not_exist' => 'Fisierul pasarela nu exista pe server. Verificati daca l-ai încarcat.',
  'finalize' => 'Activeaza/Dezactiveaza integrarea cu BBS',
  'finalize_explanation' => ' Pâna în momentul de fata ,setarile specificate au fost scrise în baza de date dar integrarea cu BBS nu a fost activata . Puteti activa / dezactiva oricând, mai târziu. Asigurati-va ca retineti numele de administrator si parola pentru Coppermine versiunea de sine statatoare , în cazul în care doriti sa faceti alte schimbari. Daca ceva nu functioneaza mergeti la %s si dezactivati integrarea BBS utilizând versiunea de sine statatoare.',
  'your_bridge_settings' => 'Setarile pasarelei dumneavoastra',
  'title_enable' => 'Activeaza integrare/pasarela cu %s',
  'bridge_enable_yes' => 'Activeaza',
  'bridge_enable_no' => 'Dezactiveaza',
  'error_must_not_be_empty' => 'nu trebuie sa fie vid',
  'error_either_be' => 'trebuie sa fie ori %s ori %s',
  'error_folder_not_exist' => '%s nu exista. Corectati valoarea introdusa pentru %s',
  'error_cookie_not_readible' => 'Coppermine nu poate citi un cookie cu numele %s. Corecteaza valoarea introdusa pentru %s, sau mergeti în panoul de administrare al BBS si asigurati-va despre caminul de acces. ( lizibilitatea de catre Coppermine) .',
  'error_mandatory_field_empty' => 'Nu puteti lasa vid câmpul %s  -  Introduceti o valoare corecta.',
  'error_no_trailing_slash' => 'Trebuie sa existe un caracter slash în câmpul %s.',
  'error_trailing_slash' => 'Trebuie sa existe un caracter slash în câmpul %s.',
  'error_db_connect' => 'Conexiunea cu baza de date mySQL este imposibila. Mesajul trimis de baza de date este: ',
  'error_db_name' => 'Deoarece Coppermine nu a reusit sa stabileasca o conexiune, nu a fost capabil sa gaseasca baza de date %s. Verificati va rog ca ati specificat %s corespunzator. Mesajul trimis de mySQL este:',
  'error_prefix_and_table' => '%s si ',
  'error_db_table' => 'Nu a fost gasit tabloul %s. Verificati daca ati specificat %s corespunzator.',
  'recovery_title' => 'Manager Pasarela: Recuperare de Urgenta',
  'recovery_explanation' => 'Daca ati ajuns aici pentru a administra integrarea BBS cu galeria Coppermine , trebuie sa va autentificati intai ca Administrator . Daca nu reusiti acest lucru deoarece pasarela nu functioneaza,puteti dezactiva integrarea BBS cu ajutorul aceste pagini. Introducand numele de utilizator si parola nu va va autentifica, ci va dezactiva doar integrarea BBS. Consultati Documentatia aferenta pentru detalii.',
  'username' => 'Utilizator',
  'password' => 'Parola',
  'disable_submit' => 'Trimite',
  'recovery_success_title' => 'Autentificare reusita',
  'recovery_success_content' => 'Ati reusit sa dezactivati pasarela BBS .  Instalarea Coppermine ruleaza în acest moment în modul de sine statator.',
  'recovery_success_advice_login' => 'Autentificati-va ca administrator pentru editare setari pasarela si/sau sa activati din nou integrarea cu BBS.',
  'goto_login' => 'Spre pagina de autentificare',
  'goto_bridgemgr' => 'Spre manager de pasarela',
  'recovery_failure_title' => 'Autentificare esuata',
  'recovery_failure_content' => 'Ati furnizat date gresite. Datele utilizate trebuie sa fie aceleasi cu ale contului Administrator folosite la instalarea Coppermine.',
  'try_again' => 'încercati din nou',
  'recovery_wait_title' => 'Timpul de asteptare inca s-a scurs',
  'recovery_wait_content' => 'Din motive de securitate acest script nu permite autentificari esuate în perioade scurte de timp , deci trebuie sa asteptati cateva minute pâna veti avea acces la autentificare.',
  'wait' => 'wait',
  'create_redir_file' => 'Creare fisier redirectionare (recomandat)',
  'create_redir_file_explanation' => 'Pentru redirectionare utilizatori înapoi la galeria Coppermine odata ce ei s-au autentificat în BBS , aveti nevoie ca un fisier de redirectionare sa fie creat în dosarul unde se afla BBS-ul. Când aceasta optiune este activata, managerul de pasarela va incerca sa creeze acest fisier pentru dumneavoastra, sau sa va furnizeze liniile de cod pentru a crea fisierul manual.',
  'browse' => 'Rasfoieste',
);

// ------------------------------------------------------------------------- //
// File calendar.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('CALENDAR_PHP')) $lang_calendar_php = array(
  'title' => 'Calendar', //cpg1.4
  'close' => 'Inchide', //cpg1.4
  'clear_date' => 'Curata data', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
  'miss_param' => 'Parametrii necesari pentru operatia \'%s\' nu au fost specificati !',
  'unknown_cat' => 'Categoria selectionata nu exista în baza de date',
  'usergal_cat_ro' => 'Categoria din Galeria utilizatorilor nu poate fi stearsa !',
  'manage_cat' => 'Gestioneaza categoriile',
  'confirm_delete' => 'Sunteti sigur ca doriti sa stergeti aceasta categorie?', //js-alert
  'category' => 'Categorie',
  'operations' => 'Operatii',
  'move_into' => 'Muta în',
  'update_create' => 'Actualizeaza/Creaza categorie',
  'parent_cat' => 'Categoria parinte',
  'cat_title' => 'Titlu Categorie',
  'cat_thumb' => 'Miniatura Categorie',
  'cat_desc' => 'Descriere Categorie',
  'categories_alpha_sort' => 'Sorteaza categoriile în ordine alfabetica (în loc de ordine de sortare personalizata)', //cpg1.4
  'save_cfg' => 'Salveaza configuratia', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File admin.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('ADMIN_PHP')) $lang_admin_php = array(
  'title' => 'Configuratie Galerie', //cpg1.4
  'manage_exif' => 'Gestioneaza afisarea informatiilor EXIF', //cpg1.4
  'manage_plugins' => 'Gestionar de plugin-uri', //cpg1.4
  'manage_keyword' => 'Gestionar de cuvinte-cheie', //cpg1.4
  'restore_cfg' => 'Restaurare valori standard',
  'save_cfg' => 'Salvare noua configuratie',
  'notes' => 'Note',
  'info' => 'Informatie',
  'upd_success' => 'Configuratia Coppermine a fost actualizata',
  'restore_success' => 'Configuratia standard Coppermine a fost restaurata',
  'name_a' => 'Nume Crescator',
  'name_d' => 'Nume Descrescator',
  'title_a' => 'Titlu Crescator',
  'title_d' => 'Titlu Descrescator',
  'date_a' => 'Data Crescator',
  'date_d' => 'Data Descrescator',
  'pos_a' => 'Pozitie Crescator', //cpg1.4
  'pos_d' => 'Pozitie Descrescator', //cpg1.4
  'th_any' => 'Aspect Maxim',
  'th_ht' => 'Inaltime',
  'th_wd' => 'Latime',
  'label' => 'Eticheta',
  'item' => 'Obiect',
  'debug_everyone' => 'Oricine',
  'debug_admin' => 'Doar Administratorul',
  'no_logs'=> 'Dezactivat', //cpg1.4
  'log_normal'=> 'Normal', //cpg1.4
  'log_all' => 'Tot', //cpg1.4
  'view_logs' => 'Vizualizare loguri', //cpg1.4
  'click_expand' => 'Clic pe o sectiune pentru extindere', //cpg1.4
  'expand_all' => 'Extinde tot', //cpg1.4
  'notice1' => '(*) Aceste setari nu ar trebui sa fie schimbate daca aveti deja imagini în baza de date.', //cpg1.4 - (relocated)
  'notice2' => '(**) Când se schimba aceasta valoare,doar imaginile adaugate de acum înainte vor fi afectate de aceasta setare , deci este indicat ca aceasta sa nu fie schimbata daca exista deja imagini în galerie. Puteti totusi sa  aplicati schimbarile pentru imaginile existente cu ajutorul &quot;<a href="util.php"> uneltelor de administrator</a> (Redimensionare imagini)&quot; - Utilitarul din meniul administrator.', //cpg1.4 - (relocated)
  'notice3' => '(***) Toate fisierele inregistrari (log) sunt scrire în limba engleza.', //cpg1.4 - (relocated)
  'bbs_disabled' => 'Functie dezactivata când se utilizeaza integrarea BBS', //cpg1.4
  'auto_resize_everyone' => 'Tot', //cpg1.4
  'auto_resize_user' => 'Doar utilizatorul', //cpg1.4
  'ascending' => 'Crescator', //cpg1.4
  'descending' => 'Descrescator', //cpg1.4
);

if (defined('ADMIN_PHP')) $lang_admin_data = array(
  'Setari Generale',
  array('Nume Galerie', 'gallery_name', 0, 'f=index.htm&amp;as=admin_general_name&amp;ae=admin_general_name_end'), //cpg1.4
  array('Descriere Galerie', 'gallery_description', 0, 'f=index.htm&amp;as=admin_general_description&amp;ae=admin_general_description_end'), //cpg1.4
  array('Adresa email a Administratorului', 'gallery_admin_email', 0, 'f=index.htm&amp;as=admin_general_email&amp;ae=admin_general_email_end'), //cpg1.4
  array('Adresa URL a dosarului galeriei (fara \'index.php\' sau similar, la sfarsit)', 'ecards_more_pic_target', 0, 'f=index.htm&amp;as=admin_general_coppermine-url&amp;ae=admin_general_coppermine-url_end'), //cpg1.4
  array('Adresa URL a paginii de start', 'home_target', 0, 'f=index.htm&amp;as=admin_general_home-url&amp;ae=admin_general_home-url_end'), //cpg1.4
  array('Permite descarcarea arhivelor ZIP pentru favorite', 'enable_zipdownload', 1, 'f=index.htm&amp;as=admin_general_zip-download&amp;ae=admin_general_zip-download_end'), //cpg1.4
  array('Diferenta de Fus Orar in comparatie cu timpul meridianului zero GMT (current time: ' . localised_date(-1, $comment_date_fmt) . ')','time_offset',0, 'f=index.htm&amp;as=admin_general_time-offset&amp;ae=admin_general_time-offset_end&amp;top=1'), //cpg1.4
  array('Activeaza ecriptia parolelor ( Setare definitiva,nu poate fi restaurata)','enable_encrypted_passwords',1, 'f=index.htm&amp;as=admin_general_encrypt_password_start&amp;ae=admin_general_encrypt_password_end&amp;top=1'), // cpg 1.4
  array('Activeaza Pictograme-Ajutor (Ajutor disponibil doar în limba Engleza)','enable_help',9, 'f=index.htm&amp;as=admin_general_help&amp;ae=admin_general_help_end'), //cpg1.4
  array('Activeaza clic pe cuvinte-cheie în Cautare','clickable_keyword_search',14, 'f=index.htm&amp;as=admin_general_keywords_start&amp;ae=admin_general_keywords_end'), //cpg1.4
  array('Activeaza plugins-uri', 'enable_plugins', 12, 'f=index.htm&amp;as=admin_general_enable-plugins&amp;ae=admin_general_enable-plugins_end'),  //cpg1.4
  array('Activeaza interzicerea IP-urilor private (Exemple: 192.168.0.10 ; 10.0.0.2)', 'ban_private_ip', 1,  'f=index.htm&amp;as=admin_general_private-ip&amp;ae=admin_general_private-ip_end'), //cpg1.4
  array('Interfata Adaugare multipla de fisiere cu rasfoire', 'browse_batch_add', 1, 'f=index.htm&amp;as=admin_general_browsable_batch_add&amp;ae=admin_general_browsable_batch_add_end'), //cpg1.4

  'Language &amp; Charset settings',
  array('Limba', 'lang', 5, 'f=index.htm&amp;as=admin_language_language&amp;ae=admin_language_language_end'), //cpg1.4
  array('Revenire spre limba Engleza daca fraza tradusa nu a fost gasita?', 'language_fallback', 1, 'f=index.htm&amp;as=admin_language_fallback&amp;ae=admin_language_fallback_end'), //cpg1.4
  array('Setul de caractere ', 'charset', 4, 'f=index.htm&amp;as=admin_language_charset&amp;ae=admin_language_charset_end'), //cpg1.4
  array('Afiseaza lista de limbi', 'language_list', 1, 'f=index.htm&amp;as=admin_language_list&amp;ae=admin_language_list_end'), //cpg1.4
  array('Afiseaza steagurile specifice tarilor limbilor', 'language_flags', 8, 'f=index.htm&amp;as=admin_language_flags&amp;ae=admin_language_flags_end&amp;top=1'), //cpg1.4
  array('Afiseaza &quot;reinitializare&quot; în selectia de limbi', 'language_reset', 1, 'f=index.htm&amp;as=admin_language_reset&amp;ae=admin_language_reset_end&amp;top=1'), //cpg1.4
  //array('Afiseaza precedent/urmator în pagini', 'previous_next_tab', 1), //cpg1.4

  'Setari teme grafice',
  array('Teme grafice', 'theme', 6, 'f=index.htm&amp;as=admin_theme_theme&amp;ae=admin_theme_theme_end'), //cpg1.4
  array('Afiseaza lista de teme grafice', 'theme_list', 1, 'f=index.htm&amp;as=admin_theme_theme_list&amp;ae=admin_theme_theme_list_end'), //cpg1.4
  array('Afiseaza &quot;reinitializare&quot; în selectia de teme', 'theme_reset', 1, 'f=index.htm&amp;as=admin_theme_theme_reset&amp;ae=admin_theme_theme_reset_end'), //cpg1.4
  array('Afiseaza INF (INtrebari Frecvente)', 'display_faq', 1, 'f=index.htm&amp;as=admin_theme_faq&amp;ae=admin_theme_faq_end'), //cpg1.4
  array('Nume link meniu personalizat', 'custom_lnk_name', 0,'f=index.htm&amp;as=admin_theme_custom_lnk_name&amp;ae=admin_theme_custom_lnk_name_end'), //cpg1.4
  array('Adresa URL link meniu personalizat', 'custom_lnk_url', 0,'f=index.htm&amp;as=admin_language_custom_lnk_url&amp;ae=admin_language_custom_lnk_url_end'), //cpg1.4
  array('Afiseaza ajutor pentru coduri bbcode', 'show_bbcode_help', 1, 'f=index.htm&amp;as=admin_theme_bbcode&amp;ae=admin_theme_bbcode_end&amp;top=1'), //cpg1.4
  array('Arata sigla de compatibilitate în temele grafice care sunt clasate ca find compatibile XHTML si CSS','vanity_block',1, 'f=index.htm&amp;as=vanity_block&amp;ae=vanity_block_end'), //cpg1.4
  array('Calea spre Antet (Header) personalizat', 'custom_header_path', 0, 'f=index.htm&amp;as=admin_theme_include_path_start&amp;ae=admin_theme_include_path_end'), //cpg1.4
  array('Calea spre partea de jos (footer)', 'custom_footer_path', 0, 'f=index.htm&amp;as=admin_theme_include_path_start&amp;ae=admin_theme_include_path_end'), //cpg1.4

  'Vizualizare lista Albume',
  array('Width of the main table (pixels or %)', 'main_table_width', 0, 'f=index.htm&amp;as=admin_album_table-width&amp;ae=admin_album_table-width_end'), //cpg1.4
  array('Number of levels of categories to display', 'subcat_level', 0, 'f=index.htm&amp;as=admin_album_category-levels&amp;ae=admin_album_category-levels_end'), //cpg1.4
  array('Number of albums to display', 'albums_per_page', 0, 'f=index.htm&amp;as=admin_album_number&amp;ae=admin_album_number_end'), //cpg1.4
  array('Number of columns for the album list', 'album_list_cols', 0, 'f=index.htm&amp;as=admin_album_columns&amp;ae=admin_album_columns_end'), //cpg1.4
  array('Size of thumbnails in pixels', 'alb_list_thumb_size', 0, 'f=index.htm&amp;as=admin_album_thumbnail-size&amp;ae=admin_album_thumbnail-size_end'), //cpg1.4
  array('The content of the main page', 'main_page_layout', 0, 'f=index.htm&amp;as=admin_album_list_content&amp;ae=admin_album_list_content_end'), //cpg1.4
  array('Show first level album thumbnails in categories','first_level',1, 'f=index.htm&amp;as=admin_album_first-level_thumbs&amp;ae=admin_album_first-level_thumbs_end'), //cpg1.4
  array('Sort categories alphabetically (instead of custom sort order)','categories_alpha_sort',1, 'f=index.htm&amp;as=admin_album_list_alphasort_start&amp;ae=admin_album_list_alphasort_end'), //cpg1.4
  array('Show number of linked files','link_pic_count',1, 'f=index.htm&amp;as=admin_album_linked_files_start&amp;ae=admin_album_linked_files_end'), //cpg1.4

  'Thumbnail view',
  array('Number of columns on thumbnail page', 'thumbcols', 0, 'f=index.htm&amp;as=admin_thumbnail_columns&amp;ae=admin_thumbnail_columns_end'), //cpg1.4
  array('Number of rows on thumbnail page', 'thumbrows', 0, 'f=index.htm&amp;as=admin_thumbnail_rows&amp;ae=admin_thumbnail_rows_end'), //cpg1.4
  array('Maximum number of tabs to display', 'max_tabs', 10, 'f=index.htm&amp;as=admin_thumbnail_tabs&amp;ae=admin_thumbnail_tabs_end'), //cpg1.4
  array('Display file caption (in addition to title) below the thumbnail', 'caption_in_thumbview', 1, 'f=index.htm&amp;as=admin_thumbnail_display_caption&amp;ae=admin_thumbnail_display_caption_end'), //cpg1.4
  array('Display number of views below the thumbnail', 'views_in_thumbview', 1, 'f=index.htm&amp;as=admin_thumbnail_display_views&amp;ae=admin_thumbnail_display_views_end'), //cpg1.4
  array('Display number of comments below the thumbnail', 'display_comment_count', 1, 'f=index.htm&amp;as=admin_thumbnail_display_comments&amp;ae=admin_thumbnail_display_comments_end'), //cpg1.4
  array('Display uploader name below the thumbnail', 'display_uploader', 1, 'f=index.htm&amp;as=admin_thumbnail_display_uploader&amp;ae=admin_thumbnail_display_uploader_end'), //cpg1.4
  //array('Display name of admin uploaders below the thumbnail', 'display_admin_uploader', 1, 'f=index.htm&amp;as=admin_thumbnail_display_admin_uploader&amp;ae=admin_thumbnail_display_admin_uploader_end'), //cpg1.4
  array('Display file name below the thumbnail', 'display_filename', 1, 'f=index.htm&amp;as=admin_thumbnail_display_filename&amp;ae=admin_thumbnail_display_filename_end'), //cpg1.4
  array('Display album description', 'alb_desc_thumb', 1, 'f=index.htm&amp;as=admin_thumbnail_display_description&amp;ae=admin_thumbnail_display_description_end'), //cpg1.4
  array('Default sort order for files', 'default_sort_order', 3, 'f=index.htm&amp;as=admin_thumbnail_default_sortorder&amp;ae=admin_thumbnail_default_sortorder_end'), //cpg1.4
  array('Minimum number of votes for a file to appear in the \'top-rated\' list', 'min_votes_for_rating', 0, 'f=index.htm&amp;as=admin_thumbnail_minimum_votes&amp;ae=admin_thumbnail_minimum_votes_end'), //cpg1.4

  'Image view', //cpg1.4
  array('latimea tabloului pentru imaginile de afisat (dimensiune in pixeli sau  procent %)', 'picture_table_width', 0, 'f=index.htm&amp;as=admin_image_comment_table-width&amp;ae=admin_image_comment_table-width_end'), //cpg1.4
  array('În mod normal,standard,informatia imaginii este vizibila', 'display_pic_info', 1, 'f=index.htm&amp;as=admin_image_comment_info_visible&amp;ae=admin_image_comment_info_visible_end'), //cpg1.4
  array('Lungimea maxima pentru descriere imagine', 'max_img_desc_length', 0, 'f=index.htm&amp;as=admin_image_comment_descr_length&amp;ae=admin_image_comment_descr_length_end'), //cpg1.4
  array('Numarul maxim de caractere pe care un cuvant îl poate avea', 'max_com_wlength', 0, 'f=index.htm&amp;as=admin_image_comment_chars_per_word&amp;ae=admin_image_comment_chars_per_word_end'), //cpg1.4
  array('Arata Film Foto', 'display_film_strip', 1, 'f=index.htm&amp;as=admin_image_comment_filmstrip_toggle&amp;ae=admin_image_comment_filmstrip_toggle_end'), //cpg1.4
  array('Afiseaza numele imaginii dedesuptul miniaturii filmului foto', 'display_film_strip_filename', 1, 'f=index.htm&amp;as=admin_image_comment_display_film_strip_filename&amp;ae=admin_image_comment_display_film_strip_filename_end'), //cpg1.4
  array('Numarul de imagini într-un film foto', 'max_film_strip_items', 0, 'f=index.htm&amp;as=admin_image_comment_filmstrip_number&amp;ae=admin_image_comment_filmstrip_number_end'), //cpg1.4
  array('Intervalul in milisecunde (1 secunda are 1000 de milisecunde) intre imaginile prezentate automat', 'slideshow_interval', 0, 'f=index.htm&amp;as=admin_image_comment_slideshow_interval&amp;ae=admin_image_comment_slideshow_interval_end'), //cpg1.4

  'Setari Comentarii', //cpg1.4
  array('Filtreaza insulte/cuvinte murdare in comentarii', 'filter_bad_words', 1, 'f=index.htm&amp;as=admin_image_comment_bad_words&amp;ae=admin_image_comment_bad_words_end'), //cpg1.4
  array('Permite pictograme sugestive (smiles) in comentarii', 'enable_smilies', 1, 'f=index.htm&amp;as=admin_image_comment_smilies&amp;ae=admin_image_comment_smilies_end'), //cpg1.4
  array('Permite mai multe comentarii consecutive pentru o imagine, provenind de la acelasi utilizator (dezactivati protectia impotriva bombardari cu mesaje)', 'disable_comment_flood_protect', 1, 'f=index.htm&amp;as=admin_image_comment_flood&amp;ae=admin_image_comment_flood_end'), //cpg1.4
  array('Numarul maxim de linii într-un comentariu', 'max_com_lines', 0, 'f=index.htm&amp;as=admin_image_comment_lines&amp;ae=admin_image_comment_lines_end'), //cpg1.4
  array('Lungimea maxima a unui comentariu', 'max_com_size', 0, 'f=index.htm&amp;as=admin_image_comment_length&amp;ae=admin_image_comment_length_end'), //cpg1.4
  array('Notifica cu un email Administratorul, despre postarea comentariilor', 'email_comment_notification', 1, 'f=index.htm&amp;as=admin_image_comment_admin_notify&amp;ae=admin_image_comment_admin_notify_end'), //cpg1.4
  array('Sorteaza ordinea comentariilor', 'comments_sort_descending', 17, 'f=index.htm&amp;as=admin_comment_sort_start&amp;ae=admin_comment_sort_end'), //cpg1.4
  array('Prefixul pentru autorii anonimi de comentarii', 'comments_anon_pfx', 0, 'f=index.htm&amp;as=comments_anon_pfx&amp;ae=comments_anon_pfx_end'), //cpg1.4

  'Setari pentru Imagini si Miniaturi de imagini',
  array('Calitatea imaginilor JPEG', 'jpeg_qual', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_jpeg_quality&amp;ae=admin_picture_thumbnail_jpeg_quality_end'), //cpg1.4
  array('Dimensiunea maxima a unei miniaturi <a href="#notice2" class="clickable_option">**</a>', 'thumb_width', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max-dimension&amp;ae=admin_picture_thumbnail_max-dimension_end'), //cpg1.4
  array('Utilizeaza dimensionare ( latime , inaltime sau aspectul maxim al minuaturii ) <a href="#notice2" class="clickable_option">**</a>', 'thumb_use', 7, 'f=index.htm&amp;as=admin_picture_thumbnail_use-dimension&amp;ae=admin_picture_thumbnail_use-dimension_end'), //cpg1.4
  array('Creaza imagini intermediare','make_intermediate',1, 'f=index.htm&amp;as=admin_picture_thumbnail_intermediate_toggle&amp;ae=admin_picture_thumbnail_intermediate_toggle_end'), //cpg1.4
  array('Largimea sau Inaltimea maxima a imaginei/filmului video<a href="#notice2" class="clickable_option">**</a>', 'picture_width', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_intermediate_dimension&amp;ae=admin_picture_thumbnail_intermediate_dimension_end'), //cpg1.4
  array('Marimea maxima in KB pentru imaginile încarcate', 'max_upl_size', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max_upload_size&amp;ae=admin_picture_thumbnail_max_upload_size_end'), //cpg1.4
  array('Largimea sau Inaltimea maxima in pixeli pentru imaginile/filmele încarcate', 'max_upl_width_height', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max_upload_dimension&amp;ae=admin_picture_thumbnail_max_upload_dimension_end'), //cpg1.4
  array('Auto redimensionare imagini care sunt mai mari decât largimea sau inaltimea maxima', 'auto_resize', 16, 'f=index.htm&amp;as=admin_picture_thumbnail_auto-resize&amp;ae=admin_picture_thumbnail_auto-resize_end'), //cpg1.4

  'Setari avansate pentru Imagini si Miniaturi de imagini',
  array('Albumele pot fi confidentiale (Nota: Daca schimbati din \'Da\' spre \'Nu\' atunci orice album confidential va deveni public)', 'allow_private_albums', 1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_private_toggle&amp;ae=admin_picture_thumb_advanced_private_toggle_end'), //cpg1.4
  array('Arata pictograma Album confidential utilizatorilor care nu sunt autentificati','show_private',1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_private_icon_show&amp;ae=admin_picture_thumb_advanced_private_icon_show_end'), //cpg1.4
  array('Caractere interzise in numele imaginilor', 'forbiden_fname_char',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_filename_forbidden_chars&amp;ae=admin_picture_thumb_advanced_filename_forbidden_chars_end'), //cpg1.4
  //array('Extensii de imagini care sunt permise pentru încarcare', 'allowed_file_extensions',0, 'f=index.htm&amp;as=&amp;ae=_end'), //cpg1.4
  array('Tipuri de imagini permise', 'allowed_img_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_pic_extensions&amp;ae=admin_picture_thumb_advanced_pic_extensions_end'), //cpg1.4
  array('Tipuri de clipuri video permise', 'allowed_mov_types',0, 'f=index.htm&amp;as=admin_thumbs_advanced_movie&amp;ae=admin_thumbs_advanced_movie_end'), //cpg1.4
  array('Redare automata filme', 'media_autostart',1, 'f=index.htm&amp;as=admin_movie_autoplay&amp;ae=admin_movie_autoplay_end'), //cpg1.4
  array('Tipuri de fisiere audio permise', 'allowed_snd_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_audio_extensions&amp;ae=admin_picture_thumb_advanced_audio_extensions_end'), //cpg1.4
  array('Tpuri de documente permise', 'allowed_doc_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_doc_extensions&amp;ae=admin_picture_thumb_advanced_doc_extensions_end'), //cpg1.4
  array('Metoda redimensionarii imaginilor','thumb_method',2, 'f=index.htm&amp;as=admin_picture_thumb_advanced_resize_method&amp;ae=admin_picture_thumb_advanced_resize_method_end'), //cpg1.4
  array('Calea spre utilitarul de \'conversie\'ImageMagick  (exemplu /usr/bin/X11/)', 'impath', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_im_path&amp;ae=admin_picture_thumb_advanced_im_path_end'), //cpg1.4
  //array('Tipuri de imagini permise (valid doar pentru ImageMagick)', 'allowed_img_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_allowed_imagetypes&amp;ae=admin_picture_thumb_advanced_allowed_imagetypes_end'), //cpg1.4
  array('Optiuni de Linie de comanda pentru ImageMagick', 'im_options', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_im_commandline&amp;ae=admin_picture_thumb_advanced_im_commandline_end'), //cpg1.4
  array('Citeste informatia Exif (EXchangeable Image file Format) din imaginile JPEG ', 'read_exif_data', 13, 'f=index.htm&amp;as=admin_picture_thumb_advanced_exif&amp;ae=admin_picture_thumb_advanced_exif_end'), //cpg1.4
  array('Citeste informatia IPTC (International Press Telecommunications Council) din imaginile JPEG', 'read_iptc_data', 1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_iptc&amp;ae=admin_picture_thumb_advanced_iptc_end'), //cpg1.4
  array('Dosarul albumului. <a href="#notice1" class="clickable_option">*</a>', 'fullpath', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_albums_dir&amp;ae=admin_picture_thumb_advanced_albums_dir_end'), //cpg1.4
  array('Dosarul pentru imaginile utilizatorului. <a href="#notice1" class="clickable_option">*</a>', 'userpics', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_userpics_dir&amp;ae=admin_picture_thumb_advanced_userpics_dir_end'), //cpg1.4
  array('Prefixul pentru imaginile intermediare <a href="#notice1" class="clickable_option">*</a>', 'normal_pfx', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_intermediate_prefix&amp;ae=admin_picture_thumb_advanced_intermediate_prefix_end'), //cpg1.4
  array('Prefixul pentru miniaturi <a href="#notice1" class="clickable_option">*</a>', 'thumb_pfx', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_thumbs_prefix&amp;ae=admin_picture_thumb_advanced_thumbs_prefix_end'), //cpg1.4
  array('Modul standard pentru dosare', 'default_dir_mode', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_chmod_folder&amp;ae=admin_picture_thumb_advanced_chmod_folder_end'), //cpg1.4
  array('Modul standard pentru imagini', 'default_file_mode', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_chmod_files&amp;ae=admin_picture_thumb_advanced_chmod_files_end'), //cpg1.4

  'Setari utilizator',
  array('Permite inregistrari de noi utilizatori', 'allow_user_registration', 1, 'f=index.htm&amp;as=admin_allow_registration&amp;ae=admin_allow_registration_end'), //cpg1.4
  array('Permite accesul utilizatorilor neautentificati (Oaspeti sau Anonimi) access', 'allow_unlogged_access', 1, 'f=index.htm&amp;as=admin_allow_unlogged_access&amp;ae=admin_allow_unlogged_access_end'), //cpg1.4
  array('Inscrierea utilizatorilor necesita un email de verificare', 'reg_requires_valid_email', 1, 'f=index.htm&amp;as=admin_registration_verify&amp;ae=admin_registration_verify_end'), //cpg1.4
  array('Notifica prin email Administratorul , despre inscrierea utilizatorilor', 'reg_notify_admin_email', 1, 'f=index.htm&amp;as=admin_registration_notify&amp;ae=admin_registration_notify_end'), //cpg1.4
  array('Validarea inscrierilor de catre Administrator', 'admin_activation', 1, 'f=index.htm&amp;as=admin_activation&amp;ae=admin_activation_end'),  //cpg1.4
  array('Permite a doi utilizatori diferiti sa aiba aceeasi adresa email', 'allow_duplicate_emails_addr', 1, 'f=index.htm&amp;as=admin_allow_duplicate_emails_addr&amp;ae=admin_allow_duplicate_emails_addr_end'), //cpg1.4
  array('Notifica Administratorul despre cererea de aprobare imagini încarcate care sunt in asteptare', 'upl_notify_admin_email', 1, 'f=index.htm&amp;as=admin_approval_notify&amp;ae=admin_approval_notify_end'), //cpg1.4
  array('Permite utilizatorilor autentificati sa vizualizeze lista de membri', 'allow_memberlist', 1, 'f=index.htm&amp;as=admin_user_memberlist&amp;ae=admin_user_memberlist_end'), //cpg1.4
  array('Permite autentificati sa-si schimbe adresa email in profilul personal', 'allow_email_change', 1, 'f=index.htm&amp;as=admin_user_allow_email_change&amp;ae=admin_user_allow_email_change_end'), //cpg1.4
  array('Allow users to retain control over their pics in public galleries', 'users_can_edit_pics', 1, 'f=index.htm&amp;as=admin_user_editpics_public_start&amp;ae=admin_user_editpics_public_end'), //cpg1.4
  array('Numarul de autentificarei esuate pâna la activarea unei interdictii temporare (pentru a preveni atacurile auto-generate)', 'login_threshold', 0, 'f=index.htm&amp;as=admin_user_login_start&amp;ae=admin_user_login_end'), //cpg1.4
  array('Durata unei interdictii temporare dupa ce autentificarile au esuat', 'login_expiry', 0, 'f=index.htm&amp;as=admin_user_login_start&amp;ae=admin_user_login_end'), //cpg1.4
  array('Activeaza Raportul spre Administrator', 'report_post', 1, 'f=index.htm&amp;as=admin_user_enable_report&amp;ae=admin_user_enable_report_end'),  //cpg1.4

// Campuri personalizate in profil,  //cpg1.4
  'Campuri personalizate pentru profil utilizator (lasati vid daca nu sunt utilizate).
  Utilizati Profil 6 for pentru intrari lungi ca biografiile de exemplue', //cpg1.4
  array('Nume Profil 1 ', 'user_profile1_name', 0, 'f=index.htm&amp;as=admin_custom&amp;ae=admin_custom_end'), //cpg1.4
  array('Nume Profil 2 ', 'user_profile2_name', 0), //cpg1.4
  array('Nume Profil 3 ', 'user_profile3_name', 0), //cpg1.4
  array('Nume Profil 4 ', 'user_profile4_name', 0), //cpg1.4
  array('Nume Profil 5 ', 'user_profile5_name', 0), //cpg1.4
  array('Nume Profil 6 ', 'user_profile6_name', 0), //cpg1.4

  'Campuri personalizate pentru descrierea imaginilor (lasati vid daca nu sunt utilizate)',
  array('Nume Camp 1 ', 'user_field1_name', 0, 'f=index.htm&amp;as=admin_custom_image&amp;ae=admin_custom_image_end'), //cpg1.4
  array('Nume Camp 2 ', 'user_field2_name', 0),
  array('Nume Camp 3 ', 'user_field3_name', 0),
  array('Nume Camp 4 ', 'user_field4_name', 0),

  'Setari Cookies',
  array('Nume Cookie ', 'cookie_name', 0, 'f=index.htm&amp;as=admin_cookie_name&amp;ae=admin_cookie_name_end'), //cpg1.4
  array('Cale Cookie ', 'cookie_path', 0, 'f=index.htm&amp;as=admin_cookie_path&amp;ae=admin_cookie_path_end'), //cpg1.4

  'Setari Email (În mod normal, nu este nimic de schimbat aici, lasati totul vid daca nu sunteti sigur)', //cpg1.4
  array('Gaza SMTP (când este lasat vid, functia sendmail va fi utilizata)', 'smtp_host', 0, 'f=index.htm&amp;as=admin_email&amp;ae=admin_email_end'), //cpg1.4
  array('Utilizator SMTP ', 'smtp_username', 0), //cpg1.4
  array('Parola SMTP ', 'smtp_password', 0), //cpg1.4

  'Statistici si Rapoarte', //cpg1.4
  array('Mod Raportare <a href="#notice3" class="clickable_option">***</a>', 'log_mode', 11, 'f=index.htm&amp;as=admin_logging_log_mode&amp;ae=admin_logging_log_mode_end'), //cpg1.4
  array('Rapoarre ecards', 'log_ecards', 1, 'f=index.htm&amp;as=admin_general_log_ecards&amp;ae=admin_general_log_ecards_end'), //cpg1.4
  array('Pastreaza statistici detailiate despre voturi','vote_details',1, 'f=index.htm&amp;as=admin_logging_votedetails&amp;ae=admin_logging_votedetails_end'), //cpg1.4
  array('Pastreaza statistici detailiate despre clic-uri','hit_details',1, 'f=index.htm&amp;as=admin_logging_hitdetails&amp;ae=admin_logging_hitdetails_end'), //cpg1.4

  'Setari Intretinere', //cpg1.4
  array('Activeaza modul Identificare erori', 'debug_mode', 9, 'f=index.htm&amp;as=debug_mode&amp;ae=debug_mode_end'), //cpg1.4
  array('Afiseaza indicatii in modul Identificare erori', 'debug_notice', 1, 'f=index.htm&amp;as=admin_misc_debug_notices&amp;ae=admin_misc_debug_notices_end'), //cpg1.4
  array('Galeria este dezactivata.', 'offline', 1, 'f=index.htm&amp;as=admin_general_offline&amp;ae=admin_general_offline_end'), //cpg1.4
);


// ------------------------------------------------------------------------- //
// File db_ecard.php
// ------------------------------------------------------------------------- //

if (defined('DB_ECARD_PHP')) $lang_db_ecard_php = array(
  'title' => 'Carti postale electronice trimise',
  'ecard_sender' => 'Expeditor',
  'ecard_recipient' => 'Destinatar',
  'ecard_date' => 'Data',
  'ecard_display' => 'Arata cartea postala',
  'ecard_name' => 'Nume',
  'ecard_email' => 'Adresa Email',
  'ecard_ip' => 'Adresa IP #',
  'ecard_ascending' => 'Crescator',
  'ecard_descending' => 'Descrecator',
  'ecard_sorted' => 'Sortate',
  'ecard_by_date' => 'dupa data',
  'ecard_by_sender_name' => 'dupa numele expeditorului',
  'ecard_by_sender_email' => 'dupa adresa de email a expeditorolui',
  'ecard_by_sender_ip' => 'dupa adresa de IP a expeditorului',
  'ecard_by_recipient_name' => 'dupa numele destinatarului',
  'ecard_by_recipient_email' => 'dupa adresa de email a destinatarului',
  'ecard_number' => 'Afisare înregistrare %s spre %s din %s',
  'ecard_goto_page' => 'Spre pagina',
  'ecard_records_per_page' => 'Înregistrari pe pagina',
  'check_all' => 'Bifeaza tot',
  'uncheck_all' => 'Debifeaza tot',
  'ecards_delete_selected' => 'Sterge cartile postale selectionate',
  'ecards_delete_confirm' => 'Sunteti sigur ca doriti sa stergeti inregistrarile? Bifati in casuta !',
  'ecards_delete_sure' => 'Sunt sigur,continua.',
);


// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
  'empty_name_or_com' => 'Trebuie sa specificati numele dumneavoastra si un comentariu',
  'com_added' => 'Comentariul dumneavoastra a fost adaugat',
  'alb_need_title' => 'Trebuie sa specificati un titlu pentru album !',
  'no_udp_needed' => 'Nu este necesara actualizarea.',
  'alb_updated' => 'Albumul a fost actualizat.',
  'unknown_album' => 'Albumul selectionat nu exista sau nu aveti permisiunea sa încarcati nimic in acest album.',
  'no_pic_uploaded' => 'Nici o imagine nu a fost incarcata !<br /><br />If you have really selected a file to upload, check that the server allows file uploads...',
  'err_mkdir' => 'Crearea dosarului %s a esuat!',
  'dest_dir_ro' => 'Dosarul destinatie %s nu poate fi scris/creat de catre program !',
  'err_move' => 'Imposibilitate de a muta %s in %s !',
  'err_fsize_too_large' => 'Dimensiunea fisierelor trimise este prea mare (Maximul permis este %s pe %s) !', //obsolete since cpg1.3 - consider removal in cpg1.4 once upload.php has been overhauled
  'err_imgsize_too_large' => 'Marimea fisierului trimis este prea mare (Maximul permis este de %s KB) !', //obsolete since cpg1.3 - consider removal in cpg1.4 once upload.php has been overhauled
  'err_invalid_img' => 'Fisierul trimis nu este o imagine valida !',
  'allowed_img_types' => 'Nu puteti încarca decât %s imagini.',
  'err_insert_pic' => 'Imaginea \'%s\' nu poate fi introdusa in album ',
  'upload_success' => 'Fisierul a fost încarcat.<br /><br />Va fi vizibil imediat ce Administratorul îl va aproba.',
  'notify_admin_email_subject' => '%s - Notificare de încarcare fisier',
  'notify_admin_email_body' => 'O imagine a fost incarcata in galeria dumneavoastra de catre %s .Este necesara aprobarea dumneavoastra la adresa %s',
  'info' => 'Informatie',
  'com_added' => 'Comentariu adaugat',
  'alb_updated' => 'Album actualizat',
  'err_comment_empty' => 'Comentariul dumneavoastra este vid !',
  'err_invalid_fext' => 'Doar fisierele cu extensia urmatoare sunt acceptate : <br /><br />%s .',
  'no_flood' => 'Îmi pare rau, dar sunteti deja ultimul autorul ultimului comentariu trimis pentru acest fisier.<br /><br /> Va puteti edita comentariul, pentru a adauga comentarii suplimentareœ.',
  'redirect_msg' => 'You are being redirected.<br /><br /><br />Click \'CONTINUE\' if the page does not refresh automatically',
  'upl_success' => 'Fisierul a fost adaugat cu succes.',
  'email_comment_subject' => 'Un comentariu a fost adaugat in galeria de imagini Coppermine',
  'email_comment_body' => 'Cineva a adaugat un comentariu in galerie.Pentru vizualizare mergeti la ',
  'album_not_selected' => 'Albumul nu este selctionat', //cpg1.4
  'com_author_error' => 'Un utilizator utilizeaza aceast nume. Autentificati-va sau utilizati un alt nume.', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
  'caption' => 'Subtitlu',
  'fs_pic' => 'Imaginea in dimensiuni maxime',
  'del_success' => 'Sters',
  'ns_pic' => 'Imagine in marime normala',
  'err_del' => 'Nu poate fi sters(a)',
  'thumb_pic' => 'Miniatura Imagine',
  'comment' => 'Coomentariu',
  'im_in_alb' => 'Imagine in Album',
  'alb_del_success' => 'Albumul &laquo;%s&raquo; a fost sters', //cpg1.4
  'alb_mgr' => 'Gestionar Albume',
  'err_invalid_data' => 'Date invalide receptionate in \'%s\'',
  'create_alb' => 'Creare album \'%s\'',
  'update_alb' => 'Actualizare album \'%s\' with title \'%s\' and index \'%s\'',
  'del_pic' => 'Sterge fisier',
  'del_alb' => 'Sterge album',
  'del_user' => 'Sterge utilizator',
  'err_unknown_user' => 'Utilizatorul selectionat nu exista !',
  'err_empty_groups' => 'Nu exista nici un tablou grup sau tabloul grup este gol!', //cpg1.4
  'comment_deleted' => 'Comentariul a fost sters.',
  'npic' => 'Imagine', //cpg1.4
  'pic_mgr' => 'Gestionar de Imagini', //cpg1.4
  'update_pic' => 'Actualizarea imaginii \'%s\' cu numele \'%s\' si index \'%s\'', //cpg1.4
  'username' => 'Utilizator', //cpg1.4
  'anonymized_comments' => '%s comentriu(ii) anonime', //cpg1.4
  'anonymized_uploads' => '%s încarcare(i) publica(e) anonime', //cpg1.4
  'deleted_comments' => '%s comentariu(ii) sters(e)', //cpg1.4
  'deleted_uploads' => '%s încarcare(i) publica(e) sters(e)', //cpg1.4
  'user_deleted' => 'Utilizatorul %s a fost sters', //cpg1.4
  'activate_user' => 'Activeaza utilizator', //cpg1.4
  'user_already_active' => 'Contul este deja activ.', //cpg1.4
  'activated' => 'Activat', //cpg1.4
  'deactivate_user' => 'Dezactiveaza utilizatorul', //cpg1.4
  'user_already_inactive' => 'Contul este deja dezactivat', //cpg1.4
  'deactivated' => 'Deazactivat', //cpg1.4
  'reset_password' => 'Reseteaza parola(ele)', //cpg1.4
  'password_reset' => 'Parola resetata in %s', //cpg1.4
  'change_group' => 'Schimba grupul principal', //cpg1.4
  'change_group_to_group' => 'Schimb  grup din %s in %s', //cpg1.4
  'add_group' => 'Adaugare grup secundar', //cpg1.4
  'add_group_to_group' => 'Adaugare utilizator %s la grupul %s. El/Ea este acum membru principal al %s si membru secundar al %s .', //cpg1.4
  'status' => 'Stare', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File displayecard.php
// ------------------------------------------------------------------------- //

if (defined('DISPLAYECARD_PHP')) {

$lang_displayecard_php = array(
  'invalid_data' => 'Datele pe care încercati sa le accesati au fost compromise de catre clientul de email. Verificare adresa incompleta.', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File displayimage.php
// ------------------------------------------------------------------------- //

if (defined('DISPLAYIMAGE_PHP')){

$lang_display_image_php = array(
  'confirm_del' => 'Sunteti sigur ca doriti sa STERGETI acest fisier ?\\nComentariile vor fi sterse de asemenea.', //js-alert
  'del_pic' => 'STERGE ACEST FISIER',
  'size' => '%s x %s pixeli',
  'views' => '%s data/ori',
  'slideshow' => 'Prezentare automata',
  'stop_slideshow' => 'Opreste prezentarea',
  'view_fs' => 'Clic pentrua vizualiza imagina in dimensiunile reale',
  'edit_pic' => 'Editati informatia imaginii', //cpg1.4
  'crop_pic' => 'Taie si Roteste',
  'set_player' => 'Schimba player',
);

$lang_picinfo = array(
  'title' =>'Informatii imagine',
  'Filename' => 'Fisier',
  'Album name' => 'Nume Album',
  'Rating' => 'Cotare (%s vot(uri))',
  'Keywords' => 'Cuvinte-cheie',
  'File Size' => 'Marime Fisier',
  'Date Added' => 'Data adaugarii', //cpg1.4
  'Dimensions' => 'Dimensiuni',
  'Displayed' => 'Afisata',
  'URL' => 'URL', //cpg1.4
  'Make' => 'Creaza', //cpg1.4
  'Model' => 'Model', //cpg1.4
  'DateTime' => 'Timp Data', //cpg1.4
  'ISOSpeedRatings'=>'ISO', //cpg1.4
  'MaxApertureValue' => 'Deschidere maxima (Aperture)', //cpg1.4
  'FocalLength' => 'Lungimea focala', //cpg1.4
  'Comment' => 'Comentariu',
  'addFav'=>'Adauga la favorite',
  'addFavPhrase'=>'Favorite',
  'remFav'=>'Înlatura din Favorite',
  'iptcTitle'=>'Titlu IPTC',
  'iptcCopyright'=>'Drept de autor IPTC',
  'iptcKeywords'=>'Cuvinte-cheie IPTC',
  'iptcCategory'=>'Categoria IPTC',
  'iptcSubCategories'=>'Sub-categoria IPTC',
  'ColorSpace' => 'Spatiu Culoare', //cpg1.4
  'ExposureProgram' => 'Program de expozitie', //cpg1.4
  'Flash' => 'Blit', //cpg1.4
  'MeteringMode' => 'Mod masura', //cpg1.4
  'ExposureTime' => 'Timp de expozitie', //cpg1.4
  'ExposureBiasValue' => 'Oblicitate expozitie', //cpg1.4
  'ImageDescription' => ' Descriere Imagine', //cpg1.4
  'Orientation' => 'Orientare', //cpg1.4
  'xResolution' => 'Rezolutia X ', //cpg1.4
  'yResolution' => 'Rezolutia Y ', //cpg1.4
  'ResolutionUnit' => 'Unitatea de masura a Resolutei', //cpg1.4
  'Software' => 'Software', //cpg1.4
  'YCbCrPositioning' => 'YCbCrPositioning', //cpg1.4
  'ExifOffset' => 'Exif Offset', //cpg1.4
  'IFD1Offset' => 'IFD1 Offset', //cpg1.4
  'FNumber' => 'FNumber', //cpg1.4
  'ExifVersion' => 'Versiunea Exif', //cpg1.4
  'DateTimeOriginal' => 'DataTimpul Original', //cpg1.4
  'DateTimedigitized' => 'DataTimpul digitilizat', //cpg1.4
  'ComponentsConfiguration' => 'Configuratia Componentelor', //cpg1.4
  'CompressedBitsPerPixel' => 'Biti Compresati Per Pixel', //cpg1.4
  'LightSource' => 'Sursa de lumina', //cpg1.4
  'ISOSetting' => 'Setarea ISO', //cpg1.4
  'ColorMode' => 'Mod color', //cpg1.4
  'Quality' => 'Calitate', //cpg1.4
  'ImageSharpening' => 'Sharpening (ascutime) Imagine', //cpg1.4
  'FocusMode' => 'Mod Focus', //cpg1.4
  'FlashSetting' => 'Setare Blit', //cpg1.4
  'ISOSelection' => 'Selectia ISO', //cpg1.4
  'ImageAdjustment' => 'Ajustare Imagine', //cpg1.4
  'Adapter' => 'Adaptor', //cpg1.4
  'ManualFocusDistance' => 'Distanta focala manuala', //cpg1.4
  'DigitalZoom' => 'Marire Digitala', //cpg1.4
  'AFFocusPosition' => 'Pozitia AF (Auto Finder)', //cpg1.4
  'Saturation' => 'Saturatie', //cpg1.4
  'NoiseReduction' => 'Reductie de Zgomot', //cpg1.4
  'FlashPixVersion' => 'Versiunea Flash Pix', //cpg1.4
  'ExifImageWidth' => 'Largime imagine Exif', //cpg1.4
  'ExifImageHeight' => 'Inaltime imagine Exif', //cpg1.4
  'ExifInteroperabilityOffset' => 'Offse de inoperabilitate Exif', //cpg1.4
  'FileSource' => 'Sursa Fisier', //cpg1.4
  'SceneType' => 'Tipul de scena', //cpg1.4
  'CustomerRender' => 'Redare personalizata', //cpg1.4
  'ExposureMode' => 'Mod expunere', //cpg1.4
  'WhiteBalance' => 'Balansul de alb WB', //cpg1.4
  'DigitalZoomRatio' => 'Rara marire digitala', //cpg1.4
  'SceneCaptureMode' => 'Mod captura scena', //cpg1.4
  'GainControl' => 'Control castig (Gain Contro)', //cpg1.4
  'Contrast' => 'Contrast', //cpg1.4
  'Sharpness' => 'Ascutime (Sharpness)', //cpg1.4
  'ManageExifDisplay' => 'Gestioneaza afisaj Exif', //cpg1.4
  'submit' => 'Trimite', //cpg1.4
  'success' => 'Informatia a fost trimisa.', //cpg1.4
  'details' => 'Detalii', //cpg1.4
);

$lang_display_comments = array(
  'OK' => 'OK',
  'edit_title' => 'Editeaza acest comentariu',
  'confirm_delete' => 'Sunteti sigur ca doriti sa stergeti acest comentariu?', //js-alert
  'add_your_comment' => 'Adauga comentariu',
  'name'=>'Nume',
  'comment'=>'Comentariu',
  'your_name' => 'Anonim',
  'report_comment_title' => 'Reporteaza acest comentariu Administratorului', //cpg1.4
);

$lang_fullsize_popup = array(
  'click_to_close' => 'Clic pe imagine pentru a inchide aceasta fereastra',
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
  'title' => 'Trimite o arte postala electronica',
  'invalid_email' => '<font color="red"><b>Avertisment</b></font>: Adresa de email gresita:', //cpg1.4
  'ecard_title' => 'O carte postala pentru tine de la %s ',
  'error_not_image' => 'Doar imaginile pot fi trimise in format Carte Postala.',
  'view_ecard' => 'Link-ul alternativ pentru Cartea Postala in cazul in care acesta nu se afiseaza corect.', //cpg1.4
  'view_ecard_plaintext' => 'Pentru a vizualiza aceasta Carte Postala , copiati aceasta adresa in navigatorul dumneavoastra: ', //cpg1.4
  'view_more_pics' => 'Vizualitati mai multe imagini!', //cpg1.4
  'send_success' => 'Cartea Postala Electronica a fost trimisa',
  'send_failed' => 'Îmi pare rau , serverul nu poate trimite Cartea voastra Postala...',
  'from' => 'De la ',
  'your_name' => 'Numel dumneavoastra',
  'your_email' => 'Adresa voastra de email',
  'to' => 'Pentru',
  'rcpt_name' => 'Nume Destinatar',
  'rcpt_email' => 'Adresa email a destinatarului',
  'greetings' => 'Salutari', //cpg1.4
  'message' => 'Mesaj', //cpg1.4
  'ecards_footer' => 'Trimis de %s cu adresa IP  %s la %s (Gallery time)', //cpg1.4
  'preview' => 'Previzualizare Carte Postala Electronica', //cpg1.4
  'preview_button' => 'Previzualizare', //cpg1.4
  'submit_button' => 'Trimite Cartea Postala', //cpg1.4
  'preview_view_ecard' => 'Acest link va fi alternativa de acces spre Cartea Postalahis odata ce aceasta este generata. Nu va functiona pentru previzlualizari.', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File report_file.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('REPORT_FILE_PHP') || defined('DISPLAYREPORT_PHP')) $lang_report_php =array(
  'title' => 'Raport spre Administrator', //cpg1.4
  'invalid_email' => '<b>Avertisment</b> : Adresa de email invalida !', //cpg1.4
  'report_subject' => 'Un raport de la  %s in galeria %s', //cpg1.4
  'view_report' => 'Link alternativ in cazul in care raportul nu se afiseaza corect', //cpg1.4
  'view_report_plaintext' => 'Pentru a vizualiza acest raport, copiati aceasta adresa in navigatorul dumneavoastra: ', //cpg1.4
  'view_more_pics' => 'Galerie', //cpg1.4
  'send_success' => 'Raportul a fost trimis', //cpg1.4
  'send_failed' => 'Îmi pare rau dar serverul nu poate trimite raportul dumneavoastra...', //cpg1.4
  'from' => 'De la', //cpg1.4
  'your_name' => 'Numele dumneavoastra', //cpg1.4
  'your_email' => 'Adresa dumneavoastra de email', //cpg1.4
  'to' => 'Pentru', //cpg1.4
  'administrator' => 'Administrator/Moderator', //cpg1.4
  'subject' => 'Subiect', //cpg1.4
  'comment_field_name' => 'Raportare despre comentariul lui  "%s"', //cpg1.4
  'reason' => 'Motiv', //cpg1.4
  'message' => 'Mesaj', //cpg1.4
  'report_footer' => 'Trimis de %s cu adresa IP %s din %s (Gallery time)', //cpg1.4
  'obscene' => 'Onscen', //cpg1.4
  'offensive' => 'Ofensiv', //cpg1.4
  'misplaced' => 'În afara subiectului/Plasat gresit', //cpg1.4
  'missing' => 'Lipsa', //cpg1.4
  'issue' => 'Eroare/Nu pot vizualiza', //cpg1.4
  'other' => 'Altceva', //cpg1.4
  'refers_to' => 'Raportul fisier este in legatura cu  ', //cpg1.4
  'reasons_list_heading' => 'motivul(ele) pentru raport:', //cpg1.4
  'no_reason_given' => 'Nici nu motiv nu a fost specificat ', //cpg1.4
  'go_comment' => 'Salt la comentariu', //cpg1.4
  'view_comment' => 'Vizualizeaza raport complet cu comentariu', //cpg1.4
  'type_file' => 'fisier', //cpg1.4
  'type_comment' => 'comentariu', //cpg1.4
  'invalid_data' => 'Datele pe care încercati sa le vizualizati au fost corupte de catre clientul dumneavoastra de email.Verificare adresa incompleta.', //cpg1.4

);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
  'pic_info' => 'Informatie Imagine',
  'album' => 'Album',
  'title' => 'Titlu',
  'filename' => 'Nume fisier', //cpg1.4
  'desc' => 'Descriere',
  'keywords' => 'Cuvinte-cheie',
  'new_keyword' => 'Nou cuvant-cheie', //cpg1.4
  'new_keywords' => 'Nou cuvant-cheie gasit', //cpg1.4
  'existing_keyword' => 'Cuvant-cheie existent', //cpg1.4
  'pic_info_str' => '%s &times; %s - %s KB - %s vizualizari - %s voturi',
  'approve' => 'Aproba fisier',
  'postpone_app' => 'Amana aprobarea',
  'del_pic' => 'Sterge fisier',
  'del_all' => 'Sterge TOATE fisierele', //cpg1.4
  'read_exif' => 'Re-citeste informatia Exif',
  'reset_view_count' => 'Reseteaza numaratoarea de vizualizari',
  'reset_all_view_count' => 'Reseteaza TOATE numaratoarele de vizualizari', //cpg1.4
  'reset_votes' => 'Reseteaza voturi',
  'reset_all_votes' => 'Reseteaza TOATE voturile', //cpg1.4
  'del_comm' => 'Sterge comentarii',
  'del_all_comm' => 'Sterge TOATE comentariile', //cpg1.4
  'upl_approval' => 'Aprobare de încarcare', //cpg1.4
  'edit_pics' => 'Editeaza imagini',
  'see_next' => 'Vizualizeaza urmatoarele',
  'see_prev' => 'Vizualizeaza precedentele',
  'n_pic' => '%s fisiere',
  'n_of_pic_to_disp' => 'Numberul fisierelor de afisat',
  'apply' => 'Aplica modificarile',
  'crop_title' => 'Editor de Imagini Coppermine',
  'preview' => 'Previzualizare',
  'save' => 'Salveaza imagine',
  'save_thumb' =>'Salveaza ca miniatura de imagine',
  'gallery_icon' => 'Creaza aceasta ca pictograma mea', //cpg1.4
  'sel_on_img' =>'Selectia trebuie sa fie in intregime in imagine !', //js-alert
  'album_properties' =>'Proprietati Album', //cpg1.4
  'parent_category' =>'Categoria Parinte', //cpg1.4
  'thumbnail_view' =>'Vizualizare Miniaturi', //cpg1.4
  'select_unselect' =>'selecteaza/deselecteaza toate', //cpg1.4
  'file_exists' => "Fisierul destinatie '%s' exista deja.", //cpg1.4
  'rename_failed' => "Nu s-a reusit redenumirea din '%s' in '%s'.", //cpg1.4
  'src_file_missing' => "Fisierul '%s' lipseste.", // cpg 1.4
  'mime_conv' => "Nu pot converti fisierul din '%s' in '%s'",//cpg1.4
  'forb_ext' => 'Extensie de fisier interzisa.',//cpg1.4
);

// ------------------------------------------------------------------------- //
// File faq.php
// ------------------------------------------------------------------------- //

if (defined('FAQ_PHP')) $lang_faq_php = array(
  'faq' => 'INtrebari Frecvente',
  'toc' => 'Tabel de continut',
  'question' => 'Intrebarea: ',
  'answer' => 'Raspunsul: ',
);

if (defined('FAQ_PHP')) $lang_faq_data = array(
  'General FAQ',
  array('De este necesar sa ma intregistrez ? ', 'Inregistrarea poate sau nu sa fie necesara, in functie de preferintele Administratorului. Inregistrarea acorda utilizatorului drepturi suplimentare ca trimitere fisire, crearea unei liste de favorite, cotarea de imagini si postarea de comentarii etc.', 'allow_user_registration', '1'),
  array('Cum sa ma inregistrez ? ', 'Mergeti la &quot;Inregistrare&quot; si completati campurile necesare (eventual si cele optionale, daca doriti).<br />Daca Administratorul a ales Activarea prin Email, atunci, dupa trimiterea formularului, in mod normal, in cateva minute ar trebui sa receptionati la adresa specificata in formular un email care contine informatiile necesare activarii contului dumneavoastra. Acest lucru trebuie realizat pentru ca contul dumneavoastra sa devina activ si sa va puteti autentifica si utiliza.În unele cazuri, Administratorul poate decide activarea/dezactivarea contului dumneavoatra.', 'allow_user_registration', '1'), //cpg1.4
  array('How Do I login?', 'Go to &quot;Login&quot;, submit your username and password and check &quot;Remember Me&quot; so you will be logged in on the site if you should leave it.<br /><b>IMPORTANT:Cookies must be enabled and the cookie from this site must not be deleted in order to use &quot;Remember Me&quot;.</b>', 'offline', 0),
  array('De ce nu pot sa ma autentific ?', 'Verificati daca ati vizitat adresa de verificare care v-a fost trimisa in email-ul de activare.Verificati daca navigatorul dumneavoastra accepta cookies, stergeti fisierele temporare si cookie-urile si încercati din nou.Daca nu reusiti, contactati Administratorul.', 'offline', 0),
  array('What if I forgot my password?', 'If this site has a &quot;Forgot password&quot; link then use it. Other than that contact the site administrator for a new password.', 'offline', 0),
  //array('Daca am schimbat adresa mea de email ? ', 'Autentificati-va si schimbati adresa de email atasata profilului dumneavoastra personal', 'offline', 0),
  array('Cum sa salvez o imagine in &quot;Favorite&quot;?', 'Clic pe o imagine si apoi clic pe &quot;informatii imagine&quot; link (<img src="images/info.gif" width="16" height="16" border="0" alt="Picture information" />); derulati in jos in informatiile imaginii si selectati &quot;Adaugare la favorite&quot;.<br />Administratorul poate lasa &quot;Informatii imagine &quot; activate in mod normal.<br />IMPORTANT: Acceptare de Cookie trebuie sa fie activate in navigatorul dumneavoastra si trebuie sa nu fie sterse.', 'offline', 0),
  array('Cum sa cotez o imagine ?', ' Clic pe miniatura de imagine si navigati spre josul paginii si alegeti o cotare.', 'offline', 0),
  array('Cum sa comentez o imagine ? ', ' Clic pe miniatura de imagine si navigati in josul paginii pâna la sfârsitul comentariilor (daca exista) si faceti clic pe Adaugare comentariu.', 'offline', 0),
  array('How do I upload a file?', 'Go to &quot;Upload&quot;and select the album that you want to upload to. Click &quot;Browse,&quot; find the file to upload, and click &quot;open.&quot; Add a title and description if you want. Click &quot;Submit&quot;.<br /><br />Alternatively, for those users using <b>Windows XP</b>, you can upload multiple files directly to your own private albums using the XP Publishing wizard.<br />For instructions on how, and to get the required registry file, click <a href="xp_publish.php">here.</a>', 'allow_private_albums', 1), //cpg1.4
  array('Where do I upload a picture to?', 'You will be able to upload a file to one of your albums in &quot;My Gallery&quot;. The Administrator may also allow you to upload a file to one or more of the albums in the Main Gallery.', 'allow_private_albums', 0),
  array('What type and size of a file can I upload?', 'The size and type (jpg, png, etc.) is up to the administrator.', 'offline', 0),
  array('Cum sa creez , redenumensc sau sterg un album in &quot;Galeriile Mele&quot;?', 'Pentru acest lucru, treubuie sa fiti deja in &quot;modul Adminstrare&quot;<br />Navigati spre &quot;Creaza/Ordoneaza Albumele mele&quot; si faceti clic pe &quot;Nou&quot;. Schimbati &quot;Nou Album&quot; in numele preferat.<br />Puteti de asemenea redenumi orice alt ablum din galeria dumneavoastra.<br />Clic pe &quot;Aplica Modificarile&quot; pentru aplicarea modificarilor efectuate.', 'allow_private_albums', 0),
  array('Cum sa modific si sa restrictionez restrictia ca alti utilzatori sa nu vizualizeze albumele mele? ', 'Pentru acest lucru, treubuie sa fiti deja in &quot;modul Adminstrare&quot;<br />Navigati spre &quot;Modifica Albumele mele&quot;. În bara &quot;Actualizeaza Album&quot; , selectati albumul pe care doriti sa îl modificati.<br />Aici, puteti schimna numele, descrierea , imaginea miniatura, restrictiile pentru vizualizare si permisiunea pentru comentarii sau cotare.<br />Clic pe &quot;Actualizeaza Album&quot; si reglajele vor deveni active.', 'allow_private_albums', 0),
  array('Cum sa vizualizez alte galerii ale utilizatorilor ?', 'Navigati spre &quot;Lista Albume&quot; si selectati &quot;Galerii Utilizatori&quot;.Albumele confidentiale nu vor fi afisate.', 'allow_private_albums', 0),
  array('Ce sunt cookie-urile?', 'Cookie-urile sunt mici fisiere text care contin date (criptate sau nu) care sunt trimise de catre o pagina internet navigatorului dumneavoastra care le stocheaza pe discul local.Acestea pot fi folosite ex exeplu pentru ca navigatorul sa "isi aminteasca" de autentificarea dumneavoastra pe pagina, <br />astfel incat, selectand optiunea aferenta la procesul de autentificare, la urmatoarea vizita, cu ajutorul acestui cookie nu veti fi nevoit sa va reautentificati.Alte setari pot fi de asemenea stocate într-un cokie.', 'offline', 0),
  array('Cum sa procur acest software pentru situl meu ? ', 'Coppermine este o galerie gratuita, livrata sub o licenta GNU GPL. Este plina de functionalitati si a fost adaptata pentru diverse platforme. Vizitati adresa <a href="http://coppermine.sf.net/">Pagina Oficiala Coppermine</a> pentru a gasi informatii suplimentare sau pentru descarcare.', 'offline', 0),

  'Navigare in Pagina',
  array('Ce este &quot;Lista Albume&quot; ? ', 'Acesta va va arata intreaga categorie in care va aflati cu un link spre fiecare album. Daca nu va situati intr-o categorie , ca va afisa totalitatea galeriei cu un link spre fiecare categorie. O imagine miniatura poate fi in acelasi timp si un link/trimitere spre o categorie.', 'offline', 0),
  array('Ce este &quot;Galeria mea&quot;? ', 'Aceasta permite utilizatorilir sa isi creeze peopriile galerii si sa isi adauge, sterge sau modifica Albume de imagini.', 'allow_private_albums', 1), //cpg1.4
  array('Care este diferenta intre &quot;Modul Admin &quot; si  &quot;Modul Utilizator&quot;?', 'Acesta permite,când va aflati in Mod Administrare,modificare galeriilor dumneavoastra (de asemenea a altor utilizatori daca Administratorul a permis acest lucru).', 'allow_private_albums', 0),
  array('Ce este &quot;Trimitere Imagini&quot;? ', 'Aceasta permite utilizatorilor sa trimita imagini spre stocare,(marimea si tipul imaginilor sunt alese de catre administratorul paginii) intr-o galerie aleasa de dumneavoastra sau de catre Administrator.', 'allow_private_albums', 0),
  array('Ce este &quot;Încarcare Recenta&quot;? ', 'Acesta va afisa ultima imagina trimisa si incarcata pe pagina.', 'offline', 0),
  array('Ce sunt &quot;Comentarii Recente&quot;? ', 'Aceasta va afisa ultimele comentraii adaugate impreuna cu fisierele trimise.', 'offline', 0),
  array('Ce este &quot;Cea mai vizionata&quot;? ', 'Aceasta va afisa cea mai vizionata imagine de catre toti utilizatorii ( Indiferent daca acestia sunt autentificati sau nu).', 'offline', 0),
  array('Ce este &quot;Cea mai cotata&quot;?', 'Aceasta va afisa cea mai bine cotata imagine de catre utilizatori,aratand media cotarii (Exemplu: Cinci utilizatori care au acordat fiecar un  <img src="images/rating3.gif" width="65" height="14" border="0" alt="" />: imaginea va avea o coare medie de <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> ;Cinci utilizatori au cotat aceasta imagine de la 1 la 5 (1,2,3,4,5) va avea ca rezultat o medie de  <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> .)<br />Cotarile fluctueaza intre <img src="images/rating5.gif" width="65" height="14" border="0" alt="best" /> (Extraordinar) si  <img src="images/rating0.gif" width="65" height="14" border="0" alt="worst" /> (De aruncat).', 'offline', 0),
  array('Ce sunt&quot;Favoritele mele&quot;?', 'Aceasta va pemite utilizatorukyu sa stocheze imaginile favorite într-un fisir cookie care a fost trimis computerului dumneavoastra.', 'offline', 0),
);


// ------------------------------------------------------------------------- //
// File forgot_passwd.php
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) $lang_forgot_passwd_php = array(
  'forgot_passwd' => 'Reamintire parola',
  'err_already_logged_in' => 'Sunteti deja autentificat!',
  'enter_email' => 'Introduceti adresa de email', //cpg1.4
  'submit' => 'Trimite',
  'illegal_session' => 'Sesiunea parola uitata este invalida sau a expirat.', //cpg1.4
  'failed_sending_email' => 'Reaminirea parolei nu a putut fi trimisa !',
  'email_sent' => 'Un mesaj email continand numele de utilizator si parola au fost trimise la %s', //cpg1.4
  'verify_email_sent' => 'Un mesaj email a fost trimis la %s. Verificati adresa dumneavoastra de email pentru a completa acest proces.', //cpg1.4
  'err_unk_user' => 'Utilizatorul selectat nu exista!',
  'account_verify_subject' => '%s - Cerere de noua parola', //cpg1.4
  'account_verify_body' => 'Ati cerut o noua parola.Daca doriti o noua parola sa va fie trimisa, faceti clic pe adresa urmatoare:

%s', //cpg1.4
  'passwd_reset_subject' => '%s - Noua parola', //cpg1.4
  'passwd_reset_body' => 'Aceasta este noua parola pe care ati cerut-o:
Nume de utilizator: %s
Parola: %s
Clic aici %s pentru autentificare.', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
  'group_name' => 'Grup', //cpg1.4
  'permissions' => 'Permisiuni', //cpg1.4
  'public_albums' => 'Încarcare albume Publice', //cpg1.4
  'personal_gallery' => 'Galeria Personala', //cpg1.4
  'upload_method' => 'Metoda de încarcare', //cpg1.4
  'disk_quota' => 'Limita ', //cpg1.4
  'rating' => 'Cotare', //cpg1.4
  'ecards' => 'Carti Postale Electronice', //cpg1.4
  'comments' => 'Comentarii', //cpg1.4
  'allowed' => 'Permis', //cpg1.4
  'approval' => 'Aprobare', //cpg1.4
  'boxes_number' => 'Numar de câmpuri', //cpg1.4
  'variable' => 'variabil', //cpg1.4
  'fixed' => 'fix', //cpg1.4
  'apply' => 'Aplica modificarile',
  'create_new_group' => 'Creaza un grup nou',
  'del_groups' => 'Sterge grupul(urile) seletionat(e)',
  'confirm_del' => 'Atetie,când stergeti un grup,utilizatorii care apartin acestui grup vor fi transferati automat spre grupul utilizatorilor înregistrati !\n\nDoriti sa continuati ?', //js-alert
  'title' => 'Gestioneaza grupurile de utilizatori',
  'num_file_upload' => 'Casupe pnetru upload', //cpg1.4
  'num_URI_upload' => 'Adredsa URI a casutelor', //cpg1.4
  'reset_to_default' => 'Resetare spre numele standard. Numar Prestabilit (%s) - recomndabil!', //cpg1.4
  'error_group_empty' => 'Tablou grup este gol !<br /><br />Grupuri standard au fost create, reactualizati afeasta pagina', //cpg1.4
  'explain_greyed_out_title' => 'De ce aceasta coloana este marcata gri? ', //cpg1.4
  'explain_guests_greyed_out_text' => 'Proprietatile nu pot di schimbate deoarace ati ales &quot; Accesul utilizatorilor neautentificati (Oaspeti sau Anonimi) access&quot; in &quot;Nu&quot; pe pagina de configurare  (memrii glupului %s) nu pot face altceva decât autentificare ; in acelasi timp setarile de grup nu se aplica pentru ei.', //cpg1.4
  'explain_banned_greyed_out_text' => 'Nu puteti schimba proprietatile grupului deoarcec membrii grupului %s deja nu au acces .', //cpg1.4
  'group_assigned_album' => 'assigned album(s)', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
  'welcome' => 'Bine ati venit !',
);

$lang_album_admin_menu = array(
  'confirm_delete' => 'Sunteti sigur ca doriti sa stergeti acest album ?\\nToate imaginile si comentariile vor fi pierdute.', //js-alert
  'delete' => 'STERGE',
  'modify' => 'PROPRIETATI',
  'edit_pics' => 'EDITEAZA IMAGINI',
);

$lang_list_categories = array(
  'home' => 'Start',
  'stat1' => '<b>[pictures]</b> imagini in <b>[albums]</b> album(e) si <b>[cat]</b> categorie(ii) cu <b>[comments]</b> commentarii vizualizate <b>[views]</b> data/ori',
  'stat2' => '<b>[pictures]</b> imagini in <b>[albums]</b> album(e) vizualizate <b>[views]</b> data/ori',
  'xx_s_gallery' => '%s\'s Galerie',
  'stat3' => '<b>[pictures]</b> imagini in <b>[albums]</b> album(e) cu <b>[comments]</b> commentariu(ii) vizualizate <b>[views]</b> data/ori',
);

$lang_list_users = array(
  'user_list' => 'Lista de utilizatori',
  'no_user_gal' => 'Nu exista galerii ale utilizatorilor',
  'n_albums' => '%s album(e)',
  'n_pics' => '%s imagine(i)',
);

$lang_list_albums = array(
  'n_pictures' => '%s Imagini',
  'last_added' => ', Ultima adaugata in %s',
  'n_link_pictures' => '%s Imagini cu adresa', //cpg1.4
  'total_pictures' => '%s Imagini in total', //cpg1.4
);

}

// ------------------------------------------------------------------------- //
// File keywordmgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('KEYWORDMGR_PHP')) $lang_keywordmgr_php = array(
  'title' => 'Gestionar de cuvinte-cheie', //cpg1.4
  'edit' => 'editeaza', //cpg1.4
  'delete' => 'sterge', //cpg1.4
  'search' => 'cauta', //cpg1.4
  'keyword_test_search' => 'cautare %s intr-o fereastra noua', //cpg1.4
  'keyword_del' => 'sterge cuvantul-cheie %s', //cpg1.4
  'confirm_delete' => 'Sunteti sigur ca doriti sa stergeti cuvantul-cheie  %s din totalitatea galeriei ?', //cpg1.4  // js-alert
  'change_keyword' => 'Schimba cuvant-cheie', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
  'login' => 'Autentificare',
  'enter_login_pswd' => 'Introduceti numele de utilizator si parola pentru autentificare',
  'username' => 'Utilizator',
  'password' => 'Parola',
  'remember_me' => 'Memoreaza datele',
  'welcome' => 'Bine ati venit %s ...',
  'err_login' => '*** Autentificare esuata. Incercati din nou. ***',
  'err_already_logged_in' => 'Sunteti deja autentificat !',
  'forgot_password_link' => 'Parola uitata',
  'cookie_warning' => 'Avertisment: Navigatorul dumneavoastra nu accepta cookies', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
  'logout' => 'Dezauntentificaret',
  'bye' => 'La revedere %s ...',
  'err_not_loged_in' => 'Nu sunteti autentificat !',
);

// ------------------------------------------------------------------------- //
// File minibrowser.php  //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('MINIBROWSER_PHP')) $lang_minibrowser_php = array(
  'close' => 'inchide', //cpg1.4
  'submit' => 'Trimite', //cpg1.4
  'up' => 'Un nivel mai sus', //cpg1.4
  'current_path' => 'calea curenta', //cpg1.4
  'select_directory' => 'va rugam selectati un dosar', //cpg1.4
  'click_to_close' => 'Clic pe imagine pentru a inchide aceasta fereastra',
);

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
  'upd_alb_n' => 'Actualizeaza albumul %s',
  'general_settings' => 'Setari generale',
  'alb_title' => 'Titlu album',
  'alb_cat' => 'Categorie album',
  'alb_desc' => 'Descriere album',
  'alb_keyword' => 'Cuvant-cheie album', //cpg1.4
  'alb_thumb' => 'Miniatura album',
  'alb_perm' => 'Permisiunile pentru acest album',
  'can_view' => 'Albumul poate fi vizualizat de catre',
  'can_upload' => 'Vizitatorii pot încarca imagini',
  'can_post_comments' => 'Vizitatorii pot trimite comentarii',
  'can_rate' => 'Vizitatorii pot cota imaginile',
  'user_gal' => 'Galeriile utilizatorilor',
  'no_cat' => '* Nici o categorie *',
  'alb_empty' => 'Albumul este gol',
  'last_uploaded' => 'Ultima incarcata',
  'public_alb' => 'Toata lumea (album public)',
  'me_only' => 'Doar eu',
  'owner_only' => 'Doar proprietarul albumului (%s)',
  'groupp_only' => 'Membrii grupului \'%s\'',
  'err_no_alb_to_modify' => 'Nu exista nici un album in baza de date pe care puteti sa îl modificati.',
  'update' => 'Actualizeaza album',
  'reset_album' => 'Reseteaza album', //cpg1.4
  'reset_views' => 'Reseteaza numerotarea vizualizarilor in &quot;0&quot; pentru %s', //cpg1.4
  'reset_rating' => 'Reseteaza cotarea tuturor imaginilor pentru %s', //cpg1.4
  'delete_comments' => 'Sterge toate comentariile pentru %s', //cpg1.4
  'delete_files' => '%sIreversibil%s Sterge toate imaginile din %s', //cpg1.4
  'views' => 'vizualizari', //cpg1.4
  'votes' => 'cotari', //cpg1.4
  'comments' => 'comentarii', //cpg1.4
  'files' => 'fisiere', //cpg1.4
  'submit_reset' => 'trimite schimbarile', //cpg1.4
  'reset_views_confirm' => 'Sunt sigur,continua.', //cpg1.4
  'notice1' => '(*) depinde de setarile pentru %sgroups%s',  //cpg1.4 //(do not translate %s!)
  'alb_password' => 'Parola pentru album', //cpg1.4
  'alb_password_hint' => 'Indiciu parola album', //cpg1.4
  'edit_files' =>'Editeaza fisiere', //cpg1.4
  'parent_category' =>'Categoria parinte', //cpg1.4
  'thumbnail_view' =>'Vizualizare miniaturi', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File phpinfo.php
// ------------------------------------------------------------------------- //

if (defined('PHPINFO_PHP')) $lang_phpinfo_php = array(
  'php_info' => 'Informatii despre PHP',
  'explanation' => 'Acesta este rezultatul functiei PHP <a href="http://www.php.net/phpinfo">phpinfo()</a>, afisat in Coppermine.',
  'no_link' => 'Accesul altor persoane la informatiile despre php poate fi considerat o bransa in securitate, de accea aceasta pagina est vizibila doar atunci când sunteti autentificat ca administrator. Nu puteti trimite adresa acestei pagini altora,accesul acestora va fi restrictionat.',
);

// ------------------------------------------------------------------------- //
// File picmgr.php //cpg1.4
// ------------------------------------------------------------------------- //
if (defined('PICMGR_PHP')) $lang_picmgr_php = array(
  'pic_mgr' => 'Gestionar de Imagini', //cpg1.4
  'select_album' => 'Selectare album', //cpg1.4
  'delete' => 'Sterge', //cpg1.4
  'confirm_delete1' => 'Sunteti sigur ca doriti sa stergeti aceasta imagine?', //cpg1.4
  'confirm_delete2' => '\nImaginea va fi stearsa definitiv.', //cpg1.4
  'apply_modifs' => 'Aplica modificarile', //cpg1.4
  'confirm_modifs' => 'Confirmati modificarile', //cpg1.4
  'pic_need_name' => 'Imaginea trebuie sa aiba un nume !', //cpg1.4
  'no_change' => 'Nu ati facut nici o modificare !', //cpg1.4
  'no_album' => '* Nici un album *', //cpg1.4
  'explanation_header' => 'Ordinea sortari pe care o specificati in aceasta pagina,va fi activa doar daca', //cpg1.4
  'explanation1' => ' administratorul a setat "Sortarea implicita a imaginilor" din configuratie in "Ordine descrescatoare" sau "Ordine crescatoare" (reglaj general pentru toti utilizatorii care nu au ales o alta metoda individuala de sortare)', //cpg1.4
  'explanation2' => ' utilizatorul a ales "Ordine descrescatoare" sau "Ordine crescatoare" in pagina de miniaturi (in reglaje utilizator)', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File pluginmgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('PLUGINMGR_PHP')){

$lang_pluginmgr_php = array(
  'confirm_uninstall' => 'Sunteti sigur ca doriti sa dezinstalati acest plug-in', //cpg1.4
  'confirm_delete' => 'Sunteti sigur ca doriti sa stergeti acest plug-in', //cpg1.4
  'pmgr' => 'Gestionar de Plug-in-uri', //cpg1.4
  'name' => 'Nume', //cpg1.4
  'author' => 'Autor', //cpg1.4
  'desc' => 'Descriere', //cpg1.4
  'vers' => 'v', //cpg1.4
  'i_plugins' => 'Plugin-uri Instalate', //cpg1.4
  'n_plugins' => 'Plugin-uri neinstalate', //cpg1.4
  'none_installed' => 'Nici unul instalat', //cpg1.4
  'operation' => 'Operatie', //cpg1.4
  'not_plugin_package' => 'Fisierul încarcat nu este un pachet plug-in.', //cpg1.4
  'copy_error' => 'O eroare a fost semnalata la copierea pachetului plug-in in dosarul plug-in.', //cpg1.4
  'upload' => 'Incarca', //cpg1.4
  'configure_plugin' => 'Configurare plug-in', //cpg1.4
  'cleanup_plugin' => 'Curata plug-in', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
  'already_rated' => 'Îmi pare rau dar ati cotat deja aceasta imagine.',
  'rate_ok' => 'Votul dumneavoastra a fost înregistrat.',
  'forbidden' => 'Nu puteti cota propriile imagini.',
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
Administratorul paginii {SITE_NAME} va încerca,in general, sa înlature sau sa editeze orice material indecent sau imoral cât mai repede cu putinta. Totodata, este imposibil ca acesta sa verifice fiecare mesaj/imagine noua. În acelasi timp, sunteti de acord ca tot materialul acestei pagini reflecta punctul de vedere si opinia autorului mesajului/imaginii si nu a administratorului sau a webmaster-ului, (cu exceptia mesajelor/imaginilor care le apartin) din acest motiv,acestia nu pot fi raspunzatori pentru acest material.<br />
<br />
Sunteti de acord sa nu postati material cu caracter abuziv, obscen, vulgar, calomnios, cu instigare la ura, amenintari, hartuire sau orientare sexuala sau orice alt material care poate incalca orice legi aplicabile. În aceeasi ordine de idei, sunteti de acord ca administratorul sau webmaster-ul paginii {SITE_NAME} are,in orice moment,dreptul de a sterge sau edita orice material. În calitate de utilizator, suteti de acord ca informatiile trimise anterior sa fie stocate intr-o baza de date. Aceste informatii nu vor fi divulgate catre terte persoane fara acordul dumneavoastra. Administratorul sau webmaster-ul nu pot fi trasi la raspundere pentru eventualele date compromise in urma unuei accesari neautorizate si/sau a unui atac tip "hacker" ale serveului si/sau bazei de date.<br />
<br />
Aceasta pagina utilizeaza cookie pentru a stoca informatii in calculatorul dumneavoastra. Acestea servesc doar pentru a imbunatati procedura de vizualizare. Adresa electronica (e-mail) este utilizata doar pentru a connfirma inregistrarea dumneavoastra sau pentru parola (parola uitata) .<br />
<br />
În momentul in care faceti clic pe butonul 'Sunt de acord' de mai jos, confirmati ca sunteti de acord sa va supuneti respectarii conditiilor mai sus amintite.
EOT;

$lang_register_php = array(
  'page_title' => 'Inregistrare utilizator',
  'term_cond' => 'Termeni si conditii',
  'i_agree' => 'Sunt de acord',
  'submit' => 'Trimite inregistrarea',
  'err_user_exists' => 'Numele de utilizator introdus a fost ales deja de catre alta persoana.Va rugam alegeti alt nume',
  'err_password_mismatch' => 'Cele 2 parole nu corespund,va rugam sa le introduceti din nou.',
  'err_uname_short' => 'Numele de utilizator trebuie sa aiba minim 2 caractere',
  'err_password_short' => 'Parola trebuie sa aiba minim 2 caractere',
  'err_uname_pass_diff' => 'Numele de utilizator si parola trebuie sa fie diferite una de alta.',
  'err_invalid_email' => 'Adresa de email nu este corecta.',
  'err_duplicate_email' => 'Un alt utilizator este înregistrat cu aceasta adresa de email.',
  'enter_info' => 'Introduceti informatiile necesare inregistrarii',
  'required_info' => 'Informatie obligatori',
  'optional_info' => 'Informatie optionala',
  'username' => 'Nume de utilizator',
  'password' => 'Parola',
  'password_again' => 'Reintroducere parola',
  'email' => 'Adresa Email',
  'location' => 'Locatie',
  'interests' => 'Interese',
  'website' => 'Pagina personala',
  'occupation' => 'Profesia',
  'error' => 'EROARE',
  'confirm_email_subject' => '%s - Confirmare înregistrare',
  'information' => 'Informatie',
  'failed_sending_email' => 'Mesajul e-mail de confirmare nu poate fi trimis !',
  'thank_you' => 'Va multumim pentru înregistrare.<br /><br />Un mesaj e-mail care contine informatiile necesare activatii contului dumneavoastra a fost timis la adresa de e-mail specificata.',
  'acct_created' => 'Contul dumneavoastra a fost creat si va puteti autentifica cu ajutorul numelui de utilizator si a parolei.',
  'acct_active' => 'Contul dumneavoastra a fost activat.Va puteti autentifica cu ajutorul numelui de utilizator si a parolei',
  'acct_already_act' => 'Contul dumneavoastra a fost deja activat!', //cpg1.4
  'acct_act_failed' => 'Acest cont nu poate fi activat !',
  'err_unk_user' => 'Utilizatorul selectionat nu a fost gasit !',
  'x_s_profile' => 'Profilul lui %s',
  'group' => 'Grup',
  'reg_date' => 'Data inregistrarii',
  'disk_usage' => 'Spatiu utilizat',
  'change_pass' => 'Schimba parola',
  'current_pass' => 'Parola actuala',
  'new_pass' => 'Noua parola',
  'new_pass_again' => 'Reintroduceti noua parola',
  'err_curr_pass' => 'Actuala parola este gresita',
  'apply_modif' => 'Aplica modificarile',
  'change_pass' => 'Schimba parola',
  'update_success' => 'Profilul dumneavoastra a fost actualizat',
  'pass_chg_success' => 'Parola a fost schimbata',
  'pass_chg_error' => 'Parola nu a fost schimbata',
  'notify_admin_email_subject' => '%s - Notificare de înregistrare',
  'last_uploads' => 'Last uploaded file.<br />Clic aici pentru a vizualiza toate imaginile trimise de', //cpg1.4
  'last_comments' => 'Last comment.<br />Clic aici pentru a vizualiza toate comentariile trimise de', //cpg1.4
  'notify_admin_email_body' => 'Un nou utilizator cu numele "%s" s-a înregistrat in galeria dumneavoastra.',
  'pic_count' => 'Imagini încarcate', //cpg1.4
  'notify_admin_request_email_subject' => '%s - Cerere de înregistrare', //cpg1.4
  'thank_you_admin_activation' => 'Va multumim.<br /><br />Cererea dumneavoastra de înregistrare a fost transmisa administratorului.Veti fi instiintat in adresa dumneavoastra de e-mail imediat ce va fi aprobata.', //cpg1.4
  'acct_active_admin_activation' => 'Contul este activ.Un email a fost trimis utilizatorului pentru a-i confirma acest lucru.', //cpg1.4
  'notify_user_email_subject' => '%s - Contul dumneavoastra a fost activat', //cpg1.4
);

$lang_register_confirm_email = <<<EOT
Va multumim pentru inregistrarea facuta la {SITE_NAME}

Pentru a confirma si activa contul dumneavoastra cu numele "{USER_NAME}",trebuie sa vizitati adresa de mai jos.În cazul in care nu reusiti sa faceti clic, copiati adresa in navigatorul dumneavoastra.

<a href="{ACT_LINK}">{ACT_LINK}</a>

Cu stima,

Echipa {SITE_NAME}

EOT;

$lang_register_approve_email = <<<EOT
Un nou utilizator cu numele "{USER_NAME}" s-a înregistrat in galeria dumneavoastra la {SITE_NAME}

Pentru activarea contului, vizitati adresa de mai jos.În cazul in care nu reusiti sa faceti clic,copiati adresa in navigatorul dumneavoastra:

<a href="{ACT_LINK}">{ACT_LINK}</a>

EOT;

$lang_register_activated_email = <<<EOT
Contul dumneavoastra la {SITE_NAME} , a fost aprobat si activat.

Din acet moment, va puteti autentifica la adresa <a href="{SITE_LINK}">{SITE_LINK}</a> folosind numele de utilizator "{USER_NAME}" si parola aleasa la înregistrare.


Cu stimas,

Echipa {SITE_NAME}

EOT;
}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
  'title' => 'Verificare comentarii',
  'no_comment' => 'Nu este nici un comentariu',
  'n_comm_del' => '%s comentariu(ii) a(u) fost sters(e)',
  'n_comm_disp' => 'Numarul de comentarii pentru afisare',
  'see_prev' => 'Vezi anteriorul',
  'see_next' => 'Vezi urmatorul',
  'del_comm' => 'Sterge comentariile selectionate',
  'user_name' => 'Nume', //cpg1.4
  'date' => 'Data', //cpg1.4
  'comment' => 'Comentariu', //cpg1.4
  'file' => 'Fisier', //cpg1.4
  'name_a' => 'Dupa nume de utilizator crescator', //cpg1.4
  'name_d' => 'Dupa nume de utilizator descrescator', //cpg1.4
  'date_a' => 'Data crescator', //cpg1.4
  'date_d' => 'Data descrescator', //cpg1.4
  'comment_a' => 'Mesaj comentariu crescator', //cpg1.4
  'comment_d' => 'Mesaj comentariu descrescator', //cpg1.4
  'file_a' => 'Fisier crescator', //cpg1.4
  'file_d' => 'Fisier descrescator', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File search.php                                                           //
// ------------------------------------------------------------------------- //


if (defined('SEARCH_PHP')){

$lang_search_php = array(
  'title' => 'Cautare in colectia de imagini', //cpg1.4
  'submit_search' => 'Cauta', //cpg1.4
  'keyword_list_title' => 'Lista cuvinte-cheie', //cpg1.4
  'keyword_msg' => 'List de mai sus nu include cuvinte continute in titlul sau descrierea imaginilor. Incercati o catutare text completa.',  //cpg1.4
  'edit_keywords' => 'Editeaza cuvinte-cheie', //cpg1.4
  'search in' => 'Cautare in:', //cpg1.4
  'ip_address' => 'Adresa IP', //cpg1.4
  'fields' => 'Cautare in', //cpg1.4
  'age' => 'Varsta', //cpg1.4
  'newer_than' => 'Mai noi de', //cpg1.4
  'older_than' => 'Mai vechi de', //cpg1.4
  'days' => 'zi/zile', //cpg1.4
  'all_words' => 'Potrivire cu toate cuvintele (AND)', //cpg1.4
  'any_words' => 'Potrivire orice cuvant (OR)', //cpg1.4
);

$lang_adv_opts = array(
  'title' => 'Titlu', //cpg1.4
  'caption' => 'Subtitlu', //cpg1.4
  'keywords' => 'Cuvinte-cheie', //cpg1.4
  'owner_name' => 'Nume proprietar', //cpg1.4
  'filename' => 'Nume fisier', //cpg1.4
);

}

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
  'page_title' => 'Cauta fisiere noi',
  'select_dir' => 'Selectioneaza dosarul',
  'select_dir_msg' => 'Acesta functie va permite sa adaugati o lista de fisiere pe care le-ati încarcat cu ajutorul protocolului FTP.<br /><br />Selectionati dosarul unde ati încarcat fisierele.', //cpg1.4
  'no_pic_to_add' => 'Nu exista nici un fisier de încarcat',
  'need_one_album' => 'Aveti nevoie de cel putin un album pentru a utiliza aceasta functie.',
  'warning' => 'Avertisment',
  'change_perm' => ' pagina nu poate scrie in acest dosar, este necesara schimbarea atributelor acestui dosar in 755 sau 777 (consultati documentatia protocolului FTP) !',
  'target_album' => '<b>Încarcati fisierele din &quot;</b>%s<b>&quot; in </b>%s',
  'folder' => 'Dosar',
  'image' => 'imagine',
  'album' => 'Album',
  'result' => 'Resultat',
  'dir_ro' => 'Neinscriptibil. ',
  'dir_cant_read' => 'Ilizibil. ',
  'insert' => 'Adaugare noi fisiere in galerie.',
  'list_new_pic' => 'Lista noilor fisiere',
  'insert_selected' => 'Introdu fisierele selectionate',
  'no_pic_found' => 'Nici un nou fisier nu a fost gasit',
  'be_patient' => 'Va rugam asteptati, fisierele se incarca.',
  'no_album' => 'nici un album nu a fost selectionat',
  'result_icon' => 'clic pentru detalii sau pentru actualizare',  //cpg1.4
  'notes' =>  '<ul>'.
                          '<li><b>OK</b> : Fisierul a fost adaugat'.
                          '<li><b>DP</b> : Fisierul este un duplicat si exista deja in baza de date'.
                          '<li><b>PB</b> : Fisierul nu poate fi adaugat,verificati configuratia si permisiunile pentru dosarele unde fisierele sunt localizate'.
                          '<li><b>NA</b> : Nu ati selectat un album destinatie pentru fisiere.Clic \'<a href="javascript:history.back(1)">inapoib</a>\' si selectati un album. Daca nu aveti unul,<a href="albmgr.php">creati intai un album</a></li>'.
                          '<li>Daca simbolurile OK, DP, PB nu se afiseaza, faceti clic pe fisierul problema pentru a vizualiza eventualele mesaje de eroare produse de PHP'.
                          '<li>Daca pagina expira, reactualizati pagina'.
                          '</ul>',
  'select_album' => 'selectati album',
  'check_all' => 'bifeaza tot',
  'uncheck_all' => 'Debifeaza tot',
  'no_folders' => 'Nu exista dosare in dosarul "albume". Verificati existenta a cel putin unui dosar in dosarul "albums" si prezenta fisierelor in acest dosar. Nu încarcati nimic in dosarele "userpics" nici in "edit" , acestea fiind rezervate pentru incarcari din navigator si pentru scopuri cu caracter intern.', //cpg1.4
   'albums_no_category' => 'Albume fara nic o categorie', //cpg1.4 // album pulldown mod, added by frogfoot
  'personal_albums' => '* Albume personale', //cpg1.4 // album pulldown mod, added by frogfoot
  'browse_batch_add' => 'Interfata navigabila (recomandat)', //cpg1.4
  'edit_pics' => 'Editeaza fisiere', //cpg1.4
  'edit_properties' => 'Proprietati album', //cpg1.4
  'view_thumbs' => 'Vizualizare miniaturi', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File stat_details.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('STAT_DETAILS_PHP')) $lang_stat_details_php = array(
  'show_hide' => 'Arata/Ascunde aceasta coloana', //cpg1.4
  'vote' => 'Detalii Vot', //cpg1.4
  'hits' => 'Detalii clic-uri', //cpg1.4
  'stats' => 'Statistici Voturi', //cpg1.4
  'sdate' => 'Data', //cpg1.4
  'rating' => 'Cotare', //cpg1.4
  'search_phrase' => 'Fraza Cautare', //cpg1.4
  'referer' => 'Sursa (provenienta)', //cpg1.4
  'browser' => 'Navigatorul', //cpg1.4
  'os' => 'Sistemul de operare', //cpg1.4
  'ip' => 'Adresa IP', //cpg1.4
  'sort_by_xxx' => 'Sorteaza dupa %s', //cpg1.4
  'ascending' => 'crescator', //cpg1.4
  'descending' => 'descrescator', //cpg1.4
  'internal' => 'intern', //cpg1.4
  'close' => 'inchide', //cpg1.4
  'hide_internal_referers' => 'ascunde sursele interne', //cpg1.4
  'date_display' => 'Afiseaza Data', //cpg1.4
  'submit' => 'Trimite / Reactualizare', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File thumbnails.php
// ------------------------------------------------------------------------- //

// Void

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) $lang_upload_php = array(
  'title' => 'Trimitere fisiere',
  'custom_title' => 'Forular personalizat',
  'cust_instr_1' => 'Puteti slectiona un numar personalizat de câmpuri trimitere. Totodata, nu puteti selectiona mai multe decât limita specificata mai jos.',
  'cust_instr_2' => 'Numar de câmpuri cerere',
  'cust_instr_3' => 'Campuri trimitere fisier: %s',
  'cust_instr_4' => 'Campuri încarcare URI/URL : %s',
  'cust_instr_5' => 'Campuri încarcare URI/URL :',
  'cust_instr_6' => 'Campuri trimitere fisiere:',
  'cust_instr_7' => 'Va rugam introduceti numarul fiecarui câmp de încarcare dorit.  Faceti clic pe \'Continuare\'. ',
  'reg_instr_1' => 'Actiune invalida in crearea formularului.',
  'reg_instr_2' => 'Acum puteti încarca fisierele dumneavoastra utilizând urmatoarele câmpuri de încarcare. Marimea fisierelor trimise nu trebuie sa depaseasca  %s KB fiecare. Arhivele ZIP încarcate in sectiunile \'Încarcari fisiere\' si \'Încarcari adrese URI/URL\' vor ramane comprimate.',
  'reg_instr_3' => 'Daca doriti decompresarea arhivelor, folositi câmpul de încarcare furnizat in sectiunea \'Încarcare arhiva ZIP spre decompresare\' .',
  'reg_instr_4' => 'Când utilizati sectiunea încarcare URI/URL, va rugam sa introduceti calea spre fisierul care se doreste a fi încarcat. Exemplu: http://www.pagina-sursa-fisiere.com/imagini/fisier-de-încarcat.jpg',
  'reg_instr_5' => 'Când ati completat formularul, faceti clic pe \'Continua\'.',
  'reg_instr_6' => 'Încarcare arhiva ZIP spre decompresare:',
  'reg_instr_7' => 'Încarcari fisiere:',
  'reg_instr_8' => 'Încarcari adrese URI/URL:',
  'error_report' => 'Raport de erori',
  'error_instr' => 'Urmatoarele trimiteri au intampinat probleme:',
  'file_name_url' => 'Nume/Adresa FisierL',
  'error_message' => 'Mesaj de eroare',
  'no_post' => 'Fisier neincarcat prin comanda POST.',
  'forb_ext' => 'Extensia de fisier interzisa.',
  'exc_php_ini' => 'Marimea fisierelor permise in php.ini a fost depasita.',
  'exc_file_size' => 'Marimea fisierelor permise de CPG a fost depasita.',
  'partial_upload' => 'Doar o încarcare partiala.',
  'no_upload' => 'Nici i încarcare nu s-a realizat.',
  'unknown_code' => 'Eroare de încarcare PHP necunoscuta.',
  'no_temp_name' => 'Nici o încarcare - Nici un nume temporar.',
  'no_file_size' => 'Nu contine date / Defect',
  'impossible' => 'Deplasare imposibila.',
  'not_image' => 'Nu este imagine / Defect',
  'not_GD' => 'Nu este o extensie a GD.',
  'pixel_allowance' => 'Inaltimea sau latimea imaginilor încarcate este mai mare decât cea permisa de configuratia galeriei.', //cpg1.4
  'incorrect_prefix' => 'Prefix adresa URI/URL incorect',
  'could_not_open_URI' => 'Nu se poate deschide adresa URI.',
  'unsafe_URI' => 'Adresa nu este credibila.',
  'meta_data_failure' => 'Esec Date Meta',
  'http_401' => '401 Acces Neautorizat',
  'http_402' => '402 Este necesara plata',
  'http_403' => '403 Interzis',
  'http_404' => '404 Negasit',
  'http_500' => '500 Eroare interna de server',
  'http_503' => '503 Serviciu nedisponibil',
  'MIME_extraction_failure' => 'Tipul MIME nu poate fi determinat.',
  'MIME_type_unknown' => 'Tip MIME necunoscut',
  'cant_create_write' => 'Nu pot sa scriu fisierul.',
  'not_writable' => 'Fisierul nu est inscriptibil.',
  'cant_read_URI' => 'Nu se poate citi adresa URI/URL',
  'cant_open_write_file' => 'Nu se poate deshide adresa URI pentru scriere fisier.',
  'cant_write_write_file' => 'Nu se poate scrie adresa URI pentru scriere  fisier.',
  'cant_unzip' => 'Nu se poate decompresa.',
  'unknown' => 'Eroare necunoscuta',
  'succ' => 'Încarcari reusite',
  'success' => '%s încarcare(i) a(u) fost realizata(e).',
  'add' => 'Va rugam faceti clic pe \'Continua\' pentru a adauga fisierele in album.',
  'failure' => 'Esec de trimitere',
  'f_info' => 'Informatii Fisier',
  'no_place' => 'Fisierul anterior nu poate fi plasat.',
  'yes_place' => 'Fisierul precedent a fost plasat.',
  'max_fsize' => 'Marimea maxima permisa este de %s KB',
  'album' => 'Album',
  'picture' => 'Fisier',
  'pic_title' => 'Titlu Fisier',
  'description' => 'Descrirere fisier',
  'keywords' => 'Cuvinte-cheie (separate cu un spatiu)<br /><a href="#" onClick="return MM_openBrWindow(\'keyword_select.php\',\'selectare\',\'width=250, height=400, scrollbars=yes,toolbar=no,status=yes,resizable=yes\')">Introduceti din lista</a>', //cpg1.4
  'keywords_sel' =>'Selectati un cuvant-cheie', //cpg1.4
  'err_no_alb_uploadables' => 'Îmi pare rau, nu exista nici un album unde va este permisa incarcarea fisierelor.',
  'place_instr_1' => 'Va rugam sa introduceti fisierele in album,in aceasta etapa.Puteti introduce de asemenea informatii relevante despre fiecare fisier.',
  'place_instr_2' => 'Mai multe fisiere necesita aplasarea. Faceti clic pe \'Continua\'.',
  'process_complete' => 'You have successfully placed all the files.',
   'albums_no_category' => 'Albume fara categorie', //cpg1.4. //album pulldown mod, added by frogfoot
  'personal_albums' => '* Albume personale', //cpg1.4 //album pulldown mod, added by frogfoot
  'select_album' => 'Selectare album', //cpg1.4 //album pulldown mod, added by frogfoot
  'close' => 'Close', //cpg1.4
  'no_keywords' => 'Îmi pare rau, nu exista cuvinte-cheie!', //cpg1.4
  'regenerate_dictionary' => 'Genereaza dictionar', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
  'memberlist' => 'Listq de membri', //cpg1.4
  'user_manager' => 'Gestionar de utilizatori', //cpg1.4
  'title' => 'Gestioneaza utilizatori',
  'name_a' => 'Nume crescator',
  'name_d' => 'Name descrescator',
  'group_a' => 'Grup crescator',
  'group_d' => 'Group descrescator',
  'reg_a' => 'Data inregistrarii crescator',
  'reg_d' => 'Data inregistrarii des crescator',
  'pic_a' => 'Numar fisiere crescator',
  'pic_d' => 'Nume fisiere descrescator',
  'disku_a' => 'Utilizare spatiy crescator',
  'disku_d' => 'Utilizare spatiy descrescator',
  'lv_a' => 'Ultima visita crescator',
  'lv_d' => 'Ultima vizita descrescator',
  'sort_by' => 'Sorteaza utilizatori dupa',
  'err_no_users' => 'Tabela utilizatori este goala !',
  'err_edit_self' => 'Nu puteti edita propriul progil.Pentru acest lucru folositi  \'Profilul meui\' ',
  'edit' => 'Editeaza', //cpg1.4
  'with_selected' => 'Cu cele selectionate:', //cpg1.4
  'delete' => 'Delete', //cpg1.4
  'delete_files_no' => 'Pastreaza fisierele publice (dar anonim)', //cpg1.4
  'delete_files_yes' => 'sterge fisierele publice', //cpg1.4
  'delete_comments_no' => 'Pastreaza comentariile (dar anonim)', //cpg1.4
  'delete_comments_yes' => 'Sterge si comentariile totodata', //cpg1.4
  'activate' => 'Activeaza', //cpg1.4
  'deactivate' => 'Dezactiveaza', //cpg1.4
  'reset_password' => 'Resetare Parola', //cpg1.4
  'change_primary_membergroup' => 'Schimba grupul de membri principal', //cpg1.4
  'add_secondary_membergroup' => 'Schimba grupul de membri secundar', //cpg1.4
  'name' => 'Nume utilizatorUser name',
  'group' => 'Group',
  'inactive' => 'Inactiv',
  'operations' => 'Operatii',
  'pictures' => 'Fisiere',
  'disk_space_used' => 'Spatiu utilizat', //cpg1.4
  'disk_space_quota' => 'Limita spatiu', //cpg1.4
  'registered_on' => 'Inregistrare', //cpg1.4
  'last_visit' => 'Ultima vizita',
  'u_user_on_p_pages' => '%d utilizator(i) pe %d pagina(i)',
  'confirm_del' => 'Sunteti sigur ca doriti sa stergeti acest utilizator? \\nTOATE fisierele si albumele sale vor fi de asemenea sterse.', //js-alert
  'mail' => 'MAIL',
  'err_unknown_user' => 'Utilizatorul selectionat nu exista !',
  'modify_user' => 'Modifica utilizator',
  'notes' => 'Note',
  'note_list' => '<li>Daca nu doriti schimbarea parolei, lasati câmpul "parola" gol.',
  'password' => 'Parola',
  'user_active' => 'Utilizator activ',
  'user_group' => 'Grup utilizator',
  'user_email' => 'Adresa email a utilizatorului',
  'user_web_site' => 'Pagina personala ',
  'create_new_user' => 'Creaza un nou utilizator',
  'user_location' => 'Locatia utilizatorului',
  'user_interests' => 'Interesele utilizatorului',
  'user_occupation' => 'Profesia utilizatorului',
  'user_profile1' => '$user_profile1', //cpg1.4
  'user_profile2' => '$user_profile2', //cpg1.4
  'user_profile3' => '$user_profile3', //cpg1.4
  'user_profile4' => '$user_profile4', //cpg1.4
  'user_profile5' => '$user_profile5', //cpg1.4
  'user_profile6' => '$user_profile6', //cpg1.4
  'latest_upload' => 'Încarcari recente',
  'never' => 'niciodata',
  'search' => 'Cautare utilizator', //cpg1.4
  'submit' => 'Trimite', //cpg1.4
  'search_submit' => 'Trimite!', //cpg1.4
  'search_result' => 'Rezultat cautare pentru: ', //cpg1.4
  'alert_no_selection' => 'Trebuie sa selectati cel putin un utlizator intai!', //cpg1.4 //js-alert
  'password' => 'parola', //cpg1.4
  'select_group' => 'Selectare grup', //cpg1.4
  'groups_alb_access' => 'Permisiuni Album dupa grup', //cpg1.4
  'album' => 'Album', //cpg1.4
  'category' => 'Categorie', //cpg1.4
  'modify' => 'Modifica?', //cpg1.4
  'group_no_access' => 'Acest grup nu are acces special', //cpg1.4
  'notice' => 'Nota', //cpg1.4
  'group_can_access' => 'Album(e) pe care doar "%s" le poate accesa', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //

if (defined('UTIL_PHP')) {
$lang_util_desc_php = array(
'Actualizeaza titluri din nume fisier', //cpg1.4
'Sterge titluri', //cpg1.4
'Reconstruieste miniaturile si imaginile redimensionate', //cpg1.4
'Sterge imaginile originale,înlocuindu-le cu versiunea redimensionata a acestora', //cpg1.4
'Sterge imaginile originale sau intermediare pentru a castiga spatiu', //cpg1.4
'Sterge comentarii inutile', //cpg1.4
'Reciteste marimea fisierelor si dimensiunile (daca ati editat imagini manual)', //cpg1.4
'Reseteaza numataroarea de vizualizari', //cpg1.4
'Afiseaza informatii PHP', //cpg1.4
'Actualizeaza baza de date', //cpg1.4
'Afiseaza fisiere raport', //cpg1.4
);
$lang_util_php = array(
  'title' => 'Utilitare Administrator (Redimensioneaza imagini)',
  'what_it_does' => 'Ce face',
  'file' => 'Fisier',
  'problem' => 'Problema', //cpg1.4
  'status' => 'Stare', //cpg1.4
  'title_set_to' => 'titlu setat in',
  'submit_form' => 'trimite',
  'updated_succesfully' => 'actualizat',
  'error_create' => 'EROARE de creare',
  'continue' => 'Proceseaza in continuare imagini',
  'main_success' => 'Fisierul %s a fost utilizat ca fisier principal',
  'error_rename' => 'Eroare in redenumirea din %s in %s',
  'error_not_found' => 'Fisierul %s nu a fost gasit',
  'back' => 'înapoi la start',
  'thumbs_wait' => 'Actualizare miniaturi si/sau redimensionare imagini.Va rugam asteptati...',
  'thumbs_continue_wait' => 'Continua cu actualizare miniaturi si/sau redimensionare imagini...',
  'titles_wait' => 'Actualizare titluri, asteptati va rog...',
  'delete_wait' => 'Stergere titluri, asteptati va rog...',
  'replace_wait' => 'Stergere originale si inlocuirea lor cu imaginile redimensionate, asteptati va rog..',
  'instruction' => 'Instructiuni rapide',
  'instruction_action' => 'Selectati actiunea',
  'instruction_parameter' => 'Setare parameteri',
  'instruction_album' => 'Selectare album',
  'instruction_press' => 'Apasati %s',
  'update' => 'Actualizare miniaturi si/sau imagini redimensionate',
  'update_what' => 'Ce ar trebui sa fie actualizat',
  'update_thumb' => 'Doar miniaturile',
  'update_pic' => 'Doar imaginile redimensionate',
  'update_both' => 'Atat miniaturile cat si imaginile redimensionate',
  'update_number' => 'Numarul de imagini procesate per clic',
  'update_option' => '(Incercati reglarea acestui parametru cu o valoare inferioara,in cazul in care pagina expira)',
  'filename_title' => 'Filename &rArr; Nume fisier',
  'filename_how' => 'Cum ar trebui ca numele fisierului sa fie modificat',
  'filename_remove' => 'Înlatura extensia .jpg de la sfarsit si inlocuieste \"_\" (underscore) cu spatii',
  'filename_euro' => 'Schimba 2006_11_23_13_20_20.jpg in, 23/11/2006 13:20',
  'filename_us' => 'Schimba 2006_11_23_13_20_20.jpg in 11/23/2006 13:20',
  'filename_time' => 'Schimba 2006_11_23_13_20_20.jpg in 13:20',
  'delete' => 'Sterge titlul fisierelor sau imaginile in dimensiune originala',
  'delete_title' => 'Sterge titlul fisierelor',
  'delete_title_explanation' => 'Acesta va sterge toate tilurile fisierelor in albumul specificat.', //cpg1.4
  'delete_original' => 'Sterge imaginile in dimensiunea originala',
  'delete_original_explanation' => 'Aceasta va sterge imaginile care sunt in dimensiunea originala.', //cpg1.4
  'delete_intermediate' => 'Sterge imagini intermediare', //cpg1.4
  'delete_intermediate_explanation' => 'Acesta va sterge imaginile intermediare (normale).<br />Utilizati aceasta comanda pentru a elibera spatiu,daca ati dezactivat \'Creare imagini intermediare\' in configurare,dupa adaugarea imaginilor.', //cpg1.4
  'delete_replace' => 'Sterge imaginile originale si inlocuieste-le versiunea dimensionata',
  'titles_deleted' => 'Toate titlurile in albumul specificat vor fi inlaturate', //cpg1.4
  'deleting_intermediates' => 'Stergere imagini intermediare, va rugam asteptati...', //cpg1.4
  'searching_orphans' => 'Cautare imagini pierdute, va rugam asteptati...', //cpg1.4
  'select_album' => 'Selectare album',
  'delete_orphans' => 'Sterge comentariile pentru imagini lipsa', //cpg1.4
  'delete_orphans_explanation' => 'Acesta va identifica si sterge orice comentariu asociat unei imagini care nu mai exista in galerie.<br />Se verifica toate albumele.', //cpg1.4
  'refresh_db' => 'Reactualizeaza informatiile despre dimensiune si marime', //cpg1.4
  'refresh_db_explanation' => 'Acesta va reactualiza informatiile despre marime si dimensiune ale imaginilor. Utilizati aceasta daca limita de spatiu esre raportata incorect sau daca ati schimbat fisiere manual.', //cpg1.4
  'reset_views' => 'Reseteaza numerotarea vizualizarilor', //cpg1.4
  'reset_views_explanation' => 'Seteaza toate numerotarile de vizualizari in zero pentru toate imaginile din albumul specificat.', //cpg1.4
  'orphan_comment' => 'Comentarii pentru imagini inexistente au fost descoperite',
  'delete' => 'Sterge',
  'delete_all' => 'Sterge toate',
  'delete_all_orphans' => 'Sterge toate pierdute?', //cpg1.4
  'comment' => 'Comentariu: ',
  'nonexist' => 'atasat la un fisier inexistent # ',
  'phpinfo' => 'Afiseaza informatii PHP',
  'phpinfo_explanation' => 'Contine informatii cu caracter tehnic despre server-ul dumneavoastra.<br /> - E posibil sa fiti intrebat despre aceste informatii in cazul in care solicitati suport.', //cpg1.4
  'update_db' => 'Actualizeaza baza de date',
  'update_db_explanation' => 'Daca ati înlocuit fisire Coppermine files, adaugat o modificare sau ati actualizat o versiune precedenta a Coppermine, asigurati-va ca actualizati baza de date. Acesta va crea tabelele necesare si/sau configura valorile acestora in baza de date.',
  'view_log' => 'Afiseaza fisirele raport', //cpg1.4
  'view_log_explanation' => 'Coppermine poate pastra inregistrari ale diferitelor actiuni pe care utilizatorii le executa.Putei vizualiza aceste inregistrari daca acestea sunt activate in <a href="admin.php">Configuratia Coppermine </a>.', //cpg1.4
  'versioncheck' => 'Verifica versiuni', //cpg1.4
  'versioncheck_explanation' => 'Verifica versiunea fisierelor pentru a descoperi daca ati înlocuit toate fisierele dupa o actualizare sau daca fisierele sursa ale Coppermine au fost actualizate dupa lansarea unei versiuni.', //cpg1.4
  'bridgemanager' => 'Manager pararela', //cpg1.4
  'bridgemanager_explanation' => 'Activeaza/Dezactiveaza integrarea (pasarela) galeriei Coppermine cu alta aplicatie.Exemplu: BBS-ul dumneavoastra (Bulletin Board System).', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File versioncheck.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('VERSIONCHECK_PHP')) $lang_versioncheck_php = array(
  'title' => 'Verificare Versiune', //cpg1.4
  'what_it_does' => 'Aceasta pagina este destinatã utilizatorilor care si-au actualizat instalarea Coppermine. Acesta pagina verificã fisierele de pe server si încearca sa determine daca versiunile fisierelor locale sunt aceleasi cu cele de pe pagina sursa http://coppermine.sourceforge.net. De asemenea sunt afisate fisierele care nu sunt actualizate si pe care doriti in prealabil sa le actualizati.<br />Va va afisa in rosu tot ceea ce trebuie reparat/actualizat. Informatiile in galben necesita atentia dumeneavoastra. Informatiile in verde (sau culoarea normala a textului) sunt  OK.<br />Faceti clic pe pictogramele ajutor pentru informatii suplimentare.', //cpg1.4
  'online_repository_unable' => 'Conectarea cu pagina sursa este imposibila', //cpg1.4
  'online_repository_noconnect' => 'Coppermine nu a reusit sa se conecteze cu pagina sursa.Aceasta problema poate avea doua cauze:', //cpg1.4
  'online_repository_reason1' => 'pagina sursa coppermine este momentan indisponibila - verificati daca puteti accesa pagina : %s - Daca nu reusiti, încercati mai târziu.', //cpg1.4
  'online_repository_reason2' => 'PHP pe serverul dumneavoastra este configurat cu %s dezactivat (implicit, aceasta valoare este activata). Daca serverul este personal, si aveti acces la <i>php.ini</i> ,activati aceasta optiune (sau cel putin permiteti suprascrierea cu %s). Daca aveti pagina gazduita, obisnuiti-va cu ideea ca nu puteti compara fisierele dumneavoastra cu cele de pe pagina sursa. Acesta pagina va afisa in acest caz,doar versiunile fisierelor care contin aceasta distributie. Actualizarile nu vor fi afisate.', //cpg1.4
  'online_repository_skipped' => 'Conexiunea cu pagina sursa a fost anulata', //cpg1.4
  'online_repository_to_local' => 'Pagina va actualiza acum fisierele sursa cu cele locale. Datele pot fi inexacte daca ati actualizat Coppermine dar nu ati încarcat toate fisierele actualizate.', //cpg1.4
  'local_repository_unable' => 'Conectarea cu sursa locala este imposibila', //cpg1.4
  'local_repository_explanation' => 'Coppermine nu a reusit sa se conecteze cu sursa locala  %s in serverul dumneavoastra. Aceasta inseamna, probabil, ca nu ati încarcat fisierul sursa pe server. Faceti acest lucru si încercati apoi sa reactualizati aceasta pagina (apasati reactualizare).<br />Daca pagina esueaza din nou, este posibil ca gazda paginii dumneavoastra sa fi dezactivat complet parti din <a href="http://www.php.net/manual/en/ref.filesystem.php">functiile sistemului de fisiere PHP</a> . În acest caz, nu puteti utiliza acest utilitar.Ne pare rau.', //cpg1.4
  'coppermine_version_header' => 'Versiunea instalata Coppermine', //cpg1.4
  'coppermine_version_info' => 'În acest moment aveti instalat: %s', //cpg1.4
  'coppermine_version_explanation' => 'Daca sunteti de parere ca acesta informatie este complet gresita si ar fi trebuit sa utilizati o versiune mai recenta a Coppermine, e posibil sa nu fi încarcat cea mai recenta versiune a fisierului <i>include/init.inc.php</i>', //cpg1.4
  'version_comparison' => 'Comparatie de Versiuni', //cpg1.4
  'folder_file' => 'dosar/fisier', //cpg1.4
  'coppermine_version' => 'versiune cpg', //cpg1.4
  'file_version' => 'versiune fisier', //cpg1.4
  'webcvs' => 'Subversiuni WebSVN', //cpg1.4
  'writable' => 'Inscriptibil', //cpg1.4
  'not_writable' => 'Neinscriptibil', //cpg1.4
  'help' => 'Ajutor', //cpg1.4
  'help_file_not_exist_optional1' => 'fisierul/dosarul nu exista', //cpg1.4
  'help_file_not_exist_optional2' => 'Fisierul/Dosarul %s nu a fost gasit pe server. Desi este optional, îl puteti incarca cu ajutorul unui client FTP pe serverul dumneavoastra in cazul in care intampinati probleme.', //cpg1.4
  'help_file_not_exist_mandatory1' => 'fisierul/dosarul nu exista', //cpg1.4
  'help_file_not_exist_mandatory2' => 'Fisierul/Dosarul %s nu a fost gasit pe server.Deoarece este un fisier obligatoriu va rugam sa îl încarcati pe serverul dumneavoastra utilizând un client FTP.', //cpg1.4
  'help_no_local_version1' => 'Nici o versiune de fisier local', //cpg1.4
  'help_no_local_version2' => 'Pagina nu a reusit sa extraga versiunea fisierului local.Fisierul este ori vechi ori este modificat sau sters. Actualizarea acestuia este recomandata.', //cpg1.4
  'help_local_version_outdated1' => 'Versiune locala invechita.', //cpg1.4
  'help_local_version_outdated2' => 'Versiunea fisierului pare sa fie cea a unuia dintr-o versiune mai veche Coppermine (probabil ati reactualizat). Asigurati-va ca actualizati si acesti fisier.', //cpg1.4  
'help_local_version_na1' => 'Extragerea informatiilor despre subversiune a esuat', //cpg1.4
  'help_local_version_na2' => 'Pagina nu a reusit sa determine care este versiunea subversiunii (SVN) fisierului din serverul dumneavoastra. Ar trebui sa actualizati fisierul cu cel din pachetul de distributie.', //cpg1.4
  'help_local_version_dev1' => 'Versiune de Dezvoltare', //cpg1.4
  'help_local_version_dev2' => 'Fisierul de pe serverul dumneavoastra pare sa fie mai nou decât versiunea Coppermine. Ori utilizati un fisier de dezvoltare (ar trebui sa îl utilizati doar in cazul în care sunteti sigur de ceea ce faceti), sau ati actualizat instalarea Coppermine dar nu si fisierul include/init.inc.php', //cpg1.4
  'help_not_writable1' => 'Dosarul nu este inscriptibil', //cpg1.4
  'help_not_writable2' => 'Schimbati permisiunile (CHMOD) dosarului, pentru a permite accesul la scriere a dosarului  %s si a subdosarelor acestuia.', //cpg1.4
  'help_writable1' => 'Dosar inscriptibil', //cpg1.4
  'help_writable2' => 'Dosarul %s este inscriptibil. Acesta este un risc inutil, Coppermine are nevoie doar de permisiunea de citire/executare,nu si de scriere.', //cpg1.4
  'help_writable_undetermined' => 'Coppermine  nu a reusit sa determine daca acest dosar este sau nu inscriptibil.', //cpg1.4
  'your_file' => 'fisierul dumneavoastra', //cpg1.4
  'reference_file' => 'fisier referinta', //cpg1.4
  'summary' => 'Rezumat', //cpg1.4
  'total' => 'Total fisiere/dosare verificate', //cpg1.4
  'mandatory_files_missing' => 'Fisiere Obligatorii lipsesc', //cpg1.4
  'optional_files_missing' => 'Fisiere Optionale lipsesc', //cpg1.4
  'files_from_older_version' => 'Fisiere ramase neactualizate dintr-o versiune anterioara Coppermine', //cpg1.4
  'file_version_outdated' => 'Versiuni vechi de fisiere', //cpg1.4
  'error_no_data' => 'Pagina a intors o eroare necunoscuta.Nu a reusit sa recupereze nici o informatie. Ne pare rau pentru inconveniente.', //cpg1.4
  'go_to_webcvs' => 'mergi la %s', //cpg1.4
  'options' => 'Optiuni', //cpg1.4
  'show_optional_files' => 'arata dosarele/fisierele optionale', //cpg1.4
  'show_mandatory_files' => 'arata fisierele obligatorii', //cpg1.4
  'show_file_versions' => 'arata versiuni fisiere', //cpg1.4
  'show_errors_only' => 'arata doar dosare/fisiere cu erori', //cpg1.4
  'show_permissions' => 'arata permisiunile pentru dosar', //cpg1.4
  'show_condensed_output' => 'arata rezultate minime (pentru facilizarea capturilor de ecran)', //cpg1.4
  'coppermine_in_webroot' => 'Coppermine este instalat în directorul radacina', //cpg1.4
  'connect_online_repository' => 'Încearca conexiunea cu pagina sursa', //cpg1.4
  'show_additional_information' => 'arata informatii suplimentare', //cpg1.4
  'no_webcvs_link' => 'nu afisa adresa svn', //cpg1.4
  'stable_webcvs_link' => 'arata adresa svn de la o ramura stabila', //cpg1.4
  'devel_webcvs_link' => 'arata adresa svn la o ramura de dezvoltare', //cpg1.4
  'submit' => 'aplica modificarile / reactualizare', //cpg1.4
  'reset_to_defaults' => 'revino la setarile implicite', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File view_log.php  //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('VIEWLOG_PHP')) $lang_viewlog_php = array(
  'delete_all' => 'Sterge toate rapoartele', //cpg1.4
  'delete_this' => 'Sterge acest raport', //cpg1.4
  'view_logs' => 'Arata rapoartele', //cpg1.4
  'no_logs' => 'Nici un raport creat.', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File xp_publish.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('XP_PUBLISH_PHP')) {

$lang_xp_publish_client = <<<EOT
<h1>Window XP Web Publishing Wizard Client</h1><p>Acest modul permite utilizarea modulului <b>Windows XP web publishing wizard</b>  cu Coppermine.</p><p>Codul este bazat pe un articol de
EOT;

$lang_xp_publish_required = <<<EOT
<h2>Ce este necesar</h2><ul><li>Windows XP, pentru a avea acces la acest asistent.</li><li>O versiune functionabila de Coppermine în care functia <b>încarcare de pe internet, functioneaza perfect.</b></li></ul><h2>Cum se instaleaza în partea utilizatorului</h2><ul><li>Clic dreapta,
EOT;

$lang_xp_publish_select = <<<EOT
Selectati &quot;save target as..&quot;. Salvati  fisierul pe calculatorul dumneavoastra. Când salvati, verificati daca numele fisierului propus este <b>cpg_###.reg</b> (### reprezinta un numar). Redenumiti conform acestui nume daca este neceasr, lasand nechimbate numarul. Odata descarcat, faceti dublu-clic pe acest fisier pentru a inregistra severul dumneavoastra în asistentul \"web publishing wizard\".</li></ul>
EOT;

$lang_xp_publish_testing = <<<EOT
<h2>Test</h2><ul><li>În Windows Explorer, selectati niste fisiere si apoi faceti clic pe <b>Publish xxx on the web</b> din panoul din stanga.</li><li>Confirmati selectia fisierelor. Faceti clic pe <b>Next</b>.</li><li>În lista de servicii care va aparea, selectati-l pe cel al galeriei dumneavoastra (are numele galeriei). Daca acest serviciu nu este prezent, verificati corecta instalare a fisierului <b>cpg_pub_wizard.reg</b> ca în descrierea de mai sus.</li><li>Introduceti informatiile de autentificare daca este necesar.</li><li>Selectionati albumul sursa pentru imagini sau creati un nou album.</li><li>Faceti clic pe <b>next</b>. Procedura de încarcare a imaginilor va începe.</li><li>Când aceasta se va termina, verificati în galerie daca imaginile au fost adaugate corect.</li></ul>
EOT;

$lang_xp_publish_notes = <<<EOT
<h2>Note :</h2><ul><li>Odata ce procedura de încarcare începe, asistentul nu poate afisa nici un mesaj de eroare generat de galerie, motiv pentru care nu puteti confirma succesul sau esecul operatiunii, decât în momentul în care verificati galeria.</li><li> Daca procedura de încarcare esueaza , activati modul &quot;Identificare erori&quot; în pagina de administrare Coppermine, încercati cu o singura imagine si apoi verificati mesajul de eroare în
 EOT;

$lang_xp_publish_flood = <<<EOT
fisierul care este localizat în directorul Coppermine pe server.</li><li>Pentru a evita <i>inundarea</i> galeriei cu imagini încarcate prin asistent, doar <b>administratorul galeriei</b> si <b>utilizatorii care pot avea albume personale</b> pot utiliza aceasta functie.</li>
EOT;



$lang_xp_publish_php = array(
  'title' => 'Coppermine - XP Web Publishing Wizard', //cpg1.4
  'welcome' => 'Bin ati venit <b>%s</b>,', //cpg1.4
  'need_login' => 'Trebuie sa va autentificati în pagina galeriei dumneavoastra utilizând navigatorul preferat,înainte de a utiliza acest asistent.<p/><p>Când va auntentificati, nu uitati sa selectionati optiunea <b>Memoreaza datele</b> daca aceasta este prezenta.', //cpg1.4
  'no_alb' => 'Îmi pare rau,nu exista nici un album în care aveti permisiunea sa încarcati imagini cu acest asistent.', //cpg1.4
  'upload' => 'Încarcati imagini într-un album existent', //cpg1.4
  'create_new' => 'Creaza un album nou pentru imaginile mele', //cpg1.4
  'album' => 'Album', //cpg1.4
  'category' => 'Categorie', //cpg1.4
  'new_alb_created' => 'Noul album &quot;<b>%s</b>&quot; a fost creat.', //cpg1.4
  'continue' => 'Faceti clic &quot;Next&quot; pentru a începe procedura de încarcare imagini.', //cpg1.4
  'link' => 'aceasta adresa', //cpg1.4
);
}
?>
