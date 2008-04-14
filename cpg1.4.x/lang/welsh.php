<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2008 Dev Team
  v1.1 originally written by Gregory DEMAR
  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 3
  as published by the Free Software Foundation.
   ********************************************
  Coppermine version: 1.4.18
  $HeadURL: https://coppermine.svn.sourceforge.net/svnroot/coppermine/trunk/cpg1.4.x/lang/spanish.php $
  $Revision: 4380 $
  $Author: gaugau $
  $Date: 2008-04-12 12:00:19 +0200 (Sa, 12 Apr 2008) $
**********************************************/
/*********************************************
GEIRIAU TGCh CYMRAEG
Cysylltwch: 'Duw' ar http://maes-e.com
Diofyn = default; Cyfluniad = configuration/config; Siecio a dad-siecio = check/uncheck; Gwall = error;Bawdlun = thumbnail image; Gweinyddwr = supervisor/server; Gwesteiwr = host; Llwybr  = path; Nodau = characters; Cwstwm = custom (er mae arfer/ol/u yw'r term swyddogol); Swp = batch (e.e. ychwanegu-swp = batch-add); Traw/io = Hit (tudalen); Sylw/Neges ddi-ben = Orphan message; **Ffotograffiaeth**; Llymu/llymiant = sharpening/sharpness; Atred = offset; Rhyngweithredol = interoperability; Cyflwyniad = render ***Mae'n bosib bod sawl gair answyddogol yma - er mae\'r pwyslais ar ystwythder iaith. *** 
*********************************************/

if (!defined('IN_COPPERMINE')) { die('Not in Coppermine...');}

// info about translators and translated language
$lang_translation_info = array(
  'lang_name_english' => 'Welsh',
  'lang_name_native' => 'Cymraeg',
  'lang_country_code' => 'gb', //wales has no separate country code at the time of posting
  'trans_name'=> 'Alan Rhys Davies',
  'trans_email' => 'ardavies@tiscali.co.uk',
  'trans_website' => 'www.wetwork.org.uk',
  'trans_date' => '14-03-2008',
);

$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('Beit', 'KB', 'MB');

// Day of weeks and months
$lang_day_of_week = array('Sul', 'Llun', 'Maw', 'Mer', 'Iau', 'Gwe', 'Sad');
$lang_month = array('Ion', 'Chw', 'Maw', 'Ebr', 'Mai', 'Meh', 'Gor', 'Awst', 'Medi', 'Hyd', 'Tach', 'Rhag');

// Some common strings
$lang_yes = 'Ie';
$lang_no  = 'Na';
$lang_back = 'NÔL';
$lang_continue = 'PARHAU';
$lang_info = 'Gwybodaeth';
$lang_error = 'Gwall';
$lang_check_uncheck_all = 'siecio/dad-siecio pob'; //cpg1.4

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$album_date_fmt =    '%d.%B %Y';
$lastcom_date_fmt =  '%d.%m.%y at %H:%M';
$lastup_date_fmt = '%d %B %Y';
$register_date_fmt = '%d %B %Y';
$lasthit_date_fmt = '%d %B %Y at %H:%M';
$comment_date_fmt =  '%d %B %Y at %H:%M';
$log_date_fmt = '%d %B, %Y at %I:%M %p'; //cpg1.4

// For the word censor
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*');

$lang_meta_album_names = array(
  'random' => 'Ffeiliau ar hap',
  'lastup' => 'Ychwanegiadau diwethaf',
  'lastalb'=> 'Orielau wedi\'u newid yn ddiweddar',
  'lastcom' => 'Sylwadau diwethaf',
  'topn' => 'Gwylio mwyaf',
  'toprated' => 'Goreuon',
  'lasthits' => 'Gwylio diwethaf',
  'search' => 'Canlyniadau',
  'favpics'=> 'Ffefrynnau',
);

$lang_errors = array(
  'access_denied' => 'Does dim hawliau \'da chi i weld y dudalen hon.',
  'perm_denied' => 'Does dim hawliau \'da chi i wneud hyn.',
  'param_missing' => 'Sgript wedi\'i alw heb y paramedr(au) hanfodol.',
  'non_exist_ap' => 'Nid yw\'r albwm/ffeil yn bodoli!',
  'quota_exceeded' => 'Rydych dros gwota eich disg<br /><br />Mae gennych gwota o [quota]K, mae eich ffeiliau presennol yn cymryd [space]K, mae ychwanegu\'r ffeil yn eich rhoi dros y cwota.',
  'gd_file_type_err' => 'Wrth ddefnyddio\'r llyfrgell ddelwedd GD gallwch ddefnyddio JPEG a PNG yn unig.',
  'invalid_image' => 'Mae\'r ffeil rydych wedi llwytho wedi\'i llygru neu ni all y llyfrgell GD ddelio gyda hi.',
  'resize_failed' => 'Methu creu bawdlun neu leihau maint y ddelwedd.',
  'no_img_to_display' => 'Dim delwedd i\'w dangos',
  'non_exist_cat' => 'Nid yw\'r categori hwn yn bodoli.',
  'orphan_cat' => 'Mae categori di-ben yn bodoli, rhedwch y rheolwr categorïau i gywiro\'r broblem!',
  'directory_ro' => 'Nid oes modd ysgrifennu i ffolder \'%s\', methu dileu\'r ffeiliau',
  'non_exist_comment' => 'Nid yw\'r sylw yn bodoli.',
  'pic_in_invalid_album' => 'Mae\'r ffeil mewn albwm sy ddim yn bodoli (%s)!?',
  'banned' => 'Rydych wedi\'ch gwahardd rhag defnyddio\'r wefan hon.',
  'not_with_udb' => 'Mae\'r broses hon wedi\'i hanactifadu oherwydd ei bod wedi\'i hintegreiddio gyda meddalwedd fforwm. Naill ai bod dim hawl rhedeg y broses, neu dylai\'r broses cael ei rhedeg gan feddalwedd fforwm.',
  'offline_title' => 'All-lein',
  'offline_text' => 'Oriel all-lein - dewch nôl nes ymlaen',
  'ecards_empty' => 'Nid oes cofnodion e-garden i\'w dangos ar hyn o bryd.',
  'action_failed' => 'Methu.  Nid yw Coppermine yn gallu prosesu eich cais.',
  'no_zip' => 'Nid yw\'r llyfrgelloedd i brosesu ffeiliau ZIP ar gael. Cysylltwch â gweinyddwr Coppermine.',
  'zip_type' => 'Nid oes hawl \'da chi i lwytho ffeiliau ZIP.',
  'database_query' => 'Roedd gwall wrth brosesu\'ch cais i\'r databas', //cpg1.4
  'non_exist_comment' => 'Nid yw\'r sylw yn bodoli', //cpg1.4
);
// "Peidiwch newid  y tagiau na 'color' na'r lliwiau: lliwiau swyddogol HTML/CSS/BBCode yw'r rhain - nid oes modd eu cyfieithu" ...  diafol
$lang_bbcode_help_title = 'cymorth <i>bbcode</i>'; //cpg1.4
$lang_bbcode_help = 'Gallwch ychwanegu dolenni ac ychydig o fformatio i\'r maes hwn gan ddefnyddio tagiau bbcode: <li>[b]Bras[/b] =&gt; <b>Bras</b></li><li>[i]Italig[/i] =&gt; <i>Italig</i></li><li>[url=http://eichgwefan.com/]Testun URL[/url] =&gt; <a href="http://eichgwefan.com">Testun URL</a></li><li>[email]defnyddiwr@eichgwefan.com[/email] =&gt; <a href="mailto:defnyddiwr@eichgwefan.com">defnyddiwr@eichgwefan.com</a></li><li>[color=red]ychydig o destun[/color] =&gt; <span style="color:red">ychydig o destun</span></li><li>[img]http://coppermine-gallery.net/demo/cpg14x/images/red.gif[/img] => <img src="../images/red.gif" border="0" alt="" /></li>'; //cpg1.4

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
  'home_title' => 'Hafan',
  'home_lnk' => 'Hafan',
  'alb_list_title' => 'Rhestr albymau',
  'alb_list_lnk' => 'Rhestr albwm',
  'my_gal_title' => 'Oriel bersonol',
  'my_gal_lnk' => 'F\'oriel',
  'my_prof_title' => 'Proffil personol', //cpg1.4
  'my_prof_lnk' => 'Fy mhroffil',
  'adm_mode_title' => 'Newid i fodd gweinyddu',
  'adm_mode_lnk' => 'Modd gweinyddu',
  'usr_mode_title' => 'Newid i fodd defnyddiwr',
  'usr_mode_lnk' => 'Modd defnyddiwr',
  'upload_pic_title' => 'Llwytho ffeil i albwm',
  'upload_pic_lnk' => 'Llwytho ffeil',
  'register_title' => 'Creu cyfrif',
  'register_lnk' => 'Cofrestru',
  'login_title' => 'Mewngofnodi', //cpg1.4
  'login_lnk' => 'Mewngofnodi',
  'logout_title' => 'Allgofnodi', //cpg1.4
  'logout_lnk' => 'Allgofnodi',
  'lastup_title' => 'Dangos y llwythiadau diweddaraf', //cpg1.4
  'lastup_lnk' => 'Llwythiadau diweddaraf',
  'lastcom_title' => 'Dangos sylwadau diweddaraf', //cpg1.4
  'lastcom_lnk' => 'Sylwadau diwethaf',
  'topn_title' => 'Dangos eitemau mwyaf poblogaidd', //cpg1.4
  'topn_lnk' => 'Mwyaf poblogaidd',
  'toprated_title' => 'Dangos eitemau gorau', //cpg1.4
  'toprated_lnk' => 'Goreuon',
  'search_title' => 'Chwilio\'r oriel', //cpg1.4
  'search_lnk' => 'Chwilio',
  'fav_title' => 'Ffefrynnau', //cpg1.4.0
  'fav_lnk' => 'Fy Ffefrynnau',
  'memberlist_title' => 'Dangos Rhestr Aelodau',
  'memberlist_lnk' => 'Rhestr Aelodau',
  'faq_title' => 'Cwestiynau ar oriel ddelweddau &quot;Coppermine&quot;',
  'faq_lnk' => 'FAQ',
);

$lang_gallery_admin_menu = array(
  'upl_app_title' => 'Derbyn llwythiadau newydd', //cpg1.4
  'upl_app_lnk' => 'Derbyn llwythiadau',
  'admin_title' => 'Cyfluniad', //cpg1.4
  'admin_lnk' => 'Cyfluniad', //cpg1.4
  'albums_title' => 'Cyfluniad albwm', //cpg1.4
  'albums_lnk' => 'Albymau',
  'categories_title' => 'Cyfluniad categorïau', //cpg1.4
  'categories_lnk' => 'Categorïau',
  'users_title' => 'Cyfluniad defnyddiwr', //cpg1.4
  'users_lnk' => 'Defnyddwyr',
  'groups_title' => 'Cyfluniad grwpiau', //cpg1.4
  'groups_lnk' => 'Grwpiau',
  'comments_title' => 'Golygu pob sylw', //cpg1.4
  'comments_lnk' => 'Golygu Sylwadau',
  'searchnew_title' => 'Proses ychwanegu swp', //cpg1.4
  'searchnew_lnk' => 'Ychwanegu ffeiliau (swp)',
  'util_title' => 'Offer gweinyddu', //cpg1.4
  'util_lnk' => 'Offer Gweinyddu',
  'key_title' => 'Geiriadur geiriau allweddol', //cpg1.4
  'key_lnk' => 'Geiriadur Geiriau Allweddol', //cpg1.4
  'ban_title' => 'Defnyddwyr wedi\'u gwahardd', //cpg1.4
  'ban_lnk' => 'Defnyddwyr wedi\'u Gwahardd',
  'db_ecard_title' => 'Golygu E-gardiau', //cpg1.4
  'db_ecard_lnk' => 'Dangos E-gardiau',
  'pictures_title' => 'Trefnu fy lluniau', //cpg1.4
  'pictures_lnk' => 'Trefnu fy lluniau', //cpg1.4
  'documentation_lnk' => 'Dogfennaeth', //cpg1.4
  'documentation_title' => 'Llawlyfr Coppermine', //cpg1.4
);

$lang_user_admin_menu = array(
  'albmgr_title' => 'Creu a threfnu f\'albymau', //cpg1.4
  'albmgr_lnk' => 'Creu / trefnu f\'albymau',
  'modifyalb_title' => 'Newid f\'albymau',  //cpg1.4
  'modifyalb_lnk' => 'Newid f\'albymau',
  'my_prof_title' => 'Proffil personol', //cpg1.4
  'my_prof_lnk' => 'Fy mhroffil',
);

$lang_cat_list = array(
  'category' => 'Categori',
  'albums' => 'Albymau',
  'pictures' => 'Ffeiliau',
);

$lang_album_list = array(
  'album_on_page' => '%d albwm ar %d tudalen',
);

$lang_thumb_view = array(
  'date' => 'DYDDIAD',
  //Sort by filename and title
  'name' => 'FFEIL',
  'title' => 'TEITL',
  'sort_da' => 'Trefnu gan ddyddiad esgynnol',
  'sort_dd' => 'Trefnu gan ddyddiad disgynnol',
  'sort_na' => 'Trefnu gan enw esgynnol',
  'sort_nd' => 'Trefnu gan enw disgynnol',
  'sort_ta' => 'Trefnu gan deitl esgynnol',
  'sort_td' => 'Trefnu gan deitl disgynnol',
  'position' => 'SAFLE', //cpg1.4
  'sort_pa' => 'Trefnu gan safle esgynnol', //cpg1.4
  'sort_pd' => 'Trefnu gan safle disgynnol', //cpg1.4
  'download_zip' => 'Lawrlwytho gan ffeil Zip',
  'pic_on_page' => '%d ffeil ar %d tudalen',
  'user_on_page' => '%d defnyddiwr ar %d tudalen',
  'enter_alb_pass' => 'Rhowch Gyfrinair Albwm', //cpg1.4
  'invalid_pass' => 'Cyfrinair Anghywir', //cpg1.4
  'pass' => 'Cyfrinair', //cpg1.4
  'submit' => 'Derbyn', //cpg1.4
);
//====================================================================
$lang_img_nav_bar = array(
  'thumb_title' => 'Dychwelyd i\'r dudalen fawdluniau',
  'pic_info_title' => 'Dangos/cuddio gwybodaeth ffeil',
  'slideshow_title' => 'Sioe sleidiau',
  'ecard_title' => 'Anfon y ffeil fel e-gerdyn',
  'ecard_disabled' => 'e-gardiau wedi\'u hanactifadu',
  'ecard_disabled_msg' => 'Does dim hawl \\\'da chi i anfon e-gardiau', //js-alert
  'prev_title' => 'Gweld ffeil gynt',
  'next_title' => 'Gweld ffeil nesaf',
  'pic_pos' => 'FFEIL %s/%s',
  'report_title' => 'Adrodd y ffeil hon i\'r gweinyddwr', //cpg1.4
  'go_album_end' => 'Symud i\'r diwedd', //cpg1.4
  'go_album_start' => 'Symud i\'r dechrau', //cpg1.4
  'go_back_x_items' => 'symud nôl %s eitem', //cpg1.4
  'go_forward_x_items' => 'symud ymlaen %s eitem', //cpg1.4
);

$lang_rate_pic = array(
  'rate_this_pic' => 'Graddio\'r ffeil ',
  'no_votes' => '(Dim pleidlais eto)',
  'rating' => '(gradd bresennol : %s / 5 gyda %s pleidlais)',
  'rubbish' => 'Sbwriel',
  'poor' => 'Gwael',
  'fair' => 'Gweddol',
  'good' => 'Da',
  'excellent' => 'Ardderchog',
  'great' => 'Gwych',
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
  CRITICAL_ERROR => 'Gwall critigol',
  'file' => 'Ffeil: ',
  'line' => 'Llinell: ',
);

$lang_display_thumbnails = array(
  'filename' => 'Ffeil=', //cpg1.4
  'filesize' => 'Maint=', //cpg1.4
  'dimensions' => 'Dimensiynau=', //cpg1.4
  'date_added' => 'Dyddiad ychwanegu=', //cpg1.4
);

$lang_get_pic_data = array(
  'n_comments' => '%s sylw',
  'n_views' => '%s golwg',
  'n_votes' => '(%s pleidlais)',
);

$lang_cpg_debug_output = array(
  'debug_info' => 'Gwybodaeth Dadfygio',
  'select_all' => 'Dewis Pob',
  'copy_and_paste_instructions' => 'Os ydych yn mynd i ofyn am gymorth ar fwrdd cynnal coppermine, copïo-a-gludo\'r allbwn dadfygio hwn i mewn i\'ch post, gyda\'r neges gwall (os oes un). Sicrhewch eich bod yn amnewid unrhyw gyfrineiriau o\'r ymholiad gyda *** cyn postio. <br />Sylw: Am wybodaeth yn unig yw hyn ac nid yw\'n meddwl bod gwall gyda\'ch oriel.', //cpg1.4
  'phpinfo' => 'dangos phpinfo',
  'notices' => 'Hysbysiadau', //cpg1.4
);

$lang_language_selection = array(
  'reset_language' => 'Iaith ddiofyn',
  'choose_language' => 'Dewis iaith',
);

$lang_theme_selection = array(
  'reset_theme' => 'Thema ddiofyn',
  'choose_theme' => 'Dewis thema',
);

$lang_version_alert = array(
  'version_alert' => 'Fersiwn heb gynhaliaeth!', //cpg1.4
  'security_alert' => 'Rhybudd Diogelwch!', //cpg1.4.3
  'relocate_exists' => 'Dileu\'r ffeil <a href="http://coppermine-gallery.net/forum/index.php?topic=24217.0" target=_blank>relocate_server.php</a> o\'ch gwefan!',
  'no_stable_version' => 'Rydych yn rhedeg Coppermine %s (%s) sydd ar gyfer defnyddwyr profiadol iawn yn unig - mae\'r fersiwn yn dod heb unrhyw gynhaliaeth nac unrhyw warantau. Eich risg chi yw defnyddio hwn - neu ewch i\'r fersiwn mwyaf sefydlog os ydych angen cynhaliaeth!', //cpg1.4
  'gallery_offline' => 'Mae\'r oriel all-lein a dim ond chi, fel gweinyddwr, bydd yn gallu ei gweld. Cofiwch ei droi arlein ar ôl gorffen cynnal a chadw.', //cpg1.4
);

$lang_create_tabs = array(
  'previous' => 'cynt', //cpg1.4
  'next' => 'nesaf', //cpg1.4
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
  'error_wakeup' => "Methu dihuno <i>plugin</i> '%s'", //cpg1.4
  'error_install' => "Methu gosod <i>plugin</i> '%s'", //cpg1.4
  'error_uninstall' => "Methu dad-osod <i>plugin</i> '%s'", //cpg1.4
  'error_sleep' => "Methu dad-osod <i>plugin</i> '%s'<br />", //cpg1.4
);

// ------------------------------------------------------------------------- //
// File include/smilies.inc.php
// ------------------------------------------------------------------------- //

if (defined('SMILIES_PHP')) $lang_smilies_inc_php = array(
  'Exclamation' => 'Ebychiad',
  'Question' => 'Cwestiwn',
  'Very Happy' => 'Hapus iawn',
  'Smile' => 'Gwenu',
  'Sad' => 'Trist',
  'Surprised' => 'Synnu',
  'Shocked' => 'Sioc',
  'Confused' => 'Dryslyd',
  'Cool' => 'Cwl',
  'Laughing' => 'Chwerthin',
  'Mad' => 'Gwallgof',
  'Razz' => '"Razz"',
  'Embarassed' => 'Cywilydd',
  'Crying or Very sad' => 'Llefain neu Trist iawn',
  'Evil or Very Mad' => 'Drwg neu Gwallgof iawn',
  'Twisted Evil' => 'Drwg Troellog',
  'Rolling Eyes' => 'Llygaid yn Rholio',
  'Wink' => 'Winc',
  'Idea' => 'Syniad',
  'Arrow' => 'Saeth',
  'Neutral' => 'Niwtral',
  'Mr. Green' => 'Mr. Gwyrdd',
);

// ------------------------------------------------------------------------- //
// File addpic.php
// ------------------------------------------------------------------------- //

// void

// ------------------------------------------------------------------------- //
// File mode.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('MODE_PHP')) $lang_mode_php = array(
  0 => 'Gadael modd gweinyddwr...',
  1 => 'Myned i fodd gweinyddwr...',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
  'alb_need_name' => 'Angen enw i\\\'r albwm !', //js-alert
  'confirm_modifs' => 'Ydych chi\\\'n sicr rydych am wneud y newidiadau hyn ?', //js-alert
  'no_change' => 'Does dim newid wedi\\\'i wneud !', //js-alert
  'new_album' => 'Albwm newydd',
  'confirm_delete1' => 'Ydych chi\\\'n sicr eich bod am ddileu\\\'r albwm hwn ?', //js-alert
  'confirm_delete2' => '\nBydd pob ffeil a sylw y mae\\\'n cynnwys yn cael eu colli !', //js-alert
  'select_first' => 'Dewiswch albwm yn gyntaf', //js-alert
  'alb_mrg' => 'Rheolwr Albymau',
  'my_gallery' => '* F\'oriel *',
  'no_category' => '* Dim categori *',
  'delete' => 'Dileu',
  'new' => 'Newydd',
  'apply_modifs' => 'Gosod newidiadau',
  'select_category' => 'Dewis categori',
);

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) $lang_banning_php = array(
  'title' => 'Gwahardd Defnyddwyr', //cpg1.4
  'user_name' => 'Enw Defnyddiwr', //cpg1.4
  'ip_address' => 'Cyfeiriad IP', //cpg1.4
  'expiry' => 'Dod i ben (gwag yn barhaol)', //cpg1.4
  'edit_ban' => 'Arbed Newidiadau', //cpg1.4
  'delete_ban' => 'Dileu', //cpg1.4
  'add_new' => 'Ychwanegu Gwaharddiad Newydd', //cpg1.4
  'add_ban' => 'Ychwanegu', //cpg1.4
  'error_user' => 'Methu ôl ffeindio defnyddiwr', //cpg1.4
  'error_specify' => 'Angen gosod enw neu gyfeiriad IP', //cpg1.4
  'error_ban_id' => 'ID gwaharddiad anghywir!', //cpg1.4
  'error_admin_ban' => 'Rydych fethu gwahardd eich hunain!', //cpg1.4
  'error_server_ban' => 'Peidiwch â gwahardd gweinyddwr (server) eich hunain!', //cpg1.4
  'error_ip_forbidden' => 'Methu gwahardd yr IP - mae\'n breifat beth bynnag!<br />Os ydych am wahardd IPs, newidiwch hwn yn eich <a href="admin.php">Cyfluniad</a> (dim ond os ydy Coppermine yn rhedeg ar LAN).', //cpg1.4
  'lookup_ip' => 'Chwilio am gyfeiriad IP', //cpg1.4
  'submit' => 'ewch!', //cpg1.4
  'select_date' => 'dewis dyddiad', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File bridgemgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('BRIDGEMGR_PHP')) $lang_bridgemgr_php = array(
  'title' => 'Dewin Pontio',
  'warning' => 'Rhybudd: bydd data sensitif yn cael ei anfon trwy ffurflenni html. Rhedwch e ar PC eich hunain (nid ar gleient cyhoeddus fel caffi gwe), a sicrhau eich bod yn clirio <i>cache</i> y porwr ac unrhyw ffeiliau dros dro ar ôl i chi orffen - neu gall eraill ennill mynediad i\'ch data!',
  'back' => 'nôl',
  'next' => 'nesaf',
  'start_wizard' => 'Dechrau\'r dewin pontio',
  'finish' => 'Gorffen',
  'hide_unused_fields' => 'cuddio meysydd ffurflen heb eu defnyddio (syniad da)',
  'clear_unused_db_fields' => 'clirio cofnodion gwallus yn y databas (syniad da)',
  'custom_bridge_file' => 'enw eich ffeil bontio cwstwm (os enw eich ffeil pontio yw <i>myfile.inc.php</i>, rhowch <i>myfile</i> i\'r maes hwn)',
  'no_action_needed' => 'Dim byd i\'w wneud yn y cam hwn. Clic \'nesaf\' i fynd ymlaen.',
  'reset_to_default' => 'Ail-osod i\'r gwerth diofyn',
  'choose_bbs_app' => 'dewis pecyn i bontio gyda coppermine',
  'support_url' => 'Ewch yma ar gyfer cynhaliaeth y pecyn hwn',
  'settings_path' => 'llwybr(au) eich pecyn BBS',
  'database_connection' => 'cysylltiad databas',
  'database_tables' => 'tablau databas',
  'bbs_groups' => 'grwpiau BBS',
  'license_number' => 'Rhif trwydded',
  'license_number_explanation' => 'rhowch eich rhif trwydded (os yn addas)',
  'db_database_name' => 'Rhif databas',
  'db_database_name_explanation' => 'Rhowch enw databas y pecyn BBS',
  'db_hostname' => 'Gwesteiwr databas',
  'db_hostname_explanation' => 'Enw gwesteiwr lle mae eich databas MySQL yn byw, fel rheol &quot;localhost&quot;',
  'db_username' => 'Cyfrif defnyddiwr databas',
  'db_username_explanation' => 'Cyfrif defnyddiwr MySQL i\'w gysylltu \'da\'r BBS',
  'db_password' => 'Cyfrinair databas',
  'db_password_explanation' => 'Cyfrinair am y cyfrif defnyddiwr MySQL hwn',
  'full_forum_url' => 'URL Fforwm',
  'full_forum_url_explanation' => 'URL llawn o\'ch pecyn BBS (gan gynnwys y rhan \'http://\', e.e. http://www.eich_url.tld/forum)',
  'relative_path_of_forum_from_webroot' => 'Llwybr cymharol i\'r fforwm',
  'relative_path_of_forum_from_webroot_explanation' => 'Llwybr cymharol i\'r BBS o\'r <strong>gwreiddyn</strong> (webroot) (Enghraifft: os yw eich BBS ar http://www.eich_url.tld/forum/, rhowch &quot;/forum/&quot; i\'r maes hwn)',
  'relative_path_to_config_file' => 'Llwybr cymharol i\'r <strong>ffeil gyfluniad</strong> (config) eich BBS',
  'relative_path_to_config_file_explanation' => 'Llwybr cymharol i\'ch BBS, o\'ch ffolder Coppermine (e.e. &quot;../forum/&quot; os yw eich BBS ar http://www.eich_url.tld/forum/ a bod Coppermine ar http://www.eich_url.tld/gallery/)',
  'cookie_prefix' => 'Rhagddodiad cwci',
  'cookie_prefix_explanation' => 'mae\'n rhaid i hyn fod enw cwci eich BBS',
  'table_prefix' => 'Rhagddodiad tabl',
  'table_prefix_explanation' => 'Mae\'n rhaid cyd-fynd gyda\'r rhagddodiad rydych yn dewis am eich BBS wrth ei sefydlu.',
  'user_table' => 'Tabl defnyddwyr',
  'user_table_explanation' => '(fel rheol bydd y gwerth diofyn yn iawn, heb law nid yw sefydliad eich BBS yn safonol)',
  'session_table' => 'Tabl sesiynau',
  'session_table_explanation' => '(fel rheol bydd y gwerth diofyn yn iawn, heb law nid yw sefydliad eich BBS yn safonol)',
  'group_table' => 'Tabl grwpiau',
  'group_table_explanation' => '(fel rheol bydd y gwerth diofyn yn iawn, heb law nid yw sefydliad eich BBS yn safonol)',
  'group_relation_table' => 'Tabl perthynas grwpiau',
  'group_relation_table_explanation' => '(fel rheol bydd y gwerth diofyn yn iawn, heb law nid yw sefydliad eich BBS yn safonol)',
  'group_mapping_table' => 'Tabl mapio grwpiau',
  'group_mapping_table_explanation' => '(fel rheol bydd y gwerth diofyn yn iawn, heb law nid yw sefydliad eich BBS yn safonol)',
  'use_standard_groups' => 'Defnyddio grwpiau defnyddwyr BBS safonol',
  'use_standard_groups_explanation' => 'Defnyddio grwpiau defnyddwyr safonol (rhai gosod; syniad da). Bydd hyn yn dinistrio pob grwp defnyddwyr rydych wedi\'u creu ar y dudalen hon. Anactifadwch yr opsiwn hwn dim ond os ydych yn RELI gwybod eich stwff!',
  'validating_group' => 'Dilysu grŵp',
  'validating_group_explanation' => 'ID grŵp eich BBS lle where bod cyfrifon defnyddwyr sydd angen eu dilysu (fel rheol bydd y gwerth diofyn yn iawn, heb law nid yw sefydliad eich BBS yn safonol)',
  'guest_group' => 'Grŵp gwesteion',
  'guest_group_explanation' => 'ID grŵp eich BBS lle bo gwesteion neu ddefnyddwyr anhysbys (gwerth diofyn yn iawn, newid dim ond os ydych yn gwybod eich stwff)',
  'member_group' => 'Grŵp aelodau',
  'member_group_explanation' => 'ID grŵp eich BBS lle bo cyfrifon defnyddwyr &quot;arferol&quot; (gwerth diofyn yn iawn, newid dim ond os ydych yn gwybod eich stwff)',
  'admin_group' => 'Grŵp gweinyddwyr',
  'admin_group_explanation' => 'ID grŵp eich BBS lle bo cyfrifon gweinyddwyr (gwerth diofyn yn iawn, newid dim ond os ydych yn gwybod eich stwff)',
  'banned_group' => 'Grŵp gwahardd',
  'banned_group_explanation' => 'ID grŵp eich BBS lle bo cyfrifon defnyddwyr sydd wedi\'u gwahardd (gwerth diofyn yn iawn, newid dim ond os ydych yn gwybod eich stwff)',
  'global_moderators_group' => 'Grŵp cymedrolwyr eang',
  'global_moderators_group_explanation' => 'ID grŵp eich BBS lle bo cyfrifon cymedrolwyr eang (gwerth diofyn yn iawn, newid dim ond os ydych yn gwybod eich stwff)',
  'special_settings' => 'Gosodiadau BBS-sbesiffig',
  'logout_flag' => 'Fersiwn phpBB (fflag allgofnodi)',
  'logout_flag_explanation' => 'Beth yw fersiwn eich BBS (bydd y gosodiad hwn yn penderfynu sut i allgofnodi)',
  'use_post_based_groups' => 'Defnyddio grwpiau sail-post?',
  'logout_flag_yes' => '2.0.5 neu\'n uwch',
  'logout_flag_no' => '2.0.4 neu\'n is',
  'use_post_based_groups_explanation' => 'Dylai\'r grwpiau o\'r BBS sy\'n cael eu diffinio gan nifer y pyst gael eu cymryd i ystyriaeth (caniatáu rheolaeth hawliau gronynnog) neu\'r grwpiau diofyn yn unig (gwneud gweinyddu yn haws, syniad da). Gallwch newid hwn wedyn hefyd.',
  'use_post_based_groups_yes' => 'ie',
  'use_post_based_groups_no' => 'na',
  'error_title' => 'Mae\'n rhaid cywiro\'r gwallau hyn cyn mynd ymlaen. Ewch yn ôl i\'r sgrîn cynt.',
  'error_specify_bbs' => 'Rhowch y pecyn rydych am bontio gyda Coppermine.',
  'error_no_blank_name' => 'Methu gadael enw eich ffeil bontio yn wag.',
  'error_no_special_chars' => 'Yr unig gymeriadau arbennig gallwch gymmwys yn enw\'r ffeil bontio yw\'r islinell (_) a\'r llinell doriad (-)!',
  'error_bridge_file_not_exist' => 'Nid yw\'r ffeil bontio %s yn bodoli ar y gweinyddwr. Gwiriwch os ydych wedi\'i llwytho.',
  'finalize' => 'actifadu/anactifadu integreiddio BBS',
  'finalize_explanation' => 'Hyd yma, mae\'r gosodiadau rydych wedi\'u rhoi wedi cael eu hysgrifennu i\'r databas, ond nid yw integreiddiad BBS wedi\'i actifadu. Gallwch osod integreiddiad ymlaen/bant wedyn ar unrhyw adeg. Cofiwch eich enw a chyfrinair gweinyddu o Coppermine arunig (<i>standalone</i>), bydd eu hangen wedyn os ydych am wneud newidiadau. Os oes problem, ewch i %s ac anactifadwch integreiddiad BBS yna, gan ddefnyddio eich cyfrif gweinyddu arunig (heb bontio; fel rheol yr un rydych wedi creu wrth sefydlu Coppermine).',
  'your_bridge_settings' => 'Eich gosodiadau pontio',
  'title_enable' => 'Actifadu integreiddio/pontio gyda %s',
  'bridge_enable_yes' => 'actifadu',
  'bridge_enable_no' => 'anactifadu',
  'error_must_not_be_empty' => 'methu bod yn wag',
  'error_either_be' => 'mae\'n rhaid bod yn %s neu\'n %s',
  'error_folder_not_exist' => '%s ddim yn bodoli. Cywirwch y gwerth rhoddoch am %s',
  'error_cookie_not_readible' => 'Nid yw Coppermine yn gallu darllen y cwci gyda\'r enw %s. Cywirwch y gwerth rhoddoch ar gyfer %s, neu ewch i\'ch panel gweinyddu BBS a sicrhewch fod llwybr y cwci yn gallu cael ei ddarllen gan Coppermine.',
  'error_mandatory_field_empty' => 'Methu gadael y maes %s yn wag - rhowch werth cywir.',
  'error_no_trailing_slash' => 'Nid oes modd gosod sleis ar ddiwedd y maes %s.',
  'error_trailing_slash' => 'Mae\'n rhaid gosod sleis ar ddiwedd y maes %s.',
  'error_db_connect' => 'Methu cysylltu i\'r databas MySQL gyda\'r data rydych wedi gosod. Dyma beth ddywedodd MySQL:',
  'error_db_name' => 'Er roedd Coppermine yn gallu creu cysylltiad, nid oedd yn gallu ffeindio\'r databas %s. Sicrhewch eich bod wedi gosod %s yn gywir. Dyma beth ddywedodd MySQL:',
  'error_prefix_and_table' => '%s a ',
  'error_db_table' => 'Methu ffeindio tabl %s. Sicrhewch eich bod wedi gosod %s yn gywir.',
  'recovery_title' => 'Rheolwr Pontio: adferiad brys',
 
 'recovery_explanation' => 'Os daethoch yma i weinyddu integreiddiad BBS gyda\'ch oriel Coppermine, bydd yn rhaid i chi fewngofnodi fel gweinyddwr yn gyntaf. Os nac ydych yn gallu mewngofnodi oherwydd nid yw\'r pontio yn gweithio yn ôl y disgwyl, gallwch anactifadu integreiddiad BBS gyda\'r dudalen hon. Ni fydd gosod eich enw a chyfrinair yn eich mewngofnodi, dim ond anactifadu yr integreiddiad BBS. Cysylltwch â\'r ddogfennaeth am fanylion pellach.',
  'username' => 'Enw',
  'password' => 'Cyfrinair',
  'disable_submit' => 'anfon',
  'recovery_success_title' => 'Cafodd ei dderbyn yn llwyddiannus',
  'recovery_success_content' => 'Rydych wedi anactifadu pontio BBS yn llwyddiannus. Mae eich sefydliad Coppermine yn rhedeg ar fodd arunig (<i>standalone</i>).',
  'recovery_success_advice_login' => 'Mewngofnodwch fel gweinyddwr er mwyn golygu eich gosodiadau pontio a/neu actifadu integreiddiad BBS eto.',
  'goto_login' => 'Ewch i\'r dudalen mewngofnodi',
  'goto_bridgemgr' => 'Ewch i\'r rheolwr pontio',
  'recovery_failure_title' => 'Methodd yr awdurdod',
  'recovery_failure_content' => 'Rydych wedi cyflwyno\'r manylion anghywir. Bydd yn rhaid i chi gyflwyno data\'r cyfrif gweinyddu o\'r fersiwn arunig (fel rheol, y cyfrif rydych yn gosod wrth sefydlu Coppermine).',
  'try_again' => 'ceisiwch eto',
  'recovery_wait_title' => 'Amser aros heb basio eto',
  'recovery_wait_content' => 'Am resymau diogelwch, nid yw\'r sgript yn caniatáu sawl mewngofnodion aflwyddiannus yn olynol, felly bydd yn rhaid i chi aros ychydig cyn bod hawl \'da chi i geisio eto.',
  'wait' => 'aros',
  'create_redir_file' => 'Creu ffeil ail-gyfeirio (syniad da)',
  'create_redir_file_explanation' => 'I ail-gyfeirio defnyddwyr i Coppermine unwaith iddynt fewngofnodi i\'ch BBS, bydd angen creu ffeil ail-gyfeirio mewn ffolder eich BBS. Pan fydd yr opsiwn hwn wedi\'i siecio, bydd y rheolwr pontio yn ceisio creu\'r ffeil ar eich cyfer, neu roi\'r cod yn barod i gopïo-a-gludo er mwyn creu\'r ffeil gan law.',
  'browse' => 'pori',
);

// ------------------------------------------------------------------------- //
// File calendar.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('CALENDAR_PHP')) $lang_calendar_php = array(
  'title' => 'Calendr', //cpg1.4
  'close' => 'cau', //cpg1.4
  'clear_date' => 'clirio dyddiad', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
  'miss_param' => 'Paramedrau ar gyfer y broses \'%s\' heb eu gosod !',
  'unknown_cat' => 'Categori ddim yn bodoli yn y databas',
  'usergal_cat_ro' => 'Methu dileu categorïau oriel defnyddwyr !',
  'manage_cat' => 'Rheoli categorïau',
  'confirm_delete' => 'Ydych yn sicr rydych am DDILEU\\\'R categori hwn?', //js-alert
  'category' => 'Categori',
  'operations' => 'Prosesau',
  'move_into' => 'Symud i mewn i',
  'update_create' => 'Diweddaru/Creu categori',
  'parent_cat' => 'Uwch gategori',
  'cat_title' => 'Teitl y categori',
  'cat_thumb' => 'Bawdlun categori',
  'cat_desc' => 'Disgrifiad categori',
  'categories_alpha_sort' => 'Trefnu categorïau yn nhrefn y wyddor (nid mewn trefn ddewisol)', //cpg1.4
  'save_cfg' => 'Arbed y cyfluniad', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File admin.php
// ------------------------------------------------------------------------- //

if (defined('ADMIN_PHP')) $lang_admin_php = array(
  'title' => 'Cyfluniad Orielau', //cpg1.4
  'manage_exif' => 'Rheoli golwg <i>exif</i>', //cpg1.4
  'manage_plugins' => 'Rheoli <i>plugins</i>', //cpg1.4
  'manage_keyword' => 'Rheoli geiriau allweddol', //cpg1.4
  'restore_cfg' => 'Ail-osod gwerthoedd diofyn',
  'save_cfg' => 'Arbed cyfluniad newydd',
  'notes' => 'Nodiadau',
  'info' => 'Gwybodaeth',
  'upd_success' => 'Cyfluniad Coppermine wedi\'i ddiweddaru',
  'restore_success' => 'Cyfluniad diofyn Coppermine wedi\'i adfer',
  'name_a' => 'Enw esgynnol',
  'name_d' => 'Enw disgynnol',
  'title_a' => 'Teitl esgynnol',
  'title_d' => 'Teitl disgynnol',
  'date_a' => 'Dyddiad esgynnol',
  'date_d' => 'Dyddiad disgynnol',
  'pos_a' => 'Safle esgynnol', //cpg1.4
  'pos_d' => 'Safle disgynnol', //cpg1.4
  'th_any' => 'Agwedd Mwyaf',
  'th_ht' => 'Uchder',
  'th_wd' => 'Lled',
  'label' => 'label',
  'item' => 'eitem',
  'debug_everyone' => 'Pawb',
  'debug_admin' => 'Gweinyddwr yn unig',
  'no_logs'=> 'Bant', //cpg1.4
  'log_normal'=> 'Normal', //cpg1.4
  'log_all' => 'Pob', //cpg1.4
  'view_logs' => 'Dangos logiau', //cpg1.4
  'click_expand' => 'clic enw adran i ehangu', //cpg1.4
  'expand_all' => 'Ehangu Pob', //cpg1.4
  'notice1' => '(*) Ni ddylai\'r gosodiadau hyn eu newid os oes ffeiliau yn eich databas eisoes.', //cpg1.4 - (relocated)
  'notice2' => '(**) Wrth newid y gosodiad, dim ond y ffeiliau sydd yn cael eu hychwanegu o\'r pwynt hwnnw ymlaen sy\'n cael eu heffeithio, felly rydym yn awgrymu eich bod ddim yn newid hwn os oes ffeiliau yn eich oriel eisoes. Er, gallwch osod newidiadau i\'r ffeiliau sydd yna eisoes gyda &quot;<a href="util.php">offer gweinyddu</a> (ail-meintio delweddau)&quot; o\'r ddewislen weinyddu.', //cpg1.4 - (relocated)
  'notice3' => '(***) Mae pob ffeil log wedi\'u hysgrifennu mewn Saesneg.', //cpg1.4 - (relocated)
  'bbs_disabled' => 'Swyddogaeth wedi\'i hanactifadu wrth ddefnyddio integreiddiad bb', //cpg1.4
  'auto_resize_everyone' => 'Pawb', //cpg1.4
  'auto_resize_user' => 'Defnyddiwr yn unig', //cpg1.4
  'ascending' => 'esgynnol', //cpg1.4
  'descending' => 'disgynnol', //cpg1.4
);

if (defined('ADMIN_PHP')) $lang_admin_data = array(
  'Gosodiadau cyffredinol',
  array('Enw oriel', 'gallery_name', 0, 'f=index.htm&amp;as=admin_general_name&amp;ae=admin_general_name_end'), //cpg1.4
  array('Disgrifiad oriel', 'gallery_description', 0, 'f=index.htm&amp;as=admin_general_description&amp;ae=admin_general_description_end'), //cpg1.4
  array('e-bost gweinyddwr oriel', 'gallery_admin_email', 0, 'f=index.htm&amp;as=admin_general_email&amp;ae=admin_general_email_end'), //cpg1.4
  array('URL ffolder eich oriel Coppermine (dim \'index.php\' neu debyg ar y diwedd)', 'ecards_more_pic_target', 0, 'f=index.htm&amp;as=admin_general_coppermine-url&amp;ae=admin_general_coppermine-url_end'), //cpg1.4
  array('URL eich hafan', 'home_target', 0, 'f=index.htm&amp;as=admin_general_home-url&amp;ae=admin_general_home-url_end'), //cpg1.4
  array('Caniatáu lawrlwytho-ZIP o ffefrynnau', 'enable_zipdownload', 1, 'f=index.htm&amp;as=admin_general_zip-download&amp;ae=admin_general_zip-download_end'), //cpg1.4
  array('Gwahaniaeth mewn cylchfa amser i gymharu â GMT (amser presennol: ' . localised_date(-1, $comment_date_fmt) . ')','time_offset',0, 'f=index.htm&amp;as=admin_general_time-offset&amp;ae=admin_general_time-offset_end&amp;top=1'), //cpg1.4
  array('Caniatáu cyfrineiriau amgryptiedig (methu dadwneud)','enable_encrypted_passwords',1, 'f=index.htm&amp;as=admin_general_encrypt_password_start&amp;ae=admin_general_encrypt_password_end&amp;top=1'), // cpg 1.4
  array('Caniatáu eiconau-cymorth (cymorth Saesneg yn unig)','enable_help',9, 'f=index.htm&amp;as=admin_general_help&amp;ae=admin_general_help_end'), //cpg1.4
  array('Caniatáu geiriau allweddol sy\'n gallu eu clicio wrth chwilio','clickable_keyword_search',14, 'f=index.htm&amp;as=admin_general_keywords_start&amp;ae=admin_general_keywords_end'), //cpg1.4
  array('Caniatáu <i>plugins</i>', 'enable_plugins', 12, 'f=index.htm&amp;as=admin_general_enable-plugins&amp;ae=admin_general_enable-plugins_end'),  //cpg1.4
  array('Caniatáu gwaharddiad cyfeiriadau IP preifat (anlwybredig)', 'ban_private_ip', 1,  'f=index.htm&amp;as=admin_general_private-ip&amp;ae=admin_general_private-ip_end'), //cpg1.4
  array('Rhyngwyneb ychwanegu-swp yn gallu ei bori', 'browse_batch_add', 1, 'f=index.htm&amp;as=admin_general_browsable_batch_add&amp;ae=admin_general_browsable_batch_add_end'), //cpg1.4

  'Gosodiadau Iaith &amp; Set nodau',
  array('Iaith', 'lang', 5, 'f=index.htm&amp;as=admin_language_language&amp;ae=admin_language_language_end'), //cpg1.4
  array('Defnyddio\'r Saesneg os nac ydy\'r cymal Cymraeg ar gael?', 'language_fallback', 1, 'f=index.htm&amp;as=admin_language_fallback&amp;ae=admin_language_fallback_end'), //cpg1.4
  array('Codio nodau', 'charset', 4, 'f=index.htm&amp;as=admin_language_charset&amp;ae=admin_language_charset_end'), //cpg1.4
  array('Dangos rhestr ieithoedd', 'language_list', 1, 'f=index.htm&amp;as=admin_language_list&amp;ae=admin_language_list_end'), //cpg1.4
  array('Dangos fflagiau ieithoedd', 'language_flags', 8, 'f=index.htm&amp;as=admin_language_flags&amp;ae=admin_language_flags_end&amp;top=1'), //cpg1.4
  array('Dangos &quot;ail-osod&quot; ar ddewis iaith', 'language_reset', 1, 'f=index.htm&amp;as=admin_language_reset&amp;ae=admin_language_reset_end&amp;top=1'), //cpg1.4
  //array('Display previous/next on tabbed pages', 'previous_next_tab', 1), //cpg1.4

  'Gosodiadau themâu',
  array('Thema', 'theme', 6, 'f=index.htm&amp;as=admin_theme_theme&amp;ae=admin_theme_theme_end'), //cpg1.4
  array('Dangos rhestr themâu', 'theme_list', 1, 'f=index.htm&amp;as=admin_theme_theme_list&amp;ae=admin_theme_theme_list_end'), //cpg1.4
  array('Dangos &quot;ail-osod&quot; ar ddewis thema', 'theme_reset', 1, 'f=index.htm&amp;as=admin_theme_theme_reset&amp;ae=admin_theme_theme_reset_end'), //cpg1.4
  array('Dangos FAQ', 'display_faq', 1, 'f=index.htm&amp;as=admin_theme_faq&amp;ae=admin_theme_faq_end'), //cpg1.4
  array('Enw dolen ddewislen cwstwm', 'custom_lnk_name', 0,'f=index.htm&amp;as=admin_theme_custom_lnk_name&amp;ae=admin_theme_custom_lnk_name_end'), //cpg1.4
  array('URL dolen ddewislen cwstwm', 'custom_lnk_url', 0,'f=index.htm&amp;as=admin_language_custom_lnk_url&amp;ae=admin_language_custom_lnk_url_end'), //cpg1.4
  array('Dangos cymorth bbcode', 'show_bbcode_help', 1, 'f=index.htm&amp;as=admin_theme_bbcode&amp;ae=admin_theme_bbcode_end&amp;top=1'), //cpg1.4
  array('Dangos blociau balchder ar themâu sy\'n ufudd i XHTML a CSS','vanity_block',1, 'f=index.htm&amp;as=vanity_block&amp;ae=vanity_block_end'), //cpg1.4
  array('Llwybr i ffeil gynnwys pennawd gwstwm', 'custom_header_path', 0, 'f=index.htm&amp;as=admin_theme_include_path_start&amp;ae=admin_theme_include_path_end'), //cpg1.4
  array('Llwybr i ffeil gynnwys troedyn gwstwm', 'custom_footer_path', 0, 'f=index.htm&amp;as=admin_theme_include_path_start&amp;ae=admin_theme_include_path_end'), //cpg1.4

  'Golwg rhestr albymau',
  array('Lled y prif dabl (picsel neu %)', 'main_table_width', 0, 'f=index.htm&amp;as=admin_album_table-width&amp;ae=admin_album_table-width_end'), //cpg1.4
  array('Nifer y lefelau categori i\'w dangos', 'subcat_level', 0, 'f=index.htm&amp;as=admin_album_category-levels&amp;ae=admin_album_category-levels_end'), //cpg1.4
  array('Nifer yr albymau i\'w dangos', 'albums_per_page', 0, 'f=index.htm&amp;as=admin_album_number&amp;ae=admin_album_number_end'), //cpg1.4
  array('Nifer y colofnau ar gyfer y rhestr albymau', 'album_list_cols', 0, 'f=index.htm&amp;as=admin_album_columns&amp;ae=admin_album_columns_end'), //cpg1.4
  array('Maint y bawdluniau mewn picselau', 'alb_list_thumb_size', 0, 'f=index.htm&amp;as=admin_album_thumbnail-size&amp;ae=admin_album_thumbnail-size_end'), //cpg1.4
  array('Cynnwys y brif dudalen', 'main_page_layout', 0, 'f=index.htm&amp;as=admin_album_list_content&amp;ae=admin_album_list_content_end'), //cpg1.4
  array('Dangos bawdluniau yr albymau lefel gyntaf mewn categorïau','first_level',1, 'f=index.htm&amp;as=admin_album_first-level_thumbs&amp;ae=admin_album_first-level_thumbs_end'), //cpg1.4
  array('Categorïau wrth drefn y wyddor (nid wrth drefn gwstwm)','categories_alpha_sort',1, 'f=index.htm&amp;as=admin_album_list_alphasort_start&amp;ae=admin_album_list_alphasort_end'), //cpg1.4
  array('Dangos nifer y ffeiliau cysylltiedig','link_pic_count',1, 'f=index.htm&amp;as=admin_album_linked_files_start&amp;ae=admin_album_linked_files_end'), //cpg1.4

  'Golwg bawdlun',
  array('Nifer y colofnau ar dudalen fawdlun', 'thumbcols', 0, 'f=index.htm&amp;as=admin_thumbnail_columns&amp;ae=admin_thumbnail_columns_end'), //cpg1.4
  array('Nifer y rhesi ar dudalen fawdlun', 'thumbrows', 0, 'f=index.htm&amp;as=admin_thumbnail_rows&amp;ae=admin_thumbnail_rows_end'), //cpg1.4
  array('Uchafswm o dabiau i\'w dangos', 'max_tabs', 10, 'f=index.htm&amp;as=admin_thumbnail_tabs&amp;ae=admin_thumbnail_tabs_end'), //cpg1.4
  array('Dangos pennawd ffeil (yn ogystal â\'r teitl) o dan y bawdlun', 'caption_in_thumbview', 1, 'f=index.htm&amp;as=admin_thumbnail_display_caption&amp;ae=admin_thumbnail_display_caption_end'), //cpg1.4
  array('Dangos nifer y golygon dan y bawdlun', 'views_in_thumbview', 1, 'f=index.htm&amp;as=admin_thumbnail_display_views&amp;ae=admin_thumbnail_display_views_end'), //cpg1.4
  array('Dangos nifer y sylwadau dan y bawdlun', 'display_comment_count', 1, 'f=index.htm&amp;as=admin_thumbnail_display_comments&amp;ae=admin_thumbnail_display_comments_end'), //cpg1.4
  array('Dangos enw\'r llwythwr dan y bawdlun', 'display_uploader', 1, 'f=index.htm&amp;as=admin_thumbnail_display_uploader&amp;ae=admin_thumbnail_display_uploader_end'), //cpg1.4
  //array('Display name of admin uploaders below the thumbnail', 'display_admin_uploader', 1, 'f=index.htm&amp;as=admin_thumbnail_display_admin_uploader&amp;ae=admin_thumbnail_display_admin_uploader_end'), //cpg1.4
  array('Dangos enw\'r ffeil dan y bawdlun', 'display_filename', 1, 'f=index.htm&amp;as=admin_thumbnail_display_filename&amp;ae=admin_thumbnail_display_filename_end'), //cpg1.4
  //array('Display album description', 'alb_desc_thumb', 1, 'f=index.htm&amp;as=admin_thumbnail_display_description&amp;ae=admin_thumbnail_display_description_end'), //cpg1.4
  array('Trefn ddiofyn ar gyfer ffeiliau', 'default_sort_order', 3, 'f=index.htm&amp;as=admin_thumbnail_default_sortorder&amp;ae=admin_thumbnail_default_sortorder_end'), //cpg1.4
  array('Isafswm o bleidleisiau er mwyn dangos y ffeil mewn rhestr \'gradd-gorau\'', 'min_votes_for_rating', 0, 'f=index.htm&amp;as=admin_thumbnail_minimum_votes&amp;ae=admin_thumbnail_minimum_votes_end'), //cpg1.4

  'Golwg delweddau', //cpg1.4
  array('Lled y tabl ar gyfer dangos y ffeil (picsel neu %)', 'picture_table_width', 0, 'f=index.htm&amp;as=admin_image_comment_table-width&amp;ae=admin_image_comment_table-width_end'), //cpg1.4
  array('Gwybodaeth ffeil ar gael yn ddiofyn', 'display_pic_info', 1, 'f=index.htm&amp;as=admin_image_comment_info_visible&amp;ae=admin_image_comment_info_visible_end'), //cpg1.4
  array('Hyd fwyaf am ddisgrifiad delwedd', 'max_img_desc_length', 0, 'f=index.htm&amp;as=admin_image_comment_descr_length&amp;ae=admin_image_comment_descr_length_end'), //cpg1.4
  array('Mwyaf o lythrennau mewn gair', 'max_com_wlength', 0, 'f=index.htm&amp;as=admin_image_comment_chars_per_word&amp;ae=admin_image_comment_chars_per_word_end'), //cpg1.4
  array('Dangos stribed ffilm', 'display_film_strip', 1, 'f=index.htm&amp;as=admin_image_comment_filmstrip_toggle&amp;ae=admin_image_comment_filmstrip_toggle_end'), //cpg1.4
  array('Dangos enw\'r ffeil dan fawdlun stribed ffilm', 'display_film_strip_filename', 1, 'f=index.htm&amp;as=admin_image_comment_display_film_strip_filename&amp;ae=admin_image_comment_display_film_strip_filename_end'), //cpg1.4
  array('Nifer yr eitemau mewn stribed ffilm', 'max_film_strip_items', 0, 'f=index.htm&amp;as=admin_image_comment_filmstrip_number&amp;ae=admin_image_comment_filmstrip_number_end'), //cpg1.4
  array('Ysbaid y sioe sleid mewn milieiliadau (1 eiliad = 1000 milieiliad)', 'slideshow_interval', 0, 'f=index.htm&amp;as=admin_image_comment_slideshow_interval&amp;ae=admin_image_comment_slideshow_interval_end'), //cpg1.4

  'Gosodiadau sylwadau', //cpg1.4
  array('Hidlo geiriau drwg mewn sylwadau', 'filter_bad_words', 1, 'f=index.htm&amp;as=admin_image_comment_bad_words&amp;ae=admin_image_comment_bad_words_end'), //cpg1.4
  array('Caniatáu gwenluniau mewn sylwadau', 'enable_smilies', 1, 'f=index.htm&amp;as=admin_image_comment_smilies&amp;ae=admin_image_comment_smilies_end'), //cpg1.4
  array('Caniatáu sawl sylw olynol ar un ffeil gan yr un defnyddiwr (anactifadu diogelwch llif)', 'disable_comment_flood_protect', 1, 'f=index.htm&amp;as=admin_image_comment_flood&amp;ae=admin_image_comment_flood_end'), //cpg1.4
  array('Nifer mwyaf o linellau mewn sylw', 'max_com_lines', 0, 'f=index.htm&amp;as=admin_image_comment_lines&amp;ae=admin_image_comment_lines_end'), //cpg1.4
  array('Hyd fwyaf y sylwadau', 'max_com_size', 0, 'f=index.htm&amp;as=admin_image_comment_length&amp;ae=admin_image_comment_length_end'), //cpg1.4
  array('Tynnu sylw gweinyddwyr o sylwadau gan e-bost', 'email_comment_notification', 1, 'f=index.htm&amp;as=admin_image_comment_admin_notify&amp;ae=admin_image_comment_admin_notify_end'), //cpg1.4
  array('Trefnu sylwadau', 'comments_sort_descending', 17, 'f=index.htm&amp;as=admin_comment_sort_start&amp;ae=admin_comment_sort_end'), //cpg1.4
  array('Rhagddodiad ar gyfer sylwadau ag awduron anhysbys', 'comments_anon_pfx', 0, 'f=index.htm&amp;as=comments_anon_pfx&amp;ae=comments_anon_pfx_end'), //cpg1.4

  'Gosodiadau ffeiliau a bawdluniau',
  array('Ansawdd ar gyfer ffeiliau JPEG', 'jpeg_qual', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_jpeg_quality&amp;ae=admin_picture_thumbnail_jpeg_quality_end'), //cpg1.4
  array('Dimensiwn uchaf ar gyfer bawdluniau <a href="#notice2" class="clickable_option">**</a>', 'thumb_width', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max-dimension&amp;ae=admin_picture_thumbnail_max-dimension_end'), //cpg1.4
  array('Defnyddio dimensiwn ( lled neu uchder neu agwedd Uchaf ar gyfer bawdlun ) <a href="#notice2" class="clickable_option">**</a>', 'thumb_use', 7, 'f=index.htm&amp;as=admin_picture_thumbnail_use-dimension&amp;ae=admin_picture_thumbnail_use-dimension_end'), //cpg1.4
  array('Creu lluniau rhyngol','make_intermediate',1, 'f=index.htm&amp;as=admin_picture_thumbnail_intermediate_toggle&amp;ae=admin_picture_thumbnail_intermediate_toggle_end'), //cpg1.4
  array('Lled neu uchder uchaf y llun rhyngol/fideo <a href="#notice2" class="clickable_option">**</a>', 'picture_width', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_intermediate_dimension&amp;ae=admin_picture_thumbnail_intermediate_dimension_end'), //cpg1.4
  array('Maint mwyaf am ffeiliau wedi\'u llwytho (KB)', 'max_upl_size', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max_upload_size&amp;ae=admin_picture_thumbnail_max_upload_size_end'), //cpg1.4
  array('Lled neu uchder uchaf am luniau/fideo wedi\'u llwytho (picseli)', 'max_upl_width_height', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max_upload_dimension&amp;ae=admin_picture_thumbnail_max_upload_dimension_end'), //cpg1.4
  array('Ail-meintio delweddau sydd yn fwy na\'r lled neu uchder uchaf yn awtomatig', 'auto_resize', 16, 'f=index.htm&amp;as=admin_picture_thumbnail_auto-resize&amp;ae=admin_picture_thumbnail_auto-resize_end'), //cpg1.4

  'Gosodiadau uwch ar gyfer ffeiliau a bawdluniau',
  array('Gall albymau fod yn breifat (Sylw: os ydych yn newid o \'ie\' i \'na\' bydd unrhyw albymau preifat cyfredol yn troi\'n gyhoeddus)', 'allow_private_albums', 1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_private_toggle&amp;ae=admin_picture_thumb_advanced_private_toggle_end'), //cpg1.4
  array('Dangos Eicon albwm preifat i ddefnyddiwr sydd heb fewngofnodi','show_private',1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_private_icon_show&amp;ae=admin_picture_thumb_advanced_private_icon_show_end'), //cpg1.4
  array('Llythrennau heb eu caniatáu mewn enwau ffeiliau', 'forbiden_fname_char',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_filename_forbidden_chars&amp;ae=admin_picture_thumb_advanced_filename_forbidden_chars_end'), //cpg1.4
  //array('Accepted file extensions for uploaded pictures', 'allowed_file_extensions',0, 'f=index.htm&amp;as=&amp;ae=_end'), //cpg1.4
  array('Teipiau delwedd sy\'n cael eu caniatáu', 'allowed_img_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_pic_extensions&amp;ae=admin_picture_thumb_advanced_pic_extensions_end'), //cpg1.4
  array('Teipiau fideo sy\'n cael eu caniatáu', 'allowed_mov_types',0, 'f=index.htm&amp;as=admin_thumbs_advanced_movie&amp;ae=admin_thumbs_advanced_movie_end'), //cpg1.4
  array('Awtoddechrau Chwarae Fideo', 'media_autostart',1, 'f=index.htm&amp;as=admin_movie_autoplay&amp;ae=admin_movie_autoplay_end'), //cpg1.4
  array('Teipiau clywedol sy\'n cael eu caniatáu', 'allowed_snd_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_audio_extensions&amp;ae=admin_picture_thumb_advanced_audio_extensions_end'), //cpg1.4
  array('Teipiau dogfennau sy\'n cael eu caniatáu', 'allowed_doc_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_doc_extensions&amp;ae=admin_picture_thumb_advanced_doc_extensions_end'), //cpg1.4
  array('Dull ar gyfer ail-meintio delweddau','thumb_method',2, 'f=index.htm&amp;as=admin_picture_thumb_advanced_resize_method&amp;ae=admin_picture_thumb_advanced_resize_method_end'), //cpg1.4
  array('Llwybr i ImageMagick \'convert\' utility (example /usr/bin/X11/)', 'impath', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_im_path&amp;ae=admin_picture_thumb_advanced_im_path_end'), //cpg1.4
  //array('Allowed image types (only valid for ImageMagick)', 'allowed_img_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_allowed_imagetypes&amp;ae=admin_picture_thumb_advanced_allowed_imagetypes_end'), //cpg1.4
  array('Opsiynau llinell gorchymyn ar gyfer ImageMagick', 'im_options', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_im_commandline&amp;ae=admin_picture_thumb_advanced_im_commandline_end'), //cpg1.4
  array('Darllen data EXIF mewn ffeiliau JPEG', 'read_exif_data', 13, 'f=index.htm&amp;as=admin_picture_thumb_advanced_exif&amp;ae=admin_picture_thumb_advanced_exif_end'), //cpg1.4
  array('Darllen data IPTC mewn ffeiliau JPEG', 'read_iptc_data', 1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_iptc&amp;ae=admin_picture_thumb_advanced_iptc_end'), //cpg1.4
  array('Ffolder yr albwm <a href="#notice1" class="clickable_option">*</a>', 'fullpath', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_albums_dir&amp;ae=admin_picture_thumb_advanced_albums_dir_end'), //cpg1.4
  array('Ffolder ar gyfer ffeiliau defnyddiwr <a href="#notice1" class="clickable_option">*</a>', 'userpics', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_userpics_dir&amp;ae=admin_picture_thumb_advanced_userpics_dir_end'), //cpg1.4
  array('Rhagddodiad ar gyfer lluniau rhyngol <a href="#notice1" class="clickable_option">*</a>', 'normal_pfx', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_intermediate_prefix&amp;ae=admin_picture_thumb_advanced_intermediate_prefix_end'), //cpg1.4
  array('Rhagddodiad ar gyfer bawdluniau <a href="#notice1" class="clickable_option">*</a>', 'thumb_pfx', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_thumbs_prefix&amp;ae=admin_picture_thumb_advanced_thumbs_prefix_end'), //cpg1.4
  array('Modd diofyn ar gyfer ffolderi', 'default_dir_mode', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_chmod_folder&amp;ae=admin_picture_thumb_advanced_chmod_folder_end'), //cpg1.4
  array('Modd diofyn ar gyfer ffeiliau', 'default_file_mode', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_chmod_files&amp;ae=admin_picture_thumb_advanced_chmod_files_end'), //cpg1.4

  'Gosodiadau defnyddiwr',
  array('Caniatáu cofrestriadau defnyddwyr newydd', 'allow_user_registration', 1, 'f=index.htm&amp;as=admin_allow_registration&amp;ae=admin_allow_registration_end'), //cpg1.4
  array('Caniatáu mynediad i ddefnyddwyr sydd heb fewngofnodi (gwestai neu anhysbys)', 'allow_unlogged_access', 1, 'f=index.htm&amp;as=admin_allow_unlogged_access&amp;ae=admin_allow_unlogged_access_end'), //cpg1.4
  array('Mae cofrestru defnyddwyr yn ymofyn gwiriad e-bost', 'reg_requires_valid_email', 1, 'f=index.htm&amp;as=admin_registration_verify&amp;ae=admin_registration_verify_end'), //cpg1.4
  array('Tynnu sylw gweinyddwyr o gofrestru defnyddwyr gan e-bost', 'reg_notify_admin_email', 1, 'f=index.htm&amp;as=admin_registration_notify&amp;ae=admin_registration_notify_end'), //cpg1.4
  array('Actifadu cofrestriadau gan weinyddwyr', 'admin_activation', 1, 'f=index.htm&amp;as=admin_activation&amp;ae=admin_activation_end'),  //cpg1.4
  array('Caniatáu dau ddefnyddiwr i rannu\'r un cyfeiriad e-bost', 'allow_duplicate_emails_addr', 1, 'f=index.htm&amp;as=admin_allow_duplicate_emails_addr&amp;ae=admin_allow_duplicate_emails_addr_end'), //cpg1.4
  array('Tynnu sylw gweinyddwyr o lwythiad defnyddiwr yn aros am gymeradwyaeth', 'upl_notify_admin_email', 1, 'f=index.htm&amp;as=admin_approval_notify&amp;ae=admin_approval_notify_end'), //cpg1.4
  array('Caniatáu defnyddwyr sydd wedi mewngofnodi i edrych ar restr aelodau', 'allow_memberlist', 1, 'f=index.htm&amp;as=admin_user_memberlist&amp;ae=admin_user_memberlist_end'), //cpg1.4
  array('Caniatáu defnyddwyr i newid eu cyfeiriadau e-bost mewn proffil', 'allow_email_change', 1, 'f=index.htm&amp;as=admin_user_allow_email_change&amp;ae=admin_user_allow_email_change_end'), //cpg1.4
  array('Caniatáu defnyddwyr i galw rheolaeth ar eu lluniau mewn orielau cyhoeddus', 'users_can_edit_pics', 1, 'f=index.htm&amp;as=admin_user_editpics_public_start&amp;ae=admin_user_editpics_public_end'), //cpg1.4
  array('Nifer y mewngofnodion aflwyddiannus tan bod gwharddiad dros dro (i osgoi ymosodiadau hacio)', 'login_threshold', 0, 'f=index.htm&amp;as=admin_user_login_start&amp;ae=admin_user_login_end'), //cpg1.4
  array('Hyd y gwaharddiad dros dro yn dilyn mewngofnodiadau aflwyddiannus', 'login_expiry', 0, 'f=index.htm&amp;as=admin_user_login_start&amp;ae=admin_user_login_end'), //cpg1.4
  array('Actifadu Adroddiad i Weinyddwyr', 'report_post', 1, 'f=index.htm&amp;as=admin_user_enable_report&amp;ae=admin_user_enable_report_end'),  //cpg1.4

// custom profile fields,  //cpg1.4
  'Meysydd cwstwm ar gyfer proffil defnyddwyr (gadael yn wag os nac yw\'n cael eu defnyddio).
  Defnyddiwch Broffil 6 am fewnbwn hir, e.e. bywgraffiadau', //cpg1.4
  array('Enw Proffil 1', 'user_profile1_name', 0, 'f=index.htm&amp;as=admin_custom&amp;ae=admin_custom_end'), //cpg1.4
  array('Enw Proffil 2', 'user_profile2_name', 0), //cpg1.4
  array('Enw Proffil 3', 'user_profile3_name', 0), //cpg1.4
  array('Enw Proffil 4', 'user_profile4_name', 0), //cpg1.4
  array('Enw Proffil 5', 'user_profile5_name', 0), //cpg1.4
  array('Enw Proffil 6', 'user_profile6_name', 0), //cpg1.4

  'Meysydd cwstwm ar gyfer disgrifiadau delweddau (gadael yn wag os nac yw\'n cael eu defnyddio)',
  array('Enw Maes 1', 'user_field1_name', 0, 'f=index.htm&amp;as=admin_custom_image&amp;ae=admin_custom_image_end'), //cpg1.4
  array('Enw Maes 2', 'user_field2_name', 0),
  array('Enw Maes 3', 'user_field3_name', 0),
  array('Enw Maes 4', 'user_field4_name', 0),

  'Gosodiadau cwcis',
  array('Enw cwci', 'cookie_name', 0, 'f=index.htm&amp;as=admin_cookie_name&amp;ae=admin_cookie_name_end'), //cpg1.4
  array('Llwybr cwci', 'cookie_path', 0, 'f=index.htm&amp;as=admin_cookie_path&amp;ae=admin_cookie_path_end'), //cpg1.4

  'Gosodiadau e-bost  (fel rheol bydd dim i\'w newid; gadewch feysydd yn wag os yn ansicr)', //cpg1.4
  array('Gwesteiwr SMTP (pan yn wag, caiff sendmail ei ddefnyddio)', 'smtp_host', 0, 'f=index.htm&amp;as=admin_email&amp;ae=admin_email_end'), //cpg1.4
  array('Enw SMTP', 'smtp_username', 0), //cpg1.4
  array('Cyfrinair SMTP', 'smtp_password', 0), //cpg1.4

  'Logio ac ystadegau', //cpg1.4
  array('Modd logio <a href="#notice3" class="clickable_option">***</a>', 'log_mode', 11, 'f=index.htm&amp;as=admin_logging_log_mode&amp;ae=admin_logging_log_mode_end'), //cpg1.4
  array('Logio e-gardiau', 'log_ecards', 1, 'f=index.htm&amp;as=admin_general_log_ecards&amp;ae=admin_general_log_ecards_end'), //cpg1.4
  array('Cadw ystadegau pleidleisiau manwl','vote_details',1, 'f=index.htm&amp;as=admin_logging_votedetails&amp;ae=admin_logging_votedetails_end'), //cpg1.4
  array('Cadw ystadegau trawio manwl','hit_details',1, 'f=index.htm&amp;as=admin_logging_hitdetails&amp;ae=admin_logging_hitdetails_end'), //cpg1.4

  'Maintenance settings', //cpg1.4
  array('Actifadu modd dadfygio', 'debug_mode', 9, 'f=index.htm&amp;as=debug_mode&amp;ae=debug_mode_end'), //cpg1.4
  array('Dangos hysbysiadau mewn modd dadfygio', 'debug_notice', 1, 'f=index.htm&amp;as=admin_misc_debug_notices&amp;ae=admin_misc_debug_notices_end'), //cpg1.4
  array('Nid yw\'r oriel arlein', 'offline', 1, 'f=index.htm&amp;as=admin_general_offline&amp;ae=admin_general_offline_end'), //cpg1.4
);


// ------------------------------------------------------------------------- //
// File db_ecard.php
// ------------------------------------------------------------------------- //

if (defined('DB_ECARD_PHP')) $lang_db_ecard_php = array(
  'title' => 'E-gardiau wedi\'u hanfon',
  'ecard_sender' => 'Anfonwr',
  'ecard_recipient' => 'Derbynnydd',
  'ecard_date' => 'Dyddiad',
  'ecard_display' => 'Dangos e-gerdyn',
  'ecard_name' => 'Enw',
  'ecard_email' => 'e-bost',
  'ecard_ip' => 'IP #',
  'ecard_ascending' => 'esgynnol',
  'ecard_descending' => 'disgynnol',
  'ecard_sorted' => 'Trefnwyd',
  'ecard_by_date' => 'gan ddyddiad',
  'ecard_by_sender_name' => 'gan enw\'r anfonwr',
  'ecard_by_sender_email' => 'gan e-bost yr anfonwr',
  'ecard_by_sender_ip' => 'gan gyfeiriad IP yr anfonwr',
  'ecard_by_recipient_name' => 'gan enw\'r derbynnydd',
  'ecard_by_recipient_email' => 'gan e-bost y derbynnydd',
  'ecard_number' => 'dangos cofnod %s i %s allan o %s',
  'ecard_goto_page' => 'ewch i dudalen',
  'ecard_records_per_page' => 'Cofnodion y dudalen',
  'check_all' => 'Siecio Pob',
  'uncheck_all' => 'Dad-siecio Pob',
  'ecards_delete_selected' => 'Dileu\'r e-gardiau sydd wedi\'u dewis',
  'ecards_delete_confirm' => 'Ydych chi\'n sicr rydych am ddileu\'r cofnodion? Ticiwch y bocs!',
  'ecards_delete_sure' => 'Rwy\'n sicr',
);


// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
  'empty_name_or_com' => 'Mae angen i chi deipio\'ch enw a gosod sylw',
  'com_added' => 'Cafodd eich sylw ei ychwanegu',
  'alb_need_title' => 'Mae angen i chi roi teitl ar gyfer yr albwm hwn!',
  'no_udp_needed' => '\'Stim angen diweddariad.',
  'alb_updated' => 'Cafodd yr albwm ei ddiweddaru',
  'unknown_album' => 'Nid yw\'r albwm hwn yn bodoli neu nid oes hawliau \'da chi i lwytho iddo',
  'no_pic_uploaded' => 'Dim ffeil wedi\'i llwytho !<br /><br />Os ydych wedi dewis ffeil i\'w llwytho, gwiriwch fod y gweinyddwr yn caniatáu llwytho ffeiliau...',
  'err_mkdir' => 'Methu creu ffolder %s !',
  'dest_dir_ro' => 'Sgript yn methu ysgrifennu i ffolder cyrchfan %s !',
  'err_move' => 'Amhosib symud %s i %s !',
  'err_fsize_too_large' => 'Mae maint y ffeil rydych wedi llwytho yn rhy fawr (mwyaf sy\'n cael ei ganiatáu yw %s x %s) !', //obsolete since cpg1.3 - consider removal in cpg1.4 once upload.php has been overhauled
  'err_imgsize_too_large' => 'Mae maint y ffeil rydych wedi llwytho yn rhy fawr (mwyaf sy\'n cael ei ganiatáu yw %s KB) !', //obsolete since cpg1.3 - consider removal in cpg1.4 once upload.php has been overhauled
  'err_invalid_img' => 'Nid yw\'r ffeil rydych wedi\'i llwytho yn ddelwedd ddilys !',
  'allowed_img_types' => 'Gallwch ddim ond llwytho delweddau %s.',
  'err_insert_pic' => 'Nid oes modd rhoi\'r ddelwedd \'%s\' mewn i\'r albwm ',
  'upload_success' => 'Cafodd eich ffeil ei llwytho\'n llwyddiannus.<br /><br />Bydd yn weledig yn dilyn cymedadwyaeth gan weinyddwr.',
  'notify_admin_email_subject' => '%s - Hysbysiad llwytho',
  'notify_admin_email_body' => 'Cafodd delwedd ei llwytho gan %s, sydd angen eich cymeradwyaeth. Ewch i %s',
  'info' => 'Gwybodaeth',
  'com_added' => 'Sylw wedi\'i ychwanegu',
  'alb_updated' => 'Albwm wedi\'i ddiweddaru ',
  'err_comment_empty' => 'Mae\'ch sylw\'n wag !',
  'err_invalid_fext' => 'Dim ond ffeiliau gyda\'r estyniadau canlynol sy\'n cael eu caniatáu : <br /><br />%s.',
  'no_flood' => 'Sori ond chi yw\'r awdur ar gyfer y sylw diwethaf ar gyfer y ffeil hon<br /><br />Golygwch y sylw rydych wedi\'i bostio eisoes os ydych am ei newid',
  'redirect_msg' => 'Rydych yn cael eich ail-gyfeirio.<br /><br /><br />Cliciwch \'PARHAU\' os nac ydy\'r dudalen yn eich ail-gyfeirio\'n awtomatig',
  'upl_success' => 'Cafodd eich ffeil ei hychwanegu\'n llwyddiannus',
  'email_comment_subject' => 'Sylw wedi\'i bostio ar Oriel Ffoto Coppermine',
  'email_comment_body' => 'Mae rhywun wedi postio sylw ar eich oriel. Ewch i\'w weld ar',
  'album_not_selected' => 'Albwm heb ei ddewis', //cpg1.4
  'com_author_error' => 'Mae defnyddiwr arall yn defnyddio\'r ffugenw hwn, mewngofnodwch neu defnyddiwch un arall', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
  'caption' => 'Pennawd',
  'fs_pic' => 'delwedd faint-llawn',
  'del_success' => 'wedi\'i dileu\'n llwyddiannus',
  'ns_pic' => 'delwedd faint-normal',
  'err_del' => 'methu ei ddileu',
  'thumb_pic' => 'bawdlun',
  'comment' => 'sylw',
  'im_in_alb' => 'delwedd mewn albwm',
  'alb_del_success' => 'Albwm &laquo;%s&raquo; wedi\'i ddileu', //cpg1.4
  'alb_mgr' => 'Album Manager',
  'err_invalid_data' => 'Data annilys wedi\'i dderbyn mewn \'%s\'',
  'create_alb' => 'Creu albwm \'%s\'',
  'update_alb' => 'Diweddaru albwm \'%s\' gyda theitl \'%s\' ac indecs \'%s\'',
  'del_pic' => 'Dileu ffeil',
  'del_alb' => 'Dileu albwm',
  'del_user' => 'Dileu defnyddiwr',
  'err_unknown_user' => 'Nid yw\'r defnyddiwr hwn yn bodoli !',
  'err_empty_groups' => 'Nid oes tabl grŵp neu mae\'r tabl grŵp yn wag!', //cpg1.4
  'comment_deleted' => 'Sylw wedi\'i ddileu\'n llwyddiannus',
  'npic' => 'Llun', //cpg1.4
  'pic_mgr' => 'Rheolwr Lluniau', //cpg1.4
  'update_pic' => 'Diweddaru llun \'%s\' gyda\'r enw ffeil \'%s\' ac indecs \'%s\'', //cpg1.4
  'username' => 'Enw', //cpg1.4
  'anonymized_comments' => 'Wedi di-hysbysu %s sylw', //cpg1.4
  'anonymized_uploads' => 'Wedi di-hysbysu %s llwythiad cyhoeddus', //cpg1.4
  'deleted_comments' => 'Wedi dileu %s sylw', //cpg1.4
  'deleted_uploads' => 'Wedi dileu %s llwythiad cyhoeddus', //cpg1.4
  'user_deleted' => 'defnyddiwr %s wedi\'i ddileu', //cpg1.4
  'activate_user' => 'Actifadu defnyddiwr', //cpg1.4
  'user_already_active' => 'Cyfrif eisoes wedi bod yn actif', //cpg1.4
  'activated' => 'Wedi actifadu', //cpg1.4
  'deactivate_user' => 'Anactifadu defnyddiwr', //cpg1.4
  'user_already_inactive' => 'Cyfrif eisoes wedi bod yn anactif', //cpg1.4
  'deactivated' => 'Wedi anactifadu', //cpg1.4
  'reset_password' => 'Ailosod cyfrinair/cyfrineiriau', //cpg1.4
  'password_reset' => 'Cyfrinair wedi\' ailosod i %s', //cpg1.4
  'change_group' => 'Newid grŵp cynradd', //cpg1.4
  'change_group_to_group' => 'Newid o %s i %s', //cpg1.4
  'add_group' => 'Ychwanegu grŵp eilaidd', //cpg1.4
  'add_group_to_group' => 'Ychwanegu defnyddiwr %s i grŵp %s. Mae\'n aelod o %s fel grŵp cynradd ac o %s fel grŵp eilaidd.', //cpg1.4
  'statws' => 'Status', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File displayecard.php
// ------------------------------------------------------------------------- //

if (defined('DISPLAYECARD_PHP')) {

$lang_displayecard_php = array(
  'invalid_data' => 'Mae\'r data ar gyfer yr e-gerdyn rydych yn ceisio ag agor wedi\'i lygru gan eich cleient e-bost. Gwiriwch fod y ddolen yn gyflawn.', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File displayimage.php
// ------------------------------------------------------------------------- //

if (defined('DISPLAYIMAGE_PHP')){

$lang_display_image_php = array(
  'confirm_del' => 'Ydych chi am DDILEU\'R ffeil hon ? \\nBydd sylwadau hefyd yn cael eu dileu.', //js-alert
  'del_pic' => 'DILEU\'R FFEIL HON',
  'size' => '%s x %s picsel',
  'views' => '%s gwaith',
  'slideshow' => 'Sioe sleidiau',
  'stop_slideshow' => 'ATAL SIOE SLEIDIAU',
  'view_fs' => 'Cliciwch i weld y delwedd faint-llawn',
  'edit_pic' => 'Golygu gwybodaeth ffeil', //cpg1.4
  'crop_pic' => 'Cropio and Throi',
  'set_player' => 'Newid chwaraewr',
);

$lang_picinfo = array(
  'title' =>'Gwbodaeth ffeil',
  'Filename' => 'Enw ffeil',
  'Album name' => 'Enw albwm',
  'Rating' => 'Gradd (%s pleidlais)',
  'Keywords' => 'Geiriau allweddol',
  'File Size' => 'Maint Ffeil',
  'Date Added' => 'Ychwanegu ar', //cpg1.4
  'Dimensions' => 'Dimensiynau',
  'Displayed' => 'Dangos',
  'URL' => 'URL', //cpg1.4
  'Make' => 'Math', //cpg1.4
  'Model' => 'Model', //cpg1.4
  'DateTime' => 'Dyddiad Amser', //cpg1.4
  'ISOSpeedRatings'=>'ISO', //cpg1.4
  'MaxApertureValue' => 'Iris Mwyaf', //cpg1.4
  'FocalLength' => 'Hyd ffocal', //cpg1.4
  'Comment' => 'Sylw',
  'addFav'=>'Ychwanegu i Ffefrynnau',
  'addFavPhrase'=>'Ffefrynnau',
  'remFav'=>'Dileu o Ffefrynnau',
  'iptcTitle'=>'Teitl IPTC',
  'iptcCopyright'=>'Hawlfraint IPTC',
  'iptcKeywords'=>'Geiriau Allweddol IPTC',
  'iptcCategory'=>'Categori IPTC',
  'iptcSubCategories'=>'Is-gategorïau IPTC',
  'ColorSpace' => 'Gwagle Lliw',
  'ExposureProgram' => 'Rhaglen Dinoethiad', //cpg1.4
  'Flash' => 'Flach', //cpg1.4
  'MeteringMode' => 'Modd Mesur', //cpg1.4
  'ExposureTime' => 'Amser Dinoethiad', //cpg1.4
  'ExposureBiasValue' => 'Tueddiad Dinoethiad', //cpg1.4
  'ImageDescription' => ' Disgrifiad Delwedd', //cpg1.4
  'Orientation' => 'Gorweddiad', //cpg1.4
  'xResolution' => 'Cydraniad X', //cpg1.4
  'yResolution' => 'Cydraniad Y', //cpg1.4
  'ResolutionUnit' => 'Uned Gydraniad', //cpg1.4
  'Software' => 'Meddalwedd', //cpg1.4
  'YCbCrPositioning' => 'LleoliYCbCr', //cpg1.4
  'ExifOffset' => 'Atred Exif', //cpg1.4
  'IFD1Offset' => 'Atred IFD1', //cpg1.4
  'FNumber' => 'RhifF', //cpg1.4
  'ExifVersion' => 'Fersiwn Exif', //cpg1.4
  'DateTimeOriginal' => 'DyddiadAmser Gwreiddiol', //cpg1.4
  'DateTimedigitized' => 'DyddiadAmser digido', //cpg1.4
  'ComponentsConfiguration' => 'Cyfluniad Cydrannau', //cpg1.4
  'CompressedBitsPerPixel' => 'Bit Cywasgiedig y Picsel', //cpg1.4
  'LightSource' => 'Ffynhonnell Golau', //cpg1.4
  'ISOSetting' => 'Gosodiad ISO', //cpg1.4
  'ColorMode' => 'Modd Lliw',
  'Quality' => 'Ansawdd', //cpg1.4
  'ImageSharpening' => 'Llymu Delwedd', //cpg1.4
  'FocusMode' => 'Modd Ffocws', //cpg1.4
  'FlashSetting' => 'Gosodiad Flach', //cpg1.4
  'ISOSelection' => 'Dewis ISO', //cpg1.4
  'ImageAdjustment' => 'Addasiad Delwedd', //cpg1.4
  'Adapter' => 'Addasydd', //cpg1.4
  'ManualFocusDistance' => 'Pellter Ffocws Gan Law', //cpg1.4
  'DigitalZoom' => 'Chwyddo Digidol', //cpg1.4
  'AFFocusPosition' => 'Lleoliad Ffocws AF', //cpg1.4
  'Saturation' => 'Dirlawnder', //cpg1.4
  'NoiseReduction' => 'Gostyngiad Sŵn', //cpg1.4
  'FlashPixVersion' => 'Fersiwn Flash Pix', //cpg1.4
  'ExifImageWidth' => 'Lled Delwedd Exif', //cpg1.4
  'ExifImageHeight' => 'Uchder Delwedd Exif', //cpg1.4
  'ExifInteroperabilityOffset' => 'Atred Rhyngweithredol Exif', //cpg1.4
  'FileSource' => 'Ffynhonnell Ffeil', //cpg1.4
  'SceneType' => 'Teip Golygfa', //cpg1.4
  'CustomerRender' => 'Cyflwyniad Cwsmer', //cpg1.4
  'ExposureMode' => 'Modd Dinoethiad', //cpg1.4
  'WhiteBalance' => 'Cydbwysedd Gwyn', //cpg1.4
  'DigitalZoomRatio' => 'Cymhareb Chwyddo Digidol', //cpg1.4
  'SceneCaptureMode' => 'Modd Cipio Golygfa', //cpg1.4
  'GainControl' => 'Rheolaeth Cynnydd', //cpg1.4
  'Contrast' => 'Cyferbyniad', //cpg1.4
  'Sharpness' => 'Llymiant', //cpg1.4
  'ManageExifDisplay' => 'Rheoli Golwg Exif', //cpg1.4
  'submit' => 'Anfon', //cpg1.4
  'success' => 'Gwybodaeth wedi\'i diweddaru\'n llwyddiannus.', //cpg1.4
  'details' => 'Manylion', //cpg1.4
);

$lang_display_comments = array(
  'OK' => 'Iawn',
  'edit_title' => 'Golygu\'r sylw',
  'confirm_delete' => 'A ydych am ddileu\\\'r sylw hwn ?', //js-alert
  'add_your_comment' => 'Ychwanegwch eich sylw',
  'name'=>'Enw',
  'comment'=>'Sylw',
  'your_name' => 'Anhysbys',
  'report_comment_title' => 'Adroddwch y sylw hwn i\'r gweinyddwr', //cpg1.4
);

$lang_fullsize_popup = array(
  'click_to_close' => 'Cliciwch y ddelwedd i gau\'r ffenest',
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
  'title' => 'Anfon e-gerdyn',
  'invalid_email' => '<font color="red"><b>Rhybudd</b></font>: cyfeiriad e-bost annilys:', //cpg1.4
  'ecard_title' => 'E-gerdyn oddi wrth %s i chi',
  'error_not_image' => 'Dim ond delweddau gall eu hanfon fel e-gardiau.',
  'view_ecard' => 'Dolen arall os nac ydy\'r e-gerdyn yn dangos yn gywir', //cpg1.4
  'view_ecard_plaintext' => 'I weld yr e-gerdyn, copïwch a gludo\'r url hwn i far cyfeiriad eich porwr:', //cpg1.4
  'view_more_pics' => 'Gweld mwy o luniau !', //cpg1.4
  'send_success' => 'Cafodd eich e-gerdyn ei anfon',
  'send_failed' => 'Sori, ond nid yw\'r gweinyddwr yn gallu anfon eich e-gerdyn...',
  'from' => 'Oddi wrth',
  'your_name' => 'Eich enw',
  'your_email' => 'Eich cyfeiriad e-bost',
  'to' => 'I',
  'rcpt_name' => 'Enw\'r derbynnydd',
  'rcpt_email' => 'e-bost y derbynnydd',
  'greetings' => 'Pennawd', //cpg1.4
  'message' => 'Neges', //cpg1.4
  'ecards_footer' => 'Anfon gan %s ar IP %s am %s (Amser oriel)', //cpg1.4
  'preview' => 'Rhagolwg yr e-gerdyn', //cpg1.4
  'preview_button' => 'Rhagolwg', //cpg1.4
  'submit_button' => 'Anfon e-gerdyn', //cpg1.4
  'preview_view_ecard' => 'Dyma\'r ddolen arall i\'r e-gerdyn unwaith iddo gael ei greu. Ni wnaiff weithio ar gyfer rhagolygon.', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File report_file.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('REPORT_FILE_PHP') || defined('DISPLAYREPORT_PHP')) $lang_report_php =array(
  'title' => 'Adrodd i\'r gweinyddwr', //cpg1.4
  'invalid_email' => '<b>Rhybudd</b> : cyfeiriad e-bost annilys !', //cpg1.4
  'report_subject' => 'Adroddiad oddi wrth %s ar oriel %s', //cpg1.4
  'view_report' => 'Dolen arall os nac ydy\'r adroddiad yn ymddangos yn gywir', //cpg1.4
  'view_report_plaintext' => 'I weld yr adroddiad, copïwch a gludo\'r url hwn i far cyfeiriad eich porwr:', //cpg1.4
  'view_more_pics' => 'Oriel', //cpg1.4
  'send_success' => 'Cafodd eich adroddiad ei anfon', //cpg1.4
  'send_failed' => 'Sori, ond ni all y gweinyddwr anfon eich adroddiad...', //cpg1.4
  'from' => 'Oddi wrth', //cpg1.4
  'your_name' => 'Eich enw', //cpg1.4
  'your_email' => 'Eich cyfeiriad e-bost', //cpg1.4
  'to' => 'To', //cpg1.4
  'administrator' => 'Gweinyddwr/Cym', //cpg1.4
  'subject' => 'Pwnc', //cpg1.4
  'comment_field_name' => 'Adrodd ar Sylw gan "%s"', //cpg1.4
  'reason' => 'Rheswm', //cpg1.4
  'message' => 'Neges', //cpg1.4
  'report_footer' => 'Anfonwyd gan %s ar IP %s am %s (Amser oriel)', //cpg1.4
  'obscene' => 'brwnt', //cpg1.4
  'offensive' => 'sarhaus', //cpg1.4
  'misplaced' => 'lleoliad anghywir', //cpg1.4
  'missing' => 'ar goll', //cpg1.4
  'issue' => 'gwall/methu gweld', //cpg1.4
  'other' => 'arall', //cpg1.4
  'refers_to' => 'Adroddiad ffeil yn cyfeirio at', //cpg1.4
  'reasons_list_heading' => 'rheswm/rhesymau am yr adroddiad:', //cpg1.4
  'no_reason_given' => 'dim rheswm wedi\'i roi ', //cpg1.4
  'go_comment' => 'Ewch i\'r sylw', //cpg1.4
  'view_comment' => 'Edrych ar adroddiad llawn gyda\'r sylw', //cpg1.4
  'type_file' => 'ffeil', //cpg1.4
  'type_comment' => 'sylw', //cpg1.4
  'invalid_data' => 'Mae\'r data ar gyfer yr adroddiad rydych yn ceisio ag agor wedi\'i lygru gan eich cleient e-bost. Gwiriwch fod y ddolen yn gyflawn.', //cpg1.4

);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
  'pic_info' => 'Gwybodaeth ffeil',
  'album' => 'Albwm',
  'title' => 'Teitl',
  'filename' => 'Enw ffeil', //cpg1.4
  'desc' => 'Disgrifiad',
  'keywords' => 'Geiriau allweddol',
  'new_keyword' => 'Gair allweddol newydd', //cpg1.4
  'new_keywords' => 'Geiriau allweddol newydd ar gael', //cpg1.4
  'existing_keyword' => 'Gair allweddol yn bodoli', //cpg1.4
  'pic_info_str' => '%s &times; %s - %s KB - %s golygon - %s pleidleisiau',
  'approve' => 'Cymeradwyo ffeil',
  'postpone_app' => 'Oedi cymeradwyo',
  'del_pic' => 'Dileu ffeil',
  'del_all' => 'Dileu POB ffeil', //cpg1.4
  'read_exif' => 'Darllen gwybodaeth EXIF eto',
  'reset_view_count' => 'Ailosod rhifydd golygon',
  'reset_all_view_count' => 'Ailosod POB rhifydd golygon', //cpg1.4
  'reset_votes' => 'Ailosod pleidleisiau',
  'reset_all_votes' => 'Ailosod POB pleidlais', //cpg1.4
  'del_comm' => 'Dileu sylwadau',
  'del_all_comm' => 'Dileu POB sylw', //cpg1.4
  'upl_approval' => 'Llwytho cymeradwyaeth', //cpg1.4
  'edit_pics' => 'Golygu ffeiliau',
  'see_next' => 'Gweld ffeil nesaf',
  'see_prev' => 'Gweld ffeiliau cynt',
  'n_pic' => '%s ffeil',
  'n_of_pic_to_disp' => 'Nifer y ffeiliau i\'w dangos',
  'apply' => 'Gosod newidiadau',
  'crop_title' => 'Golygydd Lluniau Coppermine',
  'preview' => 'Rhagolwg',
  'save' => 'Arbed llun',
  'save_thumb' =>'Arbed fel bawdlun',
  'gallery_icon' => 'Gwneud hwn i\'m eicon', //cpg1.4
  'sel_on_img' =>'Mae\\\'n rhaid i\\\'r ardal dewis fod ar y ddelwedd yn gyfan gwbl!', //js-alert
  'album_properties' =>'Priodweddau albwm', //cpg1.4
  'parent_category' =>'Uwch gategori', //cpg1.4
  'thumbnail_view' =>'Golwg bawdlun', //cpg1.4
  'select_unselect' =>'dewis/dad-ddewis pob', //cpg1.4
  'file_exists' => "Ffeil gyrchfan '%s' eisoes yn bodoli.", //cpg1.4
  'rename_failed' => "Methu ail-enwi '%s' i '%s'.", //cpg1.4
  'src_file_missing' => "Ffeil ffynhonnell '%s' ar goll.", // cpg 1.4
  'mime_conv' => "Methu trosi ffeil o '%s' i '%s'",//cpg1.4
  'forb_ext' => '\'Stim hawl defnyddio\'r estyniad hwn.',//cpg1.4
);

// ------------------------------------------------------------------------- //
// File faq.php
// ------------------------------------------------------------------------- //

if (defined('FAQ_PHP')) $lang_faq_php = array(
  'faq' => 'Cwestiynau Cyffredin',
  'toc' => 'Tabl cynnwys',
  'question' => 'Cwestiwn: ',
  'answer' => 'Ateb: ',
);

if (defined('FAQ_PHP')) $lang_faq_data = array(
  'FAQ Cyffredin',
  array('Pam oes yn rhaid i mi gofrestru?', 'Bydd cofrestru lan i\'r gweinyddwr. Mae cofrestru yn rhoi hawliau ychwanegol fel llwytho, rhestr ffefrynnau, graddio lluniau a phostio sylwadau ayyb.', 'allow_user_registration', '1'),
  array('Sut ydw i\'n cofrestru?', 'Ewch i &quot;Cofrestru&quot; a llenwch y meysydd priodol.<br />Dibynnu ar y sustem, ar ôl hyn, dylech dderbyn e-bost yn cynnwys manylion eich aelodaeth a chanllawiau ar sut i actifadu eich cyfrif. Mae\'n rhaid actifadu eich cyfrif cyn mewngofnodi.', 'allow_user_registration', '1'), //cpg1.4
  array('Sut ydw i\'n mewngofnodi?', 'Ewch i &quot;Mewngofnodi&quot;, rhowch eich enw a chyfrinair a sieciwch &quot;Cofiwch Fi&quot; felly eich bod dal wedi mewngofnodi os ydych yn gadael y wefan.<br /><b>PWYSIG: Mae\'n rhaid galluogi cwcis er mwyn defnyddio &quot;Cofiwch Fi&quot;.</b>', 'offline', 0),
  array('Pam na allaf fewngofnodi?', 'A wnaethoch gofrestru a chlicio\'r ddolen a gafodd ei anfon i chi gan e-bost? Bydd y ddolen yn actifadu eich cyfrif. Am broblemau mewngofnodi eraill, cysylltwch â\'r gweinyddwr.', 'offline', 0),
  array('Dwi wedi anghofio fy nghyfrinair?', 'Os oes &quot;Anghofio cyfrinair&quot; gan y wefan hon, defnyddiwch hi. Fel arall, cysylltwch â\'r gweinyddwr am gyfrinair newydd.', 'offline', 0),
  //array('What if I changed my email address?', 'Just simply login and change your email address through &quot;Profile&quot;', 'offline', 0),
  array('Sut ydw i\'n arbed llun i &quot;Fy Ffefrynnau&quot;?', 'Clic ar lun a chlic ar y ddolen &quot;gwyb llun&quot; (<img src="images/info.gif" width="16" height="16" border="0" alt="Gwybodaeth llun" />); yna clic ar &quot;Ychwanegu i ffefrynnau&quot;.<br />Dylai\'r &quot;gwybodaeth lluniau&quot; fod ymlaen yn ddiofyn.<br />PWYSIG: Dylai fod cwcis wedi\'u galluogi.', 'offline', 0),
  array('Sut ydw i\'n graddio ffeil?', 'Clic ar fawdlun, mynd i\'r gwaelod a dewis gradd.', 'offline', 0),
  array('Sut ydw i\'n postio sylw ar gyfer llun?', 'Clic ar fawdlun, mynd i\'r gwaelod a phostio sylw.', 'offline', 0),
  array('Sut ydw i\'n llwytho ffeil?', 'Ewch i &quot;Llwytho&quot; a dewis yr albwm rydych eisiau llwytho iddo. Clic &quot;Pori&quot; dewis y ffeil i\'w llwytho, a chlic &quot;Agor.&quot; Ychwanegwch deitl a disgrifiad os oes angen. Clic &quot;Anfon&quot;.<br /><br />Fel arall, os ydych yn defnyddio <b>Windows XP</b>, gallwch lwytho sawl ffeil yr un pryd i\'ch albymau personol gan ddefnyddio dewin cyhoeddi XP(XP Publishing Wizard).<br /> Am ganllawiau, <a href="xp_publish.php">cliciwch yma.</a>', 'allow_private_albums', 1), //cpg1.4
  array('I ble ydw i\'n llwytho lluniau?', 'Bydd modd i chi lwytho ffeil i un o\'ch albymau mewn &quot;F\'Oriel&quot;. Mae\'n bosib bod y gweinyddwr yn fodlon i chi lwytho i un neu fwy o albymau yn y Brif Oriel.', 'allow_private_albums', 0),
  array('Pa deip a maint o ffeil gallaf lwytho?', 'Maint a theip (jpg, png, ayyb.) yw dewis y gweinyddwr.', 'offline', 0),
  array('Sut ydw i\'n creu, ail-enwi neu ddileu albwm mewn &quot;Fy Oriel&quot;?', 'Dylech eisoes fod mewn  &quot;Modd-Gweinyddu.&quot;<br /> Ewch i &quot;Creu/Trefnu F\'Orielau&quot; a chlicio &quot;Newydd&quot;. Newidiwch &quot;Albwm Newydd&quot; i\'r enw o\'ch dewis.<br />Gallwch hefyd ail-enwi\'r albymau yn eich oriel.<br />Clic &quot;Gosod Addasiadau&quot;.', 'allow_private_albums', 0),
  array('Sut ydy i\'n cyfyngu\'r defnyddwyr sy\'n gallu edrych ar f\'albymau?', 'Dylech eisoes fod mewn  &quot;Modd-Gweinyddu.&quot;<br /> Ewch i &quot;Addasu f\'albymau. Ar far &quot;Diweddaru Albwm&quot;, dewiswch yr albwm rydych am ei addasu.<br />Yma, gallwch newid yr enw, disgrifiad, bawdlun, cyfyngu golwg a hawliau sylwadau/graddio.<br />Clic &quot;Diweddaru Albwm&quot;.', 'allow_private_albums', 0),
  array('Sut allaf edrych ar orielau defnyddwyr eraill?', 'Ewch i &quot;Rhestr Albwm&quot; a dewis &quot;Orielau Defnyddwyr&quot;.', 'allow_private_albums', 0),
  array('Beth yw cwcis?', 'Data (testun) yw cwci sydd yn cael ei anfon o\'r wefan i\'ch peiriant.<br />Mae cwcis yn aml yn storio gwybodaeth mewngofnodi.', 'offline', 0),
  array('O ble allaf gael y rhaglen hon ar gyfer fy ngwefan?', 'Oriel Amlgyfrwng rhad ac am ddim yw Coppermine, wedi\'i gyhoeddi dan GNU GPL. Mae\'n llawn nodweddion ac mae wedi\'i borthi i sawl platfform. Ewch i <a href="http://coppermine.sf.net/">Hafan Coppermine</a> i ddarganfod mwy a\'i lawrlwytho.', 'offline', 0),

  'Pori\'r Wefan',
  array('Beth yw &quot;Rhestr Albymau&quot;?', 'Dyma\'r categori rydych mewn ar y pryd, gyda dolen i bob albwm. Os nac ydych mewn categori, bydd yn dangos yr oriel gyfan gyda dolenni i bob categori. Gall bawdlun fod yn ddolen i\'r categori.', 'offline', 0),
  array('Beth yw &quot;F\'Oriel&quot;?', 'Mae hwn yn galluogi defnyddwyr i greu orielau eu hunain ac i greu, dileu ac addasu albymau yn ogystal â llwytho iddynt.', 'allow_private_albums', 1), //cpg1.4
  array('Beth yw\'r gwahaniaeth rhwng &quot;Modd Gweinyddu&quot; a &quot;Modd Defnyddiwr&quot;?', 'Pan yn modd-gweinyddu, mae hwn yn galluogi defnyddiwr i addasu ei oriel (yn ogystal ag eraill os yw\'n cael ei ganiatáu gan y gweinyddwr).', 'allow_private_albums', 0),
  array('Beth yw &quot;Llwytho Llun&quot;?', 'Mae hwn yn galluogi defnyddiwr i lwytho ffeil (maint a theip i\'w penderfynu gan y gweinyddwr) i oriel sydd yn cael ei ddewis gennych chi neu\'r gweinyddwr.', 'allow_private_albums', 0),
  array('Beth yw &quot;Llwythiadau Diwethaf&quot;?', 'Mae hwn yn dangos y llwythiadau diwethaf i\'r wefan.', 'offline', 0),
  array('Beth yw &quot;Sylwadau Diwethaf&quot;?', 'Mae hwn yn dangos y sylwadau diwethaf gan ddefnyddwyr.', 'offline', 0),
  array('Beth yw &quot;Mwyaf o Olygon&quot;?', 'Mae hwn yn dangos y ffeiliau sydd wedi\'u gweld y mwyaf o weithiau gan ddefnyddwyr (wedi mewngofnodi ai beidio).', 'offline', 0),
  array('Beth yw &quot;Goreuon&quot;?', 'Mae hwn yn dangos y ffeiliau gorau a gafodd eu graddio gan ddefnyddwyr. Mae\'n dangos y graddau fel cyfartaledd (e.e: pum defnyddiwr yr un yn rhoi <img src="images/rating3.gif" width="65" height="14" border="0" alt="" />: byddai\'r ffeil yn cael gradd o <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> ;Mae pum defnyddiwr wedi graddio\'r ffeil o 1 i 5 (1,2,3,4,5) a byddai\'n rhoi gradd <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> .)<br />Gall y graddau fynd o <img src="images/rating5.gif" width="65" height="14" border="0" alt="best" /> (gorau) i <img src="images/rating0.gif" width="65" height="14" border="0" alt="worst" /> (gwaethaf).', 'offline', 0),
  array('Beth yw &quot;Fy Ffefrynnau&quot;?', 'Mae hwn yn galluogi defnyddiwr i storio ffefryn (llun) mewn cwci ar eich cyfrifiadur.', 'offline', 0),
);


// ------------------------------------------------------------------------- //
// File forgot_passwd.php
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) $lang_forgot_passwd_php = array(
  'forgot_passwd' => 'Atgof cyfrinair',
  'err_already_logged_in' => 'Rydych wedi mewngofnodi\'n barod !',
  'enter_email' => 'Rhowch gyfeiriad eich e-bost', //cpg1.4
  'submit' => 'ewch',
  'illegal_session' => 'Sesiwn anghofio cyfrinair yn annilys neu wedi rhedeg allan.', //cpg1.4
  'failed_sending_email' => 'Nid oes modd anfon e-bost atgof cyfrinair !',
  'email_sent' => 'Cafodd e-bost yn cynnwys eich enw a chyfrinair ei anfon i %s', //cpg1.4
  'verify_email_sent' => 'Cafodd e-bost ei anfon i %s. Gwiriwch eich e-bost i gwblhau\'r broses.', //cpg1.4
  'err_unk_user' => 'Nid yw\'r defnyddiwr hwn yn bodoli!',
  'account_verify_subject' => '%s - Cais cyfrinair newydd', //cpg1.4
  'account_verify_body' => 'Rydych wedi gwneud cais am gyfrinair newydd. Os hoffech barhau â\'r cais, cliciwch y ddolen ganlynol:

%s', //cpg1.4
  'passwd_reset_subject' => '%s - Eich Cyfrinair Newydd', //cpg1.4
  'passwd_reset_body' => 'Dyma\'r cyfrinair newydd ar eich cais:
Enw: %s
Cyfrinair: %s
Cliciwch %s i fewngofnodi.', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
  'group_name' => 'Grŵp', //cpg1.4
  'permissions' => 'Hawliau', //cpg1.4
  'public_albums' => 'Llwytho albymau cyhoeddus', //cpg1.4
  'personal_gallery' => 'Orielau personol', //cpg1.4
  'upload_method' => 'Dull llwytho', //cpg1.4
  'disk_quota' => 'Cwota', //cpg1.4
  'rating' => 'Gradd', //cpg1.4
  'ecards' => 'E-gardiau', //cpg1.4
  'comments' => 'Sylwadau', //cpg1.4
  'allowed' => 'Caniatáu', //cpg1.4
  'approval' => 'Cymeradwyaeth', //cpg1.4
  'boxes_number' => 'Nifer y bocsys', //cpg1.4
  'variable' => 'newidiol', //cpg1.4
  'fixed' => 'sefydlog', //cpg1.4
  'apply' => 'Gosod newidiadau',
  'create_new_group' => 'Creu grŵp newydd',
  'del_groups' => 'Dileu grŵp/grwpiau wedi\'i ddewis/wedi\'u dewis',
  'confirm_del' => 'Rhybudd, wrth ddileu grŵp, bydd defnyddwyr sy\\\'n perthyn i\\\'r grŵp hwn, yn cael eu trosglwyddo i\\\'r grŵp \\\'Cofrestredig\\\' !\n\nYdych am barhau ?', //js-alert
  'title' => 'Rheoli grwpiau defnyddwyr',
  'num_file_upload' => 'Bocsys llwytho ffeiliau', //cpg1.4
  'num_URI_upload' => 'Bocsys llwytho URI', //cpg1.4
  'reset_to_default' => 'Ailosod i enw diofyn (%s) - argymell!', //cpg1.4
  'error_group_empty' => 'Tabl grŵp yn wag !<br /><br />Grwpiau diofyn wedi\'u creu, ail-lwythwch y dudalen', //cpg1.4
  'explain_greyed_out_title' => 'Pam ydy\'r rhes hon yn llwyd?', //cpg1.4
  'explain_guests_greyed_out_text' => 'Ni allwch newid priodweddau\'r grŵp hwn oherwydd mae\'r opsiwn &quot; Caniatáu mynediad i ddefnyddwyr sydd heb fewngofnodi (gwestai neu anhysbys)&quot; i &quot;Na&quot; ar y dudalen gyfluniad. Dim ond mewngofnodi gall gwesteion (aelodau grŵp %s); felly nid yw gosodiadau grŵp yn addas iddynt.', //cpg1.4
  'explain_banned_greyed_out_text' => 'Ni allwch newid priodweddau\'r grŵp %s oherwydd dim ond mewngofnodi gall yr aelodau wneud beth bynnag.', //cpg1.4
  'group_assigned_album' => 'albwm/albymau wedi aseinio', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
  'welcome' => 'Croeso !',
);

$lang_album_admin_menu = array(
  'confirm_delete' => 'A ydych am DDILEU\\\'R albwm hwn ? \\nBydd pob ffeil a sylw hefyd yn cael eu dileu.', //js-alert
  'delete' => 'DILEU',
  'modify' => 'PRIODWEDDAU',
  'edit_pics' => 'GOLYGU FFEILIAU',
);
//=== Dwi'n meddwl bo angen cadw'r geiriau gwreiddiol tu fewn [...]
$lang_list_categories = array(
  'home' => 'Hafan',
  'stat1' => '<b>[pictures]</b> ffeil mewn <b>[albums]</b> albwm a <b>[cat]</b> categori gyda <b>[comments]</b> sylw wedi\'u gweld <b>[views]</b> gwaith',
  'stat2' => '<b>[pictures]</b> ffeil mewn <b>[albums]</b> albwm wedi\'u gweld <b>[views]</b> gwaith',
  'xx_s_gallery' => 'Oriel %s',
  'stat3' => '<b>[pictures]</b> ffeil mewn <b>[albums]</b> albwm gyda <b>[comments]</b> sylw wedi\'u gweld <b>[views]</b> gwaith',
);

$lang_list_users = array(
  'user_list' => 'Rhestr ddefnyddwyr',
  'no_user_gal' => '\'Stim orielau defnyddwyr',
  'n_albums' => '%s albwm',
  'n_pics' => '%s ffeil',
);

$lang_list_albums = array(
  'n_pictures' => '%s ffeil',
  'last_added' => ', cafodd yr un olaf ei llwytho ar %s',
  'n_link_pictures' => '%s ffeil gysylltiedig', //cpg1.4
  'total_pictures' => '%s ffeil yn gyfan gwbl', //cpg1.4
);

}

// ------------------------------------------------------------------------- //
// File keywordmgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('KEYWORDMGR_PHP')) $lang_keywordmgr_php = array(
  'title' => 'Rheoli geiriau allweddol', //cpg1.4
  'edit' => 'golygu', //cpg1.4
  'delete' => 'dileu', //cpg1.4
  'search' => 'chwilio', //cpg1.4
  'keyword_test_search' => 'chwilio am %s mewn ffenest newydd', //cpg1.4
  'keyword_del' => 'dileu\'r gair allweddol %s', //cpg1.4
  'confirm_delete' => 'Ydych chi\\\'n sicr rydych am ddileu\\\'r gair allweddol %s o\\\'r oriel gyfan?', //cpg1.4  // js-alert
  'change_keyword' => 'newid gair allweddoll', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
  'login' => 'Mewngofnodi',
  'enter_login_pswd' => 'Rhowch eich enw a chyfrinair er mwyn mewngofnodi',
  'username' => 'Enw',
  'password' => 'Cyfrinair',
  'remember_me' => 'Cofio fi',
  'welcome' => 'Croeso %s ...',
  'err_login' => '*** Methu mewngofnodi. Ceisiwch eto ***',
  'err_already_logged_in' => 'Rydych eisoes wedi mewngofnodi !',
  'forgot_password_link' => 'Wedi anghofio fy nghyfrinair',
  'cookie_warning' => 'Rhybudd: nid yw eich porwr yn derbyn cwcis o sgriptiau', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
  'logout' => 'Allgofnodi',
  'bye' => 'Da bo\' %s ...',
  'err_not_loged_in' => 'Nid ydych wedi mewngofnodi!',
);

// ------------------------------------------------------------------------- //
// File minibrowser.php  //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('MINIBROWSER_PHP')) $lang_minibrowser_php = array(
  'close' => 'cau', //cpg1.4
  'submit' => 'Iawn', //cpg1.4
  'up' => 'lan un lefel', //cpg1.4
  'current_path' => 'llwybr presennol', //cpg1.4
  'select_directory' => 'dewis ffolder', //cpg1.4
  'click_to_close' => 'Clic delwedd i gau\'r ffenestr',
);

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
  'upd_alb_n' => 'Diweddaru albwm %s',
  'general_settings' => 'Gosodiadau cyffredinol',
  'alb_title' => 'Teitl albwm',
  'alb_cat' => 'Categori albwm',
  'alb_desc' => 'Disgrifiad albwm',
  'alb_keyword' => 'Gair allweddol albwm', //cpg1.4
  'alb_thumb' => 'Bawdlun albwm',
  'alb_perm' => 'Hawliau ar gyfer yr albwm hwn',
  'can_view' => 'Gall yr albwm ei weld gan',
  'can_upload' => 'Gall ymwelwyr lwytho ffeiliau',
  'can_post_comments' => 'Gall ymwelwyr bostio sylwadau',
  'can_rate' => 'Gall ymwelwyr raddio ffeiliau',
  'user_gal' => 'Oriel Defnyddiwr',
  'no_cat' => '* Dim categori *',
  'alb_empty' => 'Albwm yn wag',
  'last_uploaded' => 'Llwythodd olaf',
  'public_alb' => 'Pawb (albwm cyhoeddus)',
  'me_only' => 'Fi\'n unig',
  'owner_only' => 'Perchennog albwm (%s) yn unig',
  'groupp_only' => 'Aelodau o\'r grŵp \'%s\'',
  'err_no_alb_to_modify' => '\'Stim albwm gallwch ei newid yn y databas.',
  'update' => 'Diweddaru albwm',
  'reset_album' => 'Ailosod albwm', //cpg1.4
  'reset_views' => 'Ailosod rhifydd golygon i &quot;0&quot; mewn %s', //cpg1.4
  'reset_rating' => 'Ailosod graddau ar bob ffeil mewn %s', //cpg1.4
  'delete_comments' => 'Dileu pob sylw mewn %s', //cpg1.4
  'delete_files' => 'Dileu pob ffeil yn %sanwrthdroadwy%s mewn %s', //cpg1.4
  'views' => 'golygon', //cpg1.4
  'votes' => 'pleidleisiau', //cpg1.4
  'comments' => 'sylwadau', //cpg1.4
  'files' => 'ffeiliau', //cpg1.4
  'submit_reset' => 'derbyn newidiadau', //cpg1.4
  'reset_views_confirm' => 'Rwy\'n sicr', //cpg1.4
  'notice1' => '(*) yn dibynnu ar osodiadau %sgroups%s',  //cpg1.4 //(do not translate %s!)
  'alb_password' => 'Cyfrinair albwm', //cpg1.4
  'alb_password_hint' => 'Awgrym cyfrinair albwm', //cpg1.4
  'edit_files' =>'Golygu ffeiliau', //cpg1.4
  'parent_category' =>'Uwch gategori', //cpg1.4
  'thumbnail_view' =>'Golwg bawdlun', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File phpinfo.php
// ------------------------------------------------------------------------- //

if (defined('PHPINFO_PHP')) $lang_phpinfo_php = array(
  'php_info' => 'PHP info',
  'explanation' => 'Dyma\'r allbwn o swyddogaeth-PHP <a href="http://www.php.net/phpinfo">phpinfo()</a>, wedi\'i ddangos mewn Coppermine (trimio\'r allbwn ar yr ochr dde).',
  'no_link' => 'Mae gadael eraill i weld eich phpinfo yn risg, dyna pam gallwn dim ond ei weld os ydych wedi mewngofnodi fel gweinyddwr. Ni allwch adael dolen i fan yma i eraill - ni fydd mynediad iddynt.',
);

// ------------------------------------------------------------------------- //
// File picmgr.php //cpg1.4
// ------------------------------------------------------------------------- //
if (defined('PICMGR_PHP')) $lang_picmgr_php = array(
  'pic_mgr' => 'Rheolwr Lluniau', //cpg1.4
  'select_album' => 'Dewis Albwm', //cpg1.4
  'delete' => 'Dileu', //cpg1.4
  'confirm_delete1' => 'Ydych am ddileu\'r llun hwn ?', //cpg1.4
  'confirm_delete2' => '\nBydd yn llun yn cael ei ddileu\'n barhaol.', //cpg1.4
  'apply_modifs' => 'Gosod newidiadau', //cpg1.4
  'confirm_modifs' => 'Cadarnhau newidiadau', //cpg1.4
  'pic_need_name' => 'Angen enw ar y llun !', //cpg1.4
  'no_change' => 'Ni wnaethoch unrhyw newid !', //cpg1.4
  'no_album' => '* Dim albwm *', //cpg1.4
  'explanation_header' => 'Bydd y trefniant cwstwm rydych yn gallu gosod ar y dudalen hon dim ond yn cael ei weithredu os', //cpg1.4
  'explanation1' => 'bydd y gweinyddwr yn gosod in "Trefn ddiofyn ar gyfer ffeiliau" yn y cyfluniad i "Lleoliad disgynnol" neu "Lleoliad esgynnol" (gosodiad eang am bob defnyddiwr sydd heb ddewis opsiwn trefnu arall)', //cpg1.4
  'explanation2' => 'yw\'r defnyddiwr wedi dewis "Lleoliad disgynnol" neu "Lleoliad esgynnol" ar y dudalen fawdluniau (y gosodiad defnyddiwr)', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File pluginmgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('PLUGINMGR_PHP')){

$lang_pluginmgr_php = array(
  'confirm_uninstall' => 'Ydych am dynnu\'r <em>plugin</em>', //cpg1.4
  'confirm_delete' => 'Ydych am ddileu\'r <em>plugin</em>', //cpg1.4
  'pmgr' => 'Rheolwr  <em>Plugin</em>', //cpg1.4
  'name' => 'Enw', //cpg1.4
  'author' => 'Awdur', //cpg1.4
  'desc' => 'Disgrifiad', //cpg1.4
  'vers' => 'f', //cpg1.4
  'i_plugins' => ' <em>Plugins</em> wedi\'u Sefydlu', //cpg1.4
  'n_plugins' => ' <em>Plugins</em> heb eu Sefydlu', //cpg1.4
  'none_installed' => 'Dim wedi\'u Sefydlu', //cpg1.4
  'operation' => 'Proses', //cpg1.4
  'not_plugin_package' => 'Nid yw\'r ffeil sydd wedi\' llwytho yn becyn <em>plugin</em>.', //cpg1.4
  'copy_error' => 'Roedd gwall wrth gopïo\'r pecyn i\'r ffolder <em>plugins</em>.', //cpg1.4
  'upload' => 'Llwytho', //cpg1.4
  'configure_plugin' => 'Ffurfweddu <em>plugin</em>', //cpg1.4
  'cleanup_plugin' => 'Glanhau <em>plugin</em>', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
  'already_rated' => 'Sori ond rydych wedi graddio\'r ffeil hon eisoes',
  'rate_ok' => 'Cafodd eich pleidlais ei derbyn',
  'forbidden' => 'Ni allwch raddio ffeiliau eich hunain.',
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
Tra bydd gweinyddwyr {SITE_NAME} yn ceisio tynnu neu newid deunydd annymunol, nid oes modd golygu pob post. Felly bydd yn rhaid i chi dderbyn bod pob post yn adlewyrchu safbwyntiau awduron ac nid y gweinyddwyr (heb law pyst gan y rhain) ac felly nid ydynt yn atebol.<br />
<br />
Rydych yn cytuno i beidio postio deunydd ymosodol, treisiol, bygythiol, rhywiol, athrodus, ffiaidd neu unrhyw ddeunydd arall sydd yn torri deddfau cyffredin. Rydych yn cytuno bod gan y gwefeistr, gweinyddwyr a chymedrolwyr {SITE_NAME} yr hawl i dynnu neu newid unrhyw gynnwys ar unrhyw adeg. Fel defnyddiwr, rydych yn cytuno i wybodaeth rydych wedi rhoi i mewn i gael ei mewnforio i ddatabas. Tra na fydd y wybodaeth yn cael ei rhoi allan i unrhyw drydydd parti, ni all y gwefeistr nac ychwaith y gweinyddwr fod yn gyfrifol am hacwyr yn dod o hyd at y wybodaeth hon.<br />
<br />
Caiff cwcis eu defnyddio gan y wefan i storio gwybodaeth ar eich cyfrifiadur. Er mwyn gwella defnydd y gwefan yn unig yw pwrpas y rhain. Caiff y cyfrif e-bost ei defnyddio i gadarnhau eich manylion cofrestru a chyfrinair yn unig.<br />
<br />
Gan bwyso 'Rwyn cytuno' isod rydych yn cytuno gyda hyn.
EOT;

$lang_register_php = array(
  'page_title' => 'Cofrestru defnyddwyr',
  'term_cond' => 'Telerau ac amodau',
  'i_agree' => 'Rwy\'n cytuno',
  'submit' => 'Anfon fy nghofrestriad',
  'err_user_exists' => 'Mae\'r enw hwn yn bodoli, dewiswch un arall',
  'err_password_mismatch' => 'Nid yw\'r cyfrineiriau yn debyg, cyflwynwch nhw eto',
  'err_uname_short' => 'Mae\'n rhaid bod o leiaf 2 cymeriad yn yr enw',
  'err_password_short' => 'Mae\'n rhaid bod o leiaf 2 cymeriad yn y cyfrinair',
  'err_uname_pass_diff' => 'Mae\'n rhaid bod yr enw a\'r cyfrinair yn wahanol',
  'err_invalid_email' => 'Nid yw\'r cyfeiriad e-bost yn ddilys',
  'err_duplicate_email' => 'Mae defnyddiwr eisoes wedi cofrestru gyda\'r cyfeiriad e-bost hwn',
  'enter_info' => 'Mewnbwn gwybodaeth cofrestru',
  'required_info' => 'Gwybodaeth hanfodol',
  'optional_info' => 'Gwybodaeth ddewisol',
  'username' => 'Enw',
  'password' => 'Cyfrinair',
  'password_again' => 'Ail-adrodd cyfrinair',
  'email' => 'e-bost',
  'location' => 'Lleoliad',
  'interests' => 'Diddordebau',
  'website' => 'Hafan',
  'occupation' => 'Swydd',
  'error' => 'GWALL',
  'confirm_email_subject' => '%s - Cadarnhad cofrestru',
  'information' => 'Gwybodaeth',
  'failed_sending_email' => 'Nid oes modd anfon yr e-bost cadarnhad !',
  'thank_you' => 'Diolch am gofrestru.<br /><br />Cafodd e-bost gyda gwybodaeth ar sut i actifadu eich cyfrif ei anfon.',
  'acct_created' => 'Mae eich cyfrif wedi\'i greu a gallwch fewngofnodi gyda\'ch enw a chyfrinair',
  'acct_active' => 'Mae eich cyfrif yn actif a gallwch fewngofnodi gyda\'ch enw a chyfrinair',
  'acct_already_act' => 'Mae eich cyfrif eisoes yn actif!', //cpg1.4
  'acct_act_failed' => 'Nid oes modd actifadu\'r cyfrif hwn !',
  'err_unk_user' => 'Nid yw\'r defnyddiwr hwn yn bodoli !',
  'x_s_profile' => 'proffil %s',
  'group' => 'Grŵp',
  'reg_date' => 'Ymunodd',
  'disk_usage' => 'Defnydd disg',
  'change_pass' => 'Newid cyfrinair',
  'current_pass' => 'Cyfrinair cyfredol',
  'new_pass' => 'Cyfrinair newydd',
  'new_pass_again' => 'Cyfrinair newydd eto',
  'err_curr_pass' => 'Cyfrinair cyfredol yn anghywir',
  'apply_modif' => 'Gosod newidiadau',
  'change_pass' => 'Newid fy nghyfrinair',
  'update_success' => 'Mae eich proffil wedi\'i ddiweddaru',
  'pass_chg_success' => 'Mae eich cyfrinair wedi newid',
  'pass_chg_error' => 'Nid yw eich cyfrinair wedi newid',
  'notify_admin_email_subject' => '%s - Hysbysiad cofrestru',
  'last_uploads' => 'Last uploaded file.<br />Clic i weld pob llwythiad gan', //cpg1.4
  'last_comments' => 'Last comment.<br />Clic i weld pob sylw gan', //cpg1.4
  'notify_admin_email_body' => 'Mae defnyddiwr newydd, "%s" wedi cofrestru yn eich oriel',
  'pic_count' => 'Ffeiliau wedi\'u llwytho', //cpg1.4
  'notify_admin_request_email_subject' => '%s - Cais cofrestru', //cpg1.4
  'thank_you_admin_activation' => 'Diolch.<br /><br />Cafodd eich cais i actifadu\'r cyfrif ei anfon i\'r gweinyddwr. Gwnewch dderbyn e-bost os yn llwyddiannus.', //cpg1.4
  'acct_active_admin_activation' => 'Mae\'r cyfrif yn actif a chafodd e-bost ei anfon i\'r defnyddiwr.', //cpg1.4
  'notify_user_email_subject' => '%s - Hysbysiad actifadu', //cpg1.4
);

$lang_register_confirm_email = <<<EOT
Diolch am gofrestru ar {SITE_NAME}

Er mwyn actifadu eich cyfrif gydag enw "{USER_NAME}", cliciwch y ddolen isod.

<a href="{ACT_LINK}">{ACT_LINK}</a>

Cyfarchion,

Rheolwyr {SITE_NAME}

EOT;

$lang_register_approve_email = <<<EOT
Mae defnyddiwr newydd gyda'r enw "{USER_NAME}" wedi cofrestru'n eich oriel.

Er mwyn actifadu'r cyfrif, bydd angen i chi glicio ar y ddolen isod neu ei gopïo a gludo'n eich porwr.

<a href="{ACT_LINK}">{ACT_LINK}</a>

EOT;

$lang_register_activated_email = <<<EOT
Cafodd eich cyfrif ei dderbyn ac actifadu.

Gallwch fewngofnodi ar <a href="{SITE_LINK}">{SITE_LINK}</a> gan ddefnyddio enw "{USER_NAME}"


Cyfarchion,

Rheolwyr {SITE_NAME}

EOT;
}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
  'title' => 'Adolygu sylwadau',
  'no_comment' => 'Nid oes sylwadau i\'w hadolygu',
  'n_comm_del' => 'Dilëwyd %s sylw',
  'n_comm_disp' => 'Nifer y sylwadau i\'w dangos',
  'see_prev' => 'Gweler cynt',
  'see_next' => 'Gweler nesaf',
  'del_comm' => 'Dileu sylwadau wedi\'u dewis',
  'user_name' => 'Enw', //cpg1.4
  'date' => 'Dyddiad', //cpg1.4
  'comment' => 'Sylw', //cpg1.4
  'file' => 'Ffeil', //cpg1.4
  'name_a' => 'Enw esgynnol', //cpg1.4
  'name_d' => 'Enw disgynnol', //cpg1.4
  'date_a' => 'Dyddiad esgynnol', //cpg1.4
  'date_d' => 'Dyddiad disgynnol', //cpg1.4
  'comment_a' => 'Sylwadau esgynnol', //cpg1.4
  'comment_d' => 'Sylwadau disgynnol', //cpg1.4
  'file_a' => 'Ffeil esgynnol', //cpg1.4
  'file_d' => 'Ffeil disgynnol', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File search.php                                                           //
// ------------------------------------------------------------------------- //


if (defined('SEARCH_PHP')){

$lang_search_php = array(
  'title' => 'Chwilio\'r casgliad ffeiliau', //cpg1.4
  'submit_search' => 'chwilio', //cpg1.4
  'keyword_list_title' => 'Rhestr geiriau allweddol', //cpg1.4
  'keyword_msg' => 'Nid yw\'r rhestr uchod yn drwyadl. Nid yw\'n cynnwys geiriau o deitlau ffotograffau na disgrifiadau. Gwnewch chwiliad testun-llawn <em>full-text</em>.',  //cpg1.4
  'edit_keywords' => 'Newid geiriau allweddol', //cpg1.4
  'search in' => 'Chwilio mewn:', //cpg1.4
  'ip_address' => 'Cyfeiriad IP', //cpg1.4
  'fields' => 'Chwilio mewn', //cpg1.4
  'age' => 'Oed', //cpg1.4
  'newer_than' => 'Diweddarach na', //cpg1.4
  'older_than' => 'Henach na', //cpg1.4
  'days' => 'diwrnod', //cpg1.4
  'all_words' => 'Cydweddu pob gair (AND)', //cpg1.4
  'any_words' => 'Cydweddu unrhyw eiriau (OR)', //cpg1.4
);

$lang_adv_opts = array(
  'title' => 'Teitl', //cpg1.4
  'caption' => 'Pennawd', //cpg1.4
  'keywords' => 'Geiriau allweddol', //cpg1.4
  'owner_name' => 'Enw\'r perchennog', //cpg1.4
  'filename' => 'Enw\'r ffeil', //cpg1.4
);

}

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
  'page_title' => 'Chwilio ffeiliau newydd',
  'select_dir' => 'Dewiswch ffolder',
  'select_dir_msg' => 'Mae\'r swyddogaeth hon yn eich galluogi i ychwanegu swp o ffeiliau rydych wedi gosod ar eich gweinyddwr gan FTP.<br /><br />Dewiswch y ffolder lle rydych wedi llwytho eich ffeiliau.', //cpg1.4
  'no_pic_to_add' => 'Nid oes ffeil i\'w hychwanegu',
  'need_one_album' => 'Mae angen o leiaf un albwm er mwyn defnyddio\'r swyddogaeth hon',
  'warning' => 'Rhybudd',
  'change_perm' => 'nid yw\'r sgript yn gallu ysgrifennu i\'r ffolder hwn, mae\'n rhaid ei fodd i 755 neu 777 cyn ychwanegu ffeiliau !',
  'target_album' => '<b>Rhowch ffeiliau &quot;</b>%s<b>&quot; i mewn i </b>%s',
  'folder' => 'Ffolder',
  'image' => 'ffeil',
  'album' => 'Albwm',
  'result' => 'Canlyniad',
  'dir_ro' => 'Methu ysgrifennu. ',
  'dir_cant_read' => 'Methu darllen. ',
  'insert' => 'Ychwanegu ffeiliau i\'r oriel',
  'list_new_pic' => 'Rhestr ffeiliau newydd',
  'insert_selected' => 'Mewnosod y ffeiliau',
  'no_pic_found' => 'Dim ffeiliau newydd wedi\'u darganfod',
  'be_patient' => 'Byddwch yn amyneddgar, mae angen amser i ychwanegu\'r ffeiliau',
  'no_album' => 'dim albwm wedi\'i ddewis',
  'result_icon' => 'cliciwch ar fanylion neu ail-lwythwch',  //cpg1.4
  'notes' =>  '<ul>'.
                          '<li><b>OK</b> : meddwl bod ffeil wedi\'i hychwanegu\'n llwyddiannus'.
                          '<li><b>DP</b> : meddwl bod ffeil yn ddyblyg ac eisoes yn y databas'.
                          '<li><b>PB</b> : meddwl nac oes modd ychwanegu\'r ffeil, gwiriwch eich cyflyniad a hawliau\'r ffolderi lle mae\'r ffeiliau\'n cael eu cadw'.
                          '<li><b>NA</b> : meddwl nid ydych wedi dewis ffolder ar gyfer y ffeiliau, cliciwch \'<a href="javascript:history.back(1)">nôl</a>\' a dewis albwm. Os nac oes albwm i gael <a href="albmgr.php">crëwch un yn gyntaf</a></li>'.
                          '<li>Os nac ydy \'arwyddion\' OK, DP, PB yn ymddangos, cliciwch ar y ffeil sydd wedi \'torri\' i weld unrhyw sylw gwall gan PHP'.
                          '<li>Os ydyw eich porwr yn atal cyn amser, cliciwch y botwm ail-lwytho'.
                          '</ul>',
  'select_album' => 'dewis albwm',
  'check_all' => 'Siecio Pob',
  'uncheck_all' => 'Dad-siecio Pob',
  'no_folders' => 'Does dim ffolderi tu fewn y ffolder "albymau" eto. Gwnewch yn sicr rydych yn creu o leiaf un folder cwstwm tu fewn ffolder "albymau" a llwythwch eich ffeiliau i fanna gan FTP. Ni ddylech lwytho i ffolder "userpics" na\'r ffolder "golygu", cânt eu defnyddio ar gyfer llwythiadau http uploads a phwrpasau mewnol.', //cpg1.4
   'albums_no_category' => 'Albymau heb gategori', //cpg1.4 // album pulldown mod, added by frogfoot
  'personal_albums' => '* Albymau personol', //cpg1.4 // album pulldown mod, added by frogfoot
  'browse_batch_add' => 'Rhyngwyneb porol (syniad da)', //cpg1.4
  'edit_pics' => 'Golygu ffeiliau', //cpg1.4
  'edit_properties' => 'Priodweddau albwm', //cpg1.4
  'view_thumbs' => 'Golwg bawdlun', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File stat_details.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('STAT_DETAILS_PHP')) $lang_stat_details_php = array(
  'show_hide' => 'dangos/cuddio\'r golofn hon', //cpg1.4
  'vote' => 'Manylion Pleidleisiau', //cpg1.4
  'hits' => 'Manylion Trawiadau', //cpg1.4
  'stats' => 'Ystadegau Pleidleisiau', //cpg1.4
  'sdate' => 'Dyddiad', //cpg1.4
  'rating' => 'Gradd', //cpg1.4
  'search_phrase' => 'Chwilio\'r cymal', //cpg1.4
  'referer' => 'Cyfeirydd', //cpg1.4
  'browser' => 'Porwr', //cpg1.4
  'os' => 'Sustem Weithredu', //cpg1.4
  'ip' => 'IP', //cpg1.4
  'sort_by_xxx' => 'Trefnu gan %s', //cpg1.4
  'ascending' => 'esgynnol', //cpg1.4
  'descending' => 'disgynnol', //cpg1.4
  'internal' => 'mewn', //cpg1.4
  'close' => 'cau', //cpg1.4
  'hide_internal_referers' => 'cuddio cyfeiryddion mewnol', //cpg1.4
  'date_display' => 'Golwg dyddiad', //cpg1.4
  'submit' => 'anfon / adfywio', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File thumbnails.php
// ------------------------------------------------------------------------- //

// Void

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) $lang_upload_php = array(
  'title' => 'Llwytho ffeil',
  'custom_title' => 'Ffurflen Cais Cwstwm',
  'cust_instr_1' => 'Gallwch ddewis nifer cwstwm o flychau llwytho. You may select a customized number of upload boxes. Er, ni allwch ddewis mwy na\'r terfyn isod.',
  'cust_instr_2' => 'Cais Nifer y Blychau',
  'cust_instr_3' => 'Blychau llwytho ffeiliau: %s',
  'cust_instr_4' => 'Blychau llwytho URI/URL: %s',
  'cust_instr_5' => 'Blychau llwytho URI/URL:',
  'cust_instr_6' => 'Blychau llwytho ffeiliau:',
  'cust_instr_7' => 'Rhowch nifer y blychau llwytho o bob math sydd angen arnoch ar hyn o bryd.  Yna cliciwch \'Parhau\'. ',
  'reg_instr_1' => 'Gweithred annilys am greu ffurflen.',
  'reg_instr_2' => 'Gallwch lwytho eich ffeiliau gan ddefnyddio\'r blychau llwytho isod. Ni ddylai maint y ffeiliau rydych yn llwytho o\'ch cleient i\'r gweinyddwr fod yn fwy na %s KB yr un. Bydd ffeiliau ZIP wedi\'u llwytho mewn adrannau \'Llwytho Ffeiliau\' a \'Llwytho URI/URL\', dal yn gywasgedig.',
  'reg_instr_3' => 'Os ydych am dad-gywasgu ffeil zip neu arcif, mae\'n rhaid defnyddio\'r blwch llwytho yn yr ardal \'Llwytho ZIP Dad-gywasgedig\'.',
  'reg_instr_4' => 'Wrth ddefnyddio\'r ardal llwytho URI/URL, rhowch y llwybr i\'r ffeil fel hyn: http://www.mysite.com/lluniau/enghraifft.jpg',
  'reg_instr_5' => 'Pan fyddwch wedi gorffen llenwi\'r ffurflen, cliciwch \'Parhau\'.',
  'reg_instr_6' => 'Llwythiadau ZIP Dad-gywasgedig:',
  'reg_instr_7' => 'Llwythiadau Ffeil:',
  'reg_instr_8' => 'Llwythiadau URI/URL:',
  'error_report' => 'Adroddiad Gwallau',
  'error_instr' => 'Gwnaeth y llwythiadau canlynol gwrdd â gwallau:',
  'file_name_url' => 'Enw Ffeil/URL',
  'error_message' => 'Sylw Gwall',
  'no_post' => 'Ffeil heb ei llwytho gan POST.',
  'forb_ext' => 'Estyniad ffeil gwaharddedig.',
  'exc_php_ini' => 'Maint y ffeil yn fwy na sydd yn cael ei ganiatáu mewn php.ini.',
  'exc_file_size' => 'Maint ffeil (sy\'n ormod) yn cael ei ganiatáu gan CPG.',
  'partial_upload' => 'Llwythiad rhannol yn unig.',
  'no_upload' => 'Dim llwythiad wedi digwydd.',
  'unknown_code' => 'Cod gwall llwytho anhysbys gan PHP.',
  'no_temp_name' => 'Dim llwythiad - Dim enw dros dro.',
  'no_file_size' => 'Cynnwys dim data/Wedi\'i llygru',
  'impossible' => 'Amhosib i\'w symud.',
  'not_image' => 'Ddim yn ddelwedd/wedi\'i llygru',
  'not_GD' => 'Ddim yn estyniad GD.',
  'pixel_allowance' => 'Mae lled ac/neu uchder y llun yn fwy na\'r hyn sy\'n cael ei ganiatáu gan gyfuniad yr oriel.', //cpg1.4
  'incorrect_prefix' => 'Rhagddodiad URI/URL anghywir',
  'could_not_open_URI' => 'Methu ag agor yr URI.',
  'unsafe_URI' => 'Methu gwireddu diogelwch.',
  'meta_data_failure' => 'Methiant data meta',
  'http_401' => '401 Heb awdurdod',
  'http_402' => '402 Angen taliad',
  'http_403' => '403 Gwaharddedig',
  'http_404' => '404 Heb ei darganfod',
  'http_500' => '500 Gwall Gweinyddwr Mewnol',
  'http_503' => '503 Gwasanaeth Ddim ar Gael',
  'MIME_extraction_failure' => 'Methu pennu MIME.',
  'MIME_type_unknown' => 'Teip MIME anhysbys',
  'cant_create_write' => 'Methu â chreu ffeil ysgrifenedig.',
  'not_writable' => 'Methu ag ysgrifennu i\'r ffeil ysgrifenedig.',
  'cant_read_URI' => 'Methu darllen URI/URL',
  'cant_open_write_file' => 'Methu ag agor ffeil ysgrifenedig URI.',
  'cant_write_write_file' => 'Methu ag ysgrifennu i\'r ffeil ysgrifenedig URI.',
  'cant_unzip' => 'Methu dad-gywasgu ffeil ZIP.',
  'unknown' => 'Gwall anhysbys',
  'succ' => 'Llwythiadau Llwyddiannus',
  'success' => '%s llwythiad yn llwyddiannus.',
  'add' => 'Cliciwch \'Parhau\' i ychwanegu\'r ffeiliau i\'r albymau.',
  'failure' => 'Methiant Llwytho',
  'f_info' => 'Gwybodaeth Ffeil',
  'no_place' => 'Nid oedd modd lleoli\'r ffeil gynt.',
  'yes_place' => 'Cafodd y ffeil gynt ei lleoli\'n llwyddiannus.',
  'max_fsize' => 'Maint mwyaf y ffeil sy\'n cael ei ganiatáu yw %s KB',
  'album' => 'Albwm',
  'picture' => 'Ffeil',
  'pic_title' => 'Teitl ffeil',
  'description' => 'Disgrifiad ffeil',
  'keywords' => 'Geiriau allweddol (gyda bwlch rhyngddynt)<br /><a href="#" onClick="return MM_openBrWindow(\'keyword_select.php\',\'selectKey\',\'width=250, height=400, scrollbars=yes,toolbar=no,status=yes,resizable=yes\')">Mewnosod o restr</a>', //cpg1.4
  'keywords_sel' =>'Dewis Gair Allweddol', //cpg1.4
  'err_no_alb_uploadables' => 'Does dim albwm sy\'n eich caniatáu i lwytho ffeiliau iddo',
  'place_instr_1' => 'Rhowch ffeiliau i mewn i albymau ar hyn o bryd.  Gallwch hefyd osod gwybodaeth berthnasol ar gyfer pob ffeil nawr.',
  'place_instr_2' => 'Angen mwy o ffeiliau i gael eu lleoli. Cliciwch \'Parhau\'.',
  'process_complete' => 'Rydych wedi lleoli pob ffeil yn llwyddiannus.',
   'albums_no_category' => 'Albymau heb gategorïau', //cpg1.4. //album pulldown mod, added by frogfoot
  'personal_albums' => '* Albymau personol', //cpg1.4 //album pulldown mod, added by frogfoot
  'select_album' => 'Dewis albwm', //cpg1.4 //album pulldown mod, added by frogfoot
  'close' => 'Cau', //cpg1.4
  'no_keywords' => 'Dim geiriau allweddol ar gael!', //cpg1.4
  'regenerate_dictionary' => 'Atffurfio Geiriadur', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
  'memberlist' => 'Rhestr aelodau', //cpg1.4
  'user_manager' => 'Rheolwr defnyddwyr', //cpg1.4
  'title' => 'Rheoli defnyddwyr',
  'name_a' => 'Enw esgynnol',
  'name_d' => 'Enw disgynnol',
  'group_a' => 'Grŵp esgynnol',
  'group_d' => 'Grŵp disgynnol',
  'reg_a' => 'Dyddiad cofrestru esgynnol',
  'reg_d' => 'Dyddiad cofrestru disgynnol',
  'pic_a' => 'Nifer y ffeiliau esgynnol',
  'pic_d' => 'Nifer y ffeiliau disgynnol',
  'disku_a' => 'Defnydd disg esgynnol',
  'disku_d' => 'Defnydd disg disgynnol',
  'lv_a' => 'Golwg ddiwethaf esgynnol',
  'lv_d' => 'Golwg ddiwethaf disgynnol',
  'sort_by' => 'Trefnu defnyddwyr gan',
  'err_no_users' => 'Mae eich tabl defnyddwyr yn wag !',
  'err_edit_self' => 'Ni allwch olygu proffil eich hun, defnyddiwch ddolen \'Fy mhroffil\'',
  'edit' => 'Golygu', //cpg1.4
  'with_selected' => 'Gyda\'r dewis:', //cpg1.4
  'delete' => 'Dileu', //cpg1.4
  'delete_files_no' => 'cadw ffeiliau cyhoeddus (ond eu gwneud yn anhysbys)', //cpg1.4
  'delete_files_yes' => 'dileu ffeiliau cyhoeddus hefyd', //cpg1.4
  'delete_comments_no' => 'cadw sylwadau (ond eu gwneud yn anhysbys)', //cpg1.4
  'delete_comments_yes' => 'dileu sylwadau hefyd', //cpg1.4
  'activate' => 'Actifadu', //cpg1.4
  'deactivate' => 'Dad-actifadu', //cpg1.4
  'reset_password' => 'Ail-osod Cyfrinair', //cpg1.4
  'change_primary_membergroup' => 'Newid grŵp aelodau cynradd', //cpg1.4
  'add_secondary_membergroup' => 'Ychwanegu grŵp aelodau eilaidd', //cpg1.4
  'name' => 'Enw defnyddiwr',
  'group' => 'Grŵp',
  'inactive' => 'Anactif',
  'operations' => 'Prosesau',
  'pictures' => 'Ffeiliau',
  'disk_space_used' => 'Maint disg wedi\'i ddefnyddio', //cpg1.4
  'disk_space_quota' => 'Cwota maint disg', //cpg1.4
  'registered_on' => 'Cofrestru', //cpg1.4
  'last_visit' => 'Ymweliad diwethaf',
  'u_user_on_p_pages' => '%d defnyddiwr ar %d tudalen',
  'confirm_del' => 'A ydych am DDILEU\\\'R defnyddiwr hwn ? \\nBydd ei holl ffeiliau ac albymau hefyd yn cael eu dileu.', //js-alert
  'mail' => 'POST',
  'err_unknown_user' => 'Nid yw\'r defnyddiwr hwn yn bodoli !',
  'modify_user' => 'Addasu\'r defnyddiwr',
  'notes' => 'Nodiadau',
  'note_list' => '<li>Os nac ydych am newid eich cyfrinair, gadewch y maes "cyfrinair" yn wag',
  'password' => 'Cyfrinair',
  'user_active' => 'Defnyddiwr yn actif',
  'user_group' => 'Grŵp defnyddwyr',
  'user_email' => 'e-bost defnyddiwr',
  'user_web_site' => 'Gwefan defnyddiwr',
  'create_new_user' => 'Creu defnyddiwr newydd',
  'user_location' => 'Lleoliad defnyddiwr',
  'user_interests' => 'Diddordebau defnyddiwr',
  'user_occupation' => 'Swydd defnyddiwr',
  'user_profile1' => '$user_profile1', //cpg1.4
  'user_profile2' => '$user_profile2', //cpg1.4
  'user_profile3' => '$user_profile3', //cpg1.4
  'user_profile4' => '$user_profile4', //cpg1.4
  'user_profile5' => '$user_profile5', //cpg1.4
  'user_profile6' => '$user_profile6', //cpg1.4
  'latest_upload' => 'Llwythiadau diweddar',
  'never' => 'byth',
  'search' => 'Chwilio am ddefnyddiwr', //cpg1.4
  'submit' => 'Anfon', //cpg1.4
  'search_submit' => 'Ewch!', //cpg1.4
  'search_result' => 'Canlyniadau chwilio am: ', //cpg1.4
  'alert_no_selection' => 'Mae\\\'n rhaid dewis o leiaf un defnyddiwr yn gyntaf!', //cpg1.4 //js-alert
  'password' => 'cyfrinair', //cpg1.4
  'select_group' => 'Dewis grŵp', //cpg1.4
  'groups_alb_access' => 'Hawliau albwm gan grŵp', //cpg1.4
  'album' => 'Albwm', //cpg1.4
  'category' => 'Categori', //cpg1.4
  'modify' => 'Addasu?', //cpg1.4
  'group_no_access' => 'Nid oes mynediad arbennig gan y grŵp hwn', //cpg1.4
  'notice' => 'Hysbysiad', //cpg1.4
  'group_can_access' => 'Albwm/Albymau sydd ar gael i "%s" yn unig', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //

if (defined('UTIL_PHP')) {
$lang_util_desc_php = array(
'Diweddaru teitlau o enw\'r ffeil', //cpg1.4
'Dileu teitlau', //cpg1.4
'Ailadeiladu bawdluniau ac ail-meintio lluniau', //cpg1.4
'Dileu lluniau maint gwreiddiol, gan ei amnewid gyda\'r fersiwn sydd wedi\'i hail-meintio', //cpg1.4
'Dileu lluniau maint gwreiddiol neu faint rhyngol i ryddhau \'gwe-le\'', //cpg1.4
'Dileu sylwadau heb dardd', //cpg1.4
'Ail-ddarllen maint ffeiliau a dimensiynau (os ydych wedi meintio lluniau gan law)', //cpg1.4
'Ail-osod rhifydd golygon', //cpg1.4
'Dangos phpinfo', //cpg1.4
'Diweddaru\'r databas', //cpg1.4
'Dangos ffeiliau log', //cpg1.4
);
$lang_util_php = array(
  'title' => 'Gwasanaethau gweinyddu (Ail-meintio lluniau)',
  'what_it_does' => 'Beth mae\'n gwneud',
  'file' => 'Ffeil',
  'problem' => 'Problem', //cpg1.4
  'status' => 'Statws', //cpg1.4
  'title_set_to' => 'teitl wedi\'i osod i',
  'submit_form' => 'anfon',
  'updated_succesfully' => 'wedi diweddaru yn llwyddiannus',
  'error_create' => 'GWALL wrth greu',
  'continue' => 'Prosesu mwy o luniau',
  'main_success' => 'Cafodd ffeil %s ei defnyddio\'n llwyddiannus fel y brif ffeil',
  'error_rename' => 'Gwall wrth ail-enwi %s i %s',
  'error_not_found' => 'Ffeil %s heb ei darganfod',
  'back' => 'nôl i\'r prif',
  'thumbs_wait' => 'Diweddaru bawdluniau a/neu ddelweddau wedi\'u hail-meintio, arhoswch...',
  'thumbs_continue_wait' => 'Parhau i ddiweddaru bawdluniau a/neu ddelweddau wedi\'u hail-meintio...',
  'titles_wait' => 'Diweddaru teitlau, arhoswch...',
  'delete_wait' => 'Dileu teitlau, arhoswch...',
  'replace_wait' => 'Dileu lluniau gwreiddiol a\'u hamnewid gyda rhai sydd wedi\'u hail-meintio, arhoswch..',
  'instruction' => 'Canllawiau cyflym',
  'instruction_action' => 'Dewis gweithred',
  'instruction_parameter' => 'Gosod paramedrau',
  'instruction_album' => 'Dewis albwm',
  'instruction_press' => 'Gwasgwch %s',
  'update' => 'Diweddaru bawdluniau a/neu luniau wedi\'u hail-meintio',
  'update_what' => 'Beth ddylai cael ei ddiweddaru',
  'update_thumb' => 'Bawdluniau yn unig',
  'update_pic' => 'Lluniau wedi\'u hail-meintio yn unig',
  'update_both' => 'Bawdluniau a lluniau wedi\'u hail-meintio ',
  'update_number' => 'Nifer y lluniau wedi\'u prosesu\'r clic',
  'update_option' => '(Gosodwch yr opsiwn yn is os oes problemau amseru)',
  'filename_title' => 'Enw ffeil &rArr; Teitl ffeil',
  'filename_how' => 'Sut i addasu\'r ffeil',
  'filename_remove' => 'Tynnu diwedd .jpg ac amnewid _ (islinell) gyda bylchau',
  'filename_euro' => 'Newid 2003_11_23_13_20_20.jpg i 23/11/2003 13:20',
  'filename_us' => 'Newid 2003_11_23_13_20_20.jpg i 11/23/2003 13:20',
  'filename_time' => 'Newid 2003_11_23_13_20_20.jpg i 13:20',
  'delete' => 'Dileu teitlau ffeiliau neu luniau maint-gwreiddiol',
  'delete_title' => 'Dileu teitlau ffeiliau',
  'delete_title_explanation' => 'Bydd hwn yn dileu pob teitl ar ffeiliau rydych yn eu henwi.', //cpg1.4
  'delete_original' => 'Dileu lluniau maint-gwreiddiol',
  'delete_original_explanation' => 'Bydd hwn yn dileu\'r lluniau maint-llawn.', //cpg1.4
  'delete_intermediate' => 'Dileu lluniau rhyngol', //cpg1.4
  'delete_intermediate_explanation' => 'Bydd hwn yn dileu\'r lluniau rhyngol (normal).<br />Defnyddiwch hwn i ryddhau lle ar y ddisg os ydych wedi anactifadu \'Creu lluniau rhyngol\' mewn cyfluniad ar ôl ychwanegu lluniau.', //cpg1.4
  'delete_replace' => 'Dileu\'r lluniau gwreiddiol a\'u hamnewid gyda fersiynnau wedi\'u meintio',
  'titles_deleted' => 'Pob teitl wedi\'u dileu mewn albymau sydd wedi\'u henwi', //cpg1.4
  'deleting_intermediates' => 'Dileu lluniau rhyngol, arhoswch...', //cpg1.4
  'searching_orphans' => 'Chwilio am sylwadau di-ben, arhoswch...', //cpg1.4
  'select_album' => 'Dewis albwm',
  'delete_orphans' => 'Dileu sylwadau o ffeiliau ar goll', //cpg1.4
  'delete_orphans_explanation' => 'Bydd hwn yn eich galluogi i ddarganfod a dileu sylwadau ar gyfer ffeiliau sydd ddim mwyach yn yr oriel.<br />Gwirio pob albwm.', //cpg1.4
  'refresh_db' => 'Ail-lwytho dimensiynau ffeil a gwybodaeth faint', //cpg1.4
  'refresh_db_explanation' => 'Bydd hwn yn ail-ddarllen maint ffeiliau a\'u dimensiynau. Defnyddiwch hwn os yw\'r cwota\'n anghywir neu os ydych wedi newid y ffeiliau gan law.', //cpg1.4
  'reset_views' => 'Ail-osod rhifwyr golygon', //cpg1.4
  'reset_views_explanation' => 'Gosod pob rhifydd golygon ffeiliau i sero yn yr albwm wedi\'i enwi.', //cpg1.4
  'orphan_comment' => 'sylwadau di-ben wedi\'u darganfod',
  'delete' => 'Dileu',
  'delete_all' => 'Dileu pob',
  'delete_all_orphans' => 'Dileu pob sylw di-ben?', //cpg1.4
  'comment' => 'Sylw: ',
  'nonexist' => 'wedi\'i gysylltu i \'ffeil heb fod\' # ',
  'phpinfo' => 'Dangos phpinfo',
  'phpinfo_explanation' => 'Cynnwys gwybodaeth dechnegol am eich gweinyddwr.<br /> - Mae\'n bosib bydd angen gwybodaeth o hwn wrth ofyn am gynhaliaeth.', //cpg1.4
  'update_db' => 'Diweddaru databas',
  'update_db_explanation' => 'Os ydych wedi amnewid ffeiliau Coppermine, wedi ychwanegu addasiad neu wedi diweddaru o fersiwn cynt Coppermine, rhedwch ddiweddariad y databas unwaith. Bydd hwn yn creu\'r holl dablau a/neu ffeiliau cyfluniad yn eich databas Coppermine.',
  'view_log' => 'Dangos ffeiliau log', //cpg1.4
  'view_log_explanation' => 'Gall Coppermine gadw golwg ar sawl gweithred gan ddefnyddwyr. Gallwch bori\'r logiau os ydych wedi actifadu logio mewn <a href="admin.php">cyfluniad Coppermine</a>.', //cpg1.4
  'versioncheck' => 'Gwirio fersiynnau', //cpg1.4
  'versioncheck_explanation' => 'Gwirio eich fersiynnau ffeil i ddarganfod os ydych wedi amnewid yr holl ffeiliau yn dilyn uwchraddiad, neu os ydy ffeiliau ffynhonnell Coppermine wedi cael eu diweddaru yn dilyn cyhoeddiad y pecyn.', //cpg1.4
  'bridgemanager' => 'Rheolwr Pontio', //cpg1.4
  'bridgemanager_explanation' => 'Actifadu/anactifadu integreiddio (pontio) Coppermine gyda phecyn arall (e.e. eich BBS).', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File versioncheck.php                                                     // cpg 1.4.0
// ------------------------------------------------------------------------- //

if (defined('VERSIONCHECK_PHP')) $lang_versioncheck_php = array(
  'title' => 'Gwirio fersiwn',
  'what_it_does' => 'Mae\'r dudalen hon ar gyfer defnyddwyr sydd wedi diweddaru eu gosodiad Coppermine. Mae\'r sgript yn pori ffeiliau ar eich gweinyddwr ac yn ceisio darganfod os yw\'r ffeiliau lleol yn unfath â\'r rhai ar http://coppermine.sourceforge.net. Bydd hwn felly yn dangos y ffeiliau sy\'n dal angen eu diweddaru.<br />Bydd angen trwsio popeth mewn coch. Bydd angen gwirio eitemau mewn melyn. Bydd eitemau mewn gwyrdd (neu eich lliw diofyn) yn iawn.<br />Clic ar yr eiconau cymorth i ddarganfod mwy.',
  'online_repository_unable' => 'Methu â chysylltu i\'r ystorfa arlein', //cpg1.4
  'online_repository_noconnect' => 'Roedd Coppermine methu â chysylltu i\'r ystorfa arlein. Gall fod 2 rheswm:', //cpg1.4
  'online_repository_reason1' => 'Mae\'r ystorfa Coppermine arlein lawr - gwiriwch os ydych yn gallu pori\'r dudalen hon: %s - os nac oes modd, ceisiwch wedyn.', //cpg1.4
  'online_repository_reason2' => 'Mae PHP ar eich gweinyddwr wedi\'i gyflunio gyda %s wedi\'i droi bant (yn ddiofyn, caiff ei droi ymlaen). Os oes modd i chi ei newid, trowch yr opsiwn hwn ymlaen mewn <i>php.ini</i> (neu o leiaf gadael %s i redeg drosto). Os oes gwesteiwr gennych, mwy na thebyg, bydd yn rhaid i chi fyw gyda\'r ffaith bod dim modd i chi gymharu eich ffeiliau gyda\'r ystorfa arlein. Gall y dudalen hon ddangos fersiynnau ffeil sy\'n dod gyda\'r dosbarthiad yn unig - ni fydd diweddariadau yn cael eu dangos.', //cpg1.4
  'online_repository_skipped' => 'Wedi sgipio\'r cysylltiad i\'r ystorfa arlein', //cpg1.4
  'online_repository_to_local' => 'Mae\'r sgript yn defnyddio (ymddygiad diofyn) copi lleol o\'r ffeiliau-fersiwn nawr. Gall fod y data\'n wallus os ydych wedi uwchraddio Coppermine ac nid ydych wedi llwytho pob ffeil. Ni fydd newidiadau i\'r ffeiliau yn dilyn cyhoeddiad yn cael eu hystyried ychwaith.', //cpg1.4
  'local_repository_unable' => 'Methu â chysylltu i\'r ystorfa arlein ar eich gweinyddwr', //cpg1.4
  'local_repository_explanation' => 'Nid oedd Coppermine yn gallu cysylltu i ffeil ystorfa %s ar eich gweinyddwr. Mae hwn yn meddwl, mwy na thebyg, nid ydych wedi llwytho\'r ffeil ystorfa i\'ch gweinyddwr. Gwnewch hynny a rhedeg y dudalen hon eto (bwrw adfywio).<br />Os yw\'r sgript dal yn methu, gall fod eich gwesteiwr wedi anactifadu rhannau o <a href="http://www.php.net/manual/en/ref.filesystem.php"> swyddogaethau sustem ffeil</a>. Yn yr achos hwn, nid oes modd defnyddio\'r teclyn hwn o gwbl.', //cpg1.4
  'coppermine_version_header' => 'Fersiwn Coppermine wedi\'i osod', //cpg1.4
  'coppermine_version_info' => 'Yn bresennol, rydych wedi arsefydlu: %s', //cpg1.4
  'coppermine_version_explanation' => 'Os ydych yn meddwl bo hwn yn anghywir a ddylech fod yn rhedeg fersiwn Coppermine uwch, mwy na thebyg, nid ydych wedi llwytho\'r fersiwn diweddaraf o\'r ffeil  <i>include/init.inc.php</i>', //cpg1.4
  'version_comparison' => 'Cymhariaeth fersiwn', //cpg1.4
  'folder_file' => 'ffolder/ffeil', //cpg1.4
  'coppermine_version' => 'fersiwn cpg', //cpg1.4
  'file_version' => 'fersiwn ffeil', //cpg1.4
  'webcvs' => 'svn gwe', //cpg1.4
  'writable' => 'ysgrifenedig', //cpg1.4
  'not_writable' => 'ddim yn ysgrifenedig', //cpg1.4
  'help' => 'Cymorth', //cpg1.4
  'help_file_not_exist_optional1' => 'ffeil/ffolder ddim yn bodoli', //cpg1.4
  'help_file_not_exist_optional2' => 'Nid yw\'r ffeil/ffolder %s wedi\'i ddarganfod ar eich gweinyddwr. Er ei fod yn opsiynol, dylech ei lwytho (gan FTP) i\'ch gweinyddwr os oes problemau.', //cpg1.4
  'help_file_not_exist_mandatory1' => 'ffeil/ffolder ddim yn bodoli', //cpg1.4
  'help_file_not_exist_mandatory2' => 'Nid yw\'r ffeil/ffolder %s wedi\'i ddarganfod ar eich gweinyddwr, er ei fod yn opsiynol. Llwythwch y ffeil (gan FTP) i\'ch gweinyddwr.', //cpg1.4
  'help_no_local_version1' => 'Dim fersiwn lleol o\'r ffeil', //cpg1.4
  'help_no_local_version2' => 'Nid yw\'r sgript yn gallu tynnu fersiwn lleol o\'r ffeil - mae eich ffeil wedi dyddio neu rydych wedi\'i haddasu, gan dynnu gwybodaeth bennawd ar y ffordd. Dylech ddiweddaru\'r ffeil.', //cpg1.4
  'help_local_version_outdated1' => 'Fersiwn lleol wedi dyddio', //cpg1.4
  'help_local_version_outdated2' => 'Mae fersiwn y ffeil yn edrych fel ei bod yn dod o hen o Coppermine (a wnaethoch uwchraddio?). Diweddarwch y ffeil hon hefyd.', //cpg1.4
  'help_local_version_na1' => 'Methu echdynnu gwybodaeth fersiwn svn', //cpg1.4
  'help_local_version_na2' => 'Nid oedd y sgript yn gallu dweud pa fersiwn SVN yw\'r ffeil sydd ar eich gweinyddwr. Dylech lwytho\'r ffeil o\'ch pecyn.', //cpg1.4
  'help_local_version_dev1' => 'Fersiwn datblygol', //cpg1.4
  'help_local_version_dev2' => 'Mae\'r ffeil ar eich gweinyddwr yn ddiweddarach na\'ch fersiwn Coppermine. Naill ai rydych yn defnyddio ffeil ddatblygol (defnyddiwch hon dim ond os ydych yn gwybod yr hyn rydych yn ei wneud), neu rydych wedi uwchraddio Coppermine heb lwytho\'r include/init.inc.php', //cpg1.4
  'help_not_writable1' => 'Ffolder ddim yn ysgrifenedig', //cpg1.4
  'help_not_writable2' => 'Newidiwch hawliau ffeil (CHMOD) i ganiatáu hawl ysgrifennu i\'r ffolder %s a phopeth tu fewn iddo.', //cpg1.4
  'help_writable1' => 'Ffolder ysgrifenedig', //cpg1.4
  'help_writable2' => 'Mae\'r ffolder %s yn ysgrifenedig. This is an unnecessary risk, coppermine only needs read/execute access.', //cpg1.4
  'help_writable_undetermined' => 'Nid oedd Coppermine yn gallu dweud os oes modd ysgrifennu i\'r ffolder.', //cpg1.4
  'your_file' => 'eich ffeil', //cpg1.4
  'reference_file' => 'ffeil gyfeiriad', //cpg1.4
  'summary' => 'Crynodeb', //cpg1.4
  'total' => 'Cyfanswn ffeiliau/ffolderi wedi\'u gwirio', //cpg1.4
  'mandatory_files_missing' => 'Ffeiliau hanfodol ar goll', //cpg1.4
  'optional_files_missing' => 'Ffeiliau opsiynol ar goll', //cpg1.4
  'files_from_older_version' => 'Ffeiliau dros ben o fersiynnau Coppermine wedi\'u dyddio', //cpg1.4
  'file_version_outdated' => 'Fersiynnau ffeiliau wedi\'u dyddio', //cpg1.4
  'error_no_data' => 'Gwnaeth y sgript \'boo\', nid oedd yn gallu tynnu unrhyw wybodaeth. Ymddiheuriadau.', //cpg1.4
  'go_to_webcvs' => 'ewch i %s', //cpg1.4
  'options' => 'Opsiynau', //cpg1.4
  'show_optional_files' => 'dangos ffolderi/ffeiliau opsiynol', //cpg1.4
  'show_mandatory_files' => 'dangos ffeiliau hanfodol', //cpg1.4
  'show_file_versions' => 'dangos fersiynnau ffeil', //cpg1.4
  'show_errors_only' => 'dangos ffolderi/ffeiliau gyda gwallau yn unig', //cpg1.4
  'show_permissions' => 'dangos hawliau ffolder', //cpg1.4
  'show_condensed_output' => 'dangos allbwn cywasg (am sgrinluniau haws)', //cpg1.4
  'coppermine_in_webroot' => 'mae Coppermine wedi\'i arsefydlu i\'r gwreiddyn', //cpg1.4
  'connect_online_repository' => 'ceisio â chysylltu i\'r ystorfa arlein', //cpg1.4
  'show_additional_information' => 'dangos gwybodaeth ychwanegol', //cpg1.4
  'no_webcvs_link' => 'peidio â dangos dolen we svn', //cpg1.4
  'stable_webcvs_link' => 'dangos dolen we svn i gangen sefydlog', //cpg1.4
  'devel_webcvs_link' => 'dangos dolen we svn i gangen ddatblygu', //cpg1.4
  'submit' => 'derbyn newidiadau / adfywio', //cpg1.4
  'reset_to_defaults' => 'ail-osod i werthoedd diofyn', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File view_log.php  //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('VIEWLOG_PHP')) $lang_viewlog_php = array(
  'delete_all' => 'Dileu Pob Log', //cpg1.4
  'delete_this' => 'Dileu\'r Log Hwn', //cpg1.4
  'view_logs' => 'Dangos Logiau', //cpg1.4
  'no_logs' => 'Dim logiau wedi\'u creu.', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File xp_publish.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('XP_PUBLISH_PHP')) {

$lang_xp_publish_client = <<<EOT
<h1>Dewin Cyhoeddi Cleient XP</h1><p>Mae'r modiwl hwn yn caniatáu defnydd <b>Windows XP</b> dewin cyhoeddi gwe gyda Coppermine.</p><p>Mae'r cod wedi'i seilio ar erthygl wedi'i phostio gan
EOT;

$lang_xp_publish_required = <<<EOT
<h2>Beth sydd ei angen</h2><ul><li>Windows XP er mwyn cael y dewin.</li><li>Fersiwn Coppermine lle bo'r <b>swyddogaeth llwytho i'r we yn gweithio'n gywir.</b></li></ul><h2>Sut i arsefydlu ar y cleient</h2><ul><li>Clic-dde ar
EOT;

$lang_xp_publish_select = <<<EOT
Dewis &quot;save target as..&quot;. Arbed y ffeil ar eich disg galed. Wrth arbed y ffeil, gwiriwch taw enw'r ffeil yw <b>cpg_###.reg</b> (mae'r ### yn cynrychioli stamp amser). Newidiwch i'r enw hwnnw os oes angen (gadael y rhifau). Ar ôl lawrlwytho, clic-ddwbl ar y ffeil er mwyn cofrestru eich gweinyddwr gyda'r dewin cyhoeddi'r we.</li></ul>
EOT;
//==========================================
$lang_xp_publish_testing = <<<EOT
<h2>Profi</h2><ul><li>Mewn Windows Explorer, dewiswch ffeiliau a chlicio ar <b>Publish xxx on the web</b> yn y panel chwith.</li><li>Cadarnhewch eich dewisiadau. Cliciwch ar <b>Next</b>.</li><li>Yn y rhestr wasanaethau sy'n ymddangos, dewiswch yr un ar gyfer eich oriel (bydd ganddi enw eich oriel). Os nac ydy'r gwasanaeth yn ymddangos, gwiriwch eich bod wedi arsefydlu <b>cpg_pub_wizard.reg</b> fel yr uchod.</li><li>Rhowch eich manylion mewngofnodi os oes eu hangen.</li><li>Dewiswch yr albwm targed ar gyfer eich lluniau neu crëwch un newydd.</li><li>Clic ar <b>next</b>. Bydd llwytho eich lluniau yn dechrau.</li><li>Wedi gorffen, gwiriwch eich oriel i weld os ydy'r oriel wedi'u hychwanegu'n llwyddiannus.</li></ul>
EOT;

$lang_xp_publish_notes = <<<EOT
<h2>Nodiadau :</h2><ul><li>Unwaith i\'r llwythiad ddechrau, nid yw\'r dewin yn gallu dangos unrhyw neges sy'n cael ei ddychwelyd gan y sgript, felly nid ydych yn gallu gwybod os yw'r llwythiad yn llwyddiannus nes eich bod yn gwirio'ch oriel.</li><li>Os yw'r llwythiad yn methu, actifadwch &quot;Debug mode&quot; ar y dudalen weinyddu Coppermine, ceisiwch gydag un ddelwedd ac yna gwirio sylwadau gwall mewn
EOT;

$lang_xp_publish_flood = <<<EOT
ffeil sydd wedi\' lleoli mewn ffolder Coppermine ar eich gweinyddwr.</li><li>Er mwyn osgoi llenwi'r oriel gan ddelweddau trwy'r dewin, dim ond <b>gweinyddwyr orielau</b> a <b>defnyddwyr ag albymau eu hunain </b> sydd yn gallu defnyddio'r swyddogaeth hon.</li>
EOT;

$lang_xp_publish_php = array(
  'title' => 'Coppermine - Dewin Cyhoeddi Gwefan XP', //cpg1.4
  'welcome' => 'Croeso <b>%s</b>,', //cpg1.4
  'need_login' => 'Mae angen mewngofnodi i\'r oriel gan ddefnyddio\'r porwr cyn gallwch ddefnyddio\'r dewin hwn.<p/><p>Wrth fewngofnodi, cofiwch ddewis <b>remember me</b> os yw\'n bresennol.', //cpg1.4
  'no_alb' => 'Sori ond does dim albwm yn bodoli sy\'n eich gadael chi i lwytho lluniau iddo fe gyda\'r dewin hwn.', //cpg1.4
  'upload' => 'Llwytho lluniau mewn i albwm sydd \'da chi eisoes', //cpg1.4
  'create_new' => 'Creu albwm newydd ar gyfer eich lluniau', //cpg1.4
  'album' => 'Albwm', //cpg1.4
  'category' => 'Categori', //cpg1.4
  'new_alb_created' => 'Cafodd eich albwm newydd &quot;<b>%s</b>&quot; ei greu.', //cpg1.4
  'continue' => 'Gwasgu &quot;Nesaf&quot; i ddechrau llwytho\'ch lluniau', //cpg1.4
  'link' => 'y ddolen hon', //cpg1.4
);
}
?>