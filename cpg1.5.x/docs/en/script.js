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
document.write('  <li><a href="index.htm">Coppermine documentation</a>');
document.write('    <ul>');
document.write('      <li><a href="index.htm#about">About Coppermine</a></li>');
document.write('      <li><a href="index.htm#about_documentation">About the documentation</a></li>');
document.write('      <li><a href="index.htm#features">Features</a></li>');
document.write('      <li><a href="quickstart.htm#about">Quick-Start guide</a></li>');
document.write('      <li><a href="toc.htm">Table of contents</a></li>');
document.write('      <li><a href="requirements.htm">Minimum requirements</a></li>');
document.write('      <li><a href="testing.htm">Testing (alpha/beta versions!)</a></li>');
document.write('      <li><a href="languages.htm">Languages</a>');
document.write('        <ul id="languages">');
document.write('          <li><a href="translation.htm">Translation guide</a></li>');
document.write('        </ul>');
document.write('      </li>');
document.write('      <li><a href="credits.htm">Credits</a>');
document.write('        <ul>');
document.write('          <li><a href="credits.htm#developers">Coppermine team</a></li>');
document.write('          <li><a href="credits.htm#contributors">Contributors</a></li>');
document.write('          <li><a href="credits.htm#translators">Translators</a></li>');
document.write('          <li><a href="credits.htm#codebase">Free code used</a></li>');
document.write('        </ul>');
document.write('      </li>');
document.write('      <li><a href="copyrights.htm">License &amp; Copyright</a>');
document.write('      </li>');
document.write('      <li><a href="known_issues.htm">Known issues</a></li>');
document.write('    </ul>');
document.write('  </li>');
document.write('  <li><a href="install.htm">Installation and setup</a>');
document.write('    <ul>');
document.write('      <li><a href="install.htm#how">How to install the script</a></li>');
document.write('      <li><a href="install.htm#what">What the installer does</a></li>');
document.write('      <li><a href="install_permissions.htm">Setting permissions</a>');
document.write('        <ul>');
document.write('          <li><a href="install_permissions.htm#chmod">Apache on Unix/Linux (CHMOD)</a></li>');
document.write('          <li><a href="install_permissions.htm#apache_windows">Apache on Windows</a></li>');
document.write('          <li><a href="install_permissions.htm#iis">IIS on Windows</a></li>');
document.write('          <li><a href="install_permissions.htm#support">Asking for support on permissions issues</a></li>');
document.write('        </ul>');
document.write('      </li>');
document.write('      <li><a href="install_screen.htm">The install screen</a></li>');
document.write('      <li><a href="auto-installers.htm">Auto-Installers</a></li>');
document.write('      <li><a href="install_faq.htm">Installation FAQ</a></li>');
document.write('      <li><a href="uninstall.htm">Uninstall</a></li>');
document.write('    </ul>');
document.write('  </li>');
document.write('  <li><a href="upgrading.htm">Upgrading</a>');
document.write('    <ul>');
document.write('      <li><a href="upgrading.htm#upgrade_why">Why upgrade?</a>');
document.write('      	<ul>');
document.write('      		<li><a href="upgrading.htm#upgrade_why_reasons">Reasons for package releases</a></li>');
document.write('      		<li><a href="upgrading.htm#upgrade_why_changelog">Changelog</a></li>');
document.write('      	</ul>');
document.write('      </li>');
document.write('      <li><a href="upgrading.htm#upgrade_any">Steps needed to perform when upgrading Coppermine (from any version)</a></li>');
document.write('      <li><a href="upgrading.htm#upgrade_particular">Additional actions for updating from particular versions</a>');
document.write('        <ul>');
document.write('          <li><a href="upgrading.htm#upgrade_10">Upgrading from versions cpg1.0,1.1,1.2.x or 1.3.x</a></li>');
document.write('          <li><a href="upgrading.htm#upgrade_14">Upgrading from cpg1.4.x to version cpg1.5.x</a></li>');
document.write('        </ul>');
document.write('      </li>');
document.write('      <li><a href="upgrading.htm#versioncheck">The version check tool</a>');
document.write('        <ul>');
document.write('          <li><a href="upgrading.htm#versioncheck_description_start">What it does</a></li>');
document.write('          <li><a href="upgrading.htm#versioncheck_options_start">Options</a></li>');
document.write('          <li><a href="upgrading.htm#versioncheck_comparison_start">Version comparison</a></li>');
document.write('        </ul>');
document.write('      </li>');
document.write('      <li><a href="upgrading.htm#upgrade_faq">Upgrading FAQ</a></li>');
document.write('      <li><a href="upgrading.htm#downgrading">Downgrading from cpg1.5.x to an older version</a></li>');
document.write('    </ul>');
document.write('  </li>');
document.write('  <li><a href="start.htm">Getting Started</a>');
document.write('    <ul>');
document.write('      <li><a href="start.htm#getting_concepts">Basic concepts</a></li>');
document.write('      <li><a href="start.htm#getting_initial_configuration">Initial configuration</a></li>');
document.write('      <li><a href="start.htm#getting_structure">Category/album/file structure</a></li>');
document.write('      <li><a href="start.htm#getting_resizing">Resized images</a></li>');
document.write('      <li><a href="start.htm#getting_admin_account">Your admin account</a></li>');
document.write('      <li><a href="start.htm#getting_check_uploads">Check uploads</a></li>');
document.write('      <li><a href="start.htm#getting_consider_bridging">Consider bridging</a></li>');
document.write('      <li><a href="start.htm#getting_interaction">What are your visitors allowed to do?</a></li>');
document.write('      <li><a href="start.htm#getting_design">Change your coppermine\'s design</a></li>');
document.write('      <li><a href="start.htm#getting_typical">Typical setups</a></li>');
document.write('    </ul>');
document.write('  </li>');
document.write('  <li><a href="faq.htm">Frequently Asked Questions</a></li>');
document.write('  <li><a href="theme.htm">Themes</a>');
document.write('    <ul>');
document.write('      <li><a href="theme.htm#theme_builtin">Themes that come with Coppermine</a></li>');
document.write('      <li><a href="theme.htm#theme_upgrading">Upgrading your custom theme</a>');
document.write('      <ul>');
document.write('        <li><a href="theme_upgrade_14x-15x.htm">Converting cpg1.4.x themes to cpg1.5.x</a>');
document.write('          <ul>');
document.write('            <li><a href="theme_upgrade_14x-15x.htm#style">Edit style.css</a></li>');
document.write('            <li><a href="theme_upgrade_14x-15x.htm#template">Edit template.html</a></li>');
document.write('            <li><a href="theme_upgrade_14x-15x.htm#theme">Edit theme.php</a></li>');
document.write('            <li><a href="theme_upgrade_14x-15x.htm#validation">Validation Methodology</a></li>');
document.write('          </ul>');
document.write('        </li>');
document.write('        <li><a href="theme_upgrade_13x-14x.htm">Converting cpg1.3.x themes to cpg1.4.x</a>');
document.write('          <ul>');
document.write('            <li><a href="theme_upgrade_13x-14x.htm#style">Edit style.css</a></li>');
document.write('            <li><a href="theme_upgrade_13x-14x.htm#template">Edit template.html</a></li>');
document.write('            <li><a href="theme_upgrade_13x-14x.htm#theme">Edit theme.php</a></li>');
document.write('            <li><a href="theme_upgrade_13x-14x.htm#validation">Validation Methodology</a></li>');
document.write('          </ul>');
document.write('        </li>');
document.write('      </ul>');
document.write('      </li>');
document.write('      <li><a href="theme.htm#theme_files">Content of a theme</a></li>');
document.write('      <li><a href="theme.htm#theme_engine">How the theme engine works</a></li>');
document.write('      <li><a href="theme_user-contributions.htm#theme_user-contributions">User-contributed themes</a></li>');
document.write('      <li><a href="theme_create.htm#theme_create">Creating your custom theme</a>');
document.write('        <ul>');
document.write('          <li><a href="theme_create.htm#theme_create_rename">Rename your theme first</a></li>');
document.write('          <li><a href="theme_create.htm#theme_create_tipps">Tipps &amp; tricks</a></li>');
document.write('          <li><a href="theme_create.htm#theme_create_wysiwyg">Using WYSIWYG-editors</a></li>');
document.write('          <li><a href="theme_create.htm#theme_create_colors">Modifying colors</a></li>');
document.write('          <li><a href="theme_create_matching_page_tutorial.htm#theme_matching">Creating a Coppermine theme that matches your overall site layout</a></li>');
document.write('        </ul>');
document.write('      </li>');
document.write('      <li><a href="theme_template.htm#theme_template_html">Editing template.html</a>');
document.write('      	<ul class="level3" id="theme_template_html">');
document.write('      		<li><a href="theme_template.htm#theme_template_token">Template tokens</a></li>');
document.write('      		<li><a href="theme_template.htm#theme_template_important">Important</a></li>');
document.write('      		<li><a href="theme_template.htm#theme_template_token_list">List of tokens in template.html</a></li>');
document.write('      	</ul>');
document.write('      </li>');
document.write('      <li><a href="theme_style_css.htm#theme_style_css">Editing style.css</a></li>');
document.write('      <li><a href="theme_theme_php.htm#theme_create_theme_php">Editing theme.php</a>');
document.write('      	<ul class="level3" id="theme_theme_php">');
document.write('      		<li><a href="theme_theme_php.htm#theme_php_types">Item types</a></li>');
document.write('      		<li><a href="theme_theme_php.htm">The sample theme - a template to copy from</a></li>');
document.write('      		<li><a href="theme_theme_php.htm#theme_php_method">Method</a></li>');
document.write('      		<li><a href="theme_theme_php.htm#theme_php_scope">Scope</a></li>');
document.write('      		<li><a href="theme_theme_php.htm#theme_php_list">List of items in theme.php</a></li>');
document.write('      		<li><a href="theme_examples.htm#theme_examples">Theme Examples</a></li>');
document.write('      	</ul>');
document.write('      </li>');
document.write('      <li><a href="theme_copyright.htm">Copyright-disclaimer in footer</a></li>');
document.write('      <li><a href="php-content.htm">Dynamic (PHP-driven) content</a>');
document.write('        <ul>');
document.write('          <li><a href="php-content.htm#php-content_anycontent">Using anycontent.php</a></li>');
document.write('          <li><a href="php-content.htm#php-content_header_footer">Custom header and footer</a></li>');
document.write('          <li><a href="php-content.htm#php-content_theme">Theme-based dynamic content (theme.php)</a></li>');
document.write('          <li><a href="php-content.htm#php-content_core">Modifying core files</a></li>');
document.write('        </ul>');
document.write('      </li>');
document.write('      <li><a href="theme_graphics.htm">Graphic resources in themes</a>');
document.write('      	<ul class="level3" id="theme_graphics">');
document.write('      		<li><a href="theme_graphics.htm#theme_graphics_menu_icons">Menu Icons</a></li>');
document.write('      		<li><a href="theme_graphics.htm#theme_graphics_nav_bar">Image Navigation bar</a></li>');
document.write('      		<li><a href="theme_graphics.htm#theme_graphics_rating">Rating images</a></li>');
document.write('      	</ul>');
document.write('      </li>');
document.write('    </ul>');
document.write('  </li>');
document.write('  <li><a href="administration.htm">Administration</a>');
document.write('    <ul>');
document.write('      <li><a href="admin_menu.htm">Admin menu items</a></li>');
document.write('      <li><a href="banning.htm#banning">Banning</a></li>');
document.write('      <li><a href="configuration.htm">Configuration</a>');
document.write('        <ul>');
document.write('          <li><a href="configuration.htm#admin_general">General settings</a></li>');
document.write('          <li><a href="configuration.htm#admin_language">Language &amp; Charset settings</a></li>');
document.write('          <li><a href="configuration.htm#admin_theme">Themes settings</a></li>');
document.write('          <li><a href="configuration.htm#admin_album_list">Album list view</a></li>');
document.write('          <li><a href="configuration.htm#admin_thumbnail_view">Thumbnail view</a></li>');
document.write('          <li><a href="configuration.htm#admin_image_comment">Image view</a></li>');
document.write('          <li><a href="configuration.htm#admin_comment_start">Comment settings</a></li>');
document.write('          <li><a href="configuration.htm#admin_contact_start">Contact form settings</a></li>');
document.write('          <li><a href="configuration.htm#admin_thumb_start">Thumbnail settings</a></li>');
document.write('          <li><a href="configuration.htm#admin_picture_thumbnail">File settings</a></li>');
document.write('          <li><a href="configuration.htm#admin_watermarking">Image watermarking</a></li>');
document.write('          <li><a href="configuration.htm#admin_registration">Registration</a></li>');
document.write('          <li><a href="configuration.htm#admin_user">User settings</a></li>');
document.write('          <li><a href="configuration.htm#admin_custom">Custom fields for user profile</a></li>');
document.write('          <li><a href="configuration.htm#admin_custom_image">Custom fields for image description</a></li>');
document.write('          <li><a href="configuration.htm#admin_cookie">Cookie settings</a></li>');
document.write('          <li><a href="configuration.htm#admin_email">Email settings</a></li>');
document.write('          <li><a href="configuration.htm#admin_logging">Logging &amp; statistics</a></li>');
document.write('          <li><a href="configuration.htm#admin_misc">Miscellaneous settings</a></li>');
document.write('        </ul>');
document.write('      </li>');
document.write('      <li><a href="groups.htm">Groups</a>');
document.write('        <ul>');
document.write('          <li><a href="groups.htm#group_cp">The group control panel</a></li>');
document.write('          <li><a href="groups.htm#group_cp_names">Group names</a></li>');
document.write('          <li><a href="groups.htm#group_cp_types">Group types</a></li>');
document.write('          <li><a href="groups.htm#group_cp_quota">Quota</a></li>');
document.write('          <li><a href="groups.htm#group_cp_permissions">Group permissions (Rating/Ecards/Comments)</a></li>');
document.write('          <li><a href="groups.htm#group_cp_public">Public albums upload</a></li>');
document.write('          <li><a href="groups.htm#group_cp_personal">Personal gallery</a></li>');
document.write('          <li><a href="groups.htm#group_cp_upload_method">Upload method</a></li>');
document.write('          <li><a href="groups.htm#group_cp_assigned">Assigned albums</a></li>');
document.write('          <li><a href="groups.htm#group_cp_create">Creating custom groups</a></li>');
document.write('          <li><a href="groups.htm#group_cp_delete">Deleting custom groups</a></li>');
document.write('          <li><a href="groups.htm#group_cp_sync">Triggering synchronisation (bridged only)</a></li>');
document.write('        </ul>');
document.write('      </li>');
document.write('      <li><a href="users.htm">Users</a>');
document.write('        <ul>');
document.write('          <li><a href="users.htm#user_cp">The user control panel</a></li>');
document.write('          <li><a href="users.htm#user_cp_page">Page controls</a></li>');
document.write('          <li><a href="users.htm#user_cp_search">Searching for user(s)</a></li>');
document.write('          <li><a href="users.htm#user_cp_new">Creating new users</a></li>');
document.write('          <li><a href="users.htm#user_cp_edit">Editing users</a></li>');
document.write('          <li><a href="users.htm#user_cp_group">Group membership</a></li>');
document.write('        </ul>');
document.write('      </li>');
document.write('      <li><a href="categories.htm">Categories</a></li>');
document.write('      <li><a href="albums.htm">Albums</a>');
document.write('        <ul>');
document.write('          <li><a href="albums.htm#albmgr">The Album Manager</a>');
document.write('            <ul>');
document.write('              <li><a href="albums.htm#albmgr_create">Creating albums</a></li>');
document.write('              <li><a href="albums.htm#albmgr_rename">Renaming albums</a></li>');
document.write('              <li><a href="albums.htm#albmgr_order">Changing the album order</a></li>');
document.write('              <li><a href="albums.htm#albmgr_delete">Deleting albums</a></li>');
document.write('            </ul>');
document.write('          </li>');
document.write('          <li><a href="albums.htm#modif_alb_pics">Modifying albums/files</a></li>');
document.write('          <li><a href="albums.htm#album_prop">Album properties</a>');
document.write('            <ul>');
document.write('              <li><a href="albums.htm#album_prop_reset_start">Reset album properties</a></li>');
document.write('            </ul>');
document.write('          </li>');
document.write('          <li><a href="albums.htm#album_admin_user">Admin vs. user</a></li>');
document.write('          <li><a href="albums.htm#album_faq">Album FAQ</a></li>');
document.write('        </ul>');
document.write('      </li>');
document.write('      <li><a href="files.htm">Files</a>');
document.write('        <ul>');
document.write('          <li><a href="files.htm#edit_pics">Editing files</a></li>');
document.write('          <li><a href="files.htm#edit_vids">Editing videos</a></li>');
document.write('          <li><a href="files.htm#cust_thmb">Custom Thumbnails</a></li>');
document.write('        </ul>');
document.write('      </li>');
document.write('      <li><a href="keywords.htm">Keywords</a>');
document.write('        <ul>');
document.write('          <li><a href="keywords.htm#keywords_assign">Assigning keywords</a></li>');
document.write('          <li><a href="keywords.htm#keywords_assign_upload">Assigning keywords when uploading</a></li>');
document.write('          <li><a href="keywords.htm#keywords_assign_edit">Editing/adding keywords</a></li>');
document.write('          <li><a href="keywords.htm#keywords_manager">Keywords manager</a></li>');
document.write('          <li><a href="keywords.htm#keywords_album">Album keywords</a></li>');
document.write('        </ul>');
document.write('      </li>');
document.write('      <li><a href="bbcode.htm">BBCODE</a></li>');
document.write('      <li><a href="exif.htm">EXIF data</a></li>');
document.write('      <li><a href="plugins.htm">Plugins</a>');
document.write('        <ul>');
document.write('          <li><a href="plugins.htm#plugin_definition">What is a plugin?</a></li>');
document.write('          <li><a href="plugins.htm#plugin_api">The Plugin API</a></li>');
document.write('          <li><a href="plugins.htm#plugin_obtain">Where to get Plugins from?</a></li>');
document.write('          <li><a href="plugins.htm#plugin_bundled">Plugins that ship with Coppermine</a></li>');
document.write('          <li><a href="plugins.htm#plugin_manager">The Plugin Manager</a>');
document.write('            <ul>');
document.write('              <li><a href="plugins.htm#plugin_manager_upload">Uploading a plugin</a></li>');
document.write('              <li><a href="plugins.htm#plugin_manager_install">Installing a plugin</a></li>');
document.write('              <li><a href="plugins.htm#plugin_manager_configuration">Plugin Configuration</a></li>');
document.write('              <li><a href="plugins.htm#plugin_manager_uninstall">Uninstalling a plugin</a></li>');
document.write('            </ul>');
document.write('          </li>');
document.write('          <li><a href="plugins.htm#plugin_writing">Writing plugins</a></li>');
document.write('        </ul>');
document.write('      </li>');
document.write('      <li><a href="admin-tools.htm#admin_tools">Admin Tools</a></li>');
document.write('      <li><a href="errors.htm#errors">Errors</a></li>');
document.write('      <li><a href="export.htm#export">Exporting</a></li>');
document.write('    </ul>');
document.write('  </li>');
document.write('  <li><a href="uploading.htm">Uploading</a>');
document.write('    <ul>');
document.write('      <li><a href="uploading_batch-add.htm#batch_add_pics">Uploading pics by FTP / Batch-Add Pictures</a></li>');
document.write('      <li><a href="uploading_http.htm#upload_http">Uploading by HTTP</a></li>');
document.write('      <li><a href="uploading_xp-publisher.htm#xp">Windows XP Web Publishing Wizard</a>');
document.write('        <ul>');
document.write('          <li><a href="uploading_xp-publisher.htm#xp_publish_setup">XP Web Publishing Wizard: Setup</a></li>');
document.write('          <li><a href="uploading_xp-publisher.htm#xp_publish_upload">XP Web Publishing Wizard: Uploading pictures</a></li>');
document.write('        </ul>');
document.write('      </li>');
document.write('      <li><a href="upload_troubleshooting.htm#upload_trouble">Upload troubleshooting</a>');
document.write('         <ul>');
document.write('           <li><a href="upload_troubleshooting.htm#upload_trouble_permission">Permissions</a></li>');
document.write('           <li><a href="upload_troubleshooting.htm#upload_trouble_enable_settings">Enable troubleshooting settings</a></li>');
document.write('           <li><a href="upload_troubleshooting.htm#upload_support">Asking for support on upload issues</a></li>');
document.write('           <li><a href="upload_troubleshooting.htm#upload_error_messages">Error messages</a></li>');
document.write('           <li><a href="upload_troubleshooting.htm#upload_trouble_server-sided_restrictions">Server-sided restrictions</a>');
document.write('             <ul>');
document.write('               <li><a href="upload_troubleshooting.htm#upload_trouble_server-sided_restrictions_check">Things to check</a></li>');
document.write('             </ul>');
document.write('           </li>');
document.write('         </ul>');
document.write('      </li>');
document.write('    </ul>');
document.write('  </li>');
document.write('  <li><a href="comments.htm">Comments</a>');
document.write('    <ul>');
document.write('      <li><a href="comments.htm#comments_allow">Allowing comments</a></li>');
document.write('      <li><a href="comments.htm#comments_options">Comments options</a></li>');
document.write('      <li><a href="comments.htm#comments_options_spam">Spam issues</a></li>');
document.write('      <li><a href="comments.htm#comments_review">Reviewing Comments</a></li>');
document.write('      <li><a href="comments.htm#comments_individual">Individual Comments</a></li>');
document.write('    </ul>');
document.write('  </li>');
document.write('  <li><a href="bridging.htm">Bridging</a>');
document.write('    <ul>');
document.write('      <li><a href="bridging.htm#integrating_bridge_purpose">What bridging does</a></li>');
document.write('      <li><a href="bridging.htm#integrating_bridge_start">Available bridge files</a></li>');
document.write('      <li><a href="bridging.htm#integrating_prerequisites_start">Pre-requistes</a>');
document.write('        <ul>');
document.write('          <li><a href="bridging.htm#integrating_cookie_start">Authentication by cookie</a></li>');
document.write('          <li><a href="bridging.htm#integrating_standalone_start">Standalone version first</a></li>');
document.write('          <li><a href="bridging.htm#integrating_users_start">Coppermine users, groups and pics uploaded by users are lost when integrating</a></li>');
document.write('          <li><a href="bridging.htm#integrating_backup_start">Backup</a></li>');
document.write('        </ul>');
document.write('      </li>');
document.write('      <li><a href="bridging.htm#integrating_steps_start">Integration steps</a>');
document.write('        <ul>');
document.write('          <li><a href="bridging.htm#bridge_manager_start">Using the bridge manager</a></li>');
document.write('          <li><a href="bridging.htm#bridge_manager_app_start">Choose application to bridge coppermine with</a></li>');
document.write('          <li><a href="bridging.htm#bridge_manager_path_start">Path(s) used by your bridge app</a></li>');
document.write('          <li><a href="bridging.htm#bridge_manager_specific_start">Bridge-app-specific settings</a></li>');
document.write('          <li><a href="bridging.htm#bridge_manager_enable_start">Enable/disable bridging</a></li>');
document.write('        </ul>');
document.write('      </li>');
document.write('      <li><a href="bridging.htm#bridge_manager_recover_start">Recover from failed bridging</a></li>');
document.write('      <li><a href="bridging.htm#integrating_steps_sync_start">Synchronising the bridge app groups with Coppermine\'s groups</a></li>');
document.write('      <li><a href="bridging.htm#integrating_support_start">Bridging support</a></li>');
document.write('      <li><a href="bridging.htm#integrating_config_options_start">Some config options get disabled</a></li>');
document.write('      <li><a href="bridging.htm#integrating_files_start">Bridging files</a></li>');
document.write('      <li><a href="bridging.htm#integrating_bridge_file_creating_start">Creating a custom bridge file</a></li>');
document.write('      <li><a href="bridging.htm#integrating_philosophy_start">Bridging philosophy</a></li>');
document.write('      <li><a href="bridging.htm#integrating_individual_bridge_issues_start">Individual bridge issues</a></li>');
document.write('      <li><a href="bridging.htm#integrating_subdomain">Subdomain issues</a></li>');
document.write('    </ul>');
document.write('  </li>');
document.write('  <li><a href="dev.htm">Developer documentation</a>');
document.write('    <ul>');
document.write('      <li><a href="dev_coding.htm">Coding guidelines</a></li>');
document.write('      <li><a href="dev_files.htm">Adding/renaming/removing files</a></li>');
document.write('      <li><a href="dev_superglobals.htm">Sanitization of Superglobals using Inspekt</a></li>');
document.write('      <li><a href="dev_javascript.htm">Javascript in Coppermine</a></li>');
document.write('      <li><a href="dev_plugins.htm">Writing Plugins for Coppermine</a>');
document.write('        <ul>');
document.write('          <li><a href="dev_plugin_writing.htm">Quick start guide for writing plugins</a></li>');
document.write('          <li><a href="dev_plugin_api.htm">Plugins tutorial, API description, Coppermine globals</a>');
document.write('            <ul>');
document.write('              <li><a href="dev_plugin_api.htm#plugin_api_overview">An Overview of the Coppermine Plugin API</a>');
document.write('                <ul class="level5">');
document.write('                    <li><a href="dev_plugin_api.htm#plugin_api_overview_intro">Introduction</a></li>');
document.write('                    <li><a href="dev_plugin_api.htm#plugin_api_overview_who">Intended Audience</a></li>');
document.write('                    <li><a href="dev_plugin_api.htm#plugin_api_overview_skills">Required Skills &amp; Knowledge</a></li>');
document.write('                    <li><a href="dev_plugin_api.htm#plugin_api_overview_tools">Recommended Software &amp; Support Forums</a></li>');
document.write('                    <li><a href="dev_plugin_api.htm#plugin_api_overview_doc">Structure of this Document</a></li>');
document.write('                </ul>');
document.write('              </li>');
document.write('              <li><a href="dev_plugin_api.htm#plugin_api_tutorial">"Hello, world" Plugin Tutorial</a>');
document.write('                <ul class="level5">');
document.write('                  <li><a href="dev_plugin_api.htm#plugin_api_tutorial_first">My First Plugin</a></li>');
document.write('                  <li><a href="dev_plugin_api.htm#plugin_api_tutorial_installconfig">Installation, Configuration, and Clean-Up</a>');
document.write('                    <ul class="level5">');
document.write('                      <li><a href="dev_plugin_api.htm#plugin_api_tutorial_installsimple">Installation with Simple Configuration</a></li>');
document.write('                      <li><a href="dev_plugin_api.htm#plugin_api_tutorial_install">Installation with Configuration Parameters</a></li>');
document.write('                      <li><a href="dev_plugin_api.htm#plugin_api_tutorial_config">Configuration during Operation</a></li>');
document.write('                      <li><a href="dev_plugin_api.htm#plugin_api_tutorial_cleanup">Uninstallation &amp; Clean-Up</a></li>');
document.write('                    </ul>');
document.write('                  </li>  ');
document.write('                  <li><a href="dev_plugin_api.htm#plugin_api_tutorial_linking">Linking to Custom Plugin Scripts</a></li>');
document.write('                  <li><a href="dev_plugin_api.htm#plugin_api_tutorial_button">Adding a Button to Coppermine</a></li>');
document.write('                  <li><a href="dev_plugin_api.htm#plugin_api_tutorial_lang">Multi-language Support</a></li>');
document.write('                  <li><a href="dev_plugin_api.htm#plugin_api_tutorial_distrib">Distributing Your Plugin</a></li>');
document.write('                  <li><a href="dev_plugin_api.htm#plugin_api_tutorial_wherenext">Where to Go from Here</a></li>');
document.write('                </ul>');
document.write('              </li>');
document.write('              <li><a href="dev_plugin_api.htm#plugin_api_hooks">Plugin Hooks</a></li>');
document.write('              <li><a href="dev_plugin_api.htm#plugin_api_plugin_class">Plugin Class Properties &amp; Methods</a></li>');
document.write('              <li><a href="dev_plugin_api.htm#plugin_api_globals">Global Variables &amp; Constants</a>');
document.write('                <ul class="level5">');
document.write('                  <li><a href="dev_plugin_api.htm#plugin_api_globals_system">System Global Variables</a></li>');
document.write('                  <li><a href="dev_plugin_api.htm#plugin_api_globals_cpg">Coppermine Constants</a></li>');
document.write('                </ul>');
document.write('              </li>');
document.write('            </ul>');
document.write('          </li>');
document.write('          <li><a href="dev_plugin_hooks.htm">Reference list of plugin hooks </a>');
document.write('            <ul class="level5">');
document.write('              <li><a href="dev_plugin_hooks.htm#plugin_hooks_choosing">Choosing Plugin Hooks</a></li>');
document.write('              <li><a href="dev_plugin_hooks.htm#plugin_hooks_finding">Finding Plugin Hooks</a></li>');
document.write('              <li><a href="dev_plugin_hooks.htm#plugin_hooks_using">Using Plugin Hooks</a></li>');
document.write('              <li><a href="dev_plugin_hooks.htm#plugin_hooks_filename">Plugin Hooks by Script Filename</a>');
document.write('                <ul class="level6">');
document.write('                  <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_ind_php">Script: index.php</a>');
document.write('                    <ul class="level7">');
document.write('                      <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_ind_anyc">Filter: \'anycontent\'</a></li>');
document.write('                      <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_ind_ucp">Filter: \'user_caption_params\'</a></li>');
document.write('                      <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_ind_pb">Filter: \'plugin_block\'</a></li>');
document.write('                    </ul>');
document.write('                  </li>');
document.write('                  <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_di_php">Script: displayimage.php</a>');
document.write('                    <ul class="level7">');
document.write('                      <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_di_fi">Filter: \'file_info\'</a></li>');
document.write('                      <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_di_pbc">Filter: \'post_breadcrumb\'</a></li>');
document.write('                    </ul>');
document.write('                  </li>');
document.write('                  <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_thumb_php">Script: thumbnails.php</a>');
document.write('                    <ul class="level7">');
document.write('                      <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_thumb_pbc">Filter: \'post_breadcrumb\'</a></li>');
document.write('                    </ul>');
document.write('                  </li>');
document.write('                  <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_func_php">Script: functions.inc.php</a>');
document.write('                    <ul class="level7">');
document.write('                      <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_func_ghgf">Filters: \'gallery_header\' and \'gallery_footer\'</a></li>');
document.write('                      <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_func_td">Filter: \'thumb_data\'</a></li>');
document.write('                      <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_func_th">Filter: \'template_html\'</a></li>');
document.write('                      <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_func_pm">Filter: \'page_meta\'</a></li>');
document.write('                      <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_func_tc">Filters: \'thumb_caption\' and all derivatives</a></li>');
document.write('                    </ul>');
document.write('                  </li>');
document.write('                  <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_th_php">Script: themes.inc.php</a>');
document.write('                    <ul class="level7">');
document.write('                      <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_th_fd">Filter: \'file_data\'</a></li>');
document.write('                    </ul>');
document.write('                  </li>');
document.write('                  <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_um_php">Script: usermgr.php</a>');
document.write('                    <ul class="level7">');
document.write('                      <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_um_umh">Filter: \'usermgr_header\'</a></li>');
document.write('                      <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_um_umf">Filter: \'usermgr_footer\'</a></li>');
document.write('                    </ul>');
document.write('                  </li>');
document.write('                  <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_pm_php">Script: pluginmgr.php</a>');
document.write('                    <ul class="level7">');
document.write('                      <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_pm_pcon">Filter: \'plugin_configure\'</a></li>');
document.write('                      <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_pm_pcl">Filter: \'plugin_cleanup\'</a></li>');
document.write('                    </ul>');
document.write('                  </li>');
document.write('                  <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_papi_php">Script: plugin_api.inc.php</a>');
document.write('                    <ul class="level7">');
document.write('                      <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_papi_ph">Filter: \'page_html\'</a></li>');
document.write('                      <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_papi_pe">Filter: \'page_end\'</a></li>');
document.write('                      <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_papi_pi">Filter: \'plugin_install\'</a></li>');
document.write('                      <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_papi_pu">Filter: \'plugin_uninstall\'</a></li>');
document.write('                      <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_papi_pw">Filter: \'plugin_wakeup\'</a></li>');
document.write('                      <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_papi_ps">Filter: \'plugin_sleep\'</a></li>');
document.write('                    </ul>');
document.write('                  </li>');
document.write('                  <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_init_php">Script: init.inc.php</a>');
document.write('                    <ul class="level9">');
document.write('                      <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_init_ps">Filter: \'page_start\'</a></li>');
document.write('                    </ul>');
document.write('                  </li>');
document.write('                  <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_picm_php">Script: picmgmt.inc.php</a>');
document.write('                    <ul class="level9">');
document.write('                      <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_picm_afd">Filter: \'add_file_data\'</a></li>');
document.write('                    </ul>');
document.write('                  </li>');
document.write('                </ul>');
document.write('              </li>');
document.write('              <li><a href="dev_plugin_hooks.htm#plugin_hooks_alphabetically">Plugin Hooks Alphabetically</a></li>');
document.write('              <li><a href="dev_plugin_hooks.htm#plugin_hooks_hooktype">Plugin Hooks by Hook Type</a></li>');
document.write('              <li><a href="dev_plugin_hooks.htm#plugin_hook_examples">Plugin Hook Examples</a>');
document.write('                <ul class="level6">');
document.write('                    <li><a href="dev_plugin_hooks.htm#plugin_hook_example_upload_method">Adding an upload method</a></li>');
document.write('                    <li><a href="dev_plugin_hooks.htm#plugin_hook_example_theme_display_thumbnails">Add tags for thumbnails display</a></li>');
document.write('                </ul></li>');
document.write('            </ul>');
document.write('          </li>');
document.write('        </ul>');
document.write('      </li>');
document.write('      <li><a href="dev_documentation.htm">Editing the documentation</a></li>');
document.write('      <li><a href="dev_subversion.htm">Subversion</a></li>');
document.write('      <li><a href="dev_config.htm">Adding config options</a></li>');
document.write('      <li><a href="dev_versioncheck.htm">Versioncheck</a></li>');
document.write('      <li><a href="dev_update.htm">Updating</a></li>');
document.write('      <li><a href="dev_tools.htm">Tools recommended by the devs</a>');
document.write('      	<ul class="level4">');
document.write('      		<li><a href="dev_tools.htm#dev_tools_database">Database manipulation</a></li>');
document.write('      		<li><a href="dev_tools.htm#dev_tools_ftp_client">FTP clients</a></li>');
document.write('      		<li><a href="dev_tools.htm#dev_tools_web_development">Web development</a></li>');
document.write('      		<li><a href="dev_tools.htm#dev_tools_editor">Text editors</a></li>');
document.write('      		<li><a href="dev_tools.htm#dev_tools_picture_editors">Picture Editors</a></li>');
document.write('      	</ul>');
document.write('      </li>');
document.write('      <li><a href="dev_database.htm">Database schema</a>');
document.write('      	<ul class="level4">');
document.write('      		<li><a href="dev_database.htm#db_config_file">Configuration file</a></li>');
document.write('      		<li><a href="dev_database.htm#db_reference within_code">Database reference within coppermine code</a></li>');
document.write('      		<li><a href="dev_database.htm#db_albums">cpg15x_albums</a></li>');
document.write('      		<li><a href="dev_database.htm#db_banned">cpg15x_banned</a></li>');
document.write('      		<li><a href="dev_database.htm#db_bridge">cpg15x_bridge</a></li>');
document.write('      		<li><a href="dev_database.htm#db_categories">cpg15x_categories</a></li>');
document.write('      		<li><a href="dev_database.htm#db_categorymap">cpg15x_categorymap</a></li>');
document.write('      		<li><a href="dev_database.htm#db_comments">cpg15x_comments</a></li>');
document.write('      		<li><a href="dev_database.htm#db_config">cpg15x_config</a></li>');
document.write('      		<li><a href="dev_database.htm#db_dict">cpg15x_dict</a></li>');
document.write('      		<li><a href="dev_database.htm#db_ecards">cpg15x_ecards</a></li>');
document.write('      		<li><a href="dev_database.htm#db_exif">cpg15x_exif</a></li>');
document.write('      		<li><a href="dev_database.htm#db_favpics">cpg15x_favpics</a></li>');
document.write('      		<li><a href="dev_database.htm#db_filetypes">cpg15x_filetypes</a></li>');
document.write('      		<li><a href="dev_database.htm#db_hit_stats">cpg15x_hit_stats</a></li>');
document.write('      		<li><a href="dev_database.htm#db_languages">cpg15x_languages</a></li>');
document.write('      		<li><a href="dev_database.htm#db_pictures">cpg15x_pictures</a></li>');
document.write('      		<li><a href="dev_database.htm#db_plugins">cpg15x_plugins</a></li>');
document.write('      		<li><a href="dev_database.htm#db_sessions">cpg15x_sessions</a></li>');
document.write('      		<li><a href="dev_database.htm#db_temp_messages">cpg15x_temp_messages</a></li>');
document.write('      		<li><a href="dev_database.htm#db_usergroups">cpg15x_usergroups</a></li>');
document.write('      		<li><a href="dev_database.htm#db_users">cpg15x_users</a></li>');
document.write('      		<li><a href="dev_database.htm#db_votes">cpg15x_votes</a></li>');
document.write('      		<li><a href="dev_database.htm#db_vote_stats">cpg15x_vote_stats</a></li>');
document.write('      	</ul>');
document.write('      </li>');
document.write('    </ul>');
document.write('  </li>');
document.write('</ul>');

document.write('<br />&nbsp;<br />');
document.write('  <form action="http://www.google.com/cse" id="cse-search-box">');
document.write('    <div>');
document.write('      <input type="hidden" name="cx" value="009353514429642786404:1fg_c1k1td8" />');
document.write('      <input type="text" name="q" size="25" />');
document.write('      <input type="submit" name="sa" value="search docs" style="font-size:9px;" />');
document.write('    </div>');
document.write('  </form>');
document.write('  <script type="text/javascript" src="http://www.google.com/coop/cse/brand?form=cse-search-box&lang=en"></script>');
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
	if (getUrlParameters('hide_nav') == 1) {
		return;
	}
	document.write('<img src="../images/coppermine-logo.png" alt="Coppermine Photo Gallery - Your Online Photo Gallery" align="left" />');
	document.write('<h1>Coppermine Photo Gallery v1.5.1: Documentation and Manual</h1>');
	document.write('<br clear="all" />');
	//cpgDocPrevNext();
	//cpgDocBreadcrumb();
	document.write('<a name="top"></a>');
}

function cpgDocFooter() {
  document.write('</div>');
  document.write('<div align="right">');
  document.write('<a href="#top">Back to Top</a>');
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
    $('#' + idName).css('display', 'none');
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

});