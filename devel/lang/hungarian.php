<?php
// ------------------------------------------------------------------------- //
//  Coppermine Photo Gallery                                                 //
// ------------------------------------------------------------------------- //
//  Copyright (C) 2002,2003  Gr&eacute;gory DEMAR <gdemar@wanadoo.fr>               //
//  http://www.chezgreg.net/coppermine/                                      //
// ------------------------------------------------------------------------- //
//  Based on PHPhotoalbum by Henning Stoverud <henning@stoverud.com>         //
//  http://www.stoverud.com/PHPhotoalbum/                                    //
// ------------------------------------------------------------------------- //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
// ------------------------------------------------------------------------- //

// info about translators and translated language
$lang_translation_info = array(
'lang_name_english' => 'Hungarian',  //the name of your language in English, e.g. 'Greek' or 'Spanish'
'lang_name_native' => 'Magyar', //the name of your language in your mother tongue (for non-latin alphabets, use unicode), e.g. '????????' or 'Español'
'lang_country_code' => 'hu', //the two-letter code for the country your language is most-often spoken (refer to http://www.iana.org/cctld/cctld-whois.htm), e.g. 'gr' or 'es'
'trans_name'=> 'Peter Ardo', //the name of the translator - can be a nickname
'trans_email' => 'petardo@freemail.hu', //translator's email address (optional)
'trans_website' => '', //translator's website (optional)
'trans_date' => '2003-10-02', //the date the translation was created / last modified
);

$lang_charset = 'iso-8859-2';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('Bytes', 'KB', 'MB');

// Day of weeks and months
$lang_day_of_week = array('H&eacute;tfõ', 'Kedd', 'Szer', 'Cs&uuml;t', 'P&eacute;n', 'Szo', 'Vas');
$lang_month = array('Jan', 'Feb', 'M&aacute;r', '&Aacute;pr', 'M&aacute;j', 'J&uacute;n', 'J&uacute;l', 'Aug', 'Szept', 'Okt', 'Nov', 'Dec');

// Some common strings
$lang_yes = 'Igen';
$lang_no  = 'Nem';
$lang_back = 'VISSZA';
$lang_continue = 'TOV&Aacute;BB';
$lang_info = 'Inform&aacute;ci&oacute;';
$lang_error = 'Hiba';

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$album_date_fmt =    '%Y %B %d';
$lastcom_date_fmt =  '%y.%m.%d %H:%M';
$lastup_date_fmt = '%Y %B %d';
$register_date_fmt = '%Y %B %d';
$lasthit_date_fmt = '%Y %B %d %I:%M %p';
$comment_date_fmt =  '%Y %B %d %I:%M %p';

// For the word censor
$lang_bad_words = array('basz*', 'segg*', 'fasz*', 'kurva*', 'picsa', 'geci');

$lang_meta_album_names = array(
        'random' => 'V&eacute;letlen k&eacute;plista',
        'lastup' => 'Friss felt&ouml;lt&eacute;sek',
        'lastalb'=> 'Utolj&aacute;ra m&oacute;dos&iacute;tott albumok',
        'lastcom' => 'Friss hozz&aacute;sz&oacute;l&aacute;sok',
        'topn' => 'Legt&ouml;bbsz&ouml;r n&eacute;zett',
        'toprated' => 'Legt&ouml;bb szavazat',
        'lasthits' => 'Utolj&aacute;ra n&eacute;zett',
        'search' => 'Keres&eacute;s eredm&eacute;nye',
        'favpics'=> 'Kedvenc k&eacute;peim'
);

$lang_errors = array(
        'access_denied' => 'Nincs jogosults&aacute;ga ennek az oldalnak a megtekint&eacute;s&eacute;hez.',
        'perm_denied' => 'Nincs jogosults&aacute;ga ennek a m&ucirc;veletnek az elv&eacute;gz&eacute;s&eacute;hez.',
        'param_missing' => 'Szkript h&iacute;v&aacute;s a sz&uuml;ks&eacute;ge param&eacute;ter(ek) megad&aacute;sa n&eacute;lk&uuml;l.',
        'non_exist_ap' => 'A kijel&ouml;lt album / k&eacute;p nem tal&aacute;lhat&oacute;!',
        'quota_exceeded' => 'Diszk kv&oacute;ta t&uacute;ll&eacute;pve<br /><br />Az &Ouml;n diszkkv&oacute;t&aacute;ja [quota]K, k&eacute;pei &aacute;ltal jelenleg elfoglalt t&aacute;rhely [space]K, ennek a k&eacute;pnek a felt&ouml;lt&eacute;s&eacute;vel t&uacute;ll&eacute;pn&eacute; a kv&oacute;t&aacute;j&aacute;t.',
        'gd_file_type_err' => 'GD k&ouml;nyvt&aacute;r haszn&aacute;lata eset&eacute;n csak JPEG &eacute;s PNG t&iacute;pusok megengedettek.',
        'invalid_image' => 'A felt&ouml;lt&ouml;tt k&eacute;p s&eacute;r&uuml;lt, vagy a GD k&ouml;nyvt&aacute;r &aacute;ltal nem kezelhetõ',
        'resize_failed' => 'Nem siker&uuml;lt az ikoniz&aacute;lt vagy &aacute;rm&eacute;retezett k&eacute;pek gener&aacute;l&aacute;sa.',
        'no_img_to_display' => 'Nincs megjelen&iacute;thetõ k&eacute;p',
        'non_exist_cat' => 'A kijel&ouml;lt kateg&oacute;ria nem l&eacute;tezik',
        'orphan_cat' => 'A kateg&oacute;ria sz&uuml;lõkateg&oacute;ri&aacute;ja nem l&eacute;tezik, futtasd a kateg&oacute;riamenedzsert a probl&eacute;ma kik&uuml;sz&ouml;b&ouml;l&eacute;s&eacute;re.',
        'directory_ro' => 'A \'%s\' k&ouml;nyvt&aacute;r nem &iacute;rhat&oacute;, a k&eacute;peket nem lehet t&ouml;r&ouml;lni',
        'non_exist_comment' => 'A kijel&ouml;lt hozz&aacute;sz&oacute;l&aacute;s nem l&eacute;tezik.',
        'pic_in_invalid_album' => 'K&eacute;p nem l&eacute;tezo albumban (%s)!?',
        'banned' => 'Jelenleg ki vagy tiltva a weblap haszn&aacute;lat&aacute;b&oacute;l.',
        'not_with_udb' => 'Ez a funkci&oacute; le van tiltva a Coppermine-ban, mivel a f&oacute;rum sw r&eacute;sze. A k&eacute;rt funkci&oacute;t vagy nem t&aacute;mogatja a jelen konfigur&aacute;ci&oacute;, vagy a f&oacute;rum sw kezeli.',
);

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
        'alb_list_title' => 'Ugr&aacute;s az albumlist&aacute;ra',
        'alb_list_lnk' => 'Albumlista',
        'my_gal_title' => 'Ugr&aacute;s a szem&eacute;lyes k&eacute;pt&aacute;rra',
        'my_gal_lnk' => '&Eacute;n k&eacute;pt&aacute;ram',
        'my_prof_lnk' => '&Eacute;n profilom',
        'adm_mode_title' => 'V&aacute;lt&aacute;s adminisztr&aacute;tor m&oacute;dra',
        'adm_mode_lnk' => 'Adminisztr&aacute;tor m&oacute;d',
        'usr_mode_title' => 'V&aacute;lt&aacute;s felhaszn&aacute;l&oacute; m&oacute;dra',
        'usr_mode_lnk' => 'Felhaszn&aacute;l&oacute; m&oacute;d',
        'upload_pic_title' => 'K&eacute;p felt&ouml;lt&eacute;s az albumba',
        'upload_pic_lnk' => 'K&eacute;p felt&ouml;lt&eacute;se',
        'register_title' => 'Felhaszn&aacute;l&oacute; hozz&aacute;ad&aacute;sa',
        'register_lnk' => 'Regisztr&aacute;ci&oacute;',
        'login_lnk' => 'Bejelentkez&eacute;s',
        'logout_lnk' => 'Kijelentkez&eacute;s',
        'lastup_lnk' => 'Friss felt&ouml;lt&eacute;sek',
        'lastcom_lnk' => 'Friss hozz&aacute;sz&oacute;l&aacute;sok',
        'topn_lnk' => 'Legt&ouml;bbsz&ouml;r n&eacute;zett',
        'toprated_lnk' => 'Legt&ouml;bb szavazat',
        'search_lnk' => 'Keres&eacute;s',
        'fav_lnk' => 'Kedvencek',
);


$lang_gallery_admin_menu = array(
        'upl_app_lnk' => 'Felt&ouml;lt&eacute;s j&oacute;v&aacute;hagy&aacute;s',
        'config_lnk' => 'Konfigur&aacute;ci&oacute;',
        'albums_lnk' => 'Albumok',
        'categories_lnk' => 'Kateg&oacute;ri&aacute;k',
        'users_lnk' => 'Felhaszn&aacute;l&oacute;k',
        'groups_lnk' => 'Csoportok',
        'comments_lnk' => 'Hozz&aacute;sz&oacute;l&aacute;sok',
        'searchnew_lnk' => 'K&ouml;tegelt felt&ouml;lt&eacute;s',
        'util_lnk' => 'K&eacute;pek &aacute;tm&eacute;retez&eacute;se',
        'ban_lnk' => 'Ban Users',
);

$lang_user_admin_menu = array(
        'albmgr_lnk' => 'Szem&eacute;lyes albumok szerkeszt&eacute;se',
        'modifyalb_lnk' => 'Szem&eacute;lyes albumok tulajdons&aacute;gai',
        'my_prof_lnk' => '&Eacute;n profilom',
);

$lang_cat_list = array(
        'category' => 'Kateg&oacute;ria',
        'albums' => 'Albumok',
        'pictures' => 'K&eacute;pek',
);

$lang_album_list = array(
        'album_on_page' => '%d album %d oldalon'
);

$lang_thumb_view = array(
        'date' => 'D&Aacute;TUM',
        'name' => 'N&Eacute;V',
        'title' => 'K&eacute;p c&iacute;m',
        'sort_da' => 'D&aacute;tum szerinti sorrendez&eacute;s, n&ouml;vekvõ',
        'sort_dd' => 'D&aacute;tum szerinti sorrendez&eacute;s, cs&ouml;kkenõ',
        'sort_na' => 'N&eacute;v szerinti sorrendez&eacute;s, n&ouml;vekvõ',
        'sort_nd' => 'N&eacute;v szerinti sorrendez&eacute;s, cs&ouml;kkenõ',
        'sort_ta' => 'Sorrendez&eacute;s c&iacute;m szerint - n&ouml;vekvo',
        'sort_td' => 'Sorrendez&eacute;s c&iacute;m szerint - cs&ouml;kkeno,
        'pic_on_page' => '%d k&eacute;p %d oldalon',
        'user_on_page' => '%d felhaszn&aacute;l&oacute; %d oldalon'
);

$lang_img_nav_bar = array(
        'thumb_title' => 'Vissza az ikonos elrendez&eacute;sre',
        'pic_info_title' => 'K&eacute;p inform&aacute;ci&oacute; megtekint&eacute;se / elrejt&eacute;se',
        'slideshow_title' => 'Diavet&iacute;t&eacute;s',
        'ecard_title' => 'K&eacute;p elk&uuml;ld&eacute;se e-k&eacute;peslapk&eacute;nt',
        'ecard_disabled' => 'e-k&eacute;peslapok k&uuml;ld&eacute;se nem enged&eacute;lyezett',
        'ecard_disabled_msg' => 'Nincs jogosults&aacute;ga e-k&eacute;peslap k&uuml;ld&eacute;s&eacute;re',
        'prev_title' => 'Elõzõ k&eacute;p',
        'next_title' => 'K&ouml;vetkezõ k&eacute;p',
        'pic_pos' => 'K&Eacute;P %s/%s',
);

$lang_rate_pic = array(
        'rate_this_pic' => 'K&eacute;p oszt&aacute;lyoz&aacute;sa ',
        'no_votes' => '(M&eacute;g nincs oszt&aacute;lyozva)',
        'rating' => '(jelenlegi oszt&aacute;lyzat: %s, %s szavazattal)',
        'rubbish' => 'Vacak',
        'poor' => 'Gyenge',
        'fair' => 'Megfelelõ',
        'good' => 'J&oacute;',
        'excellent' => 'Kit&ucirc;nõ',
        'great' => 'Szuper',
);

// ------------------------------------------------------------------------- //
// File include/exif.inc.php
// ------------------------------------------------------------------------- //

// void

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) $lang_banning_php = array(
                'title' => 'Tiltott felhaszn&aacute;l&oacute;k',
                'user_name' => 'Felhaszn&aacute;l&oacute;n&eacute;v',
                'ip_address' => 'IP c&iacute;m',
                'expiry' => 'Lej&aacute;rat (&aacute;lland&oacute; eset&eacute;n &uuml;res marad)',
                'edit_ban' => 'M&oacute;dos&iacute;t&aacute;sok t&aacute;rol&aacute;sa',
                'delete_ban' => 'T&ouml;rl&eacute;s',
                'add_new' => '&Uacute;j tilt&aacute;s hozz&aacute;ad&aacute;sa',
                'add_ban' => 'Hozz&aacute;ad&aacute;s',
);

// ------------------------------------------------------------------------- //
// File include/functions.inc.php
// ------------------------------------------------------------------------- //

$lang_cpg_die = array(
        INFORMATION => $lang_info,
        ERROR => $lang_error,
        CRITICAL_ERROR => 'Kritikus hiba',
        'file' => 'F&aacute;jl: ',
        'line' => 'Sor: ',
);

$lang_display_thumbnails = array(
        'filename' => 'F&aacute;jln&eacute;v : ',
        'filesize' => 'F&aacute;jlm&eacute;ret : ',
        'dimensions' => 'M&eacute;retek : ',
        'date_added' => 'Felt&ouml;lt&eacute;s d&aacute;tuma : '
);

$lang_get_pic_data = array(
        'n_comments' => '%s komment&aacute;r',
        'n_views' => '%s megtekint&eacute;s',
        'n_votes' => '(%s szavazat)'
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
        'Exclamation' => 'Felki&aacute;lt&aacute;s',
        'Question' => 'K&eacute;rd&eacute;s',
        'Very Happy' => 'Nagyon boldog',
        'Smile' => 'Mosolyog',
        'Sad' => 'Azomor&uacute;',
        'Surprised' => 'Meglepett',
        'Shocked' => 'Sokkolt',
        'Confused' => 'Zavarodott',
        'Cool' => 'Higgadt',
        'Laughing' => 'Nevet',
        'Mad' => 'Õr&uuml;lt',
        'Razz' => 'G&uacute;nyos',
        'Embarassed' => 'K&iacute;nos',
        'Crying or Very sad' => 'Kiav&aacute;l / nagyon szomor&uacute;',
        'Evil or Very Mad' => 'Gonosz vagy õr&uuml;lt',
        'Twisted Evil' => 'Torz gonosz',
        'Rolling Eyes' => 'Gurul&oacute; szemek',
        'Wink' => 'Kacsint',
        'Idea' => '&Ouml;tlet',
        'Arrow' => 'Ny&iacute;l',
        'Neutral' => 'Semleges',
        'Mr. Green' => 'Mr. Z&ouml;ld',
);

// ------------------------------------------------------------------------- //
// File addpic.php
// ------------------------------------------------------------------------- //

// void

// ------------------------------------------------------------------------- //
// File admin.php
// ------------------------------------------------------------------------- //

if (defined('ADMIN_PHP')) $lang_admin_php = array(
        0 => 'Kil&eacute;p&eacute;s adminisztr&aacute;tor m&oacute;db&oacute;l...',
        1 => 'V&aacute;lt&aacute;s adminisztr&aacute;tor m&oacute;dra...',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
        'alb_need_name' => 'Albumokat el kell nevezni!',
        'confirm_modifs' => 'Biztos v&eacute;gre akarod hajtani ezt a m&oacute;dos&iacute;t&aacute;st?',
        'no_change' => 'Semmit nem v&aacute;ltoztatt&aacute;l!',
        'new_album' => '&Uacute;j album',
        'confirm_delete1' => 'Biztos t&ouml;rl&ouml;d az albumot?',
        'confirm_delete2' => '\nA tartalmazott &ouml;sszes k&eacute;p &eacute;s hozz&aacute;sz&oacute;l&aacute;s t&ouml;rlõdik!',
        'select_first' => 'Elõsz&ouml;r v&aacute;lassz albumot',
        'alb_mrg' => 'Albummenedzser',
        'my_gallery' => '* My gallery *',
        'no_category' => '* No category *',
        'delete' => 'T&ouml;rl&eacute;s',
        'new' => '&Uacute;j',
        'apply_modifs' => 'M&oacute;dos&iacute;t&aacute;sok v&eacute;grehajt&aacute;sa',
        'select_category' => 'V&aacute;lassz kateg&oacute;ri&aacute;t',
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
        'miss_param' => 'A \'%s\' m&ucirc;velethez sz&uuml;ks&eacute;ges param&eacute;terek hi&aacute;nyoznak!',
        'unknown_cat' => 'Nincs az adatb&aacute;zisban a kijel&ouml;lt kateg&oacute;ria ',
        'usergal_cat_ro' => 'A szem&eacute;lyes k&eacute;pt&aacute;rak nem t&ouml;r&ouml;lhetõk!',
        'manage_cat' => 'Kateg&oacute;ri&aacute;k menedzsel&eacute;se',
        'confirm_delete' => 'Biztosan t&ouml;rl&ouml;d ezt a kateg&oacute;ri&aacute;t',
        'category' => 'Kateg&oacute;ria',
        'operations' => 'M&ucirc;veletek',
        'move_into' => 'Mozgat&aacute;s a k&ouml;vetkezõbe',
        'update_create' => 'Kateg&oacute;ria l&eacute;trehoz&aacute;s / m&oacute;dos&iacute;t&aacute;s',
        'parent_cat' => 'Sz&uuml;lõ kateg&oacute;ria',
        'cat_title' => 'Kateg&oacute;ria megnevez&eacute;s',
        'cat_desc' => 'Kateg&oacute;ria le&iacute;r&aacute;sa'
);

// ------------------------------------------------------------------------- //
// File config.php
// ------------------------------------------------------------------------- //

if (defined('CONFIG_PHP')) $lang_config_php = array(
        'title' => 'Konfigur&aacute;ci&oacute;',
        'restore_cfg' => 'Gy&aacute;ri be&aacute;ll&iacute;t&aacute;sok',
        'save_cfg' => 'Konfigur&aacute;ci&oacute; t&aacute;rol&aacute;sa',
        'notes' => 'Megjegyz&eacute;sek',
        'info' => 'Inform&aacute;ci&oacute;',
        'upd_success' => 'Coppermine konfigur&aacute;ci&oacute; friss&iacute;tve',
        'restore_success' => 'Coppermine gy&aacute;ri be&aacute;ll&iacute;t&aacute;s vissza&aacute;ll&iacute;tva',
        'name_a' => 'N&eacute;v - n&ouml;vekvõ',
        'name_d' => 'N&eacute;v - cs&ouml;kkenõ',
        'title_a' => 'C&iacute;m szerint - n&ouml;vekvo',
        'title_d' => 'C&iacute;m szerint – cs&ouml;kkeno',
        'date_a' => 'D&aacute;tum n&ouml;vekvõ',
        'date_d' => 'D&aacute;tum cs&ouml;kkenõ'
);

if (defined('CONFIG_PHP')) $lang_config_data = array(
        '&Aacute;ltal&aacute;nos be&aacute;ll&iacute;t&aacute;sok',
        array('K&eacute;pt&aacute;r neve', 'gallery_name', 0),
        array('K&eacute;pt&aacute;r le&iacute;r&aacute;sa', 'gallery_description', 0),
        array('K&eacute;pt&aacute;r adminisztr&aacute;tor email c&iacute;me', 'gallery_admin_email', 0),
        array('Az e-k&eacute;peslapok  \'Tov&aacute;bbi k&eacute;pek\' linkj&eacute;hez tartoz&oacute; webc&iacute;m', 'ecards_more_pic_target', 0),
        array('Nyelv megad&aacute;sa', 'lang', 5),
        array('Megjelen&iacute;t&eacute;si t&eacute;ma', 'theme', 6),


        'Albumlista n&eacute;zet',
        array('Fõt&aacute;bl&aacute;zat sz&eacute;less&eacute;ge (pixel vagy %)', 'main_table_width', 0),
        array('Kateg&oacute;ri&aacute;k megjelen&iacute;tendõ sz&aacute;ma', 'subcat_level', 0),
        array('Oldalank&eacute;nt megjelen&iacute;tendõ albumok sz&aacute;ma', 'albums_per_page', 0),
        array('Albumlista oszlopainak sz&aacute;ma', 'album_list_cols', 0),
        array('Ikonok m&eacute;rete pixelben', 'alb_list_thumb_size', 0),
        array('A fõoldal tartalma', 'main_page_layout', 0),
        array('Elso szintu albumok ikonok megjelen&iacute;t&eacute;se a kateg&oacute;ri&aacute;kban','first_level',1),

        'Ikonlista n&eacute;zet',
        array('Oszlopok sz&aacute;ma az ikonlist&aacute;ban', 'thumbcols', 0),
        array('Sorok sz&aacute;ma az ikonlist&aacute;ban', 'thumbrows', 0),
        array('Megjelen&iacute;tendõ tab- f&uuml;lek maxim&aacute;lis sz&aacute;ma', 'max_tabs', 0),
        array('K&eacute;p le&iacute;r&aacute;s megjelen&iacute;t&eacute;s (a k&eacute;p c&iacute;m&eacute;n fel&uuml;l) az ikonok alatt', 'caption_in_thumbview', 1),
        array('Az ikon alatt megjelenjen -e a hozz&aacute;sz&oacute;l&aacute;sok sz&aacute;ma', 'display_comment_count', 1),
        array('K&eacute;pek alap&eacute;rtelmezett sorrendje', 'default_sort_order', 3),
        array('Szavazatok minimuma a \'legt&ouml;bbsz&ouml;r n&eacute;zett\' list&aacute;ra val&oacute; felker&uuml;l&eacute;shez', 'min_votes_for_rating', 0),

        'K&eacute;p-n&eacute;zet &eacute;s hozz&aacute;sz&oacute;l&aacute;s be&aacute;ll&iacute;t&aacute;sok',
        array('A k&eacute;p-n&eacute;zethez tartoz&oacute; t&aacute;bl&aacute;zat sz&eacute;less&eacute;ge (pixel vagy %)', 'picture_table_width', 0),
        array('K&eacute;pinform&aacute;ci&oacute;k l&aacute;that&oacute;k alap&eacute;rtelmez&eacute;sben', 'display_pic_info', 1),
        array('Tr&aacute;g&aacute;r szavak kisz&ucirc;r&eacute;se a hozz&aacute;sz&oacute;l&aacute;sokb&oacute;l', 'filter_bad_words', 1),
        array('Hangulatkarakterek enged&eacute;lyez&eacute;se a hozz&aacute;sz&oacute;l&aacute;sokban', 'enable_smilies', 1),
        array('A k&eacute;ple&iacute;r&aacute;s maxim&aacute;lis hossza', 'max_img_desc_length', 0),
        array('Maxim&aacute;lis karaktersz&aacute;m szavank&eacute;nt', 'max_com_wlength', 0),
        array('Sorok maxim&aacute;lis sz&aacute;ma hozz&aacute;sz&oacute;l&aacute;sonk&eacute;nt', 'max_com_lines', 0),
        array('Hozz&aacute;sz&oacute;l&aacute;sok maxim&aacute;lis hossza', 'max_com_size', 0),
        array('Filmcs&iacute;k megjelen&iacute;t&eacute;se', 'display_film_strip', 1),
        array('K&eacute;pkock&aacute;k sz&aacute;ma a filmcs&iacute;kban', 'max_film_strip_items', 0),

        'Pictures and thumbnails settings',
        array('Quality for JPEG files', 'jpeg_qual', 0),
        array('Max dimension of a thumbnail <b>*</b>', 'thumb_width', 0),
        array('Use dimension ( width or height or Max aspect for thumbnail )<b>*</b>', 'thumb_use', 7),
        array('Create intermediate pictures','make_intermediate',1),
        array('Max width or height of an intermediate picture <b>*</b>', 'picture_width', 0),
        array('Max size for uploaded pictures (KB)', 'max_upl_size', 0),
        array('Max width or height for uploaded pictures (pixels)', 'max_upl_width_height', 0),

        'Felhaszn&aacute;l&oacute; be&aacute;ll&iacute;t&aacute;sok',
        array('&Uacute;j felhaszn&aacute;l&oacute;k regisztr&aacute;lhatnak', 'allow_user_registration', 1),
        array('Regisztr&aacute;ci&oacute; email nyugt&aacute;hoz k&ouml;t&ouml;tt', 'reg_requires_valid_email', 1),
        array('K&eacute;t felhaszn&aacute;l&oacute;nak lehet azonos email c&iacute;me', 'allow_duplicate_emails_addr', 1),
        array('Felhaszn&aacute;l&oacute;knak lehetnek priv&aacute;t albumai', 'allow_private_albums', 1),

        'Saj&aacute;t mezõk a k&eacute;pek le&iacute;r&aacute;s&aacute;hoz (hagyd &uuml;resen, ha nem haszn&aacute;lod)',
        array('1. mezõn&eacute;v', 'user_field1_name', 0),
        array('2. mezõn&eacute;v', 'user_field2_name', 0),
        array('3. mezõn&eacute;v', 'user_field3_name', 0),
        array('4. mezõn&eacute;v', 'user_field4_name', 0),

        'K&eacute;pek &eacute;s ikonok k&uuml;l&ouml;nleges be&aacute;ll&iacute;t&aacute;sai',
        array('Priv&aacute;t album ikon megjelen&iacute;t&eacute;se be nem jelentkezett felhaszn&aacute;l&oacute; eset&eacute;n','show_private',1),
        array('F&aacute;jln&eacute;vben tiltott karakterek', 'forbiden_fname_char',0),
        array('F&aacute;jlnevek megengedett kiterjeszt&eacute;sei', 'allowed_file_extensions',0),
        array('K&eacute;pek &aacute;tm&eacute;retez&eacute;s&eacute;hez haszn&aacute;lt m&oacute;dszer','thumb_method',2),
        array('ImageMagick \'convert\' programj&aacute;hoz vezetõ &uacute;tvonal  (pld. /usr/bin/X11/)', 'impath', 0),
        array('Megengedett k&eacute;pfajt&aacute;k (csak ImageMagick eset&eacute;ben)', 'allowed_img_types',0),
        array('Parancssor opci&oacute;k ImageMagick-hoz', 'im_options', 0),
        array('EXIF adatok olvas&aacute;sa  JPEG f&aacute;jlokban', 'read_exif_data', 1),
        array('Album el&eacute;r&eacute;si &uacute;tvonala <b>*</b>', 'fullpath', 0),
        array('Felhaszn&aacute;l&oacute;i k&eacute;pek el&eacute;r&eacute;si &uacute;tvonala <b>*</b>', 'userpics', 0),
        array('K&ouml;z&eacute;pm&eacute;retezett k&eacute;pek elõtagja <b>*</b>', 'normal_pfx', 0),
        array('Ikonf&aacute;jlok elõtagja <b>*</b>', 'thumb_pfx', 0),
        array('K&ouml;nyvt&aacute;rak alap&eacute;rtelmezett jogosults&aacute;g be&aacute;ll&iacute;t&aacute;sa', 'default_dir_mode', 0),
        array('K&eacute;pek alap&eacute;rtelmezett jogosults&aacute;g be&aacute;ll&iacute;t&aacute;sa', 'default_file_mode', 0),
        array('Jobb eg&eacute;rklikk tilt&aacute;s teljes m&eacute;retu ablakn&aacute;l (JavaScript – nem h&uuml;lyes&eacute;gv&eacute;dett elj&aacute;r&aacute;s)', 'disable_popup_rightclick', 1),
        array('Jobb eg&eacute;rklikk tilt&aacute;s minden „norm&aacute;lis” oldalakn&aacute;l (JavaScript - nem h&uuml;lyes&eacute;gv&eacute;dett elj&aacute;r&aacute;s)', 'disable_gallery_rightclick', 1),

        'Cooky &eacute;s karakterk&eacute;szlet be&aacute;ll&iacute;t&aacute;sok',
        array('A szkript &aacute;ltal haszn&aacute;lt cookyn&eacute;v', 'cookie_name', 0),
        array('A szkript &aacute;ltal haszn&aacute;lt cooky &uacute;tvonala', 'cookie_path', 0),
        array('Karakter k&oacute;dol&aacute;s', 'charset', 4),

        'Egy&eacute;b be&aacute;ll&iacute;t&aacute;sok',
        array('Debug m&oacute;d enged&eacute;lyez&eacute;se', 'debug_mode', 1),

        '<br /><div align="center">(*) * -gal jel&ouml;lt mezõket nem szabad megv&aacute;ltoztatni, ha m&aacute;r nem &uuml;res a k&eacute;pt&aacute;r</div><br />'
);

// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
        'empty_name_or_com' => 'Meg kell adnia a nev&eacute;t &eacute;s egy hozz&aacute;sz&oacute;l&aacute;st',
        'com_added' => 'Hozz&aacute;sz&oacute;l&aacute;s&aacute;t r&ouml;gz&iacute;tett&uuml;k',
        'alb_need_title' => 'Adjon nevet az albumnak!',
        'no_udp_needed' => 'Nincs mit m&oacute;dos&iacute;tani.',
        'alb_updated' => 'Az album m&oacute;dos&iacute;t&aacute;sa megt&ouml;rt&eacute;nt',
        'unknown_album' => 'A kiv&aacute;lasztott album nem l&eacute;tezik, vagy nincs felt&ouml;lt&eacute;si jogosults&aacute;ga az albumhoz',
        'no_pic_uploaded' => 'Nem t&ouml;rt&eacute;nt felt&ouml;lt&eacute;s!<br /><br />Ha t&eacute;nyleg kijel&ouml;lt felt&ouml;lt&eacute;sre k&eacute;pet, ellenõrizze, hogy a szerveren megengedett -e a felt&ouml;lt&eacute;s...',
        'err_mkdir' => 'Nem siker&ouml;lt a k&ouml;nyvt&aacute;r l&eacute;trehoz&aacute;sa %s !',
        'dest_dir_ro' => 'A szkript nem &iacute;rhat a %s c&eacute;lk&ouml;nyvt&aacute;rba!',
        'err_move' => 'Nem mozgathat&oacute; %s %s -be!',
        'err_fsize_too_large' => 'A felt&ouml;lt&ouml;tt k&eacute;p m&eacute;rete t&uacute;l nagy (maximum megengedett: %s x %s)!',
        'err_imgsize_too_large' => 'A felt&ouml;lt&ouml;tt f&aacute;jl m&eacute;rete t&uacute;l nagy (maximum megengedett: %s KB) !',
        'err_invalid_img' => 'A felt&ouml;lt&ouml;tt f&aacute;jl nem egy &eacute;rv&eacute;nyes k&eacute;pform&aacute;tum !',
        'allowed_img_types' => 'Csak %s k&eacute;p felt&ouml;lt&eacute;se megengedett.',
        'err_insert_pic' => 'A \'%s\' k&eacute;p nem adhat&oacute; hozz&aacute; az albumhoz ',
        'upload_success' => 'A k&eacute;p felt&ouml;lt&eacute;se sikeres volt<br /><br />J&oacute;v&aacute;hagy&aacute;s ut&aacute;n l&aacute;that&oacute; lesz.',
        'info' => 'Inform&aacute;ci&oacute;',
        'com_added' => 'Komment&aacute;r hozz&aacute;ad&aacute;sa megt&ouml;rt&eacute;nt',
        'alb_updated' => 'Album m&oacute;dos&iacute;tva',
        'err_comment_empty' => 'Nem adott meg komment&aacute;rt !',
        'err_invalid_fext' => 'Csak a k&ouml;vetkezõ kiterjeszt&eacute;s&ucirc; f&aacute;jlok megengedettek: <br /><br />%s.',
        'no_flood' => '&Ouml;n m&aacute;r hozz&aacute;sz&oacute;lt a k&eacute;phez.<br /><br />Szerkessze az elõzõ hozz&aacute;sz&oacute;l&aacute;s&aacute;t, ha sz&uuml;ks&eacute;ges',
        'redirect_msg' => '&Aacute;tir&aacute;ny&iacute;t&aacute;s folyamatban.<br /><br /><br />Nyomja meg a \'CONTINUE\'-t, ha a k&eacute;p nem friss&uuml;l automatikusan',
        'upl_success' => 'K&eacute;pe sikeresen hozz&aacute;ad&aacute;sra ker&uuml;lt',
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
        'caption' => 'K&eacute;pal&aacute;&iacute;r&aacute;s',
        'fs_pic' => 'teljes m&eacute;ret&ucirc; k&eacute;p',
        'del_success' => 't&ouml;rl&eacute;s sikeres',
        'ns_pic' => 'norm&aacute;l m&eacute;ret&ucirc; k&eacute;p',
        'err_del' => 'nem lehet t&ouml;r&ouml;lni',
        'thumb_pic' => 'ikon',
        'comment' => 'megjegyz&eacute;s',
        'im_in_alb' => 'k&eacute;p az albumban',
        'alb_del_success' => 'Album \'%s\' t&ouml;r&ouml;lve',
        'alb_mgr' => 'Albummenedzser',
        'err_invalid_data' => '&Eacute;rv&eacute;nytelen adat a k&ouml;vetkezõben \'%s\'',
        'create_alb' => 'Album gener&aacute;l&aacute;sa \'%s\'',
        'update_alb' => 'Album m&oacute;dos&iacute;t&aacute;s \'%s\' n&eacute;v: \'%s\' index: \'%s\'',
        'del_pic' => 'K&eacute;p t&ouml;rl&eacute;se',
        'del_alb' => 'Album t&ouml;rl&eacute;se',
        'del_user' => 'Felhaszn&aacute;l&oacute; t&ouml;rl&eacute;se',
        'err_unknown_user' => 'A kijel&ouml;lt felhaszn&aacute;l&oacute; nem l&eacute;tezik !',
        'comment_deleted' => 'A megjegyz&eacute;st sikeresen t&ouml;r&ouml;lt&uuml;k',
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
        'confirm_del' => 'Biztosan t&ouml;r&ouml;lni akarja ezt a k&eacute;pet? \\nA hozz&aacute;sz&oacute;l&aacute;sok is t&ouml;rlõdnek.',
        'del_pic' => 'A K&Eacute;P T&Ouml;RL&Eacute;SE',
        'size' => '%s x %s pixel',
        'views' => '%s',
        'slideshow' => 'Diavet&iacute;t&eacute;s',
        'stop_slideshow' => 'DIAVET&Iacute;T&Eacute;S V&Eacute;GE',
        'view_fs' => 'Teljes m&eacute;ret&ucirc; k&eacute;p megtekint&eacute;se',
);

$lang_picinfo = array(
        'title' =>'K&eacute;p inform&aacute;ci&oacute;',
        'Filename' => 'F&aacute;jln&eacute;v',
        'Album name' => 'Album n&eacute;v',
        'Rating' => 'Oszt&aacute;lyoz&aacute;s (%s szavazat)',
        'Keywords' => 'Kulcsszavak',
        'File Size' => 'F&aacute;jlm&eacute;ret',
        'Dimensions' => 'M&eacute;retek',
        'Displayed' => 'Megtekint&eacute;sek sz&aacute;ma',
        'Camera' => 'Kamera',
        'Date taken' => 'Felv&eacute;tel d&aacute;tuma',
        'Aperture' => 'Apert&uacute;ra',
        'Exposure time' => 'Expoz&iacute;ci&oacute; idõpontja',
        'Focal length' => 'F&oacute;kuszt&aacute;vols&aacute;g',
        'Comment' => 'Megjegyz&eacute;s',
        'addFav'=>'Hozz&aacute;ad&aacute;s a kedvencekhez',
        'addFavPhrase'=>'Kedvencek',
        'remFav'=>'Kiv&eacute;tel kedvencekbol',
);

$lang_display_comments = array(
        'OK' => 'OK',
        'edit_title' => 'Hozz&aacute;sz&oacute;l&aacute;s szerkeszt&eacute;se',
        'confirm_delete' => 'Biztos t&ouml;r&ouml;lni k&iacute;v&aacute;nja a hozz&aacute;sz&oacute;l&aacute;st?',
        'add_your_comment' => 'Hozz&aacute;sz&oacute;l&aacute;s hozz&aacute;f&ucirc;z&eacute;se',
        'name'=>'N&eacute;v',
        'comment'=>'Megjegyz&eacute;s',
        'your_name' => 'Anon',
);

$lang_fullsize_popup = array(
        'click_to_close' => 'Klikkelj a k&eacute;pre az ablak bez&aacute;r&aacute;s&aacute;hoz',
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
        'title' => 'E-k&eacute;peslap k&uuml;ld&eacute;se',
        'invalid_email' => '<b>Figyelmeztet&eacute;s</b> : &eacute;rv&eacute;nytelen e-mail c&iacute;m!',
        'ecard_title' => 'Egy e-k&eacute;peslap %s -t&oacute;l &Ouml;nnek',
        'view_ecard' => 'Ha az e-k&eacute;peslap nem jelenik meg helyesen, klikkelj a k&ouml;vetkezõ linkre',
        'view_more_pics' => 'Klikkelj erre a linkre tov&aacute;bbi k&eacute;pek megtekint&eacute;s&eacute;hez!',
        'send_success' => 'E-k&eacute;peslapj&aacute;t tov&aacute;bb&iacute;tottuk',
        'send_failed' => 'Sajn&aacute;lom, de a szerver nem tud e-k&eacute;peslapot k&uuml;ldeni...',
        'from' => 'Felad&oacute;',
        'your_name' => 'Neve',
        'your_email' => 'E-mail c&iacute;me',
        'to' => 'C&iacute;mzett',
        'rcpt_name' => 'C&iacute;mzett neve',
        'rcpt_email' => 'C&iacute;mzett e-mail c&iacute;me',
        'greetings' => '&Uuml;dv&ouml;zlet',
        'message' => '&Uuml;zenet',
);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
        'pic_info' => 'K&eacute;p inform&aacute;ci&oacute;',
        'album' => 'Album',
        'title' => 'C&iacute;m',
        'desc' => 'Le&iacute;r&aacute;s',
        'keywords' => 'Kulcsszavak',
        'pic_info_str' => '%sx%s - %sKB - %s megtekint&eacute;s - %s szavazat',
        'approve' => 'K&eacute;p j&oacute;v&aacute;hagy&aacute;sa',
        'postpone_app' => 'J&oacute;v&aacute;hagy&aacute;s k&eacute;sõbb',
        'del_pic' => 'K&eacute;p t&ouml;rl&eacute;s',
        'reset_view_count' => 'N&eacute;zetts&eacute;gsz&aacute;ml&aacute;l&oacute; null&aacute;z&aacute;sa',
        'reset_votes' => 'Szavazatsz&aacute;ml&aacute;l&oacute; alaphelyzetbe',
        'del_comm' => 'Hozz&aacute;sz&oacute;l&aacute;sok t&ouml;rl&eacute;se',
        'upl_approval' => 'Felt&ouml;lt&eacute;s j&oacute;v&aacute;hagy&aacute;s',
        'edit_pics' => 'K&eacute;pek rendez&eacute;se',
        'see_next' => 'K&ouml;vetkezõ k&eacute;p',
        'see_prev' => 'Elõzõ k&eacute;p',
        'n_pic' => '%s k&eacute;p',
        'n_of_pic_to_disp' => 'K&eacute;p / oldal',
        'apply' => 'M&oacute;dos&iacute;t&aacute;sok v&eacute;grehajt&aacute;sa'
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
        'group_name' => 'Csoport megnevez&eacute;se',
        'disk_quota' => 'Diszk kv&oacute;ta',
        'can_rate' => 'Oszt&aacute;lyozhat k&eacute;peket',
        'can_send_ecards' => 'K&uuml;ldhet e-k&eacute;peslapot',
        'can_post_com' => 'Hozz&aacute;sz&oacute;l&aacute;st k&uuml;ldhet',
        'can_upload' => 'Felt&ouml;lthet k&eacute;peket',
        'can_have_gallery' => 'Lehet szem&eacute;lyes k&eacute;pt&aacute;ra',
        'apply' => 'M&oacute;dos&iacute;t&aacute;sok v&eacute;grehajt&aacute;sa',
        'create_new_group' => '&Uacute;j csoport l&eacute;trehoz&aacute;sa',
        'del_groups' => 'Kijel&ouml;lt csoport(ok) t&ouml;rl&eacute;se ',
        'confirm_del' => 'Figyelmeztet&eacute;s, ha t&ouml;r&ouml;l egy csoportot, a hozz&aacute; tartoz&oacute; felhaszn&aacute;l&oacute;k &aacute;thelyezõdnek a \'Registered\' csoportba !\n\nFolytatja ?',
        'title' => 'Felhaszn&aacute;l&oacute;csoportok menedzsel&eacute;se',
        'approval_1' => 'Nyilv&aacute;nos felt&ouml;lt&eacute;s j&oacute;v&aacute;hagy&aacute;s (1)',
        'approval_2' => 'Priv&aacute;t felt&ouml;lt&eacute;s j&oacute;v&aacute;hagy&aacute;s (2)',
        'note1' => '<b>(1)</b> A nyilv&aacute;nos albumba t&ouml;rt&eacute;nõ felt&ouml;lt&eacute;s adminisztr&aacute;tori j&oacute;v&aacute;hagy&aacute;st ig&eacute;nyel',
        'note2' => '<b>(2)</b> A felhaszn&aacute;l&oacute; album&aacute;ba t&ouml;rt&eacute;nõ felt&ouml;lt&eacute;s adminisztr&aacute;tori j&oacute;v&aacute;hagy&aacute;st ig&eacute;nyel',
        'notes' => 'Megjegyz&eacute;sek'
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
        'welcome' => '&Uuml;dv&ouml;z&ouml;llek!'
);

$lang_album_admin_menu = array(
        'confirm_delete' => 'Biztos t&ouml;r&ouml;lni akarod az albumot? \\nMinden k&eacute;p &eacute;s hozz&aacute;sz&oacute;l&aacute;s is t&ouml;rlõdik!',
        'delete' => 'T&Ouml;RL&Eacute;S',
        'modify' => 'TULAJDONS&Aacute;GOK',
        'edit_pics' => 'SZERKESZT&Eacute;S',
);

$lang_list_categories = array(
        'home' => 'Home',
        'stat1' => '<b>[pictures]</b> k&eacute;p <b>[albums]</b> albumban &eacute;s <b>[cat]</b> kateg&oacute;ri&aacute;ban <b>[comments]</b> hozz&aacute;sz&oacute;l&aacute;ssal, megtekint&eacute;sek sz&aacute;ma: <b>[views]</b>',
        'stat2' => '<b>[pictures]</b> k&eacute;p <b>[albums]</b> albumban, megtekint&eacute;sek sz&aacute;ma: <b>[views]</b>',
        'xx_s_gallery' => '%s k&eacute;pt&aacute;ra',
        'stat3' => '<b>[pictures]</b> k&eacute;p <b>[albums]</b> albumban <b>[comments]</b> hozz&aacute;sz&oacute;l&aacute;ssal, megtekint&eacute;sek sz&aacute;ma: <b>[views]</b>'
);

$lang_list_users = array(
        'user_list' => 'Felhaszn&aacute;l&oacute;k list&aacute;ja',
        'no_user_gal' => 'Nincs felhaszn&aacute;l&oacute; a k&eacute;pt&aacute;rban',
        'n_albums' => '%s album(ok)',
        'n_pics' => '%s k&eacute;p(ek)'
);

$lang_list_albums = array(
        'n_pictures' => '%s k&eacute;p',
        'last_added' => ', utols&oacute; felt&ouml;lt&eacute;s: %s'
);

}

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
        'login' => 'Bejelentkez&eacute;s',
        'enter_login_pswd' => 'Adja meg felhaszn&aacute;l&oacute;nev&eacute;t &eacute;s jelszav&aacute;t a bejelentkez&eacute;shez',
        'username' => 'Felhaszn&aacute;l&oacute;n&eacute;v',
        'password' => 'Jelsz&oacute;',
        'remember_me' => 'Jelsz&oacute; t&aacute;rol&aacute;sa',
        'welcome' => '&Uuml;dv&ouml;z&ouml;llek %s ...',
        'err_login' => '*** A bejelentkez&eacute;s sikertelen, pr&oacute;b&aacute;lja &uacute;jra ***',
        'err_already_logged_in' => 'M&aacute;r bejelentkezett!',
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
        'logout' => 'Kijelentkez&eacute;s',
        'bye' => 'Viszontl&aacute;t&aacute;sra %s ...',
        'err_not_loged_in' => 'Nincs bejelentkezve!',
);

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
        'upd_alb_n' => 'Album m&oacute;dos&iacute;t&aacute;sa %s',
        'general_settings' => '&Aacute;ltal&aacute;nos be&aacute;ll&iacute;t&aacute;sok',
        'alb_title' => 'Album c&iacute;m',
        'alb_cat' => 'Album kateg&oacute;ria',
        'alb_desc' => 'Album le&iacute;r&aacute;s',
        'alb_thumb' => 'Album ikon',
        'alb_perm' => 'Album jogosults&aacute;gok',
        'can_view' => 'Albumoz l&aacute;thatja: ',
        'can_upload' => 'L&aacute;togat&oacute;k felt&ouml;lthetnek k&eacute;pet',
        'can_post_comments' => 'L&aacute;togat&oacute;k k&uuml;ldhetnek hozz&aacute;sz&oacute;l&aacute;sokat',
        'can_rate' => 'L&aacute;togat&oacute;k oszt&aacute;lyozhatj&aacute;k a k&eacute;peket',
        'user_gal' => 'Felhaszn&aacute;l&oacute;i k&eacute;pt&aacute;r',
        'no_cat' => '* No category *',
        'alb_empty' => 'Album &uuml;res',
        'last_uploaded' => 'Utolj&aacute;ra felt&ouml;lt&ouml;tt',
        'public_alb' => 'Mindenki (nyilv&aacute;nos album)',
        'me_only' => 'Csak &eacute;n',
        'owner_only' => 'Csak a (%s) album tulajdonosa',
        'groupp_only' => 'Csak a \'%s\' csoport tagjai',
        'err_no_alb_to_modify' => 'Nincs m&oacute;dos&iacute;that&oacute; album az adatb&aacute;zisban.',
        'update' => 'Album m&oacute;dos&iacute;t&aacute;sa'
);

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
        'already_rated' => 'Sajn&aacute;lom, de &Ouml;n m&aacute;r oszt&aacute;lyozta ezt a k&eacute;pet',
        'rate_ok' => 'Oszt&aacute;lyzat&aacute;t elfogadtuk',
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
B&aacute;r a {SITE_NAME} adminisztr&aacute;tora mindent elk&ouml;vet, hogy amilyen gyorsan csak lehet, szerkesszen vagy t&ouml;r&ouml;lj&ouml;n minden kifog&aacute;solhat&oacute; dokumentumot, lehetetlen minden k&uuml;ldem&eacute;ny ellenõrz&eacute;se. K&eacute;rj&uuml;k ez&eacute;rt meg&eacute;rt&eacute;s&eacute;t, hogy minden erre a weblapra c&iacute;mzett k&uuml;ldem&eacute;ny annak szerzõje n&eacute;zet&eacute;t &eacute;s v&eacute;lem&eacute;ny&eacute;t fejezi ki, &eacute;s nem az adminisztr&aacute;tor&eacute;t, illetve webmester&eacute;t (kiv&eacute;ve az &aacute;ltaluk post&aacute;zott k&uuml;ldem&eacute;nyeket). Enn&eacute;l fogva nem tudunk &eacute;rt&uuml;k felelõss&eacute;get v&aacute;llalni.<br />
<br />
Elfogadja, hogy nem post&aacute;z semmilyen s&eacute;rtõ, obszc&eacute;n, vulg&aacute;ris, r&aacute;galmaz&oacute;, gy&ucirc;l&ouml;lk&ouml;dõ, fenyegetõ, szexu&aacute;lis tartalm&uacute;, vagy b&aacute;rmilyen m&aacute;s olyan tartalm&uacute; anyagot, amely &eacute;rv&eacute;nyes t&ouml;rv&eacute;nyt s&eacute;rt. Elfogadja, hogy a {SITE_NAME} webmester&eacute;nek, adminisztr&aacute;tor&aacute;nak, vagy moder&aacute;tor&aacute;nak b&aacute;rmikor jog&aacute;ban &aacute;ll b&aacute;rmilyen tartalmat sz&uuml;ks&eacute;g eset&eacute;n t&ouml;r&ouml;lni, vagy szerkeszteni. Mint felhaszn&aacute;l&oacute; egyet&eacute;rt a k&ouml;z&ouml;lt inform&aacute;ci&oacute;k adatb&aacute;zisban t&ouml;rt&eacute;nõ t&aacute;rol&aacute;s&aacute;hoz. B&aacute;r a webmester, illetve adminisztr&aacute;tor nem adja ki harmadik feleknek ezeket az inform&aacute;ci&oacute;kat az &Ouml;n hozz&aacute;j&aacute;rul&aacute;sa n&eacute;lk&uuml;l, nem tehetõ felelõss&eacute; semmilyen olyan hekker k&iacute;s&eacute;rlet&eacute;rt, melyek az adatok kompromitt&aacute;l&aacute;s&aacute;hoz vezet.<br />
<br />
Ez a weblap cooky form&aacute;j&aacute;ban inform&aacute;ci&oacute;t t&aacute;rol a sz&aacute;m&iacute;t&oacute;g&eacute;p&eacute;n. Ezek a cooky-k csak azt a c&eacute;lt szolg&aacute;lj&aacute;k, hogy fokozz&aacute;k a n&eacute;zhetõs&eacute;gi &eacute;lm&eacute;nyt. Az email c&iacute;m csak az &Ouml;n regisztr&aacute;ci&oacute;s adatainak &eacute;s jelszav&aacute;nak nyugt&aacute;z&aacute;s&aacute;ra szolg&aacute;l.<br />
<br />
Az 'Egyet&eacute;rtek'-re klikkelve &Ouml;n elfogadja ezeket felt&eacute;teleket.
EOT;

$lang_register_php = array(
        'page_title' => 'Felhaszn&aacute;l&oacute; regisztr&aacute;ci&oacute;',
        'term_cond' => 'Regisztr&aacute;ci&oacute;s felt&eacute;telek',
        'i_agree' => 'Egyet&eacute;rtek',
        'submit' => 'Regisztr&aacute;l&aacute;s',
        'err_user_exists' => 'A megadott felhaszn&aacute;l&oacute;n&eacute;v m&aacute;r l&eacute;tezik, adjon meg m&aacute;sikat',
        'err_password_mismatch' => 'A k&eacute;t jelsz&oacute; nem egyezik, adja meg &uacute;jra',
        'err_uname_short' => 'A felhaszn&aacute;l&oacute;n&eacute;v legal&aacute;bb 2 karakter hossz&uacute; kell, hogy legyen',
        'err_password_short' => 'A jelsz&oacute; legal&aacute;bb 2 karakter hossz&uacute; kell, hogy legyen',
        'err_uname_pass_diff' => 'A felhaszn&aacute;l&oacute;n&eacute;vnek &eacute;s a jelsz&oacute;nak k&uuml;l&ouml;nb&ouml;znie kell',
        'err_invalid_email' => '&Eacute;rv&eacute;nytelen email c&iacute;m',
        'err_duplicate_email' => 'Egy m&aacute;sik felhaszn&aacute;l&oacute; m&aacute;r regisztr&aacute;lt ezzel az email c&iacute;mmel',
        'enter_info' => 'Regisztr&aacute;ci&oacute;s inform&aacute;ci&oacute;k megad&aacute;sa',
        'required_info' => 'K&ouml;telezõ adat',
        'optional_info' => 'Opcion&aacute;lis adat',
        'username' => 'Felhaszn&aacute;l&oacute;n&eacute;v',
        'password' => 'Jelsz&oacute;',
        'password_again' => 'Jelsz&oacute; m&eacute;g egyszer',
        'email' => 'Email',
        'location' => 'Lok&aacute;ci&oacute;',
        'interests' => '&Eacute;rdeklõd&eacute;si k&ouml;r',
        'website' => 'Honlap',
        'occupation' => 'Foglalkoz&aacute;s',
        'error' => 'HIBA',
        'confirm_email_subject' => '%s - Regisztr&aacute;ci&oacute; nyugt&aacute;z&aacute;sa',
        'information' => 'Inform&aacute;ci&oacute;',
        'failed_sending_email' => 'A regisztr&aacute;ci&oacute;s nyugta emailt nem siker&uuml;lt elk&uuml;ldeni !',
        'thank_you' => 'K&ouml;sz&ouml;nj&uuml;k, hogy regisztr&aacute;lt.<br /><br />K&uuml;ldt&uuml;nk egy emailt a megadott emailc&iacute;mre amiben megadtuk, hogy hogyan aktiv&aacute;lhatja felhaszn&aacute;l&oacute;i hozz&aacute;f&eacute;r&eacute;s&eacute;t.',
        'acct_created' => 'Felhaszn&aacute;l&oacute;i hozz&aacute;f&eacute;r&eacute;s&eacute;t l&eacute;trehoztuk &eacute;s bejelentkezhet a felhaszn&aacute;l&oacute;nev&eacute;vel &eacute;s jelszav&aacute;val',
        'acct_active' => 'Felhaszn&aacute;l&oacute;i hozz&aacute;f&eacute;r&eacute;s&eacute;t aktiv&aacute;ltuk &eacute;s bejelentkezhet a felhaszn&aacute;l&oacute;nev&eacute;vel &eacute;s jelszav&aacute;val',
        'acct_already_act' => 'Felhaszn&aacute;l&oacute;i hozz&aacute;f&eacute;r&eacute;se m&aacute;r akt&iacute;v !',
        'acct_act_failed' => 'Ezt a felhaszn&aacute;l&oacute;i hozz&aacute;f&eacute;r&eacute;st nem lehet aktiv&aacute;lni !',
        'err_unk_user' => 'A kiv&aacute;lasztott felhaszn&aacute;l&oacute; nem l&eacute;tezik !',
        'x_s_profile' => '%s profilja',
        'group' => 'Csoport',
        'reg_date' => 'Csatlakozott',
        'disk_usage' => 'T&aacute;rfelhaszn&aacute;l&aacute;sa',
        'change_pass' => 'Jelsz&oacute; megv&aacute;ltoztat&aacute;sa',
        'current_pass' => 'Jelenlegi jelsz&oacute;',
        'new_pass' => '&Uacute;j jelsz&oacute;',
        'new_pass_again' => '&Uacute;j jelsz&oacute; m&eacute;g egyszer',
        'err_curr_pass' => 'Jelenlegi jelsz&oacute; hib&aacute;s',
        'apply_modif' => 'M&oacute;dos&iacute;t&aacute;sok v&eacute;grehajt&aacute;sa',
        'change_pass' => 'Jelsz&oacute; megv&aacute;ltoztat&aacute;sa',
        'update_success' => 'Profilj&aacute;t aktualiz&aacute;ltuk',
        'pass_chg_success' => 'Jelszav&aacute;t megv&aacute;ltoztattuk',
        'pass_chg_error' => 'Jelszav&aacute;t nem v&aacute;ltoztattuk meg',
);

$lang_register_confirm_email = <<<EOT
K&ouml;sz&ouml;nj&uuml;k, hogy regisztr&aacute;lt '{SITE_NAME}' weblapunkon

Felhaszn&aacute;l&oacute;neve : "{USER_NAME}"
Jelszava : "{PASSWORD}"

Felhazn&aacute;l&oacute;i hozz&aacute;f&eacute;r&eacute;se aktiv&aacute;l&aacute;s&aacute;hoz az al&aacute;bbi linkre kell klikkelnie.

{ACT_LINK}

&Uuml;dv&ouml;zlettel,

A '{SITE_NAME}' adminisztr&aacute;tora

EOT;

}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
        'title' => 'Hozz&aacute;sz&oacute;l&aacute;sok megtekint&eacute;se',
        'no_comment' => 'Nincs hozz&aacute;sz&oacute;l&aacute;s',
        'n_comm_del' => '%s hozz&aacute;sz&oacute;l&aacute;s(ok) t&ouml;r&ouml;lve',
        'n_comm_disp' => 'Megjelen&iacute;tendõ hozz&aacute;sz&oacute;l&aacute;sok sz&aacute;ma',
        'see_prev' => 'Elõzõ',
        'see_next' => 'K&ouml;vetkezõ',
        'del_comm' => 'Kijel&ouml;lt hozz&aacute;sz&oacute;l&aacute;sok t&ouml;r&ouml;lve',
);


// ------------------------------------------------------------------------- //
// File search.php - OK
// ------------------------------------------------------------------------- //

if (defined('SEARCH_PHP')) $lang_search_php = array(
        0 => 'Keres&eacute;s a k&eacute;pt&aacute;rban',
);

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
        'page_title' => '&Uacute;j k&eacute;p keres&eacute;se',
        'select_dir' => 'K&ouml;nyvt&aacute;r v&aacute;laszt&aacute;sa',
        'select_dir_msg' => 'Ez a funkci&oacute; lehetõv&eacute; teszi egy k&ouml;teg - FTP-vel a szerverre m&aacute;solt - k&eacute;p hozz&aacute;ad&aacute;s&aacute;t a k&eacute;pt&aacute;rhoz.<br /><br />V&aacute;laszd ki a k&ouml;nyvt&aacute;rat, ahonnan hozz&aacute; akarsz adni a k&eacute;pt&aacute;rhoz k&eacute;peket',
        'no_pic_to_add' => 'Nincs hozz&aacute;adhat&oacute; k&eacute;p',
        'need_one_album' => 'Ehhez a funkci&oacute;hoz legal&aacute;bb egy albumnak l&eacute;teznie kell',
        'warning' => 'Figyelmeztet&eacute;s',
        'change_perm' => 'a szkript nem tud &iacute;rni ebbe a k&ouml;nyvt&aacute;rba, 755-rõl 777-re kell cser&eacute;lned a jogosults&aacute;g&aacute;t mielõtt hozz&aacute;adsz k&eacute;peket !',
        'target_album' => '<b>Adja hozz&aacute; a </b>"%s"<b> k&ouml;nyvt&aacute;rb&oacute;l a k&eacute;peket a </b>%s albumhoz',
        'folder' => 'K&ouml;nyvt&aacute;r',
        'image' => 'K&eacute;p',
        'album' => 'Album',
        'result' => 'Eredm&eacute;ny',
        'dir_ro' => 'Nem &iacute;rhat&oacute;. ',
        'dir_cant_read' => 'Nem olvashat&oacute;. ',
        'insert' => '&Uacute;j k&eacute;pek hozz&aacute;ad&aacute;sa a k&eacute;pt&aacute;rhoz',
        'list_new_pic' => '&Uacute;j k&eacute;pek felsorol&aacute;sa',
        'insert_selected' => 'Kijel&ouml;lt k&eacute;pek hozz&aacute;ad&aacute;sa',
        'no_pic_found' => 'Nincs &uacute;j k&eacute;p',
        'be_patient' => 'Legyen t&uuml;relemmel, a szkriptnek idõ kell a k&eacute;pek hozz&aacute;ad&aacute;s&aacute;hoz',
        'notes' =>  '<ul>'.
                                '<li><b>OK</b> : azt jelenti, hogy a k&eacute;p hozz&aacute;ad&aacute;sa sikeres volt'.
                                '<li><b>DP</b> : azt jelenti, hogy a k&eacute;p m&aacute;r az adatb&aacute;zisban volt'.
                                '<li><b>PB</b> : azt jelenti, hogy a k&eacute;p nem volt hozz&aacute;adhat&oacute;, ellenõrizze a konfigur&aacute;ci&oacute;t &eacute;s a k&eacute;peket tartalmaz&oacute; k&ouml;nyvt&aacute;rak jogosults&aacute;gait '.
                                '<li>Ha az OK, DP, PB \'jelek\' nem l&aacute;that&oacute;k, klikkeljen a hib&aacute;s k&eacute;pre a PHP hiba&uuml;zenet&eacute;nek megjelen&iacute;t&eacute;s&eacute;hez'.
                                '<li>Ha a browser leidõz&iacute;tett, nyomja meg a friss&iacute;t&eacute;s gombot'.
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
        'title' => 'K&eacute;p felt&ouml;lt&eacute;se',
        'max_fsize' => 'Maximum megengedett f&aacute;jlm&eacute;ret %s KB',
        'album' => 'Album',
        'picture' => 'K&eacute;p',
        'pic_title' => 'K&eacute;p c&iacute;me',
        'description' => 'K&eacute;p le&iacute;r&aacute;sa',
        'keywords' => 'Kulcsszavak (sz&oacute;k&ouml;z&ouml;kkel elv&aacute;lasztva)',
        'err_no_alb_uploadables' => 'Nincs album, ahova enged&eacute;lyezett a felt&ouml;lt&eacute;se',
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
        'title' => 'Felhaszn&aacute;l&oacute;k menedzsel&eacute;se',
        'name_a' => 'N&eacute;v n&ouml;vekvõ',
        'name_d' => 'N&eacute;v cs&ouml;kkenõ',
        'group_a' => 'Csoport n&ouml;vekvõ',
        'group_d' => 'Csoport cs&ouml;kkenõ',
        'reg_a' => 'Reg. d&aacute;tum n&ouml;vekvõ',
        'reg_d' => 'Reg. d&aacute;tum cs&ouml;kkenõ',
        'pic_a' => 'K&eacute;psz&aacute;m n&ouml;vekvõ',
        'pic_d' => 'K&eacute;psz&aacute;m cs&ouml;kkenõ',
        'disku_a' => 'Diszkfelhaszn&aacute;l&aacute;s n&ouml;vekvõ',
        'disku_d' => 'Diszkfelhaszn&aacute;l&aacute;s cs&ouml;kkenõ',
        'sort_by' => 'Felhaszn&aacute;l&oacute;k sorrendez&eacute;se',
        'err_no_users' => 'Nincs felhaszn&aacute;l&oacute; !',
        'err_edit_self' => 'Nem szerkesztheti a saj&aacute;t profilj&aacute;t, haszn&aacute;lja az \'&Eacute;n profilom\' men&uuml;pontot',
        'edit' => 'SZERKESZT',
        'delete' => 'T&Ouml;R&Ouml;L',
        'name' => 'Felhaszn&aacute;l&oacute;n&eacute;v',
        'group' => 'Csoport',
        'inactive' => 'Inakt&iacute;v',
        'operations' => 'M&ucirc;veletek',
        'pictures' => 'K&eacute;pek',
        'disk_space' => 'Felhaszn&aacute;lt t&aacute;rhely / kv&oacute;ta',
        'registered_on' => 'Regisztr&aacute;lva',
        'u_user_on_p_pages' => '%d felhaszn&aacute;l&oacute; %d oldalon',
        'confirm_del' => 'Bizt&ouml;s t&ouml;r&ouml;lni k&iacute;v&aacute;nja a felhaszn&aacute;l&oacute;t? \\nMinden k&eacute;pe &eacute;s albuma is t&ouml;rlõdni fog.',
        'mail' => 'MAIL',
        'err_unknown_user' => 'A kijel&ouml;lt felhaszn&aacute;l&oacute; nem l&eacute;tezik !',
        'modify_user' => 'Felhaszn&aacute;l&oacute; m&oacute;dos&iacute;t&aacute;sa',
        'notes' => 'Megjegyz&eacute;sek',
        'note_list' => '<li>Ha nem k&iacute;v&aacute;nja megv&aacute;ltoztatni az aktu&aacute;lis jelsz&oacute;t, hagyja a "jelsz&oacute;" mezõt &uuml;resen',
        'password' => 'Jelsz&oacute;',
        'user_active' => 'Felhaszn&aacute;l&oacute; akt&iacute;v',
        'user_group' => 'Felhaszn&aacute;l&oacute; csoport',
        'user_email' => 'Felhaszn&aacute;l&oacute; email c&iacute;me',
        'user_web_site' => 'Felhaszn&aacute;l&oacute; honlapja',
        'create_new_user' => '&Uacute;j felhaszn&aacute;l&oacute; l&eacute;trehoz&aacute;sa',
        'user_location' => 'Felhaszn&aacute;l&oacute; lok&aacute;ci&oacute;ja',
        'user_interests' => 'Felhaszn&aacute;l&oacute; &eacute;rdeklõd&eacute;si k&ouml;re',
        'user_occupation' => 'Felhaszn&aacute;l&oacute; foglalkoz&aacute;sa',
);

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //

if (defined('UTIL_PHP')) $lang_util_php = array(
        'title' => 'K&eacute;pek &aacute;tm&eacute;retez&eacute;se',
        'what_it_does' => 'Mi t&ouml;rt&eacute;njen',
        'what_update_titles' => 'C&iacute;mek aktualiz&aacute;l&aacute;sa f&aacute;jlnevekbol',
        'what_delete_title' => 'C&iacute;mek t&ouml;rl&eacute;se',
        'what_rebuild' => 'Ikonok &eacute;s &aacute;tm&eacute;retezett k&eacute;pek &uacute;jragener&aacute;l&aacute;sa',
        'what_delete_originals' => 'Eredeti k&eacute;pek fel&uuml;l&iacute;r&aacute;sa az &aacute;tm&eacute;retezettekkel',
        'file' => 'F&aacute;jl',
        'title_set_to' => 'c&iacute;m be&aacute;ll&iacute;t&aacute;sa ..',
        'submit_form' => '&eacute;rv&eacute;nyes&iacute;t&eacute;s',
        'updated_succesfully' => 'sikeres m&oacute;dos&iacute;t&aacute;s',
        'error_create' => 'HIBA a gener&aacute;l&aacute;s sor&aacute;n',
        'continue' => 'T&ouml;bb k&eacute;p feldolgoz&aacute;sa',
        'main_success' => 'A % f&aacute;jlok felhaszn&aacute;l&aacute;sa elsodleges k&eacute;pk&eacute;nt sikeres volt',
        'error_rename' => '%s &aacute;tnevez&eacute;se sor&aacute;n %s –ra HIBA',
        'error_not_found' => 'A % f&aacute;jlok nem tal&aacute;lhat&oacute;k',
        'back' => 'vissza a fooldalra',
        'thumbs_wait' => 'Ikonok &eacute;s/vagy &aacute;tm&eacute;retezett k&eacute;pek aktualiz&aacute;l&aacute;sa, k&eacute;rem v&aacute;rjon…',
        'thumbs_continue_wait' => 'Ikonok &eacute;s/vagy &aacute;tm&eacute;retezett k&eacute;pek aktualiz&aacute;l&aacute;s&aacute;nak folytat&aacute;sa...',
        'titles_wait' => 'C&iacute;mek aktualiz&aacute;l&aacute;sa, k&eacute;rem v&aacute;rjon...',
        'delete_wait' => 'C&iacute;mek t&ouml;rl&eacute;se, k&eacute;rem v&aacute;rjon...',
        'replace_wait' => 'Eredeti k&eacute;pek fel&uuml;l&iacute;r&aacute;sa az &aacute;tm&eacute;retezettekkel, k&eacute;rem v&aacute;rjon..',
        'instruction' => 'Gyors utas&iacute;t&aacute;sok',
        'instruction_action' => 'Muvelet kiv&aacute;laszt&aacute;sa',
        'instruction_parameter' => 'Param&eacute;terek be&aacute;ll&iacute;t&aacute;sa',
        'instruction_album' => 'Album kiv&aacute;laszt&aacute;sa',
        'instruction_press' => 'Nyomj %-t',
        'update' => 'Ikonok &eacute;s/vagy &aacute;tm&eacute;retezett f&eacute;nyk&eacute;pek aktualiz&aacute;l&aacute;sa',
        'update_what' => 'Mit kell aktualiz&aacute;lni',
        'update_thumb' => 'Csak ikonokat',
        'update_pic' => 'Csak &aacute;tm&eacute;retezett k&eacute;peket',
        'update_both' => 'Ikonokat &eacute;s &aacute;tm&eacute;retezett k&eacute;peket is',
        'update_number' => 'Klikk&eacute;l&eacute;senk&eacute;nt feldolgozand&oacute; k&eacute;pek sz&aacute;ma',
        'update_option' => '(Pr&oacute;b&aacute;ld cs&ouml;kkenteni ezt az &eacute;rt&eacute;ket, ha leidoz&iacute;t&eacute;si probl&eacute;m&aacute;t &eacute;szlelsz)',
        'filename_title' => 'F&aacute;jln&eacute;v ? K&eacute;p c&iacute;m',
        'filename_how' => 'Hogy legyen m&oacute;dos&iacute;tva a f&aacute;jln&eacute;v',
        'filename_remove' => 'A jpg v&eacute;gzod&eacute;s t&ouml;rl&eacute;se &eacute;s _ (alulvon&aacute;s) helyettes&iacute;t&eacute;se sz&oacute;k&ouml;zzel',
        'filename_euro' => '2003_11_23_13_20_20.jpg &aacute;tnevez&eacute;se 23/11/2003 13:20-ra',
        'filename_us' => '2003_11_23_13_20_20.jpg &aacute;tnevez&eacute;se 11/23/2003 13:20-ra',
        'filename_time' => '2003_11_23_13_20_20.jpg &aacute;tnevez&eacute;se 13:20ra',
        'delete' => 'K&eacute;p c&iacute;mek vagy eredeti m&eacute;retu k&eacute;pek t&ouml;rl&eacute;se',
        'delete_title' => 'K&eacute;p c&iacute;mek t&ouml;rl&eacute;se',
        'delete_original' => 'Eredeti m&eacute;retu k&eacute;pek t&ouml;rl&eacute;se',
        'delete_replace' => 'Eredeti k&eacute;pek fel&uuml;l&iacute;r&aacute;sa &aacute;tm&eacute;retezettel',
        'select_album' => 'Album kiv&aacute;laszt&aacute;sa',
);

?>