<?php
// ------------------------------------------------------------------------- //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
// ------------------------------------------------------------------------- //
//  Svenskt språkpaket av David Garcia <lejonturbo@yahoo.se>                 //
//             			                             //
// ------------------------------------------------------------------------- //

$lang_charset = 'iso-8859-1';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('Bytes', 'kB', 'MB');

// Day of weeks and months
$lang_day_of_week = array('Sön', 'Mån', 'Tis', 'Ons', 'Tors', 'Fre', 'Lör');
$lang_month = array('Jan', 'Feb', 'Mar', 'Apr', 'Maj', 'Jun', 'Jul', 'Aug', 'Sep', 'Okt', 'Nov', 'Dec');

// Some common strings
$lang_yes = 'Ja';
$lang_no  = 'Nej';
$lang_back = 'TILLBAKA';
$lang_continue = 'FORTSÄTT';
$lang_info = 'Information';
$lang_error = 'Fel';

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$album_date_fmt =    '%d. %B, %Y';
$lastcom_date_fmt =  '%d/%b/%y kl. %H:%M';
$lastup_date_fmt = '%d. %B, %Y';
$register_date_fmt = '%d. %B, %Y';
$lasthit_date_fmt = '%d. %B, %Y kl. %R';
$comment_date_fmt =  '%d. %B, %Y kl. %R';

// For the word censor (sensurer ufine ord)
$lang_bad_words = array('*fan*', 'fitta', 'kuk', 'hora*', 'fan', 'blatte', 'helvete', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'Fu\(*', 'fuk*', 'honkey', 'hora', 'slampa', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*');

$lang_meta_album_names = array(
	'random' => 'Slumpmässiga bilder',
	'lastup' => 'Senaste bilder',
	'lastcom' => 'Senaste kommentarer',
	'topn' => 'Flest visningar',
	'toprated' => 'Bästa bild',
	'lasthits' => 'Senast visat',
	'search' => 'Resultat vid sökning'
);

$lang_errors = array(
	'access_denied' => 'Du har inte access tilll den här sidan.',
	'perm_denied' => 'Du har inte tilllstånd att utföra den här handlingen.',
	'param_missing' => 'Scriptet kördes utan nödvändiga parametrar.',
	'non_exist_ap' => 'Det valda albumet/bilden existerar inte!',
	'quota_exceeded' => 'Diskutrymmet är fullt för dig.<br /><br />Du har [quota]K i utrymme, dina bilder använder [space]K. Lägger du in flera bilder överskrider du den tilllåtna mängden',
	'gd_file_type_err' => 'När albumet använder GD Graphics- teknik är det bara tilllåtet att använda JPEG eller PNG bilder. Har du möjlighet att använda PNG är detta det bästa valet!',
	'invalid_image' => 'Bilden du laddat upp är defekt eller stöder inte GD tekniken',
	'resize_failed' => 'Kunde inte förändra storleken på bilden eller skapa en miniatyrbild.',
	'no_img_to_display' => 'Inga bilder att visa',
	'non_exist_cat' => 'Den valda kategorin exsisterar inte',
	'orphan_cat' => 'En kategori har en non-existing parent, kör category manager för att rätta tilll problemet.',
	'directory_ro' => 'Mappen \'%s\' är skrivskyddad. Bilden kan inte tas bort.',
	'non_exist_comment' => 'Den valda kommentaren finns inte.',
	'pic_in_invalid_album' => 'Bilden-/erna i album existerar inte (%s)!?'
);

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
	'alb_list_title' => 'Gå tilll Albumlistan',
	'alb_list_lnk' => 'Albumlista',
	'my_gal_title' => 'Gå till personligt galleri',
	'my_gal_lnk' => 'Mitt galleri',
	'my_prof_lnk' => 'Min profil',
	'adm_mode_title' => 'Byt till Admin läge',
	'adm_mode_lnk' => 'Admin läge',
	'usr_mode_title' => 'Byt till Användar läge',
	'usr_mode_lnk' => 'Användar läge',
	'upload_pic_title' => 'Ladda upp en bild till ett album',
	'upload_pic_lnk' => 'Ladda upp bild',
	'register_title' => 'Upprätta konto',
	'register_lnk' => 'Registrera',
	'login_lnk' => 'Logga in',
	'logout_lnk' => 'Logga ut',
	'lastup_lnk' => 'Senaste uppladdningarna',
	'lastcom_lnk' => 'Senaste kommentarer',
	'topn_lnk' => 'Mest visade',
	'toprated_lnk' => 'Bästa bild',
	'search_lnk' => 'Sök',
);

$lang_gallery_admin_menu = array(
	'upl_app_lnk' => 'Ladda upp för godkännande',
	'config_lnk' => 'Konfiguration',
	'albums_lnk' => 'Album',
	'categories_lnk' => 'Kategorier',
	'users_lnk' => 'Användare',
	'groups_lnk' => 'Grupper',
	'comments_lnk' => 'Kommentarer',
	'searchnew_lnk' => 'Sök igen',
);

$lang_user_admin_menu = array(
	'albmgr_lnk' => 'upprätta / ordna album',
	'modifyalb_lnk' => 'Redigera album',
	'my_prof_lnk' => 'Min profil',
);

$lang_cat_list = array(
	'category' => 'Kategori',
	'albums' => 'Album',
	'pictures' => 'Bilder',
);

$lang_album_list = array(
	'album_on_page' => '%d album på %d sidor'
);

$lang_thumb_view = array(
	'date' => 'datum',
	'name' => 'namn',
	'sort_da' => 'Sorterat i stigande datumordning',
	'sort_dd' => 'Sorterat i fallande datumordning',
	'sort_na' => 'Sorterat alfabetisk stigande ordning',
	'sort_nd' => 'Sorterat alfabetisk fallande ordning',
	'pic_on_page' => '%d bilder på %d sida(or)',
	'user_on_page' => '%d användare på %d sida(or)'
);

$lang_img_nav_bar = array(
	'thumb_title' => 'Tillbaka till översikt',
	'pic_info_title' => 'Visa/dölj information om bilden',
	'slideshow_title' => 'Slideshow',
	'ecard_title' => 'Sänd den här bilden som ett e-vykort',
	'ecard_disabled' => 'e-vykort är inaktiverat',
	'ecard_disabled_msg' => 'Du har inte tilllåtelse att skicka e-vykort',
	'prev_title' => 'Se förra bilden',
	'next_title' => 'Se nästa bild',
	'pic_pos' => 'BILD %s/%s',
);

$lang_rate_pic = array(
	'rate_this_pic' => 'Kommentera den här bilden ',
	'no_votes' => '(Ingen kommentar ännu)',
	'rating' => '(Aktuellt betyg : %s / 5 med %s röster)',
	'rubbish' => 'Dålig',
	'poor' => 'Medel',
	'fair' => 'OK',
	'good' => 'Bra',
	'excellent' => 'Bättre än bra',
	'great' => 'Fantastisk',
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
	CRITICAL_ERROR => 'Kritiskt fel',
	'file' => 'Fil: ',
	'line' => 'Rad: ',
);

$lang_display_thumbnails = array(
	'filename' => 'Filnamn: ',
	'filesize' => 'Filstorlek: ',
	'dimensions' => 'Dimension: ',
	'date_added' => 'Inlagt datum: '
);

$lang_get_pic_data = array(
	'n_comments' => '%s kommentar',
	'n_views' => '%s visningar',
	'n_votes' => '(%s röster)'
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
	'Exclamation' => 'Utrop',
	'Question' => 'Frågande',
	'Very Happy' => 'Väldigt glad',
	'Smile' => 'Ler',
	'Sad' => 'Trist',
	'Surprised' => 'Överraskad',
	'Shocked' => 'Chockad',
	'Confused' => 'Förvirrad',
	'Cool' => 'Cool',
	'Laughing' => 'Skrattande',
	'Mad' => 'Galen',
	'Razz' => 'Razz',
	'Embarassed' => 'Generad',
	'Crying or Very sad' => 'Gråter eller mycket ledsen',
	'Evil or Very Mad' => 'Elak eller mycket sur',
	'Twisted Evil' => 'Ond',
	'Rolling Eyes' => 'Rullar med ögonen',
	'Wink' => 'Blinkar',
	'Idea' => 'God idé',
	'Arrow' => 'Pil',
	'Neutral' => 'Neutral',
	'Mr. Green' => 'Mr. Grön',
);

// ------------------------------------------------------------------------- //
// File addpic.php
// ------------------------------------------------------------------------- //

// void

// ------------------------------------------------------------------------- //
// File admin.php
// ------------------------------------------------------------------------- //

if (defined('ADMIN_PHP')) $lang_admin_php = array(
	0 => 'lämnar Admin läge...',
	1 => 'kommer in i Admin läge...',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
	'alb_need_name' => 'Albumet måste ha ett namn!',
	'confirm_modifs' => 'Är du säker på att du vill spara de här inställningarna?',
	'no_change' => 'Du har inte ändrat något!',
	'new_album' => 'Nytt album',
	'confirm_delete1' => 'Är du säker på att du vill radera albumet?',
	'confirm_delete2' => '\nAlla bilder och kommentarer försvinner!',
	'select_first' => 'Välj ett album först',
	'alb_mrg' => 'Album Manager',
	'my_gallery' => '* Mitt galleri *',
	'no_category' => '* Ingen kategori *',
	'delete' => 'Raderat',
	'new' => 'Ny',
	'apply_modifs' => 'Godkänn ändringarna',
	'select_category' => 'Välj kategori',
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
	'miss_param' => 'Obligatorisk parameter vid \'%s\'operationen utfördes inte!',
	'unknown_cat' => 'Den valda kategorin existerar inte i databasen',
	'usergal_cat_ro' => 'Kategorin Användargalleri kan inte raderas!',
	'manage_cat' => 'Administrerar kategorier',
	'confirm_delete' => 'Är du säker på att du vill radera den här kategorin?',
	'category' => 'Kategori',
	'operations' => 'Handling',
	'move_into' => 'Flytta till',
	'update_create' => 'Uppdaterar/skapar kategori',
	'parent_cat' => 'Huvudkategori',
	'cat_title' => 'Kategori titel',
	'cat_desc' => 'Kategori beskrivning'
);

// ------------------------------------------------------------------------- //
// File config.php
// ------------------------------------------------------------------------- //

if (defined('CONFIG_PHP')) $lang_config_php = array(
	'title' => 'Konfiguration',
	'restore_cfg' => 'Återskapa standardinställningar',
	'save_cfg' => 'Spara ny konfiguration',
	'notes' => 'Noteringar',
	'info' => 'Information',
	'upd_success' => 'Coppermine konfigurationen är uppdaterad',
	'restore_success' => 'Coppermine standardinställningar blev uppdaterade',
	'name_a' => 'Namn stigande',
	'name_d' => 'Namn fallande',
	'date_a' => 'Datum stigande',
	'date_d' => 'Datum fallande'
);

if (defined('CONFIG_PHP')) $lang_config_data = array(
	'Generella inställningar',
	array('Galleri namn', 'gallery_name', 0),
	array('Galleri beskrivning', 'gallery_description', 0),
	array('Galleri administrator e-mail', 'gallery_admin_email', 0),
	array('Måladress för \'Se fler bilder\' länk i e-vykort', 'ecards_more_pic_target', 0),
	array('Språk', 'lang', 5),
	array('Tema', 'theme', 6),

	'Albumlist visning',
	array('Bredd på huvudtabell (pixlar eller %)', 'main_table_width', 0),
	array('Antal rader i kategorier för visning', 'subcat_level', 0),
	array('Antal album per sida', 'albums_per_page', 0),
	array('Antal kolumner för albumvisning', 'album_list_cols', 0),
	array('Storlek på miniatyrbilder i pixlar', 'alb_list_thumb_size', 0),
	array('Innehåll på huvudsidan', 'main_page_layout', 0),

	'Miniatyrbild',
	array('Antal kolumner på sidan med miniatyrbilder', 'thumbcols', 0),
	array('Antal rader på sidan med miniatyrbilder', 'thumbrows', 0),
	array('Max antal miniatyrbilder på varje sida', 'max_tabs', 0),
	array('Visa bildrubrik nedanför miniatyrbild', 'caption_in_thumbview', 1),
	array('Visa antal kommentarer nedanför miniatyrbild', 'display_comment_count', 1),
	array('Standard sortering av bildföljd', 'default_sort_order', 3),
	array('Minimum antal röster på bild för visning i \'bästa bild\' listan', 'min_votes_for_rating', 0),

	'Bildvisning och kommentarer',
	array('Bredd för tabell av bildvisning (pixlar eller %)', 'picture_table_width', 0),
	array('Information om bilden är synlig som standard', 'display_pic_info', 1),
	array('Filtrera fula ord som standard', 'filter_bad_words', 1),
	array('Smilies är tillåtet', 'enable_smilies', 1),
	array('Max längd på bildbeskrivning', 'max_img_desc_length', 0),
	array('Max längd på hela ord', 'max_com_wlength', 0),
	array('Max rader i en kommentar', 'max_com_lines', 0),
	array('Max längd på en kommentar', 'max_com_size', 0),

	'Bilder och miniatyrbilder',
	array('Kvalitet på JPEG', 'jpeg_qual', 0),
	array('Max bredd och höjd på miniatyrbilder <b>*</b>', 'thumb_width', 0),
	array('Skapa mellanliggande bilder','make_intermediate',1),
	array('Max höjd eller bredd på mellanliggande bild <b>*</b>', 'picture_width', 0),
	array('Max storlek på bilder för uppladdning (kB)', 'max_upl_size', 0),
	array('Max bredd eller höjd på bilder för uppladdning (pixlar)', 'max_upl_width_height', 0),

	'Användarinställningar',
	array('Tillåt att nya användare kan registrera sig', 'allow_user_registration', 1),
	array('Nya användare måste aktiveras med e-post adress', 'reg_requires_valid_email', 1),
	array('Tillåt två användare att ha samma e-post adress', 'allow_duplicate_emails_addr', 1),
	array('Användare kan ha privata album', 'allow_private_albums', 1),

	'Specialfält vid bildbeskrivning (låt dessa vara blanka som standard)',
	array('Fält 1 namn', 'user_field1_name', 0),
	array('Fält 2 namn', 'user_field2_name', 0),
	array('Fält 3 namn', 'user_field3_name', 0),
	array('Fält 4 namn', 'user_field4_name', 0),

	'Avancerade inställningar för bilder och miniatyrbilder',
	array('Förbjudna tecken i filnamn', 'forbiden_fname_char',0),
	array('Accepterade filtyper för uppladdning', 'allowed_file_extensions',0),
	array('Metod för ändring av storlek på bilder','thumb_method',2),
	array('Adress till ImageMagick \'konverterings\' verktyg (exempel /usr/bin/X11/)', 'impath', 0),
	array('Tillåtna bildtyper (endast tillgänglig vid användning av ImageMagick)', 'allowed_img_types',0),
	array('Kommandolinje vid användande av ImageMagick', 'im_options', 0),
	array('Läs EXIF data i JPEG filer', 'read_exif_data', 1),
	array('Album mapp <b>*</b>', 'fullpath', 0),
	array('Mapp för användarnas bilder <b>*</b>', 'userpics', 0),
	array('Prefix på medlemsbilder <b>*</b>', 'normal_pfx', 0),
	array('Prefix på miniatyrbilder <b>*</b>', 'thumb_pfx', 0),
	array('Standard tillstånd på mappar', 'default_dir_mode', 0),
	array('Standard tillstånd på bilder', 'default_file_mode', 0),

	'Cookies och teckenkodning',
	array('Namnet på den cookie som används av detta system', 'cookie_name', 0),
	array('Sökväg till den cookie använd av detta system', 'cookie_path', 0),
	array('Teckenkodning', 'charset', 4),

	'Diverse inställningar',
	array('Tillåt testning (debug)', 'debug_mode', 1),
	
	'<br /><div align="center">(*) Fält markerat med * måste ändras om du redan har bilder i ditt galleri</div><br />'
);

// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
	'empty_name_or_com' => 'Du måste skriva in ditt namn och en kommentar',
	'com_added' => 'Din kommentar har lagts till',
	'alb_need_title' => 'Du måste ge albumet en titel!',
	'no_udp_needed' => 'Ingen uppdatering behövs.',
	'alb_updated' => 'Albumet uppdaterades',
	'unknown_album' => 'Valt album existerar inte, eller Du har inte tillstånd att ladda upp bilder i detta album.',
	'no_pic_uploaded' => 'Inget foto laddades upp!<br /><br />Om du redan valt bild för uppladdning, kontrollera att serven tillåter uppladdningar...',
	'err_mkdir' => 'Misslyckades med att skapa mappen %s !',
	'dest_dir_ro' => 'Mappen %s är inte skrivbar av scriptet!',
	'err_move' => 'Kan inte flytta %s till %s !',
	'err_fsize_too_large' => 'Bildstorleken som du laddat upp är för stor (max tillåtet är %s x %s) !',
	'err_imgsize_too_large' => 'Filstorleken på den uppladdade bilden är för stor (max tillåtet är %s KB) !',
	'err_invalid_img' => 'Filen du laddat upp är inte i tillåtet bildformat!',
	'allowed_img_types' => 'Du kan bara ladda upp %s bilder.',
	'err_insert_pic' => 'Bilden \'%s\' kan inte infogas i albumet',
	'upload_success' => 'Din bild laddades upp felfritt<br /><br />Bilden blir synlig efter godkännande av administratören.',
	'info' => 'Information',
	'com_added' => 'Kommentar tillagd',
	'alb_updated' => 'Album updaterat',
	'err_comment_empty' => 'Din kommentar har inget innehåll!',
	'err_invalid_fext' => 'Endast filer med följande filändelser är tillåtna: <br /><br />%s.',
	'no_flood' => 'Ledsen, men du är författaren till den senast postade kommentaren för den här bilden.<br /><br />Ändra kommentaren du postat, om innehållet behöver ändras',
	'redirect_msg' => 'Du blir omdirigerad.<br /><br /><br />Tryck på \'>> FORTSÄTT <<\' om sidan inte ändras automatiskt inom några sekunder.',
	'upl_success' => 'Din bild infogades utan problem.',
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
	'caption' => 'Rubrik',
	'fs_pic' => 'Full storlek',
	'del_success' => 'Raderad',
	'ns_pic' => 'Normal storlek',
	'err_del' => 'Kan inte raderas',
	'thumb_pic' => 'Miniatyrbild',
	'comment' => 'Kommentar',
	'im_in_alb' => 'Bilder i album',
	'alb_del_success' => 'Album \'%s\' raderat',
	'alb_mgr' => 'Album Administratör',
	'err_invalid_data' => 'Datafel i \'%s\'',
	'create_alb' => 'Skapar album \'%s\'',
	'update_alb' => 'Uppdaterar album \'%s\' med titel \'%s\' och index \'%s\'',
	'del_pic' => 'Radera bild',
	'del_alb' => 'Radera album',
	'del_user' => 'Radera användare',
	'err_unknown_user' => 'Den valda användaren existerar inte!',
	'comment_deleted' => 'Kommentaren raderades',
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
	'confirm_del' => 'Är du säker på att du vill radera den här bilden? \\nKommentarer blir också raderade.',
	'del_pic' => 'Radera DENNA bild',
	'size' => '%s x %s pixlar',
	'views' => '%s gånger',
	'slideshow' => 'Bildspel',
	'stop_slideshow' => 'STOPPA BILDSPEL',
	'view_fs' => 'Klicka för att visa full storlek',
);

$lang_picinfo = array(
	'title' =>'Information om bilden',
	'Filename' => 'Filnamn',
	'Album name' => 'Album namn',
	'Rating' => 'Betyg (%s röster)',
	'Keywords' => 'Nyckelord',
	'File Size' => 'Filstorlek',
	'Dimensions' => 'Dimensioner',
	'Displayed' => 'Visningar',
	'Camera' => 'Kamera',
	'Date taken' => 'Fotograferat datum',
	'Aperture' => 'Öppning',
	'Exposure time' => 'Exponeringstid ',
	'Focal length' => 'Brännvidd',
	'Comment' => 'Kommentar'
);

$lang_display_comments = array(
	'OK' => 'OK',
	'edit_title' => 'Ändra den här kommentaren',
	'confirm_delete' => 'Är du säker på du vill radera den här kommentaren?',
	'add_your_comment' => 'Lägg till din kommentar',
	'your_name' => 'Ditt namn',
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
	'title' => 'Skicka ett e-vykort',
	'invalid_email' => '<b>VARNING</b> : ogiltig e-post adress!',
	'ecard_title' => 'e-vykort från %s till dig!',
	'view_ecard' => 'Om inte e-vykortet visas riktigt, klicka här',
	'view_more_pics' => 'Klicka på den här länken för fler bilder!',
	'send_success' => 'Ditt e-vykort skickades',
	'send_failed' => 'Beklagar, servern kunde inte skicka...',
	'from' => 'Från',
	'your_name' => 'Ditt namn',
	'your_email' => 'Din e-post adress',
	'to' => 'Till',
	'rcpt_name' => 'Namn på mottagare',
	'rcpt_email' => 'E-post adress till mottagare',
	'greetings' => 'Hälsning',
	'message' => 'Meddelande',
);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
	'pic_info' => 'Bildinformation',
	'album' => 'Album',
	'title' => 'Titel',
	'desc' => 'Beskrivning',
	'keywords' => 'Nyckelord',
	'pic_info_str' => '%sx%s - %skB - %s visningar - %s röster',
	'approve' => 'Godkänn bild',
	'postpone_app' => 'Avslå godkännande',
	'del_pic' => 'Radera bild',
	'reset_view_count' => 'Nollställ räknare',
	'reset_votes' => 'Nollställ röster',
	'del_comm' => 'Radera kommentarer',
	'upl_approval' => 'Godkänn uppladdning',
	'edit_pics' => 'Redigera bilder',
	'see_next' => 'Se nästa bild',
	'see_prev' => 'Se föregående bild',
	'n_pic' => '%s bilder',
	'n_of_pic_to_disp' => 'Bilder för visning',
	'apply' => 'Lägg till ändringar'
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
	'group_name' => 'Gruppnamn',
	'disk_quota' => 'Diskkvot',
	'can_rate' => 'Kan rösta',
	'can_send_ecards' => 'Kan skicka e-vykort',
	'can_post_com' => 'Kan kommentera',
	'can_upload' => 'Kan ladda upp bilder',
	'can_have_gallery' => 'Kan ha privat galleri',
	'apply' => 'Lägg till ändringar',
	'create_new_group' => 'Skapa ny grupp',
	'del_groups' => 'Radera vald grupp',
	'confirm_del' => 'Varning, när du raderar en grupp blir medlemmarna i denna flyttade till \'Registrerad\' grupp !\n\nVill du fortsätta ?',
	'title' => 'Administrera användargrupper',
	'approval_1' => 'Godkännande för offentliga uppladdningar(1)',
	'approval_2' => 'Godkännande för privata uppladdningar(2)',
	'note1' => '<b>(1)</b> Uppladdningar i offentligt album kräver administratörs godkännande',
	'note2' => '<b>(2)</b> Uppladdningar i privata album som tillhör användaren kräver administratörs godkännande',
	'notes' => 'Noteringar'
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
	'welcome' => 'Välkommen!'
);

$lang_album_admin_menu = array(
	'confirm_delete' => 'Är du säker på att du vill radera detta album? \\nAlla bilder och kommentarer blir också raderade.',
	'delete' => 'RADERA',
	'modify' => 'REDIGERA',
	'edit_pics' => 'REDIGERA BILDER',
);

$lang_list_categories = array(
	'home' => 'Hem',
	'stat1' => '<b>[pictures]</b> Bilder i <b>[albums]</b> album och <b>[cat]</b> kategorier med <b>[comments]</b> kommentarer visat <b>[views]</b> gånger',
	'stat2' => '<b>[pictures]</b> Bilder i <b>[albums]</b> album visat <b>[views]</b> gånger',
	'xx_s_gallery' => '%s\'s Galleri',
	'stat3' => '<b>[pictures]</b> Bilder i <b>[albums]</b> album med <b>[comments]</b> kommentarer visat <b>[views]</b> gånger'
);

$lang_list_users = array(
	'user_list' => 'Användarlista',
	'no_user_gal' => 'Ingen användare kan ha album',
	'n_albums' => '%s album',
	'n_pics' => '%s bilder'
);

$lang_list_albums = array(
	'n_pictures' => '%s bilder',
	'last_added' => ', senaste inlagt %s'
);

}

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
	'login' => 'Logga in',
	'enter_login_pswd' => 'Skriv ditt användarnamn och lösenord',
	'username' => 'Användarnamn',
	'password' => 'Lösenord',
	'remember_me' => 'Kom ihåg mig',
	'welcome' => 'Välkommen %s ...',
	'err_login' => '*** Kunde inte logga in. Pröva igen ***',
	'err_already_logged_in' => 'Du är redan inloggad!',
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
	'logout' => 'Logga ut',
	'bye' => 'På återseende %s ...',
	'err_not_loged_in' => 'Du är inte inloggad!',
);

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
	'upd_alb_n' => 'Uppdatera album %s',
	'general_settings' => 'Generella inställningar',
	'alb_title' => 'Album titel',
	'alb_cat' => 'Album kategori',
	'alb_desc' => 'Album beskrivning',
	'alb_thumb' => 'Album miniatyrbilder',
	'alb_perm' => 'Rättigheter för detta album',
	'can_view' => 'Album kan ses av',
	'can_upload' => 'Gäster kan ladda upp bilder',
	'can_post_comments' => 'Gäster kan skriva kommentarer',
	'can_rate' => 'Gäster kan rösta på bilder',
	'user_gal' => 'Användargalleri',
	'no_cat' => '* Ingen kategori *',
	'alb_empty' => 'Albumet är tomt',
	'last_uploaded' => 'Senast uppladdat',
	'public_alb' => 'Alla (offentliga album)',
	'me_only' => 'Endast jag',
	'owner_only' => 'Albumet ägs av (%s)',
	'groupp_only' => 'Medlemmar av \'%s\' gruppen',
	'err_no_alb_to_modify' => 'Inget album att redigera.',
	'update' => 'Uppdatera album'
);

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
	'already_rated' => 'Ledsen, men du har redan röstat på denna bild',
	'rate_ok' => 'Din röst registrerades',
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //
// Lägg in egna villkor för användning här, om du inte vill ha standardvillkor//

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
Denna sida kan ha album som gäster kan ladda upp bilder i. Administratören av den här siten kan inte alltid ha kontroll över vad som laddas upp,
men administratören kommer att försöka radera stötande material så fort som möjligt, om detta förekommer vill säga.
Du måste därför trycka på "Jag Accepterar" knappen nedanför.
EOT;

$lang_register_php = array(
	'page_title' => 'Registrering av ny användare',
	'term_cond' => 'Regler för fotoalbumet',
	'i_agree' => 'Jag accepterar',
	'submit' => 'Skicka registrering',
	'err_user_exists' => 'Användarnamnet finns redan. Välj ett annat!',
	'err_password_mismatch' => 'Lösenorden stämde inte med varandra',
	'err_uname_short' => 'Användarnamnet var för kort',
	'err_password_short' => 'Lösenordet var för kort',
	'err_uname_pass_diff' => 'Användarnamn och lösenord stämmer inte. Försök igen',
	'err_invalid_email' => 'E-post adressen är ogiltig',
	'err_duplicate_email' => 'En annan användare är registrerad med din e-post adress.',
	'enter_info' => 'Ange registreringsinformation',
	'required_info' => 'Informationskrav',
	'optional_info' => 'Valfri information',
	'username' => 'Användarnamn',
	'password' => 'Lösenord',
	'password_again' => 'Lösenord igen',
	'email' => 'E-post',
	'location' => 'Jag bor i',
	'interests' => 'Intressen',
	'website' => 'Hemsida',
	'occupation' => 'Jag arbetar som',
	'error' => 'FEL',
	'confirm_email_subject' => '%s - Godkännande',
	'information' => 'Information',
	'failed_sending_email' => 'Godkännande kan inte skickas!',
	'thank_you' => 'Tack för din registrering.<br /><br />ett e-post meddelande är skickat till dig där info om hur du aktiverar ditt konto finns.',
	'acct_created' => 'Ditt konto är nu upprättat och du kan logga in med ditt användarnamn och lösenord',
	'acct_active' => 'Ditt konto är nu aktivt och du kan logga in med ditt användarnamn och lösenord',
	'acct_already_act' => 'Din konto är redan aktiverat !',
	'acct_act_failed' => 'Detta konto kan inte bli aktiverat !',
	'err_unk_user' => 'Den valda användaren existerar inte !',
	'x_s_profile' => '%s\'s profil',
	'group' => 'grupp',
	'reg_date' => 'Medlem sedan',
	'disk_usage' => 'Diskutrymme',
	'change_pass' => 'Byt lösenord',
	'current_pass' => 'Nuvarande lösenord',
	'new_pass' => 'Nytt lösenord',
	'new_pass_again' => 'Bekräfta lösenord',
	'err_curr_pass' => 'Fel under nytt lösenord',
	'apply_modif' => 'Lägg till ändringar',
	'change_pass' => 'Byt mitt lösenord',
	'update_success' => 'Din profil uppdaterades',
	'pass_chg_success' => 'Ditt lösenord ändrades',
	'pass_chg_error' => 'Ditt lösenord ändrades INTE',
);

$lang_register_confirm_email = <<<EOT
Tack för din registrering hos {SITE_NAME}

Ditt användarnamn : "{USER_NAME}"
Ditt lösenord : "{PASSWORD}"

För att aktivera ditt konto måste du klicka på länken under eller klistra in den i din browser (på adressraden).

{ACT_LINK}

Med vänliga hälsningar,

Administratören av  - {SITE_NAME}

EOT;

}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
	'title' => 'Se kommentarer',
	'no_comment' => 'Det finns inga kommentarer att se på',
	'n_comm_del' => '%s kommentarer raderade',
	'n_comm_disp' => 'Antal kommentarer att visa',
	'see_prev' => 'Se foregående',
	'see_next' => 'Se nästa',
	'del_comm' => 'Radera valda kommentarer',
);


// ------------------------------------------------------------------------- //
// File search.php - OK
// ------------------------------------------------------------------------- //

if (defined('SEARCH_PHP')) $lang_search_php = array(
	0 => 'Sök bland bilderna',
);

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
	'page_title' => 'Sök i nya bilder',
	'select_dir' => 'Välj mapp',
	'select_dir_msg' => 'Denna funktion tillåter dig att lägga in bilder du har laddat upp via FTP.<br /><br />Välj mappen du har laddat upp bilder i',
	'no_pic_to_add' => 'Det finns inga bilder att lägga till',
	'need_one_album' => 'Du måste ha minst ett album för att lägga till bilder',
	'warning' => 'Varning',
	'change_perm' => 'Systemet kan inte skriva till denna mapp, du måste ändra rättigheter med CHMOD 755 eller 777 innan du prövar igen !',
	'target_album' => '<b>Flytta bilder från &quot;</b>%s<b>&quot; till </b>%s',
	'folder' => 'Mapp',
	'image' => 'Bild',
	'album' => 'Album',
	'result' => 'Resultat',
	'dir_ro' => 'Inte skrivbar. ',
	'dir_cant_read' => 'Kan inte läsa. ',
	'insert' => 'Lägg in nya bilder i album',
	'list_new_pic' => 'Lista med nya bilder',
	'insert_selected' => 'Sätt in valda bilder',
	'no_pic_found' => 'Inga nya bilder hittades',
	'be_patient' => 'Tagga ner, systemet arbetar med bilderna',
	'notes' =>  '<ul>'.
				'<li><b>OK</b> : Betyder att bilden blev inlagd'.
				'<li><b>DP</b> : Betyder att bilden är en kopia och ligger redan i databasen'.
				'<li><b>PB</b> : Betyder att bilden inte kan läggas in, kontrollera rättigheterna'.
				'<li>Om OK, DP, PB \'tecken\' inte kommer fram klicka då på förstörda bilder och kontrollera felmeddelande syns i PHP'.
				'<li>Om din browser ger timeout prova att klicka på Uppdatera'.
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
	'title' => 'Ladda upp bild',
	'max_fsize' => 'Max filstorlek är satt till %s kB',
	'album' => 'Album',
	'picture' => 'Bild',
	'pic_title' => 'Titel på bild',
	'description' => 'Beskrivning av bild',
	'keywords' => 'Nyckelord (separera med kommatecken. t.ex- audi, s3, quattro, rs4 etc.)',
	'err_no_alb_uploadables' => 'Ledsen, det finns inga album där du har tillåtelse att ladda upp bilder i.',
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
	'title' => 'Administrera användare',
	'name_a' => 'Namn stigande',
	'name_d' => 'Namn fallande',
	'group_a' => 'Grupp stigande',
	'group_d' => 'Grupp fallande',
	'reg_a' => 'Reg datum stigande',
	'reg_d' => 'Reg datum fallande',
	'pic_a' => 'Bilder stigande',
	'pic_d' => 'Bilder fallande',
	'disku_a' => 'Diskutrymme stigande',
	'disku_d' => 'Diskutrymme fallande',
	'sort_by' => 'Sorterat av användare',
	'err_no_users' => 'Användartabellen är tom!',
	'err_edit_self' => 'Du kan inte editera din egna profil, använd \'Min profil\' länken för detta',
	'edit' => 'REDIGERA',
	'delete' => 'RADERA',
	'name' => 'Användarnamn',
	'group' => 'Grupp',
	'inactive' => 'Inte aktiv',
	'operations' => 'Handlingar',
	'pictures' => 'Bilder',
	'disk_space' => 'Utrymme använt / Kvot',
	'registered_on' => 'Registrerad den',
	'u_user_on_p_pages' => '%d användare på %d sidor',
	'confirm_del' => 'Är du säker på att du vill radera E denna användaren ? \\nAlla bilder och album blir också raderade.',
	'mail' => 'SKICKA',
	'err_unknown_user' => 'Den valda användaren existerar inte!',
	'modify_user' => 'Redigera användare',
	'notes' => 'Noteringar',
	'note_list' => '<li>Om du inte vill ändra det aktuella lösenordet, lät fältet "Lösenord" stå tomt',
	'password' => 'Lösenord',
	'user_active' => 'Användaren är inte aktiv',
	'user_group' => 'Användargrupp',
	'user_email' => 'Användar e-post',
	'user_web_site' => 'Användarens hemsida',
	'create_new_user' => 'Skapa ny användare',
	'user_location' => 'Användarens placering',
	'user_interests' => 'Användarens intressen',
	'user_occupation' => 'Användarens beskrivning',
);
?>