<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2009 Coppermine Dev Team
  v1.1 originally written by Gregory DEMAR

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 3
  as published by the Free Software Foundation.
  
  ********************************************
  Coppermine version: 1.4.24
  $HeadURL$
  $Revision$
  $Author$
  $Date$
**********************************************/

if (!defined('IN_COPPERMINE')) { die('Not in Coppermine...');}

// info about translators and translated language
$lang_translation_info = array(
  'lang_name_english' => 'Swedish', //cpg1.4
  'lang_name_native' => 'Svenska', //cpg1.4
  'lang_country_code' => 'se', //cpg1.4
  'trans_name'=> 'Danny Swälas (ecto) & SeB',
  'trans_email' => 'coppermine@danny.swalas.org',
  'trans_email2' => 'sebastian@sweetfabrik.se',
  'trans_website' => 'http://danny.swalas.org/gallery/',
  'trans_website2' => 'http://www.sweetfabrik.se/',
  'additional_credits' => 'Big thanks to http://www.fotosidan.se/forum/ for help with Exif translations!',
  'trans_date' => '2005-12-23',
);

$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('Byte', 'KB', 'MB');

// Day of weeks and months
$lang_day_of_week = array('sön', 'mån', 'tis', 'ons', 'tor', 'fre', 'lör');
$lang_month = array('jan', 'feb', 'mar', 'apr', 'maj', 'jun', 'jul', 'aug', 'sep', 'okt', 'nov', 'dec');

// Some common strings
$lang_yes = 'Ja';
$lang_no  = 'Nej';
$lang_back = 'Tillbaka';
$lang_continue = 'Fortsätt';
$lang_info = 'Information';
$lang_error = 'Fel';
$lang_check_uncheck_all = 'Markera/avmarkera alla'; //cpg1.4

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$album_date_fmt =    '%d %B %Y';
$lastcom_date_fmt =  '%Y-%m-%d kl. %H.%M';
$lastup_date_fmt =   '%d %B %Y';
$register_date_fmt = '%Y-%m-%d kl. %H:%M';
$lasthit_date_fmt =  '%Y-%m-%d kl. %H:%M';
$comment_date_fmt =  '%Y-%m-%d kl. %H:%M';
$log_date_fmt =      '%Y-%m-%d kl. %H.%M.%S'; //cpg 1.4

// For the word censor
$lang_bad_words = array('*knulla*', 'fitta', 'arsle', 'kuk', 'mutta', 'fan', 'helvete', 'blatte*', '*nigger*', '*neger*', 'svarting', 'röv', 'ollon', 'dildo', 'pattar', 'penis', 'skit', 'balle', 'hora', 'jävla*');

$lang_meta_album_names = array(
  'random' => 'Slumpmässiga filer',
  'lastup' => 'Senast tillagda',
  'lastalb'=> 'Senast uppdaterade album',
  'lastcom' => 'Senaste kommentarer',
  'topn' => 'Mest visade',
  'toprated' => 'Topplista',
  'lasthits' => 'Senast visade',
  'search' => 'Sökresultat',
  'favpics'=> 'Favoriter',  //cpg1.4
);

$lang_errors = array(
  'access_denied' => 'Du har inte behörighet till den här sidan.',
  'perm_denied' => 'Du har inte behörighet att utföra denna operation.',
  'param_missing' => 'Parametrar saknas för att kunna utföra operationen.',
  'non_exist_ap' => 'Albumet/filen du valt finns inte!', //cpg1.3.0
  'quota_exceeded' => 'Tilldelat diskutrymme överskridet<br /><br />Du har ett diskutrymme på [quota]K och din fil är på [space]K. Skulle denna fil läggas till överskrids ditt diskutrymme.', //cpg1.3.0
  'gd_file_type_err' => 'Vid användande av GD image library är endast filer i JPEG- och PNG-format tillåtna.',
  'invalid_image' => 'Filen du laddade upp är skadad eller kan inte hanteras av GD image library',
  'resize_failed' => 'Kan inte skapa tumnagel eller ändra storleken på filen.',
  'no_img_to_display' => 'Ingenting att visa',
  'non_exist_cat' => 'Den valda kategorin finns inte',
  'orphan_cat' => 'En kategori saknar rot, använd kategorihanteraren för att rätta till problemet', //cpg1.3.0
  'directory_ro' => 'Mappen \'%s\' är inte skrivbar. Filen kan inte raderas.', //cpg1.3.0
  'non_exist_comment' => 'Den valda kommentaren finns inte.',
  'pic_in_invalid_album' => 'Filen finns i ett icke existerande album (%s)!?', //cpg1.3.0
  'banned' => 'Du är för tillfället blockerad från den här sajten.',
  'not_with_udb' => 'Den här funktionen är inaktiverad i galleriet eftersom det är länkat med ett forum. Antingen stöds inte det du försöker göra i den här funktionen eller så hanteras funktionen av forumets mjukvara.',
  'offline_title' => 'Avstängt (offline)', //cpg1.3.0
  'offline_text' => 'Galleriet är för tillfället avstängt (offline) - försök igen om en stund.', //cpg1.3.0
  'ecards_empty' => 'Det finns för tillfället inte några e-vykort att visa. Kontrollera att du aktiverat e-vykort i galleriets inställningar!', //cpg1.3.0
  'action_failed' => 'Uppgiften misslyckades. Kan inte utföra önskad funktion.', //cpg1.3.0
  'no_zip' => 'Filerna som behövs för att hantera Zip-filer kan inte hittas.  Kontakta administratören.', //cpg1.3.0
  'zip_type' => 'Du har inte behörighet att ladda upp Zip-filer.', //cpg1.3.0
  'database_query' => 'Det uppstod ett fel under förfrågan till databasen', //cpg1.4
  'register_globals_on' => 'The PHP setting register_globals is enabled on your server, which is a bad idea in terms of security. It\'s strongly recommended to turn it off. [<a href="http://forum.coppermine-gallery.net/index.php/topic,59569.0.html" rel="external" class="external">more</a>]',
);

$lang_bbcode_help_title = 'Hjälp med BBkod'; //cpg1.4
$lang_bbcode_help = 'Du kan lägga till klickbara länkar och enkel textformatering här genom att använda BBkod: <li>[b]Fet[/b] =&gt; <b>Fet</b></li><li>[i]Kursiv[/i] =&gt; <i>Kursiv</i></li><li>[url=http://dinsajt.se/]URL-text[/url] =&gt; <a href="http://dinsajt.se">URL-text</a></li><li>[email]användare@sajt.se[/email] =&gt; <a href="mailto:användare@sajt.se">användare@sajt.se</a></li><li>[color=red]Text[/color] =&gt; <span style="color:red">Text</span></li><li>[img]http://coppermine-gallery.net/demo/cpg14x/images/red.gif[/img] => <img src="../images/red.gif" border="0" alt="" /></li>'; //cpg1.4

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
  'home_title' => 'Gå till startsidan',
  'home_lnk' => 'Startsida',
  'alb_list_title' => 'Gå till albumlistan',
  'alb_list_lnk' => 'Albumlista',
  'my_gal_title' => 'Gå till mitt personliga galleri',
  'my_gal_lnk' => 'Mitt galleri',
  'my_prof_title' => 'Gå till min profil', //cpg1.4
  'my_prof_lnk' => 'Min profil',
  'adm_mode_title' => 'Byt till administratörsläge',
  'adm_mode_lnk' => 'Adminläge',
  'usr_mode_title' => 'Byt till användarläge',
  'usr_mode_lnk' => 'Användarläge',
  'upload_pic_title' => 'Ladda upp fil till ett album',
  'upload_pic_lnk' => 'Ladda upp fil',
  'register_title' => 'Lägg till användare',
  'register_lnk' => 'Registrera',
  'login_title' => 'Logga in', //cpg1.4
  'login_lnk' => 'Logga in',
  'logout_title' => 'Logga ut', //cpg1.4
  'logout_lnk' => 'Logga ut',
  'lastup_title' => 'Visa senast tillagda', //cpg1.4
  'lastup_lnk' => 'Senast tillagda',
  'lastcom_title' => 'Visa senaste kommentarer', //cpg1.4
  'lastcom_lnk' => 'Senaste kommentarer',
  'topn_title' => 'Visa mest visade filer', //cpg1.4
  'topn_lnk' => 'Mest visade',
  'toprated_title' => 'Visa filer med högst betyg', //cpg1.4
  'toprated_lnk' => 'Topplista',
  'search_title' => 'Sök i galleriet', //cpg1.4
  'search_lnk' => 'Sök',
  'fav_title' => 'Gå till mina favoriter', //cpg1.4
  'fav_lnk' => 'Mina favoriter',
  'memberlist_title' => 'Visa medlemslista',
  'memberlist_lnk' => 'Medlemmar',
  'faq_title' => 'Vanliga frågor om galleriet',
  'faq_lnk' => 'FAQ',
);

$lang_gallery_admin_menu = array(
  'upl_app_title' => 'Godkänn uppladdade filer', //cpg1.4
  'upl_app_lnk' => 'Godkänn uppladdningar',
  'admin_title' => 'Konfigurera galleriet', //cpg1.4
  'admin_lnk' => 'Inställningar', //cpg1.4
  'albums_title' => 'Administrera album', //cpg1.4
  'albums_lnk' => 'Album',
  'categories_title' => 'Administrera kategorier', //cpg1.4
  'categories_lnk' => 'Kategorier',
  'users_title' => 'Administrera användare', //cpg1.4
  'users_lnk' => 'Användare',
  'groups_title' => 'Administrera grupper', //cpg1.4
  'groups_lnk' => 'Grupper',
  'comments_title' => 'Granska kommentarer', //cpg1.4
  'comments_lnk' => 'Kommentarer',
  'searchnew_title' => 'Lägg till flera filer på en gång', //cpg1.4
  'searchnew_lnk' => 'Lägg till flera filer',
  'util_title' => 'Gå till administrationsverktyg', //cpg1.4
  'util_lnk' => 'Adminverktyg',
  'key_title' => 'Gå till ordlistan med nyckelord', //cpg1.4
  'key_lnk' => 'Nyckelord', //cpg1.4
  'ban_title' => 'Hantera blockering av användare', //cpg1.4
  'ban_lnk' => 'Blockera användare',
  'db_ecard_title' => 'Gå till administration av e-vykort', //cpg1.4
  'db_ecard_lnk' => 'E-vykort',
  'pictures_title' => 'Sortera filer', //cpg1.4
  'pictures_lnk' => 'Sortera filer', //cpg1.4
  'documentation_lnk' => 'Dokumentation', //cpg1.4
  'documentation_title' => 'Manual till Coppermine', //cpg1.4
);

$lang_user_admin_menu = array(
  'albmgr_title' => 'Skapa och sortera mina album', //cpg1.4
  'albmgr_lnk' => 'Skapa / sortera mina album',
  'modifyalb_title' => 'Gå till redigering av mina album',  //cpg1.4
  'modifyalb_lnk' => 'Redigera mina album',
  'my_prof_title' => 'Gå till min profil', //cpg1.4
  'my_prof_lnk' => 'Min profil',
);

$lang_cat_list = array(
  'category' => 'Kategori',
  'albums' => 'Album',
  'pictures' => 'Filer',
);

$lang_album_list = array(
  'album_on_page' => '%d album på %d sida(or)',
);

$lang_thumb_view = array(
  'date' => 'DATUM',
  //Sort by filename and title
  'name' => 'FILNAMN',
  'title' => 'TITEL',
  'sort_da' => 'Sortera efter datum, stigande',
  'sort_dd' => 'Sortera efter datum, fallande',
  'sort_na' => 'Sortera efter namn, stigande',
  'sort_nd' => 'Sortera efter namn, fallande',
  'sort_ta' => 'Sortera efter titel, stigande',
  'sort_td' => 'Sortera efter titel, fallande',
  'exifdate' => 'DATUM (Exif)', //Exif date mod
  'sort_ea' => 'Sortera efter Exif-datum, stigande', //Exif date mod
  'sort_ed' => 'Sortera efter Exif-datum, fallande', //Exif date mod
  'position' => 'POSITION', //cpg1.4
  'sort_pa' => 'Sortera efter position, stigande', //cpg1.4
  'sort_pd' => 'Sortera efter position, fallande', //cpg1.4
  'download_zip' => 'Ladda ned som Zip-fil',
  'pic_on_page' => '%d filer på %d sida(or)',
  'user_on_page' => '%d användare på %d sida(or)',
  'enter_alb_pass' => 'Skriv in lösenord för album',
  'invalid_pass' => 'Ogiltigt lösenord',
  'pass' => 'Lösenord', //cpg1.4
  'submit' => 'Skicka' //cpg1.4
);

$lang_img_nav_bar = array(
  'thumb_title' => 'Tilbaka till tumnaglar',
  'pic_info_title' => 'Visa/dölj filinformation',
  'slideshow_title' => 'Bildspel',
  'ecard_title' => 'Skicka denna fil som ett e-vykort',
  'ecard_disabled' => 'E-vykort är inte aktiverat',
  'ecard_disabled_msg' => 'Du har inte behörighet att skicka e-vykort', //js-alert
  'prev_title' => 'Se föregående fil',
  'next_title' => 'Se nästa fil',
  'pic_pos' => 'FIL %s/%s',
  'report_title' => 'Rapportera denna fil till administratören', //cpg1.4
  'go_album_end' => 'Gå till sista', //cpg1.4
  'go_album_start' => 'Gå till första', //cpg1.4
  'go_back_x_items' => 'gå tillbaka %s filer', //cpg1.4
  'go_forward_x_items' => 'gå fram %s filer', //cpg1.4
);

$lang_rate_pic = array(
  'rate_this_pic' => 'Betygsätt den här filen ',
  'no_votes' => '(inga röster än)',
  'rating' => '(Betyg : %s / 5 med %s röster)',
  'rubbish' => 'Skräp',
  'poor' => 'Dålig',
  'fair' => 'Godkänd',
  'good' => 'Bra',
  'excellent' => 'Mycket bra',
  'great' => 'Toppen',
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
  CRITICAL_ERROR => 'Kritisk fel',
  'file' => 'Fil: ',
  'line' => 'Rad: ',
);

$lang_display_thumbnails = array(
  'filename' => 'Filnamn: ', //cpg1.4
  'filesize' => 'Filstorlek: ', //cpg1.4
  'dimensions' => 'Dimensioner: ', //cpg1.4
  'date_added' => 'Tillagd den: ', //cpg1.4
);

$lang_get_pic_data = array(
  'n_comments' => '%s kommentarer',
  'n_views' => '%s visningar',
  'n_votes' => '(%s röster)',
);

$lang_cpg_debug_output = array(
  'debug_info' => 'Debuginformation',
  'select_all' => 'Välj alla',
  'copy_and_paste_instructions' => 'Om du vill ha hjälp på Coppermines supportforum, kopiera den här debuginformationen och klista in den i ditt inlägg, tillsammans med eventuellt felmeddelande du får (om något). Var noga med att ersätta känslig information (t.ex. lösenord) med *** innan du postar inlägget.<br />Obs: detta är endast för information och betyder inte nödvändigtvis att det är något fel på ditt galleri.', //cpg1.4
  'phpinfo' => 'Visa phpinfo',
  'notices' => 'Anmärkningar', //cpg1.4
);

$lang_language_selection = array(
  'reset_language' => 'Standardspråk',
  'choose_language' => 'Välj språk',
);

$lang_theme_selection = array(
  'reset_theme' => 'Standardtema',
  'choose_theme' => 'Välj tema',
);

$lang_version_alert = array(
  'version_alert' => 'Ej stödd version!', //cpg1.4
  'no_stable_version' => 'Du kör Coppermine  %s (%s) som är avsett för erfarna användare - denna versionen kommer utan någon form av support eller garantier. Använd den på egen risk, eller ladda ned den senaste stabila versionen om du behöver support!', //cpg1.4
  'gallery_offline' => 'Galleriet är avstängt för underhåll och är bara vara tillgängligt för dig som administratör. Glöm inte att öppna det igen det när du är färdig med underhållet.', //cpg1.4
);

$lang_create_tabs = array(
  'previous' => 'Föregående', //cpg1.4
  'next' => 'Nästa', //cpg1.4
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
  'error_wakeup' => "Kan inte sätta på plugin '%s'", //cpg1.4
  'error_install' => "Kan inte installera plugin '%s'", //cpg1.4
  'error_uninstall' => "Kan inte avinstallera plugin '%s'", //cpg1.4
  'error_sleep' => "Kan inte stänga av plugin '%s'<br />", //cpg1.4
);

// ------------------------------------------------------------------------- //
// File include/smilies.inc.php
// ------------------------------------------------------------------------- //

if (defined('SMILIES_PHP')) $lang_smilies_inc_php = array(
  'Exclamation' => 'Utrop',
  'Question' => 'Fråga',
  'Very Happy' => 'Mycket glad',
  'Smile' => 'Leende',
  'Sad' => 'Ledsen',
  'Surprised' => 'Överraskad',
  'Shocked' => 'Chockad',
  'Confused' => 'Förbryllad',
  'Cool' => 'Cool',
  'Laughing' => 'Skrattande',
  'Mad' => 'Galen',
  'Razz' => 'Rumlande',
  'Embarassed' => 'Förlägen',
  'Crying or Very sad' => 'Gråter eller väldigt ledsen',
  'Evil or Very Mad' => 'Elak eller mycket arg',
  'Twisted Evil' => 'Fifflande elak',
  'Rolling Eyes' => 'Rullande elak',
  'Wink' => 'Blink',
  'Idea' => 'Idé',
  'Arrow' => 'Pil',
  'Neutral' => 'Neutral',
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
  0 => 'Lämnar adminläge...',
  1 => 'Startar adminläge...',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
  'alb_need_name' => 'Album måste namnges!', //js-alert
  'confirm_modifs' => 'Är du säker på att du vill göra dessa förändringar?', //js-alert
  'no_change' => 'Du gjorde ingen förändring!', //js-alert
  'new_album' => 'Nytt album',
  'confirm_delete1' => 'Är du säker på att du vill radera detta album?', //js-alert
  'confirm_delete2' => '\nAlla filer och deras kommentarer kommer att förloras', //js-alert
  'select_first' => 'Välj ett album först', //js-alert
  'alb_mrg' => 'Administrera album',
  'my_gallery' => '* Mitt galleri *',
  'no_category' => '* Ingen kategori *',
  'delete' => 'Radera',
  'new' => 'Nytt',
  'apply_modifs' => 'Utför ändringar',
  'select_category' => 'Välj kategori',
);

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) $lang_banning_php = array(
  'title' => 'Blockera användare', //cpg1.4
  'user_name' => 'Användarnamn', //cpg1.4
  'ip_address' => 'IP-adress', //cpg1.4
  'expiry' => 'Gäller till (blankt är permanent)', //cpg1.4
  'edit_ban' => 'Spara ändringar', //cpg1.4
  'delete_ban' => 'Ta bort', //cpg1.4
  'add_new' => 'Ny blockering', //cpg1.4
  'add_ban' => 'Blockera användare', //cpg1.4
  'error_user' => 'Hittar inte användaren', //cpg1.4
  'error_specify' => 'Du måste specificera användarnamn eller IP-adress.', //cpg1.4
  'error_ban_id' => 'Ogiltigt blockeringsID!', //cpg1.4
  'error_admin_ban' => 'Du kan inte blockera dig själv!', //cpg1.4
  'error_server_ban' => 'Tänkte du blockera din egen server? Tsk tsk...', //cpg1.4
  'error_ip_forbidden' => 'Du kan inte blockera detta IP - det är icke-routbar (privat) ändå!<br />Om du vill tillåta blockering av privata IP-adresser, ändra detta i <a href="admin.php">inställningar</a> (det är bara aktuelt om Coppermine körs i ett LAN).', //cpg1.4
  'lookup_ip' => 'Slå upp en IP-adress', //cpg1.4
  'submit' => 'OK!', //cpg1.4
  'select_date' => 'Välj datum', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File bridgemgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('BRIDGEMGR_PHP')) $lang_bridgemgr_php = array(
  'title' => 'Länkningsguide (Bridge Guide)',
  'warning' => 'Varning: När du använder denna guide kommer känslig data att skickas med oskyddade html-formulär. Kör guiden bara på din egen dator (inte på en offentlig dator på t.ex. ett internetcafé). Var även nogrann med att rensa webbläsarens cache och tillfälliga filer när du är färdig, annars kan andra komma åt din data!',
  'back' => 'Föregående',
  'next' => 'Nästa',
  'start_wizard' => 'Starta länkningsguide',
  'finish' => 'Avsluta',
  'hide_unused_fields' => 'Göm oanvända formulärfält (rekommenderat)',
  'clear_unused_db_fields' => 'Rensa ogilltiga databasposter (rekommenderat)',
  'custom_bridge_file' => 'Namn på din länkningsfil (bridge-fil) (om filen heter <i>myfile.inc.php</i> skriv <i>myfile</i> här)',
  'no_action_needed' => 'Inget behöver göras här. Tryck bara "Nästa" för att fortsätta',
  'reset_to_default' => 'Återställ förinställda värden',
  'choose_bbs_app' => 'Välj program att länka samman Coppermine med',
  'support_url' => 'Gå hit för support för detta program',
  'settings_path' => 'sökväg(ar) som används av ditt forum',
  'database_connection' => 'Databasanslutning (connection)',
  'database_tables' => 'Databastabeller (tables)',
  'bbs_groups' => 'Forumgrupper (groups)',
  'license_number' => 'Licensnummer',
  'license_number_explanation' => 'Ange ditt licensnummer (om möjligt)',
  'db_database_name' => 'Databasnamn',
  'db_database_name_explanation' => 'Ange namnet på databasen ditt forum använder',
  'db_hostname' => 'Databasvärd (host)',
  'db_hostname_explanation' => 'Värdnamn där din MySQL-databas finns, vanligtvis &quot;localhost&quot;',
  'db_username' => 'Databasens användarnamn (user account)',
  'db_username_explanation' => 'MySQL-databasens användarnamn för anslutning till forumet',
  'db_password' => 'Databasens lösenord',
  'db_password_explanation' => 'Lösenord för MySQL-användarnamnet',
  'full_forum_url' => 'Forum-URL',
  'full_forum_url_explanation' => 'Fullständig URL till ditt forum (inkl http://, t.ex. http://www.yourdomain.tld/forum)',
  'relative_path_of_forum_from_webroot' => 'Relativ sökväg',
  'relative_path_of_forum_from_webroot_explanation' => 'Relativ sökväg till ditt forum från din URL (Exempel: om ditt forum finns på http://www.yourdomain.tld/forum/, skriv &quot;/forum/&quot; här)',
  'relative_path_to_config_file' => 'Relativ sökväg till ditt forums konfigurationsfil',
  'relative_path_to_config_file_explanation' => 'Relativ sökväg till ditt forum, sett från din Coppermine-mapp (t.ex. &quot;../forum/&quot, om ditt forum finns på http://www.yourdomain.tld/forum/ och Coppermine på http://www.yourdomain.tld/gallery/)',
  'cookie_prefix' => 'Prefix för cookies',
  'cookie_prefix_explanation' => 'Detta måste vara samma namn som ditt forum använder för cookies',
  'table_prefix' => 'Prefix för tabeller',
  'table_prefix_explanation' => 'Måste vara samma prefix som ditt forum använder.',
  'user_table' => 'Tabell för användare',
  'user_table_explanation' => '(det förinställda namnet brukar fungera, så länge ditt forum använder standardinställningarna)',
  'session_table' => 'Tabell för sessioner',
  'session_table_explanation' => '(det förinställda namnet brukar fungera, så länge ditt forum använder standardinställningarna)',
  'group_table' => 'Tabell för grupper',
  'group_table_explanation' => '(det förinställda namnet brukar fungera, så länge ditt forum använder standardinställningarna)',
  'group_relation_table' => 'Tabell för grupprelationer',
  'group_relation_table_explanation' => '(det förinställda namnet brukar fungera, så länge ditt forum använder standardinställningarna)',
  'group_mapping_table' => 'Tabell för mappning av grupper',
  'group_mapping_table_explanation' => '(det förinställda namnet brukar fungera, så länge ditt forum använder standardinställningarna)',
  'use_standard_groups' => 'Använd standard för forumgrupper',
  'use_standard_groups_explanation' => 'Använd standardgrupper (inbyggda, rekommenderat). Detta kommer att göra alla inställningar för grupper gjorda på denna sida ogiltiga. Avmarkera detta alternativ ENDAST om vet vad du gör!',
  'validating_group' => 'Bekräfta grupp',
  'validating_group_explanation' => 'Grupp-ID i forumet där användarkonton som måste bekräftas finns (det förinställda namnet brukar fungera, ändra bara om du vet att det ska vara något annat!)',
  'guest_group' => 'Grupp för gäster',
  'guest_group_explanation' => 'Grupp-ID i forumet där gäster (anonyma användare) finns (det förinställda namnet brukar fungera, ändra bara om du vet att det ska vara något annat!)',
  'member_group' => 'Grupp för medlemmar',
  'member_group_explanation' => 'Grupp-ID i forumet där &quot;vanliga&quot; användare finns (det förinställda namnet brukar fungera, ändra bara om du vet att det ska vara något annat!)',
  'admin_group' => 'Grupp för administratörer',
  'admin_group_explanation' => 'Grupp-ID i forumet där administratörer finns (det förinställda namnet brukar fungera, ändra bara om du vet att det ska vara något annat!)',
  'banned_group' => 'Grupp för blockerade användare',
  'banned_group_explanation' => 'Grupp-ID i forumet där blockerade användare finns (det förinställda namnet brukar fungera, ändra bara om du vet att det ska vara något annat!)',
  'global_moderators_group' => 'Grupp för globala moderatorer',
  'global_moderators_group_explanation' => 'Grupp-ID i forumet där globala moderatorer finns (det förinställda namnet brukar fungera, ändra bara om du vet att det ska vara något annat!)',
  'special_settings' => 'Forum-specifika inställningar',
  'logout_flag' => 'phpBB-version (logout flag)',
  'logout_flag_explanation' => 'Vilken version har ditt forum (inställningen bestämmer hur utloggningar hanteras)',
  'use_post_based_groups' => 'Använd inläggsbaserade grupper?',
  'logout_flag_yes' => '2.0.5 eller högre',
  'logout_flag_no' => '2.0.4 eller lägre',
  'use_post_based_groups_explanation' => 'Ska grupper i forumet som baseras på antal inlägg användas (tillåter finstyrning av behörigheter) eller ska de förinställda grupperna användas (enklare administration, rekommenderas). Du kan ändra detta senare.',
  'use_post_based_groups_yes' => 'Ja',
  'use_post_based_groups_no' => 'Nej',
  'error_title' => 'Du måste rätta till dessa fel innan du kan fortsätta. Gå till föregående sida.',
  'error_specify_bbs' => 'Du måste ange vilket program du vill länka Coppermine med.',
  'error_no_blank_name' => ' Du kan inte lämna fältet för länkningsfil tomt.',
  'error_no_special_chars' => 'Länkningsfilens namn får inte innehålla några specialtecken annat än understreck (_) eller streck (-)!',
  'error_bridge_file_not_exist' => 'Länkningsfilen %s finns inte på servern. Se till att den är uppladdad.',
  'finalize' => 'Aktivera/avaktivera länkning med forum',
  'finalize_explanation' => 'Så här långt har dina inställningar sparats i databasen, men integrationen har inte aktiverats. Du kan slå på/av länkningen senare. Var noga med att komma ihåg administratörerens användarnamn och lösenord från installationen av Coppermine, du kan behöva det senare för att göra ändringar. Om något går fel, gå till %s och avaktivera länkningen med forumet där, genom att använda det icke länkade administratörskontot (vanligtvis det konto du satte upp när du installerade Coppermine).',
  'your_bridge_settings' => 'Dina inställningar för länkningen',
  'title_enable' => 'Aktivera / avaktivera integration/länkning med %s',
  'bridge_enable_yes' => 'Aktivera',
  'bridge_enable_no' => 'Avaktivera',
  'error_must_not_be_empty' => 'Kan inte lämnas tom',
  'error_either_be' => 'Måste vara %s eller %s',
  'error_folder_not_exist' => '%s finns inte. Rätta till värdet du angav för %s.',
  'error_cookie_not_readible' => 'Coppermine kan inte läsa cookien med namn %s. Rätta till värdet du angav för %s, eller gå till administratörsinställningarna och kontrollera att sökvägen är läsbar för Coppermine.',
  'error_mandatory_field_empty' => 'Du kan inte lämna fältet %s tomt - fyll i korrekt värde.',
  'error_no_trailing_slash' => 'Det får inte vara något avslutande snedstreck i fältet %s.',
  'error_trailing_slash' => 'Det måste vara ett avslutande snedstreck i fältet %s.',
  'error_db_connect' => 'Kunde inte ansluta till MySQL-databasen med det du angivit. MySQL svarade:',
  'error_db_name' => 'Coppermine kunde etablera kontakt men kunde inte ansluta till databasen %s. Kontrollera att du angivit %s korrekt. MySQL svarade:',
  'error_prefix_and_table' => '%s och ',
  'error_db_table' => 'Kunde inte hitta tabellen %s. Kontrollera att du angivit %s korrekt.',
  'recovery_title' => 'Länkningsguide: kritisk återställning',
  'recovery_explanation' => 'Om du kom hit för att administrera Coppermines forumlänkning måste du logga in som administratör först. Om du inte kan logga in för att länkningen inte fungerar som den ska kan du avaktivera länkningen på den här sidan. Om du anger ditt användarnamn och ditt lösenord kommer du inte att bli inloggad, utan bara avaktivera länkningen med forumet. Läs dokumentationen för mer information.',
  'username' => 'Användarnamn',
  'password' => 'Lösenord',
  'disable_submit' => 'Skicka',
  'recovery_success_title' => 'Autentiseringen lyckades',
  'recovery_success_content' => 'Du har avaktiverat länkningen med forumet. Din Coppermine-installation körs nu självständigt.',
  'recovery_success_advice_login' => 'Logga in som administratör för att ändra länkningsinställningarna och/eller aktivera länkningen med forumet igen.',
  'goto_login' => 'Gå till login-sidan',
  'goto_bridgemgr' => 'Gå till länkningsguiden',
  'recovery_failure_title' => 'Autentiseringen misslyckades',
  'recovery_failure_content' => 'Du angav felaktiga uppgifter. Du måste ange uppgifter för administratörskontot för den fristående installationen av Coppermine (vanligtvis kontot som skapades i samband med installationen).',
  'try_again' => 'Försök igen',
  'recovery_wait_title' => 'Tiden för fördröjning har inte löpt ut.',
  'recovery_wait_content' => 'Av säkerhetsskäl kan du inte försöka logga in efter misslyckade försök med så kort tid emellan. Var god försök igen lite senare.',
  'wait' => 'Vänta',
  'create_redir_file' => 'Skapa fil för vidarebefordran (rekommenderat)',
  'create_redir_file_explanation' => 'För att vidarebefordra användare tillbaka till Coppermine när de loggat in via forumet behöver en fil för vidarebefordran skapas i din forum-mapp. När detta val är markerat kommer länkningsguiden att skapa den filen, i annat fall får du koden, redo att klistras in vid manuellt skapande av filen.',
  'browse' => 'Bläddra',
);

// ------------------------------------------------------------------------- //
// File calendar.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('CALENDAR_PHP')) $lang_calendar_php = array(
  'title' => 'Kalender', //cpg1.4
  'close' => 'Avsluta', //cpg1.4
  'clear_date' => 'Rensa datum', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
  'miss_param' => 'Parametrar som krävs för \'%s\' operationen stöds inte!',
  'unknown_cat' => 'Vald kategori finns inte i databasen',
  'usergal_cat_ro' => 'Kategorin användargallerier kan inte raderas!',
  'manage_cat' => 'Inställningar för kategorier',
  'confirm_delete' => 'Är du säker på att du vill RADERA denna kategori?', //js-alert
  'category' => 'Kategori',
  'operations' => 'Operationer',
  'move_into' => 'Flytta till',
  'update_create' => 'Uppdatera/skapa galleri',
  'parent_cat' => 'Huvudkategori',
  'cat_title' => 'Kategorititel',
  'cat_thumb' => 'Kategoritumnagel', //cpg1.3.0
  'cat_desc' => 'Kategoribeskrivning',
  'categories_alpha_sort' => 'Sortera kategorier alfabetisk (istället för vald sorting)', //cpg1.4
  'save_cfg' => 'Spara inställningar', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File admin.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('ADMIN_PHP')) $lang_admin_php = array(
  'title' => 'Gallerikonfiguration', //cpg1.4
  'manage_exif' => 'Administrera visning av Exif-information', //cpg1.4
  'manage_plugins' => 'Administrera insticksmoduler', //cpg1.4
  'manage_keyword' => 'Administrera nyckelord', //cpg1.4
  'restore_cfg' => 'Återställ till systemets grundinställning',
  'save_cfg' => 'Spara inställningar',
  'notes' => 'Anmärkningar',
  'info' => 'Information',
  'upd_success' => 'Galleriets inställningar har uppdaterats',
  'restore_success' => 'Galleriets grundinställningar har återställts',
  'name_a' => 'Namn, stigande',
  'name_d' => 'Namn, fallande',
  'title_a' => 'Titel, stigande',
  'title_d' => 'Titel, fallande',
  'date_a' => 'Datum, stigande',
  'date_d' => 'Datum, fallande',
  'exifdate_a' => 'Exif-datum, stigande', //Exif date mod
  'exifdate_d' => 'Exif-datum, fallande', //Exif date mod
  'pos_a' => 'Position, stigande', //cpg1.4
  'pos_d' => 'Position, fallande', //cpg1.4
  'th_any' => 'Max sida',
  'th_ht' => 'Höjd',
  'th_wd' => 'Bredd',
  'label' => ' markering', //cpg1.3.0
  'item' => ' alternativ', //cpg1.3.0
  'debug_everyone' => ' alla', //cpg1.3.0
  'debug_admin' => ' enbart admin', //cpg1.3.0
  'no_logs'=> 'Av', //cpg1.4
  'log_normal'=> 'Normal', //cpg1.4
  'log_all' => 'Alla', //cpg1.4
  'view_logs' => 'Visa loggar', //cpg1.4
  'click_expand' => 'Klicka på sektionsnamnet för att expandera', //cpg1.4
  'expand_all' => 'Expandera alla', //cpg1.4
  'notice1' => '(*) Dessa inställningarna bör inte ändras om du har filer i din databas.', //cpg1.4 - (relocated)
  'notice2' => '(**) När den här ändringen görs kommer bara filer som läggs till efteråt att påverkas. Det är därför att rekommendera att inte göra ändringar när det finns filer i galleriet. Du kan välja att låta ändringarna gälla även existerande filer med hjälp av &quot;<a href="util.php">administratörsverktyget</a>&quot; (funktionen för att skala om bilder).', //cpg1.4 - (relocated)
  'notice3' => '(***) Alla loggfiler är skrivna på engelska.', //cpg1.4 - (relocated)
  'bbs_disabled' => 'Funktionen är inaktiverad i och med länkning med forum', //cpg1.4
  'auto_resize_everyone' => ' alla', //cpg1.4
  'auto_resize_user' => ' endast medlemmar', //cpg1.4
  'ascending' => 'stigande', //cpg1.4
  'descending' => 'fallande', //cpg1.4
);

if (defined('ADMIN_PHP')) $lang_admin_data = array(
  'Allmänna inställningar',
  array('Galleriets namn', 'gallery_name', 0, 'f=index.htm&amp;as=admin_general_name&amp;ae=admin_general_name_end'), //cpg1.4
  array('Galleriets beskrivning', 'gallery_description', 0, 'f=index.htm&amp;as=admin_general_description&amp;ae=admin_general_description_end'), //cpg1.4
  array('Galleriadministratörens e-post', 'gallery_admin_email', 0, 'f=index.htm&amp;as=admin_general_email&amp;ae=admin_general_email_end'), //cpg1.4
  array('URL till din mapp med Coppermine (inget "index.php" eller liknande i slutet)', 'ecards_more_pic_target', 0, 'f=index.htm&amp;as=admin_general_coppermine-url&amp;ae=admin_general_coppermine-url_end'), //cpg1.4
  array('URL till startsidan', 'home_target', 0, 'f=index.htm&amp;as=admin_general_home-url&amp;ae=admin_general_home-url_end'), //cpg1.4
  array('Tillåt nedladdning av favoriter som Zip-fil', 'enable_zipdownload', 1, 'f=index.htm&amp;as=admin_general_zip-download&amp;ae=admin_general_zip-download_end'), //cpg1.4
  array('Skillnad i tidszon jämfört med GMT (nuvarande tid: ' . localised_date(-1, $comment_date_fmt) . ')','time_offset',0, 'f=index.htm&amp;as=admin_general_time-offset&amp;ae=admin_general_time-offset_end&amp;top=1'), //cpg1.4
  array('Aktivera krypterade lösenord (kan inte ångras)','enable_encrypted_passwords',1, 'f=index.htm&amp;as=admin_general_encrypt_password_start&amp;ae=admin_general_encrypt_password_end&amp;top=1'), // cpg 1.4
  array('Aktivera hjälpikoner (hjälp endast tillgänglig på engelska)','enable_help',9, 'f=index.htm&amp;as=admin_general_help&amp;ae=admin_general_help_end'), //cpg1.4
  array('Aktivera klickbara nyckelord i sökfunktionen','clickable_keyword_search',14, 'f=index.htm&amp;as=admin_general_keywords_start&amp;ae=admin_general_keywords_end'), //cpg1.4
  array('Aktivera insticksmoduler (plugins)', 'enable_plugins', 12, 'f=index.htm&amp;as=admin_general_enable-plugins&amp;ae=admin_general_enable-plugins_end'),  //cpg1.4
  array('Tillåt blockering av non-routable (privata) IP adresser', 'ban_private_ip', 1,  'f=index.htm&amp;as=admin_general_private-ip&amp;ae=admin_general_private-ip_end'), //cpg1.4
  array('Bläddringsbart gränssnitt för "Lägg till flera filer"', 'browse_batch_add', 1, 'f=index.htm&amp;as=admin_general_browsable_batch_add&amp;ae=admin_general_browsable_batch_add_end'), //cpg1.4

  'Språk &amp; teckenuppsättning',
  array('Språk', 'lang', 5, 'f=index.htm&amp;as=admin_language_language&amp;ae=admin_language_language_end'), //cpg1.4
  array('Använd engelska om fras inte finns översatt', 'language_fallback', 1, 'f=index.htm&amp;as=admin_language_fallback&amp;ae=admin_language_fallback_end'), //cpg1.4
  array('Teckenuppsättning', 'charset', 4, 'f=index.htm&amp;as=admin_language_charset&amp;ae=admin_language_charset_end'), //cpg1.4
  array('Visa lista över språk', 'language_list', 1, 'f=index.htm&amp;as=admin_language_list&amp;ae=admin_language_list_end'), //cpg1.4
  array('Visa flaggor för språk', 'language_flags', 8, 'f=index.htm&amp;as=admin_language_flags&amp;ae=admin_language_flags_end&amp;top=1'), //cpg1.4
  array('Visa &quot;återställ&quot; i språkvalen', 'language_reset', 1, 'f=index.htm&amp;as=admin_language_reset&amp;ae=admin_language_reset_end&amp;top=1'), //cpg1.4
  //array('Visa föregående/nästa på flikade sidor', 'previous_next_tab', 1), //cpg1.4

  'Tema',
  array('Tema', 'theme', 6, 'f=index.htm&amp;as=admin_theme_theme&amp;ae=admin_theme_theme_end'), //cpg1.4
  array('Visa lista med teman', 'theme_list', 1, 'f=index.htm&amp;as=admin_theme_theme_list&amp;ae=admin_theme_theme_list_end'), //cpg1.4
  array('Visa &quot;återställ&quot; i temavalen', 'theme_reset', 1, 'f=index.htm&amp;as=admin_theme_theme_reset&amp;ae=admin_theme_theme_reset_end'), //cpg1.4
  array('Visa FAQ', 'display_faq', 1, 'f=index.htm&amp;as=admin_theme_faq&amp;ae=admin_theme_faq_end'), //cpg1.4
  array('Anpassat namn på menylänk', 'custom_lnk_name', 0,'f=index.htm&amp;as=admin_theme_custom_lnk_name&amp;ae=admin_theme_custom_lnk_name_end'), //cpg1.4
  array('Anpassat namn på menylänk (URL)', 'custom_lnk_url', 0,'f=index.htm&amp;as=admin_language_custom_lnk_url&amp;ae=admin_language_custom_lnk_url_end'), //cpg1.4
  array('Visa BBcode-hjälp', 'show_bbcode_help', 1, 'f=index.htm&amp;as=admin_theme_bbcode&amp;ae=admin_theme_bbcode_end&amp;top=1'), //cpg1.4
  array('Visa "stilblock" för teman som är överensstämmer med XHTML- och CSS-standarderna ','vanity_block',1, 'f=index.htm&amp;as=vanity_block&amp;ae=vanity_block_end'), //cpg1.4
  array('Sökväg till anpassat sidhuvud (header include)', 'custom_header_path', 0, 'f=index.htm&amp;as=admin_theme_include_path_start&amp;ae=admin_theme_include_path_end'), //cpg1.4
  array('Sökväg till anpassat sidfot (footer include)', 'custom_footer_path', 0, 'f=index.htm&amp;as=admin_theme_include_path_start&amp;ae=admin_theme_include_path_end'), //cpg1.4

  'Albumlista',
  array('Bredd på huvudtabellen (pixlar eller %)', 'main_table_width', 0, 'f=index.htm&amp;as=admin_album_table-width&amp;ae=admin_album_table-width_end'), //cpg1.4
  array('Antal kategorinivåer som visas', 'subcat_level', 0, 'f=index.htm&amp;as=admin_album_category-levels&amp;ae=admin_album_category-levels_end'), //cpg1.4
  array('Antal album som visas', 'albums_per_page', 0, 'f=index.htm&amp;as=admin_album_number&amp;ae=admin_album_number_end'), //cpg1.4
  array('Antal kolumner i albumlistan', 'album_list_cols', 0, 'f=index.htm&amp;as=admin_album_columns&amp;ae=admin_album_columns_end'), //cpg1.4
  array('Storlek på tumnagel i pixlar', 'alb_list_thumb_size', 0, 'f=index.htm&amp;as=admin_album_thumbnail-size&amp;ae=admin_album_thumbnail-size_end'), //cpg1.4
  array('Innehåll på förstasidan', 'main_page_layout', 0, 'f=index.htm&amp;as=admin_album_list_content&amp;ae=admin_album_list_content_end'), //cpg1.4
  array('Visa tumnagel för albumet på översta nivån','first_level',1, 'f=index.htm&amp;as=admin_album_first-level_thumbs&amp;ae=admin_album_first-level_thumbs_end'), //cpg1.4
  array('Sortera kategorier alfabetiskt (istället för vald ordning)','categories_alpha_sort',1, 'f=index.htm&amp;as=admin_album_list_alphasort_start&amp;ae=admin_album_list_alphasort_end'), //cpg1.4
  array('Visa antal länkade filer','link_pic_count',1, 'f=index.htm&amp;as=admin_album_linked_files_start&amp;ae=admin_album_linked_files_end'), //cpg1.4

  'Tumnaglar',
  array('Antal kolumner på tumnagelsidan', 'thumbcols', 0, 'f=index.htm&amp;as=admin_thumbnail_columns&amp;ae=admin_thumbnail_columns_end'), //cpg1.4
  array('Antal rader på tumnagelsidan', 'thumbrows', 0, 'f=index.htm&amp;as=admin_thumbnail_rows&amp;ae=admin_thumbnail_rows_end'), //cpg1.4
  array('Maximalt antal flikar att visa', 'max_tabs', 10, 'f=index.htm&amp;as=admin_thumbnail_tabs&amp;ae=admin_thumbnail_tabs_end'), //cpg1.4
  array('Visa rubrik (utöver titel) under tumnageln', 'caption_in_thumbview', 1, 'f=index.htm&amp;as=admin_thumbnail_display_caption&amp;ae=admin_thumbnail_display_caption_end'), //cpg1.4
  array('Visa antal visningar under tumnageln', 'views_in_thumbview', 1, 'f=index.htm&amp;as=admin_thumbnail_display_views&amp;ae=admin_thumbnail_display_views_end'), //cpg1.4
  array('Visa antal kommentarer under tumnageln', 'display_comment_count', 1, 'f=index.htm&amp;as=admin_thumbnail_display_comments&amp;ae=admin_thumbnail_display_comments_end'), //cpg1.4
  array('Visa vem som lagt in filen under tumnageln', 'display_uploader', 1, 'f=index.htm&amp;as=admin_thumbnail_display_uploader&amp;ae=admin_thumbnail_display_uploader_end'), //cpg1.4
  //array('Visa vilken administratör som lagt in filen under tumnageln', 'display_admin_uploader', 1, 'f=index.htm&amp;as=admin_thumbnail_display_admin_uploader&amp;ae=admin_thumbnail_display_admin_uploader_end'), //cpg1.4
  array('Visa filnamnet under tumnageln', 'display_filename', 1, 'f=index.htm&amp;as=admin_thumbnail_display_filename&amp;ae=admin_thumbnail_display_filename_end'), //cpg1.4
  //array('Visa beskrivning av album', 'alb_desc_thumb', 1, 'f=index.htm&amp;as=admin_thumbnail_display_description&amp;ae=admin_thumbnail_display_description_end'), //cpg1.4
  array('Förvald sorteringsordning', 'default_sort_order', 3, 'f=index.htm&amp;as=admin_thumbnail_default_sortorder&amp;ae=admin_thumbnail_default_sortorder_end'), //cpg1.4
  array('Minsta antal röster för att en fil ska hamna på topplistan', 'min_votes_for_rating', 0, 'f=index.htm&amp;as=admin_thumbnail_minimum_votes&amp;ae=admin_thumbnail_minimum_votes_end'), //cpg1.4

  'Filvisning', //cpg1.4
  array('Bredd på tabell för filvisning (pixlar eller %)', 'picture_table_width', 0, 'f=index.htm&amp;as=admin_image_comment_table-width&amp;ae=admin_image_comment_table-width_end'), //cpg1.4
  array('Filinformation synlig som standard', 'display_pic_info', 1, 'f=index.htm&amp;as=admin_image_comment_info_visible&amp;ae=admin_image_comment_info_visible_end'), //cpg1.4
  array('Maximal längd för filbeskrivning', 'max_img_desc_length', 0, 'f=index.htm&amp;as=admin_image_comment_descr_length&amp;ae=admin_image_comment_descr_length_end'), //cpg1.4
  array('Maximalt antal tecken i ett ord', 'max_com_wlength', 0, 'f=index.htm&amp;as=admin_image_comment_chars_per_word&amp;ae=admin_image_comment_chars_per_word_end'), //cpg1.4
  array('Visa filmremsa', 'display_film_strip', 1, 'f=index.htm&amp;as=admin_image_comment_filmstrip_toggle&amp;ae=admin_image_comment_filmstrip_toggle_end'), //cpg1.4
  array('Visa filnamn under tumnageln i filmremsan', 'display_film_strip_filename', 1, 'f=index.htm&amp;as=admin_image_comment_display_film_strip_filename&amp;ae=admin_image_comment_display_film_strip_filename_end'), //cpg1.4
  array('Antal filer i filmremsan', 'max_film_strip_items', 0, 'f=index.htm&amp;as=admin_image_comment_filmstrip_number&amp;ae=admin_image_comment_filmstrip_number_end'), //cpg1.4
  array('Bildspelets intervall i millisekunder (1 sekund = 1000 millisekunder)', 'slideshow_interval', 0, 'f=index.htm&amp;as=admin_image_comment_slideshow_interval&amp;ae=admin_image_comment_slideshow_interval_end'), //cpg1.4

  'Kommentarer', //cpg1.4
  array('Filtrera fula ord i kommentarer', 'filter_bad_words', 1, 'f=index.htm&amp;as=admin_image_comment_bad_words&amp;ae=admin_image_comment_bad_words_end'), //cpg1.4
  array('Tillåt smilies i kommentarer', 'enable_smilies', 1, 'f=index.htm&amp;as=admin_image_comment_smilies&amp;ae=admin_image_comment_smilies_end'), //cpg1.4
  array('Tillåt upprepade kommentarer på en fil av samma användare (ta bort skydd mot "flooding")', 'disable_comment_flood_protect', 1, 'f=index.htm&amp;as=admin_image_comment_flood&amp;ae=admin_image_comment_flood_end'), //cpg1.4
  array('Maximalt antal rader i en kommentar', 'max_com_lines', 0, 'f=index.htm&amp;as=admin_image_comment_lines&amp;ae=admin_image_comment_lines_end'), //cpg1.4
  array('Maximal längd på en kommentar', 'max_com_size', 0, 'f=index.htm&amp;as=admin_image_comment_length&amp;ae=admin_image_comment_length_end'), //cpg1.4
  array('Meddela administratören via e-post vid ny kommentar', 'email_comment_notification', 1, 'f=index.htm&amp;as=admin_image_comment_admin_notify&amp;ae=admin_image_comment_admin_notify_end'), //cpg1.4
  array('Sorteringsordning för kommentarer', 'comments_sort_descending', 17, 'f=index.htm&amp;as=admin_comment_sort_start&amp;ae=admin_comment_sort_end'), //cpg1.4
  array('Prefix för kommentarer av gäster/anonyma användare', 'comments_anon_pfx', 0, 'f=index.htm&amp;as=comments_anon_pfx&amp;ae=comments_anon_pfx_end'), //cpg1.4

  'Filer och tumnaglar',
  array('Kvalitet på JPEG-filer', 'jpeg_qual', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_jpeg_quality&amp;ae=admin_picture_thumbnail_jpeg_quality_end'), //cpg1.4
  array('Maximal dimension för tumnagel <a href="#notice2" class="clickable_option">**</a>', 'thumb_width', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max-dimension&amp;ae=admin_picture_thumbnail_max-dimension_end'), //cpg1.4
  array('Använd dimension (bredd, höjd eller maximal sida för tumnageln ) <a href="#notice2" class="clickable_option">**</a>', 'thumb_use', 7, 'f=index.htm&amp;as=admin_picture_thumbnail_use-dimension&amp;ae=admin_picture_thumbnail_use-dimension_end'), //cpg1.4
  array('Skapa mellanliggande bilder','make_intermediate',1, 'f=index.htm&amp;as=admin_picture_thumbnail_intermediate_toggle&amp;ae=admin_picture_thumbnail_intermediate_toggle_end'), //cpg1.4
  array('Maximal bredd eller höjd på en mellanliggande bild/film <a href="#notice2" class="clickable_option">**</a>', 'picture_width', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_intermediate_dimension&amp;ae=admin_picture_thumbnail_intermediate_dimension_end'), //cpg1.4
  array('Maximal filstorlek på uppladdade filer (KB)', 'max_upl_size', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max_upload_size&amp;ae=admin_picture_thumbnail_max_upload_size_end'), //cpg1.4
  array('Maximal bredd eller höjd på uppladdade bilder/filmer (pixlar)', 'max_upl_width_height', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max_upload_dimension&amp;ae=admin_picture_thumbnail_max_upload_dimension_end'), //cpg1.4
  array('Skala om bilder som är större än maxbredd eller maxhöjd automatiskt', 'auto_resize', 16, 'f=index.htm&amp;as=admin_picture_thumbnail_auto-resize&amp;ae=admin_picture_thumbnail_auto-resize_end'), //cpg1.4

  'Filer och tumnaglar - avancerade inställningar',
  array('Album kan vara privata (notera: om du ändrar från "Ja" till "Nej" blir alla nuvarande privata album publika)', 'allow_private_albums', 1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_private_toggle&amp;ae=admin_picture_thumb_advanced_private_toggle_end'), //cpg1.4
  array('Visa privata album som ikon för icke inloggade användare','show_private',1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_private_icon_show&amp;ae=admin_picture_thumb_advanced_private_icon_show_end'), //cpg1.4
  array('Förbjudna tecken i filnamn', 'forbiden_fname_char',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_filename_forbidden_chars&amp;ae=admin_picture_thumb_advanced_filename_forbidden_chars_end'), //cpg1.4
  //array('Godkända filändelser för uppladdade filer', 'allowed_file_extensions',0, 'f=index.htm&amp;as=&amp;ae=_end'), //cpg1.4
  array('Tillåtna bildformat', 'allowed_img_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_pic_extensions&amp;ae=admin_picture_thumb_advanced_pic_extensions_end'), //cpg1.4
  array('Tillåtna videoformat', 'allowed_mov_types',0, 'f=index.htm&amp;as=admin_thumbs_advanced_movie&amp;ae=admin_thumbs_advanced_movie_end'), //cpg1.4
  array('Autostart för videouppspelning', 'media_autostart',1, 'f=index.htm&amp;as=admin_movie_autoplay&amp;ae=admin_movie_autoplay_end'), //cpg1.4
  array('Tillåtna ljudformat', 'allowed_snd_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_audio_extensions&amp;ae=admin_picture_thumb_advanced_audio_extensions_end'), //cpg1.4
  array('Tillåtna dokumentformat', 'allowed_doc_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_doc_extensions&amp;ae=admin_picture_thumb_advanced_doc_extensions_end'), //cpg1.4
  array('Metod för att skala om bilder','thumb_method',2, 'f=index.htm&amp;as=admin_picture_thumb_advanced_resize_method&amp;ae=admin_picture_thumb_advanced_resize_method_end'), //cpg1.4
  array('Sökväg till ImageMagick (t.ex. /usr/bin/X11/)', 'impath', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_im_path&amp;ae=admin_picture_thumb_advanced_im_path_end'), //cpg1.4
  //array('Tillåtna bildformat (gäller endast ImageMagick)', 'allowed_img_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_allowed_imagetypes&amp;ae=admin_picture_thumb_advanced_allowed_imagetypes_end'), //cpg1.4
  array('Kommandoval (Command line options) för ImageMagick', 'im_options', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_im_commandline&amp;ae=admin_picture_thumb_advanced_im_commandline_end'), //cpg1.4
  array('Läs Exif-data i JPEG-filer', 'read_exif_data', 13, 'f=index.htm&amp;as=admin_picture_thumb_advanced_exif&amp;ae=admin_picture_thumb_advanced_exif_end'), //cpg1.4
  array('Läs IPTC-data i JPEG-filer', 'read_iptc_data', 1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_iptc&amp;ae=admin_picture_thumb_advanced_iptc_end'), //cpg1.4
  array('Mapp för album <a href="#notice1" class="clickable_option">*</a>', 'fullpath', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_albums_dir&amp;ae=admin_picture_thumb_advanced_albums_dir_end'), //cpg1.4
  array('Mapp för användarnas filer <a href="#notice1" class="clickable_option">*</a>', 'userpics', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_userpics_dir&amp;ae=admin_picture_thumb_advanced_userpics_dir_end'), //cpg1.4
  array('Prefix för mellanliggande bilder <a href="#notice1" class="clickable_option">*</a>', 'normal_pfx', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_intermediate_prefix&amp;ae=admin_picture_thumb_advanced_intermediate_prefix_end'), //cpg1.4
  array('Prefix för tumnaglar <a href="#notice1" class="clickable_option">*</a>', 'thumb_pfx', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_thumbs_prefix&amp;ae=admin_picture_thumb_advanced_thumbs_prefix_end'), //cpg1.4
  array('Förvalt läge för mappar', 'default_dir_mode', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_chmod_folder&amp;ae=admin_picture_thumb_advanced_chmod_folder_end'), //cpg1.4
  array('Förvalt läge för filer', 'default_file_mode', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_chmod_files&amp;ae=admin_picture_thumb_advanced_chmod_files_end'), //cpg1.4

  'Användare',
  array('Tillåt registrering av nya användare', 'allow_user_registration', 1, 'f=index.htm&amp;as=admin_allow_registration&amp;ae=admin_allow_registration_end'), //cpg1.4
  array('Tillåta icke inloggade användare (gäst eller anonym)', 'allow_unlogged_access', 1, 'f=index.htm&amp;as=admin_allow_unlogged_access&amp;ae=admin_allow_unlogged_access_end'), //cpg1.4
  array('Registrering kräver verifiering med e-post', 'reg_requires_valid_email', 1, 'f=index.htm&amp;as=admin_registration_verify&amp;ae=admin_registration_verify_end'), //cpg1.4
  array('Meddela adminstratören vid registrering med e-post', 'reg_notify_admin_email', 1, 'f=index.htm&amp;as=admin_registration_notify&amp;ae=admin_registration_notify_end'), //cpg1.4
  array('Administratören måste godkänna registrering', 'admin_activation', 1, 'f=index.htm&amp;as=admin_activation&amp;ae=admin_activation_end'),  //cpg1.4
  array('Tillåt två användare att ha samma e-postadress', 'allow_duplicate_emails_addr', 1, 'f=index.htm&amp;as=admin_allow_duplicate_emails_addr&amp;ae=admin_allow_duplicate_emails_addr_end'), //cpg1.4
  array('Meddela administratören att det finns uppladdningar som behöver godkännas', 'upl_notify_admin_email', 1, 'f=index.htm&amp;as=admin_approval_notify&amp;ae=admin_approval_notify_end'), //cpg1.4
  array('Tillåt inloggade användare att se medlemslistan', 'allow_memberlist', 1, 'f=index.htm&amp;as=admin_user_memberlist&amp;ae=admin_user_memberlist_end'), //cpg1.4
  array('Tillåt användare att ändra e-postadress i sin profil', 'allow_email_change', 1, 'f=index.htm&amp;as=admin_user_allow_email_change&amp;ae=admin_user_allow_email_change_end'), //cpg1.4
  array('Tillåt användare att ha kontroll över sina bilder i publika gallerier', 'users_can_edit_pics', 1, 'f=index.htm&amp;as=admin_user_editpics_public_start&amp;ae=admin_user_editpics_public_end'), //cpg1.4
  array('Antal misslyckade loginförsök innan tillfällig blockering (för att undvika attacker)', 'login_threshold', 0, 'f=index.htm&amp;as=admin_user_login_start&amp;ae=admin_user_login_end'), //cpg1.4
  array('Varaktighet för tillfälling blockering efter misslyckade loginförsök', 'login_expiry', 0, 'f=index.htm&amp;as=admin_user_login_start&amp;ae=admin_user_login_end'), //cpg1.4
  array('Aktivera rapport till administratören', 'report_post', 1, 'f=index.htm&amp;as=admin_user_enable_report&amp;ae=admin_user_enable_report_end'),  //cpg1.4

// custom profile fields,  //cpg1.4
  'Anpassade fält för användarprofiler (lämnas tomma om de inte används).
  Använd Profil 6 för längre texter, såsom biografier.', //cpg1.4
  array('Profil 1, namn', 'user_profile1_name', 0, 'f=index.htm&amp;as=admin_custom&amp;ae=admin_custom_end'), //cpg1.4
  array('Profil 2, namn', 'user_profile2_name', 0), //cpg1.4
  array('Profil 3, namn', 'user_profile3_name', 0), //cpg1.4
  array('Profil 4, namn', 'user_profile4_name', 0), //cpg1.4
  array('Profil 5, namn', 'user_profile5_name', 0), //cpg1.4
  array('Profil 6, namn', 'user_profile6_name', 0), //cpg1.4

  'Anpassade fält för bildbeskrivningar (lämnas tomma om de inte används)',
  array('Fält 1, namn', 'user_field1_name', 0, 'f=index.htm&amp;as=admin_custom_image&amp;ae=admin_custom_image_end'), //cpg1.4
  array('Fält 2, namn', 'user_field2_name', 0),
  array('Fält 3, namn', 'user_field3_name', 0),
  array('Fält 4, namn', 'user_field4_name', 0),

  'Cookies',
  array('Namn på cookie', 'cookie_name', 0, 'f=index.htm&amp;as=admin_cookie_name&amp;ae=admin_cookie_name_end'), //cpg1.4
  array('Sökväg till cookie', 'cookie_path', 0, 'f=index.htm&amp;as=admin_cookie_path&amp;ae=admin_cookie_path_end'), //cpg1.4

  'E-post (oftast behöver inget ändras här, lämna allt blankt om du är osäker)', //cpg1.4
  array('SMTP-värd (om den lämnas tom används Sendmail)', 'smtp_host', 0, 'f=index.htm&amp;as=admin_email&amp;ae=admin_email_end'), //cpg1.4
  array('SMTP-användarnamn', 'smtp_username', 0), //cpg1.4
  array('SMTP-lösenord', 'smtp_password', 0), //cpg1.4

  'Loggning och statistik', //cpg1.4
  array('Loggningsläge <a href="#notice3" class="clickable_option">***</a>', 'log_mode', 11, 'f=index.htm&amp;as=admin_logging_log_mode&amp;ae=admin_logging_log_mode_end'), //cpg1.4
  array('Logga e-vykort', 'log_ecards', 1, 'f=index.htm&amp;as=admin_general_log_ecards&amp;ae=admin_general_log_ecards_end'), //cpg1.4
  array('För detaljerad statistik över röstningar','vote_details',1, 'f=index.htm&amp;as=admin_logging_votedetails&amp;ae=admin_logging_votedetails_end'), //cpg1.4
  array('För detaljerad statistik över träffar','hit_details',1, 'f=index.htm&amp;as=admin_logging_hitdetails&amp;ae=admin_logging_hitdetails_end'), //cpg1.4

  'Underhåll', //cpg1.4
  array('Aktivera debug-läge', 'debug_mode', 9, 'f=index.htm&amp;as=debug_mode&amp;ae=debug_mode_end'), //cpg1.4
  array('Visa anmärkningar i debug-läge', 'debug_notice', 1, 'f=index.htm&amp;as=admin_misc_debug_notices&amp;ae=admin_misc_debug_notices_end'), //cpg1.4
  array('Galleriet är avstängt', 'offline', 1, 'f=index.htm&amp;as=admin_general_offline&amp;ae=admin_general_offline_end'), //cpg1.4
);


// ------------------------------------------------------------------------- //
// File db_ecard.php
// ------------------------------------------------------------------------- //

if (defined('DB_ECARD_PHP')) $lang_db_ecard_php = array(
  'title' => 'Skickade e-vykort',
  'ecard_sender' => 'Avsändare',
  'ecard_recipient' => 'Mottagare',
  'ecard_date' => 'Datum',
  'ecard_display' => 'Visa e-vykort',
  'ecard_name' => 'Namn',
  'ecard_email' => 'E-post',
  'ecard_ip' => 'IP',
  'ecard_ascending' => 'stigande',
  'ecard_descending' => 'fallande',
  'ecard_sorted' => 'sorterade',
  'ecard_by_date' => 'efter datum',
  'ecard_by_sender_name' => 'efter avsändarens namn',
  'ecard_by_sender_email' => 'efter avsändarens e-post',
  'ecard_by_sender_ip' => 'efter avsändarens IP-nummer',
  'ecard_by_recipient_name' => 'efter mottagarens namn',
  'ecard_by_recipient_email' => 'efter mottagarens e-post',
  'ecard_number' => 'Visar kort %s till %s av %s',
  'ecard_goto_page' => 'Gå till sida',
  'ecard_records_per_page' => 'Kort per sida',
  'check_all' => 'Markera alla',
  'uncheck_all' => 'Avmarkera alla',
  'ecards_delete_selected' => 'Radera markerade kort',
  'ecards_delete_confirm' => 'Är du säker på att du vill radera e-vykorten? Klicka i boxen!',
  'ecards_delete_sure' => 'Jag är säker!',
);


// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
  'empty_name_or_com' => 'Du måste skriva ditt namn och kommentar.',
  'com_added' => 'Din kommentar har lagts till.',
  'alb_need_title' => 'Du måste ha en titel på ditt album!',
  'no_udp_needed' => 'Ingen uppdatering behövs.',
  'alb_updated' => 'Albumet har uppdaterats.',
  'unknown_album' => 'Valt album finns inte eller så saknar du behörighet att lägga till bilder i detta album.',
  'no_pic_uploaded' => 'Ingen fil laddades upp!<br /><br />Om du verkligen valde en fil att ladda upp, kontrollera att servern tillåter uppladdning...',
  'err_mkdir' => 'Kan inte skapa mapp %s!',
  'dest_dir_ro' => 'Mappen %s är skrivskyddad!',
  'err_move' => 'Det går inte att flytta %s till %s!',
  'err_fsize_too_large' => 'Bildstorleken är för stor (max storlek är %s x %s)!', //obsolete since cpg1.3 - consider removal in cpg1.4 once upload.php has been overhauled
  'err_imgsize_too_large' => 'Filstorleken är för stor (max storlek är %s KB)!', //obsolete since cpg1.3 - consider removal in cpg1.4 once upload.php has been overhauled
  'err_invalid_img' => 'Filformatet är inte ett godkänt filformat!',
  'allowed_img_types' => 'Du kan bara ladda upp %s bilder.',
  'err_insert_pic' => 'Filen \'%s\' kan inte läggas till i albumet ',
  'upload_success' => 'Din fil laddades upp.<br /><br />Den kommer att visas efter att administratören har godkänt den.',
  'notify_admin_email_subject' => '%s - Meddelande om uppladdning',
  'notify_admin_email_body' => 'En fil har laddats upp av %s och behöver godkännas av dig. Gå till %s',
  'info' => 'Information',
  'com_added' => 'Kommmentar tillagd',
  'alb_updated' => 'Albumet har uppdaterats',
  'err_comment_empty' => 'Din kommentar är tom!',
  'err_invalid_fext' => 'Bara filer med följande filändelser är tillåtna:<br /><br />%s.',
  'no_flood' => 'Du har gjort den senaste kommentaren för denna fil.<br /><br />Du kan ändra kommentaren om du vill.',
  'redirect_msg' => 'Du flyttas till ny sida.<br /><br /><br />Klicka på "Fortsätt" om sidan inte laddas automatiskt.',
  'upl_success' => 'Din fil har lagts till.',
  'email_comment_subject' => 'Kommmentar har lagts till i bildgalleriet.',
  'email_comment_body' => 'Någon har postat en kommentar i ditt galleri. Se den på: ',
  'album_not_selected' => 'Inget album valt', //cpg1.4
  'com_author_error' => 'En registrerad användare har redan det smeknamnet, logga in eller välj ett annat.', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
  'caption' => 'Rubrik',
  'fs_pic' => 'full bildstorlek',
  'del_success' => 'Raderingen lyckades!',
  'ns_pic' => 'normal bildstorlek',
  'err_del' => 'kan inte raderas',
  'thumb_pic' => 'tumnagel',
  'comment' => 'kommentar',
  'im_in_alb' => 'bild i album',
  'alb_del_success' => 'Albumet &laquo;%s&raquo; är raderat', //cpg1.4
  'alb_mgr' => 'Albumhanterare',
  'err_invalid_data' => 'ogiltig data mottagen i \'%s\'',
  'create_alb' => 'Skapar album \'%s\'',
  'update_alb' => 'Uppdaterar album \'%s\' med titel \'%s\' och index \'%s\'',
  'del_pic' => 'Radera fil',
  'del_alb' => 'Radera album',
  'del_user' => 'Radera användare',
  'err_unknown_user' => 'Vald användare finns inte!',
  'err_empty_groups' => 'Det finns ingen tabell för grupper eller så är tabellen är tom!', //cpg1.4
  'comment_deleted' => 'Kommentaren har raderats',
  'npic' => 'Bild', //cpg1.4
  'pic_mgr' => 'Bildhanterare', //cpg1.4
  'update_pic' => 'Uppdaterar bild \'%s\' med filnamn \'%s\' och index \'%s\'', //cpg1.4
  'username' => 'Användarnamn', //cpg1.4
  'anonymized_comments' => '%s kommentarer är gjorda anonyma', //cpg1.4
  'anonymized_uploads' => '%s publika uppladdningar är gjorda anonyma', //cpg1.4
  'deleted_comments' => '%s kommentarer raderade', //cpg1.4
  'deleted_uploads' => '%s publika uppladdningar raderade', //cpg1.4
  'user_deleted' => 'Användaren %s raderad', //cpg1.4
  'activate_user' => 'Aktivera användare', //cpg1.4
  'user_already_active' => 'Användaren har redan aktiverats', //cpg1.4
  'activated' => 'Aktiverad', //cpg1.4
  'deactivate_user' => 'Avaktivera användare', //cpg1.4
  'user_already_inactive' => 'Användaren har redan avaktiverats', //cpg1.4
  'deactivated' => 'Avaktiverad', //cpg1.4
  'reset_password' => 'Ändra lösenord', //cpg1.4
  'password_reset' => 'Lösenord ändrat till %s', //cpg1.4
  'change_group' => 'Ändra primär grupp', //cpg1.4
  'change_group_to_group' => 'Primär grupp ändrad från %s till %s', //cpg1.4
  'add_group' => 'Lägg till sekundär grupp', //cpg1.4
  'add_group_to_group' => 'Lägger till användare %s till grupp %s. Användaren är nu medlem i %s som primär grupp och i %s som sekundär(a) grupp(er).', //cpg1.4
  'status' => 'Status', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File displayecard.php
// ------------------------------------------------------------------------- //

if (defined('DISPLAYECARD_PHP')) {

$lang_displayecard_php = array(
  'invalid_data' => 'Innehållet i ditt e-vykort har blivit korrupt av din e-postklient. Kontrollera att länken är korrekt.', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File displayimage.php
// ------------------------------------------------------------------------- //

if (defined('DISPLAYIMAGE_PHP')){

$lang_display_image_php = array(
  'confirm_del' => 'Är du säker på att du vill RADERA filen? \\nKommentarer kommer också att raderas.', //js-alert
  'del_pic' => 'RADERA DENNA FIL',
  'size' => '%s x %s pixlar',
  'views' => '%s gånger',
  'slideshow' => 'Bildspel',
  'stop_slideshow' => 'STOPPA BILDSPEL',
  'view_fs' => 'Klicka för stor bild',
  'edit_pic' => 'Ändra filinformation', //cpg1.4
  'crop_pic' => 'Beskär och rotera',
  'set_player' => 'Ändra spelare',
);

$lang_picinfo = array(
  'title' =>'Filinformation',
  'Filename' => 'Filnamn',
  'Album name' => 'Albumnamm',
  'Rating' => 'Betyg (%s röster)',
  'Keywords' => 'Nyckelord',
  'File Size' => 'Filstorlek',
  'Date Added' => 'Datum tillagd', //cpg1.4
  'Dimensions' => 'Dimensioner',
  'Displayed' => 'Visad',
  'URL' => 'URL', //cpg1.4
  'submit' => 'Skicka', //cpg1.4
  'success' => 'Informationen har uppdaterats.', //cpg1.4
  'details' => 'Detaljer', //cpg1.4
  'addFav'=>'Lägg till i favoriter',
  'addFavPhrase'=>'Favoriter',
  'remFav'=>'Ta bort från favoriter',
  'ManageExifDisplay' => 'Hantera visning av Exif-information', //cpg1.4

// IPTC tags
  'iptcTitle'=>'IPTC: titel',
  'iptcCopyright'=>'IPTC: copyright',
  'iptcKeywords'=>'IPTC: nyckelord',
  'iptcCategory'=>'IPTC: kategori',
  'iptcSubCategories'=>'IPTC: underkategorier',

// Exif tag descriptions made by ecto, most info from:
// * http://park2.wakwak.com/~tsuruzoh/Computer/Digicams/exif-e.html
// * http://www.exif.org/Exif2-1.PDF & http://www.exif.org/Exif2-2.PDF

//***** Exif tags which are in the official Exif specification *****//

// Tags relating to version
  'FlashPixVersion' => 'Flash Pix-version', //cpg1.4
  'ExifVersion' => 'Exif-version', //cpg1.4

// Tags relating to image configuration/data structure
  'ColorSpace' => 'Färgrymd', //cpg1.4 (sRGB or Uncalibrated)
  'ComponentsConfiguration' => 'Komponentkonfiguration', //cpg1.4 (i.e. YCbCr or RGB)
  'CompressedBitsPerPixel' => 'Bitar per pixel', //cpg1.4 (Information specific to compressed data. The compression mode used for a compressed image is indicated in unit bits per pixel. 8/[this value] should give an estimated JPEG compression ratio.)
  'xResolution' => 'X-upplösning', //cpg1.4 (The number of pixels per ResolutionUnit (not to be confused with image dimension!))
  'yResolution' => 'Y-upplösning', //cpg1.4 (The number of pixels per ResolutionUnit (not to be confused with image dimension!))
  'ExifImageWidth' => 'Bildbredd', //cpg1.4 (This is actually the Exif tag "PixelXDimension")
  'ExifImageHeight' => 'Bildhöjd', //cpg1.4 (This is actually the Exif tag "PixelYDimension")
  'Orientation' => 'Bildorientering', //cpg1.4 (The image orientation)  
  'YCbCrPositioning' => 'YCbCr-positionering', //cpg1.4 (The position of chrominance components in relation to the luminance component)
  'ResolutionUnit' => 'Upplösningens måttenhet', //cpg1.4 (The unit for measuring XResolution and YResolution, i.e. inches/centimeters. The same unit is used for both XResolution and YResolution.)

// Tags relating to date and time
  'DateTime' => 'Datum och tid', //cpg1.4 (The date and time the file was changed)
  'DateTimeOriginal' => 'Datum och tid (original)', //cpg1.4 (The date and time when the original image data was generated)
  'DateTimedigitized' => 'Datum och tid (digitaliserad)', //cpg1.4 (The date and time when the image was stored as digital data)

// Tags relating to picture-taking conditions
  'ExposureTime' => 'Exponeringstid', //cpg1.4 (Exposure time, given in seconds)
  'ExposureBiasValue' => 'Exponeringskompensation', //cpg1.4 (The exposure bias)
  'ExposureProgram' => 'Exponeringsprogram', //cpg1.4 (The class of the program used by the camera to set exposure when the picture is taken, i.e. Aperture priority/Shutter priority etc)
  'ExposureMode' => 'Exponeringsmetod', //cpg1.4 (This tag indicates the exposure mode set when the image was shot, i.e. Auto exposure/Manual exposure/Auto bracket)

  'FNumber' => 'Bländartal', //cpg1.4 (The F number)
  'MaxApertureValue' => 'Största bländartal', //cpg1.4 (The smallest F number of the lens)
  'FocalLength' => 'Brännvidd', //cpg1.4 (The actual focal length of the lens, in mm. Conversion is not made to the focal length of a 35 mm film camera.)
  'ISOSpeedRatings'=>'ISO', //cpg1.4 (Indicates the ISO Speed)
  'MeteringMode' => 'Ljusmätningsmetod', //cpg1.4 (The metering mode, i.e. Spot/Center weighted average etc)  
  'LightSource' => 'Ljuskälla (vitbalans)', //cpg1.4 (This is actually the whitebalance setting, i.e. Tungsten/Fluorescent etc)
  'WhiteBalance' => 'Metod för val av vitbalans', //cpg1.4 (This tag indicates the white balance mode set when the image was shot, i.e. Auto white balance/Manual white balance)
  'SceneCaptureMode' => 'Typ av motiv', //cpg1.4 (This is actually called "SceneCaptureType" according to Exif 2.2 specifications - Landscape/Portrait/Night scene etc)
  'SceneType' => 'Scentyp', //cpg1.4 (Indicates the type of scene. If a DSC recorded the image, this tag value shall always be set to 1, indicating that the image was directly photographed.)
  'Flash' => 'Blixt', //cpg1.4 (This tag indicates the status of flash when the image was shot)
  'DigitalZoomRatio' => 'Digital zoomfaktor', //cpg1.4 (This tag indicates the digital zoom ratio when the image was shot)
  
  'GainControl' => 'Bildförstärkning', //cpg1.4 (This tag indicates the degree of overall image gain adjustment i.e. Low/High gain up and Low/High gain down)
  'Contrast' => 'Kontrast', //cpg1.4 (This tag indicates the direction of contrast processing applied by the camera when the image was shot i.e. Normal/Soft/Hard)  
  'Saturation' => 'Färgmättnad', //cpg1.4 (This tag indicates the direction of saturation processing applied by the camera when the image was shot i.e. Normal/Low saturation/High saturation)
  'Sharpness' => 'Skärpa', //cpg1.4 (This tag indicates the direction of sharpness processing applied by the camera when the image was shot i.e. Normal/Soft/Hard)

  'FileSource' => 'Filkälla', //cpg1.4 (Indicates the image source)
  'CustomerRender' => 'Anpassad bildbearbetning', //cpg1.4 (Actually called "CustomRendered" according to Exif 2.2 specifications - This tag indicates the use of special processing on image data, such as rendering geared to output. When special processing is performed, the reader is expected to disable or minimize any further processing.)
  
// Other tags
  'Make' => 'Tillverkare', //cpg1.4 (The manufacturer of the recording equipment)
  'Model' => 'Modell', //cpg1.4 (The model name or model number of the equipment)
  'Software' => 'Programvara', //cpg1.4 (This tag records the name and version of the software or firmware of the camera or image input device used to generate the image)
  'ImageDescription' => ' Bildbeskrivning', //cpg1.4 (A character string giving the title of the image)
  'ExifOffset' => 'Exif-index', //cpg1.4 (Where SubIFD area starts, actually called "Exif IFD Pointer" in Exif specs)
  'IFD1Offset' => 'IFD1-index', //cpg1.4 (Where IFD1 area starts (thumbnail data))
  'ExifInteroperabilityOffset' => 'Index för Exif-kompatibilitetsdata', //cpg1.4 (Indicates the identification of the Interoperability rule)

//***** End Exif tags which are in the official Exif specification *****//

  
//***** Non-standard Exif tags (i.e. manufacturer specific tags - for example, in Nikon digicams "ISOSetting" means the same as "ISOSpeedRatings") *****//
  'ISOSetting' => 'ISO', //cpg1.4 (Should be translated the same way as the "ISOSpeedRatings" tag)
  'ISOSelection' => 'Metod för val av ISO', //cpg1.4 (Auto/Manual etc)

  'ColorMode' => 'Färgläge', //cpg1.4 (Color/B&W/Monochrome etc)
  'Quality' => 'Kvalitet', //cpg1.4 (Quality setting)
  'ImageSharpening' => 'Skärpeinställning', //cpg1.4 (Auto/High etc)
  'ImageAdjustment' => 'Bildjustering', //cpg1.4 (Auto/Manual/Contrast+/Contrast- etc)
  'NoiseReduction' => 'Brusreducering', //cpg1.4

  'FocusMode' => 'Fokuseringsmetod', //cpg1.4 (Auto/Manual, Single/Continuous etc)
  'ManualFocusDistance' => 'Manuellt fokusavstånd', //cpg1.4 (Distance in meters if focus was manually selected, otherwise 0)
  'AFFocusPosition' => 'Fokusposition vid autofokus', //cpg1.4 (Where focus was when using autofocus, i.e. Center/Top/Bottom/Left/Right etc)
  'DigitalZoom' => 'Digital zoomfaktor', //cpg1.4 (Same as "DigitalZoomRatio" but manufacturer specific values, should be translated the same way as the "DigitalZoomRatio" tag)
  'FlashSetting' => 'Blixt', //cpg1.4 (Normal/Red eye etc, should be translated the same way as the "Flash" tag)

  'Comment' => 'Kommentar', // (Note: this is not the Exif tag "UserComment")
  'Adapter' => 'Konverter', //cpg1.4 (An adapter is what you put over the lens to change the focal length, i.e. this tag shows Off/Fish eye/Wide etc)
//***** End non-standard Exif tags *****//
);

$lang_display_comments = array(
  'OK' => 'OK',
  'edit_title' => 'Ändra denna kommentar',
  'confirm_delete' => 'Är du säker på att du vill radera kommentaren?', //js-alert
  'add_your_comment' => 'Lägg till kommentar',
  'name'=>'Namn',
  'comment'=>'Kommentar',
  'your_name' => 'Anonym',
  'report_comment_title' => 'Rapportera kommentar till administratören', //cpg1.4
);

$lang_fullsize_popup = array(
  'click_to_close' => 'Klicka på bilden för att stänga fönstret',
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
  'title' => 'Skicka ett e-vykort',
  'invalid_email' => '<font color="red"><b>Varning</b></font>: ogiltig e-postadress:', //cpg1.4
  'ecard_title' => 'Ett e-vykort till dig från %s',
  'error_not_image' => 'Bara bilder kan skickas som e-vykort.',
  'view_ecard' => 'Alternativ länk om e-vykortet inte visas korrekt', //cpg1.4
  'view_ecard_plaintext' => 'För att se e-vykortet, kopiera denna URL och klistra in den i din webbläsare:', //cpg1.4
  'view_more_pics' => 'Se fler bilder!', //cpg1.4
  'send_success' => 'Ditt e-vykort har skickats!',
  'send_failed' => 'Servern kan inte skicka ditt e-vykort...',
  'from' => 'Från',
  'your_name' => 'Ditt namn',
  'your_email' => 'Din e-postadress',
  'to' => 'Till',
  'rcpt_name' => 'Mottagarens namn',
  'rcpt_email' => 'Mottagarens e-postadress',
  'greetings' => 'Rubrik', //cpg1.4
  'message' => 'Meddelande', //cpg1.4
  'ecards_footer' => 'Skickat av  %s från IP %s vid %s (galleriets tid)', //cpg1.4
  'preview' => 'Förhandsgranskning av e-vykort', //cpg1.4
  'preview_button' => 'Granska', //cpg1.4
  'submit_button' => 'Skicka kort', //cpg1.4
  'preview_view_ecard' => 'Detta kommer att vara en länk när e-vykortet har skapats. Den fungerar inte för förhandsgranskningar.', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File report_file.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('REPORT_FILE_PHP') || defined('DISPLAYREPORT_PHP')) $lang_report_php =array(
  'title' => 'Rapportera till administratör', //cpg1.4
  'invalid_email' => '<b>Varning</b>: ogiltig e-postadress!', //cpg1.4
  'report_subject' => 'En rapport från %s gällande galleri %s', //cpg1.4
  'view_report' => 'Alternativ länk om rapporteringen inte visas korrekt', //cpg1.4
  'view_report_plaintext' => 'För att se rapporteringen, kopiera denna URL och klistra in den i din webbläsare:', //cpg1.4
  'view_more_pics' => 'Galleri', //cpg1.4
  'send_success' => 'Din rapportering har skickats!', //cpg1.4
  'send_failed' => 'Servern kan inte skicka din rapport...', //cpg1.4
  'from' => 'Från', //cpg1.4
  'your_name' => 'Ditt namn', //cpg1.4
  'your_email' => 'Din e-postadres', //cpg1.4
  'to' => 'Till', //cpg1.4
  'administrator' => 'Administratör/moderator', //cpg1.4
  'subject' => 'Ämne', //cpg1.4
  'comment_field_name' => 'Rapportering gällande kommentar av "%s"', //cpg1.4
  'reason' => 'Anledning', //cpg1.4
  'message' => 'Meddelande', //cpg1.4
  'report_footer' => 'Skickat av %s från IP %s vid %s (galleriets tid)', //cpg1.4
  'obscene' => 'Obscent', //cpg1.4
  'offensive' => 'Stötande', //cpg1.4
  'misplaced' => 'Utanför ämne/felplacerad', //cpg1.4
  'missing' => 'Saknas', //cpg1.4
  'issue' => 'Fel/visas inte', //cpg1.4
  'other' => 'Annat', //cpg1.4
  'refers_to' => 'Rapporteringen avser fil', //cpg1.4
  'reasons_list_heading' => 'Anledning till rapportering:', //cpg1.4
  'no_reason_given' => 'Ingen anledning har angetts', //cpg1.4
  'go_comment' => 'Gå till kommentar', //cpg1.4
  'view_comment' => 'Visa fullständig rapportering med kommentar', //cpg1.4
  'type_file' => 'Fil', //cpg1.4
  'type_comment' => 'Kommentar', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
  'pic_info' => 'Filinformation',
  'album' => 'Album',
  'title' => 'Titel',
  'filename' => 'Filnamn', //cpg1.4
  'desc' => 'Beskrivning',
  'keywords' => 'Nyckelord<br />(separerade med mellanslag)',
  'new_keyword' => 'Nya nyckelord', //cpg1.4
  'new_keywords' => 'Nya nyckelord hittade', //cpg1.4
  'existing_keyword' => 'Nuvarande nyckelord', //cpg1.4
  'pic_info_str' => '%s x %s - %s KB - %s visningar - %s röster',
  'approve' => 'Godkänn fil',
  'postpone_app' => 'Skjut upp godkännande',
  'del_pic' => 'Radera fil',
  'del_all' => 'Radera ALLA filer', //cpg1.4
  'read_exif' => 'Läs Exif-informationen igen',
  'reset_view_count' => 'Nollställ räknaren för visningar',
  'reset_all_view_count' => 'Nollställ ALLA räknare för visningar', //cpg1.4
  'reset_votes' => 'Nollställ röstningar',
  'reset_all_votes' => 'Nollställ ALLA röstningar', //cpg1.4
  'del_comm' => 'Radera kommentarer',
  'del_all_comm' => 'Radera ALLA kommentarer', //cpg1.4
  'upl_approval' => 'Godkänn uppladdning', //cpg1.4
  'edit_pics' => 'Redigera filer',
  'see_next' => 'Se nästa filer',
  'see_prev' => 'Se föregående filer',
  'n_pic' => '%s filer',
  'n_of_pic_to_disp' => 'Antal filer att visa',
  'apply' => 'Utför ändringar',
  'crop_title' => 'Coppermines bildredigerare',
  'preview' => 'Förhandsgranska',
  'save' => 'Spara bild',
  'save_thumb' =>'Spara som tumnagel',
  'gallery_icon' => 'Använd som min ikon', //cpg1.4
  'sel_on_img' =>'Markeringen måste vara inom bilden!', //js-alert
  'album_properties' =>'Albumets egenskaper', //cpg1.4
  'parent_category' =>'Överliggande kategori', //cpg1.4
  'thumbnail_view' =>'Tumnagelvisning', //cpg1.4
  'select_unselect' =>'Markera/avmarkera alla', //cpg1.4
  'file_exists' => "Filen '%s' finns redan.", //cpg1.4
  'rename_failed' => "Kan inte byta namn från '%s' till '%s'.", //cpg1.4
  'src_file_missing' => "Källfil '%s' saknas.", // cpg 1.4
  'mime_conv' => "Kan inte konvertera filen från '%s' till '%s'",//cpg1.4
  'forb_ext' => 'Otillåten filändelse.',//cpg1.4
);

// ------------------------------------------------------------------------- //
// File faq.php
// ------------------------------------------------------------------------- //

if (defined('FAQ_PHP')) $lang_faq_php = array(
  'faq' => 'Vanliga frågor',
  'toc' => 'Innehåll',
  'question' => 'Fråga: ',
  'answer' => 'Svar: ',
);

if (defined('FAQ_PHP')) $lang_faq_data = array(
  'Allmän FAQ',
  array('Varför måste jag registrera mig?', 'Det är administratören som bestämmer om registrering behövs eller inte. Registrering ger medlemmarna fler funktioner så som ladda upp filer, personliga favoritbilder, betygsättning av bilder, göra kommentarer, etc.', 'allow_user_registration', '1'),
  array('Hur registrerar jag mig?', 'Gå till &quot;Registrera&quot; och fyll i de obligatoriska fälten (och de frivillga om du vill).<br />Om administratören har aktiverat Bekräftelse via e-post kommer du att få ett e-brev till adressen du fyllde i. Där finns instruktioner om hur du ska göra för att aktivera ditt medlemskap. Ditt medlemskap måste vara aktiverat för att du ska kunna logga in.', 'allow_user_registration', '1'), //cpg1.4
  array('Hur loggar jag in?', 'Gå till &quot;Login&quot; och fyll i ditt användarnamn och ditt lösenord. Du kan kryssa i &quot;Kom ihåg mig&quot; för att alltid loggas in när du besöker sajten.<br /><b>VIKTIGT: Cookies måste vara påslagna i din webbläsare och inte raderas för att &quot;Kom ihåg mig&quot; skall fungera.</b>', 'offline', 0),
  array('Varför kan jag inte logga in?', 'Har du registrerat dig och klickat på länken i e-brevet som skickades till dig? Länken i e-brevet aktiverar ditt konto. Har du andra problem, kontakta administratören.', 'offline', 0),
  array('Vad gör jag om jag glömt mitt lösenord?', 'Om sajten har en länk för &quot;Jag har glömt mitt lösenord&quot;, använd den. Annars kontakta administratören för ett nytt.', 'offline', 0),
  //array('What if I changed my email address?', 'Just simply login and change your email address through &quot;Profile&quot;', 'offline', 0),
  array('Hur sparar jag en bild i &quot;Mina favoriter&quot;?', 'Klicka på en bild och sedan klickar du på länken &quot;Visa/dölj filinformation&quot; (<img src="images/info.gif" width="16" height="16" border="0" alt="Filinformation" />). Rulla sedan ned på sidan och klicka på &quot;Mina favoriter&quot; som finns under "Filinformation".<br />Administratören kan ha valt att visa filinformationen direkt, i sådant fall behöver du inte klicka på "Visa/dölj filinformation".<br />VIKTIGT: Cookies måste vara påslagna i din webbläsare och inte raderas fär att detta ska fungera.', 'offline', 0),
  array('Hur betygsätter jag en fil?', 'Klicka på en tumnagel och gå längst ned på sidan och välj det betyg du vill ge.', 'offline', 0),
  array('Hur lägger jag till en kommentar till en bild?', 'Klicka på en tumnagel och gå längst ned på sidan och skriv in din kommentar.', 'offline', 0),
  array('Hur laddar jag upp en fil?', 'Gå till &quot;Ladda upp fil&quot; och klicka på &quot;Bläddra&quot;. Hitta filen du vill ladda upp klicka på &quot;Öppna&quot;. Klicka sedan på "Fortsätt" och sedan på "Fortsätt" igen. Välj det album du vill ladda upp filen till och lägg till en titel och beskrivning om du vill. Klicka på &quot;Fortsätt&quot; igen och uppladdningen är klar.<br /><br />Alternativt om du använder <b>Windows XP</b> så kan du ladda upp flera filer samtidigt direkt till ditt privata album genom att använda webbpubliceringsguiden i Windows XP. För instruktioner om hur du gör det och hur du skaffar de nödvändiga filerna, klicka <a href="xp_publish.php">här</a>.', 'allow_private_albums', 1), //cpg1.4
  array('Vart kan jag ladda upp bilder?', 'Du kan ladda upp filer till ett av dina album i&quot;Mina album&quot;. Administratören kan även låta dig ladda upp filer till ett eller flera av albumen i huvudgalleriet.', 'allow_private_albums', 0),
  array('Vilken sort och storlek kan det vara på bilderna jag laddar upp?', 'Både storlek och filtyper (jpg, png, etc) är upp till administratören.', 'offline', 0),
  array('Hur skapar jag, byter namn eller tar bort ett album i &quot;Mitt galleri&quot;?', 'Du ska redan var inloggad som &quot;administratör&quot;<br /> Gå till&quot;Skapa/Sortera mina album och klicka på &quot;Nytt album&quot;. Ändra &quot;Nytt album&quot; till önskat namn.<br />Du kan även döpa om övriga album i galleriet.<br />Klicka på &quot;utför ändringar&quot;.', 'allow_private_albums', 0),
  array('Hur kan jag ändra och begränsa användarnas tillgång till mitt album?', 'Du ska redan var inloggad som &quot;administratör&quot;<br />Gå till &quot;Ändra mina album&quot;. I &quot;Uppdatera album&quot; menyn, välj vilket album du vil ändra.<br />Här kan du ändra namn, beskrivning, tumnagel, begränsa åtkomst och behörighet för betygsättning och kommentarer.<br />Klicka på &quot;Uppdatera album.', 'allow_private_albums', 0),
  array('Hur kan jag titta på andra användares gallerier?', 'Gå till &quot;Albumlista&quot; och välj &quot;Användargallerier&quot;.', 'allow_private_albums', 0),
  array('Vad är cookies?', 'Cookies är textfiler som innehåller en bit data som skickas från webbplatsen till din dator och sparas där.<br />Cookies används för att kunna spara viss information, ofta för att personen ska kunna komma tillbaka utan att behöva logga in igen.', 'offline', 0),
  array('Var kan jag skaffa detta galleri till min egen webbplats?', 'Coppermine är ett gratis <a href="http://www.opensource.org/">open source</a> multimediagalleri. Det är släppt under GNU GPL-licens. Det är fyllt av funktioner och finns till olika plattformar. Besök <a href="http://coppermine.sf.net/">Coppermines webbplats</a> för att läsa mer och ladda ned det.', 'offline', 0),

  'Navigering på webbplatsen',
  array('Vad är &quot;Albumlista&quot;?', 'Här visas hela den kategori som du just nu befinner dig i, med en länk till varje album. Om du inte befinner dig i någon kategori visas hela galleriet med länkar till alla album. Tumnaglarna kan vara länkar till kategorier.', 'offline', 0),
  array('Vad är &quot;Mitt galleri&quot;?', 'Här kan användare själva skapa sitt eget galleri och lägga till, ta bort eller ändra album och även ladda upp bilder till dem.', 'allow_private_albums', 1), //cpg1.4
  array('Vad är det för skillnad mellan &quot;Administratörsläge&quot; och &quot;Användarläge&quot;?', 'Det låter en användare, inloggad som administratör, förändra sitt galleri (likväl som andra om det tillåts av konfigureringen).', 'allow_private_albums', 0),
  array('Vad är &quot;Ladda upp bilder&quot;?', 'Här kan användare ladda upp filer (storlek och filtyp bestäms av administratören) till ett galleri bestämt av administratören.', 'allow_private_albums', 0),
  array('Vad är &quot;Senast tillagda&quot;?', 'Här visas de senast uppladdade filerna i galleriet.', 'offline', 0),
  array('Vad är &quot;Senaste kommentarer&quot;?', 'Här visas de senaste kommentarerna i galleriet.', 'offline', 0),
  array('Vad är &quot;Mest visade&quot;?', 'Här visas de filer som är mest visade för besökare (inloggade eller inte).', 'offline', 0),
  array('Vad är &quot;Topplista&quot;?', 'Här visas de filer som besökare har givit de högsta betygen (i genomsnitt, t.ex. om fem användare vardera har givit betyget <img src="images/rating3.gif" width="65" height="14" border="0" alt="" />, så får filen då ett genomsnittsbetyg på <img src="images/rating3.gif" width="65" height="14" border="0" alt="" />. Om fem användare betygsätter en fil från 1 till 5 (1,2,3,4,5) ger det ett genomsnittsbetyg på <img src="images/rating3.gif" width="65" height="14" border="0" alt="" />).<br /><br />Betygsskalan går från <img src="images/rating5.gif" width="65" height="14" border="0" alt="best" /> (bäst) till <img src="images/rating0.gif" width="65" height="14" border="0" alt="worst" /> (sämst).', 'offline', 0),
  array('Vad är &quot;Mina favoriter&quot;?', 'Här kan en användare lagra sina favoritfiler, detta lagras i en cookie på din dator.', 'offline', 0),
);


// ------------------------------------------------------------------------- //
// File forgot_passwd.php
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) $lang_forgot_passwd_php = array(
  'forgot_passwd' => 'Glömt lösenord',
  'err_already_logged_in' => 'Du är redan inloggad!',
  'enter_email' => 'Ange din e-postadress', //cpg1.4
  'submit' => 'Vidare',
  'illegal_session' => 'Session för glömt lösenord har gått ut eller är ogiltig.', //cpg1.4
  'failed_sending_email' => 'Lösenordet kan inte skickas!',
  'email_sent' => 'Ett e-brev med ditt användarnamn och ett nytt lösenord har skickats till %s', //cpg1.4
  'verify_email_sent' => 'Ett e-brev har skickats till %s. Var vänlig läs din e-post för att avsluta processen.', //cpg1.4
  'err_unk_user' => 'Vald användare finns inte!',
  'account_verify_subject' => '%s - Begäran om nytt lösenord', //cpg1.4
  'account_verify_body' => 'Du har begärt ett nytt lösenord. Om du vill fortsätta och få ett nytt lösenord skickat till dig, klicka på följade länk:

%s', //cpg1.4
  'passwd_reset_subject' => '%s - Ditt nya lösenord', //cpg1.4
  'passwd_reset_body' => 'Här är ditt nya lösenord:
Användarnamn: %s
Lösenord: %s
Klicka %s för att logga in.', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
  'group_name' => 'Grupp', //cpg1.4
  'permissions' => 'Behörigheter', //cpg1.4
  'public_albums' => 'Ladda upp till publika album', //cpg1.4
  'personal_gallery' => 'Personligt galleri', //cpg1.4
  'upload_method' => 'Uppladdningssätt', //cpg1.4
  'disk_quota' => 'Kvot', //cpg1.4
  'rating' => 'Betyg', //cpg1.4
  'ecards' => 'E-vykort', //cpg1.4
  'comments' => 'Kommentarer', //cpg1.4
  'allowed' => 'Tillåt', //cpg1.4
  'approval' => 'Godkännande', //cpg1.4
  'boxes_number' => 'Antal fält', //cpg1.4
  'variable' => 'variabelt', //cpg1.4
  'fixed' => 'fixerat', //cpg1.4
  'apply' => 'Utför ändringar',
  'create_new_group' => 'Skapa ny grupp',
  'del_groups' => 'Radera markerade grupper',
  'confirm_del' => 'Varning, när du raderar en grupp kommer medlemmar som tillhör den gruppen att flyttas till till gruppen "Registered"!\n\nVill du verkligen fortsätta?', //js-alert
  'title' => 'Hantera grupper',
  'num_file_upload' => 'Fält för uppladdning av filer', //cpg1.4
  'num_URI_upload' => 'Fält för URI-uppladdning', //cpg1.4
  'reset_to_default' => 'Återgå till förvalt namn (%s) - rekommenderat!', //cpg1.4
  'error_group_empty' => 'Tabellen för grupper är tom!<br /><br />Förinställda grupper har skapats, ladda om denna sida.', //cpg1.4
  'explain_greyed_out_title' => 'Varför är denna rad grå?', //cpg1.4
  'explain_guests_greyed_out_text' => 'Du kan inte ändra egenskaperna för denna grupp eftersom du satt &quot;Tillåta icke inloggade användare (gäst eller anonym)&quot; till &quot;Nej&quot; på konfigurationssidan. Alla gäster (medlemmar tillhörande gruppen %s) kan inte göra något annat än att logga in, därför gäller inte inställningarna för dem.', //cpg1.4
  'explain_banned_greyed_out_text' => 'Du kan inte ändra egenskaperna för gruppen %s eftersom dess medlemmar inte kan göra något ändå.', //cpg1.4
  'group_assigned_album' => 'Tilldelade album', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
  'welcome' => 'Välkommen!',
);

$lang_album_admin_menu = array(
  'confirm_delete' => 'Är du säker på att du vill RADERA detta album? \\nAlla filer och kommentarer kommer också att raderas.', //js-alert
  'delete' => 'Radera',
  'modify' => 'Egenskaper',
  'edit_pics' => 'Ändra filer',
);

$lang_list_categories = array(
  'home' => 'Hem',
  'stat1' => '<b>[pictures]</b> filer i <b>[albums]</b> album och <b>[cat]</b> kategorier med <b>[comments]</b> kommentarer, totalt <b>[views]</b> visningar',
  'stat2' => '<b>[pictures]</b> filer i <b>[albums]</b> album, totalt <b>[views]</b> visningar',
  'xx_s_gallery' => '%ss galleri',
  'stat3' => '<b>[pictures]</b> filer i <b>[albums]</b> album med <b>[comments]</b> kommentarer, totalt <b>[views]</b> visningar',
);

$lang_list_users = array(
  'user_list' => 'Lista över medlemmar',
  'no_user_gal' => 'Det finns inga medlemsgallerier',
  'n_albums' => '%s album',
  'n_pics' => '%s fil(er)',
);

$lang_list_albums = array(
  'n_pictures' => '%s filer',
  'last_added' => ', senaste tillagd den %s',
  'n_link_pictures' => '%s länkade filer', //cpg1.4
  'total_pictures' => '%s filer totalt', //cpg1.4
);

}

// ------------------------------------------------------------------------- //
// File keywordmgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('KEYWORDMGR_PHP')) $lang_keywordmgr_php = array(
  'title' => 'Hantera nyckelord', //cpg1.4
  'edit' => 'Ändra', //cpg1.4
  'delete' => 'Radera', //cpg1.4
  'search' => 'Sök', //cpg1.4
  'keyword_test_search' => 'Sök efter %s i ett nytt fönster', //cpg1.4
  'keyword_del' => 'Ta bort nyckelord %s', //cpg1.4
  'confirm_delete' => 'Är du säker på att du vill ta bort nyckelordet %s från galleriet?', //cpg1.4  // js-alert
  'change_keyword' => 'Ändra nyckelord', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
  'login' => 'Logga in',
  'enter_login_pswd' => 'Ange ditt användarnamn och lösenord för att logga in',
  'username' => 'Användarnamn',
  'password' => 'Lösenord',
  'remember_me' => 'Kom ihåg mig',
  'welcome' => 'Välkommen %s ...',
  'err_login' => '*** Kunde inte logga in. Försök igen. ***',
  'err_already_logged_in' => 'Du är redan inloggad!',
  'forgot_password_link' => 'Jag har glömt mitt lösenord',
  'cookie_warning' => 'Varning! Din webbläsare hanterar inte cookies!', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
  'logout' => 'Logga ut',
  'bye' => 'Hej då %s ...',
  'err_not_loged_in' => 'Du är inte inloggad!',
);

// ------------------------------------------------------------------------- //
// File minibrowser.php  //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('MINIBROWSER_PHP')) $lang_minibrowser_php = array(
  'close' => 'Stäng', //cpg1.4
  'submit' => 'OK', //cpg1.4
  'up' => 'Upp en nivå', //cpg1.4
  'current_path' => 'Nuvarande sökväg', //cpg1.4
  'select_directory' => 'Välj en mapp', //cpg1.4
  'click_to_close' => 'Klicka på bilden för att stänga fönstret',
);

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
  'upd_alb_n' => 'Uppdatera album %s',
  'general_settings' => 'Allmänna inställningar',
  'alb_title' => 'Albumets titel',
  'alb_cat' => 'Albumets kategori',
  'alb_desc' => 'Albumets beskrivning',
  'alb_keyword' => 'Albumets nyckelord', //cpg1.4
  'alb_thumb' => 'Albumets tumnagel',
  'alb_perm' => 'Albumets behörigheter',
  'can_view' => 'Albumet kan ses av',
  'can_upload' => 'Besökare kan ladda upp filer',
  'can_post_comments' => 'Besökare kan posta kommentarer',
  'can_rate' => 'Besökare kan betygsätta filer',
  'user_gal' => 'Användargallerier',
  'no_cat' => '* Ingen kategori *',
  'alb_empty' => 'Albumet är tomt',
  'last_uploaded' => 'Senast uppladdade',
  'public_alb' => 'Alla (publikt album)',
  'me_only' => 'Bara jag',
  'owner_only' => 'Albumets ägare (%s)',
  'groupp_only' => 'Medlemmar i gruppen \'%s\'',
  'err_no_alb_to_modify' => 'Inget album du kan ändra i databasen.',
  'update' => 'Uppdatera album',
  'reset_album' => 'Återställ album', //cpg1.4
  'reset_views' => 'Ställ räknare till &quot;0&quot; i %s', //cpg1.4
  'reset_rating' => 'Återställ betyg för alla filer i %s', //cpg1.4
  'delete_comments' => 'Radera alla kommentarer i %s', //cpg1.4
  'delete_files' => '%sOåterkalleligen%s radera alla filer i %s', //cpg1.4
  'views' => 'visningar', //cpg1.4
  'votes' => 'röster', //cpg1.4
  'comments' => 'kommentarer', //cpg1.4
  'files' => 'filer', //cpg1.4
  'submit_reset' => 'Skicka ändringar', //cpg1.4
  'reset_views_confirm' => 'Jag är säker', //cpg1.4
  'notice1' => '(*) Beror på %sgruppinställningar%s',  //cpg1.4 //(do not translate %s!)
  'alb_password' => 'Lösenord för album', //cpg1.4
  'alb_password_hint' => 'Ledtråd till albumets lösenord', //cpg1.4
  'edit_files' =>'Ändra filer', //cpg1.4
  'parent_category' =>'Överliggande kategori', //cpg1.4
  'thumbnail_view' =>'Visa tumnagel', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File phpinfo.php
// ------------------------------------------------------------------------- //

if (defined('PHPINFO_PHP')) $lang_phpinfo_php = array(
  'php_info' => 'PHP info',
  'explanation' => 'Detta är en presentation genererad av PHP-funktionen <a href="http://www.php.net/phpinfo">phpinfo()</a>, och visas i Coppermine.',
  'no_link' => 'Att låta andra se din phpinfo kan vara en säkerhetsrisk, därför kan bara du som administratör se denna sida. Du kan inte skicka denna länk till någon annan, de kommer att vägras tillträde.',
);

// ------------------------------------------------------------------------- //
// File picmgr.php //cpg1.4
// ------------------------------------------------------------------------- //
if (defined('PICMGR_PHP')) $lang_picmgr_php = array(
  'pic_mgr' => 'Sortera bilder', //cpg1.4
  'select_album' => 'Välj album', //cpg1.4
  'delete' => 'Radera', //cpg1.4
  'confirm_delete1' => 'Är du säker på att du vill radera bilden?', //cpg1.4
  'confirm_delete2' => '\nBilden kommer att raderas permanent.', //cpg1.4
  'apply_modifs' => 'Utför ändringar', //cpg1.4
  'confirm_modifs' => 'Bekräfta ändringar', //cpg1.4
  'pic_need_name' => 'Bilden måste ha ett namn!', //cpg1.4
  'no_change' => 'Du har inte gjort några ändringar!', //cpg1.4
  'no_album' => '* Inget album *', //cpg1.4
  'explanation_header' => 'Den anpassade sorteringordningen som du kan välja på denna sida kommer bara att användas om', //cpg1.4
  'explanation1' => 'Administratören har i konfigurationen satt "Förvald sorteringsordning" till "Position, stigande" eller "Position, fallande" (allmän inställning för alla användare som inte själva har valt någon annan sorteringsordning).', //cpg1.4
  'explanation2' => 'Användaren har valt "Position, stigande" eller "Position, fallande" på tumnagelsidan (per användare).', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File pluginmgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('PLUGINMGR_PHP')){

$lang_pluginmgr_php = array(
  'confirm_uninstall' => 'Är du säker på att du vill AVINSTALLERA denna insticksmodul', //cpg1.4
  'confirm_delete' => 'Är du säker på att du vill RADERA denna insticksmodul', //cpg1.4
  'pmgr' => 'Hantering av insticksmoduler (plugins)', //cpg1.4
  'name' => 'Namn:', //cpg1.4
  'author' => 'Skapare:', //cpg1.4
  'desc' => 'Beskrivning:', //cpg1.4
  'vers' => 'v', //cpg1.4
  'i_plugins' => 'Installerade insticksmoduler (plugins)', //cpg1.4
  'n_plugins' => 'Ej installerade insticksmoduler', //cpg1.4
  'none_installed' => 'Ingen installerad', //cpg1.4
  'operation' => 'Funktion', //cpg1.4
  'not_plugin_package' => 'Den uppladdade filen är inte ett paket för insticksmodul (plugin package).', //cpg1.4
  'copy_error' => 'Det uppstod ett fel vid kopiering av insticksmodulen till mappen för insticksmoduler.', //cpg1.4
  'upload' => 'Ladda upp', //cpg1.4
  'configure_plugin' => 'Konfigurera insticksmodul', //cpg1.4
  'cleanup_plugin' => 'Rensa insticksmodul', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
  'already_rated' => 'Du har redan betygsatt denna fil',
  'rate_ok' => 'Din röst har godkänts',
  'forbidden' => 'Du kan inte betygsätta dina egna filer.',
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
Administratörerna på {SITE_NAME} försöker ta bort och ändra stötande material så fort som möjligt, dock är det inte möjligt att granska alla inlägg som görs. Du intygar och accepterar därför härmed att alla inlägg som görs här uttrycker författarens åsikter och inte administratörens eller webbmasterns (utom inlägg gjorda av dem själva), och de kan därför inte hållas ansvariga.<br />
<br />
Du godkänner att inte göra inlägg som är skändliga, obscena, vulgära, innehåller förtal, hatiska, hotande, sexuella eller inlägg som strider mot gällade lag. Du godkänner att administratörer, moderatorer eller webbmastern för {SITE_NAME} har full rätt att ta bort eller ändra innehållet så att det överensstämmer med ovanstående. Som användare godkänner du att användarinformation lagras i en databas och används på denna webbplats. Även om informationen inte kommer att göras tillgänglig för tredje part kan webmastern inte hållas ansvarig för eventuell hackning som gör att informationen sprids.<br />
<br />
Den här webbplatsen använder cookies för att lagra information på din dator. Dessa cookies fungerar enbart för att webbplatsen ska fungera och se bra ut för dig som användare. E-postadressen du anger är enbart till för att skicka detaljer om registreringen.<br />
<br />
Genom att klicka "Jag godkänner" nedan godkänner du ovanstående villkor och att du är bunden att följa dem.
EOT;

$lang_register_php = array(
  'page_title' => 'Registrering av användare',
  'term_cond' => 'Regler och villkor',
  'i_agree' => 'Jag godkänner!',
  'submit' => 'Skicka',
  'err_user_exists' => 'Användarnamnet du valt finns redan, välj ett annat.',
  'err_password_mismatch' => 'De två skrivna lösenorden stämmer inte överens, skriv in dem igen.',
  'err_uname_short' => 'Användarnamnet måste vara minst 2 tecken långt.',
  'err_password_short' => 'Lösenordet måste vara minst 2 tecken långt.',
  'err_uname_pass_diff' => 'Användarnamn och lösenord måste vara olika.',
  'err_invalid_email' => 'E-postadressen är ogiltig.',
  'err_duplicate_email' => 'E-postadressen du angav finns redan registrerad.',
  'enter_info' => 'Fyll i informationen för registrering',
  'required_info' => 'Obligatorisk information',
  'optional_info' => 'Frivillig information',
  'username' => 'Användarnamn',
  'password' => 'Lösenord',
  'password_again' => 'Lösenord igen',
  'email' => 'E-postadress',
  'location' => 'Kommer från',
  'interests' => 'Intressen',
  'website' => 'Hemsida',
  'occupation' => 'Sysselsättning',
  'error' => 'FEL',
  'confirm_email_subject' => '%s - Registreringen bekräftas',
  'information' => 'Information',
  'failed_sending_email' => 'E-brev med bekräftelsen av registrerigen kan inte skickas!',
  'thank_you' => 'Tack för att du registrerade dig!<br /><br />Ett e-brev med information om hur du ska aktivera ditt konto har skickats till den e-postadress du angav.',
  'acct_created' => 'Ditt konto har skapats och du kan nu logga in med ditt användarnamn och lösenord.',
  'acct_active' => 'Ditt konto är nu aktiverat och du kan nu logga in med ditt användarnamn och lösenord.',
  'acct_already_act' => 'Kontot är redan aktiverat!', //cpg1.4
  'acct_act_failed' => 'Kontot kan inte aktiveras!',
  'err_unk_user' => 'Vald användare finns inte.',
  'x_s_profile' => '%ss profil',
  'group' => 'Grupp',
  'reg_date' => 'Registrerade sig',
  'disk_usage' => 'Diskanvändning',
  'change_pass' => 'Ändra lösenord',
  'current_pass' => 'Nuvarande lösenord',
  'new_pass' => 'Nytt lösenord',
  'new_pass_again' => 'Nytt lösenord igen',
  'err_curr_pass' => 'Nuvarande lösenord är felaktigt',
  'apply_modif' => 'Utför ändringar',
  'change_pass' => 'Ändra mitt lösenord',
  'update_success' => 'Din profil har uppdaterats',
  'pass_chg_success' => 'Ditt lösenord har ändrats',
  'pass_chg_error' => 'Ditt lösenord har inte ändrats!',
  'notify_admin_email_subject' => '%s - Meddelande om registrering',
  'last_uploads' => 'Senast uppladdade fil.<br />Klicka för att se alla uppladdningar av', //cpg1.4
  'last_comments' => 'Senaste kommentar.<br />Klicka för att se alla kommentarer gjorda av', //cpg1.4
  'notify_admin_email_body' => 'En ny användare med användarnamn "%s" har registrerats i galleriet',
  'pic_count' => 'Filer uppladdade', //cpg1.4
  'notify_admin_request_email_subject' => '%s - Meddelande om registrering', //cpg1.4
  'thank_you_admin_activation' => 'Tack.<br /><br />Din begäran om aktivering av konto har skickats till administratören. Du kommer få ett e-brev om du blir godkänd.', //cpg1.4
  'acct_active_admin_activation' => 'Kontot är nu aktiverat och ett e-brev har skickats till användaren.', //cpg1.4
  'notify_user_email_subject' => '%s - Meddelande om aktivering', //cpg1.4
);

$lang_register_confirm_email = <<<EOT
Tack för att du registrerar dig hos {SITE_NAME}

För att aktivera ditt konto med användarnamn "{USER_NAME}", måste du klicka på länken eller kopiera den och klistra in den i din webbläsare.

<a href="{ACT_LINK}">{ACT_LINK}</a>


Med vänliga hälsningar,
{SITE_NAME}

EOT;


$lang_register_approve_email = <<<EOT
En ny användare med användarnamn "{USER_NAME}" har registrerat sig i galleriet.

För att kontot ska aktiveras måste du klicka på länken eller kopiera den och klistra in den i din webbläsare.

<a href="{ACT_LINK}">{ACT_LINK}</a>

EOT;

$lang_register_activated_email = <<<EOT
Ditt konto har blivit godkänt och har aktiverats.

Du kan nu logga in på <a href="{SITE_LINK}">{SITE_LINK}</a> med användarnamn "{USER_NAME}"


Med vänliga hälsningar,
{SITE_NAME}

EOT;
}



// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
  'title' => 'Granska kommentarer',
  'no_comment' => 'Det finns inga kommentarer.',
  'n_comm_del' => '%s kommentarer raderade',
  'n_comm_disp' => 'Antal kommentarer att visa',
  'see_prev' => 'Se föregående',
  'see_next' => 'Se nästa',
  'del_comm' => 'Radera markerade kommentarer',
  'user_name' => 'Namn', //cpg1.4
  'date' => 'Datum', //cpg1.4
  'comment' => 'Kommentar', //cpg1.4
  'file' => 'Fil', //cpg1.4
  'name_a' => 'Användarnamn, stigande', //cpg1.4
  'name_d' => 'Användarnamn, fallande', //cpg1.4
  'date_a' => 'Datum, stigande', //cpg1.4
  'date_d' => 'Datum, fallande', //cpg1.4
  'comment_a' => 'Kommentar, stigande', //cpg1.4
  'comment_d' => 'Kommentar, fallande', //cpg1.4
  'file_a' => 'Fil, stigande', //cpg1.4
  'file_d' => 'Fil, fallande', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File search.php                                                           //
// ------------------------------------------------------------------------- //


if (defined('SEARCH_PHP')){

$lang_search_php = array(
  'title' => 'Sök bland filer', //cpg1.4
  'submit_search' => 'sök', //cpg1.4
  'keyword_list_title' => 'Lista med nyckelord', //cpg1.4
  'keyword_msg' => 'Ovanstående lista är inte heltäckande. Den täcker inte ord från titlar på bilder eller beskrivningar. Testa en fulltextsökning.',  //cpg1.4
  'edit_keywords' => 'Ändra nyckelord', //cpg1.4
  'search in' => 'Sök i:', //cpg1.4
  'ip_address' => 'IP', //cpg1.4
  'fields' => 'Sök i', //cpg1.4
  'age' => 'Ålder', //cpg1.4
  'newer_than' => 'Nyare än', //cpg1.4
  'older_than' => 'Äldre än', //cpg1.4
  'days' => 'dagar', //cpg1.4
  'all_words' => 'Matcha alla ord (AND)', //cpg1.4
  'any_words' => 'Matcha något ord (OR)', //cpg1.4
);

$lang_adv_opts = array(
  'title' => 'Titel', //cpg1.4
  'caption' => 'Rubrik', //cpg1.4
  'keywords' => 'Nyckelord', //cpg1.4
  'owner_name' => 'Ägarens namn', //cpg1.4
  'filename' => 'Filnamn', //cpg1.4
);

}

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
  'page_title' => 'Sök nya filer',
  'select_dir' => 'Välj mapp',
  'select_dir_msg' => '<br />Denna funktion låter dig lägga in flera filer samtidigt som du har laddat upp till servern via FTP.<br />Välj den mapp du laddade upp filerna till.', //cpg1.4
  'no_pic_to_add' => 'Det finns ingen fil att lägga till',
  'need_one_album' => 'Det måste finnas minst ett album för att använda denna funktion',
  'warning' => 'Varning',
  'change_perm' => 'kan inte skriva till mappen, du måste ändra rättigheterna för mappen till 755 eller 777 innan filerna kan läggas till! Det görs lättast med en FTP-klient',
  'target_album' => '<b>Lägg filer från &quot;</b>%s<b>&quot; i </b>%s',
  'folder' => 'Mapp',
  'image' => 'Fil',
  'album' => 'Album',
  'result' => 'Resultat',
  'dir_ro' => 'Ej skrivbar. ',
  'dir_cant_read' => 'Ej läsbar. ',
  'insert' => 'Lägger till nya filer i galleriet',
  'list_new_pic' => 'Lista över nya filer',
  'insert_selected' => 'Lägg till markerade filer',
  'no_pic_found' => 'Inga filer hittades',
  'be_patient' => 'Var god vänta, det tar lite tid att lägga till filerna...',
  'no_album' => 'inget album är valt',
  'result_icon' => 'klicka för detaljer eller för att ladda om',  //cpg1.4
  'notes' =>  '<ul>'.
                          '<li><b>OK</b> : betyder att filen är tillagd'.
                          '<li><b>DP</b> : betyder att filen är en dubblett och att den redan finns i databasen'.
                          '<li><b>PB</b> : betyder att filen inte kunde läggas till, kontrollera konfigurationen och rättigheterna på mappen där filerna finns'.
                          '<li><b>NA</b> : betyder att du inte har valt något album som filerna ska läggas till i, tryck på "<a href="javascript:history.back(1)">tillbaka</a>" och välj ett album (om du inte har något album så <a href="albmgr.php">skapa ett först</a>)</li>'.
                          '<li>Om "skyltarna" med OK, DP, PB inte visas, klicka på den trasiga filen för att se felmeddelandet som genererats av PHP'.
                          '<li>Om du får "timeout" i din webbläsare, klicka på Ladda om-knappen i din webbläsare'.
                          '</ul>',
  'select_album' => 'välj album',
  'check_all' => 'Markera alla',
  'uncheck_all' => 'Avmarkera alla',
  'no_folders' => 'Det finns inga mappar i albumet än. Skapa minst en egen mapp i mappen "albums" och ladda upp dina filer dit. Du ska inte ladda upp dem till mapparna "userpics" eller "edit", de är reserverade för uppladdning via http och interna syften.', //cpg1.4
   'albums_no_category' => 'Album utan kategori', //cpg1.4 // album pulldown mod, added by frogfoot
  'personal_albums' => '* Personliga album', //cpg1.4 // album pulldown mod, added by frogfoot
  'browse_batch_add' => 'Bläddringsbart gränssnitt (rekommenderat)', //cpg1.4
  'edit_pics' => 'Ändra filer', //cpg1.4
  'edit_properties' => 'Egenskaper för album', //cpg1.4
  'view_thumbs' => 'Visning av tumnaglar', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File stat_details.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('STAT_DETAILS_PHP')) $lang_stat_details_php = array(
  'show_hide' => 'visa/dölj denna kolumn', //cpg1.4
  'vote' => 'Detaljer för röstning', //cpg1.4
  'hits' => 'Detaljer för träffar', //cpg1.4
  'stats' => 'Statistik för röstning', //cpg1.4
  'sdate' => 'Datum', //cpg1.4
  'rating' => 'Betyg', //cpg1.4
  'search_phrase' => 'Fraser för sökning', //cpg1.4
  'referer' => 'Hänvisningar', //cpg1.4
  'browser' => 'Webbläsare', //cpg1.4
  'os' => 'Operativsystem', //cpg1.4
  'ip' => 'IP', //cpg1.4
  'sort_by_xxx' => 'Sortera efter %s', //cpg1.4
  'ascending' => 'stigande', //cpg1.4
  'descending' => 'fallande', //cpg1.4
  'internal' => 'intern', //cpg1.4
  'close' => 'Stäng', //cpg1.4
  'hide_internal_referers' => 'Dölj interna hänvisningar', //cpg1.4
  'date_display' => 'Datumvisning', //cpg1.4
  'submit' => 'Skicka / ladda om', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File thumbnails.php
// ------------------------------------------------------------------------- //

// Void

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) $lang_upload_php = array(
  'title' => 'Ladda upp fil',
  'custom_title' => 'Anpassat formulär för begäran',
  'cust_instr_1' => 'Du kan själv välja antal fält för uppladdning. Du kan dock inte välja fler än vad som anges nedan.',
  'cust_instr_2' => 'Antal fält för begäran',
  'cust_instr_3' => 'Fält för uppladdning: %s',
  'cust_instr_4' => 'Fält för uppladdning via URI/URL: %s',
  'cust_instr_5' => 'Fält för uppladdning via URI/URL:',
  'cust_instr_6' => 'Fält för uppladdning:',
  'cust_instr_7' => 'Skriv in antal för varje typ av uppladdningsfält du vill ha vid detta tillfälle. Klicka sedan på "Fortsätt".',
  'reg_instr_1' => 'Ogiltig funktion för skapande av formulär.',
  'reg_instr_2' => 'Här kan du ladda upp dina filer med hjälp av fälten nedan. Storleken på filerna du laddar upp får inte överstiga %s KB styck. Zip-filer som laddas upp kommer att fortsätta vara komprimerade, oavsett om du använder "Filuppladdningar" eller "URI/URL-uppladdningar" nedan.',
  'reg_instr_3' => 'Om du vill att Zip-filer ska packas upp måste du använda uppladdningsfältet som finns i "Packa upp Zip-filer".',
  'reg_instr_4' => 'När du använder "URI/URL-uppladdning", ange sökvägen till filen så här: http://www.minsajt.com/bilder/exempel.jpg',
  'reg_instr_5' => 'Klicka på "Fortsätt" när du är färdig.',
  'reg_instr_6' => 'Uppackade Zip-uppladdningar:',
  'reg_instr_7' => 'Filuppladdningar:',
  'reg_instr_8' => 'URI/URL-uppladdningar:',
  'error_report' => 'Felrapport',
  'error_instr' => 'Följande uppladdningar stötte på fel:',
  'file_name_url' => 'Filnamn/URL',
  'error_message' => 'Felmeddelande',
  'no_post' => 'Filen laddades inte upp med POST.',
  'forb_ext' => 'Otillåten filändelse.',
  'exc_php_ini' => 'Överskriden tillåten filstorlek i php.ini.',
  'exc_file_size' => 'Överskriden tillåten filstorlek satt av administratören.',
  'partial_upload' => 'Endast en del laddades upp.',
  'no_upload' => 'Ingen uppladdning skedde.',
  'unknown_code' => 'Okänt PHP-uppladdningsfel inträffade.',
  'no_temp_name' => 'Ingen uppladdning - inget tillfälligt namn.',
  'no_file_size' => 'Innehåller ingen eller korrupt data',
  'impossible' => 'Kan inte flyttas.',
  'not_image' => 'Inte en bild/korrupt bild',
  'not_GD' => 'Inte en GD-ändelse.',
  'pixel_allowance' => 'Höjden eller bredden på de uppladdade bilderna överskrider vad som tillåts.', //cpg1.4
  'incorrect_prefix' => 'Felaktigt prefix för URI/URL',
  'could_not_open_URI' => 'Kan inte öppna URI.',
  'unsafe_URI' => 'Säkerhet inte verifierbar.',
  'meta_data_failure' => 'Fel i metadatan',
  'http_401' => '401 Unauthorized',
  'http_402' => '402 Payment Required',
  'http_403' => '403 Forbidden',
  'http_404' => '404 Not Found',
  'http_500' => '500 Internal Server Error',
  'http_503' => '503 Service Unavailable',
  'MIME_extraction_failure' => 'MIME-typ kunde inte bestämmas.',
  'MIME_type_unknown' => 'Okänd MIME-typ',
  'cant_create_write' => 'Kan inte skapa skrivfil.',
  'not_writable' => 'Kan inte skriva till skrivfil.',
  'cant_read_URI' => 'Kan inte läsa URI/URL',
  'cant_open_write_file' => 'Kan inte öppna URI-skrivfil.',
  'cant_write_write_file' => 'Kan inte skriva till URI-skrivfil.',
  'cant_unzip' => 'Kan inte packa upp Zip-fil.',
  'unknown' => 'Okänt fel',
  'succ' => 'Uppladdningen lyckades',
  'success' => '%s uppladdning(ar) lyckades.',
  'add' => 'Klicka på "Fortsätt" för att lägga till filen/filerna i album.',
  'failure' => 'Uppladdningen misslyckades',
  'f_info' => 'Filinformation',
  'no_place' => 'Den föregående filen kunde inte placeras.',
  'yes_place' => 'Den föregående filen har placerats.',
  'max_fsize' => 'Största tillåtna filstorlek är %s KB',
  'album' => 'Album',
  'picture' => 'Fil',
  'pic_title' => 'Filtitel',
  'description' => 'Beskrivning av fil',
  'keywords' => 'Nyckelord (separerade med mellanslag)<br /><a href="#" onClick="return MM_openBrWindow(\'keyword_select.php\',\'selectKey\',\'width=250, height=400, scrollbars=yes,toolbar=no,status=yes,resizable=yes\')">Infoga från lista</a>', //cpg1.4
  'keywords_sel' =>'Välj ett nyckelord', //cpg1.4
  'err_no_alb_uploadables' => 'Det finns inga album där du har behörighet att ladda upp filer',
  'place_instr_1' => 'Placera filerna i album nu. Du kan även ange relevant information om varje fil nu.',
  'place_instr_2' => 'Fler filer behöver placeras. Klicka på "Fortsätt".',
  'process_complete' => 'Alla filer har nu placerats.',
   'albums_no_category' => 'Album utan kategori', //cpg1.4. //album pulldown mod, added by frogfoot
  'personal_albums' => '* Personliga album', //cpg1.4 //album pulldown mod, added by frogfoot
  'select_album' => 'Välj album', //cpg1.4 //album pulldown mod, added by frogfoot
  'close' => 'Stäng', //cpg1.4
  'no_keywords' => 'Inga nyckelord finns tillgängliga!', //cpg1.4
  'regenerate_dictionary' => 'Återskapa ordlista', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
  'memberlist' => 'Användarlista', //cpg1.4
  'user_manager' => 'Hantera användare', //cpg1.4
  'title' => 'Hantera användare',
  'name_a' => 'Namn, stigande',
  'name_d' => 'Namn, fallande',
  'group_a' => 'Grupp, stigande',
  'group_d' => 'Grupp, fallande',
  'reg_a' => 'Reg. datum, stigande',
  'reg_d' => 'Reg. datum, fallande',
  'pic_a' => 'Antal filer, stigande',
  'pic_d' => 'Antal filer, fallande',
  'disku_a' => 'Diskutnyttjande, stigande',
  'disku_d' => 'Diskutnyttjande, fallande',
  'lv_a' => 'Senaste besök, stigande',
  'lv_d' => 'Senaste besök, fallande',
  'sort_by' => 'Sortera användare efter',
  'err_no_users' => 'Tabellen med användare är tom!',
  'err_edit_self' => 'Du kan inte ändra din egen profil, använd "Min profil" för det',
  'edit' => 'Ändra', //cpg1.4
  'with_selected' => 'Med vald:', //cpg1.4
  'delete' => 'Radera', //cpg1.4
  'delete_files_no' => 'behåll publika filer (men gör dem anonyma)', //cpg1.4
  'delete_files_yes' => 'radera även pubika filer', //cpg1.4
  'delete_comments_no' => 'behåll kommentarer (men gör dem anonyma)', //cpg1.4
  'delete_comments_yes' => 'radera även kommentarer', //cpg1.4
  'activate' => 'Aktivera', //cpg1.4
  'deactivate' => 'Avaktivera', //cpg1.4
  'reset_password' => 'Återställ lösenord', //cpg1.4
  'change_primary_membergroup' => 'Ändra primär medlemsgrupp', //cpg1.4
  'add_secondary_membergroup' => 'Lägg till sekundär medlemsgrupp', //cpg1.4
  'name' => 'Användarnamn',
  'group' => 'Grupp',
  'inactive' => 'Inaktiv',
  'operations' => 'Funktioner',
  'pictures' => 'Filer',
  'disk_space_used' => 'Använt diskutrymme', //cpg1.4
  'disk_space_quota' => 'Kvot för diskutrymme', //cpg1.4
  'registered_on' => 'Registrerad', //cpg1.4
  'last_visit' => 'Senaste besök',
  'u_user_on_p_pages' => '%d användare på %d sida(or)',
  'confirm_del' => 'Är du säker på att du vill RADERA användaren? \\nAlla användarens filer och kommentarer kommer att raderas.', //js-alert
  'mail' => 'E-post',
  'err_unknown_user' => 'Vald användare finns inte!',
  'modify_user' => 'Redigera användare',
  'notes' => 'Anmärkningar',
  'note_list' => '<li>Om du inte vill ändra lösenord, lämna fältet "Lösenord" tomt.',
  'password' => 'Lösenord',
  'user_active' => 'Användaren är aktiv',
  'user_group' => 'Användarens gruppmedlemskap',
  'user_email' => 'Användarens e-post',
  'user_web_site' => 'Användarens hemsida',
  'create_new_user' => 'Skapa ny användare',
  'user_location' => 'Användarens kommer från',
  'user_interests' => 'Användarens intressen',
  'user_occupation' => 'Användarens sysselsättning',
  'user_profile1' => '$user_profile1', //cpg1.4
  'user_profile2' => '$user_profile2', //cpg1.4
  'user_profile3' => '$user_profile3', //cpg1.4
  'user_profile4' => '$user_profile4', //cpg1.4
  'user_profile5' => '$user_profile5', //cpg1.4
  'user_profile6' => '$user_profile6', //cpg1.4
  'latest_upload' => 'Senaste uppladdningar',
  'never' => 'Aldrig',
  'search' => 'Sök bland användare', //cpg1.4
  'submit' => 'Skicka', //cpg1.4
  'search_submit' => 'Utför!', //cpg1.4
  'search_result' => 'Sökresultat för: ', //cpg1.4
  'alert_no_selection' => 'Du måste välja minst en användare!', //cpg1.4 //js-alert
  'password' => 'Lösenord', //cpg1.4
  'select_group' => 'Välj grupp', //cpg1.4
  'groups_alb_access' => 'Albumbehörighet beroende på grupp', //cpg1.4
  'album' => 'Album', //cpg1.4
  'category' => 'Kategori', //cpg1.4
  'modify' => 'Ändra?', //cpg1.4
  'group_no_access' => 'Den här gruppen har inga specifika album tilldelade.', //cpg1.4
  'notice' => 'Anmärkning', //cpg1.4
  'group_can_access' => 'Album som bara "%s" kan komma åt', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //

if (defined('UTIL_PHP')) {
$lang_util_desc_php = array(
'Uppdatera titlar från filnamn', //cpg1.4
'Radera titlar', //cpg1.4
'Bygga om tumnaglar och omskalade bilder', //cpg1.4
'Radera originalbilder och ersätta dem med den omskalade varianten', //cpg1.4
'Radera originalbilder eller mellanliggande bilder för att spara diskutrymme', //cpg1.4
'Radera övergivna kommentarer (utan tillhörande fil)', //cpg1.4
'Uppdatera filstorlekar och dimensioner (om du har ändrat bilder manuellt)', //cpg1.4
'Återställa antal visningar', //cpg1.4
'Visa phpinfo', //cpg1.4
'Uppdatera databasen', //cpg1.4
'Visa loggfiler', //cpg1.4
);
$lang_util_php = array(
  'title' => 'Administratörsverktyg',
  'what_it_does' => 'Vad verktyget kan göra',
  'file' => 'Fil',
  'problem' => 'Problem', //cpg1.4
  'status' => 'Status', //cpg1.4
  'title_set_to' => '- titel bestäms till',
  'submit_form' => 'Skicka',
  'updated_succesfully' => 'Uppdateringen klar',
  'error_create' => 'FEL vid skapande',
  'continue' => 'Bearbeta fler bilder',
  'main_success' => 'Filen %s används som huvudfil',
  'error_rename' => 'Kan inte döpa om %s till %s',
  'error_not_found' => 'Filen %s hittades inte',
  'back' => 'Tillbaka',
  'thumbs_wait' => 'Uppdaterar tumnaglar och/eller omskalade bilder, var god vänta...',
  'thumbs_continue_wait' => 'Fortsätt att uppdatera tumnaglar och/eller omskalade bilder...',
  'titles_wait' => 'Uppdaterar titlar, var god vänta...',
  'delete_wait' => 'Raderar titlar, var god vänta...',
  'replace_wait' => 'Raderar original och ersätter dem med omskalade bilder, var god vänta...',
  'instruction' => 'Snabbinstruktioner',
  'instruction_action' => 'Välj funktion',
  'instruction_parameter' => 'Sätt parametrar',
  'instruction_album' => 'Välj album',
  'instruction_press' => 'Tryck på %s',
  'update' => 'Uppdatera tumnaglar och/eller omskalade bilder',
  'update_what' => 'Vad ska uppdateras',
  'update_thumb' => 'Bara tumnaglar',
  'update_pic' => 'Bara omskalade bilder',
  'update_both' => 'Både tumnaglar och omskalade bilder',
  'update_number' => 'Antal behandlade bilder per klick: ',
  'update_option' => '(Försök med att minska antalet om du får problem med "timeout")',
  'filename_title' => 'Filnamn &rArr; filtitel',
  'filename_how' => 'Hur ska filnamnet ändras',
  'filename_remove' => 'Ta bort .jpg-ändelsen och byt ut _ (understreck) med mellanslag',
  'filename_euro' => 'Ändra 2003_11_23_13_20_20.jpg till 23/11/2003 13:20',
  'filename_us' => 'Ändra 2003_11_23_13_20_20.jpg till 11/23/2003 13:20',
  'filename_time' => 'Ändra 2003_11_23_13_20_20.jpg till 13:20',
  'delete' => 'Radera filtitlar och originalbilder',
  'delete_title' => 'Radera filtitlar',
  'delete_title_explanation' => 'Alla titlar i valt album kommer att raderas.', //cpg1.4
  'delete_original' => 'Radera bilder i originalstorlek',
  'delete_original_explanation' => 'Raderar bilder i full storlek.', //cpg1.4
  'delete_intermediate' => 'Radera mellanliggande bilder', //cpg1.4
  'delete_intermediate_explanation' => 'Raderar mellanliggande (normalstora) bilder.<br />Använd denna funktion för att frigöra diskutrymme om du har avaktiverat "Skapa mellanliggande bilder" i konfigurationen efter att du redan lagt till bilder.', //cpg1.4
  'delete_replace' => 'Raderar originalbilderna och byter ut dem mot omskalade versioner.',
  'titles_deleted' => 'Alla titlar i valt album är raderade', //cpg1.4
  'deleting_intermediates' => 'Raderar mellanliggande bilder, var god vänta...', //cpg1.4
  'searching_orphans' => 'Söker efter övergivna poster, var god vänta...', //cpg1.4
  'select_album' => 'Välj album',
  'delete_orphans' => 'Radera kommentarer för saknade filer', //cpg1.4
  'delete_orphans_explanation' => 'Detta låter dig identifiera och ta bort kommentarer som inte längre hör till någon fil i galleriet.<br />Funktionen går igenom alla album.', //cpg1.4
  'refresh_db' => 'Ladda om information om filernas filstorlek och dimensioner.', //cpg1.4
  'refresh_db_explanation' => 'Detta kommer att uppdatera filstorlek och dimensioner. Använd detta om en användares diskkvot är felaktig eller om du har ändrat filer manuellt.', //cpg1.4
  'reset_views' => 'Nollställ visningar', //cpg1.4
  'reset_views_explanation' => 'Sätter alla visningar till noll i valt album.', //cpg1.4
  'orphan_comment' => 'Övergivna kommentarer hittade',
  'delete' => 'Radera',
  'delete_all' => 'Radera alla',
  'delete_all_orphans' => 'Radera alla övergivna?', //cpg1.4
  'comment' => 'Kommentar: ',
  'nonexist' => 'tillhör icke-existerande fil # ',
  'phpinfo' => 'Visa phpinfo',
  'phpinfo_explanation' => 'Innehåller teknisk information om din server.<br /> - Du kan bli frågad om information härifrån om du behöver support.', //cpg1.4
  'update_db' => 'Uppdatera databasen',
  'update_db_explanation' => 'Om du har ersatt filer i Coppermine, lagt till någon modifikation eller uppgraderat från en tidigare version, var noga med att göra en uppdatering av databasen en gång. Det kommer att skapa de nödvändiga databastabellerna och konfigurera dem.',
  'view_log' => 'Visa loggfiler', //cpg1.4
  'view_log_explanation' => 'Coppermine kan hålla reda på olika funktioner användarna utför. Du kan bläddra igenom de loggarna om du har aktiverat loggning i <a href="admin.php">konfigurationen</a>.', //cpg1.4
  'versioncheck' => 'Kontrollera versioner', //cpg1.4
  'versioncheck_explanation' => 'Kontrollerar versionen på dina filer för att se om du har ersatt alla filer efter en uppdatering eller om Coppermines källfiler har uppdaterats efter utgivandet av en uppdatering.', //cpg1.4
  'bridgemanager' => 'Länkningsguide', //cpg1.4
  'bridgemanager_explanation' => 'Aktivera/avaktivera länkning med andra program (t.ex. ditt forum).', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File versioncheck.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('VERSIONCHECK_PHP')) $lang_versioncheck_php = array(
  'title' => 'Versionskontroll', //cpg1.4
  'what_it_does' => 'Den här sidan är till för de som har uppdaterat sin installation av Coppermine. Sidan går igenom filerna på din webbserver och försöker bestämma om de är samma som de som finns i online-filutrymmet på http://coppermine.sourceforge.net. På så sätt ser du förutom dina egna filer även alla filer som det var meningen att du skulle uppdatera.<br /> Allt som visas i rött behöver uppdateras. Det som visas i gult behöver kontrolleras. Det som visas i grönt (eller din förvalda färg) är OK.<br />Klicka på hjälpikonerna för ytterligare information.', //cpg1.4
  'online_repository_unable' => 'Kan inte ansluta till online-filutrymmet', //cpg1.4
  'online_repository_noconnect' => 'Coppermine kunde inte ansluta till online-filutrymmet. Det kan ha två orsaker:', //cpg1.4
  'online_repository_reason1' => 'Online-filutrymmet är tillfälligt nere - kontrollera om din webbläsare kan hitta denna sida: %s - kan du inte ansluta till sidan så försök igen senare.', //cpg1.4
  'online_repository_reason2' => 'PHP på din webbserver är konfigurerat med %s avstängt (som standard är det påslaget). Om det är du som administrerar webbservern, slå på det i <i>php.ini</i> (eller tillåt åtminstone att det blir åsidosatt av %s). Om du har galleriet på ett webbhotell så måste du antagligen leva med faktumet att du inte kan jämföra dina filer med de i online-filutrymmet. Den här sidan kommer bara att visa de filer som kom med ditt installationsfil - uppdateringar kommer inte att visas.', //cpg1.4
  'online_repository_skipped' => 'Anslutning till filutrymmet hoppades över', //cpg1.4
  'online_repository_to_local' => 'Sidan håller på att bestämma förvalda filer i din versionsfil. Det kan vara så att det du ser inte stämmer om du har uppdaterat och inte laddat upp alla filer. Ändringar gjorda efter släppet kommer heller inte att tas med.', //cpg1.4
  'local_repository_unable' => 'Kan inte ansluta till filurymmet på din server', //cpg1.4
  'local_repository_explanation' => 'Coppermine kunde inte ansluta till filen för filutrymme %s på din webbserver. Det betyder antagligen att du inte laddat upp den till servern. Gör det och försök köra denna sida igen (ladda om sidan).<br />Om felet kvarstår kan din webbserver ha avaktiverat delen med <a href="http://www.php.net/manual/en/ref.filesystem.php">PHP:s funktion för filsystem</a> helt och hållet. Om så är fallet, kan du helt enkelt inte använda detta verktyg, tyvärr.', //cpg1.4
  'coppermine_version_header' => 'Installerad version av Coppermine', //cpg1.4
  'coppermine_version_info' => 'Du har installerat: %s', //cpg1.4
  'coppermine_version_explanation' => 'Om du tror detta är helt fel och du kör en senare version av Coppermine har du antagligen inte laddat upp den senaste versionen av filen <i>include/init.inc.php</i>.', //cpg1.4
  'version_comparison' => 'Versionsjämförelse', //cpg1.4
  'folder_file' => 'Fil/mapp', //cpg1.4
  'coppermine_version' => 'Coppermineversion', //cpg1.4
  'file_version' => 'Filversion', //cpg1.4
  'webcvs' => 'Webb-SVN', //cpg1.4
  'writable' => 'Skrivbar', //cpg1.4
  'not_writable' => 'Ej skrivbar', //cpg1.4
  'help' => 'Hjälp', //cpg1.4
  'help_file_not_exist_optional1' => 'Fil/mapp finns inte', //cpg1.4
  'help_file_not_exist_optional2' => 'Filen/mappen %s hittades inte på din webbserver. Även om det är frivilligt bör du ladda upp den (med en FTP-klient) till din webbserver om du har problem.', //cpg1.4
  'help_file_not_exist_mandatory1' => 'Fil/mapp finns inte', //cpg1.4
  'help_file_not_exist_mandatory2' => 'Filen/mappen %s hittades inte på din webbserver, trots att den är nödvändig. Ladda upp den till din server med en FTP-klient.', //cpg1.4
  'help_no_local_version1' => 'Ingen lokal filversion', //cpg1.4
  'help_no_local_version2' => 'Sidan kan inte utläsa en lokal filversion - din fil är antingen för gammal eller har blivit ändrad så att header-informationen försvunnit. Det rekommenderas att du uppdaterar filen.', //cpg1.4
  'help_local_version_outdated1' => 'Lokal version för gammal', //cpg1.4
  'help_local_version_outdated2' => 'Din version av denna fil verkar vara från en äldre version av Coppermine (du har antagligen uppdaterat). Se till att denna fil också blir uppdaterad.', //cpg1.4
  'help_local_version_na1' => 'Kan inte utläsa SVN-versionen', //cpg1.4
  'help_local_version_na2' => 'Sidan kan inte avgöra vilken SVN-version filen på din webbserver har. Du bör uppdatera filen från din installationsfil.', //cpg1.4
  'help_local_version_dev1' => 'Utvecklarversion', //cpg1.4
  'help_local_version_dev2' => 'Filen på din webbserver verkar vara nyare än din version av Coppermine. Antingen använder du en utvecklarversion (vilket du bara ska göra om du vet vad du gör) eller så har du uppdaterat Coppermine och inte laddat upp include/init.inc.php.', //cpg1.4
  'help_not_writable1' => 'Mappen är inte skrivbar', //cpg1.4
  'help_not_writable2' => 'Ändra rättigheterna (CHMOD) så att sidan kan skriva till mappen %s och allt i den.', //cpg1.4
  'help_writable1' => 'Mappen är skrivbar', //cpg1.4
  'help_writable2' => 'Mappen %s är skrivbar. Detta är en onödig risk, Coppermine behöver bara läs- och exekveringsrättigheter.', //cpg1.4
  'help_writable_undetermined' => 'Coppermine kunde inte avgöra om mappen är skrivbar eller inte.', //cpg1.4
  'your_file' => 'Din fil', //cpg1.4
  'reference_file' => 'Referensfil', //cpg1.4
  'summary' => 'Summering', //cpg1.4
  'total' => 'Antal filer/mappar kontrollerade', //cpg1.4
  'mandatory_files_missing' => 'Nödvändiga filer som saknas', //cpg1.4
  'optional_files_missing' => 'Frivilliga filer som fattas', //cpg1.4
  'files_from_older_version' => 'Överblivna filer från gammal version av Coppermine', //cpg1.4
  'file_version_outdated' => 'Filer med gammal version', //cpg1.4
  'error_no_data' => 'Sidan misslyckades, kunde inte samla in någon information.', //cpg1.4
  'go_to_webcvs' => 'Gå till %s', //cpg1.4
  'options' => 'Val', //cpg1.4
  'show_optional_files' => 'Visa frivilliga filer/mappar', //cpg1.4
  'show_mandatory_files' => 'Visa nödvändiga filer', //cpg1.4
  'show_file_versions' => 'Visa filversioner', //cpg1.4
  'show_errors_only' => 'Visa bara filer/mappar med fel', //cpg1.4
  'show_permissions' => 'Visa rättigheter för mappar', //cpg1.4
  'show_condensed_output' => 'Visa koncentrerat innehåll (för enklare skärmdumpar)', //cpg1.4
  'coppermine_in_webroot' => 'Coppermine är installerat i webbrooten', //cpg1.4
  'connect_online_repository' => 'Försök ansluta till filutrymmet', //cpg1.4
  'show_additional_information' => 'Visa ytterligare innehåll', //cpg1.4
  'no_webcvs_link' => 'Visa inte länk till SVN', //cpg1.4
  'stable_webcvs_link' => 'Visa länk till SVN stabila gren', //cpg1.4
  'devel_webcvs_link' => 'Visa länk till SVN utvecklargren', //cpg1.4
  'submit' => 'Utför ändringar/uppdatera', //cpg1.4
  'reset_to_defaults' => 'Återställ förinställda värden', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File view_log.php  //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('VIEWLOG_PHP')) $lang_viewlog_php = array(
  'delete_all' => 'Radera alla loggar', //cpg1.4
  'delete_this' => 'Radera denna logg', //cpg1.4
  'view_logs' => 'Visa loggar', //cpg1.4
  'no_logs' => 'Inga loggar skapade.', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File xp_publish.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('XP_PUBLISH_PHP')) {

$lang_xp_publish_client = <<<EOT
<h1>Guide till klient för XP Webbpublicering</h1><p>Den hör modulen låter dig använda <b>Windows XP</b> guide för webbpublicering tillsammans med Coppermine.</p><p>Koden är baserad på en artikel av
EOT;

$lang_xp_publish_required = <<<EOT
<h2>Vad som behövs</h2><ul><li>Windows XP för att ha tillgång till guiden.</li><li>En fungerande installation av Coppermine <b>med fungerande uppladdning via webb.</b></li></ul><h2>Hur installationen sker på klientsidan.</h2><ul><li>Högerklicka på
EOT;

$lang_xp_publish_select = <<<EOT
Välj &quot;Spara som...&quot;. Spara filen på din hårddisk. När du sparar filen se till att det föreslagna namnet är <b>cpg_###.reg</b> (där ### är en numerisk tidsangivelse). Ändra till det namnet om nödvändigt (lämna nummerna intakt). När filen är nedladdad, dubbelklicka på den för att registrera din server med guiden.</li></ul>
EOT;

$lang_xp_publish_testing = <<<EOT
<h2>Testa</h2><ul><li>I Windows Explorer, välj dina filer och klicka på <b>Publicera xxx på webben</b> i vänster panel.</li><li>Bekräfta ditt val av filer. Klicka på <b>Nästa</b>.</li><li>I listan över tjänster som visas, välj den för dit fotogalleri (den har samma namn som ditt galleri). Om tjänsten inte visas, kontrollera att du installerat <b>cpg_pub_wizard.reg</b> som beskrivits ovan.</li><li>Skriv in dina loginuppgifter om det behövs.</li><li>Välj album för dina bilder eller skapa ett nytt.</li><li>Klicka på <b>nästa</b>. Uppladdningen av dina bilder påbörjas.</li><li>När det är klart, kontrollera ditt galleri så att bilderna har lagts till som de skulle.</li></ul>
EOT;

$lang_xp_publish_notes = <<<EOT
<h2>Anmärkningar:</h2><ul><li>När uppladdningen har startat kan guiden inte visa några felmeddelanden, därför kan du inte veta om uppladdningen har lyckats eller inte förrän du tittat i ditt galleri.</li><li>Om uppladdningen misslyckas, aktivera &quot;Debugläge&quot; på konfigurationssidan, försök sedan ladda upp en bild i taget och granska felmeddelandena i filen
EOT;

$lang_xp_publish_flood = <<<EOT
som finns i Coppermine-mappen på webbservern.</li><li>För att undvika att galleriet blir <i>översvämmat (flooded)</i> av bilder som laddas upp med guiden kan bara <b>administratörer</b> och <b>användare som står som ägare till albumet</b> använda denna guide.</li>
EOT;



$lang_xp_publish_php = array(
  'title' => 'Coppermine - XP Webbpubliceringsguide', //cpg1.4
  'welcome' => 'Välkommen <b>%s</b>,', //cpg1.4
  'need_login' => 'Du behöver logga in på galleriet med din webbläsare innan du kan använda denna guide.<p/><p>När du loggar in, glöm inte att kryssa i <b>Kom ihåg mig</b>-rutan om den finns.', //cpg1.4
  'no_alb' => 'Det finns inga album där du har behörighet att ladda upp bilder med denna guide.', //cpg1.4
  'upload' => 'Ladda upp dina bilder till ett befintligt album', //cpg1.4
  'create_new' => 'Skapa ett nytt album för dina bilder', //cpg1.4
  'album' => 'Album', //cpg1.4
  'category' => 'Kategori', //cpg1.4
  'new_alb_created' => 'Ditt nya album &quot;<b>%s</b>&quot; har skapats.', //cpg1.4
  'continue' => 'Tryck på &quot;Nästa&quot; för att börja ladda upp bilderna', //cpg1.4
  'link' => 'den här länken', //cpg1.4
);
}
?>