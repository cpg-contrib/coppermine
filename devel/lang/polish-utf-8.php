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
// ------------------------------------------------------------------------- //
//  Polish language file - version 1.0                                       //
//  contributed by Bogdan (koszalkb@wizard.ae.krakow.pl)                     //
// ------------------------------------------------------------------------- //

$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('Bajtów', 'KB', 'MB');

// Day of weeks and months
$lang_day_of_week = array('Nie', 'Pon', 'Wto', 'Śro', 'Czw', 'Pią', 'Sob');
$lang_month = array('Sty', 'Lut', 'Mar', 'Kwi', 'Maj', 'Cze', 'Lip', 'Sie', 'Wrz', 'PaĽ', 'Lis', 'Gru');

// Some common strings
$lang_yes = 'Tak';
$lang_no  = 'Nie';
$lang_back = 'WSTECZ';
$lang_continue = 'KONTYNUUJ';
$lang_info = 'Informacja';
$lang_error = 'Błąd';

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
	'topn' => 'Najczęściej oglądane',
	'toprated' => 'Najwyżej oceniane',
	'lasthits' => 'Ostatnio oglądane',
	'search' => 'Wyniki wyszukiwania'
);

$lang_errors = array(
	'access_denied' => 'Nie masz uprawnień dostępu do tej strony.',
	'perm_denied' => 'Nie masz uprawnień do przeprowadzenia tej operacji.',
	'param_missing' => 'Skrypt wywołany bez wymaganego(ych) parametru(ów).',
	'non_exist_ap' => 'Wybrany album/obraz nie istnieje!',
	'quota_exceeded' => 'Przekroczona przestrzeń dyskowa<br /><br />Twoja przestrzeń dyskowa to [quota]K, Twoje obrazy aktualnie zajmuja [space]K, dodanie tego obrazu spowodowałoby przekroczenie dostępnej przestrzeni dyskowej.',
	'gd_file_type_err' => 'Podczas korzystania z biblioteki graficznej GD dopuszczalne typy plików to jedynie JPEG i PNG.',
	'invalid_image' => 'Obraz który wgrałeś jest uszkodzony lub nie może zostać przetworzony przez bibliotekę GD',
	'resize_failed' => 'Nie można utworzyć miniatury lub pomniejszonego obrazu.',
	'no_img_to_display' => 'Brak obrazu do wyświetlenia',
	'non_exist_cat' => 'Wybrana kategoria nie istnieje',
	'orphan_cat' => 'Kategoria ma nieistniejącą grupę nadrzędną, uruchom menedżera kategori aby naprawić ten problem.',
	'directory_ro' => 'Katalog \'%s\' nie jest zapisywalny, obrazy nie mogą zostać usunięte',
	'non_exist_comment' => 'Wskazany komentarz nie istnieje.',
	'pic_in_invalid_album' => 'Obraz jest w nieistniejącym albumie (%s)!?'
);

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
	'alb_list_title' => 'IdĽ do listy albumów',
	'alb_list_lnk' => 'Lista albumów',
	'my_gal_title' => 'IdĽ do mojej osobistej galerii',
	'my_gal_lnk' => 'Moja galeria',
	'my_prof_lnk' => 'Mój profil',
	'adm_mode_title' => 'Przełącz do trybu administratora',
	'adm_mode_lnk' => 'Tryb administratora',
	'usr_mode_title' => 'Przełącz do trybu użytkownika',
	'usr_mode_lnk' => 'Tryb użytkownika',
	'upload_pic_title' => 'Załaduj obraz do albumu',
	'upload_pic_lnk' => 'Załaduj obraz',
	'register_title' => 'Stwórz konto',
	'register_lnk' => 'Zarejestruj',
	'login_lnk' => 'Zaloguj',
	'logout_lnk' => 'Wyloguj',
	'lastup_lnk' => 'Ostatnio dodane',
	'lastcom_lnk' => 'Ostatnie komentarze',
	'topn_lnk' => 'Najczęściej oglądane',
	'toprated_lnk' => 'Najwyżej oceniane',
	'search_lnk' => 'Szukaj',
);

$lang_gallery_admin_menu = array(
	'upl_app_lnk' => 'Pozwolenie ładowania',
	'config_lnk' => 'Konfiguracja',
	'albums_lnk' => 'Albumy',
	'categories_lnk' => 'Kategorie',
	'users_lnk' => 'Użytkownicy',
	'groups_lnk' => 'Grupy',
	'comments_lnk' => 'Komentarze',
	'searchnew_lnk' => 'Wsadowe dodawanie obrazów',
);

$lang_user_admin_menu = array(
	'albmgr_lnk' => 'Twórz / porządkuj moje albumy',
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
	'sort_da' => 'Sortuj według daty rosnąco',
	'sort_dd' => 'Sortuj według daty malejąco',
	'sort_na' => 'Sortuj według nazwy rosnąco',
	'sort_nd' => 'Sortuj według nazwy malejąco',
	'pic_on_page' => '%d obrazów na %d stronie(ach)',
	'user_on_page' => '%d użytkowników na %d stronie(ach)'
);

$lang_img_nav_bar = array(
	'thumb_title' => 'Powrót do strony miniatur',
	'pic_info_title' => 'Pokaż/ukryj informacje o obrazie',
	'slideshow_title' => 'Pokaz slajdów',
	'ecard_title' => 'Wyślij ten obraz jako e-kartkę',
	'ecard_disabled' => 'e-kartki nieaktywne',
	'ecard_disabled_msg' => 'Nie masz uprawnień do wysyłania e-kartek',
	'prev_title' => 'Pokaż poprzedi obraz',
	'next_title' => 'Pokaż następny obraz',
	'pic_pos' => 'OBRAZ %s/%s',
);

$lang_rate_pic = array(
	'rate_this_pic' => 'Oceń ten obraz ',
	'no_votes' => '(Dotychczas bez głosów)',
	'rating' => '(aktualna ocena : %s / 5 z %s głosami)',
	'rubbish' => 'Smieć',
	'poor' => 'Słaby',
	'fair' => 'Średni',
	'good' => 'Dorby',
	'excellent' => 'Wyśmienity',
	'great' => 'Wspaniały',
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
	CRITICAL_ERROR => 'Błąd krytyczny',
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
	'n_views' => '%s odsłon',
	'n_votes' => '(%s głosów)'
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
	'Very Happy' => 'Bardzo szczęśliwy',
	'Smile' => 'Uśmiech',
	'Sad' => 'Smutny',
	'Surprised' => 'Zaskoczony',
	'Shocked' => 'Zaszokowany',
	'Confused' => 'Zakłopotany',
	'Cool' => 'Spoko',
	'Laughing' => 'Śmiech',
	'Mad' => 'Szalony',
	'Razz' => 'Razz',
	'Embarassed' => 'Zawstydzony',
	'Crying or Very sad' => 'Płacze lub bardzo smutny',
	'Evil or Very Mad' => 'Zły lub bardzo wściekły',
	'Twisted Evil' => 'Twisted Evil',
	'Rolling Eyes' => 'Przewraca oczyma',
	'Wink' => 'Mrugnięcie',
	'Idea' => 'Pomysł',
	'Arrow' => 'Strzałka',
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
	1 => 'Ładowanie trybu administratora...',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
	'alb_need_name' => 'Albumy muszą mieć nazwy!',
	'confirm_modifs' => 'Czy jesteś pewny, że chcesz dokonać tych modyfikacji?',
	'no_change' => 'Nie dokonałeś żadnej zmiany!',
	'new_album' => 'Nowy album',
	'confirm_delete1' => 'Czy jesteś pewny, że chcesz usunąć ten album?',
	'confirm_delete2' => '\nWszystkie obrazy i komentarze, które zawiera zostaną utracone!',
	'select_first' => 'Najpierw wybierz album',
	'alb_mrg' => 'Menadżer Albumów',
	'my_gallery' => '* Moja galeria *',
	'no_category' => '* Bez kategorii *',
	'delete' => 'Usuń',
	'new' => 'Nowy',
	'apply_modifs' => 'WprowadĽ zmiany',
	'select_category' => 'Wybierz kategorię',
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
	'miss_param' => 'Parametry wymagane dla \'%s\'operacji nie podane!',
	'unknown_cat' => 'Wybrana kategoria nie figuruje w bazie danych',
	'usergal_cat_ro' => 'Kategoria galerii użytkownika nie może zostać usunięta!',
	'manage_cat' => 'Zarządzaj kategoriami',
	'confirm_delete' => 'Czy jesteś pewny, że chcesz USUNĄĆ tę kategorię',
	'category' => 'Kategoria',
	'operations' => 'Operacje',
	'move_into' => 'Przenieś do',
	'update_create' => 'Aktualizuj/Twórz kategorię',
	'parent_cat' => 'Kategoria nadrzędna',
	'cat_title' => 'Tytuł kategorii',
	'cat_desc' => 'Opis kategorii'
);

// ------------------------------------------------------------------------- //
// File config.php
// ------------------------------------------------------------------------- //

if (defined('CONFIG_PHP')) $lang_config_php = array(
	'title' => 'Konfiguracja',
	'restore_cfg' => 'Przywróć ustawienia fabryczne',
	'save_cfg' => 'Zapisz nową konfigurację',
	'notes' => 'Notatki',
	'info' => 'Informacja',
	'upd_success' => 'Konfiguracja Coppermine została zaktualizowana',
	'restore_success' => 'Domyślna konfiguracja Coppermine przywrócona',
	'name_a' => 'Nazwa rosnąco',
	'name_d' => 'Nazwa malejąca',
	'date_a' => 'Data rosnąco',
	'date_d' => 'Data malejąco'
);

if (defined('CONFIG_PHP')) $lang_config_data = array(
	'Ustawienia główne',
	array('Nazwa galerii', 'gallery_name', 0),
	array('Opis galerii', 'gallery_description', 0),
	array('E-mail administratora galerii', 'gallery_admin_email', 0),
	array('Adres docelowy dla odnośnika \'Zobacz więcej obrazów\' w e-kartkach', 'ecards_more_pic_target', 0),
	array('Język', 'lang', 5),
	array('Temat', 'theme', 6),

	'Widok listy albumów',
	array('Szerokość głównej tabeli (w pikselach lub %)', 'main_table_width', 0),
	array('Liczba poziomów kategorii do wyświetlenia', 'subcat_level', 0),
	array('Liczba albumów do wyświetlenia', 'albums_per_page', 0),
	array('Liczba kolumn dla listy albumów', 'album_list_cols', 0),
	array('Rozmiar miniatur w pikselach', 'alb_list_thumb_size', 0),
	array('Zawartość strony głównej', 'main_page_layout', 0),

	'Widok miniatur',
	array('Liczba kolumn na stronie miniatur', 'thumbcols', 0),
	array('Liczba wierszy na stronie miniatur', 'thumbrows', 0),
	array('Maksymalna liczba tabs do wyświetlenia', 'max_tabs', 0),
	array('Pokaż caption obrazu (oprócz tytułu) pod miniaturą', 'caption_in_thumbview', 1),
	array('Pokaż liczbę komentarzy poniżej miniatury', 'display_comment_count', 1),
	array('Domyślny porządek sortowania dla obrazów', 'default_sort_order', 3),
	array('Minimalna liczba głosów do pojawienia się obrazu na liście \'najwyżej-oceniane\' ', 'min_votes_for_rating', 0),

	'Widok obrazu &amp; Ustawienia komentarzy',
	array('Szerokość tabeli dla ekranu obrazów (piksele lub %)', 'picture_table_width', 0),
	array('Informacja o obrazie domyślnie widoczna', 'display_pic_info', 1),
	array('Filtrowanie niecenzuralnych słów w komentarzach', 'filter_bad_words', 1),
	array('Pozwól na uśmieszki w komentarzach', 'enable_smilies', 1),
	array('Maksymalna długość opisu obrazu', 'max_img_desc_length', 0),
	array('Maksymalna liczba znaków w słowie', 'max_com_wlength', 0),
	array('Maksymalna liczba linii w komentarzu', 'max_com_lines', 0),
	array('Maksymalna długość komentarza', 'max_com_size', 0),

	'Ustawienia obrazów i miniatur',
	array('Jakość dla plikow JPG', 'jpeg_qual', 0),
	array('Maksymalna szerokość lub wysokość miniatury <b>*</b>', 'thumb_width', 0),
	array('Twórz pośrednie obrazy','make_intermediate',1),
	array('Maksymalna szerokość lub wysokość pośredniego obrazu <b>*</b>', 'picture_width', 0),
	array('Maksymalny rozmiar wgrywanych plików (KB)', 'max_upl_size', 0),
	array('Maksymalna szerokość lub wysokość dodwanych obrazów (w pikselach)', 'max_upl_width_height', 0),

	'Ustawienia użytkownika',
	array('Zezwalaj na rejestrację nowych użytkowników', 'allow_user_registration', 1),
	array('Rejestracja użytkownika wymaga potwierdzenia e-mail', 'reg_requires_valid_email', 1),
	array('Zezwalaj aby dwóch użytkowników dzieliło ten sam adres e-mail', 'allow_duplicate_emails_addr', 1),
	array('Użytkownicy mogą tworzyć prywatne albumy', 'allow_private_albums', 1),

	'Dodakowe pola opisu obrazu (pozostaw puste jeśli nieużywane)',
	array('Nazwa pola 1', 'user_field1_name', 0),
	array('Nazwa pola 2', 'user_field2_name', 0),
	array('Nazwa pola 3', 'user_field3_name', 0),
	array('Nazwa pola 4', 'user_field4_name', 0),

	'Zaawansowane ustawienia obrazów i miniatur',
	array('Znaki niedozwolone w nazwach plików', 'forbiden_fname_char',0),
	array('Akceptowane rozszerzenia plików dla dodawanych obrazów', 'allowed_file_extensions',0),
	array('Metoda zmiany rozdzielczości obrazów','thumb_method',2),
	array('Ścieżka do ImageMagick \'convert\' utility (przykładowo /usr/bin/X11/)', 'impath', 0),
	array('Dozwolone typy obrazów (ważne tylko dla ImageMagick)', 'allowed_img_types',0),
	array('Opcje linii komend dla ImageMagick', 'im_options', 0),
	array('Czytaj dane nagłówka EXIF w plikach JPEG', 'read_exif_data', 1),
	array('Katalog albumu <b>*</b>', 'fullpath', 0),
	array('Katalog obrazów użytkownika <b>*</b>', 'userpics', 0),
	array('Przedrostek dla obrazów pośrednich <b>*</b>', 'normal_pfx', 0),
	array('Przedrostek dla miniatur <b>*</b>', 'thumb_pfx', 0),
	array('Domyślny tryb katalogów', 'default_dir_mode', 0),
	array('Domyślny tryb obrazów', 'default_file_mode', 0),

	'Ustawienia Ciasteczek &amp; Zestawu znaków',
	array('Nazwa ciasteczka używana przez skrypt', 'cookie_name', 0),
	array('Ścieżka ciasteczka używana przez skrypt', 'cookie_path', 0),
	array('Kodowanie znaków', 'charset', 4),

	'Ustawienia inne',
	array('Włącz tryb debug', 'debug_mode', 1),

	'<br /><div align="center">(*) Pola oznaczone * nie mogą być zmieniane jeżeli masz już jakieś obrazy w swojej galerii</div><br />'
);

// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
	'empty_name_or_com' => 'Musisz wpisać swoje imię i komentarz',
	'com_added' => 'Twój komentarz został dodany',
	'alb_need_title' => 'Musisz podać tytuł albumu!',
	'no_udp_needed' => 'Brak potrzeby uaktualnienia.',
	'alb_updated' => 'Album został uaktualniony',
	'unknown_album' => 'Wskazany album nie sitnieje albo nie masz pozwolenia na dodawanie do tego albumu',
	'no_pic_uploaded' => 'Nie wgrano żadnego obrazu!<br /><br />Jeżeli naprawdę wskazałeś obraz do dodania, sprawdĽ czy serwer dopuszcza wgrywanie plików...',
	'err_mkdir' => 'Nieudane tworzenie katalogu %s !',
	'dest_dir_ro' => 'Katalog docelowy %s nie jest zapisywalny przez skrypt!',
	'err_move' => 'Nie można przenieść %s do %s !',
	'err_fsize_too_large' => 'Rozmiar obrazu dodanego przez Ciebie jest zbyt duży (największy dopuszczany to %s x %s) !',
	'err_imgsize_too_large' => 'Rozmiar pliku dodanego przez Ciebie jest zbyt duży (największy dopuszczany to %s KB) !',
	'err_invalid_img' => 'Plik, który dodałeś nie jest poprawnym obrazem !',
	'allowed_img_types' => 'Możesz dodać tylko %s obrazów.',
	'err_insert_pic' => 'Obraz \'%s\' nie może zostać umieszczony w albumie ',
	'upload_success' => 'Twój obraz został dodany poprawnie<br /><br />Stanie się on widoczny po akceptacji administratora.',
	'info' => 'Informacja',
	'com_added' => 'Komentarz dodany',
	'alb_updated' => 'Album zaktualizowany',
	'err_comment_empty' => 'Twój komentarz jest pusty !',
	'err_invalid_fext' => 'Akceptowane są tylko pliki z następującymi rozszerzeniami : <br /><br />%s.',
	'no_flood' => 'Przykro mi, ale jesteś aktualnie autorem ostatniego komentarza wysłanego dla tego obrazu<br /><br />Edytuj komentarz, który wysłałeś jeśli chcesz go zmienić',
	'redirect_msg' => 'Jesteś przekierowywany.<br /><br /><br />Kliknij \'KONTYNUUJ\' jeśli strona nie odświeży się automatycznie',
	'upl_success' => 'Twój obraz został dodany poprawnie',
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
	'caption' => 'Nagłówek',
	'fs_pic' => 'obraz pełnowymiarowy',
	'del_success' => 'skasowany poprawnie',
	'ns_pic' => 'normalny rozmiar obrazu',
	'err_del' => 'nie może zostać skasowany',
	'thumb_pic' => 'miniatura',
	'comment' => 'komentarz',
	'im_in_alb' => 'obraz w albumie',
	'alb_del_success' => 'Album \'%s\' skasowany',
	'alb_mgr' => 'Menadżer albumów',
	'err_invalid_data' => 'Otrzymano nieprawidłowe dane w \'%s\'',
	'create_alb' => 'Tworzenie albumu \'%s\'',
	'update_alb' => 'Uaktualnianie albumu \'%s\' with title \'%s\' and index \'%s\'',
	'del_pic' => 'Kasuj obraz',
	'del_alb' => 'Kasuj album',
	'del_user' => 'Kasuj użytkownika',
	'err_unknown_user' => 'Wskazany użytkownik nie istnieje !',
	'comment_deleted' => 'Komentarz został pomyślnie dodany',
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
	'confirm_del' => 'Czy jesteś pewny, że chcesz USUNĄĆ ten obraz ? \\nKomentarze również zostaną usunięte.',
	'del_pic' => 'USUŃ TEN OBRAZ',
	'size' => '%s x %s pikseli',
	'views' => '%s razy',
	'slideshow' => 'Pokaz slajdów',
	'stop_slideshow' => 'ZATRZYMAJ POKAZ',
	'view_fs' => 'Kliknij by zobaczyć oryginalny obraz',
);

$lang_picinfo = array(
	'title' =>'Informacje o obrazie',
	'Filename' => 'Nazwa pliku',
	'Album name' => 'Nazwa albumu',
	'Rating' => 'Ocena (%s głosów)',
	'Keywords' => 'Słowa kluczowe',
	'File Size' => 'Rozmiar pliku',
	'Dimensions' => 'Wymiary',
	'Displayed' => 'Wyświetlany',
	'Camera' => 'Aparat',
	'Date taken' => 'Data wykonania',
	'Aperture' => 'Przysłona',
	'Exposure time' => 'Czas ekspozycji',
	'Focal length' => 'Długość ogniskowej',
	'Comment' => 'Komentarz'
);

$lang_display_comments = array(
	'OK' => 'OK',
	'edit_title' => 'Edytuj ten komentarz',
	'confirm_delete' => 'Czy jesteś pewny, że chcesz usunąć ten komentarz ?',
	'add_your_comment' => 'Dodaj swój komentarz',
	'your_name' => 'Twoje imię',
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
	'title' => 'Wyślij e-kartkę',
	'invalid_email' => '<b>Uwaga</b> : nieprawidłowy adres e-mail !',
	'ecard_title' => 'e-kartka od %s dla Ciebie',
	'view_ecard' => 'Jeżeli e-kartka nie jest wyświetlana prawidłowo, kliknij ten odnośnik',
	'view_more_pics' => 'Kliknij ten odnośnik by zobaczyć więcej obrazów !',
	'send_success' => 'Twoja e-kartka została wysłana',
	'send_failed' => 'Przykro nam ale serwer nie może wysłać twojej e-kartki...',
	'from' => 'Od',
	'your_name' => 'Twoje imię',
	'your_email' => 'Twój adres e-mail',
	'to' => 'Do',
	'rcpt_name' => 'Imię odbiorcy',
	'rcpt_email' => 'Adres e-mail odbiorcy',
	'greetings' => 'Pozdrowienia',
	'message' => 'Wiadomość',
);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
	'pic_info' => 'Info&nbsp;obrazu',
	'album' => 'Album',
	'title' => 'Tytuł',
	'desc' => 'Opis',
	'keywords' => 'Słowa kluczowe',
	'pic_info_str' => '%sx%s - %sKB - %s odsłon - %s głosów',
	'approve' => 'Dopuść obraz',
	'postpone_app' => 'Odłóż dopuszczenie na póĽniej',
	'del_pic' => 'Usuń obraz',
	'reset_view_count' => 'Wyzeruj licznik odsłon',
	'reset_votes' => 'Wyzeruj głosy',
	'del_comm' => 'Usuń komentarze',
	'upl_approval' => 'Pozwolenie ładowania',
	'edit_pics' => 'Edytuj obrazy',
	'see_next' => 'Pokaż następny obraz',
	'see_prev' => 'Pokaż poprzedni obraz',
	'n_pic' => '%s obrazów',
	'n_of_pic_to_disp' => 'Liczba obrazów do wyświetlenia',
	'apply' => 'WprowadĽ zmiany'
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
	'group_name' => 'Nazwa grupy',
	'disk_quota' => 'Przestrzeń dyskowa',
	'can_rate' => 'Może ocaniać obrazy',
	'can_send_ecards' => 'Może wysyłać e-kartki',
	'can_post_com' => 'Może wysyłać komentarze',
	'can_upload' => 'Może dodawać obrazy',
	'can_have_gallery' => 'Może mieć osobistą galerię',
	'apply' => 'WprowadĽ zmiany',
	'create_new_group' => 'Twórz nową grupę',
	'del_groups' => 'Usuń wskazaną(e) grupę(y)',
	'confirm_del' => 'Uwaga, przy usuwaniu grupy, użytkownicy należący do tej grupy zostaną przeniesieni do \'Registered\' grupy !\n\nCzy chcesz kontynuować ?',
	'title' => 'Zarządzaj grupami użytkowników',
	'approval_1' => 'Pub. pozw. ładowania (1)',
	'approval_2' => 'Pryw. pozw. ładowania (2)',
	'note1' => '<b>(1)</b> Dodawanie do albumu publicznego wymaga pozwolenia administratora',
	'note2' => '<b>(2)</b> Dodawanie do albumu, ktróry należy do (innego) użytkownika wymaga pozwolenia administratora',
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
	'confirm_delete' => 'Czy jesteś pewny, że chcesz USUNĄĆ ten album ? \\nWszystkie obrazy i komentarze również zostaną usunięte.',
	'delete' => 'USUŃ',
	'modify' => 'WŁAŚCIWOŚCI',
	'edit_pics' => 'EDYTUJ OBRAZY',
);

$lang_list_categories = array(
	'home' => 'Strona główna',
	'stat1' => '<b>[pictures]</b> obrazów w <b>[albums]</b> albumach i <b>[cat]</b> kategoriach z <b>[comments]</b> komentarzami przęglądanymi <b>[views]</b> razy',
	'stat2' => '<b>[pictures]</b> obrazów w <b>[albums]</b> albumach oglądanych <b>[views]</b> razy',
	'xx_s_gallery' => '%s\'s Galeria',
	'stat3' => '<b>[pictures]</b> obrazów w <b>[albums]</b> albumach z <b>[comments]</b> komentarzami, oglądane <b>[views]</b> razy'
);

$lang_list_users = array(
	'user_list' => 'Lista użytkownika',
	'no_user_gal' => 'Brak galerii użytkownika',
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
	'enter_login_pswd' => 'WprowadĽ nazwę użytkownika i hasło aby się zalogować',
	'username' => 'Nazwa użytkownika',
	'password' => 'Hasło',
	'remember_me' => 'Zapamiętaj mnie',
	'welcome' => 'Witaj %s ...',
	'err_login' => '*** Błąd logowania. Spróbuj ponownie ***',
	'err_already_logged_in' => 'Jesteś aktualnie zalogowany !',
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
	'logout' => 'Wylogowywanie',
	'bye' => 'Pa pa %s ...',
	'err_not_loged_in' => 'Nie jesteś zalogowany !',
);

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
	'upd_alb_n' => 'Uaktualnij album %s',
	'general_settings' => 'Ustawienia generalne',
	'alb_title' => 'Tytuł albumu',
	'alb_cat' => 'Kategoria albumu',
	'alb_desc' => 'Opis albumu',
	'alb_thumb' => 'Miniatura albumu',
	'alb_perm' => 'Pozwolenia dla tego albumu',
	'can_view' => 'Album może być oglądany przez',
	'can_upload' => 'Zwiedzający nie mogą dodawać obrazów',
	'can_post_comments' => 'Zwiedzający mogą wysyłać komentarze',
	'can_rate' => 'Zwiedzający mogą oceniać obrazy',
	'user_gal' => 'Galeria użytkownika',
	'no_cat' => '* Bez kategorii *',
	'alb_empty' => 'Album jest pusty',
	'last_uploaded' => 'Ostatnio dodane',
	'public_alb' => 'Wszyscy (album publiczny)',
	'me_only' => 'Tylko ja',
	'owner_only' => 'Tylko właściciel albumu (%s)',
	'groupp_only' => 'Członkowie grupy \'%s\' ',
	'err_no_alb_to_modify' => 'W bazie danych brak albumu, który możesz zmodyfikować.',
	'update' => 'Auktualnij album'
);

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
	'already_rated' => 'Przykro mi ale już oceniłeś ten obraz',
	'rate_ok' => 'Twój głos został zaakceptowany',
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
	'page_title' => 'Rejestracja użytkownika',
	'term_cond' => 'Zwroty i warunki',
	'i_agree' => 'Zgadzam się',
	'submit' => 'Wyślij rejestrację',
	'err_user_exists' => 'Nazwa użytkownika, którą wprowadziłeś już istnieje. Proszę, wybierz inną',
	'err_password_mismatch' => 'Oba hasła nie pokrywają się ze sobą, proszę wprowadĽ je ponownie',
	'err_uname_short' => 'Nazwa użytkownika musi mieć conajmniej 2 znaki',
	'err_password_short' => 'Hasło musi mieć conajmniej 2 znaki',
	'err_uname_pass_diff' => 'Nazwa użytkownika i hasło muszą być różne',
	'err_invalid_email' => 'Niepoprawny adres e-mail',
	'err_duplicate_email' => 'Inny użytkownik jest aktualnie zarejestrowany z adresem e-mail takim jaki podałeś',
	'enter_info' => 'WprowadĽ informacje rejestracyjne',
	'required_info' => 'Informacja wymagana',
	'optional_info' => 'Informacja opcjonalna',
	'username' => 'Nazwa użytkownika',
	'password' => 'Hasło',
	'password_again' => 'Powtórz hasło',
	'email' => 'E-mail',
	'location' => 'Lokalizacja',
	'interests' => 'Zainteresowania',
	'website' => 'Strona domowa',
	'occupation' => 'Zawód',
	'error' => 'BŁĄD',
	'confirm_email_subject' => '%s - Potwierdzenie rejestracji',
	'information' => 'Informacja',
	'failed_sending_email' => 'E-mail potwierdzający rejestrację nie może zostać wysłany !',
	'thank_you' => 'Dziękuję za zarejestrowanie.<br /><br />E-mail z informacją jak aktywować Twoje konto został wysłany pod adres, który podałeś.',
	'acct_created' => 'Twoje konto zostało utworzone i teraz możesz zalogować się podając Twoją nazwę użytkownika i hasło',
	'acct_active' => 'Twoje konto jest teraz aktywne i możesz zalogować się podając Twoją nazwę użytkownika i hasło',
	'acct_already_act' => 'Twoje konto jest już aktywne !',
	'acct_act_failed' => 'To konto nie może zostać aktywowane !',
	'err_unk_user' => 'Wskazany użytkownik nie istnieje !',
	'x_s_profile' => 'Profil użytkownika %s',
	'group' => 'Grupa',
	'reg_date' => 'Przyłączył się',
	'disk_usage' => 'Użycie dysku',
	'change_pass' => 'Zmień hasło',
	'current_pass' => 'Aktualne hasło',
	'new_pass' => 'Nowe hasło',
	'new_pass_again' => 'Nowe hasło ponownie',
	'err_curr_pass' => 'Aktualne hasło jest nieprawidłowe',
	'apply_modif' => 'WprowadĽ zmiany',
	'change_pass' => 'Zmień moje hasło',
	'update_success' => 'Twój profil został uaktualniony',
	'pass_chg_success' => 'Twoje hasło zostało zmienione',
	'pass_chg_error' => 'Twoje hasło nie zostało zmienione',
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
	'title' => 'Przeglądaj komentarze',
	'no_comment' => 'Brak komentarzy do przeglądania',
	'n_comm_del' => '%s komentarz(y) usunięto',
	'n_comm_disp' => 'Liczba komentarzy do wyświetlenia',
	'see_prev' => 'Zobacz poprzedni',
	'see_next' => 'Zobacz następny',
	'del_comm' => 'Usuń zaznaczone komentarze',
);


// ------------------------------------------------------------------------- //
// File search.php - OK
// ------------------------------------------------------------------------- //

if (defined('SEARCH_PHP')) $lang_search_php = array(
	0 => 'Przeszukuj kolekcję orazów',
);

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
	'page_title' => 'Szukaj wśród nowych obrazów',
	'select_dir' => 'Wybierz katalog',
	'select_dir_msg' => 'Ta funkcja pozwala Ci dodać grupę obrazów, którą skopiowałeś na serwer poprzez FTP.<br /><br />Wybierz katalog do którego skopiowałeś swoje obrazy',
	'no_pic_to_add' => 'Brak obrazu do dodania',
	'need_one_album' => 'Aby użyć tej funkcji potrzebujesz conajmniej jeden album',
	'warning' => 'Ostrzeżenie',
	'change_perm' => 'skrypt nie może zapisywać do tego katalogu, musisz zmienić jego tryb na 755 lub 777 przed próbą dodawania obrazów !',
	'target_album' => '<b>Umieść obrazy &quot;</b>%s<b>&quot; w </b>%s',
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
	'be_patient' => 'Proszę bądĽ cierpliwy, skrypt potrzebuje czasu na dodatnie obrazów',
	'notes' =>  '<ul>'.
				'<li><b>OK</b> : oznacza, że obraz został pomyślnie dodany'.
				'<li><b>DP</b> : oznacza, że obraz to duplikat i jest już w bazie danych'.
				'<li><b>PB</b> : oznacza, że obraz nie może zostać dodany, sprawdĽ swoją konfigurację oraz prawa dostępu do katalogu gdzie umieszczone są obrazy'.
				'<li>Jeżeli nie widać \'znaków\' OK, DP, PB kliknij na uszkodzonym obrazie aby zobaczyć wiadomość o błędzie utworzoną przez PHP'.
				'<li>Jeżeli Twoja przeglądarka wyczerpała limit czasu, naciśnij przycisk odśwież'.
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
	'pic_title' => 'Tytuł obrazu',
	'description' => 'Opis obrazu',
	'keywords' => 'Słowa kluczowe (oddzielone spacjami)',
	'err_no_alb_uploadables' => 'Przykro mi ale nie ma albumu, do którego byłbyś uprawniony dodawać obrazy',
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
	'title' => 'Zarządzaj użytkownikami',
	'name_a' => 'Nazwa rosnąco',
	'name_d' => 'Nazwa malejąco',
	'group_a' => 'Grupa rosnąco',
	'group_d' => 'Grupa malejąco',
	'reg_a' => 'Data rejestracji rosnąco',
	'reg_d' => 'Data rejestracji malejąco',
	'pic_a' => 'Liczba obrazów rosnąco',
	'pic_d' => 'Liczba obrazów malejąco',
	'disku_a' => 'Użycie dysku rosnąco',
	'disku_d' => 'Użycie dysku malejąco',
	'sort_by' => 'Sortuj użytkowników według',
	'err_no_users' => 'Tabela użytkowników jest pusta !',
	'err_edit_self' => 'Nie możesz edytować swojego własnego progilu, użyj odnośnika \'Mój profil\' w tym celu',
	'edit' => 'EDYTUJ',
	'delete' => 'USUŃ',
	'name' => 'Nazwa użytkownika',
	'group' => 'Grupa',
	'inactive' => 'Nieaktywny',
	'operations' => 'Operacje',
	'pictures' => 'Obrazy',
	'disk_space' => 'Używana przestrzeń / Quota',
	'registered_on' => 'Zarejestrowany',
	'u_user_on_p_pages' => '%d użytkowników na %d stronie(ach)',
	'confirm_del' => 'Czy jesteś pewny, że chcesz USUNĄĆ tego użytkownika ? \\nWszystkie jego obrazy i albumy również zostaną usunięte.',
	'mail' => 'POCZTA',
	'err_unknown_user' => 'Wskazany użytkownik nie istnieje !',
	'modify_user' => 'Modyfikuj użytkownika',
	'notes' => 'Notatki',
	'note_list' => '<li>Jeśli nie chcesz zmienić aktualnego hasła, pozostaw pole "hasło" puste',
	'password' => 'Hasło',
	'user_active' => 'Użytkownik jest aktywny',
	'user_group' => 'Grupa użytkownika',
	'user_email' => 'E-mail użytkownika',
	'user_web_site' => 'Strona www użytkownika',
	'create_new_user' => 'Twórz nowego użytkownika',
	'user_location' => 'Lokalizacja użytkownika',
	'user_interests' => 'Zainteresowania użytkownika',
	'user_occupation' => 'Zawód użytkownika',
);
?>