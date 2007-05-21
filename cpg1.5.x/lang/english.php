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
  Coppermine version: 1.5.0
  $Source: /cvsroot/coppermine/devel/lang/english.php,v $
  $Revision$
  $LastChangedBy$
  $Date$
**********************************************/

if (!defined('IN_COPPERMINE')) { die('Not in Coppermine...');}

// info about translators and translated language
$lang_translation_info = array(
  'lang_name_english' => 'English_US',
  'lang_name_native' => 'English_US',
  'lang_country_code' => 'us',
  'trans_name'=> 'Coppermine dev team',
  'trans_email' => '',
  'trans_website' => 'http://coppermine-gallery.net/',
  'trans_date' => '2007-05-21',
);

$lang_charset = 'iso-8859-1';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('Bytes', 'KB', 'MB');

// Day of weeks and months
$lang_day_of_week = array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat');
$lang_month = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');

// Some common strings
$lang_yes = 'Yes';
$lang_no  = 'No';
$lang_back = 'BACK';
$lang_continue = 'CONTINUE';
$lang_info = 'Information';
$lang_error = 'Error';
$lang_check_uncheck_all = 'check/uncheck all';

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$album_date_fmt =    '%B %d, %Y';
$lastcom_date_fmt =  '%m/%d/%y at %H:%M';
$lastup_date_fmt = '%B %d, %Y';
$register_date_fmt = '%B %d, %Y';
$lasthit_date_fmt = '%B %d, %Y at %I:%M %p';
$comment_date_fmt =  '%B %d, %Y at %I:%M %p';
$log_date_fmt = '%B %d, %Y at %I:%M %p';
$scientific_date_fmt = '%Y-%m-%d %H:%M:%S'; // cpg1.5.x

// For the word censor
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*');

$lang_meta_album_names = array(
  'random' => 'Random files',
  'lastup' => 'Last additions',
  'lastalb'=> 'Last updated albums',
  'lastcom' => 'Last comments',
  'topn' => 'Most viewed',
  'toprated' => 'Top rated',
  'lasthits' => 'Last viewed',
  'search' => 'Search results',
  'favpics'=> 'Favorite files',
);

$lang_errors = array(
  'access_denied' => 'You don\'t have permission to access this page.',
  'perm_denied' => 'You don\'t have permission to perform this operation.',
  'param_missing' => 'Script called without the required parameter(s).',
  'non_exist_ap' => 'The selected album/file does not exist !',
  'quota_exceeded' => 'Disk quota exceeded<br /><br />You have a space quota of [quota]K, your files currently use [space]K, adding this file would make you exceed your quota.',
  'gd_file_type_err' => 'When using the GD image library allowed image types are only JPEG and PNG.',
  'invalid_image' => 'The image you have uploaded is corrupted or can\'t be handled by the GD library',
  'resize_failed' => 'Unable to create thumbnail or reduced size image.',
  'no_img_to_display' => 'No image to display',
  'non_exist_cat' => 'The selected category does not exist',
  'orphan_cat' => 'A category has a non-existing parent, run the category manager to correct the problem!',
  'directory_ro' => 'Directory \'%s\' is not writable, files can\'t be deleted',
  'non_exist_comment' => 'The selected comment does not exist.',
  'pic_in_invalid_album' => 'File is in a non existant album (%s)!?',
  'banned' => 'You are currently banned from using this site.',
  'not_with_udb' => 'This function is disabled in Coppermine because it is integrated with forum software. Either what you are trying to do is not supported in this configuration, or the function should be handled by the forum software.',
  'offline_title' => 'Offline',
  'offline_text' => 'Gallery is currently offline - check back soon',
  'ecards_empty' => 'There are currently no ecard records to display.',
  'action_failed' => 'Action failed.  Coppermine is unable to process your request.',
  'no_zip' => 'The necessary libraries to process ZIP files are not available.  Please contact your Coppermine administrator.',
  'zip_type' => 'You do not have permission to upload ZIP files.',
  'database_query' => 'There was an error while processing a database query',
  'non_exist_comment' => 'The selected comment does not exist',
  'page_removed_redirector' => 'You are trying to access a page that has been removed from the coppermine package.<br />Redirecting...', //cpg1.5
  'captcha_error' => 'The confirmation code didn\'t match', //cpg1.5
);

$lang_bbcode_help_title = 'bbcode help';
$lang_bbcode_help = 'You can add clickable links and some formating to this field by using bbcode tags: <li>[b]Bold[/b] =&gt; <b>Bold</b></li><li>[i]Italic[/i] =&gt; <i>Italic</i></li><li>[url=http://yoursite.com/]Url Text[/url] =&gt; <a href="http://yoursite.com">Url Text</a></li><li>[email]user@domain.com[/email] =&gt; <a href="mailto:user@domain.com">user@domain.com</a></li><li>[color=red]some text[/color] =&gt; <span style="color:red">some text</span></li><li>[img]http://coppermine.sf.net/demo/images/red.gif[/img] => <img src="../images/red.gif" border="0" alt="" /></li>';

$lang_common = array(
  'yes' => 'Yes', // cpg1.5.x
  'no' => 'No', // cpg1.5.x
  'back' => 'Back', // cpg1.5.x
  'continue' => 'Continue', // cpg1.5.x
  'information' => 'Information', // cpg1.5.x
  'error' => 'Error', // cpg1.5.x
  'check_uncheck_all' => 'check/uncheck all', // cpg1.5.x
  'confirm' => 'Confirmation', // cpg1.5.x
  'captcha_help_title' => 'Visual confirmation (captcha)', // cpg1.5.x
  'captcha_help' => 'To avoid spam, you have to confirm that you are an actual human being and not just a bot script  by entering the displayed text.<br />Capitalization does not matter, you can type in lowercase.', // cpg1.5.x
  'title' => 'Title', // cpg1.5.x
  'caption' => 'Caption', // cpg1.5.x
  'keywords' => 'Keywords', // cpg1.5.x
  'owner_name' => 'Owner name', // cpg1.5.x
  'filename' => 'Filename', // cpg1.5.x
  'filesize' => 'Filesize', // cpg1.5.x
  'album' => 'Album', // cpg1.5.x
  'file' => 'File', // cpg1.5.x
  'date' => 'Date', // cpg1.5.x
  'help' => 'Help', // cpg1.5.x
  'close' => 'Close', // cpg1.5.x
);

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
  'home_title' => 'Go to the home page',
  'home_lnk' => 'Home',
  'alb_list_title' => 'Go to the album list',
  'alb_list_lnk' => 'Album list',
  'my_gal_title' => 'Go to my personal gallery',
  'my_gal_lnk' => 'My gallery',
  'my_prof_title' => 'Go to my personal profile',
  'my_prof_lnk' => 'My profile',
  'adm_mode_title' => 'Enable display of admin controls', // cpg1.5.x
  'adm_mode_lnk' => 'Show admin controls', // cpg1.5.x
  'usr_mode_title' => 'Disable display of admin controls', // cpg1.5.x
  'usr_mode_lnk' => 'Hide admin controls', // cpg1.5.x
  'upload_pic_title' => 'Upload a file into an album',
  'upload_pic_lnk' => 'Upload file',
  'register_title' => 'Create an account',
  'register_lnk' => 'Register',
  'login_title' => 'Log me in',
  'login_lnk' => 'Login',
  'logout_title' => 'Log me out',
  'logout_lnk' => 'Logout',
  'lastup_title' => 'Show most recent uploads',
  'lastup_lnk' => 'Last uploads',
  'lastcom_title' => 'Show most recent comments',
  'lastcom_lnk' => 'Last comments',
  'topn_title' => 'Show most viewed items',
  'topn_lnk' => 'Most viewed',
  'toprated_title' => 'Show top rated items',
  'toprated_lnk' => 'Top rated',
  'search_title' => 'Search the gallery',
  'search_lnk' => 'Search',
  'fav_title' => 'Go to my favorites',
  'fav_lnk' => 'My Favorites',
  'memberlist_title' => 'Show Memberlist',
  'memberlist_lnk' => 'Memberlist',
  'faq_title' => 'Frequently Asked Questions on the picture gallery &quot;Coppermine&quot;',
  'faq_lnk' => 'FAQ',
  'browse_by_date_lnk' => 'By Date', // cpg1.5.x
  'browse_by_date_title' => 'Browse by date uploaded', // cpg1.5.x
);

$lang_gallery_admin_menu = array(
  'upl_app_title' => 'Approve new uploads',
  'upl_app_lnk' => 'Upload approval',
  'admin_title' => 'Go to config',
  'admin_lnk' => 'Config',
  'albums_title' => 'Go to album configuration',
  'albums_lnk' => 'Albums',
  'categories_title' => 'Go to category configuration',
  'categories_lnk' => 'Categories',
  'users_title' => 'Go to user configuration',
  'users_lnk' => 'Users',
  'groups_title' => 'Go to group configuration',
  'groups_lnk' => 'Groups',
  'comments_title' => 'Review all comments',
  'comments_lnk' => 'Review Comments',
  'searchnew_title' => 'Go to the batch add process',
  'searchnew_lnk' => 'Batch add files',
  'util_title' => 'Go to the admin tools',
  'util_lnk' => 'Admin Tools',
  'key_title' => 'Go to the keyword dictionary',
  'key_lnk' => 'Keyword Dictionary',
  'ban_title' => 'Go to the banned users',
  'ban_lnk' => 'Ban Users',
  'db_ecard_title' => 'Review Ecards',
  'db_ecard_lnk' => 'Display Ecards',
  'pictures_title' => 'Sort my pictures',
  'pictures_lnk' => 'Sort my pictures',
  'documentation_lnk' => 'Documentation',
  'documentation_title' => 'Coppermine manual',
  'phpinfo_lnk' => 'phpinfo', // cpg1.5.x
  'phpinfo_title' => 'Contains technical information about your server. You may be asked to provide information from this when requesting support.', // cpg1.5.x
  'update_database_lnk' => 'Update database', // cpg1.5.x
  'update_database_title' => 'If you have replaced coppermine files, added a modification or upgraded from a previous version of coppermine, make sure to run the database update once. This will create the necessary tables and/or config values in your coppermine database.', // cpg1.5.x
  'view_log_files_lnk' => 'View log files', // cpg1.5.x
  'view_log_files_title' => 'Coppermine can keep track of various actions users perform. You can browse those logs if you have enabled logging in coppermine config.', // cpg1.5.x
  'check_versions_lnk' => 'Check versions', // cpg1.5.x
  'check_versions_title' => 'Check your file versions to find out if you have replaced all files after an upgrade, or if coppermine source files have been updated after the release of a package.', // cpg1.5.x
  'bridgemgr_lnk' => 'Bridge Manager', // cpg1.5.x
  'bridgemgr_title' => 'Enable/disable integration (bridging) of Coppermine with another application (e.g. your BBS).', // cpg1.5.x
  'pluginmgr_lnk' => 'Plugin Manager', // cpg1.5.x
  'pluginmgr_title' => 'Plugin manager', // cpg1.5.x
  'overall_stats_lnk' => 'Overall Stats', // cpg1.5.x
  'overall_stats_title' => 'View overall hit stats by browser and operating system (if corresponding options are turned on in config).', // cpg1.5.x
  'keywordmgr_lnk' => 'Keyword manager', // cpg1.5.x
  'keywordmgr_title' => 'Manage keywords (if corresponding option is turned on in config).', // cpg1.5.x
  'exifmgr_lnk' => 'EXIF manager', // cpg1.5.x
  'exifmgr_title' => 'Manage EXIF display (if corresponding option is turned on in config).', // cpg1.5.x
);

$lang_user_admin_menu = array(
  'albmgr_title' => 'Create and order my albums',
  'albmgr_lnk' => 'Create / order my albums',
  'modifyalb_title' => 'Go to modify my albums',
  'modifyalb_lnk' => 'Modify my albums',
  'my_prof_title' => 'Go to my personal profile',
  'my_prof_lnk' => 'My profile',
);

$lang_cat_list = array(
  'category' => 'Category',
  'albums' => 'Albums',
  'pictures' => 'Files',
);

$lang_album_list = array(
  'album_on_page' => '%d albums on %d page(s)',
);

$lang_thumb_view = array(
  'date' => 'Date',
  //Sort by filename and title
  'name' => 'File Name',
  'sort_da' => 'Sort by date ascending',
  'sort_dd' => 'Sort by date descending',
  'sort_na' => 'Sort by name ascending',
  'sort_nd' => 'Sort by name descending',
  'sort_ta' => 'Sort by title ascending',
  'sort_td' => 'Sort by title descending',
  'position' => 'Position',
  'sort_pa' => 'Sort by position ascending',
  'sort_pd' => 'Sort by position descending',
  'download_zip' => 'Download as Zip file',
  'pic_on_page' => '%d files on %d page(s)',
  'user_on_page' => '%d users on %d page(s)',
  'enter_alb_pass' => 'Enter Album Password',
  'invalid_pass' => 'Invalid Password',
  'pass' => 'Password',
  'submit' => 'Submit',
);

$lang_img_nav_bar = array(
  'thumb_title' => 'Return to the thumbnail page',
  'pic_info_title' => 'Display/hide file information',
  'slideshow_title' => 'Slideshow',
  'ecard_title' => 'Send this file as an e-card',
  'ecard_disabled' => 'e-cards are disabled',
  'ecard_disabled_msg' => 'You don\'t have permission to send ecards', //js-alert
  'prev_title' => 'See previous file',
  'next_title' => 'See next file',
  'pic_pos' => 'FILE %s/%s',
  'report_title' => 'Report this file to the administrator',
  'go_album_end' => 'Skip to end',
  'go_album_start' => 'Return to start',
  'go_back_x_items' => 'go back %s items',
  'go_forward_x_items' => 'go forward %s items',
);

$lang_rate_pic = array(
  'rate_this_pic' => 'Rate this file ',
  'no_votes' => '(No vote yet)',
  'rating' => '(current rating : %s / 5 with %s votes)',
  'rubbish' => 'Rubbish',
  'poor' => 'Poor',
  'fair' => 'Fair',
  'good' => 'Good',
  'excellent' => 'Excellent',
  'great' => 'Great',
  'js_warning' => 'Javascript must be enabled in order to vote', // cpg1.5.x
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
  CRITICAL_ERROR => 'Critical error',
  'file' => 'File: ',
  'line' => 'Line: ',
);

$lang_display_thumbnails = array(
  'dimensions' => 'Dimensions=',
  'date_added' => 'Date added=',
);

$lang_get_pic_data = array(
  'n_comments' => '%s comments',
  'n_views' => '%s views',
  'n_votes' => '(%s votes)',
);

$lang_cpg_debug_output = array(
  'debug_info' => 'Debug Info',
  'select_all' => 'Select All',
  'copy_and_paste_instructions' => 'If you\'re going to request help on the coppermine support board, copy-and-paste this debug output into your posting when requested, along with the error message you get (if any). Only post the debug_output on the support board if a supporter definitely asks for it! Make sure to replace any passwords from the query with *** before posting. <br />Note: This is for information only and does not mean there is an error with your gallery.', // cpg1.5
  'phpinfo' => 'display phpinfo',
  'notices' => 'Notices',
  'show_hide' => 'show / hide', // cpg1.5
);

$lang_language_selection = array(
  'reset_language' => 'Default language',
  'choose_language' => 'Choose your language',
);

$lang_theme_selection = array(
  'reset_theme' => 'Default theme',
  'choose_theme' => 'Choose a theme',
);

$lang_version_alert = array(
  'version_alert' => 'Unsupported version!',
  'no_stable_version' => 'You are running Coppermine %s (%s) which is only meant for very experienced users - this version comes without support nor any warranties. Use it at your own risk or downgrade to the latest stable version if you need support!',
  'gallery_offline' => 'The gallery is currently offline and will be only visible for you as admin. Don\'t forget to switch it back online after finishing maintenance.',
);

$lang_create_tabs = array(
  'previous' => 'previous',
  'next' => 'next',
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
  'error_wakeup' => "Couldn't awaken plugin '%s'",
  'error_install' => "Couldn't install plugin '%s'",
  'error_uninstall' => "Couldn't uninstall plugin '%s'",
  'error_sleep' => "Couldn't switch off plugin '%s'<br />", //cpg1.5
);

// ------------------------------------------------------------------------- //
// File include/smilies.inc.php
// ------------------------------------------------------------------------- //

if (defined('SMILIES_PHP')) $lang_smilies_inc_php = array(
  'Exclamation' => 'Exclamation',
  'Question' => 'Question',
  'Very Happy' => 'Very Happy',
  'Smile' => 'Smile',
  'Sad' => 'Sad',
  'Surprised' => 'Surprised',
  'Shocked' => 'Shocked',
  'Confused' => 'Confused',
  'Cool' => 'Cool',
  'Laughing' => 'Laughing',
  'Mad' => 'Mad',
  'Razz' => 'Razz',
  'Embarassed' => 'Embarassed',
  'Crying or Very sad' => 'Crying or Very sad',
  'Evil or Very Mad' => 'Evil or Very Mad',
  'Twisted Evil' => 'Twisted Evil',
  'Rolling Eyes' => 'Rolling Eyes',
  'Wink' => 'Wink',
  'Idea' => 'Idea',
  'Arrow' => 'Arrow',
  'Neutral' => 'Neutral',
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
  0 => 'Turning display of admin controls off...', // cpg1.5.x
  1 => 'Turning display of admin controls on...', // cpg1.5.x
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
  'alb_need_name' => 'Albums need to have a name !', //js-alert
  'confirm_modifs' => 'Are you sure you want to make these modifications ?', //js-alert
  'no_change' => 'You did not make any change !', //js-alert
  'new_album' => 'New album',
  'confirm_delete1' => 'Are you sure you want to delete this album ?', //js-alert
  'confirm_delete2' => '\nAll files and comments it contains will be lost !', //js-alert
  'select_first' => 'Select an album first', //js-alert
  'alb_mrg' => 'Album Manager',
  'my_gallery' => '* My gallery *',
  'no_category' => '* No category *',
  'delete' => 'Delete',
  'new' => 'New',
  'apply_modifs' => 'Apply modifications',
  'select_category' => 'Select category',
);

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) $lang_banning_php = array(
  'title' => 'Ban Users',
  'user_name' => 'User Name',
  'ip_address' => 'IP Address',
  'expiry' => 'Expires (blank is permanent)',
  'edit_ban' => 'Save Changes',
  'delete_ban' => 'Delete',
  'add_new' => 'Add New Ban',
  'add_ban' => 'Add',
  'error_user' => 'Cannot find user',
  'error_specify' => 'You need to specifiy either a user name or an IP address',
  'error_ban_id' => 'Invalid ban ID!',
  'error_admin_ban' => 'You cannnot ban yourself!',
  'error_server_ban' => 'You were going to ban your own server? Tsk tsk, cannot do that...',
  'error_ip_forbidden' => 'You cannnot ban this IP - it is non-routable (private) anyway!<br />If you want to allow banning for private IPs, change this in your <a href="admin.php">Config</a> (only makes sense when Coppermine runs on a LAN).',
  'lookup_ip' => 'Lookup an IP address',
  'submit' => 'go!',
  'select_date' => 'select date',
);

// ------------------------------------------------------------------------- //
// File bridgemgr.php
// ------------------------------------------------------------------------- //

if (defined('BRIDGEMGR_PHP')) $lang_bridgemgr_php = array(
  'title' => 'Bridge Wizard',
  'warning' => 'Warning: when using this wizard you have to understand that sensitive data is being sent using html forms. Only run it on your own PC (not on a public client like an internet cafe), and make sure to clear the browser cache and temporary files after you have finished, or others might be able to access your data!',
  'back' => 'back',
  'next' => 'next',
  'start_wizard' => 'Start bridging wizard',
  'finish' => 'Finish',
  'hide_unused_fields' => 'hide unused form fields (recommended)',
  'clear_unused_db_fields' => 'clear invalid database entries (recommended)',
  'custom_bridge_file' => 'your custom bridge file\'s name (if the bridge file\'s name is <i>myfile.inc.php</i>, enter <i>myfile</i> into this field)',
  'no_action_needed' => 'No action needed in this step. Just click \'next\' to continue.',
  'reset_to_default' => 'Reset to default value',
  'choose_bbs_app' => 'choose application to bridge coppermine with',
  'support_url' => 'Go here for support on this application',
  'settings_path' => 'path(s) used by your BBS app',
  'database_connection' => 'database connection',
  'database_tables' => 'database tables',
  'bbs_groups' => 'BBS groups',
  'license_number' => 'License number',
  'license_number_explanation' => 'enter your license number (if applicable)',
  'db_database_name' => 'Database name',
  'db_database_name_explanation' => 'Enter the name of the database your BBS app uses',
  'db_hostname' => 'Database host',
  'db_hostname_explanation' => 'Hostname where your mySQL database resides, usually &quot;localhost&quot;',
  'db_username' => 'Database user account',
  'db_username_explanation' => 'mySQL user account to use for connection with BBS',
  'db_password' => 'Database passsword',
  'db_password_explanation' => 'Passsword for this mySQL user account',
  'full_forum_url' => 'Forum URL',
  'full_forum_url_explanation' => 'Full URL of your BBS app (including the leading http:// bit, e.g. http://www.yourdomain.tld/forum)',
  'relative_path_of_forum_from_webroot' => 'Relative forum path',
  'relative_path_of_forum_from_webroot_explanation' => 'Relative path to your BBS app from the webroot (Example: if your BBS is at http://www.yourdomain.tld/forum/, enter &quot;/forum/&quot; into this field)',
  'relative_path_to_config_file' => 'Relative path to your BBS\'s config file',
  'relative_path_to_config_file_explanation' => 'Relative path to your BBS, seen from your Coppermine folder (e.g. &quot;../forum/&quot; if your BBS is at http://www.yourdomain.tld/forum/ and Coppermine at http://www.yourdomain.tld/gallery/)',
  'cookie_prefix' => 'Cookie prefix',
  'cookie_prefix_explanation' => 'this has to be your BBS\'s cookie name',
  'table_prefix' => 'Table prefix',
  'table_prefix_explanation' => 'Must match the prefix you chose for your BBS when setting it up.',
  'user_table' => 'User table',
  'user_table_explanation' => '(usually default value should be OK, unless your BBS install isn\'t standard)',
  'session_table' => 'Session table',
  'session_table_explanation' => '(usually default value should be OK, unless your BBS install isn\'t standard)',
  'group_table' => 'Group table',
  'group_table_explanation' => '(usually default value should be OK, unless your BBS install isn\'t standard)',
  'group_relation_table' => 'Group relation table',
  'group_relation_table_explanation' => '(usually default value should be OK, unless your BBS install isn\'t standard)',
  'group_mapping_table' => 'Group mapping table',
  'group_mapping_table_explanation' => '(usually default value should be OK, unless your BBS install isn\'t standard)',
  'use_standard_groups' => 'Use standard BBS usergroups',
  'use_standard_groups_explanation' => 'Use standard (built-in) usergroups (recommended). This will make all custom usergroups settings made on this page become void. Only disable this option if you REALLY know what you\'re doing!',
  'validating_group' => 'Validating group',
  'validating_group_explanation' => 'The group ID of your BBS where users accounts that need validation are in (usually default value should be OK, unless your BBS install isn\'t standard)',
  'guest_group' => 'Guest group',
  'guest_group_explanation' => 'Group ID of your BBS where guests (anonymous users) are in (default value should be OK, only edit if you know what you\'re doing)',
  'member_group' => 'Member group',
  'member_group_explanation' => 'Group ID of your BBS where &quot;regular&quot; users accounts are in (default value should be OK, only edit if you know what you\'re doing)',
  'admin_group' => 'Admin group',
  'admin_group_explanation' => 'Group ID of your BBS where admins are in (default value should be OK, only edit if you know what you\'re doing)',
  'banned_group' => 'Banned group',
  'banned_group_explanation' => 'Group ID of your BBS where banned users are in (default value should be OK, only edit if you know what you\'re doing)',
  'global_moderators_group' => 'Global moderators group',
  'global_moderators_group_explanation' => 'Group ID of your BBS where global moderators of your BBS are in (default value should be OK, only edit if you know what you\'re doing)',
  'special_settings' => 'BBS-specific settings',
  'logout_flag' => 'phpBB version (logout flag)',
  'logout_flag_explanation' => 'What\'s your BBS version (this setting specifies how logouts are being handled)',
  'use_post_based_groups' => 'Use post-based groups?',
  'logout_flag_yes' => '2.0.5 or higher',
  'logout_flag_no' => '2.0.4 or lower',
  'use_post_based_groups_explanation' => 'Should the groups from the BBS that are defined by the number of posts be taken into account (allows a granular permissions management) or just the default groups (makes administration easier, recommended). You can change this setting later as well.',
  'use_post_based_groups_yes' => 'yes',
  'use_post_based_groups_no' => 'no',
  'error_title' => 'You need to correct these errors before you can continue. Go to the previous screen.',
  'error_specify_bbs' => 'You have to specify what application you want to bridge your Coppermine install with.',
  'error_no_blank_name' => 'You can\'t leave the name of your custom bridge file blank.',
  'error_no_special_chars' => 'The bridge file name mustn\'t contain any special chars except underscore (_) and dash (-)!',
  'error_bridge_file_not_exist' => 'The bridge file %s doesn\'t exist on the server. Check if you have actually uploaded it.',
  'finalize' => 'enable/disable BBS integration',
  'finalize_explanation' => 'So far, the settings you specified have been written into the database, but BBS integration hasn\'t been enabled. You can switch integration on/off later at any time. Make sure to remember the admin username and password from standalone Coppermine, you might need it later to be able to make any changes. If anything goes wrong, go to %s and disable BBS integration there, using your standalone (unbridged) admin account (usually the one you set up during Coppermine install).',
  'your_bridge_settings' => 'Your bridge settings',
  'title_enable' => 'Enable integration/bridging with %s',
  'bridge_enable_yes' => 'enable',
  'bridge_enable_no' => 'disable',
  'error_must_not_be_empty' => 'must not be empty',
  'error_either_be' => 'must either be %s or %s',
  'error_folder_not_exist' => '%s doesn\'t exist. Correct the value you entered for %s',
  'error_cookie_not_readible' => 'Coppermine can\'t read a cookie named %s. Correct the value you entered for %s, or go to your BBS administration panel and make sure that the cookie path is readible for coppermine.',
  'error_mandatory_field_empty' => 'You can not leave the field %s blank - fill in the proper value.',
  'error_no_trailing_slash' => 'There mustn\'t be a trailing slash in the field %s.',
  'error_trailing_slash' => 'There must be a trailing slash in the field %s.',
  'error_db_connect' => 'Could not connect to the mySQL database with the data you specified. Here\'s what mySQL said:',
  'error_db_name' => 'Although Coppermine could establish a connection, it wasn\'t able to find the database %s. Make sure you have specified %s properly. Here\'s what mySQL said:',
  'error_prefix_and_table' => '%s and ',
  'error_db_table' => 'Could not find the table %s. Make sure you have specified %s correctly.',
  'recovery_title' => 'Bridge Manager: emergency recovery',
  'recovery_explanation' => 'If you came here to administer the BBS integration of your Coppermine gallery, you have to log in first as admin. If you can not log in because bridging doesn\'t work as expected, you can disable BBS integration with this page. Entering your username and password will not log you in, it will only disable BBS integration. Refer to the documentation for details.',
  'username' => 'Username',
  'password' => 'Password',
  'disable_submit' => 'submit',
  'recovery_success_title' => 'Authorization successful',
  'recovery_success_content' => 'You have successfully disabled BBS bridging. Your Coppermine install runs now in standalone mode.',
  'recovery_success_advice_login' => 'Log in as admin to edit your bridge settings and/or enable BBS integration again.',
  'goto_login' => 'Go to login page',
  'goto_bridgemgr' => 'Go to bridge manager',
  'recovery_failure_title' => 'Authorization failed',
  'recovery_failure_content' => 'You supplied the wrong credentials. You will have to supply the admin account data of the standalone version (usually the account you set up during Coppermine install).',
  'try_again' => 'try again',
  'recovery_wait_title' => 'Wait time has not elapsed',
  'recovery_wait_content' => 'For security reasons this script does not allow failed logons in short succession, so you will have to wait a bit untill you\'re allowed to try to authenticate.',
  'wait' => 'wait',
  'create_redir_file' => 'Create redirection file (recommended)',
  'create_redir_file_explanation' => 'To redirect users back to Coppermine once they logged into your BBS, you need a redirection file to be created within your BBS folder. When this option is checked, the bridge manager will attempt to create this file for you, or give you code ready to copy-and-paste to create the file manually.',
  'browse' => 'browse',
);

// ------------------------------------------------------------------------- //
// File calendar.php
// ------------------------------------------------------------------------- //

if (defined('CALENDAR_PHP')) $lang_calendar_php = array(
  'title' => 'Calendar',
  'clear_date' => 'clear date',
  'files' => 'files', // cpg1.5
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
  'miss_param' => 'Parameters required for \'%s\'operation not supplied !',
  'unknown_cat' => 'Selected category does not exist in database',
  'usergal_cat_ro' => 'User galleries category can\'t be deleted !',
  'manage_cat' => 'Manage categories',
  'confirm_delete' => 'Are you sure you want to DELETE this category', //js-alert
  'category' => 'Category',
  'operations' => 'Operations',
  'move_into' => 'Move into',
  'update_create' => 'Update/Create category',
  'parent_cat' => 'Parent category',
  'cat_title' => 'Category title',
  'cat_thumb' => 'Category thumbnail',
  'cat_desc' => 'Category description',
  'categories_alpha_sort' => 'Sort categories alphabetically (instead of custom sort order)',
  'save_cfg' => 'Save configuration',
  'no_category' => '* No category *', // cpg1.5
);

// ------------------------------------------------------------------------- //
// File admin.php
// ------------------------------------------------------------------------- //

if (defined('ADMIN_PHP')) $lang_admin_php = array(
  'title' => 'Gallery Configuration',
  'manage_exif' => 'Manage exif display',
  'manage_plugins' => 'Manage plugins',
  'manage_keyword' => 'Manage keywords',
  'restore_cfg' => 'Restore factory defaults',
  'save_cfg' => 'Save new configuration',
  'notes' => 'Notes',
  'info' => 'Information',
  'upd_success' => 'Coppermine configuration was updated',
  'restore_success' => 'Coppermine default configuration restored',
  'name_a' => 'Name ascending',
  'name_d' => 'Name descending',
  'title_a' => 'Title ascending',
  'title_d' => 'Title descending',
  'date_a' => 'Date ascending',
  'date_d' => 'Date descending',
  'pos_a' => 'Position ascending',
  'pos_d' => 'Position descending',
  'th_any' => 'Max Aspect',
  'th_ht' => 'Height',
  'th_wd' => 'Width',
  //thumb cropping
  'th_ex' => 'Exact', // thumb cropping
  'label' => 'label',
  'item' => 'item',
  'debug_everyone' => 'Everyone',
  'debug_admin' => 'Admin only',
  'no_logs'=> 'Off',
  'log_normal'=> 'Normal',
  'log_all' => 'All',
  'view_logs' => 'View logs',
  'click_expand' => 'click section name to expand',
  'expand_all' => 'Expand All',
  'notice1' => '(*) These settings mustn\'t be changed if you already have files in your database.',
  'notice2' => '(**) When changing this setting, only the files that are added from that point on are affected, so it is advisable that this setting must not be changed if there are already files in the gallery. You can, however, apply the changes to the existing files with the &quot;<a href="util.php">admin tools</a> (resize pictures)&quot; utility from the admin menu.',
  'notice3' => '(***) All log files are written in english.',
  'bbs_disabled' => 'Function disabled when using bb integration',
  'auto_resize_everyone' => 'Everyone',
  'auto_resize_user' => 'User only',
  'ascending' => 'ascending',
  'descending' => 'descending',
  'collapse_all' => 'Collapse All', // cpg1.5
  'separate_page' => 'on a separate page', // cpg1.5
  'inline' => 'inline', // cpg1.5
  'guests_only' => 'Guests only', // cpg1.5
  ######## watermark #####
  'wm_bottomright' => 'Bottom right', // cpg1.5
  'wm_bottomleft' => 'Bottom left', // cpg1.5
  'wm_topleft' => 'Up left', // cpg1.5
  'wm_topright' => 'Up Right', // cpg1.5
  'wm_center' => 'Center', // cpg1.5
  'wm_both' => 'Both', // cpg1.5
  'wm_original' => 'Original', // cpg1.5
  'wm_resized' => 'Resized', // cpg1.5
  ###################
);

if (defined('ADMIN_PHP')) $lang_admin_data = array(
  'General settings',
  array('Gallery name', 'gallery_name', 0, 'f=configuration.htm&amp;as=admin_general_name&amp;ae=admin_general_name_end'),
  array('Gallery description', 'gallery_description', 0, 'f=configuration.htm&amp;as=admin_general_description&amp;ae=admin_general_description_end'),
  array('Gallery administrator email', 'gallery_admin_email', 0, 'f=configuration.htm&amp;as=admin_general_email&amp;ae=admin_general_email_end'),
  array('URL of your coppermine gallery folder (no \'index.php\' or similar at the end)', 'ecards_more_pic_target', 0, 'f=configuration.htm&amp;as=admin_general_coppermine-url&amp;ae=admin_general_coppermine-url_end'),
  array('URL of your home page', 'home_target', 0, 'f=configuration.htm&amp;as=admin_general_home-url&amp;ae=admin_general_home-url_end'),
  array('Allow ZIP-download of favorites', 'enable_zipdownload', 1, 'f=configuration.htm&amp;as=admin_general_zip-download&amp;ae=admin_general_zip-download_end'),
  array('Timezone difference relative to GMT (current time: ' . localised_date(-1, $comment_date_fmt) . ')','time_offset',0, 'f=configuration.htm&amp;as=admin_general_time-offset&amp;ae=admin_general_time-offset_end&amp;top=1'),
  array('Enable encrypted passwords (can not be undone)','enable_encrypted_passwords',1, 'f=configuration.htm&amp;as=admin_general_encrypt_password_start&amp;ae=admin_general_encrypt_password_end&amp;top=1'), // cpg 1.4
  array('Enable help-icons (help available in English only)','enable_help',9, 'f=configuration.htm&amp;as=admin_general_help&amp;ae=admin_general_help_end'),
  array('Enable clickable keywords in search','clickable_keyword_search',14, 'f=configuration.htm&amp;as=admin_general_keywords_start&amp;ae=admin_general_keywords_end'),
  array('Enable plugins', 'enable_plugins', 12, 'f=configuration.htm&amp;as=admin_general_enable-plugins&amp;ae=admin_general_enable-plugins_end'),
  array('Allow banning of non-routable (private) IP addresses', 'ban_private_ip', 1,  'f=configuration.htm&amp;as=admin_general_private-ip&amp;ae=admin_general_private-ip_end'),
  array('Browsable batch-add interface', 'browse_batch_add', 1, 'f=configuration.htm&amp;as=admin_general_browsable_batch_add&amp;ae=admin_general_browsable_batch_add_end'),

  'Language &amp; Charset settings',
  array('Language', 'lang', 5, 'f=configuration.htm&amp;as=admin_language_language&amp;ae=admin_language_language_end'),
  array('Fallback to English if translated phrase not found?', 'language_fallback', 1, 'f=configuration.htm&amp;as=admin_language_fallback&amp;ae=admin_language_fallback_end'),
  array('Character encoding', 'charset', 4, 'f=configuration.htm&amp;as=admin_language_charset&amp;ae=admin_language_charset_end'),
  array('Display language list', 'language_list', 1, 'f=configuration.htm&amp;as=admin_language_list&amp;ae=admin_language_list_end'),
  array('Display language flags', 'language_flags', 8, 'f=configuration.htm&amp;as=admin_language_flags&amp;ae=admin_language_flags_end&amp;top=1'),
  array('Display &quot;reset&quot; in language selection', 'language_reset', 1, 'f=configuration.htm&amp;as=admin_language_reset&amp;ae=admin_language_reset_end&amp;top=1'),
  //array('Display previous/next on tabbed pages', 'previous_next_tab', 1),

  'Themes settings',
  array('Theme', 'theme', 6, 'f=configuration.htm&amp;as=admin_theme_theme&amp;ae=admin_theme_theme_end'),
  array('Display theme list', 'theme_list', 1, 'f=configuration.htm&amp;as=admin_theme_theme_list&amp;ae=admin_theme_theme_list_end'),
  array('Display &quot;reset&quot; in theme selection', 'theme_reset', 1, 'f=configuration.htm&amp;as=admin_theme_theme_reset&amp;ae=admin_theme_theme_reset_end'),
  array('Display FAQ', 'display_faq', 1, 'f=configuration.htm&amp;as=admin_theme_faq&amp;ae=admin_theme_faq_end'),
  array('Custom menu link name', 'custom_lnk_name', 0,'f=configuration.htm&amp;as=admin_theme_custom_lnk_name&amp;ae=admin_theme_custom_lnk_name_end'),
  array('Custom menu link URL', 'custom_lnk_url', 0,'f=configuration.htm&amp;as=admin_language_custom_lnk_url&amp;ae=admin_language_custom_lnk_url_end'),
  array('Display bbcode help', 'show_bbcode_help', 1, 'f=configuration.htm&amp;as=admin_theme_bbcode&amp;ae=admin_theme_bbcode_end&amp;top=1'),
  array('Show the vanity block on themes that are defined as XHTML and CSS compliant','vanity_block',1, 'f=configuration.htm&amp;as=vanity_block&amp;ae=vanity_block_end'),
  array('Path to custom header include', 'custom_header_path', 0, 'f=configuration.htm&amp;as=admin_theme_include_path_start&amp;ae=admin_theme_include_path_end'),
  array('Path to custom footer include', 'custom_footer_path', 0, 'f=configuration.htm&amp;as=admin_theme_include_path_start&amp;ae=admin_theme_include_path_end'),
  array('Enable browsing by date', 'browse_by_date', 1, 'f=configuration.htm&amp;as=admin_theme_browse_by_date&amp;ae=admin_theme_browse_by_date_end'), // cpg1.5.x

  'Album list view',
  array('Width of the main table (pixels or %)', 'main_table_width', 0, 'f=configuration.htm&amp;as=admin_album_table-width&amp;ae=admin_album_table-width_end'),
  array('Number of levels of categories to display', 'subcat_level', 0, 'f=configuration.htm&amp;as=admin_album_category-levels&amp;ae=admin_album_category-levels_end'),
  array('Number of albums to display', 'albums_per_page', 0, 'f=configuration.htm&amp;as=admin_album_number&amp;ae=admin_album_number_end'),
  array('Number of columns for the album list', 'album_list_cols', 0, 'f=configuration.htm&amp;as=admin_album_columns&amp;ae=admin_album_columns_end'),
  array('Size of thumbnails in pixels', 'alb_list_thumb_size', 0, 'f=configuration.htm&amp;as=admin_album_thumbnail-size&amp;ae=admin_album_thumbnail-size_end'),
  array('The content of the main page', 'main_page_layout', 0, 'f=configuration.htm&amp;as=admin_album_list_content&amp;ae=admin_album_list_content_end'),
  array('Show first level album thumbnails in categories','first_level',1, 'f=configuration.htm&amp;as=admin_album_first-level_thumbs&amp;ae=admin_album_first-level_thumbs_end'),
  array('Sort categories alphabetically (instead of custom sort order)','categories_alpha_sort',1, 'f=configuration.htm&amp;as=admin_album_list_alphasort_start&amp;ae=admin_album_list_alphasort_end'),
  array('Show number of linked files','link_pic_count',1, 'f=configuration.htm&amp;as=admin_album_linked_files_start&amp;ae=admin_album_linked_files_end'),

  'Thumbnail view',
  array('Number of columns on thumbnail page', 'thumbcols', 0, 'f=configuration.htm&amp;as=admin_thumbnail_columns&amp;ae=admin_thumbnail_columns_end'),
  array('Number of rows on thumbnail page', 'thumbrows', 0, 'f=configuration.htm&amp;as=admin_thumbnail_rows&amp;ae=admin_thumbnail_rows_end'),
  array('Maximum number of tabs to display', 'max_tabs', 10, 'f=configuration.htm&amp;as=admin_thumbnail_tabs&amp;ae=admin_thumbnail_tabs_end'),
  array('Display file caption (in addition to title) below the thumbnail', 'caption_in_thumbview', 1, 'f=configuration.htm&amp;as=admin_thumbnail_display_caption&amp;ae=admin_thumbnail_display_caption_end'),
  array('Display number of views below the thumbnail', 'views_in_thumbview', 1, 'f=configuration.htm&amp;as=admin_thumbnail_display_views&amp;ae=admin_thumbnail_display_views_end'),
  array('Display number of comments below the thumbnail', 'display_comment_count', 1, 'f=configuration.htm&amp;as=admin_thumbnail_display_comments&amp;ae=admin_thumbnail_display_comments_end'),
  array('Display uploader name below the thumbnail', 'display_uploader', 1, 'f=configuration.htm&amp;as=admin_thumbnail_display_uploader&amp;ae=admin_thumbnail_display_uploader_end'),
  //array('Display name of admin uploaders below the thumbnail', 'display_admin_uploader', 1, 'f=configuration.htm&amp;as=admin_thumbnail_display_admin_uploader&amp;ae=admin_thumbnail_display_admin_uploader_end'),
  array('Display file name below the thumbnail', 'display_filename', 1, 'f=configuration.htm&amp;as=admin_thumbnail_display_filename&amp;ae=admin_thumbnail_display_filename_end'),
  array('Display rating below the thumbnail', 'display_thumbnail_rating', 1, 'f=configuration.htm&amp;as=admin_thumbnail_display_rating&amp;ae=admin_thumbnail_display_rating_end'), //cpg1.5
  array('Display album description', 'alb_desc_thumb', 1, 'f=configuration.htm&amp;as=admin_thumbnail_display_description&amp;ae=admin_thumbnail_display_description_end'),
  array('Go directly from thumbnail to full-sized image', 'thumbnail_to_fullsize', 1, 'f=configuration.htm&amp;as=admin_thumbnail_to_fullsize&amp;ae=admin_thumbnail_to_fullsize_end'),
  array('Default sort order for files', 'default_sort_order', 3, 'f=configuration.htm&amp;as=admin_thumbnail_default_sortorder&amp;ae=admin_thumbnail_default_sortorder_end'),
  array('Minimum number of votes for a file to appear in the \'top-rated\' list', 'min_votes_for_rating', 0, 'f=configuration.htm&amp;as=admin_thumbnail_minimum_votes&amp;ae=admin_thumbnail_minimum_votes_end'),

  'Image view',
  array('Width of the table for file display (pixels or %)', 'picture_table_width', 0, 'f=configuration.htm&amp;as=admin_image_comment_table-width&amp;ae=admin_image_comment_table-width_end'),
  array('File information is visible by default', 'display_pic_info', 1, 'f=configuration.htm&amp;as=admin_image_comment_info_visible&amp;ae=admin_image_comment_info_visible_end'),
  array('Display movie download link in the file information area', 'picinfo_movie_download_link', 1),
  array('Max length for an image description', 'max_img_desc_length', 0, 'f=configuration.htm&amp;as=admin_image_comment_descr_length&amp;ae=admin_image_comment_descr_length_end'),
  array('Max number of characters in a word', 'max_com_wlength', 0, 'f=configuration.htm&amp;as=admin_image_comment_chars_per_word&amp;ae=admin_image_comment_chars_per_word_end'),
  array('Show film strip', 'display_film_strip', 1, 'f=configuration.htm&amp;as=admin_image_comment_filmstrip_toggle&amp;ae=admin_image_comment_filmstrip_toggle_end'),
  array('Display file name under film strip thumbnail', 'display_film_strip_filename', 1, 'f=configuration.htm&amp;as=admin_image_comment_display_film_strip_filename&amp;ae=admin_image_comment_display_film_strip_filename_end'),
  array('Number of items in film strip', 'max_film_strip_items', 0, 'f=configuration.htm&amp;as=admin_image_comment_filmstrip_number&amp;ae=admin_image_comment_filmstrip_number_end'),
  array('Slideshow interval in milliseconds (1 second = 1000 milliseconds)', 'slideshow_interval', 0, 'f=configuration.htm&amp;as=admin_image_comment_slideshow_interval&amp;ae=admin_image_comment_slideshow_interval_end'),
  array('Count hits in slideshow', 'slideshow_hits', 1, 'f=configuration.htm&amp;as=admin_image_slideshow_hits&amp;ae=admin_image_slideshow_hits_end'),
  array('Allow Flash in Ecards (not recommended)', 'ecard_flash', 1, 'f=configuration.htm&amp;as=admin_image_ecard_flash_start&amp;ae=admin_image_ecard_flash_end'), // cpg1.5.x
  array('Insert a transparent overlay to minimize image theft', 'transparent_overlay', 1, 'f=configuration.htm&amp;as=admin_image_transparent_overlay_start&amp;ae=admin_image_transparent_overlay_end'), // cpg1.5.x

  'Comment settings',
  array('Filter bad words in comments', 'filter_bad_words', 1, 'f=configuration.htm&amp;as=admin_image_comment_bad_words&amp;ae=admin_image_comment_bad_words_end'),
  array('Allow smiles in comments', 'enable_smilies', 1, 'f=configuration.htm&amp;as=admin_image_comment_smilies&amp;ae=admin_image_comment_smilies_end'),
  array('Allow several consecutive comments on one file from the same user (disable flood protection)', 'disable_comment_flood_protect', 1, 'f=configuration.htm&amp;as=admin_image_comment_flood&amp;ae=admin_image_comment_flood_end'),
  array('Max number of lines in a comment', 'max_com_lines', 0, 'f=configuration.htm&amp;as=admin_image_comment_lines&amp;ae=admin_image_comment_lines_end'),
  array('Maximum length of a comment', 'max_com_size', 0, 'f=configuration.htm&amp;as=admin_image_comment_length&amp;ae=admin_image_comment_length_end'),
  array('Notify admin of comments by email', 'email_comment_notification', 1, 'f=configuration.htm&amp;as=admin_image_comment_admin_notify&amp;ae=admin_image_comment_admin_notify_end'),
  array('Sort order of comments', 'comments_sort_descending', 17, 'f=configuration.htm&amp;as=admin_comment_sort_start&amp;ae=admin_comment_sort_end'),
  array('Prefix for anonymous comments authors', 'comments_anon_pfx', 0, 'f=configuration.htm&amp;as=comments_anon_pfx&amp;ae=comments_anon_pfx_end'),
  array('Comments require approval', 'comment_approval', 19, 'f=configuration.htm&amp;as=admin_comment_approval&amp;ae=admin_comment_approval_end'), // cpg1.5.x
  array('Only display comments needing approval on the &quot;Review Comments&quot; page', 'display_comment_approval_only', 1, 'f=configuration.htm&amp;as=admin_comment_display_comment_approval_only_start&amp;ae=admin_comment_display_comment_approval_only_end'), // cpg1.5.x
  array('Display placeholder text to end users for comments waiting for admin approval', 'comment_placeholder', 1, 'f=configuration.htm&amp;as=admin_comment_display_placeholder_start&amp;ae=admin_comment_display_placeholder_end'), // cpg1.5.x
  array('Allow users to edit their comments', 'comment_user_edit', 1, 'f=configuration.htm&amp;as=admin_comment_user_edit_start&amp;ae=admin_comment_user_edit_end'), // cpg1.5.x
  array('Display Captcha (Visual Confirmation) for adding comments', 'comment_captcha', 19, 'f=configuration.htm&amp;as=admin_comment_captcha_start&amp;ae=admin_comment_captcha_end'), // cpg1.5.x
  array('Ask guests to log in to post comments', 'comment_promote_registration', 1, 'f=configuration.htm&amp;as=admin_comment_promote_registration_start&amp;ae=admin_comment_promote_registration_end'), // cpg1.5.x

  'Thumbnails settings', // cpg1.5.x
  array('Max dimension (width) of a thumbnail <a href="#notice2" class="clickable_option">**</a>', 'thumb_width', 0, 'f=configuration.htm&amp;as=admin_picture_thumbnail_max-dimension&amp;ae=admin_picture_thumbnail_max-dimension_end'),
  array('Use dimension ( width or height or Max aspect for thumbnail ) <a href="#notice2" class="clickable_option">**</a>', 'thumb_use', 7, 'f=configuration.htm&amp;as=admin_picture_thumbnail_use-dimension&amp;ae=admin_picture_thumbnail_use-dimension_end'),
  array('Height of a thumbnail (only applies if you use &quot;exact&quot; in &quot;Use dimension&quot;)', 'thumb_height', 0), // cpg1.5.x
  array('Enable Custom Thumbs (movie, audio, document)', 'enable_custom_thumbs', 1), // cpg1.5
  array('The prefix for thumbnails <a href="#notice1" class="clickable_option">*</a>', 'thumb_pfx', 0, 'f=configuration.htm&amp;as=admin_picture_thumb_advanced_thumbs_prefix&amp;ae=admin_picture_thumb_advanced_thumbs_prefix_end'),
  array('Thumb Sharpening: enable Unsharp Mask', 'enable_unsharp', 1), // cpg1.5
  array('Thumb Sharpening amount', 'unsharp_amount', 0), // cpg1.5
  array('Thumb Sharpening radius', 'unsharp_radius', 0), // cpg1.5
  array('Thumb Sharpening threshold', 'unsharp_threshold', 0), // cpg1.5


  'File settings',
  array('Quality for JPEG files', 'jpeg_qual', 0, 'f=configuration.htm&amp;as=admin_picture_thumbnail_jpeg_quality&amp;ae=admin_picture_thumbnail_jpeg_quality_end'),
  array('Create intermediate pictures','make_intermediate',1, 'f=configuration.htm&amp;as=admin_picture_thumbnail_intermediate_toggle&amp;ae=admin_picture_thumbnail_intermediate_toggle_end'),
  array('Max width or height of an intermediate picture/video <a href="#notice2" class="clickable_option">**</a>', 'picture_width', 0, 'f=configuration.htm&amp;as=admin_picture_thumbnail_intermediate_dimension&amp;ae=admin_picture_thumbnail_intermediate_dimension_end'),
  array('Max size for uploaded files (KB)', 'max_upl_size', 0, 'f=configuration.htm&amp;as=admin_picture_thumbnail_max_upload_size&amp;ae=admin_picture_thumbnail_max_upload_size_end'),
  array('Max width or height for uploaded pictures/videos (pixels)', 'max_upl_width_height', 0, 'f=configuration.htm&amp;as=admin_picture_thumbnail_max_upload_dimension&amp;ae=admin_picture_thumbnail_max_upload_dimension_end'),
  array('Auto resize images that are larger than max width or height', 'auto_resize', 16, 'f=configuration.htm&amp;as=admin_picture_thumbnail_auto-resize&amp;ae=admin_picture_thumbnail_auto-resize_end'),
  array('Horizontal padding for full-size pop-up', 'fullsize_padding_x', 0, 'f=configuration.htm&amp;as=admin_picture_thumbnail_fullsize_padding_x&amp;ae=admin_picture_thumbnail_fullsize_padding_x_end'),
  array('Vertical padding for full-size pop-up', 'fullsize_padding_y', 0, 'f=configuration.htm&amp;as=admin_picture_thumbnail_fullsize_padding_y&amp;ae=admin_picture_thumbnail_fullsize_padding_y_end'),
  array('Albums can be private (Note: if you switch from \'yes\' to \'no\' any current private albums will become public)', 'allow_private_albums', 1, 'f=configuration.htm&amp;as=admin_picture_thumb_advanced_private_toggle&amp;ae=admin_picture_thumb_advanced_private_toggle_end'),
  array('Show private album Icon to unlogged user','show_private',1, 'f=configuration.htm&amp;as=admin_picture_thumb_advanced_private_icon_show&amp;ae=admin_picture_thumb_advanced_private_icon_show_end'),
  array('Characters forbidden in filenames', 'forbiden_fname_char',0, 'f=configuration.htm&amp;as=admin_picture_thumb_advanced_filename_forbidden_chars&amp;ae=admin_picture_thumb_advanced_filename_forbidden_chars_end'),
  array('Enable &quot;silly safe mode&quot;', 'silly_safe_mode',1, 'f=configuration.htm&amp;as=admin_picture_thumb_advanced_silly_safe_mode_start&amp;ae=admin_picture_thumb_advanced_silly_safe_mode_end'),
  //array('Accepted file extensions for uploaded pictures', 'allowed_file_extensions',0, 'f=configuration.htm&amp;as=&amp;ae=_end'),
  array('Allowed image types', 'allowed_img_types',0, 'f=configuration.htm&amp;as=admin_picture_thumb_advanced_pic_extensions&amp;ae=admin_picture_thumb_advanced_pic_extensions_end'),
  array('Allowed movie types', 'allowed_mov_types',0, 'f=configuration.htm&amp;as=admin_thumbs_advanced_movie&amp;ae=admin_thumbs_advanced_movie_end'),
  array('Movie Playback Autostart', 'media_autostart',1, 'f=configuration.htm&amp;as=admin_movie_autoplay&amp;ae=admin_movie_autoplay_end'),
  array('Allowed audio types', 'allowed_snd_types',0, 'f=configuration.htm&amp;as=admin_picture_thumb_advanced_audio_extensions&amp;ae=admin_picture_thumb_advanced_audio_extensions_end'),
  array('Allowed document types', 'allowed_doc_types',0, 'f=configuration.htm&amp;as=admin_picture_thumb_advanced_doc_extensions&amp;ae=admin_picture_thumb_advanced_doc_extensions_end'),
  array('Method for resizing images','thumb_method',2, 'f=configuration.htm&amp;as=admin_picture_thumb_advanced_resize_method&amp;ae=admin_picture_thumb_advanced_resize_method_end'),
  array('Path to ImageMagick \'convert\' utility (example /usr/bin/X11/)', 'impath', 0, 'f=configuration.htm&amp;as=admin_picture_thumb_advanced_im_path&amp;ae=admin_picture_thumb_advanced_im_path_end'),
  //array('Allowed image types (only valid for ImageMagick)', 'allowed_img_types',0, 'f=configuration.htm&amp;as=admin_picture_thumb_advanced_allowed_imagetypes&amp;ae=admin_picture_thumb_advanced_allowed_imagetypes_end'),
  array('Command line options for ImageMagick', 'im_options', 0, 'f=configuration.htm&amp;as=admin_picture_thumb_advanced_im_commandline&amp;ae=admin_picture_thumb_advanced_im_commandline_end'),
  array('Read EXIF data in JPEG files', 'read_exif_data', 13, 'f=configuration.htm&amp;as=admin_picture_thumb_advanced_exif&amp;ae=admin_picture_thumb_advanced_exif_end'),
  array('Read IPTC data in JPEG files', 'read_iptc_data', 1, 'f=configuration.htm&amp;as=admin_picture_thumb_advanced_iptc&amp;ae=admin_picture_thumb_advanced_iptc_end'),
  array('The album directory <a href="#notice1" class="clickable_option">*</a>', 'fullpath', 0, 'f=configuration.htm&amp;as=admin_picture_thumb_advanced_albums_dir&amp;ae=admin_picture_thumb_advanced_albums_dir_end'),
  array('The directory for user files <a href="#notice1" class="clickable_option">*</a>', 'userpics', 0, 'f=configuration.htm&amp;as=admin_picture_thumb_advanced_userpics_dir&amp;ae=admin_picture_thumb_advanced_userpics_dir_end'),
  array('The prefix for intermediate pictures <a href="#notice1" class="clickable_option">*</a>', 'normal_pfx', 0, 'f=configuration.htm&amp;as=admin_picture_thumb_advanced_intermediate_prefix&amp;ae=admin_picture_thumb_advanced_intermediate_prefix_end'),
  array('Default mode for directories', 'default_dir_mode', 0, 'f=configuration.htm&amp;as=admin_picture_thumb_advanced_chmod_folder&amp;ae=admin_picture_thumb_advanced_chmod_folder_end'),
  array('Default mode for files', 'default_file_mode', 0, 'f=configuration.htm&amp;as=admin_picture_thumb_advanced_chmod_files&amp;ae=admin_picture_thumb_advanced_chmod_files_end'),


  ######### Watermark ########
  'Image watermarking', // cpg1.5
  array('Watermark Image', 'enable_watermark', 1), // cpg1.5
  array('Watermark custom thumbs (movie, audio, document)', 'enable_thumb_watermark', 1), // cpg1.5
  array('Where to place the watermark', 'where_put_watermark', 20), // cpg1.5
  array('Which files to watermark', 'which_files_to_watermark', 21), // cpg1.5
  array('Which file to use for watermark', 'watermark_file', 0), // cpg1.5
  array('Transparency 0-100 for entire image', 'watermark_transparency', 0), // cpg1.5
  array('Downsize watermark if width of an picture is smaller than entered value. That is the 100% reference point. Resizing of the watermark is linear (0 to disable)', 'reduce_watermark', 0), // cpg1.5
  array('Set color transparent x (GD2 only)', 'watermark_transparency_featherx', 0), // cpg1.5
  array('Set color transparent y (GD2 only)', 'watermark_transparency_feathery', 0), // cpg1.5
  ############################

  'Registration', // cpg1.5.x
  array('Allow new user registrations', 'allow_user_registration', 1, 'f=configuration.htm&amp;as=admin_allow_registration&amp;ae=admin_allow_registration_end'),
  array('Global password for registration', 'global_registration_pw', 0, 'f=configuration.htm&amp;as=admin_global_registration_pw&amp;ae=admin_global_registration_pw_end'),
  array('Display disclaimer on user registration', 'user_registration_disclaimer', 18, 'f=configuration.htm&amp;as=admin_user_registration_disclaimer&amp;ae=admin_user_registration_disclaimer_end'), // cpg1.5
  array('Display Captcha (Visual Confirmation) on registration page', 'registration_captcha', 1, 'f=configuration.htm&amp;as=admin_registration_captcha_start&amp;ae=admin_registration_captcha_end'), // cpg1.5.x
  array('User registration requires email verification', 'reg_requires_valid_email', 1, 'f=configuration.htm&amp;as=admin_registration_verify&amp;ae=admin_registration_verify_end'),
  array('Notify admin of user registration by email', 'reg_notify_admin_email', 1, 'f=configuration.htm&amp;as=admin_registration_notify&amp;ae=admin_registration_notify_end'),
  array('Admin activation of registrations', 'admin_activation', 1, 'f=configuration.htm&amp;as=admin_activation&amp;ae=admin_activation_end'),
  array('Create user album in personal gallery on registration', 'personal_album_on_registration', 1, 'f=configuration.htm&amp;as=admin_personal_album_on_registration&amp;ae=admin_personal_album_on_registration_end'), // cpg1.5.x

  'User settings',
  array('Allow unlogged users (guest or anonymous) access', 'allow_unlogged_access', 1, 'f=configuration.htm&amp;as=admin_allow_unlogged_access&amp;ae=admin_allow_unlogged_access_end'),
  array('Allow two users to have the same email address', 'allow_duplicate_emails_addr', 1, 'f=configuration.htm&amp;as=admin_allow_duplicate_emails_addr&amp;ae=admin_allow_duplicate_emails_addr_end'),
  array('Notify admin of user upload awaiting approval', 'upl_notify_admin_email', 1, 'f=configuration.htm&amp;as=admin_approval_notify&amp;ae=admin_approval_notify_end'),
  array('Allow logged in users to view memberlist', 'allow_memberlist', 1, 'f=configuration.htm&amp;as=admin_user_memberlist&amp;ae=admin_user_memberlist_end'),
  array('Allow users to change their email address in profile', 'allow_email_change', 1, 'f=configuration.htm&amp;as=admin_user_allow_email_change&amp;ae=admin_user_allow_email_change_end'),

  array('Allow users to delete their own user account', 'allow_user_account_delete', 1, 'f=configuration.htm&amp;as=admin_user_allow_account_delete&amp;ae=admin_user_allow_account_delete_end'), // cpg1.5.x

  array('Allow users to retain control over their pics in public galleries', 'users_can_edit_pics', 1, 'f=configuration.htm&amp;as=admin_user_editpics_public_start&amp;ae=admin_user_editpics_public_end'),
  array('Number of failed login attempts until temporary ban (to avoid brute force attacks)', 'login_threshold', 0, 'f=configuration.htm&amp;as=admin_user_login_start&amp;ae=admin_user_login_end'),
  array('Duration of a temporary ban after failed logins', 'login_expiry', 0, 'f=configuration.htm&amp;as=admin_user_login_start&amp;ae=admin_user_login_end'),
  array('Enable Report to Admin', 'report_post', 1, 'f=configuration.htm&amp;as=admin_user_enable_report&amp;ae=admin_user_enable_report_end'),

// custom profile fields,
  'Custom fields for user profile (leave blank if unused).
  Use Profile 6 for long entries, such as biographies',
  array('Profile 1 name', 'user_profile1_name', 0, 'f=configuration.htm&amp;as=admin_custom&amp;ae=admin_custom_end'),
  array('Profile 2 name', 'user_profile2_name', 0),
  array('Profile 3 name', 'user_profile3_name', 0),
  array('Profile 4 name', 'user_profile4_name', 0),
  array('Profile 5 name', 'user_profile5_name', 0),
  array('Profile 6 name', 'user_profile6_name', 0),

  'Custom fields for image description (leave blank if unused)',
  array('Field 1 name', 'user_field1_name', 0, 'f=configuration.htm&amp;as=admin_custom_image&amp;ae=admin_custom_image_end'),
  array('Field 2 name', 'user_field2_name', 0),
  array('Field 3 name', 'user_field3_name', 0),
  array('Field 4 name', 'user_field4_name', 0),

  'Cookies settings',
  array('Cookie name', 'cookie_name', 0, 'f=configuration.htm&amp;as=admin_cookie_name&amp;ae=admin_cookie_name_end'),
  array('Cookie path', 'cookie_path', 0, 'f=configuration.htm&amp;as=admin_cookie_path&amp;ae=admin_cookie_path_end'),

  'Email settings  (usually nothing has to be changed here; leave all fields blank when not sure)',
  array('SMTP Host (when left blank, sendmail will be used)', 'smtp_host', 0, 'f=configuration.htm&amp;as=admin_email&amp;ae=admin_email_end'),
  array('SMTP Username', 'smtp_username', 0),
  array('SMTP Password', 'smtp_password', 0),

  'Logging and statistics',
  array('Logging mode <a href="#notice3" class="clickable_option">***</a>', 'log_mode', 11, 'f=configuration.htm&amp;as=admin_logging_log_mode&amp;ae=admin_logging_log_mode_end'),
  array('Log ecards', 'log_ecards', 1, 'f=configuration.htm&amp;as=admin_general_log_ecards&amp;ae=admin_general_log_ecards_end'),
  array('Keep detailed vote statistics','vote_details',1, 'f=configuration.htm&amp;as=admin_logging_votedetails&amp;ae=admin_logging_votedetails_end'),
  array('Keep detailed hit statistics','hit_details',1, 'f=configuration.htm&amp;as=admin_logging_hitdetails&amp;ae=admin_logging_hitdetails_end'),
  array('Display statistics on index page','display_stats_on_index',1, 'f=configuration.htm&amp;as=admin_logging_display_stats_on_index&amp;ae=admin_logging_display_stats_on_index_end'), // cpg1.5.x

  'Maintenance settings',
  array('Enable debug mode', 'debug_mode', 9, 'f=configuration.htm&amp;as=debug_mode&amp;ae=debug_mode_end'),
  array('Display notices in debug mode', 'debug_notice', 1, 'f=configuration.htm&amp;as=admin_misc_debug_notices&amp;ae=admin_misc_debug_notices_end'),
  array('Gallery is offline', 'offline', 1, 'f=configuration.htm&amp;as=admin_general_offline&amp;ae=admin_general_offline_end'),
);


// ------------------------------------------------------------------------- //
// File db_ecard.php
// ------------------------------------------------------------------------- //

if (defined('DB_ECARD_PHP')) $lang_db_ecard_php = array(
  'title' => 'Sent ecards',
  'ecard_sender' => 'Sender',
  'ecard_recipient' => 'Recipient',
  'ecard_date' => 'Date',
  'ecard_display' => 'Display ecard',
  'ecard_name' => 'Name',
  'ecard_email' => 'Email',
  'ecard_ip' => 'IP #',
  'ecard_ascending' => 'ascending',
  'ecard_descending' => 'descending',
  'ecard_sorted' => 'Sorted',
  'ecard_by_date' => 'by date',
  'ecard_by_sender_name' => 'by sender\'s name',
  'ecard_by_sender_email' => 'by sender\'s email',
  'ecard_by_sender_ip' => 'by sender\'s IP address',
  'ecard_by_recipient_name' => 'by recipient\'s name',
  'ecard_by_recipient_email' => 'by recipient\'s email',
  'ecard_number' => 'displaying record %s to %s of %s',
  'ecard_goto_page' => 'go to page',
  'ecard_records_per_page' => 'Records per page',
  'check_all' => 'Check All',
  'uncheck_all' => 'Uncheck All',
  'ecards_delete_selected' => 'Delete selected ecards',
  'ecards_delete_confirm' => 'Are you sure you want to delete the records? Tick the checkbox!',
  'ecards_delete_sure' => 'I\'m sure',
);


// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
  'empty_name_or_com' => 'You need to type your name and a comment',
  'com_added' => 'Your comment was added',
  'alb_need_title' => 'You have to provide a title for the album !',
  'no_udp_needed' => 'No update needed.',
  'alb_updated' => 'The album was updated',
  'unknown_album' => 'Selected album does not exist or you don\'t have permission to upload in this album',
  'no_pic_uploaded' => 'No file was uploaded !<br /><br />If you have really selected a file to upload, check that the server allows file uploads...',
  'err_mkdir' => 'Failed to create directory %s !',
  'dest_dir_ro' => 'Destination directory %s is not writable by the script !',
  'err_move' => 'Impossible to move %s to %s !',
  'err_fsize_too_large' => 'The size of file you have uploaded is too large (maximum allowed is %s x %s) !', //obsolete since cpg1.3 - consider removal in cpg1.4 once upload.php has been overhauled
  'err_imgsize_too_large' => 'The size of the file you have uploaded is too large (maximum allowed is %s KB) !', //obsolete since cpg1.3 - consider removal in cpg1.4 once upload.php has been overhauled
  'err_invalid_img' => 'The file you have uploaded is not a valid image !',
  'allowed_img_types' => 'You can only upload %s images.',
  'err_insert_pic' => 'The file \'%s\' can\'t be inserted in the album ',
  'upload_success' => 'Your file was uploaded successfully.<br /><br />It will be visible after admin approval.',
  'notify_admin_email_subject' => '%s - Upload notification',
  'notify_admin_email_body' => 'A picture has been uploaded by %s that needs your approval. Visit %s',
  'info' => 'Information',
  'com_added' => 'Comment added',
  'alb_updated' => 'Album updated',
  'err_comment_empty' => 'Your comment is empty !',
  'err_invalid_fext' => 'Only files with the following extensions are accepted : <br /><br />%s.',
  'no_flood' => 'Sorry but you are already the author of the last comment posted for this file<br /><br />Edit the comment you have posted if you want to modify it',
  'redirect_msg' => 'You are being redirected.<br /><br /><br />Click \'CONTINUE\' if the page does not refresh automatically',
  'upl_success' => 'Your file was successfully added',
  'email_comment_subject' => 'Comment posted on Coppermine Photo Gallery',
  'email_comment_body' => 'Someone has posted a comment on your gallery. See it at',
  'album_not_selected' => 'Album not selected',
  'com_author_error' => 'A registered user is using this nickname, login or use another one',
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
  'orig_pic' => 'original image', // cpg1.5
  'fs_pic' => 'full size image',
  'del_success' => 'successfully deleted',
  'ns_pic' => 'normal size image',
  'err_del' => 'can\'t be deleted',
  'thumb_pic' => 'thumbnail',
  'comment' => 'comment',
  'im_in_alb' => 'image in album',
  'alb_del_success' => 'Album &laquo;%s&raquo; deleted',
  'alb_mgr' => 'Album Manager',
  'err_invalid_data' => 'Invalid data received in \'%s\'',
  'create_alb' => 'Creating album \'%s\'',
  'update_alb' => 'Updating album \'%s\' with title \'%s\' and index \'%s\'',
  'del_pic' => 'Delete file',
  'del_alb' => 'Delete album',
  'del_user' => 'Delete user',
  'err_unknown_user' => 'The selected user does not exist !',
  'err_empty_groups' => 'There\'s no group table, or the group table is empty!',
  'comment_deleted' => 'Comment was succesfully deleted',
  'npic' => 'Picture',
  'pic_mgr' => 'Picture Manager',
  'update_pic' => 'Updating picture \'%s\' with filename \'%s\' and index \'%s\'',
  'username' => 'Username',
  'anonymized_comments' => '%s comment(s) anonymized',
  'anonymized_uploads' => '%s public upload(s) anonymized',
  'deleted_comments' => '%s comment(s) deleted',
  'deleted_uploads' => '%s public upload(s) deleted',
  'user_deleted' => 'user %s deleted',
  'activate_user' => 'Activate user',
  'user_already_active' => 'Account has already been active',
  'activated' => 'Activated',
  'deactivate_user' => 'Deactivate user',
  'user_already_inactive' => 'Account has already been inactive',
  'deactivated' => 'Deactivated',
  'reset_password' => 'Reset password(s)',
  'password_reset' => 'Password reset to %s',
  'change_group' => 'Change primary group',
  'change_group_to_group' => 'Changing from %s to %s',
  'add_group' => 'Add secondary group',
  'add_group_to_group' => 'Adding user %s to group %s. He\'s now member of %s as primary and of %s as secondary membergroup(s).',
  'status' => 'Status',
);

// ------------------------------------------------------------------------- //
// File displayecard.php
// ------------------------------------------------------------------------- //

if (defined('DISPLAYECARD_PHP')) {

$lang_displayecard_php = array(
  'invalid_data' => 'The data for the ecard you are trying to access has been corrupted by your mail client. Check the link is complete.',
);
}

// ------------------------------------------------------------------------- //
// File displayimage.php
// ------------------------------------------------------------------------- //

if (defined('DISPLAYIMAGE_PHP')){

$lang_display_image_php = array(
  'confirm_del' => 'Are you sure you want to DELETE this file ? \\nComments will also be deleted.', //js-alert
  'del_pic' => 'DELETE THIS FILE',
  'size' => '%s x %s pixels',
  'views' => '%s times',
  'slideshow' => 'Slideshow',
  'stop_slideshow' => 'STOP SLIDESHOW',
  'view_fs' => 'Click to view full size image',
  'edit_pic' => 'Edit file information',
  'crop_pic' => 'Crop and Rotate',
  'set_player' => 'Change player',
);

$lang_picinfo = array(
  'title' =>'File information',
  'Album name' => 'Album name',
  'Rating' => 'Rating (%s votes)',
  'Date Added' => 'Date added',
  'Dimensions' => 'Dimensions',
  'Displayed' => 'Displayed',
  'URL' => 'URL',
  'Make' => 'Make',
  'Model' => 'Model',
  'DateTime' => 'Date Time',
  'ISOSpeedRatings'=>'ISO',
  'MaxApertureValue' => 'Max Aperture',
  'FocalLength' => 'Focal length',
  'Comment' => 'Comment',
  'addFav'=>'Add to Favorites',
  'addFavPhrase'=>'Favorites',
  'remFav'=>'Remove from Favorites',
  'iptcTitle'=>'IPTC Title',
  'iptcCopyright'=>'IPTC Copyright',
  'iptcKeywords'=>'IPTC Keywords',
  'iptcCategory'=>'IPTC Category',
  'iptcSubCategories'=>'IPTC Sub Categories',
  'ColorSpace' => 'Color Space',
  'ExposureProgram' => 'Exposure Program',
  'Flash' => 'Flash',
  'MeteringMode' => 'Metering Mode',
  'ExposureTime' => 'Exposure Time',
  'ExposureBiasValue' => 'Exposure Bias',
  'ImageDescription' => ' Image Description',
  'Orientation' => 'Orientation',
  'xResolution' => 'X Resolution',
  'yResolution' => 'Y Resolution',
  'ResolutionUnit' => 'Resolution Unit',
  'Software' => 'Software',
  'YCbCrPositioning' => 'YCbCrPositioning',
  'ExifOffset' => 'Exif Offset',
  'IFD1Offset' => 'IFD1 Offset',
  'FNumber' => 'FNumber',
  'ExifVersion' => 'Exif Version',
  'DateTimeOriginal' => 'DateTime Original',
  'DateTimedigitized' => 'DateTime digitized',
  'ComponentsConfiguration' => 'Components Configuration',
  'CompressedBitsPerPixel' => 'Compressed Bits Per Pixel',
  'LightSource' => 'Light Source',
  'ISOSetting' => 'ISO Setting',
  'ColorMode' => 'Color Mode',
  'Quality' => 'Quality',
  'ImageSharpening' => 'Image Sharpening',
  'FocusMode' => 'Focus Mode',
  'FlashSetting' => 'Flash Setting',
  'ISOSelection' => 'ISO Selection',
  'ImageAdjustment' => 'Image Adjustment',
  'Adapter' => 'Adapter',
  'ManualFocusDistance' => 'Manual Focus Distance',
  'DigitalZoom' => 'Digital Zoom',
  'AFFocusPosition' => 'AF Focus Position',
  'Saturation' => 'Saturation',
  'NoiseReduction' => 'Noise Reduction',
  'FlashPixVersion' => 'Flash Pix Version',
  'ExifImageWidth' => 'Exif Image Width',
  'ExifImageHeight' => 'Exif Image Height',
  'ExifInteroperabilityOffset' => 'Exif Interoperability Offset',
  'FileSource' => 'File Source',
  'SceneType' => 'Scene Type',
  'CustomerRender' => 'Customer Render',
  'ExposureMode' => 'Exposure Mode',
  'WhiteBalance' => 'White Balance',
  'DigitalZoomRatio' => 'Digital Zoom Ratio',
  'SceneCaptureMode' => 'Scene Capture Mode',
  'GainControl' => 'Gain Control',
  'Contrast' => 'Contrast',
  'Sharpness' => 'Sharpness',
  'ManageExifDisplay' => 'Manage Exif Display',
  'submit' => 'Submit',
  'success' => 'Information updated successfully.',
  'show_details' => 'Show details', // cpg1.5.x
  'hide_details' => 'Hide details', // cpg1.5.x
  'download_URL' => 'Direct Link',
  'movie_player' => 'Play the file in your standard application',

);

$lang_display_comments = array(
  'OK' => 'OK',
  'edit_title' => 'Edit this comment',
  'delete_title' => 'Delete this comment', // cpg1.5.x
  'confirm_delete' => 'Are you sure you want to delete this comment ?', //js-alert
  'add_your_comment' => 'Add your comment',
  'name'=>'Name',
  'comment'=>'Comment',
  'your_name' => 'Anon',
  'report_comment_title' => 'Report this comment to the administrator',
  'pending_approval' => 'Comment will be visible after admin approval', // cpg1.5.x
  'unapproved_comment' => 'Unapproved comment', // cpg1.5.x
  'pending_approval_message' => 'Someone has posted a comment here. It will be visible after admin approval.', // cpg1.5.x
  'approve' => 'Approve comment', // cpg1.5.x
  'disapprove' => 'Disapprove comment', // cpg1.5.x
  'log_in_to_comment' => 'Anonymous comments are not allowed here. %sLog in%s to post your comment', // cpg1.5.x // do not translate the %s placeholders - they will be used as wrappers for the link (<a>)
);

$lang_fullsize_popup = array(
  'click_to_close' => 'Click image to close this window',
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
  'title' => 'Send an e-card',
  'invalid_email' => 'Warning: invalid email address:', // cpg1.5.x
  'ecard_title' => 'An e-card from %s for you',
  'error_not_image' => 'Only images can be sent as an ecard.', // cpg1.5.x
  'error_not_image_flash' => 'Only images and flash files can be sent as an ecard.', // cpg1.5.x
  'view_ecard' => 'Alternate link if the e-card does not display correctly',
  'view_ecard_plaintext' => 'To view the ecard, copy and paste this url into your browser\'s address bar:',
  'view_more_pics' => 'View more pictures !',
  'send_success' => 'Your ecard was sent',
  'send_failed' => 'Sorry but the server can\'t send your e-card...',
  'from' => 'From',
  'your_name' => 'Your name',
  'your_email' => 'Your email address',
  'to' => 'To',
  'rcpt_name' => 'Recipient name',
  'rcpt_email' => 'Recipient email address',
  'greetings' => 'Heading',
  'message' => 'Message',
  'ecards_footer' => 'Sent by %s from IP %s at %s (Gallery time)',
  'preview' => 'Preview of the ecard',
  'preview_button' => 'Preview',
  'submit_button' => 'Send ecard',
  'preview_view_ecard' => 'This will be the alternate link to the ecard once it gets generated. It won\'t work for previews.',
);

// ------------------------------------------------------------------------- //
// File report_file.php
// ------------------------------------------------------------------------- //

if (defined('REPORT_FILE_PHP') || defined('DISPLAYREPORT_PHP')) $lang_report_php =array(
  'title' => 'Report to administrator',
  'invalid_email' => '<b>Warning</b> : invalid email address !',
  'report_subject' => 'A report from %s on a gallery %s',
  'view_report' => 'Alternate link if the report does not display correctly',
  'view_report_plaintext' => 'To view the report, copy and paste this url into your browser\'s address bar:',
  'view_more_pics' => 'Gallery',
  'send_success' => 'Your report was sent',
  'send_failed' => 'Sorry but the server can\'t send your report...',
  'from' => 'From',
  'your_name' => 'Your name',
  'your_email' => 'Your email address',
  'to' => 'To',
  'administrator' => 'Administrator/Mod',
  'subject' => 'Subject',
  'comment_field_name' => 'Reporting on Comment by "%s"',
  'reason' => 'Reason',
  'message' => 'Message',
  'report_footer' => 'Sent by %s from IP %s at %s (Gallery time)',
  'obscene' => 'obscene',
  'offensive' => 'offensive',
  'misplaced' => 'off-topic/misplaced',
  'missing' => 'missing',
  'issue' => 'error/cannot view',
  'other' => 'other',
  'refers_to' => 'File report refers to',
  'reasons_list_heading' => 'reason(s) for report:',
  'no_reason_given' => 'no reason was given',
  'go_comment' => 'Go to comment',
  'view_comment' => 'View full report with comment',
  'type_file' => 'file',
  'type_comment' => 'comment',
  'invalid_data' => 'The data for the report you are trying to access has been corrupted by your mail client. Check the link is complete.',
);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
  'pic_info' => 'File info',
  'desc' => 'Description',
  'approval' => 'Approval', //cpg 1.5
  'approved' => 'Approved', //cpg 1.5
  'disapproved' => 'Disapproved', //cpg 1.5
  'new_keyword' => 'New keyword',
  'new_keywords' => 'New keywords found',
  'existing_keyword' => 'Existing keyword',
  'pic_info_str' => '%s &times; %s - %s KB - %s views - %s votes',
  'approve' => 'Approve file',
  'postpone_app' => 'Postpone approval',
  'del_pic' => 'Delete file',
  'del_all' => 'Delete ALL files',
  'read_exif' => 'Read EXIF info again',
  'reset_view_count' => 'Reset view counter',
  'reset_all_view_count' => 'Reset ALL view counters',
  'reset_votes' => 'Reset votes',
  'reset_all_votes' => 'Reset ALL votes',
  'del_comm' => 'Delete comments',
  'del_all_comm' => 'Delete ALL comments',
  'upl_approval' => 'Upload approval',
  'edit_pics' => 'Edit files',
  'see_next' => 'See next files',
  'see_prev' => 'See previous files',
  'n_pic' => '%s files',
  'n_of_pic_to_disp' => 'Number of files to display',
  'apply' => 'Apply modifications',
  'crop_title' => 'Coppermine Picture Editor',
  'preview' => 'Preview',
  'save' => 'Save picture',
  'save_thumb' =>'Save as thumbnail',
  'gallery_icon' => 'Make this my icon',
  'sel_on_img' =>'The selection has to be entirely on the image!', //js-alert
  'album_properties' =>'Album properties',
  'parent_category' =>'Parent category',
  'thumbnail_view' =>'Thumbnail view',
  'select_unselect' =>'select/unselect all',
  'file_exists' => "Destination file '%s' already exists.",
  'rename_failed' => "Failed to rename '%s' to '%s'.",
  'src_file_missing' => "Source file '%s' is missing.",
  'mime_conv' => "Cannot convert file from '%s' to '%s'",
  'forb_ext' => 'Forbidden file extension.',
  'error_editor_class' => 'Editor class for your resize method not implemented', //cpg 1.5
  'error_document_size' => 'Document has no width or height', //cpg 1.5  //js-alert
  'success_picture' => 'Picture successfully saved - you can %sclose%s this window now', //cpg 1.5 // do not translate "%s" here
  'success_thumb' => 'Thumbnail successfully saved - you can %sclose%s this window now', //cpg 1.5 // do not translate "%s" here
  'rotate' => 'Rotate', //cpg 1.5
  'mirror' => 'Mirror', //cpg 1.5
  'scale' => 'Scale', //cpg 1.5
  'new_width' => 'New width', //cpg 1.5
  'new_height' => 'New height', //cpg 1.5
  'enable_clipping' => 'Enable clipping, apply to crop', //cpg 1.5
  'jpeg_quality' => 'JPEG Output Quality', //cpg 1.5
  'or' => 'OR', //cpg 1.5
  'approve_pic' => 'Approve file', //cpg 1.5
  'approve_all' => 'Approve ALL files', //cpg 1.5
);

// ------------------------------------------------------------------------- //
// File faq.php
// ------------------------------------------------------------------------- //

if (defined('FAQ_PHP')) $lang_faq_php = array(
  'faq' => 'Frequently Asked Questions',
  'toc' => 'Table of contents',
  'question' => 'Question: ',
  'answer' => 'Answer: ',
);

if (defined('FAQ_PHP')) $lang_faq_data = array(
  'General FAQ',
  array('Why do I need to register?', 'Registration may or may not be required by the administrator. Registration gives a member additional features such as uploading, having a favorite list, rating pictures and posting comments etc.', 'allow_user_registration', '1'),
  array('How do I register?', 'Go to &quot;Register&quot; and fill out the required fields (and the optional ones if you want to).<br />If the Administrator has Email Activation enabled, then after submitting your information you should recieve an email message at the address that you have submitted while registering, giving you instructions on how to activate your membership. Your membership must be activated in order for you to login.', 'allow_user_registration', '1'),
  array('How Do I login?', 'Go to &quot;Login&quot;, submit your username and password and check &quot;Remember Me&quot; so you will be logged in on the site if you should leave it.<br /><b>IMPORTANT:Cookies must be enabled and the cookie from this site must not be deleted in order to use &quot;Remember Me&quot;.</b>', 'offline', 0),
  array('Why can I not login?', 'Did you register and click the link that was sent to you via email?. The link will activate your account. For other login problems contact the site administrator.', 'offline', 0),
  array('What if I forgot my password?', 'If this site has a &quot;Forgot password&quot; link then use it. Other than that contact the site administrator for a new password.', 'offline', 0),
  //array('What if I changed my email address?', 'Just simply login and change your email address through &quot;Profile&quot;', 'offline', 0),
  array('How do I save a picture to &quot;My Favorites&quot;?', 'Click on a picture and click on the &quot;picture info&quot; link (<img src="images/info.gif" width="16" height="16" border="0" alt="Picture information" />); scroll down to the picture information set and click &quot;Add to fav&quot;.<br />The administrator may have the &quot;picture information&quot; on by default.<br />IMPORTANT:Cookies must be enabled and the cookie from this site must not be deleted.', 'offline', 0),
  array('How do I rate a file?', 'Click on a thumbnail and go to the bottom and choose a rating.', 'offline', 0),
  array('How do I post a comment for a picture?', 'Click on a thumbnail and go to the bottom and post a comment.', 'offline', 0),
  array('How do I upload a file?', 'Go to &quot;Upload&quot;and select the album that you want to upload to. Click &quot;Browse,&quot; find the file to upload, and click &quot;open.&quot; Add a title and description if you want. Click &quot;Submit&quot;.<br /><br />Alternatively, for those users using <b>Windows XP</b>, you can upload multiple files directly to your own private albums using the XP Publishing wizard.<br />For instructions on how, and to get the required registry file, click <a href="xp_publish.php">here.</a>', 'allow_private_albums', 1),
  array('Where do I upload a picture to?', 'You will be able to upload a file to one of your albums in &quot;My Gallery&quot;. The Administrator may also allow you to upload a file to one or more of the albums in the Main Gallery.', 'allow_private_albums', 0),
  array('What type and size of a file can I upload?', 'The size and type (jpg, png, etc.) is up to the administrator.', 'offline', 0),
  array('How do I create, rename or delete an album in &quot;My Gallery&quot;?', 'You should already be in &quot;Admin-Mode&quot;<br />Go to &quot;Create/Order My Albums&quot;and click &quot;New&quot;. Change &quot;New Album&quot; to your desired name.<br />You can also rename any of the albums in your gallery.<br />Click &quot;Apply Modifications&quot;.', 'allow_private_albums', 0),
  array('How can I modify and restrict users from viewing my albums?', 'You should already have &quot;admin controls&quot; turned on<br />Go to &quot;Modify My Albums. On the &quot;Update Album&quot; bar, select the album that you want to modify.<br />Here, you can change the name, description, thumbnail picture, restrict viewing and comment/rating permissions.<br />Click &quot;Update Album&quot;.', 'allow_private_albums', 0),
  array('How can I view other users\' galleries?', 'Go to &quot;Album List&quot; and select &quot;User Galleries&quot;.', 'allow_private_albums', 0),
  array('What are cookies?', 'Cookies are a plain text piece of data that is sent from a website and is put on to your computer.<br />Cookies usually allow a user to leave and return to the site without having to login again and other various chores.', 'offline', 0),
  array('Where can I get this program for my site?', 'Coppermine is a free Multimedia Gallery, released under GNU GPL. It is full of features and has been ported to various platforms. Visit the <a href="http://coppermine.sf.net/">Coppermine Home Page</a> to find out more or download it.', 'offline', 0),

  'Navigating the Site',
  array('What\'s &quot;Album List&quot;?', 'This will show you the entire category you are currently in, with a link to each album. If you are not in a category, it will show you the entire gallery with a link to each category. Thumbnails may be a link to the category.', 'offline', 0),
  array('What\'s &quot;My Gallery&quot;?', 'This feature lets users create their own galleries and add, delete or modify albums as well as upload to them.', 'allow_private_albums', 1),
  array('What\'s &quot;Upload Picture&quot;?', 'This feature allows a user to upload a file (size and type is set by the site administrator) to a gallery selected by either you or the administrator.', 'allow_private_albums', 0),
  array('What\'s &quot;Last Uploads&quot;?', 'This feature shows the last uploads to the site.', 'offline', 0),
  array('What\'s &quot;Last Comments&quot;?', 'This feature shows the last comments along with the files posted by users.', 'offline', 0),
  array('What\'s &quot;Most Viewed&quot;?', 'This feature shows the most viewed files by all users (whether logged in or not).', 'offline', 0),
  array('What\'s &quot;Top Rated&quot;?', 'This feature shows the top rated files rated by the users, showing the average rating (e.g: five users each gave a <img src="images/rating3.gif" width="65" height="14" border="0" alt="" />: the file would have an average rating of <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> ;Five users rated the file from 1 to 5 (1,2,3,4,5) would result in an average <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> .)<br />The ratings go from <img src="images/rating5.gif" width="65" height="14" border="0" alt="best" /> (best) to <img src="images/rating0.gif" width="65" height="14" border="0" alt="worst" /> (worst).', 'offline', 0),
  array('What\'s &quot;My Favorites&quot;?', 'This feature will let a user store a favorite file in the cookie that was sent to your computer.', 'offline', 0),
);


// ------------------------------------------------------------------------- //
// File forgot_passwd.php
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) $lang_forgot_passwd_php = array(
  'forgot_passwd' => 'Password reminder',
  'err_already_logged_in' => 'You are already logged in !',
  'enter_email' => 'Enter your email address',
  'submit' => 'go',
  'illegal_session' => 'Forgot password session invalid or has expired.',
  'failed_sending_email' => 'The password reminder email can\'t be sent !',
  'email_sent' => 'An email with your username and new password was sent to %s',
  'verify_email_sent' => 'An email has been sent to %s. Please check your email to complete the process.',
  'err_unk_user' => 'Selected user does not exist!',
  'account_verify_subject' => '%s - New password request',
  'account_verify_body' => 'You have requested a new password. If you would like to proceed with having a new password sent to you, click on the following link:

%s',
  'passwd_reset_subject' => '%s - Your New Password',
  'passwd_reset_body' => 'Here is the new password you requested:
Username: %s
Password: %s
Click %s to log in.',
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
  'group_name' => 'Group',
  'permissions' => 'Permissions',
  'public_albums' => 'Public albums upload',
  'personal_gallery' => 'Personal gallery',
  'upload_method' => 'Upload method',
  'disk_quota' => 'Quota',
  'rating' => 'Rating',
  'ecards' => 'Ecards',
  'comments' => 'Comments',
  'allowed' => 'Allowed',
  'approval' => 'Approval',
  'boxes_number' => 'No. of boxes',
  'variable' => 'variable',
  'fixed' => 'fixed',
  'apply' => 'Apply modifications',
  'create_new_group' => 'Create new group',
  'del_groups' => 'Delete selected group(s)',
  'confirm_del' => 'Warning, when you delete a group, users that belong to this group will be transferred to the \'Registered\' group !\n\nDo you want to proceed ?', //js-alert
  'title' => 'Manage user groups',
  'num_file_upload' => 'File upload boxes',
  'num_URI_upload' => 'URI upload boxes',
  'reset_to_default' => 'Reset to default name (%s) - recommended!',
  'error_group_empty' => 'Group table was empty !<br /><br />Default groups created, please reload this page',
  'explain_greyed_out_title' => 'Why is this row greyed out?',
  'explain_guests_greyed_out_text' => 'You can not change the properties of this group because you set the option &quot; Allow unlogged users (guest or anonymous) access&quot; to &quot;No&quot; on the config page. All guest (members of the group %s) can\'t do anything but login; therefor group settings don\'t apply for them.',
  'explain_banned_greyed_out_text' => 'You can not change the properties of the group %s because it\'s members can\'t do anything anyway.',
  'group_assigned_album' => 'assigned album(s)',
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
  'welcome' => 'Welcome !',
);

$lang_album_admin_menu = array(
  'confirm_delete' => 'Are you sure you want to DELETE this album ? \\nAll files and comments will also be deleted.', //js-alert
  'delete' => 'DELETE',
  'modify' => 'PROPERTIES',
  'edit_pics' => 'EDIT FILES',
);

$lang_list_categories = array(
  'home' => 'Home',
  'stat1' => '<b>[pictures]</b> files in <b>[albums]</b> albums and <b>[cat]</b> categories with <b>[comments]</b> comments viewed <b>[views]</b> times',
  'stat2' => '<b>[pictures]</b> files in <b>[albums]</b> albums viewed <b>[views]</b> times',
  'xx_s_gallery' => '%s\'s Gallery',
  'stat3' => '<b>[pictures]</b> files in <b>[albums]</b> albums with <b>[comments]</b> comments viewed <b>[views]</b> times',
);

$lang_list_users = array(
  'user_list' => 'User list',
  'no_user_gal' => 'There are no user galleries',
  'n_albums' => '%s album(s)',
  'n_pics' => '%s file(s)',
);

$lang_list_albums = array(
  'n_pictures' => '%s files',
  'last_added' => ', last one added on %s',
  'n_link_pictures' => '%s linked files',
  'total_pictures' => '%s files total',
  'alb_hits' => 'Album viewed %s times', // cpg1.5.x
);

}

// ------------------------------------------------------------------------- //
// File keywordmgr.php
// ------------------------------------------------------------------------- //

if (defined('KEYWORDMGR_PHP')) $lang_keywordmgr_php = array(
  'title' => 'Manage keywords',
  'edit' => 'edit',
  'delete' => 'delete',
  'search' => 'search',
  'keyword_test_search' => 'search for %s in new window',
  'keyword_del' => 'delete the keyword %s',
  'confirm_delete' => 'Are you sure you want to delete the keyword %s from the whole gallery?',  // js-alert
  'change_keyword' => 'change keyword',
);

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
  'login' => 'Login',
  'enter_login_pswd' => 'Enter your username and password to login',
  'username' => 'Username',
  'password' => 'Password',
  'remember_me' => 'Remember me',
  'welcome' => 'Welcome %s ...',
  'err_login' => '*** Couldn\'t log in. Try again ***',
  'err_already_logged_in' => 'You are already logged in !',
  'forgot_password_link' => 'I forgot my password',
  'cookie_warning' => 'Warning your browser does not accept script\'s cookies',
  'send_activation_link' => 'Missed activation link?',
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
  'logout' => 'Logout',
  'bye' => 'Bye bye %s ...',
  'err_not_loged_in' => 'You are not logged in !',
);

// ------------------------------------------------------------------------- //
// File minibrowser.php
// ------------------------------------------------------------------------- //

if (defined('MINIBROWSER_PHP')) $lang_minibrowser_php = array(
  'submit' => 'OK',
  'up' => 'up one level',
  'current_path' => 'current path',
  'select_directory' => 'please select a directory',
  'click_to_close' => 'Click image to close this window',
);

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
  'upd_alb_n' => 'Update album %s',
  'general_settings' => 'General settings',
  'alb_title' => 'Album title',
  'alb_cat' => 'Album category',
  'alb_desc' => 'Album description',
  'alb_keyword' => 'Album Keyword',
  'alb_thumb' => 'Album thumbnail',
  'alb_perm' => 'Permissions for this album',
  'can_view' => 'Album can be viewed by',
  'can_upload' => 'Visitors can upload files',
  'can_post_comments' => 'Visitors can post comments',
  'can_rate' => 'Visitors can rate files',
  'user_gal' => 'User Gallery',
  'no_cat' => '* No category *',
  'alb_empty' => 'Album is empty',
  'last_uploaded' => 'Last uploaded',
  'public_alb' => 'Everybody (public album)',
  'me_only' => 'Me only',
  'owner_only' => 'Album owner (%s) only',
  'groupp_only' => 'Members of the \'%s\' group',
  'err_no_alb_to_modify' => 'No album you can modify in the database.',
  'update' => 'Update album',
  'reset_album' => 'Reset album',
  'reset_views' => 'Reset views counter to &quot;0&quot; in %s',
  'reset_rating' => 'Reset ratings on all files in %s',
  'delete_comments' => 'Delete all comments made in %s',
  'delete_files' => '%sIrreversibly%s delete all files in %s',
  'views' => 'views',
  'votes' => 'votes',
  'comments' => 'comments',
  'files' => 'files',
  'submit_reset' => 'submit changes',
  'reset_views_confirm' => 'I\'m sure',
  'notice1' => '(*) depending on %sgroups%s settings',  //(do not translate %s!)
  'can_moderate' => 'Album can be moderated by', //cpg 1.5
  'admins_only' => 'Admins only', //cpg 1.5
  'alb_password' => 'Album password',
  'alb_password_hint' => 'Album password hint',
  'edit_files' =>'Edit files',
  'parent_category' => 'Parent category',
  'thumbnail_view' => 'Thumbnail view',
  'random_image' => 'Random Image', //cpg 1.5
);

// ------------------------------------------------------------------------- //
// File phpinfo.php
// ------------------------------------------------------------------------- //

if (defined('PHPINFO_PHP')) $lang_phpinfo_php = array(
  'php_info' => 'PHP info',
  'explanation' => 'This is the output generated by the PHP-function <a href="http://www.php.net/phpinfo">phpinfo()</a>, displayed within Coppermine (trimming the output at the right side).',
  'no_link' => 'Having others see your phpinfo can be a security risk, that\'s why this page is only visible when you\'re logged in as admin. You can not post a link to this page for others, they will be denied access.',
);

// ------------------------------------------------------------------------- //
// File picmgr.php
// ------------------------------------------------------------------------- //
if (defined('PICMGR_PHP')) $lang_picmgr_php = array(
  'pic_mgr' => 'Picture Manager',
  'select_album' => 'Select Album',
  'delete' => 'Delete',
  'confirm_delete1' => 'Are you sure you want to delete this picture ?',
  'confirm_delete2' => '\nPicture will be permanently deleted.',
  'apply_modifs' => 'Apply modifications',
  'confirm_modifs' => 'Confirm modifications',
  'pic_need_name' => 'Picture needs to have a name !',
  'no_change' => 'You did not make any change !',
  'no_album' => '* No album *',
  'explanation_header' => 'The custom sort order you can specify on this page will only be taken into account if',
  'explanation1' => 'the admin has set the "Default sort order for files" in the config to "Position descending" or "Position ascending" (global setting for all users who haven\'t chosen another sort option individually)',
  'explanation2' => 'the user has chosen "Position descending" or "Position ascending" on the thumbail page (per user setting)',
);


// ------------------------------------------------------------------------- //
// File pluginmgr.php
// ------------------------------------------------------------------------- //

if (defined('PLUGINMGR_PHP')){

$lang_pluginmgr_php = array(
  'confirm_uninstall' => 'Are you sure you want to UNINSTALL this plugin',
  'confirm_delete' => 'Are you sure you want to DELETE this plugin',
  'pmgr' => 'Plugin Manager',
  'explanation' => 'Install / uninstall / manage plugins using this page.', // cpg1.5.x
  'name' => 'Name',
  'author' => 'Author',
  'desc' => 'Description',
  'vers' => 'v',
  'i_plugins' => 'Installed Plugins',
  'n_plugins' => 'Plugins Not installed',
  'none_installed' => 'None Installed',
  'operation' => 'Operation',
  'not_plugin_package' => 'The file uploaded is not a plugin package.',
  'copy_error' => 'There was an error copying the package to the plugins folder.',
  'upload' => 'Upload',
  'configure_plugin' => 'Configure plugin',
  'cleanup_plugin' => 'Cleanup plugin',
  'extra' => 'Extra', // cpg1.5.x
);
}

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
  'already_rated' => 'Sorry but you have already rated this file',
  'rate_ok' => 'Your vote was accepted',
  'forbidden' => 'You can not rate your own files.',
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
While the administrators of {SITE_NAME} will attempt to remove or edit any generally objectionable material as quickly as possible, it is impossible to review every post. Therefore you acknowledge that all posts made to this site express the views and opinions of the author and not the administrators or webmaster (except for posts by these people) and hence will not be held liable.<br />
<br />
You agree not to post any abusive, obscene, vulgar, slanderous, hateful, threatening, sexually-orientated or any other material that may violate any applicable laws. You agree that the webmaster, administrator and moderators of {SITE_NAME} have the right to remove or edit any content at any time should they see fit. As a user you agree to any information you have entered above being stored in a database. While this information will not be disclosed to any third party without your consent the webmaster and administrator cannot be held responsible for any hacking attempt that may lead to the data being compromised.<br />
<br />
This site uses cookies to store information on your local computer. These cookies serve only to improve your viewing pleasure. The email address is used only for confirming your registration details and password.<br />
<br />
By clicking 'I agree' below you agree to be bound by these conditions.
EOT;

$lang_register_php = array(
  'page_title' => 'User registration',
  'term_cond' => 'Terms and conditions',
  'i_agree' => 'I agree',
  'submit' => 'Submit registration',
  'err_user_exists' => 'The username you have entered already exists, please choose a different one',
  'err_global_pw' => 'Invalid global registration password', // cpg1.5
  'err_global_pass_same' => 'Your password should be different from the global password', // cpg1.5
  'err_password_mismatch' => 'The two passwords does not match, please input them again',
  'err_uname_short' => 'Username must be 2 characters long minimum',
  'err_password_short' => 'Password must be 2 characters long minimum',
  'err_uname_pass_diff' => 'Username and password must be different',
  'err_invalid_email' => 'Email address is invalid',
  'err_duplicate_email' => 'Another user has already registered with the email address you entered',
  'err_disclaimer' => 'You need to agree to the disclaimer', // cpg1.5
  'enter_info' => 'Input registration information',
  'required_info' => 'Required information',
  'optional_info' => 'Optional information',
  'username' => 'Username',
  'password' => 'Password',
  'password_again' => 'Re-enter password',
  'global_registration_pw' => 'Global registration password', // cpg1.5
  'email' => 'Email',
  'location' => 'Location',
  'interests' => 'Interests',
  'website' => 'Home page',
  'occupation' => 'Occupation',
  'error' => 'ERROR',
  'confirm_email_subject' => '%s - Registration confirmation',
  'information' => 'Information',
  'failed_sending_email' => 'The registration confirmation email can\'t be send !',
  'thank_you' => 'Thank you for registering.<br /><br />An email with information on how to activate your account was sent to the email address you provided.',
  'acct_created' => 'Your account has been created and you can now login with your username and password',
  'acct_active' => 'Your account is now active and you can login with your username and password',
  'acct_already_act' => 'Account is already active!',
  'acct_act_failed' => 'This account can\'t be activated !',
  'err_unk_user' => 'Selected user does not exist !',
  'x_s_profile' => '%s\'s profile',
  'group' => 'Group',
  'reg_date' => 'Joined',
  'disk_usage' => 'Disk usage',
  'change_pass' => 'Change password',
  'current_pass' => 'Current password',
  'new_pass' => 'New password',
  'new_pass_again' => 'New password again',
  'err_curr_pass' => 'Current password is incorrect',
  'apply_modif' => 'Apply modifications',
  'change_pass' => 'Change my password',
  'update_success' => 'Your profile was updated',
  'pass_chg_success' => 'Your password was changed',
  'pass_chg_error' => 'Your password was not changed',
  'notify_admin_email_subject' => '%s - Registration notification',
  'last_uploads' => 'Last uploaded file.<br />Click to see all uploads by',
  'last_comments' => 'Last comment.<br />Click to see all comments made by',
  'notify_admin_email_body' => 'A new user with the username "%s" has registered in your gallery',
  'pic_count' => 'Files uploaded',
  'notify_admin_request_email_subject' => '%s - Registration request',
  'thank_you_admin_activation' => 'Thank you.<br /><br />Your request for account activation was sent to the admin. You will receive an email if approved.',
  'acct_active_admin_activation' => 'The account is now active and an email has been sent to the user.',
  'notify_user_email_subject' => '%s - Activation notification',
  'delete_my_account' => 'Delete my user account', // cpg1.5
  'warning_delete' => 'Warning: deleting your account can not be undone. The %sfiles you uploaded%s into public albums and your %scomments%s do not get deleted when deleting your user account! However, the files you uploaded into your personal gallery will be deleted.', // cpg1.5 // The %s-placeholders mustn't be removed, they will later be replaced by the wrappers for the links
  'i_am_sure' => 'I\'m sure that I want to delete my user account', // cpg1.5
  'really_delete' => 'Do you really want to delete your user account?', // cpg1.5 //JS-Alert
);

$lang_register_confirm_email = <<<EOT
Thank you for registering at {SITE_NAME}

In order to activate your account with username "{USER_NAME}", you need to click on the link below or copy and paste it in your web browser.

<a href="{ACT_LINK}">{ACT_LINK}</a>

Regards,

The management of {SITE_NAME}

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
  'title' => 'Review comments',
  'no_comment' => 'There is no comment to review',
  'n_comm_del' => '%s comment(s) deleted',
  'n_comm_disp' => 'Number of comments to display',
  'see_prev' => 'See previous',
  'see_next' => 'See next',
  'del_comm' => 'Delete selected comments',
  'user_name' => 'Name',
  'date' => 'Date',
  'comment' => 'Comment',
  'file' => 'File',
  'name_a' => 'User name ascending',
  'name_d' => 'User name descending',
  'date_a' => 'Date ascending',
  'date_d' => 'Date descending',
  'comment_a' => 'Comment message ascending',
  'comment_d' => 'Comment message descending',
  'file_a' => 'File ascending',
  'file_d' => 'File descending',
  'approval_a' => 'Approval ascending', // cpg1.5.x
  'approval_d' => 'Approval descending', // cpg1.5.x
  'n_comm_appr' => '%s comment(s) approved', // cpg1.5.x
  'n_comm_disappr' => '%s comment(s) disapproved', // cpg1.5.x
  'configuration_changed' => 'Approval config changed', // cpg1.5.x
  'only_approval' => 'only display comments needing approval', // cpg1.5.x
  'approval' => 'Approved', // cpg1.5.x
  'save_changes' => 'Save changes', // cpg1.5.x
  'n_confirm_delete' => 'Do you really want to delete the selected comment(s)?', // cpg1.5.x
  'with_selected' => 'With selected', // cpg1.5.x
  'delete' => 'delete', // cpg1.5.x
  'approve' => 'approve', // cpg1.5.x
  'disapprove' => 'disapprove', // cpg1.5.x
  'comment_approved' => 'Comment approved', // cpg1.5.x
  'comment_disapproved' => 'Comment disapproved', // cpg1.5.x
);


// ------------------------------------------------------------------------- //
// File search.php                                                           //
// ------------------------------------------------------------------------- //


if (defined('SEARCH_PHP')){

$lang_search_php = array(
  'title' => 'Search the file collection',
  'submit_search' => 'search',
  'keyword_list_title' => 'Keyword list',
  'keyword_msg' => 'The above list is not all inclusive. It does not include words from photo titles or descriptions. Try a full-text search.',
  'edit_keywords' => 'Edit keywords',
  'search in' => 'Search in:',
  'ip_address' => 'IP address',
  'fields' => 'Search in',
  'age' => 'Age',
  'newer_than' => 'Newer than',
  'older_than' => 'Older than',
  'days' => 'days',
  'all_words' => 'Match all words (AND)',
  'any_words' => 'Match any words (OR)',
);

}

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
  'page_title' => 'Search new files',
  'select_dir' => 'Select directory',
  'select_dir_msg' => 'This function allows you to add a batch of files that your have uploaded to your server by FTP.<br /><br />Select the directory where you have uploaded your files.',
  'no_pic_to_add' => 'There is no file to add',
  'need_one_album' => 'You need at least one album to use this function',
  'warning' => 'Warning',
  'change_perm' => 'the script can\'t write in this directory, you need to change its mode to 755 or 777 before trying to add the files !',
  'target_album' => '<b>Put files of &quot;</b>%s<b>&quot; into </b>%s',
  'folder' => 'Folder',
  'image' => 'file',
  'result' => 'Result',
  'dir_ro' => 'Not writable. ',
  'dir_cant_read' => 'Not readable. ',
  'insert' => 'Adding new files to the gallery',
  'list_new_pic' => 'List of new files',
  'insert_selected' => 'Insert selected files',
  'no_pic_found' => 'No new file was found',
  'be_patient' => 'Please be patient, the script needs time to add the files',
  'no_album' => 'no album selected',
  'result_icon' => 'click for details or to reload',
  'notes' =>  '<ul>'.
                          '<li><b>OK</b> : means that the file was succesfully added'.
                          '<li><b>DP</b> : means that the file is a duplicate and is already in the database'.
                          '<li><b>PB</b> : means that the file could not be added, check your configuration and the permission of directories where the files are located'.
                          '<li><b>NA</b> : means that you haven\'t selected an album the files should go to, hit \'<a href="javascript:history.back(1)">back</a>\' and select an album. If you don\'t have an album <a href="albmgr.php">create one first</a></li>'.
                          '<li>If the OK, DP, PB \'signs\' does not appear click on the broken file to see any error message produced by PHP'.
                          '<li>If your browser timeouts, hit the reload button'.
                          '</ul>',
  'select_album' => 'select album',
  'check_all' => 'Check All',
  'uncheck_all' => 'Uncheck All',
  'no_folders' => 'There are no folders inside the "albums" folder yet. Make sure to create at least one custom folder within "albums" folder and ftp-upload your files there. You mustn\'t upload to the "userpics" nor "edit" folders, they are reserved for http uploads and internal purposes.',
   'albums_no_category' => 'Albums with no category', // album pulldown mod, added by frogfoot
  'personal_albums' => '* Personal albums', // album pulldown mod, added by frogfoot
  'browse_batch_add' => 'Browsable interface (recommended)',
  'edit_pics' => 'Edit files',
  'edit_properties' => 'Album properties',
  'view_thumbs' => 'Thumbnail view',
);

// ------------------------------------------------------------------------- //
//File send_activation.php
// ------------------------------------------------------------------------- //

if (defined('SEND_ACTIVATION_PHP')) $lang_send_activation_php = array(
  'err_already_logged_in' => 'You are already logged in !', //cpg1.5
  'activation_not_required' => 'This website does not require activation by email', //cpg1.5
  'err_unk_user' => 'Selected user does not exist!', //cpg1.5
  'resend_act_link' => 'Resend activation link', //cpg1.5
  'enter_email' => 'Enter your email address', //cpg1.5
  'submit' => 'Go', //cpg1.5
  'failed_sending_email' => 'Failed to send email with activation link', //cpg1.5
  'activation_email_sent' => 'An email with activation link sent to %s. Please check your email to complete the process', //cpg1.5
);

// ------------------------------------------------------------------------- //
// File stat_details.php
// ------------------------------------------------------------------------- //

if (defined('STAT_DETAILS_PHP')) $lang_stat_details_php = array(
  'show_hide' => 'show/hide this column',
  'title' => 'Statistic details', //cpg1.5
  'vote' => 'Vote Details',
  'hits' => 'Hit Details',
  'stats' => 'Vote Statistics',
  'users' => 'User Statistics',
  'sdate' => 'Date',
  'rating' => 'Rating',
  'search_phrase' => 'Search phrase',
  'referer' => 'Referer',
  'browser' => 'Browser',
  'os' => 'Operating System',
  'ip' => 'IP',
  'uid' => 'User', //cpg1.5
  'sort_by_xxx' => 'Sort by %s',
  'ascending' => 'ascending',
  'descending' => 'descending',
  'internal' => 'int',
  'close' => 'close',
  'hide_internal_referers' => 'hide internal referers',
  'date_display' => 'Date display',
  'records_per_page' => 'records per page',
  'submit' => 'submit / refresh',
  'overall_stats' => 'Overall Statistics', //cpg1.5
  'stats_by_os' => 'Stats by operating systems', //cpg1.5
  'number_of_hits' => 'Number of hits', //cpg1.5
  'total' => 'Total', //cpg1.5
  'stats_by_browser' => 'Stats by browser', //cpg1.5
  'overall_stats_config' => 'Overall stats configuration', //cpg1.5
  'hit_details'  => 'Keep detailed hit statistics', //cpg1.5
  'hit_details_explanation'  => 'Keep detailed hit statistics', //cpg1.5
  'vote_details'  => 'Keep detailed voting statistics', //cpg1.5
  'vote_details_explanation'  => 'Keep detailed voting statistics', //cpg1.5
  'empty_hits_table'  => 'Empty all hit stats', //cpg1.5
  'empty_hits_table_confirm'  => 'Are you absolutely sure that you want to delete ALL hit stat records for your ENTIRE gallery? This can not be undone!', //cpg1.5 //JS-Alert
  'empty_votes_table'  => 'Empty all voting stats', //cpg1.5
  'empty_votes_table_confirm'  => 'Are you absolutely sure that you want to delete ALL voting records for your ENTIRE gallery? This can not be undone!', //cpg1.5 //JS-Alert
  'submit'  => 'Submit', //cpg1.5
  'upd_success' => 'Coppermine configuration was updated', //cpg1.5
  'votes' => 'votes', //cpg1.5
  'reset_votes_individual' => 'Reset selected vote(s)', //cpg1.5
  'reset_votes_individual_confirm' => 'Are you sure that you want to delete the selected votes? This can not be undone!', //cpg1.5
  'fullscreen' => 'Display this page in fullscreen mode', //cpg1.5
  'back_to_intermediate' => 'Back to intermediate file view', //cpg1.5
  'records_on_page' => '%s records on %s page(s)', //cpg1.5
  'guest' => 'Guest', //cpg1.5
);

// ------------------------------------------------------------------------- //
// File thumbnails.php
// ------------------------------------------------------------------------- //

// Void

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) $lang_upload_php = array(
  'title' => 'Upload file',
  'custom_title' => 'Customized Request Form',
  'cust_instr_1' => 'You may select a customized number of upload boxes. However, you may not select more than the limits listed below.',
  'cust_instr_2' => 'Box Number Requests',
  'cust_instr_3' => 'File upload boxes: %s',
  'cust_instr_4' => 'URI/URL upload boxes: %s',
  'cust_instr_5' => 'URI/URL upload boxes:',
  'cust_instr_6' => 'File upload boxes:',
  'cust_instr_7' => 'Please enter the number of each type of upload box you desire at this time.  Then click \'Continue\'. ',
  'reg_instr_1' => 'Invalid action for form creation.',
  'reg_instr_2' => 'Now you may upload your files using the upload boxes below. The size of files uploaded from your client to the server should not exceed %s KB each. ZIP files uploaded in the \'File Upload\' and \'URI/URL Upload\' sections will remain compressed.',
  'reg_instr_3' => 'If you want the zipped file or archive to be decompressed, you must use the file upload box provided in the \'Decompressive ZIP Upload\' area.',
  'reg_instr_4' => 'When using the URI/URL upload section, please enter the path to the file like so: http://www.mysite.com/images/example.jpg',
  'reg_instr_5' => 'When you have completed the form, please click \'Continue\'.',
  'reg_instr_6' => 'Decompressive ZIP Uploads:',
  'reg_instr_7' => 'File Uploads:',
  'reg_instr_8' => 'URI/URL Uploads:',
  'error_report' => 'Error Report',
  'error_instr' => 'The following uploads encountered errors:',
  'file_name_url' => 'File Name/URL',
  'error_message' => 'Error Message',
  'no_post' => 'File not uploaded by POST.',
  'forb_ext' => 'Forbidden file extension.',
  'exc_php_ini' => 'Exceeded filesize allowed in php.ini.',
  'exc_file_size' => 'Exceeded filesize permitted by CPG.',
  'partial_upload' => 'Only a partial upload.',
  'no_upload' => 'No upload occurred.',
  'unknown_code' => 'Unknown PHP upload error code.',
  'no_temp_name' => 'No upload - No temp name.',
  'no_file_size' => 'Contains no data/Corrupted',
  'impossible' => 'Impossible to move.',
  'not_image' => 'Not an image/corrupt',
  'not_GD' => 'Not a GD extension.',
  'pixel_allowance' => 'The height and or width of the uploaded picture is more than that allowed by the gallery config.',
  'incorrect_prefix' => 'Incorrect URI/URL prefix',
  'could_not_open_URI' => 'Could not open URI.',
  'unsafe_URI' => 'Safety not verifiable.',
  'meta_data_failure' => 'Meta data failure',
  'http_401' => '401 Unauthorized',
  'http_402' => '402 Payment Required',
  'http_403' => '403 Forbidden',
  'http_404' => '404 Not Found',
  'http_500' => '500 Internal Server Error',
  'http_503' => '503 Service Unavailable',
  'MIME_extraction_failure' => 'MIME could not be determined.',
  'MIME_type_unknown' => 'Unknown MIME type',
  'cant_create_write' => 'Cannot create write file.',
  'not_writable' => 'Cannot write to write file.',
  'cant_read_URI' => 'Cannot read URI/URL',
  'cant_open_write_file' => 'Cannot open URI write file.',
  'cant_write_write_file' => 'Cannot write to URI write file.',
  'cant_unzip' => 'Cannot unzip.',
  'unknown' => 'Unknown error',
  'succ' => 'Successful Uploads',
  'success' => '%s uploads were successful.',
  'add' => 'Please click \'Continue\' to add the files to albums.',
  'failure' => 'Upload Failure',
  'f_info' => 'File Information',
  'no_place' => 'The previous file could not be placed.',
  'yes_place' => 'The previous file was placed successfully.',
  'max_fsize' => 'Maximum allowed file size is %s KB',
  'picture' => 'File',
  'pic_title' => 'File title',
  'description' => 'File description',
  'keywords' => 'Keywords (separate with spaces)<br /><a href="#" onClick="return MM_openBrWindow(\'keyword_select.php\',\'selectKey\',\'width=250, height=400, scrollbars=yes,toolbar=no,status=yes,resizable=yes\')">Insert from list</a>',
  'keywords_sel' =>'Select a Keyword',
  'err_no_alb_uploadables' => 'Sorry there is no album where you are allowed to upload files',
  'place_instr_1' => 'Please place the files in albums at this time.  You may also enter relevant information about each file now.',
  'place_instr_2' => 'More files need placement. Please click \'Continue\'.',
  'process_complete' => 'You have successfully placed all the files.',
   'albums_no_category' => 'Albums with no category',
  'personal_albums' => '* Personal albums',
  'select_album' => 'Select album',
  'close' => 'Close',
  'no_keywords' => 'Sorry, no keywords available!',
  'regenerate_dictionary' => 'Regenerate Dictionary',
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) {
$lang_usermgr_php = array(
  'memberlist' => 'Memberlist',
  'user_manager' => 'User manager',
  'title' => 'Manage users',
  'name_a' => 'Name ascending',
  'name_d' => 'Name descending',
  'group_a' => 'Group ascending',
  'group_d' => 'Group descending',
  'reg_a' => 'Reg date ascending',
  'reg_d' => 'Reg date descending',
  'pic_a' => 'File count ascending',
  'pic_d' => 'File count descending',
  'disku_a' => 'Disk usage ascending',
  'disku_d' => 'Disk usage descending',
  'lv_a' => 'Last visit ascending',
  'lv_d' => 'Last visit descending',
  'sort_by' => 'Sort users by',
  'err_no_users' => 'User table is empty !',
  'err_edit_self' => 'You can\'t edit your own profile, use the \'My profile\' link for that',
  'edit' => 'Edit',
  'with_selected' => 'With selected:',
  'delete' => 'Delete',
  'delete_files_no' => 'keep public files (but anonymize)',
  'delete_files_yes' => 'delete public files as well',
  'delete_comments_no' => 'keep comments (but anonymize)',
  'delete_comments_yes' => 'delete comments as well',
  'activate' => 'Activate',
  'deactivate' => 'Deactivate',
  'reset_password' => 'Reset Password',
  'change_primary_membergroup' => 'Change primary membergroup',
  'add_secondary_membergroup' => 'Add secondary membergroup',
  'name' => 'User name',
  'group' => 'Group',
  'inactive' => 'Inactive',
  'operations' => 'Operations',
  'pictures' => 'Files',
  'disk_space_used' => 'Space used',
  'disk_space_quota' => 'Space Quota',
  'registered_on' => 'Registration',
  'last_visit' => 'Last Visit',
  'u_user_on_p_pages' => '%d users on %d page(s)',
  'confirm_del' => 'Are you sure you want to DELETE this user ? \\nAll his files and albums will also be deleted.', //js-alert
  'mail' => 'MAIL',
  'err_unknown_user' => 'Selected user does not exist !',
  'modify_user' => 'Modify user',
  'notes' => 'Notes',
  'note_list' => '<li>If you don\'t want to change the current password, leave the "password" field blank',
  'password' => 'Password',
  'user_active' => 'User is active',
  'user_group' => 'User group',
  'user_email' => 'User email',
  'user_web_site' => 'User web site',
  'create_new_user' => 'Create new user',
  'user_location' => 'User location',
  'user_interests' => 'User interests',
  'user_occupation' => 'User occupation',
  'user_profile1' => '$user_profile1',
  'user_profile2' => '$user_profile2',
  'user_profile3' => '$user_profile3',
  'user_profile4' => '$user_profile4',
  'user_profile5' => '$user_profile5',
  'user_profile6' => '$user_profile6',
  'latest_upload' => 'Recent uploads',
  'never' => 'never',
  'search' => 'User search',
  'submit' => 'Submit',
  'search_submit' => 'Go!',
  'search_result' => 'Search results for: ',
  'alert_no_selection' => 'You have to select at least one user first!', //js-alert
  'password' => 'password',
  'select_group' => 'Select group',
  'groups_alb_access' => 'Album permissions by group',
  'category' => 'Category',
  'modify' => 'Modify?',
  'group_no_access' => 'This group has no special access',
  'notice' => 'Notice',
  'group_can_access' => 'Album(s) that only "%s" can access',
  'send_login_data' => 'Send login data to this user (Password will be sent in email)', //cpg1.5
  'send_login_email_subject' => 'Your new account information', //cpg1.5
  'failed_sending_email' => 'The login data email can\'t be sent!', //cpg1.5
);

$lang_send_login_data_email = <<<EOT
A new account has been created for you at {SITE_NAME}.

You can now log in at <a href="{SITE_LINK}">{SITE_LINK}</a> using the username "{USER_NAME}" and password "{USER_PASS}"


Regards,

The management of {SITE_NAME}

EOT;
}
// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //

if (defined('UTIL_PHP')) {
$lang_util_desc_php = array(
'Updates titles from filename',
'Deletes titles',
'Rebuilds thumbnails and resized photos',
'Deletes original sized photos replacing them with the resized version',
'Deletes original or intermediate size photos to free webspace',
'Deletes orphaned comments',
'Re-reads file sizes and dimensions (if you manually edited pics)',
'Resets views counter',
'Displays phpinfo',
'Updates the database',
'Displays log files',
);
$lang_util_php = array(
  'title' => 'Admin utilities (Resize pictures)',
  'what_it_does' => 'What it does',
  'file' => 'File',
  'problem' => 'Problem',
  'status' => 'Status',
  'title_set_to' => 'title set to',
  'submit_form' => 'submit',
  'updated_succesfully' => 'updated succesfully',
  'error_create' => 'ERROR creating',
  'continue' => 'Process more images',
  'main_success' => 'The file %s was successfully used as main file',
  'error_rename' => 'Error renaming %s to %s',
  'error_not_found' => 'The file %s was not found',
  'back' => 'back to main',
  'thumbs_wait' => 'Updating thumbnails and/or resized images, please wait...',
  'thumbs_continue_wait' => 'Continuing to update thumbnails and/or resized images...',
  'titles_wait' => 'Updating titles, please wait...',
  'delete_wait' => 'Deleting titles, please wait...',
  'replace_wait' => 'Deleting originals and replacing them with resized images, please wait..',
  'instruction' => 'Quick instructions',
  'instruction_action' => 'Select action',
  'instruction_parameter' => 'Set parameters',
  'instruction_album' => 'Select album',
  'instruction_press' => 'Press %s',
  'update' => 'Update thumbs and/or resized photos',
  'update_what' => 'What should be updated',
  'update_thumb' => 'Only thumbnails',
  'update_pic' => 'Only resized pictures',
  'update_both' => 'Both thumbnails and resized pictures',
  'update_number' => 'Number of processed images per click',
  'update_option' => '(Try setting this option lower if you experience timeout problems)',
  'filename_title' => 'Filename &rArr; File title',
  'filename_how' => 'How should the filename be modified',
  'filename_remove' => 'Remove the .jpg ending and replace _ (underscore) with spaces',
  'filename_euro' => 'Change 2003_11_23_13_20_20.jpg to 23/11/2003 13:20',
  'filename_us' => 'Change 2003_11_23_13_20_20.jpg to 11/23/2003 13:20',
  'filename_time' => 'Change 2003_11_23_13_20_20.jpg to 13:20',
  'delete' => 'Delete file titles or original size photos',
  'delete_title' => 'Delete file titles',
  'delete_title_explanation' => 'This will remove all titles on files in the album you specify.',
  'delete_original' => 'Delete original size photos',
  'delete_original_explanation' => 'This will remove the full sized pictures.',
  'delete_intermediate' => 'Delete intermediate pictures',
  'delete_intermediate_explanation' => 'This will delete intermediate (normal) pictures.<br />Use this to free up disk space if you have disabled \'Create intermediate pictures\' in config after adding pictures.',
  'delete_replace' => 'Deletes the original images replacing them with the sized versions',
  'titles_deleted' => 'All titles in specified album removed',
  'deleting_intermediates' => 'Deleting intermediate images, please wait...',
  'searching_orphans' => 'Searching for orphans, please wait...',
  'select_album' => 'Select album',
  'delete_orphans' => 'Delete comments on missing files',
  'delete_orphans_explanation' => 'This will identify and allow you to delete any comments associated with files no longer in the gallery.<br />Checks all albums.',
  'update_full_normal_thumb' => 'Everything... full sized, resized and thumbs', // cpg1.5
  'update_full_normal' => 'Both resized and full sized (if a orig copy is available)', // cpg1.5
  'update_full' => 'Just full sized (if a orig copy is available)',// cpg1.5
  'delete_back' => 'Delete original image backup (watermark mod)', // cpg1.5
  'delete_back_explanation' => 'This will delete the backup image. You will save some disk space but not be able anymore to undo the watermark!!! After that the watermark will be permanent', // cpg1.5
  'finished' => '<br />Finished updating thumbs/ images!<br />', // cpg1.5
  'autorefresh' => ' Auto refresh (no need to click continue button anymore)<br /><br />', // cpg1.5
  'refresh_db' => 'Reload file dimensions and size information',
  'refresh_db_explanation' => 'This will re-read file sizes and dimensions. Use this if quota\'s are incorrect or you have changed the files manually.',
  'reset_views' => 'Reset view counters',
  'reset_views_explanation' => 'Sets all file view counts to zero in the album specified.',
  'orphan_comment' => 'orphan comments found',
  'delete' => 'Delete',
  'delete_all' => 'Delete all',
  'delete_all_orphans' => 'Delete all orphans?',
  'comment' => 'Comment: ',
  'nonexist' => 'attached to non existant file # ',
  'phpinfo' => 'Display phpinfo',
  'phpinfo_explanation' => 'Contains technical information about your server.<br /> - You may be asked to provide information from this when requesting support.',
  'update_db' => 'Update database',
  'update_db_explanation' => 'If you have replaced coppermine files, added a modification or upgraded from a previous version of coppermine, make sure to run the database update once. This will create the necessary tables and/or config values in your coppermine database.',
  'view_log' => 'View log files',
  'view_log_explanation' => 'Coppermine can keep track of various actions users perform. You can browse those logs if you have enabled logging in <a href="admin.php">coppermine config</a>.',
  'versioncheck' => 'Check versions',
  'versioncheck_explanation' => 'Check your file versions to find out if you have replaced all files after an upgrade, or if coppermine source files have been updated after the release of a package.',
  'bridgemanager' => 'Bridge Manager',
  'bridgemanager_explanation' => 'Enable/disable integration (bridging) of Coppermine with another application (e.g. your BBS).',
  'overall_stats' => 'Overall Statistics', //cpg1.5
  'overall_stats_explanation' => 'View overall hit stats by browser and operating system (if corresponding options are turned on in config).', //cpg1.5
);
}

// ------------------------------------------------------------------------- //
// File versioncheck.php
// ------------------------------------------------------------------------- //

if (defined('VERSIONCHECK_PHP')) $lang_versioncheck_php = array(
  'title' => 'Versioncheck',
  'what_it_does' => 'This page is meant for users who have updated their coppermine install. This script goes through the files on your webserver and tries to determine if your local file versions on the webserver are the same as the ones from the repository at http://coppermine.sourceforge.net, this way displaying the files you were meant to update as well.<br />It will show everything in red that needs to be fixed. Entries in yellow need looking into. Entries in green (or your default font color) are OK.<br />Click on the help icons to find out more.',
  'online_repository_unable' => 'Unable to connect to online repository',
  'online_repository_noconnect' => 'Coppermine was unable to connect to the online repository. This can have two reasons:',
  'online_repository_reason1' => 'the coppermine online repository is currently down - check if you can browse this page: %s - if you can\'t access this page, try again later.',
  'online_repository_reason2' => 'PHP on your webserver is configured with %s turned off (by default, it\'s turned on). If the server is yours to administer, turn this option on in <i>php.ini</i> (at least allow it to be overridden with %s). If you\'re webhosted, you will probably have to live with the fact that you can\'t compare your files to the online repository. This page will then only display the file versions that came with your distribution - updates will not be displayed.',
  'online_repository_skipped' => 'Connection to online repository skipped',
  'online_repository_to_local' => 'The script is defaulting to the local copy of the version-files now. The data may be inacurate if you have upgraded Coppermine and you haven\'t uploaded all files. Changes to the files after the release won\'t be taken into account as well.',
  'local_repository_unable' => 'Unable to connect to the repository on your server',
  'local_repository_explanation' => 'Coppermine was unable to connect to the repository file %s on your webserver. This probably means that you haven\'t uploaded the repository file to your webserver. Do so now and then try to run this page once more (hit refresh).<br />If the script still fails, your webhost might have disabled parts of <a href="http://www.php.net/manual/en/ref.filesystem.php">PHP\'s filesystem functions</a> completely. In this case, you simply won\'t be able to use this tool at all, sorry.',
  'coppermine_version_header' => 'Installed Coppermine version',
  'coppermine_version_info' => 'You have currently installed: %s',
  'coppermine_version_explanation' => 'If you think this is entirely wrong and you\'re supposed to be running a higher version of Coppermine, you probably haven\'t uploaded the most recent version of the file <i>include/init.inc.php</i>',
  'version_comparison' => 'Version comparison',
  'folder_file' => 'folder/file',
  'coppermine_version' => 'cpg version',
  'file_version' => 'file version',
  'webcvs' => 'web SVN',
  'writable' => 'writable',
  'not_writable' => 'not writable',
  'help_file_not_exist_optional1' => 'file/folder does not exist',
  'help_file_not_exist_optional2' => 'The file/folder %s has not been found on your server. Although it is optional you should upload it (using your FTP client) to your webserver if you are experiencing problems.',
  'help_file_not_exist_mandatory1' => 'file/folder does not exist',
  'help_file_not_exist_mandatory2' => 'The file/folder %s has not been found on your server, although it is mandatory. Upload the file to your webserver (using your FTP client).',
  'help_no_local_version1' => 'No local file version',
  'help_no_local_version2' => 'The script was unable to extract a local file version - your file is either outdated or you have modified it, removing the header information on the way. Updating the file is recommended.',
  'help_local_version_outdated1' => 'Local version outdated',
  'help_local_version_outdated2' => 'Your version of this file seems to be from an older version of Coppermine (you probably upgraded). Make sure to update this file as well.',
  'help_local_version_na1' => 'Unable to extract SVN version info',
  'help_local_version_na2' => 'The script could not determine what SVN version the file on your webserver is. You should upload the file from your package.',
  'help_local_version_dev1' => 'Development version',
  'help_local_version_dev2' => 'The file on your webserver seems to be newer than your Coppermine version. You are either using a development file (you should only do so if you know what you are doing), or you have upgraded your Coppermine install and not uploaded include/init.inc.php',
  'help_not_writable1' => 'Folder not writable',
  'help_not_writable2' => 'Change file permissions (CHMOD) to grant the script write access to the folder %s and everything within it.',
  'help_writable1' => 'Folder writable',
  'help_writable2' => 'The folder %s is writable. This is an unnecessary risk, coppermine only needs read/execute access.',
  'help_writable_undetermined' => 'Coppermine was not able to determine wether the folder is writable.',
  'your_file' => 'your file',
  'reference_file' => 'reference file',
  'summary' => 'Summary',
  'total' => 'Total files/folders checked',
  'mandatory_files_missing' => 'Mandatory files missing',
  'optional_files_missing' => 'Optional files missing',
  'files_from_older_version' => 'Files left over from outdated Coppermine version',
  'file_version_outdated' => 'Outdated file versions',
  'error_no_data' => 'The script made a boo, it was not able to retrieve any information. Sorry for the inconvenience.',
  'go_to_webcvs' => 'go to %s',
  'options' => 'Options',
  'show_optional_files' => 'show optional folders/files',
  'show_mandatory_files' => 'show mandatory files',
  'show_file_versions' => 'show file versions',
  'show_errors_only' => 'show folders/files with errors only',
  'show_permissions' => 'show folder permissions',
  'show_condensed_output' => 'show condensed ouput (for easier screenshots)',
  'coppermine_in_webroot' => 'coppermine is installed in the webroot',
  'connect_online_repository' => 'try connecting to the online repository',
  'show_additional_information' => 'show additional information',
  'no_webcvs_link' => 'don\'t display web SVN link',
  'stable_webcvs_link' => 'display web SVN link to stable branch',
  'devel_webcvs_link' => 'display web SVN link to devel branch',
  'submit' => 'apply changes / refresh',
  'reset_to_defaults' => 'reset to default values',
);

// ------------------------------------------------------------------------- //
// File view_log.php
// ------------------------------------------------------------------------- //

if (defined('VIEWLOG_PHP')) $lang_viewlog_php = array(
  'delete_all' => 'Delete All Logs',
  'delete_this' => 'Delete This Log',
  'view_logs' => 'View Logs',
  'no_logs' => 'No logs created.',
);


// ------------------------------------------------------------------------- //
// File xp_publish.php
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
  'title' => 'Coppermine - XP Web Publishing Wizard',
  'welcome' => 'Welcome <b>%s</b>,',
  'need_login' => 'You need to login to the gallery using your web browser before you can use this wizard.<p/><p>When you login don\'t forget to select the <b>remember me</b> option if it is present.',
  'no_alb' => 'Sorry but there is no album where you are allowed to upload pictures with this wizard.',
  'upload' => 'Upload your pictures into an existing album',
  'create_new' => 'Create a new album for your pictures',
  'category' => 'Category',
  'new_alb_created' => 'Your new album &quot;<b>%s</b>&quot; was created.',
  'continue' => 'Press &quot;Next&quot; to start to upload your pictures',
  'link' => 'this link',
);
}
?>