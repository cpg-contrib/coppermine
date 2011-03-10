<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2011 Coppermine Dev Team
  v1.0 originally written by Gregory Demar

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 3
  as published by the Free Software Foundation.

  ********************************************
  Coppermine version: 1.5.13
  $HeadURL$
  $Revision$
**********************************************/

if (!defined('IN_COPPERMINE')) { die('Not in Coppermine...');}

// info about translators and translated language
$lang_translation_info['lang_name_english'] = 'Norwegian';
$lang_translation_info['lang_name_native'] = 'Norsk';
$lang_translation_info['lang_country_code'] = 'no';
$lang_translation_info['trans_name'] = array('Ronny Hansen');
$lang_translation_info['trans_email'] = array('rohasol@online.no');
$lang_translation_info['trans_website'] = array('http://lokalhistoriewiki.no/index.php/Bruker:Ronny_Hansen');
$lang_translation_info['trans_date'] = '2011-01-07';


$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Bytes, Kibibytes, Mebibytes, Gibibytes
$lang_byte_units = array('Bytes', 'KiB', 'MiB', 'GiB');
$lang_decimal_separator = array(',', '.'); //cpg1.5 // symbol used to separate thousands from hundreds and rounded number from decimal place

// Day of weeks and months
$lang_day_of_week = array('Søn', 'Man', 'Tir', 'Ons', 'Tor', 'Fre', 'Lør');
$lang_month = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Okt', 'Nov', 'Des');

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$lang_date['album'] = '%d %B %Y';
$lang_date['lastcom'] = '%y-%m-%d kl %H:%M';
$lang_date['lastup'] = '%d %B %Y';
$lang_date['register'] = '%d %B %Y';
$lang_date['lasthit'] = '%d %B %Y kl %I:%M';
$lang_date['comment'] = '%d %B %Y kl %I:%M';
$lang_date['log'] = '%d %B %Y kl %I:%M';
$lang_date['scientific'] = '%Y-%m-%d %H:%M:%S';

// For the word censor
$lang_bad_words = array('*knulle*', 'pule', '*fitte*', 'kukk', 'kødd', 'faen', 'helvete', 'blatte', '*nigger*', 'svarting', 'rasshøl', 'ollon', 'dildo', 'pattar', 'penis', 'skit', 'balle', 'hore', 'jævla*', 'svartskalle');

$lang_meta_album_names['random'] = 'Tilfeldige';
$lang_meta_album_names['lastup'] = 'Siste opplastinger';
$lang_meta_album_names['lastalb'] = 'Siste opplastede album';
$lang_meta_album_names['lastcom'] = 'Siste kommentarer';
$lang_meta_album_names['topn'] = 'Mest vist';
$lang_meta_album_names['toprated'] = 'Høyest karakter';
$lang_meta_album_names['lasthits'] = 'Sist viste';
$lang_meta_album_names['search'] = 'Søkte filer';
$lang_meta_album_names['album_search'] = 'Søkte album';
$lang_meta_album_names['category_search'] = 'Søkte kategorier';
$lang_meta_album_names['favpics'] = 'Favoritter';
$lang_meta_album_names['datebrowse'] = 'Søk på dato'; //cpg1.5

$lang_errors['access_denied'] = 'Du har ike tillatelse til denne siden.';
$lang_errors['invalid_form_token'] = 'Fant ikke noe gyldig format.'; //cpg1.5
$lang_errors['perm_denied'] = 'Du har ikke tillatelse til å gjøre dette.';
$lang_errors['param_missing'] = 'Det finnes ikke parametere for at skriptet kan kjøres.';
$lang_errors['non_exist_ap'] = 'Det/den markerte albumet/filen finnes ikke!';
$lang_errors['quota_exceeded'] = 'For lite lagringskapasitet.'; //cpg1.5
$lang_errors['quota_exceeded_details'] = 'Din lagringskapasitet er [quota]K, dine filer bruker nå [space]K, om du legger til denne filen er det for mye for din kvote.'; //cpg1.5
$lang_errors['gd_file_type_err'] = 'Når du bruker et GD bildebibliotek er de tillatte bildetypene JPEG og PNG.';
$lang_errors['invalid_image'] = 'Det opplastede bildet er skadet og kan ikke brukes av GD biblioteket';
$lang_errors['resize_failed'] = 'Kan ikke lage miniatyrbilde eller forminske filens størrelse.';
$lang_errors['no_img_to_display'] = 'Ingen bilder å vise';
$lang_errors['non_exist_cat'] = 'Den markerte kategorien finnes ikke';
$lang_errors['directory_ro'] = 'Katalogen \'%s\' er ikke skrivbar, filer kan ikke slettes';
$lang_errors['pic_in_invalid_album'] = 'Filen er i et album som ikke finnes (%s)!?';
$lang_errors['banned'] = 'Du er fortiden blokkert fra denne websiden.';
$lang_errors['offline_title'] = 'Stengt (offline)';
$lang_errors['offline_text'] = 'Galleriet er stengt/offline - forsøk igjen senere';
$lang_errors['ecards_empty'] = 'Det finnes ingen e-kort å vise.';
$lang_errors['database_query'] = 'Det oppstod en feil mens spørsmålet sendtes til databasen.';
$lang_errors['non_exist_comment'] = 'Den markerte kommentaren finnes ikke';
$lang_errors['captcha_error'] = 'Koden passer ikke'; // cpg1.5
$lang_errors['login_needed'] = 'Du må %sregistrere%s/%slogin%s for å komme inn på denne side'; // cpg1.5
$lang_errors['error'] = 'Feil'; // cpg1.5
$lang_errors['critical_error'] = 'Kritisk feil'; // cpg1.5
$lang_errors['access_thumbnail_only'] = 'Du har bare tillatelse til å se miniatyrbilder.'; // cpg1.5
$lang_errors['access_intermediate_only'] = 'Du har ikke tillatelse til å se store bilder.'; // cpg1.5
$lang_errors['access_none'] = 'Du har ikke tillatelse til å se noen bilder.'; // cpg1.5
$lang_errors['register_globals_title'] = 'Register Global on!';// cpg1.5
$lang_errors['register_globals_warning'] = 'PHP instillingen register_global er aktivert på din server, som ikke er bra sikkerhetsess. Det anbefales at du deaktiverer den.'; //cpg1.5

$lang_bbcode_help_title = 'BBCode hjelp';
$lang_bbcode_help = 'Du kan legge til klikkbare linker og litt formatering til feltet gjenom å bruke BBCode taggar: <li>[b]Fet[/b] =&gt; <strong>Fet</strong></li><li>[i]Kursiv[/i] =&gt; <i>Kursiv</i></li><li>[url=http://yoursite.com/]Url Text[/url] =&gt; <a href="http://yoursite.com">Url Text</a></li><li>[email]user@domain.com[/email] =&gt; <a href="mailto:user@domain.com">user@domain.com</a></li><li>[color=red]lite text[/color] =&gt; <span style="color:red">lite text</span></li><li>[img]http://documentation.coppermine-gallery.net/images/browser.png[/img] =&gt; <img src="docs/images/browser.png" border="0" alt="" /></li>';

$lang_common['yes'] = 'Ja'; // cpg1.5
$lang_common['no'] = 'Nei'; // cpg1.5
$lang_common['back'] = 'Tillbake'; // cpg1.5
$lang_common['continue'] = 'Fortsett'; // cpg1.5
$lang_common['information'] = 'Informasjon'; // cpg1.5
$lang_common['error'] = 'Feil'; // cpg1.5
$lang_common['check_uncheck_all'] = 'markere/fjern alle markeringer'; // cpg1.5
$lang_common['confirm'] = 'Bekreft'; // cpg1.5
$lang_common['captcha_help_title'] = 'Visuell bekreftelse (captcha)'; // cpg1.5
$lang_common['captcha_help'] = 'For å ungå spam, må du bekrefte at du er et menneske og ikke en robot ved å skrive inn den viste teksten.<br />Om du skriver med store eller små bokstaver spiller ingen rolle.'; // cpg1.5
$lang_common['title'] = 'Tittel'; // cpg1.5
$lang_common['caption'] = 'Bildetekst'; // cpg1.5
$lang_common['keywords'] = 'Nøkkelord'; // cpg1.5
$lang_common['keywords_insert1'] = 'Nøkkelord (avdelt med %s)'; // cpg1.5
$lang_common['keywords_insert2'] = 'Innfør fra liste'; // cpg1.5
$lang_common['keyword_separator'] = 'Nøkkelordsdeler'; //cpg1.5
$lang_common['keyword_separators'] = array(' '=>'mellomrom', ','=>'komma', ';'=>'semikolon'); // cpg1.5
$lang_common['filename'] = 'Filnavn'; // cpg1.5
$lang_common['filesize'] = 'Filstørrelse'; // cpg1.5
$lang_common['album'] = 'Album'; // cpg1.5
$lang_common['file'] = 'Fil'; // cpg1.5
$lang_common['date'] = 'Dato'; // cpg1.5
$lang_common['help'] = 'Hjelp'; // cpg1.5
$lang_common['close'] = 'Steng'; // cpg1.5
$lang_common['go'] = 'Bekreft'; // cpg1.5
$lang_common['javascript_needed'] = 'Denne siden krever JavaScript. Aktiver JavaScript.'; // cpg1.5
$lang_common['move_up'] = 'Flytt opp'; // cpg1.5
$lang_common['move_down'] = 'Flytt ned'; // cpg1.5
$lang_common['move_top'] = 'Flytt øverst'; // cpg1.5
$lang_common['move_bottom'] = 'Flytt nederst'; // cpg1.5
$lang_common['delete'] = 'Slett'; // cpg1.5
$lang_common['edit'] = 'Rediger'; // cpg1.5
$lang_common['username_if_blank'] = 'Ukjent brukeR'; // cpg1.5
$lang_common['albums_no_category'] = 'Album uten kategori'; // cpg1.5
$lang_common['personal_albums'] = '* Personlige album'; // cpg1.5
$lang_common['select_album'] = 'Velg Album'; // cpg1.5
$lang_common['ok'] = 'OK'; // cpg1.5
$lang_common['status'] = 'Status'; // cpg1.5
$lang_common['apply_changes'] = 'Lagre forandringer'; // cpg1.5
$lang_common['done'] = 'Klar'; // cpg1.5
$lang_common['album_properties'] = 'Album egenskaper'; // cpg1.5
$lang_common['parent_category'] = 'Hovedkategori'; // cpg1.5
$lang_common['edit_files'] = 'Rediger filer'; // cpg1.5
$lang_common['thumbnail_view'] = 'Miniatyrbildevisning'; // cpg1.5
$lang_common['album_manager'] = 'Behandle Album'; // cpg1.5
$lang_common['more'] = 'mer'; // cpg1.5

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu['home_title'] = 'Hjem';
$lang_main_menu['home_lnk'] = 'Hjem';
$lang_main_menu['alb_list_title'] = 'Gå til albumlisten';
$lang_main_menu['alb_list_lnk'] = 'Albumliste';
$lang_main_menu['my_gal_title'] = 'Gå til mitt personlige galleri';
$lang_main_menu['my_gal_lnk'] = 'Mitt galleri';
$lang_main_menu['my_prof_title'] = 'Min profil';
$lang_main_menu['my_prof_lnk'] = 'Min profil';
$lang_main_menu['adm_mode_title'] = 'Vis Admin-verktøy'; // cpg1.5
$lang_main_menu['adm_mode_lnk'] = 'Vis Admin-verktøy'; // cpg1.5
$lang_main_menu['usr_mode_title'] = 'Skjul Admin-verktøy'; // cpg1.5
$lang_main_menu['usr_mode_lnk'] = 'Skjul Admin-verktøy'; // cpg1.5
$lang_main_menu['upload_pic_title'] = 'Last opp en fil til et album';
$lang_main_menu['upload_pic_lnk'] = 'Last opp fil';
$lang_main_menu['register_title'] = 'Opprett en konto';
$lang_main_menu['register_lnk'] = 'Registrer deg';
$lang_main_menu['login_title'] = 'Logg inn';
$lang_main_menu['login_lnk'] = 'Logg inn';
$lang_main_menu['logout_title'] = 'Logg ut';
$lang_main_menu['logout_lnk'] = 'Logg ut';
$lang_main_menu['lastup_title'] = 'Siste opplastinger';
$lang_main_menu['lastup_lnk'] = 'Siste opplastinger';
$lang_main_menu['lastcom_title'] = 'Siste kommentarer';
$lang_main_menu['lastcom_lnk'] = 'Siste kommentarer';
$lang_main_menu['topn_title'] = 'Mest vist';
$lang_main_menu['topn_lnk'] = 'Mest vist';
$lang_main_menu['toprated_title'] = 'Høyest karakter';
$lang_main_menu['toprated_lnk'] = 'Høyest karakter';
$lang_main_menu['search_title'] = 'Søk i galleriet';
$lang_main_menu['search_lnk'] = 'Søk';
$lang_main_menu['fav_title'] = 'Gå til Mine favoriter';
$lang_main_menu['fav_lnk'] = 'Mine Favoriter';
$lang_main_menu['memberlist_title'] = 'Vis medlemmer';
$lang_main_menu['memberlist_lnk'] = 'Medlemmer';
$lang_main_menu['browse_by_date_lnk'] = 'Etter dato'; // cpg1.5
$lang_main_menu['browse_by_date_title'] = 'Etter dato'; // cpg1.5
$lang_main_menu['contact_title'] = 'Kontakt %s'; // cpg1.5
$lang_main_menu['contact_lnk'] = 'Kontakt'; // cpg1.5
$lang_main_menu['sidebar_title'] = 'Legg et sidepanel til din webbleser'; // cpg1.5
$lang_main_menu['sidebar_lnk'] = 'Sidepanel'; // cpg1.5

$lang_gallery_admin_menu['upl_app_title'] = 'Godkjenn nye opplastinger';
$lang_gallery_admin_menu['upl_app_lnk'] = 'Godkjenn';
$lang_gallery_admin_menu['admin_title'] = 'Gå til konfigurering';
$lang_gallery_admin_menu['admin_lnk'] = 'Konfigurering';
$lang_gallery_admin_menu['albums_title'] = 'Gå til albumkonfigurering';
$lang_gallery_admin_menu['albums_lnk'] = 'Album';
$lang_gallery_admin_menu['categories_title'] = 'Gå til kategorikonfigurering';
$lang_gallery_admin_menu['categories_lnk'] = 'Kategorier';
$lang_gallery_admin_menu['users_title'] = 'Gå til brukerkonfiurering';
$lang_gallery_admin_menu['users_lnk'] = 'Brukere';
$lang_gallery_admin_menu['groups_title'] = 'Gå til gruppkonfigurering';
$lang_gallery_admin_menu['groups_lnk'] = 'Grupper';
$lang_gallery_admin_menu['comments_title'] = 'Se alle kommentarer';
$lang_gallery_admin_menu['comments_lnk'] = 'Se kommentarer';
$lang_gallery_admin_menu['searchnew_title'] = 'Gå til batchtiløyelser';
$lang_gallery_admin_menu['searchnew_lnk'] = 'Batchtilføyelser';
$lang_gallery_admin_menu['util_title'] = 'Gå til admin-verktøy';
$lang_gallery_admin_menu['util_lnk'] = 'Admin-Verktøy';
$lang_gallery_admin_menu['key_lnk'] = 'Nøkkelordsleksikon';
$lang_gallery_admin_menu['ban_title'] = 'Gå til blokkere brukere';
$lang_gallery_admin_menu['ban_lnk'] = 'Blokker brukere';
$lang_gallery_admin_menu['db_ecard_title'] = 'Vis e-kort';
$lang_gallery_admin_menu['db_ecard_lnk'] = 'Vis e-kort';
$lang_gallery_admin_menu['pictures_title'] = 'Sorter mine bilder';
$lang_gallery_admin_menu['pictures_lnk'] = 'Sorter mine bilder';
$lang_gallery_admin_menu['documentation_lnk'] = 'Dokumentasjon';
$lang_gallery_admin_menu['documentation_title'] = 'Coppermine håndbok';
$lang_gallery_admin_menu['phpinfo_lnk'] = 'PHP-info'; // cpg1.5
$lang_gallery_admin_menu['phpinfo_title'] = 'Inneholder teknisk informasjon om din server. Du kan bli spurt om informasjon om denne hvis du trenge support.'; // cpg1.5
$lang_gallery_admin_menu['update_database_lnk'] = 'Oppdater databasen'; // cpg1.5
$lang_gallery_admin_menu['update_database_title'] = 'Hvis du har erstattet Coppermine filer, gjort modifiseringer eller oppgradert fra en tidligere versjon av Coppermine, Oppdater databasen en gang. Dette lager nødvendige tabeller og/eller konfigurere din Coppermine database.'; // cpg1.5
$lang_gallery_admin_menu['view_log_files_lnk'] = 'Vis loggfiler'; // cpg1.5
$lang_gallery_admin_menu['view_log_files_title'] = 'Coppermine kan logge det som brukerene gjr. Du kan lese i loggene om du har aktivert logging i Coppermine konfigureringen.'; // cpg1.5
$lang_gallery_admin_menu['check_versions_lnk'] = 'Kontroller versjon'; // cpg1.5
$lang_gallery_admin_menu['check_versions_title'] = 'Kontroller dine filversjoner for å se om du har erstattet alle filer etter en oppdatering, eller om Coppermine har kommet med nye oppdateringer.'; // cpg1.5
$lang_gallery_admin_menu['bridgemgr_lnk'] = 'Behandle linking'; // cpg1.5
$lang_gallery_admin_menu['bridgemgr_title'] = 'Aktiver/deaktiver linking/integrasjon (bridging) av Coppermine med en annen applikasjon (fks. din BBS).'; // cpg1.5
$lang_gallery_admin_menu['pluginmgr_lnk'] = 'Behandle plugin/programtillegg '; // cpg1.5
$lang_gallery_admin_menu['pluginmgr_title'] = 'Behandle plugin'; // cpg1.5
$lang_gallery_admin_menu['overall_stats_lnk'] = 'Total statistik'; // cpg1.5
$lang_gallery_admin_menu['overall_stats_title'] = 'Vis total treffstatistikk for weblesere og opprativsystem (hvis tilsvarende funksjoner er aktivert i konfigurasjonen).'; // cpg1.5
$lang_gallery_admin_menu['keywordmgr_lnk'] = 'Behandle Nøkkelord'; // cpg1.5
$lang_gallery_admin_menu['keywordmgr_title'] = 'Behandle Nøkkelord (hvis tilsvarende funksjon er aktivert i konfigurasjonen.)'; // cpg1.5
$lang_gallery_admin_menu['exifmgr_lnk'] = 'Behandle EXIF'; // cpg1.5
$lang_gallery_admin_menu['exifmgr_title'] = 'Behandle EXIF vising (hvis tilsvarende funksjon er aktivert i konfigurasjonen.)'; // cpg1.5
$lang_gallery_admin_menu['shownews_lnk'] = 'Vis nyheter'; // cpg1.5
$lang_gallery_admin_menu['shownews_title'] = 'Vis nyheter fra coppermine-gallery.net'; // cpg1.5

$lang_user_admin_menu['albmgr_title'] = 'Opprette og organisere mine album';
$lang_user_admin_menu['albmgr_lnk'] = 'Opprette / organisere mine album';
$lang_user_admin_menu['modifyalb_title'] = 'Gå til Endre mine album';
$lang_user_admin_menu['modifyalb_lnk'] = 'Endre mine album';
$lang_user_admin_menu['my_prof_title'] = 'Gå til min personlige profil';
$lang_user_admin_menu['my_prof_lnk'] = 'Min profil';

$lang_cat_list['category'] = 'Kategori';
$lang_cat_list['albums'] = 'Album';
$lang_cat_list['pictures'] = 'Filer';

$lang_album_list['album_on_page'] = '%d album på %d side(er)';

$lang_thumb_view['date'] = 'Dato';
//Sort by filename and title
$lang_thumb_view['name'] = 'Filnavn';
$lang_thumb_view['sort_da'] = 'Sortere på dato stigende';
$lang_thumb_view['sort_dd'] = 'Sortere på dato fallende';
$lang_thumb_view['sort_na'] = 'Sortere på navn stigende';
$lang_thumb_view['sort_nd'] = 'Sortere på navn fallende';
$lang_thumb_view['sort_ta'] = 'Sortere på tittel stigende';
$lang_thumb_view['sort_td'] = 'Sortere på titetl fallende';
$lang_thumb_view['position'] = 'Posisjon';
$lang_thumb_view['sort_pa'] = 'Sortere på posisjon stigende';
$lang_thumb_view['sort_pd'] = 'Sortere på posisjon fallende';
$lang_thumb_view['download_zip'] = 'Last ned som Zip-fil';
$lang_thumb_view['pic_on_page'] = '%d filer på %d side(er)';
$lang_thumb_view['user_on_page'] = '%d brukere på %d side(er)';
$lang_thumb_view['enter_alb_pass'] = 'Angi Album passord';
$lang_thumb_view['invalid_pass'] = 'Ugyldig passord';
$lang_thumb_view['pass'] = 'Pasord';
$lang_thumb_view['submit'] = 'Send';
$lang_thumb_view['zipdownload_copyright'] = 'Respekter opphavsretighetene. Bruk bare nedlastede filer som opphavspersonen har godkjent.'; // cpg1.5
$lang_thumb_view['zipdownload_username'] = 'Dette arkiv innholder komprimerte filer fra %s \'s favoritter'; // cpg1.5

$lang_img_nav_bar['thumb_title'] = 'Tillbake til miniatyrbildene';
$lang_img_nav_bar['pic_info_title'] = 'Vis/skjul filinformasjon';
$lang_img_nav_bar['slideshow_title'] = 'Vis lysbilder';
$lang_img_nav_bar['ecard_title'] = 'Send filen som et e-kort';
$lang_img_nav_bar['ecard_disabled'] = 'e-kort er deaktivert';
$lang_img_nav_bar['ecard_disabled_msg'] = 'Du har ikke tillatelse til å sende e-kort'; // js-alert
$lang_img_nav_bar['prev_title'] = 'Se foregående fil';
$lang_img_nav_bar['next_title'] = 'Se nesta fil';
$lang_img_nav_bar['pic_pos'] = 'FIL %s/%s';
$lang_img_nav_bar['report_title'] = 'Rapporter denne fil til administrator';
$lang_img_nav_bar['go_album_end'] = 'Gå til siste';
$lang_img_nav_bar['go_album_start'] = 'Tillbake til første';

$lang_rate_pic['rate_this_pic'] = 'Stem på denne fil ';
$lang_rate_pic['no_votes'] = '(Ingen stemme ennå)';
$lang_rate_pic['rating'] = '(Nåvarende stilling: %s / %s med %s stemmer)';
$lang_rate_pic['rubbish'] = 'Skrap';
$lang_rate_pic['poor'] = 'Dårlig';
$lang_rate_pic['fair'] = 'Godkjendt';
$lang_rate_pic['good'] = 'Bra';
$lang_rate_pic['excellent'] = 'Svært bra';
$lang_rate_pic['great'] = 'Fantastisk';
$lang_rate_pic['js_warning'] = 'Javascript må være aktivert for å kunne stemme'; // cpg1.5
$lang_rate_pic['already_voted'] = 'Du har har allerede stemt på dette bildet'; // cpg1.5
$lang_rate_pic['forbidden'] = 'Du kan ikke stemme på dine egne bilder.'; // cpg1.5
$lang_rate_pic['rollover_to_rate'] = 'Hold pekeren over bildet for å stemme.'; // cpg1.5

// ------------------------------------------------------------------------- //
// File include/functions.inc.php
// ------------------------------------------------------------------------- //

$lang_cpg_die['file'] = 'Fil: ';
$lang_cpg_die['line'] = 'Rad: ';

$lang_display_thumbnails['dimensions'] = 'Dimensjoner=';
$lang_display_thumbnails['date_added'] = 'Opplastet dato=';

$lang_get_pic_data['n_comments'] = '%s kommentarer';
$lang_get_pic_data['n_views'] = '%s visniniger';
$lang_get_pic_data['n_votes'] = '(%s stemmer)';

$lang_cpg_debug_output['debug_info'] = 'Debug Info';
$lang_cpg_debug_output['debug_output'] = 'Debug Output'; // cpg1.5
$lang_cpg_debug_output['select_all'] = 'Velg allt';
$lang_cpg_debug_output['copy_and_paste_instructions'] = 'Hvis du rapporterer om feil til Coppermine support board, klipp-og-lim (på oppfordring!) denne debug output til ditt innlegg, sammen med den feilmelding du fått (hvis du har fått det). Legg denne debug_output til innlegget bare om supporten spør etter det! Pass på å erstatte alle passord med *** først.'; // cpg1.5
$lang_cpg_debug_output['debug_output_explain'] = 'Obs: Dette er bare for informasjon ogbetyr ikke at det er noe feil med galleriet.'; // cpg1.5
$lang_cpg_debug_output['phpinfo'] = 'vis PHP-info';
$lang_cpg_debug_output['notices'] = 'Noter';
$lang_cpg_debug_output['notices_help_admin'] = 'Notater vises på denne siden for at du (som galleriets administrator) utem å mene det har aktivert denne funksjonen i Coppermines konfigurasjonen. Det betyr nødvendigvis ikke at noe er feil med galleriet. Dette er en funksjon som bare erfarne utviklere bør aktivere for å kunne feilsøke. Hvis notatene notatene bekymrer deg og/eller du ikke forstår hva de betyr, deaktiver tilsvarende fuksjon i konfigurasjonen.'; // cpg1.5
$lang_cpg_debug_output['notices_help_non_admin'] = 'Notater vises på denne siden for at du galleriets administrator kan ha aktivert denne funksjonen uten å ville det. Det betyr ikke at noe er feil. Du kan rolig overse notater som vises her.'; // cpg1.5
$lang_cpg_debug_output['show_hide'] = 'Vis / Skjul'; // cpg1.5

$lang_language_selection['reset_language'] = 'Standardsprog';
$lang_language_selection['choose_language'] = 'Velg sprog';

$lang_theme_selection['reset_theme'] = 'Standardtema';
$lang_theme_selection['choose_theme'] = 'velg tema';

$lang_version_alert['version_alert'] = 'Versjonen er ikke supportert!';
$lang_version_alert['no_stable_version'] = 'Du bruke en Coppermine %s (%s) versjon som bare er beregnet for svært erfarne utviklere - denne versjon har ingen support eller garanti. Bruk den på egen risiko eller nedgrader til nærmeste foregående stabile versjon hvid du trenger support!';
$lang_version_alert['gallery_offline'] = 'Galleriet er nå stengt og kommer bare til å være synlig for deg som administrator. Glem ikke å åpne det igjen når du er ferdig.';
$lang_version_alert['coppermine_news'] = 'Nyheter fra coppermine-gallery.net'; // cpg1.5
$lang_version_alert['no_iframe'] = 'Din webleser kan ikke vise inførte rammer (inline frames)'; // cpg1.5
$lang_version_alert['hide'] = 'Skjul'; // cpg1.5

$lang_create_tabs['previous'] = 'Foregående'; // cpg1.5
$lang_create_tabs['next'] = 'Neste'; // cpg1.5
$lang_create_tabs['jump_to_page'] = 'Gå til side'; // cpg1.5

$lang_get_remote_file_by_url['no_data_returned'] = 'Ingen data returnerte ved bruk av %s'; // cpg1.5
$lang_get_remote_file_by_url['curl'] = 'CURL'; // cpg1.5
$lang_get_remote_file_by_url['fsockopen'] = 'Socket forbindelse (FSOCKOPEN)'; // cpg1.5
$lang_get_remote_file_by_url['fopen'] = 'fopen'; // cpg1.5
$lang_get_remote_file_by_url['curl_not_available'] = 'Curl er ikke tilhjenglig på din server'; // cpg1.5
$lang_get_remote_file_by_url['error_number'] = 'Feil nummer: %s'; // cpg1.5
$lang_get_remote_file_by_url['error_message'] = 'Feilrappor: %s'; // cpg1.5


// ------------------------------------------------------------------------- //
// File include/mailer.inc.php
// ------------------------------------------------------------------------- //
$lang_mailer['provide_address'] = 'Du må ha minst en ';
$lang_mailer['mailer_not_supported'] = ' mailer støttes ikke.';
$lang_mailer['execute'] = 'Kunne ikke utføre: ';
$lang_mailer['instantiate'] = 'Kunne ikke initiere email funksjon.';
$lang_mailer['authenticate'] = 'SMTP Fel: Kunne ikke autentisere.';
$lang_mailer['from_failed'] = 'Følgende Fra-adresse misslykkes: ';
$lang_mailer['recipients_failed'] = 'SMTP Feil: På grunn av ';
$lang_mailer['data_not_accepted'] = 'SMTP Feil: Data ble ikke aksepter.';
$lang_mailer['connect_host'] = 'SMTP Feil: Kune ikke kople til SMTP host.';
$lang_mailer['file_access'] = 'Kunne ikke komme til filen: ';
$lang_mailer['file_open'] = 'Fil Feil: Kunne ikke åpne filen: ';
$lang_mailer['encoding'] = 'Ukjent kode: ';
$lang_mailer['signing'] = 'Signeringsfeil: ';

// ------------------------------------------------------------------------- //
// File include/plugin_api.inc.php
// ------------------------------------------------------------------------- //
$lang_plugin_api['error_install'] = 'Kunne ikke installere plug inn-modulen \'%s\'';
$lang_plugin_api['error_uninstall'] = 'Kunne ikke avinstallere plugin-modulen \'%s\'';
$lang_plugin_api['error_sleep'] = 'Kunne ikke deaktivere plugin-modulen \'%s\''; // cpg1.5

// ------------------------------------------------------------------------- //
// File include/smilies.inc.php
// ------------------------------------------------------------------------- //
if (defined('SMILIES_PHP')) {
$lang_smilies_inc_php['Exclamation'] = 'Trist';
$lang_smilies_inc_php['Question'] = 'Spørrendende';
$lang_smilies_inc_php['Very Happy'] = 'Svært glad';
$lang_smilies_inc_php['Smile'] = 'Ler';
$lang_smilies_inc_php['Sad'] = 'Trist';
$lang_smilies_inc_php['Surprised'] = 'Overrasket';
$lang_smilies_inc_php['Shocked'] = 'Sjokkert';
$lang_smilies_inc_php['Confused'] = 'Forvirret';
$lang_smilies_inc_php['Cool'] = 'Cool';
$lang_smilies_inc_php['Laughing'] = 'Ler';
$lang_smilies_inc_php['Mad'] = 'Sint';
$lang_smilies_inc_php['Razz'] = 'Bråker';
$lang_smilies_inc_php['Embarrassed'] = 'Forlegen'; // cpg1.5
$lang_smilies_inc_php['Crying or Very sad'] = 'Gråter eller Svært trist';
$lang_smilies_inc_php['Evil or Very Mad'] = 'Slem eller Svært sint';
$lang_smilies_inc_php['Twisted Evil'] = 'Skrudd / Slem';
$lang_smilies_inc_php['Rolling Eyes'] = 'Ruller med øynene';
$lang_smilies_inc_php['Wink'] = 'Blunker';
$lang_smilies_inc_php['Idea'] = 'Idé';
$lang_smilies_inc_php['Arrow'] = 'Pil';
$lang_smilies_inc_php['Neutral'] = 'Nøytral';
$lang_smilies_inc_php['Mr. Green'] = 'Mr. Green';
}


// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //
if (defined('ALBMGR_PHP')) {
$lang_albmgr_php['title'] = 'Behandle Album'; // cpg1.5
$lang_albmgr_php['alb_need_name'] = 'Album må ha et navn!'; // js-alert
$lang_albmgr_php['confirm_modifs'] = 'Er du sikker på at du vil gjøre endringenede?'; // js-alert
$lang_albmgr_php['no_change'] = 'Du gjorde ingen endringer!'; // js-alert
$lang_albmgr_php['new_album'] = 'Nytt album';
$lang_albmgr_php['delete_album'] = 'Slett album'; // cpg1.5
$lang_albmgr_php['confirm_delete1'] = 'Er du sikker på att du vil slette dette album?'; // js-alert
$lang_albmgr_php['confirm_delete2'] = 'Alle filer og kommentarer blir slettet!'; // js-alert
$lang_albmgr_php['select_first'] = 'Velg et album først'; // js-alert
$lang_albmgr_php['my_gallery'] = '* Mitt galleri *';
$lang_albmgr_php['no_category'] = '* Ingen kategori *';
$lang_albmgr_php['select_category'] = 'Velg kategori';
$lang_albmgr_php['category_change'] = 'Hvis du endrer kategori vil dine endringer til å forsvinne!'; // cpg1.5
$lang_albmgr_php['page_change'] = 'Hvis du klikker på denne linken kommer dine endringer til å forsvinne!'; // cpg1.5
$lang_albmgr_php['cancel'] = 'Avbryt'; // cpg1.5
$lang_albmgr_php['submit_reminder'] = 'Sortingsendringer lagres ikke før du klikker på &quot;Lagre endringer&quot;.'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) {
$lang_banning_php['title'] = 'Blokker bruker';
$lang_banning_php['user_name'] = 'Brukernavn';
$lang_banning_php['user_account'] = 'Brukerkonto';
$lang_banning_php['email_address'] = 'E-postadresse'; // cpg1.5
$lang_banning_php['ip_address'] = 'IP Adresse';
$lang_banning_php['expires'] = 'Utgår'; // cpg1.5
$lang_banning_php['expiry_date'] = 'Utgår dato'; // cpg1.5
$lang_banning_php['expired'] = 'Utgått'; // cpg1.5
$lang_banning_php['edit_ban'] = 'Lagre endringer';
$lang_banning_php['add_new'] = 'Legg til ny utestengning';
$lang_banning_php['add_ban'] = 'Legg til';
$lang_banning_php['error_user'] = 'Finner ikke bruker';
$lang_banning_php['error_specify'] = 'Du må angi enten et brukernavn eller en IP adress';
$lang_banning_php['error_ban_id'] = 'Ugyldig blokkerings ID!';
$lang_banning_php['error_admin_ban'] = 'du kan ikke blokkere deg selv!';
$lang_banning_php['error_server_ban'] = 'Du prøvde å blokkere din egen server? He he det går ikke ...';
$lang_banning_php['skipping'] = 'Hopp over komandoen.'; // cpg1.5
$lang_banning_php['lookup_ip'] = 'IP Address Lookup';
$lang_banning_php['select_date'] = 'velg dato';
$lang_banning_php['delete_comments'] = 'Slett kommentarer'; // cpg1.5
$lang_banning_php['current'] = 'nåværende'; // cpg1.5
$lang_banning_php['all'] = 'alle'; // cpg1.5
$lang_banning_php['none'] = 'ingen'; // cpg1.5
$lang_banning_php['view'] = 'vis'; // cpg1.5
$lang_banning_php['ban_id'] = 'Blokkerings ID'; // cpg1.5
$lang_banning_php['existing_bans'] = 'Eksisterande blokkeringer'; // cpg1.5
$lang_banning_php['no_banning_when_bridged'] = 'Du har for tiden ditt galleri linket (bridged) til en annen applikasjon. Bruk den aplikasjonens blokkeringsfunksjon i stedet for den som er innebygget i Coppermine. Coppermines egen blokkeringsmekanisme gjeller ikke ved integrering.'; // cpg1.5
$lang_banning_php['records_on_page'] = '%d poster på %d side(er)'; // cpg1.5
$lang_banning_php['ascending'] = 'stigende'; // cpg1.5
$lang_banning_php['descending'] = 'fallende'; // cpg1.5
$lang_banning_php['sort_by'] = 'Sortere på'; // cpg1.5
$lang_banning_php['sorted_by'] = 'sortert på'; // cpg1.5
$lang_banning_php['ban_record_x_updated'] = 'Blokeringsposten %s er oppdattert'; // cpg1.5
$lang_banning_php['ban_record_x_deleted'] = 'Blokkeringsposten %s er slettet'; // cpg1.5
$lang_banning_php['new_ban_record_created'] = 'Ny blockkeringspost er opprettet'; // cpg1.5
$lang_banning_php['ban_record_x_already_exists'] = 'Blokkeringspost for %s finnes allerede!'; // cpg1.5
$lang_banning_php['comment_deleted'] = '%s kommentar gjort av %s er slettet'; // cpg1.5
$lang_banning_php['comments_deleted'] = '%s kommentarer gjordt av %s er slettet'; // cpg1.5
$lang_banning_php['email_field_invalid'] = 'Angi en gyldig e-postadresse'; // cpg1.5
$lang_banning_php['ip_address_field_invalid'] = 'Angi en gyldig IP adress (x.x.x.x)'; // cpg1.5
$lang_banning_php['expiry_field_invalid'] = 'Angi en gyldig forfallsdato (ÅÅÅÅ-MM-DD)'; // cpg1.5
$lang_banning_php['form_not_submit'] = 'Formulæret er ikke sendt - det finnes feil som du må rette først!'; // cpg1.5
};

// ------------------------------------------------------------------------- //
// File bridgemgr.php
// ------------------------------------------------------------------------- //
if (defined('BRIDGEMGR_PHP')) {
$lang_bridgemgr_php['title'] = 'Integreringssguide';
$lang_bridgemgr_php['back'] = 'tillbake';
$lang_bridgemgr_php['next'] = 'neste';
$lang_bridgemgr_php['start_wizard'] = 'Start Integreringsguide';
$lang_bridgemgr_php['finish'] = 'Avslutt';
$lang_bridgemgr_php['no_action_needed'] = 'Det trengs ikke mer i dette trinn. Klikk på \'neste\' for å fortsette.';
$lang_bridgemgr_php['reset_to_default'] = 'Nullstill til standardverdi';
$lang_bridgemgr_php['choose_bbs_app'] = 'Velg applikasjon for å knytte den til (sammen med) Coppermine';
$lang_bridgemgr_php['support_url'] = 'Gå hit or support til denne applikasjon';
$lang_bridgemgr_php['settings_path'] = 'adresser(er) brukt(a) av din integrerte applikasjon';
$lang_bridgemgr_php['full_forum_url'] = 'URL for den integrerte applikasjonen';
$lang_bridgemgr_php['relative_path_of_forum_from_webroot'] = 'Adresse til den integrerte aplikasjonen';
$lang_bridgemgr_php['relative_path_to_config_file'] = 'Adresse til den integrerte aplikasjonens konfigurasjonsfil';
$lang_bridgemgr_php['cookie_prefix'] = 'Cookie prefix';
$lang_bridgemgr_php['special_settings'] = 'Den integrerte aplikasjonens spesifikke innstillinger';
$lang_bridgemgr_php['use_post_based_groups'] = 'Bruk den integrerte aplikasjonens grupper?';
$lang_bridgemgr_php['use_post_based_groups_yes'] = 'ja';
$lang_bridgemgr_php['use_post_based_groups_no'] = 'nei';
$lang_bridgemgr_php['error_title'] = 'Du må rette disse feil før du kan fortsette. Gå tilbake til foregående bilde.';
$lang_bridgemgr_php['error_specify_bbs'] = 'Du må angi hvilken aplikasjon du vil integrere din Coppermine installasjon med.';
$lang_bridgemgr_php['finalize'] = 'aktiver/deaktivere integrasjon';
$lang_bridgemgr_php['finalize_explanation'] = 'Så langt har dine instillniger blitt lagt til databasen, men integrasjonen er ikke aktivert. Du kan slå på/av ved en senere anledning. Husk administrators brukernavna og passord fra Coppermineinstallasjonen, du kan ha behov for dette senere for å gjøre forandringer. Hvis noe skulle gå feil, gå til %s og deaktiver integreringen der, ved å bruke din fritstående (uintegrerte) administratorkonto (vanligvis det du oppga under Coppermine installasjonen).';
$lang_bridgemgr_php['your_bridge_settings'] = 'Dine integrasjonsinstillinger';
$lang_bridgemgr_php['title_enable'] = 'Aktivere integration/bridging med %s';
$lang_bridgemgr_php['bridge_enable_yes'] = 'aktiver';
$lang_bridgemgr_php['bridge_enable_no'] = 'deaktiver';
$lang_bridgemgr_php['error_must_not_be_empty'] = 'må ikke stå tom';
$lang_bridgemgr_php['error_either_be'] = 'må enten være %s eller %s';
$lang_bridgemgr_php['error_folder_not_exist'] = '%s finnes ikke. Rett opp verdien du anga for %s';
$lang_bridgemgr_php['error_cookie_not_readible'] = 'Coppermine kan ikke lese en cookie med navn %s. Rett opp verdien du anga for %s, eller gå til din integrasjons-applikasjons administratorpanel for å være sikker på at adressen til cookien er lesbar for Coppermine.';
$lang_bridgemgr_php['error_mandatory_field_empty'] = 'Du kan ikke la feltet %s stå tomt - fyll inn en gyldig verdi.';
$lang_bridgemgr_php['error_no_trailing_slash'] = 'Du kan ikke bruke en skråstrek i slutten av feltet %s.';
$lang_bridgemgr_php['error_trailing_slash'] = 'Det må være en skråstrek i slutten av feltet %s.';
$lang_bridgemgr_php['error_prefix_and_table'] = '%s og ';
$lang_bridgemgr_php['recovery_title'] = 'Behandle plugin: akutt tilbakestilling';
$lang_bridgemgr_php['recovery_explanation'] = 'Hvis du skal administrere integrasjonen med ditt Coppermine galleri, må du først logge inn som administrator. Om du ikke kan logge inn hvis integreringen ikke fungerer som den skal, kan du deaktivere integrering på denne siden. Å angi ditt brukernavn og passord logger deg ikke inn, det deaktiverer bare integreringen. Se dokumentasjonen for mer informasjon.';
$lang_bridgemgr_php['username'] = 'Brukernavn';
$lang_bridgemgr_php['password'] = 'Passord';
$lang_bridgemgr_php['disable_submit'] = 'send';
$lang_bridgemgr_php['recovery_success_title'] = 'Tillatelse godkjent';
$lang_bridgemgr_php['recovery_success_content'] = 'Du har deaktivert integreringen. Din Coppermine installasjon er nå frittsående.';
$lang_bridgemgr_php['recovery_success_advice_login'] = 'Logg inn som administrator for å endre dine integrasjonsinstillinger og/eller aktiver integrasjonen igjen.';
$lang_bridgemgr_php['goto_login'] = 'Gå til inloggingssiden';
$lang_bridgemgr_php['goto_bridgemgr'] = 'Gå till Behandle plugin';
$lang_bridgemgr_php['recovery_failure_title'] = 'Ingen tillang';
$lang_bridgemgr_php['recovery_failure_content'] = 'Du anga feil opplysninger. Du må angi opplysninger fra den frittstående installasjonens administratorskonto (vanligvis det du brukte ved Coppermine installasjonen).';
$lang_bridgemgr_php['try_again'] = 'Prøv igjen';
$lang_bridgemgr_php['recovery_wait_title'] = 'Tiden er ikke utgått';
$lang_bridgemgr_php['recovery_wait_content'] = 'Av sikerhetsgrunner tillater ikke scriptet flere misslykkede påloggninger. Du må vente en stund innen du kan prøve å logge inn igjen.';
$lang_bridgemgr_php['wait'] = 'vent';
$lang_bridgemgr_php['browse'] = 'bla';
}

// ------------------------------------------------------------------------- //
// File calendar.php
// ------------------------------------------------------------------------- //
if (defined('CALENDAR_PHP')) {
$lang_calendar_php['title'] = 'Kalender';
$lang_calendar_php['clear_date'] = 'nullstill dato';
$lang_calendar_php['files'] = 'filer'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //
if (defined('CATMGR_PHP')) {
$lang_catmgr_php['miss_param'] = 'Parameter som kreves for \'%s\' handlingen fastsettes!';
$lang_catmgr_php['unknown_cat'] = 'Markert kategori finnes ikke i databasen';
$lang_catmgr_php['usergal_cat_ro'] = 'Kategorien Brukergallerier kan ikke slettes!';
$lang_catmgr_php['manage_cat'] = 'Behandle kategorier';
$lang_catmgr_php['confirm_delete'] = 'Er du sikker på att du vill SLETTE denne kategorien'; // js-alert
$lang_catmgr_php['category'] = 'Kategorier'; // cpg1.5
$lang_catmgr_php['operations'] = 'Opperasjoner';
$lang_catmgr_php['move_into'] = 'Flytt til';
$lang_catmgr_php['update_create'] = 'Oppdater/Lag kategori';
$lang_catmgr_php['parent_cat'] = 'Hovedkategori';
$lang_catmgr_php['cat_title'] = 'Kategori tittel';
$lang_catmgr_php['cat_thumb'] = 'Kategori miniatyrbilde';
$lang_catmgr_php['cat_desc'] = 'Kategori beskrivelse';
$lang_catmgr_php['categories_alpha_sort'] = 'Sorter kategorier alfabetisk (i stedet for manuellt)';
$lang_catmgr_php['save_cfg'] = 'Lagre konfigurasjon';
$lang_catmgr_php['no_category'] = '* Ingen kategori *'; // cpg1.5
$lang_catmgr_php['group_create_alb'] = 'Grupper med tillatelse til å lage album i denne kategori'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File contact.php
// ------------------------------------------------------------------------- //
if (defined('CONTACT_PHP')) {
$lang_contact_php['title'] = 'Kontakt'; // cpg1.5
$lang_contact_php['your_name'] = 'Ditt navn'; // cpg1.5
$lang_contact_php['your_email'] = 'Din e-postadresse'; // cpg1.5
$lang_contact_php['subject'] = 'Emne'; // cpg1.5
$lang_contact_php['your_message'] = 'Din beskjed'; // cpg1.5
$lang_contact_php['name_field_mandatory'] = 'Skriv ditt navn'; // cpg1.5 // js-alert
$lang_contact_php['name_field_invalid'] = 'Du må skrive ditt navn'; // cpg1.5 // js-alert
$lang_contact_php['email_field_mandatory'] = 'Fyll inn e-postadresse'; // cpg1.5 // js-alert
$lang_contact_php['email_field_invalid'] = 'Du må bruke en gyldig e-postadresse'; // cpg1.5 // js-alert
$lang_contact_php['subject_field_mandatory'] = 'Skriv et meningsfullt emne'; // cpg1.5 // js-alert
$lang_contact_php['message_field_mandatory'] = 'Skriv din beskjed'; // cpg1.5 // js-alert
$lang_contact_php['confirmation'] = 'Bekreft'; // cpg1.5
$lang_contact_php['email_headline'] = 'Denne e-post ble sendt  %s med formulæret %s fra IP adressen %s'; // cpg1.5
$lang_contact_php['registered_user'] = 'registrert bruker'; // cpg1.5
$lang_contact_php['guest'] = 'gjest'; // cpg1.5
$lang_contact_php['unknown'] = 'ukjent'; // cpg1.5
$lang_contact_php['user_info'] = 'Brukeren %s med navn %s og e-postadresse %s skrev:'; // cpg1.5
$lang_contact_php['failed_sending_email'] = 'E-post-sendingen misslykkes. Prøv igjen senere.'; // cpg1.5
$lang_contact_php['email_sent'] = 'Din e-post er sendt.'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File admin.php
// ------------------------------------------------------------------------- //
if (defined('ADMIN_PHP')) {
$lang_admin_php['title'] = 'Gallerikonfigurasjon';
$lang_admin_php['general_settings'] = 'Hovedinnstillinger'; // cpg1.5
$lang_admin_php['language_charset_settings'] = 'Språk og tegnoppsettinger'; // cpg1.5
$lang_admin_php['themes_settings'] = 'Tema innstilling'; // cpg1.5
$lang_admin_php['album_list_view'] = 'Vis Album'; // cpg1.5
$lang_admin_php['thumbnail_view'] = 'Vis Miniatyrbilder'; // cpg1.5
$lang_admin_php['image_view'] = 'Vis Bilder'; // cpg1.5
$lang_admin_php['comment_settings'] = 'Kommentarinnstillinger'; // cpg1.5
$lang_admin_php['thumbnail_settings'] = 'Miniatyrinnstillinger'; // cpg1.5
$lang_admin_php['file_settings'] = 'Filinnstillinger'; // cpg1.5
$lang_admin_php['image_watermarking'] = 'Vannmerke Bilder'; // cpg1.5
$lang_admin_php['registration'] = 'Registrering'; // cpg1.5
$lang_admin_php['user_settings'] = 'Brukerinnstillinger'; // cpg1.5
$lang_admin_php['custom_fields_user_profile'] = 'Tilpasse felt for brukerprofiler (la stå tom hvis den ikke er i bruk). Bruk Profil 6 for lange tekster, som biografier'; // cpg1.5
$lang_admin_php['custom_fields_image_description'] = 'Tilpass felt for bildebeskrivinger (la stå tom hvis den ikke er i bruk)'; // cpg1.5
$lang_admin_php['cookie_settings'] = 'Cookies instillinger'; // cpg1.5
$lang_admin_php['email_settings'] = 'E-postinstillinger (vanligvis trengs ingen endringer her la alle felt stå tomme om du er usikker.)'; // cpg1.5
$lang_admin_php['logging_stats'] = 'Logging og statistikk'; // cpg1.5
$lang_admin_php['maintenance_settings'] = 'Vedlikeholdsinnstillinger'; // cpg1.5
$lang_admin_php['manage_exif'] = 'Behandle EXIF visning';
$lang_admin_php['manage_plugins'] = 'Behandle plugin';
$lang_admin_php['manage_keyword'] = 'Behandle nøkkekord';
$lang_admin_php['restore_cfg'] = 'Tillbakestill til fabrikinstillning';
$lang_admin_php['restore_cfg_confirm'] = 'Vil du virklig tilbakestille hele konfigurasjonen til fabrikkinnstillingen? Dette kan ikke gjøres om!'; // cpg1.5 // js-alert
$lang_admin_php['save_cfg'] = 'Lagre ny konfigurasjon';
$lang_admin_php['notes'] = 'Noteringer';
$lang_admin_php['info'] = 'Informasjon';
$lang_admin_php['upd_success'] = 'Coppermine konfigurasjonen ble oppdatert';
$lang_admin_php['restore_success'] = 'Coppermine standardkonfigurasjon tilbakestilles';
$lang_admin_php['name_a'] = 'Navn stigende';
$lang_admin_php['name_d'] = 'Navn fallende';
$lang_admin_php['title_a'] = 'Tittel stigende';
$lang_admin_php['title_d'] = 'Tittel fallende';
$lang_admin_php['date_a'] = 'Dato stigende';
$lang_admin_php['date_d'] = 'Dato fallende';
$lang_admin_php['pos_a'] = 'Posisjon stigende';
$lang_admin_php['pos_d'] = 'Posisjon fallende';
$lang_admin_php['th_any'] = 'Maks Størrelse';
$lang_admin_php['th_ht'] = 'Høyde';
$lang_admin_php['th_wd'] = 'Bredde';
$lang_admin_php['th_ex'] = 'Eksakt'; // cpg1.5
$lang_admin_php['debug_everyone'] = 'Alle';
$lang_admin_php['debug_admin'] = 'Bare Administrator';
$lang_admin_php['no_logs'] = 'Av';
$lang_admin_php['log_normal'] = 'Normal';
$lang_admin_php['log_all'] = 'Alle';
$lang_admin_php['view_logs'] = 'Vis logger';
$lang_admin_php['click_expand'] = 'klikk på avsnittets navn for å ekspandere alle';
$lang_admin_php['click_collapse'] = 'klikk på avsnittets navn for å kolapse alle'; // cpg1.5
$lang_admin_php['expand_all'] = 'Ekspander alle';
$lang_admin_php['toggle_all'] = 'Kolaps alle'; // cpg1.5
$lang_admin_php['notice1'] = '(*) Disse instillinger kan ikke endres om du allerede har filer i din database.';
$lang_admin_php['notice2'] = '(**) Hvis du endrer disse instillinger påvirker det bare filer som lastes opp fra og med nå. Det anbefales å ike endre disse instillinger om det allered finnes filer i galleriet. Du kan imidlertid gjøre disse endringer på filer som allerede finnes ved hjelp av &quot;<a href="util.php">administratorverktøyet</a> (endre bildestørrelse)&quot; verktøyet fra administratormenyen.';
$lang_admin_php['notice3'] = '(***) Alle loggfiler er skrevet på engelsk.';
$lang_admin_php['bbs_disabled'] = 'Funksjonen er deaktivert ved bruk av integrasjon(bridging)';
$lang_admin_php['auto_resize_everyone'] = 'Alle';
$lang_admin_php['auto_resize_user'] = 'Bare Brukere';
$lang_admin_php['ascending'] = 'stigende';
$lang_admin_php['descending'] = 'fallende';
$lang_admin_php['collapse_all'] = 'Skjul alt'; // cpg1.5
$lang_admin_php['separate_page'] = 'på en separat side'; // cpg1.5
$lang_admin_php['inline'] = 'inline'; // cpg1.5
$lang_admin_php['guests_only'] = 'Bare Gjester'; // cpg1.5
$lang_admin_php['wm_bottomright'] = 'Nederst til høyre'; // cpg1.5
$lang_admin_php['wm_bottomleft'] = 'Nederst til venstre'; // cpg1.5
$lang_admin_php['wm_topleft'] = 'Øverst til venstre'; // cpg1.5
$lang_admin_php['wm_topright'] = 'Øverst til høyre'; // cpg1.5
$lang_admin_php['wm_center'] = 'Sentrert'; // cpg1.5
$lang_admin_php['wm_both'] = 'Begge'; // cpg1.5
$lang_admin_php['wm_original'] = 'Original'; // cpg1.5
$lang_admin_php['wm_resized'] = 'Forminsket'; // cpg1.5
$lang_admin_php['gallery_name'] = 'Galleriets navn'; // cpg1.5
$lang_admin_php['gallery_description'] = 'Galleriets beskrivelse'; // cpg1.5
$lang_admin_php['gallery_admin_email'] = 'Galleriets administrators e-post'; // cpg1.5
$lang_admin_php['ecards_more_pic_target'] = 'URL til din Coppermine gallerimappe'; // cpg1.5
$lang_admin_php['ecards_more_pic_target_detail'] = '(med avsluttende skråstrek til slutt, ikkee \'index.php\' eller lignende til slutt)'; // cpg1.5
$lang_admin_php['home_target'] = 'URL til din hjemmeside'; // cpg1.5
$lang_admin_php['enable_zipdownload'] = 'Tillat ZIP-nedlasting av favoritter'; // cpg1.5
$lang_admin_php['enable_zipdownload_no_textfile'] = 'bare favoritenr'; // cpg1.5
$lang_admin_php['enable_zipdownload_additional_textfile'] = 'favoriter og readme fil'; // cpg1.5
$lang_admin_php['time_offset'] = 'Tidssonedifferanse relativt GMT'; // cpg1.5
$lang_admin_php['time_offset_detail'] = '(nåværende tid: %s)'; // cpg1.5
$lang_admin_php['enable_help'] = 'Aktivere hjelp-ikoner'; // cpg1.5
$lang_admin_php['enable_help_description'] = 'hjelp delvis tilgjenglig bare på engelsk'; // cpg1.5
$lang_admin_php['clickable_keyword_search'] = 'Aktivere klikkbare nøkkelord ved søking'; // cpg1.5
$lang_admin_php['keyword_separator'] = 'Nøkkelordavgrenser'; // cpg1.5
$lang_admin_php['keyword_convert'] = 'Konverter nøkkelordavgrenser'; // cpg1.5
$lang_admin_php['enable_plugins'] = 'Aktiver plugin-moduler'; // cpg1.5
$lang_admin_php['purge_expired_bans'] = 'Fjern forefallende blokkeringer automatisk'; // cpg1.5
$lang_admin_php['browse_batch_add'] = 'Bla-bart batch-opplastingsgrensesnitt'; // cpg1.5
$lang_admin_php['batch_proc_limit'] = 'Prosess-samtidighet for batch-opplastingsgensesnitt'; // cpg1.5
$lang_admin_php['display_thumbs_batch_add'] = 'Vis forhåndsvisning av miniatyrbilder ved batch-add interface'; // cpg1.5
$lang_admin_php['lang'] = 'Standardspråk'; // cpg1.5
$lang_admin_php['language_autodetect'] = 'Identifiser språk automatisk'; // cpg1.5
$lang_admin_php['charset'] = 'Tegnkodning'; // cpg1.5
// 'previous_next_tab'] = 'Display previous/next on tabbed pages'; // cpg1.5
$lang_admin_php['theme'] = 'Tema'; // cpg1.5
$lang_admin_php['custom_lnk_name'] = 'Tillpasset meny-link navn'; // cpg1.5
$lang_admin_php['custom_lnk_url'] = 'Tillpasset meny-link URL'; // cpg1.5
$lang_admin_php['enable_menu_icons'] = 'Aktiver menyikoner'; // cpg1.5
$lang_admin_php['show_bbcode_help'] = 'Vis BBCode hjelp'; // cpg1.5
$lang_admin_php['vanity_block'] = 'Vis vanity block på temaene som er definiert som XHTML eller CSS kompatible'; // cpg1.5
$lang_admin_php['highlight_multiple'] = 'For å markere flere rader, hold [Ctrl]-tasten'; // cpg1.5
$lang_admin_php['custom_header_path'] = 'Adresse til tilpasset sidehode (custom header)'; // cpg1.5
$lang_admin_php['custom_footer_path'] = 'Adresse til tilpasset sidebunn (custom footer)'; // cpg1.5
$lang_admin_php['browse_by_date'] = 'Aktiver bla i dato'; // cpg1.5
$lang_admin_php['display_redirection_page'] = 'Vis omdirigeringssider'; // cpg1.5
$lang_admin_php['display_xp_publish_link'] = 'Fremme bruken av XP Publisher gjenom å vis tilsvarende link på opplastingssiden'; // cpg1.5
$lang_admin_php['main_table_width'] = 'Hovedtabellens bredde'; // cpg1.5
$lang_admin_php['pixels_or_percent'] = 'pixler eller %'; // cpg1.5
$lang_admin_php['subcat_level'] = 'Antall kategorinivåer å vise'; // cpg1.5
$lang_admin_php['albums_per_page'] = 'Antall album å vise'; // cpg1.5
$lang_admin_php['album_list_cols'] = 'Antall kolonner for albumlisten'; // cpg1.5
$lang_admin_php['alb_list_thumb_size'] = 'Størrelse på albumenes miniatyrbilder'; // cpg1.5
$lang_admin_php['main_page_layout'] = 'Hovedsidens innhold'; // cpg1.5
$lang_admin_php['first_level'] = 'Vis første-nivå album miniatyrbilder i kategorier'; // cpg1.5
$lang_admin_php['categories_alpha_sort'] = 'Sorter kategorier alfabetisk'; // cpg1.5
$lang_admin_php['categories_alpha_sort_details'] = '(i stedet for manuell sortering)'; // cpg1.5
$lang_admin_php['link_pic_count'] = 'Vis antall linkede filer'; // cpg1.5
$lang_admin_php['thumbcols'] = 'Antall kolonner på miniatyrbildessiden'; // cpg1.5
$lang_admin_php['thumbrows'] = 'Antall rader på miniatyrbiledssiden'; // cpg1.5
$lang_admin_php['max_tabs'] = 'Maksimalt antall ruter'; // cpg1.5
$lang_admin_php['tabs_dropdown'] = 'Vis gardinmeny for alle sider ved siden av rutene'; // cpg1.5
$lang_admin_php['caption_in_thumbview'] = 'Vis bildetekst (utover tittel) under miniatyrbildene'; // cpg1.5
$lang_admin_php['views_in_thumbview'] = 'Vis antall visninger under miniatyrbildene'; // cpg1.5
$lang_admin_php['display_comment_count'] = 'Vis antall kommentarer under miniatyrbildene'; // cpg1.5
$lang_admin_php['display_uploader'] = 'Visa navn på den som laset opp filen under miniatyrbildene'; // cpg1.5
// 'display_admin_uploader'] = 'Display name of admin uploaders below the thumbnail'; // cpg1.5
$lang_admin_php['display_filename'] = 'Vis filnavn under miniatyrbildene'; // cpg1.5
$lang_admin_php['display_thumbnail_rating'] = 'Vis stemmer under miniatyrbildene'; // cpg1.5
$lang_admin_php['alb_desc_thumb'] = 'Vis albumbeskrivelse'; // cpg1.5
$lang_admin_php['thumbnail_to_fullsize'] = 'Gå direkte fra miniatyrbilde til full størrelse'; // cpg1.5
$lang_admin_php['default_sort_order'] = 'Standardsortering for filer'; // cpg1.5
$lang_admin_php['min_votes_for_rating'] = 'Minimum antall stemmer for at en fil skal vises på topplisten'; // cpg1.5
$lang_admin_php['picture_table_width'] = 'Bredde på tabellen for filvisning'; // cpg1.5
$lang_admin_php['display_pic_info'] = 'Filinformasjon er synlig som standard'; // cpg1.5
$lang_admin_php['picinfo_movie_download_link'] = 'Vis nedlastingsadresse for filmer i feltet for filinformasjon'; // cpg1.5
$lang_admin_php['max_img_desc_length'] = 'Maks lengde for bildebeskrivelse'; // cpg1.5
$lang_admin_php['max_com_wlength'] = 'Maks antall tegn i et ord'; // cpg1.5
$lang_admin_php['display_film_strip'] = 'Vis filmstripe'; // cpg1.5
$lang_admin_php['max_film_strip_items'] = 'Antall objekt i en filmstripe'; // cpg1.5
$lang_admin_php['slideshow_interval'] = 'Lysbildeintervall'; // cpg1.5
$lang_admin_php['milliseconds'] = 'millisekunder'; // cpg1.5
$lang_admin_php['slideshow_interval_detail'] = '1 sekund = 1000 millisekunder'; // cpg1.5
$lang_admin_php['slideshow_hits'] = 'Regn med treff i lysbilder'; // cpg1.5
$lang_admin_php['ecard_flash'] = 'Tillat Flash i E-kort'; // cpg1.5
$lang_admin_php['not_recommended'] = 'anbefalles ikke'; // cpg1.5
$lang_admin_php['recommended'] = 'anbefalles'; // cpg1.5
$lang_admin_php['transparent_overlay'] = 'Legg en transparent over bildene for å minimer bildetyveri'; // cpg1.5
$lang_admin_php['old_style_rating'] = 'Gå tillbake til tidligere stemmesystem'; // cpg1.5
$lang_admin_php['old_style_rating_extra'] = 'Dette kommer til å deaktivere \'bruk av Antall stemmestjerner\'.'; // cpg1.5
$lang_admin_php['rating_stars_amount'] = 'Hvor mange stemmestjerner kan brukes ved stemmegivning'; // cpg1.5
$lang_admin_php['rate_own_files'] = 'Brukere kan stemme på egne bilder/filer'; // cpg1.5
$lang_admin_php['filter_bad_words'] = 'Filtrer bort stygge ord i kommentarer'; // cpg1.5
$lang_admin_php['enable_smilies'] = 'Tillat smileys i kommentarer'; // cpg1.5
$lang_admin_php['disable_comment_flood_protect'] = 'Tillat flere etterfølgende kommentarer fra en og samme bruker'; // cpg1.5
$lang_admin_php['disable_comment_flood_protect_details'] = '(deaktiver overforbruksbeskyttelsen)'; // cpg1.5
$lang_admin_php['max_com_lines'] = 'Maks antall linjer i en kommentar'; // cpg1.5
$lang_admin_php['max_com_size'] = 'Maks lengde på en kommentar'; // cpg1.5
$lang_admin_php['email_comment_notification'] = 'Gi beskjed til administrator om kommentarer via e-post'; // cpg1.5
$lang_admin_php['comments_sort_descending'] = 'Sortering av kommentarer'; // cpg1.5
$lang_admin_php['comments_per_page'] = 'Kommentarer pr. side'; // cpg1.5
$lang_admin_php['comments_anon_pfx'] = 'Prefix for forfattere til anonyme kommentarer'; // cpg1.5
$lang_admin_php['comment_approval'] = 'Kommentarer krever godkjennelse'; // cpg1.5
$lang_admin_php['display_comment_approval_only'] = 'Vis bare kommentarer som krever godkjennelse på &quot;Undersøk Kommentarer&quot; siden'; // cpg1.5
$lang_admin_php['comment_placeholder'] = 'Vis tekst til sluttbrukere om kommentarer som venter på administrators godkjennelse'; // cpg1.5
$lang_admin_php['comment_user_edit'] = 'Tillat brukere å å redigere sine kommentarer'; // cpg1.5
$lang_admin_php['comment_captcha'] = 'Vis Captcha (Visuell Bekreftelse) for å legge til kommentarer'; // cpg1.5
$lang_admin_php['comment_akismet_enable'] = 'Akismet Alternativ'; // cpg1.5
$lang_admin_php['comment_akismet_enable_description'] = 'Hva skal skje om Akismet avviser en kommentar som spam?'; // cpg1.5
$lang_admin_php['comment_akismet_applicable_only'] = 'Alternativet kan bare brukes om Akismet er aktivert med en gyldig API nøkkel'; // cpg1.5
$lang_admin_php['comment_akismet_enable_approval'] = 'Tillat kommentarer som ikke klarer Akismet, men merk dem som ikke godkjente'; // cpg1.5
$lang_admin_php['comment_akismet_drop_tell'] = 'Vis kommentarer som ikke godkjennes og fortell forfatteren at den har blitt avvist.'; // cpg1.5
$lang_admin_php['comment_akismet_drop_lie'] = 'Vis kommentar som ikke godkjennes, men fortell forfatteren (spameren)at den er lagt ut'; // cpg1.5
$lang_admin_php['comment_akismet_api_key'] = 'Akismet API nøkkel'; // cpg1.5
$lang_admin_php['comment_akismet_api_key_description'] = 'La denne stå tom for å deaktivere Akismet'; // cpg1.5
$lang_admin_php['comment_akismet_group'] = 'Tilpass Akismet for kommentarer gjort av'; // cpg1.5
$lang_admin_php['comment_promote_registration'] = 'Be gjester om å registrere seg for å kommentere'; // cpg1.5
$lang_admin_php['thumb_width'] = 'Maks dimensjon på et miniatyrbilde (bredde, hvis du bruker eksakt i "Bruk dimensjon"'; // cpg1.5
$lang_admin_php['thumb_use'] = 'Bruk dimensjon'; // cpg1.5
$lang_admin_php['thumb_use_detail'] = '(bredde, høyde eller maksstørrelse for et miniatyrbilde)'; // cpg1.5
$lang_admin_php['thumb_height'] = 'Høyde på et miniatyrbilde'; // cpg1.5
$lang_admin_php['thumb_height_detail'] = '(Kan bare brukes om du bruker &quot;exakt&quot; i &quot;Bruk dimensjon;)'; // cpg1.5
$lang_admin_php['movie_audio_document'] = 'film, lyd, dokument'; // cpg1.5
$lang_admin_php['thumb_pfx'] = 'Prefix for miniatyrbilde'; // cpg1.5
$lang_admin_php['enable_unsharp'] = 'Miniaytrbilde: Sharpening aktiver unsharp'; // cpg1.5
$lang_admin_php['unsharp_amount'] = 'Miniatyrbilde: Sharpening mengde'; // cpg1.5
$lang_admin_php['unsharp_radius'] = 'Miniatyrbilde: Sharpening radius'; // cpg1.5
$lang_admin_php['unsharp_threshold'] = 'Miniatyrbilde: Sharpening threshold)'; // cpg1.5
$lang_admin_php['jpeg_qual'] = 'Kvalitet på JPEG filer'; // cpg1.5
$lang_admin_php['make_intermediate'] = 'Lag middelstore bilder'; // cpg1.5
$lang_admin_php['picture_use'] = 'Bruk dimensjon'; // cpg1.5
$lang_admin_php['picture_use_detail'] = '(bredde eller høyde eller maksstørrelse for et middelstort bilde)'; // cpg1.5
$lang_admin_php['picture_use_thumb'] = 'Lik som miniatyrbilder'; // cpg1.5
$lang_admin_php['picture_width'] = 'Maks bredde eller høyde for et middelstort bilde'; // cpg1.5
$lang_admin_php['max_upl_size'] = 'Maks størrelse på opplastede filer'; // cpg1.5
$lang_admin_php['kilobytes'] = 'KB'; // cpg1.5
$lang_admin_php['pixels'] = 'pixler'; // cpg1.5
$lang_admin_php['max_upl_width_height'] = 'Maks bredde eller høyde for opplastede bilder'; // cpg1.5
$lang_admin_php['auto_resize'] = 'Skaler automatisk bilder som er større enn maks bredde eller eller høyde'; // cpg1.5
$lang_admin_php['fullsize_padding_x'] = 'Horisontal størrelse for pop-up i full størrelse'; // cpg1.5
$lang_admin_php['fullsize_padding_y'] = 'Vertikal størelse til pop-up i full størrelse'; // cpg1.5
$lang_admin_php['allow_private_albums'] = 'Album kan være private'; // cpg1.5
$lang_admin_php['allow_private_albums_note'] = '(Merk deg: hvis du endrer fra \'ja\' til \'nei\' vil alle nåværende private album til å bli synlige)'; // cpg1.5
$lang_admin_php['show_private'] = 'Vis ikon for private album for brukere som ikke er innlogget'; // cpg1.5
$lang_admin_php['forbiden_fname_char'] = 'Tegn forbudt i filnavn'; // cpg1.5
$lang_admin_php['silly_safe_mode'] = 'Aktivere &quot;idiotsikker modus&quot;'; // cpg1.5
$lang_admin_php['allowed_img_types'] = 'Tillatte bildetyper'; // cpg1.5
$lang_admin_php['allowed_mov_types'] = 'Tillatte filmtyper'; // cpg1.5
$lang_admin_php['media_autostart'] = 'Autostart Filmvisning'; // cpg1.5
$lang_admin_php['allowed_snd_types'] = 'Tillatte lydfiler'; // cpg1.5
$lang_admin_php['allowed_doc_types'] = 'Tillatte dokumenttyper'; // cpg1.5
$lang_admin_php['thumb_method'] = 'Metode for å Skalere bilder'; // cpg1.5
$lang_admin_php['impath'] = 'Adresse til ImageMagick \'konverterings\' verktøy'; // cpg1.5
$lang_admin_php['impath_example'] = '(fks. /usr/bin/)'; // cpg1.5
$lang_admin_php['im_options'] = 'Flere kommandorader for ImageMagick'; // cpg1.5
$lang_admin_php['read_exif_data'] = 'Les EXIF data fra JPEG filer'; // cpg1.5
$lang_admin_php['read_iptc_data'] = 'Les IPTC data fra JPEG filer'; // cpg1.5
$lang_admin_php['fullpath'] = 'Albumkatalogen'; // cpg1.5
$lang_admin_php['userpics'] = 'Katalogen for brukerfiler'; // cpg1.5
$lang_admin_php['normal_pfx'] = 'Prefix for middelstore bilder'; // cpg1.5
$lang_admin_php['default_dir_mode'] = 'Standardinnstilling for kataloger'; // cpg1.5
$lang_admin_php['default_file_mode'] = 'Standardinnstilling for filer'; // cpg1.5
$lang_admin_php['enable_watermark'] = 'Vannmerke bilder'; // cpg1.5
$lang_admin_php['enable_thumb_watermark'] = 'Vannmerke tilpasset miniatyrbilder'; // cpg1.5
$lang_admin_php['where_put_watermark'] = 'Plassering av vannmerke'; // cpg1.5
$lang_admin_php['which_files_to_watermark'] = 'Hvilke filer skal vannmerkes'; // cpg1.5
$lang_admin_php['watermark_file'] = 'Hvilken fil skal brukes som vannmerke'; // cpg1.5
$lang_admin_php['watermark_transparency'] = 'Gjennomsiktighet for et bilde'; // cpg1.5
$lang_admin_php['zero_2_hundred'] = '0-100'; // cpg1.5
$lang_admin_php['reduce_watermark'] = 'Forminsk størrelsen på vannmerke hvis bildets bredde er mindre enn angitt verdi. Dette er 100% referansepunkt. Forandring av vannmerkestørrelsen er lineær (0 for å deaktivere)'; // cpg1.5
$lang_admin_php['watermark_transparency_featherx'] = 'Sett farge transparent x'; // cpg1.5
$lang_admin_php['watermark_transparency_feathery'] = 'Sett farge transparent y'; // cpg1.5
$lang_admin_php['gd2_only'] = 'Bare GD2'; // cpg1.5
$lang_admin_php['allow_user_registration'] = 'Tillat ny brukerregistrering'; // cpg1.5
$lang_admin_php['global_registration_pw'] = 'Globalt passord for registrering'; // cpg1.5
$lang_admin_php['user_registration_disclaimer'] = 'Vis ansvarsfraskivelse ved brukerregistrering'; // cpg1.5
$lang_admin_php['registration_captcha'] = 'Vis Captcha (Visuell bekreftelse) på registreringssiden'; // cpg1.5
$lang_admin_php['reg_requires_valid_email'] = 'Brukerregistrering krever en gyldig e-postadresse'; // cpg1.5
$lang_admin_php['reg_notify_admin_email'] = 'Send melding til administrator om registrering via e-post'; // cpg1.5
$lang_admin_php['admin_activation'] = 'Administratoraktivering av registreringer'; // cpg1.5
$lang_admin_php['personal_album_on_registration'] = 'Opprett personlig album ved registrering'; // cpg1.5
$lang_admin_php['allow_unlogged_access'] = 'Tillat (gjest eller anonym)tilgang til galleriet'; // cpg1.5
$lang_admin_php['thumbnail_intermediate_full'] = 'miniatyr- middelstore og store bilder'; // cpg1.5
$lang_admin_php['thumbnail_intermediate'] = 'miniatyr og middelstore bilder'; // cpg1.5
$lang_admin_php['thumbnail_only'] = 'bare miniatyrbilder'; // cpg1.5
$lang_admin_php['upload_mechanism'] = 'Standard opplastingsmetode'; // cpg1.5
$lang_admin_php['upload_swf'] = 'Avansert - flere filer, Flash-støtte (anbefales)'; // cpg1.5
$lang_admin_php['upload_single'] = 'Enkel - en fil av gangen'; // cpg1.5
$lang_admin_php['allow_user_upload_choice'] = 'Tillat brukere å velge opplastingsmetode'; // cpg1.5
$lang_admin_php['allow_duplicate_emails_addr'] = 'Tillat flere brukere å registrere seg med samme e-postadresse'; // cpg1.5
$lang_admin_php['upl_notify_admin_email'] = 'Vis administrator brukeropplastinger som venter på godkjennelse'; // cpg1.5
$lang_admin_php['allow_memberlist'] = 'Tillat innloggede brukere å se medlemslisten'; // cpg1.5
$lang_admin_php['allow_email_change'] = 'Tillat brukere å endre sin e-postadresse i sin profil'; // cpg1.5
$lang_admin_php['allow_user_account_delete'] = 'Tillat brukere å slette sin egen konto'; // cpg1.5
$lang_admin_php['users_can_edit_pics'] = 'Tillat brukere å kontrollere sine bilder i offentlige album'; // cpg1.5
$lang_admin_php['allow_user_move_album'] = 'Tillat brukere å flytte sine album i tillatte kategorier'; // cpg1.5
$lang_admin_php['allow_user_album_keyword'] = 'Tillat brukere å sette nøkkelord i album'; // cpg1.5
$lang_admin_php['allow_user_edit_after_cat_close'] = 'Tillat brukere å redigere sine album når kategorien er låst'; // cpg1.5
$lang_admin_php['login_method_username'] = 'Brukernavn'; // cpg1.5
$lang_admin_php['login_method_email'] = 'E-postadresse'; // cpg1.5
$lang_admin_php['login_method_both'] = 'Begge'; // cpg1.5
$lang_admin_php['login_method'] = 'Hvordan vil du at brukere skal logge inn'; // cpg1.5
$lang_admin_php['login_threshold'] = 'Antall misslykkede innloggingsforsøk før brukeren blir midlertidig blokkert'; // cpg1.5
$lang_admin_php['login_threshold_detail'] = '(for å forsvare seg mot inntrenging)'; // cpg1.5
$lang_admin_php['login_expiry'] = 'Lengde på en midlertidig blokkering etter misslykkede innloggingsforsøk'; // cpg1.5
$lang_admin_php['minutes'] = 'minutter'; // cpg1.5
$lang_admin_php['report_post'] = 'Aktiver rapport til Administrator'; // cpg1.5
$lang_admin_php['user_profile1_name'] = 'Profil 1 navn'; // cpg1.5
$lang_admin_php['user_profile2_name'] = 'Profil 2 navn'; // cpg1.5
$lang_admin_php['user_profile3_name'] = 'Profil 3 navn'; // cpg1.5
$lang_admin_php['user_profile4_name'] = 'Profil 4 navn'; // cpg1.5
$lang_admin_php['user_profile5_name'] = 'Profil 5 navn'; // cpg1.5
$lang_admin_php['user_profile6_name'] = 'Profil 6 navn'; // cpg1.5
$lang_admin_php['user_field1_name'] = 'Felt 1 navn'; // cpg1.5
$lang_admin_php['user_field2_name'] = 'Felt 2 navn'; // cpg1.5
$lang_admin_php['user_field3_name'] = 'Felt 3 navn'; // cpg1.5
$lang_admin_php['user_field4_name'] = 'Felt 4 navn'; // cpg1.5
$lang_admin_php['cookie_name'] = 'Cookie navn'; // cpg1.5
$lang_admin_php['cookie_path'] = 'Cookie adresse'; // cpg1.5
$lang_admin_php['smtp_host'] = 'SMTP Host (send mail anvedndes vis du lar feltet stå tomt)'; // cpg1.5
$lang_admin_php['smtp_username'] = 'SMTP Brukernavn'; // cpg1.5
$lang_admin_php['smtp_password'] = 'SMTP Passord'; // cpg1.5
$lang_admin_php['log_mode'] = 'Loggingsmodus'; // cpg1.5
$lang_admin_php['log_mode_details'] = 'Alle loggfiler er skrevet på engelsk.'; // cpg1.5
$lang_admin_php['log_ecards'] = 'Logg e-kort'; // cpg1.5
$lang_admin_php['log_ecards_detail'] = 'Noter deg: logging kan ha legale etervirkninger. Brukeren bør innformeres ved registrering at e-kort logges. Det anbefales også å innformere om integritetspolicy på en separat side.'; // cpg1.5
$lang_admin_php['vote_details'] = 'Behold detaljert stemmestatistikk'; // cpg1.5
$lang_admin_php['hit_details'] = 'Behold detaljert treffstatistikk'; // cpg1.5
$lang_admin_php['display_stats_on_index'] = 'Vis statistikk på førstesiden'; // cpg1.5
$lang_admin_php['count_file_hits'] = 'Telle filvisninger'; // cpg1.5
$lang_admin_php['count_album_hits'] = 'Telle albumvisninger'; // cpg1.5
$lang_admin_php['count_admin_hits'] = 'Telle administratorsvisninger'; // cpg1.5
$lang_admin_php['debug_mode'] = 'Aktiver feilsøkningsfunksjon (debug)'; // cpg1.5
$lang_admin_php['debug_notice'] = 'Vis notiser i feilsøkningsmodus'; // cpg1.5
$lang_admin_php['offline'] = 'Galleriet er tilfeldig stengt'; // cpg1.5
$lang_admin_php['display_coppermine_news'] = 'Vis nyheter fra coppermine-gallery.net'; // cpg1.5
$lang_admin_php['display_coppermine_detail'] = 'vises bare for administrator'; // cpg1.5
$lang_admin_php['config_setting_invalid'] = 'Den verdien du oppga for &laquo;%s&raquo; er ugyldig, vennligst kontroller.'; // cpg1.5
$lang_admin_php['config_setting_ok'] = 'Dine instillinger for &laquo;%s&raquo; er lagret.'; // cpg1.5
$lang_admin_php['contact_form_settings'] = 'Kontaktformularets innstillniger'; // cpg1.5
$lang_admin_php['contact_form_guest_enable'] = 'Vis kontaktformularetr for anonyme gjester'; // cpg1.5
$lang_admin_php['contact_form_registered_enable'] = 'Vis kontaktformularet for registrerte brukere'; // cpg1.5
$lang_admin_php['with_captcha'] = 'med captcha'; // cpg1.5
$lang_admin_php['without_captcha'] = 'uten captcha'; // cpg1.5
$lang_admin_php['optional'] = 'frivillig'; // cpg1.5
$lang_admin_php['mandatory'] = 'obligatorisk'; // cpg1.5
$lang_admin_php['contact_form_guest_name_field'] = 'Vis feltet Avsenderens navn for gjester'; // cpg1.5
$lang_admin_php['contact_form_guest_email_field'] = 'Vis feltet Avsenderens e-postadresse for gjester'; // cpg1.5
$lang_admin_php['contact_form_subject_field'] = 'Vis emnefelt'; // cpg1.5
$lang_admin_php['contact_form_subject_content'] = 'Emneruten for e-post genereres av kontaktformularet'; // cpg1.5
$lang_admin_php['contact_form_sender_email'] = 'Bruk avsenderens e-postadresse som &quot;fra&quot; adresse'; // cpg1.5
$lang_admin_php['allow_no_link'] = 'tillat, men vis ikke link'; // cpg1.5
$lang_admin_php['allow_show_link'] = 'tillat, og vise det med en link'; // cpg1.5
$lang_admin_php['display_sidebar_user'] = 'Sidepanel for registrerte brukere'; // cpg1.5
$lang_admin_php['display_sidebar_guest'] = 'Sidepanel for gjester'; // cpg1.5
$lang_admin_php['do_not_change'] = 'Endre ikke dette hvis  du IKKE vet Hva du gjør!'; // cpg1.5
$lang_admin_php['reset_to_default'] = 'Tilbakestill til standard'; // cpg1.5
$lang_admin_php['no_change_needed'] = 'Det er ingen behov for endring, konfigureringen er allerede satt til standard'; // cpg1.5
$lang_admin_php['enabled'] = 'aktivert'; // cpg1.5
$lang_admin_php['disabled'] = 'deaktivert'; // cpg1.5
$lang_admin_php['none'] = 'inga'; // cpg1.5
$lang_admin_php['warning_change'] = 'Hvis du endrer disse instillinger påvirker det bare filer som lastes opp fra og med nå. Det anbefales at du ikke endrer disse instillinger hvis det allerede er filer i galleriet. Du kan endre filer som allerede finnes ved hjelp av administratorverktøyet (forandre bildenes størrelse) verktøyet i administratormenyen.'; // cpg1.5
$lang_admin_php['warning_exist'] = 'Disse instillinger må ikke endres hvis du allerede har filer i din database.'; // cpg1.5
$lang_admin_php['warning_dont_submit'] = 'Hvis du ikke er sikker på følgene av å endre disse inntillingene så ikke gjør det. Les dokumentasjonen først.'; // cpg1.5 // js-alert
$lang_admin_php['menu_only'] = 'bare meny'; // cpg1.5
$lang_admin_php['everywhere'] = 'over alt'; // cpg1.5
$lang_admin_php['manage_languages'] = 'Behandle språk'; // cpg1.5
$lang_admin_php['form_token_lifetime'] = 'Formularsymbolenes levetid'; // cpg1.5
$lang_admin_php['seconds'] = 'Sekunder'; // cpg1.5
$lang_admin_php['display_reset_boxes_in_config'] = 'Vis tilbakestillingsrute i konfigurasjonen'; // cpg1.5
$lang_admin_php['upd_not_needed'] = 'Oppdatering trengs ikke.'; // cpg 1.5
}


// ------------------------------------------------------------------------- //
// File db_ecard.php
// ------------------------------------------------------------------------- //
if (defined('DB_ECARD_PHP')) {
$lang_db_ecard_php['title'] = 'Sendte e-kort';
$lang_db_ecard_php['ecard_sender'] = 'Avsendere';
$lang_db_ecard_php['ecard_recipient'] = 'Mottagere';
$lang_db_ecard_php['ecard_date'] = 'Dato';
$lang_db_ecard_php['ecard_display'] = 'Vis e-kort';
$lang_db_ecard_php['ecard_name'] = 'Navn';
$lang_db_ecard_php['ecard_email'] = 'E-post';
$lang_db_ecard_php['ecard_ip'] = 'IP';
$lang_db_ecard_php['ecard_ascending'] = 'stigende';
$lang_db_ecard_php['ecard_descending'] = 'fallende';
$lang_db_ecard_php['ecard_sorted'] = 'Sortert';
$lang_db_ecard_php['ecard_by_date'] = 'etter dato';
$lang_db_ecard_php['ecard_by_sender_name'] = 'etter avsenderenes navn';
$lang_db_ecard_php['ecard_by_sender_email'] = 'etter avsenderens e-post';
$lang_db_ecard_php['ecard_by_sender_ip'] = 'etter avsenderens IP adress';
$lang_db_ecard_php['ecard_by_recipient_name'] = 'etter mottakerenes navn';
$lang_db_ecard_php['ecard_by_recipient_email'] = 'etter mottakarenes e-post';
$lang_db_ecard_php['ecard_number'] = 'vis postene %s til %s av %s';
$lang_db_ecard_php['ecard_goto_page'] = 'gå til side';
$lang_db_ecard_php['ecard_records_per_page'] = 'Poster pr. side';
$lang_db_ecard_php['check_all'] = 'Markere alle';
$lang_db_ecard_php['uncheck_all'] = 'Demarkere alle';
$lang_db_ecard_php['ecards_delete_selected'] = 'Slett markerte e-kort';
$lang_db_ecard_php['ecards_delete_confirm'] = 'Er du sikker på at du vil slette postene? Marker i kryssruten!';
$lang_db_ecard_php['ecards_delete_sure'] = 'Jeg er sikker';
$lang_db_ecard_php['invalid_data'] = 'E-kortet som du forsøker å lese er skadet av din e-postklient. Klikk på linken for å avslutte.';
}

// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //
if (defined('DB_INPUT_PHP')) {
$lang_db_input_php['empty_name_or_com'] = 'Du må oppgi ditt navn og kommentar';
$lang_db_input_php['com_added'] = 'Din kommentar er lagt til'; // cpg1.5
$lang_db_input_php['alb_need_title'] = 'du må skrive en tittel for albumet!';
$lang_db_input_php['no_udp_needed'] = 'Ingen oppdatering nødvendig.';
$lang_db_input_php['alb_updated'] = 'Albumet oppdateres';
$lang_db_input_php['unknown_album'] = 'Valgt album finnes ikke eller at du ikke har tilatelse til å legge filer/bilder i det.';
$lang_db_input_php['no_pic_uploaded'] = 'Ingen fil ble lastet opp!<br />Hvis valgte en fil å laste opp, kontroller at serveren tillater filopplasting...';
$lang_db_input_php['err_mkdir'] = 'Kunne ikke opprette mappen %s!';
$lang_db_input_php['dest_dir_ro'] = 'Destinasjonskatalogen %s er ikke skrivbart!';
$lang_db_input_php['err_move'] = 'Umulig å flytte %s til %s!';
$lang_db_input_php['err_fsize_too_large'] = 'Filen du forsøker  å laste opp er for stor (maksimal størrelse er %s x %s)!';
$lang_db_input_php['err_imgsize_too_large'] = 'Filen du har lastet opp er for stor (maksimal størrelse er %s KB)!';
$lang_db_input_php['err_invalid_img'] = 'Filen du har lastet opp er ikke et gyldig bilde!';
$lang_db_input_php['allowed_img_types'] = 'Du kan bare laste opp %s bilder.';
$lang_db_input_php['err_insert_pic'] = 'Filen \'%s\' kan ikke legges i albumet ';
$lang_db_input_php['upload_success'] = 'Du har lykkes med opplastingen.<br />Den vil bli vist etter at en administrator har godkjent den.';
$lang_db_input_php['notify_admin_email_subject'] = '%s - Melding om opplasting';
$lang_db_input_php['notify_admin_email_body'] = 'Et bilde som krever din godkjennelse er lastet av %s. Gå til %s';
$lang_db_input_php['info'] = 'Informasjon';
$lang_db_input_php['com_updated'] = 'Oppdatert kommentar'; // cpg1.5
$lang_db_input_php['alb_updated'] = 'Oppdatert album';
$lang_db_input_php['err_comment_empty'] = 'Din kommentar er tom!';
$lang_db_input_php['err_invalid_fext'] = 'Bare filer med følgende endelser er tillatt:'; // js-alert
$lang_db_input_php['no_flood'] = 'Du er allerede foratter av den sistete kommentaren som er lagt inn for denne filen<br />Rediger den kommentaren om du vil gjøre forandringer';
$lang_db_input_php['redirect_msg'] = 'Du omdirigeres.<br /><br />Klikk på \'FORTSETT\' hvis ikke siden vises automatisk';
$lang_db_input_php['upl_success'] = 'Din fil er lagt til';
$lang_db_input_php['email_comment_subject'] = 'Kommentar gjort på Coppermine Photo Gallery';
$lang_db_input_php['email_comment_body'] = 'Noen har lagt til en kommentar til ditt galleri. Les det på';
$lang_db_input_php['album_not_selected'] = 'Album er ikke valgt';
$lang_db_input_php['com_author_error'] = 'En registrert bruker har allerede dette navn. Logg inn eller bruk et annet';
}

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //
if (defined('DELETE_PHP')) {
$lang_delete_php['orig_pic'] = 'originalbilde'; // cpg1.5
$lang_delete_php['fs_pic'] = 'fullstørrleksbilde';
$lang_delete_php['del_success'] = 'er slettet';
$lang_delete_php['ns_pic'] = 'normal bilde';
$lang_delete_php['err_del'] = 'kan ikke slettes';
$lang_delete_php['thumb_pic'] = 'miniatyrbilde';
$lang_delete_php['comment'] = 'kommentar';
$lang_delete_php['im_in_alb'] = 'bilder i album';
$lang_delete_php['alb_del_success'] = 'Album &laquo;%s&raquo; slettet';
$lang_delete_php['alb_mgr'] = 'Bhandle Album';
$lang_delete_php['err_invalid_data'] = 'Ugyldige data er motatt i \'%s\'';
$lang_delete_php['create_alb'] = 'Oppreter album \'%s\'';
$lang_delete_php['update_alb'] = 'Oppdaterer album \'%s\' med tittel \'%s\' og index \'%s\'';
$lang_delete_php['del_pic'] = 'Slett fil';
$lang_delete_php['del_alb'] = 'Slett album';
$lang_delete_php['del_user'] = 'Slett bruker';
$lang_delete_php['err_unknown_user'] = 'Valgt bruker finnes ikke!';
$lang_delete_php['err_empty_groups'] = 'Gruppetabellen finnes ikke eller er tom!';
$lang_delete_php['comment_deleted'] = 'Kommentaren er slettet';
$lang_delete_php['npic'] = 'Bilde';
$lang_delete_php['pic_mgr'] = 'Behandle Bilder';
$lang_delete_php['update_pic'] = 'Oppdaterer bilde \'%s\' med filnavn \'%s\' og index \'%s\'';
$lang_delete_php['username'] = 'Brukernavn';
$lang_delete_php['anonymized_comments'] = '%s kommentar(er) anonymisert';
$lang_delete_php['anonymized_uploads'] = '%s offentlige opplastin(er) anonymisert(e)';
$lang_delete_php['deleted_comments'] = '%s kommentar(er) slettet';
$lang_delete_php['deleted_uploads'] = '%s offentlige opplasting(er) slettet';
$lang_delete_php['user_deleted'] = 'bruker %s slettet';
$lang_delete_php['activate_user'] = 'Aktiver brukere';
$lang_delete_php['user_already_active'] = 'Kontoen er allerede aktivt';
$lang_delete_php['activated'] = 'Aktivert';
$lang_delete_php['deactivate_user'] = 'Deaktivere brukere';
$lang_delete_php['user_already_inactive'] = 'Kontoen er allered deaktivert';
$lang_delete_php['deactivated'] = 'Deaktivert';
$lang_delete_php['reset_password'] = 'Nullstill passord';
$lang_delete_php['password_reset'] = 'Passordet nullstillt til %s';
$lang_delete_php['change_group'] = 'EndrE primærgruppe';
$lang_delete_php['change_group_to_group'] = 'Endrer fra %s til %s';
$lang_delete_php['add_group'] = 'Legg til sekundær gruppe';
$lang_delete_php['add_group_to_group'] = 'Legger til bruker %s til gruppen %s. Brukeren tillhører nå brukergruppe %s primært og %s sekundært.';
$lang_delete_php['status'] = 'Status';
$lang_delete_php['updating_album'] = 'OppdaterE album '; // cpg1.5
$lang_delete_php['moved_picture_to_position'] = 'Flyttet bilde %s til posisjon %s'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File displayimage.php
// ------------------------------------------------------------------------- //
if (defined('DISPLAYIMAGE_PHP')){
$lang_display_image_php['confirm_del'] = 'Er du sikker på at du vil SLETTE denne fil?\\nKommentarer vil også bli settet.'; // js-alert
$lang_display_image_php['del_pic'] = 'Slett denne fil';
$lang_display_image_php['size'] = '%s x %s pixler';
$lang_display_image_php['views'] = '%s ganger';
$lang_display_image_php['slideshow'] = 'Lysbilder';
$lang_display_image_php['stop_slideshow'] = 'Stopp lysbilder';
$lang_display_image_php['view_fs'] = 'Klikk på bildet for å se det i full størrelse';
$lang_display_image_php['edit_pic'] = 'Redigere filinformasjon';
$lang_display_image_php['crop_pic'] = 'Beskjær og rotere';
$lang_display_image_php['set_player'] = 'Bytt spiller';

$lang_picinfo['title'] = 'Filinformasjon';
$lang_picinfo['Album name'] = 'Albumnavn';
$lang_picinfo['Rating'] = 'Stjerner (%s stemmer)';
$lang_picinfo['Date Added'] = 'Lagt til den';
$lang_picinfo['Dimensions'] = 'Dimensjoner';
$lang_picinfo['Displayed'] = 'Vist';
$lang_picinfo['URL'] = 'URL';
$lang_picinfo['Make'] = 'Opphavsperson';
$lang_picinfo['Model'] = 'Modell';
$lang_picinfo['DateTime'] = 'Dato Tid';
$lang_picinfo['ISOSpeedRatings'] = 'ISO';
$lang_picinfo['MaxApertureValue'] = 'Største blenderopning';
$lang_picinfo['FocalLength'] = 'Brennvidde';
$lang_picinfo['Comment'] = 'Kommentar';
$lang_picinfo['addFav'] = 'Legg til i Favoritter';
$lang_picinfo['addFavPhrase'] = 'Favoritter';
$lang_picinfo['remFav'] = 'Fjern fra Favoritter';
$lang_picinfo['iptcTitle'] = 'IPTC Tittel';
$lang_picinfo['iptcCopyright'] = 'IPTC Copyright';
$lang_picinfo['iptcKeywords'] = 'IPTC Nøkkelord';
$lang_picinfo['iptcCategory'] = 'IPTC Kategori';
$lang_picinfo['iptcSubCategories'] = 'IPTC Underkategori';
$lang_picinfo['ColorSpace'] = 'Fargerom';
$lang_picinfo['ExposureProgram'] = 'Eksponeringsprogram';
$lang_picinfo['Flash'] = 'Blitz';
$lang_picinfo['MeteringMode'] = 'Lysmetting';
$lang_picinfo['ExposureTime'] = 'Eksponeringstid';
$lang_picinfo['ExposureBiasValue'] = 'Eksponeringskompensasjon';
$lang_picinfo['ImageDescription'] = 'Bildebeskrivelse';
$lang_picinfo['Orientation'] = 'Orientering';
$lang_picinfo['xResolution'] = 'X Oppløsning';
$lang_picinfo['yResolution'] = 'Y Oppløsning';
$lang_picinfo['ResolutionUnit'] = 'Oppløsningens mettning';
$lang_picinfo['Software'] = 'Software';
$lang_picinfo['YCbCrPositioning'] = 'YCbCr posisjonering';
$lang_picinfo['ExifOffset'] = 'EXIF index';
$lang_picinfo['IFD1Offset'] = 'IFD1 index';
$lang_picinfo['FNumber'] = 'Blenderinnstilling';
$lang_picinfo['ExifVersion'] = 'EXIF versjon';
$lang_picinfo['DateTimeOriginal'] = 'Original dato og tid ';
$lang_picinfo['DateTimedigitized'] = 'Digitalisert dato og tid';
$lang_picinfo['ComponentsConfiguration'] = 'Komponentkonfigurasjon';
$lang_picinfo['CompressedBitsPerPixel'] = 'Bit pr. pixel';
$lang_picinfo['LightSource'] = 'Lyskilde (hvitbalanse)';
$lang_picinfo['ISOSetting'] = 'ISO';
$lang_picinfo['ColorMode'] = 'Fargemodus';
$lang_picinfo['Quality'] = 'Kvalitet';
$lang_picinfo['ImageSharpening'] = 'Bilde skarphet';
$lang_picinfo['FocusMode'] = 'Fokuseringsmetode';
$lang_picinfo['FlashSetting'] = 'Blitz';
$lang_picinfo['ISOSelection'] = 'ISO innstilling';
$lang_picinfo['ImageAdjustment'] = 'Bildejustering';
$lang_picinfo['Adapter'] = 'Konverter';
$lang_picinfo['ManualFocusDistance'] = 'Manuellt fokusavstand';
$lang_picinfo['DigitalZoom'] = 'Digital zoomfaktor';
$lang_picinfo['AFFocusPosition'] = 'Fokusposisjon ved autofokus';
$lang_picinfo['Saturation'] = 'Fargemetting';
$lang_picinfo['NoiseReduction'] = 'Støyredusering';
$lang_picinfo['FlashPixVersion'] = 'Flash Pix versjon';
$lang_picinfo['ExifImageWidth'] = 'Bildebredde';
$lang_picinfo['ExifImageHeight'] = 'Bildehøyde';
$lang_picinfo['ExifInteroperabilityOffset'] = 'Index for EXIF kompatibilitetsdata';
$lang_picinfo['FileSource'] = 'Filkilde';
$lang_picinfo['SceneType'] = 'Scenetype';
$lang_picinfo['CustomerRender'] = 'Tillpasset bildebearbeiding';
$lang_picinfo['ExposureMode'] = 'Eksponeringsmetode';
$lang_picinfo['WhiteBalance'] = 'Hvitbalanse';
$lang_picinfo['DigitalZoomRatio'] = 'Digital zoomfaktor';
$lang_picinfo['SceneCaptureMode'] = 'Innstilt modus';
$lang_picinfo['GainControl'] = 'Bildeforsterning';
$lang_picinfo['Contrast'] = 'Kontrast';
$lang_picinfo['Sharpness'] = 'Skarphet';
$lang_picinfo['ManageExifDisplay'] = 'Bhandle EXIF visning';
$lang_picinfo['success'] = 'Informasjonen oppdaterte korrekt.';
$lang_picinfo['show_details'] = 'Vis detaljer'; // cpg1.5
$lang_picinfo['hide_details'] = 'Lagre detaljer'; // cpg1.5
$lang_picinfo['download_URL'] = 'Direkte link';
$lang_picinfo['movie_player'] = 'Avspill filen i din standardspiller';

$lang_display_comments['comment_x_to_y_of_z'] = '%d til %d av %d'; // cpg1.5
$lang_display_comments['page'] = 'Side'; // cpg1.5
$lang_display_comments['edit_title'] = 'Rediger denne kommentar';
$lang_display_comments['delete_title'] = 'Slett denne kommentar'; // cpg1.5
$lang_display_comments['confirm_delete'] = 'Er du sikker på at du vil slette dene kommentaren?'; // js-alert
$lang_display_comments['add_your_comment'] = 'Legg til din kommentar';
$lang_display_comments['name'] = 'Navn';
$lang_display_comments['comment'] = 'Kommentar';
$lang_display_comments['your_name'] = 'Ditt navn';
$lang_display_comments['report_comment_title'] = 'Rapporter denne kommentar til administrator';
$lang_display_comments['pending_approval'] = 'Kommentaren blir synlig etter at administrator har godkjent den'; // cpg1.5
$lang_display_comments['unapproved_comment'] = 'Avvist kommentar'; // cpg1.5
$lang_display_comments['pending_approval_message'] = 'Noen har skrevet en kommentar her. Den blir synlig etter administrators godkjennelse.'; // cpg1.5
$lang_display_comments['approve'] = 'Godkjenn kommentar'; // cpg1.5
$lang_display_comments['disapprove'] = 'Marker kommentaren som avvist'; // cpg1.5
$lang_display_comments['log_in_to_comment'] = 'Anonyme kommentarer er ikke tillat her. %sLogg inn%s for å skrive kommentarer'; // cpg1.5 // do not translate the %s placeholders - they will be used as wrappers for the link (<a>)
$lang_display_comments['default_username_message'] = 'Angi ditt navn for kommentarer'; // cpg1.5
$lang_display_comments['comment_rejected'] = 'Din kommentar er avist'; // cpg1.5

$lang_fullsize_popup['click_to_close'] = 'Klikk på bildet for å stenge vinduet';
$lang_fullsize_popup['close_window'] = 'Klikk på vinduet'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP')) {
$lang_ecard_php['title'] = 'Send et e-kort';
$lang_ecard_php['invalid_email'] = 'Varsel: Ugyldig e-postadresse:'; // cpg1.5
$lang_ecard_php['ecard_title'] = 'Et e-kort fra %s til deg';
$lang_ecard_php['error_not_image'] = 'Bare bilder kan sendes som e-kort.'; // cpg1.5
$lang_ecard_php['error_not_image_flash'] = 'Bare bilder og flash-filer kan sendes som e-kort.'; // cpg1.5
$lang_ecard_php['view_ecard'] = 'Alternativ link om e-kortet ikke vises korrekt';
$lang_ecard_php['view_ecard_plaintext'] = 'For å se e-kortet, kopier og lim inn linken i din webleser:';
$lang_ecard_php['view_more_pics'] = 'Vis flere bilder!';
$lang_ecard_php['send_success'] = 'Ditt e-kort ble sendt';
$lang_ecard_php['send_failed'] = 'Desverre kan ikke serveren sende ditt e-kort...';
$lang_ecard_php['from'] = 'Fra';
$lang_ecard_php['your_name'] = 'Ditt navn';
$lang_ecard_php['your_email'] = 'Din e-postadresse';
$lang_ecard_php['to'] = 'Til';
$lang_ecard_php['rcpt_name'] = 'Mottakers navn';
$lang_ecard_php['rcpt_email'] = 'Mottakers e-postadresse';
$lang_ecard_php['greetings'] = 'Rubrikk';
$lang_ecard_php['message'] = 'Melding';
$lang_ecard_php['ecards_footer'] = 'Sendt av %s fra IP %s den %s (Galleriet tid)';
$lang_ecard_php['preview'] = 'Forhåndsvis e-kortet';
$lang_ecard_php['preview_button'] = 'Forhåndsvis';
$lang_ecard_php['submit_button'] = 'Send e-kort';
$lang_ecard_php['preview_view_ecard'] = 'Dette blir en alternativ link til e-kortet når det er laget. Det fungerer ikke som forhåndsvisning.';
}

// ------------------------------------------------------------------------- //
// File report_file.php
// ------------------------------------------------------------------------- //

if (defined('REPORT_FILE_PHP')) {
$lang_report_php['title'] = 'Rapport til administrator';
$lang_report_php['invalid_email'] = '<strong>Varning</strong> : ugyldig e-postadresse!';
$lang_report_php['report_subject'] = 'En rapport fra %s på ett galleri %s';
$lang_report_php['view_report'] = 'Alternativ link om rapporten ikke vises korrekt';
$lang_report_php['view_report_plaintext'] = 'For å se rapporten, kopier og lim inn linken i din webleser:';
$lang_report_php['view_more_pics'] = 'Galleri';
$lang_report_php['send_success'] = 'Din rapport er sendt';
$lang_report_php['send_failed'] = 'Desvere kan ikke serveren sende din rapport...';
$lang_report_php['from'] = 'Fra';
$lang_report_php['your_name'] = 'Ditt navn';
$lang_report_php['your_email'] = 'Din e-postadresse';
$lang_report_php['to'] = 'Til';
$lang_report_php['administrator'] = 'Administrator/Moderator';
$lang_report_php['subject'] = 'Emne';
$lang_report_php['comment_field_name'] = 'RapporterEr kommentar skrevet av "%s"';
$lang_report_php['reason'] = 'Anledning';
$lang_report_php['message'] = 'Melding';
$lang_report_php['report_footer'] = 'Sendt av %s fra IP %s den %s (Galleriets tid)';
$lang_report_php['obscene'] = 'obskjøn';
$lang_report_php['offensive'] = 'anstøtlig';
$lang_report_php['misplaced'] = 'avviker fra emne/feilplassert';
$lang_report_php['missing'] = 'forsvunnet';
$lang_report_php['issue'] = 'feil/kan ikke se';
$lang_report_php['other'] = 'annet';
$lang_report_php['refers_to'] = 'Filrapport refererer til';
$lang_report_php['reasons_list_heading'] = 'grun(er) for rapportering:';
$lang_report_php['no_reason_given'] = 'ingen grunn er angitt';
$lang_report_php['go_comment'] = 'Gå til kommentar';
$lang_report_php['view_comment'] = 'Vis hele rapporten med kommentar';
$lang_report_php['type_file'] = 'fil';
$lang_report_php['type_comment'] = 'kommentar';
$lang_report_php['invalid_data'] = 'Innholdet i rapporten du forsøker å se på er ødlagt av din e-postklient. Kontroller at linken er riktig.';
}

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) {
$lang_editpics_php['pic_info'] = 'Fil informasjon';
$lang_editpics_php['desc'] = 'Beskrivelse';
$lang_editpics_php['approval'] = 'Godkjennelse'; //cpg 1.5
$lang_editpics_php['approved'] = 'Godkjent'; // cpg 1.5
$lang_editpics_php['unapproved'] = 'Avist'; // cpg 1.5
$lang_editpics_php['new_keyword'] = 'Nytt nøkkelord';
$lang_editpics_php['new_keywords'] = 'Nytt nøkkelord funnet';
$lang_editpics_php['existing_keyword'] = 'Eksisterande nøkkelord';
$lang_editpics_php['pic_info_str'] = '%s &times; %s - %s KB - %s visninger - %s stemmer';
$lang_editpics_php['approve'] = 'Godkjenn fil';
$lang_editpics_php['postpone_app'] = 'Lukk opp godkjendelse';
$lang_editpics_php['del_pic'] = 'Slett fil';
$lang_editpics_php['del_all'] = 'Slett ALLE filer';
$lang_editpics_php['read_exif'] = 'Les EXIF info igjen';
$lang_editpics_php['reset_view_count'] = 'Nullstill teller';
$lang_editpics_php['reset_all_view_count'] = 'Nullstill ALLE tellere';
$lang_editpics_php['reset_votes'] = 'Nullstill stemmer';
$lang_editpics_php['reset_all_votes'] = 'Nullstill ALLE stemmer';
$lang_editpics_php['del_comm'] = 'Slett kommentarer';
$lang_editpics_php['del_all_comm'] = 'Slett ALLE kommentarer';
$lang_editpics_php['upl_approval'] = 'Last opp godkjennte';
$lang_editpics_php['edit_pics'] = 'Rediger filer';
$lang_editpics_php['edit_pic'] = 'Rediger fil'; // cpg 1.5
$lang_editpics_php['see_next'] = 'Se neste file';
$lang_editpics_php['see_prev'] = 'Se foregående file';
$lang_editpics_php['n_pic'] = '%s filer';
$lang_editpics_php['n_of_pic_to_disp'] = 'Antall filer å vise';
$lang_editpics_php['crop_title'] = 'Coppermine Picture Editor';
$lang_editpics_php['preview'] = 'Forhåndsvis';
$lang_editpics_php['save'] = 'Lagre bilde';
$lang_editpics_php['save_thumb'] = 'Lagre som miniatyrbilde';
$lang_editpics_php['gallery_icon'] = 'Gjør dettte til mitt ikon';
$lang_editpics_php['sel_on_img'] = 'Utvalget må bare være på bildene!'; // js-alert
$lang_editpics_php['album_properties'] = 'Album egenskaper';
$lang_editpics_php['parent_category'] = 'Hovedkategori';
$lang_editpics_php['thumbnail_view'] = 'Miniatyrbilde visning';
$lang_editpics_php['select_unselect'] = 'marker/demarker allt';
$lang_editpics_php['file_exists'] = 'Valgt fil \'%s\' finnes allerede.';
$lang_editpics_php['rename_failed'] = 'Kunne ikke omdøpem \'%s\' til \'%s\'.';
$lang_editpics_php['src_file_missing'] = 'Kildefil \'%s\' savnes.';
$lang_editpics_php['mime_conv'] = 'Kan ikke konvertere fil fra \'%s\' till \'%s\'';
$lang_editpics_php['forb_ext'] = 'Forbutt filendelse.';
$lang_editpics_php['error_editor_class'] = 'Editeringsklasse for ditt størrelsesverktøy er ikke implementert'; // cpg 1.5
$lang_editpics_php['error_document_size'] = 'Dokumentet har ingen bredde eller høyde'; // cpg 1.5 // js-alert
$lang_editpics_php['success_picture'] = 'Bildet er lagret - du kan %sstenge%s vinduet'; // cpg1.5 // do not translate "%s" here
$lang_editpics_php['success_thumb'] = 'Miniatyrbildet er lagret - du kan %sstenge%s vinduet'; // cpg1.5 // do not translate "%s" here
$lang_editpics_php['rotate'] = 'Roter'; // cpg 1.5
$lang_editpics_php['mirror'] = 'Speilvende'; // cpg 1.5
$lang_editpics_php['scale'] = 'Skalere'; // cpg 1.5
$lang_editpics_php['new_width'] = 'Ny bredde'; // cpg 1.5
$lang_editpics_php['new_height'] = 'Ny høyde'; // cpg 1.5
$lang_editpics_php['enable_clipping'] = 'Aktiver klipping, tilpass beskjæring'; // cpg 1.5
$lang_editpics_php['jpeg_quality'] = 'JPEG produksjonskvalitet'; // cpg 1.5
$lang_editpics_php['or'] = 'ELLER'; // cpg 1.5
$lang_editpics_php['approve_pic'] = 'Godkjenn fil'; // cpg 1.5
$lang_editpics_php['approve_all'] = 'Godkjenn ALLE filer'; // cpg 1.5
$lang_editpics_php['error_empty'] = 'Albumet er tomt'; // cpg1.5
$lang_editpics_php['error_approval_empty'] = 'Ingen flere bilder å godkjenne'; // cpg1.5
$lang_editpics_php['error_linked_only'] = 'Albumet inneholder bare linkede filer, som du ikke kan redigere her'; // cpg1.5
$lang_editpics_php['note_approve_public'] = 'Filer som flyttes til et offentlig album må godkjennes av en administrator.'; // cpg1.5
$lang_editpics_php['note_approve_private'] = 'Filer som flyttes til et privat album må godkjenne av en administrator.' ; // cpg1.5
$lang_editpics_php['note_edit_control'] = 'Filer som flyttes til et offentlig album kan ikke redigeres.'; // cpg1.5
$lang_editpics_php['confirm_move'] = 'Er du sikker på at du vil flytte denne fil?'; // cpg1.5 //js-alert
$lang_editpics_php['success_changes'] = 'Endringene er lagret'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File forgot_passwd.php
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) {
$lang_forgot_passwd_php['forgot_passwd'] = 'Glemt passord';
$lang_forgot_passwd_php['err_already_logged_in'] = 'Du er logger inn!';
$lang_forgot_passwd_php['enter_email'] = 'Angi din e-postadresse';
$lang_forgot_passwd_php['submit'] = 'gå';
$lang_forgot_passwd_php['illegal_session'] = 'Funksjonen for Glemt passord er ugyldig eller ødlagt.';
$lang_forgot_passwd_php['failed_sending_email'] = 'E-post med passordpåminnelse kan ikke sendes!';
$lang_forgot_passwd_php['email_sent'] = 'En e-post med dit brukernavn er sendt til %s';
$lang_forgot_passwd_php['verify_email_sent'] = 'En e-post er sendt til %s. Kontroller din e-post for å avslutte.';
$lang_forgot_passwd_php['err_unk_user'] = 'Valgt bruker finnes!';
$lang_forgot_passwd_php['account_verify_subject'] = '%s - Spørsmål om nytt passord';
$lang_forgot_passwd_php['passwd_reset_subject'] = '%s - Ditt nye passord';
$lang_forgot_passwd_php['account_verify_email'] = <<< EOT
Du har spurt om å få et nytt passord. Hvis du vil fortsette og få et nytt passord tilsendt klikk på følgende link:

<a href="{VERIFY_LINK}">{VERIFY_LINK}</a>


Mvh.,

{SITE_NAME}

EOT;

$lang_forgot_passwd_php['reset_email'] = <<< EOT
Ditt nye passord:

Brukernavn: {USER_NAME}
Passord: {PASSWORD}

Gå til <a href="{SITE_LINK}">{SITE_LINK}</a> for å logge inn.


Mvh.,

{SITE_NAME}

EOT;
}

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //
if (defined('GROUPMGR_PHP')) {
$lang_groupmgr_php['group_manager'] = 'Behandle Grupper'; // cpg1.5.x
$lang_groupmgr_php['group_name'] = 'Gruppe';
$lang_groupmgr_php['permissions'] = 'Tilatelser';
$lang_groupmgr_php['public_albums'] = 'Opplastinger til offentlige album';
$lang_groupmgr_php['personal_gallery'] = 'Personlig galleri';
$lang_groupmgr_php['disk_quota'] = 'Kvote';
$lang_groupmgr_php['rating'] = 'Stemme';
$lang_groupmgr_php['ecards'] = 'E-kort';
$lang_groupmgr_php['comments'] = 'Kommentarer';
$lang_groupmgr_php['allowed'] = 'Tillatt';
$lang_groupmgr_php['approval'] = 'Krever godkjennelse';
$lang_groupmgr_php['create_new_group'] = 'Oppret ny gruppe';
$lang_groupmgr_php['del_groups'] = 'Slett markeret(e) grupp(er)';
$lang_groupmgr_php['confirm_del'] = 'Advarsel, når du sletter en gruppe, vil brukere i gruppen overføres til gruppen \'Registrerte\'!\n\nVil du fortsette?'; // js-alert
$lang_groupmgr_php['title'] = 'Behandle brukergrupper';
$lang_groupmgr_php['reset_to_default'] = 'Tilbakestill til standardnavn (%s) - anbefales!';
$lang_groupmgr_php['error_group_empty'] = 'Gruppetabellen var tom!<br />Standardgruppe opprettet, vennligst oppdater siden';
$lang_groupmgr_php['explain_greyed_out_title'] = 'Hvorfor er denne ruten grå?';
$lang_groupmgr_php['explain_guests_greyed_out_text'] = 'Du kan ikke endre egenskaper for gruppen da de er medlem av gruppen INGEN. Alle (ikke) innloggede brukere (medlemmar av gruppen) %s) kan ikke gjøre annet enn å logge inn; De påvirkes ikke av innstillinger for gruppen. Endre tillatelser her eller på gallerikonfigurasjonens side under "Brukerinnstillinger", "Tillat uinnloggede brukere tilgang".';
$lang_groupmgr_php['group_assigned_album'] = 'Tildelte album';
$lang_groupmgr_php['access_level'] = 'Tilatelsesnivå'; // cpg1.5
$lang_groupmgr_php['thumbnail_intermediate_full'] = 'miniatyr-, middelstore- og store bilder'; // cpg1.5
$lang_groupmgr_php['thumbnail_intermediate'] = 'miniatyr- og middelstore bilder'; // cpg1.5
$lang_groupmgr_php['thumbnail_only'] = 'bare miniatyrbilder'; // cpg1.5
$lang_groupmgr_php['none'] = 'ingen'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //
if (defined('INDEX_PHP')){
$lang_index_php['welcome'] = 'velkommen!';

$lang_album_admin_menu['confirm_delete'] = 'Er du sikker på at du vil SLETTE dette album?\\nAlle filer g kommentarer vil også bli slettet.'; // js-alert
$lang_album_admin_menu['delete'] = 'Slett';
$lang_album_admin_menu['modify'] = 'Egenskaper';
$lang_album_admin_menu['edit_pics'] = 'Rediger filer';
$lang_album_admin_menu['cat_locked'] = 'Dette album er låst for redigering'; // cpg1.5.x

$lang_list_categories['home'] = 'Hjem';
$lang_list_categories['stat1'] = '[pictures] filer i [albums] album og [cat] kategorier med [comments] kommentarer vist [views] ganger'; // do not translate the stuff in square brackets
$lang_list_categories['stat2'] = '[pictures] filer i [albums] album vist [views] ganger'; // do not translate the stuff in square brackets
$lang_list_categories['xx_s_gallery'] = '%s\'s Galleri';
$lang_list_categories['stat3'] = '[pictures] filer i [albums] album med [comments] kommentarer vist [views] ganger'; // do not translate the stuff in square brackets

$lang_list_users['user_list'] = 'Brukerliste';
$lang_list_users['no_user_gal'] = 'Det finnes ingen brukergallerier';
$lang_list_users['n_albums'] = '%s album';
$lang_list_users['n_pics'] = '%s fil(er)';

$lang_list_albums['n_pictures'] = '%s filer';
$lang_list_albums['last_added'] = ', siste tillagt den %s';
$lang_list_albums['n_link_pictures'] = '%s linkede filer';
$lang_list_albums['total_pictures'] = '%s filer totalt';
$lang_list_albums['alb_hits'] = 'Album vist %s ganger'; // cpg1.5
$lang_list_albums['from_category'] = ' - Fra Kategori: '; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File install.php
// ------------------------------------------------------------------------- //

if (defined('INSTALL_PHP')) {
$lang_install['already_succ'] = 'Installasjonsprogrammet er kjørt en gang og er nå låst.';
$lang_install['already_succ_explain'] = 'Hvis du vil kjøre installasjonen igjen, må du først slette \'include/config.inc.php\' filen som ble opprettet i katalogen der du installerte Coppermine. Du kan gjøre dette med et FTP program';
$lang_install['cant_read_tmp_conf'] = 'Installasonsprogrammet kan ikke lese den temporære konfigurasjonsfilen %s.';
$lang_install['cant_write_tmp_conf'] = 'Installasjonsprogrammet kan ikke skrive den temporære konfigurasjonsfilen %s.';
$lang_install['review_permissions'] = 'Kontroller katalogtilatelsene.';
$lang_install['change_lang'] = 'Bytt språk';
$lang_install['check_path'] = 'Kontroller adressen';
$lang_install['continue'] = 'Neste steg';
$lang_install['conv_said'] = 'Konverteringsprogrammet sa:';
$lang_install['license_info'] = 'Coppermine er ett bilde/multimedia galleripakke som er gitt ut under GNU GPL v3. Gjennom å installere det, må du akseptere Coppermine\'s lisensavtale:';
$lang_install['cpg_info_frames'] = 'Din webleser kan ikke vise tilføyede rammer (inline frames). Du kan lese lisensavtalen i docs katalogen som kom i Coppermines programpakke.';
$lang_install['license'] = 'Coppermine lisensavtale';
$lang_install['create_table'] = 'Oppretter tabell \'%s\'';
$lang_install['db_populating'] = 'Prøver å legge inn data i databasen.';
$lang_install['db_alr_populated'] = 'Det er allerede lagt tilstrekkelige data i databasen.';
$lang_install['dir_ok'] = 'Fant katalogen';
$lang_install['directory'] = 'Katalog';
$lang_install['email'] = 'E-postadresse';
$lang_install['email_no_match'] = 'E-postadressen passer ikke eller er ugyldig.';
$lang_install['email_verif'] = 'Verifiser e-post';
$lang_install['err_cpgnuke'] = '<h1>FEIL</h1>Det ser ut som om du prøver å installere Coppermine fristående til din Nuke portal.<br />Denne versjon kan bare anvendes fristående!<br />En del servere kan vise denne advarsel selv om du ikke har installert noen nuke portal - om dette gjeller for deg, <a href="%s?continue_anyway=1">fortsett</a> med installasjonen. Hvis du bruker en nuke portal, kan du se i <a href=\"http://www.cpgnuke.com/\">CpgNuke</a> eller bruke en av de (usupporterte)<a href=\"http://sourceforge.net/project/showfiles.php?group_id=89658&amp;package_id=95984\">Coppermine portalene</a> - ikke gå videre!';
$lang_install['error'] = 'FEIL';
$lang_install['error_need_corr'] = 'Følgende feil inntraff å må korrigeres først:';
$lang_install['finish'] = 'Avslutt installasjonen';
$lang_install['gd_note'] = '<strong>Viktigt :</strong> eldre versjoner av GD graphic library støtter bare JPEG og PNG bilder. Om dette gjelder deg, kan ikke scriptet lage miniatyrbilder av GIF bilder.';
$lang_install['go_to_main'] = 'Gå til førstesiden';
$lang_install['im_no_convert_ex'] = 'Installasjonsprogrammet fant ImageMagick \'convert\' program i \'%s\', men det kan dessverre ikke startes av scriptet.<br />Du kan overveie å bruke GD i stedet for ImageMagick.';
$lang_install['im_not_found'] = 'Installasjonsprogrammet prøvde å finne ImageMagick, men fannt det ikke eller oppdaget en feil. <br />Coppermine kan bruke <a href="http://www.imagemagick.org/">ImageMagick</a> \konverteringsprogram for å lage miniatyrbilder. Kvaliteten på bilder produsert av ImageMagick er overlegent GD1 men lik GD2.<br />Hvis ImageMagick er installert på ditt system og du vil bruke det, <br />må du angi hele addressen til konverteringsprogrammet under. <br />På Windows bør adrssen se ut omtrent som \'c:/ImageMagick/\' og bør ikke inneholde mellomrom, på Unix er det noe lignende \'/usr/bin/\'.<br />Hvis  du ikke vet om du har ImageMagick eller ikke, la feltet stå tomt - installasjonsprogrammet vil da forsøke å bruke GD2 som standard (som er det mest vanlige). <br />Du kan forandre dette senare også (i Coppermines konfigurasjonsbilde), så hvis du ikke vet hva du skal fylle inn her - la det så tomt';
$lang_install['im_packages'] = 'Din server støtter følgende bildepakker';
$lang_install['im_path'] = 'Adresse til ImageMagick:';
$lang_install['im_path_space'] = 'Adressen til ImageMagick (\'%s\') innholder minst ett mellomrom. Dette vil forårsake problemer i scriptet.<br />Du må flytte ImageMagick til en annen katalog.';
$lang_install['installation'] = 'installasjon';
$lang_install['installer_locked'] = 'Installasjonsprogrammet er låst';
$lang_install['installer_selected'] = 'Installasjonsprogrammet valgte';
$lang_install['inv_im_path'] = 'Installasjonsprogrammet fant ikke \'%s\' katalogen som du anga for ImageMagick eller så har det ikke tillatelse til det. Kontroller at du skriver rett adresse og at du har tillatelse til den angitte katalogen.';
$lang_install['lets_go'] = 'Då starter vi!';
$lang_install['mysql_create_btn'] = 'Opprett';
$lang_install['mysql_create_db'] = 'Oppret ny MySQL database';
$lang_install['mysql_db_name'] = 'MySQL databasnavn';
$lang_install['mysql_error'] = 'MySQL feil: ';
$lang_install['mysql_host'] = 'MySQL host<br />(localhost er vanligvis OK)';
$lang_install['mysql_username'] = 'MySQL brukernavn'; // cpg1.5
$lang_install['mysql_password'] = 'MySQL passord'; // cpg1.5
$lang_install['mysql_no_create_db'] = 'Kunne ikke opprette MySQL database.';
$lang_install['mysql_no_sel_dbs'] = 'Kunne ikke finne tilgjengelig MySQL database';
$lang_install['mysql_succ'] = 'Tillkopplingen til databasen akseptert';
$lang_install['mysql_tbl_pref'] = 'MySQL tabell prefix';
$lang_install['mysql_test_connection'] = 'Test tilkopling';
$lang_install['mysql_wrong_db'] = 'MySQL kunne ikke lokalisere en database som heter \'%s\' vennligst kontroller den angitte verdi for dette';
$lang_install['n_a'] = 'N/A';
$lang_install['no_admin_email'] = 'Du må oppgi en e-postadresse for administratoren';
$lang_install['no_admin_password'] = 'Du må skrive et passord for administratoren';
$lang_install['no_admin_username'] = 'Du må oppgi ett brukernavn for administratoren';
$lang_install['no_dir'] = 'Katalogen er ikke tillgjenglig';
$lang_install['no_gd'] = 'Din installasjon av PHP inneholder ikke \'GD\' graphic library extension og du har ikke sagt at du vil bruke ImageMagick. Coppermine er konfigurert for å bruke GD2 da den automatiske oppdagelsen av GD iblandt ikke fungerer. Om GD er installert på ditt system, vil scriptet fungere men ellers må du installere ImageMagick.';
$lang_install['no_mysql_conn'] = 'Kunne ikke opprette en MySQL forbindelse, kontroller de angitte MySQL detaljene';
$lang_install['no_mysql_support'] = 'PHP har ikke aktivert MySQL support.';
$lang_install['no_thumb_method'] = 'Du må velge en bildbehandlingsapplikasjon (GD/IM)';
$lang_install['nok'] = 'Ikke OK';
$lang_install['not_here_yet'] = 'Ingen ting her foreløpig, klikk %sher%s for å gå tilbake.';
$lang_install['ok'] = 'OK';
$lang_install['on_q'] = 'på forespørsmål';
$lang_install['or'] = 'eller';
$lang_install['pass_err'] = 'Feil passord.';
$lang_install['password'] = 'Passordord';
$lang_install['password_verif'] = 'Bekreft Passord';
$lang_install['perm_error'] = 'Tilatelsene \'%s\' er satt til %s, venligst sett dem til';
$lang_install['perm_ok'] = 'Tilatelsene til visse kataloger er kontrollert og er OK. <br />Fortsett til neste trinn.';
$lang_install['perm_not_ok'] = 'Tilatelsene til visse kataloger er ikke korrekte.<br /> Forandre tilatelsene på de kataloger nederst som er markert med "Feil".'; // cpg1.5
$lang_install['please_go_back'] = 'Vennligst %sklikk her%s for å gå tillbake og rett opp problemene før du fortsetter.';
$lang_install['populate_db'] = 'Fyll databasen';
$lang_install['ready_to_roll'] = '<a href="index.php">Coppermine</a> er nå riktig konfigurert og klar for å brukes.<br /><a href="login.php">Logg inn</a> gjennom å bruke de opplysninger som du anga for din administratorkonto.';
$lang_install['sect_create_adm'] = 'Dette avsnittet behøver informasjon for å opprette din Coppermine administratorkonto. Bruk bare alfanumeriske tegn. Vær nøyaktig!';
$lang_install['sect_mysql_info'] = 'Dette avsnittet behøver informasjon om tilatelser til MySQL databasen.<br />Hvis du ikke vet hva du skal fylle ut, spør supporten for dit webbhotell.';
$lang_install['sect_mysql_sel_db'] = 'Her må du velge hvilken database du vil bruke for Coppermine.<br />Hvis din MySQL konto har de nødvendige tilatelsene kan du opprette en ny database i installasjonsprogrammet eller du kan bruk en eksisterende database. Hvis du ikke vil noe av dette, må du først opprette en database utenfor Coppermines installasjonsprogram, og siden vende tilbake hit for å velge den nye databasen fra listeruten nedenfor. Du kan også endre tabellprefixet (bruk dog ikke punkter), men det anbefalles at du beholder standardprefixet.';
$lang_install['select_lang'] = 'Velg standardspråk: ';
$lang_install['sql_file_not_found'] = 'Filen \'%s\' fant ikke filen. Kontroller at du har lastet opp alle Copperminefiler til din server.';
$lang_install['status'] = 'Status';
$lang_install['subdir_called'] = 'En underkatalog med navn \'%s\' skal normalt finnes i den katalog der du lastet opp Coppermine.<br />Installasjonsprogrammet kunne ikkee finne denne katalogen. Kontroller at du har lastet opp alle Copperminefiler til din server.';
$lang_install['title_admin'] = 'Opprett Coppermine administrator';
$lang_install['title_dir_check'] = 'Kontrollerer katalogtillatelser';
$lang_install['title_file_check'] = 'Kontrollerer installasjonsfiler';
$lang_install['title_finished'] = 'Installasjonen ferdig';
$lang_install['title_imp'] = 'Bildepakkeutvalg';
$lang_install['title_imp_test'] = 'Tester bildebiblioteket';
$lang_install['title_mysql_db_sel'] = 'MySQL database utvalg';
$lang_install['title_mysql_pop'] = 'Oppretter databasstruktur';
$lang_install['title_mysql_user'] = 'MySQL brukerverifisering';
$lang_install['title_welcome'] = 'Velkommen til Coppermine installeringen';
$lang_install['tmp_conf_error'] = 'Kan ikke skrive til den temporære konfigurasjonsfilen - vær sikker på at \'include\' mappen er skrivbar for scriptet.';
$lang_install['tmp_conf_ser_err'] = 'En alvorlig feil inntraf under installasjonen, forsøk å laste opp på nytt eller start med å ta bort \'include/config.tmp\' filen.';
$lang_install['try_again'] = 'Prøv igjen!';
$lang_install['unable_write_config'] = 'Kan ikke skrive konfigurasjonsfil';
$lang_install['user_err'] = 'Administratorens brukernavn får bare inneholde alfanumeriske tegn og kan ikke være tomt.';
$lang_install['username'] = 'Brukernavn';
$lang_install['your_admin_account'] = 'Din administratorkonto';
$lang_install['no_cookie'] = 'Din webleser aksepterte ikke vår cookie. Det anbefales at cookies aksepteres.';
$lang_install['no_javascript'] = 'Din webleser har ikke Javascript aktivert - det er anbefalt å aktivere det.';
$lang_install['register_globals_detected'] = 'Det virker som om din PHP konfigurasjon har \'register_globals\' aktivert - du bør avaktivere det av sikkerhetshens.';
$lang_install['more'] = 'mer';
$lang_install['version_undetected'] = 'Scriptet kunne ikke avgjøre hvilken %s versjon din server anvender. Velg laveste versjon %s.';
$lang_install['version_incompatible'] = 'Scriptet uppdaget en innkompatibel versjon (%s) av %s på din server.<br />Bruk en kompatibel versjon (%s eller høyere) før du fortsetter!';
$lang_install['read_gif'] = 'Leser/skriver .gif fil';
$lang_install['read_png'] = 'Leser/skriver .png fil';
$lang_install['read_jpg'] = 'Leser/skriver .jpg fil';
$lang_install['write_error'] = 'Kunne ikke skrive generert bilde til disken.';
$lang_install['read_error'] = 'Kunne ikke lese bildekilden.';
$lang_install['combine_error'] = 'Kunne ikke kombinere bildekilden';
$lang_install['text_error'] = 'Kunne ikke legge til tekst til bildekilden';
$lang_install['scale_error'] = 'Kunne ikke skalere bildekilden';
$lang_install['pixels'] = 'pixler';
$lang_install['combine'] = 'Kombiner 2 bilder';
$lang_install['text'] = 'Skriv tekst på bilde';
$lang_install['scale'] = 'Skaler et bilde';
$lang_install['generated_image'] = 'Genererert bilde';
$lang_install['reference_image'] = 'Referansebilde';
$lang_install['imp_test_error'] = 'Det oppsto en feil i en eller flere tester, kontroller at du valgte beste brukbare bildbehandlingspakkke og at det er rett konfigurert!';
$lang_install['writable'] = 'Skrivbar';
$lang_install['not_writable'] = 'Ikke skrivbar';
$lang_install['not_exist'] = 'Finnes ikke';
$lang_install['old_install'] = 'Dette er den nye installasjonsguiden. Klikk %sher%s for den klassiske installasjonsbildet.'; //cpg1.5
}

// ------------------------------------------------------------------------- //
// File keywordmgr.php
// ------------------------------------------------------------------------- //
if (defined('KEYWORDMGR_PHP')) {
$lang_keywordmgr_php['title'] = 'Behandle nøkkelord';
$lang_keywordmgr_php['search'] = 'Søk';
$lang_keywordmgr_php['keyword_test_search'] = 'Søk etter %s i nytt vindu';
$lang_keywordmgr_php['keyword_del'] = 'Slett nøkkelordet %s';
$lang_keywordmgr_php['confirm_delete'] = 'Er du sikker på at du vil slette nøkkelordet %s overalt i galleriet?'; // js-alert
$lang_keywordmgr_php['change_keyword'] = 'EndrE nøkkelord';
}

// ------------------------------------------------------------------------- //
// File langmgr.php
// ------------------------------------------------------------------------- //
if (defined('LANGMGR_PHP')) {
$lang_langmgr_php['title'] = 'Behandle språk';
$lang_langmgr_php['english_language_name'] = 'Engelsk';
$lang_langmgr_php['native_language_name'] = 'Morsmål';
$lang_langmgr_php['custom_language_name'] = 'Tilpass';
$lang_langmgr_php['language_name'] = 'Språkets navn';
$lang_langmgr_php['language_file'] = 'Språkfil';
$lang_langmgr_php['flag'] = 'Flagg';
$lang_langmgr_php['file_available'] = 'Tilgjengelig';
$lang_langmgr_php['enabled'] = 'Aktivert';
$lang_langmgr_php['complete'] = 'Komplett';
$lang_langmgr_php['default'] = 'Standard';
$lang_langmgr_php['missing'] = 'Mangler';
$lang_langmgr_php['broken'] = 'Utilgjenngelig eller ødlagt';
$lang_langmgr_php['exists_in_db_and_file'] = 'finnes i databasen som fil';
$lang_langmgr_php['exists_as_file_only'] = 'finnes bare som fil';
$lang_langmgr_php['pick_a_flag'] = 'Velg en';
$lang_langmgr_php['replace_x_with_y'] = 'Erstatt %s med %s';
$lang_langmgr_php['tanslator_information'] = 'Oversettingsinformasjon';
$lang_langmgr_php['cpg_version'] = 'Coppermine versjon';
$lang_langmgr_php['hide_details'] = 'Skjul detaljer';
$lang_langmgr_php['show_details'] = 'Vis detaljer';
$lang_langmgr_php['loading'] = 'Laster';
$lang_langmgr_php['english_missing'] = 'Engelsk språk mangler tiltross for at det aldri skal fjernes. Du bør laste det inn umiddelbart.';
$lang_langmgr_php['enable_at_least_one'] = 'Du må aktivere minst ett språk for at galleriet ska fungere';
$lang_langmgr_php['enable_default'] = 'Du har valgt et standardspråk som ikke er aktivert. Velg et annet standardspråk eller aktiver det du valgte som standard!';
$lang_langmgr_php['available_default'] = 'Du har valgt et standardspråk som ikke er tilgjengelig. Velg et annet standardspråk!';
$lang_langmgr_php['version_does_not_match'] = 'Versjonen av denne filen overenstemmer ikke med din Coppermine versjon. Bruk med forsiktighet og test nøye!';
$lang_langmgr_php['no_version'] = 'Ingen versjonsinformasjon finnes. Det er mulig at dette språkalternativet ikke fungerer eller ikke er en språkfil.';
$lang_langmgr_php['filesize'] = 'Filstørrelsen %s er usansynelig';
$lang_langmgr_php['content_missing'] = 'Filen ser ut til å kke inneholde data, så det er trolig ikke en gyldig språkfil.';
$lang_langmgr_php['status'] = 'Status';
$lang_langmgr_php['default_language'] = 'Standardspråk er satt til %s';
}

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //
if (defined('LOGIN_PHP')) {
$lang_login_php['login'] = 'Logg inn';
$lang_login_php['enter_login_pswd'] = 'Skriv ditt brukernavn og passord for å logge inn';
$lang_login_php['username'] = 'Brukernavn';
$lang_login_php['email'] = 'E-postadresse'; // cpg1.5
$lang_login_php['both'] = 'Brukernavn eller E-postadresse'; // cpg1.5
$lang_login_php['password'] = 'Passord';
$lang_login_php['remember_me'] = 'Husk meg';
$lang_login_php['welcome'] = 'Velkommen %s ...';
$lang_login_php['err_login'] = 'Inloggingen misslykkes. Forsøk igjen.';
$lang_login_php['err_already_logged_in'] = 'Du er allerede logget inn!';
$lang_login_php['forgot_password_link'] = 'Jeg har glemt mitt passord';
$lang_login_php['cookie_warning'] = 'Advarsel - din webleser godtar ikke script cookies';
$lang_login_php['send_activation_link'] = 'Mistet aktiveringslinken?';
$lang_login_php['force_login'] = 'Du må logge inn for å se denne siden'; // cpg1.5
$lang_login_php['force_login_title'] = 'Logg inn for å fortsette'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) {
$lang_logout_php['logout'] = 'Logg ut';
$lang_logout_php['bye'] = 'Farvel Farvel %s ...';
$lang_logout_php['err_not_logged_in'] = 'Du er ikkee logget inn!'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File minibrowser.php
// ------------------------------------------------------------------------- //
if (defined('MINIBROWSER_PHP')) {
$lang_minibrowser_php['up'] = 'opp et nivå';
$lang_minibrowser_php['current_path'] = 'nåværende adresse';
$lang_minibrowser_php['select_directory'] = 'Velg en katalog';
$lang_minibrowser_php['click_to_close'] = 'Klikk på bildet for å lukke vinduet';
$lang_minibrowser_php['folder'] = 'Mappe'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File mode.php
// ------------------------------------------------------------------------- //
if (defined('MODE_PHP')) {
$lang_mode_php[0] = 'Skjuler Admin-verktøy...'; // cpg1.5
$lang_mode_php[1] = 'Viser Admin-Verktøy...'; // cpg1.5
$lang_mode_php['news_hide'] = 'Skjuler nyheter...'; // cpg1.5
$lang_mode_php['news_show'] = 'Viser nyheter...'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //
if (defined('MODIFYALB_PHP')) {
$lang_modifyalb_php['upd_alb_n'] = 'Oppdater album %s';
$lang_modifyalb_php['related_tasks'] = 'Relaterte oppgaver'; // cpg1.5
$lang_modifyalb_php['choose_album'] = 'Velg album'; // cpg1.5
$lang_modifyalb_php['general_settings'] = 'Hovedinnstillinger';
$lang_modifyalb_php['alb_title'] = 'Album tittel';
$lang_modifyalb_php['alb_cat'] = 'Album kategori';
$lang_modifyalb_php['alb_desc'] = 'Album beskrivelse';
$lang_modifyalb_php['alb_keyword'] = 'Album nøkkelord';
$lang_modifyalb_php['alb_thumb'] = 'Album miniatyrbilde';
$lang_modifyalb_php['alb_perm'] = 'Tillatelser for dette album';
$lang_modifyalb_php['can_view'] = 'Album kan sees av';
$lang_modifyalb_php['can_upload'] = 'gjester kan laste opp filer';
$lang_modifyalb_php['can_post_comments'] = 'gjester kan skrive kommentarer';
$lang_modifyalb_php['can_rate'] = 'gjester kan stemme på filer';
$lang_modifyalb_php['user_gal'] = 'Brukergalleri';
$lang_modifyalb_php['my_gal'] = '* Mit Galleri *'; // cpg 1.5
$lang_modifyalb_php['no_cat'] = '* Ingen kategori *';
$lang_modifyalb_php['alb_empty'] = 'Albumet er tomt';
$lang_modifyalb_php['last_uploaded'] = 'Siste opplastinger';
$lang_modifyalb_php['public_alb'] = 'Alle (offentlige album)';
$lang_modifyalb_php['me_only'] = 'Bare meg';
$lang_modifyalb_php['owner_only'] = 'Albumets eier (%s) kun';
$lang_modifyalb_php['group_only'] = 'Medlemmer av \'%s\' gruppen';
$lang_modifyalb_php['err_no_alb_to_modify'] = 'Ingen album du kan endre i databasen.';
$lang_modifyalb_php['update'] = 'Oppdater album';
$lang_modifyalb_php['reset_album'] = 'Nullstill album';
$lang_modifyalb_php['reset_views'] = 'Nullstill visningstelleren til &quot;0&quot; i %s';
$lang_modifyalb_php['reset_rating'] = 'Nullstill stemmer på alle filer i %s';
$lang_modifyalb_php['delete_comments'] = 'Slett alle kommentarer gjort i %s';
$lang_modifyalb_php['delete_files'] = 'Slett%s ugjennkallelig%s alle filer i %s';
$lang_modifyalb_php['views'] = 'visninger';
$lang_modifyalb_php['votes'] = 'stemmer';
$lang_modifyalb_php['comments'] = 'kommentarer';
$lang_modifyalb_php['files'] = 'filer';
$lang_modifyalb_php['submit_reset'] = 'utfør endringer';
$lang_modifyalb_php['reset_views_confirm'] = 'Jeg er sikker';
$lang_modifyalb_php['notice1'] = '(*) Avhengig av %sGruppe%s innstillinger'; //(do not translate %sgroups%s!)
$lang_modifyalb_php['can_moderate'] = 'Album kan endres av'; // cpg 1.5
$lang_modifyalb_php['admins_only'] = 'Kun administrator'; // cpg 1.5
$lang_modifyalb_php['alb_password'] = 'Album passord (Nytt passord)';
$lang_modifyalb_php['alb_password_hint'] = 'Album passordspåminnelse';
$lang_modifyalb_php['edit_files'] = 'Rediger filer';
$lang_modifyalb_php['parent_category'] = 'Hovedkategori';
$lang_modifyalb_php['thumbnail_view'] = 'Miniatyrbildvisning';
$lang_modifyalb_php['random_image'] = 'Tilfeldig bilde'; // cpg 1.5
$lang_modifyalb_php['password_protect'] = 'Passordbeskytt dette album (Fyll ut for ja)'; //cpg1.5
}
// ------------------------------------------------------------------------- //
// File phpinfo.php
// ------------------------------------------------------------------------- //
if (defined('PHPINFO_PHP')) {
$lang_phpinfo_php['php_info'] = 'PHP info';
$lang_phpinfo_php['explanation'] = 'Dette er informasjon generert av PHP funksjonen <a href="http://www.php.net/phpinfo">phpinfo()</a>, synlig i Coppermine.';
$lang_phpinfo_php['no_link'] = 'Å la andre se din PHP-info kan innebære en sikkerhetsrisiko, derfor er denne siden bare synlig når du er innlogget som administrator. Du kan ikke sende en link til denne siden til andre, de vil nektes adgang.';
}

// ------------------------------------------------------------------------- //
// File picmgr.php
// ------------------------------------------------------------------------- //
if (defined('PICMGR_PHP')) {
$lang_picmgr_php['pic_mgr'] = 'Behandle Bilder';
$lang_picmgr_php['confirm_modifs'] = 'Vil du virklig gjøre disse endringene?'; // cpg1.5 // js-alert
$lang_picmgr_php['no_change'] = 'Du gjorde ingen endringer!';
$lang_picmgr_php['no_album'] = '* Ingen album *';
$lang_picmgr_php['explanation_header'] = 'Den brukersorterte sorteringsorden vil kun bli utført hvis';
$lang_picmgr_php['explanation1'] = 'administrator har satt "Standard sorteringsordning for filer" i konfigurasjonen til "Posisjon fallende" eller "Posisjon stigende" (global innstilling for alle brukere som ikke har valgt en annen individuell sorteringsrekkefølge)';
$lang_picmgr_php['explanation2'] = 'brukeren har valgt "Posisjon fallende" eller "Posisjon stigende" på miniatyrbildesiden (innstilling pr. bruker)';
$lang_picmgr_php['change_album'] = 'Hvis du endrer albumet vil dine endringer mistes!'; // cpg1.5 // js-alert
$lang_picmgr_php['submit_reminder'] = 'Sorteringsendringer lagres ikke før du klikker på &quot;Lagre endringer&quot;.'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File pluginmgr.php
// ------------------------------------------------------------------------- //
if (defined('PLUGINMGR_PHP')){
$lang_pluginmgr_php['confirm_uninstall'] = 'Er du sikker på at du vil AVINSTALLERE denne plugin-modul?';
$lang_pluginmgr_php['confirm_remove'] = 'Bemerk: plugin-modulens API er deaktivert. Vil du MANUELLT SLETTE denne plugin-modul, og ignorere alle rensingsmuligheter?'; // cpg1.5
$lang_pluginmgr_php['confirm_delete'] = 'Er du sikker på at du vil SLETTE denne plugin-modul?';
$lang_pluginmgr_php['pmgr'] = 'Behandle plugin-moduler';
$lang_pluginmgr_php['explanation'] = 'Installer / avinstaller / behandle plugin-moduler ved hjelp av denne side.'; // cpg1.5
$lang_pluginmgr_php['plugin_enabled'] = 'Plugin-modulens API aktivert'; // cpg1.5
$lang_pluginmgr_php['name'] = 'Navn';
$lang_pluginmgr_php['author'] = 'Forfatter';
$lang_pluginmgr_php['desc'] = 'Beskrivelse';
$lang_pluginmgr_php['vers'] = 'v';
$lang_pluginmgr_php['i_plugins'] = 'Installerte plugin-moduler';
$lang_pluginmgr_php['n_plugins'] = 'Ikke installerte plugin-moduler';
$lang_pluginmgr_php['none_installed'] = 'Ingen installert';
$lang_pluginmgr_php['operation'] = 'Operasjon';
$lang_pluginmgr_php['not_plugin_package'] = 'Den opplastede filen er ikke en plugin-modulspakke.';
$lang_pluginmgr_php['copy_error'] = 'Det oppsto en feil ved kopiering av pakken til plugin-modulens mappe.';
$lang_pluginmgr_php['upload'] = 'Last opp';
$lang_pluginmgr_php['configure_plugin'] = 'Konfigurer plugin-modul';
$lang_pluginmgr_php['cleanup_plugin'] = 'Rens plugin-modul';
$lang_pluginmgr_php['extra'] = 'Ekstra'; // cpg1.5
$lang_pluginmgr_php['install_info'] = 'Installeringsinformasjon'; // cpg1.5
$lang_pluginmgr_php['plugin_disabled_note'] = 'Plugin-modulens API er inaktivert, så funksjonen er ikke tilatt.'; // cpg1.5
$lang_pluginmgr_php['install'] = 'installer'; // cpg1.5
$lang_pluginmgr_php['uninstall'] = 'avinstaller'; // cpg1.5
$lang_pluginmgr_php['minimum_requirements_not_met'] = 'Minimumskravene er ikke oppfylt'; // cpg1.5
$lang_pluginmgr_php['confirm_version'] = 'Kunne ikke avgjøre versjonens krav for denne plugin-modul. Det er vanligvis et tegn på at den ikke er designet for å kjøres på din versjon av Coppermine, og kan derfor skade ditt galleri. Fortsett alikevel? (anbefales ikke)?'; // cpg1.5 // js-alert
}

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //
if (defined('RATEPIC_PHP')) {
$lang_rate_pic_php['already_rated'] = 'Du har allerede stemt på denne filen';
$lang_rate_pic_php['rate_ok'] = 'Din stemme er lagt til';
$lang_rate_pic_php['forbidden'] = 'Du kan ikke stemme på dine egne filer.';
}

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //
if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {
$lang_register_php['disclamer'] = <<< EOT
Administratorene av {SITE_NAME} vil forsøke å fjerne eller redigere alt støtede matriale så fort som mulig. Det er umulig å kontrollere hver eneste post. Derfor må du forstå at alle innlegg som legges inn her utrykker synspunker og holdninger er forfatterens og ikke administratorenes ansvar (untagen innlegg gjort av dem selv), og at de derfor ikke kan holdes ansvarlige for alle innlegg.<br />
<br />
Du aksepterer å ikke skrive innlegg som er krenkende, obskjøne, vulgære, hatefulle, truende eller inneholder porno eller annet som strider mot gjellende lover. Du aksepterer at administratorer og moderatorer forg {SITE_NAME} har rett til å fjerne eller redigere hver kommentar når som helst slik at det er i overenstemmelse med overståen. Som bruker aksepterer du at den informasjonen som du har gitt lagres i en database. Denne informasjonen vil ikke bli tilgjengelig for noen tredje part uten ditt samtykke.  Administratorer kan ikke holdes ansvarlige for forsøk på hacking som kan forårsake at informasjonen spres.<br />
<br />
Denne webplass bruker cookies for å lagre informasjon på din datamaskin. Disse cookies eneste hensikt er å forbedre din bildeopplevelse. E-postadressen brukes bare for å bekrefte dine registreringsopplysninger og ditt passord.<br />
<br />
Ved å klikke på 'Jeg godkjenner' under, så aksepterer du disse betingelser.
EOT;
$lang_register_php['page_title'] = 'Brukerregistrering';
$lang_register_php['term_cond'] = 'Vilkår';
$lang_register_php['i_agree'] = 'Jeg godkjenner';
$lang_register_php['submit'] = 'Send registreringen';
$lang_register_php['err_user_exists'] = 'Det brukernavnet du valgte er allerede opptatt, velg et annet';
$lang_register_php['err_global_pw'] = 'Ugyldig globalt registreringspassord'; // cpg1.5
$lang_register_php['err_global_pass_same'] = 'Ditt passord bør ikke være det samme som det globale passordet'; // cpg1.5
$lang_register_php['err_duplicate_email'] = 'En annen bruker har allerede registrert seg med den e-postadresse du har angitt';
$lang_register_php['err_disclaimer'] = 'Du må godkjenne vilkårene'; // cpg1.5
$lang_register_php['enter_info'] = 'Tast inn registreringsinformasjon';
$lang_register_php['required_info'] = 'obligatorisk informasjon';
$lang_register_php['optional_info'] = 'Frivillig informasjon';
$lang_register_php['username'] = 'Brukernavn';
$lang_register_php['password'] = 'Passord';
$lang_register_php['password_again'] = 'Gjenta passord';
$lang_register_php['global_registration_pw'] = 'Global registreringspassord'; // cpg1.5
$lang_register_php['email'] = 'E-post';
$lang_register_php['location'] = 'Geografisk lokasjon';
$lang_register_php['interests'] = 'Intresser';
$lang_register_php['website'] = 'Hjemmeside';
$lang_register_php['occupation'] = 'Sysselsetting';
$lang_register_php['error'] = 'FEIL';
$lang_register_php['confirm_email_subject'] = '%s - Registreringsbekreftelse';
$lang_register_php['information'] = 'Informasjon';
$lang_register_php['failed_sending_email'] = 'Registreringsbekreftelse via e-post kunne ikke sendes!';
$lang_register_php['thank_you'] = 'Takk for din registrering.<br />En e-post med informasjon om hvordan du aktiverer din konto er sendt til den e-postadresse som du anga.';
$lang_register_php['acct_created'] = 'Din konto er opprettet og du kan nå logge inn med ditt brukernavn og passord';
$lang_register_php['acct_active'] = 'Din konto er nå aktivert og du kan logge inn med ditt brukernavn og passord';
$lang_register_php['acct_already_act'] = 'Kontoen er aktivert!';
$lang_register_php['acct_act_failed'] = 'Denne konto kan ikke aktiveres!';
$lang_register_php['err_unk_user'] = 'Valgt bruker finnes ikke!';
$lang_register_php['x_s_profile'] = '%s\'s profil';
$lang_register_php['group'] = 'Gruppe';
$lang_register_php['reg_date'] = 'Registreringsdato';
$lang_register_php['disk_usage'] = 'Diskforbruk';
$lang_register_php['change_pass'] = 'Forandre passord';
$lang_register_php['current_pass'] = 'Nåværende passord';
$lang_register_php['new_pass'] = 'Nytt passord';
$lang_register_php['new_pass_again'] = 'Nytt passord igjen';
$lang_register_php['err_curr_pass'] = 'Nåværende passord er feil';
$lang_register_php['change_pass'] = 'Forandre mitt passord';
$lang_register_php['update_success'] = 'Din profil er oppdatert';
$lang_register_php['pass_chg_success'] = 'Ditt passord er endret';
$lang_register_php['pass_chg_error'] = 'Ditt passord ble ikke endret';
$lang_register_php['notify_admin_email_subject'] = '%s - Melding om registrering';
$lang_register_php['last_uploads'] = 'Siste opplastede fil'; // cpg1.5
$lang_register_php['last_uploads_detail'] = 'Klikk her for å se alle opplastinger gjort av %s'; // cpg1.5
$lang_register_php['last_comments'] = 'Siste kommentar'; // cpg1.5
$lang_register_php['you'] = 'du'; // cpg1.5
$lang_register_php['last_comments_detail'] = 'Klikk her for å se alle kommentarer gjort av %s'; // cpg1.5
$lang_register_php['notify_admin_email_body'] = 'En ny bruker med brukernavn "%s" har registert seg i ditt galleri';
$lang_register_php['pic_count'] = 'opplastede filer';
$lang_register_php['notify_admin_request_email_subject'] = '%s - Registreringsanmodning';
$lang_register_php['thank_you_admin_activation'] = 'Takk.<br />Din anmodning om kontoaktivering er sendt til administrator. Du kommer til å få en e-post når/hvis aktiveringen er godkjendt.';
$lang_register_php['acct_active_admin_activation'] = 'Kontoen er nå aktiv og en e-post er sendt til brukeren.';
$lang_register_php['notify_user_email_subject'] = '%s - medelse om aktivering';
$lang_register_php['delete_my_account'] = 'Slett min brukerkonto'; // cpg1.5
$lang_register_php['warning_delete'] = 'Advarsel: sletting av kontoen kan ikke omgjøres. De %sfiler du lastet opp%s til offentlige album og %sdine kommentarer%s slettes ikke når din konto slettes! De filer du lastet opp til ditt personlige galleri kommer til å bli slettet.'; // cpg1.5 // The %s-placeholders mustn't be removed, they will later be replaced by the wrappers for the links
$lang_register_php['i_am_sure'] = 'Jeg er sikker på at jeg vil slette min konto'; // cpg1.5
$lang_register_php['really_delete'] = 'Er du sikker på at du vil slette din konto?'; // cpg1.5 // js-alert
$lang_register_php['edit_xs_profile'] = 'Rediger profilen %s'; // cpg1.5
$lang_register_php['edit_my_profile'] = 'Rediger min profil'; // cpg1.5
$lang_register_php['none'] = 'ingen'; // cpg1.5
$lang_register_php['user_name_banned'] = 'Det brukernavnet du valgte er ugyldig/blokkert. Velg et annet brukernavn'; // cpg1.5
$lang_register_php['email_address_banned'] = 'Du er blokkert fra dette galleriet, og får ikke registrere deg igjen. farvel!'; // cpg1.5
$lang_register_php['email_warning1'] = 'E-postadressen må fylles ut!'; // cpg1.5
$lang_register_php['email_warning2'] = 'Den e-postadresse du oppga er ugyldig. Kontroller!'; // cpg1.5
$lang_register_php['username_warning1'] = 'Brukernavn må fylles inn!'; // cpg1.5
$lang_register_php['username_warning2'] = 'Brukernavn må være minst to tegn!'; // cpg1.5
$lang_register_php['password_warning1'] = 'Pssordet må være minst to tegn!'; // cpg1.5
$lang_register_php['password_warning2'] = 'Brukernavn og passord må være forskjellige!'; // cpg1.5
$lang_register_php['password_verification_warning1'] = 'De to passordene er ikke like, skriv inn på nytt!'; // cpg1.5
$lang_register_php['form_not_submit'] = 'Formulæret er ikke sendt - det finnes feil som du må rette først!'; // cpg1.5
$lang_register_php['banned'] = 'Blokkert!'; // cpg1.5

$lang_register_php['confirm_email'] = <<< EOT
Takk for at du registrerer deg på {SITE_NAME}

For å aktivere din konto med brukernavn "{USER_NAME}", må du klikke på linken under eller kopiere den og lime den inn i din weblesers adressefelt.
<a href="{ACT_LINK}">{ACT_LINK}</a>

Mvh.,

{SITE_NAME}

EOT;

$lang_register_approve_email = <<< EOT
En ny bruker med brukernavn "{USER_NAME}" har registrert seg i ditt galleri.
For å aktivere kontoen må du klikke på linken under under eller kopiere den og lime den inn i din weblesers adressefelt.

<a href="{ACT_LINK}">{ACT_LINK}</a>

EOT;

$lang_register_php['activated_email'] = <<< EOT
Din konto er godkjent og aktivert.

Du kan nå logge inn på <a href="{SITE_LINK}">{SITE_LINK}</a> med ditt brukernavn "{USER_NAME}"

Mvh.

{SITE_NAME}

EOT;
}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //
if (defined('REVIEWCOM_PHP')) {
$lang_reviewcom_php['title'] = 'Kommentaroversikt';
$lang_reviewcom_php['no_comment'] = 'Det er ingen kommentarer å vise';
$lang_reviewcom_php['n_comm_del'] = '%s kommentar(er) slettet';
$lang_reviewcom_php['n_comm_disp'] = 'Antall kommentarer å vise';
$lang_reviewcom_php['see_prev'] = 'Se foregående';
$lang_reviewcom_php['see_next'] = 'Se neste';
$lang_reviewcom_php['del_comm'] = 'Slett markerte kommentarer';
$lang_reviewcom_php['user_name'] = 'Navn';
$lang_reviewcom_php['date'] = 'Dato';
$lang_reviewcom_php['comment'] = 'Kommentar';
$lang_reviewcom_php['file'] = 'Fil';
$lang_reviewcom_php['name_a'] = 'Brukernavn stigende';
$lang_reviewcom_php['name_d'] = 'Brukernavn fallende';
$lang_reviewcom_php['date_a'] = 'Dato stigende';
$lang_reviewcom_php['date_d'] = 'Dato fallende';
$lang_reviewcom_php['comment_a'] = 'Kommentarbeskjed stigende';
$lang_reviewcom_php['comment_d'] = 'Kommentarbeskjed fallende';
$lang_reviewcom_php['file_a'] = 'Fil stigende';
$lang_reviewcom_php['file_d'] = 'Fil fallende';
$lang_reviewcom_php['approval_a'] = 'Godkjent stigende'; // cpg1.5
$lang_reviewcom_php['approval_d'] = 'Godkjent fallende'; // cpg1.5
$lang_reviewcom_php['ip_a'] = 'IP adresse stigende'; // cpg1.5
$lang_reviewcom_php['ip_d'] = 'IP adresse fallende'; // cpg1.5
$lang_reviewcom_php['akismet_a'] = 'Akismet atest (gyldige kommentarer nederst)'; // cpg1.5
$lang_reviewcom_php['akismet_d'] = 'Akismet atest (gyldige kommentarer øverst)'; // cpg1.5
$lang_reviewcom_php['n_comm_appr'] = '%s godkjent(a) kommentar(er)'; // cpg1.5
$lang_reviewcom_php['n_comm_unappr'] = '%s avist(e) kommentar(er)'; // cpg1.5
$lang_reviewcom_php['configuration_changed'] = 'Godkjennelseskonfigurasjonen endret'; // cpg1.5
$lang_reviewcom_php['only_approval'] = 'vis bare kommentarer som behøver godkjennes'; // cpg1.5
$lang_reviewcom_php['approval'] = 'Godkjennt'; // cpg1.5
$lang_reviewcom_php['save_changes'] = 'lagre endringer'; // cpg1.5
$lang_reviewcom_php['n_confirm_delete'] = 'Vil du virklig slette markert(e) kommentar(er)?'; // cpg1.5
$lang_reviewcom_php['with_selected'] = 'Markerte'; // cpg1.5
$lang_reviewcom_php['delete'] = 'Slett'; // cpg1.5
$lang_reviewcom_php['approve'] = 'Godkjenn'; // cpg1.5
$lang_reviewcom_php['disapprove'] = 'Merk som avist'; // cpg1.5
$lang_reviewcom_php['do_nothing'] = 'Gjør inngenting'; // cpg1.5
$lang_reviewcom_php['comment_approved'] = 'Kommentar godkjennt'; // cpg1.5
$lang_reviewcom_php['comment_unapproved'] = 'Kommentar markert som avist'; // cpg1.5
$lang_reviewcom_php['ban_and_delete'] = 'Blokker brukere og slett kommentar(er)'; // cpg1.5
$lang_reviewcom_php['akismet_status'] = 'Akismet sa'; // cpg1.5
$lang_reviewcom_php['is_spam'] = 'er spam'; // cpg1.5
$lang_reviewcom_php['is_not_spam'] = 'er ikke spam'; // cpg1.5
$lang_reviewcom_php['akismet'] = 'Akismet'; // cpg1.5
$lang_reviewcom_php['akismet_count'] = 'Akismet har foreløpig funnet %s spam-meldinger'; // cpg1.5
$lang_reviewcom_php['akismet_test_result'] = 'Testresultat for din Akismet API nøkkel %s'; // cpg1.5
$lang_reviewcom_php['invalid'] = 'ugyldig'; // cpg1.5
$lang_reviewcom_php['missing_gallery_url'] = 'Du må angi en webadresse (URL) til galleriet i din Coppermine\'s konfigarasjon'; // cpg1.5
$lang_reviewcom_php['unable_to_connect'] = 'Kan ikke kople til akismet.com'; // cpg1.5
$lang_reviewcom_php['not_found'] = 'Måladressen (URL) misslykkes. Kanske har katalogstrukturen på akismet.com blitt endret.'; // cpg1.5
$lang_reviewcom_php['unknown_error'] = 'Ukjent feil'; // cpg1.5
$lang_reviewcom_php['error_message'] = 'Feilmeldingen var'; // cpg1.5
$lang_reviewcom_php['ip_address'] = 'IP adresse'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File sidebar.php
// ------------------------------------------------------------------------- //
if (defined('SIDEBAR_PHP')) {
$lang_sidebar_php['sidebar'] = 'Sidepanel'; // cpg1.5
$lang_sidebar_php['install'] = 'installer'; // cpg1.5
$lang_sidebar_php['install_explain'] = 'Blandt mange smarte metoder for å komme ti sider og informasjon hurtig, tilbyr  vi sidepaneler for de mest populære webblesere som benyttes på ulike operativsystem. Her kan du finne innstillinger og informasjon om installering og avinstallering for støttede webblesre.'; // cpg1.5
$lang_sidebar_php['os_browser_detect'] = 'Identifiserer dit operativsystem og din webleser'; // cpg1.5
$lang_sidebar_php['os_browser_detect_explain'] = 'Scriptet prøver å identifisere ditt operativsystem- og din webblesers versjon - vennligst vent et øyeblikk. Om identifiseringen misslykkes, vil du kanske %svise%s de mulige installasjonsvalg for sidepaneler manuellt.'; // cpg1.5
$lang_sidebar_php['mozilla'] = 'Mozilla, Firefox, Netscape 6+, Konqueror 3.2+'; // cpg1.5
$lang_sidebar_php['mozilla_explain'] = 'Om du bruker Mozilla 0.9.4 eller høyere, så kan du %slegge til ditt sidepanel til ditt sett%s. Du kan avinstallere sidepanelet ved å bruke "Tilpass sidepanel" funksjonen i Mozilla.'; // cpg1.5
$lang_sidebar_php['ie_mac'] = 'Internet Explorer 5 eller høyere på Mac OS'; // cpg1.5
$lang_sidebar_php['ie_mac_explain'] = 'Hvis du bruker Internet Explorer 5 eller høyere på MacOS, %s oppne vår sidepanelssidae%s i et separat vindu. I dette vinduet, åpne "Page Holder" tabularet på vinduets venstre side. Klikk på "Add". Hvis du vil lagre det for senere bruk klikk på "Favorites" og marker "Legg til i favoritter".'; // cpg1.5
$lang_sidebar_php['ie_win'] = 'Internet Explorer 5 og høyere i Windows'; // cpg1.5
$lang_sidebar_php['ie_win_explain'] = 'Hvis du bruker Internet Explorer 5 eller høyere i Windows, kan du legge til sidepanelet til verktøysfeltet Linker eller legge det til dine favoriter og ved å klikke på det kan du se vår panel i stedet for din vanlige søkepanel ved å høyreklikke %sher%s og markere "Legg til i favoritter" fra hurtigmenyen. Denne linken installerer ikke vårt panel som din standardsøkepanel, så ingen forandringer er gjort i ditt system.'; // cpg1.5
$lang_sidebar_php['ie7_win'] = 'Internet Explorer 7 på Windows XP/Vista'; // cpg1.5
$lang_sidebar_php['ie7_win_explain'] = 'Hvis du bruker  Internet Explorer 7 i Windows, kan du legge til en navigerings pop-up til verktøyfeltet Linker eller du kan legge det til dine favoriter og ved å klikke på den kan du se vår panel i stedet for dit vanlige søkepanel ved å høyreklikke %sher%s og markere "Legg til i favoritter" fra hurtigmenyen. I tidligere versjoner av IE var det mulig å legge til et fast sidepanel, men i IE7 kan du ikke gjøre det uten kompliserte forandringer i registret. De anbefales at du bruker en annen webleser om du vil ha et fast sidepanel.'; // cpg1.5
$lang_sidebar_php['opera'] = 'Opera 6 og høyere'; // cpg1.5
$lang_sidebar_php['opera_explain'] = 'Hvis du bruker Opera, kan du %sklikke på denne link for å legge til vår sidepanel til ditt setup%s. Klikk "Vis i panelet". Du kan avinstallere sidepanelene ved å høyreklikke på dens fane og velge "Slett" fra hurtigmenyen.'; // cpg1.5
$lang_sidebar_php['additional_options'] = 'Flere alternativ'; // cpg1.5
$lang_sidebar_php['additional_options_explain'] = 'Hvis du har en annen webleser en hva som er nevnt over, klikk %sher%s for å vise alle sidepanelsalternativ.'; // cpg1.5
$lang_sidebar_php['cannot_add_sidebar'] = 'Sidepanel kan ikke legges til! Din webleser støtter ikke dette!'; // cpg1.5 // js-alert
$lang_sidebar_php['search'] = 'Søk'; // cpg1.5
$lang_sidebar_php['reload'] = 'Last opp igjen'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File search.php
// ------------------------------------------------------------------------- //
if (defined('SEARCH_PHP')){
$lang_search_php['title'] = 'Søk';
$lang_search_php['submit_search'] = 'søk';
$lang_search_php['keyword_list_title'] = 'Nøkkelordsliste';
$lang_search_php['keyword_msg'] = 'Overstående liste dekker ikke alle muligheter. Det ingår ikke ord fra tittler eller beskrivelser. Prøv fulltekstsøking.';
$lang_search_php['edit_keywords'] = 'Rediger nøkkkelord';
$lang_search_php['search in'] = 'Søk i:';
$lang_search_php['ip_address'] = 'IP adress';
$lang_search_php['imgfields'] = 'Søk filer';
$lang_search_php['albcatfields'] = 'Søk i album og kategorier';
$lang_search_php['age'] = 'Alder';
$lang_search_php['newer_than'] = 'Nyere enn';
$lang_search_php['older_than'] = 'Eldre enn';
$lang_search_php['days'] = 'dager';
$lang_search_php['all_words'] = 'Match alle ord (OG)';
$lang_search_php['any_words'] = 'Match noen av ordene (ELLER)';
$lang_search_php['regex'] = 'Match hele uttrykk';
$lang_search_php['album_title'] = 'Album tittler';
$lang_search_php['category_title'] = 'Kategori tittler';
}

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //
if (defined('SEARCHNEW_PHP')) {
$lang_search_new_php['page_title'] = 'Søk nye filer';
$lang_search_new_php['select_dir'] = 'Marker katalog';
$lang_search_new_php['select_dir_msg'] = 'Denne funksjonen lar deg legge til et helt parti med filer som du har lastet opp til severen med FTP.<br />Marker den katalog der du lastet opp dine filer.';
$lang_search_new_php['no_pic_to_add'] = 'Det finnes ingen fil å legge til';
$lang_search_new_php['need_one_album'] = 'Du må ha minst et album for å kunne bruke denne funksjonen';
$lang_search_new_php['warning'] = 'Advarsel';
$lang_search_new_php['change_perm'] = 'scriptet kan ikke skrive til denne katalogen, du må endre dens rettigheter til 755 eller 777 før du prøver å legge til filer!';
$lang_search_new_php['target_album'] = '<strong>Sett filer av &quot;</strong>%s<strong>&quot; til </strong>%s';
$lang_search_new_php['folder'] = 'Mappe';
$lang_search_new_php['image'] = 'fil';
$lang_search_new_php['result'] = 'Resultat';
$lang_search_new_php['dir_ro'] = 'Ikke skrivbar. ';
$lang_search_new_php['dir_cant_read'] = 'Ikke lesbar. ';
$lang_search_new_php['insert'] = 'Legger til nye filer til galleriet';
$lang_search_new_php['list_new_pic'] = 'Liste over nye filer';
$lang_search_new_php['insert_selected'] = 'Infør markerte filer';
$lang_search_new_php['no_pic_found'] = 'Ingen nye filer ble funnet';
$lang_search_new_php['be_patient'] = 'Ha tålmodighet, scriptet trenger tid for å legge til filene';
$lang_search_new_php['no_album'] = 'ingen album markert';
$lang_search_new_php['result_icon'] = 'klikk for å se detaljer eller for å laste opp på nytt';
$lang_search_new_php['notes'] = <<< EOT
    <ul>
        <li>%s: filen er lagt til</li>
        <li>%s: filen er en dublett og finnes allerede i databasen</li>
        <li>%s: filen kunne ikke legges til, kontroller din konfigurasjon og tilatelsene på de kataloger der filene finnes</li>
        <li>%s: du må markere et album først</li>
        <li>%s: filen er ødlagt eller er utilgjengelig</li>
        <li>%s: ukjent filtype</li>
        <li>%s: filen er faktisk et GIF bilde</li>
        <li>Hvis ikonene ikke vises så klikk på den ødlagte filen for å se eventuelle feilmeldinger fra PHP</li>
        <li>Hvis din webleser får timeout, klikk på oppdater-knappen</li>
    </ul>
EOT;
// Translator note: Do not translate the %s placeholders - they are being replaced with icons
$lang_search_new_php['check_all'] = 'Marker alle';
$lang_search_new_php['uncheck_all'] = 'Fjern alle markeringer';
$lang_search_new_php['no_folders'] = 'Det finnes ingen mapper i "albums" mappen foreløpig. Opprett minst en mappe i "albums" mappen og last opp dine filer dit via FTP. Du får ikke laste opp til "userpics" eller "edit" mappene, disse er reservert for http opplastinger og for interne formål.';
$lang_search_new_php['browse_batch_add'] = 'Lesbart grenssenitt'; // cpg1.5
$lang_search_new_php['display_thumbs_batch_add'] = 'Forhåndsvis miniatyrbilder'; // cpg1.5
$lang_search_new_php['edit_pics'] = 'Rediger filer';
$lang_search_new_php['edit_properties'] = 'Album egenskaper';
$lang_search_new_php['view_thumbs'] = 'Miniatyrbildevisning';
$lang_search_new_php['add_more_folder'] = 'Batch-opplast flere filer fra mappen %s'; // cpg1.5
}

// ------------------------------------------------------------------------- //
//File send_activation.php
// ------------------------------------------------------------------------- //
if (defined('SEND_ACTIVATION_PHP')) {
$lang_send_activation_php['err_already_logged_in'] = 'Du er allerede innlogget!'; // cpg1.5
$lang_send_activation_php['activation_not_required'] = 'Denne websiden krever ikke aktivering via e-post'; // cpg1.5
$lang_send_activation_php['err_unk_user'] = 'Valgt bruker finnes ikke!'; // cpg1.5
$lang_send_activation_php['resend_act_link'] = 'Send aktiveringslinken igjen'; // cpg1.5
$lang_send_activation_php['enter_email'] = 'Skriv din e-postadresse'; // cpg1.5
$lang_send_activation_php['submit'] = 'Gå'; // cpg1.5
$lang_send_activation_php['failed_sending_email'] = 'Det misslykkes å sende aktiveringslinken med e-post'; // cpg1.5
$lang_send_activation_php['activation_email_sent'] = 'Aktiveringslink er sendt med e-post til %s. Vennligst kontroller din e-post for å avslutte prosessen'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File stat_details.php
// ------------------------------------------------------------------------- //

if (defined('STAT_DETAILS_PHP')) {
$lang_stat_details_php['show_hide'] = 'vis/skjul denne kolonnen';
$lang_stat_details_php['title'] = 'Statistikk'; // cpg1.5
$lang_stat_details_php['vote'] = 'Stemmedetaljer';
$lang_stat_details_php['hits'] = 'Treffdetaljer';
$lang_stat_details_php['stats'] = 'Stemmestatistikk';
$lang_stat_details_php['users'] = 'Brukerstatistikk';
$lang_stat_details_php['sdate'] = 'Dato';
$lang_stat_details_php['rating'] = 'vurdering';
$lang_stat_details_php['search_phrase'] = 'Søk i ord';
$lang_stat_details_php['referer'] = 'Henvisning';
$lang_stat_details_php['browser'] = 'Webblesere';
$lang_stat_details_php['os'] = 'Operativsystem';
$lang_stat_details_php['ip'] = 'IP';
$lang_stat_details_php['uid'] = 'Brukere'; // cpg1.5
$lang_stat_details_php['sort_by_xxx'] = 'Sortert på %s';
$lang_stat_details_php['ascending'] = 'stigende';
$lang_stat_details_php['descending'] = 'fallende';
$lang_stat_details_php['internal'] = 'int';
$lang_stat_details_php['close'] = 'lukk';
$lang_stat_details_php['hide_internal_referers'] = 'skjul intern henvisning';
$lang_stat_details_php['date_display'] = 'Datovisning';
$lang_stat_details_php['records_per_page'] = 'poster pr. side';
$lang_stat_details_php['submit'] = 'skicka / oppdater';
$lang_stat_details_php['overall_stats'] = 'Samlet statistikk'; // cpg1.5
$lang_stat_details_php['stats_by_os'] = 'Operativsystemets statistikk'; // cpg1.5
$lang_stat_details_php['number_of_hits'] = 'Antall treff'; // cpg1.5
$lang_stat_details_php['total'] = 'Total'; // cpg1.5
$lang_stat_details_php['stats_by_browser'] = 'Webleser statistikk'; // cpg1.5
$lang_stat_details_php['overall_stats_config'] = 'Vanlig konfigurasjonsstatistikk'; // cpg1.5
$lang_stat_details_php['hit_details'] = 'Behold detaljert treffstatistikk'; // cpg1.5
$lang_stat_details_php['hit_details_explanation'] = 'Behold treffstatistikk'; // cpg1.5
$lang_stat_details_php['vote_details'] = 'Behold detaljert stemmestatistikk'; // cpg1.5
$lang_stat_details_php['vote_details_explanation'] = 'Behold detaljert stemmestatistikk'; // cpg1.5
$lang_stat_details_php['empty_hits_table'] = 'Tøm alle treffstatistikker'; // cpg1.5
$lang_stat_details_php['empty_hits_table_confirm'] = 'Er du absolutt sikker på at du vil slette ALLE treffstatistikkposter for HELE ditt galleri? Dette kan ikke omgjøres!'; // cpg1.5 // js-alert
$lang_stat_details_php['empty_votes_table'] = 'Tøm alle stemmestatistikker'; // cpg1.5
$lang_stat_details_php['empty_votes_table_confirm'] = 'Er du absolutt sikker på at du vil slette ALLE stemmeposter for HELE ditt galleri? Dette kan ikke omgjøres!'; // cpg1.5 // js-alert
$lang_stat_details_php['submit'] = 'Send'; // cpg1.5
$lang_stat_details_php['upd_success'] = 'Coppermine konfigurasjonen oppdateres'; // cpg1.5
$lang_stat_details_php['votes'] = 'stemmer'; // cpg1.5
$lang_stat_details_php['reset_votes_individual'] = 'Nullstill markert(e) stemme(r)'; // cpg1.5
$lang_stat_details_php['reset_votes_individual_confirm'] = 'Er du sikker på at du vil slette markerte stemmer? Dette kan ikke omgjøres!'; // cpg1.5
$lang_stat_details_php['back_to_intermediate'] = 'Tilbake til middelstor bildevisning'; // cpg1.5
$lang_stat_details_php['records_on_page'] = '%s poster på %s side(r)'; // cpg1.5
$lang_stat_details_php['guest'] = 'Gjest'; // cpg1.5
$lang_stat_details_php['not_implemented'] = 'ikke implementert ennå'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //
if (defined('UPLOAD_PHP')) {
$lang_upload_php['title'] = 'Last opp fil';
$lang_upload_php['restrictions'] = 'Begrensninger'; // cpg1.5
$lang_upload_php['choose_method'] = 'Velg opplastingsmetode'; // cpg1.5
$lang_upload_php['upload_swf'] = 'Flere filer - Flash-dreven (anbefales)'; // cpg1.5
$lang_upload_php['upload_single'] = 'enkel - en fil av gangen'; // cpg1.5
$lang_upload_php['up_instr_1'] = 'Marker et album i gardinmenyen';
$lang_upload_php['up_instr_2'] = 'Klikk på "Velg bilde" knappen nedenfor og naviger til den fil du vil laste opp. Du kan velge flere filer om gangen ved å trykke Ctrl+Click.';
$lang_upload_php['up_instr_3'] = 'Marker flere filer å laste opp gjennom å repetere trinn 2';
$lang_upload_php['up_instr_4'] = 'Klikk på "Fortsett" knappen etter at alle dine filer er lastet opp (knappen synes bare når du har lastet opp minst en fil).';
$lang_upload_php['up_instr_5'] = 'Du blir sendt til en side der du kan redigere informasjon om filene du lastet opp. Når du er ferdig, send skjemaet ved å bruke "Lagre endringer" knappen på sluten av skjemaet.';
$lang_upload_php['restriction_zip'] = 'Opplastede ZIP filer vil forbli pakket, de blir ikke utpakket på serveren.';
$lang_upload_php['restriction_filesize'] = 'Størrelsen på filer opplastet fra din datamaskin til serveren må ikke overstige %s pr.fil.';
$lang_upload_php['reg_instr_1'] = 'Ugyldig fremgangsmåte ved opprettelse av skjemaet.';
$lang_upload_php['no_name'] = 'Filnavn mangler'; // cpg 1.5
$lang_upload_php['no_tmp_name'] = 'Kan ikke lastes opp'; // cpg 1.5
$lang_upload_php['no_post'] = 'Filen ble ikke lastet opp av POST.';
$lang_upload_php['forb_ext'] = 'Forbdt filendelse.';
$lang_upload_php['exc_php_ini'] = 'Filstørrelsen er større enn tillatt i php.ini.';
$lang_upload_php['exc_file_size'] = 'Filen er større enn CPG tillater.';
$lang_upload_php['partial_upload'] = 'Bare delvis opplastet.';
$lang_upload_php['no_upload'] = 'Ingen opplasting fant sted.';
$lang_upload_php['unknown_code'] = 'Ukjent PHP opplastingsfeilkode.';
$lang_upload_php['impossible'] = 'Umulig å flytte.';
$lang_upload_php['not_image'] = 'Ikke et bilde/skadd fil';
$lang_upload_php['not_GD'] = 'Ikke en GD endelse.';
$lang_upload_php['pixel_allowance'] = 'Høyden og/eller bredden på det opplastede bildet er større en det gallerikonfigurasjonen tillater.';
$lang_upload_php['failure'] = 'Opplastingsfeil';
$lang_upload_php['no_place'] = 'Den foregående filen kunne ikke plasseres.';
$lang_upload_php['max_fsize'] = 'Største tillatte filstørrelse er %s';
$lang_upload_php['picture'] = 'Fil';
$lang_upload_php['pic_title'] = 'Filtittel';
$lang_upload_php['description'] = 'Filbeskrivelse';
$lang_upload_php['keywords_sel'] = 'Velg et nøkkelord';
$lang_upload_php['err_no_alb_uploadables'] = 'Det finnes desverre ingen album som du har tilatelse til å laste opp filer';
$lang_upload_php['close'] = 'Lukk';
$lang_upload_php['no_keywords'] = 'Desverre finnes ingen nøkkelord tilhjengelig!';
$lang_upload_php['regenerate_dictionary'] = 'Oppdater leksikon';
$lang_upload_php['allowed_types'] = 'Du har tilatelse til å laste opp filer med følgende endelser:'; // cpg1.5
$lang_upload_php['allowed_img_types'] = 'Bilde-endelser: %s'; // cpg1.5
$lang_upload_php['allowed_mov_types'] = 'Video-endelser: %s'; // cpg1.5
$lang_upload_php['allowed_doc_types'] = 'Dokument-endelser: %s'; // cpg1.5
$lang_upload_php['allowed_snd_types'] = 'Lyd-endelser: %s'; // cpg1.5
$lang_upload_php['please_wait'] = 'Vennligst vent mens scripet laster opp - dette kan ta en stund'; // cpg1.5
$lang_upload_php['alternative_upload'] = 'Alternativ opplastingsmetode'; // cpg1.5
$lang_upload_php['xp_publish_promote'] = 'Hvis du har Windows XP/Vista, kan du også bruke XP Upload Wizard for å laste opp filer. Den har ett enklere brukergrensesnitt på din datamaskin.'; // cpg1.5
$lang_upload_php['err_js_disabled'] = 'Grensesnittet Flash upload kunne ikke laste. Du må ha JavaScript aktivert for å  kunne bruke grensesnittet flash upload.'; // cpg1.5
$lang_upload_php['err_flash_disabled'] = 'opplastningsgrensesnittet tar lang tid eller har feilet. Kontroller at Flash plugin-modul er aktivert oge en fungerebde versjon av Flash Player er installert.'; // cpg1.5
$lang_upload_php['err_alternate_method'] = 'Alternativt kan du bruke <a href="upload.php?single=1">enkel</a> filopplastingsgerensesnitt.'; // cpg1.5
$lang_upload_php['err_flash_version'] = 'Opplastingsgrensesnittet feilet. Du må installere eller oppgrader Flash Player. Gå til <a href="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash">Adobe webbsida</a> for å lastened/oppgradere Flash Player.'; // cpg1.5
$lang_upload_php['flash_loading'] = 'opplastingsgrensesnittet kjøres. Vent et øyeblikk...'; // cpg1.5

$lang_upload_swf_php['browse'] = 'Velg bilde...'; //cpg1.5
$lang_upload_swf_php['cancel_all'] = 'Avbryt alle opplastinger'; //cpg1.5
$lang_upload_swf_php['upload_queue'] = 'Opplastingskø'; //cpg1.5
$lang_upload_swf_php['files_uploaded'] = 'Opplastede filer'; //cpg1.5
$lang_upload_swf_php['all_files'] = 'Alle Filer'; //cpg1.5
$lang_upload_swf_php['status_pending'] = 'Aventer...'; //cpg1.5
$lang_upload_swf_php['status_uploading'] = 'Laster opp...'; //cpg1.5
$lang_upload_swf_php['status_complete'] = 'Ferdig.'; //cpg1.5
$lang_upload_swf_php['status_cancelled'] = 'Avbrutt.'; //cpg1.5
$lang_upload_swf_php['status_stopped'] = 'Stoppet.'; //cpg1.5
$lang_upload_swf_php['status_failed'] = 'opplastingen misslykkes.'; //cpg1.5
$lang_upload_swf_php['status_too_big'] = 'Filen er for stor.'; //cpg1.5
$lang_upload_swf_php['status_zero_byte'] = 'Kan ikke laste opp filer med 0 Byte.'; //cpg1.5
$lang_upload_swf_php['status_invalid_type'] = 'Forbudt filtype.'; //cpg1.5
$lang_upload_swf_php['status_unhandled'] = 'Uhåndtert feil'; //cpg1.5
$lang_upload_swf_php['status_upload_error'] = 'Opplastningsfeil: '; //cpg1.5
$lang_upload_swf_php['status_server_error'] = 'Server (IO) Feil'; //cpg1.5
$lang_upload_swf_php['status_security_error'] = 'Sikerhetsfeil'; //cpg1.5
$lang_upload_swf_php['status_upload_limit'] = 'Opplastningsgrense overskredet.'; //cpg1.5
$lang_upload_swf_php['status_validation_failed'] = 'Valideringsfeil. Opplasting avbrutt.'; //cpg1.5
$lang_upload_swf_php['queue_limit'] = 'Du har prøvd å laste opp for filer.'; //cpg1.5
$lang_upload_swf_php['upload_limit_1'] = 'Du har nådd opplastningsgrensen.'; //cpg1.5
$lang_upload_swf_php['upload_limit_2'] = 'Du kan velge opp til %s fil(er)'; //cpg1.5
}

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //
if (defined('USERMGR_PHP')) {
$lang_usermgr_php['memberlist'] = 'Medlemsliste';
$lang_usermgr_php['user_manager'] = 'Behandle brukere';
$lang_usermgr_php['title'] = 'Behandle brukere';
$lang_usermgr_php['name_a'] = 'Navn stigende';
$lang_usermgr_php['name_d'] = 'Navn fallende';
$lang_usermgr_php['group_a'] = 'Gruppe stigende';
$lang_usermgr_php['group_d'] = 'Gruppe fallende';
$lang_usermgr_php['reg_a'] = 'Registreringsdato fallende';
$lang_usermgr_php['reg_d'] = 'Registreringsdato stigende';
$lang_usermgr_php['pic_a'] = 'Filantall stigende';
$lang_usermgr_php['pic_d'] = 'Filantall fallende';
$lang_usermgr_php['disku_a'] = 'Diskforbruk stigende';
$lang_usermgr_php['disku_d'] = 'Diskforbruk fallende';
$lang_usermgr_php['lv_a'] = 'Siste besøk stigende';
$lang_usermgr_php['lv_d'] = 'Siste besøk fallende';
$lang_usermgr_php['sort_by'] = 'Sorter brukere etter';
$lang_usermgr_php['err_no_users'] = 'Brukerrtabellen er tom!';
$lang_usermgr_php['err_edit_self'] = 'Du kan ikke redigere din egen profil, bruk \'Min profil\' til det';
$lang_usermgr_php['with_selected'] = 'Velg:';
$lang_usermgr_php['delete_files_no'] = 'behold offentlige filer (men anonymiser)';
$lang_usermgr_php['delete_files_yes'] = 'slett offentlige filer også';
$lang_usermgr_php['delete_comments_no'] = 'behold kommentarer (men anonymiser)';
$lang_usermgr_php['delete_comments_yes'] = 'slett kommentarer også';
$lang_usermgr_php['activate'] = 'Aktiver';
$lang_usermgr_php['deactivate'] = 'Deaktiver';
$lang_usermgr_php['reset_password'] = 'Nullstill Passord';
$lang_usermgr_php['change_primary_membergroup'] = 'Endre primær brukergruppe';
$lang_usermgr_php['add_secondary_membergroup'] = 'Legg til sekundær brukergruppe';
$lang_usermgr_php['name'] = 'Brukernavn';
$lang_usermgr_php['group'] = 'Gruppen';
$lang_usermgr_php['inactive'] = 'Inaktive';
$lang_usermgr_php['operations'] = 'Opperasjoner';
$lang_usermgr_php['pictures'] = 'Filer';
$lang_usermgr_php['disk_space_used'] = 'Brukt plass';
$lang_usermgr_php['disk_space_quota'] = 'Kvote'; // cpg1.5
$lang_usermgr_php['registered_on'] = 'Registrering';
$lang_usermgr_php['last_visit'] = 'Siste besøk';
$lang_usermgr_php['u_user_on_p_pages'] = '%d brukere på %d side(er)';
$lang_usermgr_php['confirm_del'] = 'Er du sikker på at du vil SLETTE denne brukeren?\\nAlle hans/hennes filer og album blir også slettet.'; // js-alert
$lang_usermgr_php['mail'] = 'EPOST';
$lang_usermgr_php['err_unknown_user'] = 'Valgt bruker finnes ikke!';
$lang_usermgr_php['modify_user'] = 'Forandre brukere';
$lang_usermgr_php['notes'] = 'Noter';
$lang_usermgr_php['note_list'] = 'Hvis du ikke vil forandre nåværende passord, la passordfeltet stå tomt';
$lang_usermgr_php['password'] = 'Passord';
$lang_usermgr_php['user_active'] = 'Brukeren er aktiv';
$lang_usermgr_php['user_group'] = 'Brukergruppe';
$lang_usermgr_php['user_email'] = 'Bruker email';
$lang_usermgr_php['user_web_site'] = 'Brukers webbside';
$lang_usermgr_php['create_new_user'] = 'Opprett ny bruker';
$lang_usermgr_php['user_location'] = 'Brukerens geografisk oppholdsted';
$lang_usermgr_php['user_interests'] = 'Brukerens interesser';
$lang_usermgr_php['user_occupation'] = 'Brukerens sysselsetning';
$lang_usermgr_php['user_profile1'] = '$user_profile1';
$lang_usermgr_php['user_profile2'] = '$user_profile2';
$lang_usermgr_php['user_profile3'] = '$user_profile3';
$lang_usermgr_php['user_profile4'] = '$user_profile4';
$lang_usermgr_php['user_profile5'] = '$user_profile5';
$lang_usermgr_php['user_profile6'] = '$user_profile6';
$lang_usermgr_php['latest_upload'] = 'Siste opplasting';
$lang_usermgr_php['no_latest_upload'] = 'Har ikke lastet opp noen fil'; // cpg1.5
$lang_usermgr_php['last_comments'] = 'Siste kommentarer'; // cpg1.5
$lang_usermgr_php['no_last_comments'] = 'Har ikke skrevet noen kommentarer'; // cpg1.5
$lang_usermgr_php['comments'] = 'Kommentarer'; // cpg1.5
$lang_usermgr_php['never'] = 'aldri';
$lang_usermgr_php['search'] = 'Brukersøking';
$lang_usermgr_php['submit'] = 'Send';
$lang_usermgr_php['search_submit'] = 'OK!';
$lang_usermgr_php['search_result'] = 'Søkeesultat for: ';
$lang_usermgr_php['alert_no_selection'] = 'Du må velge minst en bruker først!'; // js-alert
$lang_usermgr_php['select_group'] = 'Velg gruppe';
$lang_usermgr_php['groups_alb_access'] = 'Album tillatelser pr. gruppe';
$lang_usermgr_php['category'] = 'Kategori';
$lang_usermgr_php['modify'] = 'Endre?';
$lang_usermgr_php['group_no_access'] = 'Denne gruppen har ingen særskilte rettigheter';
$lang_usermgr_php['notice'] = 'Melding';
$lang_usermgr_php['group_can_access'] = 'Album som bare "%s" har adgang til';
$lang_usermgr_php['send_login_data'] = 'Send innloggingsdata til denne brukeren (Passord sendes med e-post)'; // cpg1.5
$lang_usermgr_php['send_login_email_subject'] = 'Din nye kontoinformasjon'; // cpg1.5
$lang_usermgr_php['failed_sending_email'] = 'E-post med innloggingsinformasjon kunne ikke sendes!'; // cpg1.5
$lang_usermgr_php['view_profile'] = 'Se profil'; // cpg1.5
$lang_usermgr_php['edit_profile'] = 'Rediger profil'; // cpg1.5
$lang_usermgr_php['ban_user'] = 'Blokker bruker'; // cpg1.5
$lang_usermgr_php['user_is_banned'] = 'Brukeren er blokkert'; // cpg1.5
$lang_usermgr_php['status'] = 'Status'; // cpg1.5
$lang_usermgr_php['status_active'] = 'aktiv'; // cpg1.5
$lang_usermgr_php['status_inactive'] = 'innaktiv'; // cpg1.5
$lang_usermgr_php['total'] = 'Total'; // cpg1.5
$lang_usermgr_php['send_login_data_email'] = <<< EOT
En ny konto er opprettet for deg på  {SITE_NAME}.

Du kan nå logge inn på <a href="{SITE_LINK}">{SITE_LINK}</a> med brukernavn "{USER_NAME}" og passord "{USER_PASS}"


Mvh.

{SITE_NAME}

EOT;
}

// ------------------------------------------------------------------------- //
// File update.php
// ------------------------------------------------------------------------- //
if (defined('UPDATE_PHP')) {
$lang_update_php['title'] = 'Oppdater'; // cpg1.5
$lang_update_php['welcome_updater'] = 'Velkommen til Coppermine oppdatering'; // cpg1.5
$lang_update_php['could_not_authenticate'] = 'Kunne ikke verifisere deg'; // cpg1.5
$lang_update_php['provide_admin_account'] = 'Vennligst oppgi dine opplysninger om din Coppermine administratorkonto eller din MySQL konto'; // cpg1.5
$lang_update_php['try_again'] = 'Prøv igjen'; // cpg1.5
$lang_update_php['mysql_connect_error'] = 'Kunne ikke kople til MySQL'; // cpg1.5
$lang_update_php['mysql_database_error'] = 'MySQL fant ikke en database med navn %s'; // cpg1.5
$lang_update_php['mysql_said'] = 'MySQL sa'; // cpg1.5
$lang_update_php['check_config_file'] = 'Vennligst kontrollere MySQL detaljene på %s'; // cpg1.5
$lang_update_php['performing_database_updates'] = 'Utfører Database oppdatering'; // cpg1.5
$lang_update_php['performing_file_updates'] = 'Utfører Fil oppdatering'; // cpg1.5
$lang_update_php['already_done'] = 'Allerede utført'; // cpg1.5
$lang_update_php['password_encryption'] = 'Kryptering av passord'; // cpg1.5
$lang_update_php['alb_password_encryption'] = 'Kryptering av album passord'; // cpg1.5
$lang_update_php['category_tree'] = 'Kategoristruktur'; // cpg1.5
$lang_update_php['authentication_needed'] = 'Verifisering må gjøres'; // cpg1.5
$lang_update_php['username'] = 'Brukernavn'; // cpg1.5
$lang_update_php['password'] = 'Passord'; // cpg1.5
$lang_update_php['update_completed'] = 'Oppdateringen er ferdig'; // cpg1.5
$lang_update_php['check_versions'] = 'Det anbefales at du %skontrollerer din filversjon%s hvis du uppgraderer fra en eldre versjon av Coppermine'; // cpg1.5 // Leave the %s untouched when translating - it wraps the link
$lang_update_php['start_page'] = 'Hvis du ikke har kontrollert eller ikke vil kontrollere, kan du gå til %sgalleriets startside%s'; // cpg1.5 // Leave the %s untouched when translating - it wraps the link
$lang_update_php['errors_encountered'] = 'Følgende feil intraff og må rettes først'; // cpg1.5
$lang_update_php['delete_file'] = 'Slett %s'; // cpg1.5
$lang_update_php['could_not_delete'] = 'Kunne ikke slette pga. manglende rettigheter. Slett filen manuellt!'; // cpg1.5
$lang_update_php['rename_file'] = 'Døp om %s til %s'; // cpg1.5
$lang_update_php['could_not_rename'] = 'Kunne ikke døpe om pga. manglende rettigheter. Døp om filen manuellt!'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //
if (defined('UTIL_PHP')) {
$lang_util_php['title'] = 'Administrasjonsverktøy'; // cpg1.5
$lang_util_php['file'] = 'Fil';
$lang_util_php['problem'] = 'Problem';
$lang_util_php['status'] = 'Status';
$lang_util_php['title_set_to'] = 'tittel satt til';
$lang_util_php['submit_form'] = 'send';
$lang_util_php['titles_updated'] = '%s Tittler Oppdatert.'; // cpg1.5
$lang_util_php['updated_successfully'] = 'oppdatert korrekt'; // cpg1.5
$lang_util_php['error_create'] = 'FEIL ved oppretelse av';
$lang_util_php['continue'] = 'Behandle flere filer'; // cpg1.5
$lang_util_php['main_success'] = 'Filen %s brukes som hovedfil';
$lang_util_php['error_rename'] = 'Feil ved omdøping av %s till %s';
$lang_util_php['error_not_found'] = 'Filen %s finnes ikke';
$lang_util_php['back'] = 'tillbake til Administrasjonsverktøyets start'; // cpg1.5
$lang_util_php['thumbs_wait'] = 'Oppdaterer miniatyrbilder og/eller skalerer bilder, vennligst vent...';
$lang_util_php['thumbs_continue_wait'] = 'Fortsetter å oppdatere miniatyrbilder og/eller skalere bilder...';
$lang_util_php['titles_wait'] = 'OppdaterEr tittler, vennligst vent...';
$lang_util_php['delete_wait'] = 'Sletter tittler, vennligst vent...';
$lang_util_php['replace_wait'] = 'Sletter originale og erstatter dem med skalerte bilder, vennligst vent..';
$lang_util_php['update'] = 'Oppdaterer miniatyrbilder og/eller skalerer bilder';
$lang_util_php['update_what'] = 'Hva skal oppdateres';
$lang_util_php['update_thumb'] = 'Bare miniatyrbilder';
$lang_util_php['update_pic'] = 'Bare skalerte bilder';
$lang_util_php['update_both'] = 'Både miniatyrbilder og skalerte bilder';
$lang_util_php['update_number'] = 'Antall behandlede bilder pr. klikk';
$lang_util_php['update_option'] = '(Prøv å stille verien lavere hvis du opplever timeout problemer)';
$lang_util_php['update_missing'] = 'Bare oppdater manglende filer'; // cpg1.5
$lang_util_php['filename_title'] = 'Filnavn &rArr; Fil tittel';
$lang_util_php['filename_how'] = 'Hvordan skal filtittelen endres';
$lang_util_php['filename_remove'] = 'Slett endelsene (.jpg eller annet) og erstatt med _ (underscore) med mellomrom'; // cpg1.5
$lang_util_php['filename_euro'] = 'EndrE 2003_11_23_13_20_20.jpg to 23/11/2003 13:20';
$lang_util_php['filename_us'] = 'Endre 2003_11_23_13_20_20.jpg till 11/23/2003 13:20';
$lang_util_php['filename_time'] = 'Endre 2003_11_23_13_20_20.jpg till 13:20';
$lang_util_php['notitle'] = 'Gjeller bare for filer med tomme tittler'; // cpg1.5
$lang_util_php['delete_title'] = 'Slett filtittler';
$lang_util_php['delete_title_explanation'] = 'Dette vil slette alle tittler på filer i det album du velger.';
$lang_util_php['delete_original'] = 'Slett bilder i originalstørrelse';
$lang_util_php['delete_original_explanation'] = 'Dette vil slette bilder i originalstørrelse.';
$lang_util_php['delete_intermediate'] = 'Slett middelstore bilder';
$lang_util_php['delete_intermediate_explanation1'] = 'Dette vil slette middelstore (normale) bilder.'; // cpg1.5
$lang_util_php['delete_intermediate_explanation2'] = 'Bruk dette for å fristille lagringsplass om du har deaktivert \'Opprett middelstore bilder\' i konfigurasjonen etter at du har lastet opp bilder.'; // cpg1.5
$lang_util_php['delete_intermediate_check'] = 'Konfigurasjonsalternativet \'Oppret middelstore bilder\' er for tiden %s.'; // cpg1.5
$lang_util_php['no_image'] = '%s er droppet da det ikke er et bilde.'; // cpg1.5
$lang_util_php['enabled'] = 'aktivert'; // cpg1.5
$lang_util_php['disabled'] = 'deaktivert'; // cpg1.5
$lang_util_php['delete_replace'] = 'Slett originalbilder og ersstatt dem med store versjoner';
$lang_util_php['titles_deleted'] = 'Alle tittler i valgte album er slettet';
$lang_util_php['deleting_intermediates'] = 'Sletter middelstore bilder, vennligst vent...';
$lang_util_php['searching_orphans'] = 'Søker etter foreldreløse filer, vennligst vent...';
$lang_util_php['delete_orphans'] = 'Sletter kommentarer på manglende filer';
$lang_util_php['delete_orphans_explanation'] = 'Dette finner og lar deg slette alle kommentarer som knytter seg til filer som ikke lenger finnes i galleriet. <br />Kontroller alle album.';
$lang_util_php['update_full_normal_thumb'] = 'Alt: fullstore, middelstore og miniatyrer.'; // cpg1.5
$lang_util_php['update_full_normal'] = 'Både skalerte og fullstore (hvis en originalkopi finnes tillgjenglig)'; // cpg1.5
$lang_util_php['update_full'] = 'Bare fullstore (hvis en originalkopi finnes tillgjenglig)'; // cpg1.5
$lang_util_php['delete_back'] = 'Slett originalbildebackup for vannstemplede bilder'; // cpg1.5
$lang_util_php['delete_back_explanation'] = 'Dette vil slette backupbildene. Du vil spare plass på disken men kan ikke$ angre vannstemplingen!! Etter dette blir vannstemplingen permanent.'; // cpg1.5
$lang_util_php['finished'] = '<br />Sluttfør oppdateringen av miniatyrbilder!<br />'; // cpg1.5
$lang_util_php['autorefresh'] = 'Forny automatisk (nå behøver du ikke lengre trykke på Fortsett-knappen)'; // cpg1.5
$lang_util_php['refresh_db'] = 'Last om fildimensjoner og størrelsesinformasjon.';
$lang_util_php['refresh_db_explanation'] = 'Dette vil gjeninlese fil størrelse og dimensjoner. Bruk denne hvis forbruket er feilaktig eller filene er endret manuelt.';
$lang_util_php['reset_views'] = 'Nullstill visningstellere';
$lang_util_php['reset_views_explanation'] = 'Setter alle filvisningstellere til null i valgt album.';
$lang_util_php['reset_success'] = 'Nullstilling ferdig'; // cpg1.5
$lang_util_php['orphan_comment'] = 'foreldreløse kommentarer funnet';
$lang_util_php['delete_all'] = 'Slett alle';
$lang_util_php['delete_all_orphans'] = 'Slett alle foreldreløse?';
$lang_util_php['comment'] = 'Kommentar: ';
$lang_util_php['nonexist'] = 'tillhører ikke eksisterande filer # ';
$lang_util_php['delete_old'] = 'Slett filer som er eldre enn et bestemt antall dager'; // cpg1.5
$lang_util_php['delete_old_explanation'] = 'Dette vil slette filer som er eldre enn det antall dager du spesifiserer (miniatyrer, middelestor og store). Bruk denne funksjonen for å frigjøre plass på disken.'; // cpg1.5
$lang_util_php['delete_old_warning'] = 'Advarsel: Filene du valgte vil bli slettet for godt uten flere advarsler!'; // cpg1.5
$lang_util_php['deleting_old'] = 'Sletter eldre bilder, vennligst vent...'; // cpg1.5
$lang_util_php['older_than'] = 'Sletter filer eldre enn %s dager'; // cpg1.5
$lang_util_php['del_orig'] = 'Originalfilen %s er slettet'; // cpg1.5
$lang_util_php['del_intermediate'] = 'De middelstore bildene %s er slettet'; // cpg1.5
$lang_util_php['del_thumb'] = 'Miniatyrbilder %s er slettet'; // cpg1.5
$lang_util_php['del_error'] = 'Feil ved sletting av %s!'; // cpg1.5
$lang_util_php['affected_records'] = '%s påvirkede poster.'; // cpg1.5
$lang_util_php['all_albums'] = 'Alle Album'; // cpg1.5
$lang_util_php['update_result'] = 'Oppdateringsresultat'; // cpg1.5
$lang_util_php['incorrect_filesize'] = 'Total filstørrelse er feil'; // cpg1.5
$lang_util_php['database'] = 'Database: '; // cpg1.5
$lang_util_php['bytes'] = ' bytes'; // cpg1.5
$lang_util_php['actual'] = 'Faktisk: '; // cpg1.5
$lang_util_php['updated'] = 'Oppdatert'; // cpg1.5
$lang_util_php['filesize_error'] = 'Kunne ikke finne filstørrelsen (kan være ugyldig fil), hopper over....'; // cpg1.5
$lang_util_php['skipped'] = 'Hoppet over'; // cpg1.5
$lang_util_php['incorrect_dimension'] = 'Dimensjonen er feil'; // cpg1.5
$lang_util_php['dimension_error'] = 'Kunne ikke finne informasjon om dimensjon, hopper over....'; // cpg1.5
$lang_util_php['cannot_fix'] = 'Kan ikke reparere'; // cpg1.5
$lang_util_php['fullpic_error'] = 'Fil %s finnes ikke!'; // cpg1.5
$lang_util_php['no_prob_detect'] = 'Ingen problemer funnet'; // cpg1.5
$lang_util_php['no_prob_found'] = 'Ingen problemer funnet.'; // cpg1.5
$lang_util_php['keyword_convert'] = 'Konverter nøkkelordavgrenser'; // cpg1.5
$lang_util_php['keyword_from_to'] = 'Konverter nøkk\kelordsavgrenser fra %s til %s'; // cpg1.5
$lang_util_php['keyword_set'] = 'Sett galleriets nøkkkelordsavgrenser til en ny verdi'; // cpg1.5
$lang_util_php['keyword_replace_before'] = 'Før konvertering, erstatt %s med %s'; // cpg1.5
$lang_util_php['keyword_replace_after'] = 'Etter konvertering, erstatt %s med %s'; // cpg1.5
$lang_util_php['keyword_replace_values'] = array('_'=>'underscore', '-'=>'hyphen', '~'=>'tilde'); // cpg1.5
$lang_util_php['keyword_explanation'] = 'Dette vil konvertere (bytte ut) nøkkelordavgrenseren for alle dine filer fra en verdi til en annen. Se i dokumentasjonen for mer informasjon.'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File versioncheck.php
// ------------------------------------------------------------------------- //
if (defined('VERSIONCHECK_PHP')) {
$lang_versioncheck_php['title'] = 'Versjonskontroll';
$lang_versioncheck_php['versioncheck_output'] = 'Versjonskontroll output';
$lang_versioncheck_php['file'] = 'fil';
$lang_versioncheck_php['folder'] = 'mappe';
$lang_versioncheck_php['outdated'] = 'eldre enn %s';
$lang_versioncheck_php['newer'] = 'nyere enn %s';
$lang_versioncheck_php['modified'] = 'forandret';
$lang_versioncheck_php['not_modified'] = 'uforandret'; // cpg1.5
$lang_versioncheck_php['needs_change'] = 'må endres';
$lang_versioncheck_php['review_permissions'] = 'Sett rettigheter';
$lang_versioncheck_php['inaccessible'] = 'Filen er ikke tilgjenglig';
$lang_versioncheck_php['review_version'] = 'Din fil er utgått';
$lang_versioncheck_php['review_dev_version'] = 'Din fil er nyere enn forventet';
$lang_versioncheck_php['review_modified'] = 'Filen kan være skadd (eller har du redigert den)';
$lang_versioncheck_php['review_missing'] = '%s mangler eller er utilgjenglig';
$lang_versioncheck_php['existing'] = 'finnes';
$lang_versioncheck_php['review_removed_existing'] = 'Filen må slettes av sikkerhetsgrunner';
$lang_versioncheck_php['counter'] = 'Tellere';
$lang_versioncheck_php['type'] = 'Type';
$lang_versioncheck_php['path'] = 'Sti';
$lang_versioncheck_php['missing'] = 'Mangler';
$lang_versioncheck_php['permissions'] = 'Rettigheter';
$lang_versioncheck_php['version'] = 'Versjon';
$lang_versioncheck_php['revision'] = 'Revidert';
$lang_versioncheck_php['modified'] = 'Forandret';
$lang_versioncheck_php['comment'] = 'Kommentar';
$lang_versioncheck_php['help'] = 'Hjelp';
$lang_versioncheck_php['repository_link'] = 'Filplass';
$lang_versioncheck_php['browse_corresponding_page_subversion'] = 'Vis side tilsvarende til denne fil prosjektets\'s subversion repository';
$lang_versioncheck_php['mandatory'] = 'obligatorisk';
$lang_versioncheck_php['mandatory_missing'] = 'Obligatorisk fil mangler'; // cpg1.5
$lang_versioncheck_php['optional'] = 'valgfri';
$lang_versioncheck_php['removed'] = 'fjernet'; // cpg1.5
$lang_versioncheck_php['options'] = 'Velg';
$lang_versioncheck_php['display_output'] = 'Vis utdata';
$lang_versioncheck_php['on_screen'] = 'Vis alle detaljer';
$lang_versioncheck_php['text_only'] = 'Bare tekst';
$lang_versioncheck_php['errors_only'] = 'Vis bare eventuelle feil';
$lang_versioncheck_php['hide_images'] = 'Skjul bilder'; // cpg1.5
$lang_versioncheck_php['no_modification_check'] = 'Kontroller ikke modifiserte filer'; // cpg1.5
$lang_versioncheck_php['do_not_connect_to_online_repository'] = 'Kople ikke til online lager';
$lang_versioncheck_php['online_repository_explain'] = 'anbefales bare om tilkopling mislykkes';
$lang_versioncheck_php['submit'] = 'Utfør';
$lang_versioncheck_php['select_all'] = 'Velg alle'; // js-alert
$lang_versioncheck_php['files_folder_processed'] = 'Viser %s innhold i %s mapper/filer med %s mulige problem';
$lang_versioncheck_php['read'] = 'Les'; // cpg1.5
$lang_versioncheck_php['write'] = 'Skriv'; // cpg1.5
$lang_versioncheck_php['warning'] = 'Advarsel'; // cpg1.5
$lang_versioncheck_php['not_applicable'] = 'n/a'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File view_log.php
// ------------------------------------------------------------------------- //
if (defined('VIEWLOG_PHP')) {
$lang_viewlog_php['delete_all'] = 'Slett alle logger';
$lang_viewlog_php['delete_this'] = 'Slett denne logg';
$lang_viewlog_php['view_logs'] = 'Vis logger';
$lang_viewlog_php['no_logs'] = 'Ingen logger opprettet.';
$lang_viewlog_php['last_updated'] = 'sist oppdatert'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File xp_publish.php
// ------------------------------------------------------------------------- //
if (defined('XP_PUBLISH_PHP')) {
$lang_xp_publish_php['title'] = 'XP Web Publiseringsguide';
$lang_xp_publish_php['client_header'] = 'XP Web Publiseringsguide'; // cpg1.5
$lang_xp_publish_php['requirements'] = 'Krav'; // cpg1.5
$lang_xp_publish_php['windows_xp'] = 'Windows XP / Vista'; // cpg1.5
$lang_xp_publish_php['no_windows_xp'] = 'Du bruker et annet operativsystem som ikke støttes'; // cpg1.5
$lang_xp_publish_php['no_os_detect'] = 'Kunne ikke gjenkjenne dit operativsystem'; // cpg1.5
$lang_xp_publish_php['requirement_http_upload'] = 'En fungererende installasjon av Coppermine der http opplasting fungerer korrekt'; // cpg1.5
$lang_xp_publish_php['requirement_ie'] = 'Microsoft Internet Explorer'; // cpg1.5
$lang_xp_publish_php['requirement_permissions'] = 'Galleriets administrator må gi deg tilatelse til å laste opp'; // cpg1.5
$lang_xp_publish_php['requirement_login'] = 'Du må være innlogget for å kunne laste opp'; // cpg1.5
$lang_xp_publish_php['no_ie'] = 'Du bruker en webleser som ikke støttes'; // cpg1.5
$lang_xp_publish_php['no_browser_detect'] = 'Kunne ikke gjenkjenne din webleser '; // cpg1.5
$lang_xp_publish_php['no_gallery_name'] = 'Du må skrive et gallerinavn i konfigurasjonen'; // cpg1.5
$lang_xp_publish_php['no_gallery_description'] = 'Du må skrive en galleribeskrivelse i konfigurasjonen'; // cpg1.5
$lang_xp_publish_php['howto_install'] = 'Hvordan man installerer'; // cpg1.5
$lang_xp_publish_php['install_right_click'] = 'Høyreklikk på %sdenne link%s og velg &quot;lagre som...&quot;'; // cpg1.5 // translator note: don't replace the %s - that placeholder token needs to go untranslated
$lang_xp_publish_php['install_save'] = 'Lagre filen på din datamaskin. Når du lagrer den, så kontroller at det foreslåtte filnavnet er <tt>cpg_###.som</tt> (### er et numerisk tidsstempel). Endre til det navnet hvis nødvendig (behold nummrene)'; // cpg1.5
$lang_xp_publish_php['install_execute'] = 'Etter at nedlastingen er ferdig, kjør filen ved å dobbeltklikke på den og registrere din server på webbpubliceringsguiden.'; // cpg1.5
$lang_xp_publish_php['usage'] = 'Bruk'; // cpg1.5
$lang_xp_publish_php['select_files'] = 'I Windows Explorer, velg de filer du vil laste opp'; // cpg1.5
$lang_xp_publish_php['display_tasks'] = 'Kontroller at mappene ikke vises på Explorers venstre panel'; // cpg1.5
$lang_xp_publish_php['publish_on_the_web'] = 'klikk på &quot;Publish xxx på web&quot; venstre panelen av panelet'; // cpg1.5
$lang_xp_publish_php['confirm_selection'] = 'Bekreft dit filvalg'; // cpg1.5
$lang_xp_publish_php['select_service'] = 'I listen over de tjenster som vises, velg ditt fotogalleri (det har ditts galleri navn)'; // cpg1.5
$lang_xp_publish_php['enter_login'] = 'Oppgi din innloggingsinformasjon om det trengs'; // cpg1.5
$lang_xp_publish_php['select_album'] = 'Velg et målalbum for dine bilder eller opprett et nytt'; // cpg1.5
$lang_xp_publish_php['next'] = 'Klikk på &quot;neste&quot;'; // cpg1.5
$lang_xp_publish_php['upload_starts'] = 'Opplastingen av dine bilder bør starte'; // cpg1.5
$lang_xp_publish_php['upload_completed'] = 'Når det er avsluttet, kontroller dit galleri at bildene er lagt til korrekt'; // cpg1.5
$lang_xp_publish_php['welcome'] = 'Velkommen <strong>%s</strong>,';
$lang_xp_publish_php['need_login'] = 'Du må logge inn på galleriet ved å bruke Internet Explorer før du kan bruke denne guide.<p/><p>Når du har logget inn, glem ikke å velge &quot;husk meg&quot; hvis det er mulig.';
$lang_xp_publish_php['no_alb'] = 'Desverre finnes ingen album der du har tilatelse til å laste opp bilder med denne guide.';
$lang_xp_publish_php['upload'] = 'Last opp bilder til et album som alerede finnes';
$lang_xp_publish_php['create_new'] = 'Lag et nytt album for dine bilder';
$lang_xp_publish_php['category'] = 'Kategori';
$lang_xp_publish_php['new_alb_created'] = 'Ditt nye album &quot;<strong>%s</strong>&quot; er opprettet.';
$lang_xp_publish_php['continue'] = 'Klikk på &quot;Neste&quot; for å starte med å laste opp dine bilder';
$lang_xp_publish_php['link'] = '';
}

// ------------------------------------------------------------------------- //
// Core plugins
// ------------------------------------------------------------------------- //
if (defined('CORE_PLUGIN')) {
$lang_plugin_php['usergal_alphatabs_config_name'] = 'Brukergalleri alfabetiske faner'; // cpg1.5
$lang_plugin_php['usergal_alphatabs_config_description'] = 'Hvad det gjør: viser faner fra A til Z øverst på brukergallierier som gjester kan klikk på for å komme direkte til en side som bare viser alle gallerier som tillhører brukere med navn som begynner med den valgte bokstaven. Plugin-modulen anbefales bare om du har et stort antall brukergallerier.'; // cpg1.5
$lang_plugin_php['usergal_alphatabs_jump_by_username'] = 'Hopp til brukernavn'; // cpg1.5
$lang_plugin_php['sample_config_name'] = 'Exempel på plugin-modul'; // cpg1.5
$lang_plugin_php['sample_config_description'] = 'Dette er ett eksempel på en plugin-modul. Det gjør ikke noe spesielt meningsfullt - det er bare ment som en mulighet til å  vise hva en plugin-modul kan gjøre og hvordan den skal kodes. Når den aktiveres vil den vise litt rød eksempeltekst.'; // cpg1.5
$lang_plugin_php['sample_plugin_documentation'] = 'Dokumentasjon for plugin-modulen'; // cpg1.5
$lang_plugin_php['sample_plugin_support'] = 'Support for plugin-modulen'; // cpg1.5
$lang_plugin_php['sample_install_explain'] = 'Skriv brukernavn (\'foo\') og passord (\'bar\') for å installere'; // cpg1.5
$lang_plugin_php['sample_install_username'] = 'Brukernavn'; // cpg1.5
$lang_plugin_php['sample_install_password'] = 'Passord'; // cpg1.5
$lang_plugin_php['sample_output'] = 'Dette er et eksempel på test som sendes av eksempel-plugin-modulen'; // cpg1.5
$lang_plugin_php['opensearch_config_name'] = 'OpenSearch'; // cpg1.5
$lang_plugin_php['opensearch_config_description'] = 'En implementering av <a href="http://www.opensearch.org/" rel="external" class="external">OpenSearch</a> for Coppermine.<br />Når det aktiveres kan gjester legge dit galleri til sin webblesers søkefelt.'; // cpg1.5
$lang_plugin_php['opensearch_search'] = 'Søk %s'; // cpg1.5
$lang_plugin_php['opensearch_extra'] = 'Du kan legge til litt tekst på din side som forklarer hva plugin-modulen gjør'; // cpg1.5
$lang_plugin_php['opensearch_failed_to_open_file'] = 'Kunne ikke åpne fil %s - kontroller tilatelser'; // cpg1.5
$lang_plugin_php['opensearch_failed_to_write_file'] = 'Kunne ikke skrive til filen %s - kontroller tilatelser'; // cpg1.5
$lang_plugin_php['opensearch_form_header'] = 'Tast inn detaljer som skal brukes i beskrivelsesfilen'; // cpg1.5
$lang_plugin_php['opensearch_gallery_url'] = 'Galleri URL (må være korrekt)'; // cpg1.5
$lang_plugin_php['opensearch_display_name'] = 'Navn som vist i webleseren'; // cpg1.5
$lang_plugin_php['opensearch_description'] = 'Beskrivelse'; // cpg1.5
$lang_plugin_php['opensearch_character_limit'] = '%s tegnbegrensning'; // cpg1.5
$lang_plugin_php['onlinestats_description'] = 'Tilføy en blokk som viser brukere og gjester som er online.';
$lang_plugin_php['onlinestats_name'] = 'Hvem er online?';
$lang_plugin_php['onlinestats_config_extra'] = 'For å aktivere plugin-modulen (gjøre slik at den faktisk viser en blokk med onlinestatistikk), så har teksten "onlinestats" (adskilt med skråstrek) blitt lagt til i "hovedsidens innehold" i <a href="admin.php">Copperminekonfigurasjonen</a> i avsnittet "Vis album". Innstillingen bør nå se ut som  "breadcrumb/catlist/alblist/onlinestats" eller lignende. For å endre posisjon på blokken, flytt rundt teksten "onlinestats" i konfigurasjonsfeltet.';
$lang_plugin_php['onlinestats_config_install'] = 'Pluginnmodulen kjører mange komandoer mot datasbasen og krever mye resjurser. Hvis ditt Coppermine galleri er langsomt eller har mange brukere, så bør du ikke bruke det.';
$lang_plugin_php['onlinestats_we_have_reg_member'] = 'Det finnes %s registrerte brukere';
$lang_plugin_php['onlinestats_we_have_reg_members'] = ' Det finnes %s registrerte brukere';
$lang_plugin_php['onlinestats_most_recent'] = 'Sist registrerte bruker er %s';
$lang_plugin_php['onlinestats_is'] = 'Totalt er %s gjester online';
$lang_plugin_php['onlinestats_are'] = 'Totalt er %s hjester online';
$lang_plugin_php['onlinestats_and'] = 'og';
$lang_plugin_php['onlinestats_reg_member'] = '%s registrerte brukere';
$lang_plugin_php['onlinestats_reg_members'] = '%s registrerte brukere';
$lang_plugin_php['onlinestats_guest'] = '%s gjester';
$lang_plugin_php['onlinestats_guests'] = '%s gjester';
$lang_plugin_php['onlinestats_record'] = 'Flest brukere online var: %s den %s';
$lang_plugin_php['onlinestats_since'] = 'Registrerte brukere de siste %s minuterna: %s';
$lang_plugin_php['onlinestats_config_text'] = 'Hvor lang tid kan en bruker være online før han/henne skal anses ha logget ut?';
$lang_plugin_php['onlinestats_minute'] = 'minuter';
$lang_plugin_php['onlinestats_remove'] = 'Fjern tabellen som brukes for å lagre online data?';
$lang_plugin_php['link_target_name'] = 'Link';
$lang_plugin_php['link_target_description'] = 'Endrer måten som eksterne linker åpnes på: når denne plugin-modulen aktiveres, kommer alle linker til å bli åpnet i et nytt vindu (i stedet for i samme vindu).';
$lang_plugin_php['link_target_extra'] = 'Denne pluginnmodul påvirker mest "Powered by Coppermine" linken nederst på siden.';
$lang_plugin_php['link_target_recommendation'] = 'Det anbefales å ikke bruke denne plugin-modulen, da brukerne opplever det slitsomt når hver link åpnes i et nytt vindu.';
}

?>