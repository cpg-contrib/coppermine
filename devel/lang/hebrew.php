<?php
// ------------------------------------------------------------------------- //
//  Coppermine Photo Gallery                                                 //
// ------------------------------------------------------------------------- //
//  Copyright (C) 2002,2003  Gr?gory DEMAR <gdemar@wanadoo.fr>               //
//  http://www.chezgreg.net/coppermine/                                      //
// ------------------------------------------------------------------------- //
//  Based on PHPhotoalbum by Henning St?verud <henning@stoverud.com>         //
//  http://www.stoverud.com/PHPhotoalbum/                                    //
// ------------------------------------------------------------------------- //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
// ------------------------------------------------------------------------- //
//  * Hebrew version by Eyal Zvi <eyal@zvi.org>                              //
// ------------------------------------------------------------------------- //

$lang_charset = 'iso-8859-8-i';
$lang_text_dir = 'RTL'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('Bytes', 'KB', 'MB');

// Day of weeks and months
$lang_day_of_week = array("א'", "ב'", "ג'", "ד'", "ה'", "ו'", "ש'");
$lang_month = array("ינו'", "פבר'", "מרץ", "אפר'", "מאי", "יוני", "יולי", "אוג'", "ספט'", "אוק'", "נוב'", "דצמ'");

// Some common strings
$lang_yes = 'כן';
$lang_no  = 'לא';
$lang_back = 'חזרה';
$lang_continue = 'המשך';
$lang_info = 'מידע';
$lang_error = 'שגיאה';

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$album_date_fmt =    '%d %b %Y';
$lastcom_date_fmt =  '%d %b %Y, %H:%M';
$lastup_date_fmt = '%d %b %Y';
$register_date_fmt = '%d %b %Y';
$lasthit_date_fmt = '%d %b %Y, %H:%M';
$comment_date_fmt =  '%d %b %Y, %H:%M';

// For the word censor
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*');

$lang_meta_album_names = array(
	'random' => 'תמונות אקראיות',
	'lastup' => 'תמונות אחרונות',
	'lastcom' => 'הערות אחרונות',
	'topn' => 'נצפות ביותר',
	'toprated' => 'זכו לדרוגים הגבוהים ביותר',
	'lasthits' => 'נצפו לאחרונה',
	'search' => 'תוצאות חיפוש'
);

$lang_errors = array(
	'access_denied' => 'אין לך הרשאה לצפות בעמוד זה.',
	'perm_denied' => 'אין לך הרשאה לבצע פעולה זו.',
	'param_missing' => 'Script called without the required parameter(s).',
	'non_exist_ap' => 'האלבום או התמונה שבחרת אינם קיימים!',
	'quota_exceeded' => 'חריגה מהקצאת דיסק<br /><br />הוקצו לך [quota]K, מתוכם ניצלת [space]K, כך שהוספת התמונה גורמת לחריגה מהנפח המותר.',
	'gd_file_type_err' => 'סוגי קבצי התמונות המותרים הם Jpeg ו- PNG.',
	'invalid_image' => 'קובץ התמונה שהעלית משובש או מסוג שאינו נתמך על ידי המערכת.',
	'resize_failed' => 'תקלה ביצירת תמונה מוקטנת.',
	'no_img_to_display' => 'אין תמונה להציג.',
	'non_exist_cat' => 'הקטגוריה שבחרת אינה קיימת.',
	'orphan_cat' => 'קטגוריה אינה מסווגת כראוי. יש להפעיל את תכנית ניהול הקטגוריות.',
	'directory_ro' => 'לא ניתן לכתוב/למחוק במחיצה %s, לכן לא ניתן למחוק את התמונות.',
	'non_exist_comment' => 'ההערה שנבחרה אינה קיימת.',
	'pic_in_invalid_album' => 'התמונה משוייכת לאלבום לא קיים (%s) !?'
);

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
	'alb_list_title' => 'דלג לרשימת האלבומים',
	'alb_list_lnk' => 'רשימת אלבומים',
	'my_gal_title' => 'דלג לגלריה שלי',
	'my_gal_lnk' => 'הגלריה שלי',
	'my_prof_lnk' => 'הפרופיל שלי',
	'adm_mode_title' => 'מעבר למצב מנהל',
	'adm_mode_lnk' => 'מצב מנהל',
	'usr_mode_title' => 'מעבר למצב משתמש',
	'usr_mode_lnk' => 'מצב משתמש',
	'upload_pic_title' => 'הוספת תמונה לאלבום',
	'upload_pic_lnk' => 'הוספת תמונה',
	'register_title' => 'פתיחת חשבון משתמש',
	'register_lnk' => 'רישום',
	'login_lnk' => 'התחברות',
	'logout_lnk' => 'התנתקות',
	'lastup_lnk' => 'תמונות אחרונות',
	'lastcom_lnk' => 'הערות אחרונות',
	'topn_lnk' => 'נצפות ביותר',
	'toprated_lnk' => 'זכו לדרוגים הגבוהים ביותר',
	'search_lnk' => 'חיפוש',
);

$lang_gallery_admin_menu = array(
	'upl_app_lnk' => 'אישור הוספה',
	'config_lnk' => 'תצורה',
	'albums_lnk' => 'אלבומים',
	'categories_lnk' => 'קטגוריות',
	'users_lnk' => 'משתמשים',
	'groups_lnk' => 'קבוצות',
	'comments_lnk' => 'הערות',
	'searchnew_lnk' => 'הוספת סדרת תמונות',
);

$lang_user_admin_menu = array(
	'albmgr_lnk' => 'יצירה / ארגון אלבומים שלי',
	'modifyalb_lnk' => 'שינוי אלבומים שלי',
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
	'sort_da' => 'מיון לפי תאריך יורד (מחדש לישן)',
	'sort_dd' => 'מיון לפי תאריך עולה (מישן לחדש)',
	'sort_na' => 'מיון לפי שם בסדר א"ב',
	'sort_nd' => 'מיון לפי שם בסדר הפוך',
	'pic_on_page' => '%d תמונות ב-%d דפים',
	'user_on_page' => '%d משתמשים ב-%d דפים'
);

$lang_img_nav_bar = array(
	'thumb_title' => 'חזרה לעמוד הדוגמיות',
	'pic_info_title' => 'הצגת/הסתרת מידע של התמונות',
	'slideshow_title' => 'מצגת שקופיות',
	'ecard_title' => 'שליחת התמונה כגלויה וירטואלית',
	'ecard_disabled' => 'גלויות וירטואליות אינן מותרות',
	'ecard_disabled_msg' => 'אין לך הרשאה לשלוח גלויה וירטואלית',
	'prev_title' => 'הצגת התמונה הקודמת',
	'next_title' => 'הצגת התמונה הבאה',
	'pic_pos' => 'תמונה %s מתוך %s',
);

$lang_rate_pic = array(
	'rate_this_pic' => 'דרוג התמונה ',
	'no_votes' => '(אין קולות)',
	'rating' => '(דרוג: %s/5 עם %s קולות)',
	'rubbish' => 'גרועה',
	'poor' => 'לא מוצלחת',
	'fair' => 'סבירה',
	'good' => 'טובה',
	'excellent' => 'מצויינת',
	'great' => 'נפלאה!',
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
	CRITICAL_ERROR => 'תקלה קריטית',
	'file' => 'קובץ: ',
	'line' => 'שורה: ',
);

$lang_display_thumbnails = array(
	'filename' => 'שם: ',
	'filesize' => 'גודל: ',
	'dimensions' => 'מידות: ',
	'date_added' => 'נוספה ב: '
);

$lang_get_pic_data = array(
	'n_comments' => '%s הערות',
	'n_views' => '%s צפיות',
	'n_votes' => '(%s קולות)'
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
	'Exclamation' => 'סימן קריאה!',
	'Question' => 'סימן שאלה?',
	'Very Happy' => 'מאושר מאד',
	'Smile' => 'חיוך',
	'Sad' => 'עצוב',
	'Surprised' => 'מופתע',
	'Shocked' => 'מזועזע',
	'Confused' => 'מבולבל',
	'Cool' => 'גזעי',
	'Laughing' => 'צוחק',
	'Mad' => 'משוגע',
	'Razz' => 'Razz',
	'Embarassed' => 'נבוך',
	'Crying or Very sad' => 'עצוב ובוכה',
	'Evil or Very Mad' => 'רשע מטורף',
	'Twisted Evil' => 'רשע סוטה',
	'Rolling Eyes' => 'מגלגל עיניים',
	'Wink' => 'קורץ',
	'Idea' => 'רעיון',
	'Arrow' => 'חץ',
	'Neutral' => 'נייטרלי',
	'Mr. Green' => 'מיסטר ירוק',
);

// ------------------------------------------------------------------------- //
// File addpic.php
// ------------------------------------------------------------------------- //

// void

// ------------------------------------------------------------------------- //
// File admin.php
// ------------------------------------------------------------------------- //

if (defined('ADMIN_PHP')) $lang_admin_php = array(
	0 => 'יציאה ממצב מנהל...',
	1 => 'כניבה למצב מנהל...',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
	'alb_need_name' => 'חובה לתת שם לאלבום!',
	'confirm_modifs' => 'האם את/ה בטוח/ה שברצונך לעשות שינויים אלה?',
	'no_change' => 'לא ביצעת כל שינוי!',
	'new_album' => 'אלבום חדש',
	'confirm_delete1' => 'האם את/ה בטוח/ה שברצונך למחוק אלבום זה?',
	'confirm_delete2' => '\nכל התמונות וההערות שבו יאבדו!',
	'select_first' => 'קודם עליך לבחור אלבום',
	'alb_mrg' => 'מנהל האלבומים',
	'my_gallery' => '* הגלריה שלי *',
	'no_category' => '* ללא קטגוריה *',
	'delete' => 'מחיקה',
	'new' => 'פתיחת חדש',
	'apply_modifs' => 'ביצוע שינויים',
	'select_category' => 'בחירת קטגוריה',
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
	'miss_param' => 'חסרים פרמטרים הדרושים לפעולה "%s"',
	'unknown_cat' => 'הקטגוריה שנבחרה אינה קיימת במס הנתונים (DB)',
	'usergal_cat_ro' => 'לא ניתן למחוק את הקטגוריה "גלריות משתמשים"!',
	'manage_cat' => 'ניהול קטגוריות',
	'confirm_delete' => 'האם את/ה בטוח/ה שברצונך למחוק קטגוריה זו?',
	'category' => 'קטגוריה',
	'operations' => 'פעולות',
	'move_into' => 'העבר אל',
	'update_create' => 'יצירה/עדכון קטגוריה',
	'parent_cat' => 'קטגוריית על',
	'cat_title' => 'כותרת הקטגוריה',
	'cat_desc' => 'תאור הקטגוריה'
);

// ------------------------------------------------------------------------- //
// File config.php
// ------------------------------------------------------------------------- //

if (defined('CONFIG_PHP')) $lang_config_php = array(
	'title' => 'תצורה',
	'restore_cfg' => 'שיחזור ברירות מחדל',
	'save_cfg' => 'שמירת התצורה החדשה',
	'notes' => 'הערות',
	'info' => 'מידע',
	'upd_success' => 'התצורה עודכנה',
	'restore_success' => 'התצורה שוחזרה לברירות המחדל',
	'name_a' => 'שם עולה',
	'name_d' => 'שם יורד',
	'date_a' => 'תאריך עולה',
	'date_d' => 'תאירך יורד'
);

if (defined('CONFIG_PHP')) $lang_config_data = array(
	'הגדרות כלליות',
	array('שם הגלריה', 'gallery_name', 0),
	array('תאור הגלריה', 'gallery_description', 0),
	array('כתובת דוא"ל של מנהל הגלריה', 'gallery_admin_email', 0),
	array('כתובת (URL) שתופיע בגלויות בקישור "See more pictures" ', 'ecards_more_pic_target', 0),
	array('שפה', 'lang', 5),
	array('סגנון עיצוב', 'theme', 6),

	'הגדרות לרשימת אלבומים',
	array('רוחב הטבלה הראשית (ב-% או בפקיסלים)', 'main_table_width', 0),
	array('מספר רמות קטגוריה להציג', 'subcat_level', 0),
	array('מספר אלבומים להציג', 'albums_per_page', 0),
	array('מספר עמודות לרשימת האלבומים', 'album_list_cols', 0),
	array('גודל הדוגמיות בפיקסלים', 'alb_list_thumb_size', 0),
	array('תוכן הדף הראשי', 'main_page_layout', 0),

	'הגדרות לתצוגת דוגמיות',
	array('מספר עמודות בדף דוגמיות', 'thumbcols', 0),
	array('מספר שורות בדף דוגמיות', 'thumbrows', 0),
	array('מספר לשוניות מקסימלי להציג', 'max_tabs', 0),
	array('הצגת כתובית (בנוסף לכותרת) מתחת לדוגמית', 'caption_in_thumbview', 1),
	array('הצגת מספר ההערות מתחת לדוגמית', 'display_comment_count', 1),
	array('מיון התחלתי של הדוגמיות', 'default_sort_order', 3),
	array('מספר קולות מינימלי הנדרש לתמונה כדי שתופיע ברשימת הדרוגים הגבוהים ביותר ', 'min_votes_for_rating', 0),

	'הגדרות לתצוגת תמונה והערות',
	array('רוחב הטבלה (ב-% או בפיקסלים)', 'picture_table_width', 0),
	array('מידע על התמונה מוצג כברירת מחדל', 'display_pic_info', 1),
	array('האם לסנן ניבולי לשון מההערות', 'filter_bad_words', 1),
	array('האם להרשות סמיילים בהערות', 'enable_smilies', 1),
	array('אורך מקסימלי של תאור תמונה', 'max_img_desc_length', 0),
	array('אורך מילה מקסימלי (למניעת "קישקושים")', 'max_com_wlength', 0),
	array('מספר שורות מקסימלי בהערה', 'max_com_lines', 0),
	array('מקסימום אורך ההערה', 'max_com_size', 0),

	'הגדרות לתמונות ולדוגמיות',
	array('רמת איכות לקבצי JPEG', 'jpeg_qual', 0),
	array('מקסימום גובה או רוחב של דוגמית <b>*</b>', 'thumb_width', 0),
	array('יצירה/הצגה של תמונות בגודל ביניים','make_intermediate',1),
	array('מקסימום גובה או רוחב של תמונה בגודל ביניים <b>*</b>', 'picture_width', 0),
	array('מקסימום גודל של קובץ תמונה (KB)', 'max_upl_size', 0),
	array('מקסימום גובה או רוחב של תמונה', 'max_upl_width_height', 0),

	'הגדרות משתמשים',
	array('לאפשר רישום של משתמשים חדשים', 'allow_user_registration', 1),
	array('לבצע בדיקת דוא"ל של משתמש חדש', 'reg_requires_valid_email', 1),
	array('להרשות כפילות של כתובות דוא"ל בין משתמשים שונים', 'allow_duplicate_emails_addr', 1),
	array('לאפשר למשתמשים ליצור אלבומים פרטיים', 'allow_private_albums', 1),

	'שדות נוספים לתאור תמונה (להשאיר ריק אם אין צורך)',
	array('שם שדה 1', 'user_field1_name', 0),
	array('שם שדה 2', 'user_field2_name', 0),
	array('שם שדה 3', 'user_field3_name', 0),
	array('שם שדה 4', 'user_field4_name', 0),

	'הגדרות מתקדמות לתמונות ודוגמיות',
	array('תוים אסורים בשם קובץ תמונה', 'forbiden_fname_char',0),
	array('סיומות מותרות של קבצי תמונה', 'allowed_file_extensions',0),
	array('שיטת שינוי גודל התמונה','thumb_method',2),
	array('נתיב לתוכנית Convert של חבילת ImageMagick (למשל /usr/bin/X11/)', 'impath', 0),
	array('סוגי קבצי תמונה מותרים (רק עבור ImageMagick)', 'allowed_img_types',0),
	array('פרמטרים לשורת הפקודה של ImageMagick', 'im_options', 0),
	array('קריאת מידע מורחב (EXIF) מקבצי JPEG', 'read_exif_data', 1),
	array('נתיב למחיצת האלבומים <b>*</b>', 'fullpath', 0),
	array('מחיצה לתמונות משתמשים <b>*</b>', 'userpics', 0),
	array('קידומת לתמונות בגודל ביניים <b>*</b>', 'normal_pfx', 0),
	array('קידומת לדוגמיות <b>*</b>', 'thumb_pfx', 0),
	array('ברירת מחדל להרשאת מחיצות', 'default_dir_mode', 0),
	array('ברירת מחדל להרשאת קבצי תמונה', 'default_file_mode', 0),

	'הגדרות Cookies ושפה',
	array('שם ה-Cookie של הגלריה', 'cookie_name', 0),
	array('נתיב ה-Cookie של הגלריה', 'cookie_path', 0),
	array('קידוד תוים (שפה)', 'charset', 4),

	'הגדרות שונות',
	array('הפעלת מצב Debug', 'debug_mode', 1),

	'<br /><div align="center">(*) שדות המסומנים ב-* אסור לשנות אם יש כבר תמונות בגלריה!</div><br />'
);

// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
	'empty_name_or_com' => 'עליך לציין את שמך ולכתוב הערה',
	'com_added' => 'הערתך נוספה',
	'alb_need_title' => 'עליך לתת כותרת לאלבום',
	'no_udp_needed' => 'לא נדרש עדכון',
	'alb_updated' => 'האלבום עודכן',
	'unknown_album' => 'האלבום שבחרת אינו קיים או שאין לך הרשאה להוסיף לו תמונות',
	'no_pic_uploaded' => 'לא העברת קובץ תמונה!<br /><br />אם אכן בצעת את פעולת ההעברה, יתכן שהשרת אינו מקבל קבצים (Upload)...',
	'err_mkdir' => 'יצירת מחיצה "%s" נכשלה!',
	'dest_dir_ro' => 'מחיצת היעד "%s" אינה מאפשרת לתוכנית לבצע שינויים!',
	'err_move' => 'לא ניתן להעביר את "%s" אל "%s"!',
	'err_fsize_too_large' => 'התמונה שהעברת חורגת מהממדים המקסימליים המותרים (%sx%s)!',
	'err_imgsize_too_large' => 'התמונה שהעברת חורגת מגודל הקובץ המקסימלי המותר (%s)!',
	'err_invalid_img' => 'הקובץ שהעברת אינו מכיל תמונה תקינה!',
	'allowed_img_types' => 'באפשרותך להעביר עד %s קבצי תמונה.',
	'err_insert_pic' => 'לא ניתן להוסיף את התמונה %s לאלבום ',
	'upload_success' => 'התמונה עברה בהצלחה.<br /><br />התמונה תופיע לאחר אישור המנהל.',
	'info' => 'מידע',
	'com_added' => 'הערה נוספה',
	'alb_updated' => 'אלבום נוסף',
	'err_comment_empty' => 'הערתך ריקה!',
	'err_invalid_fext' => 'מתקבלים קבצים רק בעלי הסיומות: <br /><br />%s.',
	'no_flood' => 'נראה כי ההערה האחרונה לתמונה היא שלך.<br /><br />אם ברצונך לשנות את ההערה באפשרותך לערוך אותה שוב.',
	'redirect_msg' => 'הפניה אוטומטית לדף אחר.<br /><br /><br />אם הדף אינו מופיע תוך מספר שניות, יש ללחוץ על "המשך".',
	'upl_success' => 'תמונתך נוספה בהצלחה',
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
	'caption' => 'כתובית',
	'fs_pic' => 'תמונה בגודל מלא',
	'del_success' => 'המחיקה הצליחה',
	'ns_pic' => 'תמונה בגודל רגיל',
	'err_del' => 'לא ניתן למחוק',
	'thumb_pic' => 'דוגמית',
	'comment' => 'הערה',
	'im_in_alb' => 'תמונה באלבום',
	'alb_del_success' => 'אלבום "%s" נמחק',
	'alb_mgr' => 'ניהול אלבומים',
	'err_invalid_data' => 'מידע שגוי נקלט ב-%s',
	'create_alb' => 'יוצר אלבום "%s"',
	'update_alb' => 'מעדכן אלבום "%s" עם כותרת "%s" ואינדקס "%s"',
	'del_pic' => 'מחיקת תמונה',
	'del_alb' => 'מחיקת אלבום',
	'del_user' => 'מחיקת משתמש',
	'err_unknown_user' => 'המשתמש שנבחר אינו קיים!',
	'comment_deleted' => 'הערה נמחקה בהצלחה',
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
	'confirm_del' => 'האם את/ה הטוח/ה שברצונך למחוק את התמונה? \\nגם ההערות ימחקו.',
	'del_pic' => 'מחיקת תמונה זו',
	'size' => '%sx%s פיקסלים',
	'views' => '%s פעמים',
	'slideshow' => 'מצגת שקופיות',
	'stop_slideshow' => 'הפסקת המצגת',
	'view_fs' => 'יש להקליק לצפיה בתמונה בגודל מלא',
);

$lang_picinfo = array(
	'title' =>'מידע על התמונה',
	'Filename' => 'שם הקובץ',
	'Album name' => 'שם האלבום',
	'Rating' => 'דרוג (%s קולות)',
	'Keywords' => 'מילות מפתח',
	'File Size' => 'גודל קובץ',
	'Dimensions' => 'ממדים',
	'Displayed' => 'הוצגה',
	'Camera' => 'מצלמה',
	'Date taken' => 'צולמה בתאריך',
	'Aperture' => 'צמצם',
	'Exposure time' => 'חשיפה',
	'Focal length' => 'אורך מוקד',
	'Comment' => 'הערה'
);

$lang_display_comments = array(
	'OK' => 'OK',
	'edit_title' => 'עריכת הערה זו',
	'confirm_delete' => 'האם את/ה בטוח/ה שברצונך למחוק הודעה זו?',
	'add_your_comment' => 'הוספת הערה',
	'your_name' => 'שמך',
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
	'title' => 'שליחת גלויה וירטואלית',
	'invalid_email' => '<b>אזהרה</b>: כתובת דוא"ל שגויה!',
	'ecard_title' => 'An e-card from %s',
	'view_ecard' => 'If the e-card does not display correctly, click this link',
	'view_more_pics' => 'Click this link to view more pictures !',
	'send_success' => 'הגלויה נשלחה',
	'send_failed' => 'סליחה אך השרת אינו יכול לשלוח את הגלויה...',
	'from' => 'מאת',
	'your_name' => 'שמך',
	'your_email' => 'כתובת הדוא"ל שלך',
	'to' => 'אל',
	'rcpt_name' => 'שם הנמען',
	'rcpt_email' => 'כתובת דוא"ל הנמען',
	'greetings' => 'ברכות',
	'message' => 'הודעה',
);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
	'pic_info' => 'מידע על התמונה',
	'album' => 'אלבום',
	'title' => 'כותרת',
	'desc' => 'תאור',
	'keywords' => 'מלות מפתח',
	'pic_info_str' => '%sx%s - %sKB, עם %s צפיות ו- %s קולות',
	'approve' => 'אישור התמונה',
	'postpone_app' => 'דחיית האישור',
	'del_pic' => 'מחיקת התמונה',
	'reset_view_count' => 'איפוס מונה צפיות',
	'reset_votes' => 'איפוס קולות',
	'del_comm' => 'מחיקת הערות',
	'upl_approval' => 'אישור העברה',
	'edit_pics' => 'עריכת תמונות',
	'see_next' => 'צפיה בתמונות הבאות',
	'see_prev' => 'צפיה בתמונות הקודמות',
	'n_pic' => '%s תמונות',
	'n_of_pic_to_disp' => 'מספר תמונות להצגה',
	'apply' => 'ביצוע השינויים'
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
	'group_name' => 'שם הקבוצה',
	'disk_quota' => 'הקצאת נפח דיסק',
	'can_rate' => 'הרשאה לדרוג תמונות',
	'can_send_ecards' => 'הרשאה לשלוח גלויות',
	'can_post_com' => 'הרשאה לכתוב הערות',
	'can_upload' => 'הרשאה להוספת תמונות',
	'can_have_gallery' => 'הרשאה לגלריה אישית',
	'apply' => 'ביצוע השינויים',
	'create_new_group' => 'יצירת קבוצה חדשה',
	'del_groups' => 'מחיקת הקבוצות המסומנות',
	'confirm_del' => 'אזהרה: מחיקת קבוצה תגרום להעברת כל המשתמשים בקבוצה אל קבוצת "Registered" - האם ברצונך להמשיך?',
	'title' => 'ניהול קבוצות משתמשים',
	'approval_1' => 'אישור הוספות ציבוריות (1)',
	'approval_2' => 'אישור הוספות פרטיות (2)',
	'note1' => '<b>(1)</b> הוספת תמונות לאלבום ציבורי דורשת אישור מנהל',
	'note2' => '<b>(2)</b> הוספת תמונות לאלבום פרטי דורשת אישור מנהל',
	'notes' => 'הערות'
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
	'welcome' => 'ברוכים הבאים!'
);

$lang_album_admin_menu = array(
	'confirm_delete' => '?האם את/ה בטוח/ה שברצונך למחוק אלבום זה\n!כל התמונות וההערות שבו יאבדו',
	'delete' => 'מחיקה',
	'modify' => 'מאפיינים',
	'edit_pics' => 'עריכת תמונות',
);

$lang_list_categories = array(
	'home' => 'דף ראשי',
	'stat1' => '<b>[pictures]</b> תמונות ב- <b>[albums]</b> אלבומים ו- <b>[cat]</b> קטגוריות עם <b>[comments]</b> הערות, שנצפו <b>[views]</b> פעמים',
	'stat2' => '<b>[pictures]</b> תמונות ב- <b>[albums]</b> אלבומים, שנצפו <b>[views]</b> פעמים',
	'xx_s_gallery' => 'הגלריה של %s',
	'stat3' => '<b>[pictures]</b> תמונות ב- <b>[albums]</b> אלבומים עם <b>[comments]</b> הערות, שנצפו <b>[views]</b> פעמים'
);

$lang_list_users = array(
	'user_list' => 'רשימת משתמשים',
	'no_user_gal' => 'אין גלריות משתמשים',
	'n_albums' => '%s אלבוםמים',
	'n_pics' => '%s תמונות'
);

$lang_list_albums = array(
	'n_pictures' => '%s תמונות',
	'last_added' => ', האחרונה נוספה בתאריך- %s'
);

}

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
	'login' => 'התחברות',
	'enter_login_pswd' => 'יש להקיש שם משתמש/ת וסיסמה כדי להתחבר',
	'username' => 'שם משתמש/ת',
	'password' => 'סיסמה',
	'remember_me' => 'זכור אותי (חבר אותי אוטומטית בפעמים הבאות)',
	'welcome' => 'ברוכים הבאים',
	'err_login' => '*** ההתחברות נכשלה, נא לנסות שוב ***',
	'err_already_logged_in' => 'כבר התחברת!',
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
	'logout' => 'התנתקות',
	'bye' => 'להתראות...',
	'err_not_loged_in' => 'עוד לא התחברת!',
);

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
	'upd_alb_n' => 'עדכון אלבום %s',
	'general_settings' => 'הגדרות כלליות',
	'alb_title' => 'כותרת האלבום',
	'alb_cat' => 'קטגורית האלבום',
	'alb_desc' => 'תאור האלבום',
	'alb_thumb' => 'דוגמית מייצגת לאלבום',
	'alb_perm' => 'הרשאות לאלבום',
	'can_view' => 'הרשאות צפיה באלבום ל-',
	'can_upload' => 'אורחים יכולים להוסיף תמונות',
	'can_post_comments' => 'אורחים יכולים להוסיף הערות לתמונות',
	'can_rate' => 'אורחים יכולים לדרג תמונות',
	'user_gal' => 'גלריית משתמש',
	'no_cat' => '* ללא קטגוריה *',
	'alb_empty' => 'אלבום ריק',
	'last_uploaded' => 'תמונה אחרונה שנוספה',
	'public_alb' => 'כולם (אלבום ציבורי)',
	'me_only' => 'אני בלבד',
	'owner_only' => 'בעל האלבום (%s) בלבד',
	'groupp_only' => 'רק חברים בקבוצה "%s"',
	'err_no_alb_to_modify' => 'לא נמצא אלבום שבאפשרותך לעדכן',
	'update' => 'עדכון אלבום'
);

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
	'already_rated' => 'כבר דרגת את התמונה בעבר',
	'rate_ok' => 'הצבעתך נקלטה',
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
מנהל האתר ישתדל להסיר כל חומר פוגע המבירות האפשרית. עם זאת, יש לזכור שלא ניתן לסרוק כל פיסת מידע או תמונה. כל המידע המפורסם באתר מבטא את השקפותיהם של המשתמשים ולא של מנהלי האתר (מלבד מידע שהם עצמם פרסמו). אי לכך מנהלי האתר אינם אחראים לכל פגיעה או נזק כתוצאה ממעשיהם של המשתמשים באתר.
<br />
<br />
אין לפרסם באתר כל חומר המוגדר כ: פגיעה, השמצה, עלבון, הסתה, איום, תועבה, או כל סוג אחר שאינו עולה בקנה אחד עם החוק. אין לפרסם באתר חומר המוגן בזכויות יוצרים, למעט אם בעל הזכויות נתן הרשאה מפורשת לפרסום. מנהלי האתר יסירו או יערכו מידע לפי שיקול דעתם הבלעדי. כל המידע באתר נשמר במאגר מידע. האתר אינו מיועד לשמש כגיבוי למידע של המשתמשים אלא כלוח פרסום זמני. מנהלי האתר אינם אחראים לאובדן או גניבה של מידע.
<br />
<br />
אתר זה משתמש ב"עוגיות" (Cookies) לאחסון מידע בתוכנת הגלישה שלך. "עוגיות" אלה נועדו להקל על השימוש באתר ואינן גורמות לכל נזק או פגיעה בפרטיות. כתובת הדואר האלקטרונית שלך תשמש רק לשליחת הודעות מהאתר.
<br />
<br />
לחיצה על "אני מסכימ/ה" מהווה אישורך להבנה וקבלה מלאה של כל האמור לעיל.
EOT;

$lang_register_php = array(
	'page_title' => 'רישום משתמש/ת',
	'term_cond' => 'תנאי השימוש באתר',
	'i_agree' => 'אני מסכימ/ה',
	'submit' => 'שליחת בקשת ההרשמה',
	'err_user_exists' => 'שם המשתמש/ת שבחרת כבר תפוס, יש לבחור שם אחר',
	'err_password_mismatch' => 'הסיסמאות אינן תואמות, נא להקישן שוב',
	'err_uname_short' => ' שם המשתמש/ת חייב להכיל לפחות 2 אותיות (המלצה: 4 תוים לפחות)',
	'err_password_short' => 'הסיסמה חייבת להכיל לפחות 2 תוים (המלצה: 6 תוים לפחות)',
	'err_uname_pass_diff' => 'השם והסיסמה אינם יכולים להיות זהים',
	'err_invalid_email' => 'כתובת הדואר האלקטרוני אינה תקינה',
	'err_duplicate_email' => 'מישהו אחר כבר משתמש בכתובת הדואר האלקטרוני שציינת',
	'enter_info' => 'נא למלא את פרטי הרישום',
	'required_info' => 'מידע חובה',
	'optional_info' => 'מידע רשות',
	'username' => 'שם משתמש/ת',
	'password' => 'סיסמה',
	'password_again' => 'וידוא סיסמה',
	'email' => 'דואר אלקטרוני',
	'location' => 'מקום',
	'interests' => 'תחומי ענין',
	'website' => 'כתובת אתר',
	'occupation' => 'עיסוק',
	'error' => 'תקלה',
	'confirm_email_subject' => '%s - אישור רישום',
	'information' => 'מידע',
	'failed_sending_email' => 'לא ניתן לשלוח הודעת אישור רישום',
	'thank_you' => 'תודה שנרשמת.<br /><br />נשלחה הודעה לכתובת הדואר האלקטרוני שציינת, עם הוראות להפעלת חשבונך.',
	'acct_created' => 'חשבונך נפתח ובאפשרותך להתחבר באמצעות השם והסיסמה שבחרת',
	'acct_active' => 'חשבונך הופעל ובאפשרותך להתחבר באמצעות השם והסיסמה שבחרת',
	'acct_already_act' => 'חשבונך כבר פעיל!',
	'acct_act_failed' => 'לא ניתן להפעיל חשבון זה!',
	'err_unk_user' => 'המשתמש שנבחר אינו קיים!',
	'x_s_profile' => 'הפרופיל של %s',
	'group' => 'קבוצה',
	'reg_date' => 'הצטרפות',
	'disk_usage' => 'הפח דיסק בשימוש',
	'change_pass' => 'שינוי סיסמה',
	'current_pass' => 'סיסמה נוכחית',
	'new_pass' => 'סיסמה חדשה',
	'new_pass_again' => 'וידוא סיסמה חדשה',
	'err_curr_pass' => 'הסיסמה הנוכחית שגויה',
	'apply_modif' => 'ביצוע השינויים',
	'change_pass' => 'שינוי הסיסמה שלי',
	'update_success' => 'הפרופיל שלך עודכן',
	'pass_chg_success' => 'סיסמתך עודכנה',
	'pass_chg_error' => 'סיסמתך לא עודכנה',
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
	'title' => 'סקירת הערות',
	'no_comment' => 'אין הערות לסקור',
	'n_comm_del' => '%s הערות נמחקו',
	'n_comm_disp' => 'מספר הערות להצגה',
	'see_prev' => 'דף הבא',
	'see_next' => 'דף קודם',
	'del_comm' => 'מחיקת ההערות המסומנות',
);


// ------------------------------------------------------------------------- //
// File search.php - OK
// ------------------------------------------------------------------------- //

if (defined('SEARCH_PHP')) $lang_search_php = array(
	0 => 'חיפוש במאגר התמונות',
);

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
	'page_title' => 'חיפוש תמונות חדשות',
	'select_dir' => 'בחירת מחיצה',
	'select_dir_msg' => 'פעולה זו מאפשרת לך להוסיף סדרת תמונות שכבר העברת אל האתר ב-FTP.<br /><br />עליך לבחור את המחיצה בשרת שבה נמצאות התמונות',
	'no_pic_to_add' => 'אין תמונות להוסיף',
	'need_one_album' => 'צריך ליצור לפחות אלבום אחד כדי להשתמש בפעולה זו',
	'warning' => 'אזהרה',
	'change_perm' => 'התוכנית אינה יכולה לכתוב במחיצה זו. עליך לשנות את ההרשאה ל- 755 או 777 כדי להוסיף תמונות!',
	'target_album' => '<b>הוספת תמונות של "</b>%s<b>" אל </b>%s',
	'folder' => 'תיקיה',
	'image' => 'תמונה',
	'album' => 'אלבום',
	'result' => 'תוצאה',
	'dir_ro' => 'לא ניתן לכתיבה. ',
	'dir_cant_read' => 'לא ניתן לקריאה. ',
	'insert' => 'הוספת תמונה חדשה לגלריה',
	'list_new_pic' => 'רשימת תמונות חדשות',
	'insert_selected' => 'הכנסת התמונות המסומנות',
	'no_pic_found' => 'לא נמצאה אף תמונה חדשה',
	'be_patient' => 'נא להמתין בסבלנות עד שהתוכנית תסיים להוסיף את התמונות',
	'notes' =>  'מקרא<ul>'.
				'<li><b>OK</b> : התמונה נוספה בהצלחה'.
				'<li><b>DP</b> : התמונה (או תמונה זהה) כבר נמצאת במאגר'.
				'<li><b>PB</b> : הוספת התמונה נכשלה. יש לבדוק את הגדרות המערכת ואת ההרשאות למחיצות'.
				'<li>אם סימן OK/DP/PB לא הופיע, יש ללחוץ על מסגרת התמונה ולבדוק את הודעת השגיאה ממנוע PHP'.
				'<li>אם תוכנת הגלישה מודיעה "Time out", יש ללחוץ על כפתור Refresh/Reload'.
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
	'title' => 'הוספת תמונה',
	'max_fsize' => 'גודל הקובץ המקסימלי המותר %s KB',
	'album' => 'אלבום',
	'picture' => 'תמונה',
	'pic_title' => 'כותרת התמונה',
	'description' => 'תאור התמונה',
	'keywords' => 'מילות מפתח (מופרדות ברווחים)',
	'err_no_alb_uploadables' => 'לא נמצא אלבום שאליו מותר לך להוסיף תמונות',
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
	'title' => 'ניהול משתמשים',
	'name_a' => 'שם, סדר עולה',
	'name_d' => 'שם, סדר יורד',
	'group_a' => 'קבוצה, סדר עולה',
	'group_d' => 'קבוצה, סדר יורד',
	'reg_a' => 'תאריך רישום, סדר עולה',
	'reg_d' => 'תאריך רישום, סדר יורד',
	'pic_a' => 'מספר תמונות, סדר עולה',
	'pic_d' => 'מספר תמונות, סדר יורד',
	'disku_a' => 'ניצול דיסק, סדר עולה',
	'disku_d' => 'ניצול דיסק, סדר יורד',
	'sort_by' => 'מיון משתמשים לפי',
	'err_no_users' => 'טבלת המשתמשים ריקה!',
	'err_edit_self' => 'אין באפשרותך לערוך כאן את הפרופיל של עצמך, לשם כך יש ללחוץ על קישור "הפרופיל שלי"',
	'edit' => 'עריכה',
	'delete' => 'מחיקה',
	'name' => 'שם משתמש',
	'group' => 'קבוצה',
	'inactive' => 'לא פעיל',
	'operations' => 'פעולות',
	'pictures' => 'תמונות',
	'disk_space' => 'נפח מנוצל / הרשאה',
	'registered_on' => 'רישום מתאריך',
	'u_user_on_p_pages' => '%d משתמשים ב- %d דפים',
	'confirm_del' => 'האם את/ה בטוח/ה שברצונך למחוק משתמש זה?\\nכל האלבומים והתמונות שלו ימחקו.',
	'mail' => 'דוא"ל',
	'err_unknown_user' => 'המשתמש שנבחר אינו קיים',
	'modify_user' => 'שינוי משתמש',
	'notes' => 'הערות',
	'note_list' => '<li>אם אינך רוצה לשנות את הסיסמה, עליך להשאיר את שדה הסיסמה ריק',
	'password' => 'סיסמה',
	'user_active' => 'משתמש פעיל',
	'user_group' => 'קבוצה',
	'user_email' => 'דוא"ל',
	'user_web_site' => 'אתר אינטרנט',
	'create_new_user' => 'הגדרת משתמש חדש',
	'user_location' => 'מקום',
	'user_interests' => 'תחומי ענין',
	'user_occupation' => 'עיסוק',
);
?>