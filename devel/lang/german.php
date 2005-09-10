<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2005 Coppermine Dev Team
  v1.1 originally written by Gregory DEMAR

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation; either version 2 of the License, or
  (at your option) any later version.
  ********************************************
  Coppermine version: 1.4.1
  $Source$
  $Revision$
  $Author$
  $Date$
**********************************************/

if (!defined('IN_COPPERMINE')) { die('Not in Coppermine...');}

// info about translators and translated language
$lang_translation_info = array(
  'lang_name_english' => 'German', //cpg1.4
  'lang_name_native' => 'Deutsch', //cpg1.4
  'lang_country_code' => 'de', //cpg1.4
  'trans_name'=> 'Joachim Müller',
  'trans_email' => 'gaugau@users.sourceforge.net',
  'trans_website' => 'http://gaugau.de/',
  'trans_date' => '2005-07-10',
);

$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('Bytes', 'KB', 'MB');

// Day of weeks and months
$lang_day_of_week = array('So', 'Mo', 'Di', 'Mi', 'Do', 'Fr', 'Sa');
$lang_month = array('Januar', 'Februar', 'März', 'April', 'Mai', 'Juni', 'Juli', 'August', 'September', 'Oktober', 'November', 'Dezember');

// Some common strings
$lang_yes = 'Ja';
$lang_no  = 'Nein';
$lang_back = 'zurück';
$lang_continue = 'weiter';
$lang_info = 'Information';
$lang_error = 'Fehler';
$lang_check_uncheck_all = 'alle selektieren/de-selektieren'; //cpg1.4

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$album_date_fmt =    '%d.%B %Y';
$lastcom_date_fmt =  '%d.%m.%y um %H:%M';
$lastup_date_fmt = '%d.%B %Y';
$register_date_fmt = '%d.%B %Y';
$lasthit_date_fmt = '%d.%B %Y um %H:%M';
$comment_date_fmt =  '%d.%B %Y um %H:%M';
$log_date_fmt = '%d.%B %Y um %H:%M'; //cpg1.4

// For the word censor
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*', 'arsch*', 'fick*', 'fotze', 'votze');

$lang_meta_album_names = array(
  'random' => 'Zufalls-Bilder',
  'lastup' => 'neueste Dateien',
  'lastalb'=> 'Zuletzt aktualisierte Alben',
  'lastcom' => 'neueste Kommentare',
  'topn' => 'am meisten angesehen',
  'toprated' => 'am besten bewertet',
  'lasthits' => 'zuletzt angesehen',
  'search' => 'Suchergebnisse',
  'favpics'=> 'Favoriten',  //cpg1.4
);

$lang_errors = array(
  'access_denied' => 'Du hast kein Recht, diese Seite anzusehen.',
  'perm_denied' => 'Du hast nicht das Recht, diese Operation auszuführen.',
  'param_missing' => 'Das Skript wurde ohne den/die erforderlichen Parameter aufgerufen.',
  'non_exist_ap' => 'Das gewählte Album bzw. die gewählte Datei existiert nicht!',
  'quota_exceeded' => 'Speicherplatz erschöpft<br /><br />Du hast ein Speicherlimit von [quota] kB, Deine Dateien belegen zur Zeit [space] kB, das Hinzufügen dieser Datei würde Deinen Speicherplatz überschreiten.',
  'gd_file_type_err' => 'Bei Verwendung der GD-Bibliothek sind nur die Dateitypen JPG und PNG erlaubt.',
  'invalid_image' => 'Das Bild, das Du hochgeladen hast, ist beschädigt oder kann nicht von der GD-Bibliothek verarbeitet werden',
  'resize_failed' => 'Kann Thumbnail nicht erzeugen.',
  'no_img_to_display' => 'Keine Datei zum Anzeigen vorhanden (oder Du hast keine Berechtigung, das Album zu sehen)',
  'non_exist_cat' => 'Die gewählte Kategorie existiert nicht',
  'orphan_cat' => 'Eine Kategorie besitzt ein nicht-existierendes Eltern-Element, benutze den Kategorie-Manager, um das Problem zu beheben.',
  'directory_ro' => 'Das Verzeichnis \'%s\' ist nicht beschreibbar, die Dateien können nicht gelöscht werden',
  'non_exist_comment' => 'Der gewählte Kommentar existiert nicht.',
  'pic_in_invalid_album' => 'Die Datei befindet sich in einem nicht-existierenden Album (%s)!?',
  'banned' => 'Du bist zur Zeit von dieser Seite verbannt.',
  'not_with_udb' => 'Diese Funktion ist innerhalb von Coppermine deaktiviert, weil sie in die Forums-Software integriert ist. Entweder wird das, was Du gerade zu tun versucht hast, in dieser Konfiguration nicht unterstützt oder die Funktion sollte von der Forums-Software übernommen werden.',
  'offline_title' => 'Wartungsmodus',
  'offline_text' => 'Die Galerie ist zur Zeit im Wartungsmodus - schau später nochmal vorbei!', //cpg1.3.0
  'ecards_empty' => 'Es können derzeit keine eCard-Einträge gefunden werden. Überprüfe, ob die Aufzeichung von eCards in den Einstellungen aktivert wurde!',
  'action_failed' => 'Aktion fehlgeschlagen. Coppermine konnte die gewünschte Aktion nicht ausführen.', //cpg1.3.0
  'no_zip' => 'Die zum Verarbeiten von ZIP-Dateien notwendigen libraries sind auf dem Server nicht verfügbar. Setze Dich mit dem Server-Admin in Verbindung.',
  'zip_type' => 'Keine Berechtigung für den Upload von ZIP-Dateien.',
  'database_query' => 'Beim Ausführen einer Datenbank-Abfrage ist ein Fehler aufgetreten', //cpg1.4
  'non_exist_comment' => 'Der gewählte Kommentar existiert nicht', //cpg1.4
);

$lang_bbcode_help_title = 'Bulletin Board code Hilfe'; //cpg1.4
$lang_bbcode_help = 'Du kannst klickbare Links und Formatierung in diesem Feld anwenden durch die Verwendung folgender bbcode-Befehle: <li>[b]Fett[/b] =&gt; <b>Fett</b></li><li>[i]Kursiv[/i] =&gt; <i>Kursiv</i></li><li>[url=http://deineseite.com/]Url Text[/url] =&gt; <a href="http://deineseite.com">Url Text</a></li><li>[email]benutzer@domain.com[/email] =&gt; <a href="mailto:benutzer@domain.com">benutzer@domain.com</a></li><li>[color=red]Beispieltext[/color] =&gt; <span style="color:red">Beispieltext</span></li><li>[img]http://coppermine.sf.net/demo/images/red.gif[/img] => <img src="../images/red.gif" border="0" alt="" /></li>'; //cpg1.4

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
  'my_prof_title' => 'Gehe zu meiner Profil', //cpg1.4
  'my_prof_lnk' => 'Mein Profil',
  'adm_mode_title' => 'In den Admin-Modus wechseln',
  'adm_mode_lnk' => 'Admin-Modus',
  'usr_mode_title' => 'In den Benutzer-Modus wechseln',
  'usr_mode_lnk' => 'Benutzer-Modus',
  'upload_pic_title' => 'Datei in ein Album hochladen',
  'upload_pic_lnk' => 'Datei hochladen',
  'register_title' => 'Erzeuge ein Benutzerkonto',
  'register_lnk' => 'Registrieren',
  'login_title' => 'melde mich an', //cpg1.4
  'login_lnk' => 'Anmelden',
  'logout_title' => 'Melde mich ab', //cpg1.4
  'logout_lnk' => 'Abmelden',
  'lastup_title' => 'Zeige neueste Uploads an', //cpg1.4
  'lastup_lnk' => 'Neueste Uploads',
  'lastcom_title' => 'Zeige die neuesten Kommentare an', //cpg1.4
  'lastcom_lnk' => 'Neueste Kommentare',
  'topn_title' => 'Zeige die am meisten angesehenen Dateien an', //cpg1.4
  'topn_lnk' => 'Am meisten angesehen',
  'toprated_title' => 'Zeige die am besten bewerteten Dateien an', //cpg1.4
  'toprated_lnk' => 'Am besten bewertet',
  'search_title' => 'Durchsuche die Galerie', //cpg1.4
  'search_lnk' => 'Suche',
  'fav_title' => 'Zeige meine Favoriten an', //cpg1.4
  'fav_lnk' => 'Meine Favoriten',
  'memberlist_title' => 'Benutzerliste anzeigen',
  'memberlist_lnk' => 'Benutzerliste',
  'faq_title' => 'Häufig gestellte Fragen (Frequently Asked Questions) zur Galerie &quot;Coppermine&quot;',
  'faq_lnk' => 'FAQ',
);

$lang_gallery_admin_menu = array(
  'upl_app_title' => 'Neu hochgeladene Dateien bestätigen', //cpg1.4
  'upl_app_lnk' => 'Upload-Bestätigung',
  'admin_title' => 'Gehe zur Konfiguration', //cpg1.4
  'admin_lnk' => 'Einstellungen', //cpg1.4
  'albums_title' => 'Gehe zur Alben-Konfiguration', //cpg1.4
  'albums_lnk' => 'Alben',
  'categories_title' => 'Gehe zur Kategorien-Konfiguration', //cpg1.4
  'categories_lnk' => 'Kategorien',
  'users_title' => 'Gehe zur Benutzer-Konfiguration', //cpg1.4
  'users_lnk' => 'Benutzer',
  'groups_title' => 'Gehe zur Gruppen-Konfiguration', //cpg1.4
  'groups_lnk' => 'Gruppen',
  'comments_title' => 'Zeige alle Kommentare zur Bearbeitung an', //cpg1.4
  'comments_lnk' => 'Kommentare bearbeiten',
  'searchnew_title' => 'Gehe zur Stapel-Bearbeitung hochgeladener Dateien', //cpg1.4
  'searchnew_lnk' => 'Batch-hinzufügen',
  'util_title' => 'Gehe zu den Admin-Werkzeugen', //cpg1.4
  'util_lnk' => 'Admin-Werkzeuge',
  'key_title' => 'Gehe zum Schlagwort-Register', //cpg1.4
  'key_lnk' => 'Schlagwort-Register', //cpg1.4
  'ban_title' => 'Gehe zur Konfiguration der Verbannungen', //cpg1.4
  'ban_lnk' => 'Benutzer verbannen',
  'db_ecard_title' => 'Bisher gesendete eCards anzeigen', //cpg1.4
  'db_ecard_lnk' => 'eCards anzeigen',
  'pictures_title' => 'Bestimme die Reihenfolge von Bildern in Alben', //cpg1.4
  'pictures_lnk' => 'Meine Bilder sortieren', //cpg1.4
  'documentation_lnk' => 'DoKumentation', //cpg1.4
  'documentation_title' => 'Coppermine-Handbuch', //cpg1.4
);

$lang_user_admin_menu = array(
  'albmgr_title' => 'Meine Alben erzeugen/anordnen', //cpg1.4
  'albmgr_lnk' => 'Alben erzeugen/anordnen',
  'modifyalb_title' => 'Meine Alben bearbeiten',  //cpg1.4
  'modifyalb_lnk' => 'Meine Alben bearbeiten',
  'my_prof_title' => 'gehe zu meinem persönlichen Profil', //cpg1.4
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
  'position' => 'Position', //cpg1.4
  'sort_pa' => 'Aufsteigend nach Position sortieren', //cpg1.4
  'sort_pd' => 'Absteigend nach Position sortieren', //cpg1.4
  'download_zip' => 'Als ZIP-Datei herunterladen',
  'pic_on_page' => '%d Dateien auf %d Seite(n)',
  'user_on_page' => '%d Benutzer auf %d Seite(n)',
  'enter_alb_pass' => 'Gib das Passwort für das Album ein', //cpg1.4
  'invalid_pass' => 'Ungültiges Passwort', //cpg1.4
  'pass' => 'Passwort', //cpg1.4
  'submit' => 'Absenden', //cpg1.4
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
  'report_title' => 'Diese Datei dem Administrator melden', //cpg1.4
  'go_album_end' => 'Zum Ende gehen', //cpg1.4
  'go_album_start' => 'Zum Anfang zurückkehren', //cpg1.4
  'go_back_x_items' => 'gehe %s Einträge zurück', //cpg1.4
  'go_forward_x_items' => 'gehe %s Einträge weiter', //cpg1.4
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
  'filename' => 'Dateiname : ',
  'filesize' => 'Dateigröße : ',
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
  'copy_and_paste_instructions' => 'Wenn Du Hilfe im Coppermine-Forum suchen willst, kopiere diese Debug-Ausgabe in Deinen Beitrag im Forum. Ersetze eventuell vorhandenen Passwörter in den Queries durch ***.<br />Anmerkung: Diese Ausgabe erfolgt nur zur Information und bedeutet nicht, dass ein Fehler in der Galerie vorliegt.', //cpg1.4
  'phpinfo' => 'phpinfo anzeigen',
  'notices' => 'Notices', //cpg1.4
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
  'version_alert' => 'Nicht unterstützte Version!', //cpg1.4
  'no_stable_version' => 'Du betreibst Coppermine version  %s (%s), das nur für erfahrene Benutzer gedacht ist - für diese Version gibt es keinen Support oder Funktions-Garantien. Benutze sie auf eigenes Risiko oder downgrade auf die aktuellste stabile Version, wenn Du Support brauchst!', //cpg1.4
  'gallery_offline' => 'Die Galerie ist zur Zeit im Wartungs-Modus und ist nur für Dich als Admin zugänglich. Vergiss nicht, sie wieder aus dem Wartungs-Modus in den "normalen" Modus zurück zu schalten, wenn Deine Wartungsarbeiten beendet sind.', //cpg1.4
);

$lang_create_tabs = array(
  'previous' => 'vorherige', //cpg1.4
  'next' => 'nächste', //cpg1.4
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
  'error_wakeup' => "Konnte das Plugin '%s' nicht aktivieren", //cpg1.4
  'error_install' => "Konnte das Plugin '%s' nicht installieren", //cpg1.4
  'error_uninstall' => "Konnte das Plugin '%s' nicht de-installieren", //cpg1.4
  'error_sleep' => "Konnte das Plugin '%s' nicht de-aktivieren.<br />", //cpg1.4
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
// File mode.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('MODE_PHP')) $lang_mode_php = array(
  0 => 'Beende Admin-Modus...',
  1 => 'Starte Admin-Modus...',
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
  'title' => 'Benutzer verbannen', //cpg1.4
  'user_name' => 'Benutzername', //cpg1.4
  'ip_address' => 'IP-Adresse', //cpg1.4
  'expiry' => 'läuft ab am (leer bedeutet permanent)', //cpg1.4
  'edit_ban' => 'Änderungen speichern', //cpg1.4
  'delete_ban' => 'Löschen', //cpg1.4
  'add_new' => 'Neuen Bann hinzufügen', //cpg1.4
  'add_ban' => 'Hinzufügen', //cpg1.4
  'error_user' => 'Kann angegebenen Benutzer nicht finden', //cpg1.4
  'error_specify' => 'Du musst entweder einen Benutzer oder eine IP-Adresse angeben', //cpg1.4
  'error_ban_id' => 'Ungültige Verbannungs-ID!', //cpg1.4
  'error_admin_ban' => 'Du kannst DIch nicht selbst verbannen!', //cpg1.4
  'error_server_ban' => 'Du wolltest Deinen eigenen Server verbannen? Ts ts, das kann ich nicht zulassen...', //cpg1.4
  'error_ip_forbidden' => 'Du kannst diese IP-Adresse nicht verbannen - sie ist sowieso nicht route-bar (private)!<br />Wenn Du Verbannungen für private IP-Adressen erlauben möchtest, dann erlaube das in Deinen <a href="admin.php">Einstellungen</a> (macht nur Sinn, wenn Coppermine in einem LAN läuft).', //cpg1.4
  'lookup_ip' => 'IP-Adresse nachschlagen', //cpg1.4
  'submit' => 'los!', //cpg1.4
  'select_date' => 'Wähle Datum', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File bridgemgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('BRIDGEMGR_PHP')) $lang_bridgemgr_php = array(
  'title' => 'Bridge-Assistent',
  'warning' => 'Warnung: bevor Du diesen Assitenten benutzt muss Dir klar sein, dass Sicherheits-relevante Daten über HTML-Formulare versendet werden. Führe den Assitenten nur auf Deinem eigenen PC aus (nicht auf einem öffentlichen Rechner wie beispielsweise in einem Internet-Café), und lösche danach auf jeden Fall Deinen Browser-Cahce und Deine temporären Internet-Dateien, sonst haben andere vielleicht Zugriff zu diesen Daten!',
  'back' => 'zurück',
  'next' => 'weiter',
  'start_wizard' => 'Starte den Bridge-Assistenten',
  'finish' => 'Fertigstellen',
  'hide_unused_fields' => 'unbenutze Formular-Felder verbergen (empfohlen)',
  'clear_unused_db_fields' => 'ungültige Datenbank-Einträge löschen (empfohlen)',
  'custom_bridge_file' => 'der Name Deiner benutzerdefinierten Bridge-Datei (Wenn der Dateiname  <i>meinedatei.inc.php</i> lautet, dann gib <i>meinedatei</i> in diesem Feld ein)',
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
  'full_forum_url_explanation' => 'Vollständige Internet-Adresse Deines Forums (einschließlich http:// , z.B. http://www.yourdomain.tld/forum)',
  'relative_path_of_forum_from_webroot' => 'Relativer Pfad zum Forum',
  'relative_path_of_forum_from_webroot_explanation' => 'Relativer Pfad zu Deinem Forum vom Wurzelverzeichnis (webroot) aus gesehen (Beispiel: wenn Dein Forum unter http://www.meineseite.tld/forum/ ist, dann gib hier &quot;/forum/&quot; in das Feld ein)',
  'relative_path_to_config_file' => 'Relativer Pfad zur Konfigurations-Datei Deines Forums',
  'relative_path_to_config_file_explanation' => 'Relativer Pfad zu Deinem Forum, von Deinem Coppermine-Verzeichnis aus gesehen (z.B. &quot;../forum/&quot; wenn Dein Forum unter http://www.deineseite.tld/forum/ ist und Coppermine unter http://www.deineseite.tld/gallery/)',
  'cookie_prefix' => 'Cookie-Vorsilbe',
  'cookie_prefix_explanation' => 'Der Cookie-Name Deines Forums',
  'table_prefix' => 'Tabellen-Vorsilbe',
  'table_prefix_explanation' => 'Die Vorsible (Präfix) der Tabellen Deines Forums, die Du bei der Einrichtung Deines Forums festgelegt hast.',
  'user_table' => 'Benutzer-Tabelle',
  'user_table_explanation' => '(normalerweise sind die vorgeschlagenen Standard-Werte OK, wenn Du keine Sondereinstellungen in Deinem Forum vorgenommen hast)',
  'session_table' => 'Session-Tabelle',
  'session_table_explanation' => '(normalerweise sind die vorgeschlagenen Standard-Werte OK, wenn Du keine Sondereinstellungen in Deinem Forum vorgenommen hast)',
  'group_table' => 'Gruppen-Tabelle',
  'group_table_explanation' => '(normalerweise sind die vorgeschlagenen Standard-Werte OK, wenn Du keine Sondereinstellungen in Deinem Forum vorgenommen hast)',
  'group_relation_table' => 'Gruppen-Relations-Tabelle',
  'group_relation_table_explanation' => '(normalerweise sind die vorgeschlagenen Standard-Werte OK, wenn Du keine Sondereinstellungen in Deinem Forum vorgenommen hast)',
  'group_mapping_table' => 'Gruppen-Verknüpfungs-Tabelle',
  'group_mapping_table_explanation' => '(normalerweise sind die vorgeschlagenen Standard-Werte OK, wenn Du keine Sondereinstellungen in Deinem Forum vorgenommen hast)',
  'use_standard_groups' => 'Standard-Forums-Gruppen benutzen',
  'use_standard_groups_explanation' => 'Eingebaute Standard-Benutzergruppen Deines Forums benutzen (empfohlen). Diese Option setzt alle benutzerdefinierten Gruppen-Einstellungen auf dieser Seite ausser Kraft. Schalte diese Option nur ab, wenn Du WIRKLICH weisst, was Du tust!',
  'validating_group' => 'Bestätigungs-Gruppe',
  'validating_group_explanation' => 'Die ID der Gruppe Deines Forums für Benutzer, deren Konto noch überprüft werden muss (normalerweise sind die vorgeschlagenen Standard-Werte OK, wenn Du keine Sondereinstellungen in Deinem Forum vorgenommen hast)',
  'guest_group' => 'Gäste-Gruppe',
  'guest_group_explanation' => 'Die ID der Gruppe Deines Forums für Gäste / anonyme Benutzer (normalerweise sind die vorgeschlagenen Standard-Werte OK, wenn Du keine Sondereinstellungen in Deinem Forum vorgenommen hast)',
  'member_group' => 'Mitglieder-Gruppe',
  'member_group_explanation' => 'Die ID der Gruppe Deines Forums für normale (reguläre) Benutzer (normalerweise sind die vorgeschlagenen Standard-Werte OK, ändere den Wert nur, wenn Du wirklich weisst, was Du tust)',
  'admin_group' => 'Admin-Gruppe',
  'admin_group_explanation' => 'Die ID der Gruppe Deines Forums für Admins (normalerweise sind die vorgeschlagenen Standard-Werte OK, ändere den Wert nur, wenn Du wirklich weisst, was Du tust)',
  'banned_group' => 'Gebannte Gruppe',
  'banned_group_explanation' => 'Die ID der Gruppe Deines Forums für verbannte Benutzer (normalerweise sind die vorgeschlagenen Standard-Werte OK, ändere den Wert nur, wenn Du wirklich weisst, was Du tust)',
  'global_moderators_group' => 'Globale Moderatoren Gruppe',
  'global_moderators_group_explanation' => 'Die ID der Gruppe Deines Forums für globale Moderatoren (normalerweise sind die vorgeschlagenen Standard-Werte OK, ändere den Wert nur, wenn Du wirklich weisst, was Du tust)',
  'special_settings' => 'Forums-spezifische Einstellungen',
  'logout_flag' => 'phpBB Version (logout flag)',
  'logout_flag_explanation' => 'Welche Versions-Nummer hat Deine Forums-Software (diese Einstellung bestimmt, wie Logouts gehandhabt werden)',
  'use_post_based_groups' => 'Beitrags-basierte Gruppen verwenden?',
  'logout_flag_yes' => '2.0.5 oder besser',
  'logout_flag_no' => '2.0.4 oder schlechter',
  'use_post_based_groups_explanation' => 'Sollen die Bitrags-basierten Benutzergruppen berücksichtigt werden (ermöglicht eine feinere Rechte-Vergabe) oder nur die Standard-Gruppen (einfachere Administration, empfohlen). Du kannst diese Einstellung auch noch später ändern.',
  'use_post_based_groups_yes' => 'ja',
  'use_post_based_groups_no' => 'nein',
  'error_title' => 'Du musst die aufgetretenen Fehler erst korrigieren. Gehe zum vorherigen Schritt.',
  'error_specify_bbs' => 'Du musst angeben, welche Anwendung Du mit Coppermine &quot;bridgen&quot; willst.',
  'error_no_blank_name' => 'Der Name der benutzerdefinierten Bride-Datei darf nicht leer bleiben.',
  'error_no_special_chars' => 'Der Name der Bridge-Datei darf keine Sonderzeichen enthalten ausser Untertrich (_) und Bindestrich (-)!',
  'error_bridge_file_not_exist' => 'Die Bridge-datei %s existiert nicht auf dem Server. Überprüfe die Schreibweise und ob Du sie tatsächlich hochgeladen hast.',
  'finalize' => 'Forums-Integration aktivieren/deaktivieren',
  'finalize_explanation' => 'Bisher wurden Deine Einstellungen in die Datenbank geschrieben, aber die Forums-Integration (Bridging) wurde noch nicht aktiviert. Du kannst die Integration jederzeit später an- oder abschalten. Merke Dir auf jeden Fall den Benutzernamen und das Passwort Deines Admin-Kontos (Coppermine ohne Bridging), da Du es später evtl. brauchst, um die Einstellungen zu ändern. Wenn etwas schief läuft, gehe zu %s und deaktiveire das Bridging dort (verwende dazu Dein Coppermine-Admin-Konto, das Du beim Installieren von Coppermine benutzt hast).',
  'your_bridge_settings' => 'Deine Bridge-Einstellungen',
  'title_enable' => 'Aktiviere/De-Aktiviere Integration/Bridging mit %s',
  'bridge_enable_yes' => 'aktivieren',
  'bridge_enable_no' => 'de-aktivieren',
  'error_must_not_be_empty' => 'darf nicht leer sein',
  'error_either_be' => 'muss entweder %s oder %s sein',
  'error_folder_not_exist' => '%s existiert nicht. Korrigiere den Wert, den Du für %s eingegeben hast',
  'error_cookie_not_readible' => 'Coppermine kann den Cookie namens %s nicht lesen. Korrigiere den Wert, den Du für %s eingegeben hast, oder gehe zum Administrationsbereich Deines Forums und stelle dort sicher, dass der Cookie für Coppermine lesbar ist.',
  'error_mandatory_field_empty' => 'Das Feld %s darf nicht leer bleiben - gib den entsprechenden Wert ein.',
  'error_no_trailing_slash' => 'Im Feld %s darf kein abschließender Schrägstrich (Slash) vorhanden sein.',
  'error_trailing_slash' => 'Im Feld %s muss ein abschließender Schrägstrich (Slash) vorhanden sein.',
  'error_db_connect' => 'Konnte mit den eingegebenen Daten keine mySQL-Verbindung aufbauen. Hier ist die mySQL-Fehlermeldung:',
  'error_db_name' => 'Obwohl Coppermine eine Verbindung aufbauen konnte, wurde die datenbank %s nicht gefunden. Überprüfe Deine Einstellungen für %s. Hier ist die mySQL-Fehlermeldung:',
  'error_prefix_and_table' => '%s und ',
  'error_db_table' => 'Konnte die Tabelle %s nicht finden. Überprüfe Deine Einstellungen für %s.',
  'recovery_title' => 'Bridge-Assistent: Wiederherstellung im Notfall',
  'recovery_explanation' => 'Du musst Dich erst anmelden, falls Du hierher gekommen bist, um die Forums-Integration Deiner Coppermine-Galerie zu administrieren. Falls Du Dich nicht anmelden kannst, weil die Integration nicht wie erwartet funktioniert, dann kannst Du mit Hilde dieser Seite die Integration (Bridging) deaktivieren. Die Eingabe von Benutzername und Passwort hier auf der Seite wird Dich nicht anmelden, sondern die Integration deaktivieren. Details dazu gibt es in der Doku.',
  'username' => 'Benutzername',
  'password' => 'Passwort',
  'disable_submit' => 'los!',
  'recovery_success_title' => 'Authorisierung erfolgreich',
  'recovery_success_content' => 'Du hast die Forums-Integration erfolgreich deaktiviert. Deine Coppermine-Galerie läuft jetzt im &quot;Standalone-Modus&quot; (ohne Integration/Bridging).',
  'recovery_success_advice_login' => 'Melde Dich als Admin an, um Deine Bridge-Einstellungen zu bearbeiten und/oder die Forums-Integration wieder zu aktivieren.',
  'goto_login' => 'Gehe zur Anmeldung',
  'goto_bridgemgr' => 'Gehe zum Bridge-Assistent',
  'recovery_failure_title' => 'Authorisierung fehlgeschlagen',
  'recovery_failure_content' => 'Du hast fehlerhafte Zugangsdaten eingegeben. Du musst die Zugangdaten des Admin-Kontos der &quot;Standalone-Version&quot; benutzen (normalerweise des Admin-Konto, das Du bei der Installation von Coppermine angelegt hast).',
  'try_again' => 'versuche es nochmal',
  'recovery_wait_title' => 'Wartezeit noch nicht um',
  'recovery_wait_content' => 'Aus Sicherheitsgründen erlaubt das Skript keine fehlgeschlagenen Anmeldeversuche in kurzer Reihenfolge - deshalb musst Du ein bißchen warten, bevor Du wieder einen Anmelde-Versuch unternehmen darfst.',
  'wait' => 'warte',
  'create_redir_file' => 'Umleitungs-Datei anlegen (empfohlen)',
  'create_redir_file_explanation' => 'Um Benutzer nach der Anmeldung im Forum wieder zu Coppermine umzuleiten brauchst Du eine Umleitungs-Datei in Deinem Forums-Verzeichnis. Wenn diese Option aktiviert ist wird der Bridge-Assistent versuchen, diese datei für Dich anzulegen, oder Dir den Code den Code für das manuelle Anlegen der Datei per markieren und kopieren zu erzeugen.',
  'browse' => 'durchsuchen',
);

// ------------------------------------------------------------------------- //
// File calendar.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('CALENDAR_PHP')) $lang_calendar_php = array(
  'title' => 'Kalender', //cpg1.4
  'close' => 'schliessen', //cpg1.4
  'clear_date' => 'Datum löschen', //cpg1.4
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
  'categories_alpha_sort' => 'Kategorien alphabetisch sortieren (anstatt benutzerdefinierter Sortierreihenfolge)', //cpg1.4
  'save_cfg' => 'Einstellungen speichern', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File admin.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('ADMIN_PHP')) $lang_admin_php = array(
  'title' => 'Galerie-Einstellungen', //cpg1.4
  'manage_exif' => 'Exif-Einstellungen verwalten', //cpg1.4
  'manage_plugins' => 'Plugins verwalten', //cpg1.4
  'manage_keyword' => 'Stichworte verwalten', //cpg1.4
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
  'label' => 'Beschriftung',
  'item' => 'Eintrag',
  'debug_everyone' => 'alle',
  'debug_admin' => 'nur Admin',
  'no_logs'=> 'Aus', //cpg1.4
  'log_normal'=> 'Normal', //cpg1.4
  'log_all' => 'Alle', //cpg1.4
  'view_logs' => 'Historie anzeigen', //cpg1.4
  'click_expand' => 'Klicke auf die jeweilige Bezeichnung zum Ausklappen des Abschnitts', //cpg1.4
  'expand_all' => 'Alle ausklappen', //cpg1.4
  'notice1' => '(*) Diese Einstellungen dürfen nicht mehr verändert werden, wenn bereits Dateien in der Datenbank vorhanden sind.', //cpg1.4 - (relocated)
  'notice2' => '(**) Bei Änderung dieser Einstellung werden die geänderten Werte nur für Dateien herangezogen, die ab dem Zeitpunkt der Änderung hinzugefügt werden - daher ist es ratsam, hier nichts zu ändern, wenn bereits Bilder in der Galerie vorhanden sind. Die geänderten Einstellungen können jedoch auch auf ältere Dateien angewendet werden durch Verwendung der &quot;<a href="util.php">Admin-Werkzeuge</a> (Thumbnails und/oder Bilder in Zwischengrösse aktualisieren)&quot; aus dem Admin-Menü.', //cpg1.4 - (relocated)
  'notice3' => '(***) Alle Logs werden in Englisch geschrieben.', //cpg1.4 - (relocated)
  'bbs_disabled' => 'Funktion deaktiviert bei der Verwendung des Bridging', //cpg1.4
  'auto_resize_everyone' => 'Alle (Benutzer+Admin)', //cpg1.4
  'auto_resize_user' => 'Nur Benutzer', //cpg1.4
  'ascending' => 'aufsteigend', //cpg1.4
  'descending' => 'absteigend', //cpg1.4
);

if (defined('ADMIN_PHP')) $lang_admin_data = array(
  'Allgemeine Einstellungen',
  array('Galerie-Name', 'gallery_name', 0, 'f=index.htm&amp;as=admin_general_name&amp;ae=admin_general_name_end'), //cpg1.4
  array('Galerie-Beschreibung', 'gallery_description', 0, 'f=index.htm&amp;as=admin_general_description&amp;ae=admin_general_description_end'), //cpg1.4
  array('Galerie-Admin eMail', 'gallery_admin_email', 0, 'f=index.htm&amp;as=admin_general_email&amp;ae=admin_general_email_end'), //cpg1.4
  array('URL Deines Coppermine-Galerie Verzeichnisses (no \'index.php\' or similar at the end)', 'ecards_more_pic_target', 0, 'f=index.htm&amp;as=admin_general_coppermine-url&amp;ae=admin_general_coppermine-url_end'), //cpg1.4
  array('URL Deiner Homepage', 'home_target', 0, 'f=index.htm&amp;as=admin_general_home-url&amp;ae=admin_general_home-url_end'), //cpg1.4
  array('ZIP-Download der Favoriten erlauben', 'enable_zipdownload', 1, 'f=index.htm&amp;as=admin_general_zip-download&amp;ae=admin_general_zip-download_end'), //cpg1.4
  array('Zeitzonen-Differenz relative zur MEZ (aktuelle Zeit: ' . localised_date(-1, $comment_date_fmt) . ')','time_offset',0, 'f=index.htm&amp;as=admin_general_time-offset&amp;ae=admin_general_time-offset_end&amp;top=1'), //cpg1.4
  array('Verschlüsselte Passwörter aktivieren (kann nicht rückgängig gemacht werden)','enable_encrypted_passwords',1, 'f=index.htm&amp;as=admin_general_encrypt_password_start&amp;ae=admin_general_encrypt_password_end&amp;top=1'), // cpg 1.4
  array('Hilfe-Icons aktivieren (Hilfe nur in Englisch verfügbar)','enable_help',9, 'f=index.htm&amp;as=admin_general_help&amp;ae=admin_general_help_end'), //cpg1.4
  array('Anklickbare Stichwörter in Suche aktivieren','clickable_keyword_search',14, 'f=index.htm&amp;as=admin_general_keywords_start&amp;ae=admin_general_keywords_end'), //cpg1.4
  array('Plugins aktivieren', 'enable_plugins', 12, 'f=index.htm&amp;as=admin_general_enable-plugins&amp;ae=admin_general_enable-plugins_end'),  //cpg1.4
  array('Verbannung von nicht-routebaren IP-Adressen aktivieren', 'ban_private_ip', 1,  'f=index.htm&amp;as=admin_general_private-ip&amp;ae=admin_general_private-ip_end'), //cpg1.4
  array('Baumstruktur für Batch-hinzufügen aktivieren', 'browse_batch_add', 1, 'f=index.htm&amp;as=admin_general_browsable_batch_add&amp;ae=admin_general_browsable_batch_add_end'), //cpg1.4

  'Sprach- &amp; Zeichensatz-Einstellungen',
  array('Sprache', 'lang', 5, 'f=index.htm&amp;as=admin_language_language&amp;ae=admin_language_language_end'), //cpg1.4
  array('Auf Englisch zurückgreifen, wenn Deutsche Übersetzung nicht verfügbar?', 'language_fallback', 1, 'f=index.htm&amp;as=admin_language_fallback&amp;ae=admin_language_fallback_end'), //cpg1.4
  array('Zeichensatz', 'charset', 4, 'f=index.htm&amp;as=admin_language_charset&amp;ae=admin_language_charset_end'), //cpg1.4
  array('Sprachauswahl-Liste anzeigen', 'language_list', 1, 'f=index.htm&amp;as=admin_language_list&amp;ae=admin_language_list_end'), //cpg1.4
  array('Sprachauswahl-Flaggen anzeigen', 'language_flags', 8, 'f=index.htm&amp;as=admin_language_flags&amp;ae=admin_language_flags_end&amp;top=1'), //cpg1.4
  array('&quot;Standard&quot; in Sprachauswahl anzeigen', 'language_reset', 1, 'f=index.htm&amp;as=admin_language_reset&amp;ae=admin_language_reset_end&amp;top=1'), //cpg1.4
  //array('zurück/vorwärts in Tabs anzeigen', 'previous_next_tab', 1), //cpg1.4

  'Design-Einstellungen',
  array('Design', 'theme', 6, 'f=index.htm&amp;as=admin_theme_theme&amp;ae=admin_theme_theme_end'), //cpg1.4
  array('Designauswahl-Liste anzeigen', 'theme_list', 1, 'f=index.htm&amp;as=admin_theme_theme_list&amp;ae=admin_theme_theme_list_end'), //cpg1.4
  array('&quot;Standard&quot; in Designauswahl-Liste anzeigen', 'theme_reset', 1, 'f=index.htm&amp;as=admin_theme_theme_reset&amp;ae=admin_theme_theme_reset_end'), //cpg1.4
  array('FAQ anzeigen', 'display_faq', 1, 'f=index.htm&amp;as=admin_theme_faq&amp;ae=admin_theme_faq_end'), //cpg1.4
  array('Name eines benutzerdefinierten Menü-Eintrags', 'custom_lnk_name', 0,'f=index.htm&amp;as=admin_theme_custom_lnk_name&amp;ae=admin_theme_custom_lnk_name_end'), //cpg1.4
  array('URL eines benutzerdefinierten Menü-Eintrags', 'custom_lnk_url', 0,'f=index.htm&amp;as=admin_language_custom_lnk_url&amp;ae=admin_language_custom_lnk_url_end'), //cpg1.4
  array('bbcode-Hilfe anzeigen', 'show_bbcode_help', 1, 'f=index.htm&amp;as=admin_theme_bbcode&amp;ae=admin_theme_bbcode_end&amp;top=1'), //cpg1.4
  array('Vanity Block in Designs anzeigen, die als XHTML und CSS konform definiert sind?','vanity_block',1, 'f=index.htm&amp;as=vanity_block&amp;ae=vanity_block_end'), //cpg1.4
  array('Pfad zu benutzerdefiniertem header-include', 'custom_header_path', 0, 'f=index.htm&amp;as=admin_theme_include_path_start&amp;ae=admin_theme_include_path_end'), //cpg1.4
  array('Pfad zu benutzerdefiniertem footer-include', 'custom_footer_path', 0, 'f=index.htm&amp;as=admin_theme_include_path_start&amp;ae=admin_theme_include_path_end'), //cpg1.4

  'Ansicht Albenliste',
  array('Breite der Haupttabelle (in Pixel oder %)', 'main_table_width', 0, 'f=index.htm&amp;as=admin_album_table-width&amp;ae=admin_album_table-width_end'), //cpg1.4
  array('Anzahl angezeigter Kategorie-Ebenen', 'subcat_level', 0, 'f=index.htm&amp;as=admin_album_category-levels&amp;ae=admin_album_category-levels_end'), //cpg1.4
  array('Anzahl angezeigter Alben', 'albums_per_page', 0, 'f=index.htm&amp;as=admin_album_number&amp;ae=admin_album_number_end'), //cpg1.4
  array('Anzahl Spalten in Album-Liste', 'album_list_cols', 0, 'f=index.htm&amp;as=admin_album_columns&amp;ae=admin_album_columns_end'), //cpg1.4
  array('Thumbnail-Größe in Pixeln', 'alb_list_thumb_size', 0, 'f=index.htm&amp;as=admin_album_thumbnail-size&amp;ae=admin_album_thumbnail-size_end'), //cpg1.4
  array('Inhalt der Hauptseite', 'main_page_layout', 0, 'f=index.htm&amp;as=admin_album_list_content&amp;ae=admin_album_list_content_end'), //cpg1.4
  array('Erste Ebene der Thumbnails der Alben auch in Kategorien anzeigen','first_level',1, 'f=index.htm&amp;as=admin_album_first-level_thumbs&amp;ae=admin_album_first-level_thumbs_end'), //cpg1.4
  array('Kategorien alphabetisch sortieren (anstatt benutzerdefinierter Sortierreihenfolge)','categories_alpha_sort',1, 'f=index.htm&amp;as=admin_album_list_alphasort_start&amp;ae=admin_album_list_alphasort_end'), //cpg1.4
  array('Anzahl der verlinkten Dateien anzeigen','link_pic_count',1, 'f=index.htm&amp;as=admin_album_linked_files_start&amp;ae=admin_album_linked_files_end'), //cpg1.4

  'Ansicht Thumbnail',
  array('Spaltenzahl auf Thumbnail-Seite', 'thumbcols', 0, 'f=index.htm&amp;as=admin_thumbnail_columns&amp;ae=admin_thumbnail_columns_end'), //cpg1.4
  array('Zeilenzahl auf Thumbnail-Seite', 'thumbrows', 0, 'f=index.htm&amp;as=admin_thumbnail_rows&amp;ae=admin_thumbnail_rows_end'), //cpg1.4
  array('Anzahl maximal angezeigter Tabs', 'max_tabs', 10, 'f=index.htm&amp;as=admin_thumbnail_tabs&amp;ae=admin_thumbnail_tabs_end'), //cpg1.4
  array('Datei-Beschriftung anzeigen (zusätzlich zum Datei-Titel) unterhalb der Thumbnails', 'caption_in_thumbview', 1, 'f=index.htm&amp;as=admin_thumbnail_display_caption&amp;ae=admin_thumbnail_display_caption_end'), //cpg1.4
  array('Anzahl der Treffer unterhalb des Thumbnails anzeigen', 'views_in_thumbview', 1, 'f=index.htm&amp;as=admin_thumbnail_display_views&amp;ae=admin_thumbnail_display_views_end'), //cpg1.4
  array('Anzahl der Kommentare unterhalb des Thumbnails anzeigen', 'display_comment_count', 1, 'f=index.htm&amp;as=admin_thumbnail_display_comments&amp;ae=admin_thumbnail_display_comments_end'), //cpg1.4
  array('Name des Uploaders unterhalb des Thumbnails anzeigen', 'display_uploader', 1, 'f=index.htm&amp;as=admin_thumbnail_display_uploader&amp;ae=admin_thumbnail_display_uploader_end'), //cpg1.4
  //array('Name von administrativen Uploadern unterhalb des Thumbnails anzeigen', 'display_admin_uploader', 1, 'f=index.htm&amp;as=admin_thumbnail_display_admin_uploader&amp;ae=admin_thumbnail_display_admin_uploader_end'), //cpg1.4
  array('Dateiname unterhalb des Thumbnails anzeigen', 'display_filename', 1, 'f=index.htm&amp;as=admin_thumbnail_display_filename&amp;ae=admin_thumbnail_display_filename_end'), //cpg1.4
  array('Alben-Beschreibung anzeigen', 'alb_desc_thumb', 1, 'f=index.htm&amp;as=admin_thumbnail_display_description&amp;ae=admin_thumbnail_display_description_end'), //cpg1.4
  array('Standard-Sortierung für Dateien', 'default_sort_order', 3, 'f=index.htm&amp;as=admin_thumbnail_default_sortorder&amp;ae=admin_thumbnail_default_sortorder_end'), //cpg1.4
  array('Mindestmenge Stimmen, die eine Datei benötigt, um in der \'am besten bewertet\'-Liste zu erscheinen', 'min_votes_for_rating', 0, 'f=index.htm&amp;as=admin_thumbnail_minimum_votes&amp;ae=admin_thumbnail_minimum_votes_end'), //cpg1.4

  'Ansicht Bild', //cpg1.4
  array('Tabellenbreite für Bildanzeige (in Pixel oder %)', 'picture_table_width', 0, 'f=index.htm&amp;as=admin_image_comment_table-width&amp;ae=admin_image_comment_table-width_end'), //cpg1.4
  array('Datei-Informationen sind standardmäßig sichtbar', 'display_pic_info', 1, 'f=index.htm&amp;as=admin_image_comment_info_visible&amp;ae=admin_image_comment_info_visible_end'), //cpg1.4
  array('Maximallänge für Dateibeschreibung', 'max_img_desc_length', 0, 'f=index.htm&amp;as=admin_image_comment_descr_length&amp;ae=admin_image_comment_descr_length_end'), //cpg1.4
  array('Maximale Anzahl von Buchstaben in einem Wort', 'max_com_wlength', 0, 'f=index.htm&amp;as=admin_image_comment_chars_per_word&amp;ae=admin_image_comment_chars_per_word_end'), //cpg1.4
  array('Film-Streifen anzeigen', 'display_film_strip', 1, 'f=index.htm&amp;as=admin_image_comment_filmstrip_toggle&amp;ae=admin_image_comment_filmstrip_toggle_end'), //cpg1.4
  array('Dateinamen unter Filmstreifen-Thumbnails anzeigen', 'display_film_strip_filename', 1, 'f=index.htm&amp;as=admin_image_comment_display_film_strip_filename&amp;ae=admin_image_comment_display_film_strip_filename_end'), //cpg1.4
  array('Anzahl Elemente in Film-Streifen', 'max_film_strip_items', 0, 'f=index.htm&amp;as=admin_image_comment_filmstrip_number&amp;ae=admin_image_comment_filmstrip_number_end'), //cpg1.4
  array('Diashow-Intervall in Millisekunden (1 Sekunde = 1000 Millisekunden)', 'slideshow_interval', 0, 'f=index.htm&amp;as=admin_image_comment_slideshow_interval&amp;ae=admin_image_comment_slideshow_interval_end'), //cpg1.4

  'Einstellungen Kommentare', //cpg1.4
  array('Schimpfwörter in Kommentaren zensieren', 'filter_bad_words', 1, 'f=index.htm&amp;as=admin_image_comment_bad_words&amp;ae=admin_image_comment_bad_words_end'), //cpg1.4
  array('Smilies in Kommentaren erlauben', 'enable_smilies', 1, 'f=index.htm&amp;as=admin_image_comment_smilies&amp;ae=admin_image_comment_smilies_end'), //cpg1.4
  array('Aufeinanderfolgende Kommentare eines Benutzers zu einer Datei zulassen (Überflutungs-Schutz abschalten)', 'disable_comment_flood_protect', 1, 'f=index.htm&amp;as=admin_image_comment_flood&amp;ae=admin_image_comment_flood_end'), //cpg1.4
  array('Maximale Zeilenzahl eines Kommentars', 'max_com_lines', 0, 'f=index.htm&amp;as=admin_image_comment_lines&amp;ae=admin_image_comment_lines_end'), //cpg1.4
  array('Maximale Länge eines Kommentars', 'max_com_size', 0, 'f=index.htm&amp;as=admin_image_comment_length&amp;ae=admin_image_comment_length_end'), //cpg1.4
  array('Admin über abgegebene Kommentare per eMail benachrichtigen', 'email_comment_notification', 1, 'f=index.htm&amp;as=admin_image_comment_admin_notify&amp;ae=admin_image_comment_admin_notify_end'), //cpg1.4
  array('Sortierreihenfolge von Kommentaren', 'comments_sort_descending', 17, 'f=index.htm&amp;as=admin_comment_sort_start&amp;ae=admin_comment_sort_end'), //cpg1.4
  array('Vorsilbe für anonyme Kommentatoren', 'comments_anon_pfx', 0, 'f=index.htm&amp;as=comments_anon_pfx&amp;ae=comments_anon_pfx_end'), //cpg1.4

  'Bild/Datei- und Thumbnail-Einstellungen',
  array('Qualität für JPEG-Dateien', 'jpeg_qual', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_jpeg_quality&amp;ae=admin_picture_thumbnail_jpeg_quality_end'), //cpg1.4
  array('Maximalgröße Thumbnail<a href="#notice2" class="clickable_option">**</a>', 'thumb_width', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max-dimension&amp;ae=admin_picture_thumbnail_max-dimension_end'), //cpg1.4
  array('Welche Dimension soll genutzt werden für Thumbnails ( Breite oder Höhe oder das, was jeweils größer ist)<a href="#notice1" class="clickable_option">**</a>', 'thumb_use', 7, 'f=index.htm&amp;as=admin_picture_thumbnail_use-dimension&amp;ae=admin_picture_thumbnail_use-dimension_end'), //cpg1.4
  array('Bilder in Zwischengröße erzeugen','make_intermediate',1, 'f=index.htm&amp;as=admin_picture_thumbnail_intermediate_toggle&amp;ae=admin_picture_thumbnail_intermediate_toggle_end'), //cpg1.4
  array('Maximale Breite oder Höhe von Bildern/Videos in Zwischengröße <a href="#notice2" class="clickable_option">**</a>', 'picture_width', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_intermediate_dimension&amp;ae=admin_picture_thumbnail_intermediate_dimension_end'), //cpg1.4
  array('Maximalgröße für das Hochladen von Dateien (kB)', 'max_upl_size', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max_upload_size&amp;ae=admin_picture_thumbnail_max_upload_size_end'), //cpg1.4
  array('Maximale Breite oder Höhe für das Hochladen von Bildern/Videos (in Pixel)', 'max_upl_width_height', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max_upload_dimension&amp;ae=admin_picture_thumbnail_max_upload_dimension_end'), //cpg1.4
  array('Automatische verkleinerung von Bildern, die die Maximalgröße überschreiten', 'auto_resize', 16, 'f=index.htm&amp;as=admin_picture_thumbnail_auto-resize&amp;ae=admin_picture_thumbnail_auto-resize_end'), //cpg1.4

  'Erweiterte Bild/Datei- und Thumbnail-Einstellungen',
  array('Alben können nicht-öffentlich sein (Anmerkung: beim Umschalten von \'ja\' auf \'nein\' werden <i>alle</i> nicht-öffentlichen Alben öffentlich)', 'allow_private_albums', 1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_private_toggle&amp;ae=admin_picture_thumb_advanced_private_toggle_end'), //cpg1.4
  array('Icons für Persönliche Alben nicht-eingeloggten Benutzern anzeigen?','show_private',1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_private_icon_show&amp;ae=admin_picture_thumb_advanced_private_icon_show_end'), //cpg1.4
  array('Nicht erlaubte Zeichen in Dateinamen', 'forbiden_fname_char',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_filename_forbidden_chars&amp;ae=admin_picture_thumb_advanced_filename_forbidden_chars_end'), //cpg1.4
  //array('erlaubte Datei-Erweiterungen für das Hochladen von Bildern', 'allowed_file_extensions',0, 'f=index.htm&amp;as=&amp;ae=_end'), //cpg1.4
  array('Zugelassene Bild-Dateitypen', 'allowed_img_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_pic_extensions&amp;ae=admin_picture_thumb_advanced_pic_extensions_end'), //cpg1.4
  array('Zugelassene Video-Dateitypen', 'allowed_mov_types',0, 'f=index.htm&amp;as=admin_thumbs_advanced_movie&amp;ae=admin_thumbs_advanced_movie_end'), //cpg1.4
  array('Autostart für Filme', 'media_autostart',1, 'f=index.htm&amp;as=admin_movie_autoplay&amp;ae=admin_movie_autoplay_end'), //cpg1.4
  array('Zugelassene Audio-Dateitypen', 'allowed_snd_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_audio_extensions&amp;ae=admin_picture_thumb_advanced_audio_extensions_end'), //cpg1.4
  array('Zugelassene Dokument-Dateitypen', 'allowed_doc_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_doc_extensions&amp;ae=admin_picture_thumb_advanced_doc_extensions_end'), //cpg1.4
  array('Methode zur Größenänderung von Bildern','thumb_method',2, 'f=index.htm&amp;as=admin_picture_thumb_advanced_resize_method&amp;ae=admin_picture_thumb_advanced_resize_method_end'), //cpg1.4
  array('Pfad zur \'convert\'-Anwendung von ImageMagick (z.B. /usr/bin/X11/)', 'impath', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_im_path&amp;ae=admin_picture_thumb_advanced_im_path_end'), //cpg1.4
  //array('Erlaubte Datei-Typen (nur gültig für ImageMagick)', 'allowed_img_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_allowed_imagetypes&amp;ae=admin_picture_thumb_advanced_allowed_imagetypes_end'), //cpg1.4
  array('Kommandozeilen-Parameter für ImageMagick', 'im_options', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_im_commandline&amp;ae=admin_picture_thumb_advanced_im_commandline_end'), //cpg1.4
  array('EXIF-Daten in JPEG-Dateien lesen', 'read_exif_data', 13, 'f=index.htm&amp;as=admin_picture_thumb_advanced_exif&amp;ae=admin_picture_thumb_advanced_exif_end'), //cpg1.4
  array('IPTC-Daten in JPEG-Dateien lesen', 'read_iptc_data', 1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_iptc&amp;ae=admin_picture_thumb_advanced_iptc_end'), //cpg1.4
  array('Alben-Verzeichnis <a href="#notice1" class="clickable_option">*</a>', 'fullpath', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_albums_dir&amp;ae=admin_picture_thumb_advanced_albums_dir_end'), //cpg1.4
  array('Verzeichnis für Benutzer-Dateien <a href="#notice1" class="clickable_option">*</a>', 'userpics', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_userpics_dir&amp;ae=admin_picture_thumb_advanced_userpics_dir_end'), //cpg1.4
  array('Vorsilbe für Bilder in Zwischengröße <a href="#notice1" class="clickable_option">*</a>', 'normal_pfx', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_intermediate_prefix&amp;ae=admin_picture_thumb_advanced_intermediate_prefix_end'), //cpg1.4
  array('Vorsilbe für Thumbnails <a href="#notice1" class="clickable_option">*</a>', 'thumb_pfx', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_thumbs_prefix&amp;ae=admin_picture_thumb_advanced_thumbs_prefix_end'), //cpg1.4
  array('Standard-Modus für Verzeichnisse', 'default_dir_mode', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_chmod_folder&amp;ae=admin_picture_thumb_advanced_chmod_folder_end'), //cpg1.4
  array('Standard-Modus für Dateien', 'default_file_mode', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_chmod_files&amp;ae=admin_picture_thumb_advanced_chmod_files_end'), //cpg1.4

  'Benutzer-Einstellungen',
  array('Registrierung von Benutzern zulassen', 'allow_user_registration', 1, 'f=index.htm&amp;as=admin_allow_registration&amp;ae=admin_allow_registration_end'), //cpg1.4
  array('Nicht-angemeldeten Besuchern (Gäste) Zugriff erlauben', 'allow_unlogged_access', 1, 'f=index.htm&amp;as=admin_allow_unlogged_access&amp;ae=admin_allow_unlogged_access_end'), //cpg1.4
  array('Registrierung von Benutzern erfordert Überprüfung per eMail', 'reg_requires_valid_email', 1, 'f=index.htm&amp;as=admin_registration_verify&amp;ae=admin_registration_verify_end'), //cpg1.4
  array('Admin über neu-registrierten Benutzer per eMail benachrichtigen', 'reg_notify_admin_email', 1, 'f=index.htm&amp;as=admin_registration_notify&amp;ae=admin_registration_notify_end'), //cpg1.4
  array('Admin muss Registrierungen aktivieren', 'admin_activation', 1, 'f=index.htm&amp;as=admin_activation&amp;ae=admin_activation_end'),  //cpg1.4
  array('Zulassen, dass mehrere Benutzer die gleiche eMail-Adresse haben', 'allow_duplicate_emails_addr', 1, 'f=index.htm&amp;as=admin_allow_duplicate_emails_addr&amp;ae=admin_allow_duplicate_emails_addr_end'), //cpg1.4
  array('Admin über genehmigungspflichtige Benutzer-Uploads per eMail benachrichtigen', 'upl_notify_admin_email', 1, 'f=index.htm&amp;as=admin_approval_notify&amp;ae=admin_approval_notify_end'), //cpg1.4
  array('Angemeldeten Benutzern Benutzerliste anzeigen', 'allow_memberlist', 1, 'f=index.htm&amp;as=admin_user_memberlist&amp;ae=admin_user_memberlist_end'), //cpg1.4
  array('Benutzern erlauben, Ihre eMail-Adresse im Profil zu ändern', 'allow_email_change', 1, 'f=index.htm&amp;as=admin_user_allow_email_change&amp;ae=admin_user_allow_email_change_end'), //cpg1.4
  array('Benutzern bleiben Eigentümer von Bildern, die sie in öffentliche Alben hochgeladen haben (sie können diese dann ändern, beschriften und löschen', 'users_can_edit_pics', 1, 'f=index.htm&amp;as=admin_user_editpics_public_start&amp;ae=admin_user_editpics_public_end'), //cpg1.4
  array('Anzahl fehlgeschlagener Anmeldeversuche bis zur zeitweiligen Sperrung (zur Vermeidung von Brute-Force Angriffen)', 'login_threshold', 0, 'f=index.htm&amp;as=admin_user_login_start&amp;ae=admin_user_login_end'), //cpg1.4
  array('Dauer einer zeitweilligen Sperrung nach fehlgeschlagenen Anmeldungen', 'login_expiry', 0, 'f=index.htm&amp;as=admin_user_login_start&amp;ae=admin_user_login_end'), //cpg1.4
  array('&quot;Beim Administrator melden&quot; aktivieren', 'report_post', 1, 'f=index.htm&amp;as=admin_user_enable_report&amp;ae=admin_user_enable_report_end'),  //cpg1.4

// custom profile fields,  //cpg1.4
  'Benutzerdefinierte Felder für Benutzerprofile (leer lassen, falls ungenutzt).
  Benutze Profilfeld 6 für Langeinträge (wie Biographien).', //cpg1.4
  array('Bezeichnung Profilfeld 1', 'user_profile1_name', 0, 'f=index.htm&amp;as=admin_custom&amp;ae=admin_custom_end'), //cpg1.4
  array('Bezeichnung Profilfeld 2', 'user_profile2_name', 0), //cpg1.4
  array('Bezeichnung Profilfeld 3', 'user_profile3_name', 0), //cpg1.4
  array('Bezeichnung Profilfeld 4', 'user_profile4_name', 0), //cpg1.4
  array('Bezeichnung Profilfeld 5', 'user_profile5_name', 0), //cpg1.4
  array('Bezeichnung Profilfeld 6', 'user_profile6_name', 0), //cpg1.4

  'Benutzerdefinierte Felder für zusätzliche Dateiinformationen (leer lassen, falls nicht benötigt)',
  array('Bezeichnung Feld 1', 'user_field1_name', 0, 'f=index.htm&amp;as=admin_custom_image&amp;ae=admin_custom_image_end'), //cpg1.4
  array('Bezeichnung Feld 2', 'user_field2_name', 0),
  array('Bezeichnung Feld 3', 'user_field3_name', 0),
  array('Bezeichnung Feld 4', 'user_field4_name', 0),

  'Cookies-Einstellungen',
  array('Cookie-Name', 'cookie_name', 0, 'f=index.htm&amp;as=admin_cookie_name&amp;ae=admin_cookie_name_end'), //cpg1.4
  array('Cookie-Pfad', 'cookie_path', 0, 'f=index.htm&amp;as=admin_cookie_path&amp;ae=admin_cookie_path_end'), //cpg1.4

  'Email-Einstellungen  (normalerweise muss hier nichts eingestellt werden; lasse im Zweifelsfall alle Felder leer )', //cpg1.4
  array('SMTP-Hostname (wenn leer wird sendmail benutzt)', 'smtp_host', 0, 'f=index.htm&amp;as=admin_email&amp;ae=admin_email_end'), //cpg1.4
  array('SMTP-Benutzername', 'smtp_username', 0), //cpg1.4
  array('SMTP-Passwort', 'smtp_password', 0), //cpg1.4

  'Logging und Statistiken', //cpg1.4
  array('Logging-Modus <a href="#notice3" class="clickable_option">***</a>', 'log_mode', 11, 'f=index.htm&amp;as=admin_logging_log_mode&amp;ae=admin_logging_log_mode_end'), //cpg1.4
  array('eCards aufzeichnen (Logging)<br />(Anmerkung: das Aufzeichnen von Benutzer-Daten kann Datenschutz-rechtliche Konsequenzen haben. Der Benutzer sollte über die Tatsache, dass die eCards gelogged werden, informiert werden und sein Einverständnis gegeben haben, z.B. bei der Registrierung. Details, wie eine Datenschutz-Policy, die den Schutz der Privatsphäre regelt, sollten separat auf der Seite verfügbar sein.)', 'log_ecards', 1, 'f=index.htm&amp;as=admin_general_log_ecards&amp;ae=admin_general_log_ecards_end'), //cpg1.4
  array('Detailierte Abstimmungs-Statistiken aufzeichnen','vote_details',1, 'f=index.htm&amp;as=admin_logging_votedetails&amp;ae=admin_logging_votedetails_end'), //cpg1.4
  array('Detailierte Treffer-Statistiken aufzeichnen (Besucherzähler)','hit_details',1, 'f=index.htm&amp;as=admin_logging_hitdetails&amp;ae=admin_logging_hitdetails_end'), //cpg1.4

  'Wartungs-Einstellungen', //cpg1.4
  array('Debug-Modus ein', 'debug_mode', 9, 'f=index.htm&amp;as=debug_mode&amp;ae=debug_mode_end'), //cpg1.4
  array('PHP-notices in Debug-Modus anzeigen (empfohlen: aus)', 'debug_notice', 1, 'f=index.htm&amp;as=admin_misc_debug_notices&amp;ae=admin_misc_debug_notices_end'), //cpg1.4
  array('Galerie ist im Wartungsmodus', 'offline', 1, 'f=index.htm&amp;as=admin_general_offline&amp;ae=admin_general_offline_end'), //cpg1.4
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
  'upload_success' => 'Deine Datei wurde erfolgreich hochgeladen.<br /><br />Es wird nach der Bestätigung durch den Admin sichtbar sein.',
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
  'email_comment_body' => 'Jemand hat einen Kommentar in Deiner Galerie abgegeben. Um den Kommentar anzusehen, klicke hier: ',
  'album_not_selected' => 'Kein Album ausgewählt', //cpg1.4
  'com_author_error' => 'Ein registrierter Benutzer verwendet diesen Namen bereits, melde DIch an oder verwende einen anderen Namen.', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
  'caption' => 'Überschrift',
  'fs_pic' => 'Bild in Originalgröße',
  'del_success' => 'erfolgreich gelöscht',
  'ns_pic' => 'normal-großes Bild',
  'err_del' => 'kann nicht gelöscht werden',
  'thumb_pic' => 'Thumbnail',
  'comment' => 'Kommentar',
  'im_in_alb' => 'Bild in Album',
  'alb_del_success' => 'Album &laquo;%s&raquo; gelöscht', //cpg1.4
  'alb_mgr' => 'Alben-Manager',
  'err_invalid_data' => 'Ungültige Daten empfangen in \'%s\'',
  'create_alb' => 'Erzeuge Album \'%s\'',
  'update_alb' => 'Aktualisiere Album \'%s\' mit Titel \'%s\' und Index \'%s\'',
  'del_pic' => 'Datei löschen',
  'del_alb' => 'Album löschen',
  'del_user' => 'Benutzer löschen',
  'err_unknown_user' => 'Der gewählte Benutzer ist nicht vorhanden!',
  'err_empty_groups' => 'Gruppen-Tabelle ist leer oder existiert nicht!', //cpg1.4
  'comment_deleted' => 'Kommentar wurde gelöscht',
  'npic' => 'Bild', //cpg1.4
  'pic_mgr' => 'Bilder-Manager', //cpg1.4
  'update_pic' => 'Aktualisiere Bild \'%s\' mit Dateiname \'%s\' und Index \'%s\'', //cpg1.4
  'username' => 'Benutzername', //cpg1.4
  'anonymized_comments' => '%s Kommentar(e) anonymisiert', //cpg1.4
  'anonymized_uploads' => '%s öffentliche Upload(s) anonymisiert', //cpg1.4
  'deleted_comments' => '%s Kommentar(e) gelöscht', //cpg1.4
  'deleted_uploads' => '%s öffentliche Upload(s) gelöscht', //cpg1.4
  'user_deleted' => 'Benutzer %s gelöscht', //cpg1.4
  'activate_user' => 'Benutzer aktivieren', //cpg1.4
  'user_already_active' => 'Benutzerkonto war bereits aktiv', //cpg1.4
  'activated' => 'Aktiviert', //cpg1.4
  'deactivate_user' => 'Deaktiviere Benutzer', //cpg1.4
  'user_already_inactive' => 'Benutzerkonto war bereits inaktiv', //cpg1.4
  'deactivated' => 'Deaktiviert', //cpg1.4
  'reset_password' => 'Passwort zurücksetzen', //cpg1.4
  'password_reset' => 'Passwort zurückgesetzt auf %s', //cpg1.4
  'change_group' => 'Primäre Gruppe ändern', //cpg1.4
  'change_group_to_group' => 'Ändere von %s zu %s', //cpg1.4
  'add_group' => 'Sekundäre Gruppe hinzufügen', //cpg1.4
  'add_group_to_group' => 'Füge Benutzer %s zu Gruppe %s hinzu. Er ist nun Mitglied von %s als primäre Gruppe und von %s als sekundäre Mitgliedergruppe(n).', //cpg1.4
  'status' => 'Status', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File displayecard.php
// ------------------------------------------------------------------------- //

if (defined('DISPLAYECARD_PHP')) {

$lang_displayecard_php = array(
  'invalid_data' => 'Die Daten für die gewünschte eCard wurden von Deinem eMail-Client korrumpiert. Überprüfe den Link auf Vollständigkeit.', //cpg1.4
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
  'edit_pic' => 'Datei-Information bearbeiten', //cpg1.4
  'crop_pic' => 'Zuschneiden und drehen',
  'set_player' => 'Player ändern',
);

$lang_picinfo = array(
  'title' =>'Datei-Information',
  'Filename' => 'Dateiname',
  'Album name' => 'Name des Albums',
  'Rating' => 'Bewertung (%s Stimmen)',
  'Keywords' => 'Stichworte',
  'File Size' => 'Dateigröße',
  'Date Added' => 'Date added', //cpg1.4
  'Dimensions' => 'Abmessungen',
  'Displayed' => 'Angezeigt',
  'URL' => 'URL', //cpg1.4
  'Make' => 'Hersteller', //cpg1.4
  'Model' => 'Modell', //cpg1.4
  'DateTime' => 'Datum &amp; Uhrzeit', //cpg1.4
  'DateTimeOriginal' => 'Aufnahmedatum', //cpg1.4
  'ISOSpeedRatings'=>'ISO', //cpg1.4
  'MaxApertureValue' => 'Max Blendenwert', //cpg1.4
  'FocalLength' => 'Brennweite', //cpg1.4
  'Comment' => 'Kommentar',
  'addFav'=>'zu Favoriten hinzufügen',
  'addFavPhrase'=>'Favoriten',
  'remFav'=>'aus Favoriten entfernen',
  'iptcTitle'=>'IPTC Titel',
  'iptcCopyright'=>'IPTC Copyright',
  'iptcKeywords'=>'IPTC Stichworte',
  'iptcCategory'=>'IPTC Kategorie',
  'iptcSubCategories'=>'IPTC Unter-Kategorie',
  'ColorSpace' => 'Farbraum', //cpg1.4
  'ExposureProgram' => 'Belichtungsprogramm', //cpg1.4
  'Flash' => 'Blitz', //cpg1.4
  'MeteringMode' => 'Belichtungsmessungs-Modus', //cpg1.4
  'ExposureTime' => 'Belichtungszeit', //cpg1.4
  'ExposureBiasValue' => 'Belichtungs-Einstellung', //cpg1.4
  'ImageDescription' => ' Bildbeschreibung', //cpg1.4
  'Orientation' => 'Ausrichtung', //cpg1.4
  'xResolution' => 'x-Auflösung', //cpg1.4
  'yResolution' => 'y-Auflösung', //cpg1.4
  'ResolutionUnit' => 'Auflösungs-Einheit', //cpg1.4
  'Software' => 'Software', //cpg1.4
  'YCbCrPositioning' => 'YCbCr-Positionierung', //cpg1.4
  'ExifOffset' => 'Exif Versatz', //cpg1.4
  'IFD1Offset' => 'IFD1 Versatz', //cpg1.4
  'FNumber' => 'FNummer', //cpg1.4
  'ExifVersion' => 'Exif Version', //cpg1.4
  'DateTimeOriginal' => 'Datum & Uhrzeit Original', //cpg1.4
  'DateTimedigitized' => 'Datum & Uhrzeit Digitaliserung', //cpg1.4
  'ComponentsConfiguration' => 'Komponenten-Konfiguration', //cpg1.4
  'CompressedBitsPerPixel' => 'Komprimierte Bits pro Pixel', //cpg1.4
  'LightSource' => 'Lichtquelle', //cpg1.4
  'ISOSetting' => 'ISO Einstellung', //cpg1.4
  'ColorMode' => 'Farbmodus', //cpg1.4
  'Quality' => 'Qualität', //cpg1.4
  'ImageSharpening' => 'Bildschärfung', //cpg1.4
  'FocusMode' => 'Fokus-Modus', //cpg1.4
  'FlashSetting' => 'Blitz-Einstellung', //cpg1.4
  'ISOSelection' => 'ISO Auswahl', //cpg1.4
  'ImageAdjustment' => 'Bildabgleich', //cpg1.4
  'Adapter' => 'Adapter', //cpg1.4
  'ManualFocusDistance' => 'Manuelle Fokus-Entfernung', //cpg1.4
  'DigitalZoom' => 'Digitaler Zoom', //cpg1.4
  'AFFocusPosition' => 'Autofokus-Position', //cpg1.4
  'Saturation' => 'Sättigung', //cpg1.4
  'NoiseReduction' => 'Rauschunterdrückung', //cpg1.4
  'FlashPixVersion' => 'Flash Pix Version', //cpg1.4
  'ExifImageWidth' => 'Exif Bildbreite', //cpg1.4
  'ExifImageHeight' => 'Exif Bildhöhe', //cpg1.4
  'ExifInteroperabilityOffset' => 'Exif Zusammenarbeitsfähigkeit Offset', //cpg1.4
  'FileSource' => 'Dateiquelle', //cpg1.4
  'SceneType' => 'Szenen-Typ', //cpg1.4
  'CustomerRender' => 'Customer Render', //cpg1.4
  'ExposureMode' => 'Belichtungsmodus', //cpg1.4
  'WhiteBalance' => 'Weißabgleich', //cpg1.4
  'DigitalZoomRatio' => 'Verhältnis Digitalzoom', //cpg1.4
  'SceneCaptureMode' => 'Scene Capture Modus', //cpg1.4
  'GainControl' => 'Verstärkerregelung', //cpg1.4
  'Contrast' => 'Kontrast', //cpg1.4
  'Saturation' => 'Sättigung', //cpg1.4
  'Sharpness' => 'Schärfe', //cpg1.4
  'ManageExifDisplay' => 'Exif-Anzeige verwalten', //cpg1.4
  'submit' => 'los', //cpg1.4
  'success' => 'Informationen erfolgreich aktualisiert.', //cpg1.4
  'details' => 'Details', //cpg1.4
);

$lang_display_comments = array(
  'OK' => 'OK',
  'edit_title' => 'Diesen Kommentar bearbeiten',
  'confirm_delete' => 'Willst Du diesen Kommentar wirklich löschen?', //js-alert
  'add_your_comment' => 'Füge Deinen Kommentar hinzu',
  'name'=>'Name',
  'comment'=>'Kommentar',
  'your_name' => 'Dein Name',
  'report_comment_title' => 'Diesen Kommentar beim Administrator melden', //cpg1.4
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
  'invalid_email' => '<b>Achtung</b> : ungültige eMail-Adresse !',
  'ecard_title' => 'Eine eCard von %s für Dich',
  'error_not_image' => 'Nur Bilder können als eCard verschickt werden.', //cpg1.3.0
  'view_ecard' => 'Falls diese eCard nicht korrekt angezeigt wird, klicke auf den folgenden Link: ',
  'view_ecard_plaintext' => 'Markiere die folgende URL und füge sie in die Adresszeile Deines Browsers ein, um diese eCard anzuzeigen:', //cpg1.4
  'view_more_pics' => 'Klicke auf diesen Link, um mehr Bilder ansehen zu können!', //cpg1.4
  'send_success' => 'Deine eCard wurde gesendet',
  'send_failed' => 'Leider kann der Server Deine eCard nicht versenden...',
  'from' => 'Von',
  'your_name' => 'Dein Name',
  'your_email' => 'Deine eMail-Adresse',
  'to' => 'An',
  'rcpt_name' => 'Empfänger Name',
  'rcpt_email' => 'Empfänger eMail-Adresse',
  'greetings' => 'Überschrift', //cpg1.4
  'message' => 'Nachricht', //cpg1.4
  'ecards_footer' => 'Gesendet durch %s von der IP-Adresse %s um %s (Zeitzone der Galerie)', //cpg1.4
  'preview' => 'Vorschau der eCard', //cpg1.4
  'preview_button' => 'Vorschau', //cpg1.4
  'submit_button' => 'eCard senden', //cpg1.4
  'preview_view_ecard' => 'Dies wird der Alternatgiv-Link zur eCard sein, sobald sie tatsächlich eerstellt wurde - funktioniert nicht für die Vorschau.', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File report_file.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('REPORT_FILE_PHP') || defined('DISPLAYREPORT_PHP')) $lang_report_php =array(
  'title' => 'Beim Administrator melden', //cpg1.4
  'invalid_email' => '<b>Achtung</b> : ungültige eMail-Adresse!', //cpg1.4
  'report_subject' => 'Eine Meldung von %s über die Galerie %s', //cpg1.4
  'view_report' => 'Alternativ-Link, falls diese Meldung nicht korrekt angezeigt wird', //cpg1.4
  'view_report_plaintext' => 'Kopiere die folgende URL in die Adresszeile Deines Browsers, um die Meldung anzuzeigen:', //cpg1.4
  'view_more_pics' => 'Galerie', //cpg1.4
  'send_success' => 'Deine Meldung wurde gesendet', //cpg1.4
  'send_failed' => 'Der Server kann leider Deine Meldung nicht versenden...', //cpg1.4
  'from' => 'Von', //cpg1.4
  'your_name' => 'Dein Name', //cpg1.4
  'your_email' => 'Deine eMail-Adresse', //cpg1.4
  'to' => 'An', //cpg1.4
  'administrator' => 'Administrator/Moderator', //cpg1.4
  'subject' => 'Betreff', //cpg1.4
  'comment_field_name' => 'Meldung bezüglich Kommentar von "%s"', //cpg1.4
  'reason' => 'Grund', //cpg1.4
  'message' => 'Nachricht', //cpg1.4
  'report_footer' => 'Gesendet durch %s von IP-Adresse %s um %s (Zeitzone der Galerie)', //cpg1.4
  'obscene' => 'unanständig ', //cpg1.4
  'offensive' => 'beleidigend', //cpg1.4
  'misplaced' => 'vom Thema abschweifend/unangebracht', //cpg1.4
  'missing' => 'nicht vorhanden', //cpg1.4
  'issue' => 'Fehler/kann nicht angezeigt werden', //cpg1.4
  'other' => 'anderer Grund', //cpg1.4
  'refers_to' => 'Datei-Meldung bezieht sich auf', //cpg1.4
  'reasons_list_heading' => 'Grund/Gründe für Meldung:', //cpg1.4
  'no_reason_given' => 'es wurde kein Grund angegeben', //cpg1.4
  'go_comment' => 'Gehe zu Kommentar', //cpg1.4
  'view_comment' => 'Vollständige Meldung mit Kommentar anzeigen', //cpg1.4
  'type_file' => 'Datei', //cpg1.4
  'type_comment' => 'Kommentar', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
  'pic_info' => 'Bild-Info',
  'album' => 'Album',
  'title' => 'Titel',
  'filename' => 'Dateiname', //cpg1.4
  'desc' => 'Beschreibung',
  'keywords' => 'Stichworte',
  'new_keyword' => 'Neue Stichworte', //cpg1.4
  'new_keywords' => 'Neue Stichworte gefunden', //cpg1.4
  'existing_keyword' => 'Vorhandene Stichworte', //cpg1.4
  'pic_info_str' => '%sx%s - %s kB - %s x angesehen - %s x bewertet',
  'approve' => 'Datei genehmigen',
  'postpone_app' => 'Genehmigung verschieben',
  'del_pic' => 'Datei löschen',
  'del_all' => 'ALLE Dateien löschen', //cpg1.4
  'read_exif' => 'EXIF-Daten erneut einlesen',
  'reset_view_count' => 'Zähler \'x mal angesehen\' auf Null setzen',
  'reset_all_view_count' => 'ALLE Zähler \'x mal angesehen\' auf Null setzen', //cpg1.4
  'reset_votes' => 'Anzahl Stimmen auf Null setzen',
  'reset_all_votes' => 'ALLE Stimmen auf Null setzen', //cpg1.4
  'del_comm' => 'Kommentare löschen',
  'del_all_comm' => 'ALLE Kommentare löschen', //cpg1.4
  'upl_approval' => 'Genehmigung zum Hochladen', //cpg1.4
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
  'gallery_icon' => 'Dieses Bild zu meinem Benutzer-Icon machen', //cpg1.4
  'sel_on_img' =>'Die Auswahl muss vollständig innerhalb des Bildes liegen!', //js-alert
  'album_properties' =>'Alben-Eigenschaften', //cpg1.4
  'parent_category' =>'Eltern-Kategorie', //cpg1.4
  'thumbnail_view' =>'Thumbnail Ansicht', //cpg1.4
  'select_unselect' =>'alle selektieren/deselektieren', //cpg1.4
  'file_exists' => "Zieldatei '%s' existiert bereits.", //cpg1.4
  'rename_failed' => "Konnte '%s' nicht in '%s' umbenennen.", //cpg1.4
  'src_file_missing' => "Quelldatei '%s' nicht vorhanden.", // cpg 1.4
  'mime_conv' => "Kann Datei '%s' nicht zu '%s' umwandeln",//cpg1.4
  'forb_ext' => 'Keine erlaubte Dateiendung.',//cpg1.4
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
  array('Was ist die &quot;Alben-Übersicht&quot;?', 'Zeigt die gesamte Kategorie an, in der Du Dich gerade befindest, mit einem Link zu jedem Album. Wenn Du Dich gerade nicht innerhalb einer Kategorie bnefindest zeigt Dir &quot;Alben-Übersicht&quot; die gesamte Galerie mit Links zu den einzelnen Kategorien an. Möglicherweise existieren Thumbnails als Links zu den einzelnen Kategorien.', 'offline', 0),
  array('Was ist &quot;meine Galerie&quot;?', 'Mit diesem Menüpunkt kannst Du Deine eigene Benutzer-Galerie erstellen und bearbeiten.', 'allow_private_albums', 1), //cpg1.4
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
  'enter_email' => 'Gib Deine eMail-Adresse ein', //cpg1.4
  'submit' => 'los!',
  'illegal_session' => 'Die Session für die Passwort-Erinnerung ist ungültig oder abgelaufen.', //cpg1.4
  'failed_sending_email' => 'Die eMail mit der Passwort-Erinnerung kann nicht gesendet werden!',
  'email_sent' => 'Eine eMail mit Deinem Benutzernamen und einem neuen Passwort wurde an %s gesendet.', //cpg1.4
  'verify_email_sent' => 'EineeMail wurde an %s gesendet. Bitte überprüfe Deine Mailbox, um den Vorgang abzuschliessen.', //cpg1.4
  'err_unk_user' => 'Der gewählte Benutzer existiert nicht!',
  'account_verify_subject' => '%s - Anforderung neues Passwort', //cpg1.4
  'account_verify_body' => 'Du hast ein neues Passwort beantragt - um dieses neue Passwort tatsächlich zu erhalten, klicke auf nachstehenden Link:

%s', //cpg1.4
  'passwd_reset_subject' => '%s - Dein neues Passwort', //cpg1.4
  'passwd_reset_body' => 'Hier ist das neue Passwort, dass Du beantragt hast:
Benutzername: %s
Passwort: %s
Klicke %s, um Dich anzumelden.', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
  'group_name' => 'Gruppen-Name', //cpg1.4
  'permissions' => 'Berechtigungen', //cpg1.4
  'public_albums' => 'Upload in öffentliche Alben', //cpg1.4
  'personal_gallery' => 'Persönliche Galerie', //cpg1.4
  'upload_method' => 'Upload-Methode', //cpg1.4
  'disk_quota' => 'Speicherplatz', //cpg1.4
  'rating' => 'Abstimmen', //cpg1.4
  'ecards' => 'eCards', //cpg1.4
  'comments' => 'Kommentare', //cpg1.4
  'allowed' => 'Erlaubt', //cpg1.4
  'approval' => 'Bestätigung', //cpg1.4
  'boxes_number' => 'Anzahl Felder', //cpg1.4
  'variable' => 'variabel', //cpg1.4
  'fixed' => 'fest', //cpg1.4
  'apply' => 'Änderungen übernehmen',
  'create_new_group' => 'Neue Gruppe erstellen',
  'del_groups' => 'ausgewählte Gruppe(n) löschen',
  'confirm_del' => 'Achtung: wenn Du eine Gruppe löschst werden die dazu gehörenden Benutzer in die Gruppe \'Registrierte Benutzer\' verschoben!\n\nWillst Du das ?', //js-alert
  'title' => 'Benutzer-Gruppen verwalten',
  'num_file_upload' => 'Datei-Upload Felder', //cpg1.4
  'num_URI_upload' => 'URI-Upload Felder', //cpg1.4
  'reset_to_default' => 'Auf Standard-Gruppennamen (%s) zurücksetzen - empfohlen!', //cpg1.4
  'error_group_empty' => 'Gruppen-Tabelle war leer!<br /><br />Standard-Gruppen wurden erstellt, bitte diese Seite erneut laden', //cpg1.4
  'explain_greyed_out_title' => 'Warum ist diese Zeile ausgegraut?', //cpg1.4
  'explain_guests_greyed_out_text' => 'Die Eigenschaften dieser Gruppe können nicht verändert werden, weil die Option &quot;Nicht-angemeldeten Besuchern (Gäste) Zugriff erlauben&quot; in der Coppermine-Knofiguration auf &quot;Nein&quot; gesetzt wurde. Alle Gäste (Mitglieder der Gruppe %s) können nichts tun außer sich anzumelden; daher sind keine der Gruppen-Verrechtungen für sie zutreffend.', //cpg1.4
  'explain_banned_greyed_out_text' => 'Die Eigenschaften der Gruppe %s können nicht verändert werden, da deren Mitglieder sowieso nicht tun dürfen.', //cpg1.4
  'group_assigned_album' => 'zugewiesene Alben', //cpg1.4
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
  'n_link_pictures' => '%s verknüpfte Dateien', //cpg1.4
  'total_pictures' => '%s Dateien insgesamt', //cpg1.4
);

}

// ------------------------------------------------------------------------- //
// File keywordmgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('KEYWORDMGR_PHP')) $lang_keywordmgr_php = array(
  'title' => 'Stichworte verwalten', //cpg1.4
  'edit' => 'bearbeiten', //cpg1.4
  'delete' => 'löschen', //cpg1.4
  'search' => 'suchen', //cpg1.4
  'keyword_test_search' => 'nach %s in einem neuen Fenster suchen', //cpg1.4
  'keyword_del' => 'das Stcihwort %s löschen', //cpg1.4
  'confirm_delete' => 'Willst Du wirklich das Stichwort %s aus der gesamten Galerie löschen?', //cpg1.4  // js-alert
  'change_keyword' => 'Stichwort ändern', //cpg1.4
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
  'cookie_warning' => 'Achtung: Dein Browser akzeptiert nicht die Cookies dieses Skripts', //cpg1.4
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
// File minibrowser.php  //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('MINIBROWSER_PHP')) $lang_minibrowser_php = array(
  'close' => 'schliessen', //cpg1.4
  'submit' => 'OK', //cpg1.4
  'up' => 'eine Ebene höher', //cpg1.4
  'current_path' => 'derzeitiger Pfad', //cpg1.4
  'select_directory' => 'Wähle ein Verzeichnis', //cpg1.4
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
  'alb_keyword' => 'Album Keyword', //cpg1.4
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
  'reset_album' => 'Album zurücksetzen', //cpg1.4
  'reset_views' => 'Anzeigezähler zurücksetzen auf &quot;0&quot; für %s', //cpg1.4
  'reset_rating' => 'Abstimmungen auf alle Dateien im Album %s zurücksetzen', //cpg1.4
  'delete_comments' => 'Alle Kommentare im Album %s löschen', //cpg1.4
  'delete_files' => 'Unwiederbringlich alle Dateien im Album %s löschen', //cpg1.4
  'views' => 'Treffer', //cpg1.4
  'votes' => 'Stimmen', //cpg1.4
  'comments' => 'Kommentare', //cpg1.4
  'files' => 'Dateien', //cpg1.4
  'submit_reset' => 'Änderungen durchführen', //cpg1.4
  'reset_views_confirm' => 'ich bin mir sicher', //cpg1.4
  'notice1' => '(*) abhängig von den %sGruppen%s Einstellungen',  //cpg1.4 //(do not translate %s!)
  'alb_password' => 'Passwort des Albums', //cpg1.4
  'alb_password_hint' => 'Hinweis für Albums-Passwort', //cpg1.4
  'edit_files' =>'Dateien bearbeiten', //cpg1.4
  'parent_category' =>'Eltern-Kategorie', //cpg1.4
  'thumbnail_view' =>'Thumbnail-Ansicht', //cpg1.4
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
// File picmgr.php //cpg1.4
// ------------------------------------------------------------------------- //
if (defined('PICMGR_PHP')) $lang_picmgr_php = array(
  'pic_mgr' => 'Bilder verwalten', //cpg1.4
  'select_album' => 'Wähle Album', //cpg1.4
  'delete' => 'Löschen', //cpg1.4
  'confirm_delete1' => 'Dieses Bild wirklich löschen?', //cpg1.4
  'confirm_delete2' => '\nLöschen ist dauerhaft und endgültig.', //cpg1.4
  'apply_modifs' => 'Änderungen übernehmen', //cpg1.4
  'confirm_modifs' => 'Änderungen bestätigen', //cpg1.4
  'pic_need_name' => 'Bild muss einen Namen haben', //cpg1.4
  'no_change' => 'Es wurden keine Änderungen vorgenommen', //cpg1.4
  'no_album' => '* Kein Album *', //cpg1.4
  'explanation_header' => 'The custom sort order you can specify on this page will only be taken into account if', //cpg1.4
  'explanation1' => 'the admin has set the "Default sort order for files" in the config to "Position descending" or "Position ascending" (global setting for all users who haven\'t chosen another sort option individually)', //cpg1.4
  'explanation2' => 'the user has chosen "Position descending" or "Position ascending" on the thumbail page (per user setting)', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File pluginmgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('PLUGINMGR_PHP')){

$lang_pluginmgr_php = array(
  'confirm_uninstall' => 'Are you sure you want to UNINSTALL this plugin', //cpg1.4
  'confirm_delete' => 'Are you sure you want to DELETE this plugin', //cpg1.4
  'pmgr' => 'Plugin Manager', //cpg1.4
  'name' => 'Name', //cpg1.4
  'author' => 'Author', //cpg1.4
  'desc' => 'Description', //cpg1.4
  'vers' => 'v', //cpg1.4
  'i_plugins' => 'Installed Plugins', //cpg1.4
  'n_plugins' => 'Plugins Not installed', //cpg1.4
  'none_installed' => 'None Installed', //cpg1.4
  'operation' => 'Operation', //cpg1.4
  'not_plugin_package' => 'The file uploaded is not a plugin package.', //cpg1.4
  'copy_error' => 'There was an error copying the package to the plugins folder.', //cpg1.4
  'upload' => 'Upload', //cpg1.4
  'configure_plugin' => 'Configure plugin', //cpg1.4
  'cleanup_plugin' => 'Cleanup plugin', //cpg1.4
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
Obwohl die Administratoren von {SITE_NAME} versuchen werden, generell alle anstössigen Inhalte so schnell wie möglich zu löschen oder zu bearbeiten, ist es unmöglich, jeden Beitrag zu überprüfen. Daher bestätigst Du, dass alle Beiträge auf dieser Seite die Ansichten und Meinungen des Authors widerspiegeln und nicht die des Administrators oder Webmasters (außer den Beiträgen, die durch sie verfasst wurden) und sie daher dafür nicht verantwortlich gemacht werden können.<br />
<br />
Du stimmst zu, keine beleidigende, obszöne, vulgäre, verleumderische, verhetzende, drohende, sexuell-orientierte oder sonstwie illegalen Beiträge zu verfassen. Du stimmst zu, dass der/die Webmaster, Administrator(en) oder Moderator(en) von {SITE_NAME} das Recht haben, jeden Inhalt zu löschen oder zu ändern, bei dem sie es für richtig halten. Als Benutzer stimmst Du zu, dass alle Informationen, die Du oben eingetragen hast, in einer Datenbank gespeichert werden. Obwohl diese Daten ohne Deine ausdrückliche Zustimmung nicht an Dritte weitergegeben werden, können der Webmaster oder Administrator nicht dafür zur Verantwortung gezogen werden, wenn durch einen Angriff (Hacking) die gespeicherten Daten kompromitiert werden.<br />
<br />
Diese Seite benutzt Cookies, um Daten auf Deinem Rechner zu speichern. Diese Cookies dienen nur dazu, die Bedienung der Seite zu ermöglichen. Die eMail-Adresse wird nur dazu verwendet, die Registrierungs-Details und das Passwort zu bestätigen.<br />
<br />
Durch das Anklicken von 'ich stimme zu' stimmst Du diesen Bedingungen zu.
EOT;

$lang_register_php = array(
  'page_title' => 'Benutzer-Registrierung',
  'term_cond' => 'Nutzungsbedingungen',
  'i_agree' => 'ich stimme zu',
  'submit' => 'Registrieren absenden',
  'err_user_exists' => 'Der Benutzername, den Du eingegeben hast, existiert schon, bitte wähle einen anderen',
  'err_password_mismatch' => 'Die Passwörter stimmen nicht überein, bitte nochmals eingeben',
  'err_uname_short' => 'Der Benutzername muss mindestens 2 Zeichen lang sein',
  'err_password_short' => 'Das Passwort muss mindestens 2 Zeichen lang sein',
  'err_uname_pass_diff' => 'Benutzername und Passwort müssen unterschiedlich sein',
  'err_invalid_email' => 'eMail-Adresse ist ungültig',
  'err_duplicate_email' => 'Es hat sich schon ein anderer Benutzer mit der angegebenen eMail-Adresse registriert',
  'enter_info' => 'Gib Registrierungs-Informationen ein',
  'required_info' => 'Pflichtfeld',
  'optional_info' => 'Optional',
  'username' => 'Benutzername',
  'password' => 'Passwort',
  'password_again' => 'Passwort-Bestätigung',
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
  'acct_already_act' => 'Dein Benutzerkonto ist bereits aktiviert!', //cpg1.4
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
  'last_uploads' => 'Last uploaded file.<br />Click to see all uploads by', //cpg1.4
  'last_comments' => 'Last comment.<br />Click to see all comments made by', //cpg1.4
  'notify_admin_email_body' => 'Jemand mit dem Benutzernamen "%s" hat sich in Deiner Galerie registriert',
  'pic_count' => 'Files uploaded', //cpg1.4
  'notify_admin_request_email_subject' => '%s - Registration request', //cpg1.4
  'thank_you_admin_activation' => 'Thank you.<br /><br />Your request for account activation was sent to the admin. You will receive an email if approved.', //cpg1.4
  'acct_active_admin_activation' => 'The account is now active and an email has been sent to the user.', //cpg1.4
  'notify_user_email_subject' => '%s - Activation notification', //cpg1.4
);

$lang_register_confirm_email = <<<EOT
Danke für Deine Registrierung bei {SITE_NAME}

Dein Benutzername ist : "{USER_NAME}"
Dein Passwort lautet : "{PASSWORD}"

Um Dein Benutzerkonto zu aktivieren, musst Du auf den untenstehenden Link klicken
oder ihn kopieren und in der Adresszeile Deines Browsers einfügen.
<a href="{ACT_LINK}">{ACT_LINK}</a>

Grüße,

Das Team von {SITE_NAME}

EOT;

$lang_register_approve_email = <<<EOT
A new user with the username "{USER_NAME}" has registered in your gallery.

In order to activate the account, you need to click on the link below or copy and paste it in your web browser.

<a href="{ACT_LINK}">{ACT_LINK}</a>

EOT;

$lang_register_activated_email = <<<EOT
Your account has been approved and activated.

You can now log in at <a href="{SITE_LINK}">{SITE_LINK}</a> using the username "{USER_NAME}"


Regards,

The management of {SITE_NAME}

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
  'user_name' => 'Name', //cpg1.4
  'date' => 'Date', //cpg1.4
  'comment' => 'Comment', //cpg1.4
  'file' => 'File', //cpg1.4
  'name_a' => 'User name ascending', //cpg1.4
  'name_d' => 'User name descending', //cpg1.4
  'date_a' => 'Date ascending', //cpg1.4
  'date_d' => 'Date descending', //cpg1.4
  'comment_a' => 'Comment message ascending', //cpg1.4
  'comment_d' => 'Comment message descending', //cpg1.4
  'file_a' => 'File ascending', //cpg1.4
  'file_d' => 'File descending', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File search.php                                                           //
// ------------------------------------------------------------------------- //


if (defined('SEARCH_PHP')){

$lang_search_php = array(
  'title' => 'Dateisammlung durchsuchen', //cpg1.4
  'submit_search' => 'search', //cpg1.4
  'keyword_list_title' => 'Keyword list', //cpg1.4
  'keyword_msg' => 'The above list is not all inclusive. It does not include words from photo titles or descriptions. Try a full-text search.',  //cpg1.4
  'edit_keywords' => 'Edit keywords', //cpg1.4
  'search in' => 'Search in:', //cpg1.4
  'ip_address' => 'IP address', //cpg1.4
  'fields' => 'Search in', //cpg1.4
  'age' => 'Age', //cpg1.4
  'newer_than' => 'Newer than', //cpg1.4
  'older_than' => 'Older than', //cpg1.4
  'days' => 'days', //cpg1.4
  'all_words' => 'Match all words (AND)', //cpg1.4
  'any_words' => 'Match any words (OR)', //cpg1.4
);

$lang_adv_opts = array(
  'title' => 'Title', //cpg1.4
  'caption' => 'Caption', //cpg1.4
  'keywords' => 'Keywords', //cpg1.4
  'owner_name' => 'Owner name', //cpg1.4
  'filename' => 'Filename', //cpg1.4
);

}

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
  'page_title' => 'Neue Dateien suchen',
  'select_dir' => 'Wähle Verzeichnis',
  'select_dir_msg' => 'Diese Funktion ermöglicht, mehrere Dateien der Galerie hinzuzufügen, die mit einem FTP-Programm schon auf Deine Webseite hochgeladen wurden.<br /><br />Wähle das Verzeichnis, in das Du die Dateien hochgeladen hast.', //cpg1.4
  'no_pic_to_add' => 'Keine Datei zum Hinzufügen gefunden',
  'need_one_album' => 'Du brauchst mindestens ein Album, um dieses Funktion auszuführen',
  'warning' => 'Achtung',
  'change_perm' => 'Das Skript kann nicht in dieses Verzeichnis schreiben, Du musst die Lese-/Schreibberechtigung (chmod) auf 755 oder 777 setzen, bevor Du versuchst, Dateien hinzuzufügen!',
  'target_album' => '<b>Dateien aus dem Verzeichnis &quot;</b>%s<b>&quot; in </b>%s ablegen',
  'folder' => 'Verzeichnis',
  'image' => 'Datei',
  'album' => 'Album',
  'result' => 'Resultat',
  'dir_ro' => 'Verzeichnis nicht beschreibbar',
  'dir_cant_read' => 'Verzeichnis nicht lesbar',
  'insert' => 'Füge neue Dateien der Galerie hinzu',
  'list_new_pic' => 'Liste neuer Dateien',
  'insert_selected' => 'Markierte Dateien einfügen',
  'no_pic_found' => 'Keine neuen Dateien gefunden',
  'be_patient' => 'Bitte Geduld, das Skript brauchst Zeit, um die Bilder hinzuzufügen',
  'no_album' => 'Kein Album gewählt',
  'result_icon' => 'click for details or to reload',  //cpg1.4
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
  'no_folders' => 'There are no folders inside the "albums" folder yet. Make sure to create at least one custom folder within "albums" folder and ftp-upload your files there. You mustn\'t upload to the "userpics" nor "edit" folders, they are reserved for http uploads and internal purposes.', //cpg1.4
   'albums_no_category' => 'Albums with no category', //cpg1.4 // album pulldown mod, added by frogfoot
  'personal_albums' => '* Personal albums', //cpg1.4 // album pulldown mod, added by frogfoot
  'browse_batch_add' => 'Browsable interface (recommended)', //cpg1.4
  'edit_pics' => 'Edit files', //cpg1.4
  'edit_properties' => 'Album properties', //cpg1.4
  'view_thumbs' => 'Thumbnail view', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File stat_details.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('STAT_DETAILS_PHP')) $lang_stat_details_php = array(
  'show_hide' => 'show/hide this column', //cpg1.4
  'vote' => 'Vote Details', //cpg1.4
  'hits' => 'Hit Details', //cpg1.4
  'stats' => 'Vote Statistics', //cpg1.4
  'sdate' => 'Date', //cpg1.4
  'rating' => 'Rating', //cpg1.4
  'search_phrase' => 'Search phrase', //cpg1.4
  'referer' => 'Referer', //cpg1.4
  'browser' => 'Browser', //cpg1.4
  'os' => 'Operating System', //cpg1.4
  'ip' => 'IP', //cpg1.4
  'sort_by_xxx' => 'Sort by %s', //cpg1.4
  'ascending' => 'ascending', //cpg1.4
  'descending' => 'descending', //cpg1.4
  'internal' => 'int', //cpg1.4
  'close' => 'close', //cpg1.4
  'hide_internal_referers' => 'hide internal referers', //cpg1.4
  'date_display' => 'Date display', //cpg1.4
  'submit' => 'submit / refresh', //cpg1.4
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
  'cust_instr_2' => 'Anzahl Abfrage-Felder',   <--- Vergessen zu übersetzen??? Kenne den Zusammenhang leider nicht
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
  'album' => 'Album',
  'picture' => 'Datei',
  'pic_title' => 'Datei-Titel',
  'description' => 'Datei-Beschreibung',
  'keywords' => 'Stichworte (Trennung mit Komma)<br /><a href="#" onClick="return MM_openBrWindow(\'keyword_select.php\',\'selectKey\',\'width=250, height=400, scrollbars=yes,toolbar=no,status=yes,resizable=yes\')">von Liste einfügen</a>', //cpg1.4
  'keywords_sel' =>'Select a Keyword', //cpg1.4
  'err_no_alb_uploadables' => 'Leider gibt es kein Album, in das Du Bilder hochladen darfst',
  'place_instr_1' => 'Bitte Dateien jetzt den Alben zuordnen.  Es können jetzt zusätzliche Angaben zu den Dateien gemacht werden.',
  'place_instr_2' => 'Es müssen noch mehr Dateien Alben zugeordnet werden. Klicke \'weiter\'!',
  'process_complete' => 'Alle Dateien wurden erfolgreich Alben zugeordnet.',
  'albums_no_category' => 'Albums with no category', //cpg1.4. //album pulldown mod, added by frogfoot
  'personal_albums' => '* Personal albums', //cpg1.4 //album pulldown mod, added by frogfoot
  'select_album' => 'Select album', //cpg1.4 //album pulldown mod, added by frogfoot
  'close' => 'Close', //cpg1.4
  'no_keywords' => 'Sorry, no keywords available!', //cpg1.4
  'regenerate_dictionary' => 'Regenerate Dictionary', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
  'memberlist' => 'Memberlist', //cpg1.4
  'user_manager' => 'User manager', //cpg1.4
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
  'edit' => 'bearbeiten', //cpg1.4
  'with_selected' => 'With selected:', //cpg1.4
  'delete' => 'löschen', //cpg1.4
  'delete_files_no' => 'keep public files (but anonymize)', //cpg1.4
  'delete_files_yes' => 'delete public files as well', //cpg1.4
  'delete_comments_no' => 'keep comments (but anonymize)', //cpg1.4
  'delete_comments_yes' => 'delete comments as well', //cpg1.4
  'activate' => 'Activate', //cpg1.4
  'deactivate' => 'Deactivate', //cpg1.4
  'reset_password' => 'Reset Password', //cpg1.4
  'change_primary_membergroup' => 'Change primary membergroup', //cpg1.4
  'add_secondary_membergroup' => 'Add secondary membergroup', //cpg1.4
  'name' => 'Benutzername',
  'group' => 'Gruppe',
  'inactive' => 'Inaktiv',
  'operations' => 'Aktion',
  'pictures' => 'Dateien',
  'disk_space_used' => 'Speicherplatzverbrauch', //cpg1.4
  'disk_space_quota' => 'Space Quota', //cpg1.4
  'registered_on' => 'Registriert am', //cpg1.4
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
  'user_profile1' => '$user_profile1', //cpg1.4
  'user_profile2' => '$user_profile2', //cpg1.4
  'user_profile3' => '$user_profile3', //cpg1.4
  'user_profile4' => '$user_profile4', //cpg1.4
  'user_profile5' => '$user_profile5', //cpg1.4
  'user_profile6' => '$user_profile6', //cpg1.4
  'latest_upload' => 'neueste Uploads',
  'never' => 'nie',
  'search' => 'User search', //cpg1.4
  'submit' => 'Submit', //cpg1.4
  'search_submit' => 'Go!', //cpg1.4
  'search_result' => 'Search results for: ', //cpg1.4
  'alert_no_selection' => 'You have to select at least one user first!', //cpg1.4 //js-alert
  'password' => 'password', //cpg1.4
  'select_group' => 'Select group', //cpg1.4
  'groups_alb_access' => 'Album permissions by group', //cpg1.4
  'album' => 'Album', //cpg1.4
  'category' => 'Category', //cpg1.4
  'modify' => 'Modify?', //cpg1.4
  'group_no_access' => 'This group has no special access', //cpg1.4
  'notice' => 'Notice', //cpg1.4
  'group_can_access' => 'Album(s) that only "%s" can access', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //

if (defined('UTIL_PHP')) {
$lang_util_desc_php = array(
'Erzeugt Titel aus Dateinamen', //cpg1.4
'Löscht Titel', //cpg1.4
'Erneuert Thumbnails und Dateien in Zwischengröße gemäß aktuellen Einstellungen', //cpg1.4
'Löscht Bilder in Original-Größe und ersetzt sie mit Bildern in Zwischengröße', //cpg1.4
'Deletes original or intermediate size photos to free webspace', //cpg1.4
'Deletes orphaned comments', //cpg1.4
'Re-reads file sizes and dimensions (if you manually edited pics)', //cpg1.4
'Resets views counter', //cpg1.4
'Displays phpinfo', //cpg1.4
'Updates the database', //cpg1.4
'Displays log files', //cpg1.4
);
$lang_util_php = array(
  'title' => 'Admin-Werkzeuge (Größe ändern)',
  'what_it_does' => 'Was macht dieses Tool',
  'file' => 'Datei',
  'problem' => 'Problem', //cpg1.4
  'status' => 'Status', //cpg1.4
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
  'replace_wait' => 'ösche Originale und ersetze sie mit Bilder in Zwischengröße, bitte warten...',
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
  'delete_title_explanation' => 'This will remove all titles on files in the album you specify.', //cpg1.4
  'delete_original' => 'Bilder in Original-Größe löschen',
  'delete_original_explanation' => 'This will remove the full sized pictures.', //cpg1.4
  'delete_intermediate' => 'Delete intermediate pictures', //cpg1.4
  'delete_intermediate_explanation' => 'This will delete intermediate (normal) pictures.<br />Use this to free up disk space if you have disabled \'Make intermediate pics\' in config after adding pictures.', //cpg1.4
  'delete_replace' => 'Lösche die Original-Bilder und ersetze sie mit Bilder in Zwischengröße',
  'titles_deleted' => 'All titles in specified album removed', //cpg1.4
  'deleting_intermediates' => 'Deleting intermediate images, please wait...', //cpg1.4
  'searching_orphans' => 'Searching for orphans, please wait...', //cpg1.4
  'select_album' => 'Wähle Album',
  'delete_orphans' => 'Verwaiste Kommentare löschen', //cpg1.4
  'delete_orphans_explanation' => 'This will identify and allow you to delete any comments associated with files no longer in the gallery.<br />Checks all albums.', //cpg1.4
  'refresh_db' => 'Reload file dimensions and size information', //cpg1.4
  'refresh_db_explanation' => 'This will re-read file sizes and dimensions. Use this if quota\'s are incorrect or you have changed the files manually.', //cpg1.4
  'reset_views' => 'Reset view counters', //cpg1.4
  'reset_views_explanation' => 'Sets all file view counts to zero in the album specified.', //cpg1.4
  'orphan_comment' => 'verwaiste Kommentare gefunden',
  'delete' => 'löschen',
  'delete_all' => 'alle löschen',
  'delete_all_orphans' => 'Delete all orphans?', //cpg1.4
  'comment' => 'Kommentar: ',
  'nonexist' => 'Bezug auf nicht-existierende Datei # ',
  'phpinfo' => 'phpinfo anzeigen',
  'phpinfo_explanation' => 'Contains technical information about your server.<br /> - You may be asked to provide information from this when requesting support.', //cpg1.4
  'update_db' => 'Datenbank aktualisieren',
  'update_db_explanation' => 'Wenn Du Coppermine-Dateien ersetzt hast, eine Modifikation oder ein Upgrade von einer frühreren Version von Coppermine durchgeführt hast, lasse diese Datenbank-Aktualisierung einmal laufen, um die möglicherweise notwendigen Änderungen an der Datenbank durchzuführen bzw. fehlende Tabellen zu erzeugen.',
  'view_log' => 'View log files', //cpg1.4
  'view_log_explanation' => 'Coppermine can keep track of various actions users perform. You can browse those logs if you have enabled logging in <a href="admin.php">coppermine config</a>.', //cpg1.4
  'versioncheck' => 'Check versions', //cpg1.4
  'versioncheck_explanation' => 'Check your file versions to find out if you have replaced all files after an upgrade, or if coppermine source files have been updated after the release of a package.', //cpg1.4
  'bridgemanager' => 'Bridge Manager', //cpg1.4
  'bridgemanager_explanation' => 'Enable/disable integration (bridging) of Coppermine with another application (e.g. your BBS).', //cpg1.4
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
  'webcvs' => 'web cvs', //cpg1.4
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
  'no_webcvs_link' => 'don\'t display web cvs link', //cpg1.4
  'stable_webcvs_link' => 'display web cvs link to stable branch', //cpg1.4
  'devel_webcvs_link' => 'display web cvs link to devel branch', //cpg1.4
  'submit' => 'apply changes / refresh', //cpg1.4
  'reset_to_defaults' => 'reset to default values', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File view_log.php  //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('VIEWLOG_PHP')) $lang_viewlog_php = array(
  'delete_all' => 'Delete All Logs', //cpg1.4
  'delete_this' => 'Delete This Log', //cpg1.4
  'view_logs' => 'View Logs', //cpg1.4
  'no_logs' => 'No logs created.', //cpg1.4
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