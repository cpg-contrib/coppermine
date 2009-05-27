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
doc_toc += '<h6>Inhalt (<a href="../index.htm">Sprachauswahl</a>)</h6>\n';
doc_toc += '<ul id="tree">\n';
doc_toc += '  <li><a href="index.htm">Coppermine Dokumentation</a>\n';
doc_toc += '    <ul class="level2" id="index">\n';
doc_toc += '      <li><a href="index.htm#about">Über Coppermine</a></li>\n';
doc_toc += '      <!--<li><a href="index.htm#about_documentation">About the documentation</a></li>-->\n';
doc_toc += '      <!--<li><a href="index.htm#features">Features</a></li>-->\n';
doc_toc += '      <!--<li><a href="quickstart.htm#about">Quick-Start guide</a></li>-->\n';
doc_toc += '      <li><a href="toc.htm">Inhaltsverzeichnis</a></li>\n';
doc_toc += '      <li><a href="requirements.htm">Mindestvoraussetzung</a></li>\n';
doc_toc += '      <!--<li><a href="testing.htm">Testing (alpha/beta versions!)</a></li>-->\n';
doc_toc += '      <li><a href="languages.htm">Sprachen</a>\n';
doc_toc += '        <!--<ul class="level3" id="languages">-->\n';
doc_toc += '          <!--<li><a href="translation.htm">Translation guide</a></li>-->\n';
doc_toc += '        <!--</ul>-->\n';
doc_toc += '      <!--</li>-->\n';
doc_toc += '      <li><a href="credits.htm">Credits</a>\n';
doc_toc += '        <ul class="level3" id="credits">\n';
doc_toc += '          <li><a href="credits.htm#developers">Coppermine Team</a></li>\n';
doc_toc += '          <li><a href="credits.htm#contributors">Unterstützer</a></li>\n';
doc_toc += '          <li><a href="credits.htm#codebase">Verwendeter Open Source Code</a></li>\n';
doc_toc += '        </ul>\n';
doc_toc += '      </li>\n';
doc_toc += '      <!--<li><a href="copyrights.htm">License &amp; Copyright</a></li>-->\n';
doc_toc += '      <!--<li><a href="known_issues.htm">Known issues</a></li>-->\n';
doc_toc += '    </ul>\n';
doc_toc += '  </li>\n';
doc_toc += '  <!--<li><a href="install.htm">Installation and setup</a>\n';
doc_toc += '    <!--<ul class="level2" id="install">\n';
doc_toc += '      <!--<li><a href="install.htm#how">How to install the script</a></li>-->\n';
doc_toc += '      <!--<li><a href="install.htm#what">What the installer does</a></li>-->\n';
doc_toc += '      <!--<li><a href="install_permissions.htm">Setting permissions</a>\n';
doc_toc += '        <!--<ul class="level3" id="install_permissions">\n';
doc_toc += '          <!--<li><a href="install_permissions.htm#chmod">Apache on Unix/Linux (CHMOD)</a></li>-->\n';
doc_toc += '          <!--<li><a href="install_permissions.htm#apache_windows">Apache on Windows</a></li>-->\n';
doc_toc += '          <!--<li><a href="install_permissions.htm#iis">IIS on Windows</a></li>-->\n';
doc_toc += '          <!--<li><a href="install_permissions.htm#support">Asking for support on permissions issues</a></li>-->\n';
doc_toc += '        <!--</ul>-->\n';
doc_toc += '      <!--</li>-->\n';
doc_toc += '      <!--<li><a href="install_screen.htm">The install screen</a></li>-->\n';
doc_toc += '      <!--<li><a href="auto-installers.htm">Auto-Installers</a></li>-->\n';
doc_toc += '      <!--<li><a href="install_faq.htm">Installation FAQ</a></li>-->\n';
doc_toc += '      <!--<li><a href="uninstall.htm">Uninstall</a></li>-->\n';
doc_toc += '    <!--</ul>-->\n';
doc_toc += '  <!--</li>-->\n';
doc_toc += '  <!--<li><a href="upgrading.htm">Upgrading</a>-->\n';
doc_toc += '    <!--<ul class="level2" id="upgrading">-->\n';
doc_toc += '      <!--<li><a href="upgrading.htm#upgrade_why">Why upgrade?</a>-->\n';
doc_toc += '      	<!--<ul class="level3" id="why_upgrade">-->\n';
doc_toc += '      		<!--<li><a href="upgrading.htm#upgrade_why_reasons">Reasons for package releases</a></li>-->\n';
doc_toc += '      		<!--<li><a href="upgrading.htm#upgrade_why_changelog">Changelog</a></li>-->\n';
doc_toc += '      	<!--</ul>-->\n';
doc_toc += '      <!--</li>-->\n';
doc_toc += '      <!--<li><a href="upgrading.htm#upgrade_any">Steps needed to perform when upgrading Coppermine (from any version)</a></li>-->\n';
doc_toc += '      <!--<li><a href="upgrading.htm#upgrade_particular">Additional actions for updating from particular versions</a>-->\n';
doc_toc += '        <!--<ul class="level3" id="upgrade_particular">-->\n';
doc_toc += '          <!--<li><a href="upgrading.htm#upgrade_10">Upgrading from versions cpg1.0,1.1,1.2.x or 1.3.x</a></li>-->\n';
doc_toc += '          <!--<li><a href="upgrading.htm#upgrade_14">Upgrading from cpg1.4.x to version cpg1.5.x</a></li>-->\n';
doc_toc += '        <!--</ul>-->\n';
doc_toc += '      <!--</li>-->\n';
doc_toc += '      <!--<li><a href="upgrading.htm#versioncheck">The version check tool</a>-->\n';
doc_toc += '        <!--<ul class="level3" id="versioncheck">-->\n';
doc_toc += '          <!--<li><a href="upgrading.htm#versioncheck_description_start">What it does</a></li>-->\n';
doc_toc += '          <!--<li><a href="upgrading.htm#versioncheck_options_start">Options</a></li>-->\n';
doc_toc += '          <!--<li><a href="upgrading.htm#versioncheck_comparison_start">Version comparison</a></li>-->\n';
doc_toc += '        <!--</ul>-->\n';
doc_toc += '      <!--</li>-->\n';
doc_toc += '      <!--<li><a href="upgrading.htm#upgrade_faq">Upgrading FAQ</a></li>-->\n';
doc_toc += '      <!--<li><a href="upgrading.htm#downgrading">Downgrading from cpg1.5.x to an older version</a></li>-->\n';
doc_toc += '        <!--</ul>-->\n';
doc_toc += '      <!--</li>-->\n';
doc_toc += '      <!--<li><a href="upgrading.htm#downgrading">Downgrading from cpg1.5.x to an older version</a></li>-->\n';
doc_toc += '    <!--</ul>-->\n';
doc_toc += '  <!--</li>-->\n';
doc_toc += '  <!--<li><a href="start.htm">Getting Started</a>\n';
doc_toc += '    <!--<ul class="level2" id="start">\n';
doc_toc += '      <!--<li><a href="start.htm#getting_concepts">Basic concepts</a></li>-->\n';
doc_toc += '      <!--<li><a href="start.htm#getting_initial_configuration">Initial configuration</a></li>-->\n';
doc_toc += '      <!--<li><a href="start.htm#getting_structure">Category/album/file structure</a></li>-->\n';
doc_toc += '      <!--<li><a href="start.htm#getting_resizing">Resized images</a></li>-->\n';
doc_toc += '      <!--<li><a href="start.htm#getting_admin_account">Your admin account</a></li>-->\n';
doc_toc += '      <!--<li><a href="start.htm#getting_check_uploads">Check uploads</a></li>-->\n';
doc_toc += '      <!--<li><a href="start.htm#getting_consider_bridging">Consider bridging</a></li>-->\n';
doc_toc += '      <!--<li><a href="start.htm#getting_interaction">What are your visitors allowed to do?</a></li>-->\n';
doc_toc += '      <!--<li><a href="start.htm#getting_design">Change your coppermine's design</a></li>-->\n';
doc_toc += '      <!--<li><a href="start.htm#getting_typical">Typical setups</a></li>-->\n';
doc_toc += '    <!--</ul>-->\n';
doc_toc += '  <!--</li>-->\n';
doc_toc += '  <!--<li><a href="faq.htm">Frequently Asked Questions</a></li>-->\n';
doc_toc += '  <!--<li><a href="theme.htm">Themes</a>\n';
doc_toc += '    <!--<ul class="level2" id="themes">\n';
doc_toc += '      <!--<li><a href="theme.htm#theme_builtin">Themes that come with Coppermine</a></li>-->\n';
doc_toc += '      <!--<li><a href="theme.htm#theme_upgrading">Upgrading your custom theme</a>\n';
doc_toc += '      <!--<ul class="level3" id="theme_upgrading">\n';
doc_toc += '        <!--<li><a href="theme_upgrade_14x-15x.htm">Converting cpg1.4.x themes to cpg1.5.x</a>\n';
doc_toc += '          <!--<ul class="level3" id="upgrade_14_15">\n';
doc_toc += '            <!--<li><a href="theme_upgrade_14x-15x.htm#style">Edit style.css</a></li>-->\n';
doc_toc += '            <!--<li><a href="theme_upgrade_14x-15x.htm#template">Edit template.html</a></li>-->\n';
doc_toc += '            <!--<li><a href="theme_upgrade_14x-15x.htm#theme">Edit theme.php</a></li>-->\n';
doc_toc += '            <!--<li><a href="theme_upgrade_14x-15x.htm#validation">Validation Methodology</a></li>-->\n';
doc_toc += '          <!--</ul>-->\n';
doc_toc += '        <!--</li>-->\n';
doc_toc += '        <!--<li><a href="theme_upgrade_13x-14x.htm">Converting cpg1.3.x themes to cpg1.4.x</a>\n';
doc_toc += '          <!--<ul class="level3" id="upgrade_13_14">\n';
doc_toc += '            <!--<li><a href="theme_upgrade_13x-14x.htm#style">Edit style.css</a></li>-->\n';
doc_toc += '            <!--<li><a href="theme_upgrade_13x-14x.htm#template">Edit template.html</a></li>-->\n';
doc_toc += '            <!--<li><a href="theme_upgrade_13x-14x.htm#theme">Edit theme.php</a></li>-->\n';
doc_toc += '            <!--<li><a href="theme_upgrade_13x-14x.htm#validation">Validation Methodology</a></li>-->\n';
doc_toc += '          <!--</ul>-->\n';
doc_toc += '        <!--</li>-->\n';
doc_toc += '      <!--</ul>-->\n';
doc_toc += '      <!--</li>-->\n';
doc_toc += '      <!--<li><a href="theme.htm#theme_files">Content of a theme</a></li>-->\n';
doc_toc += '      <!--<li><a href="theme.htm#theme_engine">How the theme engine works</a></li>-->\n';
doc_toc += '      <!--<li><a href="theme_user-contributions.htm#theme_user-contributions">User-contributed themes</a></li>-->\n';
doc_toc += '      <!--<li><a href="theme_create.htm#theme_create">Creating your custom theme</a>\n';
doc_toc += '        <!--<ul class="level3" id="theme_create">\n';
doc_toc += '          <!--<li><a href="theme_create.htm#theme_create_rename">Rename your theme first</a></li>-->\n';
doc_toc += '          <!--<li><a href="theme_create.htm#theme_create_tipps">Tipps &amp; tricks</a></li>-->\n';
doc_toc += '          <!--<li><a href="theme_create.htm#theme_create_wysiwyg">Using WYSIWYG-editors</a></li>-->\n';
doc_toc += '          <!--<li><a href="theme_create.htm#theme_create_colors">Modifying colors</a></li>-->\n';
doc_toc += '          <!--<li><a href="theme_create.htm#theme_create_theme_php">Editing theme.php</a></li>-->\n';
doc_toc += '        <!--</ul>-->\n';
doc_toc += '      <!--</li>-->\n';
doc_toc += '      <!--<li><a href="theme_template.htm#theme_template_html">Editing template.html</a></li>-->\n';
doc_toc += '      <!--<li><a href="theme_copyright.htm">Copyright-disclaimer in footer</a></li>-->\n';
doc_toc += '      <!--<li><a href="php-content.htm">Dynamic (PHP-driven) content</a>\n';
doc_toc += '        <!--<ul class="level3" id="php-content">\n';
doc_toc += '          <!--<li><a href="php-content.htm#php-content_anycontent">Using anycontent.php</a></li>-->\n';
doc_toc += '          <!--<li><a href="php-content.htm#php-content_header_footer">Custom header and footer</a></li>-->\n';
doc_toc += '          <!--<li><a href="php-content.htm#php-content_theme">Theme-based dynamic content (theme.php)</a></li>-->\n';
doc_toc += '          <!--<li><a href="php-content.htm#php-content_core">Modifying core files</a></li>-->\n';
doc_toc += '        <!--</ul>-->\n';
doc_toc += '      <!--</li>-->\n';
doc_toc += '    <!--</ul>-->\n';
doc_toc += '  <!--</li>-->\n';
doc_toc += '  <li><a href="administration.htm">Administration</a>\n';
doc_toc += '    <ul class="level2" id="administration">\n';
doc_toc += '      <!--<li><a href="admin_menu.htm">Admin menu items</a></li>-->\n';
doc_toc += '      <!--<li><a href="banning.htm#banning">Banning</a></li>-->\n';
doc_toc += '      <li><a href="configuration.htm">Einstellungen</a>\n';
doc_toc += '        <ul class="level3" id="configuration">\n';
doc_toc += '          <li><a href="configuration.htm#admin_general">Allgemeine Einstellungen</a></li>\n';
doc_toc += '          <li><a href="configuration.htm#admin_language">Sprach- &amp; Zeichensatz-Einstellungen</a></li>\n';
doc_toc += '          <li><a href="configuration.htm#admin_theme">Themen-Einstellungen</a></li>\n';
doc_toc += '          <li><a href="configuration.htm#admin_album_list">Ansicht Albenliste</a></li>\n';
doc_toc += '          <li><a href="configuration.htm#admin_thumbnail_view">Ansicht Thumbnail</a></li>\n';
doc_toc += '          <li><a href="configuration.htm#admin_image_comment">Ansicht Bild</a></li>\n';
doc_toc += '          <li><a href="configuration.htm#admin_comment_start">Einstellungen Kommentare</a></li>\n';
doc_toc += '          <li><a href="configuration.htm#admin_contact_start">Kontakformular-Einstellungen</a></li>\n';
doc_toc += '          <li><a href="configuration.htm#admin_thumb_start">Thumbnail Einstellungen</a></li>\n';
doc_toc += '          <li><a href="configuration.htm#admin_picture_thumbnail">Bild/Datei-Einstellungen</a></li>\n';
doc_toc += '          <li><a href="configuration.htm#admin_watermarking">Wasserzeichen auf Bildern</a></li>\n';
doc_toc += '          <li><a href="configuration.htm#admin_registration">Registrierung</a></li>\n';
doc_toc += '          <li><a href="configuration.htm#admin_user">Benutzer-Einstellungen</a></li>\n';
doc_toc += '          <li><a href="configuration.htm#admin_custom">Benutzerdefinierte Felder für Benutzerprofile</a></li>\n';
doc_toc += '          <li><a href="configuration.htm#admin_custom_image">Benutzerdefinierte Felder für zusätzliche Dateiinformationen</a></li>\n';
doc_toc += '          <li><a href="configuration.htm#admin_cookie">Cookie-Einstellungen</a></li>\n';
doc_toc += '          <li><a href="configuration.htm#admin_email">Email-Einstellungen</a></li>\n';
doc_toc += '          <li><a href="configuration.htm#admin_logging">Logging und Statistiken</a></li>\n';
doc_toc += '          <li><a href="configuration.htm#admin_misc">Wartungs-Einstellungen</a></li>\n';
doc_toc += '        </ul>\n';
doc_toc += '      </li>\n';
doc_toc += '      <!--<li><a href="groups.htm">Groups</a>-->\n';
doc_toc += '        <!--<ul class="level3" id="groups">-->\n';
doc_toc += '          <!--<li><a href="groups.htm#group_cp">The group control panel</a></li>-->\n';
doc_toc += '          <!--<li><a href="groups.htm#group_cp_names">Group names</a></li>-->\n';
doc_toc += '          <!--<li><a href="groups.htm#group_cp_types">Group types</a></li>-->\n';
doc_toc += '          <!--<li><a href="groups.htm#group_cp_quota">Quota</a></li>-->\n';
doc_toc += '          <!--<li><a href="groups.htm#group_cp_permissions">Group permissions (Rating/Ecards/Comments)</a></li>-->\n';
doc_toc += '          <!--<li><a href="groups.htm#group_cp_public">Public albums upload</a></li>-->\n';
doc_toc += '          <!--<li><a href="groups.htm#group_cp_personal">Personal gallery</a></li>-->\n';
doc_toc += '          <!--<li><a href="groups.htm#group_cp_upload_method">Upload method</a></li>-->\n';
doc_toc += '          <!--<li><a href="groups.htm#group_cp_assigned">Assigned albums</a></li>-->\n';
doc_toc += '          <!--<li><a href="groups.htm#group_cp_create">Creating custom groups</a></li>-->\n';
doc_toc += '          <!--<li><a href="groups.htm#group_cp_delete">Deleting custom groups</a></li>-->\n';
doc_toc += '          <!--<li><a href="groups.htm#group_cp_sync">Triggering synchronisation (bridged only)</a></li>-->\n';
doc_toc += '        <!--</ul>-->\n';
doc_toc += '      <!--</li>-->\n';
doc_toc += '      <!--<li><a href="users.htm">Users</a>-->\n';
doc_toc += '        <!--<ul class="level3" id="users">-->\n';
doc_toc += '          <!--<li><a href="users.htm#user_cp">The user control panel</a></li>-->\n';
doc_toc += '          <!--<li><a href="users.htm#user_cp_page">Page controls</a></li>-->\n';
doc_toc += '          <!--<li><a href="users.htm#user_cp_search">Searching for user(s)</a></li>-->\n';
doc_toc += '          <!--<li><a href="users.htm#user_cp_new">Creating new users</a></li>-->\n';
doc_toc += '          <!--<li><a href="users.htm#user_cp_edit">Editing users</a></li>-->\n';
doc_toc += '          <!--<li><a href="users.htm#user_cp_group">Group membership</a></li>-->\n';
doc_toc += '        <!--</ul>-->\n';
doc_toc += '      <!--</li>-->\n';
doc_toc += '      <!--<li><a href="categories.htm">Categories</a></li>-->\n';
doc_toc += '      <!--<li><a href="albums.htm">Albums</a>-->\n';
doc_toc += '        <!--<ul class="level3" id="albums">-->\n';
doc_toc += '          <!--<li><a href="albums.htm#albmgr">The Album Manager</a>-->\n';
doc_toc += '            <!--<ul class="level4" id="albmgr">-->\n';
doc_toc += '              <!--<li><a href="albums.htm#albmgr_create">Creating albums</a></li>-->\n';
doc_toc += '              <!--<li><a href="albums.htm#albmgr_rename">Renaming albums</a></li>-->\n';
doc_toc += '              <!--<li><a href="albums.htm#albmgr_order">Changing the album order</a></li>-->\n';
doc_toc += '              <!--<li><a href="albums.htm#albmgr_delete">Deleting albums</a></li>-->\n';
doc_toc += '            <!--</ul>-->\n';
doc_toc += '          <!--</li>-->\n';
doc_toc += '          <!--<li><a href="albums.htm#modif_alb_pics">Modifying albums/files</a></li>-->\n';
doc_toc += '          <!--<li><a href="albums.htm#album_prop">Album properties</a>\n';
doc_toc += '            <!--<ul class="level3" id="album_prop">\n';
doc_toc += '              <!--<li><a href="albums.htm#album_prop_reset_start">Reset album properties</a></li>-->\n';
doc_toc += '            <!--</ul>-->\n';
doc_toc += '          <!--</li>-->\n';
doc_toc += '          <!--<li><a href="albums.htm#album_admin_user">Admin vs. user</a></li>-->\n';
doc_toc += '          <!--<li><a href="albums.htm#album_faq">Album FAQ</a></li>-->\n';
doc_toc += '        <!--</ul>-->\n';
doc_toc += '      <!--</li>-->\n';
doc_toc += '      <!--<li><a href="files.htm">Files</a>\n';
doc_toc += '        <!--<ul class="level3" id="files">\n';
doc_toc += '          <!--<li><a href="files.htm#edit_pics">Editing files</a></li>-->\n';
doc_toc += '          <!--<li><a href="files.htm#edit_vids">Editing videos</a></li>-->\n';
doc_toc += '          <!--<li><a href="files.htm#cust_thmb">Custom Thumbnails</a></li>-->\n';
doc_toc += '        <!--</ul>-->\n';
doc_toc += '      <!--</li>-->\n';
doc_toc += '      <!--<li><a href="keywords.htm">Keywords</a>\n';
doc_toc += '        <!--<ul class="level3" id="files">\n';
doc_toc += '          <!--<li><a href="keywords.htm#keywords_assign">Assigning keywords</a></li>-->\n';
doc_toc += '          <!--<li><a href="keywords.htm#keywords_assign_upload">Assigning keywords when uploading</a></li>-->\n';
doc_toc += '          <!--<li><a href="keywords.htm#keywords_assign_edit">Editing/adding keywords</a></li>-->\n';
doc_toc += '          <!--<li><a href="keywords.htm#keywords_manager">Keywords manager</a></li>-->\n';
doc_toc += '          <!--<li><a href="keywords.htm#keywords_album">Album keywords</a></li>-->\n';
doc_toc += '        <!--</ul>-->\n';
doc_toc += '      <!--</li>-->\n';
doc_toc += '      <!--<li><a href="bbcode.htm">BBCODE</a></li>-->\n';
doc_toc += '      <!--<li><a href="exif.htm">EXIF data</a></li>-->\n';
doc_toc += '      <!--<li><a href="plugins.htm">Plugins</a>\n';
doc_toc += '        <!--<ul class="level3" id="plugins">\n';
doc_toc += '          <!--<li><a href="plugins.htm#plugin_definition">What is a plugin?</a></li>-->\n';
doc_toc += '          <!--<li><a href="plugins.htm#plugin_api">The Plugin API</a></li>-->\n';
doc_toc += '          <!--<li><a href="plugins.htm#plugin_obtain">Where to get Plugins from?</a></li>-->\n';
doc_toc += '          <!--<li><a href="plugins.htm#plugin_manager">The Plugin Manager</a>\n';
doc_toc += '            <!--<ul class="level4" id="plugin_manager">\n';
doc_toc += '              <!--<li><a href="plugins.htm#plugin_manager_upload">Uploading a plugin</a></li>-->\n';
doc_toc += '              <!--<li><a href="plugins.htm#plugin_manager_install">Installing a plugin</a></li>-->\n';
doc_toc += '              <!--<li><a href="plugins.htm#plugin_manager_configuration">Plugin Configuration</a></li>-->\n';
doc_toc += '              <!--<li><a href="plugins.htm#plugin_manager_uninstall">Uninstalling a plugin</a></li>-->\n';
doc_toc += '            <!--</ul>-->\n';
doc_toc += '          <!--</li>-->\n';
doc_toc += '          <!--<li><a href="plugins.htm#plugin_writing">Writing plugins</a></li>-->\n';
doc_toc += '        <!--</ul>-->\n';
doc_toc += '      <!--</li>-->\n';
doc_toc += '      <!--<li><a href="admin-tools.htm#admin_tools">Admin Tools</a></li>-->\n';
doc_toc += '      <!--<li><a href="errors.htm#errors">Errors</a></li>-->\n';
doc_toc += '      <!--<li><a href="export.htm#export">Exporting</a></li>-->\n';
doc_toc += '    </ul>\n';
doc_toc += '  </li>\n';
doc_toc += '  <!--<li><a href="uploading.htm">Uploading</a>-->\n';
doc_toc += '    <!--<ul class="level2" id="uploading">-->\n';
doc_toc += '      <!--<li><a href="uploading_batch-add.htm#batch_add_pics">Uploading pics by FTP / Batch-Add Pictures</a></li>-->\n';
doc_toc += '      <!--<li><a href="uploading_http.htm#upload_http">Uploading by HTTP</a></li>-->\n';
doc_toc += '      <!--<li><a href="uploading_xp-publisher.htm#xp">Windows XP Web Publishing Wizard</a>-->\n';
doc_toc += '        <!--<ul class="level3" id="xp">-->\n';
doc_toc += '          <!--<li><a href="uploading_xp-publisher.htm#xp_publish_setup">XP Web Publishing Wizard: Setup</a></li>-->\n';
doc_toc += '          <!--<li><a href="uploading_xp-publisher.htm#xp_publish_upload">XP Web Publishing Wizard: Uploading pictures</a></li>-->\n';
doc_toc += '        <!--</ul>-->\n';
doc_toc += '      <!--</li>-->\n';
doc_toc += '      <!--<li><a href="upload_troubleshooting.htm#upload_trouble">Upload troubleshooting</a>-->\n';
doc_toc += '         <!--<ul class="level3" id="upload_troubleshooting">-->\n';
doc_toc += '           <!--<li><a href="upload_troubleshooting.htm#upload_support">Asking for support on upload issues</a></li>-->\n';
doc_toc += '           <!--<li><a href="upload_troubleshooting.htm#upload_error_messages">Error messages</a></li>-->\n';
doc_toc += '           <!--<li><a href="upload_troubleshooting.htm#upload_trouble_server-sided_restrictions">Server-sided restrictions</a></li>-->\n';
doc_toc += '           <!--<li><a href="upload_troubleshooting.htm#upload_trouble_server-sided_restrictions_check">Things to check</a></li>-->\n';
doc_toc += '         <!--</ul>-->\n';
doc_toc += '      <!--</li>-->\n';
doc_toc += '    <!--</ul>-->\n';
doc_toc += '  <!--</li>-->\n';
doc_toc += '  <!--<li><a href="comments.htm">Comments</a>-->\n';
doc_toc += '    <!--<ul class="level2" id="comments">-->\n';
doc_toc += '      <!--<li><a href="comments.htm#comments_allow">Allowing comments</a></li>-->\n';
doc_toc += '      <!--<li><a href="comments.htm#comments_options">Comments options</a></li>-->\n';
doc_toc += '      <!--<li><a href="comments.htm#comments_options_spam">Spam issues</a></li>-->\n';
doc_toc += '      <!--<li><a href="comments.htm#comments_review">Reviewing Comments</a></li>-->\n';
doc_toc += '      <!--<li><a href="comments.htm#comments_individual">Individual Comments</a></li>-->\n';
doc_toc += '    <!--</ul>-->\n';
doc_toc += '  <!--</li>-->\n';
doc_toc += '  <!--<li><a href="bridging.htm">Bridging</a>-->\n';
doc_toc += '    <!--<ul class="level2" id="bridging">-->\n';
doc_toc += '      <!--<li><a href="bridging.htm#integrating_bridge_purpose">What bridging does</a></li>-->\n';
doc_toc += '      <!--<li><a href="bridging.htm#integrating_bridge_start">Available bridge files</a></li>-->\n';
doc_toc += '      <!--<li><a href="bridging.htm#integrating_prerequisites_start">Pre-requistes</a>\n';
doc_toc += '        <!--<ul class="level3" id="integrating_prerequisites_start">\n';
doc_toc += '          <!--<li><a href="bridging.htm#integrating_cookie_start">Authentication by cookie</a></li>-->\n';
doc_toc += '          <!--<li><a href="bridging.htm#integrating_standalone_start">Standalone version first</a></li>-->\n';
doc_toc += '          <!--<li><a href="bridging.htm#integrating_users_start">Coppermine users, groups and pics uploaded by users are lost when integrating</a></li>-->\n';
doc_toc += '          <!--<li><a href="bridging.htm#integrating_backup_start">Backup</a></li>-->\n';
doc_toc += '        <!--</ul>-->\n';
doc_toc += '      <!--</li>-->\n';
doc_toc += '      <!--<li><a href="bridging.htm#integrating_steps_start">Integration steps</a>-->\n';
doc_toc += '        <!--<ul class="level3" id="integrating_steps_start">-->\n';
doc_toc += '          <!--<li><a href="bridging.htm#bridge_manager_start">Using the bridge manager</a></li>-->\n';
doc_toc += '          <!--<li><a href="bridging.htm#bridge_manager_app_start">Choose application to bridge coppermine with</a></li>-->\n';
doc_toc += '          <!--<li><a href="bridging.htm#bridge_manager_path_start">Path(s) used by your bridge app</a></li>-->\n';
doc_toc += '          <!--<li><a href="bridging.htm#bridge_manager_specific_start">Bridge-app-specific settings</a></li>-->\n';
doc_toc += '          <!--<li><a href="bridging.htm#bridge_manager_enable_start">Enable/disable bridging</a></li>-->\n';
doc_toc += '        <!--</ul>-->\n';
doc_toc += '      <!--</li>-->\n';
doc_toc += '      <!--<li><a href="bridging.htm#bridge_manager_recover_start">Recover from failed bridging</a></li>-->\n';
doc_toc += '      <!--<li><a href="bridging.htm#integrating_steps_sync_start">Synchronising the bridge app groups with Coppermine's groups</a></li>-->\n';
doc_toc += '      <!--<li><a href="bridging.htm#integrating_support_start">Bridging support</a></li>-->\n';
doc_toc += '      <!--<li><a href="bridging.htm#integrating_config_options_start">Some config options get disabled</a></li>-->\n';
doc_toc += '      <!--<li><a href="bridging.htm#integrating_files_start">Bridging files</a></li>-->\n';
doc_toc += '      <!--<li><a href="bridging.htm#integrating_bridge_file_creating_start">Creating a custom bridge file</a></li>-->\n';
doc_toc += '      <!--<li><a href="bridging.htm#integrating_philosophy_start">Bridging philosophy</a></li>-->\n';
doc_toc += '      <!--<li><a href="bridging.htm#integrating_individual_bridge_issues_start">Individual bridge issues</a></li>-->\n';
doc_toc += '      <!--<li><a href="bridging.htm#integrating_subdomain">Subdomain issues</a></li>-->\n';
doc_toc += '    <!--</ul>-->\n';
doc_toc += '  <!--</li>-->\n';
doc_toc += '  <!--<li><a href="dev.htm">Developer documentation</a>-->\n';
doc_toc += '    <!--<ul class="level2" id="dev">-->\n';
doc_toc += '      <!--<li><a href="dev_coding.htm">Coding guidelines</a></li>-->\n';
doc_toc += '      <!--<li><a href="dev_files.htm">Adding/renaming/removing files</a></li>-->\n';
doc_toc += '      <!--<li><a href="dev_superglobals.htm">Sanitization of Superglobals using Inspekt</a></li>-->\n';
doc_toc += '      <!--<li><a href="dev_javascript.htm">Javascript in Coppermine</a></li>-->\n';
doc_toc += '      <!--<li><a href="dev_plugin_writing.htm">Plugin Writing</a></li>-->\n';
doc_toc += '      <!--<li><a href="dev_plugin_hooks.htm">Plugin hooks</a></li>-->\n';
doc_toc += '      <!--<li><a href="dev_documentation.htm">Editing the documentation</a></li>-->\n';
doc_toc += '      <!--<li><a href="dev_subversion.htm">Subversion</a></li>-->\n';
doc_toc += '      <!--<li><a href="dev_config.htm">Adding config options</a></li>-->\n';
doc_toc += '      <!--<li><a href="dev_versioncheck.htm">Versioncheck</a></li>-->\n';
doc_toc += '      <!--<li><a href="dev_update.htm">Updating</a></li>-->\n';
doc_toc += '      <!--<li><a href="dev_tools.htm">Tools recommended by the devs</a></li>-->\n';
doc_toc += '    <!--</ul>-->\n';
doc_toc += '  </li>\n';
doc_toc += '</ul>\n';\n';
$('#toc').replaceWith('<div id="toc">' + doc_toc + '</div>');
}



function cpgDocHeader() {
	// Only display the header if the docs are not included
	if (getUrlParameters('hide_nav') == 1) {
		return;
	}
	$('#docheader').text('Coppermine Photo Gallery v1.5.1: Documentation and Manual');
	$('#docheader').after('<br clear="all" />\n<a name="top"></a>');
	$('#docheader').before('<img src="../images/coppermine-logo.png" alt="Coppermine Photo Gallery - Your Online Photo Gallery" align="left" />\n');
}

function cpgDocSearch() {
	// Only display the header if the docs are not included
	if (getUrlParameters('hide_nav') == 1) {
		return;
	}
	var doc_search = '';
	doc_search += '<br />&nbsp;<br />\n';
	doc_search += '  <form action="http://www.google.com/cse" id="cse-search-box">\n';
	doc_search += '    <div>\n';
	doc_search += '      <input type="hidden" name="cx" value="009353514429642786404:1fg_c1k1td8" />\n';
	doc_search += '      <input type="text" name="q" size="25" />\n';
	doc_search += '      <input type="submit" name="sa" value="suche in Doku" style="font-size:9px;" />\n';
	doc_search += '    </div>\n';
	doc_search += '  </form>\n';
	doc_search += '  <script type="text/javascript" src="http://www.google.com/coop/cse/brand?form=cse-search-box&lang=de"></script>\n';
	$('#toc').append(doc_search);
}

function cpgDocFooter() {
  var overall_doc_footer = '';
  overall_doc_footer += '</div>';
  overall_doc_footer += '<div align="right">';
  overall_doc_footer += '<a href="#top">Back to Top</a>';
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
  $('#doc_last_changed').text('About this document: ' + 'Last changed on ' + lastChangeDate);

  var revisionNumber = $('#doc_revision').text();
  var revisionNumber = revisionNumber.replace('$', '');
  var revisionNumber = revisionNumber.replace('$', '');
  var revisionNumber = revisionNumber.replace(/Revision: /g, '');
  $('#doc_revision').text(', Revision ' + revisionNumber);
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
});