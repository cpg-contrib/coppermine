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
  Coppermine version: 1.5.7
  $HeadURL$
  $Revision$
**********************************************/

if (!defined('IN_COPPERMINE')) { die('Not in Coppermine...');}

// info about translators and translated language
$lang_translation_info['lang_name_english'] = 'Danish';
$lang_translation_info['lang_name_native'] = 'Dansk';
$lang_translation_info['lang_country_code'] = 'dk';
$lang_translation_info['trans_name'] = 'Tomas C. Jensen';
$lang_translation_info['trans_email'] = 'tcj@tomas.dk';
$lang_translation_info['trans_website'] = 'http://forum.coppermine-gallery.net/index.php?action=profile;u=81069';
$lang_translation_info['trans_date'] = '2010-06-12';

$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)
// shortcuts for Bytes, Kibibytes, Mebibytes, Gibibytes$lang_byte_units = array('Bytes', 'KiB', 'MiB', 'GiB');
$lang_decimal_separator = array('.', ','); //cpg1.5 // symbol used to separate thousands from hundreds and rounded number from decimal place

// Day of weeks and months$lang_day_of_week = array('Søn', 'Man', 'Tir', 'Ons', 'Tor', 'Fre', 'Lør');
$lang_month = array('Jan', 'Feb', 'Mar', 'Apr', 'Maj', 'Jun', 'Jul', 'Aug', 'Sep', 'Okt', 'Nov', 'Dec');

// The various date formats// See http://www.php.net/manual/en/function.strftime.php to define the variable below$lang_date['album'] = '%d %B, %Y';
$lang_date['lastcom'] = '%d/%m/%y at %H:%M';
$lang_date['lastup'] = '%d %B, %Y';
$lang_date['register'] = '%B %d, %Y';
$lang_date['lasthit'] = '%d %B, %Y at %I:%M %p';
$lang_date['comment'] = '%d %B, %Y at %I:%M %p';
$lang_date['log'] = '%d %B, %Y at %I:%M %p';
$lang_date['scientific'] = '%Y-%m-%d %H:%M:%S';

// For the word censor
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'assrammer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack','penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*');

$lang_meta_album_names['random'] = 'Tilfældige filer';
$lang_meta_album_names['lastup'] = 'Sidste tilføjelser';
$lang_meta_album_names['lastalb'] = 'Sidst opdaterede album';
$lang_meta_album_names['lastcom'] = 'Sidste kommentarer';
$lang_meta_album_names['topn'] = 'Mest sete';
$lang_meta_album_names['toprated'] = 'Top karakter';
$lang_meta_album_names['lasthits'] = 'Sidst sete';
$lang_meta_album_names['search'] = 'Billed søge resultater';
$lang_meta_album_names['album_search'] = 'Album søge resultater';
$lang_meta_album_names['category_search'] = 'Kategori søge resultater';
$lang_meta_album_names['favpics'] = 'Favorit filer';
$lang_meta_album_names['datebrowse'] = 'Gennemse efter dato'; //cpg1.5
$lang_errors['access_denied'] = 'Du har ikke tilladelse til at se denne side.';
$lang_errors['invalid_form_token'] = 'Der kunne ikke findes et gyldigt \'token\' for skemaet.'; //cpg1.5$lang_errors['perm_denied'] = 'Do har ikke tilladelse til at udføre operationen.';
$lang_errors['param_missing'] = 'Script kaldt uden nødvendig(e) parameter.';
$lang_errors['non_exist_ap'] = 'Det valgte album/fil findes ikke!';
$lang_errors['quota_exceeded'] = 'Disk kvota overskredet.'; //cpg1.5$lang_errors['quota_exceeded_details'] = 'Du har [quota]K diskplads, dine filer bruger [space]K, tilføjelse af dette vil overskide din kvota.'; //cpg1.5$lang_errors['gd_file_type_err'] = 'Ved brug af GD billedbiblioteket, kan du kun bruge JPEG og PNG typer.';
$lang_errors['invalid_image'] = 'Det uploadede billede er ødelagt eller kan ikke håndteres af GD.';
$lang_errors['resize_failed'] = 'Kan ikke oprette thumpnail eller reduceret størrelse.';
$lang_errors['no_img_to_display'] = 'Der kan ikke vise noget billede';
$lang_errors['non_exist_cat'] = 'Den valgte katagori findes ikke.';
$lang_errors['directory_ro'] = 'Biblioteket \'%s\' er ikke skrivbart, filer kan ikke slettes!';
$lang_errors['pic_in_invalid_album'] = 'Fil er i et ikke eksisterende album (%s)!?!?';
$lang_errors['banned'] = 'Du er forhindret i at bruge denne side.';
$lang_errors['offline_title'] = 'Offline';
$lang_errors['offline_text'] = 'Galleriet er i øjeblikket offline - Tjek igen senere';
$lang_errors['ecards_empty'] = 'Der kan i øjeblikket ingen e-kort der kan vises.';
$lang_errors['database_query'] = 'Der opstod en fejl under en database forespørgsel';
$lang_errors['non_exist_comment'] = 'Den valgte kommentarer findes ikke';
$lang_errors['captcha_error'] = 'Bekræftigelses koden passede ikke'; // cpg1.5$lang_errors['login_needed'] = 'Du skal %sregister%s/%slogin%s for at få adgang til denne side'; // cpg1.5$lang_errors['error'] = 'Fejl'; // cpg1.5$lang_errors['critical_error'] = 'Kritisk fejl'; // cpg1.5$lang_errors['access_thumbnail_only'] = 'Du har kun lov at se thumbnail billeder.'; // cpg1.5$lang_errors['access_intermediate_only'] = 'Du har ikke lov at se billeder i fuld størrelse.'; // cpg1.5$lang_errors['access_none'] = 'Du har ikke lov at se nogen billeder.'; // cpg1.5$lang_errors['register_globals_title'] = 'Register Globals on!';// cpg1.5$lang_errors['register_globals_warning'] = 'PHP indstillingen register_globals er slået til på din server, hvilket er en dårlig ide med hensyn til sikkerhed. Det er STÆRKT tilrådeligt at slå den fra.'; //cpg1.5
$lang_bbcode_help_title = 'BBCode hjælp';
$lang_bbcode_help = 'Du kan tilføje klikbare links og noget formattering ved hjælp af BBCode: <li>[b]Fremhæv[/b] =&gt; <strong>Fremhæv</strong></li><li>[i]Italic[/i] =&gt; <i>Italic</i></li><li>[url=http://dinside.com/]Url Text[/url] =&gt; <a href="http://dinside.com">Url Tekst</a></li><li>[email]user@domain.com[/email] =&gt; <a href="mailto:user@domain.com">user@domain.com</a></li><li>[color=red]noget tekst[/color] =&gt; <span style="color:red">noget tekst</span></li><li>[img]http://documentation.coppermine-gallery.net/images/browser.png[/img] =&gt; <img src="docs/images/browser.png" border="0" alt="" /></li>';

$lang_common['yes'] = 'Ja'; // cpg1.5$lang_common['no'] = 'Nej'; // cpg1.5$lang_common['back'] = 'Tilbage'; // cpg1.5$lang_common['continue'] = 'Fortsæt'; // cpg1.5$lang_common['information'] = 'Information'; // cpg1.5$lang_common['error'] = 'Fejl'; // cpg1.5$lang_common['check_uncheck_all'] = 'maker/afmarker alt'; // cpg1.5$lang_common['confirm'] = 'Bekræftelse'; // cpg1.5$lang_common['captcha_help_title'] = 'Visuel bekræftigelse (captcha)'; // cpg1.5$lang_common['captcha_help'] = 'For at undgå spam, skal du at du er et menneske og ikke bare et bot script ved at skrive den viste tekst.<br />Du kan bruge både store og små bogstaver. D.V.S. du kan bare skive med små..'; // cpg1.5$lang_common['title'] = 'Titel'; // cpg1.5$lang_common['caption'] = 'Beskrivelse'; // cpg1.5$lang_common['keywords'] = 'Nøgleord'; // cpg1.5$lang_common['keywords_insert1'] = 'Nøgleord (adskilt med %s)'; // cpg1.5$lang_common['keywords_insert2'] = 'Indsæt fra liste'; // cpg1.5$lang_common['keyword_separator'] = 'Nøgleords separator'; //cpg1.5$lang_common['keyword_separators'] = array(' '=>'mellemrum', ','=>'komma', ';'=>'semikolon'); // cpg1.5$lang_common['filename'] = 'Filnavn'; // cpg1.5$lang_common['filesize'] = 'Filstørrelse'; // cpg1.5$lang_common['album'] = 'Album'; // cpg1.5$lang_common['file'] = 'Fil'; // cpg1.5$lang_common['date'] = 'Dato'; // cpg1.5$lang_common['help'] = 'Hjælp'; // cpg1.5$lang_common['close'] = 'Luk'; // cpg1.5$lang_common['go'] = 'go'; // cpg1.5$lang_common['javascript_needed'] = 'Denne side bruger JavaScript. Slå JavaScript til i din browser.'; // cpg1.5$lang_common['move_up'] = 'Flyt up'; // cpg1.5$lang_common['move_down'] = 'Flyt ned'; // cpg1.5$lang_common['move_top'] = 'Flyt til toppen'; // cpg1.5$lang_common['move_bottom'] = 'Flyt til bunden'; // cpg1.5$lang_common['delete'] = 'Slet'; // cpg1.5$lang_common['edit'] = 'Ret'; // cpg1.5$lang_common['username_if_blank'] = 'Ukendt bruger'; // cpg1.5$lang_common['albums_no_category'] = 'Albums uden kategori'; // cpg1.5$lang_common['personal_albums'] = '* Personlige albums'; // cpg1.5$lang_common['select_album'] = 'Vælg Album'; // cpg1.5$lang_common['ok'] = 'OK'; // cpg1.5$lang_common['status'] = 'Status'; // cpg1.5$lang_common['apply_changes'] = 'Tilføj ændringer'; // cpg1.5$lang_common['done'] = 'Udført'; // cpg1.5$lang_common['album_properties'] = 'Album egenskaber'; // cpg1.5$lang_common['parent_category'] = 'Forældre kategori'; // cpg1.5$lang_common['edit_files'] = 'Ret filer'; // cpg1.5$lang_common['thumbnail_view'] = 'Thumbnail oversigt'; // cpg1.5$lang_common['album_manager'] = 'Album Manager'; // cpg1.5$lang_common['more'] = 'mere'; // cpg1.5
// ------------------------------------------------------------------------- //// File theme.php// ------------------------------------------------------------------------- //$lang_main_menu['home_title'] = 'Gå til hjemmeside';
$lang_main_menu['home_lnk'] = 'Hjem';
$lang_main_menu['alb_list_title'] = 'Gå til albumlisten';
$lang_main_menu['alb_list_lnk'] = 'Album liste';
$lang_main_menu['my_gal_title'] = 'Gå til mit personlige galleri';
$lang_main_menu['my_gal_lnk'] = 'Mit galleri';
$lang_main_menu['my_prof_title'] = 'Gå til min personlige profil';
$lang_main_menu['my_prof_lnk'] = 'Min profil';
$lang_main_menu['adm_mode_title'] = 'Vis admin værktøjer'; // cpg1.5$lang_main_menu['adm_mode_lnk'] = 'Vis admin værktøjer'; // cpg1.5$lang_main_menu['usr_mode_title'] = 'Fjern visning af admin værktøjer'; // cpg1.5$lang_main_menu['usr_mode_lnk'] = 'Skjul admin værktøjer'; // cpg1.5$lang_main_menu['upload_pic_title'] = 'Upload en fil ind i et album';
$lang_main_menu['upload_pic_lnk'] = 'Upload fil';
$lang_main_menu['register_title'] = 'Opret en bruger';
$lang_main_menu['register_lnk'] = 'Registrer';
$lang_main_menu['login_title'] = 'Luk mig ind';
$lang_main_menu['login_lnk'] = 'Login';
$lang_main_menu['logout_title'] = 'Luk mig ud';
$lang_main_menu['logout_lnk'] = 'Logout';
$lang_main_menu['lastup_title'] = 'Vis de seneste uploads';
$lang_main_menu['lastup_lnk'] = 'Sidste uploads';
$lang_main_menu['lastcom_title'] = 'Vis seneste kommentarer';
$lang_main_menu['lastcom_lnk'] = 'Seneste kommentarer';
$lang_main_menu['topn_title'] = 'Vis mest viste billeder';
$lang_main_menu['topn_lnk'] = 'Mest viste';
$lang_main_menu['toprated_title'] = 'Vis billeder med højeste karakter';
$lang_main_menu['toprated_lnk'] = 'Højeste karakter';
$lang_main_menu['search_title'] = 'Søg i galleriet';
$lang_main_menu['search_lnk'] = 'Søg';
$lang_main_menu['fav_title'] = 'Gå til mine favoriter';
$lang_main_menu['fav_lnk'] = 'Mine Favoriter';
$lang_main_menu['memberlist_title'] = 'Vis medlemsliste';
$lang_main_menu['memberlist_lnk'] = 'Medlemsliste';
$lang_main_menu['browse_by_date_lnk'] = 'Efter dato'; // cpg1.5$lang_main_menu['browse_by_date_title'] = 'Vis efter uploaddato'; // cpg1.5$lang_main_menu['contact_title'] = 'Kom i kontakt med %s'; // cpg1.5$lang_main_menu['contact_lnk'] = 'Kontakt'; // cpg1.5$lang_main_menu['sidebar_title'] = 'Tilføj en Sidebar til din browser'; // cpg1.5$lang_main_menu['sidebar_lnk'] = 'Sidebar'; // cpg1.5
$lang_gallery_admin_menu['upl_app_title'] = 'Godkend nye';
$lang_gallery_admin_menu['upl_app_lnk'] = 'Upload godkendelse';
$lang_gallery_admin_menu['admin_title'] = 'Gå til konfigurering';
$lang_gallery_admin_menu['admin_lnk'] = 'Konfigurering';
$lang_gallery_admin_menu['albums_title'] = 'Gå til album konfigurering';
$lang_gallery_admin_menu['albums_lnk'] = 'Albums';
$lang_gallery_admin_menu['categories_title'] = 'Gå til kategori konfiguration';
$lang_gallery_admin_menu['categories_lnk'] = 'Kategorier';
$lang_gallery_admin_menu['users_title'] = 'Gå til bruger konfiguration';
$lang_gallery_admin_menu['users_lnk'] = 'Brugere';
$lang_gallery_admin_menu['groups_title'] = 'Gå til gruppe konfiguration';
$lang_gallery_admin_menu['groups_lnk'] = 'Grupper';
$lang_gallery_admin_menu['comments_title'] = 'Gennemse alle kommentarer';
$lang_gallery_admin_menu['comments_lnk'] = 'Gennemse kommentarer';
$lang_gallery_admin_menu['searchnew_title'] = 'Gå til batch tilføjelse';
$lang_gallery_admin_menu['searchnew_lnk'] = 'Batch tilføjelser';
$lang_gallery_admin_menu['util_title'] = 'Gå til admin værktøjer';
$lang_gallery_admin_menu['util_lnk'] = 'Admin værktøjer';
$lang_gallery_admin_menu['key_lnk'] = 'Nøgleords bibliotek';
$lang_gallery_admin_menu['ban_title'] = 'Gå til blokkerede brugere';
$lang_gallery_admin_menu['ban_lnk'] = 'Bloker brugere';
$lang_gallery_admin_menu['db_ecard_title'] = 'Gennemse e-kort';
$lang_gallery_admin_menu['db_ecard_lnk'] = 'Vis e-kort';
$lang_gallery_admin_menu['pictures_title'] = 'Sorter mine billeder';
$lang_gallery_admin_menu['pictures_lnk'] = 'Sorter mine billeder';
$lang_gallery_admin_menu['documentation_lnk'] = 'Dokumentation';
$lang_gallery_admin_menu['documentation_title'] = 'Coppermine manual';
$lang_gallery_admin_menu['phpinfo_lnk'] = 'phpinfo'; // cpg1.5$lang_gallery_admin_menu['phpinfo_title'] = 'Indeholder teknisk information om din server. Du kan blive bedt om information hvis du skal bruge support.'; // cpg1.5$lang_gallery_admin_menu['update_database_lnk'] = 'Opdater database'; // cpg1.5$lang_gallery_admin_menu['update_database_title'] = 'Hvis du har erstattet Coppermine filer, tilføjet en modifikation eller opgraderet fra en tidligere version af Coppermine, vær sikker på at køre database opdateringen en gang. Dette vil oprette de nødvendige tabeller og/eller konfig værdier i din Coppermine database.'; // cpg1.5$lang_gallery_admin_menu['view_log_files_lnk'] = 'Vis log filer'; // cpg1.5$lang_gallery_admin_menu['view_log_files_title'] = 'Coppermine kan holde øje med forskellige operationer udført af brugere. Du kan gennemse disse logs hvis du har slået logging til i Coppermine konfiguration.'; // cpg1.5$lang_gallery_admin_menu['check_versions_lnk'] = 'Check versioner'; // cpg1.5$lang_gallery_admin_menu['check_versions_title'] = 'Check dine fil versionerfor at finde ud af om du har erstattet alle efter en opgradering, eller om Coppermine kilde filer er blevet opdateret efter frigivelsen af en pakke.'; // cpg1.5$lang_gallery_admin_menu['bridgemgr_lnk'] = 'Bridge Manager'; // cpg1.5$lang_gallery_admin_menu['bridgemgr_title'] = 'Slå integration(bridging) til/fra af Coppermine med anden applikation (f.eks. din BBS).'; // cpg1.5$lang_gallery_admin_menu['pluginmgr_lnk'] = 'Plugin Manager'; // cpg1.5$lang_gallery_admin_menu['pluginmgr_title'] = 'Plugin manager'; // cpg1.5$lang_gallery_admin_menu['overall_stats_lnk'] = 'Grundlæggende statistikker'; // cpg1.5$lang_gallery_admin_menu['overall_stats_title'] = 'Se Grundlæggende statistikker efter browser og operativ system (hvis funktionerne er slået til i konfig).'; // cpg1.5$lang_gallery_admin_menu['keywordmgr_lnk'] = 'Nøgleords manager'; // cpg1.5$lang_gallery_admin_menu['keywordmgr_title'] = 'Manage nøgleord (hvis funktionerne er slået til i konfig).'; // cpg1.5$lang_gallery_admin_menu['exifmgr_lnk'] = 'EXIF manager'; // cpg1.5$lang_gallery_admin_menu['exifmgr_title'] = 'Manage EXIF visning (hvis funktionerne er slået til i konfig).'; // cpg1.5$lang_gallery_admin_menu['shownews_lnk'] = 'Vis Nyheder'; // cpg1.5$lang_gallery_admin_menu['shownews_title'] = 'Vis nyheder fra coppermine-gallery.net'; // cpg1.5
$lang_user_admin_menu['albmgr_title'] = 'Opret og sorter albums';
$lang_user_admin_menu['albmgr_lnk'] = 'Opert/sorter mine albums';
$lang_user_admin_menu['modifyalb_title'] = 'Gå til ændre mine albums';
$lang_user_admin_menu['modifyalb_lnk'] = 'Ændre mine albums';
$lang_user_admin_menu['my_prof_title'] = 'Gå til min personlige profil';
$lang_user_admin_menu['my_prof_lnk'] = 'Min profil';

$lang_cat_list['category'] = 'Kategori';
$lang_cat_list['albums'] = 'Albums';
$lang_cat_list['pictures'] = 'Filer';

$lang_album_list['album_on_page'] = '%d albums på %d side(r)';

$lang_thumb_view['date'] = 'Dato';
//Sort by filename and title
$lang_thumb_view['name'] = 'Fil Navn';
$lang_thumb_view['sort_da'] = 'Sorter efter dato stigende';
$lang_thumb_view['sort_dd'] = 'Sorter efter dato faldende';
$lang_thumb_view['sort_na'] = 'Sorter efter navn stigende';
$lang_thumb_view['sort_nd'] = 'Sorter efter navn falende';
$lang_thumb_view['sort_ta'] = 'Sorter efter titel stigende';
$lang_thumb_view['sort_td'] = 'Sorter efter titel faldende';
$lang_thumb_view['position'] = 'Position';
$lang_thumb_view['sort_pa'] = 'Sorter på position stigende';
$lang_thumb_view['sort_pd'] = 'Sort på position faldende';
$lang_thumb_view['download_zip'] = 'Download som Zip fil';
$lang_thumb_view['pic_on_page'] = '%d filer på %d side(r)';
$lang_thumb_view['user_on_page'] = '%d filer på %d side(r)';
$lang_thumb_view['enter_alb_pass'] = 'Indtast Album Kodeord';
$lang_thumb_view['invalid_pass'] = 'Forkert Kodeord';
$lang_thumb_view['pass'] = 'Kodeord';
$lang_thumb_view['submit'] = 'Send';
$lang_thumb_view['zipdownload_copyright'] = 'Overhold copyrights - brug kun filer som ejeren af dette galleri har godkendt'; // cpg1.5$lang_thumb_view['zipdownload_username'] = 'Dette arkiv indeholder zippede filer fra favoritter fra %s'; // cpg1.5

$lang_img_nav_bar['thumb_title'] = 'Returner til thumbnail siden';
$lang_img_nav_bar['pic_info_title'] = 'Vis/skjul fil information';
$lang_img_nav_bar['slideshow_title'] = 'Diasfremvisning';
$lang_img_nav_bar['ecard_title'] = 'Send denne fil som et e-kort';
$lang_img_nav_bar['ecard_disabled'] = 'e-kort er slået fra';
$lang_img_nav_bar['ecard_disabled_msg'] = 'Du har ikke rettigheder til at sende e-kort'; // js-alert$lang_img_nav_bar['prev_title'] = 'Se foregående fil';
$lang_img_nav_bar['next_title'] = 'Se næste fil';
$lang_img_nav_bar['pic_pos'] = 'FIL %s/%s';
$lang_img_nav_bar['report_title'] = 'Rapporter denne fil til administratoren';
$lang_img_nav_bar['go_album_end'] = 'Hop til slutning';
$lang_img_nav_bar['go_album_start'] = 'Returner til start';

$lang_rate_pic['rate_this_pic'] = 'Giv karakter til denne fil ';
$lang_rate_pic['no_votes'] = '(Ingen stemmer endnu)';
$lang_rate_pic['rating'] = '(Nuværende stilling : %s / %s med %s stemmer)';
$lang_rate_pic['rubbish'] = 'Sludder';
$lang_rate_pic['poor'] = 'Ringe';
$lang_rate_pic['fair'] = 'Middel';
$lang_rate_pic['good'] = 'God';
$lang_rate_pic['excellent'] = 'Rigtig god';
$lang_rate_pic['great'] = 'Fantastisk';
$lang_rate_pic['js_warning'] = 'JavaScript skal være slået til for at du kan stemme'; // cpg1.5$lang_rate_pic['already_voted'] = 'Du har allerede afgivet stemme for dette billede.'; // cpg1.5$lang_rate_pic['forbidden'] = 'Du kan ikke stemme på egne filer.'; // cpg1.5$lang_rate_pic['rollover_to_rate'] = 'Træ over for at give karakter til billedet'; // cpg1.5
// ------------------------------------------------------------------------- //// File include/functions.inc.php// ------------------------------------------------------------------------- //$lang_cpg_die['file'] = 'Fil: ';
$lang_cpg_die['line'] = 'Linie: ';

$lang_display_thumbnails['dimensions'] = 'Dimensioner=';
$lang_display_thumbnails['date_added'] = 'Tilføjet dato=';

$lang_get_pic_data['n_comments'] = '%s kommentarer';
$lang_get_pic_data['n_views'] = '%s visninger';
$lang_get_pic_data['n_votes'] = '(%s stemmer)';

$lang_cpg_debug_output['debug_info'] = 'Debug Info';
$lang_cpg_debug_output['debug_output'] = 'Debug Output'; // cpg1.5$lang_cpg_debug_output['select_all'] = 'Vælg Alt';
$lang_cpg_debug_output['copy_and_paste_instructions'] = 'Hvis du vil spørge om hjælp på Coppermine support board, klip-og-klister denne debug udskrift i din henvendelse når du bliver forespurgt, sammmen med den fejlbesked du fik (hvis der var nogen). Vedhæft kun debug_output til support board hvis en supporter  beder om det! Udskift evt. forekomster af kodeord i teksten med *** før afsendelse.'; // cpg1.5$lang_cpg_debug_output['debug_output_explain'] = 'Note: Dette er kun information og betyder ikke at der er en fejl i galleriet.'; // cpg1.5$lang_cpg_debug_output['phpinfo'] = 'Vis phpinfo';
$lang_cpg_debug_output['notices'] = 'Notitser';
$lang_cpg_debug_output['notices_help_admin'] = 'Denne notits vist på denne side, optræder kun fordi du (som galleri admin) har slået denne funktion til i Coppermine\'s konfiguration. De betyder nødvendigvis ikke, at der er noget galt med dit galleri. Faktisk er det en funktion som kun erfarne programmører bruger for at finde fejl. Hvis visning af notitser plager dig og/eller du ikke aner, hvad de betyder, slå funktionen fra i konfig.'; // cpg1.5$lang_cpg_debug_output['notices_help_non_admin'] = 'Denne notits er slået til af admin. Det betyder ikke, at der er en fejl i din ende. Du kan roligt ignorere denne notits og hvad der står i den.'; // cpg1.5$lang_cpg_debug_output['show_hide'] = 'vis / skjul'; // cpg1.5
$lang_language_selection['reset_language'] = 'Default sprog';
$lang_language_selection['choose_language'] = 'Vælg dit sprog';

$lang_theme_selection['reset_theme'] = 'Default tema';
$lang_theme_selection['choose_theme'] = 'Vælg et tema';

$lang_version_alert['version_alert'] = 'Usupporteret version!';
$lang_version_alert['no_stable_version'] = 'Du bruger Coppermine %s (%s) som kun er bestemt for meget erfarne brugere - denne version er uden support eller nogen garantier. Det er din egen risiko at bruge den eller nedgrader til seneste stabile version hvis du skal have support!';
$lang_version_alert['gallery_offline'] = 'Galleriet er i øjeblikket offline og kan kun ses af dig som admin. Glem ikke at sætte tilbage til online efter vedligehold er afsluttet.';
$lang_version_alert['coppermine_news'] = 'Nyheder from coppermine-gallery.net'; // cpg1.5
$lang_version_alert['no_iframe'] = 'Din browser kan ikke vise inline frames'; // cpg1.5$lang_version_alert['hide'] = 'skjul'; // cpg1.5
$lang_create_tabs['previous'] = 'forrige'; // cpg1.5$lang_create_tabs['next'] = 'Næste'; // cpg1.5$lang_create_tabs['jump_to_page'] = 'Hop til side'; // cpg1.5
$lang_get_remote_file_by_url['no_data_returned'] = 'Returnerede ingen data ved brug af %s'; // cpg1.5$lang_get_remote_file_by_url['curl'] = 'CURL'; // cpg1.5$lang_get_remote_file_by_url['fsockopen'] = 'Socket connection (FSOCKOPEN)'; // cpg1.5$lang_get_remote_file_by_url['fopen'] = 'fopen'; // cpg1.5$lang_get_remote_file_by_url['curl_not_available'] = 'Curl is not available on your server'; // cpg1.5$lang_get_remote_file_by_url['error_number'] = 'Error number: %s'; // cpg1.5$lang_get_remote_file_by_url['error_message'] = 'Error message: %s'; // cpg1.5
// ------------------------------------------------------------------------- //// File include/mailer.inc.php// ------------------------------------------------------------------------- //$lang_mailer['provide_address'] = 'Du skal give mindst en ';
$lang_mailer['mailer_not_supported'] = ' mailer is not supported.';
$lang_mailer['execute'] = 'Could not execute: ';
$lang_mailer['instantiate'] = 'Could not instantiate mail function.';
$lang_mailer['authenticate'] = 'SMTP Error: Could not authenticate.';
$lang_mailer['from_failed'] = 'The following From address failed: ';
$lang_mailer['recipients_failed'] = 'SMTP Error: The following ';
$lang_mailer['data_not_accepted'] = 'SMTP Error: Data not accepted.';
$lang_mailer['connect_host'] = 'SMTP Error: Could not connect to SMTP host.';
$lang_mailer['file_access'] = 'Could not access file: ';
$lang_mailer['file_open'] = 'File Error: Could not open file: ';
$lang_mailer['encoding'] = 'Unknown encoding: ';
$lang_mailer['signing'] = 'Signing Error: ';

// ------------------------------------------------------------------------- //// File include/plugin_api.inc.php// ------------------------------------------------------------------------- //$lang_plugin_api['error_install'] = 'Kunne ikke indstallere plugin \'%s\'';
$lang_plugin_api['error_uninstall'] = 'Kunne ikke fjerne plugin \'%s\'';
$lang_plugin_api['error_sleep'] = 'Kunne ikke slå plugin \'%s\' fra'; // cpg1.5

// ------------------------------------------------------------------------- //
// File include/smilies.inc.php
// ------------------------------------------------------------------------- //
if (defined('SMILIES_PHP')) {
$lang_smilies_inc_php['Exclamation'] = 'Bestemt';
$lang_smilies_inc_php['Question'] = 'Spørgsmål';
$lang_smilies_inc_php['Very Happy'] = 'Meget glad';
$lang_smilies_inc_php['Smile'] = 'Smil';
$lang_smilies_inc_php['Sad'] = 'Ked af det';
$lang_smilies_inc_php['Surprised'] = 'Overrasket';
$lang_smilies_inc_php['Shocked'] = 'Shokeret';
$lang_smilies_inc_php['Confused'] = 'Forvirret';
$lang_smilies_inc_php['Cool'] = 'Cool';
$lang_smilies_inc_php['Laughing'] = 'Griner';
$lang_smilies_inc_php['Mad'] = 'Gal';
$lang_smilies_inc_php['Razz'] = 'Razz';
$lang_smilies_inc_php['Embarrassed'] = 'Flov'; // cpg1.5$lang_smilies_inc_php['Crying or Very sad'] = 'Græder - eller meget ked';
$lang_smilies_inc_php['Evil or Very Mad'] = 'Ond eller meget gal';
$lang_smilies_inc_php['Twisted Evil'] = 'Rablende gal';
$lang_smilies_inc_php['Rolling Eyes'] = 'Ruller med øjne';
$lang_smilies_inc_php['Wink'] = 'Vinker';
$lang_smilies_inc_php['Idea'] = 'Ide';
$lang_smilies_inc_php['Arrow'] = 'Pil';
$lang_smilies_inc_php['Neutral'] = 'Neutral';
$lang_smilies_inc_php['Mr. Green'] = 'Mr. Green';
}

// ------------------------------------------------------------------------- //// File albmgr.php// ------------------------------------------------------------------------- //if (defined('ALBMGR_PHP')) {
$lang_albmgr_php['title'] = 'Album Manager'; // cpg1.5$lang_albmgr_php['alb_need_name'] = 'Albums skal have et navn!'; // js-alert$lang_albmgr_php['confirm_modifs'] = 'Er du sikker på du vil lave disse ændringer?'; // js-alert$lang_albmgr_php['no_change'] = 'Du lavede ingen ændringer!'; // js-alert$lang_albmgr_php['new_album'] = 'Nyt album';
$lang_albmgr_php['delete_album'] = 'Slet album'; // cpg1.5$lang_albmgr_php['confirm_delete1'] = 'Er du sikker på du vil slette dette album?'; // js-alert$lang_albmgr_php['confirm_delete2'] = 'Alle filer og kommentare det indeholder vil blive tabt!'; // js-alert$lang_albmgr_php['select_first'] = 'Vælg et album først'; // js-alert$lang_albmgr_php['my_gallery'] = '* Mit galleri *';
$lang_albmgr_php['no_category'] = '* Ingen kategori *';
$lang_albmgr_php['select_category'] = 'Vælg kategori';
$lang_albmgr_php['category_change'] = 'Hvis du ændrer kategori, dine ændringer vil være tabte!'; // cpg1.5$lang_albmgr_php['page_change'] = 'Hvis du følger dette link, alle dine ændringer vil være tabte!'; // cpg1.5$lang_albmgr_php['cancel'] = 'Afbryd'; // cpg1.5$lang_albmgr_php['submit_reminder'] = 'Sorterings ændringer er ikke gemt før du klikker &quot;Tilføj ændringer&quot;.'; // cpg1.5}

// ------------------------------------------------------------------------- //// File banning.php// ------------------------------------------------------------------------- //if (defined('BANNING_PHP')) {
$lang_banning_php['title'] = 'Bloker brugere';
$lang_banning_php['user_name'] = 'Bruger navn';
$lang_banning_php['user_account'] = 'Bruger konto';
$lang_banning_php['email_address'] = 'Email Adresse'; // cpg1.5$lang_banning_php['ip_address'] = 'IP Adresse';
$lang_banning_php['expires'] = 'Udløber'; // cpg1.5$lang_banning_php['expiry_date'] = 'Udløbsdato'; // cpg1.5$lang_banning_php['expired'] = 'Udløbet'; // cpg1.5$lang_banning_php['edit_ban'] = 'Gem ængringer';
$lang_banning_php['add_new'] = 'Tilføj ny blokering';
$lang_banning_php['add_ban'] = 'Tilføj';
$lang_banning_php['error_user'] = 'Kan ikke finde bruger';
$lang_banning_php['error_specify'] = 'Du skal angive enten bruger navn eller ip adresse';
$lang_banning_php['error_ban_id'] = 'Forkert blokerings ID!';
$lang_banning_php['error_admin_ban'] = 'Du kan ikke blokere dig selv!';
$lang_banning_php['error_server_ban'] = 'Du var ved at blokkere din egen server? Tsk tsk, cannot do that...';
$lang_banning_php['skipping'] = 'Springer over denne kommando.'; // cpg1.5$lang_banning_php['lookup_ip'] = 'IP Address Lookup';
$lang_banning_php['select_date'] = 'vælg dato';
$lang_banning_php['delete_comments'] = 'Slet kommentarer'; // cpg1.5$lang_banning_php['current'] = 'nuværende'; // cpg1.5$lang_banning_php['all'] = 'alle'; // cpg1.5$lang_banning_php['none'] = 'ingen'; // cpg1.5$lang_banning_php['view'] = 'se'; // cpg1.5$lang_banning_php['ban_id'] = 'Blokerings ID'; // cpg1.5$lang_banning_php['existing_bans'] = 'Eksisterende blokeringer'; // cpg1.5$lang_banning_php['no_banning_when_bridged'] = 'Du har integreret dit galleri med en anden applikation. Brug den integrerede applikations mekanisme istedet for Coppermine\'. Coppermine\'s blokerings mekanismer virker sjældent når den er integreret.'; // cpg1.5$lang_banning_php['records_on_page'] = '%d poster på %d side(r)'; // cpg1.5$lang_banning_php['ascending'] = 'stigende'; // cpg1.5$lang_banning_php['descending'] = 'faldende'; // cpg1.5$lang_banning_php['sort_by'] = 'Sorter efter'; // cpg1.5$lang_banning_php['sorted_by'] = 'sorteret efter'; // cpg1.5$lang_banning_php['ban_record_x_updated'] = 'Bloker post %s er blevet opdateret'; // cpg1.5$lang_banning_php['ban_record_x_deleted'] = 'Bloker post %s er blevet slettet'; // cpg1.5$lang_banning_php['new_ban_record_created'] = 'Ny bloker post er oprettet'; // cpg1.5$lang_banning_php['ban_record_x_already_exists'] = 'Bloker post for %s findes allerede!'; // cpg1.5$lang_banning_php['comment_deleted'] = '%s kommentar oprettet af %s er blevet slettet'; // cpg1.5$lang_banning_php['comments_deleted'] = '%s kommentarer oprettet af %s her blevet slettet'; // cpg1.5$lang_banning_php['email_field_invalid'] = 'Indtast en gyldig email adresse'; // cpg1.5$lang_banning_php['ip_address_field_invalid'] = 'Indtast en gyldig ip-adresse (x.x.x.x)'; // cpg1.5$lang_banning_php['expiry_field_invalid'] = 'Indtast en gyldig udløbsdato (YYYY-MM-DD)'; // cpg1.5$lang_banning_php['form_not_submit'] = 'Formularen er ikke blevet sendt - Der er fejl som du skal rette først!'; // cpg1.5};

// ------------------------------------------------------------------------- //// File bridgemgr.php// ------------------------------------------------------------------------- //if (defined('BRIDGEMGR_PHP')) {
$lang_bridgemgr_php['title'] = 'Integration guide';
$lang_bridgemgr_php['back'] = 'tilbage';
$lang_bridgemgr_php['next'] = 'næste';
$lang_bridgemgr_php['start_wizard'] = 'Start integration guide';
$lang_bridgemgr_php['finish'] = 'Afslut';
$lang_bridgemgr_php['no_action_needed'] = 'Der skal intet gøres i dette trin. Klik \'næste\' for at fortsætte.';
$lang_bridgemgr_php['reset_to_default'] = 'Nulstil til default værdier';
$lang_bridgemgr_php['choose_bbs_app'] = 'Vælg applikation som Coppermine skal integreres med';
$lang_bridgemgr_php['support_url'] = 'Gå hertil for support på denne applikation';
$lang_bridgemgr_php['settings_path'] = 'sti(er) brugt af din integrerede applikation';
$lang_bridgemgr_php['full_forum_url'] = 'URL for den integrerede applikation';
$lang_bridgemgr_php['relative_path_of_forum_from_webroot'] = 'Absolut sti til den integrerede applikation';
$lang_bridgemgr_php['relative_path_to_config_file'] = 'Relativ sti til den integrerede applikations konfig file';
$lang_bridgemgr_php['cookie_prefix'] = 'Cookie prefix';
$lang_bridgemgr_php['special_settings'] = 'integrerede applikation specifikke indstillinger';
$lang_bridgemgr_php['use_post_based_groups'] = 'Brug integrerede applikation tilpassede grupper?';
$lang_bridgemgr_php['use_post_based_groups_yes'] = 'ja';
$lang_bridgemgr_php['use_post_based_groups_no'] = 'nej';
$lang_bridgemgr_php['error_title'] = 'Du skal rette disse fejl før du kan fortsætte. Gå til den forrige skærm.';
$lang_bridgemgr_php['error_specify_bbs'] = 'Du skal angive, hvilken applikation Coppermine skal installeres med.';
$lang_bridgemgr_php['finalize'] = 'slå integration til/fra';
$lang_bridgemgr_php['finalize_explanation'] = 'Indtil vider er dine indstillinger gemt i databasen, men integrationen er endnu ikke slået til. Du kan slå dette til/fra på et vilkårligt tidspunkt. Husk på admin brugernavn og kodeord fra din standalone Coppermine, du kan få brug for det på et senere tidspunkt for at lave ændringer. Hvis noget går galt, gå til %s og slå integration fra der, ved hjælp af din gamle brugeradgang (normalt den du brugte under installationen af Coppermine).';
$lang_bridgemgr_php['your_bridge_settings'] = 'Dine integrations instillinger';
$lang_bridgemgr_php['title_enable'] = 'Slå integration til med %s';
$lang_bridgemgr_php['bridge_enable_yes'] = 'til';
$lang_bridgemgr_php['bridge_enable_no'] = 'fra';
$lang_bridgemgr_php['error_must_not_be_empty'] = 'må ikke være tom';
$lang_bridgemgr_php['error_either_be'] = 'Skal være enten %s eller %s';
$lang_bridgemgr_php['error_folder_not_exist'] = '%s eksisterer ikke. Ret værdien indtastede for %s';
$lang_bridgemgr_php['error_cookie_not_readible'] = 'Coppermine kan ikke læse en cookie kaldet %s. Ret værdien du indtastede for %s, eller gå til din integrerede applikations admin panel og sikrer dig at cookie stien er læsbar for Coppermine.';
$lang_bridgemgr_php['error_mandatory_field_empty'] = 'Du kan ikke efterlade feltet %s blankt - indtast en passende værdi.';
$lang_bridgemgr_php['error_no_trailing_slash'] = 'Der må ikke være en efterfølgende skråstreg i feltet %s.';
$lang_bridgemgr_php['error_trailing_slash'] = 'Der skal være en efterfølgende skråstreg i feltet %s.';
$lang_bridgemgr_php['error_prefix_and_table'] = '%s og ';
$lang_bridgemgr_php['recovery_title'] = 'Integration Manager: nød genopretning';
$lang_bridgemgr_php['recovery_explanation'] = 'Hvis du kom her for at administrere integrationen af dit Coppermine galleri, skal du først logge ind som admin. Hvis du ikke kan logge ind fordi integrationen ikke virker korrekt, kan du slå integration fra på denne side. Indtastningen af dit brugernavn og kodeord vil ikke logge dig ind, men blot slå integrationen fra. Se i dokumentatione for detaljer.';
$lang_bridgemgr_php['username'] = 'Brugernavn';
$lang_bridgemgr_php['password'] = 'Kodeord';
$lang_bridgemgr_php['disable_submit'] = 'send';
$lang_bridgemgr_php['recovery_success_title'] = 'Authorisation lykkedes';
$lang_bridgemgr_php['recovery_success_content'] = 'Det er lykkedes dig at slå integrationen fra. Din Coppermine kører nu i standalone mode.';
$lang_bridgemgr_php['recovery_success_advice_login'] = 'Log ind som admin for at rette på integrationsindstillingerne og/eller slå integrationen til igen.';
$lang_bridgemgr_php['goto_login'] = 'Gå til login side';
$lang_bridgemgr_php['goto_bridgemgr'] = 'Gå til integration manager';
$lang_bridgemgr_php['recovery_failure_title'] = 'Authorisation fejlede';
$lang_bridgemgr_php['recovery_failure_content'] = 'Du har brugt forkerte brugernavn/kodeord. Du skal bruge brugernavn/kodeord fra den normale Coppermine standalone version (normalt fra kontoen der blev sat op under installationen af Coppermine).';
$lang_bridgemgr_php['try_again'] = 'prøv igen';
$lang_bridgemgr_php['recovery_wait_title'] = 'Vente tiden er ikke udløbet';
$lang_bridgemgr_php['recovery_wait_content'] = 'Af sikkerhedsgrunde dette script holder en pause efter hver mislykkede login forsøg, så du må vente lidt før du kan prøve igen.';
$lang_bridgemgr_php['wait'] = 'vent';
$lang_bridgemgr_php['browse'] = 'gennemse';
}

// ------------------------------------------------------------------------- //// File calendar.php// ------------------------------------------------------------------------- //if (defined('CALENDAR_PHP')) {
$lang_calendar_php['title'] = 'Kalender';
$lang_calendar_php['clear_date'] = 'ryd dato';
$lang_calendar_php['files'] = 'filer'; // cpg1.5}

// ------------------------------------------------------------------------- //// File catmgr.php// ------------------------------------------------------------------------- //if (defined('CATMGR_PHP')) {
$lang_catmgr_php['miss_param'] = 'Parameters required for \'%s\' operation not supplied!';
$lang_catmgr_php['unknown_cat'] = 'Selected category does not exist in database';
$lang_catmgr_php['usergal_cat_ro'] = 'User galleries category can\'t be deleted!';
$lang_catmgr_php['manage_cat'] = 'Manage categories';
$lang_catmgr_php['confirm_delete'] = 'Are you sure you want to DELETE this category'; // js-alert$lang_catmgr_php['category'] = 'Categories'; // cpg1.5$lang_catmgr_php['operations'] = 'Operations';
$lang_catmgr_php['move_into'] = 'Move into';
$lang_catmgr_php['update_create'] = 'Update/Create category';
$lang_catmgr_php['parent_cat'] = 'Parent category';
$lang_catmgr_php['cat_title'] = 'Category title';
$lang_catmgr_php['cat_thumb'] = 'Category thumbnail';
$lang_catmgr_php['cat_desc'] = 'Category description';
$lang_catmgr_php['categories_alpha_sort'] = 'Sort categories alphabetically (instead of custom sort order)';
$lang_catmgr_php['save_cfg'] = 'Save configuration';
$lang_catmgr_php['no_category'] = '* No category *'; // cpg1.5$lang_catmgr_php['group_create_alb'] = 'Group(s) allowed to create albums in this category'; // cpg1.5}

// ------------------------------------------------------------------------- //// File contact.php// ------------------------------------------------------------------------- //if (defined('CONTACT_PHP')) {
$lang_contact_php['title'] = 'Kontakt'; // cpg1.5$lang_contact_php['your_name'] = 'Dit navn'; // cpg1.5$lang_contact_php['your_email'] = 'Din email adresse'; // cpg1.5$lang_contact_php['subject'] = 'Emne'; // cpg1.5$lang_contact_php['your_message'] = 'Din besked'; // cpg1.5$lang_contact_php['name_field_mandatory'] = 'Indtast dit navn'; // cpg1.5 // js-alert$lang_contact_php['name_field_invalid'] = 'Indtast dit rigtige navn'; // cpg1.5 // js-alert$lang_contact_php['email_field_mandatory'] = 'Indtast din email adresse'; // cpg1.5 // js-alert$lang_contact_php['email_field_invalid'] = 'Indtast en gyldig email adresse'; // cpg1.5 // js-alert$lang_contact_php['subject_field_mandatory'] = 'Indtast et meningsfyldt emne'; // cpg1.5 // js-alert$lang_contact_php['message_field_mandatory'] = 'Indtast din besked'; // cpg1.5 // js-alert$lang_contact_php['confirmation'] = 'Bekræftigelse'; // cpg1.5$lang_contact_php['email_headline'] = 'Denne email blev sendt %s fra kontakt formularen på %s fra ip-adresse %s'; // cpg1.5$lang_contact_php['registered_user'] = 'registreret bruger'; // cpg1.5$lang_contact_php['guest'] = 'gæst'; // cpg1.5$lang_contact_php['unknown'] = 'ukendt'; // cpg1.5$lang_contact_php['user_info'] = '%s kaldet %s med email adresse %s skrev:'; // cpg1.5$lang_contact_php['failed_sending_email'] = 'Kunne ikke sende email. Prøv igen senere.'; // cpg1.5$lang_contact_php['email_sent'] = 'Din email er blevet sendt.'; // cpg1.5}

// ------------------------------------------------------------------------- //// File admin.php// ------------------------------------------------------------------------- //
if (defined('ADMIN_PHP')) {
$lang_admin_php['title'] = 'Galleri konfiguration';
$lang_admin_php['general_settings'] = 'Generelle indstillinger'; // cpg1.5$lang_admin_php['language_charset_settings'] = 'Sprog og tegnsæt indstillinger'; // cpg1.5$lang_admin_php['themes_settings'] = 'Tema indstillinger'; // cpg1.5$lang_admin_php['album_list_view'] = 'Album liste indstillinger'; // cpg1.5$lang_admin_php['thumbnail_view'] = 'Thumbnail indstillinger'; // cpg1.5$lang_admin_php['image_view'] = 'Billede visnings indstillinger'; // cpg1.5$lang_admin_php['comment_settings'] = 'Kommentar indstillinger'; // cpg1.5$lang_admin_php['thumbnail_settings'] = 'Thumbnails indstillinger'; // cpg1.5$lang_admin_php['file_settings'] = 'Fil indstillinger'; // cpg1.5$lang_admin_php['image_watermarking'] = 'Billede vandmærkning'; // cpg1.5$lang_admin_php['registration'] = 'Registrering'; // cpg1.5$lang_admin_php['user_settings'] = 'Bruger indstillinger'; // cpg1.5$lang_admin_php['custom_fields_user_profile'] = 'Tilpassede felter for brugerprofil (blank hvis ubrugt). Brug profil 6 for lange tekster, såsom biografier'; // cpg1.5$lang_admin_php['custom_fields_image_description'] = 'Tilpassede felter for billedbeskrivelser (blank hvis ubrugt)'; // cpg1.5$lang_admin_php['cookie_settings'] = 'Cookies indstillinger'; // cpg1.5$lang_admin_php['email_settings'] = 'Email instillinger (normalt skal der ikke laves ændringer her; Efterlad alle felter blanke, hvis du er usikker)'; // cpg1.5$lang_admin_php['logging_stats'] = 'Logning og statistikker'; // cpg1.5$lang_admin_php['maintenance_settings'] = 'Vedligeholdelses indstillinger'; // cpg1.5$lang_admin_php['manage_exif'] = 'Indstil EXIF visning';
$lang_admin_php['manage_plugins'] = 'Indstil plugins';
$lang_admin_php['manage_keyword'] = 'Indstil nøgleord';
$lang_admin_php['restore_cfg'] = 'Genskab fabriksindstillinger';
$lang_admin_php['restore_cfg_confirm'] = 'Vil du virkelig genskabe hele konfigurationen til fabriksinstillinger? Dette kan ikke laves om!'; // cpg1.5 // js-alert$lang_admin_php['save_cfg'] = 'Gem ny konfiguration';
$lang_admin_php['notes'] = 'Noter';
$lang_admin_php['info'] = 'Information';
$lang_admin_php['upd_success'] = 'Coppermine konfigurationen er opdateret';
$lang_admin_php['restore_success'] = 'Coppermine default konfiguration genskabt';
$lang_admin_php['name_a'] = 'Navn stigende';
$lang_admin_php['name_d'] = 'Navn faldende';
$lang_admin_php['title_a'] = 'Titel stigende';
$lang_admin_php['title_d'] = 'Titel faldende';
$lang_admin_php['date_a'] = 'Dato stigende';
$lang_admin_php['date_d'] = 'Dato faldende';
$lang_admin_php['pos_a'] = 'Position stigende';
$lang_admin_php['pos_d'] = 'Position faldende';
$lang_admin_php['th_any'] = 'Max Aspekt';
$lang_admin_php['th_ht'] = 'Højde';
$lang_admin_php['th_wd'] = 'Bredde';
$lang_admin_php['th_ex'] = 'Eksakt'; // cpg1.5$lang_admin_php['debug_everyone'] = 'Alle';
$lang_admin_php['debug_admin'] = 'Kun admin';
$lang_admin_php['no_logs'] = 'Off';
$lang_admin_php['log_normal'] = 'Normal';
$lang_admin_php['log_all'] = 'Alle';
$lang_admin_php['view_logs'] = 'Vis alle logger';
$lang_admin_php['click_expand'] = 'Klik på sektion for at ekspandere';
$lang_admin_php['click_collapse'] = 'Klik på sektion for at kollapse'; // cpg1.5$lang_admin_php['expand_all'] = 'Ekspander alle';
$lang_admin_php['toggle_all'] = 'Skift alle'; // cpg1.5$lang_admin_php['notice1'] = '(*) Disse instillinger må ikke ændres, hvis du allerede har filer i databasen.';
$lang_admin_php['notice2'] = '(**) Når denne indstilling ændres, berører det kun filer der er tilføjet herefter, så det er ikke tilrådeligt at ændre på denne instilling, når der allered er filer i galleriet. Du kan dog tilføje ændringerne til eksisterende filer med &quot;<a href="util.php">admin værktøjet</a> (ændre billedstørrelse)&quot; værktøjet fra admin menuen.';
$lang_admin_php['notice3'] = '(***) Alle logfiler er skrevet på engelsk.';
$lang_admin_php['bbs_disabled'] = 'Funktion slået fra når der anvendes integration';
$lang_admin_php['auto_resize_everyone'] = 'Alle';
$lang_admin_php['auto_resize_user'] = 'Kun bruger';
$lang_admin_php['ascending'] = 'stigende';
$lang_admin_php['descending'] = 'faldende';
$lang_admin_php['collapse_all'] = 'Kollaps alt'; // cpg1.5$lang_admin_php['separate_page'] = 'på en seperat side'; // cpg1.5$lang_admin_php['inline'] = 'inline'; // cpg1.5$lang_admin_php['guests_only'] = 'Kun gæster'; // cpg1.5$lang_admin_php['wm_bottomright'] = 'Bunden til højre'; // cpg1.5$lang_admin_php['wm_bottomleft'] = 'Bunden til venstre'; // cpg1.5$lang_admin_php['wm_topleft'] = 'Top til venstre'; // cpg1.5$lang_admin_php['wm_topright'] = 'Top til højre'; // cpg1.5$lang_admin_php['wm_center'] = 'Center'; // cpg1.5$lang_admin_php['wm_both'] = 'Begge'; // cpg1.5$lang_admin_php['wm_original'] = 'Original'; // cpg1.5$lang_admin_php['wm_resized'] = 'Størrelse ændret'; // cpg1.5$lang_admin_php['gallery_name'] = 'Galleri navn'; // cpg1.5$lang_admin_php['gallery_description'] = 'Galleri beskrivelse'; // cpg1.5$lang_admin_php['gallery_admin_email'] = 'Galleri administrator email'; // cpg1.5$lang_admin_php['ecards_more_pic_target'] = 'URL til din Coppermine galleri mappe'; // cpg1.5$lang_admin_php['ecards_more_pic_target_detail'] = '(med en efterfølgende skråstreg, ikke \'index.php\' eller lign. i enden)'; // cpg1.5$lang_admin_php['home_target'] = 'URL for din hjemmeside'; // cpg1.5$lang_admin_php['enable_zipdownload'] = 'Tillad ZIP-download af favoritter'; // cpg1.5$lang_admin_php['enable_zipdownload_no_textfile'] = 'Kun favoritter'; // cpg1.5$lang_admin_php['enable_zipdownload_additional_textfile'] = 'favoritter og readme fil'; // cpg1.5$lang_admin_php['time_offset'] = 'Tidzone forskel relativ til GMT'; // cpg1.5$lang_admin_php['time_offset_detail'] = '(nuværende tid: %s)'; // cpg1.5$lang_admin_php['enable_help'] = 'Slå hjælpe-ikoner til'; // cpg1.5$lang_admin_php['enable_help_description'] = 'Hjælp kun delvist tilgængeligt på engelsk'; // cpg1.5$lang_admin_php['clickable_keyword_search'] = 'Slå klikbare nøgleord til i søgning'; // cpg1.5$lang_admin_php['keyword_separator'] = 'Nøgleordsadskiller'; // cpg1.5$lang_admin_php['keyword_convert'] = 'Konvert nøgleordsadskiller'; // cpg1.5$lang_admin_php['enable_plugins'] = 'Slå plugins til'; // cpg1.5$lang_admin_php['purge_expired_bans'] = 'Slet automatisk udløbne blokering'; // cpg1.5$lang_admin_php['browse_batch_add'] = 'Browsable batch-add interface'; // cpg1.5$lang_admin_php['batch_proc_limit'] = 'Process concurrency for batch-add interface'; // cpg1.5$lang_admin_php['display_thumbs_batch_add'] = 'Vis små thumbnails på batch-add interface'; // cpg1.5$lang_admin_php['lang'] = 'Default sprog'; // cpg1.5$lang_admin_php['language_autodetect'] = 'Autodetekt sprog'; // cpg1.5$lang_admin_php['charset'] = 'Tegnsæt kodning'; // cpg1.5// 'previous_next_tab'] = 'Display previous/next on tabbed pages'; // cpg1.5$lang_admin_php['theme'] = 'Tema'; // cpg1.5
$lang_admin_php['custom_lnk_name'] = 'Tilpasset menu link navn'; // cpg1.5
$lang_admin_php['custom_lnk_url'] = 'Tilpasset menu link URL'; // cpg1.5
$lang_admin_php['enable_menu_icons'] = 'Slå menu ikoner til'; // cpg1.5
$lang_admin_php['show_bbcode_help'] = 'Vis BBCode hjælp'; // cpg1.5
$lang_admin_php['vanity_block'] = 'Show the vanity block on themes that are defined as XHTML and CSS compliant'; // cpg1.5
$lang_admin_php['highlight_multiple'] = 'Vælg flere linier ved at holde [Ctrl]-tasten nede'; // cpg1.5
$lang_admin_php['custom_header_path'] = 'Sti til tilpassede inkluderede sidehoved'; // cpg1.5
$lang_admin_php['custom_footer_path'] = 'Sti til tilpassede inkluderede sidefødder'; // cpg1.5
$lang_admin_php['browse_by_date'] = 'Slå bladring til efter dato'; // cpg1.5
$lang_admin_php['display_redirection_page'] = 'Vis redirigeringssider'; // cpg1.5
$lang_admin_php['display_xp_publish_link'] = 'Fremhæv brugen af XP Publisher ved at vise korresponderende link på upload side'; // cpg1.5
$lang_admin_php['main_table_width'] = 'Bredde af hovedtabellen'; // cpg1.5
$lang_admin_php['pixels_or_percent'] = 'pixels eller %'; // cpg1.5
$lang_admin_php['subcat_level'] = 'Antal niveauer af kategorier der vises'; // cpg1.5
$lang_admin_php['albums_per_page'] = 'Antal album der vises'; // cpg1.5
$lang_admin_php['album_list_cols'] = 'Antal kolonner for albumlisten'; // cpg1.5
$lang_admin_php['alb_list_thumb_size'] = 'Størrelse på album thumbnails'; // cpg1.5
$lang_admin_php['main_page_layout'] = 'Indholdet af forsiden'; // cpg1.5
$lang_admin_php['first_level'] = 'Vis første niveau album thumbnails i kategorier'; // cpg1.5
$lang_admin_php['categories_alpha_sort'] = 'Sorter kategorier alfabetisk'; // cpg1.5
$lang_admin_php['categories_alpha_sort_details'] = '(istedet for tilpasset sorteringsrækkefølge)'; // cpg1.5
$lang_admin_php['link_pic_count'] = 'Vis antal linkede filer'; // cpg1.5
$lang_admin_php['thumbcols'] = 'Antal kolonner på thumbnail siden'; // cpg1.5
$lang_admin_php['thumbrows'] = 'Antal rækker på thumbnail siden'; // cpg1.5
$lang_admin_php['max_tabs'] = 'Maximum antal faner der vises'; // cpg1.5
$lang_admin_php['tabs_dropdown'] = 'Vis dropdown liste af alle sider ved siden af faner'; // cpg1.5
$lang_admin_php['caption_in_thumbview'] = 'Vis filbeskrivelse (sammen med titlen) under thumbnail'; // cpg1.5
$lang_admin_php['views_in_thumbview'] = 'Vis antal visninger under thumbnail'; // cpg1.5
$lang_admin_php['display_comment_count'] = 'Vis antal kommentarer under thumbnail'; // cpg1.5
$lang_admin_php['display_uploader'] = 'Vis upload navn under thumbnail'; // cpg1.5
// 'display_admin_uploader'] = 'Display name of admin uploaders below the thumbnail'; // cpg1.5
$lang_admin_php['display_filename'] = 'Vis fil navn under thumbnail'; // cpg1.5
$lang_admin_php['display_thumbnail_rating'] = 'Vis karakter under thumbnail'; // cpg1.5
$lang_admin_php['alb_desc_thumb'] = 'Vis albumbeskrivelse'; // cpg1.5
$lang_admin_php['thumbnail_to_fullsize'] = 'Gå direkte fra thumbnail til fuldstørrelse billede'; // cpg1.5
$lang_admin_php['default_sort_order'] = 'Default sorteringsrækkefølge for filer'; // cpg1.5
$lang_admin_php['min_votes_for_rating'] = 'Mindste antal for stemmer for en fil før den vises i \'top rated\' listen'; // cpg1.5
$lang_admin_php['picture_table_width'] = 'Bredde af tabellen for fil visning'; // cpg1.5
$lang_admin_php['display_pic_info'] = 'Fil information er synlig pr. default'; // cpg1.5
$lang_admin_php['picinfo_movie_download_link'] = 'Vis film download link i fil information område'; // cpg1.5
$lang_admin_php['max_img_desc_length'] = 'Max længde for en billedbeskrivelse'; // cpg1.5
$lang_admin_php['max_com_wlength'] = 'Max antal tegn i et ord'; // cpg1.5
$lang_admin_php['display_film_strip'] = 'Vis film strip'; // cpg1.5
$lang_admin_php['max_film_strip_items'] = 'Antal enheder i en film strip'; // cpg1.5
$lang_admin_php['slideshow_interval'] = 'Diasshow interval'; // cpg1.5
$lang_admin_php['milliseconds'] = 'milliseconds'; // cpg1.5
$lang_admin_php['slideshow_interval_detail'] = '1 sekund = 1000 millisekunder'; // cpg1.5
$lang_admin_php['slideshow_hits'] = 'Tæl visninger i diasshow'; // cpg1.5
$lang_admin_php['ecard_flash'] = 'Tillad Flash i e-kort'; // cpg1.5
$lang_admin_php['not_recommended'] = 'ikke anbefalet'; // cpg1.5
$lang_admin_php['recommended'] = 'anbefalet'; // cpg1.5
$lang_admin_php['transparent_overlay'] = 'Indsæt transperent over billede for at minimere tyveri'; // cpg1.5
$lang_admin_php['old_style_rating'] = 'Gå tilbage til gammelt karaktersystem'; // cpg1.5
$lang_admin_php['old_style_rating_extra'] = 'Dette vil fjerne \'Antal af bedømmelsesstjerner\' valget'; // cpg1.5
$lang_admin_php['rating_stars_amount'] = 'Antal stjerner i brug ved bedømmelse ved afstemning'; // cpg1.5
$lang_admin_php['rate_own_files'] = 'Bruger kan stemme på egne filer'; // cpg1.5
$lang_admin_php['filter_bad_words'] = 'Filtrer \'grimme\' ord i kommentarer'; // cpg1.5
$lang_admin_php['enable_smilies'] = 'Tillad smileyer i kommentarer'; // cpg1.5
$lang_admin_php['disable_comment_flood_protect'] = 'Tillad på hinanden følgende kommentarer fra samme bruger'; // cpg1.5
$lang_admin_php['disable_comment_flood_protect_details'] = '(slå flood protection fra)'; // cpg1.5
$lang_admin_php['max_com_lines'] = 'Max antal linier i en kommentar'; // cpg1.5
$lang_admin_php['max_com_size'] = 'Max længde af linie i en kommentar'; // cpg1.5
$lang_admin_php['email_comment_notification'] = 'Adviser admin om kommentarer ved hjælp af mails'; // cpg1.5
$lang_admin_php['comments_sort_descending'] = 'Sorteringsrækkefølge af kommentarer'; // cpg1.5
$lang_admin_php['comments_per_page'] = 'Kommentarer pr. side'; // cpg1.5
$lang_admin_php['comments_anon_pfx'] = 'Præfix for anonyme kommentar forfattere'; // cpg1.5
$lang_admin_php['comment_approval'] = 'Kommentar behøver godkendelse'; // cpg1.5
$lang_admin_php['display_comment_approval_only'] = 'Vis kun kommentare der behøver godkendelse på &quot;Gennemse kommentarer&quot; siden'; // cpg1.5
$lang_admin_php['comment_placeholder'] = 'Vis tekst for brugere der venter på at få godkendt kommentarer af admin'; // cpg1.5
$lang_admin_php['comment_user_edit'] = 'Tillad brugere at rette deres kommentarer'; // cpg1.5
$lang_admin_php['comment_captcha'] = 'Vis Captcha (Visuel bekræftigelse) for tilføjning af kommentarer'; // cpg1.5
$lang_admin_php['comment_akismet_enable'] = 'Akismet valg'; // cpg1.5
$lang_admin_php['comment_akismet_enable_description'] = 'Hvad skal ske hvis Akismet afviser en kommentar som spam?'; // cpg1.5
$lang_admin_php['comment_akismet_applicable_only'] = 'Valgmuligheder gælder kun hvis Akismet er slået til ved at indtaste en gældende  API nøgle'; // cpg1.5
$lang_admin_php['comment_akismet_enable_approval'] = 'Tillad kommentarer som ikke kan godkendes af Akismet, men marker dem som ikke godkendte'; // cpg1.5
$lang_admin_php['comment_akismet_drop_tell'] = 'Drop kommentar der fejler godkendelsen og fortæl forfatteren at den blev afvist'; // cpg1.5
$lang_admin_php['comment_akismet_drop_lie'] = 'Drop kommentar der fejler godkendelsen men fortæl forfatteren (spammer) at den er tilføjet'; // cpg1.5
$lang_admin_php['comment_akismet_api_key'] = 'Akismet API nøgle'; // cpg1.5
$lang_admin_php['comment_akismet_api_key_description'] = 'Efterlad tom for at slå Akismet fra'; // cpg1.5
$lang_admin_php['comment_akismet_group'] = 'Tilføj Akismet for kommentarer lavet af'; // cpg1.5
$lang_admin_php['comment_promote_registration'] = 'Spørg gæster om at logge ind for at lave kommentarer'; // cpg1.5
$lang_admin_php['thumb_width'] = 'Max dimension af en thumbnail (bredde, hvis du bruger "eksakt" i "Brug dimension")'; // cpg1.5
$lang_admin_php['thumb_use'] = 'Brug dimension'; // cpg1.5
$lang_admin_php['thumb_use_detail'] = '(Bredde eller højde eller max aspekt for thumbnail)'; // cpg1.5
$lang_admin_php['thumb_height'] = 'Højde af en thumbnail'; // cpg1.5
$lang_admin_php['thumb_height_detail'] = '(gælder kunhvis du bruger &quot;eksakt&quot; i &quot;Brug dimension&quot;)'; // cpg1.5
$lang_admin_php['movie_audio_document'] = 'film, audio, dokument'; // cpg1.5
$lang_admin_php['thumb_pfx'] = 'Præfixet for thumbnails'; // cpg1.5
$lang_admin_php['enable_unsharp'] = 'Thumb Sharpening: slå Unsharp Mask til'; // cpg1.5
$lang_admin_php['unsharp_amount'] = 'Thumb Sharpening mængde'; // cpg1.5
$lang_admin_php['unsharp_radius'] = 'Thumb Sharpening radius'; // cpg1.5
$lang_admin_php['unsharp_threshold'] = 'Thumb Sharpening threshold'; // cpg1.5
$lang_admin_php['jpeg_qual'] = 'Kvalitet for JPEG filer'; // cpg1.5
$lang_admin_php['make_intermediate'] = 'Opret mellemstørrelse billeder'; // cpg1.5
$lang_admin_php['picture_use'] = 'Brug dimension'; // cpg1.5
$lang_admin_php['picture_use_detail'] = '(width or height or max aspect for an intermediate picture)'; // cpg1.5
$lang_admin_php['picture_use_thumb'] = 'Like thumbnail'; // cpg1.5
$lang_admin_php['picture_width'] = 'Max width or height of an intermediate picture'; // cpg1.5
$lang_admin_php['max_upl_size'] = 'Max size for uploaded files'; // cpg1.5
$lang_admin_php['kilobytes'] = 'KB'; // cpg1.5
$lang_admin_php['pixels'] = 'pixels'; // cpg1.5
$lang_admin_php['max_upl_width_height'] = 'Max width or height for uploaded pictures'; // cpg1.5
$lang_admin_php['auto_resize'] = 'Auto resize images that are larger than max width or height'; // cpg1.5
$lang_admin_php['fullsize_padding_x'] = 'Horizontal padding for full-size pop-up'; // cpg1.5
$lang_admin_php['fullsize_padding_y'] = 'Vertical padding for full-size pop-up'; // cpg1.5
$lang_admin_php['allow_private_albums'] = 'Albums can be private'; // cpg1.5
$lang_admin_php['allow_private_albums_note'] = '(Note: if you switch from \'yes\' to \'no\' any current private albums will be visible)'; // cpg1.5
$lang_admin_php['show_private'] = 'Show private album icon to unlogged user'; // cpg1.5
$lang_admin_php['forbiden_fname_char'] = 'Characters forbidden in filenames'; // cpg1.5
$lang_admin_php['silly_safe_mode'] = 'Enable &quot;silly safe mode&quot;'; // cpg1.5
$lang_admin_php['allowed_img_types'] = 'Allowed image types'; // cpg1.5
$lang_admin_php['allowed_mov_types'] = 'Allowed movie types'; // cpg1.5
$lang_admin_php['media_autostart'] = 'Movie playback autostart'; // cpg1.5
$lang_admin_php['allowed_snd_types'] = 'Allowed audio types'; // cpg1.5
$lang_admin_php['allowed_doc_types'] = 'Allowed document types'; // cpg1.5
$lang_admin_php['thumb_method'] = 'Method for resizing images'; // cpg1.5
$lang_admin_php['impath'] = 'Path to ImageMagick \'convert\' utility'; // cpg1.5
$lang_admin_php['impath_example'] = '(eg. /usr/bin/)'; // cpg1.5
$lang_admin_php['im_options'] = 'Additional command line options for ImageMagick'; // cpg1.5
$lang_admin_php['read_exif_data'] = 'Read EXIF data from JPEG files'; // cpg1.5
$lang_admin_php['read_iptc_data'] = 'Read IPTC data from JPEG files'; // cpg1.5
$lang_admin_php['fullpath'] = 'The album directory'; // cpg1.5
$lang_admin_php['userpics'] = 'The directory for user files'; // cpg1.5
$lang_admin_php['normal_pfx'] = 'The prefix for intermediate pictures'; // cpg1.5
$lang_admin_php['default_dir_mode'] = 'Default mode for directories'; // cpg1.5
$lang_admin_php['default_file_mode'] = 'Default mode for files'; // cpg1.5
$lang_admin_php['enable_watermark'] = 'Watermark images'; // cpg1.5
$lang_admin_php['enable_thumb_watermark'] = 'Watermark custom thumbs'; // cpg1.5
$lang_admin_php['where_put_watermark'] = 'Where to place the watermark'; // cpg1.5
$lang_admin_php['which_files_to_watermark'] = 'Which files to watermark'; // cpg1.5
$lang_admin_php['watermark_file'] = 'Which file to use for watermark'; // cpg1.5
$lang_admin_php['watermark_transparency'] = 'Transparency for entire image'; // cpg1.5
$lang_admin_php['zero_2_hundred'] = '0-100'; // cpg1.5
$lang_admin_php['reduce_watermark'] = 'Downsize watermark if width of a picture is smaller than entered value. That is the 100% reference point. Resizing of the watermark is linear (0 to disable)'; // cpg1.5
$lang_admin_php['watermark_transparency_featherx'] = 'Set color transparent x'; // cpg1.5
$lang_admin_php['watermark_transparency_feathery'] = 'Set color transparent y'; // cpg1.5
$lang_admin_php['gd2_only'] = 'GD2 only'; // cpg1.5
$lang_admin_php['allow_user_registration'] = 'Allow new user registrations'; // cpg1.5
$lang_admin_php['global_registration_pw'] = 'Global password for registration'; // cpg1.5
$lang_admin_php['user_registration_disclaimer'] = 'Display disclaimer on user registration'; // cpg1.5
$lang_admin_php['registration_captcha'] = 'Display Captcha (Visual Confirmation) on registration page'; // cpg1.5
$lang_admin_php['reg_requires_valid_email'] = 'User registration requires email verification'; // cpg1.5
$lang_admin_php['reg_notify_admin_email'] = 'Notify admin of user registration by email'; // cpg1.5
$lang_admin_php['admin_activation'] = 'Admin activation of registrations'; // cpg1.5
$lang_admin_php['personal_album_on_registration'] = 'Create user album in personal gallery on registration'; // cpg1.5
$lang_admin_php['allow_unlogged_access'] = 'Allow unlogged users (guest or anonymous) access'; // cpg1.5
$lang_admin_php['thumbnail_intermediate_full'] = 'thumbnail, intermediate, and full-size image'; // cpg1.5
$lang_admin_php['thumbnail_intermediate'] = 'thumbnail and intermediate image'; // cpg1.5
$lang_admin_php['thumbnail_only'] = 'thumbnail only'; // cpg1.5
$lang_admin_php['upload_mechanism'] = 'Default upload method'; // cpg1.5
$lang_admin_php['upload_swf'] = 'advanced - multiple files, Flash-driven (recommended)'; // cpg1.5
$lang_admin_php['upload_single'] = 'simple - one file at a time'; // cpg1.5
$lang_admin_php['allow_user_upload_choice'] = 'Allow users to choose the upload method'; // cpg1.5
$lang_admin_php['allow_duplicate_emails_addr'] = 'Allow two users to have the same email address'; // cpg1.5
$lang_admin_php['upl_notify_admin_email'] = 'Notify admin of user upload awaiting approval'; // cpg1.5
$lang_admin_php['allow_memberlist'] = 'Allow logged in users to view the memberlist'; // cpg1.5
$lang_admin_php['allow_email_change'] = 'Allow users to change email address in their profile'; // cpg1.5
$lang_admin_php['allow_user_account_delete'] = 'Allow users to delete their own user account'; // cpg1.5
$lang_admin_php['users_can_edit_pics'] = 'Allow users to retain control over their pics in public galleries'; // cpg1.5
$lang_admin_php['allow_user_move_album'] = 'Allow users to move their albums from/to allowed categories'; // cpg1.5
$lang_admin_php['allow_user_album_keyword'] = 'Allow users to assign album keywords'; // cpg1.5
$lang_admin_php['allow_user_edit_after_cat_close'] = 'Allow users to edit their albums when in a locked category'; // cpg1.5
$lang_admin_php['login_method_username'] = 'Username'; // cpg1.5
$lang_admin_php['login_method_email'] = 'Email address'; // cpg1.5
$lang_admin_php['login_method_both'] = 'Both'; // cpg1.5
$lang_admin_php['login_method'] = 'How do you want your users to be able to login'; // cpg1.5
$lang_admin_php['login_threshold'] = 'Number of failed login attempts until temporary ban'; // cpg1.5
$lang_admin_php['login_threshold_detail'] = '(to avoid brute force attacks)'; // cpg1.5
$lang_admin_php['login_expiry'] = 'Duration of a temporary ban after failed logins'; // cpg1.5
$lang_admin_php['minutes'] = 'minutes'; // cpg1.5
$lang_admin_php['report_post'] = 'Enable Report to Admin'; // cpg1.5
$lang_admin_php['user_profile1_name'] = 'Profile 1 name'; // cpg1.5
$lang_admin_php['user_profile2_name'] = 'Profile 2 name'; // cpg1.5
$lang_admin_php['user_profile3_name'] = 'Profile 3 name'; // cpg1.5
$lang_admin_php['user_profile4_name'] = 'Profile 4 name'; // cpg1.5
$lang_admin_php['user_profile5_name'] = 'Profile 5 name'; // cpg1.5
$lang_admin_php['user_profile6_name'] = 'Profile 6 name'; // cpg1.5
$lang_admin_php['user_field1_name'] = 'Field 1 name'; // cpg1.5
$lang_admin_php['user_field2_name'] = 'Field 2 name'; // cpg1.5
$lang_admin_php['user_field3_name'] = 'Field 3 name'; // cpg1.5
$lang_admin_php['user_field4_name'] = 'Field 4 name'; // cpg1.5
$lang_admin_php['cookie_name'] = 'Cookie name'; // cpg1.5
$lang_admin_php['cookie_path'] = 'Cookie path'; // cpg1.5
$lang_admin_php['smtp_host'] = 'SMTP Host (when left blank, sendmail will be used)'; // cpg1.5
$lang_admin_php['smtp_username'] = 'SMTP Username'; // cpg1.5
$lang_admin_php['smtp_password'] = 'SMTP Password'; // cpg1.5
$lang_admin_php['log_mode'] = 'Logging mode'; // cpg1.5
$lang_admin_php['log_mode_details'] = 'All log files are written in English.'; // cpg1.5
$lang_admin_php['log_ecards'] = 'Log ecards'; // cpg1.5
$lang_admin_php['log_ecards_detail'] = 'Note: logging can have legal impacts. The user should be informed on registration that ecards are being logged. It is recommended to provide a separate page with a privacy policy as well.'; // cpg1.5
$lang_admin_php['vote_details'] = 'Keep detailed vote statistics'; // cpg1.5
$lang_admin_php['hit_details'] = 'Keep detailed hit statistics'; // cpg1.5
$lang_admin_php['display_stats_on_index'] = 'Display statistics on index page'; // cpg1.5
$lang_admin_php['count_file_hits'] = 'Count file views'; // cpg1.5
$lang_admin_php['count_album_hits'] = 'Count album views'; // cpg1.5
$lang_admin_php['count_admin_hits'] = 'Count admin views'; // cpg1.5
$lang_admin_php['debug_mode'] = 'Enable debug mode'; // cpg1.5
$lang_admin_php['debug_notice'] = 'Display notices in debug mode'; // cpg1.5
$lang_admin_php['offline'] = 'Gallery is offline'; // cpg1.5
$lang_admin_php['display_coppermine_news'] = 'Display news from coppermine-gallery.net'; // cpg1.5
$lang_admin_php['display_coppermine_detail'] = 'will only be displayed for the admin'; // cpg1.5
$lang_admin_php['config_setting_invalid'] = 'The value you have set for &laquo;%s&raquo; is invalid, please review it.'; // cpg1.5
$lang_admin_php['config_setting_ok'] = 'Your setting for &laquo;%s&raquo; has been saved.'; // cpg1.5
$lang_admin_php['contact_form_settings'] = 'Kontakt formular indstillinger'; // cpg1.5
$lang_admin_php['contact_form_guest_enable'] = 'Display contact form to anonymous visitors (guests)'; // cpg1.5
$lang_admin_php['contact_form_registered_enable'] = 'Display contact form to registered users'; // cpg1.5
$lang_admin_php['with_captcha'] = 'with captcha'; // cpg1.5
$lang_admin_php['without_captcha'] = 'without captcha'; // cpg1.5
$lang_admin_php['optional'] = 'optional'; // cpg1.5
$lang_admin_php['mandatory'] = 'mandatory'; // cpg1.5
$lang_admin_php['contact_form_guest_name_field'] = 'Display sender name field for guests'; // cpg1.5
$lang_admin_php['contact_form_guest_email_field'] = 'Display sender email field for guests'; // cpg1.5
$lang_admin_php['contact_form_subject_field'] = 'Display subject field'; // cpg1.5
$lang_admin_php['contact_form_subject_content'] = 'Subject line for emails generated by contact form'; // cpg1.5
$lang_admin_php['contact_form_sender_email'] = 'Use the sender\'s email address as &quot;from&quot; address'; // cpg1.5
$lang_admin_php['allow_no_link'] = 'allow, but don\'t display link'; // cpg1.5
$lang_admin_php['allow_show_link'] = 'allow and promote it by displaying a link'; // cpg1.5
$lang_admin_php['display_sidebar_user'] = 'Sidebar for registered users'; // cpg1.5
$lang_admin_php['display_sidebar_guest'] = 'Sidebar for guests'; // cpg1.5
$lang_admin_php['do_not_change'] = 'Don\'t change this unless you REALLY know what you\'re doing!'; // cpg1.5
$lang_admin_php['reset_to_default'] = 'Reset to default'; // cpg1.5
$lang_admin_php['no_change_needed'] = 'No change needed, config option already is set to default'; // cpg1.5
$lang_admin_php['enabled'] = 'enabled'; // cpg1.5
$lang_admin_php['disabled'] = 'disabled'; // cpg1.5
$lang_admin_php['none'] = 'none'; // cpg1.5
$lang_admin_php['warning_change'] = 'When changing this setting, only the files that are added from that point on are affected, so it\'s advisable that this setting is not changed if there are already files in the gallery. You can, however, apply the changes to the existing files with the "admin tools (resize pictures)" utility from the admin menu.'; // cpg1.5
$lang_admin_php['warning_exist'] = 'These settings mustn\'t be changed if you already have files in your database.'; // cpg1.5
$lang_admin_php['warning_dont_submit'] = 'If you are not sure about the impact that changing this setting will have, do not submit the form and review the documentation first.'; // cpg1.5 // js-alert
$lang_admin_php['menu_only'] = 'menu only'; // cpg1.5
$lang_admin_php['everywhere'] = 'everywhere'; // cpg1.5
$lang_admin_php['manage_languages'] = 'Manage languages'; // cpg1.5
$lang_admin_php['form_token_lifetime'] = 'Form token lifetime'; // cpg1.5
$lang_admin_php['seconds'] = 'Seconds'; // cpg1.5
$lang_admin_php['display_reset_boxes_in_config'] = 'Display reset boxes in config'; // cpg1.5
$lang_admin_php['upd_not_needed'] = 'Update not needed.'; // cpg 1.5
}


// ------------------------------------------------------------------------- //
// File db_ecard.php
// ------------------------------------------------------------------------- //
if (defined('DB_ECARD_PHP')) {
$lang_db_ecard_php['title'] = 'Sent ecards';
$lang_db_ecard_php['ecard_sender'] = 'Sender';
$lang_db_ecard_php['ecard_recipient'] = 'Recipient';
$lang_db_ecard_php['ecard_date'] = 'Date';
$lang_db_ecard_php['ecard_display'] = 'Display ecard';
$lang_db_ecard_php['ecard_name'] = 'Name';
$lang_db_ecard_php['ecard_email'] = 'Email';
$lang_db_ecard_php['ecard_ip'] = 'IP';
$lang_db_ecard_php['ecard_ascending'] = 'ascending';
$lang_db_ecard_php['ecard_descending'] = 'descending';
$lang_db_ecard_php['ecard_sorted'] = 'Sorted';
$lang_db_ecard_php['ecard_by_date'] = 'by date';
$lang_db_ecard_php['ecard_by_sender_name'] = 'by sender\'s name';
$lang_db_ecard_php['ecard_by_sender_email'] = 'by sender\'s email';
$lang_db_ecard_php['ecard_by_sender_ip'] = 'by sender\'s IP address';
$lang_db_ecard_php['ecard_by_recipient_name'] = 'by recipient\'s name';
$lang_db_ecard_php['ecard_by_recipient_email'] = 'by recipient\'s email';
$lang_db_ecard_php['ecard_number'] = 'displaying record %s to %s of %s';
$lang_db_ecard_php['ecard_goto_page'] = 'go to page';
$lang_db_ecard_php['ecard_records_per_page'] = 'Records per page';
$lang_db_ecard_php['check_all'] = 'Check All';
$lang_db_ecard_php['uncheck_all'] = 'Uncheck All';
$lang_db_ecard_php['ecards_delete_selected'] = 'Delete selected ecards';
$lang_db_ecard_php['ecards_delete_confirm'] = 'Are you sure you want to delete the records? Tick the checkbox!';
$lang_db_ecard_php['ecards_delete_sure'] = 'I\'m sure';
$lang_db_ecard_php['invalid_data'] = 'The data for the ecard you are trying to access has been corrupted by your mail client. Check the link is complete.';
}

// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //
if (defined('DB_INPUT_PHP')) {
$lang_db_input_php['empty_name_or_com'] = 'You need to type your name and a comment';
$lang_db_input_php['com_added'] = 'Your comment was added'; // cpg1.5
$lang_db_input_php['alb_need_title'] = 'You have to provide a title for the album!';
$lang_db_input_php['no_udp_needed'] = 'No update needed.';
$lang_db_input_php['alb_updated'] = 'The album was updated';
$lang_db_input_php['unknown_album'] = 'Selected album does not exist or you don\'t have permission to upload in this album';
$lang_db_input_php['no_pic_uploaded'] = 'No file was uploaded!<br />If you have really selected a file to upload, check that the server allows file uploads...';
$lang_db_input_php['err_mkdir'] = 'Failed to create directory %s!';
$lang_db_input_php['dest_dir_ro'] = 'Destination directory %s is not writable by the script!';
$lang_db_input_php['err_move'] = 'Impossible to move %s to %s!';
$lang_db_input_php['err_fsize_too_large'] = 'The size of file you have uploaded is too large (maximum allowed is %s x %s)!';
$lang_db_input_php['err_imgsize_too_large'] = 'The size of the file you have uploaded is too large (maximum allowed is %s KB)!';
$lang_db_input_php['err_invalid_img'] = 'The file you have uploaded is not a valid image!';
$lang_db_input_php['allowed_img_types'] = 'You can only upload %s images.';
$lang_db_input_php['err_insert_pic'] = 'The file \'%s\' can\'t be inserted in the album ';
$lang_db_input_php['upload_success'] = 'Your file was uploaded successfully.<br />It will be visible after admin approval.';
$lang_db_input_php['notify_admin_email_subject'] = '%s - Upload notification';
$lang_db_input_php['notify_admin_email_body'] = 'A picture has been uploaded by %s that needs your approval. Visit %s';
$lang_db_input_php['info'] = 'Information';
$lang_db_input_php['com_updated'] = 'Comment updated'; // cpg1.5
$lang_db_input_php['alb_updated'] = 'Album updated';
$lang_db_input_php['err_comment_empty'] = 'Your comment is empty!';
$lang_db_input_php['err_invalid_fext'] = 'Only files with the following extensions are accepted:'; // js-alert
$lang_db_input_php['no_flood'] = 'Sorry but you are already the author of the last comment posted for this file<br />Edit the comment you have posted if you want to modify it';
$lang_db_input_php['redirect_msg'] = 'You are being redirected.<br /><br />Click \'CONTINUE\' if the page does not refresh automatically';
$lang_db_input_php['upl_success'] = 'Your file was successfully added';
$lang_db_input_php['email_comment_subject'] = 'Comment posted on Coppermine Photo Gallery';
$lang_db_input_php['email_comment_body'] = 'Someone has posted a comment on your gallery. See it at';
$lang_db_input_php['album_not_selected'] = 'Album not selected';
$lang_db_input_php['com_author_error'] = 'A registered user is using this nickname. Login or use another one';
}

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //
if (defined('DELETE_PHP')) {
$lang_delete_php['orig_pic'] = 'original image'; // cpg1.5
$lang_delete_php['fs_pic'] = 'full size image';
$lang_delete_php['del_success'] = 'successfully deleted';
$lang_delete_php['ns_pic'] = 'normal size image';
$lang_delete_php['err_del'] = 'can\'t be deleted';
$lang_delete_php['thumb_pic'] = 'thumbnail';
$lang_delete_php['comment'] = 'comment';
$lang_delete_php['im_in_alb'] = 'image in album';
$lang_delete_php['alb_del_success'] = 'Album &laquo;%s&raquo; deleted';
$lang_delete_php['alb_mgr'] = 'Album Manager';
$lang_delete_php['err_invalid_data'] = 'Invalid data received in \'%s\'';
$lang_delete_php['create_alb'] = 'Creating album \'%s\'';
$lang_delete_php['update_alb'] = 'Updating album \'%s\' with title \'%s\' and index \'%s\'';
$lang_delete_php['del_pic'] = 'Delete file';
$lang_delete_php['del_alb'] = 'Delete album';
$lang_delete_php['del_user'] = 'Delete user';
$lang_delete_php['err_unknown_user'] = 'The selected user does not exist!';
$lang_delete_php['err_empty_groups'] = 'There\'s no group table, or the group table is empty!';
$lang_delete_php['comment_deleted'] = 'Comment was successfully deleted';
$lang_delete_php['npic'] = 'Picture';
$lang_delete_php['pic_mgr'] = 'Picture Manager';
$lang_delete_php['update_pic'] = 'Updating picture \'%s\' with filename \'%s\' and index \'%s\'';
$lang_delete_php['username'] = 'Username';
$lang_delete_php['anonymized_comments'] = '%s comment(s) anonymized';
$lang_delete_php['anonymized_uploads'] = '%s public upload(s) anonymized';
$lang_delete_php['deleted_comments'] = '%s comment(s) deleted';
$lang_delete_php['deleted_uploads'] = '%s public upload(s) deleted';
$lang_delete_php['user_deleted'] = 'user %s deleted';
$lang_delete_php['activate_user'] = 'Activate user';
$lang_delete_php['user_already_active'] = 'Account is already active';
$lang_delete_php['activated'] = 'Activated';
$lang_delete_php['deactivate_user'] = 'Deactivate user';
$lang_delete_php['user_already_inactive'] = 'Account is already inactive';
$lang_delete_php['deactivated'] = 'Deactivated';
$lang_delete_php['reset_password'] = 'Reset password(s)';
$lang_delete_php['password_reset'] = 'Password reset to %s';
$lang_delete_php['change_group'] = 'Change primary group';
$lang_delete_php['change_group_to_group'] = 'Changing from %s to %s';
$lang_delete_php['add_group'] = 'Add secondary group';
$lang_delete_php['add_group_to_group'] = 'Adding user %s to group %s. He\'s now member of %s as primary and of %s as secondary membergroup(s).';
$lang_delete_php['status'] = 'Status';
$lang_delete_php['updating_album'] = 'Updating album '; // cpg1.5
$lang_delete_php['moved_picture_to_position'] = 'Moved picture %s to position %s'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File displayimage.php
// ------------------------------------------------------------------------- //
if (defined('DISPLAYIMAGE_PHP')){
$lang_display_image_php['confirm_del'] = 'Are you sure you want to DELETE this file?\\nComments will also be deleted.'; // js-alert
$lang_display_image_php['del_pic'] = 'Slet denne fil';
$lang_display_image_php['size'] = '%s x %s pixel';
$lang_display_image_php['views'] = '%s gange';
$lang_display_image_php['slideshow'] = 'Dias fremvisning';
$lang_display_image_php['stop_slideshow'] = 'Stop dias fremvisning';
$lang_display_image_php['view_fs'] = 'Klik for fuld størrelse';
$lang_display_image_php['edit_pic'] = 'Ret fil informationer';
$lang_display_image_php['crop_pic'] = 'Beskær og roter';
$lang_display_image_php['set_player'] = 'Ændre afspiller';

$lang_picinfo['title'] = 'Fil informationer';
$lang_picinfo['Album name'] = 'Album navn';
$lang_picinfo['Rating'] = 'Karakter (%s stemmer)';
$lang_picinfo['Date Added'] = 'Dato tilføjet';
$lang_picinfo['Dimensions'] = 'Dimensioner';
$lang_picinfo['Displayed'] = 'Vist';
$lang_picinfo['URL'] = 'URL';
$lang_picinfo['Make'] = 'Fabrikat';
$lang_picinfo['Model'] = 'Model';
$lang_picinfo['DateTime'] = 'Dato Tid';
$lang_picinfo['ISOSpeedRatings'] = 'ISO';
$lang_picinfo['MaxApertureValue'] = 'Max blænde';
$lang_picinfo['FocalLength'] = 'Fokus længde';
$lang_picinfo['Comment'] = 'kommentar';
$lang_picinfo['addFav'] = 'Tilføj til Favoriter';
$lang_picinfo['addFavPhrase'] = 'Favoriter';
$lang_picinfo['remFav'] = 'Fjern fra Favoriter';
$lang_picinfo['iptcTitle'] = 'IPTC Titel';
$lang_picinfo['iptcCopyright'] = 'IPTC Copyright';
$lang_picinfo['iptcKeywords'] = 'IPTC nøgleord';
$lang_picinfo['iptcCategory'] = 'IPTC kategori';
$lang_picinfo['iptcSubCategories'] = 'IPTC under kategorier';
$lang_picinfo['ColorSpace'] = 'Farverum';
$lang_picinfo['ExposureProgram'] = 'Eksponeringsprogram';
$lang_picinfo['Flash'] = 'Flash';
$lang_picinfo['MeteringMode'] = 'Lysmålingsmetode';
$lang_picinfo['ExposureTime'] = 'Eksponerings tid';
$lang_picinfo['ExposureBiasValue'] = 'Exposure Bias';
$lang_picinfo['ImageDescription'] = 'Billede beskrivelse';
$lang_picinfo['Orientation'] = 'Orientering';
$lang_picinfo['xResolution'] = 'X opløsning';
$lang_picinfo['yResolution'] = 'Y opløsning';
$lang_picinfo['ResolutionUnit'] = 'Opløsningsenhed';
$lang_picinfo['Software'] = 'Software';
$lang_picinfo['YCbCrPositioning'] = 'YCbCrPosition';
$lang_picinfo['ExifOffset'] = 'EXIF Offset';
$lang_picinfo['IFD1Offset'] = 'IFD1 Offset';
$lang_picinfo['FNumber'] = 'FNumber';
$lang_picinfo['ExifVersion'] = 'EXIF Version';
$lang_picinfo['DateTimeOriginal'] = 'DateTime Original';
$lang_picinfo['DateTimedigitized'] = 'DateTime digitized';
$lang_picinfo['ComponentsConfiguration'] = 'Components Configuration';
$lang_picinfo['CompressedBitsPerPixel'] = 'Compressed Bits Per Pixel';
$lang_picinfo['LightSource'] = 'Lys kilde';
$lang_picinfo['ISOSetting'] = 'ISO instilling';
$lang_picinfo['ColorMode'] = 'Farvetilstand';
$lang_picinfo['Quality'] = 'Kvalitet';
$lang_picinfo['ImageSharpening'] = 'Image Sharpening';
$lang_picinfo['FocusMode'] = 'Focus tilstand';
$lang_picinfo['FlashSetting'] = 'Flash indstilling';
$lang_picinfo['ISOSelection'] = 'ISO valg';
$lang_picinfo['ImageAdjustment'] = 'Billed justering';
$lang_picinfo['Adapter'] = 'Adapter';
$lang_picinfo['ManualFocusDistance'] = 'Manual Fokus Afstand';
$lang_picinfo['DigitalZoom'] = 'Digital Zoom';
$lang_picinfo['AFFocusPosition'] = 'AF Fokus Position';
$lang_picinfo['Saturation'] = 'Saturation';
$lang_picinfo['NoiseReduction'] = 'Støjreduktion';
$lang_picinfo['FlashPixVersion'] = 'FlashPix Version';
$lang_picinfo['ExifImageWidth'] = 'EXIF Billedbredde';
$lang_picinfo['ExifImageHeight'] = 'EXIF Billedhøjde';
$lang_picinfo['ExifInteroperabilityOffset'] = 'EXIF Interoperability Offset';
$lang_picinfo['FileSource'] = 'Fil kilde';
$lang_picinfo['SceneType'] = 'Scene Type';
$lang_picinfo['CustomerRender'] = 'Customer Render';
$lang_picinfo['ExposureMode'] = 'Eksponerings tilstand';
$lang_picinfo['WhiteBalance'] = 'Hvid balance';
$lang_picinfo['DigitalZoomRatio'] = 'Digital Zoom forhold';
$lang_picinfo['SceneCaptureMode'] = 'Scene optagelses tilstand';
$lang_picinfo['GainControl'] = 'Gain Control';
$lang_picinfo['Contrast'] = 'Kontrast';
$lang_picinfo['Sharpness'] = 'Skarphed';
$lang_picinfo['ManageExifDisplay'] = 'Manage EXIF Display';
$lang_picinfo['success'] = 'Information opdateret.';
$lang_picinfo['show_details'] = 'Vis detaljer'; // cpg1.5
$lang_picinfo['hide_details'] = 'Skjul Detaljer'; // cpg1.5
$lang_picinfo['download_URL'] = 'Direkte Link';
$lang_picinfo['movie_player'] = 'Play the file in your standard application';

$lang_display_comments['comment_x_to_y_of_z'] = '%d to %d of %d'; // cpg1.5
$lang_display_comments['page'] = 'Side'; // cpg1.5
$lang_display_comments['edit_title'] = 'Ret denne kommentar';
$lang_display_comments['delete_title'] = 'Slet denne kommentar'; // cpg1.5
$lang_display_comments['confirm_delete'] = 'Er du sikker på du vil slette denne kommentar?'; // js-alert
$lang_display_comments['add_your_comment'] = 'Tilføj din kommentar';
$lang_display_comments['name'] = 'Navn';
$lang_display_comments['comment'] = 'Kommentar';
$lang_display_comments['your_name'] = 'Anon';
$lang_display_comments['report_comment_title'] = 'Rapporter denne kommentar til admin';
$lang_display_comments['pending_approval'] = 'Kommentar vil først være synlig efter godkendelse'; // cpg1.5
$lang_display_comments['unapproved_comment'] = 'Ikke godkendt kommentar'; // cpg1.5
$lang_display_comments['pending_approval_message'] = 'Nogen har lagt en kommentar her. Den vil først være synlig efter godkendelse.'; // cpg1.5
$lang_display_comments['approve'] = 'Godkend kommentar'; // cpg1.5
$lang_display_comments['disapprove'] = 'Marker kommentar ej godkendt'; // cpg1.5
$lang_display_comments['log_in_to_comment'] = 'Anonyme kommentarer er ikke tilladt her. %sLog ind%s for at indsætte din kommentar'; // cpg1.5 // do not translate the %s placeholders - they will be used as wrappers for the link (<a>)
$lang_display_comments['default_username_message'] = 'Vær venlig at tilføje dit navn i kommentar'; // cpg1.5
$lang_display_comments['comment_rejected'] = 'Your comment has been rejected'; // cpg1.5

$lang_fullsize_popup['click_to_close'] = 'Click image to close this window';
$lang_fullsize_popup['close_window'] = 'close window'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP')) {
$lang_ecard_php['title'] = 'Send an e-card';
$lang_ecard_php['invalid_email'] = 'Warning: invalid email address:'; // cpg1.5
$lang_ecard_php['ecard_title'] = 'An e-card from %s for you';
$lang_ecard_php['error_not_image'] = 'Only images can be sent as an ecard.'; // cpg1.5
$lang_ecard_php['error_not_image_flash'] = 'Only images and flash files can be sent as an ecard.'; // cpg1.5
$lang_ecard_php['view_ecard'] = 'Alternative link if the e-card does not display correctly';
$lang_ecard_php['view_ecard_plaintext'] = 'To view the ecard, copy and paste this url into your browser\'s address bar:';
$lang_ecard_php['view_more_pics'] = 'View more pictures!';
$lang_ecard_php['send_success'] = 'Your ecard was sent';
$lang_ecard_php['send_failed'] = 'Sorry but the server can\'t send your e-card...';
$lang_ecard_php['from'] = 'From';
$lang_ecard_php['your_name'] = 'Your name';
$lang_ecard_php['your_email'] = 'Your email address';
$lang_ecard_php['to'] = 'To';
$lang_ecard_php['rcpt_name'] = 'Recipient name';
$lang_ecard_php['rcpt_email'] = 'Recipient email address';
$lang_ecard_php['greetings'] = 'Heading';
$lang_ecard_php['message'] = 'Message';
$lang_ecard_php['ecards_footer'] = 'Sent by %s from IP %s at %s (Gallery time)';
$lang_ecard_php['preview'] = 'Preview of the ecard';
$lang_ecard_php['preview_button'] = 'Preview';
$lang_ecard_php['submit_button'] = 'Send ecard';
$lang_ecard_php['preview_view_ecard'] = 'This will be the alternative link to the ecard once it has been generated. It won\'t work for previews.';
}

// ------------------------------------------------------------------------- //
// File report_file.php
// ------------------------------------------------------------------------- //

if (defined('REPORT_FILE_PHP')) {
$lang_report_php['title'] = 'Report to administrator';
$lang_report_php['invalid_email'] = '<strong>Warning</strong> : invalid email address!';
$lang_report_php['report_subject'] = 'A report from %s on a gallery %s';
$lang_report_php['view_report'] = 'Alternative link if the report does not display correctly';
$lang_report_php['view_report_plaintext'] = 'To view the report, copy and paste this url into your browser\'s address bar:';
$lang_report_php['view_more_pics'] = 'Gallery';
$lang_report_php['send_success'] = 'Your report was sent';
$lang_report_php['send_failed'] = 'Sorry but the server can\'t send your report...';
$lang_report_php['from'] = 'From';
$lang_report_php['your_name'] = 'Your name';
$lang_report_php['your_email'] = 'Your email address';
$lang_report_php['to'] = 'To';
$lang_report_php['administrator'] = 'Administrator/Mod';
$lang_report_php['subject'] = 'Subject';
$lang_report_php['comment_field_name'] = 'Reporting on comment by "%s"';
$lang_report_php['reason'] = 'Reason';
$lang_report_php['message'] = 'Message';
$lang_report_php['report_footer'] = 'Sent by %s from IP %s at %s (Gallery time)';
$lang_report_php['obscene'] = 'obscene';
$lang_report_php['offensive'] = 'offensive';
$lang_report_php['misplaced'] = 'off-topic/misplaced';
$lang_report_php['missing'] = 'missing';
$lang_report_php['issue'] = 'error/cannot view';
$lang_report_php['other'] = 'other';
$lang_report_php['refers_to'] = 'File report refers to';
$lang_report_php['reasons_list_heading'] = 'reason(s) for report:';
$lang_report_php['no_reason_given'] = 'no reason was given';
$lang_report_php['go_comment'] = 'Go to comment';
$lang_report_php['view_comment'] = 'View full report with comment';
$lang_report_php['type_file'] = 'file';
$lang_report_php['type_comment'] = 'comment';
$lang_report_php['invalid_data'] = 'The data for the report you are trying to access has been corrupted by your mail client. Check the link is complete.';
}

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) {
$lang_editpics_php['pic_info'] = 'File info';
$lang_editpics_php['desc'] = 'Description';
$lang_editpics_php['approval'] = 'Approval'; //cpg 1.5
$lang_editpics_php['approved'] = 'Approved'; // cpg 1.5
$lang_editpics_php['unapproved'] = 'Unapproved'; // cpg 1.5
$lang_editpics_php['new_keyword'] = 'New keyword';
$lang_editpics_php['new_keywords'] = 'New keywords found';
$lang_editpics_php['existing_keyword'] = 'Existing keyword';
$lang_editpics_php['pic_info_str'] = '%s &times; %s - %s KB - %s views - %s votes';
$lang_editpics_php['approve'] = 'Approve file';
$lang_editpics_php['postpone_app'] = 'Postpone approval';
$lang_editpics_php['del_pic'] = 'Delete file';
$lang_editpics_php['del_all'] = 'Delete ALL files';
$lang_editpics_php['read_exif'] = 'Read EXIF info again';
$lang_editpics_php['reset_view_count'] = 'Reset view counter';
$lang_editpics_php['reset_all_view_count'] = 'Reset ALL view counters';
$lang_editpics_php['reset_votes'] = 'Reset votes';
$lang_editpics_php['reset_all_votes'] = 'Reset ALL votes';
$lang_editpics_php['del_comm'] = 'Delete comments';
$lang_editpics_php['del_all_comm'] = 'Delete ALL comments';
$lang_editpics_php['upl_approval'] = 'Upload approval';
$lang_editpics_php['edit_pics'] = 'Edit files';
$lang_editpics_php['edit_pic'] = 'Edit file'; // cpg 1.5
$lang_editpics_php['see_next'] = 'See next files';
$lang_editpics_php['see_prev'] = 'See previous files';
$lang_editpics_php['n_pic'] = '%s files';
$lang_editpics_php['n_of_pic_to_disp'] = 'Number of files to display';
$lang_editpics_php['crop_title'] = 'Coppermine Picture Editor';
$lang_editpics_php['preview'] = 'Preview';
$lang_editpics_php['save'] = 'Save picture';
$lang_editpics_php['save_thumb'] = 'Save as thumbnail';
$lang_editpics_php['gallery_icon'] = 'Make this my icon';
$lang_editpics_php['sel_on_img'] = 'The selection has to be entirely on the image!'; // js-alert
$lang_editpics_php['album_properties'] = 'Album properties';
$lang_editpics_php['parent_category'] = 'Parent category';
$lang_editpics_php['thumbnail_view'] = 'Thumbnail view';
$lang_editpics_php['select_unselect'] = 'select/unselect all';
$lang_editpics_php['file_exists'] = 'Destination file \'%s\' already exists.';
$lang_editpics_php['rename_failed'] = 'Failed to rename \'%s\' to \'%s\'.';
$lang_editpics_php['src_file_missing'] = 'Source file \'%s\' is missing.';
$lang_editpics_php['mime_conv'] = 'Cannot convert file from \'%s\' to \'%s\'';
$lang_editpics_php['forb_ext'] = 'Forbidden file extension.';
$lang_editpics_php['error_editor_class'] = 'Editor class for your resize method not implemented'; // cpg 1.5
$lang_editpics_php['error_document_size'] = 'Document has no width or height'; // cpg 1.5 // js-alert
$lang_editpics_php['success_picture'] = 'Picture successfully saved - you can %sclose%s this window now'; // cpg1.5 // do not translate "%s" here
$lang_editpics_php['success_thumb'] = 'Thumbnail successfully saved - you can %sclose%s this window now'; // cpg1.5 // do not translate "%s" here
$lang_editpics_php['rotate'] = 'Rotate'; // cpg 1.5
$lang_editpics_php['mirror'] = 'Mirror'; // cpg 1.5
$lang_editpics_php['scale'] = 'Scale'; // cpg 1.5
$lang_editpics_php['new_width'] = 'New width'; // cpg 1.5
$lang_editpics_php['new_height'] = 'New height'; // cpg 1.5
$lang_editpics_php['enable_clipping'] = 'Enable clipping, apply to crop'; // cpg 1.5
$lang_editpics_php['jpeg_quality'] = 'JPEG Output Quality'; // cpg 1.5
$lang_editpics_php['or'] = 'OR'; // cpg 1.5
$lang_editpics_php['approve_pic'] = 'Approve file'; // cpg 1.5
$lang_editpics_php['approve_all'] = 'Approve ALL files'; // cpg 1.5
$lang_editpics_php['error_empty'] = 'Album is empty'; // cpg1.5
$lang_editpics_php['error_approval_empty'] = 'No more pictures to approve'; // cpg1.5
$lang_editpics_php['error_linked_only'] = 'Album only contains linked files, which you cannot edit here'; // cpg1.5
$lang_editpics_php['note_approve_public'] = 'Files moved to a public album must be approved by an admin.'; // cpg1.5
$lang_editpics_php['note_approve_private'] = 'Files moved to a private gallery album must be approved by an admin.' ; // cpg1.5
$lang_editpics_php['note_edit_control'] = 'Files moved to a public album cannot be edited.'; // cpg1.5
$lang_editpics_php['confirm_move'] = 'Are you sure you want to move this file?'; // cpg1.5 //js-alert
$lang_editpics_php['success_changes'] = 'Changes successfully saved'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File forgot_passwd.php
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) {
$lang_forgot_passwd_php['forgot_passwd'] = 'Password reminder';
$lang_forgot_passwd_php['err_already_logged_in'] = 'You are already logged in!';
$lang_forgot_passwd_php['enter_email'] = 'Enter your email address';
$lang_forgot_passwd_php['submit'] = 'go';
$lang_forgot_passwd_php['illegal_session'] = 'Forgot password session invalid or has expired.';
$lang_forgot_passwd_php['failed_sending_email'] = 'The password reminder email can\'t be sent!';
$lang_forgot_passwd_php['email_sent'] = 'An email with your username and new password was sent to %s';
$lang_forgot_passwd_php['verify_email_sent'] = 'An email has been sent to %s. Please check your email to complete the process.';
$lang_forgot_passwd_php['err_unk_user'] = 'Selected user does not exist!';
$lang_forgot_passwd_php['account_verify_subject'] = '%s - New password request';
$lang_forgot_passwd_php['passwd_reset_subject'] = '%s - Your new password';
$lang_forgot_passwd_php['account_verify_email'] = <<< EOT
You have requested a new password. If you would like to proceed with having a new password sent to you, click on the following link:

<a href="{VERIFY_LINK}">{VERIFY_LINK}</a>


Regards,

The management of {SITE_NAME}

EOT;

$lang_forgot_passwd_php['reset_email'] = <<< EOT
Here is the new password you requested:

Username: {USER_NAME}
Password: {PASSWORD}

Go to <a href="{SITE_LINK}">{SITE_LINK}</a> to log in.


Regards,

The management of {SITE_NAME}

EOT;
}

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //
if (defined('GROUPMGR_PHP')) {
$lang_groupmgr_php['group_manager'] = 'Group manager'; // cpg1.5.x
$lang_groupmgr_php['group_name'] = 'Group';
$lang_groupmgr_php['permissions'] = 'Permissions';
$lang_groupmgr_php['public_albums'] = 'Public albums upload';
$lang_groupmgr_php['personal_gallery'] = 'Personal gallery';
$lang_groupmgr_php['disk_quota'] = 'Quota';
$lang_groupmgr_php['rating'] = 'Rating';
$lang_groupmgr_php['ecards'] = 'Ecards';
$lang_groupmgr_php['comments'] = 'Comments';
$lang_groupmgr_php['allowed'] = 'Allowed';
$lang_groupmgr_php['approval'] = 'Approval';
$lang_groupmgr_php['create_new_group'] = 'Create new group';
$lang_groupmgr_php['del_groups'] = 'Delete selected group(s)';
$lang_groupmgr_php['confirm_del'] = 'Warning, when you delete a group, users that belong to this group will be transferred to the \'Registered\' group!\n\nDo you want to proceed?'; // js-alert
$lang_groupmgr_php['title'] = 'Manage user groups';
$lang_groupmgr_php['reset_to_default'] = 'Reset to default name (%s) - recommended!';
$lang_groupmgr_php['error_group_empty'] = 'Group table was empty!<br />Default groups created, please reload this page';
$lang_groupmgr_php['explain_greyed_out_title'] = 'Why is this row grayed out?';
$lang_groupmgr_php['explain_guests_greyed_out_text'] = 'You cannot change the properties of this group because the access level of this group is NONE. All unlogged users (members of the group %s) can\'t do anything but login; therefore group settings don\'t apply for them. Change the access level here or on the Gallery Configuration page under "User Settings", "Allow unlogged users access".';
$lang_groupmgr_php['group_assigned_album'] = 'assigned album(s)';
$lang_groupmgr_php['access_level'] = 'Access level'; // cpg1.5
$lang_groupmgr_php['thumbnail_intermediate_full'] = 'thumbnail, intermediate, and full-size image'; // cpg1.5
$lang_groupmgr_php['thumbnail_intermediate'] = 'thumbnail and intermediate image'; // cpg1.5
$lang_groupmgr_php['thumbnail_only'] = 'thumbnail only'; // cpg1.5
$lang_groupmgr_php['none'] = 'none'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //
if (defined('INDEX_PHP')){
$lang_index_php['welcome'] = 'Welcome!';

$lang_album_admin_menu['confirm_delete'] = 'Are you sure you want to DELETE this album?\\nAll files and comments will also be deleted.'; // js-alert
$lang_album_admin_menu['delete'] = 'Slet';
$lang_album_admin_menu['modify'] = 'Egenskaber';
$lang_album_admin_menu['edit_pics'] = 'Ret filer';
$lang_album_admin_menu['cat_locked'] = 'Dette album er låst for rettelser'; // cpg1.5.x

$lang_list_categories['home'] = 'Hjem';
$lang_list_categories['stat1'] = '[pictures] files in [albums] albums and [cat] categories with [comments] comments viewed [views] times'; // do not translate the stuff in square brackets
$lang_list_categories['stat2'] = '[pictures] files in [albums] albums viewed [views] times'; // do not translate the stuff in square brackets
$lang_list_categories['xx_s_gallery'] = '%s\'s Gallery';
$lang_list_categories['stat3'] = '[pictures] files in [albums] albums with [comments] comments viewed [views] times'; // do not translate the stuff in square brackets

$lang_list_users['user_list'] = 'User list';
$lang_list_users['no_user_gal'] = 'There are no user galleries';
$lang_list_users['n_albums'] = '%s album(s)';
$lang_list_users['n_pics'] = '%s file(s)';

$lang_list_albums['n_pictures'] = '%s filer';
$lang_list_albums['last_added'] = ', sidste lagt på %s';
$lang_list_albums['n_link_pictures'] = '%s linked files';
$lang_list_albums['total_pictures'] = '%s files total';
$lang_list_albums['alb_hits'] = 'Album set %s gange'; // cpg1.5
$lang_list_albums['from_category'] = ' - From Category: '; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File install.php
// ------------------------------------------------------------------------- //

if (defined('INSTALL_PHP')) {
$lang_install['already_succ'] = 'The installer has already been successfully run once and is now locked.';
$lang_install['already_succ_explain'] = 'If you want to run the installer again, you first need to delete the \'include/config.inc.php\' file that was created in the directory where you put Coppermine. You can do this with any FTP program';
$lang_install['cant_read_tmp_conf'] = 'The installer can\'t read the temporary config file %s.';
$lang_install['cant_write_tmp_conf'] = 'The installer can\'t write the temporary config file %s.';
$lang_install['review_permissions'] = 'Please review directory permissions.';
$lang_install['change_lang'] = 'Change language';
$lang_install['check_path'] = 'Check path';
$lang_install['continue'] = 'Next step';
$lang_install['conv_said'] = 'The convert program said:';
$lang_install['license_info'] = 'Coppermine is a picture/multimedia gallery package that is released under GNU GPL v3. By installing, you agree to be bound to Coppermine\'s license:';
$lang_install['cpg_info_frames'] = 'Your browser appears incapable of displaying inline frames. You can review the license within the docs folder that ships with your Coppermine package.';
$lang_install['license'] = 'Coppermine license agreement';
$lang_install['create_table'] = 'Creating table \'%s\'';
$lang_install['db_populating'] = 'Trying to insert data in the database.';
$lang_install['db_alr_populated'] = 'Already inserted required data in the database.';
$lang_install['dir_ok'] = 'Directory found';
$lang_install['directory'] = 'Directory';
$lang_install['email'] = 'Email address';
$lang_install['email_no_match'] = 'Email addresses do not match or are invalid.';
$lang_install['email_verif'] = 'Verify email';
$lang_install['err_cpgnuke'] = '<h1>ERROR</h1>You seem to be trying to install the standalone Coppermine into your Nuke portal.<br />This version can only be used as standalone!<br />Some server setups might display this warning even though you don\'t have a nuke portal installed - if this is the case for you, <a href="%s?continue_anyway=1">continue</a> with the install. If you are using a nuke portal, you might want to take a look into <a href=\"http://www.cpgnuke.com/\">CpgNuke</a> or use one of the (unsupported)<a href=\"http://sourceforge.net/project/showfiles.php?group_id=89658&amp;package_id=95984\">Coppermine ports</a> - do not continue!';
$lang_install['error'] = 'ERROR';
$lang_install['error_need_corr'] = 'The following errors were encountered and need to be corrected first:';
$lang_install['finish'] = 'Finish installation';
$lang_install['gd_note'] = '<strong>Important :</strong> older versions of the GD graphic library support only JPEG and PNG images. If this is the case for you, then the script will not be able to create thumbnails for GIF images.';
$lang_install['go_to_main'] = 'Go to the main page';
$lang_install['im_no_convert_ex'] = 'The installer found the ImageMagick \'convert\' program in \'%s\', however it can\'t be executed by the script.<br />You may consider using GD instead of ImageMagick.';
$lang_install['im_not_found'] = 'The installer tried to find ImageMagick, but could not determine its existence or there was an error. <br />Coppermine can use the <a href="http://www.imagemagick.org/">ImageMagick</a> \'convert\' program to create thumbnails. Quality of images produced by ImageMagick is superior to GD1 but equivalent to GD2.<br />If ImageMagick is installed on your system and you want to use it, <br />you need to input the full path to the \'convert\' program below. <br />On Windows the path should look something like \'c:/ImageMagick/\' and should not contain any space, on Unix is it something like \'/usr/bin/\'.<br />If you have no idea wether you have ImageMagick or not, leave this field empty - the installer will then try to use GD2 by default (which is what most users have). <br />You can change this later as well (in Coppermine\'s config screen), so don\'t be afraid if you\'re not sure what to enter here - leave it blank.';
$lang_install['im_packages'] = 'Your server supports the following image package(s)';
$lang_install['im_path'] = 'Path to ImageMagick:';
$lang_install['im_path_space'] = 'The path to ImageMagick (\'%s\') contains at least one space. This will cause problems in the script.<br />You must move ImageMagick to another directory.';
$lang_install['installation'] = 'installation';
$lang_install['installer_locked'] = 'The installer is locked';
$lang_install['installer_selected'] = 'The installer selected';
$lang_install['inv_im_path'] = 'The installer cannot find the \'%s\' directory you have specified for ImageMagick or it does not have permission to access it. Check that your typing is correct and that you have access to the specified directory.';
$lang_install['lets_go'] = 'Let\'s Go!';
$lang_install['mysql_create_btn'] = 'Create';
$lang_install['mysql_create_db'] = 'Create new MySQL database';
$lang_install['mysql_db_name'] = 'MySQL database name';
$lang_install['mysql_error'] = 'MySQL error: ';
$lang_install['mysql_host'] = 'MySQL host<br />(localhost is usually OK)';
$lang_install['mysql_username'] = 'MySQL username'; // cpg1.5
$lang_install['mysql_password'] = 'MySQL password'; // cpg1.5
$lang_install['mysql_no_create_db'] = 'Could not create MySQL database.';
$lang_install['mysql_no_sel_dbs'] = 'Could not retrieve available MySQL databases';
$lang_install['mysql_succ'] = 'Successful connection with database';
$lang_install['mysql_tbl_pref'] = 'MySQL table prefix';
$lang_install['mysql_test_connection'] = 'Test connection';
$lang_install['mysql_wrong_db'] = 'MySQL could not locate a database called \'%s\' please check the value entered for this';
$lang_install['n_a'] = 'N/A';
$lang_install['no_admin_email'] = 'You have to enter an admin email address';
$lang_install['no_admin_password'] = 'You have to enter an admin password';
$lang_install['no_admin_username'] = 'You have to enter an admin username';
$lang_install['no_dir'] = 'Directory not available';
$lang_install['no_gd'] = 'Your installation of PHP does not seem to include the \'GD\' graphic library extension and you have not indicated that you want to use ImageMagick. Coppermine has been configured to use GD2 because the automatic GD detection sometimes fails. If GD is installed on your system, the script should work else you will need to install ImageMagick.';
$lang_install['no_mysql_conn'] = 'Could not create a MySQL connection, please check the MySQL details entered';
$lang_install['no_mysql_support'] = 'PHP does not have MySQL support enabled.';
$lang_install['no_thumb_method'] = 'You have to choose an image manipulation application (GD/IM)';
$lang_install['nok'] = 'Not OK';
$lang_install['not_here_yet'] = 'Nothing here yet, please click %shere%s to go back.';
$lang_install['ok'] = 'OK';
$lang_install['on_q'] = 'on query';
$lang_install['or'] = 'or';
$lang_install['pass_err'] = 'Passwords don\'t match, you used illegal characters or didn\'t provide one.';
$lang_install['password'] = 'Password';
$lang_install['password_verif'] = 'Verify Password';
$lang_install['perm_error'] = 'The permissions of \'%s\' are set to %s, please set them to';
$lang_install['perm_ok'] = 'The permissions on certain directories have been checked, and seem to be ok. <br />Please proceed to the next step.';
$lang_install['perm_not_ok'] = 'The permissions on certain directories are not set correctly.<br />Please change the permissions of the directories below that are marked "Not OK".'; // cpg1.5
$lang_install['please_go_back'] = 'Please %sclick here%s to go back and fix this problem before proceeding.';
$lang_install['populate_db'] = 'Populate database';
$lang_install['ready_to_roll'] = '<a href="index.php">Coppermine</a> is now properly configured and ready to use.<br /><a href="login.php">Login</a> using the information you provided for your admin account.';
$lang_install['sect_create_adm'] = 'This section requires information to create your Coppermine administration account. Use only alphanumeric characters. Enter the data carefully!';
$lang_install['sect_mysql_info'] = 'This section requires information on how to access your MySQL database.<br />If you don\'t know how to fill them, check with your webhost support.';
$lang_install['sect_mysql_sel_db'] = 'Here you have to choose which database you want to use for Coppermine.<br />If your MySQL account has the needed privileges, you can create a new database from within the installer or you can use an existing database. If you don\'t like both options, you will have to create a database first outside the Coppermine installer, then return here then select the new database from the dropdown box below. You can also change the table prefix (don\'t use dots though), but keeping the default prefix is recommended.';
$lang_install['select_lang'] = 'Select default language: ';
$lang_install['sql_file_not_found'] = 'The file \'%s\' could not be found. Check that you have uploaded all Coppermine files to your server.';
$lang_install['status'] = 'Status';
$lang_install['subdir_called'] = 'A subdirectory called \'%s\' should normally exist in the directory where you uploaded Coppermine.<br />The installer can\'t find this directory. Check that you have uploaded all Coppermine files to your server.';
$lang_install['title_admin'] = 'Create Coppermine administrator';
$lang_install['title_dir_check'] = 'Checking directory permissions';
$lang_install['title_file_check'] = 'Checking installation files';
$lang_install['title_finished'] = 'Installation completed';
$lang_install['title_imp'] = 'Image package selection';
$lang_install['title_imp_test'] = 'Testing image library';
$lang_install['title_mysql_db_sel'] = 'MySQL database selection';
$lang_install['title_mysql_pop'] = 'Creating database structure';
$lang_install['title_mysql_user'] = 'MySQL user authentication';
$lang_install['title_welcome'] = 'Welcome to Coppermine installation';
$lang_install['tmp_conf_error'] = 'Unable to write the temporary config file - make sure the \'include\' folder is writable for the script.';
$lang_install['tmp_conf_ser_err'] = 'A serious error occurred in the installer, try reloading your page or start over by removing the \'include/config.tmp\' file.';
$lang_install['try_again'] = 'Try again!';
$lang_install['unable_write_config'] = 'Unable to write config file';
$lang_install['user_err'] = 'Admin username must contain only alphanumeric characters and can\'t be empty.';
$lang_install['username'] = 'Username';
$lang_install['your_admin_account'] = 'Your admin account';
$lang_install['no_cookie'] = 'Your browser did not accept our cookie. It is recommended to accept cookies.';
$lang_install['no_javascript'] = 'Your browser doesn\'t seem to have Javascript enabled - it is highly recommended to enable it.';
$lang_install['register_globals_detected'] = 'It seems your PHP configuration has \'register_globals\' enabled - you should disable this for security reasons.';
$lang_install['more'] = 'more';
$lang_install['version_undetected'] = 'The script could not determine the version of %s your server is using. Be sure it is at least version %s.';
$lang_install['version_incompatible'] = 'The script detected an incompatible version (%s) of %s on your server.<br />Make sure to use a compatible version (%s or better) before continuing!';
$lang_install['read_gif'] = 'Read/write .gif file';
$lang_install['read_png'] = 'Read/write .png file';
$lang_install['read_jpg'] = 'Read/write .jpg file';
$lang_install['write_error'] = 'Could not write generated image to disk.';
$lang_install['read_error'] = 'Could not read the source image.';
$lang_install['combine_error'] = 'Could not combine the source images';
$lang_install['text_error'] = 'Could not add text to the source image';
$lang_install['scale_error'] = 'Could not scale the source image';
$lang_install['pixels'] = 'pixels';
$lang_install['combine'] = 'Combine 2 images';
$lang_install['text'] = 'Write text on image';
$lang_install['scale'] = 'Scale an image';
$lang_install['generated_image'] = 'Generated image';
$lang_install['reference_image'] = 'Reference image';
$lang_install['imp_test_error'] = 'There was an error in one or more of the tests, please make sure you selected the appropriate Image Processing Package and it is configured correctly!';
$lang_install['writable'] = 'Writable';
$lang_install['not_writable'] = 'Not writable';
$lang_install['not_exist'] = 'Does not exist';
$lang_install['old_install'] = 'This is the new install wizard. Click %shere%s for the classic install screen.'; //cpg1.5

}

// ------------------------------------------------------------------------- //
// File keywordmgr.php
// ------------------------------------------------------------------------- //
if (defined('KEYWORDMGR_PHP')) {
$lang_keywordmgr_php['title'] = 'Manage keywords';
$lang_keywordmgr_php['search'] = 'Search';
$lang_keywordmgr_php['keyword_test_search'] = 'Search for %s in new window';
$lang_keywordmgr_php['keyword_del'] = 'Delete the keyword %s';
$lang_keywordmgr_php['confirm_delete'] = 'Are you sure you want to delete the keyword %s from the whole gallery?'; // js-alert
$lang_keywordmgr_php['change_keyword'] = 'Change keyword';
}

// ------------------------------------------------------------------------- //
// File langmgr.php
// ------------------------------------------------------------------------- //
if (defined('LANGMGR_PHP')) {
$lang_langmgr_php['title'] = 'Language manager';
$lang_langmgr_php['english_language_name'] = 'English';
$lang_langmgr_php['native_language_name'] = 'Native';
$lang_langmgr_php['custom_language_name'] = 'Custom';
$lang_langmgr_php['language_name'] = 'Language name';
$lang_langmgr_php['language_file'] = 'Language file';
$lang_langmgr_php['flag'] = 'Flag';
$lang_langmgr_php['file_available'] = 'Available';
$lang_langmgr_php['enabled'] = 'Enabled';
$lang_langmgr_php['complete'] = 'Complete';
$lang_langmgr_php['default'] = 'Default';
$lang_langmgr_php['missing'] = 'missing';
$lang_langmgr_php['broken'] = 'appears to be broken or inaccessible';
$lang_langmgr_php['exists_in_db_and_file'] = 'exists in database and as file';
$lang_langmgr_php['exists_as_file_only'] = 'exists as file only';
$lang_langmgr_php['pick_a_flag'] = 'Pick one';
$lang_langmgr_php['replace_x_with_y'] = 'Replace %s with %s';
$lang_langmgr_php['tanslator_information'] = 'Translator information';
$lang_langmgr_php['cpg_version'] = 'Coppermine version';
$lang_langmgr_php['hide_details'] = 'Hide details';
$lang_langmgr_php['show_details'] = 'Show details';
$lang_langmgr_php['loading'] = 'Loading';
$lang_langmgr_php['english_missing'] = 'The English language file is missing although it should never be removed. You need to restore it immediately.';
$lang_langmgr_php['enable_at_least_one'] = 'You need to enable at least one language for the gallery to work';
$lang_langmgr_php['enable_default'] = 'You chose a default language that is not enabled. Pick another default language or enable the language you selected as default!';
$lang_langmgr_php['available_default'] = 'You chose a default language that is not even available. Pick another default language!';
$lang_langmgr_php['version_does_not_match'] = 'The version of this file does not match your Coppermine version. Use with caution and test thoroughly!';
$lang_langmgr_php['no_version'] = 'No version information could be retrieved. It\'s very likely that this language file doesn\'t work at all or isn\'t an actual language file.';
$lang_langmgr_php['filesize'] = 'Filesize %s is implausible';
$lang_langmgr_php['content_missing'] = 'The file doesn\'t seem to contain the needed data, so it\'s probably not a valid language file.';
$lang_langmgr_php['status'] = 'Status';
$lang_langmgr_php['default_language'] = 'Default language set to %s';
}

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //
if (defined('LOGIN_PHP')) {
$lang_login_php['login'] = 'Login';
$lang_login_php['enter_login_pswd'] = 'Enter your username and password to login';
$lang_login_php['username'] = 'Username';
$lang_login_php['email'] = 'Email Address'; // cpg1.5
$lang_login_php['both'] = 'Username / Email Address'; // cpg1.5
$lang_login_php['password'] = 'Password';
$lang_login_php['remember_me'] = 'Remember me';
$lang_login_php['welcome'] = 'Welcome %s ...';
$lang_login_php['err_login'] = 'Login failed. Try again.';
$lang_login_php['err_already_logged_in'] = 'You are already logged in!';
$lang_login_php['forgot_password_link'] = 'I forgot my password';
$lang_login_php['cookie_warning'] = 'Warning your browser does not accept script\'s cookies';
$lang_login_php['send_activation_link'] = 'Missed activation link?';
$lang_login_php['force_login'] = 'You must login to view this page'; // cpg1.5
$lang_login_php['force_login_title'] = 'Login to continue'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) {
$lang_logout_php['logout'] = 'Logout';
$lang_logout_php['bye'] = 'Bye bye %s ...';
$lang_logout_php['err_not_logged_in'] = 'You are not logged in!'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File minibrowser.php
// ------------------------------------------------------------------------- //
if (defined('MINIBROWSER_PHP')) {
$lang_minibrowser_php['up'] = 'up one level';
$lang_minibrowser_php['current_path'] = 'current path';
$lang_minibrowser_php['select_directory'] = 'please select a directory';
$lang_minibrowser_php['click_to_close'] = 'Click image to close this window';
$lang_minibrowser_php['folder'] = 'Folder'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File mode.php
// ------------------------------------------------------------------------- //
if (defined('MODE_PHP')) {
$lang_mode_php[0] = 'Turning display of admin controls off...'; // cpg1.5
$lang_mode_php[1] = 'Turning display of admin controls on...'; // cpg1.5
$lang_mode_php['news_hide'] = 'Hiding news...'; // cpg1.5
$lang_mode_php['news_show'] = 'Showing news...'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //
if (defined('MODIFYALB_PHP')) {
$lang_modifyalb_php['upd_alb_n'] = 'Opdate album %s';
$lang_modifyalb_php['related_tasks'] = 'Relaterede opgaver'; // cpg1.5
$lang_modifyalb_php['choose_album'] = 'Vælg album'; // cpg1.5
$lang_modifyalb_php['general_settings'] = 'Generelle indstillinger';
$lang_modifyalb_php['alb_title'] = 'Album titel';
$lang_modifyalb_php['alb_cat'] = 'Album kategori';
$lang_modifyalb_php['alb_desc'] = 'Album beskrivelse';
$lang_modifyalb_php['alb_keyword'] = 'Album keyword';
$lang_modifyalb_php['alb_thumb'] = 'Album thumbnail';
$lang_modifyalb_php['alb_perm'] = 'Rettigheder for dette album';
$lang_modifyalb_php['can_view'] = 'Album kan ses af';
$lang_modifyalb_php['can_upload'] = 'Besøgende kan uploade filer';
$lang_modifyalb_php['can_post_comments'] = 'Besøgende kan indlægge kommentarer';
$lang_modifyalb_php['can_rate'] = 'Besøgende kan give karakter til filer';
$lang_modifyalb_php['user_gal'] = 'Bruger galleri';
$lang_modifyalb_php['my_gal'] = '* Mit Galleri *'; // cpg 1.5
$lang_modifyalb_php['no_cat'] = '* Ingen kategori *';
$lang_modifyalb_php['alb_empty'] = 'Album er tomt';
$lang_modifyalb_php['last_uploaded'] = 'Seneste upload';
$lang_modifyalb_php['public_alb'] = 'Alle (åbent album)';
$lang_modifyalb_php['me_only'] = 'Kun mig';
$lang_modifyalb_php['owner_only'] = 'Kun album ejer (%s)';
$lang_modifyalb_php['group_only'] = 'Medlemmer af \'%s\' gruppe';
$lang_modifyalb_php['err_no_alb_to_modify'] = 'Der er ingen album i databasen du kan ændre.';
$lang_modifyalb_php['update'] = 'Opdater album';
$lang_modifyalb_php['reset_album'] = 'Nulstil album';
$lang_modifyalb_php['reset_views'] = 'Nulstil visningstæller til &quot;0&quot; i %s';
$lang_modifyalb_php['reset_rating'] = 'Nulstil karakterer for alle filer i %s';
$lang_modifyalb_php['delete_comments'] = 'Slet alle kommentarer i %s';
$lang_modifyalb_php['delete_files'] = 'Slet %s(uden fortrydelse)%s alle filer i %s';
$lang_modifyalb_php['views'] = 'visninger';
$lang_modifyalb_php['votes'] = 'stemmer';
$lang_modifyalb_php['comments'] = 'kommentarer';
$lang_modifyalb_php['files'] = 'filer';
$lang_modifyalb_php['submit_reset'] = 'udfør ændringer';
$lang_modifyalb_php['reset_views_confirm'] = 'Jeg er sikker';
$lang_modifyalb_php['notice1'] = '(*) afhængig af %sgroups%s indstillinger'; //(do not translate %sgroups%s!)
$lang_modifyalb_php['can_moderate'] = 'Album kan modereres af'; // cpg 1.5
$lang_modifyalb_php['admins_only'] = 'Kun admins'; // cpg 1.5
$lang_modifyalb_php['alb_password'] = 'Album kodeord (Nyt kodeord)';
$lang_modifyalb_php['alb_password_hint'] = 'Album kodeord hint';
$lang_modifyalb_php['edit_files'] = 'Ret filer';
$lang_modifyalb_php['parent_category'] = 'Overliggende kategori';
$lang_modifyalb_php['thumbnail_view'] = 'Thumbnail visning';
$lang_modifyalb_php['random_image'] = 'Tilfældigt billede'; // cpg 1.5
$lang_modifyalb_php['password_protect'] = 'Beskyt dette album med kodeord (udfyld for ja)'; //cpg1.5
}

// ------------------------------------------------------------------------- //
// File phpinfo.php
// ------------------------------------------------------------------------- //
if (defined('PHPINFO_PHP')) {
$lang_phpinfo_php['php_info'] = 'PHP info';
$lang_phpinfo_php['explanation'] = 'This is the output generated by the PHP function <a href="http://www.php.net/phpinfo">phpinfo()</a>, displayed within Coppermine.';
$lang_phpinfo_php['no_link'] = 'Having others see your phpinfo can be a security risk, that\'s why this page is only visible when you\'re logged in as admin. You cannot post a link to this page for others, they will be denied access.';
}

// ------------------------------------------------------------------------- //
// File picmgr.php
// ------------------------------------------------------------------------- //
if (defined('PICMGR_PHP')) {
$lang_picmgr_php['pic_mgr'] = 'Picture Manager';
$lang_picmgr_php['confirm_modifs'] = 'Really perform the modifications?'; // cpg1.5 // js-alert
$lang_picmgr_php['no_change'] = 'You did not make any change!';
$lang_picmgr_php['no_album'] = '* No album *';
$lang_picmgr_php['explanation_header'] = 'The custom sort order you can specify on this page will only be taken into account if';
$lang_picmgr_php['explanation1'] = 'the admin has set the "Default sort order for files" in the config to "Position descending" or "Position ascending" (global setting for all users who haven\'t chosen another sort option individually)';
$lang_picmgr_php['explanation2'] = 'the user has chosen "Position descending" or "Position ascending" on the thumbnail page (per user setting)';
$lang_picmgr_php['change_album'] = 'If you change the album, your changes will be lost!'; // cpg1.5 // js-alert
$lang_picmgr_php['submit_reminder'] = 'Sorting changes are not saved until you click &quot;Apply changes&quot;.'; // cpg1.5
}


// ------------------------------------------------------------------------- //
// File pluginmgr.php
// ------------------------------------------------------------------------- //
if (defined('PLUGINMGR_PHP')){
$lang_pluginmgr_php['confirm_uninstall'] = 'Are you sure you want to UNINSTALL this plugin?';
$lang_pluginmgr_php['confirm_remove'] = 'NOTE: Plugin API is disabled. Do you want to MANUALLY REMOVE this plugin, ignoring any cleanup actions?'; // cpg1.5
$lang_pluginmgr_php['confirm_delete'] = 'Are you sure you want to DELETE this plugin?';
$lang_pluginmgr_php['pmgr'] = 'Plugin Manager';
$lang_pluginmgr_php['explanation'] = 'Install / uninstall / manage plugins using this page.'; // cpg1.5
$lang_pluginmgr_php['plugin_enabled'] = 'Plugin API enabled'; // cpg1.5
$lang_pluginmgr_php['name'] = 'Name';
$lang_pluginmgr_php['author'] = 'Author';
$lang_pluginmgr_php['desc'] = 'Description';
$lang_pluginmgr_php['vers'] = 'v';
$lang_pluginmgr_php['i_plugins'] = 'Installed Plugins';
$lang_pluginmgr_php['n_plugins'] = 'Plugins Not installed';
$lang_pluginmgr_php['none_installed'] = 'None Installed';
$lang_pluginmgr_php['operation'] = 'Operation';
$lang_pluginmgr_php['not_plugin_package'] = 'The file uploaded is not a plugin package.';
$lang_pluginmgr_php['copy_error'] = 'There was an error copying the package to the plugins folder.';
$lang_pluginmgr_php['upload'] = 'Upload';
$lang_pluginmgr_php['configure_plugin'] = 'Configure plugin';
$lang_pluginmgr_php['cleanup_plugin'] = 'Cleanup plugin';
$lang_pluginmgr_php['extra'] = 'Extra'; // cpg1.5
$lang_pluginmgr_php['install_info'] = 'Install information'; // cpg1.5
$lang_pluginmgr_php['plugin_disabled_note'] = 'Plugin API is disabled, so that operation is not allowed.'; // cpg1.5
$lang_pluginmgr_php['install'] = 'install'; // cpg1.5
$lang_pluginmgr_php['uninstall'] = 'uninstall'; // cpg1.5
$lang_pluginmgr_php['minimum_requirements_not_met'] = 'Minimum requirements not met'; // cpg1.5
$lang_pluginmgr_php['confirm_version'] = 'Could not determine the version requirements for this plugin. This is usually an indicator that the plugin was not designed for your version of Coppermine and might therefore crash your gallery. Continue anyway (not recommended)?'; // cpg1.5 // js-alert
}

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //
if (defined('RATEPIC_PHP')) {
$lang_rate_pic_php['already_rated'] = 'Beklager - Du har allerede givet denne fil karakter';
$lang_rate_pic_php['rate_ok'] = 'Din stemme er accepteret';
$lang_rate_pic_php['forbidden'] = 'Du kan ikke give dine egne filer karakter.';
}

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //
if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {
$lang_register_php['disclamer'] = <<< EOT
While the administrators of {SITE_NAME} will attempt to remove or edit any generally objectionable material as quickly as possible, it is impossible to review every post. Therefore you acknowledge that all posts made to this site express the views and opinions of the author and not the administrators or webmaster (except for posts by these people) and hence will not be held liable.<br />
<br />
You agree not to post any abusive, obscene, vulgar, slanderous, hateful, threatening, sexually-oriented or any other material that may violate any applicable laws. You agree that the webmaster, administrator and moderators of {SITE_NAME} have the right to remove or edit any content at any time should they see fit. As a user you agree to any information you have entered above being stored in a database. While this information will not be disclosed to any third party without your consent the webmaster and administrator cannot be held responsible for any hacking attempt that may lead to the data being compromised.<br />
<br />
This site uses cookies to store information on your local computer. These cookies serve only to improve your viewing pleasure. The email address is used only for confirming your registration details and password.<br />
<br />
By clicking 'I agree' below you agree to be bound by these conditions.
EOT;
$lang_register_php['page_title'] = 'User registration';
$lang_register_php['term_cond'] = 'Terms and conditions';
$lang_register_php['i_agree'] = 'I agree';
$lang_register_php['submit'] = 'Submit registration';
$lang_register_php['err_user_exists'] = 'The username you have entered already exists, please choose a different one';
$lang_register_php['err_global_pw'] = 'Invalid global registration password'; // cpg1.5
$lang_register_php['err_global_pass_same'] = 'Your password should be different from the global password'; // cpg1.5
$lang_register_php['err_duplicate_email'] = 'Another user has already registered with the email address you entered';
$lang_register_php['err_disclaimer'] = 'You need to agree to the disclaimer'; // cpg1.5
$lang_register_php['enter_info'] = 'Input registration information';
$lang_register_php['required_info'] = 'Required information';
$lang_register_php['optional_info'] = 'Optional information';
$lang_register_php['username'] = 'Username';
$lang_register_php['password'] = 'Password';
$lang_register_php['password_again'] = 'Re-enter password';
$lang_register_php['global_registration_pw'] = 'Global registration password'; // cpg1.5
$lang_register_php['email'] = 'Email';
$lang_register_php['location'] = 'Location';
$lang_register_php['interests'] = 'Interests';
$lang_register_php['website'] = 'Home page';
$lang_register_php['occupation'] = 'Occupation';
$lang_register_php['error'] = 'ERROR';
$lang_register_php['confirm_email_subject'] = '%s - Registration confirmation';
$lang_register_php['information'] = 'Information';
$lang_register_php['failed_sending_email'] = 'The registration confirmation email can\'t be send!';
$lang_register_php['thank_you'] = 'Thank you for registering.<br />An email with information on how to activate your account was sent to the email address you provided.';
$lang_register_php['acct_created'] = 'Your account has been created and you can now login with your username and password';
$lang_register_php['acct_active'] = 'Your account is now active and you can login with your username and password';
$lang_register_php['acct_already_act'] = 'Account is already active!';
$lang_register_php['acct_act_failed'] = 'This account can\'t be activated!';
$lang_register_php['err_unk_user'] = 'Selected user does not exist!';
$lang_register_php['x_s_profile'] = '%s\'s profile';
$lang_register_php['group'] = 'Group';
$lang_register_php['reg_date'] = 'Joined';
$lang_register_php['disk_usage'] = 'Disk usage';
$lang_register_php['change_pass'] = 'Change password';
$lang_register_php['current_pass'] = 'Current password';
$lang_register_php['new_pass'] = 'New password';
$lang_register_php['new_pass_again'] = 'New password again';
$lang_register_php['err_curr_pass'] = 'Current password is incorrect';
$lang_register_php['change_pass'] = 'Change my password';
$lang_register_php['update_success'] = 'Your profile was updated';
$lang_register_php['pass_chg_success'] = 'Your password was changed';
$lang_register_php['pass_chg_error'] = 'Your password was not changed';
$lang_register_php['notify_admin_email_subject'] = '%s - Registration notification';
$lang_register_php['last_uploads'] = 'Last uploaded file'; // cpg1.5
$lang_register_php['last_uploads_detail'] = 'Click to see all uploads by %s'; // cpg1.5
$lang_register_php['last_comments'] = 'Last comment'; // cpg1.5
$lang_register_php['you'] = 'you'; // cpg1.5
$lang_register_php['last_comments_detail'] = 'Click to see all comments made by %s'; // cpg1.5
$lang_register_php['notify_admin_email_body'] = 'A new user with the username "%s" has registered in your gallery';
$lang_register_php['pic_count'] = 'files uploaded';
$lang_register_php['notify_admin_request_email_subject'] = '%s - Registration request';
$lang_register_php['thank_you_admin_activation'] = 'Thank you.<br />Your request for account activation was sent to the admin. You will receive an email if approved.';
$lang_register_php['acct_active_admin_activation'] = 'The account is now active and an email has been sent to the user.';
$lang_register_php['notify_user_email_subject'] = '%s - Activation notification';
$lang_register_php['delete_my_account'] = 'Delete my user account'; // cpg1.5
$lang_register_php['warning_delete'] = 'Warning: deleting your account cannot be undone. The %sfiles you uploaded%s into public albums and %syour comments%s do not get deleted when deleting your user account! However, the files you uploaded into your personal gallery will be deleted.'; // cpg1.5 // The %s-placeholders mustn't be removed, they will later be replaced by the wrappers for the links
$lang_register_php['i_am_sure'] = 'I\'m sure that I want to delete my user account'; // cpg1.5
$lang_register_php['really_delete'] = 'Do you really want to delete your user account?'; // cpg1.5 // js-alert
$lang_register_php['edit_xs_profile'] = 'Edit the profile of %s'; // cpg1.5
$lang_register_php['edit_my_profile'] = 'Edit my profile'; // cpg1.5
$lang_register_php['none'] = 'none'; // cpg1.5
$lang_register_php['user_name_banned'] = 'The username you have chosen is not allowed/banned. Choose another user name'; // cpg1.5
$lang_register_php['email_address_banned'] = 'You are banned from this gallery. You are not allowed to re-register. Go away!'; // cpg1.5
$lang_register_php['email_warning1'] = 'The email address field mustn\'t be empty!'; // cpg1.5
$lang_register_php['email_warning2'] = 'The email address you entered is not valid. Review!'; // cpg1.5
$lang_register_php['username_warning1'] = 'The username field mustn\'t be empty!'; // cpg1.5
$lang_register_php['username_warning2'] = 'Username must be at least two characters long!'; // cpg1.5
$lang_register_php['password_warning1'] = 'The password must be at least two characters long!'; // cpg1.5
$lang_register_php['password_warning2'] = 'Username and password must be different!'; // cpg1.5
$lang_register_php['password_verification_warning1'] = 'The two passwords do not match, please enter them again!'; // cpg1.5
$lang_register_php['form_not_submit'] = 'The form hasn\'t been submit - there are errors that you need to correct first!'; // cpg1.5
$lang_register_php['banned'] = 'Banned!'; // cpg1.5

$lang_register_php['confirm_email'] = <<< EOT
Thank you for registering at {SITE_NAME}

In order to activate your account with username "{USER_NAME}", you need to click on the link below or copy and paste it in your web browser.
<a href="{ACT_LINK}">{ACT_LINK}</a>

Regards,

The management of {SITE_NAME}

EOT;

$lang_register_approve_email = <<< EOT
A new user with the username "{USER_NAME}" has registered in your gallery.
In order to activate the account, you need to click on the link below or copy and paste it in your web browser.

<a href="{ACT_LINK}">{ACT_LINK}</a>

EOT;

$lang_register_php['activated_email'] = <<< EOT
Your account has been approved and activated.

You can now log in at <a href="{SITE_LINK}">{SITE_LINK}</a> using the username "{USER_NAME}"


Regards,

The management of {SITE_NAME}

EOT;
}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //
if (defined('REVIEWCOM_PHP')) {
$lang_reviewcom_php['title'] = 'Review comments';
$lang_reviewcom_php['no_comment'] = 'There are no comments to review';
$lang_reviewcom_php['n_comm_del'] = '%s comment(s) deleted';
$lang_reviewcom_php['n_comm_disp'] = 'Number of comments to display';
$lang_reviewcom_php['see_prev'] = 'See previous';
$lang_reviewcom_php['see_next'] = 'See next';
$lang_reviewcom_php['del_comm'] = 'Delete selected comments';
$lang_reviewcom_php['user_name'] = 'Name';
$lang_reviewcom_php['date'] = 'Date';
$lang_reviewcom_php['comment'] = 'Comment';
$lang_reviewcom_php['file'] = 'File';
$lang_reviewcom_php['name_a'] = 'User name ascending';
$lang_reviewcom_php['name_d'] = 'User name descending';
$lang_reviewcom_php['date_a'] = 'Date ascending';
$lang_reviewcom_php['date_d'] = 'Date descending';
$lang_reviewcom_php['comment_a'] = 'Comment message ascending';
$lang_reviewcom_php['comment_d'] = 'Comment message descending';
$lang_reviewcom_php['file_a'] = 'File ascending';
$lang_reviewcom_php['file_d'] = 'File descending';
$lang_reviewcom_php['approval_a'] = 'Approval ascending'; // cpg1.5
$lang_reviewcom_php['approval_d'] = 'Approval descending'; // cpg1.5
$lang_reviewcom_php['ip_a'] = 'IP address ascending'; // cpg1.5
$lang_reviewcom_php['ip_d'] = 'IP address descending'; // cpg1.5
$lang_reviewcom_php['akismet_a'] = 'Akismet rating (valid comments at the bottom)'; // cpg1.5
$lang_reviewcom_php['akismet_d'] = 'Akismet rating (valid comments at the top)'; // cpg1.5
$lang_reviewcom_php['n_comm_appr'] = '%s approved comment(s)'; // cpg1.5
$lang_reviewcom_php['n_comm_unappr'] = '%s unapproved comment(s)'; // cpg1.5
$lang_reviewcom_php['configuration_changed'] = 'Approval config changed'; // cpg1.5
$lang_reviewcom_php['only_approval'] = 'only display comments needing approval'; // cpg1.5
$lang_reviewcom_php['approval'] = 'Approved'; // cpg1.5
$lang_reviewcom_php['save_changes'] = 'Save changes'; // cpg1.5
$lang_reviewcom_php['n_confirm_delete'] = 'Do you really want to delete the selected comment(s)?'; // cpg1.5
$lang_reviewcom_php['with_selected'] = 'With selected'; // cpg1.5
$lang_reviewcom_php['delete'] = 'delete'; // cpg1.5
$lang_reviewcom_php['approve'] = 'approve'; // cpg1.5
$lang_reviewcom_php['disapprove'] = 'mark unapproved'; // cpg1.5
$lang_reviewcom_php['do_nothing'] = 'do nothing'; // cpg1.5
$lang_reviewcom_php['comment_approved'] = 'Comment approved'; // cpg1.5
$lang_reviewcom_php['comment_unapproved'] = 'Comment marked unapproved'; // cpg1.5
$lang_reviewcom_php['ban_and_delete'] = 'Ban user and delete comment(s)'; // cpg1.5
$lang_reviewcom_php['akismet_status'] = 'Akismet said'; // cpg1.5
$lang_reviewcom_php['is_spam'] = 'is spam'; // cpg1.5
$lang_reviewcom_php['is_not_spam'] = 'is not spam'; // cpg1.5
$lang_reviewcom_php['akismet'] = 'Akismet'; // cpg1.5
$lang_reviewcom_php['akismet_count'] = 'Akismet has found %s spam messages for you until now'; // cpg1.5
$lang_reviewcom_php['akismet_test_result'] = 'Test result for your Akismet API key %s'; // cpg1.5
$lang_reviewcom_php['invalid'] = 'invalid'; // cpg1.5
$lang_reviewcom_php['missing_gallery_url'] = 'You need to specify a gallery URL in Coppermine\'s config'; // cpg1.5
$lang_reviewcom_php['unable_to_connect'] = 'Unable to connect to akismet.com'; // cpg1.5
$lang_reviewcom_php['not_found'] = 'The target URL was not found. Maybe the site structure of akismet.com has changed.'; // cpg1.5
$lang_reviewcom_php['unknown_error'] = 'Unknown error'; // cpg1.5
$lang_reviewcom_php['error_message'] = 'The error message returned was'; // cpg1.5
$lang_reviewcom_php['ip_address'] = 'IP address'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File sidebar.php
// ------------------------------------------------------------------------- //
if (defined('SIDEBAR_PHP')) {
$lang_sidebar_php['sidebar'] = 'Side Bar'; // cpg1.5
$lang_sidebar_php['install'] = 'install'; // cpg1.5
$lang_sidebar_php['install_explain'] = 'Among the many smart access methods to get to information quickly on the site, we provide sidebars for the most popular browsers used on different operating systems to access pages easily. Here you can find setup and uninstall information for the browsers supported.'; // cpg1.5
$lang_sidebar_php['os_browser_detect'] = 'Detecting your OS and browser'; // cpg1.5
$lang_sidebar_php['os_browser_detect_explain'] = 'The script is trying to detect your operating system and browser version - please wait a second. If auto-detection fails, you might want to %sunhide%s all possible sidebar install options manually.'; // cpg1.5
$lang_sidebar_php['mozilla'] = 'Mozilla, Firefox, Netscape 6+, Konqueror 3.2+'; // cpg1.5
$lang_sidebar_php['mozilla_explain'] = 'If you use Mozilla 0.9.4 or later, you can %sadd our sidebar to your set%s. You can uninstall this sidebar using the "Customize Sidebar" dialog in Mozilla.'; // cpg1.5
$lang_sidebar_php['ie_mac'] = 'Internet Explorer 5 and above on Mac OS'; // cpg1.5
$lang_sidebar_php['ie_mac_explain'] = 'If you use Internet Explorer 5 or above on MacOS, %sopen our sidebar page%s in a separate window. In that window, open the "Page Holder" tab on the left side of the window. Click "Add". If you want to keep it for future use, click on "Favorites" and select "Add to Page Holder Favorites".'; // cpg1.5
$lang_sidebar_php['ie_win'] = 'Internet Explorer 5 and above on Windows'; // cpg1.5
$lang_sidebar_php['ie_win_explain'] = 'If you use Internet Explorer 5 or above on Windows, you can add the Side Bar to your Links toolbar or you can add it to your favorites and clicking on it you can see our bar displayed in place of your usual search bar by right-clicking %shere%s and selecting "Add to favorites" from the context menu. This link does not install our bar as your default search bar, so no modification is made to your system.'; // cpg1.5
$lang_sidebar_php['ie7_win'] = 'Internet Explorer 7 on Windows XP/Vista'; // cpg1.5
$lang_sidebar_php['ie7_win_explain'] = 'If you use Internet Explorer 7 on Windows, you can add a navigation pop-up to your Links toolbar or you can add it to your favorites and clicking on it you can see our bar displayed as a pop-up window by right-clicking %shere%s and selecting "Add to favorites" from the context menu. In previous versions of IE, it was possible to add an actual side bar, but in IE7 you cannot accomplish this without applying complicated registry hacks. It is recommended to use another browser if you want to use an actual sidebar.'; // cpg1.5
$lang_sidebar_php['opera'] = 'Opera 6 and above'; // cpg1.5
$lang_sidebar_php['opera_explain'] = 'If you are using Opera, you can %sclick on this link to add our sidebar to your set%s. Tick "Show in panel" then. You can uninstall the sidebar by right clicking on it\'s tab and choosing "Delete" from the context menu.'; // cpg1.5
$lang_sidebar_php['additional_options'] = 'Additional options'; // cpg1.5
$lang_sidebar_php['additional_options_explain'] = 'If you have another browser than the one mentioned above, then click %shere%s to display all possible sidebar options.'; // cpg1.5
$lang_sidebar_php['cannot_add_sidebar'] = 'Sidebar cannot be added! Your browser does not support this method!'; // cpg1.5 // js-alert
$lang_sidebar_php['search'] = 'Search'; // cpg1.5
$lang_sidebar_php['reload'] = 'Reload'; // cpg1.5
}


// ------------------------------------------------------------------------- //
// File search.php
// ------------------------------------------------------------------------- //
if (defined('SEARCH_PHP')){
$lang_search_php['title'] = 'Search';
$lang_search_php['submit_search'] = 'search';
$lang_search_php['keyword_list_title'] = 'Keyword list';
$lang_search_php['keyword_msg'] = 'The above list is not all inclusive. It does not include words from file titles or descriptions. Try a full-text search.';
$lang_search_php['edit_keywords'] = 'Edit keywords';
$lang_search_php['search in'] = 'Search in:';
$lang_search_php['ip_address'] = 'IP address';
$lang_search_php['imgfields'] = 'Search files';
$lang_search_php['albcatfields'] = 'Search albums and categories';
$lang_search_php['age'] = 'Age';
$lang_search_php['newer_than'] = 'Newer than';
$lang_search_php['older_than'] = 'Older than';
$lang_search_php['days'] = 'days';
$lang_search_php['all_words'] = 'Match all words (AND)';
$lang_search_php['any_words'] = 'Match any words (OR)';
$lang_search_php['regex'] = 'Match regular expressions';
$lang_search_php['album_title'] = 'Album titles';
$lang_search_php['category_title'] = 'Category titles';
}

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //
if (defined('SEARCHNEW_PHP')) {
$lang_search_new_php['page_title'] = 'Search new files';
$lang_search_new_php['select_dir'] = 'Select directory';
$lang_search_new_php['select_dir_msg'] = 'This function allows you to add a batch of files that you have uploaded to your server by FTP.<br />Select the directory where you have uploaded your files.';
$lang_search_new_php['no_pic_to_add'] = 'There is no file to add';
$lang_search_new_php['need_one_album'] = 'You need at least one album to use this function';
$lang_search_new_php['warning'] = 'Warning';
$lang_search_new_php['change_perm'] = 'the script can\'t write in this directory, you need to change its mode to 755 or 777 before trying to add the files!';
$lang_search_new_php['target_album'] = '<strong>Put files of &quot;</strong>%s<strong>&quot; into </strong>%s';
$lang_search_new_php['folder'] = 'Folder';
$lang_search_new_php['image'] = 'file';
$lang_search_new_php['result'] = 'Result';
$lang_search_new_php['dir_ro'] = 'Not writable. ';
$lang_search_new_php['dir_cant_read'] = 'Not readable. ';
$lang_search_new_php['insert'] = 'Adding new files to the gallery';
$lang_search_new_php['list_new_pic'] = 'List of new files';
$lang_search_new_php['insert_selected'] = 'Insert selected files';
$lang_search_new_php['no_pic_found'] = 'No new file was found';
$lang_search_new_php['be_patient'] = 'Please be patient, the script needs time to add the files';
$lang_search_new_php['no_album'] = 'no album selected';
$lang_search_new_php['result_icon'] = 'click for details or to reload';
$lang_search_new_php['notes'] = <<< EOT
    <ul>
        <li>%s: the file was successfully added</li>
        <li>%s: the file is a duplicate and is already in the database</li>
        <li>%s: the file could not be added, check your configuration and the permission of directories where the files are located</li>
        <li>%s: you need to select an album first</li>
        <li>%s: the file is broken or inacessible</li>
        <li>%s: unknown file type</li>
        <li>%s: the file is actually a GIF image</li>
        <li>If the icons do not appear click on the broken file to see any error message produced by PHP</li>
        <li>If your browser timeouts, hit the reload button</li>
    </ul>
EOT;
// Translator note: Do not translate the %s placeholders - they are being replaced with icons
$lang_search_new_php['check_all'] = 'Check All';
$lang_search_new_php['uncheck_all'] = 'Uncheck All';
$lang_search_new_php['no_folders'] = 'There are no folders inside the "albums" folder yet. Make sure to create at least one custom folder within "albums" folder and ftp-upload your files there. You mustn\'t upload to the "userpics" nor "edit" folders, they are reserved for http uploads and internal purposes.';
$lang_search_new_php['browse_batch_add'] = 'Browsable interface'; // cpg1.5
$lang_search_new_php['display_thumbs_batch_add'] = 'Display preview thumbnails'; // cpg1.5
$lang_search_new_php['edit_pics'] = 'Edit files';
$lang_search_new_php['edit_properties'] = 'Album properties';
$lang_search_new_php['view_thumbs'] = 'Thumbnail view';
$lang_search_new_php['add_more_folder'] = 'Batch-add more files from the folder %s'; // cpg1.5
}

// ------------------------------------------------------------------------- //
//File send_activation.php
// ------------------------------------------------------------------------- //
if (defined('SEND_ACTIVATION_PHP')) {
$lang_send_activation_php['err_already_logged_in'] = 'You are already logged in!'; // cpg1.5
$lang_send_activation_php['activation_not_required'] = 'This website does not require activation by email'; // cpg1.5
$lang_send_activation_php['err_unk_user'] = 'Selected user does not exist!'; // cpg1.5
$lang_send_activation_php['resend_act_link'] = 'Resend activation link'; // cpg1.5
$lang_send_activation_php['enter_email'] = 'Enter your email address'; // cpg1.5
$lang_send_activation_php['submit'] = 'Go'; // cpg1.5
$lang_send_activation_php['failed_sending_email'] = 'Failed to send email with activation link'; // cpg1.5
$lang_send_activation_php['activation_email_sent'] = 'An email with activation link sent to %s. Please check your email to complete the process'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File stat_details.php
// ------------------------------------------------------------------------- //

if (defined('STAT_DETAILS_PHP')) {
$lang_stat_details_php['show_hide'] = 'show/hide this column';
$lang_stat_details_php['title'] = 'Statistic details'; // cpg1.5
$lang_stat_details_php['vote'] = 'Vote Details';
$lang_stat_details_php['hits'] = 'Hit Details';
$lang_stat_details_php['stats'] = 'Vote Statistics';
$lang_stat_details_php['users'] = 'User Statistics';
$lang_stat_details_php['sdate'] = 'Date';
$lang_stat_details_php['rating'] = 'Rating';
$lang_stat_details_php['search_phrase'] = 'Search phrase';
$lang_stat_details_php['referer'] = 'Referer';
$lang_stat_details_php['browser'] = 'Browser';
$lang_stat_details_php['os'] = 'Operating System';
$lang_stat_details_php['ip'] = 'IP';
$lang_stat_details_php['uid'] = 'User'; // cpg1.5
$lang_stat_details_php['sort_by_xxx'] = 'Sort by %s';
$lang_stat_details_php['ascending'] = 'ascending';
$lang_stat_details_php['descending'] = 'descending';
$lang_stat_details_php['internal'] = 'int';
$lang_stat_details_php['close'] = 'close';
$lang_stat_details_php['hide_internal_referers'] = 'hide internal referers';
$lang_stat_details_php['date_display'] = 'Date display';
$lang_stat_details_php['records_per_page'] = 'records per page';
$lang_stat_details_php['submit'] = 'submit / refresh';
$lang_stat_details_php['overall_stats'] = 'Overall Statistics'; // cpg1.5
$lang_stat_details_php['stats_by_os'] = 'Stats by operating systems'; // cpg1.5
$lang_stat_details_php['number_of_hits'] = 'Number of hits'; // cpg1.5
$lang_stat_details_php['total'] = 'Total'; // cpg1.5
$lang_stat_details_php['stats_by_browser'] = 'Stats by browser'; // cpg1.5
$lang_stat_details_php['overall_stats_config'] = 'Overall stats configuration'; // cpg1.5
$lang_stat_details_php['hit_details'] = 'Keep detailed hit statistics'; // cpg1.5
$lang_stat_details_php['hit_details_explanation'] = 'Keep detailed hit statistics'; // cpg1.5
$lang_stat_details_php['vote_details'] = 'Keep detailed voting statistics'; // cpg1.5
$lang_stat_details_php['vote_details_explanation'] = 'Keep detailed voting statistics'; // cpg1.5
$lang_stat_details_php['empty_hits_table'] = 'Empty all hit stats'; // cpg1.5
$lang_stat_details_php['empty_hits_table_confirm'] = 'Are you absolutely sure that you want to delete ALL hit stat records for your ENTIRE gallery? This cannot be undone!'; // cpg1.5 // js-alert
$lang_stat_details_php['empty_votes_table'] = 'Empty all voting stats'; // cpg1.5
$lang_stat_details_php['empty_votes_table_confirm'] = 'Are you absolutely sure that you want to delete ALL voting records for your ENTIRE gallery? This cannot be undone!'; // cpg1.5 // js-alert
$lang_stat_details_php['submit'] = 'Submit'; // cpg1.5
$lang_stat_details_php['upd_success'] = 'Coppermine configuration was updated'; // cpg1.5
$lang_stat_details_php['votes'] = 'votes'; // cpg1.5
$lang_stat_details_php['reset_votes_individual'] = 'Reset selected vote(s)'; // cpg1.5
$lang_stat_details_php['reset_votes_individual_confirm'] = 'Are you sure that you want to delete the selected votes? This cannot be undone!'; // cpg1.5
$lang_stat_details_php['back_to_intermediate'] = 'Back to intermediate file view'; // cpg1.5
$lang_stat_details_php['records_on_page'] = '%s records on %s page(s)'; // cpg1.5
$lang_stat_details_php['guest'] = 'Guest'; // cpg1.5
$lang_stat_details_php['not_implemented'] = 'not implemented yet'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) {
$lang_upload_php['title'] = 'Upload file';
$lang_upload_php['restrictions'] = 'Restrictions'; // cpg1.5
$lang_upload_php['choose_method'] = 'Choose upload method'; // cpg1.5
$lang_upload_php['upload_swf'] = 'Multiple files - Flash-driven (recommended)'; // cpg1.5
$lang_upload_php['upload_single'] = 'simple - one file at a time'; // cpg1.5
$lang_upload_php['up_instr_1'] = 'Select an album from the album dropdown list';
$lang_upload_php['up_instr_2'] = 'Click the "Browse" button below and navigate to the file you want to upload. You can select multiple files in a single go using Ctrl+Click.';
$lang_upload_php['up_instr_3'] = 'Select more files to upload by repeating step 2';
$lang_upload_php['up_instr_4'] = 'Click the "Continue" button after all your files have completed uploading (the button will only appear when you have uploaded at least one file).';
$lang_upload_php['up_instr_5'] = 'You\'ll be sent to a screen where you can enter details about the uploaded files. After filling in, submit that form using the "Apply changes" button at the bottom of that form.';
$lang_upload_php['restriction_zip'] = 'ZIP files uploaded will remain compressed, they will not be extracted on the server.';
$lang_upload_php['restriction_filesize'] = 'The size of files uploaded from your client to the server must not exceed %s each.';
$lang_upload_php['reg_instr_1'] = 'Invalid action for form creation.';
$lang_upload_php['no_name'] = 'Filename unavailable'; // cpg 1.5
$lang_upload_php['no_tmp_name'] = 'Unable to upload'; // cpg 1.5
$lang_upload_php['no_post'] = 'File not uploaded by POST.';
$lang_upload_php['forb_ext'] = 'Forbidden file extension.';
$lang_upload_php['exc_php_ini'] = 'Exceeded filesize allowed in php.ini.';
$lang_upload_php['exc_file_size'] = 'Exceeded filesize permitted by CPG.';
$lang_upload_php['partial_upload'] = 'Only a partial upload.';
$lang_upload_php['no_upload'] = 'No upload occurred.';
$lang_upload_php['unknown_code'] = 'Unknown PHP upload error code.';
$lang_upload_php['impossible'] = 'Impossible to move.';
$lang_upload_php['not_image'] = 'Not an image/corrupt';
$lang_upload_php['not_GD'] = 'Not a GD extension.';
$lang_upload_php['pixel_allowance'] = 'The height and/or width of the uploaded picture is more than that allowed by the gallery config.';
$lang_upload_php['failure'] = 'Upload failure';
$lang_upload_php['no_place'] = 'The previous file could not be placed.';
$lang_upload_php['max_fsize'] = 'Maximum allowed file size is %s';
$lang_upload_php['picture'] = 'File';
$lang_upload_php['pic_title'] = 'File title';
$lang_upload_php['description'] = 'File description';
$lang_upload_php['keywords_sel'] = 'Select a keyword';
$lang_upload_php['err_no_alb_uploadables'] = 'Sorry there is no album where you are allowed to upload files';
$lang_upload_php['close'] = 'Close';
$lang_upload_php['no_keywords'] = 'Sorry, no keywords available!';
$lang_upload_php['regenerate_dictionary'] = 'Regenerate dictionary';
$lang_upload_php['allowed_types'] = 'You are allowed to upload files with the following extensions:'; // cpg1.5
$lang_upload_php['allowed_img_types'] = 'Image extensions: %s'; // cpg1.5
$lang_upload_php['allowed_mov_types'] = 'Video extensions: %s'; // cpg1.5
$lang_upload_php['allowed_doc_types'] = 'Document extensions: %s'; // cpg1.5
$lang_upload_php['allowed_snd_types'] = 'Audio extensions: %s'; // cpg1.5
$lang_upload_php['please_wait'] = 'Please wait while the script is uploading - this might take a while'; // cpg1.5
$lang_upload_php['alternative_upload'] = 'Alternative upload method'; // cpg1.5
$lang_upload_php['xp_publish_promote'] = 'If you are running Windows XP/Vista, you can use the Windows XP Uploading Wizard as well to upload files, providing an easier user interface directly on the client.'; // cpg1.5
$lang_upload_php['err_js_disabled'] = 'Flash upload interface could not load. You must have JavaScript enabled to enjoy the flash upload interface.'; // cpg1.5
$lang_upload_php['err_flash_disabled'] = 'Upload interface is taking a long time to load or the load has failed. Please make sure that the Flash Plugin is enabled and that a working version of the Flash Player is installed.'; // cpg1.5
$lang_upload_php['err_alternate_method'] = 'Alternately you can use the <a href="upload.php?single=1">single</a> file upload interface.'; // cpg1.5
$lang_upload_php['err_flash_version'] = 'Upload interface could not load. You may need to install or upgrade Flash Player. Visit the <a href="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash">Adobe website</a> to get the Flash Player.'; // cpg1.5
$lang_upload_php['flash_loading'] = 'Upload interface is loading. Please wait a moment...'; // cpg1.5

$lang_upload_swf_php['browse'] = 'Browse...'; //cpg1.5
$lang_upload_swf_php['cancel_all'] = 'Cancel all uploads'; //cpg1.5
$lang_upload_swf_php['upload_queue'] = 'Upload Queue'; //cpg1.5
$lang_upload_swf_php['files_uploaded'] = 'files uploaded'; //cpg1.5
$lang_upload_swf_php['all_files'] = 'All Files'; //cpg1.5
$lang_upload_swf_php['status_pending'] = 'Pending...'; //cpg1.5
$lang_upload_swf_php['status_uploading'] = 'Uploading...'; //cpg1.5
$lang_upload_swf_php['status_complete'] = 'Complete.'; //cpg1.5
$lang_upload_swf_php['status_cancelled'] = 'Cancelled.'; //cpg1.5
$lang_upload_swf_php['status_stopped'] = 'Stopped.'; //cpg1.5
$lang_upload_swf_php['status_failed'] = 'Upload Failed.'; //cpg1.5
$lang_upload_swf_php['status_too_big'] = 'File is too big.'; //cpg1.5
$lang_upload_swf_php['status_zero_byte'] = 'Cannot upload Zero Byte files.'; //cpg1.5
$lang_upload_swf_php['status_invalid_type'] = 'Invalid File Type.'; //cpg1.5
$lang_upload_swf_php['status_unhandled'] = 'Unhandled Error'; //cpg1.5
$lang_upload_swf_php['status_upload_error'] = 'Upload Error: '; //cpg1.5
$lang_upload_swf_php['status_server_error'] = 'Server (IO) Error'; //cpg1.5
$lang_upload_swf_php['status_security_error'] = 'Security Error'; //cpg1.5
$lang_upload_swf_php['status_upload_limit'] = 'Upload limit exceeded.'; //cpg1.5
$lang_upload_swf_php['status_validation_failed'] = 'Failed Validation. Upload skipped.'; //cpg1.5
$lang_upload_swf_php['queue_limit'] = 'You have attempted to queue too many files.'; //cpg1.5
$lang_upload_swf_php['upload_limit_1'] = 'You have reached the upload limit.'; //cpg1.5
$lang_upload_swf_php['upload_limit_2'] = 'You may select up to %s file(s)'; //cpg1.5
}
// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //
if (defined('USERMGR_PHP')) {
$lang_usermgr_php['memberlist'] = 'Medlemsliste';
$lang_usermgr_php['user_manager'] = 'Bruger administrator';
$lang_usermgr_php['title'] = 'Administrerer bruger';
$lang_usermgr_php['name_a'] = 'Navn stigende';
$lang_usermgr_php['name_d'] = 'Navn faldende';
$lang_usermgr_php['group_a'] = 'Gruppe stigende';
$lang_usermgr_php['group_d'] = 'Gruppe faldende';
$lang_usermgr_php['reg_a'] = 'Reg dato stigende';
$lang_usermgr_php['reg_d'] = 'Reg dato faldende';
$lang_usermgr_php['pic_a'] = 'Fil tæller stigende';
$lang_usermgr_php['pic_d'] = 'Fil tæller faldende';
$lang_usermgr_php['disku_a'] = 'Disk forbrug stigende';
$lang_usermgr_php['disku_d'] = 'Disk forbrug faldende';
$lang_usermgr_php['lv_a'] = 'Sidste besøg stigende';
$lang_usermgr_php['lv_d'] = 'Sidste besøg faldende';
$lang_usermgr_php['sort_by'] = 'Sortere bruger efter';
$lang_usermgr_php['err_no_users'] = 'Bruger tabel er tom!';
$lang_usermgr_php['err_edit_self'] = 'Du kan ikke redigere din egen profil, brug \'Min profil\' link til det';
$lang_usermgr_php['with_selected'] = 'Det valgte:';
$lang_usermgr_php['delete_files_no'] = 'Behold offentlige filer (men anonymisere)';
$lang_usermgr_php['delete_files_yes'] = 'slet også offentlige filer';
$lang_usermgr_php['delete_comments_no'] = 'Behold kommentarer (men anonymisere)';
$lang_usermgr_php['delete_comments_yes'] = 'slet også kommentarer';
$lang_usermgr_php['activate'] = 'Aktivere';
$lang_usermgr_php['deactivate'] = 'Deaktivere';
$lang_usermgr_php['reset_password'] = 'Nulstil kodeord';
$lang_usermgr_php['change_primary_membergroup'] = 'Ændre primær medlemsgruppe';
$lang_usermgr_php['add_secondary_membergroup'] = 'Tilføj sekundær medlemsgruppe';
$lang_usermgr_php['name'] = 'Brugernavn';
$lang_usermgr_php['group'] = 'Gruppe';
$lang_usermgr_php['inactive'] = 'Inaktiv';
$lang_usermgr_php['operations'] = 'Handlinger';
$lang_usermgr_php['pictures'] = 'Filer';
$lang_usermgr_php['disk_space_used'] = 'Plads brugt';
$lang_usermgr_php['disk_space_quota'] = 'Kvota'; // cpg1.5
$lang_usermgr_php['registered_on'] = 'Registreret den';
$lang_usermgr_php['last_visit'] = 'sidste besøg';
$lang_usermgr_php['u_user_on_p_pages'] = '%d bruger på %d side(r)';
$lang_usermgr_php['confirm_del'] = 'Er du sikker på at du vil SLETTE denne bruger?\\nAlle hans/hendes filer og albums vil blive slettet.'; // js-alert
$lang_usermgr_php['mail'] = 'POST';
$lang_usermgr_php['err_unknown_user'] = 'Valgte bruger findes ikke!';
$lang_usermgr_php['modify_user'] = 'Ændre bruger';
$lang_usermgr_php['notes'] = 'Noter';
$lang_usermgr_php['note_list'] = 'Hvis du ikke vil ændre det nuværende kodeord, lad feltet "kodeord" forblive blank';
$lang_usermgr_php['password'] = 'Kodeord';
$lang_usermgr_php['user_active'] = 'Bruger er aktiv';
$lang_usermgr_php['user_group'] = 'Bruger gruppe';
$lang_usermgr_php['user_email'] = 'Bruger email';
$lang_usermgr_php['user_web_site'] = 'Bruger web side';
$lang_usermgr_php['create_new_user'] = 'Oprette nu bruger';
$lang_usermgr_php['user_location'] = 'Bruger placering';
$lang_usermgr_php['user_interests'] = 'Brugers interesser';
$lang_usermgr_php['user_occupation'] = 'Brugers beskæftigelse';
$lang_usermgr_php['user_profile1'] = '$user_profile1';
$lang_usermgr_php['user_profile2'] = '$user_profile2';
$lang_usermgr_php['user_profile3'] = '$user_profile3';
$lang_usermgr_php['user_profile4'] = '$user_profile4';
$lang_usermgr_php['user_profile5'] = '$user_profile5';
$lang_usermgr_php['user_profile6'] = '$user_profile6';
$lang_usermgr_php['latest_upload'] = 'Seneste uploads';
$lang_usermgr_php['no_latest_upload'] = 'Har ikke uploaded nogle filer'; // cpg1.5
$lang_usermgr_php['last_comments'] = 'Senest kommentar'; // cpg1.5
$lang_usermgr_php['no_last_comments'] = 'Har ikke lavet nogle kommentarer'; // cpg1.5
$lang_usermgr_php['comments'] = 'Kommentarer'; // cpg1.5
$lang_usermgr_php['never'] = 'aldrig';
$lang_usermgr_php['search'] = 'Bruger søgning';
$lang_usermgr_php['submit'] = 'Send';
$lang_usermgr_php['search_submit'] = 'OK!';
$lang_usermgr_php['search_result'] = 'Søge resultat for: ';
$lang_usermgr_php['alert_no_selection'] = 'Du skal vælge mindst en bruger først!'; // js-alert
$lang_usermgr_php['select_group'] = 'Vælg gruppe';
$lang_usermgr_php['groups_alb_access'] = 'Album rettigheder per gruppe';
$lang_usermgr_php['category'] = 'Kategori';
$lang_usermgr_php['modify'] = 'Ændre?';
$lang_usermgr_php['group_no_access'] = 'Denne gruppe af ingen speciel adgang';
$lang_usermgr_php['notice'] = 'Notits';
$lang_usermgr_php['group_can_access'] = 'Album(s) der kun "%s" har adgang';
$lang_usermgr_php['send_login_data'] = 'Send login data til denne bruger (Kodeord vil blive sendt via email)'; // cpg1.5
$lang_usermgr_php['send_login_email_subject'] = 'Din nye konto information'; // cpg1.5
$lang_usermgr_php['failed_sending_email'] = 'Login data email kan ikke sendes!'; // cpg1.5
$lang_usermgr_php['view_profile'] = 'Vis profil'; // cpg1.5
$lang_usermgr_php['edit_profile'] = 'Redigere profil'; // cpg1.5
$lang_usermgr_php['ban_user'] = 'Frys bruger'; // cpg1.5
$lang_usermgr_php['user_is_banned'] = 'Bruger er frosset'; // cpg1.5
$lang_usermgr_php['status'] = 'Status'; // cpg1.5
$lang_usermgr_php['status_active'] = 'aktiv'; // cpg1.5
$lang_usermgr_php['status_inactive'] = 'ikke aktiv'; // cpg1.5
$lang_usermgr_php['total'] = 'Total'; // cpg1.5
$lang_usermgr_php['send_login_data_email'] = <<< EOT
En ny konto er blevet oprettet på {SITE_NAME}.

Du kan nu logge in her <a href="{SITE_LINK}">{SITE_LINK}</a> ved og bruge dit brugernavn "{USER_NAME}" og kodeord "{USER_PASS}"


Mvh,

Adminitrator af {SITE_NAME}

EOT;
}

// ------------------------------------------------------------------------- //
// File update.php
// ------------------------------------------------------------------------- //
if (defined('UPDATE_PHP')) {
$lang_update_php['title'] = 'Opdatere'; // cpg1.5
$lang_update_php['welcome_updater'] = 'Velkommen til Copppermine opdatering'; // cpg1.5
$lang_update_php['could_not_authenticate'] = 'Kunne ikke Autorisere dig'; // cpg1.5
$lang_update_php['provide_admin_account'] = 'Venligst oplys din Coppermine admin konto eller din MySQL konto data'; // cpg1.5
$lang_update_php['try_again'] = 'Prøv igen'; // cpg1.5
$lang_update_php['mysql_connect_error'] = 'Kunne ikke oprette en MySQL forbindelse'; // cpg1.5
$lang_update_php['mysql_database_error'] = 'MySQL kunne ikke finde en database kaldet %s'; // cpg1.5
$lang_update_php['mysql_said'] = 'MySQL sagde'; // cpg1.5
$lang_update_php['check_config_file'] = 'Check venligst MySQL detaljerne i %s'; // cpg1.5
$lang_update_php['performing_database_updates'] = 'Udfører Database opdateringer'; // cpg1.5
$lang_update_php['performing_file_updates'] = 'Udfører fil opdateringer'; // cpg1.5
$lang_update_php['already_done'] = 'Allerede udført'; // cpg1.5
$lang_update_php['password_encryption'] = 'Kryptering af kodeord'; // cpg1.5
$lang_update_php['alb_password_encryption'] = 'Kryptering af album kodeord'; // cpg1.5
$lang_update_php['category_tree'] = 'Katagori træ'; // cpg1.5
$lang_update_php['authentication_needed'] = 'Godkendelse nødvendig'; // cpg1.5
$lang_update_php['username'] = 'Brugernavn'; // cpg1.5
$lang_update_php['password'] = 'Kodeord'; // cpg1.5
$lang_update_php['update_completed'] = 'Opdatering udført'; // cpg1.5
$lang_update_php['check_versions'] = 'Det anbefales %scheck your file versions%s Hvis du lige har opgraderet fra en ældre version af Coppermine'; // cpg1.5 // Leave the %s untouched when translating - it wraps the link
$lang_update_php['start_page'] = 'Hvis du ikke (eller du ikke ønsker at checke), kan du gå til %syour gallery\'s start page%s'; // cpg1.5 // Leave the %s untouched when translating - it wraps the link
$lang_update_php['errors_encountered'] = 'Følgende fejl blev opdaget og skal rettes først'; // cpg1.5
$lang_update_php['delete_file'] = 'Slet %s'; // cpg1.5
$lang_update_php['could_not_delete'] = 'Kunne ikke slette pga manglende rettigheder. Slet filerne manuelt!'; // cpg1.5
$lang_update_php['rename_file'] = 'Rename %s to %s'; // cpg1.5
$lang_update_php['could_not_rename'] = 'Kunne ikke omdøbe pga manglende rettigheder. Omdøb filerne manuelt!'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //
if (defined('UTIL_PHP')) {
$lang_util_php['title'] = 'Admin tools'; // cpg1.5
$lang_util_php['file'] = 'Fil';
$lang_util_php['problem'] = 'Problem';
$lang_util_php['status'] = 'Status';
$lang_util_php['title_set_to'] = 'Titel sat til';
$lang_util_php['submit_form'] = 'Gem';
$lang_util_php['titles_updated'] = '%s Titel opdateeret.'; // cpg1.5
$lang_util_php['updated_successfully'] = 'opdateret korrekt'; // cpg1.5
$lang_util_php['error_create'] = 'FEJL oprettelse';
$lang_util_php['continue'] = 'behandler flere filer'; // cpg1.5
$lang_util_php['main_success'] = 'Filen %s blev korrekt brugt som primær fil';
$lang_util_php['error_rename'] = 'Fejl omdøbning %s til %s';
$lang_util_php['error_not_found'] = 'Filen %s blev ikke fundet';
$lang_util_php['back'] = 'tilbage til Admin værktøj start'; // cpg1.5
$lang_util_php['thumbs_wait'] = 'Opdaterere minibilleder og /eller ændre størrelsen af billederne, vent venligst...';
$lang_util_php['thumbs_continue_wait'] = 'Fortsætter med at opdatere minibilleder og/eller ændre størrelsen af billederne...';
$lang_util_php['titles_wait'] = 'Opdatere titler, vent venligst...';
$lang_util_php['delete_wait'] = 'Sletter titler, vent venligst...';
$lang_util_php['replace_wait'] = 'Sletter originalerne og erstatter dem med med ændret billeder, vent venligst..';
$lang_util_php['update'] = 'Opdatere thumbs og/eller ændret billeder';
$lang_util_php['update_what'] = 'Hvad skal opdateres';
$lang_util_php['update_thumb'] = 'Kun minibilleder';
$lang_util_php['update_pic'] = 'Kun ændret billeder';
$lang_util_php['update_both'] = 'Både minibilleder og ændret billeder';
$lang_util_php['update_number'] = 'Antal af udført billeder per klink';
$lang_util_php['update_option'] = '(Prøv og sætte denne mulighed lavere hvis der er timeout problemer)';
$lang_util_php['update_missing'] = 'Kun opdatere manglende filer'; // cpg1.5
$lang_util_php['filename_title'] = 'Filnavn &rArr; Fil titel';
$lang_util_php['filename_how'] = 'Hvordan skal filnavn ændres';
$lang_util_php['filename_remove'] = 'Fjern endelsen (.jpg eller andet) og erstat _ (underscores) with mellemrum'; // cpg1.5
$lang_util_php['filename_euro'] = 'Ændre 2003_11_23_13_20_20.jpg til 23/11/2003 13:20';
$lang_util_php['filename_us'] = 'Ændre 2003_11_23_13_20_20.jpg til 11/23/2003 13:20';
$lang_util_php['filename_time'] = 'Ændre 2003_11_23_13_20_20.jpg til 13:20';
$lang_util_php['notitle'] = 'Gælder kun for filer med blanke navne'; // cpg1.5
$lang_util_php['delete_title'] = 'Slet fil navne';
$lang_util_php['delete_title_explanation'] = 'Dette vil slette alle filnavne i angivet albumfolder.';
$lang_util_php['delete_original'] = 'Slet original størrelse billeder';
$lang_util_php['delete_original_explanation'] = 'Dette vil fjene fuld størrelse billeder.';
$lang_util_php['delete_intermediate'] = 'Sletter Mellemstore billeder';
$lang_util_php['delete_intermediate_explanation1'] = 'Dette vil slette Mellemstore (normal) billeder.'; // cpg1.5
$lang_util_php['delete_intermediate_explanation2'] = 'Brug dette til at frigive diskplads hvis du har deaktiveret \'Opret Mellemstore billeder\' i config after tilføjet billeder.'; // cpg1.5
$lang_util_php['delete_intermediate_check'] = 'Config option \'Opret Mellemstore billeder\' er lige nu %s.'; // cpg1.5
$lang_util_php['no_image'] = '%s er droppet da det ikke er et billed.'; // cpg1.5
$lang_util_php['enabled'] = 'aktiveret'; // cpg1.5
$lang_util_php['disabled'] = 'deaktiveret'; // cpg1.5
$lang_util_php['delete_replace'] = 'Sletter det original billed og erstater dem med en ændret version';
$lang_util_php['titles_deleted'] = 'Alle titler i valgte album slettet';
$lang_util_php['deleting_intermediates'] = 'Sletter Mellemstore billeder, vent venligst...';
$lang_util_php['searching_orphans'] = 'Søger efter  forældreløse billeder, vent venligst...';
$lang_util_php['delete_orphans'] = 'Sletter kommentarer på manglende filer';
$lang_util_php['delete_orphans_explanation'] = 'Dette vil finde og lade dig slette alle kommentare som knytter sig til filer som ikke længere findes i galleriet.<br />Tjekker alle albums.';
$lang_util_php['update_full_normal_thumb'] = 'Alt: fuld-størrelse, ændret og minibilleder'; // cpg1.5
$lang_util_php['update_full_normal'] = 'Både ændret og fuld størrelse (hvis en original version er findes)'; // cpg1.5
$lang_util_php['update_full'] = 'Kun fuld størrelse (hvis en original kopi findes)'; // cpg1.5
$lang_util_php['delete_back'] = 'Slet original billed backup af vandmærke billeder'; // cpg1.5
$lang_util_php['delete_back_explanation'] = 'Dette vil slette backup filen. Du vil spare nogen diskplads men kan ikke længere ændre vandmærket!!! Derefter er vandmærket permanent.'; // cpg1.5
$lang_util_php['finished'] = '<br /> Færdig med opdateringen af minibilleder/billederne!<br />'; // cpg1.5
$lang_util_php['autorefresh'] = 'Auto opdatering (ingen grund til og klikke næste mere)'; // cpg1.5
$lang_util_php['refresh_db'] = 'Genindlæs fil dimensioner og størrelse.';
$lang_util_php['refresh_db_explanation'] = 'Dette vil genindlæse fil størrelse og dimensioner. Brug denne hvis forbruget er forkert eller filerne er ændret manuelt.';
$lang_util_php['reset_views'] = 'Nulstil vist tæller';
$lang_util_php['reset_views_explanation'] = 'Sæt alle fil visninger tæller til nul i valgte album.';
$lang_util_php['reset_success'] = 'Nulstil udført'; // cpg1.5
$lang_util_php['orphan_comment'] = 'Forældreløs kommentarer fundet';
$lang_util_php['delete_all'] = 'Slet alle';
$lang_util_php['delete_all_orphans'] = 'Slette alle forældreløse?';
$lang_util_php['comment'] = 'Kommentar: ';
$lang_util_php['nonexist'] = 'Vedhæftet til ikke-eksisterende fil # ';
$lang_util_php['delete_old'] = 'Slet filer der er ældre end et bestemt antal dage'; // cpg1.5
$lang_util_php['delete_old_explanation'] = 'Dette vil slette filer der er ældre end det antal dage du har angivet (Fuld størrelse, Mellemstørrelse, ministørrelse). Brug denne feature til og frigive diskplads.'; // cpg1.5
$lang_util_php['delete_old_warning'] = 'Advarsel: Filerne du har angivet bliver slettet permanent uden yderligere advarsel!'; // cpg1.5
$lang_util_php['deleting_old'] = 'Sletter gamle billeder, vent venligst...'; // cpg1.5
$lang_util_php['older_than'] = 'Sletter billeder ældre end %s dage'; // cpg1.5
$lang_util_php['del_orig'] = 'Den originale fil %s er hermed slettet'; // cpg1.5
$lang_util_php['del_intermediate'] = 'Mellemstørrelse billeder %s er hermed slettet'; // cpg1.5
$lang_util_php['del_thumb'] = 'Ministørrelse billederne %s er hermed slettet'; // cpg1.5
$lang_util_php['del_error'] = 'fejl under sletning %s!'; // cpg1.5
$lang_util_php['affected_records'] = '%s påvirket records.'; // cpg1.5
$lang_util_php['all_albums'] = 'Alle Albums'; // cpg1.5
$lang_util_php['update_result'] = 'Opdaterings resultat'; // cpg1.5
$lang_util_php['incorrect_filesize'] = 'Total filstørrelse er forkert'; // cpg1.5
$lang_util_php['database'] = 'Database: '; // cpg1.5
$lang_util_php['bytes'] = ' bytes'; // cpg1.5
$lang_util_php['actual'] = 'Aktuel: '; // cpg1.5
$lang_util_php['updated'] = 'Opdateret'; // cpg1.5
$lang_util_php['filesize_error'] = 'Kunne ikke finde filstørrelsen (Måske en indvalid fil), Droppes....'; // cpg1.5
$lang_util_php['skipped'] = 'Droppet'; // cpg1.5
$lang_util_php['incorrect_dimension'] = 'Dimensionerne er forkerte'; // cpg1.5
$lang_util_php['dimension_error'] = 'Kunne ikke læse dimensions info, droppes...'; // cpg1.5
$lang_util_php['cannot_fix'] = 'Kan ikke rettes'; // cpg1.5
$lang_util_php['fullpic_error'] = 'Fil %s findes ikke!'; // cpg1.5
$lang_util_php['no_prob_detect'] = 'Ingen problemer fundet'; // cpg1.5
$lang_util_php['no_prob_found'] = 'Ingen problemer fundet.'; // cpg1.5
$lang_util_php['keyword_convert'] = 'Konvertere keyword separator'; // cpg1.5
$lang_util_php['keyword_from_to'] = 'Konvertere keyword separator fra %s til %s'; // cpg1.5
$lang_util_php['keyword_set'] = 'Sæt galleri keyword separator til ny værdi'; // cpg1.5
$lang_util_php['keyword_replace_before'] = 'Før konvertering, udskift %s med %s'; // cpg1.5
$lang_util_php['keyword_replace_after'] = 'Efter konvertering, udskift %s med %s'; // cpg1.5
$lang_util_php['keyword_replace_values'] = array('_'=>'underscore', '-'=>'hyphen', '~'=>'tilde'); // cpg1.5
$lang_util_php['keyword_explanation'] = 'Dette vil konvertere keyword separator for alle dine filer fra en værdi til en anden. Se hjælp dokumentationen for nærmere detaljer.'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File versioncheck.php
// ------------------------------------------------------------------------- //
if (defined('VERSIONCHECK_PHP')) {
$lang_versioncheck_php['title'] = 'Versioncheck';
$lang_versioncheck_php['versioncheck_output'] = 'Versioncheck output';
$lang_versioncheck_php['file'] = 'fil';
$lang_versioncheck_php['folder'] = 'folder';
$lang_versioncheck_php['outdated'] = 'ældre end %s';
$lang_versioncheck_php['newer'] = 'nyere end %s';
$lang_versioncheck_php['modified'] = 'ændret';
$lang_versioncheck_php['not_modified'] = 'uændret'; // cpg1.5
$lang_versioncheck_php['needs_change'] = 'kræver ændring';
$lang_versioncheck_php['review_permissions'] = 'set rettighederne';
$lang_versioncheck_php['inaccessible'] = 'Fil er utilgængelig';
$lang_versioncheck_php['review_version'] = 'Din fil for gammel';
$lang_versioncheck_php['review_dev_version'] = 'Din fil er nye end forventet';
$lang_versioncheck_php['review_modified'] = 'Fil er måske korrupt (eller du har med vilje ændret den)';
$lang_versioncheck_php['review_missing'] = '%s mangler eller utilgængelig';
$lang_versioncheck_php['existing'] = 'eksisterende';
$lang_versioncheck_php['review_removed_existing'] = 'Filen skal fjernes af sikkerhedsårsager';
$lang_versioncheck_php['counter'] = 'Tæller';
$lang_versioncheck_php['type'] = 'Type';
$lang_versioncheck_php['path'] = 'Sti';
$lang_versioncheck_php['missing'] = 'Mangler';
$lang_versioncheck_php['permissions'] = 'Rettigheder';
$lang_versioncheck_php['version'] = 'Version';
$lang_versioncheck_php['revision'] = 'Revision';
$lang_versioncheck_php['modified'] = 'Ændret';
$lang_versioncheck_php['comment'] = 'Kommentar';
$lang_versioncheck_php['help'] = 'Hjælp';
$lang_versioncheck_php['repository_link'] = 'Repository link';
$lang_versioncheck_php['browse_corresponding_page_subversion'] = 'Vis side svarende til denne fil i projektets subversion repository';
$lang_versioncheck_php['mandatory'] = 'Krævet';
$lang_versioncheck_php['mandatory_missing'] = 'Krævet fil mangler'; // cpg1.5
$lang_versioncheck_php['optional'] = 'optional';
$lang_versioncheck_php['removed'] = 'fjernet'; // cpg1.5
$lang_versioncheck_php['options'] = 'Option';
$lang_versioncheck_php['display_output'] = 'Vis output';
$lang_versioncheck_php['on_screen'] = 'Fuld Skærm';
$lang_versioncheck_php['text_only'] = 'Kun Tekst';
$lang_versioncheck_php['errors_only'] = 'Vi kun potentielle fejl';
$lang_versioncheck_php['hide_images'] = 'Skjul billeder'; // cpg1.5
$lang_versioncheck_php['no_modification_check'] = 'Check ikke for modificerede filer'; // cpg1.5
$lang_versioncheck_php['do_not_connect_to_online_repository'] = 'Forbind ikke til online repository';
$lang_versioncheck_php['online_repository_explain'] = 'Kun anbefalet hvis forbindelsen fejler';
$lang_versioncheck_php['submit'] = 'Tilføj / opdatere';
$lang_versioncheck_php['select_all'] = 'Vælg alle'; // js-alert
$lang_versioncheck_php['files_folder_processed'] = 'Vis %s indhold af %s folder/filer med %s potentiel problem';
$lang_versioncheck_php['read'] = 'Læs'; // cpg1.5
$lang_versioncheck_php['write'] = 'Skriv'; // cpg1.5
$lang_versioncheck_php['warning'] = 'Advarsel'; // cpg1.5
$lang_versioncheck_php['not_applicable'] = 'n/a'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File view_log.php
// ------------------------------------------------------------------------- //
if (defined('VIEWLOG_PHP')) {
$lang_viewlog_php['delete_all'] = 'Slette alle Logs';
$lang_viewlog_php['delete_this'] = 'Slette denne Log';
$lang_viewlog_php['view_logs'] = 'Vis Logs';
$lang_viewlog_php['no_logs'] = 'Ingen logs oprettet.';
$lang_viewlog_php['last_updated'] = 'Senest update'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File xp_publish.php
// ------------------------------------------------------------------------- //
if (defined('XP_PUBLISH_PHP')) {
$lang_xp_publish_php['title'] = 'XP Web Publishing Wizard';
$lang_xp_publish_php['client_header'] = 'XP Web Publishing Wizard Klient'; // cpg1.5
$lang_xp_publish_php['requirements'] = 'Krav'; // cpg1.5
$lang_xp_publish_php['windows_xp'] = 'Windows XP / Vista'; // cpg1.5
$lang_xp_publish_php['no_windows_xp'] = 'Det ser ud til at du bruger et ikke supporteret styresystem'; // cpg1.5
$lang_xp_publish_php['no_os_detect'] = 'Kunne ikke genkende dit styresystem'; // cpg1.5
$lang_xp_publish_php['requirement_http_upload'] = 'En fungerende installation af Coppermine hvor http upload funktion virker korrekt'; // cpg1.5
$lang_xp_publish_php['requirement_ie'] = 'Microsoft Internet Explorer'; // cpg1.5
$lang_xp_publish_php['requirement_permissions'] = 'Kræver at Administratoren af galleriet giver dig ret upload rettigheder'; // cpg1.5
$lang_xp_publish_php['requirement_login'] = 'Kræver du er logget ind for at upload filer'; // cpg1.5
$lang_xp_publish_php['no_ie'] = 'Det ser ud til, at du bruger en usupporterede browser'; // cpg1.5
$lang_xp_publish_php['no_browser_detect'] = 'Kunne ikke genkende din browser'; // cpg1.5
$lang_xp_publish_php['no_gallery_name'] = 'Du mangler og angive et galleri navn i config'; // cpg1.5
$lang_xp_publish_php['no_gallery_description'] = 'Du mangler og angive en galleri forklaring i config'; // cpg1.5
$lang_xp_publish_php['howto_install'] = 'Installere sådan'; // cpg1.5
$lang_xp_publish_php['install_right_click'] = 'Højre klik på %sthis link%s og vælg &quot;gem som...&quot;'; // cpg1.5 // translator note: don't replace the %s - that placeholder token needs to go untranslated
$lang_xp_publish_php['install_save'] = 'Gem filen på din maskine. Når du gemmer filen, så huske at det foreslåede fil navn er <tt>cpg_###.reg</tt> (hvor ### angiver et numerisk tidskode). Skift til dette navn om nødvendigt (Behold numrene)'; // cpg1.5
$lang_xp_publish_php['install_execute'] = 'Efter download er afsluttet, kør filen ved og dobbelt klikke på den for og registere din server med web publishing wizard'; // cpg1.5
$lang_xp_publish_php['usage'] = 'brug'; // cpg1.5
$lang_xp_publish_php['select_files'] = 'I Windows Explorer, vælg de filer du vil upload'; // cpg1.5
$lang_xp_publish_php['display_tasks'] = 'Værd sikker på, at folderen ikke vises i venstre side af stifinder'; // cpg1.5
$lang_xp_publish_php['publish_on_the_web'] = 'Klik på &quot;Udgiv xxx på websiden &quot; i venstre side'; // cpg1.5
$lang_xp_publish_php['confirm_selection'] = 'Bekræft dit fil valg'; // cpg1.5
$lang_xp_publish_php['select_service'] = 'I listen af services, vælg dit Foto galleri (Det har dit galleri navn)'; // cpg1.5
$lang_xp_publish_php['enter_login'] = 'Indtast dine login oplysninger hvis krævet'; // cpg1.5
$lang_xp_publish_php['select_album'] = 'Vælg modtage album for dine billeder eller lav et nyt'; // cpg1.5
$lang_xp_publish_php['next'] = 'Klik på &quot;næste&quot;'; // cpg1.5
$lang_xp_publish_php['upload_starts'] = 'Upload af dine filer skulle starte nu'; // cpg1.5
$lang_xp_publish_php['upload_completed'] = 'Når det er færdig, check dit galleri for og se om alle billeder er korrekt tilføjet'; // cpg1.5
$lang_xp_publish_php['welcome'] = 'Velkommen <strong>%s</strong>,';
$lang_xp_publish_php['need_login'] = 'Du skal logge ind i galleriet med Internet Explorer før du kan bruge denne wizard.<p/><p>Når du logger ind så glem ikke og vælg &quot;husk mig&quot; option hvis muligt.';
$lang_xp_publish_php['no_alb'] = 'Beklager der er ikke nogen album hvor du kan opload dine billeder med denne wizard.';
$lang_xp_publish_php['upload'] = 'Upload dine billeder til en eksisterende album';
$lang_xp_publish_php['create_new'] = 'Opret et nyt album til dine billeder';
$lang_xp_publish_php['category'] = 'Katagori';
$lang_xp_publish_php['new_alb_created'] = 'Dit nye album &quot;<strong>%s</strong>&quot; blev oprettet.';
$lang_xp_publish_php['continue'] = 'Tryk &quot;Næste&quot; for at starte upload af dine billeder';
$lang_xp_publish_php['link'] = '';
}

// ------------------------------------------------------------------------- //
// Core plugins
// ------------------------------------------------------------------------- //
if (defined('CORE_PLUGIN')) {
$lang_plugin_php['usergal_alphatabs_config_name'] = 'Bruger Galleri Alfabetisk Faneblads opdelt'; // cpg1.5
$lang_plugin_php['usergal_alphatabs_config_description'] = 'Hvad det gør: Viser  faner fra A til Z i toppen af Bruger galleriet hvor besøgende kan klikke og hoppe direkt til en side som viser alle bruger gallerier der starter med dette bogstav. Plugin kun anbefalet og bruge hvis du har mange bruger gallerier.'; // cpg1.5
$lang_plugin_php['usergal_alphatabs_jump_by_username'] = 'Hop til brugernavn'; // cpg1.5
$lang_plugin_php['sample_config_name'] = 'Prøve Plugin'; // cpg1.5
$lang_plugin_php['sample_config_description'] = 'Dette er et prøve plugin. Det vil ikke lave noget specielt - er kun ment som en demonstration af hvad plugins kan og hvordan at kode dem. Når enabled, vil det vise nogle prøve teksti rød.'; // cpg1.5
$lang_plugin_php['sample_plugin_documentation'] = 'Plugin Dokumentation'; // cpg1.5
$lang_plugin_php['sample_plugin_support'] = 'Plugin Support'; // cpg1.5
$lang_plugin_php['sample_install_explain'] = 'Indtast brugernavn (\'foo\') og kodeord (\'bar\') for at installere'; // cpg1.5
$lang_plugin_php['sample_install_username'] = 'Brugernavn'; // cpg1.5
$lang_plugin_php['sample_install_password'] = 'Kodeord'; // cpg1.5
$lang_plugin_php['sample_output'] = 'Disse prøve data vist fra prøve plugin'; // cpg1.5
$lang_plugin_php['opensearch_config_name'] = 'OpenSearch'; // cpg1.5
$lang_plugin_php['opensearch_config_description'] = 'En implementering af <a href="http://www.opensearch.org/" rel="external" class="external">OpenSearch</a> for Coppermine.<br />Når enabled, besøgende kan tilføje dit galleri til deres browser\'s search bar.'; // cpg1.5
$lang_plugin_php['opensearch_search'] = 'Søg %s'; // cpg1.5
$lang_plugin_php['opensearch_extra'] = 'Du ønsker måske og tilføje en tekst til dit site som forklarer hvad dette plugin gør'; // cpg1.5
$lang_plugin_php['opensearch_failed_to_open_file'] = 'Kan ikke åbne filen %s - check rettigheder'; // cpg1.5
$lang_plugin_php['opensearch_failed_to_write_file'] = 'Kan ikke skrive til filen %s - check rettigheder'; // cpg1.5
$lang_plugin_php['opensearch_form_header'] = 'Indtast detaljer til brug i beskrivelsesfilen'; // cpg1.5
$lang_plugin_php['opensearch_gallery_url'] = 'Galleri URL (Skal være korrekt)'; // cpg1.5
$lang_plugin_php['opensearch_display_name'] = 'Navn som vist i browseren'; // cpg1.5
$lang_plugin_php['opensearch_description'] = 'Beskrivelse'; // cpg1.5
$lang_plugin_php['opensearch_character_limit'] = '%s Bogstavsbegrænsning'; // cpg1.5
$lang_plugin_php['onlinestats_description'] = 'Tilføj en blok på hver galleri side der viser hvilke bruger og gæster der er online.';
$lang_plugin_php['onlinestats_name'] = 'Hvem er online?';
$lang_plugin_php['onlinestats_config_extra'] = 'For at enable dette plugin (Får det til og vise onlinestats blokken), the string "onlinestats" (adskildt a et slash) er tilføjet til "indholdet af hovedsiden" i <a href="admin.php">Coppermine\'s config</a> i sektionen "Vis Albums ". Settings skulle nu ligne "breadcrumb/catlist/alblist/onlinestats" eller lignende. For at ændre position af blokken, flyt strengen "onlinestats" rundt inde i config feltet.';
$lang_plugin_php['onlinestats_config_install'] = 'Dette plugin kører ekstra forespørgsler til databsen hver gang det bliver afviklet, og bruger CPU ressourcer. Hvis dit Coppermine gallery er langsom eller har mange bruger, skulle du ikke bruge det.';
$lang_plugin_php['onlinestats_we_have_reg_member'] = 'Der er %s registreret bruger';
$lang_plugin_php['onlinestats_we_have_reg_members'] = ' Der er %s registrerede brugere';
$lang_plugin_php['onlinestats_most_recent'] = 'Seneste registreret bruger er %s';
$lang_plugin_php['onlinestats_is'] = 'I alt er der %s besøg online';
$lang_plugin_php['onlinestats_are'] = 'I alt er der %s besøgende online';
$lang_plugin_php['onlinestats_and'] = 'og';
$lang_plugin_php['onlinestats_reg_member'] = '%s registreret bruger';
$lang_plugin_php['onlinestats_reg_members'] = '%s registrerede brugere';
$lang_plugin_php['onlinestats_guest'] = '%s gæst';
$lang_plugin_php['onlinestats_guests'] = '%s gæster';
$lang_plugin_php['onlinestats_record'] = 'Højst antal bruger online: %s på %s';
$lang_plugin_php['onlinestats_since'] = 'Registrerede brugere der har været online de sidste %s minuter: %s';
$lang_plugin_php['onlinestats_config_text'] = 'Hvor længe ønsker du at beholde brugere listet online før de skal betragtes som værende væk igen?';
$lang_plugin_php['onlinestats_minute'] = 'minuter';
$lang_plugin_php['onlinestats_remove'] = 'Fjern tabel der var brugt til at gemme online data?';
$lang_plugin_php['link_target_name'] = 'Link target';
$lang_plugin_php['link_target_description'] = 'Ændre måden eksterne links åbnes: Når dette plugin er enabled, alle links der indeholder attributen rel="external" vil åbne i et nyt vindue (istedet for i samme vindue).';
$lang_plugin_php['link_target_extra'] = 'Dette plugin påvirker for det meste "Powered by Coppermine" linket i bunden af galleri siden.';
$lang_plugin_php['link_target_recommendation'] = 'Det anbefales ikke og bruge dette plugin for at genere dine brugere: Åbne links i nye vinduer genere dine brugere.';
}

?>