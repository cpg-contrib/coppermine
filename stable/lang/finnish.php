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
  $Source: /cvsroot/coppermine/stable/lang/english.php,v $
  $Revision: 1.26 $
  $Author: gaugau $
  $Date: 2006/03/02 08:23:48 $
**********************************************/

if (!defined('IN_COPPERMINE')) { die('Not in Coppermine...');}

// info about translators and translated language
$lang_translation_info = array(
  'lang_name_english' => 'Finnish', //cpg1.4
  'lang_name_native' => 'Suomi', //cpg1.4
  'lang_country_code' => 'fi', //cpg1.4
  'trans_name'=> 'Kati',
  'trans_email' => 'kati@tiuhti.net',
  'trans_website' => 'http://kati.tiuhti.net/',
  'trans_date' => '2006-05-17',
);

$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('tavua', 'KB', 'MB');

// Day of weeks and months
$lang_day_of_week = array('su', 'ma', 'ti', 'ke', 'to', 'pe', 'la');
$lang_month = array('tammikuu', 'helmikuu', 'maaliskuu', 'huhtikuu', 'toukokuu', 'kesäkuu', 'heinäkuu', 'elokuu', 'syyskuu', 'lokakuu', 'marraskuu', 'joulukuu');

// Some common strings
$lang_yes = 'Kyllä';
$lang_no  = 'Ei';
$lang_back = 'TAKAISIN';
$lang_continue = 'JATKA';
$lang_info = 'Info';
$lang_error = 'Virhe';
$lang_check_uncheck_all = 'check/uncheck all'; //cpg1.4

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$album_date_fmt =    '%e.%m.%Y';
$lastcom_date_fmt =  '%e.%m.%y klo %H:%M';
$lastup_date_fmt = '%e.%m.%Y';
$register_date_fmt = '%e.%m.%Y';
$lasthit_date_fmt = '%e.%m.%Y klo %H:%M';
$comment_date_fmt =  '%e.%m.%Y klo %H:%M';
$log_date_fmt = '%e.%m.%Y klo %H:%M'; //cpg1.4

// For the word censor
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*', 'vittu', 'saatana');

$lang_meta_album_names = array(
  'random' => 'Satunnaiset kuvat',
  'lastup' => 'Uusimmat kuvat',
  'lastalb'=> 'Viimeksi päivitetyt albumit',
  'lastcom' => 'Uusimmat kommentit',
  'topn' => 'Katsotuimmat',
  'toprated' => 'Suosituimmat',
  'lasthits' => 'Viimeksi katsotut',
  'search' => 'Hakutulokset',
  'favpics'=> 'Suosikit',  //cpg1.4
);

$lang_errors = array(
  'access_denied' => 'Ei oikeuksia tälle sivulle.',
  'perm_denied' => 'Ei oikeuksia kyseisen toiminnon suorittamiseen.',
  'param_missing' => 'Scriptiä kutsuttu ilman vaadittavia parametrejä.',
  'non_exist_ap' => 'Valittua albumia/kuvaa ei löydy!',
  'quota_exceeded' => 'Levytilasi on täynnä<br /><br />Sinulla on levytilaa [quota]K ja kuvasi vievät tällä hetkellä [space]K. Tämän kuvan lisääminen ylittäisi levytilan.',
  'gd_file_type_err' => 'Kun käytät GD -kirjastoa sallitut tiedostomuodot ovat JPEG ja PNG.',
  'invalid_image' => 'Kuvasi on korruptoitunut eikä sitä voida käsitellä GD -kirjastolla.',
  'resize_failed' => 'Pienennettyjä kuvia ei voitu tehdä.',
  'no_img_to_display' => 'Ei näytettäviä kuvia.',
  'non_exist_cat' => 'Valittua kategoriaa ei löydy.',
  'orphan_cat' => 'Kategorian yläkategoriaa ei löydy. Aja kategoriamanageri selvittääksesi ongelma!',
  'directory_ro' => 'Kirjoitusoikeudet puuttuvat hakemistoon \'%s\'. Tiedostoja ei voitu poistaa.',
  'non_exist_comment' => 'Valittua kommenttia ei löydy.',
  'pic_in_invalid_album' => 'Kuvaa ei ole albumissa (%s)!?',
  'banned' => 'Sinut on bannattu sivustolta.',
  'not_with_udb' => 'This function is disabled in Coppermine because it is integrated with forum software. Either what you are trying to do is not supported in this configuration, or the function should be handled by the forum software.',
  'offline_title' => 'Offline',
  'offline_text' => 'Kalleria on poissa käytöstä. Tarkista myöhemmin uudelleen.',
  'ecards_empty' => 'Tällä hetkellä ei ole e-kortteja.',
  'action_failed' => 'Toiminto epäonnistui.',
  'no_zip' => 'ZIP -tiedostojen käsittelyyn vaadittava kirjasto puuttuu. Ota yhteyttä ylläpitäjään!',
  'zip_type' => 'Sinulla ei ole oikeuksia lähettää ZIP -tiedostoja.',
  'database_query' => 'Tietokantakyselyn käsittely epäonnistui.', //cpg1.4
  'non_exist_comment' => 'Kommenttia ei löydy.', //cpg1.4
);

$lang_bbcode_help_title = 'bbcode-ohje'; //cpg1.4
$lang_bbcode_help = 'Voit lisätä klikattavia linkkejä ja muotoiluja tähän kenttään käyttämällä bbcode tageja: <li>[b]Lihavoitu[/b] =&gt; <b>Lihavoitu</b></li><li>[i]Kursivoitu[/i] =&gt; <i>Kursivoitu</i></li><li>[url=http://esimerkki.fi/]URL -teksti[/url] =&gt; <a href="http://esimerkki.fi">URL -teksti</a></li><li>[email]etunimi.sukunimi@esimerkki.fi[/email] =&gt; <a href="mailto:etunimi.sukunimi@esimerkki.fi">user@domain.com</a></li><li>[color=red]punaista tekstiä[/color] =&gt; <span style="color:red">punaista tekstiä</span></li><li>[img]http://coppermine.sf.net/demo/images/red.gif[/img] => <img src="../images/red.gif" border="0" alt="" /></li>'; //cpg1.4

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
  'home_title' => 'Etusivulle',
  'home_lnk' => 'Etusivu',
  'alb_list_title' => 'Albumilistaan',
  'alb_list_lnk' => 'Albumilista',
  'my_gal_title' => 'Omaan galleriaan',
  'my_gal_lnk' => 'Oma galleria',
  'my_prof_title' => 'Omaan profiiliin', //cpg1.4
  'my_prof_lnk' => 'Oma profiili',
  'adm_mode_title' => 'Vaihda ylläpitotilaan',
  'adm_mode_lnk' => 'Ylläpito',
  'usr_mode_title' => 'Vaihda käyttäjätilaan',
  'usr_mode_lnk' => 'Käyttäjätila',
  'upload_pic_title' => 'Lisää kuva albumiin',
  'upload_pic_lnk' => 'Lisää kuva',
  'register_title' => 'Luo uusi tili',
  'register_lnk' => 'Rekisteröidy',
  'login_title' => 'Kirjaudu sisään', //cpg1.4
  'login_lnk' => 'Kirjaudu',
  'logout_title' => 'Kirjaudu ulos', //cpg1.4
  'logout_lnk' => 'Kirjaudu ulos',
  'lastup_title' => 'Näytä viimeksi lisätyt kuvat', //cpg1.4
  'lastup_lnk' => 'Uusimmat kuvat',
  'lastcom_title' => 'Näytä viimeksi lisätyt kommentit', //cpg1.4
  'lastcom_lnk' => 'Uusimmat kommentit',
  'topn_title' => 'Näytä katsotuimmat kuvat', //cpg1.4
  'topn_lnk' => 'Katsotuimmat',
  'toprated_title' => 'Näytä suosituimmat kuvat', //cpg1.4
  'toprated_lnk' => 'Suosituimmat',
  'search_title' => 'Hae gallerioista', //cpg1.4
  'search_lnk' => 'Haku',
  'fav_title' => 'Omiin suosikkeihin', //cpg1.4
  'fav_lnk' => 'Omat suosikit',
  'memberlist_title' => 'Näytä käyttäjälista',
  'memberlist_lnk' => 'Käyttäjälista',
  'faq_title' => 'Kysytyimmät kysymykset &quot;Coppermine&quot; galleriasta',
  'faq_lnk' => 'FAQ',
);

$lang_gallery_admin_menu = array(
  'upl_app_title' => 'Tarkistettavat tiedostot', //cpg1.4
  'upl_app_lnk' => 'Tarkistettavat',
  'admin_title' => 'Asetuksiin', //cpg1.4
  'admin_lnk' => 'Asetukset', //cpg1.4
  'albums_title' => 'Albumiasetukset', //cpg1.4
  'albums_lnk' => 'Albumit',
  'categories_title' => 'Kategoria-asetuksiin', //cpg1.4
  'categories_lnk' => 'Kategoriat',
  'users_title' => 'Käyttäjähallintaan', //cpg1.4
  'users_lnk' => 'Käyttäjät',
  'groups_title' => 'Ryhmien hallintaan', //cpg1.4
  'groups_lnk' => 'Ryhmät',
  'comments_title' => 'Tarkista kaikki kommentit', //cpg1.4
  'comments_lnk' => 'Tarkista kommentit',
  'searchnew_title' => 'Lisää kerralla tiedostoja suoraan palvelimelta', //cpg1.4
  'searchnew_lnk' => 'Tiedostojen lisäys',
  'util_title' => 'Ylläpitotyökaluihin', //cpg1.4
  'util_lnk' => 'Ylläpitotyökalut',
  'key_title' => 'Hakusanaluetteloon', //cpg1.4
  'key_lnk' => 'Hakusanaluettelo', //cpg1.4
  'ban_title' => 'Bannattujen käyttäjien lista', //cpg1.4
  'ban_lnk' => 'Bannatut',
  'db_ecard_title' => 'Tarkista e-kortit', //cpg1.4
  'db_ecard_lnk' => 'Näytä e-kortit',
  'pictures_title' => 'Järjestä kuvani', //cpg1.4
  'pictures_lnk' => 'Järjestä kuvani', //cpg1.4
  'documentation_lnk' => 'Ohjeet', //cpg1.4
  'documentation_title' => 'Coppermine-ohjekirja', //cpg1.4
);

$lang_user_admin_menu = array(
  'albmgr_title' => 'Luo albumeita', //cpg1.4
  'albmgr_lnk' => 'Luo albumeita',
  'modifyalb_title' => 'Muokkaa albumeitani',  //cpg1.4
  'modifyalb_lnk' => 'Muokkaa albumeitani',
  'my_prof_title' => 'Henkilökohtainen profiili', //cpg1.4
  'my_prof_lnk' => 'Oma profiili',
);

$lang_cat_list = array(
  'category' => 'Kategoria',
  'albums' => 'Albumit',
  'pictures' => 'Kuvat',
);

$lang_album_list = array(
  'album_on_page' => '%d albumia %d sivulla',
);

$lang_thumb_view = array(
  'date' => 'PÄIVÄMÄÄRÄ',
  //Sort by filename and title
  'name' => 'NIMI',
  'title' => 'OTSIKKO',
  'sort_da' => 'Järjestä päivämäärän mukaan nousevasti',
  'sort_dd' => 'Järjestä päivämäärän mukaan laskevasti',
  'sort_na' => 'Järjestä nimen mukaan nousevasti',
  'sort_nd' => 'Järjestä nimen mukaan laskevasti',
  'sort_ta' => 'Järjestä otsikon mukaan nousevasti',
  'sort_td' => 'Järjestä otsikon mukaan laskevasti',
  'position' => 'SIJAINTI', //cpg1.4
  'sort_pa' => 'Järjestä sijainnin mukaan nousevasti', //cpg1.4
  'sort_pd' => 'Järjestä sijainnin mukaan laskevasti', //cpg1.4
  'download_zip' => 'Lataa ZIP -tiedostona',
  'pic_on_page' => '%d kuvaa %d sivulla',
  'user_on_page' => '%d käyttäjää %d sivulla',
  'enter_alb_pass' => 'Anna albumin salasana', //cpg1.4
  'invalid_pass' => 'Väärä salasana', //cpg1.4
  'pass' => 'Salasana', //cpg1.4
  'submit' => 'Lähetä', //cpg1.4
);

$lang_img_nav_bar = array(
  'thumb_title' => 'Takaisin thumbnail-sivulle',
  'pic_info_title' => 'Näytä/piilota kuvan tiedot',
  'slideshow_title' => 'Kuvaesitys',
  'ecard_title' => 'Lähetä tämä kuva e-korttina',
  'ecard_disabled' => 'E-kortit ovat pois päältä.',
  'ecard_disabled_msg' => 'Sinulla ei ole oikeuksia lähettää e-kortteja.', //js-alert
  'prev_title' => 'Näytä edellinen kuva',
  'next_title' => 'Näytä seuraava kuva',
  'pic_pos' => 'KUVA %s/%s',
  'report_title' => 'Ilmoita tämä kuva ylläpitäjälle', //cpg1.4
  'go_album_end' => 'Loppuun', //cpg1.4
  'go_album_start' => 'Alkuun', //cpg1.4
  'go_back_x_items' => 'Takaisin %s kuvaa', //cpg1.4
  'go_forward_x_items' => 'Eteenpäin %s kuvaa', //cpg1.4
);

$lang_rate_pic = array(
  'rate_this_pic' => 'Äänestä tätä kuvaa ',
  'no_votes' => '(Ei vielä ääniä)',
  'rating' => '(Arvo: %s / 5 ja %s ääntä)',
  'rubbish' => 'Roskaa',
  'poor' => 'Tylsää',
  'fair' => 'Keskinkertainen',
  'good' => 'Hyvä',
  'excellent' => 'Erinomainen',
  'great' => 'Loistava',
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
  CRITICAL_ERROR => 'Kriittinen virhe',
  'file' => 'Tiedosto: ',
  'line' => 'Rivi: ',
);

$lang_display_thumbnails = array(
  'filename' => 'Tiedostonimi=', //cpg1.4
  'filesize' => 'Tiedostokoko=', //cpg1.4
  'dimensions' => 'Tarkkuus=', //cpg1.4
  'date_added' => 'Lisätty=', //cpg1.4
);

$lang_get_pic_data = array(
  'n_comments' => '%s kommenttia',
  'n_views' => '%s katselua',
  'n_votes' => '(%s ääntä)',
);

$lang_cpg_debug_output = array(
  'debug_info' => 'Debuginfo',
  'select_all' => 'Valitse kaikki',
  'copy_and_paste_instructions' => 'Jos aiot pyytää apua copperminen tukipalvelussa, kopioi ja liitä tämä debug-teksti viestiisi pyydettäessä. Liitä mukaan myös mahdollinen virheilmoitus. Muista korvata mahdolliset salasanat ***:llä ennen lähettämistä. <br />Huomaa: Tämä on vain tiedoksi, eikä tarkoita, että galleriassa olisi virhe.', //cpg1.4
  'phpinfo' => 'Näytä php-info',
  'notices' => 'Huomautukset', //cpg1.4
);

$lang_language_selection = array(
  'reset_language' => 'Oletuskieli',
  'choose_language' => 'Valitse kieli',
);

$lang_theme_selection = array(
  'reset_theme' => 'Oletusteema',
  'choose_theme' => 'Valitse teema',
);

$lang_version_alert = array(
  'version_alert' => 'Versiota ei tueta!', //cpg1.4
  'security_alert' => 'Turvahälytys!', //cpg1.4.3
  'relocate_exists' => 'Poista <a href="http://coppermine-gallery.net/forum/index.php?topic=24217.0" target=_blank>relocate_server.php</a> tiedosto sivustoltasi!',
  'no_stable_version' => 'Sinulla on ajossa Coppermine %s (%s), joka on tarkoitettu vain kokeneille käyttäjille - tälle versiolle ei ole tukea eikä takuuta. Käytä sitä omalla vastuullasi tai päivitä alaspäin viimeisimpään vakaaseen versioon, jos tarvitset tukea!', //cpg1.4
  'gallery_offline' => 'Galleria ei ole tällä hetkellä julkinen, vaan se näkyy vain sinulle ylläpitäjänä. Älä unohda laittaa galleriaa takaisin julkiseksi, kun olet saanut ylläpitotoimet valmiiksi.', //cpg1.4
);

$lang_create_tabs = array(
  'previous' => 'edellinen', //cpg1.4
  'next' => 'seuraava', //cpg1.4
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
  'error_wakeup' => "Pluginia '%s' ei voitu ottaa käyttöön", //cpg1.4
  'error_install' => "Pluginia '%s' ei voitu asentaa", //cpg1.4
  'error_uninstall' => "Pluginia ei saatu poistettua '%s'", //cpg1.4
  'error_sleep' => "Pluginia '%s' ei saatu poistettua <br />", //cpg1.4
);

// ------------------------------------------------------------------------- //
// File include/smilies.inc.php
// ------------------------------------------------------------------------- //

if (defined('SMILIES_PHP')) $lang_smilies_inc_php = array(
    'Exclamation' => 'Huuto',
  	'Question' => 'Kysymys',
  	'Very Happy' => 'Erittäin iloinen',
  	'Smile' => 'Hymy',
  	'Sad' => 'Suru',
  	'Surprised' => 'Yllättynyt',
  	'Shocked' => 'Järkyttynyt',
  	'Confused' => 'Häkeltynyt',
  	'Cool' => 'Cool',
  	'Laughing' => 'Nauru',
  	'Mad' => 'Hullu',
  	'Razz' => 'Razz',
  	'Embarassed' => 'Nolo',
  	'Crying or Very sad' => 'Itku',
  	'Evil or Very Mad' => 'Ilkimys tai hullu',
  	'Twisted Evil' => 'Kieroutunut ilkimys',
  	'Rolling Eyes' => 'Pyörivät silmät',
  	'Wink' => 'Vink',
  	'Idea' => 'Idea',
  	'Arrow' => 'Nuoli',
  	'Neutral' => 'Neutraali',
	'Mr. Green' => 'Mr. Vihreä',
);

// ------------------------------------------------------------------------- //
// File addpic.php
// ------------------------------------------------------------------------- //

// void

// ------------------------------------------------------------------------- //
// File mode.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('MODE_PHP')) $lang_mode_php = array(
  0 => 'Poistutaan ylläpitotilasta...',
  1 => 'Siirrytään ylläpitotilaan...',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
  'alb_need_name' => 'Albumi tarvitsee nimen!', //js-alert
  'confirm_modifs' => 'Haluatko varmasti tehdä nämä muutokset?', //js-alert
  'no_change' => 'Et tehnyt yhtään muutosta!', //js-alert
  'new_album' => 'Uusi albumi',
  'confirm_delete1' => 'Haluatko varmasti poistaa tämän albumin?', //js-alert
  'confirm_delete2' => '\nKaikki kuvat ja kommentit poistetaan!', //js-alert
  'select_first' => 'Valitse ensin albumi', //js-alert
  'alb_mrg' => 'Albumihallinta',
  'my_gallery' => '* Oma galleria *',
  'no_category' => '* Ei kategoriaa *',
  'delete' => 'Poista',
  'new' => 'Uusi',
  'apply_modifs' => 'Hyväksy muutokset',
  'select_category' => 'Valitse kategoria',
);

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) $lang_banning_php = array(
  'title' => 'Bannaa käyttäjiä', //cpg1.4
  'user_name' => 'Käyttäjänimi', //cpg1.4
  'ip_address' => 'IP-osoite', //cpg1.4
  'expiry' => 'Mihin asti (tyhjä on lopullinen)', //cpg1.4
  'edit_ban' => 'Tallenna muutokset', //cpg1.4
  'delete_ban' => 'Poista', //cpg1.4
  'add_new' => 'Lisää uusi banni', //cpg1.4
  'add_ban' => 'Lisää', //cpg1.4
  'error_user' => 'Käyttäjää ei löydy', //cpg1.4
  'error_specify' => 'Anna joko käyttäjänimi tai IP-osoite', //cpg1.4
  'error_ban_id' => 'Väärä bannaus-ID!', //cpg1.4
  'error_admin_ban' => 'Et voi bannata itseäsi!', //cpg1.4
  'error_server_ban' => 'Meinasit bannata oman palvelimesi? Tsk tsk, ei semmoista saa tehdä...', //cpg1.4
  'error_ip_forbidden' => 'Et voi bannata tätä IP-osoitetta - se ei ole reititettävä (yksityinen)!<br />Jos haluat sallia yksityisten IP-osoitteiden bannauksen, sinun on muutettava <a href="admin.php">asetuksia</a> (tässä on järkeä vain, jos Coppermine on lähiverkossa).', //cpg1.4
  'lookup_ip' => 'Tarkista IP-osoite', //cpg1.4
  'submit' => 'Lähetä', //cpg1.4
  'select_date' => 'valitse päivämäärä', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File bridgemgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('BRIDGEMGR_PHP')) $lang_bridgemgr_php = array(
  'title' => 'Yhteysohjelma (Bridge Wizard)',
  'warning' => 'Varoitus: Kun käytät tätä ohjelmaa, huomaa, että arkaluontoista dataa lähetetään käyttäen html-lomakkeita. Aja tämä vain omalla PC:lläsi (ei julkisella koneella kuten nettikahvilassa). Muista tyhjentää tämän jälkeen selaimesi välimuisti, jotteivat muut pääse käsiksi tietoon!',
  'back' => 'takaisin',
  'next' => 'seuraava',
  'start_wizard' => 'Aloita yhteysohjelma',
  'finish' => 'Lopeta',
  'hide_unused_fields' => 'piilota käyttämättömät lomakekentät (suositeltu)',
  'clear_unused_db_fields' => 'poista käyttämättömät tietokantatallenteet (suositeltu)',
  'custom_bridge_file' => 'oman siltasi tiedostonimi (jos siltatiedostosi nimi on <i>tiedostoni.inc.php</i>, laita <i>tiedostoni</i> tähän kenttään)',
  'no_action_needed' => 'Ei tarvittavia toimenpiteitä tässä vaiheessa. Klikkaa \'seuraava\' jatkaaksesi.',
  'reset_to_default' => 'Resetoi oletusarvoon',
  'choose_bbs_app' => 'valitse applikaatio, johon coppermine yhdistetään',
  'support_url' => 'Täältä löytyy tukitietoa applikaatiolle',
  'settings_path' => 'BBS applikaatiosi käyttämät polut',
  'database_connection' => 'tietokantayhteys',
  'database_tables' => 'tietokantataulut',
  'bbs_groups' => 'BBS -ryhmät',
  'license_number' => 'Lisenssinumero',
  'license_number_explanation' => 'Anna lisenssinumerosi (jos tarvitaan)',
  'db_database_name' => 'Tietokannan nimi',
  'db_database_name_explanation' => 'Anna BBS:n käyttämän tietokannan nimi',
  'db_hostname' => 'Tietokantapalvelin',
  'db_hostname_explanation' => 'Tietokantapalvelimen, jossa mySQL -tietokantasi sijaitsee, nimi, yleensä &quot;localhost&quot;',
  'db_username' => 'Tietokannan käyttäjätili',
  'db_username_explanation' => 'mySQL -käyttäjätili, jota käytetään BBS:ään yhdistämiseen',
  'db_password' => 'Tietokannan salasana',
  'db_password_explanation' => 'MySQL -käyttäjätilin salasana',
  'full_forum_url' => 'Forumin URL',
  'full_forum_url_explanation' => 'BBS -applikaatiosi koko URL (anna myös http:// -osuus, esim. http://www.domain.tld/foorumi)',
  'relative_path_of_forum_from_webroot' => 'Foorumin polku palvelimella',
  'relative_path_of_forum_from_webroot_explanation' => 'BBS-applikaatiosi polku juurihakemistosta, (esim. jos BBS:si sijaitsee osoitteessa http://www.domain.tld/foorumi/, anna &quot;/foorumi/&quot; tähän kenttään)',
  'relative_path_to_config_file' => 'BBS-configtiedoston polku palvelimella',
  'relative_path_to_config_file_explanation' => 'BBS:n polku Copperminen hakemistossa (esim. &quot;../foorumi/&quot;, jos BBS sijaitsee osoitteessa http://www.domain.tld/foorumi/ ja Coppermine osoitteessa http://www.domain.tld/gallery/)',
  'cookie_prefix' => 'Evästeen prefix',
  'cookie_prefix_explanation' => 'Tämä on BBS:si evästeen nimi',
  'table_prefix' => 'taulukon prefix',
  'table_prefix_explanation' => 'Tämän täytyy olla sama kuin BBS:si prefix, kun asensit sen.',
  'user_table' => 'Käyttäjätaulu',
  'user_table_explanation' => '(yleensä oletusarvo on ok, paitsi jos BBS:si asennus ei ole standardi)',
  'session_table' => 'Sessiotaulu',
  'session_table_explanation' => '(yleensä oletusarvo on ok, paitsi jos BBS:si asennus ei ole standardi)',
  'group_table' => 'Ryhmätaulu',
  'group_table_explanation' => '(yleensä oletusarvo on ok, paitsi jos BBS:si asennus ei ole standardi)',
  'group_relation_table' => 'Suhteellinen ryhmätaulu',
  'group_relation_table_explanation' => '(yleensä oletusarvo on ok, paitsi jos BBS:si asennus ei ole standardi)',
  'group_mapping_table' => 'Ryhmän mappaustaulu',
  'group_mapping_table_explanation' => '(yleensä oletusarvo on ok, paitsi jos BBS:si asennus ei ole standardi)',
  'use_standard_groups' => 'Käytä standardeja BBS-käyttäjäryhmiä',
  'use_standard_groups_explanation' => 'Käytä standardeja (valmiita) käyttäjäryhmiä (suositeltu). Tämä tyhjentää kaikki itse luodut käyttäjäryhmät. Ota tämä vaihtoehto pois käytöstä vain, jos TODELLA tiedät, mitä olet tekemässä!',
  'validating_group' => 'Validoiva ryhmä',
  'validating_group_explanation' => 'BBS:n ryhmän ID, jossa validoinnin tarvitsevat käyttäjätilit sijaitsevat (yleensä oletusasetus on ok, paitsi jos BBS -asennuksesi ei ole standardi)',
  'guest_group' => 'Vierasryhmä',
  'guest_group_explanation' => 'BBS:n ryhmän ID, jossa vieraat (anonyymit käyttäjät) sijaitsevat (oletusasetus on yleensä ok, muuta vain, jos tiedät, mitä teet)',
  'member_group' => 'Jäsenryhmä',
  'member_group_explanation' => 'BBS:n ryhmän ID, jokka &quot;tavallisten&quot; käyttäjien tilit sijaitsevat (oletusasetus on yleensä ok, muuta vain, jos tiedät, mitä teet)',
  'admin_group' => 'Ylläpitoryhmä',
  'admin_group_explanation' => 'BBS:n ryhmän ID, jolla ylläpitäjät sijaitsevat (oletusasetus on yleensä ok, muuta vain, jos tiedät, mitä teet)',
  'banned_group' => 'Bannattujen ryhmä',
  'banned_group_explanation' => 'BBS:n ryhmän ID, jossa bannatut käyttäjät sijaitsevat (oletusasetus on yleensä ok, muuta vain, jos tiedät, mitä teet)',
  'global_moderators_group' => 'Globaali moderaattorien ryhmä',
  'global_moderators_group_explanation' => 'BBS:n ryhmän ID, jossa globaalit moderaattori sijaitsevat (oletusasetus on yleensä ok, muuta vain, jos tiedät, mitä teet)',
  'special_settings' => 'BBS-kohtaiset asetukset',
  'logout_flag' => 'phpBB-versio (uloskirjautumislippu, logout flag)',
  'logout_flag_explanation' => 'Mikä on BBS -versiosi (tämä asetus määrittelee, miten uloskirjautumiset hoidetaan)',
  'use_post_based_groups' => 'Käytä post-pohjaisia ryhmiä?',
  'logout_flag_yes' => '2.0.5 tai suurempi',
  'logout_flag_no' => '2.0.4 tai alempi',
  'use_post_based_groups_explanation' => 'Otetaanko huomioon BBS-ryhmät, jotka on määritelty postien määrän mukaan (mahdollistaa hienojakoisen oikeuksien hallinnan) vai vain oletusryhmät (helpottaa ylläpitoa, suositeltava). Voit vaihtaa tätä asetusta myöhemminkin.',
  'use_post_based_groups_yes' => 'kyllä',
  'use_post_based_groups_no' => 'ei',
  'error_title' => 'Sinun on korjattava nämä virheet, ennen kuin voit jatkaa. Palaa edelliseen näkymään.',
  'error_specify_bbs' => 'Sinun on määriteltävä, mihin applikaatioon haluat yhdistää Copperminen asennuksen.',
  'error_no_blank_name' => 'Et voi jättää tyhjäksi yhteystiedoston nimeä.',
  'error_no_special_chars' => 'Yhteystiedoston nimessä ei saa olla muita erikoismerkkejä kuin alaviiva (_) ja väliviiva (-)!',
  'error_bridge_file_not_exist' => 'Yhteystiedostoa ei löydy palvelimelta. Tarkista, onko se varmasti lisätty sinne.',
  'finalize' => 'laita päälle/pois päältä BBS -integrointi',
  'finalize_explanation' => 'Tähän asti määrittelemäsi asetukset on kirjoitettu tietokantaan, mutta BBS-integrointia ei ole laitettu päälle. Voit kääntää integroinnin päälle/pois milloin tahansa myöhemminkin. Varmista, että muistat Copperminen ylläpitotunnuksen ja salasanan. Voit tarvita niitä myöhemmin tehdessäsi muutoksia. Jos jokin menee vikaan, mene kohteeseen %s ja käännä BBS-integrointi pois päältä käyttäen alkuperäistä BBS-yhdistämätöntä ylläpitotunnusta. (yleensä se, joka on luotu Copperminea asennettaessa.).',
  'your_bridge_settings' => 'Yhteysasetuksesi',
  'title_enable' => 'Käännä integrointi päälle kohteeseen %s',
  'bridge_enable_yes' => 'käännä päälle',
  'bridge_enable_no' => 'käännä pois päältä',
  'error_must_not_be_empty' => 'ei saa olla tyhjä',
  'error_either_be' => 'täytyy olla joko %s tai %s',
  'error_folder_not_exist' => 'Hakemistoa %s ei löydy. Korjaa %s:lle antamasi arvo',
  'error_cookie_not_readible' => 'Coppermine ei voi lukea %s nimistä evästettä. Korjaa %s:lle antamasi arvo, tai mene BBS -ylläpitopaneeliisi ja varmista, että eväste on Copperminen luettavissa.',
  'error_mandatory_field_empty' => 'Et voi jättää kenttää %s tyhjäksi - täytä tarvittava arvo.',
  'error_no_trailing_slash' => 'Kentän %s lopussa ei saa olla kauttaviivaa.',
  'error_trailing_slash' => 'Kentän %s lopussa pitää olla kauttaviiva.',
  'error_db_connect' => 'MySQL -tietokantaan ei voitu yhdistää antamillasi tiedoilla. MySQL sanoi näin:',
  'error_db_name' => 'Vaikka Coppermine pystyi yhdistämään, se ei löytänyt tietokantaa %s. Varmista, että %s on määritelty oikein. MySQL sanoi näin:',
  'error_prefix_and_table' => '%s ja ',
  'error_db_table' => 'Taulua %s ei löytynyt. Varmista, että %s on määritelty oikein.',
  'recovery_title' => 'Yhteysohjelma (Bridge Manager): hätäpalautus',
  'recovery_explanation' => 'Jos tulit ylläpitämään Coppermine-gallerian BBS -integrointia, sinun on ensin kirjauduttava sisään ylläpitotunnuksilla. Jos et pysty kirjautumaan, koska yhteys ei toimi, voit poistaa BBS-integroinnin käytöstä tällä sivulla. Et kirjaudu sisään antamalla tunnuksesi ja salasanasi, vaan se pelkästään ottaa BBS-integroinnin pois käytöstä. Tarkista dokumentaatiosta tarkemmin.',
  'username' => 'Käyttäjätunnus',
  'password' => 'Salasana',
  'disable_submit' => 'lähetä',
  'recovery_success_title' => 'Authorisointi onnistui',
  'recovery_success_content' => 'Poistit BBS-yhteyden käytöstä. Coppermine-asennus toimii nyt itsenäisesti.',
  'recovery_success_advice_login' => 'Kirjaudu yllpitotunnuksilla muuttaaksesi yhteysasetuksia tai ottaaksesi BBS-integroinnin taas käyttöön.',
  'goto_login' => 'Kirjautumissivulle',
  'goto_bridgemgr' => 'Yhteyshallintaan',
  'recovery_failure_title' => 'Authorisointi epäonnistui',
  'recovery_failure_content' => 'Annoit väärän tunnisteen. Sinun on annettava itsenäisen Copperminen ylläpitotilin tiedot. (yleensä ne tunnukset, jotka luotiin alunperin Copperminea asennettaessa).',
  'try_again' => 'yritä uudelleen',
  'recovery_wait_title' => 'Odotusaika ei vielä kulunut',
  'recovery_wait_content' => 'Tietoturvasyistä tämä scripti ei hyväksy vääriä kirjautumisyrityksiä pienin väliajoin. Sinun on odotettava hetki ja yritettävä sitten uudelleen.',
  'wait' => 'odota',
  'create_redir_file' => 'Luo uudelleenohjaustiedosto (suositeltava)',
  'create_redir_file_explanation' => 'Uudelleenohjataksesi käyttäjät takaisin Coppermineen sen jälkeen kun he ovat kirjautuneet BBS:ääsi, tarvitset uudelleenohjaustiedoston BBs-hakemistoosi. Kun tämä valinta on päällä, yhteyshallinta yrittää luoda tiedoston tai antaa sinulle valmiin koodin, jonka voit kopioida ja liittää luodaksesi tiedoston itse.',
  'browse' => 'selaa',
);

// ------------------------------------------------------------------------- //
// File calendar.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('CALENDAR_PHP')) $lang_calendar_php = array(
  'title' => 'Kalenteri', //cpg1.4
  'close' => 'Sulje', //cpg1.4
  'clear_date' => 'Poista päivämäärä', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
  'miss_param' => 'Toimintoon \'%s\' tarvittavat parametrit puuttuvat!',
  'unknown_cat' => 'Valittua kategoriaa ei ole tietokannassa',
  'usergal_cat_ro' => 'Käyttäjägallerioiden kategoriaa ei voida poistaa!',
  'manage_cat' => 'Hallitse kategorioita',
  'confirm_delete' => 'Haluatko varmasti POISTAA tämän kategorian', //js-alert
  'category' => 'Kategoria',
  'operations' => 'Toiminnot',
  'move_into' => 'Siirrä kohteeseen',
  'update_create' => 'Päivitä/Luo kategoria',
  'parent_cat' => 'Yläkategoria',
  'cat_title' => 'Kategorian otsikko',
  'cat_thumb' => 'Kategorian thumbnaili',
  'cat_desc' => 'Kategorian kuvaus',
  'categories_alpha_sort' => 'Järjestä kategoriat aakkosten mukaan (oman järjestyksen sijaan)', //cpg1.4
  'save_cfg' => 'Tallenna', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File admin.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('ADMIN_PHP')) $lang_admin_php = array(
  'title' => 'Asetukset', //cpg1.4
  'manage_exif' => 'Hallitse exif-tiedon näyttämistä', //cpg1.4
  'manage_plugins' => 'Hallitse plugineita', //cpg1.4
  'manage_keyword' => 'Hallitse hakusanoja', //cpg1.4
  'restore_cfg' => 'Palauta oletusasetukset',
  'save_cfg' => 'Tallenna uudet asetukset',
  'notes' => 'Huomaa',
  'info' => 'Info',
  'upd_success' => 'Copperminen asetukset päivitetty',
  'restore_success' => 'Copperminen oletusasetukset palautettu',
  'name_a' => 'Nimen mukaan nousevasti',
  'name_d' => 'Nimen mukaan laskevasti',
  'title_a' => 'Otsikon mukaan nousevasti',
  'title_d' => 'Otsikon mukaan laskevasti',
  'date_a' => 'Päivämäärän mukaan nousevasti',
  'date_d' => 'Päivämäärän mukaan laskevasti',
  'pos_a' => 'Sijainnin mukaan nousevasti', //cpg1.4
  'pos_d' => 'Sijainnin mukaan laskevasti', //cpg1.4
  'th_any' => 'Pisin sivu',
  'th_ht' => 'Korkeus',
  'th_wd' => 'Leveys',
  'label' => 'nimi',
  'item' => 'kuva',
  'debug_everyone' => 'Kaikki',
  'debug_admin' => 'Vain ylläpito',
  'no_logs'=> 'Pois päältä', //cpg1.4
  'log_normal'=> 'Normaali', //cpg1.4
  'log_all' => 'Kaikki', //cpg1.4
  'view_logs' => 'Näytä lokit', //cpg1.4
  'click_expand' => 'klikkaa osion nimeä laajentaaksesi näkymän', //cpg1.4
  'expand_all' => 'Laajenna kaikki', //cpg1.4
  'notice1' => '(*) Näitä asetuksia ei pitäisi muuttaa, jos sinulla on jo kuvia tietokannassasi.', //cpg1.4 - (relocated)
  'notice2' => '(**) Kun muutat tätä asetusta, se vaikuttaa vain uusiin tiedostoihin. Ei kannata muuttaa asetusta, jos sinulla on jo kuvia tietokannassa. Voit kuitenkin muokata kaikki vanhatkin kuvat vastaamaan tätä asetusta &quot;<a href="util.php">ylläpitotyökalujen</a> avulla (muuta kuvien koko)&quot;.', //cpg1.4 - (relocated)
  'notice3' => '(***) Kaikki lokit kirjoitetaan englanniksi.', //cpg1.4 - (relocated)
  'bbs_disabled' => 'Tämä on pois päältä, jos käytät bb-integrointia.', //cpg1.4
  'auto_resize_everyone' => 'Kaikki', //cpg1.4
  'auto_resize_user' => 'Vain käyttäjä', //cpg1.4
  'ascending' => 'nousevasti', //cpg1.4
  'descending' => 'laskevasti', //cpg1.4
);

if (defined('ADMIN_PHP')) $lang_admin_data = array(
  'Yleiset asetukset',
  array('Gallerian nimi', 'gallery_name', 0, 'f=index.htm&amp;as=admin_general_name&amp;ae=admin_general_name_end'), //cpg1.4
  array('Gallerian kuvaus', 'gallery_description', 0, 'f=index.htm&amp;as=admin_general_description&amp;ae=admin_general_description_end'), //cpg1.4
  array('Gallerian ylläpitäjän sähköpostiosoite', 'gallery_admin_email', 0, 'f=index.htm&amp;as=admin_general_email&amp;ae=admin_general_email_end'), //cpg1.4
  array('Gallerian URL (ei \'index.php\':ta tai vastaavaa loppuun)', 'ecards_more_pic_target', 0, 'f=index.htm&amp;as=admin_general_coppermine-url&amp;ae=admin_general_coppermine-url_end'), //cpg1.4
  array('Kotisivusi URL', 'home_target', 0, 'f=index.htm&amp;as=admin_general_home-url&amp;ae=admin_general_home-url_end'), //cpg1.4
  array('Salli suosikkien lataus zip-tiedostona', 'enable_zipdownload', 1, 'f=index.htm&amp;as=admin_general_zip-download&amp;ae=admin_general_zip-download_end'), //cpg1.4
  array('Aikavyöhyke suhteessa GMT:hen (nykyinen aika: ' . localised_date(-1, $comment_date_fmt) . ')','time_offset',0, 'f=index.htm&amp;as=admin_general_time-offset&amp;ae=admin_general_time-offset_end&amp;top=1'), //cpg1.4
  array('Kryptatut salasanat (ei voida kumota)','enable_encrypted_passwords',1, 'f=index.htm&amp;as=admin_general_encrypt_password_start&amp;ae=admin_general_encrypt_password_end&amp;top=1'), // cpg 1.4
  array('Ohje-kuvakkeet (vain englanniksi)','enable_help',9, 'f=index.htm&amp;as=admin_general_help&amp;ae=admin_general_help_end'), //cpg1.4
  array('Klikattavat hakusanat hakusivulla','clickable_keyword_search',14, 'f=index.htm&amp;as=admin_general_keywords_start&amp;ae=admin_general_keywords_end'), //cpg1.4
  array('Pluginit', 'enable_plugins', 12, 'f=index.htm&amp;as=admin_general_enable-plugins&amp;ae=admin_general_enable-plugins_end'),  //cpg1.4
  array('Salli ei-reititettävien (yksityisten) IP-osoitteiden bannaaminen', 'ban_private_ip', 1,  'f=index.htm&amp;as=admin_general_private-ip&amp;ae=admin_general_private-ip_end'), //cpg1.4
  array('Selattava tiedostojenlisäyskäyttöliittymä', 'browse_batch_add', 1, 'f=index.htm&amp;as=admin_general_browsable_batch_add&amp;ae=admin_general_browsable_batch_add_end'), //cpg1.4

  'Kieli- ja merkistöasetukset',
  array('Kieli', 'lang', 5, 'f=index.htm&amp;as=admin_language_language&amp;ae=admin_language_language_end'), //cpg1.4
  array('Näytä lause englanniksi, jos käännöstä ei ole?', 'language_fallback', 1, 'f=index.htm&amp;as=admin_language_fallback&amp;ae=admin_language_fallback_end'), //cpg1.4
  array('Merkistö', 'charset', 4, 'f=index.htm&amp;as=admin_language_charset&amp;ae=admin_language_charset_end'), //cpg1.4
  array('Näytä kielilista', 'language_list', 1, 'f=index.htm&amp;as=admin_language_list&amp;ae=admin_language_list_end'), //cpg1.4
  array('Näytä kieliliput', 'language_flags', 8, 'f=index.htm&amp;as=admin_language_flags&amp;ae=admin_language_flags_end&amp;top=1'), //cpg1.4
  array('Näytä &quot;resetointi&quot; kielivalinnoissa', 'language_reset', 1, 'f=index.htm&amp;as=admin_language_reset&amp;ae=admin_language_reset_end&amp;top=1'), //cpg1.4
  //array('Näytä edellinen/seuraava täbätyissä sivuissa', 'previous_next_tab', 1), //cpg1.4

  'Teeman asetukset',
  array('Teema', 'theme', 6, 'f=index.htm&amp;as=admin_theme_theme&amp;ae=admin_theme_theme_end'), //cpg1.4
  array('Näytä teemalista', 'theme_list', 1, 'f=index.htm&amp;as=admin_theme_theme_list&amp;ae=admin_theme_theme_list_end'), //cpg1.4
  array('Näytä &quot;resetointi&quot; teemavalinnoissa', 'theme_reset', 1, 'f=index.htm&amp;as=admin_theme_theme_reset&amp;ae=admin_theme_theme_reset_end'), //cpg1.4
  array('Näytä FAQ', 'display_faq', 1, 'f=index.htm&amp;as=admin_theme_faq&amp;ae=admin_theme_faq_end'), //cpg1.4
  array('Oman menulinkin nimi', 'custom_lnk_name', 0,'f=index.htm&amp;as=admin_theme_custom_lnk_name&amp;ae=admin_theme_custom_lnk_name_end'), //cpg1.4
  array('Oman menulinkin URL', 'custom_lnk_url', 0,'f=index.htm&amp;as=admin_language_custom_lnk_url&amp;ae=admin_language_custom_lnk_url_end'), //cpg1.4
  array('Näytä bbcode-ohje', 'show_bbcode_help', 1, 'f=index.htm&amp;as=admin_theme_bbcode&amp;ae=admin_theme_bbcode_end&amp;top=1'), //cpg1.4
  array('Näytä XHTML- ja CSS-yhteensopivuuslaatikot','vanity_block',1, 'f=index.htm&amp;as=vanity_block&amp;ae=vanity_block_end'), //cpg1.4
  array('Polku omaan headeriin', 'custom_header_path', 0, 'f=index.htm&amp;as=admin_theme_include_path_start&amp;ae=admin_theme_include_path_end'), //cpg1.4
  array('Polku omaan footteriin', 'custom_footer_path', 0, 'f=index.htm&amp;as=admin_theme_include_path_start&amp;ae=admin_theme_include_path_end'), //cpg1.4

  'Albumien näyttäminen',
  array('Päätaulukon leveys (pikseleinä tai %)', 'main_table_width', 0, 'f=index.htm&amp;as=admin_album_table-width&amp;ae=admin_album_table-width_end'), //cpg1.4
  array('Kategoriatasojen määrä näytöllä', 'subcat_level', 0, 'f=index.htm&amp;as=admin_album_category-levels&amp;ae=admin_album_category-levels_end'), //cpg1.4
  array('Albumien määrä näytöllä', 'albums_per_page', 0, 'f=index.htm&amp;as=admin_album_number&amp;ae=admin_album_number_end'), //cpg1.4
  array('Sarakkeiden määrä albumilistassa', 'album_list_cols', 0, 'f=index.htm&amp;as=admin_album_columns&amp;ae=admin_album_columns_end'), //cpg1.4
  array('Thumbnailien koko pikseleinä', 'alb_list_thumb_size', 0, 'f=index.htm&amp;as=admin_album_thumbnail-size&amp;ae=admin_album_thumbnail-size_end'), //cpg1.4
  array('Etusivun sisältö', 'main_page_layout', 0, 'f=index.htm&amp;as=admin_album_list_content&amp;ae=admin_album_list_content_end'), //cpg1.4
  array('Näytä ensimmäisen tason albumithumbnailit kategorioissa','first_level',1, 'f=index.htm&amp;as=admin_album_first-level_thumbs&amp;ae=admin_album_first-level_thumbs_end'), //cpg1.4
  array('Järjestä kategoriat aakkosten mukaan (oman järjestyksen sijaan)','categories_alpha_sort',1, 'f=index.htm&amp;as=admin_album_list_alphasort_start&amp;ae=admin_album_list_alphasort_end'), //cpg1.4
  array('Näytä linkitettyjen tiedostojen määrä','link_pic_count',1, 'f=index.htm&amp;as=admin_album_linked_files_start&amp;ae=admin_album_linked_files_end'), //cpg1.4

  'Thumbnailien näyttäminen',
  array('Sarakkeiden määrä thumbnail-sivulla', 'thumbcols', 0, 'f=index.htm&amp;as=admin_thumbnail_columns&amp;ae=admin_thumbnail_columns_end'), //cpg1.4
  array('Rivien määrä thumbnail-sivulla', 'thumbrows', 0, 'f=index.htm&amp;as=admin_thumbnail_rows&amp;ae=admin_thumbnail_rows_end'), //cpg1.4
  array('Tabien enimmäismäärä', 'max_tabs', 10, 'f=index.htm&amp;as=admin_thumbnail_tabs&amp;ae=admin_thumbnail_tabs_end'), //cpg1.4
  array('Näytä tiedoston otsake (otsikon lisäksi) thumbnailin alla', 'caption_in_thumbview', 1, 'f=index.htm&amp;as=admin_thumbnail_display_caption&amp;ae=admin_thumbnail_display_caption_end'), //cpg1.4
  array('Näytä näyttökertojen määrä thumbnailin alla', 'views_in_thumbview', 1, 'f=index.htm&amp;as=admin_thumbnail_display_views&amp;ae=admin_thumbnail_display_views_end'), //cpg1.4
  array('Näytä kommenttien määrä thumbnailin alla', 'display_comment_count', 1, 'f=index.htm&amp;as=admin_thumbnail_display_comments&amp;ae=admin_thumbnail_display_comments_end'), //cpg1.4
  array('Näytä kuvan lisääjän nimi thumbnailin alla', 'display_uploader', 1, 'f=index.htm&amp;as=admin_thumbnail_display_uploader&amp;ae=admin_thumbnail_display_uploader_end'), //cpg1.4
  //array('Näytä ylläpitäjälisääjän nimi thumbnailin alla', 'display_admin_uploader', 1, 'f=index.htm&amp;as=admin_thumbnail_display_admin_uploader&amp;ae=admin_thumbnail_display_admin_uploader_end'), //cpg1.4
  array('Näytä tiedostonimi thumbnailin alla', 'display_filename', 1, 'f=index.htm&amp;as=admin_thumbnail_display_filename&amp;ae=admin_thumbnail_display_filename_end'), //cpg1.4
  array('Näytä albumin kuvaus', 'alb_desc_thumb', 1, 'f=index.htm&amp;as=admin_thumbnail_display_description&amp;ae=admin_thumbnail_display_description_end'), //cpg1.4
  array('Tiedostojen oletusjärjestys', 'default_sort_order', 3, 'f=index.htm&amp;as=admin_thumbnail_default_sortorder&amp;ae=admin_thumbnail_default_sortorder_end'), //cpg1.4
  array('Äänien vähimmäismäärä, jotta pääsee \'suosituimmat\' -listalle', 'min_votes_for_rating', 0, 'f=index.htm&amp;as=admin_thumbnail_minimum_votes&amp;ae=admin_thumbnail_minimum_votes_end'), //cpg1.4

  'Kuvien näyttäminen', //cpg1.4
  array('Kuvataulukon leveys (pikseleinä or %)', 'picture_table_width', 0, 'f=index.htm&amp;as=admin_image_comment_table-width&amp;ae=admin_image_comment_table-width_end'), //cpg1.4
  array('Tiedostotieto näkyvissä oletuksena', 'display_pic_info', 1, 'f=index.htm&amp;as=admin_image_comment_info_visible&amp;ae=admin_image_comment_info_visible_end'), //cpg1.4
  array('Kuvan kuvauksen enimmäispituus', 'max_img_desc_length', 0, 'f=index.htm&amp;as=admin_image_comment_descr_length&amp;ae=admin_image_comment_descr_length_end'), //cpg1.4
  array('Kirjainten enimmäismäärä sanassa', 'max_com_wlength', 0, 'f=index.htm&amp;as=admin_image_comment_chars_per_word&amp;ae=admin_image_comment_chars_per_word_end'), //cpg1.4
  array('Näytä filmi (edelliset ja seuraavat kuvat)', 'display_film_strip', 1, 'f=index.htm&amp;as=admin_image_comment_filmstrip_toggle&amp;ae=admin_image_comment_filmstrip_toggle_end'), //cpg1.4
  array('Näytä tiedostonimi filmithumbnailin alla', 'display_film_strip_filename', 1, 'f=index.htm&amp;as=admin_image_comment_display_film_strip_filename&amp;ae=admin_image_comment_display_film_strip_filename_end'), //cpg1.4
  array('Kuvien määrä filmissä', 'max_film_strip_items', 0, 'f=index.htm&amp;as=admin_image_comment_filmstrip_number&amp;ae=admin_image_comment_filmstrip_number_end'), //cpg1.4
  array('Kuvaesityksen aikaväli millisekunteina (1 sekunti = 1000 millisekuntia)', 'slideshow_interval', 0, 'f=index.htm&amp;as=admin_image_comment_slideshow_interval&amp;ae=admin_image_comment_slideshow_interval_end'), //cpg1.4

  'Kommenttiasetukset', //cpg1.4
  array('Suodata rumat sanat kommenteissa', 'filter_bad_words', 1, 'f=index.htm&amp;as=admin_image_comment_bad_words&amp;ae=admin_image_comment_bad_words_end'), //cpg1.4
  array('Salli hymiöt kommenteissa', 'enable_smilies', 1, 'f=index.htm&amp;as=admin_image_comment_smilies&amp;ae=admin_image_comment_smilies_end'), //cpg1.4
  array('Salli usea peräkkäinen kommentti samalle kuvalle samalta käyttäjältä (ota floodaussuoja pois käytöstä)', 'disable_comment_flood_protect', 1, 'f=index.htm&amp;as=admin_image_comment_flood&amp;ae=admin_image_comment_flood_end'), //cpg1.4
  array('Rivien enimmäismäärä kommentissa', 'max_com_lines', 0, 'f=index.htm&amp;as=admin_image_comment_lines&amp;ae=admin_image_comment_lines_end'), //cpg1.4
  array('Kommentin enimmäispituus', 'max_com_size', 0, 'f=index.htm&amp;as=admin_image_comment_length&amp;ae=admin_image_comment_length_end'), //cpg1.4
  array('Ilmoita ylläpitäjälle kommentista sähköpostitse', 'email_comment_notification', 1, 'f=index.htm&amp;as=admin_image_comment_admin_notify&amp;ae=admin_image_comment_admin_notify_end'), //cpg1.4
  array('Kommenttien järjestys', 'comments_sort_descending', 17, 'f=index.htm&amp;as=admin_comment_sort_start&amp;ae=admin_comment_sort_end'), //cpg1.4
  array('Etuliite anonyymeille kommentoijille', 'comments_anon_pfx', 0, 'f=index.htm&amp;as=comments_anon_pfx&amp;ae=comments_anon_pfx_end'), //cpg1.4

  'Tiedosto- ja thumbnail-asetukset',
  array('JPEG -tiedostojen laatu', 'jpeg_qual', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_jpeg_quality&amp;ae=admin_picture_thumbnail_jpeg_quality_end'), //cpg1.4
  array('Thumbnailin enimmäiskoko (pisin sivu)<a href="#notice2" class="clickable_option">**</a>', 'thumb_width', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max-dimension&amp;ae=admin_picture_thumbnail_max-dimension_end'), //cpg1.4
  array('Käytä thumbnailin leveyttä, korkeutta tai pisintä sivua <a href="#notice2" class="clickable_option">**</a>', 'thumb_use', 7, 'f=index.htm&amp;as=admin_picture_thumbnail_use-dimension&amp;ae=admin_picture_thumbnail_use-dimension_end'), //cpg1.4
  array('Luo keskikokoiset kuvat','make_intermediate',1, 'f=index.htm&amp;as=admin_picture_thumbnail_intermediate_toggle&amp;ae=admin_picture_thumbnail_intermediate_toggle_end'), //cpg1.4
  array('Enimmäisleveys tai korkeus keskikokoiselle kuvalle/videolle <a href="#notice2" class="clickable_option">**</a>', 'picture_width', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_intermediate_dimension&amp;ae=admin_picture_thumbnail_intermediate_dimension_end'), //cpg1.4
  array('Lisättävien tiedostojen enimmäiskoko (KB)', 'max_upl_size', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max_upload_size&amp;ae=admin_picture_thumbnail_max_upload_size_end'), //cpg1.4
  array('Lisättävien kuvien/videoiden enimmäisleveys tai korkeus (pikseleinä)', 'max_upl_width_height', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max_upload_dimension&amp;ae=admin_picture_thumbnail_max_upload_dimension_end'), //cpg1.4
  array('Pienennä kuvia automaattisesti, jos ne ovat liian suuria', 'auto_resize', 16, 'f=index.htm&amp;as=admin_picture_thumbnail_auto-resize&amp;ae=admin_picture_thumbnail_auto-resize_end'), //cpg1.4

  'Tiedosto- ja thumbnail-lisäasetukset',
  array('Albumit voivat olla yksityisiä (Huomaa, että jos vaihdat tämän asetuksesta \'kyllä\' asetukseen \'ei\', kaikki nykyisin yksityiset albumit muuttuvat julkisiksi)', 'allow_private_albums', 1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_private_toggle&amp;ae=admin_picture_thumb_advanced_private_toggle_end'), //cpg1.4
  array('Näytä yksityisen albumin ikoni kirjautumattomille käyttäjille','show_private',1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_private_icon_show&amp;ae=admin_picture_thumb_advanced_private_icon_show_end'), //cpg1.4
  array('Kielletyt merkit tiedostonimissä', 'forbiden_fname_char',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_filename_forbidden_chars&amp;ae=admin_picture_thumb_advanced_filename_forbidden_chars_end'), //cpg1.4
  //array('Hyväksytyt tiedostopäätteet lisättäville kuville', 'allowed_file_extensions',0, 'f=index.htm&amp;as=&amp;ae=_end'), //cpg1.4
  array('Hyväksytyt kuvatyypit', 'allowed_img_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_pic_extensions&amp;ae=admin_picture_thumb_advanced_pic_extensions_end'), //cpg1.4
  array('Hyväksytyt videotyypit', 'allowed_mov_types',0, 'f=index.htm&amp;as=admin_thumbs_advanced_movie&amp;ae=admin_thumbs_advanced_movie_end'), //cpg1.4
  array('Videon automaattinen käynnistys', 'media_autostart',1, 'f=index.htm&amp;as=admin_movie_autoplay&amp;ae=admin_movie_autoplay_end'), //cpg1.4
  array('Hyväksytyt äänitiedostot', 'allowed_snd_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_audio_extensions&amp;ae=admin_picture_thumb_advanced_audio_extensions_end'), //cpg1.4
  array('Hyväksytyt dokumenttityypit', 'allowed_doc_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_doc_extensions&amp;ae=admin_picture_thumb_advanced_doc_extensions_end'), //cpg1.4
  array('Kuvien koon muuttamisen menetelmä','thumb_method',2, 'f=index.htm&amp;as=admin_picture_thumb_advanced_resize_method&amp;ae=admin_picture_thumb_advanced_resize_method_end'), //cpg1.4
  array('ImageMagickin \'convert\' -toiminnon polku (esim. /usr/bin/X11/)', 'impath', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_im_path&amp;ae=admin_picture_thumb_advanced_im_path_end'), //cpg1.4
  //array('Hyväksytyt kuvatyypit (vain ImageMagickille)', 'allowed_img_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_allowed_imagetypes&amp;ae=admin_picture_thumb_advanced_allowed_imagetypes_end'), //cpg1.4
  array('Komentorivivalinnat ImageMagickille', 'im_options', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_im_commandline&amp;ae=admin_picture_thumb_advanced_im_commandline_end'), //cpg1.4
  array('Lue JPEG-kuvien EXIF-tieto', 'read_exif_data', 13, 'f=index.htm&amp;as=admin_picture_thumb_advanced_exif&amp;ae=admin_picture_thumb_advanced_exif_end'), //cpg1.4
  array('Lue JPEG-kuvien IPTC-tieto', 'read_iptc_data', 1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_iptc&amp;ae=admin_picture_thumb_advanced_iptc_end'), //cpg1.4
  array('Albumihakemisto <a href="#notice1" class="clickable_option">*</a>', 'fullpath', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_albums_dir&amp;ae=admin_picture_thumb_advanced_albums_dir_end'), //cpg1.4
  array('Käyttäjien tiedostojen hakemisto <a href="#notice1" class="clickable_option">*</a>', 'userpics', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_userpics_dir&amp;ae=admin_picture_thumb_advanced_userpics_dir_end'), //cpg1.4
  array('Etuliite keskikokoisille kuville <a href="#notice1" class="clickable_option">*</a>', 'normal_pfx', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_intermediate_prefix&amp;ae=admin_picture_thumb_advanced_intermediate_prefix_end'), //cpg1.4
  array('Etuliite thumbnaileille <a href="#notice1" class="clickable_option">*</a>', 'thumb_pfx', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_thumbs_prefix&amp;ae=admin_picture_thumb_advanced_thumbs_prefix_end'), //cpg1.4
  array('Hakemistojen oletusoikeudet', 'default_dir_mode', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_chmod_folder&amp;ae=admin_picture_thumb_advanced_chmod_folder_end'), //cpg1.4
  array('Tiedostojen oletusoikeudet', 'default_file_mode', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_chmod_files&amp;ae=admin_picture_thumb_advanced_chmod_files_end'), //cpg1.4

  'Käyttäjäasetukset',
  array('Salli käyttäjärekisteröinnit', 'allow_user_registration', 1, 'f=index.htm&amp;as=admin_allow_registration&amp;ae=admin_allow_registration_end'), //cpg1.4
  array('Salli kirjautumattomat käyttäjät (vieraat tai anonyymit)', 'allow_unlogged_access', 1, 'f=index.htm&amp;as=admin_allow_unlogged_access&amp;ae=admin_allow_unlogged_access_end'), //cpg1.4
  array('Käyttäjärekisteröinnit vaativat sähköpostivarmistuksen', 'reg_requires_valid_email', 1, 'f=index.htm&amp;as=admin_registration_verify&amp;ae=admin_registration_verify_end'), //cpg1.4
  array('Ilmoita rekisteröinneistä ylläpidolle sähköpostitse', 'reg_notify_admin_email', 1, 'f=index.htm&amp;as=admin_registration_notify&amp;ae=admin_registration_notify_end'), //cpg1.4
  array('Ylläpidon aktivointi rekisteröinneille', 'admin_activation', 1, 'f=index.htm&amp;as=admin_activation&amp;ae=admin_activation_end'),  //cpg1.4
  array('Salli kahdelle käyttäjälle sama sähköpostiosoite', 'allow_duplicate_emails_addr', 1, 'f=index.htm&amp;as=admin_allow_duplicate_emails_addr&amp;ae=admin_allow_duplicate_emails_addr_end'), //cpg1.4
  array('Ilmoita ylläpidolle lisätyistä kuvista, jotka vaativat hyväksynnän', 'upl_notify_admin_email', 1, 'f=index.htm&amp;as=admin_approval_notify&amp;ae=admin_approval_notify_end'), //cpg1.4
  array('Salli käyttäjälistan näkeminen kirjautuneille käyttäjille', 'allow_memberlist', 1, 'f=index.htm&amp;as=admin_user_memberlist&amp;ae=admin_user_memberlist_end'), //cpg1.4
  array('Salli käyttäjien vaihtaa sähköpostiosoitteita profiileissaan', 'allow_email_change', 1, 'f=index.htm&amp;as=admin_user_allow_email_change&amp;ae=admin_user_allow_email_change_end'), //cpg1.4
  array('Salli käyttäjien hallita lisäämiään kuvia julkisissa gallerioissa', 'users_can_edit_pics', 1, 'f=index.htm&amp;as=admin_user_editpics_public_start&amp;ae=admin_user_editpics_public_end'), //cpg1.4
  array('Väärien kirjautumisyritysten enimmäismäärä ennen väliaikaista bannia (välttääksesi brute force -hyökkäykset)', 'login_threshold', 0, 'f=index.htm&amp;as=admin_user_login_start&amp;ae=admin_user_login_end'), //cpg1.4
  array('Väliaikaisen (väärien kirjautumisten vuoksi) bannin kesto ', 'login_expiry', 0, 'f=index.htm&amp;as=admin_user_login_start&amp;ae=admin_user_login_end'), //cpg1.4
  array('Ylläpidolle ilmoittaminen', 'report_post', 1, 'f=index.htm&amp;as=admin_user_enable_report&amp;ae=admin_user_enable_report_end'),  //cpg1.4

// custom profile fields,  //cpg1.4
  'Omat käyttäjäprofiilin kentät (jätä tyhjiksi, jossei tarvita).
  Käytä profiilia 6 pitkille teksteille, kuten elämänkerroille', //cpg1.4
  array('Profiilin 1 nimi', 'user_profile1_name', 0, 'f=index.htm&amp;as=admin_custom&amp;ae=admin_custom_end'), //cpg1.4
  array('Profiilin 2 nimi', 'user_profile2_name', 0), //cpg1.4
  array('Profiilin 3 nimi', 'user_profile3_name', 0), //cpg1.4
  array('Profiilin 4 nimi', 'user_profile4_name', 0), //cpg1.4
  array('Profiilin 5 nimi', 'user_profile5_name', 0), //cpg1.4
  array('Profiilin 6 nimi', 'user_profile6_name', 0), //cpg1.4

  'Omat kuvatietokentät (jätä tyhjäksi, jossei tarvita)',
  array('Kentän 1 nimi', 'user_field1_name', 0, 'f=index.htm&amp;as=admin_custom_image&amp;ae=admin_custom_image_end'), //cpg1.4
  array('Kentän 2 nimi', 'user_field2_name', 0),
  array('Kentän 3 nimi', 'user_field3_name', 0),
  array('Kentän 4 nimi', 'user_field4_name', 0),

  'Evästeet',
  array('Evästeen nimi', 'cookie_name', 0, 'f=index.htm&amp;as=admin_cookie_name&amp;ae=admin_cookie_name_end'), //cpg1.4
  array('Evästeen polku', 'cookie_path', 0, 'f=index.htm&amp;as=admin_cookie_path&amp;ae=admin_cookie_path_end'), //cpg1.4

  'Sähköpostiasetukset  (yleensä mitään ei tarvitse muuttaa; jätä kaikki tyhjiksi, ellet ole varma)', //cpg1.4
  array('SMTP-palvelin (jos kenttä on tyhjä, käytetään sendmailia)', 'smtp_host', 0, 'f=index.htm&amp;as=admin_email&amp;ae=admin_email_end'), //cpg1.4
  array('SMTP-käyttäjätunnus', 'smtp_username', 0), //cpg1.4
  array('SMTP-salasana', 'smtp_password', 0), //cpg1.4

  'Lokin kerääminen ja tilastot', //cpg1.4
  array('Lokitustila <a href="#notice3" class="clickable_option">***</a>', 'log_mode', 11, 'f=index.htm&amp;as=admin_logging_log_mode&amp;ae=admin_logging_log_mode_end'), //cpg1.4
  array('Lokita e-kortit', 'log_ecards', 1, 'f=index.htm&amp;as=admin_general_log_ecards&amp;ae=admin_general_log_ecards_end'), //cpg1.4
  array('Kerää yksityiskohtaista äänestystilastoa','vote_details',1, 'f=index.htm&amp;as=admin_logging_votedetails&amp;ae=admin_logging_votedetails_end'), //cpg1.4
  array('Kerää yksityiskohtaista näyttökertatilastoa','hit_details',1, 'f=index.htm&amp;as=admin_logging_hitdetails&amp;ae=admin_logging_hitdetails_end'), //cpg1.4

  'Ylläpitoasetukset', //cpg1.4
  array('Debuggaus-tila', 'debug_mode', 9, 'f=index.htm&amp;as=debug_mode&amp;ae=debug_mode_end'), //cpg1.4
  array('Näytä ilmoitukset debuggaustilassa', 'debug_notice', 1, 'f=index.htm&amp;as=admin_misc_debug_notices&amp;ae=admin_misc_debug_notices_end'), //cpg1.4
  array('Galleria ei ole julkinen (-> offline)', 'offline', 1, 'f=index.htm&amp;as=admin_general_offline&amp;ae=admin_general_offline_end'), //cpg1.4
);


// ------------------------------------------------------------------------- //
// File db_ecard.php
// ------------------------------------------------------------------------- //

if (defined('DB_ECARD_PHP')) $lang_db_ecard_php = array(
  'title' => 'Sent ecards',
  'ecard_sender' => 'Sender',
  'ecard_recipient' => 'Recipient',
  'ecard_date' => 'Date',
  'ecard_display' => 'Display ecard',
  'ecard_name' => 'Name',
  'ecard_email' => 'Email',
  'ecard_ip' => 'IP #',
  'ecard_ascending' => 'ascending',
  'ecard_descending' => 'descending',
  'ecard_sorted' => 'Sorted',
  'ecard_by_date' => 'by date',
  'ecard_by_sender_name' => 'by sender\'s name',
  'ecard_by_sender_email' => 'by sender\'s email',
  'ecard_by_sender_ip' => 'by sender\'s IP address',
  'ecard_by_recipient_name' => 'by recipient\'s name',
  'ecard_by_recipient_email' => 'by recipient\'s email',
  'ecard_number' => 'displaying record %s to %s of %s',
  'ecard_goto_page' => 'go to page',
  'ecard_records_per_page' => 'Records per page',
  'check_all' => 'Check All',
  'uncheck_all' => 'Uncheck All',
  'ecards_delete_selected' => 'Delete selected ecards',
  'ecards_delete_confirm' => 'Are you sure you want to delete the records? Tick the checkbox!',
  'ecards_delete_sure' => 'I\'m sure',
);


// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
  'empty_name_or_com' => 'Kirjoita nimesi ja kommenttisi',
  'com_added' => 'Kommenttisi on lisätty',
  'alb_need_title' => 'Albumin otsikko puuttuu!',
  'no_udp_needed' => 'Mitään ei päivitetty.',
  'alb_updated' => 'Albumi päivitettiin.',
  'unknown_album' => 'Valittua albumia ei löydy tai sinulla ei ole oikeuksia siihen.',
  'no_pic_uploaded' => 'Kuvaa ei lisätty!<br /><br />Jos todella valitsit lisättävän kuvan pyydä ylläpitäjää tarkistamaan palvelimen asetukset...',
  'err_mkdir' => 'Hakemiston %s luonti epäonnistui!',
  'dest_dir_ro' => 'Lähdehakemistoon %s ei voitu kirjoittaa!',
  'err_move' => 'Ei voida siirtää kohdetta %s kohteeseen %s!',
  'err_fsize_too_large' => 'Kuva, jota yritit lisätä, on liian suuri. (Suurin sallittu koko on %s x %s.)', //obsolete since cpg1.3 - consider removal in cpg1.4 once upload.php has been overhauled
  'err_imgsize_too_large' => 'Kuva, jota yritit lisätä, on liian suuri. (Suurin sallittu koko on %s KB.)', //obsolete since cpg1.3 - consider removal in cpg1.4 once upload.php has been overhauled
  'err_invalid_img' => 'Tiedostoa ei tunnistettu kuvaksi.',
  'allowed_img_types' => 'Voit lisätä vain %s kuvia.',
  'err_insert_pic' => 'Tiedostoa \'%s\' ei voitu lisätä albumiin.',
  'upload_success' => 'Kuvasi lisättiin onnistuneesti.<br /><br />Se tulee näkyviin, kun ylläpitäjä hyväksyy sen.',
  'notify_admin_email_subject' => '%s - Kuva lisätty',
  'notify_admin_email_body' => '%s lisäsi kuvan, joka tarvitsee hyväksyntäsi. Käy %s',
  'info' => 'Info',
  'com_added' => 'Kommentti lisätty',
  'alb_updated' => 'Albumi päivitetty',
  'err_comment_empty' => 'Kommenttisi on tyhjä!',
  'err_invalid_fext' => 'Vain seuraavat tiedostopäätteet ovat sallittuja: <br /><br />%s.',
  'no_flood' => 'Viimeinen kommentti tälle kuvalle on sinun.<br /><br />Muuta sitä, jos haluat tehdä lisäyksiä.',
  'redirect_msg' => 'Sinut siirretään.<br /><br /><br />Klikkaa \'JATKA\' jos sivu ei päivity automaattisesti.',
  'upl_success' => 'Kuvasi lisättiin.',
  'email_comment_subject' => 'Kommentti lähetetty kuvagalleriaan',
  'email_comment_body' => 'Joku lisäsi galleriaasi kommentin. Katso se täällä',
  'album_not_selected' => 'Albumia ei ole valittu', //cpg1.4
  'com_author_error' => 'Tämä käyttäjätunnus on rekisteröity. Kirjaudu sisään tai valitse toinen nimi.', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
  'caption' => 'kuvateksti',
  'fs_pic' => 'täysikokoinen kuva',
  'del_success' => 'poistettu onnistuneesti',
  'ns_pic' => 'normaalikokoinen kuva',
  'err_del' => 'ei voida poistaa',
  'thumb_pic' => 'thumbnaili',
  'comment' => 'kommentti',
  'im_in_alb' => 'kuva albumissa',
  'alb_del_success' => 'Albumi &laquo;%s&raquo; poistettu', //cpg1.4
  'alb_mgr' => 'Albumin hallinta',
  'err_invalid_data' => 'Virheellistä tietoa saatu \'%s\'',
  'create_alb' => 'Luodaan albumi \'%s\'',
  'update_alb' => 'Päivitetään albumia \'%s\' otsikolla \'%s\' ja indeksillä \'%s\'',
  'del_pic' => 'Poista kuva',
  'del_alb' => 'Poista albumi',
  'del_user' => 'Poista käyttäjä',
  'err_unknown_user' => 'Valittua käyttäjää ei löydy!',
  'err_empty_groups' => 'Ryhmätaulukkoa ei löydy tai se on tyhjä!', //cpg1.4
  'comment_deleted' => 'Kommentti poistettiin',
  'npic' => 'Kuva', //cpg1.4
  'pic_mgr' => 'Kuvan hallinta', //cpg1.4
  'update_pic' => 'Päivitetään kuvaa \'%s\' tiedostonimellä \'%s\' ja indeksillä \'%s\'', //cpg1.4
  'username' => 'Käyttäjänimi', //cpg1.4
  'anonymized_comments' => '%s kommentti(a) anonymisoitu', //cpg1.4
  'anonymized_uploads' => '%s julkista lisäystä anonymisoitu', //cpg1.4
  'deleted_comments' => '%s kommentti(a) poistettu', //cpg1.4
  'deleted_uploads' => '%s julkista lisäystä poistettu', //cpg1.4
  'user_deleted' => 'käyttäjä %s poistettu', //cpg1.4
  'activate_user' => 'Aktivoi käyttäjä', //cpg1.4
  'user_already_active' => 'Tili on jo aktiivinen', //cpg1.4
  'activated' => 'Aktivoitu', //cpg1.4
  'deactivate_user' => 'Epäaktivoi käyttäjä', //cpg1.4
  'user_already_inactive' => 'Tili on jo epäaktiivinen', //cpg1.4
  'deactivated' => 'Epäaktivoitu', //cpg1.4
  'reset_password' => 'Resetoi salasana(t)', //cpg1.4
  'password_reset' => 'Salasana resetoitu: %s', //cpg1.4
  'change_group' => 'Vaihda pääryhmä', //cpg1.4
  'change_group_to_group' => 'Vaihdetaan ryhmästä %s ryhmään %s', //cpg1.4
  'add_group' => 'Lisää toissijainen ryhmä', //cpg1.4
  'add_group_to_group' => 'Lisätään käyttäjä %s ryhmään %s. Hän on nyt jäsen pääryhmässä %s ja toissijaisissa ryhmissä %s .', //cpg1.4
  'status' => 'Status', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File displayecard.php
// ------------------------------------------------------------------------- //

if (defined('DISPLAYECARD_PHP')) {

$lang_displayecard_php = array(
  'invalid_data' => 'The data for the ecard you are trying to access has been corrupted by your mail client. Check the link is complete.', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File displayimage.php
// ------------------------------------------------------------------------- //

if (defined('DISPLAYIMAGE_PHP')){

$lang_display_image_php = array(
  'confirm_del' => 'Haluatko varmasti POISTAA tämän kuvan? \\nKommentit poistetaan samalla.', //js-alert
  'del_pic' => 'POISTA TÄMÄ KUVA',
  'size' => '%s x %s pikseliä',
  'views' => '%s kertaa',
  'slideshow' => 'Kuvaesitys',
  'stop_slideshow' => 'PYSÄYTÄ KUVAESITYS',
  'view_fs' => 'Klikkaa kuvaa nähdäksesi se täysikokoisena',
  'edit_pic' => 'Muuta kuvan tietoja', //cpg1.4
  'crop_pic' => 'Leikkaa ja käännä',
  'set_player' => 'Vaihda soitin',
);

$lang_picinfo = array(
  'title' =>'Kuvan tiedot',
  'Filename' => 'Tiedostonimi',
  'Album name' => 'Albumin nimi',
  'Rating' => 'Arvo (%s ääntä)',
  'Keywords' => 'Hakusanat',
  'File Size' => 'Tiedostokoko',
  'Date Added' => 'Lisätty galleriaan', //cpg1.4
  'Dimensions' => 'Tarkkuus',
  'Displayed' => 'Katseltu',
  'URL' => 'URL', //cpg1.4
  'Make' => 'Make', //cpg1.4
  'Model' => 'Malli', //cpg1.4
  'DateTime' => 'Aika', //cpg1.4
  'ISOSpeedRatings'=>'ISO', //cpg1.4
  'MaxApertureValue' => 'Suurin aukonkoko', //cpg1.4
  'FocalLength' => 'Valotusaika', //cpg1.4
  'Comment' => 'Kommentti',
  'addFav'=>'Lisää suosikkeihin',
  'addFavPhrase'=>'Suosikit',
  'remFav'=>'Poista suosikeista',
  'iptcTitle'=>'IPTC-otsikko',
  'iptcCopyright'=>'IPTC-tekijänoikeudet',
  'iptcKeywords'=>'IPTC-hakusanat',
  'iptcCategory'=>'IPTC-kategoria',
  'iptcSubCategories'=>'IPTC-alakategoriat',
  'ColorSpace' => 'Väritila', //cpg1.4
  'ExposureProgram' => 'Valotusohjelma', //cpg1.4
  'Flash' => 'Salama', //cpg1.4
  'MeteringMode' => 'Meterointitila', //cpg1.4
  'ExposureTime' => 'Valotusaika', //cpg1.4
  'ExposureBiasValue' => 'Valotus bias', //cpg1.4
  'ImageDescription' => ' Kuvan kuvaus', //cpg1.4
  'Orientation' => 'Orientaatio', //cpg1.4
  'xResolution' => 'X-resoluutio', //cpg1.4
  'yResolution' => 'Y-resoluutio', //cpg1.4
  'ResolutionUnit' => 'Resoluutioyksikkö', //cpg1.4
  'Software' => 'Ohjelma', //cpg1.4
  'YCbCrPositioning' => 'YCbCrPositioning', //cpg1.4
  'ExifOffset' => 'Exif Offset', //cpg1.4
  'IFD1Offset' => 'IFD1 Offset', //cpg1.4
  'FNumber' => 'FNumber', //cpg1.4
  'ExifVersion' => 'Exif-version', //cpg1.4
  'DateTimeOriginal' => 'Alkuperäinen päivämäärä + aika', //cpg1.4
  'DateTimedigitized' => 'Digitalisoinnin päivämäärä + aika', //cpg1.4
  'ComponentsConfiguration' => 'Komponenttien konfiguraatio', //cpg1.4
  'CompressedBitsPerPixel' => 'Pakatut bitit per pikseli', //cpg1.4
  'LightSource' => 'Valonlähde', //cpg1.4
  'ISOSetting' => 'ISO-asetus', //cpg1.4
  'ColorMode' => 'Väritila', //cpg1.4
  'Quality' => 'Laatu', //cpg1.4
  'ImageSharpening' => 'Kuvan tarkennus', //cpg1.4
  'FocusMode' => 'Kohdistustila', //cpg1.4
  'FlashSetting' => 'Salama-asetus', //cpg1.4
  'ISOSelection' => 'ISO-valikoima', //cpg1.4
  'ImageAdjustment' => 'Kuvan säätö', //cpg1.4
  'Adapter' => 'Adapteri', //cpg1.4
  'ManualFocusDistance' => 'Manuaalinen tarkennusetäisyys', //cpg1.4
  'DigitalZoom' => 'Digitalinen zoomi', //cpg1.4
  'AFFocusPosition' => 'AF-kohdistuspaikka', //cpg1.4
  'Saturation' => 'Kylläisyys', //cpg1.4
  'NoiseReduction' => 'Kohinan poisto', //cpg1.4
  'FlashPixVersion' => 'Salama Pix-versio', //cpg1.4
  'ExifImageWidth' => 'Exif-kuvaleveys', //cpg1.4
  'ExifImageHeight' => 'Exif-kuvakorkeus', //cpg1.4
  'ExifInteroperabilityOffset' => 'Exif-yhteensopivuus offset', //cpg1.4
  'FileSource' => 'Tiedostolähde', //cpg1.4
  'SceneType' => 'Maisematyyppi', //cpg1.4
  'CustomerRender' => 'Asiakasrenderöijä', //cpg1.4
  'ExposureMode' => 'Valotustila', //cpg1.4
  'WhiteBalance' => 'Valkotasapaino', //cpg1.4
  'DigitalZoomRatio' => 'Digitaalinen zoomiarvo', //cpg1.4
  'SceneCaptureMode' => 'Skenen kaappaustila', //cpg1.4
  'GainControl' => 'Gain-hallinta', //cpg1.4
  'Contrast' => 'Kontrasti', //cpg1.4
  'Sharpness' => 'Tarkkuus', //cpg1.4
  'ManageExifDisplay' => 'Hallitse Exifin näyttöä', //cpg1.4
  'submit' => 'Lähetä', //cpg1.4
  'success' => 'Tiedot päivitettiin.', //cpg1.4
  'details' => 'Lisätiedot', //cpg1.4
);

$lang_display_comments = array(
  'OK' => 'OK',
  'edit_title' => 'Muuta tätä kommenttia',
  'confirm_delete' => 'Haluatko varmasti poistaa tämän kommentin?', //js-alert
  'add_your_comment' => 'Lisää kommentti',
  'name'=>'Nimi',
  'comment'=>'Kommentti',
  'your_name' => 'Vieras',
  'report_comment_title' => 'Ilmoita tämä kommentti ylläpidolle', //cpg1.4
);

$lang_fullsize_popup = array(
  'click_to_close' => 'Klikkaa kuvaa sulkeaksi ikkunan.',
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
  'title' => 'Lähetä e-kortti',
  'invalid_email' => '<font color="red"><b>Varoitus</b></font>: virheellinen sähköpostiosoite:', //cpg1.4
  'ecard_title' => 'E-kortti sinulle lähettäjältä %s',
  'error_not_image' => 'Vain kuvia voidaan lähettää e-kortteina.',
  'view_ecard' => 'Vaihtoehtoinen linkki, jos e-kortti ei näy', //cpg1.4
  'view_ecard_plaintext' => 'Nähdäksesi e-kortin, kopioi ja liitä tämä osoite selaimeesi:', //cpg1.4
  'view_more_pics' => 'Katso lisää kuvia!', //cpg1.4
  'send_success' => 'E-korttisi lähetettiin',
  'send_failed' => 'Valitettavasti palvelin ei voinut lähettää e-korttiasi...',
  'from' => 'Lähettäjä',
  'your_name' => 'Nimesi',
  'your_email' => 'Sähköpostiosoitteesi',
  'to' => 'Vastaanottaja',
  'rcpt_name' => 'Vastaanottajan nimi',
  'rcpt_email' => 'Vastaanottajan sähköpostiosoite',
  'greetings' => 'Otsikko', //cpg1.4
  'message' => 'Viesti', //cpg1.4
  'ecards_footer' => 'Lähettänyt %s IP-osoitteesta %s ajankohtana %s (Gallerian aika)', //cpg1.4
  'preview' => 'Esikatsele e-kortti', //cpg1.4
  'preview_button' => 'Esikatsele', //cpg1.4
  'submit_button' => 'Lähetä e-kortti', //cpg1.4
  'preview_view_ecard' => 'Tämä on vaihtoehtoinen linkki e-korttiin, kun se on valmis. Tämä ei toimi esikatselussa.', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File report_file.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('REPORT_FILE_PHP') || defined('DISPLAYREPORT_PHP')) $lang_report_php =array(
  'title' => 'Ilmoita ylläpitäjälle', //cpg1.4
  'invalid_email' => '<b>Varoitus</b>: virheellinen sähköpostiosoite!', //cpg1.4
  'report_subject' => 'Ilmoitus käyttäjältä %s galleriasta %s', //cpg1.4
  'view_report' => 'Vaihtoehtoinen linkki ilmoitukseen, jos se ei näy kunnolla', //cpg1.4
  'view_report_plaintext' => 'Katsoaksesi ilmoituksen, kopioi ja liitä tämä osoite selaimeesi:', //cpg1.4
  'view_more_pics' => 'Galleria', //cpg1.4
  'send_success' => 'Ilmoituksesi lähetettiin', //cpg1.4
  'send_failed' => 'Valitettavasti palveli ei voinut lähettää ilmoitustasi...', //cpg1.4
  'from' => 'Lähettäjä', //cpg1.4
  'your_name' => 'Nimesi', //cpg1.4
  'your_email' => 'Sähköpostiosoitteesi', //cpg1.4
  'to' => 'Vastaanottaja', //cpg1.4
  'administrator' => 'Ylläpitäjä/Moderaattori', //cpg1.4
  'subject' => 'Aihe', //cpg1.4
  'comment_field_name' => 'Ilmoitus kommentista käyttäjältä "%s"', //cpg1.4
  'reason' => 'Syy', //cpg1.4
  'message' => 'Viesti', //cpg1.4
  'report_footer' => 'Lähettänyt %s IP-osoitteesta %s ajankohtana %s (Gallerian aika)', //cpg1.4
  'obscene' => 'obscene', //cpg1.4
  'offensive' => 'hyökkäävä', //cpg1.4
  'misplaced' => 'ei liity aiheeseen/väärässä paikassa', //cpg1.4
  'missing' => 'hukassa', //cpg1.4
  'issue' => 'virhe/ei näy', //cpg1.4
  'other' => 'muu', //cpg1.4
  'refers_to' => 'Tiedostoilmoitus liittyy aiheeseen ', //cpg1.4
  'reasons_list_heading' => 'syy(t) ilmoitukseen:', //cpg1.4
  'no_reason_given' => 'ei annettua syytä', //cpg1.4
  'go_comment' => 'Mene kommenttiin', //cpg1.4
  'view_comment' => 'Näytä koko ilmoitus kommentin kera', //cpg1.4
  'type_file' => 'tiedosto', //cpg1.4
  'type_comment' => 'kommentti', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
  'pic_info' => 'Kuvan tiedot',
  'album' => 'Albumi',
  'title' => 'Otsikko',
  'filename' => 'Tiedostonimi', //cpg1.4
  'desc' => 'Kuvaus',
  'keywords' => 'Hakusanat',
  'new_keyword' => 'Uusi hakusana', //cpg1.4
  'new_keywords' => 'Uusia hakusanoja löydetty', //cpg1.4
  'existing_keyword' => 'Olemassaoleva hakusana', //cpg1.4
  'pic_info_str' => '%s &times; %s - %s KB - %s katselukertaa - %s ääntä',
  'approve' => 'Hyväksy tiedosto',
  'postpone_app' => 'Lykkää hyväksyntää',
  'del_pic' => 'Poista kuva',
  'del_all' => 'Poista KAIKKI kuvat', //cpg1.4
  'read_exif' => 'Lue EXIF -info uudelleen',
  'reset_view_count' => 'Resetoi laskuri',
  'reset_all_view_count' => 'Resetoi KAIKKI laskurit', //cpg1.4
  'reset_votes' => 'Resetoi äänet',
  'reset_all_votes' => 'Resetoi KAIKKI äänet', //cpg1.4
  'del_comm' => 'Poista kommentit',
  'del_all_comm' => 'Poista KAIKKI kommentit', //cpg1.4
  'upl_approval' => 'Uuden kuvan hyväksyntä', //cpg1.4
  'edit_pics' => 'Muuta kuvia',
  'see_next' => 'Katso seuraavia tiedostoja',
  'see_prev' => 'Katso edellisiä tiedostoja',
  'n_pic' => '%s kuvaa',
  'n_of_pic_to_disp' => 'Näytettävien kuvien määrä',
  'apply' => 'Hyväksy muutokset',
  'crop_title' => 'Kuvaeditori',
  'preview' => 'Esikatselu',
  'save' => 'Tallenna kuva',
  'save_thumb' =>'Tallenna thumbnailiksi',
  'gallery_icon' => 'Tee tästä ikoni', //cpg1.4
  'sel_on_img' =>'Valittu alue täytyy olla kokonaan kuvan alueella!', //js-alert
  'album_properties' =>'Albumin asetukset', //cpg1.4
  'parent_category' =>'Yläkategoria', //cpg1.4
  'thumbnail_view' =>'Thumbnailnäkymä', //cpg1.4
  'select_unselect' =>'Valitse kaikki', //cpg1.4
  'file_exists' => "Kohdetiedosto '%s' on jo olemassa.", //cpg1.4
  'rename_failed' => "Tiedoston '%s' nimeäminen tiedostoksi '%s' epäonnistui.", //cpg1.4
  'src_file_missing' => "Lähdetiedosto '%s' puuttuu.", // cpg 1.4
  'mime_conv' => "Tiedostoa '%s' ei voitu konvertoida tiedostoksi '%s'",//cpg1.4
  'forb_ext' => 'Kielletty tiedostopääte.',//cpg1.4
);

// ------------------------------------------------------------------------- //
// File faq.php
// ------------------------------------------------------------------------- //

if (defined('FAQ_PHP')) $lang_faq_php = array(
  'faq' => 'Usein kysytyt kysymykset',
  'toc' => 'Sisällys',
  'question' => 'Kysymys: ',
  'answer' => 'Vastaus: ',
);

if (defined('FAQ_PHP')) $lang_faq_data = array(
  'Yleinen FAQ',
  array('Miksi täytyy rekisteröityä?', 'Ylläpito voi vaatia rekisteröinnin. Rekisteröinti antaa käyttäjälle lisätoiminnallisuuksia, kuten kuvien lisäämisen, suosikkilistan, kuvien äänestysmahdollisuuden, kommentoinnin jne.', 'allow_user_registration', '1'),
  array('Miten rekisteröidyn?', 'Mene &quot;rekisteröitymissivulle&quot; ja täytä vaaditut kentät lomakkeeseen (ja vapaaehtoiset, jos haluat).<br />Jos ylläpito on asettanut sähköpostiaktivoinnin, saat sähköpostin, jossa on ohjeet. Jäsenyytesi on aktivoitava ennen kui voit kirjautua.', 'allow_user_registration', '1'), //cpg1.4
  array('Miten kirjaudun sisään?', 'Mene&quot;kirjautumissivulle&quot;, annan nimimerkkisi ja salasanasi ja klikkaa päälle &quot;Muista minut&quot;, niin pääset kirjautumaan sivustolle ja pysyt kirjautuneena myöhemminkin.<br /><b>TÄRKEÄÄ: Evästeet täytyy olla sallittu, jotta kirjautuminen toimii. Evästettä ei saa poistaa, jotta &quot;Muista minut&quot; -toiminto toimii.</b>', 'offline', 0),
  array('Miksi en voi kirjautua?', 'Rekisteröidyitkö ja klikkasit linkkiä sähköpostissa, joka sinulle tuli? Linkki aktivoi tilisi. Muissa kirjautumisongelmissa ota yhteyttä sivuston ylläpitoon.', 'offline', 0),
  array('Entä jos unohdin salasanani?', 'Jos sivustolla on &quot;Unohditko salasanasi&quot; -linkki, voit käyttää sitä. Muutoin ota yhteyttä ylläpitoon.', 'offline', 0),
  //array('Entä jos vaihdoin sähköpostiosoitettani?', 'Kirjaudu sisään ja vaihda osoitteesi &quot;Oma profiili&quot; -sivulla.', 'offline', 0),
  array('Miten tallennan kuvan &quot;suosikkeihin&quot;?', 'Klikkaa kuvaa ja &quot;kuvan tiedot&quot; -linkkiä (<img src="images/info.gif" width="16" height="16" border="0" alt="Kuvan tiedot" />); selaa kuvan tietoja ja klikkaa &quot;Lisää suosikkeihin&quot;.<br />Ylläpito on voinut asettaa &quot;kuvan tiedot&quot; näkyviin oletuksena.<br />TÄRKEÄÄ: Evästeet täytyy olla sallittu, että evästettä saa poistaa, jotta tämä toiminto toimisi.', 'offline', 0),
  array('Miten arvosten kuvaa?', 'Klikkaa thumbnailia ja klikkaa haluamaasi äänestä -nappia kuvan alla.', 'offline', 0),
  array('Miten annan kuvalle kommentteja?', 'Klikkaa thumbnailia ja selaa sivun loppuun, jossa voit antaa kommentin.', 'offline', 0),
  array('Miten lisään kuvan?', 'Mene &quot;Lisää kuva&quot; -sivulle. Klikkaa &quot;Browse,&quot; löytääksesi lisättävän kuvan koneeltasi ja klikkaa &quot;avaa.&quot; Lisää otsikko ja kuvaus. Klikkaa  &quot;Lähetä&quot;.<br /><br />Vaihtoehtoisesti, jos sinulla on <b>Windows XP</b>, voit lisätä useita kuvia kerralla omaan yksityiseen albumiisi XP-julkaisuohjelmalla.<br />Saadaksesi ohjeita tästä, klikkaa <a href="xp_publish.php">tätä.</a>', 'allow_private_albums', 1), //cpg1.4
  array('Mihin lisään kuvan?', 'Voit lisätä kuvasi johonkin omaan albumiisi &quot;Oma Galleria&quot; -sivulla. Ylläpito saattaa sallia kuvien lisäämisen myös joihinkin päägallerioista.', 'allow_private_albums', 0),
  array('Millaisia ja minkä kokoisia tiedostoja voin lisätä?', 'Koko ja tyyppi (jpg, png, etc.) riippuu ylläpidon asettamista asetuksista.', 'offline', 0),
  array('Miten luon, uudelleen nimeän tai poistan albumeita &quot;Omaan galleriaan&quot;?', 'Sinun pitäisi jo olla &quot;ylläpitotilassa&quot;<br />Mene sivulle &quot;Luo/järjestä albumeita&quot; ja klikkaa &quot;Uusi&quot;. Vaihda nimi &quot;Uusi albumi&quot; mieleiseksesi.<br />Voit myös uudelleennimetä muita albumeitasi.<br />Klikkaa &quot;Hyväksy muutokset&quot;.', 'allow_private_albums', 0),
  array('Kuinka voin rajoittaa käyttäjien pääsyä albumiini?', 'Sinun pitäisi jo olla &quot;Ylläpitäjätilassa&quot;<br />Mene &quot;Muokkaa albumeitani&quot;. Valitse muokattava albumi kohdassa &quot;Päivitä albumi&quot;.<br />Täällä voit muuttaa nimeä, kuvausta, thumbnailkuvaa, rajoittaa katselu-, kommentointi- ja äänestysoikeuksia.<br />Klikkaa &quot;Päivitä albumi&quot;.', 'allow_private_albums', 0),
  array('Miten voin nähdä muiden käyttäjien galleriat?', 'Mene &quot;albumilistaan&quot; ja valitse &quot;Käyttäjien galleriat&quot;.', 'allow_private_albums', 0),
  array('Mitä ovat evästeet?', 'Evästeet ovat tekstitietoa, joka lähetetään websivulta ja tallennetaan tietokoneellesi.<br />Evästeet yleensä sallivat käyttäjän lähteä ja palata sivustolle ilman, että käyttäjän tarvitsee kirjautua uudelleen tai tehdä muita toimintoja.', 'offline', 0),
  array('Mistä saan tämän ohjelman omalle sivustolleni?', 'Coppermine on ilmainen multimediagalleria, jota jaetaan GNU GPL:n alla. Se on täynnä ominaisuuksia ja se on toteutettu monille eri alustoille.  Käy <a href="http://coppermine.sf.net/">Copperminen kotisivulla</a>, jolta saa tietoa ja voit ladata ohjelman.', 'offline', 0),

  'Sivustolla liikkuminen',
  array('Mikä on &quot;Albumilista&quot;?', 'Tämä näyttää koko kategorian sisältämät albumit. Jos et kategoriassa, näytetään kaikki gallerian kategoriat. Thumbnailit voivat olla linkkejä kategorioihin.', 'offline', 0),
  array('Mikä on &quot;Oma galleria&quot;?', 'Tämän ominaisuuden avulla käyttäjät voivat luoda omia gallerioitaan ja lisätä, poistaa tai muokata albumeita. He voivat myös lisätä kuvia albumeihinsa.', 'allow_private_albums', 1), //cpg1.4
  array('Mitä eroa on &quot;ylläpitotilalla&quot; ja &quot;käyttäjätilalla&quot;?', 'Ylläpitotilassa käyttäjä voi muokata gallerioitaan (ja muuta, jos ylläpito sallii).', 'allow_private_albums', 0),
  array('Mikä on &quot;Lisää kuva&quot;?', 'Tämän toiminnon avulla käyttäjä voi lisätä tiedoston (ylläpito määrää koon ja tyypin) galleriaan.', 'allow_private_albums', 0),
  array('Mikä on &quot;Uusimmat kuvat&quot;?', 'Tämä näyttää käyttäjien viimeksi lisäämät kuvat sivustolle.', 'offline', 0),
  array('Mikä on &quot;Uusimmat kommentit&quot;?', 'Tämä näyttää käyttäjien viimeksi annetut kommentit ja ja kommentoidut tiedostot.', 'offline', 0),
  array('Mikä on &quot;Katsotuimmat&quot;?', 'Tämä näyttää eniten kaikkien käyttäjien (myös rekisteröitymättömien) katsellut kuvat.', 'offline', 0),
  array('Mikä on &quot;Suosituimmat&quot;?', 'Tämä näyttää parhaiksi äänestetyt kuvat ja niiden keskimääräiset arvostelut. (esim. viisi käyttäjää antavat kaikki <img src="images/rating3.gif" width="65" height="14" border="0" alt="" />: tiedoston keskimääräinen arvostus on <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> ;Viisi käyttäjää antavat arvion 1 - 5 (1,2,3,4,5), jolloin keskiarvo on <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> .)<br />Arviot menevät parhaasta <img src="images/rating5.gif" width="65" height="14" border="0" alt="best" /> huonoimpaan <img src="images/rating0.gif" width="65" height="14" border="0" alt="worst" />.', 'offline', 0),
  array('Mikä on &quot;Omat suosikit&quot;?', 'Tämän toiminnon avulla käyttäjä voi tallentaa koneelleen evästeen, johon on listattu omat suosikkikuvat.', 'offline', 0),
);


// ------------------------------------------------------------------------- //
// File forgot_passwd.php
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) $lang_forgot_passwd_php = array(
  'forgot_passwd' => 'Salasanamuistutus',
  'err_already_logged_in' => 'Olet jo kirjautunut!',
  'enter_email' => 'Anna sähköpostiosoitteesi', //cpg1.4
  'submit' => 'Lähetä',
  'illegal_session' => 'Salasanamuistutus on vanhentunut tai virheellinen.', //cpg1.4
  'failed_sending_email' => 'Salasanamuistutussähköpostia ei voitu lähettää!',
  'email_sent' => 'Sinulle lähetettiin osoitteeseen %s sähköposti, jossa on käyttäjätunnuksesi ja uusi salasanasi', //cpg1.4
  'verify_email_sent' => 'Sähköposti lähetettiin osoitteeseen %s. Tarkista sähköpostisi ja toimi ohjeiden mukaan.', //cpg1.4
  'err_unk_user' => 'Valittua käyttäjää ei löydy!',
  'account_verify_subject' => '%s - Uusi salasanapyyntö', //cpg1.4
  'account_verify_body' => 'Pyysit uutta salasanaa. Jos haluat sen, klikkaa linkkiä:

%s', //cpg1.4
  'passwd_reset_subject' => '%s - Uusi salasanasi', //cpg1.4
  'passwd_reset_body' => 'Tässä on pyytämäsi uusi salasana:
Nimimerkki: %s
Salasana: %s
Klikkaa %s kirjautuaksesi sisään.', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
  'group_name' => 'Ryhmä', //cpg1.4
  'permissions' => 'Oikeudet', //cpg1.4
  'public_albums' => 'Julkinen albumiin lisääminen', //cpg1.4
  'personal_gallery' => 'Oma galleria', //cpg1.4
  'upload_method' => 'Lähetystapa', //cpg1.4
  'disk_quota' => 'Levytila', //cpg1.4
  'rating' => 'Äänestys', //cpg1.4
  'ecards' => 'E-kortit', //cpg1.4
  'comments' => 'Kommentit', //cpg1.4
  'allowed' => 'Sallittu', //cpg1.4
  'approval' => 'Hyväksyntä', //cpg1.4
  'boxes_number' => 'Kenttien määrä', //cpg1.4
  'variable' => 'muuttuva', //cpg1.4
  'fixed' => 'määrätty', //cpg1.4
  'apply' => 'Hyväksy muutokset',
  'create_new_group' => 'Luo uusi ryhmä',
  'del_groups' => 'Poista valitut ryhmät',
  'confirm_del' => 'Varoitus, kun poistat ryhmän, siihen kuuluvat käyttäjät siirretään \'Rekisteröityneet\' -ryhmään!\n\nHaluatko jatkaa?', //js-alert
  'title' => 'Hallitse käyttäjäryhmiä',
  'num_file_upload' => 'Tiedostonlisäyskenttiä', //cpg1.4
  'num_URI_upload' => 'URI -lisäyskenttiä', //cpg1.4
  'reset_to_default' => 'Ota käyttöön oletusnimi (%s) - suositeltava!', //cpg1.4
  'error_group_empty' => 'Ryhmätaulu on tyhjä!<br /><br />Oletusryhmät luotu, päivitä tämä sivu', //cpg1.4
  'explain_greyed_out_title' => 'Miksi tämä rivi on harmaana?', //cpg1.4
  'explain_guests_greyed_out_text' => 'Tämän ryhmän asetuksia ei voida muuttaa koska valitsit asetuksen &quot; Salli kirjautumattomat käyttäjät (vieraat tai anomyynit)&quot; vaihtoehdoksi &quot;Ei&quot; asetukset -sivulla. Kaikki vieraat (ryhmän %s jäsenet) eivät voi tehdä muuta kuin kirjautua. Tämän vuoksi ryhmäasetukset eivät vaikuta heihin.', //cpg1.4
  'explain_banned_greyed_out_text' => 'Et voi muuttaa ryhmän oikeuksia, koska sen jäsenille ei sallita muutenkaan mitään.', //cpg1.4
  'group_assigned_album' => 'ryhmän albumit', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
  'welcome' => 'Tervetuloa',
);

$lang_album_admin_menu = array(
  'confirm_delete' => 'Haluatko varmasti poistaa tämän albumin? \\nKaikki kuvat ja kommentit poistetaan samalla.', //js-alert
  'delete' => 'POISTA',
  'modify' => 'OMINAISUUDET',
  'edit_pics' => 'MUOKKAA KUVIA',
);

$lang_list_categories = array(
  'home' => 'Etusivu',
  'stat1' => '<b>[pictures]</b> kuvaa <b>[albums]</b> albumissa, <b>[cat]</b> kategoriaa ja <b>[comments]</b> kommenttia. Kuvia katseltu <b>[views]</b> kertaa.',
  'stat2' => '<b>[pictures]</b> kuvaa <b>[albums]</b> albumissa. Katseltu <b>[views]</b> kertaa.',
  'xx_s_gallery' => '%s Galleria',
  'stat3' => '<b>[pictures]</b> kuvaa <b>[albums]</b> albumissa, <b>[comments]</b> kommenttia. Katseltu <b>[views]</b> kertaa.',
);

$lang_list_users = array(
  'user_list' => 'Käyttäjälista',
  'no_user_gal' => 'Käyttäjägallerioita ei ole',
  'n_albums' => '%s albumi(a)',
  'n_pics' => '%s kuva(a)',
);

$lang_list_albums = array(
  'n_pictures' => '%s kuvaa',
  'last_added' => ', viimeisin lisätty %s',
  'n_link_pictures' => '%s linkitettyä kuvaa', //cpg1.4
  'total_pictures' => '%s kuvaa yhteensä', //cpg1.4
);

}

// ------------------------------------------------------------------------- //
// File keywordmgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('KEYWORDMGR_PHP')) $lang_keywordmgr_php = array(
  'title' => 'Hallinnoi hakusanoja', //cpg1.4
  'edit' => 'muokkaa', //cpg1.4
  'delete' => 'poista', //cpg1.4
  'search' => 'hae', //cpg1.4
  'keyword_test_search' => 'hae %s uudessa ikkunassa', //cpg1.4
  'keyword_del' => 'poista hakusana %s', //cpg1.4
  'confirm_delete' => 'Oletko varma, että haluat poistaa hakusanan %s koko galleriasta?', //cpg1.4  // js-alert
  'change_keyword' => 'muuta hakusana', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
  'login' => 'Kirjaudu sisään',
  'enter_login_pswd' => 'Anna nimimerkki ja salasana kirjautuaksesi',
  'username' => 'Nimimerkki',
  'password' => 'Salasana',
  'remember_me' => 'Muista minut',
  'welcome' => 'Tervetuloa %s!',
  'err_login' => '*** Virhe kirjautuessa. Yritä uudelleen ***',
  'err_already_logged_in' => 'Olet jo kirjautunut!',
  'forgot_password_link' => 'Unohdin salasanani',
  'cookie_warning' => 'Varoitus! Selaimesi ei hyväksy evästeitä.', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
  'logout' => 'Kirjaudu ulos',
  'bye' => 'Hei hei %s...',
  'err_not_loged_in' => 'Et ole kirjautunut!',
);

// ------------------------------------------------------------------------- //
// File minibrowser.php  //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('MINIBROWSER_PHP')) $lang_minibrowser_php = array(
  'close' => 'Sulje', //cpg1.4
  'submit' => 'OK', //cpg1.4
  'up' => 'Yksi taso ylös', //cpg1.4
  'current_path' => 'Nykyinen polku', //cpg1.4
  'select_directory' => 'Valitse hakemisto', //cpg1.4
  'click_to_close' => 'Klikkaa kuvaa sulkeaksesi tämän ikkunan.',
);

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
  'upd_alb_n' => 'Päivitä albumi %s',
  'general_settings' => 'Yleiset asetukset',
  'alb_title' => 'Albumin otsikko',
  'alb_cat' => 'Albumin kategoria',
  'alb_desc' => 'Albumin kuvaus',
  'alb_keyword' => 'Albumin hakusanat', //cpg1.4
  'alb_thumb' => 'Albumin thumbnail',
  'alb_perm' => 'Oikeudet albumiin',
  'can_view' => 'Albumia voivat katsella',
  'can_upload' => 'Vieraat voivat lisätä kuvia',
  'can_post_comments' => 'Vieraat voivat kommentoida',
  'can_rate' => 'Vieraat voivat äänestää',
  'user_gal' => 'Käyttäjägalleria',
  'no_cat' => '* Ei kategoriaa *',
  'alb_empty' => 'Albumi on tyhjä',
  'last_uploaded' => 'Viimeisin lisätty',
  'public_alb' => 'Kaikki (julkinen albumi)',
  'me_only' => 'Vain minä',
  'owner_only' => 'Vain albumin omistaja (%s)',
  'groupp_only' => 'Ryhmän \'%s\' jäsenet',
  'err_no_alb_to_modify' => 'Tietokannassa ei ole muokattavia albumeita.',
  'update' => 'Päivitä albumi',
  'reset_album' => 'Resetoi albumi', //cpg1.4
  'reset_views' => 'Resetoi näyttökertalaskuri &quot;0&quot;:ksi albumissa %s', //cpg1.4
  'reset_rating' => 'Resetoi kaikki äänet albumissa %s', //cpg1.4
  'delete_comments' => 'Poista kaikki kommentit albumissa %s', //cpg1.4
  'delete_files' => 'Poista %slopullisesti%s kaikki kuvat albumissa %s', //cpg1.4
  'views' => 'näyttökertaa', //cpg1.4
  'votes' => 'ääntä', //cpg1.4
  'comments' => 'kommenttia', //cpg1.4
  'files' => 'kuvaa', //cpg1.4
  'submit_reset' => 'lähetä muutokset', //cpg1.4
  'reset_views_confirm' => 'Olen varma', //cpg1.4
  'notice1' => '(*) riippuen %sryhmä%sasetuksista',  //cpg1.4 //(do not translate %s!)
  'alb_password' => 'Albumin salasana', //cpg1.4
  'alb_password_hint' => 'Albumin salasanavihje', //cpg1.4
  'edit_files' =>'Muokkaa tiedostoja', //cpg1.4
  'parent_category' =>'Yläkategoria', //cpg1.4
  'thumbnail_view' =>'Thumbnailnäkymä', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File phpinfo.php
// ------------------------------------------------------------------------- //

if (defined('PHPINFO_PHP')) $lang_phpinfo_php = array(
  'php_info' => 'PHP-info',
  'explanation' => 'Tämä teksti on PHP-funktion <a href="http://www.php.net/phpinfo">phpinfo()</a> luoma ja näytetään Copperminessa.',
  'no_link' => 'PHP-infon näyttäminen julkisesti voi olla tietoturvariski. Sen vuoksi tämä sivu on näkyvissä vain, jos olet kirjautunut sisään. Et voi antaa tämän sivun linkkiä muille, sillä heillä ei ole oikeuksia nähdä tätä sivua.',
);

// ------------------------------------------------------------------------- //
// File picmgr.php //cpg1.4
// ------------------------------------------------------------------------- //
if (defined('PICMGR_PHP')) $lang_picmgr_php = array(
  'pic_mgr' => 'Kuvan hallinta', //cpg1.4
  'select_album' => 'Valitse albumi', //cpg1.4
  'delete' => 'Poista', //cpg1.4
  'confirm_delete1' => 'Oletko varma, että haluat poistaa tämän kuvan?', //cpg1.4
  'confirm_delete2' => '\nKuva poistetaan lopullisesti.', //cpg1.4
  'apply_modifs' => 'Hyväksy muutokset', //cpg1.4
  'confirm_modifs' => 'Varmista muutokset', //cpg1.4
  'pic_need_name' => 'Kuvalla täytyy olla nimi!', //cpg1.4
  'no_change' => 'Et tehnyt muutoksia.', //cpg1.4
  'no_album' => '* Ei albumia *', //cpg1.4
  'explanation_header' => 'Järjestys otetaan huomioon vain, jos ', //cpg1.4
  'explanation1' => 'ylläpito on asettanut asetuksiin kohtaan "Kuvien oletusjärjestys" arvoksi "Sijainti laskevasti" tai "Sijainti nousevasti" (Tämä on oletusasetus kaikille käyttäjille, mikäli he eivät olet tehneet yksittäisiä albumeita koskevia muutoksia.)', //cpg1.4
  'explanation2' => 'käyttäjä on valinnut "Sijainti laskevasti" tai "Sijainti nousevasti" thumbnail-sivulla (käyttäjäkohtainen asetus)', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File pluginmgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('PLUGINMGR_PHP')){

$lang_pluginmgr_php = array(
  'confirm_uninstall' => 'Oletko varma, että haluat ottaa tämän laajennuksen POIS KÄYTÖSTÄ?', //cpg1.4
  'confirm_delete' => 'Oletko varma, että haluat POISTAA tämän laajennuksen?', //cpg1.4
  'pmgr' => 'Laajennusten hallinta', //cpg1.4
  'name' => 'Nimi', //cpg1.4
  'author' => 'Tekijä', //cpg1.4
  'desc' => 'Kuvaus', //cpg1.4
  'vers' => 'v', //cpg1.4
  'i_plugins' => 'Asennetut laajennukset', //cpg1.4
  'n_plugins' => 'Laajennukset, joita ei olla asennettu', //cpg1.4
  'none_installed' => 'Ei asennettuja', //cpg1.4
  'operation' => 'Toiminto', //cpg1.4
  'not_plugin_package' => 'Ladattu tiedosto ei ole laajennuspaketti.', //cpg1.4
  'copy_error' => 'Tapahtui virhe kopioidessa pakettia laajennushakemistoon.', //cpg1.4
  'upload' => 'Lisää', //cpg1.4
  'configure_plugin' => 'Konfiguroi laajennusta', //cpg1.4
  'cleanup_plugin' => 'Poista laajennus', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
  'already_rated' => 'Olet jo antanut äänesi tälle kuvalle.',
  'rate_ok' => 'Äänesi on kirjattu.',
  'forbidden' => 'Et voi äänestää omia kuviasi.',
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
Sivuston {SITE_NAME} ylläpito poistaa kaiken sopimattoman materiaalin sivustolta niin nopeasti kuin mahdollista, mutta ei ole mahdollista tarkistaa aina jokaista lisäystä. Ymmärrät siis, että sivuston viestit ja kuvat ovat käyttäjien mielipiteitä ja näkemyksiä, eikä ylläpitoa voida asettaa niistä vastuuseen.<br />
<br />
Hyväksymällä tämän sopimuksen sitoudut olemaan lähettämättä laitonta, seksuaalista tai muuten sopimatonta materiaalia. Hyväksyt, että ylläpidolla ja moderaattoreilla on oikeus poistaa tai muuttaa mitä tahansa materiaalia miten parhaaksi näkevät. Käyttäjänä hyväksyt, että lähettämäsi tieto tallennetaan tietokantaan. Tietoa ei lähetetä kolmansille osapuolille ilman lupaasi, mutta ylläpito ei ole vastuussa mahdollisista tietomurroista.<br />
<br />
Tämä sivusto käyttää evästeitä tallentaakseen tietoa koneellesi. Evästeiden tarkoitus on ainoastaan helpottaa sivuston köyttöä. Sähköpostiosoitetta käytetään vain rekisteröintitietojen varmistamiseen.<br />
<br />
Klikkaamalla 'Hyväksyn' hyväksyt nämä ehdot.
EOT;

$lang_register_php = array(
  'page_title' => 'Rekisteröinti',
  'term_cond' => 'Käyttösopimus',
  'i_agree' => 'Hyväksyn',
  'submit' => 'Lähetä rekisteröinti',
  'err_user_exists' => 'Nimimerkki on jo käytössä. Valitse jokin toinen.',
  'err_password_mismatch' => 'Salasanat eivät täsmää. Kirjoita ne uudelleen.',
  'err_uname_short' => 'Nimimerkin on oltava vähintään 2 merkkiä pitkä.',
  'err_password_short' => 'Salasanan on oltava vähintään 2 merkkiä pitkä.',
  'err_uname_pass_diff' => 'Nimimerkin ja salasanan on oltava eri.',
  'err_invalid_email' => 'Sähköpostiosoite on virhellinen.',
  'err_duplicate_email' => 'Joku on jo rekisteröitynyt samalla sähköpostiosoitteella.',
  'enter_info' => 'Anna rekisteröintitiedot.',
  'required_info' => 'Pakolliset tiedot',
  'optional_info' => 'Vapaaehtoiset tiedot',
  'username' => 'Nimimerkki',
  'password' => 'Salasana',
  'password_again' => 'Salasana uudelleen',
  'email' => 'Sähköpostiosoite',
  'location' => 'Sijainti',
  'interests' => 'Kiinnostukset',
  'website' => 'Kotisivu',
  'occupation' => 'Ammatti',
  'error' => 'VIRHE',
  'confirm_email_subject' => '%s - Rekisteröintivarmistus',
  'information' => 'Information',
  'failed_sending_email' => 'Rekisteröinnin varmistavaa sähköpostia ei voitu lähettää!',
  'thank_you' => 'Kiitos rekisteröitymisestä.<br /><br />Tilisi täytyy vielä aktivoida. Valitsemaasi sähköpostiosoitteeseen on lähetty ohjeet käyttäjätilisi aktivointiin.',
  'acct_created' => 'Käyttäjätilisi on nyt luotu. Voit kirjautua sisään käyttämällä tunnustasi sekä salasanaasi',
  'acct_active' => 'Käyttäjätilisi on nyt aktivoitu. Voit kirjautua sisään käyttämällä tunnustasi sekä salasanaasi',
  'acct_already_act' => 'Tilisi on jo aktiivinen!', //cpg1.4
  'acct_act_failed' => 'Tiliäsi ei voida aktivoida!',
  'err_unk_user' => 'Valittua käyttäjää ei löydy!',
  'x_s_profile' => 'Asetukset käyttäjälle %s',
  'group' => 'Ryhmä',
  'reg_date' => 'Liittynyt',
  'disk_usage' => 'Käytetty levytila',
  'change_pass' => 'Vaihda salasana',
  'current_pass' => 'Nykyinen salasana',
  'new_pass' => 'Uusi salasana',
  'new_pass_again' => 'Uusi salasana uudelleen',
  'err_curr_pass' => 'Nykyinen salasana on väärin',
  'apply_modif' => 'Hyväksy muutokset',
  'change_pass' => 'Vaihda salasana',
  'update_success' => 'Profiilisi on päivitetty',
  'pass_chg_success' => 'Salasanasi on vaihdettu',
  'pass_chg_error' => 'Salasanaasi ei vaihdettu',
  'notify_admin_email_subject' => '%s - Rekisteröinti-ilmoitus',
  'last_uploads' => 'Viimeisin lisätty tiedosto.<br />Klikkaa nähdäksesi kaikki lisäykset käyttäjältä', //cpg1.4
  'last_comments' => 'Viimeisin kommentti.<br />Klikkaa nähdäksesi kaikki kommentit käyttäjältä', //cpg1.4
  'notify_admin_email_body' => 'Uusi käyttäjä nimeltä "%s" rekisteröityi galleriaasi',
  'pic_count' => 'Lisätyt kuvat', //cpg1.4
  'notify_admin_request_email_subject' => '%s - Rekisteröinti-ilmoitus', //cpg1.4
  'thank_you_admin_activation' => 'Kiitos.<br /><br />Tilisi aktivointipyyntö lähetettiin ylläpidolle. Saat sähköpostin, jos pyyntö hyväksytään.', //cpg1.4
  'acct_active_admin_activation' => 'Tili on nyt aktiivinen ja käyttäjälle lähetettiin sähköposti.', //cpg1.4
  'notify_user_email_subject' => '%s - Aktivointi-ilmoitus', //cpg1.4
);

$lang_register_confirm_email = <<<EOT
Kiitos rekisteröitymisestä {SITE_NAME} sivustolle.

Aktivoidaksesi tilisi käyttäjätunnuksella "{USER_NAME}", klikkaa alla olevaa linkkiä tai kopioi ja liitä se selaimeesi.

<a href="{ACT_LINK}">{ACT_LINK}</a>

Terveisin,

Sivuston {SITE_NAME} ylläpito

EOT;

$lang_register_approve_email = <<<EOT
Uusi käyttäjä nimeltä "{USER_NAME}" rekisteröityi galleriaasi.

Aktivoidaksesi tilin, klikkaa alla olevaa linkkiä tai kopioi ja liitä se selaimeesi.

<a href="{ACT_LINK}">{ACT_LINK}</a>

EOT;

$lang_register_activated_email = <<<EOT
Tilisi on hyväksytty ja aktivoitu.

Voit nyt kirjautua sisään osoitteessa <a href="{SITE_LINK}">{SITE_LINK}</a> käyttäen tunnusta "{USER_NAME}"


Terveisin,

Sivuston {SITE_NAME} ylläpito

EOT;
}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
  'title' => 'Näytä kommentit',
  'no_comment' => 'Ei kommentteja',
  'n_comm_del' => '%s kommenttia poistettu',
  'n_comm_disp' => 'Montako kommenttia näytetään',
  'see_prev' => 'Edellinen',
  'see_next' => 'Seuraava',
  'del_comm' => 'Poista valitut kommentit',
  'user_name' => 'Nimi', //cpg1.4
  'date' => 'Päivämäärä', //cpg1.4
  'comment' => 'Kommentti', //cpg1.4
  'file' => 'Tiedosto', //cpg1.4
  'name_a' => 'Nimimerkin mukaan nousevasti', //cpg1.4
  'name_d' => 'Nimimerkin mukaan laskevasti', //cpg1.4
  'date_a' => 'Päivämäärän mukaan nousevasti', //cpg1.4
  'date_d' => 'Päivämäärän mukaan laskevasti', //cpg1.4
  'comment_a' => 'Kommentin mukaan nousevasti', //cpg1.4
  'comment_d' => 'Kommentin mukaan laskevasti', //cpg1.4
  'file_a' => 'Tiedoston mukaan nousevasti', //cpg1.4
  'file_d' => 'Tiedoston mukaan laskevasti', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File search.php                                                           //
// ------------------------------------------------------------------------- //


if (defined('SEARCH_PHP')){

$lang_search_php = array(
  'title' => 'Hae kuvakokoelmasta', //cpg1.4
  'submit_search' => 'Hae', //cpg1.4
  'keyword_list_title' => 'Hakusanalista', //cpg1.4
  'keyword_msg' => 'Lista ei ole täydellinen. Se ei sisällä sanoja kuvien otsikoista tai kuvauksista. Kokeile hakua kokotekstistä.',  //cpg1.4
  'edit_keywords' => 'Muokkaa hakusanoja', //cpg1.4
  'search in' => 'Hae:', //cpg1.4
  'ip_address' => 'IP-osoite', //cpg1.4
  'fields' => 'Hae', //cpg1.4
  'age' => 'Kuvan ikä', //cpg1.4
  'newer_than' => 'Uudempi kuin', //cpg1.4
  'older_than' => 'Vanhempi kuin', //cpg1.4
  'days' => 'päivää', //cpg1.4
  'all_words' => 'Hae kaikki hakusanat (AND)', //cpg1.4
  'any_words' => 'Hae jokin hakusana (OR)', //cpg1.4
);

$lang_adv_opts = array(
  'title' => 'Otsikko', //cpg1.4
  'caption' => 'Kuvateksti', //cpg1.4
  'keywords' => 'Hakusanat', //cpg1.4
  'owner_name' => 'Käyttäjä', //cpg1.4
  'filename' => 'Tiedostonimi', //cpg1.4
);

}

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
  'page_title' => 'Hae uusia kuvia',
  'select_dir' => 'Valitse hakemisto',
  'select_dir_msg' => 'Voit lisätä FTP:llä suoraan palvelimelle lisätyt kuvat galleriaan.<br /><br />Valitse hakemisto, johon laitoit kuvat.', //cpg1.4
  'no_pic_to_add' => 'Ei ole lisättäviä kuvia',
  'need_one_album' => 'Tarvitset vähintään yhden albumin voidaksesi käyttää tätä toimintoa',
  'warning' => 'Varoitus',
  'change_perm' => 'Scripti ei voi kirjoittaa tähän hakemistoon. Muuta oikeudet 755:ksi tai 777:ksi ennen kuin yrität lisätä kuvat!',
  'target_album' => '<b>Laita kuvat hakemistosta &quot;</b>%s<b>&quot; albumiin </b>%s',
  'folder' => 'Hakemisto',
  'image' => 'Kuva',
  'album' => 'Albumi',
  'result' => 'Tulos',
  'dir_ro' => 'Ei kirjoitettavissa. ',
  'dir_cant_read' => 'Ei luettavissa. ',
  'insert' => 'Lisätään uusia kuvia galleriaan',
  'list_new_pic' => 'Lista uusista kuvista',
  'insert_selected' => 'Lisää valitut kuvat',
  'no_pic_found' => 'Uusia kuvia ei löytynyt',
  'be_patient' => 'Odota hetki. Kuvien käsittely vie aikaa.',
  'no_album' => 'Ei valittua albumia',
  'result_icon' => 'Klikkaa saadaksesi lisätietoa tai uudelleen ladataksesi',  //cpg1.4
  'notes' =>  '<ul>'.
				'<li><b>OK</b> : tarkoittaa, että kuva lisätty onnistuneesti'.
				'<li><b>DP</b> : tarkoittaa, että kuva on jo aiemmin lisätty'.
				'<li><b>PB</b> : tarkoittaa, ettei kuvaa voitu lisätä, tarkista asetukset ja oikeudet'.
				'<li>Jos OK, DP, PB \'merkit\' eivät ilmesty klikkaa rikkinäistä kuvaa nähdäksesi PHP: virheilmoituksen'.
				'<li>Jos selaimesi menee timeouttiin, lataa sivu uudestaan'.
				'</ul>',
  'select_album' => 'Valitse albumi',
  'check_all' => 'Valitse kaikki',
  'uncheck_all' => 'Merkitse kaikki valitsemattomiksi',
  'no_folders' => 'Kansiossa "albums" ei ole vielä yhtään hakemistoa. Luo ainakin yksi hakemisto hakemiston "albums" alle ja lähetä kuvasi siihen FTP:llä. Älä laita kuviasi kansioon "userpics" tai "edit", sillä ne on varattu HTTP-lähetystä ja ohjelman omaa tarvetta varten.', //cpg1.4
   'albums_no_category' => 'Albumilla ei ole kategoriaa', //cpg1.4 // album pulldown mod, added by frogfoot
  'personal_albums' => '* Henkilökohtaiset albumit', //cpg1.4 // album pulldown mod, added by frogfoot
  'browse_batch_add' => 'Selattava käyttöliittymä (Suositeltava)', //cpg1.4
  'edit_pics' => 'Muokkaa kuvia', //cpg1.4
  'edit_properties' => 'Albumin asetukset', //cpg1.4
  'view_thumbs' => 'Thumbnail-näkymä', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File stat_details.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('STAT_DETAILS_PHP')) $lang_stat_details_php = array(
  'show_hide' => 'Näytä/piilota tämä sarake', //cpg1.4
  'vote' => 'Äänitiedot', //cpg1.4
  'hits' => 'Katselukertatiedot', //cpg1.4
  'stats' => 'Äänestystilastot', //cpg1.4
  'sdate' => 'Päivämäärä', //cpg1.4
  'rating' => 'Arvo', //cpg1.4
  'search_phrase' => 'Hakulause', //cpg1.4
  'referer' => 'Sivu, jolta tultiin', //cpg1.4
  'browser' => 'Selain', //cpg1.4
  'os' => 'Käyttöjärjestelmä', //cpg1.4
  'ip' => 'IP', //cpg1.4
  'sort_by_xxx' => 'Järjestä %s', //cpg1.4
  'ascending' => 'nousevasti', //cpg1.4
  'descending' => 'laskevasti', //cpg1.4
  'internal' => 'sisäinen', //cpg1.4
  'close' => 'sulje', //cpg1.4
  'hide_internal_referers' => 'Piilota sivut, joilta tultiin, jos ne ovat tämän sivuston sivuja', //cpg1.4
  'date_display' => 'Päivämäärän näyttäminen', //cpg1.4
  'submit' => 'Lähetä / päivitä', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File thumbnails.php
// ------------------------------------------------------------------------- //

// Void

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) $lang_upload_php = array(
  'title' => 'Lisää kuva',
  'custom_title' => 'Personoitu kyselylomake',
  'cust_instr_1' => 'Voit valita haluamasi määrän kuvienlisäyskenttiä. Et voi kuitenkaan valita enempää kuin alla listatut rajoitukset.',
  'cust_instr_2' => 'Kenttä Määrä Pyynnöt',
  'cust_instr_3' => 'Kuvan lisäyskenttiä: %s',
  'cust_instr_4' => 'URI/URL -lisäyskenttiä: %s',
  'cust_instr_5' => 'URI/URL -lisäyskenttiä:',
  'cust_instr_6' => 'Tiedoston lisäyskenttiä:',
  'cust_instr_7' => 'Valitse jokaisen kenttätyypin määrä. Klikkaa sitten \'Jatka\'. ',
  'reg_instr_1' => 'Laiton toiminto lomakkeen luonnissa.',
  'reg_instr_2' => 'Lisää kuvasi alla oleviin kenttiin. Kuvien koko ei saa ylittää %s KB / kpl. Jos lisäät zip-tiedostoja \'Tiedoston lähetys\' ja \'URI/URL -lähetys\' -toiminnoilla, ne pysyvät pakattuina.',
  'reg_instr_3' => 'Jos haluat zip -tiedostosi purettavan, sinun on käytettävä \'Zip-tiedostot purkava lisäys\' osiota.',
  'reg_instr_4' => 'Kun käytät URI/URL -lähetyskenttiä, anna osoite tässä muodossa: http://www.sivuni.fi/kuvat/esimerkki.jpg',
  'reg_instr_5' => 'Kun olet täyttänyt lomakkeen, klikkaa \'Jatka\'.',
  'reg_instr_6' => 'Zip-tiedostot purkava lisäys:',
  'reg_instr_7' => 'Tiedoston lähetys:',
  'reg_instr_8' => 'URI/URL -lähetys:',
  'error_report' => 'Virheilmoitus',
  'error_instr' => 'Seuraavien tiedostojen lähetyksessä oli ongelmia:',
  'file_name_url' => 'Tiedosto/URL',
  'error_message' => 'Virheviesti',
  'no_post' => 'POST ei voinut lähettää tiedostoa.',
  'forb_ext' => 'Kielletty tiedostopääte.',
  'exc_php_ini' => 'Tiedoston koko on liian suuri (php.ini:n kokorajoitus).',
  'exc_file_size' => 'Tiedoston koko on liian suuri (CPG:n kokorajoitus).',
  'partial_upload' => 'Vain osittain lähetys onnistui.',
  'no_upload' => 'Lähetystä ei tehty.',
  'unknown_code' => 'Tuntematon PHP -lähetys virhe.',
  'no_temp_name' => 'Ei lähetystä, ei väliaikaista nimeä.',
  'no_file_size' => 'Ei sisällä dataa tai data on korruptoitunut',
  'impossible' => 'Ei voida siirtää',
  'not_image' => 'Tiedosto ei ole kuva tai se on korruptoitunut',
  'not_GD' => 'Ei GD -tiedostopääte.',
  'pixel_allowance' => 'Kuvan korkeus tai leveys on liian suuri.', //cpg1.4
  'incorrect_prefix' => 'Väärä URI/URL etuliite (prefix)',
  'could_not_open_URI' => 'URI:a ei voitu avata.',
  'unsafe_URI' => 'Epäturvallinen URI.',
  'meta_data_failure' => 'Metatietovirhe',
  'http_401' => '401 Unauthorized / Ei oikeuksia',
  'http_402' => '402 Payment Required / Maksullinen',
  'http_403' => '403 Forbidden / Kielletty',
  'http_404' => '404 Not Found / Ei löytynyt',
  'http_500' => '500 Internal Server Error / Sisäinen palvelinvirhe',
  'http_503' => '503 Service Unavailable / Palvelu tavoittamattomissa',
  'MIME_extraction_failure' => 'MIME -tyyppiä ei voitu selvittää.',
  'MIME_type_unknown' => 'Tuntematon MIME -tyyppi',
  'cant_create_write' => 'Tiedostoa ei voitu luoda.',
  'not_writable' => 'Tiedostoon ei voitu kirjoittaa.',
  'cant_read_URI' => 'URI/URL:a ei voitu lukea',
  'cant_open_write_file' => 'Ei voitu avata URI -tiedostoa.',
  'cant_write_write_file' => 'Ei voitu kirjoittaa URI -tiedostoon.',
  'cant_unzip' => 'Zip-tiedostoa ei voitu purkaa.',
  'unknown' => 'Tuntematon virhe',
  'succ' => 'Onnistuneet lähetykset',
  'success' => '%s lähetystä onnistui.',
  'add' => 'Klikkaa \'Jatka\' lisätäksesi kuvat albumeihin.',
  'failure' => 'Lähetysvirhe',
  'f_info' => 'Kuvatieto',
  'no_place' => 'Edellistä kuvaa ei voitu sijoittaa paikalleen.',
  'yes_place' => 'Edellinen kuva sijoitettiin paikalleen.',
  'max_fsize' => 'Suurin sallittu tiedostokoko on %s KB',
  'album' => 'Albumi',
  'picture' => 'Kuva',
  'pic_title' => 'Kuvan otsikko',
  'description' => 'Kuvaus',
  'keywords' => 'Hakusanat (erottele välilyönneillä)<br /><a href="#" onClick="return MM_openBrWindow(\'keyword_select.php\',\'selectKey\',\'width=250, height=400, scrollbars=yes,toolbar=no,status=yes,resizable=yes\')">Lisää listalta</a>', //cpg1.4
  'keywords_sel' =>'Valitse hakusana', //cpg1.4
  'err_no_alb_uploadables' => 'Ei löytynyt yhtään albumia, johon sinulla olisi oikeudet lisätä kuvia',
  'place_instr_1' => 'Sijoita kuvat albumeihin. Voit myös lisätä kuvista tietoa.',
  'place_instr_2' => 'Sijoita lisää kuvia. Klikkaa \'Jatka\'.',
  'process_complete' => 'Kaikki kuvat on lisätty albumeihin.',
   'albums_no_category' => 'Albumit, joilla ei ole kategoriaa', //cpg1.4. //album pulldown mod, added by frogfoot
  'personal_albums' => '* Omat albumit', //cpg1.4 //album pulldown mod, added by frogfoot
  'select_album' => 'Valitse albumi', //cpg1.4 //album pulldown mod, added by frogfoot
  'close' => 'Sulje', //cpg1.4
  'no_keywords' => 'Ei löytynyt yhtään hakusanaa!', //cpg1.4
  'regenerate_dictionary' => 'Generoi sanakirja uudelleen', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
  'memberlist' => 'Käyttäjälista', //cpg1.4
  'user_manager' => 'Käyttäjähallinta', //cpg1.4
  'title' => 'Muokkaa käyttäjiä',
  'name_a' => 'Nimen mukaan nousevasti',
  'name_d' => 'Nimen mukaan laskevasti',
  'group_a' => 'Ryhmän mukaan nousevasti',
  'group_d' => 'Ryhmän mukaan laskevasti',
  'reg_a' => 'Rekisteröinti päivän mukaan nousevasti',
  'reg_d' => 'Rekisteröinti päivän mukaan laskevasti',
  'pic_a' => 'Kuvien määrän mukaan nousevasti',
  'pic_d' => 'Kuvien määrän mukaan laskevasti',
  'disku_a' => 'Levytilan käytön mukaan nousevasti',
  'disku_d' => 'Levytilan käytön mukaan laskevasti',
  'lv_a' => 'Viimeisimmän vierailun mukaan nousevasti',
  'lv_d' => 'Viimeisimmän vierailun mukaan laskevasti',
  'sort_by' => 'Järjestä käyttäjät',
  'err_no_users' => 'Käyttäjätaulu on tyhjä!',
  'err_edit_self' => 'Et voi muokata profiiliasi täältä. \'Oma profiili\' linkistä pääset tekemään sen',
  'edit' => 'MUOKKAA',
  'with_selected' => 'Valitut:', //cpg1.4
  'delete' => 'Poista', //cpg1.4
  'delete_files_no' => 'Pidä julkiset tiedostot (mutta lähettäjätiedot poistetaan)', //cpg1.4
  'delete_files_yes' => 'Poista myös julkiset tiedostot', //cpg1.4
  'delete_comments_no' => 'Pidä kommentit (mutta lähettäjätiedot poistetaan)', //cpg1.4
  'delete_comments_yes' => 'Poista myös kommentit', //cpg1.4
  'activate' => 'Aktivoi', //cpg1.4
  'deactivate' => 'Epäaktivoi', //cpg1.4
  'reset_password' => 'Resetoi salasana', //cpg1.4
  'change_primary_membergroup' => 'Vaihda pääryhmää', //cpg1.4
  'add_secondary_membergroup' => 'Lisää toissijainen ryhmä', //cpg1.4
  'name' => 'Käyttäjänimi',
  'group' => 'Ryhmä',
  'inactive' => 'Epäaktiivinen',
  'operations' => 'Toiminnot',
  'pictures' => 'Tiedostot',
  'disk_space_used' => 'Käytetty levytila', //cpg1.4
  'disk_space_quota' => 'Levytilan maksimi', //cpg1.4
  'registered_on' => 'Rekisteröinti', //cpg1.4
  'last_visit' => 'Viimeisin vierailu',
  'u_user_on_p_pages' => '%d käyttäjää ja %d sivua',
  'confirm_del' => 'Oletko varma, että haluat POISTAA tämän käyttäjän? \\nKaikki hänen tiedostonsa ja albuminsa poistetaan.', //js-alert
  'mail' => 'POSTI',
  'err_unknown_user' => 'Valittua käyttäjää ei löydy!',
  'modify_user' => 'Muokkaa käyttäjää',
  'notes' => 'Huomio',
  'note_list' => '<li>Jos et halua vaihtaa salasanaa, jätä "salasana" kenttä tyhjäksi',
  'password' => 'Salasana',
  'user_active' => 'Käyttäjä on aktiivinen',
  'user_group' => 'Käyttäjän ryhmä',
  'user_email' => 'Käyttäjän sähköpostiosoite',
  'user_web_site' => 'Käyttäjän kotisivu',
  'create_new_user' => 'Luo uusi käyttäjä',
  'user_location' => 'Käyttäjän sijainti',
  'user_interests' => 'Käyttäjän kiinnostukset',
  'user_occupation' => 'Käyttäjän ammatti',
  'user_profile1' => '$user_profile1', //cpg1.4
  'user_profile2' => '$user_profile2', //cpg1.4
  'user_profile3' => '$user_profile3', //cpg1.4
  'user_profile4' => '$user_profile4', //cpg1.4
  'user_profile5' => '$user_profile5', //cpg1.4
  'user_profile6' => '$user_profile6', //cpg1.4
  'latest_upload' => 'Viimeisimmän lisäykset',
  'never' => 'ei koskaan',
  'search' => 'Käyttäjähaku', //cpg1.4
  'submit' => 'Lähetä', //cpg1.4
  'search_submit' => 'Hae', //cpg1.4
  'search_result' => 'Hakutulokset hakusanalle: ', //cpg1.4
  'alert_no_selection' => 'Sinun täytyy ensin valita vähintään yksi käyttäjä!', //cpg1.4 //js-alert
  'password' => 'salasana', //cpg1.4
  'select_group' => 'Valitse ryhmä', //cpg1.4
  'groups_alb_access' => 'Albumin oikeudet ryhmän mukaan', //cpg1.4
  'album' => 'Albumi', //cpg1.4
  'category' => 'Kategoria', //cpg1.4
  'modify' => 'Muuta?', //cpg1.4
  'group_no_access' => 'Tällä ryhmällä ei ole erikoisoikeuksia', //cpg1.4
  'notice' => 'Huomio', //cpg1.4
  'group_can_access' => 'Albumit, joihin vain "%s" voi päästä', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //

if (defined('UTIL_PHP')) {
$lang_util_desc_php = array(
'Lisää otsikot tiedostonnimestä', //cpg1.4
'Poistaa otsikot', //cpg1.4
'Luo thumbnailit ja pienennetyt/suurennetut kuvat uudelleen', //cpg1.4
'Poistaa alkuperäiset kuvat ja korvaa ne pienennetyillä/suurennetuilla versioilla', //cpg1.4
'Poistaa alkuperäiset tai keskikokoiset kuvat, jotta levytilaa säästyy', //cpg1.4
'Poistaa kommentit, joilla ei ole enää omistajaa', //cpg1.4
'Lukee uudelleen tiedostokoot ja kuvakoot (jos muutit kuvia manuaalisesti)', //cpg1.4
'Resetoi näyttökertalaskuri', //cpg1.4
'Näyttää PHP-infoa', //cpg1.4
'Päivittää tietokannan', //cpg1.4
'Näyttää lokitiedostot', //cpg1.4
);
$lang_util_php = array(
  'title' => 'Ylläpitotyökalut (Muuta kuvakokoja)',
  'what_it_does' => 'Mitä tekee',
  'file' => 'Tiedosto',
  'problem' => 'Ongelma', //cpg1.4
  'status' => 'Status', //cpg1.4
  'title_set_to' => 'otsikko muutettu:',
  'submit_form' => 'lähetä',
  'updated_succesfully' => 'päivitetty',
  'error_create' => 'VIRHE luotaessa:',
  'continue' => 'Muokkaa lisää kuvia',
  'main_success' => 'Tiedostoa %s käytettiin onnistuneesti päätiedostona',
  'error_rename' => 'Virhe nimettäessä kuvaa %s uudelle nimelle %s',
  'error_not_found' => 'Tiedostoa %s ei löydy',
  'back' => 'takaisin',
  'thumbs_wait' => 'Päivitetään thumbnaileja ja/tai muita kuvakokoja. Odota...',
  'thumbs_continue_wait' => 'Päivitetään yhä thumbnaileja ja/tai muita kuvakokoja...',
  'titles_wait' => 'Päivitetään otsikoita. Odota...',
  'delete_wait' => 'Poistetaan otsikoita. Odota...',
  'replace_wait' => 'Poistetaan alkuperäisiä ja korvataan ne pienennetyillä/suurennetuilla kuvilla. Odota...',
  'instruction' => 'Pikaohjeet',
  'instruction_action' => 'Valitse toiminto',
  'instruction_parameter' => 'Aseta parameterit',
  'instruction_album' => 'Valitse albumi',
  'instruction_press' => 'Paina %s',
  'update' => 'Päivitä thumbnailit tai pienennetyt/suurennetut kuvat',
  'update_what' => 'Mitä pitäisi päivittää',
  'update_thumb' => 'Vain thumbnailit',
  'update_pic' => 'Vain pienennetyt/suurennetut kuvat',
  'update_both' => 'Sekä thumbnailit että pienennetyt/suurennetut kuvat',
  'update_number' => 'Muokattavien kuvien määrä klikkausta kohti',
  'update_option' => '(Kokeile muuttaa tätä pienemmäksi, jos saat timeoutteja.)',
  'filename_title' => 'Tiedostonimi &rArr; Tiedosto otsikko',
  'filename_how' => 'Kuinka tiedostonimeä muutetaan',
  'filename_remove' => 'Poista .jpg -pääte ja korvaa _ (alaviiva) välilyönnillä',
  'filename_euro' => 'Muuta 2003_11_23_13_20_20.jpg muotoon 23/11/2003 13:20',
  'filename_us' => 'Muuta 2003_11_23_13_20_20.jpg muotoon 11/23/2003 13:20',
  'filename_time' => 'Muuta 2003_11_23_13_20_20.jpg muotoon 13:20',
  'delete' => 'Poista tiedosto-otsikot tai alkuperäisen kokoiset kuvat',
  'delete_title' => 'Poista tiedosto-otsikot',
  'delete_title_explanation' => 'Tämä poistaa kaikki otsikot valitussa albumissa.', //cpg1.4
  'delete_original' => 'Poista alkuperäisen kokoiset kuvat',
  'delete_original_explanation' => 'Tämä poistaa täysikokoiset kuvat.', //cpg1.4
  'delete_intermediate' => 'Poista keskikokoiset kuvat', //cpg1.4
  'delete_intermediate_explanation' => 'Tämä poistaa keskikokoiset (normaalikokoiset) kuvat.<br />Käytä tätä vapauttaaksesi tilaa, jos otit pois päältä kohdan \'Luo keskikokoiset kuvat\' asetuksissa kuvien lisäämisen jälkeen.', //cpg1.4
  'delete_replace' => 'Poistaa alkuperäiset kuvat ja korvaa ne muutetuilla kuvakoilla',
  'titles_deleted' => 'Kaikki otsikot valitsemassasi albumissa poistettu', //cpg1.4
  'deleting_intermediates' => 'Poistetaan keskikokoisia kuvia. Odota...', //cpg1.4
  'searching_orphans' => 'Etsitään kuvia, joilla ei ole enää omistajaa. Odota...', //cpg1.4
  'select_album' => 'Valitse albumi',
  'delete_orphans' => 'Poista kommentit puuttuvista tiedostoista', //cpg1.4
  'delete_orphans_explanation' => 'Tämä etsii ja antaa poistaa kaikki kommentit, jotka liittyvät kuviin, joita ei enää ole galleriassa.<br />Tutkii kaikki albumit.', //cpg1.4
  'refresh_db' => 'Lataa uudelleen tiedostokoot ja kuvakokotiedot', //cpg1.4
  'refresh_db_explanation' => 'Tämä lukee uudelleen tiedostojen koot ja kuvakoot. Käytä tätä, jos levytilan käyttölaskurit ovat väärässä tai olet muokannut kuvia manuaalisesti.', //cpg1.4
  'reset_views' => 'Resetoi näyttökertalaskurit', //cpg1.4
  'reset_views_explanation' => 'Asettaa kaikki kuvien näyttökertalaskurit nollaan valitussa albumissa.', //cpg1.4
  'orphan_comment' => 'kommenttia löydetty ilman omistajaa',
  'delete' => 'Poista',
  'delete_all' => 'Poista kaikki',
  'delete_all_orphans' => 'Poista kaikki kommentit ilman omistajaa?', //cpg1.4
  'comment' => 'Kommentti: ',
  'nonexist' => 'liittyy olemattomaan tiedostoon # ',
  'phpinfo' => 'Näytä PHP-info',
  'phpinfo_explanation' => 'Sisältää teknistä tietoa palvelimestasi.<br /> - Sinua voidaan pyytää kertomaan näitä tietoja pyytäessäsi tukea.', //cpg1.4
  'update_db' => 'Päivitä tietokanta',
  'update_db_explanation' => 'Jos olet korvannut coppermine-tiedostoja, lisännyt muunnelman tai päivittänyt uuteen copperminen versioon, aja kerran tietokantapäivitys. Tämä luo vaadittavat taulut ja/tai asetusarvot coppermine-tietokantaasi.',
  'view_log' => 'Näytä lokitiedostot', //cpg1.4
  'view_log_explanation' => 'Coppermine voi pitää silmällä käyttäjien toimia sivustolla. Voit tutkia lokeja, jos olet asettanut lokittamisen päälle <a href="admin.php">copperminen asetuksissa</a>.', //cpg1.4
  'versioncheck' => 'Tarkista versiot', //cpg1.4
  'versioncheck_explanation' => 'Tarkista tiedostoversiosi, että olet korvannut kaikki tiedostot päivityksen jälkeen, tai jos Copperminen lähdetiedostot ovat päivittyneet uuden pakettiversion myötä.', //cpg1.4
  'bridgemanager' => 'Yhteyshallinta muihin ohjelmiin', //cpg1.4
  'bridgemanager_explanation' => 'Laita päälle/pois Copperminen integrointi muihin applikaatioihin (esim. BBS).', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File versioncheck.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('VERSIONCHECK_PHP')) $lang_versioncheck_php = array(
  'title' => 'Versiotarkistus', //cpg1.4
  'what_it_does' => 'Tämä sivu on niille, jotka ovat päivittäneet Copperminen. Tämä scripti käy läpi web-palvelimen tiedostot ja tutkii, ovatko palvelimesi tiedostot samoja versioita kuin palvelimella http://coppermine.sourceforge.net.<br />Tiedostot, jotka pitää päivittää, näytetään punaisella. Keltaiset kannattaa käydä läpi. Vihreät (tai oletusväriset) tiedostot ovat kunnossa.<br />Klikkaa ohjeikoneita saadaksesi lisätietoa.', //cpg1.4
  'online_repository_unable' => 'Online-kirjastoon ei saatu yhteyttä', //cpg1.4
  'online_repository_noconnect' => 'Coppermine ei saanut yhteyttä online-kirjastoon. Syitä voi olla kaksi:', //cpg1.4
  'online_repository_reason1' => 'Copperminen online-kirjasto on tällä hetkellä alhaalla - tarkista, pääsetkö selaimella tälle sivulle: %s - jos et, kokeile myöhemmin uudelleen.', //cpg1.4
  'online_repository_reason2' => 'Palvelimesi PHP on konfiguroitu niin, että %s on pois päältä. (oletuksena se on päällä). Jos olet palvelimen ylläpitäjä, käännä valinta päälle tiedostossa <i>php.ini</i> (laita ainakin päävalinnaksi %s). Jos sinulla on ostettu web-palvelu, sinun täytynee tyytyä siihen, että vertaat omia tiedostojasi online-kirjastoon. Tällä sivulla näytetään vain ne tiedostoversiot, jotka ovat mukana sinun jakelussasi. Päivityksiä ei näytetä.', //cpg1.4
  'online_repository_skipped' => 'Yhteys online-kirjastoon skipattu', //cpg1.4
  'online_repository_to_local' => 'Paikalliset kopiot päivitetään nyt uusilla versioilla. Data voi olla epätarkkaa, jos olet päivittänyt Copperminen, etkä ole uploadannut kaikkia tiedostoja. Niitä tiedostomuutoksia, jotka on tehty versiojakelun, jälkeen ei oteta huomioon.', //cpg1.4
  'local_repository_unable' => 'Palvelimesi kirjastoon ei saatu yhteyttä', //cpg1.4
  'local_repository_explanation' => 'Coppermine ei saanut yhteyttä palvelimellasi tiedostoon %s. Tämä luultavasti tarkoittaa, että et ole lisännyt ko. tiedostoa palvelimellesi. Lisää tiedosto ja päivitä tämä sivu uudelleen.<br />Jos scriptiä ei vieläkään voida ajaa, palveluntarjoajasi on voinut ottaa osan <a href="http://www.php.net/manual/en/ref.filesystem.php">PHP:n tiedostojärjestelmäfunktioista</a> kokonaan pois käytöstä. Jos näin on, et voi käyttää tätä työkalua.', //cpg1.4
  'coppermine_version_header' => 'Asennettu Copperminen versio', //cpg1.4
  'coppermine_version_info' => 'Sinulla on tällä hetkellä asennettuna: %s', //cpg1.4
  'coppermine_version_explanation' => 'Jos luulet, että tämä on täysin väärä tieto, ja sinulla pitäisi olla uudempi versio Copperminesta, voi olla, että sinulta puuttuu vain uusin versio tiedostosta <i>include/init.inc.php</i>', //cpg1.4
  'version_comparison' => 'Versioiden vertailu', //cpg1.4
  'folder_file' => 'hakemisto/tiedosto', //cpg1.4
  'coppermine_version' => 'cpg -versio', //cpg1.4
  'file_version' => 'tiedostoversio', //cpg1.4
  'webcvs' => 'web-cvs', //cpg1.4
  'writable' => 'kirjoitettava', //cpg1.4
  'not_writable' => 'ei kirjoitettava', //cpg1.4
  'help' => 'Ohje', //cpg1.4
  'help_file_not_exist_optional1' => 'Tiedostoa/hakemistoa ei löydy', //cpg1.4
  'help_file_not_exist_optional2' => 'Tiedostoa/hakemistoa %s ei löydy palvelimelta. Vaikka se ei olekaan välttämätön, sinun  pitäisi kuitenkin lisätä se (käyttäen FTP-asiakasohjelmaa) palvelimellesi, jos sinulla on ongelmia toimivuuden kanssa.', //cpg1.4
  'help_file_not_exist_mandatory1' => 'tiedostoa/hakemistoa ei löydy', //cpg1.4
  'help_file_not_exist_mandatory2' => 'Tiedostoa/hakemistoa %s ei löydetty palvelimelta, vaikka se on pakollinen. Lisää se palvelimellesi (käyttäen FTP-asiakasohjelmaa).', //cpg1.4
  'help_no_local_version1' => 'Ei paikallista tiedostoversiota', //cpg1.4
  'help_no_local_version2' => 'Scripti ei löytänyt paikallista tiedostoversiota. Tiedosto on joko vanhentunut tai olet muokannut sitä ja poistanut samalla header -tiedot. Tiedoston päivitys on suositeltava.', //cpg1.4
  'help_local_version_outdated1' => 'Paikallinen versio on vanhentunut', //cpg1.4
  'help_local_version_outdated2' => 'Versiosi tästä tiedostoa vaikuttaa olevan vanhasta Copperminen versiosta (olet ilmeisesti päivittänyt uuteen). Päivitä myös tämä tiedosto!', //cpg1.4
  'help_local_version_na1' => 'Cvs -versioinfoa ei saatu', //cpg1.4
  'help_local_version_na2' => 'Scripti ei saanut selville palvelimesi cvs-versiota. Sinun pitäisi tiedosto paketistasi.', //cpg1.4
  'help_local_version_dev1' => 'Kehitysversio', //cpg1.4
  'help_local_version_dev2' => 'Tiedosto palvelimellasi vaikuttaa olevan uudempi kuin Copperminesi versio. Joko olet käyttämässä kehitysversiota (käytä vain, jos tiedät, mitä olet tekemässä), tai olet päivittänyt Copperminen, mutta include/init.inc.php on jäänyt päivittämättä.', //cpg1.4
  'help_not_writable1' => 'Hakemistoon ei voitu kirjoittaa', //cpg1.4
  'help_not_writable2' => 'Anna chmod:lla scriptille oikeudet kirjoittaa hakemistoon %s ja kaikkiin sen alla.', //cpg1.4
  'help_writable1' => 'Hakemisto kirjoitettava', //cpg1.4
  'help_writable2' => 'Hakemisto %s on kirjoitettava. Tämä on tarpeeton riski, sillä Copperminen tarvitsee vain luku- ja ajo-oikeudet.', //cpg1.4
  'help_writable_undetermined' => 'Coppermine ei voinut tutkia, onko hakemisto kirjoitettava.', //cpg1.4
  'your_file' => 'tiedostosi', //cpg1.4
  'reference_file' => 'referenssitiedosto', //cpg1.4
  'summary' => 'Tiivistelmä', //cpg1.4
  'total' => 'Tiedostoja/hakemistoja tarkistettu yhteensä', //cpg1.4
  'mandatory_files_missing' => 'Pakollisia tiedostoja puuttuu', //cpg1.4
  'optional_files_missing' => 'Vapaaehtoisia tiedostoja puuttuu', //cpg1.4
  'files_from_older_version' => 'Ylijääneitä tiedostoja vanhentuneista Copperminen versioista', //cpg1.4
  'file_version_outdated' => 'Vanhentuneita tiedostoversioita', //cpg1.4
  'error_no_data' => 'Scripti ei saanut mitään tietoa irti. Pahoittelut!', //cpg1.4
  'go_to_webcvs' => 'mene webcvs:ään %s', //cpg1.4
  'options' => 'Valinnat', //cpg1.4
  'show_optional_files' => 'näytä vapaaehtoiset hakemistot/tiedostot', //cpg1.4
  'show_mandatory_files' => 'näytä pakolliset tiedostot', //cpg1.4
  'show_file_versions' => 'näytä tiedostoversiot', //cpg1.4
  'show_errors_only' => 'näytä vain virheelliset hakemistot/tiedostot', //cpg1.4
  'show_permissions' => 'näytä hakemisto-oikeudet', //cpg1.4
  'show_condensed_output' => 'näytä yhteenvetotiedot (aikaisemmille kuvankaappauksille)', //cpg1.4
  'coppermine_in_webroot' => 'Coppermine on asennettu palvelimen juureen', //cpg1.4
  'connect_online_repository' => 'yritä ottaa yhteys online-kirjastoon', //cpg1.4
  'show_additional_information' => 'näytä lisätiedot', //cpg1.4
  'no_webcvs_link' => 'älä näytä webcvs-linkkiä', //cpg1.4
  'stable_webcvs_link' => 'näytä webcvs-linkki vakaaseen versioon', //cpg1.4
  'devel_webcvs_link' => 'näytä webcvs-linkki kehitysversioon', //cpg1.4
  'submit' => 'hyväksy muutokset / päivitä', //cpg1.4
  'reset_to_defaults' => 'palauta oletusarvot', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File view_log.php  //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('VIEWLOG_PHP')) $lang_viewlog_php = array(
  'delete_all' => 'Poista kaikki lokit', //cpg1.4
  'delete_this' => 'Poista tämä loki', //cpg1.4
  'view_logs' => 'Näytä lokit', //cpg1.4
  'no_logs' => 'Ei luotuja lokeja.', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File xp_publish.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('XP_PUBLISH_PHP')) {

$lang_xp_publish_client = <<<EOT
<h1>XP -webjulkaisuohjelma</h1><p>Tämä moduuli mahdollistaa <b>Windows XP</b> -webjulkaisun käytön Copperminessa.</p><p>Koodi perustuu artikkeliin, jonka lähetti
EOT;

$lang_xp_publish_required = <<<EOT
<h2>Mitä tarvitaan</h2><ul><li>Windows XP saadaksesi ohjelman toimimaan</li><li>Toimiva Coppermine -asennus, jossa <b>weblähetys toimii.</b></li></ul><h2>Kuinka asentaa asiakasohjelma</h2><ul><li>Klikkaa oikealla napilla:
EOT;

$lang_xp_publish_select = <<<EOT
Valitse &quot;tallenna nimellä..&quot;. Tallenna tiedosto kovalevyllesi. Tarkista tallentaessasi, että ehdotettu tiedostonimi on <b>cpg_###.reg</b> (### esittää numeerista aikaleimaa). Muuta se tähän muotoon, jos tarpeen (jätä numerot). Kun olet ladannut, kaksoisklikkaa tiedostoa rekisteröidäksesi palvelimesi webjulkaisuohjelmaan.</li></ul>
EOT;

$lang_xp_publish_testing = <<<EOT
<h2>Testaus</h2><ul><li>Valitse tiedostoja Windows Explorerissa, klikkaa <b>Julkaise xxx webissä</b> vasemmassa paneelissa.</li><li>Varmista tiedostovalikoima. Klikkaa <b>Seuraava</b>.</li><li>Valitse imestyneestä palveluiden listasta yksi kuvagalleriaasi (sen nimi vastaa galleriaasi). Jos palvelua ei löydy, varmista, että sinulla on <b>cpg_pub_wizard.reg</b> asennettuna kuten ylempänä kuvataan.</li><li>Anna kirjautumistiedot, jos tarvitaan.</li><li>Valitse kohdealbumi kuvillesi tai luo uusi.</li><li>Klikkaa <b>seuraava</b>. Kuvien lähetys alkaa.</li><li>Kun lähetys on valmis, tarkista, että kuvat lisättiin galleriaasi.</li></ul>
EOT;

$lang_xp_publish_notes = <<<EOT
<h2>Huomaa:</h2><ul><li>Kun lähetys on alkanut, ohjelma ei voi näyttää scriptin virheilmoituksia, joten et voi tietää, onnistuiko lähetys. Sinun on siis tarkistettava galleriasi.</li><li>Jos lähetys epäonnistui, laita päälle &quot;Debug-tila&quot; Copperminen ylläpitosivulla, yritä lähettää yksi kuva ja tarkista virheviestit
EOT;

$lang_xp_publish_flood = <<<EOT
tiedostosta, joka sijaitsee Copperminen hakemistossa palvelimellasi.</li><li>Välttääksesi gallerian <i>floodauksen</i> ohjelman kautta lisätyillä kuvilla, vain <b>gallerian ylläpitäjät</b> ja <b>käyttäjät, joilla on omia albumeita</b> voivat käyttää tätä ominaisuutta.</li>
EOT;



$lang_xp_publish_php = array(
  'title' => 'Coppermine - XP Web-julkaisuohjelma', //cpg1.4
  'welcome' => 'Tervetuloa <b>%s</b>,', //cpg1.4
  'need_login' => 'Sinun on kirjauduttava galleriaan voidaksesi käyttää tätä ohjelmaa.<p/><p>Kun kirjaudut, älä unohda valita <b>muista minut</b> -valintaa, jos sellainen on.', //cpg1.4
  'no_alb' => 'Ei löytynyt yhtään albumia, johon sinulla olisi oikeudet lisätä tiedostoja.', //cpg1.4
  'upload' => 'Lisää kuvasi olemassa olevaan albumiin', //cpg1.4
  'create_new' => 'Luo uusi albumi kuvillesi', //cpg1.4
  'album' => 'Albumi', //cpg1.4
  'category' => 'Kategoria', //cpg1.4
  'new_alb_created' => 'Uusi albumisi &quot;<b>%s</b>&quot; on luotu.', //cpg1.4
  'continue' => 'Paina &quot;Seuraava&quot; aloittaaksesi kuvien lisäämisen', //cpg1.4
  'link' => 'XP-webjulkaisuohjelma', //cpg1.4
);
}
?>
