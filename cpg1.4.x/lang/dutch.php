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
	  $HeadURL$
	  $Revision$
	  $Author$
	  $Date$
	**********************************************/
	
	IF (!defined('IN_COPPERMINE')) { die('Niet in Coppermine...');}
	
	// info about translators and translated language
	$lang_translation_info = array( 
		'lang_name_english' => 'Dutch',  
		'lang_name_native' => 'Nederlands', 
		'lang_country_code' => 'nl', 
		'trans_name'=> 'Jan Paul', //the name of the translator - can be a nickname 
		'trans_email' => '', //translator's email address (optional) 
		'trans_website' => '', //translator's website (optional) 
		'trans_date' => '2005-08-17', //the date the translation was created / last modified 
	); 
	
	$lang_charset = 'utf-8';
	$lang_text_dir = 'ltr';
	
	// shortcuts for Byte, Kilo, Mega
	$lang_byte_units = array('Bytes', 'KB', 'MB');
	
	// Day of weeks and months
	$lang_day_of_week = array('zon', 'maa', 'din', 'woe', 'don', 'vri', 'zat');
	$lang_month = array('jan', 'feb', 'mrt', 'apr', 'mei', 'jun', 'jul', 'aug', 'sep', 'okt', 'nov', 'dec');
	
	// Some common strings
	$lang_yes = 'Ja';
	$lang_no  = 'Nee';
	$lang_back = 'TERUG';
	$lang_continue = 'DOORGAAN';
	$lang_info = 'Informatie';
	$lang_error = 'Fout'; 
	$lang_check_uncheck_all = 'selecteer/deselecteer alles';
	
	// The various date formats
	// See http://www.php.net/manual/en/function.strftime.php to define the variable below
	$album_date_fmt =    '%d %B %Y';
	$lastcom_date_fmt =  '%d-%m-%y om %H:%M';
	$lastup_date_fmt = '%d %B %Y';
	$register_date_fmt = '%d %B %Y';
	$lasthit_date_fmt = '%d %B %Y om %H:%M ';
	$comment_date_fmt =  '%d %B %Y om %H:%M '; 
	$log_date_fmt = '%d-%m-%y om %H:%M';
	
	// For the word censor
	$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*','kut','lul','neuken','klootzak','hoer','zak','hufter','pijpen','kloot','sex');
	
	$lang_meta_album_names = array( 
		'random' => 'Willekeurige bestanden', 
		'lastup' => 'Laatste toevoegingen', 
		'lastalb'=> 'Laatste gewijzigde albums', 
		'lastcom' => 'Laatste commentaren', 
		'topn' => 'Meest bekeken', 
		'toprated' => 'Best beoordeeld', 
		'lasthits' => 'Laatst bekeken', 
		'search' => 'Zoek resultaten', 
		'favpics'=> 'Favoriete bestanden',  //cpg1.4
	);
	
	$lang_errors = array(
		'access_denied' => 'Je hebt geen toestemming om deze pagina te bezoeken.',
		'perm_denied' => 'Je hebt geen toestemming om deze handeling uit te voeren.',
		'param_missing' => 'Script aangeroepen zonder de vereiste parameters.',
		'non_exist_ap' => 'Geselecteerde album/bestand bestaat niet!',
		'quota_exceeded' => 'Toegewezen bestandsgrootte overschreden<br/><br/>Je hebt een bestandsgrootte-limiet van [quota]K, je bestanden gebruiken nu [space]K, het toevoegen van dit bestand zorgt er voor dat je je toegewezen bestandsgrootte overschrijdt.',
		'gd_file_type_err' => 'Indien je de GD afbeeldingenbibliotheek gebruikt zijn alleen JPEG- en PNG-bestanden toegestaan.',
		'invalid_image' => 'De afbeelding die je hebt geupload is corrupt of kan niet behandeld worden door de GD library.',
		'resize_failed' => 'Niet in staat de verkleinde afbeelding of de afmetingen van de afbeelding aan te passen.',
		'no_img_to_display' => 'Geen afbeelding om te laten zien.',
		'non_exist_cat' => 'De geselecteerde categorie bestaat niet.',
		'orphan_cat' => 'Een categorie heeft een niet bestaande hoofdcategorie, start de categorie-manager om het probleem te herstellen.',
		'directory_ro' => 'Map \'%s\' is niet beschrijfbaar, bestand kan niet verwijderd worden.',
		'non_exist_comment' => 'Het geselecteerde commentaar is niet aanwezig.',
		'pic_in_invalid_album' => 'Bestand is in een niet bestaand album (%s)!?', 
		'banned' => 'Je bent op dit moment uitgesloten van het gebruik van deze site.', 
		'not_with_udb' => 'Deze functie is uitgeschakeld in Coppermine omdat het geïntegreerd is met forumsoftware. Wat je probeeert te doen is, of wordt niet ondersteund in deze configuratie, of de functie zal afgehandeld moeten worden door de forumsoftware.', 
		'offline_title' => 'Offline',
		'offline_text' => 'Galerij is op dit moment offline - controleer later nog eens',
		'ecards_empty' => 'Er zijn op dit moment geen e-cardrecords aanwezig om te laten zien. Controleer of je e-card logging hebt aangezet in de Coppermine-configuratie!',
		'action_failed' => 'Actie mislukt.  Coppermine kan je verzoek niet afhandelen.',
		'no_zip' => 'De benodigde bibliotheken om zip-bestanden te verwerken zijn niet beschikbaar.  Neem contact op met je Coppermine-beheerder.',
		'zip_type' => 'Je hebt geen toestemming om zip-bestanden te uploaden.',
		'database_query' => 'Er was een fout bij het ophalen van de gegevens uit de database', //cpg1.4
		'register_globals_on' => 'The PHP setting register_globals is enabled on your server, which is a bad idea in terms of security. It\'s strongly recommended to turn it off. [<a href="http://forum.coppermine-gallery.net/index.php/topic,59569.0.html" rel="external" class="external">more</a>]',
	);
	
	$lang_bbcode_help_title = 'bbcode help';
	$lang_bbcode_help = 'De volgende codes kunnen van pas komen: <li>[b]<b>Bold</b>[/b]</li> <li>[i]<i>Italic</i>[/i]</li> <li>[url=http://Jouwsite.nl/]Url Text[/url]</li> <li>[email]user@domain.nl[/email]</li>';
	
	// ------------------------------------------------------------------------- //
	// File theme.php
	// ------------------------------------------------------------------------- //
	
	$lang_main_menu = array( 
	'home_title' => 'Ga naar de beginpagina',
		'home_lnk' => 'Beginpagina',
		'alb_list_title' => 'Ga naar de albumlijst',
		'alb_list_lnk' => 'Albumlijst',
		'my_gal_title' => 'Ga naar mijn persoonlijke galerij',
		'my_gal_lnk' => 'Mijn galerij', 
		'my_prof_title' => 'Ga naar mijn persoonlijke profiel', //cpg1.4
		'my_prof_lnk' => 'Mijn profiel',
		'adm_mode_title' => 'Ga naar de beheerder-modus',
		'adm_mode_lnk' => 'Beheerder-modus',
		'usr_mode_title' => 'Ga naar de gebruiker-modus',
		'usr_mode_lnk' => 'Gebruiker-modus',
		'upload_pic_title' => 'Upload een bestand in een album',
		'upload_pic_lnk' => 'Upload bestand',
		'register_title' => 'Creëer een account',
		'register_lnk' => 'Registreer', 
		'login_title' => 'Log mij in', //cpg1.4
		'login_lnk' => 'Inloggen', 
		'logout_title' => 'Log mij uit', //cpg1.4
		'logout_lnk' => 'Uitloggen', 
		'lastup_title' => 'Laat me de laatste uploads zien', //cpg1.4
		'lastup_lnk' => 'Laatste upload', 
		'lastcom_title' => 'Laat me het laatste commentaar zien', //cpg1.4
		'lastcom_lnk' => 'Laatste commentaar', 
		'topn_title' => 'Laat me de meest bekeken bestanden zien', //cpg1.4
		'topn_lnk' => 'Meest bekeken', 
		'toprated_title' => 'Laat me de beste beoordeelde bestanden zien', //cpg1.4
		'toprated_lnk' => 'Best beoordeeld', 
		'search_title' => 'Zoek naar bestanden', //cpg1.4
		'search_lnk' => 'Zoek', 
		'fav_title' => 'Ga naar mijn favorieten', //cpg1.4
		'fav_lnk' => 'Mijn favorieten', 
		'memberlist_title' => 'Laat gebruikerslijst zien',
		'memberlist_lnk' => 'Gebruikerslijst',
		'faq_title' => 'Veel gestelde vragen en antwoorden over de fotogalerij &quot;Coppermine&quot;',
		'faq_lnk' => 'FAQ', 
	);
	
	$lang_gallery_admin_menu = array(
		'upl_app_title' => 'Upload-toestemming', //cpg1.4
		'upl_app_lnk' => 'Upload-toestemming',
		'admin_title' => 'Ga naar instellingen', //cpg1.4
		'admin_lnk' => 'Instellingen', //cpg1.4
		'albums_title' => 'Ga naar albums', //cpg1.4
		'albums_lnk' => 'Albums',
		'categories_title' => 'Ga naar catagorie beheer', //cpg1.4
		'categories_lnk' => 'Categorieën',
		'users_title' => 'Ga naar gebruikers beheer', //cpg1.4
		'users_lnk' => 'Gebruikers',
		'groups_title' => 'Ga naar beheer groepen', //cpg1.4
		'groups_lnk' => 'Groepen',
		'comments_title' => 'Ga naar alle commentaren bekijken', //cpg1.4
		'comments_lnk' => 'Bekijk commentaren',
		'searchnew_title' => 'Ga naar toevoegen bestanden', //cpg1.4
		'searchnew_lnk' => 'Bestanden toevoegen',
		'util_title' => 'Ga naar de beheerders gereedschappen', //cpg1.4
		'util_lnk' => 'Beheerdersgereedschap',
		'key_title' => 'Ga naar de zoekbegrippen bibliotheek', //cpg1.4
		'key_lnk' => 'Zoekbegrippen Bibliotheek', //cpg1.4
		'ban_title' => 'Ga naar verbannen gebruikers', //cpg1.4
		'ban_lnk' => 'Verban gebruiker',
		'db_ecard_title' => 'Ga naar e-cards', //cpg1.4
		'db_ecard_lnk' => 'Laat e-cards zien',
		'pictures_title' => 'Ga naar sorteren afbeeldingen', //cpg1.4
		'pictures_lnk' => 'Sorteer afbeeldingen', //cpg1.4
		'documentation_lnk' => 'Ga naar documentatie', //cpg1.4
		'documentation_title' => 'Coppermine documentatie', //cpg1.4
	);
	
	$lang_user_admin_menu = array( 
		'albmgr_title' => 'Ga naar Creëer/sorteer albums', //cpg1.4
		'albmgr_lnk' => 'Creëer/sorteer albums', 
		'modifyalb_title' => 'Ga naar wijzig mijn albums',  //cpg1.4
		'modifyalb_lnk' => 'Wijzig mijn albums', 
		'my_prof_title' => 'Ga naar mijn profiel', //cpg1.4
		'my_prof_lnk' => 'Mijn profiel',
	);
	
	$lang_cat_list = array(
		'category' => 'Categorie',
		'albums' => 'Albums',
		'pictures' => 'Bestanden',
	);
	
	$lang_album_list = array(
		'album_on_page' => '%d album(s) op %d pagina(\'s)'
	);
	
	$lang_thumb_view = array(
		'date' => 'DATUM', 
		//Sort by filename and title
		'name' => 'BESTANDSNAAM', 
		'title' => 'TITEL', 
		'sort_da' => 'Sorteer op datum oplopend',
		'sort_dd' => 'Sorteer op datum aflopend',
		'sort_na' => 'Sorteer op naam oplopend',
		'sort_nd' => 'Sorteer op naam aflopend',
		'sort_ta' => 'Sorteer op titel oplopend', 
		'sort_td' => 'Sorteer op titel aflopend', 
		'position' => 'POSITIE', //cpg1.4
		'sort_pa' => 'Sorteer op positie oplopend', //cpg1.4
		'sort_pd' => 'Sorteer op positie aflopend', //cpg1.4
		'download_zip' => 'Download als zip-bestand',
		'pic_on_page' => '%d bestanden op %d pagina(s)',
		'user_on_page' => '%d gebruiker(s) op %d pagina(s)',
		'enter_alb_pass' => 'Geef album wachtwoord in', //cpg1.4
		'invalid_pass' => 'Ongeldig wachtwoord', //cpg1.4
		'pass' => 'Wachtwoord', //cpg1.4
		'submit' => 'Verzenden', //cpg1.4
	);
	
	$lang_img_nav_bar = array(
		'thumb_title' => 'Terug naar de verkleinde afbeeldingspagina',
		'pic_info_title' => 'Laat zien/verberg bestandsinformatie',
		'slideshow_title' => 'Diashow',
		'ecard_title' => 'Stuur dit bestand als een e-card',
		'ecard_disabled' => 'e-cards zijn uitgeschakeld',
		'ecard_disabled_msg' => 'Je hebt geen toestemming een e-cards te verzenden', //js-alert
		'prev_title' => 'Bekijk voorgaand bestand',
		'next_title' => 'Bekijk volgend bestand',
		'pic_pos' => 'Bestand %s / %s', 
		'report_title' => 'Dien een klacht over dit bestand in bij de beheerder', //cpg1.4
		'go_album_end' => 'Direct naar einde', //cpg1.4
		'go_album_start' => 'Direct naar begin', //cpg1.4
		'go_back_x_items' => 'ga %s stappen terug', //cpg1.4
		'go_forward_x_items' => 'ga %s stappen vooruit', //cpg1.4
	);
	
	$lang_rate_pic = array(
		'rate_this_pic' => 'Beoordeel dit bestand ',
		'no_votes' => '(Nog geen stemmen)',
		'rating' => '(huidige beoordeling : %s / 5 met %s stemmen)',
		'rubbish' => 'Rotzooi',
		'poor' => 'Zwak',
		'fair' => 'Gemiddeld',
		'good' => 'Goed',
		'excellent' => 'Uitstekend',
		'great' => 'Geweldig',
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
		CRITICAL_ERROR => 'Kritieke fout',
		'file' => 'Bestand: ',
		'line' => 'Regel: ',
	);
	
	$lang_display_thumbnails = array(
		'filename' => 'Bestandsnaam : ', //cpg1.4
		'filesize' => 'Bestandsgrootte : ', //cpg1.4
		'dimensions' => 'Afmetingen : ', //cpg1.4
		'date_added' => 'Datum toegevoegd : ', //cpg1.4
	);
	
	$lang_get_pic_data = array(
		'n_comments' => '%s commentaren',
		'n_views' => '%s x bekeken',
		'n_votes' => '(%s stemmen)',
	);
	
	$lang_cpg_debug_output = array(
		'debug_info' => 'Foutenverwijderings-informatie',
		'select_all' => 'Selecteer alles',
		'copy_and_paste_instructions' => 'Als je om hulp gaat vragen op het Coppermine-forum, knip-en-plak dan deze foutenverwijderings-gegevens in je forumbericht.',
		'phpinfo' => 'toon phpinfo',
		'notices' => 'Mededelingen', //cpg1.4
	);
	
	$lang_language_selection = array(
		'reset_language' => 'Standaardtaal',
		'choose_language' => 'Kies een taal',
	);
	
	$lang_theme_selection = array(
		'reset_theme' => 'Standaardthema',
		'choose_theme' => 'Kies een thema',
	); 
	
	$lang_version_alert = array(
		'version_alert' => 'Niet ondersteunde versie!', //cpg1.4
		'no_stable_version' => 'Je draait Coppermine  %s (%s). Deze is niet bedoeld voor beginnende gebruikers - deze versie wordt niet ondersteund en is zonder enige garantie op een goede werking. Gebruik deze versie is voor eigen risico of download de laatste stabiele versie als je toch ondersteuning wilt hebben!',
		'gallery_offline' => 'Deze gallerij is momenteel niet beschikbaar anders dan door de beheerder. Vergeet niet weer terug te schakelen naar de online versie als het onderhoud is gedaan.',
	);
	
	$lang_create_tabs = array(
		'previous' => 'vorige', //cpg1.4
		'next' => 'volgende', //cpg1.4
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
		'error_wakeup' => "Kan plugin '%s' niet uit standby halen", //cpg1.4
		'error_install' => "Kan plugin '%s' niet installeren", //cpg1.4
		'error_uninstall' => "Kan plugin '%s' niet deïnstalleren", //cpg1.4
		'error_sleep' => "Kan plugin '%s' niet standby schakelen<br/>", //cpg1.4
	);

	// ------------------------------------------------------------------------- //
	// File include/smilies.inc.php
	// ------------------------------------------------------------------------- //
	
	if (defined('SMILIES_PHP')) $lang_smilies_inc_php = array(
		'Exclamation' => 'Uitroepteken',
		'Question' => 'Vraag',
		'Very Happy' => 'Zeer gelukkig',
		'Smile' => 'Glimlach',
		'Sad' => 'Bedroefd',
		'Surprised' => 'Verbaasd',
		'Shocked' => 'Geshockeerd',
		'Confused' => 'Verward',
		'Cool' => 'Cool',
		'Laughing' => 'Lachen',
		'Mad' => 'Gek',
		'Razz' => 'Uitlachen',
		'Embarassed' => 'Verlegen',
		'Crying or Very sad' => 'Huilen of erg bedroefd',
		'Evil or Very Mad' => 'Slecht of zeer gek',
		'Twisted Evil' => 'Volledig geschift',
		'Rolling Eyes' => 'Rollende ogen',
		'Wink' => 'Knipoog',
		'Idea' => 'Idee',
		'Arrow' => 'Pijl',
		'Neutral' => 'Neutraal',
		'Mr. Green' => 'Meneer Groen',
	);

	// ------------------------------------------------------------------------- //
	// File addpic.php
	// ------------------------------------------------------------------------- //
	
	// void
	
	// ------------------------------------------------------------------------- //
	// File mode.php
	// ------------------------------------------------------------------------- //
	
	if (defined('MODE_PHP')) $lang_mode_php = array(
		0 => 'Verlaten beheerder modus...',
		1 => 'Starten beheerder modus...',
	);

	// ------------------------------------------------------------------------- //
	// File albmgr.php
	// ------------------------------------------------------------------------- //
	
	if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
		'alb_need_name' => 'Albums moeten een naam hebben!', //js-alert
		'confirm_modifs' => 'Weet je zeker dat je deze wijzigingen wilt maken?', //js-alert
		'no_change' => 'Je hebt geen enkele wijziging gedaan!', //js-alert
		'new_album' => 'Nieuw album',
		'confirm_delete1' => 'Weet je het zeker dat je dit album wilt verwijderen?', //js-alert
		'confirm_delete2' => '\nAlle bestanden en commentaren zullen verloren gaan!', //js-alert
		'select_first' => 'Selecteer eerst een album.', //js-alert
		'alb_mrg' => 'Album beheer',
		'my_gallery' => '* Mijn galerij *',
		'no_category' => '* Geen categorie *',
		'delete' => 'Verwijder',
		'new' => 'Nieuw',
		'apply_modifs' => 'Pas wijzigingen toe',
		'select_category' => 'Selecteer categorie',
	); 

	// ------------------------------------------------------------------------- //
	// File banning.php //cpg1.4
	// ------------------------------------------------------------------------- //
	
	if (defined('BANNING_PHP')) $lang_banning_php = array(
		'title' => 'Verban gebruikers', //cpg1.4
		'user_name' => 'Gebruikers naam', //cpg1.4
		'ip_address' => 'IP Adres', //cpg1.4
		'expiry' => 'Verloopt (leeg is voor altijd)', //cpg1.4
		'edit_ban' => 'Sla wijzigingen op', //cpg1.4
		'delete_ban' => 'Verwijder', //cpg1.4
		'add_new' => 'Voeg nieuwe verbanning toe', //cpg1.4
		'add_ban' => 'Toevoegen', //cpg1.4
		'error_user' => 'Kan de gebruiker niet vinden', //cpg1.4
		'error_specify' => 'Je moet een waarde opgeven met ofwel een gebruikersnaam ofwel een IP adres', //cpg1.4
		'error_ban_id' => 'Ongeldig verban ID!', //cpg1.4
		'error_admin_ban' => 'Je kan jezelf niet verbannen!', //cpg1.4
		'error_server_ban' => 'Weet je zeker dat je je eigen server wilt verbannan. Nou nou, dat kan dus effe niet...', //cpg1.4
		'error_ip_forbidden' => 'Je kan dit IP adres niet verbannen - het is een LAN (niet-publiek) adres!<br/>Als je toch een niet-publiek IP adres wilt verbannen, wijzig dit dan in de <a href="admin.php">Instellingen</a> (dit heeft alleen zit als je Coppermine binnen een LAN draait).', //cpg1.4
		'lookup_ip' => 'Een IP adres opzoeken', //cpg1.4
		'submit' => 'Start!', //cpg1.4
		'select_date' => 'selecteer datum', //cpg1.4
	); 

	// ------------------------------------------------------------------------- //
	// File bridgemgr.php //cpg1.4
	// ------------------------------------------------------------------------- //
	
	if (defined('BRIDGEMGR_PHP')) $lang_bridgemgr_php = array(
		'title' => 'Integratie Wizard', //cpg1.4
		'warning' => 'Waarschuwing: bij het gebruik van deze wizard moet je goed begrijpen dat persoonijke informatie wordt verzonden in de formulieren. Voer dit programma alleen op je eigen PC uit (niet op een openbare computer of in bv een internet cafe) en maak na afloop de browser cache en tijdelijke bestanden leeg. Anders kunnen anderen deze informatie lezen!', //cpg1.4
		'back' => 'terug', //cpg1.4
		'next' => 'volgende', //cpg1.4
		'start_wizard' => 'Start integratie wizard', //cpg1.4
		'finish' => 'Klaar', //cpg1.4
		'hide_unused_fields' => 'verberg ongebruikte formulier velden (aanbevolen)', //cpg1.4
		'clear_unused_db_fields' => 'maak ongeldige database waarden leeg (aanbevolen)', //cpg1.4
		'custom_bridge_file' => 'je eigen integratie bestandsnaam (als de integratie bestandnaam <i>myfile.inc.php</i> is, voer dan <i>myfile</i> in dit veld in)', //cpg1.4
		'no_action_needed' => 'Geen actie is nodig in deze stap. Druk op \'volgende\' om door te gaan.', //cpg1.4
		'reset_to_default' => 'Terugzetten naar de standaard waarde', //cpg1.4
		'choose_bbs_app' => 'kies een programma uit om Coppermine mee te laten integreren', //cpg1.4
		'support_url' => 'Klik hier voor ondersteuning bij dit programma', //cpg1.4
		'settings_path' => 'pad(en) gebruik bij jou BBS programma', //cpg1.4
		'database_connection' => 'database verbinding', //cpg1.4
		'database_tables' => 'database tabellen', //cpg1.4
		'bbs_groups' => 'BBS groepen', //cpg1.4
		'license_number' => 'Licentie nummer', //cpg1.4
		'license_number_explanation' => 'voer je licentienummer in (indien nodig)', //cpg1.4
		'db_database_name' => 'Database naam', //cpg1.4
		'db_database_name_explanation' => 'Geed de naam van de database van de BBS programma in', //cpg1.4
		'db_hostname' => 'Database host', //cpg1.4
		'db_hostname_explanation' => 'Hostname waar je mySQL database staat, normaal gesproken &quot;localhost&quot;', //cpg1.4
		'db_username' => 'Database gebruikersnaam', //cpg1.4
		'db_username_explanation' => 'mySQL gebruikersnaam voor verbinding met je BBS programmatuur', //cpg1.4
		'db_password' => 'Database wachtwoord', //cpg1.4
		'db_password_explanation' => 'Wachtwoord voor deze mySQL gebruikersnaam', //cpg1.4
		'full_forum_url' => 'Forum URL', //cpg1.4
		'full_forum_url_explanation' => 'Volledige URL naar je BBS programma (inclusief http://, bijvoorbeeld http://www.yourdomain.tld/forum)', //cpg1.4
		'relative_path_of_forum_from_webroot' => 'Relatief pad naar je BBS programma', //cpg1.4
		'relative_path_of_forum_from_webroot_explanation' => 'Relatief pad naar de BBS programma vanaf de webroot (bv: als je BBS progamma staat in http://www.yourdomain.tld/forum/, voer dan &quot;/forum/&quot; in dit veld in)', //cpg1.4
		'relative_path_to_config_file' => 'Relatief pad naar het BBS programma configuratie bestand', //cpg1.4
		'relative_path_to_config_file_explanation' => 'Relatief pad naar het BBS programma configuratie bestand, gezien vanuit de Coppermine directory (bv &quot;../forum/&quot; als je BBS programma staat in http://www.yourdomain.tld/forum/ en Coppermine in http://www.yourdomain.tld/gallery/)', //cpg1.4
		'cookie_prefix' => 'Cookie prefix', //cpg1.4
		'cookie_prefix_explanation' => 'dit is de naam van de cookie van je BBS programma', //cpg1.4
		'table_prefix' => 'Tabel prefix', //cpg1.4
		'table_prefix_explanation' => 'Moet gelijk zijn aan de prefix die je gebruikte toen je het BBS programma installeerde.', //cpg1.4
		'user_table' => 'Gebruikers tabel', //cpg1.4
		'user_table_explanation' => '(normaal gesproken moet de standaard waarde goed zijn, tenzij je installatie van je BBS programma niet standaard was)', //cpg1.4 //cpg1.4
		'session_table' => 'Sessie tabel', //cpg1.4
		'session_table_explanation' => '(normaal gesproken moet de standaard waarde goed zijn, tenzij je installatie van je BBS programma niet standaard was)', //cpg1.4
		'group_table' => 'Groepen tabel', //cpg1.4
		'group_table_explanation' => '(normaal gesproken moet de standaard waarde goed zijn, tenzij je installatie van je BBS programma niet standaard was)', //cpg1.4
		'group_relation_table' => 'Groep relatie tabel', //cpg1.4
		'group_relation_table_explanation' => '(normaalgesproken moet de standaard waarde goed zijn, tenzij je installatie van je BBS programma niet standaard was)', //cpg1.4
		'group_mapping_table' => 'Groep koppellingen tabel', //cpg1.4
		'group_mapping_table_explanation' => '(normaalgesproken moet de standaard waarde goed zijn, tenzij je installatie van je BBS programma niet standaard was)', //cpg1.4
		'use_standard_groups' => 'Gebruik standaard BBS gebruikersgroepen', //cpg1.4
		'use_standard_groups_explanation' => 'Gebruik de standaard (ingebouwde) gebruikersgroepen (aanbevolen). Deze optie laat alle eigengemaakte aanpassingen in gebruikersgroepen vervallen. Gebruik deze optie alleen als je ZEKER bent dat je weet wat je doet!', //cpg1.4
		'validating_group' => 'Gevalideerden groep', //cpg1.4
		'validating_group_explanation' => 'De groeps ID van het BBS programma waar de gebruikersnamen staan die gevalideerd moeten worden. (Normaal gesproken moet de standaard waarde goed zijn, tenzij je installatie van je BBS programma niet standaard was)', //cpg1.4
		'guest_group' => 'Gasten groep', //cpg1.4
		'guest_group_explanation' => 'De groeps ID van het BBS programma waar de gasten in staan. (De standaard waarde moet goed zijn, tenzij je installatie van je BBS programma niet standaard was)', //cpg1.4
		'member_group' => 'Leden groep', //cpg1.4
		'member_group_explanation' => 'De groeps ID van het BBS programma waar de leden in staan. (De standaard waarde moet goed zijn, tenzij je installatie van je BBS programma niet standaard was)', //cpg1.4
		'admin_group' => 'Beheerders groep', //cpg1.4
		'admin_group_explanation' => 'De groeps ID van het BBS programma waar de beheerders in staan. (De standaard waarde moet goed zijn, tenzij je installatie van je BBS programma niet standaard was)', //cpg1.4
		'banned_group' => 'Verbannen groep', //cpg1.4
		'banned_group_explanation' => 'De groeps ID van het BBS programma waar de verbannen leden in staan. (De standaard waarde moet goed zijn, tenzij je installatie van je BBS programma niet standaard was)', //cpg1.4
		'global_moderators_group' => 'Moderators groep', //cpg1.4
		'global_moderators_group_explanation' => 'De groeps ID van het BBS programma waar de moderators in staan. (De standaard waarde moet goed zijn, tenzij je installatie van je BBS programma niet standaard was)', //cpg1.4
		'special_settings' => 'BBS-specifieke instellingen', //cpg1.4
		'logout_flag' => 'phpBB versie (logout waarde)', //cpg1.4
		'logout_flag_explanation' => 'Wat is de versie van het BBS programma (deze instelling bepaalt hoe logouts worden afgehandeld)', //cpg1.4
		'use_post_based_groups' => 'Gebruik bericht gebaseerde groepen?', //cpg1.4
		'logout_flag_yes' => '2.0.5 of hoger', //cpg1.4
		'logout_flag_no' => '2.0.4 of lager', //cpg1.4
		'use_post_based_groups_explanation' => 'Moeten de groepen van het BBS programma die zijn bepaald aan de hand van het aantal post worden meegenomen (andersoortige toegangs rechten) of alleen de standaard groepen (eenvoidig beheer - aanbevolen). Deze instelling kan ook later worden aangepast.', //cpg1.4
		'use_post_based_groups_yes' => 'ja', //cpg1.4
		'use_post_based_groups_no' => 'nee', //cpg1.4
		'error_title' => 'Je moet de fouten herstellen om door te gaan. Ga naar het vorige scherm.', //cpg1.4
		'error_specify_bbs' => 'Je moet het programma opgeven welke je met Coppermine wilt integreren.', //cpg1.4
		'error_no_blank_name' => 'Je moet een bestandsnaam invoeren van je integratie bestand.', //cpg1.4
		'error_no_special_chars' => 'De integratie bestandsnaam mag geen speciale tekens bevatten behalve de underscore (_) en het streepje (-)!', //cpg1.4
		'error_bridge_file_not_exist' => 'Het integratie bestand %s bestaat niet op de server. Controleer of deze goed is geupload.', //cpg1.4
		'finalize' => 'Zet BBS integratie aan/uit', //cpg1.4
		'finalize_explanation' => 'Ton nu toe zijn de instellingen opgeslagen in de database, maar de BBS integratioe in nog niet aangezet. Je kan de integratie op ieder moment aan of uitzetten. Onthoud de beheerders naam van de standalone Coppermine installatie goed, deze heb je later weer nodig om wijzigingen aan te brengen. Als er iets verkeerd gaat, ga naar %s en zet de BBS integratie weer uit met behulp van je standalone Coppermine gebruikersnaam en wachtwoord (die je hebt ingegeven tijdens de installatie van Coppermine).', //cpg1.4
		'your_bridge_settings' => 'De integratie instellingen', //cpg1.4
		'title_enable' => 'Zet integratie aan met %s', //cpg1.4
		'bridge_enable_yes' => 'zet aan', //cpg1.4
		'bridge_enable_no' => 'zet uit', //cpg1.4
		'error_must_not_be_empty' => 'mag niet leeg zijn', //cpg1.4
		'error_either_be' => 'moet of %s of %s zijn', //cpg1.4
		'error_folder_not_exist' => '%s bestaat niet. Corrigeer de ingegeven waarde %s', //cpg1.4
		'error_cookie_not_readible' => 'Coppermine kan de cookie met de naam %s niet lezen. Herstel de waarde die je hebt ingevoerd voor %s, of ga naar het BBS installatie scherm en zorg ervoor dat de cookie directory is leesbaar voor Coppermine.',  //cpg1.4
		'error_mandatory_field_empty' => 'Je kunt het veld %s niet leeglaten. Vul een goede waarde in.', //cpg1.4
		'error_no_trailing_slash' => 'Er mag geen slash (\\) aan het eind van het veld %s staan.', //cpg1.4
		'error_trailing_slash' => 'Er moet een slash (\\) aan het einde van veld %s staan.', //cpg1.4
		'error_db_connect' => 'Kan geen contact krijgen met de mySQL database met de opgegeven informatie. mySQL gaf de volgende melding:', //cpg1.4
		'error_db_name' => 'Ondanks dat Coppermine een verbinding tot stand kon brengen, kan de database %s niet gebonden worden. Zorg ervoor dat je %s goed hebt gedifinieerd. mySQL gad de volgende melding:', //cpg1.4
		'error_prefix_and_table' => '%s en ', //cpg1.4
		'error_db_table' => 'Kan de tabel %s niet vinden. Zorg ervoor dat je de waarde %s goed hebt ingegeven.', //cpg1.4
		'recovery_title' => 'Integratie Beheer: noodreparatie', //cpg1.4
		'recovery_explanation' => 'Als je hier kwam als beheerder van de BBS integratie van Coppermine, moet je eerst als beheerder inloggen. Als je niet kan inloggen omdat er een fout zit in de integratei, kan je deze uitzetten op deze pagina. Na opgave van je gebruikersnaam en wachtwoord laat je niet inloggen, maar zal de BBS integratie uitzetten. Kijk in de documentatie voor meer informatie.', //cpg1.4
		'username' => 'Gebruikersnaam', //cpg1.4
		'password' => 'Wachtwoord', //cpg1.4
		'disable_submit' => 'Verzenden', //cpg1.4
		'recovery_success_title' => 'Inloggen gelukt', //cpg1.4
		'recovery_success_content' => 'Het is gelukt om de BBS integratie uit te zetten. Coppermine draait nu weer standalone.', //cpg1.4
		'recovery_success_advice_login' => 'Log in als beheerder om de instellingen van de BBS integratie te wijzigen of om de integratie aan of uit te zetten.', //cpg1.4
		'goto_login' => 'Ga naar de login pagina', //cpg1.4
		'goto_bridgemgr' => 'Ga naar integratie beheer', //cpg1.4
		'recovery_failure_title' => 'Inloggen mislukt', //cpg1.4
		'recovery_failure_content' => 'Je hebt de verkeerde inloggegevens opgegeven. Je moet een beheerdersnaam en wachtwoord opgeven van de standalone Coppermine (die is ingesteld tijdens de installatie).', //cpg1.4
		'try_again' => 'probeer opnieuw', //cpg1.4
		'recovery_wait_title' => 'De wachtijd is over', //cpg1.4
		'recovery_wait_content' => 'Om veiligheidsredenen is het script niet bevoegd om zovaak achter elkaar in te loggen, je moet nu eerst wachten om het later nog eens te kunnen proberen.', //cpg1.4
		'wait' => 'wacht', //cpg1.4
		'create_redir_file' => 'Maak verwijsbestand aan (aanbevolen)', //cpg1.4
		'create_redir_file_explanation' => 'Om gebruikers terug te laten keren naar Coppermine als ze zijn ingelogd op het BBS, moet er een overzet bestand worden aangemaakt in de directory van het BBS programma. Als deze optie aan stgaan, integratie beheer zal proberen dit bestand aan te maken, of je krijgt de mogelijkheid de code te kopieren, een bestand zelf aan te maken en dat de code te plakken.', //cpg1.4
		'browse' => 'blader', //cpg1.4
	);

	// ------------------------------------------------------------------------- //
	// File calendar.php //cpg1.4
	// ------------------------------------------------------------------------- //
	
	if (defined('CALENDAR_PHP')) $lang_calendar_php = array(
		'title' => 'Kalender', //cpg1.4
		'close' => 'sluiten', //cpg1.4
		'clear_date' => 'maak datumveld leeg', //cpg1.4
	);

	// ------------------------------------------------------------------------- //
	// File catmgr.php
	// ------------------------------------------------------------------------- //
	
	if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
		'miss_param' => 'Vereiste parameters voor \'%s\'bewerking niet gegeven !',
		'unknown_cat' => 'Geselecteerde categorie bestaat niet in database',
		'usergal_cat_ro' => 'Gebruikersgalerijen-categorie kan niet verwijderd worden !',
		'manage_cat' => 'Beheer categorieën',
		'confirm_delete' => 'Weet je zeker dat je deze categorie wilt VERWIJDEREN', //js-alert
		'category' => 'Categorie',
		'operations' => 'Bewerkingen',
		'move_into' => 'Verplaats naar',
		'update_create' => 'Aanpassen/Creëer categorie',
		'parent_cat' => 'Ouder categorie',
		'cat_title' => 'Categorie titel',
		'cat_thumb' => 'Categorie verkleinde afbeelding',
		'cat_desc' => 'Categorie-omschrijving', 
		'categories_alpha_sort' => 'Sorteer categorieën alfabetisch (in plaats van willekeurig)',
		'save_cfg' => 'Bewaar instellingen', //cpg1.4
	);

	// ------------------------------------------------------------------------- //
	// File admin.php //cpg1.4
	// ------------------------------------------------------------------------- //
	
	if (defined('ADMIN_PHP')) $lang_admin_php = array(
		'title' => 'Gallerij Instellingen', //cpg1.4
		'manage_exif' => 'Beheer exif weergave', //cpg1.4
		'manage_plugins' => 'Beheer plugins', //cpg1.4
		'manage_keyword' => 'Beheer zoekbegrippen', //cpg1.4
		'restore_cfg' => 'Standaard instellingen terugzetten', //cpg1.4
		'save_cfg' => 'Bewaar nieuwe instellingen', //cpg1.4
		'notes' => 'Notities', //cpg1.4
		'info' => 'Informatie', //cpg1.4
		'upd_success' => 'Coppermine instellingen zijn opgeslagen', //cpg1.4
		'restore_success' => 'Coppermine standaard instellingen zijn teruggezet', //cpg1.4
		'name_a' => 'Naam oplopend', //cpg1.4
		'name_d' => 'Naam aflopend', //cpg1.4
		'title_a' => 'Titel oplopend', //cpg1.4
		'title_d' => 'Titel aflopend', //cpg1.4
		'date_a' => 'Datum oplopend', //cpg1.4
		'date_d' => 'Datum aflopend', //cpg1.4
		'pos_a' => 'Positie aflopend', //cpg1.4
		'pos_d' => 'Positie aflopend', //cpg1.4
		'th_any' => 'Maximaal', //cpg1.4
		'th_ht' => 'Hoogte', //cpg1.4
		'th_wd' => 'Breedte', //cpg1.4
		'label' => 'tekst', //cpg1.4
		'item' => 'item', //cpg1.4
		'debug_everyone' => 'Iedereen', //cpg1.4
		'debug_admin' => ' Alleen beheerders', //cpg1.4
		'no_logs'=> 'Uit', //cpg1.4
		'log_normal'=> 'Normaal', //cpg1.4
		'log_all' => 'Alles', //cpg1.4
		'view_logs' => 'Bekijk logging', //cpg1.4
		'click_expand' => 'klik op de sectie naam deze uit te klappen', //cpg1.4
		'expand_all' => 'Uit/inklappen', //cpg1.4
		'notice1' => '(*) Deze instellingen mogen niet worden aangepast als je al waardes in de gegevens hebt zitten.', //cpg1.4
		'notice2' => '(**) Als deze waarde wordt aangepast zullen alleen bestanden vanaf dit moment beïnvloed worden. Het is aanbevolen deze waarden niet aan te passen als er al bestanden in de database zitten. Je kunt waardes aanpassen via het &quot;<a href="util.php">beheerders gereedschappen</a> menu (afbeeldinggrootte aanpassen)&quot;.',  //cpg1.4
		'notice3' => '(***) Alle loggings zijn in het Engels.', //cpg1.4
		'bbs_disabled' => 'Deze functie is uitgeschakeld als het bbs is geintegreerd', //cpg1.4
		'auto_resize_everyone' => ' Iedereen', //cpg1.4
		'auto_resize_user' => ' Alleen leden', //cpg1.4
		'ascending' => 'aflopend', //cpg1.4
		'descending' => 'oplopend', //cpg1.4
	);
	
	if (defined('ADMIN_PHP')) $lang_admin_data = array(
		'Algemene instellingen',
		array('Gallerij naam', 'gallery_name', 0, 'f=index.htm&amp;as=admin_general_name&amp;ae=admin_general_name_end'), //cpg1.4
		array('Gallerij omschrijving', 'gallery_description', 0, 'f=index.htm&amp;as=admin_general_description&amp;ae=admin_general_description_end'), //cpg1.4
		array('Gallerij email van de beheerder', 'gallery_admin_email', 0, 'f=index.htm&amp;as=admin_general_email&amp;ae=admin_general_email_end'), //cpg1.4
		array('URL van de Coppermine directory (geen \'index.php\' of zoiets aan het einde)', 'ecards_more_pic_target', 0, 'f=index.htm&amp;as=admin_general_coppermine-url&amp;ae=admin_general_coppermine-url_end'), //cpg1.4
		array('URL van je begin pagina', 'home_target', 0, 'f=index.htm&amp;as=admin_general_home-url&amp;ae=admin_general_home-url_end'), //cpg1.4
		array('Sta ZIP-downloads van favorieten toe', 'enable_zipdownload', 1, 'f=index.htm&amp;as=admin_general_zip-download&amp;ae=admin_general_zip-download_end'), //cpg1.4
		array('Tijdszone ten opzichte van GMT (huidige tijd: ' . localised_date(-1, $comment_date_fmt) . ')','time_offset',0, 'f=index.htm&amp;as=admin_general_time-offset&amp;ae=admin_general_time-offset_end&amp;top=1'), //cpg1.4
		array('Activeer versleutelde wachtwoorden (kan niet ongedaan worden gemaakt)','enable_encrypted_passwords',1, 'f=index.htm&amp;as=admin_general_encrypt_password_start&amp;ae=admin_general_encrypt_password_end&amp;top=1'), // cpg 1.4
		array('Activeer helpfunctie (help is alleen beschikbaar in het Engels)','enable_help',9, 'f=index.htm&amp;as=admin_general_help&amp;ae=admin_general_help_end'), //cpg1.4
		array('Zoekbegrippen zijn interactief','clickable_keyword_search',14, 'f=index.htm&amp;as=admin_general_keywords_start&amp;ae=admin_general_keywords_end'), //cpg1.4
		array('Activeer plugins', 'enable_plugins', 12, 'f=index.htm&amp;as=admin_general_enable-plugins&amp;ae=admin_general_enable-plugins_end'),  //cpg1.4
		array('Sta verbannen van niet-routeerbare (NAT/locale) IP adressen toe', 'ban_private_ip', 1,  'f=index.htm&amp;as=admin_general_private-ip&amp;ae=admin_general_private-ip_end'), //cpg1.4
		array('Gebruikersvriendelijke interface voor toevoegen via de batch', 'browse_batch_add', 1, 'f=index.htm&amp;as=admin_general_browsable_batch_add&amp;ae=admin_general_browsable_batch_add_end'), //cpg1.4
	
		'Taal &amp; Karakterset instellingen',
		array('Taal', 'lang', 5, 'f=index.htm&amp;as=admin_language_language&amp;ae=admin_language_language_end'), //cpg1.4
		array('Val terug op Engels bij een niet aanwezige vertaling?', 'language_fallback', 1, 'f=index.htm&amp;as=admin_language_fallback&amp;ae=admin_language_fallback_end'), //cpg1.4
		array('Karakterset', 'charset', 4, 'f=index.htm&amp;as=admin_language_charset&amp;ae=admin_language_charset_end'), //cpg1.4
		array('Laat taal lijst zien', 'language_list', 1, 'f=index.htm&amp;as=admin_language_list&amp;ae=admin_language_list_end'), //cpg1.4
		array('Laat taal vlaggen zien', 'language_flags', 8, 'f=index.htm&amp;as=admin_language_flags&amp;ae=admin_language_flags_end&amp;top=1'), //cpg1.4
		array('Geef &quot;reset&quot; weer in taal lijst', 'language_reset', 1, 'f=index.htm&amp;as=admin_language_reset&amp;ae=admin_language_reset_end&amp;top=1'), //cpg1.4
		//array('Display previous/next on tabbed pages', 'previous_next_tab', 1), //cpg1.4
	
		'Thema instellingen',
		array('Thema', 'theme', 6, 'f=index.htm&amp;as=admin_theme_theme&amp;ae=admin_theme_theme_end'), //cpg1.4
		array('Laat thema lijst zien', 'theme_list', 1, 'f=index.htm&amp;as=admin_theme_theme_list&amp;ae=admin_theme_theme_list_end'), //cpg1.4
		array('Geef &quot;reset&quot; weer in thema lijst', 'theme_reset', 1, 'f=index.htm&amp;as=admin_theme_theme_reset&amp;ae=admin_theme_theme_reset_end'), //cpg1.4
		array('Laat FAQ zien', 'display_faq', 1, 'f=index.htm&amp;as=admin_theme_faq&amp;ae=admin_theme_faq_end'), //cpg1.4
		array('Eigen menu optie titel', 'custom_lnk_name', 0,'f=index.htm&amp;as=admin_theme_custom_lnk_name&amp;ae=admin_theme_custom_lnk_name_end'), //cpg1.4
		array('URL voor eigen menu', 'custom_lnk_url', 0,'f=index.htm&amp;as=admin_language_custom_lnk_url&amp;ae=admin_language_custom_lnk_url_end'), //cpg1.4
		array('Laat bbcode help zien', 'show_bbcode_help', 1, 'f=index.htm&amp;as=admin_theme_bbcode&amp;ae=admin_theme_bbcode_end&amp;top=1'), //cpg1.4
		array('Geef blok met informatie weer bij thema\'s die XHTML en CSS compliant zijn','vanity_block',1, 'f=index.htm&amp;as=vanity_block&amp;ae=vanity_block_end'), //cpg1.4
		array('Relatief pad naar include file voor eigen header', 'custom_header_path', 0, 'f=index.htm&amp;as=admin_theme_include_path_start&amp;ae=admin_theme_include_path_end'), //cpg1.4
		array('Relatief pad naar include file voor eigen footer', 'custom_footer_path', 0, 'f=index.htm&amp;as=admin_theme_include_path_start&amp;ae=admin_theme_include_path_end'), //cpg1.4
	
		'Albums lijst',
		array('Breedte van de hoofdtabel (pixels of %)', 'main_table_width', 0, 'f=index.htm&amp;as=admin_album_table-width&amp;ae=admin_album_table-width_end'), //cpg1.4
		array('Aantal niveau\'s catagorieën', 'subcat_level', 0, 'f=index.htm&amp;as=admin_album_category-levels&amp;ae=admin_album_category-levels_end'), //cpg1.4
		array('Aantal albums per pagina', 'albums_per_page', 0, 'f=index.htm&amp;as=admin_album_number&amp;ae=admin_album_number_end'), //cpg1.4
		array('Aantal kolommen in de album lijst', 'album_list_cols', 0, 'f=index.htm&amp;as=admin_album_columns&amp;ae=admin_album_columns_end'), //cpg1.4
		array('Grootte van de thumbnails in pixels', 'alb_list_thumb_size', 0, 'f=index.htm&amp;as=admin_album_thumbnail-size&amp;ae=admin_album_thumbnail-size_end'), //cpg1.4
		array('De layout van de hoofdpagina', 'main_page_layout', 0, 'f=index.htm&amp;as=admin_album_list_content&amp;ae=admin_album_list_content_end'), //cpg1.4
		array('Geef afbeelding weer bij de hoofdniveau\'s van in de catagorieën','first_level',1, 'f=index.htm&amp;as=admin_album_first-level_thumbs&amp;ae=admin_album_first-level_thumbs_end'), //cpg1.4
		array('Sorteer catagorieën alfabetisch (in plaats van eigen sorteervolgorde)','categories_alpha_sort',1, 'f=index.htm&amp;as=admin_album_list_alphasort_start&amp;ae=admin_album_list_alphasort_end'), //cpg1.4
		array('Geef aantal afbeeldingen in het album weer','link_pic_count',1, 'f=index.htm&amp;as=admin_album_linked_files_start&amp;ae=admin_album_linked_files_end'), //cpg1.4
	
		'Thumbnails',
		array('Aantal kolommen op de thumbnail pagina', 'thumbcols', 0, 'f=index.htm&amp;as=admin_thumbnail_columns&amp;ae=admin_thumbnail_columns_end'), //cpg1.4
		array('Aantal rijen op de thumbnail pagina', 'thumbrows', 0, 'f=index.htm&amp;as=admin_thumbnail_rows&amp;ae=admin_thumbnail_rows_end'), //cpg1.4
		array('Maximaal aantal tabbladen om weer te geven', 'max_tabs', 10, 'f=index.htm&amp;as=admin_thumbnail_tabs&amp;ae=admin_thumbnail_tabs_end'), //cpg1.4
		array('Laat de bestandsnaam zien (samen met de titel)', 'caption_in_thumbview', 1, 'f=index.htm&amp;as=admin_thumbnail_display_caption&amp;ae=admin_thumbnail_display_caption_end'), //cpg1.4
		array('Geef het aantal keer dat de afbeelding bekeken is weer', 'views_in_thumbview', 1, 'f=index.htm&amp;as=admin_thumbnail_display_views&amp;ae=admin_thumbnail_display_views_end'), //cpg1.4
		array('Geef aantal keer dat commentaar gegeven is weer', 'display_comment_count', 1, 'f=index.htm&amp;as=admin_thumbnail_display_comments&amp;ae=admin_thumbnail_display_comments_end'), //cpg1.4
		array('Geef naam van de eigenaar van de afbeelding weer', 'display_uploader', 1, 'f=index.htm&amp;as=admin_thumbnail_display_uploader&amp;ae=admin_thumbnail_display_uploader_end'), //cpg1.4
		//array('Display name of admin uploaders below the thumbnail', 'display_admin_uploader', 1, 'f=index.htm&amp;as=admin_thumbnail_display_admin_uploader&amp;ae=admin_thumbnail_display_admin_uploader_end'), //cpg1.4
		array('Geef bestandnaam weer', 'display_filename', 1, 'f=index.htm&amp;as=admin_thumbnail_display_filename&amp;ae=admin_thumbnail_display_filename_end'), //cpg1.4
		//array('Geef album omschrijving weer', 'alb_desc_thumb', 1, 'f=index.htm&amp;as=admin_thumbnail_display_description&amp;ae=admin_thumbnail_display_description_end'), //cpg1.4
		array('Standaard sorteervolgorde', 'default_sort_order', 3, 'f=index.htm&amp;as=admin_thumbnail_default_sortorder&amp;ae=admin_thumbnail_default_sortorder_end'), //cpg1.4
		array('Minimum aantal stemmen dat er gedaan moet zijn voor de afbeelding wordt weergegeven in de \'beste gewaardeerd\' lijst', 'min_votes_for_rating', 0, 'f=index.htm&amp;as=admin_thumbnail_minimum_votes&amp;ae=admin_thumbnail_minimum_votes_end'), //cpg1.4
	
		'Afbeelding',
		array('Breedte van de afbeelding (pixels of %)', 'picture_table_width', 0, 'f=index.htm&amp;as=admin_image_comment_table-width&amp;ae=admin_image_comment_table-width_end'), //cpg1.4
		array('Uitgebreide informatie standaard zichtbaar', 'display_pic_info', 1, 'f=index.htm&amp;as=admin_image_comment_info_visible&amp;ae=admin_image_comment_info_visible_end'), //cpg1.4
		array('Maximale lengte van de omschrijving', 'max_img_desc_length', 0, 'f=index.htm&amp;as=admin_image_comment_descr_length&amp;ae=admin_image_comment_descr_length_end'), //cpg1.4
		array('Maximaal aantal karakers in een woord', 'max_com_wlength', 0, 'f=index.htm&amp;as=admin_image_comment_chars_per_word&amp;ae=admin_image_comment_chars_per_word_end'), //cpg1.4
		array('Laat filmstrip zien', 'display_film_strip', 1, 'f=index.htm&amp;as=admin_image_comment_filmstrip_toggle&amp;ae=admin_image_comment_filmstrip_toggle_end'), //cpg1.4
		array('Geef bestandsnaam weer onder de filmstrip', 'display_film_strip_filename', 1, 'f=index.htm&amp;as=admin_image_comment_display_film_strip_filename&amp;ae=admin_image_comment_display_film_strip_filename_end'), //cpg1.4
		array('Aantal afbeeldingen in de filmstrip', 'max_film_strip_items', 0, 'f=index.htm&amp;as=admin_image_comment_filmstrip_number&amp;ae=admin_image_comment_filmstrip_number_end'), //cpg1.4
		array('Interval tijd diashow in milliseconden (1 seconde = 1000 milliseconden)', 'slideshow_interval', 0, 'f=index.htm&amp;as=admin_image_comment_slideshow_interval&amp;ae=admin_image_comment_slideshow_interval_end'), //cpg1.4
	
		'Commentaar',
		array('Filter niet nette woorden uit het commentaar', 'filter_bad_words', 1, 'f=index.htm&amp;as=admin_image_comment_bad_words&amp;ae=admin_image_comment_bad_words_end'), //cpg1.4
		array('Sta smilies toe in commentaar', 'enable_smilies', 1, 'f=index.htm&amp;as=admin_image_comment_smilies&amp;ae=admin_image_comment_smilies_end'), //cpg1.4
		array('Sta commentaar van een en dezelfde gebruiker achter elkaar toe (flood protection)', 'disable_comment_flood_protect', 1, 'f=index.htm&amp;as=admin_image_comment_flood&amp;ae=admin_image_comment_flood_end'), //cpg1.4
		array('Maximaal aantal regels in het commentaar', 'max_com_lines', 0, 'f=index.htm&amp;as=admin_image_comment_lines&amp;ae=admin_image_comment_lines_end'), //cpg1.4
		array('Maximale lengthe van het commentaar', 'max_com_size', 0, 'f=index.htm&amp;as=admin_image_comment_length&amp;ae=admin_image_comment_length_end'), //cpg1.4
		array('Bericht beheerder van geplaatst commentaar via e-mail', 'email_comment_notification', 1, 'f=index.htm&amp;as=admin_image_comment_admin_notify&amp;ae=admin_image_comment_admin_notify_end'), //cpg1.4
		array('Sorteervolgorder van commentaar', 'comments_sort_descending', 17, 'f=index.htm&amp;as=admin_comment_sort_start&amp;ae=admin_comment_sort_end'), //cpg1.4
		array('Prefix voor niet aangemelde leden bij commentaar', 'comments_anon_pfx', 0, 'f=index.htm&amp;as=comments_anon_pfx&amp;ae=comments_anon_pfx_end'), //cpg1.4
	
		'Bestanden en thumbnails instellingen',
		array('Kwaliteit van de JPEG bestanden', 'jpeg_qual', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_jpeg_quality&amp;ae=admin_picture_thumbnail_jpeg_quality_end'), //cpg1.4
		array('Maximale groottes van een thumbnail <a href="#notice2" class="clickable_option">**</a>', 'thumb_width', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max-dimension&amp;ae=admin_picture_thumbnail_max-dimension_end'), //cpg1.4
		array('Gebruik groottes ( breedte of hoogte of maximaal voor de thumbnail ) <a href="#notice2" class="clickable_option">**</a>', 'thumb_use', 7, 'f=index.htm&amp;as=admin_picture_thumbnail_use-dimension&amp;ae=admin_picture_thumbnail_use-dimension_end'), //cpg1.4
		array('Maak middelgrote afbeeldingen aan?','make_intermediate',1, 'f=index.htm&amp;as=admin_picture_thumbnail_intermediate_toggle&amp;ae=admin_picture_thumbnail_intermediate_toggle_end'), //cpg1.4
		array('Maximale breedte of hoogte van de middelgrote afbeeldingen <a href="#notice2" class="clickable_option">**</a>', 'picture_width', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_intermediate_dimension&amp;ae=admin_picture_thumbnail_intermediate_dimension_end'), //cpg1.4
		array('Maximale grootte van de geuploade bestanden (KB)', 'max_upl_size', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max_upload_size&amp;ae=admin_picture_thumbnail_max_upload_size_end'), //cpg1.4
		array('Maximale breedte of hoogte van geuploade bestanden (pixels)', 'max_upl_width_height', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max_upload_dimension&amp;ae=admin_picture_thumbnail_max_upload_dimension_end'), //cpg1.4
		array('Pas grootte van de afbeeldingen automatisch aan indien groter dan de maximale waarden?', 'auto_resize', 16, 'f=index.htm&amp;as=admin_picture_thumbnail_auto-resize&amp;ae=admin_picture_thumbnail_auto-resize_end'), //cpg1.4
	
		'Bestanden en thumbnails geavanceerde instellingen',
		array('Albums kunnen persoonlijk zijn (Let op: als je deze waarde van \'ja\' naar \'nee\' omzet, zullen alle persoonlijke albums publiek worden)', 'allow_private_albums', 1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_private_toggle&amp;ae=admin_picture_thumb_advanced_private_toggle_end'), //cpg1.4
		array('Geef persoonlijke albums icoon weer aan een niet ingelogde gebruiker','show_private',1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_private_icon_show&amp;ae=admin_picture_thumb_advanced_private_icon_show_end'), //cpg1.4
		array('Verboden karakerts in de bestandsnaam', 'forbiden_fname_char',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_filename_forbidden_chars&amp;ae=admin_picture_thumb_advanced_filename_forbidden_chars_end'), //cpg1.4
		//array('Accepted file extensions for uploaded pictures', 'allowed_file_extensions',0, 'f=index.htm&amp;as=&amp;ae=_end'), //cpg1.4
		array('Toegestane afbeeldings formaten', 'allowed_img_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_pic_extensions&amp;ae=admin_picture_thumb_advanced_pic_extensions_end'), //cpg1.4
		array('Toegestane filmb formaten', 'allowed_mov_types',0, 'f=index.htm&amp;as=admin_thumbs_advanced_movie&amp;ae=admin_thumbs_advanced_movie_end'), //cpg1.4
		array('Film weergave autostart', 'media_autostart',1, 'f=index.htm&amp;as=admin_movie_autoplay&amp;ae=admin_movie_autoplay_end'), //cpg1.4
		array('Toegestane geluidsformaten', 'allowed_snd_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_audio_extensions&amp;ae=admin_picture_thumb_advanced_audio_extensions_end'), //cpg1.4
		array('Toegestanden documentformaten', 'allowed_doc_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_doc_extensions&amp;ae=admin_picture_thumb_advanced_doc_extensions_end'), //cpg1.4
		array('Wijze van aanpassen van de afbeeldingen','thumb_method',2, 'f=index.htm&amp;as=admin_picture_thumb_advanced_resize_method&amp;ae=admin_picture_thumb_advanced_resize_method_end'), //cpg1.4
		array('Pad naar ImageMagick (bijvoorbeeld /usr/bin/X11/)', 'impath', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_im_path&amp;ae=admin_picture_thumb_advanced_im_path_end'), //cpg1.4
		//array('Allowed image types (only valid for ImageMagick)', 'allowed_img_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_allowed_imagetypes&amp;ae=admin_picture_thumb_advanced_allowed_imagetypes_end'), //cpg1.4
		array('Command line opties voor ImageMagick', 'im_options', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_im_commandline&amp;ae=admin_picture_thumb_advanced_im_commandline_end'), //cpg1.4
		array('Lees EXIF data uit JPEG bestanden', 'read_exif_data', 13, 'f=index.htm&amp;as=admin_picture_thumb_advanced_exif&amp;ae=admin_picture_thumb_advanced_exif_end'), //cpg1.4
		array('Lees IPTC data uit JPEG bestanden', 'read_iptc_data', 1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_iptc&amp;ae=admin_picture_thumb_advanced_iptc_end'), //cpg1.4
		array('De album directory <a href="#notice1" class="clickable_option">*</a>', 'fullpath', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_albums_dir&amp;ae=admin_picture_thumb_advanced_albums_dir_end'), //cpg1.4
		array('De gebruikers bestanden directory <a href="#notice1" class="clickable_option">*</a>', 'userpics', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_userpics_dir&amp;ae=admin_picture_thumb_advanced_userpics_dir_end'), //cpg1.4
		array('De prefix voor middelgrote bestanden <a href="#notice1" class="clickable_option">*</a>', 'normal_pfx', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_intermediate_prefix&amp;ae=admin_picture_thumb_advanced_intermediate_prefix_end'), //cpg1.4
		array('De prefix voor middelgrote thumbnails <a href="#notice1" class="clickable_option">*</a>', 'thumb_pfx', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_thumbs_prefix&amp;ae=admin_picture_thumb_advanced_thumbs_prefix_end'), //cpg1.4
		array('Standaard toegangsrecht voor directories', 'default_dir_mode', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_chmod_folder&amp;ae=admin_picture_thumb_advanced_chmod_folder_end'), //cpg1.4
		array('Standaard toegangsrecht voor bestanden', 'default_file_mode', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_chmod_files&amp;ae=admin_picture_thumb_advanced_chmod_files_end'), //cpg1.4
	
		'Gebruikers instellingen',
		array('Sta nieuwe registraties toe', 'allow_user_registration', 1, 'f=index.htm&amp;as=admin_allow_registration&amp;ae=admin_allow_registration_end'), //cpg1.4
		array('Sta gastgebruikers toe (gasten of anoniem)', 'allow_unlogged_access', 1, 'f=index.htm&amp;as=admin_allow_unlogged_access&amp;ae=admin_allow_unlogged_access_end'), //cpg1.4
		array('Gebruikers registratie moet via email verificatie', 'reg_requires_valid_email', 1, 'f=index.htm&amp;as=admin_registration_verify&amp;ae=admin_registration_verify_end'), //cpg1.4
		array('Geef melding via e-mail aan beheerder bij nieuwe gebruikersaanmelding', 'reg_notify_admin_email', 1, 'f=index.htm&amp;as=admin_registration_notify&amp;ae=admin_registration_notify_end'), //cpg1.4
		array('Beheerder moet nieuwe gebruiker activeren', 'admin_activation', 1, 'f=index.htm&amp;as=admin_activation&amp;ae=admin_activation_end'),  //cpg1.4
		array('Sta meerdere gebruikers met eenzelfde e-mail adres toe', 'allow_duplicate_emails_addr', 1, 'f=index.htm&amp;as=admin_allow_duplicate_emails_addr&amp;ae=admin_allow_duplicate_emails_addr_end'), //cpg1.4
		array('Geef melding via e-mail aan beheerder bij klaarstaan bestanden voor upload', 'upl_notify_admin_email', 1, 'f=index.htm&amp;as=admin_approval_notify&amp;ae=admin_approval_notify_end'), //cpg1.4
		array('Sta toe dat ingelogde gebruikers ledenlijst zien', 'allow_memberlist', 1, 'f=index.htm&amp;as=admin_user_memberlist&amp;ae=admin_user_memberlist_end'), //cpg1.4
		array('Sta toe dat gebruikers hun e-mail adres in hun profiel kunnen wijzigen', 'allow_email_change', 1, 'f=index.htm&amp;as=admin_user_allow_email_change&amp;ae=admin_user_allow_email_change_end'), //cpg1.4
		array('Sta toe dat gebruikers volledig beheer over hun eigen afbeeldingen hebben in openbare gallerijen', 'users_can_edit_pics', 1, 'f=index.htm&amp;as=admin_user_editpics_public_start&amp;ae=admin_user_editpics_public_end'), //cpg1.4
		array('Aantal mislukte inlogpogingen voor de gebruiker op de tijdelijke verbannen lijst komt te staan (bescherming tegen hacking)', 'login_threshold', 0, 'f=index.htm&amp;as=admin_user_login_start&amp;ae=admin_user_login_end'), //cpg1.4
		array('Duur dat een gebruiker op de tijdelijke verbannen lijst komt te staan (minuten)', 'login_expiry', 0, 'f=index.htm&amp;as=admin_user_login_start&amp;ae=admin_user_login_end'), //cpg1.4
		array('Sta klachten naar beheerder toe', 'report_post', 1, 'f=index.htm&amp;as=admin_user_enable_report&amp;ae=admin_user_enable_report_end'),  //cpg1.4
	
		// custom profile fields, //cpg1.4
		'Eigen velden in de gebruikers profielen (laat leeg inden niet gebruikt). Gebruik profiel 6 voor lange ingaven zoals biografieen', //cpg1.4
		array('Profiel 1 naam', 'user_profile1_name', 0, 'f=index.htm&amp;as=admin_custom&amp;ae=admin_custom_end'), //cpg1.4
		array('Profiel 2 naam', 'user_profile2_name', 0), //cpg1.4
		array('Profiel 3 naam', 'user_profile3_name', 0), //cpg1.4
		array('Profiel 4 naam', 'user_profile4_name', 0), //cpg1.4
		array('Profiel 5 naam', 'user_profile5_name', 0), //cpg1.4
		array('Profiel 6 naam', 'user_profile6_name', 0), //cpg1.4
	
		'Eigen velden in de afbeeldings omschrijvingen (laat leeg inden niet gebruikt)', //cpg1.4
		array('Veld 1 naam', 'user_field1_name', 0, 'f=index.htm&amp;as=admin_custom_image&amp;ae=admin_custom_image_end'), //cpg1.4
		array('Veld 2 naam', 'user_field2_name', 0), 
		array('Veld 3 naam', 'user_field3_name', 0), 
		array('Veld 4 naam', 'user_field4_name', 0), 
	
		'Cookies instellingen',
		array('Cookie naam', 'cookie_name', 0, 'f=index.htm&amp;as=admin_cookie_name&amp;ae=admin_cookie_name_end'), //cpg1.4
		array('Cookie pad', 'cookie_path', 0, 'f=index.htm&amp;as=admin_cookie_path&amp;ae=admin_cookie_path_end'), //cpg1.4
	
		'E-mail instellingen  (normaal gesproken hoeft deze niet te worden aangepast, laat alle velden leeg indien je niet zeker bent wat er moet worden ingevuld)', //cpg1.4
		array('SMTP Host (leeg laten om gebruik te maken van sendmail)', 'smtp_host', 0, 'f=index.htm&amp;as=admin_email&amp;ae=admin_email_end'), //cpg1.4
		array('SMTP gebruikersnaam', 'smtp_username', 0), //cpg1.4
		array('SMTP wachtwoord', 'smtp_password', 0), //cpg1.4
	
		'Logging en statistieken',
		array('Logging mode <a href="#notice3" class="clickable_option">***</a>', 'log_mode', 11, 'f=index.htm&amp;as=admin_logging_log_mode&amp;ae=admin_logging_log_mode_end'), //cpg1.4
		array('Log e-cards', 'log_ecards', 1, 'f=index.htm&amp;as=admin_general_log_ecards&amp;ae=admin_general_log_ecards_end'), //cpg1.4
		array('Hou gedetailleerde stemmen statistieken bij','vote_details',1, 'f=index.htm&amp;as=admin_logging_votedetails&amp;ae=admin_logging_votedetails_end'), //cpg1.4
		array('Hou gedetailleerde hit statistieken bij','hit_details',1, 'f=index.htm&amp;as=admin_logging_hitdetails&amp;ae=admin_logging_hitdetails_end'), //cpg1.4
	
		'Onderhouds instellingen',
		array('Zet debug mode aan', 'debug_mode', 9, 'f=index.htm&amp;as=debug_mode&amp;ae=debug_mode_end'), //cpg1.4
		array('Laat berichten zien in debug mode', 'debug_notice', 1, 'f=index.htm&amp;as=admin_misc_debug_notices&amp;ae=admin_misc_debug_notices_end'), //cpg1.4
		array('Gallerij is offline', 'offline', 1, 'f=index.htm&amp;as=admin_general_offline&amp;ae=admin_general_offline_end'), //cpg1.4
	);

	// ------------------------------------------------------------------------- //
	// File db_ecard.php
	// ------------------------------------------------------------------------- //
	
	if (defined('DB_ECARD_PHP')) $lang_db_ecard_php = array(
		'title' => 'Stuur e-cards',
		'ecard_sender' => 'Afzender',
		'ecard_recipient' => 'Ontvanger',
		'ecard_date' => 'Datum',
		'ecard_display' => 'Laat e-card zien',
		'ecard_name' => 'Naam',
		'ecard_email' => 'E-mail',
		'ecard_ip' => 'IP #',
		'ecard_ascending' => 'oplopend',
		'ecard_descending' => 'aflopend',
		'ecard_sorted' => 'Gesorteerd',
		'ecard_by_date' => 'op datum',
		'ecard_by_sender_name' => 'op afzender\'s naam',
		'ecard_by_sender_email' => 'op afzender\'s e-mail',
		'ecard_by_sender_ip' => 'op afzender\'s IP-adres',
		'ecard_by_recipient_name' => 'op ontvanger\'s naam',
		'ecard_by_recipient_email' => 'op ontvanger\'s e-mail',
		'ecard_number' => 'tonen record %s aan %s van %s',
		'ecard_goto_page' => 'ga naar pagina',
		'ecard_records_per_page' => 'Records per pagina',
		'check_all' => 'Selecteer alles',
		'uncheck_all' => 'De-selecteer alles',
		'ecards_delete_selected' => 'Verwijder geselecteerde e-cards',
		'ecards_delete_confirm' => 'Weet je zeker dat je de records wilt verwijderen? Selecteer de checkbox!',
		'ecards_delete_sure' => 'Ik weet het zeker',
	);

	// ------------------------------------------------------------------------- //
	// File db_input.php
	// ------------------------------------------------------------------------- //
	
	if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
		'empty_name_or_com' => 'Je moet je naam en commentaar opgeven.',
		'com_added' => 'Je commentaar is toegevoegd.',
		'alb_need_title' => 'Je moet een naam geven aan het album !',
		'no_udp_needed' => 'Geen aanpassing nodig.',
		'alb_updated' => 'Het album is aangepast.',
		'unknown_album' => 'Geselecteerde album bestaat niet of je hebt geen toestemming naar dit album te uploaden.',
		'no_pic_uploaded' => 'Er is geen bestand geupload !<br/><br/>Indien je echt een bestand geselecteerd hebt om te uploaden, controleer of de server bestands-upload toestaat...',
		'err_mkdir' => 'Creëren van map %s niet gelukt !',
		'dest_dir_ro' => 'Bestemmingsmap %s is niet beschrijfbaar door het script !',
		'err_move' => 'Onmogelijk %s te verplaatsen naar %s !',
		'err_fsize_too_large' => 'Het door jou geuploade bestand is te groot (maximum toegelaten is %s x %s) !', //obsolete since cpg1.3 - consider removal in cpg1.4 once upload.php has been overhauled
		'err_imgsize_too_large' => 'Het door jou geuploade bestand is te groot (maximum toegestaan is %s KB) !', //obsolete since cpg1.3 - consider removal in cpg1.4 once upload.php has been overhauled
		'err_invalid_img' => 'Het bestand dat je geupload hebt, is geen geldig afbeeldingenbestand !',
		'allowed_img_types' => 'Je kunt aleen %s afbeeldingen uploaden.',
		'err_insert_pic' => 'Het bestand \'%s\' kan niet ingevoegd worden in het album.',
		'upload_success' => 'Je bestand is met succes geupload<br/><br/>Het wordt zichtbaar als de beheerder het goedgekeurd heeft.',
		'notify_admin_email_subject' => '%s - Upload-melding',
		'notify_admin_email_body' => 'Een foto is geupload door %s waarvoor toestemming is vereist. Bezoek %s',
		'info' => 'Informatie',
		'com_added' => 'Commentaar toegevoegd.',
		'alb_updated' => 'Album aangepast.',
		'err_comment_empty' => 'Je commentaar is leeg !',
		'err_invalid_fext' => 'Alleen bestanden met de volgende extensie worden geaccepteerd : <br/><br/>%s.',
		'no_flood' => 'Sorry, maar je bent de auteur van het laatste geposte commentaar voor dit bestand<br/><br/>Wijzig het commentaar dat je toegevoegd hebt',
		'redirect_msg' => 'je wordt doorgestuurd.<br/><br/><br/>Klik \'Doorgaan\' indien de pagina niet automatisch ververst wordt',
		'upl_success' => 'Je bestand is met succes toegevoegd.',
		'email_comment_subject' => 'Commentaar toegevoegd op Coppermine Photo Gallery',
		'email_comment_body' => 'Er heeft iemand commentaar toegevoegd in je galerij. Bekijk het op', 
		'album_not_selected' => 'Album is niet geselecteerd', //cpg1.4
		'com_author_error' => 'Een gegeristeerde gebruiker gebruikt deze inlognaam al, kies een andere naam', //cpg1.4
	);

	// ------------------------------------------------------------------------- //
	// File delete.php
	// ------------------------------------------------------------------------- //
	
	if (defined('DELETE_PHP')) $lang_delete_php = array(
		'caption' => 'Koptekst',
		'fs_pic' => 'Originele grootte foto',
		'del_success' => 'met succes verwijderd',
		'ns_pic'  => 'normale fotogrootte',
		'err_del' => 'kan niet verwijderd worden',
		'thumb_pic' => 'verkleinde afbeelding',
		'comment' => 'commentaar',
		'im_in_alb' => 'foto in album',
		'alb_del_success' => 'Album \'%s\' verwijderd',
		'alb_mgr' => 'Album Manager',
		'err_invalid_data' => 'Ongeldige data ontvangen in \'%s\'',
		'create_alb' => 'creëeren album \'%s\'',
		'update_alb' => 'Aanpassen album \'%s\' met titel \'%s\' en index \'%s\'',
		'del_pic' => 'Verwijder bestand',
		'del_alb' => 'Verwijder album',
		'del_user' => 'Verwijder gebruiker',
		'err_unknown_user' => 'De geselecteerde gebruiker bestaat niet !',
		'comment_deleted' => 'Commentaar met succes verwijderd', 
		'err_empty_groups' => 'Er is geen groepen tabel, of de tabel is nog leeg!', //cpg1.4
		'npic' => 'Afbeelding', //cpg1.4
		'pic_mgr' => 'Afbeeldingsbeheer', //cpg1.4
		'update_pic' => 'Aanpassen afbeelding \'%s\' met bestandsnaam \'%s\' en index \'%s\'', //cpg1.4
		'username' => 'Gebruikersnaam', //cpg1.4
		'anonymized_comments' => '%s commentaarregel(s) anoniem gemaakt', //cpg1.4
		'anonymized_uploads' => '%s openbare upload(s) anoniem gemaakt', //cpg1.4
		'deleted_comments' => '%s commentaarregel(s) verwijderd', //cpg1.4
		'deleted_uploads' => '%s openbare upload(s) verwijderd', //cpg1.4
		'user_deleted' => 'gebruiker %s verwijderd', //cpg1.4
		'activate_user' => 'Activeer gebruiker', //cpg1.4
		'user_already_active' => 'Gebruiker is al geactiveerd', //cpg1.4
		'activated' => 'Geactiveerd', //cpg1.4
		'deactivate_user' => 'Deactiveer gebruiker', //cpg1.4
		'user_already_inactive' => 'Gebruiker is al gedeactiveerd', //cpg1.4
		'deactivated' => 'Gedeactiveerd', //cpg1.4
		'reset_password' => 'Reset wachtwoord(en)', //cpg1.4
		'password_reset' => 'Wachtwoord gereset naar %s', //cpg1.4
		'change_group' => 'Verander hoofdgroep', //cpg1.4
		'change_group_to_group' => 'Veranderd van %s naar %s', //cpg1.4
		'add_group' => 'Voeg secundaire groep toe', //cpg1.4
		'add_group_to_group' => 'Gebruiker %s toegevoegd aan groep %s. Hij/Zij is nu lid van de primaire groepf %s en van de secundaire groep(en) %s.', //cpg1.4
		'status' => 'Status', //cpg1.4
	);

	// ------------------------------------------------------------------------- //
	// File displayecard.php
	// ------------------------------------------------------------------------- //
	
	if (defined('DISPLAYECARD_PHP')) {
	
		$lang_displayecard_php = array(
		  'invalid_data' => 'De gegevens voor de e-card waar je mee bezig bent is nie geschikt voor de e-mail programma. Controleer of de link goed is ingetikt.',
		); 
	
	}

	// ------------------------------------------------------------------------- //
	// File displayimage.php
	// ------------------------------------------------------------------------- //
	
	if (defined('DISPLAYIMAGE_PHP')){
	
		$lang_display_image_php = array(
			'confirm_del' => 'Weet je zeker dat je dit bestand wilt VERWIJDEREN ? \\nCommentaar wordt ook verwijderd.',
			'del_pic' => 'VERWIJDER DIT BESTAND',
			'size' => '%s x %s pixels',
			'views' => '%s keer',
			'slideshow' => 'Diashow',
			'stop_slideshow' => 'STOP DIASHOW',
			'view_fs' => 'Klik op de foto om originele grootte te bekijken',
			'edit_pic' => 'Wijzig omschrijving',  //cpg1.4
			'crop_pic' => 'Snijden en draaien', 
			'set_player' => 'Verander `standaard afspeel programma',
		);
	
		$lang_picinfo = array(
			'title' =>'Bestandsinformatie',
			'Filename' => 'Bestandsnaam',
			'Album name' => 'Album naam',
			'Rating' => 'Populariteit (%s stemmen)',
			'Keywords' => 'Zoekbegrippen',
			'File Size' => 'Bestandsgrootte',
			'Date Added' => 'Datum toegevoegd', //cpg1.4
			'Dimensions' => 'Afmetingen',
			'Displayed' => 'Weergegeven',
			'URL' => 'URL', //cpg1.4
			'Make' => 'Fabrikant', //cpg1.4
			'Model' => 'Model', //cpg1.4
			'DateTime' => 'Datum/Tijd', //cpg1.4
			'DateTimeOriginal' => 'Datum genomen', //cpg1.4
			'ISOSpeedRatings'=>'ISO', //cpg1.4
			'MaxApertureValue' => 'Diafragma', //cpg1.4
			'FocalLength' => 'Zoom', //cpg1.4
			'Comment' => 'Commentaar',
			'addFav'=>'Toevoegen aan favorieten',
			'addFavPhrase'=>'Favorieten',
			'remFav'=>'Verwijderen uit favorieten',
			'iptcTitle'=>'IPTC Titel',
			'iptcCopyright'=>'IPTC Copyright',
			'iptcKeywords'=>'IPTC Zoekbegrippen',
			'iptcCategory'=>'IPTC Catagorie',
			'iptcSubCategories'=>'IPTC Sub Catagorie',
			'ColorSpace' => 'Kleur', //cpg1.4
			'ExposureProgram' => 'Camera Programma', //cpg1.4
			'Flash' => 'Flits', //cpg1.4
			'MeteringMode' => 'Focus methode', //cpg1.4
			'ExposureTime' => 'Belichtindtijd', //cpg1.4
			'ExposureBiasValue' => 'Belichtingswaarde', //cpg1.4
			'ImageDescription' => 'Omschrijving', //cpg1.4
			'Orientation' => 'Oriëntatie', //cpg1.4
			'xResolution' => 'X Resolutie', //cpg1.4
			'yResolution' => 'Y Resolutie', //cpg1.4
			'ResolutionUnit' => 'Resolutie eenheid', //cpg1.4
			'Software' => 'Software', //cpg1.4
			'YCbCrPositioning' => 'YCbCr Positie', //cpg1.4
			'ExifOffset' => 'Exif Offset', //cpg1.4
			'IFD1Offset' => 'IFD1 Offset', //cpg1.4
			'FNumber' => 'FNummer', //cpg1.4
			'ExifVersion' => 'Exif versie', //cpg1.4
			'DateTimeOriginal' => 'Datum/Tijd orgineel', //cpg1.4
			'DateTimedigitized' => 'Datum/Tijd opname', //cpg1.4
			'ComponentsConfiguration' => 'Componenten', //cpg1.4
			'CompressedBitsPerPixel' => 'Bits per pixel', //cpg1.4
			'LightSource' => 'Lichtbron', //cpg1.4
			'ISOSetting' => 'ISO instellingen', //cpg1.4
			'ColorMode' => 'Kleur methode', //cpg1.4
			'Quality' => 'Kwaliteit', //cpg1.4
			'ImageSharpening' => 'Scherpte', //cpg1.4
			'FocusMode' => 'Focus', //cpg1.4
			'FlashSetting' => 'Flits instellingen', //cpg1.4
			'ISOSelection' => 'ISO waarde', //cpg1.4
			'ImageAdjustment' => 'Aanpassingen', //cpg1.4
			'Adapter' => 'Adapter', //cpg1.4
			'ManualFocusDistance' => 'Afstand Handmatige Focus', //cpg1.4
			'DigitalZoom' => 'Digitale Zoom', //cpg1.4
			'AFFocusPosition' => 'AF Focus Positie', //cpg1.4
			'Saturation' => 'Verzadiging', //cpg1.4
			'NoiseReduction' => 'Noise Reductie', //cpg1.4
			'FlashPixVersion' => 'Flash Pix Versie', //cpg1.4
			'ExifImageWidth' => 'Exif Afbeeldings Breedte', //cpg1.4
			'ExifImageHeight' => 'Exif Afbeeldings Hoogte', //cpg1.4
			'ExifInteroperabilityOffset' => 'Exif Interoperability Offset', //cpg1.4
			'FileSource' => 'Bron', //cpg1.4
			'SceneType' => 'Scene Type', //cpg1.4
			'CustomerRender' => 'Eigen Rendering', //cpg1.4
			'ExposureMode' => 'Belichtings Methode', //cpg1.4
			'WhiteBalance' => 'Witbalans', //cpg1.4
			'DigitalZoomRatio' => 'Digitale Zoom Ratio', //cpg1.4
			'SceneCaptureMode' => 'Scene', //cpg1.4
			'GainControl' => 'Gain Control', //cpg1.4
			'Contrast' => 'Contrast', //cpg1.4
			'Saturation' => 'Verzadiging', //cpg1.4
			'Sharpness' => 'Scherpte', //cpg1.4
			'ManageExifDisplay' => 'Beheer Exif Display', //cpg1.4
			'submit' => 'Verzenden', //cpg1.4
			'success' => 'Informatie opgeslagen.', //cpg1.4
			'details' => 'Details', //cpg1.4
		);
	
		$lang_display_comments = array(
			'OK' => 'OK',
			'edit_title' => 'Wijzig dit commentaar.',
			'confirm_delete' => 'Weet je zeker dat je dit commentaar wilt verwijderen ?', //js-alert
			'add_your_comment' => 'Voeg je commentaar toe.',
			'name'=>'Naam', 
			'comment'=>'Commentaar', 
			'your_name' => 'Je naam', 
			'report_comment_title' => 'Dien een klacht over dit commentaar in bij de beheerder', //cpg1.4
		);
	
		$lang_fullsize_popup = array( 
			'click_to_close' => 'Klik op de foto om dit venster te sluiten', 
		);
	
	}

	// ------------------------------------------------------------------------- //
	// File ecard.php
	// ------------------------------------------------------------------------- //
	
	if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
		'title' => 'Stuur een e-card', 
		'invalid_email' => '<font color="red"><b>Waarschuwing</b></font>: ongeldig e-mailadres:', //cpg1.4
		'ecard_title' => 'Een e-card van %s voor jou',
		'error_not_image' => 'Alleen foto\'s kunnen als een e-card verzonden worden.',
		'view_ecard' => 'Indien de e-card niet juist wordt weergegeven, klik dan op deze link', //cpg1.4
		'view_ecard_plaintext' => 'To view the ecard, copy and paste this url into your browser\'s address bar:', //cpg1.4
		'view_more_pics' => 'Klik op deze link om meer foto\'s te bekijken !', //cpg1.4
		'send_success' => 'Je e-card is verzonden',
		'send_failed' => 'Sorry, maar de server kan je e-card niet verzenden...',
		'from' => 'Van',
		'your_name' => 'Jouw naam',
		'your_email' => 'Jouw e-mailadres',
		'to' => 'Aan',
		'rcpt_name' => 'Naam geadresseerde',
		'rcpt_email' => 'E-mailadres geadresseerde',
		'greetings' => 'Onderwerp', //cpg1.4
		'message' => 'Bericht', //cpg1.4
		'ecards_footer' => 'Gestuurd door %s vanaf IP adres %s om %s (Gallerij tijd)', //cpg1.4
		'preview' => 'Voorbeeldweergave van de e-card', //cpg1.4
		'preview_button' => 'Voorbeeldweergave', //cpg1.4
		'submit_button' => 'E-card versturen', //cpg1.4
		'preview_view_ecard' => 'Dit zal een alternatieve link zijn naar de aangemaakte e-card. Deze zal niet werken in de voorbeeldweergave.', //cpg1.4
	); 

	// ------------------------------------------------------------------------- //
	// File report_file.php //cpg1.4
	// ------------------------------------------------------------------------- //
	
	if (defined('REPORT_FILE_PHP') || defined('DISPLAYREPORT_PHP')) $lang_report_php =array(
		'title' => 'Klachten naar beheerder', //cpg1.4
		'invalid_email' => '<b>Waarschuwing</b> : Ongeldig e-mail adres!', //cpg1.4
		'report_subject' => 'Een klacht van %s over gallerij %s', //cpg1.4
		'view_report' => 'Alternatieve link als deze klacht niet goed zichtbaar is', //cpg1.4
		'view_report_plaintext' => 'Om de klacht te bekijken, knip en plak deze URL in de webbrowser:', //cpg1.4
		'view_more_pics' => 'Gallerij', //cpg1.4
		'send_success' => 'Je klacht is verzonden', //cpg1.4
		'send_failed' => 'Sorry, de server kan je klacht niet verzenden...', //cpg1.4
		'from' => 'Van', //cpg1.4
		'your_name' => 'Je naam', //cpg1.4
		'your_email' => 'Je e-mail adres', //cpg1.4
		'to' => 'Aan', //cpg1.4
		'administrator' => 'Beheerder', //cpg1.4
		'subject' => 'Onderwerp', //cpg1.4
		'comment_field_name' => 'Klacht over commentaar van "%s"', //cpg1.4
		'reason' => 'Reden', //cpg1.4
		'message' => 'Bericht', //cpg1.4
		'report_footer' => 'Verstuurt door %s van IP adres %s om %s (Gallerij tijd)', //cpg1.4
		'obscene' => 'obseen', //cpg1.4
		'offensive' => 'aanstootgevend', //cpg1.4
		'misplaced' => 'niet relevant/misplaatst', //cpg1.4
		'missing' => 'niet aanwezig', //cpg1.4
		'issue' => 'fout/kan afbeelding niet zien', //cpg1.4
		'other' => 'anders', //cpg1.4
		'refers_to' => 'Klacht is van toepassing op', //cpg1.4
		'reasons_list_heading' => 'reden(en) voor de klacht:', //cpg1.4
		'no_reason_given' => 'geen reden is opgegeven', //cpg1.4
		'go_comment' => 'Ga naar commentaar', //cpg1.4
		'view_comment' => 'Laat de volledige  klacht met het commentaar zien', //cpg1.4
		'type_file' => 'bestand', //cpg1.4
		'type_comment' => 'commentaar', //cpg1.4
	);

	// ------------------------------------------------------------------------- //
	// File editpics.php
	// ------------------------------------------------------------------------- //
	
	if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
		'pic_info' => 'Bestands&nbsp;info',
		'album' => 'Album',
		'title' => 'Titel', 
		'filename' => 'Filename', //cpg1.4
		'desc' => 'Omschrijving',
		'keywords' => 'Zoekbegrip', 
		'new_keyword' => 'Nieuw zoekbegrip', //cpg1.4
		'new_keywords' => 'Geen zoekbegrippen gevonden', //cpg1.4
		'existing_keyword' => 'Bestaand zoekbegrip', //cpg1.4
		'pic_info_str' => '%s×%s - %sKB - %s bekeken - %s stemmen',
		'approve' => 'Laat bestand toe',
		'postpone_app' => 'Stel toelating uit',
		'del_pic' => 'Verwijder bestand', 
		'del_all' => 'Verwijder ALLE bestanden', //cpg1.4
		'read_exif' => 'Lees EXIF-info opnieuw',
		'reset_view_count' => 'Reset bekeken teller', 
		'reset_all_view_count' => 'Reset ALLE tellers', //cpg1.4
		'reset_votes' => 'Reset stemmen', 
		'reset_all_votes' => 'Reset ALLE stemmen', //cpg1.4
		'del_comm' => 'verwijder commentaar', 
		'del_all_comm' => 'Verwijder ALLE commentaarregels', //cpg1.4
		'upl_approval' => 'Upload-toestemming', //cpg1.4
		'edit_pics' => 'Wijzig bestanden',
		'see_next' => 'Bekijk volgend bestand',
		'see_prev' => 'Bekijk vorig bestand',
		'n_pic' => '%s bestanden',
		'n_of_pic_to_disp' => 'Aantal te tonen bestanden',
		'apply' => 'Pas wijzigingen toe',
		'crop_title' => 'Coppermine Foto Editor',
		'preview' => 'Voorbeeld',
		'save' => 'Bewaar foto',
		'save_thumb' =>'Bewaar als verkleinde afbeelding',
		'gallery_icon' => 'Maak deze mijn icoon', //cpg1.4
		'sel_on_img' =>'De selectie moet geheel op de afbeelding liggen!', //js-alert
		'album_properties' =>'Album instellingen', //cpg1.4
		'parent_category' =>'Hoofd catagorie', //cpg1.4
		'thumbnail_view' =>'Thumbnail weergave', //cpg1.4
		'select_unselect' =>'selecteer/deselecteer alles', //cpg1.4
		'file_exists' => 'Doelbestand \'%s\' bestaat al.', //cpg1.4
		'rename_failed' => 'Het is niet gelukt om \'%s\' te hernoemen naar \'%s\'.', //cpg1.4
		'src_file_missing' => 'Bron bestand \'%s\' bestaat niet.', //cpg1.4
		'mime_conv' => 'Kan bestand \'%s\' niet converteren naar \'%s\'', //cpg1.4
		'forb_ext' => 'Verboden bestandstype.', //cpg1.4
	);

	// ------------------------------------------------------------------------- //
	// File faq.php
	// ------------------------------------------------------------------------- //
	
	if (defined('FAQ_PHP')) $lang_faq_php = array(
		'faq' => 'Veel gestelde vragen',
		'toc' => 'Inhoudsopgave',
		'question' => 'Vraag: ',
		'answer' => 'Antwoord: ',
	);
	
	if (defined('FAQ_PHP')) $lang_faq_data = array(
		'Veel gestelde vragen - algemeen',
		array('Waarom moet ik registreren?', 'Registratie kan wel of niet worden vereist door de beheerder van de site. Registratie geeft een gebruiker toegevoegde mogelijkheden zoals uploaden, het hebben van een favorietenlijst, waardering van foto\'s en het plaatsen van commentaar etc.', 'allow_user_registration', '0'),
		array('Hoe kan ik registreren?', 'Ga naar &quot;Registreer&quot; en vul de vereiste velden in (en als je wilt de optionele).<br/>Als de beheerder e-mailaanmelding heeft geactiveerd, zul je nadat je de informatie hebt verzonden, een e-mailbevestiging ontvangen op het adres dat je hebt opgegeven tijdens het registreren, met daarin instructies hoe je je lidmaatschap moet activeren. Je lidmaatschap moet geactiveerd zijn om in te kunnen loggen.', 'allow_user_registration', '1'),
		array('Hoe log ik in?', 'Ga naar &quot;Login&quot;, geef je gebruikersnaam en wachtwoord en selecteer &quot;Onthoud mij&quot; zodat je de volgende keer weer ingelogd wordt op de site als je terugkeert nadat je het verlaten hebt.<br/><b>BELANGRIJK: Cookies moeten worden toegelaten en de cookie van deze site mag niet worden verwijderd om de optie &quot;Onthoud mij&quot; te kunnen gebruiken.</b>', 'offline', 0),
		array('Waarom kan ik niet inloggen?', 'Heb je je geregistreerd en heb de link aangeklikt die je is toegezonden via e-mail?. Deze aangeklikte link zal je account activeren. Voor andere inlogproblemen, neem contact op met de beheerder van deze site.', 'offline', 0),
		array('Wat gebeurt er als ik mijn wachtwoord vergeten ben?', 'Indien deze site de &quot;Wachtwoord vergeten&quot; link heeft, gebruik het dan. In alle andere gevallen, neem contact op met de beheerder van deze site voor een nieuw wachtwoord.', 'offline', 0),
		//array('Wat gebeurt er als ik mijn e-mailadres verander?', 'Eenvoudig inloggen en verander je e-mailadres via &quot;Profiel&quot;', 'offline', 0),
		array('Hoe bewaar ik een foto in &quot;Mijn favorieten&quot;?', 'Klik op een foto en klik dan op de &quot;foto-info&quot; link (<img src="images/info.gif" width="16" height="16" border="0" alt="Foto-informatie" />); scroll naar de onderzijde van de pagina naar &quot;Bestandsinformatie&quot; en klik op &quot;Voeg toe aan favorieten&quot;.<br/>De beheerder kan deze &quot;Bestandsinformatie&quot; standaard aan hebben staan.<br/>BELANGRIJK: Cookies moeten toegelaten worden en de cookie van deze site mag niet worden verwijderd.', 'offline', 0),
		array('Hoe beoordeel ik een bestand?', 'Klik op een verkleinde afbeelding en ga naar de onderzijde van de pagina en kies een beoordeling.', 'offline', 0),
		array('Hoe plaats ik een commentaar voor een foto?', 'Klik op een verkleinde afbeelding en ga naar de onderzijde van de pagina en plaats een commentaar.', 'offline', 0),
		array('Hoe upload ik een bestand?', 'Ga naar &quot;Upload bestand&quot; en selecteer het album waar je je bestand naar wilt uploaden, klik op &quot;Browse&quot; en ga naar het bestand dat je wilt uploaden en klik op &quot;open&quot; (voeg als je wilt een titel en beschrijving toe) en klik op &quot;Verzend&quot;', 'allow_private_albums', 0),
		array('Waar upload ik een foto naar toe?', 'Je zult in staat zijn een foto te uploaden naar één van je albums in &quot;Mijn Galerij&quot;. De beheerder kan je ook toestaan om te uploaden naar één of meer albums in de hoofdgalerij.', 'allow_private_albums', 0),
		array('Welk bestandstype en grootte kan ik uploaden?', 'De grootte en het bestandstype (jpg,gif,..etc.) worden bepaald door de beheerder.', 'offline', 0),
		array('Hoe creëer, hernoem en verwijder ik een album in &quot;Mijn Galerij&quot;?', 'Je moet eerst in &quot;Beheerder-modus&quot; zijn<br/>Ga vervolgens naar &quot;Creëer/Sorteer mijn albums&quot; en klik &quot;Nieuw&quot;. Verander &quot;Nieuw Album&quot; naar de door jou gewenste naam.<br/>Je kunt ook elk ander album in je galerij hernoemen.<br/>Klik &quot;Pas aanpassingen toe&quot;.', 'allow_private_albums', 0),
		array('Hoe pas ik aan en beperk ik gebruikers in het bekijken van mijn albums?', 'Je moet eerst in &quot;Beheerder-modus&quot; zijn<br/>Ga vervolgens naar &quot;Pas mijn albums aan&quot;. Op de &quot;Aanpassen Album&quot; bar, kies het album dat je wilt aanpassen.<br/>Hier kun je de naam, de omschrijving, de verkleinde afbeelding, de beperking in het bekijken en commentaar/beoordelingspermissie aanpassen.<br/>Klik op &quot;Aanpassen album&quot;.', 'allow_private_albums', 0),
		array('Hoe kan ik gebruikersgalerijen bekijken van andere gebruikers?', 'Ga naar &quot;Albumlijst&quot; en kies &quot;Gebruikersgalerijen&quot;.', 'allow_private_albums', 0),
		array('Wat zijn cookies?', 'Cookies zijn tekstbestanden met data die door een website worden verzonden en op je computer worden geplaatst.<br/>Cookies laten een gebruiker gewoonlijk toe een site te verlaten en weer terug te keren zonder weer opnieuw te hoeven in te loggen en andere verschillende zaken.', 'offline', 0),
		array('Waar kan ik dit programma krijgen voor mijn site?', 'Coppermine is een vrije Multimedia Galerij, uitgegeven onder GNU GPL. Het zit vol met mogelijkheden en is geschikt gemaakt voor verschillende platformen. Bezoek de <a href="http://coppermine-gallery.net/">Coppermine Home Page</a> om meer te weten te komen of het te downloaden.', 'offline', 0),
	
		'Navigeren binnen de site',
		array('Wat is &quot;Albumlijst&quot;?', 'Deze optie toont je de complete galerij met een link naar iedere categorie. Verkleinde afbeeldingen kunnen ook een link zijn naar een categorie.', 'offline', 0),
		array('Wat is &quot;Mijn Galerij&quot;?', 'Deze optie laat een gebruiker de mogelijkheid zijn of haar eigen galerij te creëren en hier albums aan toe te voegen, te verwijderen of aan te passen en eveneens bestanden naar te uploaden.', 'allow_private_albums', 0),
		array('Wat is het verschil tussen &quot;Beheerder-modus&quot; en &quot;Gebruiker-modus&quot;?', 'Deze optie, wanneer deze is ingesteld op Beheerder-modus, stelt de gebruiker in staat zijn eigen galerij aan te passen (en eveneens die van anderen indien de beheerder dit toegelaten heeft).', 'allow_private_albums', 0),
		array('Wat is &quot;Upload bestand&quot;?', 'Deze optie stelt de gebruiker in staat een bestand te uploaden (grootte en type wordt bepaald door de beheerder van de site) naar een door jou of de door de beheerder geselecteerde galerij.', 'allow_private_albums', 0),
		array('Wat is &quot;Laatste uploads&quot;?', 'Deze optie toont de laatste uploads die naar de site zijn gezonden.', 'offline', 0),
		array('Wat is &quot;Laatste commentaar&quot;?', 'Deze optie toont de laatste commentaren samen met de foto die door gebruikers zijn geplaatst.', 'offline', 0),
		array('Wat is &quot;Meest bekeken&quot;?', 'Deze optie toont de meest bekeken foto\'s door alle bezoekers (ingelogd of niet).', 'offline', 0),
		array('Wat is &quot;Best beoordeeld&quot;?', 'Deze optie laat de door bezoekers best beoordeelde foto\'s zien in een gemiddelde beoordeling (bv: vijf gaven ieder een <img src="images/rating3.gif" width="65" height="14" border="0" alt="" />: de foto zal dan een gemiddelde beoordeling krijgen van <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> ;Vijf gebruikers beoordeelden de foto van 1 tot 5 (1,2,3,4,5) zal resulteren in een gemiddelde van <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> .)<br/>De beoordelingen gaan van <img src="images/rating5.gif" width="65" height="14" border="0" alt="beste" /> (beste) tot <img src="images/rating0.gif" width="65" height="14" border="0" alt="slechtste" /> (slechtste).', 'offline', 0),
		array('Wat is &quot;Mijn favorieten&quot;?', 'Deze optie geeft de gebruiker de mogelijkheid om hun favoriete foto in een cookie op te slaan, die vervolgens naar je computer wordt gezonden.', 'offline', 0),
	);

	// ------------------------------------------------------------------------- //
	// File forgot_passwd.php
	// ------------------------------------------------------------------------- //
	
	if (defined('FORGOT_PASSWD_PHP')) $lang_forgot_passwd_php = array(
		'forgot_passwd' => 'Wachtwoordherinnering',
		'err_already_logged_in' => 'Je bent al ingelogd !', 
		'enter_email' => 'Geef je e-mail adres',
		'submit' => 'gaan',
		'failed_sending_email' => 'De wachtwoordherinnerings-e-mail kan niet verzonden worden !',
		'email_sent' => 'Een e-mail met je gebruikersnaam en wachtwoord is verzonden aan %s',
		'err_unk_user' => 'Geselecteerde gebruiker bestaat niet!',
		'passwd_reminder_subject' => '%s - Wachtwoordherinnering',
		'passwd_reminder_body' => 'Je hebt verzocht, herinnerd te willen worden over je login-gegevens:
Gebruikernaam: %s
Wachtwoord   : %s
Klik %s om in te loggen.',
	);

	// ------------------------------------------------------------------------- //
	// File groupmgr.php
	// ------------------------------------------------------------------------- //
	
	if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array( 
		'group_name' => 'Groepen', //cpg1.4
		'permissions' => 'Rechten', //cpg1.4
		'public_albums' => 'Openbaar album uploaden', //cpg1.4
		'personal_gallery' => 'Persoonlijke gallerij', //cpg1.4
		'upload_method' => 'Upload methode', //cpg1.4
		'disk_quota' => 'Quota', //cpg1.4
		'rating' => 'Stemmen', //cpg1.4
		'ecards' => 'E-cards', //cpg1.4
		'comments' => 'Commentaar', //cpg1.4
		'allowed' => 'Toegestaan', //cpg1.4
		'approval' => 'Akkoord', //cpg1.4
		'boxes_number' => 'Aantal boxen', //cpg1.4
		'variable' => 'Meerdere', //cpg1.4
		'fixed' => 'Aangepast', //cpg1.4
		'apply' => 'Bewaar wijzigingen', //cpg1.4
		'create_new_group' => 'Maak nieuwe groep aan',
		'del_groups' => 'Verwijder de geselecteerde groep(en)',
		'confirm_del' => 'waarschuwing: als je een groep verwijderd, zullen de gebruikers die horen bij die groep worden overgezet naar de \'Registered\' groep !\n\nWil je doorgaan ?', //js-alert
		'title' => 'Beheer gebruikersgroepen',
		'num_file_upload' => 'Bestand upload boxen', //cpg1.4
		'num_URI_upload' => 'URI upload boxes', //cpg1.4
		'reset_to_default' => 'Ze terug naar de standaard naam (%s) - aanbevolen!', //cpg1.4
		'error_group_empty' => 'Groep tabel was leeg !<br/><br/>Standard groepen aangemaakt, vernieuw deze pagina om deze zichtbaar te maken', //cpg1.4
		'explain_greyed_out_title' => 'Waarom is deze rij grijs?', //cpg1.4
		'explain_guests_greyed_out_text' => 'Ja kan de eigenschappen van deze groep niet aanpassen omdat je de instelling &quot; Sta niet ingelogde gebruikers toe (gasten of anoniem) op &quot;Nee&quot; hebt staan. Alle gasten (leden van de groep %s) kunnen alles doen behalve inloogen; daarom zijn deze instellingen bij hen niet van toepassing.', //cpg1.4
		'explain_banned_greyed_out_text' => 'Je kan de eigenschappen van de groep %s niet aanpassen, omdat de leden er toch niets kunnen doen.', //cpg1.4
		'group_assigned_album' => 'toegewezen album(s)', //cpg1.4
	);

	// ------------------------------------------------------------------------- //
	// File index.php
	// ------------------------------------------------------------------------- //
	
	if (defined('INDEX_PHP')){
	
		$lang_index_php = array(
			'welcome' => 'Welkom !',
		);
	
		$lang_album_admin_menu = array(
			'confirm_delete' => 'Weet je zeker dat je dit album wilt VERWIJDEREN ? \\nAlle foto\\\'s en commentaren worden ook verwijderd.', //js-alert
			'delete' => 'WISSEN',
			'modify' => 'EIGENSCHAPPEN',
			'edit_pics' => 'WIJZIGEN',
		);
	
		$lang_list_categories = array(
			'home' => 'Beginpagina',
			'stat1' => '<b>[pictures]</b> bestanden in <b>[albums]</b> albums en <b>[cat]</b> categorieën met <b>[comments]</b> commentaren en <b>[views]</b> keer bekeken',
			'stat2' => '<b>[pictures]</b> bestanden in <b>[albums]</b> albums en <b>[views]</b> keer bekeken',
			'xx_s_gallery' => '%s\'s Galerij',
			'stat3' => '<b>[pictures]</b> bestanden in <b>[albums]</b> albums met <b>[comments]</b> commentaren en <b>[views]</b> keer bekeken',
		);
	
		$lang_list_users = array(
			'user_list' => 'Gebruikerslijst',
			'no_user_gal' => 'Er zijn geen gebruikersgalerijen.',
			'n_albums' => '%s album(s)',
			'n_pics' => '%s bestand(en)',
		);
	
		$lang_list_albums = array(
			'n_pictures' => '%s bestanden',
			'last_added' => ', laatste toegevoegd op %s', 
			'n_link_pictures' => '%s gelinkte bestanden', //cpg1.4
			'total_pictures' => '%s totaal aantal bestanden', //cpg1.4
		);
	
	} 

	// ------------------------------------------------------------------------- //
	// File keywordmgr.php //cpg1.4
	// ------------------------------------------------------------------------- //
	
	if (defined('KEYWORDMGR_PHP')) $lang_keywordmgr_php = array(
		'title' => 'Beheer zoekbegrippen', //cpg1.4
		'edit' => 'wijzig', //cpg1.4
		'delete' => 'verwijder', //cpg1.4
		'search' => 'zoek', //cpg1.4
		'keyword_test_search' => 'zoeken naar %s in een nieuw venster', //cpg1.4
		'keyword_del' => 'verwijder zoekbegrip %s', //cpg1.4
		'confirm_delete' => 'Weet je zeker dat je het zoekbegrip %s wilt verwijderen van de hele gallerij?',  // js-alert
		'change_keyword' => 'wijzig zoekbegrip', //cpg1.4
	);

	// ------------------------------------------------------------------------- //
	// File login.php
	// ------------------------------------------------------------------------- //
	
	if (defined('LOGIN_PHP')) $lang_login_php = array(
		'login' => 'Login',
		'enter_login_pswd' => 'Voer je gebruikersnaam en wachtwoord in om in te loggen',
		'username' => 'Gebruikersnaam',
		'password' => 'Wachtwoord',
		'remember_me' => 'Onthoud mij',
		'welcome' => 'Welkom %s ...',
		'err_login' => '*** Kan niet inloggen. Probeer het nogmaals ***',
		'err_already_logged_in' => 'Je bent al ingelogd !',
		'forgot_password_link' => 'Wachtwoord vergeten', 
		'cookie_warning' => 'Waarschuwing: je browser ondersteund geen cookies', //cpg1.4
	);

	// ------------------------------------------------------------------------- //
	// File logout.php
	// ------------------------------------------------------------------------- //
	
	if (defined('LOGOUT_PHP')) $lang_logout_php = array(
		'logout' => 'Uitloggen',
		'bye' => 'Tot ziens %s ...',
		'err_not_loged_in' => 'Je bent niet ingelogd !',
	);

	// ------------------------------------------------------------------------- //
	// File minibrowser.php  //cpg1.4
	// ------------------------------------------------------------------------- //
	
	if (defined('MINIBROWSER_PHP')) $lang_minibrowser_php = array(
		'close' => 'sluiten', //cpg1.4
		'submit' => 'OK', //cpg1.4
		'up' => 'een niveau omhoog', //cpg1.4
		'current_path' => 'huidig pad', //cpg1.4
		'select_directory' => 'selecteer een nieuwe directory', //cpg1.4
		'click_to_close' => 'Klik op de afbeelding om het venster te sluiten', //cpg1.4
	);

	// ------------------------------------------------------------------------- //
	// File modifyalb.php
	// ------------------------------------------------------------------------- //
	
	if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
		'upd_alb_n' => 'Pas album %s aan',
		'general_settings' => 'Algemene instellingen',
		'alb_title' => 'Albumtitel',
		'alb_cat' => 'Albumcategorie',
		'alb_desc' => 'Albumomschrijving', 
		'alb_keyword' => 'Album zoekbegrip', //cpg1.4
		'alb_thumb' => 'Album verkleinde afbeelding',
		'alb_perm' => 'Permissies voor dit album',
		'can_view' => 'Album kan bekeken worden door',
		'can_upload' => 'Bezoekers kunnen bestanden uploaden',
		'can_post_comments' => 'Bezoekers kunnen commentaar posten',
		'can_rate' => 'Gebruiker kan bestanden beoordelen',
		'user_gal' => 'Gebruikersgalerij',
		'no_cat' => '* geen categorie *',
		'alb_empty' => 'Album is leeg',
		'last_uploaded' => 'Laatste upload',
		'public_alb' => 'Iedereen (publiek album)',
		'me_only' => 'Alleen ik',
		'owner_only' => 'Alleen albumeigenaar (%s)',
		'groupp_only' => 'Leden van de \'%s\' groep',
		'err_no_alb_to_modify' => 'Geen album die je kunt aanpassen in de database.',
		'update' => 'Pas album aan',
		'reset_album' => 'Reset album', //cpg1.4
		'reset_views' => 'Reset bekenen teller naar &quot;0&quot; voor %s', //cpg1.4
		'reset_rating' => 'Reset stemmen van alle bestanden voor %s', //cpg1.4
		'delete_comments' => 'Verwijder alle commentaarregels gemaakt in %s', //cpg1.4
		'delete_files' => '%sIrreversibly%s verwijder alle bestanden in %s', //cpg1.4
		'views' => 'bekeken', //cpg1.4
		'votes' => 'stemmen', //cpg1.4
		'comments' => 'commentaar', //cpg1.4
		'files' => 'bestanden', //cpg1.4
		'submit_reset' => 'verstuur wijzigingen', //cpg1.4
		'reset_views_confirm' => 'Ik weet het zeker', //cpg1.4
		'notice1' => '(*) afhankelijk van de %sgroups%s instellingen',  //cpg1.4
		'alb_password' => 'Album wachtwoord', //cpg1.4
		'alb_password_hint' => 'Album wachtwoord suggestie', //cpg1.4
		'edit_files' =>'Wijzig bestanden', //cpg1.4
		'parent_category' =>'Hoofd categorie', //cpg1.4
		'thumbnail_view' =>'Thumbnails', //cpg1.4
	); 

	// ------------------------------------------------------------------------- //
	// File phpinfo.php
	// ------------------------------------------------------------------------- //
	
	if (defined('PHPINFO_PHP')) $lang_phpinfo_php = array(
		'php_info' => 'PHP info',
		'explanation' => 'Dit is de uitvoer gegenereerd door de PHP-functie <a href="http://www.php.net/phpinfo">phpinfo()</a>, getoond binnen Coppermine (de uitvoer is weergegeven aan de rechter kant).',
		'no_link' => 'Het laten zien van je phpinfo kan een veiligheidsrisico betekenen, daarom is deze pagina alleen maar zichtbaar wanneer je ingelogd bent als beheerder. Je kunt geen link publiceren naar deze pagina aan anderen, hen wordt de toegang geweigerd.',
	); 

	// ------------------------------------------------------------------------- //
	// File picmgr.php //cpg1.4
	// ------------------------------------------------------------------------- //
	if (defined('PICMGR_PHP')) $lang_picmgr_php = array(
		'pic_mgr' => 'Afbeeldingsbeheer', //cpg1.4
		'select_album' => 'Kies een Album', //cpg1.4
		'delete' => 'Verwijder', //cpg1.4
		'confirm_delete1' => 'Weer je zeker dat je deze afbeelding wilt vewijderen?', //cpg1.4
		'confirm_delete2' => '\nDe afbeelding zal definitief worden verwijderd.', //cpg1.4
		'apply_modifs' => 'Doorvoeren wijzigingen', //cpg1.4
		'confirm_modifs' => 'Bevestig wijzigingen', //cpg1.4
		'pic_need_name' => 'De afbeelding moet een naam hebben!', //cpg1.4
		'no_change' => 'Je hebt geen enkele wijziging doorgevoerd!', //cpg1.4
		'no_album' => '* Geen album *', //cpg1.4
		'explanation_header' => 'De eigen sorteervolgorde op deze pagina zal alleen worden gebruikt indien', //cpg1.4
		'explanation1' => 'de beheerder heeft ingesteld dat de "Standaard sorteervolgorder voor bestanden" in de instellingen is gezet op "Positie oplopend" of "Positie aflopend" (algemene instelling voor alle gebruikers die geen andere sortering hebben ingesteld)', //cpg1.4
		'explanation2' => 'de gebruiker heeft gekozen voor "Positie oplopend" of "Positie aflopend" op the thumbnails pagina (gebruikersinstelling)', //cpg1.4
	);

	// ------------------------------------------------------------------------- //
	// File pluginmgr.php //cpg1.4
	// ------------------------------------------------------------------------- //
	
	if (defined('PLUGINMGR_PHP')){
	
		$lang_pluginmgr_php = array(
			'confirm_uninstall' => 'Weet je zeker dat je deze plugin wilt DEINSTALLEREN', //cpg1.4
			'confirm_delete' => 'Weet je zeker dat je deze plugin wilt VERWIJDEREN', //cpg1.4
			'pmgr' => 'Plugin beheer', //cpg1.4
			'name' => 'Naam', //cpg1.4
			'author' => 'Programmeur', //cpg1.4
			'desc' => 'Omschrijving', //cpg1.4
			'vers' => 'v', //cpg1.4
			'i_plugins' => 'Geïnstalleerde Plugins', //cpg1.4
			'n_plugins' => 'Niet geïnstalleerde Plugins', //cpg1.4
			'none_installed' => 'Geen enkele plugin geïnstalleerd', //cpg1.4
			'operation' => 'operation', //cpg1.4
			'not_plugin_package' => 'Het geuploade bestand is geen plugin voor Coppermine.', //cpg1.4
			'copy_error' => 'Er is een fout opgetreden met het kopiëren van het bestand naar de plugins directory.', //cpg1.4
			'upload' => 'Upload', //cpg1.4
			'configure_plugin' => 'Stel plugin in', //cpg1.4
			'cleanup_plugin' => 'Opschonen plugin', //cpg1.4
		);
	}

	// ------------------------------------------------------------------------- //
	// File ratepic.php
	// ------------------------------------------------------------------------- //
	
	if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
		'already_rated' => 'Sorry, maar je hebt dit bestand al beoordeeld',
		'rate_ok' => 'Je stem is geaccepteerd',
		'forbidden' => 'Je kunt je eigen bestanden niet beoordelen.',
	);

	// ------------------------------------------------------------------------- //
	// File register.php & profile.php
	// ------------------------------------------------------------------------- //
	
	if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) { 

$lang_register_disclamer = <<<EOT
Hoewel de beheerder van {SITE_NAME} zal proberen al het aanstootgevende materiaal op de site zo snel mogelijk te verwijderen, is het echter onmogelijk elk bestand te bekijken. Daarom ga je er mee akkoord, dat alle op deze site geuploade bestanden en weergegeven commentaren de gezichtspunten en opinies zijn van de respectievelijke auteurs en niet van de beheerder of webmaster (behalve hun eigen postings) en deze zullen daarvoor niet aansprakelijk gesteld kunnen worden.<br/>
<br/>
Je gaat er mee akkoord geen aanstootgevend, obsceen, vulgair, hatelijk, bedreigend, seksueel-getint materiaal of welk ander materiaal dan ook op deze site te plaatsen, dat enige van toepassing zijnde wet overtreedt. Je gaat er mee akkoord dat de webmaster, beheerder en  moderators van {SITE_NAME} het recht hebben elke inhoud te verwijderen en of te wijzigen wanneer zij dat nodig achten. Als gebruiker ga je er mee akkoord, dat alle data die je hebt verstrekt in een database worden bewaard. Hoewel deze informatie niet openbaar gemaakt wordt aan derden zonder jouw toestemming, ga je akkoord met het feit dat de webmaster en de beheerder niet verantwoordelijk gehouden kunnen worden voor welke hack-poging dan ook, dat kan lijden tot het openbaar worden van de database.<br/>
<br/>
Deze site gebruikt cookies om informatie te bewaren op je lokale computer. Deze cookies dienen er voor jouw kijkgemak en plezier aan de site te verhogen. Het e-mailadres wordt alleen gebruikt om jouw registratiedetails en wachtwoord te bevestigen.<br/>
<br/>
Door op 'Ik ga akkoord' hieronder te klikken , verklaar je je akkoord en ben je gebonden aan de hiervoor weergegeven condities.
EOT;
	
		$lang_register_php = array(
			'page_title' => 'Gebruikers registratie',
			'term_cond' => 'Gebruikersvoorwaarden',
			'i_agree' => 'Ik ga akkoord',
			'submit' => 'Verstuur registratie',
			'err_user_exists' => 'De ingevoerde gebruikersnaam bestaat al, kies een andere naam',
			'err_password_mismatch' => 'De twee ingevoerde wachtwoorden zijn niet gelijk aan elkaar, geef ze nogmaals in',
			'err_uname_short' => 'Een gebruikersnaam moet uit minimaal 2 tekens bestaan',
			'err_password_short' => 'Een wachtwoord moet uit minimaal 2 tekens bestaan',
			'err_uname_pass_diff' => 'De gebruikersnaam en het wachtwoord mogen niet hetzelfde zijn',
			'err_invalid_email' => 'Het gebruikte E-mail is ongeldig',
			'err_duplicate_email' => 'Een andere gebruiker heeft dit e-mail adres al een keer gebruikt',
			'enter_info' => 'Voer registratiegegevens in',
			'required_info' => 'Verplichte velden',
			'optional_info' => 'Optionele velden',
			'username' => 'Gebruikersnaam',
			'password' => 'Wachtwoord',
			'password_again' => 'Nogmaals het wachtwoord',
			'email' => 'E-mail',
			'location' => 'Plaats',
			'interests' => 'Hobby\'s',
			'website' => 'Home page',
			'occupation' => 'Beroep',
			'error' => 'FOUT',
			'confirm_email_subject' => '%s - Registratie bevestiging',
			'information' => 'Informatie',
			'failed_sending_email' => 'De registratie bevestiging kan niet worden ge-e-maild!',
			'thank_you' => 'Bedankt voor de registratie.<br/><br/>Je zult een e-mail zal ontvangen met daarin de instructies hoe je je gebruikersnaam kunt activeren.',
			'acct_created' => 'Je gebruikersnaam is geregistreerd en je kunt met de opgegeven naam en wachtwoord inloggen',
			'acct_active' => 'Je gebruikersnaam is nu geactiveerd en je kunt met de opgegeven naam en wachtwoord inloggen',
			'acct_already_act' => 'De gebruikersnaam is al geactiveerd!', //cpg1.4
			'acct_act_failed' => 'Deze gebruikersnaam kan niet worden geactiveerd!',
			'err_unk_user' => 'De geselcteerde gebruiker bestaat niet!',
			'x_s_profile' => '%s\'s profiel',
			'group' => 'Groep',
			'reg_date' => 'Aangemeld',
			'disk_usage' => 'Disk gebruik',
			'change_pass' => 'Verander wachtwoord',
			'current_pass' => 'Huidig wachtwoord',
			'new_pass' => 'Nieuw wacthwoord',
			'new_pass_again' => 'Nogmaal nieuw wachtwoord',
			'err_curr_pass' => 'Huidige wachtwoord is niet juist',
			'apply_modif' => 'Toepassen wijzigingen',
			'change_pass' => 'Verander mijn wachtwoord',
			'update_success' => 'Je profiel is aangepast',
			'pass_chg_success' => 'Je wachtwoord is gewijzigd',
			'pass_chg_error' => 'Je wachtwoord is niet gewijzigd',
			'notify_admin_email_subject' => '%s - Registratie bevestiging',
			'last_uploads' => 'Laast geupload bestand.<br/>Klik om alle bestanden te zien die zijn geupload door', //cpg1.4
			'last_comments' => 'Laatste commentaar.<br/>Klik om alle commentaarregels te zien die zijn gedaan door', //cpg1.4
			'notify_admin_email_body' => 'Een nieuwe gebruiker met gebruikersnaam \'%s\' heeft zichzelf voor je gallerij geregistreerd', //cpg1.4
			'pic_count' => 'Bestanden geupload', //cpg1.4
			'notify_admin_request_email_subject' => '%s - Registratie verzoek', //cpg1.4
			'thank_you_admin_activation' => 'Bedankt.<br/><br/>Je verzoek tot toegang is verzonden aan de beheerder. Zo snel als je gebruikersnaam is geaccepteerd ontvang je een e-mail.', //cpg1.4
			'acct_active_admin_activation' => 'De gebruikersnaam is nu geactiveerd en de gebruiker krijgt daarvan een bevestiging over de e-mail.', //cpg1.4
			'notify_user_email_subject' => '%s - Activatie bevestiging', //cpg1.4
		); 

$lang_register_confirm_email = <<<EOT
Dank je voor het registreren bij {SITE_NAME}

Om je account "{USER_NAME}" te kunnen activeren moet je op de link hieronder klikken of kopieer en plak het in je webbrowser.

<a href="{ACT_LINK}">{ACT_LINK}</a>

Hartelijke groet, 

De beheerder van {SITE_NAME}

EOT;

$lang_register_approve_email = <<<EOT
Een nieuwe gebruiker met de gebruikersnaam "{USER_NAME}" heeft zich geregistreerd in jouw gallerij.

Om je account te kunnen activeren moet je op de link hieronder klikken of kopieer en plak het in je webbrowser.

<a href="{ACT_LINK}">{ACT_LINK}</a>

EOT;

$lang_register_activated_email = <<<EOT
Je account is geaccepteerd en geactiveerd.

Je kan nu inloggen op <a href="{SITE_LINK}">{SITE_LINK}</a> met de gebruikersnaam "{USER_NAME}"


Hartelijke groet, 

De beheerder van {SITE_NAME}

EOT;
	
	} 

	// ------------------------------------------------------------------------- //
	// File reviewcom.php
	// ------------------------------------------------------------------------- //
	
	if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
		'title' => 'Bekijk commentaar',
		'no_comment' => 'Er is geen commentaar te bekijken',
		'n_comm_del' => '%s commentaren verwijderd',
		'n_comm_disp' => 'Aantal commentaren',
		'see_prev' => 'Bekijk voorgaande',
		'see_next' => 'Bekijk volgende',
		'del_comm' => 'Verwijder geselecteerd commentaar', 
		'user_name' => 'Naam', //cpg1.4
		'date' => 'Datum', //cpg1.4
		'comment' => 'Commentaar', //cpg1.4
		'file' => 'Bestand', //cpg1.4
		'name_a' => 'Gebruikersnaam oplopend', //cpg1.4
		'name_d' => 'Gebruikersnaam aflopend', //cpg1.4
		'date_a' => 'Datum oplopend', //cpg1.4
		'date_d' => 'Datum aflopend', //cpg1.4
		'comment_a' => 'Commentaar oplopend', //cpg1.4
		'comment_d' => 'Commentaar aflopend', //cpg1.4
		'file_a' => 'Bestand oplopend', //cpg1.4
		'file_d' => 'Bestand aflopend', //cpg1.4
	);
	
	// ------------------------------------------------------------------------- //
	// File search.php  //cpg1.4
	// ------------------------------------------------------------------------- //
	
	if (defined('SEARCH_PHP')){
	
		$lang_search_php = array(
			'title' => 'Bestanden zoeken', //cpg1.4
			'submit_search' => 'zoeken', //cpg1.4
			'keyword_list_title' => 'Zoekbegrippen', //cpg1.4
			'keyword_msg' => 'De lijst hierboven bevat niet alles. Bijvoorbeeld de titels en omschrijvingen zijn niet opgenomen. Probeer een uitgebreide zoeksleutel te kiezen.',  //cpg1.4
			'edit_keywords' => 'Wijzig zoekbegrippen', //cpg1.4
			'search in' => 'Zoeken in:', //cpg1.4
			'ip_address' => 'IP adres', //cpg1.4
			'fields' => 'Zoeken in', //cpg1.4
			'age' => 'Tijdschaal', //cpg1.4
			'newer_than' => 'Nieuwe dan', //cpg1.4
			'older_than' => 'Ouder dan', //cpg1.4
			'days' => 'dagen', //cpg1.4
			'all_words' => 'Hele woorden (AND)', //cpg1.4
			'any_words' => 'Alle woorden (OR)', //cpg1.4
		);
	
		$lang_adv_opts = array(
			'title' => 'Titel', //cpg1.4
			'caption' => 'Omschrijving', //cpg1.4
			'keywords' => 'Zoekbegrippen', //cpg1.4
			'owner_name' => 'Eigenaar', //cpg1.4
			'filename' => 'Bestandsnaam', //cpg1.4
		);
	
	}
	
	// ------------------------------------------------------------------------- //
	// File searchnew.php
	// ------------------------------------------------------------------------- //
	
	if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
		'page_title' => 'Zoek nieuwe bestanden',
		'select_dir' => 'Selecteer map',
		'select_dir_msg' => 'Deze functie stelt je in staat een aantal bestanden gelijktijdig naar je server te uploaden d.m.v. FTP.<br/><br/>Selecteer de map waar je de bestanden naar hebt geupload',
		'no_pic_to_add' => 'Er is geen bestand om toe te voegen',
		'need_one_album' => 'Je hebt minimaal een album nodig om deze functie te gebruiken',
		'warning' => 'Waarschuwing',
		'change_perm' => 'Het script kan niet schrijven in deze map, je moet de modus ervan veranderen naar 755 of 777 voordat je probeert het bestand toe te voegen !',
		'target_album' => '<b>Plaats bestanden van &quot;</b>%s<b>&quot; in </b>%s',
		'folder' => 'Map',
		'image' => 'Bestand',
		'album' => 'Album',
		'result' => 'Resultaat',
		'dir_ro' => 'Niet beschrijfbaar.',
		'dir_cant_read' => 'Niet leesbaar.',
		'insert' => 'Toevoegen van nieuwe bestanden aan galerij',
		'list_new_pic' => 'Lijst van nieuwe bestanden',
		'insert_selected' => 'Invoegen van geselecteerde bestanden',
		'no_pic_found' => 'Er is GEEN bestand gevonden',
		'be_patient' => 'Heb geduld, het script heeft enige tijd nodig om de bestanden aan het album toe te voegen',
		'no_album' => 'geen album geselecteerd', 
		'result_icon' => 'klik voor meer gegevens of om opniuew te laden', 
		'notes' =>  '<ul>'.
		'<li><b>OK</b> : betekent dat het bestand met succes is toegevoegd'.
		'<li><b>DP</b> : betekent dat het bestand dubbel is en zich al in de database bevindt'.
		'<li><b>PB</b> : betekent dat het bestand niet toegevoegd kon worden. Controleer je configuratie en de permissies van mappen waar de bestanden zich bevinden'.
		'<li><b>NA</b> : betekent dat je geen album geselecteerd hebt waar de bestanden in moeten, klik \'<a href="javascript:history.back(1)">Terug</a>\' en selecteer een album. Als je geen album hebt, <a href="albmgr.php">creëer er dan éérst een</a></li>'.
		'<li>Als de OK, DP, PB \'tekens\' niet verschijnen klik dan op het verbroken bestand om te kijken of er een PHP-foutbericht gegeven wordt'.
		'<li>Indien je browser een time-out bericht geeft, klik dan op de herlaad-knop'.
		'</ul>',
		'select_album' => 'selecteer album',
		'check_all' => 'Selecteer alles',
		'uncheck_all' => 'de-selecteer alles', 
		'no_folders' => 'Er bevinden zich geen subdirectories in de "albums". Zorg ervoor dat minstens een subdirecotry is opgenomen in deze "albums" directory en ftp-upload je bestanden daarheen. Je mag geen bestanden uploaden naar de "userpics" of de "edit" directory, deze zijn gereserveerd voor Coppermine.',
		'albums_no_category' => 'Albums met geen catagorie', //cpg1.4 // album pulldown mod, added by frogfoot
		'personal_albums' => '* Persoonlijke albums', //cpg1.4 // album pulldown mod, added by frogfoot
		'browse_batch_add' => 'Explorer interface (aanbevolen)', //cpg1.4
		'edit_pics' => 'Wijzig bestanden', //cpg1.4
		'edit_properties' => 'Album eigenschappen', //cpg1.4
		'view_thumbs' => 'Thumbnails', //cpg1.4
	);

	// ------------------------------------------------------------------------- //
	// File stat_details.php //cpg1.4
	// ------------------------------------------------------------------------- //
	
	if (defined('STAT_DETAILS_PHP')) $lang_stat_details_php = array(
		'show_hide' => 'laat zien/verberg deze kolom', //cpg1.4
		'vote' => 'Stemmen Details', //cpg1.4
		'hits' => 'Hit Details', //cpg1.4
		'stats' => 'Stemmen Statistieken', //cpg1.4
		'sdate' => 'Datum', //cpg1.4
		'rating' => 'Voorkeur', //cpg1.4
		'search_phrase' => 'Zoek tekst', //cpg1.4
		'referer' => 'Referer', //cpg1.4
		'browser' => 'Browser', //cpg1.4
		'os' => 'Operating System', //cpg1.4
		'ip' => 'IP', //cpg1.4
		'sort_by_xxx' => 'Sorteer op %s', //cpg1.4
		'ascending' => 'oplopend', //cpg1.4
		'descending' => 'aflopend', //cpg1.4
		'internal' => 'int', //cpg1.4
		'close' => 'sluiten', //cpg1.4
		'hide_internal_referers' => 'verberg interne referers', //cpg1.4
		'date_display' => 'Datum weergave', //cpg1.4
		'submit' => 'verzenden / verversen', //cpg1.4
	);

	// ------------------------------------------------------------------------- //
	// File thumbnails.php
	// ------------------------------------------------------------------------- //
	
	// Void
	
	// ------------------------------------------------------------------------- //
	// File upload.php
	// ------------------------------------------------------------------------- //
	
	if (defined('UPLOAD_PHP')) $lang_upload_php = array(
		'title' => 'Upload foto',
		'custom_title' => 'Aangepast aanvraagformulier',
		'cust_instr_1' => 'Je mag een aangepast aantal bestands- en URI-uploadboxen hebben. Echter, je mag niet meer selecteren dan de hieronder afggebeelde limieten.',
		'cust_instr_2' => 'Boxnummer-aanvraag',
		'cust_instr_3' => 'Bestand-uploadboxen: %s',
		'cust_instr_4' => 'URI/URL-uploadboxen: %s',
		'cust_instr_5' => 'URI/URL-uploadboxen:',
		'cust_instr_6' => 'Bestand-uploadboxen:',
		'cust_instr_7' => 'Geef het aantal voor ieder type uploadboxen dat je op dit moment wenst.  Klik daarna op\'Doorgaan\'. ',
		'reg_instr_1' => 'Ongeldige actie voor aanmaken formulier:',
		'reg_instr_2' => 'Nu kun je je bestanden uploaden, gebruikmakend van onderstaande boxen. De grootte van de bestanden van je client naar de server mogen elk niet de %s KB overschrijden. Zip-bestanden in het \'Bestand Upload\' en \'URI/URL Upload\' gebied blijven gecomprimeerd.' ,
		'reg_instr_3' => 'Indien je de gezipte bestanden of archieven gecomprimeerd wilt hebben, moet je de uploadbox gebruiken in het \'Decompress zip-upload\' gebied',
		'reg_instr_4' => 'Als je de URI/URL-uploadsectie gebruikt, geef het pad op naar het bestand zoals bijv. dit : http://www.mysite.com/images/example.jpg',
		'reg_instr_5' => 'Als je het formulier voltooid hebt, klik op \'Doorgaan\'.',
		'reg_instr_6' => 'Decomprimeerbare Zip-uploads',
		'reg_instr_7' => 'Bestands-upload:',
		'reg_instr_8' => 'URI/URL-upload:',
		'error_report' => 'Foutrapport',
		'error_instr' => 'De volgende uploads hebben een fout ervaren:',
		'file_name_url' => 'Bestandsnaam/URL',
		'error_message' => 'Foutboodschap',
		'no_post' => 'Bestand niet opgeladen door POST.',
		'forb_ext' => 'Verboden bestandsextensie.',
		'exc_php_ini' => 'Overschreden bestandsgrootte in php.ini toegestaan.',
		'exc_file_size' => 'Overschreden bestandsgrootte in CPG toegestaan.',
		'partial_upload' => 'Alleen een deel-upload.',
		'no_upload' => 'Geen upload plaatsgevonden.',
		'unknown_code' => 'Onbekende PHP-upload foutcode.',
		'no_temp_name' => 'Geen upload - Geen voorlopige naam.',
		'no_file_size' => 'Bevat geen data/corrupt',
		'impossible' => 'Onmogelijk te verplaatsen.',
		'not_image' => 'Geen foto/corrupt',
		'not_GD' => 'Geen GD-extensie.',
		'pixel_allowance' => 'Pixeltoestemming overschreden.',
		'incorrect_prefix' => 'Ongeldig URI/URL-voorvoegsel',
		'could_not_open_URI' => 'Kon URI niet openen.',
		'unsafe_URI' => 'Veiligheid niet verifieerbaar.',
		'meta_data_failure' => 'Meta data-fout',
		'http_401' => '401 Niet geauthoriseerd',
		'http_402' => '402 Betaling vereist',
		'http_403' => '403 Verboden',
		'http_404' => '404 Niet gevonden',
		'http_500' => '500 Interne server-fout',
		'http_503' => '503 Service niet beschikbaar',
		'MIME_extraction_failure' => 'MIME kon niet bepaald worden.',
		'MIME_type_unknown' => 'Onbekend MIME-type',
		'cant_create_write' => 'Kan schrijfbestand niet creëeren.',
		'not_writable' => 'Kan niet naar schrijfbestand schrijven.',
		'cant_read_URI' => 'Kan URI/URL niet lezen',
		'cant_open_write_file' => 'Kan URI-schrijfbestand niet openen.',
		'cant_write_write_file' => 'Kan niet schrijven naar URI-schrijfbestand.',
		'cant_unzip' => 'Kan niet zipbestanden niet uitpakken.',
		'unknown' => 'Onbekende fout',
		'succ' => 'Met succes geuploade bestanden',
		'success' => '%s bestanden waren met succesgeupload.',
		'add' => 'klik \'Doorgaan\' om de bestanden toe te voegen aan albums.',
		'failure' => 'Upload-fout',
		'f_info' => 'Bestandsinformatie',
		'no_place' => 'Het voorgaande bestand kon niet geplaatst worden.',
		'yes_place' => 'Het voorgaande bestand is met succes geplaatst.',
		'max_fsize' => 'Maximaal toegestane bestandsgrootte is %s KB',
		'album' => 'Album',
		'picture' => 'Bestand',
		'pic_title' => 'Bestandstitel',
		'description' => 'Bestandsomschrijving',
		'keywords' => 'Zoekbegrippen (scheiden met spaties)', 
		'keywords_sel' =>'Selecteer een zoekbegrip', //cpg1.4
		'err_no_alb_uploadables' => 'Sorry, er is geen album waar het je toegestaan is bestanden naar te uploaden',
		'place_instr_1' => 'Plaats de bestanden nu in albums.  Je kunt nu ook relevante informatie over ieder bestand toevoegen.',
		'place_instr_2' => 'Er zijn meer bestanden die geplaatst moeten worden. Klik op \'Doorgaan\'.',
		'process_complete' => 'Je hebt met succes alle bestanden geplaatst.', 
		'albums_no_category' => 'Albums zonder catagorie', //cpg1.4. //album pulldown mod, added by frogfoot
		'personal_albums' => '* Persoonlijke albums', //cpg1.4. //album pulldown mod, added by frogfoot
		'select_album' => 'Selecteer album', //cpg1.4. //album pulldown mod, added by frogfoot
		'close' => 'Sluiten', //cpg1.4
		'no_keywords' => 'Sorry, er zijn geen zoekbegrippen!', //cpg1.4
		'regenerate_dictionary' => 'Herindexeren Bibliotheek', //cpg1.4
	);

	// ------------------------------------------------------------------------- //
	// File usermgr.php
	// ------------------------------------------------------------------------- //
	
	if (defined('USERMGR_PHP')) $lang_usermgr_php = array( 
		'memberlist' => 'Gebruikers', //cpg1.4
		'user_manager' => 'Gebruikersbeheer', //cpg1.4
		'title' => 'Gebruikersbeheer',
		'name_a' => 'Naam oplopend',
		'name_d' => 'Naam aflopend',
		'group_a' => 'Groep oplopend',
		'group_d' => 'Groep aflopend',
		'reg_a' => 'Registratiedatum oplopend',
		'reg_d' => 'Registratiedatum aflopend',
		'pic_a' => 'Aantal bestanden oplopend',
		'pic_d' => 'Aantal bestanden aflopend',
		'disku_a' => 'Gebruikte bestandsgrootte oplopend',
		'disku_d' => 'Gebruikte bestandsgrootte aflopend',
		'lv_a' => 'Laatste bezoek oplopend',
		'lv_d' => 'Laatste bezoek aflopend',
		'sort_by' => 'Sorteer gebruikers op',
		'err_no_users' => 'Gebruikerstabel is leeg !',
		'err_edit_self' => 'Je kunt je eigen profiel niet wijzigen, gebruik daarvoor de \'Mijn profiel\' link',
		'edit' => 'Wijzig', //cpg1.4
		'with_selected' => 'met geselecteerde:', //cpg1.4
		'delete' => 'Verwijder', //cpg1.4
		'delete_files_no' => 'behoud openbare bestanden (maar maak deze anoniem)', //cpg1.4
		'delete_files_yes' => 'verwijder ook de openbare bestanden', //cpg1.4
		'delete_comments_no' => 'behoud commentaar (maar maak deze anoniem)', //cpg1.4
		'delete_comments_yes' => 'verwijder ook de commentaren', //cpg1.4
		'activate' => 'Activeer', //cpg1.4
		'deactivate' => 'Deactiveer', //cpg1.4
		'reset_password' => 'Reset wachtwoord', //cpg1.4
		'change_primary_membergroup' => 'Verander primaire gebruikersgroep', //cpg1.4
		'add_secondary_membergroup' => 'Verander secundaire gebruikersgroep', //cpg1.4
		'name' => 'Gebruikersnaam',
		'group' => 'Groep',
		'inactive' => 'Inactief',
		'operations' => 'Bewerkingen',
		'pictures' => 'Bestanden', 
		'disk_space_used' => 'Disk gebruik', //cpg1.4
		'disk_space_quota' => 'Disk Quota', //cpg1.4
		'registered_on' => 'Registratie', //cpg1.4
		'last_visit' => 'Laatste bezoek',
		'u_user_on_p_pages' => '%d gebruikers op %d pagina(s)',
		'confirm_del' => 'Weet je zeker dat je deze gebruiker wilt VERWIJDEREN ? \\nAl zijn bestanden en albums worden ook verwijderd.',
		'mail' => 'MAIL',
		'err_unknown_user' => 'Geselecteerde gebruiker bestaat niet !',
		'modify_user' => 'Wijzig gebruiker',
		'notes' => 'Notities',
		'note_list' => '<li>Als je niet je huidige wachtwoord wilt wijzigen, laat dan het "wachtwoord" veld leeg',
		'password' => 'Wachtwoord',
		'user_active' => 'Gebruiker is actief',
		'user_group' => 'Gebruikersgroep',
		'user_email' => 'E-mail van gebruiker',
		'user_web_site' => 'Website van gebruiker',
		'create_new_user'=> 'Creëer nieuwe gebruiker',
		'user_location' => 'Locatie van gebruiker',
		'user_interests' => 'Interesse van gebruiker',
		'user_occupation'  => 'Beroep van gebruiker', 
		'user_profile1' => '$user_profile1', //cpg1.4
		'user_profile2' => '$user_profile2', //cpg1.4
		'user_profile3' => '$user_profile3', //cpg1.4
		'user_profile4' => '$user_profile4', //cpg1.4
		'user_profile5' => '$user_profile5', //cpg1.4
		'user_profile6' => '$user_profile6', //cpg1.4
		'latest_upload' => 'Recente uploads',
		'never' => 'nooit', 
		'search' => 'Zoek gebruiker', //cpg1.4
		'submit' => 'Verzenden', //cpg1.4
		'search_submit' => 'Start!', //cpg1.4
		'search_result' => 'Zoekresultaten voor: ', //cpg1.4
		'alert_no_selection' => 'Je moet eerst een gebruiker selecteren!',  //cpg1.4 //js-alert
		'password' => 'wachtwoord', //cpg1.4
		'select_group' => 'Selecteer groep', //cpg1.4
		'groups_alb_access' => 'Album rechten per groep', //cpg1.4
		'album' => 'Album', //cpg1.4
		'category' => 'Catagorie', //cpg1.4
		'modify' => 'Wijzig?', //cpg1.4
		'group_no_access' => 'Deze groep heeft geen speciale toegangsrechten', //cpg1.4
		'notice' => 'Let Op', //cpg1.4
		'group_can_access' => 'Album(s) die alleen door "%s" bekeken mogen worden', //cpg1.4
	);

	// ------------------------------------------------------------------------- //
	// File util.php
	// ------------------------------------------------------------------------- //
	
	if (defined('UTIL_PHP')) {
	
		$lang_util_desc_php = array(
			'Pas titels aan uit bestandsnamen', //cpg1.4
			'Verwijder titels', //cpg1.4
			'Bouw thumbnails en middelgrote afbeeldingen opnieuw op', //cpg1.4
			'Verwijder orginele afbeeldingen en vervang deze door de aangepaste versie', //cpg1.4
			'Verwijder orgrinele en middelgrote afbeeldingen om ruimte vrij te maken', //cpg1.4
			'Verwijder verweesde commentaarregels', //cpg1.4
			'Pas bestandsgrootte en afmetingen aan (na handmatige aanpassing afbeeldingen)', //cpg1.4
			'Reset bekeken teller', //cpg1.4
			'Geef PHPINFO weer', //cpg1.4
			'Update de database', //cpg1.4
			'Laat logging zien', //cpg1.4
		);
	
		$lang_util_php = array(
			'title' => 'Beheerders gereedschappen (Pas formaat afbeeldingen aan)',
			'what_it_does' => 'Wat doen deze opties',
			'file' => 'Bestand',
			'problem' => 'Probleem', //cpg1.4
			'status' => 'Status', //cpg1.4
			'title_set_to' => 'titel instellen op',
			'submit_form' => 'verzenden',
			'updated_succesfully' => 'met succes toegepast',
			'error_create' => 'FOUT bij het aanmaken van',
			'continue' => 'Verwerk meer afbeeldingen',
			'main_success' => 'Het bestand %s was met succes gebruikt als hoofdbestand',
			'error_rename' => 'Fout bij het hernoemen van %s naar %s',
			'error_not_found' => 'Het bestand %s was niet gevonden',
			'back' => 'terug naar het begin',
			'thumbs_wait' => 'Bezig met verwerken van aanpassingen aan de thumbnails en/of afbeeldingen, momentje...',
			'thumbs_continue_wait' => 'Nog steeds bezit met verwerken van aanpassingen aan de thumbnails en/of afbeeldingen...',
			'titles_wait' => 'Aanpassen titels, momentje...',
			'delete_wait' => 'Verwijderen titels, momentje...',
			'replace_wait' => 'Verwijderen orginele bestanden en vervang deze door de aangepaste bestanden, momentje..',
			'instruction' => 'Snelstart instucties',
			'instruction_action' => 'Selecteer optie',
			'instruction_parameter' => 'Stel parameters in',
			'instruction_album' => 'Selecteer album',
			'instruction_press' => 'Druk op %s',
			'update' => 'Verwerken thumbnails en/of afbeeldingen',
			'update_what' => 'Wat er moet worden verwerkt',
			'update_thumb' => 'Alleen thumbnails',
			'update_pic' => 'Alleen aangepaste afbeeldingen',
			'update_both' => 'Zowel thumbnails als aangepaste afbeeldingen',
			'update_number' => 'Aantal te verwerken afbeeldingen per opdracht',
			'update_option' => '(Indien er een time-out melding komt, moet deze waarde lager worden gezet)',
			'filename_title' => 'Bestandsnaam &rArr; File title',
			'filename_how' => 'Hoe moet de bestandsnaam woden aangepast',
			'filename_remove' => 'Verwijder de .jpg aan het eindvan de bestandsnaam en vervang _ (underscore) met spaties',
			'filename_euro' => 'Wijzig 2003_11_23_13_20_20.jpg in 23/11/2003 13:20',
			'filename_us' => 'Wijzig 2003_11_23_13_20_20.jpg in 11/23/2003 13:20',
			'filename_time' => 'Wijzig 2003_11_23_13_20_20.jpg in 13:20',
			'delete' => 'Verwijder bestandsnamen of orginele afmeting afbeeldingen',
			'delete_title' => 'Verwijder bestandsnamen',
			'delete_title_explanation' => 'Deze optie zal alle titels uit het opgegevens album verwijderen.',
			'delete_original' => 'Verwijder de orginele afbeeldingen', //cpg1.4
			'delete_original_explanation' => 'Deze optie zal alle orginelen verwijderen van de webserver.', //cpg1.4
			'delete_intermediate' => 'Verwijder tussenafbeeldingen', //cpg1.4
			'delete_intermediate_explanation' => 'Deze optie zal alle tussenafbeeldingen (normal_) verwijderen.<br/>Gebruik deze optie om disk ruimte te besparen als de optie \'Maak tussenafbeeldingen aan\' in de instellingen aan staat.', //cpg1.4
			'delete_replace' => 'Verwijder de orginele afbeeldingen en vervang deze door de aangepast afbeeldingen', //cpg1.4
			'titles_deleted' => 'Alle titels uit het geselecteerde album worden verwijderd', //cpg1.4
			'deleting_intermediates' => 'Bezig met het verwijderen van de tussenafbeeldingen, momentje...', //cpg1.4
			'searching_orphans' => 'Zoeken naar wezen, momentje...', //cpg1.4
			'select_album' => 'Kies een album', //cpg1.4
			'delete_orphans' => 'Verwijder commentaar van niet aanwezige bestanden.', //cpg1.4
			'delete_orphans_explanation' => 'Deze optie zorgt ervoor dat alle commentaarregels van bestanden die niet meer bestaan worden verwijderd.<br/>Kies \'Alle albums\'.', //cpg1.4
			'refresh_db' => 'Herzien afmetingen en informatie van bestanden.', //cpg1.4
			'refresh_db_explanation' => 'Deze optie zal de inforatie over de bestanden updaten in de database. Gebruik deze optie als je de bestanden handmatig hebt aangepast.',
			'reset_views' => 'Reset bekeken teller', //cpg1.4
			'reset_views_explanation' => 'Deze optie reset alle bekeken tellers in het geselecteerde album.',
			'orphan_comment' => 'wezen commmentaar gevonden',
			'delete' => 'Verwijder',
			'delete_all' => 'Verwijder alles',
			'delete_all_orphans' => 'Verwijder alle wezen?', //cpg1.4
			'comment' => 'Commentaar: ',
			'nonexist' => 'gekoppeld aan niet bestaand bestand # ',
			'phpinfo' => 'Laat phpinfo zien',
			'phpinfo_explanation' => 'Deze optie bevat technische informatie over de webserver. Dit heb je bijvoorbeeld nodig als je een supportvraag mocht hebben.',
			'update_db' => 'Update database',
			'update_db_explanation' => 'Deze optie gebruik je als je Coppermine hebt ge-update, aangepast of een nieuwe versie hebt geïnstalleerd. Deze optie zal ook missende zaken in de database aanpassen.',
			'view_log' => 'Bekijk logging', //cpg1.4
			'view_log_explanation' => 'Deze optie geeft je de mogelijkheid uitgebreide log informatie op te slaan om zo te kijken wat er op de server gebeurd. De logging moet aanstaan in de <a href="admin.php">Coppermine instellingen</a>.', //cpg1.4
			'versioncheck' => 'Controleer versies', //cpg1.4
			'versioncheck_explanation' => 'Deze optie gebruik je om te zien of alle versies van de programmatuur nog in order is.', //cpg1.4
			'bridgemanager' => 'Integratie Beheer', //cpg1.4
			'bridgemanager_explanation' => 'Deze optie gebruik je om Coppermine te integreren in een ander pakket, bv een BBS/Forum.', //cpg1.4
		);
	}

	// ------------------------------------------------------------------------- //
	// File versioncheck.php //cpg1.4
	// ------------------------------------------------------------------------- //
	
	if (defined('VERSIONCHECK_PHP')) $lang_versioncheck_php = array(
		'title' => 'Contoleer veries', //cpg1.4
		'what_it_does' => 'Deze pagina is bedoeld voor beheerders die hun Coppermine versie geupdate hebben. Dit script loopt alle bestanden door en controleert of de versies gelijk zijn aan de bestanden op http://coppermine.sourceforge.net.<br/>In rood wordt weergegeven wat er moet worden aangepast. In geel worden bestanden weergegeven die je nog eens moet controleren. De groene bestanden (of die weergegeven worden in de standaard lettertype kleur) zijn prima. Klik op de icons om meer te weten te komen over de gegevens.', //cpg1.4
		'online_repository_unable' => 'Kan de online databank niet benaderen', //cpg1.4
		'online_repository_noconnect' => 'Coppermine kon de online databank niet benaderen. Dit kan door twee redenen hebben:', //cpg1.4
		'online_repository_reason1' => 'De Coppermine online databank is niet beschikbaar. Controleer dit op deze pagina: %s - Als deze pagina ook niet beschikbaar is, probeer het later nog eens.', //cpg1.4
		'online_repository_reason2' => 'PHP op de webserver heeft de instelling %s uit staan (standaard staat deze aan). Indien mogelijk, laat deze aanzetten door de beheerder van de server in <i>php.ini</i> (of laat het mogelijk worden om het te overrulen met %s). Als deze niet kan worden aangepast, dan is het niet mogelijk de bestanden met de online databank te vergelijken. Deze pagina zal dan alleen de bestandsversies tonen.', //cpg1.4
		'online_repository_skipped' => 'Verbinding met de online databank geannuleerd', //cpg1.4
		'online_repository_to_local' => 'Het script valt nu terug op de lokale versie van de bestanden. De informatie is misschien niet betrouwbaar als je de versie van Coppermine hebt geupdate en niet alle bestanden hebt overgehaald. Veranderingen aan de bestanden na deze versie zullen niet worden meegenomen.', //cpg1.4
		'local_repository_unable' => 'De locale databank kan niet worden benaderd', //cpg1.4
		'local_repository_explanation' => 'Coppermine kon de locale databank %s op je server niet benadern. Dit betekend waarschijnlijk dat je deze niet hebt geupload naar de server. Upload dit bestand en probeer het dan nog eens (Vernieuwen)<br/>Als het dan nog steeds niet lukt, de beheerder van de server heeft gedeelten van <a href="http://www.php.net/manual/en/ref.filesystem.php">PHP\'s filesystem functions</a> niet overgezet. Als dat het geval is, kan je deze tool helaas helemaal niet gebruiken, sorry.', //cpg1.4
		'coppermine_version_header' => 'Geïnstalleerde Coppermine versie', //cpg1.4
		'coppermine_version_info' => 'Je hebt nu geïnstalleerd: %s', //cpg1.4
		'coppermine_version_explanation' => 'Als je denkt dat dit helemaal fout is en je denkt een latere Coppermine versie geïnstalleerd te hebben, heb je waarschijnlijk de laatste versie van het bestand <i>include/init.inc.php</i> niet.', //cpg1.4
		'version_comparison' => 'Versie vergelijking', //cpg1.4
		'folder_file' => 'directory/bestand', //cpg1.4
		'coppermine_version' => 'Coppermine versie', //cpg1.4
		'file_version' => 'bestandsversie', //cpg1.4
		'webcvs' => 'web svn', //cpg1.4
		'writable' => 'schrijfbaar', //cpg1.4
		'not_writable' => 'niet schrijfbaar', //cpg1.4
		'help' => 'Help', //cpg1.4
		'help_file_not_exist_optional1' => 'bestand/directory bestaat niet', //cpg1.4
		'help_file_not_exist_optional2' => 'Het bestand of de directorie kan niet worden gebonden op de webserver. Ondanks dat het geen verplicht bestand/directory is wordt aanbevolen het te uploaden indien je problemen mocht ondervinden.', //cpg1.4
		'help_file_not_exist_mandatory1' => 'bestand/directory bestaat niet', //cpg1.4
		'help_file_not_exist_mandatory2' => 'Het bestand of de directorie kan niet worden gebonden op de webserver ondanks dat het een verplicht bestand/directory is. Upload het bestand naar de webserver.', //cpg1.4
		'help_no_local_version1' => 'Geen locale versie van het bestand', //cpg1.4
		'help_no_local_version2' => 'Het script kon de lokale versie van het bestand niet lezen. Het bestand is of te oud, of je hebt het aangepast en hebt de header informatie niet goed overgenomen/verwijderd. Een nieuwe versie uploaden wordt aanbevolen.', //cpg1.4
		'help_local_version_outdated1' => 'Lokale versie niet up-to-date', //cpg1.4
		'help_local_version_outdated2' => 'De versie op de webserver lijkt ouder te zijn dan de versie van Coppermine (waarschijnlijk een oude versie die is blijven staan bij het upgraden. Zorg ervoor dat de juiste versie wordt geupload.', //cpg1.4
		'help_local_version_na1' => 'Kan csv informatie niet lezen', //cpg1.4
		'help_local_version_na2' => 'Het script kan niet bepalen wat de csv versie van ht bestand op de webserver is. Je moet het bestand uploaden naar de webserver.', //cpg1.4
		'help_local_version_dev1' => 'Ontwikkel versie', //cpg1.4
		'help_local_version_dev2' => 'Het bestand op de webserver lijkt nieuwer dan die in de online Coppermine databank. Je gebruik ofwel de ontwikkel versie (je moet wel zeker weten wat je doet) of je hebt het bestand include/init.inc.php niet goed geupload.', //cpg1.4
		'help_not_writable1' => 'Directory niet schrijfbaar', //cpg1.4
		'help_not_writable2' => 'Verander de bestandsrechten (CHMOD) om het script schijfrechten te geven in de directory %s en alle onderliggende directories.', //cpg1.4
		'help_writable1' => 'Directory schijfbaar', //cpg1.4
		'help_writable2' => 'De directory %s is schrijfbaar. Dit is een onnodig risico, Coppermine heeft alleen leesrechten nodig.', //cpg1.4
		'help_writable_undetermined' => 'Coppermine was niet in staat vast te stllen of de directory schijfbaar was.', //cpg1.4
		'your_file' => 'lokaal bestand', //cpg1.4
		'reference_file' => 'internet bestand', //cpg1.4
		'summary' => 'Samenvatting', //cpg1.4
		'total' => 'Totaal aantal bestanden/directories gecontroleerd', //cpg1.4
		'mandatory_files_missing' => 'Vereiste bestanden niet gevonden', //cpg1.4
		'optional_files_missing' => 'Optionele bestanden niet gevonden', //cpg1.4
		'files_from_older_version' => 'Bestanden overgebleven uit een eerder versie van Coppermine', //cpg1.4
		'file_version_outdated' => 'Niet-recente bestanden', //cpg1.4
		'error_no_data' => 'Het script heeft een fout veroorzaakt en was niet in staat de juiste informatie op te halen. Sorry!.', //cpg1.4
		'go_to_webcvs' => 'ga naar %s', //cpg1.4
		'options' => 'Opties', //cpg1.4
		'show_optional_files' => 'Laat optionele bestanden/directories zien', //cpg1.4
		'show_mandatory_files' => 'Laat verplichte bestanden zien', //cpg1.4
		'show_file_versions' => 'Laat bestandsversies zien', //cpg1.4
		'show_errors_only' => 'Laat alleen bestanden/directories met fouten zien', //cpg1.4
		'show_permissions' => 'Laat directory rechten zien', //cpg1.4
		'show_condensed_output' => 'Laat simpele uitvoer zien (voor bv schermprints)', //cpg1.4
		'coppermine_in_webroot' => 'Coppermine in geïnstalleerd in de root van de server', //cpg1.4
		'connect_online_repository' => 'Zoek gegevens in de online Coppermine databank', //cpg1.4
		'show_additional_information' => 'Laat aanvullende informatie zien', //cpg1.4
		'no_webcvs_link' => 'Laat geen link naar de online cvs zien', //cpg1.4
		'stable_webcvs_link' => 'Geef csv link weer naar stabiele versie', //cpg1.4
		'devel_webcvs_link' => 'Geef csv link weer naar ontwikkel versie', //cpg1.4
		'submit' => 'voer wijzigingen uit / vernieuwen', //cpg1.4
		'reset_to_defaults' => 'reset naar de standaard waardes', //cpg1.4
	);

	// ------------------------------------------------------------------------- //
	// File view_log.php  //cpg1.4
	// ------------------------------------------------------------------------- //
	
	if (defined('VIEWLOG_PHP')) $lang_viewlog_php = array(
		'delete_all' => 'Verwijder alle logbestanden', //cpg1.4
		'delete_this' => 'Verwijder dit logbestand', //cpg1.4
		'view_logs' => 'Bekijk logbestand', //cpg1.4
		'no_logs' => 'Geen logbestanden aangemaakt.', //cpg1.4
	);

	// ------------------------------------------------------------------------- //
	// File xp_publish.php //cpg1.4
	// ------------------------------------------------------------------------- //
	
	if (defined('XP_PUBLISH_PHP')) {
	
$lang_xp_publish_client = <<<EOT
<h1>XP Web Publishing Wizard Client</h1><p>Deze module kan gebruikt worden om de <b>Windows XP</b> web publishing wizard met Coppermine te gebruiken.</p>
EOT;

$lang_xp_publish_required = <<<EOT
<h2>Systeemvereisten:</h2><ul><li>Windows XP (de wizard is onderdeel van Windows XP).</li><li>Een goed geïnstalleerde versie van Coppermine waar de <b>web upload fucntie goed werkt.</b></li></ul><h2>Hoe de client software te installeren</h2><ul><li>Right click on
EOT;

$lang_xp_publish_select = <<<EOT
Select &quot;save target as..&quot;. Bweaar het bestand op de harddisk. Als je heb vestand bewaard, controleer dan of de bestandnaam <b>cpg_###.reg</b> is (De ### staan voor de nummerieke datum/tijd). Wijzig deze naam indien nodig (laat de nummers intact).Indien gedownloade controleer dan nogmaal het bestand om de server met de web publishing wizard. te laten werken.</li></ul>
EOT;

$lang_xp_publish_testing = <<<EOT
<h2>Testing</h2><ul><li>In de Windows Explorer, delecteer een aantal bestanden en klik op <b>Publiceerh xxx naar het internet</b> aan de linkerkant.</li><li>Controleer de bestandsselectie. Klik op <b>Volgende</b>.</li><li>In de lijst van items DIE dan verschijnt, selecteer een van de gallerijen (het heeft de naam van jou eigen gallerij)  Als de galleij niet tevoorschijn komt, controleer <b>cpg_pub_wizard.reg</b> zoals hierboven beschreven.</li><li>Geef je login informatie indien nodig in.</li><li>Selecteer het doel album voor de afbeeldingen of maak een nieuwe aan.</li><li>Klik op <b>Volgende</b>. De upload van de afbeeldingen begint.</li><li>Als alles is geupload, controlleer de gallerij of alle afbeeldingen correct zijn toegevoegd.</li></ul>
EOT;

$lang_xp_publish_notes = <<<EOT
<h2>Notes :</h2><ul><li>Als de upload is gestart, kan de wizard geen foutmeldingen weergeven omdat de wizard niet kan controleren of het uploadproces goed is gegaan. Dit moet je handmatig controleren in de gallerij.</li><li>Als de upload mislukt, zet dan de &quot;Debug modus&quot; aan op de Coppermine instellingen pagina. Probeer het dan met een enkele afbeelding nog een keer en controleer daarna de foutmeldingen in het
EOT;

$lang_xp_publish_flood = <<<EOT
bestand dat in de Coppermine directory van je server staat.</li><li>Om te voorkomen dat je gallerij volloopt met allerlei afbeeldingen dor worden geupload via de wizard, alleen <b>gallerij beheerders</b> en <b>gebruikers met een eigen album</b> zullen deze functie kunnen gebruiken.</li>
EOT;
	
		$lang_xp_publish_php = array(
			'title' => 'Coppermine - XP Web Publishing Wizard', //cpg1.4
			'welcome' => 'Welkom <b>%s</b>,', //cpg1.4
			'need_login' => 'Je moet zijn ongelogd op de gallerij met je webbrowser voordat je deze wizard kunt gebruiken.<p/><p>Als je inlogd, vergeet niet de <b>onthoudt mij</b> optie te gebruiken.', //cpg1.4
			'no_alb' => 'Sorry, maar er is geen album waar het is toegestaan met behulp van deze wizard afbeeldingen te uploaden.', //cpg1.4
			'upload' => 'Upload de afbeeldingen naar een bestaand album.', //cpg1.4
			'create_new' => 'Maak een nieuw album aan voor de afbeeldingen', //cpg1.4
			'album' => 'Album', //cpg1.4
			'category' => 'Catagorie',
			'new_alb_created' => 'Je nieuwe album &quot;<b>%s</b>&quot; is aangemaakt.', //cpg1.4
			'continue' => 'Klik &quot;Volgende&quot; om het uploaden te starten', //cpg1.4
			'link' => 'deze link', //cpg1.4
		);
	}

?>