<?php
/*
czech lang by Michal Soukup aka migon
migon@boule.cz
http://www.boule.cz
*/

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
// ------------------------------------------------------------------------- //

$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('Bytů', 'KB', 'MB');

// Day of weeks and months
$lang_day_of_week = array('Ne', 'Po', 'Út', 'St', 'Čt', 'Pá', 'So');
$lang_month = array('Leden', 'Únor', 'Březen', 'Duben', 'Květen', 'Červen', 'Červenec', 'Srpen', 'Září', 'Říjen', 'Listopad', 'Prosinec');

// Some common strings
$lang_yes = 'Ano';
$lang_no  = 'Ne';
$lang_back = 'ZPĚT';
$lang_continue = 'POKRAČOVAT';
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
$lang_bad_words = array('píča', 'hovno', '*fuck*', 'asshole', 'assramer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*');

$lang_meta_album_names = array(
    'random' => 'Náhodné Obrázky',
    'lastup' => 'Nejnovější obrázky',
    'lastcom' => 'Poslední komentáře',
    'topn' => 'Nejprohlíženější',
    'toprated' => 'Nejlépe hodnocené',
    'lasthits' => 'Naposledy prohlížené',
    'search' => 'Výsledky vyhledávání'
);

$lang_errors = array(
    'access_denied' => 'Nemáte oprávnění na tuto stránku',
    'perm_denied' => 'Nemáte dostatečná práva pro potvrzení této operace.',
    'param_missing' => 'Skriptu nebyly předány potřebné parametry',
    'non_exist_ap' => 'Vybrané album/obrázek neexistuje',
    'quota_exceeded' => 'Vyčerpal(a) jste místo na disku.<br /><br />Vaše kvóta je[quota]K, Vaše obrázky zbírají [space]K, přidáním tohoto obrázku by jste svoji kvótu překročil',
    'gd_file_type_err' => 'Pokud používáte GD knihovnu jsou podporovány jen obrázky JPG a PNG',
    'invalid_image' => 'Tento obrázek je poškozen/porušen GD knihovna s ním nemůže pracovat.',
    'resize_failed' => 'Nelze vytvořit náhled či zmenšený obrázek',
    'no_img_to_display' => 'Zde není obrázek který by jste si mohl(a) prohlédnout',
    'non_exist_cat' => 'Vybraná kategorie neexistuje',
    'orphan_cat' => 'Podkategorie nemá nadřízenou kategorii. Problém opravte přes nastavení kategorií.',
    'directory_ro' => 'Do adresáře \'%s\' nelze zapisovat (nedostatečná práva), obrázky nemohly být smazány.',
    'non_exist_comment' => 'Vybraný komentář neexistuje',
    'pic_in_invalid_album' => 'Obrázek(y) je/jsou v neexitujícím albu (%s)!?'
);

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
    'alb_list_title' => 'Přejít na seznam galerií',
    'alb_list_lnk' => 'Seznam galerií',
    'my_gal_title' => 'Přejít do mé osobní galerie',
    'my_gal_lnk' => 'Moje galerie',
    'my_prof_lnk' => 'Můj Profil',
    'adm_mode_title' => 'Do Admin módu',
    'adm_mode_lnk' => 'Admin mód',
    'usr_mode_title' => 'Do Uživatelského módu',
    'usr_mode_lnk' => 'Uživatelský mód',
    'upload_pic_title' => 'Nahrát obrázek do gallerie',
    'upload_pic_lnk' => 'Upload obrázku',
    'register_title' => 'Vytvořit účet',
    'register_lnk' => 'Registrovat se',
    'login_lnk' => 'Přihlásit',
    'logout_lnk' => 'Odhlásit',
    'lastup_lnk' => 'Nejnovější obrázky',
    'lastcom_lnk' => 'Poslední komentáře',
    'topn_lnk' => 'Nejprohlíženější',
    'toprated_lnk' => 'Nejlépe hodnocené',
    'search_lnk' => 'Vyhledávání',
);

$lang_gallery_admin_menu = array(
    'upl_app_lnk' => 'Potvrzení uploadu',
    'config_lnk' => 'Nastavení',
    'albums_lnk' => 'Galerie',
    'categories_lnk' => 'Kategorie',
    'users_lnk' => 'Uživatelé',
    'groups_lnk' => 'Už. skupiny',
    'comments_lnk' => 'Komentáře',
    'searchnew_lnk' => 'Dávkové přidání obrázků',
);

$lang_user_admin_menu = array(
    'albmgr_lnk' => 'Vytvořit / organizovat moje galerie',
    'modifyalb_lnk' => 'Změnit moje galerie',
    'my_prof_lnk' => 'Můj profil',
);

$lang_cat_list = array(
    'category' => 'Kategorie',
    'albums' => 'Galerie',
    'pictures' => 'Obrázky',
);

$lang_album_list = array(
    'album_on_page' => '%d Galerií na %d stránkách'
);
           //ascending VZESTUPNE
$lang_thumb_view = array(
    'date' => 'DATUM',
    'name' => 'JMÉNO',
    'sort_da' => 'Řadit vzestupně podle data',
    'sort_dd' => 'Řadit sestupně podle data',
    'sort_na' => 'Řadit vzestupně podle jména',
    'sort_nd' => 'Řadit sestupně podle jména',
    'pic_on_page' => '%d obrázkků na %d stránkách',
    'user_on_page' => '%d uživatelů na %d stránkách'
);

$lang_img_nav_bar = array(
    'thumb_title' => 'Zpět na stránku s náhledy',
    'pic_info_title' => 'Zobraz/skryj informace o obrázku',
    'slideshow_title' => 'Slideshow',
    'ecard_title' => 'Poslat tento obrázek jako pohlednici',
    'ecard_disabled' => 'Pohlednice jsou vypnuté',
    'ecard_disabled_msg' => 'Nemáte dostatečná práva pro zaslání pohlednice',
    'prev_title' => 'Předchozí obrázek',
    'next_title' => 'Další obrázek',
    'pic_pos' => 'OBRÁZEK %s/%s',
);

$lang_rate_pic = array(
    'rate_this_pic' => 'Hodnotit tento obrázek ',
    'no_votes' => '(žádné hodnocení)',
    'rating' => '(Aktualní hodnocení : %s / z 5, hlasováno %s krát)',
    'rubbish' => 'Hnusný',
    'poor' => 'Mizerný',
    'fair' => 'Ujde to',
    'good' => 'Dobrý',
    'excellent' => 'Výborný',
    'great' => 'Dokonalý',
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
    CRITICAL_ERROR => 'Kritická chyba',
    'file' => 'Soubor: ',
    'line' => 'Řádka: ',
);

$lang_display_thumbnails = array(
    'filename' => 'Jméno souboru : ',
    'filesize' => 'Velikost souboru : ',
    'dimensions' => 'Rozměry : ',
    'date_added' => 'Datum přidání : '
);

$lang_get_pic_data = array(
    'n_comments' => '%s Komentář(ů)',
    'n_views' => '%s zobrazení',
    'n_votes' => '(%s hlas(ů))'
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
    0 => 'Opouštím Admin Mód....:-(',
    1 => 'Vstupuji do Admin Módu....:-)',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
    'alb_need_name' => 'Galerie musí mít jméno',
    'confirm_modifs' => 'Ste si jist(a) těmito změnami ?',
    'no_change' => 'Neudělal(a) jste žádné změny !',
    'new_album' => 'Nová galerie',
    'confirm_delete1' => 'Jste si jist(a), že chcete smazat tuto galerii ?',
    'confirm_delete2' => '\nVšechny obrázky a komentáře budou smazány !',
    'select_first' => 'Nejprve vyberte galerii',
    'alb_mrg' => 'Správce galerií',
    'my_gallery' => '* Moje galerie *',
    'no_category' => '* Není kategorie *',
    'delete' => 'Smazat',
    'new' => 'Nový/á',
    'apply_modifs' => 'Potvrdit změny',
    'select_category' => 'Vybrat kategorii',
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
    'miss_param' => 'Parametry potřebné pro \'%s\'operaci not supplied !',
    'unknown_cat' => 'Vybraná kategorie v databázi neexistuje',
    'usergal_cat_ro' => 'Nelze smazat uživatelské galerie !',
    'manage_cat' => 'Spravovat kategorie',
    'confirm_delete' => 'Opravdu chcete SMAZAT tuto kategorii',
    'category' => 'Kategorie',
    'operations' => 'Operace',
    'move_into' => 'Přesunout do',
    'update_create' => 'Aktualizovat/Vytvořit kategorii',
    'parent_cat' => 'Nadřazená kategorie',
    'cat_title' => 'Nadpis kategorie',
    'cat_desc' => 'Popis kategorie'
);

// ------------------------------------------------------------------------- //
// File config.php
// ------------------------------------------------------------------------- //

if (defined('CONFIG_PHP')) $lang_config_php = array(
    'title' => 'Nastavení',
    'restore_cfg' => 'Nastavit výchozí',
    'save_cfg' => 'Uložit konfiguraci',
    'notes' => 'Poznámky',
    'info' => 'Informace',
    'upd_success' => 'Konfigurace byla změněna',
    'restore_success' => 'Konfigurace byla nastavena na výchozí nastavení',
    'name_a' => 'Jméno vzestupně',
    'name_d' => 'Jméno sestupně',
    'date_a' => 'Datum vzestupně',
    'date_d' => 'Datum sestupně'
);

if (defined('CONFIG_PHP')) $lang_config_data = array(
    'Základní nastavení',
    array('Jméno gallerie', 'gallery_name', 0),
    array('Popis Galerie', 'gallery_description', 0),
    array('Email administrátora galerie', 'gallery_admin_email', 0),
    array('Cílová adresa pro odkaz \'Zobrazit další obrázky\' v odkazu pohlednice', 'ecards_more_pic_target', 0),
    array('Jazyk', 'lang', 5),
    array('Témátko', 'theme', 6),

    'Nastavení zobrazení',
    array('Šířka hlavní tabulky v (pixelech nebo %)', 'main_table_width', 0),
    array('Počet úrovní subkategorií', 'subcat_level', 0),
    array('Počet galerií na stránku', 'albums_per_page', 0),
    array('Počet sloupců v přehledu galerií', 'album_list_cols', 0),
    array('Velikost náhledů v pixelech', 'alb_list_thumb_size', 0),
    array('Obsah hlavní stránky', 'main_page_layout', 0),

    'Zobrazení náhledů',
    array('Počet sloupců na stránku', 'thumbcols', 0),
    array('Počet řádků na stránku', 'thumbrows', 0),
    array('Maximální množství záložek', 'max_tabs', 0),
    array('Zobrazit legendu obrázku pod náhledem', 'caption_in_thumbview', 1),
    array('Zobrazit počet komentářů pod náhldem', 'display_comment_count', 1),
    array('Základní řazení náhledů', 'default_sort_order', 3),
    array('Min. počet hlasů potřebný k zařazení do seznamu \'Nejlépe hodnocené\'', 'min_votes_for_rating', 0),

    'Zobrazení obrázků &amp; Nastavení komentářů',
    array('Šířka tabulky pro zobrazení obrázku (v pixelech nebo %)', 'picture_table_width', 0),
    array('Vždy zobrazit podrobné info', 'display_pic_info', 1),
    array('CENZUROVAT slova v komentářích', 'filter_bad_words', 1),
    array('Povilit smajlíky v komentářích', 'enable_smilies', 1),
    array('Maximální dálka popisu obrázku', 'max_img_desc_length', 0),
    array('Maximální délka slova v komentáři', 'max_com_wlength', 0),
    array('Maximální množství řádků v komentáři', 'max_com_lines', 0),
    array('Maximální délka komentáře', 'max_com_size', 0),

    'Obrázky a nastavení náhledů',
    array('Kvalita souborů JPEG', 'jpeg_qual', 0),
    array('Maximální šířka nebo výška náhledu<b>*</b>', 'thumb_width', 0),
    array('Vytvořit střední obrázek','make_intermediate',1),
    array('Maximální šířka nebo výška střeního obrázku <b>*</b>', 'picture_width', 0),
    array('Maximální velikost uploadovaných obrázků (KB)', 'max_upl_size', 0),
    array('Maximální rozměry uploadovaných obrázků (v pixelech)', 'max_upl_width_height', 0),

    'Nastavení uživatelů',
    array('Povolit registraci nových uživatelů', 'allow_user_registration', 1),
    array('Pro registraci vyžadovat potvrzení admina', 'reg_requires_valid_email', 1),
    array('Povolit pro dva uživatele stejný email', 'allow_duplicate_emails_addr', 1),
    array('Mají mít uživatelé vlastní galerii?', 'allow_private_albums', 1),

    'Custom fields for image description (Nechte prázné a nezobrazí se)',
    array('Jméno položky 1', 'user_field1_name', 0),
    array('Jméno položky 2', 'user_field2_name', 0),
    array('Jméno položky 3', 'user_field3_name', 0),
    array('Jméno položky 4', 'user_field4_name', 0),

    'Obrázky a náhledy rozšířené nastavení',
    array('Znaky zakázané v názvech souborů', 'forbiden_fname_char',0),
    array('Povolené koncovky uploadovaných souborů', 'allowed_file_extensions',0),
    array('Metoda změny velikosti obrázků','thumb_method',2),
    array('Cesta k ImageMagicu (příklad /usr/bin/X11/)', 'impath', 0),
    array('Povolené typy obrázků (pouze pro ImageMagic)', 'allowed_img_types',0),
    array('Parametry pro ImageMagic', 'im_options', 0),
    array('Číst EXIF data ze souborů JPEG', 'read_exif_data', 1),
    array('Adresář pro galerie <b>*</b>', 'fullpath', 0),
    array('Adresář pro galerie uživatelů <b>*</b>', 'userpics', 0),
    array('Prefix pro středně velké obrázky <b>*</b>', 'normal_pfx', 0),
    array('Prefix pro náhledy <b>*</b>', 'thumb_pfx', 0),
    array('Základní mód pro adresáře', 'default_dir_mode', 0),
    array('Základní mód pro obrázky', 'default_file_mode', 0),

    'Cookies &amp; Kódová stráka',
    array('Jméno cookies užívané programem (expertní volba)', 'cookie_name', 0),
    array('Cesta pro cookies užívaná programem (expertní volba)', 'cookie_path', 0),
    array('Kódová stránka', 'charset', 4),

    'Další nastavení',
    array('Zapnour debug mód (jen pro testování)', 'debug_mode', 1),

    '<br /><div align="center">(*) Položky označené * se NESMÍ změnit pokud již máte ve vaší Galerii nahrané obrázky</div><br />'
);

// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
    'empty_name_or_com' => 'Vložte jméno a Váš komentář',
    'com_added' => 'Váš komentář byl přidán',
    'alb_need_title' => 'Prosím, dejte galerii nadpis !',
    'no_udp_needed' => 'Aktualizace není třeba.',
    'alb_updated' => 'Galerie byla přidána',
    'unknown_album' => 'Vybrané album neexistuje nebo nemáte práva pro upload do tohoto alba',
    'no_pic_uploaded' => 'Obrázek nebyl uploadován!<br /><br />zkontrolujte zda server podporuje upload souborů, či zda jste opravdu zadal(a) obrázek k uploadu...',
    'err_mkdir' => '  ERROR: Chyba při vytváření adresáře (nebyl vytvořen) %s !',
    'dest_dir_ro' => 'Do cílového adresáře %s nemůže skript zapisovat (zkontrolujte práva) !',
    'err_move' => 'Nelze přesunout %s do %s !',
    'err_fsize_too_large' => 'Rozměry obrázku, který se snažíte uploadovat, jsou příliš velké (max. velikost je %s x %s) !',
    'err_imgsize_too_large' => 'Velikost souboru, který se snažíte uploadovat, je příliš velká (max. velikost je %s KB) !',
    'err_invalid_img' => 'Soubor který jste nahrál(a) na server není validním obrázkem !',
    'allowed_img_types' => 'Můžete uploadovat pouze obrázky %s .',
    'err_insert_pic' => 'Obrázek \'%s\' nelze vložit do galerie ',
    'upload_success' => 'Váš obrázek byl nahrán na server bez problémů<br /><br />Bude viditelný po schválení adminem.',
    'info' => 'Informace',
    'com_added' => 'Komentářu přidáno',
    'alb_updated' => 'Galerie aktualizována',
    'err_comment_empty' => 'Váš komentář je prázdný !',
    'err_invalid_fext' => 'Pouze soubory s následujícími koncovkami jsou podporované : <br /><br />%s.',
    'no_flood' => 'Jste autor posledního komentáře k tomuto obrázku<br /><br />Pokud ho chcete změnit použijte volbu upravit ',
    'redirect_msg' => 'Právě jste přesměrováván(a).<br /><br /><br />Klikněte na \'POKRAČOVAT\' pokud se stránka nepřesměruje sama',
    'upl_success' => 'Váš obrázek byl v pořádku přidán',
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
    'caption' => 'Legenda(popisek)',
    'fs_pic' => 'původní velikost obrázku',
    'del_success' => 'bezchybně smazáno',
    'ns_pic' => 'normální velikost obrázku',
    'err_del' => 'nelze smazat',
    'thumb_pic' => 'náhled',
    'comment' => 'komentář',
    'im_in_alb' => 'patří do galerie',
    'alb_del_success' => 'Galerie \'%s\' smazána',
    'alb_mgr' => 'Správce galerií',
    'err_invalid_data' => 'Obdržena chybná data \'%s\'',
    'create_alb' => 'Vytvářím galerii \'%s\'',
    'update_alb' => 'Aktualizuji galerii \'%s\' s nadpisem \'%s\' a seznamem \'%s\'',
    'del_pic' => 'Smazat obrázek',
    'del_alb' => 'Smazat galerii',
    'del_user' => 'Smazat uživatele',
    'err_unknown_user' => 'Vybraný uživatel neexistuje !',
    'comment_deleted' => 'Komentář bezchybně smazán ! ',
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
    'confirm_del' => 'Jste si jist, že chcete smazat tento obrázek ? \\nPřiložené komentáře budou straceny.',
      'del_pic' => 'SMAZAT TENTO OBRÁZEK',
    'size' => '%s x %s pixelelů',
    'views' => '%s krát',
    'slideshow' => 'Slideshow',
    'stop_slideshow' => 'ZASTAVIT SLIDESHOW',
        'view_fs' => 'klikněte pro zobrazení původního obrázku',
);

$lang_picinfo = array(
    'title' =>'Informace o obrázku',
    'Filename' => 'Jméno souboru',
    'Album name' => 'Jméno galerie',
    'Rating' => 'Hodnocení (%s hlas(ů))',
    'Keywords' => 'Klíčová slova',
    'File Size' => 'Velikost souboru',
    'Dimensions' => 'Rozměry',
    'Displayed' => 'Zobrazeno',
    'Camera' => 'Fotoaparát',
    'Date taken' => 'Datum pořízení snímku',
    'Aperture' => 'Clona',
    'Exposure time' => 'Expoziční čas',
    'Focal length' => 'Ohnisková vzdálenost',
    'Comment' => 'Komentáře'
);

$lang_display_comments = array(
    'OK' => 'OK',
    'edit_title' => 'Upravit tento komentář',
    'confirm_delete' => 'Jste si jist(a), že chcete smazat tento komentář ?',
    'add_your_comment' => 'Přidat komentář',
    'your_name' => 'Vaše jméno',
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
    'title' => 'Poslat pohlednici',
    'invalid_email' => '<b>Varování</b> : neplatná emailová adresa !',
    'ecard_title' => 'Pohlednice ze serveru %s pro vás/tebe',
    'view_ecard' => 'Pokud se pohlednice nezobrazila klikni na link',
    'view_more_pics' => 'Klikni pro další obrázky !',
    'send_success' => 'Vaše pohlednice byla odeslána',
    'send_failed' => 'Omlouváme se, ale server nebyl schopen odeslat Vaší pohlednici zkuste
     to znovu za chvíli...',
    'from' => 'Od',
    'your_name' => 'Vaše jméno',
    'your_email' => 'Váš email',
    'to' => 'Komu',
    'rcpt_name' => 'Jméno příjemce',
    'rcpt_email' => 'Doručit na email',
    'greetings' => 'Pozdrav/oslovení',
    'message' => 'Zpráva',
);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
    'pic_info' => 'Info&nbsp;o obrázku',
    'album' => 'Galerie',
    'title' => 'Nadpis',
    'desc' => 'Popis',
    'keywords' => 'Klíčová slova',
    'pic_info_str' => '%sx%s - %sKB - %s zobrazení - %s hlas(ů)',
    'approve' => 'Schválit obrázek',
    'postpone_app' => 'Odložit schválení',
    'del_pic' => 'Smazat obrázek',
    'reset_view_count' => 'Vynulovat počítadlo zobrazení',
    'reset_votes' => 'Vynulovat hlasy',
    'del_comm' => 'Smazat komentáře',
    'upl_approval' => 'Potvrzení uploadu',
    'edit_pics' => 'Upravit obrázky',
    'see_next' => 'Zobrazit další obrázky',
    'see_prev' => 'Zobrazit předchozí obrázky',
    'n_pic' => '%s obrázků',
    'n_of_pic_to_disp' => 'Počet obrázku k zobrazení',
    'apply' => 'Uložit změny'
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
    'group_name' => 'Jméno skupiny',
    'disk_quota' => 'Disková kvóta',
    'can_rate' => 'Mohou hodnotit obrázky',
    'can_send_ecards' => 'mohou posílat pohlednice',
    'can_post_com' => 'Mohou posílat komentáře',
    'can_upload' => 'Mohou nahrávat obrázky',
    'can_have_gallery' => 'Mohou mít osobní galerii',
    'apply' => 'Uložit změny',
    'create_new_group' => 'Vytvořit novou skupinu',
    'del_groups' => 'Smazat vybrané skupiny',
    'confirm_del' => 'Pokud smažete tuto skupinu všichni uživatelé, patřící do této skupiny budou přesunuti do skupiny \'Registered\' !\n\nPřejete si pokračovat ?',
    'title' => 'Spravovat uživatelské skupiny',
    'approval_1' => 'Potvrzení veřejného. Upl. (1)',
    'approval_2' => 'Potvrzení soukromého. Upl. (2)',
    'note1' => '<b>(1)</b> Upload do veřejných galerií vyžaduje potvrzení adminem',
    'note2' => '<b>(2)</b> Upload do galerie patřící uživateli vyžaduje potvrzení adminem',
    'notes' => 'Poznámky'
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
    'welcome' => 'Welcome !'
);

$lang_album_admin_menu = array(
    'confirm_delete' => 'Jste si jist(a), že chcete smazat tuto galerii? \\nVšechny obrázky a komentáře půjdou do pekla taky. Přejete si pokračovat.',
    'delete' => 'SMAZAT',
    'modify' => 'VLASTNOSTI',
    'edit_pics' => 'UPRAVIT OBR.',
);

$lang_list_categories = array(
    'home' => 'Domů',
    'stat1' => '<b>[pictures]</b> obrázky v <b>[albums]</b> glalerii <b>[cat]</b>v kategorii s <b>[comments]</b> komentáři zobrazeno <b>[views]</b> krát',
    'stat2' => '<b>[pictures]</b> obrázky v <b>[albums]</b> galerii zobrazeno <b>[views]</b> krát',
    'xx_s_gallery' => '%s\' Galerie',
    'stat3' => '<b>[pictures]</b> obrázků v <b>[albums]</b> galserii s <b>[comments]</b> komentáři zobrazeno <b>[views]</b> krát'
);

$lang_list_users = array(
    'user_list' => 'Seznam uživatelů',
    'no_user_gal' => 'Nejsou žádné uživatelské alerie',
    'n_albums' => '%s galerií',
    'n_pics' => '%s obrázků'
);

$lang_list_albums = array(
    'n_pictures' => '%s obrázků',
    'last_added' => ', poslední přidán %s'
);

}

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
    'login' => 'Přihlášení',
    'enter_login_pswd' => 'Zadejte Vaše jméno a heslo pro přihlášení',
    'username' => 'Jméno',
    'password' => 'Heslo',
    'remember_me' => 'Pamatuj si mě',
    'welcome' => 'Vítej u nás %s ...',
    'err_login' => '*** Chyba při přihlášení skuste to znova ***',
    'err_already_logged_in' => 'Již jste přihlášen !',
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
    'logout' => 'Odhlásit',
    'bye' => 'Tak si to užij zase jinde %s ...',
    'err_not_loged_in' => 'Nejste přihlášen !',
);

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
    'upd_alb_n' => 'Aktualizovat album %s',
    'general_settings' => 'Základní nastavení',
    'alb_title' => 'Nadpis galerie',
    'alb_cat' => 'Kategorie galerie',
    'alb_desc' => 'Popis galerie',
    'alb_thumb' => 'Náhled reprezentující album',
    'alb_perm' => 'Přístupová práva pro tuto galerii',
    'can_view' => 'Album můžou prohlížet',
    'can_upload' => 'Návštěvníci smějí přidávat obrázky',
    'can_post_comments' => 'Povolit komentáře',
    'can_rate' => 'Návštěvníci mohou hlasovat',
    'user_gal' => 'User Gallery',
    'no_cat' => '* Není kategorie *',
    'alb_empty' => 'Galerie je prázdná',
    'last_uploaded' => 'Nejnovější obrázek',
    'public_alb' => 'kdokoliv (veřejná galerie)',
    'me_only' => 'Pouze já',
    'owner_only' => 'Pouze vlastník (%s)',
    'groupp_only' => 'Členové skupiny \'%s\'',
    'err_no_alb_to_modify' => 'Album nelze modifikovat v databázi.',
    'update' => 'Aktualizovat album'
);

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
    'already_rated' => 'Tento obázek jste již hodnotil(a)',
    'rate_ok' => 'Vás hlas byl přijat. Děkujeme.',
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
Administrátoři serveru {SITE_NAME}, potažmo této galerie si vyhrazují právo zásahu do obsahu galerie např. komentáře, mazání obrázků případně úprava (pokud porušují pravidla galerie nebo dobré mravy).
Pokud budou obrázky nahrané uživetelem porušovat zákon(y) budou ihned po zjištění jejich umístění na serveru smazány. Administrátoři/provozovatelé této galerie si distancují od
případného závadného obsahu nahraného na server uživateli. Vlastníkem dat v galerii jsou jejich autoři. Administrátoři předpokládají, že na server jsou umísťovaná uživateli pouze obrázky k nímž vlastní uživatel autorská práva.
<br />
Pokud souhlasíte, že nebudete posílat jakýkoliv závadný materiál jako vulgární a obscéní obrázky/komentáře, jakýkoliv materiál vzbuzující nenávist, rasismus, nebo jiný materiál porušující zákony. Souhlasíte, že administrátoři, provozovatelé a moderátoři  {SITE_NAME}   mají právo smazat případně upravit jakýkoliv materiál kdykoliv to uznají za vhodné. Vložené informace budou uložené na serveru a v databázi a nebudou poskytnuty žádné třetí straně bez vašeho souhlasu. Administátoři/povozovatelé serveru  však nejsou ani nebudou ručit za data na serveru uložená pokud dojde k jakémukoliv útoku na sever.
<br />
<br />
Tyto stránky využívají k uložení uživatelských dat cookies. Cookies slouží pouze pro zvýšení konfortu při používání této aplikace. Emailová adresa slouží jen pro potvrzení vašich údajů a poslání hesla.<br />
<br />
Kliknutím na 'Souhlasím' souhlasíte z výše uvedenými pravidly..
EOT;

$lang_register_php = array(
    'page_title' => 'Registrace nového uživatele',
    'term_cond' => 'Podmínky a pravidla',
    'i_agree' => 'Souhlasím',
    'submit' => 'Poslat registraci',
    'err_user_exists' => 'Zadané uživatelské jméno již existuje vyberte si prosím jiné',
    'err_password_mismatch' => 'Hesla se musí schodovat pokuste je obě zadat znovu',
    'err_uname_short' => 'Minimální délka uživatelského jména je 2 znaky',
    'err_password_short' => 'Heslo musí být alespoň 2 znaky dlouhé',
    'err_uname_pass_diff' => 'Jméno a heslo se nesmí shodovat',
    'err_invalid_email' => 'Byla zadána neplatná emailová adresa',
    'err_duplicate_email' => 'Jiný uživatel se zaregistroval se zadaným emailem. Email musí být jedinečný',
    'enter_info' => 'Zadané registrační informace',
    'required_info' => 'Vyžadované informace',
    'optional_info' => 'Volitelné informace',
    'username' => 'Jméno',
    'password' => 'Heslo',
    'password_again' => 'Heslo (potvrzení)',
    'email' => 'Email',
    'location' => 'Místo (např. Brno apod.)',
    'interests' => 'Zájmy',
    'website' => 'Domácí stránka',
    'occupation' => 'Povolání',
    'error' => 'CHYBA',
    'confirm_email_subject' => '%s - Potvrzení registracce',
    'information' => 'Informace',
    'failed_sending_email' => 'Nelze odeslat potvrzení registace !',
    'thank_you' => 'Děkujeme za registraci.<br /><br />Na adresu zadanou při registraci Vám budou doručeny informace o aktivaci vašeho účtu',
    'acct_created' => 'Váš uživatelský účet byl bezchybně vytvořen. Nyní se přihlašte pomocí vašeho jména a hesla',
    'acct_active' => 'Váš účet je nyní aktivní přihlašte se pomocí vašeho jména a hesla.',
    'acct_already_act' => 'Váš účet je již aktivní !',
    'acct_act_failed' => 'Tento účet nmůže být aktivován !',
    'err_unk_user' => 'Vybraný uživatel neexistuje !',
    'x_s_profile' => '%s\' profil',
    'group' => 'Skupina',
    'reg_date' => 'Připojen',
    'disk_usage' => 'Využití disku',
    'change_pass' => 'Změnit heslo',
    'current_pass' => 'Současné heslo',
    'new_pass' => 'Nové heslo',
    'new_pass_again' => 'Nové heslo (kontola)',
    'err_curr_pass' => 'Současné heslo zadáno nesprávně',
    'apply_modif' => 'potvrdit změny',
    'change_pass' => 'Změnit heslo',
    'update_success' => 'Váš profil byl aktualizován',
    'pass_chg_success' => 'Vyše heslo bylo změněno',
    'pass_chg_error' => 'Vaše heslo nebylo změněno',
);

$lang_register_confirm_email = <<<EOT
Děkujeme za registraci na {SITE_NAME}

Vaše jméno je : "{USER_NAME}"
Vaše heslo je: "{PASSWORD}"

Pro aktivaci vašeho účtu je přeba kliknout na odkaz níže nebo ho zkopírovat
do adresního řádku vašeho browseru a přejít na tuto stránku


{ACT_LINK}

S Pozdravem,

Správa serveru {SITE_NAME}

EOT;

}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
    'title' => 'Kontrola komentářů',
    'no_comment' => 'Zde nejsou komentáře ke kontrole',
    'n_comm_del' => '%s komentář(ů) smazán(o)',
    'n_comm_disp' => 'Počet komentářů k zobrazení',
    'see_prev' => 'Předchozí',
    'see_next' => 'Další',
    'del_comm' => 'Smazat vybrané komentáře',
);


// ------------------------------------------------------------------------- //
// File search.php - OK
// ------------------------------------------------------------------------- //

if (defined('SEARCH_PHP')) $lang_search_php = array(
    0 => 'Prohledávat obrázky',
);

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
    'page_title' => 'Najít nové obrázky',
    'select_dir' => 'Vybrat adresář',
    'select_dir_msg' => 'Tato funkce vám umožní dávkově zpracovat obrázky nahrané přes FTP.<br /><br />Vyberte adresář kde se nacházejí obrázky k spracování',
    'no_pic_to_add' => 'Nejsou zde žádné obrázky k přidání',
    'need_one_album' => 'Pořebujete mít vytvořenu alespoň jednu galerii',
    'warning' => 'Varování',
    'change_perm' => 'Skript nemůže zapisovat do tohoto adresáře, musíte ho nastavit na CHMOD 755 nebo 777 před přidáním obrázků !',
    'target_album' => '<b>Vložit obrázky z &quot;</b>%s<b>&quot; do </b>%s',
    'folder' => 'Složka',
    'image' => 'Obrázek',
    'album' => 'Galerie',
    'result' => 'Výsledek',
    'dir_ro' => 'Nezapisovatelná. ',
    'dir_cant_read' => 'Nečitelná. ',
    'insert' => 'Přidávám nové obrázky do galerie',
    'list_new_pic' => 'Seznam obrázků',
    'insert_selected' => 'Vložit vybrané obrázky',
    'no_pic_found' => 'Nové obrázky nenalezeny',
    'be_patient' => 'Prosím buďte trpělivý(á), program potřebuje na zpracování obrázku nějaý ten čas.',
    'notes' =>  '<ul>'.
                '<li><b>OK</b> : Tyto obrázky byly přidány'.
                '<li><b>DP</b> : Zdvojení!, Tento obrázek ji existuje'.
                '<li><b>PB</b> : tento obrázek nelze přidat, skontrolujte konfiguraci případně přístupová práva'.
                '<li>Když se neukáže \'označení\' OK, DP, PB klepněte na obrázek a uvidíte chybovou hlášku generovanou PHP, která Vám pomůže zjistit příčinu problému'.
                '<li>Pokud dojde k timeoutu F5 nebo reload stránky by měl pomoci'.
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
    'title' => 'Uploadnout obrázek',
    'max_fsize' => 'Max. velikost souboru je %s KB',
    'album' => 'Galerie',
    'picture' => 'Obrázek',
    'pic_title' => 'Nadpis obrázku',
    'description' => 'Popis obrázku',
    'keywords' => 'Klíčová slova (oddělená mezerou)',
    'err_no_alb_uploadables' => 'Zde se nenalézá galerie do které je povolen upload.',
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
    'title' => 'Spravovat uživatele',
    'name_a' => 'Jméno vzestup.',
    'name_d' => 'Jméno sestup.',
    'group_a' => 'Skupina vzestup.',
    'group_d' => 'Skupina sestup.',
    'reg_a' => 'Datum registrace vzestup.',
    'reg_d' => 'Datum registrace sestup.',
    'pic_a' => 'Počet obrázků vzestup.',
    'pic_d' => 'Počet obrázků sestup.',
    'disku_a' => 'Využití disku vzestup.',
    'disku_d' => 'Využití disku sestup.',
    'sort_by' => 'Řadit užřivatele podle',
    'err_no_users' => 'Tabulka uživatelů je prázdná!',
    'err_edit_self' => 'Zde nelze editovat vlastní profil použijte příslušnou volbu pracující s vaším profilem',
    'edit' => 'UPRAVIT',
    'delete' => 'SMAZAT',
    'name' => 'Uživ. jméno',
    'group' => 'Skupina Uživ.',
    'inactive' => 'Neaktivní',
    'operations' => 'Operace',
    'pictures' => 'Obrázky',
    'disk_space' => 'Místo využité / kvóta',
    'registered_on' => 'Registrován',
    'u_user_on_p_pages' => '%d uživatelů na %d stránkách',
    'confirm_del' => 'Jste si jist(a), že chcete smazat tohoto uživatele ? \\nVšechny jeho obrázky, galerie a komentáře budou smazány.',
    'mail' => 'MAIL',
    'err_unknown_user' => 'Vybraný uživ. neexistuje !',
    'modify_user' => 'Změnit uživ.',
    'notes' => 'Poznámky',
    'note_list' => '<li>Pokud nechcete změnit heslo ponechte políčko pro heslo prázdné',
    'password' => 'Heslo',
    'user_active' => 'Uživ. je aktivní',
    'user_group' => 'Uživ. Skupina',
    'user_email' => 'Uživ. emaill',
    'user_web_site' => 'Uživ. domácí stránka',
    'create_new_user' => 'Vytvořit nového uživatle.',
    'user_location' => 'Místo Uživ. (např. Praha apod.)',
    'user_interests' => 'Uživ. zájmy',
    'user_occupation' => 'Uživ. povolání',
);
?>
