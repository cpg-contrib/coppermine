<?php
// ------------------------------------------------------------------------- //
//  Coppermine Photo Gallery                                                 //
// ------------------------------------------------------------------------- //
//  Copyright (C) 2002,2003  Grégory DEMAR <gdemar@wanadoo.fr>               //
//  http://www.chezgreg.net/coppermine/                                      //
// ------------------------------------------------------------------------- //
//  Based on PHPhotoalbum by Henning Střverud <henning@stoverud.com>         //
//  http://www.stoverud.com/PHPhotoalbum/                                    //
// ------------------------------------------------------------------------- //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//  Translation by Kakanj.net info@kakanj.net                                //
// ------------------------------------------------------------------------- //

$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('Bytes', 'KB', 'MB');

// Day of weeks and months
$lang_day_of_week = array('nedjelja', 'ponedjeljak', 'utorak', 'srijeda', 'četvrtak', 'petak', 'Sub');
$lang_month = array('jan', 'feb', 'mar', 'apr', 'maj', 'jun', 'jul', 'avg', 'sep', 'okt', 'nov', 'dec');

// Some common strings
$lang_yes = 'Da';
$lang_no  = 'Ne';
$lang_back = 'NAZAD';
$lang_continue = 'Nastavi';
$lang_info = 'Informacija';
$lang_error = 'Greška';

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$album_date_fmt =    '%B %d, %Y';
$lastcom_date_fmt =  '%d/%m/%y at %H:%M';
$lastup_date_fmt = '%B %d, %Y';
$register_date_fmt = '%B %d, %Y';
$lasthit_date_fmt = '%B %d, %Y at %I:%M %p';
$comment_date_fmt =  '%B %d, %Y at %I:%M %p';

// For the word censor
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*');

$lang_meta_album_names = array(
	'random' => 'Slučajna slika',
	'lastup' => 'Posljednje dodano',
	'lastcom' => 'Posljedni komentari',
	'topn' => 'Najgledanije',
	'toprated' => 'Visoko rangirano',
	'lasthits' => 'Posljednje pogledano',
	'search' => 'Rezultati pretrage'
);

$lang_errors = array(
	'access_denied' => 'Nemaš pristup ovoj stranici.',
	'perm_denied' => 'Nije ti dozvoljeno da izvršiš tu operaciju.',
	'param_missing' => 'Skripta je pozvana bez obaveznih parametara.',
	'non_exist_ap' => 'Izabrani album/slika više ne postoji !',
	'quota_exceeded' => 'Disk kvota prekoračena<br /><br />Imate dozvoljenu kvotu od [quota]K, vaše slike zauzimaju [space]K, dodavanjem ove slike probijate dozvoljenu kvotu.',
	'gd_file_type_err' => 'Ukoliko kotristite GD slikovnu galeriju dozvoljene slike su samo JPG i PNG.',
	'invalid_image' => 'Slika koju ste uploadali je odbačena ili je ne može obraditi GD galerija',
	'resize_failed' => 'Nije moguće napraviti manju sličicu.',
	'no_img_to_display' => 'Nema slike za prikaz',
	'non_exist_cat' => 'Izabrana kategorija ne postoji',
	'orphan_cat' => 'Kategorija ne postoji, pokrenite organizator kategorija da bi riješili problem.',
	'directory_ro' => 'Direktoriju \'%s\' nije dodjeljen status writable, slike ne mogu biti izbrisane',
	'non_exist_comment' => 'Izabrani komentar ne postoji.',
	'pic_in_invalid_album' => 'Slika je u nepostojećem albumu (%s)!?'
);

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
	'alb_list_title' => 'Idi na listu albuma',
	'alb_list_lnk' => 'Lista albuma',
	'my_gal_title' => 'Idi na moju ličnu galeriju',
	'my_gal_lnk' => 'Moja galerija',
	'my_prof_lnk' => 'Moj profil',
	'adm_mode_title' => 'Prebaci na admin mod',
	'adm_mode_lnk' => 'Admin mod',
	'usr_mode_title' => 'Prebaci na korisnički mod',
	'usr_mode_lnk' => 'Korisnički mod',
	'upload_pic_title' => 'Uploadaj sliku u album',
	'upload_pic_lnk' => 'Upload sliku',
	'register_title' => 'Kreiraj account',
	'register_lnk' => 'Registracija',
	'login_lnk' => 'Ulaz',
	'logout_lnk' => 'Izlaz',
	'lastup_lnk' => 'Posljednje dodano',
	'lastcom_lnk' => 'Posljednji komentari',
	'topn_lnk' => 'Najgledanije',
	'toprated_lnk' => 'Visoko rangirano',
	'search_lnk' => 'Pretraga',
);

$lang_gallery_admin_menu = array(
	'upl_app_lnk' => 'Dozvola uploada',
	'config_lnk' => 'Konfiguracija',
	'albums_lnk' => 'Albumi',
	'categories_lnk' => 'Kategorije',
	'users_lnk' => 'Korisnici',
	'groups_lnk' => 'Grupe',
	'comments_lnk' => 'Komentari',
	'searchnew_lnk' => 'Prebacivanje',
);

$lang_user_admin_menu = array(
	'albmgr_lnk' => 'Kreiraj / poredaj moje albume',
	'modifyalb_lnk' => 'Prepravi moje albume',
	'my_prof_lnk' => 'Moj profil',
);

$lang_cat_list = array(
	'category' => 'Kategorija',
	'albums' => 'Albumi',
	'pictures' => 'Slike',
);

$lang_album_list = array(
	'album_on_page' => '%d albuma na %d stranici'
);

$lang_thumb_view = array(
	'date' => 'DATUM',
	'name' => 'NAZIV',
	'sort_da' => 'Poredaj po datumu novije',
	'sort_dd' => 'Poredaj po datumu starije',
	'sort_na' => 'Poredaj po nazivu novije',
	'sort_nd' => 'Poredaj po nazivu starije',
	'pic_on_page' => '%d slika na %d stranici',
	'user_on_page' => '%d korisnika na %d stranici'
);

$lang_img_nav_bar = array(
	'thumb_title' => 'Povratak na sličice',
	'pic_info_title' => 'Pokaži/sakrij info o fotografiji',
	'slideshow_title' => 'Slideshow',
	'ecard_title' => 'Pošalji ovu sliku kao razglednicu',
	'ecard_disabled' => 'razglednica je isključena',
	'ecard_disabled_msg' => 'Nije ti dozvoljeno da pošalješ razglednicu',
	'prev_title' => 'Pogledaj prethodnu sliku',
	'next_title' => 'Pogledaj sljedeću sliku',
	'pic_pos' => 'SLIKA %s/%s',
);

$lang_rate_pic = array(
	'rate_this_pic' => 'Ocijeni ovu fotografiju ',
	'no_votes' => '(Još nema ocjena)',
	'rating' => '(trenute ocjene : %s / 5 sa %s glasova)',
	'rubbish' => 'Bez veze',
	'poor' => 'Onako',
	'fair' => 'Može proći',
	'good' => 'Dobro',
	'excellent' => 'Odlično',
	'great' => 'Fantastično',
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
	CRITICAL_ERROR => 'Kritična greška',
	'file' => 'Datoteka: ',
	'line' => 'Linija: ',
);

$lang_display_thumbnails = array(
	'filename' => 'Naziv datoteke : ',
	'filesize' => 'Veličina : ',
	'dimensions' => 'Dimenzije : ',
	'date_added' => 'Dodana : '
);

$lang_get_pic_data = array(
	'n_comments' => '%s komentara',
	'n_views' => '%s pregleda',
	'n_votes' => '(%s glasova)'
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
	'Exclamation' => 'Uzvik',
	'Question' => 'Pitanje',
	'Very Happy' => 'Veoma sretan',
	'Smile' => 'Osmjeh',
	'Sad' => 'Tužan',
	'Surprised' => 'Iznenađen',
	'Shocked' => 'Šokiran',
	'Confused' => 'Zbunjen',
	'Cool' => 'Cool',
	'Laughing' => 'Smijeh',
	'Mad' => 'Bijesan',
	'Razz' => 'Važan',
	'Embarassed' => 'Postiđen',
	'Crying or Very sad' => 'Veoma tužan',
	'Evil or Very Mad' => 'Zao',
	'Twisted Evil' => 'Đavo',
	'Rolling Eyes' => 'Kotrljajuće oči',
	'Wink' => 'Mig',
	'Idea' => 'Ideja',
	'Arrow' => 'Strelica',
	'Neutral' => 'Neutralan',
	'Mr. Green' => 'G. Zeleni',
);

// ------------------------------------------------------------------------- //
// File addpic.php
// ------------------------------------------------------------------------- //

// void

// ------------------------------------------------------------------------- //
// File admin.php
// ------------------------------------------------------------------------- //

if (defined('ADMIN_PHP')) $lang_admin_php = array(
	0 => 'Napuštanje administratorskog moda...',
	1 => 'Ulaz u administratorski mod...',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
	'alb_need_name' => 'Moraš upisati ime albuma !',
	'confirm_modifs' => 'Da li ste sigurni da želite napraviti promjene ?',
	'no_change' => 'Niste napravili nikakvu promjenu !',
	'new_album' => 'Novi album',
	'confirm_delete1' => 'Da li ste sigurni da želite izbrisati ovaj album ?',
	'confirm_delete2' => '\nSve slike i komentari koji su tu biće izbrisani !',
	'select_first' => 'Prvo izaberite album',
	'alb_mrg' => 'Organizacija albuma',
	'my_gallery' => '* Moja galerija *',
	'no_category' => '* Nema kategorija *',
	'delete' => 'Izbriši',
	'new' => 'Novo',
	'apply_modifs' => 'Napravi promjene',
	'select_category' => 'Izaberi kategoriju',
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
	'miss_param' => 'Parametri obavezni za \'%s\'komanda nije izvršena !',
	'unknown_cat' => 'Izabrana kategorija ne postoji u bazi podataka',
	'usergal_cat_ro' => 'Korišnička kategorija ne može biti izbrisana !',
	'manage_cat' => 'Organizuj kategorije',
	'confirm_delete' => 'Da li ste sigurni da želite IZBRISATI ovu kategoriju',
	'category' => 'Kategorija',
	'operations' => 'Operacije',
	'move_into' => 'Pomjeri u',
	'update_create' => 'Osvježi/Napravi kategoriju',
	'parent_cat' => 'Osnovna kategorija',
	'cat_title' => 'Naziv kategorije',
	'cat_desc' => 'Opis kategorije'
);

// ------------------------------------------------------------------------- //
// File config.php
// ------------------------------------------------------------------------- //

if (defined('CONFIG_PHP')) $lang_config_php = array(
	'title' => 'Konfiguracija',
	'restore_cfg' => 'Vrati na osnovnu konfiguraciju',
	'save_cfg' => 'Snimi novu konfiguraciju',
	'notes' => 'Napomena',
	'info' => 'Informacija',
	'upd_success' => 'Konfiguracija je osvježena',
	'restore_success' => 'Osnova konfiguracija je vraćena',
	'name_a' => 'Naziv novije',
	'name_d' => 'Naziv starije',
	'date_a' => 'Datum novije',
	'date_d' => 'Datum starije'
);

if (defined('CONFIG_PHP')) $lang_config_data = array(
	'Osnovno podešavanje',
	array('Naziv galerije', 'gallery_name', 0),
	array('Opis galerije', 'gallery_description', 0),
	array('Email administratora galerije', 'gallery_admin_email', 0),
	array('Krajnja adresa za \'See more pictures\' link u razglednicama', 'ecards_more_pic_target', 0),
	array('Jezik', 'lang', 5),
	array('Tema', 'theme', 6),

	'Album list view',
	array('Širina glavne tabele (pikseli ili %)', 'main_table_width', 0),
	array('Broj levela kategorija za prikaz', 'subcat_level', 0),
	array('Broj albuma za prikaz', 'albums_per_page', 0),
	array('Broj kolona za listu albuma', 'album_list_cols', 0),
	array('Veličina sličice u pikselima', 'alb_list_thumb_size', 0),
	array('Sadržaj naslovne stranice', 'main_page_layout', 0),

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
	'empty_name_or_com' => 'Potrebno je da upišete svoje ime i komentar',
	'com_added' => 'Vaš komentar je dodan',
	'alb_need_title' => 'Morate upisati naziv za album !',
	'no_udp_needed' => 'Nije potrebno osvježavanje.',
	'alb_updated' => 'Album je osvježen',
	'unknown_album' => 'Izabrani album ne postoji ili nemate dozvolu za upload u ovaj album',
	'no_pic_uploaded' => 'Slika nije dodana !<br /><br />Ako ste zaista izabrali sliku za upload, onda je tenutna greška...',
	'err_mkdir' => 'Nije moguće napraviti direktorij %s !',
	'dest_dir_ro' => 'Destinacija direktorija %s nije writable u skripti !',
	'err_move' => 'Nije moguće pomjeriti %s u %s !',
	'err_fsize_too_large' => 'Dimenzije slike koju uploadate je prevelika (maksimalno dozvoljeno je %s x %s) !',
	'err_imgsize_too_large' => 'Veličina koju uploadate je prevelika (maksimalno dozvoljeno je %s KB) !',
	'err_invalid_img' => 'Datoteka koju uploadate nije  dozvoljeni format slike !',
	'allowed_img_types' => 'Možete uploadati samo %s slika.',
	'err_insert_pic' => 'Slika \'%s\' (ne)može biti ubačena u album ',
	'upload_success' => 'Vaša slika je uploadana uspješno<br /><br />Slika će biti vidljiva nakon administratove dozvole.',
	'info' => 'Informacija',
	'com_added' => 'Komentar dodan',
	'alb_updated' => 'Album osvježen',
	'err_comment_empty' => 'Vaš komentar je prazan !',
	'err_invalid_fext' => 'Samo datoteke sa sljedećim ekstenzijama su prihvatljive : <br /><br />%s.',
	'no_flood' => 'Žao nam je vi ste već autor posljednjeg komentara upisanog za ovu sliku<br /><br />Prepravite komentar koji ste poslali ako želite promijeniti komentar o slici',
	'redirect_msg' => 'Bićete prebačeni automatski.<br /><br /><br />Klinki \'CONTINUE\' ako se stranica ne osvježi automatski',
	'upl_success' => 'Slika uspješno dodana',
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
	'caption' => 'Naziv',
	'fs_pic' => 'puna veličina slike',
	'del_success' => 'uspješno',
	'ns_pic' => 'normalna veličina slike',
	'err_del' => 'nemože biti izbrisano',
	'thumb_pic' => 'sličica',
	'comment' => 'komentar',
	'im_in_alb' => 'slika u albumu',
	'alb_del_success' => 'Album \'%s\' izbrisan',
	'alb_mgr' => 'Organizator albuma',
	'err_invalid_data' => 'Neispravni podaci primljenji u \'%s\'',
	'create_alb' => 'Kreiranje albuma \'%s\'',
	'update_alb' => 'Osvježavanje albuma \'%s\' sa malo \'%s\' i index \'%s\'',
	'del_pic' => 'Izbriši sliku',
	'del_alb' => 'Izbriši album',
	'del_user' => 'Izbriši korisnika',
	'err_unknown_user' => 'Izabrani korisnik ne postoji !',
	'comment_deleted' => 'komentar uspješno izbrisan',
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
	'confirm_del' => 'Da li sigurno želite IZBRISATI ovu sliku ? \\nKomentari će takođe biti izbrisani.',
	'del_pic' => 'IZBRIŠI OVU SLIKU',
	'size' => '%s x %s pixela',
	'views' => '%s puta',
	'slideshow' => 'Slideshow',
	'stop_slideshow' => 'ZAUSTAVI SLIDESHOW',
	'view_fs' => 'Klikni da vidiš u punoj veličini',
);

$lang_picinfo = array(
	'title' =>'Informacije o slici',
	'Filename' => 'Ime datoteke',
	'Album name' => 'Ime albuma',
	'Rating' => 'Ocjena (%s glasova)',
	'Keywords' => 'Ključne riječi',
	'File Size' => 'Veličina datoteke',
	'Dimensions' => 'Dimenzije',
	'Displayed' => 'Prikazano',
	'Camera' => 'Kamera',
	'Date taken' => 'Datum uzimanja',
	'Aperture' => 'Otvor',
	'Exposure time' => 'Vrijeme izlaganja',
	'Focal length' => 'Odstojanje od centra',
	'Comment' => 'Komentar'
);

$lang_display_comments = array(
	'OK' => 'OK',
	'edit_title' => 'Prepravi ovaj komentar',
	'confirm_delete' => 'Sigurni ste da želite izbrisati ovaj komentar ?',
	'add_your_comment' => 'Dodajte svoj komentar',
	'your_name' => 'Vaše ime',
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
	'title' => 'Send an e-card',
	'invalid_email' => '<b>Ops</b> : neispravna email adresa !',
	'ecard_title' => 'Razglednica od %s za tebe',
	'view_ecard' => 'Ako razglednica nije prikazana ispravno, kliknite na ovaj link',
	'view_more_pics' => 'Kliknite na ovaj link da vidite više slika !',
	'send_success' => 'Vaša razglednica je poslana',
	'send_failed' => 'Žao nam je, ali server ne može poslati vašu razglednicu...',
	'from' => 'Od',
	'your_name' => 'Vaše ime',
	'your_email' => 'Vaša email adresa',
	'to' => 'Za',
	'rcpt_name' => 'Ime primatelja',
	'rcpt_email' => 'Email adresa primatelja',
	'greetings' => 'Naslov',
	'message' => 'Poruka',
);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
	'pic_info' => 'Slika&nbsp;info',
	'album' => 'Album',
	'title' => 'Naslov',
	'desc' => 'Opis',
	'keywords' => 'Ključne riječi',
	'pic_info_str' => '%sx%s - %sKB - %s pregleda - %s glasova',
	'approve' => 'Odobri sliku',
	'postpone_app' => 'Odgodi odobrenje',
	'del_pic' => 'Izbriši sliku',
	'reset_view_count' => 'Resetuj brojač pregleda',
	'reset_votes' => 'Resetuj glasove',
	'del_comm' => 'Izbriši komentare',
	'upl_approval' => 'Odobri upload',
	'edit_pics' => 'Prepravi slike',
	'see_next' => 'Pogledaj sljedeće slike',
	'see_prev' => 'Pogledaj prethodne slike',
	'n_pic' => '%s slike',
	'n_of_pic_to_disp' => 'Broj slika za prikazivanje',
	'apply' => 'Napravi promjene'
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
	'group_name' => 'Naziv grupe',
	'disk_quota' => 'Kvota diska',
	'can_rate' => 'Može ocijeniti sliku',
	'can_send_ecards' => 'Može poslati razglednicu',
	'can_post_com' => 'Može komentirati',
	'can_upload' => 'Može uploadati sliku',
	'can_have_gallery' => 'Može imati ličnu galeriju',
	'apply' => 'Napravi promjene',
	'create_new_group' => 'Kreiraj novu grupu',
	'del_groups' => 'Izbriši izabrane grupe',
	'confirm_del' => 'Upozorenje, kada izbrišeš grupu, korisnici koji pripadaju toj grupi biće prebačeni u \'Registered\' grupu !\n\nDa li želiš nastaviti ?',
	'title' => 'Organizuj korisničke grupe',
	'approval_1' => 'Pub. Upl. approval (1)',
	'approval_2' => 'Priv. Upl. approval (2)',
	'note1' => '<b>(1)</b> Za upload u javni album potrebna dozvola administratora',
	'note2' => '<b>(2)</b> Za upload u album koji pripada korisniku potrebna dozvola administratora',
	'notes' => 'Napomena'
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
	'welcome' => 'Dobro došli !'
);

$lang_album_admin_menu = array(
	'confirm_delete' => 'Da li ste sigurni da želite IZBRISATI ovaj album ? \\nSve slike i komentari će takođe biti izbrisani.',
	'delete' => 'IZBRIŠI',
	'modify' => 'KARAKTERISTIKE',
	'edit_pics' => 'PREPRAVKA',
);

$lang_list_categories = array(
	'home' => 'POČETNA',
	'stat1' => '<b>[pictures]</b> slika u <b>[albums]</b> albuma i <b>[cat]</b> kategorija sa <b>[comments]</b> komentara pogledani <b>[views]</b> puta',
	'stat2' => '<b>[pictures]</b> slika u <b>[albums]</b> albumi pregledani <b>[views]</b> puta',
	'xx_s_gallery' => '%s\'s Galerija',
	'stat3' => '<b>[pictures]</b> slika u <b>[albums]</b> albuma sa <b>[comments]</b> komentara pogledano <b>[views]</b> puta'
);

$lang_list_users = array(
	'user_list' => 'Lista korisnika',
	'no_user_gal' => 'Nema korisničkih galerija',
	'n_albums' => '%s album(a)',
	'n_pics' => '%s slika'
);

$lang_list_albums = array(
	'n_pictures' => '%s slika',
	'last_added' => ', zadnja dodana %s'
);

}

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
	'login' => 'Ulaz',
	'enter_login_pswd' => 'Upišite korisničko ime i šifru za ulaz',
	'username' => 'Korisničko ime',
	'password' => 'Šifra',
	'remember_me' => 'Zapamti me',
	'welcome' => 'Lijep pozdrav %s ...',
	'err_login' => '*** Nešto ne valja. Probajte ponovno ***',
	'err_already_logged_in' => 'Već ste logirani !',
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
	'logout' => 'Izlaz',
	'bye' => 'Vozdra %s ...',
	'err_not_loged_in' => 'Niste logirani !',
);

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
	'upd_alb_n' => 'Osvježi album %s',
	'general_settings' => 'Osnovno štimanje',
	'alb_title' => 'Naziv albuma',
	'alb_cat' => 'Kategorija albuma',
	'alb_desc' => 'Opis albuma',
	'alb_thumb' => 'Sličice albuma',
	'alb_perm' => 'Dozvole za ovaj album',
	'can_view' => 'Album može biti vidljiv',
	'can_upload' => 'Posjetioci mogu uploadat slike',
	'can_post_comments' => 'Posjetioci mogu pisati komentare',
	'can_rate' => 'Posjetioci mogu ocijenjivati slike',
	'user_gal' => 'Korisnikova galerija',
	'no_cat' => '* Nema kategorije *',
	'alb_empty' => 'Album je prazan',
	'last_uploaded' => 'Zadnje uploadano',
	'public_alb' => 'Svi (javni album)',
	'me_only' => 'Samo ja',
	'owner_only' => 'Vlasnik albuma (%s) samo',
	'groupp_only' => 'Members of the \'%s\' group',
	'err_no_alb_to_modify' => 'U bazi podataka nema albuma koji možete prepraviti.',
	'update' => 'Osvježi album'
);

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
	'already_rated' => 'Žao mi je već ste ocijenili ovu sliku',
	'rate_ok' => 'Glas upisan',
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
Za postavljanje vlastitih fotografija u galeriju potrebno je registrovati se. Prilikom registracije obavezno morate upisati vašu ispravnu, postojeću email adresu, na koju će vam biti poslan email sa linkom kojim ćete potvrditi vašu registraciju.<br />
<br /> 
Slažem se da neću postavljati bilo kakve uznemirujuće, pornografske, vulgarne fotografije kao i fotografije koje potiču na bilo kakav oblik mržnje. Slažem se takođe da Administrator ovog dijela Administrator ima pravo da izbriše sve fotografije koje nisu prihvatljive, odnosno nabrojane kategorije fotografija. Slažem se da Administrator može izbrisati svaki moj komentar ukoliko ocijeni da nije prikladan. Kao korisnik ovoe foto galerije slažem se da svi moji podaci koje upišem u registracijsku formu budu pohranjeni u bazu podataka. Ukoliko na bilo kakav način uznemiravam foto galeriju slažem se da administator banuje moju IP adresu, odnosno da mi do daljnjeg zabrani pristup ovoim stranicama. I tako dalje, nadamo se da ćete poštovati ova pravila.<br />
<br />
Ova stranica koristi cookies za pohranu podataka na vašem računaru. Email adresa se koristi samo za potvrdu vaše registracije.<br />
<br />
Klikom na 'Slažem se' prihvatate uslove korištenja i nadamo se da ih nećete prekršiti.
EOT;

$lang_register_php = array(
	'page_title' => 'Registracija',
	'term_cond' => 'Pravila i uslovi',
	'i_agree' => 'Slažem se',
	'submit' => 'Pošalji registraciju',
	'err_user_exists' => 'Izabrano korisničko ime već je registrovano, probajte neko drugo',
	'err_password_mismatch' => 'Nedostaju dvije šifre, upišite ponovno',
	'err_uname_short' => 'Korisničko ime mora imati najmanje 2 znaka',
	'err_password_short' => 'Šifra mora imati najmanje 2 znaka',
	'err_uname_pass_diff' => 'Korisničko ime i šifra ne mogu biti isti',
	'err_invalid_email' => 'Neispravna email adresa',
	'err_duplicate_email' => 'Već je neko registrovan sa istom email adresom koju ste upisali',
	'enter_info' => 'Upišite registracijske podatke',
	'required_info' => 'Obavezni podaci',
	'optional_info' => 'Dodatni podaci',
	'username' => 'Korisničko ime',
	'password' => 'Šifra',
	'password_again' => 'Šifra ponvno',
	'email' => 'Email',
	'location' => 'Lokacija',
	'interests' => 'Interesi',
	'website' => 'Web stranica',
	'occupation' => 'Zanimanje',
	'error' => 'GREŠKA',
	'confirm_email_subject' => '%s - Potvrdite registraciju',
	'information' => 'Informacija',
	'failed_sending_email' => 'Registracijsku konfirmaciju nije moguće poslati !',
	'thank_you' => 'Hvala na registraciji.<br /><br />Email sa informacijama kako da aktivirate vaš korisnički račun je poslan na email adresu koju ste upisali prilikom registracije.',
	'acct_created' => 'Vaš korisnički račun je otvoren i sada možete pristupiti stranici sa vašim korisničim imenom i šifrom',
	'acct_active' => 'Vaš korisnički račun od sada je aktivan i možete stranici pristupiti sa vašim korisničim imeno i šifrom',
	'acct_already_act' => 'Vaš korisnički račun je već aktivan !',
	'acct_act_failed' => 'Ovaj korisnički račun ne može biti aktivan !',
	'err_unk_user' => 'Izabrani korisnik ne postoji !',
	'x_s_profile' => '%s\'s profil',
	'group' => 'Grupa',
	'reg_date' => 'Registovan(a)',
	'disk_usage' => 'Iskorištenost disk prostora',
	'change_pass' => 'Promijeni šifru',
	'current_pass' => 'Trenutna šifra',
	'new_pass' => 'Nova šifra',
	'new_pass_again' => 'Nova šifra ponovno',
	'err_curr_pass' => 'Trenutna šifra nije ispravna',
	'apply_modif' => 'Izvrši promjene',
	'change_pass' => 'Promijeni moju šifru',
	'update_success' => 'Vaš profil je osvježen',
	'pass_chg_success' => 'Vaša šifra je promijenjena',
	'pass_chg_error' => 'Vaša šifra nije promijenjena',
);

$lang_register_confirm_email = <<<EOT
Hvala na registraciji na {SITE_NAME}

Vaše korisničko ime : "{USER_NAME}"
Vaša šifra : "{PASSWORD}"

Da bi aktivirali vaš korisnički račun potrebno je da kliknete na link ispod ili ako želite kopirajte link i nalijepite u vaš web browser.

{ACT_LINK}

Pozdrav,

Team {SITE_NAME}

EOT;

}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
	'title' => 'Pročitajte komentare',
	'no_comment' => 'Nema komentara za čitanje',
	'n_comm_del' => '%s komentari su izbrisani',
	'n_comm_disp' => 'Broj komentara za prikaz',
	'see_prev' => 'Pogledaj prethodno',
	'see_next' => 'Pogledaj sljedeće',
	'del_comm' => 'Izbriši izabrane komentare',
);


// ------------------------------------------------------------------------- //
// File search.php - OK
// ------------------------------------------------------------------------- //

if (defined('SEARCH_PHP')) $lang_search_php = array(
	0 => 'Pretražite kolekciju slika',
);

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
	'page_title' => 'Pretraga novih slika',
	'select_dir' => 'Izaberi direktorij',
	'select_dir_msg' => 'Ova funkcija dozvoljava vam da napravite put do slike koju imate na svom server.<br /><br />Izaberite direktorij gdje ste uploadali svoje slike',
	'no_pic_to_add' => 'Nema slike za dodati',
	'need_one_album' => 'Morate imati najmanje jedan album da bi koristili ovu funkciju',
	'warning' => 'Upozorenje',
	'change_perm' => 'skripta ne može upisivati u ovaj direktorij, morate promijeniti CHMOD na 755 ili 777 prije nego što dodate slike !',
	'target_album' => '<b>Prebaci sliku iz &quot;</b>%s<b>&quot; u </b>%s',
	'folder' => 'Folder',
	'image' => 'Slika',
	'album' => 'Album',
	'result' => 'Rezultat',
	'dir_ro' => 'Nije writable. ',
	'dir_cant_read' => 'Nije readable. ',
	'insert' => 'Dodavanje novih slika u galeriju',
	'list_new_pic' => 'Lista novih slika',
	'insert_selected' => 'Ubaci izabrane slike',
	'no_pic_found' => 'Nije pronađema nova slika',
	'be_patient' => 'Molimo budite strpljivi, skripti treba vremena da doda slike',
	'notes' =>  '<ul>'.
				'<li><b>OK</b> : znači da je slika uspješno dodana'.
				'<li><b>DP</b> : znači da je slika duplikat i da je već u bazi podataka'.
				'<li><b>PB</b> : znači da sliku nije moguće dodati, provjerite vlastitu konfiguraciju i dozvolu direktorija gdje su slike locirane'.
				'<li>Ako OK, DP, PB \'signs\' se ne pojave klikni na puknutu sliku da vidiš koju je grešku napravio PHP'.
				'<li>Ako je sesija istekla, pritisnite refresh'.
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
	'title' => 'Upload sliku',
	'max_fsize' => 'Maksimalno dozvoljena veličina je %s KB',
	'album' => 'Album',
	'picture' => 'Slika',
	'pic_title' => 'Naslov slike',
	'description' => 'Opis slike',
	'keywords' => 'Ključne riječi (odvojiti praznim mjestom)',
	'err_no_alb_uploadables' => 'Žao nam je ovdje nema albuma gdje bi mogli ubaciti sliku.',
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
	'title' => 'Organizuj korisnike',
	'name_a' => 'Ime ascending',
	'name_d' => 'Ime descending',
	'group_a' => 'Grupa ascending',
	'group_d' => 'Grupa descending',
	'reg_a' => 'Datum registracije ascending',
	'reg_d' => 'Datum registracije descending',
	'pic_a' => 'Broj slika ascending',
	'pic_d' => 'Broj slika descending',
	'disku_a' => 'Iskorištenost diska ascending',
	'disku_d' => 'Iskorištenost diska descending',
	'sort_by' => 'Poredaj korisnike po',
	'err_no_users' => 'Korisnička tabla je prazna !',
	'err_edit_self' => 'Ne možete promijeniti svoj profil, koristite \'My profile\' link za to',
	'edit' => 'PREPRAVI',
	'delete' => 'IZBRIŠI',
	'name' => 'Korisničko ime',
	'group' => 'Grupa',
	'inactive' => 'Neaktivno',
	'operations' => 'Operacije',
	'pictures' => 'Slike',
	'disk_space' => 'Iskorišteno prostora / Kvota',
	'registered_on' => 'Registrovan',
	'u_user_on_p_pages' => '%d korisnika na %d stranica',
	'confirm_del' => 'Da li ste sigurni da želite OBRISATI korisnika ? \\nSve njegove slike i albumi će biti izbrisani.',
	'mail' => 'MAIL',
	'err_unknown_user' => 'Izabrani korisnik ne postoji !',
	'modify_user' => 'Modificiraj korisnika',
	'notes' => 'Napomena',
	'note_list' => '<li>Ako ne želite da promijenite trenutnu šifru, ostavite "šifra" polje prazno',
	'password' => 'Šifra',
	'user_active' => 'Korisnik je aktivan',
	'user_group' => 'Grupa',
	'user_email' => 'Email',
	'user_web_site' => 'Web stranica',
	'create_new_user' => 'Kreiraj novog korisnika',
	'user_location' => 'Lokacija',
	'user_interests' => 'Interesi',
	'user_occupation' => 'Zanimanje',
);
?>