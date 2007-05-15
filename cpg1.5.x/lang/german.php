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
  Coppermine version: 1.4.10
  $Source$
  $Revision: 3275 $
  $Author: gaugau $
  $Date: 2006-09-03 12:10:47 +0200 (So, 03 Sep 2006) $
**********************************************/

if (!defined('IN_COPPERMINE')) { die('Not in Coppermine...');}

// info about translators and translated language
$lang_translation_info = array(
  'lang_name_english' => 'German',
  'lang_name_native' => 'Deutsch',
  'lang_country_code' => 'de',
  'trans_name'=> 'Joachim Müller',
  'trans_email' => '',
  'trans_website' => 'http://gaugau.de/',
  'trans_date' => '2007-05-15',
);

$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('Bytes', 'KB', 'MB');

// Day of weeks and months
$lang_day_of_week = array('So', 'Mo', 'Di', 'Mi', 'Do', 'Fr', 'Sa');
$lang_month = array('Januar', 'Februar', 'März', 'April', 'Mai', 'Juni', 'Juli', 'August', 'September', 'Oktober', 

'November', 'Dezember');

// Some common strings
$lang_yes = 'Ja';
$lang_no  = 'Nein';
$lang_back = 'zurück';
$lang_continue = 'weiter';
$lang_info = 'Information';
$lang_error = 'Fehler';
$lang_check_uncheck_all = 'alle selektieren/de-selektieren';

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$album_date_fmt =    '%d.%B %Y';
$lastcom_date_fmt =  '%d.%m.%y um %H:%M';
$lastup_date_fmt = '%d.%B %Y';
$register_date_fmt = '%d.%B %Y';
$lasthit_date_fmt = '%d.%B %Y um %H:%M';
$comment_date_fmt =  '%d.%B %Y um %H:%M';
$log_date_fmt = '%d.%B %Y um %H:%M';
$scientific_date_fmt = '%Y-%m-%d %H:%M:%S'; // cpg1.5.x

// For the word censor
$lang_bad_words = array('*fuck*', 'Fu\(*', 'fuk*', 'masturbat*', 'motherfucker', 'nigger*', 'penis', 'pussy', 'shit', 

'titties', 'titty',  'arsch*', 'fick*', 'fotze', 'votze', 'Sieg Heil', 'Heil Hitler', 'Nutte', 'Möse', 'Moese', 'Pimmel', 

'Schwengel', 'Titte*', 'bums*', 'Scheiss*', 'Scheiß*');

$lang_meta_album_names = array(
  'random' => 'Zufalls-Bilder',
  'lastup' => 'neueste Dateien',
  'lastalb'=> 'Zuletzt aktualisierte Alben',
  'lastcom' => 'neueste Kommentare',
  'topn' => 'am meisten angesehen',
  'toprated' => 'am besten bewertet',
  'lasthits' => 'zuletzt angesehen',
  'search' => 'Suchergebnisse',
  'favpics'=> 'Favoriten', 
);

$lang_errors = array(
  'access_denied' => 'Du hast kein Recht, diese Seite anzusehen.',
  'perm_denied' => 'Du hast nicht das Recht, diese Operation auszuführen.',
  'param_missing' => 'Das Skript wurde ohne den/die erforderlichen Parameter aufgerufen.',
  'non_exist_ap' => 'Das gewählte Album bzw. die gewählte Datei existiert nicht!',
  'quota_exceeded' => 'Speicherplatz erschöpft<br /><br />Du hast ein Speicherlimit von [quota] kB, Deine Dateien belegen zur 

Zeit [space] kB, das Hinzufügen dieser Datei würde Deinen Speicherplatz überschreiten.',
  'gd_file_type_err' => 'Bei Verwendung der GD-Bibliothek sind nur die Dateitypen JPG und PNG erlaubt.',
  'invalid_image' => 'Das Bild, das Du hochgeladen hast, ist beschädigt oder kann nicht von der GD-Bibliothek verarbeitet 

werden',
  'resize_failed' => 'Kann Thumbnail nicht erzeugen.',
  'no_img_to_display' => 'Keine Datei zum Anzeigen vorhanden (oder Du hast keine Berechtigung, das Album zu sehen)',
  'non_exist_cat' => 'Die gewählte Kategorie existiert nicht',
  'orphan_cat' => 'Eine Kategorie besitzt ein nicht-existierendes Eltern-Element, benutze den Kategorie-Manager, um das 

Problem zu beheben.',
  'directory_ro' => 'Das Verzeichnis \'%s\' ist nicht beschreibbar, die Dateien können nicht gelöscht werden',
  'pic_in_invalid_album' => 'Die Datei befindet sich in einem nicht-existierenden Album (%s)!?',
  'banned' => 'Du bist zur Zeit von dieser Seite verbannt.',
  'not_with_udb' => 'Diese Funktion ist innerhalb von Coppermine deaktiviert, weil sie in die Forums-Software integriert ist. Entweder wird das, was Du gerade zu tun versucht hast, in dieser Konfiguration nicht unterstützt oder die Funktion sollte von der Forums-Software übernommen werden.',
  'offline_title' => 'Wartungsmodus',
  'offline_text' => 'Die Galerie ist zur Zeit im Wartungsmodus - schau später nochmal vorbei!', //cpg1.3.0
  'ecards_empty' => 'Es können derzeit keine eCard-Einträge gefunden werden. Überprüfe, ob die Aufzeichung von eCards in den Einstellungen aktivert wurde!',
  'action_failed' => 'Aktion fehlgeschlagen. Coppermine konnte die gewünschte Aktion nicht ausführen.', //cpg1.3.0
  'no_zip' => 'Die zum Verarbeiten von ZIP-Dateien notwendigen libraries sind auf dem Server nicht verfügbar. Setze Dich mit dem Server-Admin in Verbindung.',
  'zip_type' => 'Keine Berechtigung für den Upload von ZIP-Dateien.',
  'database_query' => 'Beim Ausführen einer Datenbank-Abfrage ist ein Fehler aufgetreten',
  'non_exist_comment' => 'Der gewählte Kommentar existiert nicht',
  'page_removed_redirector' => 'You are trying to access a page that has been removed from the coppermine package.<br />Redirecting...', //cpg1.5
  'captcha_error' => 'The confirmation code didn\'t match', //cpg1.5
);

$lang_bbcode_help_title = 'Bulletin Board code Hilfe';
$lang_bbcode_help = 'Du kannst klickbare Links und Formatierung in diesem Feld anwenden durch die Verwendung folgender 

bbcode-Befehle: <li>[b]Fett[/b] =&gt; <b>Fett</b></li><li>[i]Kursiv[/i] =&gt; <i>Kursiv</i></li><li>[url=http://deineseite.com/]Url Text[/url] =&gt; <a href="http://deineseite.com">UrlText</a></li><li>[email]benutzer@domain.com[/email] =&gt; <a href="mailto:benutzer@domain.com">benutzer@domain.com</a></li><li>[color=red]Beispieltext[/color] =&gt; <span style="color:red">Beispieltext</span></li><li>[img]http://coppermine.sf.net/demo/images/red.gif[/img] => <img src="../images/red.gif" border="0" alt="" /></li>';

$lang_common = array(
  'yes' => 'Ja', // cpg1.5.x
  'no' => 'Nein', // cpg1.5.x
  'back' => 'Zurück', // cpg1.5.x
  'continue' => 'Weiter', // cpg1.5.x
  'information' => 'Information', // cpg1.5.x
  'error' => 'Fehler', // cpg1.5.x
  'check_uncheck_all' => 'alle selektieren/de-selektieren', // cpg1.5.x
  'confirm' => 'Bestätigung', // cpg1.5.x
  'captcha_help_title' => 'Visuelle Bestätigung (captcha)', // cpg1.5.x
  'captcha_help' => 'Um Spam zu vermeiden musst Du beweisen, dass Du ein Mensch bist und nicht nur ein Skript. Gib dazu die in der Grafik angezeigten Buchstaben ein.<br />Groß-/Kleinschreibung spielt keine Rolle, Du kannst alles in Kleinbuchstaben eingeben.', // cpg1.5.x
  'title' => 'Titel', // cpg1.5.x
  'caption' => 'Überschrift', // cpg1.5.x
  'keywords' => 'Schlüsselwörter', // cpg1.5.x
  'owner_name' => 'Eigentümer Name', // cpg1.5.x
  'filename' => 'Dateiname', // cpg1.5.x
  'filesize' => 'Dateigrösse', // cpg1.5.x
  'album' => 'Album', // cpg1.5.x
  'file' => 'Datei', // cpg1.5.x
);


// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
  'home_title' => 'Gehe zur Startseite',
  'home_lnk' => 'Startseite',
  'alb_list_title' => 'Gehe zur Alben-Liste',
  'alb_list_lnk' => 'Alben-Liste',
  'my_gal_title' => 'Gehe zu meiner persönlichen Galerie',
  'my_gal_lnk' => 'Meine Galerie',
  'my_prof_title' => 'Gehe zu meinem Profil',
  'my_prof_lnk' => 'Mein Profil',
  'adm_mode_title' => 'Aktiviere Anzeige der Admin-Menüs',
  'adm_mode_lnk' => 'Admin-Menü anzeigen',
  'usr_mode_title' => 'Deaktiviere Anzeige der Admin-Menüs',
  'usr_mode_lnk' => 'Admin-Menü verbergen',
  'upload_pic_title' => 'Datei in ein Album hochladen',
  'upload_pic_lnk' => 'Datei hochladen',
  'register_title' => 'Erzeuge ein Benutzerkonto',
  'register_lnk' => 'Registrieren',
  'login_title' => 'melde mich an',
  'login_lnk' => 'Anmelden',
  'logout_title' => 'Melde mich ab',
  'logout_lnk' => 'Abmelden',
  'lastup_title' => 'Zeige neueste Uploads an',
  'lastup_lnk' => 'Neueste Uploads',
  'lastcom_title' => 'Zeige die neuesten Kommentare an',
  'lastcom_lnk' => 'Neueste Kommentare',
  'topn_title' => 'Zeige die am meisten angesehenen Dateien an',
  'topn_lnk' => 'Am meisten angesehen',
  'toprated_title' => 'Zeige die am besten bewerteten Dateien an',
  'toprated_lnk' => 'Am besten bewertet',
  'search_title' => 'Durchsuche die Galerie',
  'search_lnk' => 'Suche',
  'fav_title' => 'Zeige meine Favoriten an',
  'fav_lnk' => 'Meine Favoriten',
  'memberlist_title' => 'Benutzerliste anzeigen',
  'memberlist_lnk' => 'Benutzerliste',
  'faq_title' => 'Häufig gestellte Fragen (Frequently Asked Questions) zur Galerie &quot;Coppermine&quot;',
  'faq_lnk' => 'FAQ',
);

$lang_gallery_admin_menu = array(
  'upl_app_title' => 'Neu hochgeladene Dateien bestätigen',
  'upl_app_lnk' => 'Upload-Bestätigung',
  'admin_title' => 'Gehe zur Konfiguration',
  'admin_lnk' => 'Einstellungen',
  'albums_title' => 'Gehe zur Alben-Konfiguration',
  'albums_lnk' => 'Alben',
  'categories_title' => 'Gehe zur Kategorien-Konfiguration',
  'categories_lnk' => 'Kategorien',
  'users_title' => 'Gehe zur Benutzer-Konfiguration',
  'users_lnk' => 'Benutzer',
  'groups_title' => 'Gehe zur Gruppen-Konfiguration',
  'groups_lnk' => 'Gruppen',
  'comments_title' => 'Zeige alle Kommentare zur Bearbeitung an',
  'comments_lnk' => 'Kommentare bearbeiten',
  'searchnew_title' => 'Gehe zur Stapel-Bearbeitung hochgeladener Dateien',
  'searchnew_lnk' => 'Batch-hinzufügen',
  'util_title' => 'Gehe zu den Admin-Werkzeugen',
  'util_lnk' => 'Admin-Werkzeuge',
  'key_title' => 'Gehe zum Schlagwort-Register',
  'key_lnk' => 'Schlagwort-Register',
  'ban_title' => 'Gehe zur Konfiguration der Verbannungen',
  'ban_lnk' => 'Benutzer verbannen',
  'db_ecard_title' => 'Bisher gesendete eCards anzeigen',
  'db_ecard_lnk' => 'eCards anzeigen',
  'pictures_title' => 'Bestimme die Reihenfolge von Bildern in Alben',
  'pictures_lnk' => 'Meine Bilder sortieren',
  'documentation_lnk' => 'Dokumentation',
  'documentation_title' => 'Coppermine-Handbuch',
  'phpinfo_lnk' => 'phpinfo', // cpg1.5.x
  'phpinfo_title' => 'Beinhaltet technische Informationen über Deinen Server. Du wirst möglicherweise nach diesen Informationen gefragt, wenn Du eine Support-Anfrage stellst.', // cpg1.5.x
  'update_database_lnk' => 'Datenbank aktualisieren', // cpg1.5.x
  'update_database_title' => 'Wenn Du Coppermine-Dateien ersetzt hast, eine Modifikation oder ein Upgrade von einer frühreren Version von Coppermine durchgeführt hast, lasse diese Datenbank-Aktualisierung einmal laufen, um die möglicherweise notwendigen Änderungen an der Datenbank durchzuführen bzw. fehlende Tabellen zu erzeugen.', // cpg1.5.x
  'view_log_files_lnk' => 'Log-Dateien anzeigen', // cpg1.5.x
  'view_log_files_title' => 'Coppermine kann verschiedene Benutzer-Aktionen protokollieren. Diese Protokolle können hier angesehen werden, wenn die Aufzeichnung von Log-Dateien in den Coppermine-Einstellungen aktiviert wurde.', // cpg1.5.x
  'check_versions_lnk' => 'Versions-Check', // cpg1.5.x
  'check_versions_title' => 'Überprüfe die Versionen Deiner Dateien um herauszufinden, ob alle Dateien bei einem Update korrekt ersetzt wurden, oder ob die Coppermine-Dateien nach der Veröffentlichung eines Pakets aktualisiert wurden.', // cpg1.5.x
  'bridgemgr_lnk' => 'Bridge-Assistent', // cpg1.5.x
  'bridgemgr_title' => 'Assistent zur Integration der Benutzerverwaltung von Coppermine mit einer anderen Applikation (z.B. einem Forum) - sogenanntes "Bridging".', // cpg1.5.x
  'pluginmgr_lnk' => 'Plugins', // cpg1.5.x
  'pluginmgr_title' => 'Plugins verwalten', // cpg1.5.x
  'overall_stats_lnk' => 'Gesamt-Statistik', // cpg1.5.x
  'overall_stats_title' => 'Trefferstatistiken nach Browser und Betriebssystem anzeigen (wenn entsprechende Option in den Einstellungen aktiviert sind).', // cpg1.5.x
  'keywordmgr_lnk' => 'Schlagworte', // cpg1.5.x
  'keywordmgr_title' => 'Verwalte Schlagworte (falls die entsprechende Option in den Einstellungen aktiviert wurde).', // cpg1.5.x
  'exifmgr_lnk' => 'EXIF', // cpg1.5.x
  'exifmgr_title' => 'EXIF-Anzeige verwalten (falls die entsprechende Option in den Einstellungen aktiviert wurde).', // cpg1.5.x
);

$lang_user_admin_menu = array(
  'albmgr_title' => 'Meine Alben erzeugen/anordnen',
  'albmgr_lnk' => 'Alben erzeugen/anordnen',
  'modifyalb_title' => 'Meine Alben bearbeiten', 
  'modifyalb_lnk' => 'Meine Alben bearbeiten',
  'my_prof_title' => 'gehe zu meinem persönlichen Profil',
  'my_prof_lnk' => 'Mein Profil',
);

$lang_cat_list = array(
  'category' => 'Kategorie',
  'albums' => 'Alben',
  'pictures' => 'Dateien',
);

$lang_album_list = array(
  'album_on_page' => '%d Alben auf %d Seite(n)',
);

$lang_thumb_view = array(
  'date' => 'Datum',
  //Sort by filename and title
  'name' => 'Dateiname',
  'title' => 'Titel',
  'sort_da' => 'Aufsteigend nach Datum sortieren',
  'sort_dd' => 'Absteigend nach Datum sortieren',
  'sort_na' => 'Aufsteigend nach Name sortieren',
  'sort_nd' => 'Absteigend nach Name sortieren',
  'sort_ta' => 'Aufsteigend nach Titel sortieren',
  'sort_td' => 'Absteigend nach Titel sortieren',
  'position' => 'Position',
  'sort_pa' => 'Aufsteigend nach Position sortieren',
  'sort_pd' => 'Absteigend nach Position sortieren',
  'download_zip' => 'Als ZIP-Datei herunterladen',
  'pic_on_page' => '%d Dateien auf %d Seite(n)',
  'user_on_page' => '%d Benutzer auf %d Seite(n)',
  'enter_alb_pass' => 'Gib das Passwort für das Album ein',
  'invalid_pass' => 'Ungültiges Passwort',
  'pass' => 'Passwort',
  'submit' => 'Absenden',
);

$lang_img_nav_bar = array(
  'thumb_title' => 'zurück zur Thumbnail-Seite',
  'pic_info_title' => 'Dateiinformationen anzeigen/verbergen',
  'slideshow_title' => 'Diashow',
  'ecard_title' => 'Bild als eCard versenden',
  'ecard_disabled' => 'eCards sind deaktiviert',
  'ecard_disabled_msg' => 'Du hast nicht das Recht, eCards zu versenden',
  'prev_title' => 'vorherige Datei anzeigen',
  'next_title' => 'nächste Datei anzeigen',
  'pic_pos' => 'Datei %s/%s',
  'report_title' => 'Diese Datei dem Administrator melden',
  'go_album_end' => 'Zum Ende gehen',
  'go_album_start' => 'Zum Anfang zurückkehren',
  'go_back_x_items' => 'gehe %s Einträge zurück',
  'go_forward_x_items' => 'gehe %s Einträge weiter',
);

$lang_rate_pic = array(
  'rate_this_pic' => 'Diese Datei bewerten',
  'no_votes' => '(noch keine Bewertung)',
  'rating' => '- derzeitige Bewertung : %s/5 mit %s Stimme(n)',
  'rubbish' => 'sehr schlecht',
  'poor' => 'schlecht',
  'fair' => 'ganz OK',
  'good' => 'gut',
  'excellent' => 'sehr gut',
  'great' => 'super',
  'js_warning' => 'Javascript muss aktiviert sein, um abstimmen zu können', // cpg1.5.x
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
  CRITICAL_ERROR => 'Kritischer Fehler',
  'file' => 'Datei: ',
  'line' => 'Zeile: ',
);

$lang_display_thumbnails = array(
  'dimensions' => 'Abmessungen : ',
  'date_added' => 'hinzugefügt am : ',
);

$lang_get_pic_data = array(
  'n_comments' => '%s Kommentar(e)',
  'n_views' => '%s x angesehen',
  'n_votes' => '(%s Bewertungen)',
);

$lang_cpg_debug_output = array(
  'debug_info' => 'Debug-Info',
  'select_all' => 'Alles markieren',
  'copy_and_paste_instructions' => 'Wenn Du Hilfe im Coppermine-Forum suchen willst, kopiere diese Debug-Ausgabe in Deinen 

Beitrag im Forum. Ersetze eventuell vorhandene Passwörter in den Queries durch ***.<br />Anmerkung: Diese Ausgabe erfolgt nur 

zur Information und bedeutet nicht, dass ein Fehler in der Galerie vorliegt.',
  'phpinfo' => 'phpinfo anzeigen',
  'notices' => 'Notices',
);

$lang_language_selection = array(
  'reset_language' => 'Standard-Sprache',
  'choose_language' => 'Wähle Sprache',
);

$lang_theme_selection = array(
  'reset_theme' => 'Standard-Design',
  'choose_theme' => 'Wähle Design',
);

$lang_version_alert = array(
  'version_alert' => 'Nicht unterstützte Version!',
  'no_stable_version' => 'Du betreibst Coppermine version  %s (%s), das nur für erfahrene Benutzer gedacht ist - für diese 

Version gibt es keinen Support oder Funktions-Garantien. Benutze sie auf eigenes Risiko oder downgrade auf die aktuellste 

stabile Version, wenn Du Support brauchst!',
  'gallery_offline' => 'Die Galerie ist zur Zeit im Wartungs-Modus und ist nur für Dich als Admin zugänglich. Vergiss nicht, 

sie wieder aus dem Wartungs-Modus in den "normalen" Modus zurück zu schalten, wenn Deine Wartungsarbeiten beendet sind.', 
);

$lang_create_tabs = array(
  'previous' => 'vorherige',
  'next' => 'nächste',
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
  'error_wakeup' => "Konnte das Plugin '%s' nicht aktivieren",
  'error_install' => "Konnte das Plugin '%s' nicht installieren",
  'error_uninstall' => "Konnte das Plugin '%s' nicht de-installieren",
  'error_sleep' => "Konnte das Plugin '%s' nicht de-aktivieren.<br />",
);

// ------------------------------------------------------------------------- //
// File include/smilies.inc.php
// ------------------------------------------------------------------------- //

if (defined('SMILIES_PHP')) $lang_smilies_inc_php = array(
  'Exclamation' => 'Ausruf',
  'Question' => 'Frage',
  'Very Happy' => 'sehr glücklich',
  'Smile' => 'lachen',
  'Sad' => 'traurig',
  'Surprised' => 'überrascht',
  'Shocked' => 'schockiert',
  'Confused' => 'verwirrt',
  'Cool' => 'cool',
  'Laughing' => 'lachend',
  'Mad' => 'wütend',
  'Razz' => 'scheu',
  'Embarassed' => 'schüchtern',
  'Crying or Very sad' => 'traurig',
  'Evil or Very Mad' => 'böse',
  'Twisted Evil' => 'verschlagen',
  'Rolling Eyes' => 'na ja',
  'Wink' => 'zwinker',
  'Idea' => 'Idee',
  'Arrow' => 'Pfeil',
  'Neutral' => 'neutral',
  'Mr. Green' => 'Mr. Green',
);

// ------------------------------------------------------------------------- //
// File addpic.php
// ------------------------------------------------------------------------- //

// void

// ------------------------------------------------------------------------- //
// File mode.php
// ------------------------------------------------------------------------- //

if (defined('MODE_PHP')) $lang_mode_php = array(
  0 => 'Anzeige der Admin-Menüs wird deaktiviert',
  1 => 'Anzeige der Admin-Menüs wird aktiviert',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
  'alb_need_name' => 'Alben müssen einen Namen haben!', //js-alert
  'confirm_modifs' => 'Bist Du sicher, dass Du diese Änderungen durchführen willst?', //js-alert
  'no_change' => 'Du hast nichts verändert!', //js-alert
  'new_album' => 'neues Album',
  'confirm_delete1' => 'Willst Du dieses Album wirklich löschen?', //js-alert
  'confirm_delete2' => '\nAlle Dateien und Kommentare, die darin enthalten sind, werden gelöscht!', //js-alert
  'select_first' => 'Wähle zuerst ein Album', //js-alert
  'alb_mrg' => 'Alben-Manager',
  'my_gallery' => '* meine Galerie *',
  'no_category' => '* keine Kategorie *',
  'delete' => 'löschen',
  'new' => 'neu',
  'apply_modifs' => 'Änderungen übernehmen',
  'select_category' => 'wähle Kategorie',
);

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) $lang_banning_php = array(
  'title' => 'Benutzer verbannen',
  'user_name' => 'Benutzername',
  'ip_address' => 'IP-Adresse',
  'expiry' => 'läuft ab am (leer bedeutet permanent)',
  'edit_ban' => 'Änderungen speichern',
  'delete_ban' => 'Löschen',
  'add_new' => 'Neuen Bann hinzufügen',
  'add_ban' => 'Hinzufügen',
  'error_user' => 'Kann angegebenen Benutzer nicht finden',
  'error_specify' => 'Du musst entweder einen Benutzer oder eine IP-Adresse angeben',
  'error_ban_id' => 'Ungültige Verbannungs-ID!',
  'error_admin_ban' => 'Du kannst DIch nicht selbst verbannen!',
  'error_server_ban' => 'Du wolltest Deinen eigenen Server verbannen? Ts ts, das kann ich nicht zulassen...',
  'error_ip_forbidden' => 'Du kannst diese IP-Adresse nicht verbannen - sie ist sowieso nicht route-bar (private)!<br />Wenn 

Du Verbannungen für private IP-Adressen erlauben möchtest, dann erlaube das in Deinen <a href="admin.php">Einstellungen</a> 

(macht nur Sinn, wenn Coppermine in einem LAN läuft).',
  'lookup_ip' => 'IP-Adresse nachschlagen',
  'submit' => 'los!',
  'select_date' => 'Wähle Datum',
);

// ------------------------------------------------------------------------- //
// File bridgemgr.php
// ------------------------------------------------------------------------- //

if (defined('BRIDGEMGR_PHP')) $lang_bridgemgr_php = array(
  'title' => 'Bridge-Assistent',
  'warning' => 'Warnung: bevor Du diesen Assitenten benutzt muss Dir klar sein, dass Sicherheits-relevante Daten über 

HTML-Formulare versendet werden. Führe den Assitenten nur auf Deinem eigenen PC aus (nicht auf einem öffentlichen Rechner wie 

beispielsweise in einem Internet-Café), und lösche danach auf jeden Fall Deinen Browser-Cahce und Deine temporären 

Internet-Dateien, sonst haben andere vielleicht Zugriff zu diesen Daten!',
  'back' => 'zurück',
  'next' => 'weiter',
  'start_wizard' => 'Starte den Bridge-Assistenten',
  'finish' => 'Fertigstellen',
  'hide_unused_fields' => 'unbenutze Formular-Felder verbergen (empfohlen)',
  'clear_unused_db_fields' => 'ungültige Datenbank-Einträge löschen (empfohlen)',
  'custom_bridge_file' => 'der Name Deiner benutzerdefinierten Bridge-Datei (Wenn der Dateiname  <i>meinedatei.inc.php</i> 

lautet, dann gib <i>meinedatei</i> in diesem Feld ein)',
  'no_action_needed' => 'Kein Aktion notwenig in diesem Schritt. Klicke auf &quot;weiter&quot;, um fortzufahren.',
  'reset_to_default' => 'Auf Standard-Wert zurücksetzen',
  'choose_bbs_app' => 'Wähle eine Anwendung, mit der Du &quot;bridgen&quot; willst',
  'support_url' => 'Für Support zu dieser Anwendung klicke hier',
  'settings_path' => 'Pfad(e) Deiner Forums-Anwendung',
  'database_connection' => 'Datenbank-Verbindung',
  'database_tables' => 'Tabellen in der Datenbank',
  'bbs_groups' => 'Forums-Gruppen',
  'license_number' => 'Lizenz-Nummer',
  'license_number_explanation' => 'Gib Deine Lizenz-Nummer ein (falls zutreffend)',
  'db_database_name' => 'Datenbank-Name',
  'db_database_name_explanation' => 'Gib den Namen der Datenbank ein, die Dein Forum benutzt',
  'db_hostname' => 'Datenbank-Hostname',
  'db_hostname_explanation' => 'Hostname Deiner mySQL-Datenbank, meistens &quot;localhost&quot;',
  'db_username' => 'Datenbank-Benutzername',
  'db_username_explanation' => 'mySQL Benutzer-Konto für die Verbindung mit Deinem Forum',
  'db_password' => 'Datenbank-Passwort',
  'db_password_explanation' => 'Passwort für Die mySQL-Datenbank Deines Forums',
  'full_forum_url' => 'Forums-URL',
  'full_forum_url_explanation' => 'Vollständige Internet-Adresse Deines Forums (einschließlich http:// , z.B. 

http://www.yourdomain.tld/forum)',
  'relative_path_of_forum_from_webroot' => 'Relativer Pfad zum Forum',
  'relative_path_of_forum_from_webroot_explanation' => 'Relativer Pfad zu Deinem Forum vom Wurzelverzeichnis (webroot) aus 

gesehen (Beispiel: wenn Dein Forum unter http://www.meineseite.tld/forum/ ist, dann gib hier &quot;/forum/&quot; in das Feld 

ein)',
  'relative_path_to_config_file' => 'Relativer Pfad zur Konfigurations-Datei Deines Forums',
  'relative_path_to_config_file_explanation' => 'Relativer Pfad zu Deinem Forum, von Deinem Coppermine-Verzeichnis aus 

gesehen (z.B. &quot;../forum/&quot; wenn Dein Forum unter http://www.deineseite.tld/forum/ ist und Coppermine unter 

http://www.deineseite.tld/gallery/)',
  'cookie_prefix' => 'Cookie-Vorsilbe',
  'cookie_prefix_explanation' => 'Der Cookie-Name Deines Forums',
  'table_prefix' => 'Tabellen-Vorsilbe',
  'table_prefix_explanation' => 'Die Vorsible (Präfix) der Tabellen Deines Forums, die Du bei der Einrichtung Deines Forums 

festgelegt hast.',
  'user_table' => 'Benutzer-Tabelle',
  'user_table_explanation' => '(normalerweise sind die vorgeschlagenen Standard-Werte OK, wenn Du keine Sondereinstellungen 

in Deinem Forum vorgenommen hast)',
  'session_table' => 'Session-Tabelle',
  'session_table_explanation' => '(normalerweise sind die vorgeschlagenen Standard-Werte OK, wenn Du keine 

Sondereinstellungen in Deinem Forum vorgenommen hast)',
  'group_table' => 'Gruppen-Tabelle',
  'group_table_explanation' => '(normalerweise sind die vorgeschlagenen Standard-Werte OK, wenn Du keine Sondereinstellungen 

in Deinem Forum vorgenommen hast)',
  'group_relation_table' => 'Gruppen-Relations-Tabelle',
  'group_relation_table_explanation' => '(normalerweise sind die vorgeschlagenen Standard-Werte OK, wenn Du keine 

Sondereinstellungen in Deinem Forum vorgenommen hast)',
  'group_mapping_table' => 'Gruppen-Verknüpfungs-Tabelle',
  'group_mapping_table_explanation' => '(normalerweise sind die vorgeschlagenen Standard-Werte OK, wenn Du keine 

Sondereinstellungen in Deinem Forum vorgenommen hast)',
  'use_standard_groups' => 'Standard-Forums-Gruppen benutzen',
  'use_standard_groups_explanation' => 'Eingebaute Standard-Benutzergruppen Deines Forums benutzen (empfohlen). Diese Option 

setzt alle benutzerdefinierten Gruppen-Einstellungen auf dieser Seite ausser Kraft. Schalte diese Option nur ab, wenn Du 

WIRKLICH weisst, was Du tust!',
  'validating_group' => 'Bestätigungs-Gruppe',
  'validating_group_explanation' => 'Die ID der Gruppe Deines Forums für Benutzer, deren Konto noch überprüft werden muss 

(normalerweise sind die vorgeschlagenen Standard-Werte OK, wenn Du keine Sondereinstellungen in Deinem Forum vorgenommen 

hast)',
  'guest_group' => 'Gäste-Gruppe',
  'guest_group_explanation' => 'Die ID der Gruppe Deines Forums für Gäste / anonyme Benutzer (normalerweise sind die 

vorgeschlagenen Standard-Werte OK, wenn Du keine Sondereinstellungen in Deinem Forum vorgenommen hast)',
  'member_group' => 'Mitglieder-Gruppe',
  'member_group_explanation' => 'Die ID der Gruppe Deines Forums für normale (reguläre) Benutzer (normalerweise sind die 

vorgeschlagenen Standard-Werte OK, ändere den Wert nur, wenn Du wirklich weisst, was Du tust)',
  'admin_group' => 'Admin-Gruppe',
  'admin_group_explanation' => 'Die ID der Gruppe Deines Forums für Admins (normalerweise sind die vorgeschlagenen 

Standard-Werte OK, ändere den Wert nur, wenn Du wirklich weisst, was Du tust)',
  'banned_group' => 'Gebannte Gruppe',
  'banned_group_explanation' => 'Die ID der Gruppe Deines Forums für verbannte Benutzer (normalerweise sind die 

vorgeschlagenen Standard-Werte OK, ändere den Wert nur, wenn Du wirklich weisst, was Du tust)',
  'global_moderators_group' => 'Globale Moderatoren Gruppe',
  'global_moderators_group_explanation' => 'Die ID der Gruppe Deines Forums für globale Moderatoren (normalerweise sind die 

vorgeschlagenen Standard-Werte OK, ändere den Wert nur, wenn Du wirklich weisst, was Du tust)',
  'special_settings' => 'Forums-spezifische Einstellungen',
  'logout_flag' => 'phpBB Version (logout flag)',
  'logout_flag_explanation' => 'Welche Versions-Nummer hat Deine Forums-Software (diese Einstellung bestimmt, wie Logouts 

gehandhabt werden)',
  'use_post_based_groups' => 'Beitrags-basierte Gruppen verwenden?',
  'logout_flag_yes' => '2.0.5 oder besser',
  'logout_flag_no' => '2.0.4 oder schlechter',
  'use_post_based_groups_explanation' => 'Sollen die Beitrags-basierten Benutzergruppen berücksichtigt werden (ermöglicht 

eine feinere Rechte-Vergabe) oder nur die Standard-Gruppen (einfachere Administration, empfohlen). Du kannst diese 

Einstellung auch noch später ändern.',
  'use_post_based_groups_yes' => 'ja',
  'use_post_based_groups_no' => 'nein',
  'error_title' => 'Du musst die aufgetretenen Fehler erst korrigieren. Gehe zum vorherigen Schritt.',
  'error_specify_bbs' => 'Du musst angeben, welche Anwendung Du mit Coppermine &quot;bridgen&quot; willst.',
  'error_no_blank_name' => 'Der Name der benutzerdefinierten Bride-Datei darf nicht leer bleiben.',
  'error_no_special_chars' => 'Der Name der Bridge-Datei darf keine Sonderzeichen enthalten ausser Untertrich (_) und 

Bindestrich (-)!',
  'error_bridge_file_not_exist' => 'Die Bridge-datei %s existiert nicht auf dem Server. Überprüfe die Schreibweise und ob Du 

sie tatsächlich hochgeladen hast.',
  'finalize' => 'Forums-Integration aktivieren/deaktivieren',
  'finalize_explanation' => 'Bisher wurden Deine Einstellungen in die Datenbank geschrieben, aber die Forums-Integration 

(Bridging) wurde noch nicht aktiviert. Du kannst die Integration jederzeit später an- oder abschalten. Merke Dir auf jeden 

Fall den Benutzernamen und das Passwort Deines Admin-Kontos (Coppermine ohne Bridging), da Du es später evtl. brauchst, um 

die Einstellungen zu ändern. Wenn etwas schief läuft, gehe zu %s und deaktiviere das Bridging dort (verwende dazu Dein 

Coppermine-Admin-Konto, das Du beim Installieren von Coppermine benutzt hast).',
  'your_bridge_settings' => 'Deine Bridge-Einstellungen',
  'title_enable' => 'Aktiviere/De-Aktiviere Integration/Bridging mit %s',
  'bridge_enable_yes' => 'aktivieren',
  'bridge_enable_no' => 'de-aktivieren',
  'error_must_not_be_empty' => 'darf nicht leer sein',
  'error_either_be' => 'muss entweder %s oder %s sein',
  'error_folder_not_exist' => '%s existiert nicht. Korrigiere den Wert, den Du für %s eingegeben hast',
  'error_cookie_not_readible' => 'Coppermine kann den Cookie namens %s nicht lesen. Korrigiere den Wert, den Du für %s 

eingegeben hast, oder gehe zum Administrationsbereich Deines Forums und stelle dort sicher, dass der Cookie für Coppermine 

lesbar ist.',
  'error_mandatory_field_empty' => 'Das Feld %s darf nicht leer bleiben - gib den entsprechenden Wert ein.',
  'error_no_trailing_slash' => 'Im Feld %s darf kein abschließender Schrägstrich (Slash) vorhanden sein.',
  'error_trailing_slash' => 'Im Feld %s muss ein abschließender Schrägstrich (Slash) vorhanden sein.',
  'error_db_connect' => 'Konnte mit den eingegebenen Daten keine mySQL-Verbindung aufbauen. Hier ist die 

mySQL-Fehlermeldung:',
  'error_db_name' => 'Obwohl Coppermine eine Verbindung aufbauen konnte, wurde die datenbank %s nicht gefunden. Überprüfe 

Deine Einstellungen für %s. Hier ist die mySQL-Fehlermeldung:',
  'error_prefix_and_table' => '%s und ',
  'error_db_table' => 'Konnte die Tabelle %s nicht finden. Überprüfe Deine Einstellungen für %s.',
  'recovery_title' => 'Bridge-Assistent: Wiederherstellung im Notfall',
  'recovery_explanation' => 'Du musst Dich erst anmelden, falls Du hierher gekommen bist, um die Forums-Integration Deiner 

Coppermine-Galerie zu administrieren. Falls Du Dich nicht anmelden kannst, weil die Integration nicht wie erwartet 

funktioniert, dann kannst Du mit Hilfe dieser Seite die Integration (Bridging) deaktivieren. Die Eingabe von Benutzername und 

Passwort hier auf der Seite wird Dich nicht anmelden, sondern die Integration deaktivieren. Details dazu gibt es in der 

Doku.',
  'username' => 'Benutzername',
  'password' => 'Passwort',
  'disable_submit' => 'los!',
  'recovery_success_title' => 'Authorisierung erfolgreich',
  'recovery_success_content' => 'Du hast die Forums-Integration erfolgreich deaktiviert. Deine Coppermine-Galerie läuft jetzt 

im &quot;Standalone-Modus&quot; (ohne Integration/Bridging).',
  'recovery_success_advice_login' => 'Melde Dich als Admin an, um Deine Bridge-Einstellungen zu bearbeiten und/oder die 

Forums-Integration wieder zu aktivieren.',
  'goto_login' => 'Gehe zur Anmeldung',
  'goto_bridgemgr' => 'Gehe zum Bridge-Assistent',
  'recovery_failure_title' => 'Authorisierung fehlgeschlagen',
  'recovery_failure_content' => 'Du hast fehlerhafte Zugangsdaten eingegeben. Du musst die Zugangdaten des Admin-Kontos der 

&quot;Standalone-Version&quot; benutzen (normalerweise des Admin-Konto, das Du bei der Installation von Coppermine angelegt 

hast).',
  'try_again' => 'versuche es nochmal',
  'recovery_wait_title' => 'Wartezeit noch nicht um',
  'recovery_wait_content' => 'Aus Sicherheitsgründen erlaubt das Skript keine fehlgeschlagenen Anmeldeversuche in kurzer 

Reihenfolge - deshalb musst Du ein bißchen warten, bevor Du wieder einen Anmelde-Versuch unternehmen darfst.',
  'wait' => 'warte',
  'create_redir_file' => 'Umleitungs-Datei anlegen (empfohlen)',
  'create_redir_file_explanation' => 'Um Benutzer nach der Anmeldung im Forum wieder zu Coppermine umzuleiten brauchst Du 

eine Umleitungs-Datei in Deinem Forums-Verzeichnis. Wenn diese Option aktiviert ist wird der Bridge-Assistent versuchen, 

diese datei für Dich anzulegen, oder Dir den Code für das manuelle Anlegen der Datei per markieren und kopieren zu 

erzeugen.',
  'browse' => 'durchsuchen',
);

// ------------------------------------------------------------------------- //
// File calendar.php
// ------------------------------------------------------------------------- //

if (defined('CALENDAR_PHP')) $lang_calendar_php = array(
  'title' => 'Kalender',
  'close' => 'schliessen',
  'clear_date' => 'Datum löschen',
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
  'miss_param' => 'Fehlender Parameter für die Operation \'%s\'',
  'unknown_cat' => 'Gewählte Kategorie existiert nicht in Datenbank',
  'usergal_cat_ro' => 'Benutzer-Galerie kann nicht gelöscht werden!',
  'manage_cat' => 'Kategorien verwalten',
  'confirm_delete' => 'Willst Du diese Kategorie wirklich LÖSCHEN', //js-alert
  'category' => 'Kategorie',
  'operations' => 'Operationen',
  'move_into' => 'verschieben in',
  'update_create' => 'Kategorie erzeugen/ändern',
  'parent_cat' => 'Eltern-Kategorie',
  'cat_title' => 'Titel der Kategorie',
  'cat_thumb' => 'Kategorie-Thumbnail',
  'cat_desc' => 'Kategorie-Beschreibung',
  'categories_alpha_sort' => 'Kategorien alphabetisch sortieren (anstatt benutzerdefinierter Sortierreihenfolge)',
  'save_cfg' => 'Einstellungen speichern',
  'no_category' => '* Keine Kategorie *', // cpg1.5
);

// ------------------------------------------------------------------------- //
// File admin.php
// ------------------------------------------------------------------------- //

if (defined('ADMIN_PHP')) $lang_admin_php = array(
  'title' => 'Galerie-Einstellungen',
  'manage_exif' => 'Exif-Einstellungen verwalten',
  'manage_plugins' => 'Plugins verwalten',
  'manage_keyword' => 'Stichworte verwalten',
  'restore_cfg' => 'auf Werkseinstellungen zurücksetzen',
  'save_cfg' => 'Neue Einstellungen speichern',
  'notes' => 'Anmerkungen',
  'info' => 'Information',
  'upd_success' => 'Die Einstellungen von Coppermine wurden aktualisiert',
  'restore_success' => 'Coppermine Standard-Einstellungen wiederhergestellt',
  'name_a' => 'aufsteigend nach Name',
  'name_d' => 'absteigend nach Name',
  'title_a' => 'aufsteigend nach Titel',
  'title_d' => 'absteigend nach Titel',
  'date_a' => 'aufsteigend nach Datum',
  'date_d' => 'absteigend nach Datum',
  'th_any' => 'Maximalwert (entweder Höhe oder Breite)',
  'th_ht' => 'Höhe',
  'th_wd' => 'Breite',
  'th_ex' => 'Exakt', // thumb cropping
  'label' => 'Beschriftung',
  'item' => 'Eintrag',
  'debug_everyone' => 'alle',
  'debug_admin' => 'nur Admin',
  'no_logs'=> 'Aus',
  'log_normal'=> 'Normal',
  'log_all' => 'Alle',
  'view_logs' => 'Historie anzeigen',
  'click_expand' => 'Klicke auf die jeweilige Bezeichnung zum Ausklappen des Abschnitts',
  'expand_all' => 'Alle ausklappen',
  'notice1' => '(*) Diese Einstellungen dürfen nicht mehr verändert werden, wenn bereits Dateien in der Datenbank vorhanden sind.',
  'notice2' => '(**) Bei Änderung dieser Einstellung werden die geänderten Werte nur für Dateien herangezogen, die ab dem Zeitpunkt der Änderung hinzugefügt werden - daher ist es ratsam, hier nichts zu ändern, wenn bereits Bilder in der Galerie vorhanden sind. Die geänderten Einstellungen können jedoch auch auf ältere Dateien angewendet werden durch Verwendung der &quot;<a href="util.php">Admin-Werkzeuge</a> (Thumbnails und/oder Bilder in Zwischengrösse aktualisieren)&quot; aus dem Admin-Menü.',
  'notice3' => '(***) Alle Logs werden in Englisch geschrieben.',
  'bbs_disabled' => 'Funktion deaktiviert bei der Verwendung des Bridging',
  'auto_resize_everyone' => 'Alle (Benutzer+Admin)',
  'auto_resize_user' => 'Nur Benutzer',
  'ascending' => 'aufsteigend',
  'descending' => 'absteigend',
  'separate_page' => 'auf einer separaten Seite', // cpg1.5
  'inline' => 'inline', // cpg1.5
  'guests_only' => 'Nur Gäste', // cpg1.5
  'wm_bottomright' => 'Unten rechts', // cpg1.5
  'wm_bottomleft' => 'Unten links', // cpg1.5
  'wm_topleft' => 'Oben links', // cpg1.5
  'wm_topright' => 'Oben rechts', // cpg1.5
  'wm_center' => 'Mittig', // cpg1.5
  'wm_both' => 'Beide', // cpg1.5
  'wm_original' => 'Original', // cpg1.5
  'wm_resized' => 'Geänderte Grösse', // cpg1.5
);

if (defined('ADMIN_PHP')) $lang_admin_data = array(
  'Allgemeine Einstellungen',
  array('Galerie-Name', 'gallery_name', 0, 'f=configuration.htm&amp;as=admin_general_name&amp;ae=admin_general_name_end'),
  array('Galerie-Beschreibung', 'gallery_description', 0, 'f=configuration.htm&amp;as=admin_general_description&amp;ae=admin_general_description_end'),
  array('Galerie-Admin eMail', 'gallery_admin_email', 0, 'f=configuration.htm&amp;as=admin_general_email&amp;ae=admin_general_email_end'),
  array('URL Deines Coppermine-Galerie Verzeichnisses (no \'index.php\' or similar at the end)', 'ecards_more_pic_target', 0, 'f=configuration.htm&amp;as=admin_general_coppermine-url&amp;ae=admin_general_coppermine-url_end'),
  array('URL Deiner Homepage', 'home_target', 0, 'f=configuration.htm&amp;as=admin_general_home-url&amp;ae=admin_general_home-url_end'),
  array('ZIP-Download der Favoriten erlauben', 'enable_zipdownload', 1, 'f=configuration.htm&amp;as=admin_general_zip-download&amp;ae=admin_general_zip-download_end'),
  array('Zeitzonen-Differenz relative zur MEZ (aktuelle Zeit: ' . localised_date(-1, $comment_date_fmt) . ')','time_offset',0, 'f=configuration.htm&amp;as=admin_general_time-offset&amp;ae=admin_general_time-offset_end&amp;top=1'),
  array('Verschlüsselte Passwörter aktivieren (kann nicht rückgängig gemacht werden)','enable_encrypted_passwords',1, 'f=configuration.htm&amp;as=admin_general_encrypt_password_start&amp;ae=admin_general_encrypt_password_end&amp;top=1'),
  array('Hilfe-Icons aktivieren (Hilfe nur in Englisch verfügbar)','enable_help',9, 'f=configuration.htm&amp;as=admin_general_help&amp;ae=admin_general_help_end'),
  array('Anklickbare Stichwörter in Suche aktivieren','clickable_keyword_search',14,'f=configuration.htm&amp;as=admin_general_keywords_start&amp;ae=admin_general_keywords_end'),
  array('Plugins aktivieren', 'enable_plugins', 12, 'f=configuration.htm&amp;as=admin_general_enable-plugins&amp;ae=admin_general_enable-plugins_end'), 
  array('Verbannung von nicht-routebaren IP-Adressen aktivieren', 'ban_private_ip', 1, 'f=configuration.htm&amp;as=admin_general_private-ip&amp;ae=admin_general_private-ip_end'),
  array('Baumstruktur für Batch-hinzufügen aktivieren', 'browse_batch_add', 1, 'f=configuration.htm&amp;as=admin_general_browsable_batch_add&amp;ae=admin_general_browsable_batch_add_end'),

  'Sprach- &amp; Zeichensatz-Einstellungen',
  array('Sprache', 'lang', 5, 'f=configuration.htm&amp;as=admin_language_language&amp;ae=admin_language_language_end'),
  array('Auf Englisch zurückgreifen, wenn Deutsche Übersetzung nicht verfügbar?', 'language_fallback', 1, 'f=configuration.htm&amp;as=admin_language_fallback&amp;ae=admin_language_fallback_end'),
  array('Zeichensatz', 'charset', 4, 'f=configuration.htm&amp;as=admin_language_charset&amp;ae=admin_language_charset_end'),
  array('Sprachauswahl-Liste anzeigen', 'language_list', 1, 'f=configuration.htm&amp;as=admin_language_list&amp;ae=admin_language_list_end'),
  array('Sprachauswahl-Flaggen anzeigen', 'language_flags', 8, 'f=configuration.htm&amp;as=admin_language_flags&amp;ae=admin_language_flags_end&amp;top=1'),
  array('&quot;Standard&quot; in Sprachauswahl anzeigen', 'language_reset', 1, 'f=configuration.htm&amp;as=admin_language_reset&amp;ae=admin_language_reset_end&amp;top=1'),

  'Design-Einstellungen',
  array('Design', 'theme', 6, 'f=configuration.htm&amp;as=admin_theme_theme&amp;ae=admin_theme_theme_end'),
  array('Designauswahl-Liste anzeigen', 'theme_list', 1, 'f=configuration.htm&amp;as=admin_theme_theme_list&amp;ae=admin_theme_theme_list_end'),
  array('&quot;Standard&quot; in Designauswahl-Liste anzeigen', 'theme_reset', 1, 'f=configuration.htm&amp;as=admin_theme_theme_reset&amp;ae=admin_theme_theme_reset_end'),
  array('FAQ anzeigen', 'display_faq', 1, 'f=configuration.htm&amp;as=admin_theme_faq&amp;ae=admin_theme_faq_end'),
  array('Name eines benutzerdefinierten Menü-Eintrags', 'custom_lnk_name', 0,'f=configuration.htm&amp;as=admin_theme_custom_lnk_name&amp;ae=admin_theme_custom_lnk_name_end'),
  array('URL eines benutzerdefinierten Menü-Eintrags', 'custom_lnk_url', 0,'f=configuration.htm&amp;as=admin_language_custom_lnk_url&amp;ae=admin_language_custom_lnk_url_end'),
  array('bbcode-Hilfe anzeigen', 'show_bbcode_help', 1, 'f=configuration.htm&amp;as=admin_theme_bbcode&amp;ae=admin_theme_bbcode_end&amp;top=1'),
  array('Vanity Block in Designs anzeigen, die als XHTML und CSS konform definiert sind?','vanity_block',1, 'f=configuration.htm&amp;as=vanity_block&amp;ae=vanity_block_end'),
  array('Pfad zu benutzerdefiniertem header-include', 'custom_header_path', 0, 'f=configuration.htm&amp;as=admin_theme_include_path_start&amp;ae=admin_theme_include_path_end'),
  array('Pfad zu benutzerdefiniertem footer-include', 'custom_footer_path', 0, 'f=configuration.htm&amp;as=admin_theme_include_path_start&amp;ae=admin_theme_include_path_end'),

  'Ansicht Albenliste',
  array('Breite der Haupttabelle (in Pixel oder %)', 'main_table_width', 0, 'f=configuration.htm&amp;as=admin_album_table-width&amp;ae=admin_album_table-width_end'),
  array('Anzahl angezeigter Kategorie-Ebenen', 'subcat_level', 0, 'f=configuration.htm&amp;as=admin_album_category-levels&amp;ae=admin_album_category-levels_end'),
  array('Anzahl angezeigter Alben', 'albums_per_page', 0, 'f=configuration.htm&amp;as=admin_album_number&amp;ae=admin_album_number_end'),
  array('Anzahl Spalten in Album-Liste', 'album_list_cols', 0, 'f=configuration.htm&amp;as=admin_album_columns&amp;ae=admin_album_columns_end'),
  array('Thumbnail-Größe in Pixeln', 'alb_list_thumb_size', 0, 'f=configuration.htm&amp;as=admin_album_thumbnail-size&amp;ae=admin_album_thumbnail-size_end'),
  array('Inhalt der Hauptseite', 'main_page_layout', 0, 'f=configuration.htm&amp;as=admin_album_list_content&amp;ae=admin_album_list_content_end'),
  array('Erste Ebene der Thumbnails der Alben auch in Kategorien anzeigen','first_level',1, 'f=configuration.htm&amp;as=admin_album_first-level_thumbs&amp;ae=admin_album_first-level_thumbs_end'),
  array('Kategorien alphabetisch sortieren (anstatt benutzerdefinierter Sortierreihenfolge)','categories_alpha_sort',1, 'f=configuration.htm&amp;as=admin_album_list_alphasort_start&amp;ae=admin_album_list_alphasort_end'),
  array('Anzahl der verlinkten Dateien anzeigen','link_pic_count',1, 'f=configuration.htm&amp;as=admin_album_linked_files_start&amp;ae=admin_album_linked_files_end'),

  'Ansicht Thumbnail',
  array('Spaltenzahl auf Thumbnail-Seite', 'thumbcols', 0, 'f=configuration.htm&amp;as=admin_thumbnail_columns&amp;ae=admin_thumbnail_columns_end'),
  array('Zeilenzahl auf Thumbnail-Seite', 'thumbrows', 0, 'f=configuration.htm&amp;as=admin_thumbnail_rows&amp;ae=admin_thumbnail_rows_end'),
  array('Anzahl maximal angezeigter Tabs', 'max_tabs', 10, 'f=configuration.htm&amp;as=admin_thumbnail_tabs&amp;ae=admin_thumbnail_tabs_end'),
  array('Datei-Beschriftung anzeigen (zusätzlich zum Datei-Titel) unterhalb der Thumbnails', 'caption_in_thumbview', 1, 'f=configuration.htm&amp;as=admin_thumbnail_display_caption&amp;ae=admin_thumbnail_display_caption_end'),
  array('Bewertung unterhalb des Thumbnails anzeigen', 'display_thumbnail_rating', 1, 'f=configuration.htm&amp;as=admin_thumbnail_display_rating&amp;ae=admin_thumbnail_display_rating_end'), //cpg1.5
  array('Anzahl der Treffer unterhalb des Thumbnails anzeigen', 'views_in_thumbview', 1, 'f=configuration.htm&amp;as=admin_thumbnail_display_views&amp;ae=admin_thumbnail_display_views_end'),
  array('Direkt vom Thumbnail zum Vollbild gehen', 'thumbnail_to_fullsize', 1, 'f=configuration.htm&amp;as=admin_thumbnail_to_fullsize&amp;ae=admin_thumbnail_to_fullsize_end'),
  array('Anzahl der Kommentare unterhalb des Thumbnails anzeigen', 'display_comment_count', 1, 'f=configuration.htm&amp;as=admin_thumbnail_display_comments&amp;ae=admin_thumbnail_display_comments_end'),
  array('Name des Uploaders unterhalb des Thumbnails anzeigen', 'display_uploader', 1, 'f=configuration.htm&amp;as=admin_thumbnail_display_uploader&amp;ae=admin_thumbnail_display_uploader_end'),
  //array('Name von administrativen Uploadern unterhalb des Thumbnails anzeigen', 'display_admin_uploader', 1, 'f=configuration.htm&amp;as=admin_thumbnail_display_admin_uploader&amp;ae=admin_thumbnail_display_admin_uploader_end'),
  array('Dateiname unterhalb des Thumbnails anzeigen', 'display_filename', 1, 'f=configuration.htm&amp;as=admin_thumbnail_display_filename&amp;ae=admin_thumbnail_display_filename_end'),
  array('Alben-Beschreibung anzeigen', 'alb_desc_thumb', 1, 'f=configuration.htm&amp;as=admin_thumbnail_display_description&amp;ae=admin_thumbnail_display_description_end'),
  array('Standard-Sortierung für Dateien', 'default_sort_order', 3, 'f=configuration.htm&amp;as=admin_thumbnail_default_sortorder&amp;ae=admin_thumbnail_default_sortorder_end'),
  array('Mindestmenge Stimmen, die eine Datei benötigt, um in der \'am besten bewertet\'-Liste zu erscheinen', 'min_votes_for_rating', 0, 'f=configuration.htm&amp;as=admin_thumbnail_minimum_votes&amp;ae=admin_thumbnail_minimum_votes_end'), 
  array('Treffer in Diashow zählen', 'slideshow_hits', 1, 'f=configuration.htm&amp;as=admin_image_slideshow_hits&amp;ae=admin_image_slideshow_hits_end'),
  array('Flash in Ecards anzeigen (nicht empfohlen)', 'ecard_flash', 1, 'f=configuration.htm&amp;as=admin_image_ecard_flash_start&amp;ae=admin_image_ecard_flash_end'), // cpg1.5.x


  'Ansicht Bild',
  array('Tabellenbreite für Bildanzeige (in Pixel oder %)', 'picture_table_width', 0, 'f=configuration.htm&amp;as=admin_image_comment_table-width&amp;ae=admin_image_comment_table-width_end'),
  array('Datei-Informationen sind standardmäßig sichtbar', 'display_pic_info', 1, 'f=configuration.htm&amp;as=admin_image_comment_info_visible&amp;ae=admin_image_comment_info_visible_end'),
  array('Download-Link für Filme in Datei-Info Bereich anzeigen', 'picinfo_movie_download_link', 1),
  array('Maximallänge für Dateibeschreibung', 'max_img_desc_length', 0, 'f=configuration.htm&amp;as=admin_image_comment_descr_length&amp;ae=admin_image_comment_descr_length_end'),
  array('Maximale Anzahl von Buchstaben in einem Wort', 'max_com_wlength', 0, 'f=configuration.htm&amp;as=admin_image_comment_chars_per_word&amp;ae=admin_image_comment_chars_per_word_end'),
  array('Film-Streifen anzeigen', 'display_film_strip', 1, 'f=configuration.htm&amp;as=admin_image_comment_filmstrip_toggle&amp;ae=admin_image_comment_filmstrip_toggle_end'),
  array('Dateinamen unter Filmstreifen-Thumbnails anzeigen', 'display_film_strip_filename', 1, 'f=configuration.htm&amp;as=admin_image_comment_display_film_strip_filename&amp;ae=admin_image_comment_display_film_strip_filename_end'),
  array('Anzahl Elemente in Film-Streifen', 'max_film_strip_items', 0, 'f=configuration.htm&amp;as=admin_image_comment_filmstrip_number&amp;ae=admin_image_comment_filmstrip_number_end'),
  array('Diashow-Intervall in Millisekunden (1 Sekunde = 1000 Millisekunden)', 'slideshow_interval', 0, 'f=configuration.htm&amp;as=admin_image_comment_slideshow_interval&amp;ae=admin_image_comment_slideshow_interval_end'),

  'Einstellungen Kommentare',
  array('Schimpfwörter in Kommentaren zensieren', 'filter_bad_words', 1, 'f=configuration.htm&amp;as=admin_image_comment_bad_words&amp;ae=admin_image_comment_bad_words_end'),
  array('Smilies in Kommentaren erlauben', 'enable_smilies', 1, 'f=configuration.htm&amp;as=admin_image_comment_smilies&amp;ae=admin_image_comment_smilies_end'),
  array('Aufeinanderfolgende Kommentare eines Benutzers zu einer Datei zulassen (Überflutungs-Schutz abschalten)', 'disable_comment_flood_protect', 1, 'f=configuration.htm&amp;as=admin_image_comment_flood&amp;ae=admin_image_comment_flood_end'), 
  array('Maximale Zeilenzahl eines Kommentars', 'max_com_lines', 0, 'f=configuration.htm&amp;as=admin_image_comment_lines&amp;ae=admin_image_comment_lines_end'),
  array('Maximale Länge eines Kommentars', 'max_com_size', 0, 'f=configuration.htm&amp;as=admin_image_comment_length&amp;ae=admin_image_comment_length_end'),
  array('Admin über abgegebene Kommentare per eMail benachrichtigen', 'email_comment_notification', 1, 'f=configuration.htm&amp;as=admin_image_comment_admin_notify&amp;ae=admin_image_comment_admin_notify_end'),
  array('Sortierreihenfolge von Kommentaren', 'comments_sort_descending', 17, 'f=configuration.htm&amp;as=admin_comment_sort_start&amp;ae=admin_comment_sort_end'),
  array('Vorsilbe für anonyme Kommentatoren', 'comments_anon_pfx', 0, 'f=configuration.htm&amp;as=comments_anon_pfx&amp;ae=comments_anon_pfx_end'),
  array('Kommentare benötigen Bestätigung durch Admin', 'comment_approval', 19, 'f=configuration.htm&amp;as=admin_comment_approval&amp;ae=admin_comment_approval_end'), // cpg1.5.x
  array('Nur Kommentare anzeigen, die vom Admin genehmigt werden müssen auf der Seite &quot;Kommentare anzeigen&quot;', 'display_comment_approval_only', 1, 'f=configuration.htm&amp;as=admin_comment_display_comment_approval_only_start&amp;ae=admin_comment_display_comment_approval_only_end'), // cpg1.5.x
  array('Benutzern Platzhalter-Text für Kommentare anzeigen, die noch genehmigt werden müssen', 'comment_placeholder', 1, 'f=configuration.htm&amp;as=admin_comment_display_placeholder_start&amp;ae=admin_comment_display_placeholder_end'), // cpg1.5.x
  array('Benutzer dürfen ihre Kommentare bearbeiten', 'comment_user_edit', 1, 'f=configuration.htm&amp;as=admin_comment_user_edit_start&amp;ae=admin_comment_user_edit_end'), // cpg1.5.x
  array('Captcha (Visuelle Bestätigung) für Kommentar-Abgabe notwendig', 'comment_captcha', 19, 'f=configuration.htm&amp;as=admin_comment_captcha_start&amp;ae=admin_comment_captcha_end'), // cpg1.5.x


  'Thumbnail Einstellungen', // cpg1.5.x
  array('Maximalgröße Thumbnail<a href="#notice2" class="clickable_option">**</a>', 'thumb_width', 0, 'f=configuration.htm&amp;as=admin_picture_thumbnail_max-dimension&amp;ae=admin_picture_thumbnail_max-dimension_end'),
  array('Welche Dimension soll genutzt werden für Thumbnails ( Breite oder Höhe oder das, was jeweils größer ist, oder Exakte Grösse)<a href="#notice1" class="clickable_option">**</a>', 'thumb_use', 7, 'f=configuration.htm&amp;as=admin_picture_thumbnail_use-dimension&amp;ae=admin_picture_thumbnail_use-dimension_end'),
  array('Höhe des Thumbnails (trifft nur zu, wenn als Dimension &quot;exakt&quot; gewählt wurde)', 'thumb_height', 0), // cpg1.5.x
  array('Benutzerdefinierte Thumbnails aktivieren (Film, Audio, Dokument)', 'enable_custom_thumbs', 1), // cpg1.5
  array('Vorsilbe für Thumbnails <a href="#notice1" class="clickable_option">*</a>', 'thumb_pfx', 0, 'f=configuration.htm&amp;as=admin_picture_thumb_advanced_thumbs_prefix&amp;ae=admin_picture_thumb_advanced_thumbs_prefix_end'),
  array('Thumbnail-Schärfung: Unschärfe-Maske aktivieren', 'enable_unsharp', 1), // cpg1.5
  array('Thumbnail-Schärfung Stärke', 'unsharp_amount', 0), // cpg1.5
  array('Thumbnail-Schärfung Radius', 'unsharp_radius', 0), // cpg1.5
  array('Thumbnail-Schärfung Schwellwert', 'unsharp_threshold', 0), // cpg1.5

  'Bild/Datei-Einstellungen',
  array('Qualität für JPEG-Dateien', 'jpeg_qual', 0, 'f=configuration.htm&amp;as=admin_picture_thumbnail_jpeg_quality&amp;ae=admin_picture_thumbnail_jpeg_quality_end'),
  array('Bilder in Zwischengröße erzeugen','make_intermediate',1, 'f=configuration.htm&amp;as=admin_picture_thumbnail_intermediate_toggle&amp;ae=admin_picture_thumbnail_intermediate_toggle_end'), 
  array('Maximale Breite oder Höhe von Bildern/Videos in Zwischengröße <a href="#notice2" class="clickable_option">**</a>', 'picture_width', 0, 'f=configuration.htm&amp;as=admin_picture_thumbnail_intermediate_dimension&amp;ae=admin_picture_thumbnail_intermediate_dimension_end'),
  array('Maximalgröße für das Hochladen von Dateien (kB)', 'max_upl_size', 0, 'f=configuration.htm&amp;as=admin_picture_thumbnail_max_upload_size&amp;ae=admin_picture_thumbnail_max_upload_size_end'),
  array('Maximale Breite oder Höhe für das Hochladen von Bildern/Videos (in Pixel)', 'max_upl_width_height', 0, 'f=configuration.htm&amp;as=admin_picture_thumbnail_max_upload_dimension&amp;ae=admin_picture_thumbnail_max_upload_dimension_end'), 
  array('Automatische verkleinerung von Bildern, die die Maximalgröße überschreiten', 'auto_resize', 16, 'f=configuration.htm&amp;as=admin_picture_thumbnail_auto-resize&amp;ae=admin_picture_thumbnail_auto-resize_end'),
  array('Horizontaler Innenabstand für Vollbild-PopUp', 'fullsize_padding_x', 0, 'f=configuration.htm&amp;as=admin_picture_thumbnail_fullsize_padding_x&amp;ae=admin_picture_thumbnail_fullsize_padding_x_end'),
  array('Vertikaler Innenabstand für Vollbild-PopUp', 'fullsize_padding_y', 0, 'f=configuration.htm&amp;as=admin_picture_thumbnail_fullsize_padding_y&amp;ae=admin_picture_thumbnail_fullsize_padding_y_end'),
  array('Alben können nicht-öffentlich sein (Anmerkung: beim Umschalten von \'ja\' auf \'nein\' werden <i>alle</i> nicht-öffentlichen Alben öffentlich)', 'allow_private_albums', 1, 'f=configuration.htm&amp;as=admin_picture_thumb_advanced_private_toggle&amp;ae=admin_picture_thumb_advanced_private_toggle_end'), 
  array('Icons für Persönliche Alben nicht-eingeloggten Benutzern anzeigen?','show_private',1, 'f=configuration.htm&amp;as=admin_picture_thumb_advanced_private_icon_show&amp;ae=admin_picture_thumb_advanced_private_icon_show_end'),
  array('Nicht erlaubte Zeichen in Dateinamen', 'forbiden_fname_char',0, 'f=configuration.htm&amp;as=admin_picture_thumb_advanced_filename_forbidden_chars&amp;ae=admin_picture_thumb_advanced_filename_forbidden_chars_end'),
  array('Aktiviere &quot;silly safe mode&quot; (Umgehung von falsch implemetierten Safe-Mode Einstellungen des Webhosts)', 'silly_safe_mode',1, 'f=configuration.htm&amp;as=admin_picture_thumb_advanced_silly_safe_mode_start&amp;ae=admin_picture_thumb_advanced_silly_safe_mode_end'),
  //array('erlaubte Datei-Erweiterungen für das Hochladen von Bildern', 'allowed_file_extensions',0, 'f=configuration.htm&amp;as=&amp;ae=_end'),
  array('Zugelassene Bild-Dateitypen', 'allowed_img_types',0, 'f=configuration.htm&amp;as=admin_picture_thumb_advanced_pic_extensions&amp;ae=admin_picture_thumb_advanced_pic_extensions_end'), 
  array('Zugelassene Video-Dateitypen', 'allowed_mov_types',0, 'f=configuration.htm&amp;as=admin_thumbs_advanced_movie&amp;ae=admin_thumbs_advanced_movie_end'),
  array('Autostart für Filme', 'media_autostart',1, 'f=configuration.htm&amp;as=admin_movie_autoplay&amp;ae=admin_movie_autoplay_end'),
  array('Zugelassene Audio-Dateitypen', 'allowed_snd_types',0, 'f=configuration.htm&amp;as=admin_picture_thumb_advanced_audio_extensions&amp;ae=admin_picture_thumb_advanced_audio_extensions_end'), 
  array('Zugelassene Dokument-Dateitypen', 'allowed_doc_types',0, 'f=configuration.htm&amp;as=admin_picture_thumb_advanced_doc_extensions&amp;ae=admin_picture_thumb_advanced_doc_extensions_end'), 
  array('Methode zur Größenänderung von Bildern','thumb_method',2, 'f=configuration.htm&amp;as=admin_picture_thumb_advanced_resize_method&amp;ae=admin_picture_thumb_advanced_resize_method_end'), 
  array('Pfad zur \'convert\'-Anwendung von ImageMagick (z.B. /usr/bin/X11/)', 'impath', 0, 'f=configuration.htm&amp;as=admin_picture_thumb_advanced_im_path&amp;ae=admin_picture_thumb_advanced_im_path_end'),
  //array('Erlaubte Datei-Typen (nur gültig für ImageMagick)', 'allowed_img_types',0, 'f=configuration.htm&amp;as=admin_picture_thumb_advanced_allowed_imagetypes&amp;ae=admin_picture_thumb_advanced_allowed_imagetypes_end'),
  array('Kommandozeilen-Parameter für ImageMagick', 'im_options', 0, 'f=configuration.htm&amp;as=admin_picture_thumb_advanced_im_commandline&amp;ae=admin_picture_thumb_advanced_im_commandline_end'), 
  array('EXIF-Daten in JPEG-Dateien lesen', 'read_exif_data', 13, 'f=configuration.htm&amp;as=admin_picture_thumb_advanced_exif&amp;ae=admin_picture_thumb_advanced_exif_end'),
  array('IPTC-Daten in JPEG-Dateien lesen', 'read_iptc_data', 1, 'f=configuration.htm&amp;as=admin_picture_thumb_advanced_iptc&amp;ae=admin_picture_thumb_advanced_iptc_end'),
  array('Alben-Verzeichnis <a href="#notice1" class="clickable_option">*</a>', 'fullpath', 0, 'f=configuration.htm&amp;as=admin_picture_thumb_advanced_albums_dir&amp;ae=admin_picture_thumb_advanced_albums_dir_end'),
  array('Verzeichnis für Benutzer-Dateien <a href="#notice1" class="clickable_option">*</a>', 'userpics', 0, 'f=configuration.htm&amp;as=admin_picture_thumb_advanced_userpics_dir&amp;ae=admin_picture_thumb_advanced_userpics_dir_end'), 
  array('Vorsilbe für Bilder in Zwischengröße <a href="#notice1" class="clickable_option">*</a>', 'normal_pfx', 0, 'f=configuration.htm&amp;as=admin_picture_thumb_advanced_intermediate_prefix&amp;ae=admin_picture_thumb_advanced_intermediate_prefix_end'),
  array('Standard-Modus für Verzeichnisse', 'default_dir_mode', 0, 'f=configuration.htm&amp;as=admin_picture_thumb_advanced_chmod_folder&amp;ae=admin_picture_thumb_advanced_chmod_folder_end'), 
  array('Standard-Modus für Dateien', 'default_file_mode', 0, 'f=configuration.htm&amp;as=admin_picture_thumb_advanced_chmod_files&amp;ae=admin_picture_thumb_advanced_chmod_files_end'),

  'Wasserzeichen auf Bildern', // cpg1.5
  array('Wasserzeichen aktivieren', 'enable_watermark', 1), // cpg1.5
  array('Auf benutzerdefinierte Thumbnails (Film, Audio, Dokument) anwenden', 'enable_thumb_watermark', 1), // cpg1.5
  array('Position', 'where_put_watermark', 20), // cpg1.5
  array('Wasserzeichen anwenden auf', 'which_files_to_watermark', 21), // cpg1.5
  array('Datei zur Verwendung als Wasserzeichen', 'watermark_file', 0), // cpg1.5
  array('Transparenz (0-100) des Gesamtbildes', 'watermark_transparency', 0), // cpg1.5
  array('Wasserzeichen verkleinern, wenn Breite eines Bildes kleiner als der eingegebene Wert ist. Dies stellt den Referenzpunkt für 100% dar die Verkleinerung des Wasserzeichens erfolgt linear. (0 zum deaktivieren)', 'reduce_watermark', 0), // cpg1.5
  array('X-Koordinate der transparenten Farbe (nur GD2)', 'watermark_transparency_featherx', 0), // cpg1.5
  array('Y-Koordinate der transparenten Farbe (nur GD2)', 'watermark_transparency_feathery', 0), // cpg1.5

  'Registrierung', // cpg1.5.x
  array('Registrierung von Benutzern zulassen', 'allow_user_registration', 1, 'f=configuration.htm&amp;as=admin_allow_registration&amp;ae=admin_allow_registration_end'),
  array('Globales Passwort für Registrierung', 'global_registration_pw', 0, 'f=configuration.htm&amp;as=admin_global_registration_pw&amp;ae=admin_global_registration_pw_end'),
  array('Disclaimer (Rechtsbelehrung) bei Registrierung anzeigen', 'user_registration_disclaimer', 18, 'f=configuration.htm&amp;as=admin_user_registration_disclaimer&amp;ae=admin_user_registration_disclaimer_end'), // cpg1.5
  array('Captcha (Visuelle Bestätigung) auf Registrierungs-Seite anzeigen', 'registration_captcha', 1, 'f=configuration.htm&amp;as=admin_registration_captcha_start&amp;ae=admin_registration_captcha_end'), // cpg1.5.x
  array('Registrierung von Benutzern erfordert Überprüfung per eMail', 'reg_requires_valid_email', 1, 'f=configuration.htm&amp;as=admin_registration_verify&amp;ae=admin_registration_verify_end'),
  array('Admin über neu-registrierten Benutzer per eMail benachrichtigen', 'reg_notify_admin_email', 1, 'f=configuration.htm&amp;as=admin_registration_notify&amp;ae=admin_registration_notify_end'),
  array('Admin muss Registrierungen aktivieren', 'admin_activation', 1, 'f=configuration.htm&amp;as=admin_activation&amp;ae=admin_activation_end'), 
  array('Erezuge ein Benutzer-Album in persönlicher Galerie während Registrierung', 'personal_album_on_registration', 1, 'f=configuration.htm&amp;as=admin_personal_album_on_registration&amp;ae=admin_personal_album_on_registration_end'), // cpg1.5.x

  'Benutzer-Einstellungen', // cpg1.5.x
  array('Nicht-angemeldeten Besuchern (Gäste) Zugriff erlauben', 'allow_unlogged_access', 1, 'f=configuration.htm&amp;as=admin_allow_unlogged_access&amp;ae=admin_allow_unlogged_access_end'),
  array('Zulassen, dass mehrere Benutzer die gleiche eMail-Adresse haben', 'allow_duplicate_emails_addr', 1, 'f=configuration.htm&amp;as=admin_allow_duplicate_emails_addr&amp;ae=admin_allow_duplicate_emails_addr_end'),
  array('Admin über genehmigungspflichtige Benutzer-Uploads per eMail benachrichtigen', 'upl_notify_admin_email', 1, 'f=configuration.htm&amp;as=admin_approval_notify&amp;ae=admin_approval_notify_end'),
  array('Angemeldeten Benutzern Benutzerliste anzeigen', 'allow_memberlist', 1, 'f=configuration.htm&amp;as=admin_user_memberlist&amp;ae=admin_user_memberlist_end'),
  array('Benutzern erlauben, Ihre eMail-Adresse im Profil zu ändern', 'allow_email_change', 1, 'f=configuration.htm&amp;as=admin_user_allow_email_change&amp;ae=admin_user_allow_email_change_end'),
  array('Benutzern erlauben, Ihr eigenes Konto zu löschen', 'allow_user_account_delete', 1, 'f=configuration.htm&amp;as=admin_user_allow_account_delete&amp;ae=admin_user_allow_account_delete_end'), // cpg1.5.x
  array('Benutzern bleiben Eigentümer von Bildern, die sie in öffentliche Alben hochgeladen haben (sie können diese dann ändern, beschriften und löschen', 'users_can_edit_pics', 1, 'f=configuration.htm&amp;as=admin_user_editpics_public_start&amp;ae=admin_user_editpics_public_end'),
  array('Anzahl fehlgeschlagener Anmeldeversuche bis zur zeitweiligen Sperrung (zur Vermeidung von Brute-Force Angriffen)', 'login_threshold', 0, 'f=configuration.htm&amp;as=admin_user_login_start&amp;ae=admin_user_login_end'),
  array('Dauer einer zeitweilligen Sperrung nach fehlgeschlagenen Anmeldungen', 'login_expiry', 0, 'f=configuration.htm&amp;as=admin_user_login_start&amp;ae=admin_user_login_end'),
  array('&quot;Beim Administrator melden&quot; aktivieren', 'report_post', 1, 'f=configuration.htm&amp;as=admin_user_enable_report&amp;ae=admin_user_enable_report_end'), 

// custom profile fields, 
  'Benutzerdefinierte Felder für Benutzerprofile (leer lassen, falls ungenutzt). Benutze Profilfeld 6 für Langeinträge (wie Biographien).',
  array('Bezeichnung Profilfeld 1', 'user_profile1_name', 0, 'f=configuration.htm&amp;as=admin_custom&amp;ae=admin_custom_end'), 
  array('Bezeichnung Profilfeld 2', 'user_profile2_name', 0),
  array('Bezeichnung Profilfeld 3', 'user_profile3_name', 0),
  array('Bezeichnung Profilfeld 4', 'user_profile4_name', 0),
  array('Bezeichnung Profilfeld 5', 'user_profile5_name', 0),
  array('Bezeichnung Profilfeld 6', 'user_profile6_name', 0),

  'Benutzerdefinierte Felder für zusätzliche Dateiinformationen (leer lassen, falls nicht benötigt)',
  array('Bezeichnung Feld 1', 'user_field1_name', 0, 'f=configuration.htm&amp;as=admin_custom_image&amp;ae=admin_custom_image_end'), 
  array('Bezeichnung Feld 2', 'user_field2_name', 0),
  array('Bezeichnung Feld 3', 'user_field3_name', 0),
  array('Bezeichnung Feld 4', 'user_field4_name', 0),

  'Cookies-Einstellungen',
  array('Cookie-Name', 'cookie_name', 0, 'f=configuration.htm&amp;as=admin_cookie_name&amp;ae=admin_cookie_name_end'),
  array('Cookie-Pfad', 'cookie_path', 0, 'f=configuration.htm&amp;as=admin_cookie_path&amp;ae=admin_cookie_path_end'),

  'Email-Einstellungen  (normalerweise muss hier nichts eingestellt werden; lasse im Zweifelsfall alle Felder leer )', 
  array('SMTP-Hostname (wenn leer wird sendmail benutzt)', 'smtp_host', 0, 'f=configuration.htm&amp;as=admin_email&amp;ae=admin_email_end'),
  array('SMTP-Benutzername', 'smtp_username', 0),
  array('SMTP-Passwort', 'smtp_password', 0),

  'Logging und Statistiken',
  array('Logging-Modus <a href="#notice3" class="clickable_option">***</a>', 'log_mode', 11, 'f=configuration.htm&amp;as=admin_logging_log_mode&amp;ae=admin_logging_log_mode_end'),
  array('eCards aufzeichnen (Logging)<br />(Anmerkung: das Aufzeichnen von Benutzer-Daten kann Datenschutz-rechtliche Konsequenzen haben. Der Benutzer sollte über die Tatsache, dass die eCards gelogged werden, informiert werden und sein Einverständnis gegeben haben, z.B. bei der Registrierung. Details, wie eine Datenschutz-Policy, die den Schutz der Privatsphäre regelt, sollten separat auf der Seite verfügbar sein.)', 'log_ecards', 1, 'f=configuration.htm&amp;as=admin_general_log_ecards&amp;ae=admin_general_log_ecards_end'),
  array('Detailierte Abstimmungs-Statistiken aufzeichnen','vote_details',1, 'f=configuration.htm&amp;as=admin_logging_votedetails&amp;ae=admin_logging_votedetails_end'),
  array('Detailierte Treffer-Statistiken aufzeichnen (Besucherzähler)','hit_details',1, 'f=configuration.htm&amp;as=admin_logging_hitdetails&amp;ae=admin_logging_hitdetails_end'),
  array('Statistiken auf index-Seite anzeigen','display_stats_on_index',1, 'f=configuration.htm&amp;as=admin_logging_display_stats_on_index&amp;ae=admin_logging_display_stats_on_index_end'), // cpg1.5.x

  'Wartungs-Einstellungen',
  array('Debug-Modus ein', 'debug_mode', 9, 'f=configuration.htm&amp;as=debug_mode&amp;ae=debug_mode_end'),
  array('PHP-notices in Debug-Modus anzeigen (empfohlen: aus)', 'debug_notice', 1, 'f=configuration.htm&amp;as=admin_misc_debug_notices&amp;ae=admin_misc_debug_notices_end'),
  array('Galerie ist im Wartungsmodus', 'offline', 1, 'f=configuration.htm&amp;as=admin_general_offline&amp;ae=admin_general_offline_end'),
);


// ------------------------------------------------------------------------- //
// File db_ecard.php
// ------------------------------------------------------------------------- //

if (defined('DB_ECARD_PHP')) $lang_db_ecard_php = array(
  'title' => 'Versendete eCards',
  'ecard_sender' => 'Absender',
  'ecard_recipient' => 'Empfänger',
  'ecard_date' => 'Datum',
  'ecard_display' => 'eCard anzeigen',
  'ecard_name' => 'Name',
  'ecard_email' => 'eMail',
  'ecard_ip' => 'IP',
  'ecard_ascending' => 'aufsteigend',
  'ecard_descending' => 'absteigend',
  'ecard_sorted' => 'Sortiert',
  'ecard_by_date' => 'nach Datum',
  'ecard_by_sender_name' => 'nach Absender-Name',
  'ecard_by_sender_email' => 'nach eMail-Adresse des Absenders',
  'ecard_by_sender_ip' => 'nach IP-Adresse des Absenders',
  'ecard_by_recipient_name' => 'nach Empfänger-Name',
  'ecard_by_recipient_email' => 'nach eMail-Adresse des Empfängers',
  'ecard_number' => 'zeige Eintrag %s bis %s von %s',
  'ecard_goto_page' => 'gehe zu Seite',
  'ecard_records_per_page' => 'Einträge pro Seite',
  'check_all' => 'alle markieren',
  'uncheck_all' => 'alle Markierungen entfernen',
  'ecards_delete_selected' => 'Gewählte eCard-Einträge löschen',
  'ecards_delete_confirm' => 'Alle Einträge löschen? Entsprechendes Feld ankreuzen!',
  'ecards_delete_sure' => 'wirklich löschen',
);


// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
  'empty_name_or_com' => 'Du musst Deinen Namen und einen Kommentar eingeben',
  'com_added' => 'Dein Kommentar wurde hinzugefügt',
  'alb_need_title' => 'Du musst einen Titel für das Album eingeben!',
  'no_udp_needed' => 'Keine Aktualisierung notwendig.',
  'alb_updated' => 'Das Album wurde aktualisiert',
  'unknown_album' => 'Das gewählte Album existiert nicht oder Du hast keine Berechtigung, Dateien in dieses Album hochzuladen',
  'no_pic_uploaded' => 'Es wurde keine Datei hochgeladen!<br /><br />Wenn Du tatsächlich eine Datei zum Hochladen selektiert hast, überprüfe, ob Dein Server das Hochladen von Dateien zulässt...',
  'err_mkdir' => 'Verzeichnis %s konnte nicht angelegt werden!',
  'dest_dir_ro' => 'In das Zielverzeichnis %s kann vom Skript nicht geschrieben werden!',
  'err_move' => '%s kann nicht nach %s verschoben werden!',
  'err_fsize_too_large' => 'Die Datei, die Du hochgeladen hast, ist zu groß (maximal zulässig ist %s x %s) !', //obsolete since cpg1.3 - consider removal in cpg1.4 once upload.php has been overhauled
  'err_imgsize_too_large' => 'Die Datei, die Du hochgeladen hast, ist zu groß (maximal zulässig ist %s kB) !', //obsolete since cpg1.3 - consider removal in cpg1.4 once upload.php has been overhauled
  'err_invalid_img' => 'Die Datei, die Du hochgeladen hast, ist kein gültiger Bildtyp!',
  'allowed_img_types' => 'Du kannst nur %s Bilder hochladen.',
  'err_insert_pic' => 'Das Bild \'%s\' kann nicht in das Album eingefügt werden ',
  'upload_success' => 'Deine Datei wurde erfolgreich hochgeladen.<br /><br />Sie wird nach der Bestätigung durch den Admin sichtbar sein.',
  'notify_admin_email_subject' => '%s - Upload-Benachrichtigung',
  'notify_admin_email_body' => '%s hat eine Datei hochgeladen, die bestätigt werden muss. Gehe zu %s',
  'info' => 'Information',
  'com_added' => 'Kommentar hinzugefügt',
  'alb_updated' => 'Album aktualisiert',
  'err_comment_empty' => 'Dein Kommentar enthält keine Zeichen!',
  'err_invalid_fext' => 'Nur Dateien mit den folgenden Erweiterungen sind zulässig: <br /><br />%s.',
  'no_flood' => 'Leider bist Du schon der Autor des letzten Kommentars zu dieser Datei<br /><br />Bearbeite Deinen bestehenden Kommentar, wenn Du ihn verändern willst',
  'redirect_msg' => 'Du wirst weitergeleitet.<br /><br /><br />Klicke \'weiter\', falls sich die Seite nicht automatisch aktualisiert',
  'upl_success' => 'Deine Datei wurde erfolgreich hinzugefügt',
  'email_comment_subject' => 'In der Coppermine Photo Gallery wurde ein Kommentar abgegeben',
  'email_comment_body' => 'Jemand hat einen Kommentar in Deiner Galerie abgegeben. Um den Kommentar anzusehen, klicke hier:',
  'album_not_selected' => 'Kein Album ausgewählt',
  'com_author_error' => 'Ein registrierter Benutzer verwendet diesen Namen bereits, melde Dich an oder verwende einen anderen Namen.',
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
  'orig_pic' => 'Original-Bild', // cpg1.5
  'fs_pic' => 'Bild in Originalgröße',
  'del_success' => 'erfolgreich gelöscht',
  'ns_pic' => 'normal-großes Bild',
  'err_del' => 'kann nicht gelöscht werden',
  'thumb_pic' => 'Thumbnail',
  'comment' => 'Kommentar',
  'im_in_alb' => 'Bild in Album',
  'alb_del_success' => 'Album &laquo;%s&raquo; gelöscht',
  'alb_mgr' => 'Alben-Manager',
  'err_invalid_data' => 'Ungültige Daten empfangen in \'%s\'',
  'create_alb' => 'Erzeuge Album \'%s\'',
  'update_alb' => 'Aktualisiere Album \'%s\' mit Titel \'%s\' und Index \'%s\'',
  'del_pic' => 'Datei löschen',
  'del_alb' => 'Album löschen',
  'del_user' => 'Benutzer löschen',
  'err_unknown_user' => 'Der gewählte Benutzer ist nicht vorhanden!',
  'err_empty_groups' => 'Gruppen-Tabelle ist leer oder existiert nicht!',
  'comment_deleted' => 'Kommentar wurde gelöscht',
  'npic' => 'Bild',
  'pic_mgr' => 'Bilder-Manager',
  'update_pic' => 'Aktualisiere Bild \'%s\' mit Dateiname \'%s\' und Index \'%s\'',
  'username' => 'Benutzername',
  'anonymized_comments' => '%s Kommentar(e) anonymisiert',
  'anonymized_uploads' => '%s öffentliche Upload(s) anonymisiert',
  'deleted_comments' => '%s Kommentar(e) gelöscht',
  'deleted_uploads' => '%s öffentliche Upload(s) gelöscht',
  'user_deleted' => 'Benutzer %s gelöscht',
  'activate_user' => 'Benutzer aktivieren',
  'user_already_active' => 'Benutzerkonto war bereits aktiv',
  'activated' => 'Aktiviert',
  'deactivate_user' => 'Deaktiviere Benutzer',
  'user_already_inactive' => 'Benutzerkonto war bereits inaktiv',
  'deactivated' => 'Deaktiviert',
  'reset_password' => 'Passwort zurücksetzen',
  'password_reset' => 'Passwort zurückgesetzt auf %s',
  'change_group' => 'Primäre Gruppe ändern',
  'change_group_to_group' => 'Ändere von %s zu %s',
  'add_group' => 'Sekundäre Gruppe hinzufügen',
  'add_group_to_group' => 'Füge Benutzer %s zu Gruppe %s hinzu. Er ist nun Mitglied von %s als primäre Gruppe und von %s als sekundäre Mitgliedergruppe(n).',
  'status' => 'Status',
);

// ------------------------------------------------------------------------- //
// File displayecard.php
// ------------------------------------------------------------------------- //

if (defined('DISPLAYECARD_PHP')) {

$lang_displayecard_php = array(
  'invalid_data' => 'Die Daten für die gewünschte eCard wurden von Deinem eMail-Client korrumpiert. Überprüfe den Link auf Vollständigkeit.',
);
}

// ------------------------------------------------------------------------- //
// File displayimage.php
// ------------------------------------------------------------------------- //

if (defined('DISPLAYIMAGE_PHP')){

$lang_display_image_php = array(
  'confirm_del' => 'Diese Datei wirklich LÖSCHEN? \\nKommentare werden ebenfalls gelöscht.',
  'del_pic' => 'Diese Datei löschen',
  'size' => '%s x %s Pixel',
  'views' => '%s mal',
  'slideshow' => 'Diashow',
  'stop_slideshow' => 'Diashow anhalten',
  'view_fs' => 'Klicken für Bild in voller Größe',
  'edit_pic' => 'Datei-Information bearbeiten',
  'crop_pic' => 'Zuschneiden und drehen',
  'set_player' => 'Player ändern',
);

$lang_picinfo = array(
  'title' =>'Datei-Information',
  'Album name' => 'Name des Albums',
  'Rating' => 'Bewertung (%s Stimmen)',
  'Date Added' => 'Hinzugefügt am',
  'Dimensions' => 'Abmessungen',
  'Displayed' => 'Angezeigt',
  'URL' => 'URL',
  'Make' => 'Hersteller',
  'Model' => 'Modell',
  'DateTime' => 'Datum &amp; Uhrzeit',
  'DateTimeOriginal' => 'Aufnahmedatum',
  'ISOSpeedRatings'=>'ISO',
  'MaxApertureValue' => 'Max. Blendenwert',
  'FocalLength' => 'Brennweite',
  'Comment' => 'Kommentar',
  'addFav'=>'zu Favoriten hinzufügen',
  'addFavPhrase'=>'Favoriten',
  'remFav'=>'aus Favoriten entfernen',
  'iptcTitle'=>'IPTC Titel',
  'iptcCopyright'=>'IPTC Copyright',
  'iptcKeywords'=>'IPTC Stichworte',
  'iptcCategory'=>'IPTC Kategorie',
  'iptcSubCategories'=>'IPTC Unter-Kategorie',
  'ColorSpace' => 'Farbraum',
  'ExposureProgram' => 'Belichtungsprogramm',
  'Flash' => 'Blitz',
  'MeteringMode' => 'Belichtungsmessungs-Modus',
  'ExposureTime' => 'Belichtungszeit',
  'ExposureBiasValue' => 'Belichtungs-Einstellung',
  'ImageDescription' => ' Bildbeschreibung',
  'Orientation' => 'Ausrichtung',
  'xResolution' => 'x-Auflösung',
  'yResolution' => 'y-Auflösung',
  'ResolutionUnit' => 'Auflösungs-Einheit',
  'Software' => 'Software',
  'YCbCrPositioning' => 'YCbCr-Positionierung',
  'ExifOffset' => 'Exif Versatz',
  'IFD1Offset' => 'IFD1 Versatz',
  'FNumber' => 'Blende',
  'ExifVersion' => 'Exif Version',
  'DateTimeOriginal' => 'Datum & Uhrzeit Original',
  'DateTimedigitized' => 'Datum & Uhrzeit Digitaliserung',
  'ComponentsConfiguration' => 'Komponenten-Konfiguration',
  'CompressedBitsPerPixel' => 'Komprimierte Bits pro Pixel',
  'LightSource' => 'Lichtquelle',
  'ISOSetting' => 'ISO Einstellung',
  'ColorMode' => 'Farbmodus',
  'Quality' => 'Qualität',
  'ImageSharpening' => 'Bildschärfung',
  'FocusMode' => 'Fokus-Modus',
  'FlashSetting' => 'Blitz-Einstellung',
  'ISOSelection' => 'ISO Auswahl',
  'ImageAdjustment' => 'Bildabgleich',
  'Adapter' => 'Adapter',
  'ManualFocusDistance' => 'Manuelle Fokus-Entfernung',
  'DigitalZoom' => 'Digitaler Zoom',
  'AFFocusPosition' => 'Autofokus-Position',
  'Saturation' => 'Sättigung',
  'NoiseReduction' => 'Rauschunterdrückung',
  'FlashPixVersion' => 'Flash Pix Version',
  'ExifImageWidth' => 'Exif Bildbreite',
  'ExifImageHeight' => 'Exif Bildhöhe',
  'ExifInteroperabilityOffset' => 'Exif Zusammenarbeitsfähigkeit Offset',
  'FileSource' => 'Dateiquelle',
  'SceneType' => 'Szenen-Typ',
  'CustomerRender' => 'Customer Render',
  'ExposureMode' => 'Belichtungsmodus',
  'WhiteBalance' => 'Weißabgleich',
  'DigitalZoomRatio' => 'Verhältnis Digitalzoom',
  'SceneCaptureMode' => 'Scene Capture Modus',
  'GainControl' => 'Verstärkerregelung',
  'Contrast' => 'Kontrast',
  'Saturation' => 'Sättigung',
  'Sharpness' => 'Schärfe',
  'ManageExifDisplay' => 'Exif-Anzeige verwalten',
  'submit' => 'los',
  'success' => 'Informationen erfolgreich aktualisiert.',
  'show_details' => 'Details anzeigen', // cpg1.5.x
  'hide_details' => 'Details verbergen', // cpg1.5.x
  'download_URL' => 'Direkter Download-Link',
  'movie_player' => 'Datei in Standard-Applikation wiedergeben',
);

$lang_display_comments = array(
  'OK' => 'OK',
  'edit_title' => 'Diesen Kommentar bearbeiten',
  'delete_title' => 'Diesen Kommentar löschen', // cpg1.5.x
  'confirm_delete' => 'Willst Du diesen Kommentar wirklich löschen?', //js-alert
  'add_your_comment' => 'Füge Deinen Kommentar hinzu',
  'name'=>'Name',
  'comment'=>'Kommentar',
  'your_name' => 'Dein Name',
  'report_comment_title' => 'Diesen Kommentar beim Administrator melden',
  'pending_approval' => 'Kommentar wird nach Bestätigung durch den Admin sichtbar sein', // cpg1.5.x
  'unapproved_comment' => 'Unbestätigter Kommentar', // cpg1.5.x
  'pending_approval_message' => 'Jemand hat hier einen Kommentar abgegeben, der nach der Bestätigung durch den Admin sichtbar sein wird.', // cpg1.5.x
  'approve' => 'Kommentar bestätigen', // cpg1.5.x
  'disapprove' => 'Kommentar-Bestätigung aufheben', // cpg1.5.x
);

$lang_fullsize_popup = array(
  'click_to_close' => 'Bild anklicken, um das Fenster zu schließen!',
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
  'title' => 'eCard senden',
  'invalid_email' => 'Achtung: ungültige eMail-Adresse !',
  'ecard_title' => 'Eine eCard von %s für Dich',
  'error_not_image' => 'Nur Bilder können als eCard verschickt werden.',
  'error_not_image_flash' => 'Nur Bilder und Flash-Dateien können als eCard verschickt werden.', // cpg1.5.x
  'view_ecard' => 'Falls diese eCard nicht korrekt angezeigt wird, klicke auf den folgenden Link: ',
  'view_ecard_plaintext' => 'Markiere die folgende URL und füge sie in die Adresszeile Deines Browsers ein, um diese eCard anzuzeigen:',
  'view_more_pics' => 'Klicke auf diesen Link, um mehr Bilder ansehen zu können!',
  'send_success' => 'Deine eCard wurde gesendet',
  'send_failed' => 'Leider kann der Server Deine eCard nicht versenden...',
  'from' => 'Von',
  'your_name' => 'Dein Name',
  'your_email' => 'Deine eMail-Adresse',
  'to' => 'An',
  'rcpt_name' => 'Empfänger Name',
  'rcpt_email' => 'Empfänger eMail-Adresse',
  'greetings' => 'Überschrift',
  'message' => 'Nachricht',
  'ecards_footer' => 'Gesendet durch %s von der IP-Adresse %s um %s (Zeitzone der Galerie)',
  'preview' => 'Vorschau der eCard',
  'preview_button' => 'Vorschau',
  'submit_button' => 'eCard senden',
  'preview_view_ecard' => 'Dies wird der Alternativ-Link zur eCard sein, sobald sie tatsächlich erstellt wurde - funktioniert nicht für die Vorschau.',
);

// ------------------------------------------------------------------------- //
// File report_file.php
// ------------------------------------------------------------------------- //

if (defined('REPORT_FILE_PHP') || defined('DISPLAYREPORT_PHP')) $lang_report_php =array(
  'title' => 'Beim Administrator melden',
  'invalid_email' => 'Achtung: ungültige eMail-Adresse!',
  'report_subject' => 'Eine Meldung von %s über die Galerie %s',
  'view_report' => 'Alternativ-Link, falls diese Meldung nicht korrekt angezeigt wird',
  'view_report_plaintext' => 'Kopiere die folgende URL in die Adresszeile Deines Browsers, um die Meldung anzuzeigen:', 
  'view_more_pics' => 'Galerie',
  'send_success' => 'Deine Meldung wurde gesendet',
  'send_failed' => 'Der Server kann leider Deine Meldung nicht versenden...',
  'from' => 'Von',
  'your_name' => 'Dein Name',
  'your_email' => 'Deine eMail-Adresse',
  'to' => 'An',
  'administrator' => 'Administrator/Moderator',
  'subject' => 'Betreff',
  'comment_field_name' => 'Meldung bezüglich Kommentar von "%s"',
  'reason' => 'Grund',
  'message' => 'Nachricht',
  'report_footer' => 'Gesendet durch %s von IP-Adresse %s um %s (Zeitzone der Galerie)',
  'obscene' => 'unanständig ',
  'offensive' => 'beleidigend',
  'misplaced' => 'vom Thema abschweifend/unangebracht',
  'missing' => 'nicht vorhanden',
  'issue' => 'Fehler/kann nicht angezeigt werden',
  'other' => 'anderer Grund',
  'refers_to' => 'Datei-Meldung bezieht sich auf',
  'reasons_list_heading' => 'Grund/Gründe für Meldung:',
  'no_reason_given' => 'es wurde kein Grund angegeben',
  'go_comment' => 'Gehe zu Kommentar',
  'view_comment' => 'Vollständige Meldung mit Kommentar anzeigen',
  'type_file' => 'Datei',
  'type_comment' => 'Kommentar',
);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
  'pic_info' => 'Bild-Info',
  'desc' => 'Beschreibung',
  'approval' => 'Bestätigung', //cpg 1.5
  'approved' => 'Bestätigt', //cpg 1.5
  'disapproved' => 'Nicht bestätigt', //cpg 1.5
  'new_keyword' => 'Neue Stichworte',
  'new_keywords' => 'Neue Stichworte gefunden',
  'existing_keyword' => 'Vorhandene Stichworte',
  'pic_info_str' => '%sx%s - %s kB - %s x angesehen - %s x bewertet',
  'approve' => 'Datei genehmigen',
  'postpone_app' => 'Genehmigung verschieben',
  'del_pic' => 'Datei löschen',
  'del_all' => 'ALLE Dateien löschen',
  'read_exif' => 'EXIF-Daten erneut einlesen',
  'reset_view_count' => 'Zähler \'x mal angesehen\' auf Null setzen',
  'reset_all_view_count' => 'ALLE Zähler \'x mal angesehen\' auf Null setzen',
  'reset_votes' => 'Anzahl Stimmen auf Null setzen',
  'reset_all_votes' => 'ALLE Stimmen auf Null setzen',
  'del_comm' => 'Kommentare löschen',
  'del_all_comm' => 'ALLE Kommentare löschen',
  'upl_approval' => 'Genehmigung zum Hochladen',
  'edit_pics' => 'Dateien bearbeiten',
  'see_next' => 'nächste Dateien ansehen',
  'see_prev' => 'vorherige Dateien ansehen',
  'n_pic' => '%s Dateien',
  'n_of_pic_to_disp' => 'Dateien pro Seite',
  'apply' => 'Änderungen ausführen',
  'crop_title' => 'Coppermine Bild-Editor',
  'preview' => 'Vorschau',
  'save' => 'Bild speichern',
  'save_thumb' =>'Speichern als Thumbnail',
  'gallery_icon' => 'Dieses Bild zu meinem Benutzer-Icon machen',
  'sel_on_img' =>'Die Auswahl muss vollständig innerhalb des Bildes liegen!', //js-alert
  'album_properties' =>'Alben-Eigenschaften',
  'parent_category' =>'Eltern-Kategorie',
  'thumbnail_view' =>'Thumbnail Ansicht',
  'select_unselect' =>'alle selektieren/deselektieren',
  'file_exists' => "Zieldatei '%s' existiert bereits.",
  'rename_failed' => "Konnte '%s' nicht in '%s' umbenennen.",
  'src_file_missing' => "Quelldatei '%s' nicht vorhanden.",
  'mime_conv' => "Kann Datei '%s' nicht zu '%s' umwandeln",
  'forb_ext' => 'Keine erlaubte Dateiendung.',
  'error_editor_class' => 'Editor-Klasse für Deine Grössenänderungs-Methode ist nicht implementiert', //cpg 1.5
  'error_document_size' => 'Dokument hat keine Breite oder Höhe', //cpg 1.5  //js-alert
  'success_picture' => 'Bild wurde erfolgreich gespeichert - Du kannst dieses Fenster jetzt %sschliessen%s', //cpg 1.5 // do not translate "%s" here
  'success_thumb' => 'Thumbnail wurde erfolgreich gespeichert - Du kannst dieses Fenster jetzt %sschliessen%s', //cpg 1.5 // do not translate "%s" here
  'rotate' => 'Drehen', //cpg 1.5
  'mirror' => 'Spiegeln', //cpg 1.5
  'scale' => 'Größe ändern', //cpg 1.5
  'new_width' => 'Neue Breite', //cpg 1.5
  'new_height' => 'Neue Höhe', //cpg 1.5
  'enable_clipping' => 'Zuschneiden aktivieren, auf Schnitt anwenden', //cpg 1.5
  'jpeg_quality' => 'JPEG Qualität', //cpg 1.5
  'or' => 'oder', //cpg 1.5
  'approve_pic' => 'Datei bestätigen', //cpg 1.5
  'approve_all' => 'Alle Dateien bestätigen', //cpg 1.5
);

// ------------------------------------------------------------------------- //
// File faq.php
// ------------------------------------------------------------------------- //

if (defined('FAQ_PHP')) $lang_faq_php = array(
  'faq' => 'Häufig gestellte Fragen (Frequently Asked Questions)',
  'toc' => 'Inhalt',
  'question' => 'Frage: ',
  'answer' => 'Antwort: ',
);

if (defined('FAQ_PHP')) $lang_faq_data = array(
  'Allgemeines',
  array('Warum muss ich mich registrieren?', 'Der Administrator kann verlangen, dass Du Dich registrierst (oder auch nicht). Durch die Registrierung erhälst Du möglicherweise einige zusätzliche Features, wie z.B. Dateien hochladen, eine Favoriten-Liste, Bewertung von Bildern, Abgabe von Kommentaren etc. ', 'allow_user_registration', '0'),
  array('Wie kann ich mich registrieren?', 'Klicke auf &quot;Registrieren&quot; und fülle die notwendigen Felder aus (und die optionalen, wenn Du möchtest).<br />Wenn der Administrator eMail-Aktivierung eingeschaltet hat, bekommst Du eine eMail an die Adresse, die Du bei der Registrierung angegeben hast, in der Anweisungen enthalten sind, wie Du Dein Benutzerkonto aktivieren kannst. In diesem Fall muss Dein Konto aktiviert werden, bevor Du Dich anmelden kannst.', 'allow_user_registration', '1'),
  array('Wie kann ich mich anmelden?', 'Klicke auf &quot;Anmelden&quot;, gib Deinen Benutzernamen und Dein Passwort ein, und kreuze die Option &quot;Immer angemeldet bleiben&quot; an, damit Du Dich nicht bei Deinem nächsten Besuch auf der Seite erneut anmelden musst.<br /><b>WICHTIG: Um Dich anzumelden, musst Du Cookies in Deinem Browser zulassen, und das Cookie darf nicht gelöscht werden, wenn Du die Option &quot;Immer angemeldet bleiben&quot; nutzen willst.</b>', 'offline', 0),
  array('Warum kann ich mich nicht anmelden?', 'Hast Du Dich registriert und die Anweisungen ausgeführt, die in der Aktivierungsmail an Dich gesendet wurden?. Der Link in der Aktivierungsmail schaltet Dein Benutzerkonto frei. Bezüglich anderer Probleme beim anmelden, wende Dich an den Admin dieser Seite.', 'offline', 0),
  array('Ich habe mein Passwort vergessen. Was nun?', 'Wenn der Link &quot;Passwort vergessen&quot; auf der Anmeldeseite anzeigt wird, dann benutze ihn. Ansonsten nimm Kontakt mit dem Admin dieser Seite auf und bitte ihn um ein neues Passwort.', 'offline', 0),
  //array('Meine eMail-Adresse hat sich geändert. Was tun?', 'Melde Dich an und ändere Deine eMail-Adresse im Menüpunkt &quot; mein Profil&quot;', 'offline', 0),
  array('Wie speichere ich eine Datei in &quot;meine Favoriten&quot;?', 'Klicke auf &quot;Datei-Info&quot; (<img src="images/info.gif" width="16" height="16" border="0" alt="Bild-Info" />); gehe ganz nach unten auf der Seite und klicke auf &quot;Zu Favoriten hinzufügen&quot;.<br />Möglicherweise ist die Anzeige des Datei-Info Bereichs auch standardmäßig eingeschaltet.<br />Wichtig: Cookies müssen aktiviert sein und Du darfst den Cookie nicht löschen (im Cookie werden die Favoriten gespeichert).', 'offline', 0),
  array('Wie kann ich eine Datei bewerten?', 'Klicke auf das Thumbnail (kleine Vorschaugrafik) einer Datei und wähle eine Bewertung (angezeigt unterhalb des Bildes).', 'offline', 0),
  array('Wie kann ich einen Kommentar abgeben?', 'Klicke auf das Thumbnail (kleine Vorschaugrafik) einer Datei, gehe nach unten auf der Seite und gib Deinen Kommentar ein. Wenn keine Eingabe eines Kommentars möglich ist, musst Du Dich eventuell erst registrieren und anmelden, damit diese Option zur Verfügung steht.', 'offline', 0),
  array('Wie kann ich eine Datei hochladen?', 'Klicke auf &quot;Datei hochladen&quot; und wähle das Album aus, in das Du die Datei hochladen willst, klicke auf &quot;Durchsuchen&quot; und wähle die Datei aus, die Du hochladen willst und klicke dann auf &quot;öffnen&quot; (füge einen Titel, eine Beschriftung und ein paar Stichworte ein, wenn Du möchtest). Um den Vorgang abzuschliessen, klicke auf &quot;Datei hochladen&quot;', 'allow_private_albums', 0),
  array('Wohin kann ich Dateien hochladen?', 'Du kannst Dateien in Alben hochladen, die Du innerhalb der Kategorie &quot;meine Galerie&quot; erstellen kannst. Der Administrator der Seite kann Dir auch das Recht einräumen, in ein oder mehrere Alben der allgemeinen Galerie hochzuladen. Falls das der Fall ist, werden Dir diese Alben im Auswahlmenü auf der Upload-Seite angezeigt', 'allow_private_albums', 0),
  array('Welche Art und Größe von Dateien kann ich hochladen?', 'Die Art (z.B. jpg oder png) und Größe bestimmt der Administrator dieser Seite.', 'allow_private_albums', 0),
  array('Was ist &quot;meine Galerie&quot;?', '&quot;Meine Galerie&quot; ist Deine persönliche Galerie, innerhalb der Du Dateien hochladen und bearbeiten kannst.', 'allow_private_albums', 0),
  array('Wie kann ich Alben erzeugen, umbenennen oder löschen in &quot;meine Galerie&quot;?', 'Du siehst die Optionen erst nach der Anmeldung im Admin-Modus<br />Klicke auf &quot;Erzeuge/ändere meine Alben&quot; und klicke auf &quot;Neu&quot;. Ändere den Text &quot;Neues Album&quot; in den gewünschten Namen ab.<br />Du kannst auch bestehende Alben umbenennen, indem Du sie zuerst anklickst und dann im Eingabefeld unten einen neuen Namen dafür eingibst.<br />Klicke auf &quot;Änderungen übernehmen&quot;, um Deine Änderungen durchzuführen.', 'allow_private_albums', 0),
  array('Wie kann ich meine Alben abändern und die Zugriffsrechte darauf ändern?', 'Du solltest nach der Anmeldung bereits im Admin-Modus sein.<br />Klicke auf &quot; Meine Alben bearbeiten&quot;. Wähle in der Zeile &quot;Album aktualisieren&quot; das Album aus, das Du aktualisieren möchtest.<br />Du kannst dann den Namen, die Beschreibung, das Thumbnail (Vorschaugrafik) ändern und die Rechte ändern, wer das Album sehen und Kommentare dazu abgeben darf.<br />Um Deine Änderungen zu bestätigen, klicke am Schluß auf &quot;Album aktualisieren&quot;.', 'allow_private_albums', 0),
  array('Was sind Cookies?', 'Cookies sind kleine Textdateien, die von einem Webserver versendet werden und auf Deinem Rechner gespeichert werden. Beim erneuten Aufsuchen der Seite können die Cookies wieder vom Server gelesen werden.<br />In der Regel werden Sie dazu genutzt, Dich als Benutzer auf der Seite wiederzuerkennen. Cookies selbst können keine Viren oder sonstige bösartigen Schad-Programme enthalten und sind daher in erster Linie ungefährlich. Einige Seitenbetreiber setzen Cookies allerdings ein, um Verhaltensprofile von Surfern im Internet zu erstellen und nutzen die Informationen in der Regel, um zielgerichtet Werbung für den Surfer zur Verfügung zu stellen.', 'offline', 0),
  array('Woher kann ich dieses Porgramm für meine Homepage bekommen?', 'Diese Seite läuft mit Coppermine. Coppermine ist eine kostenlose Multimedia-Galerie, die unter der Lizenz GNU GPL erscheint. Die Software ist voller Features und für einige Platformen erhältlich. Besuche die <a href="http://coppermine.sf.net/">Coppermine Home Page</a> für zusätzliche Informationen oder um die Software herunterzuladen.', 'offline', 0),

  'Navigation auf der Seite',
  array('Was ist die &quot;Alben-Übersicht&quot;?', 'Zeigt die gesamte Kategorie an, in der Du Dich gerade befindest, mit einem Link zu jedem Album. Wenn Du Dich gerade nicht innerhalb einer Kategorie befindest zeigt Dir &quot;Alben-Übersicht&quot; die gesamte Galerie mit Links zu den einzelnen Kategorien an. Möglicherweise existieren Thumbnails als Links zu den einzelnen Kategorien.', 'offline', 0),
  array('Was ist &quot;meine Galerie&quot;?', 'Mit diesem Menüpunkt kannst Du Deine eigene Benutzer-Galerie erstellen und bearbeiten.', 'allow_private_albums', 1),
  array('Was ist der Unterschied zwischen &quot;Admin-Modus&quot; und &quot;Benutzer-Modus&quot;?', 'Im Admin-Modus werden die Navigations-Elemente zum Erstellen und Ändern Deiner Benutzer-Galerie angezeigt; der Benutzer-Modus zeigt Dir, wie Deine Benutzer-Galerie für andere Benutzer aussieht (ohne die entsprechenden Menüpunkte).', 'allow_private_albums', 0),
  array('Was ist &quot;Dateien hochladen&quot;?', 'Dieses Feature ermöglicht es Benutzern, eigene Dateien hochzuladen und in Alben zu positionieren (Dateigröße und -typ wurden vom Admin festgelegt).', 'allow_private_albums', 0),
  array('Was ist &quot;neueste Uploads&quot;?', 'Dieser Bereich zeigt die neuesten Dateien, die in eines der Alben der Galerie hochgeladen wurden.', 'offline', 0),
  array('Was ist &quot;neueste Kommentare&quot;?', 'Dieser Bereich zeigt die zuletzt abgegebenen Kommentare unterhalb der Thumbnails (Vorschaugrafik) der Dateien, auf die sich die Kommentare beziehen.', 'offline', 0),
  array('Was ist &quot;am meisten angesehen&quot;?', 'Dieser Bereich zeigt die beliebtesten Dateien (am meisten angesehen) der gesamten Galerie oder des Bereichs an, in dem Du Dich befindest.', 'offline', 0),
  array('Was ist &quot;am besten bewertet&quot;?', 'Durchschnittliche Bewertung der Datei (Bsp.: 5 Benutzer gaben einem Bild ein Bewertung von <img src="images/rating3.gif" width="65" height="14" border="0" alt="" />: das Bild hat eine durchschnittliche Bewertung von <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> ;Wenn 5 Benutzer ein Bild mit Noten von 1 bis 5 (1,2,3,4,5) bewerten, würde der Schnitt ebenfalls so aussehen: <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> .)<br />Die Bewertungs-Skala reicht von <img src="images/rating5.gif" width="65" height="14" border="0" alt="super" /> (super) bis <img src="images/rating0.gif" width="65" height="14" border="0" alt="sehr schlecht" /> (sehr schlecht).', 'offline', 0),
  array('Was ist &quot;Meine Favoriten&quot;?', 'Mit diesem Feature kannst Du Bilder, die Du später noch einmal ansehen willst, in einer Favoriten-Liste speichern. Dazu musst Du nicht einmal angemeldet sein, da die Liste in einem Cookie auf Deinem Computer gespeichert wird. Beachte aber: die Favoriten stehen Dir nur an diesem Computer zur Verfügung; wenn die Cookies gelöscht werden, sind die Favoriten ebenfalls verschwunden.', 'offline', 0),
);


// ------------------------------------------------------------------------- //
// File forgot_passwd.php
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) $lang_forgot_passwd_php = array(
  'forgot_passwd' => 'Passwort-Erinnerung',
  'err_already_logged_in' => 'Du bist schon angemeldet!',
  'enter_email' => 'Gib Deine eMail-Adresse ein',
  'submit' => 'los!',
  'illegal_session' => 'Die Session für die Passwort-Erinnerung ist ungültig oder abgelaufen.',
  'failed_sending_email' => 'Die eMail mit der Passwort-Erinnerung kann nicht gesendet werden!',
  'email_sent' => 'Eine eMail mit Deinem Benutzernamen und einem neuen Passwort wurde an %s gesendet.',
  'verify_email_sent' => 'Eine eMail wurde an %s gesendet. Bitte überprüfe Deine Mailbox, um den Vorgang abzuschliessen.', 
  'err_unk_user' => 'Der gewählte Benutzer existiert nicht!',
  'account_verify_subject' => '%s - Anforderung neues Passwort',
  'account_verify_body' => 'Du hast ein neues Passwort beantragt - um dieses neue Passwort tatsächlich zu erhalten, klicke 
auf nachstehenden Link:
%s',
  'passwd_reset_subject' => '%s - Dein neues Passwort',
  'passwd_reset_body' => 'Hier ist das neue Passwort, dass Du beantragt hast:
Benutzername: %s
Passwort: %s
Klicke %s, um Dich anzumelden.',
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
  'group_name' => 'Gruppen-Name',
  'permissions' => 'Berechtigungen',
  'public_albums' => 'Upload in öffentliche Alben',
  'personal_gallery' => 'Persönliche Galerie',
  'upload_method' => 'Upload-Methode',
  'disk_quota' => 'Speicherplatz',
  'rating' => 'Abstimmen',
  'ecards' => 'eCards',
  'comments' => 'Kommentare',
  'allowed' => 'Erlaubt',
  'approval' => 'Bestätigung',
  'boxes_number' => 'Anzahl Felder',
  'variable' => 'variabel',
  'fixed' => 'fest',
  'apply' => 'Änderungen übernehmen',
  'create_new_group' => 'Neue Gruppe erstellen',
  'del_groups' => 'ausgewählte Gruppe(n) löschen',
  'confirm_del' => 'Achtung: wenn Du eine Gruppe löschst werden die dazu gehörenden Benutzer in die Gruppe \'Registrierte Benutzer\' verschoben!\n\nWillst Du das ?', //js-alert
  'title' => 'Benutzer-Gruppen verwalten',
  'num_file_upload' => 'Datei-Upload Felder',
  'num_URI_upload' => 'URI-Upload Felder',
  'reset_to_default' => 'Auf Standard-Gruppennamen (%s) zurücksetzen - empfohlen!',
  'error_group_empty' => 'Gruppen-Tabelle war leer!<br /><br />Standard-Gruppen wurden erstellt, bitte diese Seite erneut laden',
  'explain_greyed_out_title' => 'Warum ist diese Zeile ausgegraut?',
  'explain_guests_greyed_out_text' => 'Die Eigenschaften dieser Gruppe können nicht verändert werden, weil die Option &quot;Nicht-angemeldeten Besuchern (Gäste) Zugriff erlauben&quot; in der Coppermine-Knofiguration auf &quot;Nein&quot; gesetzt wurde. Alle Gäste (Mitglieder der Gruppe %s) können nichts tun außer sich anzumelden; daher sind keine der Gruppen-Verrechtungen für sie zutreffend.',
  'explain_banned_greyed_out_text' => 'Die Eigenschaften der Gruppe %s können nicht verändert werden, da deren Mitglieder sowieso nichts tun dürfen.',
  'group_assigned_album' => 'zugewiesene Alben',
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
  'welcome' => 'Startseite',
);

$lang_album_admin_menu = array(
  'confirm_delete' => 'Willst Du dieses Album wirklich LÖSCHEN? \\nAlle darin befindlichen Dateien und Kommentare werden ebenfalls gelöscht.',
  'delete' => 'löschen',
  'modify' => 'Eigenschaften',
  'edit_pics' => 'Dateien bearbeiten',
);

$lang_list_categories = array(
  'home' => 'Galerie',
  'stat1' => '<b>[pictures]</b> Dateien in <b>[albums]</b> Alben und <b>[cat]</b> Kategorien mit <b>[comments]</b> Kommentaren, <b>[views]</b> mal angesehen',
  'stat2' => '<b>[pictures]</b> Dateien in <b>[albums]</b> Alben, <b>[views]</b> mal angesehen',
  'xx_s_gallery' => '%s\'s Galerie',
  'stat3' => '<b>[pictures]</b> Dateien in <b>[albums]</b> Alben mit <b>[comments]</b> Kommentaren, <b>[views]</b> mal angesehen'
);

$lang_list_users = array(
  'user_list' => 'Benutzer-Liste',
  'no_user_gal' => 'Keine Benutzer-Galerien vorhanden.',
  'n_albums' => '%s Album/en',
  'n_pics' => '%s Datei(en)',
);

$lang_list_albums = array(
  'n_pictures' => '%s Dateien',
  'last_added' => ', letzte Aktualisierung am %s',
  'n_link_pictures' => '%s verknüpfte Dateien',
  'total_pictures' => '%s Dateien insgesamt',
);

}

// ------------------------------------------------------------------------- //
// File keywordmgr.php
// ------------------------------------------------------------------------- //

if (defined('KEYWORDMGR_PHP')) $lang_keywordmgr_php = array(
  'title' => 'Stichworte verwalten',
  'edit' => 'bearbeiten',
  'delete' => 'löschen',
  'search' => 'suchen',
  'keyword_test_search' => 'nach %s in einem neuen Fenster suchen',
  'keyword_del' => 'das Stichwort %s löschen',
  'confirm_delete' => 'Willst Du wirklich das Stichwort %s aus der gesamten Galerie löschen?', // js-alert
  'change_keyword' => 'Stichwort ändern',
);

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
  'login' => 'Anmeldung (Login)',
  'enter_login_pswd' => 'Gib Deinen Benutzernamen und Dein Passwort ein, um Dich anzumelden',
  'username' => 'Benutzername',
  'password' => 'Passwort',
  'remember_me' => 'Immer angemeldet bleiben',
  'welcome' => 'Hallo %s ...',
  'err_login' => '*** Konnte Dich nicht anmelden. Versuche es nochmal ***',
  'err_already_logged_in' => 'Du bist schon angemeldet!',
  'forgot_password_link' => 'Passwort vergessen',
  'cookie_warning' => 'Achtung: Dein Browser akzeptiert nicht die Cookies dieses Skripts',
  'send_activation_link' => 'Aktivierungs-Link nicht erhalten?', //cpg 1.5
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
  'logout' => 'Abmelden',
  'bye' => 'Tschüss %s ...',
  'err_not_loged_in' => 'Du bist nicht angemeldet!',
);

// ------------------------------------------------------------------------- //
// File minibrowser.php 
// ------------------------------------------------------------------------- //

if (defined('MINIBROWSER_PHP')) $lang_minibrowser_php = array(
  'close' => 'schliessen',
  'submit' => 'OK',
  'up' => 'eine Ebene höher',
  'current_path' => 'derzeitiger Pfad',
  'select_directory' => 'Wähle ein Verzeichnis',
  'click_to_close' => 'Bild klicken, um dieses Fenster zu schliessen',
);

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
  'upd_alb_n' => 'Album %s aktualisieren',
  'general_settings' => 'Allgemeine Einstellungen',
  'alb_title' => 'Album Titel',
  'alb_cat' => 'Album Kategorie',
  'alb_desc' => 'Album Beschreibung',
  'alb_keyword' => 'Album Keyword',
  'alb_thumb' => 'Album Thumbnail',
  'alb_perm' => 'Berechtigungen für dieses Album',
  'can_view' => 'Album kann angesehen werden von',
  'can_upload' => 'Besucher können Dateien hochladen',
  'can_post_comments' => 'Besucher können Kommentare abgeben',
  'can_rate' => 'Besucher können Dateien bewerten',
  'user_gal' => 'Benutzer-Galerie',
  'no_cat' => '* keine Kategorie *',
  'alb_empty' => 'Album ist leer',
  'last_uploaded' => 'Letzte Datei, die hochgeladen wurde',
  'public_alb' => 'Jeder (öffentliches Album)',
  'me_only' => 'Nur ich',
  'owner_only' => 'Nur der Besitzer des Albums (%s)',
  'groupp_only' => 'Mitglieder der Gruppe \'%s\'',
  'err_no_alb_to_modify' => 'Es ist kein Album zum Bearbeiten in der Datenbank.',
  'update' => 'Album aktualisieren',
  'reset_album' => 'Album zurücksetzen',
  'reset_views' => 'Anzeigezähler zurücksetzen auf &quot;0&quot; für %s',
  'reset_rating' => 'Abstimmungen auf alle Dateien im Album %s zurücksetzen',
  'delete_comments' => 'Alle Kommentare im Album %s löschen',
  'delete_files' => 'Unwiederbringlich alle Dateien im Album %s löschen',
  'views' => 'Treffer',
  'votes' => 'Stimmen',
  'comments' => 'Kommentare',
  'files' => 'Dateien',
  'submit_reset' => 'Änderungen durchführen',
  'reset_views_confirm' => 'ich bin mir sicher',
  'notice1' => '(*) abhängig von den %sGruppen%s Einstellungen', //(do not translate %s!)
  'can_moderate' => 'Album kann moderiert werden von', //cpg 1.5
  'admins_only' => 'Nur Administratoren', //cpg 1.5
  'alb_password' => 'Passwort des Albums',
  'alb_password_hint' => 'Hinweis für Albums-Passwort',
  'edit_files' =>'Dateien bearbeiten',
  'parent_category' =>'Eltern-Kategorie',
  'thumbnail_view' =>'Thumbnail-Ansicht',
  'random_image' => 'Zufalls-Bild', //cpg 1.5
);

// ------------------------------------------------------------------------- //
// File phpinfo.php
// ------------------------------------------------------------------------- //

if (defined('PHPINFO_PHP')) $lang_phpinfo_php = array(
  'php_info' => 'PHP info',
  'explanation' => 'Diese Ausgabe wird durch die PHP-Funktion <a href="http://www.php.net/phpinfo">phpinfo()</a> erzeugt, und innerhalb von Coppermine angezeigt (dabei wird möglicherweise die Ausgabe einiger Felder am rechten Rand abgeschnitten).',
  'no_link' => 'Anderen Personen die phpinfo-Daten anzuzeigen, kann ein Sicherheitsrisiko sein - daher wird diese Seite nur angezeigt, wenn Du als Admin angemeldet bist. Du kannst daher anderen keinen Link auf diese Seite zukommen lassen, da ihnen der Zugriff verwährt werden wird!',
);

// ------------------------------------------------------------------------- //
// File picmgr.php
// ------------------------------------------------------------------------- //
if (defined('PICMGR_PHP')) $lang_picmgr_php = array(
  'pic_mgr' => 'Bilder verwalten',
  'select_album' => 'Wähle Album',
  'delete' => 'Löschen',
  'confirm_delete1' => 'Dieses Bild wirklich löschen?',
  'confirm_delete2' => '\nLöschen ist dauerhaft und endgültig.',
  'apply_modifs' => 'Änderungen übernehmen',
  'confirm_modifs' => 'Änderungen bestätigen',
  'pic_need_name' => 'Bild muss einen Namen haben',
  'no_change' => 'Es wurden keine Änderungen vorgenommen',
  'no_album' => '* Kein Album *',
  'explanation_header' => 'Die benutzerdefinierte Sortierreihenfolge, die Du auf dieser Seite wählen kannst wird nur angewendet, wenn',
  'explanation1' => 'der Administrator die Konfigurationsoption für "Benutzerdefinierte Sortierreihenfolde für Dateien" auf "Position absteigend" oder "Position aufsteigend" gesetzt hat (globale Einstellung für alle Benutzer, die keine andere individuelle Sortierreihenfolge gewählt haben)',
  'explanation2' => 'der Benutzer als Sortierreihenfolde "Position absteigend" oder "Position aufsteigend" auf der Thumbnail-Seite gewählt hat (Einstellung pro Benutzer)',
);


// ------------------------------------------------------------------------- //
// File pluginmgr.php
// ------------------------------------------------------------------------- //

if (defined('PLUGINMGR_PHP')){

$lang_pluginmgr_php = array(
  'confirm_uninstall' => 'Dieses Plugin wirklich DE-INSTALLIEREN',
  'confirm_delete' => 'Dieses Plugin wirklich LÖSCHEN',
  'pmgr' => 'Plugin Manager',
  'explanation' => 'Installieren / Deinstallieren / Verwalten von Plugins.', // cpg1.5.x
  'name' => 'Name',
  'author' => 'Author',
  'desc' => 'Beschreibung',
  'vers' => 'v',
  'i_plugins' => 'Installierte Plugins',
  'n_plugins' => 'Nicht installierte Plugins',
  'none_installed' => 'nicht installiert',
  'operation' => 'Aufgabe',
  'not_plugin_package' => 'Die hochgeladene Datei ist kein Plugin-Paket.',
  'copy_error' => 'Beim Kopieren des Pakets in das Plugin-Verzeichnis ist ein Fehler aufgetreten.',
  'upload' => 'Hochladen',
  'configure_plugin' => 'Plugin knfigurieren',
  'cleanup_plugin' => 'Plugin bereinigen',
  'extra' => 'Extra', // cpg1.5.x
);
}

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
  'already_rated' => 'Du hast diese Datei schon bewertet',
  'rate_ok' => 'Deine Bewertung wurde akzeptiert',
  'forbidden' => 'Du kannst Deine eigenen Dateien nicht bewerten.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
Obwohl die Administratoren von {SITE_NAME} versuchen werden, generell alle anstössigen Inhalte so schnell wie möglich zu 
löschen oder zu bearbeiten, ist es unmöglich, jeden Beitrag zu überprüfen. Daher bestätigst Du, dass alle Beiträge auf dieser 
Seite die Ansichten und Meinungen des Authors widerspiegeln und nicht die des Administrators oder Webmasters (außer den 
Beiträgen, die durch sie verfasst wurden) und sie daher dafür nicht verantwortlich gemacht werden können.<br />
<br />
Du stimmst zu, keine beleidigende, obszöne, vulgäre, verleumderische, verhetzende, drohende, sexuell-orientierte oder 
sonstwie illegalen Beiträge zu verfassen. Du stimmst zu, dass der/die Webmaster, Administrator(en) oder Moderator(en) von 
{SITE_NAME} das Recht haben, jeden Inhalt zu löschen oder zu ändern, bei dem sie es für richtig halten. Als Benutzer stimmst 
Du zu, dass alle Informationen, die Du oben eingetragen hast, in einer Datenbank gespeichert werden. Obwohl diese Daten ohne 
Deine ausdrückliche Zustimmung nicht an Dritte weitergegeben werden, können der Webmaster oder Administrator nicht dafür zur 
Verantwortung gezogen werden, wenn durch einen Angriff (Hacking) die gespeicherten Daten kompromitiert werden.<br />
<br />
Diese Seite benutzt Cookies, um Daten auf Deinem Rechner zu speichern. Diese Cookies dienen nur dazu, die Bedienung der Seite 
zu ermöglichen. Die eMail-Adresse wird nur dazu verwendet, die Registrierungs-Details und das Passwort zu bestätigen.<br />
<br />
Durch das Anklicken von 'ich stimme zu' stimmst Du diesen Bedingungen zu.
EOT;

$lang_register_php = array(
  'page_title' => 'Benutzer-Registrierung',
  'term_cond' => 'Nutzungsbedingungen',
  'i_agree' => 'ich stimme zu',
  'submit' => 'Registrieren absenden',
  'err_user_exists' => 'Der Benutzername, den Du eingegeben hast, existiert schon, bitte wähle einen anderen',
  'err_global_pw' => 'Ungültiges globales Registrierungs-Passwort', // cpg1.5
  'err_global_pass_same' => 'Dein Passwort muss sich vom globalen Passwort unterscheiden', // cpg1.5
  'err_password_mismatch' => 'Die Passwörter stimmen nicht überein, bitte nochmals eingeben',
  'err_uname_short' => 'Der Benutzername muss mindestens 2 Zeichen lang sein',
  'err_password_short' => 'Das Passwort muss mindestens 2 Zeichen lang sein',
  'err_uname_pass_diff' => 'Benutzername und Passwort müssen unterschiedlich sein',
  'err_invalid_email' => 'eMail-Adresse ist ungültig',
  'err_duplicate_email' => 'Es hat sich schon ein anderer Benutzer mit der angegebenen eMail-Adresse registriert',
  'err_disclaimer' => 'Du musst dem Disclaimer zustimmen', // cpg1.5
  'enter_info' => 'Gib Registrierungs-Informationen ein',
  'required_info' => 'Pflichtfeld',
  'optional_info' => 'Optional',
  'username' => 'Benutzername',
  'password' => 'Passwort',
  'password_again' => 'Passwort-Bestätigung',
  'global_registration_pw' => 'Globales Registrierungs-Passwort', // cpg1.5
  'email' => 'eMail-Adresse',
  'location' => 'Ort',
  'interests' => 'Hobbies',
  'website' => 'Homepage',
  'occupation' => 'Beruf',
  'error' => 'FEHLER',
  'confirm_email_subject' => '%s - Registrierungs-Bestätigung',
  'information' => 'Information',
  'failed_sending_email' => 'Die Registrierungs-Bestätigung kann nicht per eMail versendet werden!',
  'thank_you' => 'Danke für Deine Registrierung.<br /><br />Eine eMail mit Informationen, wie Du Dein Benutzerkonto aktivieren kannst, wurde an die angegebene eMail-Adresse gesendet.',
  'acct_created' => 'Dein Benutzerkonto wurde erstellt. Du kannst Dich jetzt mit Benutzername und Passwort anmelden',
  'acct_active' => 'Dein Benutzerkonto ist jetzt aktiviert. Du kannst Dich jetzt mit Benutzername und Passwort anmelden',
  'acct_already_act' => 'Dein Benutzerkonto ist bereits aktiviert!',
  'acct_act_failed' => 'Dieses Benutzerkonto kann nicht aktiviert werden!',
  'err_unk_user' => 'Der gewählte Benutzer existiert nicht!',
  'x_s_profile' => '%s\'s Benutzerprofil',
  'group' => 'Gruppe',
  'reg_date' => 'Registriert am',
  'disk_usage' => 'Speicherplatz-Verbrauch',
  'change_pass' => 'Passwort ändern',
  'current_pass' => 'derzeitiges Passwort',
  'new_pass' => 'neues Passwort',
  'new_pass_again' => 'neues Passwort bestätigen',
  'err_curr_pass' => 'Derzeitiges Passwort ist verkehrt',
  'apply_modif' => 'Änderungen speichern',
  'change_pass' => 'Mein Passwort ändern',
  'update_success' => 'Dein Benutzerprofil wurde aktualisiert',
  'pass_chg_success' => 'Dein Passwort wurde geändert',
  'pass_chg_error' => 'Dein Passwort wurde nicht geändert',
  'notify_admin_email_subject' => '%s - Registrierungs-Benachrichtigung',
  'last_uploads' => 'Zuletzt hochgeladenen Datei.<br />Klicken, um alle Uploads zu sehen von',
  'last_comments' => 'Neueste Kommentare.<br />Klicken, um alle Komentare zu sehen, die abgegeben wurden von',
  'notify_admin_email_body' => 'Jemand mit dem Benutzernamen "%s" hat sich in Deiner Galerie registriert',
  'pic_count' => 'Hochgeladene Dateien',
  'notify_admin_request_email_subject' => '%s - Registrierungsversuch',
  'thank_you_admin_activation' => 'Danke.<br /><br />Deine Registrierung wurde an den Administrator weitergeleitet zur Aktivierung. Nach erfolgter Aktiverung wirst Du eine eMail erhalten.',
  'acct_active_admin_activation' => 'Das Benutzerkonto ist jetzt aktiv. Dem Benutzer wurde eine Benachrichtigung darüber per eMail gesendet.',
  'notify_user_email_subject' => '%s - Aktivierungs-Benachrichtigung',
  'delete_my_account' => 'Lösche mein Benutzer-Konto', // cpg1.5
  'warning_delete' => 'Achtung: das Löschen des Benutzer-Kontos kann nicht rückgängig gemacht werden. Die %sDateien, die Du hochgeladen hast%s in öffentlichen Alben und die %sKommentare%s werden nicht gelöscht, wenn Du Dein Konto löschst! Die Dateien, die Du in Deine persönlichen Alben hochgeladen hast werden jedoch gelöscht.', // cpg1.5 // The %s-placeholders mustn't be removed, they will later be replaced by the wrappers for the links
  'i_am_sure' => 'Ja, ich will mein Konto löschen', // cpg1.5
  'really_delete' => 'Möchtest Du wirklich Dein Benutzer-Konto löschen?', // cpg1.5 //JS-Alert

);

$lang_register_confirm_email = <<<EOT
Danke für Deine Registrierung bei {SITE_NAME}

Dein Benutzername ist : "{USER_NAME}"


Um Dein Benutzerkonto zu aktivieren, musst Du auf den untenstehenden Link klicken
oder ihn kopieren und in der Adresszeile Deines Browsers einfügen.
<a href="{ACT_LINK}">{ACT_LINK}</a>

Grüße,

Das Team von {SITE_NAME}

EOT;

$lang_register_approve_email = <<<EOT
Ein neuer Benutzer hat sich mit dem Benutzernamen "{USER_NAME}" in Deiner Galerie registriert.
Um das Benutzerkonto zu aktivieren, klicke auf den untenstehenden Link oder kopiere ihn in die Adresszeile Deines Browsers.
<a href="{ACT_LINK}">{ACT_LINK}</a>

EOT;

$lang_register_activated_email = <<<EOT
Dein Benutzerkonto wurden genehmigt und aktiviert.
Du kannst Dich jetzt auf der Seite <a href="{SITE_LINK}">{SITE_LINK}</a> mit dem Benutzernamen "{USER_NAME}" anmelden.

Gruss,

Das {SITE_NAME} Team

EOT;
}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
  'title' => 'Kommentare bearbeiten',
  'no_comment' => 'keine zu bearbeitenden Kommentare vorhanden',
  'n_comm_del' => '%s Kommentar(e) gelöscht',
  'n_comm_disp' => 'Anzahl angezeigter Kommentare',
  'see_prev' => 'vorherigen anzeigen',
  'see_next' => 'nächsten anzeigen',
  'del_comm' => 'markierte Kommentare löschen',
  'user_name' => 'Name',
  'date' => 'Datum',
  'comment' => 'Kommentar',
  'file' => 'Datei',
  'name_a' => 'Benutzername aufsteigend',
  'name_d' => 'Benutzername absteigend',
  'date_a' => 'Datum aufsteigend',
  'date_d' => 'Datum absteigend',
  'comment_a' => 'Kommentartext aufsteigend',
  'comment_d' => 'Kommentartext absteigend',
  'file_a' => 'Datei aufsteigend',
  'file_d' => 'Datei absteigend',
  'approval_a' => 'Bestätigungs-Status aufsteigend', // cpg1.5.x
  'approval_d' => 'Bestätigungs-Status absteigend', // cpg1.5.x
  'n_comm_appr' => '%s Kommentar(e) bestätigt', // cpg1.5.x
  'n_comm_disappr' => 'Bestätigung für %s Kommentar(e) deaktiviert', // cpg1.5.x
  'configuration_changed' => 'Bestätigungs-Einstellungen geändert', // cpg1.5.x
  'only_approval' => 'nur unbestätigte Kommentare anzeigen', // cpg1.5.x
  'approval' => 'Bestätigt', // cpg1.5.x
  'save_changes' => 'Änderungen speichern', // cpg1.5.x
  'n_confirm_delete' => 'Gewählte Kommentare wirklich löschen?', // cpg1.5.x
  'with_selected' => 'Markierte Kommentare', // cpg1.5.x
  'delete' => 'löschen', // cpg1.5.x
  'approve' => 'bestätigen', // cpg1.5.x
  'disapprove' => 'Bestätigung aufheben', // cpg1.5.x
  'comment_approved' => 'Kommentar bestätigt', // cpg1.5.x
  'comment_disapproved' => 'Bestätigung für Kommentar aufgehoben', // cpg1.5.x

);


// ------------------------------------------------------------------------- //
// File search.php                                                           //
// ------------------------------------------------------------------------- //


if (defined('SEARCH_PHP')){

$lang_search_php = array(
  'title' => 'Dateisammlung durchsuchen',
  'submit_search' => 'suchen',
  'keyword_list_title' => 'Schlagwortliste',
  'keyword_msg' => 'Obenstehende Liste ist nicht vollständig - sie enthält keine Wörter aus Titeln oder Beschreibungen. Versuche eine Volltext-Suche.', 
  'edit_keywords' => 'Schlagworte bearbeiten',
  'search in' => 'Suchen in:',
  'ip_address' => 'IP-Adresse',
  'fields' => 'Suchen in',
  'age' => 'Alter',
  'newer_than' => 'neuer als',
  'older_than' => 'älter als',
  'days' => 'Tage(e)',
  'all_words' => 'mit allen Wörtern (UND)',
  'any_words' => 'mit irgendeinem der Wörter (ODER)',
);

}

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
  'page_title' => 'Neue Dateien suchen',
  'select_dir' => 'Wähle Verzeichnis',
  'select_dir_msg' => 'Diese Funktion ermöglicht, mehrere Dateien der Galerie hinzuzufügen, die mit einem FTP-Programm schon auf Deine Webseite hochgeladen wurden.<br /><br />Wähle das Verzeichnis, in das Du die Dateien hochgeladen hast.',
  'no_pic_to_add' => 'Keine Datei zum Hinzufügen gefunden',
  'need_one_album' => 'Du brauchst mindestens ein Album, um dieses Funktion auszuführen',
  'warning' => 'Achtung',
  'change_perm' => 'Das Skript kann nicht in dieses Verzeichnis schreiben, Du musst die Lese-/Schreibberechtigung (chmod) auf 755 oder 777 setzen, bevor Du versuchst, Dateien hinzuzufügen!',
  'target_album' => '<b>Dateien aus dem Verzeichnis &quot;</b>%s<b>&quot; in </b>%s ablegen',
  'folder' => 'Verzeichnis',
  'image' => 'Datei',
  'result' => 'Resultat',
  'dir_ro' => 'Verzeichnis nicht beschreibbar',
  'dir_cant_read' => 'Verzeichnis nicht lesbar',
  'insert' => 'Füge neue Dateien der Galerie hinzu',
  'list_new_pic' => 'Liste neuer Dateien',
  'insert_selected' => 'Markierte Dateien einfügen',
  'no_pic_found' => 'Keine neuen Dateien gefunden',
  'be_patient' => 'Bitte Geduld, das Skript brauchst Zeit, um die Bilder hinzuzufügen',
  'no_album' => 'Kein Album gewählt',
  'result_icon' => 'Klicken für Details oder zum erneut laden', 
  'notes' =>  '<ul>'.
    '<li><b>OK</b> : bedeuted, dass die Datei erfolgreich hinzugefügt wurde'.
    '<li><b>DP</b> : bedeutet, dass die Datei ein Duplikat ist und schon in der Datenbank vorhanden ist'.
    '<li><b>PB</b> : bedeutet, dass die Datei nicht hinzugefügt werden konnte; überprüfe Deine Einstellungen und die Berechtigungen der Verzeichnisse, in dem die Dateien liegen'.
    '<li><b>NA</b> : bedeutet, dass Du kein Album gewählt hast, in das die Dateien eingefügt werden sollen, klicke \'<a href="javascript:history.back(1)">zurück</a>\' und wähle ein Album aus. Wenn kein Album ausgewählt werden kann, dann musst Du erst <a href="albmgr.php">ein Album erzeugen</a>.</li>'.
    '<li>Falls die OK, DP, PB \'Zeichen\' nicht erscheinen, klicke auf die nicht-funktionierenden Bilder, um die Fehlermeldungen von PHP zu sehen'.
    '<li>Wenn Dein Browser in ein Timeout läuft, klicke auf die Aktualisieren-Schaltfläche'.
   '</ul>',
  'select_album' => 'Wähle ein Album',
  'check_all' => 'alle auswählen',
  'uncheck_all' => 'Auswahl aufheben',
  'no_folders' => 'Im Verzeichnis "albums" wurden noch keine Unterverzeichnisse angelegt. Du musst mindestens ein benutzerdefiniertes Unterverzeichnis innerhalb des Ordners "albums" anlegen und Deine Dateien per FTP dorthin hochladen. Du darfst per FTP keine Dateien in die Unterverzeichnisse "userpics" oder "edit" hochladen, da diese für http-uploads und interne Zwecke reserviert sind.',
  'albums_no_category' => 'Alben ohne Kategorie', // album pulldown mod, added by frogfoot
  'personal_albums' => '* Persönliche Alben', // album pulldown mod, added by frogfoot
  'browse_batch_add' => 'Durchsuchbare Oberfläche (empfohlen)',
  'edit_pics' => 'Dateien bearbeiten',
  'edit_properties' => 'Albums-Eigenschaften',
  'view_thumbs' => 'Thumbnail-Ansicht',
);

// ------------------------------------------------------------------------- //
//File send_activation.php
// ------------------------------------------------------------------------- //

if (defined('SEND_ACTIVATION_PHP')) $lang_send_activation_php = array(
  'err_already_logged_in' => 'Du bist schon angemeldet!', //cpg1.5
  'activation_not_required' => 'Diese Webseite erfordert keine Aktiverung per eMail', //cpg1.5
  'err_unk_user' => 'Der gewählte Benutzer existiert nicht!', //cpg1.5
  'resend_act_link' => 'Aktivierungs-Link erneut versenden', //cpg1.5
  'enter_email' => 'Gib Deine eMail-Adresse ein', //cpg1.5
  'submit' => 'Los', //cpg1.5
  'failed_sending_email' => 'Konnte eMail mit Aktivierungs-Link nicht versenden', //cpg1.5
  'activation_email_sent' => 'Eine eMail mit Aktivierungs-Link wurde an %s gesendet. Bitte überprüfe Deinen Posteingang, um den Registrierungsprozess abzuschliessen', //cpg1.5
);

// ------------------------------------------------------------------------- //
// File stat_details.php
// ------------------------------------------------------------------------- //

if (defined('STAT_DETAILS_PHP')) $lang_stat_details_php = array(
  'show_hide' => 'diese Spalte anzeigen/verbergen',
  'title' => 'Statistik-Details', //cpg1.5
  'vote' => 'Bewertungsdetails',
  'hits' => 'Trefferdetails',
  'stats' => 'Bewertungsstatistik',
  'users' => 'Benutzer-Statistik',
  'sdate' => 'Datum',
  'rating' => 'Bewertung',
  'search_phrase' => 'Suchbegriff',
  'referer' => 'Referer',
  'browser' => 'Browser',
  'os' => 'Betriebssystem',
  'ip' => 'IP-Adresse',
  'uid' => 'Benutzer', //cpg1.5
  'sort_by_xxx' => 'Sortieren nach %s',
  'ascending' => 'aufsteigend',
  'descending' => 'absteigend',
  'internal' => 'intern',
  'close' => 'schliessen',
  'hide_internal_referers' => 'interne Verweise verbergen',
  'date_display' => 'Datumsformat',
  'records_per_page' => 'Einträge pro Seite',
  'submit' => 'absenden/aktualisieren',
  'overall_stats' => 'Gesamt-Statistik', //cpg1.5
  'stats_by_os' => 'Statistik nach Betriebssystem', //cpg1.5
  'number_of_hits' => 'Anzahl Treffer', //cpg1.5
  'total' => 'Summe', //cpg1.5
  'stats_by_browser' => 'Statistik nach Browser', //cpg1.5
  'overall_stats_config' => 'Einstellungen Gesamt-Statistik', //cpg1.5
  'stats_config' => 'Einstellungen Statistik', //cpg1.5
  'hit_details'  => 'Detailierte Treffer-Statistiken speichern', //cpg1.5
  'hit_details_explanation'  => 'Detailierte Treffer-Statistiken speichern', //cpg1.5
  'empty_hits_table'  => 'Treffer-Statistiken leeren', //cpg1.5
  'confirm_empty_hits'  => 'Achtung; das Leeren der Treffer-Statistiken kann nicht rückgängig gemacht werden. Wirklich fortfahren?', //cpg1.5 // JS-Alert
  'submit'  => 'absenden', //cpg1.5
  'upd_success' => 'Coppermine-Einstellungen wurden aktualisiert', //cpg1.5
  'votes' => 'Bewertungen', //cpg1.5
  'reset_votes_individual' => 'selektierte Bertungen zurücksetzen', //cpg1.5
  'reset_votes_individual_confirm' => 'Bist Du sicher, dass die selektierten Bewertungen gelöscht werden sollen? Dieser Vorgang kann nicht rückgängig gemacht werden!', //cpg1.5
  'fullscreen' => 'Diese Seite im Vollbild-Modus anzeigen', //cpg1.5
  'back_to_intermediate' => 'Zurück zur Ansicht "Bild in Zwischengrösse"', //cpg1.5
  'records_on_page' => '%s Einträge auf %s Seite(n)', //cpg1.5
  'guest' => 'Gast', //cpg1.5
);

// ------------------------------------------------------------------------- //
// File thumbnails.php
// ------------------------------------------------------------------------- //

// Void

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) $lang_upload_php = array(
  'title' => 'Datei hochladen',
  'custom_title' => 'Benutzer-definiertes Formular',
  'cust_instr_1' => 'Die Anzahl der Upload-Felder kann angepasst werden, darf jedoch die untenstehenden Maximalwerte nicht überschreiten.',
  'cust_instr_2' => 'Anzahl Abfrage-Felder',
  'cust_instr_3' => 'Datei-Upload Felder: %s',
  'cust_instr_4' => 'URI/URL-Upload Felder: %s',
  'cust_instr_5' => 'URI/URL Upload Felder:',
  'cust_instr_6' => 'Datei-Upload Felder:',
  'cust_instr_7' => 'Gib die Anzahl der gewünschten Felder ein und klicke auf \'weiter\'.',
  'reg_instr_1' => 'Unzulässige Aktion bei der Formular-Erzeugung.',
  'reg_instr_2' => 'Du kannst jetzt Dateien mit den untenstehenden Feldern hochladen. Keine Datei darf größer als %s kB sein. ZIP-Dateien, die mit Datei-Upload oder URI/URL-Upload hochgeladen werden, bleiben komprimiert.',
  'reg_instr_3' => 'Um ZIP-Dateien auf dem Server automatisch zu entpacken, verwende die ZIP-Upload Felder.',
  'reg_instr_4' => 'Die URI/URL-Upload Felder müssen dieses Format haben \'http://www.meinseite.de/bilder/beispiel.jpg\'',
  'reg_instr_5' => 'Wenn alle Upload-Felder ausgefüllt sind, klicke auf \'weiter\'.',
  'reg_instr_6' => 'ZIP-Upload (wird entpackt auf Server):',
  'reg_instr_7' => 'Datei-Upload:',
  'reg_instr_8' => 'URI/URL-Upload:',
  'error_report' => 'Fehlerliste',
  'error_instr' => 'Folgende Uploads erzeugten Fehler:',
  'file_name_url' => 'Dateiname/URL',
  'error_message' => 'Fehlermeldung',
  'no_post' => 'Datei durch Formular-Post nicht hochgeladen.',
  'forb_ext' => 'Verbotene Datei-Erweiterung/-endung.',
  'exc_php_ini' => 'Dateigröße größer als Limit in php.ini.',
  'exc_file_size' => 'Dateigröße größer als Coppermine-Einstellungen.',
  'partial_upload' => 'Nur teilweiser Upload.',
  'no_upload' => 'Kein Upload erfolgt.',
  'unknown_code' => 'Unbekannter PHP-Upload-Fehlercode.',
  'no_temp_name' => 'Kein Upload - kein temporärer Name.',
  'no_file_size' => 'Enthält keine Daten/defekt',
  'impossible' => 'Kann nicht verschieben.',
  'not_image' => 'kein Bild/korrupt',
  'not_GD' => 'Keine GD-Erweiterung.',
  'pixel_allowance' => 'maximale Bild-Abmessungen (Pixel-Größe) überschritten.',
  'incorrect_prefix' => 'Ungültige URI/URL Vorsible',
  'could_not_open_URI' => 'Konnte URI nicht öffnen.',
  'unsafe_URI' => 'Sicherheit nicht überprüfbar.',
  'meta_data_failure' => 'Meat-Daten fehlerhaft',
  'http_401' => '401 Fehlende Berechtigung',
  'http_402' => '402 Bezahlung erforderlich',
  'http_403' => '403 Verboten',
  'http_404' => '404 nicht gefunden',
  'http_500' => '500 Interner Server-Fehler',
  'http_503' => '503 Service nicht verfügbar',
  'MIME_extraction_failure' => 'MIME konnte nicht festgestellt werden.',
  'MIME_type_unknown' => 'Unbekannter MIME-Typ',
  'cant_create_write' => 'Kann zu schreibende Datei nicht erzeugen.',
  'not_writable' => 'Kann nicht in zu schreibende Datei speichern.',
  'cant_read_URI' => 'Kann URI/URL nicht lesen',
  'cant_open_write_file' => 'Kann nicht in URI-Datei schreiben.',
  'cant_write_write_file' => 'Kann nicht in zu schreibende URI-Datei speichern.',
  'cant_unzip' => 'Kann nicht entpacken.',
  'unknown' => 'Unbekannter Fehler',
  'succ' => 'Erfolgreiche Uploads',
  'success' => '%s Uploads waren erfolgreich.',
  'add' => 'Klicke auf \'weiter\', um die Dateien den Alben hinzuzufügen.',
  'failure' => 'Upload-Fehler',
  'f_info' => 'Datei-Information',
  'no_place' => 'Die vorhergehende Datei konnte nicht gesetzt werden.',
  'yes_place' => 'Die vorhergehende Datei wurde erfolgreich gesetzt.',
  'max_fsize' => 'Maximal erlaubte Dateigröße ist %s kB',
  'picture' => 'Datei',
  'pic_title' => 'Datei-Titel',
  'description' => 'Datei-Beschreibung',
  'keywords' => 'Stichworte (Trennung mit Komma)<br /><a href="#" onClick="return MM_openBrWindow(\'keyword_select.php\',\'selectKey\',\'width=250, height=400, scrollbars=yes,toolbar=no,status=yes,resizable=yes\')">von Liste einfügen</a>',
  'keywords_sel' =>'Wähle Schlagwort',
  'err_no_alb_uploadables' => 'Leider gibt es kein Album, in das Du Bilder hochladen darfst',
  'place_instr_1' => 'Bitte Dateien jetzt den Alben zuordnen.  Es können jetzt zusätzliche Angaben zu den Dateien gemacht werden.',
  'place_instr_2' => 'Es müssen noch mehr Dateien Alben zugeordnet werden. Klicke \'weiter\'!',
  'process_complete' => 'Alle Dateien wurden erfolgreich Alben zugeordnet.',
  'albums_no_category' => 'Alben ohne Kategorie', //album pulldown mod, added by frogfoot
  'personal_albums' => '* Persönliche Alben', //album pulldown mod, added by frogfoot
  'select_album' => 'Wähle Album', //album pulldown mod, added by frogfoot
  'close' => 'schliessen',
  'no_keywords' => 'Leider keine Schlagworte verfügbar!',
  'regenerate_dictionary' => 'Wörterbuch aktualisieren',
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) {
  $lang_usermgr_php = array(
  'memberlist' => 'Benutzerliste',
  'user_manager' => 'Benutzer verwalten',
  'title' => 'Benutzer verwalten',
  'name_a' => 'Name aufsteigend',
  'name_d' => 'Name absteigend',
  'group_a' => 'Gruppe aufsteigend',
  'group_d' => 'Gruppe absteigend',
  'reg_a' => 'Registrierungsdatum aufsteigend',
  'reg_d' => 'Registrierungsdatum absteigend',
  'pic_a' => 'Dateianzahl aufsteigend',
  'pic_d' => 'Dateianzahl absteigend',
  'disku_a' => 'Speicherplatz-Verbrauch aufsteigend',
  'disku_d' => 'Speicherplatz-Verbrauch absteigend',
  'lv_a' => 'Letzter Seitenbesuch aufsteigendg',
  'lv_d' => 'Letzter Seitenbesuch absteigend',
  'sort_by' => 'Benutzer sortieren nach',
  'err_no_users' => 'Benutzer-Tabelle ist leer!',
  'err_edit_self' => 'Du kannst Dein eigenes Profil hier nicht bearbeiten, benutze dafür den Link \'mein Profil\'',
  'edit' => 'bearbeiten',
  'with_selected' => 'markierte Benutzer:',
  'delete' => 'löschen',
  'delete_files_no' => 'Dateien in öffentlichen Alben behalten (aber anonymisieren)',
  'delete_files_yes' => 'Dateien in öffentlichen Alben ebenfalls löschen',
  'delete_comments_no' => 'Kommentare behalten (aber anonymisieren)',
  'delete_comments_yes' => 'Kommentare ebenfalls löschen',
  'activate' => 'Aktivieren',
  'deactivate' => 'Deaktivieren',
  'reset_password' => 'Passwort zurücksetzen',
  'change_primary_membergroup' => 'Primäre Mitgliedergruppe ändern',
  'add_secondary_membergroup' => 'Sekundäre Mitgliederguppe hinzufügen',
  'name' => 'Benutzername',
  'group' => 'Gruppe',
  'inactive' => 'Inaktiv',
  'operations' => 'Aktion',
  'pictures' => 'Dateien',
  'disk_space_used' => 'Speicherplatzverbrauch',
  'disk_space_quota' => 'Erlaubter Speicherplatz',
  'registered_on' => 'Registriert am',
  'last_visit' => 'Letzter Seitenbesuch',
  'u_user_on_p_pages' => '%d Benutzer auf %d Seite(n)',
  'confirm_del' => 'Willst Du diesen Benutzer wirklich LÖSCHEN? \\nAlle seine Dateien und Alben werden ebenfalls gelöscht.', //js-alert
  'mail' => 'Mail',
  'err_unknown_user' => 'Gewählter Benutzer existiert nicht!',
  'modify_user' => 'Benutzer ändern',
  'notes' => 'Anmerkungen',
  'note_list' => '<li>Wenn Du das derzeitige Passwort nicht ändern willst, lasse das Feld "Passwort" leer',
  'password' => 'Passwort',
  'user_active' => 'Benutzer ist aktiv',
  'user_group' => 'Benutzergruppe',
  'user_email' => 'eMail-Adresse des Benutzers',
  'user_web_site' => 'Webseite des Benutzers',
  'create_new_user' => 'neuen Benutzer anlegen',
  'user_location' => 'Ort',
  'user_interests' => 'Hobbies/Interessen',
  'user_occupation' => 'Beruf/Beschäftigung',
  'user_profile1' => '$user_profile1',
  'user_profile2' => '$user_profile2',
  'user_profile3' => '$user_profile3',
  'user_profile4' => '$user_profile4',
  'user_profile5' => '$user_profile5',
  'user_profile6' => '$user_profile6',
  'latest_upload' => 'neueste Uploads',
  'never' => 'nie',
  'search' => 'Nach Benutzer suchen',
  'submit' => 'Absenden',
  'search_submit' => 'Los!',
  'search_result' => 'Resultate durchsuchen nach: ',
  'alert_no_selection' => 'Du musst zuerst mindestens einen Benutzer auswählen!', //js-alert
  'password' => 'Passwort',
  'select_group' => 'Wähle Gruppe',
  'groups_alb_access' => 'Alben-Berechtigung nach Gruppenzugehörigkeit',
  'category' => 'Kategorie',
  'modify' => 'Ändern?',
  'group_no_access' => 'Diese Gruppe hat keine besondern Berechtigungen',
  'notice' => 'Anmerkung',
  'group_can_access' => 'Album/Alben, auf das/die nur "%s" zugreifen kann',
  'send_login_data' => 'Anmeldungsdaten an diesen Benutzer versenden (Passwort wird per eemail gesendet)', //cpg1.5
  'send_login_email_subject' => 'Deine neuen Zugangsdaten', //cpg1.5
  'failed_sending_email' => 'Die eMail mit den Zugangsdaten konnte nicht versendet werden!', //cpg1.5
);

$lang_send_login_data_email = <<<EOT
Ein neues Benutzerkonto wurde für Dich erzeugt für die Seite {SITE_NAME}.
Du kannst Dich jetzt anmelden unter <a href="{SITE_LINK}">{SITE_LINK}</a> mit dem Benutzernamen "{USER_NAME}" und dem Passwort "{USER_PASS}"

Mit freundlichen Grüssen,

Das Admin-Team von {SITE_NAME}

EOT;
}

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //

if (defined('UTIL_PHP')) {
$lang_util_desc_php = array(
'Erzeugt Titel aus Dateinamen',
'Löscht Titel',
'Erneuert Thumbnails und Dateien in Zwischengröße gemäß aktuellen Einstellungen',
'Löscht Bilder in Original-Größe und ersetzt sie mit Bildern in Zwischengröße',
'Löscht Bilder in Originalgrösse oder Zwischengrösse, um Speicherplatz frei zu geben',
'Löscht verwaiste Kommentare',
'Liest Dateigrössen und Dimensionen erneut ein (falls Du Bilder manuell bearbeitet hast)',
'Setzt Hits-Zähler zurück',
'Zeigt phpinfo an',
'Aktualisert die Datenbank',
'Zeigt Log-Dateien an',
);
$lang_util_php = array(
  'title' => 'Admin-Werkzeuge (Größe ändern)',
  'what_it_does' => 'Was macht dieses Tool',
  'file' => 'Datei',
  'problem' => 'Problem',
  'status' => 'Status',
  'title_set_to' => 'Ändere Titel auf',
  'submit_form' => 'los',
  'updated_succesfully' => 'erfolgreich geändert',
  'error_create' => 'FEHLER beim Erzeugen von',
  'continue' => 'Mehr Bilder durchlaufen',
  'main_success' => 'Die Datei %s wurde erfolgreich als Hauptbild benutzt',
  'error_rename' => 'Fehler beim Umbenennen von %s zu %s',
  'error_not_found' => 'Die Datei %s wurde nicht gefunden',
  'back' => 'zurück zur Auswahl',
  'thumbs_wait' => 'Aktualisiere Thumbnails und/oder Bilder in Zwischengröße, bitte warten...',
  'thumbs_continue_wait' => 'Fortfahren mit der Aktualisierung der Thumbnails und/oder Bilder in Zwischengröße...',
  'titles_wait' => 'Aktualisiere Überschriften, bitte warten...',
  'delete_wait' => 'Lösche Überschriften, bitte warten...',
  'replace_wait' => 'Lösche Originale und ersetze sie mit Bilder in Zwischengröße, bitte warten...',
  'instruction' => 'Kurzanleitung',
  'instruction_action' => 'Wähle Aktion',
  'instruction_parameter' => 'Wähle Parameter',
  'instruction_album' => 'Wähle Album',
  'instruction_press' => 'Klicke %s',
  'update' => 'Thumbnails und/oder Bilder in Zwischengröße aktualisieren',
  'update_what' => 'Was soll aktualisiert werden',
  'update_thumb' => 'Nur Thumbnails',
  'update_pic' => 'Nur Bilder in Zwischengröße',
  'update_both' => 'Sowohl Thumbnails als auch Bilder in Zwischengröße',
  'update_number' => 'Anzahl der Bilder, die pro Klick aktualisiert werden sollen',
  'update_option' => '(Verringere diesen Wert, wenn &quot;Time-Out&quot;-Probleme auftreten sollten)',
  'filename_title' => 'Dateiname &rArr; Bild-Überschrift',
  'filename_how' => 'Wie soll der Dateiname modifiziert werden',
  'filename_remove' => 'Entferne die Endung .jpg und ersetze _ (Unterstrich) mit Leerzeichen',
  'filename_euro' => 'Ändere 2003_11_23_13_20_20.jpg zu 23/11/2003 13:20',
  'filename_us' => 'Ändere 2003_11_23_13_20_20.jpg zu 11/23/2003 13:20',
  'filename_time' => 'Ändere 2003_11_23_13_20_20.jpg zu 13:20',
  'delete' => 'Lösche Bild-Überschriften oder Bilder in Original-Größe',
  'delete_title' => 'Bild-Überschriften löschen',
  'delete_title_explanation' => 'Diese Option löscht alle Titel von allen Dateien in dem angegebenen Album.',
  'delete_original' => 'Bilder in Original-Größe löschen',
  'delete_original_explanation' => 'Diese Option entfernt die Bilder in Originalgröße.',
  'delete_intermediate' => 'Bilder in Zwischengröße löschen',
  'delete_intermediate_explanation' => 'Diese Option löscht alle Bilder in Zwischengröße (normal_).<br />Empfohlen, um Speicherplatz freizugeben, wenn die Option \'Bilder in Zwischengröße erzeugen\' in den Coppermine-Einstellungen deaktiviert wurde NACHDEM Bilder zur Datenbank hinzugefügt wurden.',
  'delete_replace' => 'Lösche die Original-Bilder und ersetze sie mit Bilder in Zwischengröße',
  'titles_deleted' => 'Alle Titel in dem angegebenen Album werden gelöscht',
  'deleting_intermediates' => 'Lösche Bilder in Zwischengröße, bitte warten...',
  'searching_orphans' => 'Suche nach verwaisten Einträgen, bitte warten...',
  'select_album' => 'Wähle Album',
  'delete_orphans' => 'Verwaiste Kommentare löschen',
  'delete_orphans_explanation' => 'Diese Option identifiziert und löscht Kommentare, die mit Dateien verknüpft sind, die nicht mehr in der Datenbank vorhanden sind.<br />Durchläuft alle Alben.',
  'update_full_normal_thumb' => 'Alles... Original-Bild, Bild in Zwischengrösse und Thumbnails', // cpg1.5
  'update_full_normal' => 'Sowohl Bild in Zwischengrösse als auch das Original-Bild (wenn eine Kopie des Originals verfügbar ist)', // cpg1.5
  'update_full' => 'Nur das Original-Bild (wenn eine Kopie des Originals verfügbar ist)',// cpg1.5
  'delete_back' => 'Sicherheitskopie des Original-Bildes löschen (Wasserzeichen-Mod)', // cpg1.5
  'delete_back_explanation' => 'Diese Operation wird die Sicherheitskopie löschen. Dadurch wird etwas Speicherplatz freigegeben, aber als Nachteil wird das Wasserzeichen nicht mehr rückgängig zu machen und dadurch permanent sein!', // cpg1.5
  'finished' => '<br />Aktualisierung der Bilder / Thumbnails abgeschlossen<br />', // cpg1.5
  'autorefresh' => ' Automatische Aktualisierung (kein Klick auf "weiter" mehr notwendig)<br /><br />', // cpg1.5
  'refresh_db' => 'Informationen über Dateigrößen und -abmessungen erneuern.',
  'refresh_db_explanation' => 'Diese Option liest die Dateigrößen und -abmessungen erneut ein. Benutze sie, wenn die Speicherplatz-Anzeige unkorrekt erscheint oder wenn Du die Dateien manuell verändert hast..',
  'reset_views' => 'Hits-Zähler zurücksetzen',
  'reset_views_explanation' => 'Setzt alle "Datei x mal angesehen" Zähler auf Null im angegebenen Album.',
  'orphan_comment' => 'verwaiste Kommentare gefunden',
  'delete' => 'löschen',
  'delete_all' => 'alle löschen',
  'delete_all_orphans' => 'Alle verwaisten Kommentare löschen?',
  'comment' => 'Kommentar: ',
  'nonexist' => 'Bezug auf nicht-existierende Datei # ',
  'phpinfo' => 'phpinfo anzeigen',
  'phpinfo_explanation' => 'Zeigt technische Informationen über Deinen Server an.<br /> - Möglicherweise wirst Du nach diesen Informationen gefragt, wenn Du im Coppermine-Forum um Hilfe bittest.',
  'update_db' => 'Datenbank aktualisieren',
  'update_db_explanation' => 'Wenn Du Coppermine-Dateien ersetzt hast, eine Modifikation oder ein Upgrade von einer frühreren Version von Coppermine durchgeführt hast, lasse diese Datenbank-Aktualisierung einmal laufen, um die möglicherweise notwendigen Änderungen an der Datenbank durchzuführen bzw. fehlende Tabellen zu erzeugen.',
  'view_log' => 'Log-Dateien anzeigen',
  'view_log_explanation' => 'Coppermine kann verschiedene Benutzer-Aktionen protokollieren. Diese Protokolle können hier angesehen werden, wenn die Aufzeichnung von Log-Dateien in den Coppermine-<a href="admin.php">Einstellungen</a> aktiviert wurde.',
  'versioncheck' => 'Versions-Check',
  'versioncheck_explanation' => 'Überprüfe die Versionen Deiner Dateien um herauszufinden, ob alle Dateien bei einem Update korrekt ersetzt wurden, oder ob die Coppermine-Dateien nach der Veröffentlichung eines Pakets aktualisiert wurden.',
  'bridgemanager' => 'Bridge-Assistent',
  'bridgemanager_explanation' => 'Assistent zur Integration der Benutzerverwaltung von Coppermine mit einer anderen Applikation (z.B. einem Forum) - sogenanntes "Bridging".',
  'overall_stats' => 'Gesamt-Statistik', //cpg1.5
  'overall_stats_explanation' => 'Trefferstatistiken nach Browser und Betriebssystem anzeigen (wenn entsprechende Option in den Einstellungen aktiviert sind).', //cpg1.5
);
}

// ------------------------------------------------------------------------- //
// File versioncheck.php
// ------------------------------------------------------------------------- //

if (defined('VERSIONCHECK_PHP')) $lang_versioncheck_php = array(
  'title' => 'Versions-Check',
  'what_it_does' => 'Diese Seite ist für Benutzer gedacht, die ihre Version von Coppermine aktualisiert haben. Dieses Skript durchläuft alle Dateien auf dem Webserver und versucht festzustellen, ob Deine lokalen Dateiversionen mit denen der Referenz auf http://coppermine.sourceforge.net übereinstimmen. Dadurch werden die Dateien, die irrtümlich nicht aktualisiert wurden angezeigt.<br />Alles, was korrigiert werden muss wird in rot angezeigt. Einträge in gelb müssen einer näheren Betrachtung unterzogen werden. Einträge in grün (oder Deiner Standard-Schriftfarbe) sind OK.<br />Klicke auf die Hilfe-Icons für Details.',
  'online_repository_unable' => 'Konnte nicht mit Referenz-Datei abgleichen',
  'online_repository_noconnect' => 'Coppermine konnte sich nicht mit der Referenz-Datei abzugleichen. Dies kann 2 Gründe haben:',
  'online_repository_reason1' => 'die Referenzdatei ist derzeit nicht online - überprüfe, ob Du mit dem Browser diese Seite anzeigen kannst: %s - falls nicht, versuche später noch einmal, den Versions-Check durchzuführen.',
  'online_repository_reason2' => 'Auf Deinem Webserver ist PHP so konfiguriert, dass %s deaktiviert ist (Standard-mässig ist diese Option aktiviert). Falls Du den Webserver administrieren kannst, aktiviere diese Option in Deiner <i>php.ini</i> (erlaube zumindest, dass die globale Einstellung mit %s temporär umgangen werden kann). Falls Du jedoch auf einem fremden Server gehostet bist musst Du wahrscheinlich damit leben, dass Du Deine Dateien nicht online vergleichen kannst. In diesem Fall wird diese Seite nur die Dateiversionen mit denen der Ditribution vergleichen - spätere Updates werden nicht in Betracht gezogen.',
  'online_repository_skipped' => 'Verbindung mit der Referenz-Datei übersprungen',
  'online_repository_to_local' => 'Das Skript benutzt jetzt die lokale Kopie der Versions-Dateien. Die Daten sind möglicherweise ungenau, falls Du Coppermine aktualisiert und nicht alle Dateien hochgeladen hast. Änderungen an Dateiversionen, die nach der Veröffentlichung des Pakets vorgenommen wurden werden nicht berücksichtigt.',
  'local_repository_unable' => 'Das Skript konnte sich nicht mit der Referenzdatei auf Deinem Server verbinden',
  'local_repository_explanation' => 'Coppermine konnte sich nicht mit der Refernzdatei %s auf Deinem Webserver verbinden. Das bedeutet wahrscheinlich, dass Du die Refernzdatei nicht auf den Server hochgeladen hast. Erledige das nun und versuche dann, diese Seite erneut zu laden (klicke auf "aktualisieren").<br />Falls das immer noch fehl schlägt, dann hat Dein Webhost möglicherweise Teile der <a href="http://www.php.net/manual/de/ref.filesystem.php">Dateifunktionen von PHP</a> komplett deaktiviert. In diesem Fall kannst Du dieses Tool leider gar nicht benutzen.',
  'coppermine_version_header' => 'Installierte Coppermine-Version',
  'coppermine_version_info' => 'Du hast derzeit installiert: %s',
  'coppermine_version_explanation' => 'Falls Du der Meinung sein solltest, dass das falsch ist und Du eine neuere Version von Coppermine haben solltest, dann hast Du wahrscheinlich nicht die aktuellste Version der Datei <i>include/init.inc.php</i> hochgeladen',
  'version_comparison' => 'Versions-Vergleich',
  'folder_file' => 'Verzeichnis/Datei',
  'coppermine_version' => 'cpg-Version',
  'file_version' => 'Datei-Version',
  'webcvs' => 'web SVN',
  'writable' => 'beschreibbar',
  'not_writable' => 'nicht beschreibbar',
  'help' => 'Hilfe',
  'help_file_not_exist_optional1' => 'Datei/Verzeichnis existiert nicht',
  'help_file_not_exist_optional2' => 'Die Datei / das Verzeichnis %s wurde auf Deinem Server nicht  gefunden. Obwohl sie optional ist solltest Du sie auf Deinen Server hochladen (benutze dazu Dein FTP-Programm), zumindest wenn Probleme auftreten.',
  'help_file_not_exist_mandatory1' => 'Datei/Verzeichnis existiert nicht',
  'help_file_not_exist_mandatory2' => 'Datei/Verzeichnis %s wurde auf dem Server nicht gefunden, obwohl es zwingend benötigt wird. Lade die Datei (mit Hilfe Deines FTP-Programms) auf Deinen Webserver hoch..',
  'help_no_local_version1' => 'Keine lokale Dateiversion',
  'help_no_local_version2' => 'Das Skript konnte die Versionsinformation aus der lokalen Datei-Version nicht extrahieren - Deine Datei ist entweder veraltet, oder Du hast die Datei verändert und dabei den Datei-Header geändert. Es ist empfehlenswert, die Datei zu aktualisieren.',
  'help_local_version_outdated1' => 'Lokale Version veraltet',
  'help_local_version_outdated2' => 'Deine Version der Datei scheint von einer älteren Version von Coppermine zu stammen (Du hast wahrscheinlich ein Upgrade durchgeführt). Ersetze auch diese Datei mit der aktuelleren Version.',
  'help_local_version_na1' => 'Konnte SVN-Versions-Information nicht extrahieren',
  'help_local_version_na2' => 'Das Skript konnte die SVN-Versions-Information nicht aus der lokalen Datei auf Deinem Webserver extrahieren. Du solltest diese Datei aktualisieren.',
  'help_local_version_dev1' => 'Entwicklungs-Version',
  'help_local_version_dev2' => 'Die Datei auf Deinem Webserver scheint neuer zu sein als Deine Coppermine-Version. Du benutzt entweder eine Entwicklungs-Version (nur empfohlen für erfahrene Anwender), oder Du hast Deine Coppermine-Installation aktualisiert und die Datei include/init.inc.php nicht hochgeladen.',
  'help_not_writable1' => 'Verzeichnis nicht beschreibbar',
  'help_not_writable2' => 'Ändere die Berechtigungen (CHMOD), um dem Skript Schreibrechte auf den Ordner %s und alles darin befindliche zu gewähren.',
  'help_writable1' => 'Verzeichnis beschreibbar',
  'help_writable2' => 'Das Verzeichnis %s ist beschreibbar. Dies stellt ein unnötiges Sicherheitsrisiko dar, Coppermine benötigt nur Lese- und Ausführungsrechte.',
  'help_writable_undetermined' => 'Das Skript konnte nicht feststellen, ob das Verzeichnis beschreibbar ist.',
  'your_file' => 'Deine Datei',
  'reference_file' => 'Referenz-Datei',
  'summary' => 'Zusammenfassung',
  'total' => 'Summe der überprüften Verzeichnisse/Dateien',
  'mandatory_files_missing' => 'Fehlende verbindlich benötigte Dateien',
  'optional_files_missing' => 'Fehlende optionale Dateien',
  'files_from_older_version' => 'Dateien, die von veralteten Coppermine-Versionen stammen',
  'file_version_outdated' => 'Veraltete Datei-Versionen',
  'error_no_data' => 'Das Skript hat einen Fehler verursacht und konnte keine Versionsinformationen auslesen. Sorry.', 
  'go_to_webcvs' => 'gehe zu %s',
  'options' => 'Optionen',
  'show_optional_files' => 'optionale Verzeichnisse/Dateien anzeigen',
  'show_mandatory_files' => 'verbindlich benötigte Dateien anzeigen',
  'show_file_versions' => 'Dateiversionen anzeigen',
  'show_errors_only' => 'Nur Verzeichnisse und Dateien mit Fehlern anzeigen',
  'show_permissions' => 'Berechtigungen anzeigen',
  'show_condensed_output' => 'Reduzierte Ausgabe (zur einfacheren Erstellung von Screenshots)',
  'coppermine_in_webroot' => 'Coppermine ist im Wurzelverzeichnis der Domäne installiert',
  'connect_online_repository' => 'Verbindungsaufbau zur Referenzdatei versuchen',
  'show_additional_information' => 'Zusatzinformationen anzeigen',
  'no_webcvs_link' => 'Web-SVN-Links nicht anzeigen',
  'stable_webcvs_link' => 'Web-SVN-Links zur "stable-branch" anzeigen',
  'devel_webcvs_link' => 'Web-SVN-Links zur "devel-branch" anzeigen',
  'submit' => 'Änderungen durchführen / aktualisieren',
  'reset_to_defaults' => 'Standard-Einstellungen wieder herstellen',
);

// ------------------------------------------------------------------------- //
// File view_log.php 
// ------------------------------------------------------------------------- //

if (defined('VIEWLOG_PHP')) $lang_viewlog_php = array(
  'delete_all' => 'Alle Logs löschen',
  'delete_this' => 'Dieses Log löschen',
  'view_logs' => 'Logs anzeigen',
  'no_logs' => 'Keine Logs vorhanden',
);


// ------------------------------------------------------------------------- //
// File xp_publish.php
// ------------------------------------------------------------------------- //

if (defined('XP_PUBLISH_PHP')) {

$lang_xp_publish_client = <<<EOT
<h1>XP Web Publishing Assistent</h1><p>Dieses Modul ermöglicht es, den <b>Windows XP</b> web publishing Assistenten mit Coppermine zu benutzen.</p><p>Der zugrunde liegende Code basiert auf einem Artikel von
EOT;

$lang_xp_publish_required = <<<EOT
<h2>Was wird benötigt</h2><ul><li>Windows XP, damit der Assistent zur Verfügung steht.</li><li>Eine funktionierende Coppermine-Installation, bei der das Hochladen von Dateien funktioniert.</b></li></ul><h2>Wie installiere ich die nötige Software auf meinem Rechner</h2><ul><li>Rechts-Klicke auf
EOT;

$lang_xp_publish_select = <<<EOT
Wähle &quot;Zeil speichern unter..&quot;. Speichere die Datei auf Deiner Festplatte. Überprüfe beim Speichern, dass der vorgeschlagene Name  <b>cpg_###.reg</b> lautet (die ###-Symbole repräsentieren einen numerischen Zeitstempel). Ändere ggf. den Namen ab (aber lasse die Zahlen so, wie sie sind). Nach erfolgtem Download, doppelklicke auf die heruntergeladene Datei, um den Coppermine-Server beim Web Publishing-Assistenten zu registrieren.</li></ul>
EOT;

$lang_xp_publish_testing = <<<EOT
<h2>Testen</h2><ul><li>Markiere einige Grafik-Dateien im Windows Explorer und klicke dann auf <b>xxx im Internet veröffentlichen</b> in der linken Leiste des Explorers.</li><li>Bestätige Deine Dateiauswahl. Klicke auf <b>weiter</b>.</li><li>In der Liste der zur Verfügung stehenden Dienste, wähle Deine Foto-Galerie (der Eintrag hat den Namen Deiner Galerie). Falls der Diesnt nicht erscheint, überprüfe, ob Du <b>cpg_pub_wizard.reg</b> wie oben beschrieben installiert hast.</li><li>Gib Deine Zugangsinformationen ein, falls notwendig.</li><li>Wähle ein Album als Ziel der Bilder oder erzeuge ein neues Album.</li><li>Klicke auf <b>weiter</b>. Der Upload Deiner Bilder startet jetzt.</li><li>Wenn der Upload beendet ist, überprüfe auf der Galerie-Seite, dass alle Bilder korrekt hochgeladen wurden.</li></ul>
EOT;

$lang_xp_publish_notes = <<<EOT
<h2>Anmerkungen :</h2><ul><li>Wenn der Upload-Vorgang erst einmal gestartet ist kann der Assistent keine Fehlermeldungen anzeigen, die vom Skript generiert werden; daher kann man nicht wissen, ob ein Upload erfolgreich war oder nicht, außer durch Besuch der Coppermine-Galerie.</li><li>Wenn ein Upload fehlschlägt, aktiviere den &quot;Debug-Modus&quot; in den Coppermine-Einstellungen, lade ein einzelnes Bild hoch und überprüfe dann die Fehlermeldungen in der
EOT;

$lang_xp_publish_flood = <<<EOT
Datei, die im Coppermine-Verzeichnis auf Deinem Server liegt.</li><li>Um zu vermeiden, dass die Galerie überflutet wird mit Uploads durch den Assistenten können nur die <b>Administratoren der Galerie</b> und <b>Benutzer, die eigene Alben haben dürfen</b> dieses Feature nutzen.</li>
EOT;



$lang_xp_publish_php = array(
  'title' => 'Coppermine - XP Web Publishing Assistent',
  'welcome' => 'Willkommen <b>%s</b>,',
  'need_login' => 'Um diesen Assistenten zu nutzen musst Du Dich bei der Galerie mit Hilfe Deines Browsers (IE) anmelden.<p/><p>Vergiss nicht, die Option &quot;<b>Immer angemeldet bleiben</b>&quot; bei der Anmeldung zu aktivieren, wenn vorhanden.',
  'no_alb' => 'Leider gibt es keine Alben, in die Du berechtigt bist mit diesem Assistenten Bilder hochzuladen.',
  'upload' => 'Lade Deine Bilder in ein bestehendes Album hoch',
  'create_new' => 'Erstelle ein neues Album für Deine Bilder',
  'album' => 'Album',
  'category' => 'Kategorie',
  'new_alb_created' => 'Dein neues Album &quot;<b>%s</b>&quot; wurde erstellt.',
  'continue' => 'Klicke auf &quot;Weiter&quot;, um Deine Bilder hochzuladen',
  'link' => 'dieser Link',
);
}
?>