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
  Coppermine version: 1.4.26
  $HeadURL$
  $Revision$
  $Author$
  $Date$
**********************************************/

if (!defined('IN_COPPERMINE')) { die('Not in Coppermine...');}

// info about translators and translated language
$lang_translation_info = array(
  'lang_name_english' => 'Hebrew', //cpg1.4
  'lang_name_native' => 'עברית', //cpg1.4
  'lang_country_code' => 'he_IL.UTF-8', //cpg1.4
  //translator comment: common country codes include are "he_IL.utf8" (recommended) / "he" / "hebrew" / "he_IL". if on *nix: use `locale -a`to find put
  //I've only translated the fields I've needed. You can submit your changes to me and get credit for your work here.
  'trans_name'=> 'ליאור דוד',
  'trans_email' => '',
  'trans_website' => 'http://lior.l8d.org/projects/coppermine-heb/',
  'trans_date' => '2006-12-19',
);

$lang_charset = 'utf-8';
$lang_text_dir = 'rtl'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('בתים', 'ק"ב', 'מ"ב');

// Day of weeks and months
$lang_day_of_week = array('ראשון', 'שני', 'שלישי', 'רביעי', 'חמישי', 'שישי', 'שבת');
$lang_month = array('ינואר', 'פברואר', 'מרץ', 'אפריל', 'מאי', 'יוני', 'יולי', 'אוגוסט', 'ספטמבר', 'אוקטובר', 'נובמבר', 'דצמבר');

// Some common strings
$lang_yes = 'כן';
$lang_no  = 'לא';
$lang_back = 'חזרה';
$lang_continue = 'המשך';
$lang_info = 'מידע';
$lang_error = 'שגיאה';
$lang_check_uncheck_all = 'בחר/נקה הכל'; //cpg1.4

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$album_date_fmt =    '%d ל%B, %Y';
$lastcom_date_fmt =  '%d/%m/%y ב%H:%M';
$lastup_date_fmt = '%d ל%B, %Y';
$register_date_fmt = '%B %d, %Y';
$lasthit_date_fmt = '%d ל%B %Y, %H:%M';
$comment_date_fmt =  '%d ל%B %Y, %H:%M';
$log_date_fmt = '%d ל%B %Y, %H:%M'; //cpg1.4

// For the word censor
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*', 'זין', 'זונה', 'כוסית', 'קוקסינל', 'מניאק', 'מנייאק', 'מזדיין', 'שרמוט*');

$lang_meta_album_names = array(
  'random' => 'קבצים אקראיים',
  'lastup' => 'האחרונים שנוספו',
  'lastalb'=> 'האלבומים האחרונים שעודכנו',
  'lastcom' => 'הערות אחרונות',
  'topn' => 'הנצפים ביותר',
  'toprated' => 'הטובים ביותר',
  'lasthits' => 'האחרונים שנצפו',
  'search' => 'תוצאות החיפוש',
  'favpics'=> 'קבצים מועדפים',  //cpg1.4
);

$lang_errors = array(
  'access_denied' => 'אין לך הרשאה לצפות בעמוד זה.',
  'perm_denied' => 'אין לך הרשאה לבצע פעולה זו.',
  'param_missing' => 'לא נשלחו לסקריפט הפרמטרים הדרושים',
  'non_exist_ap' => 'האלבום או הקובץ שבחרת אינם קיימים',
  'quota_exceeded' => 'חריגה מהקצאת הדיסק<br /><br />הוקצו לך [quota]K, מתוכם מנוצלים [space]K, הוספת קובץ זה תגרום לחריגה מהנפח המותר.',
  'gd_file_type_err' => 'בשימוש בספריית GDת סוגי התמונות היחידים המותרים הם Jpeg וGIF',
  'invalid_image' => 'התמונה ששלחת משובשת, או שאינה נתמכת ע"י ספריית GD',
  'resize_failed' => 'תקלה ביצירת התמונה המוקטנת או בהקטנת גודל הקובץ.',
  'no_img_to_display' => 'אין תמונות להצגה',
  'non_exist_cat' => 'הקטגוריה שבחרת אינה קיימת',
  'orphan_cat' => 'A category has a non-existing parent, run the category manager to correct the problem!',
  'directory_ro' => 'Directory \'%s\' is not writable, files can\'t be deleted',
  'non_exist_comment' => 'The selected comment does not exist.',
  'pic_in_invalid_album' => 'File is in a non existant album (%s)!?',
  'banned' => 'You are currently banned from using this site.',
  'not_with_udb' => 'This function is disabled in Coppermine because it is integrated with forum software. Either what you are trying to do is not supported in this configuration, or the function should be handled by the forum software.',
  'offline_title' => 'לא פעיל',
  'offline_text' => 'הגלריה לא פעילה כרגע - אנא בדוק שוב מאוחר יותר',
  'ecards_empty' => 'לא קיים רישום בנוגע לגלויות אלקטרוניות.',
  'action_failed' => 'Action failed.  Coppermine is unable to process your request.',
  'no_zip' => 'The necessary libraries to process ZIP files are not available.  Please contact your Coppermine administrator.',
  'zip_type' => 'You do not have permission to upload ZIP files.',
  'database_query' => 'There was an error while processing a database query', //cpg1.4
  'register_globals_on' => 'The PHP setting register_globals is enabled on your server, which is a bad idea in terms of security. It\'s strongly recommended to turn it off. [<a href="http://forum.coppermine-gallery.net/index.php/topic,59569.0.html" rel="external" class="external">more</a>]',
);

$lang_bbcode_help_title = 'עזרה ל- bbcode'; //cpg1.4
$lang_bbcode_help = 'You can add clickable links and some formating to this field by using bbcode tags: <li>[b]Bold[/b] =&gt; <b>Bold</b></li><li>[i]Italic[/i] =&gt; <i>Italic</i></li><li>[url=http://yoursite.com/]Url Text[/url] =&gt; <a href="http://yoursite.com">Url Text</a></li><li>[email]user@domain.com[/email] =&gt; <a href="mailto:user@domain.com">user@domain.com</a></li><li>[color=red]some text[/color] =&gt; <span style="color:red">some text</span></li><li>[img]http://coppermine-gallery.net/demo/cpg14x/images/red.gif[/img] => <img src="../images/red.gif" border="0" alt="" /></li>'; //cpg1.4

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
  'home_title' => 'חזרה לדף הראשי',
  'home_lnk' => 'דף ראשי',
  'alb_list_title' => 'רשימת אלבומים',
  'alb_list_lnk' => 'רשימת אלבומים',
  'my_gal_title' => 'הגלריה שלי',
  'my_gal_lnk' => 'הגלריה שלי',
  'my_prof_title' => 'הפרופיל שלי', //cpg1.4
  'my_prof_lnk' => 'הפרופיל שלי',
  'adm_mode_title' => 'עבור למצב ניהול',
  'adm_mode_lnk' => 'מצב ניהול',
  'usr_mode_title' => 'עבור למצב משתמש רגיל',
  'usr_mode_lnk' => 'מצב משתמש רגיל',
  'upload_pic_title' => 'הוסף קובץ לאלבום',
  'upload_pic_lnk' => 'שלח קובץ',
  'register_title' => 'צור חשבון',
  'register_lnk' => 'הרשמה',
  'login_title' => 'חבר אותי לאתר', //cpg1.4
  'login_lnk' => 'התחבר',
  'logout_title' => 'נתק אותי מהאתר', //cpg1.4
  'logout_lnk' => 'התנתקות',
  'lastup_title' => 'הצג קבצים אחרונים שנוספו', //cpg1.4
  'lastup_lnk' => 'האחרונים שנוספו',
  'lastcom_title' => 'הצג ההערות האחרונות שנוספו', //cpg1.4
  'lastcom_lnk' => 'הערות אחרונות',
  'topn_title' => 'הצג הקבצים הכי נצפים', //cpg1.4
  'topn_lnk' => 'הנצפים ביותר',
  'toprated_title' => 'הצג הקבצים המדורגים כטובים ביותר', //cpg1.4
  'toprated_lnk' => 'המדורגים כטובים ביותר',
  'search_title' => 'חפש בגלריה', //cpg1.4
  'search_lnk' => 'חיפוש',
  'fav_title' => 'המועדפים שלי', //cpg1.4
  'fav_lnk' => 'המועדפים שלי',
  'memberlist_title' => 'הצג רשימת חברים',
  'memberlist_lnk' => 'רשימת חברים',
  'faq_title' => 'שאלות נפוצות בקשר לגלריה "Coppermine"',
  'faq_lnk' => 'שו"ת',
);

$lang_gallery_admin_menu = array(
  'upl_app_title' => 'אישור העלאות חדשות', //cpg1.4
  'upl_app_lnk' => 'אישור העלאות',
  'admin_title' => 'תפריט הגדרות המערכת', //cpg1.4
  'admin_lnk' => 'הגדרות', //cpg1.4
  'albums_title' => 'תפריט הגדרות האלבומים', //cpg1.4
  'albums_lnk' => 'אלבומים',
  'categories_title' => 'תפריט הגדרות הקטגוריות', //cpg1.4
  'categories_lnk' => 'קטגוריות',
  'users_title' => 'תפריט ניהול המשתמשים', //cpg1.4
  'users_lnk' => 'משתמשים',
  'groups_title' => 'Go to group configuration', //cpg1.4
  'groups_lnk' => 'קבוצות משתמשים',
  'comments_title' => 'Review all comments', //cpg1.4
  'comments_lnk' => 'צפה בהערות',
  'searchnew_title' => 'Go to the batch add process', //cpg1.4
  'searchnew_lnk' => 'הוספת קבצים',
  'util_title' => 'Go to the admin tools', //cpg1.4
  'util_lnk' => 'כלי ניהול',
  'key_title' => 'Go to the keyword dictionary', //cpg1.4
  'key_lnk' => 'Keyword Dictionary', //cpg1.4
  'ban_title' => 'Go to the banned users', //cpg1.4
  'ban_lnk' => 'החרמת משתמשים',
  'db_ecard_title' => 'Review Ecards', //cpg1.4
  'db_ecard_lnk' => 'הצגת גלויית',
  'pictures_title' => 'מיון התמונות שלי', //cpg1.4
  'pictures_lnk' => 'מיון התמונות שלי', //cpg1.4
  'documentation_lnk' => 'דוקומנטציה', //cpg1.4
  'documentation_title' => 'Coppermine manual', //cpg1.4
);

$lang_user_admin_menu = array(
  'albmgr_title' => 'Create and order my albums', //cpg1.4
  'albmgr_lnk' => 'Create / order my albums',
  'modifyalb_title' => 'Go to modify my albums',  //cpg1.4
  'modifyalb_lnk' => 'Modify my albums',
  'my_prof_title' => 'Go to my personal profile', //cpg1.4
  'my_prof_lnk' => 'הפרופיל שלי',
);

$lang_cat_list = array(
  'category' => 'קטגוריות',
  'albums' => 'אלבומים',
  'pictures' => 'קבצים',
);

$lang_album_list = array(
  'album_on_page' => '%d אלבומים ב-%d עמודים',
);

$lang_thumb_view = array(
  'date' => 'תאריך',
  //Sort by filename and title
  'name' => 'שם קובץ',
  'title' => 'כותרת',
  'sort_da' => 'מיון לפי תאריך בסדר עולה',
  'sort_dd' => 'מיון לפי תאריך בסדר יורד',
  'sort_na' => 'מיון לפי שם בסדר עולה',
  'sort_nd' => 'מיון לפי שם בסדר יורד',
  'sort_ta' => 'מיון לפי כותרת בסדר עולה',
  'sort_td' => 'מיון לפי כותרת בסדר יורד',
  'position' => 'מיקום', //cpg1.4
  'sort_pa' => 'מיון לפי מיקום בסדר עולה', //cpg1.4
  'sort_pd' => 'מיון לפי מיקום בסדר יורד', //cpg1.4
  'download_zip' => 'הוורדת התמונות כקובץ ZIP',
  'pic_on_page' => '%d קבצים ב- %d עמודים',
  'user_on_page' => '%d users on %d page(s)',
  'enter_alb_pass' => 'Enter Album Password', //cpg1.4
  'invalid_pass' => 'Invalid Password', //cpg1.4
  'pass' => 'Password', //cpg1.4
  'submit' => 'Submit', //cpg1.4
);

$lang_img_nav_bar = array(
  'thumb_title' => 'חזרה לעמוד התמונות',
  'pic_info_title' => 'הצג/הסתר מידע קובץ',
  'slideshow_title' => 'מצגת תמונות מתחלפות',
  'ecard_title' => 'Send this file as an e-card',
  'ecard_disabled' => 'e-cards are disabled',
  'ecard_disabled_msg' => 'You don\'t have permission to send ecards', //js-alert
  'prev_title' => 'הצג הקובץ הקודם',
  'next_title' => 'הצג הקובץ הבא',
  'pic_pos' => 'קובץ %s/%s',
  'report_title' => 'Report this file to the administrator', //cpg1.4
  'go_album_end' => 'Skip to end', //cpg1.4
  'go_album_start' => 'Return to start', //cpg1.4
  'go_back_x_items' => 'go back %s items', //cpg1.4
  'go_forward_x_items' => 'go forward %s items', //cpg1.4
);

$lang_rate_pic = array(
  'rate_this_pic' => 'דרג תמונה זו ',
  'no_votes' => '(עדיין אין דירוג)',
  'rating' => '(דירוג נוכחי : %s / 5 ע"י %s משתמשים)',
  'rubbish' => 'על הפנים!',
  'poor' => 'גרוע',
  'fair' => 'סביר',
  'good' => 'טוב',
  'excellent' => 'טוב מאוד',
  'great' => 'מצויין!',
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
  'file' => 'קובץ: ',
  'line' => 'Line: ',
);

$lang_display_thumbnails = array(
  'filename' => 'שם הקובץ=', //cpg1.4
  'filesize' => 'גודל הקובץ=', //cpg1.4
  'dimensions' => 'מימדים=', //cpg1.4
  'date_added' => 'נוסף בתאריך=', //cpg1.4
);

$lang_get_pic_data = array(
  'n_comments' => '%s הערות',
  'n_views' => '%s צפיות',
  'n_votes' => '(%s הצבעות)',
);

$lang_cpg_debug_output = array(
  'debug_info' => 'Debug Info',
  'select_all' => 'Select All',
  'copy_and_paste_instructions' => 'If you\'re going to request help on the coppermine support board, copy-and-paste this debug output into your posting when requested, along with the error message you get (if any). Make sure to replace any passwords from the query with *** before posting. <br />Note: This is for information only and does not mean there is an error with your gallery.', //cpg1.4
  'phpinfo' => 'display phpinfo',
  'notices' => 'Notices', //cpg1.4
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
  'version_alert' => 'Unsupported version!', //cpg1.4
  'security_alert' => 'Security Alert!', //cpg1.4.3
  'relocate_exists' => 'Remove the <a href="http://coppermine-gallery.net/forum/index.php?topic=24217.0">relocate_server.php</a> file from your website!',
  'no_stable_version' => 'You are running Coppermine %s (%s) which is only meant for very experienced users - this version comes without support nor any warranties. Use it at your own risk or downgrade to the latest stable version if you need support!', //cpg1.4
  'gallery_offline' => 'The gallery is currently offline and will be only visible for you as admin. Don\'t forget to switch it back online after finishing maintenance.', //cpg1.4
);

$lang_create_tabs = array(
  'previous' => 'previous', //cpg1.4
  'next' => 'next', //cpg1.4
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
  'error_wakeup' => "Couldn't awaken plugin '%s'", //cpg1.4
  'error_install' => "Couldn't install plugin '%s'", //cpg1.4
  'error_uninstall' => "Couldn't uninstall plugin '%s'", //cpg1.4
  'error_sleep' => "Couldn't uninstall plugin '%s'<br />", //cpg1.4
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
// File mode.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('MODE_PHP')) $lang_mode_php = array(
  0 => 'Leaving admin mode...',
  1 => 'Entering admin mode...',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
  'alb_need_name' => 'Albums need to have a name !', //js-alert
  'confirm_modifs' => 'אתה בטוח שברצונך לבצע שינויים אלו?', //js-alert
  'no_change' => 'You did not make any change !', //js-alert
  'new_album' => 'אלבום חדש',
  'confirm_delete1' => 'אתה בטוח שברצונך למחוק אלבום זה?', //js-alert
  'confirm_delete2' => '\nAll files and comments it contains will be lost !', //js-alert
  'select_first' => 'בחר אלבום תחילה!', //js-alert
  'alb_mrg' => 'ניהול אלבומים',
  'my_gallery' => '* הגלריה שלי *',
  'no_category' => '* ללא קטגוריה *',
  'delete' => 'מחק',
  'new' => 'חדש',
  'apply_modifs' => 'החל שינויים',
  'select_category' => 'בחר קטגוריה',
);

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) $lang_banning_php = array(
  'title' => 'Ban Users', //cpg1.4
  'user_name' => 'User Name', //cpg1.4
  'ip_address' => 'IP Address', //cpg1.4
  'expiry' => 'Expires (blank is permanent)', //cpg1.4
  'edit_ban' => 'Save Changes', //cpg1.4
  'delete_ban' => 'Delete', //cpg1.4
  'add_new' => 'Add New Ban', //cpg1.4
  'add_ban' => 'Add', //cpg1.4
  'error_user' => 'Cannot find user', //cpg1.4
  'error_specify' => 'You need to specifiy either a user name or an IP address', //cpg1.4
  'error_ban_id' => 'Invalid ban ID!', //cpg1.4
  'error_admin_ban' => 'You cannnot ban yourself!', //cpg1.4
  'error_server_ban' => 'You were going to ban your own server? Tsk tsk, cannot do that...', //cpg1.4
  'error_ip_forbidden' => 'You cannnot ban this IP - it is non-routable (private) anyway!<br />If you want to allow banning for private IPs, change this in your <a href="admin.php">Config</a> (only makes sense when Coppermine runs on a LAN).', //cpg1.4
  'lookup_ip' => 'Lookup an IP address', //cpg1.4
  'submit' => 'go!', //cpg1.4
  'select_date' => 'select date', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File bridgemgr.php //cpg1.4
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
// File calendar.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('CALENDAR_PHP')) $lang_calendar_php = array(
  'title' => 'Calendar', //cpg1.4
  'close' => 'close', //cpg1.4
  'clear_date' => 'clear date', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
  'miss_param' => 'Parameters required for \'%s\'operation not supplied !',
  'unknown_cat' => 'Selected category does not exist in database',
  'usergal_cat_ro' => 'User galleries category can\'t be deleted !',
  'manage_cat' => 'ניהול קטגוריות',
  'confirm_delete' => 'אתה בטוח שברצונך למחוק קטגוריה זו?', //js-alert
  'category' => 'קטגוריה',
  'operations' => 'פעולות',
  'move_into' => 'העבר ל-',
  'update_create' => 'עדכון/יצירת קטגוריות',
  'parent_cat' => 'קטגוריית אם',
  'cat_title' => 'שם הקטגוריה',
  'cat_thumb' => 'תמונה מוקטנת',
  'cat_desc' => 'תיאור הקטגוריה',
  'categories_alpha_sort' => 'מיון קטגוריות בסדר אלפאביתי (במקום סדר מותאם אישית)', //cpg1.4
  'save_cfg' => 'שמירת הגדרות', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File admin.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('ADMIN_PHP')) $lang_admin_php = array(
  'title' => 'תצורת הגלריה', //cpg1.4
  'manage_exif' => 'Manage exif display', //cpg1.4
  'manage_plugins' => 'ניהול תוספים', //cpg1.4
  'manage_keyword' => 'ניהול מילות מפתח', //cpg1.4
  'restore_cfg' => 'שחזור הגדרות יצרן',
  'save_cfg' => 'שמירת תצורת הגלריה',
  'notes' => 'Notes',
  'info' => 'מידע',
  'upd_success' => 'הגדרות הגלריה עודכנו',
  'restore_success' => 'הגדרות ברירת המחדל שוחזרו',
  'name_a' => 'Name ascending',
  'name_d' => 'Name descending',
  'title_a' => 'Title ascending',
  'title_d' => 'Title descending',
  'date_a' => 'Date ascending',
  'date_d' => 'Date descending',
  'pos_a' => 'Position ascending', //cpg1.4
  'pos_d' => 'Position descending', //cpg1.4
  'th_any' => 'Max Aspect',
  'th_ht' => 'Height',
  'th_wd' => 'Width',
  'label' => 'label',
  'item' => 'item',
  'debug_everyone' => 'כולם',
  'debug_admin' => 'מנהלים בלבד',
  'no_logs'=> 'כבוי', //cpg1.4
  'log_normal'=> 'רגיל', //cpg1.4
  'log_all' => 'הכל', //cpg1.4
  'view_logs' => 'צפה ביומנים', //cpg1.4
  'click_expand' => 'click section name to expand', //cpg1.4
  'expand_all' => 'הרחב הכל', //cpg1.4
  'notice1' => '(*) These settings mustn\'t be changed if you already have files in your database.', //cpg1.4 - (relocated)
  'notice2' => '(**) When changing this setting, only the files that are added from that point on are affected, so it is advisable that this setting must not be changed if there are already files in the gallery. You can, however, apply the changes to the existing files with the &quot;<a href="util.php">admin tools</a> (resize pictures)&quot; utility from the admin menu.', //cpg1.4 - (relocated)
  'notice3' => '(***) All log files are written in english.', //cpg1.4 - (relocated)
  'bbs_disabled' => 'Function disabled when using bb integration', //cpg1.4
  'auto_resize_everyone' => 'Everyone', //cpg1.4
  'auto_resize_user' => 'User only', //cpg1.4
  'ascending' => 'ascending', //cpg1.4
  'descending' => 'descending', //cpg1.4
);

if (defined('ADMIN_PHP')) $lang_admin_data = array(
  'הגדרות כלליות',
  array('שם הגלריה', 'gallery_name', 0, 'f=index.htm&amp;as=admin_general_name&amp;ae=admin_general_name_end'), //cpg1.4
  array('תיאור הגלריה', 'gallery_description', 0, 'f=index.htm&amp;as=admin_general_description&amp;ae=admin_general_description_end'), //cpg1.4
  array('כתובת הדוא"ל של מנהל הגלריה', 'gallery_admin_email', 0, 'f=index.htm&amp;as=admin_general_email&amp;ae=admin_general_email_end'), //cpg1.4
  array('כתובת ה-URL של תיקיית הגלריה (ללא \'index.php\' בסוף)', 'ecards_more_pic_target', 0, 'f=index.htm&amp;as=admin_general_coppermine-url&amp;ae=admin_general_coppermine-url_end'), //cpg1.4
  array('כתובת ה-URL של עמוד הבית', 'home_target', 0, 'f=index.htm&amp;as=admin_general_home-url&amp;ae=admin_general_home-url_end'), //cpg1.4
  array('אפשר הורדת המועדפים כקובץ ZIP', 'enable_zipdownload', 1, 'f=index.htm&amp;as=admin_general_zip-download&amp;ae=admin_general_zip-download_end'), //cpg1.4
  array('הפרש אזור הזמן ביחס ל-GMT (הזמן הנוכחי: ' . localised_date(-1, $comment_date_fmt) . ')','time_offset',0, 'f=index.htm&amp;as=admin_general_time-offset&amp;ae=admin_general_time-offset_end&amp;top=1'), //cpg1.4
  array('אפשר סיסמאות מוצפנות (לא ניתן לבטל תכונהזו לאחר שאופשרה)','enable_encrypted_passwords',1, 'f=index.htm&amp;as=admin_general_encrypt_password_start&amp;ae=admin_general_encrypt_password_end&amp;top=1'), // cpg 1.4
  array('הצג אייקונים של עזרה (העזרה זמינה באנגלית בלבד)','enable_help',9, 'f=index.htm&amp;as=admin_general_help&amp;ae=admin_general_help_end'), //cpg1.4
  array('אפשר מילות מפתח לחיצות בדף החיפוש','clickable_keyword_search',14, 'f=index.htm&amp;as=admin_general_keywords_start&amp;ae=admin_general_keywords_end'), //cpg1.4
  array('אפשר פעולת תוספים (Plugins)', 'enable_plugins', 12, 'f=index.htm&amp;as=admin_general_enable-plugins&amp;ae=admin_general_enable-plugins_end'),  //cpg1.4
  array('אשר החרמת כתובות IP פרטיות (non-routable)', 'ban_private_ip', 1,  'f=index.htm&amp;as=admin_general_private-ip&amp;ae=admin_general_private-ip_end'), //cpg1.4
  array('ממשק הוספת קבצים הניתן לסיור', 'browse_batch_add', 1, 'f=index.htm&amp;as=admin_general_browsable_batch_add&amp;ae=admin_general_browsable_batch_add_end'), //cpg1.4

  'הגדרות שפה ומערך תווים',
  array('Language', 'lang', 5, 'f=index.htm&amp;as=admin_language_language&amp;ae=admin_language_language_end'), //cpg1.4
  array('Fallback to English if translated phrase not found?', 'language_fallback', 1, 'f=index.htm&amp;as=admin_language_fallback&amp;ae=admin_language_fallback_end'), //cpg1.4
  array('Character encoding', 'charset', 4, 'f=index.htm&amp;as=admin_language_charset&amp;ae=admin_language_charset_end'), //cpg1.4
  array('Display language list', 'language_list', 1, 'f=index.htm&amp;as=admin_language_list&amp;ae=admin_language_list_end'), //cpg1.4
  array('Display language flags', 'language_flags', 8, 'f=index.htm&amp;as=admin_language_flags&amp;ae=admin_language_flags_end&amp;top=1'), //cpg1.4
  array('Display &quot;reset&quot; in language selection', 'language_reset', 1, 'f=index.htm&amp;as=admin_language_reset&amp;ae=admin_language_reset_end&amp;top=1'), //cpg1.4
  //array('Display previous/next on tabbed pages', 'previous_next_tab', 1), //cpg1.4

  'הגדרות ערכות נושא',
  array('Theme', 'theme', 6, 'f=index.htm&amp;as=admin_theme_theme&amp;ae=admin_theme_theme_end'), //cpg1.4
  array('Display theme list', 'theme_list', 1, 'f=index.htm&amp;as=admin_theme_theme_list&amp;ae=admin_theme_theme_list_end'), //cpg1.4
  array('Display &quot;reset&quot; in theme selection', 'theme_reset', 1, 'f=index.htm&amp;as=admin_theme_theme_reset&amp;ae=admin_theme_theme_reset_end'), //cpg1.4
  array('Display FAQ', 'display_faq', 1, 'f=index.htm&amp;as=admin_theme_faq&amp;ae=admin_theme_faq_end'), //cpg1.4
  array('Custom menu link name', 'custom_lnk_name', 0,'f=index.htm&amp;as=admin_theme_custom_lnk_name&amp;ae=admin_theme_custom_lnk_name_end'), //cpg1.4
  array('Custom menu link URL', 'custom_lnk_url', 0,'f=index.htm&amp;as=admin_language_custom_lnk_url&amp;ae=admin_language_custom_lnk_url_end'), //cpg1.4
  array('Display bbcode help', 'show_bbcode_help', 1, 'f=index.htm&amp;as=admin_theme_bbcode&amp;ae=admin_theme_bbcode_end&amp;top=1'), //cpg1.4
  array('Show the vanity block on themes that are defined as XHTML and CSS compliant','vanity_block',1, 'f=index.htm&amp;as=vanity_block&amp;ae=vanity_block_end'), //cpg1.4
  array('Path to custom header include', 'custom_header_path', 0, 'f=index.htm&amp;as=admin_theme_include_path_start&amp;ae=admin_theme_include_path_end'), //cpg1.4
  array('Path to custom footer include', 'custom_footer_path', 0, 'f=index.htm&amp;as=admin_theme_include_path_start&amp;ae=admin_theme_include_path_end'), //cpg1.4

  'תצוגת רשימת אלבומים',
  array('Width of the main table (pixels or %)', 'main_table_width', 0, 'f=index.htm&amp;as=admin_album_table-width&amp;ae=admin_album_table-width_end'), //cpg1.4
  array('Number of levels of categories to display', 'subcat_level', 0, 'f=index.htm&amp;as=admin_album_category-levels&amp;ae=admin_album_category-levels_end'), //cpg1.4
  array('Number of albums to display', 'albums_per_page', 0, 'f=index.htm&amp;as=admin_album_number&amp;ae=admin_album_number_end'), //cpg1.4
  array('Number of columns for the album list', 'album_list_cols', 0, 'f=index.htm&amp;as=admin_album_columns&amp;ae=admin_album_columns_end'), //cpg1.4
  array('Size of thumbnails in pixels', 'alb_list_thumb_size', 0, 'f=index.htm&amp;as=admin_album_thumbnail-size&amp;ae=admin_album_thumbnail-size_end'), //cpg1.4
  array('The content of the main page', 'main_page_layout', 0, 'f=index.htm&amp;as=admin_album_list_content&amp;ae=admin_album_list_content_end'), //cpg1.4
  array('Show first level album thumbnails in categories','first_level',1, 'f=index.htm&amp;as=admin_album_first-level_thumbs&amp;ae=admin_album_first-level_thumbs_end'), //cpg1.4
  array('Sort categories alphabetically (instead of custom sort order)','categories_alpha_sort',1, 'f=index.htm&amp;as=admin_album_list_alphasort_start&amp;ae=admin_album_list_alphasort_end'), //cpg1.4
  array('Show number of linked files','link_pic_count',1, 'f=index.htm&amp;as=admin_album_linked_files_start&amp;ae=admin_album_linked_files_end'), //cpg1.4

  'תצוגת תמונות מוקטנות',
  array('Number of columns on thumbnail page', 'thumbcols', 0, 'f=index.htm&amp;as=admin_thumbnail_columns&amp;ae=admin_thumbnail_columns_end'), //cpg1.4
  array('Number of rows on thumbnail page', 'thumbrows', 0, 'f=index.htm&amp;as=admin_thumbnail_rows&amp;ae=admin_thumbnail_rows_end'), //cpg1.4
  array('Maximum number of tabs to display', 'max_tabs', 10, 'f=index.htm&amp;as=admin_thumbnail_tabs&amp;ae=admin_thumbnail_tabs_end'), //cpg1.4
  array('Display file caption (in addition to title) below the thumbnail', 'caption_in_thumbview', 1, 'f=index.htm&amp;as=admin_thumbnail_display_caption&amp;ae=admin_thumbnail_display_caption_end'), //cpg1.4
  array('Display number of views below the thumbnail', 'views_in_thumbview', 1, 'f=index.htm&amp;as=admin_thumbnail_display_views&amp;ae=admin_thumbnail_display_views_end'), //cpg1.4
  array('Display number of comments below the thumbnail', 'display_comment_count', 1, 'f=index.htm&amp;as=admin_thumbnail_display_comments&amp;ae=admin_thumbnail_display_comments_end'), //cpg1.4
  array('Display uploader name below the thumbnail', 'display_uploader', 1, 'f=index.htm&amp;as=admin_thumbnail_display_uploader&amp;ae=admin_thumbnail_display_uploader_end'), //cpg1.4
  //array('Display name of admin uploaders below the thumbnail', 'display_admin_uploader', 1, 'f=index.htm&amp;as=admin_thumbnail_display_admin_uploader&amp;ae=admin_thumbnail_display_admin_uploader_end'), //cpg1.4
  array('Display file name below the thumbnail', 'display_filename', 1, 'f=index.htm&amp;as=admin_thumbnail_display_filename&amp;ae=admin_thumbnail_display_filename_end'), //cpg1.4
  //array('Display album description', 'alb_desc_thumb', 1, 'f=index.htm&amp;as=admin_thumbnail_display_description&amp;ae=admin_thumbnail_display_description_end'), //cpg1.4
  array('Default sort order for files', 'default_sort_order', 3, 'f=index.htm&amp;as=admin_thumbnail_default_sortorder&amp;ae=admin_thumbnail_default_sortorder_end'), //cpg1.4
  array('Minimum number of votes for a file to appear in the \'top-rated\' list', 'min_votes_for_rating', 0, 'f=index.htm&amp;as=admin_thumbnail_minimum_votes&amp;ae=admin_thumbnail_minimum_votes_end'), //cpg1.4

  'תצוגת תמונות', //cpg1.4
  array('Width of the table for file display (pixels or %)', 'picture_table_width', 0, 'f=index.htm&amp;as=admin_image_comment_table-width&amp;ae=admin_image_comment_table-width_end'), //cpg1.4
  array('File information is visible by default', 'display_pic_info', 1, 'f=index.htm&amp;as=admin_image_comment_info_visible&amp;ae=admin_image_comment_info_visible_end'), //cpg1.4
  array('Max length for an image description', 'max_img_desc_length', 0, 'f=index.htm&amp;as=admin_image_comment_descr_length&amp;ae=admin_image_comment_descr_length_end'), //cpg1.4
  array('Max number of characters in a word', 'max_com_wlength', 0, 'f=index.htm&amp;as=admin_image_comment_chars_per_word&amp;ae=admin_image_comment_chars_per_word_end'), //cpg1.4
  array('Show film strip', 'display_film_strip', 1, 'f=index.htm&amp;as=admin_image_comment_filmstrip_toggle&amp;ae=admin_image_comment_filmstrip_toggle_end'), //cpg1.4
  array('Display file name under film strip thumbnail', 'display_film_strip_filename', 1, 'f=index.htm&amp;as=admin_image_comment_display_film_strip_filename&amp;ae=admin_image_comment_display_film_strip_filename_end'), //cpg1.4
  array('Number of items in film strip', 'max_film_strip_items', 0, 'f=index.htm&amp;as=admin_image_comment_filmstrip_number&amp;ae=admin_image_comment_filmstrip_number_end'), //cpg1.4
  array('Slideshow interval in milliseconds (1 second = 1000 milliseconds)', 'slideshow_interval', 0, 'f=index.htm&amp;as=admin_image_comment_slideshow_interval&amp;ae=admin_image_comment_slideshow_interval_end'), //cpg1.4

  'הגדרות הערות', //cpg1.4
  array('Filter bad words in comments', 'filter_bad_words', 1, 'f=index.htm&amp;as=admin_image_comment_bad_words&amp;ae=admin_image_comment_bad_words_end'), //cpg1.4
  array('Allow smiles in comments', 'enable_smilies', 1, 'f=index.htm&amp;as=admin_image_comment_smilies&amp;ae=admin_image_comment_smilies_end'), //cpg1.4
  array('Allow several consecutive comments on one file from the same user (disable flood protection)', 'disable_comment_flood_protect', 1, 'f=index.htm&amp;as=admin_image_comment_flood&amp;ae=admin_image_comment_flood_end'), //cpg1.4
  array('Max number of lines in a comment', 'max_com_lines', 0, 'f=index.htm&amp;as=admin_image_comment_lines&amp;ae=admin_image_comment_lines_end'), //cpg1.4
  array('Maximum length of a comment', 'max_com_size', 0, 'f=index.htm&amp;as=admin_image_comment_length&amp;ae=admin_image_comment_length_end'), //cpg1.4
  array('Notify admin of comments by email', 'email_comment_notification', 1, 'f=index.htm&amp;as=admin_image_comment_admin_notify&amp;ae=admin_image_comment_admin_notify_end'), //cpg1.4
  array('Sort order of comments', 'comments_sort_descending', 17, 'f=index.htm&amp;as=admin_comment_sort_start&amp;ae=admin_comment_sort_end'), //cpg1.4
  array('Prefix for anonymous comments authors', 'comments_anon_pfx', 0, 'f=index.htm&amp;as=comments_anon_pfx&amp;ae=comments_anon_pfx_end'), //cpg1.4

  'הגדרות קבצים ותמונות מוקטנות',
  array('Quality for JPEG files', 'jpeg_qual', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_jpeg_quality&amp;ae=admin_picture_thumbnail_jpeg_quality_end'), //cpg1.4
  array('Max dimension of a thumbnail <a href="#notice2" class="clickable_option">**</a>', 'thumb_width', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max-dimension&amp;ae=admin_picture_thumbnail_max-dimension_end'), //cpg1.4
  array('Use dimension ( width or height or Max aspect for thumbnail ) <a href="#notice2" class="clickable_option">**</a>', 'thumb_use', 7, 'f=index.htm&amp;as=admin_picture_thumbnail_use-dimension&amp;ae=admin_picture_thumbnail_use-dimension_end'), //cpg1.4
  array('Create intermediate pictures','make_intermediate',1, 'f=index.htm&amp;as=admin_picture_thumbnail_intermediate_toggle&amp;ae=admin_picture_thumbnail_intermediate_toggle_end'), //cpg1.4
  array('Max width or height of an intermediate picture/video <a href="#notice2" class="clickable_option">**</a>', 'picture_width', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_intermediate_dimension&amp;ae=admin_picture_thumbnail_intermediate_dimension_end'), //cpg1.4
  array('Max size for uploaded files (KB)', 'max_upl_size', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max_upload_size&amp;ae=admin_picture_thumbnail_max_upload_size_end'), //cpg1.4
  array('Max width or height for uploaded pictures/videos (pixels)', 'max_upl_width_height', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max_upload_dimension&amp;ae=admin_picture_thumbnail_max_upload_dimension_end'), //cpg1.4
  array('Auto resize images that are larger than max width or height', 'auto_resize', 16, 'f=index.htm&amp;as=admin_picture_thumbnail_auto-resize&amp;ae=admin_picture_thumbnail_auto-resize_end'), //cpg1.4

  'הגדרות מתקדמות של קבצים ותמונות מוקטנות',
  array('Albums can be private (Note: if you switch from \'yes\' to \'no\' any current private albums will become public)', 'allow_private_albums', 1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_private_toggle&amp;ae=admin_picture_thumb_advanced_private_toggle_end'), //cpg1.4
  array('Show private album Icon to unlogged user','show_private',1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_private_icon_show&amp;ae=admin_picture_thumb_advanced_private_icon_show_end'), //cpg1.4
  array('Characters forbidden in filenames', 'forbiden_fname_char',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_filename_forbidden_chars&amp;ae=admin_picture_thumb_advanced_filename_forbidden_chars_end'), //cpg1.4
  //array('Accepted file extensions for uploaded pictures', 'allowed_file_extensions',0, 'f=index.htm&amp;as=&amp;ae=_end'), //cpg1.4
  array('Allowed image types', 'allowed_img_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_pic_extensions&amp;ae=admin_picture_thumb_advanced_pic_extensions_end'), //cpg1.4
  array('Allowed movie types', 'allowed_mov_types',0, 'f=index.htm&amp;as=admin_thumbs_advanced_movie&amp;ae=admin_thumbs_advanced_movie_end'), //cpg1.4
  array('Movie Playback Autostart', 'media_autostart',1, 'f=index.htm&amp;as=admin_movie_autoplay&amp;ae=admin_movie_autoplay_end'), //cpg1.4
  array('Allowed audio types', 'allowed_snd_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_audio_extensions&amp;ae=admin_picture_thumb_advanced_audio_extensions_end'), //cpg1.4
  array('Allowed document types', 'allowed_doc_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_doc_extensions&amp;ae=admin_picture_thumb_advanced_doc_extensions_end'), //cpg1.4
  array('Method for resizing images','thumb_method',2, 'f=index.htm&amp;as=admin_picture_thumb_advanced_resize_method&amp;ae=admin_picture_thumb_advanced_resize_method_end'), //cpg1.4
  array('Path to ImageMagick \'convert\' utility (example /usr/bin/X11/)', 'impath', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_im_path&amp;ae=admin_picture_thumb_advanced_im_path_end'), //cpg1.4
  //array('Allowed image types (only valid for ImageMagick)', 'allowed_img_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_allowed_imagetypes&amp;ae=admin_picture_thumb_advanced_allowed_imagetypes_end'), //cpg1.4
  array('Command line options for ImageMagick', 'im_options', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_im_commandline&amp;ae=admin_picture_thumb_advanced_im_commandline_end'), //cpg1.4
  array('Read EXIF data in JPEG files', 'read_exif_data', 13, 'f=index.htm&amp;as=admin_picture_thumb_advanced_exif&amp;ae=admin_picture_thumb_advanced_exif_end'), //cpg1.4
  array('Read IPTC data in JPEG files', 'read_iptc_data', 1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_iptc&amp;ae=admin_picture_thumb_advanced_iptc_end'), //cpg1.4
  array('The album directory <a href="#notice1" class="clickable_option">*</a>', 'fullpath', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_albums_dir&amp;ae=admin_picture_thumb_advanced_albums_dir_end'), //cpg1.4
  array('The directory for user files <a href="#notice1" class="clickable_option">*</a>', 'userpics', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_userpics_dir&amp;ae=admin_picture_thumb_advanced_userpics_dir_end'), //cpg1.4
  array('The prefix for intermediate pictures <a href="#notice1" class="clickable_option">*</a>', 'normal_pfx', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_intermediate_prefix&amp;ae=admin_picture_thumb_advanced_intermediate_prefix_end'), //cpg1.4
  array('The prefix for thumbnails <a href="#notice1" class="clickable_option">*</a>', 'thumb_pfx', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_thumbs_prefix&amp;ae=admin_picture_thumb_advanced_thumbs_prefix_end'), //cpg1.4
  array('Default mode for directories', 'default_dir_mode', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_chmod_folder&amp;ae=admin_picture_thumb_advanced_chmod_folder_end'), //cpg1.4
  array('Default mode for files', 'default_file_mode', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_chmod_files&amp;ae=admin_picture_thumb_advanced_chmod_files_end'), //cpg1.4

  'הגדרות משתמשים',
  array('Allow new user registrations', 'allow_user_registration', 1, 'f=index.htm&amp;as=admin_allow_registration&amp;ae=admin_allow_registration_end'), //cpg1.4
  array('Allow unlogged users (guest or anonymous) access', 'allow_unlogged_access', 1, 'f=index.htm&amp;as=admin_allow_unlogged_access&amp;ae=admin_allow_unlogged_access_end'), //cpg1.4
  array('User registration requires email verification', 'reg_requires_valid_email', 1, 'f=index.htm&amp;as=admin_registration_verify&amp;ae=admin_registration_verify_end'), //cpg1.4
  array('Notify admin of user registration by email', 'reg_notify_admin_email', 1, 'f=index.htm&amp;as=admin_registration_notify&amp;ae=admin_registration_notify_end'), //cpg1.4
  array('Admin activation of registrations', 'admin_activation', 1, 'f=index.htm&amp;as=admin_activation&amp;ae=admin_activation_end'),  //cpg1.4
  array('Allow two users to have the same email address', 'allow_duplicate_emails_addr', 1, 'f=index.htm&amp;as=admin_allow_duplicate_emails_addr&amp;ae=admin_allow_duplicate_emails_addr_end'), //cpg1.4
  array('Notify admin of user upload awaiting approval', 'upl_notify_admin_email', 1, 'f=index.htm&amp;as=admin_approval_notify&amp;ae=admin_approval_notify_end'), //cpg1.4
  array('Allow logged in users to view memberlist', 'allow_memberlist', 1, 'f=index.htm&amp;as=admin_user_memberlist&amp;ae=admin_user_memberlist_end'), //cpg1.4
  array('Allow users to change their email address in profile', 'allow_email_change', 1, 'f=index.htm&amp;as=admin_user_allow_email_change&amp;ae=admin_user_allow_email_change_end'), //cpg1.4
  array('Allow users to retain control over their pics in public galleries', 'users_can_edit_pics', 1, 'f=index.htm&amp;as=admin_user_editpics_public_start&amp;ae=admin_user_editpics_public_end'), //cpg1.4
  array('Number of failed login attempts until temporary ban (to avoid brute force attacks)', 'login_threshold', 0, 'f=index.htm&amp;as=admin_user_login_start&amp;ae=admin_user_login_end'), //cpg1.4
  array('Duration of a temporary ban after failed logins', 'login_expiry', 0, 'f=index.htm&amp;as=admin_user_login_start&amp;ae=admin_user_login_end'), //cpg1.4
  array('Enable Report to Admin', 'report_post', 1, 'f=index.htm&amp;as=admin_user_enable_report&amp;ae=admin_user_enable_report_end'),  //cpg1.4

// custom profile fields,  //cpg1.4
  'Custom fields for user profile (leave blank if unused).
  Use Profile 6 for long entries, such as biographies', //cpg1.4
  array('Profile 1 name', 'user_profile1_name', 0, 'f=index.htm&amp;as=admin_custom&amp;ae=admin_custom_end'), //cpg1.4
  array('Profile 2 name', 'user_profile2_name', 0), //cpg1.4
  array('Profile 3 name', 'user_profile3_name', 0), //cpg1.4
  array('Profile 4 name', 'user_profile4_name', 0), //cpg1.4
  array('Profile 5 name', 'user_profile5_name', 0), //cpg1.4
  array('Profile 6 name', 'user_profile6_name', 0), //cpg1.4

  'Custom fields for image description (leave blank if unused)',
  array('Field 1 name', 'user_field1_name', 0, 'f=index.htm&amp;as=admin_custom_image&amp;ae=admin_custom_image_end'), //cpg1.4
  array('Field 2 name', 'user_field2_name', 0),
  array('Field 3 name', 'user_field3_name', 0),
  array('Field 4 name', 'user_field4_name', 0),

  'Cookies settings',
  array('Cookie name', 'cookie_name', 0, 'f=index.htm&amp;as=admin_cookie_name&amp;ae=admin_cookie_name_end'), //cpg1.4
  array('Cookie path', 'cookie_path', 0, 'f=index.htm&amp;as=admin_cookie_path&amp;ae=admin_cookie_path_end'), //cpg1.4

  'Email settings  (usually nothing has to be changed here; leave all fields blank when not sure)', //cpg1.4
  array('SMTP Host (when left blank, sendmail will be used)', 'smtp_host', 0, 'f=index.htm&amp;as=admin_email&amp;ae=admin_email_end'), //cpg1.4
  array('SMTP Username', 'smtp_username', 0), //cpg1.4
  array('SMTP Password', 'smtp_password', 0), //cpg1.4

  'Logging and statistics', //cpg1.4
  array('Logging mode <a href="#notice3" class="clickable_option">***</a>', 'log_mode', 11, 'f=index.htm&amp;as=admin_logging_log_mode&amp;ae=admin_logging_log_mode_end'), //cpg1.4
  array('Log ecards', 'log_ecards', 1, 'f=index.htm&amp;as=admin_general_log_ecards&amp;ae=admin_general_log_ecards_end'), //cpg1.4
  array('Keep detailed vote statistics','vote_details',1, 'f=index.htm&amp;as=admin_logging_votedetails&amp;ae=admin_logging_votedetails_end'), //cpg1.4
  array('Keep detailed hit statistics','hit_details',1, 'f=index.htm&amp;as=admin_logging_hitdetails&amp;ae=admin_logging_hitdetails_end'), //cpg1.4

  'Maintenance settings', //cpg1.4
  array('Enable debug mode', 'debug_mode', 9, 'f=index.htm&amp;as=debug_mode&amp;ae=debug_mode_end'), //cpg1.4
  array('Display notices in debug mode', 'debug_notice', 1, 'f=index.htm&amp;as=admin_misc_debug_notices&amp;ae=admin_misc_debug_notices_end'), //cpg1.4
  array('Gallery is offline', 'offline', 1, 'f=index.htm&amp;as=admin_general_offline&amp;ae=admin_general_offline_end'), //cpg1.4
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
  'no_udp_needed' => 'לא נדרש עדכון.',
  'alb_updated' => 'האלבום עודכן',
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
  'upload_success' => 'הקובץ שלך נשלח בהצלחה.<br /><br />הוא יהיה זמין לצפיה לאחר אישור המנהל.',
  'notify_admin_email_subject' => '%s - Upload notification',
  'notify_admin_email_body' => 'A picture has been uploaded by %s that needs your approval. Visit %s',
  'info' => 'מידע',
  'com_added' => 'ההערה נוספה',
  'alb_updated' => 'האלבום עודכן',
  'err_comment_empty' => 'Your comment is empty !',
  'err_invalid_fext' => 'Only files with the following extensions are accepted : <br /><br />%s.',
  'no_flood' => 'Sorry but you are already the author of the last comment posted for this file<br /><br />Edit the comment you have posted if you want to modify it',
  'redirect_msg' => 'You are being redirected.<br /><br /><br />Click \'CONTINUE\' if the page does not refresh automatically',
  'upl_success' => 'Your file was successfully added',
  'email_comment_subject' => 'Comment posted on Coppermine Photo Gallery',
  'email_comment_body' => 'Someone has posted a comment on your gallery. See it at',
  'album_not_selected' => 'לא נבחר אלבום!', //cpg1.4
  'com_author_error' => 'A registered user is using this nickname, login or use another one', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
  'caption' => 'מקרא',
  'fs_pic' => 'תמונת גודל מלא',
  'del_success' => 'נמחק בהצלחה',
  'ns_pic' => 'תמונת גודל רגיל',
  'err_del' => 'לא ניתן למחיקה',
  'thumb_pic' => 'תמונה ממוזערת',
  'comment' => 'הערה',
  'im_in_alb' => 'תמונה באלבום',
  'alb_del_success' => 'האלבום &laquo;%s&raquo; נמחק', //cpg1.4
  'alb_mgr' => 'מנהל האלבומים',
  'err_invalid_data' => 'Invalid data received in \'%s\'',
  'create_alb' => 'יוצר את האלבום \'%s\'',
  'update_alb' => 'מעדכן את אלבום \'%s\' עם הכותרת \'%s\' ועם אינדקס \'%s\'',
  'del_pic' => 'מוחק קובץ',
  'del_alb' => 'מוחק אלבום',
  'del_user' => 'Delete user',
  'err_unknown_user' => 'The selected user does not exist !',
  'err_empty_groups' => 'There\'s no group table, or the group table is empty!', //cpg1.4
  'comment_deleted' => 'Comment was succesfully deleted',
  'npic' => 'התמונה', //cpg1.4
  'pic_mgr' => 'Picture Manager', //cpg1.4
  'update_pic' => 'Updating picture \'%s\' with filename \'%s\' and index \'%s\'', //cpg1.4
  'username' => 'Username', //cpg1.4
  'anonymized_comments' => '%s comment(s) anonymized', //cpg1.4
  'anonymized_uploads' => '%s public upload(s) anonymized', //cpg1.4
  'deleted_comments' => '%s comment(s) deleted', //cpg1.4
  'deleted_uploads' => '%s public upload(s) deleted', //cpg1.4
  'user_deleted' => 'user %s deleted', //cpg1.4
  'activate_user' => 'Activate user', //cpg1.4
  'user_already_active' => 'Account has already been active', //cpg1.4
  'activated' => 'Activated', //cpg1.4
  'deactivate_user' => 'Deactivate user', //cpg1.4
  'user_already_inactive' => 'Account has already been inactive', //cpg1.4
  'deactivated' => 'Deactivated', //cpg1.4
  'reset_password' => 'Reset password(s)', //cpg1.4
  'password_reset' => 'Password reset to %s', //cpg1.4
  'change_group' => 'Change primary group', //cpg1.4
  'change_group_to_group' => 'Changing from %s to %s', //cpg1.4
  'add_group' => 'Add secondary group', //cpg1.4
  'add_group_to_group' => 'Adding user %s to group %s. He\'s now member of %s as primary and of %s as secondary membergroup(s).', //cpg1.4
  'status' => 'Status', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File displayecard.php
// ------------------------------------------------------------------------- //

if (defined('DISPLAYECARD_PHP')) {

$lang_displayecard_php = array(
  'invalid_data' => 'The data for the ecard you are trying to access has been corrupted by your mail client. Check the link is complete.', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File displayimage.php
// ------------------------------------------------------------------------- //

if (defined('DISPLAYIMAGE_PHP')){

$lang_display_image_php = array(
  'confirm_del' => 'אתה בטוח שברצונך למחוק קובץ זה? \\nההערות ימחקו גם הן.', //js-alert
  'del_pic' => 'מחק קובץ זה',
  'size' => '%s על %s פיקסלים',
  'views' => '%s פעמים',
  'slideshow' => 'מצגת',
  'stop_slideshow' => 'הפסק מצגת',
  'view_fs' => 'לחץ לתצוגת גודל מלא',
  'edit_pic' => 'עריכת מידע תמונה', //cpg1.4
  'crop_pic' => 'חיתוך וסיבוב',
  'set_player' => 'Change player',
);

$lang_picinfo = array(
  'title' =>'מידע על הקובץ',
  'Filename' => 'שם הקובץ',
  'Album name' => 'שם האלבום',
  'Rating' => 'דירוג (%s קולות)',
  'Keywords' => 'מילות מפתח',
  'File Size' => 'גודל הקובץ',
  'Date Added' => 'תאריך הוספה', //cpg1.4
  'Dimensions' => 'מימדים',
  'Displayed' => 'הוצג',
  'URL' => 'כתובת', //cpg1.4
  'Make' => 'Make', //cpg1.4
  'Model' => 'Model', //cpg1.4
  'DateTime' => 'Date Time', //cpg1.4
  'ISOSpeedRatings'=>'ISO', //cpg1.4
  'MaxApertureValue' => 'Max Aperture', //cpg1.4
  'FocalLength' => 'Focal length', //cpg1.4
  'Comment' => 'הערה',
  'addFav'=>'הוסף למועדפים',
  'addFavPhrase'=>'מועדפים',
  'remFav'=>'הסר ממועדפים',
  'iptcTitle'=>'IPTC Title',
  'iptcCopyright'=>'IPTC Copyright',
  'iptcKeywords'=>'IPTC Keywords',
  'iptcCategory'=>'IPTC Category',
  'iptcSubCategories'=>'IPTC Sub Categories',
  'ColorSpace' => 'Color Space', //cpg1.4
  'ExposureProgram' => 'Exposure Program', //cpg1.4
  'Flash' => 'Flash', //cpg1.4
  'MeteringMode' => 'Metering Mode', //cpg1.4
  'ExposureTime' => 'Exposure Time', //cpg1.4
  'ExposureBiasValue' => 'Exposure Bias', //cpg1.4
  'ImageDescription' => ' Image Description', //cpg1.4
  'Orientation' => 'Orientation', //cpg1.4
  'xResolution' => 'X Resolution', //cpg1.4
  'yResolution' => 'Y Resolution', //cpg1.4
  'ResolutionUnit' => 'Resolution Unit', //cpg1.4
  'Software' => 'Software', //cpg1.4
  'YCbCrPositioning' => 'YCbCrPositioning', //cpg1.4
  'ExifOffset' => 'Exif Offset', //cpg1.4
  'IFD1Offset' => 'IFD1 Offset', //cpg1.4
  'FNumber' => 'FNumber', //cpg1.4
  'ExifVersion' => 'Exif Version', //cpg1.4
  'DateTimeOriginal' => 'DateTime Original', //cpg1.4
  'DateTimedigitized' => 'DateTime digitized', //cpg1.4
  'ComponentsConfiguration' => 'Components Configuration', //cpg1.4
  'CompressedBitsPerPixel' => 'Compressed Bits Per Pixel', //cpg1.4
  'LightSource' => 'Light Source', //cpg1.4
  'ISOSetting' => 'ISO Setting', //cpg1.4
  'ColorMode' => 'Color Mode', //cpg1.4
  'Quality' => 'Quality', //cpg1.4
  'ImageSharpening' => 'Image Sharpening', //cpg1.4
  'FocusMode' => 'Focus Mode', //cpg1.4
  'FlashSetting' => 'Flash Setting', //cpg1.4
  'ISOSelection' => 'ISO Selection', //cpg1.4
  'ImageAdjustment' => 'Image Adjustment', //cpg1.4
  'Adapter' => 'Adapter', //cpg1.4
  'ManualFocusDistance' => 'Manual Focus Distance', //cpg1.4
  'DigitalZoom' => 'Digital Zoom', //cpg1.4
  'AFFocusPosition' => 'AF Focus Position', //cpg1.4
  'Saturation' => 'Saturation', //cpg1.4
  'NoiseReduction' => 'Noise Reduction', //cpg1.4
  'FlashPixVersion' => 'Flash Pix Version', //cpg1.4
  'ExifImageWidth' => 'Exif Image Width', //cpg1.4
  'ExifImageHeight' => 'Exif Image Height', //cpg1.4
  'ExifInteroperabilityOffset' => 'Exif Interoperability Offset', //cpg1.4
  'FileSource' => 'File Source', //cpg1.4
  'SceneType' => 'Scene Type', //cpg1.4
  'CustomerRender' => 'Customer Render', //cpg1.4
  'ExposureMode' => 'Exposure Mode', //cpg1.4
  'WhiteBalance' => 'White Balance', //cpg1.4
  'DigitalZoomRatio' => 'Digital Zoom Ratio', //cpg1.4
  'SceneCaptureMode' => 'Scene Capture Mode', //cpg1.4
  'GainControl' => 'Gain Control', //cpg1.4
  'Contrast' => 'Contrast', //cpg1.4
  'Sharpness' => 'Sharpness', //cpg1.4
  'ManageExifDisplay' => 'Manage Exif Display', //cpg1.4
  'submit' => 'Submit', //cpg1.4
  'success' => 'Information updated successfully.', //cpg1.4
  'details' => 'Details', //cpg1.4
);

$lang_display_comments = array(
  'OK' => 'אישור',
  'edit_title' => 'ערוך הערה זו',
  'confirm_delete' => 'האם אתה בטוח שברצונך למחוק הערה זו?', //js-alert
  'add_your_comment' => 'הוסף הערה',
  'name'=>'שם',
  'comment'=>'הערה:',
  'your_name' => '',
  'report_comment_title' => 'דווח למנהל על הערה זו', //cpg1.4
);

$lang_fullsize_popup = array(
  'click_to_close' => 'לחץ על התמונה לסגירת החלון',
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
  'title' => 'שלח גלוייה אלקטרונית',
  'invalid_email' => '<font color="red"><b>אזהרה</b></font>: כתובת דואל לא תקינה:', //cpg1.4
  'ecard_title' => 'An e-card from %s for you',
  'error_not_image' => 'Only images can be sent as an ecard.',
  'view_ecard' => 'Alternate link if the e-card does not display correctly', //cpg1.4
  'view_ecard_plaintext' => 'To view the ecard, copy and paste this url into your browser\'s address bar:', //cpg1.4
  'view_more_pics' => 'הצג תמונות נוספות !', //cpg1.4
  'send_success' => 'גלוייתך נשלחה',
  'send_failed' => 'Sorry but the server can\'t send your e-card...',
  'from' => 'מאת',
  'your_name' => 'שמך',
  'your_email' => 'כתובת הדואל שלך',
  'to' => 'אל',
  'rcpt_name' => 'שם הנמען',
  'rcpt_email' => 'כתובת הדואל של הנמען',
  'greetings' => 'כותרת', //cpg1.4
  'message' => 'הודעה', //cpg1.4
  'ecards_footer' => 'Sent by %s from IP %s at %s (Gallery time)', //cpg1.4
  'preview' => 'תצוגה מקדימה של הגלוייה האלקטרונית', //cpg1.4
  'preview_button' => 'תצוגה מקדימה', //cpg1.4
  'submit_button' => 'שלח גלוייה', //cpg1.4
  'preview_view_ecard' => 'כאן ימוקם הקישור החלופי לגלוייה לאחר שתיווצר. הקישור לא פועל עבור התצוגה המקדימה.', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File report_file.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('REPORT_FILE_PHP') || defined('DISPLAYREPORT_PHP')) $lang_report_php =array(
  'title' => 'Report to administrator', //cpg1.4
  'invalid_email' => '<b>Warning</b> : invalid email address !', //cpg1.4
  'report_subject' => 'A report from %s on a gallery %s', //cpg1.4
  'view_report' => 'Alternate link if the report does not display correctly', //cpg1.4
  'view_report_plaintext' => 'To view the report, copy and paste this url into your browser\'s address bar:', //cpg1.4
  'view_more_pics' => 'Gallery', //cpg1.4
  'send_success' => 'Your report was sent', //cpg1.4
  'send_failed' => 'Sorry but the server can\'t send your report...', //cpg1.4
  'from' => 'From', //cpg1.4
  'your_name' => 'Your name', //cpg1.4
  'your_email' => 'Your email address', //cpg1.4
  'to' => 'To', //cpg1.4
  'administrator' => 'Administrator/Mod', //cpg1.4
  'subject' => 'Subject', //cpg1.4
  'comment_field_name' => 'Reporting on Comment by "%s"', //cpg1.4
  'reason' => 'Reason', //cpg1.4
  'message' => 'Message', //cpg1.4
  'report_footer' => 'Sent by %s from IP %s at %s (Gallery time)', //cpg1.4
  'obscene' => 'obscene', //cpg1.4
  'offensive' => 'offensive', //cpg1.4
  'misplaced' => 'off-topic/misplaced', //cpg1.4
  'missing' => 'missing', //cpg1.4
  'issue' => 'error/cannot view', //cpg1.4
  'other' => 'other', //cpg1.4
  'refers_to' => 'File report refers to', //cpg1.4
  'reasons_list_heading' => 'reason(s) for report:', //cpg1.4
  'no_reason_given' => 'no reason was given', //cpg1.4
  'go_comment' => 'Go to comment', //cpg1.4
  'view_comment' => 'View full report with comment', //cpg1.4
  'type_file' => 'קובץ', //cpg1.4
  'type_comment' => 'comment', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
  'pic_info' => 'מידע על הקובץ',
  'album' => 'אלבום',
  'title' => 'כותרת',
  'filename' => 'שם הקובץ', //cpg1.4
  'desc' => 'תיאור',
  'keywords' => 'מילות מפתח',
  'new_keyword' => 'מילות מפתח חדשות', //cpg1.4
  'new_keywords' => 'New keywords found', //cpg1.4
  'existing_keyword' => 'Existing keyword', //cpg1.4
  'pic_info_str' => '%s &times; %s - %s ק"ב - %s צפיות - %s הצבעות',
  'approve' => 'אשר קובץ',
  'postpone_app' => 'השהה אישור',
  'del_pic' => 'מחק קובץ',
  'del_all' => 'מחיקת כל הקבצים', //cpg1.4
  'read_exif' => 'Read EXIF info again',
  'reset_view_count' => 'איפוס מונה תצוגה',
  'reset_all_view_count' => 'איפוס כל מוני התצוגה', //cpg1.4
  'reset_votes' => 'איפוס הצבעות',
  'reset_all_votes' => 'איפוס כל ההצבעות', //cpg1.4
  'del_comm' => 'מחיקת הערות',
  'del_all_comm' => 'מחיקת כל ההערות', //cpg1.4
  'upl_approval' => 'אישור קבצים שנשלחו', //cpg1.4
  'edit_pics' => 'עריכת קבצים',
  'see_next' => 'See next files',
  'see_prev' => 'See previous files',
  'n_pic' => '%s קבצים',
  'n_of_pic_to_disp' => 'מספר קבצים לתצוגה',
  'apply' => 'החל שינויים',
  'crop_title' => 'Coppermine Picture Editor',
  'preview' => 'Preview',
  'save' => 'Save picture',
  'save_thumb' =>'Save as thumbnail',
  'gallery_icon' => 'הפוך תמונה זו לסמל שלי', //cpg1.4
  'sel_on_img' =>'The selection has to be entirely on the image!', //js-alert
  'album_properties' =>'מאפייני האלבום', //cpg1.4
  'parent_category' =>'קטגוריית אם', //cpg1.4
  'thumbnail_view' =>'תמונות האלבום', //cpg1.4
  'select_unselect' =>'סמן/נקה הכל', //cpg1.4
  'file_exists' => "Destination file '%s' already exists.", //cpg1.4
  'rename_failed' => "Failed to rename '%s' to '%s'.", //cpg1.4
  'src_file_missing' => "Source file '%s' is missing.", // cpg 1.4
  'mime_conv' => "Cannot convert file from '%s' to '%s'",//cpg1.4
  'forb_ext' => 'Forbidden file extension.',//cpg1.4
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
  array('How do I register?', 'Go to &quot;Register&quot; and fill out the required fields (and the optional ones if you want to).<br />If the Administrator has Email Activation enabled, then after submitting your information you should recieve an email message at the address that you have submitted while registering, giving you instructions on how to activate your membership. Your membership must be activated in order for you to login.', 'allow_user_registration', '1'), //cpg1.4
  array('How Do I login?', 'Go to &quot;Login&quot;, submit your username and password and check &quot;Remember Me&quot; so you will be logged in on the site if you should leave it.<br /><b>IMPORTANT:Cookies must be enabled and the cookie from this site must not be deleted in order to use &quot;Remember Me&quot;.</b>', 'offline', 0),
  array('Why can I not login?', 'Did you register and click the link that was sent to you via email?. The link will activate your account. For other login problems contact the site administrator.', 'offline', 0),
  array('What if I forgot my password?', 'If this site has a &quot;Forgot password&quot; link then use it. Other than that contact the site administrator for a new password.', 'offline', 0),
  //array('What if I changed my email address?', 'Just simply login and change your email address through &quot;Profile&quot;', 'offline', 0),
  array('How do I save a picture to &quot;My Favorites&quot;?', 'Click on a picture and click on the &quot;picture info&quot; link (<img src="images/info.gif" width="16" height="16" border="0" alt="Picture information" />); scroll down to the picture information set and click &quot;Add to fav&quot;.<br />The administrator may have the &quot;picture information&quot; on by default.<br />IMPORTANT:Cookies must be enabled and the cookie from this site must not be deleted.', 'offline', 0),
  array('How do I rate a file?', 'Click on a thumbnail and go to the bottom and choose a rating.', 'offline', 0),
  array('How do I post a comment for a picture?', 'Click on a thumbnail and go to the bottom and post a comment.', 'offline', 0),
  array('How do I upload a file?', 'Go to &quot;Upload&quot;and select the album that you want to upload to. Click &quot;Browse,&quot; find the file to upload, and click &quot;open.&quot; Add a title and description if you want. Click &quot;Submit&quot;.<br /><br />Alternatively, for those users using <b>Windows XP</b>, you can upload multiple files directly to your own private albums using the XP Publishing wizard.<br />For instructions on how, and to get the required registry file, click <a href="xp_publish.php">here.</a>', 'allow_private_albums', 1), //cpg1.4
  array('Where do I upload a picture to?', 'You will be able to upload a file to one of your albums in &quot;My Gallery&quot;. The Administrator may also allow you to upload a file to one or more of the albums in the Main Gallery.', 'allow_private_albums', 0),
  array('What type and size of a file can I upload?', 'The size and type (jpg, png, etc.) is up to the administrator.', 'offline', 0),
  array('How do I create, rename or delete an album in &quot;My Gallery&quot;?', 'You should already be in &quot;Admin-Mode&quot;<br />Go to &quot;Create/Order My Albums&quot;and click &quot;New&quot;. Change &quot;New Album&quot; to your desired name.<br />You can also rename any of the albums in your gallery.<br />Click &quot;Apply Modifications&quot;.', 'allow_private_albums', 0),
  array('How can I modify and restrict users from viewing my albums?', 'You should already be in &quot;Admin Mode&quot;<br />Go to &quot;Modify My Albums. On the &quot;Update Album&quot; bar, select the album that you want to modify.<br />Here, you can change the name, description, thumbnail picture, restrict viewing and comment/rating permissions.<br />Click &quot;Update Album&quot;.', 'allow_private_albums', 0),
  array('How can I view other users\' galleries?', 'Go to &quot;Album List&quot; and select &quot;User Galleries&quot;.', 'allow_private_albums', 0),
  array('What are cookies?', 'Cookies are a plain text piece of data that is sent from a website and is put on to your computer.<br />Cookies usually allow a user to leave and return to the site without having to login again and other various chores.', 'offline', 0),
  array('Where can I get this program for my site?', 'Coppermine is a free Multimedia Gallery, released under GNU GPL. It is full of features and has been ported to various platforms. Visit the <a href="http://coppermine-gallery.net/">Coppermine Home Page</a> to find out more or download it.', 'offline', 0),

  'Navigating the Site',
  array('What\'s &quot;Album List&quot;?', 'This will show you the entire category you are currently in, with a link to each album. If you are not in a category, it will show you the entire gallery with a link to each category. Thumbnails may be a link to the category.', 'offline', 0),
  array('What\'s &quot;My Gallery&quot;?', 'This feature lets users create their own galleries and add, delete or modify albums as well as upload to them.', 'allow_private_albums', 1), //cpg1.4
  array('What\'s the difference between &quot;Admin Mode&quot; and &quot;User Mode&quot;?', 'This feature, when in admin-mode, allows a user to modify their gallery (as well as others if allowed by the administrator).', 'allow_private_albums', 0),
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
  'enter_email' => 'Enter your email address', //cpg1.4
  'submit' => 'go',
  'illegal_session' => 'Forgot password session invalid or has expired.', //cpg1.4
  'failed_sending_email' => 'The password reminder email can\'t be sent !',
  'email_sent' => 'An email with your username and new password was sent to %s', //cpg1.4
  'verify_email_sent' => 'An email has been sent to %s. Please check your email to complete the process.', //cpg1.4
  'err_unk_user' => 'Selected user does not exist!',
  'account_verify_subject' => '%s - New password request', //cpg1.4
  'account_verify_body' => 'You have requested to a new password. If you would like to proceed with having a new password sent to you, click on the following link:

%s', //cpg1.4
  'passwd_reset_subject' => '%s - Your New Password', //cpg1.4
  'passwd_reset_body' => 'Here is the new password you requested:
Username: %s
Password: %s
Click %s to log in.', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
  'group_name' => 'Group', //cpg1.4
  'permissions' => 'Permissions', //cpg1.4
  'public_albums' => 'Public albums upload', //cpg1.4
  'personal_gallery' => 'Personal gallery', //cpg1.4
  'upload_method' => 'Upload method', //cpg1.4
  'disk_quota' => 'Quota', //cpg1.4
  'rating' => 'Rating', //cpg1.4
  'ecards' => 'Ecards', //cpg1.4
  'comments' => 'Comments', //cpg1.4
  'allowed' => 'Allowed', //cpg1.4
  'approval' => 'Approval', //cpg1.4
  'boxes_number' => 'No. of boxes', //cpg1.4
  'variable' => 'variable', //cpg1.4
  'fixed' => 'fixed', //cpg1.4
  'apply' => 'Apply modifications',
  'create_new_group' => 'Create new group',
  'del_groups' => 'Delete selected group(s)',
  'confirm_del' => 'Warning, when you delete a group, users that belong to this group will be transferred to the \'Registered\' group !\n\nDo you want to proceed ?', //js-alert
  'title' => 'Manage user groups',
  'num_file_upload' => 'File upload boxes', //cpg1.4
  'num_URI_upload' => 'URI upload boxes', //cpg1.4
  'reset_to_default' => 'Reset to default name (%s) - recommended!', //cpg1.4
  'error_group_empty' => 'Group table was empty !<br /><br />Default groups created, please reload this page', //cpg1.4
  'explain_greyed_out_title' => 'Why is this row greyed out?', //cpg1.4
  'explain_guests_greyed_out_text' => 'You can not change the properties of this group because you set the option &quot; Allow unlogged users (guest or anonymous) access&quot; to &quot;No&quot; on the config page. All guest (members of the group %s) can\'t do anything but login; therefor group settings don\'t apply for them.', //cpg1.4
  'explain_banned_greyed_out_text' => 'You can not change the properties of the group %s because it\'s members can\'t do anything anyway.', //cpg1.4
  'group_assigned_album' => 'assigned album(s)', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
  'welcome' => 'Welcome !',
);

$lang_album_admin_menu = array(
  'confirm_delete' => 'אתה בטוח שברצונך למחוק אלבום זה? \\nכל הקבצים וההערות ימחקו גם הם.', //js-alert
  'delete' => 'מחיקה',
  'modify' => 'מאפיינים',
  'edit_pics' => 'עריכת קבצים',
);

$lang_list_categories = array(
  'home' => 'ראשי',
  'stat1' => '<b>[pictures]</b> קבצים ב<b>[albums]</b> אלבומים ו-<b>[cat]</b> קטגוריות עם <b>[comments]</b> הערות שנצפו <b>[views]</b> פעמים',
  'stat2' => '<b>[pictures]</b> קבצים ב<b>[albums]</b> אלבומים אשר נצפו<b>[views]</b> פעמים',
  'xx_s_gallery' => '%s\'s Gallery',
  'stat3' => '<b>[pictures]</b> קבצים ב<b>[albums]</b> אלבומים עם <b>[comments]</b> הערות אשר נצפו <b>[views]</b> פעמים',
);

$lang_list_users = array(
  'user_list' => 'User list',
  'no_user_gal' => 'There are no user galleries',
  'n_albums' => '%s album(s)',
  'n_pics' => '%s file(s)',
);

$lang_list_albums = array(
  'n_pictures' => '%s קבצים',
  'last_added' => ', האחרון התווסף ב%s',
  'n_link_pictures' => '%s linked files', //cpg1.4
  'total_pictures' => '%s files total', //cpg1.4
);

}

// ------------------------------------------------------------------------- //
// File keywordmgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('KEYWORDMGR_PHP')) $lang_keywordmgr_php = array(
  'title' => 'ניהול מילות מפתח', //cpg1.4
  'edit' => 'edit', //cpg1.4
  'delete' => 'delete', //cpg1.4
  'search' => 'search', //cpg1.4
  'keyword_test_search' => 'search for %s in new window', //cpg1.4
  'keyword_del' => 'delete the keyword %s', //cpg1.4
  'confirm_delete' => 'Are you sure you want to delete the keyword %s from the whole gallery?', //cpg1.4  // js-alert
  'change_keyword' => 'change keyword', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
  'login' => 'התחברות',
  'enter_login_pswd' => 'הכנס את שם המשתמש ואת הסיסמה שלך בכדי להתחבר',
  'username' => 'שם משתמש',
  'password' => 'סיסמה',
  'remember_me' => 'זכור אותי',
  'welcome' => 'ברוך הבא %s ...',
  'err_login' => '*** אין אפשרות להתחבר, נסה שנית ***',
  'err_already_logged_in' => 'אתה כבר מחובר!',
  'forgot_password_link' => 'שכחתי את הסיסמה שלי',
  'cookie_warning' => 'אזהרה: הדפדפן שלך אינו מקבל עוגיות', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
  'logout' => 'התנתקות',
  'bye' => 'להתראות %s ...',
  'err_not_loged_in' => 'אינך מחובר!',
);

// ------------------------------------------------------------------------- //
// File minibrowser.php  //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('MINIBROWSER_PHP')) $lang_minibrowser_php = array(
  'close' => 'close', //cpg1.4
  'submit' => 'OK', //cpg1.4
  'up' => 'up one level', //cpg1.4
  'current_path' => 'current path', //cpg1.4
  'select_directory' => 'please select a directory', //cpg1.4
  'click_to_close' => 'לחץ על התמונה לסגירת החלון',
);

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
  'upd_alb_n' => 'Update album %s',
  'general_settings' => 'הגדרות כלליות',
  'alb_title' => 'שם האלבום',
  'alb_cat' => 'קטגוריית האלבום',
  'alb_desc' => 'תיאור האלבום',
  'alb_keyword' => 'מילות מפתח', //cpg1.4
  'alb_thumb' => 'תמונת האלבום',
  'alb_perm' => 'הרשאות עבור אלבום זה',
  'can_view' => 'האלבום ניתן לצפייה על ידי',
  'can_upload' => 'אורחים יכולים להעלות קבצים',
  'can_post_comments' => 'אורחים יכולים להוסיף הערות',
  'can_rate' => 'אורחים יכולים לדרג קבצים',
  'user_gal' => 'User Gallery',
  'no_cat' => '* No category *',
  'alb_empty' => 'האלבום ריק',
  'last_uploaded' => 'Last uploaded',
  'public_alb' => 'Everybody (public album)',
  'me_only' => 'Me only',
  'owner_only' => 'Album owner (%s) only',
  'groupp_only' => 'Members of the \'%s\' group',
  'err_no_alb_to_modify' => 'No album you can modify in the database.',
  'update' => 'עדכון אלבום',
  'reset_album' => 'Reset album', //cpg1.4
  'reset_views' => 'Reset views counter to &quot;0&quot; in %s', //cpg1.4
  'reset_rating' => 'Reset ratings on all files in %s', //cpg1.4
  'delete_comments' => 'Delete all comments made in %s', //cpg1.4
  'delete_files' => '%sIrreversibly%s delete all files in %s', //cpg1.4
  'views' => 'צפיות', //cpg1.4
  'votes' => 'הצבעות', //cpg1.4
  'comments' => 'הערות', //cpg1.4
  'files' => 'קבצים', //cpg1.4
  'submit_reset' => 'submit changes', //cpg1.4
  'reset_views_confirm' => 'I\'m sure', //cpg1.4
  'notice1' => '(*) תלוי במאפייני ה- %sקבוצות%s',  //cpg1.4 //(do not translate %s!)
  'alb_password' => 'סיסמת האלבום', //cpg1.4
  'alb_password_hint' => 'רמז לסיסמת האלבום', //cpg1.4
  'edit_files' =>'ערוך קבצים', //cpg1.4
  'parent_category' =>'קטגוריית אם', //cpg1.4
  'thumbnail_view' =>'תמונות האלבום', //cpg1.4
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
// File picmgr.php //cpg1.4
// ------------------------------------------------------------------------- //
if (defined('PICMGR_PHP')) $lang_picmgr_php = array(
  'pic_mgr' => 'Picture Manager', //cpg1.4
  'select_album' => 'בחר אלבום', //cpg1.4
  'delete' => 'Delete', //cpg1.4
  'confirm_delete1' => 'Are you sure you want to delete this picture ?', //cpg1.4
  'confirm_delete2' => '\nPicture will be permanently deleted.', //cpg1.4
  'apply_modifs' => 'Apply modifications', //cpg1.4
  'confirm_modifs' => 'Confirm modifications', //cpg1.4
  'pic_need_name' => 'Picture needs to have a name !', //cpg1.4
  'no_change' => 'You did not make any change !', //cpg1.4
  'no_album' => '* No album *', //cpg1.4
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
  'already_rated' => 'דירגת כבר קובץ זה!',
  'rate_ok' => 'דירוגך התקבל, תודה!',
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
  'err_user_exists' => 'The username you have entered already exist, please choose a different one',
  'err_password_mismatch' => 'The two passwords does not match, please input them again',
  'err_uname_short' => 'Username must be 2 characters long minimum',
  'err_password_short' => 'Password must be 2 characters long minimum',
  'err_uname_pass_diff' => 'Username and password must be different',
  'err_invalid_email' => 'Email address is invalid',
  'err_duplicate_email' => 'Another user has already registered with the email address you entered',
  'enter_info' => 'Input registration information',
  'required_info' => 'Required information',
  'optional_info' => 'Optional information',
  'username' => 'Username',
  'password' => 'Password',
  'password_again' => 'Re-enter password',
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
  'acct_already_act' => 'Account is already active!', //cpg1.4
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
  'last_uploads' => 'Last uploaded file.<br />Click to see all uploads by', //cpg1.4
  'last_comments' => 'Last comment.<br />Click to see all comments made by', //cpg1.4
  'notify_admin_email_body' => 'A new user with the username "%s" has registered in your gallery',
  'pic_count' => 'Files uploaded', //cpg1.4
  'notify_admin_request_email_subject' => '%s - Registration request', //cpg1.4
  'thank_you_admin_activation' => 'Thank you.<br /><br />Your request for account activation was sent to the admin. You will receive an email if approved.', //cpg1.4
  'acct_active_admin_activation' => 'The account is now active and an email has been sent to the user.', //cpg1.4
  'notify_user_email_subject' => '%s - Activation notification', //cpg1.4
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
  'title' => 'צפייה בהערות',
  'no_comment' => 'לא קיימות הערות בגלריה',
  'n_comm_del' => '%s הערות נמחקו',
  'n_comm_disp' => 'Number of comments to display',
  'see_prev' => 'הצג את הקודם',
  'see_next' => 'הצג את הבא',
  'del_comm' => 'מחק ההערות שנבחרו',
  'user_name' => 'שם', //cpg1.4
  'date' => 'תאריך', //cpg1.4
  'comment' => 'הערה', //cpg1.4
  'file' => 'קובץ', //cpg1.4
  'name_a' => 'שם משתמש בסדר עולה', //cpg1.4
  'name_d' => 'שם משתמש בסדר יורד', //cpg1.4
  'date_a' => 'תאריך בסדר עולה', //cpg1.4
  'date_d' => 'תאריך בסדר יורד', //cpg1.4
  'comment_a' => 'הערה בסדר עולה', //cpg1.4
  'comment_d' => 'הערה בסדר יורד', //cpg1.4
  'file_a' => 'קובץ בסדר עולה', //cpg1.4
  'file_d' => 'קובץ בסדר יורד', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File search.php                                                           //
// ------------------------------------------------------------------------- //


if (defined('SEARCH_PHP')){

$lang_search_php = array(
  'title' => 'חיפוש במאגר הקבצים', //cpg1.4
  'submit_search' => 'חיפוש', //cpg1.4
  'keyword_list_title' => 'רשימת מילות מפתח', //cpg1.4
  'keyword_msg' => 'הרשימה לעיל אינה מלאה. היא אינה כוללת מילים מכותרות התמונות או מתיאורן. נסה חיפוש מלא.',  //cpg1.4
  'edit_keywords' => 'עריכת מילות מפתח', //cpg1.4
  'search in' => 'חפש ב:', //cpg1.4
  'ip_address' => 'כתובת IP', //cpg1.4
  'fields' => 'חפש ב', //cpg1.4
  'age' => 'גיל', //cpg1.4
  'newer_than' => 'חדשים מ', //cpg1.4
  'older_than' => 'ישנים מ', //cpg1.4
  'days' => 'ימים', //cpg1.4
  'all_words' => 'כל מילות החיפוש (AND)', //cpg1.4
  'any_words' => 'כל אחת ממילות החיפוש (OR)', //cpg1.4
);

$lang_adv_opts = array(
  'title' => 'כותרת', //cpg1.4
  'caption' => 'כיתוב', //cpg1.4
  'keywords' => 'מילות מפתח', //cpg1.4
  'owner_name' => 'שם בעלים', //cpg1.4
  'filename' => 'שם קובץ', //cpg1.4
);

}

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
  'page_title' => 'חפש קבצים חדשים',
  'select_dir' => 'בחר ספריה',
  'select_dir_msg' => 'פונקציה זו מאפשרת לך להוסיף סדרה של קבצים הנמצאים בשרת (ניתן להעלות אותם דרך FTP).<br /><br />בחר בספריה אליה העלית את הקבצים.', //cpg1.4
  'no_pic_to_add' => 'There is no file to add',
  'need_one_album' => 'אתה חייב לפחות אלבום אחד בכדי להשתמש בפונקציה זו',
  'warning' => 'אזהרה',
  'change_perm' => 'the script can\'t write in this directory, you need to change its mode to 755 or 777 before trying to add the files !',
  'target_album' => '<b>הכנס הקבצים של &quot;</b>%s<b>&quot; לתוך </b>%s',
  'folder' => 'תיקיה',
  'image' => 'שם הקובץ',
  'album' => 'אלבום',
  'result' => 'תוצאה',
  'dir_ro' => 'Not writable. ',
  'dir_cant_read' => 'Not readable. ',
  'insert' => 'מוסיף את הקבצים החדשים לגלריה',
  'list_new_pic' => 'רשימת קבצים חדשים',
  'insert_selected' => 'הוסף את הקבצים שנבחרו',
  'no_pic_found' => 'לא נמצאו קבצים חדשים',
  'be_patient' => 'התאזרו בסבלנות, התהליך מתבצע כעת...',
  'no_album' => 'לא נבחר אלבום',
  'result_icon' => 'לחץ לפרטים או לטעינה מחדש',  //cpg1.4
  'notes' =>  '<ul>'.
                          '<li><b>OK</b> = הקובץ נוסף בהצלחה'.
                          '<li><b>DP</b> = קובץ כפול, אשר נמצא כבר במאגר המידע'.
                          '<li><b>PB</b> : לא ניתן להוסיף את הקובץ. בדוק את ההגדרות ואת ההרשאות של הספריה בה שוכנים הקבצים'.
                          '<li><b>NA</b> : לא בחרת אלבום אליו צריכים להגיע הקבצים. לחץ \'<a href="javascript:history.back(1)">אחורה</a>\' ובחר אלבום. אם עדיין אין אלבום, <a href="albmgr.php">צור חדש</a></li>'.
                          '<li>אם הסימנים OK, DP, PB לא מופיעים, לחץ על הקובץ התקול לצפיה בשגיאת PHP'.
                          '<li>אם הדפדפן מפסיק להגיב למשך פרק זמן ממושך, רענן התצוגה'.
                          '</ul>',
  'select_album' => 'בחר אלבום',
  'check_all' => 'Check All',
  'uncheck_all' => 'Uncheck All',
  'no_folders' => 'There are no folders inside the "albums" folder yet. Make sure to create at least one custom folder within "albums" folder and ftp-upload your files there. You mustn\'t upload to the "userpics" nor "edit" folders, they are reserved for http uploads and internal purposes.', //cpg1.4
   'albums_no_category' => 'Albums with no category', //cpg1.4 // album pulldown mod, added by frogfoot
  'personal_albums' => '* Personal albums', //cpg1.4 // album pulldown mod, added by frogfoot
  'browse_batch_add' => 'מנשק הניתן לסיור (לא מומלץ)', //cpg1.4
  'edit_pics' => 'ערוך קבצים', //cpg1.4
  'edit_properties' => 'מאפייני האלבום', //cpg1.4
  'view_thumbs' => 'תמונות האלבום', //cpg1.4
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
  'title' => 'שליחת קובץ',
  'custom_title' => 'Customized Request Form',
  'cust_instr_1' => 'You may select a customized number of upload boxes. However, you may not select more than the limits listed below.',
  'cust_instr_2' => 'Box Number Requests',
  'cust_instr_3' => 'File upload boxes: %s',
  'cust_instr_4' => 'URI/URL upload boxes: %s',
  'cust_instr_5' => 'URI/URL upload boxes:',
  'cust_instr_6' => 'File upload boxes:',
  'cust_instr_7' => 'Please enter the number of each type of upload box you desire at this time.  Then click \'Continue\'. ',
  'reg_instr_1' => 'Invalid action for form creation.',
  'reg_instr_2' => 'ביכולתך לשלוח את הקבצים שלך בעזרת התיבות להלן. גודל כל קובץ חייב להיות קטן מ%s ק"ב.  קבצי ZIP ישארו דחוסים.',
  'reg_instr_3' => 'אם ברצונך לשלוח את התמונות בקובץ ZIP, השתמש באפשרות הרלוונטית באיזור \'שלח קובץ ZIP\'',
  'reg_instr_4' => 'לשליחת כתובת תמונה, הכנס את הכתובת המלאה, לדוגמה: http://www.mysite.com/images/example.jpg',
  'reg_instr_5' => 'לסיום, לחץ על כפתור \'המשך\'.',
  'reg_instr_6' => 'שלח קובץ ZIP',
  'reg_instr_7' => 'שליחת קבצים:',
  'reg_instr_8' => 'שליחת כתובות:',
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
  'pixel_allowance' => 'The height and or width of the uploaded picture is more than that allowed by the gallery config.', //cpg1.4
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
  'succ' => 'שליחת הקבצים הצליחה',
  'success' => '%s קבצים נשלחו בהצלחה!',
  'add' => 'לחץ על \'המשך\' להוספת הקבצים לאלבומים',
  'failure' => 'Upload Failure',
  'f_info' => 'File Information',
  'no_place' => 'The previous file could not be placed.',
  'yes_place' => 'הקובץ האחרון מוקם בהצלחה',
  'max_fsize' => 'Maximum allowed file size is %s KB',
  'album' => 'אלבום',
  'picture' => 'קובץ',
  'pic_title' => 'כותרת הקובץ',
  'description' => 'תיאור הקובץ',
  'keywords' => 'מילות מפתח (מופרדות ברווחים)<br /><a href="#" onClick="return MM_openBrWindow(\'keyword_select.php\',\'selectKey\',\'width=250, height=400, scrollbars=yes,toolbar=no,status=yes,resizable=yes\')">בחר מרשימה</a>', //cpg1.4
  'keywords_sel' =>'Select a Keyword', //cpg1.4
  'err_no_alb_uploadables' => 'Sorry there is no album where you are allowed to upload files',
  'place_instr_1' => 'הכנס כעת את הקבצים לאלבומים ומלא את המידע הרלוונטי עבור כל קובץ.',
  'place_instr_2' => 'More files need placement. Please click \'Continue\'.',
  'process_complete' => 'You have successfully placed all the files.',
   'albums_no_category' => 'אלבומים ללא קטגוריות', //cpg1.4. //album pulldown mod, added by frogfoot
  'personal_albums' => '* Personal albums', //cpg1.4 //album pulldown mod, added by frogfoot
  'select_album' => 'בחר אלבום', //cpg1.4 //album pulldown mod, added by frogfoot
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
  'edit' => 'Edit', //cpg1.4
  'with_selected' => 'With selected:', //cpg1.4
  'delete' => 'Delete', //cpg1.4
  'delete_files_no' => 'keep public files (but anonymize)', //cpg1.4
  'delete_files_yes' => 'delete public files as well', //cpg1.4
  'delete_comments_no' => 'keep comments (but anonymize)', //cpg1.4
  'delete_comments_yes' => 'delete comments as well', //cpg1.4
  'activate' => 'Activate', //cpg1.4
  'deactivate' => 'Deactivate', //cpg1.4
  'reset_password' => 'Reset Password', //cpg1.4
  'change_primary_membergroup' => 'Change primary membergroup', //cpg1.4
  'add_secondary_membergroup' => 'Add secondary membergroup', //cpg1.4
  'name' => 'User name',
  'group' => 'Group',
  'inactive' => 'Inactive',
  'operations' => 'Operations',
  'pictures' => 'Files',
  'disk_space_used' => 'Space used', //cpg1.4
  'disk_space_quota' => 'Space Quota', //cpg1.4
  'registered_on' => 'Registration', //cpg1.4
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
  'user_profile1' => '$user_profile1', //cpg1.4
  'user_profile2' => '$user_profile2', //cpg1.4
  'user_profile3' => '$user_profile3', //cpg1.4
  'user_profile4' => '$user_profile4', //cpg1.4
  'user_profile5' => '$user_profile5', //cpg1.4
  'user_profile6' => '$user_profile6', //cpg1.4
  'latest_upload' => 'Recent uploads',
  'never' => 'never',
  'search' => 'User search', //cpg1.4
  'submit' => 'Submit', //cpg1.4
  'search_submit' => 'Go!', //cpg1.4
  'search_result' => 'Search results for: ', //cpg1.4
  'alert_no_selection' => 'You have to select at least one user first!', //cpg1.4 //js-alert
  'password' => 'password', //cpg1.4
  'select_group' => 'Select group', //cpg1.4
  'groups_alb_access' => 'Album permissions by group', //cpg1.4
  'album' => 'אלבום', //cpg1.4
  'category' => 'קטגוריה', //cpg1.4
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
'Updates titles from filename', //cpg1.4
'Deletes titles', //cpg1.4
'Rebuilds thumbnails and resized photos', //cpg1.4
'Deletes original sized photos replacing them with the resized version', //cpg1.4
'Deletes original or intermediate size photos to free webspace', //cpg1.4
'Deletes orphaned comments', //cpg1.4
'Re-reads file sizes and dimensions (if you manually edited pics)', //cpg1.4
'Resets views counter', //cpg1.4
'Displays phpinfo', //cpg1.4
'Updates the database', //cpg1.4
'Displays log files', //cpg1.4
);
$lang_util_php = array(
  'title' => 'Admin utilities (Resize pictures)',
  'what_it_does' => 'What it does',
  'file' => 'קובץ',
  'problem' => 'Problem', //cpg1.4
  'status' => 'Status', //cpg1.4
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
  'instruction_album' => 'בחר אלבום',
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
  'delete_title_explanation' => 'This will remove all titles on files in the album you specify.', //cpg1.4
  'delete_original' => 'Delete original size photos',
  'delete_original_explanation' => 'This will remove the full sized pictures.', //cpg1.4
  'delete_intermediate' => 'Delete intermediate pictures', //cpg1.4
  'delete_intermediate_explanation' => 'This will delete intermediate (normal) pictures.<br />Use this to free up disk space if you have disabled \'Create intermediate pictures\' in config after adding pictures.', //cpg1.4
  'delete_replace' => 'Deletes the original images replacing them with the sized versions',
  'titles_deleted' => 'All titles in specified album removed', //cpg1.4
  'deleting_intermediates' => 'Deleting intermediate images, please wait...', //cpg1.4
  'searching_orphans' => 'Searching for orphans, please wait...', //cpg1.4
  'select_album' => 'בחר אלבום',
  'delete_orphans' => 'Delete comments on missing files', //cpg1.4
  'delete_orphans_explanation' => 'This will identify and allow you to delete any comments associated with files no longer in the gallery.<br />Checks all albums.', //cpg1.4
  'refresh_db' => 'Reload file dimensions and size information', //cpg1.4
  'refresh_db_explanation' => 'This will re-read file sizes and dimensions. Use this if quota\'s are incorrect or you have changed the files manually.', //cpg1.4
  'reset_views' => 'Reset view counters', //cpg1.4
  'reset_views_explanation' => 'Sets all file view counts to zero in the album specified.', //cpg1.4
  'orphan_comment' => 'orphan comments found',
  'delete' => 'Delete',
  'delete_all' => 'Delete all',
  'delete_all_orphans' => 'Delete all orphans?', //cpg1.4
  'comment' => 'Comment: ',
  'nonexist' => 'attached to non existant file # ',
  'phpinfo' => 'Display phpinfo',
  'phpinfo_explanation' => 'Contains technical information about your server.<br /> - You may be asked to provide information from this when requesting support.', //cpg1.4
  'update_db' => 'Update database',
  'update_db_explanation' => 'If you have replaced coppermine files, added a modification or upgraded from a previous version of coppermine, make sure to run the database update once. This will create the necessary tables and/or config values in your coppermine database.',
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
  'webcvs' => 'web svn', //cpg1.4
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
  'no_webcvs_link' => 'don\'t display web svn link', //cpg1.4
  'stable_webcvs_link' => 'display web svn link to stable branch', //cpg1.4
  'devel_webcvs_link' => 'display web svn link to devel branch', //cpg1.4
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
  'album' => 'אלבום', //cpg1.4
  'category' => 'קטגוריה', //cpg1.4
  'new_alb_created' => 'Your new album &quot;<b>%s</b>&quot; was created.', //cpg1.4
  'continue' => 'Press &quot;Next&quot; to start to upload your pictures', //cpg1.4
  'link' => 'this link', //cpg1.4
);
}
?>