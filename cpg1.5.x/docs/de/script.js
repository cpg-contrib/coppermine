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

$(function() {
    $("#tree").treeview({
        collapsed: true,
        unique: true,
        animated: "slow",
        persist: "location",
    });
})

$(function() {
    $("#toc_overall").treeview({
        collapsed: true,
        animated: "medium",
        control:"#sidetreecontrol"
    });
})

function cpgDocToc() {
if (getUrlParameters('hide_nav') == 1) {
	return;
}
document.write('<h6>Table of contents (<a href="../index.htm">documentation language selection</a>)</h6>');
document.write('<ul id="tree">');
document.write('  <li><a href="index.htm">Coppermine Dokumentation</a>');
document.write('    <ul class="level2" id="index">');
document.write('      <li><a href="index.htm#about">Über Coppermine</a></li>');
//document.write('      <li><a href="index.htm#about_documentation">About the documentation</a></li>');
//document.write('      <li><a href="index.htm#features">Features</a></li>');
//document.write('      <li><a href="quickstart.htm#about">Quick-Start guide</a></li>');
document.write('      <li><a href="toc.htm">Inhaltsverzeichnis</a></li>');
document.write('      <li><a href="requirements.htm">Mindestvoraussetzung</a></li>');
//document.write('      <li><a href="testing.htm">Testing (alpha/beta versions!)</a></li>');
document.write('      <li><a href="languages.htm">Sprachen</a>');
//document.write('        <ul class="level3" id="languages">');
//document.write('          <li><a href="translation.htm">Translation guide</a></li>');
//document.write('        </ul>');
//document.write('      </li>');
document.write('      <li><a href="credits.htm">Credits</a>');
document.write('        <ul class="level3" id="credits">');
document.write('          <li><a href="credits.htm#developers">Coppermine Team</a></li>');
document.write('          <li><a href="credits.htm#contributors">Unterstützer</a></li>');
document.write('          <li><a href="credits.htm#codebase">Verwendeter Open Source Code</a></li>');
document.write('        </ul>');
document.write('      </li>');
//document.write('      <li><a href="copyrights.htm">License &amp; Copyright</a></li>');
//document.write('      <li><a href="known_issues.htm">Known issues</a></li>');
document.write('    </ul>');
document.write('  </li>');
//document.write('  <li><a href="install.htm">Installation and setup</a>');
//document.write('    <ul class="level2" id="install">');
//document.write('      <li><a href="install.htm#how">How to install the script</a></li>');
//document.write('      <li><a href="install.htm#what">What the installer does</a></li>');
//document.write('      <li><a href="install_permissions.htm">Setting permissions</a>');
//document.write('        <ul class="level3" id="install_permissions">');
//document.write('          <li><a href="install_permissions.htm#chmod">Apache on Unix/Linux (CHMOD)</a></li>');
//document.write('          <li><a href="install_permissions.htm#apache_windows">Apache on Windows</a></li>');
//document.write('          <li><a href="install_permissions.htm#iis">IIS on Windows</a></li>');
//document.write('          <li><a href="install_permissions.htm#support">Asking for support on permissions issues</a></li>');
//document.write('        </ul>');
//document.write('      </li>');
//document.write('      <li><a href="install_screen.htm">The install screen</a></li>');
//document.write('      <li><a href="auto-installers.htm">Auto-Installers</a></li>');
//document.write('      <li><a href="install_faq.htm">Installation FAQ</a></li>');
//document.write('      <li><a href="uninstall.htm">Uninstall</a></li>');
//document.write('    </ul>');
//document.write('  </li>');
//document.write('  <li><a href="upgrading.htm">Upgrading</a>');
//document.write('    <ul class="level2" id="upgrading">');
//document.write('      <li><a href="upgrading.htm#upgrade_why">Why upgrade?</a>');
//document.write('      	<ul class="level3" id="why_upgrade">');
//document.write('      		<li><a href="upgrading.htm#upgrade_why_reasons">Reasons for package releases</a></li>');
//document.write('      		<li><a href="upgrading.htm#upgrade_why_changelog">Changelog</a></li>');
//document.write('      	</ul>');
//document.write('      </li>');
//document.write('      <li><a href="upgrading.htm#upgrade_any">Steps needed to perform when upgrading Coppermine (from any version)</a></li>');
//document.write('      <li><a href="upgrading.htm#upgrade_particular">Additional actions for updating from particular versions</a>');
//document.write('        <ul class="level3" id="upgrade_particular">');
//document.write('          <li><a href="upgrading.htm#upgrade_10">Upgrading from versions cpg1.0,1.1,1.2.x or 1.3.x</a></li>');
//document.write('          <li><a href="upgrading.htm#upgrade_14">Upgrading from cpg1.4.x to version cpg1.5.x</a></li>');
//document.write('        </ul>');
//document.write('      </li>');
//document.write('      <li><a href="upgrading.htm#versioncheck">The version check tool</a>');
//document.write('        <ul class="level3" id="versioncheck">');
//document.write('          <li><a href="upgrading.htm#versioncheck_description_start">What it does</a></li>');
//document.write('          <li><a href="upgrading.htm#versioncheck_options_start">Options</a></li>');
//document.write('          <li><a href="upgrading.htm#versioncheck_comparison_start">Version comparison</a></li>');
//document.write('        </ul>');
//document.write('      </li>');
//document.write('      <li><a href="upgrading.htm#upgrade_faq">Upgrading FAQ</a></li>');
//document.write('      <li><a href="upgrading.htm#downgrading">Downgrading from cpg1.5.x to an older version</a></li>');
//document.write('        </ul>');
//document.write('      </li>');
//document.write('      <li><a href="upgrading.htm#downgrading">Downgrading from cpg1.5.x to an older version</a></li>');
//document.write('    </ul>');
//document.write('  </li>');
//document.write('  <li><a href="start.htm">Getting Started</a>');
//document.write('    <ul class="level2" id="start">');
//document.write('      <li><a href="start.htm#getting_concepts">Basic concepts</a></li>');
//document.write('      <li><a href="start.htm#getting_initial_configuration">Initial configuration</a></li>');
//document.write('      <li><a href="start.htm#getting_structure">Category/album/file structure</a></li>');
//document.write('      <li><a href="start.htm#getting_resizing">Resized images</a></li>');
//document.write('      <li><a href="start.htm#getting_admin_account">Your admin account</a></li>');
//document.write('      <li><a href="start.htm#getting_check_uploads">Check uploads</a></li>');
//document.write('      <li><a href="start.htm#getting_consider_bridging">Consider bridging</a></li>');
//document.write('      <li><a href="start.htm#getting_interaction">What are your visitors allowed to do?</a></li>');
//document.write('      <li><a href="start.htm#getting_design">Change your coppermine\’s design</a></li>');
//document.write('      <li><a href="start.htm#getting_typical">Typical setups</a></li>');
//document.write('    </ul>');
//document.write('  </li>');
//document.write('  <li><a href="faq.htm">Frequently Asked Questions</a></li>');
//document.write('  <li><a href="theme.htm">Themes</a>');
//document.write('    <ul class="level2" id="themes">');
//document.write('      <li><a href="theme.htm#theme_builtin">Themes that come with Coppermine</a></li>');
//document.write('      <li><a href="theme.htm#theme_upgrading">Upgrading your custom theme</a>');
//document.write('      <ul class="level3" id="theme_upgrading">');
//document.write('        <li><a href="theme_upgrade_14x-15x.htm">Converting cpg1.4.x themes to cpg1.5.x</a>');
//document.write('          <ul class="level3" id="upgrade_14_15">');
//document.write('            <li><a href="theme_upgrade_14x-15x.htm#style">Edit style.css</a></li>');
//document.write('            <li><a href="theme_upgrade_14x-15x.htm#template">Edit template.html</a></li>');
//document.write('            <li><a href="theme_upgrade_14x-15x.htm#theme">Edit theme.php</a></li>');
//document.write('            <li><a href="theme_upgrade_14x-15x.htm#validation">Validation Methodology</a></li>');
//document.write('          </ul>');
//document.write('        </li>');
//document.write('        <li><a href="theme_upgrade_13x-14x.htm">Converting cpg1.3.x themes to cpg1.4.x</a>');
//document.write('          <ul class="level3" id="upgrade_13_14">');
//document.write('            <li><a href="theme_upgrade_13x-14x.htm#style">Edit style.css</a></li>');
//document.write('            <li><a href="theme_upgrade_13x-14x.htm#template">Edit template.html</a></li>');
//document.write('            <li><a href="theme_upgrade_13x-14x.htm#theme">Edit theme.php</a></li>');
//document.write('            <li><a href="theme_upgrade_13x-14x.htm#validation">Validation Methodology</a></li>');
//document.write('          </ul>');
//document.write('        </li>');
//document.write('      </ul>');
//document.write('      </li>');
//document.write('      <li><a href="theme.htm#theme_files">Content of a theme</a></li>');
//document.write('      <li><a href="theme.htm#theme_engine">How the theme engine works</a></li>');
//document.write('      <li><a href="theme_user-contributions.htm#theme_user-contributions">User-contributed themes</a></li>');
//document.write('      <li><a href="theme_create.htm#theme_create">Creating your custom theme</a>');
//document.write('        <ul class="level3" id="theme_create">');
//document.write('          <li><a href="theme_create.htm#theme_create_rename">Rename your theme first</a></li>');
//document.write('          <li><a href="theme_create.htm#theme_create_tipps">Tipps &amp; tricks</a></li>');
//document.write('          <li><a href="theme_create.htm#theme_create_wysiwyg">Using WYSIWYG-editors</a></li>');
//document.write('          <li><a href="theme_create.htm#theme_create_colors">Modifying colors</a></li>');
//document.write('          <li><a href="theme_create.htm#theme_create_theme_php">Editing theme.php</a></li>');
//document.write('        </ul>');
//document.write('      </li>');
//document.write('      <li><a href="theme_template.htm#theme_template_html">Editing template.html</a></li>');
//document.write('      <li><a href="theme_copyright.htm">Copyright-disclaimer in footer</a></li>');
//document.write('      <li><a href="php-content.htm">Dynamic (PHP-driven) content</a>');
//document.write('        <ul class="level3" id="php-content">');
//document.write('          <li><a href="php-content.htm#php-content_anycontent">Using anycontent.php</a></li>');
//document.write('          <li><a href="php-content.htm#php-content_header_footer">Custom header and footer</a></li>');
//document.write('          <li><a href="php-content.htm#php-content_theme">Theme-based dynamic content (theme.php)</a></li>');
//document.write('          <li><a href="php-content.htm#php-content_core">Modifying core files</a></li>');
//document.write('        </ul>');
//document.write('      </li>');
//document.write('    </ul>');
//document.write('  </li>');
document.write('  <li><a href="administration.htm">Administration</a>');
document.write('    <ul class="level2" id="administration">');
//document.write('      <li><a href="admin_menu.htm">Admin menu items</a></li>');
//document.write('      <li><a href="banning.htm#banning">Banning</a></li>');
document.write('      <li><a href="configuration.htm">Einstellungen</a>');
document.write('        <ul class="level3" id="configuration">');
document.write('          <li><a href="configuration.htm#admin_general">Allgemeine Einstellungen</a></li>');
document.write('          <li><a href="configuration.htm#admin_language">Sprach- &amp; Zeichensatz-Einstellungen</a></li>');
document.write('          <li><a href="configuration.htm#admin_theme">Themen-Einstellungen</a></li>');
document.write('          <li><a href="configuration.htm#admin_album_list">Ansicht Albenliste</a></li>');
document.write('          <li><a href="configuration.htm#admin_thumbnail_view">Ansicht Thumbnail</a></li>');
document.write('          <li><a href="configuration.htm#admin_image_comment">Ansicht Bild</a></li>');
document.write('          <li><a href="configuration.htm#admin_comment_start">Einstellungen Kommentare</a></li>');
document.write('          <li><a href="configuration.htm#admin_contact_start">Kontakformular-Einstellungen</a></li>');
document.write('          <li><a href="configuration.htm#admin_thumb_start">Thumbnail Einstellungen</a></li>');
document.write('          <li><a href="configuration.htm#admin_picture_thumbnail">Bild/Datei-Einstellungen</a></li>');
document.write('          <li><a href="configuration.htm#admin_watermarking">Wasserzeichen auf Bildern</a></li>');
document.write('          <li><a href="configuration.htm#admin_registration">Registrierung</a></li>');
document.write('          <li><a href="configuration.htm#admin_user">Benutzer-Einstellungen</a></li>');
document.write('          <li><a href="configuration.htm#admin_custom">Benutzerdefinierte Felder für Benutzerprofile</a></li>');
document.write('          <li><a href="configuration.htm#admin_custom_image">Benutzerdefinierte Felder für zusätzliche Dateiinformationen</a></li>');
document.write('          <li><a href="configuration.htm#admin_cookie">Cookie-Einstellungen</a></li>');
document.write('          <li><a href="configuration.htm#admin_email">Email-Einstellungen</a></li>');
document.write('          <li><a href="configuration.htm#admin_logging">Logging und Statistiken</a></li>');
document.write('          <li><a href="configuration.htm#admin_misc">Wartungs-Einstellungen</a></li>');
document.write('        </ul>');
document.write('      </li>');
//document.write('      <li><a href="groups.htm">Groups</a>');
//document.write('        <ul class="level3" id="groups">');
//document.write('          <li><a href="groups.htm#group_cp">The group control panel</a></li>');
//document.write('          <li><a href="groups.htm#group_cp_names">Group names</a></li>');
//document.write('          <li><a href="groups.htm#group_cp_types">Group types</a></li>');
//document.write('          <li><a href="groups.htm#group_cp_quota">Quota</a></li>');
//document.write('          <li><a href="groups.htm#group_cp_permissions">Group permissions (Rating/Ecards/Comments)</a></li>');
//document.write('          <li><a href="groups.htm#group_cp_public">Public albums upload</a></li>');
//document.write('          <li><a href="groups.htm#group_cp_personal">Personal gallery</a></li>');
//document.write('          <li><a href="groups.htm#group_cp_upload_method">Upload method</a></li>');
//document.write('          <li><a href="groups.htm#group_cp_assigned">Assigned albums</a></li>');
//document.write('          <li><a href="groups.htm#group_cp_create">Creating custom groups</a></li>');
//document.write('          <li><a href="groups.htm#group_cp_delete">Deleting custom groups</a></li>');
//document.write('          <li><a href="groups.htm#group_cp_sync">Triggering synchronisation (bridged only)</a></li>');
//document.write('        </ul>');
//document.write('      </li>');
//document.write('      <li><a href="users.htm">Users</a>');
//document.write('        <ul class="level3" id="users">');
//document.write('          <li><a href="users.htm#user_cp">The user control panel</a></li>');
//document.write('          <li><a href="users.htm#user_cp_page">Page controls</a></li>');
//document.write('          <li><a href="users.htm#user_cp_search">Searching for user(s)</a></li>');
//document.write('          <li><a href="users.htm#user_cp_new">Creating new users</a></li>');
//document.write('          <li><a href="users.htm#user_cp_edit">Editing users</a></li>');
//document.write('          <li><a href="users.htm#user_cp_group">Group membership</a></li>');
//document.write('        </ul>');
//document.write('      </li>');
//document.write('      <li><a href="categories.htm">Categories</a></li>');
//document.write('      <li><a href="albums.htm">Albums</a>');
//document.write('        <ul class="level3" id="albums">');
//document.write('          <li><a href="albums.htm#albmgr">The Album Manager</a>');
//document.write('            <ul class="level4" id="albmgr">');
//document.write('              <li><a href="albums.htm#albmgr_create">Creating albums</a></li>');
//document.write('              <li><a href="albums.htm#albmgr_rename">Renaming albums</a></li>');
//document.write('              <li><a href="albums.htm#albmgr_order">Changing the album order</a></li>');
//document.write('              <li><a href="albums.htm#albmgr_delete">Deleting albums</a></li>');
//document.write('            </ul>');
//document.write('          </li>');
//document.write('          <li><a href="albums.htm#modif_alb_pics">Modifying albums/files</a></li>');
//document.write('          <li><a href="albums.htm#album_prop">Album properties</a>');
//document.write('            <ul class="level3" id="album_prop">');
//document.write('              <li><a href="albums.htm#album_prop_reset_start">Reset album properties</a></li>');
//document.write('            </ul>');
//document.write('          </li>');
//document.write('          <li><a href="albums.htm#album_admin_user">Admin vs. user</a></li>');
//document.write('          <li><a href="albums.htm#album_faq">Album FAQ</a></li>');
//document.write('        </ul>');
//document.write('      </li>');
//document.write('      <li><a href="files.htm">Files</a>');
//document.write('        <ul class="level3" id="files">');
//document.write('          <li><a href="files.htm#edit_pics">Editing files</a></li>');
//document.write('          <li><a href="files.htm#edit_vids">Editing videos</a></li>');
//document.write('          <li><a href="files.htm#cust_thmb">Custom Thumbnails</a></li>');
//document.write('        </ul>');
//document.write('      </li>');
//document.write('      <li><a href="keywords.htm">Keywords</a>');
//document.write('        <ul class="level3" id="files">');
//document.write('          <li><a href="keywords.htm#keywords_assign">Assigning keywords</a></li>');
//document.write('          <li><a href="keywords.htm#keywords_assign_upload">Assigning keywords when uploading</a></li>');
//document.write('          <li><a href="keywords.htm#keywords_assign_edit">Editing/adding keywords</a></li>');
//document.write('          <li><a href="keywords.htm#keywords_manager">Keywords manager</a></li>');
//document.write('          <li><a href="keywords.htm#keywords_album">Album keywords</a></li>');
//document.write('        </ul>');
//document.write('      </li>');
//document.write('      <li><a href="bbcode.htm">BBCODE</a></li>');
//document.write('      <li><a href="exif.htm">EXIF data</a></li>');
//document.write('      <li><a href="plugins.htm">Plugins</a>');
//document.write('        <ul class="level3" id="plugins">');
//document.write('          <li><a href="plugins.htm#plugin_definition">What is a plugin?</a></li>');
//document.write('          <li><a href="plugins.htm#plugin_api">The Plugin API</a></li>');
//document.write('          <li><a href="plugins.htm#plugin_obtain">Where to get Plugins from?</a></li>');
//document.write('          <li><a href="plugins.htm#plugin_manager">The Plugin Manager</a>');
//document.write('            <ul class="level4" id="plugin_manager">');
//document.write('              <li><a href="plugins.htm#plugin_manager_upload">Uploading a plugin</a></li>');
//document.write('              <li><a href="plugins.htm#plugin_manager_install">Installing a plugin</a></li>');
//document.write('              <li><a href="plugins.htm#plugin_manager_configuration">Plugin Configuration</a></li>');
//document.write('              <li><a href="plugins.htm#plugin_manager_uninstall">Uninstalling a plugin</a></li>');
//document.write('            </ul>');
//document.write('          </li>');
//document.write('          <li><a href="plugins.htm#plugin_writing">Writing plugins</a></li>');
//document.write('        </ul>');
//document.write('      </li>');
//document.write('      <li><a href="admin-tools.htm#admin_tools">Admin Tools</a></li>');
//document.write('      <li><a href="errors.htm#errors">Errors</a></li>');
//document.write('      <li><a href="export.htm#export">Exporting</a></li>');
//document.write('    </ul>');
//document.write('  </li>');
//document.write('  <li><a href="uploading.htm">Uploading</a>');
//document.write('    <ul class="level2" id="uploading">');
//document.write('      <li><a href="uploading_batch-add.htm#batch_add_pics">Uploading pics by FTP / Batch-Add Pictures</a></li>');
//document.write('      <li><a href="uploading_http.htm#upload_http">Uploading by HTTP</a></li>');
//document.write('      <li><a href="uploading_xp-publisher.htm#xp">Windows XP Web Publishing Wizard</a>');
//document.write('        <ul class="level3" id="xp">');
//document.write('          <li><a href="uploading_xp-publisher.htm#xp_publish_setup">XP Web Publishing Wizard: Setup</a></li>');
//document.write('          <li><a href="uploading_xp-publisher.htm#xp_publish_upload">XP Web Publishing Wizard: Uploading pictures</a></li>');
//document.write('        </ul>');
//document.write('      </li>');
//document.write('      <li><a href="upload_troubleshooting.htm#upload_trouble">Upload troubleshooting</a>');
//document.write('         <ul class="level3" id="upload_troubleshooting">');
//document.write('           <li><a href="upload_troubleshooting.htm#upload_support">Asking for support on upload issues</a></li>');
//document.write('           <li><a href="upload_troubleshooting.htm#upload_error_messages">Error messages</a></li>');
//document.write('           <li><a href="upload_troubleshooting.htm#upload_trouble_server-sided_restrictions">Server-sided restrictions</a></li>');
//document.write('           <li><a href="upload_troubleshooting.htm#upload_trouble_server-sided_restrictions_check">Things to check</a></li>');
//document.write('         </ul>');
//document.write('      </li>');
//document.write('    </ul>');
//document.write('  </li>');
//document.write('  <li><a href="comments.htm">Comments</a>');
//document.write('    <ul class="level2" id="comments">');
//document.write('      <li><a href="comments.htm#comments_allow">Allowing comments</a></li>');
//document.write('      <li><a href="comments.htm#comments_options">Comments options</a></li>');
//document.write('      <li><a href="comments.htm#comments_options_spam">Spam issues</a></li>');
//document.write('      <li><a href="comments.htm#comments_review">Reviewing Comments</a></li>');
//document.write('      <li><a href="comments.htm#comments_individual">Individual Comments</a></li>');
//document.write('    </ul>');
//document.write('  </li>');
//document.write('  <li><a href="bridging.htm">Bridging</a>');
//document.write('    <ul class="level2" id="bridging">');
//document.write('      <li><a href="bridging.htm#integrating_bridge_purpose">What bridging does</a></li>');
//document.write('      <li><a href="bridging.htm#integrating_bridge_start">Available bridge files</a></li>');
//document.write('      <li><a href="bridging.htm#integrating_prerequisites_start">Pre-requistes</a>');
//document.write('        <ul class="level3" id="integrating_prerequisites_start">');
//document.write('          <li><a href="bridging.htm#integrating_cookie_start">Authentication by cookie</a></li>');
//document.write('          <li><a href="bridging.htm#integrating_standalone_start">Standalone version first</a></li>');
//document.write('          <li><a href="bridging.htm#integrating_users_start">Coppermine users, groups and pics uploaded by users are lost when integrating</a></li>');
//document.write('          <li><a href="bridging.htm#integrating_backup_start">Backup</a></li>');
//document.write('        </ul>');
//document.write('      </li>');
//document.write('      <li><a href="bridging.htm#integrating_steps_start">Integration steps</a>');
//document.write('        <ul class="level3" id="integrating_steps_start">');
//document.write('          <li><a href="bridging.htm#bridge_manager_start">Using the bridge manager</a></li>');
//document.write('          <li><a href="bridging.htm#bridge_manager_app_start">Choose application to bridge coppermine with</a></li>');
//document.write('          <li><a href="bridging.htm#bridge_manager_path_start">Path(s) used by your bridge app</a></li>');
//document.write('          <li><a href="bridging.htm#bridge_manager_specific_start">Bridge-app-specific settings</a></li>');
//document.write('          <li><a href="bridging.htm#bridge_manager_enable_start">Enable/disable bridging</a></li>');
//document.write('        </ul>');
//document.write('      </li>');
//document.write('      <li><a href="bridging.htm#bridge_manager_recover_start">Recover from failed bridging</a></li>');
//document.write('      <li><a href="bridging.htm#integrating_steps_sync_start">Synchronising the bridge app groups with Coppermine\’s groups</a></li>');
//document.write('      <li><a href="bridging.htm#integrating_support_start">Bridging support</a></li>');
//document.write('      <li><a href="bridging.htm#integrating_config_options_start">Some config options get disabled</a></li>');
//document.write('      <li><a href="bridging.htm#integrating_files_start">Bridging files</a></li>');
//document.write('      <li><a href="bridging.htm#integrating_bridge_file_creating_start">Creating a custom bridge file</a></li>');
//document.write('      <li><a href="bridging.htm#integrating_philosophy_start">Bridging philosophy</a></li>');
//document.write('      <li><a href="bridging.htm#integrating_individual_bridge_issues_start">Individual bridge issues</a></li>');
//document.write('      <li><a href="bridging.htm#integrating_subdomain">Subdomain issues</a></li>');
//document.write('    </ul>');
//document.write('  </li>');
//document.write('  <li><a href="dev.htm">Developer documentation</a>');
//document.write('    <ul class="level2" id="dev">');
//document.write('      <li><a href="dev_coding.htm">Coding guidelines</a></li>');
//document.write('      <li><a href="dev_files.htm">Adding/renaming/removing files</a></li>');
//document.write('      <li><a href="dev_superglobals.htm">Sanitization of Superglobals using Inspekt</a></li>');
//document.write('      <li><a href="dev_javascript.htm">Javascript in Coppermine</a></li>');
//document.write('      <li><a href="dev_plugin_writing.htm">Plugin Writing</a></li>');
//document.write('      <li><a href="dev_plugin_hooks.htm">Plugin hooks</a></li>');
//document.write('      <li><a href="dev_documentation.htm">Editing the documentation</a></li>');
//document.write('      <li><a href="dev_subversion.htm">Subversion</a></li>');
//document.write('      <li><a href="dev_config.htm">Adding config options</a></li>');
//document.write('      <li><a href="dev_versioncheck.htm">Versioncheck</a></li>');
//document.write('      <li><a href="dev_update.htm">Updating</a></li>');
//document.write('      <li><a href="dev_tools.htm">Tools recommended by the devs</a></li>');
//document.write('    </ul>');
document.write('  </li>');
document.write('</ul>');

document.write('<br />&nbsp;<br />');
document.write('  <form action="http://www.google.com/cse" id="cse-search-box">');
document.write('    <div>');
document.write('      <input type="hidden" name="cx" value="009353514429642786404:1fg_c1k1td8" />');
document.write('      <input type="text" name="q" size="25" />');
document.write('      <input type="submit" name="sa" value="suche in Doku" style="font-size:9px;" />');
document.write('    </div>');
document.write('  </form>');
document.write('  <script type="text/javascript" src="http://www.google.com/coop/cse/brand?form=cse-search-box&lang=de"></script>');
}

function cpgDocBreadcrumb() {
  var cpgDocLoopCounter = 0;
  var cpgDocBreadcrumbPath = '';
  var cpgLoopTemp = thisPage;
  while(docSections[cpgLoopTemp]['up'] != '' && cpgDocLoopCounter <= 10) { // avoid endless loops if docSections-array is improperly nested
    var cpgDocStepBreadcrumb = '';
    cpgDocStepBreadcrumb = cpgDocStepBreadcrumb + '<a href="';
    cpgDocStepBreadcrumb = cpgDocStepBreadcrumb + docSections[docSections[cpgLoopTemp]['up']]['file'];
    cpgDocStepBreadcrumb = cpgDocStepBreadcrumb + '">';
    cpgDocStepBreadcrumb = cpgDocStepBreadcrumb + docSections[docSections[cpgLoopTemp]['up']]['name'];
    cpgDocStepBreadcrumb = cpgDocStepBreadcrumb + '</a>';
    cpgDocStepBreadcrumb = cpgDocStepBreadcrumb + ' &gt; ';
    cpgDocBreadcrumbPath =  cpgDocStepBreadcrumb + cpgDocBreadcrumbPath;
    cpgDocLoopCounter = cpgDocLoopCounter + 1;
    cpgLoopTemp = docSections[cpgLoopTemp]['up'];
  }
  cpgDocBreadcrumbPath = cpgDocBreadcrumbPath + docSections[thisPage]['name'];
  document.write(cpgDocBreadcrumbPath);
}


function cpgDocHeader() {
  document.write('<img src="../images/coppermine-logo.png" alt="Coppermine Photo Gallery - Deine Online Photo Gallery" align="left" />');
  document.write('<h1>Coppermine Photo Gallery v1.5.1: Dokumentation und Handbuch</h1>');
  document.write('<br clear="all" />');
  //cpgDocPrevNext();
  //cpgDocBreadcrumb();
  document.write('<a name="top"></a>');
}

function cpgDocFooter() {
  document.write('</div>');
  document.write('<div align="right">');
  document.write('<a href="#top">Nach oben</a>');
  document.write('</div>');
  //cpgDocPrevNext();
}


function cpgDocPrevNext() {
  document.write('<div align="right">');
  if(docSections[thisPage]['previous'] != '') {
    document.write('<a href="' + docSections[docSections[thisPage]['previous']]['file'] + '" class="prev_next">&laquo; previous (' + docSections[docSections[thisPage]['previous']]['name'] + ')</a>&nbsp;&nbsp;&nbsp;');
  }
  if(docSections[thisPage]['next'] != '') {
    document.write('<a href="' + docSections[docSections[thisPage]['next']]['file'] + '" class="prev_next">next (' + docSections[docSections[thisPage]['next']]['name'] + ') &raquo;</a>');
  }
  document.write('</div>');
}

function displayNavigation() {
  // loop through all submenu-items and hide them
  var idName = '';
  for (var i = 0; i < docSections.length; i++) {
    idName = 'menu_' + docSections[i];
    document.getElementById(idName).style.display = 'none';
  }
  // unhide the menu item we're in
  var fileName = returnFileName();
  var expandNavigation = 'menu_' + fileName.substring(fileName.lastIndexOf('_') + 1, fileName.length);
  alert(expandNavigation);
  //document.getElementById(expandNavigation).style.display = 'block';
}

function dateRevision(lastChangeDate, revisionNumber) {
  // strip the unneeded data from last_changed and revision fields
  var lastChangeDate = lastChangeDate.replace('$', '');
  var lastChangeDate = lastChangeDate.replace('$', '');
  var lastChangeDate = lastChangeDate.replace('LastChangedDate: ', '');
  var lastChangeDate = lastChangeDate.replace(/Date: /g, '');

  var revisionNumber = revisionNumber.replace('$', '');
  var revisionNumber = revisionNumber.replace('$', '');
  var revisionNumber = revisionNumber.replace(/Revision: /g, '');

  document.write('<div class="doc_info_wrapper">');
  document.write('About this document: ');
  document.write('Last changed on ');
  document.write(lastChangeDate);
  document.write(',&nbsp;Revision ');
  document.write(revisionNumber);
  document.write('</div>');
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

$(document).ready(function() {
	//convert external links to open in new window (in comments);
	jQuery.each($("a[rel*='external']"), function(){
		$(this).click(function(){
			window.open(this.href);
			return false;
		});
		$(this).keypress(function(){
			window.open(this.href);
			return false;
		});
	});
});