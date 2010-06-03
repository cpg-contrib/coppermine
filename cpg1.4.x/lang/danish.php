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
  $Source: /cvsroot/coppermine/stable/lang/danish.php,v $
  $Revision$
  $Author$
  $Date$
**********************************************/

if (!defined('IN_COPPERMINE')) { die('Not in Coppermine...');}

// info about translators and translated language
$lang_translation_info = array(
  'lang_name_english' => 'Danish', //cpg1.4
  'lang_name_native' => 'Dansk', //cpg1.4
  'lang_country_code' => 'dk', //cpg1.4
  'trans_name'=> 'Biskop + Mimer',
  'trans_email' => '',
  'trans_website' => '',
  'trans_date' => '2009-05-30',
);

$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('Byte', 'KB', 'MB');

// Day of weeks and months
$lang_day_of_week = array('Søn.', 'Man.', 'Tir.', 'Ons.', 'Tor.', 'Fre.', 'Lør.');
$lang_month = array('Jan.', 'Feb.', 'Mar.', 'Apr.', 'Maj.', 'Jun.', 'Jul.', 'Aug.', 'Sep.', 'Okt.', 'Nov.', 'Dec.');

// Some common strings
$lang_yes = 'Ja';
$lang_no  = 'Nej';
$lang_back = 'Tilbage';
$lang_continue = 'Fortsæt';
$lang_info = 'Information';
$lang_error = 'Fejl';
$lang_check_uncheck_all = 'Markere alle/Fjern alle markeringer'; //cpg1.4

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$album_date_fmt =    '%d. %B, %Y';
$lastcom_date_fmt =  '%d/%m/%y kl. %H:%M';
$lastup_date_fmt = '%d. %B, %Y';
$register_date_fmt = '%d. %B, %Y';
$lasthit_date_fmt = '%d. %B, %Y kl. %%H:%M';
$comment_date_fmt =  '%d. %B, %Y kl. %H:%M';
$log_date_fmt = '%d. %B, %Y kl. %H:%M'; //cpg1.4

// For the word censor
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'deefterfølgende', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*');

$lang_meta_album_names = array(
  'random' => 'Tilfældige filer',
  'lastup' => 'Seneste filer',
  'lastalb'=> 'Sidst opdaterede albums',
  'lastcom' => 'Seneste kommentarer',
  'topn' => 'Mest viste',
  'toprated' => 'Mest populære',
  'lasthits' => 'Sidst viste',
  'search' => 'Søgeresultat',
  'favpics'=> 'Foretrukne filer',  //cpg1.4
);

$lang_errors = array(
  'access_denied' => 'Du har ikke tilladelse til at se denne side.',
  'perm_denied' => 'Du har ikke tilladelse til at udføre denne handling.',
  'param_missing' => 'Script blev kaldt uden det/de nødvendige parametre.',
  'non_exist_ap' => 'Det valgte album/den valgte fil eksistere ikke!',
  'quota_exceeded' => 'Disk kvote overskredet<br /><br />Du har plads til [quota]K, Dine filer bruger [space]K, tilføjelse af denne fil medfører en overskridelse af din tilladte kvote.',
  'gd_file_type_err' => 'Når der anvendes GD billedeteknik, er tilladte typer kun JPEG og PNG.',
  'invalid_image' => 'Billedet som du har uploadet er defekt eller kan ikke bruges med GD billedeteknik',
  'resize_failed' => 'Ikke muligt at oprette minibillede eller mellemstort billede.',
  'no_img_to_display' => 'Intet billede at vise',
  'non_exist_cat' => 'Den valgte kategori findes ikke',
  'orphan_cat' => 'En kategori har ikke et tilhørsforhold. Kør kategori manager for, at rette problemet!',
  'directory_ro' => 'Mappen \'%s\' er skrivebeskyttet, filer kan ikke slettes.',
  'non_exist_comment' => 'Den valgte kommentar findes ikke.',
  'pic_in_invalid_album' => 'Filen er i et ikke eksisterende album (%s)!?',
  'banned' => 'Din adgang til denne side er spærret.',
  'not_with_udb' => 'Denne funktion er deaktiveret i Coppermine, da den er integreret med forum software. Enten er det du ønsker at gøre ikke understøttet i denne opsætning eller også skal det gøres vha. forum software.',
  'offline_title' => 'Offline',
  'offline_text' => 'Galleriet er offline lige nu - prøv igen senere',
  'ecards_empty' => 'Der findes ingen e-postkort, der kan vises. Kontroller at du har aktiveret e-postkort logning i opsætningen!',
  'action_failed' => 'Handling fejlede.  Coppermine kan ikke udføre den ønskede handling.',
  'no_zip' => 'Understøttelse af ZIP filer er ikke tilgængelig. Kontakt venligst administratoren af galleriet.',
  'zip_type' => 'Du har ikke tilladelse til at uploade zip filer.',
  'database_query' => 'Det opstod en fejl under søgning i databasen', //cpg1.4
  'register_globals_on' => 'PHP funktionen register_globals er slået til på din server, hvilket er en dårlig ide på grund af sikkerheden. Det anbefales på det kraftigste, at slå den fra. [<a href="http://forum.coppermine-gallery.net/index.php/topic,59569.0.html" rel="external" class="external">more</a>]',
);

$lang_bbcode_help_title = 'Hjælp til bbkode '; //cpg1.4
$lang_bbcode_help = 'Du kan oprette klikbare links og noget formatering i dette felt, ved brug af bbcode: <li>[b]Fed[/b] =&gt; <b>Fed</b></li><li>[i]Kursiv[/i] =&gt; <i>Kursiv</i></li><li>[url=http://dinside.dk/]Url Tekst[/url] =&gt; <a href="http://dinside.dk">Url Tekst</a></li><li>[email]bruger@domain.dk[/email] =&gt; <a href="mailto:bruger@domain.dk">bruger@domain.dk</a></li><li>[color=red]Tekst[/color] =&gt; <span style="color:red">Tekst</span></li><li>[img]http://Coppermine-gallery.net/demo/cpg14x/images/red.gif[/img] => <img src="../images/red.gif" border="0" alt="" /></li>'; //cpg1.4

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
  'home_title' => 'Gå til startsiden',
  'home_lnk' => 'Startsiden',
  'alb_list_title' => 'Gå til albumlisten',
  'alb_list_lnk' => 'Albumliste',
  'my_gal_title' => 'Gå til personligt galleri',
  'my_gal_lnk' => 'Mit galleri',
  'my_prof_title' => 'Gå til min profil', //cpg1.4
  'my_prof_lnk' => 'Min profil',
  'adm_mode_title' => 'Skift til admin tilstand',
  'adm_mode_lnk' => 'Admin tilstand',
  'usr_mode_title' => 'Skift til bruger tilstand',
  'usr_mode_lnk' => 'Bruger tilstand',
  'upload_pic_title' => 'Upload en fil til et album',
  'upload_pic_lnk' => 'Upload fil',
  'register_title' => 'Opret en konto',
  'register_lnk' => 'Registrer',
  'login_title' => 'Log ind', //cpg1.4
  'login_lnk' => 'Log ind',
  'logout_title' => 'Log ud', //cpg1.4
  'logout_lnk' => 'Log ud',
  'lastup_title' => 'Vis nyeste uploads', //cpg1.4
  'lastup_lnk' => 'Nyeste uploads',
  'lastcom_title' => 'Vis nyeste kommentar', //cpg1.4
  'lastcom_lnk' => 'Nyeste kommentar',
  'topn_title' => 'Mest viste filer', //cpg1.4
  'topn_lnk' => 'Mest viste',
  'toprated_title' => 'Vis topkarakterer', //cpg1.4
  'toprated_lnk' => 'Topkarakter',
  'search_title' => 'Søg i galleriet', //cpg1.4
  'search_lnk' => 'Søg',
  'fav_title' => 'Vis mine Favoritter', //cpg1.4
  'fav_lnk' => 'Mine Favoritter',
  'memberlist_title' => 'Vis medlemsliste',
  'memberlist_lnk' => 'Medlemsliste',
  'faq_title' => 'Ofte Stillede Spørgsmål (OSS) om galleriet &quot;Coppermine&quot;',
  'faq_lnk' => 'OSS (FAQ)',
);

$lang_gallery_admin_menu = array(
  'upl_app_title' => 'Upload til godkendelse', //cpg1.4
  'upl_app_lnk' => 'Upload til godkendelse',
  'admin_title' => 'Gå til opsætning', //cpg1.4
  'admin_lnk' => 'Opsætning', //cpg1.4
  'albums_title' => 'Gå til album administration', //cpg1.4
  'albums_lnk' => 'Albums',
  'categories_title' => 'Gå til kategori administration', //cpg1.4
  'categories_lnk' => 'Kategorier',
  'users_title' => 'Gå til bruger administration', //cpg1.4
  'users_lnk' => 'Brugere',
  'groups_title' => 'Gå til gruppe administration', //cpg1.4
  'groups_lnk' => 'Grupper',
  'comments_title' => 'Godkend kommentarer', //cpg1.4
  'comments_lnk' => 'Kommentarer',
  'searchnew_title' => 'Gå til massetilføjelse af filer', //cpg1.4
  'searchnew_lnk' => 'Massetilføjelse',
  'util_title' => 'Gå til admin værktøjer', //cpg1.4
  'util_lnk' => 'Admin værktøjer',
  'key_title' => 'Gå til Nøgleord', //cpg1.4
  'key_lnk' => 'Nøgleord', //cpg1.4
  'ban_title' => 'Gå til Blokerede brugere', //cpg1.4
  'ban_lnk' => 'Blokerede brugere',
  'db_ecard_title' => 'Gå til administration af e-postkort', //cpg1.4
  'db_ecard_lnk' => 'Vis e-postkort',
  'pictures_title' => 'Sorter mine billeder', //cpg1.4
  'pictures_lnk' => 'Sorter mine billeder', //cpg1.4
  'documentation_lnk' => 'Dokumentation', //cpg1.4
  'documentation_title' => 'Coppermine manual', //cpg1.4
);

$lang_user_admin_menu = array(
  'albmgr_title' => 'Opret / ordne albums', //cpg1.4
  'albmgr_lnk' => 'Opret / ordne mine albums',
  'modifyalb_title' => 'Gå til Ret i mit album',  //cpg1.4
  'modifyalb_lnk' => 'Ret i mit album',
  'my_prof_title' => 'Gå til Min profil', //cpg1.4
  'my_prof_lnk' => 'Min profil',
);

$lang_cat_list = array(
  'category' => 'Kategori',
  'albums' => 'Album',
  'pictures' => 'Filer',
);

$lang_album_list = array(
  'album_on_page' => '%d album på %d side(r)',
);

$lang_thumb_view = array(
  'date' => 'DATO',
  //Sort by filename and title
  'name' => 'FILNAVN',
  'title' => 'TITEL',
  'sort_da' => 'Sorter stigende efter dato',
  'sort_dd' => 'Sorter faldende efter dato',
  'sort_na' => 'Sorter stigende efter navn',
  'sort_nd' => 'Sorter faldende efter navn',
  'sort_ta' => 'Sorter stigende efter titel',
  'sort_td' => 'Sorter faldende efter titel',
  'position' => 'Position', //cpg1.4
  'sort_pa' => 'Sorter på position i stigende rækkefølge', //cpg1.4
  'sort_pd' => 'Sorter på position i faldende rækkefølge', //cpg1.4
  'download_zip' => 'Hent som Zip fil',
  'pic_on_page' => '%d filer på %d side(r)',
  'user_on_page' => '%d brugere på %d side(r)',
  'enter_alb_pass' => 'Skriv Album adgangskode',
  'invalid_pass' => 'Ugyldig adgangskode',
  'pass' => 'Adgangskode', //cpg1.4
  'submit' => 'Send' //cpg1.4
);

$lang_img_nav_bar = array(
  'thumb_title' => 'Retur til oversigt',
  'pic_info_title' => 'Vis/skjul filinformation',
  'slideshow_title' => 'Diasshow',
  'ecard_title' => 'Send denne fil som et e-postkort',
  'ecard_disabled' => 'E-postkort er slået fra',
  'ecard_disabled_msg' => 'Du har ikke tilladelse til at sende E-postkort', //js-alert
  'prev_title' => 'Se forrige fil',
  'next_title' => 'Se næste fil',
  'pic_pos' => 'FIL %s/%s',
  'report_title' => 'Rapporter denne fil til administrator', //cpg1.4
  'go_album_end' => 'Gå til sidste', //cpg1.4
  'go_album_start' => 'Tilbage til start', //cpg1.4
  'go_back_x_items' => 'Gå tilbage %s emner', //cpg1.4
  'go_forward_x_items' => 'Gå frem %s emner', //cpg1.4
);

$lang_rate_pic = array(
  'rate_this_pic' => 'Bedøm denne fil ',
  'no_votes' => '(Ikke bedømt endnu)',
  'rating' => '(Aktuel karakter: %s / 5 med %s stemmer)',
  'rubbish' => 'Dårligt',
  'poor' => 'Ringe',
  'fair' => 'Rimeligt',
  'good' => 'Godt',
  'excellent' => 'Rigtig godt',
  'great' => 'Fantastisk',
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
  CRITICAL_ERROR => 'Kritisk fejl',
  'file' => 'Fil: ',
  'line' => 'Linie: ',
);

$lang_display_thumbnails = array(
  'filename' => 'Filnavn=', //cpg1.4
  'filesize' => 'Filstørrelse=', //cpg1.4
  'dimensions' => 'Dimensioner=', //cpg1.4
  'date_added' => 'Tilføjet dato=', //cpg1.4
);

$lang_get_pic_data = array(
  'n_comments' => '%s kommentarer',
  'n_views' => '%s visninger',
  'n_votes' => '(%s stemmer)',
);

$lang_cpg_debug_output = array(
  'debug_info' => 'Fejlfindings info',
  'select_all' => 'Marker alt',
  'copy_and_paste_instructions' => 'Hvis du vil bede om hjælp i Coppermine hjælpe forummet, så kopier fejlteksten og sæt den ind i din besked. Husk at erstatter adgangskoder med *** før du sender beskeden.<br />Bemærk: Dette er kun til information og betyder ikke, at der er fejl ved dit galleri.', //cpg1.4
  'phpinfo' => 'Vis phpinfo',
  'notices' => 'Bemærk', //cpg1.4
);

$lang_language_selection = array(
  'reset_language' => 'Standard sprog',
  'choose_language' => 'Vælg sprog',
);

$lang_theme_selection = array(
  'reset_theme' => 'Standard tema',
  'choose_theme' => 'Vælg tema',
);

$lang_version_alert = array(
  'version_alert' => 'Ikke understøttet version!', //cpg1.4
  'security_alert' => 'Sikkerheds Advarsel!', //cpg1.4.3
  'relocate_exists' => 'Fjern <a href="http://coppermine-gallery.net/forum/index.php?topic=24217.0" target=_blank>relocate_server.php</a> filen fra din hjemmeside!',
  'no_stable_version' => 'Du kører Coppermine %s (%s) som kun er til brug af erfarne brugere  - denne version kommer uden nogen form for hjælp eller garanti. Brug den på egen risiko eller nedgrader til den sidst stabile version hvis du behøver hjælp!', //cpg1.4
  'gallery_offline' => 'Galleriet er midlertidig ude af drift, og vil kun være tilgængelig for administratorer. Glem ikke at sætte det i drift igen efter at du er færdig med vedligeholdelse.', //cpg1.4
);

$lang_create_tabs = array(
  'previous' => 'forrige', //cpg1.4
  'next' => 'næste', //cpg1.4
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
  'error_wakeup' => "Kunne ikke slå plugin til '%s'", //cpg1.4
  'error_install' => "Kunne ikke installere plugin '%s'", //cpg1.4
  'error_uninstall' => "Kunne ikke afinstallere plugin '%s'", //cpg1.4
  'error_sleep' => "Kunne ikke slå plugin fra '%s'<br />", //cpg1.4
);

// ------------------------------------------------------------------------- //
// File include/smilies.inc.php
// ------------------------------------------------------------------------- //

if (defined('SMILIES_PHP')) $lang_smilies_inc_php = array(
  'Exclamation' => 'Udråb',
  'Question' => 'Spørgsmål',
  'Very Happy' => 'Meget glad',
  'Smile' => 'Smil',
  'Sad' => 'Trist',
  'Surprised' => 'Overrasket',
  'Shocked' => 'Chokeret',
  'Confused' => 'Forvirret',
  'Cool' => 'Sej',
  'Laughing' => 'Griner',
  'Mad' => 'Sur',
  'Razz' => 'Drille',
  'Embarassed' => 'Genert',
  'Crying or Very sad' => 'Græder eller meget trist',
  'Evil or Very Mad' => 'Ond eller meget vred',
  'Twisted Evil' => 'Lusket ond',
  'Rolling Eyes' => 'Ruller øjne',
  'Wink' => 'Vinker',
  'Idea' => 'God ide',
  'Arrow' => 'Pil',
  'Neutral' => 'Neutral',
  'Mr. Green' => 'Hr. Grøn',
);

// ------------------------------------------------------------------------- //
// File addpic.php
// ------------------------------------------------------------------------- //

// void

// ------------------------------------------------------------------------- //
// File mode.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('MODE_PHP')) $lang_mode_php = array(
  0 => 'Forlader admin tilstand...',
  1 => 'Logger ind som admin...',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
  'alb_need_name' => 'Album skal have et navn!', //js-alert
  'confirm_modifs' => 'Er du sikker på at du vil lave disse ændringer?', //js-alert
  'no_change' => 'Du lavede ingen ændringer!', //js-alert
  'new_album' => 'Nyt album',
  'confirm_delete1' => 'Er du sikker på du vil slette dette album?', //js-alert
  'confirm_delete2' => '\nAlle filer og kommentarer forsvinder!', //js-alert
  'select_first' => 'Vælg først et album', //js-alert
  'alb_mrg' => 'Album administration',
  'my_gallery' => '* Mit galleri *',
  'no_category' => '* Ingen kategori *',
  'delete' => 'Slet',
  'new' => 'Ny',
  'apply_modifs' => 'Godkend rettelser',
  'select_category' => 'Vælg kategori',
);

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) $lang_banning_php = array(
  'title' => 'Bloker brugere', //cpg1.4
  'user_name' => 'Brugernavn', //cpg1.4
  'ip_address' => 'IP-adresse', //cpg1.4
  'expiry' => 'Udløber (blank er permanent)', //cpg1.4
  'edit_ban' => 'Gem ændringer', //cpg1.4
  'delete_ban' => 'Slet', //cpg1.4
  'add_new' => 'Ny blokering', //cpg1.4
  'add_ban' => 'Bloker bruger', //cpg1.4
  'error_user' => 'Bruger findes ikke', //cpg1.4
  'error_specify' => 'Du må specificere enten et brugernavn eller en IP-adresse', //cpg1.4
  'error_ban_id' => 'Ugyldig blokerings ID!', //cpg1.4
  'error_admin_ban' => 'Du kan ikke blokere dig selv!', //cpg1.4
  'error_server_ban' => 'Du var ved at blokere din egen server? Tsk tsk, den går ikke...', //cpg1.4
  'error_ip_forbidden' => 'Du kan ikke blokere denne IP - den er ikkerutbar (privat)!<br />Hvis du vil tillade blokering af private adresser, kan det gøres i <a href="admin.php">opsætning</a> (dette er kun aktuelt hvis Coppermine kører i et LAN).', //cpg1.4
  'lookup_ip' => 'Slå en IP-adresse op', //cpg1.4
  'submit' => 'Ok!', //cpg1.4
  'select_date' => 'vælg dato', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File bridgemgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('BRIDGEMGR_PHP')) $lang_bridgemgr_php = array(
  'title' => 'Brohåndtering',
  'warning' => 'Advarsel: ved at bruge denne brohåndtering må du være indforstået med, at følsomme data bliver sendt ved hjælp af html skema. Kør den kun på din egen PC (ikke på en offentlige klienter som en Internet Café o.l.), og forsikre dig om, at browserens cache er tømt efterfølgende. Ellers kan andre få adgang til dine data!',
  'back' => 'tilbage',
  'next' => 'næste',
  'start_wizard' => 'Start Brohåndtering',
  'finish' => 'Afslut',
  'hide_unused_fields' => 'skjul ubrugte felter (anbefalet)',
  'clear_unused_db_fields' => 'fjern ugyldige data fra databasen (anbefalet)',
  'custom_bridge_file' => 'navnet på din specialtilpassede brofil (hvis navnet er <i>myfile.inc.php</i>, skriv <i>myfile</i> i dette felt)',
  'no_action_needed' => 'Ingen handling er påkrævet på dette trin. Klik \'næste\' for at fortsætte.',
  'reset_to_default' => 'Gendan standardværdi',
  'choose_bbs_app' => 'vælg det program som Coppermine skal linkes til',
  'support_url' => 'Her kan findes hjælp til dette program',
  'settings_path' => 'filsti(er) som bruges af dit BBSprogram',
  'database_connection' => 'databasekobling',
  'database_tables' => 'databasetabeller',
  'bbs_groups' => 'BBS grupper',
  'license_number' => 'Licensnummer',
  'license_number_explanation' => 'skriv dit licensnummer (hvis aktuelt)',
  'db_database_name' => 'Databasenavn',
  'db_database_name_explanation' => 'Skriv navnet på database din BBS bruger',
  'db_hostname' => 'Database vært',
  'db_hostname_explanation' => 'Værtsnavn hvor din mySQL database kører, som regel &quot;localhost&quot;',
  'db_username' => 'Database brugernavn',
  'db_username_explanation' => 'mySQL brugernavn til brug for kommunikation med BBS',
  'db_password' => 'Database adgangskode',
  'db_password_explanation' => 'Adgangskode til dette mySQL brugernavn',
  'full_forum_url' => 'Forum URL',
  'full_forum_url_explanation' => 'Fuld sti til dit BBS program (inkluder http://, f.eks. http://www.ditdomaine.dk/forum)',
  'relative_path_of_forum_from_webroot' => 'Relativ forum sti',
  'relative_path_of_forum_from_webroot_explanation' => 'Relativ sti til dit BBS program fra din webrod (Eksempel: hvis dit BBS ligger på http://www.ditdomaine.dk/forum/, skriv &quot;/forum/&quot; i dette felt)',
  'relative_path_to_config_file' => 'Relativ sti til din BBS\'s konfigurationfil',
  'relative_path_to_config_file_explanation' => 'Relativ sti til din BBS, set fra din Coppermine mappe (f.eks. &quot;../forum/&quot; hvis dit BBS ligger på http://www.ditdomaine.dk/forum/ og Coppermine er på http://www.ditdomaine.dk/coppermine/)',
  'cookie_prefix' => 'Cookie præfiks',
  'cookie_prefix_explanation' => 'dette skal være navnet på cookien til din BBS',
  'table_prefix' => 'Table præfiks',
  'table_prefix_explanation' => 'Skal være præfixet du valgte for din BBS da du installerede det.',
  'user_table' => 'Brugertabel',
  'user_table_explanation' => '(som regel standardværdi, hvis du ikke har lavet ændringer fra standard på din BBSinstallation)',
  'session_table' => 'Sessiontabel',
  'session_table_explanation' => '(som regel standardværdi, hvis du ikke har lavet ændringer fra standard på din BBSinstallation)',
  'group_table' => 'Gruppetabel',
  'group_table_explanation' => '(som regel standardværdi, hvis du ikke har lavet ændringer fra standard på din BBSinstallation)',
  'group_relation_table' => 'Grupperelationstabel',
  'group_relation_table_explanation' => '(som regel standardværdi, hvis du ikke har lavet ændringer fra standard på din BBSinstallation)',
  'group_mapping_table' => 'Gruppemappingtabel',
  'group_mapping_table_explanation' => '(som regel standardværdi, hvis du ikke har lavet ændringer fra standard på din BBSinstallation)',
  'use_standard_groups' => 'Brug standard BBS brugergrupper',
  'use_standard_groups_explanation' => 'Brug standard (indbygget) brugergrupper (anbefalet). Dette vil gøre alle egendefinerede brugergrupper lavet på denne siden ugyldige. Slå kun dette fra hvis du VIRKELIG ved hvad du laver!',
  'validating_group' => 'godkendingsgruppe',
  'validating_group_explanation' => 'GruppeID fra din BBS der brugerkontoer behøver godkendelsen (som regel standardværdi, hvis du ikke har lavet ændringer fra standard på din BBSinstallation)',
  'guest_group' => 'Gæstegruppe',
  'guest_group_explanation' => 'GruppeID fra din BBS for gæster (anonyme brugere) (som regel standardværdi, lav kun ændringer hvis du ved hvad du laver)',
  'member_group' => 'Medlemsgruppe',
  'member_group_explanation' => 'GruppeID fra din BBS for "almindelige" brugerkontoer (som regel standardværdi, lav kun ændringer hvis du ved hvad du laver)',
  'admin_group' => 'Admingruppe',
  'admin_group_explanation' => 'GruppeID fra din BBS for administratorer (som regel standardværdi, lav kun ændringer hvis du ved hvad du laver)',
  'banned_group' => 'Blokeret gruppe',
  'banned_group_explanation' => 'GruppeID fra din BBS for blokerede brugere (som regel standardværdi, lav kun ændringer hvis du ved hvad du laver)',
  'global_moderators_group' => 'Global moderatorgruppe',
  'global_moderators_group_explanation' => 'GruppeID fra din BBS for globale moderatorer (som regel standardværdi, lav kun ændringer hvis du ved hvad du laver)',
  'special_settings' => 'BBSspecifikke indstillinger',
  'logout_flag' => 'phpBB version (logoud flag)',
  'logout_flag_explanation' => 'Hvilken version er din BBS (denne indstillingen specificerer hvordan "log af" skal håndteres)',
  'use_post_based_groups' => 'Brug meldingsbaseret grupper',
  'logout_flag_yes' => '2.0.5 eller nyere',
  'logout_flag_no' => '2.0.4 eller ældre',
  'use_post_based_groups_explanation' => 'Skal grupperne fra BBS programmet, som er defineret af antalet af post, tages med i beregningen (tillader en mere nuanceret håndtering af tilladelser) eller bare standard grupperne (gør administrationen lettere, anbefales). Du kan ændre denne indstilling senere.',
  'use_post_based_groups_yes' => 'ja',
  'use_post_based_groups_no' => 'nej',
  'error_title' => 'Du skal rette disse fejl før du kan fortsætte. Gå tilbage til forrige side.',
  'error_specify_bbs' => 'Du skal specificere hvilket program du vil linke din Coppermine installation med.',
  'error_no_blank_name' => 'Du skal navngive din brofil.',
  'error_no_special_chars' => 'Navnet på brofilen må ikke indeholde specialtegn med undtagelse af understrege (_) og bindestreg (-)!',
  'error_bridge_file_not_exist' => 'Brofilen %s findes ikke på serveren. Tjek om du har uploaded brofilen.',
  'finalize' => 'Slå integrationen med BBS programmet til/fra ',
  'finalize_explanation' => 'Ind til nu er dine indstillinger blevet gemt i databasen, men integrationen med BBS programmet er ikke blevet slået til. Du kan slå integrationen til/fra senere. Husk adminbruger og password fra Coppermine installationen, du kan få brug for dem senere for, at lave ændringer. Hvis noget går galt, gå til %s og slå integrationen med BBS programmet fra der, med din Coppermine administrator konto (som regel den du brugte under installationen af Coppermine).',
  'your_bridge_settings' => 'Dine integrations indstillinger',
  'title_enable' => 'Slår integration/bridging med %s til',
  'bridge_enable_yes' => 'slå til',
  'bridge_enable_no' => 'slå fra',
  'error_must_not_be_empty' => 'skal være tom',
  'error_either_be' => 'skal være %s eller %s',
  'error_folder_not_exist' => '%s findes ikke. Ret værdierne du har skrevet %s',
  'error_cookie_not_readible' => 'Coppermine kan ikke læse en cookie med navnet %s. Ret værdierne du har skrevet %s, eller gå til BBS administrations panelet og tjek at stien til cookie kan læses af coppermine.',
  'error_mandatory_field_empty' => 'Du kan ikke lade dette felt %s være blank - udfylde med de rette værdier.',
  'error_no_trailing_slash' => 'Der må ikke være en "skråstreg" i enden af dette felt %s.',
  'error_trailing_slash' => 'Der skal være en "skråstreg" i enden af dette felt %s.',
  'error_db_connect' => 'Kunne ikke få forbindelse til mySQL databasen med de oplysninger du angav. Her er hvad mySQL sagde:',
  'error_db_name' => 'Selvom Coppermine kunne oprette forbindelse, blev mySQLdatabasen %s ikke fundet til. Tjek om du har skrevet %s rigtigt. Her er hvad mySQL sagde:',
  'error_prefix_and_table' => '%s og ',
  'error_db_table' => 'Kunne ikke finde tabellen %s. Tjek om du har skrevet %s rigtig.',
  'recovery_title' => 'Brohåndtering: Genoprettet efter en kritisk fejl',
  'recovery_explanation' => 'Hvis du kom her for at administrere integration mellem dit galleri og dit BBS, skal du være logget ind som admin. Hvis du ikke kan logge ind fordi bridging ikke virkede som forventet, Kan du slå BBS integrationen på denne side fra. Indtastning af brugernavn og adgangskode vil ikke logge dig ind, det vil kun slå BBS integrationen fra. Se dokumentation for detalje.',
  'username' => 'Brugernavn',
  'password' => 'Adgangskode',
  'disable_submit' => 'Send',
  'recovery_success_title' => 'Autorisation lykkedes',
  'recovery_success_content' => 'Du har slået integrationen mellem Coppermine installationen og dit BBS program fra. Din Coppermine installation kører nu alene.',
  'recovery_success_advice_login' => 'Log ind som admin for at ændre dine bro indstillinger og/eller slå BBS integrationen fra/til.',
  'goto_login' => 'Gå til log ind siden',
  'goto_bridgemgr' => 'Gå til Brohåndtering',
  'recovery_failure_title' => 'Autorisation mislykkedes',
  'recovery_failure_content' => 'Du skrev et forkert brugernavn og/eller en forkert adgangskode. Du skal bruge adgangskode og brugernavn fra adminkontoen fra Coppermine (som regel kontoen du brugte under installationen af Coppermine).',
  'try_again' => 'Prøv igen',
  'recovery_wait_title' => 'For kort tidsinterval',
  'recovery_wait_content' => 'Af sikkerhedsmæssige grunde tillader dette script ikke flere på hinanden følgende fejl logind, så du må vente indtil du kan prøve igen.',
  'wait' => 'Vent',
  'create_redir_file' => 'Lav en vidersendings fil (anbefalet)',
  'create_redir_file_explanation' => 'For at sende brugere tilbage til Coppermine når de er logget ind på BBS, skal du lave en vidersendings fil i mappen med BBS. Når denne mulighed er valgt, vil "Brohåndtering" forsøge at lave den for dig, eller give dig en kode klar til at kopierer for at oprette filen manuelt.',
  'browse' => 'Gennemse',
);

// ------------------------------------------------------------------------- //
// File calendar.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('CALENDAR_PHP')) $lang_calendar_php = array(
  'title' => 'Kalender', //cpg1.4
  'close' => 'Afslut', //cpg1.4
  'clear_date' => 'fjern dato', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
  'miss_param' => 'Nødvendige Parametre ved \'%s\'operation ikke udført !',
  'unknown_cat' => 'Valgte kategori eksister ikke i databasen!',
  'usergal_cat_ro' => 'Bruger galleri kategorien kan ikke slettes!',
  'manage_cat' => 'Administrer kategorier',
  'confirm_delete' => 'Er du sikker på du ønsker at SLETTE denne kategori?', //js-alert
  'category' => 'Kategori',
  'operations' => 'Handling',
  'move_into' => 'Flyt til',
  'update_create' => 'Opdater/Opret kategori',
  'parent_cat' => 'Hoved kategori',
  'cat_title' => 'Kategori titel',
  'cat_thumb' => 'Kategori ikon',
  'cat_desc' => 'Kategori beskrivelse',
  'categories_alpha_sort' => 'Sorter kategorier alfabetisk (i stedet for selvvalgt sorteringsrækkefølge)', //cpg1.4
  'save_cfg' => 'Gem opsætning', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File admin.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('ADMIN_PHP')) $lang_admin_php = array(
  'title' => 'Galleri opsætning', //cpg1.4
  'manage_exif' => 'Administrer exif visning', //cpg1.4
  'manage_plugins' => 'Administrer plugins', //cpg1.4
  'manage_keyword' => 'Administrer nøgleord', //cpg1.4
  'restore_cfg' => 'Gendan standard indstillinger',
  'save_cfg' => 'Gem ny opsætning',
  'notes' => 'Noter',
  'info' => 'Information',
  'upd_success' => 'Coppermine opsætning er opdateret',
  'restore_success' => 'Coppermine standard opsætning er genskabt',
  'name_a' => 'Navn stigende',
  'name_d' => 'Navn faldende',
  'title_a' => 'Titel stigende',
  'title_d' => 'Titel i faldende',
  'date_a' => 'Dato stigende',
  'date_d' => 'Dato faldende',
  'pos_a' => 'Position stigende ', //cpg1.4
  'pos_d' => 'Position faldende', //cpg1.4
  'th_any' => 'Max højde/bredde',
  'th_ht' => 'Højde',
  'th_wd' => 'Bredde',
  'label' => 'tekst',
  'item' => 'valg',
  'debug_everyone' => 'Alle',
  'debug_admin' => 'Kun administrator',
  'no_logs'=> 'Fra', //cpg1.4
  'log_normal'=> 'Normal', //cpg1.4
  'log_all' => 'Alle', //cpg1.4
  'view_logs' => 'Se log', //cpg1.4
  'click_expand' => 'klik på sektionsnavnet for at folde ud', //cpg1.4
  'expand_all' => 'Fold ud', //cpg1.4
  'notice1' => '(*) Disse indstillinger må ikke ændres hvis du allerede har filer i din database.', //cpg1.4 - (relocated)
  'notice2' => '(**) Ændring af denne indstilling vil kun have betydning for billeder tilføjet efter ændring, derfor er det ikke tilrådeligt at ændre denne indstilling når der allerede er billeder i galleriet. Du kan dog ændre de eksisterende billeder ved at bruge &quot;<a href="util.php">administrator værktøjer</a> (Ændre billedstørrelse)&quot; fra administrator menuen.', //cpg1.4 - (relocated)
  'notice3' => '(***) Alle logfiler bliver skrevet på engelsk.', //cpg1.4 - (relocated)
  'bbs_disabled' => 'Denne funktion er ikke aktiv ved integration med BBS', //cpg1.4
  'auto_resize_everyone' => 'Alle', //cpg1.4
  'auto_resize_user' => 'Kun bruger', //cpg1.4
  'ascending' => 'i stigende rækkefølge', //cpg1.4
  'descending' => 'i faldende rækkefølge', //cpg1.4
);

if (defined('ADMIN_PHP')) $lang_admin_data = array(
  'Generelle indstillinger',
  array('Galleri navn', 'gallery_name', 0, 'f=index.htm&amp;as=admin_general_name&amp;ae=admin_general_name_end'), //cpg1.4
  array('Galleri beskrivelse', 'gallery_description', 0, 'f=index.htm&amp;as=admin_general_description&amp;ae=admin_general_description_end'), //cpg1.4
  array('E-mail til Galleriadministrator', 'gallery_admin_email', 0, 'f=index.htm&amp;as=admin_general_email&amp;ae=admin_general_email_end'), //cpg1.4
  array('URL til din Coppermine gallerimappe (uden \'index.php\' eller tilsvarende til sidst)', 'ecards_more_pic_target', 0, 'f=index.htm&amp;as=admin_general_coppermine-url&amp;ae=admin_general_coppermine-url_end'), //cpg1.4
  array('URL til din hjemmeside', 'home_target', 0, 'f=index.htm&amp;as=admin_general_home-url&amp;ae=admin_general_home-url_end'), //cpg1.4
  array('Tillad ZIP-hentning af foretrukne', 'enable_zipdownload', 1, 'f=index.htm&amp;as=admin_general_zip-download&amp;ae=admin_general_zip-download_end'), //cpg1.4
  array('Timezoneforskel relativt i forhold til GMT (Lokal tid: ' . localised_date(-1, $comment_date_fmt) . ')','time_offset',0, 'f=index.htm&amp;as=admin_general_time-offset&amp;ae=admin_general_time-offset_end&amp;top=1'), //cpg1.4
  array('Slå krypteret adgangskode til (Kan ikke slås fra igen)','enable_encrypted_passwords',1, 'f=index.htm&amp;as=admin_general_encrypt_password_start&amp;ae=admin_general_encrypt_password_end&amp;top=1'), // cpg 1.4
  array('Slå hjælpeikon til (Denne hjælp er kun tilgængelig på engelsk)','enable_help',9, 'f=index.htm&amp;as=admin_general_help&amp;ae=admin_general_help_end'), //cpg1.4
  array('Slå klikbare nøgleord til i søg','clickable_keyword_search',14, 'f=index.htm&amp;as=admin_general_keywords_start&amp;ae=admin_general_keywords_end'), //cpg1.4
  array('Slå plugins til', 'enable_plugins', 12, 'f=index.htm&amp;as=admin_general_enable-plugins&amp;ae=admin_general_enable-plugins_end'),  //cpg1.4
  array('Tillad blokering af ikke rutbare (private) IP adresser', 'ban_private_ip', 1,  'f=index.htm&amp;as=admin_general_private-ip&amp;ae=admin_general_private-ip_end'), //cpg1.4
  array('Brug mappestrukturmenu ved massetilføjelser', 'browse_batch_add', 1, 'f=index.htm&amp;as=admin_general_browsable_batch_add&amp;ae=admin_general_browsable_batch_add_end'), //cpg1.4

  'Sprog, Tema og Tegnsæt indstillinger',
  array('Sprog', 'lang', 5, 'f=index.htm&amp;as=admin_language_language&amp;ae=admin_language_language_end'), //cpg1.4
  array('Skift til engelsk hvis oversættelsen ikke findes', 'language_fallback', 1, 'f=index.htm&amp;as=admin_language_fallback&amp;ae=admin_language_fallback_end'), //cpg1.4
  array('Tegnsæt', 'charset', 4, 'f=index.htm&amp;as=admin_language_charset&amp;ae=admin_language_charset_end'), //cpg1.4
  array('Vis sprogliste', 'language_list', 1, 'f=index.htm&amp;as=admin_language_list&amp;ae=admin_language_list_end'), //cpg1.4
  array('Vis sprogflag', 'language_flags', 8, 'f=index.htm&amp;as=admin_language_flags&amp;ae=admin_language_flags_end&amp;top=1'), //cpg1.4
  array('Vis \'Standard Sprog\' i sprogvalg', 'language_reset', 1, 'f=index.htm&amp;as=admin_language_reset&amp;ae=admin_language_reset_end&amp;top=1'), //cpg1.4
  //array('Vis Forrige/Næste på sider med faneblade', 'previous_next_tab', 1), //cpg1.4

  'Tema indstilling',
  array('Tema', 'theme', 6, 'f=index.htm&amp;as=admin_theme_theme&amp;ae=admin_theme_theme_end'), //cpg1.4
  array('Vis liste over temaer', 'theme_list', 1, 'f=index.htm&amp;as=admin_theme_theme_list&amp;ae=admin_theme_theme_list_end'), //cpg1.4
  array('Vis \'Standard Tema\' i temavalg', 'theme_reset', 1, 'f=index.htm&amp;as=admin_theme_theme_reset&amp;ae=admin_theme_theme_reset_end'), //cpg1.4
  array('Vis OSS', 'display_faq', 1, 'f=index.htm&amp;as=admin_theme_faq&amp;ae=admin_theme_faq_end'), //cpg1.4
  array('Brugerdefineret menu link navn', 'custom_lnk_name', 0,'f=index.htm&amp;as=admin_theme_custom_lnk_name&amp;ae=admin_theme_custom_lnk_name_end'), //cpg1.4
  array('Brugerdefinere menu link URL', 'custom_lnk_url', 0,'f=index.htm&amp;as=admin_language_custom_lnk_url&amp;ae=admin_language_custom_lnk_url_end'), //cpg1.4
  array('Vis bbkode hjælp', 'show_bbcode_help', 1, 'f=index.htm&amp;as=admin_theme_bbcode&amp;ae=admin_theme_bbcode_end&amp;top=1'), //cpg1.4
  array('Vis Vanity Block på tema linjen, der er defineret, som samsvarende med XHTML og CSS','vanity_block',1, 'f=index.htm&amp;as=vanity_block&amp;ae=vanity_block_end'), //cpg1.4
  array('Sti til Brugerdefineret Sidehoved fil', 'custom_header_path', 0, 'f=index.htm&amp;as=admin_theme_include_path_start&amp;ae=admin_theme_include_path_end'), //cpg1.4
  array('Sti til Brugerdefineret Sidefod fil', 'custom_footer_path', 0, 'f=index.htm&amp;as=admin_theme_include_path_start&amp;ae=admin_theme_include_path_end'), //cpg1.4

  'Albumsliste visning',
  array('Bredde på hoved tabellen (pixels eller %)', 'main_table_width', 0, 'f=index.htm&amp;as=admin_album_table-width&amp;ae=admin_album_table-width_end'), //cpg1.4
  array('Antal af trin i kategorier for fremvisning', 'subcat_level', 0, 'f=index.htm&amp;as=admin_album_category-levels&amp;ae=admin_album_category-levels_end'), //cpg1.4
  array('Antal af album til fremvisning', 'albums_per_page', 0, 'f=index.htm&amp;as=admin_album_number&amp;ae=admin_album_number_end'), //cpg1.4
  array('Antal af kolonner for albumliste', 'album_list_cols', 0, 'f=index.htm&amp;as=admin_album_columns&amp;ae=admin_album_columns_end'), //cpg1.4
  array('Størrelse af minibilleder i pixels ', 'alb_list_thumb_size', 0, 'f=index.htm&amp;as=admin_album_thumbnail-size&amp;ae=admin_album_thumbnail-size_end'), //cpg1.4
  array('Indholdet af hovedsiden ', 'main_page_layout', 0, 'f=index.htm&amp;as=admin_album_list_content&amp;ae=admin_album_list_content_end'), //cpg1.4
  array('Vis minibilleder fra albums i en kategori i listen over kategorier ','first_level',1, 'f=index.htm&amp;as=admin_album_first-level_thumbs&amp;ae=admin_album_first-level_thumbs_end'), //cpg1.4
  array('Sorter kategorier alfabetisk (i stedet for brugerdefineret sortering)','categories_alpha_sort',1, 'f=index.htm&amp;as=admin_album_list_alphasort_start&amp;ae=admin_album_list_alphasort_end'), //cpg1.4
  array('Vis antallet af linkede filer','link_pic_count',1, 'f=index.htm&amp;as=admin_album_linked_files_start&amp;ae=admin_album_linked_files_end'), //cpg1.4

  'Minibillede visning ',
  array('Antal kolonner på minibillede siden', 'thumbcols', 0, 'f=index.htm&amp;as=admin_thumbnail_columns&amp;ae=admin_thumbnail_columns_end'), //cpg1.4
  array('Antal rækker på minibillede siden', 'thumbrows', 0, 'f=index.htm&amp;as=admin_thumbnail_rows&amp;ae=admin_thumbnail_rows_end'), //cpg1.4
  array('Antal sidehenvisninger', 'max_tabs', 10, 'f=index.htm&amp;as=admin_thumbnail_tabs&amp;ae=admin_thumbnail_tabs_end'), //cpg1.4
  array('Vis billedeoverskriften (i tilføjelse til titel) under minibillede', 'caption_in_thumbview', 1, 'f=index.htm&amp;as=admin_thumbnail_display_caption&amp;ae=admin_thumbnail_display_caption_end'), //cpg1.4
  array('Vis antal visninger under minibillede', 'views_in_thumbview', 1, 'f=index.htm&amp;as=admin_thumbnail_display_views&amp;ae=admin_thumbnail_display_views_end'), //cpg1.4
  array('Vis antal af kommentarer under minibilledet', 'display_comment_count', 1, 'f=index.htm&amp;as=admin_thumbnail_display_comments&amp;ae=admin_thumbnail_display_comments_end'), //cpg1.4
  array('Vis navn på person der har uploadet filen under minibillede', 'display_uploader', 1, 'f=index.htm&amp;as=admin_thumbnail_display_uploader&amp;ae=admin_thumbnail_display_uploader_end'), //cpg1.4
  //array('Vis navn på admin uploader under minibilledet', 'display_admin_uploader', 1, 'f=index.htm&amp;as=admin_thumbnail_display_admin_uploader&amp;ae=admin_thumbnail_display_admin_uploader_end'), //cpg1.4
  array('Vis fil navn under minibillede', 'display_filename', 1, 'f=index.htm&amp;as=admin_thumbnail_display_filename&amp;ae=admin_thumbnail_display_filename_end'), //cpg1.4
  //array('Vis albumbeskrivelse', 'alb_desc_thumb', 1, 'f=index.htm&amp;as=admin_thumbnail_display_description&amp;ae=admin_thumbnail_display_description_end'), //cpg1.4
  array('Standard sortering af filer', 'default_sort_order', 3, 'f=index.htm&amp;as=admin_thumbnail_default_sortorder&amp;ae=admin_thumbnail_default_sortorder_end'), //cpg1.4
  array('Minimum antal stemmer på fil før visning i \'Topkarakter\' listen', 'min_votes_for_rating', 0, 'f=index.htm&amp;as=admin_thumbnail_minimum_votes&amp;ae=admin_thumbnail_minimum_votes_end'), //cpg1.4

  'Billedvisning', //cpg1.4
  array('Bredde for tabellen til visning af filer (pixels eller %)', 'picture_table_width', 0, 'f=index.htm&amp;as=admin_image_comment_table-width&amp;ae=admin_image_comment_table-width_end'), //cpg1.4
  array('Fil information er synlig som standard ', 'display_pic_info', 1, 'f=index.htm&amp;as=admin_image_comment_info_visible&amp;ae=admin_image_comment_info_visible_end'), //cpg1.4
  array('Max længde for filbeskrivelse', 'max_img_desc_length', 0, 'f=index.htm&amp;as=admin_image_comment_descr_length&amp;ae=admin_image_comment_descr_length_end'), //cpg1.4
  array('Max længde på et ord ', 'max_com_wlength', 0, 'f=index.htm&amp;as=admin_image_comment_chars_per_word&amp;ae=admin_image_comment_chars_per_word_end'), //cpg1.4
  array('Vis film rulle', 'display_film_strip', 1, 'f=index.htm&amp;as=admin_image_comment_filmstrip_toggle&amp;ae=admin_image_comment_filmstrip_toggle_end'), //cpg1.4
  array('Vis filnavn under minibillede til film rulle', 'display_film_strip_filename', 1, 'f=index.htm&amp;as=admin_image_comment_display_film_strip_filename&amp;ae=admin_image_comment_display_film_strip_filename_end'), //cpg1.4
  array('Antal emner i film rulle', 'max_film_strip_items', 0, 'f=index.htm&amp;as=admin_image_comment_filmstrip_number&amp;ae=admin_image_comment_filmstrip_number_end'), //cpg1.4
  array('Diasshow interval i millisekunder (1 sekund = 1000 millisekunder)', 'slideshow_interval', 0, 'f=index.htm&amp;as=admin_image_comment_slideshow_interval&amp;ae=admin_image_comment_slideshow_interval_end'), //cpg1.4

  'Kommentar indstillinger', //cpg1.4
  array('Filtrer bandeord i kommentarer', 'filter_bad_words', 1, 'f=index.htm&amp;as=admin_image_comment_bad_words&amp;ae=admin_image_comment_bad_words_end'), //cpg1.4
  array('Tillad smilies i kommentarer', 'enable_smilies', 1, 'f=index.htm&amp;as=admin_image_comment_smilies&amp;ae=admin_image_comment_smilies_end'), //cpg1.4
  array('Tillad flere kommentarer om samme fil fra samme bruger (slår flood beskyttelse fra)', 'disable_comment_flood_protect', 1, 'f=index.htm&amp;as=admin_image_comment_flood&amp;ae=admin_image_comment_flood_end'), //cpg1.4
  array('Max antal linjer i en kommentar', 'max_com_lines', 0, 'f=index.htm&amp;as=admin_image_comment_lines&amp;ae=admin_image_comment_lines_end'), //cpg1.4
  array('Maksimum længde på en kommentar', 'max_com_size', 0, 'f=index.htm&amp;as=admin_image_comment_length&amp;ae=admin_image_comment_length_end'), //cpg1.4
  array('Informer administrator om nye kommentarer via e-mail', 'email_comment_notification', 1, 'f=index.htm&amp;as=admin_image_comment_admin_notify&amp;ae=admin_image_comment_admin_notify_end'), //cpg1.4
  array('Sortering rækkefølge af kommentarer', 'comments_sort_descending', 17, 'f=index.htm&amp;as=admin_comment_sort_start&amp;ae=admin_comment_sort_end'), //cpg1.4
  array('Foranstillet navn på anonyme forfatteres kommentarer', 'comments_anon_pfx', 0, 'f=index.htm&amp;as=comments_anon_pfx&amp;ae=comments_anon_pfx_end'), //cpg1.4

  'Fil og minibillede indstillinger ',
  array('Kvalitet for JPEG billeder', 'jpeg_qual', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_jpeg_quality&amp;ae=admin_picture_thumbnail_jpeg_quality_end'), //cpg1.4
  array('Maks. dimension på minibilleder <a href="#notice2" class="clickable_option">**</a>', 'thumb_width', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max-dimension&amp;ae=admin_picture_thumbnail_max-dimension_end'), //cpg1.4
  array('Brug dimension (bredde, højde eller maksimum af de to til minibilleder ) <a href="#notice2" class="clickable_option">**</a>', 'thumb_use', 7, 'f=index.htm&amp;as=admin_picture_thumbnail_use-dimension&amp;ae=admin_picture_thumbnail_use-dimension_end'), //cpg1.4
  array('Opret mellemstore billeder','make_intermediate',1, 'f=index.htm&amp;as=admin_picture_thumbnail_intermediate_toggle&amp;ae=admin_picture_thumbnail_intermediate_toggle_end'), //cpg1.4
  array('Max bredde eller højde for et mellemstort billede/video <a href="#notice2" class="clickable_option">**</a>', 'picture_width', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_intermediate_dimension&amp;ae=admin_picture_thumbnail_intermediate_dimension_end'), //cpg1.4
  array('Max størrelse for uploadede filer (KB)', 'max_upl_size', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max_upload_size&amp;ae=admin_picture_thumbnail_max_upload_size_end'), //cpg1.4
  array('Max bredde eller højde for uploadede billeder/video (pixels)', 'max_upl_width_height', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max_upload_dimension&amp;ae=admin_picture_thumbnail_max_upload_dimension_end'), //cpg1.4
  array('Auto reducer billeder som er større end den tilladte højde eller bredde', 'auto_resize', 16, 'f=index.htm&amp;as=admin_picture_thumbnail_auto-resize&amp;ae=admin_picture_thumbnail_auto-resize_end'), //cpg1.4

  'Avancerede billede og minibillede indstillinger',
  array('Brugere kan have private album (OBS: hvis du skifter fra \'ja\' til \'nej\' vil alle nuværende private albums blive offentlige)', 'allow_private_albums', 1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_private_toggle&amp;ae=admin_picture_thumb_advanced_private_toggle_end'), //cpg1.4
  array('Vis ikon for private album for anonyme brugere','show_private',1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_private_icon_show&amp;ae=admin_picture_thumb_advanced_private_icon_show_end'), //cpg1.4
  array('Forbudte karakterer i filnavne', 'forbiden_fname_char',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_filename_forbidden_chars&amp;ae=admin_picture_thumb_advanced_filename_forbidden_chars_end'), //cpg1.4
  //array('Tilladte filtyper for indsendte billeder', 'allowed_file_extensions',0, 'f=index.htm&amp;as=&amp;ae=_end'), //cpg1.4
  array('Tilladte billedtyper ', 'allowed_img_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_pic_extensions&amp;ae=admin_picture_thumb_advanced_pic_extensions_end'), //cpg1.4
  array('Tilladte filmtyper ', 'allowed_mov_types',0, 'f=index.htm&amp;as=admin_thumbs_advanced_movie&amp;ae=admin_thumbs_advanced_movie_end'), //cpg1.4
  array('Automatisk visning af film', 'media_autostart',1, 'f=index.htm&amp;as=admin_movie_autoplay&amp;ae=admin_movie_autoplay_end'), //cpg1.4
  array('Tilladte audiotyper ', 'allowed_snd_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_audio_extensions&amp;ae=admin_picture_thumb_advanced_audio_extensions_end'), //cpg1.4
  array('Tilladte dokumenttyper', 'allowed_doc_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_doc_extensions&amp;ae=admin_picture_thumb_advanced_doc_extensions_end'), //cpg1.4
  array('Program til skalering af billeder','thumb_method',2, 'f=index.htm&amp;as=admin_picture_thumb_advanced_resize_method&amp;ae=admin_picture_thumb_advanced_resize_method_end'), //cpg1.4
  array('Sti til ImageMagick \'konverter\' værktøj (eksempel /usr/bin/X11/)', 'impath', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_im_path&amp;ae=admin_picture_thumb_advanced_im_path_end'), //cpg1.4
  //array('Tilladte filtyper (kun for ImageMagick)', 'allowed_img_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_allowed_imagetypes&amp;ae=admin_picture_thumb_advanced_allowed_imagetypes_end'), //cpg1.4
  array('Kommandolinjeparameter til ImageMagick', 'im_options', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_im_commandline&amp;ae=admin_picture_thumb_advanced_im_commandline_end'), //cpg1.4
  array('Læs EXIF data i JPEG filer', 'read_exif_data', 13, 'f=index.htm&amp;as=admin_picture_thumb_advanced_exif&amp;ae=admin_picture_thumb_advanced_exif_end'), //cpg1.4
  array('Læs IPTC data in JPEG filer', 'read_iptc_data', 1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_iptc&amp;ae=admin_picture_thumb_advanced_iptc_end'), //cpg1.4
  array('Album mappen <a href="#notice1" class="clickable_option">*</a>', 'fullpath', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_albums_dir&amp;ae=admin_picture_thumb_advanced_albums_dir_end'), //cpg1.4
  array('Katalog til bruger filer <a href="#notice1" class="clickable_option">*</a>', 'userpics', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_userpics_dir&amp;ae=admin_picture_thumb_advanced_userpics_dir_end'), //cpg1.4
  array('Foranstillet navn på mellembilleder <a href="#notice1" class="clickable_option">*</a>', 'normal_pfx', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_intermediate_prefix&amp;ae=admin_picture_thumb_advanced_intermediate_prefix_end'), //cpg1.4
  array('Foranstillet navn på minibilleder <a href="#notice1" class="clickable_option">*</a>', 'thumb_pfx', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_thumbs_prefix&amp;ae=admin_picture_thumb_advanced_thumbs_prefix_end'), //cpg1.4
  array('Standard tilladelser for mapper', 'default_dir_mode', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_chmod_folder&amp;ae=admin_picture_thumb_advanced_chmod_folder_end'), //cpg1.4
  array('Standard tilladelser for filer', 'default_file_mode', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_chmod_files&amp;ae=admin_picture_thumb_advanced_chmod_files_end'), //cpg1.4

  'Bruger indstillinger',
  array('Tillad registrering af nye brugere', 'allow_user_registration', 1, 'f=index.htm&amp;as=admin_allow_registration&amp;ae=admin_allow_registration_end'), //cpg1.4
  array('Tillad gæster og anonyme adgang', 'allow_unlogged_access', 1, 'f=index.htm&amp;as=admin_allow_unlogged_access&amp;ae=admin_allow_unlogged_access_end'), //cpg1.4
  array('Forlang e-mail godkendelse ved registrering ', 'reg_requires_valid_email', 1, 'f=index.htm&amp;as=admin_registration_verify&amp;ae=admin_registration_verify_end'), //cpg1.4
  array('Send e-mail til administrator ved nye brugere registreringer ', 'reg_notify_admin_email', 1, 'f=index.htm&amp;as=admin_registration_notify&amp;ae=admin_registration_notify_end'), //cpg1.4
  array('Administrator aktivering af registreringer', 'admin_activation', 1, 'f=index.htm&amp;as=admin_activation&amp;ae=admin_activation_end'),  //cpg1.4
  array('Tillad to brugere at have samme e-mail adresse ', 'allow_duplicate_emails_addr', 1, 'f=index.htm&amp;as=admin_allow_duplicate_emails_addr&amp;ae=admin_allow_duplicate_emails_addr_end'), //cpg1.4
  array('Send e-mail til admin når der skal godkendes uploadede filer', 'upl_notify_admin_email', 1, 'f=index.htm&amp;as=admin_approval_notify&amp;ae=admin_approval_notify_end'), //cpg1.4
  array('Tillad at brugere der er logget ind kan se medlemslisten', 'allow_memberlist', 1, 'f=index.htm&amp;as=admin_user_memberlist&amp;ae=admin_user_memberlist_end'), //cpg1.4
  array('Tillad at brugere at ændre deres e-mail adresse i profilen', 'allow_email_change', 1, 'f=index.htm&amp;as=admin_user_allow_email_change&amp;ae=admin_user_allow_email_change_end'), //cpg1.4
  array('Tillad brugere har kontrol over deres egne filer i offentlige gallerier', 'users_can_edit_pics', 1, 'f=index.htm&amp;as=admin_user_editpics_public_start&amp;ae=admin_user_editpics_public_end'), //cpg1.4
  array('Antal mislykkede login indtil karantæne (for at undgå brute force angreb)', 'login_threshold', 0, 'f=index.htm&amp;as=admin_user_login_start&amp;ae=admin_user_login_end'), //cpg1.4
  array('Periode for karantæne efter mislykket login', 'login_expiry', 0, 'f=index.htm&amp;as=admin_user_login_start&amp;ae=admin_user_login_end'), //cpg1.4
  array('Slå rapport til Admin til', 'report_post', 1, 'f=index.htm&amp;as=admin_user_enable_report&amp;ae=admin_user_enable_report_end'),  //cpg1.4

// custom profile fields,  //cpg1.4
  'Brugerdefineret felter til brug ved brugerprofil (Lad stå tomme hvis de ikke bruges).
  Profil 6 er til lange beskrivelser, som f.eks. biografi', //cpg1.4
  array('Navn på profil 1', 'user_profile1_name', 0, 'f=index.htm&amp;as=admin_custom&amp;ae=admin_custom_end'), //cpg1.4
  array('Navn på profil 2', 'user_profile2_name', 0), //cpg1.4
  array('Navn på profil 3', 'user_profile3_name', 0), //cpg1.4
  array('Navn på profil 4', 'user_profile4_name', 0), //cpg1.4
  array('Navn på profil 5', 'user_profile5_name', 0), //cpg1.4
  array('Navn på profil 6', 'user_profile6_name', 0), //cpg1.4

  'Brugerdefinerede felter til billedbeskrivelser (Lad stå tomme hvis de ikke bruges)',
  array('Navn på felt 1', 'user_field1_name', 0, 'f=index.htm&amp;as=admin_custom_image&amp;ae=admin_custom_image_end'), //cpg1.4
  array('Navn på felt 2', 'user_field2_name', 0),
  array('Navn på felt 3', 'user_field3_name', 0),
  array('Navn på felt 4', 'user_field4_name', 0),

  'Cookies &amp; tegn-kodnings indstillinger',
  array('Cookie navn', 'cookie_name', 0, 'f=index.htm&amp;as=admin_cookie_name&amp;ae=admin_cookie_name_end'), //cpg1.4
  array('Cookie sti', 'cookie_path', 0, 'f=index.htm&amp;as=admin_cookie_path&amp;ae=admin_cookie_path_end'), //cpg1.4

  'E-mail indstillinger (som regel behøver intet at blive ændret her; lad alle felter stå tomme, hvis du ikke er sikker)', //cpg1.4
  array('SMTP Host (Hvis ikke defineret, vil sendmail blive brugt)', 'smtp_host', 0, 'f=index.htm&amp;as=admin_email&amp;ae=admin_email_end'), //cpg1.4
  array('SMTP Brugernavn', 'smtp_username', 0), //cpg1.4
  array('SMTP Adgangskode', 'smtp_password', 0), //cpg1.4

  'Logning og statistik', //cpg1.4
  array('Lognings tilstand <a href="#notice3" class="clickable_option">***</a>', 'log_mode', 11, 'f=index.htm&amp;as=admin_logging_log_mode&amp;ae=admin_logging_log_mode_end'), //cpg1.4
  array('Log e-kort', 'log_ecards', 1, 'f=index.htm&amp;as=admin_general_log_ecards&amp;ae=admin_general_log_ecards_end'), //cpg1.4
  array('Bevar detaljeret statistik for karaktergivning','vote_details',1, 'f=index.htm&amp;as=admin_logging_votedetails&amp;ae=admin_logging_votedetails_end'), //cpg1.4
  array('Bevar detaljeret statistik for visninger','hit_details',1, 'f=index.htm&amp;as=admin_logging_hitdetails&amp;ae=admin_logging_hitdetails_end'), //cpg1.4

  'Vedligeholdelsesindstillinger', //cpg1.4
  array('Slå fejlfindingstilstand til', 'debug_mode', 9, 'f=index.htm&amp;as=debug_mode&amp;ae=debug_mode_end'), //cpg1.4
  array('Vis meddelelser i fejlfindings tilstand', 'debug_notice', 1, 'f=index.htm&amp;as=admin_misc_debug_notices&amp;ae=admin_misc_debug_notices_end'), //cpg1.4
  array('Galleriet er offline', 'offline', 1, 'f=index.htm&amp;as=admin_general_offline&amp;ae=admin_general_offline_end'), //cpg1.4
);


// ------------------------------------------------------------------------- //
// File db_ecard.php
// ------------------------------------------------------------------------- //

if (defined('DB_ECARD_PHP')) $lang_db_ecard_php = array(
  'title' => 'Send e-postkort',
  'ecard_sender' => 'Afsender',
  'ecard_recipient' => 'Modtager',
  'ecard_date' => 'Dato',
  'ecard_display' => 'Vis e-postkort',
  'ecard_name' => 'Navn',
  'ecard_email' => 'E-mail',
  'ecard_ip' => 'IP #',
  'ecard_ascending' => 'Stigende',
  'ecard_descending' => 'Faldende',
  'ecard_sorted' => 'Sorter',
  'ecard_by_date' => 'efter dato',
  'ecard_by_sender_name' => 'efter afsenders navn',
  'ecard_by_sender_email' => 'efter afsenders e-mail',
  'ecard_by_sender_ip' => 'efter afsenders IP adresse',
  'ecard_by_recipient_name' => 'efter modtagers navn',
  'ecard_by_recipient_email' => 'efter modtagers e-mail',
  'ecard_number' => 'vis e-postkort %s til %s af %s',
  'ecard_goto_page' => 'gå til side',
  'ecard_records_per_page' => 'e-postkort pr. side',
  'check_all' => 'Marker alle',
  'uncheck_all' => 'Fjern alle markeringer',
  'ecards_delete_selected' => 'Slet valgte e-postkort',
  'ecards_delete_confirm' => 'Er du sikker på du vil slette valgte e-postkort? Marker afkrydsningsboksen!',
  'ecards_delete_sure' => 'Jeg er sikker',
);


// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
  'empty_name_or_com' => 'Du skal indtaste dit navn og en kommentar',
  'com_added' => 'Din kommentar blev tilføjet',
  'alb_need_title' => 'Du skal angive en titel til dit album!',
  'no_udp_needed' => 'Der var ikke behov for en opdatering.',
  'alb_updated' => 'Albummet blev opdateret',
  'unknown_album' => 'Det valgte album eksisterer ikke eller du har ikke rettigheder til at uploade til det',
  'no_pic_uploaded' => 'Der blev ikke uploadet nogen fil!<br /><br />Hvis du valgte en fil der skal uploades så kontroller at serveren tillader fil upload...',
  'err_mkdir' => 'Kunne ikke oprette denne mappe: %s !',
  'dest_dir_ro' => 'Destinations mappen %s er ikke skrivbar af dette script !',
  'err_move' => 'Kunne ikke flytte %s til %s !',
  'err_fsize_too_large' => 'Den fil du har uploadet er for stort (max tilladte størrelse er %s x %s) !', //obsolete since cpg1.3 - consider removal in cpg1.4 once upload.php has been overhauled
  'err_imgsize_too_large' => 'Den fil du har uploadet er for stor (max tilladte filstørrelse er %s KB) !', //obsolete since cpg1.3 - consider removal in cpg1.4 once upload.php has been overhauled
  'err_invalid_img' => 'Filen du har uploadet er ikke et gyldigt billede!',
  'allowed_img_types' => 'Du kan kun uploade %s billeder.',
  'err_insert_pic' => 'Filen \'%s\' kunne ikke indsættes i albummet ',
  'upload_success' => 'Din fil blev uploadet med succes.<br /><br />Den er synlig når en administrator har godkendt den.',
  'notify_admin_email_subject' => '%s - information om upload',
  'notify_admin_email_body' => 'Et billede som kræver godkendelse er blevet uploadet af %s. Besøg %s',
  'info' => 'Information',
  'com_added' => 'Kommentar tilføjet',
  'alb_updated' => 'Album opdateret',
  'err_comment_empty' => 'Din kommentar er tom!',
  'err_invalid_fext' => 'Kun filer med følgende endelser er gyldige: <br /><br />%s.',
  'no_flood' => 'Desværre, men du er stadig den seneste der har kommenteret denne fil<br /><br />Rediger kommentaren hvis du vil ændre den',
  'redirect_msg' => 'Du bliver viderestillet.<br /><br /><br />Tryk på \'FORTSÆT\' hvis siden ikke opdateres automatisk',
  'upl_success' => 'Din fil blev tilføjet med succes',
  'email_comment_subject' => 'Kommentar tilføjet på Coppermine billedgalleri',
  'email_comment_body' => 'Nogen har sendt en kommentar til dit galleri. Se den her',
  'album_not_selected' => 'Album ikke valgt', //cpg1.4
  'com_author_error' => 'En registreret bruger har allerede dette navn, log ind eller brug et andet navn', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
  'caption' => 'Overskrift',
  'fs_pic' => 'Fuld størrelse billede',
  'del_success' => 'slettet',
  'ns_pic' => 'Mellem størrelse billede',
  'err_del' => 'Kan ikke slettes',
  'thumb_pic' => 'Minibillede',
  'comment' => 'Kommentar',
  'im_in_alb' => 'Billede i album',
  'alb_del_success' => 'Album &laquo;%s&raquo; slettet', //cpg1.4
  'alb_mgr' => 'Album Administrator',
  'err_invalid_data' => 'Forkert data modtaget i \'%s\'',
  'create_alb' => 'Opretter album \'%s\'',
  'update_alb' => 'Opdaterer album \'%s\' med titel \'%s\' og index \'%s\'',
  'del_pic' => 'Slet fil',
  'del_alb' => 'Slet album',
  'del_user' => 'Slet bruger',
  'err_unknown_user' => 'Den valgte bruger findes ikke!',
  'err_empty_groups' => 'Der findes ingen gruppetabel, eller også er gruppetabellen tom!', //cpg1.4
  'comment_deleted' => 'Kommentaren blev slettet',
  'npic' => 'Billede', //cpg1.4
  'pic_mgr' => 'Billed Manager', //cpg1.4
  'update_pic' => 'Opdatere billede \'%s\' med filnavnet \'%s\' og index \'%s\'', //cpg1.4
  'username' => 'Brugernavn', //cpg1.4
  'anonymized_comments' => '%s kommentarer anonymiseret ', //cpg1.4
  'anonymized_uploads' => '%s offentlig upload(s) anonymiseret', //cpg1.4
  'deleted_comments' => '%s kommentar slettet', //cpg1.4
  'deleted_uploads' => '%s offentlig upload(s) slettet', //cpg1.4
  'user_deleted' => 'bruger %s slettet', //cpg1.4
  'activate_user' => 'Aktiv bruger', //cpg1.4
  'user_already_active' => 'Konto allerede aktiv', //cpg1.4
  'activated' => 'Aktiveret', //cpg1.4
  'deactivate_user' => 'Deaktiveret bruger', //cpg1.4
  'user_already_inactive' => 'Konto allerede inaktiv', //cpg1.4
  'deactivated' => 'Deaktiver', //cpg1.4
  'reset_password' => 'Nulstil adgangskode(r)', //cpg1.4
  'password_reset' => 'Adgangskode nulstillet til %s', //cpg1.4
  'change_group' => 'Ændre primær gruppe', //cpg1.4
  'change_group_to_group' => 'Ændre fra %s til %s', //cpg1.4
  'add_group' => 'Tilføj efterfølgende gruppe', //cpg1.4
  'add_group_to_group' => 'Tilføj bruger %s til gruppe %s. Bruger er nu primærmedlem af gruppen %s og sekundær medlem af gruppen %s. ', //cpg1.4
  'status' => 'Status', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File displayecard.php
// ------------------------------------------------------------------------- //

if (defined('DISPLAYECARD_PHP')) {

$lang_displayecard_php = array(
  'invalid_data' => 'Dataen i e-kortet du prøver at se er blevet ødelagt af dit e-mail program. Tjek om linket er hel, eller om det er delt over flere linjer.', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File displayimage.php
// ------------------------------------------------------------------------- //

if (defined('DISPLAYIMAGE_PHP')){

$lang_display_image_php = array(
  'confirm_del' => 'Er du sikker på, at du ønsker at SLETTE denne fil? \\nKommentare bliver også slettet.', //js-alert
  'del_pic' => 'SLET DENNE FIL',
  'size' => '%s x %s pixels',
  'views' => '%s gange',
  'slideshow' => 'Diasshow',
  'stop_slideshow' => 'STOP DIASSHOW',
  'view_fs' => 'Klik for at se fuld størrelse billede',
  'edit_pic' => 'Rediger beskrivelse', //cpg1.4
  'crop_pic' => 'Beskær og roter',
  'set_player' => 'Skift afspiller',
);

$lang_picinfo = array(
  'title' =>'Fil information',
  'Filename' => 'Filnavn',
  'Album name' => 'Album navn',
  'Rating' => 'Karakter (%s votes)',
  'Keywords' => 'Nøgleord',
  'File Size' => 'Filstørrelse',
  'Date Added' => 'Dato tilføjet', //cpg1.4
  'Dimensions' => 'Dimensioner',
  'Displayed' => 'Vist',
  'URL' => 'URL', //cpg1.4
  'Make' => 'Lav', //cpg1.4
  'Model' => 'Model', //cpg1.4
  'DateTime' => 'Dato Tid', //cpg1.4
  'ISOSpeedRatings'=>'ISO', //cpg1.4
  'MaxApertureValue' => 'Maks blændeåbning', //cpg1.4
  'FocalLength' => 'Brændvidde', //cpg1.4
  'Comment' => 'Kommentar',
  'addFav'=>'Tilføj til favoritter',
  'addFavPhrase'=>'Favoritter',
  'remFav'=>'Fjern fra favoritter',
  'iptcTitle'=>'IPTC Titel',
  'iptcCopyright'=>'IPTC copyright',
  'iptcKeywords'=>'IPTC Nøgleord',
  'iptcCategory'=>'IPTC Kategori',
  'iptcSubCategories'=>'IPTC Underkategori',
  'ColorSpace' => 'Farverum', //cpg1.4
  'ExposureProgram' => 'Eksponeringsprogram', //cpg1.4
  'Flash' => 'Blitz', //cpg1.4
  'MeteringMode' => 'Måletilstand', //cpg1.4
  'ExposureTime' => 'Eksponering tid', //cpg1.4
  'ExposureBiasValue' => 'Eksponering Bias', //cpg1.4
  'ImageDescription' => ' Billdebeskrivelse', //cpg1.4
  'Orientation' => 'Orientering', //cpg1.4
  'xResolution' => 'X Opløsning', //cpg1.4
  'yResolution' => 'Y Opløsning', //cpg1.4
  'ResolutionUnit' => 'Opløsning enhed', //cpg1.4
  'Software' => 'program', //cpg1.4
  'YCbCrPositioning' => 'YCbCrPositionering', //cpg1.4
  'ExifOffset' => 'Exif Offset', //cpg1.4
  'IFD1Offset' => 'IFD1 Offset', //cpg1.4
  'FNumber' => 'FNumber', //cpg1.4
  'ExifVersion' => 'Exif Version', //cpg1.4
  'DateTimeOriginal' => 'Original dato og tid', //cpg1.4
  'DateTimedigitized' => 'Digitaliseret dato og tid', //cpg1.4
  'ComponentsConfiguration' => 'Komponent konfiguration', //cpg1.4
  'CompressedBitsPerPixel' => 'Komprimeret Bits Pr Pixel', //cpg1.4
  'LightSource' => 'Lyskilde', //cpg1.4
  'ISOSetting' => 'ISO Indstillinger', //cpg1.4
  'ColorMode' => 'Farve Tilstand', //cpg1.4
  'Quality' => 'Kvalitet', //cpg1.4
  'ImageSharpening' => 'Billedskarphed', //cpg1.4
  'FocusMode' => 'Fokus Tilstand', //cpg1.4
  'FlashSetting' => 'Blitz indstilling', //cpg1.4
  'ISOSelection' => 'ISO Valg', //cpg1.4
  'ImageAdjustment' => 'Billedindstilling', //cpg1.4
  'Adapter' => 'Adapter', //cpg1.4
  'ManualFocusDistance' => 'Manuel Fokus Afstand', //cpg1.4
  'DigitalZoom' => 'Digital Zoom', //cpg1.4
  'AFFocusPosition' => 'AF Fokus Position', //cpg1.4
  'Saturation' => 'Farvemætning', //cpg1.4
  'NoiseReduction' => 'Støj reduktion', //cpg1.4
  'FlashPixVersion' => 'Blitz Pix Version', //cpg1.4
  'ExifImageWidth' => 'Exif Billedbrede', //cpg1.4
  'ExifImageHeight' => 'Exif Billedhøjde', //cpg1.4
  'ExifInteroperabilityOffset' => 'Exif Interoperabilitets Offset', //cpg1.4
  'FileSource' => 'Filkilde', //cpg1.4
  'SceneType' => 'Scenetype', //cpg1.4
  'CustomerRender' => 'Kunde Rendering', //cpg1.4
  'ExposureMode' => 'Eksponering Tilstand', //cpg1.4
  'WhiteBalance' => 'Hvidbalance', //cpg1.4
  'DigitalZoomRatio' => 'Digitalt Zoom Forhold', //cpg1.4
  'SceneCaptureMode' => 'Scene Capture Tilstand', //cpg1.4
  'GainControl' => 'Gain Kontrol', //cpg1.4
  'Contrast' => 'Kontrast', //cpg1.4
  'Sharpness' => 'Skarphed', //cpg1.4
  'ManageExifDisplay' => 'Opdater Exif Visning', //cpg1.4
  'submit' => 'Send', //cpg1.4
  'success' => 'Oplysninger blev opdateret.', //cpg1.4
  'details' => 'Detaljer', //cpg1.4
);

$lang_display_comments = array(
  'OK' => 'OK',
  'edit_title' => 'Ret denne kommentar',
  'confirm_delete' => 'Er du sikker på at du vil slette denne kommentar?', //js-alert
  'add_your_comment' => 'Tilføj din kommentar',
  'name'=>'Navn',
  'comment'=>'Kommentar',
  'your_name' => 'Anonym',
  'report_comment_title' => 'Rapporter denne kommentar til administrator', //cpg1.4
);

$lang_fullsize_popup = array(
  'click_to_close' => 'Klik på billedet for at lukke dette vindue',
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
  'title' => 'Send et e-postkort',
  'invalid_email' => '<font color="red"><b>Advarsel</b></font>: ugyldig e-mail adresse!:', //cpg1.4
  'ecard_title' => 'Et e-postkort fra %s til dig',
  'error_not_image' => 'Kun billeder kan sendes som e-postkort.',
  'view_ecard' => 'Hvis e-postkortet ikke vises korrekt, klik her', //cpg1.4
  'view_ecard_plaintext' => 'For at se e-kortet, kopier denne url ind i din browser', //cpg1.4
  'view_more_pics' => 'Klik på dette link for at se flere billeder!', //cpg1.4
  'send_success' => 'Dit e-postkort blev sendt',
  'send_failed' => 'Beklager men serveren kan ikke sende dit e-postkort...',
  'from' => 'Fra',
  'your_name' => 'Dit navn',
  'your_email' => 'Din e-mail adresse',
  'to' => 'Til',
  'rcpt_name' => 'Modtagers navn',
  'rcpt_email' => 'Modtagers e-mail adresse',
  'greetings' => 'Hilsen', //cpg1.4
  'message' => 'Besked', //cpg1.4
  'ecards_footer' => 'Sendt af %s fra IP %s klokken %s (Galler tid)', //cpg1.4
  'preview' => 'Vis e-kort', //cpg1.4
  'preview_button' => 'Vis', //cpg1.4
  'submit_button' => 'Send e-kort', //cpg1.4
  'preview_view_ecard' => 'Dette vil være det alternative link til e-kortet, når det er lavet. Dette vil ikke virke med forhåndsvisning.', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File report_file.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('REPORT_FILE_PHP') || defined('DISPLAYREPORT_PHP')) $lang_report_php =array(
  'title' => 'Rapporter til administrator', //cpg1.4
  'invalid_email' => '<b>Advarsel</b> : Ugyldig e-mail adresse!', //cpg1.4
  'report_subject' => 'En rapport fra %s på galleriet %s', //cpg1.4
  'view_report' => 'Alternativ link hvis denne rapport ikke bliver vist korrekt', //cpg1.4
  'view_report_plaintext' => 'For at se denne rapport, kopier og indsæt denne url i din browser', //cpg1.4
  'view_more_pics' => 'Galleri', //cpg1.4
  'send_success' => 'Din rapport blev sendt', //cpg1.4
  'send_failed' => 'Beklager, men serveren kan ikke sende din rapport...', //cpg1.4
  'from' => 'Fra', //cpg1.4
  'your_name' => 'Dit navn', //cpg1.4
  'your_email' => 'Din e-mail adresse', //cpg1.4
  'to' => 'Til', //cpg1.4
  'administrator' => 'Administrator/Moderator', //cpg1.4
  'subject' => 'Emne', //cpg1.4
  'comment_field_name' => 'Rapporterer kommentar af "%s"', //cpg1.4
  'reason' => 'Årsag', //cpg1.4
  'message' => 'Meddelse', //cpg1.4
  'report_footer' => 'Sendt af %s fra ip %s klokken %s (Galleri tid)', //cpg1.4
  'obscene' => 'uanstændig', //cpg1.4
  'offensive' => 'anstødelig', //cpg1.4
  'misplaced' => 'Udenfor emne/malplaceret', //cpg1.4
  'missing' => 'manglende', //cpg1.4
  'issue' => 'fejl/kan ikke vises', //cpg1.4
  'other' => 'andet', //cpg1.4
  'refers_to' => 'Filrapport henvisning til', //cpg1.4
  'reasons_list_heading' => 'Årsag(er) for rapport:', //cpg1.4
  'no_reason_given' => 'ingen årsag blev givet', //cpg1.4
  'go_comment' => 'Gå til kommentar', //cpg1.4
  'view_comment' => 'Vis fuld rapport med kommentar', //cpg1.4
  'type_file' => 'fil', //cpg1.4
  'type_comment' => 'Kommentar', //cpg1.4
  'invalid_data' => 'Data i den rapport du prøver at få adgang til er blevet ødelagt af din e-mail klient. Tjek om link er fuldstændig.', //cpg1.4

);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
  'pic_info' => 'Fil info',
  'album' => 'Album',
  'title' => 'Titel',
  'filename' => 'Filnavn', //cpg1.4
  'desc' => 'Beskrivelse',
  'keywords' => 'Nøgleord',
  'new_keyword' => 'Nyt Nøgleord', //cpg1.4
  'new_keywords' => 'Nyt nøgleord fundet', //cpg1.4
  'existing_keyword' => 'Eksisterende nøgleord', //cpg1.4
  'pic_info_str' => '%s &times; %s - %s KB - %s visninger - %s stemmer',
  'approve' => 'Godkend fil',
  'postpone_app' => 'Udskyd godkendelsen',
  'del_pic' => 'Slet fil',
  'del_all' => 'Slet ALLE fil', //cpg1.4
  'read_exif' => 'Læs EXIF info igen',
  'reset_view_count' => 'Nulstil tæller',
  'reset_all_view_count' => 'Nulstil ALLE visnings tællere', //cpg1.4
  'reset_votes' => 'Nulstil afstemning',
  'reset_all_votes' => 'Nulstil ALLE stemmer', //cpg1.4
  'del_comm' => 'Slet kommentarer',
  'del_all_comm' => 'Slet ALLE kommentarer', //cpg1.4
  'upl_approval' => 'Upload godkendelse', //cpg1.4
  'edit_pics' => 'Rediger filer',
  'see_next' => 'Se næste filer',
  'see_prev' => 'Se forrige filer',
  'n_pic' => '%s filer',
  'n_of_pic_to_disp' => 'Antal filer til fremvisning',
  'apply' => 'Anvend rettelser',
  'crop_title' => 'Coppermine billededitor',
  'preview' => 'Vis',
  'save' => 'Gem billede',
  'save_thumb' =>'Gem som minibillede',
  'gallery_icon' => 'Lav dette til min ikon', //cpg1.4
  'sel_on_img' =>'Markeringen skal være indenfor billedet!', //js-alert
  'album_properties' =>'Album egenskaber', //cpg1.4
  'parent_category' =>'Hoved kategori', //cpg1.4
  'thumbnail_view' =>'Minibillede visning', //cpg1.4
  'select_unselect' =>'Vælge/fravælge alle', //cpg1.4
  'file_exists' => "Destinations filen '%s' findes allerede.", //cpg1.4
  'rename_failed' => "Kunne ikke omdøbe '%s' til '%s'.", //cpg1.4
  'src_file_missing' => "Kilde file '%s' mangler.", // cpg 1.4
  'mime_conv' => "Kunne ikke konvertere filen fra '%s' til '%s'",//cpg1.4
  'forb_ext' => 'Ulovlig fil endelse.',//cpg1.4
);

// ------------------------------------------------------------------------- //
// File faq.php
// ------------------------------------------------------------------------- //

if (defined('FAQ_PHP')) $lang_faq_php = array(
  'faq' => 'Ofte stillede spørgsmål(OSS)',
  'toc' => 'Indholdsfortegnelse',
  'question' => 'Spørgsmål: ',
  'answer' => 'Svar: ',
);

if (defined('FAQ_PHP')) $lang_faq_data = array(
  'Generelle Spørgsmål og Svar',
  array('Hvorfor skal jeg registreres?', 'Registrering kan eller kan ikke være krævet af administratoren. Registrering giver ekstra muligheder som at uploade filer, have en liste over foretrukne, give billeder kommentarer osv.', 'allow_user_registration', '1'),
  array('Hvordan bliver jeg registreret?', 'Gå til "Registrer" og udfyld de krævede felter (og de frivillige hvis du har lyst).<br />Hvis administratoren har slået E-mail aktivering til, vil du efter registrering modtage en e-mail på den adresse du har skrevet, som vil give dig information om hvordan du aktiverer din konto. Din konto skal aktiveres før du kan logge ind.', 'allow_user_registration', '1'), //cpg1.4
  array('Hvordan logger jeg ind?', 'Gå til "Registre", skriv dit brugernavn og og adgangskode og marker "Husk mig" så vil du være logget ind næste gang du besøger siden.<br /><b>VIGTIGT: Cookies skal være aktiveret og cookie fra denne side må ikke slettes hvis du vil bruge "Husk mig" funktionen.</b>', 'offline', 0),
  array('Hvorfor kan jeg ikke logge ind?', 'Registrerede du dig og trykkede på linket i den mail du fik tilsendt?. Linket vil aktivere din konto. For andre login problemer, kontakt administratoren.', 'offline', 0),
  array('Hvad hvis jeg glemmer min adgangskode?', 'Hvis siden har et "Glemt adgangskode" link så brug det. Ellers kontakt administratoren for at få en ny kode.', 'offline', 0),
  //array('Hvad hvis jeg har fået ny e-mail adresse?', 'Så log ind og ret din e-mail adresse via "Profile"', 'offline', 0),
  array('Hvordan tilføjer jeg billeder til "Foretrukne"?', 'Vælg et billede og tryk på "Billedinfo" linket (<img src="images/info.gif" width="16" height="16" border="0" alt="Picture information" />); scroll ned til billedinformationerne og tryk på "Føj til foretrukne".<br />Administratoren kan have sat "Billedeinformation" på som standard.<br />VIGTIGT:Cookies skal være aktiveret og cookien fra denne side må ikke slettes.', 'offline', 0),
  array('Hvordan giver jeg et billede karakter?', 'Klik på et minibillede, scroll til bunden, og vælg en karakter.', 'offline', 0),
  array('Hvordan kommenterer jeg et billede?', 'Klik på et minibillede, scroll til bunden, og skriv en kommentar.', 'offline', 0),
  array('Hvordan uploader jeg et billede?', 'Gå til "Upload billede" vælg et album, tryk "Gennemse" find det billede du vil upload, og tryk på "åben" skriv titel og beskrivelse hvis du har lyst. Tryk så på "Send".<br />Et alternativ for dem der bruger <b>Windows XP</b>, du kan upload flere filer direkte til dit private album ved at bruge XP guiden Webudgivelse.<br />For instrukser om hvordan, og for at få den nødvendige registry file, klik <a href="xp_publish.php">her.</a>', 'allow_private_albums', 1), //cpg1.4
  array('Hvor kan jeg uploade billeder til?', 'Du kan uploade billeder til en af dine albums i "Mit Galleri". Adminstratoren kan også give tilladelse til at du kan uploade til et eller flere albums i hoved galleriet.', 'allow_private_albums', 0),
  array('Hvilken størrelse og type af billeder kan jeg uploade?', 'Størrelsen og typen (jpg, png, osv.) er valgt af administratoren.', 'offline', 0),
  array('Hvordan opretter, omdøber eller sletter jeg et album i "Mit Galleri"?', 'Du burde allerede være i "Administrator-Tilstand"<br />Gå til "Opret/rediger Mine Albums" og tryk på "Ny". Ret "Nyt Album" til det ønskede navn.<br />Du kan også omdøbe et eksisterende album.<br />Tryk på "Godkend rettelser".', 'allow_private_albums', 0),
  array('Hvordan kan jeg vælge hvem der kan se mine albums?', 'Du burde allerede være i "Admin. tilstand"<br />Gå til "Rediger Mine Albums" på "Opdater album" baren, og vælg det album du vil redigere.<br />Her kan du ændre navn, beskrivelse, minibillede, og begrænse visning og kommentar tilladelser.<br />Tryk på "Opdater album".', 'allow_private_albums', 0),
  array('Hvordan kan jeg se andre brugeres gallerier?', 'Gå til "Album Liste" og vælg "Bruger gallerier".', 'allow_private_albums', 0),
  array('Hvad er cookies?', 'Cookies er en tekst fil som sendes fra en hjemmeside og gemmes på din computer.<br />Cookies tillader brugeren at forlade en side og komme tilbage uden at logge ind igen og at tilpasse siden på forskellige måder.', 'offline', 0),
  array('Hvor kan jeg hente dette program til min side?', 'Coppermine er et gratis Multimedia Galleri, udgiver under GNU licens. Det er fuld af funktioner og findes til forskellige platforme. Besøg <a href="http://coppermine.sf.net/">Coppermine hjemmesiden</a> for at læse mere eller at hente det.', 'offline', 0),

  'Navigering på siden',
  array('Hvad er "Albumliste"?', 'Dette vil vise dig hele galleriet med et link til hver kategori. Minibilleder kan være et link til en kategori.', 'offline', 0),
  array('Hvad er "Mit Galleri"?', 'Denne funktion tillader at hver bruger laver sit eget galleri, som brugeren kan tilføje, slette og redigere albums i, samt uploade billeder til dem.', 'allow_private_albums', 1), //cpg1.4
  array('Hvad er forskellen mellem &quot;Admin Tilstand&quot; og &quot;Bruger Tilstand&quot;?', 'I Admin Tilstand kan brugere ændre deres galleri (såvel som andres hvis tilladelse er givet af administrator).', 'allow_private_albums', 0),
  array('Hvad er "Upload Billeder"?', 'Denne funktion giver brugeren mulighed for at uploade et billede (størrelse og type er valgt af administratoren) til et galleri som du eller administratoren har valgt.', 'allow_private_albums', 0),
  array('Hvad er "Nyeste uploads"?', 'Denne funktion viser de nyeste filer som er uploadet til siden.', 'offline', 0),
  array('Hvad er "Nyeste kommentar"?', 'Denne funktion viser de nyeste kommentarer med de tilhørende billeder.', 'offline', 0),
  array('Hvad er "Mest viste"?', 'Denne funktion viser de billeder som er vist flest gange af alle brugere (uanset om de er logget ind eller ej).', 'offline', 0),
  array('Hvad er "Topkarakter"?', 'Denne funktion viser hvilket billede der har opnået højest karakter fra brugererne, og viser den gennemsnitlige karakter.<br />Hvis f.eks. fem brugere gav <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> ville billedet have et gennemsnit på <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> .<br />Hvis fem brugere gav billedet fra 1-5 (1,2,3,4,5) ville resuletere give et snit på <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> .<br />Karakteren går fra <img src="images/rating5.gif" width="65" height="14" border="0" alt="best" /> (bedst) til <img src="images/rating0.gif" width="65" height="14" border="0" alt="worst" /> (værst).', 'offline', 0),
  array('Hvad er "Mine Foretrukne"?', 'Denne funktion lader brugeren gemme sine foretrukne billeder i en cookie som gemmes på vedkommendes computer.', 'offline', 0),
);


// ------------------------------------------------------------------------- //
// File forgot_passwd.php
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) $lang_forgot_passwd_php = array(
  'forgot_passwd' => 'Glemt adgangskode',
  'err_already_logged_in' => 'Du er allerede logget ind!',
  'enter_email' => 'Indtast e-mail adresse', //cpg1.4
  'submit' => 'Send',
  'illegal_session' => 'Adgangskode påmindelse session er ugyldig eller udløbet.', //cpg1.4
  'failed_sending_email' => 'Adgangskode påmindelses e-mail kunne ikke sendes!',
  'email_sent' => 'En e-mail med dit brugernavn og nye adgangskode blev sendt til %s', //cpg1.4
  'verify_email_sent' => 'En e-mail er blevet sendt til %s. Tjek din indbakke for at fuldføre processen.', //cpg1.4
  'err_unk_user' => 'Den valgte bruger findes ikke!',
  'account_verify_subject' => '%s - Forespørgels om ny adgangskode', //cpg1.4
  'account_verify_body' => 'Du har anmodet om en ny adgangskode. Hvis du fortsat ønsker en ny adgangskode sendt til dig, klik på følgende link:

%s', //cpg1.4
  'passwd_reset_subject' => '%s - Din nye adgangskode', //cpg1.4
  'passwd_reset_body' => 'Her er den nye adgangskode du anmodede om:
Brugernavn: %s
Adgangskode: %s
Tryk på %s for at logge ind.', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
  'group_name' => 'Gruppe navn', //cpg1.4
  'permissions' => 'Tilladelse', //cpg1.4
  'public_albums' => 'Offentlig albums upload', //cpg1.4
  'personal_gallery' => 'Personlig Galleri', //cpg1.4
  'upload_method' => 'Upload metode', //cpg1.4
  'disk_quota' => 'Disk kvote', //cpg1.4
  'rating' => 'Kan give karakter', //cpg1.4
  'ecards' => 'Kan sende e-postkort', //cpg1.4
  'comments' => 'Kan oprette kommentar', //cpg1.4
  'allowed' => 'Tilladt', //cpg1.4
  'approval' => 'Godkendelse', //cpg1.4
  'boxes_number' => 'Antal bokse', //cpg1.4
  'variable' => 'variabel', //cpg1.4
  'fixed' => 'låst', //cpg1.4
  'apply' => 'Anvend rettelser',
  'create_new_group' => 'Opret ny gruppe',
  'del_groups' => 'Slet valgte Gruppe(r)',
  'confirm_del' => 'Advarsel, Når du sletter denne gruppe, vil brugere der tilhører denne gruppe blive overført til \'Registeret\' gruppen !\n\nVil du fortsætte?', //js-alert
  'title' => 'Administrer bruger grupper',
  'num_file_upload' => 'Fil upload bokse', //cpg1.4
  'num_URI_upload' => 'URI upload bokse', //cpg1.4
  'reset_to_default' => 'Gendan til standardværdi (%s) - anbefalet!', //cpg1.4
  'error_group_empty' => 'Gruppe tabel var tom!<br /><br />Standart gruppen blev lavet, venligst genindlæs siden', //cpg1.4
  'explain_greyed_out_title' => 'Hvorfor er denne række markeret grå?', //cpg1.4
  'explain_guests_greyed_out_text' => 'Du kan ikke ændre denne gruppes egenskaber fordi du har valgt "Tillad anonyme brugere (gæster eller anonym) adgang" til "Nej" på opsætningssiden. Alle gæster (medlemmer af gruppen %s) kan ikke gøre andet end logge ind derfor gælder gruppeindstillinger ikke for dem.', //cpg1.4
  'explain_banned_greyed_out_text' => 'Du kan ikke ændre egenskaber for gruppen %s fordi dens medlemmer kan gøre noget alligevel.', //cpg1.4
  'group_assigned_album' => 'Tildelt album(s)', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
  'welcome' => 'Velkommen!',
);

$lang_album_admin_menu = array(
  'confirm_delete' => 'Er du sikker på du vil SLETTE dette album? \\nAlle filer og kommentarer vil også blive slettet.', //js-alert
  'delete' => 'SLET',
  'modify' => 'EGENSKABER',
  'edit_pics' => 'REDIGER FILER',
);

$lang_list_categories = array(
  'home' => 'Hjem',
  'stat1' => '<b>[pictures]</b> filer i <b>[albums]</b> albums og <b>[cat]</b> kategorier med <b>[comments]</b> kommentarer vist <b>[views]</b> gange',
  'stat2' => '<b>[pictures]</b> filer i <b>[albums]</b> albums vist <b>[views]</b> gange',
  'xx_s_gallery' => '%s\'s Galleri',
  'stat3' => '<b>[pictures]</b> filer i <b>[albums]</b> albums med <b>[comments]</b> kommentarer vist <b>[views]</b> gange',
);

$lang_list_users = array(
  'user_list' => 'Bruger liste',
  'no_user_gal' => 'Der er ingen bruger gallerier',
  'n_albums' => '%s album(s)',
  'n_pics' => '%s fil(er)',
);

$lang_list_albums = array(
  'n_pictures' => '%s filer',
  'last_added' => ', sidste tilføjet den %s',
  'n_link_pictures' => '%s linkede filer', //cpg1.4
  'total_pictures' => '%s filer total', //cpg1.4
);

}

// ------------------------------------------------------------------------- //
// File keywordmgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('KEYWORDMGR_PHP')) $lang_keywordmgr_php = array(
  'title' => 'Håndtere nøgleord', //cpg1.4
  'edit' => 'rediger', //cpg1.4
  'delete' => 'Slet', //cpg1.4
  'search' => 'Søg', //cpg1.4
  'keyword_test_search' => 'Søg efter %s i et nyt vindue', //cpg1.4
  'keyword_del' => 'slet nøgleord %s', //cpg1.4
  'confirm_delete' => 'Er du sikker på du vil slette det nøgleord %s fra hele galleriet?', //cpg1.4  // js-alert
  'change_keyword' => 'Skift nøgleord', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
  'login' => 'Log ind',
  'enter_login_pswd' => 'Skriv dig brugernavn og adgangskode',
  'username' => 'Brugernavn',
  'password' => 'Adgangskode',
  'remember_me' => 'Husk mig',
  'welcome' => 'Velkommen %s ...',
  'err_login' => '*** Kunne ikke logge ind. Prøv igen ***',
  'err_already_logged_in' => 'Du er allerede logget ind!',
  'forgot_password_link' => 'Jeg har glemt min adgangskode',
  'cookie_warning' => 'Advarsel din browser acceptere ikke script\'s cookies', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
  'logout' => 'Log ud',
  'bye' => 'Farvel %s ...',
  'err_not_loged_in' => 'Du er ikke logget ind!',
);

// ------------------------------------------------------------------------- //
// File minibrowser.php  //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('MINIBROWSER_PHP')) $lang_minibrowser_php = array(
  'close' => 'luk', //cpg1.4
  'submit' => 'OK', //cpg1.4
  'up' => 'op et niveau', //cpg1.4
  'current_path' => 'nuværende sti', //cpg1.4
  'select_directory' => 'Vælg venligst en mappe', //cpg1.4
  'click_to_close' => 'Klik på billedet for at lukke vinduet',
);

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
  'upd_alb_n' => 'Opdater album %s',
  'general_settings' => 'Generelle indstillinger',
  'alb_title' => 'Album titel',
  'alb_cat' => 'Album kategori',
  'alb_desc' => 'Album beskrivelse',
  'alb_keyword' => 'Album nøgleord', //cpg1.4
  'alb_thumb' => 'Album minibillede',
  'alb_perm' => 'Tilladelser for dette album',
  'can_view' => 'Album kan vises af',
  'can_upload' => 'Gæster kan oploade billeder',
  'can_post_comments' => 'Gæster kan skrive kommentarer',
  'can_rate' => 'Gæster kan stemme på billeder',
  'user_gal' => 'Bruger Galleri',
  'no_cat' => '* Ingen kategori *',
  'alb_empty' => 'Album er tomt',
  'last_uploaded' => 'Sidst indsendt',
  'public_alb' => 'Alle (offentligt album)',
  'me_only' => 'Kun mig',
  'owner_only' => 'Album ejer (%s)',
  'groupp_only' => 'Medlemmer af \'%s\' gruppen',
  'err_no_alb_to_modify' => 'Intet album at korrigerer i databasen.',
  'update' => 'Opdater album',
  'reset_album' => 'Nulstil album', //cpg1.4
  'reset_views' => 'Nulstil tæller til visning til "0" i %s', //cpg1.4
  'reset_rating' => 'Nulstil karaktere på alle filer i %s', //cpg1.4
  'delete_comments' => 'Slet alle kommenterer i %s', //cpg1.4
  'delete_files' => '%sIrreversibly%s slet alle filer i %s', //cpg1.4
  'views' => 'visninger', //cpg1.4
  'votes' => 'stemmer', //cpg1.4
  'comments' => 'kommentarer', //cpg1.4
  'files' => 'filer', //cpg1.4
  'submit_reset' => 'gem ændringer', //cpg1.4
  'reset_views_confirm' => 'Jeg er sikker', //cpg1.4
  'notice1' => '(*) afhængig af %sgroups%s indstillinger',  //cpg1.4 //(do not translate %s!)
  'alb_password' => 'Album adgangskode', //cpg1.4
  'alb_password_hint' => 'Album adgangskode vink', //cpg1.4
  'edit_files' =>'ændre filer', //cpg1.4
  'parent_category' =>'Hoved kategori', //cpg1.4
  'thumbnail_view' =>'Minibilled visning', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File phpinfo.php
// ------------------------------------------------------------------------- //

if (defined('PHPINFO_PHP')) $lang_phpinfo_php = array(
  'php_info' => 'PHP info',
  'explanation' => 'Dette er genereret af PHP-funktionen <a href="http://www.php.net/phpinfo">phpinfo()</a>, vist inden i Coppermine (klipper uddata i højre side).',
  'no_link' => 'Det kan være en sikkerhedsrisiko at lade andre se din phpinfo, det er derfor denne side kun er tilgængelig når du er logget ond som administrator. Du kan ikke sende et link til denne side til andre, de vil blive nægtet adgang.',
);

// ------------------------------------------------------------------------- //
// File picmgr.php //cpg1.4
// ------------------------------------------------------------------------- //
if (defined('PICMGR_PHP')) $lang_picmgr_php = array(
  'pic_mgr' => 'Billedadministration', //cpg1.4
  'select_album' => 'Vælg Album', //cpg1.4
  'delete' => 'Slet', //cpg1.4
  'confirm_delete1' => 'Er du sikker på du vil slette dette billede?', //cpg1.4
  'confirm_delete2' => '\nBilledet vil blive slettet for altid.', //cpg1.4
  'apply_modifs' => 'Anvend rettelser', //cpg1.4
  'confirm_modifs' => 'Bekræft rettelser', //cpg1.4
  'pic_need_name' => 'Billedet skal have et navn !', //cpg1.4
  'no_change' => 'Du lavede ingen ændringer!', //cpg1.4
  'no_album' => '* Intet album *', //cpg1.4
  'explanation_header' => 'Den brugerdefineret sorteringsrækkefølge som du kan specificere på denne side vil kun have betydning hvis:', //cpg1.4
  'explanation1' => 'administratoren har sat "Standard sortering af filer" i opsætningen til "Position i faldende rækkefølge" eller "Position i stigende rækkefølge" (global indstilling for alle brugere som ikke har valgt egen sorteringsrækkefølge)', //cpg1.4
  'explanation2' => 'brugeren har valgt "Position i faldende rækkefølge" eller "Position i stigende rækkefølge" på minibillede siden (individuelle bruger indstillinger)', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File pluginmgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('PLUGINMGR_PHP')){

$lang_pluginmgr_php = array(
  'confirm_uninstall' => 'Er du sikker på du vil AFINSTALLERE denne plugin', //cpg1.4
  'confirm_delete' => 'Er du sikker på du vil SLETTE denne plugin', //cpg1.4
  'pmgr' => 'Plugin Administration', //cpg1.4
  'name' => 'Navn', //cpg1.4
  'author' => 'Forfatter', //cpg1.4
  'desc' => 'Beskrivelse', //cpg1.4
  'vers' => 'v', //cpg1.4
  'i_plugins' => 'Installeret Plugins', //cpg1.4
  'n_plugins' => 'Plugins som ikke er installeret', //cpg1.4
  'none_installed' => 'Ingen Installeret', //cpg1.4
  'operation' => 'Funktion', //cpg1.4
  'not_plugin_package' => 'Filen som blev uploaded er ikke en plugin pakke.', //cpg1.4
  'copy_error' => 'Der opstod en fejl ved kopiering af pakken til mappen indeholdende plugin.', //cpg1.4
  'upload' => 'Upload', //cpg1.4
  'configure_plugin' => 'Plugin konfiguration', //cpg1.4
  'cleanup_plugin' => 'Ryd op i plugin', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
  'already_rated' => 'Beklager, men du har allerede stemt på denne fil',
  'rate_ok' => 'Din stemme blev accepteret',
  'forbidden' => 'Du kan ikke stemme på egne filer.',
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
Mens administratorerne af denne side {SITE_NAME} vil prøve at fjerne eller tilrette alt generelt relevant materiale så hurtigt som muligt, er det umuligt at gennemse alle indlæg. Derfor bør du være opmærksom på at alle indlæg der er lavet til denne side Tilkendegiver meninger og holdninger af de forskellige forfattere og ikke altid administratorernes mening (med undtagelse af de indlæg skrevet af disse) derfor kan disse ikke stille til ansvar for andres indlæg.<br />
<br />
Du accepterer hermed ikke at indsende anstødelige, vulgære, usmagelige, hadefulde, truende, sex-relaterede eller andet materiale der er i strid med lovgivningen. Du accepterer hermed at webmaster, administratorerne af {SITE_NAME} har lov til at fjerne eller rette i indholdet til enhver tid. Som bruger accepterer du at alle dine oplysninger bliver gemt i en database. Men dine informationer bliver ikke givet videre til andre uden din accept. Administratorerne kan ikke kræves til ansvar overfor hackerforsøg der eventuelt kan føre til videregivelse af dine oplysninger.<br />
<br />
Denne side bruger cookies til at gemme informationer på din private computer. Disse cookies tjener kun det formål, at forbedre billedkvaliteten. Den tilsendte e-mail bekræfter din registrering, detaljer og adgangskode.<br>
<br />
Ved at klikke på 'Jeg accepterer' nedenfor accepterer du disse betingelser.
EOT;

$lang_register_php = array(
  'page_title' => 'Bruger registrering',
  'term_cond' => 'Regler og betingelser',
  'i_agree' => 'Jeg accepterer',
  'submit' => 'Send registrering',
  'err_user_exists' => 'Brugernavnet du har skrevet findes allerede, vælge venligst et andet',
  'err_password_mismatch' => 'De to adgangskoder er ikke ens, prøv igen',
  'err_uname_short' => 'Brugernavn skal være på mindst 2 karakterer',
  'err_password_short' => 'Adgangskode skal være på mindst 2 karakterer',
  'err_uname_pass_diff' => 'Brugernavn og adgangskode skal være forskellige',
  'err_invalid_email' => 'E-mail adresse er ugyldig',
  'err_duplicate_email' => 'En anden bruger er allerede registret med den e-mail du har opgivet',
  'enter_info' => 'Angiv registrerings information',
  'required_info' => 'Information er påkrævet',
  'optional_info' => 'Information er valgfri',
  'username' => 'Brugernavn',
  'password' => 'Adgangskode',
  'password_again' => 'Gentag adgangskode',
  'email' => 'E-mail',
  'location' => 'Sted',
  'interests' => 'Interesser',
  'website' => 'Hjemmeside',
  'occupation' => 'Beskæftigelse',
  'error' => 'Fejl',
  'confirm_email_subject' => '%s - Registrerings godkendelse',
  'information' => 'Information',
  'failed_sending_email' => 'Registrerings godkendelsen kan ikke sendes!',
  'thank_you' => 'Tak for din registrering.<br /><br />En e-mail med informationer om hvordan du aktivere din konto, er blevet sendt til den adresse som du har angivet.',
  'acct_created' => 'Din konto er blevet oprettet og du kan nu logge ind med dit brugernavn og din adgangskode',
  'acct_active' => 'Din konto er nu aktiv og du kan logge ind med dit brugernavn og din adgangskode',
  'acct_already_act' => 'Din konto er allerede aktiv!', //cpg1.4
  'acct_act_failed' => 'Denne konto kan ikke blive aktiveret!',
  'err_unk_user' => 'Valgte bruger eksister ikke!!',
  'x_s_profile' => '%s\'s profil',
  'group' => 'Gruppe',
  'reg_date' => 'Oprettet',
  'disk_usage' => 'Disk forbrug',
  'change_pass' => 'Skift adgangskode',
  'current_pass' => 'Nuværende adgangskode',
  'new_pass' => 'Ny adgangskode',
  'new_pass_again' => 'Ny adgangskode igen',
  'err_curr_pass' => 'Nuværende adgangskode er forkert',
  'apply_modif' => 'Tilføj rettelser',
  'change_pass' => 'Skift min adgangskode',
  'update_success' => 'Din profil blev opdateret',
  'pass_chg_success' => 'Din adgangskode blev ændret',
  'pass_chg_error' => 'Din adgangskode blev ikke ændret',
  'notify_admin_email_subject' => '%s - Information om registrering',
  'last_uploads' => 'Sidst uploadet fil.<br />Klik for at se alle fil der er uploaded af', //cpg1.4
  'last_comments' => 'Seneste kommentar.<br />Klik for at se alle kommentarer lavet af', //cpg1.4
  'notify_admin_email_body' => 'En ny bruger med brugernavnet "%s" har registreret sig i dit galleri',
  'pic_count' => 'Uploadede filer', //cpg1.4
  'notify_admin_request_email_subject' => '%s - Registrerings anmodning', //cpg1.4
  'thank_you_admin_activation' => 'Tak.<br /><br />Din anmodning om aktivering af din konto blev sendt til administrator. Du vil modtage en e-mail ved godkendelse.', //cpg1.4
  'acct_active_admin_activation' => 'Denne konto er nu aktiveret og en e-mail er blevet sendt til brugeren.', //cpg1.4
  'notify_user_email_subject' => '%s - Aktiverings tilbagemelding', //cpg1.4
);

$lang_register_confirm_email = <<<EOT
Tak for din registrering hos {SITE_NAME}

For at aktivere din brugerkonto med brugernavnet "{USER_NAME}", må du klikke på linket nedenfor eller kopiere den ind i din browser.

<a href="{ACT_LINK}">{ACT_LINK}</a>

Med hilsen fra

Administrationen på {SITE_NAME}

EOT;

$lang_register_approve_email = <<<EOT
En ny bruger med navnet "{USER_NAME}" har registreret sig i dit galleri.

For at aktivere kontoen, må du klikke på linket nedenfor eller kopiere den ind i din browser.

<a href="{ACT_LINK}">{ACT_LINK}</a>

EOT;

$lang_register_activated_email = <<<EOT
Din brugerkonto er godkendt og er aktiveret.

Du kan logge ind på <a href="{SITE_LINK}">{SITE_LINK}</a> med brugernavnet "{USER_NAME}"


Med hilsen fra

Administrationen på {SITE_NAME}

EOT;
}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
  'title' => 'Kommentar overblik',
  'no_comment' => 'Der er ingen kommentar at vise',
  'n_comm_del' => '%s kommentar(er) slettet',
  'n_comm_disp' => 'Antal af kommentarer at vise',
  'see_prev' => 'Se foregående',
  'see_next' => 'Se næste',
  'del_comm' => 'Slet valgte kommentarer',
  'user_name' => 'Navn', //cpg1.4
  'date' => 'Dato', //cpg1.4
  'comment' => 'Kommentar', //cpg1.4
  'file' => 'Fil', //cpg1.4
  'name_a' => 'Bruger navn i stigende rækkefølge', //cpg1.4
  'name_d' => 'Bruger navn i faldende rækkefølge', //cpg1.4
  'date_a' => 'Dato i stigende rækkefølge', //cpg1.4
  'date_d' => 'Dato i faldende rækkefølge', //cpg1.4
  'comment_a' => 'Kommentare i stigende rækkefølge', //cpg1.4
  'comment_d' => 'Kommentare i faldende rækkefølge', //cpg1.4
  'file_a' => 'Fil i stigende rækkefølge', //cpg1.4
  'file_d' => 'Fil i faldende rækkefølge', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File search.php                                                           //
// ------------------------------------------------------------------------- //


if (defined('SEARCH_PHP')){

$lang_search_php = array(
  'title' => 'Søg i filer', //cpg1.4
  'submit_search' => 'Søg', //cpg1.4
  'keyword_list_title' => 'Nøgleords liste', //cpg1.4
  'keyword_msg' => 'Listen her over inkluderer ikka alt. Ord fra billedtitler og beskrivelser er ikke medtaget. Prøv en fuld-tekst søgning.',  //cpg1.4
  'edit_keywords' => 'Ret nøgleord', //cpg1.4
  'search in' => 'Søg i::', //cpg1.4
  'ip_address' => 'IP adresse', //cpg1.4
  'fields' => 'Søg i', //cpg1.4
  'age' => 'Alder', //cpg1.4
  'newer_than' => 'Nyere end', //cpg1.4
  'older_than' => 'Ældre end', //cpg1.4
  'days' => 'dage', //cpg1.4
  'all_words' => 'Søg på alle ord (AND)', //cpg1.4
  'any_words' => 'Søg på nogle ord (OR)', //cpg1.4
);

$lang_adv_opts = array(
  'title' => 'Titel', //cpg1.4
  'caption' => 'Beskrivelse', //cpg1.4
  'keywords' => 'Nøgleord', //cpg1.4
  'owner_name' => 'Ejers navn', //cpg1.4
  'filename' => 'Filnavn', //cpg1.4
);

}

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
  'page_title' => 'Søg i nye filer',
  'select_dir' => 'Vælg mappe',
  'select_dir_msg' => 'Denne funktion tillader dig at massetilføje de filer som du har uploadet via FTP.<br /><br />Vælg den mappe hvor du har uploadet dine filer', //cpg1.4
  'no_pic_to_add' => 'Der er ingen filer at tilføje',
  'need_one_album' => 'Du skal have mindst et album oprettet, for at bruge denne funktion',
  'warning' => 'Advarsel',
  'change_perm' => 'systemet kan ikke skrive i denne mappe, du skal ændre server rettigheder på denne mappe til 755 eller 777 før du prØver at tilføje filer!',
  'target_album' => '<b>Anbring filer fra ";</b>%s<b>"; i </b>%s',
  'folder' => 'Mappe',
  'image' => 'billede',
  'album' => 'Album',
  'result' => 'Resultat',
  'dir_ro' => 'Ikke skrivebar. ',
  'dir_cant_read' => 'Ikke læsbar. ',
  'insert' => 'Tilføje nye filer til galleriet',
  'list_new_pic' => 'Liste over nye filer',
  'insert_selected' => 'Indsæt valgte filer',
  'no_pic_found' => 'Ingen nye filer blev fundet',
  'be_patient' => 'Hav lidt tålmodighed, systemet arbejder på at tilføje filerne',
  'no_album' => 'intet album valgt',
  'result_icon' => 'klik for detaljer eller for at genindlæse',  //cpg1.4
  'notes' =>  '<ul>'.
                          '<li><b>OK</b> : Betyder at filen blev tilføjet'.
                          '<li><b>DP</b> : Betyder at filen er en duplikat og at den allerede ligger i databasen'.
                          '<li><b>PB</b> : Betyder at filen ikke kunne tilføjes, kontrollerer venligst din konfiguration samt tilladelser på de respektive mapper'.
                          '<li><b>NA</b> : Betyder at du ikke har valgt et album som filen skulle lægges ind i, tryk \'<a href="javascript:history.back(1)">tilbage</a>\' og vælg et album. Hvis du ikke har et album <a href="albmgr.php">Opret et først</a></li>'.
                          '<li>Hvis OK, DP, PB \'signalet\' ikke kommer frem, klik på de manglede filer for at se om der fremkommer nogle fejlmeddelelser som frembringes af PHP'.
                          '<li>Hvis din browser laver time-out, da opdater den browser'.
                          '</ul>',
  'select_album' => 'Vælg album',
  'check_all' => 'Marker Alle',
  'uncheck_all' => 'Fjern markeringer',
  'no_folders' => 'Der findes endnu ingen mapper i "albums". Opret mindst en egendifineret mappe i "albums" mappen og ftp-upload dine filer heri. Du må ikke upload til "userpics" eller "edit" mapperne, de er reseveret til http uploads og intern formål.', //cpg1.4
   'albums_no_category' => 'Albums uden kategori', //cpg1.4 // album pulldown mod, added by frogfoot
  'personal_albums' => '* Personlig album', //cpg1.4 // album pulldown mod, added by frogfoot
  'browse_batch_add' => 'Browsable interface (anbefalet)', //cpg1.4
  'edit_pics' => 'Ændre filer', //cpg1.4
  'edit_properties' => 'Album egenskaber', //cpg1.4
  'view_thumbs' => 'Minibilledvisning', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File stat_details.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('STAT_DETAILS_PHP')) $lang_stat_details_php = array(
  'show_hide' => 'vis/gem denne kolonnen', //cpg1.4
  'vote' => 'Stemmedetaljer', //cpg1.4
  'hits' => 'Hit Detaljer', //cpg1.4
  'stats' => 'Stemme statistikk', //cpg1.4
  'sdate' => 'Dato', //cpg1.4
  'rating' => 'Vurdering', //cpg1.4
  'search_phrase' => 'Søge sætning', //cpg1.4
  'referer' => 'Henvisnings-', //cpg1.4
  'browser' => 'Browser', //cpg1.4
  'os' => 'Operativsystem', //cpg1.4
  'ip' => 'IP', //cpg1.4
  'sort_by_xxx' => 'Sorter på %s', //cpg1.4
  'ascending' => 'i stigende rækkefølge', //cpg1.4
  'descending' => 'i faldende rækkefølge', //cpg1.4
  'internal' => 'intern', //cpg1.4
  'close' => 'luk', //cpg1.4
  'hide_internal_referers' => 'skjul interne referencer', //cpg1.4
  'date_display' => 'Dato visning', //cpg1.4
  'submit' => 'send / genindlæs', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File thumbnails.php
// ------------------------------------------------------------------------- //

// Void

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) $lang_upload_php = array(
  'title' => 'Upload fil',
  'custom_title' => 'Tilpasset upload skema',
  'cust_instr_1' => 'Du kan selv vælge antal bokse, men du kan ikke vælge flere end grænserne nedenfor.',
  'cust_instr_2' => 'Antal upload bokse',
  'cust_instr_3' => 'Fil upload bokse: %s',
  'cust_instr_4' => 'URI/URL upload bokse: %s',
  'cust_instr_5' => 'URI/URL upload bokse:',
  'cust_instr_6' => 'Fil upload bokse:',
  'cust_instr_7' => 'Skriv venligst hvor mange af hver type upload bokse du ønsker og tryk \'Fortsæt\'. ',
  'reg_instr_1' => 'Ugyldig handling ved dannelse af skema.',
  'reg_instr_2' => 'Du kan nu uploade filer ved hjælp af upload boksene nedenfor. Størrelsen af hver enkelt fil må ikke overskride %s KB each. ZIP filer uploadet i \'File Upload\' og \'URI/URL Upload\' sektioner vil forblive komprimeret.',
  'reg_instr_3' => 'Hvis du vil have zip filen eller arkivet pakket ud, skal du bruge fil upload boksen under \'ZIP Upload med udpakning\' området.',
  'reg_instr_4' => 'Når du bruger URI/URL upload sektionen, så indtast venligst adressen til filen således: http://www.minhjemmeside.dk/images/eksempel.jpg',
  'reg_instr_5' => 'Når du har udfyldt skemaet, så tryk venligst på \'Fortsæt\'.',
  'reg_instr_6' => 'ZIP Upload med udpakning:',
  'reg_instr_7' => 'Fil Upload:',
  'reg_instr_8' => 'URI/URL Upload:',
  'error_report' => 'Fejl rapport',
  'error_instr' => 'Følgende uploads fejlede:',
  'file_name_url' => 'Fil Navn/URL',
  'error_message' => 'Fejl meddelelse',
  'no_post' => 'Fil ikke uploadet af POST.',
  'forb_ext' => 'Forbudt fil type.',
  'exc_php_ini' => 'Overskred filstørrelse tilladt i php.ini.',
  'exc_file_size' => 'Overskred filstørrelse tilladt af Coppermine.',
  'partial_upload' => 'Kun delvis upload.',
  'no_upload' => 'Der blev ikke uploadet noget..',
  'unknown_code' => 'Ukendt PHP upload fejl kode.',
  'no_temp_name' => 'Ingen upload - ingen midlertidigt navn.',
  'no_file_size' => 'Indeholder ingen data/fejl i filen',
  'impossible' => 'Kunne ikke flytte.',
  'not_image' => 'Ikke et billede/fejl i filen',
  'not_GD' => 'Ikke en GD udvidelse',
  'pixel_allowance' => 'Tilladte pixels overskredet.', //cpg1.4
  'incorrect_prefix' => 'Ugyldig URI/URL prefix',
  'could_not_open_URI' => 'Kunne ikke åbne URI..',
  'unsafe_URI' => 'Sikkerhed ikke verificerbar.',
  'meta_data_failure' => 'Meta data fejl',
  'http_401' => '401 Ikke autoriseret',
  'http_402' => '402 Betaling påkrævet',
  'http_403' => '403 Forbudt',
  'http_404' => '404 Ikke fundet',
  'http_500' => '500 Intern Server Fejl',
  'http_503' => '503 Service Utilgængelig',
  'MIME_extraction_failure' => 'MIME kunne ikke fastslås.',
  'MIME_type_unknown' => 'Ukendt MIME type',
  'cant_create_write' => 'Kan ikke åbne skrive fil.',
  'not_writable' => 'Kan ikke skrive til skrive fil.',
  'cant_read_URI' => 'Kan ikke læse URI/URL',
  'cant_open_write_file' => 'Kan ikke åbne URI skrive fil.',
  'cant_write_write_file' => 'Kan ikke åbne URI krive fil.',
  'cant_unzip' => 'Kan ikke udpakke.',
  'unknown' => 'Ukendt fejl',
  'succ' => 'Succesfulde uploads',
  'success' => '%s filer blev uploadet med succes.',
  'add' => 'Tryk venligst på \'Fortsæt\' for at tilføje billederne til albums.',
  'failure' => 'Upload Fejl',
  'f_info' => 'Fil Information',
  'no_place' => 'Den forrige fil kunne ikke placeres.',
  'yes_place' => 'Den forrige fil blev placeret med succes.',
  'max_fsize' => 'Max tilladte filstørrelse er sat til %s KB',
  'album' => 'Album',
  'picture' => 'Billede',
  'pic_title' => 'Billedtitel',
  'description' => 'Billedbeskrivelse',
  'keywords' => 'Nøgleord (Adskil med mellemrum)<br /><a href="#" onClick="return MM_openBrWindow(\'keyword_select.php\',\'selectKey\',\'width=250, height=400, scrollbars=yes,toolbar=no,status=yes,resizable=yes\')">Indsæt fra listen</a>', //cpg1.4
  'keywords_sel' =>'Vælg et nøgleord', //cpg1.4
  'err_no_alb_uploadables' => 'Beklager der er intet album, som du har tilladelse til at uploade billeder til',
  'place_instr_1' => 'Vælg venligst album til filerne nu. Du kan også indtaste relevante oplysninger om hver fil nu.',
  'place_instr_2' => 'Flere filer skal placeres. Tryk venligst på \'Fortsæt\'.',
  'process_complete' => 'Alle filer er blevet placeret med succes.',
   'albums_no_category' => 'Albums uden kategori', //cpg1.4. //album pulldown mod, added by frogfoot
  'personal_albums' => '* Personlige albums', //cpg1.4 //album pulldown mod, added by frogfoot
  'select_album' => 'Vælg album', //cpg1.4 //album pulldown mod, added by frogfoot
  'close' => 'Luk', //cpg1.4
  'no_keywords' => 'Beklager, ingen nøgleord tilgængelig!', //cpg1.4
  'regenerate_dictionary' => 'Genopbyg ordbog', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
  'memberlist' => 'Medlems liste', //cpg1.4
  'user_manager' => 'Bruger administration', //cpg1.4
  'title' => 'Administrer bruger',
  'name_a' => 'Navn stigende',
  'name_d' => 'Navn faldende',
  'group_a' => 'Gruppe stigende',
  'group_d' => 'Gruppe faldende',
  'reg_a' => 'Reg dato stigende',
  'reg_d' => 'Reg dato faldende',
  'pic_a' => 'Billedtæller stigende',
  'pic_d' => 'Billedtæller faldende',
  'disku_a' => 'Disk forbrug stigende',
  'disku_d' => 'Disk forbrug faldende',
  'lv_a' => 'Sidste besøg stigende',
  'lv_d' => 'Sidste besøg faldende',
  'sort_by' => 'Sorter brugere efter',
  'err_no_users' => 'Bruger tabel er tom!',
  'err_edit_self' => 'Du kan ikke rette i egen profil, brug \'Min profil\' link til dette formål',
  'edit' => 'Ret', //cpg1.4
  'with_selected' => 'Med valgte:', //cpg1.4
  'delete' => 'Slet', //cpg1.4
  'delete_files_no' => 'behold offentlige filer (men anonymiser)', //cpg1.4
  'delete_files_yes' => 'slet også offentlige filer', //cpg1.4
  'delete_comments_no' => 'behold kommentarer (men anonymiserer)', //cpg1.4
  'delete_comments_yes' => 'slet også kommentarer', //cpg1.4
  'activate' => 'Aktiver', //cpg1.4
  'deactivate' => 'Deaktiver', //cpg1.4
  'reset_password' => 'Nulstil Adgangskode', //cpg1.4
  'change_primary_membergroup' => 'Skift primærgruppe', //cpg1.4
  'add_secondary_membergroup' => 'Tilføj sekundær gruppe', //cpg1.4
  'name' => 'Brugernavn',
  'group' => 'Gruppe',
  'inactive' => 'Inaktiv',
  'operations' => 'Handlinger',
  'pictures' => 'Filer',
  'disk_space_used' => 'Plads brugt', //cpg1.4
  'disk_space_quota' => 'Plads Kvote', //cpg1.4
  'registered_on' => 'Registreret den', //cpg1.4
  'last_visit' => 'Sidste besøg',
  'u_user_on_p_pages' => '%d bruger på %d side(r)',
  'confirm_del' => 'Er du sikker på du vil SLETTE denne bruger? \\nAlle filer og albums vil også blive slettet.', //js-alert
  'mail' => 'POST',
  'err_unknown_user' => 'Valgt bruger eksister ikke!',
  'modify_user' => 'Rediger / opret bruger',
  'notes' => 'Noter',
  'note_list' => '<li>Hvis du ikke vil rette den aktuelle adgangskode, så lad feltet "adgangskode" stå tomt',
  'password' => 'Adgangskode',
  'user_active' => 'Bruger er aktiv',
  'user_group' => 'Brugers gruppe',
  'user_email' => 'Brugers e-mail',
  'user_web_site' => 'Brugers webside',
  'create_new_user' => 'Opret ny bruger',
  'user_location' => 'Brugers placering',
  'user_interests' => 'Brugers interesser',
  'user_occupation' => 'Brugers beskæftigelse',
  'user_profile1' => '$user_profile1', //cpg1.4
  'user_profile2' => '$user_profile2', //cpg1.4
  'user_profile3' => '$user_profile3', //cpg1.4
  'user_profile4' => '$user_profile4', //cpg1.4
  'user_profile5' => '$user_profile5', //cpg1.4
  'user_profile6' => '$user_profile6', //cpg1.4
  'latest_upload' => 'Nyeste uploads',
  'never' => 'aldrig',
  'search' => 'Søgning', //cpg1.4
  'submit' => 'Send', //cpg1.4
  'search_submit' => 'Ok!', //cpg1.4
  'search_result' => 'Søgeresultat: ', //cpg1.4
  'alert_no_selection' => 'Du skal vælge mindst en bruger først', //cpg1.4 //js-alert
  'password' => 'Adgangskode', //cpg1.4
  'select_group' => 'Vælg gruppe', //cpg1.4
  'groups_alb_access' => 'Album tilladelse af gruppe', //cpg1.4
  'album' => 'Album', //cpg1.4
  'category' => 'Kategori', //cpg1.4
  'modify' => 'Ændre?', //cpg1.4
  'group_no_access' => 'Denne gruppe har ingen speciel adgang', //cpg1.4
  'notice' => 'Notits', //cpg1.4
  'group_can_access' => 'Album(s) der kun "%s" har adgang', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //

if (defined('UTIL_PHP')) {
$lang_util_desc_php = array(
'Opdater titel fra filnavn', //cpg1.4
'Slet titler', //cpg1.4
'Genskab minibilleder og mellemstore billeder', //cpg1.4
'Sletter originale billeder og erstatter dem med mellemstor version', //cpg1.4
'Sletter original eller mellemstore billeder for at frigøre diskplads', //cpg1.4
'Sletter kommentarer ikke tilknyttet billede', //cpg1.4
'Genindlæs fil størrelse og dimensioner (hvis du manuelt ændre billederne)', //cpg1.4
'Nulstil tæller', //cpg1.4
'Vis phpinfo', //cpg1.4
'Opdater databasen', //cpg1.4
'Vis log filer', //cpg1.4
);
$lang_util_php = array(
  'title' => 'Administrator værktøjer (Ændre billedstørrelse)',
  'what_it_does' => 'Gør dette',
  'file' => 'Fil',
  'problem' => 'Problem', //cpg1.4
  'status' => 'Status', //cpg1.4
  'title_set_to' => 'titel sat til',
  'submit_form' => 'Udfør',
  'updated_succesfully' => 'Opdateret med succes',
  'error_create' => 'FEJL ved oprettelse af',
  'continue' => 'Fortsæt',
  'main_success' => 'Filen %s bliver nu brugt som original fil',
  'error_rename' => 'Fejl da filen skulle omdøbes fra %s til %s',
  'error_not_found' => 'Filen %s blev ikke fundet',
  'back' => 'tilbage til hovedmenu',
  'thumbs_wait' => 'Opdaterer minibilleder og/eller mellemstore billeder, vent venligst...',
  'thumbs_continue_wait' => 'Fortsætter med opdatering af minibilleder og/eller mellemstore billeder...',
  'titles_wait' => 'Opdaterer titler, vent venligst...',
  'delete_wait' => 'Slettet titler, vent venligst...',
  'replace_wait' => 'Sletter originale billeder og erstatter dem med de mellemstore, vent venligst...',
  'instruction' => 'Hurtig manual',
  'instruction_action' => 'Vælg funktion',
  'instruction_parameter' => 'Indstil parametre',
  'instruction_album' => 'Vælg album',
  'instruction_press' => 'Tryk %s',
  'update' => 'Opdater minibilleder og/eller mellemstore billeder',
  'update_what' => 'Hvad skal opdateres',
  'update_thumb' => 'Kun minibilleder',
  'update_pic' => 'Kun mellemstore billeder',
  'update_both' => 'Både mini- og mellemstore billeder',
  'update_number' => 'Antal behandlede billeder pr. klik',
  'update_option' => '(Prøv at sætte den værdi lavere hvis du oplever timeout fejl)',
  'filename_title' => 'Filnavn &rArr; Fil titel',
  'filename_how' => 'Hvordan skal filnavnet ændres',
  'filename_remove' => 'Fjerner .jpg endelsen og udskifter _ (understregning) med mellemrum',
  'filename_euro' => 'Ændre 2003_11_23_13_20_20.jpg til 23/11/2003 13:20',
  'filename_us' => 'Ændre 2003_11_23_13_20_20.jpg til 11/23/2003 13:20',
  'filename_time' => 'Ændre 2003_11_23_13_20_20.jpg til 13:20',
  'delete' => 'Slet filtitel eller original størrelse billeder',
  'delete_title' => 'Slet filtitel',
  'delete_title_explanation' => 'Dette vil fjerne alle titler på filer i albummet du har speciferet.', //cpg1.4
  'delete_original' => 'Slet original størrelse billeder',
  'delete_original_explanation' => 'Dette vil fjerne originale billeder.', //cpg1.4
  'delete_intermediate' => 'Slet mellemstore billeder', //cpg1.4
  'delete_intermediate_explanation' => 'Dette vil fjerne mellemstore billeder.<br />Bruges for at frigøre diskplads hvis du har slået \'Opret mellemstore billeder \' fra i opsætningen efter du har tilføjet billeder.', //cpg1.4
  'delete_replace' => 'Slet originalbilleder og erstat med reduceret billedstørresle',
  'titles_deleted' => 'Alle titler i det valgte album blev slettet', //cpg1.4
  'deleting_intermediates' => 'Sletter mellemstore billeder, vent venligst...', //cpg1.4
  'searching_orphans' => 'Søger efter forældreløse billeder, vent venligst...', //cpg1.4
  'select_album' => 'Vælg album',
  'delete_orphans' => 'Slet kommentarer som ikke har et album (virker på alle albums)', //cpg1.4
  'delete_orphans_explanation' => 'Dette vil finde og lade dig slette alle kommentarer som knytter sig til filer som ikke længere findes i galleriet.<br />Tjekker alle albums.', //cpg1.4
  'refresh_db' => 'Genindlæser informationer om fil dimensioner og størrelse', //cpg1.4
  'refresh_db_explanation' => 'Dette vil genindlæse fil dimensioner og størrelse. Brug denne hvis Diskkvoter viser forkert eller hvis du har ændret filerne manuelt.', //cpg1.4
  'reset_views' => 'Nulstil tæller til visning', //cpg1.4
  'reset_views_explanation' => 'Stiller tæller til nul på filer i valgte album.', //cpg1.4
  'orphan_comment' => 'kommentarer uden album fundet',
  'delete' => 'Slet',
  'delete_all' => 'Slet alle',
  'delete_all_orphans' => 'Slet alle forældreløse?', //cpg1.4
  'comment' => 'Kommentar: ',
  'nonexist' => 'tilknyttet til ikke eksisterende fil # ',
  'phpinfo' => 'Vis phpinfo',
  'phpinfo_explanation' => 'Indeholder tekniske informationer om din server.<br /> - Du kan blive bedt om at oplyse information her fra når du ønsker support.', //cpg1.4
  'update_db' => 'Opdater database',
  'update_db_explanation' => 'Hvis du har udskiftet Coppermine filer, tilføjet en modifikation eller opgraderet fra en tidligere version af Coppermine, vær sikker på at kører database opdatering en gang. Dette vil oprette de nødvendige  tabeller og/eller Konfigurations værdier i din Coppermine database.',
  'view_log' => 'Se log filer', //cpg1.4
  'view_log_explanation' => 'Coppermine kan logføre forskellige handlinger som brugerne udfører. Du kan gennemse disse logs hvis du har slået logføring til i <a href="admin.php">Coppermine opsætning</a>.', //cpg1.4
  'versioncheck' => 'Tjek version', //cpg1.4
  'versioncheck_explanation' => 'Tjek versionen af dine filer for at finde ud af om du har erstatte alle filer efter en opgradering, eller om Coppermine kildefiler er blevet opdateret efter udgivelsen af en ny version.', //cpg1.4
  'bridgemanager' => 'Brohåndtering', //cpg1.4
  'bridgemanager_explanation' => 'Slå integration Til/Fra (bridging) mellem Coppermine og et andet program (f.eks. dit BBS).', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File versioncheck.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('VERSIONCHECK_PHP')) $lang_versioncheck_php = array(
  'title' => 'Versions tjek', //cpg1.4
  'what_it_does' => 'Denne side er til brugere som har opdateret deres Coppermine installation. Dette script gennemgår filerne på din server og forsøger at bestemme om dine filer på serveren er de samme version som ligger på http://coppermine.sourceforge.net, dett vil også vise de filer du kan opgradere.<br />Dette vil vise alt der behøver opgradering med rødt. Entries med gult skal der studeres nærmere. Entries med grøn (eller din standart tekst farve) er OK.<br />Klik på hjælpe ikonen  for at få mere hjælp.', //cpg1.4
  'online_repository_unable' => 'Kunne ikke få forbindelse til http://coppermine.sourceforge.net', //cpg1.4
  'online_repository_noconnect' => 'Coppermine kunne ikke få forbindelse til http://coppermine.sourceforge.net. Dette kan være på grund af en af grunde:', //cpg1.4
  'online_repository_reason1' => 'http://coppermine.sourceforge.net er ude af drift for øjeblikket - tjek om du kan se denne side: %s - hvis du ikke kan se denne side, prøv igen senere.', //cpg1.4
  'online_repository_reason2' => 'PHP på din webserver har %s slået fra (´som standart, er den slået til). Hvis du administrere serveren, slå det til igen i <i>php.ini</i> (tillad i det mindste at det bliver overskrevet med %s). Hvis du har et webhotel, må du finde dig i at du ikke kan sammenligne dine filer med sidst nye version. Denne side vil kun vise fil versioner af filer der kom med din Coppermine - opdateringer vil ikke blive vist.', //cpg1.4
  'online_repository_skipped' => 'Forbindelsen til http://coppermine.sourceforge.net er undladt', //cpg1.4
  'online_repository_to_local' => 'Scriptet skifter nu til standartindstillinger for den lokale kopi af filens version. Dataene kan vær unøjagtige hvis du har opgraderet Coppermine og du ikke har  uploaded alle filer. Ændringer af filer efter frigivelsen vil heller ikke blive taget med.', //cpg1.4
  'local_repository_unable' => 'Kan ikke få forbindelse til din webserver', //cpg1.4
  'local_repository_explanation' => 'Coppermine kunne ikke få forbindelse til filen %s på din webserver. Det betyder sansynligvis at du ikke har uploaded filen til din webserver. Går dette og prøv at kører denne side igen (tryk opdater).<br />If the script still fails, your webhost might have disabled parts of <a href="http://www.php.net/manual/en/ref.filesystem.php">PHP\'s filesystem functions</a> completely. In this case, you simply won\'t be able to use this tool at all, sorry.', //cpg1.4
  'coppermine_version_header' => 'Installeret Coppermine version', //cpg1.4
  'coppermine_version_info' => 'Du har installeret: %s', //cpg1.4
  'coppermine_version_explanation' => 'Hvis du tror dette er helt galt og du skulle kører en nyere version af Coppermine, har du sansynlivis ikke uploaded den sidste nye version af filen <i>include/init.inc.php</i>', //cpg1.4
  'version_comparison' => 'Version sammenligning', //cpg1.4
  'folder_file' => 'mappe/fil', //cpg1.4
  'coppermine_version' => 'cpg version', //cpg1.4
  'file_version' => 'fil version', //cpg1.4
  'webcvs' => 'web svn', //cpg1.4
  'writable' => 'skrivbar', //cpg1.4
  'not_writable' => 'ikke skrivbar', //cpg1.4
  'help' => 'Hjælp', //cpg1.4
  'help_file_not_exist_optional1' => 'fil/mappe findes ikke', //cpg1.4
  'help_file_not_exist_optional2' => 'Filen/mappen %s blev ikke fundet på din server. Selvom den ikke er påkrævet burde du upload den (brug dit FTP program) til din webserver hvis du oplever problemer.', //cpg1.4
  'help_file_not_exist_mandatory1' => 'fil/mappe findes ikket', //cpg1.4
  'help_file_not_exist_mandatory2' => 'Filen/mappe %s blev ikke fundet på din server, selvom den er påkrævet. Upload filen til din webserver (brug dit FTP program).', //cpg1.4
  'help_no_local_version1' => 'Ingen information om version af lokal fil', //cpg1.4
  'help_no_local_version2' => 'Scriptet kunne ikke afgøre versionen af lokal fil - din fil er enten forældet eller du har ændret den, fjernelse af "header information" er på vej. Det anbefales at opdatere filen.', //cpg1.4
  'help_local_version_outdated1' => 'Lokal version forældet', //cpg1.4
  'help_local_version_outdated2' => 'Din version af denne file ser ud til at være fra en ældre version af Coppermine (du har sandsynligvis opdateret). Opdater denne fil også.', //cpg1.4
  'help_local_version_na1' => 'Kunne ikke finde info om cvs version', //cpg1.4
  'help_local_version_na2' => 'Scriptet kunne ikke bestemme hvilken cvs version filen på din webserver er. Du bør upload filen fra installationspakken.', //cpg1.4
  'help_local_version_dev1' => 'Beta version', //cpg1.4
  'help_local_version_dev2' => 'Filen på din webserver ser ud til at være en nyere end din Coppermine version. Du bruger enten en beta version (du bør kun bruge den hvis du ved hvad du laver), eller du har opgraderet din Coppermine installation og har ikke uploaded en ny version af include/init.inc.php', //cpg1.4
  'help_not_writable1' => 'Mappe ikke skrivbar', //cpg1.4
  'help_not_writable2' => 'Ændre fil rettigheder (CHMOD) for at give scripter skrive adgang til mappen %s og alt i denne mappen.', //cpg1.4
  'help_writable1' => 'Mappe skrivbar', //cpg1.4
  'help_writable2' => 'Mappen %s er skrivbar. Dette er en unødig sikkerheds risiko, Coppermine behøver kun læse/køre rettigheder.', //cpg1.4
  'help_writable_undetermined' => 'Coppermine kunne ikke afgøre om mappen er skrivbar.', //cpg1.4
  'your_file' => 'din fil', //cpg1.4
  'reference_file' => 'reference fil', //cpg1.4
  'summary' => 'sammendrag', //cpg1.4
  'total' => 'Total antal filer/mapper tjekket', //cpg1.4
  'mandatory_files_missing' => 'Påkrævet filer som mangler', //cpg1.4
  'optional_files_missing' => 'Valgfri filer som mangler', //cpg1.4
  'files_from_older_version' => 'Filer efterladt af en forældet Coppermine version', //cpg1.4
  'file_version_outdated' => 'Forældet fil versioner', //cpg1.4
  'error_no_data' => 'Script lavede en fejl, den kunne ikke finde nogen informationer overhovedet. Beklager for ulejligheden.', //cpg1.4
  'go_to_webcvs' => 'gå til %s', //cpg1.4
  'options' => 'Valgmulighed', //cpg1.4
  'show_optional_files' => 'vis valgfrie mapper/filer', //cpg1.4
  'show_mandatory_files' => 'vis påkrævede filer', //cpg1.4
  'show_file_versions' => 'vis fil versioner', //cpg1.4
  'show_errors_only' => 'vis kun mapper/filer med fejl', //cpg1.4
  'show_permissions' => 'vis mappe tilladelse', //cpg1.4
  'show_condensed_output' => 'Vis kortfattet ouput (for enklere skærmdump)', //cpg1.4
  'coppermine_in_webroot' => 'Coppermine er installeret som webroot', //cpg1.4
  'connect_online_repository' => 'prøv at få forbindelse til http://coppermine.sourceforge.net', //cpg1.4
  'show_additional_information' => 'vis uderlige informationer', //cpg1.4
  'no_webcvs_link' => 'vis ikke web svn link', //cpg1.4
  'stable_webcvs_link' => 'vis web svn link til stabil version', //cpg1.4
  'devel_webcvs_link' => 'vis web svn link til beta version', //cpg1.4
  'submit' => 'Anvend rettelser / opdater', //cpg1.4
  'reset_to_defaults' => 'Gendan standard værdier', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File view_log.php  //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('VIEWLOG_PHP')) $lang_viewlog_php = array(
  'delete_all' => 'Slet alle logs', //cpg1.4
  'delete_this' => 'Slet denne log', //cpg1.4
  'view_logs' => 'Vis log', //cpg1.4
  'no_logs' => 'Ingen log oprettet.', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File xp_publish.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('XP_PUBLISH_PHP')) {

$lang_xp_publish_client = <<<EOT
<h1>XP guiden Webudgivelses klient</h1><p>Dette module give mulighed for at bruge <b>Windows XP</b> guiden Webudgivelse med Coppermine.</p><p>Koden er baseret på en artikel postet af
EOT;

$lang_xp_publish_required = <<<EOT
<h2>Hvad er påkrævet</h2><ul><li>En fungerende installation af Coppermine hvor <b>web upload funktionen virker.</b></li></ul><h2>Hvordan installer man på klient siden</h2><ul><li>Højreklik på
EOT;

$lang_xp_publish_select = <<<EOT
Select &quot;Gem som..&quot;. Gem filen på din harddisk. Når du gemmer filen, tjek at filnanet er <b>cpg_###.reg</b> (the ### repræsenterer en numerisk tidskode). Ændre den til nanet hvis nødvendigt (lad tallene stå). Når filen er hentet, dobbeltklik på filen for at registere din server med "guidet Webudgivelse".</li></ul>
EOT;

$lang_xp_publish_testing = <<<EOT
<h2>Test</h2><ul><li>I Windows Explorer, vælg nogle filer og klik på <b>Udgiv denne fil på world wide web</b> i venstre side.</li><li>Bekræft dit fil valg. Klik på <b>Næste</b>.</li><li>Når listen med tjenesteudbydere kommer frem, vælg dit fotoalbum (det har samme navn som dit galleri). Hvis det ikke kommer frem på listen, tjek om du har installeret <b>cpg_pub_wizard.reg</b> som beskrevet ovenover.</li><li>Skriv dine login informationer hvis påkrævet.</li><li>Vælg et album til dine billeder eller opret et nyt.</li><li>Klik på <b>næste</b>. Upload af dine billeder starter.</li><li>Når den er færdig, tjek dit galleri for at se om billederne er korrekt tilføjet.</li></ul>
EOT;

$lang_xp_publish_notes = <<<EOT
<h2>Bemærk:</h2><ul><li>Når upload er startet, kan guiden ikke vise fejlmeddelser fra script, så du ved ikke om upload fejlede eller lykkedes, før du har tjekket dit galleri.</li><li>Hvis upload fejlede, slå "Fejlfindings tilstand " til i Coppermine opsætnings side, prøv med et enkelt billede og tjek fejlmeddelelser i
EOT;

$lang_xp_publish_flood = <<<EOT
filen som ligger i Coppermine mappen på din server server.</li><li>For at forhindre at dit galleri bliver <i>oversvømmet</i> af billeder uploaded med guiden, kan kun <b>galleri administrator</b> og <b>brugere som har eget album</b> bruge denne.</li>
EOT;



$lang_xp_publish_php = array(
  'title' => 'Coppermine - XP guiden Webudgivelse', //cpg1.4
  'welcome' => 'Velkommen <b>%s</b>,', //cpg1.4
  'need_login' => 'Du skal logge ind på galleriet med din web browser før du kan bruge giden.<p/><p>Når du logger ind, vælg <b>husk mig</b> hvis den er tilgængelig', //cpg1.4
  'no_alb' => 'Beklager, men der findes ingen album som du har tilladelse til at upload billeder med denne guide.', //cpg1.4
  'upload' => 'Upload dine billeder til et eksisterende album', //cpg1.4
  'create_new' => 'Opret et nyt album til dine billeder', //cpg1.4
  'album' => 'Album', //cpg1.4
  'category' => 'Kategori', //cpg1.4
  'new_alb_created' => 'Dit nye album ";<b>%s</b>"; er oprettet.', //cpg1.4
  'continue' => 'Tryk &quot;Næste&quot; for at uploade dine billeder', //cpg1.4
  'link' => 'dette link', //cpg1.4
);
}
?>