<?php
// ------------------------------------------------------------------------- //
//  Coppermine Photo Gallery v1.1 Beta 3                                     //
// ------------------------------------------------------------------------- //
//  Copyright (C) 2002,2003  Grégory DEMAR <gdemar@wanadoo.fr>               //
//  http://www.chezgreg.net/coppermine/                                      //
// ------------------------------------------------------------------------- //
//  Based on PHPhotoalbum by Henning Støverud <henning@stoverud.com>         //
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
$lang_day_of_week = array('øàùåï', 'ùðé', 'ùìéùé', 'øáéòé', 'çîéùé', 'ùéùé', 'ùáú');
$lang_month = array('éðåàø', 'ôáøåàø', 'îøõ', 'àôøéì', 'îàé', 'éåðé', 'éåìé', 'àåâåñè', 'ñôèîáø', 'àå÷èåáø', 'ðåáîáø', 'ãöîáø');

// Some common strings
$lang_yes = 'ëï';
$lang_no  = 'ìà';
$lang_back = 'àçåøä';
$lang_continue = 'äîùê';
$lang_info = 'îéãò';
$lang_error = 'ùâéàä';

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$album_date_fmt =    '%B %d, %Y';
$lastcom_date_fmt =  '%m/%d/%y á %H:%M';
$lastup_date_fmt = '%B %d, %Y';
$register_date_fmt = '%B %d, %Y';
$lasthit_date_fmt = '%B %d, %Y á %I:%M %p';
$comment_date_fmt =  '%B %d, %Y á %I:%M %p';

// For the word censor
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*');

$lang_meta_album_names = array(
	'random' => 'úîåðåú áúôæåøú',
	'lastup' => 'ðåñôå ìàçøåðä',
	'lastcom' => 'äòøåú àçøåðåú',
	'topn' => 'ðöôéí áéåúø',
	'toprated' => 'îãåøâéí áéåúø',
	'lasthits' => 'ðöôå ìàçøåðä',
	'search' => 'úåöàåú çéôåù'
);

$lang_errors = array(
	'access_denied' => 'àéðê îåøùä ìäéëðñ ìãó æä.',
	'perm_denied' => 'àéðê îåøùä ìáöò ôòåìä æå.',
	'param_missing' => 'äåôòì ñ÷øéôè ììà äôøîèøéí äðçåöéí.',
	'non_exist_ap' => 'äàìáåí / úîåðåú ùáçøú àéðí ÷ééîéí',
	'quota_exceeded' => 'ìà ðåúø î÷åí áãéñ÷<br /><br />òìéê ìôðåú î÷åí áãéñ÷ ìëì äôçåú áðôç ùì [quota]K, úîåðåúéê ëøâò îùúîùåú áðôç ùì [space]K, äåñôú úîåðä æå éâøåí ìçøéâú ðôç .',
	'gd_file_type_err' => 'ëàùø îùúîùéí áéùåí GD image library ä÷áöéí äîåúøéí ìùéîåù äí îñåâ JPEG å- PNG.',
	'invalid_image' => 'äúîåðä ùàúä îðñä ìäòìåú ôâåîä àå ù- GD library àéðå îñåâì ìèôì áä îàéæä ñéáä ùäéà',
	'resize_failed' => 'àéï àôùøåú ìéöåø úîåðä îå÷èðú àå ìä÷èéï àú âåãìä.',
	'no_img_to_display' => 'ìà ðîöàä úîåðä ìäöéâ.',
	'non_exist_cat' => 'ä÷èâåøéä ùðáçøä àéðä ÷ééîú.',
	'orphan_cat' => 'ì÷èâåøéä àéï úé÷ééú àá ,äøõ àú îðäì ä÷èâåøéåú áëãé ìôúåø áòéä æå.',
	'directory_ro' => 'ñôøééú \'%s\' ìà ðéúðú ìùëúåá, ìà ðéúï ìîçå÷ úîåðåú.',
	'non_exist_comment' => 'ääòøä ùðáçøä àéðä ÷ééîú',
	'pic_in_invalid_album' => 'äúîåðä ììà ùééëåú ìàìáåí ëìùäå (%s)!?'
);

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
	'alb_list_title' => 'âù àì øùéîú äàìáåîéí',
	'alb_list_lnk' => 'øùéîú àìáåîéí',
	'my_gal_title' => 'âù àì äâìøéä äôøèéú ùìé',
	'my_gal_lnk' => 'äâìøéä ùìé',
	'my_prof_lnk' => 'äôøåôéì ùìé',
	'adm_mode_title' => 'òáåø ìîöá îðäì',
	'adm_mode_lnk' => 'îöá îðäì',
	'usr_mode_title' => 'òáåø ìîöä îùúîù',
	'usr_mode_lnk' => 'îöá îùúîù',
	'upload_pic_title' => 'èòï úîåðä ìúåê äàìáåí',
	'upload_pic_lnk' => 'èòï úîåðä',
	'register_title' => 'ôúç çùáåï',
	'register_lnk' => 'äøùí',
	'login_lnk' => 'äúçáø',
	'logout_lnk' => 'äúðú÷',
	'lastup_lnk' => 'äåòìå ìàçøåðä',
	'lastcom_lnk' => 'äòøåú àçøåðåú',
	'topn_lnk' => 'äëé ðöôéí',
	'toprated_lnk' => 'äëé îãåøâéí',
	'search_lnk' => 'çôù',
);

$lang_gallery_admin_menu = array(
	'upl_app_lnk' => 'àéùåø èòéðåú',
	'config_lnk' => 'äâãøåú',
	'albums_lnk' => 'àìáåîéí',
	'categories_lnk' => '÷èâåøéåú',
	'users_lnk' => 'îùúîùéí',
	'groups_lnk' => '÷áåöåú',
	'comments_lnk' => 'äòøåú',
	'searchnew_lnk' => 'èòéðú ÷áåöú úîåðåú',
);

$lang_user_admin_menu = array(
	'albmgr_lnk' => 'öåø \ äæîï àú äàìáåí ùìé',
	'modifyalb_lnk' => 'ùðä àú äàìáåí ùìé',
	'my_prof_lnk' => 'äôøåôéì ùìé',
);

$lang_cat_list = array(
	'category' => '÷èâåøéä',
	'albums' => 'àìáåîéí',
	'pictures' => 'úîåðåú',
);

$lang_album_list = array(
	'album_on_page' => '%d àìáåîéí á- %d ãôéí'
);

$lang_thumb_view = array(
	'date' => 'úàøéê',
	'name' => 'ùí',
	'sort_da' => 'îééï ìôé úàøéê áñãø òåìä',
	'sort_dd' => 'îééï ìôé úàøéê áñãø éåøã',
	'sort_na' => 'îééï ìôé ùí áñãø òåìä',
	'sort_nd' => 'îééï ìôé ùí áñãø éåøã',
	'pic_on_page' => '%d úîåðåú á- %d ãôéí',
	'user_on_page' => '%d îùúîùéí á- %d ãôéí'
);

$lang_img_nav_bar = array(
	'thumb_title' => 'çæåø àì îöâ äúîåðåú äîå÷èðåú',
	'pic_info_title' => 'äöâ\äñúø úîåðä æå',
	'slideshow_title' => 'ùé÷åôéåú',
	'ecard_title' => 'ùìç úîåðä æå ëëøèéñ àì÷èøåðé',
	'ecard_disabled' => 'ëøèéñ àì÷èøåðé àéðå ôòéì',
	'ecard_disabled_msg' => 'àéï ìê äøùàä ìùìåç ëëøèéñ àì÷èøåðé',
	'prev_title' => 'úîåðä ÷åãîú',
	'next_title' => 'äúîåðä äáàä',
	'pic_pos' => 'úîåðä %s/%s',
);

$lang_rate_pic = array(
	'rate_this_pic' => 'ãøâ úîåðä æå ',
	'no_votes' => '(òãééï àéï äöáòåú)',
	'rating' => '(ãéøåâ òëùåé : %s / 5 òí %s äöáòåú)',
	'rubbish' => 'ùèåú',
	'poor' => 'ãì',
	'fair' => 'îîåöò',
	'good' => 'èåá',
	'excellent' => 'îöåéï',
	'great' => 'îòåìä',
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
	CRITICAL_ERROR => 'ùâéàä ÷øéèéú',
	'file' => '÷åáõ: ',
	'line' => 'ùåøä: ',
);

$lang_display_thumbnails = array(
	'filename' => 'ùí ÷åáõ : ',
	'filesize' => 'âåãì ÷åáõ : ',
	'dimensions' => 'îéãåú : ',
	'date_added' => 'ðåñó áúàøéê : '
);

$lang_get_pic_data = array(
	'n_comments' => '%s äòøåú',
	'n_views' => '%s öôéåú',
	'n_votes' => '(%s äöáòåú)'
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
	'Exclamation' => '÷øéàä',
	'Question' => 'ùàìä',
	'Very Happy' => 'ùîç îàã',
	'Smile' => 'îçééê',
	'Sad' => 'òöåá',
	'Surprised' => 'îåôúò',
	'Shocked' => 'äîåí',
	'Confused' => 'îáåìáì',
	'Cool' => 'îâðéá',
	'Laughing' => 'îöçé÷',
	'Mad' => 'ëòåñ',
	'Razz' => 'îìâìâ',
	'Embarassed' => 'îçá÷',
	'Crying or Very sad' => 'áåëä àå òöåá îàã',
	'Evil or Very Mad' => 'îøåùò àå òöáðé îàã',
	'Twisted Evil' => 'îøåùò áòéååú',
	'Rolling Eyes' => 'òéðééí îúâìâìåú',
	'Wink' => '÷åøõ',
	'Idea' => 'øòéåï',
	'Arrow' => 'çõ',
	'Neutral' => 'ðéèøìé',
	'Mr. Green' => 'îø.éøå÷',
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
	'alb_need_name' => 'äàìáåí çééá ìäéåú áòì ùí !',
	'confirm_modifs' => 'äàí àúä áèåç ùúøöä ìáöò ùéðåééí àìå ?',
	'no_change' => 'ìà áéöòú àó ùéðåé !',
	'new_album' => 'àìáåí çãù',
	'confirm_delete1' => 'äàí äðê áèåç ùáøöåðê ìîçå÷ àìáåí æä ?',
	'confirm_delete2' => 'åëï àú ëì äúîåðåú ùðîöàåú áå éîç÷å !',
	'select_first' => 'úçéìä áçø áàìáåí',
	'alb_mrg' => 'ðéäåì àìáåîéí',
	'my_gallery' => '* äâìøéä ùìé *',
	'no_category' => '* àéï ÷èâåøéä *',
	'delete' => 'îç÷',
	'new' => 'çãù',
	'apply_modifs' => 'ùîåø ùéðåééí',
	'select_category' => 'áçø ÷èâåøéä',
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
	'miss_param' => 'ôøîèøéí ðçåöéí òáåø \'%s\'äôòåìä ìà äúáöòä !',
	'unknown_cat' => 'ä÷èâåøéä äðáçøú àéðä ÷ééîú ááñéñ äðúåðéí',
	'usergal_cat_ro' => '÷èâåøéåú úîåðåú äîùúîù ìà ðéúðåú ìîçé÷ä !',
	'manage_cat' => 'òøåê ÷èâåøéåú',
	'confirm_delete' => 'äàí äðê áèåç ùáøöåðê ìîçå÷ ÷èâåøéä æå ?',
	'category' => '÷èâåøéä',
	'operations' => 'ôòåìåú',
	'move_into' => 'äòáø ìúåê',
	'update_create' => 'òãëï / öåø ÷èâåøéä',
	'parent_cat' => '÷èâåøéú àá',
	'cat_title' => 'ëåúøú ÷èâåøéä',
	'cat_desc' => 'úéàåø ä÷èâåøéä'
);

// ------------------------------------------------------------------------- //
// File config.php
// ------------------------------------------------------------------------- //

if (defined('CONFIG_PHP')) $lang_config_php = array(
	'title' => 'úöåøä',
	'restore_cfg' => 'ùçæø áøéøú îçãì',
	'save_cfg' => 'ùîåø áúöåøä äçãùä',
	'notes' => 'äòøåú',
	'info' => 'îéãò',
	'upd_success' => 'úöåøú äîåãåì òåãëðä',
	'restore_success' => 'úöåøú áøéøú äîçãì ùåçæøä',
	'name_a' => 'ùí áñãø òåìä',
	'name_d' => 'ùí áñãø éåøã',
	'date_a' => 'úàøéê áñãø òåìä',
	'date_d' => 'úàøéê áñãø éåøã',
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
	'empty_name_or_com' => 'òìéê ìä÷ìéã àú ùîê åàú ääòøä',
	'com_added' => 'äòøúê ðåñôä',
	'alb_need_title' => 'òìéê ìöééï ëåúøú ìàìáåí !',
	'no_udp_needed' => 'ìà ðãøùéí òãëåðéí.',
	'alb_updated' => 'äàìáåí òåãëï',
	'unknown_album' => 'äàìáåí äðáçø àéðå ÷ééí àå ùàéðê îåøùä ìäòìåú úîåðåú àìéå !',
	'no_pic_uploaded' => 'ìà ðèòðä àó úîåðä !<br /><br />áîéãä åàëï áçøú úîåðä ìèòéðä ,áãå÷ ùäùøú îàôùø èòéðú úîåðåú...',
	'err_mkdir' => 'ôòåìú éöéøú äúé÷ééä ðëùìä %s !',
	'dest_dir_ro' => 'úé÷ééú éòã %s àéðä ðéúðú ìùëúåá áàîöòåú äñ÷øéôè !',
	'err_move' => 'ìà ðéúï ìäòáéø %s àì %s !',
	'err_fsize_too_large' => 'âåãì äúîåðä ùäðê îðñä ìèòåï âãåì îãé (äî÷ñéîåí äîåúø äåà %s x %s) !',
	'err_imgsize_too_large' => 'âåãì ä÷åáõ ùðèòï âãåì îãé (äî÷ñéîåí äîåúø äåà %s ÷"á) !',
	'err_invalid_img' => 'ä÷åáõ ùèòðú àéðå ÷åáõ úîåðä çå÷é !',
	'allowed_img_types' => 'úåëì ìèòåï %s úîåðåú áìáã.',
	'err_insert_pic' => 'äúîåðä \'%s\' ìà ðéúðú ìèòéðä ìúåê äàìáåí ! ',
	'upload_success' => 'úîåðúê ðèòðä áäöìçä<br /><br />äéà úäéä æîéðä áàìáåí ìàçø àéùåø äîðäì.',
	'info' => 'îéãò',
	'com_added' => 'äòøä ðåñôä',
	'alb_updated' => 'äàìáåí òåãëï',
	'err_comment_empty' => 'äòøúê øé÷ä îúåëï !',
	'err_invalid_fext' => 'àê åø÷ ÷áöéí áòìé äñéåîåú äáàåú ðéúðéí ìèòéðä ìàìáåîéí : <br /><br />%s.',
	'no_flood' => 'îöèòøéí àê ëáø äëðñú äòøä ìúîåðä æå<br /><br />òøåê àú ääòøä áîéãä åúøöä ìùðåúä',
	'redirect_msg' => 'äðê îåòáø äìàä<br /><br /><br />ìçõ \'äîùê\' áîéãä åäãó ìà îúøòðï àåèåîèéú',
	'upl_success' => 'úîåðúê ðåñôä áäöìçä',
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
	'caption' => 'ëåúøú',
	'fs_pic' => 'úîåðä áâåãì îìà',
	'del_success' => 'ðîç÷ áäöìçä',
	'ns_pic' => 'úîåðä áâåãì øâéì',
	'err_del' => 'ìà ðéúï ìîçé÷ä',
	'thumb_pic' => 'úîåðä îå÷èðú',
	'comment' => 'äòøä',
	'im_in_alb' => 'úîåðä áúåê äàìáåí',
	'alb_del_success' => 'äàìäåí \'%s\' ðîç÷',
	'alb_mgr' => 'ðéäåì àìáåí',
	'err_invalid_data' => 'îéãò ùâåé ðú÷áì á- \'%s\'',
	'create_alb' => 'éöéøú àìáåí \'%s\'',
	'update_alb' => 'òãëåï àìáåí \'%s\' òí ëåúøú \'%s\' åàéðã÷ñ \'%s\'',
	'del_pic' => 'îçé÷ú úîåðä',
	'del_alb' => 'îçé÷ú àìáåí',
	'del_user' => 'îçé÷ú îùúîù',
	'err_unknown_user' => 'äîùúîù ùáçøú àéðå ÷ééí !',
	'comment_deleted' => 'ääòøä ðîç÷ä áäöìçä',
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
	'confirm_del' => 'äàí àúä áèåç ùáøöåðê ìîçå÷ úîåðä æå ? \\ ëîå ëï ëì ääòøåú äîùåéëåú àìéä éîç÷å âí ëï.',
	'del_pic' => 'îçé÷ú úîåðä æå',
	'size' => '%s x %s ôé÷ñìéí',
	'views' => '%s ôòîéí',
	'slideshow' => 'îòáø ùé÷åôéåú',
	'stop_slideshow' => 'òöåø îòáø ùé÷åôéåú',
	'view_fs' => 'ìçõ áëãé ìöôåú áâåãì îìà',
);

$lang_picinfo = array(
	'title' =>'îéãò òì äúîåðä',
	'Filename' => 'ùí ÷åáõ',
	'Album name' => 'ùí àìáåí',
	'Rating' => 'ãéøåâ (%s äöáòåú)',
	'Keywords' => 'îéìú îôúç',
	'File Size' => 'âåãì ÷åáõ',
	'Dimensions' => 'îéãåú',
	'Displayed' => 'úöåâä',
	'Camera' => 'îöìîä',
	'Date taken' => 'úàøéê öéìåí',
	'Aperture' => 'öîöí',
	'Exposure time' => 'æîï çùéôä',
	'Focal length' => 'îéãú æåí',
	'Comment' => 'äòøä'
);

$lang_display_comments = array(
	'OK' => 'áñãø',
	'edit_title' => 'òøåê äòøä æå',
	'confirm_delete' => 'äàí äðê áèåç ùáøöåðê ìîçå÷ äòøä æå ?',
	'add_your_comment' => 'äåñó äòøåúéê',
	'your_name' => 'äùí ùìê',
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
	'title' => 'ùìç ëøèéñ àì÷èøåðé',
	'invalid_email' => '<b>àæäøä</b> : ëúåáú ãåàø ùâåéä !',
	'ecard_title' => 'ëøèéñ àì÷èøåðé îàú %s òáåøê',
	'view_ecard' => 'áîéãä åäëøèéñ äàì÷èøåðé àéðå îåöâ ëøàåé , ìçõ òì ÷éùåø æä',
	'view_more_pics' => 'ìçõ òì ÷éùåø æä áëãé ìöôåú áúîåðåú ðåñôåú !',
	'send_success' => 'ëøèéñê äàì÷èøåðé ðùìç',
	'send_failed' => 'îöèòøéí àê äùøú àéðå îñåâì ìùìåç ëøèéñéí àì÷èøåðééí...',
	'from' => 'îàú',
	'your_name' => 'äùí ùìê',
	'your_email' => 'ëúåáú äàéîééì ùìê',
	'to' => 'òáåø',
	'rcpt_name' => 'ùí î÷áì',
	'rcpt_email' => 'ëúåáú àéîééì ùì äî÷áì',
	'greetings' => 'áøëåú',
	'message' => 'äåãòä',
);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
	'pic_info' => 'úîåðä&nbsp;îéãò',
	'album' => 'àìáåí',
	'title' => 'ëåúøú',
	'desc' => 'úéàåø',
	'keywords' => 'îéìú îôúç',
	'pic_info_str' => '%sx%s - %sKB - %s öôéåú - %s äöáòåú',
	'approve' => 'àùø úîåðä',
	'postpone_app' => 'òëá àéùåø',
	'del_pic' => 'îç÷ úîåðä',
	'reset_view_count' => 'àôñ îåðä öôéåú',
	'reset_votes' => 'àôñ äöáòåú',
	'del_comm' => 'îç÷ äòøåú',
	'upl_approval' => 'àùø èòéðä',
	'edit_pics' => 'òøåê úîåðä',
	'see_next' => 'öôä áúîåðä äáàä',
	'see_prev' => 'öôä áúîåðä ä÷åãîú',
	'n_pic' => '%s úîåðåú',
	'n_of_pic_to_disp' => 'îñôø äúîåðåú ìäöâä',
	'apply' => 'ùîåø ùéðåééí'
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
	'group_name' => 'ùí ÷áïöä',
	'disk_quota' => 'ðôç ãéñ÷',
	'can_rate' => 'éëåì ìãøë úîåðåú',
	'can_send_ecards' => 'éëåì ìùìåç ëøèéñ àì÷èøåðé',
	'can_post_com' => 'éëåì ìäëðéñ äòøåú',
	'can_upload' => 'éëåì ìèòåï úîåððåú',
	'can_have_gallery' => 'éëåì ìäéåú áòì âìøéä ôøèéú',
	'apply' => 'ùîåø ùéðåééí',
	'create_new_group' => 'öåø ÷áåöä çãùä',
	'del_groups' => 'îç÷ ÷áåöåú ðáçøåú',
	'confirm_del' => 'àæäøä, ëàùø àúä îåç÷ ÷áåöä, îùúîùéí äùéëéí ì÷áåöä æå éåòáøå ì÷áåöú \'äøùåîéí\'\å\äàí áøöåðê ìäîùéê ?',
	'title' => 'òøåê ÷áåöåú îùúîùéí',
	'approval_1' => 'ëììé. èòï. îàåùø (1)',
	'approval_2' => 'ôøèé. èòï. îàåùø (2)',
	'note1' => '<b>(1)</b> èòéðä ìàìáåí ëììé ãåøùú àéùåø îðäì.',
	'note2' => '<b>(2)</b> èòéðä ìàìáåí ùì îùúîù ãåøùú àú àéùåø äîðäì.',
	'notes' => 'äòøåú'
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
	'welcome' => 'áøåê äáà !'
);

$lang_album_admin_menu = array(
	'confirm_delete' => 'äàí äðê áèåç ùàúä øåöä ìîçå÷ àìáåí æä ? \\ëì äúîåðåú åääòøåú éîç÷å âí ëï.',
	'delete' => 'îçé÷ä',
	'modify' => 'äâãøåú',
	'edit_pics' => 'òøåê úîåðåú',
);

$lang_list_categories = array(
	'home' => 'òîåã øàùé',
	'stat1' => '<b>[úîåðåú]</b> úîåðåú á- <b>[àìáåîéí]</b> àìáåîéí å <b>[÷èâåøéä]</b> ÷èâåøéåú òí <b>[äòøåú]</b> äòøåú ðöôå <b>[ðöôå]</b> ôòîéí',
	'stat2' => '<b>[úîåðåú]</b> úîåðåú á- <b>[àìáåîéí]</b> àìáåîéí ðöôå <b>[ðöôå]</b> ôòîéí',
	'xx_s_gallery' => '%s\ âìøéåú',
	'stat3' => '<b>[úîåðåú]</b> úîåðåú á- <b>[àìáåîéí]</b> àìáåîéí òí <b>[äòøåú]</b> äòøåú ðöôå <b>[ðöôå]</b> ôòîéí'
);

$lang_list_users = array(
	'user_list' => 'øùéîú îùúîùéí',
	'no_user_gal' => 'àéï âìøéåú îùúîùéí',
	'n_albums' => '%s àìáåîéí',
	'n_pics' => '%s úîåðåú'
);

$lang_list_albums = array(
	'n_pictures' => '%s úîåðåú',
	'last_added' => ', ðåñôä ìàçøåðä %s'
);

}

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
	'login' => 'äúçáø',
	'enter_login_pswd' => 'äëðñ àú ùîê åñéñîúê áëãé ìäúçáø',
	'username' => 'ùí îùúîù',
	'password' => 'ñéñîà',
	'remember_me' => 'æëåø àú äñéñîà',
	'welcome' => 'áøåê äáà %s ...',
	'err_login' => '*** àéï àôùøåú ìäúçáø. ðñä ùðéú ***',
	'err_already_logged_in' => 'àúä ëáø îçåáø !',
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
	'logout' => 'äúðú÷',
	'bye' => 'ìäúøàåú %s ...',
	'err_not_loged_in' => 'äðê îðåú÷ ëøâò',
);

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
	'upd_alb_n' => 'òãëï àìáåí %s',
	'general_settings' => 'äâãøåú ëìéåú',
	'alb_title' => 'ëåúøú àìáåí',
	'alb_cat' => '÷èâåøéåú àìáåí',
	'alb_desc' => 'úéàåø äàìáåí',
	'alb_thumb' => 'úîåðåú îå÷èðåú áàìáåí',
	'alb_perm' => 'äøùàåú òáåø àìáåí æä',
	'can_view' => 'éëåìéí ìöôåú áàìáåí',
	'can_upload' => 'àåøçéí éëåìéí ìäòìåú úîåðåú',
	'can_post_comments' => 'àåøçéí éëåìéí ìëúåá äòøåú',
	'can_rate' => 'àåøçéí éëåìéí ìãøâ úîåðåú',
	'user_gal' => 'âìøéú îùúîù',
	'no_cat' => '* àéï ÷èâåøéåú *',
	'alb_empty' => 'äàìáåí øé÷',
	'last_uploaded' => 'äåòìä ìàçøåðä',
	'public_alb' => 'ëåìí (àìáåí ëììé)',
	'me_only' => 'ø÷ àðé',
	'owner_only' => 'áòì äàìáåí (%s) áìáã',
	'groupp_only' => 'çáøéí á- \'%s\' ÷áåöä',
	'err_no_alb_to_modify' => 'àéï àìáåí ùäðê éëåì ìùðåú ááñéñ äðúåðéí.',
	'update' => 'òãëï àìáåí'
);

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
	'already_rated' => 'îöèòøéí àê ëáø ãéøâúä úîåðä æå',
	'rate_ok' => 'äöáòúê ðú÷áìä',
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
By clicking 'àðé îñëéí' below you agree to be bound by these conditions.
EOT;

$lang_register_php = array(
	'page_title' => 'øéùåí îùúîùéí',
	'term_cond' => 'úðàéí åäúðéåú',
	'i_agree' => 'àðé îñëéí',
	'submit' => 'àùø øéùåí',
	'err_user_exists' => 'äùí ùäëðñú ëáø ÷ééí , àðä ðñä ùí àçø.',
	'err_password_mismatch' => 'ùúé äñéñîàåú ùä÷ìãú àéðï úåàîåú, àðà ä÷ìã àåúï ùåá.',
	'err_uname_short' => 'ùí îùúîù çééá ìäéåú áòì 2 úååéí ìôçåú.',
	'err_password_short' => 'ñéñîà çééáú ìäéåú áòìú 2 úååéí ìôçåú.',
	'err_uname_pass_diff' => 'ùí äîùúîù åäñéñîà çééáéí ìäéåú ùåðéí.',
	'err_invalid_email' => 'ëúåáú äàéîééì ùâåéä',
	'err_duplicate_email' => 'îùúîù àçø äùúîù ëáø áëúåáú äàéîééì ùäëðñú.',
	'enter_info' => 'äëðñ îéãò øéùåí',
	'required_info' => 'îéãò ðçåõ',
	'optional_info' => 'îéãò àåôöéåðìé',
	'username' => 'ùí îùúîù',
	'password' => 'ñéñîà',
	'password_again' => 'ä÷ìã ñéñîà ùåá',
	'email' => 'àéîééì',
	'location' => 'îé÷åí',
	'interests' => 'úçáéáéí',
	'website' => 'ãó äáéú ùìê',
	'occupation' => 'î÷öåò',
	'error' => 'ùâéàä',
	'confirm_email_subject' => '%s - àéùåø øéùåí äîéãò',
	'information' => 'îéãò',
	'failed_sending_email' => 'àéùåø ìâáé äøéùåí àéðå éëåì ìäéùìç áàéîééì !',
	'thank_you' => 'úåãä ùðøùîú<br /><br />àéîééì åáå îéãò òì àéê ìäôòéì àú äçùáåï ðùìç ìëúåáú äàéîééì ùøùîú.',
	'acct_created' => 'çùáåðê ðåöø åëòú úåëì ìäúçáø áàîöòåú ùí äîùúîù åäñéñîà ùìê.',
	'acct_active' => 'çùáåðê ôòéì ëòú , úåëì ìäúçáø áàîöòåú ùí äîùúîù åäñéñîà.',
	'acct_already_act' => 'çùáåðê ëáø ôòéì !',
	'acct_act_failed' => 'ìà ðéúï ìäôòéì çùáåï æä !',
	'err_unk_user' => 'äîùúîù äðáçø ìà ÷ééí áîòøëú !',
	'x_s_profile' => '%s\'s ôøåôéìéí',
	'group' => '÷áåöä',
	'reg_date' => 'äöèøó',
	'disk_usage' => 'ãéñ÷ áùéîåù',
	'change_pass' => 'ùðä ñéñîà',
	'current_pass' => 'ñéñîà ðåëçéú',
	'new_pass' => 'ñéñîà çãùä',
	'new_pass_again' => 'ä÷ìã ñéñîà çãùä ùåá',
	'err_curr_pass' => 'ñéñîà ðåëçéú àéðä ðëåðä',
	'apply_modif' => 'ùîåø ùéðåééí',
	'change_pass' => 'ùðä àú äñéñîà ùìé',
	'update_success' => 'äôøåôéì ùìê òåãëï',
	'pass_chg_success' => 'ñéñîúê ùåðúä',
	'pass_chg_error' => 'ñéñîúê ìà ùåðúä',
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
	'title' => 'ñ÷åø äòøåú',
	'no_comment' => 'àéï äòøåú ìñ÷éøä',
	'n_comm_del' => '%s äòøåú ðîç÷å',
	'n_comm_disp' => 'îñôø ääòøåú ìúöåâä',
	'see_prev' => 'øàä ÷åãîú',
	'see_next' => 'øàä äáàä',
	'del_comm' => 'îç÷ äòøåú ðáçøåú',
);


// ------------------------------------------------------------------------- //
// File search.php - OK
// ------------------------------------------------------------------------- //

if (defined('SEARCH_PHP')) $lang_search_php = array(
	0 => 'çôù á÷åì÷öéú äúîåðåú',
);

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
	'page_title' => 'çôù úîåðä çãùä',
	'select_dir' => 'áçø ñôøéä',
	'select_dir_msg' => 'ôåð÷öéä æå îàôùøú ìê ìèòåï îñôø úîåðåú ìàìáåí îàìå ìäòìúä ìùøú ä- FTP<br /><br />áçø àú äñôøéä áä ðîöàåú äúîåðåú.',
	'no_pic_to_add' => 'ìà ðîöàå úîåðåú ìäåñôä',
	'need_one_album' => 'àúä öøéê àìáåí àçã ìôçåú áëãé ìäùúîù áôåð÷öéä æå',
	'warning' => 'àæäøä',
	'change_perm' => 'àéï áàôùøåú äñ÷øéôè ìëúåá ìñôøéä æå, òìéê ìùðåú àú âéùú ääøùàä ì- 755 àå 777 ìôðé ùàúä îðñä ìäåñéó àú äúîåðåú !',
	'target_album' => '<b>äëðñ úîåðåú ùì &quot;</b>%s<b>&quot; áúåê </b>%s',
	'folder' => 'úé÷éä',
	'image' => 'úîåðä',
	'album' => 'àìáåí',
	'result' => 'úåöàä',
	'dir_ro' => 'ìà ðéúï ìëúéáä. ',
	'dir_cant_read' => 'ìà ðéúï ì÷øéàä. ',
	'insert' => 'äåñôú úîåðåú çãùåú ìâìøéä',
	'list_new_pic' => 'øùéîä ùì äúîåðåú äçãùåú',
	'insert_selected' => 'äëðñ úîåðåú ðáçøåú',
	'no_pic_found' => 'ìà ðîöàå úîåðåú çãùåú',
	'be_patient' => 'àðà äîúï áñáìðåú , ìñ÷øéôè ðçåõ îòè æîï áëãé ìäåñéó àú äúîåðåú.',
	'notes' =>  '<ul>'.
				'<li><b>ú÷éï</b> : äëååðä äéà ùäúîåðåú ðåñôå áäöìçä'.
				'<li><b>ëôéìåú</b> : äëååðä äéà ùúîåðåú àìå ëáø ÷ééîåú ááñéñ äðúåðéí'.
				'<li><b>ìà ú÷éï</b> : äëååðä äéà ùìà ðéúï ìäòìåú úîåðåú, àðà áãå÷ àú ääâãøåú ùìê åàú îéãú ääøùàåú ìúé÷ééä àìéä àúä îðñä ìèòåï àú äúîåðåú'.
				'<li>àí åëàùø ìà îåôéòåú äîéìéí ú÷éï,ëôéìåú,ìà ú÷éï ìçõ òì äúîåðä äùâåéä áëãé ìøàåú àéæä ùâéàä äôé÷ä ùôú ä- PHP'.
				'<li>àí åëàùø äãôãôï ìà îòìä ëìåí , ìçöå òì ìçöï äèòéðä îçãù.'.
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
	'title' => 'èòï úîåðä',
	'max_fsize' => 'âåãì ÷åáõ î÷ñéîìé îåúø äåà %s ÷"á',
	'album' => 'àìáåí',
	'picture' => 'úîåðä',
	'pic_title' => 'ëåúøú úîåðä',
	'description' => 'úéàåø úîåðä',
	'keywords' => 'îéìú îôúç (îåôøã áøååçéí)',
	'err_no_alb_uploadables' => 'îöèòøéí àê àéï àìáåí áå äðê îåøùä ìäòìåú úîåðåú !',
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
	'title' => 'òøåê îùúîùéí',
	'name_a' => 'ùîåú áñãø òåìä',
	'name_d' => 'ùîåú áñãø éåøã',
	'group_a' => '÷áåöåú áñãø òåìä',
	'group_d' => '÷áåöåú áñãø éåøã',
	'reg_a' => 'úàøéê øéùåí áñãø òåìä',
	'reg_d' => 'úàøéê øéùåí áñãø éåøã',
	'pic_a' => 'ñôéøú úîåðåú áñãø òåìä',
	'pic_d' => 'ñôéøú úîåðåú áñãø éåøã',
	'disku_a' => 'ãéñ÷ áùéîåù áñãø òåìä',
	'disku_d' => 'ãéñ÷ áùéîåù áñãø éåøã',
	'sort_by' => 'ñãø îùúîùéí ìôé',
	'err_no_users' => 'èáìú îùúîùéí øé÷ä !',
	'err_edit_self' => 'àéðê éëåì ìòøåê éùéøåú àú äôøåôéì ùìê, äùúîù áìéð÷\'äôøåôéì ùìé\' òáåø ôòåìä æå',
	'edit' => 'òøåê',
	'delete' => 'îç÷',
	'name' => 'ùí îùúîù',
	'group' => '÷áåöä',
	'inactive' => 'ìà ôòéì',
	'operations' => 'ôòåìåú',
	'pictures' => 'úîåðåú',
	'disk_space' => 'î÷åí áùéîåù / îëñä',
	'registered_on' => 'øùåí á...',
	'u_user_on_p_pages' => '%d îùúîùéí á %d ãôéí',
	'confirm_del' => 'äàí àúä áèåç ùáøöåðê ìîçå÷ îùúîù æä ? \\ëîå ëï ëì äúîåðåú åääòøåú ùì îùúîù æä éîç÷å âí ëï',
	'mail' => 'ãåàø',
	'err_unknown_user' => 'äîùúîù ùáçøú àéðå ÷ééí !',
	'modify_user' => 'òøåê îùúîù',
	'notes' => 'äòøåú',
	'note_list' => '<li>àí àéðê îòåðéï ìùðåú àú ñéñîúê ,äùàø àú çìåï äñéñîà øé÷.',
	'password' => 'ñéñîà',
	'user_active' => 'äîùúîù ôòéì',
	'user_group' => '÷áåöú äîùîù',
	'user_email' => 'ëúåáú àéîééì ùì äîùúîù',
	'user_web_site' => 'àúø ôøèé ùì äîùúîù',
	'create_new_user' => 'öåø îùúîù çãù',
	'user_location' => 'îé÷åí äîùúîù',
	'user_interests' => 'úçáéáé äîùúîù',
	'user_occupation' => 'î÷öåò äîùúîù',
);
?>