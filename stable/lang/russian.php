<?php
// ------------------------------------------------------------------------- //
//  Coppermine Photo Gallery v1.2.0                                          //
// ------------------------------------------------------------------------- //
//  Copyright (C) 2002  Grйgory DEMAR <gdemar@wanadoo.fr>                    //
//  http://www.chezgreg.net/coppermine/                                      //
// ------------------------------------------------------------------------- //
//  Based on PHPhotoalbum by Henning Stшverud <henning@stoverud.com>         //
//  http://www.stoverud.com/PHPhotoalbum/                                    //
// ------------------------------------------------------------------------- //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
// ------------------------------------------------------------------------- //

// info about translators and translated language 
$lang_translation_info = array( 
'lang_name_english' => 'Russian',  //the name of your language in English, e.g. 'Greek' or 'Spanish' 
'lang_name_native' => 'Русский', //the name of your language in your mother tongue (for non-latin alphabets, use unicode) 
'lang_country_code' => 'ru', //the two-letter code for the country your language is most-often spoken (refer to http://www.iana.org/cctld/cctld-whois.htm), e.g. 'gr' or 'es' 
'trans_name'=> 'Ejik', //the name of the translator - can be a nickname 
'trans_email' => 'ejik@rbcmail.ru', //translator's email address (optional) 
'trans_website' => 'http://counterstrike.ru', //translator's website (optional) 
'trans_date' => '2003-11-03', //the date the translation was created / last modified 
); 

$lang_charset = 'windows-1251';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('Байт', 'KB', 'MB');

// Day of weeks and months
$lang_day_of_week = array('Вск', 'Пон', 'Втор', 'Среда', 'Чет', 'Пят', 'Суб');
$lang_month = array('Янв', 'Февр', 'Март', 'Апр', 'Май', 'Июнь', 'Июль', 'Авг', 'Сент', 'Окт', 'Ноябрь', 'Дек');

// Some common strings
$lang_yes = 'Да';
$lang_no  = 'Нет';
$lang_back = 'Назад';
$lang_continue = 'Вперед';
$lang_info = 'Информация';
$lang_error = 'Ошибка';

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$album_date_fmt =    '%B %d, %Y';
$lastcom_date_fmt =  '%m/%d/%y at %H:%M';
$lastup_date_fmt = '%B %d, %Y';
$register_date_fmt = '%B %d, %Y';
$lasthit_date_fmt = '%B %d, %Y at %I:%M %p';
$comment_date_fmt =  '%B %d, %Y at %I:%M %p';

// For the word censor
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*');

$lang_meta_album_names = array( 
        'random' => 'Случайные фото', 
        'lastup' => 'Последний добавления', 
        'lastalb'=> 'Последнее обновление альбома', 
        'lastcom' => 'Последние комментарии', 
        'topn' => 'Часто просматриваемые', 
        'toprated' => 'Лучшие по рейтингу', 
        'lasthits' => 'Последние просмотренные', 
        'search' => 'Результаты поиска', 
        'favpics'=> 'Избранные',
);

$lang_errors = array(
	'access_denied' => 'У Вас нет доступа сюда.',
	'perm_denied' => 'Нет доступа для выполнения команды.',
	'param_missing' => 'Скрипт был вызван без необходимых параметров.',
	'non_exist_ap' => 'Выбранный альбом/фотка не существует !',
	'quota_exceeded' => 'ВАше место закончилось<br /><br />You have a space quota of [quota]K, your pictures currently use [space]K, adding this picture would make you exceed your quota.',
	'gd_file_type_err' => 'When using the GD image library allowed image types are only JPEG and PNG.',
	'invalid_image' => 'The image you have uploaded is corrupted or can\'t be handled by the GD library',
	'resize_failed' => 'Unable to create thumbnail or reduced size image.',
	'no_img_to_display' => 'Картинок нету :(',
	'non_exist_cat' => 'The selected category does not exist',
	'orphan_cat' => 'A category has a non-existing parent, runs the category manager to correct the problem.',
	'directory_ro' => 'Directory \'%s\' is not writable, pictures can\'t be deleted',
	'non_exist_comment' => 'The selected comment does not exist.',
	'pic_in_invalid_album' => 'Фото находится в несуществующем альбоме (%s)!?', 
        'banned' => 'Вы забанены на этом сайте.', 
        'not_with_udb' => 'Эта функция выключена в Coppermine, потомучто объединена с форумом. Или то, что вы пытаетесь сделать, не поддерживается в этой конфигурации, или эта функция должны быть обработана форумом.', 
);

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
	'alb_list_title' => 'К списку альбомов',
	'alb_list_lnk' => 'Список альбомов',
	'my_gal_title' => 'Go to my personal gallery',
	'my_gal_lnk' => 'My gallery',
	'my_prof_lnk' => 'Мои настройки',
	'adm_mode_title' => 'Врубить режим админа',
	'adm_mode_lnk' => 'Режим админа',
	'usr_mode_title' => 'Врубить режим юзера',
	'usr_mode_lnk' => 'Режим юзверя',
	'upload_pic_title' => 'Upload a picture into an album',
	'upload_pic_lnk' => 'Закачать картинку',
	'register_title' => 'Создать акунт',
	'register_lnk' => 'Регистрироваться',
	'login_lnk' => 'Войти',
	'logout_lnk' => 'Выйти',
	'lastup_lnk' => 'Последние закачки',
	'lastcom_lnk' => 'Последние комментарии',
	'topn_lnk' => 'Самые популярные',
	'toprated_lnk' => 'Лучшие по рейтингу',
	'search_lnk' => 'Поиск',
        'fav_lnk' => 'Избранные', 
);

$lang_gallery_admin_menu = array(
	'upl_app_lnk' => 'Upload approval',
	'config_lnk' => 'Config',
	'albums_lnk' => 'Albums',
	'categories_lnk' => 'Categories',
	'users_lnk' => 'Users',
	'groups_lnk' => 'Groups',
	'comments_lnk' => 'Comments',
	'searchnew_lnk' => 'Batch add pictures',
        'util_lnk' => 'Изменить размер', //new in cpg1.2.0
        'ban_lnk' => 'Бан пользователей',//new in cpg1.2.0
);

$lang_user_admin_menu = array(
	'albmgr_lnk' => 'Create / order albums',
	'modifyalb_lnk' => 'Modify my albums',
	'my_prof_lnk' => 'My profile',
);

$lang_cat_list = array(
	'category' => 'Категория',
	'albums' => 'Альбомы',
	'pictures' => 'Фотки',
);

$lang_album_list = array(
	'album_on_page' => '%d альбомов на %d страницах'
);

$lang_thumb_view = array(
	'date' => 'Дата',
        //Sort by filename and title
        'name' => 'Имя фаила', //new in cpg1.2.0
        'title' => 'Названиее',//new in cpg1.2.0
	'sort_da' => 'Sort by date ascending',
	'sort_dd' => 'Sort by date descending',
	'sort_na' => 'Sort by name ascending',
	'sort_nd' => 'Sort by name descending',
        'sort_ta' => 'Сорт. по названию [возврастание]', 
        'sort_td' => 'Сорт. по названию [убывание]',  //new in cpg1.2.0
	'pic_on_page' => '%d pictures on %d page(s)',
	'user_on_page' => '%d users on %d page(s)'
);

$lang_img_nav_bar = array(
	'thumb_title' => 'Return to the thumbnail page',
	'pic_info_title' => 'Display/hide picture information',
	'slideshow_title' => 'Slideshow',
	'ecard_title' => 'Send this picture as an e-card',
	'ecard_disabled' => 'e-cards are disabled',
	'ecard_disabled_msg' => 'You don\'t have permission to send ecards',
	'prev_title' => 'See previous picture',
	'next_title' => 'See next picture',
	'pic_pos' => 'Фото %s/%s',
);

$lang_rate_pic = array(
	'rate_this_pic' => 'Оценит фотку (жми звездочки) ',
	'no_votes' => '(Еще нет голосов :((()',
	'rating' => '(current rating : %s / 5 with %s votes)',
	'rubbish' => 'Мусор',
	'poor' => 'Плохо',
	'fair' => 'Средне',
	'good' => 'Хорошо',
	'excellent' => 'Отлично',
	'great' => 'Великолепно!',
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
	'filename' => 'Filename : ',
	'filesize' => 'Filesize : ',
	'dimensions' => 'Dimensions : ',
	'date_added' => 'Date added : '
);

$lang_get_pic_data = array(
	'n_comments' => '%s comments',
	'n_views' => '%s views',
	'n_votes' => '(%s votes)'
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
	'alb_need_name' => 'Albums need to have a name !',
	'confirm_modifs' => 'Are you sure you want to make these modifications ?',
	'no_change' => 'You did not make any change !',
	'new_album' => 'New album',
	'confirm_delete1' => 'Are you sure you want to delete this album ?',
	'confirm_delete2' => '\nAll pictures and comments it contains will be lost !',
	'select_first' => 'Select an album first',
	'alb_mrg' => 'Album Manager',
	'my_gallery' => '* My gallery *',
	'no_category' => '* No category *',
	'delete' => 'Delete',
	'new' => 'New',
	'apply_modifs' => 'Apply modifications'
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
	'miss_param' => 'Parameters required for \'%s\'operation not supplied !',
	'unknown_cat' => 'Selected category does not exist in database',
	'usergal_cat_ro' => 'User galleries category can\'t be deleted !',
	'manage_cat' => 'Manage categories',
	'confirm_delete' => 'Are you sure you want to DELETE this category',
	'category' => 'Category',
	'operations' => 'Operations',
	'move_into' => 'Move into',
	'update_create' => 'Update/Create category',
	'parent_cat' => 'Parent category',
	'cat_title' => 'Category title',
	'cat_desc' => 'Category description'
);

// ------------------------------------------------------------------------- //
// File config.php
// ------------------------------------------------------------------------- //

if (defined('CONFIG_PHP')) $lang_config_php = array(
	'title' => 'Configuration',
	'restore_cfg' => 'Restore factory defaults',
	'save_cfg' => 'Save new configuration',
	'notes' => 'Notes',
	'info' => 'Information',
	'upd_success' => 'Coppermine configuration was updated',
	'restore_success' => 'Coppermine default configuration restored',
	'name_a' => 'Name ascending',
	'name_d' => 'Name descending',
        'title_a' => 'Название по возврастанию', 
        'title_d' => 'Название по уыванию',
	'date_a' => 'Date ascending',
	'date_d' => 'Date descending',
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
        array('Показать сначала первый уровень эксиза в категориях','first_level',1),  //new in cpg1.2.0

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
        array('Показывать ленту картинок', 'display_film_strip', 1), 
        array('Количество картинок в ленте', 'max_film_strip_items', 0), 

	'Pictures and thumbnails settings',
	array('Quality for JPEG files', 'jpeg_qual', 0),
        array('Максимальный размер эксиза <b>*</b>', 'thumb_width', 0), 
        array('Использовать размер ( длинна или высота или максимальная сторона эксиза )<b>*</b>', 'thumb_use', 7),  //new in cpg1.2.0
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
        array('Показать собственный альбом незарегистрированному пользователю','show_private',1),  //new in cpg1.2.0
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
	'empty_name_or_com' => 'You need to type your name and a comment',
	'com_added' => 'Your comment was added',
	'alb_need_title' => 'You have to provide a title for the album !',
	'no_udp_needed' => 'No update needed.',
	'alb_updated' => 'The album was updated',
	'unknown_album' => 'Selected album does not exist or you don\'t have permission to upload in this album',
	'no_pic_uploaded' => 'No picture was uploaded !<br /><br />If you have really selected a picture to upload, check that the server allows file uploads...',
	'err_mkdir' => 'Failed to create directory %s !',
	'dest_dir_ro' => 'Destination directory %s is not writable by the script !',
	'err_move' => 'Impossible to move %s to %s !',
	'err_fsize_too_large' => 'The size of picture you have uploaded is too large (maximum allowed is %s x %s) !',
	'err_imgsize_too_large' => 'The size of the file you have uploaded is too large (maximum allowed is %s KB) !',
	'err_invalid_img' => 'The file you have uploaded is not a valid image !',
	'allowed_img_types' => 'You can only upload %s images.',
	'err_insert_pic' => 'The picture \'%s\' can\'t be inserted in the album ',
	'upload_success' => 'Your picture was uploaded successfully<br /><br />It will be visible after admin approval.',
	'info' => 'Information',
	'com_added' => 'Comment added',
	'alb_updated' => 'Album updated',
	'err_comment_empty' => 'Your comment is empty !',
	'err_invalid_fext' => 'Only files with the following extensions are accepted : <br /><br />%s.',
	'no_flood' => 'Sorry but you are already the author of the last comment posted for this picture<br /><br />Edit the comment you have posted if you want to modify it',
	'redirect_msg' => 'You are being redirected.<br /><br /><br />Click \'CONTINUE\' if the page does not refresh automatically',
	'upl_success' => 'Your picture was successfully added',
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
	'caption' => 'Caption',
	'fs_pic' => 'full size image',
	'del_success' => 'successfully deleted',
	'ns_pic' => 'normal size image',
	'err_del' => 'can\'t be deleted',
	'thumb_pic' => 'thumbnail',
	'comment' => 'comment',
	'im_in_alb' => 'image in album',
	'alb_del_success' => 'Album \'%s\' deleted',
	'alb_mgr' => 'Album Manager',
	'err_invalid_data' => 'Invalid data received in \'%s\'',
	'create_alb' => 'Creating album \'%s\'',
	'update_alb' => 'Updating album \'%s\' with title \'%s\' and index \'%s\'',
	'del_pic' => 'Delete picture',
	'del_alb' => 'Delete album',
	'del_user' => 'Delete user',
	'err_unknown_user' => 'The selected user does not exist !',
	'comment_deleted' => 'Comment was succesfully deleted',
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
	'confirm_del' => 'Are you sure you want to DELETE this picture ? \\nComments will also be deleted.',
	'del_pic' => 'DELETE THIS PICTURE',
	'size' => '%s x %s pixels',
	'views' => '%s times',
	'slideshow' => 'Slideshow',
	'stop_slideshow' => 'STOP SLIDESHOW',
);

$lang_picinfo = array(
	'title' =>'Picture information',
	'Filename' => 'Filename',
	'Album name' => 'Album name',
	'Rating' => 'Rating (%s votes)',
	'Keywords' => 'Keywords',
	'File Size' => 'File Size',
	'Dimensions' => 'Dimensions',
	'Displayed' => 'Displayed',
	'Camera' => 'Camera',
	'Date taken' => 'Date taken',
	'Aperture' => 'Aperture',
	'Exposure time' => 'Exposure time',
	'Focal length' => 'Focal length',
        'Comment' => 'Коментарий', 
        'addFav' => 'Добавить в избранные', 
        'addFavPhrase' => 'Избранные', 
        'remFav' => 'Удалить из избранных',  //new in cpg1.2.0
);

$lang_display_comments = array(
	'OK' => 'OK',
	'edit_title' => 'Отредактировать',
	'confirm_delete' => 'Точно удалить ?',
	'add_your_comment' => 'Прокомментировать',
        'name' => 'Имя', 
        'comment' => 'Комментарий', 
        'your_name' => 'Анонимно',
);

$lang_fullsize_popup = array( 
        'click_to_close' => 'Нажмите на картинку, чтобы закрыть окно',  //new in cpg1.2.0
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
	'title' => 'Послать открытку',
	'invalid_email' => '<b>Внимание</b> : непрвильный адрес мыла !',
	'ecard_title' => 'Для Вас открытка от %s',
	'view_ecard' => 'Если открытк не отображена правильно, жмите сюда',
	'view_more_pics' => 'Click this link to view more PICTURE !',
	'send_success' => 'Your ecard was sent',
	'send_failed' => 'Sorry but the server can\'t send your e-card...',
	'from' => 'От',
	'your_name' => 'Ваше имя',
	'your_email' => 'Ваш е-мейл',
	'to' => 'Кому',
	'rcpt_name' => 'Имя получателя',
	'rcpt_email' => 'Е-мейл получателя',
	'greetings' => 'Заголовок',
	'message' => 'Сообщение',
);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
	'pic_info' => 'Picture&nbsp;info',
	'album' => 'Album',
	'title' => 'Title',
	'desc' => 'Description',
	'keywords' => 'Keywords',
	'pic_info_str' => '%sx%s - %sKB - %s views - %s votes',
	'approve' => 'Approve picture',
	'postpone_app' => 'Postpone approval',
	'del_pic' => 'Delete picture',
	'reset_view_count' => 'Reset view counter',
	'reset_votes' => 'Reset votes',
	'del_comm' => 'Delete comments',
	'upl_approval' => 'Upload approval',
	'edit_pics' => 'Edit pictures',
	'see_next' => 'See next pictures',
	'see_prev' => 'See previous pictures',
	'n_pic' => '%s pictures',
	'n_of_pic_to_disp' => 'Number of picture to display',
	'apply' => 'Apply modifications'
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
	'group_name' => 'Group name',
	'disk_quota' => 'Disk quota',
	'can_rate' => 'Can rate pictures',
	'can_send_ecards' => 'Can send ecards',
	'can_post_com' => 'Can post comments',
	'can_upload' => 'Can upload pictures',
	'can_have_gallery' => 'Can have a personal gallery',
	'apply' => 'Apply modifications',
	'create_new_group' => 'Create new group',
	'del_groups' => 'Delete selected group(s)',
	'confirm_del' => 'Warning, when you delete a group, users that belong to this group will be transfered to the \'Registered\' group !\n\nDo you want to proceed ?',
	'title' => 'Manage user groups',
	'approval_1' => 'Pub. Upl. approval (1)',
	'approval_2' => 'Priv. Upl. approval (2)',
	'note1' => '<b>(1)</b> Uploads in a public album need admin approval',
	'note2' => '<b>(2)</b> Uploads in an album that belong to the user need admin approval',
	'notes' => 'Notes'
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
	'welcome' => 'Welcome !'
);

$lang_album_admin_menu = array(
	'confirm_delete' => 'Are you sure you want to DELETE this album ? \\nAll pictures and comments will also be deleted.',
	'delete' => 'DELETE',
	'modify' => 'MODIFY',
	'edit_pics' => 'EDIT PICS',
);

$lang_list_categories = array(
	'home' => 'Home',
	'stat1' => '<b>[pictures]</b> фоток в <b>[albums]</b> альбомах и <b>[cat]</b> катерогиях с <b>[comments]</b> коментариями. Просмотрено <b>[views]</b> раз',
	'stat2' => '<b>[pictures]</b> pictures in <b>[albums]</b> albums viewed <b>[views]</b> times',
	'xx_s_gallery' => '%s\'s Gallery',
	'stat3' => '<b>[pictures]</b> pictures in <b>[albums]</b> albums with <b>[comments]</b> comments viewed <b>[views]</b> times'
);

$lang_list_users = array(
	'user_list' => 'User list',
	'no_user_gal' => 'There are no users that are allowed to have albums',
	'n_albums' => '%s album(s)',
	'n_pics' => '%s picture(s)'
);

$lang_list_albums = array(
	'n_pictures' => '%s pictures',
	'last_added' => ', last one added on %s'
);

}

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
	'login' => 'Login',
	'enter_login_pswd' => 'Введите Ваше имя пользователя и пароль',
	'username' => 'Имя пользователя',
	'password' => 'Пароль',
	'remember_me' => 'Запомнить меня',
	'welcome' => 'Добро пожаловать %s ...',
	'err_login' => '*** Неполучается. Попробуйте еще раз ***',
	'err_already_logged_in' => 'Вы уже внутри :) !',
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
	'logout' => 'Выйти',
	'bye' => 'Пока %s ...',
	'err_not_loged_in' => 'Ну вот ты ...$%^& и вышел !',
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
	'alb_thumb' => 'Album thumbnail',
	'alb_perm' => 'Permissions for this album',
	'can_view' => 'Album can be viewed by',
	'can_upload' => 'Visitors can upload pictures',
	'can_post_comments' => 'Visitors can post comments',
	'can_rate' => 'Visitors can rate pictures',
	'user_gal' => 'User Gallery',
	'no_cat' => '* No category *',
	'alb_empty' => 'Album is empty',
	'last_uploaded' => 'Last uploaded',
	'public_alb' => 'Everybody (public album)',
	'me_only' => 'Me only',
	'owner_only' => 'Album owner (%s) only',
	'groupp_only' => 'Members of the \'%s\' group',
	'err_no_alb_to_modify' => 'No album you can modify in the database.',
	'update' => 'Update album'
);

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
	'already_rated' => 'Держи жулика! Вы уже голосовали',
	'rate_ok' => 'Спасибо за голос',
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
Кароче админ сайта это Big_Boss. Так что ругайте его :)
EOT;

$lang_register_php = array(
	'page_title' => 'Регистрация пользователя',
	'term_cond' => 'Это можно не читать :)',
	'i_agree' => 'Согласен',
	'submit' => 'Понеслась регистрация',
	'err_user_exists' => 'Блин такое имя уже есть. Придется выбрать другое',
	'err_password_mismatch' => 'Пароли не совпадают. Попробуйте снова',
	'err_uname_short' => 'Имя должно быть минимум 2 буквы',
	'err_password_short' => 'Пароль минимум 2 символа',
	'err_uname_pass_diff' => 'Имя и пароль должны быть разные',
	'err_invalid_email' => 'Неправильный емайл',
	'err_duplicate_email' => 'Хммм... подозрительно этот емайл я еже видел. Не катит!',
	'enter_info' => 'Введите информацию',
	'required_info' => 'Необходимо',
	'optional_info' => 'По желанию',
	'username' => 'Имя пользователя',
	'password' => 'Пароль',
	'password_again' => 'Еще раз пароль',
	'email' => 'Емайл',
	'location' => 'Месторасположение',
	'interests' => 'Интересы',
	'website' => 'Сайт',
	'occupation' => 'Род деятельности',
	'error' => 'ОШИБКА',
	'confirm_email_subject' => '%s - Registration confirmation',
	'information' => 'Information',
	'failed_sending_email' => 'The registration confirmation email can\'t be send !',
	'thank_you' => 'Thank your for registering.<br /><br />An email with information on how to activate your account was sent to the email address your provided.',
	'acct_created' => 'Your account has been created and you can now login with your username and password',
	'acct_active' => 'Your account is now active and you can login with your username and password',
	'acct_already_act' => 'Your account is already active !',
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
	'title' => 'Review comments',
	'no_comment' => 'There is no comment to review',
	'n_comm_del' => '%s comment(s) deleted',
	'n_comm_disp' => 'Number of comments to display',
	'see_prev' => 'See previous',
	'see_next' => 'See next',
	'del_comm' => 'Delete selected comments',
);


// ------------------------------------------------------------------------- //
// File search.php - OK
// ------------------------------------------------------------------------- //

if (defined('SEARCH_PHP')) $lang_search_php = array(
	0 => 'Search the image collection',
);

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
	'page_title' => 'Search new pictures',
	'select_dir' => 'Select directory',
	'select_dir_msg' => 'This function allows you to add a batch of picture that your have uploaded on your server by FTP.<br /><br />Select the directory where you have uploaded your pictures',
	'no_pic_to_add' => 'There is no picture to add',
	'need_one_album' => 'You need at least one album to use this function',
	'warning' => 'Warning',
	'change_perm' => 'the script can\'t write in this directory, you need to change its mode to 755 or 777 before trying to add the pictures !',
	'target_album' => '<b>Put pictures of &quot;</b>%s<b>&quot; into </b>%s',
	'folder' => 'Folder',
	'image' => 'Image',
	'album' => 'Album',
	'result' => 'Result',
	'dir_ro' => 'Not writable. ',
	'dir_cant_read' => 'Not readable. ',
	'insert' => 'Adding new pictures to the gallery',
	'list_new_pic' => 'List of new pictures',
	'insert_selected' => 'Insert selected pictures',
	'no_pic_found' => 'No new picture was found',
	'be_patient' => 'Please be patient, the script needs time to add the pictures',
	'notes' =>  '<ul>'.
				'<li><b>OK</b> : means that the picture was succesfully added'.
				'<li><b>DP</b> : means that the picture is a duplicate and is already in the database'.
				'<li><b>PB</b> : means that the picture could not be added, check your configuration and the permission of directories where the pictures are located'.
				'<li>If the OK, DP, PB \'signs\' does not appear click on the broken picture to see any error message produced by PHP'.
				'<li>If your browser timeout, hit the reload button'.
				'</ul>',
);


// ------------------------------------------------------------------------- //
// File thumbnails.php
// ------------------------------------------------------------------------- //

// Void


// ------------------------------------------------------------------------- // 
// File banning.php 
// ------------------------------------------------------------------------- // 

if (defined('BANNING_PHP')) $lang_banning_php = array( 
                'title' => 'Бан пользователей', 
                'user_name' => 'Ваше имя', 
                'ip_address' => 'IP адресс', 
                'expiry' => 'Истекает (если пусто - невсегда)', 
                'edit_ban' => 'Сохранить изменения', 
                'delete_ban' => 'Удалить', 
                'add_new' => 'Добавить новый бан', 
                'add_ban' => 'Добавить', 
); 

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) $lang_upload_php = array(
	'title' => 'Upload picture',
	'max_fsize' => 'Maximum allowed file size is %s KB',
	'album' => 'Album',
	'picture' => 'Picture',
	'pic_title' => 'Picture title',
	'description' => 'Picture description',
	'keywords' => 'Keywords (separate with spaces)',
	'err_no_alb_uploadables' => 'Sorry there is no album where you are allowed to upload pictures',
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
	'title' => 'Manage users',
	'name_a' => 'Name ascending',
	'name_d' => 'Name descending',
	'group_a' => 'Group ascending',
	'group_d' => 'Group descending',
	'reg_a' => 'Reg date ascending',
	'reg_d' => 'Reg date descending',
	'pic_a' => 'Pic count ascending',
	'pic_d' => 'Pic count descending',
	'disku_a' => 'Disk usage ascending',
	'disku_d' => 'Disk usage descending',
	'sort_by' => 'Sort users by',
	'err_no_users' => 'User table is empty !',
	'err_edit_self' => 'You can\'t edit your own profile, use the \'My profile\' link for that',
	'edit' => 'EDIT',
	'delete' => 'DELETE',
	'name' => 'User name',
	'group' => 'Group',
	'inactive' => 'Inactive',
	'operations' => 'Operations',
	'pictures' => 'Pictures',
	'disk_space' => 'Space used / Quota',
	'registered_on' => 'Registered on',
	'u_user_on_p_pages' => '%d users on %d page(s)',
	'confirm_del' => 'Are you sure you want to DELETE this user ? \\nAll his pictures and albums will also be deleted.',
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
);


// ------------------------------------------------------------------------- // 
// File util.php 
// ------------------------------------------------------------------------- // 

if (defined('UTIL_PHP')) $lang_util_php = array( 
        'title' => 'Изменить размер', 
        'what_it_does' => 'Что это делает', 
        'what_update_titles' => 'Обновить название из имени фаила', 
        'what_delete_title' => 'Удалить названия', 
        'what_rebuild' => 'Перестроить эксизы и изменить размер фото', 
        'what_delete_originals' => 'Замена оригинальных фото, фотками с измененным размером', 
        'file' => 'Фаил', 
        'title_set_to' => 'установлено название в', 
        'submit_form' => 'отправить', 
        'updated_succesfully' => 'обновление прошло успешно', 
        'error_create' => 'ОШИБКА создания', 
        'continue' => 'В процессе много картинок', 
        'main_success' => 'Фаил %s успешно использовался как главная картинка', 
        'error_rename' => 'Ошибка переменования %s в %s', 
        'error_not_found' => 'Фаил %s не найден', 
        'back' => 'назад на главную', 
        'thumbs_wait' => 'Обновление эксизов и/или изменения размеров картинки, пожалуйста подождите...', 
        'thumbs_continue_wait' => 'Проболжение обновления эксиза и/или изменения размеров картинки...', 
        'titles_wait' => 'Обновление заголовков, пожалуйста подождите...', 
        'delete_wait' => 'Кдаление заголовков, пожалуйста подождите...', 
        'replace_wait' => 'Удаление оригинальных и замена измененными картинками, пожалуйста подождите..', 
        'instruction' => 'Быстрые инструкции', 
        'instruction_action' => 'Выберите действие', 
        'instruction_parameter' => 'Установить параметры', 
        'instruction_album' => 'Выбрать альбом', 
        'instruction_press' => 'Нажмите %s', 
        'update' => 'Обновление эксизов и/или размеров фото', 
        'update_what' => 'Что должно быть обновлено', 
        'update_thumb' => 'Только эксизы', 
        'update_pic' => 'Только изменение размеров', 
        'update_both' => 'Эксизы и изменения размеров', 
        'update_number' => 'Число обработанных изображений', 
        'update_option' => '(Попробуйте настроить опцию ниже, если у вас проблемы с timeout)', 
        'filename_title' => 'Имя фаила ? Название картинки', 
        'filename_how' => 'Как должно быть изменено имя фаила', 
        'filename_remove' => 'Удалить в конце .jpg и заменить _ (подчеркивание) с пробелами', 
        'filename_euro' => 'Изменить 2003_11_23_13_20_20.jpg на 23/11/2003 13:20', 
        'filename_us' => 'Изменить 2003_11_23_13_20_20.jpg на 11/23/2003 13:20', 
        'filename_time' => 'Изменить 2003_11_23_13_20_20.jpg на 13:20', 
        'delete' => 'Удалить название картинки и оригинальный размер фото', 
        'delete_title' => 'Удалить название картинки', 
        'delete_original' => 'Удалить оригинальный размер картинки', 
        'delete_replace' => 'Замена оригинальных фото, фотками с измененным размером', 
        'select_album' => 'Выбрать альбом', 
);

?>