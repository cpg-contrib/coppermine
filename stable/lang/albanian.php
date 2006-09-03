<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2006 Coppermine Dev Team
  v1.1 originally written by Gregory DEMAR

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation; either version 2 of the License, or
  (at your option) any later version.
  ********************************************
  Coppermine version: 1.4.10
  $Source$
  $Revision: 3125 $
  $Author: gaugau $
  $Date: 2006-06-16 08:48:03 +0200 (Fr, 16 Jun 2006) $
**********************************************/

if (!defined('IN_COPPERMINE')) { die('Not in Coppermine...');}

// info about translators and translated language
$lang_translation_info = array(
'lang_name_english' => 'Albanian',  
'lang_name_native' => 'Albanian', 
'lang_country_code' => 'al', 
'trans_name'=> 'Ajet Nuro', //the name of the translator - can be a nickname
'trans_email' => 'admin@albemigrant.com', //translator's email address (optional)
'trans_website' => 'http://www.albemigrant.com/', //translator's website (optional)
'trans_date' => '2006-07-10', //the date the translation was created / last modified
);

$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('Bytes', 'KB', 'MB');
// Day of weeks and months
$lang_day_of_week = array('E dielë', 'E hënë', 'E martë', 'E mërkurë', 'E enjte', 'E premte', 'E shtunë');
$lang_month = array('Janar', 'Shkurt', 'Mars', 'Prill', 'Maj', 'Qershor', 'Korrik', 'Gusht', 'Shtator', 'Tetor', 'Nëntor', 'Dhjetor');

// Some common strings
$lang_yes = 'Po';
$lang_no  = 'Jo';
$lang_back = 'MBRAPA';
$lang_continue = 'VAZHDIM';
$lang_info = 'Informacion';
$lang_error = 'Gabim';
$lang_check_uncheck_all = 'zgjidhi/mos i zgjidh të gjitha'; //cpg1.4

// The various date formats

// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$album_date_fmt =    '%d %B %Y';
$lastcom_date_fmt =  '%d/%m/%y @ %H:%M';
$lastup_date_fmt = '%d %B %Y';
$register_date_fmt = '%d %B %Y';
$lasthit_date_fmt = '%d %B %Y @ %I:%M %p';
$comment_date_fmt =  '%d %B %Y @ %I:%M %p';
$log_date_fmt = '%B %d, %Y at %I:%M %p'; //cpg1.4

// For the word censor
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*');
$lang_meta_album_names = array(
        'random' => 'Fotografi të rastësishme',
        'lastup' => 'Futjet më të fundit',
        'lastalb'=> 'Albumet më të fundit', 
        'lastcom' => 'Komentet në të fundit',
        'topn' => 'Më të shikuarat',
        'toprated' => 'Më të vlerësuarat',
        'lasthits' => 'Të para së fundi',
        'search' => 'Rezultatet e kërkimit', 
        'favpics'=> 'Fotografitë e preferuara', 
	'favpics'=> 'Skedaret favorite',  //cpg1.4
);
$lang_errors = array(
        'access_denied' => 'Ju nuk u lejohet hyrja në këtë faqe.',
        'perm_denied' => 'Ju nuk u lejohet të kryeni këtë veprim.',
        'param_missing' => 'Skript i thirrur pa patur parametrat e nevojshëm.',
        'non_exist_ap' => 'Albumi/fotografia e zgjedhur nuk ekziston !',
        'quota_exceeded' => 'Hapësira në disk e tejkaluar<br /><br />Ju keni nje hapsirë prej [quota]K, fotografitë tuaja momentalisht zënë një hapsirë prej [space]K, nëse shtoni këtë fotografi Ju tejkaloni hapsirën e lejuar.',
        'gd_file_type_err' => 'Kur përdorni librarinë e imazheve GD, lejohen vetëm imazhet e formatit JPEG dhe PNG.',
        'invalid_image' => 'Imazhi që ju keni ngarkuar është i prishur ose nuk njihet nga libraria GD',
        'resize_failed' => 'Krijimi i tablove apo reduktimi i përmasave të fotografisë i pamundur.',
        'no_img_to_display' => 'Nuk ka imazhe për tu afishuar',
        'non_exist_cat' => 'Kategoria e zgjedhur nuk ekziston',
        'orphan_cat' => 'Një kategori ka një prind (paraardhës) jo ekzistent, pëdorni administrimin e kategorisë për të rregulluar problemin.',
        'directory_ro' => 'Repertori \'%s\' nuk është i shkrueshëm, fotografitë nuk mund të fshihen',
        'non_exist_comment' => 'Komenti i zgjedhur nuk ekziston.',
        'pic_in_invalid_album' => 'Fotografia është në një album që nuk ekziston (%s)!?', 
        'banned' => 'Ju jeni për momentin i përjashtuar nga ky web sit.', 
        'not_with_udb' => 'Ky funksion është çaktivizuar në Coppermine sepse është integruar me një forum. Ose veprimi që ju doni të kryeni nuk është përfshirë në këtë konfiguracion , ose funksionin në fjalë duhet ta kryeni duke u nisur nga forumi në të cilin keni integruar albumin fotografik.', 
	'offline_title' => 'Jashtë linje',
        'offline_text' => 'Galeria është në këtë moment jashtë linje - rikthehuni së shpejti !', //cpg1.3.0
        'ecards_empty' => 'Nuk ka karta elektronike të regjistruara për tu shfaqur. Verifikoni në ju keni bërë të disponueshme këtë mundësi tek konfigurimi !', //cpg1.3.0
        'action_failed' => 'Veprim i dështuar.  Coppermine nuk është në gjendje të kryej veprimin që ju kërkuat.', //cpg1.3.0
        'no_zip' => 'Libraritë e nevojshme për të trajtuar proceset e zipimit nuk janë instaluar.  Luteni të kontaktoni administratorin tuaj Coppermine !', //cpg1.3.0
        'zip_type' => 'Ju nuk keni leje të ngarkoni skedare ZIP.', 
	'database_query' => 'Një problem u krijua gjatë procesit të një kërkimi në bazën e të dhënave', //cpg1.4
        'non_exist_comment' => 'Komenti që keni zgjedhur nuk ekziston', //cpg1.4
);

$lang_bbcode_help_title = 'ndihmë bbcode'; //cpg1.4
$lang_bbcode_help = 'Ju mund të shtoni një lidhje të klikueshme ose tekst të formatueshëm në këto fusha, duke përdorur etiketat bbcode: <li>[b](i)e Trashë[/b] =&gt; <b>(i)e Trashë</b></li><li>[i]Italike[/i] =&gt; <i>Italike</i></li><li>[url=http://sitijuaj.com/]Teksti me lidhjen[/url] =&gt; <a href="http://sitijuaj.com">Teksti me lidhjen</a></li><li>[email]përdorues@domain.com[/email] =&gt; <a href="mailto:përdorues@domain.com">përdorues@domain.com</a></li><li>[color=red]teksti juaj[/color] =&gt; <span style="color:red">teksti juaj</span></li><li>[img]http://coppermine.sf.net/demo/images/red.gif[/img] => <img src="../images/red.gif" border="0" alt="" /></li>'; //cpg1.4

// ------------------------------------------------------------------------- //

// File theme.php

// ------------------------------------------------------------------------- //


$lang_main_menu = array(
	'home_title' => 'Shko tek faqja kryesore',
  	'home_lnk' => 'Pritja',
        'alb_list_title' => 'Shko tek lista e albumeve',
        'alb_list_lnk' => 'Lista e albumeve',
        'my_gal_title' => 'Shko tek galeria ime personale',
        'my_gal_lnk' => 'Galeria ime',
	'my_prof_title' => 'Shko tek profili im personal', //cpg1.4
        'my_prof_lnk' => 'Profili im',
        'adm_mode_title' => 'Kalo në modë admin',
        'adm_mode_lnk' => 'Modë admin',
        'usr_mode_title' => 'Kalo në modë përdorues',
        'usr_mode_lnk' => 'Modë përdorues',
	'upload_pic_title' => 'Ngarko një foto në një album',
        'upload_pic_lnk' => 'Ngarko foto',
        'register_title' => 'Krijo një llogari',
        'register_lnk' => 'Regjistrohu',
	'login_title' => 'Më identifiko', //cpg1.4
        'login_lnk' => 'Identifikohu',
	'logout_title' => 'Më çidentifiko', //cpg1.4
        'logout_lnk' => 'Çidentifikohu',
	'lastup_title' => 'Afisho ngarkimet më të fundit', //cpg1.4
        'lastup_lnk' => 'Ngarkimet më të fundit',
	'lastcom_title' => 'Afisho komentet më të fundit', //cpg1.4
        'lastcom_lnk' => 'Komentet më të fundit',
	'topn_title' => 'Afisho më të shikuarat', //cpg1.4
        'topn_lnk' => 'Më të shikuarat',
	'toprated_title' => 'Afisho më të vlerësuarat', //cpg1.4
        'toprated_lnk' => 'Më të vlerësuarat',
	'search_title' => 'Kërko në një galeri', //cpg1.4
        'search_lnk' => 'Kërko',
	'fav_title' => 'Shko tek favoritet e mia', //cpg1.4
        'fav_lnk' => 'Favoritet e mia', 
	'memberlist_title' => 'Shfaq Listën e anëtarëve', 
        'memberlist_lnk' => 'Lista e anëtarëve', 
        'faq_title' => 'Pyetje të shpeshta të bëra përsa i përketë foto gallerisë &quot;Coppermine&quot;', //cpg1.3.0
        'faq_lnk' => 'FAQ', 
);

$lang_gallery_admin_menu = array(
        'upl_app_title' => 'Aprovo ngarkimet e reja', //cpg1.4
        'upl_app_lnk' => 'Aprovim i ngarkimeve',
	'admin_title' => 'Shko tek konfigurimi', //cpg1.4
	'config_lnk' => 'Konfigurimi',
	'albums_title' => 'Shko tek konfigurimi i albumeve', //cpg1.4
        'albums_lnk' => 'Albumet',
	'categories_title' => 'Shko tek konfigurimi i kategorive', //cpg1.4
        'categories_lnk' => 'Kategoritë',
	'users_title' => 'Shko tek konfigurimi i përdoruesve', //cpg1.4
        'users_lnk' => 'Përdoruesit',
	'groups_title' => 'Shko tek konfigurimi i grupeve', //cpg1.4
        'groups_lnk' => 'Grupe',
	'comments_title' => 'Shiko gjithë komentet', //cpg1.4
        'comments_lnk' => 'Komente',
	'searchnew_title' => 'Shko tek grumbulli i fotove të futura dhe procedo', //cpg1.4
        'searchnew_lnk' => 'grumbull fotografish të futura',
	'util_title' => 'Shko tek mjetet e administrimit', //cpg1.4
        'util_lnk' => 'Mjetet e administrimit',
        'key_title' => 'Shko tek fjalori i fjalëve-kyç', //cpg1.4
        'key_lnk' => 'Fjalori i fjalëve-kyç', //cpg1.4
        'ban_title' => 'Shko tek pëdoruesit e ndaluar', //cpg1.4        
        'ban_lnk' => 'Ndalo përdoruesit', 
	'db_ecard_title' => 'Shiko kartolinat', //cpg1.4
        'pictures_title' => 'Klasifikim i fotografive të  mia', //cpg1.4
  	'pictures_lnk' => 'Klasifikim i fotografive', //cpg1.4
  	'documentation_lnk' => 'Documentacioni', //cpg1.4
  	'documentation_title' => 'Manuali Coppermine', //cpg1.4
	'util_lnk' => 'Mjetet e admin',
	'db_ecard_lnk' => 'Shfaq kartolinat e dërguara', //cpg1.3.0
);

$lang_user_admin_menu = array(
  'albmgr_title' => 'Krijo dhe rendit albumet e mi', //cpg1.4
  'albmgr_lnk' => 'Krijo / rendit albumet e mi',
  'modifyalb_title' => 'Shko tek modifikimi i albumeve të mi',  //cpg1.4
  'modifyalb_lnk' => 'Modifiko albumet e mi',
  'my_prof_title' => 'Shko tek profili im personal', //cpg1.4
  'my_prof_lnk' => 'Profili im',
);

$lang_cat_list = array(
        'category' => 'Kategori',
        'albums' => 'Albume',
        'pictures' => 'Fotografi',
);
$lang_album_list = array(
        'album_on_page' => '%d albume në %d faqe'
);

$lang_thumb_view = array(
        'date' => 'DATË',

        //Sort by filename and title
        'name' => 'EMRI I SKEDARIT', 
        'title' => 'TITULLI', 
        'sort_da' => 'Renditje sipas datës në ngjitje',
        'sort_dd' => 'Renditje sipas datës në zbritje',
        'sort_na' => 'Renditje sipas emrit në ngjitje',
        'sort_nd' => 'Renditje sipas emrit në zbritje',
        'sort_ta' => 'Renditje sipas titullit në ngjitje', 
        'sort_td' => 'Renditje sipas titullit në zbritje', 
	'position' => 'POZICIONI', //cpg1.4
  	'sort_pa' => 'Renditje sipas pozicionit në ngjitje', //cpg1.4
  	'sort_pd' => 'Renditje sipas pozicionit në zbritje', //cpg1.4
	'download_zip' => 'Shkarkoje si dokument ZIP', //cpg1.3.0
        'pic_on_page' => '%d fotografi në %d faqe(s)',
        'user_on_page' => '%d përdorues në %d faqe(s)',
	'enter_alb_pass' => 'Fut një fjalë-kalim për albumin', //cpg1.4
  	'invalid_pass' => 'Fjalë-kalim i pavlefshëm', //cpg1.4
  	'pass' => 'Fjalë-kalim', //cpg1.4
  	'submit' => 'Paraqite', //cpg1.4
);

$lang_img_nav_bar = array(
        'thumb_title' => 'Kthehu tek faqja e tablove',
        'pic_info_title' => 'Afisho/fshi informacionet e fotografisë',
        'slideshow_title' => 'Slideshow',
        'ecard_title' => 'Dërgoje këtë foto si një kartolinë elektronike',
        'ecard_disabled' => 'Kartat elektronike nuk janë aktive',
        'ecard_disabled_msg' => 'Ju nuk kini të drejtë të dërgoni karta elektronike',
        'prev_title' => 'Shiko fotografinë paraardhëse',
        'next_title' => 'Shiko fotografinë pasardhësenext picture',
        'pic_pos' => 'Foto %s/%s',
	'report_title' => 'Raporto për këtë skedar tek një administrator', //cpg1.4
  	'go_album_end' => 'Shko në fund', //cpg1.4
  	'go_album_start' => 'Kthehu tek fillimi', //cpg1.4
  	'go_back_x_items' => 'përparo duke kaluar %s objekte', //cpg1.4
  	'go_forward_x_items' => 'kthehu duke kaluar %s objekte', //cpg1.4
);

$lang_rate_pic = array(
        'rate_this_pic' => 'Vlerësoni këtë fotografi ',
        'no_votes' => '(Ende nuk ka vota)',
        'rating' => '(Vlerësimi i tanishëm : %s / 5 në %s vota)',
        'rubbish' => 'Shumë keq',
        'poor' => 'Varfër',
        'fair' => 'Mesatar',
        'good' => 'Mirë',
        'excellent' => 'Shkëlqyer',
        'great' => 'Madhështore',
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
        CRITICAL_ERROR => 'Gabim kritik',
        'file' => 'Dokumenti: ',
        'line' => 'Rreshti: ',
);

$lang_display_thumbnails = array(
        'filename' => 'Emri i skedarit : ',
        'filesize' => 'Madhësia e skedarit : ',
        'dimensions' => 'Dimensions : ',
        'date_added' => 'Data e shtimit : '
);

$lang_get_pic_data = array(
        'n_comments' => '%s komente',
        'n_views' => '%s shikime',
        'n_votes' => '(%s vota)'
);
$lang_cpg_debug_output = array(
  'debug_info' => 'Info për debug', 
  'select_all' => 'Përzgjidh të gjitha', 
  'copy_and_paste_instructions' => 'Nëse ju dëshironi të postoni një kërkesë për ndihmë coppermine, kopjoni dhe ngjisni këtë informacion të debogazhit tek mesazhi juaj. Sigurohuni të zvendësoni çdo fjalë-kalim me  *** para se të postoni mesazhin tuaj. <br />Shënim: Ky është thjesht një informacion dhe nuk do të thotë që tek galleria juaj ka një gabim.', //cpg1.4'copy_and_paste_instructions' => 'Nëse ju jeni duke kërkuar ndihme nga teknikët e coppermine, kopjo e ngjit këtë difekt tek postimi juaj. Make sure to replace any passwords from the query with *** before posting.', //cpg1.3.0
  'phpinfo' => 'Shfaq phpinfo', 
  'notices' => 'Shënime', //cpg1.4
);

$lang_language_selection = array(
  'reset_language' => 'Gjuha e albumit', 
  'choose_language' => 'Zgjidhni gjuhën tuaj', 
);

$lang_theme_selection = array(
  'reset_theme' => 'Tema e albumit', 
  'choose_theme' => 'Zgjidhni nje teme', 
);

$lang_version_alert = array(
  'version_alert' => 'Ky version nuk ofron ndihmë!', //cpg1.4
  'no_stable_version' => 'Ju jeni duke përdorur Coppermine  %s (%s) i cili është paraparë për persona me shumë përvojë. Ky version nuk ofron mbështetje apo garanti. Përdoreni këtë version duke marr përsipër risqet që lidhen me të ose kaloni në një version më të hershëm dhe stabël që ofrojnë dhe ndihmë!', //cpg1.4
  'gallery_offline' => 'Galleria është offline dhe do të jetë e dukshme vetëm për ju si administrator. Mos harroni ta ktheni online pasi të mbaroni punë me mirëmbajtjen e saj.', //cpg1.4
);

$lang_create_tabs = array(
  'previous' => 'i (e) mëparshëm(e)', //cpg1.4
  'next' => 'i (e) mëpasëm(e)', //cpg1.4
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
// File include/plugin_api.inc.php
// ------------------------------------------------------------------------- //
$lang_plugin_api = array(
  'error_wakeup' => "Nuk mund të aktivizohen plugin '%s'", //cpg1.4
  'error_install' => "Nuk mund të instalohet plugin '%s'", //cpg1.4
  'error_uninstall' => "Nuk mund të çinstalohet plugin '%s'", //cpg1.4
  'error_sleep' => "Nuk mund të çinstalohet plugin '%s'<br />", //cpg1.4
);

// ------------------------------------------------------------------------- //

// File include/smilies.inc.php

// ------------------------------------------------------------------------- //



if (defined('SMILIES_PHP')) $lang_smilies_inc_php = array(
        'Exclamation' => 'Habi',
        'Question' => 'Pyetje',
        'Very Happy' => 'Shumë i gëzuar',
        'Smile' => 'Buzëqeshje',
        'Sad' => 'Trishtim',
        'Surprised' => 'Surprizë',
        'Shocked' => 'I tronditur',
        'Confused' => 'Konfuz',
        'Cool' => 'I qetë',
        'Laughing' => 'I qeshur',
        'Mad' => 'Sëmurë',
        'Razz' => 'Ngacmoj',
        'Embarassed' => 'I shqetësuar',
        'Crying or Very sad' => 'Duke qarë ose shumë i trishtuar',
        'Evil or Very Mad' => 'Djallëzor ose shumë i zemëruar',
        'Twisted Evil' => 'Sadist',
        'Rolling Eyes' => 'Sy rrotullues',
        'Wink' => 'Shkel syrin',
        'Idea' => 'Ide',
        'Arrow' => 'Shigjetë',
        'Neutral' => 'Asnjëanës',
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
  0 => 'Shkëpudje nga modë admin...',
  1 => 'Hyrje në modë admin...',
);

// ------------------------------------------------------------------------- //

// File albmgr.php

// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
        'alb_need_name' => 'Albumet duhet të kenë një emër !',
        'confirm_modifs' => 'Jeni i sigurt që doni të bëni këto modifikime ?',
        'no_change' => 'Ju nuk bëtë ndonjë ndryshim !',
        'new_album' => 'Album i ri',
        'confirm_delete1' => 'Jeni i sigurt që ju doni ta fshini këtë album ?',
        'confirm_delete2' => '\nGjithë fotografitë dhe komentet që përmban do humbasin !',
        'select_first' => 'Së pari duhet të zgjidhni një album',
        'alb_mrg' => 'Album Manager',
        'my_gallery' => '* Galeria ime *',
        'no_category' => '* Nuk ka kategori *',
        'delete' => 'Fshi',
        'new' => 'E re',
        'apply_modifs' => 'Zbato ndryshimet',
        'select_category' => 'Zgjidh kategorinë',
);

// ------------------------------------------------------------------------- //
// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) $lang_banning_php = array(
  'title' => 'Ndalo përdoruesit', //cpg1.4
  'user_name' => 'Emri i përdoruesit', //cpg1.4
  'ip_address' => 'Adresa IP', //cpg1.4
  'expiry' => 'Skadenca (Fusha bosh do të thotë përgjithmonë)', //cpg1.4
  'edit_ban' => 'Ruaj ndryshimet', //cpg1.4
  'delete_ban' => 'Fshi', //cpg1.4
  'add_new' => 'Shto një ndalim të ri', //cpg1.4
  'add_ban' => 'Shto', //cpg1.4
  'error_user' => 'Përdoruesi nuk mund të gjendet', //cpg1.4
  'error_specify' => 'Ju duhet të specifikoni një emër përdoruesi ose një adresë IP', //cpg1.4
  'error_ban_id' => 'ID e pavlefëshme!', //cpg1.4
  'error_admin_ban' => 'Ju nuk mund të ndaloni vehten tuaj!', //cpg1.4
  'error_server_ban' => 'Ju jeni duke ndaluar serverin tuaj? Hej, mos e bëj një gjë të tillë...', //cpg1.4
  'error_ip_forbidden' => 'Ju nuk mund të ndaloni këtë adresë IP. Ajo është një adresë private!<br />Nëse ju dëshironi ndalimin e IP private bëjeni këtë gjë tek <a href="admin.php">Konfigurimi</a> (vetëm nëse Coppermine funksionon në një rrjet lokal).', //cpg1.4
  'lookup_ip' => 'Konsultoni një adresë IP', //cpg1.4
  'submit' => 'shko!', //cpg1.4
  'select_date' => 'Zgjidhni datën', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File bridgemgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('BRIDGEMGR_PHP')) $lang_bridgemgr_php = array(
  'title' => 'Assistenti Bridge ',
  'warning' => 'Kujdes: duke përdorur këtë asistent ju duhet të kuptoni që të dhëna të ndjeshme transmetohen nëpërmjet formularëve html . Përdoreni vetëm tek kompiuteri juaj dhe jo në vende publike apo kafe-internet dhw sigurohuni që të boshatisni memorien kash të vozotësit tuaj internet. Në rast se ju nuk merrni këto masa, të tjerë persona mund të shfrytëzojnë të dhënat tuaja!',
  'back' => 'mbrapa',
  'next' => 'pasues',
  'start_wizard' => 'Fillo asistentin bridge',
  'finish' => 'Fund',
  'hide_unused_fields' => 'fshih fushat e formularit të papërdorura (rekomandohet)',
  'clear_unused_db_fields' => 'Fshi (shuaj) të dhënat e pavlefshme të bazës së të dhënave (rekomandohet)',
  'custom_bridge_file' => 'emri i skedarit tuaj bridgetë personalizuar (nëse emri i skedarit bridge është <i>myfile.inc.php</i>, futeni <i>myfile</i> into this field)',
  'no_action_needed' => 'Asnjë veprim nuk kërkohet në këtë hap. Vetëm klikoni \'pasues\' për të vazhduar.',
  'reset_to_default' => 'Rikthim tek vlerat e paracaktuara',
  'choose_bbs_app' => 'zgjidhni një aplikacion që dëshironi ta zbatoni me ndihmën e bridge coppermine',
  'support_url' => 'Shko këtu për mbështetje për këtë aplikim',
  'settings_path' => 'rruga e përdorur nga forumi juaj',
  'database_connection' => 'Lidhje me bazëne të dhënave',
  'database_tables' => 'tabelat e bazës së të dhënave',
  'bbs_groups' => 'Grupet e forum',
  'license_number' => 'Numri i lishencët',
  'license_number_explanation' => 'fusni numrin tuaj të lishencës (nëse kërkohet)',
  'db_database_name' => 'Emri i bazës së të dhënave',
  'db_database_name_explanation' => 'Fusni emrin e bazës së të dhënave që përdor forumi juaj',
  'db_hostname' => 'Strehuesi i bazës së të dhënave',
  'db_hostname_explanation' => 'Strehuesi ku ndodhet baza e të dhënave mySQL, në përgjithësi &quot;localhost&quot;',
  'db_username' => 'Emri i përdoruesit tek baza e të dhënave',
  'db_username_explanation' => 'llogaria e përdoruesit mySQL që përdoret për tu lidhur me forumin',
  'db_password' => 'Fjalë-kalimi i bazës së të dhënave',
  'db_password_explanation' => 'Fjalë-kalim i përdoruesit për këtë bazë të dhënash mySQL',
  'full_forum_url' => 'URL e forumit',
  'full_forum_url_explanation' => 'Adresa e plotë URL e forumit tuaj (për shembull http://www.sitijuaj.com/forum)',
  'relative_path_of_forum_from_webroot' => 'Adresa relative e forumit tuaj',
  'relative_path_of_forum_from_webroot_explanation' => 'Adresa relative e forumit duke u nisur nga adresa e websitit tuaj (Shembull: Nëse forumi juaj është në adresën http://www.sitijuaj.com/forum/, fusni &quot;/forum/&quot; në këtë fushë)',
  'relative_path_to_config_file' => 'Adresa relative e faqes së konfigurimit të forumit tuaj',
  'relative_path_to_config_file_explanation' => 'Adresa relative e forumit parë nga dosja ku ndodhet Coppermine  (p.sh. &quot;../forum/&quot; nëse forumi juaj është në http://www.sitijuaj.com/forum/ dhe Coppermine në http://www.sitijuaj.com/gallery/)',
  'cookie_prefix' => 'Prefiksi i cookie',
  'cookie_prefix_explanation' => 'Ky do të jetë emri i cookie për forumin tuaj',
  'table_prefix' => 'Prefiksi i tabelave',
  'table_prefix_explanation' => 'Duhet të jetë i njëjtë me prefiksin e forumit tuaj që ju keni zgjedhur kur e keni instaluar.',
  'user_table' => 'Tabela e përdoruesve',
  'user_table_explanation' => '(përgjithësisht vlerat paraprake duhet të jenë në rregull, veç nëse forumi juaj nuk ka një instalim standard)',
  'session_table' => 'Tabela e sesioneve',
  'session_table_explanation' => '(përgjithësisht vlerat paraprake duhet të jenë në rregull, veç nëse forumi juaj nuk ka një instalim standard)',
  'group_table' => 'Tabela e grupeve',
  'group_table_explanation' => '(përgjithësisht vlerat paraprake duhet të jenë në rregull, veç nëse forumi juaj nuk ka një instalim standard)',
  'group_relation_table' => 'Tabela e marrdhënieve të grupeve',
  'group_relation_table_explanation' => '(përgjithësisht vlerat paraprake duhet të jenë në rregull, veç nëse forumi juaj nuk ka një instalim standard)',
  'group_mapping_table' => 'Tabela e korrespondencës së grupeve',
  'group_mapping_table_explanation' => '(përgjithësisht vlerat paraprake duhet të jenë në rregull, veç nëse forumi juaj nuk ka një instalim standard)',
  'use_standard_groups' => 'Përdor grupet standarde të forumit',
  'use_standard_groups_explanation' => 'Përdor grupet e përdoruesve standard (të paracaktuar) (rekomandohet). Të gjitha rregullimet e grupeve të personalizuara do të fshihen. Dezaktivizoje këtë opsion nëse ju metë vërtet e dini se çfarë po bëni!',
  'validating_group' => 'Grup në pritje për tu pranuar',
  'validating_group_explanation' => 'Numri i identifikimit (ID) të grupit ku ndodhen përdoruesit e forumit në pritje të pranimit (përgjithësisht vlerat paraprake duhet të jenë në rregull, veç nëse forumi juaj nuk ka një instalim standard)',
  'guest_group' => 'Grupi i vizitorëve',
  'guest_group_explanation' => 'Numri i identifikimit (ID) të grupit ku ndodhen vizitorët  e forumit(përdorues anonim)  (përgjithësisht vlerat paraprake duhet të jenë në rregull, ndryshojini vetëm nëse me të vërtet ju dini se çfarë bëni)',
  'member_group' => 'Grupi i anëtarëve',
  'member_group_explanation' => 'Numri i identifikimit (ID) të grupit ku ndodhen anëtarët &quot;e rregullt&quot; (përgjithësisht vlerat paraprake duhet të jenë në rregull, ndryshojini vetëm nëse me të vërtet ju dini se çfarë bëni)',
  'admin_group' => 'Grupi i administratorëve',
  'admin_group_explanation' => 'Numri i identifikimit (ID) të grupit ku ndodhen administratorët (përgjithësisht vlerat paraprake duhet të jenë në rregull, ndryshojini vetëm nëse me të vërtet ju dini se çfarë bëni)',
  'banned_group' => 'Grupi i të ndaluarëve',
  'banned_group_explanation' => 'Numri i identifikimit (ID) të grupit ku ndodhen përdoruesit e ndaluar (përgjithësisht vlerat paraprake duhet të jenë në rregull, ndryshojini vetëm nëse me të vërtet ju dini se çfarë bëni)',
  'global_moderators_group' => 'Grupi i moderatorëve të përgjithshëm',
  'global_moderators_group_explanation' => 'Numri i identifikimit (ID) të grupit ku ndodhen moderatorët e përgjithshëm (përgjithësisht vlerat paraprake duhet të jenë në rregull, ndryshojini vetëm nëse me të vërtet ju dini se çfarë bëni)',
  'special_settings' => 'Parametra specifik të forumit',
  'logout_flag' => 'versioni phpBB (logout flag)',
  'logout_flag_explanation' => 'Cili është versioni i forumit tuaj (ky parametër specifikon mënyrën e mbylljes së sesionit)',
  'use_post_based_groups' => 'Përdorim i grupeve mbi bazën e numrit të mesazheve?',
  'logout_flag_yes' => '2.0.5 e sipër',
  'logout_flag_no' => '2.0.4 e poshtë',
  'use_post_based_groups_explanation' => 'Duhet që grupet e përcaktuara numrit të mesazheve të merren parasysh (mundëson një drejtim më të mirë të lejimeve) ose thjesht grupet e paracaktuara (bënë administrimin më të lehtë, rekomandohet). Ju mund të ndërroni këtë parametër edhe më mbrapa.',
  'use_post_based_groups_yes' => 'po',
  'use_post_based_groups_no' => 'jo',
  'error_title' => 'Ju duhet të korigjoni këto gabime para se të vazhdoni. Kthehuni tek ekrani i mëparshëm.',
  'error_specify_bbs' => 'Ju duhet të specifikoni në cilin aplikacion ju duhet të asistoheni nga Coppermine për ta instaluar.',
  'error_no_blank_name' => 'Ju nuk mund të lini fushën e emrit të klientit bridge  të bardhë.',
  'error_no_special_chars' => 'Emri i bridge nuk mund të përbëhet nga karaktere speciale përveç nënvizës (_) dhe viza (-)!',
  'error_bridge_file_not_exist' => 'Dasja bridge %s nuk egziston në server. Verifikoni nëse e keni ngarkuar atë.',
  'finalize' => 'Aktivizim /çaktivizim i integrimit me forumin',
  'finalize_explanation' => 'Deri tani, parametrat që ju specifikuat janë regjistruar në bazën e të dhënave, por integrimi me forumin nuk është aktivizuar. Ju mund të aktivizoni /çaktivizoni këtë integrim kur të dëshironi. Sigurohuni të kujtoni emrin e përdoruesit dhe passwordin e administratorit të Coppermine, (jo bridge)që do tu duhet më pas për të bërë modifikime të domosdoshme.  Nëse diçka nuk shkon si duhet, shko tek %s dhe çaktivizo integrimin me forumin, duke përdorur llogarinë tuaj administrator (jo bridge) (normalisht ju keni futur këto të dhëna kur keni instaluar Coppermine).',
  'your_bridge_settings' => 'Parametrat e bridge',
  'title_enable' => 'Aktivizim /integrim i Bridge me %s',
  'bridge_enable_yes' => 'Aktivizuar',
  'bridge_enable_no' => 'Çaktivizuar',
  'error_must_not_be_empty' => 'Nuk duhet të jetë bosh',
  'error_either_be' => 'Duhet të jetë %s ose %s',
  'error_folder_not_exist' => '%s Nuk ekziston. Korrigjoni vlerën që futët për %s',
  'error_cookie_not_readible' => 'Coppermine nuk mund të lexoj një cookie të quajtur %s. Korrigjoni vlerat që keni futur për %s, ose shkoni tek paneli i administratorit të forumitdhe sigurohu që rruga për tek cookie është e lexueshme nga coppermine.',
   'error_mandatory_field_empty' => 'You can not leave the field %s blank - fill in the proper value.',
  'error_no_trailing_slash' => 'There mustn\'t be a trailing slash in the field %s.',
  'error_trailing_slash' => 'There must be a trailing slash in the field %s.',
  'error_db_connect' => 'Could not connect to the mySQL database with the data you specified. Here\'s what mySQL said:',
  'error_db_name' => 'Edhe pse Coppermine mundi të vendosi një lidhje , ai nuk qe në gjendje të gjej databazën %s. Sigurohuni që ju e keni specifikuar %s siç duhet. Këtu keni përgjigjen e mySQL:',
  'error_prefix_and_table' => '%s dhe ',
  'error_db_table' => 'Tabela %s nuk u gjend. Sigurohuni që ju e keni specifikuar %s korrektësisht.',
  'recovery_title' => 'Drejtuesi i Bridge : rekuperim në rast urgjence',
  'recovery_explanation' => 'Nëse keni ardhur këtu për të administruar integrimin e forumit me gallerinë Coppermine , ju duhet të identifikoheni së pari si admin. Nëse ju nuk mund të identifikoheni për shkak se bridge nuk është realizuar siç duhet, ju mund të çaktivizoni forumin  nga kjo faqe. Duke futur emrin e përdoruesit dhe fjalë-kalimin ju nuk do të mundeni të identifikoheni, ju vetëm do të mundeni të çaktivizoni integrimin e forumit. Referojuni dokumentave për detaje.',
  'username' => 'Emri i përdoruesit',
  'password' => 'Fjalë-kalimi',
  'disable_submit' => 'paraqite',
  'recovery_success_title' => 'Autorizim i suksesshëm',
  'recovery_success_content' => 'Ju keni çakrivizuar me sukses integrimin e forumit. Coppermine fonksionon tashmë në mënyrë autonome.',
  'recovery_success_advice_login' => 'Identifikohuni si admin dhe ndrysho parametrat e bridge ose aktivizo përsëri integrimin e forumit.',
  'goto_login' => 'Shko tek faqja e identifikimit',
  'goto_bridgemgr' => 'Shko tek drejtimi i bridge',
  'recovery_failure_title' => 'Autorizim i dështuar',
  'recovery_failure_content' => 'Ju keni paraqitur të dhëna të gabuara. Ju duhet të paraqisni të dhënat për admin të versionit autonom (përgjithësishtë të dhënat që ju keni futur kur keni instaluar Coppermine).',
  'try_again' => 'provoni përsëri',
  'recovery_wait_title' => 'Koha që duhet të prisni, nuk ka kaluar',
  'recovery_wait_content' => 'Për arsye sigurie, programi nuk lejon të identifikime të dështuara në një kohë të shkurtër, pra ju duhet të prisni pak deri sa të lejoheni përsëri për tu identifikuar.',
  'wait' => 'prisni',
  'create_redir_file' => 'Krijoni një skedar të ridrejtimit (rekomandohet)',
  'create_redir_file_explanation' => 'Për ti ridrejtuar vizitorët tek Coppermine sapo ata identifikohen tek forumi, ju keni nevojë të krijoni një skedar ridrejtimi brenda dosjes së forumit. Nëse ju zgjidhni një opsion të tillë, brige e bënë një gjë të tillë automatikisht për ju,ose u jep kodin të gatshëm dhe ajo që ju duhet të bëni është ta kopjoni kodin dhe ta ngjisni tek skedari.',
  'browse' => 'bridh',
);

// ------------------------------------------------------------------------- //
// File calendar.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('CALENDAR_PHP')) $lang_calendar_php = array(
  'title' => 'Kalendar', //cpg1.4
  'close' => 'Mbylle', //cpg1.4
  'clear_date' => 'Fshi datën', //cpg1.4
);


// File catmgr.php

// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
        'miss_param' => 'Parameters required for \'%s\'operation not supplied !',
        'unknown_cat' => 'Kategoria e zgjedhur nuk ekziston në bazën e të dhënave',
        'usergal_cat_ro' => 'Kategoria e përdoruesve nuk mund të fshihet !',
        'manage_cat' => 'Mirëmbaj kategoritë',
        'confirm_delete' => 'Jeni i sigurtë që doni të fshini këtë kategori',
        'category' => 'Kategori',
        'operations' => 'Veprime',
        'move_into' => 'Zhvendos tek',
        'update_create' => 'Përditësim/Krijim kategorie',
        'parent_cat' => 'Kategoria rrënjë',
        'cat_title' => 'Titulli i kategorisë',
	'cat_thumb' => 'Kategori e tablove', //cpg1.3.0
        'cat_desc' => 'Përshkrimi i kategorisë',
	'categories_alpha_sort' => 'Renditje e albumeve sipas rendit alfabetik (në vend të renditjes sipas futjes)', //cpg1.4
  	'save_cfg' => 'Ruaj konfigurimin', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File admin.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('ADMIN_PHP')) $lang_admin_php = array(
  	'title' => 'Konfigurimi i galerisë', //cpg1.4
  	'manage_exif' => 'Rregullimi i afishimit të exifeve (informacionit të imazheve)', //cpg1.4
  	'manage_plugins' => 'Rregullimi pluginet', //cpg1.4
  	'manage_keyword' => 'Rregullimi i fjelë-kyçeve', //cpg1.4
        'restore_cfg' => 'Rikthe konfigurimin origjinal',
        'save_cfg' => 'Ruaj një konfigurim të ri',
        'notes' => 'Shënime',
        'info' => 'Informacion',
        'upd_success' => 'Konfigurimi Coppermine u përditësua',
        'restore_success' => 'Konfigurimi Coppermine origjinal u rikthye',
        'name_a' => 'Emra në ngjitje',
        'name_d' => 'Emra në zbritje',
        'title_a' => 'Titujt në ngjitje', 
        'title_d' => 'Titujt në zbritje', 
        'date_a' => 'Data në ngjitje',
        'date_d' => 'Data në zbritje',
	'pos_a' => 'Pozicioni në ngjitje', //cpg1.4
  	'pos_d' => 'Pozicioni në zbritje', //cpg1.4
        'th_any' => 'Maksimumi i dukshëm',
        'th_ht' => 'Lartësia',
        'th_wd' => 'Gjerësia',
	'label' => 'emërtim', //cpg1.3.0
        'item' => 'listë', //cpg1.3.0
        'debug_everyone' => 'të gjithë', //cpg1.3.0
        'debug_admin' => 'Vetëm Administratorët', //cpg1.3.0
	'no_logs'=> 'Çaktivizuar', //cpg1.4
  	'log_normal'=> 'Normal', //cpg1.4
  	'log_all' => 'Të gjithë', //cpg1.4
  	'view_logs' => 'Shiko identifikimet', //cpg1.4
  	'click_expand' => 'Kliko tek emri i një sektori për ta shfaqur', //cpg1.4
  	'expand_all' => 'Shfaq të gjitha', //cpg1.4
  	'notice1' => '(*) Këto parametra nuk duhet të ndryshohen nëse ju keni imazhe tek baza juaj e të dhënave.', //cpg1.4 - (relocated)
  	'notice2' => '(**) Kur ndryshoni parametra të tilla, vetëm skedarët e fotur pas këtij ndryshimi do të preken, pra është e këshillueshme  që ky parametër të mos ndryshohet nëse keni tashmë imazhe në bazën tuaj të të dhënave. Sidoqoftë ju mund të zbatoni ndryshimet tek skedarët ekzistues me anë të &quot;<a href="util.php">mjeteve të administrimit</a> (ridimensionim i fotografive)&quot; nga menuja e administratorit.', //cpg1.4 - (relocated)
  	'notice3' => '(***) Të gjithë regjistrimet e skedarëve janë bërë në anglisht.', //cpg1.4 - (relocated)
  	'bbs_disabled' => 'Funksion i çaktivizuar nëse përdorni kodet bb', //cpg1.4
  	'auto_resize_everyone' => 'Gjithëkush', //cpg1.4
  	'auto_resize_user' => 'Vetëm përdoruesit', //cpg1.4
  	'ascending' => 'Duke u ngjitur', //cpg1.4
  	'descending' => 'Duke zbritur', //cpg1.4
);

if (defined('ADMIN_PHP')) $lang_admin_data = array(
  'Parametra të përgjithëshme',
  array('Emri i galerisë', 'gallery_name', 0, 'f=index.htm&amp;as=admin_general_name&amp;ae=admin_general_name_end'), //cpg1.4
  array('Përshkrimi i galerisë', 'gallery_description', 0, 'f=index.htm&amp;as=admin_general_description&amp;ae=admin_general_description_end'), //cpg1.4
  array('E-maili i administratorit të galerisë', 'gallery_admin_email', 0, 'f=index.htm&amp;as=admin_general_email&amp;ae=admin_general_email_end'), //cpg1.4
  array('Adresa URL e repertuarit të galerisë suaj coppermine (jo \'index.php\' ose e ngjashme me të në fund)', 'ecards_more_pic_target', 0, 'f=index.htm&amp;as=admin_general_coppermine-url&amp;ae=admin_general_coppermine-url_end'), //cpg1.4
  array('Adresa URL e faqes suaj kryesore', 'home_target', 0, 'f=index.htm&amp;as=admin_general_home-url&amp;ae=admin_general_home-url_end'), //cpg1.4
  array('Lejo ZIP-shkarkimin e favoriteve', 'enable_zipdownload', 1, 'f=index.htm&amp;as=admin_general_zip-download&amp;ae=admin_general_zip-download_end'), //cpg1.4
  array('Diferenca e orës lokale në raport me orën e Greenwich (Ora tani është: ' . localised_date(-1, $comment_date_fmt) . ')','time_offset',0, 'f=index.htm&amp;as=admin_general_time-offset&amp;ae=admin_general_time-offset_end&amp;top=1'), //cpg1.4
  array('Aktivizo fjalë-kalimet e kriptuara (nuk mund të fshihen)','enable_encrypted_passwords',1, 'f=index.htm&amp;as=admin_general_encrypt_password_start&amp;ae=admin_general_encrypt_password_end&amp;top=1'), // cpg 1.4
  array('Aktivizo ikonat e rubrikës "ndihmë" (ndihma ofrohet veç në anglisht)','enable_help',9, 'f=index.htm&amp;as=admin_general_help&amp;ae=admin_general_help_end'), //cpg1.4
  array('Aktivizo fjalë-kyçe të klikueshme në kërkime','clickable_keyword_search',14, 'f=index.htm&amp;as=admin_general_keywords_start&amp;ae=admin_general_keywords_end'), //cpg1.4
  array('Aktivizo plugins', 'enable_plugins', 12, 'f=index.htm&amp;as=admin_general_enable-plugins&amp;ae=admin_general_enable-plugins_end'),  //cpg1.4
  array('Lejo ndalimin e adresave IP private', 'ban_private_ip', 1,  'f=index.htm&amp;as=admin_general_private-ip&amp;ae=admin_general_private-ip_end'), //cpg1.4
  array('Faqje shkarkime me grupe', 'browse_batch_add', 1, 'f=index.htm&amp;as=admin_general_browsable_batch_add&amp;ae=admin_general_browsable_batch_add_end'), //cpg1.4

  'Gjuha, &amp; Parametrat e shkronjave',
  array('Gjuha', 'lang', 5, 'f=index.htm&amp;as=admin_language_language&amp;ae=admin_language_language_end'), //cpg1.4
  array('Të jepet shprehja në anglisht nëse nuk gjendet e përkthyer?', 'language_fallback', 1, 'f=index.htm&amp;as=admin_language_fallback&amp;ae=admin_language_fallback_end'), //cpg1.4
  array('Dekodimi i shkronjave', 'charset', 4, 'f=index.htm&amp;as=admin_language_charset&amp;ae=admin_language_charset_end'), //cpg1.4
  array('Shfaq listën e gjuhëve', 'language_list', 1, 'f=index.htm&amp;as=admin_language_list&amp;ae=admin_language_list_end'), //cpg1.4
  array('shfaq flamujët e gjuhëve', 'language_flags', 8, 'f=index.htm&amp;as=admin_language_flags&amp;ae=admin_language_flags_end&amp;top=1'), //cpg1.4
  array('Shfaq &quot;rivendos&quot; tek përzgjedhja e gjuhëve', 'language_reset', 1, 'f=index.htm&amp;as=admin_language_reset&amp;ae=admin_language_reset_end&amp;top=1'), //cpg1.4
  //array('Shfaq paraardhëse/pasardhëse tek faqja', 'previous_next_tab', 1), //cpg1.4

  'Parametrat e temave',
  array('Tema', 'theme', 6, 'f=index.htm&amp;as=admin_theme_theme&amp;ae=admin_theme_theme_end'), //cpg1.4
  array('Shfaq listën e temave', 'theme_list', 1, 'f=index.htm&amp;as=admin_theme_theme_list&amp;ae=admin_theme_theme_list_end'), //cpg1.4
  array('Shfaq &quot;rivendos&quot; tek përzgjedhja e temave', 'theme_reset', 1, 'f=index.htm&amp;as=admin_theme_theme_reset&amp;ae=admin_theme_theme_reset_end'), //cpg1.4
  array('Shfaq FAQ', 'display_faq', 1, 'f=index.htm&amp;as=admin_theme_faq&amp;ae=admin_theme_faq_end'), //cpg1.4
  array('Emri i menusë së personalizuar', 'custom_lnk_name', 0,'f=index.htm&amp;as=admin_theme_custom_lnk_name&amp;ae=admin_theme_custom_lnk_name_end'), //cpg1.4
  array('Adresa URL e menysë së personalizuar', 'custom_lnk_url', 0,'f=index.htm&amp;as=admin_language_custom_lnk_url&amp;ae=admin_language_custom_lnk_url_end'), //cpg1.4
  array('Shfaq ndihmën bbcode', 'show_bbcode_help', 1, 'f=index.htm&amp;as=admin_theme_bbcode&amp;ae=admin_theme_bbcode_end&amp;top=1'), //cpg1.4
  array('Shfaq butonat që tregojnë respektimin e normave XHTML dhe CSS për temat që e përmbushin një gjë të tillë','vanity_block',1, 'f=index.htm&amp;as=vanity_block&amp;ae=vanity_block_end'), //cpg1.4
  array('Rruga për tek një krye faqe e personalizuar', 'custom_header_path', 0, 'f=index.htm&amp;as=admin_theme_include_path_start&amp;ae=admin_theme_include_path_end'), //cpg1.4
  array('Rruga për tek një fund faqe e personalizuar', 'custom_footer_path', 0, 'f=index.htm&amp;as=admin_theme_include_path_start&amp;ae=admin_theme_include_path_end'), //cpg1.4

  'Afishimi i listës së albumeve',
  array('Madhësia e tablos kryesore (piksel ose %)', 'main_table_width', 0, 'f=index.htm&amp;as=admin_album_table-width&amp;ae=admin_album_table-width_end'), //cpg1.4
  array('Numri i niveleve të kategorive që duhet të shfaqen', 'subcat_level', 0, 'f=index.htm&amp;as=admin_album_category-levels&amp;ae=admin_album_category-levels_end'), //cpg1.4
  array('Numri i albume për tu shfaqur', 'albums_per_page', 0, 'f=index.htm&amp;as=admin_album_number&amp;ae=admin_album_number_end'), //cpg1.4
  array('Numri i kolonave për listën e albumeve', 'album_list_cols', 0, 'f=index.htm&amp;as=admin_album_columns&amp;ae=admin_album_columns_end'), //cpg1.4
  array('Madhësia e tablove në piksel', 'alb_list_thumb_size', 0, 'f=index.htm&amp;as=admin_album_thumbnail-size&amp;ae=admin_album_thumbnail-size_end'), //cpg1.4
  array('Përmbajtja e faqes kryesoree', 'main_page_layout', 0, 'f=index.htm&amp;as=admin_album_list_content&amp;ae=admin_album_list_content_end'), //cpg1.4
  array('Shfaqja e tablove të albumit të nivelit të parë me kategoritë','first_level',1, 'f=index.htm&amp;as=admin_album_first-level_thumbs&amp;ae=admin_album_first-level_thumbs_end'), //cpg1.4
  array('Rendit kategorit sipas rendit alfabetik (në vend të renditjes sipas datës së futjes)','categories_alpha_sort',1, 'f=index.htm&amp;as=admin_album_list_alphasort_start&amp;ae=admin_album_list_alphasort_end'), //cpg1.4
  array('Shfaq numrin e skedareve të lidhur','link_pic_count',1, 'f=index.htm&amp;as=admin_album_linked_files_start&amp;ae=admin_album_linked_files_end'), //cpg1.4

  'Shfaqja e tablove',
  array('Numri i kolonave ne faqen e tablove', 'thumbcols', 0, 'f=index.htm&amp;as=admin_thumbnail_columns&amp;ae=admin_thumbnail_columns_end'), //cpg1.4
  array('Numri rreshtave ne faqen e tablove', 'thumbrows', 0, 'f=index.htm&amp;as=admin_thumbnail_rows&amp;ae=admin_thumbnail_rows_end'), //cpg1.4
  array('MMaksimumi i tablove për tu shfaqur', 'max_tabs', 10, 'f=index.htm&amp;as=admin_thumbnail_tabs&amp;ae=admin_thumbnail_tabs_end'), //cpg1.4
  array('Shfaqni legjendën e fotografisë (përveç titullit) poshtë tablosë', 'caption_in_thumbview', 1, 'f=index.htm&amp;as=admin_thumbnail_display_caption&amp;ae=admin_thumbnail_display_caption_end'), //cpg1.4
  array('Shfaqni numrin e shikimeve poshtë tablos', 'views_in_thumbview', 1, 'f=index.htm&amp;as=admin_thumbnail_display_views&amp;ae=admin_thumbnail_display_views_end'), //cpg1.4
  array('Shfaqni numrin e komenteve poshtë tablos', 'display_comment_count', 1, 'f=index.htm&amp;as=admin_thumbnail_display_comments&amp;ae=admin_thumbnail_display_comments_end'), //cpg1.4
  array('Shfaqni emrin e ngarkuesit poshtë tablos', 'display_uploader', 1, 'f=index.htm&amp;as=admin_thumbnail_display_uploader&amp;ae=admin_thumbnail_display_uploader_end'), //cpg1.4
  //array('Display name of admin uploaders below the thumbnail', 'display_admin_uploader', 1, 'f=index.htm&amp;as=admin_thumbnail_display_admin_uploader&amp;ae=admin_thumbnail_display_admin_uploader_end'), //cpg1.4
  array('Shfaqni emrin e skedarit poshtë tablos', 'display_filename', 1, 'f=index.htm&amp;as=admin_thumbnail_display_filename&amp;ae=admin_thumbnail_display_filename_end'), //cpg1.4
  array('Shfaqni përshkrimin tablos', 'alb_desc_thumb', 1, 'f=index.htm&amp;as=admin_thumbnail_display_description&amp;ae=admin_thumbnail_display_description_end'), //cpg1.4
  array('Renditje paraprake për skedarët', 'default_sort_order', 3, 'f=index.htm&amp;as=admin_thumbnail_default_sortorder&amp;ae=admin_thumbnail_default_sortorder_end'), //cpg1.4
  array('Minimumi i numrit të votave për tu shfaqur tek lista \'më të vlerësuarat\'', 'min_votes_for_rating', 0, 'f=index.htm&amp;as=admin_thumbnail_minimum_votes&amp;ae=admin_thumbnail_minimum_votes_end'), //cpg1.4

  'Pamja e imazheve', //cpg1.4
  array('Gjerësia e tabelës ku do të shfaqet fotografia (në piksel apo %)', 'picture_table_width', 0, 'f=index.htm&amp;as=admin_image_comment_table-width&amp;ae=admin_image_comment_table-width_end'), //cpg1.4
  array('Informacioni i fotografisë është i dukshëm paraprakishtë', 'display_pic_info', 1, 'f=index.htm&amp;as=admin_image_comment_info_visible&amp;ae=admin_image_comment_info_visible_end'), //cpg1.4
  array('Maksimumi i gjatësisë së përshkrimit të fotografisë', 'max_img_desc_length', 0, 'f=index.htm&amp;as=admin_image_comment_descr_length&amp;ae=admin_image_comment_descr_length_end'), //cpg1.4
  array('Maksimumi i gërmave në një fjalë', 'max_com_wlength', 0, 'f=index.htm&amp;as=admin_image_comment_chars_per_word&amp;ae=admin_image_comment_chars_per_word_end'), //cpg1.4
  array('Shfaqni negativin e filmit', 'display_film_strip', 1, 'f=index.htm&amp;as=admin_image_comment_filmstrip_toggle&amp;ae=admin_image_comment_filmstrip_toggle_end'), //cpg1.4
  array('Afisho emrin e skedarit poshtë negativit', 'display_film_strip_filename', 1, 'f=index.htm&amp;as=admin_image_comment_display_film_strip_filename&amp;ae=admin_image_comment_display_film_strip_filename_end'), //cpg1.4
  array('Numri i tablive në një negativ', 'max_film_strip_items', 0, 'f=index.htm&amp;as=admin_image_comment_filmstrip_number&amp;ae=admin_image_comment_filmstrip_number_end'), //cpg1.4
  array('intervali i slideshow në milisekonda(1 second = 1000 milliseconds)', 'slideshow_interval', 0, 'f=index.htm&amp;as=admin_image_comment_slideshow_interval&amp;ae=admin_image_comment_slideshow_interval_end'), //cpg1.4

  'Parametrat e komenteve', //cpg1.4
  array('Filtroni fjalët e këqia në komente', 'filter_bad_words', 1, 'f=index.htm&amp;as=admin_image_comment_bad_words&amp;ae=admin_image_comment_bad_words_end'), //cpg1.4
  array('Lejoni buzëqeshjet në komente', 'enable_smilies', 1, 'f=index.htm&amp;as=admin_image_comment_smilies&amp;ae=admin_image_comment_smilies_end'), //cpg1.4
  array('Lejoni komente të njëpasnjëshme tek e njëjta fotografi nga i njëjti përdorues(çaktivizo mbrojtjen nga përmbytjet)', 'disable_comment_flood_protect', 1, 'f=index.htm&amp;as=admin_image_comment_flood&amp;ae=admin_image_comment_flood_end'), //cpg1.4
  array('Maksimumi i linjave në një koment', 'max_com_lines', 0, 'f=index.htm&amp;as=admin_image_comment_lines&amp;ae=admin_image_comment_lines_end'), //cpg1.4
  array('Maksimumi i gjatësisë së një komenti', 'max_com_size', 0, 'f=index.htm&amp;as=admin_image_comment_length&amp;ae=admin_image_comment_length_end'), //cpg1.4
  array('Njofto admin për komentet nëpërmjet e-mail', 'email_comment_notification', 1, 'f=index.htm&amp;as=admin_image_comment_admin_notify&amp;ae=admin_image_comment_admin_notify_end'), //cpg1.4
  array('Vendosi komentet sipas renditjes', 'comments_sort_descending', 17, 'f=index.htm&amp;as=admin_comment_sort_start&amp;ae=admin_comment_sort_end'), //cpg1.4
  array('Prefiksi për komentet nga autorë anonimë', 'comments_anon_pfx', 0, 'f=index.htm&amp;as=comments_anon_pfx&amp;ae=comments_anon_pfx_end'), //cpg1.4
  
  'Parametrat e skedareve dhe tablove',
  array('Cilësia për skedarët JPEG', 'jpeg_qual', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_jpeg_quality&amp;ae=admin_picture_thumbnail_jpeg_quality_end'), //cpg1.4
  array('Përmasat maksimale të një tabloje <a href="#notice2" class="clickable_option">**</a>', 'thumb_width', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max-dimension&amp;ae=admin_picture_thumbnail_max-dimension_end'), //cpg1.4
  array('Përdor përmasat ( gjerësi ose lartësi ose përmasat  maksimale për tablotë ) <a href="#notice2" class="clickable_option">**</a>', 'thumb_use', 7, 'f=index.htm&amp;as=admin_picture_thumbnail_use-dimension&amp;ae=admin_picture_thumbnail_use-dimension_end'), //cpg1.4
  array('Krijoni fotografi ndërmjetëse','make_intermediate',1, 'f=index.htm&amp;as=admin_picture_thumbnail_intermediate_toggle&amp;ae=admin_picture_thumbnail_intermediate_toggle_end'), //cpg1.4
  array('Maksimumi i gjerësisë dhe lartësisë së një fotografie/video ndërmjetëse <a href="#notice2" class="clickable_option">**</a>', 'picture_width', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_intermediate_dimension&amp;ae=admin_picture_thumbnail_intermediate_dimension_end'), //cpg1.4
  array('Maksimumi i skedarëve për tu ngarkuar (KB)', 'max_upl_size', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max_upload_size&amp;ae=admin_picture_thumbnail_max_upload_size_end'), //cpg1.4
  array('Maksimumi i gjerësisë dhe lartësisë së fotove/videove për tu ngarkuar (piksele)'),
  array('Ridimensionim automatik i imazheve që janë më të gjera ose më të larta', 'auto_resize', 16, 'f=index.htm&amp;as=admin_picture_thumbnail_auto-resize&amp;ae=admin_picture_thumbnail_auto-resize_end'), //cpg1.4

  'Parametrat e avncuara të dosjeve dhe tablove',
  array('Albumet mund të jenë privatë (Kujdes: nëse ju kaloni nga \'po\' në \'jo\' çdo album privat i tanishëm do të bëhet publik)', 'allow_private_albums', 1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_private_toggle&amp;ae=admin_picture_thumb_advanced_private_toggle_end'), //cpg1.4
  array('Shfaq ikonën e albumit privat për përdoruesit që nuk jnaë në linjë','show_private',1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_private_icon_show&amp;ae=admin_picture_thumb_advanced_private_icon_show_end'), //cpg1.4
  array('Karaktere të ndaluara për emrin e skedarit', 'forbiden_fname_char',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_filename_forbidden_chars&amp;ae=admin_picture_thumb_advanced_filename_forbidden_chars_end'), //cpg1.4
  //array('Ekstensionet e lejuara për skedaret e ngarkuara', 'allowed_file_extensions',0, 'f=index.htm&amp;as=&amp;ae=_end'), //cpg1.4
  array('Llojet e imazheve që lejohen', 'allowed_img_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_pic_extensions&amp;ae=admin_picture_thumb_advanced_pic_extensions_end'), //cpg1.4
  array('Llojet e filmave që lejohen', 'allowed_mov_types',0, 'f=index.htm&amp;as=admin_thumbs_advanced_movie&amp;ae=admin_thumbs_advanced_movie_end'), //cpg1.4
  array('Movie Playback Autostart', 'media_autostart',1, 'f=index.htm&amp;as=admin_movie_autoplay&amp;ae=admin_movie_autoplay_end'), //cpg1.4
  array('Llojet e audio që lejohen', 'allowed_snd_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_audio_extensions&amp;ae=admin_picture_thumb_advanced_audio_extensions_end'), //cpg1.4
  array('Llojet e dokumentave që lejohen', 'allowed_doc_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_doc_extensions&amp;ae=admin_picture_thumb_advanced_doc_extensions_end'), //cpg1.4
  array('Mënyra e ridimensionimit të imazheve','thumb_method',2, 'f=index.htm&amp;as=admin_picture_thumb_advanced_resize_method&amp;ae=admin_picture_thumb_advanced_resize_method_end'), //cpg1.4
  array('Rruga për tek mjeti i  \'konvertimit\'ImageMagick  (shembull /usr/bin/X11/)', 'impath', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_im_path&amp;ae=admin_picture_thumb_advanced_im_path_end'), //cpg1.4
  //array('Llojet e imazheve të lejuara (të vlefshme vetëm për ImageMagick)', 'allowed_img_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_allowed_imagetypes&amp;ae=admin_picture_thumb_advanced_allowed_imagetypes_end'), //cpg1.4
  array('Opsionete komandave për ImageMagick', 'im_options', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_im_commandline&amp;ae=admin_picture_thumb_advanced_im_commandline_end'), //cpg1.4
  array('Lexim i të dhënave EXIF në skedarët JPEG', 'read_exif_data', 13, 'f=index.htm&amp;as=admin_picture_thumb_advanced_exif&amp;ae=admin_picture_thumb_advanced_exif_end'), //cpg1.4
  array('Lexim i të dhënave IPTC tek skedarët JPEG', 'read_iptc_data', 1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_iptc&amp;ae=admin_picture_thumb_advanced_iptc_end'), //cpg1.4
  array('Repertori i albumit <a href="#notice1" class="clickable_option">*</a>', 'fullpath', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_albums_dir&amp;ae=admin_picture_thumb_advanced_albums_dir_end'), //cpg1.4
  array('Repertori për skedarët e përdoruesve <a href="#notice1" class="clickable_option">*</a>', 'userpics', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_userpics_dir&amp;ae=admin_picture_thumb_advanced_userpics_dir_end'), //cpg1.4
  array('Prefiksi për fotografitë ndërmjetëse <a href="#notice1" class="clickable_option">*</a>', 'normal_pfx', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_intermediate_prefix&amp;ae=admin_picture_thumb_advanced_intermediate_prefix_end'), //cpg1.4
  array('Prefiksi për tablotë <a href="#notice1" class="clickable_option">*</a>', 'thumb_pfx', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_thumbs_prefix&amp;ae=admin_picture_thumb_advanced_thumbs_prefix_end'), //cpg1.4
  array('Model paraprak për repertorët mode for directories', 'default_dir_mode', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_chmod_folder&amp;ae=admin_picture_thumb_advanced_chmod_folder_end'), //cpg1.4
  array('Model paraprak për skedarët', 'default_file_mode', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_chmod_files&amp;ae=admin_picture_thumb_advanced_chmod_files_end'), //cpg1.4

  'Parametrat e përdoruesve',
  array('Lejo regjistrimin e përdoruesve të rinjë', 'allow_user_registration', 1, 'f=index.htm&amp;as=admin_allow_registration&amp;ae=admin_allow_registration_end'), //cpg1.4
  array('Lejo hyrje e përdoruesve të paidentifikuar (vizitor ose anonimë)', 'allow_unlogged_access', 1, 'f=index.htm&amp;as=admin_allow_unlogged_access&amp;ae=admin_allow_unlogged_access_end'), //cpg1.4
  array('Regjistrimi i përdoruesve nëpërmjet verifikim të e-mail', 'reg_requires_valid_email', 1, 'f=index.htm&amp;as=admin_registration_verify&amp;ae=admin_registration_verify_end'), //cpg1.4
  array('Njoftim i admin për regjistrim përdoruesish nëpërmjet e-mail', 'reg_notify_admin_email', 1, 'f=index.htm&amp;as=admin_registration_notify&amp;ae=admin_registration_notify_end'), //cpg1.4
  array('Aktivizim i regjistrimeve nga administratori', 'admin_activation', 1, 'f=index.htm&amp;as=admin_activation&amp;ae=admin_activation_end'),  //cpg1.4
  array('Lejo dy përdorues të kenë të njëjtën adresë elektronike', 'allow_duplicate_emails_addr', 1, 'f=index.htm&amp;as=admin_allow_duplicate_emails_addr&amp;ae=admin_allow_duplicate_emails_addr_end'), //cpg1.4
  array('Njofto administratorin nëse ngarkime përdoruesish presin për miratim', 'upl_notify_admin_email', 1, 'f=index.htm&amp;as=admin_approval_notify&amp;ae=admin_approval_notify_end'), //cpg1.4
  array('Lejo përdoruesit e identifikuar të shikojnë listën e përdoruesve', 'allow_memberlist', 1, 'f=index.htm&amp;as=admin_user_memberlist&amp;ae=admin_user_memberlist_end'), //cpg1.4
  array('Lejo përdoruesit të ndërrojnë adresën e tyre e-mail tek profili', 'allow_email_change', 1, 'f=index.htm&amp;as=admin_user_allow_email_change&amp;ae=admin_user_allow_email_change_end'), //cpg1.4
  array('Lejo përdoruesit të kenë kontroll të plotë mbi fotografitë e tyre në albumet publike', 'users_can_edit_pics', 1, 'f=index.htm&amp;as=admin_user_editpics_public_start&amp;ae=admin_user_editpics_public_end'), //cpg1.4
  array('Numri i identifikimeve të falimentuara gjerë një ndalim të përkohshëm (për të evituer sulmet e keqbërsve)', 'login_threshold', 0, 'f=index.htm&amp;as=admin_user_login_start&amp;ae=admin_user_login_end'), //cpg1.4
  array('Kohëzgjatja e ndalimit të përkohshëm pas identifikimeve të dështuara', 'login_expiry', 0, 'f=index.htm&amp;as=admin_user_login_start&amp;ae=admin_user_login_end'), //cpg1.4
  array('Aktivizo "Raporto tek administratori"', 'report_post', 1, 'f=index.htm&amp;as=admin_user_enable_report&amp;ae=admin_user_enable_report_end'),  //cpg1.4

// custom profile fields,  //cpg1.4
  ' Fusha të personalizuara për profilin e përdoruesve (lëreni bosh nëse nuk përdoret).
  Përdorni fushën 6 për tekste të gjata, si biografi etj', //cpg1.4
  array('Emri i profilit 1', 'user_profile1_name', 0, 'f=index.htm&amp;as=admin_custom&amp;ae=admin_custom_end'), //cpg1.4
  array('Emri i profilit 2', 'user_profile2_name', 0), //cpg1.4
  array('Emri i profilit 3', 'user_profile3_name', 0), //cpg1.4
  array('Emri i profilit 4', 'user_profile4_name', 0), //cpg1.4
  array('Emri i profilit 5', 'user_profile5_name', 0), //cpg1.4
  array('Emri i profilit 6', 'user_profile6_name', 0), //cpg1.4

  'Fusha të personalizuara për përshkrimin e imazheve (lëreni bosh nëse nuk përdoret)',
  array('Emri i fushës 1', 'user_field1_name', 0, 'f=index.htm&amp;as=admin_custom_image&amp;ae=admin_custom_image_end'), //cpg1.4
  array('Emri i fushës 2', 'user_field2_name', 0),
  array('Emri i fushës 3', 'user_field3_name', 0),
  array('Emri i fushës 4', 'user_field4_name', 0),

  'Parametrat e Cookies',
  array('Emri i Cookie', 'cookie_name', 0, 'f=index.htm&amp;as=admin_cookie_name&amp;ae=admin_cookie_name_end'), //cpg1.4
  array('Rruga për tek Cookie', 'cookie_path', 0, 'f=index.htm&amp;as=admin_cookie_path&amp;ae=admin_cookie_path_end'), //cpg1.4

  'Papametrat e emailit (normalisht asnjë gjë nuk duhet të ndryshohet këtu; lëreni bosh të gjitha fushat nëse nuk jeni i sigurt)', //cpg1.4
  array('Hosti SMTP (nëse lihet bosh do të përdoret programi sendmail)', 'smtp_host', 0, 'f=index.htm&amp;as=admin_email&amp;ae=admin_email_end'), //cpg1.4
  array('Emri i përdoruesit SMTP', 'smtp_username', 0), //cpg1.4
  array('Fjalë-kalimi i SMTP', 'smtp_password', 0), //cpg1.4

  'Identifikime dhe statistika', //cpg1.4
  array('Mënyra e identifikimit <a href="#notice3" class="clickable_option">***</a>', 'log_mode', 11, 'f=index.htm&amp;as=admin_logging_log_mode&amp;ae=admin_logging_log_mode_end'), //cpg1.4
  array('Regjistrimi i kartolinave të dërguara', 'log_ecards', 1, 'f=index.htm&amp;as=admin_general_log_ecards&amp;ae=admin_general_log_ecards_end'), //cpg1.4
  array('Regjistrimi i statistikave të votave','vote_details',1, 'f=index.htm&amp;as=admin_logging_votedetails&amp;ae=admin_logging_votedetails_end'), //cpg1.4
  array('Regjistrimi i statistikave të imazheve më të votuara','hit_details',1, 'f=index.htm&amp;as=admin_logging_hitdetails&amp;ae=admin_logging_hitdetails_end'), //cpg1.4

  'Parametrat e mirëmbajtjes', //cpg1.4
  array('Aktivizo mënyrën debug', 'debug_mode', 9, 'f=index.htm&amp;as=debug_mode&amp;ae=debug_mode_end'), //cpg1.4
  array('Shfaq njoftimet në mënyrën debug', 'debug_notice', 1, 'f=index.htm&amp;as=admin_misc_debug_notices&amp;ae=admin_misc_debug_notices_end'), //cpg1.4
  array('Albumi është jashtë ligne', 'offline', 1, 'f=index.htm&amp;as=admin_general_offline&amp;ae=admin_general_offline_end'), //cpg1.4

);
// ------------------------------------------------------------------------- //

// File db_ecard.php //cpg1.3.0

// ------------------------------------------------------------------------- //


if (defined('DB_ECARD_PHP')) $lang_db_ecard_php = array(
  'title' => 'Dërgo kartolina elektronike', //cpg1.3.0
  'ecard_sender' => 'Dërguesi', //cpg1.3.0
  'ecard_recipient' => 'Marrësi', //cpg1.3.0
  'ecard_date' => 'Datë', //cpg1.3.0
  'ecard_display' => 'Shfaq kartolinën', //cpg1.3.0
  'ecard_name' => 'Emri', //cpg1.3.0
  'ecard_email' => 'Emaili', //cpg1.3.0
  'ecard_ip' => 'IP #', //cpg1.3.0
  'ecard_ascending' => 'Duke u ngjitur', //cpg1.3.0
  'ecard_descending' => 'Duke zbritur', //cpg1.3.0
  'ecard_sorted' => 'Shpërndarë', //cpg1.3.0
  'ecard_by_date' => 'sipas datës', //cpg1.3.0
  'ecard_by_sender_name' => 'Sipas emrit të dërguesit', //cpg1.3.0
  'ecard_by_sender_email' => 'sipas emailit të dërguesit', //cpg1.3.0
  'ecard_by_sender_ip' => 'Sipas IP së dërguesit', //cpg1.3.0
  'ecard_by_recipient_name' => 'sipas emrit të marrësit', //cpg1.3.0
  'ecard_by_recipient_email' => 'sipas emailit të marrsit', //cpg1.3.0
  'ecard_number' => 'Shfaq regjistrimet %s deri në %s nga %s', //cpg1.3.0
  'ecard_goto_page' => 'shko tek faqja', //cpg1.3.0
  'ecard_records_per_page' => 'Regjistrime në faqe', //cpg1.3.0
  'check_all' => 'zgjidhi të gjitha', //cpg1.3.0
  'uncheck_all' => 'Anulloi të gjitha', //cpg1.3.0
  'ecards_delete_selected' => 'Fshi kartolinat e përzgjedhura', //cpg1.3.0
  'ecards_delete_confirm' => 'Jeni i sigurt që ju dëshironi ti fshini këto regjistrime ? Shënoni tek kutija e përzgjedhjes!', //cpg1.3.0
  'ecards_delete_sure' => 'Jam i sigurt', //cpg1.3.0
);

// ------------------------------------------------------------------------- //

// File db_input.php

// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
  'empty_name_or_com' => 'Ju duhet të shkruani emrin tuaj dhe një koment',
  'com_added' => 'Komenti juaj u regjistrua',
  'alb_need_title' => 'Ju duhet ti vini  një titull albumit !',
  'no_udp_needed' => 'Përditësimi është i panevojshëm.',
  'alb_updated' => 'Albumi u përditësua',
  'unknown_album' => 'Albumi i zgjedhur nuk ekziston ose juve nuk u lejohet të ngarkoni në të',
  'no_pic_uploaded' => 'Asnjë dokument nuk u ngarkua !<br /><br />Nëse ju keni zgjedhur një dokument për ta ngarkuar, verifiko nëse serverilejon ngarkimin e dokumentave...', //cpg1.3.0
  'err_mkdir' => 'E pamundur të krijohet repertori %s !',
  'dest_dir_ro' => 'Destinacioni i repertorit %s nuk është i shkrueshëm në skript !',
  'err_move' => 'E pamundur të lëvizet nga %s nga %s !',
  'err_fsize_too_large' => 'Madhësia e dokumentit që ju keni ngarkuar është shumë e madhe (maksimumi i lejuar është %s x %s) !', //cpg1.3.0
  'err_imgsize_too_large' => 'Madhësia e dokumentit që ju keni ngarkuar është shumë e madhe (maksimumi i lejuar është %s KB) !',
  'err_invalid_img' => 'Dokumenti që ju ngarkuat nuk ëshë një format i vlefshëm !',
  'allowed_img_types' => 'Ju mundeni  të ngarkoni vetëm  %s imazhe.',
  'err_insert_pic' => 'Dokumenti  \'%s\' nuk mund të futet në album ', //cpg1.3.0
  'upload_success' => 'Dokumenti juaj u ngarkua me sukses.<br /><br />Ai do të mundet të shihet vetëm pasi të aprovohet nga administratori.', //cpg1.3.0
  'notify_admin_email_subject' => '%s - Njoftim i ngarkimit', //cpg1.3.0
  'notify_admin_email_body' => 'Një fotografi është nga  %s e kërkon aprovimin tuaj. Vizitoni %s', //cpg1.3.0
  'info' => 'Informacion',
  'com_added' => 'Koment i shtuar',
  'alb_updated' => 'Album i përditësuar',
  'err_comment_empty' => 'Komenti juaj është bosh !',
  'err_invalid_fext' => 'Vetëm dokumentat që kanë ektensionet që vijojnë janë të lejuara : <br /><br />%s.',
  'no_flood' => 'Na vjenë keq por ju jeni tashme autori i komentit të fundit për këtë dokument.<br /><br />Editoni komentin që keni postuar nëse dëshironi ta modofikoni', //cpg1.3.0
  'redirect_msg' => 'Ju jeni duke u riorientuar.<br /><br /><br />Klikoni \'VAZHDONI\' nëse faqja nuk rifreskohet automatikisht ',
  'upl_success' => 'Dokumenti juaj u shtua me sukses', //cpg1.3.0
  'email_comment_subject' => 'Kement i postuar tek Coppermine Photo Gallery', //cpg1.3.0
  'email_comment_body' => 'Dikush ka postuar nje koment tek galleria juaj. Shikoje këtu', //cpg1.3.0
  'album_not_selected' => 'Album i pazgjedhur', //cpg1.4
  'com_author_error' => 'Një përdorues ka zgjedhur këtë pseudonim, identifikohuni ose zgjidhni një tjetër pseudonim', //cpg1.4
);

// ------------------------------------------------------------------------- //

// File delete.php

// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
        'caption' => 'Legjenda',
        'fs_pic' => 'Imazh me përnasat reale',
        'del_success' => 'I fshirë me sukses',
        'ns_pic' => 'Imazh me permasa normale',
        'err_del' => 'Nuk mund të fshihet',
        'thumb_pic' => 'tablo',
        'comment' => 'koment',
        'im_in_alb' => 'imazh në album',
		'alb_del_success' => 'Albumi &laquo;%s&raquo; u fshi', //cpg1.4
        'alb_mgr' => ' Manazheri i albumit',
        'err_invalid_data' => 'Të dhëna jo te vlefshme të marra në \'%s\'',
        'create_alb' => 'Duke krijuar albumin \'%s\'',
        'update_alb' => 'Duke përditësuar albumin \'%s\' me titull \'%s\' dhe indeks \'%s\'',
        'del_pic' => 'Fshi fotografinë',
        'del_alb' => 'Fshi albumin',
        'del_user' => 'Fshi përdorues',
        'err_unknown_user' => 'Përdoruesi i zgjedhur nuk ekziston !',
		'err_empty_groups' => 'Këtu nuk ka tabelë grupi ose tabela është bosh!', //cpg1.4
        'comment_deleted' => 'Komenti u fshi me sukses',
		'npic' => 'Fotografi', //cpg1.4
  		'pic_mgr' => 'Manipulues i fotografisë', //cpg1.4
  		'update_pic' => 'Përditësim i fotografisë \'%s\' me emër skedari \'%s\' dhe indeks \'%s\'', //cpg1.4
  		'username' => 'Emri i përdoruesit', //cpg1.4
  		'anonymized_comments' => '%s komente anonime', //cpg1.4
  		'anonymized_uploads' => '%s ngarkim publik anonim', //cpg1.4
  		'deleted_comments' => '%s komente të fshira', //cpg1.4
  		'deleted_uploads' => '%s ngarkime publike të fshira', //cpg1.4
  		'user_deleted' => 'user %s fshirë', //cpg1.4
  		'activate_user' => 'aktivisim përdoruesi', //cpg1.4
  		'user_already_active' => 'Llogaria ka qenë e aktivizuar', //cpg1.4
  		'activated' => 'E aktivizuar', //cpg1.4
  		'deactivate_user' => 'Çaktivizim përdoruesi', //cpg1.4
  		'user_already_inactive' => 'Llogaria ka qenë e çaktivizuar', //cpg1.4
  		'deactivated' => 'E çaktivizuar', //cpg1.4
  		'reset_password' => 'Ndërro fjalë-kalimin', //cpg1.4
  		'password_reset' => 'Fjalë-kalim i ndërruar në %s', //cpg1.4
 		'change_group' => 'Ndërro grupin kryesor', //cpg1.4
  		'change_group_to_group' => 'Ndryshim %s në %s', //cpg1.4
  		'add_group' => 'Shtim i një grupi dytësor', //cpg1.4
  		'add_group_to_group' => 'Shtim i përdoruesit  %s tek grupi %s. Ai është tashmë anëtar i  %s si kryesor dhe i grupit %s si anëtar grupi dytësor.', //cpg1.4
  		'status' => 'Statusi', //cpg1.4
);

// ------------------------------------------------------------------------- //

// File displayecard.php

// ------------------------------------------------------------------------- //
if (defined('DISPLAYECARD_PHP')) {

$lang_displayecard_php = array(
  'invalid_data' => 'të dhënat për ekartën që ju po përpiqeni të hyni janë korruptuar nga clienti juaj e-mail. Verifikoni që lidhja të jetë komplete.', //cpg1.4
);
}

// ------------------------------------------------------------------------- //

// File displayimage.php

// ------------------------------------------------------------------------- //

if (defined('DISPLAYIMAGE_PHP')){

$lang_display_image_php = array(
  'confirm_del' => 'Jeni i sigurtë që dëshironi të FSHINI këtë dokument ? \\nKomentet do të fshihen gjithashtu.', //js-alert //cpg1.3.0
  'del_pic' => 'FSHIJENI KËTË DOKUMENT', //cpg1.3.0
  'size' => '%s x %s piksele',
  'views' => '%s herë',
  'slideshow' => 'Slideshow',
  'stop_slideshow' => 'NDALO SLIDESHOW',
  'view_fs' => 'Kliko për të parë imezhin me permasa të plota',
  'edit_pic' => 'Editoni informacionin', //cpg1.3.0
  'crop_pic' => 'Retushoje', //cpg1.3.0
);
$lang_picinfo = array(
  'title' =>'Informacioni i dokumentit', //cpg1.3.0
  'Filename' => 'Emri i dokumentit',
  'Album name' => 'Emri i albumit',
  'Rating' => 'Vlerësimi (%s vota)',
  'Keywords' => 'Fjalë-kyç',
  'File Size' => 'Madhësia e dokumentit',
  'Date Added' => 'Data e shtimit', //cpg1.4
  'Dimensions' => 'Përmasat',
  'Displayed' => 'Displayed',
  'URL' => 'URL', //cpg1.4
  'Make' => 'Bërë', //cpg1.4
  'Model' => 'Modeli', //cpg1.4
  'DateTime' => 'Data Ora', //cpg1.4
  'DateTimeOriginal' => 'Data e bërjes', //cpg1.4
  'ISOSpeedRatings'=>'ISO', //cpg1.4
  'MaxApertureValue' => 'Hapja maksimale', //cpg1.4
  'FocalLength' => 'Gjatësia e Focal', //cpg1.4
  'Camera' => 'Aparat fotografik',
  'Date taken' => 'Data e fotografimit',
  'ISO'=>'ISO',
  'Aperture' => 'Hapje',
  'Exposure time' => 'Koha e ekspozimit',
  'Comment' => 'Koment',
  'addFav'=>'Shtoje tek favoritet', //cpg1.3.0
  'addFavPhrase'=>'Favorite', //cpg1.3.0
  'remFav'=>'Hiqe nga Favoritet', //cpg1.3.0
  'iptcTitle'=>'Titulli IPTC', //cpg1.3.0
  'iptcCopyright'=>' Copyright IPTC', //cpg1.3.0
  'iptcKeywords'=>'Fjalë-kuç IPTC', //cpg1.3.0
  'iptcCategory'=>'Kategori IPTC', //cpg1.3.0
  'iptcSubCategories'=>'Nën kategori IPTC ', //cpg1.3.0
  'ColorSpace' => 'Ngjyra e hapsirës', //cpg1.4
  'ExposureProgram' => 'Programi i ekspozimit', //cpg1.4
  'Flash' => 'Flash', //cpg1.4
  'MeteringMode' => 'Mënyra e matjes', //cpg1.4
  'ExposureTime' => 'Koha e ekspozimit', //cpg1.4
  'ExposureBiasValue' => 'Krijimi i ekspozimit', //cpg1.4
  'ImageDescription' => ' Përshkrimi i imazhit', //cpg1.4
  'Orientation' => 'Orientimi', //cpg1.4
  'xResolution' => 'Resolucioni X', //cpg1.4
  'yResolution' => 'Resolucioni Y', //cpg1.4
  'ResolutionUnit' => 'Njësia e resolucionit', //cpg1.4
  'Software' => 'Programi kompiuterik', //cpg1.4
  'YCbCrPositioning' => 'Elemente të konfigurimit YCbCr', //cpg1.4
  'ExifOffset' => 'Exif Offset', //cpg1.4
  'IFD1Offset' => 'IFD1 Offset', //cpg1.4
  'FNumber' => 'Hapja', //cpg1.4
  'ExifVersion' => 'Versioni Exif', //cpg1.4
  'DateTimeOriginal' => 'Data/Ora origjinale', //cpg1.4
  'DateTimedigitized' => 'Data/Ora e transferimit numerik', //cpg1.4
  'ComponentsConfiguration' => 'Konfigurimi i përbërësve', //cpg1.4
  'CompressedBitsPerPixel' => 'Kompresimi i copëzave sipas shtresave', //cpg1.4
  'LightSource' => 'Burimi i dritës', //cpg1.4
  'ISOSetting' => 'Parametrat ISO', //cpg1.4
  'ColorMode' => 'Modeli i ngjyrave', //cpg1.4
  'Quality' => 'Cilësia', //cpg1.4
  'ImageSharpening' => 'Mprehje e imazhit', //cpg1.4
  'FocusMode' => 'Mënyra e matjes së distancës', //cpg1.4
  'FlashSetting' => 'Parametrat e flashit', //cpg1.4
  'ISOSelection' => 'Përzgjedhja ISO', //cpg1.4
  'ImageAdjustment' => 'Rregullimi i imazhit', //cpg1.4
  'Adapter' => 'Adaptimi', //cpg1.4
  'ManualFocusDistance' => 'Rregullim manuel i fokusit', //cpg1.4
  'DigitalZoom' => 'Zoom Digital ', //cpg1.4
  'AFFocusPosition' => 'Pozitioni Fokusit AF ', //cpg1.4
  'Saturation' => 'Saturimi', //cpg1.4
  'NoiseReduction' => 'Reduction i zhurmave ', //cpg1.4
  'FlashPixVersion' => 'Versioni Flash Pix', //cpg1.4
  'ExifImageWidth' => 'Të dhënat e gjerësisë së imazhit', //cpg1.4
  'ExifImageHeight' => 'Të dhënat e gjatësisë së imazhit', //cpg1.4
  'ExifInteroperabilityOffset' => 'Ekzekutimi i të dhënave ndëroperacionale', //cpg1.4
  'FileSource' => 'Burimi i skedarit', //cpg1.4
  'SceneType' => 'Tipi i skenës', //cpg1.4
  'CustomerRender' => 'Konvertiom personalizuar', //cpg1.4
  'ExposureMode' => 'Mënyra e ekspozimit', //cpg1.4
  'WhiteBalance' => 'Balancim  i së bardhës', //cpg1.4
  'DigitalZoomRatio' => 'Raport i zmadhimit numerik', //cpg1.4
  'SceneCaptureMode' => 'Mënyra e kapjes së skenave', //cpg1.4
  'GainControl' => 'Kontrolli i përfitimit', //cpg1.4
  'Contrast' => 'Kontrasti', //cpg1.4
  'Saturation' => 'Saturimi', //cpg1.4
  'Sharpness' => 'Mprehtësia', //cpg1.4
  'ManageExifDisplay' => 'Manaxhim i të dhënave afishimit', //cpg1.4
  'submit' => 'Paraqit', //cpg1.4
  'success' => 'Informacioni u përditësua me sukses.', //cpg1.4
  'details' => 'Detaje', //cpg1.4
);

$lang_display_comments = array(
        'OK' => 'OK',
        'edit_title' => 'Edito këtë koment',
        'confirm_delete' => 'Jeni i sigurt që ju dëshironi të fshini këtë koment ?',
        'add_your_comment' => 'Shtoni komentin tuaj',
        'name'=>'Emri', 
        'comment'=>'Koment', 
        'your_name' => 'Anonim', 
		'report_comment_title' => 'Reporto këtë koment tek administratori', //cpg1.4
);

$lang_fullsize_popup = array(
        'click_to_close' => 'Klikoni tek imazhi për të mbyllur këtë dritare', 
);

}

// ------------------------------------------------------------------------- //

// File ecard.php

// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
        'title' => 'Dërgo një kartë elektronike',
		'invalid_email' => '<font color="red"><b>Kujdes !</b></font>: adresë e-mail e pavlefshme:', //cpg1.4
        'ecard_title' => 'Një kartë elektronike nga %s për ju',
		'error_not_image' => 'Vetëm imazhet mund të nisen si kartolina elektronike.', //cpg1.3.0
        'view_ecard' => 'Nëse karta elektronike nuk afishohet korrektësisht, Klikoni këtë lidhje',
		'view_ecard_plaintext' => 'Për të par kartolinën elektronike, kopjoni dhe ngjisni këtë adresë URL tek vozitësi juaj internet:', //cpg1.4
        'view_more_pics' => 'Klikoni këtë lidhje për të parë fotografi të tjera !',
        'send_success' => 'Karta juaj elektronike u dërgua',
        'send_failed' => 'Na vjenë keq por serveri nuk mundet ta dërgoj kartën tuaj elektronike...',
        'from' => 'Nga',
        'your_name' => 'Emri juaj',
        'your_email' => 'E-maili juaj',
        'to' => 'Për',
        'rcpt_name' => 'Emri i marrësit',
        'rcpt_email' => 'Adresa e-mail e marrësit',
        'greetings' => 'Urimet',
        'message' => 'Mesazh',
	'ecards_footer' => 'Dërguar nga %s nëpërmjet adresës IP %s në %s (Ora e Albumit)', //cpg1.4
  	'preview' => 'Parashikimi i kartolinës elektronike', //cpg1.4
  	'preview_button' => 'Parashiko', //cpg1.4
  	'submit_button' => 'Dërgo kartolinën', //cpg1.4
  	'preview_view_ecard' => 'Kjo do të jetë adresa alternative e kartës elektronikesapo ajo të gjenerohet. Kjo adresë do të funksionoj për shikimin paraprak.', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File report_file.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('REPORT_FILE_PHP') || defined('DISPLAYREPORT_PHP')) $lang_report_php =array(
  'title' => 'Report për administratorin', //cpg1.4
  'invalid_email' => '<b>Kujdes</b> : Adresë e-mail e pavlefshme !', //cpg1.4
  'report_subject' => 'Një raport nga %s tek galleria %s', //cpg1.4
  'view_report' => 'Lidhje alternative nëse raporti nuk afishohet karrektësisht', //cpg1.4
  'view_report_plaintext' => 'Për të parë  raportin kopjoni dhe ngjisni këtë adresë URL tek vozitësi juaj internet:', //cpg1.4
  'view_more_pics' => 'Galleri', //cpg1.4
  'send_success' => 'Raporti juaj u dërgua', //cpg1.4
  'send_failed' => 'Na vjen keq por serveri nuk mund ta nis raportin tuaj...', //cpg1.4
  'from' => 'Nga', //cpg1.4
  'your_name' => 'Emri juaj', //cpg1.4
  'your_email' => 'Adresa juaj e-mail', //cpg1.4
  'to' => 'Për', //cpg1.4
  'administrator' => 'Modë Administrator', //cpg1.4
  'subject' => 'Subjekti', //cpg1.4
  'comment_field_name' => 'Një raport për komentin e bërë nga "%s"', //cpg1.4
  'reason' => 'Arsyeja', //cpg1.4
  'message' => 'Mesazh', //cpg1.4
  'report_footer' => 'Dërguar nga %s nga IP %s në %s (ora e galerisë)', //cpg1.4
  'obscene' => 'e turpshme', //cpg1.4
  'offensive' => 'fyese', //cpg1.4
  'misplaced' => 'e keqvendosur', //cpg1.4
  'missing' => 'e humbur', //cpg1.4
  'issue' => 'gabim/nuk mund të shihet', //cpg1.4
  'other' => 'tjetër', //cpg1.4
  'refers_to' => 'Raporti i ckedarit i referohet', //cpg1.4
  'reasons_list_heading' => 'arsyeja e raportit:', //cpg1.4
  'no_reason_given' => 'nuk është dhënë ndonjë arsye', //cpg1.4
  'go_comment' => 'Shko tek komenti', //cpg1.4
  'view_comment' => 'Shiko raportin të plotë me komentet', //cpg1.4
  'type_file' => 'skedar', //cpg1.4
  'type_comment' => 'koment', //cpg1.4
);


// ------------------------------------------------------------------------- //

// File editpics.php

// ------------------------------------------------------------------------- //

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
  'pic_info' => 'Informacion i fotografisë',
  'album' => 'Albumi',
  'title' => 'Titulli',
  'filename' => 'Emri i skedarit', //cpg1.4
  'desc' => 'Përshkrimi',
  'keywords' => 'Fjalë-kyç',
  'new_keyword' => 'Fjalë-kyç të reja', //cpg1.4
  'new_keywords' => 'shtim fjalë-kyçe të reja', //cpg1.4
  'existing_keyword' => 'Fjalë-kyçe existuese', //cpg1.4
  'pic_info_str' => '%s &herë; %s - %s KB - %s shikime - %s vota',
  'approve' => 'Aprovoni skedarin',
  'postpone_app' => 'Aprovojeni me mbrapa',
  'del_pic' => 'Fshijeni skedarin',
  'del_all' => 'Fshijini gjithë skedarët', //cpg1.4
  'read_exif' => 'Rilexo informacionin EXIF përsëri',
  'reset_view_count' => 'Rivendos numëruesin e shikimeve në zero',
  'reset_all_view_count' => 'Rivendos të gjithë numëruesit e shikimeve në zero', //cpg1.4
  'reset_votes' => 'Rivendos numëruesin e votave në zero',
  'reset_all_votes' => 'Rivendos të gjithë numëruesit e votave në zero', //cpg1.4
  'del_comm' => 'Fshi komentet',
  'del_all_comm' => 'Fshi të gjitha komentet', //cpg1.4
  'upl_approval' => 'Arovim i ngarkimeve', //cpg1.4
  'edit_pics' => 'Editoni skedarin',
  'see_next' => 'Shiko skedarin pasardhës',
  'see_prev' => 'Shiko skedarin paraardhës',
  'n_pic' => '%s skedare',
  'n_of_pic_to_disp' => 'Numri i skedarëve që shfaqen',
  'apply' => 'Zbato ndryshimet',
  'crop_title' => 'Editori i fotove Coppermine',
  'preview' => 'Parashikoje',
  'save' => 'Ruaje fotografinë',
  'save_thumb' =>'Ruaje si tablo',
  'gallery_icon' => 'Make this my icon', //cpg1.4
  'sel_on_img' =>'Zona e përzgjedhur duhet të jetë e gjitha brenda imazhit!', //js-alert
  'album_properties' =>'Vetitë e albumit', //cpg1.4
  'parent_category' =>'Kategoria buruese', //cpg1.4
  'thumbnail_view' =>'Pamje e tablove', //cpg1.4
  'select_unselect' =>'zgjidh/çzgjidh të gjitha', //cpg1.4
  'file_exists' => "Skedari i destinacionit '%s' egziston tashmë.", //cpg1.4
  'rename_failed' => "Riemërtimi '%s' në '%s dështoi'.", //cpg1.4
  'src_file_missing' => "Skedari burues '%s' është zhdukur.", // cpg 1.4
  'mime_conv' => "Nuk mund të konvertohet skedari '%s' në '%s'",//cpg1.4
  'forb_ext' => 'Ky ekstension është i ndaluar.',//cpg1.4
);

// ------------------------------------------------------------------------- //

// File faq.php //cpg1.3.0

// ------------------------------------------------------------------------- //

if (defined('FAQ_PHP')) $lang_faq_php = array(
  'faq' => 'Pyetjet e bëra më shpesh', //cpg1.3.0
  'toc' => 'Tabela e përmbajtjes', //cpg1.3.0
  'question' => 'Pyetje: ', //cpg1.3.0
  'answer' => 'Përgjigje: ', //cpg1.3.0
);

if (defined('FAQ_PHP')) $lang_faq_data = array(
  'FAQ të përgjithëshme', //cpg1.3.0
  array('Pse duhet të regjistrohem?', 'Registrimi mund të kërkohet ose jo, varësisht nga administratori. Registrimi u jep anëtarëve avantazhe përparësi shtesë si ngarkimi, të paturit e një liste favoritesh, mundësia për të vlerësuar fotografitë, postimi i komenteve etj.', 'allow_user_registration', '1'), //cpg1.3.0
  array('Si të regjistrohem?', 'Shko tek &quot;Registrohu&quot; dhe plotëso fushat e detyrueshme (dhe fushat në obsion nëse dëshironi).<br />Nëse Administratori ka kërkon aktivizimin e llogarisë me anë të e-mailit, atëherë pasi të fusni informacionin e kërkuar në formular, ju duhet të merrni një masazh në adresën e-mail që keni regjistruar ku u jepen instruksionet se si të aktivizoni llogarinë tuaj. Ju duhet të aktivizoni llogarinë tuaj me qëllim që të mundeni të identifikoheni.', 'allow_user_registration', '1'), //cpg1.3.0
  array('Si mund të identifikohem?', 'Go to &quot;Identifikohu&quot;, fut emrin e përdoruesit dhe fjalë-kalimin dhe kliko tek &quot;më Më mbaj mend&quot; dhe kështu ju nuk kini nevoj të identifikoheni përsëri kur riktheheni tek albumi.<br /><b>KUJDES:Cookit duhet të jetë i aktivizuar dhe cookit e këtij web siti nuk duhet të fshihen me qëllim që  &quot;Më mbaj mend &quot; të funksionoj.</b>', 'offline', 0), //cpg1.3.0
  array('Pse nuk mundem të identifikohem ?', 'Keni klikuar ju tek lidhja që u është dërguar me anë të e-mailit?. Ajo lidhje aktivizon llogarinë tuaj. Për probleme të tjera identifikimi kontaktoni administratorin e sitit.', 'offline', 0), //cpg1.3.0
  array('Çfarë ndodh nëse harroj fjalë-kalimin?', 'Nëse kjo faqe ka një lidhje &quot;Harrim i fjalë-kalimit&quot; kliko aty. Për më tepër kontakto administratorin e faqes për një fjalë-kalin të ri.', 'offline', 0), //cpg1.3.0
  //array('Çfarë ndodh nëse ndërroj adresën e-mail?', 'Thjesht identifikohu dhe ndërro adresën e-mail tek &quot;Profili im&quot;', 'offline', 0), //cpg1.3.0
  array('Si mund të ruaj një foto tek &quot;Favoritet e mia&quot;?', 'Kliko tek fotografia dhe pastaj kliko tek lidhja &quot;info e fotografisë&quot; (<img src="images/info.gif" width="16" height="16" border="0" alt="Picture information" />); lëviz nëpër info e fotografisë dhe kliko tek &quot;Shto tek favoritet&quot;.<br />Administratori mund ta ketë lënë të aktivisuar paraprakisht &quot;foto informacion&quot; .<br />KUJDES:Cookit duhet të jenë të aktivizuara dhe cookit e kësaj faqeje nuk duhet të fshihen.', 'offline', 0), //cpg1.3.0
  array('Si mund të vlerësoj një foto?', 'Kliko në një tablo dhe shko në fund e zgjidh një vlerësim.', 'offline', 0), //cpg1.3.0
  array('Si mund të postoj një koment për një fotografi?', 'Kliko në një tablo dhe shko në fund e shto një koment.', 'offline', 0), //cpg1.3.0
  array('Si mund të ngarkoj një foto?', 'Shko tek &quot;Ngarko foto &quot;dhe zgjidh albumin ku dëshiron të shtosh foton, kliko &quot;Browse&quot; dhe gjej foton që dëshiron të ngarkosh dhe klik  &quot;open&quot; (shto një titull dhe përshkrim  nëse dëshiron) dhe kliko &quot;VAZHDIM&quot;', 'allow_private_albums', 0), //cpg1.3.0
  array('Ku mund ta mgarkoj një fotografi?', 'Ju do të jeni në gjendje të ngarkoni një fotografi tek një nga albumet e &quot;Galleria ime&quot;. Administratori mund tu lejoj ju të ngarkoni në një ose në disa albume të Galerisë Kryesore .', 'allow_private_albums', 0), //cpg1.3.0
  array('Çfarë typi dhe çfarë madhësie fotografish mund të ngarkoj?', 'Madhësia dhe tipi i fotografisë (jpg, png, etc.) varet nga administratori.', 'offline', 0), //cpg1.3.0
  array('Çfarë është &quot;Galeria ime&quot;?', '&quot;Galleria ime&quot; është një galleri personale që përdoruesi mund të ngarkoj fotografi në të dhe ta mirëmbaj.', 'allow_private_albums', 0), //cpg1.3.0
  array('Si mund të krijoj, riemërtoj apo fshij një album tek "Galeria ime" ?', 'Ju duhet të jeni në "modë-admin";<br />Shko tek  &quot;Krijo / Rendit Albumet e mia&quot; dhe kliko tek &quot;i ri&quot;. Ndrysho &quot;Album i ri &quot; me emrin që ju dëshironi.<br />Ju gjithashtu mund të riemërtoni çdo album të galerisë suaj.<br />Kliko tek &quot;Zbato ndryshimet&quot;.', 'allow_private_albums', 0), //cpg1.3.0
  array('Si mund të modifikoj dhe ndaloj përdoruesit të shikojnë albumet e mia?', 'Ju duhet të jeni në "modë-admin"<br />Shko tek &quot;Modifiko Albums. On the &quot;Update Album&quot; bar, select the album that you want to modify.<br />Here, you can change the name, description, thumbnail picture, restrict viewing and comment/rating permissions.<br />Click &quot;Update Album&quot;.', 'allow_private_albums', 0), //cpg1.3.0
  array('Si mund të shikoj përdoruesit e tjerë të albumit?', 'Shko tek Lista e Albumeve dhe zgjidh Përdoruesit e Albumit.', 'allow_private_albums', 0), //cpg1.3.0
  array('Çfarë janë cookies?', 'Cookies janë të dhëna në formë teksti që dërgohen nga serveri i një web siti në kompiuterin tuaj.<br />Cookies në përgjithësi lejojnë një përdorues që të lënë dhe rikthehen në web site pa patur nevojë të identifikohen përsëri.', 'offline', 0), //cpg1.3.0
  array('Ku mund ta gjej këtë program për web faqen time?', 'Coppermine është një Album Multimedia falas i shpërndar sipas  GNU GPL. Ky program ka shumë përparësi dhe është i përshtatshëm për shumë platforma. Vizitoni  <a href="http://coppermine.sf.net/">faqen kryesore të Coppermine</a> për të mësuar më shumë apo dhe për ta shkarkuar atë.', 'offline', 0), //cpg1.3.0

  'Vozitja në web site', //cpg1.3.0
  array('Çfarë është "Lista e Albumeve" ?', 'Kjo tregon gjithë kategorinë në cilën ju ndodheni me lidhjet drejt çdo albumi. Nëse ju nuk ndodheni në një galeri, kjo tregon galeinë komplet me lidhje për  çdo kategori.  Tablotë mund të jenë një lidhje drejt>e kategorive.', 'offline', 0), //cpg1.3.0
  array('Çfarë është Galeria ime ?', 'Ky funksion i jep mundësi përdoruesit të krijoi galerinë e vetë duke i dhënë mundësinë të shtoj, fshij apo modifikojë albume ashti sikurse mund të ngarkoj në to.', 'allow_private_albums', 0), //cpg1.3.0
  array('Cila është diferenca midis Modë Admin dhe Modë Përdorues?', 'Sipas kësaj karakteristike, në Mode-Admin e lejon përdoruesin të modifikoj albumet e vehta (por dhe të të tjerëve nëse administratori ia beson një gjë të tillë). ', 'allow_private_albums', 0), //cpg1.3.0
  array('Çfarë është Ngarkim fotografish?', 'Ky funksion lejon një përdorues të ngarkoj një dokument (madhësia dhe tipi përcaktohet nga administratori) tek një galery e zgjedhur nga ju apo nga administratori.', 'allow_private_albums', 0), //cpg1.3.0
  array('Çfarë është Ngarkimet më të fundit?', 'Ky funksion shfaq ngarkimet më të fundit në galeri.', 'offline', 0), //cpg1.3.0
  array('Çfarë është Komentet e fundit?', 'Ky funksion tregon komentet më të fundit të bëra nga përdoruesit.', 'offline', 0), //cpg1.3.0
  array('Çfarë është Më të shikuarat?', 'Ky funksion tregonë fotografitë më të shikuara nga përdoruesit (të regjistruar ose jo).', 'offline', 0), //cpg1.3.0
  array('Çfarë është " Më të vleresuarat"?', 'Ky funksion tregon fotografitë më të vlerësuara nga përdoruesit, duke treguar vlerësimin mesatar (p.sh: nëse 5 përdorues vlerësojnë një foto me 3 pikë çdonjëri <img src="images/rating3.gif" width="65" height="14" border="0" alt="" />: fotografia do të ketë mesataren 3 <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> ; Nëse 5 përdorues vlerësojnë një foto nga 1 në 5 (1,2,3,4,5) rezultati do të jetë gjithashtu 3 <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> .)<br />Vlerësimet shkajnë nga <img src="images/rating5.gif" width="65" height="14" border="0" alt="best" /> (madhështore) në <img src="images/rating0.gif" width="65" height="14" border="0" alt="worst" /> (shumë keq).', 'offline', 0), //cpg1.3.0
  array('Çfarë është "Favoritet e mia"?', 'Ky funksion ju lejon juve të vendosi një apo disa fotografi tek cookiet që ndodhen në kompiuterin tuaj.', 'offline', 0), //cpg1.3.0
);

// ------------------------------------------------------------------------- //

// File forgot_passwd.php //cpg1.3.0

// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) $lang_forgot_passwd_php = array(
  'forgot_passwd' => 'Kujtesë fjalë-kalimi', //cpg1.3.0
  'err_already_logged_in' => 'Ju jeni tashmë i identifikuar !', //cpg1.3.0
  'enter_username_email' => 'Fusni emrin e përdoruesit ose adresën e-mail', //cpg1.3.0
  'enter_email' => 'Fusni adresën e-mail', //cpg1.4
  'submit' => 'EC', //cpg1.3.0
  'failed_sending_email' => 'M-maili me kujtesën e fjalëkalimit nuk mundi të niset !', //cpg1.3.0
  'email_sent' => 'Një e-mail me emrin e përdoruesit dhe fjalë-kalimin u nis në adresën %s', //cpg1.3.0
  'err_unk_user' => 'Përdoruesi i zgjedhur nuk ekziston!', //cpg1.3.0
  'passwd_reminder_subject' => '%s - Kujtesë fjalë-kalimi', //cpg1.3.0
  'passwd_reminder_body' => 'Ju keni kërkuar tu rikujtohen të dhënat identifikuese për:
Emri i përdoruesit: %s
Fjalë-kalimi: %s
Klikoni %s për tu identifikuar.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //

// File groupmgr.php

// ------------------------------------------------------------------------- //
if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
  'group_name' => 'Grupi', //cpg1.4
  'permissions' => 'Lejimet', //cpg1.4
  'public_albums' => 'Ngarkime tek albumet publike', //cpg1.4
  'personal_gallery' => 'Album personal', //cpg1.4
  'upload_method' => 'Metoda e ngarkimit', //cpg1.4
  'disk_quota' => 'Kuota', //cpg1.4
  'rating' => 'Vlerësimi', //cpg1.4
  'ecards' => 'Kartolina elektronike', //cpg1.4
  'comments' => 'Komente', //cpg1.4
  'allowed' => 'E lejuar', //cpg1.4
  'approval' => 'Aprovim', //cpg1.4
  'boxes_number' => 'Numri i fushave', //cpg1.4
  'variable' => 'ndryshore', //cpg1.4
  'fixed' => 'E fiksuar', //cpg1.4
  'apply' => 'Zbato ndryshimet',
  'create_new_group' => 'Krijim i një grupi të ri',
  'del_groups' => 'Fshi grupin(et) që keni zgjedhur',
  'confirm_del' => 'Kujdes, kur ju fshini një grup, përdoruesit që bënin pjesë në këtë grupdo të transferohen tek grupi \'Të regjistruar\' !\n\nDëshironi të vazhdoni ?', //js-alert
  'title' => 'administrimi i përdoruesve të grupit',
  'num_file_upload' => 'Fushat e ngarkimit të skedarëve', //cpg1.4
  'num_URI_upload' => 'Fushat e ngarkimit URI', //cpg1.4
  'reset_to_default' => 'Rikthim i emrit paraprak (%s) - rekommendohet!', //cpg1.4
  'error_group_empty' => 'Tabela e grupit ishte bosh !<br /><br />Grupet paraprake u krijuan, luteni te ringarkoni këtë faqe', //cpg1.4
  'explain_greyed_out_title' => 'Përse kjo kolonë është gri?', //cpg1.4
  'explain_guests_greyed_out_text' => 'Ju nuk mund të ndryshoni vetitë e këtij grupi sepse tek opsioni  &quot; Lejim i hyrjes së përdoruesve të paidentifikuar (vizitor apo anonimë) &quot; ju keni zgjedhurto &quot;Jo&quot; tek faqja e konfigurimit. Gjithë vizitorët (anëtarë të grupit %s) nuk mund të bëjnë tjetër veç të lidhen. Pra nuk ka rregullullime të grupit për ta.', //cpg1.4
  'explain_banned_greyed_out_text' => 'Ju nuk mund të ndërroni vetitë e grupit %s sepse nuk munden të bëjnë ndonjë gjë.', //cpg1.4
  'group_assigned_album' => 'albumi(et) i (e) caktuar(a)', //cpg1.4
);


// ------------------------------------------------------------------------- //

// File index.php

// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
  'welcome' => 'Mirësevini !',
);

$lang_album_admin_menu = array(
  'confirm_delete' => 'Jeni i sigurt që ju dëshironi ta FSHINI këtë album ? \\nGjithë dokumentat dhe komentet do fshihen gjithashtu.', //js-alert //cpg1.3.0
  'delete' => 'FSHI',
  'modify' => 'VETITË',
  'edit_pics' => 'EDITO DOKUMENTIN', //cpg1.3.0
);

$lang_list_categories = array(
  'home' => 'Pritja',
  'stat1' => '<b>[pictures]</b> fotografi në <b>[albums]</b> albume dhe <b>[cat]</b> kategori me <b>[comments]</b> komente të shikuara <b>[views]</b> herë', //cpg1.3.0
  'stat2' => '<b>[pictures]</b> fotografi në <b>[albums]</b> albume të shikuara<b>[views]</b> herë', //cpg1.3.0
  'xx_s_gallery' => '%s\'s Galeri',
  'stat3' => '<b>[pictures]</b> fotografi në <b>[albums]</b> albume me <b>[comments]</b> komente të shikuara <b>[views]</b> herë', //cpg1.3.0
);

$lang_list_users = array(
  'user_list' => 'Lista e përdoruesve',
  'no_user_gal' => 'Nuk ka galeri të përdoruesve',
  'n_albums' => '%s album(e)',
  'n_pics' => '%s fotografi', //cpg1.3.0
);

$lang_list_albums = array(
  'n_pictures' => '%s fotografi', //cpg1.3.0
  'last_added' => ', e fundit shtuar më %s',
  'n_link_pictures' => '%s skedare të lidhura', //cpg1.4
  'total_pictures' => '%s skedare në total', //cpg1.4
);

}

// ------------------------------------------------------------------------- //
// File keywordmgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('KEYWORDMGR_PHP')) $lang_keywordmgr_php = array(
  'title' => 'Administrimi i fjalë-kyçeve', //cpg1.4
  'edit' => 'edito', //cpg1.4
  'delete' => 'fshi', //cpg1.4
  'search' => 'kërko', //cpg1.4
  'keyword_test_search' => 'kërko për %s në një dritare të re', //cpg1.4
  'keyword_del' => 'fshi fjalë-kyçet %s', //cpg1.4
  'confirm_delete' => 'Jeni i sigurt që ju doni të fshini fjalë-kyçet %s nga gjithë galeria?', //cpg1.4  // js-alert
  'change_keyword' => 'ndrysho fjalë-kyçin', //cpg1.4
);
// ------------------------------------------------------------------------- //

// File login.php

// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
        'login' => 'Identifikim',
        'enter_login_pswd' => 'Fusni emrin e përdoruesit dhe fjalë-kalimin',
        'username' => 'Emri i përdoruesit',
        'password' => 'Fjalëkalimi',
        'remember_me' => 'Më mbaj mend',
        'welcome' => 'Mirë se erdhe %s ...',
        'err_login' => '*** Nuk mundët të identifikoheni. Provoni përsëri ***',
        'err_already_logged_in' => 'Ju jeni tashmë i identifikuar !',
	'forgot_password_link' => 'Kam harruar fjalë-kalimin !', //cpg1.3.0
	'cookie_warning' => 'Vositësi juaj nuk pranon cookies', //cpg1.4
);

// ------------------------------------------------------------------------- //

// File logout.php

// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
        'logout' => 'Çidentifikim',
        'bye' => 'Mirë u pafshim %s ...',
        'err_not_loged_in' => 'Ju nuk jeni identifikuar !',
);

// ------------------------------------------------------------------------- //
// File minibrowser.php  //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('MINIBROWSER_PHP')) $lang_minibrowser_php = array(
  'close' => 'mbylle', //cpg1.4
  'submit' => 'OK', //cpg1.4
  'up' => 'ngjitu një nivel', //cpg1.4
  'current_path' => 'niveli i tanishëm', //cpg1.4
  'select_directory' => 'luteni të zgjidhni një repertor', //cpg1.4
  'click_to_close' => 'Klikoni tek imazhi për ta mbyllur këtë dritare',
);


// ------------------------------------------------------------------------- //

// File modifyalb.php

// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
        'upd_alb_n' => 'Përditësim i albumit %s',
        'general_settings' => 'Dekori i përgjithshëm',
        'alb_title' => 'Titulli i albumit',
        'alb_cat' => 'Kategoria e albumit ',
        'alb_desc' => 'Përshkrimi i albumit',
		'alb_keyword' => 'Fjalë-kyçe të albumit', //cpg1.4
        'alb_thumb' => ' Tablotë e albumit',
        'alb_perm' => 'Lejimet për këtë album',
        'can_view' => 'Albumi mund të shihet nga',
        'can_upload' => 'Visitorët mund të ngarkojnë foto',
        'can_post_comments' => 'Visitorët mund të postojnë komente',
        'can_rate' => 'Visitorët mund të votojnë për fotografitë',
        'user_gal' => 'Galleria e anëtarit',
        'no_cat' => '* Jashtë kategorive *',
        'alb_empty' => 'Albumi është bosh',
        'last_uploaded' => 'Përditësimi i fundit',
        'public_alb' => 'Të gjithë (album publik)',
        'me_only' => 'Vetëm unë',
        'owner_only' => ' Vetëm pronari i (%s) ',
        'groupp_only' => 'Anëtarët e  grupit\'%s\'',
        'err_no_alb_to_modify' => 'Në bazën e të dhënave nuk ka albume që ju mund ti modifikoni.',
        'update' => 'Përditësoni albumin',
	'reset_album' => 'Rifillo albumin', //cpg1.4
  	'reset_views' => 'Rifillo llogaritësin e shikimeve në &quot;0&quot; tek %s', //cpg1.4
  	'reset_rating' => 'Rifillo vlerësimet e të gjithë skedarëve tek %s', //cpg1.4
  	'delete_comments' => 'Fshi të gjithë komentet e bëra tek  %s', //cpg1.4
  	'delete_files' => 'Fshirje e %spakthyeshme%s et të gjitha skedarëve tek %s', //cpg1.4
  	'views' => 'shikime', //cpg1.4
  	'votes' => 'vota', //cpg1.4
  	'comments' => 'komente', //cpg1.4
  	'files' => 'skedare', //cpg1.4
  	'submit_reset' => 'paraqit ndryshimet', //cpg1.4
  	'reset_views_confirm' => 'Jam i (e) sigurt', //cpg1.4
  	'notice1' => '(*) varësisht nga configurimi i vetive të %sgrupeve%s', //cpg1.3.0 (do not translate %s!)
  	'alb_password' => 'Fjalë-kalimi i albumit', //cpg1.4
  	'alb_password_hint' => 'Fjalë që të sjellë në mend fjalë-kalimin', //cpg1.4
  	'edit_files' =>'Edito skedarët', //cpg1.4
  	'parent_category' =>'Kategoria prind', //cpg1.4
  	'thumbnail_view' =>'Pamja e tablove', //cpg1.4
);
// ------------------------------------------------------------------------- //

// File phpinfo.php //cpg1.3.0

// ------------------------------------------------------------------------- //

if (defined('PHPINFO_PHP')) $lang_phpinfo_php = array(
  'php_info' => 'PHP informacion', //cpg1.3.0
  'explanation' => 'Ky është një funksion i prodhuar nga funksion PHP <a href="http://www.php.net/phpinfo">phpinfo()</a>, që shfaqet brenda Copermine .', //cpg1.3.0
  'no_link' => 'Lejimi i shikimit të info-PHP ka risqe të mëdhaja për albumin. Është e këshillueshme që ky funksion të jetë i dukshëm vetëm për administratorët e albumit. ', //cpg1.3.0
);		

// ------------------------------------------------------------------------- //
// File picmgr.php //cpg1.4
// ------------------------------------------------------------------------- //
if (defined('PICMGR_PHP')) $lang_picmgr_php = array(
  'pic_mgr' => 'Administrimi i imazhit', //cpg1.4
  'select_album' => 'Zgjidhni albumin', //cpg1.4
  'delete' => 'Fshije', //cpg1.4
  'confirm_delete1' => 'Jeni i sigurt që ju doni të fshini këtë fotografi ?', //cpg1.4
  'confirm_delete2' => '\nFotografia do të fshihet përgjithëmonë.', //cpg1.4
  'apply_modifs' => 'Zbato ndryshimet', //cpg1.4
  'confirm_modifs' => 'Konfirmo ndryshimet', //cpg1.4
  'pic_need_name' => 'Fotografia duhet të ketë një emër !', //cpg1.4
  'no_change' => 'Ju nuk bëtë asnjë ndryshim !', //cpg1.4
  'no_album' => '* Jo album *', //cpg1.4
  'explanation_header' => 'Rendi i personalizuar që ju mund të specifikoni mund të merret në konsideratë vetëm nëse', //cpg1.4
  'explanation1' => 'administratori ka zgjedhur "Vendosje e skedarëve sipas një rendi paraprak" tek configurimi sipas "Pozicion zbritës" apo "Pozicion ngjitës" (parametra të përgjithëshme për përdoruesit që nuk kanë zgjedhur një lloj tjetër renditje personal)', //cpg1.4
  'explanation2' => 'përdoruesi ka zgjedhur "Pozicion zbritës" apo "Pozicion ngjitës" tek faqja e tablove (parametra të zgjedhura nga përdoruesi)', //cpg1.4
);



// ------------------------------------------------------------------------- //
// File pluginmgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('PLUGINMGR_PHP')){

$lang_pluginmgr_php = array(
  'confirm_uninstall' => 'Jeni i sigurt që ju dëshironi të ÇINSTALONI këtë modul apo plugin', //cpg1.4
  'confirm_delete' => 'Jeni i sigurt që ju dëshironi ta FSHINI këtë modul apo plugin', //cpg1.4
  'pmgr' => 'Administrimi i plugin', //cpg1.4
  'name' => 'Emri', //cpg1.4
  'author' => 'Autori', //cpg1.4
  'desc' => 'Përshkrimi', //cpg1.4
  'vers' => 'v', //cpg1.4
  'i_plugins' => 'Plugin i instaluar', //cpg1.4
  'n_plugins' => 'Plugin i painstaluar', //cpg1.4
  'none_installed' => 'I painstaluar', //cpg1.4
  'operation' => 'Operacioni', //cpg1.4
  'not_plugin_package' => 'Skedari që keni ngarkuar nuk është një paketë plagin.', //cpg1.4
  'copy_error' => 'Një gabim ndodhi gjatë kopjimit të paketës tek dosja e plagineve.', //cpg1.4
  'upload' => 'Ngarko', //cpg1.4
  'configure_plugin' => 'Konfigurim i plugin', //cpg1.4
  'cleanup_plugin' => 'Pastro plugin', //cpg1.4
);
}
// ------------------------------------------------------------------------- //

// File ratepic.php

// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
        'already_rated' => 'Na vjenë keq por ju e keni vlerësuar këtë fotografi',
        'rate_ok' => 'Vota juaj u pranua',
	'forbidden' => 'Ju nuk mund të votoni për fotografinë tuaj.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //

// File register.php & profile.php

// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
Edhe pse administratorët e {SITE_NAME} do të bëjnë të pamundurën të fshijnë ose modifikojnë sa më shpejtë që të jetë e mundur gjithë materialet të pamoralëshme apo fyese, është e pamundur të shihet vazhdimisht çdo postim. Kështu që ju duhet ta dini se të gjithë postimet e bëra në këtë sit shprehin pikëpamjet e opinionin e autorëve dhe jo atë të administratorëve apo webmasterit të këtij websiti(veç rasteve të postimeve nga këta të fundit) kështu që këta nuk mund të konsiderohen përgjegjës.<br />
<br />
Ju pranoni të mos postoni materiale abuzive, të pahijëshme, vulgare, shpifëse, të urrejtëshme, kërcënuese, me orientim seksual apo materiale të tjera që dhunojnë ligjet në fuqi. Ju pranoni që webmasteri, administratori dhe moderatorët e {SITE_NAME} kanë të drejtëtë fshijnë apo editojnë çdo material në çdo kohë që ata e gjykojnë të arsyeshme. Si përdorues ju pranoni që çdo informacion që keni futur më sipër ruhet në një bazë të dhënash. Megjithëse këto informacione nuk u transmetohen të tretëve pa miratimin tuaj, webmasteri ose administratori nuk mbajnë përgjegjësi për  tentativa piraterie kundrejt bazës së të 
dhënave.<br />
<br />
Ky web site përdor cookies për të ruajtur informacione në kompiuterin tuaj. Këto cookies shërbejnë vetëm për t'jua bërë sa më të kënaqshëm shfletimin e këtij albumi. Adresa juaj e-mail do të përdoret vetëm për të konfirmuar të dhënat e regjistrimit tuaj si dhe fjalë-kalimin.<br />
<br />
Duke klikuar tek 'Pranoj' këtu më poshtë ju pranoni tu përmbaheni këtyre kushteve.
EOT;
$lang_register_php = array(
        'page_title' => 'Regjistrim i përdoruesit',
        'term_cond' => 'Marrveshje dhe kushte',
        'i_agree' => 'Pranoj',
        'submit' => 'Paraqit regjistrimin',
        'err_user_exists' => 'Ky emër përdoruesi që ju futët është i zënë, ju lutemi të zgjidhni një tjetër',
        'err_password_mismatch' => 'Dy fjalë-kalimet nuk korrespondojnë njëra me tjetrën, ju lutemi shkruajini përsëri',
        'err_uname_short' => 'Emri i përdoruesit duhet të ketë të paktën dy shkronja',
        'err_password_short' => 'Fjalë-kalimi duhet të ketë të paktën dy shkronja',
        'err_uname_pass_diff' => 'Emri i përdoruesit dhe fjalë-kalimi duhet të jenë të ndryshëm',
        'err_invalid_email' => 'Adresa e-mail nuk është e vlefshme',
        'err_duplicate_email' => 'Një tjetër përdorues është regjistruar adresën e-mail që ju futët',
        'enter_info' => 'Fusni informacionin e regjistrimit',
        'required_info' => 'Information i detyrueshëm',
        'optional_info' => 'Information i padetyrueshëm',
        'username' => 'Emri i përdoruesit',
        'password' => 'Fjalë-kalimi',
        'password_again' => 'Rishkruaj fjalë-kalimin',
        'email' => 'Email',
        'location' => 'Vendndodhja',
        'interests' => 'Interesat',
        'website' => 'Faqe interneti',
        'occupation' => 'Profesioni',
        'error' => 'GABIM',
        'confirm_email_subject' => '%s - Konfirmim i regjistrimit',
        'information' => 'Informacion',
        'failed_sending_email' => 'Konfirmimi i regjistrimit nuk mund të dërgohet !',
        'thank_you' => 'Faleminderit për regjistrimin.<br /><br />Një e-mail me informacionin se si të  aktivizoni llogarinë tuaj është nisur në adresën që ju na furnizuat.',
        'acct_created' => 'Llogaria juaj është krijuar dhe ju tani mund të identifikoheni me emrin e përdoruesit dhe fjalë-kalimin tuaj',
        'acct_active' => 'Llogaria juaj është tashmë aktive dhe ju mund të identifikoheni me emrin e përdoruesit dhe fjalë-kalimin tuaj',
        'acct_already_act' => 'Llogaria juaj është tashmë aktive !',
	'acct_already_act' => 'Kjo llogari ka qenë aktive!', //cpg1.4
        'acct_act_failed' => 'Kjo llogari nuk mund të aktivizohet !',
        'err_unk_user' => 'Përdoruesi i zgjedhur nuk ekziston !',
        'x_s_profile' => '%s\ profili',
        'group' => 'Grupe',
        'reg_date' => 'Regjistruar më',
        'disk_usage' => 'Përdorimi i diskut',
        'change_pass' => 'Ndërro fjalë-kalimin',
        'current_pass' => 'Fjalëkalimi i tashëm',
        'new_pass' => 'Fjalë-kalimi i ri',
        'new_pass_again' => 'Fjalë-kalimi i ri përsëri',
        'err_curr_pass' => 'Fjalëkalimi i tashëm nuk është korrekt',
        'apply_modif' => 'Zbato ndryshimet',
        'change_pass' => 'Ndërro fjalë-kalimin tim',
        'update_success' => 'Profili juaj u përditësua',
        'pass_chg_success' => 'Fjalë-kalimi juaj u ndryshua',
        'pass_chg_error' => 'Fjalë-kalimi juaj nuk u ndryshua',
	'notify_admin_email_subject' => '%s - Njoftim regjistrimi', //cpg1.3.0
	'last_uploads' => 'Skedari i ngarkuar së fundi.<br />Klikoni për të parë të gjitha ngarkimet e ', //cpg1.4
	'last_comments' => 'Komenti i fundit.<br />Klikoni për të parë të gjitha komentet e', //cpg1.4
	'notify_admin_email_body' => 'Një përdorues i ri me emër përdoruesi "%s" është regjistruar tek galeria juaj', //cpg1.3.0
	'notify_admin_request_email_subject' => '%s - Kërkesë regjistrimi', //cpg1.4
        'thank_you_admin_activation' => 'Faleminderit.<br /><br />Kërkesa juaj për aktivizimin e llogarisë u dërgua tek administratori. Ju do të merrni një mesazh nëse miratoheni.', //cpg1.4
  	'acct_active_admin_activation' => 'Kjo llogari është tashmë aktive dhe një e-mail i është dërguar përdoruesit.', //cpg1.4
  	'notify_user_email_subject' => '%s - Njoftim i aktivizimit', //cpg1.4
);

$lang_register_confirm_email = <<<EOT
Faleminderit që u regjistruat tek  {SITE_NAME}

Emri Juaj i përdorimit është : "{USER_NAME}"
Fjalë-kalimi juaj është : "{PASSWORD}"

Me qëllim që të aktivizoni llogarinë tuaj, ju duhet të klikoni në lidhjen e mëposhtëme 
ose kopjojeni atë dhe ngjiteni tek web vozitësi juaj.

{ACT_LINK}

Përshëndetje,

Stafi i {SITE_NAME}

EOT;

}

// ------------------------------------------------------------------------- //

// File reviewcom.php

// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
        'title' => 'Review comments',
        'no_comment' => 'Këtu nuk ka komente për të parë',
        'n_comm_del' => '%s komente të fshira',
        'n_comm_disp' => 'Numri i komenteve për tu afishuar',
        'see_prev' => 'Shiko paraardhësen',
        'see_next' => 'Shiko pasardhësen',
        'del_comm' => 'Fshi komentet e zgjedhura',
	'user_name' => 'Name', //cpg1.4
  	'date' => 'Data', //cpg1.4
  	'comment' => 'Komente', //cpg1.4
  	'file' => 'Skedar', //cpg1.4
  	'name_a' => 'Emrat e përdoruesve në ngjitje', //cpg1.4
  	'name_d' => 'Emrat e përdoruesve në zbritje', //cpg1.4
  	'date_a' => 'Data në ngjitje', //cpg1.4
	'date_d' => 'Data në zbritje', //cpg1.4
  	'comment_a' => 'Komentet në ngjitje', //cpg1.4
  	'comment_d' => 'Komentet në zbritje', //cpg1.4
  	'file_a' => 'Skedarët në ngjitje', //cpg1.4
  	'file_d' => 'ët në zbritje', //cpg1.4
);

// ------------------------------------------------------------------------- //

// File search.php - OK

// ------------------------------------------------------------------------- //

if (defined('SEARCH_PHP')){

$lang_search_php = array(
  'title' => 'Kërkoni midis skedarëve', //cpg1.4
  'submit_search' => 'kërko', //cpg1.4
  'keyword_list_title' => 'Lista e fjalë-kyçeve', //cpg1.4
  'keyword_msg' => 'Kjo listë nuk është gjithë përfshirëse. Ajo nuk përfshinë fjalë prej titujve të fotove apo përshkrimet. Provoni të kërkoni me frazë të plotë.',  //cpg1.4
  'edit_keywords' => 'Edito fjalë-kyçet', //cpg1.4
  'search in' => 'Kërko tek:', //cpg1.4
  'ip_address' => 'adresa IP', //cpg1.4
  'fields' => 'Kërko tek', //cpg1.4
  'age' => 'Mosha', //cpg1.4
  'newer_than' => 'Më përpara se', //cpg1.4
  'older_than' => 'Më pas se', //cpg1.4
  'days' => 'ditë', //cpg1.4
  'all_words' => 'Kërko të gjitha fjalët (AND)', //cpg1.4
  'any_words' => 'Kërko të paktën një nga fjalët (OR)', //cpg1.4
);

$lang_adv_opts = array(
  'title' => 'Titulli', //cpg1.4
  'caption' => 'Legjenda', //cpg1.4
  'keywords' => 'Fjalë-kyçe', //cpg1.4
  'owner_name' => 'Emri i pronarit', //cpg1.4
  'filename' => 'Emri i skedarit', //cpg1.4
);

}

// ------------------------------------------------------------------------- //

// File searchnew.php

// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
        'page_title' => 'Kërko fotografi të reja',
        'select_dir' => 'Zgjidh dosjen',
        'select_dir_msg' => 'Ky funksion ju lejon të shtoni një grumbull fotosh të ngarkuara në serverin tuaj nëpërmjet FTP.<br /><br />Zgjidh dosjen ku janë ngarkuar skedaret',
        'no_pic_to_add' => 'Këtu nuk ka fotografi për tu shtuar',
        'need_one_album' => 'Ju keni nevojë për të paktën një album për të përdorur këtë funksion',
        'warning' => 'Kujdes',
        'change_perm' => 'Skripti nuk mund të shkruaj në këtë dosje, ju duhet të ndryshoni lejimet në 755 apo 777 para se të provoni të shtoni fotografi !',
        'target_album' => '<b>Kalo fotografitë e &quot;</b>%s<b>&quot; tek </b>%s',
        'folder' => 'Dosje',
        'image' => 'Imazh',
        'album' => 'Album',
        'result' => 'Resultat',
        'dir_ro' => 'E pashkrueshme. ',
        'dir_cant_read' => 'E palexueshme. ',
        'insert' => 'Shto fotografi të reja tek galeria',
        'list_new_pic' => 'Lista e fotove të reja',
        'insert_selected' => 'Shto fotografitë e zgjedhura',
        'no_pic_found' => 'Asnjë fotografi e re nuk u gjend',
        'be_patient' => 'Ju lutemi jini i duruar, skripti do kohë për të shtuar fotografitë',
		'no_album' => 'asnjë album i zgjedhur',  //cpg1.3.0
		'result_icon' => 'kliko për detajet apo për ringarkim',  //cpg1.4
        'notes' =>  '<ul>'.
                                '<li><b>OK</b> : do të thotë që fotografia u shtua me sukses'.
                                '<li><b>DP</b> : do të thotë që fotografia është një dublikatë dhe ekziston tashmë bazën e të dhënave'.
                                '<li><b>PB</b> : do të thotë që fotografia nuk mund të shtohet, shiko konfigurimin dhe lejimet në dosjen ku fotografitë janë vendosur'.
                                '<li>Nëse shenjat OK, DP, PB nuk duken kliko tek imazhi i prishur për të parë ndonjë mesazh gabimesh të dhëna nga PHP'.
                                '<li>Nëse vozitësi juaj pushon së funksionuari (timeout), kliko tek butoni i ringarkimit'.
                                '</ul>',
		'select_album' => 'Zgjidh albumin', //cpg1.3.0
        'check_all' => 'Shënoji të gjitha', //cpg1.3.0
        'uncheck_all' => 'Anulloji të gjitha', //cpg1.3.0
		'no_folders' => 'Nuk ka dosje brenda dosjes "albums" në këtë moment. Sigurohuni të krijoni një dosje brenda dosjes "albums" dhe ngarkoni aty nëpërmjet ngarkimit FTP. Ju nuk duhet të ngarkoni tek dosjet "userpics" apo "edit", pasi ato janë të rezervuara për ngarkime http dhe për ndryshime të brendëshme.', //cpg1.4
   		'albums_no_category' => 'Albume pa kategori', //cpg1.4 // album pulldown mod, added by frogfoot
  		'personal_albums' => '* Albume personale ', //cpg1.4 // album pulldown mod, added by frogfoot
  		'browse_batch_add' => 'Pamje shfletuese (rekomandohet)', //cpg1.4
  		'edit_pics' => 'Editim i skedarëve', //cpg1.4
  		'edit_properties' => 'Vetitë e albumit', //cpg1.4
  		'view_thumbs' => 'Pamje e tablove', //cpg1.4
);
// ------------------------------------------------------------------------- //
// File stat_details.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('STAT_DETAILS_PHP')) $lang_stat_details_php = array(
  'show_hide' => 'shfaq/fshi ketë kolonë', //cpg1.4
  'vote' => 'Detajet e votimit ', //cpg1.4
  'hits' => 'Detajet e suksesit', //cpg1.4
  'stats' => 'Statistikat e votimit', //cpg1.4
  'sdate' => 'Data', //cpg1.4
  'rating' => 'Vlerësimi', //cpg1.4
  'search_phrase' => 'Kërkm i një fraze', //cpg1.4
  'referer' => 'Referuar', //cpg1.4
  'browser' => 'Shfletim', //cpg1.4
  'os' => 'Sistemi i shfrytëzimit', //cpg1.4
  'ip' => 'IP', //cpg1.4
  'sort_by_xxx' => 'Rendit sipas %s', //cpg1.4
  'ascending' => 'ngjitëse', //cpg1.4
  'descending' => 'zbritëse', //cpg1.4
  'internal' => 'i/e brendshëm/e', //cpg1.4
  'close' => 'mbyll', //cpg1.4
  'hide_internal_referers' => 'fshi referuesit e brendëshëm', //cpg1.4
  'date_display' => 'Shfaq datën', //cpg1.4
  'submit' => 'Paraqit / rifresko', //cpg1.4
);

// ------------------------------------------------------------------------- //

// File thumbnails.php

// ------------------------------------------------------------------------- //

// Void

// ------------------------------------------------------------------------- //

// File banning.php

// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) $lang_banning_php = array(
                'title' => 'Përjashto përdoruesit', 
                'user_name' => 'Emri i Përdoruesit', 
                'ip_address' => 'Adresa IP', 
                'expiry' => 'Afati (i bardhë nëse përgjithmonë)', 
                'edit_ban' => 'Ruaj ndryshimet', 
                'delete_ban' => 'Fshi', 
                'add_new' => 'Shto një ndalim të ri', 
                'add_ban' => 'Shto', 
				'error_user' => 'Përduruesi nuk mund gjendet', //cpg1.3.0
  				'error_specify' => 'Ju duhet të specifikoni një përdorues ose adresë IP', //cpg1.3.0
  				'error_ban_id' => 'ID e pavlefshme!', //cpg1.3.0
  				'error_admin_ban' => 'Ju nuk mund të ndaloni vehten tuaj!', //cpg1.3.0
  				'error_server_ban' => 'Ju jeni duke ndaluar serverint tuaj? hej, mos e bëjë një gjë të tillë...', //cpg1.3.0
  				'error_ip_forbidden' => 'Ju nuk mund të ndaloni këtë adresë IP pasi ajo nuk është e specifikuar!', //cpg1.3.0
  				'lookup_ip' => 'Kërko rrugën e një adrese IP', //cpg1.3.0
 			    'submit' => 'ec!', //cpg1.3.0
				'select_date' => 'zgjidh datën', //cpg1.4
);

// ------------------------------------------------------------------------- //

// File upload.php

// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) $lang_upload_php = array(
  'title' => 'Ngarkoni fotografi', //cpg1.3.0
  'custom_title' => 'Furmular i kërkuar i personalizuar', //cpg1.3.0
  'cust_instr_1' => 'Ju mund të zgjidhni numrin e dëshiruar të kutive të ngarkimit. Sidoqoftë ju nuk mund të zgjidhni më shumë kuti nga sa lejohet këtu më poshtë', //cpg1.3.0
  'cust_instr_2' => 'Numri i kutive të kërkuara', //cpg1.3.0
  'cust_instr_3' => 'Kutitë e ngarkimit të fotografive: %s', //cpg1.3.0
  'cust_instr_4' => 'Kuti ngarkimi URI/URL : %s', //cpg1.3.0
  'cust_instr_5' => 'Kuti ngarkimi URI/URL:', //cpg1.3.0
  'cust_instr_6' => 'Kutitë e  ngarkimit të fotografive:', //cpg1.3.0
  'cust_instr_7' => 'Luteni të zgjidhni një numër për çdo tip kutie ngarkimi për këtë moment.  Pastaj klikoni  \'Vazhdim\'. ', //cpg1.3.0
  'reg_instr_1' => 'Veprim i gabuar në krijimin e formularit.', //cpg1.3.0
  'reg_instr_2' => 'Tash ju mund të ngarkoni fotografi duke përdorur kutit e mëposhtëme të ngarkimit. Madhësia e faileve të ngarkuara në server nuk duhet të kaloj  %s KB secila. Faillet ZIP të ngarkuara tek \'Ngarkim fotografish\' dhe \' Ngarkime URI/URL \' do të ngelen të kompresuara.', //cpg1.3.0
  'reg_instr_3' => 'Nëse dëshironi që faillet ZIP ose të arkivuara të dekompresohen, ju duhet të përdorni kutin e ngarkimit tek zona \'Ngarkim ZIP të dekompresueshme\' .', //cpg1.3.0
  'reg_instr_4' => 'Kur përdor seksioni ngarkime URI/URL, luteni të fusni adresë ku ndodhet skedari ose fotografia sipas formës : http://www.mysite.com/images/example.jpg', //cpg1.3.0
  'reg_instr_5' => 'Sapo të keni plotësuar formularin, klikoni \'VAZHDIM\'.', //cpg1.3.0
  'reg_instr_6' => 'Ngarkime ZIP të dekompresueshme:', //cpg1.3.0
  'reg_instr_7' => 'Ngarkim fotografish:', //cpg1.3.0
  'reg_instr_8' => 'Ngarkime URI/URL :', //cpg1.3.0
  'error_report' => 'Raport gabimi', //cpg1.3.0
  'error_instr' => 'Ngarki i radhës ka hasur në një gabim:', //cpg1.3.0
  'file_name_url' => 'Emri i faillit/URL', //cpg1.3.0
  'error_message' => 'Masazh gabimi', //cpg1.3.0
  'no_post' => 'Fotografie e pa ngarkuar nga POST.', //cpg1.3.0
  'forb_ext' => 'Ekstensioni i fotografisë nuk është i lejuar.', //cpg1.3.0
  'exc_php_ini' => 'Tejaklim i madhësisë së dokumentit të lejuar sipas php.ini.', //cpg1.3.0
  'exc_file_size' => 'Tejaklim i madhësisë së dokumentit të lejuar sipas CPG.', //cpg1.3.0
  'partial_upload' => 'Vetëm një ngarkim i pjesëshëm.', //cpg1.3.0
  'no_upload' => 'Ngarkimi nuk u krye.', //cpg1.3.0
  'unknown_code' => 'Kod i gabuar ngarkimi PHP i panjohur.', //cpg1.3.0
  'no_temp_name' => 'Nuk ka ngarkim - Nuk ekziston një dosje e përkohëshme.', //cpg1.3.0
  'no_file_size' => 'Nuk përmban të dhëna /E korruptuar', //cpg1.3.0
  'impossible' => 'E pamundur të zhvendoset.', //cpg1.3.0
  'not_image' => 'Nuk ka imazh/Korruptuar', //cpg1.3.0
  'not_GD' => 'Nuk është një ekstension GD.', //cpg1.3.0
  'pixel_allowance' => 'Tejkalim i pikseleve të lejueshme.', //cpg1.3.0
  'incorrect_prefix' => 'Prefiks URI/URL i gabuar', //cpg1.3.0
  'could_not_open_URI' => 'Adresa URI nuk hapet.', //cpg1.3.0
  'unsafe_URI' => 'Siguria e pavërtetueshme.', //cpg1.3.0
  'meta_data_failure' => 'Gabim i të dhëna Meta', //cpg1.3.0
  'http_401' => '401 I paautorizuar', //cpg1.3.0
  'http_402' => '402 duhet paguar', //cpg1.3.0
  'http_403' => '403 Ndalohet', //cpg1.3.0
  'http_404' => '404 Nuk gjendet', //cpg1.3.0
  'http_500' => '500 Gabim i brendëshëm i serverit', //cpg1.3.0
  'http_503' => '503 Servis i padisponueshëm', //cpg1.3.0
  'MIME_extraction_failure' => 'Tipi MIME i pavendosur.', //cpg1.3.0
  'MIME_type_unknown' => 'Tip MIME i panjohur', //cpg1.3.0
  'cant_create_write' => 'Nuk mund të krijohet fail e regjistrueshme.', //cpg1.3.0
  'not_writable' => 'Nuk mund të shkruhet në skedar.', //cpg1.3.0
  'cant_read_URI' => 'Nuk mund të lexohet adresa URI/URL', //cpg1.3.0
  'cant_open_write_file' => 'Nuk mund të hapet adresa URI.', //cpg1.3.0
  'cant_write_write_file' => 'Nuk mund të shkruaht tek adresa URI.', //cpg1.3.0
  'cant_unzip' => 'Dekompresion i pamundur .', //cpg1.3.0
  'unknown' => 'Gabim i panjohur', //cpg1.3.0
  'succ' => 'Ngarkim i suksesshëm', //cpg1.3.0
  'success' => '%s ngarkim(e) kanë qenë të suksesshme.', //cpg1.3.0
  'add' => 'Klikoni  \'VAZHDIM\' për të futur fotografitë në album.', //cpg1.3.0
  'failure' => 'Ngarkim i dështuar', //cpg1.3.0
  'f_info' => 'Indormacion i dokumentit ose fotos.', //cpg1.3.0
  'no_place' => 'Fotografia e mëparëshme nuk mund të vendoset.', //cpg1.3.0
  'yes_place' => 'Fotografia e mëparëshme u vendos me sukses.', //cpg1.3.0
  'max_fsize' => 'Maksimi i madhësisë së fotografive që lejohet është %s KB',
  'album' => 'Albumi',
  'picture' => 'Foto', //cpg1.3.0
  'pic_title' => 'Titulli i fotografisë', //cpg1.3.0
  'description' => 'Përshkrimi i fotografisë', //cpg1.3.0
  'keywords' => 'Fjalë kyç (të ndara me hapsira)',
  'err_no_alb_uploadables' => 'Na vjenë keq por nuk ka ndonjë album ku tu lejohet ngarkimi i fotografive', //cpg1.3.0
  'place_instr_1' => 'Tani, luteni ti vendosni fotografitë në albume. Ju mund të shtoni informacione të mëtejshme për çdonjë nga fotografitë.', //cpg1.3.0
  'place_instr_2' => 'Fotografi të tjera presin të vendosen në albume. Klikoni \'VAZHDIM\'.', //cpg1.3.0
  'process_complete' => 'Ju i keni vendosur me sukses të gjitha fotografitë.', //cpg1.3.0
  'albums_no_category' => 'Albume pa kategori', //cpg1.4. //album pulldown mod, added by frogfoot
  'personal_albums' => '* Albume personale', //cpg1.4 //album pulldown mod, added by frogfoot
  'select_album' => 'Zgjidh albumin', //cpg1.4 //album pulldown mod, added by frogfoot
  'close' => 'Mbyll', //cpg1.4
  'no_keywords' => 'Na vjenë keq por nuk ka fjalë-kyçe të disponueshme!', //cpg1.4
  'regenerate_dictionary' => 'Ripërtërim i Fjalorit', //cpg1.4
);

// ------------------------------------------------------------------------- //

// File usermgr.php

// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
		'memberlist' => 'Lista e anëtarëve', //cpg1.4
		'user_manager' => 'Administrator i përdoruesve', //cpg1.4
        'title' => 'Menaxhoni përdoruesit',
        'name_a' => 'Emrat në ngjitje',
        'name_d' => 'Emrat në zbritje',
        'group_a' => 'Grupe në ngjitje',
        'group_d' => 'Grupe në zbritje',
        'reg_a' => 'Data e regjistrimit në ngjitje',
        'reg_d' => 'Data e regjistrimit në zbritje',
        'pic_a' => 'Numri i fotove në ngjitje',
        'pic_d' => 'Numri i fotove në zbritje',
        'disku_a' => 'Harxhimi i diskut në ngjitje',
        'disku_d' => 'Harxhimi i diskut në zbritje',
		'lv_a' => 'Vizita e fundit në ngjitje', //cpg1.3.0
        'lv_d' => 'Vizita e funditnë zbritje', //cpg1.3.0
        'sort_by' => 'Renditi përdoruesit sipas',
        'err_no_users' => 'Tabela e përdoruesit është bosh !',
        'err_edit_self' => 'Ju nuk mund të editoni profilin tuaj, kliko tek lidhja \'Profili im\' për të bër ndryshime në të',
        'edit' => 'EDITO',
        'delete' => 'FSHI',
  		'with_selected' => 'Përzgjidh:', //cpg1.4
  		'delete_files_no' => 'Mbaji skedarët publik(por duke i lënë anonimë)', //cpg1.4
  		'delete_files_yes' => 'fshiji skedarët publik', //cpg1.4
  		'delete_comments_no' => 'mbaji komentet(por duke i lënë anonimë)', //cpg1.4
  		'delete_comments_yes' => 'fshiji komentet', //cpg1.4
  		'activate' => 'Aktivizo', //cpg1.4
  		'deactivate' => 'Çaktivizo', //cpg1.4
  		'reset_password' => 'Ndrysho fjalë-kalimin', //cpg1.4
  		'change_primary_membergroup' => 'Ndryshim i grupit kryesor', //cpg1.4
  		'add_secondary_membergroup' => 'Shto një grup dytësor', //cpg1.4
        'name' => 'Emri i përdoruesit',
        'group' => 'Grupi',
        'inactive' => 'Jo aktiv',
        'operations' => 'Veprime',
        'pictures' => 'Fotografi',
        'disk_space_used' => 'Hapsira e përdorur', //cpg1.4
  		'disk_space_quota' => 'Kuota e hapsirës', //cpg1.4
        'registered_on' => 'Regjistruar më',
        'u_user_on_p_pages' => '%d përdorues në %d faqe',
        'confirm_del' => 'Jeni i sigurt që dëshironi të FSHINIkëtë përdorues ? \\nTë gjitha fotografitë dhe albumet do të jenë gjithashtu të fshira.',
        'mail' => 'E-MAIL',
        'err_unknown_user' => 'Përdoruesi i zgjedhur nuk ekziston !',
        'modify_user' => 'Modifiko përdoruesin',
        'notes' => 'Shënime',
        'note_list' => '<li>Nëse ju nuk dëshironi të ndryshoni fjalë-kalimin, lëreni fushën "fjalë-kalim" të bardhë.',
		'password' => 'Fjalë-kalimi',
        'user_active' => 'Përdoruesi është aktiv',
        'user_group' => 'Grup përdoruesash',
        'user_email' => 'E-maili i përdoruesit',
        'user_web_site' => 'Web siti i përdoruesit',
        'create_new_user' => 'Krijo një përdorues të ri',
        'user_location' => 'Vendndodhja e përdoruesit',
        'user_interests' => 'Interesate përdoruesit',
        'user_occupation' => 'Profesioni i përdoruesit',
		'user_profile1' => '$user_profile1', //cpg1.4
  		'user_profile2' => '$user_profile2', //cpg1.4
 		'user_profile3' => '$user_profile3', //cpg1.4
  		'user_profile4' => '$user_profile4', //cpg1.4
  		'user_profile5' => '$user_profile5', //cpg1.4
  		'user_profile6' => '$user_profile6', //cpg1.4
  		'latest_upload' => 'Ngarkimet më të fundit', //cpg1.3.0
        'never' => 'kurr', //cpg1.3.0
		'search' => 'Kërko një përdorues', //cpg1.4
  		'submit' => 'Paraqit', //cpg1.4
  		'search_submit' => 'Ec!', //cpg1.4
  		'search_result' => 'Rezultatet e kërkimit për : ', //cpg1.4
  		'alert_no_selection' => 'Ju duhet së pari të zgjidhni një përdorues!', //cpg1.4 //js-alert
  		'password' => 'fjalë-kalimi', //cpg1.4
  		'select_group' => 'Zgjidhni një grup', //cpg1.4
  		'groups_alb_access' => 'Të drejtat ndaj albumeve për grupin', //cpg1.4
  		'album' => 'Albumi', //cpg1.4
  		'category' => 'KAtegoria', //cpg1.4
  		'modify' => 'Ndryshim ?', //cpg1.4
  		'group_no_access' => 'Ky grup nuk ka të drejta të veçanta', //cpg1.4
  		'notice' => 'Kujdes', //cpg1.4
  		'group_can_access' => 'Të drejta të rezervuara vetëm pë grupin "%s"', //cpg1.4
);

// ------------------------------------------------------------------------- //

// File util.php

// ------------------------------------------------------------------------- //
//ajet //--------------enlever après traduction-----------------------------//
if (defined('UTIL_PHP')) {
$lang_util_desc_php = array(
'Përditësim i titullit nga emri i skedarit', //cpg1.4
'Fshi titujt', //cpg1.4
'Rindërto tablotë dhe ridimensiono fotografitë', //cpg1.4
'Fshi përmasat origjinale duke i zvenësuar ato me versionin e ridimensionuar', //cpg1.4
'Fshi përmasat origjinale apo ndërmjetëse për faqet web falas', //cpg1.4
'Fshini komentet jetimë', //cpg1.4
'Ri lexim i përmasave të skedarit (nëse e keni përpunuar fotografitë manualisht)', //cpg1.4
'Rivendos llogaritsin e shikimeve', //cpg1.4
'Shfaq phpinfo', //cpg1.4
'Përditëso bazën e të dhënave', //cpg1.4
'Shfaq skedarët \'log\'', //cpg1.4
);

$lang_util_php = array(
  'title' => 'Mjetet administruese (Ridimensionim i fotografive)',
  'what_it_does' => 'Funksionet',
  'file' => 'Skedar',
  'problem' => 'Problem', //cpg1.4
  'status' => 'Statusi', //cpg1.4
  'title_set_to' => 'titulli i ndryshuar në',
  'submit_form' => 'paraqit',
  'updated_succesfully' => 'përditësuar me sukses',
  'error_create' => 'GABIM përgjatë krijimit',
  'continue' => 'Vazhdoni me më shumë imazhe', 
  'main_success' => 'Ky dokument (imazh) %s është përdorur tash si imazhi kryesor', 
  'error_rename' => 'Gabim gjatë ndryshimit të emrit të %s në %s', 
  'error_not_found' => 'Dokumenti %s nuk u gjend',
  'back' => 'kthim tek faqja kryesore', 
  'thumbs_wait' => 'Përditësim i tablove dhe/ose imazheve të ridemensionuara, ju lutemi prisni...', 
  'thumbs_continue_wait' => 'Vazhdim i përditësimit tëbtablove dhe/ose imazheve të ridemensionuara ...', 
  'titles_wait' => 'Përditësim i titujve, ju lutemi prisni...', 
  'delete_wait' => 'Fshirje e titujve, ju lutemi prisni...', 
  'replace_wait' => 'Fshirje e origjinalëve dhe zvendësim i tyre me imazhe të ridimensionuara, ju lutemi prisni..', 
  'instruction' => 'Instrucsione të shpejta',
  'instruction_action' => 'Zgjidhni një veprim', 
  'instruction_parameter' => 'Përkufizoni parametrat', 
  'instruction_album' => 'Zgjidh albumin', 
  'instruction_press' => 'Shtyp %s', 
  'update' => 'Perditëso tablot dhe/ose fotografitë e ridimensionuara', 
  'update_what' => 'Çfarë duhet të përditësohet', 
  'update_thumb' => 'Vetëm tablot', 
  'update_pic' => 'Vetëm fotografitë e ridimensionuara', 
  'update_both' => 'Edhe tablotë edhe fotografitë e ridimensionuara', 
  'update_number' => 'Numri i fotografive të trajtuara me nje klik', 
  'update_option' => '(Mundohuni ta zvogëloni këtë vlerë nëse kini probleme me timeout)',
  'filename_title' => 'Emri i dokumentit / Titulli i fotografisë', 
  'filename_how' => 'Si duhet modifikuar emri i dokumentit', 
  'filename_remove' => 'Ndryshoni fundin .jpg duke e zvendësuar me _ (underscore) me hapsira', 
  'filename_euro' => 'Ndërro 2003_11_23_13_20_20.jpg me 23/11/2003 13:20', 
  'filename_us' => 'Ndërro 2003_11_23_13_20_20.jpg me 11/23/2003 13:20', 
  'filename_time' => 'Ndërro 2003_11_23_13_20_20.jpg me 13:20', 
  'delete' => 'Fshi titullin e fotografisë ose përmasat origjinale të saj', 
  'delete_title' => 'Fshi titullin e fotografisë', 
  'delete_title_explanation' => 'Ky hap fshin titujt e të gjithë skedareve në albumin që ju specifikuat.', //cpg1.4
  'delete_original' => 'Fshi përmasat origjinale të fotografosë', 
  'delete_original_explanation' => 'Ky hap fshinë të gjitha fotot me përmasat origjinale.', //cpg1.4
  'delete_intermediate' => 'Fshi fotografitë në fazën ndërmjetëse', //cpg1.4
  'delete_intermediate_explanation' => 'Ky veprim fshinë fotografitë ndërmjetëse(normale) .<br />Përdorni këtë funksion për të liruar hapsirë në disk nësee keni çaktivizuar \'Krijo fotografi ndërmjetëse\' tek konfigurimi pas shtimit të fotografive.', //cpg1.4
  'delete_replace' => 'Fshi imazhin origjinal duke e zvendësuar me versionin e ridimensionuar', 
  'titles_deleted' => 'Gjithë titujt nëe albumin e specifikuar u fshinë', //cpg1.4
  'deleting_intermediates' => 'Duke fshirë fotografitë ndërmjetëse, luteni të prisni...', //cpg1.4
  'searching_orphans' => 'Duke kërkuar skedarë jetimë, luteni të prisni...', //cpg1.4  'select_album' => 'Zgjidhni albumin',
  'delete_orphans' => 'Delete comments on missing files', //cpg1.4
  'delete_orphans_explanation' => 'Kjo ju lejon të fshini komentet për fotografitë që nuk janë më në galeri.<br />Verifiko të gjithë albumet.', //cpg1.4
  'refresh_db' => 'Ringarko informacionin për përmasat dhe madhësinë e skedarëve', //cpg1.4
  'refresh_db_explanation' => 'Kjo do rilexoj dimensionet dhe madhësinë e skedareve. Përdor këtë funksion nëse kuota nuk është në rregull apo nëse e keni ndryshuar skedarin manualisht.', //cpg1.4
  'reset_views' => 'Rifillo numëruesin e shikimeve', //cpg1.4
  'reset_views_explanation' => 'Vendos llogaritësin e shikimeve të të gjitha skedareve në zero në albumin e specifikuar.', //cpg1.4
  'orphan_comment' => 'Komente jetim të gjetura',
  'delete' => 'Fshi',
  'delete_all' => 'Fshiji të gjitha',
  'delete_all_orphans' => 'Fshi gjithë jetimët?', //cpg1.4
  'comment' => 'Koment: ',
  'nonexist' => 'Bashkuar në një dokument që nuk ekziston # ',
  'phpinfo' => 'Shfaq phpinfo',
  'phpinfo_explanation' => 'Disa informacione teknike të serverit tuaj.<br /> - Ju mund tu kërkohet ky informacion nëse kërkoni mbështetje.', //cpg1.4
  'update_db' => 'Përditëso bazën e të dhënave',
  'update_db_explanation' => 'Nëse ju keni zvendësuar skedare, shtuar një modifikim apo keni modernizuar në bazë të një varianti të mëparshëm të coppermine, sigurohuni të përditësoni bazën e të dhënave gjithashtu. Kjo gjë do të krijojë tabelat e domosdoshme dhe/ose konfiguro vlerat tek baza juaj e të dhënave coppermine.',
  'view_log' => 'Shiko skedaret e identifikimit', //cpg1.4
  'view_log_explanation' => 'Coppermine mund të ruaj gjurmët e të gjitha veprimeve të kryera nga përdoruesit. Ju mund të verifikoni identifikimet në galeri nëse ju keni aktivizuar një gjë të tillë tek <a href="admin.php">konfigurimi coppermine </a>.', //cpg1.4
  'versioncheck' => 'Verifiko versionin', //cpg1.4
  'versioncheck_explanation' => 'Verifikoni versionin e skedarit për të parë nëse ju i keni zvendësuar të gjithë skedarët pas një modernnizimi, apo nëse coppermine është përditësuar pas daljes së një varianti të ri.', //cpg1.4
  'bridgemanager' => 'Administrimi i urës', //cpg1.4
  'bridgemanager_explanation' => 'Aktivizo/Çaktivizo integrimin (urëzimin) e Coppermine me një aplikim tjetër (psh me forumin tuaj).', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
if (defined('UTIL_PHP')) 

$lang_util_php = array(
        'title' => 'Ridimensiono fotografitë', 
        'what_it_does' => 'Funksionet', 
        'what_update_titles' => 'Përditëso titullin duke u nisur nga emri i dosjes', 
        'what_delete_title' => 'Fshi titullin', 
        'what_rebuild' => 'Rindërto tablotë dhe fotografitë e ridimensionuara', 
        'what_delete_originals' => 'Fshi fotografitë me dimensione origjinale duke i zvendësuar ato me versionin e ridimensionuar', 
        'file' => 'File', 
        'title_set_to' => 'titulli i ndërruar në', 
        'submit_form' => 'Paraqit', 
        'updated_succesfully' => 'përditësuar me sukses', 
        'error_create' => 'GABIM përgjatë krijimit', 
        'continue' => 'Vazhdoni me më shumë imazhe', 
        'main_success' => 'Ky dokument (imazh) %s është përdorur tash si imazhi kryesor', 
        'error_rename' => 'Gabim gjatë ndryshimit të emrit të %s në %s', 
        'error_not_found' => 'Dokumenti %s nuk u gjend', 
        'back' => 'kthim tek faqja kryesore', 
        'thumbs_wait' => 'Përditësim i tablove dhe/ose imazheve të ridemensionuara, ju lutemi prisni...', 
        'thumbs_continue_wait' => 'Vazhdim i përditësimit tëbtablove dhe/ose imazheve të ridemensionuara ...', 
        'titles_wait' => 'Përditësim i titujve, ju lutemi prisni...', 
        'delete_wait' => 'Fshirje e titujve, ju lutemi prisni...', 
        'replace_wait' => 'Fshirje e origjinalëve dhe zvendësim i tyre me imazhe të ridimensionuara, ju lutemi prisni..', 
        'instruction' => 'Instrucsione të shpejta', 
        'instruction_action' => 'Zgjidhni një veprim', 
        'instruction_parameter' => 'Përkufizoni parametrat', 
        'instruction_album' => 'Zgjidh albumin', 
        'instruction_press' => 'Shtyp %s', 
        'update' => 'Perditëso tablot dhe/ose fotografitë e ridimensionuara', 
        'update_what' => 'Çfarë duhet të përditësohet', 
        'update_thumb' => 'Vetëm tablot', 
        'update_pic' => 'Vetëm fotografitë e ridimensionuara', 
        'update_both' => 'Edhe tablotë edhe fotografitë e ridimensionuara', 
        'update_number' => 'Numri i fotografive të trajtuara me nje klik', 
        'update_option' => '(Mundohuni ta zvogëloni këtë vlerë nëse kini probleme me timeout)', 
        'filename_title' => 'Emri i dokumentit / Titulli i fotografisë', 
        'filename_how' => 'Si duhet modifikuar emri i dokumentit', 
        'filename_remove' => 'Ndryshoni fundin .jpg duke e zvendësuar me _ (underscore) me hapsira', 
        'filename_euro' => 'Ndërro 2003_11_23_13_20_20.jpg me 23/11/2003 13:20', 
        'filename_us' => 'Ndërro 2003_11_23_13_20_20.jpg me 11/23/2003 13:20', 
        'filename_time' => 'Ndërro 2003_11_23_13_20_20.jpg me 13:20', 
        'delete' => 'Fshi titullin e fotografisë ose përmasat origjinale të saj', 
        'delete_title' => 'Fshi titullin e fotografisë', 
        'delete_original' => 'Fshi përmasat origjinale të fotografosë', 
        'delete_replace' => 'Fshi imazhin origjinal duke e zvendësuar me versionin e ridimensionuar', 
        'select_album' => 'Zgjidh albumin', 
		'delete_orphans' => 'Fshi komentet jetimë (Kjo vlenë për të gjithë albumet)', //cpg1.3.0
  		'orphan_comment' => 'Komente jetim të gjetura', //cpg1.3.0
  		'delete' => 'Fshi', //cpg1.3.0
  		'delete_all' => 'Fshi të gjitha', //cpg1.3.0
  		'comment' => 'Koment: ', //cpg1.3.0
  		'nonexist' => 'Bashkuar në një dokument që nuk ekziston # ', //cpg1.3.0
  		'phpinfo' => 'Shfaq phpinfo', //cpg1.3.0
  		'update_db' => 'Përditëso bazën e të dhënave', //cpg1.3.0
 		'update_db_explanation' => 'Nëse ju keni zvendësuar skedaret copermine, nëse keni shtuar, modifikuar apo përditësuarnga versionet e mëparëshme të copermine, sigurohuni të instaloni versionin upgrade të bazës së të dhënave. Kjo krijon tabelat e nevojëshme dhe konfiguron bazën tuaj të të dhënave copermine.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File versioncheck.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('VERSIONCHECK_PHP')) $lang_versioncheck_php = array(
  'title' => 'Verifikim i versionit', //cpg1.4
  'what_it_does' => 'This page is meant for users who have updated their coppermine install. 
  This script goes through the files on your webserver and tries to determine if your local file versions on the webserver are the same as the ones from the repository at http://coppermine.sourceforge.net, this way displaying the files you were meant to update as well.<br />It will show everything in red that needs to be fixed. Entries in yellow need looking into. Entries in green (or your default font color) are OK.<br />Click on the help icons to find out more.', //cpg1.4
  'online_repository_unable' => 'Lidhja me serverin ku ndodhen skedarët e shkarkueshëm është e pamundur', //cpg1.4
  'online_repository_noconnect' => 'Coppermine nuk qe në gjendje të lidhet me serverin e shkarkimit. Kjo mund të lidhet me dy arsye:', //cpg1.4
  'online_repository_reason1' => 'shkarkuesi coppermine në linjë është për momentin jo funksionel - Verifikoni nëse mund të vozisni këtë adressë: %s - nëse ju nuk mundni të hyni nëtë adresë, provojeni më vonë.', //cpg1.4
  'online_repository_reason2' => 'PHP në serverin tuaj është konfiguruar %s jo aktive (paraprakisht është konfiguruar aktive). Nëse ju jeni administratori i serverit, aktivizojeni këtë opsion tek <i>php.ini</i> (ose të paktë lejoni të jetë i mbishkrueshëm me %s). Nëse ju jeni të strehuar në një server që ju nuk e administroni atëherë ju duhet të jetoni me faktin që ju nuk mund të krahasoni skedarët e serverit tuaj me ato të serverit të shkarkimit copermmine. Kështu faqja juaj do të shfaqi versionin e skedarëve që kanë ardhur me versionin e shpërndarjes dhe jo skedarët e përditësimit.', //cpg1.4
  'online_repository_skipped' => 'Lidhja me shkarkuesin në linjë u anashkalua', //cpg1.4
  'online_repository_skipped' => 'Lidhja me shkarkuesin në linjë u anashkalua', //cpg1.4
  'online_repository_to_local' => 'Skripti është duke përdorur kopjen lokale të skedarëve të versionit. Të dhënat mund të jenë të pasakta nëse ju keni bërë një përditësim të pjesëshëm të Coppermine dhe nëse nuk i keni shkarkuar të gjitha skedaret. Gjithashtu edhe ndryshimet e bëra më pas nuk do të merren parasysh.', //cpg1.4
  'local_repository_unable' => 'Lidhja me depozitën ku ndodhen skedarët në serverin tuaj është e pamundur', //cpg1.4
  'local_repository_explanation' => 'Coppermine nuk mundi të lidhet me depozitën e skedarit %s tek serveri i webserverit tuaj. Kjo do të thotë që ka të ngjarë që ju nuk e keni ngarkuar skedarin depozitë tek serveri juaj. Bëjeni një gjë të tillë tani dhe provoni të rishfaqni këtë faqe duke klikuar tek rifresko tek vositësi juaj .<br />Nëse dhe pas kësaj skripti nuk funksionon, hosti i web sitit tuaj e ka çaktivizuar në mënyrë komplete një pjesë të <a href="http://www.php.net/manual/en/ref.filesystem.php"> funksionimit të filesistemit PHP</a>. Në këtë rast, na vjenë keq por... 
    ju nuk do të jeni në gjendje ta përdorni këtë mjet.', //cpg1.4
  'coppermine_version_header' => 'Versioni i instaluar i Coppermine', //cpg1.4
  'coppermine_version_info' => 'Në këtë moment ju keni të instaluar: %s', //cpg1.4
  'coppermine_version_explanation' => 'Nëse ju mendoni se kemi të bëjmë me një gabim dhe ju mendoni se keni një version më të fundit të Copermmine, ju ndoshta nuk keni shkarkuar versionin më Të fundit të këtij skedari <i>include/init.inc.php</i>', //cpg1.4
  'version_comparison' => 'Krahasim i versionit', //cpg1.4
  'folder_file' => 'dosje/skedar', //cpg1.4
  'coppermine_version' => 'versioni i cpg', //cpg1.4
  'file_version' => 'versioni i skedarit', //cpg1.4
  'webcvs' => 'web cvs', //cpg1.4
  'writable' => 'e shkruajtshme', //cpg1.4
  'not_writable' => 'e pashkruajtshme', //cpg1.4
  'help' => 'Ndihmë', //cpg1.4
  'help_file_not_exist_optional1' => 'skedari/dosja nuk ekziston', //cpg1.4
  'help_file_not_exist_optional2' => 'Skedari/dosja %s nuk gjendet në serverin tuaj. Edhe pse është fakultative ju duhet ta ngarkoni atë (përdorni një klient FTP) tek serveri juaj nëse ju hasni në vështirësi .', //cpg1.4
  'help_file_not_exist_mandatory1' => 'skedari/dosja nuk ekziston', //cpg1.4
  'help_file_not_exist_mandatory2' => 'Skedari/dosja %s nuk gjendet në serverin tuaj, edhe pse është e detyrueshme. Ngarkojeni pra në serverin tuaj (duke përdorur një klient FTP).', //cpg1.4
  'help_no_local_version1' => 'Nuk ka version të skedarit lokal', //cpg1.4
  'help_no_local_version2' => 'Skripti nuk është në gjendje të nxjerri versionin e skedarit lokal - skedari juaj ose nuk është përditësuar ose është modifikuar duke i hequr informacionin që ndodhet në krye. Përditësimi i skedarit është i rekomandueshëm.', //cpg1.4
  'help_local_version_outdated1' => 'Version lokal i tejkaluar', //cpg1.4
  'help_local_version_outdated2' => 'Versioni i këtij skedari duket se është i një modeli të vjetër të Coppermine (ndoshta ju keni bërë kalim në versionin më modern). Sigurohuni që të përditësoni edhe këtë skedar.', //cpg1.4
  'help_local_version_na1' => 'E pamundur të nxirret informacion për versionin cvs', //cpg1.4
  'help_local_version_na2' => 'Skripti nuk mundet të vendosi çfarë versioni cvs ka skedari në serverin tuaj. Ju duhet të ngarkoni skedarin nga paketa juaj.', //cpg1.4
  'help_local_version_dev1' => 'Version që është duke u zhvilluar', //cpg1.4
  'help_local_version_dev2' => 'Skedari në web serverin tuaj duket të jetë më i ri nga versioni i Coppermine. Ju ose jeni duke përdorur një skedar që është duke u zhvilluar (ju duhet të bëni këtë gjë vetëm nëse e dini mirë se çfarë bëni), ose ju keni kaluar në version më modern të Coppermine duke mos ngarkuar include/init.inc.php', //cpg1.4
  'help_not_writable1' => 'Dosje e pashkruajtshme', //cpg1.4
  'help_not_writable2' => 'Ndryshoni lejimet e dosjes (CHMOD) që ti lejoni skriptit të mundet të shkruaj dosjen %s dhe gjithshçka gjendet brenda saj.', //cpg1.4
  'help_writable1' => 'Dosje e shkruajtshme', //cpg1.4
  'help_writable2' => 'Dosja %s është e shkruajtshme. Ky është një risk i panevojshëm, ajo që coppermine ka nevojë për të drejtën lexim/ekzekutim.', //cpg1.4
  'help_writable_undetermined' => 'Coppermine nuk qe në gjendje të përcaktonte nëse dosja është e shkrueshme.', //cpg1.4
  'your_file' => 'skedari juaj', //cpg1.4
  'reference_file' => 'skedari referencë', //cpg1.4
  'summary' => 'Përmbajtja', //cpg1.4
  'total' => 'Totali i skedarëve/dosjeve të verifikuara', //cpg1.4
  'mandatory_files_missing' => 'Mungojnë skedare të detyrueshme', //cpg1.4
  'optional_files_missing' => 'Mungojnë skedare fakultative', //cpg1.4
  'files_from_older_version' => 'Skedare të mbetura nga versionet e vjetra të Coppermine ', //cpg1.4
  'file_version_outdated' => 'Skedar i një versioni të vjetër', //cpg1.4
  'error_no_data' => 'Skripti bëri një përpjekje por nuk qe në gjendje të nxjerr ndonjë informacion. Na vjenë shumë keq për këtë telash.', //cpg1.4
  'go_to_webcvs' => 'shko tek %s', //cpg1.4
  'options' => 'Opsione', //cpg1.4
  'show_optional_files' => 'Shfaq dosjet/skedaret opsionale', //cpg1.4
  'show_mandatory_files' => 'Shfaq skedaret e detyrueshëm', //cpg1.4
  'show_file_versions' => 'shfaq versionin e skedarit', //cpg1.4
  'show_errors_only' => 'shfaq vetëm dosjet/skedarët që kanë gabime', //cpg1.4
  'show_permissions' => 'shfaq të drejtat mbi dosjet', //cpg1.4
  'show_condensed_output' => 'shfaq pamjen të përqëndruar(për të lehtësuar shikimin në ekran)', //cpg1.4
  'coppermine_in_webroot' => 'coppermine është instaluar në rrënjën e web sitit', //cpg1.4
  'connect_online_repository' => 'Provoni të lidheni me depozitën në linjë', //cpg1.4
  'show_additional_information' => 'shfaq informacione shtesë', //cpg1.4
  'no_webcvs_link' => 'mos shfaq lidhjet web cvs', //cpg1.4
  'stable_webcvs_link' => 'shfaq lidhjet web drejtë degëve stabël', //cpg1.4
  'devel_webcvs_link' => 'shfaq lidhjet web drejtë degëve në zhvillim', //cpg1.4
  'submit' => 'zbato ndryshimet / rifresko', //cpg1.4
  'reset_to_defaults' => 'anullo për të rivendosur vlerat paraprake', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File view_log.php  //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('VIEWLOG_PHP')) $lang_viewlog_php = array(
  'delete_all' => 'Fshi të gjithë identifikimet', //cpg1.4
  'delete_this' => 'Fshi vetëm këtë identifikim', //cpg1.4
  'view_logs' => 'Shiko identifikimet', //cpg1.4
  'no_logs' => 'Nuk ka identifikime të krijuara.', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File xp_publish.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('XP_PUBLISH_PHP')) {

$lang_xp_publish_client = <<<EOT
<h1>XP Web Publishing Wizard Client</h1><p>Kjo modulë lejon përdorimin e  <b>Windows XP</b> web publikimin magjik me Coppermine.</p><p>Kodi është i basuar në artikullin e postuar nga
EOT;

$lang_xp_publish_required = <<<EOT
<h2>Çfarë kërkohet</h2><ul><li>Windows XP me qëllim që magjia të funksionoj.</li><li>Një Coppermine i instaluar dhe që funksion dhe në të cilin <b>web ngarkimi funsionon siç duhroperly.</b></li></ul><h2>How to install on client side</h2><ul><li>Right click on
EOT;

$lang_xp_publish_select = <<<EOT
Përzgjidh &quot;ruaj objektin tek..&quot;. Ruaje skedarin tek disku juaj i fortë. Kur ruani skedarin, verifikoni që emri i propozuar pë skedarin të jetë <b>cpg_###.reg</b> (shenja ### përfaqëson një numër mbi bazën e orës). Ndërrojeni emrin nëse është e nevojëshme (lërini numrat). Kur të shkarkohet, klikoni dy herë me qëllim që të regjistroni serverin tuaj me web publikimin magjik.</li></ul>
EOT;

$lang_xp_publish_testing = <<<EOT
<h2>Testimi</h2><ul><li>Në Windows Explorer, përzgjidh disa skedare dhe klikoni tek <b>Publikoni elementet e përzgjedhura në web</b> në tablon e majtë.</li><li>Konfirmoni përzgjedhjen e skedarëve. Klokoni tek <b>Vazhdim</b>.</li><li>Nga lista e serviseve që shfaqet, zgjidhni atë të galerisë suaj ( ai duhet të ketë të njëjtin emër si dhe galeria juaj).  Nëse shërbimi nuk shfaqet tek lista, verifikoni që ju keni instaluar <b>cpg_pub_wizard.reg</b> siç u përshlrua më sipër.</li><li>Fusni të dhënat tuaja identifikuese nëse kërkohet.</li><li>Zgjidhni albumin ku do të vendosni fotot tuaja ose krijoni një të ri.</li><li>Klikoni tek <b>vazhdim</b>. Ngarkimi i fotografive tuaja fillon.</li><li>Sapo të jetë kompletuar, verfikoni galerinë tuaj për të parë nëse fotografitë janë shtuar me sukses.</li></ul>
EOT;

$lang_xp_publish_notes = <<<EOT
<h2>Shënim :</h2><ul><li>Kur ngarkimi të ketë filluar, magjistari nuk mund të shfaqi ndonjë mesazh gabimi që kthehet nga skripti pra ju nuk mund ta dini si ngarkimi ka qenë i suksesshëm ose jo para se ju të vizitoni galerinë tuaj.</li><li>Nëse ngarkimi dështon, aktivizoni &quot;modë shfaq gabimet&quot; tek faqja e administratorit në Coppermine, provoni me një fotografi të vetme dhe verifiko mesazhet e gabimeve
EOT;

$lang_xp_publish_flood = <<<EOT
skedar që ndodhet tek repertorin Coppermine në serverin tuaj.</li><li>Me qëllim që të evitoni që galeria të jetë e <i>përmbytyr</i> nga fotografitë e ngarkuara nëpërmjet magjistarit, vetëm <b>administratorët e galerisë </b> dhe <b>përdoruesit që kanë albumet e tyre</b> mund të përdori këtë karakteristikë.</li>
EOT;



$lang_xp_publish_php = array(
  'title' => 'Coppermine - Asistenti i Publikimit Web XP', //cpg1.4
  'welcome' => 'Mirë se vini <b>%s</b>,', //cpg1.4
  'need_login' => 'Ju duhet të identifikoheni tek galeria me anë të vozitësit tuaj webpara se të përdorni këtë asistent.<p/><p>Kur të identifikoheni mos harroni të zgjidhni opsioni <b>më mbaj mend</b> nëse ky opsion ekziston.', //cpg1.4
  'no_alb' => 'Na vjenë keq por nuk ka ndonjë album ku ju të jeni i lejuar të ngarkoni fotografi me këtë asistent.', //cpg1.4
  'upload' => 'Ngarkoni fotografitë tuaje tek një album ekzistues', //cpg1.4
  'create_new' => 'Krijoni një album të ri për fotografitë tuaja', //cpg1.4
  'album' => 'Albumi', //cpg1.4
  'category' => 'Kategoria', //cpg1.4
  'new_alb_created' => 'Albumi juaj i ri &quot;<b>%s</b>&quot; u krijua.', //cpg1.4
  'continue' => 'Klikoni tek &quot;Vijues&quot; për të filluar të ngarkoni fotografitë tuaja', //cpg1.4
  'link' => 'kjo lidhje', //cpg1.4
);
}

?>
