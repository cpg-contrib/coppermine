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
//  Polish language file - version 1.0                                       //
//  contributed by Bogdan (koszalkb@wizard.ae.krakow.pl)                     //
// ------------------------------------------------------------------------- //

$lang_charset = 'iso-8859-2';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('Bajtów', 'KB', 'MB');

// Day of weeks and months
$lang_day_of_week = array('Nie', 'Pon', 'Wto', '¦ro', 'Czw', 'Pi±', 'Sob');
$lang_month = array('Sty', 'Lut', 'Mar', 'Kwi', 'Maj', 'Cze', 'Lip', 'Sie', 'Wrz', 'Pa¥', 'Lis', 'Gru');

// Some common strings
$lang_yes = 'Tak';
$lang_no  = 'Nie';
$lang_back = 'WSTECZ';
$lang_continue = 'KONTYNUUJ';
$lang_info = 'Informacja';
$lang_error = 'B³±d';

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
	'random' => 'Losowe obrazy',
	'lastup' => 'Ostatnio dodane',
	'lastcom' => 'Ostatnie komentarze',
	'topn' => 'Najczê¶ciej ogl±dane',
	'toprated' => 'Najwy¿ej oceniane',
	'lasthits' => 'Ostatnio ogl±dane',
	'search' => 'Wyniki wyszukiwania'
);

$lang_errors = array(
	'access_denied' => 'Nie masz uprawnieñ dostêpu do tej strony.',
	'perm_denied' => 'Nie masz uprawnieñ do przeprowadzenia tej operacji.',
	'param_missing' => 'Skrypt wywo³any bez wymaganego(ych) parametru(ów).',
	'non_exist_ap' => 'Wybrany album/obraz nie istnieje!',
	'quota_exceeded' => 'Przekroczona przestrzeñ dyskowa<br /><br />Twoja przestrzeñ dyskowa to [quota]K, Twoje obrazy aktualnie zajmuja [space]K, dodanie tego obrazu spowodowa³oby przekroczenie dostêpnej przestrzeni dyskowej.',
	'gd_file_type_err' => 'Podczas korzystania z biblioteki graficznej GD dopuszczalne typy plików to jedynie JPEG i PNG.',
	'invalid_image' => 'Obraz który wgra³e¶ jest uszkodzony lub nie mo¿e zostaæ przetworzony przez bibliotekê GD',
	'resize_failed' => 'Nie mo¿na utworzyæ miniatury lub pomniejszonego obrazu.',
	'no_img_to_display' => 'Brak obrazu do wy¶wietlenia',
	'non_exist_cat' => 'Wybrana kategoria nie istnieje',
	'orphan_cat' => 'Kategoria ma nieistniej±c± grupê nadrzêdn±, uruchom mened¿era kategori aby naprawiæ ten problem.',
	'directory_ro' => 'Katalog \'%s\' nie jest zapisywalny, obrazy nie mog± zostaæ usuniête',
	'non_exist_comment' => 'Wskazany komentarz nie istnieje.',
	'pic_in_invalid_album' => 'Obraz jest w nieistniej±cym albumie (%s)!?'
);

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
	'alb_list_title' => 'Id¥ do listy albumów',
	'alb_list_lnk' => 'Lista albumów',
	'my_gal_title' => 'Id¥ do mojej osobistej galerii',
	'my_gal_lnk' => 'Moja galeria',
	'my_prof_lnk' => 'Mój profil',
	'adm_mode_title' => 'Prze³±cz do trybu administratora',
	'adm_mode_lnk' => 'Tryb administratora',
	'usr_mode_title' => 'Prze³±cz do trybu u¿ytkownika',
	'usr_mode_lnk' => 'Tryb u¿ytkownika',
	'upload_pic_title' => 'Za³aduj obraz do albumu',
	'upload_pic_lnk' => 'Za³aduj obraz',
	'register_title' => 'Stwórz konto',
	'register_lnk' => 'Zarejestruj',
	'login_lnk' => 'Zaloguj',
	'logout_lnk' => 'Wyloguj',
	'lastup_lnk' => 'Ostatnio dodane',
	'lastcom_lnk' => 'Ostatnie komentarze',
	'topn_lnk' => 'Najczê¶ciej ogl±dane',
	'toprated_lnk' => 'Najwy¿ej oceniane',
	'search_lnk' => 'Szukaj',
);

$lang_gallery_admin_menu = array(
	'upl_app_lnk' => 'Pozwolenie ³adowania',
	'config_lnk' => 'Konfiguracja',
	'albums_lnk' => 'Albumy',
	'categories_lnk' => 'Kategorie',
	'users_lnk' => 'U¿ytkownicy',
	'groups_lnk' => 'Grupy',
	'comments_lnk' => 'Komentarze',
	'searchnew_lnk' => 'Wsadowe dodawanie obrazów',
);

$lang_user_admin_menu = array(
	'albmgr_lnk' => 'Twórz / porz±dkuj moje albumy',
	'modifyalb_lnk' => 'Modyfikuj moje albumy',
	'my_prof_lnk' => 'Mój profil',
);

$lang_cat_list = array(
	'category' => 'Kategoria',
	'albums' => 'Albumy',
	'pictures' => 'Obrazy',
);

$lang_album_list = array(
	'album_on_page' => '%d albumów na %d stronie(ach)'
);

$lang_thumb_view = array(
	'date' => 'DATA',
	'name' => 'NAZWA',
	'sort_da' => 'Sortuj wed³ug daty rosn±co',
	'sort_dd' => 'Sortuj wed³ug daty malej±co',
	'sort_na' => 'Sortuj wed³ug nazwy rosn±co',
	'sort_nd' => 'Sortuj wed³ug nazwy malej±co',
	'pic_on_page' => '%d obrazów na %d stronie(ach)',
	'user_on_page' => '%d u¿ytkowników na %d stronie(ach)'
);

$lang_img_nav_bar = array(
	'thumb_title' => 'Powrót do strony miniatur',
	'pic_info_title' => 'Poka¿/ukryj informacje o obrazie',
	'slideshow_title' => 'Pokaz slajdów',
	'ecard_title' => 'Wy¶lij ten obraz jako e-kartkê',
	'ecard_disabled' => 'e-kartki nieaktywne',
	'ecard_disabled_msg' => 'Nie masz uprawnieñ do wysy³ania e-kartek',
	'prev_title' => 'Poka¿ poprzedi obraz',
	'next_title' => 'Poka¿ nastêpny obraz',
	'pic_pos' => 'OBRAZ %s/%s',
);

$lang_rate_pic = array(
	'rate_this_pic' => 'Oceñ ten obraz ',
	'no_votes' => '(Dotychczas bez g³osów)',
	'rating' => '(aktualna ocena : %s / 5 z %s g³osami)',
	'rubbish' => 'Smieæ',
	'poor' => 'S³aby',
	'fair' => '¦redni',
	'good' => 'Dorby',
	'excellent' => 'Wy¶mienity',
	'great' => 'Wspania³y',
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
	CRITICAL_ERROR => 'B³±d krytyczny',
	'file' => 'Plik: ',
	'line' => 'Linia: ',
);

$lang_display_thumbnails = array(
	'filename' => 'Nazwa pliku : ',
	'filesize' => 'Rozmiar pliku : ',
	'dimensions' => 'Wymiary : ',
	'date_added' => 'Data dodania : '
);

$lang_get_pic_data = array(
	'n_comments' => '%s komentarzy',
	'n_views' => '%s ods³on',
	'n_votes' => '(%s g³osów)'
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
	'Exclamation' => 'Wykrzyknik',
	'Question' => 'Pytanie',
	'Very Happy' => 'Bardzo szczê¶liwy',
	'Smile' => 'U¶miech',
	'Sad' => 'Smutny',
	'Surprised' => 'Zaskoczony',
	'Shocked' => 'Zaszokowany',
	'Confused' => 'Zak³opotany',
	'Cool' => 'Spoko',
	'Laughing' => '¦miech',
	'Mad' => 'Szalony',
	'Razz' => 'Razz',
	'Embarassed' => 'Zawstydzony',
	'Crying or Very sad' => 'P³acze lub bardzo smutny',
	'Evil or Very Mad' => 'Z³y lub bardzo w¶ciek³y',
	'Twisted Evil' => 'Twisted Evil',
	'Rolling Eyes' => 'Przewraca oczyma',
	'Wink' => 'Mrugniêcie',
	'Idea' => 'Pomys³',
	'Arrow' => 'Strza³ka',
	'Neutral' => 'Neutralny',
	'Mr. Green' => 'Pan Zielony',
);

// ------------------------------------------------------------------------- //
// File addpic.php
// ------------------------------------------------------------------------- //

// void

// ------------------------------------------------------------------------- //
// File admin.php
// ------------------------------------------------------------------------- //

if (defined('ADMIN_PHP')) $lang_admin_php = array(
	0 => 'Opuszczanie trybu administratora...',
	1 => '£adowanie trybu administratora...',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
	'alb_need_name' => 'Albumy musz± mieæ nazwy!',
	'confirm_modifs' => 'Czy jeste¶ pewny, ¿e chcesz dokonaæ tych modyfikacji?',
	'no_change' => 'Nie dokona³e¶ ¿adnej zmiany!',
	'new_album' => 'Nowy album',
	'confirm_delete1' => 'Czy jeste¶ pewny, ¿e chcesz usun±æ ten album?',
	'confirm_delete2' => '\nWszystkie obrazy i komentarze, które zawiera zostan± utracone!',
	'select_first' => 'Najpierw wybierz album',
	'alb_mrg' => 'Menad¿er Albumów',
	'my_gallery' => '* Moja galeria *',
	'no_category' => '* Bez kategorii *',
	'delete' => 'Usuñ',
	'new' => 'Nowy',
	'apply_modifs' => 'Wprowad¥ zmiany',
	'select_category' => 'Wybierz kategoriê',
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
	'miss_param' => 'Parametry wymagane dla \'%s\'operacji nie podane!',
	'unknown_cat' => 'Wybrana kategoria nie figuruje w bazie danych',
	'usergal_cat_ro' => 'Kategoria galerii u¿ytkownika nie mo¿e zostaæ usuniêta!',
	'manage_cat' => 'Zarz±dzaj kategoriami',
	'confirm_delete' => 'Czy jeste¶ pewny, ¿e chcesz USUN¡Æ tê kategoriê',
	'category' => 'Kategoria',
	'operations' => 'Operacje',
	'move_into' => 'Przenie¶ do',
	'update_create' => 'Aktualizuj/Twórz kategoriê',
	'parent_cat' => 'Kategoria nadrzêdna',
	'cat_title' => 'Tytu³ kategorii',
	'cat_desc' => 'Opis kategorii'
);

// ------------------------------------------------------------------------- //
// File config.php
// ------------------------------------------------------------------------- //

if (defined('CONFIG_PHP')) $lang_config_php = array(
	'title' => 'Konfiguracja',
	'restore_cfg' => 'Przywróæ ustawienia fabryczne',
	'save_cfg' => 'Zapisz now± konfiguracjê',
	'notes' => 'Notatki',
	'info' => 'Informacja',
	'upd_success' => 'Konfiguracja Coppermine zosta³a zaktualizowana',
	'restore_success' => 'Domy¶lna konfiguracja Coppermine przywrócona',
	'name_a' => 'Nazwa rosn±co',
	'name_d' => 'Nazwa malej±ca',
	'date_a' => 'Data rosn±co',
	'date_d' => 'Data malej±co'
);

if (defined('CONFIG_PHP')) $lang_config_data = array(
	'Ustawienia g³ówne',
	array('Nazwa galerii', 'gallery_name', 0),
	array('Opis galerii', 'gallery_description', 0),
	array('E-mail administratora galerii', 'gallery_admin_email', 0),
	array('Adres docelowy dla odno¶nika \'Zobacz wiêcej obrazów\' w e-kartkach', 'ecards_more_pic_target', 0),
	array('Jêzyk', 'lang', 5),
	array('Temat', 'theme', 6),

	'Widok listy albumów',
	array('Szeroko¶æ g³ównej tabeli (w pikselach lub %)', 'main_table_width', 0),
	array('Liczba poziomów kategorii do wy¶wietlenia', 'subcat_level', 0),
	array('Liczba albumów do wy¶wietlenia', 'albums_per_page', 0),
	array('Liczba kolumn dla listy albumów', 'album_list_cols', 0),
	array('Rozmiar miniatur w pikselach', 'alb_list_thumb_size', 0),
	array('Zawarto¶æ strony g³ównej', 'main_page_layout', 0),

	'Widok miniatur',
	array('Liczba kolumn na stronie miniatur', 'thumbcols', 0),
	array('Liczba wierszy na stronie miniatur', 'thumbrows', 0),
	array('Maksymalna liczba tabs do wy¶wietlenia', 'max_tabs', 0),
	array('Poka¿ caption obrazu (oprócz tytu³u) pod miniatur±', 'caption_in_thumbview', 1),
	array('Poka¿ liczbê komentarzy poni¿ej miniatury', 'display_comment_count', 1),
	array('Domy¶lny porz±dek sortowania dla obrazów', 'default_sort_order', 3),
	array('Minimalna liczba g³osów do pojawienia siê obrazu na li¶cie \'najwy¿ej-oceniane\' ', 'min_votes_for_rating', 0),

	'Widok obrazu &amp; Ustawienia komentarzy',
	array('Szeroko¶æ tabeli dla ekranu obrazów (piksele lub %)', 'picture_table_width', 0),
	array('Informacja o obrazie domy¶lnie widoczna', 'display_pic_info', 1),
	array('Filtrowanie niecenzuralnych s³ów w komentarzach', 'filter_bad_words', 1),
	array('Pozwól na u¶mieszki w komentarzach', 'enable_smilies', 1),
	array('Maksymalna d³ugo¶æ opisu obrazu', 'max_img_desc_length', 0),
	array('Maksymalna liczba znaków w s³owie', 'max_com_wlength', 0),
	array('Maksymalna liczba linii w komentarzu', 'max_com_lines', 0),
	array('Maksymalna d³ugo¶æ komentarza', 'max_com_size', 0),

	'Ustawienia obrazów i miniatur',
	array('Jako¶æ dla plikow JPG', 'jpeg_qual', 0),
	array('Maksymalna szeroko¶æ lub wysoko¶æ miniatury <b>*</b>', 'thumb_width', 0),
	array('Twórz po¶rednie obrazy','make_intermediate',1),
	array('Maksymalna szeroko¶æ lub wysoko¶æ po¶redniego obrazu <b>*</b>', 'picture_width', 0),
	array('Maksymalny rozmiar wgrywanych plików (KB)', 'max_upl_size', 0),
	array('Maksymalna szeroko¶æ lub wysoko¶æ dodwanych obrazów (w pikselach)', 'max_upl_width_height', 0),

	'Ustawienia u¿ytkownika',
	array('Zezwalaj na rejestracjê nowych u¿ytkowników', 'allow_user_registration', 1),
	array('Rejestracja u¿ytkownika wymaga potwierdzenia e-mail', 'reg_requires_valid_email', 1),
	array('Zezwalaj aby dwóch u¿ytkowników dzieli³o ten sam adres e-mail', 'allow_duplicate_emails_addr', 1),
	array('U¿ytkownicy mog± tworzyæ prywatne albumy', 'allow_private_albums', 1),

	'Dodakowe pola opisu obrazu (pozostaw puste je¶li nieu¿ywane)',
	array('Nazwa pola 1', 'user_field1_name', 0),
	array('Nazwa pola 2', 'user_field2_name', 0),
	array('Nazwa pola 3', 'user_field3_name', 0),
	array('Nazwa pola 4', 'user_field4_name', 0),

	'Zaawansowane ustawienia obrazów i miniatur',
	array('Znaki niedozwolone w nazwach plików', 'forbiden_fname_char',0),
	array('Akceptowane rozszerzenia plików dla dodawanych obrazów', 'allowed_file_extensions',0),
	array('Metoda zmiany rozdzielczo¶ci obrazów','thumb_method',2),
	array('¦cie¿ka do ImageMagick \'convert\' utility (przyk³adowo /usr/bin/X11/)', 'impath', 0),
	array('Dozwolone typy obrazów (wa¿ne tylko dla ImageMagick)', 'allowed_img_types',0),
	array('Opcje linii komend dla ImageMagick', 'im_options', 0),
	array('Czytaj dane nag³ówka EXIF w plikach JPEG', 'read_exif_data', 1),
	array('Katalog albumu <b>*</b>', 'fullpath', 0),
	array('Katalog obrazów u¿ytkownika <b>*</b>', 'userpics', 0),
	array('Przedrostek dla obrazów po¶rednich <b>*</b>', 'normal_pfx', 0),
	array('Przedrostek dla miniatur <b>*</b>', 'thumb_pfx', 0),
	array('Domy¶lny tryb katalogów', 'default_dir_mode', 0),
	array('Domy¶lny tryb obrazów', 'default_file_mode', 0),

	'Ustawienia Ciasteczek &amp; Zestawu znaków',
	array('Nazwa ciasteczka u¿ywana przez skrypt', 'cookie_name', 0),
	array('¦cie¿ka ciasteczka u¿ywana przez skrypt', 'cookie_path', 0),
	array('Kodowanie znaków', 'charset', 4),

	'Ustawienia inne',
	array('W³±cz tryb debug', 'debug_mode', 1),

	'<br /><div align="center">(*) Pola oznaczone * nie mog± byæ zmieniane je¿eli masz ju¿ jakie¶ obrazy w swojej galerii</div><br />'
);

// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
	'empty_name_or_com' => 'Musisz wpisaæ swoje imiê i komentarz',
	'com_added' => 'Twój komentarz zosta³ dodany',
	'alb_need_title' => 'Musisz podaæ tytu³ albumu!',
	'no_udp_needed' => 'Brak potrzeby uaktualnienia.',
	'alb_updated' => 'Album zosta³ uaktualniony',
	'unknown_album' => 'Wskazany album nie sitnieje albo nie masz pozwolenia na dodawanie do tego albumu',
	'no_pic_uploaded' => 'Nie wgrano ¿adnego obrazu!<br /><br />Je¿eli naprawdê wskaza³e¶ obraz do dodania, sprawd¥ czy serwer dopuszcza wgrywanie plików...',
	'err_mkdir' => 'Nieudane tworzenie katalogu %s !',
	'dest_dir_ro' => 'Katalog docelowy %s nie jest zapisywalny przez skrypt!',
	'err_move' => 'Nie mo¿na przenie¶æ %s do %s !',
	'err_fsize_too_large' => 'Rozmiar obrazu dodanego przez Ciebie jest zbyt du¿y (najwiêkszy dopuszczany to %s x %s) !',
	'err_imgsize_too_large' => 'Rozmiar pliku dodanego przez Ciebie jest zbyt du¿y (najwiêkszy dopuszczany to %s KB) !',
	'err_invalid_img' => 'Plik, który doda³e¶ nie jest poprawnym obrazem !',
	'allowed_img_types' => 'Mo¿esz dodaæ tylko %s obrazów.',
	'err_insert_pic' => 'Obraz \'%s\' nie mo¿e zostaæ umieszczony w albumie ',
	'upload_success' => 'Twój obraz zosta³ dodany poprawnie<br /><br />Stanie siê on widoczny po akceptacji administratora.',
	'info' => 'Informacja',
	'com_added' => 'Komentarz dodany',
	'alb_updated' => 'Album zaktualizowany',
	'err_comment_empty' => 'Twój komentarz jest pusty !',
	'err_invalid_fext' => 'Akceptowane s± tylko pliki z nastêpuj±cymi rozszerzeniami : <br /><br />%s.',
	'no_flood' => 'Przykro mi, ale jeste¶ aktualnie autorem ostatniego komentarza wys³anego dla tego obrazu<br /><br />Edytuj komentarz, który wys³a³e¶ je¶li chcesz go zmieniæ',
	'redirect_msg' => 'Jeste¶ przekierowywany.<br /><br /><br />Kliknij \'KONTYNUUJ\' je¶li strona nie od¶wie¿y siê automatycznie',
	'upl_success' => 'Twój obraz zosta³ dodany poprawnie',
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
	'caption' => 'Nag³ówek',
	'fs_pic' => 'obraz pe³nowymiarowy',
	'del_success' => 'skasowany poprawnie',
	'ns_pic' => 'normalny rozmiar obrazu',
	'err_del' => 'nie mo¿e zostaæ skasowany',
	'thumb_pic' => 'miniatura',
	'comment' => 'komentarz',
	'im_in_alb' => 'obraz w albumie',
	'alb_del_success' => 'Album \'%s\' skasowany',
	'alb_mgr' => 'Menad¿er albumów',
	'err_invalid_data' => 'Otrzymano nieprawid³owe dane w \'%s\'',
	'create_alb' => 'Tworzenie albumu \'%s\'',
	'update_alb' => 'Uaktualnianie albumu \'%s\' with title \'%s\' and index \'%s\'',
	'del_pic' => 'Kasuj obraz',
	'del_alb' => 'Kasuj album',
	'del_user' => 'Kasuj u¿ytkownika',
	'err_unknown_user' => 'Wskazany u¿ytkownik nie istnieje !',
	'comment_deleted' => 'Komentarz zosta³ pomy¶lnie dodany',
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
	'confirm_del' => 'Czy jeste¶ pewny, ¿e chcesz USUN¡Æ ten obraz ? \\nKomentarze równie¿ zostan± usuniête.',
	'del_pic' => 'USUÑ TEN OBRAZ',
	'size' => '%s x %s pikseli',
	'views' => '%s razy',
	'slideshow' => 'Pokaz slajdów',
	'stop_slideshow' => 'ZATRZYMAJ POKAZ',
	'view_fs' => 'Kliknij by zobaczyæ oryginalny obraz',
);

$lang_picinfo = array(
	'title' =>'Informacje o obrazie',
	'Filename' => 'Nazwa pliku',
	'Album name' => 'Nazwa albumu',
	'Rating' => 'Ocena (%s g³osów)',
	'Keywords' => 'S³owa kluczowe',
	'File Size' => 'Rozmiar pliku',
	'Dimensions' => 'Wymiary',
	'Displayed' => 'Wy¶wietlany',
	'Camera' => 'Aparat',
	'Date taken' => 'Data wykonania',
	'Aperture' => 'Przys³ona',
	'Exposure time' => 'Czas ekspozycji',
	'Focal length' => 'D³ugo¶æ ogniskowej',
	'Comment' => 'Komentarz'
);

$lang_display_comments = array(
	'OK' => 'OK',
	'edit_title' => 'Edytuj ten komentarz',
	'confirm_delete' => 'Czy jeste¶ pewny, ¿e chcesz usun±æ ten komentarz ?',
	'add_your_comment' => 'Dodaj swój komentarz',
	'your_name' => 'Twoje imiê',
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
	'title' => 'Wy¶lij e-kartkê',
	'invalid_email' => '<b>Uwaga</b> : nieprawid³owy adres e-mail !',
	'ecard_title' => 'e-kartka od %s dla Ciebie',
	'view_ecard' => 'Je¿eli e-kartka nie jest wy¶wietlana prawid³owo, kliknij ten odno¶nik',
	'view_more_pics' => 'Kliknij ten odno¶nik by zobaczyæ wiêcej obrazów !',
	'send_success' => 'Twoja e-kartka zosta³a wys³ana',
	'send_failed' => 'Przykro nam ale serwer nie mo¿e wys³aæ twojej e-kartki...',
	'from' => 'Od',
	'your_name' => 'Twoje imiê',
	'your_email' => 'Twój adres e-mail',
	'to' => 'Do',
	'rcpt_name' => 'Imiê odbiorcy',
	'rcpt_email' => 'Adres e-mail odbiorcy',
	'greetings' => 'Pozdrowienia',
	'message' => 'Wiadomo¶æ',
);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
	'pic_info' => 'Info&nbsp;obrazu',
	'album' => 'Album',
	'title' => 'Tytu³',
	'desc' => 'Opis',
	'keywords' => 'S³owa kluczowe',
	'pic_info_str' => '%sx%s - %sKB - %s ods³on - %s g³osów',
	'approve' => 'Dopu¶æ obraz',
	'postpone_app' => 'Od³ó¿ dopuszczenie na pó¥niej',
	'del_pic' => 'Usuñ obraz',
	'reset_view_count' => 'Wyzeruj licznik ods³on',
	'reset_votes' => 'Wyzeruj g³osy',
	'del_comm' => 'Usuñ komentarze',
	'upl_approval' => 'Pozwolenie ³adowania',
	'edit_pics' => 'Edytuj obrazy',
	'see_next' => 'Poka¿ nastêpny obraz',
	'see_prev' => 'Poka¿ poprzedni obraz',
	'n_pic' => '%s obrazów',
	'n_of_pic_to_disp' => 'Liczba obrazów do wy¶wietlenia',
	'apply' => 'Wprowad¥ zmiany'
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
	'group_name' => 'Nazwa grupy',
	'disk_quota' => 'Przestrzeñ dyskowa',
	'can_rate' => 'Mo¿e ocaniaæ obrazy',
	'can_send_ecards' => 'Mo¿e wysy³aæ e-kartki',
	'can_post_com' => 'Mo¿e wysy³aæ komentarze',
	'can_upload' => 'Mo¿e dodawaæ obrazy',
	'can_have_gallery' => 'Mo¿e mieæ osobist± galeriê',
	'apply' => 'Wprowad¥ zmiany',
	'create_new_group' => 'Twórz now± grupê',
	'del_groups' => 'Usuñ wskazan±(e) grupê(y)',
	'confirm_del' => 'Uwaga, przy usuwaniu grupy, u¿ytkownicy nale¿±cy do tej grupy zostan± przeniesieni do \'Registered\' grupy !\n\nCzy chcesz kontynuowaæ ?',
	'title' => 'Zarz±dzaj grupami u¿ytkowników',
	'approval_1' => 'Pub. pozw. ³adowania (1)',
	'approval_2' => 'Pryw. pozw. ³adowania (2)',
	'note1' => '<b>(1)</b> Dodawanie do albumu publicznego wymaga pozwolenia administratora',
	'note2' => '<b>(2)</b> Dodawanie do albumu, ktróry nale¿y do (innego) u¿ytkownika wymaga pozwolenia administratora',
	'notes' => 'Notatki'
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
	'welcome' => 'Witaj !'
);

$lang_album_admin_menu = array(
	'confirm_delete' => 'Czy jeste¶ pewny, ¿e chcesz USUN¡Æ ten album ? \\nWszystkie obrazy i komentarze równie¿ zostan± usuniête.',
	'delete' => 'USUÑ',
	'modify' => 'W£A¦CIWO¦CI',
	'edit_pics' => 'EDYTUJ OBRAZY',
);

$lang_list_categories = array(
	'home' => 'Strona g³ówna',
	'stat1' => '<b>[pictures]</b> obrazów w <b>[albums]</b> albumach i <b>[cat]</b> kategoriach z <b>[comments]</b> komentarzami przêgl±danymi <b>[views]</b> razy',
	'stat2' => '<b>[pictures]</b> obrazów w <b>[albums]</b> albumach ogl±danych <b>[views]</b> razy',
	'xx_s_gallery' => '%s\'s Galeria',
	'stat3' => '<b>[pictures]</b> obrazów w <b>[albums]</b> albumach z <b>[comments]</b> komentarzami, ogl±dane <b>[views]</b> razy'
);

$lang_list_users = array(
	'user_list' => 'Lista u¿ytkownika',
	'no_user_gal' => 'Brak galerii u¿ytkownika',
	'n_albums' => '%s album(ów)',
	'n_pics' => '%s obraz(ów)'
);

$lang_list_albums = array(
	'n_pictures' => '%s obrazów',
	'last_added' => ', ostatni dodany %s'
);

}

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
	'login' => 'Logowanie',
	'enter_login_pswd' => 'Wprowad¥ nazwê u¿ytkownika i has³o aby siê zalogowaæ',
	'username' => 'Nazwa u¿ytkownika',
	'password' => 'Has³o',
	'remember_me' => 'Zapamiêtaj mnie',
	'welcome' => 'Witaj %s ...',
	'err_login' => '*** B³±d logowania. Spróbuj ponownie ***',
	'err_already_logged_in' => 'Jeste¶ aktualnie zalogowany !',
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
	'logout' => 'Wylogowywanie',
	'bye' => 'Pa pa %s ...',
	'err_not_loged_in' => 'Nie jeste¶ zalogowany !',
);

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
	'upd_alb_n' => 'Uaktualnij album %s',
	'general_settings' => 'Ustawienia generalne',
	'alb_title' => 'Tytu³ albumu',
	'alb_cat' => 'Kategoria albumu',
	'alb_desc' => 'Opis albumu',
	'alb_thumb' => 'Miniatura albumu',
	'alb_perm' => 'Pozwolenia dla tego albumu',
	'can_view' => 'Album mo¿e byæ ogl±dany przez',
	'can_upload' => 'Zwiedzaj±cy nie mog± dodawaæ obrazów',
	'can_post_comments' => 'Zwiedzaj±cy mog± wysy³aæ komentarze',
	'can_rate' => 'Zwiedzaj±cy mog± oceniaæ obrazy',
	'user_gal' => 'Galeria u¿ytkownika',
	'no_cat' => '* Bez kategorii *',
	'alb_empty' => 'Album jest pusty',
	'last_uploaded' => 'Ostatnio dodane',
	'public_alb' => 'Wszyscy (album publiczny)',
	'me_only' => 'Tylko ja',
	'owner_only' => 'Tylko w³a¶ciciel albumu (%s)',
	'groupp_only' => 'Cz³onkowie grupy \'%s\' ',
	'err_no_alb_to_modify' => 'W bazie danych brak albumu, który mo¿esz zmodyfikowaæ.',
	'update' => 'Auktualnij album'
);

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
	'already_rated' => 'Przykro mi ale ju¿ oceni³e¶ ten obraz',
	'rate_ok' => 'Twój g³os zosta³ zaakceptowany',
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
By clicking 'I agree' below you agree to be bound by these conditions.
EOT;

$lang_register_php = array(
	'page_title' => 'Rejestracja u¿ytkownika',
	'term_cond' => 'Zwroty i warunki',
	'i_agree' => 'Zgadzam siê',
	'submit' => 'Wy¶lij rejestracjê',
	'err_user_exists' => 'Nazwa u¿ytkownika, któr± wprowadzi³e¶ ju¿ istnieje. Proszê, wybierz inn±',
	'err_password_mismatch' => 'Oba has³a nie pokrywaj± siê ze sob±, proszê wprowad¥ je ponownie',
	'err_uname_short' => 'Nazwa u¿ytkownika musi mieæ conajmniej 2 znaki',
	'err_password_short' => 'Has³o musi mieæ conajmniej 2 znaki',
	'err_uname_pass_diff' => 'Nazwa u¿ytkownika i has³o musz± byæ ró¿ne',
	'err_invalid_email' => 'Niepoprawny adres e-mail',
	'err_duplicate_email' => 'Inny u¿ytkownik jest aktualnie zarejestrowany z adresem e-mail takim jaki poda³e¶',
	'enter_info' => 'Wprowad¥ informacje rejestracyjne',
	'required_info' => 'Informacja wymagana',
	'optional_info' => 'Informacja opcjonalna',
	'username' => 'Nazwa u¿ytkownika',
	'password' => 'Has³o',
	'password_again' => 'Powtórz has³o',
	'email' => 'E-mail',
	'location' => 'Lokalizacja',
	'interests' => 'Zainteresowania',
	'website' => 'Strona domowa',
	'occupation' => 'Zawód',
	'error' => 'B£¡D',
	'confirm_email_subject' => '%s - Potwierdzenie rejestracji',
	'information' => 'Informacja',
	'failed_sending_email' => 'E-mail potwierdzaj±cy rejestracjê nie mo¿e zostaæ wys³any !',
	'thank_you' => 'Dziêkujê za zarejestrowanie.<br /><br />E-mail z informacj± jak aktywowaæ Twoje konto zosta³ wys³any pod adres, który poda³e¶.',
	'acct_created' => 'Twoje konto zosta³o utworzone i teraz mo¿esz zalogowaæ siê podaj±c Twoj± nazwê u¿ytkownika i has³o',
	'acct_active' => 'Twoje konto jest teraz aktywne i mo¿esz zalogowaæ siê podaj±c Twoj± nazwê u¿ytkownika i has³o',
	'acct_already_act' => 'Twoje konto jest ju¿ aktywne !',
	'acct_act_failed' => 'To konto nie mo¿e zostaæ aktywowane !',
	'err_unk_user' => 'Wskazany u¿ytkownik nie istnieje !',
	'x_s_profile' => 'Profil u¿ytkownika %s',
	'group' => 'Grupa',
	'reg_date' => 'Przy³±czy³ siê',
	'disk_usage' => 'U¿ycie dysku',
	'change_pass' => 'Zmieñ has³o',
	'current_pass' => 'Aktualne has³o',
	'new_pass' => 'Nowe has³o',
	'new_pass_again' => 'Nowe has³o ponownie',
	'err_curr_pass' => 'Aktualne has³o jest nieprawid³owe',
	'apply_modif' => 'Wprowad¥ zmiany',
	'change_pass' => 'Zmieñ moje has³o',
	'update_success' => 'Twój profil zosta³ uaktualniony',
	'pass_chg_success' => 'Twoje has³o zosta³o zmienione',
	'pass_chg_error' => 'Twoje has³o nie zosta³o zmienione',
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
	'title' => 'Przegl±daj komentarze',
	'no_comment' => 'Brak komentarzy do przegl±dania',
	'n_comm_del' => '%s komentarz(y) usuniêto',
	'n_comm_disp' => 'Liczba komentarzy do wy¶wietlenia',
	'see_prev' => 'Zobacz poprzedni',
	'see_next' => 'Zobacz nastêpny',
	'del_comm' => 'Usuñ zaznaczone komentarze',
);


// ------------------------------------------------------------------------- //
// File search.php - OK
// ------------------------------------------------------------------------- //

if (defined('SEARCH_PHP')) $lang_search_php = array(
	0 => 'Przeszukuj kolekcjê orazów',
);

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
	'page_title' => 'Szukaj w¶ród nowych obrazów',
	'select_dir' => 'Wybierz katalog',
	'select_dir_msg' => 'Ta funkcja pozwala Ci dodaæ grupê obrazów, któr± skopiowa³e¶ na serwer poprzez FTP.<br /><br />Wybierz katalog do którego skopiowa³e¶ swoje obrazy',
	'no_pic_to_add' => 'Brak obrazu do dodania',
	'need_one_album' => 'Aby u¿yæ tej funkcji potrzebujesz conajmniej jeden album',
	'warning' => 'Ostrze¿enie',
	'change_perm' => 'skrypt nie mo¿e zapisywaæ do tego katalogu, musisz zmieniæ jego tryb na 755 lub 777 przed prób± dodawania obrazów !',
	'target_album' => '<b>Umie¶æ obrazy &quot;</b>%s<b>&quot; w </b>%s',
	'folder' => 'Katalog',
	'image' => 'Obraz',
	'album' => 'Album',
	'result' => 'Rezultat',
	'dir_ro' => 'Nie do zapisania. ',
	'dir_cant_read' => 'Nie do odczytania. ',
	'insert' => 'Dodawanie nowych obrazów do galerii',
	'list_new_pic' => 'Lista nowych obrazów',
	'insert_selected' => 'Wstaw wskazane obrazy',
	'no_pic_found' => 'Nie odnaleziono nowego obrazu',
	'be_patient' => 'Proszê b±d¥ cierpliwy, skrypt potrzebuje czasu na dodatnie obrazów',
	'notes' =>  '<ul>'.
				'<li><b>OK</b> : oznacza, ¿e obraz zosta³ pomy¶lnie dodany'.
				'<li><b>DP</b> : oznacza, ¿e obraz to duplikat i jest ju¿ w bazie danych'.
				'<li><b>PB</b> : oznacza, ¿e obraz nie mo¿e zostaæ dodany, sprawd¥ swoj± konfiguracjê oraz prawa dostêpu do katalogu gdzie umieszczone s± obrazy'.
				'<li>Je¿eli nie widaæ \'znaków\' OK, DP, PB kliknij na uszkodzonym obrazie aby zobaczyæ wiadomo¶æ o b³êdzie utworzon± przez PHP'.
				'<li>Je¿eli Twoja przegl±darka wyczerpa³a limit czasu, naci¶nij przycisk od¶wie¿'.
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
	'title' => 'Dodaj obraz',
	'max_fsize' => 'Maksymalny dozwolony rozmiar pliku to %s KB',
	'album' => 'Album',
	'picture' => 'Obraz',
	'pic_title' => 'Tytu³ obrazu',
	'description' => 'Opis obrazu',
	'keywords' => 'S³owa kluczowe (oddzielone spacjami)',
	'err_no_alb_uploadables' => 'Przykro mi ale nie ma albumu, do którego by³by¶ uprawniony dodawaæ obrazy',
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
	'title' => 'Zarz±dzaj u¿ytkownikami',
	'name_a' => 'Nazwa rosn±co',
	'name_d' => 'Nazwa malej±co',
	'group_a' => 'Grupa rosn±co',
	'group_d' => 'Grupa malej±co',
	'reg_a' => 'Data rejestracji rosn±co',
	'reg_d' => 'Data rejestracji malej±co',
	'pic_a' => 'Liczba obrazów rosn±co',
	'pic_d' => 'Liczba obrazów malej±co',
	'disku_a' => 'U¿ycie dysku rosn±co',
	'disku_d' => 'U¿ycie dysku malej±co',
	'sort_by' => 'Sortuj u¿ytkowników wed³ug',
	'err_no_users' => 'Tabela u¿ytkowników jest pusta !',
	'err_edit_self' => 'Nie mo¿esz edytowaæ swojego w³asnego progilu, u¿yj odno¶nika \'Mój profil\' w tym celu',
	'edit' => 'EDYTUJ',
	'delete' => 'USUÑ',
	'name' => 'Nazwa u¿ytkownika',
	'group' => 'Grupa',
	'inactive' => 'Nieaktywny',
	'operations' => 'Operacje',
	'pictures' => 'Obrazy',
	'disk_space' => 'U¿ywana przestrzeñ / Quota',
	'registered_on' => 'Zarejestrowany',
	'u_user_on_p_pages' => '%d u¿ytkowników na %d stronie(ach)',
	'confirm_del' => 'Czy jeste¶ pewny, ¿e chcesz USUN¡Æ tego u¿ytkownika ? \\nWszystkie jego obrazy i albumy równie¿ zostan± usuniête.',
	'mail' => 'POCZTA',
	'err_unknown_user' => 'Wskazany u¿ytkownik nie istnieje !',
	'modify_user' => 'Modyfikuj u¿ytkownika',
	'notes' => 'Notatki',
	'note_list' => '<li>Je¶li nie chcesz zmieniæ aktualnego has³a, pozostaw pole "has³o" puste',
	'password' => 'Has³o',
	'user_active' => 'U¿ytkownik jest aktywny',
	'user_group' => 'Grupa u¿ytkownika',
	'user_email' => 'E-mail u¿ytkownika',
	'user_web_site' => 'Strona www u¿ytkownika',
	'create_new_user' => 'Twórz nowego u¿ytkownika',
	'user_location' => 'Lokalizacja u¿ytkownika',
	'user_interests' => 'Zainteresowania u¿ytkownika',
	'user_occupation' => 'Zawód u¿ytkownika',
);
?>