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
doc_toc += '<h6>Table des matières (<a href="../index.htm">Sélection de la langue de la documentation</a>)</h6>\n';
doc_toc += '<ul id="tree">\n';
doc_toc += '  <li><a href="index.htm">Documentation de Coppermine</a>\n';
doc_toc += '    <ul>\n';
doc_toc += '      <li><a href="index.htm#about">A Propos de Coppermine</a></li>\n';
doc_toc += '      <li><a href="index.htm#about_documentation">A propos de cette Documentation</a></li>\n';
doc_toc += '      <li><a href="index.htm#features">Fonctions</a></li>\n';
doc_toc += '      <li><a href="quickstart.htm#about">Guide de Démarrage Rapide</a></li>\n';
doc_toc += '      <li><a href="toc.htm">Table des Matières</a></li>\n';
doc_toc += '      <li><a href="requirements.htm">Minimum requis</a></li>\n';
doc_toc += '      <li><a href="testing.htm">Version Alpha/Beta (Test)!</a></li>\n';
doc_toc += '      <li><a href="languages.htm">Langues</a>\n';
doc_toc += '        <ul id="languages">\n';
doc_toc += '          <li><a href="translation.htm">Guide de Traduction</a></li>\n';
doc_toc += '        </ul>\n';
doc_toc += '      </li>\n';
doc_toc += '      <li><a href="credits.htm">Credits</a>\n';
doc_toc += '        <ul>\n';
doc_toc += '          <li><a href="credits.htm#developers">L\'équipe de Coppermine</a></li>\n';
doc_toc += '          <li><a href="credits.htm#contributors">Contributeurs</a></li>\n';
doc_toc += '          <li><a href="credits.htm#translators">Traducteurs</a>\n';
doc_toc += '            <ul class="level3" id="translators">\n';
doc_toc += '              <li><a href="credits.htm#translators_language_file" class="cancel">Language files</a></li>\n';
doc_toc += '              <li><a href="credits.htm#translators_documentation" class="cancel">Documentation</a></li>\n';
doc_toc += '            </ul>\n';
doc_toc += '          </li>\n';
doc_toc += '          <li><a href="credits.htm#codebase">Codes libres utilisés</a></li>\n';
doc_toc += '        </ul>\n';
doc_toc += '      </li>\n';
doc_toc += '      <li><a href="copyrights.htm">License &amp; Copyright</a>\n';
doc_toc += '      </li>\n';
doc_toc += '      <li><a href="known_issues.htm">Problèmes connus</a></li>\n';
doc_toc += '    </ul>\n';
doc_toc += '  </li>\n';
doc_toc += '  <li><a href="install.htm">Installation et Configuration</a>\n';
doc_toc += '    <ul>\n';
doc_toc += '      <li><a href="install.htm#how">Comment installer le script</a></li>\n';
doc_toc += '      <li><a href="install.htm#what">Ce que fait l\'installeur</a></li>\n';
doc_toc += '      <li><a href="install_permissions.htm">Configurer les permissions</a>\n';
doc_toc += '        <ul>\n';
doc_toc += '          <li><a href="install_permissions.htm#chmod">Apache sur Unix/Linux (CHMOD)</a></li>\n';
doc_toc += '          <li><a href="install_permissions.htm#apache_windows">Apache sur Windows</a></li>\n';
doc_toc += '          <li><a href="install_permissions.htm#iis">IIS sur Windows</a></li>\n';
doc_toc += '          <li><a href="install_permissions.htm#support">Demander de l\'aide sur les problèmes liés aux permissions</a></li>\n';
doc_toc += '        </ul>\n';
doc_toc += '      </li>\n';
doc_toc += '      <li><a href="install_screen.htm">L\'écran d\'Installation</a></li>\n';
doc_toc += '      <li><a href="auto-installers.htm">Les Auto-Installeurs</a></li>\n';
doc_toc += '      <li><a href="install_faq.htm">FAQ d\'Installation</a></li>\n';
doc_toc += '      <li><a href="uninstall.htm">Désinstallation</a></li>\n';
doc_toc += '    </ul>\n';
doc_toc += '  </li>\n';
doc_toc += '  <li><a href="upgrading.htm">Mise à Jour</a>\n';
doc_toc += '    <ul>\n';
doc_toc += '      <li><a href="upgrading.htm#upgrade_why">Pourquoi mettre à jour?</a>\n';
doc_toc += '          <ul>\n';
doc_toc += '              <li><a href="upgrading.htm#upgrade_why_reasons">Raison de publication de mises à jour par package</a></li>\n';
doc_toc += '              <li><a href="upgrading.htm#upgrade_why_changelog">Changelog</a></li>\n';
doc_toc += '          </ul>\n';
doc_toc += '      </li>\n';
doc_toc += '      <li><a href="upgrading.htm#upgrade_any">Raison de publication de mises à jour par package</a></li>\n';
doc_toc += '      <li><a href="upgrading.htm#upgrade_particular">Etapes supplémentaires pour une mise à jour depuis une version particulière</a>\n';
doc_toc += '        <ul>\n';
doc_toc += '          <li><a href="upgrading.htm#upgrade_10">Mise à jour depuis les versions cpg1.0,1.1,1.2.x ou 1.3.x</a></li>\n';
doc_toc += '          <li><a href="upgrading.htm#upgrade_14">Mise à jour depuis cpg1.4.x vers cpg1.5.x</a></li>\n';
doc_toc += '        </ul>\n';
doc_toc += '      </li>\n';
doc_toc += '      <li><a class="nolink" href="upgrading.htm#updater">The update script</a>\n';
doc_toc += '          <ul class="level3" id="updater">\n';
doc_toc += '              <li><a class="nolink" href="upgrading.htm#updater_what_it_does">What it does</a></li>\n';
doc_toc += '              <li><a class="nolink" href="upgrading.htm#updater_purpose">Purpose</a></li>\n';
doc_toc += '              <li><a class="nolink" href="upgrading.htm#updater_authorization">Authorization check</a></li>\n';
doc_toc += '              <li><a class="nolink" href="upgrading.htm#updater_when">When must the updater be run?</a></li>\n';
doc_toc += '          </ul>\n';
doc_toc += '      </li>\n';
doc_toc += '      <li><a href="upgrading.htm#versioncheck">L\'outil de vérification de version</a>\n';
doc_toc += '        <ul>\n';
doc_toc += '          <li><a href="upgrading.htm#versioncheck_description_start">Ce qu\'il fait</a></li>\n';
doc_toc += '          <li><a href="upgrading.htm#versioncheck_options_start">Options</a></li>\n';
doc_toc += '          <li><a href="upgrading.htm#versioncheck_comparison_start">Comparaison de version</a></li>\n';
doc_toc += '        </ul>\n';
doc_toc += '      </li>\n';
doc_toc += '      <li><a href="upgrading.htm#upgrade_faq">FAQ de mise à Jour</a></li>\n';
doc_toc += '      <li><a href="upgrading.htm#downgrading">Retour de cpg1.5.x vers une version antérieurs</a></li>\n';
doc_toc += '    </ul>\n';
doc_toc += '  </li>\n';
doc_toc += '  <li><a class="nolink" href="start.htm">Getting Started</a>\n';
doc_toc += '    <ul>\n';
doc_toc += '      <li><a class="nolink" href="start.htm#getting_concepts">Basic concepts</a></li>\n';
doc_toc += '      <li><a class="nolink" href="start.htm#getting_initial_configuration">Initial configuration</a></li>\n';
doc_toc += '      <li><a class="nolink" href="start.htm#getting_structure">Category/album/file structure</a></li>\n';
doc_toc += '      <li><a class="nolink" href="start.htm#getting_resizing">Resized images</a></li>\n';
doc_toc += '      <li><a class="nolink" href="start.htm#getting_admin_account">Your admin account</a></li>\n';
doc_toc += '      <li><a class="nolink" href="start.htm#getting_check_uploads">Check uploads</a></li>\n';
doc_toc += '      <li><a class="nolink" href="start.htm#getting_consider_bridging">Consider bridging</a></li>\n';
doc_toc += '      <li><a class="nolink" href="start.htm#getting_interaction">What are your visitors allowed to do?</a></li>\n';
doc_toc += '      <li><a class="nolink" href="start.htm#getting_design">Change your coppermine\'s design</a></li>\n';
doc_toc += '      <li><a class="nolink" href="start.htm#getting_typical">Typical setups</a></li>\n';
doc_toc += '    </ul>\n';
doc_toc += '  </li>\n';
doc_toc += '  <li><a class="nolink" href="faq.htm">Frequently Asked Questions</a></li>\n';
doc_toc += '  <li><a class="nolink" href="theme.htm">Themes</a>\n';
doc_toc += '    <ul>\n';
doc_toc += '      <li><a class="nolink" href="theme.htm#theme_builtin">Themes that come with Coppermine</a></li>\n';
doc_toc += '      <li><a class="nolink" href="theme.htm#theme_upgrading">Upgrading your custom theme</a>\n';
doc_toc += '      <ul>\n';
doc_toc += '        <li><a class="nolink" href="theme_upgrade_14x-15x.htm">Converting cpg1.4.x themes to cpg1.5.x</a>\n';
doc_toc += '          <ul>\n';
doc_toc += '            <li><a class="nolink" href="theme_upgrade_14x-15x.htm#style">Edit style.css</a></li>\n';
doc_toc += '            <li><a class="nolink" href="theme_upgrade_14x-15x.htm#template">Edit template.html</a></li>\n';
doc_toc += '            <li><a class="nolink" href="theme_upgrade_14x-15x.htm#theme">Edit theme.php</a></li>\n';
doc_toc += '            <li><a class="nolink" href="theme_upgrade_14x-15x.htm#validation">Validation Methodology</a></li>\n';
doc_toc += '          </ul>\n';
doc_toc += '        </li>\n';
doc_toc += '        <li><a class="nolink" href="theme_upgrade_13x-14x.htm">Converting cpg1.3.x themes to cpg1.4.x</a>\n';
doc_toc += '          <ul>\n';
doc_toc += '            <li><a class="nolink" href="theme_upgrade_13x-14x.htm#style">Edit style.css</a></li>\n';
doc_toc += '            <li><a class="nolink" href="theme_upgrade_13x-14x.htm#template">Edit template.html</a></li>\n';
doc_toc += '            <li><a class="nolink" href="theme_upgrade_13x-14x.htm#theme">Edit theme.php</a></li>\n';
doc_toc += '            <li><a class="nolink" href="theme_upgrade_13x-14x.htm#validation">Validation Methodology</a></li>\n';
doc_toc += '          </ul>\n';
doc_toc += '        </li>\n';
doc_toc += '      </ul>\n';
doc_toc += '      </li>\n';
doc_toc += '      <li><a class="nolink" href="theme.htm#theme_files">Content of a theme</a></li>\n';
doc_toc += '      <li><a class="nolink" href="theme.htm#theme_engine">How the theme engine works</a></li>\n';
doc_toc += '      <li><a class="nolink" href="theme_user-contributions.htm#theme_user-contributions">User-contributed themes</a></li>\n';
doc_toc += '      <li><a class="nolink" href="theme_create.htm#theme_create">Creating your custom theme</a>\n';
doc_toc += '        <ul>\n';
doc_toc += '          <li><a class="nolink" href="theme_create.htm#theme_create_rename">Rename your theme first</a></li>\n';
doc_toc += '          <li><a class="nolink" href="theme_create.htm#theme_create_tipps">Tipps &amp; tricks</a></li>\n';
doc_toc += '          <li><a class="nolink" href="theme_create.htm#theme_create_wysiwyg">Using WYSIWYG-editors</a></li>\n';
doc_toc += '          <li><a class="nolink" href="theme_create.htm#theme_create_colors">Modifying colors</a></li>\n';
doc_toc += '          <li><a class="nolink" href="theme_create_matching_page_tutorial.htm#theme_matching">Creating a Coppermine theme that matches your overall site layout</a></li>\n';
doc_toc += '        </ul>\n';
doc_toc += '      </li>\n';
doc_toc += '      <li><a class="nolink" href="theme_template.htm#theme_template_html">Editing template.html</a>\n';
doc_toc += '          <ul class="level3" id="theme_template_html">\n';
doc_toc += '              <li><a class="nolink" href="theme_template.htm#theme_template_token">Template tokens</a></li>\n';
doc_toc += '              <li><a class="nolink" href="theme_template.htm#theme_template_important">Important</a></li>\n';
doc_toc += '              <li><a class="nolink" href="theme_template.htm#theme_template_token_list">List of tokens in template.html</a></li>\n';
doc_toc += '          </ul>\n';
doc_toc += '      </li>\n';
doc_toc += '      <li><a class="nolink" href="theme_style_css.htm#theme_style_css">Editing style.css</a></li>\n';
doc_toc += '      <li><a class="nolink" href="theme_theme_php.htm#theme_create_theme_php">Editing theme.php</a>\n';
doc_toc += '          <ul class="level3" id="theme_theme_php">\n';
doc_toc += '              <li><a class="nolink" href="theme_theme_php.htm#theme_php_types">Item types</a></li>\n';
doc_toc += '              <li><a class="nolink" href="theme_theme_php.htm">The sample theme - a template to copy from</a></li>\n';
doc_toc += '              <li><a class="nolink" href="theme_theme_php.htm#theme_php_method">Method</a></li>\n';
doc_toc += '              <li><a class="nolink" href="theme_theme_php.htm#theme_php_scope">Scope</a></li>\n';
doc_toc += '              <li><a class="nolink" href="theme_theme_php.htm#theme_php_list">List of items in theme.php</a></li>\n';
doc_toc += '              <li><a class="nolink" href="theme_examples.htm#theme_examples">Theme Examples</a></li>\n';
doc_toc += '          </ul>\n';
doc_toc += '      </li>\n';
doc_toc += '      <li><a class="nolink" href="theme_copyright.htm">Copyright-disclaimer in footer</a></li>\n';
doc_toc += '      <li><a class="nolink" href="php-content.htm">Dynamic (PHP-driven) content</a>\n';
doc_toc += '        <ul>\n';
doc_toc += '          <li><a class="nolink" href="php-content.htm#php-content_anycontent">Using anycontent.php</a></li>\n';
doc_toc += '          <li><a class="nolink" href="php-content.htm#php-content_header_footer">Custom header and footer</a></li>\n';
doc_toc += '          <li><a class="nolink" href="php-content.htm#php-content_theme">Theme-based dynamic content (theme.php)</a></li>\n';
doc_toc += '          <li><a class="nolink" href="php-content.htm#php-content_core">Modifying core files</a></li>\n';
doc_toc += '        </ul>\n';
doc_toc += '      </li>\n';
doc_toc += '      <li><a class="nolink" href="theme_graphics.htm">Graphic resources in themes</a>\n';
doc_toc += '          <ul class="level3" id="theme_graphics">\n';
doc_toc += '              <li><a class="nolink" href="theme_graphics.htm#theme_graphics_menu_icons">Menu Icons</a></li>\n';
doc_toc += '              <li><a class="nolink" href="theme_graphics.htm#theme_graphics_nav_bar">Image Navigation bar</a></li>\n';
doc_toc += '              <li><a class="nolink" href="theme_graphics.htm#theme_graphics_rating">Rating images</a></li>\n';
doc_toc += '          </ul>\n';
doc_toc += '      </li>\n';
doc_toc += '    </ul>\n';
doc_toc += '  </li>\n';
doc_toc += '  <li><a class="nolink" href="administration.htm">Administration</a>\n';
doc_toc += '    <ul>\n';
doc_toc += '      <li><a class="nolink" href="admin_menu.htm">Admin menu items</a></li>\n';
doc_toc += '      <li><a class="nolink" href="banning.htm#banning">Banning</a></li>\n';
doc_toc += '      <li><a class="nolink" href="configuration.htm">Configuration</a>\n';
doc_toc += '        <ul>\n';
doc_toc += '          <li><a class="nolink" href="configuration.htm#admin_general">General settings</a></li>\n';
doc_toc += '          <li><a class="nolink" href="configuration.htm#admin_language">Language &amp; Charset settings</a></li>\n';
doc_toc += '          <li><a class="nolink" href="configuration.htm#admin_theme">Themes settings</a></li>\n';
doc_toc += '          <li><a class="nolink" href="configuration.htm#admin_album_list">Album list view</a></li>\n';
doc_toc += '          <li><a class="nolink" href="configuration.htm#admin_thumbnail_view">Thumbnail view</a></li>\n';
doc_toc += '          <li><a class="nolink" href="configuration.htm#admin_image_comment">Image view</a></li>\n';
doc_toc += '          <li><a class="nolink" href="configuration.htm#admin_comment_start">Comment settings</a></li>\n';
doc_toc += '          <li><a class="nolink" href="configuration.htm#admin_contact_start">Contact form settings</a></li>\n';
doc_toc += '          <li><a class="nolink" href="configuration.htm#admin_thumb_start">Thumbnail settings</a></li>\n';
doc_toc += '          <li><a class="nolink" href="configuration.htm#admin_picture_thumbnail">File settings</a></li>\n';
doc_toc += '          <li><a class="nolink" href="configuration.htm#admin_watermarking">Image watermarking</a></li>\n';
doc_toc += '          <li><a class="nolink" href="configuration.htm#admin_registration">Registration</a></li>\n';
doc_toc += '          <li><a class="nolink" href="configuration.htm#admin_user">User settings</a></li>\n';
doc_toc += '          <li><a class="nolink" href="configuration.htm#admin_custom">Custom fields for user profile</a></li>\n';
doc_toc += '          <li><a class="nolink" href="configuration.htm#admin_custom_image">Custom fields for image description</a></li>\n';
doc_toc += '          <li><a class="nolink" href="configuration.htm#admin_cookie">Cookie settings</a></li>\n';
doc_toc += '          <li><a class="nolink" href="configuration.htm#admin_email">Email settings</a></li>\n';
doc_toc += '          <li><a class="nolink" href="configuration.htm#admin_logging">Logging &amp; statistics</a></li>\n';
doc_toc += '          <li><a class="nolink" href="configuration.htm#admin_misc">Maintenance settings</a></li>\n';
doc_toc += '        </ul>\n';
doc_toc += '      </li>\n';
doc_toc += '      <li><a class="nolink" href="groups.htm">Groups</a>\n';
doc_toc += '        <ul>\n';
doc_toc += '          <li><a class="nolink" href="groups.htm#group_cp">The group control panel</a></li>\n';
doc_toc += '          <li><a class="nolink" href="groups.htm#group_cp_names">Group names</a></li>\n';
doc_toc += '          <li><a class="nolink" href="groups.htm#group_cp_types">Group types</a></li>\n';
doc_toc += '          <li><a class="nolink" href="groups.htm#group_cp_quota">Quota</a></li>\n';
doc_toc += '          <li><a class="nolink" href="groups.htm#group_cp_permissions">Group permissions (Rating/Ecards/Comments)</a></li>\n';
doc_toc += '          <li><a class="nolink" href="groups.htm#group_cp_public">Public albums upload</a></li>\n';
doc_toc += '          <li><a class="nolink" href="groups.htm#group_cp_personal">Personal gallery</a></li>\n';
doc_toc += '          <li><a class="nolink" href="groups.htm#group_cp_upload_method">Upload method</a></li>\n';
doc_toc += '          <li><a class="nolink" href="groups.htm#group_cp_assigned">Assigned albums</a></li>\n';
doc_toc += '          <li><a class="nolink" href="groups.htm#group_cp_create">Creating custom groups</a></li>\n';
doc_toc += '          <li><a class="nolink" href="groups.htm#group_cp_delete">Deleting custom groups</a></li>\n';
doc_toc += '          <li><a class="nolink" href="groups.htm#group_cp_sync">Triggering synchronisation (bridged only)</a></li>\n';
doc_toc += '        </ul>\n';
doc_toc += '      </li>\n';
doc_toc += '      <li><a class="nolink" href="users.htm">Users</a>\n';
doc_toc += '        <ul>\n';
doc_toc += '          <li><a class="nolink" href="users.htm#user_cp">The user control panel</a></li>\n';
doc_toc += '          <li><a class="nolink" href="users.htm#user_cp_page">Page controls</a></li>\n';
doc_toc += '          <li><a class="nolink" href="users.htm#user_cp_search">Searching for user(s)</a></li>\n';
doc_toc += '          <li><a class="nolink" href="users.htm#user_cp_new">Creating new users</a></li>\n';
doc_toc += '          <li><a class="nolink" href="users.htm#user_cp_edit">Editing users</a></li>\n';
doc_toc += '          <li><a class="nolink" href="users.htm#user_cp_group">Group membership</a></li>\n';
doc_toc += '        </ul>\n';
doc_toc += '      </li>\n';
doc_toc += '      <li><a class="nolink" href="categories.htm">Categories</a></li>\n';
doc_toc += '      <li><a class="nolink" href="albums.htm">Albums</a>\n';
doc_toc += '        <ul>\n';
doc_toc += '          <li><a class="nolink" href="albums.htm#albmgr">The Album Manager</a>\n';
doc_toc += '            <ul>\n';
doc_toc += '              <li><a class="nolink" href="albums.htm#albmgr_create">Creating albums</a></li>\n';
doc_toc += '              <li><a class="nolink" href="albums.htm#albmgr_rename">Renaming albums</a></li>\n';
doc_toc += '              <li><a class="nolink" href="albums.htm#albmgr_order">Changing the album order</a></li>\n';
doc_toc += '              <li><a class="nolink" href="albums.htm#albmgr_delete">Deleting albums</a></li>\n';
doc_toc += '            </ul>\n';
doc_toc += '          </li>\n';
doc_toc += '          <li><a class="nolink" href="albums.htm#modif_alb_pics">Modifying albums/files</a></li>\n';
doc_toc += '          <li><a class="nolink" href="albums.htm#album_prop">Album properties</a>\n';
doc_toc += '            <ul>\n';
doc_toc += '              <li><a class="nolink" href="albums.htm#album_prop_reset_start">Reset album properties</a></li>\n';
doc_toc += '            </ul>\n';
doc_toc += '          </li>\n';
doc_toc += '          <li><a class="nolink" href="albums.htm#album_admin_user">Admin vs. user</a></li>\n';
doc_toc += '          <li><a class="nolink" href="albums.htm#album_faq">Album FAQ</a></li>\n';
doc_toc += '        </ul>\n';
doc_toc += '      </li>\n';
doc_toc += '      <li><a class="nolink" href="files.htm">Files</a>\n';
doc_toc += '        <ul>\n';
doc_toc += '          <li><a class="nolink" href="files.htm#edit_pics">Editing files</a></li>\n';
doc_toc += '          <li><a class="nolink" href="files.htm#edit_vids">Editing videos</a></li>\n';
doc_toc += '          <li><a class="nolink" href="files.htm#cust_thmb">Custom Thumbnails</a></li>\n';
doc_toc += '        </ul>\n';
doc_toc += '      </li>\n';
doc_toc += '      <li><a class="nolink" href="keywords.htm">Keywords</a>\n';
doc_toc += '        <ul>\n';
doc_toc += '          <li><a class="nolink" href="keywords.htm#keywords_assign">Assigning keywords</a></li>\n';
doc_toc += '          <li><a class="nolink" href="keywords.htm#keywords_assign_upload">Assigning keywords when uploading</a></li>\n';
doc_toc += '          <li><a class="nolink" href="keywords.htm#keywords_assign_edit">Editing/adding keywords</a></li>\n';
doc_toc += '          <li><a class="nolink" href="keywords.htm#keywords_manager">Keywords manager</a></li>\n';
doc_toc += '          <li><a class="nolink" href="keywords.htm#keywords_album">Album keywords</a></li>\n';
doc_toc += '        </ul>\n';
doc_toc += '      </li>\n';
doc_toc += '      <li><a class="nolink" href="bbcode.htm">BBCODE</a></li>\n';
doc_toc += '      <li><a class="nolink" href="exif.htm">EXIF data</a></li>\n';
doc_toc += '      <li><a class="nolink" href="plugins.htm">Plugins</a>\n';
doc_toc += '        <ul>\n';
doc_toc += '          <li><a class="nolink" href="plugins.htm#plugin_definition">What is a plugin?</a></li>\n';
doc_toc += '          <li><a class="nolink" href="plugins.htm#plugin_api">The Plugin API</a></li>\n';
doc_toc += '          <li><a class="nolink" href="plugins.htm#plugin_obtain">Where to get Plugins from?</a></li>\n';
doc_toc += '          <li><a class="nolink" href="plugins.htm#plugin_bundled">Plugins that ship with Coppermine</a></li>\n';
doc_toc += '          <li><a class="nolink" href="plugins.htm#plugin_manager">The Plugin Manager</a>\n';
doc_toc += '            <ul>\n';
doc_toc += '              <li><a class="nolink" href="plugins.htm#plugin_manager_upload">Uploading a plugin</a></li>\n';
doc_toc += '              <li><a class="nolink" href="plugins.htm#plugin_manager_install">Installing a plugin</a></li>\n';
doc_toc += '              <li><a class="nolink" href="plugins.htm#plugin_manager_configuration">Plugin Configuration</a></li>\n';
doc_toc += '              <li><a class="nolink" href="plugins.htm#plugin_manager_uninstall">Uninstalling a plugin</a></li>\n';
doc_toc += '            </ul>\n';
doc_toc += '          </li>\n';
doc_toc += '          <li><a class="nolink" href="plugins.htm#plugin_writing">Writing plugins</a></li>\n';
doc_toc += '        </ul>\n';
doc_toc += '      </li>\n';
doc_toc += '      <li><a class="nolink" href="performance.htm#perf_tips">Performance</a></li>\n';
doc_toc += '      <li><a class="nolink" href="admin-tools.htm#admin_tools">Admin Tools</a></li>\n';
doc_toc += '      <li><a class="nolink" href="errors.htm#errors">Errors</a></li>\n';
doc_toc += '      <li><a class="nolink" href="export.htm#export">Exporting</a></li>\n';
doc_toc += '      <li><a class="nolink" href="watermarking.htm#watermark">Watermarking</a></li>\n';
doc_toc += '    </ul>\n';
doc_toc += '  </li>\n';
doc_toc += '  <li><a class="nolink" href="uploading.htm">Uploading</a>\n';
doc_toc += '    <ul>\n';
doc_toc += '      <li><a class="nolink" href="uploading_batch-add.htm#batch_add_pics">Uploading pics by FTP / Batch-Add Pictures</a></li>\n';
doc_toc += '      <li><a class="nolink" href="uploading_http.htm#upload_http">Uploading by HTTP</a></li>\n';
doc_toc += '      <li><a class="nolink" href="uploading_xp-publisher.htm#xp">Windows XP Web Publishing Wizard</a>\n';
doc_toc += '        <ul>\n';
doc_toc += '          <li><a class="nolink" href="uploading_xp-publisher.htm#xp_publish_setup">XP Web Publishing Wizard: Setup</a></li>\n';
doc_toc += '          <li><a class="nolink" href="uploading_xp-publisher.htm#xp_publish_upload">XP Web Publishing Wizard: Uploading pictures</a></li>\n';
doc_toc += '        </ul>\n';
doc_toc += '      </li>\n';
doc_toc += '      <li><a class="nolink" href="upload_troubleshooting.htm#upload_trouble">Upload troubleshooting</a>\n';
doc_toc += '         <ul>\n';
doc_toc += '           <li><a class="nolink" href="upload_troubleshooting.htm#upload_trouble_permission">Permissions</a></li>\n';
doc_toc += '           <li><a class="nolink" href="upload_troubleshooting.htm#upload_trouble_enable_settings">Enable troubleshooting settings</a></li>\n';
doc_toc += '           <li><a class="nolink" href="upload_troubleshooting.htm#upload_support">Asking for support on upload issues</a></li>\n';
doc_toc += '           <li><a class="nolink" href="upload_troubleshooting.htm#upload_error_messages">Error messages</a></li>\n';
doc_toc += '           <li><a class="nolink" href="upload_troubleshooting.htm#upload_trouble_server-sided_restrictions">Server-sided restrictions</a>\n';
doc_toc += '             <ul>\n';
doc_toc += '               <li><a class="nolink" href="upload_troubleshooting.htm#upload_trouble_server-sided_restrictions_check">Things to check</a></li>\n';
doc_toc += '             </ul>\n';
doc_toc += '           </li>\n';
doc_toc += '         </ul>\n';
doc_toc += '      </li>\n';
doc_toc += '    </ul>\n';
doc_toc += '  </li>\n';
doc_toc += '  <li><a class="nolink" href="comments.htm">Comments</a>\n';
doc_toc += '    <ul>\n';
doc_toc += '      <li><a class="nolink" href="comments.htm#comments_allow">Allowing comments</a></li>\n';
doc_toc += '      <li><a class="nolink" href="comments.htm#comments_options">Comments options</a></li>\n';
doc_toc += '      <li><a class="nolink" href="comments.htm#comments_options_spam">Spam issues</a></li>\n';
doc_toc += '      <li><a class="nolink" href="comments.htm#comments_review">Reviewing Comments</a></li>\n';
doc_toc += '      <li><a class="nolink" href="comments.htm#comments_individual">Individual Comments</a></li>\n';
doc_toc += '    </ul>\n';
doc_toc += '  </li>\n';
doc_toc += '  <li><a class="nolink" href="bridging.htm">Bridging</a>\n';
doc_toc += '    <ul>\n';
doc_toc += '      <li><a class="nolink" href="bridging.htm#integrating_bridge_purpose">What bridging does</a></li>\n';
doc_toc += '      <li><a class="nolink" href="bridging.htm#integrating_bridge_start">Available bridge files</a></li>\n';
doc_toc += '      <li><a class="nolink" href="bridging.htm#integrating_prerequisites_start">Pre-requistes</a>\n';
doc_toc += '        <ul>\n';
doc_toc += '          <li><a class="nolink" href="bridging.htm#integrating_cookie_start">Authentication by cookie</a></li>\n';
doc_toc += '          <li><a class="nolink" href="bridging.htm#integrating_standalone_start">Standalone version first</a></li>\n';
doc_toc += '          <li><a class="nolink" href="bridging.htm#integrating_users_start">Coppermine users, groups and pics uploaded by users are lost when integrating</a></li>\n';
doc_toc += '          <li><a class="nolink" href="bridging.htm#integrating_backup_start">Backup</a></li>\n';
doc_toc += '        </ul>\n';
doc_toc += '      </li>\n';
doc_toc += '      <li><a class="nolink" href="bridging.htm#integrating_steps_start">Integration steps</a>\n';
doc_toc += '        <ul>\n';
doc_toc += '          <li><a class="nolink" href="bridging.htm#bridge_manager_start">Using the bridge manager</a></li>\n';
doc_toc += '          <li><a class="nolink" href="bridging.htm#bridge_manager_app_start">Choose application to bridge coppermine with</a></li>\n';
doc_toc += '          <li><a class="nolink" href="bridging.htm#bridge_manager_path_start">Path(s) used by your bridge app</a></li>\n';
doc_toc += '          <li><a class="nolink" href="bridging.htm#bridge_manager_specific_start">Bridge-app-specific settings</a></li>\n';
doc_toc += '          <li><a class="nolink" href="bridging.htm#bridge_manager_enable_start">Enable/disable bridging</a></li>\n';
doc_toc += '        </ul>\n';
doc_toc += '      </li>\n';
doc_toc += '      <li><a class="nolink" href="bridging.htm#bridge_manager_recover_start">Recover from failed bridging</a></li>\n';
doc_toc += '      <li><a class="nolink" href="bridging.htm#integrating_steps_sync_start">Synchronising the bridge app groups with Coppermine\'s groups</a></li>\n';
doc_toc += '      <li><a class="nolink" href="bridging.htm#integrating_support_start">Bridging support</a></li>\n';
doc_toc += '      <li><a class="nolink" href="bridging.htm#integrating_config_options_start">Some config options get disabled</a></li>\n';
doc_toc += '      <li><a class="nolink" href="bridging.htm#integrating_files_start">Bridging files</a></li>\n';
doc_toc += '      <li><a class="nolink" href="bridging.htm#integrating_bridge_file_creating_start">Creating a custom bridge file</a></li>\n';
doc_toc += '      <li><a class="nolink" href="bridging.htm#integrating_philosophy_start">Bridging philosophy</a></li>\n';
doc_toc += '      <li><a class="nolink" href="bridging.htm#integrating_individual_bridge_issues_start">Individual bridge issues</a></li>\n';
doc_toc += '      <li><a class="nolink" href="bridging.htm#integrating_subdomain">Subdomain issues</a></li>\n';
doc_toc += '    </ul>\n';
doc_toc += '  </li>\n';
doc_toc += '  <li><a class="nolink" href="dev.htm">Developer documentation</a>\n';
doc_toc += '    <ul>\n';
doc_toc += '      <li><a class="nolink" href="dev_coding.htm">Coding guidelines</a></li>\n';
doc_toc += '      <li><a class="nolink" href="dev_files.htm">Adding/renaming/removing files</a></li>\n';
doc_toc += '      <li><a class="nolink" href="dev_superglobals.htm">Sanitization of Superglobals using Inspekt</a></li>\n';
doc_toc += '      <li><a class="nolink" href="dev_javascript.htm">Javascript in Coppermine</a></li>\n';
doc_toc += '      <li><a class="nolink" href="dev_plugins.htm">Writing Plugins for Coppermine</a>\n';
doc_toc += '        <ul>\n';
doc_toc += '          <li><a class="nolink" href="dev_plugin_writing.htm">Quick start guide for writing plugins</a></li>\n';
doc_toc += '          <li><a class="nolink" href="dev_plugin_api.htm">Plugins tutorial, API description, Coppermine globals</a>\n';
doc_toc += '            <ul>\n';
doc_toc += '              <li><a class="nolink" href="dev_plugin_api.htm#plugin_api_overview">An Overview of the Coppermine Plugin API</a>\n';
doc_toc += '                <ul class="level5">\n';
doc_toc += '                    <li><a class="nolink" href="dev_plugin_api.htm#plugin_api_overview_intro">Introduction</a></li>\n';
doc_toc += '                    <li><a class="nolink" href="dev_plugin_api.htm#plugin_api_overview_who">Intended Audience</a></li>\n';
doc_toc += '                    <li><a class="nolink" href="dev_plugin_api.htm#plugin_api_overview_skills">Required Skills &amp; Knowledge</a></li>\n';
doc_toc += '                    <li><a class="nolink" href="dev_plugin_api.htm#plugin_api_overview_tools">Recommended Software &amp; Support Forums</a></li>\n';
doc_toc += '                    <li><a class="nolink" href="dev_plugin_api.htm#plugin_api_overview_doc">Structure of this Document</a></li>\n';
doc_toc += '                </ul>\n';
doc_toc += '              </li>\n';
doc_toc += '              <li><a class="nolink" href="dev_plugin_api.htm#plugin_api_tutorial">"Hello, world" Plugin Tutorial</a>\n';
doc_toc += '                <ul class="level5">\n';
doc_toc += '                  <li><a class="nolink" href="dev_plugin_api.htm#plugin_api_tutorial_first">My First Plugin</a></li>\n';
doc_toc += '                  <li><a class="nolink" href="dev_plugin_api.htm#plugin_api_tutorial_installconfig">Installation, Configuration, and Clean-Up</a>\n';
doc_toc += '                    <ul class="level5">\n';
doc_toc += '                      <li><a class="nolink" href="dev_plugin_api.htm#plugin_api_tutorial_installsimple">Installation with Simple Configuration</a></li>\n';
doc_toc += '                      <li><a class="nolink" href="dev_plugin_api.htm#plugin_api_tutorial_install">Installation with Configuration Parameters</a></li>\n';
doc_toc += '                      <li><a class="nolink" href="dev_plugin_api.htm#plugin_api_tutorial_config">Configuration during Operation</a></li>\n';
doc_toc += '                      <li><a class="nolink" href="dev_plugin_api.htm#plugin_api_tutorial_cleanup">Uninstallation &amp; Clean-Up</a></li>\n';
doc_toc += '                    </ul>\n';
doc_toc += '                  </li>  \n';
doc_toc += '                  <li><a class="nolink" href="dev_plugin_api.htm#plugin_api_tutorial_linking">Linking to Custom Plugin Scripts</a></li>\n';
doc_toc += '                  <li><a class="nolink" href="dev_plugin_api.htm#plugin_api_tutorial_button">Adding a Button to Coppermine</a></li>\n';
doc_toc += '                  <li><a class="nolink" href="dev_plugin_api.htm#plugin_api_tutorial_lang">Multi-language Support</a></li>\n';
doc_toc += '                  <li><a class="nolink" href="dev_plugin_api.htm#plugin_api_tutorial_distrib">Distributing Your Plugin</a></li>\n';
doc_toc += '                  <li><a class="nolink" href="dev_plugin_api.htm#plugin_api_tutorial_wherenext">Where to Go from Here</a></li>\n';
doc_toc += '                </ul>\n';
doc_toc += '              </li>\n';
doc_toc += '              <li><a class="nolink" href="dev_plugin_api.htm#plugin_api_hooks">Plugin Hooks</a></li>\n';
doc_toc += '              <li><a class="nolink" href="dev_plugin_api.htm#plugin_api_plugin_class">Plugin Class Properties &amp; Methods</a></li>\n';
doc_toc += '              <li><a class="nolink" href="dev_plugin_api.htm#plugin_api_globals">Global Variables &amp; Constants</a>\n';
doc_toc += '                <ul class="level5">\n';
doc_toc += '                  <li><a class="nolink" href="dev_plugin_api.htm#plugin_api_globals_system">System Global Variables</a></li>\n';
doc_toc += '                  <li><a class="nolink" href="dev_plugin_api.htm#plugin_api_globals_cpg">Coppermine Constants</a></li>\n';
doc_toc += '                </ul>\n';
doc_toc += '              </li>\n';
doc_toc += '            </ul>\n';
doc_toc += '          </li>\n';
doc_toc += '          <li><a class="nolink" href="dev_plugin_hooks.htm">Reference list of plugin hooks </a>\n';
doc_toc += '            <ul class="level5">\n';
doc_toc += '              <li><a class="nolink" href="dev_plugin_hooks.htm#plugin_hooks_choosing">Choosing Plugin Hooks</a></li>\n';
doc_toc += '              <li><a class="nolink" href="dev_plugin_hooks.htm#plugin_hooks_finding">Finding Plugin Hooks</a></li>\n';
doc_toc += '              <li><a class="nolink" href="dev_plugin_hooks.htm#plugin_hooks_using">Using Plugin Hooks</a></li>\n';
doc_toc += '              <li><a class="nolink" href="dev_plugin_hooks.htm#plugin_hooks_filename">Plugin Hooks by Script Filename</a>\n';
doc_toc += '                <ul class="level6">\n';
doc_toc += '                  <li><a class="nolink" href="dev_plugin_hooks.htm#plugin_api_hooks_ind_php">Script: index.php</a>\n';
doc_toc += '                    <ul class="level7">\n';
doc_toc += '                      <li><a class="nolink" href="dev_plugin_hooks.htm#plugin_api_hooks_ind_anyc">Filter: \'anycontent\'</a></li>\n';
doc_toc += '                      <li><a class="nolink" href="dev_plugin_hooks.htm#plugin_api_hooks_ind_ucp">Filter: \'user_caption_params\'</a></li>\n';
doc_toc += '                      <li><a class="nolink" href="dev_plugin_hooks.htm#plugin_api_hooks_ind_pb">Filter: \'plugin_block\'</a></li>\n';
doc_toc += '                    </ul>\n';
doc_toc += '                  </li>\n';
doc_toc += '                  <li><a class="nolink" href="dev_plugin_hooks.htm#plugin_api_hooks_di_php">Script: displayimage.php</a>\n';
doc_toc += '                    <ul class="level7">\n';
doc_toc += '                      <li><a class="nolink" href="dev_plugin_hooks.htm#plugin_api_hooks_di_fi">Filter: \'file_info\'</a></li>\n';
doc_toc += '                      <li><a class="nolink" href="dev_plugin_hooks.htm#plugin_api_hooks_di_pbc">Filter: \'post_breadcrumb\'</a></li>\n';
doc_toc += '                    </ul>\n';
doc_toc += '                  </li>\n';
doc_toc += '                  <li><a class="nolink" href="dev_plugin_hooks.htm#plugin_api_hooks_thumb_php">Script: thumbnails.php</a>\n';
doc_toc += '                    <ul class="level7">\n';
doc_toc += '                      <li><a class="nolink" href="dev_plugin_hooks.htm#plugin_api_hooks_thumb_pbc">Filter: \'post_breadcrumb\'</a></li>\n';
doc_toc += '                    </ul>\n';
doc_toc += '                  </li>\n';
doc_toc += '                  <li><a class="nolink" href="dev_plugin_hooks.htm#plugin_api_hooks_func_php">Script: functions.inc.php</a>\n';
doc_toc += '                    <ul class="level7">\n';
doc_toc += '                      <li><a class="nolink" href="dev_plugin_hooks.htm#plugin_api_hooks_func_ghgf">Filters: \'gallery_header\' and \'gallery_footer\'</a></li>\n';
doc_toc += '                      <li><a class="nolink" href="dev_plugin_hooks.htm#plugin_api_hooks_func_td">Filter: \'thumb_data\'</a></li>\n';
doc_toc += '                      <li><a class="nolink" href="dev_plugin_hooks.htm#plugin_api_hooks_func_th">Filter: \'template_html\'</a></li>\n';
doc_toc += '                      <li><a class="nolink" href="dev_plugin_hooks.htm#plugin_api_hooks_func_pm">Filter: \'page_meta\'</a></li>\n';
doc_toc += '                      <li><a class="nolink" href="dev_plugin_hooks.htm#plugin_api_hooks_func_tc">Filters: \'thumb_caption\' and all derivatives</a></li>\n';
doc_toc += '                    </ul>\n';
doc_toc += '                  </li>\n';
doc_toc += '                  <li><a class="nolink" href="dev_plugin_hooks.htm#plugin_api_hooks_th_php">Script: themes.inc.php</a>\n';
doc_toc += '                    <ul class="level7">\n';
doc_toc += '                      <li><a class="nolink" href="dev_plugin_hooks.htm#plugin_api_hooks_th_fd">Filter: \'file_data\'</a></li>\n';
doc_toc += '                    </ul>\n';
doc_toc += '                  </li>\n';
doc_toc += '                  <li><a class="nolink" href="dev_plugin_hooks.htm#plugin_api_hooks_um_php">Script: usermgr.php</a>\n';
doc_toc += '                    <ul class="level7">\n';
doc_toc += '                      <li><a class="nolink" href="dev_plugin_hooks.htm#plugin_api_hooks_um_umh">Filter: \'usermgr_header\'</a></li>\n';
doc_toc += '                      <li><a class="nolink" href="dev_plugin_hooks.htm#plugin_api_hooks_um_umf">Filter: \'usermgr_footer\'</a></li>\n';
doc_toc += '                    </ul>\n';
doc_toc += '                  </li>\n';
doc_toc += '                  <li><a class="nolink" href="dev_plugin_hooks.htm#plugin_api_hooks_pm_php">Script: pluginmgr.php</a>\n';
doc_toc += '                    <ul class="level7">\n';
doc_toc += '                      <li><a class="nolink" href="dev_plugin_hooks.htm#plugin_api_hooks_pm_pcon">Filter: \'plugin_configure\'</a></li>\n';
doc_toc += '                      <li><a class="nolink" href="dev_plugin_hooks.htm#plugin_api_hooks_pm_pcl">Filter: \'plugin_cleanup\'</a></li>\n';
doc_toc += '                    </ul>\n';
doc_toc += '                  </li>\n';
doc_toc += '                  <li><a class="nolink" href="dev_plugin_hooks.htm#plugin_api_hooks_papi_php">Script: plugin_api.inc.php</a>\n';
doc_toc += '                    <ul class="level7">\n';
doc_toc += '                      <li><a class="nolink" href="dev_plugin_hooks.htm#plugin_api_hooks_papi_ph">Filter: \'page_html\'</a></li>\n';
doc_toc += '                      <li><a class="nolink" href="dev_plugin_hooks.htm#plugin_api_hooks_papi_pe">Filter: \'page_end\'</a></li>\n';
doc_toc += '                      <li><a class="nolink" href="dev_plugin_hooks.htm#plugin_api_hooks_papi_pi">Filter: \'plugin_install\'</a></li>\n';
doc_toc += '                      <li><a class="nolink" href="dev_plugin_hooks.htm#plugin_api_hooks_papi_pu">Filter: \'plugin_uninstall\'</a></li>\n';
doc_toc += '                      <li><a class="nolink" href="dev_plugin_hooks.htm#plugin_api_hooks_papi_pw">Filter: \'plugin_wakeup\'</a></li>\n';
doc_toc += '                      <li><a class="nolink" href="dev_plugin_hooks.htm#plugin_api_hooks_papi_ps">Filter: \'plugin_sleep\'</a></li>\n';
doc_toc += '                    </ul>\n';
doc_toc += '                  </li>\n';
doc_toc += '                  <li><a class="nolink" href="dev_plugin_hooks.htm#plugin_api_hooks_init_php">Script: init.inc.php</a>\n';
doc_toc += '                    <ul class="level9">\n';
doc_toc += '                      <li><a class="nolink" href="dev_plugin_hooks.htm#plugin_api_hooks_init_ps">Filter: \'page_start\'</a></li>\n';
doc_toc += '                    </ul>\n';
doc_toc += '                  </li>\n';
doc_toc += '                  <li><a class="nolink" href="dev_plugin_hooks.htm#plugin_api_hooks_picm_php">Script: picmgmt.inc.php</a>\n';
doc_toc += '                    <ul class="level9">\n';
doc_toc += '                      <li><a class="nolink" href="dev_plugin_hooks.htm#plugin_api_hooks_picm_afd">Filter: \'add_file_data\'</a></li>\n';
doc_toc += '                    </ul>\n';
doc_toc += '                  </li>\n';
doc_toc += '                </ul>\n';
doc_toc += '              </li>\n';
doc_toc += '              <li><a class="nolink" href="dev_plugin_hooks.htm#plugin_hooks_alphabetically">Plugin Hooks Alphabetically</a></li>\n';
doc_toc += '              <li><a class="nolink" href="dev_plugin_hooks.htm#plugin_hooks_hooktype">Plugin Hooks by Hook Type</a></li>\n';
doc_toc += '              <li><a class="nolink" href="dev_plugin_hooks.htm#plugin_hook_examples">Plugin Hook Examples</a>\n';
doc_toc += '                <ul class="level6">\n';
doc_toc += '                    <li><a class="nolink" href="dev_plugin_hooks.htm#plugin_hook_example_upload_method">Adding an upload method</a></li>\n';
doc_toc += '                    <li><a class="nolink" href="dev_plugin_hooks.htm#plugin_hook_example_theme_display_thumbnails">Add tags for thumbnails display</a></li>\n';
doc_toc += '                </ul></li>\n';
doc_toc += '            </ul>\n';
doc_toc += '          </li>\n';
doc_toc += '        </ul>\n';
doc_toc += '      </li>\n';
doc_toc += '      <li><a class="nolink" href="dev_documentation.htm">Editing the documentation</a></li>\n';
doc_toc += '      <li><a class="nolink" href="dev_subversion.htm">Subversion</a></li>\n';
doc_toc += '      <li><a class="nolink" href="dev_config.htm">Adding config options</a></li>\n';
doc_toc += '      <li><a class="nolink" href="dev_versioncheck.htm">Versioncheck</a></li>\n';
doc_toc += '      <li><a class="nolink" href="dev_update.htm">Updating</a></li>\n';
doc_toc += '      <li><a class="nolink" href="dev_tools.htm">Tools recommended by the devs</a>\n';
doc_toc += '          <ul class="level4">\n';
doc_toc += '              <li><a class="nolink" href="dev_tools.htm#dev_tools_database">Database manipulation</a></li>\n';
doc_toc += '              <li><a class="nolink" href="dev_tools.htm#dev_tools_ftp_client">FTP clients</a></li>\n';
doc_toc += '              <li><a class="nolink" href="dev_tools.htm#dev_tools_web_development">Web development</a></li>\n';
doc_toc += '              <li><a class="nolink" href="dev_tools.htm#dev_tools_editor">Text editors</a></li>\n';
doc_toc += '              <li><a class="nolink" href="dev_tools.htm#dev_tools_picture_editors">Picture Editors</a></li>\n';
doc_toc += '          </ul>\n';
doc_toc += '      </li>\n';
doc_toc += '      <li><a class="nolink" href="dev_database.htm">Database schema</a>\n';
doc_toc += '          <ul class="level4">\n';
doc_toc += '              <li><a class="nolink" href="dev_database.htm#db_config_file">Configuration file</a></li>\n';
doc_toc += '              <li><a class="nolink" href="dev_database.htm#db_reference within_code">Database reference within coppermine code</a></li>\n';
doc_toc += '              <li><a class="nolink" href="dev_database.htm#db_albums">cpg15x_albums</a></li>\n';
doc_toc += '              <li><a class="nolink" href="dev_database.htm#db_banned">cpg15x_banned</a></li>\n';
doc_toc += '              <li><a class="nolink" href="dev_database.htm#db_bridge">cpg15x_bridge</a></li>\n';
doc_toc += '              <li><a class="nolink" href="dev_database.htm#db_categories">cpg15x_categories</a></li>\n';
doc_toc += '              <li><a class="nolink" href="dev_database.htm#db_categorymap">cpg15x_categorymap</a></li>\n';
doc_toc += '              <li><a class="nolink" href="dev_database.htm#db_comments">cpg15x_comments</a></li>\n';
doc_toc += '              <li><a class="nolink" href="dev_database.htm#db_config">cpg15x_config</a></li>\n';
doc_toc += '              <li><a class="nolink" href="dev_database.htm#db_dict">cpg15x_dict</a></li>\n';
doc_toc += '              <li><a class="nolink" href="dev_database.htm#db_ecards">cpg15x_ecards</a></li>\n';
doc_toc += '              <li><a class="nolink" href="dev_database.htm#db_exif">cpg15x_exif</a></li>\n';
doc_toc += '              <li><a class="nolink" href="dev_database.htm#db_favpics">cpg15x_favpics</a></li>\n';
doc_toc += '              <li><a class="nolink" href="dev_database.htm#db_filetypes">cpg15x_filetypes</a></li>\n';
doc_toc += '              <li><a class="nolink" href="dev_database.htm#db_hit_stats">cpg15x_hit_stats</a></li>\n';
doc_toc += '              <li><a class="nolink" href="dev_database.htm#db_languages">cpg15x_languages</a></li>\n';
doc_toc += '              <li><a class="nolink" href="dev_database.htm#db_pictures">cpg15x_pictures</a></li>\n';
doc_toc += '              <li><a class="nolink" href="dev_database.htm#db_plugins">cpg15x_plugins</a></li>\n';
doc_toc += '              <li><a class="nolink" href="dev_database.htm#db_sessions">cpg15x_sessions</a></li>\n';
doc_toc += '              <li><a class="nolink" href="dev_database.htm#db_temp_messages">cpg15x_temp_messages</a></li>\n';
doc_toc += '              <li><a class="nolink" href="dev_database.htm#db_usergroups">cpg15x_usergroups</a></li>\n';
doc_toc += '              <li><a class="nolink" href="dev_database.htm#db_users">cpg15x_users</a></li>\n';
doc_toc += '              <li><a class="nolink" href="dev_database.htm#db_votes">cpg15x_votes</a></li>\n';
doc_toc += '              <li><a class="nolink" href="dev_database.htm#db_vote_stats">cpg15x_vote_stats</a></li>\n';
doc_toc += '          </ul>\n';
doc_toc += '      </li>\n';
doc_toc += '    </ul>\n';
doc_toc += '  </li>\n';
doc_toc += '</ul>\n';
$('#toc').replaceWith('<div id="toc">' + doc_toc + '</div>');
}



function cpgDocHeader() {
	// Only display the header if the docs are not included
	if (getUrlParameters('hide_nav') == 1) {
		return;
	}
	$('#docheader').text('Coppermine Photo Gallery v1.5.1: Manuel et Documentation');
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
	doc_search += '      <input type="submit" name="sa" value="Chercher dans la Doc" style="font-size:9px;" />\n';
	doc_search += '    </div>\n';
	doc_search += '  </form>\n';
	doc_search += '  <script type="text/javascript" src="http://www.google.com/coop/cse/brand?form=cse-search-box&lang=fr"></script>\n';
	$('#toc').append(doc_search);
}

function cpgDocFooter() {
  var overall_doc_footer = '';
  overall_doc_footer += '</div>';
  overall_doc_footer += '<div align="right">';
  overall_doc_footer += '<a href="#top">Haut de Page</a>';
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
  $('#doc_last_changed').text('About this document: ' + 'last changed on ' + lastChangeDate);

  var revisionNumber = $('#doc_revision').text();
  var revisionNumber = revisionNumber.replace('$', '');
  var revisionNumber = revisionNumber.replace('$', '');
  var revisionNumber = revisionNumber.replace(/Revision: /g, '');
  $('#doc_revision').text(', SVN revision ' + revisionNumber);
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
  $('#doc_en_only').replaceWith('<div class="cpg_message_validation"><h1>Not translated yet</h1><p>This page hasn\'t been translated yet and therefor appears in English only.</p><p>Translators wanted: we\'d love to see you participate by contributing a translation. Why don\'t you visit the Coppermine homepage and review the documentation translation progress pages?</div>');
  $('#doc_en_partial').replaceWith('<div class="cpg_message_warning"><h1>Partial translation</h1><p>This page hasn\'t been translated yet and therefor appears in English as well as French. Why don\'t you visit the Coppermine homepage and review the documentation translation progress pages?</div>');
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
	dateRevision();
    $("a.nolink").click(function(){
      return false;
    });
});