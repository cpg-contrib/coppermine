/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2009 Coppermine Dev Team
  v1.1 originaly written by Gregory DEMAR

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  as published by the Free Software Foundation.

  ********************************************
  Coppermine version: 1.5.1
  $Revision$
  $LastChangedBy$
  $Date$
**********************************************/

var linebreak = '\n';

$(function() {
    $("#toc_overall").treeview({
        collapsed: true,
        animated: "medium",
        control:"#sidetreecontrol"
    });
})

function cpgDocToc() {
  if (getUrlParameters('hide_nav') == 1) {
  	$('#toc').replaceWith('');
	return;
  }
var doc_toc = '';
doc_toc += '<div id="toc_collapsed">\n';
doc_toc += '<h6><a href="toc.htm">Inhaltsverzeichnis</a></h6>\n';
doc_toc += 'Bewege Deine Maus über dieses Feld\n';
doc_toc += '<div align="center"><img src="../../images/icons/downdown.png" border="0" width="10" height="10" alt="" /></div>\n';
doc_toc += '</div>\n';
doc_toc += '<div id="toc_expanded" style="display:none;">\n';
doc_toc += '<h6>Inhaltsverzeichnis (<a href="../index.htm">Sprachauswahl</a>)</h6>\n';
doc_toc += '<ul id="tree">\n';
doc_toc += '  <li><a href="index.htm">Coppermine Dokumentation</a>\n';
doc_toc += '    <ul class="level2" id="index">\n';
doc_toc += '      <li><a href="index.htm#about">Über Coppermine</a></li>\n';
doc_toc += '      <li><a href="index.htm#about_documentation">Über die Dokumentation</a></li>\n';
doc_toc += '      <li><a href="index.htm#features" class="en">Features</a></li>\n';
doc_toc += '      <li><a href="quickstart.htm#about" class="cancel">Schnellstart-Assistent</a></li>\n';
doc_toc += '      <li><a href="toc.htm">Inhaltsverzeichnis</a></li>\n';
doc_toc += '      <li><a href="requirements.htm">Mindestvoraussetzung</a></li>\n';
doc_toc += '      <li><a href="testing.htm" class="en">Test (Alpha/Beta-Versionen!)</a></li>\n';
doc_toc += '      <li><a href="languages.htm">Sprachen</a>\n';
doc_toc += '        <ul class="level3" id="languages">\n';
doc_toc += '          <li><a href="translation.htm" class="cancel">Übersetzungs-Assistent</a></li>\n';
doc_toc += '        </ul>\n';
doc_toc += '      </li>\n';
doc_toc += '      <li><a href="credits.htm">Danksagungen</a>\n';
doc_toc += '        <ul class="level3" id="credits">\n';
doc_toc += '          <li><a href="credits.htm#developers">Coppermine Team</a></li>\n';
doc_toc += '          <li><a href="credits.htm#contributors">Unterstützer</a></li>\n';
doc_toc += '          <li><a href="credits.htm#translators">Übersetzer</a>\n';
doc_toc += '            <ul class="level3" id="translators">\n';
doc_toc += '              <li><a href="credits.htm#translators_language_file">Sprachdateien</a></li>\n';
doc_toc += '              <li><a href="credits.htm#translators_documentation">Dokumentation</a></li>\n';
doc_toc += '            </ul>\n';
doc_toc += '          </li>\n';
doc_toc += '          <li><a href="credits.htm#codebase">Verwendeter Open Source Code</a></li>\n';
doc_toc += '        </ul>\n';
doc_toc += '      </li>\n';
doc_toc += '      <li><a href="copyrights.htm">Lizenz &amp; Copyright</a>\n';
doc_toc += '        <ul>\n';
doc_toc += '          <li><a href="copyrights.htm#copyright_copyright">Copyrights</a></li>\n';
doc_toc += '          <li><a href="copyrights.htm#copyright_license">Lizenz</a></li>\n';
doc_toc += '          <li><a href="copyrights.htm#copyrights_previous_versions">Vorhergehende Versionen</a></li>\n';
doc_toc += '          <li><a href="copyrights.htm#copyright_additional">Zusätzliche Bedingungen</a></li>\n';
doc_toc += '        </ul>\n';
doc_toc += '      </li>\n';
doc_toc += '      <li><a href="known_issues.htm" class="en">Bekannte Probleme</a></li>\n';
doc_toc += '    </ul>\n';
doc_toc += '  </li>\n';
doc_toc += '  <li><a href="install.htm" class="en">Installation und Einstellungen</a>\n';
doc_toc += '    <ul>\n';
doc_toc += '      <li><a href="install.htm#how" class="en">Wie man das Skript installiert</a></li>\n';
doc_toc += '      <li><a href="install.htm#what" class="en">Was passiert während der Installation</a></li>\n';
doc_toc += '      <li><a href="install_permissions.htm" class="en">Berechtigungs-Einstellungen</a>\n';
doc_toc += '        <ul>\n';
doc_toc += '          <li><a href="install_permissions.htm#chmod" class="en">Apache auf Unix/Linux (CHMOD)</a></li>\n';
doc_toc += '          <li><a href="install_permissions.htm#apache_windows" class="en">Apache auf Windows</a></li>\n';
doc_toc += '          <li><a href="install_permissions.htm#iis" class="en">IIS auf Windows</a></li>\n';
doc_toc += '          <li><a href="install_permissions.htm#support" class="en">Unterstützung/Support in Berechtigungsfragen</a></li>\n';
doc_toc += '        </ul>\n';
doc_toc += '      </li>\n';
doc_toc += '      <li><a href="install_screen.htm" class="en">Der Installations-Assistent</a></li>\n';
doc_toc += '      <li><a href="auto-installers.htm" class="en">Automatische Installation</a></li>\n';
doc_toc += '      <li><a href="install_faq.htm" class="en">Installations FAQ</a></li>\n';
doc_toc += '      <li><a href="uninstall.htm" class="en">De-Installation</a></li>\n';
doc_toc += '    </ul>\n';
doc_toc += '  </li>\n';
doc_toc += '  <li><a href="upgrading.htm" class="en">Aktualisierung</a>\n';
doc_toc += '    <ul>\n';
doc_toc += '      <li><a href="upgrading.htm#upgrade_why" class="en">Warum aktualisieren?</a>\n';
doc_toc += '          <ul>\n';
doc_toc += '              <li><a href="upgrading.htm#upgrade_why_reasons" class="en">Gründe für die Veröffentlichungen</a></li>\n';
doc_toc += '              <li><a href="upgrading.htm#upgrade_why_changelog" class="en">Changelog</a></li>\n';
doc_toc += '          </ul>\n';
doc_toc += '      </li>\n';
doc_toc += '      <li><a href="upgrading.htm#upgrade_any" class="en">Aktualisierungs-Schritte (alle Versionen)</a></li>\n';
doc_toc += '      <li><a href="upgrading.htm#upgrade_particular" class="en">Zusätzliche Schritte für bestimmte Versionen</a>\n';
doc_toc += '        <ul>\n';
doc_toc += '          <li><a href="upgrading.htm#upgrade_10" class="en">Aktualisierung von cpg1.0,1.1,1.2.x oder 1.3.x</a></li>\n';
doc_toc += '          <li><a href="upgrading.htm#upgrade_14" class="en">Aktualisierung von cpg1.4.x auf Version cpg1.5.x</a></li>\n';
doc_toc += '        </ul>\n';
doc_toc += '      </li>\n';
doc_toc += '      <li><a href="upgrading.htm#updater" class="en">Das Aktualisierungs-Skript</a>\n';
doc_toc += '          <ul class="level3" id="updater">\n';
doc_toc += '              <li><a href="upgrading.htm#updater_what_it_does" class="en">Was das Skript tut</a></li>\n';
doc_toc += '              <li><a href="upgrading.htm#updater_purpose" class="en">Zweck</a></li>\n';
doc_toc += '              <li><a href="upgrading.htm#updater_authorization" class="en">Überprüfung der Berechtigung</a></li>\n';
doc_toc += '              <li><a href="upgrading.htm#updater_when" class="en">Wann muss das Aktualiserungs-Skript laufen?</a></li>\n';
doc_toc += '          </ul>\n';
doc_toc += '      </li>\n';
doc_toc += '      <li><a href="upgrading.htm#versioncheck" class="en">Die Versions-Prüfung</a>\n';
doc_toc += '        <ul>\n';
doc_toc += '          <li><a href="upgrading.htm#versioncheck_description_start" class="en">Was das Skript tut</a></li>\n';
doc_toc += '          <li><a href="upgrading.htm#versioncheck_options_start" class="en">Optionen</a></li>\n';
doc_toc += '          <li><a href="upgrading.htm#versioncheck_comparison_start" class="en">Versionsvergleich</a></li>\n';
doc_toc += '        </ul>\n';
doc_toc += '      </li>\n';
doc_toc += '      <li><a href="upgrading.htm#upgrade_faq" class="en">Aktualisierungs-FAQ</a></li>\n';
doc_toc += '      <li><a href="upgrading.htm#downgrading" class="en">Von cpg1.5.x auf eine ältere Version downgraden</a></li>\n';
doc_toc += '    </ul>\n';
doc_toc += '  </li>\n';
doc_toc += '  <li><a href="start.htm" class="en">Am Anfang</a>\n';
doc_toc += '    <ul>\n';
doc_toc += '      <li><a href="start.htm#getting_concepts" class="en">Grundlegende Konzepte</a></li>\n';
doc_toc += '      <li><a href="start.htm#getting_initial_configuration" class="en">Erstmalige Einrichtung</a></li>\n';
doc_toc += '      <li><a href="start.htm#getting_structure" class="en">Kategorie/Alben/Datei-Struktur</a></li>\n';
doc_toc += '      <li><a href="start.htm#getting_resizing" class="en">Größenänderung von Bildern</a></li>\n';
doc_toc += '      <li><a href="start.htm#getting_admin_account" class="en">Dein Admin-Konto</a></li>\n';
doc_toc += '      <li><a href="start.htm#getting_check_uploads" class="en">Hochladen</a></li>\n';
doc_toc += '      <li><a href="start.htm#getting_consider_bridging" class="en">Bridging in Betracht ziehen</a></li>\n';
doc_toc += '      <li><a href="start.htm#getting_interaction" class="en">Was dürfen die Besucher der Seite tun?</a></li>\n';
doc_toc += '      <li><a href="start.htm#getting_design" class="en">Das Aussehen Deiner Galerie anpassen</a></li>\n';
doc_toc += '      <li><a href="start.htm#getting_typical" class="en">Gebräuchliche Einstellungen</a></li>\n';
doc_toc += '    </ul>\n';
doc_toc += '  </li>\n';
doc_toc += '  <li><a href="faq.htm" class="en">Häufig gestellte Fragen (FAQ)</a></li>\n';
doc_toc += '  <li><a href="theme.htm" class="en">Designs (Themes)</a>\n';
doc_toc += '    <ul>\n';
doc_toc += '      <li><a href="theme.htm#theme_builtin" class="en">Mitgelieferte Designs</a></li>\n';
doc_toc += '      <li><a href="theme.htm#theme_upgrading" class="en">Aktualisierung Deines selbstgemachten Designs</a>\n';
doc_toc += '      <ul>\n';
doc_toc += '        <li><a href="theme_upgrade_14x-15x.htm" class="en">Konvertierung von cpg1.4.x-Themes auf cpg1.5.x</a>\n';
doc_toc += '          <ul>\n';
doc_toc += '            <li><a href="theme_upgrade_14x-15x.htm#style" class="en">Bearbeite style.css</a></li>\n';
doc_toc += '            <li><a href="theme_upgrade_14x-15x.htm#template" class="en">Bearbeite template.html</a></li>\n';
doc_toc += '            <li><a href="theme_upgrade_14x-15x.htm#theme" class="en">Bearbeite theme.php</a></li>\n';
doc_toc += '            <li><a href="theme_upgrade_14x-15x.htm#validation" class="en">Validierung</a></li>\n';
doc_toc += '          </ul>\n';
doc_toc += '        </li>\n';
doc_toc += '        <li><a href="theme_upgrade_13x-14x.htm" class="en">Konvertierung von cpg1.3.x-Themes auf cpg1.4.x</a>\n';
doc_toc += '          <ul>\n';
doc_toc += '            <li><a href="theme_upgrade_13x-14x.htm#style" class="en">Bearbeite style.css</a></li>\n';
doc_toc += '            <li><a href="theme_upgrade_13x-14x.htm#template" class="en">Bearbeite template.html</a></li>\n';
doc_toc += '            <li><a href="theme_upgrade_13x-14x.htm#theme" class="en">Bearbeite theme.php</a></li>\n';
doc_toc += '            <li><a href="theme_upgrade_13x-14x.htm#validation" class="en">Bearbeite Methodology</a></li>\n';
doc_toc += '          </ul>\n';
doc_toc += '        </li>\n';
doc_toc += '      </ul>\n';
doc_toc += '      </li>\n';
doc_toc += '      <li><a href="theme.htm#theme_files" class="en">Inhalt eines Themes</a></li>\n';
doc_toc += '      <li><a href="theme.htm#theme_engine" class="en">Wie ein Theme funktioniert</a></li>\n';
doc_toc += '      <li><a href="theme_user-contributions.htm#theme_user-contributions" class="en">Zusätzliche Themes</a></li>\n';
doc_toc += '      <li><a href="theme_create.htm#theme_create" class="en">Erstellung eines eigenen Themes</a>\n';
doc_toc += '        <ul>\n';
doc_toc += '          <li><a href="theme_create.htm#theme_create_rename" class="en">Benennen Dein Theme zuerst um</a></li>\n';
doc_toc += '          <li><a href="theme_create.htm#theme_create_tipps" class="en">Tips &amp; Tricks</a></li>\n';
doc_toc += '          <li><a href="theme_create.htm#theme_create_wysiwyg" class="en">Verwendung von grafischen Editoren</a></li>\n';
doc_toc += '          <li><a href="theme_create.htm#theme_create_colors" class="en">Farben bearbeiten</a></li>\n';
doc_toc += '          <li><a href="theme_create_matching_page_tutorial.htm#theme_matching" class="en">Erstellen eines Themes für Coppermine im Stil der restlichen Seite</a></li>\n';
doc_toc += '        </ul>\n';
doc_toc += '      </li>\n';
doc_toc += '      <li><a href="theme_template.htm#theme_template_html" class="en">Bearbeitung von template.html</a>\n';
doc_toc += '          <ul class="level3" id="theme_template_html">\n';
doc_toc += '              <li><a href="theme_template.htm#theme_template_token" class="en">Template-Platzhalter</a></li>\n';
doc_toc += '              <li><a href="theme_template.htm#theme_template_important" class="en">Wichtig</a></li>\n';
doc_toc += '              <li><a href="theme_template.htm#theme_template_token_list" class="en">Übersicht der Platzhalter in template.html</a></li>\n';
doc_toc += '          </ul>\n';
doc_toc += '      </li>\n';
doc_toc += '      <li><a href="theme_style_css.htm#theme_style_css" class="en">Bearbeitung von style.css</a></li>\n';
doc_toc += '      <li><a href="theme_theme_php.htm#theme_create_theme_php" class="en">Bearbeitung von theme.php</a>\n';
doc_toc += '          <ul class="level3" id="theme_theme_php">\n';
doc_toc += '              <li><a href="theme_theme_php.htm#theme_php_types" class="en">Element-Arten</a></li>\n';
doc_toc += '              <li><a href="theme_theme_php.htm" class="en">Das sample Theme - eine Kopiervorlage</a></li>\n';
doc_toc += '              <li><a href="theme_theme_php.htm#theme_php_method" class="en">Methode</a></li>\n';
doc_toc += '              <li><a href="theme_theme_php.htm#theme_php_scope" class="en">Anwendungsbereich</a></li>\n';
doc_toc += '              <li><a href="theme_theme_php.htm#theme_php_list" class="en">Übersicht der Elemente in theme.php</a></li>\n';
doc_toc += '              <li><a href="theme_examples.htm#theme_examples" class="en">Theme-Beispiele</a></li>\n';
doc_toc += '          </ul>\n';
doc_toc += '      </li>\n';
doc_toc += '      <li><a href="theme_copyright.htm" class="en">Copyright-Disclaimer in der Fußzeile</a></li>\n';
doc_toc += '      <li><a href="php-content.htm" class="en">Dynamischer (PHP-basierter) Inhalt</a>\n';
doc_toc += '        <ul>\n';
doc_toc += '          <li><a href="php-content.htm#php-content_anycontent" class="en">Verwendung von anycontent.php</a></li>\n';
doc_toc += '          <li><a href="php-content.htm#php-content_header_footer" class="en">Benutzerdefinierte Kopf- und Fußzeile</a></li>\n';
doc_toc += '          <li><a href="php-content.htm#php-content_theme" class="en">Theme-basierter dynamischer Inhalt (theme.php)</a></li>\n';
doc_toc += '          <li><a href="php-content.htm#php-content_core" class="en">Veränderung von Grund-Dateien</a></li>\n';
doc_toc += '        </ul>\n';
doc_toc += '      </li>\n';
doc_toc += '      <li><a href="theme_graphics.htm" class="en">Grafische Resourcen in Designs</a>\n';
doc_toc += '          <ul class="level3" id="theme_graphics">\n';
doc_toc += '              <li><a href="theme_graphics.htm#theme_graphics_menu_icons" class="en">Menü-Icons</a></li>\n';
doc_toc += '              <li><a href="theme_graphics.htm#theme_graphics_nav_bar" class="en">Bildnavigation</a></li>\n';
doc_toc += '              <li><a href="theme_graphics.htm#theme_graphics_rating" class="en">Bewertungs-Icons</a></li>\n';
doc_toc += '          </ul>\n';
doc_toc += '      </li>\n';
doc_toc += '    </ul>\n';
doc_toc += '  </li>\n';
doc_toc += '  <li><a href="administration.htm">Administration</a>\n';
doc_toc += '    <ul>\n';
doc_toc += '      <li><a href="admin_menu.htm" class="en">Admin-Menü-Einträge</a></li>\n';
doc_toc += '      <li><a href="banning.htm#banning" class="en">Verbannen</a></li>\n';
doc_toc += '      <li><a href="configuration.htm">Einstellungen</a>\n';
doc_toc += '        <ul class="level3" id="configuration">\n';
doc_toc += '          <li><a href="configuration.htm#admin_general">Allgemeine Einstellungen</a></li>\n';
doc_toc += '          <li><a href="configuration.htm#admin_language">Sprach- &amp; Zeichensatz-Einstellungen</a></li>\n';
doc_toc += '          <li><a href="configuration.htm#admin_theme">Themen-Einstellungen</a></li>\n';
doc_toc += '          <li><a href="configuration.htm#admin_album_list">Ansicht Albenliste</a></li>\n';
doc_toc += '          <li><a href="configuration.htm#admin_thumbnail_view">Ansicht Thumbnail</a></li>\n';
doc_toc += '          <li><a href="configuration.htm#admin_image_comment" class="en">Ansicht Bild</a></li>\n';
doc_toc += '          <li><a href="configuration.htm#admin_comment_start" class="en">Einstellungen Kommentare</a></li>\n';
doc_toc += '          <li><a href="configuration.htm#admin_contact_start" class="en">Kontakformular-Einstellungen</a></li>\n';
doc_toc += '          <li><a href="configuration.htm#admin_thumb_start" class="en">Thumbnail Einstellungen</a></li>\n';
doc_toc += '          <li><a href="configuration.htm#admin_picture_thumbnail" class="en">Bild/Datei-Einstellungen</a></li>\n';
doc_toc += '          <li><a href="configuration.htm#admin_watermarking" class="en">Wasserzeichen auf Bildern</a></li>\n';
doc_toc += '          <li><a href="configuration.htm#admin_registration" class="en">Registrierung</a></li>\n';
doc_toc += '          <li><a href="configuration.htm#admin_user" class="en">Benutzer-Einstellungen</a></li>\n';
doc_toc += '          <li><a href="configuration.htm#admin_custom" class="en">Benutzerdefinierte Felder für Benutzerprofile</a></li>\n';
doc_toc += '          <li><a href="configuration.htm#admin_custom_image" class="en">Benutzerdefinierte Felder für zusätzliche Dateiinformationen</a></li>\n';
doc_toc += '          <li><a href="configuration.htm#admin_cookie" class="en">Cookie-Einstellungen</a></li>\n';
doc_toc += '          <li><a href="configuration.htm#admin_email" class="en">Email-Einstellungen</a></li>\n';
doc_toc += '          <li><a href="configuration.htm#admin_logging" class="en">Logging und Statistiken</a></li>\n';
doc_toc += '          <li><a href="configuration.htm#admin_misc" class="en">Wartungs-Einstellungen</a></li>\n';
doc_toc += '        </ul>\n';
doc_toc += '      </li>\n';
doc_toc += '      <li><a href="groups.htm" class="en">Gruppen</a>\n';
doc_toc += '        <ul>\n';
doc_toc += '          <li><a href="groups.htm#group_cp" class="en">Gruppen-Einstellungen</a></li>\n';
doc_toc += '          <li><a href="groups.htm#group_cp_names" class="en">Gruppen-Namen</a></li>\n';
doc_toc += '          <li><a href="groups.htm#group_cp_types" class="en">Gruppen-Arten</a></li>\n';
doc_toc += '          <li><a href="groups.htm#group_cp_quota" class="en">Speicherlimits</a></li>\n';
doc_toc += '          <li><a href="groups.htm#group_cp_permissions" class="en">Gruppenberechtigungen (Bewertung/Ecards/Kommentare)</a></li>\n';
doc_toc += '          <li><a href="groups.htm#group_cp_public" class="en">Uploads in öffentliche Alben</a></li>\n';
doc_toc += '          <li><a href="groups.htm#group_cp_personal" class="en">Persönliche Galerien</a></li>\n';
doc_toc += '          <li><a href="groups.htm#group_cp_upload_method" class="en">Upload-Methoden</a></li>\n';
doc_toc += '          <li><a href="groups.htm#group_cp_assigned" class="en">Zugewiesene Alben</a></li>\n';
doc_toc += '          <li><a href="groups.htm#group_cp_create" class="en">Benutzerdefinierte Gruppen erstellen</a></li>\n';
doc_toc += '          <li><a href="groups.htm#group_cp_delete" class="en">Benutzerdefinierte Gruppen löschen</a></li>\n';
doc_toc += '          <li><a href="groups.htm#group_cp_sync" class="en">Synchronisierung auslösen (nur bei Bridging)</a></li>\n';
doc_toc += '        </ul>\n';
doc_toc += '      </li>\n';
doc_toc += '      <li><a href="users.htm" class="en">Benutzer</a>\n';
doc_toc += '        <ul>\n';
doc_toc += '          <li><a href="users.htm#user_cp" class="en">Benutzer-Manager</a></li>\n';
doc_toc += '          <li><a href="users.htm#user_cp_page" class="en">Bedien-Elemente</a></li>\n';
doc_toc += '          <li><a href="users.htm#user_cp_search" class="en">Benutzer suchen</a></li>\n';
doc_toc += '          <li><a href="users.htm#user_cp_new" class="en">Benutzer erstellen</a></li>\n';
doc_toc += '          <li><a href="users.htm#user_cp_edit" class="en">Benutzer bearbeiten</a></li>\n';
doc_toc += '          <li><a href="users.htm#user_cp_group" class="en">Gruppen-Mitgliedschaft</a></li>\n';
doc_toc += '        </ul>\n';
doc_toc += '      </li>\n';
doc_toc += '      <li><a href="categories.htm" class="en">Kategorien</a></li>\n';
doc_toc += '      <li><a href="albums.htm" class="en">Alben</a>\n';
doc_toc += '        <ul>\n';
doc_toc += '          <li><a href="albums.htm#albmgr" class="en">Der Alben-Manager</a>\n';
doc_toc += '            <ul>\n';
doc_toc += '              <li><a href="albums.htm#albmgr_create" class="en">Alben erzeugen</a></li>\n';
doc_toc += '              <li><a href="albums.htm#albmgr_rename" class="en">Alben umbenennen</a></li>\n';
doc_toc += '              <li><a href="albums.htm#albmgr_order" class="en">Alben-Reihenfolge ändern</a></li>\n';
doc_toc += '              <li><a href="albums.htm#albmgr_delete" class="en">Alben löschen</a></li>\n';
doc_toc += '            </ul>\n';
doc_toc += '          </li>\n';
doc_toc += '          <li><a href="albums.htm#modif_alb_pics" class="en">Alben/Dateien bearbeiten</a></li>\n';
doc_toc += '          <li><a href="albums.htm#album_prop" class="en">Alben-Eigenschaften</a>\n';
doc_toc += '            <ul>\n';
doc_toc += '              <li><a href="albums.htm#album_prop_reset_start" class="en">Alben-Eigenschaften zurücksetzen</a></li>\n';
doc_toc += '            </ul>\n';
doc_toc += '          </li>\n';
doc_toc += '          <li><a href="albums.htm#album_admin_user" class="en">Gegenüberstellung Admin/Benutzer</a></li>\n';
doc_toc += '          <li><a href="albums.htm#album_faq" class="en">Alben-FAQ</a></li>\n';
doc_toc += '        </ul>\n';
doc_toc += '      </li>\n';
doc_toc += '      <li><a href="files.htm" class="en">Dateien</a>\n';
doc_toc += '        <ul>\n';
doc_toc += '          <li><a href="files.htm#edit_pics" class="en">Dateien bearbeiten</a></li>\n';
doc_toc += '          <li><a href="files.htm#edit_vids" class="en">Videos bearbeiten</a></li>\n';
doc_toc += '          <li><a href="files.htm#cust_thmb" class="en">Benutzerdefinierte Thumbnails</a></li>\n';
doc_toc += '        </ul>\n';
doc_toc += '      </li>\n';
doc_toc += '      <li><a href="keywords.htm" class="en">Schlüsselwörter</a>\n';
doc_toc += '        <ul>\n';
doc_toc += '          <li><a href="keywords.htm#keywords_assign" class="en">Schlüsselwörter zuweisen</a></li>\n';
doc_toc += '          <li><a href="keywords.htm#keywords_assign_upload" class="en">Schlüsselwörter zuweisen beim Upload</a></li>\n';
doc_toc += '          <li><a href="keywords.htm#keywords_assign_edit" class="en">Schlüsselwörter bearbeiten/ändern</a></li>\n';
doc_toc += '          <li><a href="keywords.htm#keywords_manager" class="en">Schlüsselwort-Manager</a></li>\n';
doc_toc += '          <li><a href="keywords.htm#keywords_album" class="en">Alben-Schlüsselwörter</a></li>\n';
doc_toc += '        </ul>\n';
doc_toc += '      </li>\n';
doc_toc += '      <li><a href="bbcode.htm" class="en">BBCODE</a></li>\n';
doc_toc += '      <li><a href="exif.htm" class="en">EXIF-Daten</a></li>\n';
doc_toc += '      <li><a href="plugins.htm" class="en">Zusatzmodule (Plugins)</a>\n';
doc_toc += '        <ul>\n';
doc_toc += '          <li><a href="plugins.htm#plugin_definition" class="en">Was ist ein Plugin?</a></li>\n';
doc_toc += '          <li><a href="plugins.htm#plugin_api" class="en">Die Plugin-API</a></li>\n';
doc_toc += '          <li><a href="plugins.htm#plugin_obtain" class="en">Wo erhalte ich Plugins?</a></li>\n';
doc_toc += '          <li><a href="plugins.htm#plugin_bundled" class="en">Im Paket enthaltene Plugins</a></li>\n';
doc_toc += '          <li><a href="plugins.htm#plugin_manager" class="en">Der Plugin-Manager</a>\n';
doc_toc += '            <ul>\n';
doc_toc += '              <li><a href="plugins.htm#plugin_manager_upload" class="en">Plugins hochladen</a></li>\n';
doc_toc += '              <li><a href="plugins.htm#plugin_manager_install" class="en">Plugins installieren</a></li>\n';
doc_toc += '              <li><a href="plugins.htm#plugin_manager_configuration" class="en">Plugins konfigurieren</a></li>\n';
doc_toc += '              <li><a href="plugins.htm#plugin_manager_uninstall" class="en">Plugins deinstallieren</a></li>\n';
doc_toc += '            </ul>\n';
doc_toc += '          </li>\n';
doc_toc += '          <li><a href="plugins.htm#plugin_writing" class="en">Plugins erstellen</a></li>\n';
doc_toc += '        </ul>\n';
doc_toc += '      </li>\n';
doc_toc += '      <li><a href="performance.htm#perf_tips" class="en">Leistung</a></li>\n';
doc_toc += '      <li><a href="admin-tools.htm#admin_tools" class="en">Admin-Werkzeuge</a></li>\n';
doc_toc += '      <li><a href="errors.htm#errors" class="en">Fehlermeldungen</a></li>\n';
doc_toc += '      <li><a href="export.htm#export" class="en">Export</a></li>\n';
doc_toc += '      <li><a href="watermarking.htm#watermark" class="en">Wasserzeichen</a></li>\n';
doc_toc += '    </ul>\n';
doc_toc += '  </li>\n';
doc_toc += '  <li><a href="uploading.htm" class="en">Hochladen (Upload)</a>\n';
doc_toc += '    <ul>\n';
doc_toc += '      <li><a href="uploading_batch-add.htm#batch_add_pics" class="en">Hochladen per FTP/Stapel-Hinzufügen</a></li>\n';
doc_toc += '      <li><a href="uploading_http.htm#upload_http" class="en">Hochladen per http</a></li>\n';
doc_toc += '      <li><a href="uploading_xp-publisher.htm#xp" class="en">Windows XP Web Publishing-Assistent</a>\n';
doc_toc += '        <ul>\n';
doc_toc += '          <li><a href="uploading_xp-publisher.htm#xp_publish_setup" class="en">XP Web Publishing-Assistent: Einstellungen</a></li>\n';
doc_toc += '          <li><a href="uploading_xp-publisher.htm#xp_publish_upload" class="en">XP Web Publishing-Assistent: Bilder hochladen</a></li>\n';
doc_toc += '        </ul>\n';
doc_toc += '      </li>\n';
doc_toc += '      <li><a href="upload_troubleshooting.htm#upload_trouble" class="en">Fehlerbehandlung beim Hochladen</a>\n';
doc_toc += '         <ul>\n';
doc_toc += '           <li><a href="upload_troubleshooting.htm#upload_trouble_permission" class="en">Berechtigungen</a></li>\n';
doc_toc += '           <li><a href="upload_troubleshooting.htm#upload_trouble_enable_settings" class="en">Einstellungen für die Fehlersuche</a></li>\n';
doc_toc += '           <li><a href="upload_troubleshooting.htm#upload_support" class="en">Upload-Support</a></li>\n';
doc_toc += '           <li><a href="upload_troubleshooting.htm#upload_error_messages" class="en">Fehlermeldungen beim Hochladen</a></li>\n';
doc_toc += '           <li><a href="upload_troubleshooting.htm#upload_trouble_server-sided_restrictions" class="en">Server-seitige Einschränkungen</a>\n';
doc_toc += '             <ul>\n';
doc_toc += '               <li><a href="upload_troubleshooting.htm#upload_trouble_server-sided_restrictions_check" class="en">Überprüfenswerte Einstellungen</a></li>\n';
doc_toc += '             </ul>\n';
doc_toc += '           </li>\n';
doc_toc += '         </ul>\n';
doc_toc += '      </li>\n';
doc_toc += '    </ul>\n';
doc_toc += '  </li>\n';
doc_toc += '  <li><a href="comments.htm" class="en">Kommentare</a>\n';
doc_toc += '    <ul>\n';
doc_toc += '      <li><a href="comments.htm#comments_allow" class="en">Kommentare zulassen</a></li>\n';
doc_toc += '      <li><a href="comments.htm#comments_options" class="en">Kommentar-Optionen</a></li>\n';
doc_toc += '      <li><a href="comments.htm#comments_options_spam" class="en">Spam-Probleme</a></li>\n';
doc_toc += '      <li><a href="comments.htm#comments_review" class="en">Kommentare begutachten</a></li>\n';
doc_toc += '      <li><a href="comments.htm#comments_individual" class="en">Einzelne Kommentare</a></li>\n';
doc_toc += '    </ul>\n';
doc_toc += '  </li>\n';
doc_toc += '  <li><a href="bridging.htm" class="en">Integration mit anderen Applikationen (Bridging)</a>\n';
doc_toc += '    <ul>\n';
doc_toc += '      <li><a href="bridging.htm#integrating_bridge_purpose" class="en">Was bedeutet Bridging</a></li>\n';
doc_toc += '      <li><a href="bridging.htm#integrating_bridge_start" class="en">Verfügbare Bridging-Dateien</a></li>\n';
doc_toc += '      <li><a href="bridging.htm#integrating_prerequisites_start" class="en">Vorbedingungen</a>\n';
doc_toc += '        <ul>\n';
doc_toc += '          <li><a href="bridging.htm#integrating_cookie_start" class="en">Authentifizierung durch Cookies</a></li>\n';
doc_toc += '          <li><a href="bridging.htm#integrating_standalone_start" class="en">Zuerst die unabhängige Version</a></li>\n';
doc_toc += '          <li><a href="bridging.htm#integrating_users_start" class="en">Coppermine-Benutzer, -Gruppen und duch die Benutzer hochgeladene Bilder gehen verloren bei der Integration</a></li>\n';
doc_toc += '          <li><a href="bridging.htm#integrating_backup_start" class="en">Backup</a></li>\n';
doc_toc += '        </ul>\n';
doc_toc += '      </li>\n';
doc_toc += '      <li><a href="bridging.htm#integrating_steps_start" class="en">Integrations-Schritte</a>\n';
doc_toc += '        <ul>\n';
doc_toc += '          <li><a href="bridging.htm#bridge_manager_start" class="en">Verwendung des Bridge-Managers</a></li>\n';
doc_toc += '          <li><a href="bridging.htm#bridge_manager_app_start" class="en">Wähle Applikation, mit der gebridged werden soll</a></li>\n';
doc_toc += '          <li><a href="bridging.htm#bridge_manager_path_start" class="en">Von der Bridge-Applikation verwendete Pfade</a></li>\n';
doc_toc += '          <li><a href="bridging.htm#bridge_manager_specific_start" class="en">Bridge-Applikations-spezifische Einstellungen</a></li>\n';
doc_toc += '          <li><a href="bridging.htm#bridge_manager_enable_start" class="en">Bridging ein-/ausschalten</a></li>\n';
doc_toc += '        </ul>\n';
doc_toc += '      </li>\n';
doc_toc += '      <li><a href="bridging.htm#bridge_manager_recover_start" class="en">Rettung nach fehlgeschlagenem Bridging-Versuch</a></li>\n';
doc_toc += '      <li><a href="bridging.htm#integrating_steps_sync_start" class="en">Gruppen-Synchronisierung zwischen der Bridge-Applikation und Coppermine</a></li>\n';
doc_toc += '      <li><a href="bridging.htm#integrating_support_start" class="en">Bridging-Support</a></li>\n';
doc_toc += '      <li><a href="bridging.htm#integrating_config_options_start" class="en">Einige Einstellungen werden deaktiviert</a></li>\n';
doc_toc += '      <li><a href="bridging.htm#integrating_files_start" class="en">Bridge-Dateien</a></li>\n';
doc_toc += '      <li><a href="bridging.htm#integrating_bridge_file_creating_start" class="en">Eigene Bridge erstellen</a></li>\n';
doc_toc += '      <li><a href="bridging.htm#integrating_philosophy_start" class="en">Bridging-Philosophie</a></li>\n';
doc_toc += '      <li><a href="bridging.htm#integrating_individual_bridge_issues_start" class="en">Bridge-spezifische Probleme</a></li>\n';
doc_toc += '      <li><a href="bridging.htm#integrating_subdomain" class="en">Subdomains</a></li>\n';
doc_toc += '    </ul>\n';
doc_toc += '  </li>\n';
doc_toc += '  <li><a href="dev.htm" class="en">Entwickler-Doku</a>\n';
doc_toc += '    <ul>\n';
doc_toc += '      <li><a href="dev_coding.htm" class="en">Coding-Richtlinien</a></li>\n';
doc_toc += '      <li><a href="dev_files.htm" class="en">Dateien hinzufügen/entfernen/umbenennen</a></li>\n';
doc_toc += '      <li><a href="dev_superglobals.htm" class="en">Superglobals bereinigen mit Inspekt</a></li>\n';
doc_toc += '      <li><a href="dev_javascript.htm" class="en">JavaScript in Coppermine</a></li>\n';
doc_toc += '      <li><a href="dev_plugins.htm" class="en">Plugins für Coppermine schreiben</a>\n';
doc_toc += '        <ul>\n';
doc_toc += '          <li><a href="dev_plugin_writing.htm" class="en">Leitfaden für die Plugin-Erstellung</a></li>\n';
doc_toc += '          <li><a href="dev_plugin_api.htm" class="en">Plugin-Tutorial, API-Beschreibung, Globale Coppermine-Variablen</a>\n';
doc_toc += '            <ul>\n';
doc_toc += '              <li><a href="dev_plugin_api.htm#plugin_api_overview" class="en">Plugin-API von Coppermine: ein Überblick</a>\n';
doc_toc += '                <ul class="level5">\n';
doc_toc += '                    <li><a href="dev_plugin_api.htm#plugin_api_overview_intro" class="en">Einführung</a></li>\n';
doc_toc += '                    <li><a href="dev_plugin_api.htm#plugin_api_overview_who" class="en">Zielpublikum</a></li>\n';
doc_toc += '                    <li><a href="dev_plugin_api.htm#plugin_api_overview_skills" class="en">Benötigte Fähigkeiten &amp; Kenntnisse</a></li>\n';
doc_toc += '                    <li><a href="dev_plugin_api.htm#plugin_api_overview_tools" class="en">Empfohlene Software &amp; Support-Foren</a></li>\n';
doc_toc += '                    <li><a href="dev_plugin_api.htm#plugin_api_overview_doc" class="en">Struktur dieses Dokuments</a></li>\n';
doc_toc += '                </ul>\n';
doc_toc += '              </li>\n';
doc_toc += '              <li><a href="dev_plugin_api.htm#plugin_api_tutorial" class="en">"Hallo Welt" Plugin-Tutorial</a>\n';
doc_toc += '                <ul class="level5">\n';
doc_toc += '                  <li><a href="dev_plugin_api.htm#plugin_api_tutorial_first" class="en">Mein erstes Plugin</a></li>\n';
doc_toc += '                  <li><a href="dev_plugin_api.htm#plugin_api_tutorial_installconfig" class="en">Installation, Konfiguration, Aufräumen</a>\n';
doc_toc += '                    <ul class="level5">\n';
doc_toc += '                      <li><a href="dev_plugin_api.htm#plugin_api_tutorial_installsimple" class="en">Installation mit einfachen Einstellungen</a></li>\n';
doc_toc += '                      <li><a href="dev_plugin_api.htm#plugin_api_tutorial_install" class="en">Installation mit Konfigurations-Paramtern</a></li>\n';
doc_toc += '                      <li><a href="dev_plugin_api.htm#plugin_api_tutorial_config" class="en">Einstellungen während der Laufzeit</a></li>\n';
doc_toc += '                      <li><a href="dev_plugin_api.htm#plugin_api_tutorial_cleanup" class="en">De-Installation &amp; Aufäumen</a></li>\n';
doc_toc += '                    </ul>\n';
doc_toc += '                  </li>  \n';
doc_toc += '                  <li><a href="dev_plugin_api.htm#plugin_api_tutorial_linking" class="en">Verweise auf benutzerdefinierte Plugins</a></li>\n';
doc_toc += '                  <li><a href="dev_plugin_api.htm#plugin_api_tutorial_button" class="en">Einen Button zu Coppermine hinzufügen</a></li>\n';
doc_toc += '                  <li><a href="dev_plugin_api.htm#plugin_api_tutorial_lang" class="en">Mehrsprachigkeit</a></li>\n';
doc_toc += '                  <li><a href="dev_plugin_api.htm#plugin_api_tutorial_distrib" class="en">Plugin-Verteilung</a></li>\n';
doc_toc += '                  <li><a href="dev_plugin_api.htm#plugin_api_tutorial_wherenext" class="en">Wie geht es weiter</a></li>\n';
doc_toc += '                </ul>\n';
doc_toc += '              </li>\n';
doc_toc += '              <li><a href="dev_plugin_api.htm#plugin_api_hooks" class="en">Plugin-Hooks</a></li>\n';
doc_toc += '              <li><a href="dev_plugin_api.htm#plugin_api_plugin_class" class="en">Plugin Klassen-Eigenschaften &amp; Methoden</a></li>\n';
doc_toc += '              <li><a href="dev_plugin_api.htm#plugin_api_globals" class="en">Globale Variablen &amp; Konstanten</a>\n';
doc_toc += '                <ul class="level5">\n';
doc_toc += '                  <li><a href="dev_plugin_api.htm#plugin_api_globals_system" class="en">Systemweite globale Variablen</a></li>\n';
doc_toc += '                  <li><a href="dev_plugin_api.htm#plugin_api_globals_cpg" class="en">Coppermine Konstanten</a></li>\n';
doc_toc += '                </ul>\n';
doc_toc += '              </li>\n';
doc_toc += '            </ul>\n';
doc_toc += '          </li>\n';
doc_toc += '          <li><a href="dev_plugin_hooks.htm" class="en">Reference list of plugin hooks </a>\n';
doc_toc += '            <ul class="level5">\n';
doc_toc += '              <li><a href="dev_plugin_hooks.htm#plugin_hooks_choosing" class="en">Choosing Plugin Hooks</a></li>\n';
doc_toc += '              <li><a href="dev_plugin_hooks.htm#plugin_hooks_finding" class="en">Finding Plugin Hooks</a></li>\n';
doc_toc += '              <li><a href="dev_plugin_hooks.htm#plugin_hooks_using" class="en">Using Plugin Hooks</a></li>\n';
doc_toc += '              <li><a href="dev_plugin_hooks.htm#plugin_hooks_filename" class="en">Plugin Hooks by Script Filename</a>\n';
doc_toc += '                <ul class="level6">\n';
doc_toc += '                  <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_ind_php" class="en">Script: index.php</a>\n';
doc_toc += '                    <ul class="level7">\n';
doc_toc += '                      <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_ind_anyc" class="en">Filter: \'anycontent\'</a></li>\n';
doc_toc += '                      <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_ind_ucp" class="en">Filter: \'user_caption_params\'</a></li>\n';
doc_toc += '                      <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_ind_pb" class="en">Filter: \'plugin_block\'</a></li>\n';
doc_toc += '                    </ul>\n';
doc_toc += '                  </li>\n';
doc_toc += '                  <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_di_php" class="en">Script: displayimage.php</a>\n';
doc_toc += '                    <ul class="level7">\n';
doc_toc += '                      <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_di_fi" class="en">Filter: \'file_info\'</a></li>\n';
doc_toc += '                      <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_di_pbc" class="en">Filter: \'post_breadcrumb\'</a></li>\n';
doc_toc += '                    </ul>\n';
doc_toc += '                  </li>\n';
doc_toc += '                  <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_thumb_php" class="en">Script: thumbnails.php</a>\n';
doc_toc += '                    <ul class="level7">\n';
doc_toc += '                      <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_thumb_pbc" class="en">Filter: \'post_breadcrumb\'</a></li>\n';
doc_toc += '                    </ul>\n';
doc_toc += '                  </li>\n';
doc_toc += '                  <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_func_php" class="en">Script: functions.inc.php</a>\n';
doc_toc += '                    <ul class="level7">\n';
doc_toc += '                      <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_func_ghgf" class="en">Filters: \'gallery_header\' and \'gallery_footer\'</a></li>\n';
doc_toc += '                      <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_func_td" class="en">Filter: \'thumb_data\'</a></li>\n';
doc_toc += '                      <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_func_th" class="en">Filter: \'template_html\'</a></li>\n';
doc_toc += '                      <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_func_pm" class="en">Filter: \'page_meta\'</a></li>\n';
doc_toc += '                      <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_func_tc" class="en">Filters: \'thumb_caption\' and all derivatives</a></li>\n';
doc_toc += '                    </ul>\n';
doc_toc += '                  </li>\n';
doc_toc += '                  <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_th_php" class="en">Script: themes.inc.php</a>\n';
doc_toc += '                    <ul class="level7">\n';
doc_toc += '                      <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_th_fd" class="en">Filter: \'file_data\'</a></li>\n';
doc_toc += '                    </ul>\n';
doc_toc += '                  </li>\n';
doc_toc += '                  <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_um_php" class="en">Script: usermgr.php</a>\n';
doc_toc += '                    <ul class="level7">\n';
doc_toc += '                      <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_um_umh" class="en">Filter: \'usermgr_header\'</a></li>\n';
doc_toc += '                      <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_um_umf" class="en">Filter: \'usermgr_footer\'</a></li>\n';
doc_toc += '                    </ul>\n';
doc_toc += '                  </li>\n';
doc_toc += '                  <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_pm_php" class="en">Script: pluginmgr.php</a>\n';
doc_toc += '                    <ul class="level7">\n';
doc_toc += '                      <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_pm_pcon" class="en">Filter: \'plugin_configure\'</a></li>\n';
doc_toc += '                      <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_pm_pcl" class="en">Filter: \'plugin_cleanup\'</a></li>\n';
doc_toc += '                    </ul>\n';
doc_toc += '                  </li>\n';
doc_toc += '                  <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_papi_php" class="en">Script: plugin_api.inc.php</a>\n';
doc_toc += '                    <ul class="level7">\n';
doc_toc += '                      <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_papi_ph" class="en">Filter: \'page_html\'</a></li>\n';
doc_toc += '                      <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_papi_pe" class="en">Filter: \'page_end\'</a></li>\n';
doc_toc += '                      <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_papi_pi" class="en">Filter: \'plugin_install\'</a></li>\n';
doc_toc += '                      <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_papi_pu" class="en">Filter: \'plugin_uninstall\'</a></li>\n';
doc_toc += '                      <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_papi_pw" class="en">Filter: \'plugin_wakeup\'</a></li>\n';
doc_toc += '                      <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_papi_ps" class="en">Filter: \'plugin_sleep\'</a></li>\n';
doc_toc += '                    </ul>\n';
doc_toc += '                  </li>\n';
doc_toc += '                  <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_init_php" class="en">Script: init.inc.php</a>\n';
doc_toc += '                    <ul class="level9" class="en">\n';
doc_toc += '                      <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_init_ps" class="en">Filter: \'page_start\'</a></li>\n';
doc_toc += '                    </ul>\n';
doc_toc += '                  </li>\n';
doc_toc += '                  <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_picm_php" class="en">Script: picmgmt.inc.php</a>\n';
doc_toc += '                    <ul class="level9" class="en">\n';
doc_toc += '                      <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_picm_afd" class="en">Filter: \'add_file_data\'</a></li>\n';
doc_toc += '                    </ul>\n';
doc_toc += '                  </li>\n';
doc_toc += '                </ul>\n';
doc_toc += '              </li>\n';
doc_toc += '              <li><a href="dev_plugin_hooks.htm#plugin_hooks_alphabetically" class="en">Plugin Hooks Alphabetically</a></li>\n';
doc_toc += '              <li><a href="dev_plugin_hooks.htm#plugin_hooks_hooktype" class="en">Plugin Hooks by Hook Type</a></li>\n';
doc_toc += '              <li><a href="dev_plugin_hooks.htm#plugin_hook_examples" class="en">Plugin Hook Examples</a>\n';
doc_toc += '                <ul class="level6">\n';
doc_toc += '                    <li><a href="dev_plugin_hooks.htm#plugin_hook_example_upload_method" class="en">Adding an upload method</a></li>\n';
doc_toc += '                    <li><a href="dev_plugin_hooks.htm#plugin_hook_example_theme_display_thumbnails" class="en">Add tags for thumbnails display</a></li>\n';
doc_toc += '                </ul></li>\n';
doc_toc += '            </ul>\n';
doc_toc += '          </li>\n';
doc_toc += '        </ul>\n';
doc_toc += '      </li>\n';
doc_toc += '      <li><a href="dev_documentation.htm" class="en">Dokumentation bearbeiten</a></li>\n';
doc_toc += '      <li><a href="dev_subversion.htm" class="en">Subversion Versionskontrolle</a></li>\n';
doc_toc += '      <li><a href="dev_config.htm" class="en">Einstellungs-Optionen hinzufügen</a></li>\n';
doc_toc += '      <li><a href="dev_versioncheck.htm" class="en">Versioncheck</a></li>\n';
doc_toc += '      <li><a href="dev_update.htm" class="en">Aktualisieren</a></li>\n';
doc_toc += '      <li><a href="dev_tools.htm" class="en">Von den Entwicklern empfohlene Tools</a>\n';
doc_toc += '          <ul class="level4" class="en">\n';
doc_toc += '              <li><a href="dev_tools.htm#dev_tools_database" class="en">Datenbank bearbeiten</a></li>\n';
doc_toc += '              <li><a href="dev_tools.htm#dev_tools_ftp_client" class="en">FTP-Clients</a></li>\n';
doc_toc += '              <li><a href="dev_tools.htm#dev_tools_web_development" class="en">Web-Entwicklung</a></li>\n';
doc_toc += '              <li><a href="dev_tools.htm#dev_tools_editor" class="en">Text-Editoren</a></li>\n';
doc_toc += '              <li><a href="dev_tools.htm#dev_tools_picture_editors" class="en">Bildbearbeitung</a></li>\n';
doc_toc += '          </ul>\n';
doc_toc += '      </li>\n';
doc_toc += '      <li><a href="dev_database.htm" class="en">Datenbank-Schema</a>\n';
doc_toc += '          <ul class="level4" class="en">\n';
doc_toc += '              <li><a href="dev_database.htm#db_config_file" class="en">Einstellungen</a></li>\n';
doc_toc += '              <li><a href="dev_database.htm#db_reference within_code" class="en">Datenbank-Bezüge innerhalb des Codes von Coppermine</a></li>\n';
doc_toc += '              <li><a href="dev_database.htm#db_albums" class="en">cpg15x_albums</a></li>\n';
doc_toc += '              <li><a href="dev_database.htm#db_banned" class="en">cpg15x_banned</a></li>\n';
doc_toc += '              <li><a href="dev_database.htm#db_bridge" class="en">cpg15x_bridge</a></li>\n';
doc_toc += '              <li><a href="dev_database.htm#db_categories" class="en">cpg15x_categories</a></li>\n';
doc_toc += '              <li><a href="dev_database.htm#db_categorymap" class="en">cpg15x_categorymap</a></li>\n';
doc_toc += '              <li><a href="dev_database.htm#db_comments" class="en">cpg15x_comments</a></li>\n';
doc_toc += '              <li><a href="dev_database.htm#db_config" class="en">cpg15x_config</a></li>\n';
doc_toc += '              <li><a href="dev_database.htm#db_dict" class="en">cpg15x_dict</a></li>\n';
doc_toc += '              <li><a href="dev_database.htm#db_ecards" class="en">cpg15x_ecards</a></li>\n';
doc_toc += '              <li><a href="dev_database.htm#db_exif" class="en">cpg15x_exif</a></li>\n';
doc_toc += '              <li><a href="dev_database.htm#db_favpics" class="en">cpg15x_favpics</a></li>\n';
doc_toc += '              <li><a href="dev_database.htm#db_filetypes" class="en">cpg15x_filetypes</a></li>\n';
doc_toc += '              <li><a href="dev_database.htm#db_hit_stats" class="en">cpg15x_hit_stats</a></li>\n';
doc_toc += '              <li><a href="dev_database.htm#db_languages" class="en">cpg15x_languages</a></li>\n';
doc_toc += '              <li><a href="dev_database.htm#db_pictures" class="en">cpg15x_pictures</a></li>\n';
doc_toc += '              <li><a href="dev_database.htm#db_plugins" class="en">cpg15x_plugins</a></li>\n';
doc_toc += '              <li><a href="dev_database.htm#db_sessions" class="en">cpg15x_sessions</a></li>\n';
doc_toc += '              <li><a href="dev_database.htm#db_temp_messages" class="en">cpg15x_temp_messages</a></li>\n';
doc_toc += '              <li><a href="dev_database.htm#db_usergroups" class="en">cpg15x_usergroups</a></li>\n';
doc_toc += '              <li><a href="dev_database.htm#db_users" class="en">cpg15x_users</a></li>\n';
doc_toc += '              <li><a href="dev_database.htm#db_votes" class="en">cpg15x_votes</a></li>\n';
doc_toc += '              <li><a href="dev_database.htm#db_vote_stats" class="en">cpg15x_vote_stats</a></li>\n';
doc_toc += '          </ul>\n';
doc_toc += '      </li>\n';
doc_toc += '    </ul>\n';
doc_toc += '  </li>\n';
doc_toc += '</ul>\n';
doc_toc += '</div>\n';
$('#toc').replaceWith('<div id="toc">' + doc_toc + '</div>');
}



function cpgDocHeader() {
	// Only display the header if the docs are not included
	if (getUrlParameters('hide_nav') == 1) {
		return;
	}
	$('#docheader').text('Coppermine Photo Gallery v1.5.1: Dokumentation und Handbuch');
	$('#docheader').after('<br clear="all" />\n<a name="top"></a>');
	$('#docheader').before('<img src="../images/coppermine-logo.png" alt="Coppermine Photo Gallery - Deine Fotogalerie im Web" align="left" />\n');
}

function cpgDocSearch() {
	// Only display the header if the docs are not included
	if (getUrlParameters('hide_nav') == 1) {
		return;
	}
	var doc_search = '';
	doc_search += '  <div id="doc_search" style="display:none;">\n';
	doc_search += '    <form action="http://www.google.com/cse" id="cse-search-box">\n';
	doc_search += '      <input type="hidden" name="cx" value="009353514429642786404:1fg_c1k1td8" />\n';
	doc_search += '      <input type="text" name="q" size="25" />\n';
	doc_search += '      <input type="submit" name="sa" value="suche in Doku" style="font-size:9px;" />\n';
	doc_search += '    </form>\n';
	doc_search += '    <script type="text/javascript" src="http://www.google.com/coop/cse/brand?form=cse-search-box&lang=de"></script>\n';
	doc_search += '  </div>\n';
	$('#toc').append(doc_search);
}

function cpgDocFooter() {
  var overall_doc_footer = '';
  overall_doc_footer += '</div>';
  overall_doc_footer += '<div align="right">';
  overall_doc_footer += '<a href="#top">Seitenanfang</a>';
  overall_doc_footer += '</div>';
  $('#doc_footer').append(overall_doc_footer);
}



function dateRevision() {
  // strip the unneeded data from last_changed and revision fields
  var lastChangeDate = $('#doc_last_changed').text();
  var lastChangeDate = lastChangeDate.replace('$', '');
  var lastChangeDate = lastChangeDate.replace('$', '');
  var lastChangeDate = lastChangeDate.replace('LastChangedDate: ', '');
  var lastChangeDate = lastChangeDate.replace(/Date: /g, '');
  $('#doc_last_changed').text('Über dieses Dokument: ' + 'zuletzt geändert am ' + lastChangeDate);

  var revisionNumber = $('#doc_revision').text();
  var revisionNumber = revisionNumber.replace('$', '');
  var revisionNumber = revisionNumber.replace('$', '');
  var revisionNumber = revisionNumber.replace(/Revision: /g, '');
  $('#doc_revision').text(', SVN Revision ' + revisionNumber);
}

function getUrlParameters(name)
{
  // Taken from http://www.netlobo.com/url_query_string_javascript.html
  name = name.replace(/[\[]/,"\\\[").replace(/[\]]/,"\\\]");
  var regexS = "[\\?&]"+name+"=([^&#]*)";
  var regex = new RegExp(regexS);
  var results = regex.exec(window.location.href);
  if(results == null) {
    return '';
  } else {
    return results[1];
  }
}

function cpgDocTranslationWarning() {
  if (getUrlParameters('hide_nav') == 1) {
	return;
  }
  $('#doc_en_only').replaceWith('<div class="cpg_message_validation"><h1>Noch nicht übersetzt</h1><p>Diese Seite wurde noch nicht übersetzt und erscheint daher nur auf Englisch.</p><p>Übersetzer gesucht: schau Dir die Seite in Ruhe an - so kompliziert ist sie doch nicht, oder? Wenn Du Dir zutraust, diese Seite auf Deutsch zu übersetzen, dann schau doch mal auf der offiziellen Coppermine-Seite vorbei. Wir freuen uns auf Deinen Beitrag.</div>');
  $('#doc_en_partial').replaceWith('<div class="cpg_message_warning"><h1>Teilweise Übersetzung</h1><p>Diese Seite wurde noch nicht vollständig übersetzt und erscheint daher nur zum Teil auf Deutsch. Teile der Seite erscheinen auf Englisch.</p><p>Übersetzer gesucht: schau Dir die Seite in Ruhe an - so kompliziert ist sie doch nicht, oder? Wenn Du Dir zutraust, diese Seite vollständig auf Deutsch zu übersetzen, dann schau doch mal auf der offiziellen Coppermine-Seite vorbei. Wir freuen uns auf Deinen Beitrag.</div>');
}

$(document).ready(function()
{
	//hide all elements with class detail_body
	$(".detail_body").hide();
	//toggle the component with class detail_body
	$(".detail_head_collapsed").click(function()
	{
		$(this).toggleClass("detail_head_expanded").next(".detail_body").slideToggle(600);
	});
	$(".detail_expand_all").click(function()
	{
		$(".detail_body").slideDown(1200);
		$(".detail_head_collapsed").toggleClass("detail_head_expanded");
		$(".detail_expand_all").hide();
		$(".detail_collapse_all").show();

	});
	$(".detail_collapse_all").click(function()
	{
		$(".detail_body").slideUp(1200);
		$(".detail_head_collapsed").toggleClass("detail_head_expanded");
		$(".detail_expand_all").show();
		$(".detail_collapse_all").hide();

	});
	$(".detail_toggle_all").click(function()
	{
		$(".detail_body").slideToggle(600);
		$(".detail_head_collapsed").toggleClass("detail_head_expanded");
	});
	cpgDocHeader();
	cpgDocTranslationWarning();
	cpgDocToc();
	$("#tree").treeview({
        collapsed: true,
        unique: true,
        animated: "slow",
        persist: "location",
    });
	cpgDocSearch();
	cpgDocFooter();
	dateRevision();
    $("a.nolink").click(function(){
      return false;
    });
    // Fade the toc in if it is needed
	$("#toc").bind("mouseenter",function(){
		$("#toc_collapsed").hide();
		$("#toc_expanded").fadeIn('slow');
		$("#doc_search").show();
	});
	// Fade the toc out if it isn't used
	$("#toc").bind("mouseleave",function(){
		$("#toc_expanded").fadeOut('slow');
		$("#toc_collapsed").show();
		$("#doc_search").hide();
	});
});