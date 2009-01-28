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
  Coppermine version: 1.4.20
  $HeadURL$
  $Revision$
  $Author$
  $Date$
**********************************************/

if (!defined('IN_COPPERMINE')) { die('Not in Coppermine...');}

// info about translators and translated language
$lang_translation_info = array(
  'lang_name_english' => 'German (formal)', //cpg1.4
  'lang_name_native' => 'Deutsch (Sie)', //cpg1.4
  'lang_country_code' => 'de', //cpg1.4
  'trans_name'=> 'Andi',
  'trans_email' => 'info@pragmamx.org',
  'trans_website' => 'http://pragmamx.org/',
  'trans_date' => '2005-10-29',
);

// mx charset converted //
$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)// shortcuts for Byte, Kilo, Mega
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
$lang_bad_words = array('*fuck*', 'Fu\(*', 'fuk*', 'masturbat*', 'motherfucker', 'nigger*', 'penis', 'pussy', 'shit', 'titties', 'titty',  'arsch*', 'fick*', 'fotze', 'votze', 'Sieg Heil', 'Heil Hitler', 'Nutte', 'Möse', 'Moese', 'Pimmel', 'Schwengel', 'Titte*', 'bums*', 'Scheiss*', 'Scheiß*');

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
  'access_denied' => 'Sie haben kein Recht, diese Seite anzusehen.',
  'perm_denied' => 'Sie haben nicht das Recht, diese Operation auszuführen.',
  'param_missing' => 'Das Skript wurde ohne den/die erforderlichen Parameter aufgerufen.',
  'non_exist_ap' => 'Das gewählte Album bzw. die gewählte Datei existiert nicht!',
  'quota_exceeded' => 'Speicherplatz erschöpft<br /><br />Sie haben ein Speicherlimit von [quota] kB, Ihre Dateien belegen zur Zeit [space] kB, das Hinzufügen dieser Datei würde Ihren Speicherplatz überschreiten.',
  'gd_file_type_err' => 'Bei Verwendung der GD-Bibliothek sind nur die Dateitypen JPG und PNG erlaubt.',
  'invalid_image' => 'Das Bild, das Sie hochgeladen haben, ist beschädigt oder kann nicht von der GD-Bibliothek verarbeitet werden',
  'resize_failed' => 'Kann Thumbnail nicht erzeugen.',
  'no_img_to_display' => 'Keine Datei zum Anzeigen vorhanden (oder Sie haben keine Berechtigung, das Album zu sehen)',
  'non_exist_cat' => 'Die gewählte Kategorie existiert nicht',
  'orphan_cat' => 'Eine Kategorie besitzt ein nicht-existierendes Eltern-Element, benutzen Sie den Kategorie-Manager, um das Problem zu beheben.',
  'directory_ro' => 'Das Verzeichnis \'%s\' ist nicht beschreibbar, die Dateien können nicht gelöscht werden',
  'non_exist_comment' => 'Der gewählte Kommentar existiert nicht.',
  'pic_in_invalid_album' => 'Die Datei befindet sich in einem nicht-existierenden Album (%s)!?',
  'banned' => 'Sie sind zur Zeit von dieser Seite verbannt.',
  'not_with_udb' => 'Diese Funktion ist innerhalb von Coppermine deaktiviert, weil sie in die Forums-Software integriert ist. Entweder wird das, was Sie gerade zu tun versucht haben, in dieser Konfiguration nicht unterstützt oder die Funktion sollte von der Forums-Software übernommen werden.',
  'offline_title' => 'Wartungsmodus',
  'offline_text' => 'Die Galerie ist zur Zeit im Wartungsmodus - schauen Sie bitte später nochmal vorbei!', //cpg1.3.0
  'ecards_empty' => 'Es können derzeit keine eCard-Einträge gefunden werden. Überprüfen Sie, ob die Aufzeichung von eCards in den Einstellungen aktivert wurde!',
  'action_failed' => 'Aktion fehlgeschlagen. Coppermine konnte die gewünschte Aktion nicht ausführen.', //cpg1.3.0
  'no_zip' => 'Die zum Verarbeiten von ZIP-Dateien notwendigen libraries sind auf dem Server nicht verfügbar. Setzen Sie sich mit dem Server-Admin in Verbindung.',
  'zip_type' => 'Keine Berechtigung für den Upload von ZIP-Dateien.',
  'database_query' => 'Beim Ausführen einer Datenbank-Abfrage ist ein Fehler aufgetreten', //cpg1.4
  'non_exist_comment' => 'Der gewählte Kommentar existiert nicht', //cpg1.4
);

$lang_bbcode_help_title = 'Bulletin Board code Hilfe'; //cpg1.4
$lang_bbcode_help = 'Sie können klickbare Links und Formatierung in diesem Feld anwenden durch die Verwendung folgender bbcode-Befehle: <li>[b]Fett[/b] =&gt; <b>Fett</b></li><li>[i]Kursiv[/i] =&gt; <i>Kursiv</i></li><li>[url=http://meineseite.com/]Url Text[/url] =&gt; <a href="http://meineseite.com">Url Text</a></li><li>[email]benutzer@domain.com[/email] =&gt; <a href="mailto:benutzer@domain.com">benutzer@domain.com</a></li><li>[color=red]Beispieltext[/color] =&gt; <span style="color:red">Beispieltext</span></li><li>[img]http://coppermine-gallery.net/demo/cpg14x/images/red.gif[/img] => <img src="../images/red.gif" border="0" alt="" /></li>'; //cpg1.4

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
  'my_prof_title' => 'Gehe zu meinem Profil', //cpg1.4
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
  'documentation_lnk' => 'Dokumentation', //cpg1.4
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
  'enter_alb_pass' => 'Geben Sie das Passwort für das Album ein', //cpg1.4
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
  'ecard_disabled_msg' => 'Sie haben nicht das Recht, eCards zu versenden',
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
  'copy_and_paste_instructions' => 'Wenn Sie Hilfe im Coppermine-Forum suchen wollen, kopieren Sie diese Debug-Ausgabe in Ihren Beitrag im Forum. Ersetzen Sie  eventuell vorhandene Passwörter in den Queries durch ***.<br />Anmerkung: Diese Ausgabe erfolgt nur zur Information und bedeutet nicht, dass ein Fehler in der Galerie vorliegt.', //cpg1.4
  'phpinfo' => 'phpinfo anzeigen',
  'notices' => 'Notices', //cpg1.4
);

$lang_language_selection = array(
  'reset_language' => 'Standard-Sprache',
  'choose_language' => 'Wählen Sie eine Sprache',
);

$lang_theme_selection = array(
  'reset_theme' => 'Standard-Design',
  'choose_theme' => 'Wähle Design',
);

$lang_version_alert = array(
  'version_alert' => 'Nicht unterstützte Version!', //cpg1.4
  'no_stable_version' => 'Sie betreiben Coppermine version  %s (%s), das nur für erfahrene Benutzer gedacht ist - für diese Version gibt es keinen Support oder Funktions-Garantien. Benutzen Sie sie auf eigenes Risiko oder downgraden Sie auf die aktuellste stabile Version, wenn Sie Support brauchen!', //cpg1.4
  'gallery_offline' => 'Die Galerie ist zur Zeit im Wartungs-Modus und ist nur für Sie als Admin zugänglich. Vergessen Sie nicht, sie wieder aus dem Wartungs-Modus in den "normalen" Modus zurück zu schalten, wenn Ihre Wartungsarbeiten beendet sind.', //cpg1.4
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
  'confirm_modifs' => 'Sind Sie sicher, dass Sie diese Änderungen durchführen wollen?', //js-alert
  'no_change' => 'Sie haben nichts verändert!', //js-alert
  'new_album' => 'neues Album',
  'confirm_delete1' => 'Wollen Sie dieses Album wirklich löschen?', //js-alert
  'confirm_delete2' => '\nAlle Dateien und Kommentare, die darin enthalten sind, werden gelöscht!', //js-alert
  'select_first' => 'Wählen Sie zuerst ein Album', //js-alert
  'alb_mrg' => 'Alben-Manager',
  'my_gallery' => '* meine Galerie *',
  'no_category' => '* keine Kategorie *',
  'delete' => 'löschen',
  'new' => 'neu',
  'apply_modifs' => 'Änderungen übernehmen',
  'select_category' => 'Kategorie wählen',
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
  'error_specify' => 'Sie müssen entweder einen Benutzer oder eine IP-Adresse angeben', //cpg1.4
  'error_ban_id' => 'Ungültige Verbannungs-ID!', //cpg1.4
  'error_admin_ban' => 'Sie können sich nicht selbst verbannen!', //cpg1.4
  'error_server_ban' => 'Sie wollten Ihren eigenen Server verbannen? Ts ts, das kann ich nicht zulassen...', //cpg1.4
  'error_ip_forbidden' => 'Sie können diese IP-Adresse nicht verbannen - sie ist sowieso nicht route-bar (private)!<br />Wenn Sie Verbannungen für private IP-Adressen erlauben möchten, dann erlauben Sie das in Ihren <a href="admin.php">Einstellungen</a> (macht nur Sinn, wenn Coppermine in einem LAN läuft).', //cpg1.4
  'lookup_ip' => 'IP-Adresse nachschlagen', //cpg1.4
  'submit' => 'los!', //cpg1.4
  'select_date' => 'Wähle Datum', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File bridgemgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('BRIDGEMGR_PHP')) $lang_bridgemgr_php = array(
  'title' => 'Bridge-Assistent',
  'warning' => 'Warnung: bevor Sie diesen Assitenten benutzen muss Ihnen klar sein, dass Sicherheits-relevante Daten über HTML-Formulare versendet werden. Führen Sie den Assitenten nur auf Ihrem eigenen PC aus (nicht auf einem öffentlichen Rechner wie beispielsweise in einem Internet-Café), und löschen Sie danach auf jeden Fall Ihren Browser-Cahce und Ihre temporären Internet-Dateien, sonst haben andere vielleicht Zugriff zu diesen Daten!',
  'back' => 'zurück',
  'next' => 'weiter',
  'start_wizard' => 'Starte den Bridge-Assistenten',
  'finish' => 'Fertigstellen',
  'hide_unused_fields' => 'unbenutze Formular-Felder verbergen (empfohlen)',
  'clear_unused_db_fields' => 'ungültige Datenbank-Einträge löschen (empfohlen)',
  'custom_bridge_file' => 'der Name Ihrer benutzerdefinierten Bridge-Datei (Wenn der Dateiname  <i>meinedatei.inc.php</i> lautet, dann geben Sie <i>meinedatei</i> in diesem Feld ein)',
  'no_action_needed' => 'Kein Aktion notwenig in diesem Schritt. Klicken Sie auf &quot;weiter&quot;, um fortzufahren.',
  'reset_to_default' => 'Auf Standard-Wert zurücksetzen',
  'choose_bbs_app' => 'Wählen Sie eine Anwendung, mit der Sie &quot;bridgen&quot; wollen',
  'support_url' => 'Für Support zu dieser Anwendung klicken Sie hier',
  'settings_path' => 'Pfad(e) Ihrer Forums-Anwendung',
  'database_connection' => 'Datenbank-Verbindung',
  'database_tables' => 'Tabellen in der Datenbank',
  'bbs_groups' => 'Forums-Gruppen',
  'license_number' => 'Lizenz-Nummer',
  'license_number_explanation' => 'Geben Sie Ihre Lizenz-Nummer ein (falls zutreffend)',
  'db_database_name' => 'Datenbank-Name',
  'db_database_name_explanation' => 'Geben Sie den Namen der Datenbank ein, die Ihr Forum benutzt',
  'db_hostname' => 'Datenbank-Hostname',
  'db_hostname_explanation' => 'Hostname Ihrer mySQL-Datenbank, meistens &quot;localhost&quot;',
  'db_username' => 'Datenbank-Benutzername',
  'db_username_explanation' => 'mySQL Benutzer-Konto für die Verbindung mit Ihrem Forum',
  'db_password' => 'Datenbank-Passwort',
  'db_password_explanation' => 'Passwort für Die mySQL-Datenbank Ihres Forums',
  'full_forum_url' => 'Forums-URL',
  'full_forum_url_explanation' => 'Vollständige Internet-Adresse Ihres Forums (einschließlich http:// , z.B. http://www.yourdomain.tld/forum)',
  'relative_path_of_forum_from_webroot' => 'Relativer Pfad zum Forum',
  'relative_path_of_forum_from_webroot_explanation' => 'Relativer Pfad zu Ihrem Forum vom Wurzelverzeichnis (webroot) aus gesehen (Beispiel: wenn Ihr Forum unter http://www.meineseite.tld/forum/ ist, dann geben Sie hier &quot;/forum/&quot; in das Feld ein)',
  'relative_path_to_config_file' => 'Relativer Pfad zur Konfigurations-Datei Ihres Forums',
  'relative_path_to_config_file_explanation' => 'Relativer Pfad zu Ihrem Forum, von Ihrem Coppermine-Verzeichnis aus gesehen (z.B. &quot;../forum/&quot; wenn Ihr Forum unter http://www.meineseite.tld/forum/ ist und Coppermine unter http://www.meineseite.tld/gallery/)',
  'cookie_prefix' => 'Cookie-Vorsilbe',
  'cookie_prefix_explanation' => 'Der Cookie-Name Ihres Forums',
  'table_prefix' => 'Tabellen-Vorsilbe',
  'table_prefix_explanation' => 'Die Vorsible (Präfix) der Tabellen Ihres Forums, die Sie bei der Einrichtung Ihres Forums festgelegt haben.',
  'user_table' => 'Benutzer-Tabelle',
  'user_table_explanation' => '(normalerweise sind die vorgeschlagenen Standard-Werte OK, wenn Sie keine Sondereinstellungen in Ihrem Forum vorgenommen haben)',
  'session_table' => 'Session-Tabelle',
  'session_table_explanation' => '(normalerweise sind die vorgeschlagenen Standard-Werte OK, wenn Sie keine Sondereinstellungen in Ihrem Forum vorgenommen haben)',
  'group_table' => 'Gruppen-Tabelle',
  'group_table_explanation' => '(normalerweise sind die vorgeschlagenen Standard-Werte OK, wenn Sie keine Sondereinstellungen in Ihrem Forum vorgenommen haben)',
  'group_relation_table' => 'Gruppen-Relations-Tabelle',
  'group_relation_table_explanation' => '(normalerweise sind die vorgeschlagenen Standard-Werte OK, wenn Sie keine Sondereinstellungen in Ihrem Forum vorgenommen haben)',
  'group_mapping_table' => 'Gruppen-Verknüpfungs-Tabelle',
  'group_mapping_table_explanation' => '(normalerweise sind die vorgeschlagenen Standard-Werte OK, wenn Sie keine Sondereinstellungen in Ihrem Forum vorgenommen haben)',
  'use_standard_groups' => 'Standard-Forums-Gruppen benutzen',
  'use_standard_groups_explanation' => 'Eingebaute Standard-Benutzergruppen Ihres Forums benutzen (empfohlen). Diese Option setzt alle benutzerdefinierten Gruppen-Einstellungen auf dieser Seite ausser Kraft. Schalten Sie diese Option nur ab, wenn Sie WIRKLICH wissen, was Sie tun!',
  'validating_group' => 'Bestätigungs-Gruppe',
  'validating_group_explanation' => 'Die ID der Gruppe Ihres Forums für Benutzer, deren Konto noch überprüft werden muss (normalerweise sind die vorgeschlagenen Standard-Werte OK, wenn Sie keine Sondereinstellungen in Ihrem Forum vorgenommen haben)',
  'guest_group' => 'Gäste-Gruppe',
  'guest_group_explanation' => 'Die ID der Gruppe Ihres Forums für Gäste / anonyme Benutzer (normalerweise sind die vorgeschlagenen Standard-Werte OK, wenn Sie keine Sondereinstellungen in Ihrem Forum vorgenommen haben)',
  'member_group' => 'Mitglieder-Gruppe',
  'member_group_explanation' => 'Die ID der Gruppe Ihres Forums für normale (reguläre) Benutzer (normalerweise sind die vorgeschlagenen Standard-Werte OK, ändern Sie den Wert nur, wenn Sie wirklich wissen was Sie tun)',
  'admin_group' => 'Admin-Gruppe',
  'admin_group_explanation' => 'Die ID der Gruppe Ihres Forums für Admins (normalerweise sind die vorgeschlagenen Standard-Werte OK, ändern Sie den Wert nur, wenn Sie wirklich wissen was Sie tun)',
  'banned_group' => 'Gebannte Gruppe',
  'banned_group_explanation' => 'Die ID der Gruppe Ihres Forums für verbannte Benutzer (normalerweise sind die vorgeschlagenen Standard-Werte OK, ändern Sie den Wert nur, wenn Sie wirklich wissen was Sie tun)',
  'global_moderators_group' => 'Globale Moderatoren Gruppe',
  'global_moderators_group_explanation' => 'Die ID der Gruppe Ihres Forums für globale Moderatoren (normalerweise sind die vorgeschlagenen Standard-Werte OK, ändern Sie den Wert nur, wenn Sie wirklich wissen was Sie tun)',
  'special_settings' => 'Forums-spezifische Einstellungen',
  'logout_flag' => 'phpBB Version (logout flag)',
  'logout_flag_explanation' => 'Welche Versions-Nummer hat Ihre Forums-Software (diese Einstellung bestimmt, wie Logouts gehandhabt werden)',
  'use_post_based_groups' => 'Beitrags-basierte Gruppen verwenden?',
  'logout_flag_yes' => '2.0.5 oder besser',
  'logout_flag_no' => '2.0.4 oder schlechter',
  'use_post_based_groups_explanation' => 'Sollen die Beitrags-basierten Benutzergruppen berücksichtigt werden (ermöglicht eine feinere Rechte-Vergabe) oder nur die Standard-Gruppen (einfachere Administration, empfohlen). Sie können diese Einstellung auch noch später ändern.',
  'use_post_based_groups_yes' => 'ja',
  'use_post_based_groups_no' => 'nein',
  'error_title' => 'Sie müssen die aufgetretenen Fehler erst korrigieren. Gehen Sie zum vorherigen Schritt.',
  'error_specify_bbs' => 'Sie müssen angeben, welche Anwendung Sie mit Coppermine &quot;bridgen&quot; wollen.',
  'error_no_blank_name' => 'Der Name der benutzerdefinierten Bride-Datei darf nicht leer bleiben.',
  'error_no_special_chars' => 'Der Name der Bridge-Datei darf keine Sonderzeichen enthalten ausser Untertrich (_) und Bindestrich (-)!',
  'error_bridge_file_not_exist' => 'Die Bridge-datei %s existiert nicht auf dem Server. Überprüfen Sie die Schreibweise und ob Sie die Datei tatsächlich hochgeladen haben.',
  'finalize' => 'Forums-Integration aktivieren/deaktivieren',
  'finalize_explanation' => 'Bisher wurden Ihre Einstellungen in die Datenbank geschrieben, aber die Forums-Integration (Bridging) wurde noch nicht aktiviert. Sie können die Integration jederzeit später an- oder abschalten. Merken Sie sich auf jeden Fall den Benutzernamen und das Passwort Ihres Admin-Kontos (Coppermine ohne Bridging), da Sie es später evtl. brauchen, um die Einstellungen zu ändern. Wenn etwas schief läuft, gehen Sie zu %s und deaktiviere das Bridging dort (verwenden Sie dazu Ihr Coppermine-Admin-Konto, das Sie beim Installieren von Coppermine benutzt haben).',
  'your_bridge_settings' => 'Ihre Bridge-Einstellungen',
  'title_enable' => 'Aktiviere/De-Aktiviere Integration/Bridging mit %s',
  'bridge_enable_yes' => 'aktivieren',
  'bridge_enable_no' => 'de-aktivieren',
  'error_must_not_be_empty' => 'darf nicht leer sein',
  'error_either_be' => 'muss entweder %s oder %s sein',
  'error_folder_not_exist' => '%s existiert nicht. Korrigieren Sie den Wert, den Sie für %s eingegeben haben',
  'error_cookie_not_readible' => 'Coppermine kann den Cookie namens %s nicht lesen. Korrigieren Sie den Wert, den Sie für %s eingegeben haben, oder gehen Sie zum Administrationsbereich Ihres Forums und stellen Sie dort sicher, dass der Cookie für Coppermine lesbar ist.',
  'error_mandatory_field_empty' => 'Das Feld %s darf nicht leer bleiben - geben Sie den entsprechenden Wert ein.',
  'error_no_trailing_slash' => 'Im Feld %s darf kein abschließender Schrägstrich (Slash) vorhanden sein.',
  'error_trailing_slash' => 'Im Feld %s muss ein abschließender Schrägstrich (Slash) vorhanden sein.',
  'error_db_connect' => 'Konnte mit den eingegebenen Daten keine mySQL-Verbindung aufbauen. Hier ist die mySQL-Fehlermeldung:',
  'error_db_name' => 'Obwohl Coppermine eine Verbindung aufbauen konnte, wurde die datenbank %s nicht gefunden. Überprüfen Sie Ihre Einstellungen für %s. Hier ist die mySQL-Fehlermeldung:',
  'error_prefix_and_table' => '%s und ',
  'error_db_table' => 'Konnte die Tabelle %s nicht finden. Überprüfen Sie Ihre Einstellungen für %s.',
  'recovery_title' => 'Bridge-Assistent: Wiederherstellung im Notfall',
  'recovery_explanation' => 'Sie müssen sich erst anmelden, falls Sie hierher gekommen sind, um die Forums-Integration Ihrer Coppermine-Galerie zu administrieren. Falls Sie sich nicht anmelden können, weil die Integration nicht wie erwartet funktioniert, dann können Sie mit Hilfe dieser Seite die Integration (Bridging) deaktivieren. Die Eingabe von Benutzername und Passwort hier auf der Seite wird Sie nicht anmelden, sondern die Integration deaktivieren. Details dazu gibt es in der Doku.',
  'username' => 'Benutzername',
  'password' => 'Passwort',
  'disable_submit' => 'los!',
  'recovery_success_title' => 'Authorisierung erfolgreich',
  'recovery_success_content' => 'Sie haben die Forums-Integration erfolgreich deaktiviert. Ihre Coppermine-Galerie läuft jetzt im &quot;Standalone-Modus&quot; (ohne Integration/Bridging).',
  'recovery_success_advice_login' => 'Melden Sie sich als Admin an, um Ihre Bridge-Einstellungen zu bearbeiten und/oder die Forums-Integration wieder zu aktivieren.',
  'goto_login' => 'Gehe zur Anmeldung',
  'goto_bridgemgr' => 'Gehe zum Bridge-Assistent',
  'recovery_failure_title' => 'Authorisierung fehlgeschlagen',
  'recovery_failure_content' => 'Sie haben fehlerhafte Zugangsdaten eingegeben. Sie müssen die Zugangdaten des Admin-Kontos der &quot;Standalone-Version&quot; benutzen (normalerweise des Admin-Konto, das Sie bei der Installation von Coppermine angelegt haben).',
  'try_again' => 'versuche es nochmal',
  'recovery_wait_title' => 'Wartezeit noch nicht um',
  'recovery_wait_content' => 'Aus Sicherheitsgründen erlaubt das Skript keine fehlgeschlagenen Anmeldeversuche in kurzer Reihenfolge - deshalb müssen Sie ein bißchen warten, bevor Sie wieder einen Anmelde-Versuch unternehmen dürfen.',
  'wait' => 'warte',
  'create_redir_file' => 'Umleitungs-Datei anlegen (empfohlen)',
  'create_redir_file_explanation' => 'Um Benutzer nach der Anmeldung im Forum wieder zu Coppermine umzuleiten, brauchen Sie eine Umleitungs-Datei in Ihrem Forums-Verzeichnis. Wenn diese Option aktiviert ist wird der Bridge-Assistent versuchen, diese datei für Sie anzulegen, oder Ihnen den Code für das manuelle Anlegen der Datei per markieren und kopieren zu erzeugen.',
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
  'confirm_delete' => 'Wollen Sie diese Kategorie wirklich LÖSCHEN', //js-alert
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
  'pos_a' => 'aufsteigend nach Position', //cpg1.4
  'pos_d' => 'absteigend nach Position', //cpg1.4
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
  'click_expand' => 'Klicken Sie auf die jeweilige Bezeichnung zum Ausklappen des Abschnitts', //cpg1.4
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
  array('URL Ihres Coppermine-Galerie Verzeichnisses (no \'index.php\' or similar at the end)', 'ecards_more_pic_target', 0, 'f=index.htm&amp;as=admin_general_coppermine-url&amp;ae=admin_general_coppermine-url_end'), //cpg1.4
  array('URL Ihrer Homepage', 'home_target', 0, 'f=index.htm&amp;as=admin_general_home-url&amp;ae=admin_general_home-url_end'), //cpg1.4
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
  //array('Alben-Beschreibung anzeigen', 'alb_desc_thumb', 1, 'f=index.htm&amp;as=admin_thumbnail_display_description&amp;ae=admin_thumbnail_display_description_end'), //cpg1.4
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
  array('Automatische Verkleinerung von Bildern, die die Maximalgröße überschreiten', 'auto_resize', 16, 'f=index.htm&amp;as=admin_picture_thumbnail_auto-resize&amp;ae=admin_picture_thumbnail_auto-resize_end'), //cpg1.4

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

  'Email-Einstellungen  (normalerweise muss hier nichts eingestellt werden; lassen Sie im Zweifelsfall alle Felder leer )', //cpg1.4
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
  'empty_name_or_com' => 'Sie müssen Ihren Namen und einen Kommentar eingeben',
  'com_added' => 'Ihr Kommentar wurde hinzugefügt',
  'alb_need_title' => 'Sie müssen einen Titel für das Album eingeben!',
  'no_udp_needed' => 'Keine Aktualisierung notwendig.',
  'alb_updated' => 'Das Album wurde aktualisiert',
  'unknown_album' => 'Das gewählte Album existiert nicht oder Sie haben keine Berechtigung, Dateien in dieses Album hochzuladen',
  'no_pic_uploaded' => 'Es wurde keine Datei hochgeladen!<br /><br />Wenn Sie tatsächlich eine Datei zum Hochladen selektiert haben, überprüfen Sie bitte, ob Ihr Server das Hochladen von Dateien zulässt...',
  'err_mkdir' => 'Verzeichnis %s konnte nicht angelegt werden!',
  'dest_dir_ro' => 'In das Zielverzeichnis %s kann vom Skript nicht geschrieben werden!',
  'err_move' => '%s kann nicht nach %s verschoben werden!',
  'err_fsize_too_large' => 'Die Datei, die Sie hochgeladen haben, ist zu groß (maximal zulässig ist %s x %s) !', //obsolete since cpg1.3 - consider removal in cpg1.4 once upload.php has been overhauled
  'err_imgsize_too_large' => 'Die Datei, die Sie hochgeladen haben, ist zu groß (maximal zulässig ist %s kB) !', //obsolete since cpg1.3 - consider removal in cpg1.4 once upload.php has been overhauled
  'err_invalid_img' => 'Die Datei, die Sie hochgeladen haben, ist kein gültiger Bildtyp!',
  'allowed_img_types' => 'Sie können nur %s Bilder hochladen.',
  'err_insert_pic' => 'Das Bild \'%s\' kann nicht in das Album eingefügt werden ',
  'upload_success' => 'Ihre Datei wurde erfolgreich hochgeladen.<br /><br />Es wird nach der Bestätigung durch den Admin sichtbar sein.',
  'notify_admin_email_subject' => '%s - Upload-Benachrichtigung',
  'notify_admin_email_body' => '%s hat eine Datei hochgeladen, die bestätigt werden muss. Gehe zu %s',
  'info' => 'Information',
  'com_added' => 'Kommentar hinzugefügt',
  'alb_updated' => 'Album aktualisiert',
  'err_comment_empty' => 'Ihr Kommentar enthält keine Zeichen!',
  'err_invalid_fext' => 'Nur Dateien mit den folgenden Erweiterungen sind zulässig: <br /><br />%s.',
  'no_flood' => 'Leider sind Sie schon der Autor des letzten Kommentars zu dieser Datei<br /><br />Bearbeiten Sie Ihren bestehenden Kommentar, wenn Sie ihn verändern wollen',
  'redirect_msg' => 'Sie werden weitergeleitet.<br /><br /><br />Klicke Sie \'weiter\', falls sich die Seite nicht automatisch aktualisiert',
  'upl_success' => 'Ihre Datei wurde erfolgreich hinzugefügt',
  'email_comment_subject' => 'In der Coppermine Photo Gallery wurde ein Kommentar abgegeben',
  'email_comment_body' => 'Jemand hat einen Kommentar in Ihrer Galerie abgegeben. Um den Kommentar anzusehen, klicken Sie hier: ',
  'album_not_selected' => 'Kein Album ausgewählt', //cpg1.4
  'com_author_error' => 'Ein registrierter Benutzer verwendet diesen Namen bereits, melden Sie sich an oder verwenden Sie einen anderen Namen.', //cpg1.4
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
  'invalid_data' => 'Die Daten für die gewünschte eCard wurden von Ihrem eMail-Client korrumpiert. Überprüfen Sie den Link auf Vollständigkeit.', //cpg1.4
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
  'Date Added' => 'Hinzugefügt am', //cpg1.4
  'Dimensions' => 'Abmessungen',
  'Displayed' => 'Angezeigt',
  'URL' => 'URL', //cpg1.4
  'Make' => 'Hersteller', //cpg1.4
  'Model' => 'Modell', //cpg1.4
  'DateTime' => 'Datum &amp; Uhrzeit', //cpg1.4
  'DateTimeOriginal' => 'Aufnahmedatum', //cpg1.4
  'ISOSpeedRatings'=>'ISO', //cpg1.4
  'MaxApertureValue' => 'Max. Blendenwert', //cpg1.4
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
  'FNumber' => 'Blende', //cpg1.4
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
  'confirm_delete' => 'Wollen Sie diesen Kommentar wirklich löschen?', //js-alert
  'add_your_comment' => 'Füge Sie Ihren Kommentar hinzu',
  'name'=>'Name',
  'comment'=>'Kommentar',
  'your_name' => 'Ihr Name',
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
  'ecard_title' => 'Eine eCard von %s für Sie',
  'error_not_image' => 'Nur Bilder können als eCard verschickt werden.', //cpg1.3.0
  'view_ecard' => 'Falls diese eCard nicht korrekt angezeigt wird, klicken Sie bitte auf den folgenden Link: ',
  'view_ecard_plaintext' => 'Markieren Sie die folgende URL und fügen Sie sie in die Adresszeile Ihres Browsers ein, um diese eCard anzuzeigen:', //cpg1.4
  'view_more_pics' => 'Klicken Sie auf diesen Link, um mehr Bilder ansehen zu können!', //cpg1.4
  'send_success' => 'Ihre eCard wurde gesendet',
  'send_failed' => 'Leider kann der Server Ihre eCard nicht versenden...',
  'from' => 'Von',
  'your_name' => 'Ihr Name',
  'your_email' => 'Ihre eMail-Adresse',
  'to' => 'An',
  'rcpt_name' => 'Empfänger Name',
  'rcpt_email' => 'Empfänger eMail-Adresse',
  'greetings' => 'Überschrift', //cpg1.4
  'message' => 'Nachricht', //cpg1.4
  'ecards_footer' => 'Gesendet durch %s von der IP-Adresse %s um %s (Zeitzone der Galerie)', //cpg1.4
  'preview' => 'Vorschau der eCard', //cpg1.4
  'preview_button' => 'Vorschau', //cpg1.4
  'submit_button' => 'eCard senden', //cpg1.4
  'preview_view_ecard' => 'Dies wird der Alternativ-Link zur eCard sein, sobald sie tatsächlich erstellt wurde - funktioniert nicht für die Vorschau.', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File report_file.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('REPORT_FILE_PHP') || defined('DISPLAYREPORT_PHP')) $lang_report_php =array(
  'title' => 'Beim Administrator melden', //cpg1.4
  'invalid_email' => '<b>Achtung</b> : ungültige eMail-Adresse!', //cpg1.4
  'report_subject' => 'Eine Meldung von %s über die Galerie %s', //cpg1.4
  'view_report' => 'Alternativ-Link, falls diese Meldung nicht korrekt angezeigt wird', //cpg1.4
  'view_report_plaintext' => 'Kopieren Sie die folgende URL in die Adresszeile Ihres Browsers, um die Meldung anzuzeigen:', //cpg1.4
  'view_more_pics' => 'Galerie', //cpg1.4
  'send_success' => 'Ihre Meldung wurde gesendet', //cpg1.4
  'send_failed' => 'Der Server kann Ihre Meldung leider nicht versenden...', //cpg1.4
  'from' => 'Von', //cpg1.4
  'your_name' => 'Ihr Name', //cpg1.4
  'your_email' => 'Ihre eMail-Adresse', //cpg1.4
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
  array('Warum muss ich mich registrieren?', 'Der Administrator kann verlangen, dass Sie sich registrieren (oder auch nicht). Durch die Registrierung erhalten Sie möglicherweise einige zusätzliche Features, wie z.B. Dateien hochladen, eine Favoriten-Liste, Bewertung von Bildern, Abgabe von Kommentaren etc. ', 'allow_user_registration', '0'),
  array('Wie kann ich mich registrieren?', 'Klicken Sie auf &quot;Registrieren&quot; und füllen Sie die notwendigen Felder aus (und die optionalen, wenn Sie möchten).<br />Wenn der Administrator eMail-Aktivierung eingeschaltet hat, bekommen Sie eine eMail an die Adresse, die Sie bei der Registrierung angegeben haben, in der Anweisungen enthalten sind, wie Sie Ihr Benutzerkonto aktivieren können. In diesem Fall muss Ihr Konto aktiviert werden, bevor Sie sich anmelden können.', 'allow_user_registration', '1'),
  array('Wie kann ich mich anmelden?', 'Klicken Sie auf &quot;Anmelden&quot;, geben Sie Ihren Benutzernamen und Ihr Passwort ein, und kreuzen Sie die Option &quot;Immer angemeldet bleiben&quot; an, damit Sie sich nicht bei Ihrem nächsten Besuch auf der Seite erneut anmelden müssen.<br /><b>WICHTIG: Um sich anzumelden, müssen Cookies in Ihrem Browser zulassen sein, und das Cookie darf nicht gelöscht werden, wenn Sie die Option &quot;Immer angemeldet bleiben&quot; nutzen wollen.</b>', 'offline', 0),
  array('Warum kann ich mich nicht anmelden?', 'Haben Sie sich registriert und die Anweisungen ausgeführt, die in der Aktivierungsmail an Sie gesendet wurden?. Der Link in der Aktivierungsmail schaltet Ihr Benutzerkonto frei. Bezüglich anderer Probleme beim Anmelden, wende Sie sich bitte an den Admin dieser Seite.', 'offline', 0),
  array('Ich habe mein Passwort vergessen. Was nun?', 'Wenn der Link &quot;Passwort vergessen&quot; auf der Anmeldeseite anzeigt wird, dann benutzen Sie ihn. Ansonsten nehmen Sie Kontakt mit dem Admin dieser Seite auf und bitten Sie ihn um ein neues Passwort.', 'offline', 0),
  //array('Meine eMail-Adresse hat sich geändert. Was tun?', 'Melde Dich an und ändere Ihre eMail-Adresse im Menüpunkt &quot; mein Profil&quot;', 'offline', 0),
  array('Wie speichere ich eine Datei in &quot;meine Favoriten&quot;?', 'Klicken Sie auf &quot;Datei-Info&quot; (<img src="images/info.gif" width="16" height="16" border="0" alt="Bild-Info" />); gehen Sie ganz nach unten auf der Seite und klicken Sie auf &quot;Zu Favoriten hinzufügen&quot;.<br />Möglicherweise ist die Anzeige des Datei-Info Bereichs auch standardmäßig eingeschaltet.<br />Wichtig: Cookies müssen aktiviert sein und Sie dürfen den Cookie nicht löschen (im Cookie werden die Favoriten gespeichert).', 'offline', 0),
  array('Wie kann ich eine Datei bewerten?', 'Klicken Sie auf das Thumbnail (kleine Vorschaugrafik) einer Datei und wählen Sie eine Bewertung (angezeigt unterhalb des Bildes).', 'offline', 0),
  array('Wie kann ich einen Kommentar abgeben?', 'Klicken Sie auf das Thumbnail (kleine Vorschaugrafik) einer Datei, gehen Sie nach unten auf der Seite und geben Sie Ihren Kommentar ein. Wenn keine Eingabe eines Kommentars möglich ist, müssen Sie sich eventuell erst registrieren und anmelden, damit diese Option zur Verfügung steht.', 'offline', 0),
  array('Wie kann ich eine Datei hochladen?', 'Klicken Sie auf &quot;Datei hochladen&quot; und wählen Sie das Album aus, in das Sie die Datei hochladen wollen, klicken Sie auf &quot;Durchsuchen&quot; und wählen Sie die Datei aus, die Sie hochladen wollen und klicken dann Sie auf &quot;öffnen&quot; (fügen Sie einen Titel, eine Beschriftung und ein paar Stichworte ein, wenn Sie möchten). Um den Vorgang abzuschliessen, klicken Sie auf &quot;Datei hochladen&quot;', 'allow_private_albums', 0),
  array('Wohin kann ich Dateien hochladen?', 'Sie können Dateien in Alben hochladen, die Sie innerhalb der Kategorie &quot;meine Galerie&quot; erstellen können. Der Administrator der Seite kann Ihnen auch das Recht einräumen, in ein oder mehrere Alben der allgemeinen Galerie hochzuladen. Falls das der Fall ist, werden Ihnen diese Alben im Auswahlmenü auf der Upload-Seite angezeigt', 'allow_private_albums', 0),
  array('Welche Art und Größe von Dateien kann ich hochladen?', 'Die Art (z.B. jpg oder png) und Größe bestimmt der Administrator dieser Seite.', 'allow_private_albums', 0),
  array('Was ist &quot;meine Galerie&quot;?', '&quot;Meine Galerie&quot; ist Ihre persönliche Galerie, innerhalb der Sie Dateien hochladen und bearbeiten können.', 'allow_private_albums', 0),
  array('Wie kann ich Alben erzeugen, umbenennen oder löschen in &quot;meine Galerie&quot;?', 'Sie sehen die Optionen erst nach der Anmeldung im Admin-Modus<br />Klicken Sie auf &quot;Erzeuge/ändere meine Alben&quot; und klicken Sie auf &quot;Neu&quot;. Ändern Sie den Text &quot;Neues Album&quot; in den gewünschten Namen ab.<br />Sie können auch bestehende Alben umbenennen, indem Sie sie zuerst anklicken und dann im Eingabefeld unten einen neuen Namen dafür eingeben.<br />Klicken Sie auf &quot;Änderungen übernehmen&quot;, um Ihre Änderungen durchzuführen.', 'allow_private_albums', 0),
  array('Wie kann ich meine Alben abändern und die Zugriffsrechte darauf ändern?', 'Sie sollten nach der Anmeldung bereits im Admin-Modus sein.<br />Klicken Sie auf &quot; Meine Alben bearbeiten&quot;. Wählen Sie in der Zeile &quot;Album aktualisieren&quot; das Album aus, das Sie aktualisieren möchten.<br />Sie können dann den Namen, die Beschreibung, das Thumbnail (Vorschaugrafik) ändern und die Rechte ändern, wer das Album sehen und Kommentare dazu abgeben darf.<br />Um Ihre Änderungen zu bestätigen, klicken Sie am Schluß auf &quot;Album aktualisieren&quot;.', 'allow_private_albums', 0),
  array('Was sind Cookies?', 'Cookies sind kleine Textdateien, die von einem Webserver versendet werden und auf Ihrem Rechner gespeichert werden. Beim erneuten Aufsuchen der Seite können die Cookies wieder vom Server gelesen werden.<br />In der Regel werden Sie dazu genutzt, Sie als Benutzer auf der Seite wiederzuerkennen. Cookies selbst können keine Viren oder sonstige bösartigen Schad-Programme enthalten und sind daher in erster Linie ungefährlich. Einige Seitenbetreiber setzen Cookies allerdings ein, um Verhaltensprofile von Surfern im Internet zu erstellen und nutzen die Informationen in der Regel, um zielgerichtet Werbung für den Surfer zur Verfügung zu stellen.', 'offline', 0),
  array('Woher kann ich dieses Porgramm für meine Homepage bekommen?', 'Diese Seite läuft mit Coppermine. Coppermine ist eine kostenlose Multimedia-Galerie, die unter der Lizenz GNU GPL erscheint. Die Software ist voller Features und für einige Platformen erhältlich. Besuchen Sie die <a href="http://coppermine.sf.net/">Coppermine Home Page</a> für zusätzliche Informationen oder um die Software herunterzuladen.', 'offline', 0),

  'Navigation auf der Seite',
  array('Was ist die &quot;Alben-Übersicht&quot;?', 'Zeigt die gesamte Kategorie an, in der Sie sich gerade befinden, mit einem Link zu jedem Album. Wenn Sie sich gerade nicht innerhalb einer Kategorie befinden zeigt Ihnen &quot;Alben-Übersicht&quot; die gesamte Galerie mit Links zu den einzelnen Kategorien an. Möglicherweise existieren Thumbnails als Links zu den einzelnen Kategorien.', 'offline', 0),
  array('Was ist &quot;meine Galerie&quot;?', 'Mit diesem Menüpunkt können Sie Ihre eigene Benutzer-Galerie erstellen und bearbeiten.', 'allow_private_albums', 1), //cpg1.4
  array('Was ist der Unterschied zwischen &quot;Admin-Modus&quot; und &quot;Benutzer-Modus&quot;?', 'Im Admin-Modus werden die Navigations-Elemente zum Erstellen und Ändern Ihrer Benutzer-Galerie angezeigt; der Benutzer-Modus zeigt Ihnen, wie Ihre Benutzer-Galerie für andere Benutzer aussieht (ohne die entsprechenden Menüpunkte).', 'allow_private_albums', 0),
  array('Was ist &quot;Dateien hochladen&quot;?', 'Dieses Feature ermöglicht es Benutzern, eigene Dateien hochzuladen und in Alben zu positionieren (Dateigröße und -typ wurden vom Admin festgelegt).', 'allow_private_albums', 0),
  array('Was ist &quot;neueste Uploads&quot;?', 'Dieser Bereich zeigt die neuesten Dateien, die in eines der Alben der Galerie hochgeladen wurden.', 'offline', 0),
  array('Was ist &quot;neueste Kommentare&quot;?', 'Dieser Bereich zeigt die zuletzt abgegebenen Kommentare unterhalb der Thumbnails (Vorschaugrafik) der Dateien, auf die sich die Kommentare beziehen.', 'offline', 0),
  array('Was ist &quot;am meisten angesehen&quot;?', 'Dieser Bereich zeigt die beliebtesten Dateien (am meisten angesehen) der gesamten Galerie oder des Bereichs an, in dem Sie sich befinden.', 'offline', 0),
  array('Was ist &quot;am besten bewertet&quot;?', 'Durchschnittliche Bewertung der Datei (Bsp.: 5 Benutzer gaben einem Bild ein Bewertung von <img src="images/rating3.gif" width="65" height="14" border="0" alt="" />: das Bild hat eine durchschnittliche Bewertung von <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> ;Wenn 5 Benutzer ein Bild mit Noten von 1 bis 5 (1,2,3,4,5) bewerten, würde der Schnitt ebenfalls so aussehen: <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> .)<br />Die Bewertungs-Skala reicht von <img src="images/rating5.gif" width="65" height="14" border="0" alt="super" /> (super) bis <img src="images/rating0.gif" width="65" height="14" border="0" alt="sehr schlecht" /> (sehr schlecht).', 'offline', 0),
  array('Was ist &quot;Meine Favoriten&quot;?', 'Mit diesem Feature können Sie Bilder, die Sie später noch einmal ansehen wollen, in einer Favoriten-Liste speichern. Dazu müssen Sie nicht einmal angemeldet sein, da die Liste in einem Cookie auf Ihrem Computer gespeichert wird. Beachte Sie aber: die Favoriten stehen Ihnen nur an diesem Computer zur Verfügung; wenn die Cookies gelöscht werden, sind die Favoriten ebenfalls verschwunden.', 'offline', 0),
);


// ------------------------------------------------------------------------- //
// File forgot_passwd.php
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) $lang_forgot_passwd_php = array(
  'forgot_passwd' => 'Passwort-Erinnerung',
  'err_already_logged_in' => 'Sie sind schon angemeldet!',
  'enter_email' => 'Geben Sie Ihre eMail-Adresse ein', //cpg1.4
  'submit' => 'los!',
  'illegal_session' => 'Die Session für die Passwort-Erinnerung ist ungültig oder abgelaufen.', //cpg1.4
  'failed_sending_email' => 'Die eMail mit der Passwort-Erinnerung kann nicht gesendet werden!',
  'email_sent' => 'Eine eMail mit Ihrem Benutzernamen und einem neuen Passwort wurde an %s gesendet.', //cpg1.4
  'verify_email_sent' => 'EineeMail wurde an %s gesendet. Bitte überprüfen Sie Ihre Mailbox, um den Vorgang abzuschliessen.', //cpg1.4
  'err_unk_user' => 'Der gewählte Benutzer existiert nicht!',
  'account_verify_subject' => '%s - Anforderung neues Passwort', //cpg1.4
  'account_verify_body' => 'Sie haben ein neues Passwort beantragt - um dieses neue Passwort tatsächlich zu erhalten, klicken Sie auf nachstehenden Link:

%s', //cpg1.4
  'passwd_reset_subject' => '%s - Ihr neues Passwort', //cpg1.4
  'passwd_reset_body' => 'Hier ist das neue Passwort, das Sie beantragt haben:
Benutzername: %s
Passwort: %s
Klicken Sie %s, um sich anzumelden.', //cpg1.4
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
  'confirm_del' => 'Achtung: wenn Sie eine Gruppe löschen, werden die dazu gehörenden Benutzer in die Gruppe \'Registrierte Benutzer\' verschoben!\n\nWollen Sie das ?', //js-alert
  'title' => 'Benutzer-Gruppen verwalten',
  'num_file_upload' => 'Datei-Upload Felder', //cpg1.4
  'num_URI_upload' => 'URI-Upload Felder', //cpg1.4
  'reset_to_default' => 'Auf Standard-Gruppennamen (%s) zurücksetzen - empfohlen!', //cpg1.4
  'error_group_empty' => 'Gruppen-Tabelle war leer!<br /><br />Standard-Gruppen wurden erstellt, bitte diese Seite erneut laden', //cpg1.4
  'explain_greyed_out_title' => 'Warum ist diese Zeile ausgegraut?', //cpg1.4
  'explain_guests_greyed_out_text' => 'Die Eigenschaften dieser Gruppe können nicht verändert werden, weil die Option &quot;Nicht-angemeldeten Besuchern (Gäste) Zugriff erlauben&quot; in der Coppermine-Knofiguration auf &quot;Nein&quot; gesetzt wurde. Alle Gäste (Mitglieder der Gruppe %s) können nichts tun außer sich anzumelden; daher sind keine der Gruppen-Verrechtungen für sie zutreffend.', //cpg1.4
  'explain_banned_greyed_out_text' => 'Die Eigenschaften der Gruppe %s können nicht verändert werden, da deren Mitglieder sowieso nichts tun dürfen.', //cpg1.4
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
  'confirm_delete' => 'Wollen Sie dieses Album wirklich LÖSCHEN? \\nAlle darin befindlichen Dateien und Kommentare werden ebenfalls gelöscht.',
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
  'keyword_del' => 'das Stichwort %s löschen', //cpg1.4
  'confirm_delete' => 'Wollen Sie wirklich das Stichwort %s aus der gesamten Galerie löschen?', //cpg1.4  // js-alert
  'change_keyword' => 'Stichwort ändern', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
  'login' => 'Anmeldung (Login)',
  'enter_login_pswd' => 'Geben Sie Ihren Benutzernamen und Ihr Passwort ein, um sich anzumelden',
  'username' => 'Benutzername',
  'password' => 'Passwort',
  'remember_me' => 'Immer angemeldet bleiben',
  'welcome' => 'Hallo %s ...',
  'err_login' => '*** Konnte Sie nicht anmelden. Versuche Sie es bitte nochmal ***',
  'err_already_logged_in' => 'Sie sind schon angemeldet!',
  'forgot_password_link' => 'Passwort vergessen',
  'cookie_warning' => 'Achtung: Ihr Browser akzeptiert nicht die Cookies dieses Skripts', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
  'logout' => 'Abmelden',
  'bye' => 'Tschüss %s ...',
  'err_not_loged_in' => 'Sie sind nicht angemeldet!',
);

// ------------------------------------------------------------------------- //
// File minibrowser.php  //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('MINIBROWSER_PHP')) $lang_minibrowser_php = array(
  'close' => 'schliessen', //cpg1.4
  'submit' => 'OK', //cpg1.4
  'up' => 'eine Ebene höher', //cpg1.4
  'current_path' => 'derzeitiger Pfad', //cpg1.4
  'select_directory' => 'Wählen Sie ein Verzeichnis', //cpg1.4
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
  'no_link' => 'Anderen Personen die phpinfo-Daten anzuzeigen, kann ein Sicherheitsrisiko sein - daher wird diese Seite nur angezeigt, wenn Sie als Admin angemeldet sind. Sie können daher anderen keinen Link auf diese Seite zukommen lassen, da ihnen der Zugriff verwährt werden wird!',
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
  'explanation_header' => 'Die benutzerdefinierte Sortierreihenfolge, die Sie auf dieser Seite wählen können wird nur angewendet, wenn', //cpg1.4
  'explanation1' => 'der Administrator die Konfigurationsoption für "Benutzerdefinierte Sortierreihenfolde für Dateien" auf "Position absteigend" oder "Position aufsteigend" gesetzt hat (globale Einstellung für alle Benutzer, die keine andere individuelle Sortierreihenfolge gewählt haben)', //cpg1.4
  'explanation2' => 'der Benutzer als Sortierreihenfolde "Position absteigend" oder "Position aufsteigend" auf der Thumbnail-Seite gewählt hat (Einstellung pro Benutzer)', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File pluginmgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('PLUGINMGR_PHP')){

$lang_pluginmgr_php = array(
  'confirm_uninstall' => 'Dieses Plugin wirklich DE-INSTALLIEREN', //cpg1.4
  'confirm_delete' => 'Dieses Plugin wirklich LÖSCHEN', //cpg1.4
  'pmgr' => 'Plugin Manager', //cpg1.4
  'name' => 'Name', //cpg1.4
  'author' => 'Author', //cpg1.4
  'desc' => 'Beschreibung', //cpg1.4
  'vers' => 'v', //cpg1.4
  'i_plugins' => 'Installierte Plugins', //cpg1.4
  'n_plugins' => 'Nicht installierte Plugins', //cpg1.4
  'none_installed' => 'nicht installiert', //cpg1.4
  'operation' => 'Aufgabe', //cpg1.4
  'not_plugin_package' => 'Die hochgeladene Datei ist kein Plugin-Paket.', //cpg1.4
  'copy_error' => 'Beim Kopieren des Pakets in das Plugin-Verzeichnis ist ein Fehler aufgetreten.', //cpg1.4
  'upload' => 'Hochladen', //cpg1.4
  'configure_plugin' => 'Plugin konfigurieren', //cpg1.4
  'cleanup_plugin' => 'Plugin bereinigen', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
  'already_rated' => 'Sie haben diese Datei schon bewertet',
  'rate_ok' => 'Ihre Bewertung wurde akzeptiert',
  'forbidden' => 'Sie können Ihre eigenen Dateien nicht bewerten.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
Obwohl die Administratoren von {SITE_NAME} versuchen werden, generell alle anstössigen Inhalte so schnell wie möglich zu löschen oder zu bearbeiten, ist es unmöglich, jeden Beitrag zu überprüfen. Daher bestätigen Sie, dass alle Beiträge auf dieser Seite die Ansichten und Meinungen des Authors widerspiegeln und nicht die des Administrators oder Webmasters (außer den Beiträgen, die durch sie verfasst wurden) und sie daher dafür nicht verantwortlich gemacht werden können.<br />
<br />
Sie stimmen zu, keine beleidigende, obszöne, vulgäre, verleumderische, verhetzende, drohende, sexuell-orientierte oder sonstwie illegalen Beiträge zu verfassen. Sie stimmen zu, dass der/die Webmaster, Administrator(en) oder Moderator(en) von {SITE_NAME} das Recht haben, jeden Inhalt zu löschen oder zu ändern, bei dem sie es für richtig halten. Als Benutzer stimmen Sie zu, dass alle Informationen, die Sie oben eingetragen haben, in einer Datenbank gespeichert werden. Obwohl diese Daten ohne Ihre ausdrückliche Zustimmung nicht an Dritte weitergegeben werden, können der Webmaster oder Administrator nicht dafür zur Verantwortung gezogen werden, wenn durch einen Angriff (Hacking) die gespeicherten Daten kompromitiert werden.<br />
<br />
Diese Seite benutzt Cookies, um Daten auf Ihrem Rechner zu speichern. Diese Cookies dienen nur dazu, die Bedienung der Seite zu ermöglichen. Die eMail-Adresse wird nur dazu verwendet, die Registrierungs-Details und das Passwort zu bestätigen.<br />
<br />
Durch das Anklicken von 'ich stimme zu' stimmen Sie diesen Bedingungen zu.
EOT;

$lang_register_php = array(
  'page_title' => 'Benutzer-Registrierung',
  'term_cond' => 'Nutzungsbedingungen',
  'i_agree' => 'ich stimme zu',
  'submit' => 'Registrieren absenden',
  'err_user_exists' => 'Der Benutzername, den Sie eingegeben haben, existiert schon, bitte wählen Sie einen anderen',
  'err_password_mismatch' => 'Die Passwörter stimmen nicht überein, bitte nochmals eingeben',
  'err_uname_short' => 'Der Benutzername muss mindestens 2 Zeichen lang sein',
  'err_password_short' => 'Das Passwort muss mindestens 2 Zeichen lang sein',
  'err_uname_pass_diff' => 'Benutzername und Passwort müssen unterschiedlich sein',
  'err_invalid_email' => 'eMail-Adresse ist ungültig',
  'err_duplicate_email' => 'Es hat sich schon ein anderer Benutzer mit der angegebenen eMail-Adresse registriert',
  'enter_info' => 'Geben Sie Registrierungs-Informationen ein',
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
  'thank_you' => 'Danke für Ihre Registrierung.<br /><br />Eine eMail mit Informationen, wie Sie Ihr Benutzerkonto aktivieren können, wurde an die angegebene eMail-Adresse gesendet.',
  'acct_created' => 'Ihr Benutzerkonto wurde erstellt. Sie können sich jetzt mit Benutzername und Passwort anmelden',
  'acct_active' => 'Ihr Benutzerkonto ist jetzt aktiviert. Sie können sich jetzt mit Benutzername und Passwort anmelden',
  'acct_already_act' => 'Ihr Benutzerkonto ist bereits aktiviert!', //cpg1.4
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
  'update_success' => 'Ihr Benutzerprofil wurde aktualisiert',
  'pass_chg_success' => 'Ihr Passwort wurde geändert',
  'pass_chg_error' => 'Ihr Passwort wurde nicht geändert',
  'notify_admin_email_subject' => '%s - Registrierungs-Benachrichtigung',
  'last_uploads' => 'Zuletzt hochgeladenen Datei.<br />Klicken, um alle Uploads zu sehen von', //cpg1.4
  'last_comments' => 'Neueste Kommentare.<br />Klicken, um alle Komentare zu sehen, die abgegeben wurden von', //cpg1.4
  'notify_admin_email_body' => 'Jemand mit dem Benutzernamen "%s" hat sich in Ihrer Galerie registriert',
  'pic_count' => 'Hochgeladene Dateien', //cpg1.4
  'notify_admin_request_email_subject' => '%s - Registrierungsversuch', //cpg1.4
  'thank_you_admin_activation' => 'Danke.<br /><br />Ihre Registrierung wurde an den Administrator weitergeleitet zur Aktiverung. Nach erfolgter Aktiverung werden Sie eine eMail erhalten.', //cpg1.4
  'acct_active_admin_activation' => 'Das Benutzerkonto ist jetzt aktiv. Dem Benutzer wurde eine Benachrichtigung darüber per eMail gesendet.', //cpg1.4
  'notify_user_email_subject' => '%s - Aktivierungs-Benachrichtigung', //cpg1.4
);

$lang_register_confirm_email = <<<EOT
Danke für Ihre Registrierung bei {SITE_NAME}

Ihr Benutzername ist : "{USER_NAME}"


Um Ihr Benutzerkonto zu aktivieren, müssen Sie auf den untenstehenden Link klicken
oder ihn kopieren und in der Adresszeile Ihres Browsers einfügen.
<a href="{ACT_LINK}">{ACT_LINK}</a>

Grüße,

Das Team von {SITE_NAME}

EOT;

$lang_register_approve_email = <<<EOT
Ein neuer Benutzer hat sich mit dem Benutzernamen "{USER_NAME}" in Ihrer Galerie registriert.

Um das Benutzerkonto zu aktivieren, klicken Sie auf den untenstehenden Link oder kopieren ihn in die Adresszeile Ihres Browsers.

<a href="{ACT_LINK}">{ACT_LINK}</a>

EOT;

$lang_register_activated_email = <<<EOT
Ihr Benutzerkonto wurden genehmigt und aktiviert.

Sie können sich jetzt auf der Seite <a href="{SITE_LINK}">{SITE_LINK}</a> mit dem Benutzernamen "{USER_NAME}" anmelden.


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
  'user_name' => 'Name', //cpg1.4
  'date' => 'Datum', //cpg1.4
  'comment' => 'Kommentar', //cpg1.4
  'file' => 'Datei', //cpg1.4
  'name_a' => 'Benutzername aufsteigend', //cpg1.4
  'name_d' => 'Benutzername absteigend', //cpg1.4
  'date_a' => 'Datum aufsteigend', //cpg1.4
  'date_d' => 'Datum absteigend', //cpg1.4
  'comment_a' => 'Kommentartext aufsteigend', //cpg1.4
  'comment_d' => 'Kommentartext absteigend', //cpg1.4
  'file_a' => 'Datei aufsteigend', //cpg1.4
  'file_d' => 'Datei absteigend', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File search.php                                                           //
// ------------------------------------------------------------------------- //


if (defined('SEARCH_PHP')){

$lang_search_php = array(
  'title' => 'Dateisammlung durchsuchen', //cpg1.4
  'submit_search' => 'suchen', //cpg1.4
  'keyword_list_title' => 'Schlagwortliste', //cpg1.4
  'keyword_msg' => 'Obenstehende Liste ist nicht vollständig - sie enthält keine Wörter aus Titeln oder Beschreibungen. Versuchen Sie eine Volltext-Suche.',  //cpg1.4
  'edit_keywords' => 'Schlagworte bearbeiten', //cpg1.4
  'search in' => 'Suchen in:', //cpg1.4
  'ip_address' => 'IP-Adresse', //cpg1.4
  'fields' => 'Suchen in', //cpg1.4
  'age' => 'Alter', //cpg1.4
  'newer_than' => 'neuer als', //cpg1.4
  'older_than' => 'älter als', //cpg1.4
  'days' => 'Tage(e)', //cpg1.4
  'all_words' => 'mit allen Wörtern (UND)', //cpg1.4
  'any_words' => 'mit irgendeinem der Wörter (ODER)', //cpg1.4
);

$lang_adv_opts = array(
  'title' => 'Titel', //cpg1.4
  'caption' => 'Beschriftung', //cpg1.4
  'keywords' => 'Schlagworte', //cpg1.4
  'owner_name' => 'Besitzer der Datei', //cpg1.4
  'filename' => 'Dateiname', //cpg1.4
);

}

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
  'page_title' => 'Neue Dateien suchen',
  'select_dir' => 'Wähle Sie Verzeichnis',
  'select_dir_msg' => 'Diese Funktion ermöglicht, mehrere Dateien der Galerie hinzuzufügen, die mit einem FTP-Programm schon auf Ihre Webseite hochgeladen wurden.<br /><br />Wähle Sie das Verzeichnis, in das Sie die Dateien hochgeladen haben.', //cpg1.4
  'no_pic_to_add' => 'Keine Datei zum Hinzufügen gefunden',
  'need_one_album' => 'Sie brauchen mindestens ein Album, um dieses Funktion auszuführen',
  'warning' => 'Achtung',
  'change_perm' => 'Das Skript kann nicht in dieses Verzeichnis schreiben, Sie müssen die Lese-/Schreibberechtigung (chmod) auf 755 oder 777 setzen, bevor Sie versuchen, Dateien hinzuzufügen!',
  'target_album' => '<b>Dateien aus dem Verzeichnis &quot;</b>%s<b>&quot; in </b>%s ablegen',
  'folder' => 'Verzeichnis',
  'image' => 'Datei',
  'album' => 'Album',
  'result' => 'Resultat',
  'dir_ro' => 'Verzeichnis nicht beschreibbar',
  'dir_cant_read' => 'Verzeichnis nicht lesbar',
  'insert' => 'Fügen Sie neue Dateien der Galerie hinzu',
  'list_new_pic' => 'Liste neuer Dateien',
  'insert_selected' => 'Markierte Dateien einfügen',
  'no_pic_found' => 'Keine neuen Dateien gefunden',
  'be_patient' => 'Bitte etwas Geduld, das Skript braucht Zeit, um die Bilder hinzuzufügen',
  'no_album' => 'Kein Album gewählt',
  'result_icon' => 'Klicken für Details oder zum erneut laden',  //cpg1.4
  'notes' =>  '<ul>'.
    '<li><b>OK</b> : bedeuted, dass die Datei erfolgreich hinzugefügt wurde'.
    '<li><b>DP</b> : bedeutet, dass die Datei ein Duplikat ist und schon in der Datenbank vorhanden ist'.
    '<li><b>PB</b> : bedeutet, dass die Datei nicht hinzugefügt werden konnte; überprüfen Sie Ihre Einstellungen und die Berechtigungen der Verzeichnisse, in dem die Dateien liegen'.
    '<li><b>NA</b> : bedeutet, dass Sie kein Album gewählt haben, in das die Dateien eingefügt werden sollen, klicken Sie \'<a href="javascript:history.back(1)">zurück</a>\' und wählen Sie ein Album aus. Wenn kein Album ausgewählt werden kann, dann müssen Sie erst <a href="albmgr.php">ein Album erzeugen</a>.</li>'.
    '<li>Falls die OK, DP, PB \'Zeichen\' nicht erscheinen, klicken Sie auf die nicht-funktionierenden Bilder, um die Fehlermeldungen von PHP zu sehen'.
    '<li>Wenn Ihr Browser in ein Timeout läuft, klicken Sie auf die Aktualisieren-Schaltfläche'.
    '</ul>',
  'select_album' => 'Wählen Sie ein Album',
  'check_all' => 'alle auswählen',
  'uncheck_all' => 'Auswahl aufheben',
  'no_folders' => 'Im Verzeichnis "albums" wurden noch keine Unterverzeichnisse angelegt. Sie müssen mindestens ein benutzerdefiniertes Unterverzeichnis innerhalb des Ordners "albums" anlegen und Ihre Dateien per FTP dorthin hochladen. Du dürfen per FTP keine Dateien in die Unterverzeichnisse "userpics" oder "edit" hochladen, da diese für http-uploads und interne Zwecke reserviert sind.', //cpg1.4
   'albums_no_category' => 'Alben ohne Kategorie', //cpg1.4 // album pulldown mod, added by frogfoot
  'personal_albums' => '* Persönliche Alben', //cpg1.4 // album pulldown mod, added by frogfoot
  'browse_batch_add' => 'Durchsuchbare Oberfläche (empfohlen)', //cpg1.4
  'edit_pics' => 'Dateien bearbeiten', //cpg1.4
  'edit_properties' => 'Albums-Eigenschaften', //cpg1.4
  'view_thumbs' => 'Thumbnail-Ansicht', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File stat_details.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('STAT_DETAILS_PHP')) $lang_stat_details_php = array(
  'show_hide' => 'diese Spalte anzeigen/verbergen', //cpg1.4
  'vote' => 'Bewertungsdetails', //cpg1.4
  'hits' => 'Trefferdetails', //cpg1.4
  'stats' => 'Bewertungsstatistik', //cpg1.4
  'sdate' => 'Datum', //cpg1.4
  'rating' => 'Bewertung', //cpg1.4
  'search_phrase' => 'Suchbegriff', //cpg1.4
  'referer' => 'Referer', //cpg1.4
  'browser' => 'Browser', //cpg1.4
  'os' => 'Betriebssystem', //cpg1.4
  'ip' => 'IP-Adresse', //cpg1.4
  'sort_by_xxx' => 'Sortieren nach %s', //cpg1.4
  'ascending' => 'aufsteigend', //cpg1.4
  'descending' => 'absteigend', //cpg1.4
  'internal' => 'intern', //cpg1.4
  'close' => 'schliessen', //cpg1.4
  'hide_internal_referers' => 'interne Verweise verbergen', //cpg1.4
  'date_display' => 'Datumsformat', //cpg1.4
  'submit' => 'absenden/aktualisieren', //cpg1.4
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
  'cust_instr_7' => 'Geben Sie die Anzahl der gewünschten Felder ein und klicken Sie auf \'weiter\'.',
  'reg_instr_1' => 'Unzulässige Aktion bei der Formular-Erzeugung.',
  'reg_instr_2' => 'Sie können jetzt Dateien mit den untenstehenden Feldern hochladen. Keine Datei darf größer als %s kB sein. ZIP-Dateien, die mit Datei-Upload oder URI/URL-Upload hochgeladen werden, bleiben komprimiert.',
  'reg_instr_3' => 'Um ZIP-Dateien auf dem Server automatisch zu entpacken, verwenden Sie die ZIP-Upload Felder.',
  'reg_instr_4' => 'Die URI/URL-Upload Felder müssen dieses Format haben \'http://www.meinseite.de/bilder/beispiel.jpg\'',
  'reg_instr_5' => 'Wenn alle Upload-Felder ausgefüllt sind, klicken Sie auf \'weiter\'.',
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
  'add' => 'Klicken Sie auf \'weiter\', um die Dateien den Alben hinzuzufügen.',
  'failure' => 'Upload-Fehler',
  'f_info' => 'Datei-Information',
  'no_place' => 'Die vorhergehende Datei konnte nicht gesetzt werden.',
  'yes_place' => 'Die vorhergehende Datei wurde erfolgreich gesetzt.',
  'max_fsize' => 'Maximal erlaubte Dateigröße ist %s kB',
  'album' => 'Album',
  'picture' => 'Datei',
  'pic_title' => 'Datei-Titel',
  'description' => 'Datei-Beschreibung',
  'keywords' => 'Stichworte (Trennung mit Leerzeichen)<br /><a href="#" onClick="return MM_openBrWindow(\'keyword_select.php\',\'selectKey\',\'width=250, height=400, scrollbars=yes,toolbar=no,status=yes,resizable=yes\')">von Liste einfügen</a>', //cpg1.4
  'keywords_sel' =>'Wähle Schlagwort', //cpg1.4
  'err_no_alb_uploadables' => 'Leider gibt es kein Album, in das Sie Bilder hochladen dürfen',
  'place_instr_1' => 'Bitte Dateien jetzt den Alben zuordnen.  Es können jetzt zusätzliche Angaben zu den Dateien gemacht werden.',
  'place_instr_2' => 'Es müssen noch mehr Dateien Alben zugeordnet werden. Klicken Sie \'weiter\'!',
  'process_complete' => 'Alle Dateien wurden erfolgreich Alben zugeordnet.',
  'albums_no_category' => 'Alben ohne Kategorie', //cpg1.4. //album pulldown mod, added by frogfoot
  'personal_albums' => '* Persönliche Alben', //cpg1.4 //album pulldown mod, added by frogfoot
  'select_album' => 'Wähle Album', //cpg1.4 //album pulldown mod, added by frogfoot
  'close' => 'schliessen', //cpg1.4
  'no_keywords' => 'Leider keine Schlagworte verfügbar!', //cpg1.4
  'regenerate_dictionary' => 'Wörterbuch aktualisieren', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
  'memberlist' => 'Benutzerliste', //cpg1.4
  'user_manager' => 'Benutzer verwalten', //cpg1.4
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
  'err_edit_self' => 'Sie können Ihr eigenes Profil hier nicht bearbeiten, benutzen Sie dafür den Link \'mein Profil\'',
  'edit' => 'bearbeiten', //cpg1.4
  'with_selected' => 'markierte Benutzer:', //cpg1.4
  'delete' => 'löschen', //cpg1.4
  'delete_files_no' => 'Dateien in öffentlichen Alben behalten (aber anonymisieren)', //cpg1.4
  'delete_files_yes' => 'Dateien in öffentlichen Alben ebenfalls löschen', //cpg1.4
  'delete_comments_no' => 'Kommentare behalten (aber anonymisieren)', //cpg1.4
  'delete_comments_yes' => 'Kommentare ebenfalls löschen', //cpg1.4
  'activate' => 'Aktivieren', //cpg1.4
  'deactivate' => 'Deaktivieren', //cpg1.4
  'reset_password' => 'Passwort zurücksetzen', //cpg1.4
  'change_primary_membergroup' => 'Primäre Mitgliedergruppe ändern', //cpg1.4
  'add_secondary_membergroup' => 'Sekundäre Mitgliederguppe hinzufügen', //cpg1.4
  'name' => 'Benutzername',
  'group' => 'Gruppe',
  'inactive' => 'Inaktiv',
  'operations' => 'Aktion',
  'pictures' => 'Dateien',
  'disk_space_used' => 'Speicherplatzverbrauch', //cpg1.4
  'disk_space_quota' => 'Erlaubter Speicherplatz', //cpg1.4
  'registered_on' => 'Registriert am', //cpg1.4
  'last_visit' => 'Letzter Seitenbesuch',
  'u_user_on_p_pages' => '%d Benutzer auf %d Seite(n)',
  'confirm_del' => 'Wollen Sie diesen Benutzer wirklich LÖSCHEN? \\nAlle seine Dateien und Alben werden ebenfalls gelöscht.', //js-alert
  'mail' => 'Mail',
  'err_unknown_user' => 'Gewählter Benutzer existiert nicht!',
  'modify_user' => 'Benutzer ändern',
  'notes' => 'Anmerkungen',
  'note_list' => '<li>Wenn Sie das derzeitige Passwort nicht ändern wollen, lassen Sie das Feld "Passwort" leer',
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
  'search' => 'Nach Benutzer suchen', //cpg1.4
  'submit' => 'Absenden', //cpg1.4
  'search_submit' => 'Los!', //cpg1.4
  'search_result' => 'Resultate durchsuchen nach: ', //cpg1.4
  'alert_no_selection' => 'Sie müssen zuerst mindestens einen Benutzer auswählen!', //cpg1.4 //js-alert
  'password' => 'Passwort', //cpg1.4
  'select_group' => 'Wähle Gruppe', //cpg1.4
  'groups_alb_access' => 'Alben-Berechtigung nach Gruppenzugehörigkeit', //cpg1.4
  'album' => 'Album', //cpg1.4
  'category' => 'Kategorie', //cpg1.4
  'modify' => 'Ändern?', //cpg1.4
  'group_no_access' => 'Diese Gruppe hat keine besondern Berechtigungen', //cpg1.4
  'notice' => 'Anmerkung', //cpg1.4
  'group_can_access' => 'Album/Alben, auf das/die nur "%s" zugreifen kann', //cpg1.4
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
'Löscht Bilder in Originalgrösse oder Zwischengrösse, um Speicherplatz frei zu geben', //cpg1.4
'Löscht verwaiste Kommentare', //cpg1.4
'Liest Dateigrössen und Dimensionen erneut ein (falls Sie Bilder manuell bearbeitet haben)', //cpg1.4
'Setzt Hits-Zähler zurück', //cpg1.4
'Zeigt phpinfo an', //cpg1.4
'Aktualisert die Datenbank', //cpg1.4
'Zeigt Log-Dateien an', //cpg1.4
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
  'replace_wait' => 'Lösche Originale und ersetze sie mit Bilder in Zwischengröße, bitte warten...',
  'instruction' => 'Kurzanleitung',
  'instruction_action' => 'Wähle Aktion',
  'instruction_parameter' => 'Wähle Parameter',
  'instruction_album' => 'Wähle Album',
  'instruction_press' => 'Klicken Sie %s',
  'update' => 'Thumbnails und/oder Bilder in Zwischengröße aktualisieren',
  'update_what' => 'Was soll aktualisiert werden',
  'update_thumb' => 'Nur Thumbnails',
  'update_pic' => 'Nur Bilder in Zwischengröße',
  'update_both' => 'Sowohl Thumbnails als auch Bilder in Zwischengröße',
  'update_number' => 'Anzahl der Bilder, die pro Klick aktualisiert werden sollen',
  'update_option' => '(Verringere diesen Wert, wenn &quot;Time-Out&quot;-Probleme auftreten sollten)',
  'filename_title' => 'Dateiname &rArr; Bild-Überschrift',
  'filename_how' => 'Wie soll der Titel modifiziert werden',
  'filename_remove' => 'Entferne die Endung .jpg und ersetze _ (Unterstrich) mit Leerzeichen',
  'filename_euro' => 'Ändere 2003_11_23_13_20_20.jpg zu 23/11/2003 13:20',
  'filename_us' => 'Ändere 2003_11_23_13_20_20.jpg zu 11/23/2003 13:20',
  'filename_time' => 'Ändere 2003_11_23_13_20_20.jpg zu 13:20',
  'delete' => 'Lösche Bild-Überschriften oder Bilder in Original-Größe',
  'delete_title' => 'Bild-Überschriften löschen',
  'delete_title_explanation' => 'Diese Option löscht alle Titel von allen Dateien in dem angegebenen Album.', //cpg1.4
  'delete_original' => 'Bilder in Original-Größe löschen',
  'delete_original_explanation' => 'Diese Option entfernt die Bilder in Originalgröße.', //cpg1.4
  'delete_intermediate' => 'Bilder in Zwischengröße löschen', //cpg1.4
  'delete_intermediate_explanation' => 'Diese Option löscht alle Bilder in Zwischengröße (normal_).<br />Empfohlen, um Speicherplatz freizugeben, wenn die Option \'Bilder in Zwischengröße erzeugen\' in den Coppermine-Einstellungen deaktiviert wurde NACHDEM Bilder zur Datenbank hinzugefügt wurden.', //cpg1.4
  'delete_replace' => 'Lösche die Original-Bilder und ersetze sie mit Bilder in Zwischengröße',
  'titles_deleted' => 'Alle Titel in dem angegebenen Album werden gelöscht', //cpg1.4
  'deleting_intermediates' => 'Lösche Bilder in Zwischengröße, bitte warten...', //cpg1.4
  'searching_orphans' => 'Suche nach verwaisten Einträgen, bitte warten...', //cpg1.4
  'select_album' => 'Wähle Album',
  'delete_orphans' => 'Verwaiste Kommentare löschen', //cpg1.4
  'delete_orphans_explanation' => 'Diese Option identifiziert und löscht Kommentare, die mit Dateien verknüpft sind, die nicht mehr in der Datenbank vorhanden sind.<br />Durchläuft alle Alben.', //cpg1.4
  'refresh_db' => 'Informationen über Dateigrößen und -abmessungen erneuern.', //cpg1.4
  'refresh_db_explanation' => 'Diese Option liest die Dateigrößen und -abmessungen erneut ein. Benutzen Sie sie, wenn die Speicherplatz-Anzeige unkorrekt erscheint oder wenn Sie die Dateien manuell verändert haben..', //cpg1.4
  'reset_views' => 'Hits-Zähler zurücksetzen', //cpg1.4
  'reset_views_explanation' => 'Setzt alle "Datei x mal angesehen" Zähler auf Null im angegebenen Album.', //cpg1.4
  'orphan_comment' => 'verwaiste Kommentare gefunden',
  'delete' => 'löschen',
  'delete_all' => 'alle löschen',
  'delete_all_orphans' => 'Alle verwaisten Kommentare löschen?', //cpg1.4
  'comment' => 'Kommentar: ',
  'nonexist' => 'Bezug auf nicht-existierende Datei # ',
  'phpinfo' => 'phpinfo anzeigen',
  'phpinfo_explanation' => 'Zeigt technische Informationen über Ihren Server an.<br /> - Möglicherweise werden Sie nach diesen Informationen gefragt, wenn Sie im Coppermine-Forum um Hilfe bitten.', //cpg1.4
  'update_db' => 'Datenbank aktualisieren',
  'update_db_explanation' => 'Wenn Sie Coppermine-Dateien ersetzt haben, eine Modifikation oder ein Upgrade von einer frühreren Version von Coppermine durchgeführt haben, lassen Sie diese Datenbank-Aktualisierung einmal laufen, um die möglicherweise notwendigen Änderungen an der Datenbank durchzuführen bzw. fehlende Tabellen zu erzeugen.',
  'view_log' => 'Log-Dateien anzeigen', //cpg1.4
  'view_log_explanation' => 'Coppermine kann verschiedene Benutzer-Aktionen protokollieren. Diese Protokolle können hier angesehen werden, wenn die Aufzeichnung von Log-Dateien in den Coppermine-<a href="admin.php">Einstellungen</a> aktiviert wurde.', //cpg1.4
  'versioncheck' => 'Versions-Check', //cpg1.4
  'versioncheck_explanation' => 'Überprüfen Sie die Versionen Ihrer Dateien um herauszufinden, ob alle Dateien bei einem Update korrekt ersetzt wurden, oder ob die Coppermine-Dateien nach der Veröffentlichung eines Pakets aktualisiert wurden.', //cpg1.4
  'bridgemanager' => 'Bridge-Assistent', //cpg1.4
  'bridgemanager_explanation' => 'Assistent zur Integration der Benutzerverwaltung von Coppermine mit einer anderen Applikation (z.B. einem Forum) - sogenanntes "Bridging".', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File versioncheck.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('VERSIONCHECK_PHP')) $lang_versioncheck_php = array(
  'title' => 'Versions-Check', //cpg1.4
  'what_it_does' => 'Diese Seite ist für Benutzer gedacht, die ihre Version von Coppermine aktualisiert haben. Dieses Skript durchläuft alle Dateien auf dem Webserver und versucht festzustellen, ob Ihre lokalen Dateiversionen mit denen der Referenz auf http://coppermine.sourceforge.net übereinstimmen. Dadurch werden die Dateien, die irrtümlich nicht aktualisiert wurden, angezeigt.<br />Alles, was korrigiert werden muss wird in rot angezeigt. Einträge in gelb müssen einer näheren Betrachtung unterzogen werden. Einträge in grün (oder Ihrer Standard-Schriftfarbe) sind OK.<br />Klicken Sie auf die Hilfe-Icons für Details.', //cpg1.4
  'online_repository_unable' => 'Konnte nicht mit Referenz-Datei abgleichen', //cpg1.4
  'online_repository_noconnect' => 'Coppermine konnte sich nicht mit der Referenz-Datei abzugleichen. Dies kann 2 Gründe haben:', //cpg1.4
  'online_repository_reason1' => 'die Referenzdatei ist derzeit nicht online - überprüfen Sie, ob Sie mit dem Browser diese Seite anzeigen können: %s - falls nicht, versuchen Sie später noch einmal, den Versions-Check durchzuführen.', //cpg1.4
  'online_repository_reason2' => 'Auf Ihrem Webserver ist PHP so konfiguriert, dass %s deaktiviert ist (Standard-mässig ist diese Option aktiviert). Falls Sie den Webserver administrieren können, aktivieren Sie diese Option in Ihrer <i>php.ini</i> (erlauben Sie zumindest, dass die globale Einstellung mit %s temporär umgangen werden kann). Falls Sie jedoch auf einem fremden Server gehostet sind müssen Sie wahrscheinlich damit leben, dass Sie Ihre Dateien nicht online vergleichen können. In diesem Fall wird diese Seite nur die Dateiversionen mit denen der Ditribution vergleichen - spätere Updates werden nicht in Betracht gezogen.', //cpg1.4
  'online_repository_skipped' => 'Verbindung mit der Referenz-Datei übersprungen', //cpg1.4
  'online_repository_to_local' => 'Das Skript benutzt jetzt die lokale Kopie der Versions-Dateien. Die Daten sind möglicherweise ungenau, falls Sie Coppermine aktualisiert und nicht alle Dateien hochgeladen haben. Änderungen an Dateiversionen, die nach der Veröffentlichung des Pakets vorgenommen wurden, werden nicht berücksichtigt.', //cpg1.4
  'local_repository_unable' => 'Das Skript konnte sich nicht mit der Referenzdatei auf Ihrem Server verbinden', //cpg1.4
  'local_repository_explanation' => 'Coppermine konnte sich nicht mit der Refernzdatei %s auf Ihrem Webserver verbinden. Das bedeutet wahrscheinlich, dass Sie die Refernzdatei nicht auf den Server hochgeladen haben. Erledige Sie das nun und versuchen Sie dann, diese Seite erneut zu laden (klicken Sie auf "aktualisieren").<br />Falls das immer noch fehl schlägt, dann hat Ihr Webhost möglicherweise Teile der <a href="http://www.php.net/manual/de/ref.filesystem.php">Dateifunktionen von PHP</a> komplett deaktiviert. In diesem Fall können Sie dieses Tool leider gar nicht benutzen.', //cpg1.4
  'coppermine_version_header' => 'Installierte Coppermine-Version', //cpg1.4
  'coppermine_version_info' => 'Sie haben derzeit installiert: %s', //cpg1.4
  'coppermine_version_explanation' => 'Falls Sie der Meinung sein sollten, dass das falsch ist und Sie eine neuere Version von Coppermine haben sollten, dann haben Sie wahrscheinlich nicht die aktuellste Version der Datei <i>include/init.inc.php</i> hochgeladen', //cpg1.4
  'version_comparison' => 'Versions-Vergleich', //cpg1.4
  'folder_file' => 'Verzeichnis/Datei', //cpg1.4
  'coppermine_version' => 'cpg-Version', //cpg1.4
  'file_version' => 'Datei-Version', //cpg1.4
  'webcvs' => 'web svn', //cpg1.4
  'writable' => 'beschreibbar', //cpg1.4
  'not_writable' => 'nicht beschreibbar', //cpg1.4
  'help' => 'Hilfe', //cpg1.4
  'help_file_not_exist_optional1' => 'Datei/Verzeichnis existiert nicht', //cpg1.4
  'help_file_not_exist_optional2' => 'Die Datei / das Verzeichnis %s wurde auf Ihrem Server nicht gefunden. Obwohl sie optional ist sollten Sie sie auf Ihren Server hochladen (benutzen Sie dazu Ihr FTP-Programm), zumindest wenn Probleme auftreten.', //cpg1.4
  'help_file_not_exist_mandatory1' => 'Datei/Verzeichnis existiert nicht', //cpg1.4
  'help_file_not_exist_mandatory2' => 'Datei/Verzeichnis %s wurde auf dem Server nicht gefunden, obwohl es zwingend benötigt wird. Laden Sie die Datei (mit Hilfe Ihres FTP-Programms) auf Ihren Webserver hoch..', //cpg1.4
  'help_no_local_version1' => 'Keine lokale Dateiversion', //cpg1.4
  'help_no_local_version2' => 'Das Skript konnte die Versionsinformation aus der lokalen Datei-Version nicht extrahieren - Ihre Datei ist entweder veraltet, oder Sie haben die Datei verändert und dabei den Datei-Header geändert. Es ist empfehlenswert, die Datei zu aktualisieren.', //cpg1.4
  'help_local_version_outdated1' => 'Lokale Version veraltet', //cpg1.4
  'help_local_version_outdated2' => 'Ihre Version der Datei scheint von einer älteren Version von Coppermine zu stammen (Sie haben wahrscheinlich ein Upgrade durchgeführt). Ersetzen Sie auch diese Datei mit der aktuelleren Version.', //cpg1.4
  'help_local_version_na1' => 'Konnte SVN-Versions-Information nicht extrahieren', //cpg1.4
  'help_local_version_na2' => 'Das Skript konnte die SVN-Versions-Information nicht aus der lokalen Datei auf Ihrem Webserver extrahieren. Sie sollten diese Datei aktualisieren.', //cpg1.4
  'help_local_version_dev1' => 'Entwicklungs-Version', //cpg1.4
  'help_local_version_dev2' => 'Die Datei auf Ihrem Webserver scheint neuer zu sein als Ihre Coppermine-Version. Sie benutzen entweder eine Entwicklungs-Version (nur empfohlen für erfahrene Anwender), oder Sie haben Ihre Coppermine-Installation aktualisiert und die Datei include/init.inc.php nicht hochgeladen.', //cpg1.4
  'help_not_writable1' => 'Verzeichnis nicht beschreibbar', //cpg1.4
  'help_not_writable2' => 'Ändern Sie die Berechtigungen (CHMOD), um dem Skript Schreibrechte auf den Ordner %s und alles darin befindliche zu gewähren.', //cpg1.4
  'help_writable1' => 'Verzeichnis beschreibbar', //cpg1.4
  'help_writable2' => 'Das Verzeichnis %s ist beschreibbar. Dies stellt ein unnötiges Sicherheitsrisiko dar, Coppermine benötigt nur Lese- und Ausführungsrechte.', //cpg1.4
  'help_writable_undetermined' => 'Das Skript konnte nicht feststellen, ob das Verzeichnis beschreibbar ist.', //cpg1.4
  'your_file' => 'Ihre Datei', //cpg1.4
  'reference_file' => 'Referenz-Datei', //cpg1.4
  'summary' => 'Zusammenfassung', //cpg1.4
  'total' => 'Summe der überprüften Verzeichnisse/Dateien', //cpg1.4
  'mandatory_files_missing' => 'Fehlende verbindlich benötigte Dateien', //cpg1.4
  'optional_files_missing' => 'Fehlende optionale Dateien', //cpg1.4
  'files_from_older_version' => 'Dateien, die von veralteten Coppermine-Versionen stammen', //cpg1.4
  'file_version_outdated' => 'Veraltete Datei-Versionen', //cpg1.4
  'error_no_data' => 'Das Skript hat einen Fehler verursacht und konnte keine Versionsinformationen auslesen. Sorry.', //cpg1.4
  'go_to_webcvs' => 'gehe zu %s', //cpg1.4
  'options' => 'Optionen', //cpg1.4
  'show_optional_files' => 'optionale Verzeichnisse/Dateien anzeigen', //cpg1.4
  'show_mandatory_files' => 'verbindlich benötigte Dateien anzeigen', //cpg1.4
  'show_file_versions' => 'Dateiversionen anzeigen', //cpg1.4
  'show_errors_only' => 'Nur Verzeichnisse und Dateien mit Fehlern anzeigen', //cpg1.4
  'show_permissions' => 'Berechtigungen anzeigen', //cpg1.4
  'show_condensed_output' => 'Reduzierte Ausgabe (zur einfacheren Erstellung von Screenshots)', //cpg1.4
  'coppermine_in_webroot' => 'Coppermine ist im Wurzelverzeichnis der Domäne installiert', //cpg1.4
  'connect_online_repository' => 'Verbindungsaufbau zur Referenzdatei versuchen', //cpg1.4
  'show_additional_information' => 'Zusatzinformationen anzeigen', //cpg1.4
  'no_webcvs_link' => 'Web-CVS-Links nicht anzeigen', //cpg1.4
  'stable_webcvs_link' => 'Web-CVS-Links zur "stable-branch" anzeigen', //cpg1.4
  'devel_webcvs_link' => 'Web-CVS-Links zur "devel-branch" anzeigen', //cpg1.4
  'submit' => 'Änderungen durchführen / aktualisieren', //cpg1.4
  'reset_to_defaults' => 'Standard-Einstellungen wieder herstellen', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File view_log.php  //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('VIEWLOG_PHP')) $lang_viewlog_php = array(
  'delete_all' => 'Alle Logs löschen', //cpg1.4
  'delete_this' => 'Dieses Log löschen', //cpg1.4
  'view_logs' => 'Logs anzeigen', //cpg1.4
  'no_logs' => 'Keine Logs vorhanden', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File xp_publish.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('XP_PUBLISH_PHP')) {

$lang_xp_publish_client = <<<EOT
<h1>XP Web Publishing Assistent</h1><p>Dieses Modul ermöglicht es, den <b>Windows XP</b> web publishing Assistenten mit Coppermine zu benutzen.</p><p>Der zugrunde liegende Code basiert auf einem Artikel von
EOT;

$lang_xp_publish_required = <<<EOT
<h2>Was wird benötigt</h2><ul><li>Windows XP, damit der Assistent zur Verfügung steht.</li><li>Eine funktionierende Coppermine-Installation, bei der das Hochladen von Dateien funktioniert.</b></li></ul><h2>Wie installiere ich die nötige Software auf meinem Rechner</h2><ul><li>Rechts-Klick auf
EOT;

$lang_xp_publish_select = <<<EOT
Wähle Sie &quot;Zeil speichern unter..&quot;. Speichern Sie die Datei auf Ihrer Festplatte. Überprüfen Sie beim Speichern, dass der vorgeschlagene Name  <b>cpg_###.reg</b> lautet (die ###-Symbole repräsentieren einen numerischen Zeitstempel). Ändern Sie ggf. den Namen ab (aber lassen Sie die Zahlen so, wie sie sind). Nach erfolgtem Download, doppelklicken Sie auf die heruntergeladene Datei, um den Coppermine-Server beim Web Publishing-Assistenten zu registrieren.</li></ul>
EOT;

$lang_xp_publish_testing = <<<EOT
<h2>Testen</h2><ul><li>Markieren Sie einige Grafik-Dateien im Windows Explorer und klicken Sie dann auf <b>xxx im Internet veröffentlichen</b> in der linken Leiste des Explorers.</li><li>Bestätigen Sie Ihre Dateiauswahl. Klicken Sie auf <b>weiter</b>.</li><li>In der Liste der zur Verfügung stehenden Dienste, wählen Sie Ihre Foto-Galerie (der Eintrag hat den Namen Ihrer Galerie). Falls der Diesnt nicht erscheint, überprüfen Sie, ob Sie <b>cpg_pub_wizard.reg</b> wie oben beschrieben installiert haben.</li><li>Geben Sie Ihre Zugangsinformationen ein, falls notwendig.</li><li>Wählen Sie ein Album als Ziel der Bilder oder erzeugen Sie ein neues Album.</li><li>Klicken Sie auf <b>weiter</b>. Der Upload Ihrer Bilder startet jetzt.</li><li>Wenn der Upload beendet ist, überprüfen Sie auf der Galerie-Seite, dass alle Bilder korrekt hochgeladen wurden.</li></ul>
EOT;

$lang_xp_publish_notes = <<<EOT
<h2>Anmerkungen :</h2><ul><li>Wenn der Upload-Vorgang erst einmal gestartet ist, kann der Assistent keine Fehlermeldungen anzeigen, die vom Skript generiert werden; daher kann man nicht wissen, ob ein Upload erfolgreich war oder nicht, außer durch Besuch der Coppermine-Galerie.</li><li>Wenn ein Upload fehlschlägt, aktivieren Sie den &quot;Debug-Modus&quot; in den Coppermine-Einstellungen, laden Sie ein einzelnes Bild hoch und überprüfen Sie dann die Fehlermeldungen in der
EOT;

$lang_xp_publish_flood = <<<EOT
Datei, die im Coppermine-Verzeichnis auf Ihrem Server liegt.</li><li>Um zu vermeiden, dass die Galerie überflutet wird mit Uploads durch den Assistenten können nur die <b>Administratoren der Galerie</b> und <b>Benutzer, die eigene Alben haben dürfen</b> dieses Feature nutzen.</li>
EOT;



$lang_xp_publish_php = array(
  'title' => 'Coppermine - XP Web Publishing Assistent', //cpg1.4
  'welcome' => 'Willkommen <b>%s</b>,', //cpg1.4
  'need_login' => 'Um diesen Assistenten zu nutzen müssen Sie sich bei der Galerie mit Hilfe Ihres Browsers (IE) anmelden.<p/><p>Vergessen Sie nicht, die Option  &quot;<b>Immer angemeldet bleiben</b>&quot; bei der Anmeldung zu aktivieren, wenn vorhanden.', //cpg1.4
  'no_alb' => 'Leider gibt es keine Alben, in die Sie berechtigt sind mit diesem Assistenten Bilder hochzuladen.', //cpg1.4
  'upload' => 'Laden Sie Ihre Bilder in ein bestehendes Album hoch', //cpg1.4
  'create_new' => 'Erstellen Sie ein neues Album für Ihre Bilder', //cpg1.4
  'album' => 'Album', //cpg1.4
  'category' => 'Kategorie', //cpg1.4
  'new_alb_created' => 'Ihr neues Album &quot;<b>%s</b>&quot; wurde erstellt.', //cpg1.4
  'continue' => 'Klicken Sie auf &quot;Weiter&quot;, um Ihre Bilder hochzuladen', //cpg1.4
  'link' => 'dieser Link', //cpg1.4
);
}
?>