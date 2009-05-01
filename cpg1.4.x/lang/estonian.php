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
  Coppermine version: 1.4.23
  $HeadURL$
  $Revision$
  $Author$
  $Date$
**********************************************/

if (!defined('IN_COPPERMINE')) { die('Pole Coppermine\'is...');}

// info about translators and translated language
$lang_translation_info = array(
  'lang_name_english' => 'Estonian', //cpg1.4
  'lang_name_native' => 'Eesti', //cpg1.4
  'lang_country_code' => 'EE', //cpg1.4
  'trans_name'=> 'Mihkel Tõnnov',
  'trans_email' => 'mihhkel@gmail.com',
  'trans_website' => '',
  'trans_date' => '2007-11-30',
);

$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('baiti', 'KB', 'MB');

// Day of weeks and months
$lang_day_of_week = array('P', 'E', 'T', 'K', 'N', 'R', 'L');
$lang_month = array('jaan', 'veebr', 'märts', 'apr', 'mai', 'juuni', 'juuli', 'aug', 'sept', 'okt', 'nov', 'dets');

// Some common strings
$lang_yes = 'Jah';
$lang_no  = 'Ei';
$lang_back = 'Tagasi';
$lang_continue = 'Jätka';
$lang_info = 'Teade';
$lang_error = 'Viga';
$lang_check_uncheck_all = 'Märgista kõik/eimidagi'; //cpg1.4

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$album_date_fmt =    '%d. %B %Y';
$lastcom_date_fmt =  '%d.%m.%Y kell %H:%M';
$lastup_date_fmt = '%d. %B %Y';
$register_date_fmt = '%d. %B %Y';
$lasthit_date_fmt = '%d. %B %Y kell %H:%M';
$comment_date_fmt =  '%d. %B %Y kell %H:%M';
$log_date_fmt = '%d. %B %Y kell %H:%M'; //cpg1.4

// For the word censor
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*');

$lang_meta_album_names = array(
  'random' => 'Juhuslikud failid',
  'lastup' => 'Viimased lisandused',
  'lastalb'=> 'Viimati uuendatud albumid',
  'lastcom' => 'Viimased kommentaarid',
  'topn' => 'Enimvaadatud',
  'toprated' => 'Kõrgeimalt hinnatud',
  'lasthits' => 'Viimati vaadatud',
  'search' => 'Otsingutulemused',
  'favpics'=> 'Lemmikfailid',  //cpg1.4
);

$lang_errors = array(
  'access_denied' => 'Sul pole lubatud seda lehte vaadata.',
  'perm_denied' => 'Sul pole lubatud seda toimingut sooritada.',
  'param_missing' => 'Skript käivitati ilma ühe või mitme vajaliku parameetrita.',
  'non_exist_ap' => 'Valitud albumit või faili pole olemas.',
  'quota_exceeded' => 'Kettalimiit täis<br /><br />Sinu kettamahu piirang on [quota] K, praegu kasutavad su failid [space] K, selle faili lisamisega ületaksid limiiti.',
  'gd_file_type_err' => 'GD pildigaleriid kasutades on lubatud ainult JPEG- ja PNG-failitüübid.',
  'invalid_image' => 'Üleslaaditud pilt on kas rikutud või ei suuda GD teek seda käsitleda.',
  'resize_failed' => 'Pisipildi või vähendatud pildi loomine ebaõnnestus.',
  'no_img_to_display' => 'Pole ühtegi pilti näidata.',
  'non_exist_cat' => 'Valitud kategooriat pole olemas.',
  'orphan_cat' => 'Ühel kategooria ema pole olemas, probleemi lahendamiseks käivita kategooriahaldur.',
  'directory_ro' => 'Kataloogi &quot;%s&quot; ei saa kirjutada, failide kustutamine pole võimalik.',
  'non_exist_comment' => 'Valitud kommentaari pole olemas.',
  'pic_in_invalid_album' => 'Fail on albumis (%s), mida pole olemas!?',
  'banned' => 'Sa oled hetkel sellelt saidilt pagendatud.',
  'not_with_udb' => 'See funktsioon on Coppermine\'is keelatud, kuna see on integreeritud foorumitarkvarasse. Funktsioon, mida sa kasutada tahad, kas pole praeguses seadistuses toetatud või peaks seda käsitlema foorumitarkvara.',
  'offline_title' => 'Kättesaamatu',
  'offline_text' => 'Galerii on hetkel kättesaamatu - proovi varsti uuesti.',
  'ecards_empty' => 'Hetkel pole ühtegi e-kaarti näidata.',
  'action_failed' => 'Toiming ebaõnnestus. Coppermine ei suuda sinu päringut töödelda.',
  'no_zip' => 'ZIP-failide käsitlemiseks vajalikud teegid pole saadaval. Palun võta ühendust oma Coppermine\'i-administraatoriga.',
  'zip_type' => 'Sul pole lubatud ZIP-faile üles laadida.',
  'database_query' => 'Andmebaasipäringu töötlemisel tekkis viga.', //cpg1.4
  'non_exist_comment' => 'Valitud kommentaari pole olemas.', //cpg1.4
);

$lang_bbcode_help_title = 'BBcode\'i abi'; //cpg1.4
$lang_bbcode_help = 'Sellele v&auml;ljale saad kl&otilde;psatavaid linke ja m&otilde;ningast vormistust lisada, kui kasutad BBcode\'i silte: <li>[b]paks kiri[/b] =&gt; <b>paks kiri</b></li><li>[i]kaldkiri[/i] =&gt; <i>kaldkiri</i></li><li>[url=http://sinu.sait.ee/]lingi tekst[/url] =&gt; <a href="http://sinu.sait.ee">lingi tekst</a></li><li>[email]kasutaja@domeen.com[/email] =&gt; <a href="mailto:kasutaja@domeen.com">kasutaja@domeen.com</a></li><li>[color=red]v&auml;rviline tekst[/color] =&gt; <span style="color:red">v&auml;rviline tekst</span></li><li>[img]http://coppermine-gallery.net/demo/cpg14x/images/red.gif[/img] => <img src="../images/red.gif" border="0" alt="" /></li>'; //cpg1.4

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
  'home_title' => 'Mine kodulehele',
  'home_lnk' => 'Kodu',
  'alb_list_title' => 'Mine albumite nimekirja juurde',
  'alb_list_lnk' => 'Albumite nimekiri',
  'my_gal_title' => 'Mine minu isikliku galerii juurde',
  'my_gal_lnk' => 'Minu galerii',
  'my_prof_title' => 'Mine minu isiklikule profiilile', //cpg1.4
  'my_prof_lnk' => 'Minu profiil',
  'adm_mode_title' => 'Lülitu administraatorirežiimi',
  'adm_mode_lnk' => 'Admin-režiim',
  'usr_mode_title' => 'Lülitu kasutajarežiimi',
  'usr_mode_lnk' => 'Kasutajarežiim',
  'upload_pic_title' => 'Laadi fail üles albumisse',
  'upload_pic_lnk' => 'Lisa fail',
  'register_title' => 'Loo konto',
  'register_lnk' => 'Registreeru',
  'login_title' => 'Logi mind sisse', //cpg1.4
  'login_lnk' => 'Logi sisse',
  'logout_title' => 'Logi mind välja', //cpg1.4
  'logout_lnk' => 'Logi välja',
  'lastup_title' => 'Näita uusimaid üleslaadimisi', //cpg1.4
  'lastup_lnk' => 'Viimati lisatud',
  'lastcom_title' => 'Näita uusimaid kommentaare', //cpg1.4
  'lastcom_lnk' => 'Viimased kommentaarid',
  'topn_title' => 'Näita kõige rohkem vaadatud pilte', //cpg1.4
  'topn_lnk' => 'Enimvaadatud',
  'toprated_title' => 'Näita kõige kõrgema hinnanguga pilte', //cpg1.4
  'toprated_lnk' => 'Kõrgeimalt hinnatud',
  'search_title' => 'Otsi galeriist', //cpg1.4
  'search_lnk' => 'Otsing',
  'fav_title' => 'Mine minu lemmikute juurde', //cpg1.4
  'fav_lnk' => 'Minu lemmikud',
  'memberlist_title' => 'Näita liikmete nimekirja',
  'memberlist_lnk' => 'Kasutajate nimekiri',
  'faq_title' => 'Korduma kippuvad küsimused pildigalerii &quot;Coppermine&quot; kohta',
  'faq_lnk' => 'KKK',
);

$lang_gallery_admin_menu = array(
  'upl_app_title' => 'Kiida heaks uusi üleslaadimisi', //cpg1.4
  'upl_app_lnk' => 'Üleslaadimise heakskiit',
  'admin_title' => 'Mine seadistuste juurde', //cpg1.4
  'admin_lnk' => 'Seaded', //cpg1.4
  'albums_title' => 'Mine albumiseadete juurde', //cpg1.4
  'albums_lnk' => 'Albumid',
  'categories_title' => 'Mine kategooriaseadete juurde', //cpg1.4
  'categories_lnk' => 'Kategooriad',
  'users_title' => 'Mine kasutajaseadete juurde', //cpg1.4
  'users_lnk' => 'Kasutajad',
  'groups_title' => 'Mine grupiseadete juurde', //cpg1.4
  'groups_lnk' => 'Grupid',
  'comments_title' => 'Vaata ülevaatust ootavaid kommentaare', //cpg1.4
  'comments_lnk' => 'Kommentaaride ülevaatus',
  'searchnew_title' => 'Lisa hulgiviisil faile', //cpg1.4
  'searchnew_lnk' => 'Hulgi lisamine',
  'util_title' => 'Mine administratiivtööriistade juurde', //cpg1.4
  'util_lnk' => 'Admin-tööriistad',
  'key_title' => 'Mine märksõnaraamatu juurde', //cpg1.4
  'key_lnk' => 'Märksõnastik', //cpg1.4
  'ban_title' => 'Mine pagendatud kasutajate seadete juurde', //cpg1.4
  'ban_lnk' => 'Kasutajate pagendamine',
  'db_ecard_title' => 'Vaata e-kaarte', //cpg1.4
  'db_ecard_lnk' => 'E-kaardid',
  'pictures_title' => 'Sorteeri mu pildid', //cpg1.4
  'pictures_lnk' => 'Piltide sorteerimine', //cpg1.4
  'documentation_lnk' => 'Dokumentatsioon', //cpg1.4
  'documentation_title' => 'Coppermine\'i käsiraamat (inglise keeles)', //cpg1.4
);

$lang_user_admin_menu = array(
  'albmgr_title' => 'Loo ja telli albumeid', //cpg1.4
  'albmgr_lnk' => 'Albumite loomine / tellimine',
  'modifyalb_title' => 'Muuda mu albumeid',  //cpg1.4
  'modifyalb_lnk' => 'Albumite muutmine',
  'my_prof_title' => 'Mine mu isiklikule profiilile', //cpg1.4
  'my_prof_lnk' => 'Minu profiil',
);

$lang_cat_list = array(
  'category' => 'Kategooriad',
  'albums' => 'Albumeid',
  'pictures' => 'Faile',
);

$lang_album_list = array(
  'album_on_page' => '%d albumit %d lehel',
);

$lang_thumb_view = array(
  'date' => 'KUUPÄEV',
  //Sort by filename and title
  'name' => 'FAILINIMI',
  'title' => 'PEALKIRI',
  'sort_da' => 'Sorteeri tõusvalt kuupäeva järgi',
  'sort_dd' => 'Sorteeri laskuvalt kuupäeva järgi',
  'sort_na' => 'Sorteeri tõusvalt failinime järgi',
  'sort_nd' => 'Sorteeri laskuvalt failinime järgi',
  'sort_ta' => 'Sorteeri tõusvalt pealkirja järgi',
  'sort_td' => 'Sorteeri laskuvalt pealkirja järgi',
  'position' => 'ASUKOHT', //cpg1.4
  'sort_pa' => 'Sorteeri tõusvalt asukoha järgi', //cpg1.4
  'sort_pd' => 'Sorteeri laskuvalt asukoha järgi', //cpg1.4
  'download_zip' => 'Laadi ZIP-failina alla',
  'pic_on_page' => '%d faili %d lehel',
  'user_on_page' => '%d kasutajat %d lehel',
  'enter_alb_pass' => 'Sisesta albumi parool', //cpg1.4
  'invalid_pass' => 'Sobimatu parool', //cpg1.4
  'pass' => 'Parool', //cpg1.4
  'submit' => 'Sisesta', //cpg1.4
);

$lang_img_nav_bar = array(
  'thumb_title' => 'Tagasi pisipiltide lehele',
  'pic_info_title' => 'Kuva/peida pildi info',
  'slideshow_title' => 'Slaidiseanss',
  'ecard_title' => 'Saada pilt e-kaardina',
  'ecard_disabled' => 'E-kaardid on keelatud',
  'ecard_disabled_msg' => 'Sul pole lubatud e-kaarte saata.', //js-alert
  'prev_title' => 'Vaata eelnevat pilti',
  'next_title' => 'Vaata järgnevat pilti',
  'pic_pos' => 'FAIL %s/%s',
  'report_title' => 'Teavita sellest failist administraatorit', //cpg1.4
  'go_album_end' => 'Hüppa viimasele', //cpg1.4
  'go_album_start' => 'Mine algusesse', //cpg1.4
  'go_back_x_items' => 'Mine %s võrra tagasi', //cpg1.4
  'go_forward_x_items' => 'Mine %s võrra edasi', //cpg1.4
);

$lang_rate_pic = array(
  'rate_this_pic' => 'Faili hinnang ',
  'no_votes' => '(pole veel hinnatud)',
  'rating' => '(praegune hinnang : %s / 5, hindajaid %s)',
  'rubbish' => 'Praht',
  'poor' => 'Kehv',
  'fair' => 'Enam-vähem',
  'good' => 'Hea',
  'excellent' => 'Hiilgav',
  'great' => 'Suurepärane',
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
  CRITICAL_ERROR => 'Kriitiline viga',
  'file' => 'Fail: ',
  'line' => 'Rida: ',
);

$lang_display_thumbnails = array(
  'filename' => 'Faili nimi=', //cpg1.4
  'filesize' => 'Faili suurus=', //cpg1.4
  'dimensions' => 'Mõõtmed=', //cpg1.4
  'date_added' => 'Lisamise aeg=', //cpg1.4
);

$lang_get_pic_data = array(
  'n_comments' => '%s kommentaar(i)',
  'n_views' => '%s vaatamist',
  'n_votes' => '(%s häält)',
);

$lang_cpg_debug_output = array(
  'debug_info' => 'Silumisinfo',
  'select_all' => 'Vali kõik',
  'copy_and_paste_instructions' => 'Kui kavatsed paluda abi Coppermine\'i foorumist, kopeeri oma postitusse vajadusel see silumisväljund ja veateade, mille said (kui said). Vaata, et enne postitamist asendaksid päringus esineda võivad paroolid tärnidega (***). <br />Märkus: see on ainult info ja ei tähenda, et sinu galeriis viga on.', //cpg1.4
  'phpinfo' => 'Kuva phpinfo',
  'notices' => 'Märkused', //cpg1.4
);

$lang_language_selection = array(
  'reset_language' => 'Vaikimisi keel',
  'choose_language' => 'Vali keel',
);

$lang_theme_selection = array(
  'reset_theme' => 'Vaikimisi kujundus',
  'choose_theme' => 'Vali kujundus',
);

$lang_version_alert = array(
  'version_alert' => 'Toetamata versioon.', //cpg1.4
  'security_alert' => 'Turvahoiatus!', //cpg1.4.3
  'relocate_exists' => 'Eemalda fail <a href="http://coppermine-gallery.net/forum/index.php?topic=24217.0" target=_blank>relocate_server.php</a> oma veebilehelt!',
  'no_stable_version' => 'Sa kasutad Coppermine %s (%s), mis on mõeldud ainult väga kogenud kasutajatele - sellel versioonil puudub igasugune garantii ja tootetugi. Kasuta seda omal vastutusel või kui vajad tootetuge, vaheta see viimase stabiilse versiooni vastu.', //cpg1.4
  'gallery_offline' => 'Galerii on hetkel kättesaamatu ja on nähtav ainult administraatorile. Ära unusta pärast hooldustööde lõpetamist seda jälle kättesaadavaks lülitada.', //cpg1.4
);

$lang_create_tabs = array(
  'previous' => 'Eelmine', //cpg1.4
  'next' => 'Järgmine', //cpg1.4
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
  'error_wakeup' => 'Plugina &quot;%s&quot; äratamine pole võimalik.', //cpg1.4
  'error_install' => 'Plugina &quot;%s&quot; paigaldamine pole võimalik.', //cpg1.4
  'error_uninstall' => 'Plugina &quot;%s&quot; eemaldamine pole võimalik.', //cpg1.4
  'error_sleep' => 'Plugina &quot;%s&quot; eemaldamine pole võimalik<br />', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File include/smilies.inc.php
// ------------------------------------------------------------------------- //

if (defined('SMILIES_PHP')) $lang_smilies_inc_php = array(
  'Exclamation' => 'Hüüatus',
  'Question' => 'Küsimus',
  'Very Happy' => 'Väga rõõmus',
  'Smile' => 'Naeratab',
  'Sad' => 'Kurb',
  'Surprised' => 'Üllatunud',
  'Shocked' => 'Šokeeritud',
  'Confused' => 'Segaduses',
  'Cool' => 'Lahe',
  'Laughing' => 'Naerab',
  'Mad' => 'Vihane',
  'Razz' => 'Pilkab', // paha tõlge :P
  'Embarassed' => 'Piinlik',
  'Crying or Very sad' => 'Nutab',
  'Evil or Very Mad' => 'Väga kuri',
  'Twisted Evil' => 'Kahtlaste kavatsustega / kurikaval',
  'Rolling Eyes' => 'Pööritab silmi', // paha tõlge :roll:
  'Wink' => 'Pilgutab silma',
  'Idea' => 'Idee',
  'Arrow' => 'Nool',
  'Neutral' => 'Erapooletu / kahevahel', // paha tõlge :|
  'Mr. Green' => 'Hr. Roheline',
);

// ------------------------------------------------------------------------- //
// File addpic.php
// ------------------------------------------------------------------------- //

// void

// ------------------------------------------------------------------------- //
// File mode.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('MODE_PHP')) $lang_mode_php = array(
  0 => 'Admin-režiimist väljumine...',
  1 => 'Admin-režiimi sisenemine...',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
  'alb_need_name' => 'Albumitel peab olema nimi!', //js-alert
  'confirm_modifs' => 'Oled kindel, et tahad need muudatused teha?', //js-alert
  'no_change' => 'Sa ei muutnud midagi!', //js-alert
  'new_album' => 'Uus album',
  'confirm_delete1' => 'Oled kindel, et tahad selle albumi kustutada?', //js-alert
  'confirm_delete2' => '\nKõik selles olevad failid ja kommentaarid lähevad kaotsi!', //js-alert
  'select_first' => 'Vali esmalt album', //js-alert
  'alb_mrg' => 'Albumihaldus',
  'my_gallery' => '* Minu galerii *',
  'no_category' => '* Kategooriaid pole *',
  'delete' => 'Kustuta',
  'new' => 'Uus',
  'apply_modifs' => 'Rakenda muudatused',
  'select_category' => 'Vali kategooria',
);

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) $lang_banning_php = array(
  'title' => 'Kasutajate pagendamine', //cpg1.4
  'user_name' => 'Kasutajanimi', //cpg1.4
  'ip_address' => 'IP-aadress', //cpg1.4
  'expiry' => 'Aegumine (tühjaksjätmine tähendab igaveseks pagendamist)', //cpg1.4
  'edit_ban' => 'Salvesta muudatused', //cpg1.4
  'delete_ban' => 'Kustuta', //cpg1.4
  'add_new' => 'Uus pagendamine', //cpg1.4
  'add_ban' => 'Lisa', //cpg1.4
  'error_user' => 'Kasutajat ei leitud.', //cpg1.4
  'error_specify' => 'Sa pead määrama kas kasutajanime või IP-aadressi.', //cpg1.4
  'error_ban_id' => 'Vigane pagendamise ID.', //cpg1.4
  'error_admin_ban' => 'Iseenda pagendamine pole võimalik!', //cpg1.4
  'error_server_ban' => 'Sa tahtsid omaenda serveri pagendada? At-at, seda küll teha ei saa...', //cpg1.4
  'error_ip_forbidden' => 'Seda IP\'d pole võimalik pagendada - see on mitte-marssruuditav (privaatne). <br />Kui tahad võimaldada privaatsete IP-de pagendamist, muuda seda oma <a href="admin.php">seadistuses</a> (mõttekas ainult juhul, kui Coppermine töötab kohtvõrgus).', //cpg1.4
  'lookup_ip' => 'Otsing IP-aadressi järgi', //cpg1.4
  'submit' => 'Otsi', //cpg1.4
  'select_date' => 'Vali kuupäev', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File bridgemgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('BRIDGEMGR_PHP')) $lang_bridgemgr_php = array(
  'title' => 'Sildamisnõustaja',
  'warning' => 'Hoiatus: seda nõustajat kasutades pead mõistma, et tundlike andmete saatmiseks kasutatakse HTML-vorme. Käivita see ainult omaenda arvutis (mitte avalikul kliendil nt Interneti-kohvikus) ja pärast lõpetamist tühjenda veebilehitseja vahemälu ja ajutised failid, muidu võivad kõrvalised isikud sinu andmetele juurde pääseda.',
  'back' => 'Tagasi',
  'next' => 'Edasi',
  'start_wizard' => 'Käivita sildamisnõustaja',
  'finish' => 'Lõpeta',
  'hide_unused_fields' => 'Peida kasutamata vormiväljad (soovitatav)',
  'clear_unused_db_fields' => 'Puhasta vigased kirjed andmebaasist (soovitatav)',
  'custom_bridge_file' => 'Sinu kohandatud sillafaili nimi (kui fail on <i>minufail.inc.php</i>, sisesta sellele väljale <i>minufail</i>)',
  'no_action_needed' => 'Siin pole vaja midagi teha. Jätkamiseks klõpsa lihtsalt &quot;Edasi&quot;.',
  'reset_to_default' => 'Lähtesta vaikeväärtusele',
  'choose_bbs_app' => 'Vali rakendus, millega Coppermine sillata',
  'support_url' => 'Selle rakenduse tootetoe jaoks mine siia',
  'settings_path' => 'Sinu foorumitarkvara/CMS-i kasutatav(ad) tee(d)',
  'database_connection' => 'Andmebaasiühendus',
  'database_tables' => 'Andmebaasitabelid',
  'bbs_groups' => 'Foorumi grupid',
  'license_number' => 'Litsentsinumber',
  'license_number_explanation' => 'Sinu litsentsi number (kui on)',
  'db_database_name' => 'Andmebaasi nimi',
  'db_database_name_explanation' => 'Andmebaasi nimi, mida sinu foorum/CMS kasutab',
  'db_hostname' => 'Andmebaasi host',
  'db_hostname_explanation' => 'Hosti nimi, kus MySQL-andmebaas asub, tavaliselt &quot;localhost&quot;',
  'db_username' => 'Andmebaasi kasutajakonto',
  'db_username_explanation' => 'Foorumiga/CMS-iga ühendumiseks kasutatav MySQL-i kasutajakonto',
  'db_password' => 'Andmebaasi parool',
  'db_password_explanation' => 'Antud MySQL-i kasutajakonto parool',
  'full_forum_url' => 'Foorumi URL',
  'full_forum_url_explanation' => 'Sinu foorumi/CMS-i täielik URL (k.a sissejuhatav http:// - nt http://www.sinudomeen.ee/foorum/)',
  'relative_path_of_forum_from_webroot' => 'Foorumi suhteline tee',
  'relative_path_of_forum_from_webroot_explanation' => 'Sinu foorumi/CMS-i suhteline tee veebi juurkataloogist (nt kui selle aadress on http://www.sinudomeen.ee/foorum/, sisesta sellele väljale &quot;/foorum/&quot;)',
  'relative_path_to_config_file' => 'Sinu foorumi/CMS-i seadistusfaili suhteline tee',
  'relative_path_to_config_file_explanation' => 'Suhteline tee sinu foorumi/CMS-i juurde, nähtuna Coppermine\'i kataloogist (nt kui foorumi aadress on http://www.sinudomeen.ee/foorum/ ja Coppermine\'i oma http://www.sinudomeen.ee/galerii/, sisesta sellele väljale &quot;../foorum/&quot)',
  'cookie_prefix' => 'Küpsise prefiks',
  'cookie_prefix_explanation' => 'Sinu foorumi/CMS-i küpsise nimi',
  'table_prefix' => 'Tabeli prefiks',
  'table_prefix_explanation' => 'Peab kattuma prefiksiga, mille ülesseadmise käigus oma foorumile/CMS-ile valisid.',
  'user_table' => 'Kasutajatabel',
  'user_table_explanation' => '(Vaikeväärtus peaks enamasti sobima, v.a juhul, kui sinu foorumi/CMS-i paigaldus on ebastandardne)',
  'session_table' => 'Seansitabel',
  'session_table_explanation' => '(Vaikeväärtus peaks enamasti sobima, v.a juhul, kui sinu foorumi/CMS-i paigaldus on ebastandardne)',
  'group_table' => 'Grupitabel',
  'group_table_explanation' => '(Vaikeväärtus peaks enamasti sobima, v.a juhul, kui sinu foorumi/CMS-i paigaldus on ebastandardne)',
  'group_relation_table' => 'Grupisuhete tabel',
  'group_relation_table_explanation' => '(Vaikeväärtus peaks enamasti sobima, v.a juhul, kui sinu foorumi/CMS-i paigaldus on ebastandardne)',
  'group_mapping_table' => 'Grupivastenduse tabel',
  'group_mapping_table_explanation' => '(Vaikeväärtus peaks enamasti sobima, v.a juhul, kui sinu foorumi/CMS-i paigaldus on ebastandardne)',
  'use_standard_groups' => 'Kasuta standardseid foorumi/CMS-i kasutajagruppe',
  'use_standard_groups_explanation' => 'Kasuta standardseid (sisse-ehitatud) kasutajagruppe (soovitatav). See tühistab kõik kohandatud kasutajagrupid. Lülita see välja ainult juhul, kui tõesti tead, mida teed.',
  'validating_group' => 'Valideeritavate grupp',
  'validating_group_explanation' => 'Valideerimist vajavate kasutajakontode grupi ID sinu foorumis/CMS-is (vaikeväärtus peaks enamasti sobima, v.a juhul, kui sinu foorumi/CMS-i paigaldus on ebastandardne)',
  'guest_group' => 'Külaliste grupp',
  'guest_group_explanation' => 'Külaliste (anonüümsete kasutajate) grupi ID sinu foorumis/CMS-is (vaikeväärtus peaks enamasti sobima, muuda seda ainult siis, kui tead, mida teed)',
  'member_group' => 'Liikmete grupp',
  'member_group_explanation' => '&quot;Tavaliste&quot; kasutajate grupi ID sinu foorumis/CMS-is (vaikeväärtus peaks enamasti sobima, muuda seda ainult siis, kui tead, mida teed)',
  'admin_group' => 'Administraatorite grupp',
  'admin_group_explanation' => 'Administraatorite grupi ID sinu foorumis/CMS-is (vaikeväärtus peaks enamasti sobima, muuda seda ainult siis, kui tead, mida teed)',
  'banned_group' => 'Pagendatute grupp',
  'banned_group_explanation' => 'Pagendatud kasutajate grupi ID sinu foorumis/CMS-is (vaikeväärtus peaks enamasti sobima, muuda seda ainult siis, kui tead, mida teed)',
  'global_moderators_group' => 'Üldmoderaatorite grupp',
  'global_moderators_group_explanation' => 'Üldmoderaatorite grupi ID sinu foorumis/CMS-is (vaikeväärtus peaks enamasti sobima, muuda seda ainult siis, kui tead, mida teed)',
  'special_settings' => 'Foorumi/CMS-i spetsiifilised seaded',
  'logout_flag' => 'phpBB versioon (väljalogimislipp)',
  'logout_flag_explanation' => 'Kasutatav foorumi/CMS-i versioon (sellest oleneb, kuidas käsitletakse väljalogimisi)',
  'use_post_based_groups' => 'Kasuta postituspõhiseid gruppe',
  'logout_flag_yes' => '2.0.5 või uuem',
  'logout_flag_no' => '2.0.4 või vanem',
  'use_post_based_groups_explanation' => 'Kas peaks arvestama foorumi/CMS-i gruppe, mille liikmelisus oleneb kasutaja postituste arvust (võimaldab üksikasjalikku õiguste haldamist), või ainult vaikimisi gruppe (lihtsam administreerida; soovitatav). Seda saab ka hiljem muuta.',
  'use_post_based_groups_yes' => 'Jah',
  'use_post_based_groups_no' => 'Ei',
  'error_title' => 'Enne jätkamist pead need vead ära parandama. Mine eelmisele lehele.',
  'error_specify_bbs' => 'Sa pead määrama, millise rakendusega tahad oma Coppermine\'i paigalduse sillata.',
  'error_no_blank_name' => 'Kohandatud sillafaili nimi on vajalik ja seda ei saa tühjaks jätta.',
  'error_no_special_chars' => 'Sillafaili nimi ei tohi sisaldada ühtegi erimärki, v.a alakriips (_) ja sidekriips (-).',
  'error_bridge_file_not_exist' => 'Sillafaili %s pole serveris olemas. Vaata, et oleksid selle ikka üles laadinud.',
  'finalize' => 'Luba/keela foorumi/CMS-iga põimimine',
  'finalize_explanation' => 'Praeguseni on seaded kirjutatud küll andmebaasi, aga foorumi/CMS-iga põimimine pole sisse lülitatud. Hiljem saab põimimist igal ajal sisse ja välja lülitada. Pea meeles autonoomse Coppermine\'i administraatori kasutajanimi ja parool, hiljem võib neid muudatuste tegemiseks vaja olla. Kui midagi valesti läheb, ava %s ja lülita foorumi/CMS-iga põimimine välja, kasutades oma autonoomse (sildamata) versiooni administraatori kontot (enamasti see, mis Coppermine\'i paigaldamise käigus loodi).',
  'your_bridge_settings' => 'Sinu silla seaded',
  'title_enable' => 'Luba põimimine/sildamine %s-ga',
  'bridge_enable_yes' => 'Lubatud',
  'bridge_enable_no' => 'Keelatud',
  'error_must_not_be_empty' => 'ei tohi olla tühi.',
  'error_either_be' => 'peab olema kas %s või %s.',
  'error_folder_not_exist' => '%s ei eksisteeri. Paranda %s jaoks sisestatud väärtus.',
  'error_cookie_not_readible' => 'Coppermine\'il pole võimalik %s-nimelise küpsise lugemine. Paranda %s jaoks sisestatud väärtus või mine oma foorumi/CMS-i admin-paneelile ja vaata, et küpsise tee oleks Coppermine\'i jaoks loetav.',
  'error_mandatory_field_empty' => 'Välja %s ei saa tühjaks jätta - sisesta sobiv väärtus.',
  'error_no_trailing_slash' => 'Väljal %s ei tohi olla lõpetavat kaldkriipsu.',
  'error_trailing_slash' => 'Väljal %s peab olema lõpetav kaldkriips.',
  'error_db_connect' => 'Määratud andmetega MySQL-andmebaasi ühendumine polnud võimalik. MySQL ütles järgmist:',
  'error_db_name' => 'Kuigi Coppermine suutis ühenduse luua, ei leitud andmebaasi %s. Vaata, et oleksid %s õigesti näidanud. MySQL ütles järgmist:',
  'error_prefix_and_table' => '%s ja ',
  'error_db_table' => 'Tabelit %s ei leitud. Vaata, et oleksid %s õigesti näidanud.',
  'recovery_title' => 'Sillahaldus: hädataaste',
  'recovery_explanation' => 'Kui tulid siia oma Coppermine\'i galerii ja oma foorumi/CMS-i silda administreerima, pead esmalt administraatorina sisse logima. Kui sa ei saa sisse logida, kuna sildamine ei tööta nagu peaks, saad selle siin lehel välja lülitada. Oma kasutajanime ja parooli sisestamine ei logi sind sisse, vaid lülitab ainult foorumi/CMS-iga põimimise välja. Täpsemalt vaata dokumentatsioonist.',
  'username' => 'Kasutajanimi',
  'password' => 'Parool',
  'disable_submit' => 'Sisesta',
  'recovery_success_title' => 'Edukalt autoriseeritud',
  'recovery_success_content' => 'Foorumi/CMS-iga sildamine on edukalt välja lülitatud. Sinu Coppermine\'i paigaldus töötab nüüd autonoomselt.',
  'recovery_success_advice_login' => 'Sillaseadete muutmiseks ja/või foorumi/CMS-iga põimimise taaslubamiseks logi administraatorina sisse.',
  'goto_login' => 'Mine sisselogimise lehele',
  'goto_bridgemgr' => 'Mine sillahalduse lehele',
  'recovery_failure_title' => 'Autoriseerimine ebaõnnestus',
  'recovery_failure_content' => 'Sisestasid valed andmed. Sa pead sisestama Coppermine\'i autonoomse versiooni administraatori kasutajanime ja parooli. (Üldjuhul konto, mis Coppermine\'i paigaldamise käigus loodi.)',
  'try_again' => 'Proovi uuesti',
  'recovery_wait_title' => 'Ooteaeg pole läbi',
  'recovery_wait_content' => 'Turvakaalutlustel ei salli see skript järjest lühikese aja jooksul ebaõnnestunud sisselogimisi. Enne uut autoriseerimiskatset pead veidi ootama.',
  'wait' => 'Oota',
  'create_redir_file' => 'Loo ümbersuunamisfail (soovitatav)',
  'create_redir_file_explanation' => 'Et suunata kasutajad pärast foorumisse/CMS-i sisselogimist tagasi Coppermine\'i, on vaja foorumi/CMS-i kataloogis luua ümbersuunamisfail. Selle valiku märkimisel üritatakse see sinu asemel luua või vähemalt antakse, mida fail sisaldama peaks.',
  'browse' => 'Sirvi',
);

// ------------------------------------------------------------------------- //
// File calendar.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('CALENDAR_PHP')) $lang_calendar_php = array(
  'title' => 'Kalender', //cpg1.4
  'close' => 'Sulge', //cpg1.4
  'clear_date' => 'Puhasta kuupäev', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
  'miss_param' => 'Ei antud vajalikke parameetreid toimingu &quot;%s&quot; jaoks.',
  'unknown_cat' => 'Valitud kategooriat pole andmebaasis olemas.',
  'usergal_cat_ro' => 'Kasutajate galeriide kategooria kustutamine pole võimalik.',
  'manage_cat' => 'Kategooriate haldamine',
  'confirm_delete' => 'Oled kindel, et tahad selle kategooria kustutada?', //js-alert
  'category' => 'Kategooria',
  'operations' => 'Toimingud',
  'move_into' => 'Liiguta',
  'update_create' => 'Uuenda/loo kategooria',
  'parent_cat' => 'Emakategooria',
  'cat_title' => 'Kategooria pealkiri',
  'cat_thumb' => 'Kategooria pisipilt',
  'cat_desc' => 'Kategooria kirjeldus',
  'categories_alpha_sort' => 'Sorteeri kategooriad tähestiku järgi (kohandatud järjekorra asemel)', //cpg1.4
  'save_cfg' => 'Salvesta seadistused', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File admin.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('ADMIN_PHP')) $lang_admin_php = array(
  'title' => 'Galeriiseadistus', //cpg1.4
  'manage_exif' => 'EXIF-kuva haldus', //cpg1.4
  'manage_plugins' => 'Pluginahaldus', //cpg1.4
  'manage_keyword' => 'Märksõnahaldus', //cpg1.4
  'restore_cfg' => 'Taasta tehaseseadistus',
  'save_cfg' => 'Salvesta uus seadistus',
  'notes' => 'Märkmed',
  'info' => 'Teade',
  'upd_success' => 'Coppermine\'i seadistus uuendatud.',
  'restore_success' => 'Coppermine\'i vaikeseadistus taastatud.',
  'name_a' => 'Nimi tõusvalt',
  'name_d' => 'Nimi laskuvalt',
  'title_a' => 'Pealkiri tõusvalt',
  'title_d' => 'Pealkiri laskuvalt',
  'date_a' => 'Kuupäev tõusvalt',
  'date_d' => 'Kuupäev laskuvalt',
  'pos_a' => 'Asukoht tõusvalt', //cpg1.4
  'pos_d' => 'Asukoht laskuvalt', //cpg1.4
  'th_any' => 'Suurim kuvasuhe',
  'th_ht' => 'Kõrgus',
  'th_wd' => 'Laius',
  'label' => ' tekst ',
  'item' => ' lipud',
  'debug_everyone' => ' igaühel',
  'debug_admin' => ' ainult administraatoril',
  'no_logs'=> 'Väljas', //cpg1.4
  'log_normal'=> 'Tavapärane', //cpg1.4
  'log_all' => 'Täielik', //cpg1.4
  'view_logs' => 'Vaata logisid', //cpg1.4
  'click_expand' => 'Laiendamiseks klõpsa sektsiooni nimel', //cpg1.4
  'expand_all' => 'Laienda kõik', //cpg1.4
  'notice1' => '(*) Neid seadeid ei tohi muuta, kui su andmebaasis juba faile on.', //cpg1.4 - (relocated)
  'notice2' => '(**) Selle seade muutmine mõjutab ainult faile, mis lisatakse edaspidi. Niisiis on soovitatav, et seda seadet ei muudeta, kui galeriis juba faile on. Olemasolevatele failidele saab muudatused kehtestada, kasutades admin-menüü linki &quot;<a href="util.php">Admin-tööriistad</a>&quot;.', //cpg1.4 - (relocated)
  'notice3' => '(***) Kõik logifailid kirjutatakse inglise keeles.', //cpg1.4 - (relocated)
  'bbs_disabled' => 'Foorumi/CMS-iga põimimise kasutamisel on funktsioon keelatud.', //cpg1.4
  'auto_resize_everyone' => ' igaühel', //cpg1.4
  'auto_resize_user' => ' ainult (tava)kasutajatel', //cpg1.4
  'ascending' => 'Tõusev', //cpg1.4
  'descending' => 'Laskuv', //cpg1.4
);

if (defined('ADMIN_PHP')) $lang_admin_data = array(
  'Üldseaded',
  array('Galerii nimi', 'gallery_name', 0, 'f=index.htm&amp;as=admin_general_name&amp;ae=admin_general_name_end'), //cpg1.4
  array('Galerii kirjeldus', 'gallery_description', 0, 'f=index.htm&amp;as=admin_general_description&amp;ae=admin_general_description_end'), //cpg1.4
  array('Galerii administraatori e-post', 'gallery_admin_email', 0, 'f=index.htm&amp;as=admin_general_email&amp;ae=admin_general_email_end'), //cpg1.4
  array('Sinu Coppermine\'i galerii kataloogi URL (ilma lõpus oleva &quot;index.php&quot; vms-ta)', 'ecards_more_pic_target', 0, 'f=index.htm&amp;as=admin_general_coppermine-url&amp;ae=admin_general_coppermine-url_end'), //cpg1.4
  array('Sinu kodulehe URL', 'home_target', 0, 'f=index.htm&amp;as=admin_general_home-url&amp;ae=admin_general_home-url_end'), //cpg1.4
  array('Luba lemmikute ZIP-failis allalaadimine', 'enable_zipdownload', 1, 'f=index.htm&amp;as=admin_general_zip-download&amp;ae=admin_general_zip-download_end'), //cpg1.4
  array('Ajavööndi erinevus GMT suhtes (praegune aeg: ' . localised_date(-1, $comment_date_fmt) . ')','time_offset',0, 'f=index.htm&amp;as=admin_general_time-offset&amp;ae=admin_general_time-offset_end&amp;top=1'), //cpg1.4
  array('Aktiveeri paroolide krüpteerimine (seda ei saa hiljem tagasi võtta)','enable_encrypted_passwords',1, 'f=index.htm&amp;as=admin_general_encrypt_password_start&amp;ae=admin_general_encrypt_password_end&amp;top=1'), // cpg 1.4
  array('Luba abi-ikoonid (abi on inglise keeles)','enable_help',9, 'f=index.htm&amp;as=admin_general_help&amp;ae=admin_general_help_end'), //cpg1.4
  array('Luba otsingus klõpsatavad märksõnad','clickable_keyword_search',14, 'f=index.htm&amp;as=admin_general_keywords_start&amp;ae=admin_general_keywords_end'), //cpg1.4
  array('Luba pluginad', 'enable_plugins', 12, 'f=index.htm&amp;as=admin_general_enable-plugins&amp;ae=admin_general_enable-plugins_end'),  //cpg1.4
  array('Luba mitte-marssruuditavate (privaatsete) IP-aadressite pagendamine', 'ban_private_ip', 1,  'f=index.htm&amp;as=admin_general_private-ip&amp;ae=admin_general_private-ip_end'), //cpg1.4
  array('Lehitsetav hulgilisamise liides', 'browse_batch_add', 1, 'f=index.htm&amp;as=admin_general_browsable_batch_add&amp;ae=admin_general_browsable_batch_add_end'), //cpg1.4

  'Keele &amp; märgistiku seaded',
  array('Keel', 'lang', 5, 'f=index.htm&amp;as=admin_language_language&amp;ae=admin_language_language_end'), //cpg1.4
  array('Kui fraasi tõlget ei leitud, näita seda inglise keeles', 'language_fallback', 1, 'f=index.htm&amp;as=admin_language_fallback&amp;ae=admin_language_fallback_end'), //cpg1.4
  array('Märgistiku kodeering', 'charset', 4, 'f=index.htm&amp;as=admin_language_charset&amp;ae=admin_language_charset_end'), //cpg1.4
  array('Näita keelte nimekirja', 'language_list', 1, 'f=index.htm&amp;as=admin_language_list&amp;ae=admin_language_list_end'), //cpg1.4
  array('Näita keeltele vastavaid lippe', 'language_flags', 8, 'f=index.htm&amp;as=admin_language_flags&amp;ae=admin_language_flags_end&amp;top=1'), //cpg1.4
  array('Näita keelevaliku juures nuppu &quot;Lähtesta&quot;', 'language_reset', 1, 'f=index.htm&amp;as=admin_language_reset&amp;ae=admin_language_reset_end&amp;top=1'), //cpg1.4
  //array('Näita kaartidega lehtedel nuppe &quot;Eelmine/Järgmine&quot;', 'previous_next_tab', 1), //cpg1.4

  'Kujunduse seaded',
  array('Kujundus', 'theme', 6, 'f=index.htm&amp;as=admin_theme_theme&amp;ae=admin_theme_theme_end'), //cpg1.4
  array('Näita kujunduste nimekirja', 'theme_list', 1, 'f=index.htm&amp;as=admin_theme_theme_list&amp;ae=admin_theme_theme_list_end'), //cpg1.4
  array('Näita kujundusevaliku juures nuppu &quot;Lähtesta&quot;', 'theme_reset', 1, 'f=index.htm&amp;as=admin_theme_theme_reset&amp;ae=admin_theme_theme_reset_end'), //cpg1.4
  array('Näita linki KKK juurde', 'display_faq', 1, 'f=index.htm&amp;as=admin_theme_faq&amp;ae=admin_theme_faq_end'), //cpg1.4
  array('Kohandatud lingi nimi menüüs', 'custom_lnk_name', 0,'f=index.htm&amp;as=admin_theme_custom_lnk_name&amp;ae=admin_theme_custom_lnk_name_end'), //cpg1.4
  array('Kohandatud lingi URL menüüs', 'custom_lnk_url', 0,'f=index.htm&amp;as=admin_language_custom_lnk_url&amp;ae=admin_language_custom_lnk_url_end'), //cpg1.4
  array('Näita BB-koodi abi', 'show_bbcode_help', 1, 'f=index.htm&amp;as=admin_theme_bbcode&amp;ae=admin_theme_bbcode_end&amp;top=1'), //cpg1.4
  array('Näita XHTML ja CSS standarditele vastavate teemade puhul &quot;uhkeldamisplokki&quot;','vanity_block',1, 'f=index.htm&amp;as=vanity_block&amp;ae=vanity_block_end'), //cpg1.4
  array('Kohandatud päise tee', 'custom_header_path', 0, 'f=index.htm&amp;as=admin_theme_include_path_start&amp;ae=admin_theme_include_path_end'), //cpg1.4
  array('Kohandatud jaluse tee', 'custom_footer_path', 0, 'f=index.htm&amp;as=admin_theme_include_path_start&amp;ae=admin_theme_include_path_end'), //cpg1.4

  'Albuminimekirja vaade',
  array('Põhitabeli laius (px või %)', 'main_table_width', 0, 'f=index.htm&amp;as=admin_album_table-width&amp;ae=admin_album_table-width_end'), //cpg1.4
  array('Näidatavate kategooriatasemete arv', 'subcat_level', 0, 'f=index.htm&amp;as=admin_album_category-levels&amp;ae=admin_album_category-levels_end'), //cpg1.4
  array('Näidatavate albumite arv', 'albums_per_page', 0, 'f=index.htm&amp;as=admin_album_number&amp;ae=admin_album_number_end'), //cpg1.4
  array('Tulpade arv albuminimekirjas', 'album_list_cols', 0, 'f=index.htm&amp;as=admin_album_columns&amp;ae=admin_album_columns_end'), //cpg1.4
  array('Pisipiltide suurus pikslites', 'alb_list_thumb_size', 0, 'f=index.htm&amp;as=admin_album_thumbnail-size&amp;ae=admin_album_thumbnail-size_end'), //cpg1.4
  array('Pealehe sisu', 'main_page_layout', 0, 'f=index.htm&amp;as=admin_album_list_content&amp;ae=admin_album_list_content_end'), //cpg1.4
  array('Näita kategooriates esimese taseme albumi pisipilte','first_level',1, 'f=index.htm&amp;as=admin_album_first-level_thumbs&amp;ae=admin_album_first-level_thumbs_end'), //cpg1.4
  array('Sorteeri kategooriad tähestiku järgi (kohandatud järjekorra asemel)','categories_alpha_sort',1, 'f=index.htm&amp;as=admin_album_list_alphasort_start&amp;ae=admin_album_list_alphasort_end'), //cpg1.4
  array('Näita lingitud failide arvu','link_pic_count',1, 'f=index.htm&amp;as=admin_album_linked_files_start&amp;ae=admin_album_linked_files_end'), //cpg1.4

  'Pisipildivaade',
  array('Tulpade arv pisipiltide lehel', 'thumbcols', 0, 'f=index.htm&amp;as=admin_thumbnail_columns&amp;ae=admin_thumbnail_columns_end'), //cpg1.4
  array('Ridade arv pisipiltide lehel', 'thumbrows', 0, 'f=index.htm&amp;as=admin_thumbnail_rows&amp;ae=admin_thumbnail_rows_end'), //cpg1.4
  array('Näidatavate kaartide suurim arv', 'max_tabs', 10, 'f=index.htm&amp;as=admin_thumbnail_tabs&amp;ae=admin_thumbnail_tabs_end'), //cpg1.4
  array('Näita pisipildi all faili pealdist (lisaks pealkirjale)', 'caption_in_thumbview', 1, 'f=index.htm&amp;as=admin_thumbnail_display_caption&amp;ae=admin_thumbnail_display_caption_end'), //cpg1.4
  array('Näita pisipildi all vaatamiste arvu', 'views_in_thumbview', 1, 'f=index.htm&amp;as=admin_thumbnail_display_views&amp;ae=admin_thumbnail_display_views_end'), //cpg1.4
  array('Näita pisipildi all kommentaaride arvu', 'display_comment_count', 1, 'f=index.htm&amp;as=admin_thumbnail_display_comments&amp;ae=admin_thumbnail_display_comments_end'), //cpg1.4
  array('Näita pisipildi all üleslaadija nime', 'display_uploader', 1, 'f=index.htm&amp;as=admin_thumbnail_display_uploader&amp;ae=admin_thumbnail_display_uploader_end'), //cpg1.4
  //array('Näita pisipildi all admin-üleslaadijate nime', 'display_admin_uploader', 1, 'f=index.htm&amp;as=admin_thumbnail_display_admin_uploader&amp;ae=admin_thumbnail_display_admin_uploader_end'), //cpg1.4
  array('Näita pisipildi all faili nime', 'display_filename', 1, 'f=index.htm&amp;as=admin_thumbnail_display_filename&amp;ae=admin_thumbnail_display_filename_end'), //cpg1.4
  //array('Näita albumi kirjeldust', 'alb_desc_thumb', 1, 'f=index.htm&amp;as=admin_thumbnail_display_description&amp;ae=admin_thumbnail_display_description_end'), //cpg1.4
  array('Failide vaikimisi sorteerimisjärjestus', 'default_sort_order', 3, 'f=index.htm&amp;as=admin_thumbnail_default_sortorder&amp;ae=admin_thumbnail_default_sortorder_end'), //cpg1.4
  array('Vähim häälte arv, millega fail saab esineda &quot;Kõrgeimalt hinnatud&quot; nimekirjas', 'min_votes_for_rating', 0, 'f=index.htm&amp;as=admin_thumbnail_minimum_votes&amp;ae=admin_thumbnail_minimum_votes_end'), //cpg1.4

  'Pildivaade', //cpg1.4
  array('Tabeli laius faili näitamiseks (px või %)', 'picture_table_width', 0, 'f=index.htm&amp;as=admin_image_comment_table-width&amp;ae=admin_image_comment_table-width_end'), //cpg1.4
  array('Failiinfo vaikimisi nähtaval', 'display_pic_info', 1, 'f=index.htm&amp;as=admin_image_comment_info_visible&amp;ae=admin_image_comment_info_visible_end'), //cpg1.4
  array('Pildi kirjelduse suurim pikkus', 'max_img_desc_length', 0, 'f=index.htm&amp;as=admin_image_comment_descr_length&amp;ae=admin_image_comment_descr_length_end'), //cpg1.4
  array('Tähemärkide suurim arv sõnas', 'max_com_wlength', 0, 'f=index.htm&amp;as=admin_image_comment_chars_per_word&amp;ae=admin_image_comment_chars_per_word_end'), //cpg1.4
  array('Näita filmiriba', 'display_film_strip', 1, 'f=index.htm&amp;as=admin_image_comment_filmstrip_toggle&amp;ae=admin_image_comment_filmstrip_toggle_end'), //cpg1.4
  array('Näita filmiriba pisipiltide all failinimesid', 'display_film_strip_filename', 1, 'f=index.htm&amp;as=admin_image_comment_display_film_strip_filename&amp;ae=admin_image_comment_display_film_strip_filename_end'), //cpg1.4
  array('Elementide arv filmiribas', 'max_film_strip_items', 0, 'f=index.htm&amp;as=admin_image_comment_filmstrip_number&amp;ae=admin_image_comment_filmstrip_number_end'), //cpg1.4
  array('Slaidiseansi vaheaeg millisekundites (1 s = 1000 ms)', 'slideshow_interval', 0, 'f=index.htm&amp;as=admin_image_comment_slideshow_interval&amp;ae=admin_image_comment_slideshow_interval_end'), //cpg1.4

  'Kommentaaride seaded', //cpg1.4
  array('Filtreeri kommentaaridest inetud sõnad', 'filter_bad_words', 1, 'f=index.htm&amp;as=admin_image_comment_bad_words&amp;ae=admin_image_comment_bad_words_end'), //cpg1.4
  array('Luba smailid kommentaarides', 'enable_smilies', 1, 'f=index.htm&amp;as=admin_image_comment_smilies&amp;ae=admin_image_comment_smilies_end'), //cpg1.4
  array('Luba sama kasutaja poolt mitu järjestikust kommentaari ühele failile (ehk keela uputuskaitse)', 'disable_comment_flood_protect', 1, 'f=index.htm&amp;as=admin_image_comment_flood&amp;ae=admin_image_comment_flood_end'), //cpg1.4
  array('Ridade suurim arv kommentaaris', 'max_com_lines', 0, 'f=index.htm&amp;as=admin_image_comment_lines&amp;ae=admin_image_comment_lines_end'), //cpg1.4
  array('Kommentaari suurim lubatud pikkus', 'max_com_size', 0, 'f=index.htm&amp;as=admin_image_comment_length&amp;ae=admin_image_comment_length_end'), //cpg1.4
  array('Teavita kommentaaridest e-posti teel administraatorit', 'email_comment_notification', 1, 'f=index.htm&amp;as=admin_image_comment_admin_notify&amp;ae=admin_image_comment_admin_notify_end'), //cpg1.4
  array('Kommentaaride sorteerimisjärjekord', 'comments_sort_descending', 17, 'f=index.htm&amp;as=admin_comment_sort_start&amp;ae=admin_comment_sort_end'), //cpg1.4
  array('Anonüümsete kommenteerijate nime eesliide', 'comments_anon_pfx', 0, 'f=index.htm&amp;as=comments_anon_pfx&amp;ae=comments_anon_pfx_end'), //cpg1.4

  'Failide ja pisipiltide seaded',
  array('JPEG-failide kvaliteet', 'jpeg_qual', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_jpeg_quality&amp;ae=admin_picture_thumbnail_jpeg_quality_end'), //cpg1.4
  array('Pisipildi suurim lubatud mõõde <a href="#notice2" class="clickable_option">**</a>', 'thumb_width', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max-dimension&amp;ae=admin_picture_thumbnail_max-dimension_end'), //cpg1.4
  array('Kasutatav mõõde (laius, kõrgus või suurim kuvasuhe pisipildi jaoks) <a href="#notice2" class="clickable_option">**</a>', 'thumb_use', 7, 'f=index.htm&amp;as=admin_picture_thumbnail_use-dimension&amp;ae=admin_picture_thumbnail_use-dimension_end'), //cpg1.4 paha tõlge - "suurim kuvasuhe" (max aspect) on kahtlane
  array('Loo vahepealsed pildid','make_intermediate',1, 'f=index.htm&amp;as=admin_picture_thumbnail_intermediate_toggle&amp;ae=admin_picture_thumbnail_intermediate_toggle_end'), //cpg1.4
  array('Vahepealse pildi/video suurim lubatud laius või kõrgus <a href="#notice2" class="clickable_option">**</a>', 'picture_width', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_intermediate_dimension&amp;ae=admin_picture_thumbnail_intermediate_dimension_end'), //cpg1.4
  array('Üleslaaditud failide suurim lubatud maht (KB)', 'max_upl_size', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max_upload_size&amp;ae=admin_picture_thumbnail_max_upload_size_end'), //cpg1.4
  array('Üleslaaditud piltide/videode suurim lubatud laius või kõrgus (px)', 'max_upl_width_height', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max_upload_dimension&amp;ae=admin_picture_thumbnail_max_upload_dimension_end'), //cpg1.4
  array('Vähenda lubatust laiemad või kõrgemad pildid automaatselt', 'auto_resize', 16, 'f=index.htm&amp;as=admin_picture_thumbnail_auto-resize&amp;ae=admin_picture_thumbnail_auto-resize_end'), //cpg1.4

  'Failide ja pisipiltide lisaseaded',
  array('Albumid võivad olla privaatsed (märkus: selle keelamisel muutuvad praegused privaatsed albumid avalikuks)', 'allow_private_albums', 1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_private_toggle&amp;ae=admin_picture_thumb_advanced_private_toggle_end'), //cpg1.4
  array('Näita privaatalbumite ikoone sisselogimata kasutajatele','show_private',1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_private_icon_show&amp;ae=admin_picture_thumb_advanced_private_icon_show_end'), //cpg1.4
  array('Failinimedes keelatud märgid', 'forbiden_fname_char',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_filename_forbidden_chars&amp;ae=admin_picture_thumb_advanced_filename_forbidden_chars_end'), //cpg1.4
  //array('Vastuvõetavad faililaiendid üleslaaditud piltidele', 'allowed_file_extensions',0, 'f=index.htm&amp;as=&amp;ae=_end'), //cpg1.4
  array('Lubatud pildivormingud', 'allowed_img_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_pic_extensions&amp;ae=admin_picture_thumb_advanced_pic_extensions_end'), //cpg1.4
  array('Lubatud videovormingud', 'allowed_mov_types',0, 'f=index.htm&amp;as=admin_thumbs_advanced_movie&amp;ae=admin_thumbs_advanced_movie_end'), //cpg1.4
  array('Automaatkäivitus videode esitamisel', 'media_autostart',1, 'f=index.htm&amp;as=admin_movie_autoplay&amp;ae=admin_movie_autoplay_end'), //cpg1.4
  array('Lubatud audiovormingud', 'allowed_snd_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_audio_extensions&amp;ae=admin_picture_thumb_advanced_audio_extensions_end'), //cpg1.4
  array('Lubatud dokumendivormingud', 'allowed_doc_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_doc_extensions&amp;ae=admin_picture_thumb_advanced_doc_extensions_end'), //cpg1.4
  array('Piltide suuruse muutmise meetod','thumb_method',2, 'f=index.htm&amp;as=admin_picture_thumb_advanced_resize_method&amp;ae=admin_picture_thumb_advanced_resize_method_end'), //cpg1.4
  array('Tee ImageMagick\'u utiliidi &quot;convert&quot; juurde (nt /usr/bin/X11/)', 'impath', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_im_path&amp;ae=admin_picture_thumb_advanced_im_path_end'), //cpg1.4
  //array('Lubatud pildivormingud (kehtib ainult ImageMagick\'ule)', 'allowed_img_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_allowed_imagetypes&amp;ae=admin_picture_thumb_advanced_allowed_imagetypes_end'), //cpg1.4
  array('Käsurea võtmed ImageMagick\'ule', 'im_options', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_im_commandline&amp;ae=admin_picture_thumb_advanced_im_commandline_end'), //cpg1.4
  array('Loe JPEG-failidest EXIF-andmed', 'read_exif_data', 13, 'f=index.htm&amp;as=admin_picture_thumb_advanced_exif&amp;ae=admin_picture_thumb_advanced_exif_end'), //cpg1.4
  array('Loe JPEG-failidest IPTC-andmed', 'read_iptc_data', 1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_iptc&amp;ae=admin_picture_thumb_advanced_iptc_end'), //cpg1.4
  array('Albumikataloog <a href="#notice1" class="clickable_option">*</a>', 'fullpath', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_albums_dir&amp;ae=admin_picture_thumb_advanced_albums_dir_end'), //cpg1.4
  array('Kasutajafailide kataloog <a href="#notice1" class="clickable_option">*</a>', 'userpics', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_userpics_dir&amp;ae=admin_picture_thumb_advanced_userpics_dir_end'), //cpg1.4
  array('Vahepealsete piltide eesliide <a href="#notice1" class="clickable_option">*</a>', 'normal_pfx', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_intermediate_prefix&amp;ae=admin_picture_thumb_advanced_intermediate_prefix_end'), //cpg1.4
  array('Pisipiltide eesliide <a href="#notice1" class="clickable_option">*</a>', 'thumb_pfx', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_thumbs_prefix&amp;ae=admin_picture_thumb_advanced_thumbs_prefix_end'), //cpg1.4
  array('Kataloogide vaikimisi mood', 'default_dir_mode', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_chmod_folder&amp;ae=admin_picture_thumb_advanced_chmod_folder_end'), //cpg1.4
  array('Failide vaikimisi mood', 'default_file_mode', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_chmod_files&amp;ae=admin_picture_thumb_advanced_chmod_files_end'), //cpg1.4

  'Kasutajaseaded',
  array('Luba uute kasutajate registreerumine', 'allow_user_registration', 1, 'f=index.htm&amp;as=admin_allow_registration&amp;ae=admin_allow_registration_end'), //cpg1.4
  array('Luba sisselogimata kasutajate (anonüümsete või külaliste) juurdepääs', 'allow_unlogged_access', 1, 'f=index.htm&amp;as=admin_allow_unlogged_access&amp;ae=admin_allow_unlogged_access_end'), //cpg1.4
  array('Nõua registreerumisel e-posti aadressi tõestamist', 'reg_requires_valid_email', 1, 'f=index.htm&amp;as=admin_registration_verify&amp;ae=admin_registration_verify_end'), //cpg1.4
  array('Teavita kasutajate registreerumisest e-posti teel administraatorit', 'reg_notify_admin_email', 1, 'f=index.htm&amp;as=admin_registration_notify&amp;ae=admin_registration_notify_end'), //cpg1.4
  array('Registreerumiste aktiveerimine administraatori poolt', 'admin_activation', 1, 'f=index.htm&amp;as=admin_activation&amp;ae=admin_activation_end'),  //cpg1.4
  array('Luba kahel kasutajal sama e-posti aadressi kasutamine', 'allow_duplicate_emails_addr', 1, 'f=index.htm&amp;as=admin_allow_duplicate_emails_addr&amp;ae=admin_allow_duplicate_emails_addr_end'), //cpg1.4
  array('Teavita heakskiitu ootavatest üleslaadimistest e-posti teel administraatorit', 'upl_notify_admin_email', 1, 'f=index.htm&amp;as=admin_approval_notify&amp;ae=admin_approval_notify_end'), //cpg1.4
  array('Luba sisselogitud kasutajatel liikmete nimekirja vaadata', 'allow_memberlist', 1, 'f=index.htm&amp;as=admin_user_memberlist&amp;ae=admin_user_memberlist_end'), //cpg1.4
  array('Luba kasutajatel profiilis oma e-posti aadressi muuta', 'allow_email_change', 1, 'f=index.htm&amp;as=admin_user_allow_email_change&amp;ae=admin_user_allow_email_change_end'), //cpg1.4
  array('Luba kasutajatel säilitada kontroll avalikes galeriides olevate oma piltide üle', 'users_can_edit_pics', 1, 'f=index.htm&amp;as=admin_user_editpics_public_start&amp;ae=admin_user_editpics_public_end'), //cpg1.4
  array('Ebaõnnestunud sisselogimiskatsete arv enne ajutist pagendamist (vältimaks &quot;toore jõu&quot; meetodil rünnakuid)', 'login_threshold', 0, 'f=index.htm&amp;as=admin_user_login_start&amp;ae=admin_user_login_end'), //cpg1.4
  array('Ajutise pagendamise kestus (minutites) pärast ebaõnnestunud sisselogimisi', 'login_expiry', 0, 'f=index.htm&amp;as=admin_user_login_start&amp;ae=admin_user_login_end'), //cpg1.4
  array('Luba administraatorile teatamine', 'report_post', 1, 'f=index.htm&amp;as=admin_user_enable_report&amp;ae=admin_user_enable_report_end'),  //cpg1.4

// custom profile fields,  //cpg1.4
  'Kohandatavad väljad kasutajaprofiilides (jäta tühjaks, kui ei kasutata)', //cpg1.4
  array('Välja nr 1 nimi', 'user_profile1_name', 0, 'f=index.htm&amp;as=admin_custom&amp;ae=admin_custom_end'), //cpg1.4
  array('Välja nr 2 nimi', 'user_profile2_name', 0), //cpg1.4
  array('Välja nr 3 nimi', 'user_profile3_name', 0), //cpg1.4
  array('Välja nr 4 nimi', 'user_profile4_name', 0), //cpg1.4
  array('Välja nr 5 nimi', 'user_profile5_name', 0), //cpg1.4
  array('Välja nr 6 nimi (pika sissekande, nt eluloo jaoks)', 'user_profile6_name', 0), //cpg1.4

  'Kohandatavad väljad pildikirjeldusteks (jäta tühjaks, kui ei kasutata)',
  array('Välja nr 1 nimi', 'user_field1_name', 0, 'f=index.htm&amp;as=admin_custom_image&amp;ae=admin_custom_image_end'), //cpg1.4
  array('Välja nr 2 nimi', 'user_field2_name', 0),
  array('Välja nr 3 nimi', 'user_field3_name', 0),
  array('Välja nr 4 nimi', 'user_field4_name', 0),

  'Küpsiseseaded',
  array('Küpsise nimi', 'cookie_name', 0, 'f=index.htm&amp;as=admin_cookie_name&amp;ae=admin_cookie_name_end'), //cpg1.4
  array('Küpsise tee', 'cookie_path', 0, 'f=index.htm&amp;as=admin_cookie_path&amp;ae=admin_cookie_path_end'), //cpg1.4

  'E-posti seaded (tavaliselt pole vaja siin midagi muuta; jäta kõik väljad tühjaks, kui pole kindel)', //cpg1.4
  array('SMTP host (kui tühi, kasutatakse sendmail\'i)', 'smtp_host', 0, 'f=index.htm&amp;as=admin_email&amp;ae=admin_email_end'), //cpg1.4
  array('SMTP kasutajanimi', 'smtp_username', 0), //cpg1.4
  array('SMTP parool', 'smtp_password', 0), //cpg1.4

  'Logimine ja statistika', //cpg1.4
  array('Logimisrežiim <a href="#notice3" class="clickable_option">***</a>', 'log_mode', 11, 'f=index.htm&amp;as=admin_logging_log_mode&amp;ae=admin_logging_log_mode_end'), //cpg1.4
  array('Logi e-kaarte', 'log_ecards', 1, 'f=index.htm&amp;as=admin_general_log_ecards&amp;ae=admin_general_log_ecards_end'), //cpg1.4
  array('Säilita üksikasjalik hääletamise statistika','vote_details',1, 'f=index.htm&amp;as=admin_logging_votedetails&amp;ae=admin_logging_votedetails_end'), //cpg1.4
  array('Säilita üksikasjalik vaatamiste statistika','hit_details',1, 'f=index.htm&amp;as=admin_logging_hitdetails&amp;ae=admin_logging_hitdetails_end'), //cpg1.4

  'Hooldusseaded', //cpg1.4
  array('Luba silumisrežiim', 'debug_mode', 9, 'f=index.htm&amp;as=debug_mode&amp;ae=debug_mode_end'), //cpg1.4
  array('Näita silumisrežiimis märkusi', 'debug_notice', 1, 'f=index.htm&amp;as=admin_misc_debug_notices&amp;ae=admin_misc_debug_notices_end'), //cpg1.4
  array('Galerii on kättesaamatu', 'offline', 1, 'f=index.htm&amp;as=admin_general_offline&amp;ae=admin_general_offline_end'), //cpg1.4
);


// ------------------------------------------------------------------------- //
// File db_ecard.php
// ------------------------------------------------------------------------- //

if (defined('DB_ECARD_PHP')) $lang_db_ecard_php = array(
  'title' => 'Saadetud e-kaardid',
  'ecard_sender' => 'Saatja',
  'ecard_recipient' => 'Saaja',
  'ecard_date' => 'Saatmise aeg',
  'ecard_display' => 'Näita e-kaarti',
  'ecard_name' => 'Nimi',
  'ecard_email' => 'E-post',
  'ecard_ip' => 'IP-aadress',
  'ecard_ascending' => 'tõusvalt',
  'ecard_descending' => 'laskuvalt',
  'ecard_sorted' => 'sorteeritud',
  'ecard_by_date' => 'kuupäeva järgi',
  'ecard_by_sender_name' => 'saatja nime järgi',
  'ecard_by_sender_email' => 'saatja e-posti järgi',
  'ecard_by_sender_ip' => 'saatja IP-aadressi järgi',
  'ecard_by_recipient_name' => 'saaja nime järgi',
  'ecard_by_recipient_email' => 'saaja e-posti järgi',
  'ecard_number' => 'Näidatakse kirjeid %s kuni %s, kokku %s.',
  'ecard_goto_page' => 'Mine lehele',
  'ecard_records_per_page' => 'Kirjeid lehel: ',
  'check_all' => 'Märgi kõik',
  'uncheck_all' => 'Eemalda märgistus kõigilt',
  'ecards_delete_selected' => 'Kustuta märgitud e-kaardid',
  'ecards_delete_confirm' => 'Oled kindel, et tahad need kustutada? (Tee linnuke.)',
  'ecards_delete_sure' => 'Olen kindel',
);


// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
  'empty_name_or_com' => 'Sa pead sisestama oma nime ja kommentaari.',
  'com_added' => 'Sinu kommentaar on lisatud.',
  'alb_need_title' => 'Sa pead määrama albumile nime.',
  'no_udp_needed' => 'Uuendamist pole vaja.',
  'alb_updated' => 'Album on uuendatud.',
  'unknown_album' => 'Valitud albumit kas pole olemas või pole sul õigust seda täiendada.',
  'no_pic_uploaded' => 'Ühtegi faili üles ei laaditud.<br /><br />Kui tõepoolest ikka valisid faili, mis üles laadida, kontrolli, et server lubaks failide üleslaadimist...',
  'err_mkdir' => 'Kataloogi %s loomine ebaõnnestus.',
  'dest_dir_ro' => 'Skriptil pole võimalik sihtkataloogi %s kirjutada.',
  'err_move' => '%s liigutamine asukohta %s on võimatu.',
  'err_fsize_too_large' => 'Üleslaaditud pilt on liiga suur (lubatud on kuni %s x %s).', //obsolete since cpg1.3 - consider removal in cpg1.4 once upload.php has been overhauled
  'err_imgsize_too_large' => 'Üleslaaditud fail on liiga suur (lubatud on kuni %s KB).', //obsolete since cpg1.3 - consider removal in cpg1.4 once upload.php has been overhauled
  'err_invalid_img' => 'Üleslaaditud fail pole sobiv pilt.',
  'allowed_img_types' => 'Üles laadida saad vaid %s pilte.',
  'err_insert_pic' => 'Faili &quot;%s&quot; pole võimalik albumisse lisada ',
  'upload_success' => 'Fail edukalt üles laaditud..<br /><br />Nähtavaks muutub see pärast administraatori heakskiitu.',
  'notify_admin_email_subject' => '%s - üleslaadimisteavitus',
  'notify_admin_email_body' => '%s laadis üles pildi, mis ootab heakskiitu. Vt %s',
  'info' => 'Teade',
  'com_added' => 'Kommentaar lisatud.',
  'alb_updated' => 'Album uuendatud.',
  'err_comment_empty' => 'Su kommentaar on tühi.',
  'err_invalid_fext' => 'Lubatud on ainult järgnevate laienditega failid: <br /><br />%s',
  'no_flood' => 'Vabandust, aga sa oled juba viimase selle faili kommentaari autor.<br /><br />Muuda postitatud kommentaari, kui tahad midagi parandada.',
  'redirect_msg' => 'Sind suunatakse ümber.<br /><br /><br />Kui lehte automaatselt ei uuendata, klõpsa &quot;Jätka&quot;.',
  'upl_success' => 'Fail edukalt lisatud.',
  'email_comment_subject' => 'Kommentaar Coppermine\'i galeriis',
  'email_comment_body' => 'Keegi on sinu galeriisse kommentaari postitanud. Vaata seda siit:',
  'album_not_selected' => 'Albumit pole valitud', //cpg1.4
  'com_author_error' => 'Seda nime juba kasutab üks registreeritud kasutaja; logi sisse või vali uus nimi.', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
  'caption' => 'Pealdis',
  'fs_pic' => 'Täissuuruses pilt',
  'del_success' => 'Edukalt kustutatud',
  'ns_pic' => 'Normaalsuuruses pilt',
  'err_del' => 'Kustutamine pole võimalik.',
  'thumb_pic' => 'Pisipilt',
  'comment' => 'Kommentaar',
  'im_in_alb' => 'Pilt albumis',
  'alb_del_success' => 'Album &quot;%s&quot; kustutatud', //cpg1.4
  'alb_mgr' => 'Albumihaldus',
  'err_invalid_data' => 'Vigased andmed asukohas &quot;%s&quot;.',
  'create_alb' => 'Albumi &quot;%s&quot; loomine...',
  'update_alb' => 'Uuendamine: album &quot;%s&quot; pealkirjaga &quot;%s&quot; ja indeksiga &quot;%s&quot;',
  'del_pic' => 'Kustuta fail',
  'del_alb' => 'Kustuta album',
  'del_user' => 'Kustuta kasutaja',
  'err_unknown_user' => 'Valitud kasutajat pole olemas.',
  'err_empty_groups' => 'Grupitabelit pole või on see tühi.', //cpg1.4
  'comment_deleted' => 'Kommentaar edukalt kustutatud.',
  'npic' => 'Pilt', //cpg1.4
  'pic_mgr' => 'Pildihaldus', //cpg1.4
  'update_pic' => 'Uuendamine: pilt &quot;%s&quot; failinimega &quot;%s&quot; ja indeksiga &quot;%s&quot;', //cpg1.4
  'username' => 'Kasutajanimi', //cpg1.4
  'anonymized_comments' => '%s kommentaar(i) anonüümseks muudetud', //cpg1.4
  'anonymized_uploads' => '%s avalik(ku) üleslaadimine(-st) anonüümseks muudetud', //cpg1.4
  'deleted_comments' => '%s kommentaar(i) kustutatud', //cpg1.4
  'deleted_uploads' => '%s avalik(ku) üleslaadimine(-st) kustutatud', //cpg1.4
  'user_deleted' => 'Kasutaja %s kustutatud', //cpg1.4
  'activate_user' => 'Aktiveeri kasutaja konto', //cpg1.4
  'user_already_active' => 'Konto on juba aktiivne', //cpg1.4
  'activated' => 'Aktiveeritud', //cpg1.4
  'deactivate_user' => 'Deaktiveeri kasutaja konto', //cpg1.4
  'user_already_inactive' => 'Konto on juba mitteaktiivne', //cpg1.4
  'deactivated' => 'Deaktiveeritud', //cpg1.4
  'reset_password' => 'Lähtesta parool(id)', //cpg1.4
  'password_reset' => 'Parool lähtestatud kujule %s', //cpg1.4
  'change_group' => 'Muuda esmast gruppi', //cpg1.4
  'change_group_to_group' => 'Muutmine: %s -&gt; %s', //cpg1.4
  'add_group' => 'Lisa teisene grupp', //cpg1.4
  'add_group_to_group' => 'Kasutaja %s lisamine gruppi %s. Ta on nüüd esmaselt %s ja teiseselt %s kasutajagrupi liige.', //cpg1.4
  'status' => 'Olek', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File displayecard.php
// ------------------------------------------------------------------------- //

if (defined('DISPLAYECARD_PHP')) {

$lang_displayecard_php = array(
  'invalid_data' => 'Sinu meiliklient rikkus e-kaardi andmed, millele püüad juurde pääseda. Vaata, et link oleks terviklik.', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File displayimage.php
// ------------------------------------------------------------------------- //

if (defined('DISPLAYIMAGE_PHP')){

$lang_display_image_php = array(
  'confirm_del' => 'Oled kindel, et tahad selle faili kustutada? \\nKustutatakse ka kommentaarid.', //js-alert
  'del_pic' => 'Kustuta see fail',
  'size' => '%s x %s pikslit',
  'views' => '%s korda',
  'slideshow' => 'Slaidiseanss',
  'stop_slideshow' => 'Peata slaidiseanss',
  'view_fs' => 'Klõpsa pildi vaatamiseks täissuuruses',
  'edit_pic' => 'Faili info muutmine', //cpg1.4
  'crop_pic' => 'Kärpimine ja pööramine',
  'set_player' => 'Vaheta mängijat',
);

$lang_picinfo = array(
  'title' =>'Faili info',
  'Filename' => 'Faili nimi',
  'Album name' => 'Albumi nimi',
  'Rating' => 'Hinnang (%s häälega)',
  'Keywords' => 'Märksõnad',
  'File Size' => 'Faili suurus',
  'Date Added' => 'Lisamise aeg', //cpg1.4
  'Dimensions' => 'Mõõtmed',
  'Displayed' => 'Näidatud',
  'URL' => 'URL', //cpg1.4
  'Make' => 'Kaamera valmistaja', //cpg1.4
  'Model' => 'Kaamera mudel', //cpg1.4
  'DateTime' => 'Aeg', //cpg1.4
  'ISOSpeedRatings'=>'ISO', //cpg1.4
  'MaxApertureValue' => 'Suurim ava', //cpg1.4
  'FocalLength' => 'Fookuskaugus', //cpg1.4
  'Comment' => 'Kommentaar',
  'addFav'=>'Lisa lemmikutesse',
  'addFavPhrase'=>'Lemmikud',
  'remFav'=>'Eemalda lemmikutest',
  'iptcTitle'=>'IPTC pealkiri',
  'iptcCopyright'=>'IPTC autoriõigus',
  'iptcKeywords'=>'IPTC märksõnad',
  'iptcCategory'=>'IPTC kategooria',
  'iptcSubCategories'=>'IPTC alamkategooria',
  'ColorSpace' => 'Värviruum', //cpg1.4
  'ExposureProgram' => 'Säriprogramm', //cpg1.4
  'Flash' => 'Välk', //cpg1.4
  'MeteringMode' => 'Mõõterežiim', //cpg1.4
  'ExposureTime' => 'Säriaeg', //cpg1.4
  'ExposureBiasValue' => 'Särinihe', //cpg1.4
  'ImageDescription' => ' Pildi kirjeldus', //cpg1.4
  'Orientation' => 'Orientatsioon', //cpg1.4
  'xResolution' => 'X eraldusvõime', //cpg1.4; paha tõlge? jj
  'yResolution' => 'Y eraldusvõime', //cpg1.4
  'ResolutionUnit' => 'Eraldusvõime ühik', //cpg1.4
  'Software' => 'Tarkvara', //cpg1.4
  'YCbCrPositioning' => 'YCbCrPositioning', //cpg1.4; paha "tõlge" jj
  'ExifOffset' => 'EXIF offset', //cpg1.4
  'IFD1Offset' => 'IFD1 offset', //cpg1.4
  'FNumber' => 'F-arv', //cpg1.4
  'ExifVersion' => 'EXIF-i versioon', //cpg1.4
  'DateTimeOriginal' => 'Originaali aeg', //cpg1.4
  'DateTimedigitized' => 'Digiteerimise aeg', //cpg1.4
  'ComponentsConfiguration' => 'Komponentide seadistus', //cpg1.4
  'CompressedBitsPerPixel' => 'Tihendatud bitte piksli kohta', //cpg1.4
  'LightSource' => 'Valgusallikas', //cpg1.4
  'ISOSetting' => 'ISO seade', //cpg1.4
  'ColorMode' => 'Värvirežiim', //cpg1.4
  'Quality' => 'Kvaliteet', //cpg1.4
  'ImageSharpening' => 'Pildi teravdamine', //cpg1.4
  'FocusMode' => 'Fookusrežiim', //cpg1.4
  'FlashSetting' => 'Välguseade', //cpg1.4
  'ISOSelection' => 'ISO valik', //cpg1.4
  'ImageAdjustment' => 'Pildi täppishäälestus', //cpg1.4
  'Adapter' => 'Adapter', //cpg1.4
  'ManualFocusDistance' => 'Käsitsi fookuskaugus', //cpg1.4; paha tõlge
  'DigitalZoom' => 'Digisuum', //cpg1.4
  'AFFocusPosition' => 'AF fookusasend', //cpg1.4
  'Saturation' => 'Küllastus', //cpg1.4
  'NoiseReduction' => 'Müravähendus', //cpg1.4
  'FlashPixVersion' => 'Flash Pix\'i versioon', //cpg1.4
  'ExifImageWidth' => 'EXIF-i pildi laius', //cpg1.4
  'ExifImageHeight' => 'EXIF-i pildi kõrgus', //cpg1.4
  'ExifInteroperabilityOffset' => 'EXIF-i koostalitlusvõime offset', //cpg1.4; paha tõlge
  'FileSource' => 'Faili allikas', //cpg1.4
  'SceneType' => 'Stseeni tüüp', //cpg1.4
  'CustomerRender' => 'Kohandatud renderdamine', //cpg1.4
  'ExposureMode' => 'Särirežiim', //cpg1.4
  'WhiteBalance' => 'Valgetasakaal', //cpg1.4
  'DigitalZoomRatio' => 'Digisuurendus', //cpg1.4
  'SceneCaptureMode' => 'Stseenihõiverežiim', //cpg1.4
  'GainControl' => 'Signaali kohandamine', //cpg1.4
  'Contrast' => 'Kontrastsus', //cpg1.4
  'Sharpness' => 'Teravus', //cpg1.4
  'ManageExifDisplay' => 'EXIF-kuva haldus', //cpg1.4
  'submit' => 'Sisesta', //cpg1.4
  'success' => 'Info edukalt uuendatud.', //cpg1.4
  'details' => 'Üksikasjad', //cpg1.4
);

$lang_display_comments = array(
  'OK' => 'OK',
  'edit_title' => 'Muuda kommentaari',
  'confirm_delete' => 'Oled kindel, et tahad selle kommentaari kustutada?', //js-alert
  'add_your_comment' => 'Lisa oma kommentaar',
  'name'=>'Nimi',
  'comment'=>'Kommentaar',
  'your_name' => 'Anonüümne',
  'report_comment_title' => 'Teavita sellest kommentaarist administraatorit', //cpg1.4
);

$lang_fullsize_popup = array(
  'click_to_close' => 'Akna sulgemiseks klõpsa pildil',
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
  'title' => 'E-kaardi saatmine',
  'invalid_email' => '<font color="red"><b>Hoiatus</b></font>: vigasel kujul e-postiaadress', //cpg1.4
  'ecard_title' => '%s saatis sulle e-kaardi',
  'error_not_image' => 'E-kaardina saab saata ainult pilte.',
  'view_ecard' => 'Alternatiivne link puhuks, kui e-kaarti ei näidata korralikult', //cpg1.4
  'view_ecard_plaintext' => 'E-kaardi vaatamiseks kopeeri oma veebilehitseja aadressiribale see URL:', //cpg1.4
  'view_more_pics' => 'Vaata rohkem pilte', //cpg1.4
  'send_success' => 'E-kaart saadetud.',
  'send_failed' => 'Vabandust, kuid serveril pole võimalik sinu e-kaarti saata...',
  'from' => 'Saatja',
  'your_name' => 'Sinu nimi',
  'your_email' => 'Sinu e-postiaadress',
  'to' => 'Saaja',
  'rcpt_name' => 'Saaja nimi',
  'rcpt_email' => 'Saaja e-postiaadress',
  'greetings' => 'Pealkiri', //cpg1.4
  'message' => 'Sõnum', //cpg1.4
  'ecards_footer' => 'Saatis %s IP-aadressilt %s galerii aja järgi %s', //cpg1.4
  'preview' => 'E-kaardi eelvaade', //cpg1.4
  'preview_button' => 'Eelvaade', //cpg1.4
  'submit_button' => 'Saada e-kaart', //cpg1.4
  'preview_view_ecard' => 'Sellest saab alternatiivne link, kui e-kaart valmis on. Eelvaate jaoks see ei tööta.', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File report_file.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('REPORT_FILE_PHP') || defined('DISPLAYREPORT_PHP')) $lang_report_php =array(
  'title' => 'Administraatorile teatamine', //cpg1.4
  'invalid_email' => '<b>Hoiatus</b>: vigasel kujul e-postiaadress.', //cpg1.4
  'report_subject' => '%s teavitab galerii %s kohta', //cpg1.4
  'view_report' => 'Alternatiivne link puhuks, kui teavitust ei näidata korralikult', //cpg1.4
  'view_report_plaintext' => 'Teavituse vaatamiseks kopeeri oma veebilehitseja aadressiribale see URL:', //cpg1.4
  'view_more_pics' => 'Galerii', //cpg1.4
  'send_success' => 'Teavitus saadetud.', //cpg1.4
  'send_failed' => 'Vabandust, kuid serveril pole võimalik teavitust saata.', //cpg1.4
  'from' => 'Saatja', //cpg1.4
  'your_name' => 'Sinu nimi', //cpg1.4
  'your_email' => 'Sinu e-postiaadress', //cpg1.4
  'to' => 'Saaja', //cpg1.4
  'administrator' => 'Administraator/moderaator', //cpg1.4
  'subject' => 'Teema', //cpg1.4
  'comment_field_name' => 'Kasutaja &quot;%s&quot; kommentaarist teavitamine', //cpg1.4
  'reason' => 'Põhjus', //cpg1.4
  'message' => 'Sõnum', //cpg1.4
  'report_footer' => 'Saatis %s IP-aadressilt %s galerii aja järgi %s', //cpg1.4
  'obscene' => 'Ropp', //cpg1.4
  'offensive' => 'Solvav', //cpg1.4
  'misplaced' => 'Teemast mööda/vales kohas', //cpg1.4
  'missing' => 'Kadunud', //cpg1.4
  'issue' => 'Vigane/ei näidata', //cpg1.4
  'other' => 'Muu', //cpg1.4
  'refers_to' => 'Vastumeelne fail', //cpg1.4
  'reasons_list_heading' => 'Teavitamise põhjus(ed)', //cpg1.4
  'no_reason_given' => 'Põhjust ei märgitud', //cpg1.4
  'go_comment' => 'Mine kommentaari juurde', //cpg1.4
  'view_comment' => 'Vaata täielikku teavitust koos kommentaariga', //cpg1.4
  'type_file' => 'fail', //cpg1.4
  'type_comment' => 'kommentaar', //cpg1.4
  'invalid_data' => 'Sinu meiliklient rikkus teavituse andmed, millele püüad juurde pääseda. Vaata, et link oleks terviklik.', //cpg1.4

);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
  'pic_info' => 'Faili info',
  'album' => 'Album',
  'title' => 'Pealkiri',
  'filename' => 'Failinimi', //cpg1.4
  'desc' => 'Kirjeldus',
  'keywords' => 'märksõnad',
  'new_keyword' => 'uus märksõna', //cpg1.4
  'new_keywords' => 'Leitud uued märksõnad', //cpg1.4
  'existing_keyword' => 'Olemasolev märksõna', //cpg1.4
  'pic_info_str' => '%s &times; %s - %s KB - %s vaatamist - %s hindamist',
  'approve' => 'Kiida fail heaks',
  'postpone_app' => 'Lükka heakskiit edasi',
  'del_pic' => 'Kustuta fail',
  'del_all' => 'Kustuta kõik failid', //cpg1.4
  'read_exif' => 'Loe EXIF-info uuesti',
  'reset_view_count' => 'Lähtesta vaatamisloendur',
  'reset_all_view_count' => 'Lähtesta kõik vaatamisloendurid', //cpg1.4
  'reset_votes' => 'Lähtesta hinnangud',
  'reset_all_votes' => 'Lähtesta kõik hinnangud', //cpg1.4
  'del_comm' => 'Kustuta kommentaarid',
  'del_all_comm' => 'Kustuta kõik kommentaarid', //cpg1.4
  'upl_approval' => 'Üleslaadimise heakskiit', //cpg1.4
  'edit_pics' => 'Muuda faile',
  'see_next' => 'Vaata järgmisi faile',
  'see_prev' => 'Vaata eelmisi faile',
  'n_pic' => '%s faili',
  'n_of_pic_to_disp' => 'Näidatavate failide arv',
  'apply' => 'Rakenda muudatused',
  'crop_title' => 'Coppermine\'i pildiredaktor',
  'preview' => 'Eelvaade',
  'save' => 'Salvesta pilt',
  'save_thumb' =>'Salvesta pisipildina',
  'gallery_icon' => 'Tee sellest minu ikoon', //cpg1.4
  'sel_on_img' =>'Valik peab olema täielikult pildil.', //js-alert
  'album_properties' =>'Albumi omadused', //cpg1.4
  'parent_category' =>'Emakategooria', //cpg1.4
  'thumbnail_view' =>'Pisipildivaade', //cpg1.4
  'select_unselect' =>'Vali kõik/mitte ükski', //cpg1.4
  'file_exists' => 'Sihtfail &quot;%s&quot; on juba olemas.', //cpg1.4
  'rename_failed' => 'Faili &quot;%s&quot; ümbernimetamine &quot;%s&quot;-ks ebaõnnestus.', //cpg1.4
  'src_file_missing' => 'Lähtefail &quot;%s&quot; on kadunud.', // cpg 1.4
  'mime_conv' => 'Faili teisendamine %s-st %s-ks pole võimalik',//cpg1.4
  'forb_ext' => 'Keelatud faililaiend.',//cpg1.4
);

// ------------------------------------------------------------------------- //
// File faq.php
// ------------------------------------------------------------------------- //

if (defined('FAQ_PHP')) $lang_faq_php = array(
  'faq' => 'Korduma kippuvad küsimused',
  'toc' => 'Sisukord',
  'question' => '',
  'answer' => '',
);

if (defined('FAQ_PHP')) $lang_faq_data = array(
  'Üld-KKK',
  array('Miks ma registreeruma pean?', 'Registreerumise nõude võib kehtestada administraator. Registreerumine annab kasutajale lisavõimalusi, nt piltide üleslaadimine, lemmikute nimekiri, hindamine, kommenteerimine jne.', 'allow_user_registration', '1'),
  array('Kuidas ma registreeruda saan?', 'Vajuta &quot;Registreeru&quot; ja täida kohustuslikud väljad (kui tahad, siis mittekohustuslikud ka).<br />Kui administraator on sisselülitanud e-postiga aktiveerimise, siis kui oled oma info sisestanud, peaksid saama sisestatud aadressile e-kirja, milles on juhised konto aktiveerimiseks. Sisselogimiseks peab konto olema aktiveeritud.', 'allow_user_registration', '1'), //cpg1.4
  array('Kuidas ma sisse login?', 'Klõpsa &quot;Logi sisse&quot;, sisesta oma kasutajanimi ja parool ning kui tahad, et sa ei peaks iga kord sisse logima, märgi ruut &quot;Mäleta mind&quot;.<br /><b>Tähtis: &quot;Mäleta mind&quot; töötab vaid siis, kui veebilehitsejas on küpsised lubatud ja selle saidi küpsist ära ei kustutata.</b>', 'offline', 0),
  array('Miks ma sisse logida ei saa?', 'Kas sa registreerusid ja klõpsasid lingil, mis sulle e-kirjaga saadeti? See link aktiveerib sinu konto. Muude sisselogimist puudutavate probleemidega pöördu saidi administraatori poole.', 'offline', 0),
  array('Mis juhtub, kui ma oma parooli ära unustan?', 'Kui saidil on link &quot;Unustasin parooli&quot;, siis kasuta seda. Muul juhul pöördu uue parooli saamiseks saidi administraatori poole.', 'offline', 0),
  //array('Mis juhtub, kui ma oma e-postiaadressi vahetan?', 'Lihtsalt logi sisse ja muuda oma e-postiaadress lehel &quot;Profiil&quot;.', 'offline', 0),
  array('Kuidas pildi &quot;Minu lemmikute&quot; alla salvestada saab?', 'Klõpsa esiteks pildil ja seejärel lingil &quot;Pildi info&quot; (<img src="images/info.gif" width="16" height="16" border="0" alt="Pildi info" />); keri lehte allapoole pildi infoni ja klõpsa &quot;Lisa lemmikutesse&quot;.<br />Administraator võib olla sisselülitanud pildi info vaikimisi näitamise.<br />Tähtis: selle funktsiooni töötamiseks peavad küpsised olema lubatud ja selle saidi küpsist ei tohi ära kustutada.', 'offline', 0),
  array('Kuidas faili hinnata saab?', 'Klõpsa pisipildil, keri lehe lõpuni ja vali hinnang.', 'offline', 0),
  array('Kuidas pilti kommenteerida saab?', 'Klõpsa pisipildil, keri lehe lõpuni ja kirjuta oma kommentaar.', 'offline', 0),
  array('Kuidas faili üles laadida saab?', 'Klõpsa lingil &quot;Lisa fail&quot; ja vali album, kuhu tahad faili üles laadida. Klõpsa &quot;Vali&quot; (&quot;Sirvi&quot;, &quot;Lehitse&quot;, &quot;<i>Browse</i>&quot;, ...), otsi välja soovitud fail ja vajuta &quot;Ava&quot;. Kui tahad, lisa pealkiri ja kirjeldus. Klõpsa &quot;Sisesta&quot;.<br /><br /><b>Windows XP</b> kasutajad võivad failide otseteed oma albumisse üleslaadimiseks kasutada XP veebi publitseerimise viisardit.<br />Täpsemad juhised ja vajaliku registrifaili saad <a href="xp_publish.php">siit</a>.', 'allow_private_albums', 1), //cpg1.4
  array('Kuhu pilt üles laadida tuleb?', 'Sa saad faile üles laadida mõnesse oma albumitest &quot;Minu galerii&quot; all. Administraator võib ka olla lubanud failide üleslaadimise mõnesse albumisse avalikus galeriis.', 'allow_private_albums', 0),
  array('Mis tüüpi ja kui suuri faile võib üles laadida?', 'Lubatud suuruse ja tüübid (JPG, PNG jne) määrab administraator.', 'offline', 0),
  array('Kuidas saab luua, ümber nimetada või kustutada &quot;Minu galerii&quot; all oleva albumi?', 'Alustuseks pead olema &quot;Admin-režiimis&quot;.<br />Klõpsa &quot;Loo ja telli albumeid&quot; ja seejärel &quot;Uus&quot;. Muuda &quot;uus album&quot; soovitud nimeks.<br />Albumite nime saad muuta oma galeriis.<br />Klõpsa &quot;Rakenda muudatused&quot;.', 'allow_private_albums', 0),
  array('Kuidas saab muuta ja piirata, kes mu albumeid vaadata võib?', 'Alustuseks pead olema &quot;Admin-režiimis&quot;.<br />Klõpsa &quot;Muuda mu albumeid&quot;. Ribal &quot;Uuenda albumit&quot; vali album, mida tahad muuta.<br />Seejärel saad muuta nime, kirjeldust, pisipilti, piirata vaatamise ja kommenteerimise/hindamise õigust.<br />Klõpsa &quot;Uuenda albumit&quot;.', 'allow_private_albums', 0),
  array('Kuidas teiste kasutajate galeriisid vaadata saab?', 'Klõpsa lingil &quot;Albumite nimekiri&quot; ja vali &quot;Kasutajate galeriid&quot;.', 'allow_private_albums', 0),
  array('Mis on küpsised?', 'Küpsised on väiksed tekstifailid, mida veebisaidid sinu arvutisse salvestavad.<br />Tavaliselt seisneb küpsiste roll selles, et kasutaja ei pea saidilt lahkudes hiljem uuesti sisse logima.', 'offline', 0),
  array('Kust ma selle programmi enda saidile ka saan?', 'Coppermine on vaba multimeediagalerii, avaldatud GNU GPL litsentsi all. See on võimalusi täis ja porditud mitmetele platvormidele. Rohkem infot ja allalaadimisvõimaluse leiad <a href="http://coppermine.sf.net/">Coppermine\'i kodulehelt</a>.', 'offline', 0),

  'Saidil liikumine',
  array('Mis on &quot;Albumite nimekiri&quot;?', 'See funktsioon näitab kogu kategooriat, kus kasutaja parajasti asub, linkidega albumite juurde. Kui kasutaja ei asu üheski kategoorias, näidatakse kogu galeriid, linkidega kategooriate juurde. Lingiks võib olla pisipilt.', 'offline', 0),
  array('Mis on &quot;Minu galerii&quot;?', 'See funktsioon võimaldab kasutajatel luua omaenda galeriisid ning lisada, kustutada või muuta albumeid ja neisse faile üles laadida.', 'allow_private_albums', 1), //cpg1.4
  array('Mis vahe on &quot;Admin-režiimil&quot; ja &quot;Kasutajarežiimil&quot;?', 'Administratiivrežiimis saab kasutaja seadistada oma galeriid (kui administraator lubanud on, siis ka teisi).', 'allow_private_albums', 0),
  array('Mis on &quot;Lisa fail&quot;?', 'See funktsioon võimaldab kasutajal laadida kas tema enda või administraatori poolt valitud galeriisse üles faili (lubatud suuruse ja tüübid on määranud saidi administraator.', 'allow_private_albums', 0),
  array('Mis on &quot;Viimati lisatud&quot;?', 'See funktsioon näitab viimasena tehtud üleslaadimisi.', 'offline', 0),
  array('Mis on &quot;Viimased kommentaarid&quot;?', 'See funktsioon näitab viimaseid kommentaare koos vastavate failidega.', 'offline', 0),
  array('Mis on &quot;Enimvaadatud&quot;?', 'See funktsioon näitab faile, mida on kõige rohkem vaadatud (nii sisselogitud kasutajate kui külaliste poolt).', 'offline', 0),
  array('Mis on &quot;Kõrgeimalt hinnatud&quot;?', 'See funktsioon näitab kõige kõrgema keskmise hinnanguga faile (kui nt viis kasutajat andsid failile igaüks <img src="images/rating3.gif" width="65" height="14" border="0" alt="" />, siis on faili keskmine hinnang <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> ; kui viis kasutajat annavad failile hinnangud 1, 2, 3, 4, 5, siis on keskmine hinnang samuti <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> .)<br />Hinnangud on <img src="images/rating5.gif" width="65" height="14" border="0" alt="Parim" /> (parim) kuni <img src="images/rating0.gif" width="65" height="14" border="0" alt="Kehvim" /> (kehvim).', 'offline', 0),
  array('Mis on &quot;Minu lemmikud&quot;?', 'See funktsioon võimaldab kasutajal hoida lemmikutefaili arvutisse salvestatud küpsises.', 'offline', 0),
);


// ------------------------------------------------------------------------- //
// File forgot_passwd.php
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) $lang_forgot_passwd_php = array(
  'forgot_passwd' => 'Parooli meeldetuletus',
  'err_already_logged_in' => 'Sa oled juba sisselogitud.',
  'enter_email' => 'Sisesta oma e-postiaadress', //cpg1.4
  'submit' => 'Sisesta',
  'illegal_session' => 'Unustatud parooli seanss sobimatu või aegunud.', //cpg1.4
  'failed_sending_email' => 'Parooli meeldetuletuse e-kirja saatmine pole võimalik.',
  'email_sent' => 'Sinu kasutajanime ja uue parooliga e-kiri saadeti aadressile %s', //cpg1.4
  'verify_email_sent' => 'Aadressile %s saadeti e-kiri. Palun vaata oma postkasti, et protseduur lõpuni viia.', //cpg1.4
  'err_unk_user' => 'Valitud kasutajat pole olemas.',
  'account_verify_subject' => '%s - uue parooli taotlus', //cpg1.4
  'account_verify_body' => 'Sa taotlesid uut parooli. Kui soovid seda endiselt, siis uus parool saadetakse sulle, kui klõpsad järgneval lingil:

%s', //cpg1.4
  'passwd_reset_subject' => '%s - uus parool', //cpg1.4
  'passwd_reset_body' => 'Siin on soovitud uus parool:
Kasutajanimi: %s
Parool: %s
Sisselogimiseks klõpsa %s.', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
  'group_name' => 'Grupp', //cpg1.4
  'permissions' => 'Õigused', //cpg1.4
  'public_albums' => 'Avalikesse albumitesse üleslaadimine', //cpg1.4
  'personal_gallery' => 'Personaalne galerii', //cpg1.4
  'upload_method' => 'Üleslaadimise meetod', //cpg1.4
  'disk_quota' => 'Kettalimiit', //cpg1.4
  'rating' => 'Hindamine', //cpg1.4
  'ecards' => 'E-kaardid', //cpg1.4
  'comments' => 'Kommenteerimine', //cpg1.4
  'allowed' => 'Lubatud', //cpg1.4
  'approval' => 'Vaja heakskiitu', //cpg1.4
  'boxes_number' => 'Kastide arv', //cpg1.4
  'variable' => 'Muudetav', //cpg1.4
  'fixed' => 'Fikseeritud', //cpg1.4
  'apply' => 'Rakenda muudatused',
  'create_new_group' => 'Loo uus grupp',
  'del_groups' => 'Kustuta valitud grupid',
  'confirm_del' => 'Hoiatus: kui kustutad grupi, viiakse sinna kuulunud kasutajad üle gruppi &quot;Registreeritud&quot;.\n\nKas tahad jätkata?', //js-alert
  'title' => 'Kasutajagruppide haldus',
  'num_file_upload' => 'Failide üleslaadimise kaste', //cpg1.4
  'num_URI_upload' => 'URI üleslaadimise kaste', //cpg1.4
  'reset_to_default' => 'Lähtesta vaikimisi nimele (%s) - soovitatav!', //cpg1.4
  'error_group_empty' => 'Grupitabel oli tühi.<br /><br />Loodi vaikimisi grupid, palun värskenda seda lehte.', //cpg1.4
  'explain_greyed_out_title' => 'Miks see rida hall on?', //cpg1.4
  'explain_guests_greyed_out_text' => 'Sa ei saa selle grupi omadusi muuta, sest seadistuses on valiku &quot;Luba sisselogimata kasutajate (anon&uuml;&uuml;msete või k&uuml;laliste) juurdep&auml;&auml;s&quot; v&auml;&auml;rtuseks m&auml;&auml;ratud &quot;Ei&quot;. K&uuml;lalised (grupi %s liikmed) ei saa teha midagi peale sisselogimise; niisiis grupiseaded neile ei kehti.', //cpg1.4
  'explain_banned_greyed_out_text' => 'Sa ei saa grupi %s omadusi muuta, sest selle liikmetel ei ole niikuinii lubatud midagi teha.', //cpg1.4
  'group_assigned_album' => 'Omistatud album(id)', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
  'welcome' => 'Tere!',
);

$lang_album_admin_menu = array(
  'confirm_delete' => 'Oled kindel, et tahad selle albumi kustutada?? \\nKõik failid ja kommentaarid selles kustutatakse samuti.', //js-alert
  'delete' => 'Kustuta',
  'modify' => 'Omadused',
  'edit_pics' => 'Muuda faile',
);

$lang_list_categories = array(
  'home' => 'Kodu',
  'stat1' => '<b>[pictures]</b> faili <b>[albums]</b> albumis ja <b>[cat]</b> kategoorias <b>[comments]</b> kommentaariga, vaadatud <b>[views]</b> korda',
  'stat2' => '<b>[pictures]</b> faili <b>[albums]</b> albumis, vaadatud <b>[views]</b> korda',
  'xx_s_gallery' => '%s: galerii',
  'stat3' => '<b>[pictures]</b> faili <b>[albums]</b> albumis <b>[comments]</b> kommentaariga, vaadatud <b>[views]</b> korda',
);

$lang_list_users = array(
  'user_list' => 'Kasutajate nimekiri',
  'no_user_gal' => 'Kasutajate galeriisid pole.',
  'n_albums' => '%s album(it)',
  'n_pics' => '%s faili',
);

$lang_list_albums = array(
  'n_pictures' => '%s faili',
  'last_added' => ', viimane lisatud %s',
  'n_link_pictures' => '%s lingitud faili', //cpg1.4
  'total_pictures' => 'Kokku %s faili', //cpg1.4
);

}

// ------------------------------------------------------------------------- //
// File keywordmgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('KEYWORDMGR_PHP')) $lang_keywordmgr_php = array(
  'title' => 'Märksõnade haldus', //cpg1.4
  'edit' => 'Muuda', //cpg1.4
  'delete' => 'Kustuta', //cpg1.4
  'search' => 'Otsi', //cpg1.4
  'keyword_test_search' => 'Otsi märksõna %s uues aknas', //cpg1.4
  'keyword_del' => 'Kustuta märksõna %s', //cpg1.4
  'confirm_delete' => 'Oled kindel, et tahad kustutada märksõna %s tervest galeriist?', //cpg1.4  // js-alert
  'change_keyword' => 'Muuda märksõna', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
  'login' => 'Logi sisse',
  'enter_login_pswd' => 'Sisselogimiseks sisesta oma kasutajanimi ja parool',
  'username' => 'Kasutajanimi',
  'password' => 'Parool',
  'remember_me' => 'Mäleta mind',
  'welcome' => 'Tere, %s...',
  'err_login' => '*** Sisselogimine ebaõnnestus. Proovi uuesti ***',
  'err_already_logged_in' => 'Sa oled juba sisselogitud.',
  'forgot_password_link' => 'Unustasin parooli',
  'cookie_warning' => 'Hoiatus: su veebilehitseja ei võta skripti küpsiseid vastu.', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
  'logout' => 'Väljalogimine',
  'bye' => 'Nägemist, %s...',
  'err_not_loged_in' => 'Sa pole sisselogitud!',
);

// ------------------------------------------------------------------------- //
// File minibrowser.php  //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('MINIBROWSER_PHP')) $lang_minibrowser_php = array(
  'close' => 'Sulge', //cpg1.4
  'submit' => 'OK', //cpg1.4
  'up' => 'Taseme võrra üles', //cpg1.4
  'current_path' => 'Praegune tee', //cpg1.4
  'select_directory' => 'Palun vali kataloog', //cpg1.4
  'click_to_close' => 'Selle akna sulgemiseks klõpsa pildil',
);

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
  'upd_alb_n' => 'Albumi %s omadused',
  'general_settings' => 'Üldseaded',
  'alb_title' => 'Albumi pealkiri',
  'alb_cat' => 'Albumi kategooria',
  'alb_desc' => 'Albumi kirjeldus',
  'alb_keyword' => 'Albumi märksõna', //cpg1.4
  'alb_thumb' => 'Albumi pisipilt',
  'alb_perm' => 'Õigused selles albumis',
  'can_view' => 'Albumit võib vaadata',
  'can_upload' => 'Külastajad tohivad faile üles laadida',
  'can_post_comments' => 'Külastajad tohivad kommenteerida',
  'can_rate' => 'Külastajad tohivad faile hinnata',
  'user_gal' => 'Kasutajagalerii',
  'no_cat' => '* Kategooriat pole *',
  'alb_empty' => 'Album on tühi',
  'last_uploaded' => 'Viimati üleslaaditud',
  'public_alb' => 'Igaüks (avalik album)',
  'me_only' => 'Ainult mina',
  'owner_only' => 'Ainult albumi omanik (%s)',
  'groupp_only' => 'Grupi &quot;%s&quot; iga liige',
  'err_no_alb_to_modify' => 'Andmebaasis pole ühtegi albumit, mida sa muuta saad.',
  'update' => 'Uuenda albumit',
  'reset_album' => 'Lähtesta album', //cpg1.4
  'reset_views' => 'Nulli albumi %s vaatamiste loendur', //cpg1.4
  'reset_rating' => 'Tühista albumis %s kõikide failide hinnangud', //cpg1.4
  'delete_comments' => 'Kustuta albumist %s kõik kommentaarid', //cpg1.4
  'delete_files' => '%sPöördumatult%s kustuta kõik failid albumis %s', //cpg1.4
  'views' => 'vaatamist', //cpg1.4
  'votes' => 'häält', //cpg1.4
  'comments' => 'kommentaari', //cpg1.4
  'files' => 'faili', //cpg1.4
  'submit_reset' => 'Lähtesta', //cpg1.4
  'reset_views_confirm' => 'Olen kindel', //cpg1.4
  'notice1' => '(*) sõltub %sgrupi%s seadetest',  //cpg1.4 //(do not translate %s!)
  'alb_password' => 'Albumi parool', //cpg1.4
  'alb_password_hint' => 'Albumi parooli vihje', //cpg1.4
  'edit_files' =>'Muuda faile', //cpg1.4
  'parent_category' =>'Emakategooria', //cpg1.4
  'thumbnail_view' =>'Pisipildivaade', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File phpinfo.php
// ------------------------------------------------------------------------- //

if (defined('PHPINFO_PHP')) $lang_phpinfo_php = array(
  'php_info' => 'PHP info',
  'explanation' => 'Sellise väljundi genereeris PHP-funktsioon <a href="http://www.php.net/phpinfo">phpinfo()</a>, näidatuna Coppermine\'i sees (piirates teksti paremal küljel).',
  'no_link' => 'Oma phpinfo teistele näitamine võib olla turvarisk, seepärast on see leht nähtav vaid siis, kui oled administraatorina sisselogitud. Sa ei saa selle lehe linki teiste jaoks postitada, neile keelatakse juurdepääs.',
);

// ------------------------------------------------------------------------- //
// File picmgr.php //cpg1.4
// ------------------------------------------------------------------------- //
if (defined('PICMGR_PHP')) $lang_picmgr_php = array(
  'pic_mgr' => 'Pildihaldur', //cpg1.4
  'select_album' => 'Vali album', //cpg1.4
  'delete' => 'Kustuta', //cpg1.4
  'confirm_delete1' => 'Oled kindel, et tahad selle pildi kustutada?', //cpg1.4
  'confirm_delete2' => '\nPilt kustutatakse jäädavalt.', //cpg1.4
  'apply_modifs' => 'Rakenda muudatused', //cpg1.4
  'confirm_modifs' => 'Kinnita muudatused', //cpg1.4
  'pic_need_name' => 'Pildil peab olema nimi!', //cpg1.4
  'no_change' => 'Sa ei muutnud midagi.', //cpg1.4
  'no_album' => '* Albumit pole *', //cpg1.4
  'explanation_header' => 'Siin määratud kohandatud sorteerimisjärjestust arvestatakse ainult juhul, kui', //cpg1.4
  'explanation1' => 'administraator on määranud seadetes &quot;Failide vaikimisi järjestuse&quot; väärtuseks &quot;Asukoht laskuvalt&quot; või &quot;Asukoht tõusvalt&quot; (kehtib kõigile kasutajatele, kes pole ise muud sorteerimismeetodit määranud)', //cpg1.4
  'explanation2' => 'kasutaja on pisipiltide lehel valinud &quot;Asukoht laskuvalt&quot; või &quot;Asukoht tõusvalt&quot; (kehtib individuaalselt)', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File pluginmgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('PLUGINMGR_PHP')){

$lang_pluginmgr_php = array(
  'confirm_uninstall' => 'Oled kindel, et tahad selle plugina kasutusest eemaldada?', //cpg1.4
  'confirm_delete' => 'Oled kindel, et tahad selle plugina kustutada?', //cpg1.4
  'pmgr' => 'Pluginahaldur', //cpg1.4
  'name' => 'Nimi', //cpg1.4
  'author' => 'Autor', //cpg1.4
  'desc' => 'Kirjeldus', //cpg1.4
  'vers' => 'v', //cpg1.4
  'i_plugins' => 'Paigaldatud pluginad', //cpg1.4
  'n_plugins' => 'Paigaldamata pluginad', //cpg1.4
  'none_installed' => 'Ühtegi pole paigaldatud', //cpg1.4
  'operation' => 'Toiming', //cpg1.4
  'not_plugin_package' => 'Üleslaaditud fail pole pluginapakett.', //cpg1.4
  'copy_error' => 'Tekkis viga paketi kopeerimisel pluginakataloogi.', //cpg1.4
  'upload' => 'Laadi üles', //cpg1.4
  'configure_plugin' => 'Plugina seaded', //cpg1.4
  'cleanup_plugin' => 'Plugina puhastamine', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
  'already_rated' => 'Vabandust, aga sa oled seda pilti juba hinnanud.',
  'rate_ok' => 'Hääl arvestatud.',
  'forbidden' => 'Iseenda faile ei saa hinnata.',
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
Kuigi {SITE_NAME} haldajad püüavad ebasobiva materjali võimalikult kiiresti eemaldada või seda toimetada, on siiski võimatu kõike kontrollida. Seega teadvustad sa, et kõik postitused sellel saidil väljendavad nende autorite vaateid ja seisukohti, mitte aga saidi administraatorite või veebimeistri omi (v.a nende endi postituste korral), seega ei peeta neid vastutavaks.<br />
<br />
Sa lubad, et ei postita materjali, mis on kuritahtlik, rõve, vulgaarne, laimav, vaenuõhutav, ähvardav, seksuaalse suunitlusega või kehtivate seadustega vastuolus. Sa oled nõus, et saidi {SITE_NAME} veebimeistril, administraatoril ja moderaatoritel on õigus igal ajal oma parema äranägemise järgi sisu eemaldada või muuta. Kasutajana oled nõus, et ülalsisestatud infot hoitakse andmebaasis. Ehkki seda ei avaldata ilma sinu nõusolekuta kolmandatele osapooltele, ei saa veebimeistrit ega administraatorit pidada vastutavaks, kui võimaliku rünnaku käigus info lekkima peaks.<br />
<br />
See sait kasutab küpsiseid, et sinu arvutis infot hoida. Selle ainus eesmärk on kasutusmugavuse suurendamine. E-postiaadressi kasutatakse ainult registreerumise kinnitamiseks ja parooli saatmiseks.<br />
<br />
Klõpsates &quot;Nõus&quot;, lubad käituda vastavalt ülalkirjeldatud reeglitele.
EOT;

$lang_register_php = array(
  'page_title' => 'Kasutajaks registreerumine',
  'term_cond' => 'Reeglid ja tingimused',
  'i_agree' => 'Nõus',
  'submit' => 'Sisesta',
  'err_user_exists' => 'Sellise nimega kasutaja on juba olemas, palun vali teistsugune.',
  'err_password_mismatch' => 'Paroolid ei kattu, palun sisesta uuesti.',
  'err_uname_short' => 'Kasutajanimi peab olema vähemalt 2 märgi pikkune.',
  'err_password_short' => 'Parool peab olema vähemalt 2 märgi pikkune.',
  'err_uname_pass_diff' => 'Kasutajanimi ja parool peavad olema erinevad.',
  'err_invalid_email' => 'E-postiaadress on vigane.',
  'err_duplicate_email' => 'Sellise e-postiaadressiga kasutaja on juba olemas.',
  'enter_info' => 'Sisesta registreerimisinfo',
  'required_info' => 'Kohustuslik',
  'optional_info' => 'Vabatahtlik',
  'username' => 'Kasutajanimi',
  'password' => 'Parool',
  'password_again' => 'Parool uuesti',
  'email' => 'E-post',
  'location' => 'Asukoht',
  'interests' => 'Huvid',
  'website' => 'Koduleht',
  'occupation' => 'Amet',
  'error' => 'Viga',
  'confirm_email_subject' => '%s - registreerumiskinnitus',
  'information' => 'Info',
  'failed_sending_email' => 'Registreerumiskinnituse e-kirja saatmine pole võimalik.',
  'thank_you' => 'Aitäh, et registreerusid.<br /><br />Kiri juhistega konto aktiveerimiseks saadeti antud e-postiaadressile.',
  'acct_created' => 'Sinu konto on loodud ja sa saad nüüd oma kasutajanime ja parooliga sisse logida',
  'acct_active' => 'Sinu konto on nüüd aktiivne ja sa saad oma kasutajanime ja parooliga sisse logida',
  'acct_already_act' => 'Konto on juba aktiivne!', //cpg1.4
  'acct_act_failed' => 'Selle konto aktiveerimine pole võimalik.',
  'err_unk_user' => 'Valitud kasutajat pole olemas!',
  'x_s_profile' => '%s - profiil',
  'group' => 'Grupp',
  'reg_date' => 'Liitunud',
  'disk_usage' => 'Kettakasutus',
  'change_pass' => 'Muuda parool',
  'current_pass' => 'Praegune parool',
  'new_pass' => 'Uus parool',
  'new_pass_again' => 'Uus parool veelkord',
  'err_curr_pass' => 'Praegune parool on vale.',
  'apply_modif' => 'Rakenda muudatused',
  'change_pass' => 'Muuda mu parool',
  'update_success' => 'Profiil uuendatud',
  'pass_chg_success' => 'Parool muudetud',
  'pass_chg_error' => 'Parooli ei muudetud',
  'notify_admin_email_subject' => '%s - registreerumisteatis',
  'last_uploads' => 'Viimati üles laaditud fail.<br />Klõpsa, et näha kõike, mille on üles laadinud', //cpg1.4
  'last_comments' => 'Viimane kommentaar.<br />Klõpsa, et näha kõiki kommentaare, mille autor on', //cpg1.4
  'notify_admin_email_body' => 'Uus kasutaja, "%s", on sinu galeriis registreerunud',
  'pic_count' => 'Üleslaaditud faile', //cpg1.4
  'notify_admin_request_email_subject' => '%s - registreerumistaotlus', //cpg1.4
  'thank_you_admin_activation' => 'Aitäh.<br /><br />Taotlus sinu konto aktiveerimiseks saadeti administraatorile. Heakskiidu korral saadetakse sulle e-kiri.', //cpg1.4
  'acct_active_admin_activation' => 'Konto on nüüd aktiivne ja kasutajale saadeti seda teatav e-kiri.', //cpg1.4
  'notify_user_email_subject' => '%s - aktiveerimisteatis', //cpg1.4
);

$lang_register_confirm_email = <<<EOT
Aitäh, et registreerusid saidil {SITE_NAME}

Oma konto aktiveerimiseks kasutajanimega "{USER_NAME}" klõpsa alloleval lingil või kopeeri see oma veebilehitseja aadressiribale.

<a href="{ACT_LINK}">{ACT_LINK}</a>

Tervitades,

{SITE_NAME} haldajad

EOT;

$lang_register_approve_email = <<<EOT
Sinu galeriis registreerus uus kasutaja, "{USER_NAME}".

Tema konto aktiveerimiseks klõpsa alloleval lingil või kopeeri see oma veebilehitseja aadressiribale.

<a href="{ACT_LINK}">{ACT_LINK}</a>

EOT;

$lang_register_activated_email = <<<EOT
Sinu konto on heaks kiidetud ja aktiveeritud.

Saad nüüd lehel <a href="{SITE_LINK}">{SITE_LINK}</a> kasutajanimega "{USER_NAME}" sisse logida.


Tervitades,

{SITE_NAME} haldajad

EOT;
}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
  'title' => 'Kommentaaride ülevaatamine',
  'no_comment' => 'Pole ühtegi ülevaatust vajavat kommentaari.',
  'n_comm_del' => '%s kommentaar(i) valitud',
  'n_comm_disp' => 'Näidatavate kommentaaride arv',
  'see_prev' => 'Vaata eelmist',
  'see_next' => 'Vaata järgmist',
  'del_comm' => 'Kustuta valitud kommentaarid',
  'user_name' => 'Nimi', //cpg1.4
  'date' => 'Kuupäev', //cpg1.4
  'comment' => 'Kommentaar', //cpg1.4
  'file' => 'Fail', //cpg1.4
  'name_a' => 'Kasutajanimi tõusvalt', //cpg1.4
  'name_d' => 'Kasutajanimi laskuvalt', //cpg1.4
  'date_a' => 'Kuupäev tõusvalt', //cpg1.4
  'date_d' => 'Kuupäev laskuvalt', //cpg1.4
  'comment_a' => 'Kommentaari sisu tõusvalt', //cpg1.4
  'comment_d' => 'Kommentaari sisu laskuvalt', //cpg1.4
  'file_a' => 'Fail tõusvalt', //cpg1.4
  'file_d' => 'Fail laskuvalt', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File search.php                                                           //
// ------------------------------------------------------------------------- //


if (defined('SEARCH_PHP')){

$lang_search_php = array(
  'title' => 'Otsing failikogus', //cpg1.4
  'submit_search' => 'Otsi', //cpg1.4
  'keyword_list_title' => 'Märksõnade nimekiri', //cpg1.4
  'keyword_msg' => 'Ülalolev loend pole täielik. See ei hõlma sõnu piltide pealkirjadest ega kirjeldustest. Proovi täistekstiotsingut.',  //cpg1.4
  'edit_keywords' => 'Muuda märksõnu', //cpg1.4
  'search in' => 'Otsitakse:', //cpg1.4
  'ip_address' => 'IP-aadress', //cpg1.4
  'fields' => 'Otsitakse väljadelt', //cpg1.4
  'age' => 'Vanus', //cpg1.4
  'newer_than' => 'uuem kui', //cpg1.4
  'older_than' => 'vanem kui', //cpg1.4
  'days' => 'päeva', //cpg1.4
  'all_words' => 'Sobima peavad kõik sõnad (NING)', //cpg1.4
  'any_words' => 'Sobima peab mõni sõna (VÕI)', //cpg1.4
);

$lang_adv_opts = array(
  'title' => 'pealkiri', //cpg1.4
  'caption' => 'pealdis', //cpg1.4
  'keywords' => 'märksõnad', //cpg1.4
  'owner_name' => 'omaniku nimi', //cpg1.4
  'filename' => 'faili nimi', //cpg1.4
);

}

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
  'page_title' => 'Uute failide otsimine',
  'select_dir' => 'Kataloogi valimine',
  'select_dir_msg' => 'See funktsioon võimaldab sul lisada hulganisti faile, mille oled FTP-kliendiga oma serverisse laadinud.<br /><br />Vali kataloog, kuhu oma failid üles laadisid.', //cpg1.4
  'no_pic_to_add' => 'Pole ühtki faili, mida lisada.',
  'need_one_album' => 'Selle funktsiooni kasutamiseks on vaja vähemalt ühte albumit.',
  'warning' => 'Hoiatus',
  'change_perm' => 'skriptil pole võimalik sellesse kataloogi kirjutada - määra selle moodiks 755 või 777, enne kui faile lisada üritad.',
  'target_album' => '<b>Pane &quot;</b>%s<b>&quot; failid albumisse </b>%s',
  'folder' => 'Kataloog',
  'image' => 'Fail',
  'album' => 'Album',
  'result' => 'Tulemus',
  'dir_ro' => 'Pole kirjutatav. ',
  'dir_cant_read' => 'Pole loetav. ',
  'insert' => 'Uute failide galeriisse lisamine',
  'list_new_pic' => 'Uute failide nimekiri',
  'insert_selected' => 'Lisa valitud pildid',
  'no_pic_found' => 'Ei leitud ühtegi uut faili',
  'be_patient' => 'Palun ole kannatlik, skriptil läheb failide lisamisega aega',
  'no_album' => 'Ühtki albumit pole valitud',
  'result_icon' => 'Klõpsa üksikasjade nägemiseks või uuesti laadimiseks',  //cpg1.4
  'notes' =>  '<ul>'.
                          '<li><b>OK</b>: fail lisati edukalt'.
                          '<li><b>DP</b>: fail on duplikaat ja juba on andmebaasis'.
                          '<li><b>PB</b>: faili lisamine polnud võimalik, kontrolli seadistust ja õigusi kataloogis, kus fail asub'.
                          '<li><b>NA</b>: sa ei valinud albumit, kuhu failid minema peaks, mine <a href="javascript:history.back(1)">tagasi</a> ja vali album. Kui sul pole albumit, <a href="albmgr.php">loo see kõigepealt</a></li>'.
                          '<li>Kui märgid OK, DP, PB ei ilmu, klõpsa katkisel failil, et näha, kas PHP andis mõne veateate'.
                          '<li>Kui veebilehitsejal saabub ajalõpp, laadi leht uuesti'.
                          '</ul>',
  'select_album' => 'Vali album',
  'check_all' => 'Märgista kõik',
  'uncheck_all' => 'Eemalda märgistus',
  'no_folders' => 'Kataloogis &quot;albums&quot; pole hetkel ühtegi alamkataloogi. Loo sinna vähemalt üks kataloog, kuhu saad siis oma failid FTP-kliendiga laadida. Üles laadida ei tohi kataloogidesse &quot;userpics&quot; või &quot;edit&quot; - need on ainult HTTP-üleslaadimistele ja eriotstarbeks.', //cpg1.4
   'albums_no_category' => 'Ilma kategooriata albumid', //cpg1.4 // album pulldown mod, added by frogfoot
  'personal_albums' => '* Isiklikud albumid', //cpg1.4 // album pulldown mod, added by frogfoot
  'browse_batch_add' => 'Lehitsetav kasutajaliides (soovitatav)', //cpg1.4
  'edit_pics' => 'Muuda faile', //cpg1.4
  'edit_properties' => 'Albumi omadused', //cpg1.4
  'view_thumbs' => 'Pisipildivade', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File stat_details.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('STAT_DETAILS_PHP')) $lang_stat_details_php = array(
  'show_hide' => 'Kuva/peida see veerg', //cpg1.4
  'vote' => 'Hääletamise üksikasjad', //cpg1.4
  'hits' => 'Tabamuste üksikasjad', //cpg1.4
  'stats' => 'Hääletamise statistika', //cpg1.4
  'sdate' => 'Kuupäev', //cpg1.4
  'rating' => 'Hinnang', //cpg1.4
  'search_phrase' => 'Otsingufraas', //cpg1.4
  'referer' => 'Suunaja', //cpg1.4
  'browser' => 'Veebilehitseja', //cpg1.4
  'os' => 'Opsüsteem', //cpg1.4
  'ip' => 'IP-aadress', //cpg1.4
  'sort_by_xxx' => 'Sorteerimise alus: %s', //cpg1.4
  'ascending' => 'tõusvalt', //cpg1.4
  'descending' => 'laskuvalt', //cpg1.4
  'internal' => 'sisemine', //cpg1.4
  'close' => 'Sulge', //cpg1.4
  'hide_internal_referers' => 'Peida sisemised suunajad', //cpg1.4
  'date_display' => 'Kuupäeva vorming: ', //cpg1.4
  'submit' => 'Sisesta / värskenda', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File thumbnails.php
// ------------------------------------------------------------------------- //

// Void

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) $lang_upload_php = array(
  'title' => 'Faili üleslaadimine',
  'custom_title' => 'Kohandatud päringuvorm',
  'cust_instr_1' => 'Võid valida kohandatud arvu üleslaadimiskaste, aga mitte rohkem, kui allpool loetletud piirangutes kirjas.',
  'cust_instr_2' => 'Soovitav kastide arv',
  'cust_instr_3' => 'Faili üleslaadimise kaste: %s',
  'cust_instr_4' => 'URI/URL-i üleslaadimise kaste: %s',
  'cust_instr_5' => 'URI/URL-i üleslaadimise kaste:',
  'cust_instr_6' => 'Faili üleslaadimise kaste:',
  'cust_instr_7' => 'Palun sisesta iga tüübi kohta, mitut üleslaadimiskasti tahad. Seejärel klõpsa &quot;Jätka&quot;. ',
  'reg_instr_1' => 'Sobimatu toiming vormiloomiseks.',
  'reg_instr_2' => 'Nüüd võid failid üles laadida, kasutades allolevaid kaste. Suurus ei tohi ületada %s KB faili kohta. ZIP-failid, mis laaditakse üles sektsioonides &quot;Faili üleslaadimine&quot; ja &quot;URI/URL-i üleslaadimine&quot;, jäävad kokkupakituks.',
  'reg_instr_3' => 'Kui tahad, et ZIP-fail pärast üleslaadimist lahti pakitaks, pead kasutama faili üleslaadimise kasti sektsioonis &quot;ZIP-i üleslaadimine ja lahtipakkimine&quot;.',
  'reg_instr_4' => 'Kui kasutad URI/URL-i üleslaadimise sektsiooni, sisesta faili tee nagu järgnevas näites: http://www.minusait.com/pildid/iluspilt.jpg',
  'reg_instr_5' => 'Kui oled vormi täitnud, klõpsa palun &quot;Jätka&quot;.',
  'reg_instr_6' => 'ZIP-i üleslaadimine ja lahtipakkimine:',
  'reg_instr_7' => 'Faili üleslaadimine:',
  'reg_instr_8' => 'URI/URL-i üleslaadimine:',
  'error_report' => 'Veaaruanne',
  'error_instr' => 'Järgnevatel üleslaadimistel esines vigu:',
  'file_name_url' => 'Faili nimi/URL',
  'error_message' => 'Veateade',
  'no_post' => 'Faili ei laadinud üles POST.',
  'forb_ext' => 'Keelatud faililaiend.',
  'exc_php_ini' => 'Ületati php.ini\'s lubatud faili suurus.',
  'exc_file_size' => 'Ületati CPG poolt lubatud faili suurus.',
  'partial_upload' => 'Ainult osaline üleslaadimine.',
  'no_upload' => 'Üleslaadimist ei toimunud.',
  'unknown_code' => 'Tundmatu PHP üleslaadimise veakood.',
  'no_temp_name' => 'Pole üleslaadimist - pole ajutist nime.',
  'no_file_size' => 'Ei sisalda andmeid/on rikutud',
  'impossible' => 'Liigutamine on võimatu.',
  'not_image' => 'Pole pilt/on rikutud',
  'not_GD' => 'Pole GD laiendus.',
  'pixel_allowance' => 'Üleslaaditud pildi laius ja/või kõrgus on suurem kui galerii seadistuses lubatud.', //cpg1.4
  'incorrect_prefix' => 'Vigane URI/URL-i prefiks',
  'could_not_open_URI' => 'URI avamine pole võimalik.',
  'unsafe_URI' => 'Turvalisus pole tuvastatav.',
  'meta_data_failure' => 'Metaandmete viga',
  'http_401' => '401: autoriseerimata',
  'http_402' => '402: nõutav tasu',
  'http_403' => '403: keelatud',
  'http_404' => '404: ei leitud',
  'http_500' => '500: sisemine viga serveris',
  'http_503' => '503: teenus kättesaamatu',
  'MIME_extraction_failure' => 'MIME määramine pole võimalik.',
  'MIME_type_unknown' => 'Tundmatu MIME-tüüp.',
  'cant_create_write' => 'Kirjutusfaili loomine pole võimalik.',
  'not_writable' => 'Kirjutusfaili kirjutamine pole võimalik.',
  'cant_read_URI' => 'URI/URL-i lugemine pole võimalik',
  'cant_open_write_file' => 'URI kirjutusfaili avamine pole võimalik.',
  'cant_write_write_file' => 'URI kirjutusfaili kirjutamine pole võimalik.',
  'cant_unzip' => 'ZIP-i lahtipakkimine pole võimalik.',
  'unknown' => 'Tundmatu viga',
  'succ' => 'Edukad üleslaadimised',
  'success' => '%s üleslaadimist olid edukat.',
  'add' => 'Failide albumitesse lisamiseks klõpsa palun &quot;Jätka&quot;.',
  'failure' => 'Üleslaadimise nurjumine',
  'f_info' => 'Faili info',
  'no_place' => 'Eelneva faili paigutamine polnud võimalik.',
  'yes_place' => 'Eelnev fail edukalt paigutatud.',
  'max_fsize' => 'Suurim lubatud failisuurus on %s KB',
  'album' => 'Album',
  'picture' => 'Fail',
  'pic_title' => 'Faili pealkiri',
  'description' => 'Faili kirjeldus',
  'keywords' => 'Märksõnad (eralda tühikutega)<br /><a href="#" onClick="return MM_openBrWindow(\'keyword_select.php\',\'selectKey\',\'width=250, height=400, scrollbars=yes,toolbar=no,status=yes,resizable=yes\')">Vali nimekirjast</a>', //cpg1.4
  'keywords_sel' =>'Vali märksõnad', //cpg1.4
  'err_no_alb_uploadables' => 'Vabandust, pole ühtegi albumit, kuhu sul oleks lubatud faile üles laadida.',
  'place_instr_1' => 'Palun paiguta nüüd failid albumitesse. Lisaks võid iga faili kohta olulise info sisestada.',
  'place_instr_2' => 'Veel faile ootavad paigutamist. Klõpsa palun &quot;Jätka&quot;.',
  'process_complete' => 'Oled kõik failid edukalt paigutatud.',
   'albums_no_category' => 'Ilma kategooriata albumid', //cpg1.4. //album pulldown mod, added by frogfoot
  'personal_albums' => '* Isiklikud albumid', //cpg1.4 //album pulldown mod, added by frogfoot
  'select_album' => 'Vali album', //cpg1.4 //album pulldown mod, added by frogfoot
  'close' => 'Sulge', //cpg1.4
  'no_keywords' => 'Vabandust, märksõnu pole saadaval.', //cpg1.4
  'regenerate_dictionary' => 'Genereeri märksõnastik uuesti', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
  'memberlist' => 'Liikmete nimekiri', //cpg1.4
  'user_manager' => 'Kasutajahaldus', //cpg1.4
  'title' => 'Kasutajate haldamine',
  'name_a' => 'Nimi tõusvalt',
  'name_d' => 'Nimi laskuvalt',
  'group_a' => 'Grupp tõusvalt',
  'group_d' => 'Grupp laskuvalt',
  'reg_a' => 'Reg.-aeg tõusvalt',
  'reg_d' => 'Reg.-aeg laskuvalt',
  'pic_a' => 'Failide arv tõusvalt',
  'pic_d' => 'Failide arv laskuvalt',
  'disku_a' => 'Kettakasutus tõusvalt',
  'disku_d' => 'Kettakasutus laskuvalt',
  'lv_a' => 'Viimane külastus tõusvalt',
  'lv_d' => 'Viimane külastus laskuvalt',
  'sort_by' => 'Kasutajate sorteerimise alus',
  'err_no_users' => 'Kasutajatabel on tühi!',
  'err_edit_self' => 'Iseenda profiili ei saa niimoodi muuta, kasuta selleks linki &quot;Minu profiil&quot;.',
  'edit' => 'Muuda', //cpg1.4
  'with_selected' => 'Vali toiming', //cpg1.4
  'delete' => 'Kustuta', //cpg1.4
  'delete_files_no' => 'Säilita avalikud failid (aga muuda anonüümseks)', //cpg1.4
  'delete_files_yes' => 'Kustuta ka avalikud failid', //cpg1.4
  'delete_comments_no' => 'Säilita kommentaarid (aga muuda anonüümseks)', //cpg1.4
  'delete_comments_yes' => 'Kustuta ka kommentaarid', //cpg1.4
  'activate' => 'Aktiveeri', //cpg1.4
  'deactivate' => 'Deaktiveeri', //cpg1.4
  'reset_password' => 'Lähtesta parool', //cpg1.4
  'change_primary_membergroup' => 'Muuda esmast liikmegruppi', //cpg1.4
  'add_secondary_membergroup' => 'Lisa teisene liikmegrupp', //cpg1.4
  'name' => 'Kasutajanimi',
  'group' => 'Grupp',
  'inactive' => 'Mitteaktiivne',
  'operations' => 'Toimingud',
  'pictures' => 'Failide arv',
  'disk_space_used' => 'Kasutatud ruum', //cpg1.4
  'disk_space_quota' => 'Kettalimiit', //cpg1.4
  'registered_on' => 'Registreerunud', //cpg1.4
  'last_visit' => 'Viimane külastus',
  'u_user_on_p_pages' => '%d kasutajat %d lehel',
  'confirm_del' => 'Oled kindel, et tahad selle kasutaja kustutada? \\nKustutatkse ka kõik tema failid ja albumid.', //js-alert
  'mail' => 'E-post',
  'err_unknown_user' => 'Valitud kasutajat pole olemas!',
  'modify_user' => 'Muuda kasutaja profiili',
  'notes' => 'Märkmed',
  'note_list' => '<li>Kui sa ei taha praegust parooli muuta, jäta parooli väli tühjaks',
  'password' => 'Parool',
  'user_active' => 'Kasutaja on aktiivne',
  'user_group' => 'Kasutaja grupp',
  'user_email' => 'Kasuaja e-post',
  'user_web_site' => 'Kasutaja veebileht',
  'create_new_user' => 'Loo uus kasutaja',
  'user_location' => 'Kasutaja asukoht',
  'user_interests' => 'Kasutaja huvid',
  'user_occupation' => 'Kasutaja amet',
  'user_profile1' => '$user_profile1', //cpg1.4
  'user_profile2' => '$user_profile2', //cpg1.4
  'user_profile3' => '$user_profile3', //cpg1.4
  'user_profile4' => '$user_profile4', //cpg1.4
  'user_profile5' => '$user_profile5', //cpg1.4
  'user_profile6' => '$user_profile6', //cpg1.4
  'latest_upload' => 'Hiljutised üleslaadimised',
  'never' => 'Mitte kunagi',
  'search' => 'Kasutaja otsing', //cpg1.4
  'submit' => 'Sisesta', //cpg1.4
  'search_submit' => 'Otsi', //cpg1.4
  'search_result' => 'Otsingutulemused: ', //cpg1.4
  'alert_no_selection' => 'Esmalt pead vähemalt ühe kasutaja valima.', //cpg1.4 //js-alert
  'password' => 'Parool', //cpg1.4
  'select_group' => 'Vali grupp', //cpg1.4
  'groups_alb_access' => 'Albumiõigused grupiti', //cpg1.4
  'album' => 'Album', //cpg1.4
  'category' => 'Kategooria', //cpg1.4
  'modify' => 'Kas muuta?', //cpg1.4
  'group_no_access' => 'Sel grupil pole erilisi juurdepääsuõigusi.', //cpg1.4
  'notice' => 'Märkus', //cpg1.4
  'group_can_access' => 'Album(id), millele ainult &quot;%s&quot; juurde pääseb', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //

if (defined('UTIL_PHP')) {
$lang_util_desc_php = array(
'uuendada failide pealkirjad failinime järgi', //cpg1.4
'kustutada pealkirjad', //cpg1.4
'luua uuesti pisipildid ja vähendatud fotod', //cpg1.4
'kustutada originaalsuuruses fotod, asendades need vähendatud versioonidega', //cpg1.4
'kustutada veebiruumi vabastamiseks originaalsuuruses või vahepealsed fotod', //cpg1.4
'kustutada kõik orvuks jäänud kommentaarid', //cpg1.4
'lugeda uuesti failide suurused ja mõõtmed (kui pilte käsitsi muudetud on)', //cpg1.4
'lähtestada vaatamisloendurid', //cpg1.4
'vaadata phpinfo\'t', //cpg1.4
'uuendada andmebaasi', //cpg1.4
'vaadata logisid', //cpg1.4
);
$lang_util_php = array(
  'title' => 'Administratiivtööriistad',
  'what_it_does' => 'Siin on võimalik',
  'file' => 'Fail',
  'problem' => 'Probleem', //cpg1.4
  'status' => 'Olek', //cpg1.4
  'title_set_to' => 'pealkiri:',
  'submit_form' => 'Sisesta',
  'updated_succesfully' => 'Edukalt uuendatud',
  'error_create' => 'Viga loomisel',
  'continue' => 'Töötle veel pilte',
  'main_success' => 'Fail %s edukalt peamise failina kasutuses',
  'error_rename' => 'Viga %s ümbernimetamisel %s-ks.',
  'error_not_found' => 'Faili %s ei leitud.',
  'back' => 'Tagasi pealehele',
  'thumbs_wait' => 'Pisipiltide ja/või vähendatud piltide uuendamine, palun oota...',
  'thumbs_continue_wait' => 'Pisipiltide ja/või vähendatud piltide uuendamise jätkamine...',
  'titles_wait' => 'Pealkirjade uuendamine, palun oota...',
  'delete_wait' => 'Pealkirjade kustutamine, palun oota...',
  'replace_wait' => 'Originaalsuuruses piltide vähendatud piltidega asendamine, palun oota..',
  'instruction' => 'Kiirjuhised',
  'instruction_action' => 'vali toiming',
  'instruction_parameter' => 'vali parameetrid',
  'instruction_album' => 'vali album',
  'instruction_press' => 'vajuta &quot;%s&quot;',
  'update' => 'Pisipiltide ja/või vähendatud piltide uuendamine',
  'update_what' => 'Uuenda',
  'update_thumb' => 'ainult pisipilte',
  'update_pic' => 'ainult vähendatud pilte',
  'update_both' => 'nii pisipilte kui vähendatud pilte',
  'update_number' => 'Töödeldud pilte klõpsu kohta: ',
  'update_option' => '(Ajalõpu-probleemide korral proovi väiksemat väärtust)',
  'filename_title' => 'Failinime muutmine faili pealkirjaks',
  'filename_how' => 'Failinime muutmisel',
  'filename_remove' => 'eemalda lõpust .jpg ning asenda alakriipsud (_) ja punktid (.) tühikutega',
  'filename_euro' => 'asenda 2003_11_23_13_20_20.jpg kujuga 23/11/2003 13:20',
  'filename_us' => 'asenda 2003_11_23_13_20_20.jpg kujuga 11/23/2003 13:20',
  'filename_time' => 'asenda 2003_11_23_13_20_20.jpg kujuga 13:20',
  'delete' => 'Kustuta failide pealkirjad või täissuuruses fotod',
  'delete_title' => 'Failide pealkirjade kustutamine',
  'delete_title_explanation' => 'Eemaldab pealkirjad kõikidelt failidelt määratud albumis.', //cpg1.4
  'delete_original' => 'Originaalsuuruses fotode kustutamine',
  'delete_original_explanation' => 'Eemaldab täissuuruses pildid.', //cpg1.4
  'delete_intermediate' => 'Vahepealsete piltide kustutamine', //cpg1.4
  'delete_intermediate_explanation' => 'Kustutab vahepealsed (keskmises suuruses) pildid.<br />Kasuta seda kettaruumi vabastamiseks juhul, kui pärast piltide lisamist on seadistuses keelatud vahepealsete piltide loomine.', //cpg1.4
  'delete_replace' => 'Kustutab originaalsuuruses pildid ja asendab need vähendatud versioonidega.',
  'titles_deleted' => 'Kõik pealkirjad määratud albumis eemaldatud', //cpg1.4
  'deleting_intermediates' => 'Vahepealsete piltide kustutamine, palun oota...', //cpg1.4
  'searching_orphans' => 'Orbude otsimine, palun oota...', //cpg1.4
  'select_album' => 'Albumi valimine',
  'delete_orphans' => 'Orvuks jäänud kommentaaride kustutamine', //cpg1.4
  'delete_orphans_explanation' => 'Tuvastab ja laseb kustutada kommentaarid, mis on seotud failidega, mida enam galeriis ei ole.<br />Kontrollib üle kõik albumid.', //cpg1.4
  'refresh_db' => 'Failide mõõtmete ja suuruse info uuestilaadimine', //cpg1.4
  'refresh_db_explanation' => 'Loeb uuesti sisse failide suurused ja mõõtmed. Kasuta seda, kui mahuloendur eksib või kui oled käsitsi faile muutnud..', //cpg1.4
  'reset_views' => 'Vaatamisloendurite nullimine', //cpg1.4
  'reset_views_explanation' => 'Lähtesta määratud albumis kõikide failide vaatamisloendurid nulli.', //cpg1.4
  'orphan_comment' => 'orbkommentaari leitud',
  'delete' => 'Kustuta',
  'delete_all' => 'Kustuta kõik',
  'delete_all_orphans' => 'Kas kustutada kõik orvud?', //cpg1.4
  'comment' => 'Kommentaar: ',
  'nonexist' => 'lisatud olematule failile # ',
  'phpinfo' => 'phpinfo näitamine',
  'phpinfo_explanation' => 'Sisaldab tehnilist infot sinu serveri kohta.<br />Tootetuge otsides võidakse sinult sellest üht-teist küsida.', //cpg1.4
  'update_db' => 'Andmebaasi uuendamine',
  'update_db_explanation' => 'Kui oled asendanud Coppermine\'i faile, lisanud modifikatsioone või varasemast versioonist uuendanud, peaksid andmebaasi uuendama. See loob Coppermine\'i andmebaasis vajalikud tabelid ja/või konfiguratsiooniväärtused.',
  'view_log' => 'Logide vaatamine', //cpg1.4
  'view_log_explanation' => 'Coppermine võib mitmesuguseid kasutajate toiminguid üles märkida. Saad neid logisid vaadata, kui <a href="admin.php">seadistuses</a> on logimine sisse lülitatud.', //cpg1.4
  'versioncheck' => 'Versioonikontroll', //cpg1.4
  'versioncheck_explanation' => 'Kontrollib failide versioone, et teha kindlaks, kas pärast uuendust on kõik failid asendatud või kas pärast mõne paketi väljalaset on Coppermine\'i lähtefaile uuendatud.', //cpg1.4
  'bridgemanager' => 'Sillahaldus', //cpg1.4
  'bridgemanager_explanation' => 'Võimaldab Coppermine\'i mõne teise rakendusega (nt sinu foorumi või CMS-iga) põimida (sillata).', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File versioncheck.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('VERSIONCHECK_PHP')) $lang_versioncheck_php = array(
  'title' => 'Versioonikontroll', //cpg1.4
  'what_it_does' => 'See leht on mõeldud kasutajatele, kes on uuendanud oma Coppermine\'i paigaldust. See skript käib läbi sinu veebiserveris olevate failide ja püüab kindlaks teha, kas sealsete failide versioonid on samad kui vastavatel failidel võrgu-varamus aadressil http://coppermine.sourceforge.net. Sel moel selgub ka, mis faile uuendada tuleks.<br />Punaselt näidatakse kõike, mis vajab parandamist. Kollaselt esitatud kirjed vajavad ülevaatamist. Rohelised (või teksti vaikimisi värvi) asjad on korras.<br />Lisainfo saamiseks klõpsa abi-ikoonidel.', //cpg1.4
  'online_repository_unable' => 'Võrgu-varamuga ühendumine ebaõnnestus', //cpg1.4
  'online_repository_noconnect' => 'Coppermine\'il polnud võimalik võrgu-varamuga ühenduda. Sellel võib olla kaks põhjust:', //cpg1.4
  'online_repository_reason1' => 'varamu on hetkel &quot;maas&quot; - vaata, kas see leht avaneb: %s - kui sa sellele lehele juurde ei pääse, proovi mõne aja pärast uuesti.', //cpg1.4
  'online_repository_reason2' => 'sinu veebiserveri PHP seadistuses on %s välja lülitatud (vaikimisi on see sisselülitatud). Kui server on sinu hallata, lülita see <i>php.ini</i>\'s sisse. (Või vähemalt luba selle alistamine valikuga %s). Kui kasutad veebihosti, tuleb sul tõenäoliselt elada teadmisega, et sa lihtsalt ei saa oma faile võrgu-varamus olevatega võrrelda. Sellisel juhul näitab see leht ainult sinu distributsiooniga kaasasolnud failide versioone - uuendusi ei näidata.', //cpg1.4
  'online_repository_skipped' => 'Võrgu-varamuga ühendumine vahelejäetud', //cpg1.4
  'online_repository_to_local' => 'Skript piirdub nüüd versioonifailide kohaliku koopiaga. Andmed võivad olla ebatäpsed, kui oled Coppermine\'i uuendanud ja pole kõiki faile üles laadinud. Samuti ei arvestata pärast väljalaset tehtud muudatusi failides.', //cpg1.4;
  'local_repository_unable' => 'Sinu serveris asuva varamuga ühendumine ebaõnnestus', //cpg1.4
  'local_repository_explanation' => 'Coppermine\'il polnud võimalik varamufailiga %s sinu veebiserveris ühenduda. See tähendab tõenäoliselt, et sa pole varamufaili veebiserverisse üles laadinud. Tee seda nüüd ja seejärel laadi see leht uuesti seda lehte.<br />Kui skript ka siis ebaõnnestub, võib su veebihost olla täielikult keelanud osad <a href="http://www.php.net/manual/en/ref.filesystem.php">PHP failisüsteemi funktsioonid</a>. Sellisel juhul ei saa sa seda tööriista üldse kasutada, vabandust.', //cpg1.4
  'coppermine_version_header' => 'Paigaldatud Coppermine\'i versioon', //cpg1.4
  'coppermine_version_info' => 'Hetkel paigaldatud: %s', //cpg1.4
  'coppermine_version_explanation' => 'Kui arvad, et see on alatu vale ja kasutuses on uuem Coppermine, pole sa tõenäoliselt faili <i>include/init.inc.php</i> uut versiooni üles laadinud.', //cpg1.4
  'version_comparison' => 'Versioonivõrdlus', //cpg1.4
  'folder_file' => 'Kataloog/fail', //cpg1.4
  'coppermine_version' => 'CPG versioon', //cpg1.4
  'file_version' => 'Faili versioon', //cpg1.4
  'webcvs' => 'Veebi-SVN', //cpg1.4
  'writable' => 'kirjutatav', //cpg1.4
  'not_writable' => 'pole kirjutatav', //cpg1.4
  'help' => 'Abi', //cpg1.4
  'help_file_not_exist_optional1' => 'Faili/kataloogi pole olemas', //cpg1.4
  'help_file_not_exist_optional2' => 'Faili/kataloogi %s sinu serverist ei leitud. See pole tingimata vajalik, aga kui probleeme esineb, peaksid selle siiski (FTP-klienti kasutades) oma veebiserverisse laadima.', //cpg1.4
  'help_file_not_exist_mandatory1' => 'Faili/kataloogi pole olemas', //cpg1.4
  'help_file_not_exist_mandatory2' => 'Faili/kataloogi %s sinu serverist ei leitud, aga see on kohustuslik. Laadi see (FTP-klienti kasutades) oma veebiserverisse.', //cpg1.4
  'help_no_local_version1' => 'Kohalikul failil puudub versioon', //cpg1.4
  'help_no_local_version2' => 'Skript polnud v&otilde;imeline kohaliku faili versiooni m&auml;&auml;rama - sinu fail on kas vananenud või oled sa seda muutnud, eemaldades seejuures ka p&auml;iseinfo. Soovituslik on faili uuendada.', //cpg1.4
  'help_local_version_outdated1' => 'Kohalik versioon aegunud', //cpg1.4
  'help_local_version_outdated2' => 'Sinu versioon sellest failist n&auml;ib p&auml;rinevat Coppermine\'i vanemast versioonist (mida t&otilde;en&auml;oliselt uuendati). Vaata, et ka see fail saaks uuendatud.', //cpg1.4
  'help_local_version_na1' => 'Subversion\'i versiooniinfo lugemine pole v&otilde;imalik', //cpg1.4
  'help_local_version_na2' => 'Skript polnud võimeline m&auml;&auml;rama, mis on sinu serveris oleva faili SVN-versioon. See fail tuleks paketist uuesti &uuml;les laadida.', //cpg1.4
  'help_local_version_dev1' => 'Arendusvresioon', //cpg1.4
  'help_local_version_dev2' => 'Fail sinu serveris n&auml;ib olevat uuem kui kasutatav Coppermine\'i versioon. Sa kas kasutad arenduses olevat faili (mida tehes peaksid h&auml;sti teadma, mida teed) v&otilde;i uuendasid sa oma Coppermine\'i paigaldust, aga ei laadinud &uuml;les uut include/init.inc.php faili.', //cpg1.4
  'help_not_writable1' => 'Kataloog pole kirjutatav', //cpg1.4
  'help_not_writable2' => 'Muuda &otilde;igusi (CHMOD), et anda skriptile kirjutamis&otilde;igus kataloogis %s ja k&otilde;igele, mis seal sees.', //cpg1.4
  'help_writable1' => 'Kataloog kirjutatav', //cpg1.4
  'help_writable2' => 'Kataloog %s on kirjutatav. See on asjatu risk, Coppermine\'il on vaja ainult lugemis-/k&auml;ivitus&otilde;igust.', //cpg1.4
  'help_writable_undetermined' => 'Coppermine polnud v&otilde;imeline m&auml;&auml;rama, kas kataloog on kirjutatav v&otilde;i mitte.', //cpg1.4
  'your_file' => 'sinu fail', //cpg1.4
  'reference_file' => 'võrdlusfail', //cpg1.4
  'summary' => 'Kokkuvõte', //cpg1.4
  'total' => 'Faile/katalooge kontrollitud kokku', //cpg1.4
  'mandatory_files_missing' => 'Puuduvaid kohustuslikke faile', //cpg1.4
  'optional_files_missing' => 'Puuduvaid mittekohustuslikke faile', //cpg1.4
  'files_from_older_version' => 'Vanast Coppermine\'i versioonist säilinud faile', //cpg1.4
  'file_version_outdated' => 'Vana versiooniga faile', //cpg1.4
  'error_no_data' => 'Skript oli paha ja ei suutnud mingit infot hankida. Vabandust.', //cpg1.4
  'go_to_webcvs' => 'Ava %s', //cpg1.4
  'options' => 'Valikud', //cpg1.4
  'show_optional_files' => 'Näita mittekohustuslikke katalooge/faile', //cpg1.4
  'show_mandatory_files' => 'Näita kohustuslikke faile', //cpg1.4
  'show_file_versions' => 'Näita failide versioone', //cpg1.4
  'show_errors_only' => 'Näita ainult vigadega katalooge/faile', //cpg1.4
  'show_permissions' => 'Näita kataloogide õigusi', //cpg1.4
  'show_condensed_output' => 'Näita tihedat väljundit (lihtsam ekraanipilte teha)', //cpg1.4
  'coppermine_in_webroot' => 'Coppermine on paigaldatud veebi juurkataloogi', //cpg1.4
  'connect_online_repository' => 'Proovi võrgu-varamuga ühenduda', //cpg1.4
  'show_additional_information' => 'Näita lisainfot', //cpg1.4
  'no_webcvs_link' => 'Ära näita veebi-SVN-i linki', //cpg1.4
  'stable_webcvs_link' => 'Näita linki veebi-SVN-i stabiilsele harule', //cpg1.4
  'devel_webcvs_link' => 'Näita linki veebi-SVN-i arendusharule', //cpg1.4
  'submit' => 'Rakenda muudatused / värskenda', //cpg1.4
  'reset_to_defaults' => 'Lähtesta vaikeväärtustele', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File view_log.php  //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('VIEWLOG_PHP')) $lang_viewlog_php = array(
  'delete_all' => 'Kustuta kõik logid', //cpg1.4
  'delete_this' => 'Kustuta see logi', //cpg1.4
  'view_logs' => 'Vaata logisid', //cpg1.4
  'no_logs' => 'Logisid pole loodud.', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File xp_publish.php //cpg1.4; paha tõlge: "viisard"
// ------------------------------------------------------------------------- //

if (defined('XP_PUBLISH_PHP')) {

$lang_xp_publish_client = <<<EOT
<h1>XP veebi publitseerimise viisardi klient</h1><p>See moodul võimaldab kasutada <b>Windows XP</b> veebi publitseerimise viisardit Coppermine'iga.</p><p>Kood on pärit artiklist, mille kirjutas
EOT;

$lang_xp_publish_required = <<<EOT
<h2>Mis vajalik on?</h2><ul><li>Windows XP - et oleks üldse viisard, mida kasutada.</li><li>Töötav Coppermine'i paigaldus, millel <b>veebi üleslaadimise funktsioon toimib.</b></li></ul><h2>Kuidas kliendipoolel paigaldada?</h2><ul><li>Paremklõpsa
EOT;

$lang_xp_publish_select = <<<EOT
Vali &quot;Salvesta sihtmärk nimega...&quot; (või &quot;<i>Save Link as...</i>&quot;, &quot;<i>Save Target as...</i>&quot; vms). Salvesta fail, kontrollides, et faili pakutav nimi oleks <b>cpg_###.reg</b> (### tähistab numbrilist ajatemplit). Kui vaja, muuda see sellisele kujule (numbrid jäta alles). Kui allalaaditud, topeltklõpsa failil, et oma server veebi publitseerimise viisardi jaoks registrisse kanda.</li></ul>
EOT;

$lang_xp_publish_testing = <<<EOT
<h2>Kontrollimine</h2><ul><li>Vali Windows Exploreris mõned failid ja vasakpoolses paneelis klõpsa &quot;<b>Publitseeri xxx veebi</b>&quot; (&quot;<i>Publish xxx to the Web</i>&quot;).</li><li>Kinnita failivalik. Klõpsa &quot;<b>Edasi</b>&quot;.</li><li>Ilmuvast teenuste nimekirjast vali enda fotogalerii (see kannab sinu galerii nime). Kui sellist teenust pole, vaata, et oleksid ikka <b>cpg_pub_wizard.reg</b>'i ülalmainitud viisil paigaldanud.</li><li>Kui vaja, sisesta oma sisselogimisinfo.</li><li>Vali piltide jaoks olemasolev album või loo uus.</li><li>Klõpsa &quot;<b>Edasi</b>&quot;. Algab piltide üleslaadimine.</li><li>Kui see lõpeb, kontrolli oma galeriist, kas pildid on korrektselt lisatud.</li></ul>
EOT;

$lang_xp_publish_notes = <<<EOT
<h2>Märkused</h2><ul><li>Üleslaadimisel ei oska viisard näidata skripti poolt tagastatud veateateid, nii et seda, kas üleslaadimine õnnestus või mitte, saad teada alles siis, kui oma galeriisse vaatad.</li><li>Kui üleslaadimine ebaõnnestub, lülita Coppermine'i seadistuses sisse &quot;Silumisrežiim&quot;, proovi uuesti ühe pildiga, seejärel vaata veateateid failis
EOT;

$lang_xp_publish_flood = <<<EOT
(asub sinu serveris Coppermine'i kataloogis).</li><li>Vältimaks galerii &quot;üleujutamist&quot; viisardi abil üleslaaditud piltidega, saavad seda funktsiooni kasutada ainult <b>galerii administraatorid</b> ja <b>kasutajad, kellel on lubatud isiklikud albumid</b>.</li>
EOT;



$lang_xp_publish_php = array(
  'title' => 'Coppermine - XP veebi publitseerimise viisard', //cpg1.4
  'welcome' => 'Tere, <b>%s</b>,', //cpg1.4
  'need_login' => 'Enne, kui seda viisardit kasutada saad, pead galeriisse oma veebilehitsejat kasutades sisse logima.<p/><p>Sisselogides ära unusta märkida &quot;<b>Mäleta mind</b>&quot; (kui see võimalus olemas on).', //cpg1.4
  'no_alb' => 'Vabandust, kuid pole ühtegi albumit, kuhu sul oleks lubatud selle viisardi abil pilte üles laadida.', //cpg1.4
  'upload' => 'Laadi pildid olemasolevasse albumisse', //cpg1.4
  'create_new' => 'Loo piltide jaoks uus album', //cpg1.4
  'album' => 'Album', //cpg1.4
  'category' => 'Kategooria', //cpg1.4
  'new_alb_created' => 'Uus album &quot;<b>%s</b>&quot; loodud.', //cpg1.4
  'continue' => 'Piltide üleslaadimiseks klõpsa &quot;Edasi&quot;', //cpg1.4
  'link' => 'siin', //cpg1.4
);
}
?>