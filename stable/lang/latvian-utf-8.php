<?php
// ------------------------------------------------------------------------- //
//  Coppermine Photo Gallery                                                 //
// ------------------------------------------------------------------------- //
//  Copyright (C) 2002,2003  Gr&eacute;gory DEMAR <gdemar@wanadoo.fr>               //
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

// info about translators and translated language 
$lang_translation_info = array( 
'lang_name_english' => 'Latvian',  //the name of your language in English, e.g. 'Greek' or 'Spanish' 
'lang_name_native' => '', //the name of your language in your mother tongue (for non-latin alphabets, use unicode), e.g. '&#917;&#955;&#955;&#951;&#957;&#953;&#954;&#940;' or 'Espa&ntilde;ol' 
'lang_country_code' => '', //the two-letter code for the country your language is most-often spoken (refer to http://www.iana.org/cctld/cctld-whois.htm), e.g. 'gr' or 'es' 
'trans_name'=> 'Kaspars Priedols', //the name of the translator - can be a nickname 
'trans_email' => 'house@tvertne.nu', //translator's email address (optional) 
'trans_website' => 'http://foto.tvertne.nu', //translator's website (optional) 
'trans_date' => '2003-10-07', //the date the translation was created / last modified 
); 

$lang_charset = 'windows-1257';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('Bytes', 'KB', 'MB');

// Day of weeks and months
$lang_day_of_week = array('Sv', 'Pr', 'Ot', 'Tr', 'Ct', 'Pt', 'Ss');
$lang_month = array('Jan', 'Feb', 'Mar', 'Apr', 'Mai', 'J&ucirc;n', 'J&ucirc;l', 'Aug', 'Sep', 'Okt', 'Nov', 'Dec');

// Some common strings
$lang_yes = 'J&acirc;';
$lang_no  = 'Nç';
$lang_back = 'ATGRIEZTIES';
$lang_continue = 'TURPIN&Acirc;T';
$lang_info = 'Inform&acirc;cija';
$lang_error = 'Kï&ucirc;da';

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
//$album_date_fmt =    '%B %d, %Y';
//$lastcom_date_fmt =  '%m/%d/%y %H:%M';
//$lastup_date_fmt = '%B %d, %Y';
//$register_date_fmt = '%B %d, %Y';
//$lasthit_date_fmt = '%B %d, %Y at %I:%M %p';
//$comment_date_fmt =  '%B %d, %Y at %I:%M %p';

$album_date_fmt = '%d/%m/%Y %H:%M';
$lastcom_date_fmt = '%d/%m/%Y %H:%M';
$lastup_date_fmt = '%d/%m/%Y %H:%M';
$register_date_fmt = '%d/%m/%Y %H:%M';
$lasthit_date_fmt = '%d/%m/%Y %H:%M';
$comment_date_fmt = '%d/%m/%Y %H:%M';


// For the word censor
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*', 'pimp', 'peþ', 'pipel', 'bïa&igrave;', 'nahu', 'pist', 'pisien', 'mirl', 's&ucirc;d', 'bled', 'blad', 'pizde', 'mauka', 'mauc&icirc;', '&acirc;nus', 'kaka', 's&ucirc;k&acirc;');

$lang_meta_album_names = array(
	'random' => 'Izlases veida attçli',
	'lastup' => 'Jaun&acirc;kie papildin&acirc;jumi',
	'lastcom' => 'Jaun&acirc;kie koment&acirc;ri',
	'topn' => 'Skat&icirc;t&acirc;kie',
	'toprated' => 'Vispopul&acirc;r&acirc;kie',
	'lasthits' => 'Pçdçjie skat&icirc;tie',
	'search' => 'Meklçðanas rezult&acirc;ti'
        'favpics'=> 'Favourite Pictures', //new in cpg1.2.0
);

$lang_errors = array(
	'access_denied' => 'Tev nav pieejas ties&icirc;bu ðai lapai.',
	'perm_denied' => 'Tev nav ties&icirc;bu veikt ð&acirc;du darb&icirc;bu.',
	'param_missing' => 'Tika izsaukta komanda bez parametriem.',
	'non_exist_ap' => 'Izvçlçtais albums/attçls neeksistç!',
	'quota_exceeded' => 'Nav vietas uz diska.<br /><br />Tev ir pieð&iacute;irts ierobeþojums [quota]K, bet paðlaik jau aiz&ograve;emti [space]K, t&acirc;pçc ð&icirc; attçla pievienoðana nav ieteicama (tiks p&acirc;rsniegts ierobeþojums).',
	'gd_file_type_err' => 'Izmantojot GD attçlu bibliotçku, atïauts izmantot tikai JPEG un PNG form&acirc;tus.',
	'invalid_image' => 'Attçls boj&acirc;ts vai ar&icirc; sistçmas GD attçlu bibliotçka nespçj to atkodçt.',
	'resize_failed' => 'Nav iespçjams izveidot mazo attçlu vai izmain&icirc;t t&acirc; izmçrus.',
	'no_img_to_display' => 'Nav attçla',
	'non_exist_cat' => 'Izvçlçt&acirc; sadaïa neeksistç',
	'orphan_cat' => 'Ðai apakðsadaïai nav sadaïas, kam t&acirc; piederçtu, l&ucirc;dzu izmanto sadaïu menedþeri, lai atrisin&acirc;tu problçmu.',
	'directory_ro' => 'Direktorij&acirc; \'%s\' nav atïauts rakst&icirc;t, t&acirc;pçc attçlus nav iespçjams izdzçst.',
	'non_exist_comment' => 'Izvçlçtais koment&acirc;rs neeksistç.',
	'pic_in_invalid_album' => 'Attçls atrodas neeksistçjoð&acirc; album&acirc; (%s)!?',
        'banned' => 'You are currently banned from using this site.',  //new in cpg1.2.0
        'not_with_udb' => 'This function is disabled in Coppermine because it is integrated with forum software. Either what you are trying to do is not supported in this configuration, or the function should be handled by the forum software.',  //new in cpg1.2.0
);

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
	'alb_list_title' => 'Uz albumu sarakstu',
	'alb_list_lnk' => 'Albumu saraksts',
	'my_gal_title' => 'Uz manu galeriju',
	'my_gal_lnk' => 'Mana galerija',
	'my_prof_lnk' => 'My profails',
	'adm_mode_title' => 'P&acirc;rslçgties Administratora reþ&icirc;m&acirc;',
	'adm_mode_lnk' => 'Administratora reþ&icirc;ms',
	'usr_mode_title' => 'P&acirc;rslçgties lietot&acirc;ja reþ&icirc;m&acirc;',
	'usr_mode_lnk' => 'Lietot&acirc;ja reþ&icirc;ms',
	'upload_pic_title' => 'Ielikt attçlu album&acirc;',
	'upload_pic_lnk' => 'Pievienot attçlu',
	'register_title' => 'Izveidot kontu',
	'register_lnk' => 'Re&igrave;istrçties',
	'login_lnk' => 'Pieslçgties',
	'logout_lnk' => 'Beigt darbu',
	'lastup_lnk' => 'Jaun&acirc;kie attçli',
	'lastcom_lnk' => 'Jaun&acirc;kie koment&acirc;ri',
	'topn_lnk' => 'Skat&icirc;t&acirc;kie attçli',
	'toprated_lnk' => 'Vispopul&acirc;r&acirc;kie',
	'search_lnk' => 'Meklçt',
        'fav_lnk' => 'My Favorites', //new in cpg1.2.0
);

$lang_gallery_admin_menu = array(
	'upl_app_lnk' => 'Apstiprin&acirc;t',
	'config_lnk' => 'Konfigurçt',
	'albums_lnk' => 'Albumi',
	'categories_lnk' => 'Sadaïas',
	'users_lnk' => 'Lietot&acirc;ji',
	'groups_lnk' => 'Grupas',
	'comments_lnk' => 'Koment&acirc;ri',
	'searchnew_lnk' => 'Attçlu grupas...',
        'util_lnk' => 'Resize pictures',  //new in cpg1.2.0
        'ban_lnk' => 'Ban Users',  //new in cpg1.2.0
);

$lang_user_admin_menu = array(
	'albmgr_lnk' => 'Izveidot manu albumu',
	'modifyalb_lnk' => 'Main&icirc;t manu albumu',
	'my_prof_lnk' => 'Profails',
);

$lang_cat_list = array(
	'category' => 'Sadaïas',
	'albums' => 'Albumi',
	'pictures' => 'Attçli',
);

$lang_album_list = array(
	'album_on_page' => '%d albumi %d lap&acirc;(s)'
);

$lang_thumb_view = array(
	'date' => 'DATE',
        //Sort by filename and title
        'name' => 'FILE NAME', //new in cpg1.2.0
        'title' => 'TITLE', //new in cpg1.2.0
	'sort_da' => 'pçc datuma augoði',
	'sort_dd' => 'pçc datuma dilstoði',
	'sort_na' => 'pçc nosaukuma augoði',
	'sort_nd' => 'pçc nosaukuma dilstoði',
        'sort_ta' => 'Sort by title ascending',  //new in cpg1.2.0
        'sort_td' => 'Sort by title descending',  //new in cpg1.2.0
	'pic_on_page' => '%d attçli %d lap&acirc;(s)',
	'user_on_page' => '%d lietot&acirc;ji %d lap&acirc;(s)'
);

$lang_img_nav_bar = array(
	'thumb_title' => 'Atgriezties uz attçlu indeksu',
	'pic_info_title' => 'R&acirc;d&icirc;t/paslçpt inform&acirc;ciju par attçlu',
	'slideshow_title' => 'Slaidðovs',
	'ecard_title' => 'S&ucirc;t&icirc;t k&acirc; e-karti&ograve;u',
	'ecard_disabled' => 'e-karti&ograve;u s&ucirc;t&icirc;ðana atslçgta',
	'ecard_disabled_msg' => 'Tev nav pietiekamu ties&icirc;bu, lai s&ucirc;t&icirc;tu e-karti&ograve;as',
	'prev_title' => 'Iepriekðçjais attçls',
	'next_title' => 'N&acirc;kamais attçls',
	'pic_pos' => 'ATTÇLS %s/%s',
);

$lang_rate_pic = array(
	'rate_this_pic' => 'Novçrtçt ',
	'no_votes' => '(novçrtçjuma nav)',
	'rating' => '(novçrtçjums: %s balsis no 5 (balsots %s reizi(-es))',
	'rubbish' => 'Mçsls',
	'poor' => 'V&acirc;ji',
	'fair' => 'Viduvçji',
	'good' => 'Labi',
	'excellent' => 'Teicami',
	'great' => 'Lieliski',
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
	CRITICAL_ERROR => 'Kritiska kï&ucirc;da',
	'file' => 'Fails: ',
	'line' => 'Rinda: ',
);

$lang_display_thumbnails = array(
	'filename' => 'Nosaukums : ',
	'filesize' => 'Lielums : ',
	'dimensions' => 'Izmçrs : ',
	'date_added' => 'Pievienots : '
);

$lang_get_pic_data = array(
	'n_comments' => 'koment&acirc;ri: <b>%s</b>',
	'n_views' => 'skat&icirc;jumi: <b>%s</b>',
	'n_votes' => 'vçrtçjumi: <b>%s</b>'
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
	0 => 'Pametam administrçðanas reþ&icirc;mu...',
	1 => 'Uz administrçðanas reþ&icirc;mu...',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
	'alb_need_name' => 'K&acirc; sauksim albumu?',
	'confirm_modifs' => 'Apstiprin&acirc;t veikt&acirc;s izmai&ograve;as?',
	'no_change' => 'Nekas nav main&icirc;ts!',
	'new_album' => 'Jauns albums',
	'confirm_delete1' => 'Tieð&acirc;m dzçst ðo albumu?',
	'confirm_delete2' => '\nVisi attçli un koment&acirc;ri taj&acirc; tiks izdzçsti!',
	'select_first' => 'Vispirms j&acirc;izvçlas albumu',
	'alb_mrg' => 'Albumu menedþeris',
	'my_gallery' => '* Mana galerija *',
	'no_category' => '* Mana sadaïa *',
	'delete' => 'Dzçst',
	'new' => 'Jauns',
	'apply_modifs' => 'Apstiprin&acirc;t izmai&ograve;as',
	'select_category' => 'Izvçlçties sadaïu',
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
	'miss_param' => 'Komandas \'%s\' izpild&icirc;ðanai tr&ucirc;kst nepiecieðamie parametri!',
	'unknown_cat' => 'Izvçlçt&acirc; sadaïa datu b&acirc;zç neeksistç',
	'usergal_cat_ro' => 'Lietot&acirc;ja galerijas sadaïa nevar tikt dzçsta!',
	'manage_cat' => 'Administrçt sadaïas',
	'confirm_delete' => 'Tieð&acirc;m dzçst ðo sadaïu',
	'category' => 'Sadaïa',
	'operations' => 'Darb&icirc;bas',
	'move_into' => 'P&acirc;rvietot uz',
	'update_create' => 'Modificçt/izveidot sadaïu',
	'parent_cat' => 'Pieder sadaïai',
	'cat_title' => 'Sadaïas virsraksts',
	'cat_desc' => 'Sadaïas apraksts'
);

// ------------------------------------------------------------------------- //
// File config.php
// ------------------------------------------------------------------------- //

if (defined('CONFIG_PHP')) $lang_config_php = array(
	'title' => 'Konfigur&acirc;cija',
	'restore_cfg' => 'Atjaunot noklusçt&acirc;s vçrt&icirc;bas',
	'save_cfg' => 'Saglab&acirc;t jaunos uzst&acirc;d&icirc;jumus',
	'notes' => 'Piez&icirc;mes',
	'info' => 'Inform&acirc;cija',
	'upd_success' => 'Coppermine konfigur&acirc;cija saglab&acirc;ta',
	'restore_success' => 'Coppermine noklusçt&acirc; konfigur&acirc;cija uzst&acirc;d&icirc;ta',
	'name_a' => 'Nosaukums augoði',
	'name_d' => 'Nosaukums dilstoði',
        'title_a' => 'Title ascending',  //new in cpg1.2.0
        'title_d' => 'Title descending',  //new in cpg1.2.0
	'date_a' => 'Datums augoði',
	'date_d' => 'Datums dilstoði'
);

if (defined('CONFIG_PHP')) $lang_config_data = array(
	'Galvenie uzst&acirc;d&icirc;jumi',
	array('Nosaukums', 'gallery_name', 0),
	array('Apraksts', 'gallery_description', 0),
	array('Administrators', 'gallery_admin_email', 0),
	array('Adrese, kas b&ucirc;s e-karti&ograve;&acirc; pie teksta \'Citi attçli...\'', 'ecards_more_pic_target', 0),
	array('Valoda', 'lang', 5),
	array('Tçma', 'theme', 6),

	'Albumu saraksta skat&icirc;jums',
	array('Galven&acirc;s tabulas platums (pikseïos vai %)', 'main_table_width', 0),
	array('Cik l&icirc;me&ograve;os sadaïas atspoguïot', 'subcat_level', 0),
	array('Cik albumus atspoguïot', 'albums_per_page', 0),
	array('Cik kolonn&acirc;s atspoguïot alb&ucirc;mus', 'album_list_cols', 0),
	array('Cik lieli pikseïos b&ucirc;s mazie attçli', 'alb_list_thumb_size', 0),
	array('Galven&acirc;s lapas saturs', 'main_page_layout', 0),
        array('Show first level album thumbnails in categories','first_level',1),  //new in cpg1.2.0

	'Mazo attçlu skat&icirc;jums',
	array('Cik kolonn&acirc;s r&acirc;d&icirc;t mazos attçlus', 'thumbcols', 0),
	array('Cik rind&acirc;s r&acirc;d&icirc;t mazos attçlus', 'thumbrows', 0),
	array('Cik tabulas atspoguïot', 'max_tabs', 0),
	array('Blakus mazajam attçlam atspoguïot ne tikai attçla virsrakstu, bet ar&icirc; aprakstu', 'caption_in_thumbview', 1),
	array('Atspoguïot koment&acirc;ru skaitu', 'display_comment_count', 1),
	array('K&acirc; k&acirc;rtot attçlus', 'default_sort_order', 3),
	array('Minim&acirc;lais balsu skaits, lai attçls tiktu iekïauts vispopul&acirc;r&acirc;ko sarakst&acirc;', 'min_votes_for_rating', 0),

	'Attçlu skat&icirc;ðan&acirc;s &amp; Koment&acirc;ri',
	array('Attçla tabulas platums (pikseïos vai %)', 'picture_table_width', 0),
	array('Attçla inform&acirc;cija redzama pçc noklusçðanas', 'display_pic_info', 1),
	array('Filtrçt sliktus v&acirc;rdus koment&acirc;ros', 'filter_bad_words', 1),
	array('Atïaut seji&ograve;as koment&acirc;ros', 'enable_smilies', 1),
	array('Max attçla apraksta garums', 'max_img_desc_length', 0),
	array('Max simbolu skaits vien&acirc; v&acirc;rd&acirc;', 'max_com_wlength', 0),
	array('Max rindu skaits koment&acirc;r&acirc;', 'max_com_lines', 0),
	array('Max koment&acirc;ra garums', 'max_com_size', 0),
        array('Show film strip', 'display_film_strip', 1),  //new in cpg1.2.0
        array('Number of items in film strip', 'max_film_strip_items', 0), 

	'Lielo un mazo attçlu kvalit&acirc;te',
	array('JPEG failu kvalit&acirc;te', 'jpeg_qual', 0),
        array('Max dimension of a thumbnail <b>*</b>', 'thumb_width', 0),  //new in cpg1.2.0
        array('Use dimension ( width or height or Max aspect for thumbnail )<b>*</b>', 'thumb_use', 7),  //new in cpg1.2.0
	array('Izveidot ar&icirc; \'starpattçlus\'','make_intermediate',1),
	array('Max \'starpattçla\' platums vai augstums <b>*</b>', 'picture_width', 0),
	array('Max uzlikt&acirc; attçla lielums (KB)', 'max_upl_size', 0),
	array('Max uzlikt&acirc; attçla platums vai augstums (pikseïos)', 'max_upl_width_height', 0),

	'Lietot&acirc;ju uzst&acirc;d&icirc;jumi',
	array('Atïaut jaunu lietot&acirc;ju piere&igrave;istrçðanos', 'allow_user_registration', 1),
	array('Lietot&acirc;ja sekm&icirc;gai re&igrave;istr&acirc;cija nepiecieðams e-pasta apstiprin&acirc;jums', 'reg_requires_valid_email', 1),
	array('Atïaut diviem daþ&acirc;diem lietot&acirc;jiem izmantot vien&acirc;das e-pasta adreses', 'allow_duplicate_emails_addr', 1),
	array('Lietot&acirc;js dr&icirc;kst veidot person&icirc;gus alb&ucirc;mus', 'allow_private_albums', 1),

	'Rezerves lauki attçla aprakstam (ja neizmanto, atst&acirc;j tukðus)',
	array('Lauka 1 nosaukums', 'user_field1_name', 0),
	array('Lauka 2 nosaukums', 'user_field2_name', 0),
	array('Lauka 3 nosaukums', 'user_field3_name', 0),
	array('Lauka 4 nosaukums', 'user_field4_name', 0),

	'Lielo un mazo attçlu &icirc;paðie uzst&acirc;d&icirc;jumi',
        array('Show private album Icon to unlogged user','show_private',1),  //new in cpg1.2.0
	array('K&acirc;di simboli aizliegti failu nosaukumos', 'forbiden_fname_char',0),
	array('Uzliekamo attçlu atïautie failu paplaðin&acirc;jumi', 'allowed_file_extensions',0),
	array('Attçlu izmçru main&icirc;ðanas metodes','thumb_method',2),
	array('Ceïð uz ImageMagick \'convert\' util&icirc;tu (piemçram, /usr/bin/X11/)', 'impath', 0),
	array('Atïauti attçlu form&acirc;ti (tikai priekð ImageMagick)', 'allowed_img_types',0),
	array('Komandrindas parametri ImageMagick util&icirc;tai', 'im_options', 0),
	array('Izmantot JPEG attçlu EXIF inform&acirc;ciju', 'read_exif_data', 1),
	array('Albumu direktorija <b>*</b>', 'fullpath', 0),
	array('Lietot&acirc;ju albumu direktorija <b>*</b>', 'userpics', 0),
	array('Starpattçlu prefikss <b>*</b>', 'normal_pfx', 0),
	array('Mazo attçlu prefikss <b>*</b>', 'thumb_pfx', 0),
	array('Direktoriju skat&icirc;juma reþ&icirc;ms pçc noklusçðanas', 'default_dir_mode', 0),
	array('Attçlu reþ&icirc;ms', 'default_file_mode', 0),
        array('Disable right-click on full-size pop-up (JavaScript - no foolproof method)', 'disable_popup_rightclick', 1),  //new in cpg1.2.0
        array('Disable right-click on all "regular" pages (JavaScript - no foolproof method)', 'disable_gallery_rightclick', 1),  //new in cpg1.2.0

	'Cepumi (cookies) &amp; Kodçjums',
	array('Cookie nosaukumus', 'cookie_name', 0),
	array('Cookie ceïð', 'cookie_path', 0),
	array('Teksta kodçjums', 'charset', 4),

	'Citi uzst&acirc;d&icirc;jumi',
	array('Debug reþ&icirc;ms', 'debug_mode', 1),

	'<br /><div align="center">(*) Ar * atz&icirc;mçtos parametrus nav ieteicams main&icirc;t, ja galer&icirc;j&acirc;s jau ir attçli</div><br />'
);

// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
	'empty_name_or_com' => 'Ja neb&ucirc;s v&acirc;rds un koment&acirc;ra teksts, nekas nesan&acirc;ks',
	'com_added' => 'Koment&acirc;rs pievienots',
	'alb_need_title' => 'K&acirc;ds ir albuma virsraksts (nosaukums)?',
	'no_udp_needed' => 'Izmai&ograve;as nav nepiecieðamas.',
	'alb_updated' => 'Album&acirc; veiksm&icirc;gi veiktas izmai&ograve;as',
	'unknown_album' => 'Izvçlçtais albums neeksistç vai ar&icirc; nav ties&icirc;bu taj&acirc; pievienot attçlus',
	'no_pic_uploaded' => 'Attçls netika uzlikts!<br /><br />Vai uz servera ir uzlikta atïauja ð&acirc;d&acirc;m oper&acirc;cij&acirc;m?',
	'err_mkdir' => 'Direktorija %s NEtika izveidota!',
	'dest_dir_ro' => 'Nav ties&icirc;bu veikt ierakstu direktrij&acirc; %s!',
	'err_move' => 'Nav iespçjams p&acirc;rvietot %s uz %s !',
	'err_fsize_too_large' => 'Uzliekam&acirc; attçla izmçrs p&acirc;rsniedz max atïauto (max atïautais ir %s x %s) !',
	'err_imgsize_too_large' => 'Uzliekam&acirc; attçla faila izmçrs p&acirc;rsniedz max atïauto (max atïautais ir %s KB) !',
	'err_invalid_img' => 'Uzliekamais fails nav klasificçjams k&acirc; attçls!',
	'allowed_img_types' => 'Tu dr&icirc;ksti uzlikt %s attçlus.',
	'err_insert_pic' => 'Attçls \'%s\' nevar tikt pievienots ',
	'upload_success' => 'Attçls veiksm&icirc;gi uzlikts<br /><br />Tas b&ucirc;s redzams galerij&acirc;, tikl&icirc;dz Administrators to b&ucirc;s akceptçjis.',
	'info' => 'Inform&acirc;cija',
	'com_added' => 'Koment&acirc;rs pievienots',
	'alb_updated' => 'Albums modificçts',
	'err_comment_empty' => 'Nav koment&acirc;ra!',
	'err_invalid_fext' => 'Atïauti faili ar ð&acirc;diem paplaðin&acirc;jumiem : <br /><br />%s.',
	'no_flood' => 'Atvaino, bet tieði tu ar&icirc; esi pçdçj&acirc; ies&ucirc;t&icirc;t&acirc; koment&acirc;ra autors.<br /><br />Modificç sava pçdçj&acirc; ies&ucirc;t&icirc;t&acirc; koment&acirc;ra tekstu',
	'redirect_msg' => 'Notiek p&acirc;radres&acirc;cija.<br /><br /><br />Spied uz \'TURPIN&Acirc;T\', ja lapa nep&acirc;rl&acirc;dçjas',
	'upl_success' => 'Attçls veiksm&icirc;gi pievienots',
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
	'caption' => 'Teksts',
	'fs_pic' => 'piln&acirc; izmçra attçls',
	'del_success' => 'veiksm&icirc;gi izdzçsts',
	'ns_pic' => 'norm&acirc;la izmçra attçls',
	'err_del' => 'nevar tikt izdzçsts',
	'thumb_pic' => 'mazais attçls',
	'comment' => 'koment&acirc;rs',
	'im_in_alb' => 'attçls album&acirc;',
	'alb_del_success' => 'Albums \'%s\' izdzçsts',
	'alb_mgr' => 'Albuma menedþeris',
	'err_invalid_data' => 'Sa&ograve;emta nekorekta inform&acirc;cija \'%s\'',
	'create_alb' => 'Tiek veidots albums \'%s\'',
	'update_alb' => 'Tiek modificçts albums \'%s\' ar virsrakstu \'%s\' un indeksu \'%s\'',
	'del_pic' => 'Dzçst attçlu',
	'del_alb' => 'Dzçst albumu',
	'del_user' => 'Dzçst lietot&acirc;ju',
	'err_unknown_user' => 'Izvçlçtais lietot&acirc;js neeksistç!',
	'comment_deleted' => 'Koment&acirc;rs veiksm&icirc;gi izdzçsts',
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
	'confirm_del' => 'Tieð&acirc;m DZÇST ðo attçlu? \\nAr&icirc; koment&acirc;ri tiks izdzçsti.',
	'del_pic' => 'IZDZÇST ÐO ATTÇLU',
	'size' => '%s x %s px',
	'views' => '%s reizes',
	'slideshow' => 'Slaidðovs',
	'stop_slideshow' => 'APST&Acirc;DIN&Acirc;T SLAIDÐOVU',
	'view_fs' => 'Uzspied, lai redzçtu pilna izmçra attçlu',
);

$lang_picinfo = array(
	'title' =>'Inform&acirc;cija par attçlu',
	'Filename' => 'Attçls',
	'Album name' => 'Albums',
	'Rating' => 'Vçrtçjums (%s balsis)',
	'Keywords' => 'Atslçgas v&acirc;rdi',
	'File Size' => 'Faila lielums',
	'Dimensions' => 'Izmçrs',
	'Displayed' => 'Attçlots',
	'Camera' => 'Kamera',
	'Date taken' => 'Uz&ograve;emðanas datums',
	'Aperture' => 'Objekt&icirc;va diametrs',
	'Exposure time' => 'Ekspoz&icirc;cijas laiks',
	'Focal length' => 'Fokuss',
	'Comment' => 'Koment&acirc;ri'
        'addFav'=>'Add to Fav',  //new in cpg1.2.0
        'addFavPhrase'=>'Favourites',  //new in cpg1.2.0
        'remFav'=>'Remove from Fav',  //new in cpg1.2.0
);

$lang_display_comments = array(
	'OK' => 'OK',
	'edit_title' => 'Modificçt koment&acirc;ru',
	'confirm_delete' => 'Tieð&acirc;m DZÇST ðo koment&acirc;ru?',
	'add_your_comment' => 'Pievienot koment&acirc;ru',
        'name'=>'Name',  //new in cpg1.2.0
        'comment'=>'Comment',  //new in cpg1.2.0
	'your_name' => 'V&acirc;rds',
);

$lang_fullsize_popup = array( 
        'click_to_close' => 'Click image to close this window',  //new in cpg1.2.0
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
	'title' => 'Nos&ucirc;t&icirc;t e-karti&ograve;u',
	'invalid_email' => '<b>UZMAN&Icirc;BU</b> : kï&ucirc;daina adrese!',
	'ecard_title' => 'Sveiciens no %s',
	'view_ecard' => 'Ðo sveicienu var redzçt ar&icirc; sekojoða adresç',
	'view_more_pics' => 'Citi forði attçli...',
	'send_success' => 'E-karti&ograve;a nos&ucirc;t&icirc;ta',
	'send_failed' => 'Atvaino, serveris nevar nos&ucirc;t&icirc;t tavu E-karti&ograve;u...',
	'from' => 'No k&acirc;',
	'your_name' => 'V&acirc;rds',
	'your_email' => 'E-pasta adrese',
	'to' => 'Kam',
	'rcpt_name' => 'Sa&ograve;emçja v&acirc;rds',
	'rcpt_email' => 'Sa&ograve;çmçja e-pasta adrese',
	'greetings' => 'Sveiciens',
	'message' => 'Pilnais teksts',
);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
	'pic_info' => 'Attçla&nbsp;dati',
	'album' => 'Albums',
	'title' => 'Virsraksts',
	'desc' => 'Apraksts',
	'keywords' => 'Atslçgas v&acirc;rdi',
	'pic_info_str' => '%sx%s - %sKB - %s skat&icirc;jumi - %s balsis',
	'approve' => 'Apstiprin&acirc;t attçla pievienoðanu',
	'postpone_app' => 'Noraid&icirc;t attçla pievienoðanu',
	'del_pic' => 'Dzçst attçlu',
	'reset_view_count' => 'Nodzçst skat&icirc;jumi skait&icirc;t&acirc;ju',
	'reset_votes' => 'Nodzçst balsojumu skaitu',
	'del_comm' => 'Dzçst koment&acirc;rus',
	'upl_approval' => 'Uzlikðanas apstiprin&acirc;jums',
	'edit_pics' => 'Modificçt attçlus',
	'see_next' => 'Iepriekðçjie attçli',
	'see_prev' => 'N&acirc;kamie attçli',
	'n_pic' => '%s attçli',
	'n_of_pic_to_disp' => 'Cik attçlus atspoguïot',
	'apply' => 'Apstiprin&acirc;t izmai&ograve;as'
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
	'group_name' => 'Grupa',
	'disk_quota' => 'Kvota (atmi&ograve;as ierobeþojumi)',
	'can_rate' => 'Dr&icirc;kst vçrtçt attçlus',
	'can_send_ecards' => 'Dr&icirc;kst s&ucirc;t&icirc;t e-karti&ograve;as',
	'can_post_com' => 'Dr&icirc;kst komentçt',
	'can_upload' => 'Dr&icirc;kst likt attçlus',
	'can_have_gallery' => 'Dr&icirc;kst b&ucirc;t person&icirc;ga galerija',
	'apply' => 'Apstiprin&acirc;t izmai&ograve;as',
	'create_new_group' => 'Izveidot jaunu grupu',
	'del_groups' => 'Dzçst grupu(-as)',
	'confirm_del' => 'Uzman&icirc;bu! Dzçðot grupu, visi tai pieder&icirc;gie lietot&acirc;ji tiks p&acirc;rvietoti uz re&igrave;istrçto lietot&acirc;ju grupu!\n\nTurpin&acirc;t?',
	'title' => 'Administrçt lietot&acirc;ju grupas',
	'approval_1' => 'Publisks uzlikðanas apstiprin&acirc;jums (1)',
	'approval_2' => 'Priv&acirc;ts uzlikðanas apstiprin&acirc;jums (2)',
	'note1' => '<b>(1)</b> Attçlu uzlikðanai publisk&acirc; alb&ucirc;m&acirc; ir nepiecieðama administratora atïauja',
	'note2' => '<b>(2)</b> Attçlu pievienoðanai album&acirc;, kas pieder ðim lietot&acirc;jam, nepiecieðama administratora atïauja',
	'notes' => 'Piez&icirc;mes'
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
	'welcome' => 'Laipni l&ucirc;dzam!'
);

$lang_album_admin_menu = array(
	'confirm_delete' => 'Tieð&acirc;m DZÇST ðo albumu? \\nVisi attçli un koment&acirc;ri taj&acirc; tiks izdzçsti.',
	'delete' => 'IZDZÇST',
	'modify' => 'UZST&Acirc;D&Icirc;JUMI',
	'edit_pics' => 'MODIFICÇT ATTÇLUS',
);

$lang_list_categories = array(
	'home' => 'Galven&acirc; lapa',
	'stat1' => 'attçli: <b>[pictures]</b> | albumi: <b>[albums]</b> | sadaïas: <b>[cat]</b> | koment&acirc;ri: <b>[comments]</b> | <b>skat&icirc;ts [views]</b> reizes',
	'stat2' => 'attçli: <b>[pictures]</b> | albumi: <b>[albums]</b> | skat&icirc;ti <b>[views]</b> reizes',
	'xx_s_gallery' => 'Autors %s',
	'stat3' => '<b>[pictures]</b> attçli | <b>[albums]</b> albumi | <b>[comments]</b> koment&acirc;ri | skat&icirc;ti <b>[views]</b> reizes'
);

$lang_list_users = array(
	'user_list' => 'Lietot&acirc;ju saraksts',
	'no_user_gal' => 'Nav lietot&acirc;ju galerijas',
	'n_albums' => 'albumi: <b>%s</b>',
	'n_pics' => 'attçli: <b>%s</b>'
);

$lang_list_albums = array(
	'n_pictures' => '<b>%s</b> attçli',
	'last_added' => ', pçdçjais pievienots <b>%s</b>'
);

}

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //
//
// Login->Latvian????
// Logout->Latvian???
//

if (defined('LOGIN_PHP')) $lang_login_php = array(
	'login' => 'Pieslçgties',
	'enter_login_pswd' => 'Pieslçdzies ar savu lietot&acirc;ja v&acirc;rdu un paroli',
	'username' => 'V&acirc;rds',
	'password' => 'Parole',
	'remember_me' => 'Atcerçties mani ar&icirc; turpm&acirc;k',
	'welcome' => 'Sveicin&acirc;ts, %s ...',
	'err_login' => '*** V&acirc;rds vai/un parole nepareizi. Mç&igrave;in&acirc;si vçlreiz? ***',
	'err_already_logged_in' => 'Tu jau esi sistçm&acirc;!',
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
	'logout' => 'Iziet',
	'bye' => 'Visu labu,  %s ...',
	'err_not_loged_in' => 'J&acirc;pieslçdzas sistçmai!',
);

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
	'upd_alb_n' => 'Modificçt albumu %s',
	'general_settings' => 'Galvenie uzst&acirc;d&icirc;jumi',
	'alb_title' => 'Albuma virsraksts',
	'alb_cat' => 'Sadaïa',
	'alb_desc' => 'Albuma apraksts',
	'alb_thumb' => 'Albuma mazais attçls',
	'alb_perm' => 'Albuma lietot&acirc;ju ties&icirc;bas',
	'can_view' => 'Albumu var skat&icirc;ties',
	'can_upload' => 'Apmeklçt&acirc;jie dr&icirc;kst pievienot attçlus',
	'can_post_comments' => 'Apmeklçt&acirc;ji dr&icirc;kst komentçt',
	'can_rate' => 'Apmeklçt&acirc;ji dr&icirc;kst vçrtçt attçlus',
	'user_gal' => 'Lietot&acirc;ja galerija',
	'no_cat' => '* Kategorijas nav *',
	'alb_empty' => 'Albums ir tukðs',
	'last_uploaded' => 'Pçdejoreiz uzlikts attçls',
	'public_alb' => 'Ikviens (publiskais albums)',
	'me_only' => 'Tikai es',
	'owner_only' => 'Tikai albuma &icirc;paðnieks (%s)',
	'groupp_only' => 'Tikai \'%s\' grup&acirc; esoðie',
	'err_no_alb_to_modify' => 'Tev nav ties&icirc;bu modificçt albumus.',
	'update' => 'Saglab&acirc;t izmai&ograve;as'
);

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
	'already_rated' => 'Atvaino, bet tu jau esi iesniedzis savu vçrtçjumu',
	'rate_ok' => 'Vçrtçjums pie&ograve;emts',
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
By clicking 'Es piekr&icirc;tu' below you agree to be bound by these conditions.
EOT;

$lang_register_php = array(
	'page_title' => 'Lietot&acirc;ja re&igrave;istr&acirc;cija',
	'term_cond' => 'Vienoðan&acirc;s nosac&icirc;jumi',
	'i_agree' => 'Es piekr&icirc;tu',
	'submit' => 'Apstiprin&acirc;t re&igrave;istr&acirc;ciju',
	'err_user_exists' => 'Ðis lietot&acirc;ja v&acirc;rds jau ir re&igrave;istrçts, izvçlies citu',
	'err_password_mismatch' => 'Paroles nesakr&icirc;t, raksti vçlreiz',
	'err_uname_short' => 'Lietot&acirc;ja v&acirc;rda minim&acirc;lais simbolu skaits ir 2',
	'err_password_short' => 'Parolç j&acirc;b&ucirc;t ne maz&acirc;k k&acirc; 2 simboliem',
	'err_uname_pass_diff' => 'Lietot&acirc;ja v&acirc;rds un parole nedr&icirc;kst b&ucirc;t vien&acirc;di',
	'err_invalid_email' => 'E-pasta adres ir nepareiza',
	'err_duplicate_email' => 'Ð&acirc;da email adrese jau ir datu b&acirc;zç',
	'enter_info' => 'Re&igrave;istr&acirc;cijas inform&acirc;cija',
	'required_info' => 'Nepiecieðam&acirc; inform&acirc;cija',
	'optional_info' => 'Neoblig&acirc;t&acirc; inform&acirc;cija',
	'username' => 'Lietot&acirc;ja v&acirc;rds',
	'password' => 'Parole',
	'password_again' => 'Vçlreiz parole',
	'email' => 'E-pasts',
	'location' => 'Atraðan&acirc;s vieta',
	'interests' => 'Intereses',
	'website' => 'M&acirc;jas lapa',
	'occupation' => 'Nodarboðan&acirc;s',
	'error' => 'KÏ&Ucirc;DA',
	'confirm_email_subject' => '%s - Re&igrave;istr&acirc;cijas apstiprin&acirc;jums',
	'information' => 'Inform&acirc;cija',
	'failed_sending_email' => 'Nevar tikt nos&ucirc;t&icirc;ta re&igrave;istr&acirc;cijas apstiprin&acirc;juma vçstule!',
	'thank_you' => 'Paldies par re&igrave;istrçðanos.<br /><br />Vçstule ar s&icirc;k&acirc;ku inform&acirc;ciju, k&acirc; pabeigt re&igrave;istrçðan&acirc;s procesu, tika nos&ucirc;t&icirc;ta uz iepriekð minçto adresi.',
	'acct_created' => 'Konts izveidots un tu vari pieslçgties ar savu lietot&acirc;ja v&acirc;rdu un paroli',
	'acct_active' => 'Konts ir akt&icirc;vs un tu tagad vari pieslçgties sistçmai',
	'acct_already_act' => 'Konts jau ir akt&icirc;vs!',
	'acct_act_failed' => 'Ðis konts nevar tikt aktivizçts!',
	'err_unk_user' => 'Izvçlçtais lietot&acirc;js neeksistç!',
	'x_s_profile' => '%s : profails',
	'group' => 'Grupa',
	'reg_date' => 'Pievienojies',
	'disk_usage' => 'Diska izmantoðana',
	'change_pass' => 'Nomain&icirc;t paroli',
	'current_pass' => 'Paðreizçj&acirc; parole',
	'new_pass' => 'Jauna parole',
	'new_pass_again' => 'Vçlreiz jaun&acirc; parole',
	'err_curr_pass' => 'Paðreizçj&acirc; parole nepareiza',
	'apply_modif' => 'Apstiprin&acirc;t izmai&ograve;as',
	'change_pass' => 'Nomain&icirc;t paroli',
	'update_success' => 'Profails izmain&icirc;ts',
	'pass_chg_success' => 'Parole nomain&icirc;ta',
	'pass_chg_error' => 'Parole netika nomain&icirc;ta',
);

$lang_register_confirm_email = <<<EOT
Paldies par re&igrave;istrçðanos {SITE_NAME}

Lietot&acirc;ja v&acirc;rds : "{USER_NAME}"
Lietot&acirc;ja parole : "{PASSWORD}"

Lai aktivizçtu savu kontu, nepiecieðams iel&acirc;dçt zem&acirc;k redzamo lapu.

{ACT_LINK}

Lai veicas,

{SITE_NAME}

EOT;

}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
	'title' => 'Apskat&icirc;ties koment&acirc;rus',
	'no_comment' => 'Koment&acirc;ru nav',
	'n_comm_del' => '%s koment&acirc;ri izdzçsti',
	'n_comm_disp' => 'Cik koment&acirc;rus atspoguïot',
	'see_prev' => 'Iepriekðçjie',
	'see_next' => 'N&acirc;kamie',
	'del_comm' => 'Dzçst izvçlçtos koment&acirc;rus',
);


// ------------------------------------------------------------------------- //
// File search.php - OK
// ------------------------------------------------------------------------- //

if (defined('SEARCH_PHP')) $lang_search_php = array(
	0 => 'Meklçt attçlu kolekcij&acirc;',
);

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
	'page_title' => 'Meklçt jaunus attçlus',
	'select_dir' => 'Izvçlçties direktoriju',
	'select_dir_msg' => 'Ð&icirc; funkcija ïauj pievienot daudzus attçlus vienlaikus, ja tie iepriekð uzlikti ar FTP.<br /><br />Izvçlies direktoriju, kur tika uzlikti attçli',
	'no_pic_to_add' => 'Nav attçlu, ko varçtu pievienot',
	'need_one_album' => 'Lai izmantotu ðo funkciju, nepiecieðams vismaz viens albums',
	'warning' => 'Uzman&icirc;bu',
	'change_perm' => 'nav pieeja direktorijai, tai j&acirc;izmaina ties&icirc;bas (chmod) no 755 uz 777, lai varçtu pievienot attçlus!',
	'target_album' => '<b>Ievietot attçlus &quot;</b>%s<b>&quot; </b>%s',
	'folder' => 'Direktorija',
	'image' => 'Attçls',
	'album' => 'Albums',
	'result' => 'Rezult&acirc;ti',
	'dir_ro' => 'Nav rakst&icirc;ðanas ties&icirc;bu. ',
	'dir_cant_read' => 'Nav las&icirc;ðanas ties&icirc;bu. ',
	'insert' => 'Jaunu attçlu pievienoðana',
	'list_new_pic' => 'Jauno attçlu saraksts',
	'insert_selected' => 'Pievienot izvçlçtos attçlus',
	'no_pic_found' => 'Jauni attçli netika atrasti',
	'be_patient' => 'L&ucirc;dzu esiet paciet&icirc;gi, kamçr tiek pievienoti jaunie attçli',
	'notes' =>  '<ul>'.
				'<li><b>OK</b> : attçls veiksm&icirc;gi pievienots'.
				'<li><b>DP</b> : noz&icirc;mç, ka t&acirc;ds attçls jau ir datu b&acirc;zç'.
				'<li><b>PB</b> : attçlu nevar pievienot, j&acirc;p&acirc;rbauda pieejas ties&icirc;bas'.
				'<li>Ja OK, DP, PB \'z&icirc;mes\' nepar&acirc;d&acirc;s, j&acirc;klikð&iacute;ina uz attçla, kas par&acirc;d&acirc;s, lai ieg&ucirc;tu detalizçt&acirc;ku kï&ucirc;das aprakstu'.
				'<li>Ja p&acirc;rl&ucirc;k&acirc; par&acirc;d&acirc;s pazi&ograve;ojums par taimautu, lapa ir j&acirc;p&acirc;rl&acirc;dç'.
				'</ul>',
);


// ------------------------------------------------------------------------- //
// File thumbnails.php
// ------------------------------------------------------------------------- //

// Void


// ------------------------------------------------------------------------- // 
// File banning.php  //new in cpg1.2.0
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
); 

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) $lang_upload_php = array(
	'title' => 'Uzlikt attçlu',
	'max_fsize' => 'Max pievienojam&acirc; faila lielums %s KB',
	'album' => 'Albums',
	'picture' => 'Attçls',
	'pic_title' => 'Attçla virsraksts',
	'description' => 'Attçla apraksts',
	'keywords' => 'Atslçgas v&acirc;rdi (atdal&icirc;t ar atstarpçm)',
	'err_no_alb_uploadables' => 'Atvaino, nav neviena albuma, kur&acirc; tu varçtu ievietot savus attçlus',
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
	'title' => 'Administrçt lietot&acirc;jus',
	'name_a' => 'V&acirc;rds augoði',
	'name_d' => 'V&acirc;rds dilstoði',
	'group_a' => 'Grupa augoði',
	'group_d' => 'Grupa dilstoði',
	'reg_a' => 'Reg datums augoði',
	'reg_d' => 'Reg datums dilstoði',
	'pic_a' => 'Attçlu skaits augoði',
	'pic_d' => 'Attçlu skaits dilstoði',
	'disku_a' => 'Diska atmi&ograve;a augoði',
	'disku_d' => 'Diska atmi&ograve;a dilstoði',
	'sort_by' => 'K&acirc;rtot',
	'err_no_users' => 'Lietot&acirc;ju tabul&acirc; nav datu!',
	'err_edit_self' => 'Nemaini te savu profailu, tam izmanto \'Mans profails\'',
	'edit' => 'MODIFICÇT',
	'delete' => 'DZÇST',
	'name' => 'Lietot&acirc;js',
	'group' => 'Grupa',
	'inactive' => 'Neakt&icirc;vs',
	'operations' => 'Darb&icirc;bas',
	'pictures' => 'Attçli',
	'disk_space' => 'Izmantot&acirc; atmi&ograve;a / Ierobeþojums',
	'registered_on' => 'Re&igrave;istrçts',
	'u_user_on_p_pages' => '%d lietot&acirc;ji %d lap&acirc;(s)',
	'confirm_del' => 'Tieð&acirc;m DZÇST ðo lietot&acirc;ju? \\nVisi vi&ograve;a attçli un koment&acirc;ri ar&icirc; tiks izdzçsti',
	'mail' => 'MAIL',
	'err_unknown_user' => 'Izvçlçtais lietot&acirc;js neeksistç!',
	'modify_user' => 'Main&icirc;t datus',
	'notes' => 'Piez&icirc;mes',
	'note_list' => '<li>Ja nevçlies main&icirc;t paroli, atst&acirc;j paroles lauku tukðu',
	'password' => 'Parole',
	'user_active' => 'Lietot&acirc;js akt&icirc;vs',
	'user_group' => 'Grupa',
	'user_email' => 'Emails',
	'user_web_site' => 'M&acirc;jas lapa',
	'create_new_user' => 'Izveidot',
	'user_location' => 'Atraðan&acirc;s',
	'user_interests' => 'Intereses',
	'user_occupation' => 'Nodarboðan&acirc;s',
);

// ------------------------------------------------------------------------- // 
// File util.php  //new in cpg1.2.0
// ------------------------------------------------------------------------- // 

if (defined('UTIL_PHP')) $lang_util_php = array( 
        'title' => 'Resize pictures', 
        'what_it_does' => 'What it does', 
        'what_update_titles' => 'Updates titles from filename', 
        'what_delete_title' => 'Deletes titles', 
        'what_rebuild' => 'Rebuilds thumbnails and resized photos', 
        'what_delete_originals' => 'Deletes original sized photos replacing them with the sized version', 
        'file' => 'File', 
        'title_set_to' => 'title set to', 
        'submit_form' => 'submit', 
        'updated_succesfully' => 'updated succesfully', 
        'error_create' => 'ERROR creating', 
        'continue' => 'Process more images', 
        'main_success' => 'The file %s was successfully used as main picture', 
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
        'filename_title' => 'Filename ⇒ Picture title', 
        'filename_how' => 'How should the filename be modified', 
        'filename_remove' => 'Remove the .jpg ending and replace _ (underscore) with spaces', 
        'filename_euro' => 'Change 2003_11_23_13_20_20.jpg to 23/11/2003 13:20', 
        'filename_us' => 'Change 2003_11_23_13_20_20.jpg to 11/23/2003 13:20', 
        'filename_time' => 'Change 2003_11_23_13_20_20.jpg to 13:20', 
        'delete' => 'Delete picture titles or original size photos', 
        'delete_title' => 'Delete picture titles', 
        'delete_original' => 'Delete original size photos', 
        'delete_replace' => 'Deletes the original images replacing them with the sized versions', 
        'select_album' => 'Select album', 
); 

?>
