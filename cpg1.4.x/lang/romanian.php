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
  Coppermine version: 1.4.26
  $HeadURL$
  $Revision$
  $Author$
  $Date$
**********************************************/

if (!defined('IN_COPPERMINE')) { die('Not in Coppermine...');}

// info about translators and translated language
//
//                +-----------------------------------------------------------------+                   
//                +                                                                 +                
//                +                    Tradus de Rubeluţă Iulian                    +         
//                +        Traducerea Coppermine în româneşte cu diacritice        +
//                +               email:  rubeluta at Gmail dot com                  +
//                +   creat cu programul gratuit PSPad de Jan Fiala www.pspad.com   +
//                +                                                                 +
//                +-----------------------------------------------------------------+
//
$lang_translation_info = array(
  'lang_name_english' => 'Romanian', //cpg1.4
  'lang_name_native' => 'Românã', //cpg1.4
  'lang_country_code' => 'ro', //cpg1.4
  'trans_name'=> 'Rubeluţă Iulian',
  'trans_email' => 'rubeluta@gmail.com',
  'trans_website' => '',
  'trans_date' => '2007-08-16',
);

$lang_charset = 'UTF-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('Bytes', 'KB', 'MB');

// Day of weeks and months
$lang_day_of_week = array('Duminică', 'Luni', 'Marţi', 'Miercuri', 'Joi', 'Vineri', 'Sâmbătă');
$lang_month = array('Ianuarie', 'Februarie', 'Martie', 'Aprilie', 'Mai', 'Iunie', 'Iulie', 'August', 'Septembrie', 'Octombrie', 'Noiembrie', 'Decembrie');

// Some common strings
$lang_yes = 'Da';
$lang_no  = 'Nu';
$lang_back = 'ÎNAPOI';
$lang_continue = 'Continuă';
$lang_info = 'Informaţie';
$lang_error = 'Eroare';
$lang_check_uncheck_all = 'Bifează/Debifează toate'; //cpg1.4

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$album_date_fmt =    '%B %d, %Y';
$lastcom_date_fmt =  '%m/%d/%y la %H:%M';
$lastup_date_fmt = '%B %d, %Y';
$register_date_fmt = '%B %d, %Y';
$lasthit_date_fmt = '%B %d, %Y la %I:%M %p';
$comment_date_fmt =  '%B %d, %Y ora %I:%M %p';
$log_date_fmt = '%B %d, %Y la %I:%M %p'; //cpg1.4

// For the word censor
$lang_bad_words = array('pula', 'pizda', 'pula*', 'pizd*', '*pizd*', 'fut', 'penis', 'pul@', 'pizd@');

$lang_meta_album_names = array(
  'random' => 'Fişiere aleatoare',
  'lastup' => 'Ultimele adăugate',
  'lastalb'=> 'Albumele recent încărcate',
  'lastcom' => 'Comentarii recente',
  'topn' => 'Cele mai vizionate',
  'toprated' => 'Cotate maxim',
  'lasthits' => 'Vizionate recent',
  'search' => 'Rezultate căutare',
  'favpics'=> 'Fişiere favorite',  //cpg1.4
);

$lang_errors = array(
  'access_denied' => 'Nu aveţi permisiunea de a vizualiza această pagină.',
  'perm_denied' => 'Nu aveţi permisiunea de a efectua aceasta operaţie.',
  'param_missing' => 'Script-ul a fost apelat fără unul sau mai mulţi parametri necesari.',
  'non_exist_ap' => 'Albumul/Fişierul selectat nu există !',
  'quota_exceeded' => 'Spaţiu stocare depăşit.<br /><br />Aveţi un spaţiu de stocare de [quota]K, şi fişierele dumneavoastră însumează un total de  [space]K, adăugând acest fişier veţi depăşi spaţiul de stocare.',
  'gd_file_type_err' => 'Când se utilizează biblioteca GD , tipurile de imagini permise sunt JPEG şi/sau PNG.',
  'invalid_image' => 'Imaginea trimisă este \(digital\) coruptă-malformată sau nu poate fi prelucrată de librăria GD',
  'resize_failed' => 'Crearea miniaturii imaginii a eşuat sau imaginea este prea mică.',
  'no_img_to_display' => 'Nici o imagine de afişat',
  'non_exist_cat' => 'Categoria selecţionată nu există',
  'orphan_cat' => 'O categorie nu are o rădăcină. Utilizaţi Manager de categorii pentru a corecta aceasta problemă!',
  'directory_ro' => 'Dosarul \'%s\' nu este inscriptibil, fişierele nu pot fi şterse',
  'non_exist_comment' => 'Comentariul selecţionat nu există.',
  'pic_in_invalid_album' => 'Fişierul se află într-un album inexistent - (%s)!?',
  'banned' => 'Sunteţi în lista neagră, nu puteţi utiliza acest site.',
  'not_with_udb' => 'Această funcţie este dezactivată în Coppermine deoarece este integrat într-un program tip forum. Ori ceea ce doriţi să realizaţi nu este permis în configuraţia actuala, ori această comandă ar fi trebuit să fie executată de forum.',
  'offline_title' => 'Neconectat',
  'offline_text' => 'Galeria este momentan în construcţie - Vă rugăm reveniţi.',
  'ecards_empty' => 'În momentul de faţă nu sunt înregistrări ecard-uri pentru afişare.',
  'action_failed' => 'Acţiune eşuată.  Coppermine nu poate procesa cererea dumneavoastră.',
  'no_zip' => 'Librăriile necesare procesării fişierelor arhiva ZIP nu sunt disponibile. Vă rugăm să contactaţi administratorul galeriei.',
  'zip_type' => 'Nu aveţi permisiunea de a încărca fişiere arhivă ZIP.',
  'database_query' => 'S-a înregistrat o eroare în timpul procesării bazei de date', //cpg1.4
  'register_globals_on' => 'The PHP setting register_globals is enabled on your server, which is a bad idea in terms of security. It\'s strongly recommended to turn it off. [<a href="http://forum.coppermine-gallery.net/index.php/topic,59569.0.html" rel="external" class="external">more</a>]',
);

$lang_bbcode_help_title = 'Ajutor coduri bbcode'; //cpg1.4
$lang_bbcode_help = 'Puteţi adăuga adrese de pagini web şi\/sau paginare  pentru acest câmp  utilizând următoarele coduri bbcode : <li>[b]Text Bold (Îngroşat)[/b] =&gt; <b>Text Bold (Îngroşat)</b></li><li>[i]Text Italic (înclinat)[/i] =&gt; <i>Text Italic</i></li><li>[url=http://nume-de-pagină.com/]Url Text[/url] =&gt; <a href="http://nume-de-pagină.com">Text pentru adresa </a></li><li>[email]utilizator@serviciu-de-email.com[/email] =&gt; <a href="mailto:nume@serviciu-de-email.com">nume@serviciu-de-email.com</a></li><li>[color=red]Exemplu de text[/color] =&gt; <span style="color:red">Exemplu de text</span></li><li>[img]http://coppermine-gallery.net/demo/cpg14x/images/red.gif[/img] => <img src="../images/red.gif" border="0" alt="" /></li>'; //cpg1.4

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
  'home_title' => 'Pagina de start',
  'home_lnk' => 'Start',
  'alb_list_title' => 'Spre lista de albume',
  'alb_list_lnk' => 'Lista de albume',
  'my_gal_title' => 'Spre galeria mea personală',
  'my_gal_lnk' => 'Galeria mea',
  'my_prof_title' => 'Spre profilul personal', //cpg1.4
  'my_prof_lnk' => 'Profilul meu',
  'adm_mode_title' => 'Schimbă în mod Administrare',
  'adm_mode_lnk' => 'Mod Administrare',
  'usr_mode_title' => 'Schimbă în mod Utilizator',
  'usr_mode_lnk' => 'Mod Utilizator',
  'upload_pic_title' => 'Încărcaţi un fişier într-un album',
  'upload_pic_lnk' => 'Încărcaţi fişier',
  'register_title' => 'Creare cont',
  'register_lnk' => 'Înregistrare',
  'login_title' => 'Autentifică-mă', //cpg1.4
  'login_lnk' => 'Autentificare',
  'logout_title' => 'Dezautentifică-mă', //cpg1.4
  'logout_lnk' => 'Dezautentificare',
  'lastup_title' => 'Arată încărcări recente', //cpg1.4
  'lastup_lnk' => 'Încărcări recente',
  'lastcom_title' => 'Arată comentariile recente', //cpg1.4
  'lastcom_lnk' => 'Comentarii recente',
  'topn_title' => 'Arată cele mai vizionate', //cpg1.4
  'topn_lnk' => 'Cele mai vizionate',
  'toprated_title' => 'Arată cele mai bine cotate', //cpg1.4
  'toprated_lnk' => 'Cele mai bine cotate',
  'search_title' => 'Caută în galerie', //cpg1.4
  'search_lnk' => 'Căutare',
  'fav_title' => 'Spre Favorite', //cpg1.4
  'fav_lnk' => 'Favorite',
  'memberlist_title' => 'Arată lista de membri',
  'memberlist_lnk' => 'Lista de membri',
  'faq_title' => 'Întrebări frecvente despre &quot;Coppermine&quot;',
  'faq_lnk' => 'FAQ',
);

$lang_gallery_admin_menu = array(
  'upl_app_title' => 'Aprobă noi încărcări', //cpg1.4
  'upl_app_lnk' => 'Acord pentru încărcări',
  'admin_title' => 'Spre configurare', //cpg1.4
  'admin_lnk' => 'Configurare', //cpg1.4
  'albums_title' => 'Spre configurare album(e)', //cpg1.4
  'albums_lnk' => 'Album(e)',
  'categories_title' => 'Spre configurare categorii', //cpg1.4
  'categories_lnk' => 'Categorii',
  'users_title' => 'Spre configurare utilizatori', //cpg1.4
  'users_lnk' => 'Utilizatori',
  'groups_title' => 'Spre configurare grupuri', //cpg1.4
  'groups_lnk' => 'Grupuri',
  'comments_title' => 'Verifică comentariile', //cpg1.4
  'comments_lnk' => 'Verificare comentarii',
  'searchnew_title' => 'Spre adăugare fişiere multiple', //cpg1.4
  'searchnew_lnk' => 'Adăugare fişiere multiple',
  'util_title' => 'Spre unelte administrare', //cpg1.4
  'util_lnk' => 'Unelte administrator',
  'key_title' => 'Spre dicţionar de cuvinte', //cpg1.4
  'key_lnk' => 'Dicţionar de cuvinte', //cpg1.4
  'ban_title' => 'Spre utilizatorii blocaţi', //cpg1.4
  'ban_lnk' => 'Utilizatori blocaţi',
  'db_ecard_title' => 'Verifică Ecard-uri', //cpg1.4
  'db_ecard_lnk' => 'Afişează Ecard-uri',
  'pictures_title' => 'Sortează imaginile mele', //cpg1.4
  'pictures_lnk' => 'Sortare imagini', //cpg1.4
  'documentation_lnk' => 'Documentaţie', //cpg1.4
  'documentation_title' => 'Manual utilizare Coppermine', //cpg1.4
);

$lang_user_admin_menu = array(
  'albmgr_title' => 'Creează şi ordonează albumele mele', //cpg1.4
  'albmgr_lnk' => 'Creează / Ordonează albumele mele',
  'modifyalb_title' => 'Spre modificare albume',  //cpg1.4
  'modifyalb_lnk' => 'Modifică albumele mele',
  'my_prof_title' => 'Spre profilul meu personal', //cpg1.4
  'my_prof_lnk' => 'Profilul personal',
);

$lang_cat_list = array(
  'category' => 'Categorie',
  'albums' => 'Albume',
  'pictures' => 'Imagini',
);

$lang_album_list = array(
  'album_on_page' => '%d album(e) în %d pagină(i)',
);

$lang_thumb_view = array(
  'date' => 'DATA',
  //Sort by filename and title
  'name' => 'NUME fişier',
  'title' => 'TITLU',
  'sort_da' => 'Sortează crescător după dată',
  'sort_dd' => 'Sortează descrescător după dată',
  'sort_na' => 'Sortează crescător după nume',
  'sort_nd' => 'Sortează descrescător după nume',
  'sort_ta' => 'Sortează crescător după titlu',
  'sort_td' => 'Sortează descrescător după titlu',
  'position' => 'POZIŢIE', //cpg1.4
  'sort_pa' => 'Sortează crescător după POZIŢIE', //cpg1.4
  'sort_pd' => 'Sortează descrescător după POZIŢIE', //cpg1.4
  'download_zip' => 'Descărcare într-un fişier arhivă ZIP',
  'pic_on_page' => '%d imagine(i) în %d pagină(i)',
  'user_on_page' => '%d utilizator(i) în  %d pagină(i)',
  'enter_alb_pass' => 'Parola pentru album', //cpg1.4
  'invalid_pass' => 'Parola este greşită', //cpg1.4
  'pass' => 'Parola', //cpg1.4
  'submit' => 'Trimite', //cpg1.4
);

$lang_img_nav_bar = array(
  'thumb_title' => 'Înapoi în pagina de miniaturi imagini',
  'pic_info_title' => 'Arată/Ascunde informaţii imagine',
  'slideshow_title' => 'prezentare automată imagine după imagine',
  'ecard_title' => 'Trimite aceasta imagine ca un e-card (Carte Poştală Electronică)',
  'ecard_disabled' => 'e-card-urile (Cărţile poştale Electronice) sunt dezactivate',
  'ecard_disabled_msg' => 'Nu aveţi permisiunea de a trimite e-card-uri (Cărţi Poştale Electronice)', //js-alert
  'prev_title' => 'Vizualizează precedenta',
  'next_title' => 'Vizualizează următoarea',
  'pic_pos' => 'IMAGINE %s/%s',
  'report_title' => 'Raportează această imagine administratorului', //cpg1.4
  'go_album_end' => 'Sări spre sfârşit', //cpg1.4
  'go_album_start' => 'Sări la început', //cpg1.4
  'go_back_x_items' => 'Sări înapoi %s obiecte', //cpg1.4
  'go_forward_x_items' => 'Sări înainte %s obiecte', //cpg1.4
);

$lang_rate_pic = array(
  'rate_this_pic' => 'Cotează această imagine ',
  'no_votes' => '(Nici un vot încă)',
  'rating' => '(Cotarea curentă este de : %s / 5 cu un număr de %s vot(uri)',
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
  CRITICAL_ERROR => 'Eroare critică',
  'file' => 'Fişier: ',
  'line' => 'Linie: ',
);

$lang_display_thumbnails = array(
  'filename' => 'Nume fişier=', //cpg1.4
  'filesize' => 'Mărime fişier=', //cpg1.4
  'dimensions' => 'Dimensiuni=', //cpg1.4
  'date_added' => 'Data adăugării=', //cpg1.4
);

$lang_get_pic_data = array(
  'n_comments' => '%s comentariu(ii)',
  'n_views' => '%s vizionări',
  'n_votes' => '(%s vot(uri) )',
);

$lang_cpg_debug_output = array(
  'debug_info' => 'Informaţii descoperire erori',
  'select_all' => 'Selecţionează tot',
  'copy_and_paste_instructions' => 'dacă doriţi să cereţi ajutor în listele de discuţie pentru ajutor Coppermine, copiaţi acest raport împreună cu mesajul de eroare (dacă există). Asigurati-va că aţi ÎNLOCUIT parola cu ***  înainte de a trimite mesajul. <br />Nota: Acest mesaj este doar pentru informare,acesta nu înseamnă că aveţi intradevăr o eroare în galeria dumneavoastră.', //cpg1.4
  'phpinfo' => 'Afişează detalii PHP',
  'notices' => 'Indicaţii/Note', //cpg1.4
);

$lang_language_selection = array(
  'reset_language' => 'Limba preselectată',
  'choose_language' => 'Alegeţi limba',
);

$lang_theme_selection = array(
  'reset_theme' => 'Tema grafică preselectată',
  'choose_theme' => 'Alegeţi o temă grafică',
);

$lang_version_alert = array(
  'version_alert' => 'Versiune nesuportată !', //cpg1.4
  'security_alert' => 'Alertă SECURITATE !', //cpg1.4.3
  'relocate_exists' => 'înlăturaţi <a href="http://coppermine-gallery.net/forum/index.php?topic=24217.0">fişierul  relocate_server.php</a> din pagina dumneavoastră!',
  'no_stable_version' => 'Rulaţi Coppermine %s (%s) care este destinat utilizatorilor foarte experimentaţi - această versiune este difuzată fară suport tehnic sau garanţii. Utilizarea ei presupune asumarea eventualelor riscuri. Puteţi de asemenea reveni la o versiune stabila inferioară, în cazul în care doriţi suport tehnic.', //cpg1.4
  'gallery_offline' => 'Galeria este momentan în mod întreţinere (lucru), şi este vizibilă doar pentru dumneavoastră ca Administrator. Nu uitaţi să schimbaţi în modul normal după ce terminaţi lucrările de întreţinere.', //cpg1.4
);

$lang_create_tabs = array(
  'previous' => ' Precedent', //cpg1.4
  'next' => 'Următor ', //cpg1.4
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
  'error_uninstall' => "Imposibil de şters plugin-ul '%s'", //cpg1.4
  'error_sleep' => "Imposibil de şters plugin-ul '%s'<br />", //cpg1.4
);

// ------------------------------------------------------------------------- //
// File include/smilies.inc.php
// ------------------------------------------------------------------------- //

if (defined('SMILIES_PHP')) $lang_smilies_inc_php = array(
  'Exclamation' => 'Exclamaţie',
  'Question' => 'Întrebare',
  'Very Happy' => 'Foarte fericit',
  'Smile' => 'Zâmbet',
  'Sad' => 'Trist',
  'Surprised' => 'Surprins',
  'Shocked' => 'Şocat',
  'Confused' => 'Confuz',
  'Cool' => 'Fain',
  'Laughing' => 'Râset',
  'Mad' => ' Nervos ',
  'Razz' => 'Razz',
  'Embarassed' => 'Intimidat',
  'Crying or Very sad' => 'Plânset sau Foarte trist',
  'Evil or Very Mad' => 'Diabolic sau Nebun-de-legat',
  'Twisted Evil' => 'Drăcuşor',
  'Rolling Eyes' => 'Ochi peste cap',
  'Wink' => 'făcut cu ochiul',
  'Idea' => 'Idee',
  'Arrow' => 'Săgeată',
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
  'alb_need_name' => 'Albumul trebuie să aibă un nume !', //js-alert
  'confirm_modifs' => 'Sunteţi sigur că doriţi să efectuaţi aceste modificări ?', //js-alert
  'no_change' => 'Nu aţi făcut nici o modificare !', //js-alert
  'new_album' => 'Album nou',
  'confirm_delete1' => 'Sunteţi sigur că doriţi să ştergeţi acest album ?', //js-alert
  'confirm_delete2' => '\nToate imaginile şi comentariile conţinute în el vor fi pierdute definitiv !', //js-alert
  'select_first' => 'Selecţionaţi întâi un album', //js-alert
  'alb_mrg' => 'Management Album',
  'my_gallery' => '* Galeria mea *',
  'no_category' => '* Nici o categorie *',
  'delete' => 'Şterge',
  'new' => 'Nou',
  'apply_modifs' => 'Aplică modificările',
  'select_category' => 'Selecţionaţi categoria',
);

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) $lang_banning_php = array(
  'title' => 'Interzicere utilizatori', //cpg1.4
  'user_name' => 'Nume Utilizator', //cpg1.4
  'ip_address' => 'Adresa IP', //cpg1.4
  'expiry' => 'Expiră (Niciodată în cazul în care nu se completează)', //cpg1.4
  'edit_ban' => 'Salvaţi schimbările', //cpg1.4
  'delete_ban' => 'Ştergere', //cpg1.4
  'add_new' => 'Adăugare restricţie', //cpg1.4
  'add_ban' => 'Adăugare', //cpg1.4
  'error_user' => 'Nu găsesc utilizatorul', //cpg1.4
  'error_specify' => 'Trebuie specificat ori un nume de utilizator ori o adresă IP', //cpg1.4
  'error_ban_id' => 'ID Restricţie este incorect!', //cpg1.4
  'error_admin_ban' => 'Nu vă puteţi auto restricţiona!', //cpg1.4
  'error_server_ban' => 'Sunteţi pe cale să restricţionaţi propriul server? Acţiune imposibilă ...', //cpg1.4
  'error_ip_forbidden' => 'Nu puteţi restricţiona această adresă IP de mascaradă (adresă locală ). <br />Dacă doriţi să permiteţi interzicerea adreselor locale, schimbaţi acest lucru în <a href="admin.php">Configuraţie</a> (Are sens doar dacă Coppermine rulează într-o reţea locală gen Local Area Network - LAN).', //cpg1.4
  'lookup_ip' => 'Caută o adresă IP', //cpg1.4
  'submit' => 'Trimite!', //cpg1.4
  'select_date' => 'Selecţionaţi data', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File bridgemgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('BRIDGEMGR_PHP')) $lang_bridgemgr_php = array(
  'title' => 'Asistent Pasarelă (Coopermine Bridge)',
  'warning' => 'Avertisment: Utilizând acest asistent sunteţi conştient că date importante vor fi trimise utilizând formulare html. Executaţi acest asistent pe computerul personal (nu pe un computer public, hot spot wifi sau un internet cafe), şi asiguraţi-vă că aţi şters fişierele temporare din navigator după ce aţi terminat.Nerespectarea acestora poate duce la interpelarea datelor dumneavoastră de către terţe persoane !',
  'back' => ' Precedent',
  'next' => 'Următor ',
  'start_wizard' => 'Porneşte asistentul de pasarelă',
  'finish' => 'Terminare',
  'hide_unused_fields' => 'Ascunde câmpurile neutilizate (recomandat)',
  'clear_unused_db_fields' => 'Curăţă  înregistrări invalide din baza de date (recomandat)',
  'custom_bridge_file' => 'Fişierul pasarelă personalizat (dacă numele fişierului pasarelă este <i>nume-fişier-pasarelă.inc.php</i>, introduceţi <i>nume-fişier-pasarelă</i> în acest câmp)',
  'no_action_needed' => 'Nici o acţiune necesară în această etapă. Clic pe butonul "Următor" pentru continuare.',
  'reset_to_default' => 'Reiniţializare valoare standard.',
  'choose_bbs_app' => 'Alegeţi aplicaţia cu care Coopermine va face o pasarelă',
  'support_url' => 'Vizitaţi aici pentru suport în legătură cu această aplicaţie',
  'settings_path' => 'Calea (căile) utilizate de aplicaţia BBS',
  'database_connection' => 'Conexiune baza de date',
  'database_tables' => 'Tablou(uri) baza date',
  'bbs_groups' => 'Grupuri BBS (Bulletin Board System)',
  'license_number' => 'Număr Licenţă',
  'license_number_explanation' => 'Introduceţi numărul de licenţă ( dacă există )',
  'db_database_name' => 'Nume baza de date',
  'db_database_name_explanation' => 'Introduceţi numele bazei de date pe care BBS-ul dumneavoastră o utilizează',
  'db_hostname' => 'Gazda bazei de date',
  'db_hostname_explanation' => 'Numele gazdei unde baza de date mySQL este localizată, în mod curent această valoare este &quot;localhost&quot;',
  'db_username' => 'Cont utilizator bază de date',
  'db_username_explanation' => 'Utilizatorul mySQL pentru conexiune cu BBS-ul',
  'db_password' => 'Parola bazei de date',
  'db_password_explanation' => 'Parola acestui cont utilizator mySQL',
  'full_forum_url' => 'Adresa URL a Forum-ului ',
  'full_forum_url_explanation' => 'Adresa web completa a BBS-ului (includeţi http:// , exemplu:    http://www.adresa-forumului-dumneavoastră.com/forum)',
  'relative_path_of_forum_from_webroot' => 'Calea relativă a forumului ',
  'relative_path_of_forum_from_webroot_explanation' => 'Calea relativă spre BBS-ul dumneavoastră începând cu dosarul rădăcină (Exemplu: Dacă BBS-ul se află la aceasta adresă: http://www.adresa-forumului-dumneavoastră.com/forum/ , atunci introduceţi  &quot;/forum/&quot; în acest câmp)',
  'relative_path_to_config_file' => 'Calea relativă spre fişierul configuraţie al BBS-ului dumneavoastră ',
  'relative_path_to_config_file_explanation' => 'Calea relativă spre BBS, văzută din perspectiva dosarului Coppermine. (Exemplu  &quot;../forum/&quot; dacă BBS-ul se află la această adresă  http://www.adresa-forumului-dumneavoastră.com/forum/ şi  Coppermine se află la această adresă http://www.adresa-forumului-dumneavoastră.com/galerie/  În acest exemplu , &quot; .. &quot; semnifică un dosar înainte (spre a ajunge în rădăcină / ).)',
  'cookie_prefix' => 'Prefix Cookie',
  'cookie_prefix_explanation' => 'Prefixul trebuie să fie prefixul utilizat de cookie-urile BBS-ului (pentru PhpBB standard este phpbb2mysql )',
  'table_prefix' => 'Prefixul Tablourilor',
  'table_prefix_explanation' => 'Trebuie să fie acelaşi prefix ca cel utilizat de BBS (pentru phpBB standard este phpbb_ ). ',
  'user_table' => 'Tablou utilizator',
  'user_table_explanation' => '(În mod normal, valoarea standard ar trebui să fie OK.În mod contrar BBS-ul dumneavoastră a avut o instalare personalizată.)',
  'session_table' => 'Sesiune Tablou',
  'session_table_explanation' => '(În mod normal, valoarea standard ar trebui să fie OK.În mod contrar BBS-ul dumneavoastră a avut o instalare personalizată.)',
  'group_table' => 'Grupul Tablou',
  'group_table_explanation' => '(În mod normal, valoarea standard ar trebui să fie OK.În mod contrar BBS-ul dumneavoastră a avut o instalare personalizată.)',
  'group_relation_table' => 'Relaţia grup tablou',
  'group_relation_table_explanation' => 'În mod normal, valoarea standard ar trebui să fie OK.În mod contrar BBS-ul dumneavoastră a avut o instalare personalizată.',
  'group_mapping_table' => 'Maparea tabelului grup',
  'group_mapping_table_explanation' => '(În mod normal, valoarea standard ar trebui să fie OK.În mod contrar BBS-ul dumneavoastră a avut o instalare personalizată.)',
  'use_standard_groups' => 'Utilizează grupuri utilizator BBS standard',
  'use_standard_groups_explanation' => 'Utilizarea grupuri de utilizatori standard (conţinute deja) (valoare recomandată). Aceasta va face ca toate grupurile de utilizatori personalizate să devină nule. Dezactivaţi aceasta opţiune doar dacă sunteţi SIGUR de ceea ce faceţi !',
  'validating_group' => 'Grupul Validare',
  'validating_group_explanation' => 'ID-ul grupului unde conturile utilizatorilor care aşteaptă validarea administratorului se află . (În mod normal, valoarea standard ar trebui să fie OK.În mod contrar BBS-ul dumneavoastră a avut o instalare personalizată.)',
  'guest_group' => 'Grupul Anonimilor',
  'guest_group_explanation' => 'ID-ul grupului unde utilizatorii anonimi se află. (Valoarea standard ar trebui să fie OK. Editaţi doar dacă sunteţi SIGUR de ceea ce faceţi)',
  'member_group' => 'Grup Membri',
  'member_group_explanation' => 'ID-ul grupului unde se află membrii &quot;generali&quot; (Valoarea standard ar trebui să fie OK. Editaţi doar dacă sunteţi SIGUR de ceea ce faceţi)',
  'admin_group' => 'Grup Admin',
  'admin_group_explanation' => 'ID-ul grupului unde se află administratorul(ii) (Valoarea standard ar trebui să fie OK. Editaţi doar dacă sunteţi SIGUR de ceea ce faceţi)',
  'banned_group' => 'Grupul utilizatori blocaţi',
  'banned_group_explanation' => 'ID-ul grupului unde se află utilizatorii blocaţi (Valoarea standard ar trebui să fie OK. Editaţi doar dacă sunteţi SIGUR de ceea ce faceţi)',
  'global_moderators_group' => 'Grupul normal al moderatorilor',
  'global_moderators_group_explanation' => 'ID-ul grupului unde se află moderatorii normali (Valoarea standard ar trebui să fie OK. Editaţi doar dacă sunteţi SIGUR de ceea ce faceţi)',
  'special_settings' => 'Setări specifice BBS',
  'logout_flag' => 'Versiunea phpBB',
  'logout_flag_explanation' => 'Care este versiunea BBS-lui dumneavoastră (aceasta valoare specifica modul în care se realizează dezautentificarea )',
  'use_post_based_groups' => 'Se utilizează grupuri post-based ?',
  'logout_flag_yes' => '2.0.5 sau mai nou',
  'logout_flag_no' => '2.0.4 sau mai vechi',
  'use_post_based_groups_explanation' => 'Ar trebui ca grupurile din BBS care sunt definite după numărul de postări să fie adăugat în cont (permite o plaja mai mare de management) sau doar grupurile standard (face administrarea mai uşoară , recomandat). Puteţi reveni asupra acestei setări mai târziu pentru a o modifica.',
  'use_post_based_groups_yes' => 'Da',
  'use_post_based_groups_no' => 'Nu',
  'error_title' => 'Aceste erori trebuie corectate înainte de a continua. Reveniţi la pagina anterioară.',
  'error_specify_bbs' => 'Trebuie să specificaţi ce aplicaţie doriţi să fie integrată cu Coppermine.',
  'error_no_blank_name' => 'Numele pentru fişierul pasarelă personalizat nu poate fi vid.',
  'error_no_special_chars' => 'Fişierul pasarelă nu poate conţine caractere speciale, cu excepţia underscore (_) şi dash (-)!',
  'error_bridge_file_not_exist' => 'Fişierul pasarelă nu există pe server. Verificaţi dacă l-ai încărcat.',
  'finalize' => 'Activează/Dezactivează integrarea cu BBS',
  'finalize_explanation' => ' Până în momentul de faţă ,setările specificate au fost scrise în baza de date dar integrarea cu BBS nu a fost activată . Puteţi activa / dezactiva oricând, mai târziu. Asigurati-va că reţineţi numele de administrator şi parola pentru Coppermine versiunea de sine stătătoare , în cazul în care doriţi să faceţi alte schimbări. Dacă ceva nu funcţionează mergeţi la %s şi dezactivaţi integrarea BBS utilizând versiunea de sine stătătoare.',
  'your_bridge_settings' => 'Setările pasarelei dumneavoastră',
  'title_enable' => 'Activează integrare/pasarelă cu %s',
  'bridge_enable_yes' => 'Activează',
  'bridge_enable_no' => 'Dezactivează',
  'error_must_not_be_empty' => 'Nu trebuie să fie vid',
  'error_either_be' => 'Trebuie să fie ori %s ori %s',
  'error_folder_not_exist' => '%s nu există. Corectaţi valoarea introdusă pentru %s',
  'error_cookie_not_readible' => 'Coppermine nu poate citi un cookie cu numele %s. Corectaţi valoarea introdusă pentru %s, sau mergeţi în panoul de administrare al BBS şi asiguraţi-vă în legătură cu căminul de acces. ( lizibilitatea de către Coppermine) .',
  'error_mandatory_field_empty' => 'Nu puteţi lăsa vid câmpul %s  -  Introduceţi o valoare corectă.',
  'error_no_trailing_slash' => 'Trebuie să existe un caracter slash în câmpul %s.',
  'error_trailing_slash' => 'Trebuie să existe un caracter slash în câmpul %s.',
  'error_db_connect' => 'Conexiunea cu baza de date mySQL este imposibilă. Mesajul trimis de baza de date este: ',
  'error_db_name' => 'Deoarece Coppermine nu a reuşit să stabilească o conexiune, nu a fost capabil să găsească baza de date %s. Verificaţi vă rog că aţi specificat %s corespunzător. Mesajul trimis de mySQL este:',
  'error_prefix_and_table' => '%s şi ',
  'error_db_table' => 'Nu a fost găsit tabloul %s. Verificaţi dacă aţi specificat %s corespunzător.',
  'recovery_title' => 'Manager Pasarelă: Recuperare de Urgenţă',
  'recovery_explanation' => 'Dacă aţi ajuns aici pentru a administra integrarea BBS cu galeria Coppermine , trebuie să vă autentificaţi întâi ca Administrator . Dacă nu reuşiţi acest lucru deoarece pasarela nu funcţionează,puteţi dezactiva integrarea BBS cu ajutorul aceste pagini. Introducând numele de utilizator şi parola nu va va autentifica, ci va dezactiva doar integrarea BBS. Consultaţi Documentaţia aferenta pentru detalii.',
  'username' => 'Utilizator',
  'password' => 'Parola',
  'disable_submit' => 'Trimite',
  'recovery_success_title' => 'Autentificare reuşită',
  'recovery_success_content' => 'Aţi reuşit să dezactivaţi pasarelă BBS .  Instalarea Coppermine rulează în acest moment în modul de sine stătător.',
  'recovery_success_advice_login' => 'Autentificaţi-vă ca administrator pentru editare setări pasarelă şi/sau să activaţi din nou integrarea cu BBS.',
  'goto_login' => 'Spre pagina de autentificare',
  'goto_bridgemgr' => 'Spre manager de pasarelă',
  'recovery_failure_title' => 'Autentificare eşuată',
  'recovery_failure_content' => 'Aţi furnizat date greşite. Datele utilizate trebuie să fie aceleaşi cu ale contului Administrator folosite la instalarea Coppermine.',
  'try_again' => 'Încercaţi din nou',
  'recovery_wait_title' => 'Timpul de aşteptare încă nu s-a scurs',
  'recovery_wait_content' => 'Din motive de securitate acest script nu permite autentificări eşuate în perioade scurte de timp , deci trebuie să aşteptaţi câteva minute până veţi avea acces la autentificare.',
  'wait' => 'wait',
  'create_redir_file' => 'Creare fişier redirecţionare (recomandat)',
  'create_redir_file_explanation' => 'Pentru redirecţionare utilizatori înapoi la galeria Coppermine odată ce ei s-au autentificat în BBS , aveţi nevoie ca un fişier de redirecţionare să fie creat în dosarul unde se află BBS-ul. Când aceasta opţiune este activată, managerul de pasarelă va încerca să creeze acest fişier pentru dumneavoastră, sau să vă furnizeze liniile de cod pentru a crea fişierul manual.',
  'browse' => 'Răsfoieşte',
);

// ------------------------------------------------------------------------- //
// File calendar.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('CALENDAR_PHP')) $lang_calendar_php = array(
  'title' => 'Calendar', //cpg1.4
  'close' => 'Închide', //cpg1.4
  'clear_date' => 'Şterge data', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
  'miss_param' => 'Parametrii necesari pentru operaţia \'%s\' nu au fost specificaţi !',
  'unknown_cat' => 'Categoria selecţionată nu există în baza de date',
  'usergal_cat_ro' => 'Categoria din Galeria utilizatorilor nu poate fi ştearsă !',
  'manage_cat' => 'Gestionează categoriile',
  'confirm_delete' => 'Sunteţi sigur că doriţi să ştergeţi această categorie?', //js-alert
  'category' => 'Categorie',
  'operations' => 'Operaţii',
  'move_into' => 'Mută în',
  'update_create' => 'Actualizează/Creează categorie',
  'parent_cat' => 'Categoria mamă',
  'cat_title' => 'Titlu categorie',
  'cat_thumb' => 'Miniatură categorie',
  'cat_desc' => 'Descriere categorie',
  'categories_alpha_sort' => 'Sortează categoriile în ordine alfabetică (în loc de ordine de sortare personalizată)', //cpg1.4
  'save_cfg' => 'Salvează configuraţia', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File admin.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('ADMIN_PHP')) $lang_admin_php = array(
  'title' => 'Configuraţie Galerie', //cpg1.4
  'manage_exif' => 'Gestionează afişarea informaţiilor EXIF', //cpg1.4
  'manage_plugins' => 'Gestionar de plugin-uri', //cpg1.4
  'manage_keyword' => 'Gestionar de cuvinte-cheie', //cpg1.4
  'restore_cfg' => 'Restaurare valori standard',
  'save_cfg' => 'Salvează noua configuraţie',
  'notes' => 'Note',
  'info' => 'Informaţie',
  'upd_success' => 'Configuraţia Coppermine a fost actualizată',
  'restore_success' => 'Configuraţia standard Coppermine a fost restaurată',
  'name_a' => 'Nume Crescător',
  'name_d' => 'Nume Descrescător',
  'title_a' => 'Titlu Crescător',
  'title_d' => 'Titlu Descrescător',
  'date_a' => 'Data Crescător',
  'date_d' => 'Data Descrescător',
  'pos_a' => 'POZIŢIE Crescător', //cpg1.4
  'pos_d' => 'POZIŢIE Descrescător', //cpg1.4
  'th_any' => 'Aspect Maxim',
  'th_ht' => 'Înălţime',
  'th_wd' => 'Lăţime',
  'label' => 'Etichetă',
  'item' => 'Obiect',
  'debug_everyone' => 'Oricine',
  'debug_admin' => 'Doar Administratorul',
  'no_logs'=> 'Dezactivat', //cpg1.4
  'log_normal'=> 'Normal', //cpg1.4
  'log_all' => 'Tot', //cpg1.4
  'view_logs' => 'Vizualizare rapoarte', //cpg1.4
  'click_expand' => 'Clic pe o secţiune pentru extindere', //cpg1.4
  'expand_all' => 'Extinde tot', //cpg1.4
  'notice1' => '(*) Aceste setări nu ar trebui să fie schimbate dacă aveţi deja imagini în baza de date.', //cpg1.4 - (relocated)
  'notice2' => '(**) Când se schimba aceasta valoare,doar imaginile adăugate de acum înainte vor fi afectate de această setare , deci este indicat ca aceasta să nu fie schimbată dacă există deja imagini în galerie. Puteţi totuşi să  aplicaţi schimbările pentru imaginile existente cu ajutorul &quot;<a href="util.php"> uneltelor de administrator</a> (Redimensionare imagini)&quot; - Utilitarul din meniul administrator.', //cpg1.4 - (relocated)
  'notice3' => '(***) Toate fişierele înregistrări (log) sunt scrise în limba engleză.', //cpg1.4 - (relocated)
  'bbs_disabled' => 'Funcţie dezactivată când se utilizează integrarea BBS', //cpg1.4
  'auto_resize_everyone' => 'Tot', //cpg1.4
  'auto_resize_user' => 'Doar utilizatorul', //cpg1.4
  'ascending' => 'Crescător', //cpg1.4
  'descending' => 'Descrescător', //cpg1.4
);

if (defined('ADMIN_PHP')) $lang_admin_data = array(
  'Setări Generale',
  array('Nume Galerie', 'gallery_name', 0, 'f=index.htm&amp;as=admin_general_name&amp;ae=admin_general_name_end'), //cpg1.4
  array('Descriere Galerie', 'gallery_description', 0, 'f=index.htm&amp;as=admin_general_description&amp;ae=admin_general_description_end'), //cpg1.4
  array('Adresa email a Administratorului', 'gallery_admin_email', 0, 'f=index.htm&amp;as=admin_general_email&amp;ae=admin_general_email_end'), //cpg1.4
  array('Adresa URL a dosarului galeriei (fară \'index.php\' sau similar, la sfârşit)', 'ecards_more_pic_target', 0, 'f=index.htm&amp;as=admin_general_coppermine-url&amp;ae=admin_general_coppermine-url_end'), //cpg1.4
  array('Adresa URL a paginii de start', 'home_target', 0, 'f=index.htm&amp;as=admin_general_home-url&amp;ae=admin_general_home-url_end'), //cpg1.4
  array('Permite descărcarea arhivelor ZIP pentru favorite', 'enable_zipdownload', 1, 'f=index.htm&amp;as=admin_general_zip-download&amp;ae=admin_general_zip-download_end'), //cpg1.4
  array('Diferenţa de Fus Orar (după GMT) (Timp curent: ' . localised_date(-1, $comment_date_fmt) . ')','time_offset',0, 'f=index.htm&amp;as=admin_general_time-offset&amp;ae=admin_general_time-offset_end&amp;top=1'), //cpg1.4
  array('Activează ecriptia parolelor ( Setare definitivă,nu poate fi restaurată)','enable_encrypted_passwords',1, 'f=index.htm&amp;as=admin_general_encrypt_password_start&amp;ae=admin_general_encrypt_password_end&amp;top=1'), // cpg 1.4
  array('Activează Pictograme-Ajutor (Ajutor disponibil doar în limba Engleza)','enable_help',9, 'f=index.htm&amp;as=admin_general_help&amp;ae=admin_general_help_end'), //cpg1.4
  array('Activează clic pe cuvinte-cheie în căutare','clickable_keyword_search',14, 'f=index.htm&amp;as=admin_general_keywords_start&amp;ae=admin_general_keywords_end'), //cpg1.4
  array('Activează plugins-uri', 'enable_plugins', 12, 'f=index.htm&amp;as=admin_general_enable-plugins&amp;ae=admin_general_enable-plugins_end'),  //cpg1.4
  array('Activează interzicerea IP-urilor private (Exemple: 192.168.0.10 ; 10.0.0.2)', 'ban_private_ip', 1,  'f=index.htm&amp;as=admin_general_private-ip&amp;ae=admin_general_private-ip_end'), //cpg1.4
  array('Interfaţă Adăugare multiplă de fişiere cu răsfoire', 'browse_batch_add', 1, 'f=index.htm&amp;as=admin_general_browsable_batch_add&amp;ae=admin_general_browsable_batch_add_end'), //cpg1.4
 
  'Limbaj &amp; Setările seturilor de caractere',
  array('Limba', 'lang', 5, 'f=index.htm&amp;as=admin_language_language&amp;ae=admin_language_language_end'), //cpg1.4
  array('Revenire spre limba Engleza dacă fraza tradusă nu a fost găsită?', 'language_fallback', 1, 'f=index.htm&amp;as=admin_language_fallback&amp;ae=admin_language_fallback_end'), //cpg1.4
  array('Setul de caractere ', 'charset', 4, 'f=index.htm&amp;as=admin_language_charset&amp;ae=admin_language_charset_end'), //cpg1.4
  array('Afişează lista de limbi', 'language_list', 1, 'f=index.htm&amp;as=admin_language_list&amp;ae=admin_language_list_end'), //cpg1.4
  array('Afişează steagurile specifice ţărilor limbilor', 'language_flags', 8, 'f=index.htm&amp;as=admin_language_flags&amp;ae=admin_language_flags_end&amp;top=1'), //cpg1.4
  array('Afişează &quot;reiniţializare&quot; în selecţia de limbi', 'language_reset', 1, 'f=index.htm&amp;as=admin_language_reset&amp;ae=admin_language_reset_end&amp;top=1'), //cpg1.4
  //array('Afişează precedent/următor în pagini', 'previous_next_tab', 1), //cpg1.4

  'Setări teme grafice',
  array('Teme grafice', 'theme', 6, 'f=index.htm&amp;as=admin_theme_theme&amp;ae=admin_theme_theme_end'), //cpg1.4
  array('Afişează lista de teme grafice', 'theme_list', 1, 'f=index.htm&amp;as=admin_theme_theme_list&amp;ae=admin_theme_theme_list_end'), //cpg1.4
  array('Afişează &quot;reiniţializare&quot; în selecţia de teme', 'theme_reset', 1, 'f=index.htm&amp;as=admin_theme_theme_reset&amp;ae=admin_theme_theme_reset_end'), //cpg1.4
  array('Afişează FAQ (Întrebări Frecvente)', 'display_faq', 1, 'f=index.htm&amp;as=admin_theme_faq&amp;ae=admin_theme_faq_end'), //cpg1.4
  array('Nume link meniu personalizat', 'custom_lnk_name', 0,'f=index.htm&amp;as=admin_theme_custom_lnk_name&amp;ae=admin_theme_custom_lnk_name_end'), //cpg1.4
  array('Adresa URL link meniu personalizat', 'custom_lnk_url', 0,'f=index.htm&amp;as=admin_language_custom_lnk_url&amp;ae=admin_language_custom_lnk_url_end'), //cpg1.4
  array('Afişează ajutor pentru coduri bbcode', 'show_bbcode_help', 1, 'f=index.htm&amp;as=admin_theme_bbcode&amp;ae=admin_theme_bbcode_end&amp;top=1'), //cpg1.4
  array('Arată sigla de compatibilitate în temele grafice care sunt clasate ca fiind compatibile XHTML şi CSS','vanity_block',1, 'f=index.htm&amp;as=vanity_block&amp;ae=vanity_block_end'), //cpg1.4
  array('Calea spre Antet (Header) personalizat', 'custom_header_path', 0, 'f=index.htm&amp;as=admin_theme_include_path_start&amp;ae=admin_theme_include_path_end'), //cpg1.4
  array('Calea spre partea de jos (footer)', 'custom_footer_path', 0, 'f=index.htm&amp;as=admin_theme_include_path_start&amp;ae=admin_theme_include_path_end'), //cpg1.4

  'Vizualizare lista Albume',
  array('Lăţimea tabloului principal (pixels sau procentaj %)', 'main_table_width', 0, 'f=index.htm&amp;as=admin_album_table-width&amp;ae=admin_album_table-width_end'), //cpg1.4
  array('Numărul de nivele de categorii de afişat', 'subcat_level', 0, 'f=index.htm&amp;as=admin_album_category-levels&amp;ae=admin_album_category-levels_end'), //cpg1.4
  array('Numărul de albume de afişat', 'albums_per_page', 0, 'f=index.htm&amp;as=admin_album_number&amp;ae=admin_album_number_end'), //cpg1.4
  array('Numărul de coloane pentru lista albume', 'album_list_cols', 0, 'f=index.htm&amp;as=admin_album_columns&amp;ae=admin_album_columns_end'), //cpg1.4
  array('Mărimea miniaturilor în pixeli', 'alb_list_thumb_size', 0, 'f=index.htm&amp;as=admin_album_thumbnail-size&amp;ae=admin_album_thumbnail-size_end'), //cpg1.4
  array('Conţinutul paginii principale', 'main_page_layout', 0, 'f=index.htm&amp;as=admin_album_list_content&amp;ae=admin_album_list_content_end'), //cpg1.4
  array('Arată miniatura albumului de nivel 1 în categorii','first_level',1, 'f=index.htm&amp;as=admin_album_first-level_thumbs&amp;ae=admin_album_first-level_thumbs_end'), //cpg1.4
  array('Sortează categoriile alfabetic (în loc de sortare personalizată)','categories_alpha_sort',1, 'f=index.htm&amp;as=admin_album_list_alphasort_start&amp;ae=admin_album_list_alphasort_end'), //cpg1.4
  array('Arată numărul de fişiere lipite','link_pic_count',1, 'f=index.htm&amp;as=admin_album_linked_files_start&amp;ae=admin_album_linked_files_end'), //cpg1.4

  'Vizualizare miniaturi',
  array('Numărul de coloane pe pagina de miniaturi', 'thumbcols', 0, 'f=index.htm&amp;as=admin_thumbnail_columns&amp;ae=admin_thumbnail_columns_end'), //cpg1.4
  array('Numărul de rânduri pe pagina de miniaturi', 'thumbrows', 0, 'f=index.htm&amp;as=admin_thumbnail_rows&amp;ae=admin_thumbnail_rows_end'), //cpg1.4
  array('Numărul maxim de miniaturi de afişat', 'max_tabs', 10, 'f=index.htm&amp;as=admin_thumbnail_tabs&amp;ae=admin_thumbnail_tabs_end'), //cpg1.4
  array('Afişează descrierea (pe lângă titlu) la baza miniaturii', 'caption_in_thumbview', 1, 'f=index.htm&amp;as=admin_thumbnail_display_caption&amp;ae=admin_thumbnail_display_caption_end'), //cpg1.4
  array('Afişează numărul de vizualizări la baza miniaturii', 'views_in_thumbview', 1, 'f=index.htm&amp;as=admin_thumbnail_display_views&amp;ae=admin_thumbnail_display_views_end'), //cpg1.4
  array('Afişează numărul de comentarii la baza miniaturii', 'display_comment_count', 1, 'f=index.htm&amp;as=admin_thumbnail_display_comments&amp;ae=admin_thumbnail_display_comments_end'), //cpg1.4
  array('Afişează numele celui care a trimis la baza miniaturii', 'display_uploader', 1, 'f=index.htm&amp;as=admin_thumbnail_display_uploader&amp;ae=admin_thumbnail_display_uploader_end'), //cpg1.4
  //array('Afişează numele administratorului care a încărcat,la baza miniaturii', 'display_admin_uploader', 1, 'f=index.htm&amp;as=admin_thumbnail_display_admin_uploader&amp;ae=admin_thumbnail_display_admin_uploader_end'), //cpg1.4
  array('Afişează numele de fişier la baza miniaturii', 'display_filename', 1, 'f=index.htm&amp;as=admin_thumbnail_display_filename&amp;ae=admin_thumbnail_display_filename_end'), //cpg1.4
  //array('Afişează descrierea albumului', 'alb_desc_thumb', 1, 'f=index.htm&amp;as=admin_thumbnail_display_description&amp;ae=admin_thumbnail_display_description_end'), //cpg1.4
  array('Modul implicit de sortare', 'default_sort_order', 3, 'f=index.htm&amp;as=admin_thumbnail_default_sortorder&amp;ae=admin_thumbnail_default_sortorder_end'), //cpg1.4
  array('Numărul minim de voturi pentru ca o imagine să apară în lista \'celor mai cotate\' ', 'min_votes_for_rating', 0, 'f=index.htm&amp;as=admin_thumbnail_minimum_votes&amp;ae=admin_thumbnail_minimum_votes_end'), //cpg1.4

  'Vizualizare imagine', //cpg1.4
  array('Lăţimea tabloului pentru imaginile de afişat (dimensiune în pixeli sau  procent %)', 'picture_table_width', 0, 'f=index.htm&amp;as=admin_image_comment_table-width&amp;ae=admin_image_comment_table-width_end'), //cpg1.4
  array('În mod normal,standard,informaţia imaginii este vizibilă', 'display_pic_info', 1, 'f=index.htm&amp;as=admin_image_comment_info_visible&amp;ae=admin_image_comment_info_visible_end'), //cpg1.4
  array('Lungimea maximă pentru descriere imagine', 'max_img_desc_length', 0, 'f=index.htm&amp;as=admin_image_comment_descr_length&amp;ae=admin_image_comment_descr_length_end'), //cpg1.4
  array('Numărul maxim de caractere pe care un cuvânt îl poate avea', 'max_com_wlength', 0, 'f=index.htm&amp;as=admin_image_comment_chars_per_word&amp;ae=admin_image_comment_chars_per_word_end'), //cpg1.4
  array('Arată Film Foto', 'display_film_strip', 1, 'f=index.htm&amp;as=admin_image_comment_filmstrip_toggle&amp;ae=admin_image_comment_filmstrip_toggle_end'), //cpg1.4
  array('Afişează numele imaginii dedesubtul miniaturii filmului foto', 'display_film_strip_filename', 1, 'f=index.htm&amp;as=admin_image_comment_display_film_strip_filename&amp;ae=admin_image_comment_display_film_strip_filename_end'), //cpg1.4
  array('Numărul de imagini într-un film foto', 'max_film_strip_items', 0, 'f=index.htm&amp;as=admin_image_comment_filmstrip_number&amp;ae=admin_image_comment_filmstrip_number_end'), //cpg1.4
  array('Intervalul în milisecunde (1 secundă are 1000 de milisecunde) între imaginile prezentate automat', 'slideshow_interval', 0, 'f=index.htm&amp;as=admin_image_comment_slideshow_interval&amp;ae=admin_image_comment_slideshow_interval_end'), //cpg1.4

  'Setări Comentarii', //cpg1.4
  array('Filtrează insulte/cuvinte murdare în comentarii', 'filter_bad_words', 1, 'f=index.htm&amp;as=admin_image_comment_bad_words&amp;ae=admin_image_comment_bad_words_end'), //cpg1.4
  array('Permite pictograme sugestive (smiles) în comentarii', 'enable_smilies', 1, 'f=index.htm&amp;as=admin_image_comment_smilies&amp;ae=admin_image_comment_smilies_end'), //cpg1.4
  array('Permite mai multe comentarii consecutive pentru o imagine, provenind de la acelaşi utilizator (dezactivaţi protecţia împotriva bombardării cu mesaje)', 'disable_comment_flood_protect', 1, 'f=index.htm&amp;as=admin_image_comment_flood&amp;ae=admin_image_comment_flood_end'), //cpg1.4
  array('Numărul maxim de linii într-un comentariu', 'max_com_lines', 0, 'f=index.htm&amp;as=admin_image_comment_lines&amp;ae=admin_image_comment_lines_end'), //cpg1.4
  array('Lungimea maximă a unui comentariu', 'max_com_size', 0, 'f=index.htm&amp;as=admin_image_comment_length&amp;ae=admin_image_comment_length_end'), //cpg1.4
  array('Notifică cu un email Administratorul, despre postarea comentariilor', 'email_comment_notification', 1, 'f=index.htm&amp;as=admin_image_comment_admin_notify&amp;ae=admin_image_comment_admin_notify_end'), //cpg1.4
  array('Sortează ordinea comentariilor', 'comments_sort_descending', 17, 'f=index.htm&amp;as=admin_comment_sort_start&amp;ae=admin_comment_sort_end'), //cpg1.4
  array('Prefixul pentru autorii anonimi de comentarii', 'comments_anon_pfx', 0, 'f=index.htm&amp;as=comments_anon_pfx&amp;ae=comments_anon_pfx_end'), //cpg1.4

  'Setări pentru Imagini şi Miniaturi de imagini',
  array('Calitatea imaginilor JPEG', 'jpeg_qual', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_jpeg_quality&amp;ae=admin_picture_thumbnail_jpeg_quality_end'), //cpg1.4
  array('Dimensiunea maximă a unei miniaturi <a href="#notice2" class="clickable_option">**</a>', 'thumb_width', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max-dimension&amp;ae=admin_picture_thumbnail_max-dimension_end'), //cpg1.4
  array('Utilizează dimensionare ( lăţime , înălţime sau aspectul maxim al miniaturii ) <a href="#notice2" class="clickable_option">**</a>', 'thumb_use', 7, 'f=index.htm&amp;as=admin_picture_thumbnail_use-dimension&amp;ae=admin_picture_thumbnail_use-dimension_end'), //cpg1.4
  array('Creează imagini intermediare','make_intermediate',1, 'f=index.htm&amp;as=admin_picture_thumbnail_intermediate_toggle&amp;ae=admin_picture_thumbnail_intermediate_toggle_end'), //cpg1.4
  array('Lărgimea sau Înălţimea maximă a imaginii/filmului video<a href="#notice2" class="clickable_option">**</a>', 'picture_width', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_intermediate_dimension&amp;ae=admin_picture_thumbnail_intermediate_dimension_end'), //cpg1.4
  array('Mărimea maximă în KB pentru imaginile încărcate', 'max_upl_size', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max_upload_size&amp;ae=admin_picture_thumbnail_max_upload_size_end'), //cpg1.4
  array('Lărgimea sau Înălţimea maximă în pixeli pentru imaginile/filmele încărcate', 'max_upl_width_height', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max_upload_dimension&amp;ae=admin_picture_thumbnail_max_upload_dimension_end'), //cpg1.4
  array('Auto redimensionare imagini care sunt mai mari decât lărgimea sau înălţimea maximă', 'auto_resize', 16, 'f=index.htm&amp;as=admin_picture_thumbnail_auto-resize&amp;ae=admin_picture_thumbnail_auto-resize_end'), //cpg1.4

  'Setări avansate pentru Imagini şi Miniaturi de imagini',
  array('Albumele pot fi confidenţiale (Nota: Dacă schimbaţi din \'Da\' spre \'Nu\' atunci orice album confidenţial va deveni public)', 'allow_private_albums', 1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_private_toggle&amp;ae=admin_picture_thumb_advanced_private_toggle_end'), //cpg1.4
  array('Arată pictogramă Album confidenţial utilizatorilor care nu sunt autentificaţi','show_private',1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_private_icon_show&amp;ae=admin_picture_thumb_advanced_private_icon_show_end'), //cpg1.4
  array('Caractere interzise în numele imaginilor', 'forbiden_fname_char',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_filename_forbidden_chars&amp;ae=admin_picture_thumb_advanced_filename_forbidden_chars_end'), //cpg1.4
  //array('Extensii de imagini care sunt permise pentru încărcare', 'allowed_file_extensions',0, 'f=index.htm&amp;as=&amp;ae=_end'), //cpg1.4
  array('Tipuri de imagini permise', 'allowed_img_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_pic_extensions&amp;ae=admin_picture_thumb_advanced_pic_extensions_end'), //cpg1.4
  array('Tipuri de clipuri video permise', 'allowed_mov_types',0, 'f=index.htm&amp;as=admin_thumbs_advanced_movie&amp;ae=admin_thumbs_advanced_movie_end'), //cpg1.4
  array('Redare automată filme', 'media_autostart',1, 'f=index.htm&amp;as=admin_movie_autoplay&amp;ae=admin_movie_autoplay_end'), //cpg1.4
  array('Tipuri de fişiere audio permise', 'allowed_snd_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_audio_extensions&amp;ae=admin_picture_thumb_advanced_audio_extensions_end'), //cpg1.4
  array('Tpuri de documente permise', 'allowed_doc_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_doc_extensions&amp;ae=admin_picture_thumb_advanced_doc_extensions_end'), //cpg1.4
  array('Metoda redimensionării imaginilor','thumb_method',2, 'f=index.htm&amp;as=admin_picture_thumb_advanced_resize_method&amp;ae=admin_picture_thumb_advanced_resize_method_end'), //cpg1.4
  array('Calea spre utilitarul de \'conversie\'ImageMagick  (exemplu /usr/bin/X11/)', 'impath', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_im_path&amp;ae=admin_picture_thumb_advanced_im_path_end'), //cpg1.4
  //array('Tipuri de imagini permise (valid doar pentru ImageMagick)', 'allowed_img_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_allowed_imagetypes&amp;ae=admin_picture_thumb_advanced_allowed_imagetypes_end'), //cpg1.4
  array('Opţiuni de Linie de comandă pentru ImageMagick', 'im_options', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_im_commandline&amp;ae=admin_picture_thumb_advanced_im_commandline_end'), //cpg1.4
  array('Citeşte informaţia Exif (EXchangeable Image file Format) din imaginile JPEG ', 'read_exif_data', 13, 'f=index.htm&amp;as=admin_picture_thumb_advanced_exif&amp;ae=admin_picture_thumb_advanced_exif_end'), //cpg1.4
  array('Citeşte informaţia IPTC (International Press Telecommunications Council) din imaginile JPEG', 'read_iptc_data', 1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_iptc&amp;ae=admin_picture_thumb_advanced_iptc_end'), //cpg1.4
  array('Dosarul albumului. <a href="#notice1" class="clickable_option">*</a>', 'fullpath', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_albums_dir&amp;ae=admin_picture_thumb_advanced_albums_dir_end'), //cpg1.4
  array('Dosarul pentru imaginile utilizatorului. <a href="#notice1" class="clickable_option">*</a>', 'userpics', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_userpics_dir&amp;ae=admin_picture_thumb_advanced_userpics_dir_end'), //cpg1.4
  array('Prefixul pentru imaginile intermediare <a href="#notice1" class="clickable_option">*</a>', 'normal_pfx', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_intermediate_prefix&amp;ae=admin_picture_thumb_advanced_intermediate_prefix_end'), //cpg1.4
  array('Prefixul pentru miniaturi <a href="#notice1" class="clickable_option">*</a>', 'thumb_pfx', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_thumbs_prefix&amp;ae=admin_picture_thumb_advanced_thumbs_prefix_end'), //cpg1.4
  array('Modul standard pentru dosare', 'default_dir_mode', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_chmod_folder&amp;ae=admin_picture_thumb_advanced_chmod_folder_end'), //cpg1.4
  array('Modul standard pentru imagini', 'default_file_mode', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_chmod_files&amp;ae=admin_picture_thumb_advanced_chmod_files_end'), //cpg1.4

  'Setări utilizator',
  array('Permite înregistrări de noi utilizatori', 'allow_user_registration', 1, 'f=index.htm&amp;as=admin_allow_registration&amp;ae=admin_allow_registration_end'), //cpg1.4
  array('Permite accesul utilizatorilor neautentificaţi (Oaspeţi sau Anonimi) access', 'allow_unlogged_access', 1, 'f=index.htm&amp;as=admin_allow_unlogged_access&amp;ae=admin_allow_unlogged_access_end'), //cpg1.4
  array('Înscrierea utilizatorilor necesită un email de verificare', 'reg_requires_valid_email', 1, 'f=index.htm&amp;as=admin_registration_verify&amp;ae=admin_registration_verify_end'), //cpg1.4
  array('Notifică prin email Administratorul , despre înscrierea utilizatorilor', 'reg_notify_admin_email', 1, 'f=index.htm&amp;as=admin_registration_notify&amp;ae=admin_registration_notify_end'), //cpg1.4
  array('Validarea înscrierilor de către Administrator', 'admin_activation', 1, 'f=index.htm&amp;as=admin_activation&amp;ae=admin_activation_end'),  //cpg1.4
  array('Permite a doi utilizatori diferiţi să aibă aceeaşi adresă email', 'allow_duplicate_emails_addr', 1, 'f=index.htm&amp;as=admin_allow_duplicate_emails_addr&amp;ae=admin_allow_duplicate_emails_addr_end'), //cpg1.4
  array('Notifică Administratorul despre cererea de aprobare imagini încărcate care sunt în aşteptare', 'upl_notify_admin_email', 1, 'f=index.htm&amp;as=admin_approval_notify&amp;ae=admin_approval_notify_end'), //cpg1.4
  array('Permite utilizatorilor autentificaţi să vizualizeze lista de membri', 'allow_memberlist', 1, 'f=index.htm&amp;as=admin_user_memberlist&amp;ae=admin_user_memberlist_end'), //cpg1.4
  array('Permite utilizatorilor autentificaţi să-şi schimbe adresă email în profilul personal', 'allow_email_change', 1, 'f=index.htm&amp;as=admin_user_allow_email_change&amp;ae=admin_user_allow_email_change_end'), //cpg1.4
  array('Permite utilizatorilor să reţină controlul asupra imaginilor din galeriile lor personale', 'users_can_edit_pics', 1, 'f=index.htm&amp;as=admin_user_editpics_public_start&amp;ae=admin_user_editpics_public_end'), //cpg1.4
  array('Numărul de autentificări eşuate până la activarea unei interdicţii temporare (pentru a preveni atacurile auto-generate)', 'login_threshold', 0, 'f=index.htm&amp;as=admin_user_login_start&amp;ae=admin_user_login_end'), //cpg1.4
  array('Durata unei interdicţii temporare după ce autentificările au eşuat', 'login_expiry', 0, 'f=index.htm&amp;as=admin_user_login_start&amp;ae=admin_user_login_end'), //cpg1.4
  array('Activează Raportul spre Administrator', 'report_post', 1, 'f=index.htm&amp;as=admin_user_enable_report&amp;ae=admin_user_enable_report_end'),  //cpg1.4

// Câmpuri personalizate în profil,  //cpg1.4
  'Câmpuri personalizate pentru profil utilizator (lăsaţi vid dacă nu sunt utilizate).
  Utilizaţi Profil 6 for pentru intrări lungi ca biografiile de exemplu', //cpg1.4
  array('Nume Profil 1 ', 'user_profile1_name', 0, 'f=index.htm&amp;as=admin_custom&amp;ae=admin_custom_end'), //cpg1.4
  array('Nume Profil 2 ', 'user_profile2_name', 0), //cpg1.4
  array('Nume Profil 3 ', 'user_profile3_name', 0), //cpg1.4
  array('Nume Profil 4 ', 'user_profile4_name', 0), //cpg1.4
  array('Nume Profil 5 ', 'user_profile5_name', 0), //cpg1.4
  array('Nume Profil 6 ', 'user_profile6_name', 0), //cpg1.4

  'Câmpuri personalizate pentru descrierea imaginilor (lăsaţi vid dacă nu sunt utilizate)',
  array('Nume Câmp 1 ', 'user_field1_name', 0, 'f=index.htm&amp;as=admin_custom_image&amp;ae=admin_custom_image_end'), //cpg1.4
  array('Nume Câmp 2 ', 'user_field2_name', 0),
  array('Nume Câmp 3 ', 'user_field3_name', 0),
  array('Nume Câmp 4 ', 'user_field4_name', 0),

  'Setări Cookie',
  array('Nume Cookie ', 'cookie_name', 0, 'f=index.htm&amp;as=admin_cookie_name&amp;ae=admin_cookie_name_end'), //cpg1.4
  array('Cale Cookie ', 'cookie_path', 0, 'f=index.htm&amp;as=admin_cookie_path&amp;ae=admin_cookie_path_end'), //cpg1.4

  'Setări Email (În mod normal, nu este nimic de schimbat aici, lăsaţi totul vid dacă nu sunteţi sigur)', //cpg1.4
  array('Gazda SMTP (când este lăsat vid, funcţia sendmail va fi utilizată)', 'smtp_host', 0, 'f=index.htm&amp;as=admin_email&amp;ae=admin_email_end'), //cpg1.4
  array('Utilizator SMTP ', 'smtp_username', 0), //cpg1.4
  array('Parola SMTP ', 'smtp_password', 0), //cpg1.4

  'Statistici şi Rapoarte', //cpg1.4
  array('Mod Raportare <a href="#notice3" class="clickable_option">***</a>', 'log_mode', 11, 'f=index.htm&amp;as=admin_logging_log_mode&amp;ae=admin_logging_log_mode_end'), //cpg1.4
  array('Rapoarte ecards', 'log_ecards', 1, 'f=index.htm&amp;as=admin_general_log_ecards&amp;ae=admin_general_log_ecards_end'), //cpg1.4
  array('Păstrează statistici detaliate despre voturi','vote_details',1, 'f=index.htm&amp;as=admin_logging_votedetails&amp;ae=admin_logging_votedetails_end'), //cpg1.4
  array('Păstrează statistici detaliate despre clic-uri','hit_details',1, 'f=index.htm&amp;as=admin_logging_hitdetails&amp;ae=admin_logging_hitdetails_end'), //cpg1.4

  'Setări Întreţinere', //cpg1.4
  array('Activează modul Identificare erori', 'debug_mode', 9, 'f=index.htm&amp;as=debug_mode&amp;ae=debug_mode_end'), //cpg1.4
  array('Afişează indicaţii în modul Identificare erori', 'debug_notice', 1, 'f=index.htm&amp;as=admin_misc_debug_notices&amp;ae=admin_misc_debug_notices_end'), //cpg1.4
  array('Galeria este dezactivată.', 'offline', 1, 'f=index.htm&amp;as=admin_general_offline&amp;ae=admin_general_offline_end'), //cpg1.4
);


// ------------------------------------------------------------------------- //
// File db_ecard.php
// ------------------------------------------------------------------------- //

if (defined('DB_ECARD_PHP')) $lang_db_ecard_php = array(
  'title' => 'Cărţi poştale electronice trimise',
  'ecard_sender' => 'Expeditor',
  'ecard_recipient' => 'Destinatar',
  'ecard_date' => 'Data',
  'ecard_display' => 'Arată cartea poştală',
  'ecard_name' => 'Nume',
  'ecard_email' => 'Adresa Email',
  'ecard_ip' => 'Adresa IP #',
  'ecard_ascending' => 'Crescător',
  'ecard_descending' => 'Descrescător',
  'ecard_sorted' => 'Sortate',
  'ecard_by_date' => 'după dată',
  'ecard_by_sender_name' => 'după numele expeditorului',
  'ecard_by_sender_email' => 'după adresa de email a expeditorului',
  'ecard_by_sender_ip' => 'după adresa IP a expeditorului',
  'ecard_by_recipient_name' => 'după numele destinatarului',
  'ecard_by_recipient_email' => 'după adresa de email a destinatarului',
  'ecard_number' => 'Afişare înregistrare %s spre %s din %s',
  'ecard_goto_page' => 'Spre pagina',
  'ecard_records_per_page' => 'Înregistrări pe pagină',
  'check_all' => 'Bifează tot',
  'uncheck_all' => 'Debifează tot',
  'ecards_delete_selected' => 'Şterge cărţile poştale selecţionate',
  'ecards_delete_confirm' => 'Sunteţi sigur că doriţi să ştergeţi înregistrările? Bifaţi în căsuţă !',
  'ecards_delete_sure' => 'Sunt sigur,continuă.',
);


// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
  'empty_name_or_com' => 'Trebuie să specificaţi numele dumneavoastră şi un comentariu',
  'com_added' => 'Comentariul dumneavoastră a fost adăugat',
  'alb_need_title' => 'Trebuie să specificaţi un titlu pentru album !',
  'no_udp_needed' => 'Nu este necesară actualizarea.',
  'alb_updated' => 'Albumul a fost actualizat.',
  'unknown_album' => 'Albumul selecţionat nu există sau nu aveţi permisiunea să încărcaţi nimic în acest album.',
  'no_pic_uploaded' => 'Nici o imagine nu a fost încărcată !<br /><br />Dacă totuşi aţi ales,verificaţi dacă serverul permite încărcări ...',
  'err_mkdir' => 'Crearea dosarului %s a eşuat!',
  'dest_dir_ro' => 'Dosarul destinaţie %s nu poate fi scris/creat de către program !',
  'err_move' => 'Imposibilitate de a muta %s în %s !',
  'err_fsize_too_large' => 'Dimensiunea fişierelor trimise este prea mare (Maximul permis este %s pe %s) !', //obsolete since cpg1.3 - consider removal in cpg1.4 once upload.php has been overhauled
  'err_imgsize_too_large' => 'Mărimea fişierului trimis este prea mare (Maximul permis este de %s KB) !', //obsolete since cpg1.3 - consider removal in cpg1.4 once upload.php has been overhauled
  'err_invalid_img' => 'Fişierul trimis nu este o imagine validă !',
  'allowed_img_types' => 'Nu puteţi încărca decât %s imagini.',
  'err_insert_pic' => 'Imaginea \'%s\' nu poate fi introdusă în album ',
  'upload_success' => 'Fişierul a fost încărcat.<br /><br />Vă fi vizibil imediat ce Administratorul îl va aproba.',
  'notify_admin_email_subject' => '%s - Notificare de încărcare fişier',
  'notify_admin_email_body' => 'O imagine a fost încărcată în galeria dumneavoastră de către %s .Este necesară aprobarea dumneavoastră la adresa %s',
  'info' => 'Informaţie',
  'com_added' => 'Comentariu adăugat',
  'alb_updated' => 'Album actualizat',
  'err_comment_empty' => 'Comentariul dumneavoastră este vid !',
  'err_invalid_fext' => 'Doar fişierele cu extensia următoare sunt acceptate : <br /><br />%s .',
  'no_flood' => 'Îmi pare rău, dar sunteţi deja ultimul autorul ultimului comentariu trimis pentru acest fişier.<br /><br /> Vă puteţi edita comentariul, pentru a adăuga comentarii suplimentare.',
  'redirect_msg' => 'Redirecţionare automată .<br /><br /><br />Clic pe  \'CONTINUĂ\'dacă pagina nu se încarcă automat',
  'upl_success' => 'Fişierul a fost adăugat cu succes.',
  'email_comment_subject' => 'Un comentariu a fost adăugat în galeria de imagini Coppermine',
  'email_comment_body' => 'Cineva a adăugat un comentariu în galerie.Pentru vizualizare mergeţi la ',
  'album_not_selected' => 'Albumul nu este selecţionat', //cpg1.4
  'com_author_error' => 'Un utilizator utilizează acest nume. Autentificaţi-vă sau utilizaţi un alt nume.', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
  'caption' => 'Subtitlu',
  'fs_pic' => 'Imaginea în dimensiuni maxime',
  'del_success' => 'Şters',
  'ns_pic' => 'Imagine în mărime normală',
  'err_del' => 'Nu poate fi şters(a)',
  'thumb_pic' => 'Miniatură Imagine',
  'comment' => 'Comentariu',
  'im_in_alb' => 'Imagine în Album',
  'alb_del_success' => 'Albumul &laquo;%s&raquo; a fost şters', //cpg1.4
  'alb_mgr' => 'Gestionar Albume',
  'err_invalid_data' => 'Date invalide recepţionate în \'%s\'',
  'create_alb' => 'Creare album \'%s\'',
  'update_alb' => 'Actualizare album \'%s\' cu titlu \'%s\' şi index \'%s\'',
  'del_pic' => 'Şterge fişier',
  'del_alb' => 'Şterge album',
  'del_user' => 'Şterge utilizator',
  'err_unknown_user' => 'Utilizatorul selecţionat nu există !',
  'err_empty_groups' => 'Nu există nici un tablou grup sau tabloul grup este gol!', //cpg1.4
  'comment_deleted' => 'Comentariul a fost şters.',
  'npic' => 'Imagine', //cpg1.4
  'pic_mgr' => 'Gestionar de Imagini', //cpg1.4
  'update_pic' => 'Actualizarea imaginii \'%s\' cu numele \'%s\' şi index \'%s\'', //cpg1.4
  'username' => 'Utilizator', //cpg1.4
  'anonymized_comments' => '%s comentariu(ii) anonime', //cpg1.4
  'anonymized_uploads' => '%s încărcare(i) publica(e) anonime', //cpg1.4
  'deleted_comments' => '%s comentariu(ii) şters(e)', //cpg1.4
  'deleted_uploads' => '%s încărcare(i) publică(e) şters(e)', //cpg1.4
  'user_deleted' => 'Utilizatorul %s a fost şters', //cpg1.4
  'activate_user' => 'Activează utilizator', //cpg1.4
  'user_already_active' => 'Contul este deja activ.', //cpg1.4
  'activated' => 'Activat', //cpg1.4
  'deactivate_user' => 'Dezactivează utilizatorul', //cpg1.4
  'user_already_inactive' => 'Contul este deja dezactivat', //cpg1.4
  'deactivated' => 'Dezactivat', //cpg1.4
  'reset_password' => 'Resetează parola(ele)', //cpg1.4
  'password_reset' => 'Parola resetată în %s', //cpg1.4
  'change_group' => 'Schimbă grupul principal', //cpg1.4
  'change_group_to_group' => 'Schimbă  grup din %s în %s', //cpg1.4
  'add_group' => 'Adăugare grup secundar', //cpg1.4
  'add_group_to_group' => 'Adăugare utilizator %s la grupul %s. El/Ea este acum membru principal al %s şi membru secundar al %s .', //cpg1.4
  'status' => 'Stare', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File displayecard.php
// ------------------------------------------------------------------------- //

if (defined('DISPLAYECARD_PHP')) {

$lang_displayecard_php = array(
  'invalid_data' => 'Datele pe care încercaţi să le accesaţi au fost compromise de către clientul de email. Verificare adresă incompletă.', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File displayimage.php
// ------------------------------------------------------------------------- //

if (defined('DISPLAYIMAGE_PHP')){

$lang_display_image_php = array(
  'confirm_del' => 'Sunteţi sigur că doriţi să ŞTERGEŢI acest fişier ?\\nComentariile vor fi şterse de asemenea.', //js-alert
  'del_pic' => 'ŞTERGE ACEST fişier',
  'size' => '%s x %s pixeli',
  'views' => '%s dat/ori',
  'slideshow' => 'Prezentare automată',
  'stop_slideshow' => 'Opreşte prezentarea',
  'view_fs' => 'Clic pentru a vizualiza imaginea în dimensiunile reale',
  'edit_pic' => 'Editaţi informaţia imaginii', //cpg1.4
  'crop_pic' => 'Taie şi Roteşte',
  'set_player' => 'Schimbă player',
);

$lang_picinfo = array(
  'title' =>'Informaţii imagine',
  'Filename' => 'Fişier',
  'Album name' => 'Nume Album',
  'Rating' => 'Cotare (%s vot(uri))',
  'Keywords' => 'Cuvinte-cheie',
  'File Size' => 'Mărime Fişier',
  'Date Added' => 'Data adăugării', //cpg1.4
  'Dimensions' => 'Dimensiuni',
  'Displayed' => 'Afişată',
  'URL' => 'URL', //cpg1.4
  'Make' => 'Crează', //cpg1.4
  'Model' => 'Model', //cpg1.4
  'DateTime' => 'Timp Data', //cpg1.4
  'ISOSpeedRatings'=>'ISO', //cpg1.4
  'MaxApertureValue' => 'Deschidere maximă (Aperture)', //cpg1.4
  'FocalLength' => 'Lungimea focala', //cpg1.4
  'Comment' => 'Comentariu',
  'addFav'=>'Adaugă la favorite',
  'addFavPhrase'=>'Favorite',
  'remFav'=>'Înlătură din Favorite',
  'iptcTitle'=>'Titlu IPTC',
  'iptcCopyright'=>'Drept de autor IPTC',
  'iptcKeywords'=>'Cuvinte-cheie IPTC',
  'iptccategory'=>'categoria IPTC',
  'iptcSubcategories'=>'Sub-categoria IPTC',
  'ColorSpace' => 'Spaţiu Culoare', //cpg1.4
  'ExposureProgram' => 'Program de exPOZIŢIE', //cpg1.4
  'Flash' => 'Bliţ', //cpg1.4
  'MeteringMode' => 'Mod măsură', //cpg1.4
  'ExposureTime' => 'Timp de expoziţie', //cpg1.4
  'ExposureBiasValue' => 'Oblicitate expoziţie', //cpg1.4
  'ImageDescription' => ' Descriere Imagine', //cpg1.4
  'Orientation' => 'Orientare', //cpg1.4
  'xResolution' => 'Rezoluţia X ', //cpg1.4
  'yResolution' => 'Rezoluţia Y ', //cpg1.4
  'ResolutionUnit' => 'Unitatea de măsură a Rezoluţiei', //cpg1.4
  'Software' => 'Software', //cpg1.4
  'YCbCrPositioning' => 'YCbCrPositioning', //cpg1.4
  'ExifOffset' => 'Exif Offset', //cpg1.4
  'IFD1Offset' => 'IFD1 Offset', //cpg1.4
  'FNumber' => 'FNumber', //cpg1.4
  'ExifVersion' => 'Versiunea Exif', //cpg1.4
  'DateTimeOriginal' => 'DataTimpul Original', //cpg1.4
  'DateTimedigitized' => 'DataTimpul digitilizat', //cpg1.4
  'ComponentsConfiguration' => 'Configuraţia Componentelor', //cpg1.4
  'CompressedBitsPerPixel' => 'Biţi Compresaţi Per Pixel', //cpg1.4
  'LightSource' => 'Sursa de lumină', //cpg1.4
  'ISOSetting' => 'Setarea ISO', //cpg1.4
  'ColorMode' => 'Mod color', //cpg1.4
  'Quality' => 'Calitate', //cpg1.4
  'ImageSharpening' => 'Sharpening (ascuţime) Imagine', //cpg1.4
  'FocusMode' => 'Mod Focus', //cpg1.4
  'FlashSetting' => 'Setare bliţ', //cpg1.4
  'ISOSelection' => 'selecţia ISO', //cpg1.4
  'ImageAdjustment' => 'Ajustare Imagine', //cpg1.4
  'Adapter' => 'Adaptor', //cpg1.4
  'ManualFocusDistance' => 'Distanţa focală manuală', //cpg1.4
  'DigitalZoom' => 'Marire Digitala', //cpg1.4
  'AFFocusPosition' => 'Poziţia AF (Auto Finder)', //cpg1.4
  'Saturation' => 'Saturaţie', //cpg1.4
  'NoiseReduction' => 'Reducţie de Zgomot', //cpg1.4
  'FlashPixVersion' => 'Versiunea Flash Pix', //cpg1.4
  'ExifImageWidth' => 'Lărgime imagine Exif', //cpg1.4
  'ExifImageHeight' => 'Înălţime imagine Exif', //cpg1.4
  'ExifInteroperabilityOffset' => 'Offse de interoperabilitate Exif', //cpg1.4
  'FileSource' => 'Sursa fişier', //cpg1.4
  'SceneType' => 'Tipul de scenă', //cpg1.4
  'CustomerRender' => 'Redare personalizată', //cpg1.4
  'ExposureMode' => 'Mod expunere', //cpg1.4
  'WhiteBalance' => 'Balansul de alb WB', //cpg1.4
  'DigitalZoomRatio' => 'Rata mărire digitală', //cpg1.4
  'SceneCaptureMode' => 'Mod captură scenă', //cpg1.4
  'GainControl' => 'Control câştig (Gain Contro)', //cpg1.4
  'Contrast' => 'Contrast', //cpg1.4
  'Sharpness' => 'Ascuţime (Sharpness)', //cpg1.4
  'ManageExifDisplay' => 'Gestionează afişaj Exif', //cpg1.4
  'submit' => 'Trimite', //cpg1.4
  'success' => 'Informaţia a fost trimisă.', //cpg1.4
  'details' => 'Detalii', //cpg1.4
);

$lang_display_comments = array(
  'OK' => 'OK',
  'edit_title' => 'Editează acest comentariu',
  'confirm_delete' => 'Sunteţi sigur că doriţi să ştergeţi acest comentariu?', //js-alert
  'add_your_comment' => 'Adaugă comentariu',
  'name'=>'Nume',
  'comment'=>'Comentariu',
  'your_name' => 'Anonim',
  'report_comment_title' => 'Reportează acest comentariu Administratorului', //cpg1.4
);

$lang_fullsize_popup = array(
  'click_to_close' => 'Clic pe imagine pentru a închide această fereastră',
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
  'title' => 'Trimite o arte poştală electronică',
  'invalid_email' => '<font color="red"><b>Avertisment</b></font>: Adresa de email greşită:', //cpg1.4
  'ecard_title' => 'O carte poştală pentru tine de la %s ',
  'error_not_image' => 'Doar imaginile pot fi trimise în format Carte Poştală.',
  'view_ecard' => 'Link-ul alternativ pentru Cartea Poştală în cazul în care acesta nu se afişează corect.', //cpg1.4
  'view_ecard_plaintext' => 'Pentru a vizualiza aceasta Carte Poştală , copiaţi aceasta adresa în navigatorul dumneavoastră: ', //cpg1.4
  'view_more_pics' => 'Vizualizaţi mai multe imagini!', //cpg1.4
  'send_success' => 'Cartea Poştală Electronica a fost trimisă',
  'send_failed' => 'Îmi pare rău , serverul nu poate trimite Cartea voastră Poştală...',
  'from' => 'De la ',
  'your_name' => 'Numele dumneavoastră',
  'your_email' => 'Adresa voastră de email',
  'to' => 'Pentru',
  'rcpt_name' => 'Nume Destinatar',
  'rcpt_email' => 'Adresa email a destinatarului',
  'greetings' => 'Salutări', //cpg1.4
  'message' => 'Mesaj', //cpg1.4
  'ecards_footer' => 'Trimis de %s cu adresa IP  %s la %s (ora Galeriei)', //cpg1.4
  'preview' => 'Previzualizare Carte Poştală Electronică', //cpg1.4
  'preview_button' => 'Previzualizare', //cpg1.4
  'submit_button' => 'Trimite Cartea Poştală', //cpg1.4
  'preview_view_ecard' => 'Acest link va fi alternativa de acces spre Cartea poştală odată ce aceasta este generată. Nu va funcţiona pentru previzualizări.', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File report_file.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('REPORT_FILE_PHP') || defined('DISPLAYREPORT_PHP')) $lang_report_php =array(
  'title' => 'Raport spre Administrator', //cpg1.4
  'invalid_email' => '<b>Avertisment</b> : Adresa de email invalidă !', //cpg1.4
  'report_subject' => 'Un raport de la  %s în galeria %s', //cpg1.4
  'view_report' => 'Link alternativ în cazul în care raportul nu se afişează corect', //cpg1.4
  'view_report_plaintext' => 'Pentru a vizualiza acest raport, copiaţi această adresă în navigatorul dumneavoastră: ', //cpg1.4
  'view_more_pics' => 'Galerie', //cpg1.4
  'send_success' => 'Raportul a fost trimis', //cpg1.4
  'send_failed' => 'Îmi pare rău dar serverul nu poate trimite raportul dumneavoastră...', //cpg1.4
  'from' => 'De la', //cpg1.4
  'your_name' => 'Numele dumneavoastră', //cpg1.4
  'your_email' => 'Adresa dumneavoastră de email', //cpg1.4
  'to' => 'Pentru', //cpg1.4
  'administrator' => 'Administrator/Moderator', //cpg1.4
  'subject' => 'Subiect', //cpg1.4
  'comment_field_name' => 'Raportare despre comentariul lui  "%s"', //cpg1.4
  'reason' => 'Motiv', //cpg1.4
  'message' => 'Mesaj', //cpg1.4
  'report_footer' => 'Trimis de %s cu adresa IP %s din %s (ora Galeriei)', //cpg1.4
  'obscene' => 'Obscen', //cpg1.4
  'offensive' => 'Ofensiv', //cpg1.4
  'misplaced' => 'În afara subiectului/Plasat greşit', //cpg1.4
  'missing' => 'Lipsă', //cpg1.4
  'issue' => 'Eroare/Nu pot vizualiza', //cpg1.4
  'other' => 'Altceva', //cpg1.4
  'refers_to' => 'Raportul fişier este în legătură cu  ', //cpg1.4
  'reasons_list_heading' => 'Motivul(ele) pentru raport:', //cpg1.4
  'no_reason_given' => 'Nici nu motiv nu a fost specificat ', //cpg1.4
  'go_comment' => 'Salt la comentariu', //cpg1.4
  'view_comment' => 'Vizualizează raport complet cu comentariu', //cpg1.4
  'type_file' => 'fişier', //cpg1.4
  'type_comment' => 'comentariu', //cpg1.4
  'invalid_data' => 'Datele pe care încercaţi să le vizualizaţi au fost corupte de către clientul dumneavoastră de email.Verificare adresă incompletă.', //cpg1.4

);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
  'pic_info' => 'Informaţie Imagine',
  'album' => 'Album',
  'title' => 'Titlu',
  'filename' => 'Nume fişier', //cpg1.4
  'desc' => 'Descriere',
  'keywords' => 'Cuvinte-cheie',
  'new_keyword' => 'Nou cuvânt-cheie', //cpg1.4
  'new_keywords' => 'Nou cuvânt-cheie găsit', //cpg1.4
  'existing_keyword' => 'Cuvânt-cheie existent', //cpg1.4
  'pic_info_str' => '%s &times; %s - %s KB - %s vizualizări - %s voturi',
  'approve' => 'Aprobă fişier',
  'postpone_app' => 'Amână aprobarea',
  'del_pic' => 'Şterge fişier',
  'del_all' => 'Şterge TOATE fişierele', //cpg1.4
  'read_exif' => 'Re-citeşte informaţia Exif',
  'reset_view_count' => 'Resetează numărătoarea de vizualizări',
  'reset_all_view_count' => 'Resetează TOATE numărătoarele de vizualizări', //cpg1.4
  'reset_votes' => 'Resetează voturi',
  'reset_all_votes' => 'Resetează TOATE voturile', //cpg1.4
  'del_comm' => 'Şterge comentarii',
  'del_all_comm' => 'Şterge TOATE comentariile', //cpg1.4
  'upl_approval' => 'Aprobare de încărcare', //cpg1.4
  'edit_pics' => 'Editează imagini',
  'see_next' => 'Vizualizează următoarele',
  'see_prev' => 'Vizualizează precedentele',
  'n_pic' => '%s Fişiere',
  'n_of_pic_to_disp' => 'Numărul fişierelor de afişat',
  'apply' => 'Aplică modificările',
  'crop_title' => 'Editor de Imagini Coppermine',
  'preview' => 'Previzualizare',
  'save' => 'Salvează imagine',
  'save_thumb' =>'Salvează ca miniatură de imagine',
  'gallery_icon' => 'Crează aceasta ca pictograma mea', //cpg1.4
  'sel_on_img' =>'selecţia trebuie să fie în întregime în imagine !', //js-alert
  'album_properties' =>'Proprietăţi Album', //cpg1.4
  'parent_category' =>'Categoria mamă', //cpg1.4
  'thumbnail_view' =>'Vizualizare Miniaturi', //cpg1.4
  'select_unselect' =>'selectează/deselectează toate', //cpg1.4
  'file_exists' => "Fişierul destinaţie '%s' există deja.", //cpg1.4
  'rename_failed' => "Nu s-a reuşit redenumirea din '%s' în '%s'.", //cpg1.4
  'src_file_missing' => "Fişierul '%s' lipseşte.", // cpg 1.4
  'mime_conv' => "Nu pot converti fişierul din '%s' în '%s'",//cpg1.4
  'forb_ext' => 'Extensie de fişier interzisă.',//cpg1.4
);

// ------------------------------------------------------------------------- //
// File faq.php
// ------------------------------------------------------------------------- //

if (defined('FAQ_PHP')) $lang_faq_php = array(
  'faq' => 'Întrebări Frecvente (FAQ)',
  'toc' => 'Cuprins: ',
  'question' => 'Întrebare : ',
  'answer' => 'Răspuns : ',
);

if (defined('FAQ_PHP')) $lang_faq_data = array(
  'Întrebări generale',
  array('De ce este necesar să mă înregistrez ? ', 'Înregistrarea poate sau nu să fie necesară, în funcţie de preferinţele Administratorului. Înregistrarea acorda utilizatorului drepturi suplimentare ca trimitere fişiere, crearea unei liste de favorite, cotarea de imagini şi postarea de comentarii etc.', 'allow_user_registration', '1'),
  array('Cum să mă înregistrez ? ', 'Mergeţi la &quot;Înregistrare&quot; şi completaţi câmpurile necesare (eventual şi cele opţionale, dacă doriţi).<br />Dacă Administratorul a ales Activarea prin Email, atunci, după trimiterea formularului, în mod normal, în câteva minute ar trebui să recepţionaţi la adresa specificată în formular un email care conţine informaţiile necesare activării contului dumneavoastră. Acest lucru trebuie realizat pentru că contul dumneavoastră să devină activ şi să vă puteţi autentifica şi utiliza.În unele cazuri, Administratorul poate decide activarea/dezactivarea contului dumneavoastră.', 'allow_user_registration', '1'), //cpg1.4
  array('De ce nu pot să mă autentific ?', 'Verificaţi dacă mesajul de verificare care v-a fost trimis în email-ul de activare. Verificaţi dacă navigatorul dumneavoastră accepta cookies, ştergeţi fişierele temporare şi cookie-urile şi încercaţi din nou.Dacă nu reusiţi, contactaţi Administratorul.', 'offline', 0),
  //array('Dacă am schimbat adresa mea de email ? ', 'Autentificaţi-vă şi schimbaţi adresa de email ataşată profilului dumneavoastră personal', 'offline', 0),
  array('Cum să salvez o imagine în &quot;Favorite&quot;?', 'Clic pe o imagine şi apoi clic pe &quot;informaţii imagine&quot; link (<img src="images/info.gif" width="16" height="16" border="0" alt="Picture information" />); derulaţi în jos în informaţiile imaginii şi selectaţi &quot;Adăugare la favorite&quot;.<br />Administratorul poate lasa &quot;Informaţii imagine &quot; activate în mod normal.<br />IMPORTANT: Acceptare de Cookie trebuie să fie activate în navigatorul dumneavoastră şi trebuie să nu fie şterse.', 'offline', 0),
  array('Cum să cotez o imagine ?', ' Clic pe miniatura de imagine şi navigaţi spre josul paginii şi alegeţi o cotare.', 'offline', 0),
  array('Cum să comentez o imagine ? ', ' Clic pe miniatura de imagine şi navigaţi în josul paginii până la sfârşitul comentariilor (dacă există) şi faceţi clic pe Adăugare comentariu.', 'offline', 0),
  array('Cum sa încarc o imagine ?', 'Mergeţi la &quot;Încărcaţi fişier&quot; şi selectaţi albumul în care doriţi să încărcaţi. Apăsaţi pe &quot;Răsfoieşte (Browse) &quot; găsiţi şi selectaţi fişierele care se doresc a fi încărcate şi apoi faceţi clic pe &quot;Deschide (Open).&quot; Adăugaţi un titlu şi o descriere dacă doriţi. Clic pe &quot;Trimite&quot;.<br /><br />Ca metodă alternativă, pentru cei care folosesc <b>Windows XP</b>, se pot încărca multiple fişiere direct din computer spre albumele online,cu ajutorul utilitarului "XP Publishing wizard".<br />Pentru instrucţiuni detaliate vizitaţi:  <a href="xp_publish.php">aici.</a>', 'allow_private_albums', 1), //cpg1.4
  array('Unde sa încarc o imagine ?', 'Puteţi încărca imagini în unul din albumele dumneavoastră din &quot;Galeria mea&quot;. Administratorul vă poate acorda dreptul de a încărca fişiere în unul sau mai multe albume în galeria principală.', 'allow_private_albums', 0),
  array('Ce tip şi mărime de imagine pot încărca ?', 'Mărimea şi tipul (jpg, png, etc.) sunt caracteristici care rămân la decizia administratorului.Eventual,un mesaj de eroare va specifica tipul şi mărimea acceptate în galerie.', 'offline', 0),
  array('Cum să creez , redenumesc sau şterg un album în &quot;Galeriile Mele&quot;?', 'Pentru acest lucru, trebuie să fiţi deja în &quot;modul Administrare&quot;<br />Navigaţi spre &quot;Crează/Ordonează Albumele mele&quot; şi faceţi clic pe &quot;Nou&quot;. Schimbaţi &quot;Nou Album&quot; în numele preferat.<br />Puteţi de asemenea redenumi orice alt album din galeria dumneavoastră.<br />Clic pe &quot;Aplică Modificările&quot; pentru aplicarea modificărilor efectuate.', 'allow_private_albums', 0),
  array('Cum să modific restricţia ca alţi utilizatori să nu vizualizeze albumele mele? ', 'Pentru acest lucru, trebuie să fiţi deja în &quot;modul Administrare&quot;<br />Navigaţi spre &quot;Modifică Albumele mele&quot;. În bara &quot;Actualizează Album&quot; , selectaţi albumul pe care doriţi să îl modificaţi.<br />Aici, puteţi schimba numele, descrierea , imaginea miniatură, restricţiile pentru vizualizare şi permisiunea pentru comentarii sau cotare.<br />Clic pe &quot;Actualizează Album&quot; şi reglajele vor deveni active.', 'allow_private_albums', 0),
  array('Cum să vizualizez alte galerii ale utilizatorilor ?', 'Navigaţi spre &quot;Lista Albume&quot; şi selectaţi &quot;Galerii Utilizatori&quot;.Albumele confidenţiale nu vor fi afişate.', 'allow_private_albums', 0),
  array('Ce sunt cookie-urile?', 'Cookie-urile sunt mici fişiere text care conţin date (criptate sau nu) care sunt trimise de către o pagină internet navigatorului dumneavoastră care le stochează pe discul local.Acestea pot fi folosite de exemplu pentru ca navigatorul să "îşi amintească" de autentificarea dumneavoastră pe pagină, <br />astfel încât, selectând opţiunea aferentă la procesul de autentificare, la următoarea vizită, cu ajutorul acestui cookie nu veţi fi nevoit să vă reautentificaţi.Alte setări pot fi de asemenea stocate într-un cokie.', 'offline', 0),
  array('Cum să procur acest software pentru situl meu ? ', 'Coppermine este o galerie gratuită, livrată sub o licenţă GNU GPL. Este plină de funcţionalităţi şi a fost adaptată pentru diverse platforme. Vizitaţi adresa <a href="http://coppermine-gallery.net/">Pagina Oficială Coppermine</a> pentru a găsi informaţii suplimentare sau pentru descărcare.', 'offline', 0),

  'Navigare în Pagină',
  array('Ce este &quot;Lista Albume&quot; ? ', 'Acesta vă va arată întreaga categorie în care vă aflaţi cu un link spre fiecare album. Dacă nu vă situaţi într-o categorie , ca va afişa totalitatea galeriei cu un link spre fiecare categorie. O imagine miniatură poate fi în acelaşi timp şi un link/trimitere spre o categorie.', 'offline', 0),
  array('Ce este &quot;Galeria mea&quot;? ', 'Aceasta permite utilizatorilor să îşi creeze propriile galerii şi să îşi adauge, şterge sau modifica Albume de imagini.', 'allow_private_albums', 1), //cpg1.4
  array('Care este diferenţa între &quot;Modul Admin &quot; şi  &quot;Modul Utilizator&quot;?', 'Acesta permite,când va aflaţi în Mod Administrare,modificare galeriilor dumneavoastră (de asemenea a altor utilizatori dacă Administratorul a permis acest lucru).', 'allow_private_albums', 0),
  array('Ce este &quot;Trimitere Imagini&quot;? ', 'Aceasta permite utilizatorilor să trimită imagini spre stocare,(mărimea şi tipul imaginilor sunt alese de către administratorul paginii) într-o galerie aleasă de dumneavoastră sau de către Administrator.', 'allow_private_albums', 0),
  array('Ce este &quot;Încărcare Recentă&quot;? ', 'Acesta va afişa ultima imagina trimisă şi încărcată pe pagină.', 'offline', 0),
  array('Ce sunt &quot;Comentarii Recente&quot;? ', 'Aceasta va afişa ultimele comentarii adăugate împreună cu fişierele trimise.', 'offline', 0),
  array('Ce este &quot;Cea mai vizionată&quot;? ', 'Aceasta va afişa cea mai vizionată imagine de către toţi utilizatorii ( Indiferent dacă aceştia sunt autentificaţi sau nu).', 'offline', 0),
  array('Ce este &quot;Cea mai cotată&quot;?', 'Aceasta va afişa cea mai bine cotată imagine de către utilizatori,arătând media cotării (Exemplu: Cinci utilizatori care au acordat fiecare  <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> . Imaginea va avea o cotare medie de <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> . Dacă cinci utilizatori au cotat această imagine cu 3 pe o scară de la 1 la 5 (1,2,3,4,5) va avea ca rezultat o medie de  <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> .)<br />Cotările fluctuează între <img src="images/rating5.gif" width="65" height="14" border="0" alt="best" /> (Extraordinar) şi  <img src="images/rating0.gif" width="65" height="14" border="0" alt="worst" /> (De aruncat).', 'offline', 0),
  array('Ce sunt&quot;Favoritele mele&quot;?', 'Aceasta va permite utilizatorului să stocheze imaginile favorite într-un fişier cookie care a fost trimis computerului dumneavoastră.', 'offline', 0),
);


// ------------------------------------------------------------------------- //
// File forgot_passwd.php
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) $lang_forgot_passwd_php = array(
  'forgot_passwd' => 'Reamintire parolă',
  'err_already_logged_in' => 'Sunteţi deja autentificat!',
  'enter_email' => 'Introduceţi adresa de email', //cpg1.4
  'submit' => 'Trimite',
  'illegal_session' => 'Sesiune parolă uitată este invalidă sau a expirat.', //cpg1.4
  'failed_sending_email' => 'Reamintirea parolei nu a putut fi trimisă !',
  'email_sent' => 'Un mesaj email conţinând numele de utilizator şi parola au fost trimise la %s', //cpg1.4
  'verify_email_sent' => 'Un mesaj email a fost trimis la %s. Verificaţi adresa dumneavoastră de email pentru a completa acest proces.', //cpg1.4
  'err_unk_user' => 'Utilizatorul selectat nu există!',
  'account_verify_subject' => '%s - Cerere noua parolă', //cpg1.4
  'account_verify_body' => 'Aţi cerut o noua parolă.Dacă doriţi o nouă parola să vă fie trimisă, faceţi clic pe adresa următoare:

%s', //cpg1.4
  'passwd_reset_subject' => '%s - Noua parola', //cpg1.4
  'passwd_reset_body' => 'Aceasta este noua parola pe care aţi cerut-o:
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
  'public_albums' => 'Încărcare albume Publice', //cpg1.4
  'personal_gallery' => 'Galeria Personală', //cpg1.4
  'upload_method' => 'Metoda de încărcare', //cpg1.4
  'disk_quota' => 'Limită spaţiu ', //cpg1.4
  'rating' => 'Cotare', //cpg1.4
  'ecards' => 'Cărţi Poştale Electronice', //cpg1.4
  'comments' => 'Comentarii', //cpg1.4
  'allowed' => 'Permis', //cpg1.4
  'approval' => 'Aprobare', //cpg1.4
  'boxes_number' => 'Număr de câmpuri', //cpg1.4
  'variable' => 'variabil', //cpg1.4
  'fixed' => 'fix', //cpg1.4
  'apply' => 'Aplică modificările',
  'create_new_group' => 'Crează un grup nou',
  'del_groups' => 'Şterge grupul(urile) selecţionat(e)',
  'confirm_del' => 'Atenţie,când ştergeţi un grup,utilizatorii care aparţin acestui grup vor fi transferaţi automat spre grupul utilizatorilor înregistraţi !\n\nDoriţi să continuaţi ?', //js-alert
  'title' => 'Gestionează grupurile de utilizatori',
  'num_file_upload' => 'Căsuţe pentru upload', //cpg1.4
  'num_URI_upload' => 'Adresa URI a căsuţelor', //cpg1.4
  'reset_to_default' => 'Resetare spre numele standard. Număr Prestabilit (%s) - recomandabil!', //cpg1.4
  'error_group_empty' => 'Tablou grup este gol !<br /><br />Grupuri standard au fost create, reactualizaţi această pagină', //cpg1.4
  'explain_greyed_out_title' => 'De ce această coloană este marcată gri? ', //cpg1.4
  'explain_guests_greyed_out_text' => 'Proprietăţile nu pot fi schimbate deoarece aţi ales &quot; Accesul utilizatorilor neautentificaţi (Oaspeţi sau Anonimi) access&quot; în &quot;Nu&quot; pe pagina de configurare  (membrii grupului %s) nu pot face altceva decât autentificare ; în acelaşi timp setările de grup nu se aplică pentru ei.', //cpg1.4
  'explain_banned_greyed_out_text' => 'Nu puteţi schimba proprietăţile grupului deoarece membrii grupului %s deja nu au acces .', //cpg1.4
  'group_assigned_album' => 'assigned album(s)', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
  'welcome' => 'Bine aţi venit !',
);

$lang_album_admin_menu = array(
  'confirm_delete' => 'Sunteţi sigur ca doriţi să ştergeţi acest album ?\\nToate imaginile şi comentariile vor fi pierdute.', //js-alert
  'delete' => 'ŞTERGE',
  'modify' => 'PROPRIETĂŢI',
  'edit_pics' => 'EDITEAZĂ IMAGINI',
);

$lang_list_categories = array(
  'home' => 'Start',
  'stat1' => '<b>[pictures]</b> imagine(i) în <b>[albums]</b> album(e) şi <b>[cat]</b> categorie(ii) cu <b>[comments]</b> commentariu(ii) vizualizat(e) <b>[views]</b> dată/ori',
  'stat2' => '<b>[pictures]</b> imagine(i) în <b>[albums]</b> album(e) vizualizat(e) <b>[views]</b> dată/ori',
  'xx_s_gallery' => '%s\'s Galerie',
  'stat3' => '<b>[pictures]</b> imagine(i) în <b>[albums]</b> album(e) cu <b>[comments]</b> commentariu(ii) vizualizat(e) <b>[views]</b> dată/ori',
);

$lang_list_users = array(
  'user_list' => 'Lista de utilizatori',
  'no_user_gal' => 'Nu există galerii ale utilizatorilor',
  'n_albums' => '%s album(e)',
  'n_pics' => '%s imagine(i)',
);

$lang_list_albums = array(
  'n_pictures' => '%s Imagine(i)',
  'last_added' => ', Ultima adăugată în %s',
  'n_link_pictures' => '%s Imagine(i) cu adresa', //cpg1.4
  'total_pictures' => '%s Imagine(i) în total', //cpg1.4
);

}

// ------------------------------------------------------------------------- //
// File keywordmgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('KEYWORDMGR_PHP')) $lang_keywordmgr_php = array(
  'title' => 'Gestionar de cuvinte-cheie', //cpg1.4
  'edit' => 'editeaza', //cpg1.4
  'delete' => 'şterge', //cpg1.4
  'search' => 'cauta', //cpg1.4
  'keyword_test_search' => 'căutare %s într-o fereastră nouă', //cpg1.4
  'keyword_del' => 'şterge cuvântul-cheie %s', //cpg1.4
  'confirm_delete' => 'Sunteţi sigur ca doriţi să ştergeţi cuvântul-cheie  %s din totalitatea galeriei ?', //cpg1.4  // js-alert
  'change_keyword' => 'Schimbă cuvânt-cheie', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
  'login' => 'Autentificare',
  'enter_login_pswd' => 'Introduceţi numele de utilizator şi parola pentru autentificare',
  'username' => 'Utilizator',
  'password' => 'Parola',
  'remember_me' => 'Memorează datele',
  'welcome' => 'Bine aţi venit %s ...',
  'err_login' => '*** Autentificare eşuată. Încercaţi din nou. ***',
  'err_already_logged_in' => 'Sunteţi deja autentificat !',
  'forgot_password_link' => 'Parola uitată',
  'cookie_warning' => 'Avertisment: Navigatorul dumneavoastră nu acceptă cookies', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
  'logout' => 'Dezautentificare',
  'bye' => 'La revedere %s ...',
  'err_not_loged_in' => 'Nu sunteţi autentificat !',
);

// ------------------------------------------------------------------------- //
// File minibrowser.php  //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('MINIBROWSER_PHP')) $lang_minibrowser_php = array(
  'close' => 'închide', //cpg1.4
  'submit' => 'Trimite', //cpg1.4
  'up' => 'Un nivel mai sus', //cpg1.4
  'current_path' => 'Calea curentă', //cpg1.4
  'select_directory' => 'Va rugăm selectaţi un dosar', //cpg1.4
  'click_to_close' => 'Clic pe imagine pentru a închide această fereastră',
);

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
  'upd_alb_n' => 'Actualizează albumul %s',
  'general_settings' => 'Setări generale',
  'alb_title' => 'Titlu album',
  'alb_cat' => 'categorie album',
  'alb_desc' => 'Descriere album',
  'alb_keyword' => 'Cuvant-cheie album', //cpg1.4
  'alb_thumb' => 'Miniatura album',
  'alb_perm' => 'Permisiunile pentru acest album',
  'can_view' => 'Albumul poate fi vizualizat de către',
  'can_upload' => 'Vizitatorii pot încărca imagini',
  'can_post_comments' => 'Vizitatorii pot trimite comentarii',
  'can_rate' => 'Vizitatorii pot cota imaginile',
  'user_gal' => 'Galeriile utilizatorilor',
  'no_cat' => '* Nici o categorie *',
  'alb_empty' => 'Albumul este gol',
  'last_uploaded' => 'Ultima încărcată',
  'public_alb' => 'Toată lumea (album public)',
  'me_only' => 'Doar eu',
  'owner_only' => 'Doar proprietarul albumului (%s)',
  'groupp_only' => 'Membrii grupului \'%s\'',
  'err_no_alb_to_modify' => 'Nu există nici un album în baza de date pe care puteţi să îl modificaţi.',
  'update' => 'Actualizează album',
  'reset_album' => 'Resetează album', //cpg1.4
  'reset_views' => 'Resetează numerotarea vizualizărilor în &quot;0&quot; pentru %s', //cpg1.4
  'reset_rating' => 'Resetează cotarea tuturor imaginilor pentru %s', //cpg1.4
  'delete_comments' => 'Şterge toate comentariile pentru %s', //cpg1.4
  'delete_files' => '%sIreversibil%s Şterge toate imaginile din %s', //cpg1.4
  'views' => 'vizualizări', //cpg1.4
  'votes' => 'cotări', //cpg1.4
  'comments' => 'comentarii', //cpg1.4
  'files' => 'Fişiere', //cpg1.4
  'submit_reset' => 'Trimite schimbările', //cpg1.4
  'reset_views_confirm' => 'Sunt sigur,continuă.', //cpg1.4
  'notice1' => '(*) depinde de setările pentru %sgroups%s',  //cpg1.4 //(do not translate %s!)
  'alb_password' => 'Parola pentru album', //cpg1.4
  'alb_password_hint' => 'Indiciu parola album', //cpg1.4
  'edit_files' =>'Editează fişiere', //cpg1.4
  'parent_category' =>'Categoria mamă', //cpg1.4
  'thumbnail_view' =>'Vizualizare miniaturi', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File phpinfo.php
// ------------------------------------------------------------------------- //

if (defined('PHPINFO_PHP')) $lang_phpinfo_php = array(
  'php_info' => 'Informaţii despre PHP',
  'explanation' => 'Acesta este rezultatul funcţiei PHP <a href="http://www.php.net/phpinfo">phpinfo()</a>, afişat în Coppermine.',
  'no_link' => 'Accesul altor persoane la informaţiile despre php poate fi considerată o slăbiciune în securitatea sistemului, de aceea această pagină este vizibilă doar atunci când sunteţi autentificat ca administrator. Nu puteţi trimite adresa acestei pagini altora,accesul acestora va fi restricţionat.',
);

// ------------------------------------------------------------------------- //
// File picmgr.php //cpg1.4
// ------------------------------------------------------------------------- //
if (defined('PICMGR_PHP')) $lang_picmgr_php = array(
  'pic_mgr' => 'Gestionar de Imagini', //cpg1.4
  'select_album' => 'Selectare album', //cpg1.4
  'delete' => 'Şterge', //cpg1.4
  'confirm_delete1' => 'Sunteţi sigur că doriţi să ştergeţi această imagine?', //cpg1.4
  'confirm_delete2' => '\nImaginea va fi ştearsă definitiv.', //cpg1.4
  'apply_modifs' => 'Aplică modificările', //cpg1.4
  'confirm_modifs' => 'Confirmaţi modificările', //cpg1.4
  'pic_need_name' => 'Imaginea trebuie să aibă un nume !', //cpg1.4
  'no_change' => 'Nu aţi făcut nici o modificare !', //cpg1.4
  'no_album' => '* Nici un album *', //cpg1.4
  'explanation_header' => 'Ordinea sortării pe care o specificaţi în această pagină,va fi activă doar dacă', //cpg1.4
  'explanation1' => ' administratorul a setat "Sortarea implicită a imaginilor" din configuraţie în "Ordine descrescătoare" sau "Ordine crescătoare" (reglaj general pentru toţi utilizatorii care nu au ales o altă metoda individuală de sortare)', //cpg1.4
  'explanation2' => ' utilizatorul a ales "Ordine descrescătoare" sau "Ordine crescătoare" în pagina de miniaturi (în reglaje utilizator)', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File pluginmgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('PLUGINMGR_PHP')){

$lang_pluginmgr_php = array(
  'confirm_uninstall' => 'Sunteţi sigur că doriţi să dezinstalaţi acest plug-in', //cpg1.4
  'confirm_delete' => 'Sunteţi sigur că doriţi să ştergeţi acest plug-in', //cpg1.4
  'pmgr' => 'Gestionar de Plug-in-uri', //cpg1.4
  'name' => 'Nume', //cpg1.4
  'author' => 'Autor', //cpg1.4
  'desc' => 'Descriere', //cpg1.4
  'vers' => 'v', //cpg1.4
  'i_plugins' => 'Plugin-uri instalate', //cpg1.4
  'n_plugins' => 'Plugin-uri neinstalate', //cpg1.4
  'none_installed' => 'Nici unul instalat', //cpg1.4
  'operation' => 'Operaţie', //cpg1.4
  'not_plugin_package' => 'Fişierul încărcat nu este un pachet plug-in.', //cpg1.4
  'copy_error' => 'O eroare a fost semnalată la copierea pachetului plug-in în dosarul plug-in.', //cpg1.4
  'upload' => 'Încarcă', //cpg1.4
  'configure_plugin' => 'Configurare plug-in', //cpg1.4
  'cleanup_plugin' => 'Curăţă plug-in', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
  'already_rated' => 'Îmi pare rău dar aţi cotat deja aceasta imagine.',
  'rate_ok' => 'Votul dumneavoastră a fost înregistrat.',
  'forbidden' => 'Nu puteţi cota propriile imagini.',
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
Administratorul paginii {SITE_NAME} va încerca,în general, să înlăture sau să editeze orice material indecent sau imoral cât mai repede cu putinţă. Totodată, este imposibil ca acesta să verifice fiecare mesaj/imagine nouă. În acelaşi timp, sunteţi de acord ca tot materialul acestei pagini reflectă punctul de vedere şi opinia autorului mesajului/imaginii şi nu a administratorului sau a webmaster-ului, (cu excepţia mesajelor/imaginilor care le aparţin) din acest motiv,aceştia nu pot fi răspunzători pentru acest material.<br />
<br />
Sunteţi de acord să nu postaţi material cu caracter abuziv, obscen, vulgar, calomnios, cu instigare la ură, ameninţări, hărţuire sau orientare sexuală sau orice alt material care poate încălca orice alte legi aplicabile. În aceeaşi ordine de idei, sunteţi de acord ca administratorul sau webmaster-ul paginii {SITE_NAME} are,în orice moment,dreptul de a şterge sau edita orice material. În calitate de utilizator, sunteţi de acord ca informaţiile trimise anterior să fie stocate într-o baza de date. Aceste informaţii nu vor fi divulgate către terţe persoane fară acordul dumneavoastră. Administratorul sau webmaster-ul nu pot fi traşi la răspundere pentru eventualele date compromise în urma unei accesări neautorizate şi/sau a unui atac tip "hacker" ale serverului şi/sau bazei de date.<br />
<br />
Această pagină utilizează cookie pentru a stoca informaţii în calculatorul dumneavoastră. Acestea servesc doar pentru a îmbunătăţi procedura de vizualizare. Adresa electronică (e-mail) este utilizată doar pentru a confirma înregistrarea dumneavoastră sau pentru parola (parola uitată) .<br />
<br />
În momentul în care faceţi clic pe butonul 'Sunt de acord' de mai jos, confirmaţi că sunteţi de acord să vă supuneţi respectării condiţiilor mai sus amintite.
EOT;

$lang_register_php = array(
  'page_title' => 'Înregistrare utilizator',
  'term_cond' => 'Termeni şi condiţii',
  'i_agree' => 'Sunt de acord',
  'submit' => 'Trimite înregistrarea',
  'err_user_exists' => 'Numele de utilizator introdus a fost ales deja de către altă persoană.Vă rugăm alegeţi alt nume',
  'err_password_mismatch' => 'Cele 2 parole nu corespund,va rugăm să le introduceţi din nou.',
  'err_uname_short' => 'Numele de utilizator trebuie să aibă minim 2 caractere',
  'err_password_short' => 'Parola trebuie să aibă minim 2 caractere',
  'err_uname_pass_diff' => 'Numele de utilizator şi parola trebuie să fie diferite.',
  'err_invalid_email' => 'Adresa de email nu este corectă.',
  'err_duplicate_email' => 'Un alt utilizator este înregistrat cu această adresă de email.',
  'enter_info' => 'Introduceţi informaţiile necesare înregistrării',
  'required_info' => 'Informaţie obligatorie',
  'optional_info' => 'Informaţie opţională',
  'username' => 'Nume de utilizator',
  'password' => 'Parola',
  'password_again' => 'Reintroducere parola',
  'email' => 'Adresa Email',
  'location' => 'Locaţie',
  'interests' => 'Interese',
  'website' => 'Pagina personală',
  'occupation' => 'Profesia',
  'error' => 'EROARE',
  'confirm_email_subject' => '%s - Confirmare înregistrare',
  'information' => 'Informaţie',
  'failed_sending_email' => 'Mesajul e-mail de confirmare nu poate fi trimis !',
  'thank_you' => 'Vă mulţumim pentru înregistrare.<br /><br />Un mesaj e-mail care conţine informaţiile necesare activării contului dumneavoastră a fost trimis la adresa de e-mail specificată.',
  'acct_created' => 'Contul dumneavoastră a fost creat şi va puteţi autentifica cu ajutorul numelui de utilizator şi a parolei.',
  'acct_active' => 'Contul dumneavoastră a fost activat.Vă puteţi autentifica cu ajutorul numelui de utilizator şi a parolei',
  'acct_already_act' => 'Contul dumneavoastră a fost deja activat!', //cpg1.4
  'acct_act_failed' => 'Acest cont nu poate fi activat !',
  'err_unk_user' => 'Utilizatorul selecţionat nu a fost găsit !',
  'x_s_profile' => 'Profilul lui %s',
  'group' => 'Grup',
  'reg_date' => 'Data înregistrării',
  'disk_usage' => 'Spaţiu utilizat',
  'change_pass' => 'Schimbă parola',
  'current_pass' => 'Parola actuală',
  'new_pass' => 'Noua parolă',
  'new_pass_again' => 'Reintroduceţi noua parolă',
  'err_curr_pass' => 'Actuala parola este greşită',
  'apply_modif' => 'Aplică modificările',
  'change_pass' => 'Schimbă parola',
  'update_success' => 'Profilul dumneavoastră a fost actualizat',
  'pass_chg_success' => 'Parola a fost schimbată',
  'pass_chg_error' => 'Parola nu a fost schimbată',
  'notify_admin_email_subject' => '%s - Notificare de înregistrare',
  'last_uploads' => 'Last uploaded file.<br />Clic aici pentru a vizualiza toate imaginile trimise de', //cpg1.4
  'last_comments' => 'Last comment.<br />Clic aici pentru a vizualiza toate comentariile trimise de', //cpg1.4
  'notify_admin_email_body' => 'Un nou utilizator cu numele "%s" s-a înregistrat în galeria dumneavoastră.',
  'pic_count' => 'Imagini încărcate', //cpg1.4
  'notify_admin_request_email_subject' => '%s - Cerere de înregistrare', //cpg1.4
  'thank_you_admin_activation' => 'Vă mulţumim.<br /><br />Cererea dumneavoastră de înregistrare a fost transmisă administratorului.Veţi fi înştiinţat în adresa dumneavoastră de e-mail imediat ce va fi aprobată.', //cpg1.4
  'acct_active_admin_activation' => 'Contul este activ.Un email a fost trimis utilizatorului pentru a-i confirma acest lucru.', //cpg1.4
  'notify_user_email_subject' => '%s - Contul dumneavoastră a fost activat', //cpg1.4
);

$lang_register_confirm_email = <<<EOT
Vă mulţumim pentru înregistrarea făcută la {SITE_NAME}

Pentru a confirma şi activa contul dumneavoastră cu numele "{USER_NAME}",trebuie să vizitaţi adresa de mai jos.În cazul în care nu reusiţi să faceţi clic, copiaţi adresa în navigatorul dumneavoastră.

<a href="{ACT_LINK}">{ACT_LINK}</a>

Cu stimă,

Echipa {SITE_NAME}

EOT;

$lang_register_approve_email = <<<EOT
Un nou utilizator cu numele "{USER_NAME}" s-a înregistrat în galeria dumneavoastră la {SITE_NAME}

Pentru activarea contului, vizitaţi adresa de mai jos.În cazul în care nu reusiţi să faceţi clic,copiaţi adresa în navigatorul dumneavoastră:

<a href="{ACT_LINK}">{ACT_LINK}</a>

EOT;

$lang_register_activated_email = <<<EOT
Contul dumneavoastră la {SITE_NAME} , a fost aprobat şi activat.

Din acest moment, va puteţi autentifica la adresa <a href="{SITE_LINK}">{SITE_LINK}</a> folosind numele de utilizator "{USER_NAME}" şi parola aleasă la înregistrare.


Cu stimă,

Echipa {SITE_NAME}

EOT;
}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
  'title' => 'Verificare comentarii',
  'no_comment' => 'Nu este nici un comentariu',
  'n_comm_del' => '%s comentariu(ii) a(u) fost şters(e)',
  'n_comm_disp' => 'Numărul de comentarii pentru afişare',
  'see_prev' => 'Vezi anteriorul',
  'see_next' => 'Vezi următorul',
  'del_comm' => 'Şterge comentariile selecţionate',
  'user_name' => 'Nume', //cpg1.4
  'date' => 'Data', //cpg1.4
  'comment' => 'Comentariu', //cpg1.4
  'file' => 'Fişier', //cpg1.4
  'name_a' => 'După nume de utilizator crescător', //cpg1.4
  'name_d' => 'După nume de utilizator descrescător', //cpg1.4
  'date_a' => 'Data crescător', //cpg1.4
  'date_d' => 'Data descrescător', //cpg1.4
  'comment_a' => 'Mesaj comentariu crescător', //cpg1.4
  'comment_d' => 'Mesaj comentariu descrescător', //cpg1.4
  'file_a' => 'Fişier crescător', //cpg1.4
  'file_d' => 'Fişier descrescător', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File search.php                                                           //
// ------------------------------------------------------------------------- //


if (defined('SEARCH_PHP')){

$lang_search_php = array(
  'title' => 'Căutare în colecţia de imagini', //cpg1.4
  'submit_search' => 'Caută', //cpg1.4
  'keyword_list_title' => 'Lista cuvinte-cheie', //cpg1.4
  'keyword_msg' => 'Lista de mai sus nu include cuvinte conţinute în titlul sau descrierea imaginilor. Încercaţi o căutare text completă.',  //cpg1.4
  'edit_keywords' => 'Editează cuvinte-cheie', //cpg1.4
  'search in' => 'Căutare în:', //cpg1.4
  'ip_address' => 'Adresa IP', //cpg1.4
  'fields' => 'Căutare în', //cpg1.4
  'age' => 'Vârsta', //cpg1.4
  'newer_than' => 'Mai noi de', //cpg1.4
  'older_than' => 'Mai vechi de', //cpg1.4
  'days' => 'zi/zile', //cpg1.4
  'all_words' => 'Potrivire cu toate cuvintele (AND)', //cpg1.4
  'any_words' => 'Potrivire orice cuvânt (OR)', //cpg1.4
);

$lang_adv_opts = array(
  'title' => 'Titlu', //cpg1.4
  'caption' => 'Subtitlu', //cpg1.4
  'keywords' => 'Cuvinte-cheie', //cpg1.4
  'owner_name' => 'Nume proprietar', //cpg1.4
  'filename' => 'Nume fişier', //cpg1.4
);

}

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
  'page_title' => 'Caută fişiere noi',
  'select_dir' => 'Selecţionează dosarul',
  'select_dir_msg' => 'Acesta funcţie va permite să adăugaţi o lista de fişiere pe care le-aţi încărcat cu ajutorul protocolului FTP.<br /><br />Selecţionaţi dosarul unde aţi încărcat fişierele.', //cpg1.4
  'no_pic_to_add' => 'Nu există nici un fişier de încărcat',
  'need_one_album' => 'Aveţi nevoie de cel puţin un album pentru a utiliza aceasta funcţie.',
  'warning' => 'Avertisment',
  'change_perm' => ' Pagina nu poate scrie în acest dosar, este necesară schimbarea atributelor acestui dosar în 755 sau 777 (consultaţi documentaţia protocolului FTP) !',
  'target_album' => '<b>Încărcaţi fişierele din &quot;</b>%s<b>&quot; în </b>%s',
  'folder' => 'Dosar',
  'image' => 'imagine',
  'album' => 'Album',
  'result' => 'Rezultat',
  'dir_ro' => 'Neinscriptibil. ',
  'dir_cant_read' => 'Ilizibil. ',
  'insert' => 'Adăugare noi fişiere în galerie.',
  'list_new_pic' => 'Lista noilor fişiere',
  'insert_selected' => 'Introdu fişierele selecţionate',
  'no_pic_found' => 'Nici un nou fişier nu a fost găsit',
  'be_patient' => 'Vă rugăm aşteptaţi, fişierele se încărca.',
  'no_album' => 'nici un album nu a fost selecţionat',
  'result_icon' => 'clic pentru detalii sau pentru actualizare',  //cpg1.4
  'notes' =>  '<ul>'.
                          '<li><b>OK</b> : Fişierul a fost adăugat'.
                          '<li><b>DP</b> : Fişierul este un duplicat şi există deja în baza de date'.
                          '<li><b>PB</b> : Fişierul nu poate fi adăugat, Verificaţi configuraţia şi permisiunile pentru dosarele unde fişierele sunt localizate'.
                          '<li><b>NA</b> : Nu aţi selectat un album destinaţie pentru fişiere.Clic \'<a href="javascript:history.back(1)">înapoi</a>\' şi selectaţi un album. Dacă nu aveţi unul,<a href="albmgr.php">creaţi întâi un album</a></li>'.
                          '<li>Dacă simbolurile OK, DP, PB nu se afişează, faceţi clic pe fişierul problemă pentru a vizualiza eventualele mesaje de eroare produse de PHP'.
                          '<li>Dacă pagina expiră, reactualizaţi'.
                          '</ul>',
  'select_album' => 'selectaţi album',
  'check_all' => 'bifează tot',
  'uncheck_all' => 'Debifează tot',
  'no_folders' => 'Nu există dosare în dosarul "albume". Verificaţi existenţa a cel puţin unui dosar în dosarul "albums" şi prezenţa fişierelor în acest dosar. Nu încărcaţi nimic în dosarele "userpics" nici în "edit" , acestea fiind rezervate pentru încărcări din navigator şi pentru scopuri cu caracter intern.', //cpg1.4
   'albums_no_category' => 'Albume fară nic o categorie', //cpg1.4 // album pulldown mod, added by frogfoot
  'personal_albums' => '* Albume personale', //cpg1.4 // album pulldown mod, added by frogfoot
  'browse_batch_add' => 'Interfaţă navigabilă (recomandat)', //cpg1.4
  'edit_pics' => 'Editează fişiere', //cpg1.4
  'edit_properties' => 'Proprietăţi album', //cpg1.4
  'view_thumbs' => 'Vizualizare miniaturi', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File stat_details.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('STAT_DETAILS_PHP')) $lang_stat_details_php = array(
  'show_hide' => 'Arată/Ascunde aceasta coloana', //cpg1.4
  'vote' => 'Detalii Vot', //cpg1.4
  'hits' => 'Detalii clic-uri', //cpg1.4
  'stats' => 'Statistici Voturi', //cpg1.4
  'sdate' => 'Data', //cpg1.4
  'rating' => 'Cotare', //cpg1.4
  'search_phrase' => 'Fraza căutare', //cpg1.4
  'referer' => 'Sursă (provenienţă)', //cpg1.4
  'browser' => 'Navigatorul', //cpg1.4
  'os' => 'Sistemul de operare', //cpg1.4
  'ip' => 'Adresa IP', //cpg1.4
  'sort_by_xxx' => 'Sortează după %s', //cpg1.4
  'ascending' => 'crescător', //cpg1.4
  'descending' => 'descrescător', //cpg1.4
  'internal' => 'intern', //cpg1.4
  'close' => 'închide', //cpg1.4
  'hide_internal_referers' => 'ascunde sursele interne', //cpg1.4
  'date_display' => 'Afişează Data', //cpg1.4
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
  'title' => 'Trimitere fişiere',
  'custom_title' => 'Formular personalizat',
  'cust_instr_1' => 'Puteţi selecţiona un număr personalizat de câmpuri trimitere. Totodată, nu puteţi selecţiona mai multe decât limita specificată mai jos.',
  'cust_instr_2' => 'Număr de câmpuri cerere',
  'cust_instr_3' => 'Câmpuri trimitere fişier: %s',
  'cust_instr_4' => 'Câmpuri încărcare URI/URL : %s',
  'cust_instr_5' => 'Câmpuri încărcare URI/URL :',
  'cust_instr_6' => 'Câmpuri trimitere fişiere:',
  'cust_instr_7' => 'Vă rugăm introduceţi numărul fiecărui câmp de încărcare dorit.  Faceţi clic pe \'Continuă\'. ',
  'reg_instr_1' => 'Acţiune invalidă în crearea formularului.',
  'reg_instr_2' => 'Acum puteţi încărca fişierele dumneavoastră utilizând următoarele câmpuri de încărcare. Mărimea fişierelor trimise nu trebuie să depăşească  %s KB fiecare. Arhivele ZIP încărcate în secţiunile \'Încărcări fişiere\' şi \'Încărcări adrese URI/URL\' vor rămâne comprimate.',
  'reg_instr_3' => 'Dacă doriţi decompresarea arhivelor, folosiţi câmpul de încărcare furnizat în secţiunea \'Încărcare arhiva ZIP spre decompresare\' .',
  'reg_instr_4' => 'Când utilizaţi secţiunea încărcare URI/URL, vă rugăm să introduceţi calea spre fişierul care se doreşte a fi încărcat. Exemplu: http://www.pagina-sursă-fişiere.com/imagini/fişier-de-încărcat.jpg',
  'reg_instr_5' => 'Când aţi completat formularul, faceţi clic pe \'Continuă\'.',
  'reg_instr_6' => 'Încărcare arhiva ZIP spre decompresare:',
  'reg_instr_7' => 'Încărcări fişiere:',
  'reg_instr_8' => 'Încărcări adrese URI/URL:',
  'error_report' => 'Raport de erori',
  'error_instr' => 'Următoarele trimiteri au întâmpinat probleme:',
  'file_name_url' => 'Nume/Adresa fişier',
  'error_message' => 'Mesaj de eroare',
  'no_post' => 'Fişier neîncărcat prin comanda POST.',
  'forb_ext' => 'Extensie de fişier interzisă.',
  'exc_php_ini' => 'Mărimea fişierelor permise în php.ini a fost depăşită.',
  'exc_file_size' => 'Mărimea fişierelor permise de CPG a fost depăşită.',
  'partial_upload' => 'Doar o încărcare parţială.',
  'no_upload' => 'Nici i încărcare nu s-a realizat.',
  'unknown_code' => 'Eroare de încărcare PHP necunoscută.',
  'no_temp_name' => 'Nici o încărcare - Nici un nume temporar.',
  'no_file_size' => 'Nu conţine date / Defect',
  'impossible' => 'Deplasare imposibilă.',
  'not_image' => 'Nu este imagine / Defect',
  'not_GD' => 'Nu este o extensie a GD.',
  'pixel_allowance' => 'Înălţimea sau lăţimea imaginilor încărcate este mai mare decât cea permisă de configuraţia galeriei.', //cpg1.4
  'incorrect_prefix' => 'Prefix adresa URI/URL incorect',
  'could_not_open_URI' => 'Nu se poate deschide adresa URI.',
  'unsafe_URI' => 'Adresa nu este credibilă.',
  'meta_data_failure' => 'Eşec Date Meta',
  'http_401' => '401 Acces Neautorizat',
  'http_402' => '402 Este necesară plata',
  'http_403' => '403 Interzis',
  'http_404' => '404 Negăsit',
  'http_500' => '500 Eroare internă de server',
  'http_503' => '503 Serviciu nedisponibil',
  'MIME_extraction_failure' => 'Tipul MIME nu poate fi determinat.',
  'MIME_type_unknown' => 'Tip MIME necunoscut',
  'cant_create_write' => 'Nu pot să scriu fişierul.',
  'not_writable' => 'Fişierul nu est inscriptibil.',
  'cant_read_URI' => 'Nu se poate citi adresa URI/URL',
  'cant_open_write_file' => 'Nu se poate deschide adresa URI pentru scriere fişier.',
  'cant_write_write_file' => 'Nu se poate scrie adresa URI pentru scriere  fişier.',
  'cant_unzip' => 'Nu se poate decompresa.',
  'unknown' => 'Eroare necunoscută',
  'succ' => 'Încărcări reuşite',
  'success' => '%s încărcare(i) a(u) fost realizata(e).',
  'add' => 'Vă rugăm faceţi clic pe \'Continuă\' pentru a adăuga fişierele în album.',
  'failure' => 'Eşec de trimitere',
  'f_info' => 'Informaţii fişier',
  'no_place' => 'Fişierul anterior nu poate fi plasat.',
  'yes_place' => 'Fişierul precedent a fost plasat.',
  'max_fsize' => 'Mărimea maximă permisă este de %s KB',
  'album' => 'Album',
  'picture' => 'Fişier',
  'pic_title' => 'Titlu fişier',
  'description' => 'Descriere fişier',
  'keywords' => 'Cuvinte-cheie (separate cu un spaţiu)<br /><a href="#" onClick="return MM_openBrWindow(\'keyword_select.php\',\'selectare\',\'width=250, height=400, scrollbars=yes,toolbar=no,status=yes,resizable=yes\')">Introduceţi din lista</a>', //cpg1.4
  'keywords_sel' =>'Selectaţi un cuvânt-cheie', //cpg1.4
  'err_no_alb_uploadables' => 'Îmi pare rău, nu există nici un album unde vă este permisă încărcarea fişierelor.',
  'place_instr_1' => 'Vă rugăm să introduceţi fişierele în album,în aceasta etapa.Puteţi introduce de asemenea informaţii relevante despre fiecare fişier.',
  'place_instr_2' => 'Mai multe fişiere necesită amplasarea. Faceţi clic pe \'Continuă\'.',
  'process_complete' => 'Aţi plasat toate fişierele.',
   'albums_no_category' => 'Albume fară categorie', //cpg1.4. //album pulldown mod, added by frogfoot
  'personal_albums' => '* Albume personale', //cpg1.4 //album pulldown mod, added by frogfoot
  'select_album' => 'Selectare album', //cpg1.4 //album pulldown mod, added by frogfoot
  'close' => 'Close', //cpg1.4
  'no_keywords' => 'Îmi pare rău, nu există cuvinte-cheie!', //cpg1.4
  'regenerate_dictionary' => 'Regenerează dicţionar', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
  'memberlist' => 'Lista de membri', //cpg1.4
  'user_manager' => 'Gestionar de utilizatori', //cpg1.4
  'title' => 'Gestionează utilizatori',
  'name_a' => 'Nume crescător',
  'name_d' => 'Nume descrescător',
  'group_a' => 'Grup crescător',
  'group_d' => 'Grup descrescător',
  'reg_a' => 'Data înregistrării crescător',
  'reg_d' => 'Data înregistrării descrescător',
  'pic_a' => 'Număr fişiere crescător',
  'pic_d' => 'Nume fişiere descrescător',
  'disku_a' => 'Utilizare spaţiu crescător',
  'disku_d' => 'Utilizare spaţiu descrescător',
  'lv_a' => 'Ultima vizită crescător',
  'lv_d' => 'Ultima vizită descrescător',
  'sort_by' => 'Sortează utilizatori după',
  'err_no_users' => 'Tabela utilizatori este goală !',
  'err_edit_self' => 'Nu puteţi edita propriul profil.Pentru acest lucru folosiţi  \'Profilul meu\' ',
  'edit' => 'Editează', //cpg1.4
  'with_selected' => 'Cu cele selecţionate:', //cpg1.4
  'delete' => 'Şterge', //cpg1.4
  'delete_files_no' => 'Păstrează fişierele publice (dar anonim)', //cpg1.4
  'delete_files_yes' => 'Şterge fişierele publice', //cpg1.4
  'delete_comments_no' => 'Păstrează comentariile (dar anonim)', //cpg1.4
  'delete_comments_yes' => 'Şterge şi comentariile totodată', //cpg1.4
  'activate' => 'Activează', //cpg1.4
  'deactivate' => 'Dezactivează', //cpg1.4
  'reset_password' => 'Resetare parolă', //cpg1.4
  'change_primary_membergroup' => 'Schimbă grupul de membri principal', //cpg1.4
  'add_secondary_membergroup' => 'Schimbă grupul de membri secundar', //cpg1.4
  'name' => 'Nume utilizator',
  'group' => 'Grup',
  'inactive' => 'Inactiv',
  'operations' => 'Operaţii',
  'pictures' => 'Fişiere',
  'disk_space_used' => 'Spaţiu utilizat', //cpg1.4
  'disk_space_quota' => 'Limita spaţiu', //cpg1.4
  'registered_on' => 'Înregistrare', //cpg1.4
  'last_visit' => 'Ultima vizită',
  'u_user_on_p_pages' => '%d utilizator(i) pe %d pagina(i)',
  'confirm_del' => 'Sunteţi sigur ca doriţi să ştergeţi acest utilizator? \\nTOATE fişierele şi albumele sale vor fi de asemenea şterse.', //js-alert
  'mail' => 'MAIL',
  'err_unknown_user' => 'Utilizatorul selecţionat nu există !',
  'modify_user' => 'Modifică utilizator',
  'notes' => 'Note',
  'note_list' => '<li>Dacă nu doriţi schimbarea parolei, lăsaţi câmpul "parola" gol.',
  'password' => 'Parola',
  'user_active' => 'Utilizator activ',
  'user_group' => 'Grup utilizator',
  'user_email' => 'Adresa email a utilizatorului',
  'user_web_site' => 'Pagina personală ',
  'create_new_user' => 'Crează un nou utilizator',
  'user_location' => 'Locaţia utilizatorului',
  'user_interests' => 'Interesele utilizatorului',
  'user_occupation' => 'Profesia utilizatorului',
  'user_profile1' => '$user_profile1', //cpg1.4
  'user_profile2' => '$user_profile2', //cpg1.4
  'user_profile3' => '$user_profile3', //cpg1.4
  'user_profile4' => '$user_profile4', //cpg1.4
  'user_profile5' => '$user_profile5', //cpg1.4
  'user_profile6' => '$user_profile6', //cpg1.4
  'latest_upload' => 'Încărcări recente',
  'never' => 'Niciodată',
  'search' => 'Căutare utilizator', //cpg1.4
  'submit' => 'Trimite', //cpg1.4
  'search_submit' => 'Trimite!', //cpg1.4
  'search_result' => 'Rezultat căutare pentru: ', //cpg1.4
  'alert_no_selection' => 'Trebuie să selectaţi cel puţin un utilizator întâi!', //cpg1.4 //js-alert
  'password' => 'parola', //cpg1.4
  'select_group' => 'Selectare grup', //cpg1.4
  'groups_alb_access' => 'Permisiuni Album după grup', //cpg1.4
  'album' => 'Album', //cpg1.4
  'category' => 'Categorie', //cpg1.4
  'modify' => 'Modifică?', //cpg1.4
  'group_no_access' => 'Acest grup nu are acces special', //cpg1.4
  'notice' => 'Nota', //cpg1.4
  'group_can_access' => 'Album(e) pe care doar "%s" le poate accesa', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //

if (defined('UTIL_PHP')) {
$lang_util_desc_php = array(
'Actualizează titluri din nume fişier', //cpg1.4
'Şterge titluri', //cpg1.4
'Reconstruieşte miniaturile şi imaginile redimensionate', //cpg1.4
'Şterge imaginile originale,înlocuindu-le cu versiunea redimensionată a acestora', //cpg1.4
'Şterge imaginile originale sau intermediare pentru a câştiga spaţiu', //cpg1.4
'Şterge comentarii inutile', //cpg1.4
'Reciteşte mărimea fişierelor şi dimensiunile (dacă aţi editat imagini manual)', //cpg1.4
'Resetează numerotarea de vizualizări', //cpg1.4
'Afişează informaţii PHP', //cpg1.4
'Actualizează baza de date', //cpg1.4
'Afişează fişiere raport', //cpg1.4
);
$lang_util_php = array(
  'title' => 'Utilitare Administrator (Redimensionează imagini)',
  'what_it_does' => 'Ce face',
  'file' => 'Fişier',
  'problem' => 'Problemă', //cpg1.4
  'status' => 'Stare', //cpg1.4
  'title_set_to' => 'Titlu setat în',
  'submit_form' => 'Trimite',
  'updated_succesfully' => 'Actualizat',
  'error_create' => 'EROARE de creare',
  'continue' => 'Procesează în continuare imagini',
  'main_success' => 'Fişierul %s a fost utilizat ca fişier principal',
  'error_rename' => 'Eroare în redenumirea din %s în %s',
  'error_not_found' => 'Fişierul %s nu a fost găsit',
  'back' => 'Înapoi la start',
  'thumbs_wait' => 'Actualizare miniaturi şi/sau redimensionare imagini.Vă rugăm aşteptaţi...',
  'thumbs_continue_wait' => 'Continuă cu actualizare miniaturi şi/sau redimensionare imagini...',
  'titles_wait' => 'Actualizare titluri, aşteptaţi va rog...',
  'delete_wait' => 'Ştergere titluri, aşteptaţi va rog...',
  'replace_wait' => 'Ştergere originale şi înlocuirea lor cu imaginile redimensionate, aşteptaţi va rog..',
  'instruction' => 'Instrucţiuni rapide',
  'instruction_action' => 'Selectaţi acţiunea',
  'instruction_parameter' => 'Setare parametri',
  'instruction_album' => 'Selectare album',
  'instruction_press' => 'Apăsaţi %s',
  'update' => 'Actualizare miniaturi şi/sau imagini redimensionate',
  'update_what' => 'Ce ar trebui să fie actualizat',
  'update_thumb' => 'Doar miniaturile',
  'update_pic' => 'Doar imaginile redimensionate',
  'update_both' => 'Atât miniaturile cât şi imaginile redimensionate',
  'update_number' => 'Numărul de imagini procesate per clic',
  'update_option' => '(Încercaţi reglarea acestui parametru cu o valoare inferioară,în cazul în care pagina expiră)',
  'filename_title' => 'Filename &rArr; Nume fişier',
  'filename_how' => 'Cum ar trebui ca numele fişierului să fie modificat',
  'filename_remove' => 'Înlătură extensia .jpg de la sfârşit şi înlocuieşte " _ " (underscore) cu spaţii',
  'filename_euro' => 'Schimbă 2006_11_23_13_20_20.jpg în, 23/11/2006 13:20',
  'filename_us' => 'Schimbă 2006_11_23_13_20_20.jpg în 11/23/2006 13:20',
  'filename_time' => 'Schimbă 2006_11_23_13_20_20.jpg în 13:20',
  'delete' => 'Şterge titlul fişierelor sau imaginile în dimensiune originală',
  'delete_title' => 'Şterge titlul fişierelor',
  'delete_title_explanation' => 'Acesta va şterge toate titlurile fişierelor în albumul specificat.', //cpg1.4
  'delete_original' => 'Şterge imaginile în dimensiunea originală',
  'delete_original_explanation' => 'Aceasta va şterge imaginile care sunt în dimensiunea originală.', //cpg1.4
  'delete_intermediate' => 'Şterge imagini intermediare', //cpg1.4
  'delete_intermediate_explanation' => 'Acesta va şterge imaginile intermediare (normale).<br />Utilizaţi această comandă pentru a elibera spaţiu,dacă aţi dezactivat \'Creare imagini intermediare\' în configurare,după adăugarea imaginilor.', //cpg1.4
  'delete_replace' => 'Şterge imaginile originale şi înlocuieşte-le versiunea dimensionată',
  'titles_deleted' => 'Toate titlurile în albumul specificat vor fi înlăturate', //cpg1.4
  'deleting_intermediates' => 'Ştergere imagini intermediare, va rugăm aşteptaţi...', //cpg1.4
  'searching_orphans' => 'căutare imagini pierdute, va rugăm aşteptaţi...', //cpg1.4
  'select_album' => 'Selectare album',
  'delete_orphans' => 'Şterge comentariile pentru imagini lipsă', //cpg1.4
  'delete_orphans_explanation' => 'Acesta va identifica şi şterge orice comentariu asociat unei imagini care nu mai există în galerie.<br />Se verifică toate albumele.', //cpg1.4
  'refresh_db' => 'Reactualizează informaţiile despre dimensiune şi mărime', //cpg1.4
  'refresh_db_explanation' => 'Acesta va reactualiza informaţiile despre mărime şi dimensiune ale imaginilor. Utilizaţi aceasta dacă limita de spaţiu este raportată incorect sau dacă aţi schimbat fişiere manual.', //cpg1.4
  'reset_views' => 'Resetează numerotarea vizualizărilor', //cpg1.4
  'reset_views_explanation' => 'Setează toate numerotările de vizualizări în zero pentru toate imaginile din albumul specificat.', //cpg1.4
  'orphan_comment' => 'Comentarii pentru imagini inexistente au fost descoperite',
  'delete' => 'Şterge',
  'delete_all' => 'Şterge toate',
  'delete_all_orphans' => 'Şterge toate pierdute?', //cpg1.4
  'comment' => 'Comentariu: ',
  'nonexist' => 'Ataşat la un fişier inexistent # ',
  'phpinfo' => 'Afişează informaţii PHP',
  'phpinfo_explanation' => 'Conţine informaţii cu caracter tehnic despre server-ul dumneavoastră.<br /> - E posibil să fiţi întrebat despre aceste informaţii în cazul în care solicitaţi suport.', //cpg1.4
  'update_db' => 'Actualizează baza de date',
  'update_db_explanation' => 'Dacă aţi înlocuit fişiere Coppermine , adăugat o modificare sau aţi actualizat o versiune precedentă a Coppermine, asiguraţi-vă ca actualizaţi baza de date. Acesta va crea tabelele necesare şi/sau configura valorile acestora în baza de date.',
  'view_log' => 'Afişează fişierele raport', //cpg1.4
  'view_log_explanation' => 'Coppermine poate păstra înregistrări ale diferitelor acţiuni pe care utilizatorii le execută.Puteţi vizualiza aceste înregistrări dacă acestea sunt activate în <a href="admin.php">Configuraţia Coppermine </a>.', //cpg1.4
  'versioncheck' => 'Verifică versiuni', //cpg1.4
  'versioncheck_explanation' => 'Verifică versiunea fişierelor pentru a descoperi dacă aţi înlocuit toate fişierele după o actualizare sau dacă fişierele sursă ale Coppermine au fost actualizate după lansarea unei versiuni.', //cpg1.4
  'bridgemanager' => 'Manager pasarelă', //cpg1.4
  'bridgemanager_explanation' => 'Activează/Dezactivează integrarea (pasarelă) galeriei Coppermine cu altă aplicaţie.Exemplu: BBS-ul dumneavoastră (Bulletin Board System).', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File versioncheck.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('VERSIONCHECK_PHP')) $lang_versioncheck_php = array(
  'title' => 'Verificare Versiune', //cpg1.4
  'what_it_does' => 'Această pagină este destinată utilizatorilor care şi-au actualizat instalarea Coppermine. Această pagină verifică fişierele de pe server şi încearcă să determine dacă versiunile fişierelor locale sunt aceleaşi cu cele de pe pagina sursă http://coppermine.sourceforge.net. De asemenea sunt afişate fişierele care nu sunt actualizate şi pe care doriţi în prealabil să le actualizaţi.<br />Vă va afişa în roşu tot ceea ce trebuie reparat/actualizat. Informaţiile în galben necesită atenţia dumneavoastră. Informaţiile în verde (sau culoarea normală a textului) sunt  OK.<br />Faceţi clic pe pictogramele ajutor pentru informaţii suplimentare.', //cpg1.4
  'online_repository_unable' => 'Conectarea cu pagina sursă este imposibilă', //cpg1.4
  'online_repository_noconnect' => 'Coppermine nu a reuşit să se conecteze cu pagina sursă.Această problemă poate avea două cauze:', //cpg1.4
  'online_repository_reason1' => 'Pagina sursă coppermine este momentan indisponibila - Verificaţi dacă puteţi accesa pagina : %s - Dacă nu reusiţi, încercaţi mai târziu.', //cpg1.4
  'online_repository_reason2' => 'PHP pe serverul dumneavoastră este configurat cu %s dezactivat (implicit, aceasta valoare este activată). Dacă serverul este personal, şi aveţi acces la <i>php.ini</i> ,activaţi aceasta opţiune (sau cel puţin permiteţi suprascrierea cu %s). Dacă aveţi pagina găzduită, obişnuiţi-vă cu ideea ca nu puteţi compara fişierele dumneavoastră cu cele de pe pagina sursă. Această pagină va afişa în acest caz,doar versiunile fişierelor care conţin aceasta distribuţie. Actualizările nu vor fi afişate.', //cpg1.4
  'online_repository_skipped' => 'Conexiunea cu pagina sursă a fost anulată', //cpg1.4
  'online_repository_to_local' => 'Pagina va actualiza acum fişierele sursă cu cele locale. Datele pot fi inexacte dacă aţi actualizat Coppermine dar nu aţi încărcat toate fişierele actualizate.', //cpg1.4
  'local_repository_unable' => 'Conectarea cu sursa locală este imposibilă', //cpg1.4
  'local_repository_explanation' => 'Coppermine nu a reuşit să se conecteze cu sursa locală  %s în serverul dumneavoastră. Aceasta înseamnă, probabil, ca nu aţi încărcat fişierul sursă pe server. Faceţi acest lucru şi încercaţi apoi să reactualizaţi aceasta pagină (apăsaţi reactualizare).<br />Dacă pagina eşuează din nou, este posibil ca gazda paginii dumneavoastră să fi dezactivat complet parţi din <a href="http://www.php.net/manual/en/ref.filesystem.php">funcţiile sistemului de fişiere PHP</a> . În acest caz, nu puteţi utiliza acest utilitar.Ne pare rău.', //cpg1.4
  'coppermine_version_header' => 'Versiunea instalată Coppermine', //cpg1.4
  'coppermine_version_info' => 'În acest moment aveţi instalată versiunea:  %s', //cpg1.4
  'coppermine_version_explanation' => 'Dacă sunteţi de părere ca acesta Informaţie este complet greşită şi ar fi trebuit să utilizaţi o versiune mai recentă a Coppermine, e posibil să nu fi încărcat cea mai recentă versiune a fişierului <i>include/init.inc.php</i>', //cpg1.4
  'version_comparison' => 'Comparaţie de Versiuni', //cpg1.4
  'folder_file' => 'dosar/fişier', //cpg1.4
  'coppermine_version' => 'versiune cpg', //cpg1.4
  'file_version' => 'versiune fişier', //cpg1.4
  'webcvs' => 'Subversiuni WebSVN', //cpg1.4
  'writable' => 'Inscriptibil', //cpg1.4
  'not_writable' => 'Neinscriptibil', //cpg1.4
  'help' => 'Ajutor', //cpg1.4
  'help_file_not_exist_optional1' => 'Fişierul/Dosarul nu există', //cpg1.4
  'help_file_not_exist_optional2' => 'Fişierul/Dosarul %s nu a fost găsit pe server. Deşi este opţional, îl puteţi încărca cu ajutorul unui client FTP pe serverul dumneavoastră în cazul în care întâmpinaţi probleme.', //cpg1.4
  'help_file_not_exist_mandatory1' => 'Fişierul/Dosarul nu există', //cpg1.4
  'help_file_not_exist_mandatory2' => 'Fişierul/Dosarul %s nu a fost găsit pe server.Deoarece este un fişier obligatoriu va rugăm să îl încărcaţi pe serverul dumneavoastră utilizând un client FTP.', //cpg1.4
  'help_no_local_version1' => 'Nici o versiune de fişier local', //cpg1.4
  'help_no_local_version2' => 'Pagina nu a reuşit să extragă versiunea fişierului local.Fişierul este ori vechi ori este modificat sau şters. Actualizarea acestuia este recomandată.', //cpg1.4
  'help_local_version_outdated1' => 'Versiune locală învechită.', //cpg1.4
  'help_local_version_outdated2' => 'Versiunea fişierului pare să fie cea a unuia dintr-o versiune mai veche Coppermine (probabil aţi reactualizat). Asigurati-va ca actualizaţi şi acesti fişier.', //cpg1.4  
'help_local_version_na1' => 'Extragerea informaţiilor despre subversiune a eşuat', //cpg1.4
  'help_local_version_na2' => 'Pagina nu a reuşit să determine care este versiunea subversiunii (SVN) fişierului din serverul dumneavoastră. Ar trebui să actualizaţi fişierul cu cel din pachetul de distribuţie.', //cpg1.4
  'help_local_version_dev1' => 'Versiune de Dezvoltare', //cpg1.4
  'help_local_version_dev2' => 'Fişierul de pe serverul dumneavoastră pare să fie mai nou decât versiunea Coppermine. Ori utilizaţi un fişier de dezvoltare (ar trebui să îl utilizaţi doar în cazul în care sunteţi sigur de ceea ce faceţi), sau aţi actualizat instalarea Coppermine dar nu şi fişierul include/init.inc.php', //cpg1.4
  'help_not_writable1' => 'Dosarul nu este inscriptibil', //cpg1.4
  'help_not_writable2' => 'Schimbaţi permisiunile (CHMOD) dosarului, pentru a permite accesul la scriere a dosarului  %s şi a subdosarelor acestuia.', //cpg1.4
  'help_writable1' => 'Dosar inscriptibil', //cpg1.4
  'help_writable2' => 'Dosarul %s este inscriptibil. Acesta este un risc inutil, Coppermine are nevoie doar de permisiunea de citire/executare,nu şi de scriere.', //cpg1.4
  'help_writable_undetermined' => 'Coppermine  nu a reuşit să determine dacă acest dosar este sau nu inscriptibil.', //cpg1.4
  'your_file' => 'fişierul dumneavoastră', //cpg1.4
  'reference_file' => 'fişier referinţă', //cpg1.4
  'summary' => 'Rezumat', //cpg1.4
  'total' => 'Total fişiere/Dosare Verificate', //cpg1.4
  'mandatory_files_missing' => 'Fişiere Obligatorii lipsesc', //cpg1.4
  'optional_files_missing' => 'Fişiere Opţionale lipsesc', //cpg1.4
  'files_from_older_version' => 'Fişiere rămase neactualizate dintr-o versiune anterioară Coppermine', //cpg1.4
  'file_version_outdated' => 'Versiuni vechi de fişiere', //cpg1.4
  'error_no_data' => 'Pagina a întors o eroare necunoscută.Nu a reuşit să recupereze nici o Informaţie. Ne pare rău pentru inconveniente.', //cpg1.4
  'go_to_webcvs' => 'mergi la %s', //cpg1.4
  'options' => 'Opţiuni', //cpg1.4
  'show_optional_files' => 'Arată dosarele/Fişierele opţionale', //cpg1.4
  'show_mandatory_files' => 'Arată fişierele obligatorii', //cpg1.4
  'show_file_versions' => 'Arată versiuni fişiere', //cpg1.4
  'show_errors_only' => 'Arată doar dosare/Fişiere cu erori', //cpg1.4
  'show_permissions' => 'Arată permisiunile pentru dosar', //cpg1.4
  'show_condensed_output' => 'Arată rezultate minime (pentru facilitarea capturilor de ecran)', //cpg1.4
  'coppermine_in_webroot' => 'Coppermine este instalat în directorul rădăcină', //cpg1.4
  'connect_online_repository' => 'Încearcă conexiunea cu pagina sursă', //cpg1.4
  'show_additional_information' => 'Arată informaţii suplimentare', //cpg1.4
  'no_webcvs_link' => 'Nu afişa adresa svn', //cpg1.4
  'stable_webcvs_link' => 'Arată adresa svn de la o ramură stabilă', //cpg1.4
  'devel_webcvs_link' => 'Arată adresa svn la o ramură de dezvoltare', //cpg1.4
  'submit' => 'Aplică modificările / reactualizare', //cpg1.4
  'reset_to_defaults' => 'Revino la setările implicite', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File view_log.php  //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('VIEWLOG_PHP')) $lang_viewlog_php = array(
  'delete_all' => 'Şterge toate rapoartele', //cpg1.4
  'delete_this' => 'Şterge acest raport', //cpg1.4
  'view_logs' => 'Arată rapoartele', //cpg1.4
  'no_logs' => 'Nici un raport creat.', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File xp_publish.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('XP_PUBLISH_PHP')) {

$lang_xp_publish_client = <<<EOT
<h1>Window XP Web Publishing Wizard Client</h1><p>Acestă pagină permite utilizarea modulului <b>Windows XP web publishing wizard</b>  cu Coppermine.</p><p>Codul este bazat pe un articol de
EOT;

$lang_xp_publish_required = <<<EOT
<h2>Ce este necesar</h2><ul><li>Windows XP, pentru a avea acces la acest asistent.</li><li>O versiune funcţionabilă de Coppermine în care funcţia <b>încărcare de pe internet, funcţionează perfect.</b></li></ul><h2>Cum se instalează în partea utilizatorului</h2><ul><li>În Internet Explorer,clic dreapta,
EOT;

$lang_xp_publish_select = <<<EOT
Selectaţi &quot;save target as..&quot;. Salvaţi  fişierul pe calculatorul dumneavoastră. Când salvaţi, verificaţi dacă numele fişierului propus este <b>cpg_###.reg</b> (### reprezintă un număr). Redenumiţi acest fişier dacă este necesar, lăsând neschimbat numărul. Odată descărcat, faceţi dublu-clic pe acest fişier pentru a înregistra severul dumneavoastră în asistentul "web publishing wizard".Un mesaj de confirmare a introducerii cheii de registre Windows va apărea.</li></ul>
EOT;

$lang_xp_publish_testing = <<<EOT
<h2>Test</h2><ul><li>În Windows Explorer, selectaţi nişte fişiere şi apoi faceţi clic pe <b>Publish xxx on the web</b> din panoul din stânga.</li><li>Confirmaţi selecţia fişierelor. Faceţi clic pe <b>Next</b>.</li><li>În lista de servicii care va apărea, selectaţi-l pe cel al galeriei dumneavoastră (are numele galeriei). Dacă acest serviciu nu este prezent, verificaţi corecta instalare a fişierului <b>cpg_pub_wizard.reg</b> ca în descrierea de mai sus.</li><li>Introduceţi informaţiile de autentificare dacă este necesar.</li><li>Selecţionaţi albumul sursă pentru imagini sau creaţi un nou album.</li><li>Faceţi clic pe <b>next</b>. Procedura de încărcare a imaginilor va începe.</li><li>Când aceasta se va termina, verificaţi în galerie dacă imaginile au fost adăugate corect.</li></ul>
EOT;

$lang_xp_publish_notes = <<<EOT
<h2>Note :</h2><ul><li>Odată ce procedura de încărcare începe, asistentul nu poate afişa nici un mesaj de eroare generat de galerie, motiv pentru care nu puteţi confirma succesul sau eşecul operaţiunii, decât în momentul în care Verificaţi galeria.</li>
<li> Dacă procedura de încărcare eşuează , activaţi modul &quot;Identificare erori&quot; în pagina de administrare Coppermine, încercaţi cu o singura imagine şi apoi Verificaţi mesajul de eroare în fişierul
EOT;

$lang_xp_publish_flood = <<<EOT
 care este localizat în directorul Coppermine pe server.</li><li>Pentru a evita <i>inundarea</i> galeriei cu imagini încărcate prin asistent, doar <b>administratorul galeriei</b> şi <b>utilizatorii care pot avea albume personale</b> pot utiliza această funcţie.</li></ul>
EOT;


$lang_xp_publish_php = array(
  'title' => 'Coppermine - XP Web Publishing Wizard', //cpg1.4
  'welcome' => 'Bine aţi venit <b>%s</b>,', //cpg1.4
  'need_login' => 'Trebuie să vă autentificaţi în pagina galeriei dumneavoastră utilizând navigatorul preferat,înainte de a utiliza acest asistent.<p/><p>Când va autentificaţi, nu uitaţi să selecţionaţi opţiunea <b>Memorează datele</b> dacă aceasta este prezentă.', //cpg1.4
  'no_alb' => 'Îmi pare rău,nu există nici un album în care aveţi permisiunea să încărcaţi imagini cu acest asistent.', //cpg1.4
  'upload' => 'Încărcaţi imagini într-un album existent', //cpg1.4
  'create_new' => 'Crează un album nou pentru imaginile mele', //cpg1.4
  'album' => 'Album', //cpg1.4
  'category' => 'Categorie', //cpg1.4
  'new_alb_created' => 'Noul album &quot;<b>%s</b>&quot; a fost creat.', //cpg1.4
  'continue' => 'Faceţi clic &quot;Next&quot; pentru a începe procedura de încărcare imagini.', //cpg1.4
  'link' => 'pe această adresă', //cpg1.4
);
}
?>

