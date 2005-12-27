<?php

/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2005 Coppermine Dev Team
  v1.1 originally written by Gregory DEMAR


  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation; either version 2 of the License, or
  (at your option) any later version.
  ********************************************
  Coppermine version: 1.4.1
  $Source$
  $Revision$
  $Author$
  $Date$
**********************************************/

if (!defined('IN_COPPERMINE')) { die('Not in Coppermine...');}

// info about translators and translated language
$lang_translation_info = array(
  'lang_name_english' => 'Polish', //cpg1.4
  'lang_name_native' => 'Polski', //cpg1.4
  'lang_country_code' => 'pl', //cpg1.4
  'trans_name'=> 'Jacek Domoń (1.3.x), Jolo (1.4.2)',
  'trans_email' => '',
  'trans_website' => 'www.plusz.net, fotojoler.net',
  'trans_date' => '2005-12-27',
);

$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('bajtów', 'KB', 'MB');

// Day of weeks and months
$lang_day_of_week = array('Nie', 'Pon', 'Wto', 'Śro', 'Czw', 'Pią', 'Sob');
$lang_month = array('Sty', 'Lut', 'Mar', 'Kwi', 'Maj', 'Cze', 'Lip', 'Sie', 'Wrz', 'Paź', 'Lis', 'Gru');

// Some common strings
$lang_yes = 'Tak';
$lang_no  = 'Nie';
$lang_back = 'WSTECZ';
$lang_continue = 'KONTYNUUJ';
$lang_info = 'Informacja';
$lang_error = 'Błąd';
$lang_check_uncheck_all = 'zaznacz/odznacz wszytskie'; //cpg1.4

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$album_date_fmt =    '%B %d, %Y';
$lastcom_date_fmt =  '%m/%d/%y at %H:%M';
$lastup_date_fmt = '%B %d, %Y';
$register_date_fmt = '%B %d, %Y';
$lasthit_date_fmt = '%B %d, %Y at %I:%M %p';
$comment_date_fmt =  '%B %d, %Y at %I:%M %p';
$log_date_fmt = '%B %d, %Y at %I:%M %p'; //cpg1.4
// For the word censor
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*');

$lang_meta_album_names = array(
  'random' => 'Losowo wybrane pliki', 
  'lastup' => 'Ostatnie aktualizacje',
  'lastalb'=> 'Ostatnio aktualizacje albumów', 
  'lastcom' => 'Ostatnio dodane komentarze',
  'topn' => 'Najpopularniejsze',
  'toprated' => 'Najwyżej oceniane',
  'lasthits' => 'Ostatnio oglądane',
  'search' => 'Wyniki wyszukiwania', 
  'favpics'=> 'Ulubione pliki',  //cpg1.4
);

$lang_errors = array(
  'access_denied' => 'Nie masz uprawnień aby oglądać tę stronę.',
  'perm_denied' => 'Nie masz uprawnień aby wykonać tę operację.',
  'param_missing' => 'Skrypt został wywołany bez wymaganego parametru.',
  'non_exist_ap' => 'Wybrany plik lub album nie istnieje!',
  'quota_exceeded' => 'Przekroczono limit miejsca. <br /><br />Twój przydział: [quota]K, Twoje pliki używają obecnie: [space]K. Dodanie wybranego pliku spowoduje przekroczenie limitu.', 
  'gd_file_type_err' => 'Jeżli w użyciu jest biblioteka GD, dozwolone formaty zdjęć to wyłącznie JPEG i PNG.',
  'invalid_image' => 'Zdjęcie które przesłano nie może być obsłużone przez bibliotekę GD.',
  'resize_failed' => 'Nie można stworzyć miniatury lub zdjęcia pośredniego.',  
  'no_img_to_display' => 'Brak pliku do wyświetlenia',
  'non_exist_cat' => 'Wybrana kategoria nie istnieje',
  'orphan_cat' => 'Kategoria nie ma gałęzi nadrzędnej, uruchom menedżera kategorii aby rozwiązać ten problem.', 
  'directory_ro' => 'Katalog \'%s\' jest zabezpieczony przed zapisem. Pliki nie mogą być skasowane.', 
  'non_exist_comment' => 'Wybrany komentarz nie istnieje.',
  'pic_in_invalid_album' => 'Plik znajduje się w nieistniejącym albumie (%s)!?', 
  'banned' => 'Obecnie Twój dostęp do strony został zablokowany.',
  'not_with_udb' => 'Wybrana funkcja nie jest dostępna, ponieważ jest zintegrowana z oprogramowniem forum. Czynność którą chcesz wykonać nie jest wspierana w tej konfiguracji, bądź powinna być obsłużona przez oprogramowanie forum.',
  'offline_title' => 'Offline', 
  'offline_text' => 'Galeria jest obecnie wyłączona - spróbuj ponownie później', 
  'ecards_empty' => 'Nie ma obecnie żadnych zapisów dotyczących e-kartek. Sprawdź, czy włączyłeś logowanie e-kartek w konfiguracji coppermine!', 
  'action_failed' => 'Działanie nieudane. Coppermine nie może przetworzyć Twojego żądania.', 
  'no_zip' => 'Biblioteki do obsługi archiwów ZIP nie są obecnie dostępne. Skontaktuj się z administratorem Coppermine.', 
  'zip_type' => 'Nie masz uprawnień by przesyłać archiwa ZIP.', 
  'database_query' => 'Wystąpił błąd podczas operacji SQL', //cpg1.4
  'non_exist_comment' => 'Wybrany komentarz nie istnieje', //cpg1.4
);

$lang_bbcode_help_title = 'pomoc bbcode'; //cpg1.4
$lang_bbcode_help = 'Możesz używać następujących tagów bbcode: <li>[b]Bold[/b] =&gt; <b>Bold</b></li><li>[i]Italic[/i] =&gt; <i>Italic</i></li><li>[url=http://yoursite.com/]Url Text[/url] =&gt; <a href="http://yoursite.com">Url Text</a></li><li>[email]user@domain.com[/email] =&gt; <a href="mailto:user@domain.com">user@domain.com</a></li><li>[color=red]some text[/color] =&gt; <span style="color:red">some text</span></li><li>[img]http://coppermine.sf.net/demo/images/red.gif[/img] => <img src="../images/red.gif" border="0" alt="" /></li>'; //cpg1.4

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
  'alb_list_title' => 'Przejdź do listy albumów',
  'alb_list_lnk' => 'Albumy',
  'my_gal_title' => 'Do prywatnej galerii',
  'my_gal_lnk' => 'Moja galeria',
  'my_prof_lnk' => 'Mój profil',
  'adm_mode_title' => 'Przełącz w tryb administratora',
  'adm_mode_lnk' => 'Tryb administratora',
  'usr_mode_title' => 'Przełącz w tryb użytkownika',
  'usr_mode_lnk' => 'Tryb użytkownika',
  'upload_pic_title' => 'Przesłanie pliku do albumu', 
  'upload_pic_lnk' => 'Przesłanie pliku', 
  'register_title' => 'Utwórz konto',
  'register_lnk' => 'Zarejestruj się',
  'login_lnk' => 'Zaloguj',
  'logout_lnk' => 'Wyloguj',
  'lastup_lnk' => 'Ostatnio dodane',
  'lastcom_lnk' => 'Ostatnie komentarze',
  'topn_lnk' => 'Najpopularniejsze',
  'toprated_lnk' => 'Top Lista',
  'search_lnk' => 'Szukaj',
  'fav_lnk' => 'Ulubione',
  'memberlist_title' => 'Pokaż użytkowników', 
  'memberlist_lnk' => 'Użytkownicy', 
  'faq_title' => 'FAQ galerii &quot;Coppermine&quot;', 
  'faq_lnk' => 'FAQ', 
  'my_prof_title' => 'Przejdź do prywatnego profilu', //cpg1.4
  'login_title' => 'Zaloguj mnie', //cpg1.4
  'logout_title' => 'Wyloguj mnie', //cpg1.4
  'lastup_title' => 'Pokaż najnowsze zdjęcia', //cpg1.4
  'lastcom_title' => 'Pokaż najnowsze komentarze', //cpg1.4
  'topn_title' => 'Pokaż najczęściej oglądane', //cpg1.4
  'toprated_title' => 'Pokaż Top Listę', //cpg1.4
  'search_title' => 'Szukaj w galerii', //cpg1.4
  'fav_title' => 'Pokaż ulubione', //cpg1.4
);

$lang_gallery_admin_menu = array(
  'upl_app_lnk' => 'Akceptacja plików',
  'config_lnk' => 'Konfiguracja',
  'albums_lnk' => 'Albumy',
  'categories_lnk' => 'Kategorie',
  'users_lnk' => 'Użytkownicy',
  'groups_lnk' => 'Grupy',
  'comments_lnk' => 'Przejrzyj komentarze', 
  'searchnew_lnk' => 'Wsadowe dodawanie plików',  
  'util_lnk' => 'Narzędzia administracyjne',  
  'ban_lnk' => 'Banowanie',
  'db_ecard_lnk' => 'Wyświetl e-kartki',  
  'upl_app_title' => 'Akceptuj nowe pliki', //cpg1.4
  'admin_title' => 'Idź do konfiguracji', //cpg1.4
  'admin_lnk' => 'Konfiguracja', //cpg1.4
  'albums_title' => 'Konfiguruj albumy', //cpg1.4
  'categories_title' => 'Konfiguruj kategorie', //cpg1.4
  'users_title' => 'Konfiguruj użytkowników', //cpg1.4
  'groups_title' => 'Konfiguruj grupy', //cpg1.4
  'comments_title' => 'Przeglądaj komentarze', //cpg1.4
  'searchnew_title' => 'Dodaj wsadowo pliki', //cpg1.4
  'util_title' => 'Idź do narzędzi administracyjnych', //cpg1.4
  'key_title' => 'Obejrzyj słowa kluczowe', //cpg1.4
  'key_lnk' => 'Słowa kluczowe', //cpg1.4
  'ban_title' => 'Sprawdź zabanowanych użytkowników', //cpg1.4
  'db_ecard_title' => 'Przejrzyj e-kartki', //cpg1.4
  'pictures_title' => 'Sortuj zdjęcia', //cpg1.4
  'pictures_lnk' => 'Sortuj zdjęcia', //cpg1.4
  'documentation_lnk' => 'Dokumentacja', //cpg1.4
  'documentation_title' => 'Instrukcja obsługi Coppermine', //cpg1.4
);

$lang_user_admin_menu = array(
  'albmgr_lnk' => 'Tworzenie / porządkowanie albumów',
  'modifyalb_lnk' => 'Modyfikacja moich albumów',
  'my_prof_lnk' => 'Mój profil',
  'albmgr_title' => 'Utwórz / porządkuj albumy', //cpg1.4
  'modifyalb_title' => 'Modyfiuj albumy',  //cpg1.4
  'my_prof_title' => 'Sprawdź swój profil', //cpg1.4
);

$lang_cat_list = array(
  'category' => 'Kategoria',
  'albums' => 'Albumy',
  'pictures' => 'Pliki', 
);

$lang_album_list = array(
  'album_on_page' => 'albumów: %d, stron: %d'
);

$lang_thumb_view = array(
  'date' => 'DATA',
  //Sort by filename and title
  'name' => 'NAZWA PLIKU', 
  'title' => 'TYTUŁ', 
  'sort_da' => 'Sortowanie wg daty rosnąco',
  'sort_dd' => 'Sortowanie wg daty malejąco',
  'sort_na' => 'Sortowanie wg nazwy rosnąco',
  'sort_nd' => 'Sortowanie wg nazwy malejąco',
  'sort_ta' => 'Sortowanie wg tytułu rosnąco', 
  'sort_td' => 'Sortowanie wg tytułu malejąco', 
  'pic_on_page' => 'plików: %d stron: %d',
  'user_on_page' => 'użytkowników: %d, stron: %d',
  'position' => 'POZYCJA', //cpg1.4
  'sort_pa' => 'Sortuj wg pozycji rosnąco', //cpg1.4
  'sort_pd' => 'Sortuj wg pozycji malejąco', //cpg1.4
  'download_zip' => 'Pobierz jako plik ZIP',
  'pic_on_page' => '%d pików, %d stron',
  'user_on_page' => '%d użytkowników, %d stron',
  'enter_alb_pass' => 'Wprowadź hasło albumu', //cpg1.4
  'invalid_pass' => 'Hasło nieprawidłowe', //cpg1.4
  'pass' => 'Hasło', //cpg1.4
  'submit' => 'Wyślij', //cpg1.4
);

$lang_img_nav_bar = array(
  'thumb_title' => 'Wróć do widoku miniatur',
  'pic_info_title' => 'Wyświetl/ukryj info o pliku',
  'slideshow_title' => 'Pokaz slajdów',
  'ecard_title' => 'Wyślij jako e-kartkę',
  'ecard_disabled' => 'e-kartki są wyłączone',
  'ecard_disabled_msg' => 'Nie masz uprawnień do wysyłania e-kartek', //js-alert 
  'prev_title' => 'Poprzedni plik', 
  'next_title' => 'Następny plik', 
  'pic_pos' => 'PLIK %s/%s', 
  'report_title' => 'Zgłoś plik do administratora', //cpg1.4
  'go_album_end' => 'Skocz na koniec', //cpg1.4
  'go_album_start' => 'Wróć na początek', //cpg1.4
  'go_back_x_items' => 'wstecz o %s pozycji', //cpg1.4
  'go_forward_x_items' => 'naprzód o %s pozycji', //cpg1.4
);

$lang_rate_pic = array(
  'rate_this_pic' => 'Oceń ten plik ', 
  'no_votes' => '(Brak głosów)',
  'rating' => '(obecna ocena : %s / 5 głosów: %s)',
  'rubbish' => 'Do niczego',
  'poor' => 'Słabe',
  'fair' => 'Niezłe',
  'good' => 'Dobre',
  'excellent' => 'B. dobre',
  'great' => 'Doskonałe',
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
  'filename' => 'Nazwa pliku: ',
  'filesize' => 'Rozmiar pliku: ',
  'dimensions' => 'Wymiary: ',
  'date_added' => 'Data dodania: ',  
);

$lang_get_pic_data = array(
  'n_comments' => 'komentarzy: %s ',
  'n_views' => 'odsłon: %s ',
  'n_votes' => '(głosów: %s)'
);

$lang_cpg_debug_output = array(
  'debug_info' => 'Informacje debuggera', 
  'select_all' => 'Wybierz wszystko', 
  'copy_and_paste_instructions' => 'Aby otrzymać pomoc na forum wsparcia technicznego coppermine, skopiuj i wklej te informacje debuggera do swojego postu. Pamiętaj aby zastąpić wszelkie hasła ciągiem ***, przed zamieszczeniem postu.<br /> Informacja ta nie oznacza, że w Twojej galerii wystąpił błąd.', 
  'phpinfo' => 'wyświetl phpinfo', 
  'notices' => 'Notki', //cpg1.4
);

$lang_language_selection = array(
  'reset_language' => 'Domyślny język', 
  'choose_language' => 'Wybierz swój język', 
);

$lang_theme_selection = array(
  'reset_theme' => 'Domyślny styl', 
  'choose_theme' => 'Wybierz styl', 
);

$lang_version_alert = array(
  'version_alert' => 'Wersja bez wsparcia!', //cpg1.4
  'no_stable_version' => 'Zainstalowałeś Coppermine %s (%s), który jest przeznaczony dla doświadczonych użytkowników - wersja ta nie ma wsparcia ani też nie posiada żadnej gwarancji. Używaj jej na własne ryzyko, lub zainstaluj niższą, ostatnią stabilną wersję, jeśli potrzebujesz wsparcia!', //cpg1.4
  'gallery_offline' => 'Galeria jest obecnie offline i jest widoczna dla ciebie, jako administratora. Nie zapomnij ustawić jej z powrotem online po zakończeniu pracy.', //cpg1.4
);

$lang_create_tabs = array(
  'previous' => 'poprzedni', //cpg1.4
  'next' => 'następny', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File include/init.inc.php
// ------------------------------------------------------------------------- //

// void

// ------------------------------------------------------------------------- //
// File keyword.inc.php                                                      //
// ------------------------------------------------------------------------- //

// void

// ------------------------------------------------------------------------- //
// File include/picmgmt.inc.php
// ------------------------------------------------------------------------- //

// void

// ------------------------------------------------------------------------- //
// File include/plugin_api.inc.php
// ------------------------------------------------------------------------- //
$lang_plugin_api = array(
  'error_wakeup' => "Nie udało się obudzić pluginu '%s'", //cpg1.4
  'error_install' => "Nie udało się zainstalować pluginu '%s'", //cpg1.4
  'error_uninstall' => "Nie udało się odinstalować pluginu '%s'", //cpg1.4
  'error_sleep' => "Nie udało się uśpić pluginu '%s'<br />", //cpg1.4
);

// ------------------------------------------------------------------------- //
// File include/smilies.inc.php
// ------------------------------------------------------------------------- //

if (defined('SMILIES_PHP')) $lang_smilies_inc_php = array(
  'Exclamation' => 'Wykrzyknik',
  'Question' => 'Pytanie',
  'Very Happy' => 'Bardzo zadowolony',
  'Smile' => 'Uśmiechnięty',
  'Sad' => 'Smutny',
  'Surprised' => 'Zaskoczony',
  'Shocked' => 'Zszokowany',
  'Confused' => 'Zniesmaczony',
  'Cool' => 'Luzak',
  'Laughing' => 'Śmieje się',
  'Mad' => 'Wściekły',
  'Razz' => 'Jęzorek',
  'Embarassed' => 'Zawstydzony / gafa',
  'Crying or Very sad' => 'Zrozpaczony',
  'Evil or Very Mad' => 'Wściekły do kwadratu',
  'Twisted Evil' => 'Twisted Evil',
  'Rolling Eyes' => 'Przewraca oczami',
  'Wink' => 'Puszcza oczko',
  'Idea' => 'Pomysł',
  'Arrow' => 'Strzałka',
  'Neutral' => 'Neutralny',
  'Mr. Green' => 'Mr. Green',
);

// ------------------------------------------------------------------------- //
// File addpic.php
// ------------------------------------------------------------------------- //

// void

// ------------------------------------------------------------------------- //
// File mode.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('MODE_PHP')) $lang_mode_php = array(
  0 => 'Zakończono pracę administratora...',
  1 => 'Przełączanie do trybu administratora...',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
  'alb_need_name' => 'Albumy muszą mieć nazwę !', //js-alert
  'confirm_modifs' => 'Czy na pewno chcesz dokonać tych modyfikacji ?', //js-alert
  'no_change' => 'Nie dokonałeś/aś żadnej zmiany !', //js-alert
  'new_album' => 'Nowy album',
  'confirm_delete1' => 'Czy na pewno chcesz skasować ten album ?', //js-alert
  'confirm_delete2' => '\nWszystkie pliki i komentarze które zawiera zostaną stracone !', //js-alert
  'select_first' => 'Wybierz najpierw album', //js-alert
  'alb_mrg' => 'Menedżer albumów',
  'my_gallery' => '* Moja galeria *',
  'no_category' => '* Bez kategorii *',
  'delete' => 'Kasuj',
  'new' => 'Nowy',
  'apply_modifs' => 'Wykonaj modyfikacje',
  'select_category' => 'Wybierz kategorię',
);

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) $lang_banning_php = array(
  'title' => 'Zabanuj użytkowników', //cpg1.4
  'user_name' => 'Nazwa użytkownika', //cpg1.4
  'ip_address' => 'Adres IP', //cpg1.4
  'expiry' => 'Wygasa (zostaw puste, żeby nie wygasło)', //cpg1.4
  'edit_ban' => 'Zachowaj zmiany', //cpg1.4
  'delete_ban' => 'Usuń', //cpg1.4
  'add_new' => 'Dodaj nowy ban', //cpg1.4
  'add_ban' => 'Dodaj', //cpg1.4
  'error_user' => 'Nie można znależć użytkownika', //cpg1.4
  'error_specify' => 'Musisz podać nazwę użytkownika lub adres IP', //cpg1.4
  'error_ban_id' => 'Niepoprawny ID banu!', //cpg1.4
  'error_admin_ban' => 'Nie możesz zabanować siebie!', //cpg1.4
  'error_server_ban' => 'Chcesz zabanować własny serwer? Niu, niu, nie da się...', //cpg1.4
  'error_ip_forbidden' => 'Nie możesz zabanować tego IP = jest nieroutowalne (prywatne)! <br />Jeśli chcesz zezwolić na banowanie prywatnych IP, zmień odpowiednią opcję w <a href="admin.php">panelu amdinistracyjnym</a> (ma to sens, gdy galeria działa w sieci lokalnej).', //cpg1.4
  'lookup_ip' => 'Szukanie adresu IP', //cpg1.4
  'submit' => 'dalej!', //cpg1.4
  'select_date' => 'wybierz datę', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File bridgemgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('BRIDGEMGR_PHP')) $lang_bridgemgr_php = array(
  'title' => 'Kreator integracji',
  'warning' => 'Uwaga: używając kreatora powinieneś wiedzieć, że istotne dane są przesyłane przez formularze html.  Uruchamiaj go jedynie z własnego komputera (nie z publicznego, np. w kawiarence internetowej), a po zakończeniu upewnij się, że wyczyściłeś pamięć podręczną przeglądarki oraz pliki tymczasowe, ponieważ inni mogą mieć dostęp do twoich danych!',
  'back' => 'wstecz',
  'next' => 'dalej',
  'start_wizard' => 'Uruchom kreatora integracji',
  'finish' => 'Zakończ',
  'hide_unused_fields' => 'ukryj nieużywane pola formularza (zalecane)',
  'clear_unused_db_fields' => 'wyczyść nieprawidłowe wpisy w bazie danych (zalecane)',
  'custom_bridge_file' => 'nazwa pliku integracji (jeśli plik nazywa się <i>myfile.inc.php</i>, wpisz <i>myfile</i> w to pole)',
  'no_action_needed' => 'W tym kroku nie trzeba nic robić. Naciśnij \'dalej\' aby kontynuować.',
  'reset_to_default' => 'Skasuj do wartości domyślnych',
  'choose_bbs_app' => 'wybierz aplikację do połączenia z galerią',
  'support_url' => 'Szukaj wsparcia dla tej aplikacji',
  'settings_path' => 'ścieżka używana przez twoją aplikację BBS',
  'database_connection' => 'połączenie z bazą danych',
  'database_tables' => 'tabele bazy danych',
  'bbs_groups' => 'grupy BBS',
  'license_number' => 'Numer licencji',
  'license_number_explanation' => 'wpisz numer licencji (jeśli wymagany)',
  'db_database_name' => 'Nazwa bazy danych',
  'db_database_name_explanation' => 'Wpisz nazwę bazy danych używanej przez aplikację BBS',
  'db_hostname' => 'Host bazy danych',
  'db_hostname_explanation' => 'Nazwa hosta, pod którym dostępna jest baza MySQL, zazwyczaj &quot;localhost&quot;',
  'db_username' => 'Użytkownik bazy danych',
  'db_username_explanation' => 'Nazwa użytkownika MySQL do połączenia z BBS',
  'db_password' => 'Hasło do bazy danych',
  'db_password_explanation' => 'Hasło do podanego wcześniej użytkownika',
  'full_forum_url' => 'Adres URL forum',
  'full_forum_url_explanation' => 'Pełny adres URL twojej aplikacji BBS (łącznie z początkowym http://, np http://www.twojadres.com/forum)',
  'relative_path_of_forum_from_webroot' => 'Względna ścieżka forum',
  'relative_path_of_forum_from_webroot_explanation' => 'Względna ścieżka do twojej aplikacji BBS w odniesieniu do głównego katalogu (Przykład: jeśli twój BBS jest pod adresem http://www.yourdomain.tld/forum/, wprowadź &quot;/forum/&quot;)',
  'relative_path_to_config_file' => 'Względna ścieżka do pliku konfiguracyjnego BBS',
  'relative_path_to_config_file_explanation' => 'Względna ścieżka do twojego BBS widziana z folderu galerii (na przykład &quot;../forum/&quot; jeśli twój BBS jest pod adresem http://www.yourdomain.tld/forum/ a galeria pod http://www.yourdomain.tld/gallery/)',
  'cookie_prefix' => 'Prefiks ciasteczek',
  'cookie_prefix_explanation' => 'nazwa ciasteczek BBS',
  'table_prefix' => 'Prefiks tabeli',
  'table_prefix_explanation' => 'Musi odpowiadać prefiksowi, który wybrałeś w trakcie instalacji BBS.',
  'user_table' => 'Tabela użytkowników',
  'user_table_explanation' => '(zazwyczaj domyślna wartość jest prawidłowa, o ile instalacja BBS była standardowa)',
  'session_table' => 'Tabela sesji',
  'session_table_explanation' => '(zazwyczaj domyślna wartość jest prawidłowa, o ile instalacja BBS była standardowa)',
  'group_table' => 'Tabela grup',
  'group_table_explanation' => '(zazwyczaj domyślna wartość jest prawidłowa, o ile instalacja BBS była standardowa)',
  'group_relation_table' => 'Tabela relacji grup',
  'group_relation_table_explanation' => '(zazwyczaj domyślna wartość jest prawidłowa, o ile instalacja BBS była standardowa)',
  'group_mapping_table' => 'Tabela mapowania grup',
  'group_mapping_table_explanation' => '(zazwyczaj domyślna wartość jest prawidłowa, o ile instalacja BBS była standardowa)',
  'use_standard_groups' => 'Użyj standardowych grup BBS',
  'use_standard_groups_explanation' => 'Użyj standardowych (wbudowanych) grup użytkowników (zalecane). Dzięki temu wszystkie ustawienia własnych grup na tej stronie będą nieistotne. Odznacz tą opcję, tylko jeśli NAPRAWDĘ wiesz, co robisz!',
  'validating_group' => 'Grupa walidacji',
  'validating_group_explanation' => 'ID grupy w twoim BBS zawierającej konta użytkowników, które wymagają walidacji (zazwyczaj domyślna wartość jest prawidłowa, o ile instalacja BBS była standardowa)',
  'guest_group' => 'Grupa gości',
  'guest_group_explanation' => 'ID grupy w twoim BBS zawierającej konta gości (użytkowników anonimowych) (zazwyczaj domyślna wartość jest prawidłowa, zmień ją tylko, jeśli wiesz, co robisz)',
  'member_group' => 'Grupa członków',
  'member_group_explanation' => 'ID grupy w twoim BBS zawierającej konta &quot;normalnych&quot; użytkowników (zazwyczaj domyślna wartość jest prawidłowa, zmień ją tylko, jeśli wiesz, co robisz)',
  'admin_group' => 'Grupa administratorów',
  'admin_group_explanation' => 'ID grupy w twoim BBS zawierającej konta administratorów (zazwyczaj domyślna wartość jest prawidłowa, zmień ją tylko, jeśli wiesz, co robisz)',
  'banned_group' => 'Grupa zabanowanych',
  'banned_group_explanation' => 'ID grupy w twoim BBS zawierającej użytkowników zabanowanych (zazwyczaj domyślna wartość jest prawidłowa, zmień ją tylko, jeśli wiesz, co robisz)',
  'global_moderators_group' => 'Grupa moderatorów globalnych',
  'global_moderators_group_explanation' => 'ID grupy w twoim BBS zawierającej konta globalnych moderatorów(zazwyczaj domyślna wartość jest prawidłowa, zmień ją tylko, jeśli wiesz, co robisz)',
  'special_settings' => 'ustawienia specyficzne BBS',
  'logout_flag' => 'versja phpBB',
  'logout_flag_explanation' => 'Twoja wersja BBS (specyfikuje sposób wylogowywania się)',
  'use_post_based_groups' => 'Używać grup opartych na postach?',
  'logout_flag_yes' => '2.0.5 lub wyższa',
  'logout_flag_no' => '2.0.4 lub niższa',
  'use_post_based_groups_explanation' => 'Czy brać pod uwagę grupy z BBS zdefiniowane na podstawie ilości postów (umożliwia stopniowe zarządzanie uprawnieniami) czy tylko grupy domyślne (łatwiejsza administracja, zalecane). Wartość tą możesz zmienić również później.',
  'use_post_based_groups_yes' => 'tak',
  'use_post_based_groups_no' => 'nie',
  'error_title' => 'Musisz poprawić błędy, zanim będziesz mógł kontynuować. Wróć do poprzedniego ekranu.',
  'error_specify_bbs' => 'Musisz wybrać, z jaką aplikacją chcesz połączyć swoją galerię.',
  'error_no_blank_name' => 'Nie możesz zostawić pustego pola z nazwą pliku połączenia.',
  'error_no_special_chars' => 'Nazwa pliku połączenia nie może zawierać znaków specjalnych poza podkreśleniem (_) oraz myślnikiem (-)!',
  'error_bridge_file_not_exist' => 'Plik połączenia %s nie istnieje na serwerze. Sprawdź, czy jest załadowany.',
  'finalize' => 'włącz/wyłącz integrację BBS',
  'finalize_explanation' => 'Wybrane przez ciebie ustawienia zostały zapisane w baze danych, ale integracja BBS nie została włączona. Możesz włączyć/wyłączyć integrację później w dowolnym momencie. Upewnij się, że pamiętasz nazwę użytkownika i hasło administratora z galerii, możesz ich później potrzebować do wprowadzenia zmian. Jeśli wystąpią jakieś błędy, wyłącz integrację BBS w pliku %s używając zwykłego konta administracyjnego (zazwyczaj tego, którego używałeś w czasie instalacji galerii).',
  'your_bridge_settings' => 'Ustawienia integracji',
  'title_enable' => 'Włącz integrację w %s',
  'bridge_enable_yes' => 'włącz',
  'bridge_enable_no' => 'wyłącz',
  'error_must_not_be_empty' => 'nie może być puste',
  'error_either_be' => 'musi być %s lub %s',
  'error_folder_not_exist' => '%s nie istnieje. Popraw wprowadzoną wartość %s',
  'error_cookie_not_readible' => 'Coppermine nie może odczytać ciasteczka %s. Sprawdź wprowadzoną wartość %s, lub wejdź do panelu amdinistracyjnego BBS i upewnij się, że ścieżka ciasteczka jest do odczytu dla galerii.',
  'error_mandatory_field_empty' => 'Nie możesz zostawić pola %s pustego - wprowadź prawidłową wartość.',
  'error_no_trailing_slash' => 'W polu %s nie może być kończącego ukośnika.',
  'error_trailing_slash' => 'W polu %s musi być kończący ukośnik.',
  'error_db_connect' => 'Nie można się zalogować do basy danych MySQL z podanymi ustawieniami. Komunikat MySQL:',
  'error_db_name' => 'Chociaż udało się ustanowić połączenie, nie można było znaleźć bazy %s. Upewnij się, że wprowadziłeś prawidłowo wartość %s. Komunikat MySQL:',
  'error_prefix_and_table' => '%s i ',
  'error_db_table' => 'Nie można znaleźć tabeli %s. Upewnij się, że podana wartość %s jest prawidłowa.',
  'recovery_title' => 'Zarządca integracji: odzyskiwanie awaryjne',
  'recovery_explanation' => 'Jeśli chcesz administrować integracją galerii z BBS, musisz najpierw zalogować się jako administrator. Jeśli nie możesz się zalogować, ponieważ integracja nie przebiegła zgodnie z oczekiwaniami, możesz zablokować integrację BBS używając tej strony. Podanie nazwy użytkownika oraz hasła nie spowoduje zalogowania, tylko wyłączy integrację BBS. Po szczegóły zajrzyj do dokumentacji.',
  'username' => 'Użytkownik',
  'password' => 'Hasło',
  'disable_submit' => 'wyślij',
  'recovery_success_title' => 'Autoryzacja pomyślna',
  'recovery_success_content' => 'Udało ci się zablokować integrację BBS. Galeria działa teraz w trybie standalone.',
  'recovery_success_advice_login' => 'Zaloguj się jako administrator, aby edytować ustawienia integracji, lub włączyć/wyłączyć integrację.',
  'goto_login' => 'Przejdź do strony logowania',
  'goto_bridgemgr' => 'Przejdź do zarządzania integracją',
  'recovery_failure_title' => 'Autoryzacja nieudana',
  'recovery_failure_content' => 'Wprowadziłeś złe dane. Musisz wprowadzić dane konta administracyjnego wersji standalone (zazwyczaj konta, które ustawiłeś w czasie instalacji galerii).',
  'try_again' => 'spróbuj znowu',
  'recovery_wait_title' => 'Nie upłynął czas oczekiwania',
  'recovery_wait_content' => 'Z powodów bezpieczeństwa skrypt nie umożliwia logowania w krótkich odstępach czasu, więc musisz odczekać chwilę, aż będziesz mógł się ponownie zalogować.',
  'wait' => 'czekaj',
  'create_redir_file' => 'Utwórz plik przekierowania (zalecane)',
  'create_redir_file_explanation' => 'Aby przekierować do galerii użytkoników, którzy zalogowali się do BBS, musisz utworzyć plik przekierowania w folderze BBS. Po zaznaczeniu tej opcji kreator integracji spróbuje utworzyć ten plik, lub wyświetli kod, który będziesz musiał ręcznie wkleić do tego pliku.',
  'browse' => 'przeglądaj',

);

// ------------------------------------------------------------------------- //
// File calendar.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('CALENDAR_PHP')) $lang_calendar_php = array(
  'title' => 'Kalendarz', //cpg1.4
  'close' => 'zamknij', //cpg1.4
  'clear_date' => 'wyczyść datę', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
  'miss_param' => 'Brak parametrów wymaganych dla operacji \'%s\' !',
  'unknown_cat' => 'Wybrana kategoria nie istnieje w bazie danych',
  'usergal_cat_ro' => 'Kategoria galerii użytkownika nie może być usunięta!',
  'manage_cat' => 'Zarządzaj kategoriami',
  'confirm_delete' => 'Na pewno chcesz USUNĄĆ wybraną kategorię', //js-alert
  'category' => 'Kategoria',
  'operations' => 'Operacje',
  'move_into' => 'Przejdź do',
  'update_create' => 'Zaktualizuj/utwórz kategorie',
  'parent_cat' => 'Kategoria nadrzędna',
  'cat_title' => 'Tytuł kategorii',
  'cat_thumb' => 'Miniaturka kategorii',
  'cat_desc' => 'Opis kategorii',
  'categories_alpha_sort' => 'Posortuj kategorie alfabetycznie (zamiast sortowania użytkownika)', //cpg1.4
  'save_cfg' => 'Zapisz konfigurację', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File admin.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('ADMIN_PHP')) $lang_admin_php = array(
  'title' => 'Konfiguracja galerii', //cpg1.4
  'manage_exif' => 'Zarządzaj danymi EXIF', //cpg1.4
  'manage_plugins' => 'Zarządzaj pluginami', //cpg1.4
  'manage_keyword' => 'Zarządzaj słowami kluczowymi', //cpg1.4
  'restore_cfg' => 'Przywróć ustawienia domyślne',
  'save_cfg' => 'Zapisz nową konfigurację',
  'notes' => 'Notki',
  'info' => 'Informacje',
  'upd_success' => 'Konfiguracja Coppermine została zaktualizowana',
  'restore_success' => 'Domyślna konfiguracja Coppermine została przywrócona',
  'name_a' => 'Nazwa rosnąco',
  'name_d' => 'Nazwa malejąco',
  'title_a' => 'Tytuł rosnąco',
  'title_d' => 'Tytuł malejąco',
  'date_a' => 'Data rosnąco',
  'date_d' => 'Data malejąco',
  'pos_a' => 'Pozycja rosnąco', //cpg1.4
  'pos_d' => 'Pozycja malejąco', //cpg1.4
  'th_any' => 'Max aspekt',
  'th_ht' => 'Wysokość',
  'th_wd' => 'Szerokość',
  'label' => 'etykieta',
  'item' => 'obiekt',
  'debug_everyone' => 'Każdy',
  'debug_admin' => 'Tylko administrator',
  'no_logs'=> 'Wyłączone', //cpg1.4
  'log_normal'=> 'Normalny', //cpg1.4
  'log_all' => 'Wszyscy', //cpg1.4
  'view_logs' => 'Obejrzyj logi', //cpg1.4
  'click_expand' => 'kliknij nazwę sekcji aby rozwinąć', //cpg1.4
  'expand_all' => 'Rozwiń wszystkie', //cpg1.4
  'notice1' => '(*) Tych ustawień nie można zmieniać, jeśli w bazie danych są już pliki.', //cpg1.4 - (relocated)
  'notice2' => '(**) Zmiana tych ustawień wpłynie jedynie na pliki dodane do galerii w przyszłości, więc zaleca się nie zmieniać tych ustawień jeśli w galerii są już jakieś pliki. Jednak możesz zastosować te zmiany do istniejących plików używając &quot;<a href="util.php">narzędzi administracyjnych</a> (zmień rozmiar plików)&quot; z menu amdinistratora.', //cpg1.4 - (relocated)
  'notice3' => '(***) Wszystkie pliki logów zapisywane są w języku angielskim.', //cpg1.4 - (relocated)
  'bbs_disabled' => 'Funkcja nieaktywna w czasie uzywania integracji bb', //cpg1.4
  'auto_resize_everyone' => 'Każdy', //cpg1.4
  'auto_resize_user' => 'Tylko użytkownicy', //cpg1.4
  'ascending' => 'rosnąco', //cpg1.4
  'descending' => 'malejąco', //cpg1.4
);

if (defined('ADMIN_PHP')) $lang_admin_data = array(
  'Ustawienia ogólne',
  array('Nazwa galerii', 'gallery_name', 0, 'f=index.htm&amp;as=admin_general_name&amp;ae=admin_general_name_end'), //cpg1.4
  array('Opis galerii', 'gallery_description', 0, 'f=index.htm&amp;as=admin_general_description&amp;ae=admin_general_description_end'), //cpg1.4
  array('Email administratora galerii', 'gallery_admin_email', 0, 'f=index.htm&amp;as=admin_general_email&amp;ae=admin_general_email_end'), //cpg1.4
  array('URL twojej galerii coppermine (np. \'index.php\' lub podobnie)', 'ecards_more_pic_target', 0, 'f=index.htm&amp;as=admin_general_coppermine-url&amp;ae=admin_general_coppermine-url_end'), //cpg1.4
  array('URL strony domowej', 'home_target', 0, 'f=index.htm&amp;as=admin_general_home-url&amp;ae=admin_general_home-url_end'), //cpg1.4
  array('Pozwalaj na pobieranie ulubonych jako plików ZIP', 'enable_zipdownload', 1, 'f=index.htm&amp;as=admin_general_zip-download&amp;ae=admin_general_zip-download_end'), //cpg1.4
  array('Różnica stref czasowych względem GMT (bieżący czas: ' . localised_date(-1, $comment_date_fmt) . ')','time_offset',0, 'f=index.htm&amp;as=admin_general_time-offset&amp;ae=admin_general_time-offset_end&amp;top=1'), //cpg1.4
  array('Zezwalaj na kodowanie haseł (zmiana nieodwracalna)','enable_encrypted_passwords',1, 'f=index.htm&amp;as=admin_general_encrypt_password_start&amp;ae=admin_general_encrypt_password_end&amp;top=1'), // cpg 1.4
  array('Zezwalaj na ikony pomocy (pomoc jedynie w języku angielskim)','enable_help',9, 'f=index.htm&amp;as=admin_general_help&amp;ae=admin_general_help_end'), //cpg1.4
  array('Zezwalaj na klikalne słowa kluczowe przy wyszukiwaniu','clickable_keyword_search',14, 'f=index.htm&amp;as=admin_general_keywords_start&amp;ae=admin_general_keywords_end'), //cpg1.4
  array('Zezwalaj na pluginy', 'enable_plugins', 12, 'f=index.htm&amp;as=admin_general_enable-plugins&amp;ae=admin_general_enable-plugins_end'),  //cpg1.4
  array('Zezwalaj na banowanie nierutowalnych (prywatnych) adresów IP', 'ban_private_ip', 1,  'f=index.htm&amp;as=admin_general_private-ip&amp;ae=admin_general_private-ip_end'), //cpg1.4
  array('Przeglądalny interfejs dodatków wsadowych', 'browse_batch_add', 1, 'f=index.htm&amp;as=admin_general_browsable_batch_add&amp;ae=admin_general_browsable_batch_add_end'), //cpg1.4

  'Język &amp; zestaw znaków',
  array('Język', 'lang', 5, 'f=index.htm&amp;as=admin_language_language&amp;ae=admin_language_language_end'), //cpg1.4
  array('Wyświetlaj angielski, jeśli nie odnaleziono frazy', 'language_fallback', 1, 'f=index.htm&amp;as=admin_language_fallback&amp;ae=admin_language_fallback_end'), //cpg1.4
  array('Kodowanie znaków', 'charset', 4, 'f=index.htm&amp;as=admin_language_charset&amp;ae=admin_language_charset_end'), //cpg1.4
  array('Wyświetlaj listę języków', 'language_list', 1, 'f=index.htm&amp;as=admin_language_list&amp;ae=admin_language_list_end'), //cpg1.4
  array('Wyświetlaj flagi języków', 'language_flags', 8, 'f=index.htm&amp;as=admin_language_flags&amp;ae=admin_language_flags_end&amp;top=1'), //cpg1.4
  array('Wyświetlaj &quot;reset&quot; w liście języków', 'language_reset', 1, 'f=index.htm&amp;as=admin_language_reset&amp;ae=admin_language_reset_end&amp;top=1'), //cpg1.4
  //array('Display previous/next on tabbed pages', 'previous_next_tab', 1), //cpg1.4

  'Ustawienia tematów',
  array('Temat', 'theme', 6, 'f=index.htm&amp;as=admin_theme_theme&amp;ae=admin_theme_theme_end'), //cpg1.4
  array('Wyświetlaj listę tematów', 'theme_list', 1, 'f=index.htm&amp;as=admin_theme_theme_list&amp;ae=admin_theme_theme_list_end'), //cpg1.4
  array('Wyświetlaj &quot;reset&quot; w liście tematów', 'theme_reset', 1, 'f=index.htm&amp;as=admin_theme_theme_reset&amp;ae=admin_theme_theme_reset_end'), //cpg1.4
  array('Wyświetlaj FAQ', 'display_faq', 1, 'f=index.htm&amp;as=admin_theme_faq&amp;ae=admin_theme_faq_end'), //cpg1.4
  array('Nazwa linku użytkownika w menu', 'custom_lnk_name', 0,'f=index.htm&amp;as=admin_theme_custom_lnk_name&amp;ae=admin_theme_custom_lnk_name_end'), //cpg1.4
  array('URL linku uzytkownika w menu', 'custom_lnk_url', 0,'f=index.htm&amp;as=admin_language_custom_lnk_url&amp;ae=admin_language_custom_lnk_url_end'), //cpg1.4
  array('Wyświetlaj pomoc bbcode', 'show_bbcode_help', 1, 'f=index.htm&amp;as=admin_theme_bbcode&amp;ae=admin_theme_bbcode_end&amp;top=1'), //cpg1.4
  array('Pokaz blok walidatorów w tematach, które są zdefiniowane jako zgodne z XHTML i CSS','vanity_block',1, 'f=index.htm&amp;as=vanity_block&amp;ae=vanity_block_end'), //cpg1.4
  array('Ścieżka do pliku uzytkownika z nagłówkiem', 'custom_header_path', 0, 'f=index.htm&amp;as=admin_theme_include_path_start&amp;ae=admin_theme_include_path_end'), //cpg1.4
  array('Ścieżka do pliku uzytkownika ze stopką', 'custom_footer_path', 0, 'f=index.htm&amp;as=admin_theme_include_path_start&amp;ae=admin_theme_include_path_end'), //cpg1.4

  'Widok listy albumów',
  array('Szerokość głównej tabeli (pikseli lub %)', 'main_table_width', 0, 'f=index.htm&amp;as=admin_album_table-width&amp;ae=admin_album_table-width_end'), //cpg1.4
  array('Ilość poziomów kategorii do wyświetlenia', 'subcat_level', 0, 'f=index.htm&amp;as=admin_album_category-levels&amp;ae=admin_album_category-levels_end'), //cpg1.4
  array('Ilość albumów do wyświetlenia', 'albums_per_page', 0, 'f=index.htm&amp;as=admin_album_number&amp;ae=admin_album_number_end'), //cpg1.4
  array('Ilość kolumn w liście albumów', 'album_list_cols', 0, 'f=index.htm&amp;as=admin_album_columns&amp;ae=admin_album_columns_end'), //cpg1.4
  array('Rozmiar miniaturek w pikselach', 'alb_list_thumb_size', 0, 'f=index.htm&amp;as=admin_album_thumbnail-size&amp;ae=admin_album_thumbnail-size_end'), //cpg1.4
  array('Zawartość strony głównej', 'main_page_layout', 0, 'f=index.htm&amp;as=admin_album_list_content&amp;ae=admin_album_list_content_end'), //cpg1.4
  array('Pokaż miniaturki pierwszego poziomu albumów w kategoriach','first_level',1, 'f=index.htm&amp;as=admin_album_first-level_thumbs&amp;ae=admin_album_first-level_thumbs_end'), //cpg1.4
  array('Sortuj kategorie alfabetycznie (zamiast sortowania użytkownika)','categories_alpha_sort',1, 'f=index.htm&amp;as=admin_album_list_alphasort_start&amp;ae=admin_album_list_alphasort_end'), //cpg1.4
  array('Pokaż ilość podpiętych plików','link_pic_count',1, 'f=index.htm&amp;as=admin_album_linked_files_start&amp;ae=admin_album_linked_files_end'), //cpg1.4

  'Miniaturki',
  array('Ilość kolumn na stronie z miniaturkami', 'thumbcols', 0, 'f=index.htm&amp;as=admin_thumbnail_columns&amp;ae=admin_thumbnail_columns_end'), //cpg1.4
  array('Ilość wierszy na stronie z miniaturkami', 'thumbrows', 0, 'f=index.htm&amp;as=admin_thumbnail_rows&amp;ae=admin_thumbnail_rows_end'), //cpg1.4
  array('Maksymalna ilość zakładek do wyświetlenia', 'max_tabs', 10, 'f=index.htm&amp;as=admin_thumbnail_tabs&amp;ae=admin_thumbnail_tabs_end'), //cpg1.4
  array('Wyświetl tytł pliku (dodatkowo do tytułu) pod miniaturką', 'caption_in_thumbview', 1, 'f=index.htm&amp;as=admin_thumbnail_display_caption&amp;ae=admin_thumbnail_display_caption_end'), //cpg1.4
  array('Wyświetl ilość odsłon pod miniaturką', 'views_in_thumbview', 1, 'f=index.htm&amp;as=admin_thumbnail_display_views&amp;ae=admin_thumbnail_display_views_end'), //cpg1.4
  array('Wyświetl ilość komentarzy pod miniaturką', 'display_comment_count', 1, 'f=index.htm&amp;as=admin_thumbnail_display_comments&amp;ae=admin_thumbnail_display_comments_end'), //cpg1.4
  array('Wyświetl nazwę użytkownika pod miniaturką', 'display_uploader', 1, 'f=index.htm&amp;as=admin_thumbnail_display_uploader&amp;ae=admin_thumbnail_display_uploader_end'), //cpg1.4
  //array('Display name of admin uploaders below the thumbnail', 'display_admin_uploader', 1, 'f=index.htm&amp;as=admin_thumbnail_display_admin_uploader&amp;ae=admin_thumbnail_display_admin_uploader_end'), //cpg1.4
  array('Wyświetl nazwę pliku pod miniaturką', 'display_filename', 1, 'f=index.htm&amp;as=admin_thumbnail_display_filename&amp;ae=admin_thumbnail_display_filename_end'), //cpg1.4
  array('Wyświetl opis albumu', 'alb_desc_thumb', 1, 'f=index.htm&amp;as=admin_thumbnail_display_description&amp;ae=admin_thumbnail_display_description_end'), //cpg1.4
  array('Domyślny sposób sortowania plików', 'default_sort_order', 3, 'f=index.htm&amp;as=admin_thumbnail_default_sortorder&amp;ae=admin_thumbnail_default_sortorder_end'), //cpg1.4
  array('Minimalna ilość głosów na plik, aby pojawił się w liście \'top-rated\'', 'min_votes_for_rating', 0, 'f=index.htm&amp;as=admin_thumbnail_minimum_votes&amp;ae=admin_thumbnail_minimum_votes_end'), //cpg1.4

  'Podgląd zdjęć', //cpg1.4
  array('Szerokość tabeli wyświetlającej (pikseli or %)', 'picture_table_width', 0, 'f=index.htm&amp;as=admin_image_comment_table-width&amp;ae=admin_image_comment_table-width_end'), //cpg1.4
  array('Informacja o pliku wyświetlana domyślnie', 'display_pic_info', 1, 'f=index.htm&amp;as=admin_image_comment_info_visible&amp;ae=admin_image_comment_info_visible_end'), //cpg1.4
  array('Maksymalna długość opisu zdjęcia', 'max_img_desc_length', 0, 'f=index.htm&amp;as=admin_image_comment_descr_length&amp;ae=admin_image_comment_descr_length_end'), //cpg1.4
  array('Maksymalna ilość znaków w wyrazie', 'max_com_wlength', 0, 'f=index.htm&amp;as=admin_image_comment_chars_per_word&amp;ae=admin_image_comment_chars_per_word_end'), //cpg1.4
  array('Pokazuj pasek ze zdjęciami', 'display_film_strip', 1, 'f=index.htm&amp;as=admin_image_comment_filmstrip_toggle&amp;ae=admin_image_comment_filmstrip_toggle_end'), //cpg1.4
  array('Pokazuj nazwę pliku pod miniaturka w pasku', 'display_film_strip_filename', 1, 'f=index.htm&amp;as=admin_image_comment_display_film_strip_filename&amp;ae=admin_image_comment_display_film_strip_filename_end'), //cpg1.4
  array('Ilość miniaturek w pasku', 'max_film_strip_items', 0, 'f=index.htm&amp;as=admin_image_comment_filmstrip_number&amp;ae=admin_image_comment_filmstrip_number_end'), //cpg1.4
  array('Czas pokazywania slajdu w milisekundach', 'slideshow_interval', 0, 'f=index.htm&amp;as=admin_image_comment_slideshow_interval&amp;ae=admin_image_comment_slideshow_interval_end'), //cpg1.4

  'Ustawienia komentarzy', //cpg1.4
  array('Filtruj słowa w komentarzach', 'filter_bad_words', 1, 'f=index.htm&amp;as=admin_image_comment_bad_words&amp;ae=admin_image_comment_bad_words_end'), //cpg1.4
  array('Włącz emotikony w komentarzach', 'enable_smilies', 1, 'f=index.htm&amp;as=admin_image_comment_smilies&amp;ae=admin_image_comment_smilies_end'), //cpg1.4
  array('Zezwalaj na kilka kolejnych komentarzy zdjęcia od tego samego użytkownika (zabezbieczenie spamowe)', 'disable_comment_flood_protect', 1, 'f=index.htm&amp;as=admin_image_comment_flood&amp;ae=admin_image_comment_flood_end'), //cpg1.4
  array('Maksymalna ilość linii komentarza', 'max_com_lines', 0, 'f=index.htm&amp;as=admin_image_comment_lines&amp;ae=admin_image_comment_lines_end'), //cpg1.4
  array('Maksymalna długość komentarza', 'max_com_size', 0, 'f=index.htm&amp;as=admin_image_comment_length&amp;ae=admin_image_comment_length_end'), //cpg1.4
  array('Powiadamiaj administratora mailem o komentarzach', 'email_comment_notification', 1, 'f=index.htm&amp;as=admin_image_comment_admin_notify&amp;ae=admin_image_comment_admin_notify_end'), //cpg1.4
  array('Sortowanie komentarzy', 'comments_sort_descending', 17, 'f=index.htm&amp;as=admin_comment_sort_start&amp;ae=admin_comment_sort_end'), //cpg1.4
  array('Prefiks dla anonimowych autorów komentarzy', 'comments_anon_pfx', 0, 'f=index.htm&amp;as=comments_anon_pfx&amp;ae=comments_anon_pfx_end'), //cpg1.4

  'Ustawienia plików i miniaturek',
  array('Jakość plików JPEG', 'jpeg_qual', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_jpeg_quality&amp;ae=admin_picture_thumbnail_jpeg_quality_end'), //cpg1.4
  array('Maksymalny rozmiar miniaturki <a href="#notice2" class="clickable_option">**</a>', 'thumb_width', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max-dimension&amp;ae=admin_picture_thumbnail_max-dimension_end'), //cpg1.4
  array('Użyj rozmiaru (szerokość lub wysokość lub Maksymalny aspekt dla miniaturek)<a href="#notice2" class="clickable_option">**</a>', 'thumb_use', 7, 'f=index.htm&amp;as=admin_picture_thumbnail_use-dimension&amp;ae=admin_picture_thumbnail_use-dimension_end'), //cpg1.4
  array('Twórz zdjęcia pośrednie','make_intermediate',1, 'f=index.htm&amp;as=admin_picture_thumbnail_intermediate_toggle&amp;ae=admin_picture_thumbnail_intermediate_toggle_end'), //cpg1.4
  array('Maksymalna szerokość lub wysokość pośrednich zdjęć/filmów <a href="#notice2" class="clickable_option">**</a>', 'picture_width', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_intermediate_dimension&amp;ae=admin_picture_thumbnail_intermediate_dimension_end'), //cpg1.4
  array('Maksymalny rozmiar ładowanych plików (KB)', 'max_upl_size', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max_upload_size&amp;ae=admin_picture_thumbnail_max_upload_size_end'), //cpg1.4
  array('Maksymalna szerokość lub wysokość ładowanych zdjęć/filmów (pikseli)', 'max_upl_width_height', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max_upload_dimension&amp;ae=admin_picture_thumbnail_max_upload_dimension_end'), //cpg1.4
  array('Automatycznie zmniejszaj za duże obrazy', 'auto_resize', 16, 'f=index.htm&amp;as=admin_picture_thumbnail_auto-resize&amp;ae=admin_picture_thumbnail_auto-resize_end'), //cpg1.4

  'Zaawansowane ustawienia plików i miniaturek',
  array('Włącz prywatne albumy (Po przełączeniu z  \'tak\' na \'nie\' wszystkie obecne prywatne albumy staną się publiczne)', 'allow_private_albums', 1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_private_toggle&amp;ae=admin_picture_thumb_advanced_private_toggle_end'), //cpg1.4
  array('Pokaż ikonę albumów prywatnych wylogowanym użytkownikom','show_private',1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_private_icon_show&amp;ae=admin_picture_thumb_advanced_private_icon_show_end'), //cpg1.4
  array('Znaki zabronione w nazwach plików', 'forbiden_fname_char',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_filename_forbidden_chars&amp;ae=admin_picture_thumb_advanced_filename_forbidden_chars_end'), //cpg1.4
  //array('Accepted file extensions for uploaded pictures', 'allowed_file_extensions',0, 'f=index.htm&amp;as=&amp;ae=_end'), //cpg1.4
  array('Dozwolone typy zdjęć', 'allowed_img_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_pic_extensions&amp;ae=admin_picture_thumb_advanced_pic_extensions_end'), //cpg1.4
  array('Dozwolone typy filmów', 'allowed_mov_types',0, 'f=index.htm&amp;as=admin_thumbs_advanced_movie&amp;ae=admin_thumbs_advanced_movie_end'), //cpg1.4
  array('Automatyczne odtwarzanie filmów', 'media_autostart',1, 'f=index.htm&amp;as=admin_movie_autoplay&amp;ae=admin_movie_autoplay_end'), //cpg1.4
  array('Dozwolone typu plików audio', 'allowed_snd_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_audio_extensions&amp;ae=admin_picture_thumb_advanced_audio_extensions_end'), //cpg1.4
  array('Dozwolone typy dokumentów', 'allowed_doc_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_doc_extensions&amp;ae=admin_picture_thumb_advanced_doc_extensions_end'), //cpg1.4
  array('Metoda zmieniania rozmiaru zdjęć','thumb_method',2, 'f=index.htm&amp;as=admin_picture_thumb_advanced_resize_method&amp;ae=admin_picture_thumb_advanced_resize_method_end'), //cpg1.4
  array('Ścieżka do pliku ImageMagick \'convert\' (przykładowo /usr/bin/X11/)', 'impath', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_im_path&amp;ae=admin_picture_thumb_advanced_im_path_end'), //cpg1.4
  //array('Allowed image types (only valid for ImageMagick)', 'allowed_img_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_allowed_imagetypes&amp;ae=admin_picture_thumb_advanced_allowed_imagetypes_end'), //cpg1.4
  array('Opcje linii poleceń dla programu ImageMagick', 'im_options', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_im_commandline&amp;ae=admin_picture_thumb_advanced_im_commandline_end'), //cpg1.4
  array('Czytaj dane EXIF w plikach JPEG', 'read_exif_data', 13, 'f=index.htm&amp;as=admin_picture_thumb_advanced_exif&amp;ae=admin_picture_thumb_advanced_exif_end'), //cpg1.4
  array('Czytaj dane IPTC w plikach JPEG', 'read_iptc_data', 1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_iptc&amp;ae=admin_picture_thumb_advanced_iptc_end'), //cpg1.4
  array('Katalog albumów <a href="#notice1" class="clickable_option">*</a>', 'fullpath', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_albums_dir&amp;ae=admin_picture_thumb_advanced_albums_dir_end'), //cpg1.4
  array('Katalog plików użytkowników <a href="#notice1" class="clickable_option">*</a>', 'userpics', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_userpics_dir&amp;ae=admin_picture_thumb_advanced_userpics_dir_end'), //cpg1.4
  array('Prefiks dla obrazków pośrednich <a href="#notice1" class="clickable_option">*</a>', 'normal_pfx', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_intermediate_prefix&amp;ae=admin_picture_thumb_advanced_intermediate_prefix_end'), //cpg1.4
  array('Prefiks dla miniaturek <a href="#notice1" class="clickable_option">*</a>', 'thumb_pfx', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_thumbs_prefix&amp;ae=admin_picture_thumb_advanced_thumbs_prefix_end'), //cpg1.4
  array('Domyślne prawa dla katalogów', 'default_dir_mode', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_chmod_folder&amp;ae=admin_picture_thumb_advanced_chmod_folder_end'), //cpg1.4
  array('Domyślne prawa dla plików', 'default_file_mode', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_chmod_files&amp;ae=admin_picture_thumb_advanced_chmod_files_end'), //cpg1.4

  'Ustawienia użytkownika',
  array('Zezwalaj na rejestrację użytkowników', 'allow_user_registration', 1, 'f=index.htm&amp;as=admin_allow_registration&amp;ae=admin_allow_registration_end'), //cpg1.4
  array('Zezwalaj na dostęp niezalogowanym użytkownikom', 'allow_unlogged_access', 1, 'f=index.htm&amp;as=admin_allow_unlogged_access&amp;ae=admin_allow_unlogged_access_end'), //cpg1.4
  array('Rejestracja użytkownika wymaga weryfikacji emailowej', 'reg_requires_valid_email', 1, 'f=index.htm&amp;as=admin_registration_verify&amp;ae=admin_registration_verify_end'), //cpg1.4
  array('Powiadom administratora emailem o rejestracji', 'reg_notify_admin_email', 1, 'f=index.htm&amp;as=admin_registration_notify&amp;ae=admin_registration_notify_end'), //cpg1.4
  array('Aktywacja rejestracji przez administratora', 'admin_activation', 1, 'f=index.htm&amp;as=admin_activation&amp;ae=admin_activation_end'),  //cpg1.4
  array('Zezwalaj dwóm użytkownikom na posiadanie jednego adresu email', 'allow_duplicate_emails_addr', 1, 'f=index.htm&amp;as=admin_allow_duplicate_emails_addr&amp;ae=admin_allow_duplicate_emails_addr_end'), //cpg1.4
  array('Powiadom administratora o oczekujących na akceptację zdjęciach', 'upl_notify_admin_email', 1, 'f=index.htm&amp;as=admin_approval_notify&amp;ae=admin_approval_notify_end'), //cpg1.4
  array('Zezwalaj zalogowanym użytkownikom na oglądanie listy użytkownikówmemberlist', 'allow_memberlist', 1, 'f=index.htm&amp;as=admin_user_memberlist&amp;ae=admin_user_memberlist_end'), //cpg1.4
  array('Zezwalaj użytkownikom na zmianę adresu email', 'allow_email_change', 1, 'f=index.htm&amp;as=admin_user_allow_email_change&amp;ae=admin_user_allow_email_change_end'), //cpg1.4
  array('Zezwalaj użytkownikom na kontrolę nad ich zdjęciami w publicznych galeriach', 'users_can_edit_pics', 1, 'f=index.htm&amp;as=admin_user_editpics_public_start&amp;ae=admin_user_editpics_public_end'), //cpg1.4
  array('Liczba nieudanych zalogowań wywołująca tymczasowny ban', 'login_threshold', 0, 'f=index.htm&amp;as=admin_user_login_start&amp;ae=admin_user_login_end'), //cpg1.4
  array('Okres tymczasowego banu po nieudanych logowaniach', 'login_expiry', 0, 'f=index.htm&amp;as=admin_user_login_start&amp;ae=admin_user_login_end'), //cpg1.4
  array('Zgłaszaj raport administratorowi', 'report_post', 1, 'f=index.htm&amp;as=admin_user_enable_report&amp;ae=admin_user_enable_report_end'),  //cpg1.4

// custom profile fields,  //cpg1.4
  'Własne pola w profilu użytkownika (zostaw puste jeśli nie używasz).
  Użyj pola 6 dla długich wpisów, jak np biografia', //cpg1.4
  array('Nazwa 1', 'user_profile1_name', 0, 'f=index.htm&amp;as=admin_custom&amp;ae=admin_custom_end'), //cpg1.4
  array('Nazwa 2', 'user_profile2_name', 0), //cpg1.4
  array('Nazwa 3', 'user_profile3_name', 0), //cpg1.4
  array('Nazwa 4', 'user_profile4_name', 0), //cpg1.4
  array('Nazwa 5', 'user_profile5_name', 0), //cpg1.4
  array('Nazwa 6', 'user_profile6_name', 0), //cpg1.4

  'Własne pola w opisach zdjęć (zostaw puste jeśli nie używasz)',
  array('Pole 1', 'user_field1_name', 0, 'f=index.htm&amp;as=admin_custom_image&amp;ae=admin_custom_image_end'), //cpg1.4
  array('Pole 2', 'user_field2_name', 0),
  array('Pole 3', 'user_field3_name', 0),
  array('Pole 4', 'user_field4_name', 0),

  'Ustawienia ciasteczek',
  array('Nazwa ciasteczka', 'cookie_name', 0, 'f=index.htm&amp;as=admin_cookie_name&amp;ae=admin_cookie_name_end'), //cpg1.4
  array('Scieżka do ciasteczka', 'cookie_path', 0, 'f=index.htm&amp;as=admin_cookie_path&amp;ae=admin_cookie_path_end'), //cpg1.4

  'Ustawienia e-mail (zazwyczaj nic to nie należy zmieniać; jeśli nie masz pewności zostaw wszystkie puste)', //cpg1.4
  array('SMTP Host (jeśli zostawisz puste, zostanie użyty sendmail)', 'smtp_host', 0, 'f=index.htm&amp;as=admin_email&amp;ae=admin_email_end'), //cpg1.4
  array('SMTP Username', 'smtp_username', 0), //cpg1.4
  array('SMTP Password', 'smtp_password', 0), //cpg1.4

  'Logowanie i statystyki', //cpg1.4
  array('Tryb logowania <a href="#notice3" class="clickable_option">***</a>', 'log_mode', 11, 'f=index.htm&amp;as=admin_logging_log_mode&amp;ae=admin_logging_log_mode_end'), //cpg1.4
  array('Loguj e-kartki', 'log_ecards', 1, 'f=index.htm&amp;as=admin_general_log_ecards&amp;ae=admin_general_log_ecards_end'), //cpg1.4
  array('Zachowuj szczegółowe statystytki głosowania','vote_details',1, 'f=index.htm&amp;as=admin_logging_votedetails&amp;ae=admin_logging_votedetails_end'), //cpg1.4
  array('Zachowuj szczegółowe statystyki odsłonKeep detailed hit statistics','hit_details',1, 'f=index.htm&amp;as=admin_logging_hitdetails&amp;ae=admin_logging_hitdetails_end'), //cpg1.4

  'Ustawienia konserwacji', //cpg1.4
  array('Włącz tryb debugowania', 'debug_mode', 9, 'f=index.htm&amp;as=debug_mode&amp;ae=debug_mode_end'), //cpg1.4
  array('Wyświetlaj uwagi w trybie debugowania', 'debug_notice', 1, 'f=index.htm&amp;as=admin_misc_debug_notices&amp;ae=admin_misc_debug_notices_end'), //cpg1.4
  array('Galeria jest wyłączona', 'offline', 1, 'f=index.htm&amp;as=admin_general_offline&amp;ae=admin_general_offline_end'), //cpg1.4
);


// ------------------------------------------------------------------------- //
// File db_ecard.php
// ------------------------------------------------------------------------- //

if (defined('DB_ECARD_PHP')) $lang_db_ecard_php = array(
  'title' => 'Wysłane e-kartki',
  'ecard_sender' => 'Nadawca',
  'ecard_recipient' => 'Odbiorca',
  'ecard_date' => 'Data',
  'ecard_display' => 'Wyświetl e-kartkę',
  'ecard_name' => 'Nazwa',
  'ecard_email' => 'Email',
  'ecard_ip' => 'IP #',
  'ecard_ascending' => 'rosnąco',
  'ecard_descending' => 'malejąco',
  'ecard_sorted' => 'Sortowane',
  'ecard_by_date' => 'według daty',
  'ecard_by_sender_name' => 'według nazwy nadawcy',
  'ecard_by_sender_email' => 'według adresu email nadawcy',
  'ecard_by_sender_ip' => 'według numeru IP nadawcy',
  'ecard_by_recipient_name' => 'według nazwy odbiorcy',
  'ecard_by_recipient_email' => 'według adresu email odbiorcy',
  'ecard_number' => 'rekordy %s do %s z %s',
  'ecard_goto_page' => 'idź do strony',
  'ecard_records_per_page' => 'Rekordów na stronę',
  'check_all' => 'Zaznacz wszytskie',
  'uncheck_all' => 'Odznacz wszytstkie',
  'ecards_delete_selected' => 'Skasuj wybrane e-kartki',
  'ecards_delete_confirm' => 'Na pewno chcesz usunąć te rekordy? Zaznacz pole!',
  'ecards_delete_sure' => 'Na pewno',
);


// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
  'empty_name_or_com' => 'Musisz wpisać swoją nazwę i komentarz',
  'com_added' => 'Komentarz został dodany',
  'alb_need_title' => 'Musisz podać tytuł albumu!',
  'no_udp_needed' => 'Aktualizacja nie jest wymagana.',
  'alb_updated' => 'Album został zaktualizowany',
  'unknown_album' => 'Wybrany album nie istnieje lub nie masz odpowiednich uprawnień',
  'no_pic_uploaded' => 'Żaden plik nie został załadowany!<br /><br />Jeśli wybrałeś pliki do załadowania, sprawdź czy serwer zezwala na upload plików...',
  'err_mkdir' => 'Nie udało sie utworzyć katalogu %s !',
  'dest_dir_ro' => 'W katalogu docelowym %s nie udało się zapisać pliku !',
  'err_move' => 'Nie można przenieść %s do %s !',
  'err_fsize_too_large' => 'Rozmiar załadowanego rpzez ciebie pliku jest za duży (maksimum to %s x %s) !', //obsolete since cpg1.3 - consider removal in cpg1.4 once upload.php has been overhauled
  'err_imgsize_too_large' => 'Rozmiar załadowanego przez ciebie pliku jest za duży (maksimum to %s KB) !', //obsolete since cpg1.3 - consider removal in cpg1.4 once upload.php has been overhauled
  'err_invalid_img' => 'Wybrany przez ciebie plik nie jest prawidłowym plikiem obrazka !',
  'allowed_img_types' => 'Możesz jedynie załadować %s obrazków.',
  'err_insert_pic' => 'Plik \'%s\' nie może być umieszczony w albumie ',
  'upload_success' => 'Plik został załadowany.<br /><br />Będzie widoczny po akceptacji administratora.',
  'notify_admin_email_subject' => '%s - Powiadomienie o załadowaniu pliku',
  'notify_admin_email_body' => 'Zdjęcie załadowane przez %s wymaga twojej akceptacji. Odwiedź %s',
  'info' => 'Informacja',
  'com_added' => 'Dodano komentarz',
  'alb_updated' => 'Zaktualizowano album',
  'err_comment_empty' => 'Twój komentarz jest pusty !',
  'err_invalid_fext' => 'Tylko następujące rozszerzenia są akceptowane: <br /><br />%s.',
  'no_flood' => 'Przepraszamy, ale jesteś już autorem najnowszego komentarza do tego pliku.<br /><br />Jeśli chcesz, możesz go zmienić.',
  'redirect_msg' => 'Jesteś przekierowywany.<br /><br /><br />kliknij \'KONTUNUUJ\' jeśli strona nie odświeży się automatycznie',
  'upl_success' => 'Twój plik został pomyślnie dodany',
  'email_comment_subject' => 'W galerii umieszczono komentarz',
  'email_comment_body' => 'Ktoś umieścił komentarz w twojej galerii. Zobacz go na',
  'album_not_selected' => 'Nie wybrano albumu', //cpg1.4
  'com_author_error' => 'Jeden z użytkowników używa tego nicka, wybierz inny', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
  'caption' => 'Tytuł',
  'fs_pic' => 'pełny rozmiar',
  'del_success' => 'skasowano',
  'ns_pic' => 'normalny rozmiar',
  'err_del' => 'nie może być skasowane',
  'thumb_pic' => 'miniatura',
  'comment' => 'komentarz',
  'im_in_alb' => 'zdjęcie z albumu',
  'alb_del_success' => 'Skasowano album \'%s\' ',
  'alb_mgr' => 'Menedżer albumów',
  'err_invalid_data' => 'Otrzymano niewłaściwe dane \'%s\'',
  'create_alb' => 'Tworzenie albumu \'%s\'',
  'update_alb' => 'Uaktualnienie albumu: \'%s\' tytuł: \'%s\' index: \'%s\'',
  'del_pic' => 'Kasowanie pliku', 
  'del_alb' => 'Kasowanie albumu',
  'del_user' => 'Kasowanie użytkownika',
  'err_unknown_user' => 'Wybrany użytkownik nie istnieje!',
  'comment_deleted' => 'Komentarz został skasowany',
  'alb_del_success' => 'Album &laquo;%s&raquo; skasowany', //cpg1.4
  'err_empty_groups' => 'Nie ma tabeli grup, lub tabela grup jest pusta!', //cpg1.4
  'npic' => 'Zdjęcie', //cpg1.4
  'pic_mgr' => 'Menedżer zdjęć', //cpg1.4
  'update_pic' => 'Aktualizacja zdjęcia \'%s\', nazwa pliku: \'%s\', indeks: \'%s\'', //cpg1.4
  'username' => 'Użytkownik', //cpg1.4
  'anonymized_comments' => '%s komentarzy zmieniono na anonimowe', //cpg1.4
  'anonymized_uploads' => '%s zdjęć zmieniono na anonimowe', //cpg1.4
  'deleted_comments' => '%s komentarzy skasowano', //cpg1.4
  'deleted_uploads' => '%s zdjęć skasowano', //cpg1.4
  'user_deleted' => 'Użytkownik %s usunięty', //cpg1.4
  'activate_user' => 'Aktywuj użytkownika', //cpg1.4
  'user_already_active' => 'Konto już zostało uaktywnione', //cpg1.4
  'activated' => 'Uaktywniono', //cpg1.4
  'deactivate_user' => 'Dezaktywuj użytkownika', //cpg1.4
  'user_already_inactive' => 'Konto już zostało zdezaktywowane', //cpg1.4
  'deactivated' => 'Zdezaktywowano', //cpg1.4
  'reset_password' => 'Skasuj hasło(a)', //cpg1.4
  'password_reset' => 'Hasło skasowano do %s', //cpg1.4
  'change_group' => 'Zmień główną grupę', //cpg1.4
  'change_group_to_group' => 'Zmienianie z %s na %s', //cpg1.4
  'add_group' => 'Dodaj dodatkową grupę', //cpg1.4
  'add_group_to_group' => 'Dodawanie uzytkownika %s do grupy %s. Obecnie jego grupą główną jest %s, a dodatkową %s.', //cpg1.4
  'status' => 'Status', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File displayecard.php
// ------------------------------------------------------------------------- //

if (defined('DISPLAYECARD_PHP')) {

$lang_displayecard_php = array(
  'invalid_data' => 'E-kartka którą próbujesz obejrzeć została uszkodzona przez twojego klienta e-mail. Sprawdź, czy link jest prawidłowy.', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File displayimage.php
// ------------------------------------------------------------------------- //

if (defined('DISPLAYIMAGE_PHP')){

$lang_display_image_php = array(
  'confirm_del' => 'Czy na pewno chcesz skasować ten plik? \\nZostaną skasowane również komentarze do niego.', //js-alert 
  'del_pic' => 'SKASUJ TEN PLIK', 
  'size' => '%s x %s pikseli',
  'views' => '%s razy',
  'slideshow' => 'Pokaz slajdów',
  'stop_slideshow' => 'ZATRZYMAJ POKAZ',
  'view_fs' => 'Kliknij aby zobaczyć pełny rozmiar',
  'edit_pic' => 'Edytowanie opisu', 
  'crop_pic' => 'Kadrowanie i obrót', 
  'edit_pic' => 'Edytuj informacje o pliku', //cpg1.4
  'set_player' => 'Wybierz odtwarzacz',
);

$lang_picinfo = array(
  'title' =>'Informacja o pliku', 
  'Filename' => 'Nazwa pliku',
  'Album name' => 'Nazwa albumu',
  'Rating' => 'Ocena (%s głosów)',
  'Keywords' => 'Słowa kluczowe',
  'File Size' => 'Rozmiar pliku',
  'Dimensions' => 'Wymiary',
  'Displayed' => 'Wyświetleń',
  'Camera' => 'Aparat fotograficzny',
  'Date taken' => 'Data zrobienia zdjęcia',
  'Aperture' => 'Przesłona',
  'Exposure time' => 'Czas ekspozycji',
  'Focal length' => 'Ogniskowa',
  'Comment' => 'Komentarz',
  'addFav'=>'Dodaj do Ulubionych', 
  'addFavPhrase'=>'Ulubione', 
  'remFav'=>'Usuń z Ulubionych',
  'iptcTitle'=>'Tytuł IPTC', 
  'iptcCopyright'=>'Copyright IPTC', 
  'iptcKeywords'=>'Słowa kluczowe IPTC', 
  'iptcCategory'=>'Kategoria IPTC', 
  'iptcSubCategories'=>'Podkategorie IPTC', 
  'Date Added' => 'Data dodania', //cpg1.4
  'URL' => 'URL', //cpg1.4
  'Make' => 'Zrobione', //cpg1.4
  'Model' => 'Model', //cpg1.4
  'DateTime' => 'Data Czas', //cpg1.4
  'DateTimeOriginal' => 'Data zrobienia', //cpg1.4
  'ISOSpeedRatings'=>'ISO', //cpg1.4
  'MaxApertureValue' => 'Maks. przysłona', //cpg1.4
  'FocalLength' => 'Ogniskowa', //cpg1.4
  'ColorSpace' => 'Przestrzeń barw', //cpg1.4
  'ExposureProgram' => 'Tryb ekspozycji', //cpg1.4
  'Flash' => 'Lampa błyskowa', //cpg1.4
  'MeteringMode' => 'Tryb pomiary światła', //cpg1.4
  'ExposureTime' => 'Czas ekspozycji', //cpg1.4
  'ExposureBiasValue' => 'Korekta ekspozycji', //cpg1.4
  'ImageDescription' => ' Opis zdjęcia', //cpg1.4
  'Orientation' => 'Orientacja', //cpg1.4
  'xResolution' => 'Rozdzielczość X', //cpg1.4
  'yResolution' => 'Rozdzielczość Y', //cpg1.4
  'ResolutionUnit' => 'Jednostka rozdzielczości', //cpg1.4
  'Software' => 'Oprogramowanie', //cpg1.4
  'YCbCrPositioning' => 'YCbCrPositioning', //cpg1.4
  'ExifOffset' => 'Offset EXIF', //cpg1.4
  'IFD1Offset' => 'Offset IFD1', //cpg1.4
  'FNumber' => 'FNumber', //cpg1.4
  'ExifVersion' => 'Wersja EXIF', //cpg1.4
  'DateTimeOriginal' => 'DateTime oryginału', //cpg1.4
  'DateTimedigitized' => 'DateTime digitalizacji', //cpg1.4
  'ComponentsConfiguration' => 'Konfiguracja składników', //cpg1.4
  'CompressedBitsPerPixel' => 'Kompresja bitów na piksel', //cpg1.4
  'LightSource' => 'Źródło światła', //cpg1.4
  'ISOSetting' => 'Ustawienie ISO', //cpg1.4
  'ColorMode' => 'Tryb koloru', //cpg1.4
  'Quality' => 'Jakość', //cpg1.4
  'ImageSharpening' => 'Wyostrzanie obrazu', //cpg1.4
  'FocusMode' => 'Tryb ustawiania ostrości', //cpg1.4
  'FlashSetting' => 'Ustawienia lampy błyskowej', //cpg1.4
  'ISOSelection' => 'Selekcja ISO', //cpg1.4
  'ImageAdjustment' => 'Ustawienie zdjęcia', //cpg1.4
  'Adapter' => 'Adapter', //cpg1.4
  'ManualFocusDistance' => 'Odległość ręcznego ostrzenia', //cpg1.4
  'DigitalZoom' => 'Zoom cyfrowy', //cpg1.4
  'AFFocusPosition' => 'Pozycja Auto Focusa', //cpg1.4
  'Saturation' => 'Nasycenie', //cpg1.4
  'NoiseReduction' => 'Redukcja szumów', //cpg1.4
  'FlashPixVersion' => 'Wersja Flash Pix', //cpg1.4
  'ExifImageWidth' => 'Exif szerokość zdjęcia', //cpg1.4
  'ExifImageHeight' => 'Exif wysokość zdjęcia', //cpg1.4
  'ExifInteroperabilityOffset' => 'Exif przesunięcie interoperacyjne', //cpg1.4
  'FileSource' => 'Plik źródłowy', //cpg1.4
  'SceneType' => 'Typ sceny', //cpg1.4
  'CustomerRender' => 'Rendering użytkownika', //cpg1.4
  'ExposureMode' => 'Tryb ekspozycji', //cpg1.4
  'WhiteBalance' => 'Balans bieli', //cpg1.4
  'DigitalZoomRatio' => 'Współczynnik zoomu cyfrowego', //cpg1.4
  'SceneCaptureMode' => 'Tryb sceny', //cpg1.4
  'GainControl' => 'Regulacja wzmocnienia', //cpg1.4
  'Contrast' => 'Kontrast', //cpg1.4
  'Saturation' => 'Nasycenie', //cpg1.4
  'Sharpness' => 'Ostrość', //cpg1.4
  'ManageExifDisplay' => 'Zarządzanie danymi EXIF', //cpg1.4
  'submit' => 'Wyślij', //cpg1.4
  'success' => 'Informacje zaktualizowane pomyślnie.', //cpg1.4
  'details' => 'Detale', //cpg1.4
);

$lang_display_comments = array(
  'OK' => 'OK',
  'edit_title' => 'Edytuj ten komentarz',
  'confirm_delete' => 'Czy na pewno chcesz skasować ten komentarz ?', //js-alert
  'add_your_comment' => 'Dodaj komentarz',
  'name'=>'Pseudonim', 
  'comment'=>'Komentarz', 
  'your_name' => 'Anonim', 
  'report_comment_title' => 'Zgłoś komentarz administratorowi', //cpg1.4
);


$lang_fullsize_popup = array(
  'click_to_close' => 'Kliknij, żeby zamknąć',
);

}

// ------------------------------------------------------------------------ //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
  'title' => 'Wyślij e-kartkę',
  'ecard_title' => 'e-kartka od %s dla Ciebie',
  'view_more_pics' => 'Kliknij ten link aby zobaczyć więcej zdjęć!',
  'send_success' => 'Twoja e-kartka została wysłana',
  'send_failed' => 'Niestety, serwer nie może wysłać Twojej e-kartki...',
  'from' => 'Od',
  'your_name' => 'Twoje imię',
  'your_email' => 'Twój adres e-mail',
  'to' => 'Do',
  'rcpt_name' => 'Nazwa odbiorcy',
  'rcpt_email' => 'Adres e-mail odbiorcy',
  'greetings' => 'Temat',
  'message' => 'Wiadomość',
  'invalid_email' => '<font color="red"><b>Ostrzeżenie</b></font>: nieprawidłowy adres e-mail:', //cpg1.4
  'view_ecard' => 'Link do e-kartki, jeśli nie wyświetla się prawidłowo', //cpg1.4
  'view_ecard_plaintext' => 'Aby zobaczyć e-kartkę, skopiuj ten adres i wklej go do okienka swojej przeglądarki:', //cpg1.4
  'view_more_pics' => 'Zobacz więcej zdjęć!', //cpg1.4
  'greetings' => 'Nagłówek', //cpg1.4
  'message' => 'Wiadomość', //cpg1.4
  'ecards_footer' => 'Wysłana przez %s z numeru IP %s o %s (czas lokalny serwera)', //cpg1.4
  'preview' => 'Podgląd e-kartki', //cpg1.4
  'preview_button' => 'Podgląd', //cpg1.4
  'submit_button' => 'Wyślij e-kartkę', //cpg1.4
  'preview_view_ecard' => 'Po wygenerowaniu e-kartki to będzie alternatywny link do niej. Nie będzie działał przy podglądzie.', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File report_file.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('REPORT_FILE_PHP') || defined('DISPLAYREPORT_PHP')) $lang_report_php =array(
  'title' => 'Zgłoś administratorowi', //cpg1.4
  'invalid_email' => '<b>Ostrzeżenie</b> : nieprawidłowy adres e-mail!', //cpg1.4
  'report_subject' => 'Zgłoszenie od %s w galerii %s', //cpg1.4
  'view_report' => 'Alternatywny link, jeśli zgłoszenie nie wyświetla się prawidłowo', //cpg1.4
  'view_report_plaintext' => 'Aby obejrzeć zgłoszenie skopiuj ten link i wklej go do okienka przeglądarki:', //cpg1.4
  'view_more_pics' => 'Galeria', //cpg1.4
  'send_success' => 'Zgłoszenie zostało wysłane', //cpg1.4
  'send_failed' => 'Niestety, serwer nie był w stanie wysłać zgłoszenia...', //cpg1.4
  'from' => 'Od', //cpg1.4
  'your_name' => 'Twoje imię', //cpg1.4
  'your_email' => 'Twój adres e-mail', //cpg1.4
  'to' => 'Do', //cpg1.4
  'administrator' => 'Administrator/Moderator', //cpg1.4
  'subject' => 'Temat', //cpg1.4
  'comment_field_name' => 'Zgłoszenie komentarza przez %s"', //cpg1.4
  'reason' => 'Powód', //cpg1.4
  'message' => 'Wiadomość', //cpg1.4
  'report_footer' => 'Wysłana przez %s z numeru IP %s o %s (czas lokalny serwera)', //cpg1.4
  'obscene' => 'obsceniczny', //cpg1.4
  'offensive' => 'obraźliwy', //cpg1.4
  'misplaced' => 'nie na temat', //cpg1.4
  'missing' => 'brak', //cpg1.4
  'issue' => 'błąd/nie można obejrzeć', //cpg1.4
  'other' => 'inne', //cpg1.4
  'refers_to' => 'Plik zgłoszenia odnosi się do', //cpg1.4
  'reasons_list_heading' => 'powód(y) zgłoszenia:', //cpg1.4
  'no_reason_given' => 'nie podano powodu', //cpg1.4
  'go_comment' => 'Idź do komentarza', //cpg1.4
  'view_comment' => 'Zobacz pełne zgłoszenie z komentarzem', //cpg1.4
  'type_file' => 'plik', //cpg1.4
  'type_comment' => 'komentarz', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
  'pic_info' => 'Plik&nbsp;Info', 
  'album' => 'Album',
  'title' => 'Tytuł',
  'desc' => 'Opis',
  'keywords' => 'Słowa kluczowe',
  'approve' => 'Akceptuj plik', 
  'postpone_app' => 'Odrocz akceptację',
  'del_pic' => 'Skasuj plik', 
  'reset_view_count' => 'Resetuj licznik odsłon',
  'reset_votes' => 'Resetuj głosowania',
  'del_comm' => 'Skasuj komentarze',
  'upl_approval' => 'Akceptacja zdjęć',
  'edit_pics' => 'Edytuj zdjęcia',
  'see_next' => 'Zobacz następne zdjęcia',
  'see_prev' => 'Zobacz poprzednie zdjęcia',
  'n_pic' => 'zdjęć: %s',
  'n_of_pic_to_disp' => 'Ilość zdjęć do wyświetlenia',
  'apply' => 'Zastosuj zmiany',
  'filename' => 'Nazwa pliku', //cpg1.4
  'new_keyword' => 'Nowe słowo kluczowe', //cpg1.4
  'new_keywords' => 'Znaleziono słowa kluczowe', //cpg1.4
  'existing_keyword' => 'Istniejące słowo kluczowe', //cpg1.4
  'pic_info_str' => '%s &times; %s - %s KB - %s odsłon - %s głosów',
  'del_all' => 'Usuń WSZYSTKIE pliki', //cpg1.4
  'read_exif' => 'Odczytaj ponownie dane EXIF',
  'reset_all_view_count' => 'Skasuj WSZYSTKIE liczniki odsłon', //cpg1.4
  'reset_all_votes' => 'Skasuj WSZYSTKIE głosowania', //cpg1.4
  'del_all_comm' => 'Skasuj WSZYTSKIE komentarze', //cpg1.4
  'crop_title' => 'Coppermine Picture Editor',
  'preview' => 'Podgląda',
  'save' => 'Zapisz zdjęcie',
  'save_thumb' =>'Zapisz jako miniaturkę',
  'gallery_icon' => 'Zrób z tego moją ikonę', //cpg1.4
  'sel_on_img' => 'Zaznaczenie musi zawierać się w zdjęciu!', //js-alert
  'album_properties' =>'Właściwości albumu', //cpg1.4
  'parent_category' =>'Kategoria nadrzędna', //cpg1.4
  'thumbnail_view' =>'Widok miniatur', //cpg1.4
  'select_unselect' =>'zaznacz/odznacz wszystko', //cpg1.4
  'file_exists' => "Plik docelowy %s istnieje.", //cpg1.4
  'rename_failed' => "Nie udało się zmienić nazwy %s na %s'.", //cpg1.4
  'src_file_missing' => "Brak pliku źródłowego '%s'.", // cpg 1.4
  'mime_conv' => "Nie można przekonwertować pliku '%s' na '%s'",//cpg1.4
  'forb_ext' => 'Niedozwolone rozszerzenie nazwy pliku.',//cpg1.4
);

// ------------------------------------------------------------------------- //
// File faq.php
// ------------------------------------------------------------------------- //

if (defined('FAQ_PHP')) $lang_faq_php = array(
  'faq' => 'Najczęściej zadawane pytania', 
  'toc' => 'Spis treści', 
  'question' => 'Pytanie: ', 
  'answer' => 'Odpowiedź: ', 
);

if (defined('FAQ_PHP')) $lang_faq_data = array(

  'FAQ ogólne', 

  array('Dlaczego warto się zarejestrować?', 'Rejestracja może być wymagana przez administratora serwisu. Zarejestrowanie się daje użytkownikowi dodatkowe możliwości, takie jak przesyłanie własnych plików, tworzenie listy ulubionych, ocenianie zdjęć, zamieszczanie komentarzy itp.', 'allow_user_registration', '0'), 
  array('Jak się zarejestrować?', 'Przejdź do sekcji &quot;Rejestracja&quot; i wypełnij wymagane pola (ew. także pola opcjonalne).<br />Jeżeli Administrator włączył opcję aktywacji przez e-mail, po wypełnieniu formularza rejestracji, na podany tam adres pocztowy otrzymasz e-mail zawierający instrukcje w jaki sposób aktywować konto. Aktywacja jest wymagana przed pierwszym załogowaniem.', 'allow_user_registration', '1'), 
  array('Jak się logować?', 'Przejdź do sekcji &quot;Logowanie&quot;, Wprowadź swoją nazwę użytkownika i hasło. Możesz także wybrać opcję &quot;Pamiętaj mnie&quot; abyś nie musiał logować się przy ponownym wejściu na stronę.<br /><b>WAŻNE: aby ta funkcja serwisu działała należy włączyć obsługę plików cookie i nie kasować plików cookie generowanych przez serwis.</b>', 'offline', 0), 
  array('Dlaczego nie mogę się zalogować?', 'Czy zarejestrowałeś się już i kliknąłeś na łącze z wysłanego do Ciebie e-mail\'a? Łącze to pozwoli na aktywowanie Twojego konta. W przypadku innych kłopotów skontaktuj się z administratorem serwisu.', 'offline', 0), 
  array('Co mam zrobić jeżeli zapomnę hasła?', 'Jeżeli serwis udostępnia link &quot;Zapomniałem hasła&quot;, użyj go. W innym wypadku skontaktuj się z administratorem i poproś go o nowe hasło.', 'offline', 0), 
  //array('Co mam zrobić, jeżeli zmienił mi się adres e-mail?', 'Zaloguj się i zmień swój e-mail w &quot;Profilu&quot;', 'offline', 0), 
  array('Jak zapisać plik do &quot;Moich ulubionych&quot;?', 'Kliknij na pliku, a następnie na łączu &quot;informacji o zdjęciu&quot; (<img src="images/info.gif" width="16" height="16" border="0" alt="Picture information" />); przejdź na dół i kliknij &quot;Dodaj do ulubionych&quot;.<br />Możliwe, że administrator włączył opcję domyślnego pokazywania informacji o pliku.<br />WAŻNE: Należy włączyć obsługę plików cookie z tego serwisu i nie kasować ich.', 'offline', 0), 
  array('Jak ocenić plik?', 'Kliknij na miniaturze, przejdź na dół strony i wybierz odpowiednią ocenę.', 'offline', 0), 
  array('Jak zamieścić komentarz do pliku?', 'Kliknij na miniaturze, przejdź na dół i w odpowiednim polu wpisz komentarz.', 'offline', 0), 
  array('Jak przesłać plik?', 'Przejdź do &quot;Przesyłania zdjęć&quot; i wybierz album do którego chcesz przesłać plik, kliknij &quot;Przeglądaj&quot; znajdź plik który chcesz przesłać, wybierz &quot;Otwórz&quot; (dodaj opis, jeżeli chcesz) i kliknij &quot;Prześlij&quot;', 'allow_private_albums', 0), 
  array('Gdzie mogę przesłać plik?', 'Pliki można przesyłać do jednego z albumów w Twojej Galerii. Administrator może także zezwolić Ci na przesyłanie zdjęć do albumów w Galerii Głównej.', 'allow_private_albums', 0), 
  array('Jakie pliki można przesyłać? W jakiej wielkości?', 'Typ i rodzaj przesyłanych plików (jpg, png, etc.) określa administrator serwisu.', 'offline', 0), 
  array('Co to jest &quot;Moja Galeria&quot;?', '&quot;Moja Galeria&quot; to prywatna galeria którą może zarządzać użytkownik. Możesz tam przesyłać swoje pliki.', 'allow_private_albums', 0), 
  array('W jaki sposób tworzyć, kasować i zmieniać nazwy albumów w &quot;Mojej Galerii&quot;?', 'Powinieneś przejść do &quot;Trybu Administracyjnego&quot;<br />Przejdź do &quot;Tworzenie/Porządkowanie albumów&quot;i kliknij &quot;Nowy&quot;. Zmień domyślną nazwę &quot;Nowy Album&quot; na wybraną przez siebie.<br />Możesz także modyfikować dowolny album ze swojej galerii.<br />Następnie kliknij &quot;Zastosuj zmiany&quot;.', 'allow_private_albums', 0), 
  array('W jaki sposób zezwalać i odbierać zezwolenia na oglądanie moich albumów?', 'Przejdź do &quot;Trybu Administracyjnego&quot;<br />i sekcji &quot;Modyfikuj moje albumy. Na pasku &quot;Aktualizuj Album&quot; wybierz album, który chcesz zmodyfikować. <br />Możesz zmienić jego nazwę, opis, miniaturę, ustawić zezwolenia na oglądanie i komentowanie/ocenianie jego zawartości.<br />Następnie kliknij &quot;Aktualizuj album&quot;.', 'allow_private_albums', 0), 
  array('Co zrobić by móc obejrzeć galerie innych użytkowników?', 'Przejdź do &quot;Listy Albumów&quot; i wybierz &quot;Galerie użytkowników&quot;.', 'allow_private_albums', 0), 
  array('Co to są pliki cookie?', 'Pliki cookie zawierają dane tekstowe zapisywane przez stronę internetową na Twoim komputerze. <br />Zazwyczaj pozwalają użytkownikowi opuścić stronę i wejść na nią ponownie bez konieczności ponownego logowania.', 'offline', 0), 
  array('Skąd mogę pobrać ten program aby umieścić go we własnym serwisie?', 'Galeria Coppermine jest darmową galerią multimediów, rozpowszechnianą na licencji GNU GPL. Zawiera rozbudowaną funkcjonalność i została przygotowana na różne platformy. Odwiedź <a href="http://coppermine.sf.net/">stronę domową Coppermine</a> by dowiedzieć się więcej i ściągnąć najnowszą wersję programu.', 'offline', 0), 


  'Nawigacja po stronie', 
  array('Co to jest &quot;Lista albumów&quot;?', 'Lista albumów pokazuje całą kategorię, w której obecnie się znajdujesz wraz z łączami do każdego albumu. Jeżeli nie znajdujesz się obecnie w żadnej kategorii, lista albumów wyświetli całą zawartość galerii wraz z łączami do kategorii, które zawiera. Miniatury mogą być także łączami do kategorii..', 'offline', 0), 
  array('Czym jest &quot;Moja Galeria&quot;?', 'Opcja ta umożliwia użytkownikowi serwisu tworzenie własnej galerii, dodawanie, kasowanie i modyfikowanie albumów, oraz przesyłanie do nich plików.', 'allow_private_albums', 0), 
  array('Czym różni się &quot;Tryb Administracyjny&quot; od &quot;Trybu użytkownika&quot;?', 'Tryb administracyjny umożliwia zarządzanie albumami znajdującymi się w Twojej prywatnej galerii (a także innymi albumami - jeżeli zezwolił na to administrator).', 'allow_private_albums', 0), 
  array('Co to jest &quot;Przesłanie pliku&quot;?', 'To możliwość przesłania pliku (jego rodzaj i wielkość są określone przez administratora) do wybranych albumów', 'allow_private_albums', 0), 
  array('Co to są &quot;Ostatnie aktualizacje&quot;?', 'Umożliwiają przejrzenie ostatnio dodanych do strony plików.', 'offline', 0), 
  array('Co to są &quot;Ostatnie komentarze&quot;?', 'Ta opcja pokazuje ostatnio dodane przez użytkowników komentarze, oraz pliki których dotyczą.', 'offline', 0), 
  array('Czym jest opcja What\'s &quot;Najpopularniejsze&quot;?', 'Opcja ta pokazuje najczęściej oglądane pliki (dotyczy wszystkich użytkowników - zarówno tych zalogowanych jak i niezalogowanych).', 'offline', 0), 
  array('Co to jest &quot;Top Lista&quot;?', 'Top lista zawiera listę najwyżej ocenianych plików wraz z ich średnią oceną (np. pięciu użytkowników głosuje z oceną <img src="images/rating3.gif" width="65" height="14" border="0" alt="" />: plikowi zostanie przyznana ocena <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> ;lub wśród pięciu innych użytkowników każdy daje plikowi ocenę od 1 do 5 (1,2,3,4,5) co spowoduje przyznanie plikowi średniej oceny <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> .)<br />Klasyfikacja przedstawia się następująco: od <img src="images/rating5.gif" width="65" height="14" border="0" alt="najlepsze" /> (najlepsze) do <img src="images/rating0.gif" width="65" height="14" border="0" alt="najgorsze" /> (najgorsze).', 'offline', 0), 
  array('Czym są &quot;Ulubione&quot;?', 'Ta opcja pozwala użytkownikowi przechowywać odnośniki do ulubionych plików z galerii w pliku cookie zapisywanym przez przeglądarkę.', 'offline', 0), 
);


// ------------------------------------------------------------------------- //
// File forgot_passwd.php
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) $lang_forgot_passwd_php = array(
  'forgot_passwd' => 'Przypomnienie hasła', 
  'err_already_logged_in' => 'Jesteś już zalogowany!', 
  'enter_username_email' => 'Podaj nazwę użytkownika lub adres e-mail', 
  'submit' => 'dalej', 
  'failed_sending_email' => 'E-mail z przypomnieniem hasła nie może zostać wysłany!', 
  'email_sent' => 'E-mail z nazwą użytkownika i hasłem został wysłany na adres %s', 
  'err_unk_user' => 'Wybrany użytkownik nie istnieje!', 
  'enter_email' => 'Podaj adres e-mail', //cpg1.4
  'illegal_session' => 'Nieprawidłowa lub wygasła sesja przypomnienia hasła.', //cpg1.4
  'email_sent' => 'E-mail z twoją nazwą użytkownika i nowym hasłem został wysłany na %s', //cpg1.4
  'verify_email_sent' => 'Na adres %s został wysłany e-mail. Odbierz go, aby zakończyć proces przypomnienia hasła.', //cpg1.4
  'account_verify_subject' => '%s - Żądanie nowego hasła', //cpg1.4
  'account_verify_body' => 'Poprosiłeś o nowe hasło. Jeśli chcesz kontynuować wysyłanie nowego hasła, kliknij na następujący link:

%s', //cpg1.4
  'passwd_reset_subject' => '%s - Twoje nowe hasło', //cpg1.4
  'passwd_reset_body' => 'Oto twoje nowe hasło:
Użytkownik: %s
Hasło: %s
Kliknij %s aby się zalogować.', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
  'confirm_del' => 'Uwaga: jeżeli skasujesz tę grupę jej członkowie zostaną przeniesieni do grupy \'Zarejestrowani\'!\n\nKontynuować?',
  'title' => 'Zarządzanie grupami',
  'group_name' => 'Grupa', //cpg1.4
  'permissions' => 'Prawa', //cpg1.4
  'public_albums' => 'Albumy publiczne', //cpg1.4
  'personal_gallery' => 'Galeria osobista', //cpg1.4
  'upload_method' => 'Sposób przesyłania plików', //cpg1.4
  'disk_quota' => 'Quota', //cpg1.4
  'rating' => 'Ranking', //cpg1.4
  'ecards' => 'E-kartki', //cpg1.4
  'comments' => 'Komentarze', //cpg1.4
  'allowed' => 'Dozwolone', //cpg1.4
  'approval' => 'Akceptacja', //cpg1.4
  'boxes_number' => 'Ilość pól', //cpg1.4
  'variable' => 'zmienne', //cpg1.4
  'fixed' => 'stałe', //cpg1.4
  'apply' => 'Zastosuj zmiany',
  'create_new_group' => 'Utwórz nową grupę',
  'del_groups' => 'Skasuj wybrane grupy',
  'num_file_upload' => 'Ilość pól przesyłania plików', //cpg1.4
  'num_URI_upload' => 'Ilość pól przesyłania URI', //cpg1.4
  'reset_to_default' => 'Skasuj do nazwy domyślnej (%s) - zalecane!', //cpg1.4
  'error_group_empty' => 'Tabela grup była pusta!<br /><br />Utworzono domyślne grupy, odśwież stronę', //cpg1.4
  'explain_greyed_out_title' => 'Dlaczego ten rząd jest szary?', //cpg1.4
  'explain_guests_greyed_out_text' => 'Nie możesz zmieniać ustawień tej grupy ponieważ ustawiłeś opcję &quot; Zezwól niezalogowanym użytkownikom na dostęp&quot; do &quot;Nie&quot; na stronie konfiguracyjnej. Wszyscy użytkownicy grupy %s nie mogą zrobić nic innego poza zalogowaniem się, dlatego też ustawienia grupy ich nie dotyczą.', //cpg1.4
  'explain_banned_greyed_out_text' => 'Nie możesz zmienić ustawień grupy %s ponieważ jej członkowie nie mogą nic robić.', //cpg1.4
  'group_assigned_album' => 'przydzielone albumy', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //


if (defined('INDEX_PHP')){

$lang_index_php = array(
  'welcome' => 'Witaj !',
);

$lang_album_admin_menu = array(
  'confirm_delete' => 'Czy na pewno chcesz skasować ten album? \\nZostaną skasowane również wszystkie pliki i komentarze.', //js-alert 
  'delete' => 'KASUJ',
  'modify' => 'WŁAŚCIWOŚCI',
  'edit_pics' => 'EDYCJA PLIKÓW', 
);

$lang_list_categories = array(
  'home' => 'Strona główna',
  'stat1' => 'pliki: <b>[pictures]</b>, albumy: <b>[albums]</b>, kategorie: <b>[cat]</b>, komentarze: <b>[comments]</b>, odsłony: <b>[views]</b>', 
  'stat2' => 'pliki: <b>[pictures]</b>, albumy: <b>[albums]</b>, odsłony: <b>[views]</b>', 
  'xx_s_gallery' => 'galeria %s', 
  'stat3' => 'pliki: <b>[pictures]</b>, albumy: <b>[albums]</b>, komentarze: <b>[comments]</b>, odsłony: <b>[views]</b>', 
);

$lang_list_users = array(
  'user_list' => 'Lista użytkowników',
  'no_user_gal' => 'Galerie użytkowników nie istnieją lub nie masz do nich dostępu',
  'n_albums' => 'albumów: %s',
  'n_pics' => 'plików: %s',  
);

$lang_list_albums = array(
  'n_pictures' => 'plików: %s', 
  'last_added' => ', ostatnio dodany: %s',
  'n_link_pictures' => 'podpiętych plików: %s', //cpg1.4
  'total_pictures' => 'plików w sumie: %s', //cpg1.4
);

}

// ------------------------------------------------------------------------- //
// File keywordmgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('KEYWORDMGR_PHP')) $lang_keywordmgr_php = array(
  'title' => 'Zarządzaj słowami kluczowymi', //cpg1.4
  'edit' => 'edytuj', //cpg1.4
  'delete' => 'usuń', //cpg1.4
  'search' => 'szukaj', //cpg1.4
  'keyword_test_search' => 'szukaj %s w nowym oknie', //cpg1.4
  'keyword_del' => 'usuńsłowo kluczowe %s', //cpg1.4
  'confirm_delete' => 'Na pewno usunąć słowo kluczowe %s z całej galerii?', //cpg1.4  // js-alert
  'change_keyword' => 'zmień słowo kluczowe', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
  'login' => 'Logowanie',
  'enter_login_pswd' => 'Podaj nazwę użytkownika i hasło aby się zalogować',
  'username' => 'Nazwa użytkownika',
  'password' => 'Hasło',
  'remember_me' => 'Pamiętaj mnie',
  'welcome' => 'Witaj %s ...',
  'err_login' => '*** Logowanie nieudane, spróbuj ponownie ***',
  'err_already_logged_in' => 'Jesteś już zalogowany/a!',
  'forgot_password_link' => 'Zapomniałem hasła', 
  'cookie_warning' => 'Twoja przeglądarka nie akceptuje ciasteczek', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
  'logout' => 'Wylogowywanie',
  'bye' => 'Pa pa %s ...',
  'err_not_loged_in' => 'Nie jesteś zalogowany/a!',
);

// ------------------------------------------------------------------------- //
// File minibrowser.php  //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('MINIBROWSER_PHP')) $lang_minibrowser_php = array(
  'close' => 'zamknij', //cpg1.4
  'submit' => 'OK', //cpg1.4
  'up' => 'jeden poziom w górę', //cpg1.4
  'current_path' => 'bieżąca ścieżka', //cpg1.4
  'select_directory' => 'wybierz katalog', //cpg1.4
  'click_to_close' => 'Kliknij zdjęcie aby zamknąć okienko',
);

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
  'upd_alb_n' => 'Uaktualnij album %s',
  'general_settings' => 'Ustawienia ogólne',
  'alb_title' => 'Tytuł albumu',
  'alb_cat' => 'Kategoria albumu',
  'alb_desc' => 'Opis albumu',
  'alb_thumb' => 'Miniatury',
  'alb_perm' => 'Uprawnienia albumu',
  'can_view' => 'Może być oglądany przez',
  'can_upload' => 'Goście mogą przesyłać pliki',
  'can_post_comments' => 'Goście mogą dodawać komentarze',
  'can_rate' => 'Goście mogą oceniać pliki',
  'user_gal' => 'Galeria użytkownika',
  'no_cat' => '* Bez kategorii *',
  'alb_empty' => 'Album jest pusty',
  'last_uploaded' => 'Ostatnio przesłane',
  'public_alb' => 'Wszyscy (album publiczny)',
  'me_only' => 'Tylko ja',
  'owner_only' => 'Tylko właściciel albumu: (%s)',
  'groupp_only' => 'Członkowie grupy: \'%s\'',
  'err_no_alb_to_modify' => 'Nie można modyfikować żadnego albumu w bazie.',
  'update' => 'Uaktualnij album', 
  'notice1' => '(*) w zależności od ustawień %sgrupy%',
  'alb_keyword' => 'Słowa kluczowe albumu', //cpg1.4
  'reset_album' => 'Skasuj album album', //cpg1.4
  'reset_views' => 'Skasuj licznik odsłon do &quot;0&quot; w %s', //cpg1.4
  'reset_rating' => 'Skasuj ranking wszystkich plików w %s', //cpg1.4
  'delete_comments' => 'Skasuj wszystkie komentarze w %s', //cpg1.4
  'delete_files' => '%sNieodwracalnie%s usuń wszystkie pliki w %s', //cpg1.4
  'views' => 'odsłon', //cpg1.4
  'votes' => 'głosów', //cpg1.4
  'comments' => 'komentarzy', //cpg1.4
  'files' => 'plików', //cpg1.4
  'submit_reset' => 'zatwierdź zmiany', //cpg1.4
  'reset_views_confirm' => 'na pewno', //cpg1.4
  'alb_password' => 'Hasło albumu', //cpg1.4
  'alb_password_hint' => 'Podpowiedź hasła albumu', //cpg1.4
  'edit_files' =>'Edytuj pliki', //cpg1.4
  'parent_category' =>'Katalog nadrzędny', //cpg1.4
  'thumbnail_view' =>'Widok miniaturek', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File phpinfo.php
// ------------------------------------------------------------------------- //

if (defined('PHPINFO_PHP')) $lang_phpinfo_php = array(
  'php_info' => 'PHP info', 
  'explanation' => 'Dane generowane przez funkcję <a href="http://www.php.net/phpinfo">phpinfo()</a>, wyświetlane przez Coppermine (obcinanie wyjścia przy prawym rogu).', 
  'no_link' => 'Oglądanie tych informacji przez osoby nieuprawnione może stanowić zagrożenie bezpieczeństwa, dlatego też stronę tę można oglądać tylko po zalogowaniu się jako administrator. Nie możesz podać łącza do tej strony innym użytkownikom, nie uzyskają oni dostępu do strony.', 
);

// ------------------------------------------------------------------------- //
// File picmgr.php //cpg1.4
// ------------------------------------------------------------------------- //
if (defined('PICMGR_PHP')) $lang_picmgr_php = array(
  'pic_mgr' => 'Menedżer zdjęć', //cpg1.4
  'select_album' => 'Wybierz album', //cpg1.4
  'delete' => 'Usuń', //cpg1.4
  'confirm_delete1' => 'Na pewno usunąć to zdjęcie?', //cpg1.4
  'confirm_delete2' => '\nZdjęcie będzie nieodwracalnie usunięte.', //cpg1.4
  'apply_modifs' => 'Zastosuj zmiany', //cpg1.4
  'confirm_modifs' => 'Zatwierdź zmiany', //cpg1.4
  'pic_need_name' => 'Zdjęcie musi mieć nazwę!', //cpg1.4
  'no_change' => 'Nie zrobiłeś żadnych zmian!', //cpg1.4
  'no_album' => '* Brak albumu *', //cpg1.4
  'explanation_header' => 'Sposób sortowania, który ustawiłeś na tej stronie będzie brany pod uwagę, jeśli', //cpg1.4
  'explanation1' => ' administrator ustawił "Domyślny sposób sortowania plików" w konfiguracji na "według pozycji" (ustawienia globalne dla wszystkich użytkowników, którzy nie wybrali sami innego sposobu sortowania)', //cpg1.4
  'explanation2' => 'użytkownik wybrał "według pozycji" na stronie miniaturek (dla ustawień użytkownika)', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File pluginmgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('PLUGINMGR_PHP')){

$lang_pluginmgr_php = array(
  'confirm_uninstall' => 'Na pewno ODINSTALOWAĆ ten plugin?', //cpg1.4
  'confirm_delete' => 'Na pewno USUNĄĆ ten plugin?', //cpg1.4
  'pmgr' => 'Menedżer pluginów', //cpg1.4
  'name' => 'Nazwa', //cpg1.4
  'author' => 'Autor', //cpg1.4
  'desc' => 'Opis', //cpg1.4
  'vers' => 'v', //cpg1.4
  'i_plugins' => 'Pluginy zainstalowane', //cpg1.4
  'n_plugins' => 'Pluginy nie zainstalowane', //cpg1.4
  'none_installed' => 'Nie zainstalowany', //cpg1.4
  'operation' => 'Operacja', //cpg1.4
  'not_plugin_package' => 'Przesłany plik nie jest plikiem pluginu.', //cpg1.4
  'copy_error' => 'Podczas kopiowania pluginu do katalogu wystąpił błąd.', //cpg1.4
  'upload' => 'Prześlij', //cpg1.4
  'configure_plugin' => 'konfiguruj plugin', //cpg1.4
  'cleanup_plugin' => 'Wyczyść plugin', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
  'already_rated' => 'Niestety, już oceniałeś ten plik', 
  'rate_ok' => 'Twój głos został zarejestrowany',
  'forbidden' => 'Nie możesz oceniać swoich własnych plików.', 
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
Administratorzy serwisu {SITE_NAME} dokładają wszelkich starań by usuwać lub zmieniać publikowane przez użytkowników treści ogólnie przyjęte za obraźliwe, łamiące prawo, lub obsceniczne, jest jednak niemożliwe by przejrzeć każdy post. Dlatego musisz zobowiązać się, że wszelkie opinie, materiały i komentarze jakie zamieścisz na stronach serwisu reprezentują wyłącznie Twoje poglądy, a nie poglądy osób zarządzających serwisem.<br />
<br />
Niniejszym zobowiązujesz się, by nie zamieszczać na stronach serwisu {SITE_NAME} materiałów obraźliwych, obscenicznych, wulgarnych, pornograficznych, nawołujących do użycia przemocy, stanowiących zagrożenie dla bezpieczeństwa publicznego, oraz innych materiałów, których przedstawienie na stronach serwisu mogłoby stanowić złamanie obowiązującego prawa. Przyjmujesz do wiadomości, że administrator lub moderatorzy serwisu {SITE_NAME} mają prawo do edycji i usuwania dowolnych zamieszczonych przez Ciebie treści niezgodnych z tym regulaminem. Jako użytkownik serwisu zgadzasz się na przechowywanie informacji niezbędnych do obsługi Twojego konta w bazie danych serwisu, oraz otrzymujesz prawo do ich modyfikacji oraz usunięcia w dowolnej chwili. W tym celu należy skontaktować się z administratorem serwisu. Informacje te nie będą przekazywane osobom trzecim bez Twojej zgody, jednakże administratorzy serwisu nie mogą ponoszą odpowiedzialności za kradzież tych informacji w wypadku działań osób nieuprawnionych.<br />
<br />
Serwis {SITE_NAME} używa plików cookie do przechowywania informacji na Twoim komputerze. Służą one jedynie do poprawienia komfortu przeglądania zawartości serwisu. Twój adres e-mail jest używany jedynie do wysyłania potwierdzeń dotyczących rejestracji w serwisie. <br />
<br />
Kliknięcie znajdującego się poniżej przycisku 'Zgadzam się' oznacza zgodę na przedstawiony wyżej regulamin serwisu.
EOT;

$lang_register_php = array(
  'page_title' => 'Rejestrowanie użytkownika',
  'term_cond' => 'Warunki korzystania z serwisu',
  'i_agree' => 'Zgadzam się',
  'submit' => 'Wykonaj rejestrację',
  'err_user_exists' => 'Nazwa użytkownika którą wybrałeś już istnieje. Wybierz inną',
  'err_password_mismatch' => 'Hasła nie pasują do siebie. Wpisz je ponownie',
  'err_uname_short' => 'Nazwa użytkownika musi mieć co najmniej 2 znaki',
  'err_password_short' => 'Hasło musi mieć co najmniej 2 znaki',
  'err_uname_pass_diff' => 'Nazwa użytkownika i hasło muszą się od siebie różnić',
  'err_invalid_email' => 'Adres e-mail jest niepoprawny',
  'err_duplicate_email' => 'W bazie jest już użytkownik o podanym przez Ciebie adresie e-mail',
  'enter_info' => 'Wprowadź informacje potrzebne do rejestracji',
  'required_info' => 'Informacje wymagane',
  'optional_info' => 'Informacje opcjonalne',
  'username' => 'Nazwa użytkownika',
  'password' => 'Hasło',
  'password_again' => 'Wprowadź ponownie hasło',
  'email' => 'E-mail',
  'location' => 'Lokalizacja',
  'interests' => 'Zainteresowania',
  'website' => 'Strona domowa',
  'occupation' => 'Zajęcie / zawód',
  'error' => 'BŁĄD',
  'confirm_email_subject' => '%s - Informacja o rejestracji',
  'information' => 'Informacja',
  'failed_sending_email' => 'E-mail z potwierdzeniem nie może być wysłany!',
  'thank_you' => 'Dziękujemy za rejestrację.<br /><br />Na podany przez Ciebie adres e-mail został wysłany list z prośbą o potwierdzenie.',
  'acct_created' => 'Konto zostało utworzone. Możesz już zalogować się podając wybraną wczesniej nazwę użytkownika, oraz hasło',
  'acct_active' => 'Konto jest już aktywne. Możesz już zalogować się podając wybraną wczesniej nazwę użytkownika, oraz hasło',
  'acct_already_act' => 'Twoje konto zostało już aktywowane!',
  'acct_act_failed' => 'Te konto nie może być aktywowane!',
  'err_unk_user' => 'Podany użytkownik nie istnieje!',
  'x_s_profile' => 'profil: %s',
  'group' => 'Grupa',
  'reg_date' => 'Dołączył/a',
  'disk_usage' => 'Użyte miejsce',
  'change_pass' => 'Zmień hasło',
  'current_pass' => 'Bieżące hasło',
  'new_pass' => 'Nowe hasło',
  'new_pass_again' => 'Podaj ponownie nowe hasło',
  'err_curr_pass' => 'Bieżące hasło jest niepoprawne',
  'apply_modif' => 'Zastosuj zmiany',
  'change_pass' => 'Zmiań moje hasło',
  'update_success' => 'Twój profil został uaktualniony',
  'pass_chg_success' => 'Twoje hasło zostało zmienione',
  'pass_chg_error' => 'Twoje hasło nie zostało zmienione',
  'notify_admin_email_subject' => '%s - powiadomienie o rejestracji', 
  'notify_admin_email_body' => 'W galerii zarejestrował się nowy użytkownik o nazwie "%s"', 
  'last_uploads' => 'Ostatnio przesłane pliki.<br />Kliknij, aby obejrzeć wszystkie przesłane przez', //cpg1.4
  'last_comments' => 'Ostatnie komentarze.<br />Kliknij, aby obejrzeć wszystkie komentarze napisane przez', //cpg1.4
  'pic_count' => 'Przesłanych plików', //cpg1.4
  'notify_admin_request_email_subject' => '%s - Prośba o rejestrację', //cpg1.4
  'thank_you_admin_activation' => 'Dziękuję.<br /><br />Twoja prośba o aktywację konta została wysłana do administratora. Po akceptacji otrzymasz e-mail.', //cpg1.4
  'acct_active_admin_activation' => 'Konto jest już aktywne, a do użytkownika został wysłany e-mail.', //cpg1.4
  'notify_user_email_subject' => '%s - Powiadomienie o aktywacji', //cpg1.4
);

$lang_register_confirm_email = <<<EOT
Dziękujemy za rejestrację na {SITE_NAME}

Aby aktywować swoje konto z nazwą użytkownika "{USER_NAME}", musisz kliknąć na link poniżej, lub skopiować go i wkleic do okienka przeglądarki.

<a href="{ACT_LINK}">{ACT_LINK}</a>

Pozdrowienia,

Ekipa {SITE_NAME}
EOT;


$lang_register_approve_email = <<<EOT
Nowy użytkownik o nazwie "{USER_NAME}" zarejestrował się w twojej galerii.

W celu aktywacji konta, musisz kliknąć na link poniżej, lub skopiować go i wkleić w okienko przeglądarki.

<a href="{ACT_LINK}">{ACT_LINK}</a>

EOT;

$lang_register_activated_email = <<<EOT
Twoje konto zostalo zaakceptowane i aktywowane.

Możesz teraz się zalogować w <a href="{SITE_LINK}">{SITE_LINK}</a> używając nazwy "{USER_NAME}"

pozdrowienia,

Ekipa {SITE_NAME}

EOT;
}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
  'title' => 'Przeglądaj komentarze',
  'no_comment' => 'Nie ma komentarzy do przeglądania',
  'n_comm_del' => 'Skasowano komentarzy: %s',
  'n_comm_disp' => 'Ilość komentarzy do wyświetlenia',
  'see_prev' => 'Zobacz poprzednie',
  'see_next' => 'Zobacz następne',
  'del_comm' => 'Skasuj wybrane komentarze',
  'user_name' => 'Nazwa', //cpg1.4
  'date' => 'Data', //cpg1.4
  'comment' => 'Komentarz', //cpg1.4
  'file' => 'Plik', //cpg1.4
  'name_a' => 'Nazwa użytkownika rosnąco', //cpg1.4
  'name_d' => 'Nazwa użytkownika malejąco', //cpg1.4
  'date_a' => 'Data roznąco', //cpg1.4
  'date_d' => 'Data malejąco', //cpg1.4
  'comment_a' => 'Komentarze rosnąco', //cpg1.4
  'comment_d' => 'Komentarze malejąco', //cpg1.4
  'file_a' => 'Pliki rosnąco', //cpg1.4
  'file_d' => 'Pliki malejąco', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File search.php                                                           //
// ------------------------------------------------------------------------- //


if (defined('SEARCH_PHP')){

$lang_search_php = array(
  'title' => 'Szukaj zbioru plików', //cpg1.4
  'submit_search' => 'szukaj', //cpg1.4
  'keyword_list_title' => 'Lista słów kluczowych', //cpg1.4
  'keyword_msg' => 'Powyższa lista nie jest kompletna. Nie zawiera słów z tytułów zdjęć i opisów. Spróbuj wpisać pełny tekst.',  //cpg1.4
  'edit_keywords' => 'Edytuj słowa kluczowe', //cpg1.4
  'search in' => 'Szukaj w:', //cpg1.4
  'ip_address' => 'Adres IP', //cpg1.4
  'fields' => 'Szukaj w', //cpg1.4
  'age' => 'Wiek', //cpg1.4
  'newer_than' => 'Nowsze niż', //cpg1.4
  'older_than' => 'Starsze niż', //cpg1.4
  'days' => 'dni', //cpg1.4
  'all_words' => 'Dopasuj wszystkie wyrazy (AND)', //cpg1.4
  'any_words' => 'Dopasuj którykolwiek wyraz (OR)', //cpg1.4
);

$lang_adv_opts = array(
  'title' => 'Tytuł', //cpg1.4
  'caption' => 'Nazwa', //cpg1.4
  'keywords' => 'Słowa kluczowe', //cpg1.4
  'owner_name' => 'Nazwa użytkownika', //cpg1.4
  'filename' => 'Nazwa pliku', //cpg1.4
);

}

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
  'page_title' => 'Szukaj plików', 
  'select_dir' => 'Wybierz katalog',
  'select_dir_msg' => 'Wybrana funkcja umożliwia wsadowe dodawanie do galerii zdjęć które zostały przesłane na serwer.<br /><br />Wybierz katalog do którego zostały przesłane wybrane pliki', 
  'no_pic_to_add' => 'Nie ma pliku do dodania', 
  'need_one_album' => 'Użycie tej funckji wymaga istnienia przynajmniej jednego albumu do którego masz uprawnienia',
  'warning' => 'Uwaga',
  'change_perm' => 'skrypt nie może zapisywać plików do wybranego katalogu. Zmień ustawienia na 755 lub 777 zanim spróbujesz dodać pliki!', 
  'target_album' => '<b>Zapisuje zdjęcia do katalogu &quot;</b>%s<b>&quot; </b>%s', 
  'folder' => 'Katalog',
  'image' => 'plik',
  'album' => 'Album',
  'result' => 'Wynik',
  'dir_ro' => 'Nie można zapisać. ',
  'dir_cant_read' => 'Nie można odczytać. ',
  'insert' => 'Dodawanie nowych plików do galerii', 
  'list_new_pic' => 'Lista nowych plików', 
  'insert_selected' => 'Wstaw wybrane pliki', 
  'no_pic_found' => 'Nie znaleziono nowych plików', 
  'be_patient' => 'Proszę o cierpliwość, skrypt potrzebuje czasu na dodanie zdjęć', 
  'no_album' => 'nie wybrano albumu',  
  'notes' =>  '<ul>'.
  '<li><b>OK</b> : oznacza, że zdjęcie zostało dodane'.
  '<li><b>DP</b> : oznacza, że zdjęcie jest zduplikowane i istnieje już w bazie'.
  '<li><b>PB</b> : oznacza brak możliwości dodania pliku. Sprawdź swoje uprawnienia do zapisywania katalogów i plików'.
  '<li><b>NA</b> : oznacza, że nie wybrałeś albumu do którego miałyby trafić pliki, kliknij \'<a href="javascript:history.back(1)">tutaj</a>\' i wybierz album. Jeżeli nie masz jeszcze albumu, <a href="albmgr.php">utwórz tutaj nowy</a></li>'.
  '<li>Jeżeli \'znaki\' OK, DP, PB nie pojawiają się, kliknij na pliku aby otrzymać komunikat generowany przez PHP'.
  '<li>Jeżeli przeglądarka nie załadowała strony, wciśnij klawisz F5 aby ją odświeżyć'.
  '</ul>', 
  'select_album' => 'wybierz album', 
  'check_all' => 'Zaznacz wszystkie', 
  'uncheck_all' => 'Odznacz wszystkie', 
  'result_icon' => 'kliknij po szczegóły, albo żeby odświeżyć',  //cpg1.4
  'no_folders' => 'Wewnątrz "albumów" nie ma żadnych folderów. Upewnij się, że stworzyłeś przynajmniej jeden folder użytkownika wewnątrz folderu "albumy" i prześlij tam swoje pliki klientem FTP. Nie wolno ci przesyłać plików do folderów "userpics" ani "edit", są one zarezerwowane do przesyłania http i zastosowań wewnętrznych.', //cpg1.4
  'albums_no_category' => 'Albumy bez kategorii', //cpg1.4 // album pulldown mod, added by frogfoot
  'personal_albums' => '* Albumy osobiste', //cpg1.4 // album pulldown mod, added by frogfoot
  'browse_batch_add' => 'Interfejs przeglądania (zalecane)', //cpg1.4
  'edit_pics' => 'Edytuj pliki', //cpg1.4
  'edit_properties' => 'Ustawienia albumu', //cpg1.4
  'view_thumbs' => 'Widok miniatur', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File stat_details.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('STAT_DETAILS_PHP')) $lang_stat_details_php = array(
  'show_hide' => 'pokaż/ukryj tą kolumnę', //cpg1.4
  'vote' => 'Szczegóły głosowania', //cpg1.4
  'hits' => 'Szczegóły odsłon', //cpg1.4
  'stats' => 'Statystyki głosowania', //cpg1.4
  'sdate' => 'Data', //cpg1.4
  'rating' => 'Pozycja', //cpg1.4
  'search_phrase' => 'Szukana fraza', //cpg1.4
  'referer' => 'Przekazujący', //cpg1.4
  'browser' => 'Przeglądarka', //cpg1.4
  'os' => 'System operacyjny', //cpg1.4
  'ip' => 'IP', //cpg1.4
  'sort_by_xxx' => 'Sortuj wg %s', //cpg1.4
  'ascending' => 'rosnąco', //cpg1.4
  'descending' => 'malejąco', //cpg1.4
  'internal' => 'wewn.', //cpg1.4
  'close' => 'zamknij', //cpg1.4
  'hide_internal_referers' => 'ukryj wewnętrzne przekazy', //cpg1.4
  'date_display' => 'Data wyświetlenia', //cpg1.4
  'submit' => 'wyślij / odśwież', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File thumbnails.php
// ------------------------------------------------------------------------- //

// Void

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) $lang_upload_php = array(
  'title' => 'Upload file', 
  'custom_title' => 'Spersonalizowany formularz przesyłania', 
  'cust_instr_1' => 'Możesz wybrać własną liczbę pól służących do przesyłania plików, jednak nie zostanie pokazane ich więcej niż w limicie określonym poniżej.', 
  'cust_instr_2' => 'Personalizacja formularza', 
  'cust_instr_3' => 'Ilość pól przesyłania: %s', 
  'cust_instr_4' => 'Pola przesyłania URI/URL: %s', 
  'cust_instr_5' => 'Pola przesyłania URI/URL:', 
  'cust_instr_6' => 'Pola przesyłania plików:', 
  'cust_instr_7' => 'Podaj liczbę każdego z rodzajów pól przesyłania plików, jakich potrzebujesz. Następnie kliknij \'Dalej\'. ', 
  'reg_instr_1' => 'Nieudane tworzenie formularza.', 
  'reg_instr_2' => 'Możesz przesyłać pliki przy pomocy poniższych pól. Rozmiar plików przesyłanych na serwer nie może przekroczyć %s KB każdy. Pliki ZIP przesłane w sekcjach \'Przesłanie pliku\' oraz \'Przesłanie URI/URL\' pozostaną skompresowane.', 
  'reg_instr_3' => 'Jeżeli chcesz aby spakowane pliki zostały zdekompresowane, użyj pola przesyłania plików w sekcji \'Przesyłanie z rozpakowaniem ZIP\'', 
  'reg_instr_4' => 'Przy przesyłaniu plików w sekcji Przesyłania URI/URL, podaj całą ścieżkę do pliku, np: http://www.mojastrona.com/images/foto.jpg', 
  'reg_instr_5' => 'Po uzupełnieniu formularza, użyj przycisku \'Dalej\'.', 
  'reg_instr_6' => 'Przesyłanie z rozpakowaniem ZIP:', 
  'reg_instr_7' => 'Przesyłanie plików:', 
  'reg_instr_8' => 'Przesyłanie URI/URL:', 
  'error_report' => 'Raport błędów', 
  'error_instr' => 'Wystąpiły błędy przy następujących plikach:', 
  'file_name_url' => 'Nazwa pliku/URL', 
  'error_message' => 'Wiadomość błędu', 
  'no_post' => 'Plik nie został przesłany metodą POST.', 
  'forb_ext' => 'Zabronione rozszerzenie pliku.', 
  'exc_php_ini' => 'Przekroczono wielkość plku określoną w php.ini.', 
  'exc_file_size' => 'Przekroczono wielkość plku określoną w konfiguracji CPG.', 
  'partial_upload' => 'Udało się tylko częściowo przesłać plik.', 
  'no_upload' => 'Nie doszło do przesłania.', 
  'unknown_code' => 'Nieznany błąd przesyłania PHP.', 
  'no_temp_name' => 'Nie udało się przesłać pliku ze względu na brak tymczasowej nazwy.', 
  'no_file_size' => 'Plik nie zawiera danych lub jest uszkodzony', 
  'impossible' => 'Nie można przenieść pliku.', 
  'not_image' => 'Plik nie jest obrazem lub jest uszkodzony', 
  'not_GD' => 'Brak rozszerzenia GD.', 
  'pixel_allowance' => 'Przekroczono rozmiar podany w pikselach.', 
  'incorrect_prefix' => 'Niewłaściwy prefiks URI/URL', 
  'could_not_open_URI' => 'Nie można otworzyć URI.', 
  'unsafe_URI' => 'Nie można potwierdzić bezpieczeństwa.', 
  'meta_data_failure' => 'Błąd metadanych', 
  'http_401' => '401 - Brak dostępu', 
  'http_402' => '402 - Wymagana opłata', 
  'http_403' => '403 - Dostęp zabroniony', 
  'http_404' => '404 - Nie znaleziono', 
  'http_500' => '500 - Wewnętrzny błąd serwera', 
  'http_503' => '503 - Usługa niedostępna', 
  'MIME_extraction_failure' => 'nie można określić MIME.', 
  'MIME_type_unknown' => 'Nieznany typ MIME', 
  'cant_create_write' => 'Nie można stworzyć/zapisać pliku.', 
  'not_writable' => 'Nie można zapisać do pliku.', 
  'cant_read_URI' => 'Nie można czytać URI/URL', 
  'cant_open_write_file' => 'Nie można otworzyć pliku URI do zapisu.', 
  'cant_write_write_file' => 'Nie można zapisać pliku zapisywalnego URI.', 
  'cant_unzip' => 'Nie można zdekompresować.', 
  'unknown' => 'Nieznany błąd', 
  'succ' => 'Udane przesłanie', 
  'success' => 'Udane przesłanie plików: %s.', 
  'add' => 'Kliknij \'Continue\' by dodać pliki do albumów.', 
  'failure' => 'Nieudane przesłanie', 
  'f_info' => 'Informacja o pliku', 
  'no_place' => 'Poprzedni plik nie został umieszczony w albumie.', 
  'yes_place' => 'Poprzedni plik został umieszczony w albumie.', 
  'max_fsize' => 'Maksymalny rozmiar przesyłanego pliku to %s KB',
  'album' => 'Album',
  'picture' => 'Plik', 
  'pic_title' => 'Tytuł pliku', 
  'description' => 'Opis pliku', 
  'err_no_alb_uploadables' => 'Niestety, nie ma albumu do którego mógłbyś przesłać pliki', 
  'place_instr_1' => 'Proszę umieścić teraz pliki w albumach. Możesz teraz także wprowadzić stosowne informacje o każdym z plików.', 
  'place_instr_2' => 'Są jeszcze pliki wymagające umieszczenia. Proszę kliknąć \'Dalej\'.', 
  'process_complete' => 'Wszystkie pliki umieszczono w albumach.', 
  'keywords' => 'Słowa kluczowe (oddzielone spacjami)<br /><a href="#" onClick="return MM_openBrWindow(\'keyword_select.php\',\'selectKey\',\'width=250, height=400, scrollbars=yes,toolbar=no,status=yes,resizable=yes\')">Wstaw z listy</a>', //cpg1.4
  'keywords_sel' =>'Wybierz słowo kluczowe', //cpg1.4
  'albums_no_category' => 'Albumy bez kategorii', //cpg1.4. //album pulldown mod, added by frogfoot
  'personal_albums' => '* Albumy osobiste', //cpg1.4 //album pulldown mod, added by frogfoot
  'select_album' => 'Wybierz album', //cpg1.4 //album pulldown mod, added by frogfoot
  'close' => 'Zamknij', //cpg1.4
  'no_keywords' => 'Żadne słowa kluczowe nie są dostępne!', //cpg1.4
  'regenerate_dictionary' => 'Odśwież katalog', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
  'title' => 'Zarządzanie użytkownikami',
  'name_a' => 'Nazwa rosnąco',
  'name_d' => 'Nazwa malejąco',
  'group_a' => 'Grupa rosnąco',
  'group_d' => 'Grupa malejąco',
  'reg_a' => 'Data rej. rosnąco',
  'reg_d' => 'Data rej. malejąco',
  'pic_a' => 'Liczba plików rosnąco',
  'pic_d' => 'Liczba plików malejąco',
  'disku_a' => 'Użycie dysku rosnąco',
  'disku_d' => 'Użycie dysku malejąco',
  'lv_a' => 'Ostatnie wizyty rosnąco', 
  'lv_d' => 'Ostatnie wizyty malejąco', 
  'sort_by' => 'Posortuj użytkowników wg',
  'err_no_users' => 'Tabela użytkowników jest pusta!',
  'err_edit_self' => 'Nie możesz modyfikować swojego profilu. Aby to zrobić kliknij łącze \'Mój profil\'',
  'name' => 'Nazwa użytkownika',
  'group' => 'Grupa',
  'inactive' => 'Nieaktywny',
  'operations' => 'Operacje',
  'pictures' => 'Pliki', 
  'registered_on' => 'Zerejestrowano',
  'last_visit' => 'Ostatnia wizyta', 
  'u_user_on_p_pages' => 'użytkowników: %d na stronach: %d',
  'confirm_del' => 'Czy na pewno chcesz usunąć tego użytkownika? \\nWszystkie jego pliki i albumy zostaną automatycznie skasowane.', //js-alert 
  'mail' => 'E-MAIL',
  'err_unknown_user' => 'Wybrany użytkownik nie istnieje!',
  'modify_user' => 'Modyfikuj użytkownika',
  'notes' => 'Uwagi',
  'note_list' => '<li>Jeżeli nie chcesz zmieniać swojego ulubionego hasła teraz, zostaw pole "hasło" puste',
  'password' => 'Hasło',
  'user_active' => 'Użytkownik jest aktywny',
  'user_group' => 'Grupa użytkowników',
  'user_email' => 'Adres e-mail użytkownika',
  'user_web_site' => 'Strona sieci web użytkownika',
  'create_new_user' => 'Utwórz nowego użytkownika',
  'user_location' => 'Lokacja użytkownika',
  'user_interests' => 'Zainteresowania',
  'user_occupation' => 'Zajęcie',
  'latest_upload' => 'Ostatnio przesłane', 
  'never' => 'brak', 

  'memberlist' => 'Lista użytkowników', //cpg1.4
  'user_manager' => 'Menedżer użytkownika', //cpg1.4
  'edit' => 'Edytuj', //cpg1.4
  'with_selected' => 'Zaznaczone:', //cpg1.4
  'delete' => 'Usuń', //cpg1.4
  'delete_files_no' => 'zachowaj pliki publiczne (ale zmień na anonimowe)', //cpg1.4
  'delete_files_yes' => 'usuń pliki publiczne', //cpg1.4
  'delete_comments_no' => 'zachowaj komentarze (ale zmień na anonimowe)', //cpg1.4
  'delete_comments_yes' => 'usuń komentarze', //cpg1.4
  'activate' => 'Aktywuj', //cpg1.4
  'deactivate' => 'Dezaktywuj', //cpg1.4
  'reset_password' => 'Skasuj hasło', //cpg1.4
  'change_primary_membergroup' => 'Zmień grupę główną', //cpg1.4
  'add_secondary_membergroup' => 'Zmień grupę dodatkową', //cpg1.4
  'disk_space_used' => 'Użyta przestrzeń', //cpg1.4
  'disk_space_quota' => 'Quota', //cpg1.4
  'registered_on' => 'Rejestracja', //cpg1.4
  'modify_user' => 'Modify user',
  'user_profile1' => '$user_profile1', //cpg1.4
  'user_profile2' => '$user_profile2', //cpg1.4
  'user_profile3' => '$user_profile3', //cpg1.4
  'user_profile4' => '$user_profile4', //cpg1.4
  'user_profile5' => '$user_profile5', //cpg1.4
  'user_profile6' => '$user_profile6', //cpg1.4
  'search' => 'Szukaj użytkownika', //cpg1.4
  'submit' => 'wyślij', //cpg1.4
  'search_submit' => 'Szukaj!', //cpg1.4
  'search_result' => 'Szukaj dla: ', //cpg1.4
  'alert_no_selection' => 'Musisz wybrać przynajmniej jednego użytkownika!', //cpg1.4 //js-alert
  'password' => 'hasło', //cpg1.4
  'select_group' => 'Wybierz grupę', //cpg1.4
  'groups_alb_access' => 'Uprawnienia albumów według grup', //cpg1.4
  'album' => 'Album', //cpg1.4
  'category' => 'Kategoria', //cpg1.4
  'modify' => 'Zmodyfikować?', //cpg1.4
  'group_no_access' => 'Ta grupa nie ma specjalnych praw dostępu', //cpg1.4
  'notice' => 'Notki', //cpg1.4
  'group_can_access' => 'Album, do którego jedynie "%s" ma dostęp', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //


if (defined('UTIL_PHP')) {
$lang_util_desc_php = array(
'Aktualizuj tytuły z nazw plików', //cpg1.4
'Usuń tytuły', //cpg1.4
'Odbuduj miniaturki i przetworzone zdjęcia', //cpg1.4
'Usuń oryginały zamieniając je wersjami przetworzonymi', //cpg1.4
'Usuń oryginały albo zdjęcia pośrednie, aby zwolnić miejsce', //cpg1.4
'Usuń osierocone komentarze', //cpg1.4
'Odczytaj ponownie rozmiary plików (jeśli je edytowałeś ręcznie)', //cpg1.4
'Skasuj licznik odsłon', //cpg1.4
'Wyświetl phpinfo', //cpg1.4
'Zaktualizuj bazę danych', //cpg1.4
'Wyświetl pliki logów', //cpg1.4
);

$lang_util_php = array(
  'problem' => 'Problem', //cpg1.4
  'status' => 'Status', //cpg1.4
  'title' => 'Narzędzia administracyjne (Zmień rozmiar zdjęć)', 
  'what_it_does' => 'Do czego to służy', 
  'what_update_titles' => 'Uaktualnia tytuły nazwami plików', 
  'what_delete_title' => 'Kasuje tytuły', 
  'what_rebuild' => 'Odbudowuje miniatury i zdjęcia pośrednie', 
  'what_delete_originals' => 'Kasuje zdjęcia źródłowe, zastępując je zdjęciami o zmienionych wymiarach', 
  'file' => 'Plik', 
  'title_set_to' => 'tytuł', 
  'submit_form' => 'prześlij', 
  'updated_succesfully' => 'zaktualizowano', 
  'error_create' => 'BŁĄD tworzenia', 
  'continue' => 'Przetwarzaj więcej zdjęć', 
  'main_success' => 'Plik %s został ustawiony jako zdjęcie główne', 
  'error_rename' => 'Błąd przy zmiany nazwy z %s na %s', 
  'error_not_found' => 'Plik %s nie został znaleziony', 
  'back' => 'powrót na stronę główną', 
  'thumbs_wait' => 'Uaktualniam miniatury i/lub zdjęcia o zmienionych wymiarach, proszę czekać...', 
  'thumbs_continue_wait' => 'Trwa uaktualnianie miniatur i/lub zdjęć o zmienionych wymiarach...', 
  'titles_wait' => 'Uaktualnianie tytułów, proszę czekać...', 
  'delete_wait' => 'Kasowanie tytułów, proszę czekać...', 
  'replace_wait' => 'Kasowanie oryginałów i zamienianie ich na zdjęcia o zmienionych wymiarach..', 
  'instruction' => 'Szybkie instrukcje', 
  'instruction_action' => 'Wybierz akcję', 
  'instruction_parameter' => 'Ustaw parametry', 
  'instruction_album' => 'Wybierz album', 
  'instruction_press' => 'Naciśnij %s', 
  'update' => 'Uaktualnij miniatury i/lub zdjęcia o zmienionych wymiarach', 
  'update_what' => 'Do uaktualnienia', 
  'update_thumb' => 'Tylko miniatury', 
  'update_pic' => 'Tylko zdjęcia o zmienionych wymiarach', 
  'update_both' => 'Zarówno miniatury jak i zdjęcia o zmienionych rozmiarach', 
  'update_number' => 'Ilość przetworzonych zdjęć/kliknięcie', 
  'update_option' => '(Spróbuj zmniejszyć tę ilość, jeżeli zaobserwujesz problem z timeoutem)',
  'filename_title' => 'Nazwa pliku &rArr; Tytuł pliku', 
  'filename_how' => 'Jak modyfikować nazwę pliku', 
  'filename_remove' => 'Usuń rozszerzenie .jpg i zamień _ (podkreślenie) na spacje', 
  'filename_euro' => 'Zmienia 2003_11_23_13_20_20.jpg na 23/11/2003 13:20', 
  'filename_us' => 'Zmienia 2003_11_23_13_20_20.jpg na 11/23/2003 13:20',
  'filename_time' => 'Zmienia 2003_11_23_13_20_20.jpg na 13:20',
  'delete' => 'Kasowanie tytułów lub oryginalnych plików', 
  'delete_title' => 'Kasowanie tytułów plików', 
  'delete_original' => 'Skasuj oryginalne zdjęcia', 
  'delete_replace' => 'Kasuje oryginalne zdjęcia zastępując je zdjęciami zrewymiarowanymi', 
  'select_album' => 'Wybierz album',
  'orphan_comment' => 'znalezionych komentarzy do nieistniejących plików', 
  'delete' => 'Usuń', 
  'delete_all' => 'usuńwszystko', 
  'comment' => 'Komentarz: ', 
  'nonexist' => 'dołączony do nieistniejącego pliku # ', 
  'phpinfo' => 'Wyświetl phpinfo', 
  'update_db' => 'Aktualizacja bazy danych', 
  'update_db_explanation' => 'Jeżeli usunąłeś pliki coppermine, dodałeś jakąś modyfikację, lub dokonałeś aktualizacji poprzedniej wersji coppermine, uruchom jednorazowo aktualizację bazy danych. Stworzy ona niezbędne tabele i/lub ustawienia konfiguracyjne w bazie danych coppermine.', 
  'delete_original_explanation' => 'Usuń zdjęcia pełnowymiarowe.', //cpg1.4
  'delete_intermediate' => 'Usuń zdjęcia pośrednie', //cpg1.4
  'delete_intermediate_explanation' => 'Usuwa zdjęcia pośrednie (normal)<br />Dzięki temu zwolnisz miejsce na dysku, jeśli zablokowałeś opcje tworzenia zdjęć pośrednich w Konfiguracji.', //cpg1.4
  'titles_deleted' => 'Usunięta wszystkie ttyuły z  wybranego albumu', //cpg1.4
  'deleting_intermediates' => 'Usuwanie zdjęć pośrednich, proszę czekać...', //cpg1.4
  'searching_orphans' => 'Szukanie sierot, proszę czekać...', //cpg1.4
  'delete_orphans' => 'Usuń komentarze do brakujących plików', //cpg1.4
  'delete_orphans_explanation' => 'Odnajduje i pozwala usunąć komentarze związane z plikami, których już nie ma w galerii.<br />Sprawdza wszystkie albumy.', //cpg1.4
  'refresh_db' => 'Załaduj ponownie informacje o rozmiarach plików', //cpg1.4
  'refresh_db_explanation' => 'Ponownie odczytuje informacje o rozmiarach plików i zdjęć. Użyj tego narzędzia, jeśli informacje o quota są nieprawidłowe lub zmieniałeś pliki ręcznie.', //cpg1.4
  'reset_views' => 'Kasuj licznik odsłon', //cpg1.4
  'reset_views_explanation' => 'Kasuje wszystkie liczniki odsłon do zera w wybranym albumie.', //cpg1.4
  'delete_all_orphans' => 'Delete all orphans?', //cpg1.4
  'phpinfo_explanation' => 'Pokazuje informacje techniczne o twoim serwerze.<br /> - Możesz zostać zapytany o nie, kiedy będziesz wysyłał maila z prośbą o wsparcie.', //cpg1.4
  'view_log' => 'Zobacz pliki logów', //cpg1.4
  'view_log_explanation' => 'Coppermine może zapisywać różne działana podejmowane przez użytkowników. Możesz przeglądać te zapisy jeśli włączyłeś logowanie w  <a href="admin.php">konfiguracji galerii</a>.', //cpg1.4
  'versioncheck' => 'Sprawdź wersje', //cpg1.4
  'versioncheck_explanation' => 'Sprawdź wersje plików, dzięki czemu będziesz wiedział, czy po aktualizacji wszystkie pliki zostały prawidłowo podmienione, lub czy zaktualizowano jakieś pliki od momentu wypuszczenia bieżącej wersji.', //cpg1.4
  'bridgemanager' => 'Menedżer integracji', //cpg1.4
  'bridgemanager_explanation' => 'Włącz/wyłącz integrację (bridging) Coppermine z inną aplikacją (np z twoim BBS).', //cpg1.4
);

}

// ------------------------------------------------------------------------- //
// File versioncheck.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('VERSIONCHECK_PHP')) $lang_versioncheck_php = array(
  'title' => 'Kontrola wersji', //cpg1.4
  'what_it_does' => 'Strona jest przeznaczona dla użytkowników, którzy aktualizowali swoją instalację Coppermine. Skrypt sprawdza pliki na serwerze i określa, czy zainstalowane wersję są takie same, jak te w repozytor http://coppermine.sourceforge.net, czyli te, które powinieneś zaktualizować.<br />Wszytko, co należy poprawić będzie wyświetlone na czerwono. Pozycje wyświetlone na żółto wymagają sprawdzenia. Pozycje zielone są prawidłowe. <br />Kliknij na ikony pomocy, aby dowiedzieć się więcej.', //cpg1.4
  'online_repository_unable' => 'Nie udało sie połączyć z repozytorium', //cpg1.4
  'online_repository_noconnect' => 'Coppermine nie był w stanie połączyć się z repozytorium online. Mogło się tak stać z dwóch powodów:', //cpg1.4
  'online_repository_reason1' => 'repozytorium online jest chwilowo niedostępne - sprawdź, czy możesz otworzyć stronę: %s, jeśli nie, spróbuj ponownie później.', //cpg1.4
  'online_repository_reason2' => 'PHP na twoim serwerze jest skonfigurowane z wyłączonym %s (domyślnie powinno być włączone). Jeśli jesteś administratorem serwera włącz tą opcję w <i>php.ini</i> (lub przynajmniej pozwól na jej nadpisanie przez %s). Jeśli nie jesteś administratorem serwera, najprawdopobniej będziesz musiał żyć z faktem, że nie będziesz mógł sprawdzać wersji plików online. Na tej stronie będą wtedy wyświetlane jedynie informacje o plikach, które masz zainstalowane.', //cpg1.4
  'online_repository_skipped' => 'Pominięto łączenie do repozytorium online', //cpg1.4
  'online_repository_to_local' => 'Skrypt pobiera dane o wersjach lokalnych plików. Dane mogą być niedokładne, jeśli aktualizowałeś galerię i nie załadowałeś wszystkich plików. Zmiany w plikach po wypuszczeniu wersji oficjalnej również nie będą brane pod uwagę.', //cpg1.4
  'local_repository_unable' => 'Nie udało się połączyć z repozytorium na twoim serwerze', //cpg1.4
  'local_repository_explanation' => 'Coppermine nie był w stanie sprawdzić pliku %s  na twoim serwerze. Prawdopodobnie nie jest on tam obecny. Załaduj go tam teraz i odśwież tą stronę.<br />Jeśli skrypt ponownie nie będzie w stanie sprawdzić tego pliku, twój provider prawdopodobnie zablokował <a href="http://www.php.net/manual/en/ref.filesystem.php">funkcje systemu plików PHP</a>. W tym przypadku, niestety, nie będziesz mógł korzystać z tego narzędzia.', //cpg1.4
  'coppermine_version_header' => 'Zainstalowana wersja Coppermine', //cpg1.4
  'coppermine_version_info' => 'Obecnie masz zainstalowaną wersję: %s', //cpg1.4
  'coppermine_version_explanation' => 'Jeśli uważasz, że informacja ta jest nieprawidłowa i powinieneś używać wyższej wersji Coppermine, prawdopodobnie nie zainstalowałeś najnowszej wersji pliku <i>include/init.inc.php</i>', //cpg1.4
  'version_comparison' => 'Porównanie wersji', //cpg1.4
  'folder_file' => 'folder/plik', //cpg1.4
  'coppermine_version' => 'wersja cpg', //cpg1.4
  'file_version' => 'wersja pliku', //cpg1.4
  'webcvs' => 'cvs', //cpg1.4
  'writable' => 'zapisywalny', //cpg1.4
  'not_writable' => 'niezapisywalny', //cpg1.4
  'help' => 'Pomoc', //cpg1.4
  'help_file_not_exist_optional1' => 'plik/folder nie istnieje', //cpg1.4
  'help_file_not_exist_optional2' => 'Plik/folder %s nie został znaleziony na serwerze. Chociaż nie jest to wymagane, powinieneś go tam umieścić (używajć klienta FTP) jeśli galeria funkcjonuje nieprawidłowo.', //cpg1.4
  'help_file_not_exist_mandatory1' => 'plik/folder nie istnieje', //cpg1.4
  'help_file_not_exist_mandatory2' => 'Plik/folder %s nie został znaleziony na serwerze, choć jest on wymagany. Umieść go tam (uzywając klienta FTP).', //cpg1.4
  'help_no_local_version1' => 'Brak wersji pliku lokalnego', //cpg1.4
  'help_no_local_version2' => 'Nie udało się wyznaczyć wersji pliku lokalnego - jest on przestarzały, lub został zmodyfikowany przez usunięcie informacji w nagłówku. Zaleca się jego aktualizację.', //cpg1.4
  'help_local_version_outdated1' => 'Wersja lokalna przestarzała', //cpg1.4
  'help_local_version_outdated2' => 'Posiadany przez ciebie plik wydaje się pochodzić ze starszej wersji Coppermine (prawdopodbnie po aktualizacji). Upewnij się, że zauktualizowałeś również ten plik.', //cpg1.4
  'help_local_version_na1' => 'Nie udało się wyznaczyć wersji z cvs', //cpg1.4
  'help_local_version_na2' => 'Skrypt nie był w stanie oznaczyć wersji cvs pliku na twoim serwerze. Powinieneś załadować ten plik z pakietu.', //cpg1.4
  'help_local_version_dev1' => 'Wersja rozwojowa', //cpg1.4
  'help_local_version_dev2' => 'Plik na twoim serwerze wydaje się być nowszy, niż wersja Coppermine. Używasz pliku rozwojowego (powinieneś to robić jedynie, jeśli wiesz co robisz), albo zaktualizowałeś instalację Coppermine i nie załadowales pliku include/init.inc.php', //cpg1.4
  'help_not_writable1' => 'Folder niezapisywalny', //cpg1.4
  'help_not_writable2' => 'Zmień prawa dostępu (CHMOD) aby umożliwić skryptowi zapisywanie w folderze %s oraz jego zawartości.', //cpg1.4
  'help_writable1' => 'Folder zapisywalny', //cpg1.4
  'help_writable2' => 'Folder %s jest zapisywalny. To niepotrzebne ryzyko, Coppermine wymaga jedynie praw do odczytu i uruchamiania.', //cpg1.4
  'help_writable_undetermined' => 'Coppermine nie był w stanie określić praw dostępu do folderu.', //cpg1.4
  'your_file' => 'twój plik', //cpg1.4
  'reference_file' => 'plik odniesienia', //cpg1.4
  'summary' => 'Podsumowanie', //cpg1.4
  'total' => 'Ilość sprawdzonych plików/folderów', //cpg1.4
  'mandatory_files_missing' => 'Brakujące wymagane pliki', //cpg1.4
  'optional_files_missing' => 'Brakujące dodatkowe pliki', //cpg1.4
  'files_from_older_version' => 'Pliki pozostałe z przestarzałych wersji Coppermine', //cpg1.4
  'file_version_outdated' => 'Wersje przestarzałych plików', //cpg1.4
  'error_no_data' => 'Skrypt zrobił buu, nie był w stanie uzyskać żadnych informacji. Przepraszamy za niedogodność.', //cpg1.4
  'go_to_webcvs' => 'przejdź do %s', //cpg1.4
  'options' => 'Opcje', //cpg1.4
  'show_optional_files' => 'Pokaż dodatkowe foldery/pliki', //cpg1.4
  'show_mandatory_files' => 'pokaż wymagane pliki', //cpg1.4
  'show_file_versions' => 'pokaż wersje plików', //cpg1.4
  'show_errors_only' => 'pokaż jedynie foldery/pliki z błędami', //cpg1.4
  'show_permissions' => 'pokaż prawa dostępu folderów', //cpg1.4
  'show_condensed_output' => 'pokaż kompaktowo (łatwiejsze zrzuty ekranu)', //cpg1.4
  'coppermine_in_webroot' => 'Coppermine jest zainstalowany w katalogu głównym', //cpg1.4
  'connect_online_repository' => 'spróbuj się połączyć z repozytorium online', //cpg1.4
  'show_additional_information' => 'pokaż dodatkowe informacje', //cpg1.4
  'no_webcvs_link' => 'nie pokazuj linku cvs', //cpg1.4
  'stable_webcvs_link' => 'pokaż linki cvs do wersji stabilnych', //cpg1.4
  'devel_webcvs_link' => 'pokaż linki cvs do wersji rozwojowych', //cpg1.4
  'submit' => 'zastosuj zmiany / odśwież', //cpg1.4
  'reset_to_defaults' => 'ustaw wartość domyślną', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File view_log.php  //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('VIEWLOG_PHP')) $lang_viewlog_php = array(
  'delete_all' => 'Usuń WSZYSTKIE logi', //cpg1.4
  'delete_this' => 'Usuń ten log', //cpg1.4
  'view_logs' => 'Zobacz logi', //cpg1.4
  'no_logs' => 'Brak utworzonych logów.', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File xp_publish.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('XP_PUBLISH_PHP')) {

$lang_xp_publish_client = <<<EOT
<h1>Kreator Klienta Publikacji XP</h1><p>Moduł ten pozwala używać kreatora publikacji <b>Windows XP</b> z galerią Coppermine.</p><p>Kod bazuje na artykule napisanym przez
EOT;

$lang_xp_publish_required = <<<EOT
<h2>Co jest wymagane</h2><ul><li>Windows XP, aby mieć kreatora.</li><li>Działająca instalacja Coppermine w której <b>działa prawidłowo funkcja przesyłania plików.</b></li></ul><h2>Jak zainstalować po stronie klienta</h2><ul><li>Kliknij prawym klawiszem myszy na
EOT;

$lang_xp_publish_select = <<<EOT
Wybierz &quot;zapisz plik docelowy jako..&quot;. Zapisz plik na twardym dysku. Zapisując plik, sprawdź, czy proponowaną nazwą pliku jest <b>cpg_###.reg</b> (### to numer wersji). Zmień ją na wymaganą nazwę (zostaw cyfry). Po załadowaniu, kliknij dwukrotnie na pliku aby zarejestrować swój serwer w kreatorze publikacji.</li></ul>
EOT;

$lang_xp_publish_testing = <<<EOT
<h2>Testowanie</h2><ul><li>W Eksploratorze Windows wybierz kilka plików i kliknij na <b>Publkuj xxx w sieci web</b> w panelu po lewej stronie.</li><li>Potwierdź swój wybrów plików. Kliknij na <b>Dalej</b>.</li><li>W liście serwisów wybierz swoją galerię (jest nazwana jak twoja galeria). Jeśli w liście nie ma twojej galerii, sprawdź czy zainstalowałeś <b>cpg_pub_wizard.reg</b> jak opisano powyżej.</li><li>Zaloguj się, jeśli to będzie wymagane.</li><li>Wybierz album docelowy, lub utwórz nowy.</li><li>Kliknij <b>dalej</b>. Rozpocznie się przesyłanie plików.</li><li>Kiedy się zakończy, sprawdź swoją galerię, czy zdjęcia zostały prawidłowo dodane.</li></ul>
EOT;

$lang_xp_publish_notes = <<<EOT
<h2>Uwagi :</h2><ul><li>Po rozpoczęciu przesyłania plików kreator nie może wyświetlić komunikatów błędów zwracanych przez skrypt, więc nie dowiesz się, czy przesyłanie się powiodło czy nie, dopóki nie sprawdzisz galerii.</li><li>Jeśli przesyłanie się nie powiodło, uruchom &quot;Tryb debugowania&quot; na stronie administracyjnej Coppermine, spróbuj przesłać jeden plik i sprawdź komunikaty błędu w
EOT;

$lang_xp_publish_flood = <<<EOT
pliku, który znajduje się w katalogu Coppermine na twoim serwerze.</li><li>Aby uniknąć <i>przepełnienia</i> galerii przez pliki przesyłane kreatorem, jedynie <b>administratorzy</b> oraz <b>użytkownicy posiadający własne galerie</b> mogą używać tego narzędzia.</li>
EOT;



$lang_xp_publish_php = array(
  'title' => 'Coppermine - Kreator Publikacji XP', //cpg1.4
  'welcome' => 'Witaje <b>%s</b>,', //cpg1.4
  'need_login' => 'Zanim zaczniesz używać kreatora musisz się zalogowac do galerii.<p/><p>Po zalogowaniu nie zapomnij wybrać opcji <b>pamiętaj mnie</b> jeśli jest dostępna.', //cpg1.4
  'no_alb' => 'Niestety, nie ma albumu, do którego możesz przesyłać pliki używając kreatora.', //cpg1.4
  'upload' => 'Prześlij pliki do istniejącego albumu', //cpg1.4
  'create_new' => 'Utwórz nowy album na swoje pliki', //cpg1.4
  'album' => 'Album', //cpg1.4
  'category' => 'Kategoria', //cpg1.4
  'new_alb_created' => 'Twój nowy album &quot;<b>%s</b>&quot; został utworzony.', //cpg1.4
  'continue' => 'Naciśnij &quot;Dalej&quot; aby przesłać pliki', //cpg1.4
  'link' => 'ten link', //cpg1.4
);
}
?>