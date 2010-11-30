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
  Coppermine version: 1.5.11
  $HeadURL$
  $Revision$
**********************************************/

if (!defined('IN_COPPERMINE')) { die('Not in Coppermine...');}

// info about translators and translated language
$lang_translation_info['lang_name_english'] = 'Swedish';
$lang_translation_info['lang_name_native'] = 'Svenska';
$lang_translation_info['lang_country_code'] = 'se';
$lang_translation_info['trans_name'] = array('Lasse Wannberg', 'Anita Schaeder');
$lang_translation_info['trans_email'] = array('lasse@wannbergs.se', 'anita@urmakaren.com');
$lang_translation_info['trans_website'] = array('http://forum.coppermine-gallery.net/index.php?action=profile;u=97335', 'http://www.urmakaren.com/');
$lang_translation_info['trans_date'] = '2010-10-04';


$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Bytes, Kibibytes, Mebibytes, Gibibytes
$lang_byte_units = array('Bytes', 'KiB', 'MiB', 'GiB');
$lang_decimal_separator = array(',', '.'); //cpg1.5 // symbol used to separate thousands from hundreds and rounded number from decimal place

// Day of weeks and months
$lang_day_of_week = array('Sön', 'Mån', 'Tis', 'Ons', 'Tor', 'Fre', 'Lör');
$lang_month = array('Jan', 'Feb', 'Mar', 'Apr', 'Maj', 'Jun', 'Jul', 'Aug', 'Sep', 'Okt', 'Nov', 'Dec');

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$lang_date['album'] = '%d %B %Y';
$lang_date['lastcom'] = '%y-%m-%d kl %H:%M';
$lang_date['lastup'] = '%d %B %Y';
$lang_date['register'] = '%d %B %Y';
$lang_date['lasthit'] = '%d %B %Y kl %I:%M';
$lang_date['comment'] = '%d %B %Y kl %I:%M';
$lang_date['log'] = '%d %B %Y kl %I:%M';
$lang_date['scientific'] = '%Y-%m-%d %H:%M:%S';

// For the word censor
$lang_bad_words = array('*knulla*', 'arsle', '*fitta*', 'kuk', 'mutta', 'fan', 'helvete', 'blatte', '*nigger*', 'svarting', 'röv', 'ollon', 'dildo', 'pattar', 'penis', 'skit', 'balle', 'hora', 'jävla*', 'svartskalle');

$lang_meta_album_names['random'] = 'Slumpvisa';
$lang_meta_album_names['lastup'] = 'Senaste';
$lang_meta_album_names['lastalb'] = 'Senast uppdaterade album';
$lang_meta_album_names['lastcom'] = 'Senaste kommentarer';
$lang_meta_album_names['topn'] = 'Mest visade';
$lang_meta_album_names['toprated'] = 'Topplista';
$lang_meta_album_names['lasthits'] = 'Senast visade';
$lang_meta_album_names['search'] = 'Sökta filer';
$lang_meta_album_names['album_search'] = 'Sökta album';
$lang_meta_album_names['category_search'] = 'Sökta kategorier';
$lang_meta_album_names['favpics'] = 'Favoriter';
$lang_meta_album_names['datebrowse'] = 'Sök på datum'; //cpg1.5

$lang_errors['access_denied'] = 'Du har inte behörighet till den här sidan.';
$lang_errors['invalid_form_token'] = 'Hittade inget giltigt format.'; //cpg1.5
$lang_errors['perm_denied'] = 'Du har inte behörighet att utföra det här.';
$lang_errors['param_missing'] = 'Det saknas parametrar för att skriptet ska kunna köras.';
$lang_errors['non_exist_ap'] = 'Det/den markerade albumet/filen finns inte!';
$lang_errors['quota_exceeded'] = 'Överskriden utrymmeskvot.'; //cpg1.5
$lang_errors['quota_exceeded_details'] = 'Din utrymmeskvot är [quota]K, dina filer använder för närvarande [space]K, om du adderar den här filen överskrider du din kvot.'; //cpg1.5
$lang_errors['gd_file_type_err'] = 'När du använder ett GD bildbibliotek är de enda tillåtna bildtyperna JPEG och PNG.';
$lang_errors['invalid_image'] = 'Den uppladdade bilden är skadad och kan inte hanteras av GD biblioteket';
$lang_errors['resize_failed'] = 'Kan inte skapa miniatyrbild eller minska filens storlek.';
$lang_errors['no_img_to_display'] = 'Ingen bild att visa';
$lang_errors['non_exist_cat'] = 'Den markerade kategorin finns inte';
$lang_errors['directory_ro'] = 'Katalogen \'%s\' är inte skrivbar, filer kan inte raderas';
$lang_errors['pic_in_invalid_album'] = 'Filen är i ett album som inte finns (%s)!?';
$lang_errors['banned'] = 'Du är för närvarande blockerad från den här webbplatsen.';
$lang_errors['offline_title'] = 'Stängd (offline)';
$lang_errors['offline_text'] = 'Galleriet är för närvarande stängt/offline - försök igen senare';
$lang_errors['ecards_empty'] = 'Det finns för närvarande inga e-kortsrader att visa.';
$lang_errors['database_query'] = 'Det uppstod ett fel medan en fråga ställdes till databasen.';
$lang_errors['non_exist_comment'] = 'Den markerade kommentaren finns inte';
$lang_errors['captcha_error'] = 'Koden matchar inte'; // cpg1.5
$lang_errors['login_needed'] = 'Du måste %sregistrera%s/%slogin%s för att komma in på denna sida'; // cpg1.5
$lang_errors['error'] = 'Fel'; // cpg1.5
$lang_errors['critical_error'] = 'Kritiskt fel'; // cpg1.5
$lang_errors['access_thumbnail_only'] = 'Du är bara behörig att se miniatyrbilder.'; // cpg1.5
$lang_errors['access_intermediate_only'] = 'Du är inte behörig att se fullstora bilder.'; // cpg1.5
$lang_errors['access_none'] = 'Du är inte behörig att se några bilder.'; // cpg1.5
$lang_errors['register_globals_title'] = 'Register Globals on!';// cpg1.5
$lang_errors['register_globals_warning'] = 'PHP inställningen register_globals är aktiverad på din server, vilket inte är bra säkerhetsmässigt. Det rekommenderas bestämt att du inaktivera den.'; //cpg1.5

$lang_bbcode_help_title = 'BBCode hjälp';
$lang_bbcode_help = 'Du kan lägga till klickbara länkar och lite formatering till fältet genom att använda BBCode taggar: <li>[b]Fet[/b] =&gt; <strong>Fet</strong></li><li>[i]Kursiv[/i] =&gt; <i>Kursiv</i></li><li>[url=http://yoursite.com/]Url Text[/url] =&gt; <a href="http://yoursite.com">Url Text</a></li><li>[email]user@domain.com[/email] =&gt; <a href="mailto:user@domain.com">user@domain.com</a></li><li>[color=red]lite text[/color] =&gt; <span style="color:red">lite text</span></li><li>[img]http://documentation.coppermine-gallery.net/images/browser.png[/img] =&gt; <img src="docs/images/browser.png" border="0" alt="" /></li>';

$lang_common['yes'] = 'Ja'; // cpg1.5
$lang_common['no'] = 'Nej'; // cpg1.5
$lang_common['back'] = 'Tillbaka'; // cpg1.5
$lang_common['continue'] = 'Fortsätt'; // cpg1.5
$lang_common['information'] = 'Information'; // cpg1.5
$lang_common['error'] = 'Fel'; // cpg1.5
$lang_common['check_uncheck_all'] = 'markera/avmarkera allt'; // cpg1.5
$lang_common['confirm'] = 'Bekräfta'; // cpg1.5
$lang_common['captcha_help_title'] = 'Visuell bekräftelse (captcha)'; // cpg1.5
$lang_common['captcha_help'] = 'För att undvika spam, måste du bekräfta att du är en människa och inte en robot genom att skriva visad text.<br />Om du skriver med stora eller små bokstäver spelar ingen roll.'; // cpg1.5
$lang_common['title'] = 'Titel'; // cpg1.5
$lang_common['caption'] = 'Bildtext'; // cpg1.5
$lang_common['keywords'] = 'Nyckelord'; // cpg1.5
$lang_common['keywords_insert1'] = 'Nyckelord (avdelade med %s)'; // cpg1.5
$lang_common['keywords_insert2'] = 'Infoga från lista'; // cpg1.5
$lang_common['keyword_separator'] = 'Nyckelordsavdelare'; //cpg1.5
$lang_common['keyword_separators'] = array(' '=>'blanktecken', ','=>'komma', ';'=>'semikolon'); // cpg1.5
$lang_common['filename'] = 'Filnamn'; // cpg1.5
$lang_common['filesize'] = 'Filstorlek'; // cpg1.5
$lang_common['album'] = 'Album'; // cpg1.5
$lang_common['file'] = 'Fil'; // cpg1.5
$lang_common['date'] = 'Datum'; // cpg1.5
$lang_common['help'] = 'Hjälp'; // cpg1.5
$lang_common['close'] = 'Stäng'; // cpg1.5
$lang_common['go'] = 'go'; // cpg1.5
$lang_common['javascript_needed'] = 'Denna sida kräver JavaScript. Aktivera JavaScript i din webbläsare.'; // cpg1.5
$lang_common['move_up'] = 'Flytta upp'; // cpg1.5
$lang_common['move_down'] = 'Flytta ner'; // cpg1.5
$lang_common['move_top'] = 'Flytta överst'; // cpg1.5
$lang_common['move_bottom'] = 'Flytta nederst'; // cpg1.5
$lang_common['delete'] = 'Radera'; // cpg1.5
$lang_common['edit'] = 'Redigera'; // cpg1.5
$lang_common['username_if_blank'] = 'Okänd användare'; // cpg1.5
$lang_common['albums_no_category'] = 'Album utan kategori'; // cpg1.5
$lang_common['personal_albums'] = '* Personliga album'; // cpg1.5
$lang_common['select_album'] = 'Välj Album'; // cpg1.5
$lang_common['ok'] = 'OK'; // cpg1.5
$lang_common['status'] = 'Status'; // cpg1.5
$lang_common['apply_changes'] = 'Spara ändringar'; // cpg1.5
$lang_common['done'] = 'Klar'; // cpg1.5
$lang_common['album_properties'] = 'Album egenskaper'; // cpg1.5
$lang_common['parent_category'] = 'Huvudkategori'; // cpg1.5
$lang_common['edit_files'] = 'Redigera filer'; // cpg1.5
$lang_common['thumbnail_view'] = 'Miniatyrbildsvy'; // cpg1.5
$lang_common['album_manager'] = 'Hantera Album'; // cpg1.5
$lang_common['more'] = 'mer'; // cpg1.5

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu['home_title'] = 'Gå till förstasidan';
$lang_main_menu['home_lnk'] = 'Hem';
$lang_main_menu['alb_list_title'] = 'Gå till albumlistan';
$lang_main_menu['alb_list_lnk'] = 'Albumlista';
$lang_main_menu['my_gal_title'] = 'Gå till mitt personliga galleri';
$lang_main_menu['my_gal_lnk'] = 'Mitt galleri';
$lang_main_menu['my_prof_title'] = 'Gå till min personliga profil';
$lang_main_menu['my_prof_lnk'] = 'Min profil';
$lang_main_menu['adm_mode_title'] = 'Aktivera visning av admin-verktyg'; // cpg1.5
$lang_main_menu['adm_mode_lnk'] = 'Visa admin-verktyg'; // cpg1.5
$lang_main_menu['usr_mode_title'] = 'Inaktivera visning av admin-verktyg'; // cpg1.5
$lang_main_menu['usr_mode_lnk'] = 'Dölj admin-verktyg'; // cpg1.5
$lang_main_menu['upload_pic_title'] = 'Ladda upp en fil till ett album';
$lang_main_menu['upload_pic_lnk'] = 'Ladda upp fil';
$lang_main_menu['register_title'] = 'Skapa ett konto';
$lang_main_menu['register_lnk'] = 'Registrera';
$lang_main_menu['login_title'] = 'Logga in';
$lang_main_menu['login_lnk'] = 'Login';
$lang_main_menu['logout_title'] = 'Logga ut';
$lang_main_menu['logout_lnk'] = 'Logga ut';
$lang_main_menu['lastup_title'] = 'Visa senaste uppladdningar';
$lang_main_menu['lastup_lnk'] = 'Senast uppladdade';
$lang_main_menu['lastcom_title'] = 'Visa senaste kommentarer';
$lang_main_menu['lastcom_lnk'] = 'Senaste kommentarer';
$lang_main_menu['topn_title'] = 'Visa mest visade';
$lang_main_menu['topn_lnk'] = 'Mest visade';
$lang_main_menu['toprated_title'] = 'Visa topplistan';
$lang_main_menu['toprated_lnk'] = 'Topplista';
$lang_main_menu['search_title'] = 'Sök i galleriet';
$lang_main_menu['search_lnk'] = 'Sök';
$lang_main_menu['fav_title'] = 'Gå till Mina favoriter';
$lang_main_menu['fav_lnk'] = 'Mina Favoriter';
$lang_main_menu['memberlist_title'] = 'Visa användarlista';
$lang_main_menu['memberlist_lnk'] = 'Användarlista';
$lang_main_menu['browse_by_date_lnk'] = 'Datumordning'; // cpg1.5
$lang_main_menu['browse_by_date_title'] = 'Visa i uppladdningsordning'; // cpg1.5
$lang_main_menu['contact_title'] = 'Kom i kontakt med %s'; // cpg1.5
$lang_main_menu['contact_lnk'] = 'Kontakt'; // cpg1.5
$lang_main_menu['sidebar_title'] = 'Lägg till en sidopanel till din webbläsare'; // cpg1.5
$lang_main_menu['sidebar_lnk'] = 'Sidopanel'; // cpg1.5

$lang_gallery_admin_menu['upl_app_title'] = 'Godkänn nya uppladdningar';
$lang_gallery_admin_menu['upl_app_lnk'] = 'Uppladdningsgodkännande';
$lang_gallery_admin_menu['admin_title'] = 'Gå till konfigurering';
$lang_gallery_admin_menu['admin_lnk'] = 'Konfigurering';
$lang_gallery_admin_menu['albums_title'] = 'Gå till albumskonfigurering';
$lang_gallery_admin_menu['albums_lnk'] = 'Album';
$lang_gallery_admin_menu['categories_title'] = 'Gå till kategorikonfigurering';
$lang_gallery_admin_menu['categories_lnk'] = 'Kategorier';
$lang_gallery_admin_menu['users_title'] = 'Gå till användarkonfigurering';
$lang_gallery_admin_menu['users_lnk'] = 'Användare';
$lang_gallery_admin_menu['groups_title'] = 'Gå till gruppkonfigurering';
$lang_gallery_admin_menu['groups_lnk'] = 'Grupper';
$lang_gallery_admin_menu['comments_title'] = 'Granska alla kommentarer';
$lang_gallery_admin_menu['comments_lnk'] = 'Granska kommentarer';
$lang_gallery_admin_menu['searchnew_title'] = 'Gå till batchuppladdningsprocesser';
$lang_gallery_admin_menu['searchnew_lnk'] = 'Batchuppladdning av filer';
$lang_gallery_admin_menu['util_title'] = 'Gå till admin-verktyg';
$lang_gallery_admin_menu['util_lnk'] = 'Admin-Verktyg';
$lang_gallery_admin_menu['key_lnk'] = 'Nyckelordslexikon';
$lang_gallery_admin_menu['ban_title'] = 'Gå till blockerade användare';
$lang_gallery_admin_menu['ban_lnk'] = 'Blockera användare';
$lang_gallery_admin_menu['db_ecard_title'] = 'Granska e-kort';
$lang_gallery_admin_menu['db_ecard_lnk'] = 'Visa e-kort';
$lang_gallery_admin_menu['pictures_title'] = 'Sortera mina bilder';
$lang_gallery_admin_menu['pictures_lnk'] = 'Sortera mina bilder';
$lang_gallery_admin_menu['documentation_lnk'] = 'Dokumentation';
$lang_gallery_admin_menu['documentation_title'] = 'Coppermine handbok';
$lang_gallery_admin_menu['phpinfo_lnk'] = 'PHP-info'; // cpg1.5
$lang_gallery_admin_menu['phpinfo_title'] = 'Innehåller teknisk information om din server. Du kan bli ombedd att tillhandahålla information härifrån när du behöver support.'; // cpg1.5
$lang_gallery_admin_menu['update_database_lnk'] = 'Uppdatera databasen'; // cpg1.5
$lang_gallery_admin_menu['update_database_title'] = 'Om du har ersatt Coppermine filer, gjort modifieringar eller uppgraderat från en tidigare version av Coppermine, kör uppdatering av databasen en gång. Detta kommer att skapa nödvändiga tabeller och/eller konfigurera värden i din Coppermine databas.'; // cpg1.5
$lang_gallery_admin_menu['view_log_files_lnk'] = 'Visa loggfiler'; // cpg1.5
$lang_gallery_admin_menu['view_log_files_title'] = 'Coppermine kan logga det som användarna gör. Du kan läsa i dessa loggar om du har aktiverat loggning i Coppermine konfigureringen.'; // cpg1.5
$lang_gallery_admin_menu['check_versions_lnk'] = 'Kontrollera versioner'; // cpg1.5
$lang_gallery_admin_menu['check_versions_title'] = 'Kontrollera dina filversioner för att se om du har ersatt alla filer efter en uppgradering, eller om Coppermine har kommit med en ny release.'; // cpg1.5
$lang_gallery_admin_menu['bridgemgr_lnk'] = 'Hantera Länkning'; // cpg1.5
$lang_gallery_admin_menu['bridgemgr_title'] = 'Aktivera/inaktivera länkning/integration (bridging) av Coppermine med en annan applikation (t.ex. din BBS).'; // cpg1.5
$lang_gallery_admin_menu['pluginmgr_lnk'] = 'Hantera insticksmoduler/programtillägg '; // cpg1.5
$lang_gallery_admin_menu['pluginmgr_title'] = 'hantera Insticksmoduler'; // cpg1.5
$lang_gallery_admin_menu['overall_stats_lnk'] = 'Övergripande statistik'; // cpg1.5
$lang_gallery_admin_menu['overall_stats_title'] = 'Visa övergripande träffstatistik för webbläsare och operativsystem (om motsvarande funktioner är aktiverade i konfigurationen).'; // cpg1.5
$lang_gallery_admin_menu['keywordmgr_lnk'] = 'Hantera Nyckelord'; // cpg1.5
$lang_gallery_admin_menu['keywordmgr_title'] = 'Hantera nyckelord (om motsvarande funktion är aktiverad i konfigurationen.)'; // cpg1.5
$lang_gallery_admin_menu['exifmgr_lnk'] = 'Hantera EXIF'; // cpg1.5
$lang_gallery_admin_menu['exifmgr_title'] = 'Hantera EXIF visning (om motsvarande funktion är aktiverad i konfigurationen.)'; // cpg1.5
$lang_gallery_admin_menu['shownews_lnk'] = 'Visa nyheter'; // cpg1.5
$lang_gallery_admin_menu['shownews_title'] = 'Visa nyheter från coppermine-gallery.net'; // cpg1.5

$lang_user_admin_menu['albmgr_title'] = 'Skapa och organisera mina album';
$lang_user_admin_menu['albmgr_lnk'] = 'Skapa / ordna mina album';
$lang_user_admin_menu['modifyalb_title'] = 'Gå till Ändra mina album';
$lang_user_admin_menu['modifyalb_lnk'] = 'Ändra mina album';
$lang_user_admin_menu['my_prof_title'] = 'Gå till min personliga profil';
$lang_user_admin_menu['my_prof_lnk'] = 'Min profil';

$lang_cat_list['category'] = 'Kategori';
$lang_cat_list['albums'] = 'Album';
$lang_cat_list['pictures'] = 'Filer';

$lang_album_list['album_on_page'] = '%d album på %d sida(or)';

$lang_thumb_view['date'] = 'Datum';
//Sort by filename and title
$lang_thumb_view['name'] = 'Filnamn';
$lang_thumb_view['sort_da'] = 'Sortera på datum stigande';
$lang_thumb_view['sort_dd'] = 'Sortera på datum fallande';
$lang_thumb_view['sort_na'] = 'Sortera på namn stigande';
$lang_thumb_view['sort_nd'] = 'Sortera på namn fallande';
$lang_thumb_view['sort_ta'] = 'Sortera på titel stigande';
$lang_thumb_view['sort_td'] = 'Sortera på titel fallande';
$lang_thumb_view['position'] = 'Position';
$lang_thumb_view['sort_pa'] = 'Sortera på position stigande';
$lang_thumb_view['sort_pd'] = 'Sortera på position fallande';
$lang_thumb_view['download_zip'] = 'Ladda ner som Zip-fil';
$lang_thumb_view['pic_on_page'] = '%d filer på %d sida(or)';
$lang_thumb_view['user_on_page'] = '%d användare på %d sida(or)';
$lang_thumb_view['enter_alb_pass'] = 'Ange Album lösenord';
$lang_thumb_view['invalid_pass'] = 'Ogiltigt lösenord';
$lang_thumb_view['pass'] = 'Lösenord';
$lang_thumb_view['submit'] = 'Skicka';
$lang_thumb_view['zipdownload_copyright'] = 'Var vänlig respektera upphovsrätten. Använd bara nedladdade filer som upphovsmannen avsett och godkänt.'; // cpg1.5
$lang_thumb_view['zipdownload_username'] = 'Detta arkiv innehåller komprimerade filer från %s \'s favoriter'; // cpg1.5

$lang_img_nav_bar['thumb_title'] = 'Tillbaka till miniatyrbildssidan';
$lang_img_nav_bar['pic_info_title'] = 'Visa/dölj filinformation';
$lang_img_nav_bar['slideshow_title'] = 'Bildspel';
$lang_img_nav_bar['ecard_title'] = 'Skicka den här filen som ett e-kort';
$lang_img_nav_bar['ecard_disabled'] = 'e-kort är inaktiverade';
$lang_img_nav_bar['ecard_disabled_msg'] = 'Du har inte behörighet att skicka e-kort'; // js-alert
$lang_img_nav_bar['prev_title'] = 'Se föregående fil';
$lang_img_nav_bar['next_title'] = 'Se nästa fil';
$lang_img_nav_bar['pic_pos'] = 'FIL %s/%s';
$lang_img_nav_bar['report_title'] = 'Rapportera denna fil till administratören';
$lang_img_nav_bar['go_album_end'] = 'Hoppa till slutet';
$lang_img_nav_bar['go_album_start'] = 'Tillbaka till början';

$lang_rate_pic['rate_this_pic'] = 'Rösta på denna fil ';
$lang_rate_pic['no_votes'] = '(Ingen röst ännu)';
$lang_rate_pic['rating'] = '(Nuvarande ställning: %s / %s med %s röster)';
$lang_rate_pic['rubbish'] = 'Skräp';
$lang_rate_pic['poor'] = 'Dålig';
$lang_rate_pic['fair'] = 'Godkänd';
$lang_rate_pic['good'] = 'Bra';
$lang_rate_pic['excellent'] = 'Mycket bra';
$lang_rate_pic['great'] = 'Fantastisk';
$lang_rate_pic['js_warning'] = 'Javascript måste vara aktiverat för att du ska kunna rösta'; // cpg1.5
$lang_rate_pic['already_voted'] = 'Du har redan röstat på den här bilden'; // cpg1.5
$lang_rate_pic['forbidden'] = 'Du kan inte rösta på dina egna filer.'; // cpg1.5
$lang_rate_pic['rollover_to_rate'] = 'Dra musen över bilden för att rösta.'; // cpg1.5

// ------------------------------------------------------------------------- //
// File include/functions.inc.php
// ------------------------------------------------------------------------- //

$lang_cpg_die['file'] = 'Fil: ';
$lang_cpg_die['line'] = 'Rad: ';

$lang_display_thumbnails['dimensions'] = 'Dimensioner=';
$lang_display_thumbnails['date_added'] = 'Uppladdade datum=';

$lang_get_pic_data['n_comments'] = '%s kommentarer';
$lang_get_pic_data['n_views'] = '%s visningar';
$lang_get_pic_data['n_votes'] = '(%s röster)';

$lang_cpg_debug_output['debug_info'] = 'Debug Info';
$lang_cpg_debug_output['debug_output'] = 'Debug Output'; // cpg1.5
$lang_cpg_debug_output['select_all'] = 'Välj allt';
$lang_cpg_debug_output['copy_and_paste_instructions'] = 'Om du rapporterar fel till Coppermine support board, klipp-och-klistra (på begäran!) denna debug output till ditt inlägg, tillsammans med det felmeddelande du fått (om någon). Lägg denna debug_output till inlägget bara om supporten uttryckligen begär det! Försäkra dig om att ersätta alla lösenord med *** först.'; // cpg1.5
$lang_cpg_debug_output['debug_output_explain'] = 'Obs: Det här är för information endast och betyder inte att det är något fel med galleriet.'; // cpg1.5
$lang_cpg_debug_output['phpinfo'] = 'visa PHP-info';
$lang_cpg_debug_output['notices'] = 'Notiser';
$lang_cpg_debug_output['notices_help_admin'] = 'Notiser visas på den här sidan därför att du (som galleriets administratör) avsiktligt aktiverat den funktionen i Coppermines konfiguration. De betyder inte nödvändigtvis att något är fel med galleriet. Det är en funktion som bara skickliga utvecklare bör aktivera för att kunna felsöka. Om notiserna stör dig och/eller om du inte har en aning om vad de betyder, inaktivera motsvarande funktion i konfigurationen.'; // cpg1.5
$lang_cpg_debug_output['notices_help_non_admin'] = 'Notiser visas på den här sidan därför att du galleriets administratör avsiktligt aktiverat den funktionen. Det betyder inte att någonting är fel. Du kan lugnt strunta i notiser som visas här.'; // cpg1.5
$lang_cpg_debug_output['show_hide'] = 'visa / dölj'; // cpg1.5

$lang_language_selection['reset_language'] = 'Standardspråk';
$lang_language_selection['choose_language'] = 'Välj språk';

$lang_theme_selection['reset_theme'] = 'Standardtema';
$lang_theme_selection['choose_theme'] = 'välj tema';

$lang_version_alert['version_alert'] = 'Versionen är inte supporterad!';
$lang_version_alert['no_stable_version'] = 'Du använder en Coppermine %s (%s) version som bara är avsedd för mycket erfarna utvecklare - denna version har ingen support eller garanti. Använd på egen risk eller nedgradera till närmast föregående stabila version om du behöver support!';
$lang_version_alert['gallery_offline'] = 'Galleriet är nu stängt och kommer bara att vara synligt för dig som administratör. Glöm inte att öppna det igen efter det att du är färdig.';
$lang_version_alert['coppermine_news'] = 'Nyheter från coppermine-gallery.net'; // cpg1.5
$lang_version_alert['no_iframe'] = 'Din webbläsare kan inte visa infogade ramar (inline frames)'; // cpg1.5
$lang_version_alert['hide'] = 'dölj'; // cpg1.5

$lang_create_tabs['previous'] = 'Föregående'; // cpg1.5
$lang_create_tabs['next'] = 'Nästa'; // cpg1.5
$lang_create_tabs['jump_to_page'] = 'Gå till sida'; // cpg1.5

$lang_get_remote_file_by_url['no_data_returned'] = 'Inga data returnerades vid användning av %s'; // cpg1.5
$lang_get_remote_file_by_url['curl'] = 'CURL'; // cpg1.5
$lang_get_remote_file_by_url['fsockopen'] = 'Socket förbindelse (FSOCKOPEN)'; // cpg1.5
$lang_get_remote_file_by_url['fopen'] = 'fopen'; // cpg1.5
$lang_get_remote_file_by_url['curl_not_available'] = 'Curl är inte tillgängligt på din server'; // cpg1.5
$lang_get_remote_file_by_url['error_number'] = 'Fel nummer: %s'; // cpg1.5
$lang_get_remote_file_by_url['error_message'] = 'Felmeddelande: %s'; // cpg1.5


// ------------------------------------------------------------------------- //
// File include/mailer.inc.php
// ------------------------------------------------------------------------- //
$lang_mailer['provide_address'] = 'Du måste tillhandahålla minst en ';
$lang_mailer['mailer_not_supported'] = ' mailer stöds inte.';
$lang_mailer['execute'] = 'Kunde inte utföra: ';
$lang_mailer['instantiate'] = 'Kunde inte initiera email funktion.';
$lang_mailer['authenticate'] = 'SMTP Fel: Kunde inte autentisera.';
$lang_mailer['from_failed'] = 'Följande Från-adress misslyckades: ';
$lang_mailer['recipients_failed'] = 'SMTP Fel: Följande ';
$lang_mailer['data_not_accepted'] = 'SMTP Fel: Data accepterades inte.';
$lang_mailer['connect_host'] = 'SMTP Fel: Kunde inte ansluta till SMTP host.';
$lang_mailer['file_access'] = 'Kunde inte komma åt filen: ';
$lang_mailer['file_open'] = 'Fil Fel: Kunde inte öppna filen: ';
$lang_mailer['encoding'] = 'Okänd kodning: ';
$lang_mailer['signing'] = 'Signeringsfel: ';

// ------------------------------------------------------------------------- //
// File include/plugin_api.inc.php
// ------------------------------------------------------------------------- //
$lang_plugin_api['error_install'] = 'Kunde inte installera insticksmodulen \'%s\'';
$lang_plugin_api['error_uninstall'] = 'Kunde inte avinstallera insticksmodulen \'%s\'';
$lang_plugin_api['error_sleep'] = 'Kunde inte inaktivera insticksmodulen \'%s\''; // cpg1.5

// ------------------------------------------------------------------------- //
// File include/smilies.inc.php
// ------------------------------------------------------------------------- //
if (defined('SMILIES_PHP')) {
$lang_smilies_inc_php['Exclamation'] = 'Häpen';
$lang_smilies_inc_php['Question'] = 'Frågande';
$lang_smilies_inc_php['Very Happy'] = 'Mycket Glad';
$lang_smilies_inc_php['Smile'] = 'Ler';
$lang_smilies_inc_php['Sad'] = 'Ledsen';
$lang_smilies_inc_php['Surprised'] = 'Förvånad';
$lang_smilies_inc_php['Shocked'] = 'Chockad';
$lang_smilies_inc_php['Confused'] = 'Förbryllad';
$lang_smilies_inc_php['Cool'] = 'Cool';
$lang_smilies_inc_php['Laughing'] = 'Skrattar';
$lang_smilies_inc_php['Mad'] = 'Arg';
$lang_smilies_inc_php['Razz'] = 'Rumlar';
$lang_smilies_inc_php['Embarrassed'] = 'Förlägen'; // cpg1.5
$lang_smilies_inc_php['Crying or Very sad'] = 'Gråter eller Mycket ledsen';
$lang_smilies_inc_php['Evil or Very Mad'] = 'Elak eller Mycket Arg';
$lang_smilies_inc_php['Twisted Evil'] = 'Skruvat elak';
$lang_smilies_inc_php['Rolling Eyes'] = 'Ögonrullning';
$lang_smilies_inc_php['Wink'] = 'Blink';
$lang_smilies_inc_php['Idea'] = 'Idé';
$lang_smilies_inc_php['Arrow'] = 'Pil';
$lang_smilies_inc_php['Neutral'] = 'Neutral';
$lang_smilies_inc_php['Mr. Green'] = 'Mr. Green';
}


// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //
if (defined('ALBMGR_PHP')) {
$lang_albmgr_php['title'] = 'Hantera Album'; // cpg1.5
$lang_albmgr_php['alb_need_name'] = 'Album måste ha ett namn!'; // js-alert
$lang_albmgr_php['confirm_modifs'] = 'Är du säker på att du vill göra de här ändringarna?'; // js-alert
$lang_albmgr_php['no_change'] = 'Du gjorde inga ändringar!'; // js-alert
$lang_albmgr_php['new_album'] = 'Nytt album';
$lang_albmgr_php['delete_album'] = 'Radera album'; // cpg1.5
$lang_albmgr_php['confirm_delete1'] = 'Är du säker på att du vill radera detta album?'; // js-alert
$lang_albmgr_php['confirm_delete2'] = 'Alla filer och dess kommentarer kommer att raderas!'; // js-alert
$lang_albmgr_php['select_first'] = 'Välj ett album först'; // js-alert
$lang_albmgr_php['my_gallery'] = '* Mitt galleri *';
$lang_albmgr_php['no_category'] = '* Ingen kategori *';
$lang_albmgr_php['select_category'] = 'Välj kategori';
$lang_albmgr_php['category_change'] = 'Om du ändrar kategori kommer dina ändringar att försvinna!'; // cpg1.5
$lang_albmgr_php['page_change'] = 'Om du klockar på den här länken kommer dina ändringar att försvinna!'; // cpg1.5
$lang_albmgr_php['cancel'] = 'Avbryt'; // cpg1.5
$lang_albmgr_php['submit_reminder'] = 'Sortingsändringar sparas inte förrän du klickar på &quot;Spara ändringar&quot;.'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) {
$lang_banning_php['title'] = 'Blockera användare';
$lang_banning_php['user_name'] = 'Användarnamn';
$lang_banning_php['user_account'] = 'Användarkonto';
$lang_banning_php['email_address'] = 'E-postadress'; // cpg1.5
$lang_banning_php['ip_address'] = 'IP Adress';
$lang_banning_php['expires'] = 'Förfaller'; // cpg1.5
$lang_banning_php['expiry_date'] = 'Förfallodatum'; // cpg1.5
$lang_banning_php['expired'] = 'Utgått'; // cpg1.5
$lang_banning_php['edit_ban'] = 'Spara ändringar';
$lang_banning_php['add_new'] = 'Lägg till ny utestängning';
$lang_banning_php['add_ban'] = 'Lägg till';
$lang_banning_php['error_user'] = 'Hittar inte användare';
$lang_banning_php['error_specify'] = 'Du måste ange antingen ett användarnamn eller en IP adress';
$lang_banning_php['error_ban_id'] = 'Ogiltigt blockerings ID!';
$lang_banning_php['error_admin_ban'] = 'du kan inte blockera dig själv!';
$lang_banning_php['error_server_ban'] = 'Du hade tänkt blockera din egen server? Tsk tsk, går inte...';
$lang_banning_php['skipping'] = 'Hoppar över det kommandot.'; // cpg1.5
$lang_banning_php['lookup_ip'] = 'IP Address Lookup';
$lang_banning_php['select_date'] = 'välj datum';
$lang_banning_php['delete_comments'] = 'Radera kommentarer'; // cpg1.5
$lang_banning_php['current'] = 'nuvarande'; // cpg1.5
$lang_banning_php['all'] = 'alla'; // cpg1.5
$lang_banning_php['none'] = 'inga'; // cpg1.5
$lang_banning_php['view'] = 'visa'; // cpg1.5
$lang_banning_php['ban_id'] = 'Blockerings ID'; // cpg1.5
$lang_banning_php['existing_bans'] = 'Existerande blockeringar'; // cpg1.5
$lang_banning_php['no_banning_when_bridged'] = 'Du har för närvarande ditt galleri länkat (bridged) till en annan applikation. Använd den applikationens blockeringsmekanism istället för den som är inbyggd i Coppermine. Coppermines egen blockeringsmekanism gäller knappast vid integrering.'; // cpg1.5
$lang_banning_php['records_on_page'] = '%d poster på %d sida(or)'; // cpg1.5
$lang_banning_php['ascending'] = 'stigande'; // cpg1.5
$lang_banning_php['descending'] = 'fallande'; // cpg1.5
$lang_banning_php['sort_by'] = 'Sortera på'; // cpg1.5
$lang_banning_php['sorted_by'] = 'sorterad på'; // cpg1.5
$lang_banning_php['ban_record_x_updated'] = 'Blockeringspost %s har uppdaterats'; // cpg1.5
$lang_banning_php['ban_record_x_deleted'] = 'Blockeringspost %s has raderats'; // cpg1.5
$lang_banning_php['new_ban_record_created'] = 'Ny blockeringspost har skapats'; // cpg1.5
$lang_banning_php['ban_record_x_already_exists'] = 'Blockeringspost för %s finns redan!'; // cpg1.5
$lang_banning_php['comment_deleted'] = '%s kommentar gjord av %s har raderats'; // cpg1.5
$lang_banning_php['comments_deleted'] = '%s kommentarer gjorda av %s har raderats'; // cpg1.5
$lang_banning_php['email_field_invalid'] = 'Ange en giltig e-postadress'; // cpg1.5
$lang_banning_php['ip_address_field_invalid'] = 'Ange en giltig IP adress (x.x.x.x)'; // cpg1.5
$lang_banning_php['expiry_field_invalid'] = 'Ange ett giltigt förfallodatum (ÅÅÅÅ-MM-DD)'; // cpg1.5
$lang_banning_php['form_not_submit'] = 'Formuläret har inte skickats - det finns fel som du måste rätta först!'; // cpg1.5
};

// ------------------------------------------------------------------------- //
// File bridgemgr.php
// ------------------------------------------------------------------------- //
if (defined('BRIDGEMGR_PHP')) {
$lang_bridgemgr_php['title'] = 'Länkningsguide';
$lang_bridgemgr_php['back'] = 'tillbaka';
$lang_bridgemgr_php['next'] = 'nästa';
$lang_bridgemgr_php['start_wizard'] = 'Starta länkningsguide';
$lang_bridgemgr_php['finish'] = 'Avsluta';
$lang_bridgemgr_php['no_action_needed'] = 'Inget mer behövs i detta steg. Klicka på \'nästa\' för att fortsätta.';
$lang_bridgemgr_php['reset_to_default'] = 'Nollställ till standardvärde';
$lang_bridgemgr_php['choose_bbs_app'] = 'välj applikation att länka till Coppermine';
$lang_bridgemgr_php['support_url'] = 'Gå hit för support till denna applikation';
$lang_bridgemgr_php['settings_path'] = 'sökväg(ar) använd(a) av din länkade applikation';
$lang_bridgemgr_php['full_forum_url'] = 'URL för den länkade applikationen';
$lang_bridgemgr_php['relative_path_of_forum_from_webroot'] = 'Absolut sökväg till den länkade applikationen';
$lang_bridgemgr_php['relative_path_to_config_file'] = 'Relativ sökväg till den länkade applikationens konfigurationsfil';
$lang_bridgemgr_php['cookie_prefix'] = 'Cookie prefix';
$lang_bridgemgr_php['special_settings'] = 'länkade applikationens specifika inställningar';
$lang_bridgemgr_php['use_post_based_groups'] = 'Använd den länkade applikationens egna grupper?';
$lang_bridgemgr_php['use_post_based_groups_yes'] = 'ja';
$lang_bridgemgr_php['use_post_based_groups_no'] = 'nej';
$lang_bridgemgr_php['error_title'] = 'Du måste rätta dessa fel innan du kan fortsätta. Gå till föregående skärmbild.';
$lang_bridgemgr_php['error_specify_bbs'] = 'Du måste ange vilken applikation du vill länka din Coppermine installation med.';
$lang_bridgemgr_php['finalize'] = 'aktivera/inaktivera integration';
$lang_bridgemgr_php['finalize_explanation'] = 'Så här långt så har dina inställningar skrivits till databasen, men integrationen har inte aktiverats. Du kan aktivera på/av vid ett senare tillfälle. Kom ihåg administratörens användarnamn och lösenord från Coppermineinstallationen, du kan komma att behöva det senare för att göra förändringar. Om något skulle gå fel, gå till %s och inaktivera integrering där, med användning av ditt fristående (olänkade) administratörskonto (vanligtvis det du angav under Coppermine installationen).';
$lang_bridgemgr_php['your_bridge_settings'] = 'Dina integrationsinställningar';
$lang_bridgemgr_php['title_enable'] = 'Aktivera integration/bridging med %s';
$lang_bridgemgr_php['bridge_enable_yes'] = 'aktivera';
$lang_bridgemgr_php['bridge_enable_no'] = 'inaktivera';
$lang_bridgemgr_php['error_must_not_be_empty'] = 'får ej saknas';
$lang_bridgemgr_php['error_either_be'] = 'måste antingen vara %s eller %s';
$lang_bridgemgr_php['error_folder_not_exist'] = '%s finns inte. Rätta värdet du angav för %s';
$lang_bridgemgr_php['error_cookie_not_readible'] = 'Coppermine kan inte läsa en cookie vid namn %s. Rätta värdet du angav för %s, eller gå till din integrationsapplikations administratörspanel för att försäkra dig om att sökvägen till cookien är läsbar för Coppermine.';
$lang_bridgemgr_php['error_mandatory_field_empty'] = 'Du kan inte lämna fältet %s tomt - fyll i ett giltigt värde.';
$lang_bridgemgr_php['error_no_trailing_slash'] = 'Det får inte finnas ett snedstreck i slutet av fältet %s.';
$lang_bridgemgr_php['error_trailing_slash'] = 'Det måste finnas ett snedstreck i slutet av fältet %s.';
$lang_bridgemgr_php['error_prefix_and_table'] = '%s och ';
$lang_bridgemgr_php['recovery_title'] = 'Hantera Insticksmoduler: akut återställning';
$lang_bridgemgr_php['recovery_explanation'] = 'Om du kom hit för att administrera integration med ditt Coppermine galleri, måste du först logga in som administratör. Om du inte kan logga in eftersom integreringen inte fungerar som den ska, kan du inaktivera integrering på den här sidan. Att ange ditt användarnamn och lösenord gör inte att du loggar in, det inaktiverar bara integreringen. Se dokumentationen för mer information.';
$lang_bridgemgr_php['username'] = 'Användarnamn';
$lang_bridgemgr_php['password'] = 'Lösenord';
$lang_bridgemgr_php['disable_submit'] = 'skicka';
$lang_bridgemgr_php['recovery_success_title'] = 'Behörighet beviljades';
$lang_bridgemgr_php['recovery_success_content'] = 'Du har lyckats inaktivera integreringen. Din Coppermine installation körs nu fristående.';
$lang_bridgemgr_php['recovery_success_advice_login'] = 'Logga in som administratör för att ändra dina integrationsinställningar och/eller aktivera integration igen.';
$lang_bridgemgr_php['goto_login'] = 'Gå till inloggningssidan';
$lang_bridgemgr_php['goto_bridgemgr'] = 'Gå till Hantera Insticksmoduler';
$lang_bridgemgr_php['recovery_failure_title'] = 'Behörighet beviljades inte';
$lang_bridgemgr_php['recovery_failure_content'] = 'Du angav fel uppgifter. Du måste ange uppgifter från den fristående installationens administratörskonto (vanligtvis det du angav under Coppermine installationen).';
$lang_bridgemgr_php['try_again'] = 'försök igen';
$lang_bridgemgr_php['recovery_wait_title'] = 'Väntetiden har inte gått ut';
$lang_bridgemgr_php['recovery_wait_content'] = 'Av säkerhetsskäl tillåter inte scriptet flera misslyckade påloggningar i snabb följd. Du måste vänta en stund innan du kan försöka logga in igen.';
$lang_bridgemgr_php['wait'] = 'vänta';
$lang_bridgemgr_php['browse'] = 'bläddra';
}

// ------------------------------------------------------------------------- //
// File calendar.php
// ------------------------------------------------------------------------- //
if (defined('CALENDAR_PHP')) {
$lang_calendar_php['title'] = 'Kalender';
$lang_calendar_php['clear_date'] = 'nollställ datum';
$lang_calendar_php['files'] = 'filer'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //
if (defined('CATMGR_PHP')) {
$lang_catmgr_php['miss_param'] = 'Parametrar som krävs för \'%s\' handlingen fattas!';
$lang_catmgr_php['unknown_cat'] = 'Markerad kategori finns inte i databasen';
$lang_catmgr_php['usergal_cat_ro'] = 'Kategorin Användargallerier kan inte raderas!';
$lang_catmgr_php['manage_cat'] = 'Hantera kategorier';
$lang_catmgr_php['confirm_delete'] = 'Är du säker på att du vill RADERA den här kategorin'; // js-alert
$lang_catmgr_php['category'] = 'Kategorier'; // cpg1.5
$lang_catmgr_php['operations'] = 'Operationer';
$lang_catmgr_php['move_into'] = 'Flytta till';
$lang_catmgr_php['update_create'] = 'Uppdatera/Skapa kategori';
$lang_catmgr_php['parent_cat'] = 'Huvudkategori';
$lang_catmgr_php['cat_title'] = 'Kategori titel';
$lang_catmgr_php['cat_thumb'] = 'Kategori miniatyrbild';
$lang_catmgr_php['cat_desc'] = 'Kategori beskrivning';
$lang_catmgr_php['categories_alpha_sort'] = 'Sortera kategorier alfabetiskt (istället för anpassad sorteringsordning)';
$lang_catmgr_php['save_cfg'] = 'Spara konfiguration';
$lang_catmgr_php['no_category'] = '* Ingen kategori *'; // cpg1.5
$lang_catmgr_php['group_create_alb'] = 'Grupp(er) behörig(a) att skapa album i denna kategori'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File contact.php
// ------------------------------------------------------------------------- //
if (defined('CONTACT_PHP')) {
$lang_contact_php['title'] = 'Kontakt'; // cpg1.5
$lang_contact_php['your_name'] = 'Ditt namn'; // cpg1.5
$lang_contact_php['your_email'] = 'Din e-postadress'; // cpg1.5
$lang_contact_php['subject'] = 'Ämne'; // cpg1.5
$lang_contact_php['your_message'] = 'Ditt meddelande'; // cpg1.5
$lang_contact_php['name_field_mandatory'] = 'V.g. ange ditt namn'; // cpg1.5 // js-alert
$lang_contact_php['name_field_invalid'] = 'V.g. ange ditt riktiga namn'; // cpg1.5 // js-alert
$lang_contact_php['email_field_mandatory'] = 'V.g. ange din e-postadress'; // cpg1.5 // js-alert
$lang_contact_php['email_field_invalid'] = 'V.g. ange en giltig e-postadress'; // cpg1.5 // js-alert
$lang_contact_php['subject_field_mandatory'] = 'V.g. ange ett meningsfullt ämne'; // cpg1.5 // js-alert
$lang_contact_php['message_field_mandatory'] = 'V.g. ange ett meddelande'; // cpg1.5 // js-alert
$lang_contact_php['confirmation'] = 'Bekräftelse'; // cpg1.5
$lang_contact_php['email_headline'] = 'Denna e-post skickades  %s med formuläret på %s från IP adressen %s'; // cpg1.5
$lang_contact_php['registered_user'] = 'registrerad användare'; // cpg1.5
$lang_contact_php['guest'] = 'gäst'; // cpg1.5
$lang_contact_php['unknown'] = 'okänd'; // cpg1.5
$lang_contact_php['user_info'] = 'Användaren %s med namn %s och e-postadress %s skrev:'; // cpg1.5
$lang_contact_php['failed_sending_email'] = 'Misslyckades med att sända e-post. Försök igen senare.'; // cpg1.5
$lang_contact_php['email_sent'] = 'Din e-post har skickats.'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File admin.php
// ------------------------------------------------------------------------- //
if (defined('ADMIN_PHP')) {
$lang_admin_php['title'] = 'Gallerikonfiguration';
$lang_admin_php['general_settings'] = 'Allmänna inställningar'; // cpg1.5
$lang_admin_php['language_charset_settings'] = 'Språk och teckenuppsättningar'; // cpg1.5
$lang_admin_php['themes_settings'] = 'Tema inställning'; // cpg1.5
$lang_admin_php['album_list_view'] = 'Album listvy'; // cpg1.5
$lang_admin_php['thumbnail_view'] = 'Miniatyrbildsvy'; // cpg1.5
$lang_admin_php['image_view'] = 'Bildvy'; // cpg1.5
$lang_admin_php['comment_settings'] = 'Kommentarinställningar'; // cpg1.5
$lang_admin_php['thumbnail_settings'] = 'Miniatyrinställningar'; // cpg1.5
$lang_admin_php['file_settings'] = 'Filinställningar'; // cpg1.5
$lang_admin_php['image_watermarking'] = 'Bild vattenstämpel'; // cpg1.5
$lang_admin_php['registration'] = 'Registrering'; // cpg1.5
$lang_admin_php['user_settings'] = 'Användarinställningar'; // cpg1.5
$lang_admin_php['custom_fields_user_profile'] = 'Anpassade fält för användarprofiler (lämna blankt om oanvänt). Använd Profil 6 för långa texter, som biografier'; // cpg1.5
$lang_admin_php['custom_fields_image_description'] = 'Anpassade fält för bildbeskrivningar (lämna blankt om oanvänt)'; // cpg1.5
$lang_admin_php['cookie_settings'] = 'Cookies inställningar'; // cpg1.5
$lang_admin_php['email_settings'] = 'E-postinställningar (vanligtvis behöver inget ändras här; lämna alla fält blanka om du är osäker.)'; // cpg1.5
$lang_admin_php['logging_stats'] = 'Loggning och statistik'; // cpg1.5
$lang_admin_php['maintenance_settings'] = 'Underhållsinställningar'; // cpg1.5
$lang_admin_php['manage_exif'] = 'Hantera EXIF visning';
$lang_admin_php['manage_plugins'] = 'Hantera insticksmoduler';
$lang_admin_php['manage_keyword'] = 'Hantera nyckelord';
$lang_admin_php['restore_cfg'] = 'Återställ fabriksinställningar';
$lang_admin_php['restore_cfg_confirm'] = 'Vill du verkligen återställa hela konfigurationen till fabriksinställningen? Detta kan inte göras ogjort!'; // cpg1.5 // js-alert
$lang_admin_php['save_cfg'] = 'Spara ny konfiguration';
$lang_admin_php['notes'] = 'Noteringar';
$lang_admin_php['info'] = 'Information';
$lang_admin_php['upd_success'] = 'Coppermine konfiguration blev uppdaterad';
$lang_admin_php['restore_success'] = 'Coppermine standardkonfiguration återställdes';
$lang_admin_php['name_a'] = 'Namn stigande';
$lang_admin_php['name_d'] = 'Namn fallande';
$lang_admin_php['title_a'] = 'Titel stigande';
$lang_admin_php['title_d'] = 'Titel fallande';
$lang_admin_php['date_a'] = 'Datum stigande';
$lang_admin_php['date_d'] = 'Datum fallande';
$lang_admin_php['pos_a'] = 'Position stigande';
$lang_admin_php['pos_d'] = 'Position fallande';
$lang_admin_php['th_any'] = 'Max Utseende';
$lang_admin_php['th_ht'] = 'Höjd';
$lang_admin_php['th_wd'] = 'Bredd';
$lang_admin_php['th_ex'] = 'Exakt'; // cpg1.5
$lang_admin_php['debug_everyone'] = 'Alla';
$lang_admin_php['debug_admin'] = 'Administratör endast';
$lang_admin_php['no_logs'] = 'Av';
$lang_admin_php['log_normal'] = 'Normal';
$lang_admin_php['log_all'] = 'Alla';
$lang_admin_php['view_logs'] = 'Visa loggar';
$lang_admin_php['click_expand'] = 'klicka på avsnittets namn för att utöka alla';
$lang_admin_php['click_collapse'] = 'klicka på avsnittets namn för att dölja'; // cpg1.5
$lang_admin_php['expand_all'] = 'Utöka alla';
$lang_admin_php['toggle_all'] = 'Dölj alla'; // cpg1.5
$lang_admin_php['notice1'] = '(*) Dessa inställningar får inte ändras om du redan har filer i din databas.';
$lang_admin_php['notice2'] = '(**) Om du ändrar dessa inställningar påverkar det bara filer som laddas upp från och med nu. Det är tillrådigt att inte ändra dessa inställningar om det redan finns filer i galleriet. Du kan emellertid tillämpa dessa ändringar på filer som redan finns med hjälp av &quot;<a href="util.php">administratörsverktyget</a> (ändra bildstorlek)&quot; verktyget från administratörsmenyn.';
$lang_admin_php['notice3'] = '(***) Alla loggfiler är skrivna på engelska.';
$lang_admin_php['bbs_disabled'] = 'Funktionen är inaktiverad vid användning av integration(bridging)';
$lang_admin_php['auto_resize_everyone'] = 'Alla';
$lang_admin_php['auto_resize_user'] = 'Användare endast';
$lang_admin_php['ascending'] = 'stigande';
$lang_admin_php['descending'] = 'fallande';
$lang_admin_php['collapse_all'] = 'Dölja allt'; // cpg1.5
$lang_admin_php['separate_page'] = 'på en separat sida'; // cpg1.5
$lang_admin_php['inline'] = 'inline'; // cpg1.5
$lang_admin_php['guests_only'] = 'Gäster endast'; // cpg1.5
$lang_admin_php['wm_bottomright'] = 'Nederst till höger'; // cpg1.5
$lang_admin_php['wm_bottomleft'] = 'Nederst till vänster'; // cpg1.5
$lang_admin_php['wm_topleft'] = 'Överst till vänster'; // cpg1.5
$lang_admin_php['wm_topright'] = 'Överst till höger'; // cpg1.5
$lang_admin_php['wm_center'] = 'Centrerat'; // cpg1.5
$lang_admin_php['wm_both'] = 'Båda'; // cpg1.5
$lang_admin_php['wm_original'] = 'Original'; // cpg1.5
$lang_admin_php['wm_resized'] = 'Storleksändrad'; // cpg1.5
$lang_admin_php['gallery_name'] = 'Galleriets namn'; // cpg1.5
$lang_admin_php['gallery_description'] = 'Galleriets beskrivning'; // cpg1.5
$lang_admin_php['gallery_admin_email'] = 'Galleriets administratörs e-post'; // cpg1.5
$lang_admin_php['ecards_more_pic_target'] = 'URL till din Coppermine gallerimapp'; // cpg1.5
$lang_admin_php['ecards_more_pic_target_detail'] = '(med avslutande snedstreck på slutet, inte \'index.php\' eller liknade på slutet)'; // cpg1.5
$lang_admin_php['home_target'] = 'URL till din hemsida'; // cpg1.5
$lang_admin_php['enable_zipdownload'] = 'Tillåt ZIP-nedladdning av favoriter'; // cpg1.5
$lang_admin_php['enable_zipdownload_no_textfile'] = 'bara favoriterna'; // cpg1.5
$lang_admin_php['enable_zipdownload_additional_textfile'] = 'favoriter och readme fil'; // cpg1.5
$lang_admin_php['time_offset'] = 'Tidszonsdifferens relativt GMT'; // cpg1.5
$lang_admin_php['time_offset_detail'] = '(nuvarande tid: %s)'; // cpg1.5
$lang_admin_php['enable_help'] = 'Aktivera hjälp-ikoner'; // cpg1.5
$lang_admin_php['enable_help_description'] = 'hjälp delvis tillgängligt endast på engelska'; // cpg1.5
$lang_admin_php['clickable_keyword_search'] = 'Aktivera klickbara nyckelord vid sökning'; // cpg1.5
$lang_admin_php['keyword_separator'] = 'Nyckelordsavgränsare'; // cpg1.5
$lang_admin_php['keyword_convert'] = 'Konvertera nyckelordsavgränsare'; // cpg1.5
$lang_admin_php['enable_plugins'] = 'Aktivera insticksmoduler'; // cpg1.5
$lang_admin_php['purge_expired_bans'] = 'Rensa bort förfallna blockeringar automatiskt'; // cpg1.5
$lang_admin_php['browse_batch_add'] = 'Bläddringsbart batchuppladdningsgränssnitt'; // cpg1.5
$lang_admin_php['batch_proc_limit'] = 'Process-samtidighet för batch-uppladdningsgränssnitt'; // cpg1.5
$lang_admin_php['display_thumbs_batch_add'] = 'Visa förhandsvisning av miniatyrbilder vid batch-add interface'; // cpg1.5
$lang_admin_php['lang'] = 'Standardspråk'; // cpg1.5
$lang_admin_php['language_autodetect'] = 'Identifiera språk automatiskt'; // cpg1.5
$lang_admin_php['charset'] = 'Teckenkodning'; // cpg1.5
// 'previous_next_tab'] = 'Visa föregående/nästa på sidor med flikar'; // cpg1.5
$lang_admin_php['theme'] = 'Tema'; // cpg1.5
$lang_admin_php['custom_lnk_name'] = 'Anpassningsmeny länk namn'; // cpg1.5
$lang_admin_php['custom_lnk_url'] = 'Anpassningsmeny länk URL'; // cpg1.5
$lang_admin_php['enable_menu_icons'] = 'Aktivera menyikoner'; // cpg1.5
$lang_admin_php['show_bbcode_help'] = 'Visa BBCode hjälp'; // cpg1.5
$lang_admin_php['vanity_block'] = 'Visa vanity block på teman som är definierade som XHTML eller CSS kompatibla'; // cpg1.5
$lang_admin_php['highlight_multiple'] = 'För att markera flera rader, håll nere [Ctrl]-tangenten'; // cpg1.5
$lang_admin_php['custom_header_path'] = 'Sökväg till anpassat sidohuvud'; // cpg1.5
$lang_admin_php['custom_footer_path'] = 'Sökväg till anpassad sidfot'; // cpg1.5
$lang_admin_php['browse_by_date'] = 'Aktivera bläddring i datumordning'; // cpg1.5
$lang_admin_php['display_redirection_page'] = 'Visa omdirigeringssidor'; // cpg1.5
$lang_admin_php['display_xp_publish_link'] = 'Sponsra användningen av XP Publisher genom att visa motsvarande länk på uppladdningssidan'; // cpg1.5
$lang_admin_php['main_table_width'] = 'Huvudtabellens bredd'; // cpg1.5
$lang_admin_php['pixels_or_percent'] = 'pixlar eller %'; // cpg1.5
$lang_admin_php['subcat_level'] = 'Antal kategorinivåer att visa'; // cpg1.5
$lang_admin_php['albums_per_page'] = 'Antal album att visa'; // cpg1.5
$lang_admin_php['album_list_cols'] = 'Antal kolumner för albumlistan'; // cpg1.5
$lang_admin_php['alb_list_thumb_size'] = 'Storlek på albumens miniatyrbilder'; // cpg1.5
$lang_admin_php['main_page_layout'] = 'Huvudsidans innehåll'; // cpg1.5
$lang_admin_php['first_level'] = 'Visa första-nivå albums miniatyrbilder i kategorier'; // cpg1.5
$lang_admin_php['categories_alpha_sort'] = 'Sortera kategorier alfabetiskt'; // cpg1.5
$lang_admin_php['categories_alpha_sort_details'] = '(istället för anpassad sorteringsordning)'; // cpg1.5
$lang_admin_php['link_pic_count'] = 'Visa antal länkade filer'; // cpg1.5
$lang_admin_php['thumbcols'] = 'Antal kolumner på miniatyrbildssidan'; // cpg1.5
$lang_admin_php['thumbrows'] = 'Antal rader på miniatyrbildssidan'; // cpg1.5
$lang_admin_php['max_tabs'] = 'Maximalt antal flikar att visa'; // cpg1.5
$lang_admin_php['tabs_dropdown'] = 'Visa nedrullningslista av alla sidor vid sidan av flikarna'; // cpg1.5
$lang_admin_php['caption_in_thumbview'] = 'Visa bildtext (utöver titel) under miniatyrbilden'; // cpg1.5
$lang_admin_php['views_in_thumbview'] = 'Visa antal visningar under miniatyrbilden'; // cpg1.5
$lang_admin_php['display_comment_count'] = 'Visa antal kommentarer under miniatyrbilden'; // cpg1.5
$lang_admin_php['display_uploader'] = 'Visa namn på den som laddade upp filen under miniatyrbilden'; // cpg1.5
// 'display_admin_uploader'] = 'Visa namn på administratörer som laddade upp filen under miniatyrbilden'; // cpg1.5
$lang_admin_php['display_filename'] = 'Visa filnamn under miniatyrbilden'; // cpg1.5
$lang_admin_php['display_thumbnail_rating'] = 'Visa betyg under miniatyrbilden'; // cpg1.5
$lang_admin_php['alb_desc_thumb'] = 'Visa albumbeskrivning'; // cpg1.5
$lang_admin_php['thumbnail_to_fullsize'] = 'Gå direkt från miniatyrbild till bild i fullstorlek'; // cpg1.5
$lang_admin_php['default_sort_order'] = 'Standardsorteringsordning för filer'; // cpg1.5
$lang_admin_php['min_votes_for_rating'] = 'Minimum antal röster för att fil ska visas på topplistan'; // cpg1.5
$lang_admin_php['picture_table_width'] = 'Bredd på tabellen för filvisning'; // cpg1.5
$lang_admin_php['display_pic_info'] = 'Filinformation är synlig som standard'; // cpg1.5
$lang_admin_php['picinfo_movie_download_link'] = 'Visa nedladdningsbar länk för filmer i fältet för filinformation'; // cpg1.5
$lang_admin_php['max_img_desc_length'] = 'Max längd för bildbeskrivning'; // cpg1.5
$lang_admin_php['max_com_wlength'] = 'Max antal tecken i ett ord'; // cpg1.5
$lang_admin_php['display_film_strip'] = 'Visa filmremsa'; // cpg1.5
$lang_admin_php['max_film_strip_items'] = 'Antal objekt i en filmremsa'; // cpg1.5
$lang_admin_php['slideshow_interval'] = 'Bildspelsintervall'; // cpg1.5
$lang_admin_php['milliseconds'] = 'millisekunder'; // cpg1.5
$lang_admin_php['slideshow_interval_detail'] = '1 sekund = 1000 millisekunder'; // cpg1.5
$lang_admin_php['slideshow_hits'] = 'Räkna träffar i bildspel'; // cpg1.5
$lang_admin_php['ecard_flash'] = 'Tillåt Flash i E-kort'; // cpg1.5
$lang_admin_php['not_recommended'] = 'rekommenderas inte'; // cpg1.5
$lang_admin_php['recommended'] = 'rekommenderas'; // cpg1.5
$lang_admin_php['transparent_overlay'] = 'Lägg till en transparent överlappning för att minimera bildstöld'; // cpg1.5
$lang_admin_php['old_style_rating'] = 'Gå tillbaka till tidigare betygssystem'; // cpg1.5
$lang_admin_php['old_style_rating_extra'] = 'Detta kommer att inaktivera \'Antal betygsstjärnor att använda\'.'; // cpg1.5
$lang_admin_php['rating_stars_amount'] = 'Antal betygsstjärnor att använda vid röstning'; // cpg1.5
$lang_admin_php['rate_own_files'] = 'Användare kan rösta på egna filer'; // cpg1.5
$lang_admin_php['filter_bad_words'] = 'Filtrera fula ord i kommentarer'; // cpg1.5
$lang_admin_php['enable_smilies'] = 'Tillåt smileys i kommentarer'; // cpg1.5
$lang_admin_php['disable_comment_flood_protect'] = 'Tillåt flera på varandra följande kommentarer från en och samma användare'; // cpg1.5
$lang_admin_php['disable_comment_flood_protect_details'] = '(inaktivera översvämningsskydd)'; // cpg1.5
$lang_admin_php['max_com_lines'] = 'Max antal rader i en kommentar'; // cpg1.5
$lang_admin_php['max_com_size'] = 'Maximal längd på en kommentar'; // cpg1.5
$lang_admin_php['email_comment_notification'] = 'Underrätta administratör om kommentarer via e-post'; // cpg1.5
$lang_admin_php['comments_sort_descending'] = 'Sorteringsordning på kommentarer'; // cpg1.5
$lang_admin_php['comments_per_page'] = 'Kommentarer per sida'; // cpg1.5
$lang_admin_php['comments_anon_pfx'] = 'Prefix för författare till anonyma kommentarer'; // cpg1.5
$lang_admin_php['comment_approval'] = 'Kommentarer kräver godkännande'; // cpg1.5
$lang_admin_php['display_comment_approval_only'] = 'Visa endast kommentarer som kräver godkännande på &quot;Granska Kommentarer&quot; sidan'; // cpg1.5
$lang_admin_php['comment_placeholder'] = 'Visa platshållartext till slutanvändare för kommentarer som väntar på administratörs godkännande'; // cpg1.5
$lang_admin_php['comment_user_edit'] = 'Tillåt användare att redigera sina kommentarer'; // cpg1.5
$lang_admin_php['comment_captcha'] = 'Visa Captcha (Visuell Bekräftelse) för att addera kommentarer'; // cpg1.5
$lang_admin_php['comment_akismet_enable'] = 'Akismet Alternativ'; // cpg1.5
$lang_admin_php['comment_akismet_enable_description'] = 'Vad ska hända om Akismet avvisar en kommentar som spam?'; // cpg1.5
$lang_admin_php['comment_akismet_applicable_only'] = 'Alternativet ska endast tillämpas om Akismet har blivit aktiverat med hjälp av en giltig API nyckel'; // cpg1.5
$lang_admin_php['comment_akismet_enable_approval'] = 'Tillåt kommentarer som inte klarar Akismet, men markera dem som icke godkända'; // cpg1.5
$lang_admin_php['comment_akismet_drop_tell'] = 'Släpp kommentarer som inte valideras och underrätta författaren att den avvisades.'; // cpg1.5
$lang_admin_php['comment_akismet_drop_lie'] = 'Släpp kommentar som inte valideras, men underrätta författaren (spammaren) att den har lagts till'; // cpg1.5
$lang_admin_php['comment_akismet_api_key'] = 'Akismet API nyckel'; // cpg1.5
$lang_admin_php['comment_akismet_api_key_description'] = 'Lämna tomt för att inaktivera Akismet'; // cpg1.5
$lang_admin_php['comment_akismet_group'] = 'Tillämpa Akismet för kommentarer gjorda av'; // cpg1.5
$lang_admin_php['comment_promote_registration'] = 'Be gäster att logga in för att kommentera'; // cpg1.5
$lang_admin_php['thumb_width'] = 'Max dimension på en miniatyrbild (bredd, om du använder "exakt" i "Använd dimension")'; // cpg1.5
$lang_admin_php['thumb_use'] = 'Använd dimension'; // cpg1.5
$lang_admin_php['thumb_use_detail'] = '(bredd eller höjd eller maxutseende för en miniatyrbild)'; // cpg1.5
$lang_admin_php['thumb_height'] = 'Höjd på en miniatyrbild'; // cpg1.5
$lang_admin_php['thumb_height_detail'] = '(tillämpas bara om du använder &quot;exakt&quot; i &quot;Använd dimension&quot;)'; // cpg1.5
$lang_admin_php['movie_audio_document'] = 'film, ljud, dokument'; // cpg1.5
$lang_admin_php['thumb_pfx'] = 'Prefix för miniatyrbild'; // cpg1.5
$lang_admin_php['enable_unsharp'] = 'Miniatyrbildskärpa: aktivera Oskarp Mask'; // cpg1.5
$lang_admin_php['unsharp_amount'] = 'Miniatyrbildskärpa mängd'; // cpg1.5
$lang_admin_php['unsharp_radius'] = 'Miniatyrbildskärpa radie'; // cpg1.5
$lang_admin_php['unsharp_threshold'] = 'Miniatyrbildskärpa tröskelvärde'; // cpg1.5
$lang_admin_php['jpeg_qual'] = 'Kvalitet för JPEG filer'; // cpg1.5
$lang_admin_php['make_intermediate'] = 'Skapa medelstora bilder'; // cpg1.5
$lang_admin_php['picture_use'] = 'Använd dimension'; // cpg1.5
$lang_admin_php['picture_use_detail'] = '(bredd eller höjd eller maxutseende för en medelstor bild)'; // cpg1.5
$lang_admin_php['picture_use_thumb'] = 'Lika som miniatyrbild'; // cpg1.5
$lang_admin_php['picture_width'] = 'Max bredd eller höjd för en medelstor bild'; // cpg1.5
$lang_admin_php['max_upl_size'] = 'Max storlek för uppladdade filer'; // cpg1.5
$lang_admin_php['kilobytes'] = 'KB'; // cpg1.5
$lang_admin_php['pixels'] = 'pixlar'; // cpg1.5
$lang_admin_php['max_upl_width_height'] = 'Max bredd eller höjd för uppladdade bilder'; // cpg1.5
$lang_admin_php['auto_resize'] = 'Skala automatiskt bilder som är större än max bredd eller höjd'; // cpg1.5
$lang_admin_php['fullsize_padding_x'] = 'Horisontell utfyllnad till pop-up i fullstorlek'; // cpg1.5
$lang_admin_php['fullsize_padding_y'] = 'Vertikal utfyllnad till pop-up i fullstorlek'; // cpg1.5
$lang_admin_php['allow_private_albums'] = 'Album kan vara privata'; // cpg1.5
$lang_admin_php['allow_private_albums_note'] = '(Notera: om du ändrar från \'ja\' till \'nej\' kommer alla nuvarande privata album att bli synliga)'; // cpg1.5
$lang_admin_php['show_private'] = 'Visa ikon för privata album för användare som inte är inloggad'; // cpg1.5
$lang_admin_php['forbiden_fname_char'] = 'Tecken förbjudna i filnamn'; // cpg1.5
$lang_admin_php['silly_safe_mode'] = 'Aktivera &quot;silly safe mode&quot;'; // cpg1.5
$lang_admin_php['allowed_img_types'] = 'Tillåtna bildtyper'; // cpg1.5
$lang_admin_php['allowed_mov_types'] = 'Tillåtna filmtyper'; // cpg1.5
$lang_admin_php['media_autostart'] = 'Filmuppspelning autostart'; // cpg1.5
$lang_admin_php['allowed_snd_types'] = 'Tillåtna ljudtyper'; // cpg1.5
$lang_admin_php['allowed_doc_types'] = 'Tillåtna dokumenttyper'; // cpg1.5
$lang_admin_php['thumb_method'] = 'Metod för att Skala bilder'; // cpg1.5
$lang_admin_php['impath'] = 'Sökväg till ImageMagick \'konverterings\' verktyg'; // cpg1.5
$lang_admin_php['impath_example'] = '(t.ex. /usr/bin/)'; // cpg1.5
$lang_admin_php['im_options'] = 'Ytterligare kommandorader för ImageMagick'; // cpg1.5
$lang_admin_php['read_exif_data'] = 'Läs EXIF data från JPEG filer'; // cpg1.5
$lang_admin_php['read_iptc_data'] = 'Läs IPTC data från JPEG filer'; // cpg1.5
$lang_admin_php['fullpath'] = 'Albumkatalogen'; // cpg1.5
$lang_admin_php['userpics'] = 'Katalogen för användarfiler'; // cpg1.5
$lang_admin_php['normal_pfx'] = 'Prefix för medelstora bilder'; // cpg1.5
$lang_admin_php['default_dir_mode'] = 'Standardläge för kataloger'; // cpg1.5
$lang_admin_php['default_file_mode'] = 'Standardläge för filer'; // cpg1.5
$lang_admin_php['enable_watermark'] = 'Vattenstämpelbilder'; // cpg1.5
$lang_admin_php['enable_thumb_watermark'] = 'Vattenstämpel anpassade miniatyrbilder'; // cpg1.5
$lang_admin_php['where_put_watermark'] = 'Placering av vattenstämpel'; // cpg1.5
$lang_admin_php['which_files_to_watermark'] = 'Vilka filer att vattenstämpla'; // cpg1.5
$lang_admin_php['watermark_file'] = 'Vilken fil att använda som vattenstämpel'; // cpg1.5
$lang_admin_php['watermark_transparency'] = 'Transparens för en hel bild'; // cpg1.5
$lang_admin_php['zero_2_hundred'] = '0-100'; // cpg1.5
$lang_admin_php['reduce_watermark'] = 'Storleksminska vattenstämpel om bildens bredd är mindre än angivet värde. Detta är 100% referenspunkt. Storleksförändring av vattenstämpeln är linjär (0 för att inaktivera)'; // cpg1.5
$lang_admin_php['watermark_transparency_featherx'] = 'Sätt färg transparent x'; // cpg1.5
$lang_admin_php['watermark_transparency_feathery'] = 'Sätt färg transparent y'; // cpg1.5
$lang_admin_php['gd2_only'] = 'GD2 endast'; // cpg1.5
$lang_admin_php['allow_user_registration'] = 'Tillåt ny användarregistrering'; // cpg1.5
$lang_admin_php['global_registration_pw'] = 'Globalt lösenord för registrering'; // cpg1.5
$lang_admin_php['user_registration_disclaimer'] = 'Visa ansvarsfriskrivning vid användarregistrering'; // cpg1.5
$lang_admin_php['registration_captcha'] = 'Visa Captcha (Visuell bekräftelse) på registreringssidan'; // cpg1.5
$lang_admin_php['reg_requires_valid_email'] = 'Användarregistrering kräver e-postverifiering'; // cpg1.5
$lang_admin_php['reg_notify_admin_email'] = 'Underrätta administratör om registrering via e-post'; // cpg1.5
$lang_admin_php['admin_activation'] = 'Administratörsaktivering av registreringar'; // cpg1.5
$lang_admin_php['personal_album_on_registration'] = 'Skapa användaralbum i personligt galleri vid registrering'; // cpg1.5
$lang_admin_php['allow_unlogged_access'] = 'Tillåt tillträde för ej inloggade användare (gäst eller anonym) )'; // cpg1.5
$lang_admin_php['thumbnail_intermediate_full'] = 'miniatyr-, medel- eller fullstor bild'; // cpg1.5
$lang_admin_php['thumbnail_intermediate'] = 'miniatyr och medelstor bild'; // cpg1.5
$lang_admin_php['thumbnail_only'] = 'miniatyrbild endast'; // cpg1.5
$lang_admin_php['upload_mechanism'] = 'Standard uppladdningsmetod'; // cpg1.5
$lang_admin_php['upload_swf'] = 'avancerat - flera files, Flash-stödd (rekommenderas)'; // cpg1.5
$lang_admin_php['upload_single'] = 'enkelt - en fil åt gången'; // cpg1.5
$lang_admin_php['allow_user_upload_choice'] = 'Tillåt användare att välja uppladdningsmetod'; // cpg1.5
$lang_admin_php['allow_duplicate_emails_addr'] = 'Tillåt två användare att ha samma e-postadress'; // cpg1.5
$lang_admin_php['upl_notify_admin_email'] = 'Underrätta administratör om användaruppladdningar som väntar på godkännande'; // cpg1.5
$lang_admin_php['allow_memberlist'] = 'Tillåt inloggade användare att se medlemslistan'; // cpg1.5
$lang_admin_php['allow_email_change'] = 'Tillåt användare att ändra e-postadress i sin profil'; // cpg1.5
$lang_admin_php['allow_user_account_delete'] = 'Tillåt användare att ta bort sitt eget konto'; // cpg1.5
$lang_admin_php['users_can_edit_pics'] = 'Tillåt användare att behålla kontrollen över sina bilder i offentliga gallerier'; // cpg1.5
$lang_admin_php['allow_user_move_album'] = 'Tillåt användare att flytta sina album från/till tillåtna kategorier'; // cpg1.5
$lang_admin_php['allow_user_album_keyword'] = 'Tillåt användare att sätta nyckelord i album'; // cpg1.5
$lang_admin_php['allow_user_edit_after_cat_close'] = 'Tillåt användare att redigera sina album när kategorin är låst'; // cpg1.5
$lang_admin_php['login_method_username'] = 'Användarnamn'; // cpg1.5
$lang_admin_php['login_method_email'] = 'E-postadress'; // cpg1.5
$lang_admin_php['login_method_both'] = 'Båda'; // cpg1.5
$lang_admin_php['login_method'] = 'Hur vill du att användarna ska kunna logga in'; // cpg1.5
$lang_admin_php['login_threshold'] = 'Antal misslyckade inloggningsförsök innan användaren blir tillfälligt blockerad'; // cpg1.5
$lang_admin_php['login_threshold_detail'] = '(för att försvåra försök till intrång)'; // cpg1.5
$lang_admin_php['login_expiry'] = 'Längd på en tillfällig blockering efter misslyckade inloggningsförsök'; // cpg1.5
$lang_admin_php['minutes'] = 'minuter'; // cpg1.5
$lang_admin_php['report_post'] = 'Aktivera rapport till Administratör'; // cpg1.5
$lang_admin_php['user_profile1_name'] = 'Profil 1 namn'; // cpg1.5
$lang_admin_php['user_profile2_name'] = 'Profil 2 namn'; // cpg1.5
$lang_admin_php['user_profile3_name'] = 'Profil 3 namn'; // cpg1.5
$lang_admin_php['user_profile4_name'] = 'Profil 4 namn'; // cpg1.5
$lang_admin_php['user_profile5_name'] = 'Profil 5 namn'; // cpg1.5
$lang_admin_php['user_profile6_name'] = 'Profil 6 namn'; // cpg1.5
$lang_admin_php['user_field1_name'] = 'Fält 1 namn'; // cpg1.5
$lang_admin_php['user_field2_name'] = 'Fält 2 namn'; // cpg1.5
$lang_admin_php['user_field3_name'] = 'Fält 3 namn'; // cpg1.5
$lang_admin_php['user_field4_name'] = 'Fält 4 namn'; // cpg1.5
$lang_admin_php['cookie_name'] = 'Cookie namn'; // cpg1.5
$lang_admin_php['cookie_path'] = 'Cookie sökväg'; // cpg1.5
$lang_admin_php['smtp_host'] = 'SMTP Host (sendmail används om du lämnar tomt)'; // cpg1.5
$lang_admin_php['smtp_username'] = 'SMTP Användarnamn'; // cpg1.5
$lang_admin_php['smtp_password'] = 'SMTP Lösenord'; // cpg1.5
$lang_admin_php['log_mode'] = 'Loggningsläge'; // cpg1.5
$lang_admin_php['log_mode_details'] = 'Alla loggfiler är skrivna på engelska.'; // cpg1.5
$lang_admin_php['log_ecards'] = 'Logga e-kort'; // cpg1.5
$lang_admin_php['log_ecards_detail'] = 'Notera: loggning kan ha legala efterverkningar. Användaren bör informeras vid registrering att e-kort loggas. Det rekommenderas också att informera om integritetspolicy på en separat sida.'; // cpg1.5
$lang_admin_php['vote_details'] = 'Behåll detaljerad röstningsstatistik'; // cpg1.5
$lang_admin_php['hit_details'] = 'Behåll detaljerad träffstatistik'; // cpg1.5
$lang_admin_php['display_stats_on_index'] = 'Visa statistik på första sidan'; // cpg1.5
$lang_admin_php['count_file_hits'] = 'Räkna filvisningar'; // cpg1.5
$lang_admin_php['count_album_hits'] = 'Räkna albumvisningar'; // cpg1.5
$lang_admin_php['count_admin_hits'] = 'Räkna administratörsvisningar'; // cpg1.5
$lang_admin_php['debug_mode'] = 'Aktivera felsökningsläge (debug)'; // cpg1.5
$lang_admin_php['debug_notice'] = 'Visa notiser i felsökningsläge'; // cpg1.5
$lang_admin_php['offline'] = 'Galleriet är tillfälligt stängt'; // cpg1.5
$lang_admin_php['display_coppermine_news'] = 'Visa nyheter från coppermine-gallery.net'; // cpg1.5
$lang_admin_php['display_coppermine_detail'] = 'visas endast för administratören'; // cpg1.5
$lang_admin_php['config_setting_invalid'] = 'Det värde du angav för &laquo;%s&raquo; är ogiltigt, var vänlig kontrollera.'; // cpg1.5
$lang_admin_php['config_setting_ok'] = 'Dina inställningar för &laquo;%s&raquo; har sparats.'; // cpg1.5
$lang_admin_php['contact_form_settings'] = 'Kontaktformulär inställningar'; // cpg1.5
$lang_admin_php['contact_form_guest_enable'] = 'Visa kontaktformulär för anonyma besökare (gäster)'; // cpg1.5
$lang_admin_php['contact_form_registered_enable'] = 'Visa kontaktformulär för registrerade användare'; // cpg1.5
$lang_admin_php['with_captcha'] = 'med captcha'; // cpg1.5
$lang_admin_php['without_captcha'] = 'utan captcha'; // cpg1.5
$lang_admin_php['optional'] = 'frivillig'; // cpg1.5
$lang_admin_php['mandatory'] = 'obligatorisk'; // cpg1.5
$lang_admin_php['contact_form_guest_name_field'] = 'Visa fältet Avsändarens namn för gäster'; // cpg1.5
$lang_admin_php['contact_form_guest_email_field'] = 'Visa fältet Avsändarens e-postadress för gäster'; // cpg1.5
$lang_admin_php['contact_form_subject_field'] = 'Visa ämnesfält'; // cpg1.5
$lang_admin_php['contact_form_subject_content'] = 'Ämnesrad för e-post genereras av kontaktformuläret'; // cpg1.5
$lang_admin_php['contact_form_sender_email'] = 'Använd avsändarens e-postadress som &quot;från&quot; adress'; // cpg1.5
$lang_admin_php['allow_no_link'] = 'tillåt, men visa inte länk'; // cpg1.5
$lang_admin_php['allow_show_link'] = 'tillåt och sponsra genom att via länk'; // cpg1.5
$lang_admin_php['display_sidebar_user'] = 'Sidopanel för registrerade användare'; // cpg1.5
$lang_admin_php['display_sidebar_guest'] = 'Sidopanel för gäster'; // cpg1.5
$lang_admin_php['do_not_change'] = 'Ändra inte det här om du inte VERKLIGEN vet vad du gör!'; // cpg1.5
$lang_admin_php['reset_to_default'] = 'Återställ till standard'; // cpg1.5
$lang_admin_php['no_change_needed'] = 'Ingen ändring behövs, konfigureringen är redan satt till standard'; // cpg1.5
$lang_admin_php['enabled'] = 'aktiverad'; // cpg1.5
$lang_admin_php['disabled'] = 'inaktiverad'; // cpg1.5
$lang_admin_php['none'] = 'inga'; // cpg1.5
$lang_admin_php['warning_change'] = 'Om du ändrar dessa inställningar påverkar det bara filer som laddas upp från och med nu. Det är tillrådigt att inte ändra dessa inställningar om det redan finns filer i galleriet. Du kan emellertid tillämpa dessa ändringar på filer som redan finns med hjälp av &quot;<a href="util.php">administratörsverktyget</a> (ändra bildstorlek)&quot; verktyget från administratörsmenyn.'; // cpg1.5
$lang_admin_php['warning_exist'] = 'Dessa inställningar får inte ändras om du redan har filer i din databas.'; // cpg1.5
$lang_admin_php['warning_dont_submit'] = 'Om du inte är säker på följderna av att ändra på dessa inställningar, så skicka inte formuläret. Läs dokumentationen först.'; // cpg1.5 // js-alert
$lang_admin_php['menu_only'] = 'meny endast'; // cpg1.5
$lang_admin_php['everywhere'] = 'överallt'; // cpg1.5
$lang_admin_php['manage_languages'] = 'Hantera språk'; // cpg1.5
$lang_admin_php['form_token_lifetime'] = 'Formulärsymbolens livstid'; // cpg1.5
$lang_admin_php['seconds'] = 'Sekunder'; // cpg1.5
$lang_admin_php['display_reset_boxes_in_config'] = 'Visa återställningsruta i konfigurationen'; // cpg1.5
$lang_admin_php['upd_not_needed'] = 'Uppdatering behövs inte.'; // cpg 1.5
}


// ------------------------------------------------------------------------- //
// File db_ecard.php
// ------------------------------------------------------------------------- //
if (defined('DB_ECARD_PHP')) {
$lang_db_ecard_php['title'] = 'Skickat e-kort';
$lang_db_ecard_php['ecard_sender'] = 'Avsändare';
$lang_db_ecard_php['ecard_recipient'] = 'Mottagare';
$lang_db_ecard_php['ecard_date'] = 'Datum';
$lang_db_ecard_php['ecard_display'] = 'Visa e-kort';
$lang_db_ecard_php['ecard_name'] = 'Namn';
$lang_db_ecard_php['ecard_email'] = 'E-post';
$lang_db_ecard_php['ecard_ip'] = 'IP';
$lang_db_ecard_php['ecard_ascending'] = 'stigande';
$lang_db_ecard_php['ecard_descending'] = 'fallande';
$lang_db_ecard_php['ecard_sorted'] = 'Sorterad';
$lang_db_ecard_php['ecard_by_date'] = 'efter datum';
$lang_db_ecard_php['ecard_by_sender_name'] = 'efter avsändarens namn';
$lang_db_ecard_php['ecard_by_sender_email'] = 'efter avsändarens e-post';
$lang_db_ecard_php['ecard_by_sender_ip'] = 'efter avsändarens IP adress';
$lang_db_ecard_php['ecard_by_recipient_name'] = 'efter mottagarens namn';
$lang_db_ecard_php['ecard_by_recipient_email'] = 'efter mottagarens e-post';
$lang_db_ecard_php['ecard_number'] = 'visa posterna %s till %s av %s';
$lang_db_ecard_php['ecard_goto_page'] = 'gå till sida';
$lang_db_ecard_php['ecard_records_per_page'] = 'Poster per sida';
$lang_db_ecard_php['check_all'] = 'Markera alla';
$lang_db_ecard_php['uncheck_all'] = 'Avmarkera alla';
$lang_db_ecard_php['ecards_delete_selected'] = 'Radera markerade e-kort';
$lang_db_ecard_php['ecards_delete_confirm'] = 'Är du säker på att du vill radera posterna? Markera i kryssrutan!';
$lang_db_ecard_php['ecards_delete_sure'] = 'Jag är säker';
$lang_db_ecard_php['invalid_data'] = 'E-kortet som du försöker läsa har blivit skadat av din e-postklient. Klicka på länken för att slutföra.';
}

// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //
if (defined('DB_INPUT_PHP')) {
$lang_db_input_php['empty_name_or_com'] = 'Du måste ange ditt namn och en kommentar';
$lang_db_input_php['com_added'] = 'Din kommentar har lagts till'; // cpg1.5
$lang_db_input_php['alb_need_title'] = 'du måste ange en titel för albumet!';
$lang_db_input_php['no_udp_needed'] = 'Ingen uppdatering nödvändig.';
$lang_db_input_php['alb_updated'] = 'Albumet uppdaterades';
$lang_db_input_php['unknown_album'] = 'Valt album finns inte eller så har du inte behörighet att addera till det.';
$lang_db_input_php['no_pic_uploaded'] = 'Ingen fil laddades upp!<br />Om du verkligen valde en fil att ladda upp, kontrollera att servern tillåter filuppladdning...';
$lang_db_input_php['err_mkdir'] = 'Kunde inte skapa mappen %s!';
$lang_db_input_php['dest_dir_ro'] = 'Destinationskatalogen %s är inte skrivbart!';
$lang_db_input_php['err_move'] = 'Omöjligt att flytta %s till %s!';
$lang_db_input_php['err_fsize_too_large'] = 'Filen du försöker ladda upp är för stor (maximalt tillåtet är %s x %s)!';
$lang_db_input_php['err_imgsize_too_large'] = 'Filen du har laddat upp är för stor (maximalt tillåtet är %s KB)!';
$lang_db_input_php['err_invalid_img'] = 'Filen du har laddat upp är inte en giltig bild!';
$lang_db_input_php['allowed_img_types'] = 'Du kan bara ladda upp %s bilder.';
$lang_db_input_php['err_insert_pic'] = 'Filen \'%s\' kan inte läggas till i albumet ';
$lang_db_input_php['upload_success'] = 'Du har lyckats ladda upp filen.<br />Den kommer att visas efter administratören godkänt den.';
$lang_db_input_php['notify_admin_email_subject'] = '%s - Underrättelse om uppladdning';
$lang_db_input_php['notify_admin_email_body'] = 'En bild som kräver ditt godkännande har laddats upp av %s. Besök %s';
$lang_db_input_php['info'] = 'Information';
$lang_db_input_php['com_updated'] = 'Uppdaterad kommentar'; // cpg1.5
$lang_db_input_php['alb_updated'] = 'Uppdaterat album';
$lang_db_input_php['err_comment_empty'] = 'Din kommentar är tom!';
$lang_db_input_php['err_invalid_fext'] = 'Bara filer med följande ändelser är tillåtna:'; // js-alert
$lang_db_input_php['no_flood'] = 'Du är tyvärr redan författare av den senast kommentaren som gjorts för den här filen<br />Redigera den kommentaren om du vill göra ändringar';
$lang_db_input_php['redirect_msg'] = 'Du omdirigeras.<br /><br />Klicka på \'FORTSÄTT\' om inte sidan visas automatiskt';
$lang_db_input_php['upl_success'] = 'Din fil har lagts till';
$lang_db_input_php['email_comment_subject'] = 'Kommentar gjort på Coppermine Photo Gallery';
$lang_db_input_php['email_comment_body'] = 'Någon har lagt till en kommentar till ditt galleri. Läs det på';
$lang_db_input_php['album_not_selected'] = 'Album ej valt';
$lang_db_input_php['com_author_error'] = 'En registrerad användare har redan detta namn. Logga in eller använd ett annat';
}

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //
if (defined('DELETE_PHP')) {
$lang_delete_php['orig_pic'] = 'originalbild'; // cpg1.5
$lang_delete_php['fs_pic'] = 'fullstorleksbild';
$lang_delete_php['del_success'] = 'har raderats';
$lang_delete_php['ns_pic'] = 'normalstor bild';
$lang_delete_php['err_del'] = 'kan inte raderas';
$lang_delete_php['thumb_pic'] = 'miniatyrbild';
$lang_delete_php['comment'] = 'kommentar';
$lang_delete_php['im_in_alb'] = 'bilder i album';
$lang_delete_php['alb_del_success'] = 'Album &laquo;%s&raquo; raderad';
$lang_delete_php['alb_mgr'] = 'Hantera Album';
$lang_delete_php['err_invalid_data'] = 'Ogiltigt data mottaget i \'%s\'';
$lang_delete_php['create_alb'] = 'Skapar album \'%s\'';
$lang_delete_php['update_alb'] = 'Uppdaterar album \'%s\' med titel \'%s\' och index \'%s\'';
$lang_delete_php['del_pic'] = 'Radera fil';
$lang_delete_php['del_alb'] = 'Radera album';
$lang_delete_php['del_user'] = 'Radera användare';
$lang_delete_php['err_unknown_user'] = 'Vald användare finns inte!';
$lang_delete_php['err_empty_groups'] = 'Grupptabellen finns inte eller är tom!';
$lang_delete_php['comment_deleted'] = 'Kommentaren har raderats';
$lang_delete_php['npic'] = 'Bild';
$lang_delete_php['pic_mgr'] = 'Hantera Bild';
$lang_delete_php['update_pic'] = 'Uppdaterar bild \'%s\' med filnamn \'%s\' och index \'%s\'';
$lang_delete_php['username'] = 'Användarnamn';
$lang_delete_php['anonymized_comments'] = '%s kommentar(er) anonymiserade';
$lang_delete_php['anonymized_uploads'] = '%s offentliga uppladdning(ar) anonymiserade';
$lang_delete_php['deleted_comments'] = '%s kommentar(er) raderade';
$lang_delete_php['deleted_uploads'] = '%s offentliga uppladdning(ar) raderade';
$lang_delete_php['user_deleted'] = 'användare %s raderad';
$lang_delete_php['activate_user'] = 'Aktivera användare';
$lang_delete_php['user_already_active'] = 'Kontot är redan aktivt';
$lang_delete_php['activated'] = 'Aktiverad';
$lang_delete_php['deactivate_user'] = 'Inaktivera användare';
$lang_delete_php['user_already_inactive'] = 'Kontot är redan inaktivt';
$lang_delete_php['deactivated'] = 'Inaktiverad';
$lang_delete_php['reset_password'] = 'Nollställ lösenord';
$lang_delete_php['password_reset'] = 'Lösenordet nollställt till %s';
$lang_delete_php['change_group'] = 'Ändra primärgrupp';
$lang_delete_php['change_group_to_group'] = 'Ändrar från %s till %s';
$lang_delete_php['add_group'] = 'Lägg till sekundär grupp';
$lang_delete_php['add_group_to_group'] = 'Lägger till användare %s till gruppen %s. Användaren tillhör nu användargrupp %s primärt och %s sekundärt.';
$lang_delete_php['status'] = 'Status';
$lang_delete_php['updating_album'] = 'Uppdatera album '; // cpg1.5
$lang_delete_php['moved_picture_to_position'] = 'Flyttat bild %s till position %s'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File displayimage.php
// ------------------------------------------------------------------------- //
if (defined('DISPLAYIMAGE_PHP')){
$lang_display_image_php['confirm_del'] = 'Är du säker på att du vill RADERA denna fil?\\nKommentarer kommer också att raderas.'; // js-alert
$lang_display_image_php['del_pic'] = 'Radera denna fil';
$lang_display_image_php['size'] = '%s x %s pixlar';
$lang_display_image_php['views'] = '%s gånger';
$lang_display_image_php['slideshow'] = 'Bildspel';
$lang_display_image_php['stop_slideshow'] = 'Stanna bildspel';
$lang_display_image_php['view_fs'] = 'Klicka på bilden för att se den i fullstorlek';
$lang_display_image_php['edit_pic'] = 'Redigera filinformation';
$lang_display_image_php['crop_pic'] = 'Beskär och rotera';
$lang_display_image_php['set_player'] = 'Ändra spelare';

$lang_picinfo['title'] = 'Filinformation';
$lang_picinfo['Album name'] = 'Albumnamn';
$lang_picinfo['Rating'] = 'Betyg (%s röster)';
$lang_picinfo['Date Added'] = 'Tillagd den';
$lang_picinfo['Dimensions'] = 'Dimensioner';
$lang_picinfo['Displayed'] = 'Visad';
$lang_picinfo['URL'] = 'URL';
$lang_picinfo['Make'] = 'Tillverkare';
$lang_picinfo['Model'] = 'Modell';
$lang_picinfo['DateTime'] = 'Datum Tid';
$lang_picinfo['ISOSpeedRatings'] = 'ISO';
$lang_picinfo['MaxApertureValue'] = 'Största bländartal';
$lang_picinfo['FocalLength'] = 'Brännvidd';
$lang_picinfo['Comment'] = 'Kommentar';
$lang_picinfo['addFav'] = 'Lägg till Favoriter';
$lang_picinfo['addFavPhrase'] = 'Favoriter';
$lang_picinfo['remFav'] = 'Ta bort från Favoriter';
$lang_picinfo['iptcTitle'] = 'IPTC Titel';
$lang_picinfo['iptcCopyright'] = 'IPTC Copyright';
$lang_picinfo['iptcKeywords'] = 'IPTC Nyckelord';
$lang_picinfo['iptcCategory'] = 'IPTC Kategori';
$lang_picinfo['iptcSubCategories'] = 'IPTC Underkategori';
$lang_picinfo['ColorSpace'] = 'Färgrymd';
$lang_picinfo['ExposureProgram'] = 'Exponeringsprogram';
$lang_picinfo['Flash'] = 'Blixt';
$lang_picinfo['MeteringMode'] = 'Ljusmätningsmetod';
$lang_picinfo['ExposureTime'] = 'Exponeringstid';
$lang_picinfo['ExposureBiasValue'] = 'Exponeringskompensation';
$lang_picinfo['ImageDescription'] = 'Bildbeskrivning';
$lang_picinfo['Orientation'] = 'Orientering';
$lang_picinfo['xResolution'] = 'X Upplösning';
$lang_picinfo['yResolution'] = 'Y Upplösning';
$lang_picinfo['ResolutionUnit'] = 'Upplösningens måttenhet';
$lang_picinfo['Software'] = 'Mjukvara';
$lang_picinfo['YCbCrPositioning'] = 'YCbCr positionering';
$lang_picinfo['ExifOffset'] = 'EXIF index';
$lang_picinfo['IFD1Offset'] = 'IFD1 index';
$lang_picinfo['FNumber'] = 'Bländartal';
$lang_picinfo['ExifVersion'] = 'EXIF version';
$lang_picinfo['DateTimeOriginal'] = 'Datum och tid original';
$lang_picinfo['DateTimedigitized'] = 'Datum och tid digitaliserad';
$lang_picinfo['ComponentsConfiguration'] = 'Komponentkonfiguration';
$lang_picinfo['CompressedBitsPerPixel'] = 'Bitar per pixel';
$lang_picinfo['LightSource'] = 'Ljuskälla (vitbalans)';
$lang_picinfo['ISOSetting'] = 'ISO';
$lang_picinfo['ColorMode'] = 'Färgläge';
$lang_picinfo['Quality'] = 'Kvalitet';
$lang_picinfo['ImageSharpening'] = 'Bildskärpa';
$lang_picinfo['FocusMode'] = 'Fokuseringsmetod';
$lang_picinfo['FlashSetting'] = 'Blixt';
$lang_picinfo['ISOSelection'] = 'Metod för val av ISO';
$lang_picinfo['ImageAdjustment'] = 'Bildjustering';
$lang_picinfo['Adapter'] = 'Konverter';
$lang_picinfo['ManualFocusDistance'] = 'Manuellt fokusavstånd';
$lang_picinfo['DigitalZoom'] = 'Digital zoomfaktor';
$lang_picinfo['AFFocusPosition'] = 'Fokusposition vid autofokus';
$lang_picinfo['Saturation'] = 'Färgmättnad';
$lang_picinfo['NoiseReduction'] = 'Brusreducering';
$lang_picinfo['FlashPixVersion'] = 'Flash Pix version';
$lang_picinfo['ExifImageWidth'] = 'Bildbredd';
$lang_picinfo['ExifImageHeight'] = 'Bildhöjd';
$lang_picinfo['ExifInteroperabilityOffset'] = 'Index för EXIF kompatibilitetsdata';
$lang_picinfo['FileSource'] = 'Filkälla';
$lang_picinfo['SceneType'] = 'Scentyp';
$lang_picinfo['CustomerRender'] = 'Anpassad bildbearbetning';
$lang_picinfo['ExposureMode'] = 'Exponeringsmetod';
$lang_picinfo['WhiteBalance'] = 'Metod för val av vitbalans';
$lang_picinfo['DigitalZoomRatio'] = 'Digital zoomfaktor';
$lang_picinfo['SceneCaptureMode'] = 'Typ av motiv';
$lang_picinfo['GainControl'] = 'Bildförstärkning';
$lang_picinfo['Contrast'] = 'Kontrast';
$lang_picinfo['Sharpness'] = 'Skärpa';
$lang_picinfo['ManageExifDisplay'] = 'Hantera EXIF visning';
$lang_picinfo['success'] = 'Informationen uppdaterades korrekt.';
$lang_picinfo['show_details'] = 'Visa detaljer'; // cpg1.5
$lang_picinfo['hide_details'] = 'Göm detaljer'; // cpg1.5
$lang_picinfo['download_URL'] = 'Direktlänk';
$lang_picinfo['movie_player'] = 'Spela filen i din standardapplikation';

$lang_display_comments['comment_x_to_y_of_z'] = '%d till %d av %d'; // cpg1.5
$lang_display_comments['page'] = 'Sida'; // cpg1.5
$lang_display_comments['edit_title'] = 'Redigera denna kommentar';
$lang_display_comments['delete_title'] = 'Radera denna kommentar'; // cpg1.5
$lang_display_comments['confirm_delete'] = 'Är du säker på att du vill radera denna kommentar?'; // js-alert
$lang_display_comments['add_your_comment'] = 'Lägg till din kommentar';
$lang_display_comments['name'] = 'Namn';
$lang_display_comments['comment'] = 'Kommentar';
$lang_display_comments['your_name'] = 'Ditt namn';
$lang_display_comments['report_comment_title'] = 'Rapportera denna kommentar till administratören';
$lang_display_comments['pending_approval'] = 'Kommentaren blir synlig efter administratören godkänt den'; // cpg1.5
$lang_display_comments['unapproved_comment'] = 'Avvisad kommentar'; // cpg1.5
$lang_display_comments['pending_approval_message'] = 'Någon har gjort en kommentar här. Den blir synlig efter administratörens godkännande.'; // cpg1.5
$lang_display_comments['approve'] = 'Godkänn kommentar'; // cpg1.5
$lang_display_comments['disapprove'] = 'Markera kommentaren som avvisad'; // cpg1.5
$lang_display_comments['log_in_to_comment'] = 'Anonyma kommentarer är inte tillåtna här. %sLogga in%s för att skriva kommentarer'; // cpg1.5 // do not translate the %s placeholders - they will be used as wrappers for the link (<a>)
$lang_display_comments['default_username_message'] = 'V.g. ange ditt namn för kommentarer'; // cpg1.5
$lang_display_comments['comment_rejected'] = 'Din kommentar har blivit avvisad'; // cpg1.5

$lang_fullsize_popup['click_to_close'] = 'Klicka på bilden för att stänga fönstret';
$lang_fullsize_popup['close_window'] = 'Klicka på fönstret'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP')) {
$lang_ecard_php['title'] = 'Skicka ett e-kort';
$lang_ecard_php['invalid_email'] = 'Varning: ogiltig e-postadress:'; // cpg1.5
$lang_ecard_php['ecard_title'] = 'Ett e-kort från %s till dig';
$lang_ecard_php['error_not_image'] = 'Bara bilder kan skickas som e-kort.'; // cpg1.5
$lang_ecard_php['error_not_image_flash'] = 'Bara bilder och flash-filer kan skickas som e-kort.'; // cpg1.5
$lang_ecard_php['view_ecard'] = 'Alternativ länk om e-kortet inte visas korrekt';
$lang_ecard_php['view_ecard_plaintext'] = 'För att se e-kortet, kopiera och klistra in länken i din webbläsare:';
$lang_ecard_php['view_more_pics'] = 'Visa mer bilder!';
$lang_ecard_php['send_success'] = 'Ditt e-kort skickades';
$lang_ecard_php['send_failed'] = 'Tyvärr kan inte servern skicka ditt e-kort...';
$lang_ecard_php['from'] = 'Från';
$lang_ecard_php['your_name'] = 'Ditt namn';
$lang_ecard_php['your_email'] = 'Din e-postadress';
$lang_ecard_php['to'] = 'Till';
$lang_ecard_php['rcpt_name'] = 'Mottagarens namn';
$lang_ecard_php['rcpt_email'] = 'Mottagarens e-postadress';
$lang_ecard_php['greetings'] = 'Rubrik';
$lang_ecard_php['message'] = 'Meddelande';
$lang_ecard_php['ecards_footer'] = 'Skickad av %s från IP %s den %s (Galleriet tid)';
$lang_ecard_php['preview'] = 'Förhandsvisa e-kortet';
$lang_ecard_php['preview_button'] = 'Förhandsvisa';
$lang_ecard_php['submit_button'] = 'Skicka e-kort';
$lang_ecard_php['preview_view_ecard'] = 'Det här kommer att bli en alternativ länk till e-kortet när det har skapats. Det fungerar inte för förhandsvisning.';
}

// ------------------------------------------------------------------------- //
// File report_file.php
// ------------------------------------------------------------------------- //

if (defined('REPORT_FILE_PHP')) {
$lang_report_php['title'] = 'Rapport till administratören';
$lang_report_php['invalid_email'] = '<strong>Varning</strong> : ogiltig e-postadress!';
$lang_report_php['report_subject'] = 'En rapport från %s på ett galleri %s';
$lang_report_php['view_report'] = 'Alternativ länk om rapporten inte visas korrekt';
$lang_report_php['view_report_plaintext'] = 'För att se rapporten, kopiera och klistra in länken i din webbläsare:';
$lang_report_php['view_more_pics'] = 'Galleri';
$lang_report_php['send_success'] = 'Din rapport skickades';
$lang_report_php['send_failed'] = 'Tyvärr kan inte servern skicka din rapport...';
$lang_report_php['from'] = 'Från';
$lang_report_php['your_name'] = 'Ditt namn';
$lang_report_php['your_email'] = 'Din e-postadress';
$lang_report_php['to'] = 'Till';
$lang_report_php['administrator'] = 'Administratör/Mod';
$lang_report_php['subject'] = 'Ämne';
$lang_report_php['comment_field_name'] = 'Rapporterar kommentar gjord av "%s"';
$lang_report_php['reason'] = 'Anledning';
$lang_report_php['message'] = 'Meddelande';
$lang_report_php['report_footer'] = 'Skickat av %s från IP %s den %s (Galleriets tid)';
$lang_report_php['obscene'] = 'obscen';
$lang_report_php['offensive'] = 'anstötlig';
$lang_report_php['misplaced'] = 'avviker från ämne/felplacerad';
$lang_report_php['missing'] = 'saknas';
$lang_report_php['issue'] = 'fel/kan inte se';
$lang_report_php['other'] = 'annat';
$lang_report_php['refers_to'] = 'Filrapport refererar till';
$lang_report_php['reasons_list_heading'] = 'anledning(ar) för rapportering:';
$lang_report_php['no_reason_given'] = 'ingen anledning angavs';
$lang_report_php['go_comment'] = 'Gå till kommentar';
$lang_report_php['view_comment'] = 'Visa hela rapporten med kommentar';
$lang_report_php['type_file'] = 'fil';
$lang_report_php['type_comment'] = 'kommentar';
$lang_report_php['invalid_data'] = 'Innehållet i rapporten du försöker komma åt har blivit skadad av din e-postklient. Kontrollera att länken är komplett.';
}

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) {
$lang_editpics_php['pic_info'] = 'Fil info';
$lang_editpics_php['desc'] = 'Beskrivning';
$lang_editpics_php['approval'] = 'Godkännande'; //cpg 1.5
$lang_editpics_php['approved'] = 'Godkänt'; // cpg 1.5
$lang_editpics_php['unapproved'] = 'Avvisade'; // cpg 1.5
$lang_editpics_php['new_keyword'] = 'Nytt nyckelord';
$lang_editpics_php['new_keywords'] = 'Nytt nyckelord hittat';
$lang_editpics_php['existing_keyword'] = 'Existerande nyckelord';
$lang_editpics_php['pic_info_str'] = '%s &times; %s - %s KB - %s visningar - %s röster';
$lang_editpics_php['approve'] = 'Godkänn fil';
$lang_editpics_php['postpone_app'] = 'Skjut upp godkännande';
$lang_editpics_php['del_pic'] = 'Radera fil';
$lang_editpics_php['del_all'] = 'Radera ALLA filer';
$lang_editpics_php['read_exif'] = 'Läs EXIF info igen';
$lang_editpics_php['reset_view_count'] = 'Nollställ visningsräknare';
$lang_editpics_php['reset_all_view_count'] = 'Nollställ ALLA visningsräknare';
$lang_editpics_php['reset_votes'] = 'Nollställ röster';
$lang_editpics_php['reset_all_votes'] = 'Nollställ ALLA röster';
$lang_editpics_php['del_comm'] = 'Radera kommentarer';
$lang_editpics_php['del_all_comm'] = 'Radera ALLA kommentarer';
$lang_editpics_php['upl_approval'] = 'Ladda upp godkännande';
$lang_editpics_php['edit_pics'] = 'Redigera filer';
$lang_editpics_php['edit_pic'] = 'Redigera fil'; // cpg 1.5
$lang_editpics_php['see_next'] = 'Se nästa filer';
$lang_editpics_php['see_prev'] = 'Se föregående filer';
$lang_editpics_php['n_pic'] = '%s filer';
$lang_editpics_php['n_of_pic_to_disp'] = 'Antal filer att visa';
$lang_editpics_php['crop_title'] = 'Coppermine Picture Editor';
$lang_editpics_php['preview'] = 'Förhandsvisa';
$lang_editpics_php['save'] = 'Spara bild';
$lang_editpics_php['save_thumb'] = 'Spara som miniatyrbild';
$lang_editpics_php['gallery_icon'] = 'Gör det här till min ikon';
$lang_editpics_php['sel_on_img'] = 'Urvalet måste bara vara på bilden!'; // js-alert
$lang_editpics_php['album_properties'] = 'Album egenskaper';
$lang_editpics_php['parent_category'] = 'Huvudkategori';
$lang_editpics_php['thumbnail_view'] = 'Miniatyrbild visning';
$lang_editpics_php['select_unselect'] = 'markera/avmarkera allt';
$lang_editpics_php['file_exists'] = 'Destination fil \'%s\' finns redan.';
$lang_editpics_php['rename_failed'] = 'Kunde inte döpa om \'%s\' till \'%s\'.';
$lang_editpics_php['src_file_missing'] = 'Källfil \'%s\' saknas.';
$lang_editpics_php['mime_conv'] = 'Kan inte konvertera fil från \'%s\' till \'%s\'';
$lang_editpics_php['forb_ext'] = 'Förbjuden filändelse.';
$lang_editpics_php['error_editor_class'] = 'Editeringsklass för din storleksförändringsmetod är inte implementerat'; // cpg 1.5
$lang_editpics_php['error_document_size'] = 'Dokumentet har ingen bredd eller höjd'; // cpg 1.5 // js-alert
$lang_editpics_php['success_picture'] = 'Bilden har sparats - du kan %sstänga%s fönstret nu'; // cpg1.5 // do not translate "%s" here
$lang_editpics_php['success_thumb'] = 'Miniatyrbilden har sparats - du kan %sstänga%s fönstret nu'; // cpg1.5 // do not translate "%s" here
$lang_editpics_php['rotate'] = 'Rotera'; // cpg 1.5
$lang_editpics_php['mirror'] = 'Spegla'; // cpg 1.5
$lang_editpics_php['scale'] = 'Skala'; // cpg 1.5
$lang_editpics_php['new_width'] = 'Ny bredd'; // cpg 1.5
$lang_editpics_php['new_height'] = 'Ny höjd'; // cpg 1.5
$lang_editpics_php['enable_clipping'] = 'Aktivera klippning, tillämpa på beskärning'; // cpg 1.5
$lang_editpics_php['jpeg_quality'] = 'JPEG produktionskvalitet'; // cpg 1.5
$lang_editpics_php['or'] = 'ELLER'; // cpg 1.5
$lang_editpics_php['approve_pic'] = 'Godkänn fil'; // cpg 1.5
$lang_editpics_php['approve_all'] = 'Godkänn ALLA filer'; // cpg 1.5
$lang_editpics_php['error_empty'] = 'Albumet är tomt'; // cpg1.5
$lang_editpics_php['error_approval_empty'] = 'Inga fler bilder att godkänna'; // cpg1.5
$lang_editpics_php['error_linked_only'] = 'Albumet innehåller bara länkade filer, som du inte kan redigera här'; // cpg1.5
$lang_editpics_php['note_approve_public'] = 'Filer som flyttas till ett offentligt album måste godkännas av en administratör.'; // cpg1.5
$lang_editpics_php['note_approve_private'] = 'Filer som flyttas till ett privat album måste godkännas av en administratör.' ; // cpg1.5
$lang_editpics_php['note_edit_control'] = 'Filer som flyttats till ett offentligt album kan inte redigeras.'; // cpg1.5
$lang_editpics_php['confirm_move'] = 'Är du säker på att du vill flytta denna fil?'; // cpg1.5 //js-alert
$lang_editpics_php['success_changes'] = 'Ändringarna har sparats'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File forgot_passwd.php
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) {
$lang_forgot_passwd_php['forgot_passwd'] = 'Lösenordspåminnelse';
$lang_forgot_passwd_php['err_already_logged_in'] = 'Du är redan inloggad!';
$lang_forgot_passwd_php['enter_email'] = 'Ange din e-postadress';
$lang_forgot_passwd_php['submit'] = 'gå';
$lang_forgot_passwd_php['illegal_session'] = 'Sessionen för Glömt lösenord är ogiltigt eller har förfallit.';
$lang_forgot_passwd_php['failed_sending_email'] = 'E-brev med lösenordspåminnelse kan inte skickas!';
$lang_forgot_passwd_php['email_sent'] = 'Ett e-brev med ditt användarnamn och nya lösenord har skickats till %s';
$lang_forgot_passwd_php['verify_email_sent'] = 'Ett e-brev har skickats till %s. V.g. kontrollera din e-post för att avsluta processen.';
$lang_forgot_passwd_php['err_unk_user'] = 'Vald användare finns inte!';
$lang_forgot_passwd_php['account_verify_subject'] = '%s - Begäran om nytt lösenord';
$lang_forgot_passwd_php['passwd_reset_subject'] = '%s - Ditt nya lösenord';
$lang_forgot_passwd_php['account_verify_email'] = <<< EOT
Du har begärt ett nytt lösenord. Om du vill fortsätta och få ett nytt lösenord skickat till dig, klicka på följande länk:

<a href="{VERIFY_LINK}">{VERIFY_LINK}</a>


Med vänliga hälsningar,

{SITE_NAME}

EOT;

$lang_forgot_passwd_php['reset_email'] = <<< EOT
Här är det nya lösenordet som du begärde:

Användarnamn: {USER_NAME}
Lösenord: {PASSWORD}

Gå till <a href="{SITE_LINK}">{SITE_LINK}</a> för att logga in.


Med vänliga hälsningar,

{SITE_NAME}

EOT;
}

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //
if (defined('GROUPMGR_PHP')) {
$lang_groupmgr_php['group_manager'] = 'Hantera Grupper'; // cpg1.5.x
$lang_groupmgr_php['group_name'] = 'Grupp';
$lang_groupmgr_php['permissions'] = 'Behörigheter';
$lang_groupmgr_php['public_albums'] = 'Uppladdningar till offentliga album';
$lang_groupmgr_php['personal_gallery'] = 'Personligt galleri';
$lang_groupmgr_php['disk_quota'] = 'Kvot';
$lang_groupmgr_php['rating'] = 'Betyg';
$lang_groupmgr_php['ecards'] = 'E-kort';
$lang_groupmgr_php['comments'] = 'Kommentarer';
$lang_groupmgr_php['allowed'] = 'Godkända';
$lang_groupmgr_php['approval'] = 'Godkännande';
$lang_groupmgr_php['create_new_group'] = 'Skapa ny grupp';
$lang_groupmgr_php['del_groups'] = 'Radera markerad(e) grupp(er)';
$lang_groupmgr_php['confirm_del'] = 'Varning, när du raderar en grupp, kommer användare anslutna till den gruppen att föras över till gruppen \'Registrerade\'!\n\nVill du fortsätta?'; // js-alert
$lang_groupmgr_php['title'] = 'Hantera användargrupper';
$lang_groupmgr_php['reset_to_default'] = 'Återställ till standardnamn (%s) - rekommenderas!';
$lang_groupmgr_php['error_group_empty'] = 'Grupptabellen var tom!<br />Standardgrupp skapad, var vänlig ladda om den här sidan';
$lang_groupmgr_php['explain_greyed_out_title'] = 'Varför är den här raden grå?';
$lang_groupmgr_php['explain_guests_greyed_out_text'] = 'Du kan inte ändra egenskaper för den här gruppen eftersom behörighetsnivån för gruppen är INGEN. Alla ej inloggade användare (medlemmar av gruppen %s) kan inte göra mer än logga in; därför påverkas de inte av inställningar för gruppen. Ändra behörighetsnivå här eller på gallerikonfigurationens sida under "Användarinställningar", "Tillåt ej inloggade användare tillträde".';
$lang_groupmgr_php['group_assigned_album'] = 'tilldelade album';
$lang_groupmgr_php['access_level'] = 'Behörighetsnivå'; // cpg1.5
$lang_groupmgr_php['thumbnail_intermediate_full'] = 'miniatyr-, medelstor- och fullstor bild'; // cpg1.5
$lang_groupmgr_php['thumbnail_intermediate'] = 'miniatyr- och medelstor bild'; // cpg1.5
$lang_groupmgr_php['thumbnail_only'] = 'miniatyrbild endast'; // cpg1.5
$lang_groupmgr_php['none'] = 'inga'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //
if (defined('INDEX_PHP')){
$lang_index_php['welcome'] = 'välkommen!';

$lang_album_admin_menu['confirm_delete'] = 'Är du säker på att du vill RADERA detta album?\\nAlla filer och kommentarer kommer också att raderas.'; // js-alert
$lang_album_admin_menu['delete'] = 'Radera';
$lang_album_admin_menu['modify'] = 'Egenskaper';
$lang_album_admin_menu['edit_pics'] = 'Redigera filer';
$lang_album_admin_menu['cat_locked'] = 'Detta album är låst för redigering'; // cpg1.5.x

$lang_list_categories['home'] = 'Hem';
$lang_list_categories['stat1'] = '[pictures] filer i [albums] album och [cat] kategorier med [comments] kommentarer visade [views] gånger'; // do not translate the stuff in square brackets
$lang_list_categories['stat2'] = '[pictures] filer i [albums] album visade [views] gånger'; // do not translate the stuff in square brackets
$lang_list_categories['xx_s_gallery'] = '%s\'s Galleri';
$lang_list_categories['stat3'] = '[pictures] filer i [albums] album med [comments] kommentarer visade [views] gånger'; // do not translate the stuff in square brackets

$lang_list_users['user_list'] = 'Användarlista';
$lang_list_users['no_user_gal'] = 'Det finns inga användargallerier';
$lang_list_users['n_albums'] = '%s album';
$lang_list_users['n_pics'] = '%s fil(er)';

$lang_list_albums['n_pictures'] = '%s filer';
$lang_list_albums['last_added'] = ', senaste tillagd den %s';
$lang_list_albums['n_link_pictures'] = '%s länkade filer';
$lang_list_albums['total_pictures'] = '%s filer totalt';
$lang_list_albums['alb_hits'] = 'Album visade %s gånger'; // cpg1.5
$lang_list_albums['from_category'] = ' - Från Kategori: '; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File install.php
// ------------------------------------------------------------------------- //

if (defined('INSTALL_PHP')) {
$lang_install['already_succ'] = 'Installationsprogrammet har redan körts en gång och är nu låst.';
$lang_install['already_succ_explain'] = 'Om du vill köra installationen igen, måste du först radera \'include/config.inc.php\' filen som skapades i katalogen där du installerade Coppermine. Du kan göra detta med vilket FTP program som helst';
$lang_install['cant_read_tmp_conf'] = 'Installationsprogrammet kan inte läsa den temporära konfigurationsfilen %s.';
$lang_install['cant_write_tmp_conf'] = 'Installationsprogrammet kan inte skriva den temporära konfigurationsfilen %s.';
$lang_install['review_permissions'] = 'V.g. kontrollera katalogbehörigheterna.';
$lang_install['change_lang'] = 'Byt språk';
$lang_install['check_path'] = 'Kontrollera sökväg';
$lang_install['continue'] = 'Nästa steg';
$lang_install['conv_said'] = 'Konverteringsprogrammet sa:';
$lang_install['license_info'] = 'Coppermine är ett bild/multimedia galleripaket som är utgivet under GNU GPL v3. Genom att installera, förbinder du dig till Coppermine\'s licensavtal:';
$lang_install['cpg_info_frames'] = 'Din webbläsare förefaller inte kunna visa infogade ramar (inline frames). Du kan läsa licensavtalet i docs katalogen som kom i Coppermine programpaket.';
$lang_install['license'] = 'Coppermine licensavtal';
$lang_install['create_table'] = 'Skapar tabell \'%s\'';
$lang_install['db_populating'] = 'Försöker lägga till data i databasen.';
$lang_install['db_alr_populated'] = 'Har redan lagt till nödvändig data i databasen.';
$lang_install['dir_ok'] = 'Katalog hittad';
$lang_install['directory'] = 'Katalog';
$lang_install['email'] = 'E-postadress';
$lang_install['email_no_match'] = 'E-postadressen matchar inte eller är ogiltig.';
$lang_install['email_verif'] = 'Verifiera e-post';
$lang_install['err_cpgnuke'] = '<h1>FEL</h1>Det verkar som om du försöker installera Coppermine fristående till din Nuke portal.<br />Denna version kan endast användas fristående!<br />En del servrar kan visa denna varning även om du inte har någon nuke portal installerad - om detta gäller för dig, <a href="%s?continue_anyway=1">fortsätt</a> med installationen. Om du använder en nuke portal, kan du vilja se i <a href=\"http://www.cpgnuke.com/\">CpgNuke</a> eller använda en av de (osupporterade)<a href=\"http://sourceforge.net/project/showfiles.php?group_id=89658&amp;package_id=95984\">Coppermine portarna</a> - forsätt inte!';
$lang_install['error'] = 'FEL';
$lang_install['error_need_corr'] = 'Följande fel inträffade och måste korrigeras först:';
$lang_install['finish'] = 'Avsluta installationen';
$lang_install['gd_note'] = '<strong>Viktigt :</strong> äldre versioner av GD graphic library supporterar endast JPEG och PNG bilder. Om detta gäller dig, kommer inte scriptet att kunna skapa miniatyrbilder av GIF bilder.';
$lang_install['go_to_main'] = 'Gå till förstasidan';
$lang_install['im_no_convert_ex'] = 'Installationsprogrammet hittade ImageMagick \'convert\' program i \'%s\', men det kan tyvärr inte verkställas av scriptet.<br />Du kan överväga att använda GD istället för ImageMagick.';
$lang_install['im_not_found'] = 'Installationsprogrammet försökte hitta ImageMagick, men fann det inte eller upptäckte ett fel. <br />Coppermine kan använda <a href="http://www.imagemagick.org/">ImageMagick</a> \konverteringsprogram för att skapa miniatyrbilder. Kvaliteten på bilder producerade av ImageMagick är överlägset GD1 men lika med GD2.<br />Om ImageMagick är installerat på ditt system och du vill använda det, <br />måste du ange hela sökvägen till konverteringsprogrammet nedan. <br />På Windows bör sökvägen se ut ungefär som \'c:/ImageMagick/\' och bör inte innehålla blanktecken, på Unix är det något liknande \'/usr/bin/\'.<br />Om du inte har någon aning om du har ImageMagick eller inte, lämna detta fält tomt - installationsprogrammet kommer då att försöka använda GD2 som standard (vilket är vad de flesta användare har). <br />Du kan ändra detta senare också (i Coppermines konfigurationsbild), så var inte rädd om du inte vet vad du ska fylla i här - lämna det blankt.';
$lang_install['im_packages'] = 'Din server stödjer följande bildpaket';
$lang_install['im_path'] = 'Sökväg till ImageMagick:';
$lang_install['im_path_space'] = 'Sökvägen till ImageMagick (\'%s\') innehåller minst ett blanktecken. Detta kommer att orsaka problem i scriptet.<br />Du måste flytta ImageMagick till en annan katalog.';
$lang_install['installation'] = 'installation';
$lang_install['installer_locked'] = 'Installationsprogrammet är låst';
$lang_install['installer_selected'] = 'Installationsprogrammet valde';
$lang_install['inv_im_path'] = 'Installationsprogrammet hittade inte \'%s\' katalogen som du angav för ImageMagick eller så har det inte tillträde till det. Kontrollera att du skrivit rätt sökväg och att du har tillträde till den angivna katalogen.';
$lang_install['lets_go'] = 'Då kör vi!';
$lang_install['mysql_create_btn'] = 'Skapa';
$lang_install['mysql_create_db'] = 'Skapa ny MySQL databas';
$lang_install['mysql_db_name'] = 'MySQL databasnamn';
$lang_install['mysql_error'] = 'MySQL fel: ';
$lang_install['mysql_host'] = 'MySQL host<br />(localhost är vanligtvis OK)';
$lang_install['mysql_username'] = 'MySQL användarnamn'; // cpg1.5
$lang_install['mysql_password'] = 'MySQL lösenord'; // cpg1.5
$lang_install['mysql_no_create_db'] = 'Kunde inte skapa MySQL databas.';
$lang_install['mysql_no_sel_dbs'] = 'Kunde inte hämta befintlig MySQL databas';
$lang_install['mysql_succ'] = 'Anslöt till databasen framgångsrikt';
$lang_install['mysql_tbl_pref'] = 'MySQL tabell prefix';
$lang_install['mysql_test_connection'] = 'Testa anslutning';
$lang_install['mysql_wrong_db'] = 'MySQL kunde inte lokalisera en databas som heter \'%s\' vänligen kontrollera det angivna värdet för detta';
$lang_install['n_a'] = 'N/A';
$lang_install['no_admin_email'] = 'Du måste ange en e-postadress för administratören';
$lang_install['no_admin_password'] = 'Du måste ange ett lösenord för administratören';
$lang_install['no_admin_username'] = 'Du måste ange ett användarnamn för administratören';
$lang_install['no_dir'] = 'Katalogen är inte tillgänglig';
$lang_install['no_gd'] = 'Din installation av PHP verkar inte innehålla \'GD\' graphic library extension och du har inte sagt att du vill använda ImageMagick. Coppermine har konfigurerats att använda GD2 eftersom den automatiska upptäckten av GD ibland inte fungerar. Om GD är installerad på ditt system, kommer scriptet att fungera men annars behöver du installera ImageMagick.';
$lang_install['no_mysql_conn'] = 'Kunde inte skapa en MySQL anslutning, vänligen kontrollera de angivna MySQL detaljerna';
$lang_install['no_mysql_support'] = 'PHP har inte MySQL support aktiverat.';
$lang_install['no_thumb_method'] = 'Du måste välja en bildbehandlingsapplikation (GD/IM)';
$lang_install['nok'] = 'Inte OK';
$lang_install['not_here_yet'] = 'Inget här ännu, vänligen klicka %shär%s för att backa.';
$lang_install['ok'] = 'OK';
$lang_install['on_q'] = 'på förfrågan';
$lang_install['or'] = 'eller';
$lang_install['pass_err'] = 'Lösenorden matchar inte, du angav inget eller använder ogiltiga tecken.';
$lang_install['password'] = 'Lösenord';
$lang_install['password_verif'] = 'Bekräfta Lösenord';
$lang_install['perm_error'] = 'Behörigheterna för \'%s\' är satt till %s, vänligen sätt dem till';
$lang_install['perm_ok'] = 'Behörigheterna till vissa kataloger har kontrollerats och verkar vara OK. <br />Vänligen fortsätt med nästa steg.';
$lang_install['perm_not_ok'] = 'Behörigheterna på vissa kataloger är inte korrekta.<br />Vänligen ändra behörigheterna på de kataloger nedan som är markerade med "Inte OK".'; // cpg1.5
$lang_install['please_go_back'] = 'Vänligen %sklicka här%s för att gå tillbaka och fixa problemen innan du fortsätter.';
$lang_install['populate_db'] = 'Fyll databasen';
$lang_install['ready_to_roll'] = '<a href="index.php">Coppermine</a> är nu riktigt konfigurerad och redo att användas.<br /><a href="login.php">Logga in</a> genom att använda de uppgifter som du angav för ditt administratörskonto.';
$lang_install['sect_create_adm'] = 'Det här avsnittet behöver information för att skapa ditt Coppermine administratörskonto. Använd endast alfanumeriska tecken. Var noggrann!';
$lang_install['sect_mysql_info'] = 'Det här avsnittet behöver information om tillträde till MySQL databasen.<br />Om du inte vet hur du ska fylla i dem, fråga supporten för ditt webbhotell.';
$lang_install['sect_mysql_sel_db'] = 'Här måste du välja vilken databas du vill använda för Coppermine.<br />Om ditt MySQL konto har de nödvändiga behörigheterna kan du skapa en ny databas i installationsprogrammet eller så kan du använda en befintlig databas. Om du inte vill något av detta, måste du först skapa en databas utanför Coppermines installationsprogram, och sedan återvända hit för att välja den nya databasen från listrutan nedan. Du kan också ändra tabellprefixet (använd dock inte punkter), men det rekommenderas att du behåller standardprefixet.';
$lang_install['select_lang'] = 'Välj standardspråk: ';
$lang_install['sql_file_not_found'] = 'Filen \'%s\' kunde inte hittas. Kontrollera att du har laddat upp alla Copperminefiler till din server.';
$lang_install['status'] = 'Status';
$lang_install['subdir_called'] = 'En underkatalog vid namn \'%s\' ska normalt finnas i den katalog där du laddade upp Coppermine.<br />Installationsprogrammet kunde inte hitta denna katalog. Kontrollera att du har laddat upp alla Copperminefiler till din server.';
$lang_install['title_admin'] = 'Skapa Coppermine administratör';
$lang_install['title_dir_check'] = 'Kontrollerar katalogbehörigheter';
$lang_install['title_file_check'] = 'Kontrollerar installationsfiler';
$lang_install['title_finished'] = 'Installationen slutförd';
$lang_install['title_imp'] = 'Bildpaketsurval';
$lang_install['title_imp_test'] = 'Testar bildbibliotek';
$lang_install['title_mysql_db_sel'] = 'MySQL databas urval';
$lang_install['title_mysql_pop'] = 'Skapar databasstruktur';
$lang_install['title_mysql_user'] = 'MySQL användarverifiering';
$lang_install['title_welcome'] = 'Välkommen till Coppermine installering';
$lang_install['tmp_conf_error'] = 'Kan inte skriva till den temporära konfigurationsfilen - försäkra dig om att \'include\' mappen är skrivbar för scriptet.';
$lang_install['tmp_conf_ser_err'] = 'Ett allvarligt fel inträffade under installationen, försök att ladda om sidan eller börja om genom att ta bort \'include/config.tmp\' filen.';
$lang_install['try_again'] = 'Försök igen!';
$lang_install['unable_write_config'] = 'Kan inte skriva konfigurationsfil';
$lang_install['user_err'] = 'Administratörens användarnamn får bara innehålla alfanumeriska tecken och kan inte vara tomt.';
$lang_install['username'] = 'Användarnamn';
$lang_install['your_admin_account'] = 'Ditt administratörskonto';
$lang_install['no_cookie'] = 'Din webbläsare accepterade inte vår cookie. Det rekommenderas att cookies accepteras.';
$lang_install['no_javascript'] = 'Din webbläsare verkar inte ha Javascript aktiverat - det är starkt rekommenderat att aktivera det.';
$lang_install['register_globals_detected'] = 'Det verkar som om din PHP konfiguration har \'register_globals\' aktiverat - du bör avaktivera det av säkerhetsskäl.';
$lang_install['more'] = 'mer';
$lang_install['version_undetected'] = 'Scriptet kunde inte avgöra vilken %s version din server använder sig av. Säkerställ att det är lägst version %s.';
$lang_install['version_incompatible'] = 'Scriptet upptäckte en inkompatibel version (%s) av %s på din server.<br />Se till att använda en kompatibel version (%s eller högre) innan du fortsätter!';
$lang_install['read_gif'] = 'Läser/skriver .gif fil';
$lang_install['read_png'] = 'Läser/skriver .png fil';
$lang_install['read_jpg'] = 'Läser/skriver .jpg fil';
$lang_install['write_error'] = 'Kunde inte skriva genererad bild till disk.';
$lang_install['read_error'] = 'Kunde inte läsa bildkällan.';
$lang_install['combine_error'] = 'Kunde inte kombinera bildkällorna';
$lang_install['text_error'] = 'Kunde inte lägga till text till bildkällan';
$lang_install['scale_error'] = 'Kunde inte skala bildkällan';
$lang_install['pixels'] = 'pixlar';
$lang_install['combine'] = 'Kombinera 2 bilder';
$lang_install['text'] = 'Skriv text på bild';
$lang_install['scale'] = 'Skala en bild';
$lang_install['generated_image'] = 'Genererad bild';
$lang_install['reference_image'] = 'Referensbild';
$lang_install['imp_test_error'] = 'Det uppstod ett fel i en eller flera tester, vänligen kontrollera att du valde lämpligaste bildbehandlingspaketet och att det är rätt konfigurerat!';
$lang_install['writable'] = 'Skrivbar';
$lang_install['not_writable'] = 'Inte skrivbart';
$lang_install['not_exist'] = 'Finns inte';
$lang_install['old_install'] = 'Det här är den nya installationsguiden. Klicka %shär%s för den klassiska installationsbilden.'; //cpg1.5
}

// ------------------------------------------------------------------------- //
// File keywordmgr.php
// ------------------------------------------------------------------------- //
if (defined('KEYWORDMGR_PHP')) {
$lang_keywordmgr_php['title'] = 'Hantera nyckelord';
$lang_keywordmgr_php['search'] = 'Sök';
$lang_keywordmgr_php['keyword_test_search'] = 'Sök efter %s i nytt fönster';
$lang_keywordmgr_php['keyword_del'] = 'Radera nyckelordet %s';
$lang_keywordmgr_php['confirm_delete'] = 'Är du säker på att du vill radera nyckelordet %s överallt i galleriet?'; // js-alert
$lang_keywordmgr_php['change_keyword'] = 'Ändra nyckelord';
}

// ------------------------------------------------------------------------- //
// File langmgr.php
// ------------------------------------------------------------------------- //
if (defined('LANGMGR_PHP')) {
$lang_langmgr_php['title'] = 'Hantera språk';
$lang_langmgr_php['english_language_name'] = 'Engelska';
$lang_langmgr_php['native_language_name'] = 'Modersmål';
$lang_langmgr_php['custom_language_name'] = 'Anpassat';
$lang_langmgr_php['language_name'] = 'Språkbenämning';
$lang_langmgr_php['language_file'] = 'Språkfil';
$lang_langmgr_php['flag'] = 'Flagga';
$lang_langmgr_php['file_available'] = 'Tillgängligt';
$lang_langmgr_php['enabled'] = 'Aktiverad';
$lang_langmgr_php['complete'] = 'Komplett';
$lang_langmgr_php['default'] = 'Standard';
$lang_langmgr_php['missing'] = 'saknas';
$lang_langmgr_php['broken'] = 'Verkar vara bruten eller oåtkomlig';
$lang_langmgr_php['exists_in_db_and_file'] = 'finns i databasen som fil';
$lang_langmgr_php['exists_as_file_only'] = 'finns som fil endast';
$lang_langmgr_php['pick_a_flag'] = 'Välj en';
$lang_langmgr_php['replace_x_with_y'] = 'Ersätt %s med %s';
$lang_langmgr_php['tanslator_information'] = 'Översättningsinformation';
$lang_langmgr_php['cpg_version'] = 'Coppermine version';
$lang_langmgr_php['hide_details'] = 'Dölj detaljer';
$lang_langmgr_php['show_details'] = 'Visa detaljer';
$lang_langmgr_php['loading'] = 'Laddar';
$lang_langmgr_php['english_missing'] = 'Engelskt språk saknas trots att det aldrig ska tas bort. Du behöver återskapa det omedelbart.';
$lang_langmgr_php['enable_at_least_one'] = 'Du måste aktivera minst ett språk för att galleriet ska fungera';
$lang_langmgr_php['enable_default'] = 'Du har valt ett standardspråk som inte är aktiverat. Välj ett annat standardspråk eller aktivera det du valde som standard!';
$lang_langmgr_php['available_default'] = 'Du har valt ett standardspråk som inte är tillgängligt. Välj ett annat standardspråk!';
$lang_langmgr_php['version_does_not_match'] = 'Versionen av den här filen överenstämmer inte med din Coppermine version. Använd med försiktighet och testa noggrant!';
$lang_langmgr_php['no_version'] = 'Ingen versionsinformation kunde hämtas. Det är mycket troligt att det här språket inte fungerar alls och/eller inte är en språkfil.';
$lang_langmgr_php['filesize'] = 'Filstorleken %s är osannolik';
$lang_langmgr_php['content_missing'] = 'Filen förefaller inte innehålla nödvändiga data, så det är troligtvis inte en giltig språkfil.';
$lang_langmgr_php['status'] = 'Status';
$lang_langmgr_php['default_language'] = 'Standardspråk är satt till %s';
}

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //
if (defined('LOGIN_PHP')) {
$lang_login_php['login'] = 'Logga in';
$lang_login_php['enter_login_pswd'] = 'Ange ditt användarnamn och lösenord för att logga in';
$lang_login_php['username'] = 'Användarnamn';
$lang_login_php['email'] = 'E-postadress'; // cpg1.5
$lang_login_php['both'] = 'Användarnamn eller E-postadress'; // cpg1.5
$lang_login_php['password'] = 'Lösenord';
$lang_login_php['remember_me'] = 'Kom ihåg mig';
$lang_login_php['welcome'] = 'Välkommen %s ...';
$lang_login_php['err_login'] = 'Inloggningen misslyckades. Försök igen.';
$lang_login_php['err_already_logged_in'] = 'Du har redan loggat in!';
$lang_login_php['forgot_password_link'] = 'Jag har glömt mitt lösenord';
$lang_login_php['cookie_warning'] = 'Varning - din webbläsare accepterar inte script cookies';
$lang_login_php['send_activation_link'] = 'Missat aktiveringslänken?';
$lang_login_php['force_login'] = 'Du måste logga in för att se den här sidan'; // cpg1.5
$lang_login_php['force_login_title'] = 'Logga in för att fortsätta'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) {
$lang_logout_php['logout'] = 'Logga ut';
$lang_logout_php['bye'] = 'Hej då %s ...';
$lang_logout_php['err_not_logged_in'] = 'Du är inte inloggad!'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File minibrowser.php
// ------------------------------------------------------------------------- //
if (defined('MINIBROWSER_PHP')) {
$lang_minibrowser_php['up'] = 'upp en nivå';
$lang_minibrowser_php['current_path'] = 'nuvarande sökväg';
$lang_minibrowser_php['select_directory'] = 'Vänligen välj en katalog';
$lang_minibrowser_php['click_to_close'] = 'Klicka på bilden för att stänga fönstret';
$lang_minibrowser_php['folder'] = 'Mapp'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File mode.php
// ------------------------------------------------------------------------- //
if (defined('MODE_PHP')) {
$lang_mode_php[0] = 'Visa inte administratörskontroller...'; // cpg1.5
$lang_mode_php[1] = 'Visa administratörskontroller...'; // cpg1.5
$lang_mode_php['news_hide'] = 'Dölj nyheter...'; // cpg1.5
$lang_mode_php['news_show'] = 'Visa nyheter...'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //
if (defined('MODIFYALB_PHP')) {
$lang_modifyalb_php['upd_alb_n'] = 'Uppdatera album %s';
$lang_modifyalb_php['related_tasks'] = 'Relaterade uppgifter'; // cpg1.5
$lang_modifyalb_php['choose_album'] = 'Välj album'; // cpg1.5
$lang_modifyalb_php['general_settings'] = 'Allmänna inställningar';
$lang_modifyalb_php['alb_title'] = 'Album titel';
$lang_modifyalb_php['alb_cat'] = 'Album kategori';
$lang_modifyalb_php['alb_desc'] = 'Album beskrivning';
$lang_modifyalb_php['alb_keyword'] = 'Album nyckelord';
$lang_modifyalb_php['alb_thumb'] = 'Album miniatyrbil';
$lang_modifyalb_php['alb_perm'] = 'Behörigheter för detta album';
$lang_modifyalb_php['can_view'] = 'Album kan ses av';
$lang_modifyalb_php['can_upload'] = 'besökare kan ladda upp filer';
$lang_modifyalb_php['can_post_comments'] = 'besökare kan skriva kommentarer';
$lang_modifyalb_php['can_rate'] = 'besökare kan betygsätta filer';
$lang_modifyalb_php['user_gal'] = 'Användargalleri';
$lang_modifyalb_php['my_gal'] = '* Mitt Galleri *'; // cpg 1.5
$lang_modifyalb_php['no_cat'] = '* Ingen kategori *';
$lang_modifyalb_php['alb_empty'] = 'Albumet är tomt';
$lang_modifyalb_php['last_uploaded'] = 'Senast uppdaterad';
$lang_modifyalb_php['public_alb'] = 'Alla (offentligt album)';
$lang_modifyalb_php['me_only'] = 'Bara mig';
$lang_modifyalb_php['owner_only'] = 'Albumets ägare (%s) endast';
$lang_modifyalb_php['group_only'] = 'Medlemmar av \'%s\' gruppen';
$lang_modifyalb_php['err_no_alb_to_modify'] = 'Inget album du kan ändra i databasen.';
$lang_modifyalb_php['update'] = 'Uppdatera album';
$lang_modifyalb_php['reset_album'] = 'Nollställ album';
$lang_modifyalb_php['reset_views'] = 'Nollställ visningsräknaren till &quot;0&quot; i %s';
$lang_modifyalb_php['reset_rating'] = 'Nollställ röstningar på alla filer i %s';
$lang_modifyalb_php['delete_comments'] = 'Radera alla kommentarer gjorda i %s';
$lang_modifyalb_php['delete_files'] = '%sOåterkalleligen%s radera alla filer i %s';
$lang_modifyalb_php['views'] = 'visningar';
$lang_modifyalb_php['votes'] = 'röster';
$lang_modifyalb_php['comments'] = 'kommentarer';
$lang_modifyalb_php['files'] = 'filer';
$lang_modifyalb_php['submit_reset'] = 'skicka ändringar';
$lang_modifyalb_php['reset_views_confirm'] = 'Jag är säker';
$lang_modifyalb_php['notice1'] = '(*) beroende på %sgroups%s inställningar'; //(do not translate %sgroups%s!)
$lang_modifyalb_php['can_moderate'] = 'Album kan ändras av'; // cpg 1.5
$lang_modifyalb_php['admins_only'] = 'Administratörer endast'; // cpg 1.5
$lang_modifyalb_php['alb_password'] = 'Album lösenord (Nytt lösenord)';
$lang_modifyalb_php['alb_password_hint'] = 'Album lösenordspåminnelse';
$lang_modifyalb_php['edit_files'] = 'Redigera filer';
$lang_modifyalb_php['parent_category'] = 'Huvudkategori';
$lang_modifyalb_php['thumbnail_view'] = 'Miniatyrbildsvy';
$lang_modifyalb_php['random_image'] = 'Slumpmässig bild'; // cpg 1.5
$lang_modifyalb_php['password_protect'] = 'Lösenordsskydda detta album (Bocka för ja)'; //cpg1.5
}
// ------------------------------------------------------------------------- //
// File phpinfo.php
// ------------------------------------------------------------------------- //
if (defined('PHPINFO_PHP')) {
$lang_phpinfo_php['php_info'] = 'PHP info';
$lang_phpinfo_php['explanation'] = 'Detta är information genererad av PHP funktionen <a href="http://www.php.net/phpinfo">phpinfo()</a>, synlig inom Coppermine.';
$lang_phpinfo_php['no_link'] = 'Att låta andra se din PHP-info kan innebära en säkerhetsrisk, därför är denna sida endast synlig när du är inloggad som administratör. Du kan inte skicka en länk till den här sidan till andra, de kommer att nekas tillträde.';
}

// ------------------------------------------------------------------------- //
// File picmgr.php
// ------------------------------------------------------------------------- //
if (defined('PICMGR_PHP')) {
$lang_picmgr_php['pic_mgr'] = 'Hantera Bilder';
$lang_picmgr_php['confirm_modifs'] = 'Verkligen utföra dessa ändringar?'; // cpg1.5 // js-alert
$lang_picmgr_php['no_change'] = 'Du gjorde inga ändringar!';
$lang_picmgr_php['no_album'] = '* Inget album *';
$lang_picmgr_php['explanation_header'] = 'Den anpassade sorteringsordning du kan ange på den här sidan kommer bara att tas hänsyn till om';
$lang_picmgr_php['explanation1'] = 'administratören har satt "Standard sorteringsordning för filer" i konfigurationen till "Position fallande" eller "Position stigande" (global inställning för alla användare som inte valt annan individuell sorteringsordning)';
$lang_picmgr_php['explanation2'] = 'användaren har valt "Position fallande" eller "Position stigande" på miniatyrbildssidan (inställning per användare)';
$lang_picmgr_php['change_album'] = 'Om du ändrar albumet kommer dina ändringar att förloras!'; // cpg1.5 // js-alert
$lang_picmgr_php['submit_reminder'] = 'Sorteringsändringar sparas inte förrän du klickar på &quot;Spara ändringar&quot;.'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File pluginmgr.php
// ------------------------------------------------------------------------- //
if (defined('PLUGINMGR_PHP')){
$lang_pluginmgr_php['confirm_uninstall'] = 'Är du säker på att du vill AVINSTALLERA denna insticksmodul?';
$lang_pluginmgr_php['confirm_remove'] = 'NOTERA: Insticksmodulens API är inaktiverad. Vill du MANUELLT RADERA denna insticksmodul, och strunta i alla rensningsåtgärder?'; // cpg1.5
$lang_pluginmgr_php['confirm_delete'] = 'Är du säker på att du vill RADERA denna insticksmodul?';
$lang_pluginmgr_php['pmgr'] = 'Hantera Insticksmoduler';
$lang_pluginmgr_php['explanation'] = 'Installera / avinstallera / hantera insticksmoduler med hjälp av denna sida.'; // cpg1.5
$lang_pluginmgr_php['plugin_enabled'] = 'Insticksmodulens API aktiverad'; // cpg1.5
$lang_pluginmgr_php['name'] = 'Namn';
$lang_pluginmgr_php['author'] = 'Författare';
$lang_pluginmgr_php['desc'] = 'Beskrivning';
$lang_pluginmgr_php['vers'] = 'v';
$lang_pluginmgr_php['i_plugins'] = 'Installerade Insticksmoduler';
$lang_pluginmgr_php['n_plugins'] = 'Inte installerade insticksmoduler';
$lang_pluginmgr_php['none_installed'] = 'Inga installerade';
$lang_pluginmgr_php['operation'] = 'Operation';
$lang_pluginmgr_php['not_plugin_package'] = 'Den uppladdade filen är inte ett insticksmodulspaket.';
$lang_pluginmgr_php['copy_error'] = 'Det uppstod ett fel vid kopiering av paketet till insticksmodulens mapp.';
$lang_pluginmgr_php['upload'] = 'Ladda upp';
$lang_pluginmgr_php['configure_plugin'] = 'Konfigurera insticksmodul';
$lang_pluginmgr_php['cleanup_plugin'] = 'Rensa insticksmodul';
$lang_pluginmgr_php['extra'] = 'Extra'; // cpg1.5
$lang_pluginmgr_php['install_info'] = 'Installeringsinformation'; // cpg1.5
$lang_pluginmgr_php['plugin_disabled_note'] = 'Insticksmodulens API är inaktiverad, så åtgärden är inte tillåten.'; // cpg1.5
$lang_pluginmgr_php['install'] = 'installera'; // cpg1.5
$lang_pluginmgr_php['uninstall'] = 'avinstallera'; // cpg1.5
$lang_pluginmgr_php['minimum_requirements_not_met'] = 'Minimikraven har inte tillgodosetts'; // cpg1.5
$lang_pluginmgr_php['confirm_version'] = 'Kunde inte avgör versionens krav för denna insticksmodul. Det är vanligtvis ett tecken på att den inte är designad för att köras på din version av Coppermine, och kan därför skada ditt galleri. Fortsätt ändå? (rekommenderas inte)?'; // cpg1.5 // js-alert
}

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //
if (defined('RATEPIC_PHP')) {
$lang_rate_pic_php['already_rated'] = 'Du har tyvärr redan röstat på denna fil';
$lang_rate_pic_php['rate_ok'] = 'Din röst har räknats';
$lang_rate_pic_php['forbidden'] = 'Du kan inte rösta på dina egna filer.';
}

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //
if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {
$lang_register_php['disclamer'] = <<< EOT
trots att administratörerna av {SITE_NAME} kommer att försöka ta bort eller redigera varje stötande material så fort som möjligt, är det omöjligt att granska varje post. Därför samtycker du till att alla inlägg som görs här uttrycker synpunkter och åsikter som är författarens och inte administratörens eller webbmasterns (utom inlägg gjorda av dem själva), och att de därför inte kan hållas ansvariga.<br />
<br />
Du godkänner att inte skriva inlägg som är kränkande, obscena, vulgära, hatiska, hotande eller som innehåller förtal eller sexuella anspelningar eller annat som strider mot gällande lag. Du godkänner att webmaster, administratör och moderator för {SITE_NAME} har rätt att ta bort eller redigera varje kommentar vid valfri tidpunkt så att det överenssämmer med detta. Som användare godkänner du att den information som du har gett sparas i en databas. Denna information kommer inte att göras tillgänglig för någon tredje part utan ditt godkännande.  Webmaster eller administratör kan inte hållas ansvariga för försök till hackning som kan orsaka att informationen sprids.<br />
<br />
Denna webbplats använder cookies för att spara information på din  dator. Dessa cookies enda syfte är att förbättra din bildupplevelse. E-postadressen används bara för att bekräfta dina registreringsuppgifter och ditt lösenord.<br />
<br />
Genom att klicka på 'Jag godkänner' nedan, så förbinder du dig till dessa villkor.
EOT;
$lang_register_php['page_title'] = 'Användarregistrering';
$lang_register_php['term_cond'] = 'Villkor';
$lang_register_php['i_agree'] = 'Jag godkänner';
$lang_register_php['submit'] = 'Skicka registrering';
$lang_register_php['err_user_exists'] = 'Det användarnamn du valt finns redan, välj ett annat';
$lang_register_php['err_global_pw'] = 'Ogiltigt globalt registreringslösenord'; // cpg1.5
$lang_register_php['err_global_pass_same'] = 'Ditt lösenord bör inte vara samma som det globala lösenordet'; // cpg1.5
$lang_register_php['err_duplicate_email'] = 'En annan användare har redan registrerat sig med den e-postadress du angett';
$lang_register_php['err_disclaimer'] = 'Du måste godkänna villkoren'; // cpg1.5
$lang_register_php['enter_info'] = 'Ange registreringsinformation';
$lang_register_php['required_info'] = 'obligatorisk information';
$lang_register_php['optional_info'] = 'Frivillig information';
$lang_register_php['username'] = 'Användarnamn';
$lang_register_php['password'] = 'Lösenord';
$lang_register_php['password_again'] = 'Ange lösenord igen';
$lang_register_php['global_registration_pw'] = 'Globalt registreringslösenord'; // cpg1.5
$lang_register_php['email'] = 'E-post';
$lang_register_php['location'] = 'Geografisk plats';
$lang_register_php['interests'] = 'Intressen';
$lang_register_php['website'] = 'Hemsida';
$lang_register_php['occupation'] = 'Sysselsättning';
$lang_register_php['error'] = 'FEL';
$lang_register_php['confirm_email_subject'] = '%s - Registreringsbekräftelse';
$lang_register_php['information'] = 'Information';
$lang_register_php['failed_sending_email'] = 'Registreringsbekräftelse via e-post kund inte skickas!';
$lang_register_php['thank_you'] = 'Tack för din registrering.<br />Ett e-brev med information om hur du aktiverar ditt konto har skickats till den e-postadress som du angav.';
$lang_register_php['acct_created'] = 'Ditt konto har skapats och du kan nu logga in med ditt användarnamn och lösenord';
$lang_register_php['acct_active'] = 'Ditt konto är nu aktivt och du kan logga in med ditt användarnamn och lösenord';
$lang_register_php['acct_already_act'] = 'Kontot är redan aktivt!';
$lang_register_php['acct_act_failed'] = 'Detta konto kan inte aktiveras!';
$lang_register_php['err_unk_user'] = 'Vald användare finns inte!';
$lang_register_php['x_s_profile'] = '%s\'s profil';
$lang_register_php['group'] = 'Grupp';
$lang_register_php['reg_date'] = 'Registrerades';
$lang_register_php['disk_usage'] = 'Disk användning';
$lang_register_php['change_pass'] = 'Ändra lösenord';
$lang_register_php['current_pass'] = 'Nuvarande lösenord';
$lang_register_php['new_pass'] = 'Nytt lösenord';
$lang_register_php['new_pass_again'] = 'Nytt lösenord igen';
$lang_register_php['err_curr_pass'] = 'Nuvarande lösenord är fel';
$lang_register_php['change_pass'] = 'Ändra mitt lösenord';
$lang_register_php['update_success'] = 'Din profil har uppdaterats';
$lang_register_php['pass_chg_success'] = 'Ditt lösenord har ändrats';
$lang_register_php['pass_chg_error'] = 'Ditt lösenord ändrades inte';
$lang_register_php['notify_admin_email_subject'] = '%s - Underrättelse om registrering';
$lang_register_php['last_uploads'] = 'Senast uppladdade fil'; // cpg1.5
$lang_register_php['last_uploads_detail'] = 'Klicka här för att se alla uppladdningar gjorda av %s'; // cpg1.5
$lang_register_php['last_comments'] = 'Senaste kommentar'; // cpg1.5
$lang_register_php['you'] = 'du'; // cpg1.5
$lang_register_php['last_comments_detail'] = 'Klicka här för att se alla kommentarer gjorda av %s'; // cpg1.5
$lang_register_php['notify_admin_email_body'] = 'En ny användare med användarnamn "%s" har registerat sig i ditt galleri';
$lang_register_php['pic_count'] = 'filer uppladdade';
$lang_register_php['notify_admin_request_email_subject'] = '%s - Registreringsbegäran';
$lang_register_php['thank_you_admin_activation'] = 'Tack.<br />Din begäran om kontoaktivering har skickats till administratören. Du kommer att få e-post när/om aktiveringen är godkänd.';
$lang_register_php['acct_active_admin_activation'] = 'Kontot är nu aktivt och ett e-brev har skickats till användaren.';
$lang_register_php['notify_user_email_subject'] = '%s - Underrättelse om aktivering';
$lang_register_php['delete_my_account'] = 'Radera mitt användarkonto'; // cpg1.5
$lang_register_php['warning_delete'] = 'Varning: radering av konto kan inte göras ogjort. De %sfiler du laddat upp%s till offentliga album och %sdina kommentarer%s raderas inte när ditt konto raderas! De filer du laddat upp till ditt personliga galleri kommer emellertid att raderas.'; // cpg1.5 // The %s-placeholders mustn't be removed, they will later be replaced by the wrappers for the links
$lang_register_php['i_am_sure'] = 'Jag är säker på att jag vill radera mitt konto'; // cpg1.5
$lang_register_php['really_delete'] = 'Är du säker på att du verkligen vill radera ditt konto?'; // cpg1.5 // js-alert
$lang_register_php['edit_xs_profile'] = 'Redigera profilen %s'; // cpg1.5
$lang_register_php['edit_my_profile'] = 'Redigera min profil'; // cpg1.5
$lang_register_php['none'] = 'inga'; // cpg1.5
$lang_register_php['user_name_banned'] = 'Det användarnamn du valt är ogiltigt/blockerat. Välj ett annat användarnamn'; // cpg1.5
$lang_register_php['email_address_banned'] = 'Du är blockerat från detta galleri, och får inte registrera dig igen. Gå härifrån!'; // cpg1.5
$lang_register_php['email_warning1'] = 'E-postadress får inte utelämnas!'; // cpg1.5
$lang_register_php['email_warning2'] = 'Den e-postadress du angav är ogiltigt. Kontrollera!'; // cpg1.5
$lang_register_php['username_warning1'] = 'Användarnamn får inte utelämnas!'; // cpg1.5
$lang_register_php['username_warning2'] = 'Användarnamn måste vara minst två tecken långt!'; // cpg1.5
$lang_register_php['password_warning1'] = 'Lösenord måste vara minst två tecken långt!'; // cpg1.5
$lang_register_php['password_warning2'] = 'Användarnamn och lösenord måste vara olika!'; // cpg1.5
$lang_register_php['password_verification_warning1'] = 'Dom två lösenorden är inte lika, vänligen skriv in dem på nytt!'; // cpg1.5
$lang_register_php['form_not_submit'] = 'Formuläret har inte skickats - det finns fel som du måste rätt först!'; // cpg1.5
$lang_register_php['banned'] = 'Blockerad!'; // cpg1.5

$lang_register_php['confirm_email'] = <<< EOT
Tack för att du registrerar dig på {SITE_NAME}

För att aktivera ditt konto med användarnamn "{USER_NAME}", måste du klicka på länken nedan eller klippa och klistra in den i din webbläsare.
<a href="{ACT_LINK}">{ACT_LINK}</a>

Med vänliga hälsningar,

{SITE_NAME}

EOT;

$lang_register_approve_email = <<< EOT
En ny användare med användarnamn "{USER_NAME}" har registrerat sig i ditt galleri.
För att aktivera kontot måste du måste du klicka på länken nedan eller klippa och klistra in den i din webbläsare.

<a href="{ACT_LINK}">{ACT_LINK}</a>

EOT;

$lang_register_php['activated_email'] = <<< EOT
Ditt konto har godkänts och aktiverats.

Du kan nu logga in på <a href="{SITE_LINK}">{SITE_LINK}</a> med ditt användarnamn "{USER_NAME}"

Med vänliga hälsningar,

{SITE_NAME}

EOT;
}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //
if (defined('REVIEWCOM_PHP')) {
$lang_reviewcom_php['title'] = 'Granska kommentarer';
$lang_reviewcom_php['no_comment'] = 'Det finns inga kommentarer att granska';
$lang_reviewcom_php['n_comm_del'] = '%s kommentar(er) raderade';
$lang_reviewcom_php['n_comm_disp'] = 'Antal kommentarer att visa';
$lang_reviewcom_php['see_prev'] = 'Se föregående';
$lang_reviewcom_php['see_next'] = 'Se nästa';
$lang_reviewcom_php['del_comm'] = 'Radera markerade kommentarer';
$lang_reviewcom_php['user_name'] = 'Namn';
$lang_reviewcom_php['date'] = 'Datum';
$lang_reviewcom_php['comment'] = 'Kommentar';
$lang_reviewcom_php['file'] = 'Fil';
$lang_reviewcom_php['name_a'] = 'Användarnamn stigande';
$lang_reviewcom_php['name_d'] = 'Användarnamn fallande';
$lang_reviewcom_php['date_a'] = 'Datum stigande';
$lang_reviewcom_php['date_d'] = 'Datum fallande';
$lang_reviewcom_php['comment_a'] = 'Kommentarmeddelande stigande';
$lang_reviewcom_php['comment_d'] = 'Kommentarmeddelande fallande';
$lang_reviewcom_php['file_a'] = 'Fil stigande';
$lang_reviewcom_php['file_d'] = 'Fil fallande';
$lang_reviewcom_php['approval_a'] = 'Godkännande stigande'; // cpg1.5
$lang_reviewcom_php['approval_d'] = 'Godkännande fallande'; // cpg1.5
$lang_reviewcom_php['ip_a'] = 'IP adress stigande'; // cpg1.5
$lang_reviewcom_php['ip_d'] = 'IP adress fallande'; // cpg1.5
$lang_reviewcom_php['akismet_a'] = 'Akismet betyg (giltiga kommentarer nederst)'; // cpg1.5
$lang_reviewcom_php['akismet_d'] = 'Akismet betyd (giltiga kommentarer överst)'; // cpg1.5
$lang_reviewcom_php['n_comm_appr'] = '%s godkänd(a) kommentar(er)'; // cpg1.5
$lang_reviewcom_php['n_comm_unappr'] = '%s avvisad(e) kommentar(er)'; // cpg1.5
$lang_reviewcom_php['configuration_changed'] = 'Godkännandekonfigurationen ändrad'; // cpg1.5
$lang_reviewcom_php['only_approval'] = 'visa endast kommentarer som behöver godkännas'; // cpg1.5
$lang_reviewcom_php['approval'] = 'Godkänd'; // cpg1.5
$lang_reviewcom_php['save_changes'] = 'Spara ändringar'; // cpg1.5
$lang_reviewcom_php['n_confirm_delete'] = 'Vill du verkligen radera markerad(e) kommentar(er)?'; // cpg1.5
$lang_reviewcom_php['with_selected'] = 'med markerad'; // cpg1.5
$lang_reviewcom_php['delete'] = 'radera'; // cpg1.5
$lang_reviewcom_php['approve'] = 'godkänn'; // cpg1.5
$lang_reviewcom_php['disapprove'] = 'markera som avvisad'; // cpg1.5
$lang_reviewcom_php['do_nothing'] = 'gör inget'; // cpg1.5
$lang_reviewcom_php['comment_approved'] = 'Kommentar godkänd'; // cpg1.5
$lang_reviewcom_php['comment_unapproved'] = 'Kommentar markerad som avvisad'; // cpg1.5
$lang_reviewcom_php['ban_and_delete'] = 'Blockera användare och radera kommentar(er)'; // cpg1.5
$lang_reviewcom_php['akismet_status'] = 'Akismet sa'; // cpg1.5
$lang_reviewcom_php['is_spam'] = 'är spam'; // cpg1.5
$lang_reviewcom_php['is_not_spam'] = 'är inte spam'; // cpg1.5
$lang_reviewcom_php['akismet'] = 'Akismet'; // cpg1.5
$lang_reviewcom_php['akismet_count'] = 'Akismet har hittills hittat %s spam-meddelanden'; // cpg1.5
$lang_reviewcom_php['akismet_test_result'] = 'Testresultat för din Akismet API nyckel %s'; // cpg1.5
$lang_reviewcom_php['invalid'] = 'invalid'; // cpg1.5
$lang_reviewcom_php['missing_gallery_url'] = 'Du måste ange en webbadress (URL) till galleriet i din Coppermine\'s konfiguration'; // cpg1.5
$lang_reviewcom_php['unable_to_connect'] = 'Kan inte ansluta till akismet.com'; // cpg1.5
$lang_reviewcom_php['not_found'] = 'Måladressen (URL) hittades inte. Kanske har katalogstrukturen på akismet.com ändrats.'; // cpg1.5
$lang_reviewcom_php['unknown_error'] = 'Okänt fel'; // cpg1.5
$lang_reviewcom_php['error_message'] = 'Felmeddelandet som gavs var'; // cpg1.5
$lang_reviewcom_php['ip_address'] = 'IP adress'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File sidebar.php
// ------------------------------------------------------------------------- //
if (defined('SIDEBAR_PHP')) {
$lang_sidebar_php['sidebar'] = 'Sidopanel'; // cpg1.5
$lang_sidebar_php['install'] = 'installera'; // cpg1.5
$lang_sidebar_php['install_explain'] = 'Bland många smarta metoder för att komma åt sidor och information snabbt, erbjuder vi sidopaneler för de mest populära webbläsarna som används på olika operativsystem. Här kan du hitta inställningar och information om avinstallering för stödda webbläsare.'; // cpg1.5
$lang_sidebar_php['os_browser_detect'] = 'Identifierar ditt operativsystem och din webbläsare'; // cpg1.5
$lang_sidebar_php['os_browser_detect_explain'] = 'Scriptet försöker identifiera ditt operativsystems- och din webbläsares version - vänligen vänta en sekund. Om automatidentifieringen misslyckas, vill du kanske %svisa%s de möjliga installationsvalen för sidopanelen manuellt.'; // cpg1.5
$lang_sidebar_php['mozilla'] = 'Mozilla, Firefox, Netscape 6+, Konqueror 3.2+'; // cpg1.5
$lang_sidebar_php['mozilla_explain'] = 'Om du använder Mozilla 0.9.4 eller högre, så kan du %slägga till din sidopanel till ditt set%s. Du kan avinstallera denna sidopanel genom att använda "Anpassa sidopanel" dialogen i Mozilla.'; // cpg1.5
$lang_sidebar_php['ie_mac'] = 'Internet Explorer 5 eller högre på Mac OS'; // cpg1.5
$lang_sidebar_php['ie_mac_explain'] = 'Om du använder Internet Explorer 5 eller högre på MacOS, %söppna vår sidopanelssida%s i ett separat fönster. I det fönstret, öppna "Page Holder" fliken på fönstrets vänstra sida. Klicka på "Add". Om du vill spara det för senare användning klicka på "Favorites" och markera "Add to Page Holder Favorites".'; // cpg1.5
$lang_sidebar_php['ie_win'] = 'Internet Explorer 5 och högre i Windows'; // cpg1.5
$lang_sidebar_php['ie_win_explain'] = 'Om du använder Internet Explorer 5 eller högre i Windows, kan du lägga till sidopanelen till verktygsfältet Länkar eller så kan du lägga det till din favoriter och genom att klicka på det kan du se vår panel istället för din vanliga sökpanel genom att högerklicka %shär%s och markera "Add to favorites" från snabbmenyn. Denna länk installerar inte vår panel som din standardsökpanel, så inga förändringar görs i ditt system.'; // cpg1.5
$lang_sidebar_php['ie7_win'] = 'Internet Explorer 7 on Windows XP/Vista'; // cpg1.5
$lang_sidebar_php['ie7_win_explain'] = 'Om du använder  Internet Explorer 7 in Windows, kan du lägga till en navigerings pop-up till verktygsfältet Länkar eller så kan du lägga det till din favoriter och genom att klicka på det kan du se vår panel istället för din vanliga sökpanel genom att högerklicka %shär%s och markera "Add to favorites" från snabbmenyn. I tidigare versioner av IE var det möjligt att lägga till en fast sidopanel, men i IE7 kan du inte åstadkomma det utan komplicerade förändringar i registret. De rekommenderas att du använder en annan webbläsare om du vill ha en fast sidopanel.'; // cpg1.5
$lang_sidebar_php['opera'] = 'Opera 6 och högre'; // cpg1.5
$lang_sidebar_php['opera_explain'] = 'Om du använder Opera, kan du %sklicka på denna länk för att lägga till vår sidopanel till ditt set%s. Bocka för "Show in panel". Du kan avinstallera sidopanelen genom att högerklicka på dess flik och välja "Ta bort" från snabbmenyn.'; // cpg1.5
$lang_sidebar_php['additional_options'] = 'Ytterligare alternativ'; // cpg1.5
$lang_sidebar_php['additional_options_explain'] = 'Om du har en annan webbläsare än vad som nämns ovan, klicka %shär%s för att visa alla sidopanelsalternativ.'; // cpg1.5
$lang_sidebar_php['cannot_add_sidebar'] = 'Sidopanel kan inte läggas till! Din webbläsare stöder inte detta!'; // cpg1.5 // js-alert
$lang_sidebar_php['search'] = 'Sök'; // cpg1.5
$lang_sidebar_php['reload'] = 'Ladda upp igen'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File search.php
// ------------------------------------------------------------------------- //
if (defined('SEARCH_PHP')){
$lang_search_php['title'] = 'Sök';
$lang_search_php['submit_search'] = 'sök';
$lang_search_php['keyword_list_title'] = 'Nyckelordslista';
$lang_search_php['keyword_msg'] = 'Ovanstående lista är inte heltäckande. I den ingår inte ord från titlar eller beskrivningar. Prova fulltextsökning.';
$lang_search_php['edit_keywords'] = 'Redigera nyckelord';
$lang_search_php['search in'] = 'Sök i:';
$lang_search_php['ip_address'] = 'IP adress';
$lang_search_php['imgfields'] = 'Sök filer';
$lang_search_php['albcatfields'] = 'Sök album och kategorier';
$lang_search_php['age'] = 'Ålder';
$lang_search_php['newer_than'] = 'Nyare än';
$lang_search_php['older_than'] = 'Äldre än';
$lang_search_php['days'] = 'dagar';
$lang_search_php['all_words'] = 'Matcha alla ord (OCH)';
$lang_search_php['any_words'] = 'Matcha någon av orden (ELLER)';
$lang_search_php['regex'] = 'Matcha hela uttryck';
$lang_search_php['album_title'] = 'Album titlar';
$lang_search_php['category_title'] = 'Kategori titlar';
}

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //
if (defined('SEARCHNEW_PHP')) {
$lang_search_new_php['page_title'] = 'Sök nya filer';
$lang_search_new_php['select_dir'] = 'Markera katalog';
$lang_search_new_php['select_dir_msg'] = 'Den här funktionen låter dig lägga till ett helt parti med filer som du har laddat upp till servern med FTP.<br />Markera den katalog dit du laddade upp dina filer.';
$lang_search_new_php['no_pic_to_add'] = 'Det finns ingen fil att lägga till';
$lang_search_new_php['need_one_album'] = 'Du måste ha minst ett album för att kunna använda den här funktionen';
$lang_search_new_php['warning'] = 'Varning';
$lang_search_new_php['change_perm'] = 'scriptet kan inte skriva till den här katalogen, du måste ändra dess läge till 755 eller 777 innan du försöker att lägga till filer!';
$lang_search_new_php['target_album'] = '<strong>Sätt filer av &quot;</strong>%s<strong>&quot; till </strong>%s';
$lang_search_new_php['folder'] = 'Mapp';
$lang_search_new_php['image'] = 'fil';
$lang_search_new_php['result'] = 'Resultat';
$lang_search_new_php['dir_ro'] = 'Inte skrivbar. ';
$lang_search_new_php['dir_cant_read'] = 'Inte läsbar. ';
$lang_search_new_php['insert'] = 'Lägger till nya filer till galleriet';
$lang_search_new_php['list_new_pic'] = 'Lista på nya filer';
$lang_search_new_php['insert_selected'] = 'Infoga markerade filer';
$lang_search_new_php['no_pic_found'] = 'Inga nya filer hittades';
$lang_search_new_php['be_patient'] = 'Ha tålamod, scriptet behöver tid för att lägga till filerna';
$lang_search_new_php['no_album'] = 'inga album markerade';
$lang_search_new_php['result_icon'] = 'klicka för att se detaljer eller för att ladda upp på nytt';
$lang_search_new_php['notes'] = <<< EOT
    <ul>
        <li>%s: filen har lagts till</li>
        <li>%s: filen är en dublett och finns redan i databasen</li>
        <li>%s: filen kunde inte läggas till, kontrollera din konfiguration och behörigheterna på de kataloger där filerna finns</li>
        <li>%s: du måste markera ett album först</li>
        <li>%s: filen är trasig eller går inte att komma åt</li>
        <li>%s: okänd filtyp</li>
        <li>%s: filen är faktistk en GIF bild</li>
        <li>Om ikonerna inte visas så klicka på den trasiga filen för att se eventuella felmeddelanden producerade av PHP</li>
        <li>Om din webbläsare får timeout, klicka på ladda om-knappen</li>
    </ul>
EOT;
// Translator note: Do not translate the %s placeholders - they are being replaced with icons
$lang_search_new_php['check_all'] = 'Markera alla';
$lang_search_new_php['uncheck_all'] = 'Avmarkera alla';
$lang_search_new_php['no_folders'] = 'Det finns inga mappar inom "albums" mappen ännu. Försäkra dig om att skapa åtminstone en egen mapp inom "albums" mappen och ladda upp dina filer dit via FTP. Du får inte ladda upp till "userpics" eller "edit" mapparna, dessa är reserverade för http uppladdningar och för interna ändamål.';
$lang_search_new_php['browse_batch_add'] = 'Läsbart gränssnitt'; // cpg1.5
$lang_search_new_php['display_thumbs_batch_add'] = 'Förhandsvisa miniatyrbilder'; // cpg1.5
$lang_search_new_php['edit_pics'] = 'Redigera filer';
$lang_search_new_php['edit_properties'] = 'Album egenskaper';
$lang_search_new_php['view_thumbs'] = 'Miniatyrbildsvy';
$lang_search_new_php['add_more_folder'] = 'Batch-lägg till fler filer från mappen %s'; // cpg1.5
}

// ------------------------------------------------------------------------- //
//File send_activation.php
// ------------------------------------------------------------------------- //
if (defined('SEND_ACTIVATION_PHP')) {
$lang_send_activation_php['err_already_logged_in'] = 'Du är redan inloggad!'; // cpg1.5
$lang_send_activation_php['activation_not_required'] = 'Den här webbsidan kräver inte aktivering via e-post'; // cpg1.5
$lang_send_activation_php['err_unk_user'] = 'Vald användare finns inte!'; // cpg1.5
$lang_send_activation_php['resend_act_link'] = 'Skicka aktiveringslänken igen'; // cpg1.5
$lang_send_activation_php['enter_email'] = 'Ange din e-postadress'; // cpg1.5
$lang_send_activation_php['submit'] = 'Gå'; // cpg1.5
$lang_send_activation_php['failed_sending_email'] = 'Misslyckades med att sända aktiveringslänk via e-post'; // cpg1.5
$lang_send_activation_php['activation_email_sent'] = 'En aktiveringslänk har skickats via e-post till %s. Vänligen kontrollera din e-post för att slutföra processen'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File stat_details.php
// ------------------------------------------------------------------------- //

if (defined('STAT_DETAILS_PHP')) {
$lang_stat_details_php['show_hide'] = 'visa/dölj denna kolumn';
$lang_stat_details_php['title'] = 'Statistik'; // cpg1.5
$lang_stat_details_php['vote'] = 'Röstningsdetaljer';
$lang_stat_details_php['hits'] = 'Träffdetaljer';
$lang_stat_details_php['stats'] = 'Röstningsstatistik';
$lang_stat_details_php['users'] = 'Användarstatistik';
$lang_stat_details_php['sdate'] = 'Datum';
$lang_stat_details_php['rating'] = 'Betyg';
$lang_stat_details_php['search_phrase'] = 'Sök fras';
$lang_stat_details_php['referer'] = 'Hänvisare';
$lang_stat_details_php['browser'] = 'Webbläsare';
$lang_stat_details_php['os'] = 'Operativsystem';
$lang_stat_details_php['ip'] = 'IP';
$lang_stat_details_php['uid'] = 'Användarer'; // cpg1.5
$lang_stat_details_php['sort_by_xxx'] = 'Sorterad på %s';
$lang_stat_details_php['ascending'] = 'stigande';
$lang_stat_details_php['descending'] = 'fallande';
$lang_stat_details_php['internal'] = 'int';
$lang_stat_details_php['close'] = 'stäng';
$lang_stat_details_php['hide_internal_referers'] = 'dölj interna hänvisare';
$lang_stat_details_php['date_display'] = 'Datumvisning';
$lang_stat_details_php['records_per_page'] = 'poster per sida';
$lang_stat_details_php['submit'] = 'skicka / förnya';
$lang_stat_details_php['overall_stats'] = 'Övergripande statistik'; // cpg1.5
$lang_stat_details_php['stats_by_os'] = 'Operativsystemets statistik'; // cpg1.5
$lang_stat_details_php['number_of_hits'] = 'Antal träffar'; // cpg1.5
$lang_stat_details_php['total'] = 'Total'; // cpg1.5
$lang_stat_details_php['stats_by_browser'] = 'Webbläsarens statistik'; // cpg1.5
$lang_stat_details_php['overall_stats_config'] = 'Allmän konfigurationsstatistik'; // cpg1.5
$lang_stat_details_php['hit_details'] = 'Behåll detaljerad träffstatistik'; // cpg1.5
$lang_stat_details_php['hit_details_explanation'] = 'Behåll träffstatistik'; // cpg1.5
$lang_stat_details_php['vote_details'] = 'Behåll detaljerad röstningsstatistik'; // cpg1.5
$lang_stat_details_php['vote_details_explanation'] = 'Behåll detaljerad röstningsstatistik'; // cpg1.5
$lang_stat_details_php['empty_hits_table'] = 'Töm all träffstatistik'; // cpg1.5
$lang_stat_details_php['empty_hits_table_confirm'] = 'Är du absolut säker på att du vill radera ALLA träffstatistikposter för HELA ditt galleri? Detta kan inte göras ogjort!'; // cpg1.5 // js-alert
$lang_stat_details_php['empty_votes_table'] = 'Töm all röstningsstatistik'; // cpg1.5
$lang_stat_details_php['empty_votes_table_confirm'] = 'Är du absolut säker på att du vill radera ALLA röstningsposter för HELA ditt galleri? Detta kan inte göras ogjort!'; // cpg1.5 // js-alert
$lang_stat_details_php['submit'] = 'Skicka'; // cpg1.5
$lang_stat_details_php['upd_success'] = 'Coppermine konfigurationen uppdaterades'; // cpg1.5
$lang_stat_details_php['votes'] = 'röster'; // cpg1.5
$lang_stat_details_php['reset_votes_individual'] = 'Nollställ markerad(e) röst(er)'; // cpg1.5
$lang_stat_details_php['reset_votes_individual_confirm'] = 'Är du säker på att du vill radera markerade röster? Detta kan inte göras ogjort!'; // cpg1.5
$lang_stat_details_php['back_to_intermediate'] = 'Backa till medelstor bildvy'; // cpg1.5
$lang_stat_details_php['records_on_page'] = '%s poster på %s sida(or)'; // cpg1.5
$lang_stat_details_php['guest'] = 'Gäst'; // cpg1.5
$lang_stat_details_php['not_implemented'] = 'inte implementerad ännu'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //
if (defined('UPLOAD_PHP')) {
$lang_upload_php['title'] = 'Ladda upp fil';
$lang_upload_php['restrictions'] = 'Begränsningar'; // cpg1.5
$lang_upload_php['choose_method'] = 'Välj uppladdningsmetod'; // cpg1.5
$lang_upload_php['upload_swf'] = 'Flera filer - Flash-stödd (rekommenderas)'; // cpg1.5
$lang_upload_php['upload_single'] = 'enkel - en fil åt gången'; // cpg1.5
$lang_upload_php['up_instr_1'] = 'Markera ett album i listrutan';
$lang_upload_php['up_instr_2'] = 'Klicka på "Bläddra" knappen nedan och navigera till den fil du vill ladda upp. Du kan välja flera filer på en gång genom att trycka Ctrl+Click.';
$lang_upload_php['up_instr_3'] = 'Markera fler filer att ladda upp genom att repetera steg 2';
$lang_upload_php['up_instr_4'] = 'Klicka på "Fortsätt" knappen efter att alla dina filer laddats upp (knappen syns bara när du har laddat upp minst en fil).';
$lang_upload_php['up_instr_5'] = 'Du kommer att skickas till en sida där du kan ange information om filerna du laddade upp. När du är färdig, skicka formuläret genom att använda "Spara ändringar" knappen i slutet av formuläret.';
$lang_upload_php['restriction_zip'] = 'Uppladdade ZIP filer kom att fortsätta att vara komprimerade, de blir inte uppackade på servern.';
$lang_upload_php['restriction_filesize'] = 'Storleken på filer uppladdade från din dator till servern får inte överstiga %s vardera.';
$lang_upload_php['reg_instr_1'] = 'Ogiltig åtgärd vid skapandet av formuläret.';
$lang_upload_php['no_name'] = 'Filnamnet är inte tillgängligt'; // cpg 1.5
$lang_upload_php['no_tmp_name'] = 'Kan inte ladda upp'; // cpg 1.5
$lang_upload_php['no_post'] = 'Filen laddades inte upp av POST.';
$lang_upload_php['forb_ext'] = 'Otillåten filändelse.';
$lang_upload_php['exc_php_ini'] = 'Filstorleken överskriden den i php.ini.';
$lang_upload_php['exc_file_size'] = 'Filen är större än CPG tillåter.';
$lang_upload_php['partial_upload'] = 'Endast delvis uppladdad.';
$lang_upload_php['no_upload'] = 'Ingen uppladdning skedde.';
$lang_upload_php['unknown_code'] = 'Okänd PHP uppladdningsfelkod.';
$lang_upload_php['impossible'] = 'Omöjlig att flytta.';
$lang_upload_php['not_image'] = 'Inte en bild/skadad';
$lang_upload_php['not_GD'] = 'Inte en GD ändelse.';
$lang_upload_php['pixel_allowance'] = 'Höjden och/eller bredden på den uppladdade bilden är större en vad gallerikonfigurationen tillåter.';
$lang_upload_php['failure'] = 'Uppladdningsfel';
$lang_upload_php['no_place'] = 'Den föregående filen kunde inte placeras.';
$lang_upload_php['max_fsize'] = 'Största tillåtna filstorlek är %s';
$lang_upload_php['picture'] = 'Fil';
$lang_upload_php['pic_title'] = 'Filtitel';
$lang_upload_php['description'] = 'Filbeskrivning';
$lang_upload_php['keywords_sel'] = 'Välj ett nyckelord';
$lang_upload_php['err_no_alb_uploadables'] = 'Det finns tyvärr inget album dit du har behörighet att ladda upp filer';
$lang_upload_php['close'] = 'Stäng';
$lang_upload_php['no_keywords'] = 'Tyvärr finns inga nyckelord tillgängliga!';
$lang_upload_php['regenerate_dictionary'] = 'Regenerera lexikon';
$lang_upload_php['allowed_types'] = 'Du har behörighet att ladda upp filer med följande ändelser:'; // cpg1.5
$lang_upload_php['allowed_img_types'] = 'Bildändelser: %s'; // cpg1.5
$lang_upload_php['allowed_mov_types'] = 'Videoändelser: %s'; // cpg1.5
$lang_upload_php['allowed_doc_types'] = 'Dokumentändelser: %s'; // cpg1.5
$lang_upload_php['allowed_snd_types'] = 'Ljudändelser: %s'; // cpg1.5
$lang_upload_php['please_wait'] = 'Vänligen vänta medan scripet laddar upp - detta kan ta en stund'; // cpg1.5
$lang_upload_php['alternative_upload'] = 'Alternativ uppladdningsmetod'; // cpg1.5
$lang_upload_php['xp_publish_promote'] = 'Om du har Windows XP/Vista, kan du också använda XP Upload Wizard för att ladda upp filer. Den har ett enklare användargränssnitt direkt på din dator.'; // cpg1.5
$lang_upload_php['err_js_disabled'] = 'Gränssnittet Flash upload kunde inte laddas. Du måste ha JavaScript aktiverat för att kunna använda gränssnittet flash upload.'; // cpg1.5
$lang_upload_php['err_flash_disabled'] = 'Uppladdningsgränssnittet tar lång tid eller har misslyckats. Kontrollera att Flash Insticksmodul är aktiverad och att en fungerande version av Flash Player är installerad.'; // cpg1.5
$lang_upload_php['err_alternate_method'] = 'Alternativt kan du använda <a href="upload.php?single=1">enstaka</a> filuppladdningsgränssnittet.'; // cpg1.5
$lang_upload_php['err_flash_version'] = 'Uppladdningsgränssnittet kunde inte ladda. Du kan behöva installera eller upgradera Flash Player. Besök <a href="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash">Adobe webbsida</a> för att hämta Flash Player.'; // cpg1.5
$lang_upload_php['flash_loading'] = 'Uppladdningsgränssnittet körs. Vänta ett ögonblick...'; // cpg1.5

$lang_upload_swf_php['browse'] = 'Bläddra...'; //cpg1.5
$lang_upload_swf_php['cancel_all'] = 'Avbryt alla uppladdningar'; //cpg1.5
$lang_upload_swf_php['upload_queue'] = 'Uppladningskö'; //cpg1.5
$lang_upload_swf_php['files_uploaded'] = 'filer uppladdade'; //cpg1.5
$lang_upload_swf_php['all_files'] = 'Alla Filer'; //cpg1.5
$lang_upload_swf_php['status_pending'] = 'Väntar...'; //cpg1.5
$lang_upload_swf_php['status_uploading'] = 'Laddar upp...'; //cpg1.5
$lang_upload_swf_php['status_complete'] = 'Färdig.'; //cpg1.5
$lang_upload_swf_php['status_cancelled'] = 'Avbruten.'; //cpg1.5
$lang_upload_swf_php['status_stopped'] = 'Stoppad.'; //cpg1.5
$lang_upload_swf_php['status_failed'] = 'Uppladdning Misslyckades.'; //cpg1.5
$lang_upload_swf_php['status_too_big'] = 'Filen är för stor.'; //cpg1.5
$lang_upload_swf_php['status_zero_byte'] = 'Kan inte ladda upp filer med 0 Byte.'; //cpg1.5
$lang_upload_swf_php['status_invalid_type'] = 'Otillåten filtyp.'; //cpg1.5
$lang_upload_swf_php['status_unhandled'] = 'Ohanterat fel'; //cpg1.5
$lang_upload_swf_php['status_upload_error'] = 'Uppladdningsfel: '; //cpg1.5
$lang_upload_swf_php['status_server_error'] = 'Server (IO) Fel'; //cpg1.5
$lang_upload_swf_php['status_security_error'] = 'Säkerhetsfel'; //cpg1.5
$lang_upload_swf_php['status_upload_limit'] = 'Uppladdningsgräns överskriden.'; //cpg1.5
$lang_upload_swf_php['status_validation_failed'] = 'Behörighetsfel. Uppladdndingen hoppades över.'; //cpg1.5
$lang_upload_swf_php['queue_limit'] = 'Du har försökt köa för många filer.'; //cpg1.5
$lang_upload_swf_php['upload_limit_1'] = 'Du har nått uppladdningsgränsen.'; //cpg1.5
$lang_upload_swf_php['upload_limit_2'] = 'Du får markerara upp till %s fil(er)'; //cpg1.5
}

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //
if (defined('USERMGR_PHP')) {
$lang_usermgr_php['memberlist'] = 'Medlemslista';
$lang_usermgr_php['user_manager'] = 'Hantera Användare';
$lang_usermgr_php['title'] = 'Hantera användare';
$lang_usermgr_php['name_a'] = 'Namn stigande';
$lang_usermgr_php['name_d'] = 'Namn fallande';
$lang_usermgr_php['group_a'] = 'Grupp stigande';
$lang_usermgr_php['group_d'] = 'Grupp fallande';
$lang_usermgr_php['reg_a'] = 'Registreringsdatum fallande';
$lang_usermgr_php['reg_d'] = 'Registreringsdatum descending';
$lang_usermgr_php['pic_a'] = 'Filantal stigande';
$lang_usermgr_php['pic_d'] = 'Filantal fallande';
$lang_usermgr_php['disku_a'] = 'Diskanvändning stigande';
$lang_usermgr_php['disku_d'] = 'Diskanvändning fallande';
$lang_usermgr_php['lv_a'] = 'Senaste besök stigande';
$lang_usermgr_php['lv_d'] = 'Senaste besök fallande';
$lang_usermgr_php['sort_by'] = 'Sortera användare efter';
$lang_usermgr_php['err_no_users'] = 'Användartabellen är tom!';
$lang_usermgr_php['err_edit_self'] = 'Du kan inte redigera din egen profil, använd \'Min profil\' för det';
$lang_usermgr_php['with_selected'] = 'Med vald:';
$lang_usermgr_php['delete_files_no'] = 'behåll offentliga filer (men anonymiserade)';
$lang_usermgr_php['delete_files_yes'] = 'radera offentliga filer också';
$lang_usermgr_php['delete_comments_no'] = 'behåll kommentarer (men anonymiserade)';
$lang_usermgr_php['delete_comments_yes'] = 'radera kommentarer också';
$lang_usermgr_php['activate'] = 'Aktivatera';
$lang_usermgr_php['deactivate'] = 'Inaktivera';
$lang_usermgr_php['reset_password'] = 'Nollställ Lösenord';
$lang_usermgr_php['change_primary_membergroup'] = 'Ändra primär användargrupp';
$lang_usermgr_php['add_secondary_membergroup'] = 'Lägg till sekundär användargrupp';
$lang_usermgr_php['name'] = 'Användarnamn';
$lang_usermgr_php['group'] = 'Grupp';
$lang_usermgr_php['inactive'] = 'Inaktive';
$lang_usermgr_php['operations'] = 'Operationer';
$lang_usermgr_php['pictures'] = 'Filer';
$lang_usermgr_php['disk_space_used'] = 'Använt utrymme';
$lang_usermgr_php['disk_space_quota'] = 'Kvot'; // cpg1.5
$lang_usermgr_php['registered_on'] = 'Registrering';
$lang_usermgr_php['last_visit'] = 'Senast besök';
$lang_usermgr_php['u_user_on_p_pages'] = '%d användare på %d sida(or)';
$lang_usermgr_php['confirm_del'] = 'Är du säker på att du vill RADERA den här användaren?\\nAlla hans/hennes filer och album kommer också att raderas.'; // js-alert
$lang_usermgr_php['mail'] = 'EPOST';
$lang_usermgr_php['err_unknown_user'] = 'Markerad användare finns inte!';
$lang_usermgr_php['modify_user'] = 'Ändra användare';
$lang_usermgr_php['notes'] = 'Noteringar';
$lang_usermgr_php['note_list'] = 'Om du inte vill ändra nuvarande lösenord, lämna lösenordsfältet blankt';
$lang_usermgr_php['password'] = 'Lösenord';
$lang_usermgr_php['user_active'] = 'Användaren är aktiv';
$lang_usermgr_php['user_group'] = 'Användargrupp';
$lang_usermgr_php['user_email'] = 'User email';
$lang_usermgr_php['user_web_site'] = 'Användarens webbsida';
$lang_usermgr_php['create_new_user'] = 'Skapa ny användare';
$lang_usermgr_php['user_location'] = 'Användarens geografisk plats';
$lang_usermgr_php['user_interests'] = 'Användarens intressen';
$lang_usermgr_php['user_occupation'] = 'Användarens sysselsättning';
$lang_usermgr_php['user_profile1'] = '$user_profile1';
$lang_usermgr_php['user_profile2'] = '$user_profile2';
$lang_usermgr_php['user_profile3'] = '$user_profile3';
$lang_usermgr_php['user_profile4'] = '$user_profile4';
$lang_usermgr_php['user_profile5'] = '$user_profile5';
$lang_usermgr_php['user_profile6'] = '$user_profile6';
$lang_usermgr_php['latest_upload'] = 'Recent uploads';
$lang_usermgr_php['no_latest_upload'] = 'Har inte laddat upp någon fil'; // cpg1.5
$lang_usermgr_php['last_comments'] = 'Senaste kommentarer'; // cpg1.5
$lang_usermgr_php['no_last_comments'] = 'Har inte gjort några kommentarer'; // cpg1.5
$lang_usermgr_php['comments'] = 'Kommentarer'; // cpg1.5
$lang_usermgr_php['never'] = 'aldrig';
$lang_usermgr_php['search'] = 'Användarsökning';
$lang_usermgr_php['submit'] = 'Skicka';
$lang_usermgr_php['search_submit'] = 'Kör!';
$lang_usermgr_php['search_result'] = 'Sökresultat för: ';
$lang_usermgr_php['alert_no_selection'] = 'Du måste markera åtminstone en användare först!'; // js-alert
$lang_usermgr_php['select_group'] = 'Markera grupp';
$lang_usermgr_php['groups_alb_access'] = 'Album behörigheter per grupp';
$lang_usermgr_php['category'] = 'Kategori';
$lang_usermgr_php['modify'] = 'Ändra?';
$lang_usermgr_php['group_no_access'] = 'Denna grupp har inga särskilda behörigheter';
$lang_usermgr_php['notice'] = 'Meddelande';
$lang_usermgr_php['group_can_access'] = 'Album som bara "%s" har tillträde till';
$lang_usermgr_php['send_login_data'] = 'Skicka inloggningsdatat till denna användare (Lösenord skickas via e-post)'; // cpg1.5
$lang_usermgr_php['send_login_email_subject'] = 'Din nya kontoinformation'; // cpg1.5
$lang_usermgr_php['failed_sending_email'] = 'E-post med inloggningsinformation kunde inte skickas!'; // cpg1.5
$lang_usermgr_php['view_profile'] = 'Se profil'; // cpg1.5
$lang_usermgr_php['edit_profile'] = 'Redigera profil'; // cpg1.5
$lang_usermgr_php['ban_user'] = 'Blockera användare'; // cpg1.5
$lang_usermgr_php['user_is_banned'] = 'Användaren är blockerad'; // cpg1.5
$lang_usermgr_php['status'] = 'Status'; // cpg1.5
$lang_usermgr_php['status_active'] = 'aktive'; // cpg1.5
$lang_usermgr_php['status_inactive'] = 'inaktiv'; // cpg1.5
$lang_usermgr_php['total'] = 'Total'; // cpg1.5
$lang_usermgr_php['send_login_data_email'] = <<< EOT
Ett nytt konto har skapats åt dig på  {SITE_NAME}.

Du kan nu logga in på <a href="{SITE_LINK}">{SITE_LINK}</a> med användarnamn "{USER_NAME}" och lösenord "{USER_PASS}"


Med vänliga hälsningar,

{SITE_NAME}

EOT;
}

// ------------------------------------------------------------------------- //
// File update.php
// ------------------------------------------------------------------------- //
if (defined('UPDATE_PHP')) {
$lang_update_php['title'] = 'Uppdateraren'; // cpg1.5
$lang_update_php['welcome_updater'] = 'Välkommen till Coppermine uppdateraren'; // cpg1.5
$lang_update_php['could_not_authenticate'] = 'Kunde inte verifiera dig'; // cpg1.5
$lang_update_php['provide_admin_account'] = 'Vänligen ange uppgifter om ditt Coppermine administratörskonto eller ditt MySQL konto'; // cpg1.5
$lang_update_php['try_again'] = 'Förök igen'; // cpg1.5
$lang_update_php['mysql_connect_error'] = 'Kunde inte skapa en MySQL anslutning'; // cpg1.5
$lang_update_php['mysql_database_error'] = 'MySQL kunde inte hitta en databas vid namn %s'; // cpg1.5
$lang_update_php['mysql_said'] = 'MySQL sa'; // cpg1.5
$lang_update_php['check_config_file'] = 'Vänligen kontrollera MySQL uppgifter på %s'; // cpg1.5
$lang_update_php['performing_database_updates'] = 'Utför Databas Uppdatering'; // cpg1.5
$lang_update_php['performing_file_updates'] = 'Utför Fil Uppdatering'; // cpg1.5
$lang_update_php['already_done'] = 'Redan färdig'; // cpg1.5
$lang_update_php['password_encryption'] = 'Kryptering av lösenord'; // cpg1.5
$lang_update_php['alb_password_encryption'] = 'Kryptering av album lösenord'; // cpg1.5
$lang_update_php['category_tree'] = 'Kategoritruktur'; // cpg1.5
$lang_update_php['authentication_needed'] = 'Verifiering behövs'; // cpg1.5
$lang_update_php['username'] = 'Användarnamn'; // cpg1.5
$lang_update_php['password'] = 'Lösenord'; // cpg1.5
$lang_update_php['update_completed'] = 'Uppdateringen är färdig'; // cpg1.5
$lang_update_php['check_versions'] = 'Det rekommenderas att du %scheck your file versions%s om du uppgraderat från en äldre version av Coppermine'; // cpg1.5 // Leave the %s untouched when translating - it wraps the link
$lang_update_php['start_page'] = 'Om du inte har eller vill kontrollera, kan du gå till %sgalleriets startsida%s'; // cpg1.5 // Leave the %s untouched when translating - it wraps the link
$lang_update_php['errors_encountered'] = 'Följande fel inträffade och behöver rättas först'; // cpg1.5
$lang_update_php['delete_file'] = 'Radera %s'; // cpg1.5
$lang_update_php['could_not_delete'] = 'Kunde inte radera på grund av otillräckliga behörigheter. Radera filen manuellt!'; // cpg1.5
$lang_update_php['rename_file'] = 'Döp om %s to %s'; // cpg1.5
$lang_update_php['could_not_rename'] = 'Kunde inte döpa om på grund av otillräckliga behörigheter. Döp om filen manuellt!'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //
if (defined('UTIL_PHP')) {
$lang_util_php['title'] = 'Administrationsverktyg'; // cpg1.5
$lang_util_php['file'] = 'Fil';
$lang_util_php['problem'] = 'Problem';
$lang_util_php['status'] = 'Status';
$lang_util_php['title_set_to'] = 'titel satt till';
$lang_util_php['submit_form'] = 'skicka';
$lang_util_php['titles_updated'] = '%s Titlar Uppdaterade.'; // cpg1.5
$lang_util_php['updated_successfully'] = 'uppdaterades probkemfritt'; // cpg1.5
$lang_util_php['error_create'] = 'FEL vid skapandet av';
$lang_util_php['continue'] = 'Behandla fler filer'; // cpg1.5
$lang_util_php['main_success'] = 'Filen %s används som huvudfil';
$lang_util_php['error_rename'] = 'Fel vid omdöpning av %s till %s';
$lang_util_php['error_not_found'] = 'Filen %s hittades inte';
$lang_util_php['back'] = 'tillbaka till Administrationsverktygets start'; // cpg1.5
$lang_util_php['thumbs_wait'] = 'Uppdaterar miniatyrbilder och/eller skalar bilder, vänligen vänta...';
$lang_util_php['thumbs_continue_wait'] = 'Fortsätter att uppdatera miniatyrbilder och/eller skala bilder...';
$lang_util_php['titles_wait'] = 'Uppdaterar titlar, vänligen vänta...';
$lang_util_php['delete_wait'] = 'Raderar titlar, vänligen vänta...';
$lang_util_php['replace_wait'] = 'Raderar original och ersätter dem med skalade bilder, vänligen vänta..';
$lang_util_php['update'] = 'Uppdaterar miniatyrbilder och/eller skalade bilder';
$lang_util_php['update_what'] = 'Vad ska uppdateras';
$lang_util_php['update_thumb'] = 'Bara miniatyrbilder';
$lang_util_php['update_pic'] = 'Bara skalade bilder';
$lang_util_php['update_both'] = 'Både miniatyrbilder och skalade bilder';
$lang_util_php['update_number'] = 'Antal behandlade bilder per klick';
$lang_util_php['update_option'] = '(Försök att ställa ner det här värdet om du upplever timeout problem)';
$lang_util_php['update_missing'] = 'Bara uppdatera saknade filer'; // cpg1.5
$lang_util_php['filename_title'] = 'Filnamn &rArr; Fil titel';
$lang_util_php['filename_how'] = 'Hur ska filtiteln ändras';
$lang_util_php['filename_remove'] = 'Radera ändelser (.jpg eller annat) och ersätta _ (understrykningstecken) med blanktecken'; // cpg1.5
$lang_util_php['filename_euro'] = 'Ändra 2003_11_23_13_20_20.jpg to 23/11/2003 13:20';
$lang_util_php['filename_us'] = 'Ändra 2003_11_23_13_20_20.jpg till 11/23/2003 13:20';
$lang_util_php['filename_time'] = 'Ändra 2003_11_23_13_20_20.jpg till 13:20';
$lang_util_php['notitle'] = 'Gäller endast för filer med tomma titlar'; // cpg1.5
$lang_util_php['delete_title'] = 'Radera filtitlar';
$lang_util_php['delete_title_explanation'] = 'Detta kommer att radera alla titalr på filer i det album du anger.';
$lang_util_php['delete_original'] = 'Radera bilder i originalstorlek';
$lang_util_php['delete_original_explanation'] = 'Detta kommera att radera bilder i originalstorlek.';
$lang_util_php['delete_intermediate'] = 'Radera medelstora bilder';
$lang_util_php['delete_intermediate_explanation1'] = 'Detta kommer att radera medelstora (normala) bilder.'; // cpg1.5
$lang_util_php['delete_intermediate_explanation2'] = 'Använd detta för att friställa utrymme om du har inaktiverat \'Skapa medelstora bilder\' i konfigurationen efter det att du laddat upp bilder.'; // cpg1.5
$lang_util_php['delete_intermediate_check'] = 'Konfigurationsalternativet \'Skapa medelstora bilder\' är för närvarande %s.'; // cpg1.5
$lang_util_php['no_image'] = '%s har hoppats över eftersom det inte är en bild.'; // cpg1.5
$lang_util_php['enabled'] = 'aktiverad'; // cpg1.5
$lang_util_php['disabled'] = 'inaktiverad'; // cpg1.5
$lang_util_php['delete_replace'] = 'Radera originalbilderna och ersätt dem med stora versioner';
$lang_util_php['titles_deleted'] = 'Alla titlar i markerade album raderade';
$lang_util_php['deleting_intermediates'] = 'Raderar medelstora bilder, vänligen vänta...';
$lang_util_php['searching_orphans'] = 'Söker efter överblivna filer, vänligen vänta...';
$lang_util_php['delete_orphans'] = 'Raderar kommentarer på saknade filer';
$lang_util_php['delete_orphans_explanation'] = 'Detta hittar kommentarer som hör till filer som  inte längre finns i galleriet, och gör det möjligt för dig att radera dem. <br />Kontrollera alla album.';
$lang_util_php['update_full_normal_thumb'] = 'Allt: fullstort, medelstort och miniatyrer.'; // cpg1.5
$lang_util_php['update_full_normal'] = 'Både skalat och fullstorlek (om en originalkopia finns tillgänglig)'; // cpg1.5
$lang_util_php['update_full'] = 'Bara fullstorlek (om en originalkopia finns tillgänglig)'; // cpg1.5
$lang_util_php['delete_back'] = 'Radera originalbildbackup för vattenstämplad bild'; // cpg1.5
$lang_util_php['delete_back_explanation'] = 'Detta kommer att radera backupbilden. Du kommer att spara plats på disken men kommer inte att kunna ångra vattenstämpeln!! Efter detta blir vattenstämpeln permanent.'; // cpg1.5
$lang_util_php['finished'] = '<br />Slutför uppdateringen av miniatyrbilder!<br />'; // cpg1.5
$lang_util_php['autorefresh'] = 'Förnya automatiskt (nu behöver du inte längre trycka på Fortsätt-knappen)'; // cpg1.5
$lang_util_php['refresh_db'] = 'Ladda om fildimensioner och storleksinformation.';
$lang_util_php['refresh_db_explanation'] = 'Detta kommer att läsa om filstorlekar och dimensioner. Använd detta om kvoter är felaktiga eller om du ändrat filer manuellt.';
$lang_util_php['reset_views'] = 'Nollställ visningsräknare';
$lang_util_php['reset_views_explanation'] = 'Sätter alla filvisningsräknare till noll i valt album.';
$lang_util_php['reset_success'] = 'Nollställning färdig'; // cpg1.5
$lang_util_php['orphan_comment'] = 'överblivna kommentarer hittade';
$lang_util_php['delete_all'] = 'Radera alla';
$lang_util_php['delete_all_orphans'] = 'Radera alla överblivna?';
$lang_util_php['comment'] = 'Kommentar: ';
$lang_util_php['nonexist'] = 'tillhör ej existerande filer # ';
$lang_util_php['delete_old'] = 'Rader filer som är äldre än ett bestämt antal dagar'; // cpg1.5
$lang_util_php['delete_old_explanation'] = 'Detta kommer att radera filer som är äldre än det antal dagar du specificerar (miniatyrer, medelestora och fullstora). Använd den här funktionen för att frigöra diskutrymme.'; // cpg1.5
$lang_util_php['delete_old_warning'] = 'Varning: Filerna du anger kommer att raderas för gott utan fler varningar!'; // cpg1.5
$lang_util_php['deleting_old'] = 'Raderar äldre bilder, vänligen vänta...'; // cpg1.5
$lang_util_php['older_than'] = 'Raderar filer äldre än %s dagar'; // cpg1.5
$lang_util_php['del_orig'] = 'Originalfilen %s har raderats'; // cpg1.5
$lang_util_php['del_intermediate'] = 'Den medelstora bilden %s har raderats'; // cpg1.5
$lang_util_php['del_thumb'] = 'Miniatyrbilden %s har raderats'; // cpg1.5
$lang_util_php['del_error'] = 'Fel vid radering av %s!'; // cpg1.5
$lang_util_php['affected_records'] = '%s påverkade poster.'; // cpg1.5
$lang_util_php['all_albums'] = 'Alla Album'; // cpg1.5
$lang_util_php['update_result'] = 'Uppdateringsresultat'; // cpg1.5
$lang_util_php['incorrect_filesize'] = 'Total filstorlek är felaktig'; // cpg1.5
$lang_util_php['database'] = 'Databas: '; // cpg1.5
$lang_util_php['bytes'] = ' bytes'; // cpg1.5
$lang_util_php['actual'] = 'Faktisk: '; // cpg1.5
$lang_util_php['updated'] = 'Uppdaterad'; // cpg1.5
$lang_util_php['filesize_error'] = 'Kunde inte få tag i filstorlek (kan vara ogiltig fil), hoppar över....'; // cpg1.5
$lang_util_php['skipped'] = 'Hoppad över'; // cpg1.5
$lang_util_php['incorrect_dimension'] = 'Dimensionen är felaktig'; // cpg1.5
$lang_util_php['dimension_error'] = 'Kunde inte få tag i information om dimension, hoppar över....'; // cpg1.5
$lang_util_php['cannot_fix'] = 'Kan inte reparera'; // cpg1.5
$lang_util_php['fullpic_error'] = 'Fil %s finns inte!'; // cpg1.5
$lang_util_php['no_prob_detect'] = 'Inga problem upptäcktes'; // cpg1.5
$lang_util_php['no_prob_found'] = 'Inga problem blev funna.'; // cpg1.5
$lang_util_php['keyword_convert'] = 'Konvertera nyckelordsavgränsare'; // cpg1.5
$lang_util_php['keyword_from_to'] = 'Konvertera nyckelordsavgränsare från %s till %s'; // cpg1.5
$lang_util_php['keyword_set'] = 'Sätt galleriets nyckelordsavgränsarer till ett nytt värde'; // cpg1.5
$lang_util_php['keyword_replace_before'] = 'Före konvertering, ersätt %s med %s'; // cpg1.5
$lang_util_php['keyword_replace_after'] = 'Efter konvertering, ersätt %s med %s'; // cpg1.5
$lang_util_php['keyword_replace_values'] = array('_'=>'underscore', '-'=>'hyphen', '~'=>'tilde'); // cpg1.5
$lang_util_php['keyword_explanation'] = 'Detta kommer att konvertera (byta ut) nyckelordsavgränsaren för alla dina filer från ett värde till ett annat. Se hjälpdokumentationen för mer information.'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File versioncheck.php
// ------------------------------------------------------------------------- //
if (defined('VERSIONCHECK_PHP')) {
$lang_versioncheck_php['title'] = 'Versionskontroll';
$lang_versioncheck_php['versioncheck_output'] = 'Versionskontroll output';
$lang_versioncheck_php['file'] = 'fil';
$lang_versioncheck_php['folder'] = 'mapp';
$lang_versioncheck_php['outdated'] = 'äldre än %s';
$lang_versioncheck_php['newer'] = 'nyare än %s';
$lang_versioncheck_php['modified'] = 'ändrad';
$lang_versioncheck_php['not_modified'] = 'oändrad'; // cpg1.5
$lang_versioncheck_php['needs_change'] = 'behöver ändras';
$lang_versioncheck_php['review_permissions'] = 'Granska Behörigheter';
$lang_versioncheck_php['inaccessible'] = 'Filen är inte åtkomlig';
$lang_versioncheck_php['review_version'] = 'Din fil har gått ut';
$lang_versioncheck_php['review_dev_version'] = 'Din fil är nyare än förväntat';
$lang_versioncheck_php['review_modified'] = 'Filen kan vara skadad (eller så har du avsiktligt redigerat den)';
$lang_versioncheck_php['review_missing'] = '%s saknas eller är oåtkomliga';
$lang_versioncheck_php['existing'] = 'finns';
$lang_versioncheck_php['review_removed_existing'] = 'Filen måste raderas av säkerhetsskäl';
$lang_versioncheck_php['counter'] = 'Räknare';
$lang_versioncheck_php['type'] = 'Typ';
$lang_versioncheck_php['path'] = 'Path';
$lang_versioncheck_php['missing'] = 'Saknas';
$lang_versioncheck_php['permissions'] = 'Behörigheter';
$lang_versioncheck_php['version'] = 'Version';
$lang_versioncheck_php['revision'] = 'Omarbetad';
$lang_versioncheck_php['modified'] = 'Ändrad';
$lang_versioncheck_php['comment'] = 'Kommentar';
$lang_versioncheck_php['help'] = 'Hjälp';
$lang_versioncheck_php['repository_link'] = 'Filutrymme';
$lang_versioncheck_php['browse_corresponding_page_subversion'] = 'Browse page corresponding to this file in the project\'s subversion repository';
$lang_versioncheck_php['mandatory'] = 'obligatorisk';
$lang_versioncheck_php['mandatory_missing'] = 'Obligatorisk fil saknas'; // cpg1.5
$lang_versioncheck_php['optional'] = 'valfri';
$lang_versioncheck_php['removed'] = 'borttagen'; // cpg1.5
$lang_versioncheck_php['options'] = 'Val';
$lang_versioncheck_php['display_output'] = 'Visa output';
$lang_versioncheck_php['on_screen'] = 'Helskärm';
$lang_versioncheck_php['text_only'] = 'Text-endast';
$lang_versioncheck_php['errors_only'] = 'Visa bara eventuella fel';
$lang_versioncheck_php['hide_images'] = 'Dölj bilder'; // cpg1.5
$lang_versioncheck_php['no_modification_check'] = 'Kontrollera inte för ändrade filer'; // cpg1.5
$lang_versioncheck_php['do_not_connect_to_online_repository'] = 'Anslut inte till filutrymmet online';
$lang_versioncheck_php['online_repository_explain'] = 'rekommenderas bara om anslutning misslyckades';
$lang_versioncheck_php['submit'] = 'skicka / förnya';
$lang_versioncheck_php['select_all'] = 'Välj alla'; // js-alert
$lang_versioncheck_php['files_folder_processed'] = 'Visar %s objekt i %s mappar/filer behandlade med %s möjliga problem';
$lang_versioncheck_php['read'] = 'Läs'; // cpg1.5
$lang_versioncheck_php['write'] = 'Skriv'; // cpg1.5
$lang_versioncheck_php['warning'] = 'Varning'; // cpg1.5
$lang_versioncheck_php['not_applicable'] = 'n/a'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File view_log.php
// ------------------------------------------------------------------------- //
if (defined('VIEWLOG_PHP')) {
$lang_viewlog_php['delete_all'] = 'Radera alla loggar';
$lang_viewlog_php['delete_this'] = 'Radera denna logg';
$lang_viewlog_php['view_logs'] = 'Visa loggar';
$lang_viewlog_php['no_logs'] = 'Inga loggar skapade.';
$lang_viewlog_php['last_updated'] = 'senast uppdaterad'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File xp_publish.php
// ------------------------------------------------------------------------- //
if (defined('XP_PUBLISH_PHP')) {
$lang_xp_publish_php['title'] = 'XP Web Publiceringsguide';
$lang_xp_publish_php['client_header'] = 'XP Web Publisceringsguide'; // cpg1.5
$lang_xp_publish_php['requirements'] = 'Krav'; // cpg1.5
$lang_xp_publish_php['windows_xp'] = 'Windows XP / Vista'; // cpg1.5
$lang_xp_publish_php['no_windows_xp'] = 'Du verkar ha ett annat operativsystem som inte stöds'; // cpg1.5
$lang_xp_publish_php['no_os_detect'] = 'Kunde inte avgöra ditt operativsystem'; // cpg1.5
$lang_xp_publish_php['requirement_http_upload'] = 'En fungerande installation av Coppermine där http uppladdning fungerar korrekt'; // cpg1.5
$lang_xp_publish_php['requirement_ie'] = 'Microsoft Internet Explorer'; // cpg1.5
$lang_xp_publish_php['requirement_permissions'] = 'Galleriets administratör måste ha beviljat dig behörighet att ladda upp'; // cpg1.5
$lang_xp_publish_php['requirement_login'] = 'Du måste vara inloggad för att kunna ladda upp'; // cpg1.5
$lang_xp_publish_php['no_ie'] = 'Du verkar använda en webbläsare som inte stöds'; // cpg1.5
$lang_xp_publish_php['no_browser_detect'] = 'Kunde inte avgöra din webbläsare '; // cpg1.5
$lang_xp_publish_php['no_gallery_name'] = 'Du måste ange ett gallerinamn i konfigurationen'; // cpg1.5
$lang_xp_publish_php['no_gallery_description'] = 'Du måste ange en galleribeskrivning i konfigurationen'; // cpg1.5
$lang_xp_publish_php['howto_install'] = 'Hur man installerar'; // cpg1.5
$lang_xp_publish_php['install_right_click'] = 'Högerklicka på %sdenna länk%s och välj &quot;spara mål som...&quot;'; // cpg1.5 // translator note: don't replace the %s - that placeholder token needs to go untranslated
$lang_xp_publish_php['install_save'] = 'Spara filen på din dator. När du sparar den, så kontrollera att det föreslagna filnamnet är <tt>cpg_###.reg</tt> (### representerar en numerisk tidsstämpel). Ändra till det namnet om nödvändigt (lämna kvar numren)'; // cpg1.5
$lang_xp_publish_php['install_execute'] = 'Efter att nedladdningen slutförts, kör filen genom att dubbelklicka på den och registrera din server på webbpubliceringsguiden.'; // cpg1.5
$lang_xp_publish_php['usage'] = 'Användning'; // cpg1.5
$lang_xp_publish_php['select_files'] = 'I Windows Explorer, välj de filer du vill ladda upp'; // cpg1.5
$lang_xp_publish_php['display_tasks'] = 'Kontrollera att mapparna inte visas på Explorers vänstra panel'; // cpg1.5
$lang_xp_publish_php['publish_on_the_web'] = 'klicka på &quot;Publish xxx på web&quot; vänstra panelen'; // cpg1.5
$lang_xp_publish_php['confirm_selection'] = 'Bekräfta ditt filval'; // cpg1.5
$lang_xp_publish_php['select_service'] = 'I listan över de tjänster som visas väljder de en för ditt fotogalleri (det har ditt galleris namn)'; // cpg1.5
$lang_xp_publish_php['enter_login'] = 'Ange din inloggningsinformation om det behövs'; // cpg1.5
$lang_xp_publish_php['select_album'] = 'Välj ett målalbum för dina bilder eller skapa ett nytt'; // cpg1.5
$lang_xp_publish_php['next'] = 'Klicka på &quot;nästa&quot;'; // cpg1.5
$lang_xp_publish_php['upload_starts'] = 'Uppladdningen av dina bilder bör starta'; // cpg1.5
$lang_xp_publish_php['upload_completed'] = 'När det är slutfört, kontrollera i ditt galleri att bilderna har adderats korrekt'; // cpg1.5
$lang_xp_publish_php['welcome'] = 'Välkommen <strong>%s</strong>,';
$lang_xp_publish_php['need_login'] = 'Du måste logga in på galleriet genom att använda Internet Explorer innan du kan använda denna guide.<p/><p>När du loggat in, glöm inte att bocka för &quot;kom ihåg mig&quot; om det finns att välja på.';
$lang_xp_publish_php['no_alb'] = 'Tyvärr finns inget album där du har behörighet att ladda upp bilder med denna guide.';
$lang_xp_publish_php['upload'] = 'Ladda upp bilder till ett album som redan finns';
$lang_xp_publish_php['create_new'] = 'Skapa ett nytt album för dina bilder';
$lang_xp_publish_php['category'] = 'Kategori';
$lang_xp_publish_php['new_alb_created'] = 'Ditt nya album &quot;<strong>%s</strong>&quot; har skapats.';
$lang_xp_publish_php['continue'] = 'Klicka på &quot;Nästa&quot; fr att börja ladda upp dina bilder';
$lang_xp_publish_php['link'] = '';
}

// ------------------------------------------------------------------------- //
// Core plugins
// ------------------------------------------------------------------------- //
if (defined('CORE_PLUGIN')) {
$lang_plugin_php['usergal_alphatabs_config_name'] = 'Användargalleri alfabetiska flikar'; // cpg1.5
$lang_plugin_php['usergal_alphatabs_config_description'] = 'Vad det gör: visar flikar från A till Z överst på användargallierier som besökare kan klicka för att komma direkt till en sida som bara visar alla gallerier som tillhör användare vars namn börjar på den valda bokstaven. Insticksmodulen rekommenderas bara om du har ett stort antal användagallerier.'; // cpg1.5
$lang_plugin_php['usergal_alphatabs_jump_by_username'] = 'Hoppa med användarnamn'; // cpg1.5
$lang_plugin_php['sample_config_name'] = 'Exempel på insticksmodul'; // cpg1.5
$lang_plugin_php['sample_config_description'] = 'Det här är ett exempel på en insticksmodul. Det gör inget särskilt meningsfullt - det är bara menat att visa vad en incticksmodul kan göra och hur den ska kodas. När den aktiverats kommer den att visa lite röd exempeltext.'; // cpg1.5
$lang_plugin_php['sample_plugin_documentation'] = 'Dokumentation till insticksmodulen'; // cpg1.5
$lang_plugin_php['sample_plugin_support'] = 'Support för insticksmodulen'; // cpg1.5
$lang_plugin_php['sample_install_explain'] = 'Ange användarnamn (\'foo\') och lösenord (\'bar\') för att installera'; // cpg1.5
$lang_plugin_php['sample_install_username'] = 'Användarnamn'; // cpg1.5
$lang_plugin_php['sample_install_password'] = 'Lösenord'; // cpg1.5
$lang_plugin_php['sample_output'] = 'Det här är exempel på test som skickats av exempelinsticksmodulen'; // cpg1.5
$lang_plugin_php['opensearch_config_name'] = 'OpenSearch'; // cpg1.5
$lang_plugin_php['opensearch_config_description'] = 'En implementering av <a href="http://www.opensearch.org/" rel="external" class="external">OpenSearch</a> för Coppermine.<br />När det aktiveras kan besökare lägga ditt galleri till sin webbläsares sökfält.'; // cpg1.5
$lang_plugin_php['opensearch_search'] = 'Sök %s'; // cpg1.5
$lang_plugin_php['opensearch_extra'] = 'Du kan vilja lägga till lite text på din sida som förklarar vad insticksmodulen gör'; // cpg1.5
$lang_plugin_php['opensearch_failed_to_open_file'] = 'Kunde inte öppna fil %s - kontrollera behörigheter'; // cpg1.5
$lang_plugin_php['opensearch_failed_to_write_file'] = 'Kunde inte skriva till filen %s - kontrollera behörigheter'; // cpg1.5
$lang_plugin_php['opensearch_form_header'] = 'Ange de uppgifter som ska användas för beskrivningsfilen'; // cpg1.5
$lang_plugin_php['opensearch_gallery_url'] = 'Gallery URL (måste vara korrekt)'; // cpg1.5
$lang_plugin_php['opensearch_display_name'] = 'Namn som det visas i webbläsaren'; // cpg1.5
$lang_plugin_php['opensearch_description'] = 'Beskrivning'; // cpg1.5
$lang_plugin_php['opensearch_character_limit'] = '%s teckenbegränsning'; // cpg1.5
$lang_plugin_php['onlinestats_description'] = 'Visa ett block på varje gallerisida som visare användare och gäster som är online.';
$lang_plugin_php['onlinestats_name'] = 'Vem är online?';
$lang_plugin_php['onlinestats_config_extra'] = 'För att aktivera insticksmodulen (göra så att den faktistk visar ett block med onlinestatistik), så har texten "onlinestats" (snedstrecksavgränsad) lagts till i "huvudsidans innehåll" i <a href="admin.php">Copperminekonfigurationen</a> i avsnittet "Album listvy". Inställning bör nu se ut som  "breadcrumb/catlist/alblist/onlinestats" eller liknande. För att ändra position på blocket, flytta runt texten "onlinestats" i konfigurationsfältet.';
$lang_plugin_php['onlinestats_config_install'] = 'Insticksmodulen kör ytterligare frågor mot datasbasen när den exekveras, och kräver extra resurser. Om ditt Coppermine galleri är långsamt eller har många användare, så bör du inte använda det.';
$lang_plugin_php['onlinestats_we_have_reg_member'] = 'Det finns %s registrerade användare';
$lang_plugin_php['onlinestats_we_have_reg_members'] = ' Det finns %s registrerade användare';
$lang_plugin_php['onlinestats_most_recent'] = 'Senast registrerade användare är %s';
$lang_plugin_php['onlinestats_is'] = 'Totalt är %s besökare online';
$lang_plugin_php['onlinestats_are'] = 'Totalt är %s besökare online';
$lang_plugin_php['onlinestats_and'] = 'och';
$lang_plugin_php['onlinestats_reg_member'] = '%s registrerade användare';
$lang_plugin_php['onlinestats_reg_members'] = '%s registrerade användare';
$lang_plugin_php['onlinestats_guest'] = '%s gäster';
$lang_plugin_php['onlinestats_guests'] = '%s gäster';
$lang_plugin_php['onlinestats_record'] = 'Flest användare online någonsin: %s den %s';
$lang_plugin_php['onlinestats_since'] = 'Registrerade användare som varit online de senaste %s minuterna: %s';
$lang_plugin_php['onlinestats_config_text'] = 'Hur lång tid kan en användare vara online innan han/hon ska anses ha loggat ut?';
$lang_plugin_php['onlinestats_minute'] = 'minuter';
$lang_plugin_php['onlinestats_remove'] = 'Radera tabellen som använts för att lagra online data?';
$lang_plugin_php['link_target_name'] = 'Mållänk';
$lang_plugin_php['link_target_description'] = 'Ändrar det sätt som externa länkar öppnas: när den här insticksmodulen aktiveras, kommer alla länkas som har attributet rel="external" att öppnas i ett nytt fönster (istället för i samma fönster).';
$lang_plugin_php['link_target_extra'] = 'Denna insticksmodul påverkar mest "Powered by Coppermine" länken i nederst på sidan.';
	$lang_plugin_php['link_target_recommendation'] = 'Det rekommenderas att inte använda den här insticksmodulen, eftersom användarna upplever det som jobbigt när varje länk öppnas i nytt fönster.';
}

?>