<?php
// ------------------------------------------------------------------------- //
//  Coppermine Photo Gallery v1.1 Beta 3                                     //
// ------------------------------------------------------------------------- //
//  Copyright (C) 2002,2003  Grיgory DEMAR <gdemar@wanadoo.fr>               //
//  http://www.chezgreg.net/coppermine/                                      //
// ------------------------------------------------------------------------- //
//  Based on PHPhotoalbum by Henning Stרverud <henning@stoverud.com>         //
//  http://www.stoverud.com/PHPhotoalbum/                                    //
// ------------------------------------------------------------------------- //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
// ------------------------------------------------------------------------- //

$lang_charset = 'iso-8859-1';
$lang_text_dir = 'rtl'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('Bytes', 'KB', 'MB');

// Day of weeks and months
$lang_day_of_week = array('ראשון', 'שני', 'שלישי', 'רביעי', 'חמישי', 'שישי', 'שבת');
$lang_month = array('ינואר', 'פברואר', 'מרץ', 'אפריל', 'מאי', 'יוני', 'יולי', 'אוגוסט', 'ספטמבר', 'אוקטובר', 'נובמבר', 'דצמבר');

// Some common strings
$lang_yes = 'כן';
$lang_no  = 'לא';
$lang_back = 'אחורה';
$lang_continue = 'המשך';
$lang_info = 'מידע';
$lang_error = 'שגיאה';

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$album_date_fmt =    '%B %d, %Y';
$lastcom_date_fmt =  '%m/%d/%y ב %H:%M';
$lastup_date_fmt = '%B %d, %Y';
$register_date_fmt = '%B %d, %Y';
$lasthit_date_fmt = '%B %d, %Y ב %I:%M %p';
$comment_date_fmt =  '%B %d, %Y ב %I:%M %p';

// For the word censor
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*');

$lang_meta_album_names = array(
	'random' => 'תמונות בתפזורת',
	'lastup' => 'נוספו לאחרונה',
	'lastcom' => 'הערות אחרונות',
	'topn' => 'נצפים ביותר',
	'toprated' => 'מדורגים ביותר',
	'lasthits' => 'נצפו לאחרונה',
	'search' => 'תוצאות חיפוש'
);

$lang_errors = array(
	'access_denied' => 'אינך מורשה להיכנס לדף זה.',
	'perm_denied' => 'אינך מורשה לבצע פעולה זו.',
	'param_missing' => 'הופעל סקריפט ללא הפרמטרים הנחוצים.',
	'non_exist_ap' => 'האלבום / תמונות שבחרת אינם קיימים',
	'quota_exceeded' => 'לא נותר מקום בדיסק<br /><br />עליך לפנות מקום בדיסק לכל הפחות בנפח של [quota]K, תמונותיך כרגע משתמשות בנפח של [space]K, הוספת תמונה זו יגרום לחריגת נפח .',
	'gd_file_type_err' => 'כאשר משתמשים בישום GD image library הקבצים המותרים לשימוש הם מסוג JPEG ו- PNG.',
	'invalid_image' => 'התמונה שאתה מנסה להעלות פגומה או ש- GD library אינו מסוגל לטפל בה מאיזה סיבה שהיא',
	'resize_failed' => 'אין אפשרות ליצור תמונה מוקטנת או להקטין את גודלה.',
	'no_img_to_display' => 'לא נמצאה תמונה להציג.',
	'non_exist_cat' => 'הקטגוריה שנבחרה אינה קיימת.',
	'orphan_cat' => 'לקטגוריה אין תיקיית אב ,הרץ את מנהל הקטגוריות בכדי לפתור בעיה זו.',
	'directory_ro' => 'ספריית \'%s\' לא ניתנת לשכתוב, לא ניתן למחוק תמונות.',
	'non_exist_comment' => 'ההערה שנבחרה אינה קיימת',
	'pic_in_invalid_album' => 'התמונה ללא שייכות לאלבום כלשהו (%s)!?'
);

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
	'alb_list_title' => 'גש אל רשימת האלבומים',
	'alb_list_lnk' => 'רשימת אלבומים',
	'my_gal_title' => 'גש אל הגלריה הפרטית שלי',
	'my_gal_lnk' => 'הגלריה שלי',
	'my_prof_lnk' => 'הפרופיל שלי',
	'adm_mode_title' => 'עבור למצב מנהל',
	'adm_mode_lnk' => 'מצב מנהל',
	'usr_mode_title' => 'עבור למצה משתמש',
	'usr_mode_lnk' => 'מצב משתמש',
	'upload_pic_title' => 'טען תמונה לתוך האלבום',
	'upload_pic_lnk' => 'טען תמונה',
	'register_title' => 'פתח חשבון',
	'register_lnk' => 'הרשם',
	'login_lnk' => 'התחבר',
	'logout_lnk' => 'התנתק',
	'lastup_lnk' => 'הועלו לאחרונה',
	'lastcom_lnk' => 'הערות אחרונות',
	'topn_lnk' => 'הכי נצפים',
	'toprated_lnk' => 'הכי מדורגים',
	'search_lnk' => 'חפש',
);

$lang_gallery_admin_menu = array(
	'upl_app_lnk' => 'אישור טעינות',
	'config_lnk' => 'הגדרות',
	'albums_lnk' => 'אלבומים',
	'categories_lnk' => 'קטגוריות',
	'users_lnk' => 'משתמשים',
	'groups_lnk' => 'קבוצות',
	'comments_lnk' => 'הערות',
	'searchnew_lnk' => 'טעינת קבוצת תמונות',
);

$lang_user_admin_menu = array(
	'albmgr_lnk' => 'צור \ הזמן את האלבום שלי',
	'modifyalb_lnk' => 'שנה את האלבום שלי',
	'my_prof_lnk' => 'הפרופיל שלי',
);

$lang_cat_list = array(
	'category' => 'קטגוריה',
	'albums' => 'אלבומים',
	'pictures' => 'תמונות',
);

$lang_album_list = array(
	'album_on_page' => '%d אלבומים ב- %d דפים'
);

$lang_thumb_view = array(
	'date' => 'תאריך',
	'name' => 'שם',
	'sort_da' => 'מיין לפי תאריך בסדר עולה',
	'sort_dd' => 'מיין לפי תאריך בסדר יורד',
	'sort_na' => 'מיין לפי שם בסדר עולה',
	'sort_nd' => 'מיין לפי שם בסדר יורד',
	'pic_on_page' => '%d תמונות ב- %d דפים',
	'user_on_page' => '%d משתמשים ב- %d דפים'
);

$lang_img_nav_bar = array(
	'thumb_title' => 'חזור אל מצג התמונות המוקטנות',
	'pic_info_title' => 'הצג\הסתר תמונה זו',
	'slideshow_title' => 'שיקופיות',
	'ecard_title' => 'שלח תמונה זו ככרטיס אלקטרוני',
	'ecard_disabled' => 'כרטיס אלקטרוני אינו פעיל',
	'ecard_disabled_msg' => 'אין לך הרשאה לשלוח ככרטיס אלקטרוני',
	'prev_title' => 'תמונה קודמת',
	'next_title' => 'התמונה הבאה',
	'pic_pos' => 'תמונה %s/%s',
);

$lang_rate_pic = array(
	'rate_this_pic' => 'דרג תמונה זו ',
	'no_votes' => '(עדיין אין הצבעות)',
	'rating' => '(דירוג עכשוי : %s / 5 עם %s הצבעות)',
	'rubbish' => 'שטות',
	'poor' => 'דל',
	'fair' => 'ממוצע',
	'good' => 'טוב',
	'excellent' => 'מצוין',
	'great' => 'מעולה',
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
	CRITICAL_ERROR => 'שגיאה קריטית',
	'file' => 'קובץ: ',
	'line' => 'שורה: ',
);

$lang_display_thumbnails = array(
	'filename' => 'שם קובץ : ',
	'filesize' => 'גודל קובץ : ',
	'dimensions' => 'מידות : ',
	'date_added' => 'נוסף בתאריך : '
);

$lang_get_pic_data = array(
	'n_comments' => '%s הערות',
	'n_views' => '%s צפיות',
	'n_votes' => '(%s הצבעות)'
);

// ------------------------------------------------------------------------- //
// File include/init.inc.php
// ------------------------------------------------------------------------- //

// void

// ------------------------------------------------------------------------- //
// File include/picmgmt.inc.php
// ------------------------------------------------------------------------- //

// void

// ------------------------------------------------------------------------- //
// File include/smilies.inc.php
// ------------------------------------------------------------------------- //

if (defined('SMILIES_PHP')) $lang_smilies_inc_php = array(
	'Exclamation' => 'קריאה',
	'Question' => 'שאלה',
	'Very Happy' => 'שמח מאד',
	'Smile' => 'מחייך',
	'Sad' => 'עצוב',
	'Surprised' => 'מופתע',
	'Shocked' => 'המום',
	'Confused' => 'מבולבל',
	'Cool' => 'מגניב',
	'Laughing' => 'מצחיק',
	'Mad' => 'כעוס',
	'Razz' => 'מלגלג',
	'Embarassed' => 'מחבק',
	'Crying or Very sad' => 'בוכה או עצוב מאד',
	'Evil or Very Mad' => 'מרושע או עצבני מאד',
	'Twisted Evil' => 'מרושע בעיוות',
	'Rolling Eyes' => 'עיניים מתגלגלות',
	'Wink' => 'קורץ',
	'Idea' => 'רעיון',
	'Arrow' => 'חץ',
	'Neutral' => 'ניטרלי',
	'Mr. Green' => 'מר.ירוק',
);

// ------------------------------------------------------------------------- //
// File addpic.php
// ------------------------------------------------------------------------- //

// void

// ------------------------------------------------------------------------- //
// File admin.php
// ------------------------------------------------------------------------- //

if (defined('ADMIN_PHP')) $lang_admin_php = array(
	0 => 'Leaving admin mode...',
	1 => 'Entering admin mode...',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
	'alb_need_name' => 'האלבום חייב להיות בעל שם !',
	'confirm_modifs' => 'האם אתה בטוח שתרצה לבצע שינויים אלו ?',
	'no_change' => 'לא ביצעת אף שינוי !',
	'new_album' => 'אלבום חדש',
	'confirm_delete1' => 'האם הנך בטוח שברצונך למחוק אלבום זה ?',
	'confirm_delete2' => 'וכן את כל התמונות שנמצאות בו ימחקו !',
	'select_first' => 'תחילה בחר באלבום',
	'alb_mrg' => 'ניהול אלבומים',
	'my_gallery' => '* הגלריה שלי *',
	'no_category' => '* אין קטגוריה *',
	'delete' => 'מחק',
	'new' => 'חדש',
	'apply_modifs' => 'שמור שינויים',
	'select_category' => 'בחר קטגוריה',
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
	'miss_param' => 'פרמטרים נחוצים עבור \'%s\'הפעולה לא התבצעה !',
	'unknown_cat' => 'הקטגוריה הנבחרת אינה קיימת בבסיס הנתונים',
	'usergal_cat_ro' => 'קטגוריות תמונות המשתמש לא ניתנות למחיקה !',
	'manage_cat' => 'ערוך קטגוריות',
	'confirm_delete' => 'האם הנך בטוח שברצונך למחוק קטגוריה זו ?',
	'category' => 'קטגוריה',
	'operations' => 'פעולות',
	'move_into' => 'העבר לתוך',
	'update_create' => 'עדכן / צור קטגוריה',
	'parent_cat' => 'קטגורית אב',
	'cat_title' => 'כותרת קטגוריה',
	'cat_desc' => 'תיאור הקטגוריה'
);

// ------------------------------------------------------------------------- //
// File config.php
// ------------------------------------------------------------------------- //

if (defined('CONFIG_PHP')) $lang_config_php = array(
	'title' => 'תצורה',
	'restore_cfg' => 'שחזר ברירת מחדל',
	'save_cfg' => 'שמור בתצורה החדשה',
	'notes' => 'הערות',
	'info' => 'מידע',
	'upd_success' => 'תצורת המודול עודכנה',
	'restore_success' => 'תצורת ברירת המחדל שוחזרה',
	'name_a' => 'שם בסדר עולה',
	'name_d' => 'שם בסדר יורד',
	'date_a' => 'תאריך בסדר עולה',
	'date_d' => 'תאריך בסדר יורד',
        'th_any' => 'Max Aspect',
        'th_ht' => 'Height',
        'th_wd' => 'Width',
);

if (defined('CONFIG_PHP')) $lang_config_data = array(
	'General settings',
	array('Gallery name', 'gallery_name', 0),
	array('Gallery description', 'gallery_description', 0),
	array('Gallery administrator email', 'gallery_admin_email', 0),
	array('Target address for the \'See more pictures\' link in e-cards', 'ecards_more_pic_target', 0),
	array('Language', 'lang', 5),
	array('Theme', 'theme', 6),

	'Album list view',
	array('Width of the main table (pixels or %)', 'main_table_width', 0),
	array('Number of levels of categories to display', 'subcat_level', 0),
	array('Number of albums to display', 'albums_per_page', 0),
	array('Number of columns for the album list', 'album_list_cols', 0),
	array('Size of thumbnails in pixels', 'alb_list_thumb_size', 0),
	array('The content of the main page', 'main_page_layout', 0),

	'Thumbnail view',
	array('Number of columns on thumbnail page', 'thumbcols', 0),
	array('Number of rows on thumbnail page', 'thumbrows', 0),
	array('Maximum number of tabs to display', 'max_tabs', 0),
	array('Display picture caption (in addition to title) below the thumbnail', 'caption_in_thumbview', 1),
	array('Display number of comments below the thumbnail', 'display_comment_count', 1),
	array('Default sort order for pictures', 'default_sort_order', 3),
	array('Minimum number of votes for a picture to appear in the \'top-rated\' list', 'min_votes_for_rating', 0),

	'Image view &amp; Comment settings',
	array('Width of the table for picture display (pixels or %)', 'picture_table_width', 0),
	array('Picture information are visible by default', 'display_pic_info', 1),
	array('Filter bad words in comments', 'filter_bad_words', 1),
	array('Allow smiles in comments', 'enable_smilies', 1),
	array('Max length for an image description', 'max_img_desc_length', 0),
	array('Max number of characters in a word', 'max_com_wlength', 0),
	array('Max number of lines in a comment', 'max_com_lines', 0),
	array('Maximum length of a comment', 'max_com_size', 0),

	'Pictures and thumbnails settings',
	array('Quality for JPEG files', 'jpeg_qual', 0),
	array('Max width or height of a thumbnail <b>*</b>', 'thumb_width', 0),
	array('Create intermediate pictures','make_intermediate',1),
	array('Max width or height of an intermediate picture <b>*</b>', 'picture_width', 0),
	array('Max size for uploaded pictures (KB)', 'max_upl_size', 0),
	array('Max width or height for uploaded pictures (pixels)', 'max_upl_width_height', 0),

	'User settings',
	array('Allow new user registrations', 'allow_user_registration', 1),
	array('User registration requires email verification', 'reg_requires_valid_email', 1),
	array('Allow two users to have the same email address', 'allow_duplicate_emails_addr', 1),
	array('Users can can have private albums', 'allow_private_albums', 1),

	'Custom fields for image description (leave blank if unused)',
	array('Field 1 name', 'user_field1_name', 0),
	array('Field 2 name', 'user_field2_name', 0),
	array('Field 3 name', 'user_field3_name', 0),
	array('Field 4 name', 'user_field4_name', 0),

	'Pictures and thumbnails advanced settings',
	array('Characters forbidden in filenames', 'forbiden_fname_char',0),
	array('Accepted file extensions for uploaded pictures', 'allowed_file_extensions',0),
	array('Method for resizing images','thumb_method',2),
	array('Path to ImageMagick \'convert\' utility (example /usr/bin/X11/)', 'impath', 0),
	array('Allowed image types (only valid for ImageMagick)', 'allowed_img_types',0),
	array('Command line options for ImageMagick', 'im_options', 0),
	array('Read EXIF data in JPEG files', 'read_exif_data', 1),
	array('The album directory <b>*</b>', 'fullpath', 0),
	array('The directory for user pictures <b>*</b>', 'userpics', 0),
	array('The prefix for intermediate pictures <b>*</b>', 'normal_pfx', 0),
	array('The prefix for thumbnails <b>*</b>', 'thumb_pfx', 0),
	array('Default mode for directories', 'default_dir_mode', 0),
	array('Default mode for pictures', 'default_file_mode', 0),

	'Cookies &amp; Charset settings',
	array('Name of the cookie used by the script', 'cookie_name', 0),
	array('Path of the cookie used by the script', 'cookie_path', 0),
	array('Character encoding', 'charset', 4),

	'Miscellaneous settings',
	array('Enable debug mode', 'debug_mode', 1),
	
	'<br /><div align="center">(*) Fields marked with * must not be changed if you already have pictures in your gallery</div><br />'
);

// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
	'empty_name_or_com' => 'עליך להקליד את שמך ואת ההערה',
	'com_added' => 'הערתך נוספה',
	'alb_need_title' => 'עליך לציין כותרת לאלבום !',
	'no_udp_needed' => 'לא נדרשים עדכונים.',
	'alb_updated' => 'האלבום עודכן',
	'unknown_album' => 'האלבום הנבחר אינו קיים או שאינך מורשה להעלות תמונות אליו !',
	'no_pic_uploaded' => 'לא נטענה אף תמונה !<br /><br />במידה ואכן בחרת תמונה לטעינה ,בדוק שהשרת מאפשר טעינת תמונות...',
	'err_mkdir' => 'פעולת יצירת התיקייה נכשלה %s !',
	'dest_dir_ro' => 'תיקיית יעד %s אינה ניתנת לשכתוב באמצעות הסקריפט !',
	'err_move' => 'לא ניתן להעביר %s אל %s !',
	'err_fsize_too_large' => 'גודל התמונה שהנך מנסה לטעון גדול מדי (המקסימום המותר הוא %s x %s) !',
	'err_imgsize_too_large' => 'גודל הקובץ שנטען גדול מדי (המקסימום המותר הוא %s ק"ב) !',
	'err_invalid_img' => 'הקובץ שטענת אינו קובץ תמונה חוקי !',
	'allowed_img_types' => 'תוכל לטעון %s תמונות בלבד.',
	'err_insert_pic' => 'התמונה \'%s\' לא ניתנת לטעינה לתוך האלבום ! ',
	'upload_success' => 'תמונתך נטענה בהצלחה<br /><br />היא תהיה זמינה באלבום לאחר אישור המנהל.',
	'info' => 'מידע',
	'com_added' => 'הערה נוספה',
	'alb_updated' => 'האלבום עודכן',
	'err_comment_empty' => 'הערתך ריקה מתוכן !',
	'err_invalid_fext' => 'אך ורק קבצים בעלי הסיומות הבאות ניתנים לטעינה לאלבומים : <br /><br />%s.',
	'no_flood' => 'מצטערים אך כבר הכנסת הערה לתמונה זו<br /><br />ערוך את ההערה במידה ותרצה לשנותה',
	'redirect_msg' => 'הנך מועבר הלאה<br /><br /><br />לחץ \'המשך\' במידה והדף לא מתרענן אוטומטית',
	'upl_success' => 'תמונתך נוספה בהצלחה',
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
	'caption' => 'כותרת',
	'fs_pic' => 'תמונה בגודל מלא',
	'del_success' => 'נמחק בהצלחה',
	'ns_pic' => 'תמונה בגודל רגיל',
	'err_del' => 'לא ניתן למחיקה',
	'thumb_pic' => 'תמונה מוקטנת',
	'comment' => 'הערה',
	'im_in_alb' => 'תמונה בתוך האלבום',
	'alb_del_success' => 'האלהום \'%s\' נמחק',
	'alb_mgr' => 'ניהול אלבום',
	'err_invalid_data' => 'מידע שגוי נתקבל ב- \'%s\'',
	'create_alb' => 'יצירת אלבום \'%s\'',
	'update_alb' => 'עדכון אלבום \'%s\' עם כותרת \'%s\' ואינדקס \'%s\'',
	'del_pic' => 'מחיקת תמונה',
	'del_alb' => 'מחיקת אלבום',
	'del_user' => 'מחיקת משתמש',
	'err_unknown_user' => 'המשתמש שבחרת אינו קיים !',
	'comment_deleted' => 'ההערה נמחקה בהצלחה',
);

// ------------------------------------------------------------------------- //
// File displayecard.php
// ------------------------------------------------------------------------- //

// Void

// ------------------------------------------------------------------------- //
// File displayimage.php
// ------------------------------------------------------------------------- //

if (defined('DISPLAYIMAGE_PHP')){

$lang_display_image_php = array(
	'confirm_del' => 'האם אתה בטוח שברצונך למחוק תמונה זו ? \\ כמו כן כל ההערות המשויכות אליה ימחקו גם כן.',
	'del_pic' => 'מחיקת תמונה זו',
	'size' => '%s x %s פיקסלים',
	'views' => '%s פעמים',
	'slideshow' => 'מעבר שיקופיות',
	'stop_slideshow' => 'עצור מעבר שיקופיות',
	'view_fs' => 'לחץ בכדי לצפות בגודל מלא',
);

$lang_picinfo = array(
	'title' =>'מידע על התמונה',
	'Filename' => 'שם קובץ',
	'Album name' => 'שם אלבום',
	'Rating' => 'דירוג (%s הצבעות)',
	'Keywords' => 'מילת מפתח',
	'File Size' => 'גודל קובץ',
	'Dimensions' => 'מידות',
	'Displayed' => 'תצוגה',
	'Camera' => 'מצלמה',
	'Date taken' => 'תאריך צילום',
	'Aperture' => 'צמצם',
	'Exposure time' => 'זמן חשיפה',
	'Focal length' => 'מידת זום',
	'Comment' => 'הערה'
);

$lang_display_comments = array(
	'OK' => 'בסדר',
	'edit_title' => 'ערוך הערה זו',
	'confirm_delete' => 'האם הנך בטוח שברצונך למחוק הערה זו ?',
	'add_your_comment' => 'הוסף הערותיך',
	'your_name' => 'השם שלך',
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
	'title' => 'שלח כרטיס אלקטרוני',
	'invalid_email' => '<b>אזהרה</b> : כתובת דואר שגויה !',
	'ecard_title' => 'כרטיס אלקטרוני מאת %s עבורך',
	'view_ecard' => 'במידה והכרטיס האלקטרוני אינו מוצג כראוי , לחץ על קישור זה',
	'view_more_pics' => 'לחץ על קישור זה בכדי לצפות בתמונות נוספות !',
	'send_success' => 'כרטיסך האלקטרוני נשלח',
	'send_failed' => 'מצטערים אך השרת אינו מסוגל לשלוח כרטיסים אלקטרוניים...',
	'from' => 'מאת',
	'your_name' => 'השם שלך',
	'your_email' => 'כתובת האימייל שלך',
	'to' => 'עבור',
	'rcpt_name' => 'שם מקבל',
	'rcpt_email' => 'כתובת אימייל של המקבל',
	'greetings' => 'ברכות',
	'message' => 'הודעה',
);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
	'pic_info' => 'תמונה&nbsp;מידע',
	'album' => 'אלבום',
	'title' => 'כותרת',
	'desc' => 'תיאור',
	'keywords' => 'מילת מפתח',
	'pic_info_str' => '%sx%s - %sKB - %s צפיות - %s הצבעות',
	'approve' => 'אשר תמונה',
	'postpone_app' => 'עכב אישור',
	'del_pic' => 'מחק תמונה',
	'reset_view_count' => 'אפס מונה צפיות',
	'reset_votes' => 'אפס הצבעות',
	'del_comm' => 'מחק הערות',
	'upl_approval' => 'אשר טעינה',
	'edit_pics' => 'ערוך תמונה',
	'see_next' => 'צפה בתמונה הבאה',
	'see_prev' => 'צפה בתמונה הקודמת',
	'n_pic' => '%s תמונות',
	'n_of_pic_to_disp' => 'מספר התמונות להצגה',
	'apply' => 'שמור שינויים'
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
	'group_name' => 'שם קבןצה',
	'disk_quota' => 'נפח דיסק',
	'can_rate' => 'יכול לדרכ תמונות',
	'can_send_ecards' => 'יכול לשלוח כרטיס אלקטרוני',
	'can_post_com' => 'יכול להכניס הערות',
	'can_upload' => 'יכול לטעון תמוננות',
	'can_have_gallery' => 'יכול להיות בעל גלריה פרטית',
	'apply' => 'שמור שינויים',
	'create_new_group' => 'צור קבוצה חדשה',
	'del_groups' => 'מחק קבוצות נבחרות',
	'confirm_del' => 'אזהרה, כאשר אתה מוחק קבוצה, משתמשים השיכים לקבוצה זו יועברו לקבוצת \'הרשומים\'\ו\האם ברצונך להמשיך ?',
	'title' => 'ערוך קבוצות משתמשים',
	'approval_1' => 'כללי. טען. מאושר (1)',
	'approval_2' => 'פרטי. טען. מאושר (2)',
	'note1' => '<b>(1)</b> טעינה לאלבום כללי דורשת אישור מנהל.',
	'note2' => '<b>(2)</b> טעינה לאלבום של משתמש דורשת את אישור המנהל.',
	'notes' => 'הערות'
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
	'welcome' => 'ברוך הבא !'
);

$lang_album_admin_menu = array(
	'confirm_delete' => 'האם הנך בטוח שאתה רוצה למחוק אלבום זה ? \\כל התמונות וההערות ימחקו גם כן.',
	'delete' => 'מחיקה',
	'modify' => 'הגדרות',
	'edit_pics' => 'ערוך תמונות',
);

$lang_list_categories = array(
	'home' => 'עמוד ראשי',
	'stat1' => '<b>[תמונות]</b> תמונות ב- <b>[אלבומים]</b> אלבומים ו <b>[קטגוריה]</b> קטגוריות עם <b>[הערות]</b> הערות נצפו <b>[נצפו]</b> פעמים',
	'stat2' => '<b>[תמונות]</b> תמונות ב- <b>[אלבומים]</b> אלבומים נצפו <b>[נצפו]</b> פעמים',
	'xx_s_gallery' => '%s\ גלריות',
	'stat3' => '<b>[תמונות]</b> תמונות ב- <b>[אלבומים]</b> אלבומים עם <b>[הערות]</b> הערות נצפו <b>[נצפו]</b> פעמים'
);

$lang_list_users = array(
	'user_list' => 'רשימת משתמשים',
	'no_user_gal' => 'אין גלריות משתמשים',
	'n_albums' => '%s אלבומים',
	'n_pics' => '%s תמונות'
);

$lang_list_albums = array(
	'n_pictures' => '%s תמונות',
	'last_added' => ', נוספה לאחרונה %s'
);

}

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
	'login' => 'התחבר',
	'enter_login_pswd' => 'הכנס את שמך וסיסמתך בכדי להתחבר',
	'username' => 'שם משתמש',
	'password' => 'סיסמא',
	'remember_me' => 'זכור את הסיסמא',
	'welcome' => 'ברוך הבא %s ...',
	'err_login' => '*** אין אפשרות להתחבר. נסה שנית ***',
	'err_already_logged_in' => 'אתה כבר מחובר !',
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
	'logout' => 'התנתק',
	'bye' => 'להתראות %s ...',
	'err_not_loged_in' => 'הנך מנותק כרגע',
);

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
	'upd_alb_n' => 'עדכן אלבום %s',
	'general_settings' => 'הגדרות כליות',
	'alb_title' => 'כותרת אלבום',
	'alb_cat' => 'קטגוריות אלבום',
	'alb_desc' => 'תיאור האלבום',
	'alb_thumb' => 'תמונות מוקטנות באלבום',
	'alb_perm' => 'הרשאות עבור אלבום זה',
	'can_view' => 'יכולים לצפות באלבום',
	'can_upload' => 'אורחים יכולים להעלות תמונות',
	'can_post_comments' => 'אורחים יכולים לכתוב הערות',
	'can_rate' => 'אורחים יכולים לדרג תמונות',
	'user_gal' => 'גלרית משתמש',
	'no_cat' => '* אין קטגוריות *',
	'alb_empty' => 'האלבום ריק',
	'last_uploaded' => 'הועלה לאחרונה',
	'public_alb' => 'כולם (אלבום כללי)',
	'me_only' => 'רק אני',
	'owner_only' => 'בעל האלבום (%s) בלבד',
	'groupp_only' => 'חברים ב- \'%s\' קבוצה',
	'err_no_alb_to_modify' => 'אין אלבום שהנך יכול לשנות בבסיס הנתונים.',
	'update' => 'עדכן אלבום'
);

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
	'already_rated' => 'מצטערים אך כבר דירגתה תמונה זו',
	'rate_ok' => 'הצבעתך נתקבלה',
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
By clicking 'אני מסכים' below you agree to be bound by these conditions.
EOT;

$lang_register_php = array(
	'page_title' => 'רישום משתמשים',
	'term_cond' => 'תנאים והתניות',
	'i_agree' => 'אני מסכים',
	'submit' => 'אשר רישום',
	'err_user_exists' => 'השם שהכנסת כבר קיים , אנה נסה שם אחר.',
	'err_password_mismatch' => 'שתי הסיסמאות שהקלדת אינן תואמות, אנא הקלד אותן שוב.',
	'err_uname_short' => 'שם משתמש חייב להיות בעל 2 תווים לפחות.',
	'err_password_short' => 'סיסמא חייבת להיות בעלת 2 תווים לפחות.',
	'err_uname_pass_diff' => 'שם המשתמש והסיסמא חייבים להיות שונים.',
	'err_invalid_email' => 'כתובת האימייל שגויה',
	'err_duplicate_email' => 'משתמש אחר השתמש כבר בכתובת האימייל שהכנסת.',
	'enter_info' => 'הכנס מידע רישום',
	'required_info' => 'מידע נחוץ',
	'optional_info' => 'מידע אופציונלי',
	'username' => 'שם משתמש',
	'password' => 'סיסמא',
	'password_again' => 'הקלד סיסמא שוב',
	'email' => 'אימייל',
	'location' => 'מיקום',
	'interests' => 'תחביבים',
	'website' => 'דף הבית שלך',
	'occupation' => 'מקצוע',
	'error' => 'שגיאה',
	'confirm_email_subject' => '%s - אישור רישום המידע',
	'information' => 'מידע',
	'failed_sending_email' => 'אישור לגבי הרישום אינו יכול להישלח באימייל !',
	'thank_you' => 'תודה שנרשמת<br /><br />אימייל ובו מידע על איך להפעיל את החשבון נשלח לכתובת האימייל שרשמת.',
	'acct_created' => 'חשבונך נוצר וכעת תוכל להתחבר באמצעות שם המשתמש והסיסמא שלך.',
	'acct_active' => 'חשבונך פעיל כעת , תוכל להתחבר באמצעות שם המשתמש והסיסמא.',
	'acct_already_act' => 'חשבונך כבר פעיל !',
	'acct_act_failed' => 'לא ניתן להפעיל חשבון זה !',
	'err_unk_user' => 'המשתמש הנבחר לא קיים במערכת !',
	'x_s_profile' => '%s\'s פרופילים',
	'group' => 'קבוצה',
	'reg_date' => 'הצטרף',
	'disk_usage' => 'דיסק בשימוש',
	'change_pass' => 'שנה סיסמא',
	'current_pass' => 'סיסמא נוכחית',
	'new_pass' => 'סיסמא חדשה',
	'new_pass_again' => 'הקלד סיסמא חדשה שוב',
	'err_curr_pass' => 'סיסמא נוכחית אינה נכונה',
	'apply_modif' => 'שמור שינויים',
	'change_pass' => 'שנה את הסיסמא שלי',
	'update_success' => 'הפרופיל שלך עודכן',
	'pass_chg_success' => 'סיסמתך שונתה',
	'pass_chg_error' => 'סיסמתך לא שונתה',
);

$lang_register_confirm_email = <<<EOT
Thank you for registering at {SITE_NAME}

Your username is : "{USER_NAME}"
Your password is : "{PASSWORD}"

In order to activate your account, you need to click on the link below
or copy and paste it in your web browser.

{ACT_LINK}

Regards,

The management of {SITE_NAME}

EOT;

}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
	'title' => 'סקור הערות',
	'no_comment' => 'אין הערות לסקירה',
	'n_comm_del' => '%s הערות נמחקו',
	'n_comm_disp' => 'מספר ההערות לתצוגה',
	'see_prev' => 'ראה קודמת',
	'see_next' => 'ראה הבאה',
	'del_comm' => 'מחק הערות נבחרות',
);


// ------------------------------------------------------------------------- //
// File search.php - OK
// ------------------------------------------------------------------------- //

if (defined('SEARCH_PHP')) $lang_search_php = array(
	0 => 'חפש בקולקצית התמונות',
);

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
	'page_title' => 'חפש תמונה חדשה',
	'select_dir' => 'בחר ספריה',
	'select_dir_msg' => 'פונקציה זו מאפשרת לך לטעון מספר תמונות לאלבום מאלו להעלתה לשרת ה- FTP<br /><br />בחר את הספריה בה נמצאות התמונות.',
	'no_pic_to_add' => 'לא נמצאו תמונות להוספה',
	'need_one_album' => 'אתה צריך אלבום אחד לפחות בכדי להשתמש בפונקציה זו',
	'warning' => 'אזהרה',
	'change_perm' => 'אין באפשרות הסקריפט לכתוב לספריה זו, עליך לשנות את גישת ההרשאה ל- 755 או 777 לפני שאתה מנסה להוסיף את התמונות !',
	'target_album' => '<b>הכנס תמונות של &quot;</b>%s<b>&quot; בתוך </b>%s',
	'folder' => 'תיקיה',
	'image' => 'תמונה',
	'album' => 'אלבום',
	'result' => 'תוצאה',
	'dir_ro' => 'לא ניתן לכתיבה. ',
	'dir_cant_read' => 'לא ניתן לקריאה. ',
	'insert' => 'הוספת תמונות חדשות לגלריה',
	'list_new_pic' => 'רשימה של התמונות החדשות',
	'insert_selected' => 'הכנס תמונות נבחרות',
	'no_pic_found' => 'לא נמצאו תמונות חדשות',
	'be_patient' => 'אנא המתן בסבלנות , לסקריפט נחוץ מעט זמן בכדי להוסיף את התמונות.',
	'notes' =>  '<ul>'.
				'<li><b>תקין</b> : הכוונה היא שהתמונות נוספו בהצלחה'.
				'<li><b>כפילות</b> : הכוונה היא שתמונות אלו כבר קיימות בבסיס הנתונים'.
				'<li><b>לא תקין</b> : הכוונה היא שלא ניתן להעלות תמונות, אנא בדוק את ההגדרות שלך ואת מידת ההרשאות לתיקייה אליה אתה מנסה לטעון את התמונות'.
				'<li>אם וכאשר לא מופיעות המילים תקין,כפילות,לא תקין לחץ על התמונה השגויה בכדי לראות איזה שגיאה הפיקה שפת ה- PHP'.
				'<li>אם וכאשר הדפדפן לא מעלה כלום , לחצו על לחצן הטעינה מחדש.'.
				'</ul>',
);


// ------------------------------------------------------------------------- //
// File thumbnails.php
// ------------------------------------------------------------------------- //

// Void


// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) $lang_upload_php = array(
	'title' => 'טען תמונה',
	'max_fsize' => 'גודל קובץ מקסימלי מותר הוא %s ק"ב',
	'album' => 'אלבום',
	'picture' => 'תמונה',
	'pic_title' => 'כותרת תמונה',
	'description' => 'תיאור תמונה',
	'keywords' => 'מילת מפתח (מופרד ברווחים)',
	'err_no_alb_uploadables' => 'מצטערים אך אין אלבום בו הנך מורשה להעלות תמונות !',
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
	'title' => 'ערוך משתמשים',
	'name_a' => 'שמות בסדר עולה',
	'name_d' => 'שמות בסדר יורד',
	'group_a' => 'קבוצות בסדר עולה',
	'group_d' => 'קבוצות בסדר יורד',
	'reg_a' => 'תאריך רישום בסדר עולה',
	'reg_d' => 'תאריך רישום בסדר יורד',
	'pic_a' => 'ספירת תמונות בסדר עולה',
	'pic_d' => 'ספירת תמונות בסדר יורד',
	'disku_a' => 'דיסק בשימוש בסדר עולה',
	'disku_d' => 'דיסק בשימוש בסדר יורד',
	'sort_by' => 'סדר משתמשים לפי',
	'err_no_users' => 'טבלת משתמשים ריקה !',
	'err_edit_self' => 'אינך יכול לערוך ישירות את הפרופיל שלך, השתמש בלינק\'הפרופיל שלי\' עבור פעולה זו',
	'edit' => 'ערוך',
	'delete' => 'מחק',
	'name' => 'שם משתמש',
	'group' => 'קבוצה',
	'inactive' => 'לא פעיל',
	'operations' => 'פעולות',
	'pictures' => 'תמונות',
	'disk_space' => 'מקום בשימוש / מכסה',
	'registered_on' => 'רשום ב...',
	'u_user_on_p_pages' => '%d משתמשים ב %d דפים',
	'confirm_del' => 'האם אתה בטוח שברצונך למחוק משתמש זה ? \\כמו כן כל התמונות וההערות של משתמש זה ימחקו גם כן',
	'mail' => 'דואר',
	'err_unknown_user' => 'המשתמש שבחרת אינו קיים !',
	'modify_user' => 'ערוך משתמש',
	'notes' => 'הערות',
	'note_list' => '<li>אם אינך מעונין לשנות את סיסמתך ,השאר את חלון הסיסמא ריק.',
	'password' => 'סיסמא',
	'user_active' => 'המשתמש פעיל',
	'user_group' => 'קבוצת המשמש',
	'user_email' => 'כתובת אימייל של המשתמש',
	'user_web_site' => 'אתר פרטי של המשתמש',
	'create_new_user' => 'צור משתמש חדש',
	'user_location' => 'מיקום המשתמש',
	'user_interests' => 'תחביבי המשתמש',
	'user_occupation' => 'מקצוע המשתמש',
);
?>