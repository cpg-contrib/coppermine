<?php
/*
czech lang by Michal Soukup aka migon
migon@boule.cz
http://www.boule.cz
*/

// ------------------------------------------------------------------------- //
// Coppermine Photo Gallery 1.2.0                                            //
// ------------------------------------------------------------------------- //
// Copyright (C) 2002,2003 Gregory DEMAR <gdemar@wanadoo.fr>                 //
// http://www.chezgreg.net/coppermine/                                       //
// ------------------------------------------------------------------------- //
// Updated by the Coppermine Dev Team                                        //
// (http://coppermine.sf.net/team/)                                          //
// see /docs/credits.html for details                                        //
// ------------------------------------------------------------------------- //
// This program is free software; you can redistribute it and/or modify      //
// it under the terms of the GNU General Public License as published by      //
// the Free Software Foundation; either version 2 of the License, or         //
// (at your option) any later version.                                       //
// ------------------------------------------------------------------------- // 


$lang_charset = 'iso-8859-2';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('Byt�', 'KB', 'MB');

// Day of weeks and months
$lang_day_of_week = array('Ne', 'Po', '�t', 'St', '�t', 'P�', 'So');
$lang_month = array('Leden', '�nor', 'B�ezen', 'Duben', 'Kv�ten', '�erven', '�ervenec', 'Srpen', 'Z���', '��jen', 'Listopad', 'Prosinec');

// Some common strings
$lang_yes = 'Ano';
$lang_no  = 'Ne';
$lang_back = 'ZP�T';
$lang_continue = 'POKRA�OVAT';
$lang_info = 'Informace';
$lang_error = 'Chyba';

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$album_date_fmt =    '%B %d, %Y';
$lastcom_date_fmt =  '%m/%d/%y at %H:%M';
$lastup_date_fmt = '%B %d, %Y';
$register_date_fmt = '%B %d, %Y';
$lasthit_date_fmt = '%B %d, %Y at %I:%M %p';
$comment_date_fmt =  '%B %d, %Y at %I:%M %p';

// For the word censor
$lang_bad_words = array('p��a', 'hovno', '*fuck*', 'asshole', 'assramer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*');

$lang_meta_album_names = array(
    'random' => 'N�hodn� Obr�zky',
    'lastup' => 'Nejnov�j�� obr�zky',
    'lastcom' => 'Posledn� koment��e',
    'topn' => 'Nejprohl��en�j��',
    'toprated' => 'Nejl�pe hodnocen�',
    'lasthits' => 'Naposledy prohl��en�',
    'search' => 'V�sledky vyhled�v�n�'
);

$lang_errors = array(
    'access_denied' => 'Nem�te opr�vn�n� na tuto str�nku',
    'perm_denied' => 'Nem�te dostate�n� pr�va pro potvrzen� t�to operace.',
    'param_missing' => 'Skriptu nebyly p�ed�ny pot�ebn� parametry',
    'non_exist_ap' => 'Vybran� album/obr�zek neexistuje',
    'quota_exceeded' => 'Vy�erpal(a) jste m�sto na disku.<br /><br />Va�e kv�ta je[quota]K, Va�e obr�zky zb�raj� [space]K, p�id�n�m tohoto obr�zku by jste svoji kv�tu p�ekro�il',
    'gd_file_type_err' => 'Pokud pou��v�te GD knihovnu jsou podporov�ny jen obr�zky JPG a PNG',
    'invalid_image' => 'Tento obr�zek je po�kozen/poru�en GD knihovna s n�m nem��e pracovat.',
    'resize_failed' => 'Nelze vytvo�it n�hled �i zmen�en� obr�zek',
    'no_img_to_display' => 'Zde nen� obr�zek kter� by jste si mohl(a) prohl�dnout',
    'non_exist_cat' => 'Vybran� kategorie neexistuje',
    'orphan_cat' => 'Podkategorie nem� nad��zenou kategorii. Probl�m opravte p�es nastaven� kategori�.',
    'directory_ro' => 'Do adres��e \'%s\' nelze zapisovat (nedostate�n� pr�va), obr�zky nemohly b�t smaz�ny.',
    'non_exist_comment' => 'Vybran� koment�� neexistuje',
    'pic_in_invalid_album' => 'Obr�zek(y) je/jsou v neexituj�c�m albu (%s)!?'
);

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
    'alb_list_title' => 'P�ej�t na seznam galeri�',
    'alb_list_lnk' => 'Seznam galeri�',
    'my_gal_title' => 'P�ej�t do m� osobn� galerie',
    'my_gal_lnk' => 'Moje galerie',
    'my_prof_lnk' => 'M�j Profil',
    'adm_mode_title' => 'Do Admin m�du',
    'adm_mode_lnk' => 'Admin m�d',
    'usr_mode_title' => 'Do U�ivatelsk�ho m�du',
    'usr_mode_lnk' => 'U�ivatelsk� m�d',
    'upload_pic_title' => 'Nahr�t obr�zek do gallerie',
    'upload_pic_lnk' => 'Upload obr�zku',
    'register_title' => 'Vytvo�it ��et',
    'register_lnk' => 'Registrovat se',
    'login_lnk' => 'P�ihl�sit',
    'logout_lnk' => 'Odhl�sit',
    'lastup_lnk' => 'Nejnov�j�� obr�zky',
    'lastcom_lnk' => 'Posledn� koment��e',
    'topn_lnk' => 'Nejprohl��en�j��',
    'toprated_lnk' => 'Nejl�pe hodnocen�',
    'search_lnk' => 'Vyhled�v�n�',
);

$lang_gallery_admin_menu = array(
    'upl_app_lnk' => 'Potvrzen� uploadu',
    'config_lnk' => 'Nastaven�',
    'albums_lnk' => 'Galerie',
    'categories_lnk' => 'Kategorie',
    'users_lnk' => 'U�ivatel�',
    'groups_lnk' => 'U�. skupiny',
    'comments_lnk' => 'Koment��e',
    'searchnew_lnk' => 'D�vkov� p�id�n� obr�zk�',
);

$lang_user_admin_menu = array(
    'albmgr_lnk' => 'Vytvo�it / organizovat moje galerie',
    'modifyalb_lnk' => 'Zm�nit moje galerie',
    'my_prof_lnk' => 'M�j profil',
);

$lang_cat_list = array(
    'category' => 'Kategorie',
    'albums' => 'Galerie',
    'pictures' => 'Obr�zky',
);

$lang_album_list = array(
    'album_on_page' => '%d Galeri� na %d str�nk�ch'
);
           //ascending VZESTUPNE
$lang_thumb_view = array(
    'date' => 'DATUM',
    'name' => 'JM�NO',
    'sort_da' => '�adit vzestupn� podle data',
    'sort_dd' => '�adit sestupn� podle data',
    'sort_na' => '�adit vzestupn� podle jm�na',
    'sort_nd' => '�adit sestupn� podle jm�na',
    'pic_on_page' => '%d obr�zkk� na %d str�nk�ch',
    'user_on_page' => '%d u�ivatel� na %d str�nk�ch'
);

$lang_img_nav_bar = array(
    'thumb_title' => 'Zp�t na str�nku s n�hledy',
    'pic_info_title' => 'Zobraz/skryj informace o obr�zku',
    'slideshow_title' => 'Slideshow',
    'ecard_title' => 'Poslat tento obr�zek jako pohlednici',
    'ecard_disabled' => 'Pohlednice jsou vypnut�',
    'ecard_disabled_msg' => 'Nem�te dostate�n� pr�va pro zasl�n� pohlednice',
    'prev_title' => 'P�edchoz� obr�zek',
    'next_title' => 'Dal�� obr�zek',
    'pic_pos' => 'OBR�ZEK %s/%s',
);

$lang_rate_pic = array(
    'rate_this_pic' => 'Hodnotit tento obr�zek ',
    'no_votes' => '(��dn� hodnocen�)',
    'rating' => '(Aktualn� hodnocen� : %s / z 5, hlasov�no %s kr�t)',
    'rubbish' => 'Hnusn�',
    'poor' => 'Mizern�',
    'fair' => 'Ujde to',
    'good' => 'Dobr�',
    'excellent' => 'V�born�',
    'great' => 'Dokonal�',
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
    CRITICAL_ERROR => 'Kritick� chyba',
    'file' => 'Soubor: ',
    'line' => '��dka: ',
);

$lang_display_thumbnails = array(
    'filename' => 'Jm�no souboru : ',
    'filesize' => 'Velikost souboru : ',
    'dimensions' => 'Rozm�ry : ',
    'date_added' => 'Datum p�id�n� : '
);

$lang_get_pic_data = array(
    'n_comments' => '%s Koment��(�)',
    'n_views' => '%s zobrazen�',
    'n_votes' => '(%s hlas(�))'
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
    0 => 'Opou�t�m Admin M�d....:-(',
    1 => 'Vstupuji do Admin M�du....:-)',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
    'alb_need_name' => 'Galerie mus� m�t jm�no',
    'confirm_modifs' => 'Ste si jist(a) t�mito zm�nami ?',
    'no_change' => 'Neud�lal(a) jste ��dn� zm�ny !',
    'new_album' => 'Nov� galerie',
    'confirm_delete1' => 'Jste si jist(a), �e chcete smazat tuto galerii ?',
    'confirm_delete2' => '\nV�echny obr�zky a koment��e budou smaz�ny !',
    'select_first' => 'Nejprve vyberte galerii',
    'alb_mrg' => 'Spr�vce galeri�',
    'my_gallery' => '* Moje galerie *',
    'no_category' => '* Nen� kategorie *',
    'delete' => 'Smazat',
    'new' => 'Nov�/�',
    'apply_modifs' => 'Potvrdit zm�ny',
    'select_category' => 'Vybrat kategorii',
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
    'miss_param' => 'Parametry pot�ebn� pro \'%s\'operaci not supplied !',
    'unknown_cat' => 'Vybran� kategorie v datab�zi neexistuje',
    'usergal_cat_ro' => 'Nelze smazat u�ivatelsk� galerie !',
    'manage_cat' => 'Spravovat kategorie',
    'confirm_delete' => 'Opravdu chcete SMAZAT tuto kategorii',
    'category' => 'Kategorie',
    'operations' => 'Operace',
    'move_into' => 'P�esunout do',
    'update_create' => 'Aktualizovat/Vytvo�it kategorii',
    'parent_cat' => 'Nad�azen� kategorie',
    'cat_title' => 'Nadpis kategorie',
    'cat_desc' => 'Popis kategorie'
);

// ------------------------------------------------------------------------- //
// File config.php
// ------------------------------------------------------------------------- //

if (defined('CONFIG_PHP')) $lang_config_php = array(
    'title' => 'Nastaven�',
    'restore_cfg' => 'Nastavit v�choz�',
    'save_cfg' => 'Ulo�it konfiguraci',
    'notes' => 'Pozn�mky',
    'info' => 'Informace',
    'upd_success' => 'Konfigurace byla zm�n�na',
    'restore_success' => 'Konfigurace byla nastavena na v�choz� nastaven�',
    'name_a' => 'Jm�no vzestupn�',
    'name_d' => 'Jm�no sestupn�',
    'date_a' => 'Datum vzestupn�',
    'date_d' => 'Datum sestupn�'
);

if (defined('CONFIG_PHP')) $lang_config_data = array(
    'Z�kladn� nastaven�',
    array('Jm�no gallerie', 'gallery_name', 0),
    array('Popis Galerie', 'gallery_description', 0),
    array('Email administr�tora galerie', 'gallery_admin_email', 0),
    array('C�lov� adresa pro odkaz \'Zobrazit dal�� obr�zky\' v odkazu pohlednice', 'ecards_more_pic_target', 0),
    array('Jazyk', 'lang', 5),
    array('T�m�tko', 'theme', 6),

    'Nastaven� zobrazen�',
    array('���ka hlavn� tabulky v (pixelech nebo %)', 'main_table_width', 0),
    array('Po�et �rovn� subkategori�', 'subcat_level', 0),
    array('Po�et galeri� na str�nku', 'albums_per_page', 0),
    array('Po�et sloupc� v p�ehledu galeri�', 'album_list_cols', 0),
    array('Velikost n�hled� v pixelech', 'alb_list_thumb_size', 0),
    array('Obsah hlavn� str�nky', 'main_page_layout', 0),

    'Zobrazen� n�hled�',
    array('Po�et sloupc� na str�nku', 'thumbcols', 0),
    array('Po�et ��dk� na str�nku', 'thumbrows', 0),
    array('Maxim�ln� mno�stv� z�lo�ek', 'max_tabs', 0),
    array('Zobrazit legendu obr�zku pod n�hledem', 'caption_in_thumbview', 1),
    array('Zobrazit po�et koment��� pod n�hldem', 'display_comment_count', 1),
    array('Z�kladn� �azen� n�hled�', 'default_sort_order', 3),
    array('Min. po�et hlas� pot�ebn� k za�azen� do seznamu \'Nejl�pe hodnocen�\'', 'min_votes_for_rating', 0),

    'Zobrazen� obr�zk� &amp; Nastaven� koment���',
    array('���ka tabulky pro zobrazen� obr�zku (v pixelech nebo %)', 'picture_table_width', 0),
    array('V�dy zobrazit podrobn� info', 'display_pic_info', 1),
    array('CENZUROVAT slova v koment���ch', 'filter_bad_words', 1),
    array('Povilit smajl�ky v koment���ch', 'enable_smilies', 1),
    array('Maxim�ln� d�lka popisu obr�zku', 'max_img_desc_length', 0),
    array('Maxim�ln� d�lka slova v koment��i', 'max_com_wlength', 0),
    array('Maxim�ln� mno�stv� ��dk� v koment��i', 'max_com_lines', 0),
    array('Maxim�ln� d�lka koment��e', 'max_com_size', 0),

    'Obr�zky a nastaven� n�hled�',
    array('Kvalita soubor� JPEG', 'jpeg_qual', 0),
    array('Maxim�ln� ���ka nebo v��ka n�hledu<b>*</b>', 'thumb_width', 0),
    array('Vytvo�it st�edn� obr�zek','make_intermediate',1),
    array('Maxim�ln� ���ka nebo v��ka st�en�ho obr�zku <b>*</b>', 'picture_width', 0),
    array('Maxim�ln� velikost uploadovan�ch obr�zk� (KB)', 'max_upl_size', 0),
    array('Maxim�ln� rozm�ry uploadovan�ch obr�zk� (v pixelech)', 'max_upl_width_height', 0),

    'Nastaven� u�ivatel�',
    array('Povolit registraci nov�ch u�ivatel�', 'allow_user_registration', 1),
    array('Pro registraci vy�adovat potvrzen� admina', 'reg_requires_valid_email', 1),
    array('Povolit pro dva u�ivatele stejn� email', 'allow_duplicate_emails_addr', 1),
    array('Maj� m�t u�ivatel� vlastn� galerii?', 'allow_private_albums', 1),

    'Custom fields for image description (Nechte pr�zn� a nezobraz� se)',
    array('Jm�no polo�ky 1', 'user_field1_name', 0),
    array('Jm�no polo�ky 2', 'user_field2_name', 0),
    array('Jm�no polo�ky 3', 'user_field3_name', 0),
    array('Jm�no polo�ky 4', 'user_field4_name', 0),

    'Obr�zky a n�hledy roz���en� nastaven�',
    array('Znaky zak�zan� v n�zvech soubor�', 'forbiden_fname_char',0),
    array('Povolen� koncovky uploadovan�ch soubor�', 'allowed_file_extensions',0),
    array('Metoda zm�ny velikosti obr�zk�','thumb_method',2),
    array('Cesta k ImageMagicu (p��klad /usr/bin/X11/)', 'impath', 0),
    array('Povolen� typy obr�zk� (pouze pro ImageMagic)', 'allowed_img_types',0),
    array('Parametry pro ImageMagic', 'im_options', 0),
    array('��st EXIF data ze soubor� JPEG', 'read_exif_data', 1),
    array('Adres�� pro galerie <b>*</b>', 'fullpath', 0),
    array('Adres�� pro galerie u�ivatel� <b>*</b>', 'userpics', 0),
    array('Prefix pro st�edn� velk� obr�zky <b>*</b>', 'normal_pfx', 0),
    array('Prefix pro n�hledy <b>*</b>', 'thumb_pfx', 0),
    array('Z�kladn� m�d pro adres��e', 'default_dir_mode', 0),
    array('Z�kladn� m�d pro obr�zky', 'default_file_mode', 0),

    'Cookies &amp; K�dov� str�ka',
    array('Jm�no cookies u��van� programem (expertn� volba)', 'cookie_name', 0),
    array('Cesta pro cookies u��van� programem (expertn� volba)', 'cookie_path', 0),
    array('K�dov� str�nka', 'charset', 4),

    'Dal�� nastaven�',
    array('Zapnour debug m�d (jen pro testov�n�)', 'debug_mode', 1),

    '<br /><div align="center">(*) Polo�ky ozna�en� * se NESM� zm�nit pokud ji� m�te ve va�� Galerii nahran� obr�zky</div><br />'
);

// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
    'empty_name_or_com' => 'Vlo�te jm�no a V� koment��',
    'com_added' => 'V� koment�� byl p�id�n',
    'alb_need_title' => 'Pros�m, dejte galerii nadpis !',
    'no_udp_needed' => 'Aktualizace nen� t�eba.',
    'alb_updated' => 'Galerie byla p�id�na',
    'unknown_album' => 'Vybran� album neexistuje nebo nem�te pr�va pro upload do tohoto alba',
    'no_pic_uploaded' => 'Obr�zek nebyl uploadov�n!<br /><br />zkontrolujte zda server podporuje upload soubor�, �i zda jste opravdu zadal(a) obr�zek k uploadu...',
    'err_mkdir' => '  ERROR: Chyba p�i vytv��en� adres��e (nebyl vytvo�en) %s !',
    'dest_dir_ro' => 'Do c�lov�ho adres��e %s nem��e skript zapisovat (zkontrolujte pr�va) !',
    'err_move' => 'Nelze p�esunout %s do %s !',
    'err_fsize_too_large' => 'Rozm�ry obr�zku, kter� se sna��te uploadovat, jsou p��li� velk� (max. velikost je %s x %s) !',
    'err_imgsize_too_large' => 'Velikost souboru, kter� se sna��te uploadovat, je p��li� velk� (max. velikost je %s KB) !',
    'err_invalid_img' => 'Soubor kter� jste nahr�l(a) na server nen� validn�m obr�zkem !',
    'allowed_img_types' => 'M��ete uploadovat pouze obr�zky %s .',
    'err_insert_pic' => 'Obr�zek \'%s\' nelze vlo�it do galerie ',
    'upload_success' => 'V� obr�zek byl nahr�n na server bez probl�m�<br /><br />Bude viditeln� po schv�len� adminem.',
    'info' => 'Informace',
    'com_added' => 'Koment��u p�id�no',
    'alb_updated' => 'Galerie aktualizov�na',
    'err_comment_empty' => 'V� koment�� je pr�zdn� !',
    'err_invalid_fext' => 'Pouze soubory s n�sleduj�c�mi koncovkami jsou podporovan� : <br /><br />%s.',
    'no_flood' => 'Jste autor posledn�ho koment��e k tomuto obr�zku<br /><br />Pokud ho chcete zm�nit pou�ijte volbu upravit ',
    'redirect_msg' => 'Pr�v� jste p�esm�rov�v�n(a).<br /><br /><br />Klikn�te na \'POKRA�OVAT\' pokud se str�nka nep�esm�ruje sama',
    'upl_success' => 'V� obr�zek byl v po��dku p�id�n',
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
    'caption' => 'Legenda(popisek)',
    'fs_pic' => 'p�vodn� velikost obr�zku',
    'del_success' => 'bezchybn� smaz�no',
    'ns_pic' => 'norm�ln� velikost obr�zku',
    'err_del' => 'nelze smazat',
    'thumb_pic' => 'n�hled',
    'comment' => 'koment��',
    'im_in_alb' => 'pat�� do galerie',
    'alb_del_success' => 'Galerie \'%s\' smaz�na',
    'alb_mgr' => 'Spr�vce galeri�',
    'err_invalid_data' => 'Obdr�ena chybn� data \'%s\'',
    'create_alb' => 'Vytv���m galerii \'%s\'',
    'update_alb' => 'Aktualizuji galerii \'%s\' s nadpisem \'%s\' a seznamem \'%s\'',
    'del_pic' => 'Smazat obr�zek',
    'del_alb' => 'Smazat galerii',
    'del_user' => 'Smazat u�ivatele',
    'err_unknown_user' => 'Vybran� u�ivatel neexistuje !',
    'comment_deleted' => 'Koment�� bezchybn� smaz�n ! ',
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
    'confirm_del' => 'Jste si jist, �e chcete smazat tento obr�zek ? \\nP�ilo�en� koment��e budou straceny.',
      'del_pic' => 'SMAZAT TENTO OBR�ZEK',
    'size' => '%s x %s pixelel�',
    'views' => '%s kr�t',
    'slideshow' => 'Slideshow',
    'stop_slideshow' => 'ZASTAVIT SLIDESHOW',
        'view_fs' => 'klikn�te pro zobrazen� p�vodn�ho obr�zku',
);

$lang_picinfo = array(
    'title' =>'Informace o obr�zku',
    'Filename' => 'Jm�no souboru',
    'Album name' => 'Jm�no galerie',
    'Rating' => 'Hodnocen� (%s hlas(�))',
    'Keywords' => 'Kl��ov� slova',
    'File Size' => 'Velikost souboru',
    'Dimensions' => 'Rozm�ry',
    'Displayed' => 'Zobrazeno',
    'Camera' => 'Fotoapar�t',
    'Date taken' => 'Datum po��zen� sn�mku',
    'Aperture' => 'Clona',
    'Exposure time' => 'Expozi�n� �as',
    'Focal length' => 'Ohniskov� vzd�lenost',
    'Comment' => 'Koment��e'
);

$lang_display_comments = array(
    'OK' => 'OK',
    'edit_title' => 'Upravit tento koment��',
    'confirm_delete' => 'Jste si jist(a), �e chcete smazat tento koment�� ?',
    'add_your_comment' => 'P�idat koment��',
    'your_name' => 'Va�e jm�no',
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
    'title' => 'Poslat pohlednici',
    'invalid_email' => '<b>Varov�n�</b> : neplatn� emailov� adresa !',
    'ecard_title' => 'Pohlednice ze serveru %s pro v�s/tebe',
    'view_ecard' => 'Pokud se pohlednice nezobrazila klikni na link',
    'view_more_pics' => 'Klikni pro dal�� obr�zky !',
    'send_success' => 'Va�e pohlednice byla odesl�na',
    'send_failed' => 'Omlouv�me se, ale server nebyl schopen odeslat Va�� pohlednici zkuste
     to znovu za chv�li...',
    'from' => 'Od',
    'your_name' => 'Va�e jm�no',
    'your_email' => 'V� email',
    'to' => 'Komu',
    'rcpt_name' => 'Jm�no p��jemce',
    'rcpt_email' => 'Doru�it na email',
    'greetings' => 'Pozdrav/osloven�',
    'message' => 'Zpr�va',
);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
    'pic_info' => 'Info&nbsp;o obr�zku',
    'album' => 'Galerie',
    'title' => 'Nadpis',
    'desc' => 'Popis',
    'keywords' => 'Kl��ov� slova',
    'pic_info_str' => '%sx%s - %sKB - %s zobrazen� - %s hlas(�)',
    'approve' => 'Schv�lit obr�zek',
    'postpone_app' => 'Odlo�it schv�len�',
    'del_pic' => 'Smazat obr�zek',
    'reset_view_count' => 'Vynulovat po��tadlo zobrazen�',
    'reset_votes' => 'Vynulovat hlasy',
    'del_comm' => 'Smazat koment��e',
    'upl_approval' => 'Potvrzen� uploadu',
    'edit_pics' => 'Upravit obr�zky',
    'see_next' => 'Zobrazit dal�� obr�zky',
    'see_prev' => 'Zobrazit p�edchoz� obr�zky',
    'n_pic' => '%s obr�zk�',
    'n_of_pic_to_disp' => 'Po�et obr�zku k zobrazen�',
    'apply' => 'Ulo�it zm�ny'
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
    'group_name' => 'Jm�no skupiny',
    'disk_quota' => 'Diskov� kv�ta',
    'can_rate' => 'Mohou hodnotit obr�zky',
    'can_send_ecards' => 'mohou pos�lat pohlednice',
    'can_post_com' => 'Mohou pos�lat koment��e',
    'can_upload' => 'Mohou nahr�vat obr�zky',
    'can_have_gallery' => 'Mohou m�t osobn� galerii',
    'apply' => 'Ulo�it zm�ny',
    'create_new_group' => 'Vytvo�it novou skupinu',
    'del_groups' => 'Smazat vybran� skupiny',
    'confirm_del' => 'Pokud sma�ete tuto skupinu v�ichni u�ivatel�, pat��c� do t�to skupiny budou p�esunuti do skupiny \'Registered\' !\n\nP�ejete si pokra�ovat ?',
    'title' => 'Spravovat u�ivatelsk� skupiny',
    'approval_1' => 'Potvrzen� ve�ejn�ho. Upl. (1)',
    'approval_2' => 'Potvrzen� soukrom�ho. Upl. (2)',
    'note1' => '<b>(1)</b> Upload do ve�ejn�ch galeri� vy�aduje potvrzen� adminem',
    'note2' => '<b>(2)</b> Upload do galerie pat��c� u�ivateli vy�aduje potvrzen� adminem',
    'notes' => 'Pozn�mky'
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
    'welcome' => 'Welcome !'
);

$lang_album_admin_menu = array(
    'confirm_delete' => 'Jste si jist(a), �e chcete smazat tuto galerii? \\nV�echny obr�zky a koment��e p�jdou do pekla taky. P�ejete si pokra�ovat.',
    'delete' => 'SMAZAT',
    'modify' => 'VLASTNOSTI',
    'edit_pics' => 'UPRAVIT OBR.',
);

$lang_list_categories = array(
    'home' => 'Dom�',
    'stat1' => '<b>[pictures]</b> obr�zky v <b>[albums]</b> glalerii <b>[cat]</b>v kategorii s <b>[comments]</b> koment��i zobrazeno <b>[views]</b> kr�t',
    'stat2' => '<b>[pictures]</b> obr�zky v <b>[albums]</b> galerii zobrazeno <b>[views]</b> kr�t',
    'xx_s_gallery' => '%s\' Galerie',
    'stat3' => '<b>[pictures]</b> obr�zk� v <b>[albums]</b> galserii s <b>[comments]</b> koment��i zobrazeno <b>[views]</b> kr�t'
);

$lang_list_users = array(
    'user_list' => 'Seznam u�ivatel�',
    'no_user_gal' => 'Nejsou ��dn� u�ivatelsk� alerie',
    'n_albums' => '%s galeri�',
    'n_pics' => '%s obr�zk�'
);

$lang_list_albums = array(
    'n_pictures' => '%s obr�zk�',
    'last_added' => ', posledn� p�id�n %s'
);

}

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
    'login' => 'P�ihl�en�',
    'enter_login_pswd' => 'Zadejte Va�e jm�no a heslo pro p�ihl�en�',
    'username' => 'Jm�no',
    'password' => 'Heslo',
    'remember_me' => 'Pamatuj si m�',
    'welcome' => 'V�tej u n�s %s ...',
    'err_login' => '*** Chyba p�i p�ihl�en� skuste to znova ***',
    'err_already_logged_in' => 'Ji� jste p�ihl�en !',
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
    'logout' => 'Odhl�sit',
    'bye' => 'Tak si to u�ij zase jinde %s ...',
    'err_not_loged_in' => 'Nejste p�ihl�en !',
);

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
    'upd_alb_n' => 'Aktualizovat album %s',
    'general_settings' => 'Z�kladn� nastaven�',
    'alb_title' => 'Nadpis galerie',
    'alb_cat' => 'Kategorie galerie',
    'alb_desc' => 'Popis galerie',
    'alb_thumb' => 'N�hled reprezentuj�c� album',
    'alb_perm' => 'P��stupov� pr�va pro tuto galerii',
    'can_view' => 'Album m��ou prohl��et',
    'can_upload' => 'N�v�t�vn�ci sm�j� p�id�vat obr�zky',
    'can_post_comments' => 'Povolit koment��e',
    'can_rate' => 'N�v�t�vn�ci mohou hlasovat',
    'user_gal' => 'User Gallery',
    'no_cat' => '* Nen� kategorie *',
    'alb_empty' => 'Galerie je pr�zdn�',
    'last_uploaded' => 'Nejnov�j�� obr�zek',
    'public_alb' => 'kdokoliv (ve�ejn� galerie)',
    'me_only' => 'Pouze j�',
    'owner_only' => 'Pouze vlastn�k (%s)',
    'groupp_only' => '�lenov� skupiny \'%s\'',
    'err_no_alb_to_modify' => 'Album nelze modifikovat v datab�zi.',
    'update' => 'Aktualizovat album'
);

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
    'already_rated' => 'Tento ob�zek jste ji� hodnotil(a)',
    'rate_ok' => 'V�s hlas byl p�ijat. D�kujeme.',
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
Administr�to�i serveru {SITE_NAME}, pota�mo t�to galerie si vyhrazuj� pr�vo z�sahu do obsahu galerie nap�. koment��e, maz�n� obr�zk� p��padn� �prava (pokud poru�uj� pravidla galerie nebo dobr� mravy).
Pokud budou obr�zky nahran� u�ivetelem poru�ovat z�kon(y) budou ihned po zji�t�n� jejich um�st�n� na serveru smaz�ny. Administr�to�i/provozovatel� t�to galerie si distancuj� od
p��padn�ho z�vadn�ho obsahu nahran�ho na server u�ivateli. Vlastn�kem dat v galerii jsou jejich auto�i. Administr�to�i p�edpokl�daj�, �e na server jsou um�s�ovan� u�ivateli pouze obr�zky k n�m� vlastn� u�ivatel autorsk� pr�va.
<br />
Pokud souhlas�te, �e nebudete pos�lat jak�koliv z�vadn� materi�l jako vulg�rn� a obsc�n� obr�zky/koment��e, jak�koliv materi�l vzbuzuj�c� nen�vist, rasismus, nebo jin� materi�l poru�uj�c� z�kony. Souhlas�te, �e administr�to�i, provozovatel� a moder�to�i  {SITE_NAME}   maj� pr�vo smazat p��padn� upravit jak�koliv materi�l kdykoliv to uznaj� za vhodn�. Vlo�en� informace budou ulo�en� na serveru a v datab�zi a nebudou poskytnuty ��dn� t�et� stran� bez va�eho souhlasu. Administ�to�i/povozovatel� serveru  v�ak nejsou ani nebudou ru�it za data na serveru ulo�en� pokud dojde k jak�mukoliv �toku na sever.
<br />
<br />
Tyto str�nky vyu��vaj� k ulo�en� u�ivatelsk�ch dat cookies. Cookies slou�� pouze pro zv��en� konfortu p�i pou��v�n� t�to aplikace. Emailov� adresa slou�� jen pro potvrzen� va�ich �daj� a posl�n� hesla.<br />
<br />
Kliknut�m na 'Souhlas�m' souhlas�te z v��e uveden�mi pravidly..
EOT;

$lang_register_php = array(
    'page_title' => 'Registrace nov�ho u�ivatele',
    'term_cond' => 'Podm�nky a pravidla',
    'i_agree' => 'Souhlas�m',
    'submit' => 'Poslat registraci',
    'err_user_exists' => 'Zadan� u�ivatelsk� jm�no ji� existuje vyberte si pros�m jin�',
    'err_password_mismatch' => 'Hesla se mus� schodovat pokuste je ob� zadat znovu',
    'err_uname_short' => 'Minim�ln� d�lka u�ivatelsk�ho jm�na je 2 znaky',
    'err_password_short' => 'Heslo mus� b�t alespo� 2 znaky dlouh�',
    'err_uname_pass_diff' => 'Jm�no a heslo se nesm� shodovat',
    'err_invalid_email' => 'Byla zad�na neplatn� emailov� adresa',
    'err_duplicate_email' => 'Jin� u�ivatel se zaregistroval se zadan�m emailem. Email mus� b�t jedine�n�',
    'enter_info' => 'Zadan� registra�n� informace',
    'required_info' => 'Vy�adovan� informace',
    'optional_info' => 'Voliteln� informace',
    'username' => 'Jm�no',
    'password' => 'Heslo',
    'password_again' => 'Heslo (potvrzen�)',
    'email' => 'Email',
    'location' => 'M�sto (nap�. Brno apod.)',
    'interests' => 'Z�jmy',
    'website' => 'Dom�c� str�nka',
    'occupation' => 'Povol�n�',
    'error' => 'CHYBA',
    'confirm_email_subject' => '%s - Potvrzen� registracce',
    'information' => 'Informace',
    'failed_sending_email' => 'Nelze odeslat potvrzen� registace !',
    'thank_you' => 'D�kujeme za registraci.<br /><br />Na adresu zadanou p�i registraci V�m budou doru�eny informace o aktivaci va�eho ��tu',
    'acct_created' => 'V� u�ivatelsk� ��et byl bezchybn� vytvo�en. Nyn� se p�ihla�te pomoc� va�eho jm�na a hesla',
    'acct_active' => 'V� ��et je nyn� aktivn� p�ihla�te se pomoc� va�eho jm�na a hesla.',
    'acct_already_act' => 'V� ��et je ji� aktivn� !',
    'acct_act_failed' => 'Tento ��et nm��e b�t aktivov�n !',
    'err_unk_user' => 'Vybran� u�ivatel neexistuje !',
    'x_s_profile' => '%s\' profil',
    'group' => 'Skupina',
    'reg_date' => 'P�ipojen',
    'disk_usage' => 'Vyu�it� disku',
    'change_pass' => 'Zm�nit heslo',
    'current_pass' => 'Sou�asn� heslo',
    'new_pass' => 'Nov� heslo',
    'new_pass_again' => 'Nov� heslo (kontola)',
    'err_curr_pass' => 'Sou�asn� heslo zad�no nespr�vn�',
    'apply_modif' => 'potvrdit zm�ny',
    'change_pass' => 'Zm�nit heslo',
    'update_success' => 'V� profil byl aktualizov�n',
    'pass_chg_success' => 'Vy�e heslo bylo zm�n�no',
    'pass_chg_error' => 'Va�e heslo nebylo zm�n�no',
);

$lang_register_confirm_email = <<<EOT
D�kujeme za registraci na {SITE_NAME}

Va�e jm�no je : "{USER_NAME}"
Va�e heslo je: "{PASSWORD}"

Pro aktivaci va�eho ��tu je p�eba kliknout na odkaz n��e nebo ho zkop�rovat
do adresn�ho ��dku va�eho browseru a p�ej�t na tuto str�nku


{ACT_LINK}

S Pozdravem,

Spr�va serveru {SITE_NAME}

EOT;

}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
    'title' => 'Kontrola koment���',
    'no_comment' => 'Zde nejsou koment��e ke kontrole',
    'n_comm_del' => '%s koment��(�) smaz�n(o)',
    'n_comm_disp' => 'Po�et koment��� k zobrazen�',
    'see_prev' => 'P�edchoz�',
    'see_next' => 'Dal��',
    'del_comm' => 'Smazat vybran� koment��e',
);


// ------------------------------------------------------------------------- //
// File search.php - OK
// ------------------------------------------------------------------------- //

if (defined('SEARCH_PHP')) $lang_search_php = array(
    0 => 'Prohled�vat obr�zky',
);

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
    'page_title' => 'Naj�t nov� obr�zky',
    'select_dir' => 'Vybrat adres��',
    'select_dir_msg' => 'Tato funkce v�m umo�n� d�vkov� zpracovat obr�zky nahran� p�es FTP.<br /><br />Vyberte adres�� kde se nach�zej� obr�zky k spracov�n�',
    'no_pic_to_add' => 'Nejsou zde ��dn� obr�zky k p�id�n�',
    'need_one_album' => 'Po�ebujete m�t vytvo�enu alespo� jednu galerii',
    'warning' => 'Varov�n�',
    'change_perm' => 'Skript nem��e zapisovat do tohoto adres��e, mus�te ho nastavit na CHMOD 755 nebo 777 p�ed p�id�n�m obr�zk� !',
    'target_album' => '<b>Vlo�it obr�zky z &quot;</b>%s<b>&quot; do </b>%s',
    'folder' => 'Slo�ka',
    'image' => 'Obr�zek',
    'album' => 'Galerie',
    'result' => 'V�sledek',
    'dir_ro' => 'Nezapisovateln�. ',
    'dir_cant_read' => 'Ne�iteln�. ',
    'insert' => 'P�id�v�m nov� obr�zky do galerie',
    'list_new_pic' => 'Seznam obr�zk�',
    'insert_selected' => 'Vlo�it vybran� obr�zky',
    'no_pic_found' => 'Nov� obr�zky nenalezeny',
    'be_patient' => 'Pros�m bu�te trp�liv�(�), program pot�ebuje na zpracov�n� obr�zku n�ja� ten �as.',
    'notes' =>  '<ul>'.
                '<li><b>OK</b> : Tyto obr�zky byly p�id�ny'.
                '<li><b>DP</b> : Zdvojen�!, Tento obr�zek ji existuje'.
                '<li><b>PB</b> : tento obr�zek nelze p�idat, skontrolujte konfiguraci p��padn� p��stupov� pr�va'.
                '<li>Kdy� se neuk�e \'ozna�en�\' OK, DP, PB klepn�te na obr�zek a uvid�te chybovou hl�ku generovanou PHP, kter� V�m pom��e zjistit p���inu probl�mu'.
                '<li>Pokud dojde k timeoutu F5 nebo reload str�nky by m�l pomoci'.
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
    'title' => 'Uploadnout obr�zek',
    'max_fsize' => 'Max. velikost souboru je %s KB',
    'album' => 'Galerie',
    'picture' => 'Obr�zek',
    'pic_title' => 'Nadpis obr�zku',
    'description' => 'Popis obr�zku',
    'keywords' => 'Kl��ov� slova (odd�len� mezerou)',
    'err_no_alb_uploadables' => 'Zde se nenal�z� galerie do kter� je povolen upload.',
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
    'title' => 'Spravovat u�ivatele',
    'name_a' => 'Jm�no vzestup.',
    'name_d' => 'Jm�no sestup.',
    'group_a' => 'Skupina vzestup.',
    'group_d' => 'Skupina sestup.',
    'reg_a' => 'Datum registrace vzestup.',
    'reg_d' => 'Datum registrace sestup.',
    'pic_a' => 'Po�et obr�zk� vzestup.',
    'pic_d' => 'Po�et obr�zk� sestup.',
    'disku_a' => 'Vyu�it� disku vzestup.',
    'disku_d' => 'Vyu�it� disku sestup.',
    'sort_by' => '�adit u��ivatele podle',
    'err_no_users' => 'Tabulka u�ivatel� je pr�zdn�!',
    'err_edit_self' => 'Zde nelze editovat vlastn� profil pou�ijte p��slu�nou volbu pracuj�c� s va��m profilem',
    'edit' => 'UPRAVIT',
    'delete' => 'SMAZAT',
    'name' => 'U�iv. jm�no',
    'group' => 'Skupina U�iv.',
    'inactive' => 'Neaktivn�',
    'operations' => 'Operace',
    'pictures' => 'Obr�zky',
    'disk_space' => 'M�sto vyu�it� / kv�ta',
    'registered_on' => 'Registrov�n',
    'u_user_on_p_pages' => '%d u�ivatel� na %d str�nk�ch',
    'confirm_del' => 'Jste si jist(a), �e chcete smazat tohoto u�ivatele ? \\nV�echny jeho obr�zky, galerie a koment��e budou smaz�ny.',
    'mail' => 'MAIL',
    'err_unknown_user' => 'Vybran� u�iv. neexistuje !',
    'modify_user' => 'Zm�nit u�iv.',
    'notes' => 'Pozn�mky',
    'note_list' => '<li>Pokud nechcete zm�nit heslo ponechte pol��ko pro heslo pr�zdn�',
    'password' => 'Heslo',
    'user_active' => 'U�iv. je aktivn�',
    'user_group' => 'U�iv. Skupina',
    'user_email' => 'U�iv. emaill',
    'user_web_site' => 'U�iv. dom�c� str�nka',
    'create_new_user' => 'Vytvo�it nov�ho u�ivatle.',
    'user_location' => 'M�sto U�iv. (nap�. Praha apod.)',
    'user_interests' => 'U�iv. z�jmy',
    'user_occupation' => 'U�iv. povol�n�',
);
?>
