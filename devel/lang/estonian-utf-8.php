<?php
// ------------------------------------------------------------------------- //
//  Coppermine Photo Gallery                                                 //
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
//  Translation by Meelis Rüütli (m_ryytli@hotmail.com) from estonia         //
// ------------------------------------------------------------------------- //

$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('Baiti', 'KB', 'MB');

// Day of weeks and months
$lang_day_of_week = array('Pü', 'Es', 'Te', 'Ko', 'Ne', 'Re', 'La');
$lang_month = array('Jaanuar', 'Veebruar', 'Märts', 'Aprill', 'Mai', 'Juuni', 'Juuli', 'August', 'September', 'Oktoober', 'November', 'Detsember');

// Some common strings
$lang_yes = 'Jah';
$lang_no  = 'Ei';
$lang_back = 'TAGASI';
$lang_continue = 'JÄTKA';
$lang_info = 'Info';
$lang_error = 'Viga';

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
	'random' => 'Juhuslikud pildid',
	'lastup' => 'Viimati lisatud',
	'lastcom' => 'Viimati kommenteeritud',
	'topn' => 'Enim vaadatud',
	'toprated' => 'Edetabel',
	'lasthits' => 'Viimati vaadatud',
	'search' => 'Otsingu tulemused'
);

$lang_errors = array(
	'access_denied' => 'Teil puudub õigus ligipääsuks sellele lehele',
	'perm_denied' => 'Teil puudub õigus teostada antud toimingut.',
	'param_missing' => 'Skript täitmiseks puuduvad vajalikud parameeterid.',
	'non_exist_ap' => 'Valitud album/pilt puudub!',
	'quota_exceeded' => 'Ketta kvoot ületatud<br /><br />Teie ruumi kvoot on [quota]KB, teie pildid hetkel kasutavad [space]KB, selle pildi lisamine võib ületada teie kvoodi.',
	'gd_file_type_err' => 'Kasutades GD pilditeeki on lubatud tüübid ainult JPEG ja PNG.',
	'invalid_image' => 'Teie poolt üleslaaditav pilt on vigane või seda ei saa käitleda GD teegi poolt',
	'resize_failed' => 'Võimatu luua pisipilti või kahandada pildi suurust.',
	'no_img_to_display' => 'Pole ühtegi pilti',
	'non_exist_cat' => 'Valitud kategooria puudub',
	'orphan_cat' => 'Kategoorial on olematu juur, jätka kategooria-halduriga probleemi lahendamiseks.',
	'directory_ro' => 'Kataloog \'%s\' pole kirjutamisõiguslik, pilte ei saa kustutada',
	'non_exist_comment' => 'Valitud kommentaar puudub.',
	'pic_in_invalid_album' => 'Pilt on olematus albumis (%s)!?'
);

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
	'alb_list_title' => 'Mine albumite loetellu',
	'alb_list_lnk' => 'Albumite loetelu',
	'my_gal_title' => 'Mine minu personaal galeriisse',
	'my_gal_lnk' => 'Minu Galerii',
	'my_prof_lnk' => 'Minu Profiil',
	'adm_mode_title' => 'Lülitu admin moodi',
	'adm_mode_lnk' => 'Admin olek',
	'usr_mode_title' => 'Lülitu kasutaja moodi',
	'usr_mode_lnk' => 'Kasutaja olek',
	'upload_pic_title' => 'Lisa pilt albumisse',
	'upload_pic_lnk' => 'Lisa pilt',
	'register_title' => 'Loo konto',
	'register_lnk' => 'Registreeri',
	'login_lnk' => 'Logi sisse',
	'logout_lnk' => 'Logi välja',
	'lastup_lnk' => 'Viimati lisatud',
	'lastcom_lnk' => 'Viimased kommentaarid',
	'topn_lnk' => 'Enim vaadatud',
	'toprated_lnk' => 'Edetabel',
	'search_lnk' => 'Otsing',
);

$lang_gallery_admin_menu = array(
	'upl_app_lnk' => 'Lisamise kinnitus',
	'config_lnk' => 'Konfig',
	'albums_lnk' => 'Albumid',
	'categories_lnk' => 'Kategooriad',
	'users_lnk' => 'Kasutajad',
	'groups_lnk' => 'Grupid',
	'comments_lnk' => 'Kommentaarid',
	'searchnew_lnk' => 'Lisa "FTP" pilte',
);

$lang_user_admin_menu = array(
	'albmgr_lnk' => 'Loo / telli minu albumeid',
	'modifyalb_lnk' => 'Muuda minu albumeid',
	'my_prof_lnk' => 'Minu profiil',
);

$lang_cat_list = array(
	'category' => 'Kategooria',
	'albums' => 'Albumid',
	'pictures' => 'Pildid',
);

$lang_album_list = array(
	'album_on_page' => '%d albumit %d-el lehel'
);

$lang_thumb_view = array(
	'date' => 'KUUPÄEV',
	'name' => 'NIMI',
	'sort_da' => 'Sordi kuupäeva järgi kasvavalt',
	'sort_dd' => 'Sordi kuupäeva järgi kahanevalt',
	'sort_na' => 'Sordi nime järgi kasvavalt',
	'sort_nd' => 'Sordi nime järgi kahanevalt',
	'pic_on_page' => '%d pilti on %d-el lehel',
	'user_on_page' => '%d kasutajat on %d-el lehel'
);

$lang_img_nav_bar = array(
	'thumb_title' => 'Tagasi pisipiltide lehele',
	'pic_info_title' => 'Kuva/peida pildi info',
	'slideshow_title' => 'Slaidiesitus',
	'ecard_title' => 'Saada see pilt e-kaardina',
	'ecard_disabled' => 'e-kaartid on keelatud',
	'ecard_disabled_msg' => 'Teil pole õigust saata e-kaarte',
	'prev_title' => 'Vaata eelmist pilti',
	'next_title' => 'Vaata järgmist pilti',
	'pic_pos' => 'PILT %s/%s',
);

$lang_rate_pic = array(
	'rate_this_pic' => 'Hinda seda pilti ',
	'no_votes' => '(Veel hindamata)',
	'rating' => '(Hetke hinne : %s / 5-st %s häälega)',
	'rubbish' => 'Rämps',
	'poor' => 'Armetu',
	'fair' => 'Keskmine',
	'good' => 'Hea',
	'excellent' => 'Imeline',
	'great' => 'fantastiline',
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
	CRITICAL_ERROR => 'Kriitiline viga',
	'file' => 'Fail: ',
	'line' => 'Rida: ',
);

$lang_display_thumbnails = array(
	'filename' => 'Failinimi : ',
	'filesize' => 'Failisuurus : ',
	'dimensions' => 'Mõõtmed : ',
	'date_added' => 'Lisamise kuupäev : '
);

$lang_get_pic_data = array(
	'n_comments' => '%s kommentaari',
	'n_views' => '%s kord(a)',
	'n_votes' => '(%s hääl(t))'
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
	'Exclamation' => 'Hüüatus',
	'Question' => 'Küsimus',
	'Very Happy' => 'Väga õnnelik',
	'Smile' => 'Naer',
	'Sad' => 'Kurb',
	'Surprised' => 'Üllatnud',
	'Shocked' => 'Vapustatud',
	'Confused' => 'Hämmeldunud',
	'Cool' => 'Lahe',
	'Laughing' => 'Naerev',
	'Mad' => 'Hull',
	'Razz' => 'Razz',
	'Embarassed' => 'Häbistatud',
	'Crying or Very sad' => 'Nuttev või Väga kurb',
	'Evil or Very Mad' => 'Õel või Täitsa hull',
	'Twisted Evil' => 'Eelarvamuslik õel',
	'Rolling Eyes' => 'Silmapööritaja',
	'Wink' => 'Silmapilgutus',
	'Idea' => 'Idee',
	'Arrow' => 'Nool',
	'Neutral' => 'Neutraalne',
	'Mr. Green' => 'Mr. Roheline',
);

// ------------------------------------------------------------------------- //
// File addpic.php
// ------------------------------------------------------------------------- //

// void

// ------------------------------------------------------------------------- //
// File admin.php
// ------------------------------------------------------------------------- //

if (defined('ADMIN_PHP')) $lang_admin_php = array(
	0 => 'Lahkumine admin olekust...',
	1 => 'Sisenemine admin olekusse...',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
	'alb_need_name' => 'Albumitel peab olema nimi !',
	'confirm_modifs' => 'Oled kindel, et tahad teha neid muudatusi ?',
	'no_change' => 'Sa ei muutnud midagi !',
	'new_album' => 'Uus album',
	'confirm_delete1' => 'Kindel, et tahad albumit kustutada ?',
	'confirm_delete2' => '\nKõik siin sisalduvad pildid ja kommentaarid lähevad kaduma !',
	'select_first' => 'Vali enne album',
	'alb_mrg' => 'Albumi-haldur',
	'my_gallery' => '* Minu Galerii *',
	'no_category' => '* Kategooriata *',
	'delete' => 'Kustuta',
	'new' => 'Uus',
	'apply_modifs' => 'Omista muudatused',
	'select_category' => 'Vali kategooria',
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
	'miss_param' => 'Vajalikud parameetrid \'%s\' toiminguks varustamata !',
	'unknown_cat' => 'Valitud kategooria puudub andmebaasis',
	'usergal_cat_ro' => 'Kasutaja galeriisi ei saa kustutada !',
	'manage_cat' => 'Halda kategooriad',
	'confirm_delete' => 'Oled kindel, et tahad KUSTUTADA seda kategooriat',
	'category' => 'Kategooria',
	'operations' => 'Toimingud',
	'move_into' => 'Liigu',
	'update_create' => 'Uuenda/Loo kategooria',
	'parent_cat' => 'Juurkategooria',
	'cat_title' => 'Kategooria tiitel',
	'cat_desc' => 'Kategooria kirjeldus'
);

// ------------------------------------------------------------------------- //
// File config.php
// ------------------------------------------------------------------------- //

if (defined('CONFIG_PHP')) $lang_config_php = array(
	'title' => 'Konfiguratsioon',
	'restore_cfg' => 'Taasta tehase vaikeseaded',
	'save_cfg' => 'Salvesta uus konfiguratsioon',
	'notes' => 'Märkused',
	'info' => 'Info',
	'upd_success' => 'Konfiguratsioon uuendatud',
	'restore_success' => 'Vaikekonfiguratsioon taastatud',
	'name_a' => 'Nimed kasvavalt',
	'name_d' => 'Nimed kahanevalt',
	'date_a' => 'Kuupäev kasvavalt',
	'date_d' => 'Kuupäev kahanevalt'
);

if (defined('CONFIG_PHP')) $lang_config_data = array(
	'Üldised seaded',
	array('Galerii nimi', 'gallery_name', 0),
	array('Galrii kirjeldus', 'gallery_description', 0),
	array('Galerii administraatorile epost', 'gallery_admin_email', 0),
	array('Sihtaadress \'Vaata veel pilte\' link e-kaartidel', 'ecards_more_pic_target', 0),
	array('Keel', 'lang', 5),
	array('Teema', 'theme', 6),

	'Albumite loetelu vaade',
	array('Peatabeli laius (pixelites või %)', 'main_table_width', 0),
	array('Number kategooria tasandeid kuvamiseks', 'subcat_level', 0),
	array('Number albumeid kuvamiseks', 'albums_per_page', 0),
	array('Number veergusid albumi loeteluks', 'album_list_cols', 0),
	array('pisipildi suurus pixelites', 'alb_list_thumb_size', 0),
	array('Pealehe sisu', 'main_page_layout', 0),

	'Pisipiltide vaade',
	array('Veergude arv pisipiltide lehel', 'thumbcols', 0),
	array('Ridade arv pisipiltide lehel', 'thumbrows', 0),
	array('Maksimaalne lahtrite arv kuvamiseks', 'max_tabs', 0),
	array('Kuva pildi selgitus (lisaks tiitlile) pisipildi all', 'caption_in_thumbview', 1),
	array('Kuva kommentaaraide arv  pisipildi all', 'display_comment_count', 1),
	array('Vaikejärjestus piltidele', 'default_sort_order', 3),
	array('Minimaalne häälte arv pildi sattumiseks \'Edetabel\' nimekirja', 'min_votes_for_rating', 0),

	'Pildivaade &amp; Kommentaaride seaded',
	array('Tabeli laius pildi kuvamiseks (pixelites või %)', 'picture_table_width', 0),
	array('Pildi info on vaikimisi nähtav', 'display_pic_info', 1),
	array('Filtreeri pahad sõnad kommentaarides', 'filter_bad_words', 1),
	array('Luba smile\'isi kommentaarides', 'enable_smilies', 1),
	array('Maksimaalne pildikirjelduse pikkus', 'max_img_desc_length', 0),
	array('Maksimaalne number tähti sõnas', 'max_com_wlength', 0),
	array('Maksimaalne number ridu kommentaaris', 'max_com_lines', 0),
	array('Maksimaalne kommentaari pikkus', 'max_com_size', 0),

	'Piltide ja pisipiltide seaded',
	array('JPEG failide kvaliteet', 'jpeg_qual', 0),
	array('Pisipildi max laius või kõrgus <b>*</b>', 'thumb_width', 0),
	array('Loo keskmised pildid','make_intermediate',1),
	array('Keskmiste piltide laius või kõrgus <b>*</b>', 'picture_width', 0),
	array('Salvestatud piltide max suurus (KB)', 'max_upl_size', 0),
	array('Salvestatud piltide max laius või kõrgus (pixelites)', 'max_upl_width_height', 0),

	'Kasutaja seaded',
	array('Luba uue kasutaja registreerimist', 'allow_user_registration', 1),
	array('Kasutaja registreerimine nõuab eposti-kinnitust', 'reg_requires_valid_email', 1),
	array('Luba kahel kasutajal ühte-sama eposti aadressi', 'allow_duplicate_emails_addr', 1),
	array('Kasutajatel võib olla privaat-albumid', 'allow_private_albums', 1),

	'Kohandatavad väljad pildi kirjelduseks (jäta tühjaks kui ei kasuta)',
	array('Väli 1 nimi', 'user_field1_name', 0),
	array('Väli 2 nimi', 'user_field2_name', 0),
	array('Väli 3 nimi', 'user_field3_name', 0),
	array('Väli 4 nimi', 'user_field4_name', 0),

	'Piltide ja pisipiltide lisaseaded',
	array('Faili nimes keelatud tähemärgid', 'forbiden_fname_char',0),
	array('Lubatud failitüübid salvestatavatele piltidele', 'allowed_file_extensions',0),
	array('Piltide suurusemuutmise meetod','thumb_method',2),
	array('ImageMagick\'u \'konvertimise\' abiprogrammi tee (näiteks /usr/bin/X11/)', 'impath', 0),
	array('Lubatud pilditüübid (ainult ImageMagick\'u jaoks)', 'allowed_img_types',0),
	array('Käsurea parameetrid ImageMagick\'ule', 'im_options', 0),
	array('Lugeda EXIF andmed JPEG failides', 'read_exif_data', 1),
	array('Albumi kataloog <b>*</b>', 'fullpath', 0),
	array('Kasutajapiltide kataloog <b>*</b>', 'userpics', 0),
	array('Eesliide keskmistele piltidele <b>*</b>', 'normal_pfx', 0),
	array('Eesliide pisipiltidele <b>*</b>', 'thumb_pfx', 0),
	array('Vaikemood kataloogidele', 'default_dir_mode', 0),
	array('Vaikemood piltidele', 'default_file_mode', 0),

	'Präänikud &amp; Tähestiku seaded',
	array('Skripti poolt kasutatava prääniku nimi', 'cookie_name', 0),
	array('Skripti poolt kasutatava prääniku failitee', 'cookie_path', 0),
	array('Tähtekodeering', 'charset', 4),

	'Muud seaded',
	array('Võimalda parandusmood', 'debug_mode', 1),

	'<br /><div align="center">(*) Väljad märgitud *-ga ei pea muutma kui galeriis on juba pilte.</div><br />'
);

// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
	'empty_name_or_com' => 'Sa pead trükkima oma nime ja kommentaari',
	'com_added' => 'Sinu kommentaar lisati',
	'alb_need_title' => 'Sinult oodatakse pealkirja albumile !',
	'no_udp_needed' => 'Uuendust pole vaja.',
	'alb_updated' => 'Album uuendatud',
	'unknown_album' => 'Valitud album puudub või sul pole õigusi salvestada sellesse albumisse',
	'no_pic_uploaded' => 'Ühtegi pilti ei salvestatud !<br /><br />Kui sul tõesti on valitud pilt salvestamiseks, kontrolli et server lubaks failide salvestamist...',
	'err_mkdir' => 'Viga kataloogi %s loomisel !',
	'dest_dir_ro' => 'Sihtkataloog %s pole skripti poolt kirjutamisõiguslik !',
	'err_move' => 'Võimatu liigutada %s -> %s !',
	'err_fsize_too_large' => 'Sinu poolt salvestatava pildi suurus liiga suur (maksimum lubatud %s x %s) !',
	'err_imgsize_too_large' => 'Sinu poolt salvestatava faili suurus liiga suur (maksimum lubatud %s KB) !',
	'err_invalid_img' => 'Sinu poolt salvestatav fail pole sobiv pilt !',
	'allowed_img_types' => 'Sa võid salvestada ainult %s pilti.',
	'err_insert_pic' => 'Pilti  \'%s\' ei saa lisada albumisse ',
	'upload_success' => 'Sinu pilt salvestati edukalt<br /><br />See saab nähtavaks pärast admini heakskiitu.',
	'info' => 'Info',
	'com_added' => 'Kommentaar lisatud',
	'alb_updated' => 'Album uuendatud',
	'err_comment_empty' => 'Sinu kommentaar on tühi !',
	'err_invalid_fext' => 'Ainult järgmised failitüübid aksepteeritakse : <br /><br />%s.',
	'no_flood' => 'Vabandust, aga sa oled juba selle pildile viimati lisatud kommentaari autor<br /><br />Paranda oma lisatud kommentaari kui soovid seda muuta',
	'redirect_msg' => 'Sind suunatakse ümber.<br /><br /><br />Klikka \'JÄTKA\' kui lehekülg automaatselt ei uuene',
	'upl_success' => 'Sinu pilt edukalt lisatud',
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
	'caption' => 'Selgitus',
	'fs_pic' => 'Täis suuruses pilt',
	'del_success' => 'edukalt kustutatud',
	'ns_pic' => 'normaal suuruses pilt',
	'err_del' => 'ei saa kustutada',
	'thumb_pic' => 'pisipilt',
	'comment' => 'kommentaar',
	'im_in_alb' => 'pilt albumis',
	'alb_del_success' => 'Album \'%s\' kustutatud',
	'alb_mgr' => 'Albumi Haldur',
	'err_invalid_data' => 'Vigased andmed laekunud \'%s\'',
	'create_alb' => 'Loon albumit \'%s\'',
	'update_alb' => 'Uuendan albumit \'%s\' pealkirjaga \'%s\' ja indeksiga \'%s\'',
	'del_pic' => 'Kustuta pilt',
	'del_alb' => 'Kustuta album',
	'del_user' => 'Kustuta kasutaja',
	'err_unknown_user' => 'Valitud kasutajat pole olemas !',
	'comment_deleted' => 'Kommentaar edukalt kustutatud',
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
	'confirm_del' => 'Oled kindel, et tahad seda pilti KUSTUTADA ? \\nKommentaarid kustutatakse samuti.',
	'del_pic' => 'KUSTUTA SEE PILT',
	'size' => '%s x %s pixelit',
	'views' => '%s korda',
	'slideshow' => 'Slaidivaade',
	'stop_slideshow' => 'PEATA SLAIDIVAADE',
	'view_fs' => 'Klikka vaatamaks täissuuruses pilti',
);

$lang_picinfo = array(
	'title' =>'Pildi info',
	'Filename' => 'Failinimi',
	'Album name' => 'Albumi nimi',
	'Rating' => 'Reiting (%s häält)',
	'Keywords' => 'Märksõnad',
	'File Size' => 'Faili suurus',
	'Dimensions' => 'Dimensioonid',
	'Displayed' => 'Kuvatud',
	'Camera' => 'Kaamera',
	'Date taken' => 'Ülesvõtte kuupäev',
	'Aperture' => 'Ava',
	'Exposure time' => 'Säritusaeg',
	'Focal length' => 'Fookuskaugus',
	'Comment' => 'Kommentaar'
);

$lang_display_comments = array(
	'OK' => 'OK',
	'edit_title' => 'Muuda seda kommentaari',
	'confirm_delete' => 'Oled kindel, et tahad seda kommentaari kustutada ?',
	'add_your_comment' => 'Lisa oma kommentaar',
	'your_name' => 'Sinu nimi',
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
	'title' => 'Saada e-kaart',
	'invalid_email' => '<b>Hoiatus</b> : vigane eposti aadress !',
	'ecard_title' => 'Sulle on e-kaart %s\'lt',
	'view_ecard' => 'Kui e-kaart ei kuva korralikult, klikka seda linki',
	'view_more_pics' => 'Klikka seda linki vaatamaks rohkem pilte !',
	'send_success' => 'Sinu e-kaart on saadetud',
	'send_failed' => 'Vabandust, kuid server ei saa saata sinu e-kaarti...',
	'from' => 'Kellelt',
	'your_name' => 'Sinu nimi',
	'your_email' => 'Sinu eposti aadress',
	'to' => 'Kellele',
	'rcpt_name' => 'Aadressaadi nimi',
	'rcpt_email' => 'Aadressaadi eposti aadress',
	'greetings' => 'Tervitused',
	'message' => 'Sõnum',
);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
	'pic_info' => 'Pildi&nbsp;info',
	'album' => 'Album',
	'title' => 'Pealkiri',
	'desc' => 'Kirjeldus',
	'keywords' => 'Märksõnad',
	'pic_info_str' => '%sx%s - %sKB - %s vaadet - %s häält',
	'approve' => 'Kinnita pilt',
	'postpone_app' => 'Lükka kinnitus edasi',
	'del_pic' => 'Kustuta pilt',
	'reset_view_count' => 'Nulli vaadete loendur',
	'reset_votes' => 'Nulli hääled',
	'del_comm' => 'Kustuta kommendaarid',
	'upl_approval' => 'Salvestuse kinnitus',
	'edit_pics' => 'Paranda pilte',
	'see_next' => 'Vaata järgmisi pilte',
	'see_prev' => 'Vaata eelmisi pilte',
	'n_pic' => '%s pilti',
	'n_of_pic_to_disp' => 'Piltide arv kuvamiseks',
	'apply' => 'Omista muudatused'
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
	'group_name' => 'Gruppi nimi',
	'disk_quota' => 'Ketta kvoot',
	'can_rate' => 'Võib hinnata pilte',
	'can_send_ecards' => 'Võib saata e-kaarte',
	'can_post_com' => 'Võib kommenteerida',
	'can_upload' => 'Võib salvestada pilte',
	'can_have_gallery' => 'Võib luua isikliku galerii',
	'apply' => 'Omista muudatused',
	'create_new_group' => 'Loo uus grupp',
	'del_groups' => 'Kustuta valitud grupp(id)',
	'confirm_del' => 'Hoiatus, kui sa kustutad grupi, siis kustutava grupi kasutajad kantakse \'Registereeritud\' gruppi !\n\nTahad sa jätkata ?',
	'title' => 'Korralda kasutajagruppe',
	'approval_1' => 'Av. salv. kinnitus (1)',
	'approval_2' => 'Isik. salv. kinnitus (2)',
	'note1' => '<b>(1)</b> Salvestused avalikku albumisse vajavad admini kinnitust',
	'note2' => '<b>(2)</b> Salvestused kasutaja albumisse vajavad admini kinnitust',
	'notes' => 'Märkused'
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
	'welcome' => 'Teretulemast !'
);

$lang_album_admin_menu = array(
	'confirm_delete' => 'Oled kindel, et tahad seda albumit KUSTUDADA ? \\nKõik pildid ja kommentaarid kustutakse samuti.',
	'delete' => 'KUSTUTA',
	'modify' => 'OMADUSED',
	'edit_pics' => 'REDIGEERI PILTE',
);

$lang_list_categories = array(
	'home' => 'KODU',
	'stat1' => '<b>[pictures]</b> pilti <b>[albums]</b> albumit ja <b>[cat]</b> kategooriat koos <b>[comments]</b> kommentaariga vaadatud <b>[views]</b> korda',
	'stat2' => '<b>[pictures]</b> pilti <b>[albums]</b> albumit vaadatud <b>[views]</b> korda',
	'xx_s_gallery' => '%s\' Galerii',
	'stat3' => '<b>[pictures]</b> pilti <b>[albums]</b> albumit koos <b>[comments]</b> kommentaariga vaadatud <b>[views]</b> korda'
);

$lang_list_users = array(
	'user_list' => 'Kasutajate loetelu',
	'no_user_gal' => 'Siin pole kasutajate galeriisid',
	'n_albums' => '%s album(it)',
	'n_pics' => '%s pilt(i)'
);

$lang_list_albums = array(
	'n_pictures' => '%s pilt(i)',
	'last_added' => ', viimane lisati %s'
);

}

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
	'login' => 'Logi sisse',
	'enter_login_pswd' => 'Sisenemiseks sisesta kasutajanimi ja parool',
	'username' => 'Kasutajanimi',
	'password' => 'Parool',
	'remember_me' => 'Jäta mind meelde',
	'welcome' => 'Teretulemast %s ...',
	'err_login' => '*** Ei saanud sisse logida. Proovi uuesti ***',
	'err_already_logged_in' => 'Sa oled juba sisse logitud !',
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
	'logout' => 'Logi välja',
	'bye' => 'Head aega, %s ...',
	'err_not_loged_in' => 'Sa pole sisse logitud !',
);

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
	'upd_alb_n' => 'Uuenda album %s',
	'general_settings' => 'Üldised seaded',
	'alb_title' => 'Albumi pealkiri',
	'alb_cat' => 'Albumi kategooria',
	'alb_desc' => 'Albumi kirjeldus',
	'alb_thumb' => 'Albumi pisipilt',
	'alb_perm' => 'Õigused sellele albumile',
	'can_view' => 'Albumit võivad vaadata',
	'can_upload' => 'Külastajad võivad salvestada pilte',
	'can_post_comments' => 'Külastajad võivad kommenteerida',
	'can_rate' => 'Külastajad võivad hinnata pilte',
	'user_gal' => 'Kasutaja Galerii',
	'no_cat' => '* Kategooriata *',
	'alb_empty' => 'Album on tühi',
	'last_uploaded' => 'Viimati salvestatud',
	'public_alb' => 'Igaüks (avalik album)',
	'me_only' => 'Ainult mina',
	'owner_only' => 'Albumi omanik (%s) ainult',
	'groupp_only' => 'Grupi \'%s\' liikmed',
	'err_no_alb_to_modify' => 'Ühtegi albumit sa ei saa muuta andmebaasis.',
	'update' => 'Uuenda album'
);

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
	'already_rated' => 'Vabandust, aga sa oled juba seda pilti hinnanud',
	'rate_ok' => 'Sinu hääl vastu võetud',
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
Kuigi saidi {SITE_NAME} administraatorid püüavad eemaldada või muuta mistahes üldiselt pahaks-pandavad materjalid niipea kui võimalik, pole võimalik nendegi poolt kohe näha iga postitust. Seetõttu pead tunnistama, et kõik postitused, mis siia kiirväljaandesse tehakse (pildid, kommentaarid, arvamused) teiste autorite poolt, nende eest administraatorid ja webmasterid ei saa vastutada (väljaarvatud nende endi postitused).<br />
<br />
Sa nõustud mitte postitama sõimu, roppusi, rõvedusi, laimu, solvanguid, ähvardusi, soolisi- ega muid märkusi ja kommentaare ning materjale, mis oleksid vastuolus kehtivate seadustega. Sa nõustud et webmaster, administraator ja saidi {SITE_NAME} vahekohtunikud omavad õigust kustutada või parandada mistahes sisu kuidas ja millal neile sobib. Kasutajana sa nõustud, et kogu sinu ülal sisestatud info salvestatakse andmebaasi. Kuigi seda infot ei avaldata kolmandatele isikutele ilma sinu nõusolekuta, ei saa webmaster ja administraator võtta endale vastutust  häkkimiskatsete eest, mis võivad andmed ohtu seada.<br />
<br />
See sait kasutab präänikuid slavestamaks infot sinu lokaalses arvutis. Need präänikud on mõeldud ainult tõstmaks sinu vaatamise rõõmu. Eposti aadressi kasutatakse ainult kinnitamaks sinu registreerumise detaile ja parooli.<br />
<br />
Kilkates 'Olen nõus' allpool, nõustud sa nende nõuete ja tingimustega.
EOT;

$lang_register_php = array(
	'page_title' => 'Kasutaja registreerimine',
	'term_cond' => 'Terminid ja tingimused',
	'i_agree' => 'Olen nõus',
	'submit' => 'Saada registreerimine',
	'err_user_exists' => 'Sinu siseatud kasutajanimi juba olemas, palun vali muu',
	'err_password_mismatch' => 'Kaks parooli ei lange kokku, palun sisesta nad uuesti',
	'err_uname_short' => 'Kasutajanimi peab olema vähemalt 2 tähte',
	'err_password_short' => 'Parool peab olema vähemalt 2 tähte',
	'err_uname_pass_diff' => 'Kasutajanimi peab paroolist erinema',
	'err_invalid_email' => 'Eposti aadress vigane',
	'err_duplicate_email' => 'Keegi on juba registreerunud sinu sisestatud eposti aadressiga',
	'enter_info' => 'Sisesta registreerimisinfo',
	'required_info' => 'Vajalik info',
	'optional_info' => 'Vabatahtlik info',
	'username' => 'Kasutajanimi',
	'password' => 'Parool',
	'password_again' => 'Parool uuesti',
	'email' => 'Epost',
	'location' => 'Elukoht',
	'interests' => 'Huvid',
	'website' => 'Kodukas',
	'occupation' => 'Elukutse',
	'error' => 'VIGA',
	'confirm_email_subject' => '%s - Registreerumise kinnitus',
	'information' => 'Info',
	'failed_sending_email' => 'Reigistreerumise kinnituse eposti ei saa saata !',
	'thank_you' => 'Täname Teid registreerumast.<br /><br />Epost infoga, kuidas oma kontot aktiveerida, saadeti sinu antud eposti aadressile.',
	'acct_created' => 'Sinu konto on loodud ja nüüd sa võid sisse logida oma kasutajanime ja parooliga',
	'acct_active' => 'Sinu konto on nüüd aktiveeritud ja sa võid sisse logida oma kasutajanime ja parooliga',
	'acct_already_act' => 'Sinu konto on juba aktiivne !',
	'acct_act_failed' => 'Seda kontot ei saa aktiveerida !',
	'err_unk_user' => 'Valitud kasutaja puudub !',
	'x_s_profile' => '%s\'i profiil',
	'group' => 'Grupp',
	'reg_date' => 'Liitutud',
	'disk_usage' => 'Ketta kasutus',
	'change_pass' => 'Muuda parooli',
	'current_pass' => 'Praegune parool',
	'new_pass' => 'Uus parool',
	'new_pass_again' => 'Uus parool veelkord',
	'err_curr_pass' => 'Praegune parool on vale',
	'apply_modif' => 'Omista muudatused',
	'change_pass' => 'Muuda minu parool',
	'update_success' => 'Sinu profiil on uuendatud',
	'pass_chg_success' => 'Sinu parool on muudetud',
	'pass_chg_error' => 'Sinu parooli ei muudetud',
);

$lang_register_confirm_email = <<<EOT
Täname sind registreerumast {SITE_NAME}\'s

Sinu kasutajanimi on : "{USER_NAME}"
Sinu parool on : "{PASSWORD}"

Järgnevalt et aktiveerida oma konto, pead klikkama lingile allpool
või kopeeri ja kleebi see oma weebisirvijasse.

{ACT_LINK}

Tervitustega,

{SITE_NAME} juhtkond

EOT;

}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
	'title' => 'Kommentaaride ülevaade',
	'no_comment' => 'Siin pole ühtegi kommentaari üle vaadata',
	'n_comm_del' => '%s kommentaar(i) kustutatud',
	'n_comm_disp' => 'Kommentaaride arv kuvamiseks',
	'see_prev' => 'Vaata eelmist',
	'see_next' => 'Vaata järgmist',
	'del_comm' => 'Kustuta valitud kommentaarid',
);


// ------------------------------------------------------------------------- //
// File search.php - OK
// ------------------------------------------------------------------------- //

if (defined('SEARCH_PHP')) $lang_search_php = array(
	0 => 'Otsi pildikogumikku',
);

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
	'page_title' => 'Otsi uusi pilte',
	'select_dir' => 'Vali kataloog',
	'select_dir_msg' => 'See funktsioon lubab sul lisada kogumiku pilte, mis sa oled salvestanud oma serverisse FTP\'ga.<br /><br />Vali kataloog kuhu sa oma pildid oled salvestanud',
	'no_pic_to_add' => 'Siin pole pilte lisada',
	'need_one_album' => 'Sa vajad vähemalt ühte albumit selle funktsiooni kasutamiseks',
	'warning' => 'Hoiatus',
	'change_perm' => 'see skript ei saa kirjutada sellesse kataloogi, sa pead muutma selle õigusi (mood 755 või 777) enne kui üritad uuesti lisada pilte !',
	'target_album' => '<b>Pane &quot;</b>%s<b>&quot; pildid albumisse </b>%s',
	'folder' => 'Kaust',
	'image' => 'Pilt',
	'album' => 'Album',
	'result' => 'Tulemus',
	'dir_ro' => 'Pole kirjutatav. ',
	'dir_cant_read' => 'Pole loetav. ',
	'insert' => 'Lisan uued pildid galeriisse',
	'list_new_pic' => 'Uute piltide loetelu',
	'insert_selected' => 'Lisa valitud pildid',
	'no_pic_found' => 'Ei leitud uusi pilte',
	'be_patient' => 'Palun ole kannatlik, skript vajab piltide lisamiseks aega',
	'notes' =>  '<ul>'.
				'<li><b>OK</b> : tähendab, et pilt lisati edukalt'.
				'<li><b>DP</b> : tähendab, et pilt on dublikaat ja sisaldub juba andmebaasis'.
				'<li><b>PB</b> : tähendab, et pilti ei saa lisada, kontrolli oma seadeid ja kataloogi õigusi kus su pildid asuvad'.
				'<li>Kui märgid \'OK, DP, PB\' ei ilmu, klikka katkenud pildil nägemaks mistahes PHP poolt antud veateadet'.
				'<li>Kui su sirvijal on \'timeout\', vajuta reload nuppu'.
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
	'title' => 'Salvesa pilt',
	'max_fsize' => 'Maksimaalne lubatud failisuurus on %s KB',
	'album' => 'Album',
	'picture' => 'Pilt',
	'pic_title' => 'Pildi pealkiri',
	'description' => 'Pildi kirjeldus',
	'keywords' => 'Märksõnad (eralda tühikutega)',
	'err_no_alb_uploadables' => 'Vabandust, kuid siin pole albumit kuhu sul oleks piltide salvestamine lubatud',
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
	'title' => 'Halda kasutajaid',
	'name_a' => 'Nimed kasvavalt',
	'name_d' => 'Nimed kahanevalt',
	'group_a' => 'Grupid kasvavalt',
	'group_d' => 'Grupid kahanevalt',
	'reg_a' => 'Reg kuupäev kasvavalt',
	'reg_d' => 'Reg kuupäev kahanevalt',
	'pic_a' => 'Piltide arv kasvavalt',
	'pic_d' => 'Piltide arv kahanevalt',
	'disku_a' => 'Ketta kasutus kasvavalt',
	'disku_d' => 'Ketta kasutus kahanevalt',
	'sort_by' => 'Sordi kasutajaid',
	'err_no_users' => 'Kasutajate tabel tühi !',
	'err_edit_self' => 'Sa võid muuta oma profiili, kasuta \'Minu profiil\' linki selleks',
	'edit' => 'MUUDA',
	'delete' => 'KUSTUTA',
	'name' => 'Kasutajanimi',
	'group' => 'Grupp',
	'inactive' => 'Mitteaktiivne',
	'operations' => 'Funktsioonid',
	'pictures' => 'Pildid',
	'disk_space' => 'Kasutatud ruumi / Kvoot',
	'registered_on' => 'Registreeritud',
	'u_user_on_p_pages' => '%d kasutajat %d-el lehel',
	'confirm_del' => 'Oled kindel, et tahad selle kasutaja KUSTUTADA ? \\nKõik tema pildid ja albumid kustutatakse samuti.',
	'mail' => 'POST',
	'err_unknown_user' => 'Valitud kasutajat pole !',
	'modify_user' => 'Muuda kasutaja',
	'notes' => 'Märkused',
	'note_list' => '<li>Kui sa ei taha muuta kasutuselolevat parooli, jäta "parool" väli tühjaks',
	'password' => 'Parool',
	'user_active' => 'Kasutaja aktiivne',
	'user_group' => 'Kasutaja grupp',
	'user_email' => 'Kasutaja epost',
	'user_web_site' => 'Kasutaja kodukas',
	'create_new_user' => 'Loo uus kasutaja',
	'user_location' => 'Kasutaja elukoht',
	'user_interests' => 'Kasutaja huvid',
	'user_occupation' => 'Kasutaja elukutse',
);
?>