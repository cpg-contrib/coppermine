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
//  Prevod v slovenš&egrave;ino: s55hh@s55hh.com - http://s55hh.com                 //
// ------------------------------------------------------------------------- //

$lang_charset = 'windows-1250';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('Bitov', 'kb', 'Mb');

// Day of weeks and months
$lang_day_of_week = array('Ned', 'Pon', 'Tor', 'Sre', '&Egrave;et', 'Pet', 'Sob');
$lang_month = array('Jan', 'Feb', 'Mar', 'Apr', 'Maj', 'Jun', 'Jul', 'Avg', 'Sep', 'Okt', 'Nov', 'Dec');

// Some common strings
$lang_yes = 'Da';
$lang_no  = 'Ne';
$lang_back = 'NAZAJ';
$lang_continue = 'NAPREJ';
$lang_info = 'Informacija';
$lang_error = 'Napaka';

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$album_date_fmt =    '%d.%m.%Y';
$lastcom_date_fmt =  '%d.%m.%Y';
$lastup_date_fmt = '%d.%m.%Y';
$register_date_fmt = '%d.%m.%Y';
$lasthit_date_fmt = '%d.%m.%Y';
$comment_date_fmt =  '%d.%m.%Y';

// For the word censor
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*');

$lang_meta_album_names = array(
        'random' => 'Naklju&egrave;ne slike',
        'lastup' => 'Nove slike',
        'lastcom' => 'Novi komentarji',
        'topn' => 'Naj ogledi',
        'toprated' => 'Naj ocene',
        'lasthits' => 'Zadnji ogledi',
        'search' => 'Rezultat iskanja'
);

$lang_errors = array(
        'access_denied' => 'Do te strani pa ne moreš.',
        'perm_denied' => 'Nimaš pravic za izvedbo tega ukaza.',
        'param_missing' => 'Manjka ustrezni argument.',
        'non_exist_ap' => 'Izbrani album/slika ne obstaja!',
        'quota_exceeded' => 'Disk je poln.<br /><br />Na razpolago imaš [quota]k, tvoje slike trenutno obsegajo [space]k, &egrave;e bi dodal še to sliko, bi presegel dovoljeni prostor na disku.',
        'gd_file_type_err' => 'Dovoljene vrste datotek so JPEG in PNG.',
        'invalid_image' => 'Datoteka/slika, ki si jo poslal je poškodovana ali pa ne v pravilnem formatu za obdelavo z GD knjižnico.',
        'resize_failed' => 'Ne morem narediti ikone oziroma pomanjšane slikice.',
        'no_img_to_display' => 'Trenutno še brez slik.',
        'non_exist_cat' => 'Željena kategorija ne obstaja.',
        'orphan_cat' => 'Kategorija ima dolo&egrave;eno neobstoje&egrave;o nadrejeno kategorijo. Popravi napako s pomo&egrave;jo opcije urejanje kategorij.',
        'directory_ro' => 'Direktorij \'%s\' ne dopuš&egrave;a pisanja (pravice), slike ni možno pobrisati.',
        'non_exist_comment' => 'Izbrani komentar sploh ne obstaja.',
        'pic_in_invalid_album' => 'Slika je v neobstoje&egrave;em albumu (%s)!?'
);

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
        'alb_list_title' => 'Pojdi na seznam albumov',
        'alb_list_lnk' => 'Seznam albumov',
        'my_gal_title' => 'Pojdi na mojo osebno galerijo',
        'my_gal_lnk' => 'Moja galerija',
        'my_prof_lnk' => 'Moj profil',
        'adm_mode_title' => 'Administracija',
        'adm_mode_lnk' => 'Administracija',
        'usr_mode_title' => 'Uporabniški na&egrave;in',
        'usr_mode_lnk' => 'Uporabniški na&egrave;in',
        'upload_pic_title' => 'Dodaj sliko v album',
        'upload_pic_lnk' => 'Dodajanje slik',
        'register_title' => 'Ustvari ra&egrave;un',
        'register_lnk' => 'Registracija',
        'login_lnk' => 'Prijava',
        'logout_lnk' => 'Odjava',
        'lastup_lnk' => 'Zadnje slike',
        'lastcom_lnk' => 'Zadnji komentarji',
        'topn_lnk' => 'Naj ogledi',
        'toprated_lnk' => 'Naj ocene',
        'search_lnk' => 'Iskanje',
);

$lang_gallery_admin_menu = array(
        'upl_app_lnk' => 'Odobri slike',
        'config_lnk' => 'Nastavitve',
        'albums_lnk' => 'Albumi',
        'categories_lnk' => 'Kategorije',
        'users_lnk' => 'Uporabniki',
        'groups_lnk' => 'Skupine',
        'comments_lnk' => 'Komentarji',
        'searchnew_lnk' => 'Najdi nove slike',
);

$lang_user_admin_menu = array(
        'albmgr_lnk' => 'Ustvari/naro&egrave;i svoj album',
        'modifyalb_lnk' => 'Prilagodi svoj album',
        'my_prof_lnk' => 'Moje nastavitve',
);

$lang_cat_list = array(
        'category' => 'Kategorije',
        'albums' => 'Albumi',
        'pictures' => 'Slike',
);

$lang_album_list = array(
        'album_on_page' => 'Št. albumov: %d (št. strani: %d)'
);

$lang_thumb_view = array(
        'date' => 'DATUM',
        'name' => 'NAZIV',
        'sort_da' => 'Razvrsti po datumu naraš&egrave;ajo&egrave;e',
        'sort_dd' => 'Razvrsti po datumu padajo&egrave;e',
        'sort_na' => 'Razvrsti po nazivu naraš&egrave;ajo&egrave;e',
        'sort_nd' => 'Razvrsti po nazivu padajo&egrave;e',
        'pic_on_page' => 'Št. slik: %d (št. strani: %d)',
        'user_on_page' => 'Št. uporabnikov: %d (št. strani: %d)'
);

$lang_img_nav_bar = array(
        'thumb_title' => 'Nazaj na stran z ikonami',
        'pic_info_title' => 'Prikaži/skrij informacije o sliki',
        'slideshow_title' => 'Samodejno predvajaj slike',
        'ecard_title' => 'Pošlji sliko kot e-razglednico',
        'ecard_disabled' => 'e-razglednice so izklopljene',
        'ecard_disabled_msg' => 'Oprosti, nimaš dovoljenja za pošiljanje razglednic',
        'prev_title' => 'Poglej prejšnjo sliko',
        'next_title' => 'Poglej naslednjo sliko',
        'pic_pos' => 'SLIKA %s od %s',
);

$lang_rate_pic = array(
        'rate_this_pic' => 'Oceni to sliko ',
        'no_votes' => '(Trenutno brez glasov)',
        'rating' => '(trenutna ocena: %s - skupaj glasov: %s)',
        'rubbish' => 'Zani&egrave;',
        'poor' => 'Slabo',
        'fair' => 'Hm, dobro',
        'good' => 'Zelo lepo',
        'excellent' => 'Odli&egrave;no',
        'great' => 'Kupim sliko, super',
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
        CRITICAL_ERROR => 'Kriti&egrave;na napaka',
        'file' => 'Datoteka: ',
        'line' => 'Vrstica: ',
);

$lang_display_thumbnails = array(
        'filename' => 'Ime datoteke: ',
        'filesize' => 'Velikost datoteke: ',
        'dimensions' => 'Dimenzija slike: ',
        'date_added' => 'Datum vpisa: '
);

$lang_get_pic_data = array(
        'n_comments' => 'Št. komentarjev: %s',
        'n_views' => 'Št. ogledov: %s',
        'n_votes' => '(št. glasov: %s)'
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
        0 => 'Zapuš&egrave;am administracijo galerije...',
        1 => 'Vstop v administracijo galerije...',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
        'alb_need_name' => 'Album mora imeti ime!',
        'confirm_modifs' => 'Si prepri&egrave;an, da želiš te spremembe?',
        'no_change' => 'Ni&egrave;esar nisi spremenil!',
        'new_album' => 'Novi album',
        'confirm_delete1' => 'Si prepri&egrave;an, da želiš pobrisati ta album?',
        'confirm_delete2' => '\nVse slike in vsi komentarji bodo odstranjeni!',
        'select_first' => 'Najprej izberi album',
        'alb_mrg' => 'Urejanje albumov',
        'my_gallery' => '* Moja galerija *',
        'no_category' => '* Brez kategorij *',
        'delete' => 'Pobriši',
        'new' => 'Novo',
        'apply_modifs' => 'Izvedi spremembe',
        'select_category' => 'Izberi kategorijo',
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
        'miss_param' => 'Parametri za \'%s\' ukaz niso bili vpisani!',
        'unknown_cat' => 'Izbrana kategorija ne obstaja!',
        'usergal_cat_ro' => 'Uporabniška kategorija se ne da pobrisati!',
        'manage_cat' => 'Urejanje kategorij',
        'confirm_delete' => 'Si prepri&egrave;an, da želiš pobrisati to kategorijo?',
        'category' => 'Kategorija',
        'operations' => 'Operacija',
        'move_into' => 'Premakni v',
        'update_create' => 'Posodobi/kreiraj kategorijo',
        'parent_cat' => 'Nadrejena kategorija',
        'cat_title' => 'Naziv kategorije',
        'cat_desc' => 'Opis kategorije'
);

// ------------------------------------------------------------------------- //
// File config.php
// ------------------------------------------------------------------------- //

if (defined('CONFIG_PHP')) $lang_config_php = array(
        'title' => 'Nastavitve',
        'restore_cfg' => 'Povrni za&egrave;etne nastavitve',
        'save_cfg' => 'Shrani nove nastavitve',
        'notes' => 'Opomba',
        'info' => 'Informacija',
        'upd_success' => 'Nastavitve galerije so bile posodobljene',
        'restore_success' => 'Povrnjene so osnovne nastavitve',
        'name_a' => 'Naziv naraš&egrave;ajo&egrave;e',
        'name_d' => 'Naziv padajo&egrave;e',
        'date_a' => 'Datum naraš&egrave;ajo&egrave;e',
        'date_d' => 'Datum padajo&egrave;e'
);

if (defined('CONFIG_PHP')) $lang_config_data = array(
        'Splošne nastavitve',
        array('Naziv galerije', 'gallery_name', 0),
        array('Opis galerije', 'gallery_description', 0),
        array('Administratorjev e-mail', 'gallery_admin_email', 0),
        array('Naslov povezave za \'Oglej si ve&egrave; slik\' v e-razglednicah', 'ecards_more_pic_target', 0),
        array('Pogovorni jezik', 'lang', 5),
        array('Izgled galerije', 'theme', 6),

        'Ogled slik v albumu',
        array('Širina glavne tabele (pixli ali %)', 'main_table_width', 0),
        array('Št. nivojev v prikazu kategorij', 'subcat_level', 0),
        array('Število albumov na strani', 'albums_per_page', 0),
        array('Število kolon za prikaz seznama albumov', 'album_list_cols', 0),
        array('Velikost ikonic v pixlih', 'alb_list_thumb_size', 0),
        array('Vsebina na glavni strani', 'main_page_layout', 0),

        'Prikaz na strani z ikonami',
        array('Število kolon na strani z ikonami', 'thumbcols', 0),
        array('Število vrstic na strani z ikonami', 'thumbrows', 0),
        array('Število tabulatorjev za prikaz', 'max_tabs', 0),
        array('Prikaži opis slik (v povezavi z naslovom) pod ikonami', 'caption_in_thumbview', 1),
        array('Prikaži število komentarjev pod ikonami', 'display_comment_count', 1),
        array('Privzeto sortiranje slik', 'default_sort_order', 3),
        array('Minimalno število glasov za prikaz slike v \'naj-ocene\' seznamu', 'min_votes_for_rating', 0),

        'Prikaz slik &amp; nastavitve za komentarje',
        array('Širina tabele za prikaz slik (pixli ali %)', 'picture_table_width', 0),
        array('Informacije o sliki so privzeto vidne', 'display_pic_info', 1),
        array('Izlo&egrave;i prepovedane besede v komentarjih', 'filter_bad_words', 1),
        array('Dovoli smeškote v komentarjih', 'enable_smilies', 1),
        array('Max. dolžina opisa slike', 'max_img_desc_length', 0),
        array('Max. število karakterjev v posamezni besedi', 'max_com_wlength', 0),
        array('Max. število vrstic v komentarju', 'max_com_lines', 0),
        array('Max. dolžina komentarja', 'max_com_size', 0),

        'Nastavitve za slike in ikone',
        array('Kvaliteta JPEG datotek', 'jpeg_qual', 0),
        array('Max. širina ali višina ikon <b>*</b>', 'thumb_width', 0),
        array('Naredi vmesne slike','make_intermediate',1),
        array('Max. širina ali višina vmesnih slik <b>*</b>', 'picture_width', 0),
        array('Max. velikost posamezne slike (kb)', 'max_upl_size', 0),
        array('Max. širina ali višina dodane slike (pixli)', 'max_upl_width_height', 0),

        'Nastavitve za uporabnike',
        array('Dovoli registracijo uporabnikov', 'allow_user_registration', 1),
        array('Registracija zahteva veljavni e-mail naslov', 'reg_requires_valid_email', 1),
        array('Ve&egrave; uporabnikov lahko ima enak e-mail naslov', 'allow_duplicate_emails_addr', 1),
        array('Uporabniki imajo lahko privatne albume', 'allow_private_albums', 1),

        'Dodatna polja za opis slik (pusti prazno, &egrave;e ne potrebuješ)',
        array('Polje 1', 'user_field1_name', 0),
        array('Polje 2', 'user_field2_name', 0),
        array('Polje 3', 'user_field3_name', 0),
        array('Polje 4', 'user_field4_name', 0),

        'Dodatne nastavitve za slike in ikone',
        array('Prepovedani znaki v imenih', 'forbiden_fname_char',0),
        array('Dovoljene vrste datotek', 'allowed_file_extensions',0),
        array('Na&egrave;in za kreiranje ikon','thumb_method',2),
        array('Pot do ImageMagick programa (primer /usr/bin/X11/)', 'impath', 0),
        array('Dovoljene vrste datotek (veljavno samo za ImageMagick)', 'allowed_img_types',0),
        array('Ukazna vrstica za ImageMagick', 'im_options', 0),
        array('Preberi EXIF podatke v JPEG datotekah', 'read_exif_data', 1),
        array('Direktorij v katerem so albumi <b>*</b>', 'fullpath', 0),
        array('Direktorij za slike od uporabnikov <b>*</b>', 'userpics', 0),
        array('Prefiks za vmesne slike <b>*</b>', 'normal_pfx', 0),
        array('Prefiks za ikone <b>*</b>', 'thumb_pfx', 0),
        array('Privzete pravice direktorijev', 'default_dir_mode', 0),
        array('Privzete pravice za slike', 'default_file_mode', 0),

        'Piškotki &amp; Kodne tabele',
        array('Ime za piškotke', 'cookie_name', 0),
        array('Pot do piškotkov', 'cookie_path', 0),
        array('Kodna tabela', 'charset', 4),

        'Ostale nastavitve',
        array('Omogo&egrave;i iskanje napak', 'debug_mode', 1),

        '<br /><div align="center">(*) Polja ozna&egrave;ena z * se ne smejo spremeniti potem, ko je v galeriji že kakšna slika</div><br />'
);

// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
        'empty_name_or_com' => 'Vpisati moraš ime in komentar',
        'com_added' => 'Tvoj komentar je bil dodan',
        'alb_need_title' => 'Vpisati moraš še naslov za album!',
        'no_udp_needed' => 'Posodobitve niso potrebne.',
        'alb_updated' => 'Album je bil uspešno posodobljen.',
        'unknown_album' => 'Izbrani album ne obstaja ali pa nimaš pravic za dodajanje slik v njega.',
        'no_pic_uploaded' => 'Nobena slika ni bila dodana!<br /><br />&Egrave;e si resni&egrave;no želel dodati sliko, preveri ali je to sploh mogo&egrave;e...',
        'err_mkdir' => 'Kreiranje direktorija %s ni uspelo!',
        'dest_dir_ro' => 'Direktorij %s ne omogo&egrave;a pisanja. Spremeni pravice!',
        'err_move' => 'Nemogo&egrave;e je premakniti %s v %s !',
        'err_fsize_too_large' => 'Poslana slika je prevelika (max. dovoljeno je %s x %s) !',
        'err_imgsize_too_large' => 'Datoteka je prevelika (max. dovoljeno je %s kb) !',
        'err_invalid_img' => 'Datoteka ni v pravilnem formatu!',
        'allowed_img_types' => 'Dodaš lahko samo %s slike.',
        'err_insert_pic' => 'Slike \'%s\' se ne da vpisati v album. ',
        'upload_success' => 'Tvoja slika je bila dodana v album<br /><br />Vidna bo takoj, ko jo odobri administrator.',
        'info' => 'Informacija',
        'com_added' => 'Komentar dodan',
        'alb_updated' => 'Album posodobljen',
        'err_comment_empty' => 'Tvoj komentar je prazen!',
        'err_invalid_fext' => 'Samo datoteke z naslednjimi kon&egrave;nicami so dovoljene: <br /><br />%s.',
        'no_flood' => 'Oprosti ampak ti si avtor zadnjega poslanega komentarja za to sliko<br /><br />Uredi komentar, &egrave;e želiš kaj spremeniti/dodati',
        'redirect_msg' => 'Stran se bo samodejno naložila.<br /><br /><br />Klikni \'NADALJEVANJE\' &egrave;e se stran sama ne zamenja.',
        'upl_success' => 'Tvoja slika je bila dodana.',
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
        'caption' => 'Caption',
        'fs_pic' => 'originalna velikost slike',
        'del_success' => 'uspešno pobrisano',
        'ns_pic' => 'normalna velikost slike',
        'err_del' => 'se ne da pobrisati',
        'thumb_pic' => 'ikonica',
        'comment' => 'komentar',
        'im_in_alb' => 'slika v albumu',
        'alb_del_success' => 'Album \'%s\' pobrisan',
        'alb_mgr' => 'Urejanje albuma',
        'err_invalid_data' => 'Napa&egrave;ni podatki v \'%s\'',
        'create_alb' => 'Kreiram album \'%s\'',
        'update_alb' => 'Posodabljam album \'%s\' z naslovom \'%s\' in indeksom \'%s\'',
        'del_pic' => 'Pobriši sliko',
        'del_alb' => 'Pobriši album',
        'del_user' => 'Pobriši uporabnika',
        'err_unknown_user' => 'Izbrani uporabnik ne obstaja!',
        'comment_deleted' => 'Komentar je bil pobrisan',
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
        'confirm_del' => 'Si prepri&egrave;an, da želiš pobrisati to sliko? \\nTudi vsi komentarji bodo odstranjeni.',
        'del_pic' => 'POBRIŠI TO SLIKO',
        'size' => '%s x %s pixlov',
        'views' => 'Št. ogledov: %s',
        'slideshow' => 'Samodejno prikazovanje slik',
        'stop_slideshow' => 'Ustavi samodejno prikazovanje slik',
        'view_fs' => 'Klikni za ogled slike v polni velikosti',
);

$lang_picinfo = array(
        'title' =>'Podatki o sliki',
        'Filename' => 'Ime datoteke',
        'Album name' => 'Ime albuma',
        'Rating' => 'Ocena (%s glasov)',
        'Keywords' => 'Klju&egrave;ne besede',
        'File Size' => 'Velikost datoteke',
        'Dimensions' => 'Dimenzija slika',
        'Displayed' => 'Št. ogledov',
        'Camera' => 'Kamera',
        'Date taken' => 'Datum posnetka',
        'Aperture' => 'Aperture',
        'Exposure time' => '&Egrave;as osvetlitve',
        'Focal length' => 'Žariš&egrave;na razdalja',
        'Comment' => 'Komentar'
);

$lang_display_comments = array(
        'OK' => 'v redu',
        'edit_title' => 'Uredi ta komentar',
        'confirm_delete' => 'Želiš res pobrisati ta komentar?',
        'add_your_comment' => 'Dodaj komentar',
        'your_name' => 'Tvoje ime',
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
        'title' => 'Pošlji e-razglednico',
        'invalid_email' => '<b>opozorilo</b>: napaka v e-mail naslovu!',
        'ecard_title' => 'To je e-razglednica s portala %s za tebe',
        'view_ecard' => '&Egrave;e razglednice ne vidiš, klikni na to povezavo',
        'view_more_pics' => 'Klikni na to povezavo za ogled ve&egrave;ih slik!',
        'send_success' => 'Razglednica je bila poslana.',
        'send_failed' => 'Oprosti, ampak server trenutno ne more poslati razglednice...',
        'from' => 'Od',
        'your_name' => 'Tvoje ime',
        'your_email' => 'Tvoj e-mail naslov',
        'to' => 'Za',
        'rcpt_name' => 'Prejemnikovo ime',
        'rcpt_email' => 'Prejemnikov e-mail naslov',
        'greetings' => 'Pozdravno sporo&egrave;ilo',
        'message' => 'Sporo&egrave;ilo',
);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
        'pic_info' => 'Informacije o sliki',
        'album' => 'Album',
        'title' => 'Naziv',
        'desc' => 'Opis',
        'keywords' => 'Klju&egrave;ne besede',
        'pic_info_str' => '%sx%s - %sKB - %s views - %s votes',
        'approve' => 'Odobri sliko',
        'postpone_app' => 'Preloži odobritev',
        'del_pic' => 'Pobriši sliko',
        'reset_view_count' => 'Resetiraj števec ogledov',
        'reset_votes' => 'Resetiraj ocene',
        'del_comm' => 'Pobriši komentarje',
        'upl_approval' => 'Odobri dodajanje',
        'edit_pics' => 'Uredi sliko',
        'see_next' => 'Poglej naslednjo sliko',
        'see_prev' => 'Poglej prejšnjo sliko',
        'n_pic' => 'Št. slik: %s',
        'n_of_pic_to_disp' => 'Št. slik za prikaz',
        'apply' => 'Izvedi spremembe'
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
        'group_name' => 'Naziv skupine',
        'disk_quota' => 'Velikost diska',
        'can_rate' => 'Dovoli ocenjevanje',
        'can_send_ecards' => 'Dovoli pošiljanje e-razglednic',
        'can_post_com' => 'Dovoli dodajanje komentarjev',
        'can_upload' => 'Dovoli dodajanje slik',
        'can_have_gallery' => 'Dovoli osebno galerijo',
        'apply' => 'Izvedi spremembe',
        'create_new_group' => 'Ustvari novo skupino',
        'del_groups' => 'Pobriši izbrano skupino',
        'confirm_del' => 'Opozorilo: ko pobrišeš skupino, bodo njeni &egrave;lani prestavljeni v skupino REGISTRIRANIH uporabnikov!\n\nŽeliš, da nadaljujem?',
        'title' => 'Uredi skupine uporabnikov',
        'approval_1' => 'Odobri javne slike (1)',
        'approval_2' => 'Odobri zasebne slike (2)',
        'note1' => '<b>(1)</b> Dodajanje slik v javni album rabi odobritev administratorja',
        'note2' => '<b>(2)</b> Dodajanje slik v zasebni album rabi odobritev administratorja',
        'notes' => 'Opombe'
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
        'welcome' => 'Dobrodošel!'
);

$lang_album_admin_menu = array(
        'confirm_delete' => 'Si prepri&egrave;an, da želiš pobrisati ta album? \\nVse slike in komentarji bodo prav tako pobrisani.',
        'delete' => 'BRISANJE',
        'modify' => 'LASTNOSTI',
        'edit_pics' => 'UREDI SLIKO',
);

$lang_list_categories = array(
        'home' => 'Domov',
        'stat1' => 'št. slik: <b>[pictures]</b> • št. albumov: <b>[albums]</b> • št. kategorij: <b>[cat]</b> • št. komentarjev: <b>[comments]</b> • št. ogledov slik: <b>[views]</b>',
        'stat2' => 'št. slik: <b>[pictures]</b> • št. albumov: <b>[albums]</b> • št. ogledov slik: <b>[views]</b>',
        'xx_s_gallery' => '%s\' galerija',
        'stat3' => 'št. slik: <b>[pictures]</b> • št. albumov: <b>[albums]</b> • št. komentarjev:  <b>[comments]</b> • št. ogledov slik: <b>[views]</b>'
);

$lang_list_users = array(
        'user_list' => 'Seznam uporabnikov',
        'no_user_gal' => 'Brez uporabniških galerij',
        'n_albums' => 'Št. albumov: %s',
        'n_pics' => 'Št. slik: %s'
);

$lang_list_albums = array(
        'n_pictures' => 'Št. slik: %s',
        'last_added' => ', zadnja dodana %s'
);

}

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
        'login' => 'Prijava',
        'enter_login_pswd' => 'Vpiši vzdevek in geslo za prijavo...',
        'username' => 'Vzdevek',
        'password' => 'Geslo',
        'remember_me' => 'Shrani geslo',
        'welcome' => 'Pozdravljen %s ...',
        'err_login' => '*** Prijava ni uspela. Poskusi znova ***',
        'err_already_logged_in' => 'Si že prijavljen!',
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
        'logout' => 'Odjava',
        'bye' => 'Lep pozdrav iz Prekmurja %s ...',
        'err_not_loged_in' => 'Nisi ve&egrave; prijavljen!',
);

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
        'upd_alb_n' => 'Posodobi album %s',
        'general_settings' => 'Splošne nastavitve',
        'alb_title' => 'Naziv albuma',
        'alb_cat' => 'Kategorija albuma',
        'alb_desc' => 'Opis albuma',
        'alb_thumb' => 'Ikona za album',
        'alb_perm' => 'Dovoljenja za ta album',
        'can_view' => 'Album lahko vidijo',
        'can_upload' => 'Obiskovalci lahko dodajajo slike',
        'can_post_comments' => 'Obiskovalci lahko vpisujejo komentarje',
        'can_rate' => 'Obiskovalci lahko ocenjujejo slike',
        'user_gal' => 'Uporabniška galerija',
        'no_cat' => '* Brez kazegorij *',
        'alb_empty' => 'Album je prazen',
        'last_uploaded' => 'Zadnje slike',
        'public_alb' => 'Vsi (javni album)',
        'me_only' => 'Samo jaz',
        'owner_only' => 'Lastnik albuma (%s)',
        'groupp_only' => '&Egrave;lani skupine \'%s\'',
        'err_no_alb_to_modify' => 'V bazi ni albumov za posodobitev.',
        'update' => 'Shrani spremembe'
);

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
        'already_rated' => 'Oprosti, ampak to sliko si enkrat že ocenil.',
        'rate_ok' => 'Tvoja ocena je sprejeta.',
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
&Egrave;eprav bo administrator teh spletnih strani poskušal sproti odstraniti vsako neprimerno objavljeno vsebino, je nemogo&egrave;e hkrati in pravo&egrave;asno pregledati vse kar je objavljeno s strani obiskovalcev. Zavedati se morate, da vse objavljeno na teh straneh predstavlja pogled in mnenje avtorja in ne administratorja oz. vzdrževalca teh spletnih strani (razen tistega kar je objavljeno z njune strani). <br />
<br />	
Z registracijo na teh spletnih straneh se tudi strinjate, da ne boste objavljali nobenih obscenih, vulgarnih, žaljivih, seksualnih, sovražnih, rasno nestrpnih in ostalih vsebin, ki so v nasprotju z veljavno zakonodajo in moralnimi normami. Strinjate se tudi, da ima aministrator in/ali moderator dolo&egrave;enih vsebin pravico v katerem koli trenutku odstraniti po njegovem mnenju sporni objavljeni prispevek. <br />
<br />	
Kot uporabnik se strinjate, da je z vaše strani objavljeno gradivo vaš lastni prispevek (v nasprotnem primeru je potrebno navesti tudi vir gradiva in/oziroma pridobiti dovoljenje za objavo) shranjeno v bazi. &Egrave;eprav ti podatki ne bodo posredovani nobeni tretji stranki (razen v primeru, ko bo to zahtevano s strani uradnih organov npr. sodiš&egrave;e...), administrator oziroma skrbnik teh strani ne odgovarja za izgubljene podatke v primeru hekerskega poskusa kraje podatkov. <br />
<br />	
Te spletne strani uporabljajo piškotke (cookies) za shranjevanje informacij na vašem ra&egrave;unalniku. Ti podatki so namenjeni isklju&egrave;no temu, da vam olajšajo brskanje na teh straneh. Vaš email naslov pa je uporabljen samo za to, da vam lahko posredujemo geslo za prijavo.<br /> 
<br />	
S klikom na zaklju&egrave;ku registracije potrjujete, da ste seznanjeni s pogoji sodelovanje na teh spletnih straneh.<br />
<br />	
Vsebino in nasvete&nbsp; uporabljate na lastno odgovornost in po lastni presoji. Upravljalci strani ne odgovarjajo za morebitno škodo, ki bi nastala na podlagi uporabe teh vsebin in gradiva.<br />
<br />
EOT;

$lang_register_php = array(
        'page_title' => 'Registracija uporabnikov',
        'term_cond' => 'Pravila in pogoji za sodelovanje',
        'i_agree' => 'Strinjam se!',
        'submit' => 'Izvedi registracijo',
        'err_user_exists' => 'To uporabniško ime že obstaja - izberi si drugega.',
        'err_password_mismatch' => 'Vpisani gesli se ne ujemata - vpiši ju ponovno.',
        'err_uname_short' => 'Uporabniško ime mora imeti vsaj 2 znaka.',
        'err_password_short' => 'Geslo mora imeti vsaj 2 znaka.',
        'err_uname_pass_diff' => 'Uporabniško ime in geslo morata biti razli&egrave;na.',
        'err_invalid_email' => 'e-mail naslov je napa&egrave;en',
        'err_duplicate_email' => 'Ta e-mail naslov je že uporabil nekdo drug.',
        'enter_info' => 'Vpis podatkov za registracijo',
        'required_info' => 'Zahtevani podatki',
        'optional_info' => 'Vpis po želji...',
        'username' => 'Uporabniško ime',
        'password' => 'Geslo',
        'password_again' => 'Ponovi geslo',
        'email' => 'e-mail',
        'location' => 'Kraj',
        'interests' => 'Poklic',
        'website' => 'Doma&egrave;a stran',
        'occupation' => 'Hobi',
        'error' => 'NAPAKA',
        'confirm_email_subject' => '%s - potrditev registracije',
        'information' => 'Informacija',
        'failed_sending_email' => 'Potrditvenega sporo&egrave;ila o registraciji ni možno poslati!',
        'thank_you' => 'Hvala za registracijo.<br /><br />Na vpisani e-mail naslov so bila pravkar poslana navodila za aktiviranje tvojega uporabniškega ra&egrave;una.',
        'acct_created' => 'Tvoj uporabniški ra&egrave;un je bil uspešno narejen. lahko se prijaviš s svojim uporabniškim imenom in geslom.',
        'acct_active' => 'Tvoj uporabniški ra&egrave;un je sedaj aktiven in se lahko prijaviš s svojim uporabniškim imenom in geslom.',
        'acct_already_act' => 'Tvoj ra&egrave;un je že aktiven!',
        'acct_act_failed' => 'Tega ni možno aktivirati!',
        'err_unk_user' => 'Izbrani uporabnik ne obstaja!',
        'x_s_profile' => 'Profil od: %s',
        'group' => 'Skupina',
        'reg_date' => 'V&egrave;lanitev',
        'disk_usage' => 'Velikost disk',
        'change_pass' => 'Spremeni geslo',
        'current_pass' => 'Staro geslo',
        'new_pass' => 'Novo geslo',
        'new_pass_again' => 'Novo geslo ponovno',
        'err_curr_pass' => 'Staro geslo ni pravilno',
        'apply_modif' => 'Izvedi spremembe',
        'change_pass' => 'Spremeni moje geslo',
        'update_success' => 'Tvoj profil je bil posodobljen',
        'pass_chg_success' => 'Geslo je bilo spremenjeno',
        'pass_chg_error' => 'Geslo ni bilo spremenjeno',
);

$lang_register_confirm_email = <<<EOT
Hvala za registracijo na {SITE_NAME}

Tvoje uporabniško ime  je: "{USER_NAME}"
Tvoje geslo za prijavo je: "{PASSWORD}"

&Egrave;e želiš aktivirati svoj uporabniški ra&egrave;un,
moraš klikniti na spodnji link (ali pa s pomo&egrave;jo copy/paste na&egrave;ina vpisati v brskalnik.

{ACT_LINK}

Lep pozdrav.

Dežurni delavec na {SITE_NAME}

EOT;

}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
        'title' => 'Pregled komentarjev',
        'no_comment' => 'Tukaj trenutno ni nobenih komentarjev.',
        'n_comm_del' => 'Št. pobrisanih komentarjev: %s',
        'n_comm_disp' => 'Število komentarjev za prikaz',
        'see_prev' => 'Predhodni komentar',
        'see_next' => 'Naslednji komentar',
        'del_comm' => 'Pobriši ozna&egrave;ene komentarje',
);


// ------------------------------------------------------------------------- //
// File search.php - OK
// ------------------------------------------------------------------------- //

if (defined('SEARCH_PHP')) $lang_search_php = array(
        0 => 'Iskanje slik',
);

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
        'page_title' => 'Najdi nove slike',
        'select_dir' => 'Izberi direktorij',
        'select_dir_msg' => 'Tukaj lahko dodaš slike, ki so bile poslane na server s pomo&egrave;jo FTP protokola.<br /><br />Izberi direktorij v katerega jih želiš dodati.',
        'no_pic_to_add' => 'Brez slik za odobritev.',
        'need_one_album' => 'Rabiš vsaj en album za dodajanje slik.',
        'warning' => 'Opozorilo',
        'change_perm' => 'v ta direktorij se ne da pisati - spremeni pravice v 755 ali 777 preden ponovno poskusiš!',
        'target_album' => '<b>Put pictures of &quot;</b>%s<b>&quot; into </b>%s',
        'folder' => 'Direktorij',
        'image' => 'Slika',
        'album' => 'Album',
        'result' => 'Rezultat',
        'dir_ro' => 'Ne morem pisati. ',
        'dir_cant_read' => 'Ne morem brati. ',
        'insert' => 'Dodajanje novih slik v galerijo',
        'list_new_pic' => 'Seznam novih slik',
        'insert_selected' => 'Dodaj ozna&egrave;ene slike',
        'no_pic_found' => 'Ne najdem novih slik',
        'be_patient' => 'Bodi potrpežljiv - dodajanje slik traja nekaj &egrave;asa...',
        'notes' =>  '<ul>'.
                                '<li><b>OK</b> : slike so bile uspešno dodane'.
                                '<li><b>DP</b> : slika je duplikat - že obstaja v bazi'.
                                '<li><b>PB</b> : slike ni možno dodati, preveri nastavitve in pravice...'.
                                '<li>&Egrave;e OK, DP, PB oznak ne vidiš (se ne pojavijo), klikni na manjkajo&egrave;o slikico in si oglej sporo&egrave;ilo o napaki'.
                                '<li>Klikni na refresh tipko v brskalniku za osvežitev prikaza.'.
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
        'title' => 'Dodajajne slik',
        'max_fsize' => 'Dovoljena velikost slike je %s kb',
        'album' => 'Album',
        'picture' => 'Slika',
        'pic_title' => 'Naziv slike',
        'description' => 'Opis slike',
        'keywords' => 'Klju&egrave;ne besede (lo&egrave;ene s presledki)',
        'err_no_alb_uploadables' => 'Oprosti, trenutno nobeden album ne dovoljuje dodajanje slik.',
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
        'title' => 'Uredi uporabnike',
        'name_a' => 'Naziv naraš&egrave;ajo&egrave;e',
        'name_d' => 'Naziv padajo&egrave;e',
        'group_a' => 'Skupina naraš&egrave;ajo&egrave;e',
        'group_d' => 'Skupina padajo&egrave;e',
        'reg_a' => 'Datum reg. naraš&egrave;ajo&egrave;e',
        'reg_d' => 'Datum reg. padajo&egrave;e',
        'pic_a' => 'Št. slik naraš&egrave;ajo&egrave;e',
        'pic_d' => 'Št. slik padajo&egrave;e',
        'disku_a' => 'Velikost diska naraš&egrave;ajo&egrave;e',
        'disku_d' => 'Velikost diska padajo&egrave;e',
        'sort_by' => 'Sortiraj uporabnike po',
        'err_no_users' => 'Seznam uporabnikov je prazen!',
        'err_edit_self' => 'Svojega profila ne moreš spreminjati - uporabi link Moj profil',
        'edit' => 'UREDI',
        'delete' => 'BRIŠI',
        'name' => 'Naziv uporabnika',
        'group' => 'Skupina',
        'inactive' => 'Neaktiven',
        'operations' => 'Operacija',
        'pictures' => 'Slike',
        'disk_space' => 'Porabljen prostor / na razpolago',
        'registered_on' => 'Registriran dne: ',
        'u_user_on_p_pages' => 'Št. uporabnikov: %d (št. strani: %d)',
        'confirm_del' => 'Si prepri&egrave;an, da želiš pobrisati tega uporabnika? \\nVsi njegovi albumi in slike bodo pobrisani.',
        'mail' => 'MAIL',
        'err_unknown_user' => 'Izbrani uporabnik ne obstaja!',
        'modify_user' => 'Uredi uporabnika',
        'notes' => 'Opombe',
        'note_list' => '<li>&Egrave;e gesla ne želiš spremeniti, pusti polje za geslo prazno',
        'password' => 'Geslo',
        'user_active' => 'Uporabnik je aktiven',
        'user_group' => 'Uporabnikova skupina',
        'user_email' => 'Uporabnikov e-mail',
        'user_web_site' => 'Uporabnikova doma&egrave;a stran',
        'create_new_user' => 'Ustvari novega uporabnika',
        'user_location' => 'Uporabnikov kraj',
        'user_interests' => 'Uporabnikov poklic',
        'user_occupation' => 'Uporabnikov hobi',
);
?>
