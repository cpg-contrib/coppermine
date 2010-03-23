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
  Coppermine version: 1.4.27
  $HeadURL$
  $Revision$
  $Author$
  $Date$
**********************************************/

if (!defined('IN_COPPERMINE')) { die('Not in Coppermine...');}

// info about translators and translated language
$lang_translation_info = array(
  'lang_name_english' => 'Norwegian', //cpg1.4
  'lang_name_native' => 'Norsk', //cpg1.4
  'lang_country_code' => 'no', //cpg1.4
  'trans_name'=> 'johnwr',
  'trans_email' => 'johnwr_coppermine@responseweb.net',
  'trans_website' => '',
  'trans_date' => '2005-05-15',
);

$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('Bytes', 'KB', 'MB');

// Day of weeks and months
$lang_day_of_week = array('Søn', 'Man', 'Tir', 'Ons', 'Tor', 'Fre', 'Lør');
$lang_month = array('Jan', 'Feb', 'Mar', 'Apr', 'Mai', 'Jun', 'Jul', 'Aug', 'Sep', 'Okt', 'Nov', 'Des');

// Some common strings
$lang_yes = 'Ja';
$lang_no  = 'Nei';
$lang_back = 'TILBAKE';
$lang_continue = 'FORTSETT';
$lang_info = 'Informasjon';
$lang_error = 'Feil';
$lang_check_uncheck_all = 'merk/avmerk alle'; //cpg1.4

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$album_date_fmt =    '%d. %B, %Y';
$lastcom_date_fmt =  '%Y-%m-%d kl. %H:%M';
$lastup_date_fmt = '%d. %B, %Y';
$register_date_fmt = '%d. %B, %Y';
$lasthit_date_fmt = '%Y-%m-%d kl. %H:%M';
$comment_date_fmt =  '%Y-%m-%d kl. %H:%M';
$log_date_fmt = '%Y-%m-%d at %H:%M:%S'; //cpg 1.4

// For the word censor
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*');

$lang_meta_album_names = array(
  'random' => 'Tilfeldige filer',
  'lastup' => 'Siste filer',
  'lastalb'=> 'Sist oppdaterte album',
  'lastcom' => 'Siste kommentarer',
  'topn' => 'Mest sett',
  'toprated' => 'Beste karakter',
  'lasthits' => 'Siste visninger',
  'search' => 'Søkeresultat',
  'favpics'=> 'Favoritter',  //cpg1.4
);

$lang_errors = array(
  'access_denied' => 'Du har ikke tilgang til denne siden.',
  'perm_denied' => 'Du kan ikke utføre denne handlingen.',
  'param_missing' => 'Scriptet ble kalt uten nødvendige parametere.',
  'non_exist_ap' => 'Det valgte album/bilde eksisterer ikke!', //cpg1.3.0
  'quota_exceeded' => 'Diskkvoten din er oppbrukt<br /><br />Du har plass til [quota]K, dine filer bruker [space]K. Legger du inn flere filer overskrider du denne kvoten.', //cpg1.3.0
  'gd_file_type_err' => 'Albumet bruker GD Graphics- teknikk. Da er det kun tillatt å bruke JPEG eller PNG bilder.',
  'invalid_image' => 'Bildet du lastet opp er defekt eller støttes ikke av GD.',
  'resize_failed' => 'Kunne ikke forandre størrelsen på bildet eller opprette miniatyrbilde.',
  'no_img_to_display' => 'Ingen filer',
  'non_exist_cat' => 'Den valgte kategorien eksisterer ikke',
  'orphan_cat' => 'En kategori er -foreldreløs-. Oppdater i kategoriadministrasjonen.', //cpg1.3.0
  'directory_ro' => 'Mappen \'%s\' er skrivebeskyttet. Bildet kan ikke slettes.', //cpg1.3.0
  'non_exist_comment' => 'Den valgte kommentaren finnes ikke.',
  'pic_in_invalid_album' => 'Det finnes filer som er knyttet til et album som ikke eksisterer (%s)!?', //cpg1.3.0
  'banned' => 'Du har mistet retten til å bruke dette internettstedet.',
  'not_with_udb' => 'Funksjonen er deaktivert fordi Coppermine kjører sammen med et diskusjonsforum.',
  'offline_title' => 'Utilgjengelig', //cpg1.3.0
  'offline_text' => 'Galleriet er midlertidig utilgjengelig - prøv igjen senere', //cpg1.3.0
  'ecards_empty' => 'Det er ingen ekort å vise. Sjekk at ekortlogging er aktivert!', //cpg1.3.0
  'action_failed' => 'Handling feilet.  Coppermine kan ikke utføre denne handlingen.', //cpg1.3.0
  'no_zip' => 'Nødvendige biblioteker for å behandle ZIPfiler mangler.  Kontakt din administrator.', //cpg1.3.0
  'zip_type' => 'Du har ikke rettigheter til å laste opp ZIP filer.', //cpg1.3.0
  'database_query' => 'Det oppsto en feil under spørring i databasen', //cpg1.4
  'register_globals_on' => 'The PHP setting register_globals is enabled on your server, which is a bad idea in terms of security. It\'s strongly recommended to turn it off. [<a href="http://forum.coppermine-gallery.net/index.php/topic,59569.0.html" rel="external" class="external">more</a>]',
);

$lang_bbcode_help_title = 'Hjelp med bbkoder'; //cpg1.4
$lang_bbcode_help = 'Du kan legge til klikkbare linker og enkel tekstformattering her ved å bruke bbkoder: <li>[b]Uthevet[/b] =&gt; <b>Uthevet</b></li><li>[i]Kursiv[/i] =&gt; <i>Kursiv</i></li><li>[url=http://yoursite.com/]Url Tekst[/url] =&gt; <a href="http://yoursite.com">Url Tekst</a></li><li>[email]user@domain.com[/email] =&gt; <a href="mailto:user@domain.com">user@domain.com</a></li><li>[color=red]Tekst[/color] =&gt; <span style="color:red">Tekst</span></li><li>[img]http://coppermine-gallery.net/demo/cpg14x/images/red.gif[/img] => <img src="../images/red.gif" border="0" alt="" /></li>'; //cpg1.4

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
  'home_title' => 'Gå til startsiden',
  'home_lnk' => 'Startside',
  'alb_list_title' => 'Gå til albumlisten',
  'alb_list_lnk' => 'Albumliste',
  'my_gal_title' => 'Gå til mitt personlige galleri',
  'my_gal_lnk' => 'Mitt galleri',
  'my_prof_title' => 'Gå til Min profil', //cpg1.4
  'my_prof_lnk' => 'Min profil',
  'adm_mode_title' => 'Bytt til adminmodus',
  'adm_mode_lnk' => 'Adminmodus',
  'usr_mode_title' => 'Bytt til brukermodus',
  'usr_mode_lnk' => 'Brukermodus',
  'upload_pic_title' => 'Last opp fil til et album',
  'upload_pic_lnk' => 'Last opp fil',
  'register_title' => 'Lag bruker',
  'register_lnk' => 'Registrer',
  'login_title' => 'Logg meg inn', //cpg1.4
  'login_lnk' => 'Logg inn',
  'logout_title' => 'Logg meg ut', //cpg1.4
  'logout_lnk' => 'Logg ut',
  'lastup_title' => 'Vis siste opplastninger', //cpg1.4
  'lastup_lnk' => 'Siste opplastninger',
  'lastcom_title' => 'Vis siste kommentarer', //cpg1.4
  'lastcom_lnk' => 'Siste kommentarer',
  'topn_title' => 'Vis mest sette filer', //cpg1.4
  'topn_lnk' => 'Mest sett',
  'toprated_title' => 'Vis beste karakterer', //cpg1.4
  'toprated_lnk' => 'Beste karakter',
  'search_title' => 'Søk i galleriet', //cpg1.4
  'search_lnk' => 'Søk',
  'fav_title' => 'Gå til Mine Favoritter', //cpg1.4
  'fav_lnk' => 'Mine Favoritter',
  'memberlist_title' => 'Vis Medlemsliste',
  'memberlist_lnk' => 'Medlemsliste',
  'faq_title' => 'Spørsmål og Svar om bildegalleriet &quot;Coppermine&quot;',
  'faq_lnk' => 'FAQ',
);

$lang_gallery_admin_menu = array(
  'upl_app_title' => 'Godkjenn nye opplastninger', //cpg1.4
  'upl_app_lnk' => 'Godkjenning av opplastninger',
  'admin_title' => 'Gå til konfigurasjon', //cpg1.4
  'admin_lnk' => 'Konfigurasjon', //cpg1.4
  'albums_title' => 'Gå til albumadministrasjon', //cpg1.4
  'albums_lnk' => 'Album',
  'categories_title' => 'Gå til kategoriadministrasjon', //cpg1.4
  'categories_lnk' => 'Kategorier',
  'users_title' => 'Gå til brukeradministrasjon', //cpg1.4
  'users_lnk' => 'Brukere',
  'groups_title' => 'Gå til gruppeadministrasjon', //cpg1.4
  'groups_lnk' => 'Grupper',
  'comments_title' => 'Godkjenn kommentarer', //cpg1.4
  'comments_lnk' => 'Kommentarer',
  'searchnew_title' => 'Gå til masseinnlegging av filer', //cpg1.4
  'searchnew_lnk' => 'Masseinnlegging',
  'util_title' => 'Gå til administrasjonsverktøy', //cpg1.4
  'util_lnk' => 'Administrasjonsverktøy',
  'key_title' => 'Gå til nøkkelordbok', //cpg1.4
  'key_lnk' => 'Nøkkelordbok', //cpg1.4
  'ban_title' => 'Gå til utviste brukere', //cpg1.4
  'ban_lnk' => 'Utvis brukere',
  'db_ecard_title' => 'Gå til administrasjon av ekort', //cpg1.4
  'db_ecard_lnk' => 'Vis ekort',
  'pictures_title' => 'Sorter mine bilder', //cpg1.4
  'pictures_lnk' => 'Sorter mine bilder', //cpg1.4
  'documentation_lnk' => 'Manual', //cpg1.4
  'documentation_title' => 'Coppermine dokumentasjon', //cpg1.4
);

$lang_user_admin_menu = array(
  'albmgr_title' => 'Opprett og ordne mine album', //cpg1.4
  'albmgr_lnk' => 'Opprett / ordne mine album',
  'modifyalb_title' => 'Gå til redigering av mine album',  //cpg1.4
  'modifyalb_lnk' => 'Rediger mine album',
  'my_prof_title' => 'Gå til min profil', //cpg1.4
  'my_prof_lnk' => 'Min profil',
);

$lang_cat_list = array(
  'category' => 'Kategori',
  'albums' => 'Album',
  'pictures' => 'Filer',
);

$lang_album_list = array(
  'album_on_page' => '%d album over %d side(r)',
);

$lang_thumb_view = array(
  'date' => 'DATO',
  //Sort by filename and title
  'name' => 'FILNAVN',
  'title' => 'TITTEL',
  'sort_da' => 'Sorter på dato i stigende rekkefølge',
  'sort_dd' => 'Sorter på dato i synkende rekkefølge',
  'sort_na' => 'Sorter på navn i stigende rekkefølge',
  'sort_nd' => 'Sorter på navn i synkende rekkefølge',
  'sort_ta' => 'Sorter på tittel i stigende rekkefølge',
  'sort_td' => 'Sorter på tittel i synkende rekkefølge',
  'position' => 'POSISJON', //cpg1.4
  'sort_pa' => 'Sorter på posisjon i stigende rekkefølge', //cpg1.4
  'sort_pd' => 'Sorter på posisjon i synkende rekkefølge', //cpg1.4
  'download_zip' => 'Last ned som Zipfil',
  'pic_on_page' => '%d filer over %d side(r)',
  'user_on_page' => '%d brukere over %d side(r)',
  'enter_alb_pass' => 'Skriv inn Albumpassord',
  'invalid_pass' => 'Ugyldig passord',
  'pass' => 'Passord', //cpg1.4
  'submit' => 'Submit' //cpg1.4
);

$lang_img_nav_bar = array(
  'thumb_title' => 'Tilbake til oversikt',
  'pic_info_title' => 'Vis/skjul filinformasjon',
  'slideshow_title' => 'Lysbildevisning',
  'ecard_title' => 'Send denne filen som et ekort',
  'ecard_disabled' => 'ekortfunksjonalitet er ikke tilgjengelig',
  'ecard_disabled_msg' => 'Du har ikke tilgang til å sende ekort', //js-alert
  'prev_title' => 'Se forrige fil',
  'next_title' => 'Se neste fil',
  'pic_pos' => 'FIL %s/%s',
  'report_title' => 'Rapporter denne filen til administrator', //cpg1.4
  'go_album_end' => 'Hopp til siste', //cpg1.4
  'go_album_start' => 'Tilbake til start', //cpg1.4
  'go_back_x_items' => 'gå tilbake %s filer', //cpg1.4
  'go_forward_x_items' => 'gå frem %s filer', //cpg1.4
);

$lang_rate_pic = array(
  'rate_this_pic' => 'Gi karakter på dette bildet ',
  'no_votes' => '(Ingen stemmer)',
  'rating' => '(Karakter : %s / 5 med %s stemmer)',
  'rubbish' => 'Søppel',
  'poor' => 'Dårlig',
  'fair' => 'Greit nok',
  'good' => 'Bra',
  'excellent' => 'Veldig bra',
  'great' => 'Topp',
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
  CRITICAL_ERROR => 'Kritisk feil',
  'file' => 'Fil: ',
  'line' => 'Linje: ',
);

$lang_display_thumbnails = array(
  'filename' => 'Filnavn=', //cpg1.4
  'filesize' => 'Filstørrelse=', //cpg1.4
  'dimensions' => 'Dimensjoner=', //cpg1.4
  'date_added' => 'Lagt inn dato=', //cpg1.4
);

$lang_get_pic_data = array(
  'n_comments' => '%s kommentarer',
  'n_views' => '%s visninger',
  'n_votes' => '(%s stemmer)',
);

$lang_cpg_debug_output = array(
  'debug_info' => 'Debuginformasjon',
  'select_all' => 'Velg alle',
  'copy_and_paste_instructions' => 'Dersom du skal be om hjelp på Coppermine support forumet må du kopiere denne teksten inn i meldingen din når det er forespurt, sammen med den eventuelle feilmeldingen. Vær oppmerksom på å eratatte eventuelle passord med *** først. <br /> Merk: Dette er kun for informasjon, og betyr ikke nødvendigvis at det er noe galt med galleriet ditt.', //cpg1.4
  'phpinfo' => 'vis phpinfo',
  'notices' => 'Notiser', //cpg1.4
);

$lang_language_selection = array(
  'reset_language' => 'Standard språk',
  'choose_language' => 'Velg ditt språk',
);

$lang_theme_selection = array(
  'reset_theme' => 'Standard utseende',
  'choose_theme' => 'Velg utseende',
);

$lang_version_alert = array(
  'version_alert' => 'Ikke supportert versjon!', //cpg1.4
  'no_stable_version' => 'Du kjører Coppermine  %s (%s) som er beregnet på svært erfarne brukere - denne versjonen kommer uten noen form for support eller garantier. Bruk den på egen risiko, eller nedgrader til siste stabile versjon dersom du trenger support!', //cpg1.4
  'gallery_offline' => 'Galleriet er midlertidig ute av drift, og vil kun være tilgjengelig for administratorer. Ikke glem å sette det i drift igjen etter at du er ferdig med vedlikeholdet.', //cpg1.4
);

$lang_create_tabs = array(
  'previous' => 'forrige', //cpg1.4
  'next' => 'neste', //cpg1.4
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
  'error_wakeup' => "Kunne ikke slå på plugin '%s'", //cpg1.4
  'error_install' => "Kunne ikke installere plugin '%s'", //cpg1.4
  'error_uninstall' => "Kunne ikke avinstallere plugin '%s'", //cpg1.4
  'error_sleep' => "Kunne ikke slå av plugin '%s'<br />", //cpg1.4
);

// ------------------------------------------------------------------------- //
// File include/smilies.inc.php
// ------------------------------------------------------------------------- //

if (defined('SMILIES_PHP')) $lang_smilies_inc_php = array(
  'Exclamation' => 'Utrop',
  'Question' => 'Spørsmål',
  'Very Happy' => 'Veldig glad',
  'Smile' => 'Smil',
  'Sad' => 'Trist',
  'Surprised' => 'Overrasket',
  'Shocked' => 'Sjokkert',
  'Confused' => 'Forvirret',
  'Cool' => 'Kult',
  'Laughing' => 'Ler',
  'Mad' => 'Sint',
  'Razz' => 'Fleiper',
  'Embarassed' => 'Flau',
  'Crying or Very sad' => 'Gråter eller veldig trist',
  'Evil or Very Mad' => 'Ond eller veldig sint',
  'Twisted Evil' => 'Ond',
  'Rolling Eyes' => 'Rullende øyne',
  'Wink' => 'Blunker lurt',
  'Idea' => 'Ide',
  'Arrow' => 'Pil',
  'Neutral' => 'Nøytral',
  'Mr. Green' => 'Herr Grønn',
);

// ------------------------------------------------------------------------- //
// File addpic.php
// ------------------------------------------------------------------------- //

// void

// ------------------------------------------------------------------------- //
// File mode.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('MODE_PHP')) $lang_mode_php = array(
  0 => 'Forlater administrasjonsmodus...',
  1 => 'Går inn i administrasjonsmodus...',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
  'alb_need_name' => 'Album må ha et navn !', //js-alert
  'confirm_modifs' => 'Er du sikker på at du vil lagre disse endringene ?', //js-alert
  'no_change' => 'Du gjorde ingen endringer !', //js-alert
  'new_album' => 'Nytt album',
  'confirm_delete1' => 'Er du sikker på at du vil slette dette albumet?', //js-alert
  'confirm_delete2' => '\nAlle filer og kommentarer vil forsvinne!', //js-alert
  'select_first' => 'Velg et album først', //js-alert
  'alb_mrg' => 'Albumadministrasjon',
  'my_gallery' => '* Mitt galleri *',
  'no_category' => '* Ingen kategori *',
  'delete' => 'Slett',
  'new' => 'Ny',
  'apply_modifs' => 'Lagre endringer',
  'select_category' => 'Velg kategori',
);

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) $lang_banning_php = array(
  'title' => 'Utvis brukere', //cpg1.4
  'user_name' => 'Brukernavn', //cpg1.4
  'ip_address' => 'IP-adresse', //cpg1.4
  'expiry' => 'Utløper (blank er permanent)', //cpg1.4
  'edit_ban' => 'Lagre endringer', //cpg1.4
  'delete_ban' => 'Slett', //cpg1.4
  'add_new' => 'Ny utvisning', //cpg1.4
  'add_ban' => 'Utvis bruker', //cpg1.4
  'error_user' => 'Finner ikke bruker', //cpg1.4
  'error_specify' => 'Du må spesifisere enten et brukernavn eller en IP-adresse', //cpg1.4
  'error_ban_id' => 'Ugyldig utvisningsID!', //cpg1.4
  'error_admin_ban' => 'Du kan ikke utvise deg selv!', //cpg1.4
  'error_server_ban' => 'Tenkte du å utvise din egen server? Tsk tsk...', //cpg1.4
  'error_ip_forbidden' => 'Du kan ikke utvise denne IP - den er ikkerutbar (privat) uansett!<br />Dersom du vil tillate utvisning av private adresser, sett dette i <a href="admin.php">Konfigurasjon</a> (dette er bare aktuelt om Coppermine kjører i et LAN).', //cpg1.4
  'lookup_ip' => 'Slå opp en IP-adresse', //cpg1.4
  'submit' => 'OK!', //cpg1.4
  'select_date' => 'velg dato', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File bridgemgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('BRIDGEMGR_PHP')) $lang_bridgemgr_php = array(
  'title' => 'Broveiviser',
  'warning' => 'Advarsel: ved å bruke denne veiviseren må du være inneforstått med at sensitiv data blir sendt ved html skjema. Kjør den kun på din egen PC (ikke på en offentlige klienter som Internettkafeer o.l.), og forsikre deg om at nettleserens cache er tømt etterpå. Ellers kan andre få tilgang til dine data!',
  'back' => 'tilbake',
  'next' => 'neste',
  'start_wizard' => 'Start Broveiviser',
  'finish' => 'Avslutt',
  'hide_unused_fields' => 'skjul ubrukte felter (anbefalt)',
  'clear_unused_db_fields' => 'fjern ugyldige data fra databasen (anbefalt)',
  'custom_bridge_file' => 'Navn på din spesialtilpassede brofil (dersom navnet er <i>myfile.inc.php</i>, skriv <i>myfile</i> i dette feltet)',
  'no_action_needed' => 'Ingen handling er påkrevd i dette steg. Klikk \'neste\' for å fortsette.',
  'reset_to_default' => 'Reset til standardverdi',
  'choose_bbs_app' => 'velg program coppermine skal linkes til',
  'support_url' => 'Gå hit for hjelp med dette programmet',
  'settings_path' => 'filsti(er) brukt av av ditt BBSprogram',
  'database_connection' => 'databasekobling',
  'database_tables' => 'databasetabeller',
  'bbs_groups' => 'BBSgrupper',
  'license_number' => 'Lisensnummer',
  'license_number_explanation' => 'Skriv ditt lisensnummer (om aktuelt)',
  'db_database_name' => 'Databasenavn',
  'db_database_name_explanation' => 'Skriv navnet på databasen ditt BBSprogram bruker',
  'db_hostname' => 'Databasemaskin',
  'db_hostname_explanation' => 'Maskinnavn der din mySQLdatabase kjører, som regel &quot;localhost&quot;',
  'db_username' => 'Databasebrukernavn',
  'db_username_explanation' => 'mySQLbrukernavn å bruke for kommunikasjon med BBS',
  'db_password' => 'Databasepassord',
  'db_password_explanation' => 'Passord til denne mySQLbrukeren',
  'full_forum_url' => 'Forum URL',
  'full_forum_url_explanation' => 'Full URL til ditt BBSprogram (inkludert http://, f.eks. http://www.yourdomain.tld/forum)',
  'relative_path_of_forum_from_webroot' => 'Relativ forumsti',
  'relative_path_of_forum_from_webroot_explanation' => 'Relativ sti til ditt BBSprogram fra din webroot (Eksempel: dersom din BBS er på http://www.yourdomain.tld/forum/, skriv &quot;/forum/&quot; her)',
  'relative_path_to_config_file' => 'Relativ sti til din BBS\'s konfigurasjonsfil',
  'relative_path_to_config_file_explanation' => 'Relativ sti til din BBS, sett fra din Copperminemappe (f.eks. &quot;../forum/&quot; dersom din BBS er på http://www.yourdomain.tld/forum/ og Coppermine er på http://www.yourdomain.tld/gallery/)',
  'cookie_prefix' => 'Cookie prefix',
  'cookie_prefix_explanation' => 'dette må være navnet på cookien til din BBS',
  'table_prefix' => 'Tabellprefix',
  'table_prefix_explanation' => 'Må stemme med prefixet du valgte for din BBS når du installerte det.',
  'user_table' => 'Brukertabell',
  'user_table_explanation' => '(som regel standardverdi, om du ikke har gjort endringer fra standard på din BBSinstallasjon)',
  'session_table' => 'Sesjontabell',
  'session_table_explanation' => '(som regel standardverdi, om du ikke har gjort endringer fra standard på din BBSinstallasjon)',
  'group_table' => 'Gruppetabell',
  'group_table_explanation' => '(som regel standardverdi, om du ikke har gjort endringer fra standard på din BBSinstallasjon)',
  'group_relation_table' => 'Grupperelasjonstabell',
  'group_relation_table_explanation' => '(som regel standardverdi, om du ikke har gjort endringer fra standard på din BBSinstallasjon)',
  'group_mapping_table' => 'Gruppemappingtabell',
  'group_mapping_table_explanation' => '(som regel standardverdi, om du ikke har gjort endringer fra standard på din BBSinstallasjon)',
  'use_standard_groups' => 'Bruk standard BBS brukergrupper',
  'use_standard_groups_explanation' => 'Bruk standard (innebygde) brukergrupper (anbefalt). Dette vil gjøre alle egendefinerte brukergrupper satt på denne siden ugyldige. Slå kun av dette om du VIRKELIG vet hva du gjør!',
  'validating_group' => 'Godkjenningsgruppe',
  'validating_group_explanation' => 'GruppeID fra din BBS der brukerkontoer trenger godkjenning (som regel standardverdi, om du ikke har gjort endringer fra standard på din BBSinstallasjon)',
  'guest_group' => 'Gjestegruppe',
  'guest_group_explanation' => 'GruppeID fra din BBS for gjester (anonyme brukere) (som regel standardverdi, gjør kun endringer om du vet hva du gjør)',
  'member_group' => 'Medlemsgruppe',
  'member_group_explanation' => 'GruppeID fra din BBS for &quot;vanlige&quot; brukerkontoer (som regel standardverdi, gjør kun endringer om du vet hva du gjør)',
  'admin_group' => 'Admingruppe',
  'admin_group_explanation' => 'GruppeID fra din BBS for administratorer (som regel standardverdi, gjør kun endringer om du vet hva du gjør)',
  'banned_group' => 'Utestengtgruppe',
  'banned_group_explanation' => 'GruppeID fra din BBS for utestengte brukere (som regel standardverdi, gjør kun endringer om du vet hva du gjør)',
  'global_moderators_group' => 'Global moderatorgruppe',
  'global_moderators_group_explanation' => 'GruppeID fra din BBS for globale moderatorer (som regel standardverdi, gjør kun endringer om du vet hva du gjør)',
  'special_settings' => 'BBSspesifikke innstillinger',
  'logout_flag' => 'phpBB versjon (utloggingsflagg)',
  'logout_flag_explanation' => 'Hva er versjonen av din BBS (denne innstillingen spesifiserer hvordan utlogging skal håndteres)',
  'use_post_based_groups' => 'Bruk meldingsbaserte grupper?',
  'logout_flag_yes' => '2.0.5 eller nyere',
  'logout_flag_no' => '2.0.4 eller eldre',
  'use_post_based_groups_explanation' => 'Skal gruppene fra BBSprogrammet som er definert av antall meldinger som tas med i beregningen (allows granular permission administration) eller bare standardgruppene (gjør administrasjon lettere, anbefalt). Du kan forandre denne innstillingen senere.',
  'use_post_based_groups_yes' => 'ja',
  'use_post_based_groups_no' => 'nei',
  'error_title' => 'Du må rette opp disse feilene før du kan fortsette. Gå tilbake til forrige side.',
  'error_specify_bbs' => 'Du må spesifisere hvilket progrm du vil linke din Coppermineinstallasjon med.',
  'error_no_blank_name' => 'Du må spesifisere et navn på den spesiallagde brofil.',
  'error_no_special_chars' => 'Navnet på brofilen kan ikke inneholde spesialtegn untatt underscore (_) og dash (-)!',
  'error_bridge_file_not_exist' => 'Brofilen  %s finnes ikke på serveren. Sjekk om du har lastet den opp.',
  'finalize' => 'Slå på/av integrasjonen med BBSprogrammet',
  'finalize_explanation' => 'Så langt har innstillingene dine blitt lagret i databasen, men integrasjon med BBSprogrammet har ikke blitt slått på. Du kan slå integrasjonen på/av senere. Husk adminbruker og passord fra Coppermineinstallasjonen, du kan trenge det senere for å gjøre endringer. Dersom noe går galt, gå til %s og slå av integrasjonen med BBSprogrammet der, med din Coppermininstallasjons adminbruker (som regel den du satte opp under installasjonen av Coppermine).',
  'your_bridge_settings' => 'Dine integrasjonsinnstillinger',
  'title_enable' => 'Slå på integrasjon med %s',
  'bridge_enable_yes' => 'Slå på',
  'bridge_enable_no' => 'Slå av',
  'error_must_not_be_empty' => 'må spesifiseres',
  'error_either_be' => 'må enten være %s eller %s',
  'error_folder_not_exist' => '%s finnes ikke. Rett opp verdiene du skrev for %s',
  'error_cookie_not_readible' => 'Coppermine kan ikke lese en cookie med navn %s. Rett opp verdien du skrev for %s, eller gå til administrasjonspanelet til din BBS og sjekk at stien til cookieen er lesbar for coppermine.',
  'error_mandatory_field_empty' => 'Du kan ikke la feltet %s være blankt - fyll inn den riktige verdien.',
  'error_no_trailing_slash' => 'Det kan ikke være en slash i enden av feltet %s.',
  'error_trailing_slash' => 'Det må være en slash i enden av feltet %s.',
  'error_db_connect' => 'Kunne ikke koble til mySQLdatabasen med dine data. Dette er hva mySQL svarte:',
  'error_db_name' => 'Selv om Coppermine kunne opprette en kobling, ble ikke databasen %s funnet. Sjekk at du har skrevet %s riktig. Dette er hva mySQL svarte:',
  'error_prefix_and_table' => '%s og ',
  'error_db_table' => 'Kunne ikke finne tabellen %s. Sjekk at du har skrevet %s riktig.',
  'recovery_title' => 'Bridge Manager: emergency recovery',
  'recovery_explanation' => 'Dersom du kom hit for å administrere integrasjonen mellom ditt Copperminegalleri og din BBS, må du først logge inn som admin. Dersom du ikke kan logge inn fordi integrasjonen ikke virker som forventet, kan du slå av integrasjonen her. Du vil ikke bli logget inn ved å skrive brukernavn og passord her, men integrasjonen vil bli slått av. Se dokumentasjonen for detaljer.',
  'username' => 'Brukernavn',
  'password' => 'Passord',
  'disable_submit' => 'submit',
  'recovery_success_title' => 'Autorisasjon vellykket',
  'recovery_success_content' => 'Du har slått integrasjonen mellom din Coppermineinstallasjon og ditt BBSprogram. Din Coppermineinstallasjon kjører nå alene.',
  'recovery_success_advice_login' => 'Logg inn som admin for å endre integrasjonsinstillinger og/eller slå integrasjonen på igjen.',
  'goto_login' => 'Gå til innloggingssiden',
  'goto_bridgemgr' => 'Gå til bridge manager',
  'recovery_failure_title' => 'Autorisasjon mislykket',
  'recovery_failure_content' => 'Du skrev feil brukernavn og/eller passord. Du må bruke med adminkontoen fra Coppermine (som regel kontoen du satte opp under installeringen av Coppermine).',
  'try_again' => 'prøv igjen',
  'recovery_wait_title' => 'For kort tidsintervall',
  'recovery_wait_content' => 'Av sikkerhetsgrunner tillates ikke dette skriptet kjørt i for korte tidsintervaller, derfor må du vente litt før du kan prøve igjen.',
  'wait' => 'vent',
  'create_redir_file' => 'Lag omdirigeringsfil (anbefalt)',
  'create_redir_file_explanation' => 'For å omdirigere brukere tilbake til Coppermine med en gang de har logget inn på din BBS, må du lage en omdirigeringsfil i din BBSmappe. Når dette alternativet er valgt , vil denne filen bli forsøkt lagd for deg, eller gi deg kode klar til å kopiere inn i en slik fil manuelt.',
  'browse' => 'utforsk',
);

// ------------------------------------------------------------------------- //
// File calendar.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('CALENDAR_PHP')) $lang_calendar_php = array(
  'title' => 'Kalender', //cpg1.4
  'close' => 'avslutt', //cpg1.4
  'clear_date' => 'fjern dato', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
  'miss_param' => 'Nødvendige parametere for \'%s\'operasjonen manglet!',
  'unknown_cat' => 'Den valgte kategorien eksisterer ikke i databasen!',
  'usergal_cat_ro' => 'Brukergalleri kategorien kan ikke slettes!',
  'manage_cat' => 'Administrer kategorier',
  'confirm_delete' => 'Er du sikker på at du ønsker og SLETTE denne kategorien?', //js-alert
  'category' => 'Kategori',
  'operations' => 'Handling',
  'move_into' => 'Flytt til',
  'update_create' => 'Oppdater/opprett kategori',
  'parent_cat' => 'Overkategori',
  'cat_title' => 'Kategoritittel',
  'cat_thumb' => 'Kategoribilde', //cpg1.3.0 // Translatorcomment: There is (afaik) no good translation of "Thumbnail" in Norwegian
  'cat_desc' => 'Kategoribeskrivelse',
  'categories_alpha_sort' => 'Sorter kategorier alfabetisk (istedenfor selvvalgt sorteringsrekkefølge)', //cpg1.4
  'save_cfg' => 'Lagre konfigurasjon', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File admin.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('ADMIN_PHP')) $lang_admin_php = array(
  'title' => 'Gallerikonfigurasjon', //cpg1.4
  'manage_exif' => 'Administrer exif visning', //cpg1.4
  'manage_plugins' => 'Administrer plugins', //cpg1.4
  'manage_keyword' => 'Administrer nøkkelord', //cpg1.4
  'restore_cfg' => 'Tilbakestill til fabrikkinstillinger',
  'save_cfg' => 'Lagre ny konfigurasjon',
  'notes' => 'Notater',
  'info' => 'Informasjon',
  'upd_success' => 'Konfigurasjon av Coppermine oppdatert',
  'restore_success' => 'Tilbakestilt til Coppermine fabrikkinstillinger',
  'name_a' => 'Navn i stigende rekkefølge',
  'name_d' => 'Navn i synkende rekkefølge',
  'title_a' => 'Tittel i stigende rekkefølge',
  'title_d' => 'Tittel i synkende rekkefølge',
  'date_a' => 'Dato i stigende rekkefølge',
  'date_d' => 'Dato i synkende rekkefølge',
  'pos_a' => 'Posisjon i stigende rekkefølge', //cpg1.4
  'pos_d' => 'Posisjon i synkende rekkefølge', //cpg1.4
  'th_any' => 'Max Aspect',
  'th_ht' => 'Høyde',
  'th_wd' => 'Bredde',
  'label' => 'merkelapp',
  'item' => 'enhet',
  'debug_everyone' => 'Alle',
  'debug_admin' => 'Kun admin',
  'no_logs'=> 'Av', //cpg1.4
  'log_normal'=> 'Normal', //cpg1.4
  'log_all' => 'Alel', //cpg1.4
  'view_logs' => 'Se logger', //cpg1.4
  'click_expand' => 'klikk på seksjonsnavnet for å folde ut', //cpg1.4
  'expand_all' => 'Fold ut alle', //cpg1.4
  'notice1' => '(*) Disse instillingene må ikke endres om du allerede har filer i din database.', //cpg1.4 - (relocated)
  'notice2' => '(**) Endring av denne instillingen affekterer kun filer som blir lagt til etter dette, derfor er det anbefalt å ikke endre dette om du allerede har filer i din database. Du kan imidlertid endre eksisterende filer med &quot;<a href="util.php">admin tools</a> (resize pictures)&quot; fra adminmenyen.', //cpg1.4 - (relocated)
  'notice3' => '(***) Alle loggfiler blir skrevet på engelsk.', //cpg1.4 - (relocated)
  'bbs_disabled' => 'Denne funksjonen er ikke aktiv ved integrasjon med BBS', //cpg1.4
  'auto_resize_everyone' => 'Alle', //cpg1.4
  'auto_resize_user' => 'Kun bruker', //cpg1.4
  'ascending' => 'i stigende rekkefølge', //cpg1.4
  'descending' => 'i synkende rekkefølge', //cpg1.4
);

if (defined('ADMIN_PHP')) $lang_admin_data = array(
  'Hovedinstillinger',
  array('Gallerinavn', 'gallery_name', 0, 'f=index.htm&amp;as=admin_general_name&amp;ae=admin_general_name_end'), //cpg1.4
  array('Galleribeskrivelse', 'gallery_description', 0, 'f=index.htm&amp;as=admin_general_description&amp;ae=admin_general_description_end'), //cpg1.4
  array('Epost til Galleriadministrator', 'gallery_admin_email', 0, 'f=index.htm&amp;as=admin_general_email&amp;ae=admin_general_email_end'), //cpg1.4
  array('URL til din your Coppermine gallerimappe (uten \'index.php\' eller tilsvarende til slutt)', 'ecards_more_pic_target', 0, 'f=index.htm&amp;as=admin_general_coppermine-url&amp;ae=admin_general_coppermine-url_end'), //cpg1.4
  array('URL til din hjemmeside', 'home_target', 0, 'f=index.htm&amp;as=admin_general_home-url&amp;ae=admin_general_home-url_end'), //cpg1.4
  array('Tillat ZIP-nedlastning av favoritter', 'enable_zipdownload', 1, 'f=index.htm&amp;as=admin_general_zip-download&amp;ae=admin_general_zip-download_end'), //cpg1.4
  array('Timezoneforskjell relativt i forhold til GMT (current time: ' . localised_date(-1, $comment_date_fmt) . ')','time_offset',0, 'f=index.htm&amp;as=admin_general_time-offset&amp;ae=admin_general_time-offset_end&amp;top=1'), //cpg1.4
  array('Slå på krypterte passord (kan ikke slås av igjen)','enable_encrypted_passwords',1, 'f=index.htm&amp;as=admin_general_encrypt_password_start&amp;ae=admin_general_encrypt_password_end&amp;top=1'), // cpg 1.4
  array('Slå på hjelpeikon (denne hjelpen er kun tilgjengelig på engelsk)','enable_help',9, 'f=index.htm&amp;as=admin_general_help&amp;ae=admin_general_help_end'), //cpg1.4
  array('Slå på klikkbare nøkkelord i søk','clickable_keyword_search',14, 'f=index.htm&amp;as=admin_general_keywords_start&amp;ae=admin_general_keywords_end'), //cpg1.4
  array('Slå på plugins', 'enable_plugins', 12, 'f=index.htm&amp;as=admin_general_enable-plugins&amp;ae=admin_general_enable-plugins_end'),  //cpg1.4
  array('Tillat utvisning av ikke-rutbare (private) IPadresser', 'ban_private_ip', 1,  'f=index.htm&amp;as=admin_general_private-ip&amp;ae=admin_general_private-ip_end'), //cpg1.4
  array('Browsable batch-add interface', 'browse_batch_add', 1, 'f=index.htm&amp;as=admin_general_browsable_batch_add&amp;ae=admin_general_browsable_batch_add_end'), //cpg1.4

  'Språk &amp; tegnsettinstillinger',
  array('Språk', 'lang', 5, 'f=index.htm&amp;as=admin_language_language&amp;ae=admin_language_language_end'), //cpg1.4
  array('Fall tilbake til Engelsk hvis oversettelse ikke finnes?', 'language_fallback', 1, 'f=index.htm&amp;as=admin_language_fallback&amp;ae=admin_language_fallback_end'), //cpg1.4
  array('Tegnsett', 'charset', 4, 'f=index.htm&amp;as=admin_language_charset&amp;ae=admin_language_charset_end'), //cpg1.4
  array('Vis språkliste', 'language_list', 1, 'f=index.htm&amp;as=admin_language_list&amp;ae=admin_language_list_end'), //cpg1.4
  array('Vis språkflagg', 'language_flags', 8, 'f=index.htm&amp;as=admin_language_flags&amp;ae=admin_language_flags_end&amp;top=1'), //cpg1.4
  array('Vis &quot;tilbakestill&quot; i språkvalg', 'language_reset', 1, 'f=index.htm&amp;as=admin_language_reset&amp;ae=admin_language_reset_end&amp;top=1'), //cpg1.4
  //array('Vis forrige/neste på sider med arkfaner', 'previous_next_tab', 1), //cpg1.4

  'Utseende/stil-instillinger',
  array('Utseende / stil', 'theme', 6, 'f=index.htm&amp;as=admin_theme_theme&amp;ae=admin_theme_theme_end'), //cpg1.4
  array('Vis utseendeliste', 'theme_list', 1, 'f=index.htm&amp;as=admin_theme_theme_list&amp;ae=admin_theme_theme_list_end'), //cpg1.4
  array('Vis &quot;tilbakestill&quot; i utseendevalg', 'theme_reset', 1, 'f=index.htm&amp;as=admin_theme_theme_reset&amp;ae=admin_theme_theme_reset_end'), //cpg1.4
  array('Vis FAQ', 'display_faq', 1, 'f=index.htm&amp;as=admin_theme_faq&amp;ae=admin_theme_faq_end'), //cpg1.4
  array('Egendefinert menylinknavn', 'custom_lnk_name', 0,'f=index.htm&amp;as=admin_theme_custom_lnk_name&amp;ae=admin_theme_custom_lnk_name_end'), //cpg1.4
  array('Egendefinert menylinkURL', 'custom_lnk_url', 0,'f=index.htm&amp;as=admin_language_custom_lnk_url&amp;ae=admin_language_custom_lnk_url_end'), //cpg1.4
  array('Vis bbkode hjelp', 'show_bbcode_help', 1, 'f=index.htm&amp;as=admin_theme_bbcode&amp;ae=admin_theme_bbcode_end&amp;top=1'), //cpg1.4
  array('Vis vanity block på utseender som er definert som samsvarende med XHTML og CSS standardene','vanity_block',1, 'f=index.htm&amp;as=vanity_block&amp;ae=vanity_block_end'), //cpg1.4
  array('Sti til egendefinert topptekstfil', 'custom_header_path', 0, 'f=index.htm&amp;as=admin_theme_include_path_start&amp;ae=admin_theme_include_path_end'), //cpg1.4
  array('Sti til egendefinert bunntekstfil', 'custom_footer_path', 0, 'f=index.htm&amp;as=admin_theme_include_path_start&amp;ae=admin_theme_include_path_end'), //cpg1.4

  'Albumlistevisning',
  array('Bredde på hovedtabell (piksler eller %)', 'main_table_width', 0, 'f=index.htm&amp;as=admin_album_table-width&amp;ae=admin_album_table-width_end'), //cpg1.4
  array('Antall kategorinivå å vise', 'subcat_level', 0, 'f=index.htm&amp;as=admin_album_category-levels&amp;ae=admin_album_category-levels_end'), //cpg1.4
  array('Antall album å vise', 'albums_per_page', 0, 'f=index.htm&amp;as=admin_album_number&amp;ae=admin_album_number_end'), //cpg1.4
  array('Antall kolonner i albumlisten', 'album_list_cols', 0, 'f=index.htm&amp;as=admin_album_columns&amp;ae=admin_album_columns_end'), //cpg1.4
  array('Størrelse på miniatyrbilder i piksler', 'alb_list_thumb_size', 0, 'f=index.htm&amp;as=admin_album_thumbnail-size&amp;ae=admin_album_thumbnail-size_end'), //cpg1.4
  array('Innhold på hovedsiden', 'main_page_layout', 0, 'f=index.htm&amp;as=admin_album_list_content&amp;ae=admin_album_list_content_end'), //cpg1.4
  array('Vis miniatyrbilder til album på første nivå i kategorier','first_level',1, 'f=index.htm&amp;as=admin_album_first-level_thumbs&amp;ae=admin_album_first-level_thumbs_end'), //cpg1.4
  array('Sorter kategorier alfabetisk (istedet for egendefinert sortering)','categories_alpha_sort',1, 'f=index.htm&amp;as=admin_album_list_alphasort_start&amp;ae=admin_album_list_alphasort_end'), //cpg1.4
  array('Vis antall linkede filer','link_pic_count',1, 'f=index.htm&amp;as=admin_album_linked_files_start&amp;ae=admin_album_linked_files_end'), //cpg1.4

  'Miniatyrbildevisning',
  array('Antall kolonner på miniatyrbildeside', 'thumbcols', 0, 'f=index.htm&amp;as=admin_thumbnail_columns&amp;ae=admin_thumbnail_columns_end'), //cpg1.4
  array('Antall rader på miniatyrbildeside', 'thumbrows', 0, 'f=index.htm&amp;as=admin_thumbnail_rows&amp;ae=admin_thumbnail_rows_end'), //cpg1.4
  array('Maksimalt antall arkfaner å vise', 'max_tabs', 10, 'f=index.htm&amp;as=admin_thumbnail_tabs&amp;ae=admin_thumbnail_tabs_end'), //cpg1.4
  array('Vis filbeskrivelse (i tillegg til tittel) under miniatyrbilde', 'caption_in_thumbview', 1, 'f=index.htm&amp;as=admin_thumbnail_display_caption&amp;ae=admin_thumbnail_display_caption_end'), //cpg1.4
  array('Vis antall visninger under miniatyrbilde', 'views_in_thumbview', 1, 'f=index.htm&amp;as=admin_thumbnail_display_views&amp;ae=admin_thumbnail_display_views_end'), //cpg1.4
  array('Vis antall kommentarer under miniatyrbilde', 'display_comment_count', 1, 'f=index.htm&amp;as=admin_thumbnail_display_comments&amp;ae=admin_thumbnail_display_comments_end'), //cpg1.4
  array('Vis navn på opplaster under miniatyrbilde', 'display_uploader', 1, 'f=index.htm&amp;as=admin_thumbnail_display_uploader&amp;ae=admin_thumbnail_display_uploader_end'), //cpg1.4
  //array('Vis navn på administratoropplaster under miniatyrbilde', 'display_admin_uploader', 1, 'f=index.htm&amp;as=admin_thumbnail_display_admin_uploader&amp;ae=admin_thumbnail_display_admin_uploader_end'), //cpg1.4
  array('Vis filnavn under miniatyrbilde', 'display_filename', 1, 'f=index.htm&amp;as=admin_thumbnail_display_filename&amp;ae=admin_thumbnail_display_filename_end'), //cpg1.4
  //array('Vis albumbeskrivelse', 'alb_desc_thumb', 1, 'f=index.htm&amp;as=admin_thumbnail_display_description&amp;ae=admin_thumbnail_display_description_end'), //cpg1.4
  array('Standard sorteringsrekkefølge for filer', 'default_sort_order', 3, 'f=index.htm&amp;as=admin_thumbnail_default_sortorder&amp;ae=admin_thumbnail_default_sortorder_end'), //cpg1.4
  array('Minimum antall stemmer før en fil kommer med i \'Beste karakter\'listen', 'min_votes_for_rating', 0, 'f=index.htm&amp;as=admin_thumbnail_minimum_votes&amp;ae=admin_thumbnail_minimum_votes_end'), //cpg1.4

  'Bildevisning', //cpg1.4
  array('Bredde på tabellen ved filvisning (piksler eller %)', 'picture_table_width', 0, 'f=index.htm&amp;as=admin_image_comment_table-width&amp;ae=admin_image_comment_table-width_end'), //cpg1.4
  array('Filinformasjon vises som standard', 'display_pic_info', 1, 'f=index.htm&amp;as=admin_image_comment_info_visible&amp;ae=admin_image_comment_info_visible_end'), //cpg1.4
  array('Maksimal lengde for en bildebeskrivelse', 'max_img_desc_length', 0, 'f=index.htm&amp;as=admin_image_comment_descr_length&amp;ae=admin_image_comment_descr_length_end'), //cpg1.4
  array('Maksimalt antall tegn i et ord', 'max_com_wlength', 0, 'f=index.htm&amp;as=admin_image_comment_chars_per_word&amp;ae=admin_image_comment_chars_per_word_end'), //cpg1.4
  array('Vis filmsekvens', 'display_film_strip', 1, 'f=index.htm&amp;as=admin_image_comment_filmstrip_toggle&amp;ae=admin_image_comment_filmstrip_toggle_end'), //cpg1.4
  array('Vis filnavn under miniatyrbilde til filmsekvens', 'display_film_strip_filename', 1, 'f=index.htm&amp;as=admin_image_comment_display_film_strip_filename&amp;ae=admin_image_comment_display_film_strip_filename_end'), //cpg1.4
  array('Antall deler i filmsekvens', 'max_film_strip_items', 0, 'f=index.htm&amp;as=admin_image_comment_filmstrip_number&amp;ae=admin_image_comment_filmstrip_number_end'), //cpg1.4
  array('Intervall i millisekunder for lysbildevisning (1 sekund = 1000 millisekunder)', 'slideshow_interval', 0, 'f=index.htm&amp;as=admin_image_comment_slideshow_interval&amp;ae=admin_image_comment_slideshow_interval_end'), //cpg1.4

  'Kommentarinstillinger', //cpg1.4
  array('Filtrer ufine ord i kommentarer', 'filter_bad_words', 1, 'f=index.htm&amp;as=admin_image_comment_bad_words&amp;ae=admin_image_comment_bad_words_end'), //cpg1.4
  array('Tillat smilefjes i kommentarer', 'enable_smilies', 1, 'f=index.htm&amp;as=admin_image_comment_smilies&amp;ae=admin_image_comment_smilies_end'), //cpg1.4
  array('Tillat flere etterfølgende kommentarer på en fil fra samme bruker (disable flood protection)', 'disable_comment_flood_protect', 1, 'f=index.htm&amp;as=admin_image_comment_flood&amp;ae=admin_image_comment_flood_end'), //cpg1.4
  array('Maksimalt antall linjer i en kommentar', 'max_com_lines', 0, 'f=index.htm&amp;as=admin_image_comment_lines&amp;ae=admin_image_comment_lines_end'), //cpg1.4
  array('Maksimal lengde på en kommentar', 'max_com_size', 0, 'f=index.htm&amp;as=admin_image_comment_length&amp;ae=admin_image_comment_length_end'), //cpg1.4
  array('Varsle administrator om kommentarer på epost', 'email_comment_notification', 1, 'f=index.htm&amp;as=admin_image_comment_admin_notify&amp;ae=admin_image_comment_admin_notify_end'), //cpg1.4
  array('Sorteringsrekkefølge på kommentarer', 'comments_sort_descending', 17, 'f=index.htm&amp;as=admin_comment_sort_start&amp;ae=admin_comment_sort_end'), //cpg1.4
  array('Prefix for anonyme kommentarskrivere', 'comments_anon_pfx', 0, 'f=index.htm&amp;as=comments_anon_pfx&amp;ae=comments_anon_pfx_end'), //cpg1.4

  'Fil- og miniatyrbildeinnstillinger',
  array('Kvalitet på JPEG bilder', 'jpeg_qual', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_jpeg_quality&amp;ae=admin_picture_thumbnail_jpeg_quality_end'), //cpg1.4
  array('Maksimal dimensjon på miniatyrbilde <a href="#notice2" class="clickable_option">**</a>', 'thumb_width', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max-dimension&amp;ae=admin_picture_thumbnail_max-dimension_end'), //cpg1.4
  array('Bruk dimensjon ( bredde, høyde eller eller maks bredde/høyde for mineatyrbilder ) <a href="#notice2" class="clickable_option">**</a>', 'thumb_use', 7, 'f=index.htm&amp;as=admin_picture_thumbnail_use-dimension&amp;ae=admin_picture_thumbnail_use-dimension_end'), //cpg1.4
  array('Opprett bilder i mellomstørrelse','make_intermediate',1, 'f=index.htm&amp;as=admin_picture_thumbnail_intermediate_toggle&amp;ae=admin_picture_thumbnail_intermediate_toggle_end'), //cpg1.4
  array('Maksimal bredde eller høyde på bilde/video i mellomstørrelse <a href="#notice2" class="clickable_option">**</a>', 'picture_width', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_intermediate_dimension&amp;ae=admin_picture_thumbnail_intermediate_dimension_end'), //cpg1.4
  array('Maksimal filstørrelse for opplastede filer (KB)', 'max_upl_size', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max_upload_size&amp;ae=admin_picture_thumbnail_max_upload_size_end'), //cpg1.4
  array('Maks bredde eller høyde for opplastede bilder/videoer (piksler)', 'max_upl_width_height', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max_upload_dimension&amp;ae=admin_picture_thumbnail_max_upload_dimension_end'), //cpg1.4
  array('Automatisk reduser størrelse på bilder som er større enn maksimal bredde eller høyde', 'auto_resize', 16, 'f=index.htm&amp;as=admin_picture_thumbnail_auto-resize&amp;ae=admin_picture_thumbnail_auto-resize_end'), //cpg1.4

  'Filer og miniatyrbilder avanserte innstillinger',
  array('Album kan settes som private (NB: dersom du bytter fra \'ja\' til \'nei\' vil eksisterende private album bli tilgjengelig for alle)', 'allow_private_albums', 1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_private_toggle&amp;ae=admin_picture_thumb_advanced_private_toggle_end'), //cpg1.4
  array('Vis Ikon for private album til anonyme brukere','show_private',1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_private_icon_show&amp;ae=admin_picture_thumb_advanced_private_icon_show_end'), //cpg1.4
  array('Ulovlige tegn i filnavn', 'forbiden_fname_char',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_filename_forbidden_chars&amp;ae=admin_picture_thumb_advanced_filename_forbidden_chars_end'), //cpg1.4
  //array('Tillatte filtyper for opplastede bilder', 'allowed_file_extensions',0, 'f=index.htm&amp;as=&amp;ae=_end'), //cpg1.4
  array('Tillatte bildetyper', 'allowed_img_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_pic_extensions&amp;ae=admin_picture_thumb_advanced_pic_extensions_end'), //cpg1.4
  array('Tillatte filmtyper', 'allowed_mov_types',0, 'f=index.htm&amp;as=admin_thumbs_advanced_movie&amp;ae=admin_thumbs_advanced_movie_end'), //cpg1.4
  array('Automatisk start videovisning', 'media_autostart',1, 'f=index.htm&amp;as=admin_movie_autoplay&amp;ae=admin_movie_autoplay_end'), //cpg1.4
  array('Tillatte lydtyper', 'allowed_snd_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_audio_extensions&amp;ae=admin_picture_thumb_advanced_audio_extensions_end'), //cpg1.4
  array('Tillatte dokumenttyper', 'allowed_doc_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_doc_extensions&amp;ae=admin_picture_thumb_advanced_doc_extensions_end'), //cpg1.4
  array('Motode for endring av bildestørrelser','thumb_method',2, 'f=index.htm&amp;as=admin_picture_thumb_advanced_resize_method&amp;ae=admin_picture_thumb_advanced_resize_method_end'), //cpg1.4
  array('Sti til ImageMagick \'konverterings\'-program (eksempel /usr/bin/X11/)', 'impath', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_im_path&amp;ae=admin_picture_thumb_advanced_im_path_end'), //cpg1.4
  //array('Tillatte bildetype (kun for ImageMagick)', 'allowed_img_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_allowed_imagetypes&amp;ae=admin_picture_thumb_advanced_allowed_imagetypes_end'), //cpg1.4
  array('Kommandolinjeparameter til ImageMagick', 'im_options', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_im_commandline&amp;ae=admin_picture_thumb_advanced_im_commandline_end'), //cpg1.4
  array('Les EXIFdata i JPEGfiler', 'read_exif_data', 13, 'f=index.htm&amp;as=admin_picture_thumb_advanced_exif&amp;ae=admin_picture_thumb_advanced_exif_end'), //cpg1.4
  array('Les IPTCdata i JPEGfiler', 'read_iptc_data', 1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_iptc&amp;ae=admin_picture_thumb_advanced_iptc_end'), //cpg1.4
  array('Albummappe <a href="#notice1" class="clickable_option">*</a>', 'fullpath', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_albums_dir&amp;ae=admin_picture_thumb_advanced_albums_dir_end'), //cpg1.4
  array('Katalog for brukerfiler <a href="#notice1" class="clickable_option">*</a>', 'userpics', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_userpics_dir&amp;ae=admin_picture_thumb_advanced_userpics_dir_end'), //cpg1.4
  array('Prefix for bilder i mellomstørrelse <a href="#notice1" class="clickable_option">*</a>', 'normal_pfx', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_intermediate_prefix&amp;ae=admin_picture_thumb_advanced_intermediate_prefix_end'), //cpg1.4
  array('Prefix for miniatyrbilder <a href="#notice1" class="clickable_option">*</a>', 'thumb_pfx', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_thumbs_prefix&amp;ae=admin_picture_thumb_advanced_thumbs_prefix_end'), //cpg1.4
  array('Standard rettighetsmodus for mapper', 'default_dir_mode', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_chmod_folder&amp;ae=admin_picture_thumb_advanced_chmod_folder_end'), //cpg1.4
  array('Standard rettighetsmodus for filer', 'default_file_mode', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_chmod_files&amp;ae=admin_picture_thumb_advanced_chmod_files_end'), //cpg1.4

  'Brukerinstillinger',
  array('Tillat nye brukerregistreringer', 'allow_user_registration', 1, 'f=index.htm&amp;as=admin_allow_registration&amp;ae=admin_allow_registration_end'), //cpg1.4
  array('Tillat ikke-innloggede (gjester eller anonyme) brukere', 'allow_unlogged_access', 1, 'f=index.htm&amp;as=admin_allow_unlogged_access&amp;ae=admin_allow_unlogged_access_end'), //cpg1.4
  array('Brukerregistrering krever bekreftelse på epost', 'reg_requires_valid_email', 1, 'f=index.htm&amp;as=admin_registration_verify&amp;ae=admin_registration_verify_end'), //cpg1.4
  array('Varsle administrator pr. epost ved nye brukerregistreringer', 'reg_notify_admin_email', 1, 'f=index.htm&amp;as=admin_registration_notify&amp;ae=admin_registration_notify_end'), //cpg1.4
  array('Administrator må aktivere brukerregistreringer', 'admin_activation', 1, 'f=index.htm&amp;as=admin_activation&amp;ae=admin_activation_end'),  //cpg1.4
  array('Tillat to brukere å ha samme epostadresse', 'allow_duplicate_emails_addr', 1, 'f=index.htm&amp;as=admin_allow_duplicate_emails_addr&amp;ae=admin_allow_duplicate_emails_addr_end'), //cpg1.4
  array('Varsle administrator pr. epost når filer blir lastet opp til godkjennelse', 'upl_notify_admin_email', 1, 'f=index.htm&amp;as=admin_approval_notify&amp;ae=admin_approval_notify_end'), //cpg1.4
  array('La innloggede brukere se medlemslisten', 'allow_memberlist', 1, 'f=index.htm&amp;as=admin_user_memberlist&amp;ae=admin_user_memberlist_end'), //cpg1.4
  array('Tillat brukere å endre epostadresse i sin prifil', 'allow_email_change', 1, 'f=index.htm&amp;as=admin_user_allow_email_change&amp;ae=admin_user_allow_email_change_end'), //cpg1.4
  array('La brukere ta kontroll over deres egne filer i offentlige gallerier', 'users_can_edit_pics', 1, 'f=index.htm&amp;as=admin_user_editpics_public_start&amp;ae=admin_user_editpics_public_end'), //cpg1.4
  array('Antall mislykkede innloggingsforsøk før midlertidig utestengelse (for å unngå brute force attacks)', 'login_threshold', 0, 'f=index.htm&amp;as=admin_user_login_start&amp;ae=admin_user_login_end'), //cpg1.4
  array('Tidsintervall for midlertidig utestengelse etter mislykkede innloggingsforsøk', 'login_expiry', 0, 'f=index.htm&amp;as=admin_user_login_start&amp;ae=admin_user_login_end'), //cpg1.4
  array('Slå på rapportering tiladministrator', 'report_post', 1, 'f=index.htm&amp;as=admin_user_enable_report&amp;ae=admin_user_enable_report_end'),  //cpg1.4

// custom profile fields,  //cpg1.4
  'Egendefinerte felter for brukerprofil (la stå tomme om dette ikke brukes).
  Bruk Profil 6 for lange attributter, som biografi', //cpg1.4
  array('Navn på profil 1', 'user_profile1_name', 0, 'f=index.htm&amp;as=admin_custom&amp;ae=admin_custom_end'), //cpg1.4
  array('Navn på profil 2', 'user_profile2_name', 0), //cpg1.4
  array('Navn på profil 3', 'user_profile3_name', 0), //cpg1.4
  array('Navn på profil 4', 'user_profile4_name', 0), //cpg1.4
  array('Navn på profil 5', 'user_profile5_name', 0), //cpg1.4
  array('Navn på profil 6', 'user_profile6_name', 0), //cpg1.4

  'Egendefinerte felter for bildebeskrivelser (la stå tomme om dette ikke brukes)',
  array('Navn på felt 1', 'user_field1_name', 0, 'f=index.htm&amp;as=admin_custom_image&amp;ae=admin_custom_image_end'), //cpg1.4
  array('Navn på felt 2', 'user_field2_name', 0),
  array('Navn på felt 3', 'user_field3_name', 0),
  array('Navn på felt 4', 'user_field4_name', 0),

  'Cookieinstillinger',
  array('Cookienavn', 'cookie_name', 0, 'f=index.htm&amp;as=admin_cookie_name&amp;ae=admin_cookie_name_end'), //cpg1.4
  array('Cookiesti', 'cookie_path', 0, 'f=index.htm&amp;as=admin_cookie_path&amp;ae=admin_cookie_path_end'), //cpg1.4

  'Epostinstillinger (må som regel ikke forandres; la alle feltene stå tomme om du ikke er sikker)', //cpg1.4
  array('SMTP maskinnavn (derom ikke spesifisert vil sendmail bli brukt)', 'smtp_host', 0, 'f=index.htm&amp;as=admin_email&amp;ae=admin_email_end'), //cpg1.4
  array('SMTP brukernavn', 'smtp_username', 0), //cpg1.4
  array('SMTP passord', 'smtp_password', 0), //cpg1.4

  'Logging og statistikk', //cpg1.4
  array('Loggmodus <a href="#notice3" class="clickable_option">***</a>', 'log_mode', 11, 'f=index.htm&amp;as=admin_logging_log_mode&amp;ae=admin_logging_log_mode_end'), //cpg1.4
  array('Loggfør ekort', 'log_ecards', 1, 'f=index.htm&amp;as=admin_general_log_ecards&amp;ae=admin_general_log_ecards_end'), //cpg1.4
  array('Spar detaljert statistikk for karaktergivning','vote_details',1, 'f=index.htm&amp;as=admin_logging_votedetails&amp;ae=admin_logging_votedetails_end'), //cpg1.4
  array('Spar detaljert statistikk for visninger','hit_details',1, 'f=index.htm&amp;as=admin_logging_hitdetails&amp;ae=admin_logging_hitdetails_end'), //cpg1.4

  'Vedlikeholdsinstillinger', //cpg1.4
  array('Slå på avlusningsmodus', 'debug_mode', 9, 'f=index.htm&amp;as=debug_mode&amp;ae=debug_mode_end'), //cpg1.4
  array('Vis notices i avlusningsmodus', 'debug_notice', 1, 'f=index.htm&amp;as=admin_misc_debug_notices&amp;ae=admin_misc_debug_notices_end'), //cpg1.4
  array('Marker gallieret som offline', 'offline', 1, 'f=index.htm&amp;as=admin_general_offline&amp;ae=admin_general_offline_end'), //cpg1.4
);


// ------------------------------------------------------------------------- //
// File db_ecard.php
// ------------------------------------------------------------------------- //

if (defined('DB_ECARD_PHP')) $lang_db_ecard_php = array(
  'title' => 'Sendte ekort',
  'ecard_sender' => 'Avsender',
  'ecard_recipient' => 'Mottaker',
  'ecard_date' => 'Dato',
  'ecard_display' => 'Vis ekort',
  'ecard_name' => 'Navn',
  'ecard_email' => 'Epost',
  'ecard_ip' => 'IP #',
  'ecard_ascending' => 'i stigende rekkefølge',
  'ecard_descending' => 'i synkende rekkefølge',
  'ecard_sorted' => 'Sortert',
  'ecard_by_date' => 'etter dato',
  'ecard_by_sender_name' => 'etter avsenders navn',
  'ecard_by_sender_email' => 'etter avsenders epost',
  'ecard_by_sender_ip' => 'etter senders IP adresse',
  'ecard_by_recipient_name' => 'etter mottakers name',
  'ecard_by_recipient_email' => 'etter mottakers epost',
  'ecard_number' => 'viser ekortnummer %s til %s av %s',
  'ecard_goto_page' => 'gå til side',
  'ecard_records_per_page' => 'Ekort per side',
  'check_all' => 'Marker alle',
  'uncheck_all' => 'Avmarker alle',
  'ecards_delete_selected' => 'Slett valgte ekort',
  'ecards_delete_confirm' => 'Er du sikker på at du vil slette valgte ekort? Marker avkryssningsfeltet!',
  'ecards_delete_sure' => 'Jeg er sikker',
);


// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
  'empty_name_or_com' => 'Du må skrive både navn og kommentar',
  'com_added' => 'Din kommentar er lagt inn',
  'alb_need_title' => 'Du må legge inn en tittel på albumet!',
  'no_udp_needed' => 'Ingen oppdatering nødvendig.',
  'alb_updated' => 'Albumet ble oppdatert',
  'unknown_album' => 'Det valgte albumet eksisterer ikke, eller du har ikke tillatelse til å laste opp filer i dette albumet',
  'no_pic_uploaded' => 'Det ble ikke lastet opp noen fil!<br /><br />Hvis du virkelig valgte en fil så sjekk om serveren tillater opplasting',
  'err_mkdir' => 'Kunne ikke lage en katalog %s !',
  'dest_dir_ro' => 'Katalogen %s kan ikke skrives til av dette skriptet !',
  'err_move' => 'Umulig å flytte %s til %s !',
  'err_fsize_too_large' => 'Filen du lastet opp er for stor (maksimalt tillatt størrelse er %s x %s). !', //obsolete since cpg1.3 - consider removal in cpg1.4 once upload.php has been overhauled
  'err_imgsize_too_large' => 'Filen du lastet opp er for stor (maksimalt tillatt størrelse er %s KB) !', //obsolete since cpg1.3 - consider removal in cpg1.4 once upload.php has been overhauled
  'err_invalid_img' => 'Filen du har lastet opp er ikke en gyldig bildefil !',
  'allowed_img_types' => 'Du kan bare laste opp %s filer.',
  'err_insert_pic' => 'Bildet \'%s\' kan ikke legges inn i albumet',
  'upload_success' => 'Opplastingen av bildet ditt var vellykket<br /><br />Det vil bli tilgjengelig etter at administrator har godkjent det.',
  'notify_admin_email_subject' => '%s - Opplastningsvarsel',
  'notify_admin_email_body' => 'En fil har blitt lastet opp av %s, det trenger din godkjennelse. Gå til %s',
  'info' => 'Informasjon',
  'com_added' => 'Kommentar lagt inn',
  'alb_updated' => 'Album oppdatert',
  'err_comment_empty' => 'Din kommentar er tom!',
  'err_invalid_fext' => 'Kun disse filtypene er akseptert : <br /><br />%s.',
  'no_flood' => 'Du er allerede den siste som har kommentert denne filen<br /><br />Vennligst rediger din forrige kommentar istedet',
  'redirect_msg' => 'Du blir omdirigert.<br /><br /><br />Trykk \'FORTSETT\' dersom siden ikke lastes automatisk',
  'upl_success' => 'Din fil ble lagt inn',
  'email_comment_subject' => 'Kommentar lagt inn på Coppermine Photo Gallery',
  'email_comment_body' => 'Noen har lagt inn en kommentar i ditt galleri. Se kommentaren på',
  'album_not_selected' => 'Album ikke valgt', //cpg1.4
  'com_author_error' => 'En registrert bruker har allerede dette navnet, logg inn eller bruk et annet', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
  'caption' => 'Beskrivelse',
  'fs_pic' => 'Full størrelse',
  'del_success' => 'slettet',
  'ns_pic' => 'normal størrelse',
  'err_del' => 'kan ikke slettes',
  'thumb_pic' => 'miniatyrbilde',
  'comment' => 'kommentar',
  'im_in_alb' => 'bilde i album',
  'alb_del_success' => 'Album &laquo;%s&raquo; slettet', //cpg1.4
  'alb_mgr' => 'Albumadministrasjon',
  'err_invalid_data' => 'Ugyldig data mottatt i \'%s\'',
  'create_alb' => 'Oppretter album \'%s\'',
  'update_alb' => 'Oppdaterer album \'%s\' med tittel \'%s\' og index \'%s\'',
  'del_pic' => 'Slett fil',
  'del_alb' => 'Slett album',
  'del_user' => 'Slett bruker',
  'err_unknown_user' => 'Den valgte brukeren eksisterer ikke!',
  'err_empty_groups' => 'Det finnes ingen gruppetabell, eller gruppetabellen er tom!', //cpg1.4
  'comment_deleted' => 'Kommentar ble slettet',
  'npic' => 'Bilde', //cpg1.4
  'pic_mgr' => 'Bildeadministrasjon', //cpg1.4
  'update_pic' => 'Oppdaterer bilde \'%s\' med navn \'%s\' og index \'%s\'', //cpg1.4
  'username' => 'Brukernavn', //cpg1.4
  'anonymized_comments' => '%s kommentarer anonymisert', //cpg1.4
  'anonymized_uploads' => '%s offentlige opplastninger anonymisert', //cpg1.4
  'deleted_comments' => '%s kommentarer slettet', //cpg1.4
  'deleted_uploads' => '%s offentlige opplastninger slettet', //cpg1.4
  'user_deleted' => 'bruker %s slettet', //cpg1.4
  'activate_user' => 'Aktiver bruker', //cpg1.4
  'user_already_active' => 'Konto allerede aktiv', //cpg1.4
  'activated' => 'Aktivert', //cpg1.4
  'deactivate_user' => 'Deaktiver bruker', //cpg1.4
  'user_already_inactive' => 'Konto allerede inaktiv', //cpg1.4
  'deactivated' => 'Deaktivert', //cpg1.4
  'reset_password' => 'Resett passord', //cpg1.4
  'password_reset' => 'Passord resatt til %s', //cpg1.4
  'change_group' => 'Skift primærgruppe', //cpg1.4
  'change_group_to_group' => 'Endrer fra %s til %s', //cpg1.4
  'add_group' => 'Legg til sekundær gruppe', //cpg1.4
  'add_group_to_group' => 'Legger bruker %s til gruppe %s. Brukeren er nå primærmedlem av gruppen %s og sekundærmedlem av gruppen %s.', //cpg1.4
  'status' => 'Status', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File displayecard.php
// ------------------------------------------------------------------------- //

if (defined('DISPLAYECARD_PHP')) {

$lang_displayecard_php = array(
  'invalid_data' => 'Dataene i ekortet du prøver å se har blitt endret av din epostleser. Sjekk om linken er hel, eller om den f.eks. har delt seg over flere linjer.', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File displayimage.php
// ------------------------------------------------------------------------- //

if (defined('DISPLAYIMAGE_PHP')){

$lang_display_image_php = array(
  'confirm_del' => 'Er du sikker på at du vil slette denne filen? \\nKommentarer vil også bli slettet.', //js-alert
  'del_pic' => 'SLETT DENNE FILEN',
  'size' => '%s x %s piksler',
  'views' => '%s ganger',
  'slideshow' => 'Lysbildeshow',
  'stop_slideshow' => 'STOPP LYSBILDESHOW',
  'view_fs' => 'Klikk for å vise bildet i full størrelse',
  'edit_pic' => 'Endre beskrivelse', //cpg1.4
  'crop_pic' => 'Klipp eller roter',
  'set_player' => 'Skift avspiller',
);

$lang_picinfo = array(
  'title' =>'Filinformasjon',
  'Filename' => 'Filnavn',
  'Album name' => 'Albumnavn',
  'Rating' => 'Karakter (%s stemmer)',
  'Keywords' => 'Nøkkelord',
  'File Size' => 'Filstørrelse',
  'Date Added' => 'Dato lagt inn', //cpg1.4
  'Dimensions' => 'Dimensjoner',
  'Displayed' => 'Visninger',
  'URL' => 'URL', //cpg1.4
  'Make' => 'Make', //cpg1.4
  'Model' => 'Modell', //cpg1.4
  'DateTime' => 'Dato og tid', //cpg1.4
  'DateTimeOriginal' => 'Dato tatt', //cpg1.4
  'ISOSpeedRatings'=>'ISO', //cpg1.4
  'MaxApertureValue' => 'Max Blenderåpning', //cpg1.4
  'FocalLength' => 'Brennvidde', //cpg1.4
  'Comment' => 'Kommentar',
  'addFav'=>'Legg til favoritter',
  'addFavPhrase'=>'Favoritter',
  'remFav'=>'Fjern fra favoritter',
  'iptcTitle'=>'IPTC Tittel',
  'iptcCopyright'=>'IPTC-Opphavsrett',
  'iptcKeywords'=>'IPTC-Nøkkelord',
  'iptcCategory'=>'IPTC-Kategori',
  'iptcSubCategories'=>'IPTC-Underkategori',
  'ColorSpace' => 'Fargerom', //cpg1.4
  'ExposureProgram' => 'Eksponeringsprogram', //cpg1.4
  'Flash' => 'Blits', //cpg1.4
  'MeteringMode' => 'Lysmålingsmodus', //cpg1.4
  'ExposureTime' => 'Eksponeringstid', //cpg1.4
  'ExposureBiasValue' => 'EksponeringsBias', //cpg1.4
  'ImageDescription' => ' Bildebeskrivelse', //cpg1.4
  'Orientation' => 'Orientering', //cpg1.4
  'xResolution' => 'X oppløsning', //cpg1.4
  'yResolution' => 'Y oppløsning', //cpg1.4
  'ResolutionUnit' => 'Oppløsningsenhet', //cpg1.4
  'Software' => 'Programvare', //cpg1.4
  'YCbCrPositioning' => 'YCbCrPosisjonering', //cpg1.4
  'ExifOffset' => 'Exif Offset', //cpg1.4
  'IFD1Offset' => 'IFD1 Offset', //cpg1.4
  'FNumber' => 'FNumber', //cpg1.4
  'ExifVersion' => 'Exif Versjon', //cpg1.4
  'DateTimeOriginal' => 'Original dato og tid', //cpg1.4
  'DateTimedigitized' => 'Digitalisert dato og tid', //cpg1.4
  'ComponentsConfiguration' => 'Komponentkonfigurasjon', //cpg1.4
  'CompressedBitsPerPixel' => 'Komprimerte Bits pr piksel', //cpg1.4
  'LightSource' => 'Lyskilde', //cpg1.4
  'ISOSetting' => 'ISOinstilling (følsomhet)', //cpg1.4
  'ColorMode' => 'Fargemodus', //cpg1.4
  'Quality' => 'Kvalitet', //cpg1.4
  'ImageSharpening' => 'Bildeskarping', //cpg1.4
  'FocusMode' => 'Fokusmodus', //cpg1.4
  'FlashSetting' => 'Blitssetting', //cpg1.4
  'ISOSelection' => 'ISO Valg', //cpg1.4
  'ImageAdjustment' => 'ildeinstilling', //cpg1.4
  'Adapter' => 'Adapter', //cpg1.4
  'ManualFocusDistance' => 'Manuell fokusavstand', //cpg1.4
  'DigitalZoom' => 'Digital Zoom', //cpg1.4
  'AFFocusPosition' => 'AF Focus Position', //cpg1.4
  'Saturation' => 'Fargemetning', //cpg1.4
  'NoiseReduction' => 'Støyreduksjon', //cpg1.4
  'FlashPixVersion' => 'Blits Pixversjon', //cpg1.4
  'ExifImageWidth' => 'Exif Bildebredde', //cpg1.4
  'ExifImageHeight' => 'Exif Bildehøyde', //cpg1.4
  'ExifInteroperabilityOffset' => 'Exif Interoperability Offset', //cpg1.4
  'FileSource' => 'Filkilde', //cpg1.4
  'SceneType' => 'Scene Type', //cpg1.4
  'CustomerRender' => 'Customer Render', //cpg1.4
  'ExposureMode' => 'Eksponeringsmodus', //cpg1.4
  'WhiteBalance' => 'Hvitbalanse', //cpg1.4
  'DigitalZoomRatio' => 'Digital Zoom Ratio', //cpg1.4
  'SceneCaptureMode' => 'Scene Capture Mode', //cpg1.4
  'GainControl' => 'Gainkontroll', //cpg1.4
  'Contrast' => 'Kontrast', //cpg1.4
  'Saturation' => 'Fargemetning', //cpg1.4
  'Sharpness' => 'Skarping', //cpg1.4
  'ManageExifDisplay' => 'Oppdater Exifvisning', //cpg1.4
  'submit' => 'Send inn', //cpg1.4
  'success' => 'Informasjonen ble oppdatert.', //cpg1.4
  'details' => 'Detaljer', //cpg1.4
);

$lang_display_comments = array(
  'OK' => 'OK',
  'edit_title' => 'Rediger denne kommentaren',
  'confirm_delete' => 'Er du sikker på at du vil slette denne kommentaren?', //js-alert
  'add_your_comment' => 'Legg til din kommentar',
  'name'=>'Navn',
  'comment'=>'Kommentar',
  'your_name' => 'Anonym',
  'report_comment_title' => 'Rapporter denne kommentaren til administrator', //cpg1.4
);

$lang_fullsize_popup = array(
  'click_to_close' => 'Klikk på bildet for å lukke viduet',
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
  'title' => 'Send et ekort',
  'invalid_email' => '<font color="red"><b>Advarsel</b></font>: ugyldig epostadresse:', //cpg1.4
  'ecard_title' => 'Et ekort fra %s til deg',
  'error_not_image' => 'Bare bilder kan sendes som ekort.',
  'view_ecard' => 'Hvis kortet ikke vises riktig, klikk her', //cpg1.4
  'view_ecard_plaintext' => 'For å se ekortet, kopier denne URLen til din nettlesers adresselinje:', //cpg1.4
  'view_more_pics' => 'Klikk på denne linken for flere bilder!', //cpg1.4
  'send_success' => 'Ditt ekort ble sendt',
  'send_failed' => 'Beklager, serveren kunne ikke sende Ekortet ditt...',
  'from' => 'Fra',
  'your_name' => 'Ditt navn',
  'your_email' => 'Din epostadresse',
  'to' => 'Til',
  'rcpt_name' => 'Mottakers navn',
  'rcpt_email' => 'Mottakers epostadresse',
  'greetings' => 'Overskrift', //cpg1.4
  'message' => 'Melding', //cpg1.4
  'ecards_footer' => 'Sendt av %s fra IP %s klokken %s (Galleritid)', //cpg1.4
  'preview' => 'Forhåndsvisning av ekort', //cpg1.4
  'preview_button' => 'Vis', //cpg1.4
  'submit_button' => 'Send ekort', //cpg1.4
  'preview_view_ecard' => 'Dette vil bli den alternative linken til ekortet med en gang det er laget. Det vil ikke virke for forhåndsvisninger.', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File report_file.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('REPORT_FILE_PHP') || defined('DISPLAYREPORT_PHP')) $lang_report_php =array(
  'title' => 'Rapporter til administrator', //cpg1.4
  'invalid_email' => '<b>Advarsel</b> : ugyldig epostadresse !', //cpg1.4
  'report_subject' => 'En rapport fra %s på galleri %s', //cpg1.4
  'view_report' => 'Alternativ link dersom rapporten ikke vises skikkelig', //cpg1.4
  'view_report_plaintext' => 'For å se på rapporten, kopier denne URL til adressefeltet i din nettleser :', //cpg1.4
  'view_more_pics' => 'Galleri', //cpg1.4
  'send_success' => 'Din rapport ble sendt', //cpg1.4
  'send_failed' => 'Beklager, men serveren kan ikke sende din rapport...', //cpg1.4
  'from' => 'Fra', //cpg1.4
  'your_name' => 'Ditt navn', //cpg1.4
  'your_email' => 'Din epostadresse', //cpg1.4
  'to' => 'Til', //cpg1.4
  'administrator' => 'Administrator / Moderator', //cpg1.4
  'subject' => 'Emne', //cpg1.4
  'comment_field_name' => 'Rapporterer kommentar av "%s"', //cpg1.4
  'reason' => 'Årsak', //cpg1.4
  'message' => 'Melding', //cpg1.4
  'report_footer' => 'Sendt av %s fra IP %s klokken %s (Galleritid)', //cpg1.4
  'obscene' => 'uanstendig', //cpg1.4
  'offensive' => 'støtende', //cpg1.4
  'misplaced' => 'utenfor emne/feilplassert', //cpg1.4
  'missing' => 'manglende', //cpg1.4
  'issue' => 'feil/kan ikke vises', //cpg1.4
  'other' => 'andre', //cpg1.4
  'refers_to' => 'Filrapport refererer til', //cpg1.4
  'reasons_list_heading' => 'årsak(er) for rapport:', //cpg1.4
  'no_reason_given' => 'ingen årsak ble gitt', //cpg1.4
  'go_comment' => 'Gå til kommentar', //cpg1.4
  'view_comment' => 'Se full rapport med kommentar', //cpg1.4
  'type_file' => 'fil', //cpg1.4
  'type_comment' => 'kommentar', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
  'pic_info' => 'Filinformasjon',
  'album' => 'Album',
  'title' => 'Tittel',
  'filename' => 'Filnavn', //cpg1.4
  'desc' => 'Beskrivelse',
  'keywords' => 'Nøkkelord',
  'new_keyword' => 'Nytt nøkkelord', //cpg1.4
  'new_keywords' => 'Nytt nøkkelord funnet', //cpg1.4
  'existing_keyword' => 'Eksisterende nøkkelord', //cpg1.4
  'pic_info_str' => '%s &times; %s - %s KB - %s visninger - %s stemmer',
  'approve' => 'Godkjenn fil',
  'postpone_app' => 'Utsett godkjenning',
  'del_pic' => 'Slett fil',
  'del_all' => 'Slett ALLE filer', //cpg1.4
  'read_exif' => 'Les EXIFinformasjon på nytt',
  'reset_view_count' => 'Resett visningsteller',
  'reset_all_view_count' => 'Resett ALLE visningstellere', //cpg1.4
  'reset_votes' => 'Resett stemmer',
  'reset_all_votes' => 'Resett ALLE stemmer', //cpg1.4
  'del_comm' => 'Slett kommentarer',
  'del_all_comm' => 'Slett ALLE kommentarer', //cpg1.4
  'upl_approval' => 'Godkjenning av opplastning', //cpg1.4
  'edit_pics' => 'Endre filer',
  'see_next' => 'Se neste filer',
  'see_prev' => 'Se forrige filer',
  'n_pic' => '%s filer',
  'n_of_pic_to_disp' => 'Antall filer å vise',
  'apply' => 'Effektuer endringer',
  'crop_title' => 'Coppermine Picture Editor',
  'preview' => 'Forhåndsvis',
  'save' => 'Lagre bilde',
  'save_thumb' =>'Lagre som miniatyrbilde',
  'gallery_icon' => 'Gjør dette til mitt ikon', //cpg1.4
  'sel_on_img' =>'Utsnittet må i sin helhet være en del av bildet!', //js-alert
  'album_properties' =>'Albumegenskaper', //cpg1.4
  'parent_category' =>'Foreldrekategori', //cpg1.4
  'thumbnail_view' =>'Miniatyrbildevisning', //cpg1.4
  'select_unselect' =>'marker/avmarker alle', //cpg1.4
  'file_exists' => "Filen '%s' finnes allerede.", //cpg1.4
  'rename_failed' => "Kunne ikke endre navn '%s' til '%s'.", //cpg1.4
  'src_file_missing' => "Kildefilen '%s' mangler.", // cpg 1.4
  'mime_conv' => "Kunne ikke konvertere filen fra '%s' til '%s'",//cpg1.4
  'forb_ext' => 'Ulovlig filending.',//cpg1.4
);

// ------------------------------------------------------------------------- //
// File faq.php
// ------------------------------------------------------------------------- //

if (defined('FAQ_PHP')) $lang_faq_php = array(
  'faq' => 'Spørsmål og Svar',
  'toc' => 'Innholdsfortegnelse',
  'question' => 'Spørsmål: ',
  'answer' => 'Svar: ',
);

if (defined('FAQ_PHP')) $lang_faq_data = array(
  'Generelle Spørsmål og Svar',
  array('Hvorfor må jeg registrere meg?', 'Registrering kan være påkrevd av administrator. Registrering gir medlemmene utvidede rettigheter som opplastning av egne filer, registrering av egne favoritter, karaktergivning og kommentering av andres filer etc.', 'allow_user_registration', '1'),
  array('Hvordan registrerer jeg meg?', 'Gå til &quot;Registrer&quot; og fyll inn de nødvendige feltene (alle dersom du ønsker det).<br />Har Administrator aktivert funksjonen for epost aktivering skal du motta en epost til den adressen du oppga med instruksjoner om hvordan du kan aktivere medlemskapet ditt. Medlemskapet må da aktiveres før du kan logge inn.', 'allow_user_registration', '1'), //cpg1.4
  array('Hvordan logger jeg inn?', 'Gå til &quot;Logg inn&quot;, legg inn ditt brukernavn og passord og marker &quot;Husk meg&quot; slik at du automatisk blir logget inn neste gang dersom du forlater dette nettstedet.<br /><b>VIKTIG:Cookies må være aktivert og cookien fra denne siten kan ikke slettes dersom du vil bruke &quot;Husk meg&quot; funksjonen.</b>', 'offline', 0),
  array('Hvorfor kan jeg ikke logge inn?', 'Har du registrert deg, og klikket på linken sendt til din epostadresse?. Denne linken vil aktivere din konto. For andre innloggingsproblemer kontakt administrator.', 'offline', 0),
  array('Hva skjer dersom jeg mister passordet mitt?', 'Dersom denne siten har en &quot;Glemt passordet?&quot; link kan du bruke den. Ellers kan du kontakte administrator for et nytt passord.', 'offline', 0),
  //array('Hva skjer dersom jeg endrer epostadresse?', 'Bare logg inn og endre epostadressen din gjennom &quot;Min Profil&quot;', 'offline', 0),
  array('Hvordan lagrer jeg en fil i &quot;Mine Favoritter&quot;?', 'Klikk på en fil, og klikk så på &quot;Vis/skjul filinformasjon&quot; linken (<img src="images/info.gif" width="16" height="16" border="0" alt="Filinformasjon" />); Skroll ned til filinformasjonen og klikk &quot;Legg til i favoritter&quot;.<br />Administrator kan allerede ha slått på &quot;Vis/skjul filinformasjon&quot; on by default.<br />VIKTIG:Cookies må være aktivert og cookiene fra denne sitem kan ikke slettes.', 'offline', 0),
  array('Hvordan gir jeg karakter til en fil?', 'Klikk på et miniatyrbilde, gå nederst og velg en karakter.', 'offline', 0),
  array('Hvordan kommenterer jeg en fil?', 'Klikk på et miniatyrbilde, gå nederst og legg inn en kommentar.', 'offline', 0),
  array('Hvordan laster jeg opp en fil?', 'Gå til &quot;Last opp fil&quot;og velg et album du vil laste opp til, klikk på &quot;Browse,&quot; finn filen som skal lastes opp og klikk &quot;open&quot; (legg til en tittel og en beskrivelse om du vil). Klikk så &quot;Submit&quot;.<br /><br />Alternativt kan brukere med <b>Windows XP</b> laste opp flere filer direkte til deres egne album vedå bruke den innebygde Publishing wizard.<br />For instruksjoner på hvordan, hent den påkrevde registerfilen, og klikk <a href="xp_publish.php">her.</a>', 'allow_private_albums', 1), //cpg1.4
  array('Hvor havner filene jeg laster opp?', 'Du kan laste opp en fil til en av dine album i &quot;Mitt Galleri&quot;. Administrator kan også tilllate deg å laste opp filer til en eller flere av de andre albumene i galleriet.', 'allow_private_albums', 0),
  array('Hvilke typer filer og i hvilke størrelser kan jeg laste opp?', 'Tillatte filstørrelser og filtyper (jpg, png, etc.) bestemmes av administrator.', 'offline', 0),
  array('Hvordan lager, endrer eller sletter jeg album i &quot;Mitt Galleri&quot;?', 'Gå til &quot;Adminmodus&quot;<br />. Gå så til &quot;Opprett / ordne mine album&quot; og klikk &quot;Ny&quot;. Endre &quot;Nytt Album&quot; til ditt nye navn.<br />Du kan endre navn på alle album i ditt galleri.<br />Klikk &quot;Lagre endringer&quot;.', 'allow_private_albums', 0),
  array('Hvordan kan jeg endre og begrense brukere som kan se mine album?', 'Gå til &quot;Adminmodus&quot;<br /> Gå så til &quot;Endre Mine Album&quot;. På &quot;Oppdater album&quot; linjen, velg albumet du vil endre.<br />Her kan du endre navn, beskrivelse, miniatyrbilde, begrense tilgang og kommentar/karaktertillatelser.<br />Klikk &quot;Oppdater album&quot;.', 'allow_private_albums', 0),
  array('Hvordan kan jeg se andre brukeres gallerier?', 'Gå til &quot;Albumliste&quot; og velg &quot;Brukergallerier&quot;.', 'allow_private_albums', 0),
  array('Hva er cookies?', 'Cookies er tekstdata som blir sendt fra et nettsted som blir lagret på din datamaskin.<br />Cookies sørger normalt for at en bruker kan returnere til nettstedet uten å måtte logge inn igjen m.m.', 'offline', 0),
  array('Hvor kan jeg finne dette programmet til mitt eget nettsted?', 'Coppermine er et gratis multimediagalleri, utgitt under GNU GPL lisens. Det er fullt av funksjoner, og har blitt oversatt til diverse andre platformer. Besøk <a href="http://coppermine-gallery.net/">Coppermines hjemmeside</a> for å finne ut mer, og for å laste ned.', 'offline', 0),

  'Navigering',
  array('Hva er &quot;Albumliste&quot;?', 'Dette vil vise deg hele kategorien du befinner deg i, med en link til hvert album. Dersom du ikke er i en kategori viser det hele galleriet med en link til hver kategori. Miniatyrbilder kan være en link til kategorien.', 'offline', 0),
  array('Hva er &quot;Mitt Galleri&quot;?', 'Dette lar brukere lage deres egne gallerier og legge til, slette eller endre album.', 'allow_private_albums', 1), //cpg1.4
  array('Hva er forskjellen mellom &quot;Adminmodus&quot; og &quot;Brukermodus&quot;?', 'I adminmodus las brukeren endre deres egne gallerier (eller andres dersom brukeren er en administrator).', 'allow_private_albums', 0),
  array('Hva er &quot;Last opp fil&quot;?', 'Dette lar brukeren laste opp filer (størrelse og type er bestemt av administrator) til et galleri valgt enten av brukeren eller av administrator.', 'allow_private_albums', 0),
  array('Hva er &quot;Siste opplastninger&quot;?', 'Dette viser galleriets sist opplastede filer.', 'offline', 0),
  array('Hva er &quot;Siste kommentarer&quot;?', 'Dette viser de seneste filene noen brukere har lagt inn kommentar på.', 'offline', 0),
  array('Hva er &quot;Mest sett&quot;?', 'Dette viser de filene som er mest sett av brukere (enten de er logget på eller ikke).', 'offline', 0),
  array('Hva er &quot;Beste karakter&quot;?', 'Dette viser de filene som har fått best karakter av andre brukere. Det viser gjennomsnittelig karaktaer (f.eks: fem brukere ga <img src="images/rating3.gif" width="65" height="14" border="0" alt="" />: da ville filen ha gjennomsnittelig karakter: <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> ;Fem brukere gav filer karakter fra 1 til 5 (1,2,3,4,5), dette ville da gjennomsnittelig gi: <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> .)<br />Karakterene går fra <img src="images/rating5.gif" width="65" height="14" border="0" alt="best" /> (best) til <img src="images/rating0.gif" width="65" height="14" border="0" alt="verst" /> (verst).', 'offline', 0),
  array('Hva er &quot;Mine Favoritter&quot;?', 'Dette gir brukerne anledning til å lagre favorittfiler i cookien som blir sendt til datamaskinen din.', 'offline', 0),
);


// ------------------------------------------------------------------------- //
// File forgot_passwd.php
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) $lang_forgot_passwd_php = array(
  'forgot_passwd' => 'Passordpåminnelse',
  'err_already_logged_in' => 'Du er allerede logget inn!',
  'enter_email' => 'Skriv inn din epostadresse', //cpg1.4
  'submit' => 'OK',
  'illegal_session' => 'Passordpåminnelsens sesjon er ugyldig eller har utløpt.', //cpg1.4
  'failed_sending_email' => 'Passordpåminnelsen kunne ikke sendes!',
  'email_sent' => 'En epost med ditt brukernavn og nye passord ble sendt til %s', //cpg1.4
  'verify_email_sent' => 'En epost har blitt sendt til %s. Sjekk din epost for å fullføre prosessen.', //cpg1.4
  'err_unk_user' => 'Valgte bruker eksisterer ikke!',
  'account_verify_subject' => '%s - Forespørsel om nytt passord', //cpg1.4
  'account_verify_body' => 'Du har anmodet om et nytt passord. Om du ønsker å fortsette ved å få et nytt passord tilsendt, klikk på denne linken:
  
%s', //cpg1.4
  'passwd_reset_subject' => '%s - Ditt nye passord', //cpg1.4
  'passwd_reset_body' => 'Her er det nye passordet du anmodet:
Brukernavn: %s
Passord: %s
Klikk %s for å logge inn.', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
  'group_name' => 'Gruppenavn', //cpg1.4
  'permissions' => 'Tillatelser', //cpg1.4
  'public_albums' => 'Offentlige albumopplastninger', //cpg1.4
  'personal_gallery' => 'Personlig galleri', //cpg1.4
  'upload_method' => 'Opplastningsmetode', //cpg1.4
  'disk_quota' => 'Diskkvote', //cpg1.4
  'rating' => 'Karakter', //cpg1.4
  'ecards' => 'Ekort', //cpg1.4
  'comments' => 'Kommentarer', //cpg1.4
  'allowed' => 'Tillatt', //cpg1.4
  'approval' => 'Godkjenning', //cpg1.4
  'boxes_number' => 'Antall bokser', //cpg1.4
  'variable' => 'variabel', //cpg1.4
  'fixed' => 'fast', //cpg1.4
  'apply' => 'Lagre endringer',
  'create_new_group' => 'Lag ny gruppe',
  'del_groups' => 'Slett valgte gruppe(r)',
  'confirm_del' => 'Advarsel, når du sletter en gruppe vil brukerne som tilhører denne gruppen bli overført til gruppen kalt \'Registered\' !\n\nVil du fortsette?', //js-alert
  'title' => 'Administrer brukergrupper',
  'num_file_upload' => 'Filopplastningsbokser', //cpg1.4
  'num_URI_upload' => 'URIopplastningsbokser', //cpg1.4
  'reset_to_default' => 'Sett tilbake til standardnavn (%s) - anbefalt!', //cpg1.4
  'error_group_empty' => 'Gruppetabellen var tom !<br /><br />Standardgrupper ble laget, vennligst last denne siden på nytt', //cpg1.4
  'explain_greyed_out_title' => 'Whorfor er denne raden gråmarkert?', //cpg1.4
  'explain_guests_greyed_out_text' => 'Du kan ikke endre denne gruppens egenskaper fordi du valgte &quot;nei&quot; på &quot; Tillat ikke-innloggede (gjester eller anonyme) brukere&quot; på konfigurasjonssiden. Alle gjester (medlemmer av gruppen %s) kan ikke gjøre noe annet enn å logge inn; derfor gjelder ikke gruppesettinger for dem.', //cpg1.4
  'explain_banned_greyed_out_text' => 'Du kan ikke endre egenskaper til gruppen %s fordi dens medlemmer ikke kan gjøre noe uansett.', //cpg1.4
  'group_assigned_album' => 'tilordnede album', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
  'welcome' => 'Velkommen !',
);

$lang_album_admin_menu = array(
  'confirm_delete' => 'Er du sikker på at du vil SLETTE dette albumet? \\nAlle filer og kommentarer vil også bli slettet.', //js-alert
  'delete' => 'SLETT',
  'modify' => 'EGENSKAPER',
  'edit_pics' => 'OPPDATER FILER',
);

$lang_list_categories = array(
  'home' => 'Hjem',
  'stat1' => '<b>[pictures]</b> filer i <b>[albums]</b> album og <b>[cat]</b> kategorier med <b>[comments]</b> kommentarer sett <b>[views]</b> ganger',
  'stat2' => '<b>[pictures]</b> filer i <b>[albums]</b> album sett <b>[views]</b> ganger',
  'xx_s_gallery' => '%s\s galleri',
  'stat3' => '<b>[pictures]</b> filer i <b>[albums]</b> album med <b>[comments]</b> kommentarer sett <b>[views]</b> ganger',
);

$lang_list_users = array(
  'user_list' => 'Brukerliste',
  'no_user_gal' => 'Det er ingen tilgjengelige brukergallerier',
  'n_albums' => '%s album',
  'n_pics' => '%s fil(er)',
);

$lang_list_albums = array(
  'n_pictures' => '%s filer',
  'last_added' => ', siste lagt til den %s',
  'n_link_pictures' => '%s linkede filer', //cpg1.4
  'total_pictures' => '%s filer totalt', //cpg1.4
);

}

// ------------------------------------------------------------------------- //
// File keywordmgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('KEYWORDMGR_PHP')) $lang_keywordmgr_php = array(
  'title' => 'Administrer nøkkelord', //cpg1.4
  'edit' => 'endre', //cpg1.4
  'delete' => 'slett', //cpg1.4
  'search' => 'søk', //cpg1.4
  'keyword_test_search' => 'søk etter %s i nytt vindu', //cpg1.4
  'keyword_del' => 'slett nøkkelordet %s', //cpg1.4
  'confirm_delete' => 'Er du sikker på at du vil slette nøkkelordet %s helt fra galleriet?', //cpg1.4  // js-alert
  'change_keyword' => 'endre nøkkelord', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
  'login' => 'Logg inn',
  'enter_login_pswd' => 'Skriv brukernavn og passord for å logge inn',
  'username' => 'Brukernavn',
  'password' => 'Passord',
  'remember_me' => 'Husk meg',
  'welcome' => 'Velkommen %s ...',
  'err_login' => '*** Kunne ikke logge deg inn. Prøv igjen ***',
  'err_already_logged_in' => 'Du er allerede logget inn !',
  'forgot_password_link' => 'Glemt passordet?',
  'cookie_warning' => 'Advarsel! Din nettleser tillater ikke cookies', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
  'logout' => 'Logg ut',
  'bye' => 'På gjensyn %s ...',
  'err_not_loged_in' => 'Du er ikke logget inn !',
);

// ------------------------------------------------------------------------- //
// File minibrowser.php  //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('MINIBROWSER_PHP')) $lang_minibrowser_php = array(
  'close' => 'lukk', //cpg1.4
  'submit' => 'OK', //cpg1.4
  'up' => 'opp ett nivå', //cpg1.4
  'current_path' => 'nåværende sti', //cpg1.4
  'select_directory' => 'velg en mappe', //cpg1.4
  'click_to_close' => 'Klikk på bildet for å lukke vinduet',
);

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
  'upd_alb_n' => 'Oppdater album %s',
  'general_settings' => 'Generelle innstillinger',
  'alb_title' => 'Albumtittel',
  'alb_cat' => 'Albumkategori',
  'alb_desc' => 'Albumbeskrivelse',
  'alb_keyword' => 'Albumnøkkelord', //cpg1.4
  'alb_thumb' => 'Miniatyrbilde for album',
  'alb_perm' => 'Tillatelser for dette album',
  'can_view' => 'Dette album kan ses av',
  'can_upload' => 'Besøkende kan laste opp filer',
  'can_post_comments' => 'Besøkende kan kommentere filer',
  'can_rate' => 'Besøkende kan gi filer karakter',
  'user_gal' => 'Brukergalleri',
  'no_cat' => '* Ingen kategori *',
  'alb_empty' => 'Album er tomt',
  'last_uploaded' => 'Sist lastet opp',
  'public_alb' => 'Alle (offentlig album)',
  'me_only' => 'Kun meg',
  'owner_only' => 'Kun albumeier (%s)',
  'groupp_only' => 'Medlemmer av \'%s\' gruppen',
  'err_no_alb_to_modify' => 'Det er ingen tilgjengelige album du kan redigere.',
  'update' => 'Oppdater album',
  'reset_album' => 'Tilbakestill album', //cpg1.4
  'reset_views' => 'Tilbakestill visningsteller til &quot;0&quot; i %s', //cpg1.4
  'reset_rating' => 'Tilbakestill karakterer på alle filer i %s', //cpg1.4
  'delete_comments' => 'Slett alle kommentarer i %s', //cpg1.4
  'delete_files' => '%sIrreversibly%s slett alle filer i %s', //cpg1.4
  'views' => 'visninger', //cpg1.4
  'votes' => 'stemmer', //cpg1.4
  'comments' => 'kommentarer', //cpg1.4
  'files' => 'filer', //cpg1.4
  'submit_reset' => 'lagre endringer', //cpg1.4
  'reset_views_confirm' => 'Jeg er sikker', //cpg1.4
  'notice1' => '(*) avhengig av %sgroups%s instillinger',  //cpg1.4 //(do not translate %s!)
  'alb_password' => 'Albumpassord', //cpg1.4
  'alb_password_hint' => 'Albumpasword hint', //cpg1.4
  'edit_files' =>'Endre filer', //cpg1.4
  'parent_category' =>'Foreldrekategori', //cpg1.4
  'thumbnail_view' =>'Miniatyrbildevisning', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File phpinfo.php
// ------------------------------------------------------------------------- //

if (defined('PHPINFO_PHP')) $lang_phpinfo_php = array(
  'php_info' => 'PHP informasjon',
  'explanation' => 'Dette er generert av PHP-funksjonen <a href="http://www.php.net/phpinfo">phpinfo()</a>, her vist inne i Coppermine (kuttet litt ved høyre side).',
  'no_link' => 'Å la andre se din phpinfo kan være en sikkerhetsrisiko, derfor er denne siden bare mulig å se når du er logget inn som administrator. Du kan ikke sende en link til denne siden for andre, de vil bli nektet adgang.',
);

// ------------------------------------------------------------------------- //
// File picmgr.php //cpg1.4
// ------------------------------------------------------------------------- //
if (defined('PICMGR_PHP')) $lang_picmgr_php = array(
  'pic_mgr' => 'Bildeadministrator', //cpg1.4
  'select_album' => 'Velg album', //cpg1.4
  'delete' => 'Slett', //cpg1.4
  'confirm_delete1' => 'Er du sikker på at du vil slette dette bildet?', //cpg1.4
  'confirm_delete2' => '\nBildet vil bli permanent slettet.', //cpg1.4
  'apply_modifs' => 'Lagre endringer', //cpg1.4
  'confirm_modifs' => 'Bekreft endringer', //cpg1.4
  'pic_need_name' => 'Bildet må ha et navn !', //cpg1.4
  'no_change' => 'Du gjorde ingen endringer !', //cpg1.4
  'no_album' => '* Ingen album *', //cpg1.4
  'explanation_header' => 'Den egendefinerte sorteringsrekkefølgen du kan spesifisere på denne siden vil bare gjelde dersom', //cpg1.4
  'explanation1' => 'Administrator har satt "Standard sorteringsrekkefølge for filer" i konfigurasjonen til "Posisjon i synkende rekkefølge" or "Posisjon i stigende rekkefølge" (global innstilling for alle brukere som ikke har valg egen sorteringsrekkefølge)', //cpg1.4
  'explanation2' => 'Brukeren har valgt "Posisjon i synkende rekkefølge" eller "Posisjon i stigende rekkefølge" på miniatyrbildesiden (individuell brukerinstilling)', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File pluginmgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('PLUGINMGR_PHP')){

$lang_pluginmgr_php = array(
  'confirm_uninstall' => 'Er du sikker på at du vil AVINSTALLERE denne plugin', //cpg1.4
  'confirm_delete' => 'Er du sikker på at du vil SLETTE denne plugin', //cpg1.4
  'pmgr' => 'Pluginadministrasjon', //cpg1.4
  'name' => 'Navn', //cpg1.4
  'author' => 'Forfatter', //cpg1.4
  'desc' => 'Beskrivelse', //cpg1.4
  'vers' => 'v', //cpg1.4
  'i_plugins' => 'Instalerte plugin', //cpg1.4
  'n_plugins' => 'Plugin som ikke er installert', //cpg1.4
  'none_installed' => 'Ingen installert', //cpg1.4
  'operation' => 'Funksjon', //cpg1.4
  'not_plugin_package' => 'Filen som ble lastet opp er ingen pluginpakke.', //cpg1.4
  'copy_error' => 'Det oppsto en feil ved kopiering av pakken til pluginmappen.', //cpg1.4
  'upload' => 'Last opp', //cpg1.4
  'configure_plugin' => 'Plugininstillinger', //cpg1.4
  'cleanup_plugin' => 'Cleanup plugin', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
  'already_rated' => 'Beklager men du har alt gitt karakter til denne filen',
  'rate_ok' => 'Din stemme ble lagt inn',
  'forbidden' => 'Du kan ikke stemme på dine egne filer.',
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
Selv om administratorer av {SITE_NAME} vil prøve å så raskt som mulig å fjerne eller endre ethvert materiale som er generelt ansett innsigelser mot, kan det være umulig å revidere alle postinger. Du må derfor være klar over at alle postinger til denne siden uttrykker forfatterens synspunkter og meninger, og ikke administratorer eller webmaster (unntatt postinger gjort av disse) som derfor ikke kan bli gjort ansvarlig. <br />
<br />
Du forplikter deg til ikke å poste fornærmelig, uanstendig, ærekrenkende, hatende, truende, seksuelt orientert ellel annet materiale som kan bryte en gyldig straffelov. Du er inneforstått med at webmaster, administratorer og moderatorer av {SITE_NAME} når om helst kan endre eller helt fjerne hvilket som helt innhold. Som bruker er du inneforstått med at all informasjon du har skrevet over blir lagret i en database. Selv om denne informasjonen ikke vil bli gitt til noen tredje part uten din godkjennelse, kan ikke webmaster eller administratorer bli holdt ansvarlig for noe hackerforsøk e.l. som kan føre til at slik data blir kompromittert. <br />
<br />
Denne siden bruker cookies til å lagre informasjon på din lokale maskin. Disse cookier tjener kun for å bedre din opplevelse. Epostadressen blir kun brukt til å bekrefte dine registreringsdetaljer og passord.<br />
<br />
Ved å klikke 'Jeg er enig' nedenfor sier du deg enig i disse betingelsene.
EOT;

$lang_register_php = array(
  'page_title' => 'Brukerregistrering',
  'term_cond' => 'Betingelser',
  'i_agree' => 'Jeg er enig',
  'submit' => 'Send inn registrering',
  'err_user_exists' => 'Brukernavnet du har spesifisert er allerede brukt, velg et annet',
  'err_password_mismatch' => 'De to passordene er ulike, skriv dem på nytt',
  'err_uname_short' => 'Brukernavnet må minst være på to tegn',
  'err_password_short' => 'Passordet må minst være på to tegn',
  'err_uname_pass_diff' => 'Brukernavn og passord må være ulike',
  'err_invalid_email' => 'Epostadresse er ugyldig',
  'err_duplicate_email' => 'En annen bruker er allerede registrert med den epostadressen',
  'enter_info' => 'Skriv inn registreringsinformasjon',
  'required_info' => 'Påkrevd informasjon',
  'optional_info' => 'Ikke påkrevd informasjon',
  'username' => 'Brukernavn',
  'password' => 'Passord',
  'password_again' => 'Skriv passord på nytt',
  'email' => 'Epost',
  'location' => 'Sted',
  'interests' => 'Interesser',
  'website' => 'Hjemmeside',
  'occupation' => 'Arbeidstittel',
  'error' => 'FEIL',
  'confirm_email_subject' => '%s - Registreringsbekreftelse',
  'information' => 'Informasjon',
  'failed_sending_email' => 'Registreringsbekreftelsen kunne ikke sendes!',
  'thank_you' => 'Takk for din registrering.<br /><br />En epost med informasjon om hvordan du kan aktivere din brukerkonto er sendt til epostadressen du oppgav.',
  'acct_created' => 'Din brukerkonto har blitt laget og du kan nå logge inn med ditt brukernavn og passord',
  'acct_active' => 'Din brukerkonto er nå aktiv og du kan logge inn med ditt brukernavn og passord',
  'acct_already_act' => 'Brukerkontoen er allerede aktivert!', //cpg1.4
  'acct_act_failed' => 'Denne brukerkontoen kan ikke aktiveres !',
  'err_unk_user' => 'Valgte bruker eksisterer ikke !',
  'x_s_profile' => '%s\s profil',
  'group' => 'Gruppe',
  'reg_date' => 'Medlem siden',
  'disk_usage' => 'Diskbruk',
  'change_pass' => 'Skift passord',
  'current_pass' => 'Nåværende passord',
  'new_pass' => 'Nytt passord',
  'new_pass_again' => 'Nytt passord igjen',
  'err_curr_pass' => 'Nåværende passord ikke godkjent',
  'apply_modif' => 'Lagre endringer',
  'change_pass' => 'Endre mitt passord',
  'update_success' => 'Din profil ble oppdatert',
  'pass_chg_success' => 'Ditt passord ble endret',
  'pass_chg_error' => 'Ditt passord ble ikke endret',
  'notify_admin_email_subject' => '%s - Registreringsmelding',
  'last_uploads' => 'Sist opplastede fil.<br />Klikk for å se alle filer lastet opp av', //cpg1.4
  'last_comments' => 'Siste kommentar.<br />Klikk for å se alle kommentarer av', //cpg1.4
  'notify_admin_email_body' => 'En ny bruker med brukernavn "%s" har registrert seg i ditt galleri',
  'pic_count' => 'Filer lastet opp', //cpg1.4
  'notify_admin_request_email_subject' => '%s - Registreringsforespørsel', //cpg1.4
  'thank_you_admin_activation' => 'Takk.<br /><br />Din forespørsel for brukerkontoaktivering ble sendt til administrator. Du vil motta en epost ved godkjennelse.', //cpg1.4
  'acct_active_admin_activation' => 'Brukerkontoen er nå aktivert og en epost har blitt sendt til brukeren.', //cpg1.4
  'notify_user_email_subject' => '%s - Registreringsmelding', //cpg1.4
);

$lang_register_confirm_email = <<<EOT
Takk for din registrering på {SITE_NAME}

For å aktivisere din brukerkonto med brukernavn "{USER_NAME}", må du klikke på linken under eller kopiere den inn i din nettleser.

<a href="{ACT_LINK}">{ACT_LINK}</a>

Hilsen,

Administrasjonen på {SITE_NAME}

EOT;

$lang_register_approve_email = <<<EOT
En ny bruker ved navn "{USER_NAME}" har registrert seg i ditt galleri.

For å aktivere brukerkontoen må du klikke på linken under eller kopiere den inn i din nettleser.

<a href="{ACT_LINK}">{ACT_LINK}</a>

EOT;

$lang_register_activated_email = <<<EOT
Din brukerkonto har blitt godkjent og er aktivert.

Du kan nå logge inn på <a href="{SITE_LINK}">{SITE_LINK}</a> med brukernavnet "{USER_NAME}"


Hilsen,

Administrasjonen på {SITE_NAME}

EOT;
}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
  'title' => 'Se over kommentar(er)',
  'no_comment' => 'Ingen kommentar(er) å se over',
  'n_comm_del' => '%s kommentar(er) slettet',
  'n_comm_disp' => 'Antall kommentarer å vise',
  'see_prev' => 'Se forrige',
  'see_next' => 'Se neste',
  'del_comm' => 'Slett valgte kommentarer',
  'user_name' => 'Navn', //cpg1.4
  'date' => 'Dato', //cpg1.4
  'comment' => 'Kommentar', //cpg1.4
  'file' => 'Fil', //cpg1.4
  'name_a' => 'Brukernavn i stigende rekkefølge', //cpg1.4
  'name_d' => 'Brukernavn i synkende rekkefølge', //cpg1.4
  'date_a' => 'Dato i stigende rekkefølge', //cpg1.4
  'date_d' => 'Dato i synkende rekkefølge', //cpg1.4
  'comment_a' => 'Kommentarer i stigende rekkefølge', //cpg1.4
  'comment_d' => 'Kommentarer i synkende rekkefølge', //cpg1.4
  'file_a' => 'Fil i stigende rekkefølge', //cpg1.4
  'file_d' => 'Fil i synkende rekkefølge', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File search.php                                                           //
// ------------------------------------------------------------------------- //


if (defined('SEARCH_PHP')){

$lang_search_php = array(
  'title' => 'Søk i filsamlingen', //cpg1.4
  'submit_search' => 'søk', //cpg1.4
  'keyword_list_title' => 'Nøkkelordliste', //cpg1.4
  'keyword_msg' => 'Listen over inkluderer ikke alt. Ord fra bildetitler og beskrivelser er ikke inkludert. Prøv et fulltekstsøk.',  //cpg1.4
  'edit_keywords' => 'Endre nøkkelord', //cpg1.4
  'search in' => 'Søk i:', //cpg1.4
  'ip_address' => 'IPadresse', //cpg1.4
  'fields' => 'Søk i', //cpg1.4
  'age' => 'Alder', //cpg1.4
  'newer_than' => 'Nyere enn', //cpg1.4
  'older_than' => 'Eldre enn', //cpg1.4
  'days' => 'dager', //cpg1.4
  'all_words' => 'Treff på alle ord (AND)', //cpg1.4
  'any_words' => 'Treff på noen ord (OR)', //cpg1.4
);

$lang_adv_opts = array(
  'title' => 'Tittel', //cpg1.4
  'caption' => 'Beskrivelse', //cpg1.4
  'keywords' => 'Nøkkelord', //cpg1.4
  'owner_name' => 'Navn på eier', //cpg1.4
  'filename' => 'Filnavn', //cpg1.4
);

}

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
  'page_title' => 'Søk nye filer',
  'select_dir' => 'Velg mappe',
  'select_dir_msg' => 'Denne funksjonen lar deg legge til flere filer du har lastet opp til til serveren f.eks med FTP.<br /><br />Velg den mappen du har lastet opp filene i.', //cpg1.4
  'no_pic_to_add' => 'Ingen filer å legge til',
  'need_one_album' => 'Du trenger minst ett album for å bruke denne funksjonen',
  'warning' => 'Advarsel',
  'change_perm' => 'skriptet kan ikke skrive til denne mappen, du må kjøre den skrivbar før du forsøker å legge til filene!',
  'target_album' => '<b>Legg filene &quot;</b>%s<b>&quot; i </b>%s',
  'folder' => 'Mappe',
  'image' => 'fil',
  'album' => 'Album',
  'result' => 'Resultat',
  'dir_ro' => 'Ikke skrivbar. ',
  'dir_cant_read' => 'Ikke lesbar. ',
  'insert' => 'Legger til nye filer til galleriet',
  'list_new_pic' => 'Liste over nye filer',
  'insert_selected' => 'Sett inn valgte filer',
  'no_pic_found' => 'Ingen nye filer ble funnet',
  'be_patient' => 'Vær tålmodig, skriptet trenger tid for å legge inn filene',
  'no_album' => 'intet album valgt',
  'result_icon' => 'klikk for detaljer, eller for å laste på nytt',  //cpg1.4
  'notes' =>  '<ul>'.
                          '<li><b>OK</b> : betyr at filen ble lagt inn'.
                          '<li><b>DP</b> : betyr at filen er et duplikat av en fil som allerede finnes i databasen'.
                          '<li><b>PB</b> : betyr at filen ikke kunne legges inn, sjekk konfigurasjon og katalogtillatelser der filene ligger'.
                          '<li><b>NA</b> : betyr at du ikke har valgt et album filene skal legges inn i, gå \'<a href="javascript:history.back(1)">tilbake</a>\' og velg et album. Om du ikke har noe album <a href="albmgr.php">lag et først</a></li>'.
                          '<li>Dersom OK, DP, PB \'tegnene\' ikke står, klikk på filen for å se feilmelding fra PHPlaget'.
                          '<li>Dersom nettleser din timer ut, trykk last på nytt knappen'.
                          '</ul>',
  'select_album' => 'velg album',
  'check_all' => 'Marker alle',
  'uncheck_all' => 'Avmarker alle',
  'no_folders' => 'Det finnes ingen mapper inne i "albums"-mappen. Lag minst en egendefinert mappe i "albums"-mappen og last opp dine filer dit. Du må ikke laste opp til "userpics" eller "edit"-mappene, de er reservert for httpopplastninger og interne mekaninsmer.', //cpg1.4
   'albums_no_category' => 'Album(er) uten kategori', //cpg1.4 // album pulldown mod, added by frogfoot
  'personal_albums' => '* Personlige album', //cpg1.4 // album pulldown mod, added by frogfoot
  'browse_batch_add' => 'Browsable interface (anbefalt)', //cpg1.4
  'edit_pics' => 'Endre filer', //cpg1.4
  'edit_properties' => 'Albumegenskaper', //cpg1.4
  'view_thumbs' => 'Miniatyrbildevisning', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File stat_details.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('STAT_DETAILS_PHP')) $lang_stat_details_php = array(
  'show_hide' => 'vis/gjem denne kolonnen', //cpg1.4
  'vote' => 'Stemmedetaljer', //cpg1.4
  'hits' => 'Treffdetaljer', //cpg1.4
  'stats' => 'Stemmestatistikk', //cpg1.4
  'sdate' => 'Dato', //cpg1.4
  'rating' => 'Karakter', //cpg1.4
  'search_phrase' => 'Søkesetning', //cpg1.4
  'referer' => 'Referent', //cpg1.4
  'browser' => 'Nettleser', //cpg1.4
  'os' => 'Operativsystem', //cpg1.4
  'ip' => 'IP', //cpg1.4
  'sort_by_xxx' => 'Sorter på %s', //cpg1.4
  'ascending' => 'i stigende rekkefølge', //cpg1.4
  'descending' => 'i synkende rekkefølge', //cpg1.4
  'internal' => 'int', //cpg1.4
  'close' => 'lukk', //cpg1.4
  'hide_internal_referers' => 'gjem internale referenter', //cpg1.4
  'date_display' => 'Datovisning', //cpg1.4
  'submit' => 'effektuer / last på nytt', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File thumbnails.php
// ------------------------------------------------------------------------- //

// Void

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) $lang_upload_php = array(
  'title' => 'Last opp fil',
  'custom_title' => 'Egendefinert Request Form',
  'cust_instr_1' => 'Du kan velge et egendefinert antall opplastningsfelter. Du kan imidlertid ikke velge flere enn begrensningene gitt under.',
  'cust_instr_2' => 'Box Number Requests',
  'cust_instr_3' => 'Filopplastningsfelter: %s',
  'cust_instr_4' => 'URI/URL opplastningsfelter: %s',
  'cust_instr_5' => 'URI/URL opplastningsfelter:',
  'cust_instr_6' => 'Filopplastningsfelter:',
  'cust_instr_7' => 'Skriv inn antall opplastningsfelter du ønsker.  Trykk så \'Fortsett\'. ',
  'reg_instr_1' => 'Ugyldig handling ved opprettelse av skjema.',
  'reg_instr_2' => 'Nå kan du laste opp dine filer med opplastningsfeltene nedenunder. Størrelsen på filene som blir lastet opp fra din nettleser til serveren kan ikke overstige %s KB hver. ZIPfiler som blir lastet opp via \'Filopplastning\' og \'URI/URL Opplastning\' vil forbli komprimert.',
  'reg_instr_3' => 'Dersom du vil pakke ut ZIPfilene, må du bruke opplastningsfeltet i \'Utpakkende ZIPOpplastning\' delen.',
  'reg_instr_4' => 'Når du bruker URI/URL opplastning, skriv stien til filen slik: http://www.mysite.com/images/example.jpg',
  'reg_instr_5' => 'Når du har fylt ut skjemaet, klikk \'Fortsett\'.',
  'reg_instr_6' => 'Utpakkende ZIPOpplastning:',
  'reg_instr_7' => 'Filopplastninger:',
  'reg_instr_8' => 'URI/URL Opplastninger:',
  'error_report' => 'Feilrapport',
  'error_instr' => 'Disse opplastningene feilet:',
  'file_name_url' => 'Filnavn/URL',
  'error_message' => 'Feilmelding',
  'no_post' => 'Fil ikke lastet opp med POST.',
  'forb_ext' => 'Ugyldig filtype.',
  'exc_php_ini' => 'Fil for stor for størrelse tillatt i php.ini.',
  'exc_file_size' => 'Fil for stor for størrelse tillatt i CPG.',
  'partial_upload' => 'Ufullstendig opplastning.',
  'no_upload' => 'Ingen opplastning skjedde.',
  'unknown_code' => 'Ukjent PHP opplastningsfeilkode.',
  'no_temp_name' => 'Ingen opplastning - Ingen tempnavn.',
  'no_file_size' => 'Inneholder ingen data/Ødelagt',
  'impossible' => 'Umylig å flytte.',
  'not_image' => 'Ikke en bildefil/ødelagt',
  'not_GD' => 'Ikke en GD filtype.',
  'pixel_allowance' => 'Høyde og/eller bredde på det opplastede bildet er større enn tillatt i gallerikonfigurasjonen.', //cpg1.4
  'incorrect_prefix' => 'Ugyldig URI/URL prefix',
  'could_not_open_URI' => 'Kunne ikke åpne URI.',
  'unsafe_URI' => 'Sikkerhet ikke mulig å bekrefte.',
  'meta_data_failure' => 'Metadatafeil',
  'http_401' => '401 Uautorisert',
  'http_402' => '402 Betaling påkrevd',
  'http_403' => '403 Ikke tillatt',
  'http_404' => '404 Ikke funnet',
  'http_500' => '500 Intern serverfeil',
  'http_503' => '503 Tjeneste ikke tilgjengelig',
  'MIME_extraction_failure' => 'Kunne ikke bestemme MIME.',
  'MIME_type_unknown' => 'Ukjent MIMEtype',
  'cant_create_write' => 'Kan ikke lage skrivefil.',
  'not_writable' => 'Kan ikke skrive til skrivefil.',
  'cant_read_URI' => 'Kan ikke lese URI/URL',
  'cant_open_write_file' => 'Kan ikke åpne URI skrivefil.',
  'cant_write_write_file' => 'Kan ikke skrive til URI skrivefil.',
  'cant_unzip' => 'Kan ikke pakke ut ZIPfil.',
  'unknown' => 'Ukjent feil',
  'succ' => 'Opplastninger fullført',
  'success' => '%s opplastninger fullført.',
  'add' => 'Klikk \'Fortsett\' for å legge filene i album.',
  'failure' => 'Opplastningsfeil',
  'f_info' => 'Filinformasjon',
  'no_place' => 'Den forrige filen kunne ikke plasseres.',
  'yes_place' => 'Den forrige filen ble plassert.',
  'max_fsize' => 'Maksimal tillatte størrelse på fil er %s KB',
  'album' => 'Album',
  'picture' => 'Fil',
  'pic_title' => 'Filtittel',
  'description' => 'Filbeskrivelse',
  'keywords' => 'Nøkkelord (skill med mellomrom)<br /><a href="#" onClick="return MM_openBrWindow(\'keyword_select.php\',\'selectKey\',\'width=250, height=400, scrollbars=yes,toolbar=no,status=yes,resizable=yes\')">Sett inn fra liste</a>', //cpg1.4
  'keywords_sel' =>'Velg nøkkelord', //cpg1.4
  'err_no_alb_uploadables' => 'Beklager, det finnes ingen album du kan laste opp filer til',
  'place_instr_1' => 'Plasser filene i album.  Du kan skrive inn relevant informasjon om hver fil nå.',
  'place_instr_2' => 'Flere filer trenger plassering. Klikk \'Fortsett\'.',
  'process_complete' => 'Du har plassert alle filene.',
   'albums_no_category' => 'Album utenfor kategori', //cpg1.4. //album pulldown mod, added by frogfoot
  'personal_albums' => '* Personlige album', //cpg1.4 //album pulldown mod, added by frogfoot
  'select_album' => 'Velg album', //cpg1.4 //album pulldown mod, added by frogfoot
  'close' => 'Steng', //cpg1.4
  'no_keywords' => 'Ingen tilgjengelige nøkkelord!', //cpg1.4
  'regenerate_dictionary' => 'Bygg ordliste', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
  'memberlist' => 'Medlems liste', //cpg1.4
  'user_manager' => 'Brukeradministrasjon', //cpg1.4
  'title' => 'Administrer brukere',
  'name_a' => 'Navn i stigende rekkefølge',
  'name_d' => 'Navn i synkende rekkefølge',
  'group_a' => 'Grupper i stigende rekkefølge',
  'group_d' => 'Grupper i synkende rekkefølge',
  'reg_a' => 'Registreringsdato i stigende rekkefølge',
  'reg_d' => 'Registreringsdato i synkende rekkefølge',
  'pic_a' => 'Filantall i stigende rekkefølge',
  'pic_d' => 'Filantall i synkende rekkefølge',
  'disku_a' => 'Diskforbruk i stigende rekkefølge',
  'disku_d' => 'Diskforbruk i synkende rekkefølge',
  'lv_a' => 'Siste besøk i stigende rekkefølge',
  'lv_d' => 'Siste besøk i synkende rekkefølge',
  'sort_by' => 'Sorter brukere etter',
  'err_no_users' => 'Brukertabellen er tom !',
  'err_edit_self' => 'Du kan ikke endre din egen profil, bruk \'Min profil\' til det',
  'edit' => 'Endre', //cpg1.4
  'with_selected' => 'Med valgte:', //cpg1.4
  'delete' => 'Slett', //cpg1.4
  'delete_files_no' => 'behold offentlige filer (men anonymiser)', //cpg1.4
  'delete_files_yes' => 'slett offentlige filer også', //cpg1.4
  'delete_comments_no' => 'behold kommentarer (men anonymiser)', //cpg1.4
  'delete_comments_yes' => 'slett kommentarer også', //cpg1.4
  'activate' => 'Aktiver', //cpg1.4
  'deactivate' => 'Deaktiver', //cpg1.4
  'reset_password' => 'Sett passord', //cpg1.4
  'change_primary_membergroup' => 'Skift primærgruppe', //cpg1.4
  'add_secondary_membergroup' => 'Legg til sekundær gruppe', //cpg1.4
  'name' => 'Brukernavn',
  'group' => 'Gruppe',
  'inactive' => 'Inaktiv',
  'operations' => 'Handlinger',
  'pictures' => 'Filer',
  'disk_space_used' => 'Diskplass brukt', //cpg1.4
  'disk_space_quota' => 'Diskkvote', //cpg1.4
  'registered_on' => 'Registrering', //cpg1.4
  'last_visit' => 'Siste besøk',
  'u_user_on_p_pages' => '%d brukere på %d side(r)',
  'confirm_del' => 'Er du sikker på at du vil SLETTE denne brukeren ? \\nAlle filer og album knyttet til denne brukeren blir også slettet.', //js-alert
  'mail' => 'Epost',
  'err_unknown_user' => 'Valgte bruker finnes ikke !',
  'modify_user' => 'Endre bruker',
  'notes' => 'Notater',
  'note_list' => '<li>Om du ikke vil skifte nåværende passord, la passordfeltet være blankt',
  'password' => 'Passord',
  'user_active' => 'Bruker er aktiv',
  'user_group' => 'Brukergruppe',
  'user_email' => 'Brukers epost',
  'user_web_site' => 'Brukers webside',
  'create_new_user' => 'Lag ny bruker',
  'user_location' => 'Brukers lokalisering',
  'user_interests' => 'Brukers interesser',
  'user_occupation' => 'Brukers tittel',
  'user_profile1' => '$user_profile1', //cpg1.4
  'user_profile2' => '$user_profile2', //cpg1.4
  'user_profile3' => '$user_profile3', //cpg1.4
  'user_profile4' => '$user_profile4', //cpg1.4
  'user_profile5' => '$user_profile5', //cpg1.4
  'user_profile6' => '$user_profile6', //cpg1.4
  'latest_upload' => 'Siste opplastninger',
  'never' => 'aldri',
  'search' => 'Brukersøk', //cpg1.4
  'submit' => 'Lagre', //cpg1.4
  'search_submit' => 'Søk!', //cpg1.4
  'search_result' => 'Søkeresultat for: ', //cpg1.4
  'alert_no_selection' => ' Du må velge minst en bruker først!', //cpg1.4 //js-alert
  'password' => 'passord', //cpg1.4
  'select_group' => 'Velg gruppe', //cpg1.4
  'groups_alb_access' => 'Albumtilgang med gruppe', //cpg1.4
  'album' => 'Album', //cpg1.4
  'category' => 'Kategori', //cpg1.4
  'modify' => 'Endre?', //cpg1.4
  'group_no_access' => 'Denne gruppen har ingen spesiell tilgang', //cpg1.4
  'notice' => 'Notis', //cpg1.4
  'group_can_access' => 'Album der kun "%s" har tilgang', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //

if (defined('UTIL_PHP')) {
$lang_util_desc_php = array(
'Oppdaterer titler fra filnavn', //cpg1.4
'Sletter titler', //cpg1.4
'Bygger miniatyrbilder og reduserte bildestørrelser på nytt', //cpg1.4
'Sletter originalbilder og erstatter dem med reduserte bildestørrelser', //cpg1.4
'Sletter original eller mellomstørrelse for å frigi diskplass', //cpg1.4
'Sletter foreldreløse kommentarer', //cpg1.4
'Leser inn filstørrelser og dimensjoner på nytt (om du manuelt har endret bildene)', //cpg1.4
'Nullstill visningsteller', //cpg1.4
'Viser phpinfo', //cpg1.4
'Oppdaterer databasen', //cpg1.4
'Viser loggfiler', //cpg1.4
);
$lang_util_php = array(
  'title' => 'Administrasjonsverktøy (Endre størrelser på bilder)',
  'what_it_does' => 'Hva som skjer',
  'file' => 'Fil',
  'problem' => 'Problem', //cpg1.4
  'status' => 'Status', //cpg1.4
  'title_set_to' => 'tittel satt til',
  'submit_form' => 'lagre',
  'updated_succesfully' => 'oppdatert',
  'error_create' => 'FIL ved oppretting',
  'continue' => 'Prossesser flere bilder',
  'main_success' => 'Filen %s ble brukt som hovedfil',
  'error_rename' => 'Feil ved navneendring fra %s til %s',
  'error_not_found' => 'Filen %s ble ikke funnet',
  'back' => 'tilbake til hoved',
  'thumbs_wait' => 'Oppdaterer miniatyrbilder og/eller reduserte bildestørrelser, vennligst vent...',
  'thumbs_continue_wait' => 'Fortsetter å oppdatere miniatyrbilder og/eller reduserte bildestørrelser...',
  'titles_wait' => 'Oppdaterer titler, vennligst vent...',
  'delete_wait' => 'Sletter titles, vennligst vent...',
  'replace_wait' => 'Sletter originaler og erstatter dem med reduserte bildestørrelser, vennligst vent..',
  'instruction' => 'Hurtiginstruksjoner',
  'instruction_action' => 'Velg handling',
  'instruction_parameter' => 'Sett parametre',
  'instruction_album' => 'Velg album',
  'instruction_press' => 'Trykk %s',
  'update' => 'Oppdater miniatyrbilder og/eller reduserte bildestørrelser',
  'update_what' => 'Hva bør oppdateres',
  'update_thumb' => 'Kun miniatyrbilder',
  'update_pic' => 'Kun reduserte bildestørrelser',
  'update_both' => 'Både miniatyrbilder og reduserte bildestørrelser',
  'update_number' => 'Antall prossesserte bilder pr. klikk',
  'update_option' => '(Prøv å sette dette lavere om du får problemer med tidsavbrudd)',
  'filename_title' => 'Filnavn &rArr; Filtittel',
  'filename_how' => 'Hvordan bør filnavnet endres',
  'filename_remove' => 'Fjern .jpg endingen og erstatt _ (underscore) med mellomrom',
  'filename_euro' => 'Endre 2003_11_23_13_20_20.jpg til 23/11/2003 13:20',
  'filename_us' => 'Endre 2003_11_23_13_20_20.jpg til 11/23/2003 13:20',
  'filename_time' => 'Endre 2003_11_23_13_20_20.jpg til 13:20',
  'delete' => 'Slett filtitler eller originalstørrelsen på bildene',
  'delete_title' => 'Slett filtitler',
  'delete_title_explanation' => 'Dette vil fjerne alle titler på filene i albumet du spesifiserer.', //cpg1.4
  'delete_original' => 'Slett originalstørrelsen til bildene',
  'delete_original_explanation' => 'Dette vil fjerne originalbildene.', //cpg1.4
  'delete_intermediate' => 'Slette bilder i mellomstørrelse', //cpg1.4
  'delete_intermediate_explanation' => 'Dette vil slette bilder i mellomstørrelse (normal).<br />Bruk dette til å frigi diskplass om du har slått av \'Opprett bilder i mellomstørrelse\' i konfigurasjonen etter at du har lagt til bilder.', //cpg1.4
  'delete_replace' => 'Sletter originalbildene og erstatter dem med reduserte bildestørrelser',
  'titles_deleted' => 'Alle titler i det spesifiserte album ble slettet', //cpg1.4
  'deleting_intermediates' => 'Sletter bilder i mellomstørrelse, vennligst vent...', //cpg1.4
  'searching_orphans' => 'Søker etter foreldreløse bilder, vennligst vent...', //cpg1.4
  'select_album' => 'Velg album',
  'delete_orphans' => 'Slett kommentarer på manglende filer', //cpg1.4
  'delete_orphans_explanation' => 'Dette vil finne og la deg slette kommentarer som er knyttet til filer som ikke lenger finnes i galleriet.<br />Sjekker alle album.', //cpg1.4
  'refresh_db' => 'Last fildimensjoner og filstørrelser på nytt', //cpg1.4
  'refresh_db_explanation' => 'Dette vil lese inn filstørrelser og dimensjoner på nytt. Bruk dette om diskkvoter er feil eller om du har endret filene manuelt.', //cpg1.4
  'reset_views' => 'Nullstill visningstellere', //cpg1.4
  'reset_views_explanation' => 'Setter alle visningstellere til null på alle filer i valgte album.', //cpg1.4
  'orphan_comment' => 'foreldreløs kommentar funnet',
  'delete' => 'Slett',
  'delete_all' => 'Slett alle',
  'delete_all_orphans' => 'Slette alle foreldreløse?', //cpg1.4
  'comment' => 'Kommentar: ',
  'nonexist' => 'tilknyttet fil som ikke finnes # ',
  'phpinfo' => 'Vis phpinfo',
  'phpinfo_explanation' => 'Inneholder teknisk informasjon om din server.<br /> - Du kan bli spurt om informasjon herfra når du spør om support.', //cpg1.4
  'update_db' => 'Oppdater database',
  'update_db_explanation' => 'Dersom du har feilplassert copperminefiler, lagt til en modifikasjon eller oppgradert fra en tidligere versjon av coppermine, kjør databaseoppdateringen en gang. Dette vil lage nødvendige tabeller og/eller konfigurasjonsverdier i din copperminedatabase.',
  'view_log' => 'Se loggfiler', //cpg1.4
  'view_log_explanation' => 'Coppermine kan loggføre forskjellige handlinger brukerne utfører. Du kan se på disse loggene dersom du har slått på logging i <a href="admin.php">coppermine konfigurasjon</a>.', //cpg1.4
  'versioncheck' => 'Sjekk versjoner', //cpg1.4
  'versioncheck_explanation' => 'Sjekk versjoner på dine file for å finne ut om du har oppdatert alle filene ved en oppgradering, eller om copperminefiler har blitt oppdatert siden en pakke ble sluppet.', //cpg1.4
  'bridgemanager' => 'Broadministrasjon', //cpg1.4
  'bridgemanager_explanation' => 'Slå integrering (bro) mellom Coppermine og et annet program på eller av (f.eks. ditt BBS).', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File versioncheck.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('VERSIONCHECK_PHP')) $lang_versioncheck_php = array(
  'title' => 'Versionsjekk', //cpg1.4
  'what_it_does' => 'Denne siden er ment for brukere som har oppdatert sin Coppermineinstallasjon. Dette skriptet går gjennom filene på din webserver og forsøker å fastslå om dine filer har samme versjon som siste på http://coppermine.sourceforge.net. Her vises da filene du skulle oppdatere også.<br />Skriptet vil vise alt som må fikses i rødt. Oppføringer i gult må ses på. Oppføringer i grønt (eller din standard fontfarge) er OK.<br />Klikk på hjelpeikoner for å finne ut mer.', //cpg1.4
  'online_repository_unable' => 'Ikke i stand til å koble til http://coppermine.sourceforge.net', //cpg1.4
  'online_repository_noconnect' => 'Coppermine kunne ikke koble til http://coppermine.sourceforge.net. Dette kan ha to årsaker:', //cpg1.4
  'online_repository_reason1' => 'http://coppermine.sourceforge.net er midlertidig nede - sjekk om du kan se denne siden: %s - dersom du ikke kan det, prøv igjen senere.', //cpg1.4
  'online_repository_reason2' => 'PHP på din webserver har %s slått av (det er slått på som standard). Dersom du kan administrere serveren, slå dette på i <i>php.ini</i> (tillat det i det minste å bli overridden med %s). Dersom du har en webhost, må du sannsynligvis belage deg på at du ikke kan sammenligne dine filer med siste versjon. Denne siden vil da kun vise filversjonene til din distribusjon - oppdateringer vil ikke bli vist.', //cpg1.4
  'online_repository_skipped' => 'Hoppet over kobling til http://coppermine.sourceforge.net', //cpg1.4
  'online_repository_to_local' => 'Dette skriptet viser den lokale kopien av filene nå. Dataene kan være unøyaktige om du har oppdatert Coppermine uten å laste opp alle filene. Endringer av filene etter releasen vil heller ikke bli tatt med.', //cpg1.4
  'local_repository_unable' => 'Kan ikke koble til din server', //cpg1.4
  'local_repository_explanation' => 'Coppermine kan ikke koble til filen %s på din webserver. Dete betyr sannsynligvis at du ikke har lastet opp filen til din webserver. Gjør det og prøv denne siden igjen (trykk refresh).<br />Dersom skriptet fortsatt feiler har din webhost kanskje slått av deler av <a href="http://www.php.net/manual/en/ref.filesystem.php">PHPs filsystem funksjoner</a> helt. Om dette er tilfelle kan du ikke bruke dette skriptet i det hele tatt, beklager.', //cpg1.4
  'coppermine_version_header' => 'Installert Coppermineversjon', //cpg1.4
  'coppermine_version_info' => 'Du har installert: %s', //cpg1.4
  'coppermine_version_explanation' => 'Dersom du tror dette er helt feil, og du skulle ha kjørt en nyere versjon av Coppermine, har du sannsynligvis ikke lastet opp siste versjon av fileen <i>include/init.inc.php</i>', //cpg1.4
  'version_comparison' => 'Sammenligning av Versjoner', //cpg1.4
  'folder_file' => 'mappe/fil', //cpg1.4
  'coppermine_version' => 'cpg versjon', //cpg1.4
  'file_version' => 'fil versjon', //cpg1.4
  'webcvs' => 'web svn', //cpg1.4
  'writable' => 'skrivbar', //cpg1.4
  'not_writable' => 'ikke skrivbar', //cpg1.4
  'help' => 'Hjelp', //cpg1.4
  'help_file_not_exist_optional1' => 'fil/mappe finnes ikke', //cpg1.4
  'help_file_not_exist_optional2' => 'Filen/mappen %s ble ikke funnet på din server. Selv om den ikke er påkrevd burde du laste den opp til webserveren din om du har problemer.', //cpg1.4
  'help_file_not_exist_mandatory1' => 'fil/mappe finnes ikke', //cpg1.4
  'help_file_not_exist_mandatory2' => 'Filen/mappen %s ble ikke funnet på din server, selv om den er påkrevd. Last opp filen til din webserver.', //cpg1.4
  'help_no_local_version1' => 'Ingen versjonsinfo for lokal fil', //cpg1.4
  'help_no_local_version2' => 'Skriptet kunne ikke finne versjonsinformasjon for loakl fil - filen er enten utdatert eller så har du fjernet versjonsinformasjonen når du har endret den. Det er anbefalt å oppdatere filen.', //cpg1.4
  'help_local_version_outdated1' => 'Lokal versjon utdatert', //cpg1.4
  'help_local_version_outdated2' => 'Din versjon av filen ser ut til å tilhøre en eldre versjon av Coppermine (du har sannsynligvis oppgradert). Oppdater denne filen også.', //cpg1.4
  'help_local_version_na1' => 'Kunne ikke finne cvsversjon', //cpg1.4
  'help_local_version_na2' => 'Skriptet kunne ikke finne cvsversjonen av av filen på din webserver. Du bør laste opp filen på nytt fra installasjonspakken.', //cpg1.4
  'help_local_version_dev1' => 'Utviklingsversjon', //cpg1.4
  'help_local_version_dev2' => 'Filen på din webserver ser ut til å være nyere enn din Coppermineversjon. Du kjører enten en utviklingsversjon (du bør kun gjøre det om du vet hva du gjør), eller så har du oppgradert din Coppermine installasjon uten å laste opp ny versjon av include/init.inc.php', //cpg1.4
  'help_not_writable1' => 'Ikke skrivbar mappe', //cpg1.4
  'help_not_writable2' => 'Endre filrettigheter (CHMOD) for å gi skriptet skrivetilgang til mappen %s og alt i den mappen.', //cpg1.4
  'help_writable1' => 'Skrivbar mappe', //cpg1.4
  'help_writable2' => 'Mappen %s er skrivbar. Dette er en unødvendig sikkerhetsrisiko, Coppermine trenger kun lese/kjøretilgang.', //cpg1.4
  'help_writable_undetermined' => 'Coppermine kunne ikke avgjøre om mappen er skrivbar.', //cpg1.4
  'your_file' => 'din fil', //cpg1.4
  'reference_file' => 'referansefil', //cpg1.4
  'summary' => 'Oppsummering', //cpg1.4
  'total' => 'Total antall filer/mapper undersøkt', //cpg1.4
  'mandatory_files_missing' => 'Påkrevde mapper som mangler', //cpg1.4
  'optional_files_missing' => 'Ikke påkrevde mapper som mangler', //cpg1.4
  'files_from_older_version' => 'Filer etterlatt fra utdaterte Coppermineversjoner', //cpg1.4
  'file_version_outdated' => 'Utdaterte filversjoner', //cpg1.4
  'error_no_data' => 'Skriptet gjorde en feil, det kunne ikke informasjon. Beklager.', //cpg1.4
  'go_to_webcvs' => 'gå til %s', //cpg1.4
  'options' => 'Opsjoner', //cpg1.4
  'show_optional_files' => 'vis valgfrie mapper/filer', //cpg1.4
  'show_mandatory_files' => 'vis påkrevde filer', //cpg1.4
  'show_file_versions' => 'vis filversjoner', //cpg1.4
  'show_errors_only' => 'vis kun mapper/filer med feil', //cpg1.4
  'show_permissions' => 'vis tillatelser for mappe', //cpg1.4
  'show_condensed_output' => 'vis sammenkortet (for enklere skjermdumper)', //cpg1.4
  'coppermine_in_webroot' => 'coppermine er installert som webroot', //cpg1.4
  'connect_online_repository' => 'prøv å koble til online repository', //cpg1.4
  'show_additional_information' => 'vis ytterligere informasjon', //cpg1.4
  'no_webcvs_link' => 'ikke vis webcvslinker', //cpg1.4
  'stable_webcvs_link' => 'vis webcvslinker til stabil versjon', //cpg1.4
  'devel_webcvs_link' => 'vis webcvslinker til utviklingsversjon', //cpg1.4
  'submit' => 'lagre endringer / last på nytt', //cpg1.4
  'reset_to_defaults' => 'tilbakestill til standardverdier', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File view_log.php  //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('VIEWLOG_PHP')) $lang_viewlog_php = array(
  'delete_all' => 'Slett alle logger', //cpg1.4
  'delete_this' => 'Slett denne loggen', //cpg1.4
  'view_logs' => 'Se logger', //cpg1.4
  'no_logs' => 'Ingen logger.', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File xp_publish.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('XP_PUBLISH_PHP')) {

$lang_xp_publish_client = <<<EOT
<h1>XP Web Publishing Wizard Client</h1><p>Denne modulen lar deg bruke <b>Windows XP</b> web publishing wizard med Coppermine.</p><p>Koden er basert på en melding postet av
EOT;

$lang_xp_publish_required = <<<EOT
<h2>Hva er påkrevd</h2><ul><li>Windows XP.</li><li>En fungerende installasjon av Coppermine der <b>webopplastningsfunksjonen virker.</b></li></ul><h2>Hvordan installere på klienten</h2><ul><li>Høyreklikk på
EOT;

$lang_xp_publish_select = <<<EOT
Velg &quot;lagre som..&quot;. Lagre filen på din maskin. Sjekk at filens navn er <b>cpg_###.reg</b> (### representerer en numerisk timestamp) når du lagrer filen. Endre navnet om nødvendig (la tallene stå). Dobbeltklikk på filen når den er lastet ferdig, for å registrere din server i webpubliseringsveiviseren.</li></ul>
EOT;

$lang_xp_publish_testing = <<<EOT
<h2>Testing</h2><ul><li>Velg på noen filer i Windows Utforsker, og klikk <b>Publish xxx on the web</b> i venstre rute.</li><li>Bekreft ditt filvalg. Klikk på <b>Neste</b>.</li><li>I listen som kommer opp, velg ditt fotoalbum. Dersom det ikke kommer opp , sjekk at du har installert <b>cpg_pub_wizard.reg</b> som beskrevet over.</li><li>Skriv inn din innloggingsinformasjon om det behøves.</li><li>Velg et album for bildene, eller lag et nytt.</li><li>Klikk på <b>neste</b>. Opplastingen av dine bilder starter.</li><li>Når opplastningen er fullført, sjekk ditt galleri for å se om bildene er korrekt lastet opp.</li></ul>
EOT;

$lang_xp_publish_notes = <<<EOT
<h2>Notater :</h2><ul><li>Med en gang opplastningen er startet kan ikke veiviseren vise feilmeldinger fra skriptet, så du kan ikke vite om opplastningen ble vellykket eller ikke før du sjekker galleriet.</li><li>Dersom opplastningen var mislykket, slå på &quot;Debug modus&quot; i administrasjonsverktøyet til Coppermine. Prøv med ett enkelt bilde, og sjekk feilmeldinger i loggen
EOT;

$lang_xp_publish_flood = <<<EOT
fil i Copperminemappen på din server.</li><li>For å forhindre at galleriet ditt blir <i>flooded</i> av bilder lastet opp med veiviseren , kan kun <b>galleri administratorer</b> og <b>brukere som har egne album</b> bruke dette.</li>
EOT;



$lang_xp_publish_php = array(
  'title' => 'Veiviser for Coppermine - XP Web Publishing', //cpg1.4
  'welcome' => 'Velkommen <b>%s</b>,', //cpg1.4
  'need_login' => 'Du må logge inn på galleriet med din nettleser før du kan bruke denne veiviseren.<p/><p>Når du logger inn, velg <b>husk meg</b> om den er tilgjengelig.', //cpg1.4
  'no_alb' => 'Beklager, men det finnes ingen album du har lov til å laste opp filer med denne veiviseren.', //cpg1.4
  'upload' => 'Last dine bilder opp i et eksisterende album', //cpg1.4
  'create_new' => 'Lag et nytt album for dine bilder', //cpg1.4
  'album' => 'Album', //cpg1.4
  'category' => 'Kategori', //cpg1.4
  'new_alb_created' => 'Ditt nye album &quot;<b>%s</b>&quot; ble opprettet.', //cpg1.4
  'continue' => 'Trykk &quot;Neste&quot; for å laste opp dine bilder', //cpg1.4
  'link' => 'denne linken', //cpg1.4
);
}
?>