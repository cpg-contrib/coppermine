<?php
/*************************
Coppermine Photo Gallery
************************
Copyright (c) 2003-2010 Coppermine Dev Team
v1.0 originally written by Gregory Demar

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License version 3
as published by the Free Software Foundation.

********************************************
Coppermine version: 1.4.28
$HeadURL$
$Revision$
$Author$
$Date$
**********************************************/
// ------------------------------------------------------------------------- //
// $Id$
// ------------------------------------------------------------------------- //

$lang_translation_info = array(
  'lang_name_english' => 'Polish',
  'lang_name_native' => 'Polski',
  'lang_country_code' => 'pl',
  'trans_name'=> 'Radosław Pawłowski, Bartłomiej Szczudło, Jacek Domoń',
  'trans_email' => 'b.szczudlo@doomni.net',
  'trans_email2' => 'ilovemycity@tlen.pl',
  'trans_email3' => 'plusz@plusz.net',
  'trans_website' => 'http://www.toruniak.prv.pl',
  'trans_website2' => 'http://klugg.ath.cx',
  'trans_website3' => 'http://www.plusz.net',
  'trans_date' => '2005-12-15',
  'trans_date2' => '2006-01-30',
  'trans_date3' => '2006-06-16',
  );

$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('Bajtów', 'KB', 'MB');

// Day of weeks and months
$lang_day_of_week = array('Nd', 'Pn', 'Wt', 'Śr', 'Czw', 'Pt', 'Sob');
$lang_month = array('stycznia', 'lutego', 'marca', 'kwietnia', 'maja', 'czerwca', 'lipca', 'sierpnia', 'września', 'października', 'listopada', 'grudnia');

// Some common strings
$lang_yes = 'Tak';
$lang_no  = 'Nie';
$lang_back = 'Wstecz';
$lang_continue = 'Kontynuuj';
$lang_info = 'Informacje';
$lang_error = 'Błąd';
$lang_check_uncheck_all = 'Zaznacz/Odznacz wszystko'; //cpg1.4

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$album_date_fmt =    '%d %B %Y';
$lastcom_date_fmt =  '%d/%m/%y,  %H:%M';
$lastup_date_fmt = '%d %B %Y';
$register_date_fmt = '%d %B %Y';
$lasthit_date_fmt = '%d %B %Y, %H:%M';
$comment_date_fmt =  '%d %B %Y, %H:%M';
$log_date_fmt = '%d %B %Y, %H:%M'; //cpg1.4

// For the word censor
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'bitch*', 'c0ck', 
  'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 
  'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 
  'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 
  'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 
  'titty', 'twaty', 'wank*', 'whore', 'wop*',
  '*chuj*', '*jebi*', '*cipa', '*pierdol*', '*jeba*'
  );

$lang_meta_album_names = array(
  'random' => 'Losowo',
  'lastup' => 'Ostatnio dodane',
  'lastalb'=> 'Ostatnie albumy',
  'lastcom' => 'Komentarze',
  'topn' => 'Najczęściej oglądane',
  'toprated' => 'Najwyżej oceniane',
  'lasthits' => 'Ostatnio oglądane',
  'search' => 'Szukaj',
  'favpics'=> 'Ulubione',  //cpg1.4
);

$lang_errors = array(
  'access_denied' => 'Nie masz uprawnień aby oglądać tę stronę.',
  'perm_denied' => 'Nie masz uprawnień aby wykonać tę operację.',
  'param_missing' => 'Skrypt został wywołany bez wymaganego parametru.',
  'non_exist_ap' => 'Wybrany plik lub album nie istnieje!',
  'quota_exceeded' => 'Przekroczono limit miejsca. <br /><br />Twój przydział: [quota]K, Twoje pliki używają obecnie: [space]K. Dodanie wybranego pliku spowoduje przekroczenie limitu.', //cpg1.3.0
  'gd_file_type_err' => 'Jeżeli w użyciu jest biblioteka GD, dozwolone formaty zdjęć to wyłącznie JPEG i PNG.',
  'invalid_image' => 'Zdjęcie które przesłano nie może być obsłużone przez bibliotekę GD.',
  'resize_failed' => 'Nie można stworzyć miniatury lub zdjęcia pośredniego.',  
  'no_img_to_display' => 'Brak pliku do wyświetlenia',
  'non_exist_cat' => 'Wybrana kategoria nie istnieje',
  'orphan_cat' => 'Kategoria nie ma gałęzi nadrzędnej, uruchom menedżera kategorii aby rozwiązać ten problem.', //cpg1.3.0
  'directory_ro' => 'Katalog \'%s\' jest zabezpieczony przed zapisem. Pliki nie mogą być skasowane.', //cpg1.3.0
  'non_exist_comment' => 'Wybrany komentarz nie istnieje.',
  'pic_in_invalid_album' => 'Plik znajduje się w nieistniejącym albumie (%s)!?', //cpg1.3.0
  'banned' => 'Twój dostęp do strony jest obecnie zablokowany.',
  'not_with_udb' => 'Wybrana funkcja nie jest dostępna, ponieważ jest zintegrowana z oprogramowaniem forum. Czynność którą chcesz wykonać nie jest wspierana w tej konfiguracji, bądź powinna być obsłużona przez oprogramowanie forum.',
  'offline_title' => 'Offline', //cpg1.3.0
  'offline_text' => 'Galeria jest obecnie wyłączona - spróbuj ponownie później', //cpg1.3.0
  'ecards_empty' => 'Nie ma obecnie żadnych zapisów dotyczących e-kartek. Sprawdź, czy włączyłeś logowanie e-kartek w konfiguracji Coppermine!', //cpg1.3.0
  'action_failed' => 'Działanie nie powiodło się. Coppermine nie może przetworzyć Twojego żądania.', //cpg1.3.0
  'no_zip' => 'Biblioteki do obsługi archiwów ZIP nie są obecnie dostępne. Skontaktuj się z administratorem Coppermine.', //cpg1.3.0
  'zip_type' => 'Nie masz uprawnień by przesyłać archiwa ZIP.', //cpg1.3.0
  'database_query' => 'Wystąpił błąd podczas przetwarzania bazy danych', //cpg1.4
  'register_globals_on' => 'The PHP setting register_globals is enabled on your server, which is a bad idea in terms of security. It\'s strongly recommended to turn it off. [<a href="http://forum.coppermine-gallery.net/index.php/topic,59569.0.html" rel="external" class="external">more</a>]',
);

$lang_bbcode_help_title = 'Pomoc - bbcode'; //cpg1.4
$lang_bbcode_help = 'Możesz użyć następujących kodów: <li>[b]Pogrubienie[/b] =&gt; <b>Pogrubienie</b></li><li>[i]Kursywa[/i] =&gt; <i>Kursywa</i></li><li>[url=http://twojastrona.com/]Adres URL[/url] =&gt; <a href="http://twojastrona.com">Tekst URL</a></li><li>[email]uzytkownik@domena.com[/email] =&gt; <a href="mailto:uzytkownik@domena.com">uzytkownik@domena.com</a></li><li>[color=red]kolorowy tekst[/color] =&gt; <span style="color:red">kolorowy tekst</span></li><li>[img]http://coppermine-gallery.net/demo/cpg14x/images/red.gif[/img] => <img src="../images/red.gif" border="0" alt="" /></li>'; //cpg1.4

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
  'home_title' => 'Idź do strony głównej',
  'home_lnk' => 'Strona główna',
  'alb_list_title' => 'Idź do listy albumów',
  'alb_list_lnk' => 'Lista albumów',
  'my_gal_title' => 'Idź do Moje Albumy',
  'my_gal_lnk' => 'Moje albumy',
  'my_prof_title' => 'Przeglądaj swój profil', //cpg1.4
  'my_prof_lnk' => 'Mój profil',
  'adm_mode_title' => 'Przełącz do trybu Administratora',
  'adm_mode_lnk' => 'Tryb Administratora',
  'usr_mode_title' => 'Przełącz na tryb użytkownika',
  'usr_mode_lnk' => 'Tryb użytkownika',
  'upload_pic_title' => 'Dodaj pliki do albumów',
  'upload_pic_lnk' => 'Dodaj pliki',
  'register_title' => 'Utwórz nowe konto',
  'register_lnk' => 'Zarejestruj się',
  'login_title' => 'Zaloguj mnie', //cpg1.4
  'login_lnk' => 'Zaloguj się',
  'logout_title' => 'Wyloguj mnie', //cpg1.4
  'logout_lnk' => 'Wyloguj',
  'lastup_title' => 'Pokaż ostatnio dodane pliki', //cpg1.4
  'lastup_lnk' => 'Ostatnio przesłane',
  'lastcom_title' => 'Pokaż ostatnio dodane komentarze', //cpg1.4
  'lastcom_lnk' => 'Komentarze',
  'topn_title' => 'Pokaż najpopularniejsze pliki', //cpg1.4
  'topn_lnk' => 'Popularne',
  'toprated_title' => 'Pokaż najwyżej oceniane pliki', //cpg1.4
  'toprated_lnk' => 'Najlepiej oceniane',
  'search_title' => 'Przeszukaj galerię', //cpg1.4
  'search_lnk' => 'Szukaj',
  'fav_title' => 'Idź do ulubionych', //cpg1.4
  'fav_lnk' => 'Ulubione',
  'memberlist_title' => 'Członkowie galerii',
  'memberlist_lnk' => 'Członkowie galerii',
  'faq_title' => 'Najczęściej zadawane pytania w galerii &quot;Coppermine&quot;',
  'faq_lnk' => 'FAQ',
);

$lang_gallery_admin_menu = array(
  'upl_app_title' => 'Akceptuj przesłane pliki', //cpg1.4
  'upl_app_lnk' => 'Akceptuj przesłane pliki',
  'admin_title' => 'Ustawienia galerii', //cpg1.4
  'admin_lnk' => 'Ustawienia', //cpg1.4
  'albums_title' => 'Zarządzaj albumami', //cpg1.4
  'albums_lnk' => 'Albumy',
  'categories_title' => 'Zarządzaj kategoriami', //cpg1.4
  'categories_lnk' => 'Kategorie',
  'users_title' => 'Zarządzaj użytkownikami', //cpg1.4
  'users_lnk' => 'Użytkownicy',
  'groups_title' => 'Ustawienia grup', //cpg1.4
  'groups_lnk' => 'Grupy',
  'comments_title' => 'Przeglądaj wszystkie komentarze', //cpg1.4
  'comments_lnk' => 'Komentarze',
  'searchnew_title' => 'Wsadowe dodawanie plików', //cpg1.4
  'searchnew_lnk' => 'Wsadowe dodawanie plików',
  'util_title' => 'Zarządzaj poprzez narzędzia Administratora', //cpg1.4
  'util_lnk' => 'Narzędzia Administratora',
  'key_title' => 'Słownik kluczowych słów', //cpg1.4
  'key_lnk' => 'Słowa kluczowe', //cpg1.4
  'ban_title' => 'Blokowanie użytkowników', //cpg1.4
  'ban_lnk' => 'Blokowanie',
  'db_ecard_title' => 'Przejrzyj e-kartki', //cpg1.4
  'db_ecard_lnk' => 'e-kartki',
  'pictures_title' => 'Posortuj zdjęcia w albumach', //cpg1.4
  'pictures_lnk' => 'Sortowanie zdjęć', //cpg1.4
  'documentation_lnk' => 'Dokumentacja', //cpg1.4
  'documentation_title' => 'Dokumentacja galerii', //cpg1.4
);

$lang_user_admin_menu = array(
  'albmgr_title' => 'Utwórz i uporządkuj moje albumy', //cpg1.4
  'albmgr_lnk' => 'Utwórz / Uporządkuj moje albumy',
  'modifyalb_title' => 'Modyfikuj moje albumy',  //cpg1.4
  'modifyalb_lnk' => 'Modyfikacja albumów',
  'my_prof_title' => 'Zobacz mój profil', //cpg1.4
  'my_prof_lnk' => 'Mój profil',
);

$lang_cat_list = array(
  'category' => 'Kategorie',
  'albums' => 'Albumy',
  'pictures' => 'Pliki',
);

$lang_album_list = array(
  'album_on_page' => ' albumów: %d stron: %d',
);

$lang_thumb_view = array(
  'date' => 'Data',
  //Sort by filename and title
  'name' => 'Nazwa pliku',
  'title' => 'Tytuł',
  'sort_da' => 'Sortuj według daty rosnąco',
  'sort_dd' => 'Sortuj według daty malejąco',
  'sort_na' => 'Sortuj według nazwy rosnąco',
  'sort_nd' => 'Sortuj według nazwy malejąco',
  'sort_ta' => 'Sortuj według tytułu rosnąco',
  'sort_td' => 'Sortuj według tytułu malejąco',
  'position' => 'POZYCJA', //cpg1.4
  'sort_pa' => 'Sortuj według pozycji rosnąco', //cpg1.4
  'sort_pd' => 'Sortuj według pozycji malejąco', //cpg1.4
  'download_zip' => 'Pobierz jako plik ZIP',
  'pic_on_page' => 'plików: %d, stron: %d',
  'user_on_page' => '%d użytkowników na %d stronie (stronach)',
  'enter_alb_pass' => 'Wpisz hasło do albumy', //cpg1.4
  'invalid_pass' => 'Nieprawidłowe hasło', //cpg1.4
  'pass' => 'Hasło', //cpg1.4
  'submit' => 'Akceptuj', //cpg1.4
);

$lang_img_nav_bar = array(
  'thumb_title' => 'Powrót do widoku miniatur',
  'pic_info_title' => 'Pokaż/Ukryj informację o plikach',
  'slideshow_title' => 'Pokaz Slajdów',
  'ecard_title' => 'Wyślij ten plik jako e-kartkę',
  'ecard_disabled' => 'Wysyłanie e-kartek jest zablokowane.',
  'ecard_disabled_msg' => 'Nie masz uprawnień do wysyłania e-kartek.', //js-alert
  'prev_title' => 'Zobacz poprzedni plik',
  'next_title' => 'Zobacz następny plik',
  'pic_pos' => 'Plik %s/%s',
  'report_title' => 'Zgłoś ten plik do administratora', //cpg1.4
  'go_album_end' => 'Idź na koniec', //cpg1.4
  'go_album_start' => 'Idź do początku', //cpg1.4
  'go_back_x_items' => 'Wstecz o %s', //cpg1.4
  'go_forward_x_items' => 'Do przodu o %s', //cpg1.4
);

$lang_rate_pic = array(
  'rate_this_pic' => 'Oceń ten plik ',
  'no_votes' => '(Jeszcze nie głosowano)',
  'rating' => '(Aktualna ocena : %s / 5 przy ilości głosów: %s)',
  'rubbish' => 'Wyczyść',
  'poor' => 'Słabe',
  'fair' => 'Znośne',
  'good' => 'Dobre',
  'excellent' => 'Doskonałe',
  'great' => 'Świetne',
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
  'filename' => 'Nazwa pliku=', //cpg1.4
  'filesize' => 'Rozmiar=', //cpg1.4
  'dimensions' => 'Rozmiar=', //cpg1.4
  'date_added' => 'Data dodania=', //cpg1.4
);

$lang_get_pic_data = array(
  'n_comments' => '%s komentarzy',
  'n_views' => '%s odsłon',
  'n_votes' => '(%s głosów)',
);

$lang_cpg_debug_output = array(
  'debug_info' => 'Informacje o błędach',
  'select_all' => 'Zaznacz wszystko',
  'copy_and_paste_instructions' => 'Aby otrzymać pomoc na forum wsparcia technicznego coppermine, skopiuj i wklej te informacje debuggera do swojego postu. Pamiętaj aby zastąpić wszelkie hasła ciągiem ***, przed zamieszczeniem postu.', //cpg1.4
  'phpinfo' => 'Wyświetl PHPinfo',
  'notices' => 'Uwagi', //cpg1.4
);

$lang_language_selection = array(
  'reset_language' => 'Domyślny język',
  'choose_language' => 'Wybierz język',
);

$lang_theme_selection = array(
  'reset_theme' => 'Domyślny motyw',
  'choose_theme' => 'Wybierz motyw',
);

$lang_version_alert = array(
  'version_alert' => 'Nieobsługiwana wersja!', //cpg1.4
  'no_stable_version' => 'Uruchomiona została galeria Coppermine %s (%s), która jest przeznaczona jedynie dla bardzo zaawansowanych użytkowników - ta wersja nie ma wsparcia technicznego oraz gwarancji. Używasz jej na własne ryzyko. Jeśli potrzebujesz wsparcia technicznego, zainstaluj starszą, stabilną wersję!', //cpg1.4
  'gallery_offline' => 'Galeria jest w tym momencie wyłączona i będzie dostępna wyłącznie dla Ciebie jako Administratora. Nie zapomnij włączyć galerii po dokonaniu niezbędnych zmian', //cpg1.4
);

$lang_create_tabs = array(
  'previous' => 'Wstecz', //cpg1.4
  'next' => 'Dalej', //cpg1.4
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
  'error_wakeup' => "Nie można uruchomić plugina '%s'", //cpg1.4
  'error_install' => "Nie można zainstalować plugina '%s'", //cpg1.4
  'error_uninstall' => "Nie można odinstalować plugina '%s'", //cpg1.4
  'error_sleep' => "Nie można odinstalować plugina '%s'<br />", //cpg1.4
);

// ------------------------------------------------------------------------- //
// File include/smilies.inc.php
// ------------------------------------------------------------------------- //

if (defined('SMILIES_PHP')) $lang_smilies_inc_php = array(
  'Exclamation' => 'Okrzyk',
  'Question' => 'Pytanie',
  'Very Happy' => 'Bardzo szczęśliwy',
  'Smile' => 'Uśmiech',
  'Sad' => 'Smutek',
  'Surprised' => 'Zaskoczony',
  'Shocked' => 'Zszokowany',
  'Confused' => 'Zakręcony',
  'Cool' => 'Cool',
  'Laughing' => 'Śmiech',
  'Mad' => 'Zły',
  'Razz' => 'Nabijam się',
  'Embarassed' => 'Zawstydzony',
  'Crying or Very sad' => 'Płaczę, jest mi bardzo smutno',
  'Evil or Very Mad' => 'Bardzo zły',
  'Twisted Evil' => 'Zakręcony diabełek',
  'Rolling Eyes' => 'Przewracanie oczami',
  'Wink' => 'Puszczać oczko',
  'Idea' => 'Pomysł',
  'Arrow' => 'Strzałka',
  'Neutral' => 'Neutralny',
  'Mr. Green' => 'Zielony',
);

// ------------------------------------------------------------------------- //
// File addpic.php
// ------------------------------------------------------------------------- //

// void

// ------------------------------------------------------------------------- //
// File mode.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('MODE_PHP')) $lang_mode_php = array(
  0 => 'Wychodzisz z trybu Administratora...',
  1 => 'Wchodzisz w tryb Administratora...',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
  'alb_need_name' => 'Album musi mieć nazwę!', //js-alert
  'confirm_modifs' => 'Jesteś pewien, że chcesz dokonać tych zmian?', //js-alert
  'no_change' => 'Nie dokonałeś żadnych zmian!', //js-alert
  'new_album' => 'Nowy album',
  'confirm_delete1' => 'Jesteś pewien, że chcesz dokonać usunięcia?', //js-alert
  'confirm_delete2' => '\nWszystkie pliki i komentarze również zostaną usunięte!', //js-alert
  'select_first' => 'Najpierw wybierz album', //js-alert
  'alb_mrg' => 'Menedżer albumów',
  'my_gallery' => '* Moja galeria *',
  'no_category' => '* Brak kategorii *',
  'delete' => 'Usuń',
  'new' => 'Nowy',
  'apply_modifs' => 'Zastosuj zmiany',
  'select_category' => 'Wybierz kategorię',
);

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) $lang_banning_php = array(
  'title' => 'Blokuj użytkowników', //cpg1.4
  'user_name' => 'Nazwa', //cpg1.4
  'ip_address' => 'Adres IP', //cpg1.4
  'expiry' => 'Wygasa (zostaw puste jeśli nigdy)', //cpg1.4
  'edit_ban' => 'Zapisz zmiany', //cpg1.4
  'delete_ban' => 'Usuń', //cpg1.4
  'add_new' => 'Dodaj nowy zakaz', //cpg1.4
  'add_ban' => 'Dodaj', //cpg1.4
  'error_user' => 'Nie można znaleźć użytkownika', //cpg1.4
  'error_specify' => 'Musisz określić nazwę lub IP użytkownika', //cpg1.4
  'error_ban_id' => 'Złe ID zakazu!', //cpg1.4
  'error_admin_ban' => 'Nie możesz blokować siebie!', //cpg1.4
  'error_server_ban' => 'Zamierzasz zablokować swój własny serwer? Nie można tego dokonać...', //cpg1.4
  'error_ip_forbidden' => 'Nie możesz zablokować tego IP - jest nierutowalny!<br />Jeśli chcesz zezwalać na blokowanie prywatnych IP, zmień to w <a href="admin.php">Ustawieniach Galerii</a>).', //cpg1.4
  'lookup_ip' => 'Szukaj adresu IP', //cpg1.4
  'submit' => 'Dalej!', //cpg1.4
  'select_date' => 'Wybierz datę', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File bridgemgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('BRIDGEMGR_PHP')) $lang_bridgemgr_php = array(
  'title' => 'Kreator integracji',
  'warning' => 'Uwaga: używając tego kreatora musisz brać pod uwagę fakt, że niektóre istotne dane są przesyłane jako treść formularzy html. Uruchom go tylko na swoim własnym komputerze (nie na publicznym, np. w kafejce) i nie zapomnij wyczyścić pamięci podręcznej przeglądarki oraz plików tymczasowych po zakończeniu pracy, w przeciwnym przypadku postronne osoby mogą uzyskać dostęp do twoich danych!',
  'back' => 'wstecz',
  'next' => 'dalej',
  'start_wizard' => 'Rozpocznij kreatora integracji',
  'finish' => 'Zakończ',
  'hide_unused_fields' => 'ukryj nieużywane pola formularza (rekomendowane)',
  'clear_unused_db_fields' => 'ukryj niewłaściwe wpisy w bazie danych (rekomendowane)',
  'custom_bridge_file' => 'nazwa twojego spersonalizowanego pliku połączenia (jeśli nazwa pliku połączenia to <i>myfile.inc.php</i>, wpisz <i>myfile</i> do tego pola)',
  'no_action_needed' => 'W tym kroku wystarczy kliknąć \'dalej\' aby kontynuować.',
  'reset_to_default' => 'Przywróć wartość domyślną',
  'choose_bbs_app' => 'wybierz instalację z którą chcesz zintegrować galerię coppermine',
  'support_url' => 'Przejdź tutaj aby uzyskać wsparcie dotyczące tej aplikacji',
  'settings_path' => 'ścieżka(ścieżki) używane przez twoją instalację BBS',
  'database_connection' => 'połączenie do bazy danych',
  'database_tables' => 'tabele bazy danych',
  'bbs_groups' => 'grupy BBS',
  'license_number' => 'Numer licencji',
  'license_number_explanation' => 'wprowadź numer licencji (jeśli to konieczne)',
  'db_database_name' => 'Nazwa bazy danych',
  'db_database_name_explanation' => 'Wprowadź nazwę bazy danych, z której korzysta Twoja aplikacja BBS',
  'db_hostname' => 'Host bazy danych',
  'db_hostname_explanation' => 'Nazwa komputera na którym zainstalowano twoją bazę danych mySQL, zazwyczaj: &quot;localhost&quot;',
  'db_username' => 'Użytkownik bazy danych',
  'db_username_explanation' => 'nazwa użytkownika bazy mySQL używane do połączenia z BBS',
  'db_password' => 'Hasło bazy danych',
  'db_password_explanation' => 'Hasło dla wybranego użytkownika bazy danych mySQL',
  'full_forum_url' => 'Adres URL forum',
  'full_forum_url_explanation' => 'Pełny adres URL Twojej instalacji BBS (włączając http:// bit, np. http://www.twojadomena.com/forum)',
  'relative_path_of_forum_from_webroot' => 'Ścieżka względna do forum',
  'relative_path_of_forum_from_webroot_explanation' => 'Ścieżka względna do Twojej aplikacji BBS z katalogu webroot (Przykład: jeśli Twój BBS jest zlokalizowany pod adresem http://www.twojadomena.com/forum/, wpisz &quot;/forum/&quot; w to pole)',
  'relative_path_to_config_file' => 'Ścieżka względna do pliku konfiguracyjnego Twojego BBS',
  'relative_path_to_config_file_explanation' => 'Ścieżka względna do Twojej instalacji BBS, widziana z katalogu Twojej instalacji Coppermine (np. &quot;../forum/&quot; jeśli Twój BBS znajduje się pod adresem http://www.twojadomena.com/forum/ a galeria Coppermine pod adresem http://www.twojadomena.com/galeria/)',
  'cookie_prefix' => 'Prefiks Cookie',
  'cookie_prefix_explanation' => 'musi być to nazwa identyczna z nazwą Cookie generowaną przez Twoją instalację BBS',
  'table_prefix' => 'Prefiks tabeli',
  'table_prefix_explanation' => 'Musi być to nazwa zgodna z prefiksem jaki wybrałeś podczas konfiguracji BBS.',
  'user_table' => 'Tabela użytkowników',
  'user_table_explanation' => '(zazwyczaj wartość domyślna powinna być poprawna, chyba, że Twoja instalacja BBS jest niestandardowa)',
  'session_table' => 'Tabela sesji',
  'session_table_explanation' => '(zazwyczaj wartość domyślna powinna być poprawna, chyba, że Twoja instalacja BBS jest niestandardowa)',
  'group_table' => 'Tabela grup',
  'group_table_explanation' => '(zazwyczaj wartość domyślna powinna być poprawna, chyba, że Twoja instalacja BBS jest niestandardowa)',
  'group_relation_table' => 'Tabela relacji grup',
  'group_relation_table_explanation' => '(zazwyczaj wartość domyślna powinna być poprawna, chyba, że Twoja instalacja BBS jest niestandardowa)',
  'group_mapping_table' => 'Tabela mapowania grup',
  'group_mapping_table_explanation' => '(zazwyczaj wartość domyślna powinna być poprawna, chyba, że Twoja instalacja BBS jest niestandardowa)',
  'use_standard_groups' => 'Użyj standardowych grup użytkowników BBS',
  'use_standard_groups_explanation' => 'Użyj standardowych (wbudowanych) grup użytkowników (rekomendowane). To sprawi że wszystkie spersonalizowane grupy użytkowników na tej stronie zostaną pominięte. Wyłącz tę opcję TYLKO jeśli naprawdę wiesz co robisz!',
  'validating_group' => 'Grupa walidacyjna',
  'validating_group_explanation' => 'ID grupy w której znajdują się konta użytkowników wymagające walidacji (zazwyczaj wartość domyślna powinna być poprawna, chyba, że Twoja instalacja BBS jest niestandardowa)',
  'guest_group' => 'Grupa gości',
  'guest_group_explanation' => 'ID grupy w której znajdują się goście (użytkownicy anonimowi) (zazwyczaj wartość domyślna powinna być poprawna, chyba, że Twoja instalacja BBS jest niestandardowa)',
  'member_group' => 'Grupa członków',
  'member_group_explanation' => 'ID grupy w której znajdują się konta &quot;zwykłych&quot; użytkowników (zazwyczaj wartość domyślna powinna być poprawna, chyba, że Twoja instalacja BBS jest niestandardowa)',
  'admin_group' => 'Grupa adminów',
  'admin_group_explanation' => ' ID grupy w której znajdują się konta administratorów (zazwyczaj wartość domyślna powinna być poprawna, chyba, że Twoja instalacja BBS jest niestandardowa)',
  'banned_group' => 'Grupa zabronionych',
  'banned_group_explanation' => 'ID grupy w której znajdują się konta użytkowników zabronionych (zazwyczaj wartość domyślna powinna być poprawna, chyba, że Twoja instalacja BBS jest niestandardowa)',
  'global_moderators_group' => 'Grupa globalnych moderatorów',
  'global_moderators_group_explanation' => 'ID grupy w której znajdują się konta globalnych moderatorów BBS (zazwyczaj wartość domyślna powinna być poprawna, chyba, że Twoja instalacja BBS jest niestandardowa)',
  'special_settings' => 'specyficzne ustawienia BBS',
  'logout_flag' => 'wersja phpBB (logout flag)',
  'logout_flag_explanation' => ' Twoja wersja BBS (to ustawienie specyfikuje w jaki sposób będą obsługiwane wylogowania)',
  'use_post_based_groups' => 'Użyć grup na bazie postów?',
  'logout_flag_yes' => '2.0.5 lub wyższa',
  'logout_flag_no' => '2.0.4 lub niższa',
  'use_post_based_groups_explanation' => 'Czy mają zostać wzięte pod uwagę grupy zdefiniowane przez ilość postów (pozwala na granulacyjne zarządzanie uprawnieniami), czy też może tylko grupy domyślne (czyni administrację łatwiejszą, rekomendowane). Możesz również zmienić to ustawienie później.',
  'use_post_based_groups_yes' => 'tak',
  'use_post_based_groups_no' => 'nie',
  'error_title' => 'Musisz poprawić te błędy zanim będzie można kontynuować. Przejdź do poprzedniego ekranu.',
  'error_specify_bbs' => 'Musisz ustalić z jaką aplikacją chcesz zintegrować galerię Coppermine.',
  'error_no_blank_name' => 'Nie można pozostawić pustym nazwy pola twojego spersonalizowanego pliku integracji.',
  'error_no_special_chars' => 'Nazwa pliku integracji nie może zawierać żadnych znaków specjalnych poza podkreśleniem (_) i myślnikiem (-)!',
  'error_bridge_file_not_exist' => 'Plik integracji nie istnieje na serwerze. Sprawdź czy go przesłałeś.',
  'finalize' => 'włącz/wyłącz integrację BBS',
  'finalize_explanation' => 'Ustawienia które ustaliłeś zostały zapisane w bazie danych, ale integracja BBS nie została włączona. Możesz zmienić to ustawienie później w dowolnym czasie. Zapamiętaj nazwę użytkownika i hasło Twojej osobnej instalacji Coppermine, może Ci być potrzebne później abyś mógł dokonać zmian. Jeśli coś pójdzie źle, przejdź do %s i wyłącz integrację BBS, używając Twojego osobnego (nie połaczonego) konta administratora (zazwyczaj ustalonego podczas instalacji Coppermine).',
  'your_bridge_settings' => 'Twoje ustawienia integracji',
  'title_enable' => 'Włącz integrację z %s',
  'bridge_enable_yes' => 'włącz',
  'bridge_enable_no' => 'wyłącz',
  'error_must_not_be_empty' => 'nie może być puste',
  'error_either_be' => 'musi być %s lub %s',
  'error_folder_not_exist' => '%s nie istnieje. Popraw wartość którą wprowadziłeś dla %s',
  'error_cookie_not_readible' => 'Coppermine nie może odczytywać plików Cookiem o nazwie %s. Popraw nazwę cookie wprowadzoną dla %s, lub przejdź do panelu administracji Twojego BBS i upewnij się, że taka ścieżka jest odczytywana przez coppermine.',
  'error_mandatory_field_empty' => 'Nie możesz zostawić pustym pola %s – wypełnij właściwą wartość.',
  'error_no_trailing_slash' => 'Nie może być kończącego slasha w polu %s.',
  'error_trailing_slash' => 'W polu %s musi być kończący slash.',
  'error_db_connect' => 'Nie można połączyć się z serwerem bazy danych mySQL przy użyciu podanych przez Ciebie danych. Oto co zwrócił mySQL:',
  'error_db_name' => 'Pomimo ustanowienia połączenia z serwerem, Coppermine nie mógł znaleźć bazy danych. Upewnij się, że podałeś poprawną nazwę. Oto co zwrócił mySQL:',
  'error_prefix_and_table' => '%s i ',
  'error_db_table' => 'Nie odnaleziono tabeli %s. Upewnij się, że podałeś nazwę %s poprawnie.',
  'recovery_title' => 'Menedżer Integracji: odzyskiwanie awaryjne',
  'recovery_explanation' => 'Jeśli chcesz administrować integracją Twojej galerii Coppermine, musisz najpierw zalogować się jako administrator. Jeśli nie możesz zalogować się, ponieważ integracja nie zadziałała tak jak tego oczekiwano, możesz ją wyłączyć. Wprowadzenie nazwy Twojego użytkownika i hasła nie spowoduje zalogowania, a jedynie wyłączy integrację. Sprawdź dokumentację aby uzyskać więcej informacji.',
  'username' => 'Użytkownik',
  'password' => 'Hasło',
  'disable_submit' => 'prześlij',
  'recovery_success_title' => 'Autoryzacja udana',
  'recovery_success_content' => 'Integracja BBS wyłączona. Instalacja Coppermine działa od tej pory w trybie standardowym.',
  'recovery_success_advice_login' => 'Aby zarządzać ustawieniami integracji i włączyć ją lub wyłączyć, zaloguj się jako administrator.',
  'goto_login' => 'Przejdź do strony logowania',
  'goto_bridgemgr' => 'Przejdź do menedżera integracji',
  'recovery_failure_title' => 'Nieudana autoryzacja',
  'recovery_failure_content' => 'Podałeś niewłaściwe dane logowania. Będziesz musiał podać dane konta administratora instalacji standardowej (zazwyczaj jest to konto które stworzyłeś w czasie instalacji galerii Coppermine).',
  'try_again' => 'spróbuj ponownie',
  'recovery_wait_title' => 'Czas oczekiwania jeszcze nie minął',
  'recovery_wait_content' => 'Ze względów bezpieczeństwa, niniejszy skrypt nie pozwala na ponowne logowanie w krótkim okresie czasu po nieudanym logowaniu, należy poczekać na ponowną możliwość autoryzacji.',
  'wait' => 'czekaj',
  'create_redir_file' => 'Tworzenie pliku przekierowania (rekomendowane)',
  'create_redir_file_explanation' => 'Aby przekierować użytkowników do galerii Coppermine po zalogowaniu do Twojego BBS, potrzebujesz pliku przekierowania w folderze BBS. Po wybraniu tej opcji, menedżer integracji spróbuje utworzyć ten plik, lub wygeneruje kod który należy skopiować i wkleić, jeśli trzeba będzie stworzyć ten plik ręcznie..',
  'browse' => 'przeglądaj',
);

// ------------------------------------------------------------------------- //
// File calendar.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('CALENDAR_PHP')) $lang_calendar_php = array(
  'title' => 'Kalendarz', //cpg1.4
  'close' => 'Zamknij', //cpg1.4
  'clear_date' => 'Usuń datę', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
  'miss_param' => 'Określ parametry \'%s\' operacja niewykonana !',
  'unknown_cat' => 'Wybrana kategoria nie istnieje w bazie danych',
  'usergal_cat_ro' => 'Kategorie użytkowników galerii nie mogą zostać wykasowane!',
  'manage_cat' => 'Zarządzaj kategoriami',
  'confirm_delete' => 'Jesteś pewien, że chcesz USUNĄĆ tę kategorię?', //js-alert
  'category' => 'Kategoria',
  'operations' => 'Operacje',
  'move_into' => 'Przesuń do',
  'update_create' => 'Uaktualnij/Utwórz kategorię',
  'parent_cat' => 'Kategoria "matka"',
  'cat_title' => 'Nazwa kategorii',
  'cat_thumb' => 'Category thumbnail',
  'cat_desc' => 'Opis kategorii',
  'categories_alpha_sort' => 'Posortuj kategorie alfabetycznie', //cpg1.4
  'save_cfg' => 'Zapisz zmiany', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File admin.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('ADMIN_PHP')) $lang_admin_php = array(
  'title' => 'Ustawienia Galerii', //cpg1.4
  'manage_exif' => 'Wyświetlanie informacji EXIF', //cpg1.4
  'manage_plugins' => 'Zarządzaj pluginami', //cpg1.4
  'manage_keyword' => 'Słowa kluczowe', //cpg1.4
  'restore_cfg' => 'Przywróć ustawienia fabryczne',
  'save_cfg' => 'Zapamiętaj nowe ustawienia',
  'notes' => 'Informacje dodatkowe',
  'info' => 'Information',
  'upd_success' => 'Ustawienia galerii zostały zaktualizowane',
  'restore_success' => 'Ustawienia fabryczne galerii zostały przywrócone',
  'name_a' => 'Nazwy rosnąco',
  'name_d' => 'Nazwy malejąco',
  'title_a' => 'Tytuły rosnąco',
  'title_d' => 'Tytuły malejąco',
  'date_a' => 'Data rosnąco',
  'date_d' => 'Data malejąco',
  'pos_a' => 'Pozycja rosnąco', //cpg1.4
  'pos_d' => 'Pozycja malejąco', //cpg1.4
  'th_any' => 'Max stosunek szerokości do wysokości',
  'th_ht' => 'Wysokość',
  'th_wd' => 'Szerokość',
  'label' => 'Etykieta',
  'item' => 'Element',
  'debug_everyone' => 'Wszyscy',
  'debug_admin' => 'Tylko Admininistrator',
  'no_logs'=> 'Wyłączone', //cpg1.4
  'log_normal'=> 'Normalne', //cpg1.4
  'log_all' => 'Wszystko', //cpg1.4
   'view_logs' => 'Pokaż logi', //cpg1.4
  'click_expand' => 'Kliknj nazwę sekcji aby rozwinąć', //cpg1.4
  'expand_all' => 'Rozwiń wszystkie ', //cpg1.4
  'notice1' => '(*) Te ustawienia nie mogą być zmieniane jeżeli masz już pliki w bazie danych.', //cpg1.4 - (relocated)
  'notice2' => '(**) Gdy zmienisz te ustawienia, to tylko pliki dodane od tego momentu będą obięte zmianami. Nie zaleca się zmiany tych ustawień jeśli w bazie danych są już pliki. Jednakże  możesz dokonać zmian w już istniejących plikach poprzez &quot;<a href="util.php">Ustawienia Administratora</a> (zmiana rozmiaru plików)&quot;.', //cpg1.4 - (relocated)
  'notice3' => '(***) Wszystkie logi są zapisywane w języku angielskim.', //cpg1.4 - (relocated)
  'bbs_disabled' => 'Funkcja wyłączona ze względu na zintegrowanie z forum', //cpg1.4
  'auto_resize_everyone' => 'Wszyscy', //cpg1.4
  'auto_resize_user' => 'Tylko użytkownik', //cpg1.4
  'ascending' => 'rosnąco', //cpg1.4
  'descending' => 'malejąco', //cpg1.4
);

if (defined('ADMIN_PHP')) $lang_admin_data = array(
  'Główne ustawienia',
  array('Nazwa galerii', 'gallery_name', 0, 'f=index.htm&amp;as=admin_general_name&amp;ae=admin_general_name_end'), //cpg1.4
  array('Opis galerii', 'gallery_description', 0, 'f=index.htm&amp;as=admin_general_description&amp;ae=admin_general_description_end'), //cpg1.4
  array('Email Administratora galerii', 'gallery_admin_email', 0, 'f=index.htm&amp;as=admin_general_email&amp;ae=admin_general_email_end'), //cpg1.4
  array('Adres URL galerii (bez \'index.php\' lub podobnych na końcu)', 'ecards_more_pic_target', 0, 'f=index.htm&amp;as=admin_general_coppermine-url&amp;ae=admin_general_coppermine-url_end'), //cpg1.4
  array('Adres URL strony głównej', 'home_target', 0, 'f=index.htm&amp;as=admin_general_home-url&amp;ae=admin_general_home-url_end'), //cpg1.4
  array('Zezwól na pobieranie ulubionych w formacie ZIP', 'enable_zipdownload', 1, 'f=index.htm&amp;as=admin_general_zip-download&amp;ae=admin_general_zip-download_end'), //cpg1.4
  array('Różnica czasu w odniesieniu do GMT (Aktualny czas: ' . localised_date(-1, $comment_date_fmt) . ')','time_offset',0, 'f=index.htm&amp;as=admin_general_time-offset&amp;ae=admin_general_time-offset_end&amp;top=1'), //cpg1.4
  array('Włącz szyfrowanie haseł (tej operacji nie można cofnąć)','enable_encrypted_passwords',1, 'f=index.htm&amp;as=admin_general_encrypt_password_start&amp;ae=admin_general_encrypt_password_end&amp;top=1'), // cpg 1.4
  array('Włącz ikony pomocy (pomoc dostępna tylko po angielsku)','enable_help',9, 'f=index.htm&amp;as=admin_general_help&amp;ae=admin_general_help_end'), //cpg1.4
  array('Włącz aktywne słowa kluczowe w wyszukiwaniu','clickable_keyword_search',14, 'f=index.htm&amp;as=admin_general_keywords_start&amp;ae=admin_general_keywords_end'), //cpg1.4
  array('Uruchom pluginy', 'enable_plugins', 12, 'f=index.htm&amp;as=admin_general_enable-plugins&amp;ae=admin_general_enable-plugins_end'),  //cpg1.4
  array('Zezwól na blokowanie nieroutowalnych adresów IP', 'ban_private_ip', 1,  'f=index.htm&amp;as=admin_general_private-ip&amp;ae=admin_general_private-ip_end'), //cpg1.4
  array('Nowy interfejs we wsadowym dodawaniu plików', 'browse_batch_add', 1, 'f=index.htm&amp;as=admin_general_browsable_batch_add&amp;ae=admin_general_browsable_batch_add_end'), //cpg1.4

  'Ustawienia języka &amp; kodowania',
  array('Język', 'lang', 5, 'f=index.htm&amp;as=admin_language_language&amp;ae=admin_language_language_end'), //cpg1.4
  array('Przełączyć na angielski gdy tłumaczenie nie zostanie odnalezione?', 'language_fallback', 1, 'f=index.htm&amp;as=admin_language_fallback&amp;ae=admin_language_fallback_end'), //cpg1.4
  array('Kodowanie znaków', 'charset', 4, 'f=index.htm&amp;as=admin_language_charset&amp;ae=admin_language_charset_end'), //cpg1.4
  array('Wyświetl listę języków', 'language_list', 1, 'f=index.htm&amp;as=admin_language_list&amp;ae=admin_language_list_end'), //cpg1.4
  array('Wyświetl flagi', 'language_flags', 8, 'f=index.htm&amp;as=admin_language_flags&amp;ae=admin_language_flags_end&amp;top=1'), //cpg1.4
  array('Wyświetl &quot;reset&quot; wybierając język', 'language_reset', 1, 'f=index.htm&amp;as=admin_language_reset&amp;ae=admin_language_reset_end&amp;top=1'), //cpg1.4
  //array('Display previous/next on tabbed pages', 'previous_next_tab', 1), //cpg1.4

  'Ustawienia motywów',
  array('Motyw', 'theme', 6, 'f=index.htm&amp;as=admin_theme_theme&amp;ae=admin_theme_theme_end'), //cpg1.4
  array('Wyświetl listę motywów', 'theme_list', 1, 'f=index.htm&amp;as=admin_theme_theme_list&amp;ae=admin_theme_theme_list_end'), //cpg1.4
  array('Wyświetl &quot;reset&quot; wybierając motyw', 'theme_reset', 1, 'f=index.htm&amp;as=admin_theme_theme_reset&amp;ae=admin_theme_theme_reset_end'), //cpg1.4
  array('Pokaż FAQ', 'display_faq', 1, 'f=index.htm&amp;as=admin_theme_faq&amp;ae=admin_theme_faq_end'), //cpg1.4
  array('Nazwa własnego menu', 'custom_lnk_name', 0,'f=index.htm&amp;as=admin_theme_custom_lnk_name&amp;ae=admin_theme_custom_lnk_name_end'), //cpg1.4
  array('Adres URL własngo menu', 'custom_lnk_url', 0,'f=index.htm&amp;as=admin_language_custom_lnk_url&amp;ae=admin_language_custom_lnk_url_end'), //cpg1.4
  array('Pokaż pomoc bbcode', 'show_bbcode_help', 1, 'f=index.htm&amp;as=admin_theme_bbcode&amp;ae=admin_theme_bbcode_end&amp;top=1'), //cpg1.4
  array('Pokaż sygnaturę informacyjną w tematach określonych jako zgodne z XHTML i CSS','vanity_block',1, 'f=index.htm&amp;as=vanity_block&amp;ae=vanity_block_end'), //cpg1.4
  array('Ścieżka do własnego nagłówka na stronie', 'custom_header_path', 0, 'f=index.htm&amp;as=admin_theme_include_path_start&amp;ae=admin_theme_include_path_end'), //cpg1.4
  array('Ścieżka do własnej stopki na stronie', 'custom_footer_path', 0, 'f=index.htm&amp;as=admin_theme_include_path_start&amp;ae=admin_theme_include_path_end'), //cpg1.4

  'Przeglądanie listy albumów',
  array('Szerokość głównej tabeli (piksele lub %)', 'main_table_width', 0, 'f=index.htm&amp;as=admin_album_table-width&amp;ae=admin_album_table-width_end'), //cpg1.4
  array('Liczba poziomów kategorii do wyświetlenia', 'subcat_level', 0, 'f=index.htm&amp;as=admin_album_category-levels&amp;ae=admin_album_category-levels_end'), //cpg1.4
  array('Liczba albumów do wyświetlenia', 'albums_per_page', 0, 'f=index.htm&amp;as=admin_album_number&amp;ae=admin_album_number_end'), //cpg1.4
  array('Liczba kolumn w liście albumów', 'album_list_cols', 0, 'f=index.htm&amp;as=admin_album_columns&amp;ae=admin_album_columns_end'), //cpg1.4
  array('Rozmiar miniaturek (w pikselach)', 'alb_list_thumb_size', 0, 'f=index.htm&amp;as=admin_album_thumbnail-size&amp;ae=admin_album_thumbnail-size_end'), //cpg1.4
  array('Zawartość strony głównej', 'main_page_layout', 0, 'f=index.htm&amp;as=admin_album_list_content&amp;ae=admin_album_list_content_end'), //cpg1.4
  array('Pokazuj miniaturki pierwszego poziomu w sekcji kategorii','first_level',1, 'f=index.htm&amp;as=admin_album_first-level_thumbs&amp;ae=admin_album_first-level_thumbs_end'), //cpg1.4
  array('Sortuj kategorie alfabetycznie','categories_alpha_sort',1, 'f=index.htm&amp;as=admin_album_list_alphasort_start&amp;ae=admin_album_list_alphasort_end'), //cpg1.4
  array('Pokaż liczbę dołączonych plików','link_pic_count',1, 'f=index.htm&amp;as=admin_album_linked_files_start&amp;ae=admin_album_linked_files_end'), //cpg1.4

  'Wyświetlanie miniaturek',
  array('Liczba kolumn w widoku miniaturek', 'thumbcols', 0, 'f=index.htm&amp;as=admin_thumbnail_columns&amp;ae=admin_thumbnail_columns_end'), //cpg1.4
  array('Liczba wierszy w widoku miniaturek', 'thumbrows', 0, 'f=index.htm&amp;as=admin_thumbnail_rows&amp;ae=admin_thumbnail_rows_end'), //cpg1.4
  array('Maksymalna ilość pasków do wyświetlenia', 'max_tabs', 10, 'f=index.htm&amp;as=admin_thumbnail_tabs&amp;ae=admin_thumbnail_tabs_end'), //cpg1.4
  array('Wyświetl opis pliku (oprócz tytułu) poniżej miniatury', 'caption_in_thumbview', 1, 'f=index.htm&amp;as=admin_thumbnail_display_caption&amp;ae=admin_thumbnail_display_caption_end'), //cpg1.4
  array('Wyświetl ilość odsłon pod miniaturką', 'views_in_thumbview', 1, 'f=index.htm&amp;as=admin_thumbnail_display_views&amp;ae=admin_thumbnail_display_views_end'), //cpg1.4
  array('Wyświetl ilość komentarzy pod miniaturką', 'display_comment_count', 1, 'f=index.htm&amp;as=admin_thumbnail_display_comments&amp;ae=admin_thumbnail_display_comments_end'), //cpg1.4
  array('Wyświetl nazwę przesyłającego pod miniaturką', 'display_uploader', 1, 'f=index.htm&amp;as=admin_thumbnail_display_uploader&amp;ae=admin_thumbnail_display_uploader_end'), //cpg1.4
  //array('Display name of admin uploaders below the thumbnail', 'display_admin_uploader', 1, 'f=index.htm&amp;as=admin_thumbnail_display_admin_uploader&amp;ae=admin_thumbnail_display_admin_uploader_end'), //cpg1.4
  array('Wyświetl nazwę pliku pod miniaturką', 'display_filename', 1, 'f=index.htm&amp;as=admin_thumbnail_display_filename&amp;ae=admin_thumbnail_display_filename_end'), //cpg1.4
  //array('Wyświetl opis albumu', 'alb_desc_thumb', 1, 'f=index.htm&amp;as=admin_thumbnail_display_description&amp;ae=admin_thumbnail_display_description_end'), //cpg1.4
  array('Domyślne sortowanie dla plików:', 'default_sort_order', 3, 'f=index.htm&amp;as=admin_thumbnail_default_sortorder&amp;ae=admin_thumbnail_default_sortorder_end'), //cpg1.4
  array('Minimalna ilość głosów niezbędna do umieszczenia pliku w kategorii \'Top Lista\'', 'min_votes_for_rating', 0, 'f=index.htm&amp;as=admin_thumbnail_minimum_votes&amp;ae=admin_thumbnail_minimum_votes_end'), //cpg1.4

  'Przeglądanie zdjęć', //cpg1.4
  array('Szerokość głównej tabeli wyświetlającej zdjęcia (piksele lub %)', 'picture_table_width', 0, 'f=index.htm&amp;as=admin_image_comment_table-width&amp;ae=admin_image_comment_table-width_end'), //cpg1.4
  array('Domyślne pokazywanie informacji o pliku', 'display_pic_info', 1, 'f=index.htm&amp;as=admin_image_comment_info_visible&amp;ae=admin_image_comment_info_visible_end'), //cpg1.4
  array('Maksymalna długość opisu pliku', 'max_img_desc_length', 0, 'f=index.htm&amp;as=admin_image_comment_descr_length&amp;ae=admin_image_comment_descr_length_end'), //cpg1.4
  array('Maksymalna liczba znaków w słowie', 'max_com_wlength', 0, 'f=index.htm&amp;as=admin_image_comment_chars_per_word&amp;ae=admin_image_comment_chars_per_word_end'), //cpg1.4
  array('Pokaż "Pasek Filmu" z miniaturami', 'display_film_strip', 1, 'f=index.htm&amp;as=admin_image_comment_filmstrip_toggle&amp;ae=admin_image_comment_filmstrip_toggle_end'), //cpg1.4
  array('Wyświetl nazwę pliku poniżej "Paska Filmu"', 'display_film_strip_filename', 1, 'f=index.htm&amp;as=admin_image_comment_display_film_strip_filename&amp;ae=admin_image_comment_display_film_strip_filename_end'), //cpg1.4
  array('Liczba elementów w "Pasku Filmu"', 'max_film_strip_items', 0, 'f=index.htm&amp;as=admin_image_comment_filmstrip_number&amp;ae=admin_image_comment_filmstrip_number_end'), //cpg1.4
  array('Czas wyświetlania zdjęcia w pokazie slajdów w milisekundach (1 sekunda = 1000 milisekund)', 'slideshow_interval', 0, 'f=index.htm&amp;as=admin_image_comment_slideshow_interval&amp;ae=admin_image_comment_slideshow_interval_end'), //cpg1.4

  'Ustawienia komentarzy', //cpg1.4
  array('Blokowanie słów z "listy zakazanych" w komentarzach', 'filter_bad_words', 1, 'f=index.htm&amp;as=admin_image_comment_bad_words&amp;ae=admin_image_comment_bad_words_end'), //cpg1.4
  array('Wyświetlanie emotikon w komentarzach', 'enable_smilies', 1, 'f=index.htm&amp;as=admin_image_comment_smilies&amp;ae=admin_image_comment_smilies_end'), //cpg1.4
  array('Zezwól na kilka następujących po sobie komentarzy jednego użytkownika do tego samego pliku', 'disable_comment_flood_protect', 1, 'f=index.htm&amp;as=admin_image_comment_flood&amp;ae=admin_image_comment_flood_end'), //cpg1.4
  array('Maksymalna liczna wierszy w komenmtarzach', 'max_com_lines', 0, 'f=index.htm&amp;as=admin_image_comment_lines&amp;ae=admin_image_comment_lines_end'), //cpg1.4
  array('Maksymalna długość komentarza', 'max_com_size', 0, 'f=index.htm&amp;as=admin_image_comment_length&amp;ae=admin_image_comment_length_end'), //cpg1.4
  array('Powiadom Administratora o komentarzu e-mailem', 'email_comment_notification', 1, 'f=index.htm&amp;as=admin_image_comment_admin_notify&amp;ae=admin_image_comment_admin_notify_end'), //cpg1.4
  array('Kierunek sortowania dla komentarzy', 'comments_sort_descending', 17, 'f=index.htm&amp;as=admin_comment_sort_start&amp;ae=admin_comment_sort_end'), //cpg1.4
  array('Prefiks dla anonimowych "komentatorów"', 'comments_anon_pfx', 0, 'f=index.htm&amp;as=comments_anon_pfx&amp;ae=comments_anon_pfx_end'), //cpg1.4

  'Ustawienia plików i miniaturek',
  array('Jakość dla plików JPEG', 'jpeg_qual', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_jpeg_quality&amp;ae=admin_picture_thumbnail_jpeg_quality_end'), //cpg1.4
  array('Maksymalny rozmiar dla miniaturki <a href="#notice2" class="clickable_option">**</a>', 'thumb_width', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max-dimension&amp;ae=admin_picture_thumbnail_max-dimension_end'), //cpg1.4
  array('Użyj wymiaru (szerokość, wysokość lub maksymalny widok dla miniaturki) <a href="#notice2" class="clickable_option">**</a>', 'thumb_use', 7, 'f=index.htm&amp;as=admin_picture_thumbnail_use-dimension&amp;ae=admin_picture_thumbnail_use-dimension_end'), //cpg1.4
  array('Twórz zdjęcia pośrednie','make_intermediate',1, 'f=index.htm&amp;as=admin_picture_thumbnail_intermediate_toggle&amp;ae=admin_picture_thumbnail_intermediate_toggle_end'), //cpg1.4
  array('Maksymalna szerokość pośredniego zdjęcia lub video <a href="#notice2" class="clickable_option">**</a>', 'picture_width', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_intermediate_dimension&amp;ae=admin_picture_thumbnail_intermediate_dimension_end'), //cpg1.4
  array('Maksymalny rozmiar przesyłanych plików (KB)', 'max_upl_size', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max_upload_size&amp;ae=admin_picture_thumbnail_max_upload_size_end'), //cpg1.4
  array('Maksymana wysokość lub szerokość przesyłanych zdjęć (w pikselach)', 'max_upl_width_height', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max_upload_dimension&amp;ae=admin_picture_thumbnail_max_upload_dimension_end'), //cpg1.4
  array('Automatyczna zmiana rozmiaru plików które są większe niż określono wyżej', 'auto_resize', 16, 'f=index.htm&amp;as=admin_picture_thumbnail_auto-resize&amp;ae=admin_picture_thumbnail_auto-resize_end'), //cpg1.4

  'Zaawansowane ustawienia plików i miniatur',
  array('Zezwól na prywatne albumy (Uwaga: jeśli zmienisz z "TAK" na "NIE" to aktualne prywatne albumy staną się publiczne)', 'allow_private_albums', 1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_private_toggle&amp;ae=admin_picture_thumb_advanced_private_toggle_end'), //cpg1.4
  array('Wyświetlanie ikon albumów prywatnych niezalogowanemu użytkownikowi','show_private',1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_private_icon_show&amp;ae=admin_picture_thumb_advanced_private_icon_show_end'), //cpg1.4
  array('Znaki zakazane w nazwach plików', 'forbiden_fname_char',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_filename_forbidden_chars&amp;ae=admin_picture_thumb_advanced_filename_forbidden_chars_end'), //cpg1.4
  //array('Accepted file extensions for uploaded pictures', 'allowed_file_extensions',0, 'f=index.htm&amp;as=&amp;ae=_end'), //cpg1.4
  array('Akceptowane typy obrazów', 'allowed_img_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_pic_extensions&amp;ae=admin_picture_thumb_advanced_pic_extensions_end'), //cpg1.4
  array('Akceptowane typy filmów', 'allowed_mov_types',0, 'f=index.htm&amp;as=admin_thumbs_advanced_movie&amp;ae=admin_thumbs_advanced_movie_end'), //cpg1.4
  array('Automatyczne wyświetlanie filmu', 'media_autostart',1, 'f=index.htm&amp;as=admin_movie_autoplay&amp;ae=admin_movie_autoplay_end'), //cpg1.4
  array('Akceptowane typy plików audio', 'allowed_snd_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_audio_extensions&amp;ae=admin_picture_thumb_advanced_audio_extensions_end'), //cpg1.4
  array('Akceptowane typy dokumentów', 'allowed_doc_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_doc_extensions&amp;ae=admin_picture_thumb_advanced_doc_extensions_end'), //cpg1.4
  array('Metoda skalowania obrazów','thumb_method',2, 'f=index.htm&amp;as=admin_picture_thumb_advanced_resize_method&amp;ae=admin_picture_thumb_advanced_resize_method_end'), //cpg1.4
  array('Ścieżka do narzędzia konwertującego - ImageMagick (Przykład /usr/bin/X11/)', 'impath', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_im_path&amp;ae=admin_picture_thumb_advanced_im_path_end'), //cpg1.4
  //array('Allowed image types (only valid for ImageMagick)', 'allowed_img_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_allowed_imagetypes&amp;ae=admin_picture_thumb_advanced_allowed_imagetypes_end'), //cpg1.4
  array('Komendy lini poleceń dla ImageMagick', 'im_options', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_im_commandline&amp;ae=admin_picture_thumb_advanced_im_commandline_end'), //cpg1.4
  array('Czytaj EXIF z plików JPEG', 'read_exif_data', 13, 'f=index.htm&amp;as=admin_picture_thumb_advanced_exif&amp;ae=admin_picture_thumb_advanced_exif_end'), //cpg1.4
  array('Czytaj IPTC z plików JPEG', 'read_iptc_data', 1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_iptc&amp;ae=admin_picture_thumb_advanced_iptc_end'), //cpg1.4
  array('Katalog albumów <a href="#notice1" class="clickable_option">*</a>', 'fullpath', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_albums_dir&amp;ae=admin_picture_thumb_advanced_albums_dir_end'), //cpg1.4
  array('Katalog plików uzytkowników <a href="#notice1" class="clickable_option">*</a>', 'userpics', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_userpics_dir&amp;ae=admin_picture_thumb_advanced_userpics_dir_end'), //cpg1.4
  array('Prefiks dla zdjęć pośrednich <a href="#notice1" class="clickable_option">*</a>', 'normal_pfx', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_intermediate_prefix&amp;ae=admin_picture_thumb_advanced_intermediate_prefix_end'), //cpg1.4
  array('Prefiks dla miniaturek <a href="#notice1" class="clickable_option">*</a>', 'thumb_pfx', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_thumbs_prefix&amp;ae=admin_picture_thumb_advanced_thumbs_prefix_end'), //cpg1.4
  array('Domyślne uprawnienia katalogów', 'default_dir_mode', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_chmod_folder&amp;ae=admin_picture_thumb_advanced_chmod_folder_end'), //cpg1.4
  array('Domyslne uprawnienia plików', 'default_file_mode', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_chmod_files&amp;ae=admin_picture_thumb_advanced_chmod_files_end'), //cpg1.4

  'Ustawienia użytkowników',
  array('Pozwól na rejestrację nowych użytkowników', 'allow_user_registration', 1, 'f=index.htm&amp;as=admin_allow_registration&amp;ae=admin_allow_registration_end'), //cpg1.4
  array('Pozwól na dostęp niezalogowanych użytkowników (goście lub anonimowi)', 'allow_unlogged_access', 1, 'f=index.htm&amp;as=admin_allow_unlogged_access&amp;ae=admin_allow_unlogged_access_end'), //cpg1.4
  array('Rejestracja użytkownika wymaga potwierdzenia poprzez e-mail', 'reg_requires_valid_email', 1, 'f=index.htm&amp;as=admin_registration_verify&amp;ae=admin_registration_verify_end'), //cpg1.4
  array('Powiadom Administratora o rejestracji (wyślij e-mail)', 'reg_notify_admin_email', 1, 'f=index.htm&amp;as=admin_registration_notify&amp;ae=admin_registration_notify_end'), //cpg1.4
  array('Administrator aktywuje nowozarejestrowanych', 'admin_activation', 1, 'f=index.htm&amp;as=admin_activation&amp;ae=admin_activation_end'),  //cpg1.4
  array('Dwóch użytkowników może mieć ten sam adres e-mail', 'allow_duplicate_emails_addr', 1, 'f=index.htm&amp;as=admin_allow_duplicate_emails_addr&amp;ae=admin_allow_duplicate_emails_addr_end'), //cpg1.4
  array('Powiadom Administratora o plikach oczekujących na akceptację', 'upl_notify_admin_email', 1, 'f=index.htm&amp;as=admin_approval_notify&amp;ae=admin_approval_notify_end'), //cpg1.4
  array('Pozwól zalogowanym uzytkownikom na przeglądanie listy użytkowników', 'allow_memberlist', 1, 'f=index.htm&amp;as=admin_user_memberlist&amp;ae=admin_user_memberlist_end'), //cpg1.4
  array('Pozwól użytkownikom zmieniać swoje adresy e-mail', 'allow_email_change', 1, 'f=index.htm&amp;as=admin_user_allow_email_change&amp;ae=admin_user_allow_email_change_end'), //cpg1.4
  array('Pozwól użytkownikom mieć kontrolę nad swoimi plikami w publicznych galeriach', 'users_can_edit_pics', 1, 'f=index.htm&amp;as=admin_user_editpics_public_start&amp;ae=admin_user_editpics_public_end'), //cpg1.4
  array('Liczba nieudanych logowań do tymczasowego zablokowania (aby uniknąć prób wlamań)', 'login_threshold', 0, 'f=index.htm&amp;as=admin_user_login_start&amp;ae=admin_user_login_end'), //cpg1.4
  array('Czas tymczasowego zablokowania', 'login_expiry', 0, 'f=index.htm&amp;as=admin_user_login_start&amp;ae=admin_user_login_end'), //cpg1.4
  array('Wysyłaj raport do Administratora', 'report_post', 1, 'f=index.htm&amp;as=admin_user_enable_report&amp;ae=admin_user_enable_report_end'),  //cpg1.4

// custom profile fields,  //cpg1.4
  'Własne pola w profilu użytkownika (pozostaw puste jeśli nieużywane).
  Użyj pola nr 6 do dłuższych wpisów takich jak "Coś o sobie"', //cpg1.4
  array('Pole nr 1', 'user_profile1_name', 0, 'f=index.htm&amp;as=admin_custom&amp;ae=admin_custom_end'), //cpg1.4
  array('Pole nr 2', 'user_profile2_name', 0), //cpg1.4
  array('Pole nr 3', 'user_profile3_name', 0), //cpg1.4
  array('Pole nr 4', 'user_profile4_name', 0), //cpg1.4
  array('Pole nr 5', 'user_profile5_name', 0), //cpg1.4
  array('Pole nr 6', 'user_profile6_name', 0), //cpg1.4

  'Własne pola do opisu obrazów (pozostaw puste jeśli nieużywane)',
  array('Pole nr 1', 'user_field1_name', 0, 'f=index.htm&amp;as=admin_custom_image&amp;ae=admin_custom_image_end'), //cpg1.4
  array('Pole nr 2', 'user_field2_name', 0),
  array('Pole nr 3', 'user_field3_name', 0),
  array('Pole nr 4', 'user_field4_name', 0),

  'Ustawienia ciasteczek',
  array('Nazwa ciasteczek', 'cookie_name', 0, 'f=index.htm&amp;as=admin_cookie_name&amp;ae=admin_cookie_name_end'), //cpg1.4
  array('Ścieżka do ciasteczek', 'cookie_path', 0, 'f=index.htm&amp;as=admin_cookie_path&amp;ae=admin_cookie_path_end'), //cpg1.4

  'Ustawienia e-mail  (zwykle nic tu nie trzeba zmieniać; gdy nie jesteś pewien, pozostaw pola puste)', //cpg1.4
  array('Serwer SMTP (jeśli puste, zostanie użyty sendmail)', 'smtp_host', 0, 'f=index.htm&amp;as=admin_email&amp;ae=admin_email_end'), //cpg1.4
  array('Nazwa użytkownika SMTP', 'smtp_username', 0), //cpg1.4
  array('Hasło SMTP', 'smtp_password', 0), //cpg1.4

  'Statystyki i logi', //cpg1.4
  array('Tryb zapisywania logów <a href="#notice3" class="clickable_option">***</a>', 'log_mode', 11, 'f=index.htm&amp;as=admin_logging_log_mode&amp;ae=admin_logging_log_mode_end'), //cpg1.4
  array('Zapisuj e-kartki', 'log_ecards', 1, 'f=index.htm&amp;as=admin_general_log_ecards&amp;ae=admin_general_log_ecards_end'), //cpg1.4
  array('Szczegółowe statystyki głosowania','vote_details',1, 'f=index.htm&amp;as=admin_logging_votedetails&amp;ae=admin_logging_votedetails_end'), //cpg1.4
  array('Szczegółowe statystyki odsłon','hit_details',1, 'f=index.htm&amp;as=admin_logging_hitdetails&amp;ae=admin_logging_hitdetails_end'), //cpg1.4

  'Ustawienia debugowania i wyłączanie Galerii', //cpg1.4
  array('Włącz tryb debugowania', 'debug_mode', 9, 'f=index.htm&amp;as=debug_mode&amp;ae=debug_mode_end'), //cpg1.4
  array('Wyświetlaj powiadomienia w trybie debugowania', 'debug_notice', 1, 'f=index.htm&amp;as=admin_misc_debug_notices&amp;ae=admin_misc_debug_notices_end'), //cpg1.4
  array('Galeria jest wyłączona', 'offline', 1, 'f=index.htm&amp;as=admin_general_offline&amp;ae=admin_general_offline_end'), //cpg1.4
);


// ------------------------------------------------------------------------- //
// File db_ecard.php
// ------------------------------------------------------------------------- //

if (defined('DB_ECARD_PHP')) $lang_db_ecard_php = array(
  'title' => 'Wyślij e-kartkę',
  'ecard_sender' => 'Nadawca',
  'ecard_recipient' => 'Odbiorca',
  'ecard_date' => 'Data',
  'ecard_display' => 'Pokaż e-kartkę',
  'ecard_name' => 'Imię',
  'ecard_email' => 'E-mail',
  'ecard_ip' => 'IP #',
  'ecard_ascending' => 'rosnąco',
  'ecard_descending' => 'malejąco',
  'ecard_sorted' => 'Posortowane',
  'ecard_by_date' => 'według daty',
  'ecard_by_sender_name' => 'wedlug nazwy nadawcy',
  'ecard_by_sender_email' => 'według adresu nadawcy',
  'ecard_by_sender_ip' => 'według IP nadawcy',
  'ecard_by_recipient_name' => 'według odbiorcy',
  'ecard_by_recipient_email' => 'według adresu odbiorcy',
  'ecard_number' => 'Wyświetl rejestr %s do %s z %s',
  'ecard_goto_page' => 'Idź do strony',
  'ecard_records_per_page' => 'Rekordów na stronę',
  'check_all' => 'Zaznacz wszystkie',
  'uncheck_all' => 'Odznacz wszystkie',
  'ecards_delete_selected' => 'Skasuj wybrane e-kartki',
  'ecards_delete_confirm' => 'Jesteś pewien, że chcesz usunąć te rekordy? Zaznacz "TAK"!',
  'ecards_delete_sure' => 'Jestem pewny?',
);


// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
  'empty_name_or_com' => 'Musisz wpisać imię lub pseudonim oraz komentarz!',
  'com_added' => 'Twój komentarz został dodany',
  'alb_need_title' => 'Musisz podać tytuł albumu!',
  'no_udp_needed' => 'Nie dokonano zmian.',
  'alb_updated' => 'Album został zaktualizowany',
  'unknown_album' => 'Wybrany album nie istnieje lub nie masz wystarczających uprawnień by dodawać pliki do tego albumu',
  'no_pic_uploaded' => 'Nie wysłano pliku!<br /><br />Jeżeli naprawdę został wybrany plik do wysłania, sprawdź, czy serwer zezwala na wysyłkę...',
  'err_mkdir' => 'Nie udało się utworzyć katalogu %s!',
  'dest_dir_ro' => 'Skrypt nie może zapisywać do katalogu docelowego %s!',
  'err_move' => 'Nie można przenieść %s do %s!',
  'err_fsize_too_large' => 'Przesłany plik jest zbyt duży (maksymalny rozmiar to %s x %s) !', //obsolete since cpg1.3 - consider removal in cpg1.4 once upload.php has been overhauled
  'err_imgsize_too_large' => 'Przesłany plik jest zbyt duży (dopuszczalne maksimum to %s KB) !', //obsolete since cpg1.3 - consider removal in cpg1.4 once upload.php has been overhauled
  'err_invalid_img' => 'Przesłany plik nie jest prawidłowym obrazem!',
  'allowed_img_types' => 'Możesz przesłać jedynie %s obrazów.',
  'err_insert_pic' => 'Plik \'%s\' nie może zostać umieszczony w albumie.',
  'upload_success' => 'Plik został pomyślnie przesłany.<br /><br />Będzie widoczny po akceptacji przez administratorów.',
  'notify_admin_email_subject' => '%s - Informacja o nadesłaniu pliku',
  'notify_admin_email_body' => 'Nadesłano plik przez użytkownika %s, wymagający akceptacji. Zobacz %s',
  'info' => 'Informacja',
  'com_added' => 'Dodano komentarz',
  'alb_updated' => 'Album został zaktualizowany',
  'err_comment_empty' => 'Komentarz jest pusty!',
  'err_invalid_fext' => 'Pliki o poniższych rozszerzeniach są akceptowane:<br /><br />%s.',
  'no_flood' => 'Przepraszamy, ale jesteś autorem ostatniego komentarza dla tego pliku.<br /><br />Edytuj swój komentarz jeśli chcesz go zmienić.',
  'redirect_msg' => 'Nastąpi przekierowanie.<br /><br /><br />Kliknij \'CONTINUE\' jeśli nie zostaniesz przekierowany automatycznie',
  'upl_success' => 'Twój plik został dodany.',
  'email_comment_subject' => 'Ukazał się komentarz w Coppermine Photo Gallery',
  'email_comment_body' => 'Ktoś napisał komentarz do zdjęcia w twojej galerii. Przejdź do ',
  'album_not_selected' => 'Nie wybrano albumu', //cpg1.4
  'com_author_error' => 'Istnieje już użytkownik o tej nazwie, wybierz inny pseudonim', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
  'caption' => 'Podpis',
  'fs_pic' => 'obraz w pełnym rozmiarze',
  'del_success' => 'pomyślnie usunięty',
  'ns_pic' => 'normalny rozmiar obrazu',
  'err_del' => 'nie może być usunięty',
  'thumb_pic' => 'miniaturka',
  'comment' => 'komentarz',
  'im_in_alb' => 'obraz w albumie',
  'alb_del_success' => 'Usunięto album &laquo;%s&raquo;.', //cpg1.4
  'alb_mgr' => 'Menedżer albumów',
  'err_invalid_data' => 'Odebrano nieprawidłowe dane w \'%s\'',
  'create_alb' => 'Tworzę album \'%s\'',
  'update_alb' => 'Aktualizacja albumu \'%s\' o tytule \'%s\' i indeksie \'%s\'',
  'del_pic' => 'Usuń plik',
  'del_alb' => 'Usuń album',
  'del_user' => 'Usuń użytkownika',
  'err_unknown_user' => 'Wybrany użytkownik nie istnieje!',
  'err_empty_groups' => 'Nie ma tabeli grup, lub brak wpisów w tabeli grup!', //cpg1.4
  'comment_deleted' => 'Pomyślnie usunięto komentarz',
  'npic' => 'Obraz', //cpg1.4
  'pic_mgr' => 'Menedżer obrazów', //cpg1.4
  'update_pic' => 'Aktualizuję obraz \'%s\' o nazwie \'%s\' i indeksie \'%s\'', //cpg1.4
  'username' => 'Nazwa użytkownika', //cpg1.4
  'anonymized_comments' => 'anonimowe komentarze: %s ', //cpg1.4
  'anonymized_uploads' => 'pliki przesłane anonimowo: %s ', //cpg1.4
  'deleted_comments' => 'usunięte komentarze: %s ', //cpg1.4
  'deleted_uploads' => 'usunięte przesłane pliki: %s ', //cpg1.4
  'user_deleted' => 'użytkownik %s usunięty', //cpg1.4
  'activate_user' => 'Aktywuj konto użytkownika', //cpg1.4
  'user_already_active' => 'Konto już było aktywne', //cpg1.4
  'activated' => 'Aktywowano', //cpg1.4
  'deactivate_user' => 'Zdezaktywuj użytkownika', //cpg1.4
  'user_already_inactive' => 'Konto już było nieaktywne', //cpg1.4
  'deactivated' => 'Zdezaktywowany', //cpg1.4
  'reset_password' => 'Wyzeruj hasło / hasła', //cpg1.4
  'password_reset' => 'Hasło zmienione na %s', //cpg1.4
  'change_group' => 'Zmień główną grupę', //cpg1.4
  'change_group_to_group' => 'Zmieniam z %s na %s', //cpg1.4
  'add_group' => 'Dodaj podrzędną grupę', //cpg1.4
  'add_group_to_group' => 'Dodaję użytkownika %s do grupy %s. Jest obecnie członkiem %s jako grupy głównej oraz %s jako grupy podrzędnej.', //cpg1.4
  'status' => 'Stan', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File displayecard.php
// ------------------------------------------------------------------------- //

if (defined('DISPLAYECARD_PHP')) {

$lang_displayecard_php = array(
  'invalid_data' => 'Dane kartki którą próbujesz odebrać zostały zniszczone przez twój program e-mail. Sprawdź czy odnośnik jest pełny.', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File displayimage.php
// ------------------------------------------------------------------------- //

if (defined('DISPLAYIMAGE_PHP')){

$lang_display_image_php = array(
  'confirm_del' => 'Czy jesteś pewien że chcesz USUNĄĆ ten plik?\\nKomentarze również zostaną usunięte.', //js-alert
  'del_pic' => 'USUŃ TEN PLIK',
  'size' => '%s x %s pikseli',
  'views' => '%s',
  'slideshow' => 'Pokaz slajdów',
  'stop_slideshow' => 'ZATRZYMAJ POKAZ SLAJDÓW',
  'view_fs' => 'Kliknij aby obejrzeć w pełnym rozmiarze',
  'edit_pic' => 'Edytuj informacje o pliku', //cpg1.4
  'crop_pic' => 'Przytnij i obróć',
  'set_player' => 'Zmień odtwarzacz',
);

$lang_picinfo = array(
  'title' =>'Informacje o pliku',
  'Filename' => 'Nazwa pliku',
  'Album name' => 'Nazwa albumu',
  'Rating' => 'Ocena (głosów %s)',
  'Keywords' => 'Słowa kluczowe',
  'File Size' => 'Rozmiar pliku',
  'Date Added' => 'Data dodania', //cpg1.4
  'Dimensions' => 'Wymiary',
  'Displayed' => 'Wyświetleń',
  'URL' => 'URL', //cpg1.4
  'Make' => 'Producent', //cpg1.4
  'Model' => 'Model', //cpg1.4
  'DateTime' => 'Data i czas', //cpg1.4
  'DateTimeOriginal' => 'Data wykonania zdjęcia', //cpg1.4
  'ISOSpeedRatings'=>'Czułość ISO', //cpg1.4
  'MaxApertureValue' => 'Przesłona', //cpg1.4
  'FocalLength' => 'Ogniskowa', //cpg1.4
  'Comment' => 'Komentarz',
  'addFav'=>'Dodaj do ulubionych',
  'addFavPhrase'=>'Ulubione',
  'remFav'=>'Usuń z ulubionych',
  'iptcTitle'=>'Tytuł IPTC',
  'iptcCopyright'=>'Prawa autorskie IPTC',
  'iptcKeywords'=>'Słowa kluczowe IPTC',
  'iptcCategory'=>'Kategoria IPTC',
  'iptcSubCategories'=>'Podkategorie IPTC',
  'ColorSpace' => 'Przestrzeń kolorów', //cpg1.4
  'ExposureProgram' => 'Program ekspozycji', //cpg1.4
  'Flash' => 'Lampa błyskowa', //cpg1.4
  'MeteringMode' => 'Tryb pomiaru', //cpg1.4
  'ExposureTime' => 'Czas naświetlania', //cpg1.4
  'ExposureBiasValue' => 'Korekta ekspozycji', //cpg1.4
  'ImageDescription' => 'Opis obrazu', //cpg1.4
  'Orientation' => 'Orientacja', //cpg1.4
  'xResolution' => 'Rozdzielczość X', //cpg1.4
  'yResolution' => 'Rozdzielczość Y', //cpg1.4
  'ResolutionUnit' => 'Jednostka rozdzielczości', //cpg1.4
  'Software' => 'Oprogramowanie', //cpg1.4
  'YCbCrPositioning' => 'Pozycjonowanie YCbCr', //cpg1.4
  'ExifOffset' => 'Offset Exif', //cpg1.4
  'IFD1Offset' => 'Offset IFD1', //cpg1.4
  'FNumber' => 'FNumber', //cpg1.4
  'ExifVersion' => 'Wersja Exif', //cpg1.4
  'DateTimeOriginal' => 'Oryginalna data i czas', //cpg1.4
  'DateTimedigitized' => 'Data i czas digitalizacji', //cpg1.4
  'ComponentsConfiguration' => 'Konfiguracja komponentów', //cpg1.4
  'CompressedBitsPerPixel' => 'Bity na piksel', //cpg1.4
  'LightSource' => 'Źródło światła', //cpg1.4
  'ISOSetting' => 'Ustawienie ISO', //cpg1.4
  'ColorMode' => 'Tryb koloru', //cpg1.4
  'Quality' => 'Jakość', //cpg1.4
  'ImageSharpening' => 'Wyostrzanie obrazu', //cpg1.4
  'FocusMode' => 'Tryb ogniskowania', //cpg1.4
  'FlashSetting' => 'Ustawienie błysku', //cpg1.4
  'ISOSelection' => 'Wybór ISO', //cpg1.4
  'ImageAdjustment' => 'Dostosowanie obrazu', //cpg1.4
  'Adapter' => 'Adapter', //cpg1.4
  'ManualFocusDistance' => 'Ręczna ogniskowa', //cpg1.4
  'DigitalZoom' => 'Zoom cyfrowy', //cpg1.4
  'AFFocusPosition' => 'Pozycja AF ogniskowej', //cpg1.4
  'Saturation' => 'Nasycenie', //cpg1.4
  'NoiseReduction' => 'Redukcja szumów', //cpg1.4
  'FlashPixVersion' => 'Wersja Flash Pix', //cpg1.4
  'ExifImageWidth' => 'Szerkość obrazu wg. Exif', //cpg1.4
  'ExifImageHeight' => 'Wysokość obrazu wg. Exif', //cpg1.4
  'ExifInteroperabilityOffset' => 'Przesunięcie Exif', //cpg1.4
  'FileSource' => 'Źródło pliku', //cpg1.4
  'SceneType' => 'Typ sceny', //cpg1.4
  'CustomerRender' => 'Zobrazowanie własne', //cpg1.4
  'ExposureMode' => 'Tryb ekspozycji', //cpg1.4
  'WhiteBalance' => 'Balans bieli', //cpg1.4
  'DigitalZoomRatio' => 'Cyfrowe powiększenie', //cpg1.4
  'SceneCaptureMode' => 'Tryb ujęcia', //cpg1.4
  'GainControl' => 'Gain Control', //cpg1.4
  'Contrast' => 'Kontrast', //cpg1.4
  'Saturation' => 'Nasycenie', //cpg1.4
  'Sharpness' => 'Ostrość', //cpg1.4
  'ManageExifDisplay' => 'Zarządzanie wyświetlaniem Exif', //cpg1.4
  'submit' => 'Wyślij', //cpg1.4
  'success' => 'Informacje pomyślnie zaktualizowane.', //cpg1.4
  'details' => 'Szczegóły', //cpg1.4
);

$lang_display_comments = array(
  'OK' => 'OK',
  'edit_title' => 'Edytuj ten komentarz',
  'confirm_delete' => 'Czy na pewno chcesz usunąć ten komentarz?', //js-alert
  'add_your_comment' => 'Dodaj komentarz',
  'name'=>'Imię',
  'comment'=>'Komentarz',
  'your_name' => 'Anonim',
  'report_comment_title' => 'Powiadom administratora o tym komentarzu', //cpg1.4
);

$lang_fullsize_popup = array(
  'click_to_close' => 'Kliknij na obrazie aby zamknąć okno',
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php = array(
  'title' => 'Wyślij e-kartkę',
  'invalid_email' => '<span style="color: red"><b>Uwaga</b></span>: nieprawidłowy adres e-mail:', //cpg1.4
  'ecard_title' => '%s wysyła Ci e-kartkę',
  'error_not_image' => 'Tylko obrazki mogą być wysłane jako e-kartka.',
  'view_ecard' => 'Kliknij na ten odnośnik jeśli e-kartka nie wyświetla się prawidłowo', //cpg1.4
  'view_ecard_plaintext' => 'Aby obejrzeć tę e-kartkę wpisz poniższy odnośnik do swojej przeglądarki:', //cpg1.4
  'view_more_pics' => 'Obejrzyj więcej obrazów!', //cpg1.4
  'send_success' => 'Twoja e-kartka została wysłana.',
  'send_failed' => 'Przepraszamy. Serwer nie może wysłać twojej e-kartki...',
  'from' => 'Od',
  'your_name' => 'Twoje imię',
  'your_email' => 'Twój adres e-mail',
  'to' => 'Do',
  'rcpt_name' => 'Imię odbiorcy',
  'rcpt_email' => 'Adres e-mail odbiorcy',
  'greetings' => 'Nagłówek', //cpg1.4
  'message' => 'Wiadomość', //cpg1.4
  'ecards_footer' => 'Wysłane przez użytkownika %s o adresie IP %s o godzinie %s (wg czasu Galerii)', //cpg1.4
  'preview' => 'Podgląd e-kartki', //cpg1.4
  'preview_button' => 'Podgląd', //cpg1.4
  'submit_button' => 'Wyślij e-kartkę', //cpg1.4
  'preview_view_ecard' => 'To będzie alternatywny odnośnik do e-kartki, kiedy zostanie utworzona. Nie będzie on działał dla podglądu.', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File report_file.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('REPORT_FILE_PHP') || defined('DISPLAYREPORT_PHP')) $lang_report_php =array(
  'title' => 'Zgłoszenie do administratora', //cpg1.4
  'invalid_email' => '<b>Uwaga</b>: nieprawidłowy adres e-mail!', //cpg1.4
  'report_subject' => 'Zgłoszenie od użytkownika %s dotyczące galerii %s', //cpg1.4
  'view_report' => 'Alternatywny odnośnik dla raportu, który nie wyświetla się prawidłowo', //cpg1.4
  'view_report_plaintext' => 'Aby obejrzeć raport wklej poniższy odnośnik w pasek adresu przeglądarki:', //cpg1.4
  'view_more_pics' => 'Galeria', //cpg1.4
  'send_success' => 'Twoje zgłoszenie zostało wysłane', //cpg1.4
  'send_failed' => 'Przepraszamy. Serwer nie może wysłać raportu...', //cpg1.4
  'from' => 'Od', //cpg1.4
  'your_name' => 'Twoje imię', //cpg1.4
  'your_email' => 'Twój adres e-mail', //cpg1.4
  'to' => 'Do', //cpg1.4
  'administrator' => 'Administrator/Moderator', //cpg1.4
  'subject' => 'Temat', //cpg1.4
  'comment_field_name' => 'Zgłoszenie dotyczące komentarza, którego autorem jest "%s"', //cpg1.4
  'reason' => 'Powód', //cpg1.4
  'message' => 'Wiadomość', //cpg1.4
  'report_footer' => 'Wysłano od użytkownika %s o IP %s o godzinie %s (wg czasu Galerii)', //cpg1.4
  'obscene' => 'obsceniczny', //cpg1.4
  'offensive' => 'agresywny', //cpg1.4
  'misplaced' => 'nie na temat', //cpg1.4
  'missing' => 'brak', //cpg1.4
  'issue' => 'błąd / nie wyświetla się', //cpg1.4
  'other' => 'inny', //cpg1.4
  'refers_to' => 'Zgłoszenie pliku odnosi się do', //cpg1.4
  'reasons_list_heading' => 'powody zgłoszenia:', //cpg1.4
  'no_reason_given' => 'nie podano powodu', //cpg1.4
  'go_comment' => 'Przejdź do komentarza', //cpg1.4
  'view_comment' => 'Zobacz pełny raport z komentarzem', //cpg1.4
  'type_file' => 'plik', //cpg1.4
  'type_comment' => 'komentarz', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
  'pic_info' => 'Informacje o pliku',
  'album' => 'Album',
  'title' => 'Tytuł',
  'filename' => 'Nazwa pliku', //cpg1.4
  'desc' => 'Opis',
  'keywords' => 'Słowa kluczowe',
  'new_keyword' => 'Nowe słowo kluczowe', //cpg1.4
  'new_keywords' => 'Znaleziono nowe słowa kluczowe', //cpg1.4
  'existing_keyword' => 'Istniejące słowa kluczowe', //cpg1.4
  'pic_info_str' => '%s x %s - %s KB - %s wyświetleń - %s głosów',
  'approve' => 'Akceptuj',
  'postpone_app' => 'Odłóż akceptację na później',
  'del_pic' => 'Usuń plik',
  'del_all' => 'Usuń WSZYSTKIE pliki', //cpg1.4
  'read_exif' => 'Odczytaj ponownie informacje EXIF',
  'reset_view_count' => 'Wyzeruj licznik wyświetleń',
  'reset_all_view_count' => 'Wyzeruj WSZYSTKIE liczniki wyświetleń', //cpg1.4
  'reset_votes' => 'Usuń głosy',
  'reset_all_votes' => 'Usuń WSZYSTKIE głosy', //cpg1.4
  'del_comm' => 'Usuń komentarze',
  'del_all_comm' => 'Usuń WSZYSTKIE komentarze', //cpg1.4
  'upl_approval' => 'Akceptowanie nadesłanych', //cpg1.4
  'edit_pics' => 'Edytuj pliki',
  'see_next' => 'Zobacz następne pliki',
  'see_prev' => 'Zobacz poprzednie pliki',
  'n_pic' => '%s plików',
  'n_of_pic_to_disp' => 'Liczba wyświetlanych plików',
  'apply' => 'Zatwierdź zmiany',
  'crop_title' => 'Coppermine Picture Editor',
  'preview' => 'Podgląd',
  'save' => 'Zapisz obraz',
  'save_thumb' =>'Zapisz jako miniaturkę',
  'gallery_icon' => 'Ustaw jako moją ikonę', //cpg1.4
  'sel_on_img' =>'Zaznaczenie musi w całości znajdować się na obrazku!', //js-alert
  'album_properties' =>'Właściwości albumu', //cpg1.4
  'parent_category' =>'Kategoria nadrzędna', //cpg1.4
  'thumbnail_view' =>'Widok miniatur', //cpg1.4
  'select_unselect' =>'Zaznacz/odznacz wszystko', //cpg1.4
  'file_exists' => "Docelowy plik '%s' już istnieje.", //cpg1.4
  'rename_failed' => "Nie udało się zmienić nazwy z '%s' na '%s'.", //cpg1.4
  'src_file_missing' => "Źródłowy plik '%s' nie istnieje.", // cpg 1.4
  'mime_conv' => "Nie da się przekonwertować pliku z '%s' na '%s'",//cpg1.4
  'forb_ext' => 'Niedopuszczalne rozszerzenie pliku.',//cpg1.4
);

// ------------------------------------------------------------------------- //
// File faq.php
// ------------------------------------------------------------------------- //

if (defined('FAQ_PHP')) $lang_faq_php = array(
  'faq' => 'Często zadawane pytania',
  'toc' => 'Spis treści',
  'question' => 'Pytanie: ',
  'answer' => 'Odpowiedź: ',
);

if (defined('FAQ_PHP')) $lang_faq_data = array(
  'Ogólne pytania',
  array('Dlaczego muszę się zarejestrować?', ' Rejestracja może być wymagana przez administratora serwisu. Zarejestrowanie się daje użytkownikowi dodatkowe możliwości, takie jak przesyłanie własnych plików, tworzenie listy ulubionych, ocenianie zdjęć, zamieszczanie komentarzy itp.', 'allow_user_registration', '1'),
  array('Jak się zarejestrować?', 'Przejdź do sekcji &quot;Rejestracja&quot; i wypełnij wymagane pola (ew. także pola opcjonalne).<br />Jeżeli Administrator włączył opcję aktywacji przez e-mail, po wypełnieniu formularza rejestracji, na podany tam adres pocztowy otrzymasz e-mail zawierający instrukcje w jaki sposób aktywować konto. Aktywacja jest wymagana przed pierwszym logowaniem.', 'allow_user_registration', '1'), //cpg1.4
  array('Jak się logować?', 'Przejdź do sekcji &quot;Logowanie&quot;, Wprowadź swoją nazwę użytkownika i hasło. Możesz także wybrać opcję &quot;Pamiętaj mnie&quot; abyś nie musiał logować się przy ponownym wejściu na stronę.<br /><b>WAŻNE: aby ta funkcja serwisu działała, należy włączyć obsługę plików cookie i nie kasować plików cookie generowanych przez serwis.</b>', 'offline', 0),
  array('Dlaczego nie mogę się zalogować?', 'Czy zarejestrowałeś się już i kliknąłeś na łącze z wysłanego do Ciebie e-mail\'a? Łącze to pozwoli na aktywowanie Twojego konta. W przypadku innych kłopotów skontaktuj się z administratorem serwisu.', 'offline', 0),
  array('Co mam zrobić jeżeli zapomnę hasła?', 'Jeżeli serwis udostępnia link &quot;Zapomniałem hasła&quot;, użyj go. W innym wypadku skontaktuj się z administratorem i poproś go o nowe hasło.', 'offline', 0),
  //array('Co mam zrobić, jeżeli zmienił mi się adres e-mail?', 'Zaloguj się i zmień swój e-mail w &quot;Profilu&quot;', 'offline', 0),
  array('Jak zapisać plik do &quot;Moich ulubionych&quot;?', 'Kliknij na pliku, a następnie na łączu &quot;informacji o zdjęciu&quot; (<img src="images/info.gif" width="16" height="16" border="0" alt="Picture information" />); przejdź na dół i kliknij &quot;Dodaj do ulubionych&quot;.<br />Możliwe, że administrator włączył opcję domyślnego pokazywania informacji o pliku.<br />WAŻNE: Należy włączyć obsługę plików cookie z tego serwisu i nie kasować ich.', 'offline', 0),
  array('Jak ocenić plik?', 'Kliknij na miniaturze, przejdź na dół strony i wybierz odpowiednią ocenę.', 'offline', 0),
  array('Jak zamieścić komentarz do pliku?', 'Kliknij na miniaturze, przejdź na dół i w odpowiednim polu wpisz komentarz.', 'offline', 0),
  array('Jak przesłać plik?', 'Przejdź do &quot;Przesyłania zdjęć&quot; i wybierz album do którego chcesz przesłać plik, kliknij &quot;Przeglądaj&quot; znajdź plik który chcesz przesłać, wybierz &quot;Otwórz&quot; (dodaj opis, jeżeli chcesz) i kliknij &quot;Prześlij&quot;.<br /><br />Alternatywnie, użytkownicy <b>Windows XP</b>, mogą przesyłać większą ilość plików jednorazowo, bezpośrednio do albumów prywatnych, używając systemowego Kreatora Publikacji w sieci WWW.<br />Aby uzyskać informacje jak pobrać odpowiedni wpis do rejestru, kliknij <a href="xp_publish.php">tutaj.</a>', 'allow_private_albums', 1), //cpg1.4
  array('Gdzie mogę przesłać plik?', 'Pliki można przesyłać do jednego z albumów w Twojej Galerii. Administrator może także zezwolić Ci na przesyłanie zdjęć do albumów w Galerii Głównej.', 'allow_private_albums', 0),
  array('Jakie pliki można przesyłać? W jakiej wielkości?', 'Typ i rodzaj przesyłanych plików (jpg, png, etc.) określa administrator serwisu', 'offline', 0),
  array(' W jaki sposób tworzyć, kasować i zmieniać nazwy albumów w &quot;Mojej Galerii&quot;?', 'Powinieneś przejść do &quot;Trybu Administracyjnego&quot;<br />Przejdź do &quot;Tworzenie/Porządkowanie albumów&quot;i kliknij &quot;Nowy&quot;. Zmień domyślną nazwę &quot;Nowy Album&quot; na wybraną przez siebie.<br />Możesz także modyfikować dowolny album ze swojej galerii.<br />Następnie kliknij &quot;Zastosuj zmiany&quot;.', 'allow_private_albums', 0),
  array(' W jaki sposób zezwalać i odbierać zezwolenia na oglądanie moich albumów?', 'Przejdź do &quot;Trybu Administracyjnego&quot;<br />i sekcji &quot;Modyfikuj moje albumy. Na pasku &quot;Aktualizuj Album&quot; wybierz album, który chcesz zmodyfikować. <br />Możesz zmienić jego nazwę, opis, miniaturę, ustawić zezwolenia na oglądanie i komentowanie/ocenianie jego zawartości.<br />Następnie kliknij &quot;Aktualizuj album&quot;.', 'allow_private_albums', 0),
  array('Co zrobić by móc obejrzeć galerie innych użytkowników?', 'Przejdź do &quot;Listy Albumów&quot; i wybierz &quot;Galerie użytkowników&quot;.', 'allow_private_albums', 0),
  array('Co to takiego pliki cookie?', 'Pliki cookie zawierają dane tekstowe zapisywane przez stronę internetową na Twoim komputerze. <br />Zazwyczaj pozwalają użytkownikowi opuścić stronę i wejść na nią ponownie bez konieczności ponownego logowania.', 'offline', 0),
  array('Skąd mogę pobrać ten program aby umieścić go we własnym serwisie?', 'Galeria Coppermine jest darmową galerią multimediów, rozpowszechnianą na licencji GNU GPL. Zawiera rozbudowaną funkcjonalność i została przygotowana na różne platformy. Odwiedź <a href="http://coppermine-gallery.net/">stronę domową Coppermine</a> by dowiedzieć się więcej i ściągnąć najnowszą wersję programu.', 'offline', 0),

  'Nawigowanie po stronie',
  array('Co to jest &quot;Lista albumów&quot;?', 'Lista albumów pokazuje całą kategorię, w której obecnie się znajdujesz wraz z łączami do każdego albumu. Jeżeli nie znajdujesz się obecnie w żadnej kategorii, lista albumów wyświetli całą zawartość galerii wraz z łączami do kategorii, które zawiera. Miniatury mogą być także łączami do kategorii.', 'offline', 0),
  array('Czym jest &quot;Moja Galeria&quot;?', 'Opcja ta umożliwia użytkownikowi serwisu tworzenie własnej galerii, dodawanie, kasowanie i modyfikowanie albumów, oraz przesyłanie do nich plików.', 1), //cpg1.4
  array('Czym różni się &quot;Tryb Administracyjny&quot; od &quot;Trybu użytkownika&quot;?', 'Tryb administracyjny umożliwia zarządzanie albumami znajdującymi się w Twojej prywatnej galerii (a także innymi albumami - jeżeli zezwolił na to administrator).', 'allow_private_albums', 0),
  array('Co to jest &quot;Przesłanie pliku&quot;?', 'To możliwość przesłania pliku (jego rodzaj i wielkość są określone przez administratora) do wybranych albumów.', 'allow_private_albums', 0),
  array('Co to są &quot;Ostatnie aktualizacje&quot;?', 'Umożliwiają przejrzenie ostatnio dodanych do strony plików.', 'offline', 0),
  array('Co to są &quot;Ostatnie komentarze&quot;?', 'Ta opcja pokazuje ostatnio dodane przez użytkowników komentarze, oraz pliki których dotyczą.', 'offline', 0),
  array('Czym jest opcja &quot;Popularne&quot;?', 'Opcja ta pokazuje najczęściej oglądane pliki (dotyczy wszystkich użytkowników - zarówno tych zalogowanych jak i niezalogowanych).', 'offline', 0),
  array('Co to jest &quot;Top Lista&quot;?', 'Top lista zawiera listę najwyżej ocenianych plików wraz z ich średnią oceną (np. pięciu użytkowników głosuje z oceną <img src="images/rating3.gif" width="65" height="14" border="0" alt="" />: plikowi zostanie przyznana ocena <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> ;lub wśród pięciu innych użytkowników każdy daje plikowi ocenę od 1 do 5 (1,2,3,4,5) co spowoduje przyznanie plikowi średniej oceny <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> .)<br />Klasyfikacja przedstawia się następująco: od <img src="images/rating5.gif" width="65" height="14" border="0" alt="najlepsze" /> (najlepsze) do <img src="images/rating0.gif" width="65" height="14" border="0" alt="najgorsze" /> (najgorsze).', 'offline', 0),
  array('Czym są &quot;Ulubione&quot;?', 'Ta opcja pozwala użytkownikowi przechowywać odnośniki do ulubionych plików z galerii w pliku cookie zapisywanym przez przeglądarkę.', 'offline', 0),
);


// ------------------------------------------------------------------------- //
// File forgot_passwd.php
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) $lang_forgot_passwd_php = array(
  'forgot_passwd' => 'Przypominanie hasła',
  'err_already_logged_in' => 'Jesteś już zalogowany!',
  'enter_email' => 'Wpisz swój adres e-mail', //cpg1.4
  'submit' => 'Dalej',
  'illegal_session' => 'Błąd sesji. Zacznij jeszcze raz.', //cpg1.4
  'failed_sending_email' => 'Nie udało się wysłać e-maila z przypomnieniem hasła!',
  'email_sent' => 'E-mail z twoją nazwą użytkownika i hasłem został wysłany na adres %s', //cpg1.4
  'verify_email_sent' => 'Wysłano e-mail na adres %s. Sprawdź swoją skrzynkę pocztową aby dokończyć rejestrację.', //cpg1.4
  'err_unk_user' => 'Wybrany użytkownik nie istnieje!',
  'account_verify_subject' => '%s - Żądanie nowego hasła', //cpg1.4
  'account_verify_body' => 'Zażądałeś nowego hasła. Jeśli chcesz, aby nowe hasło zostało przysłane na twój adres, otwórz poniższy odnośnik:

%s', //cpg1.4
  'passwd_reset_subject' => '%s - Twoje nowe hasło', //cpg1.4
  'passwd_reset_body' => 'Oto nowe hasło zgodnie z żądaniem:
Nazwa użytkownika: %s
Hasło: %s
Kliknij na %s aby się zalogować.', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
  'group_name' => 'Grupa', //cpg1.4
  'permissions' => 'Uprawnienia', //cpg1.4
  'public_albums' => 'Wysyłanie do albumów publicznych', //cpg1.4
  'personal_gallery' => 'Galeria osobista', //cpg1.4
  'upload_method' => 'Metoda przesyłania', //cpg1.4
  'disk_quota' => 'Quota', //cpg1.4
  'rating' => 'Oceny', //cpg1.4
  'ecards' => 'E-kartki', //cpg1.4
  'comments' => 'Komentarze', //cpg1.4
  'allowed' => 'Dozwolone', //cpg1.4
  'approval' => 'Akceptowanie', //cpg1.4
  'boxes_number' => 'Liczba pól', //cpg1.4
  'variable' => 'zmienna', //cpg1.4
  'fixed' => 'stała', //cpg1.4
  'apply' => 'Zapisz zmiany',
  'create_new_group' => 'Utwórz nową grupę',
  'del_groups' => 'Usuń wybraną grupę / grupy',
  'confirm_del' => 'Uwaga, po usunięciu grupy użytkownicy do niej należący zostaną przeniesieni do grupy "Zarejestrowani"! Czy chcesz kontynuować?', //js-alert
  'title' => 'Zarządzanie grupami użytkowników',
  'num_file_upload' => 'Pola wysyłania plików', //cpg1.4
  'num_URI_upload' => 'Pola wysyłania adresów', //cpg1.4
  'reset_to_default' => 'Zmień na domyślną nazwę (%s) - zalecane!', //cpg1.4
  'error_group_empty' => 'Tabela grup była pusta!<br /><br />Utworzono domyślne grupy, proszę odświeżyć stronę', //cpg1.4
  'explain_greyed_out_title' => 'Dlaczego ten wiersz jest wyszarzony?', //cpg1.4
  'explain_guests_greyed_out_text' => 'Nie możesz zmienić ustawień tej grupy, ponieważ ustawiona jest opcja &quot;Zezwól niezalogowanym użytkownikom (anonimowym lub gościom) na dostęp&quot; na &quot;Nie&quot; na stronie konfiguracyjnej. Wszyscy goście (członkowie grupy %s) mogą się co najwyżej zalogować; w związku z tym ustawienia grup ich nie dotyczą.', //cpg1.4
  'explain_banned_greyed_out_text' => 'Nie możesz zmienić ustawień grupy %s, ponieważ jej członkowie nie mogą i tak nic robić.', //cpg1.4
  'group_assigned_album' => 'przydzielone albumy', //cpg1.4
);// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
  'welcome' => 'Witaj!',
);

$lang_album_admin_menu = array(
  'confirm_delete' => 'Czy na pewno chcesz USUNĄĆ ten album?\\nWszystkie pliki i komentarze również zostaną usunięte.', //js-alert
  'delete' => 'USUŃ',
  'modify' => 'WŁAŚCIWOŚCI',
  'edit_pics' => 'EDYTUJ PLIKI',
);

$lang_list_categories = array(
  'home' => 'Strona główna',
  'stat1' => '<b>[pictures]</b> plików w <b>[albums]</b> albumach i <b>[cat]</b> kategoriach z <b>[comments]</b> komentarzami - wyświetlono <b>[views]</b> razy',
  'stat2' => '<b>[pictures]</b> plików w <b>[albums]</b> albumach wyświetlono <b>[views]</b> razy',
  'xx_s_gallery' => '%s - Galeria użytkownika',
  'stat3' => '<b>[pictures]</b> plików w <b>[albums]</b> albumach z <b>[comments]</b> komentarzami wyświetlono<b>[views]</b> razy',
);

$lang_list_users = array(
  'user_list' => 'Lista użytkowników',
  'no_user_gal' => 'Nie ma galerii użytkowników',
  'n_albums' => '%s albumów',
  'n_pics' => '%s plików',
);

$lang_list_albums = array(
  'n_pictures' => '%s plików',
  'last_added' => ', ostatni dodany %s',
  'n_link_pictures' => '%s dołączonych plików', //cpg1.4
  'total_pictures' => 'łącznie %s plików', //cpg1.4
);

}

// ------------------------------------------------------------------------- //
// File keywordmgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('KEYWORDMGR_PHP')) $lang_keywordmgr_php = array(
  'title' => 'Zarządzanie słowami kluczowymi', //cpg1.4
  'edit' => 'edytuj', //cpg1.4
  'delete' => 'usuń', //cpg1.4
  'search' => 'szukaj', //cpg1.4
  'keyword_test_search' => 'szukaj słowa %s w nowym oknie', //cpg1.4
  'keyword_del' => 'usuń słowo kluczowe %s', //cpg1.4
  'confirm_delete' => 'Czy na pewno chcesz usunąć słowo kluczowe %s z galerii?', //cpg1.4  // js-alert
  'change_keyword' => 'zmień słowo kluczowe', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
  'login' => 'Login',
  'enter_login_pswd' => 'Wpisz swój login i hasło',
  'username' => 'Login',
  'password' => 'Hasło',
  'remember_me' => 'Pamiętaj mnie',
  'welcome' => 'Witaj %s ...',
  'err_login' => '*** Nie możesz się zalogować, spróbuj jeszcze raz ***',
  'err_already_logged_in' => 'Jesteś już zalogowany !',
  'forgot_password_link' => 'Zapomniałem hasła',
  'cookie_warning' => 'Uwaga, Twoja przeglądarka nie obsługuje ciasteczek', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
  'logout' => 'Wyloguj się',
  'bye' => 'Pa pa %s...',
  'err_not_loged_in' => 'Nie jesteś zalogowany !',
);

// ------------------------------------------------------------------------- //
// File minibrowser.php  //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('MINIBROWSER_PHP')) $lang_minibrowser_php = array(
  'close' => 'Zamknij', //cpg1.4
  'submit' => 'OK', //cpg1.4
  'up' => 'Wyżej o jeden ', //cpg1.4
  'current_path' => 'bieżąca ścieżka', //cpg1.4
  'select_directory' => 'proszę wybrać katalog', //cpg1.4
  'click_to_close' => 'Kliknij na obrazie by zamknąć okno',
);

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
  'upd_alb_n' => 'Aktualizuj album %s',
  'general_settings' => 'Ogólne ustawienia',
  'alb_title' => 'Tytuł albumu',
  'alb_cat' => 'Kategoria albumu',
  'alb_desc' => 'Opis albumu',
  'alb_keyword' => 'Słowo kluczowe albumu', //cpg1.4
  'alb_thumb' => 'Miniaturka albumu',
  'alb_perm' => 'Uprawnienia dla tego albumu',
  'can_view' => 'Album mogą przeglądać',
  'can_upload' => 'Odwiedzający mogą dodawać pliki',
  'can_post_comments' => 'Odwiedzający mogą pisać komentarze',
  'can_rate' => 'Odwiedzający mogą oceniać obrazy',
  'user_gal' => 'Galeria użytkownika',
  'no_cat' => '* Brak kategorii *',
  'alb_empty' => 'Album jest pusty',
  'last_uploaded' => 'Ostatnio dodane',
  'public_alb' => 'Wszyscy (album publiczny)',
  'me_only' => 'Tylko ja',
  'owner_only' => 'Tylko właściciel (%s) albumu',
  'groupp_only' => 'Członkowie grupy \'%s\'',
  'err_no_alb_to_modify' => 'W bazie danych nie ma albumu który mógłbyś zmienić.',
  'update' => 'Aktualizuj album',
  'reset_album' => 'Resetuj album', //cpg1.4
  'reset_views' => 'Ustaw licznik wyświetleń na &quot;0&quot; dla %s', //cpg1.4
  'reset_rating' => 'Ustaw oceny wszystkich plików na %s', //cpg1.4
  'delete_comments' => 'Usuń wszystkie komentarze w %s', //cpg1.4
  'delete_files' => '%sNieodwracalnie%s usuń wszystkie pliki w %s', //cpg1.4
  'views' => 'wyświetleń', //cpg1.4
  'votes' => 'głosów', //cpg1.4
  'comments' => 'komentarzy', //cpg1.4
  'files' => 'plików', //cpg1.4
  'submit_reset' => 'zapisz zmiany', //cpg1.4
  'reset_views_confirm' => 'Na pewno', //cpg1.4
  'notice1' => '(*) w zależności od ustawień %sgrup%s ',  //cpg1.4 //(do not translate %s!)
  'alb_password' => 'Hasło albumu', //cpg1.4
  'alb_password_hint' => 'Podpowiedź do hasła albumu', //cpg1.4
  'edit_files' =>'Edytuj pliki', //cpg1.4
  'parent_category' =>'Kategoria nadrzędna', //cpg1.4
  'thumbnail_view' =>'Widok miniatur', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File phpinfo.php
// ------------------------------------------------------------------------- //

if (defined('PHPINFO_PHP')) $lang_phpinfo_php = array(
  'php_info' => 'PHP info',
  'explanation' => 'This is the output generated by the PHP-function <a href="http://www.php.net/phpinfo">phpinfo()</a>, displayed within Coppermine (trimming the output at the right side).',
  'no_link' => 'Having others see your phpinfo can be a security risk, that\'s why this page is only visible when you\'re logged in as admin. You can not post a link to this page for others, they will be denied access.',
);

// ------------------------------------------------------------------------- //
// File picmgr.php //cpg1.4
// ------------------------------------------------------------------------- //
if (defined('PICMGR_PHP')) $lang_picmgr_php = array(
  'pic_mgr' => 'Picture Manager', //cpg1.4
  'select_album' => 'Select Album', //cpg1.4
  'delete' => 'Delete', //cpg1.4
  'confirm_delete1' => 'Are you sure you want to delete this picture ?', //cpg1.4
  'confirm_delete2' => '\nPicture will be permanently deleted.', //cpg1.4
  'apply_modifs' => 'Apply modifications', //cpg1.4
  'confirm_modifs' => 'Confirm modifications', //cpg1.4
  'pic_need_name' => 'Picture needs to have a name !', //cpg1.4
  'no_change' => 'You did not make any change !', //cpg1.4
  'no_album' => '* No album *', //cpg1.4
  'explanation_header' => 'The custom sort order you can specify on this page will only be taken into account if', //cpg1.4
  'explanation1' => 'the admin has set the "Default sort order for files" in the config to "Position descending" or "Position ascending" (global setting for all users who haven\'t chosen another sort option individually)', //cpg1.4
  'explanation2' => 'the user has chosen "Position descending" or "Position ascending" on the thumbail page (per user setting)', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File pluginmgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('PLUGINMGR_PHP')){

$lang_pluginmgr_php = array(
  'confirm_uninstall' => 'Czy na pewno chcesz ODINSTALOWAĆ tę wtyczkę?', //cpg1.4
  'confirm_delete' => 'Czy na pewno chcesz USUNĄĆ tę wtyczkę?', //cpg1.4
  'pmgr' => 'Zarządzanie wtyczkami', //cpg1.4
  'name' => 'Nazwa', //cpg1.4
  'author' => 'Autor', //cpg1.4
  'desc' => 'Opis', //cpg1.4
  'vers' => 'v', //cpg1.4
  'i_plugins' => 'Zainstalowane wtyczki', //cpg1.4
  'n_plugins' => 'Niezainstalowane wtyczki', //cpg1.4
  'none_installed' => 'Niczego nie zainstalowano', //cpg1.4
  'operation' => 'Operacja', //cpg1.4
  'not_plugin_package' => 'Nadesłany plik nie jest pakietem wtyczki.', //cpg1.4
  'copy_error' => 'Wystąpił błąd przy kopiowaniu pakietu do katalogu wtyczek.', //cpg1.4
  'upload' => 'Wyślij', //cpg1.4
  'configure_plugin' => 'Konfiguruj wtyczkę', //cpg1.4
  'cleanup_plugin' => 'Przeczyść wtyczkę', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
  'already_rated' => 'Już oceniłeś ten plik.',
  'rate_ok' => 'Twoja ocena została przyjęta',
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
  'page_title' => 'Rejestracja nowego użytkownika',
  'term_cond' => 'Warunki rejestracji',
  'i_agree' => 'Zgadzam się',
  'submit' => 'Kontynuuj rejestrację',
  'err_user_exists' => 'Użytkownik o takiej nazwie już istnieje. Wybierz inną nazwę',
  'err_password_mismatch' => 'Potwierdzenie hasła nie zgadza się z hasłem',
  'err_uname_short' => 'Nazwa użytkownika musi mieć co najmniej 2 litery',
  'err_password_short' => 'Hasło musi mieć co najmniej 2 litery',
  'err_uname_pass_diff' => 'Login i hasło nie mogą być identyczne',
  'err_invalid_email' => 'Nieprawidłowy adres e-mail',
  'err_duplicate_email' => 'Inny zarejestrowany uzytkownik użył już tego adresu e-amil. Użyj innego adresu.',
  'enter_info' => 'Wprowadź informacje potrzebne do rejestracji',
  'required_info' => 'Wymagane informacje',
  'optional_info' => 'Informacje dodatkowe',
  'username' => 'Użytkownik',
  'password' => 'Hasło',
  'password_again' => 'Powtórz hasło',
  'email' => 'E-mail',
  'location' => 'Miasto',
  'interests' => 'Zainteresowania',
  'website' => 'Strona www',
  'occupation' => 'Zawód',
  'error' => 'Błąd',
  'confirm_email_subject' => '%s - Informacja o rejestracji',
  'information' => 'Informacja',
  'failed_sending_email' => 'E-mail z potwierdzeniem rejestracji nie mógł zostać wysłany !',
  'thank_you' => 'Dziękujemy za zarejestrowanie się.<br /><br />Wiadomość z informacją jak aktywować konto została wysłana na Twój adres podany przy rejestracji.',
  'acct_created' => 'Twoje konto zostało utworzone. Możesz zalogować się używając swojego loginu i hasła.',
  'acct_active' => 'Twoje konto jest już aktywne. Możesz zalogować się używając swojego loginu i hasła',
  'acct_already_act' => 'Konto jest już aktywne!', //cpg1.4
  'acct_act_failed' => 'To konto nie może być aktywowane!',
  'err_unk_user' => 'Wybrany użytkownik nie istnieje!',
  'x_s_profile' => '%s - profil użytkownika',
  'group' => 'Grupa',
  'reg_date' => 'Dołączył',
  'disk_usage' => 'Miejsce na serwerze',
  'change_pass' => 'Zmień hasło',
  'current_pass' => 'Aktualne hasło',
  'new_pass' => 'Nowe hasło',
  'new_pass_again' => 'Powtórz nowe hasło',
  'err_curr_pass' => 'Aktualne hasło jest nieprawidłowe',
  'apply_modif' => 'Zastosuj zmiany',
  'change_pass' => 'Zmiana hasła',
  'update_success' => 'Twój profil został uaktualniony',
  'pass_chg_success' => 'Twoje hasło zostało zmienione',
  'pass_chg_error' => 'Twoje hasło nie zostało zmienione',
  'notify_admin_email_subject' => 'Powiadomienie o nowej rejestracji w {SITE_NAME}',
  'last_uploads' => 'Ostatnio dodany plik.<br />Kliknij żeby zobaczyć wszystkie przesłane pliki', //cpg1.4
  'last_comments' => 'Ostatni komentarz.<br />Kliknj żeby zobaczyć wszystkie komentarze', //cpg1.4
  'notify_admin_email_body' => 'Nowy użytkownik o nazwie "%s" właśnie zarejestrował się w Twojej Galerii',
  'pic_count' => 'Plików przesłanych', //cpg1.4
  'notify_admin_request_email_subject' => 'Powiadomienie o nowej rejestracji w Galerii', //cpg1.4
  'thank_you_admin_activation' => 'Dziękujemy.<br /><br />Twoja prośba o aktywację konta w Galerii została przesłana do Administratora. Otrzymasz e-mail z informacją o aktywacji (lub nie).', //cpg1.4
  'acct_active_admin_activation' => 'Konto jest akywne. Powiadomienie zostało wysłane do użytkownika.', //cpg1.4
  'notify_user_email_subject' => '{SITE_NAME} - powiadomienie o aktywacji', //cpg1.4
);

$lang_register_confirm_email = <<<EOT
Dziekujemy za rejestracje w {SITE_NAME}

Aby dokończyć aktywację Twojego konta "{USER_NAME}", kliknij w link poniżej lub skopiuj go i wklej do paska adresu swojej przeglądarki internetowej.

<a href="{ACT_LINK}">{ACT_LINK}</a>

Aministratorzy {SITE_NAME}

EOT;

$lang_register_approve_email = <<<EOT
Nowy użytkownik o nazwie "{USER_NAME}" właśnie zarejestrował się w Twojej Galerii.

Aby dokończyc aktywację konta, kliknij w link poniżej lub skopiuj go i wklej do paska adresu swojej przeglądarki internetowej.

<a href="{ACT_LINK}">{ACT_LINK}</a>

EOT;

$lang_register_activated_email = <<<EOT
Twoje konto zostało zatwierdzone i jest już aktywne.

Możesz zalogować się na <a href="{SITE_LINK}">{SITE_LINK}</a> używając "{USER_NAME}" jako nazwy użytkownika.

Aministratorzy {SITE_NAME}

EOT;
}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
  'title' => 'Akceptowanie komentarzy',
  'no_comment' => 'Nie ma komentarzy do akceptacji',
  'n_comm_del' => 'usunięto %s komentarzy',
  'n_comm_disp' => 'Liczba wyświetlanych komentarzy',
  'see_prev' => 'Zobacz poprzedni',
  'see_next' => 'Zobacz następny',
  'del_comm' => 'Usuń wybrane komentarze',
  'user_name' => 'Użytkownik', //cpg1.4
  'date' => 'Data', //cpg1.4
  'comment' => 'Komentarz', //cpg1.4
  'file' => 'Plik', //cpg1.4
  'name_a' => 'Wg nazwy użytkownika rosnąco', //cpg1.4
  'name_d' => 'Wg nazwy użytkownika malejąco', //cpg1.4
  'date_a' => 'Wg daty rosnąco', //cpg1.4
  'date_d' => 'Wg daty malejąco', //cpg1.4
  'comment_a' => 'Wg treści komentarza rosnąco', //cpg1.4
  'comment_d' => 'Wg treści komentarza malejąco', //cpg1.4
  'file_a' => 'Wg pliku rosnąco', //cpg1.4
  'file_d' => 'Wg pliku malejąco', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File search.php                                                           //
// ------------------------------------------------------------------------- //


if (defined('SEARCH_PHP')){

$lang_search_php = array(
  'title' => 'Przeszukiwanie listy plików', //cpg1.4
  'submit_search' => 'szukaj', //cpg1.4
  'keyword_list_title' => 'Lista słów kluczowych', //cpg1.4
  'keyword_msg' => 'Powyższa lista nie jest ostateczna. Nie zawiera słów zawartych w tytułach lub opisach zdjęć. Spróbuj wyszukiwania pełnotekstowego.',  //cpg1.4
  'edit_keywords' => 'Edytuj słowa kluczowe', //cpg1.4
  'search in' => 'Szukaj w:', //cpg1.4
  'ip_address' => 'adres IP', //cpg1.4
  'fields' => 'Szukaj w:', //cpg1.4
  'age' => 'Wiek', //cpg1.4
  'newer_than' => 'Nowsze niż', //cpg1.4
  'older_than' => 'Starsze niż', //cpg1.4
  'days' => 'dni', //cpg1.4
  'all_words' => 'Wszystkie słowa (AND)', //cpg1.4
  'any_words' => 'Dowolne ze słów (OR)', //cpg1.4
);

$lang_adv_opts = array(
  'title' => 'Tytuł', //cpg1.4
  'caption' => 'Nagłówek', //cpg1.4
  'keywords' => 'Słowa kluczowe', //cpg1.4
  'owner_name' => 'Właściciel', //cpg1.4
  'filename' => 'Nazwa pliku', //cpg1.4
);

}

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
  'page_title' => 'Szukaj nowych plików',
  'select_dir' => 'Wybierz katalog',
  'select_dir_msg' => 'Ta funkcja pozwala na dodawanie grupy plików które przesłałeś na serwer poprzez FTP.<br /><br />Wybierz katalog, do którego nadesłałeś swoje pliki.', //cpg1.4
  'no_pic_to_add' => 'Nie ma pliku do dodania',
  'need_one_album' => 'Musisz mieć co najmniej jeden album aby użyć tej funkcji',
  'warning' => 'Uwaga',
  'change_perm' => 'skrypt nie może pisać w tym katalogu, musisz zmienić jego uprawnienia na 755 lub 777 zanim dodasz pliki!',
  'target_album' => '<b>Umieść pliki z &quot;</b>%s<b>&quot; w albumie </b>%s',
  'folder' => 'Folder',
  'image' => 'plik',
  'album' => 'Album',
  'result' => 'Rezultat',
  'dir_ro' => 'Tylko do odczytu. ',
  'dir_cant_read' => 'Brak praw odczytu. ',
  'insert' => 'Dodawanie nowych plików do galerii',
  'list_new_pic' => 'Lista nowych plików',
  'insert_selected' => 'Wstaw wybrane pliki',
  'no_pic_found' => 'Brak nowych plików',
  'be_patient' => 'Proszę czekać, dodawanie plików może zająć dłuższą chwilę.',
  'no_album' => 'nie wybrano albumu',
  'result_icon' => 'kliknij aby uzyskać szczegółowe informacje lub odświeżyć',  //cpg1.4
  'notes' =>  '<ul>'.
                          '<li><b>OK</b>: oznacza, że plik został pomyślnie dodany'.
                          '<li><b>DP</b>: oznacza, że plik jest kopią innego, znajdującego się już w bazie danych'.
                          '<li><b>PB</b>: oznacza, że plik nie mógł zostać dodany, sprawdź ustawienia i uprawnienia katalogów, w których znajdują się pliki'.
                          '<li><b>NA</b>: oznacza, że nie wybrałeś albumu, do którego powinny zostać dodane zdjęcia. Kliknij \'<a href="javascript:history.back(1)">wstecz</a>\' i wybierz album. Jeśli nie masz albumu, <a href="albmgr.php">utwórz go</a></li>'.
                          '<li>Jeżeli nie pojawiają się ikony OK, DP, PB, kliknij na obrazek zastępczy aby zobaczyć komunikat o ewentualnych błędach'.
                          '<li>Jeżeli twoja przeglądarka przerwie oczekiwanie, wciśnij "Odśwież"'.
                          '</ul>',
  'select_album' => 'wybierz album',
  'check_all' => 'Zaznacz wszystko',
  'uncheck_all' => 'Odznacz wszystko',
  'no_folders' => 'Nie ma jeszcze podkatalogów w katalogu "albumy". Pamiętaj aby utworzyć co najmniej jeden katalog podrzędny w katalogu "albumy" i tam przesyłać pliki. Nie powinieneś przesyłać plików do katalogów "userpics" lub "edit", są przeznaczone do przesyłania przez http oraz celów własnych galerii.', //cpg1.4
   'albums_no_category' => 'Albumy bez kategorii', //cpg1.4 // album pulldown mod, added by frogfoot
  'personal_albums' => '* Albumy osobiste', //cpg1.4 // album pulldown mod, added by frogfoot
  'browse_batch_add' => 'Interfejs z podglądem (zalecany)', //cpg1.4
  'edit_pics' => 'Edytuj pliki', //cpg1.4
  'edit_properties' => 'Ustawienia albumu', //cpg1.4
  'view_thumbs' => 'Podgląd miniatur', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File stat_details.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('STAT_DETAILS_PHP')) $lang_stat_details_php = array(
  'show_hide' => 'pokaż/ukryj tę kolumnę', //cpg1.4
  'vote' => 'Szczegóły głosowania', //cpg1.4
  'hits' => 'Szczegóły wyświetleń', //cpg1.4
  'stats' => 'Statystyki głosowania', //cpg1.4
  'sdate' => 'Data', //cpg1.4
  'rating' => 'Ocena', //cpg1.4
  'search_phrase' => 'Fraza wyszukiwana', //cpg1.4
  'referer' => 'Odsyłający', //cpg1.4
  'browser' => 'Przeglądarka', //cpg1.4
  'os' => 'System operacyjny', //cpg1.4
  'ip' => 'IP', //cpg1.4
  'sort_by_xxx' => 'Sortuj wg: %s', //cpg1.4
  'ascending' => 'rosnąco', //cpg1.4
  'descending' => 'malejąco', //cpg1.4
  'internal' => 'wewn', //cpg1.4
  'close' => 'zamknij', //cpg1.4
  'hide_internal_referers' => 'ukryj własnych odsyłających', //cpg1.4
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
  'title' => 'Prześlij plik',
  'custom_title' => 'Dostosowany formularz wysyłki',
  'cust_instr_1' => 'Możesz wybrać własną liczbę pól wysyłki. Nie możesz jednak wybrać więcej niż wynosi podany poniżej limit.',
  'cust_instr_2' => 'Wybór liczby pól',
  'cust_instr_3' => 'Pola przesyłu plików: %s',
  'cust_instr_4' => 'Pola przesyłu adresów URL: %s',
  'cust_instr_5' => 'Pola przesyłu adresów URL:',
  'cust_instr_6' => 'Pola przesyłu plików:',
  'cust_instr_7' => 'Proszę wpisać odpowiednią liczbę pól każdego typu przesyłu, a następnie kliknąć \'Dalej\'. ',
  'reg_instr_1' => 'Nieprawidłowe działanie przy tworzeniu formularza.',
  'reg_instr_2' => 'Możesz teraz przesłać pliki używając poniższych pól formularza. Rozmiar każdego z nadesłanych plików nie powinien przekraczać %s KB. Pliki wysłane w sekcjach \'Wysyłanie plików\' i \'Wysyłanie adresów URL\' nie zostaną rozpakowane.',
  'reg_instr_3' => 'Jeśli chcesz aby przesłane pliki zostały rozpakowane, musisz użyć pola wysyłki umieszczonego w sekcji \'Wysyłanie plików ZIP z rozpakowaniem\'.',
  'reg_instr_4' => 'Używając sekcji przesyłu adresów URL wpisz ścieżkę do pliku w postaci: http://www.mysite.com/images/example.jpg',
  'reg_instr_5' => 'Kiedy skończysz wypełniać formularz, kliknij \'Dalej\'.',
  'reg_instr_6' => 'Wysyłanie plików ZIP z rozpakowaniem:',
  'reg_instr_7' => 'Wysyłanie plików:',
  'reg_instr_8' => 'Wysyłanie adresów URL:',
  'error_report' => 'Raport o błędach',
  'error_instr' => 'Następujące pliki napotkały na problemy przy przesyłaniu:',
  'file_name_url' => 'Nazwa pliku/adres URL',
  'error_message' => 'Treść błędu',
  'no_post' => 'Plik nie wysłany metodą POST.',
  'forb_ext' => 'Niedozwolone rozszerzenie pliku.',
  'exc_php_ini' => 'Przekroczono rozmiar pliku dozwolony w php.ini.',
  'exc_file_size' => 'Przekroczono rozmiar pliku dozwolony przez CPG.',
  'partial_upload' => 'Częściowa wysyłka.',
  'no_upload' => 'Nie nastąpiła wysyłka.',
  'unknown_code' => 'Nieznany błąd przesyłu PHP.',
  'no_temp_name' => 'Brak wysyłu - brak nazwy tymczasowej.',
  'no_file_size' => 'Nie zawiera danych/uszkodzony',
  'impossible' => 'Przeniesienie niemożliwe.',
  'not_image' => 'To nie jest plik obrazu/uszkodzony',
  'not_GD' => 'Plik nieobsługiwany przez GD.',
  'pixel_allowance' => 'Wysokość i/lub szerokość nadesłanego obrazu jest większa niż wymiary określone przez galerię.', //cpg1.4
  'incorrect_prefix' => 'Nieprawidłowy przedrostek adresu URL',
  'could_not_open_URI' => 'Nie udało się połączyć z adresem URI.',
  'unsafe_URI' => 'Bezpieczeństwo niemożliwe do zweryfikowania.',
  'meta_data_failure' => 'Błąd metadanych',
  'http_401' => '401 Brak autoryzacji',
  'http_402' => '402 Wymagana płatność',
  'http_403' => '403 Dostęp zabroniony',
  'http_404' => '404 Nie znaleziono',
  'http_500' => '500 Wewnętrzny błąd serwera',
  'http_503' => '503 Usługa niedostępna',
  'MIME_extraction_failure' => 'Nie udało się określić typu MIME.',
  'MIME_type_unknown' => 'Nieznany typ MIME',
  'cant_create_write' => 'Nie udało się utworzyć/zapisać pliku.',
  'not_writable' => 'Nie udało się zapisać do pliku.',
  'cant_read_URI' => 'Nie udało się odczytać adresu URI/URL',
  'cant_open_write_file' => 'Nie można było otworzyć pliku zapisu dla adresu URL.',
  'cant_write_write_file' => 'Nie można pisać do pliku zapisu dla adresu URL.',
  'cant_unzip' => 'Nie udało się rozpakować.',
  'unknown' => 'Nieznany błąd',
  'succ' => 'Prawidłowo przesłane',
  'success' => '%s prawidłowo przesłanych plików.',
  'add' => 'Proszę kliknąć na \'Dalej\' aby dodać pliki do albumów.',
  'failure' => 'Błąd przesyłu',
  'f_info' => 'Informacja o pliku',
  'no_place' => 'Poprzedni plik nie został prawidłowo umieszczony.',
  'yes_place' => 'Poprzedni plik został prawidłowo umieszczony.',
  'max_fsize' => 'Maksymalny dopuszczalny rozmiar pliku to %s KB',
  'album' => 'Album',
  'picture' => 'Plik',
  'pic_title' => 'Tytuł pliku',
  'description' => 'Opis pliku',
  'keywords' => 'Słowa kluczowe (oddzielaj spacjami)<br /><a href="#" onClick="return MM_openBrWindow(\'keyword_select.php\',\'selectKey\',\'width=250, height=400, scrollbars=yes,toolbar=no,status=yes,resizable=yes\')">Wstaw z listy</a>', //cpg1.4
  'keywords_sel' =>'Wybierz słowo kluczowe', //cpg1.4
  'err_no_alb_uploadables' => 'Przepraszamy. Nie możesz wysyłać plików do żadnego albumu',
  'place_instr_1' => 'Proszę teraz umieścić pliki w albumach. Możesz również podać istotne informacje o każdym z nich.',
  'place_instr_2' => 'Więcej plików czeka na rozmieszczenie w albumach. Proszę kliknąć \'Dalej\'.',
  'process_complete' => 'Wstawianie plików do albumów zakończyło się powodzeniem.',
   'albums_no_category' => 'Albumy bez kategorii', //cpg1.4. //album pulldown mod, added by frogfoot
  'personal_albums' => '* Albumy osobiste', //cpg1.4 //album pulldown mod, added by frogfoot
  'select_album' => 'Wybierz album', //cpg1.4 //album pulldown mod, added by frogfoot
  'close' => 'Zamknij', //cpg1.4
  'no_keywords' => 'Brak dostępnych słów kluczowych!', //cpg1.4
  'regenerate_dictionary' => 'Zbuduj ponownie słownik', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
  'memberlist' => 'Lista użytkowników', //cpg1.4
  'user_manager' => 'Opcję użytkowników', //cpg1.4
  'title' => 'Zarządzaj użytkownikami',
  'name_a' => 'Imiona rosnąco',
  'name_d' => 'Imiona malejąco',
  'group_a' => 'Grupy rosnąco',
  'group_d' => 'Grupy malejąco',
  'reg_a' => 'Data rejestracji rosnąco',
  'reg_d' => 'Data rejestracji malejąco',
  'pic_a' => 'Pliki rosnąco',
  'pic_d' => 'Pliki malejąco',
  'disku_a' => 'Miejsce na serwerze rosnąco',
  'disku_d' => 'Miejsce na serwerze malejąco',
  'lv_a' => 'Ostatnia wizyta rosnąco',
  'lv_d' => 'Ostatnia wizyta malejąco',
  'sort_by' => 'Sortuj użytkowników wg.',
  'err_no_users' => 'Tabela użytkowników jest pusta !',
  'err_edit_self' => 'Nie możesz edytować swojego profilu, użyj "Mój profil" na stronie głównej',
  'edit' => 'Edycja', //cpg1.4
  'with_selected' => 'Wybrane:', //cpg1.4
  'delete' => 'Usuń', //cpg1.4
  'delete_files_no' => 'zachowaj publiczne pliki (ale jako anonimowe)', //cpg1.4
  'delete_files_yes' => 'usuń również publiczne pliki', //cpg1.4
  'delete_comments_no' => 'zachowaj komentarze (ale jako anonimowe)', //cpg1.4
  'delete_comments_yes' => 'usuń również komentarze', //cpg1.4
  'activate' => 'Aktywacja', //cpg1.4
  'deactivate' => 'Deaktywacja', //cpg1.4
  'reset_password' => 'Zresetuj hasło', //cpg1.4
  'change_primary_membergroup' => 'Usuń główną grupę', //cpg1.4
  'add_secondary_membergroup' => 'Dodaj grupę', //cpg1.4
  'name' => 'Nazwa',
  'group' => 'Grupa',
  'inactive' => 'Nieaktywny',
  'operations' => 'Operacje',
  'pictures' => 'Pliki',
  'disk_space_used' => 'Użyte miejsce', //cpg1.4
  'disk_space_quota' => 'Miejsce', //cpg1.4
  'registered_on' => 'Rejestracja', //cpg1.4
  'last_visit' => 'Ostatnia wizyta',
  'u_user_on_p_pages' => '%d użytkowników na %d stronach',
  'confirm_del' => 'Jesteś pewien, że chcesz USUNĄĆ tego użytkownika ? \\nWszystkie jego pliki i albumy również zostaną usunięte.', //js-alert
  'mail' => 'MAIL',
  'err_unknown_user' => 'Wybrany użytkownik nie istnieje !',
  'modify_user' => 'Uaktualnij dane o użytkowniku',
  'notes' => 'Notki',
  'note_list' => '<li>Jeśli nie chcesz zmieniać aktualnego hasła pozostaw pole "Hasło" puste"',
  'password' => 'Hasło',
  'user_active' => 'Użytkownik jest aktywny',
  'user_group' => 'Grupa użytkowników',
  'user_email' => 'e-Mail użytkownika',
  'user_web_site' => 'Strona WWW',
  'create_new_user' => 'Dodaj konto',
  'user_location' => 'Lokalizacja',
  'user_interests' => 'Zainteresowania',
  'user_occupation' => 'Zajęcie',
  'user_profile1' => '$user_profile1', //cpg1.4
  'user_profile2' => '$user_profile2', //cpg1.4
  'user_profile3' => '$user_profile3', //cpg1.4
  'user_profile4' => '$user_profile4', //cpg1.4
  'user_profile5' => '$user_profile5', //cpg1.4
  'user_profile6' => '$user_profile6', //cpg1.4
  'latest_upload' => 'Ostatnio dodane pliki',
  'never' => 'Nigdy',
  'search' => 'Szukanie użytkowników', //cpg1.4
  'submit' => 'Potwierdź', //cpg1.4
  'search_submit' => 'Dalej!', //cpg1.4
  'search_result' => 'Szukaj wśród wyników: ', //cpg1.4
  'alert_no_selection' => 'Musisz wybrać najpierw co najmniej jednego użytkownika!', //cpg1.4 //js-alert
  'password' => 'Hasło', //cpg1.4
  'select_group' => 'Wybierz grupę', //cpg1.4
  'groups_alb_access' => 'Dostęp do albumów', //cpg1.4
  'album' => 'Album', //cpg1.4
  'category' => 'Kategoria', //cpg1.4
  'modify' => 'Zmienić?', //cpg1.4
  'group_no_access' => 'Ta grupa nie ma dostępu', //cpg1.4
  'notice' => 'Notka', //cpg1.4
  'group_can_access' => 'Album(y) do którego ma dostęp tylko grupa "%s" ', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //

if (defined('UTIL_PHP')) {
$lang_util_desc_php = array(
'Pobiera tytuły plików z ich nazw', //cpg1.4
'Usuwa tytuły', //cpg1.4
'Odbudowuje miniatury i pomniejszone zdjęcia', //cpg1.4
'Usuwa oryginalne obrazy i zastępuje je zmniejszonymi wersjami', //cpg1.4
'Usuwa oryginalne lub pomniejszone obrazy w celu zwolnienia miejsca', //cpg1.4
'Usuwa komentarze nie posiadające autora', //cpg1.4
'Odczytuje ponownie rozmiary plików (jeśli były edytowane ręcznie)', //cpg1.4
'Zeruje liczniki wyświetleń', //cpg1.4
'Wyświetla phpinfo', //cpg1.4
'Aktualizuje bazę danych', //cpg1.4
'Wyświetla pliki logów', //cpg1.4
);
$lang_util_php = array(
  'title' => 'Narzędzia administracyjne (zmiana wielkości obrazów)',
  'what_it_does' => 'Przeznaczenie',
  'file' => 'Plik',
  'problem' => 'Problem', //cpg1.4
  'status' => 'Stan', //cpg1.4
  'title_set_to' => 'tytuł zmieniony na',
  'submit_form' => 'wyślij',
  'updated_succesfully' => 'aktualizowany pomyślnie',
  'error_create' => 'BŁĄD przy tworzeniu',
  'continue' => 'Przetwórz więcej obrazów',
  'main_success' => 'Plik %s został pomyślnie użyty jako plik główny',
  'error_rename' => 'Błąd przy zmianie nazwy z %s na %s',
  'error_not_found' => 'Nie odnaleziono pliku %s',
  'back' => 'powrót',
  'thumbs_wait' => 'Aktualizuję miniatury i pomniejszone zdjęcia, proszę czekać...',
  'thumbs_continue_wait' => 'Kontynuacja aktualizacji miniatur i/lub pomniejszonych zdjęć...',
  'titles_wait' => 'Aktualizacja tytułów, proszę czekać...',
  'delete_wait' => 'Usuwanie tytułów, proszę czekać...',
  'replace_wait' => 'Usuwanie oryginalnych zdjęć i zastępowanie ich pomniejszonymi obrazami, proszę czekać...',
  'instruction' => 'Szybka instrukcja',
  'instruction_action' => 'Wybierz działanie',
  'instruction_parameter' => 'Ustaw parametry',
  'instruction_album' => 'Wybierz album',
  'instruction_press' => 'Naciśnij %s',
  'update' => 'Aktualizuj miniatury i/lub pomniejszone zdjęcia',
  'update_what' => 'Co powinno zostać zaktualizowane',
  'update_thumb' => 'Tylko miniatury',
  'update_pic' => 'Tylko pomniejszone zdjęcia',
  'update_both' => 'Miniatury i pomniejszone zdjęcia',
  'update_number' => 'Liczba obrazów do przetworzenia na 1 kliknięcie',
  'update_option' => '(Spróbuj ustawić mniejszą wartość jeśli napotkasz na problemy z przekroczeniem czasu oczekiwania)',
  'filename_title' => 'Nazwa pliku &rArr; Tytuł obrazu ',
  'filename_how' => 'Jak przetworzyć nazwę pliku',
  'filename_remove' => 'Usuń rozszerzenie .jpg i zastąp znaki _ (podkreślenia) spacjami',
  'filename_euro' => 'Zmień 2003_11_23_13_20_20.jpg na 23/11/2003 13:20',
  'filename_us' => 'Zmień 2003_11_23_13_20_20.jpg na 11/23/2003 13:20',
  'filename_time' => 'Zmień 2003_11_23_13_20_20.jpg na 13:20',
  'delete' => 'Usuń tytuły plików lub oryginalne obrazy',
  'delete_title' => 'Usuń tytuły plików',
  'delete_title_explanation' => 'Zostaną usunięte wszystkie tytuły plików w wybranym albumie.', //cpg1.4
  'delete_original' => 'Usuń oryginalne obrazy',
  'delete_original_explanation' => 'Zostaną usunięte oryginalne (duże) obrazy.', //cpg1.4
  'delete_intermediate' => 'Usuń pośrednie obrazy', //cpg1.4
  'delete_intermediate_explanation' => 'Zostaną usunięte pośrednie (zwykłe) zdjęcia.<br />Użyj tej opcji aby zwolnić miejsce na dysku jeśli wyłączyłeś \'Twórz pośrednie obrazy\' w pliku konfiguracyjnym po dodaniu zdjęć.', //cpg1.4
  'delete_replace' => 'Usuwa oryginalne obrazy zastępując je pomniejszonymi wersjami',
  'titles_deleted' => 'Usunięto wszystkie tytuły w wybranym albumie', //cpg1.4
  'deleting_intermediates' => 'Usuwanie pośrednich obrazów, proszę czekać...', //cpg1.4
  'searching_orphans' => 'Trwa wyszukiwanie opuszczonych elementów, proszę czekać...', //cpg1.4
  'select_album' => 'Wybierz album',
  'delete_orphans' => 'Usuń komentarze do nieistniejących plików', //cpg1.4
  'delete_orphans_explanation' => 'Ta opcja pozwoli zidentyfikować i usunąć komentarze przypisane do plików które już nie znajdują się w galerii.<br />Sprawdza wszystkie albumy.', //cpg1.4
  'refresh_db' => 'Pobierz ponownie wymiary obrazu i rozmiar pliku', //cpg1.4
  'refresh_db_explanation' => 'Ta opcja pozwala odczytać ponownie informacje o rozmiarach plików. Użyj jej, jeśli zauważysz, że nieprawidłowo obliczany jest limit miejsca (np. po ręcznej edycji plików).', //cpg1.4
  'reset_views' => 'Zeruj liczniki wyświetleń', //cpg1.4
  'reset_views_explanation' => 'Ustawia wszystkie liczniki wyświetleń na zero w wybranym albumie.', //cpg1.4
  'orphan_comment' => 'Znaleziono opuszczone komentarze',
  'delete' => 'Usuń',
  'delete_all' => 'Usuń wszystkie',
  'delete_all_orphans' => 'Usunąć wszystkie?', //cpg1.4
  'comment' => 'Komentarz: ',
  'nonexist' => 'przypisany do nieistniejącego pliku # ',
  'phpinfo' => 'Pokaż phpinfo',
  'phpinfo_explanation' => 'Zawiera techniczne informacje dotyczące serwera.<br /> - Możesz zostać poproszony o podanie tej informacji, gdy będziesz zwracać się o pomoc.', //cpg1.4
  'update_db' => 'Aktualizuj bazę danych',
  'update_db_explanation' => 'Jeśli podmieniłeś pliki Coppermine, dodałeś modyfikację lub aktualizowałeś z poprzedniej wersji, uruchom aktualizację bazy danych. Pozwoli to na utworzenie koniecznych tabel oraz ustawień konfiguracyjnych w twojej bazie danych coppermine.',
  'view_log' => 'Zobacz pliki logów', //cpg1.4
  'view_log_explanation' => 'Coppermine może śledzić poczynania użytkowników. Możesz przeglądać te logi jeśli włączyłeś logowanie w <a href="admin.php">konfiguracji coppermine</a>.', //cpg1.4
  'versioncheck' => 'Sprawdź wersje', //cpg1.4
  'versioncheck_explanation' => 'Sprawdza wersje plików, aby stwerdzić czy wszystkie zostały podmienione podczas aktualizacji, lub jeśli pliki źródłowe coppermine zostały aktualizowane już po wypuszczeniu bieżącej wersji.', //cpg1.4
  'bridgemanager' => 'Menedżer Integracji', //cpg1.4
  'bridgemanager_explanation' => 'Włącza/wyłącza integrację (mostkowanie) Coppermine z inną aplikacją (np. forum).', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File versioncheck.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('VERSIONCHECK_PHP')) $lang_versioncheck_php = array(
  'title' => 'Versioncheck', //cpg1.4
  'what_it_does' => 'Ta strona jest przeznaczona dla użytkowników, którzy aktualizowali swoją instalację Coppermine. Ten skrypt czyta kolejno wszystkie pliki na twoim serwerze i próbuje ustalić, czy lokalne wersje pokrywają się z tymi, któe znajdują się w archiwum http://coppermine.sourceforge.net, zaznaczając pliki, które tak czy siak powinieneś aktualizować.<br />Na czerwono zostaną zaznaczone wszystkie pliki wymagające interwencji. Wpisy w kolorze żółtym będą potrzebowały przejrzenia. Wpisy zielone (lub też w twoim domyślnym kolorze czcionki) są w porządku.<br />Kliknij na ikonach pomocy, by dowiedzieć się więcej.', //cpg1.4
  'online_repository_unable' => 'Nie udało się połączyć z archiwum Coppermine', //cpg1.4
  'online_repository_noconnect' => 'Coppermine nie był w stanie połączyć się z archiwum online. Mogą być dwa powody zaistnienia takiej sytuacji:', //cpg1.4
  'online_repository_reason1' => 'Archiwum online jest obecnie nieczynne - sprawdź, czy możesz otworzyć tę stronę: %s - jeśli nie, spróbuj ponownie później.', //cpg1.4
  'online_repository_reason2' => 'PHP na twoim serwerze ma wyłączoną opcję %s (domyślnie jest ona włączona). Jeśli jesteś administratorem tego serwera, włącz tę opcję w <i>php.ini</i> (lub chociaż pozwól na jej obejście poprzez %s). Jeśli dzierżawisz miejsce na serwerze, będziesz niestety musiał żyć z faktem, że nie jesteś w stanie porównać swoich plików z tymi, które są w archiwum Coppermine. Ta strona będzie zatem jedynie wyświetlać wersje plików, które zostały umieszczone w twojej dystrybucji - aktualizacje nie zostaną pokazane.', //cpg1.4
  'online_repository_skipped' => 'Pomijam połączenie z archiwum online', //cpg1.4
  'online_repository_to_local' => 'Skrypt uznaje za domyślne bieżące wersje plików na twoim serwerze. Dane mogą być błędne, jeśli aktualizowałeś Coppermine i nie przesłałeś wszystkich plików. Zmiany w plikach, które nastąpiły już po wypuszczeniu bieżącej wersji również nie będą brane pod uwagę.', //cpg1.4
  'local_repository_unable' => 'Nie udało się połączyć z archiwum na twoim serwerze.', //cpg1.4
  'local_repository_explanation' => 'Coppermine nie był w stanie połączyć się z plikiem %s z archiwum na twoim serwerze. Oznacza to prawdopodobnie, że nie przesłałeś tego pliku na serwer. Spróbuj wykonać to teraz i uruchomić tę stronę jeszcze raz (naciśnij "Odśwież").<br />Jeżeli skrypt nadal sobie nie będzie radził, może to oznaczać, że twój administrator serwera wyłączył niektóre <a href="http://www.php.net/manual/pl/ref.filesystem.php">funkcje systemu plików PHP</a>. W takim przypadku nie będziesz po prostu w stanie używać tego narzędzia, za co przepraszamy.', //cpg1.4
  'coppermine_version_header' => 'Zainstalowana wersja Coppermine', //cpg1.4
  'coppermine_version_info' => 'Masz obecnie zainstalowane: %s', //cpg1.4
  'coppermine_version_explanation' => 'Jeśli uważasz, że jest to zupełne nieporozumienie, ponieważ masz uruchomioną wyższą wersję Coppermine, prawdopodobnie nie przesłałeś najnowszej wersji pliku <i>include/init.inc.php</i>', //cpg1.4
  'version_comparison' => 'Porównanie wersji', //cpg1.4
  'folder_file' => 'katalog/plik', //cpg1.4
  'coppermine_version' => 'wersja cpg', //cpg1.4
  'file_version' => 'wersja pliku', //cpg1.4
  'webcvs' => 'web svn', //cpg1.4
  'writable' => 'zapisywalny', //cpg1.4
  'not_writable' => 'niezapisywalny', //cpg1.4
  'help' => 'Pomoc', //cpg1.4
  'help_file_not_exist_optional1' => 'plik/katalog nie istnieje', //cpg1.4
  'help_file_not_exist_optional2' => 'Plik/katalog %s nie został znaleziony na twoim serwerze. Mimo, że nie jest to bezwzględnie wymagane, powinieneś go przesłać (za pomocą klienta FTP) na serwer, jeśli zauważyłeś problemy.', //cpg1.4
  'help_file_not_exist_mandatory1' => 'plik/katalog nie istnieje', //cpg1.4
  'help_file_not_exist_mandatory2' => 'Plik/katalog %s nie został znaleziony na twoim serserze, mimo że jest on wymagany. Prześlij ten plik na serwer (za pomocą klienta FTP).', //cpg1.4
  'help_no_local_version1' => 'Brak lokalnej wersji pliku', //cpg1.4
  'help_no_local_version2' => 'Skrypt nie był w stanie stwierdzić lokalnej wersji pliku - twój plik jest prawdopodobnie zupełnie nieaktualny, lub też zmodyfikowałeś go, usuwając z nagłówka informacje. Sugerujemy aktualizację tego pliku.', //cpg1.4
  'help_local_version_outdated1' => 'Lokalna wersja przestarzała', //cpg1.4
  'help_local_version_outdated2' => 'Twoja wersja tego pliku pochodzi prawdopodobnie ze starszej edycji Coppermine (prawdopodobnie uaktualniałeś). Upewnij się, że uaktualnisz również ten plik.', //cpg1.4
  'help_local_version_na1' => 'Skrypt nie jest w stanie ustalić informacji o wersji cvs.', //cpg1.4
  'help_local_version_na2' => 'Skrypt nie byłw stanie ustalić która wersja cvs pliku znajduje się na twoim serwerze. Powinieneś przesłać ten plik ze swojego pakietu.', //cpg1.4
  'help_local_version_dev1' => 'Wersja rozwojowa', //cpg1.4
  'help_local_version_dev2' => 'Plik na serwerze wydaje się być nowszy niż edycja Coppermine. Albo używasz wersji rozwojowej (powinieneś tak robić tylko mając pewność, że wiesz co robisz), albo też aktualizowałeś swoją instalację Coppermine i nie przesłałeś pliku include/init.inc.php', //cpg1.4
  'help_not_writable1' => 'Nie można zapisywać w katalogu', //cpg1.4
  'help_not_writable2' => 'Zmień uprawnienia katalogu (CHMOD) aby zapewnić skryptowi możliwość zapisu do katalogu %s.', //cpg1.4
  'help_writable1' => 'Katalog ma prawa do zapisu', //cpg1.4
  'help_writable2' => 'W katalogu %s można dokonywać zapisu. Jest to niepotrzebne ryzyko, coppermine potrzebuje jedynie prawa odczytu/wykonywania.', //cpg1.4
  'help_writable_undetermined' => 'Coppermine nie był w stanie ustalić praw zapisu do katalogu.', //cpg1.4
  'your_file' => 'twój plik', //cpg1.4
  'reference_file' => 'plik wzorcowy', //cpg1.4
  'summary' => 'Podsumowanie', //cpg1.4
  'total' => 'Łączna liczba sprawdzonych plików/katalogów', //cpg1.4
  'mandatory_files_missing' => 'Brakujące niezbędne pliki', //cpg1.4
  'optional_files_missing' => 'Brakujące opcjonalne pliki', //cpg1.4
  'files_from_older_version' => 'Pliki pozostałe ze starej wersji Coppermine', //cpg1.4
  'file_version_outdated' => 'Nieaktualne wersje plików', //cpg1.4
  'error_no_data' => 'Skrypt napotkał na błąd i nie był w stanie pobrać żadnych informacji. Przepraszamy za tę niedogodność.', //cpg1.4
  'go_to_webcvs' => 'przejdź do %s', //cpg1.4
  'options' => 'Opcje', //cpg1.4
  'show_optional_files' => 'pokaż opcjonalne pliki/katalogi', //cpg1.4
  'show_mandatory_files' => 'pokaż niezbędne pliki', //cpg1.4
  'show_file_versions' => 'pokaż wersje plików', //cpg1.4
  'show_errors_only' => 'pokaż tylko problematyczne pliki/katalogi', //cpg1.4
  'show_permissions' => 'pokaż uprawnienia katalogów', //cpg1.4
  'show_condensed_output' => 'pokaż informacje w formie skondensowanej (ułatwia zrzuty ekranu)', //cpg1.4
  'coppermine_in_webroot' => 'coppermine jest zainstalowany w katalogu głównym', //cpg1.4
  'connect_online_repository' => 'spróbuj połączyć się z archiwum online', //cpg1.4
  'show_additional_information' => 'pokaż dodatkowe informacje', //cpg1.4
  'no_webcvs_link' => 'nie wyświetlaj odnośnika do cvs', //cpg1.4
  'stable_webcvs_link' => 'wyświetl odnośnik cvs do stabilnej gałęzi', //cpg1.4
  'devel_webcvs_link' => 'wyświetl odnośnik cvs do rozwojowej gałęzi', //cpg1.4
  'submit' => 'zastosuj zmiany / odśwież', //cpg1.4
  'reset_to_defaults' => 'ustaw domyślne wartości', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File view_log.php  //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('VIEWLOG_PHP')) $lang_viewlog_php = array(
  'delete_all' => 'Usuń wszystkie logi', //cpg1.4
  'delete_this' => 'Usuń ten log', //cpg1.4
  'view_logs' => 'Pokaż logi', //cpg1.4
  'no_logs' => 'Brak logów.', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File xp_publish.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('XP_PUBLISH_PHP')) {

$lang_xp_publish_client = <<<EOT
<h1>Kreator Publikacji w Sieci Web</h1><p>Ten moduł pozwala używać kreatora publikacji w sieci web systemu <b>Windows XP</b> z galerią Coppermine.</p><p>Kod jest oparty na artykule napisanym przez
EOT;

$lang_xp_publish_required = <<<EOT
<h2>Wymagania</h2><ul><li>Windows XP, żeby w ogóle mieć kreatora.</li><li>Działająca instalacja Coppermine <b>z działającą funkcją przesyłania plików.</b></li></ul><h2>Jak zainstalować kreatora na komputerze</h2><ul><li>Kliknij prawym 
EOT;

$lang_xp_publish_select = <<<EOT
Wybierz &quot;zapisz jako...&quot;. Zapisz plik na dysku twardym. Przy zapisie zwróć uwagę, żeby nazwa pliku miała postać <b>cpg_###.reg</b> ( ### oznacza liczbową sygnaturę czasową). Zmień nazwę jeśli zajdzie taka potrzeba (ale zostaw numery). Kiedy skończysz pobieranie, kliknij dwa razy na pliku w celu zarejestrowania swojego serwera w kreatorze sieci web.</li></ul>
EOT;

$lang_xp_publish_testing = <<<EOT
<h2>Testowanie</h2><ul><li>W Eksploratorze Windows wybierz kilka plików i kliknij na <b>Opublikuj xxx w sieci web</b> w lewym panelu.</li><li>Potwierdź wybór plików. Kliknij <b>Dalej</b>.</li><li>Na liście usługodawców wybierz tę pozycję, któa odpowiada twojej galerii (ma nazwę twojej galerii). Jeśli usługa się nie pojawia, sprawdź, czy zainstalowałeś <b>cpg_pub_wizard.reg</b> jak podano wyżej.</li><li>Wpisz swoje informacje logowania jeśli zostaniesz o nie poproszony.</li><li>Wybierz docelowy album dla swoich zdjęć lub utwórz nowy.</li><li>Kliknij <b>dalej</b>. Rozpocznie się przesyłanie twoich obrazów.</li><li>Kiedy się skończy, sprawdź w galerii, czy obrazy zostały poprawnie dodane.</li></ul>
EOT;

$lang_xp_publish_notes = <<<EOT
<h2>Uwagi :</h2><ul><li>Po rozpoczęciu wysyłki kreator nie jest w stanie wyświetlić żadnych komunikatów o błędach zwracanych przez skrypt, więc nie będziesz wiedzieć, czy wysyłka się powiodła, dopóki nie zajrzysz do galerii.</li><li>Jeżeli przesyłka się nie powiedzie, włącz &quot;tryb debugowania&quot; na stronie administracji Coppermine, spróbuj przesłać jeden obraz i sprawdź komunikat o błędzie w
EOT;

$lang_xp_publish_flood = <<<EOT
pliku, który jest umieszczony w katalogu Coppermine na twoim serwerze.</li><li>W celu uniknięcia zalania galerii obrazami wysyłanymi poprzez kreator, jedynie <b>administratorzy galerii</b> i <b>użytkownicy mający własne albumy</b> mogą użyć tego narzędzia.</li>
EOT;



$lang_xp_publish_php = array(
  'title' => 'Coppermine - Kreator publikacji w sieci web', //cpg1.4
  'welcome' => 'Witaj, <b>%s</b>,', //cpg1.4
  'need_login' => 'Musisz zalogować się w galerii za pomocą przeglądarki zanim będziesz mógł użyć tego kreatora.<p/><p>Kiedy będziesz się logować, nie zapomnij ustawić opcji <b>Pamiętaj mnie</b> jeśli jest dostępna.', //cpg1.4
  'no_alb' => 'Niestety nie ma albumu, do którego miałbyś prawo wysyłania plików za pomocą tego kreatora.', //cpg1.4
  'upload' => 'Prześlij obrazy do istniejącego albumu', //cpg1.4
  'create_new' => 'Utwórz nowy album dla swoich obrazów', //cpg1.4
  'album' => 'Album', //cpg1.4
  'category' => 'Kategoria', //cpg1.4
  'new_alb_created' => 'Twój nowy album &quot;<b>%s</b>&quot; został utworzony.', //cpg1.4
  'continue' => 'Naciśnij &quot;Dalej&quot; aby rozpocząć przesyłanie obrazów', //cpg1.4
  'link' => 'ten odnośnik', //cpg1.4
);
}
?>
