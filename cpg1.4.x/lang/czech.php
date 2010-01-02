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
  Coppermine version: 1.4.26
  $HeadURL$
  $Revision$
  $Author$
  $Date$
**********************************************/

if (!defined('IN_COPPERMINE')) { die('Not in Coppermine...');}

// info about translators and translated language
$lang_translation_info = array(
  'lang_name_english' => 'Czech', //cpg1.4
  'lang_name_native' => 'Česky', //cpg1.4
  'lang_country_code' => 'cz', //cpg1.4
  'trans_name'=> 'Pavel Kolar - PKDATA',
  'trans_email' => 'p.kolar@pkdata.cz',
  'trans_website' => 'http://www.pkdata.cz/',
  'trans_date' => '2009-07-21',
);

$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('Bytů', 'KB', 'MB');

// Day of weeks and months
$lang_day_of_week = array('Ne', 'Po', 'Út', 'St', 'Čt', 'Pá', 'So');
$lang_month = array('Leden', 'Únor', 'Březen', 'Duben', 'Květen', 'Červen', 'Červenec', 'Srpen', 'Září', 'Říjen', 'Listopad', 'Prosinec');

// Some common strings
$lang_yes = 'Ano';
$lang_no  = 'Ne';
$lang_back = 'ZPĚT';
$lang_continue = 'POKRAČOVAT';
$lang_info = 'Informace';
$lang_error = 'Chyba';
$lang_check_uncheck_all = 'označ/odoznač vše'; //cpg1.4

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$album_date_fmt =    '%d. %B %Y';
$lastcom_date_fmt =  '%d. %B %Y v %H:%M';
$lastup_date_fmt = '%d. %B %Y';
$register_date_fmt = '%d. %B %Y';
$lasthit_date_fmt = '%d. %B %Y v %H:%M';
$comment_date_fmt =  '%d. %B %Y v %H:%M';
$log_date_fmt = '%d. %B %Y v %H:%M';

// For the word censor
$lang_bad_words = array('píča', 'hovno', '*fuck*', 'prdel', 'čůrák', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*');

$lang_meta_album_names = array(
        'random' => 'Náhodné obrázky',
        'lastup' => 'Nejnovější obrázky',
        'lastalb'=> 'Naposledy aktualizovaná alba',
        'lastcom' => 'Nejnovější komentáře',
        'topn' => 'Nejprohlíženější',
        'toprated' => 'Nejlépe hodnocené',
        'lasthits' => 'Naposledy zobrazené',
        'search' => 'Výsledky hledání',
        'favpics'=> 'Oblíbené obrázky',
);


$lang_errors = array(
    'access_denied' => 'Nemáte oprávnění na tuto stránku.',
    'perm_denied' => 'Nemáte dostatečná práva pro potvrzení této operace.',
    'param_missing' => 'Skriptu nebyly předány potřebné parametry',
    'non_exist_ap' => 'Vybraná alba/obrázek neexistuje',
    'quota_exceeded' => 'Vyčerpal(a) jste místo na disku.<br /><br />Vaše kvóta je[quota]K, Vaše obrázky zbírají [space]K, přidáním tohoto obrázku byste svoji kvótu překročil',
    'gd_file_type_err' => 'Pokud používáte GD knihovnu jsou podporovány jen obrázky JPG a PNG',
    'invalid_image' => 'Tento obrázek je poškozen/porušen GD knihovna s ním nemůže pracovat.',
    'resize_failed' => 'Nelze vytvořit náhled či zmenšený obrázek',
    'no_img_to_display' => 'Zde není žádný obrázek, který byste si mohl(a) prohlédnout',
    'non_exist_cat' => 'Vybraná kategorie neexistuje',
    'orphan_cat' => 'Podkategorie nemá nadřízenou kategorii. Problém opravte přes nastavení kategorií.',
    'directory_ro' => 'Do adresáře \'%s\' nelze zapisovat (nedostatečná práva), obrázky nemohly být smazány.',
    'non_exist_comment' => 'Vybraný komentář neexistuje',
    'pic_in_invalid_album' => 'Obrázek(y) je/jsou v neexistující galerii (%s)!?',
    'banned' => 'Byl jste vykopnut z těchto stránek, není Vám umožněno je používat.',
    'not_with_udb' => 'Tato funkce je vypnutá jelikož je integrována ve fóru. Buď není požadovaná fukce dostupná na tomto systému, nebo tuto/tyto funci/e plní fórum.',
    'offline_title' => 'Odpojeno', //cpg1.3.0
    'offline_text' => 'Galerie je momentálně odpojena - prosím zkuste to znovu později', //cpg1.3.0
    'ecards_empty' => 'Momentálně nejsou k zobraní dostupné žádné záznamy o ecards. Ověřte prosím, že je zapnutá volba "ecard logging" v konfiguraci coppermine!', //cpg1.3.0
    'action_failed' => 'Akce selhala.  Coppermine není schopno váš požadavek zpracovat.', //cpg1.3.0
    'no_zip' => 'Knihovny potřebné pro zpracování ZIP souborů nejsou dostupné.  Prosím kontaktujte Vašeho administrátora aplikace Coppermine.', //cpg1.3.0
    'zip_type' => 'Nemáte povolení nahrávat na server soubory ZIP.', //cpg1.3.0
    'database_query' => 'Vyskytla se chyba pi databázovém dotazu.', //cpg1.4
    'register_globals_on' => 'The PHP setting register_globals is enabled on your server, which is a bad idea in terms of security. It\'s strongly recommended to turn it off. [<a href="http://forum.coppermine-gallery.net/index.php/topic,59569.0.html" rel="external" class="external">more</a>]',
);

$lang_bbcode_help_title = 'bbcode pomoc'; //cpg1.4
$lang_bbcode_help = 'Následující značky mohou být užitečné: <li>[b]Bold[/b] =&gt; <b>Bold</b></li><li>[i]Italic[/i] =&gt; <i>Italic</i></li><li>[url=http://yoursite.com/]Url Text[/url] =&gt; <a href="http://yoursite.com">Url Text</a></li><li>[email]user@domain.com[/email] =&gt; <a href="mailto:user@domain.com">user@domain.com</a></li><li>[color=red]some text[/color] =&gt; <span style="color:red">nejaký text</span></li><li>[img]http://coppermine-gallery.net/demo/cpg14x/images/red.gif[/img] => <img src="../images/red.gif" border="0" alt="" /></li>'; //cpg1.4

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
  'home_title' => 'Jít na domovskou stránku',
  'home_lnk' => 'Domů',
    'alb_list_title' => 'Přejít na seznam alb',
    'alb_list_lnk' => 'Seznam alb',
    'my_gal_title' => 'Přejít do mé osobní galerie',
    'my_gal_lnk' => 'Moje galerie',
  'my_prof_title' => 'Přejít do mého osobního profilu', //cpg1.4
    'my_prof_lnk' => 'Můj Profil',
    'adm_mode_title' => 'Do Admin módu',
    'adm_mode_lnk' => 'Admin mód',
    'usr_mode_title' => 'Do uživatelského módu',
    'usr_mode_lnk' => 'Uživatelský mód',
    'upload_pic_title' => 'Nahrát obrázek do alba',
    'upload_pic_lnk' => 'Upload obrázku',
    'register_title' => 'Vytvořit účet',
    'register_lnk' => 'Registrovat se',
  'login_title' => 'Přihlášení', //cpg1.4
    'login_lnk' => 'Přihlásit',
  'logout_title' => 'Odhlášení', //cpg1.4
    'logout_lnk' => 'Odhlásit',
  'lastup_title' => 'Ukaž nejnovější obrázky', //cpg1.4
'lastup_lnk' => 'Nejnovější obrázky',
  'lastcom_title' => 'Ukaž poslední komentáře', //cpg1.4
    'lastcom_lnk' => 'Poslední komentáře',
  'topn_title' => 'Ukaž nejprohlíženější', //cpg1.4
    'topn_lnk' => 'Nejprohlíženější',
  'toprated_title' => 'Ukaž nejlépe hodnocené', //cpg1.4
    'toprated_lnk' => 'Nejlépe hodnocené',
  'search_title' => 'Hledej', //cpg1.4
    'search_lnk' => 'Vyhledávání',
  'fav_title' => 'Jdi na oblíbené', //cpg1.4
    'fav_lnk' => 'Oblíbené',
    'memberlist_title' => 'Ukaž seznam členů', //cpg1.3.0
    'memberlist_lnk' => 'Seznam členů', //cpg1.3.0
  'faq_title' => 'FAQ = nejčastěji kladené otázky na galerii &quot;Coppermine&quot;',
  'faq_lnk' => 'FAQ',
);

$lang_gallery_admin_menu = array(
  'upl_app_title' => 'Potvrzení nového uploadu', //cpg1.4
    'upl_app_lnk' => 'Potvrzení uploadu',
  'admin_title' => 'Konfigurovat', //cpg1.4
  'admin_lnk' => 'Konfigurace', //cpg1.4
  'albums_title' => 'Konfigurace alb', //cpg1.4
    'albums_lnk' => 'Konfigurace alb',
  'categories_title' => 'Konfigurovat kategorie', //cpg1.4
    'categories_lnk' => 'Konfigurace kategorií',
  'users_title' => 'Nastavit uživatele', //cpg1.4
    'users_lnk' => 'Uživatelé',
  'groups_title' => 'Konfigurovat uživatelské skupiny', //cpg1.4
    'groups_lnk' => 'Už. skupiny',
  'comments_title' => 'Přehled komentářů', //cpg1.4
    'comments_lnk' => 'Komentáře',
  'searchnew_title' => 'Přidání více obrázků najednou', //cpg1.4
    'searchnew_lnk' => 'Dávkové přidání obrázků',
  'util_title' => 'Změnit velikost atd...', //cpg1.4
    'util_lnk' => 'Administrátorské nástroje',
  'key_title' => 'Slovník klíčových slov', //cpg1.4
  'key_lnk' => 'Slovník klíčových slov', //cpg1.4
  'ban_title' => 'Odstranit uživatele', //cpg1.4
    'ban_lnk' => 'Odstranit uživatele',
  'db_ecard_title' => 'Zobrazit Ecards', //cpg1.4
  'db_ecard_lnk' => 'Zobrazit Ecards',
  'pictures_title' => 'Setřídit obrázky', //cpg1.4
  'pictures_lnk' => 'Setřídit obrázky', //cpg1.4
  'documentation_lnk' => 'Dokumentatace', //cpg1.4
  'documentation_title' => 'Coppermine manual', //cpg1.4
);

$lang_user_admin_menu = array(
  'albmgr_title' => 'Vytvořit / organizovat moje alba', //cpg1.4
    'albmgr_lnk' => 'Vytvořit / organizovat moje alba',
  'modifyalb_title' => 'Změnit moje alba',  //cpg1.4
    'modifyalb_lnk' => 'Změnit moje alba',
  'my_prof_title' => 'Můj profil', //cpg1.4
    'my_prof_lnk' => 'Můj profil',
);

$lang_cat_list = array(
  'category' => 'Kategorie',
  'albums' => 'Alba',
  'pictures' => 'Obrázky',
);

$lang_album_list = array(
  'album_on_page' => '%d album na %d stránce(kách)',
);

$lang_thumb_view = array(
  'date' => 'DATUM',
  //Sort by filename and title
  'name' => 'JMÉNO SOUBORU',
  'title' => 'NADPIS',
    'sort_da' => 'Řadit vzestupně podle data',
    'sort_dd' => 'Řadit sestupně podle data',
    'sort_na' => 'Řadit vzestupně podle jména',
    'sort_nd' => 'Řadit sestupně podle jména',
    'sort_ta' => 'Řadit vzestupně podle nadpisu',
    'sort_td' => 'Řadit sestupně podle nadpisu',
  'position' => 'POZICE', //cpg1.4
  'sort_pa' => 'Řadit vzestupně podle pozice', //cpg1.4
  'sort_pd' => 'Řadit sestupně podle pozice', //cpg1.4
    'download_zip' => 'Download jako Zip soubor', //cpg1.3.0
    'pic_on_page' => '%d obrázků na %d stránkách',
    'user_on_page' => '%d uživatelů na %d stránkách',
  'enter_alb_pass' => 'Vlož heslo pro album', //cpg1.4
  'invalid_pass' => 'Vadné heslo', //cpg1.4
  'pass' => 'Heslo', //cpg1.4
  'submit' => 'Odeslat', //cpg1.4
);

$lang_img_nav_bar = array(
    'thumb_title' => 'Zpět na stránku s náhledy',
    'pic_info_title' => 'Zobraz/skryj informace o obrázku',
    'slideshow_title' => 'Slideshow',
    'ecard_title' => 'Poslat tento obrázek jako pohlednici',
    'ecard_disabled' => 'Pohlednice jsou vypnuté',
    'ecard_disabled_msg' => 'Nemáte dostatečná práva pro zaslání pohlednice',
    'prev_title' => 'Předchozí obrázek',
    'next_title' => 'Další obrázek',
    'pic_pos' => 'OBRÁZEK %s/%s',
  'report_title' => 'Odešsli tento soubor administrátorovi', //cpg1.4
  'go_album_end' => 'Skok na konec', //cpg1.4
  'go_album_start' => 'Skok na začátek', //cpg1.4
  'go_back_x_items' => 'zpět o %s položzky', //cpg1.4
  'go_forward_x_items' => 'dopřredu o %s položzky', //cpg1.4
);

$lang_rate_pic = array(
    'rate_this_pic' => 'Hodnotit tento obrázek ',
    'no_votes' => '(žádné hodnocení)',
    'rating' => '(Aktuální hodnocení : %s / z 5, hlasováno %s krát)',
    'rubbish' => 'Hnusný',
    'poor' => 'Mizerný',
    'fair' => 'Ujde to',
    'good' => 'Dobrý',
    'excellent' => 'Výborný',
    'great' => 'Dokonalý',
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
    CRITICAL_ERROR => 'Kritická chyba',
    'file' => 'Soubor: ',
    'line' => 'Řádka: ',
);

$lang_display_thumbnails = array(
    'filename' => 'Jméno souboru : ',
    'filesize' => 'Velikost souboru : ',
    'dimensions' => 'Rozměry : ',
    'date_added' => 'Datum přidání : '
);

$lang_get_pic_data = array(
    'n_comments' => '%s Komentář(ů)',
    'n_views' => '%s zobrazení',
    'n_votes' => '(%s hlas(ů))'
);

$lang_cpg_debug_output = array(
  'debug_info' => 'Debug Info', //cpg1.3.0
  'select_all' => 'Vybrat vše', //cpg1.3.0
  'copy_and_paste_instructions' => 'Pokud se chystáte požadovat pomoc na podpoře coppermine, vložte tento ladící výstup do vašecho příspěvku. Před takovým vložením se ujistěte, že jste všechna vaše hesla z tohoto textu nahradili pomocí "***".', //cpg1.3.0
  'phpinfo' => 'Zobrazit phpinfo', //cpg1.3.0
  'notices' => 'Poznámky', //cpg1.4
);

$lang_language_selection = array(
  'reset_language' => 'Přednastavený jazyk', //cpg1.3.0
  'choose_language' => 'Vyberte Váš jazyk', //cpg1.3.0
);

$lang_theme_selection = array(
  'reset_theme' => 'Přednastavené téma', //cpg1.3.0
  'choose_theme' => 'Vyberte téma', //cpg1.3.0
);

$lang_version_alert = array(
  'version_alert' => 'Nepodporovaná verze!', //cpg1.4
  'security_alert' => 'Bezpečnostní poplach!', //cpg1.4.3
  'relocate_exists' => 'Odstraň <a href="http://coppermine-gallery.net/forum/index.php?topic=24217.0">relocate_server.php</a> soubor z website!',
  'no_stable_version' => 'Používáte Coppermine %s (%s) která je míněna pro zkušené uživatele - tato verze je distribuována bez podpory a záruky funkčnosti. Riziko užití je na uživateli!', //cpg1.4
  'gallery_offline' => 'Galerie je momentálně offline a bude viditelná jen pro administrátora. Nezapomeňte ji prepnout do online režimu po dokončení údržby.', //cpg1.4
);

$lang_create_tabs = array(
  'previous' => 'předešlý', //cpg1.4
  'next' => 'další', //cpg1.4
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
  'error_wakeup' => "Nelze oživit plugin '%s'", //cpg1.4
  'error_install' => "Nemohu nainstalovat plugin '%s'", //cpg1.4
  'error_uninstall' => "Nemohu odinstalovat plugin '%s'", //cpg1.4
  'error_sleep' => "Nomohu odinstalovat plugin '%s'<br />", //cpg1.4
);

// ------------------------------------------------------------------------- //
// File include/smilies.inc.php
// ------------------------------------------------------------------------- //

if (defined('SMILIES_PHP')) $lang_smilies_inc_php = array(
  'Exclamation' => 'Exclamation',
  'Question' => 'Question',
  'Very Happy' => 'Very Happy',
  'Smile' => 'Smile',
  'Sad' => 'Sad',
  'Surprised' => 'Surprised',
  'Shocked' => 'Shocked',
  'Confused' => 'Confused',
  'Cool' => 'Cool',
  'Laughing' => 'Laughing',
  'Mad' => 'Mad',
  'Razz' => 'Razz',
  'Embarassed' => 'Embarassed',
  'Crying or Very sad' => 'Crying or Very sad',
  'Evil or Very Mad' => 'Evil or Very Mad',
  'Twisted Evil' => 'Twisted Evil',
  'Rolling Eyes' => 'Rolling Eyes',
  'Wink' => 'Wink',
  'Idea' => 'Idea',
  'Arrow' => 'Arrow',
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
    0 => 'Opouštím Admin Mód....:-(',
    1 => 'Vstupuji do Admin Módu....:-)',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
    'alb_need_name' => 'Album musí mít jméno',
    'confirm_modifs' => 'Jste si jist(a) těmito změnami ?',
    'no_change' => 'Neudělal(a) jste žádné změny !',
    'new_album' => 'Nové album',
    'confirm_delete1' => 'Jste si jist(a), že chcete smazat toto album?',
    'confirm_delete2' => '\nVšechny obrázky a komentáře budou smazány !',
    'select_first' => 'Nejprve vyberte album',
    'alb_mrg' => 'Správce alb',
    'my_gallery' => '* Moje galerie *',
    'no_category' => '* Není kategorie *',
    'delete' => 'Smazat',
    'new' => 'Nový/á',
    'apply_modifs' => 'Potvrdit změny',
    'select_category' => 'Vybrat kategorii',
);

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) $lang_banning_php = array(
  'title' => 'Nežádoucí uživatelé', //cpg1.4
  'user_name' => 'Uživetelské jméno', //cpg1.4
  'ip_address' => 'IP Addresa', //cpg1.4
  'expiry' => 'Expirace (prázdná jestli je permanentní)', //cpg1.4
  'edit_ban' => 'Ulož změny', //cpg1.4
  'delete_ban' => 'Vymaž', //cpg1.4
  'add_new' => 'Přidej nového nežádoucího', //cpg1.4
  'add_ban' => 'Přidat', //cpg1.4
  'error_user' => 'Nemohu nalézt uživatele', //cpg1.4
  'error_specify' => 'Musíte blíže specifikovat uživatele jménem nebo IP adresou.', //cpg1.4
  'error_ban_id' => 'Vadné nežádoucí ID!', //cpg1.4
  'error_admin_ban' => 'Nemůžete zakázat sami sebe!', //cpg1.4
  'error_server_ban' => 'Tam kde děláš, to je nežádoucí server? Tsk tsk, to neudělám...', //cpg1.4
  'error_ip_forbidden' => 'Nelze zakázat tuhle adresu IP - je privátní... non-routable (private)!<br />Jestliže chcete zakázat přístup z privátních adres, změňte to v nastavení <a href="admin.php">Nastavení</a> (only makes sense when Coppermine runs on a LAN).', //cpg1.4
  'lookup_ip' => 'Podívej se na IP adresu', //cpg1.4
  'submit' => 'Odešli!', //cpg1.4
  'select_date' => 'Vyber datum', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File bridgemgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('BRIDGEMGR_PHP')) $lang_bridgemgr_php = array(
  'title' => 'Průvodce propojením',
  'warning' => 'Varování: když používáte průvodce, musíte pochopit, že citlivá data budou zasílána přes html formuláře. Pouze spuštění na vašem PC(ne jako veřejný klient třeba v internetové kavárně) a musíte vymazat cache browswru a dočasné soubory, aby nedošlo k jejich prozrazení!',
  'back' => 'zpět',
  'next' => 'další',
  'start_wizard' => 'Start propojovacího průvodce',
  'finish' => 'Konec',
  'hide_unused_fields' => 'zkryj nepoužívané položky (doporučeno)',
  'clear_unused_db_fields' => 'vymaž vadný databázový vstup (doporučeno)',
  'custom_bridge_file' => 'jméno tvého uživatelského překlenovacího souboru (jestlize propojovací soubor je <i>myfile.inc.php</i>, enter <i>můjsoubor</i> do tohoto pole)',
  'no_action_needed' => 'V tomto kroku není potřeba nic dělat. klikni na  \'next\' pro pokračování.',
  'reset_to_default' => 'Nastav defaultní hodnoty',
  'choose_bbs_app' => 'vyberte plikaci propojení s coppermine',
  'support_url' => 'Jdi sem pro podporu této aplikace',
  'settings_path' => 'cesta (y) použité v BBS aplikaci',
  'database_connection' => 'databázové spojení',
  'database_tables' => 'databázové tabulky',
  'bbs_groups' => 'BBS skupina',
  'license_number' => 'Licenční číslo',
  'license_number_explanation' => 'vlož své lizenční číslo (jestli je aplikováno)',
  'db_database_name' => 'Jméno databáze',
  'db_database_name_explanation' => 'Vložte jméno vaší databáze BBS',
  'db_hostname' => 'Host databáze',
  'db_hostname_explanation' => 'Jméno místa kde sídlí vaše mySQL databaáze, obvykle &quot;localhost&quot;',
  'db_username' => 'Database user account',
  'db_username_explanation' => 'mySQL uživatelské heslo pro uživatelské heslo pro připojení s BBS',
  'db_password' => 'Heslo databáze',
  'db_password_explanation' => 'Heslo pro mySQL uživatelského přístupu',
  'full_forum_url' => 'Forum URL',
  'full_forum_url_explanation' => 'Plné URL vší BBS plikace (obsahující http:// např. http://www.yourdomain.tld/forum)',
  'relative_path_of_forum_from_webroot' => 'Relativní cesta fóra',
  'relative_path_of_forum_from_webroot_explanation' => 'Relativní cesta k vaší BBS aplikaci (například: jestli je BBS na http://www.yourdomain.tld/forum/, vložte &quot;/forum/&quot; do tohoto pole)',
  'relative_path_to_config_file' => 'Relativní cesta na vaši BBS konfigurační soubor',
  'relative_path_to_config_file_explanation' => 'Relativní cestapro vaši BBS, pro Coppermine složku (např. &quot;../forum/&quot; jestliže vaše BBS je http://www.yourdomain.tld/forum/ a Coppermine na http://www.yourdomain.tld/gallery/)',
  'cookie_prefix' => 'Cookie prefix',
  'cookie_prefix_explanation' => 'toto je vaše BBS cookie jméno',
  'table_prefix' => 'Prefix tabulky',
  'table_prefix_explanation' => 'Musí být rovný prefixu ktrý byl vybrán v BBS když byla nastavována.',
  'user_table' => 'Uživatelská tabulka',
  'user_table_explanation' => '(obvykle defaultní nastavení je OK, avšak BBS instalace nemusí být standardní)',
  'session_table' => 'Tabulka připojení',
  'session_table_explanation' => '(obvykle defaultní nastavení je OK, avšak BBS instalace nemusí být standardní)',
  'group_table' => 'Tabulka uživatelů',
  'group_table_explanation' => '(obvykle defaultní nastavení je OK, avšak BBS instalace nemusí být standardní)',
  'group_relation_table' => 'Tabulka relací skupiny',
  'group_relation_table_explanation' => '(obvykle defaultní nastavení je OK, avšak BBS instalace nemusí být standardní)',
  'group_mapping_table' => 'Tabulka mapování skupiny',
  'group_mapping_table_explanation' => '(obvykle defaultní nastavení je OK, avšak BBS instalace nemusí být standardní)',
  'use_standard_groups' => 'Použití standardních BBS uživatelskou skupiny',
  'use_standard_groups_explanation' => 'Použití standardních (vestavěných) uživatelských uživatelských skupin (doporučeno). This will make all custom usergroups settings made on this page become void. Only disable this option if you REALLY know what you\'re doing!',
  'validating_group' => 'Ověřená skupina',
  'validating_group_explanation' => 'Skupina ID vaší BBS kde jsou uživatelská konta které potřebujete validovat(obvykle přednastavené hodnoty mohou být OK, avšak BBS nemusí být nastavena standardně)',
  'guest_group' => 'Skupina hostů',
  'guest_group_explanation' => 'Skupina ID vaší BBS kde jsou hosti (anonymní uživatelé) jsou v (obvykle přednastavené hodnoty mohou být OK, pouze změněny, jestliže víte jak se to dělá)',
  'member_group' => 'Skupina uživatelů',
  'member_group_explanation' => 'Skupina ID vaší BBS kde jsou &quot;regular&quot; uživatelské účty (obvykle přednastavené hodnoty mohou být OK, pouze změněny, jestliže víte jak se to dělá)',
  'admin_group' => 'Administrátorská skupina',
  'admin_group_explanation' => 'Skupina ID vaší BBS kde jsou administrátoři (obvykle přednastavené hodnoty mohou být OK, pouze změněny, jestliže víte jak se to dělá)',
  'banned_group' => 'Nežádoucí skupina',
  'banned_group_explanation' => 'Skupina ID vaší BBS kde jsou nežádoucí uživatelé (obvykle přednastavené hodnoty mohou být OK, pouze změněny, jestliže víte jak se to dělá)',
  'global_moderators_group' => 'Globalní moderátorská skupina',
  'global_moderators_group_explanation' => 'Skupina ID vaší BBS kde jsou globalní moderátoři vaší BBS (obvykle přednastavené hodnoty mohou být OK, pouze změněny, jestliže víte jak se to dělá)',
  'special_settings' => 'BBS-specifické nastavení',
  'logout_flag' => 'phpBB verze (logout flag)',
  'logout_flag_explanation' => 'Jaká je verze vaší BBS version)',
  'use_post_based_groups' => 'Použít post-based skupinu?',
  'logout_flag_yes' => '2.0.5 a vyšší',
  'logout_flag_no' => '2.0.4 nebo nižší',
  'use_post_based_groups_explanation' => 'Mohou být skypiny z BBS které jsou definovány jako mnoho posts be taken into account (allows a granular permissions management) or just the default groups (makes administration easier, recommended). You can change this setting later as well.',
  'use_post_based_groups_yes' => 'Ano',
  'use_post_based_groups_no' => 'Ne',
  'error_title' => 'Musíte opravit tyto chyby, než budete pokračovat. Vrate se na předešlou obrazovku.',
  'error_specify_bbs' => 'Můžete specifikovat jakou aplikaci chcete propojit s Coppermine instalací.',
  'error_no_blank_name' => 'Nemůžete nechat jméno propojovacího souboru prázné.',
  'error_no_special_chars' => 'Propojovací soubor nesmí obsahovat speciální znaky jako (_) a (-)!',
  'error_bridge_file_not_exist' => 'Propojovací soubor %s neexistuje na serveru. Zkontrolujte, jestli byl uploadován.',
  'finalize' => 'zapnout/vypnout BBS integraci',
  'finalize_explanation' => 'Příliš vzdálené, nastavení vámi specifikované v databázi, ale  BBS nemůže být zapnuto. Můžete nastavit integraci vypnuto/zapnuto později. Nezapomeňte změnit uživatelské jméno a heslo a pro samotnou Coppermine, můžete pozdějio potřebovat udělat nějaké změny. Jestliže něco bude v nepořádku, běžte na %s a vypněte BBS integraci, použijde samostatný (nepropojený) admin účet (obvykle je nastavený během instalece Coppermine).',
  'your_bridge_settings' => 'Vaše propojovací nastavení',
  'title_enable' => 'Zapnout integraci/propojení s %s',
  'bridge_enable_yes' => 'zapnuto',
  'bridge_enable_no' => 'vypnuto',
  'error_must_not_be_empty' => 'nesmí být prázdné',
  'error_either_be' => 'musí být %s nebo %s',
  'error_folder_not_exist' => '%s neexistuje. Opravte hodnotu %s',
  'error_cookie_not_readible' => 'Coppermine nemůže číst jméno cookie %s. Opravte hodnotu %s, nebo přejděte do BBS administrátorského panelu a zkontrolujte, že cookie cesta čitelná pro coppermine.',
  'error_mandatory_field_empty' => 'Nemůžete pole nechat prázdné %s vyplňte příslušnou hodnotu.',
  'error_no_trailing_slash' => 'Nesmí tam být koncové lomítko  v poli %s.',
  'error_trailing_slash' => 'Musí tam být koncové lomítko v poli %s.',
  'error_db_connect' => 'Nemohu se připojit na mySQL databázi s udanými údaji. Toto vrací mySQL:',
  'error_db_name' => 'Také Coppermine nemůže navázat spojení, nebylo nalezeno v databázi %s. Zkontrolujte, zda je nastaveno správně %s .  mySQL hlásí:',
  'error_prefix_and_table' => '%s a ',
  'error_db_table' => 'Nemohu nalézt tabulku %s. Zkontrolujte , jestli je %s správně.',
  'recovery_title' => 'Manažer propojení: záchranná oprava',
  'recovery_explanation' => 'If you came here to administer the BBS integration of your Coppermine gallery, you have to log in first as admin. If you can not log in because bridging doesn\'t work as expected, you can disable BBS integration with this page. Entering your username and password will not log you in, it will only disable BBS integration. Refer to the documentation for details.',
  'username' => 'Jméno',
  'password' => 'Heslo',
  'disable_submit' => 'odešli',
  'recovery_success_title' => 'Authorizace úspěšná',
  'recovery_success_content' => 'Odpojili jste úspěšně BBS propojení. Vaše Coppermine instalace praceje v samostatném módu.',
  'recovery_success_advice_login' => 'Připojte se jako admin a zeditujtenastavení propojení a/nebo zapněte integraci BBS znovu.',
  'goto_login' => 'Přechod na přihlašovací stránku',
  'goto_bridgemgr' => 'Přechod na Manažera propojení',
  'recovery_failure_title' => 'Authorizace se nezdařila',
  'recovery_failure_content' => 'You supplied the wrong credentials. You will have to supply the admin account data of the standalone version (usually the account you set up during Coppermine install).',
  'try_again' => 'zkuste to znovu',
  'recovery_wait_title' => 'Počkejte, než uplyne daný čas',
  'recovery_wait_content' => 'Z bezpečnostních důvodů tento skript nedovoluje špatné přihlášení, musíte chvíli počkat aby jste to mohli zkusit znovu.',
  'wait' => 'počkej',
  'create_redir_file' => 'Vytvořit přesměrovávací soubor (doporučeno)',
  'create_redir_file_explanation' => 'Na přesměrování zpět do Coppermine, se bude připojovat do BBS, potřebujete přesměrovat soubor vytvořený ve vaší BBS složce. Když je tato volba vybrána, propojovací manažer vytoří tento soubor pro vás, nebo vám předá kód připravený na kopírování manuálně.',
  'browse' => 'browse',
);

// ------------------------------------------------------------------------- //
// File calendar.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('CALENDAR_PHP')) $lang_calendar_php = array(
  'title' => 'Kalendář', //cpg1.4
  'close' => 'zavři', //cpg1.4
  'clear_date' => 'vymaž datum', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
    'miss_param' => 'Parametry potřebné pro \'%s\'operaci not supplied !',
    'unknown_cat' => 'Vybraná kategorie v databázi neexistuje',
    'usergal_cat_ro' => 'Nelze smazat uživatelská alba  !',
    'manage_cat' => 'Spravovat kategorie',
    'confirm_delete' => 'Opravdu chcete SMAZAT tuto kategorii',
    'category' => 'Kategorie',
    'operations' => 'Operace',
    'move_into' => 'Přesunout do',
    'update_create' => 'Aktualizovat/Vytvořit kategorii',
    'parent_cat' => 'Nadřazená kategorie',
    'cat_title' => 'Nadpis kategorie',
    'cat_thumb' => 'Miniatura kategorie', //cpg1.3.0
    'cat_desc' => 'Popis kategorie',
  'categories_alpha_sort' => 'Setřiď kategorie abecedně (místo uživatelkým třídícím pravidlem)', //cpg1.4
  'save_cfg' => 'Ulož nastavení', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File admin.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('ADMIN_PHP')) $lang_admin_php = array(
    'title' => 'Nastavení',
  'manage_exif' => 'Nastav exif zobrazení', //cpg1.4
  'manage_plugins' => 'Nastav pluginy', //cpg1.4
  'manage_keyword' => 'Nastav Klíčová slova', //cpg1.4
    'restore_cfg' => 'Nastavit výchozí',
    'save_cfg' => 'Uložit konfiguraci',
    'notes' => 'Poznámky',
  'info' => 'Informace',
    'upd_success' => 'Konfigurace byla změněna',
    'restore_success' => 'Konfigurace byla nastavena na výchozí nastavení',
    'name_a' => 'Jméno vzestupně',
    'name_d' => 'Jméno sestupně',
    'title_a' => 'Nadpis vzestupně',
    'title_d' => 'Nadpis sestupně',
    'date_a' => 'Datum vzestupně',
    'date_d' => 'Datum sestupně',
  'pos_a' => 'Pozice vzestupně', //cpg1.4
  'pos_d' => 'Pozice sestupně', //cpg1.4
    'th_any' => 'Max rozlišení',
    'th_ht' => 'Výška',
    'th_wd' => 'Šířka',
    'label' => 'popiska', //cpg1.3.0
    'item' => 'položka', //cpg1.3.0
    'debug_everyone' => 'Každý', //cpg1.3.0
    'debug_admin' => 'Pouze Admin', //cpg1.3.0
  'no_logs'=> 'Vypnuto', //cpg1.4
  'log_normal'=> 'Normal', //cpg1.4
  'log_all' => 'Všechno', //cpg1.4
  'view_logs' => 'Zobraz logy', //cpg1.4
  'click_expand' => 'klikni na jméno sekce pro rozbalení', //cpg1.4
  'expand_all' => 'Rozbal vše', //cpg1.4
  'notice1' => '(*) Toto nastavení nesmí být změněno jestliže máte uloženy soubory v databázi.', //cpg1.4 - (relocated)
  'notice2' => '(**) Když se změní toto nastavení, pouze soubory, které budou přidány později budou mít viditelné změny. Avšak aplikovat tuto změnu lze přes &quot;<a href="util.php">administrátorské nástroje&quot</a>.', //cpg1.4 - (relocated)
  'notice3' => '(***) Všechny log soubory jsou v angličtině.', //cpg1.4 - (relocated)
  'bbs_disabled' => 'Funkce je vypnuta když se použije bb integrace', //cpg1.4
  'auto_resize_everyone' => 'Kdokoliv', //cpg1.4
  'auto_resize_user' => 'Pouze uživatel', //cpg1.4
  'ascending' => 'vzestupně', //cpg1.4
  'descending' => 'sestupně', //cpg1.4
);

if (defined('ADMIN_PHP')) $lang_admin_data = array(
  'Hlavní nastavení',
  array('Jméno galerie', 'gallery_name', 0, 'f=index.htm&amp;as=admin_general_name&amp;ae=admin_general_name_end'), //cpg1.4
  array('Popiska galerie', 'gallery_description', 0, 'f=index.htm&amp;as=admin_general_description&amp;ae=admin_general_description_end'), //cpg1.4
  array('Email na administrátora', 'gallery_admin_email', 0, 'f=index.htm&amp;as=admin_general_email&amp;ae=admin_general_email_end'), //cpg1.4
  array('URL vaší složky coppermine galerie (ne \'index.php\' nebo podobné)', 'ecards_more_pic_target', 0, 'f=index.htm&amp;as=admin_general_coppermine-url&amp;ae=admin_general_coppermine-url_end'), //cpg1.4
  array('URL vaší startovací stránky', 'home_target', 0, 'f=index.htm&amp;as=admin_general_home-url&amp;ae=admin_general_home-url_end'), //cpg1.4
  array('Povolit ZIP-download oblíbených', 'enable_zipdownload', 1, 'f=index.htm&amp;as=admin_general_zip-download&amp;ae=admin_general_zip-download_end'), //cpg1.4
  array('Timezona se liší od GMT (aktuální místní čas: ' . localised_date(-1, $comment_date_fmt) . ')','time_offset',0, 'f=index.htm&amp;as=admin_general_time-offset&amp;ae=admin_general_time-offset_end&amp;top=1'), //cpg1.4
  array('Zapnout šifrování hesel (nemusí být uvolněno)','enable_encrypted_passwords',1, 'f=index.htm&amp;as=admin_general_encrypt_password_start&amp;ae=admin_general_encrypt_password_end&amp;top=1'), // cpg 1.4
  array('Zapnout help-iconu (nápověda napsána pouze v angličtině)','enable_help',9, 'f=index.htm&amp;as=admin_general_help&amp;ae=admin_general_help_end'), //cpg1.4
  array('Zapnout klíčová slova ve vyhledávání','clickable_keyword_search',14, 'f=index.htm&amp;as=admin_general_keywords_start&amp;ae=admin_general_keywords_end'), //cpg1.4
  array('Zapnout pluginy', 'enable_plugins', 12, 'f=index.htm&amp;as=admin_general_enable-plugins&amp;ae=admin_general_enable-plugins_end'),  //cpg1.4
  array('Povol odmítat neprivátní IP adresy', 'ban_private_ip', 1,  'f=index.htm&amp;as=admin_general_private-ip&amp;ae=admin_general_private-ip_end'), //cpg1.4
  array('Dávkové rozhraní v browseru', 'browse_batch_add', 1, 'f=index.htm&amp;as=admin_general_browsable_batch_add&amp;ae=admin_general_browsable_batch_add_end'), //cpg1.4

  'Nastavení jazyka &amp; znakové sady',
  array('Jazyk', 'lang', 5, 'f=index.htm&amp;as=admin_language_language&amp;ae=admin_language_language_end'), //cpg1.4
  array('Návrat do Angličtiny, jestli nastavený jazyk není nalezen', 'language_fallback', 1, 'f=index.htm&amp;as=admin_language_fallback&amp;ae=admin_language_fallback_end'), //cpg1.4
  array('Znaková sada', 'charset', 4, 'f=index.htm&amp;as=admin_language_charset&amp;ae=admin_language_charset_end'), //cpg1.4
  array('Zobraz seznam jazyků', 'language_list', 1, 'f=index.htm&amp;as=admin_language_list&amp;ae=admin_language_list_end'), //cpg1.4
  array('Zobraz vlajky na výběr jazyka', 'language_flags', 8, 'f=index.htm&amp;as=admin_language_flags&amp;ae=admin_language_flags_end&amp;top=1'), //cpg1.4
  array('Zobraz &quot;reset&quot; ve výběru jazyka', 'language_reset', 1, 'f=index.htm&amp;as=admin_language_reset&amp;ae=admin_language_reset_end&amp;top=1'), //cpg1.4
  //array('Zobraz předchozí/následující tabulkové stránky', 'previous_next_tab', 1), //cpg1.4

  'Nastavení témat',
  array('Téma', 'theme', 6, 'f=index.htm&amp;as=admin_theme_theme&amp;ae=admin_theme_theme_end'), //cpg1.4
  array('Zobraz seznam témat', 'theme_list', 1, 'f=index.htm&amp;as=admin_theme_theme_list&amp;ae=admin_theme_theme_list_end'), //cpg1.4
  array('Zobraz &quot;reset&quot; ve výběru témata', 'theme_reset', 1, 'f=index.htm&amp;as=admin_theme_theme_reset&amp;ae=admin_theme_theme_reset_end'), //cpg1.4
  array('Zobraz FAQ', 'display_faq', 1, 'f=index.htm&amp;as=admin_theme_faq&amp;ae=admin_theme_faq_end'), //cpg1.4
  array('Jméno volitelné položky v menu', 'custom_lnk_name', 0,'f=index.htm&amp;as=admin_theme_custom_lnk_name&amp;ae=admin_theme_custom_lnk_name_end'), //cpg1.4
  array('URL volitelné položky v menu', 'custom_lnk_url', 0,'f=index.htm&amp;as=admin_language_custom_lnk_url&amp;ae=admin_language_custom_lnk_url_end'), //cpg1.4
  array('Zobraz bbcode nápovědu', 'show_bbcode_help', 1, 'f=index.htm&amp;as=admin_theme_bbcode&amp;ae=admin_theme_bbcode_end&amp;top=1'), //cpg1.4
  array('Zobrazuj validační značky témat definované jako XHTML a CSS compliant','vanity_block',1, 'f=index.htm&amp;as=vanity_block&amp;ae=vanity_block_end'), //cpg1.4
  array('Cesta pro volitelné vložené záhlaví', 'custom_header_path', 0, 'f=index.htm&amp;as=admin_theme_include_path_start&amp;ae=admin_theme_include_path_end'), //cpg1.4
  array('Cesta pro volitelné vložené zápatí', 'custom_footer_path', 0, 'f=index.htm&amp;as=admin_theme_include_path_start&amp;ae=admin_theme_include_path_end'), //cpg1.4

  'Nastavení zobrazení výpisu alb',
  array('Velikost šířky hlavní tabukly (pixlů nebo %)', 'main_table_width', 0, 'f=index.htm&amp;as=admin_album_table-width&amp;ae=admin_album_table-width_end'), //cpg1.4
  array('Počet zobrazovaných zanoření kategorií', 'subcat_level', 0, 'f=index.htm&amp;as=admin_album_category-levels&amp;ae=admin_album_category-levels_end'), //cpg1.4
  array('Počet alb pro zobrazení', 'albums_per_page', 0, 'f=index.htm&amp;as=admin_album_number&amp;ae=admin_album_number_end'), //cpg1.4
  array('Počet sloupců v listu alba', 'album_list_cols', 0, 'f=index.htm&amp;as=admin_album_columns&amp;ae=admin_album_columns_end'), //cpg1.4
  array('Velikost náhledu v pixlech', 'alb_list_thumb_size', 0, 'f=index.htm&amp;as=admin_album_thumbnail-size&amp;ae=admin_album_thumbnail-size_end'), //cpg1.4
  array('Styl hlavní stránky', 'main_page_layout', 0, 'f=index.htm&amp;as=admin_album_list_content&amp;ae=admin_album_list_content_end'), //cpg1.4
  array('Ukaž první album v kategoriích','first_level',1, 'f=index.htm&amp;as=admin_album_first-level_thumbs&amp;ae=admin_album_first-level_thumbs_end'), //cpg1.4
  array('Setřiď kategorie alfanumericky (namísto uživatelského nastavení třídění)','categories_alpha_sort',1, 'f=index.htm&amp;as=admin_album_list_alphasort_start&amp;ae=admin_album_list_alphasort_end'), //cpg1.4
  array('Ukaž celkový počet souborů','link_pic_count',1, 'f=index.htm&amp;as=admin_album_linked_files_start&amp;ae=admin_album_linked_files_end'), //cpg1.4

  'Nastavení náhledů',
  array('Počet sloupců na stránce s náhledy', 'thumbcols', 0, 'f=index.htm&amp;as=admin_thumbnail_columns&amp;ae=admin_thumbnail_columns_end'), //cpg1.4
  array('Počet řádků na stránce s náhledy', 'thumbrows', 0, 'f=index.htm&amp;as=admin_thumbnail_rows&amp;ae=admin_thumbnail_rows_end'), //cpg1.4
  array('Maximální počet štítků pro zobrazení stránek na liště', 'max_tabs', 10, 'f=index.htm&amp;as=admin_thumbnail_tabs&amp;ae=admin_thumbnail_tabs_end'), //cpg1.4
  array('Zobraz popis souboru (přidaný k názvu) pod náhledem', 'caption_in_thumbview', 1, 'f=index.htm&amp;as=admin_thumbnail_display_caption&amp;ae=admin_thumbnail_display_caption_end'), //cpg1.4
  array('Zobraz počet zobrazení pod náhledem', 'views_in_thumbview', 1, 'f=index.htm&amp;as=admin_thumbnail_display_views&amp;ae=admin_thumbnail_display_views_end'), //cpg1.4
  array('Zobraz počet komentářů pod náhledem', 'display_comment_count', 1, 'f=index.htm&amp;as=admin_thumbnail_display_comments&amp;ae=admin_thumbnail_display_comments_end'), //cpg1.4
  array('Zobraz jméno uploadu pod náhledem', 'display_uploader', 1, 'f=index.htm&amp;as=admin_thumbnail_display_uploader&amp;ae=admin_thumbnail_display_uploader_end'), //cpg1.4
  //array('Display name of admin uploaders below the thumbnail', 'display_admin_uploader', 1, 'f=index.htm&amp;as=admin_thumbnail_display_admin_uploader&amp;ae=admin_thumbnail_display_admin_uploader_end'), //cpg1.4
  array('Zobraz jméno souboru pod náhledem', 'display_filename', 1, 'f=index.htm&amp;as=admin_thumbnail_display_filename&amp;ae=admin_thumbnail_display_filename_end'), //cpg1.4
  //array('Zobraz popis alba', 'alb_desc_thumb', 1, 'f=index.htm&amp;as=admin_thumbnail_display_description&amp;ae=admin_thumbnail_display_description_end'), //cpg1.4
  array('Přednastavené třídění souborů', 'default_sort_order', 3, 'f=index.htm&amp;as=admin_thumbnail_default_sortorder&amp;ae=admin_thumbnail_default_sortorder_end'), //cpg1.4
  array('Minimální počet hlasujících, aby byl soubor umístěn mezi \'top-rated\' list', 'min_votes_for_rating', 0, 'f=index.htm&amp;as=admin_thumbnail_minimum_votes&amp;ae=admin_thumbnail_minimum_votes_end'), //cpg1.4

  'Nastavení obrázků', //cpg1.4
  array('Velikost šířky hlavní tabukly (pixlů nebo %)', 'picture_table_width', 0, 'f=index.htm&amp;as=admin_image_comment_table-width&amp;ae=admin_image_comment_table-width_end'), //cpg1.4
  array('Zobrazení informací o souboru přednastavené', 'display_pic_info', 1, 'f=index.htm&amp;as=admin_image_comment_info_visible&amp;ae=admin_image_comment_info_visible_end'), //cpg1.4
  array('Max délka poznámky k obrázku', 'max_img_desc_length', 0, 'f=index.htm&amp;as=admin_image_comment_descr_length&amp;ae=admin_image_comment_descr_length_end'), //cpg1.4
  array('Max počet písmen ve slově', 'max_com_wlength', 0, 'f=index.htm&amp;as=admin_image_comment_chars_per_word&amp;ae=admin_image_comment_chars_per_word_end'), //cpg1.4
  array('Ukaž filmový pás náhledů', 'display_film_strip', 1, 'f=index.htm&amp;as=admin_image_comment_filmstrip_toggle&amp;ae=admin_image_comment_filmstrip_toggle_end'), //cpg1.4
  array('Zobraz jméno souboru ve filmovém pásu náhledů', 'display_film_strip_filename', 1, 'f=index.htm&amp;as=admin_image_comment_display_film_strip_filename&amp;ae=admin_image_comment_display_film_strip_filename_end'), //cpg1.4
  array('Počet položek ve filmovém pásu náhledů', 'max_film_strip_items', 0, 'f=index.htm&amp;as=admin_image_comment_filmstrip_number&amp;ae=admin_image_comment_filmstrip_number_end'), //cpg1.4
  array('Slideshow interval v milisekundách (1 sekunda = 1000 milisekund)', 'slideshow_interval', 0, 'f=index.htm&amp;as=admin_image_comment_slideshow_interval&amp;ae=admin_image_comment_slideshow_interval_end'), //cpg1.4

  'Nastavení komentářů', //cpg1.4
  array('Filtrování zakázaných slov v komentářích', 'filter_bad_words', 1, 'f=index.htm&amp;as=admin_image_comment_bad_words&amp;ae=admin_image_comment_bad_words_end'), //cpg1.4
  array('Povolit smajlíky v komentářích', 'enable_smilies', 1, 'f=index.htm&amp;as=admin_image_comment_smilies&amp;ae=admin_image_comment_smilies_end'), //cpg1.4
  array('Povolit několik za sebou jdoucích stejných komentářů od jednoho uživatele (vypnout záplavovou ochranu)', 'disable_comment_flood_protect', 1, 'f=index.htm&amp;as=admin_image_comment_flood&amp;ae=admin_image_comment_flood_end'), //cpg1.4
  array('Max počet řádků na komentář', 'max_com_lines', 0, 'f=index.htm&amp;as=admin_image_comment_lines&amp;ae=admin_image_comment_lines_end'), //cpg1.4
  array('Maximální délka komentáře', 'max_com_size', 0, 'f=index.htm&amp;as=admin_image_comment_length&amp;ae=admin_image_comment_length_end'), //cpg1.4
  array('Oznam adminovi komentáře emailem', 'email_comment_notification', 1, 'f=index.htm&amp;as=admin_image_comment_admin_notify&amp;ae=admin_image_comment_admin_notify_end'), //cpg1.4
  array('Setřiď pořadí komentářů', 'comments_sort_descending', 17, 'f=index.htm&amp;as=admin_comment_sort_start&amp;ae=admin_comment_sort_end'), //cpg1.4
  array('Prefix pro anonymní autory komentářů', 'comments_anon_pfx', 0, 'f=index.htm&amp;as=comments_anon_pfx&amp;ae=comments_anon_pfx_end'), //cpg1.4

  'Nastavení souborů a tvorby náhledů',
  array('Kvalita JPEG souborů', 'jpeg_qual', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_jpeg_quality&amp;ae=admin_picture_thumbnail_jpeg_quality_end'), //cpg1.4
  array('Max velikost náhledu <a href="#notice2" class="clickable_option">**</a>', 'thumb_width', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max-dimension&amp;ae=admin_picture_thumbnail_max-dimension_end'), //cpg1.4
  array('Použij velikost ( šířka nebo výška nebo Max rozlišení pro náhled ) <a href="#notice2" class="clickable_option">**</a>', 'thumb_use', 7, 'f=index.htm&amp;as=admin_picture_thumbnail_use-dimension&amp;ae=admin_picture_thumbnail_use-dimension_end'), //cpg1.4
  array('Vytvoř střední náhledy','make_intermediate',1, 'f=index.htm&amp;as=admin_picture_thumbnail_intermediate_toggle&amp;ae=admin_picture_thumbnail_intermediate_toggle_end'), //cpg1.4
  array('Max šířka nebo výška středních náhledů obrázků/videa <a href="#notice2" class="clickable_option">**</a>', 'picture_width', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_intermediate_dimension&amp;ae=admin_picture_thumbnail_intermediate_dimension_end'), //cpg1.4
  array('Max velikost uploadovaných souborů (KB)', 'max_upl_size', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max_upload_size&amp;ae=admin_picture_thumbnail_max_upload_size_end'), //cpg1.4
  array('Max šířka nebo výška uploudovaných obrázků/videí (pixely)', 'max_upl_width_height', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max_upload_dimension&amp;ae=admin_picture_thumbnail_max_upload_dimension_end'), //cpg1.4
  array('Automaticky změň velikost obrázku, je-li větší než Max šířka nebo výška', 'auto_resize', 16, 'f=index.htm&amp;as=admin_picture_thumbnail_auto-resize&amp;ae=admin_picture_thumbnail_auto-resize_end'), //cpg1.4

  'Rozšířené nastavení souborů a tvorby náhledů',
  array('Galerie může být soukromá (Poznámka: jestliže změníte \'Ano\' na \'Ne\' jakákoliv současná soukromá galerie se stane veřejnou.)', 'allow_private_albums', 1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_private_toggle&amp;ae=admin_picture_thumb_advanced_private_toggle_end'), //cpg1.4
  array('Ukaž ikomu soukromé galerie nepřihlášenému uživateli','show_private',1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_private_icon_show&amp;ae=admin_picture_thumb_advanced_private_icon_show_end'), //cpg1.4
  array('Zakázaná slova v názvech', 'forbiden_fname_char',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_filename_forbidden_chars&amp;ae=admin_picture_thumb_advanced_filename_forbidden_chars_end'), //cpg1.4
  //array('Accepted file extensions for uploaded pictures', 'allowed_file_extensions',0, 'f=index.htm&amp;as=&amp;ae=_end'), //cpg1.4
  array('Povolené typy obrázků', 'allowed_img_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_pic_extensions&amp;ae=admin_picture_thumb_advanced_pic_extensions_end'), //cpg1.4
  array('Povolené typy videí', 'allowed_mov_types',0, 'f=index.htm&amp;as=admin_thumbs_advanced_movie&amp;ae=admin_thumbs_advanced_movie_end'), //cpg1.4
  array('Movie Playback Autostart', 'media_autostart',1, 'f=index.htm&amp;as=admin_movie_autoplay&amp;ae=admin_movie_autoplay_end'), //cpg1.4
  array('Povolené audio typy', 'allowed_snd_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_audio_extensions&amp;ae=admin_picture_thumb_advanced_audio_extensions_end'), //cpg1.4
  array('Povolené typy dokumentů', 'allowed_doc_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_doc_extensions&amp;ae=admin_picture_thumb_advanced_doc_extensions_end'), //cpg1.4
  array('Metoda změny obrázků','thumb_method',2, 'f=index.htm&amp;as=admin_picture_thumb_advanced_resize_method&amp;ae=admin_picture_thumb_advanced_resize_method_end'), //cpg1.4
  array('Cesta k ImageMagick \'convert\' utility (například /usr/bin/X11/)', 'impath', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_im_path&amp;ae=admin_picture_thumb_advanced_im_path_end'), //cpg1.4
  //array('Allowed image types (only valid for ImageMagick)', 'allowed_img_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_allowed_imagetypes&amp;ae=admin_picture_thumb_advanced_allowed_imagetypes_end'), //cpg1.4
  array('Parametry příkazové řádky pro ImageMagick', 'im_options', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_im_commandline&amp;ae=admin_picture_thumb_advanced_im_commandline_end'), //cpg1.4
  array('Číst EXIF data v JPEG souborech', 'read_exif_data', 13, 'f=index.htm&amp;as=admin_picture_thumb_advanced_exif&amp;ae=admin_picture_thumb_advanced_exif_end'), //cpg1.4
  array('Číst IPTC data v JPEG souborech', 'read_iptc_data', 1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_iptc&amp;ae=admin_picture_thumb_advanced_iptc_end'), //cpg1.4
  array('Adresář pro galerie <a href="#notice1" class="clickable_option">*</a>', 'fullpath', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_albums_dir&amp;ae=admin_picture_thumb_advanced_albums_dir_end'), //cpg1.4
  array('Adresář pro uživatelské soubory <a href="#notice1" class="clickable_option">*</a>', 'userpics', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_userpics_dir&amp;ae=admin_picture_thumb_advanced_userpics_dir_end'), //cpg1.4
  array('Předpona pro střední náhledy <a href="#notice1" class="clickable_option">*</a>', 'normal_pfx', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_intermediate_prefix&amp;ae=admin_picture_thumb_advanced_intermediate_prefix_end'), //cpg1.4
  array('Předpona pro náhledy<a href="#notice1" class="clickable_option">*</a>', 'thumb_pfx', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_thumbs_prefix&amp;ae=admin_picture_thumb_advanced_thumbs_prefix_end'), //cpg1.4
  array('Defaultní mód pro adresáře', 'default_dir_mode', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_chmod_folder&amp;ae=admin_picture_thumb_advanced_chmod_folder_end'), //cpg1.4
  array('Defaultní mód pro soubory', 'default_file_mode', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_chmod_files&amp;ae=admin_picture_thumb_advanced_chmod_files_end'), //cpg1.4

  'Nastavení uživatelů',
  array('Povolit registraci nového uživatele', 'allow_user_registration', 1, 'f=index.htm&amp;as=admin_allow_registration&amp;ae=admin_allow_registration_end'), //cpg1.4
  array('Povolit přístup nepřihlášeným (host nebo anonym) uživatelům', 'allow_unlogged_access', 1, 'f=index.htm&amp;as=admin_allow_unlogged_access&amp;ae=admin_allow_unlogged_access_end'), //cpg1.4
  array('Uživatelská registrace vyžaduje emailovou verifikaci', 'reg_requires_valid_email', 1, 'f=index.htm&amp;as=admin_registration_verify&amp;ae=admin_registration_verify_end'), //cpg1.4
  array('Oznam adminovi uživatelskou registraci emailem', 'reg_notify_admin_email', 1, 'f=index.htm&amp;as=admin_registration_notify&amp;ae=admin_registration_notify_end'), //cpg1.4
  array('Admin aktivuje registraci', 'admin_activation', 1, 'f=index.htm&amp;as=admin_activation&amp;ae=admin_activation_end'),  //cpg1.4
  array('Povol dvěma uživatelům stejnou emailovou adresu', 'allow_duplicate_emails_addr', 1, 'f=index.htm&amp;as=admin_allow_duplicate_emails_addr&amp;ae=admin_allow_duplicate_emails_addr_end'), //cpg1.4
  array('Oznam adminovi uživatelský upload pro očekávané schválení', 'upl_notify_admin_email', 1, 'f=index.htm&amp;as=admin_approval_notify&amp;ae=admin_approval_notify_end'), //cpg1.4
  array('Povol registrovaným uživatelům prohlížet seznam uživatelů', 'allow_memberlist', 1, 'f=index.htm&amp;as=admin_user_memberlist&amp;ae=admin_user_memberlist_end'), //cpg1.4
  array('Povol uživateli měnit svou emailovou adresu ve svém profilu', 'allow_email_change', 1, 'f=index.htm&amp;as=admin_user_allow_email_change&amp;ae=admin_user_allow_email_change_end'), //cpg1.4
  array('Povol uživateli kontrolu nad jeho uploadovanými obrázky v albech', 'users_can_edit_pics', 1, 'f=index.htm&amp;as=admin_user_editpics_public_start&amp;ae=admin_user_editpics_public_end'), //cpg1.4
  array('Počet neúspěšných přihlášení pro dočasné zablokování uživatele (ochrana proti  útoku silou)', 'login_threshold', 0, 'f=index.htm&amp;as=admin_user_login_start&amp;ae=admin_user_login_end'), //cpg1.4
  array('Doba dočasného zablokování po neúspěšných pokusech o přihlášení', 'login_expiry', 0, 'f=index.htm&amp;as=admin_user_login_start&amp;ae=admin_user_login_end'), //cpg1.4
  array('Povol zprávu pro admina', 'report_post', 1, 'f=index.htm&amp;as=admin_user_enable_report&amp;ae=admin_user_enable_report_end'),  //cpg1.4

// custom profile fields,  //cpg1.4
  'Měnitelná pole v uživatelově profilu (ponechte prázdné, jestli nepoužijete). Použijte až 6 profilů pro vstupy, jako je biografie atd.', //cpg1.4
  array('Profil 1 jméno', 'user_profile1_name', 0, 'f=index.htm&amp;as=admin_custom&amp;ae=admin_custom_end'), //cpg1.4
  array('Profil 2 jméno', 'user_profile2_name', 0), //cpg1.4
  array('Profil 3 jméno', 'user_profile3_name', 0), //cpg1.4
  array('Profil 4 jméno', 'user_profile4_name', 0), //cpg1.4
  array('Profil 5 jméno', 'user_profile5_name', 0), //cpg1.4
  array('Profil 6 jméno', 'user_profile6_name', 0), //cpg1.4

  'Měnitelná pole pro popisky obrázků (ponechte prázdné, jestli nepoužijete)',
  array('Pole 1 jméno', 'user_field1_name', 0, 'f=index.htm&amp;as=admin_custom_image&amp;ae=admin_custom_image_end'), //cpg1.4
  array('Pole 2 jméno', 'user_field2_name', 0),
  array('Pole 3 jméno', 'user_field3_name', 0),
  array('Pole 4 jméno', 'user_field4_name', 0),

  'Nastavení cookies',
  array('Jméno cookie', 'cookie_name', 0, 'f=index.htm&amp;as=admin_cookie_name&amp;ae=admin_cookie_name_end'), //cpg1.4
  array('Cesta k cookie', 'cookie_path', 0, 'f=index.htm&amp;as=admin_cookie_path&amp;ae=admin_cookie_path_end'), //cpg1.4

  'Nastavení emailů (obvykle zde není nic potřeba měnit; ponechte prázdné, jestli nepoužijete)', //cpg1.4
  array('SMTP Host (when left blank, sendmail will be used)', 'smtp_host', 0, 'f=index.htm&amp;as=admin_email&amp;ae=admin_email_end'), //cpg1.4
  array('SMTP Jméno', 'smtp_username', 0), //cpg1.4
  array('SMTP Heslo', 'smtp_password', 0), //cpg1.4

  'Statistika a záznamy přístupů', //cpg1.4
  array('Mód logování <a href="#notice3" class="clickable_option">***</a>', 'log_mode', 11, 'f=index.htm&amp;as=admin_logging_log_mode&amp;ae=admin_logging_log_mode_end'), //cpg1.4
  array('Logovat ecardy', 'log_ecards', 1, 'f=index.htm&amp;as=admin_general_log_ecards&amp;ae=admin_general_log_ecards_end'), //cpg1.4
  array('Udržování detailů ve statistice voleb','vote_details',1, 'f=index.htm&amp;as=admin_logging_votedetails&amp;ae=admin_logging_votedetails_end'), //cpg1.4
  array('Udržování detailů ve statistice přístupů','hit_details',1, 'f=index.htm&amp;as=admin_logging_hitdetails&amp;ae=admin_logging_hitdetails_end'), //cpg1.4

  'Nastavení údržby', //cpg1.4
  array('Zapni testovací mód', 'debug_mode', 9, 'f=index.htm&amp;as=debug_mode&amp;ae=debug_mode_end'), //cpg1.4
  array('Zobraz poznámky v testovacím módu', 'debug_notice', 1, 'f=index.htm&amp;as=admin_misc_debug_notices&amp;ae=admin_misc_debug_notices_end'), //cpg1.4
  array('Galerie je offline', 'offline', 1, 'f=index.htm&amp;as=admin_general_offline&amp;ae=admin_general_offline_end'), //cpg1.4
);


// ------------------------------------------------------------------------- //
// File db_ecard.php
// ------------------------------------------------------------------------- //

if (defined('DB_ECARD_PHP')) $lang_db_ecard_php = array(
  'title' => 'Zasílání ecards', //cpg1.3.0
  'ecard_sender' => 'Odesílatel', //cpg1.3.0
  'ecard_recipient' => 'Příjemce', //cpg1.3.0
  'ecard_date' => 'Datum', //cpg1.3.0
  'ecard_display' => 'Zobrazit ecard', //cpg1.3.0
  'ecard_name' => 'Jméno', //cpg1.3.0
  'ecard_email' => 'Email', //cpg1.3.0
  'ecard_ip' => 'IP #', //cpg1.3.0
  'ecard_ascending' => 'vzestupně', //cpg1.3.0
  'ecard_descending' =>'sestupně', //cpg1.3.0
  'ecard_sorted' => 'Setříděné', //cpg1.3.0
  'ecard_by_date' => 'podle data', //cpg1.3.0
  'ecard_by_sender_name' => 'podle jména odesílatele', //cpg1.3.0
  'ecard_by_sender_email' => 'podle emailu odesílatele', //cpg1.3.0
  'ecard_by_sender_ip' => 'podle IP addressy odesílatele', //cpg1.3.0
  'ecard_by_recipient_name' => 'podle jména příjemce', //cpg1.3.0
  'ecard_by_recipient_email' => 'podle emailu příjemce', //cpg1.3.0
  'ecard_number' => 'zobrazení záznamu %s až %s z %s', //cpg1.3.0
  'ecard_goto_page' => 'přechod na stranu', //cpg1.3.0
  'ecard_records_per_page' => 'Záznamu na jedné stránce', //cpg1.3.0
  'check_all' => 'Zatrhnout vše', //cpg1.3.0
  'uncheck_all' => 'Odznačit vše', //cpg1.3.0
  'ecards_delete_selected' => 'Smazat vybrané ecards', //cpg1.3.0
  'ecards_delete_confirm' => 'Jste si jist, že chcete smazat záznamy? Nastavte checkbox!', //cpg1.3.0
  'ecards_delete_sure' => 'Jsem si jist.', //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //
if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
    'empty_name_or_com' => 'Vložte jméno a Váš komentář',
    'com_added' => 'Váš komentář byl přidán',
    'alb_need_title' => 'Prosím, dejte albu nadpis !',
    'no_udp_needed' => 'Aktualizace není třeba.',
    'alb_updated' => 'Album bylo přidáno',
    'unknown_album' => 'Vybrané album neexistuje nebo nemáte práva pro upload do tohoto alba',
    'no_pic_uploaded' => 'Obrázek nebyl uploadován!<br /><br />zkontrolujte zda server podporuje upload souborů, či zda jste opravdu zadal(a) obrázek k uploadu...',
    'err_mkdir' => '  ERROR: Chyba při vytváření adresáře (nebyl vytvořen) %s !',
    'dest_dir_ro' => 'Do cílového adresáře %s nemůže skript zapisovat (zkontrolujte práva) !',
    'err_move' => 'Nelze přesunout %s do %s !',
    'err_fsize_too_large' => 'Rozměry obrázku, který se snažíte uploadovat, jsou příliš velké (max. velikost je %s x %s) !',
    'err_imgsize_too_large' => 'Velikost souboru, který se snažíte uploadovat, je příliš velká (max. velikost je %s KB) !',
    'err_invalid_img' => 'Soubor který jste nahrál(a) na server není validním obrázkem !',
    'allowed_img_types' => 'Můžete uploadovat pouze obrázky %s .',
    'err_insert_pic' => 'Obrázek \'%s\' nelze vložit do alba ',
    'upload_success' => 'Váš obrázek byl nahrán na server bez problémů<br /><br />Bude viditelný po schválení adminem.',
    'notify_admin_email_subject' => '%s - upozornění na Upload', //cpg1.3.0
    'notify_admin_email_body' => '%s nahrál do alba obrázek, který vyžaduje vaše potvrzení. Navštivte prosím %s', //cpg1.3.0
    'info' => 'Informace',
    'com_added' => 'Komentářu přidáno',
    'alb_updated' => 'Album aktualizováno',
    'err_comment_empty' => 'Váš komentář je prázdný !',
    'err_invalid_fext' => 'Pouze soubory s následujícími koncovkami jsou podporované : <br /><br />%s.',
    'no_flood' => 'Jste autor posledního komentáře k tomuto obrázku<br /><br />Pokud ho chcete změnit použijte volbu upravit ',
    'redirect_msg' => 'Právě jste přesměrováván(a).<br /><br /><br />Klikněte na \'POKRAČOVAT\' pokud se stránka nepřesměruje sama',
    'upl_success' => 'Váš obrázek byl v pořádku přidán',
    'email_comment_subject' => 'Komentář byl přidán do Coppermine Photo Gallery', //cpg1.3.0
    'email_comment_body' => 'Někdo přidal komentář do vaší galerie. Prohlédněte si ho na', //cpg1.3.0
  'album_not_selected' => 'Album není vybráno', //cpg1.4
  'com_author_error' => 'Registrovaný uživatel již toto jméno používá. Zkuste vybrat jiné.', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
    'caption' => 'Legenda(popisek)',
    'fs_pic' => 'původní velikost obrázku',
    'del_success' => 'bezchybně smazáno',
    'ns_pic' => 'normální velikost obrázku',
    'err_del' => 'nelze smazat',
    'thumb_pic' => 'náhled',
    'comment' => 'komentář',
    'im_in_alb' => 'patří do alba',
    'alb_del_success' => 'Album \'%s\' smazáno',
    'alb_mgr' => 'Správce alb',
    'err_invalid_data' => 'Obdržena chybná data \'%s\'',
    'create_alb' => 'Vytvářím album \'%s\'',
    'update_alb' => 'Aktualizuji album \'%s\' s nadpisem \'%s\' a seznamem \'%s\'',
    'del_pic' => 'Smazat obrázek',
    'del_alb' => 'Smazat album',
    'del_user' => 'Smazat uživatele',
    'err_unknown_user' => 'Vybraný uživatel neexistuje !',
    'comment_deleted' => 'Komentář bezchybně smazán ! ',
  'npic' => 'Obrázek', //cpg1.4
  'pic_mgr' => 'Manažer obrázků', //cpg1.4
  'update_pic' => 'Obnova obrázku \'%s\' se jménem \'%s\' a indexem \'%s\'', //cpg1.4
  'username' => 'Uživatelské jméno', //cpg1.4
  'anonymized_comments' => '%s komentář(ů) anonimizováno', //cpg1.4
  'anonymized_uploads' => '%s veřejných upload(ů) anonymizováno', //cpg1.4
  'deleted_comments' => '%s komentář(ů) smazáno', //cpg1.4
  'deleted_uploads' => '%s veřejných upload(ů) smazáno', //cpg1.4
  'user_deleted' => 'uživatel %s smazán', //cpg1.4
  'activate_user' => 'Aktivní uživatel', //cpg1.4
  'user_already_active' => 'Konto je momentálně aktivní', //cpg1.4
  'activated' => 'Aktivován', //cpg1.4
  'deactivate_user' => 'Deaktivovat uživatele', //cpg1.4
  'user_already_inactive' => 'Konto je momentálně neaktivní', //cpg1.4
  'deactivated' => 'Deaktivovaný', //cpg1.4
  'reset_password' => 'Reset hesla', //cpg1.4
  'password_reset' => 'Heslo bylo resetováno %s', //cpg1.4
  'change_group' => 'Změň primární skupinu', //cpg1.4
  'change_group_to_group' => 'Změnit z %s na %s', //cpg1.4
  'add_group' => 'Přidej sekundární skupinu', //cpg1.4
  'add_group_to_group' => 'Přidat uživatele %s do skupiny %s. Nyní je členem %s jako primární a %s jako sekundární skupiny.', //cpg1.4
  'status' => 'Status', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File displayecard.php
// ------------------------------------------------------------------------- //

if (defined('DISPLAYECARD_PHP')) {

$lang_displayecard_php = array(
  'invalid_data' => 'Data pro ecard, na kterou se snažíte přistoupit jsou poškozené vaším mailovým klientem. Ujistěte se, že link je komplení a nepoškozený.', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File displayimage.php
// ------------------------------------------------------------------------- //

if (defined('DISPLAYIMAGE_PHP')){

$lang_display_image_php = array(
    'confirm_del' => 'Jste si jist, že chcete smazat tento obrázek ? \\nPřiložené komentáře budou straceny.',
      'del_pic' => 'SMAZAT TENTO OBRÁZEK',
    'size' => '%s x %s pixelelů',
    'views' => '%s krát',
    'slideshow' => 'Slideshow',
    'stop_slideshow' => 'ZASTAVIT SLIDESHOW',
    'view_fs' => 'Klikněte pro zobrazení původního obrázku',
  'edit_pic' => 'Editace souborových informací', //cpg1.4
  'crop_pic' => 'Zastřihnout a Rotovat',
  'set_player' => 'Změna přehrávače',
);

$lang_picinfo = array(
    'title' =>'Informace o obrázku',
    'Filename' => 'Jméno souboru',
    'Album name' => 'Jméno alba',
    'Rating' => 'Hodnocení (%s hlas(ů))',
    'Keywords' => 'Klíčová slova',
    'File Size' => 'Velikost souboru',
  'Date Added' => 'Přidáno kdy', //cpg1.4
    'Dimensions' => 'Rozměry',
   'Displayed' => 'Zobrazeno',
  'URL' => 'URL', //cpg1.4
  'Make' => 'Vytvořeno', //cpg1.4
  'Model' => 'Model', //cpg1.4
  'DateTime' => 'Datum a čas', //cpg1.4
  'ISOSpeedRatings'=>'ISO', //cpg1.4
  'MaxApertureValue' => 'Max Aperture', //cpg1.4
  'FocalLength' => 'Focal length', //cpg1.4
  'Comment' => 'Komentář',
  'addFav'=>'Přidat do oblíbených',
  'addFavPhrase'=>'Oblíbené',
  'remFav'=>'Vyjmout z oblíbených',
  'iptcTitle'=>'IPTC Title',
  'iptcCopyright'=>'IPTC Copyright',
  'iptcKeywords'=>'IPTC Klíčové slova',
  'iptcCategory'=>'IPTC Kategorie',
  'iptcSubCategories'=>'IPTC Podkategorie',
  'ColorSpace' => 'Barevná hloubka', //cpg1.4
  'ExposureProgram' => 'Expoziční program', //cpg1.4
  'Flash' => 'Flash', //cpg1.4
  'MeteringMode' => 'Metering Mode', //cpg1.4
  'ExposureTime' => 'Expoziční čas Time', //cpg1.4
  'ExposureBiasValue' => 'Exposure Bias', //cpg1.4
  'ImageDescription' => 'Popiska obrázku', //cpg1.4
  'Orientation' => 'Orientace', //cpg1.4
  'xResolution' => 'X Rozlišení', //cpg1.4
  'yResolution' => 'Y Rozlišení', //cpg1.4
  'ResolutionUnit' => 'Jednotka rozlišení', //cpg1.4
  'Software' => 'Software', //cpg1.4
  'YCbCrPositioning' => 'YCbCrPositioning', //cpg1.4
  'ExifOffset' => 'Exif Offset', //cpg1.4
  'IFD1Offset' => 'IFD1 Offset', //cpg1.4
  'FNumber' => 'FNumber', //cpg1.4
  'ExifVersion' => 'Exif Version', //cpg1.4
  'DateTimeOriginal' => 'Datum a čas Originalu', //cpg1.4
  'DateTimedigitized' => 'Datum a čas digitalizace', //cpg1.4
  'ComponentsConfiguration' => 'Konfigurace komponent', //cpg1.4
  'CompressedBitsPerPixel' => 'Komprese Bity na Pixel', //cpg1.4
  'LightSource' => 'Osvětlení', //cpg1.4
  'ISOSetting' => 'ISO Nastavení', //cpg1.4
  'ColorMode' => 'Berevný mód', //cpg1.4
  'Quality' => 'Kvalita', //cpg1.4
  'ImageSharpening' => 'Ostření', //cpg1.4
  'FocusMode' => 'Zaostřovací mód', //cpg1.4
  'FlashSetting' => 'Nastavení blesku', //cpg1.4
  'ISOSelection' => 'ISO Výběr', //cpg1.4
  'ImageAdjustment' => 'úprava obrázku', //cpg1.4
  'Adapter' => 'Adapter', //cpg1.4
  'ManualFocusDistance' => 'Vzdálenost manuálního zaostření', //cpg1.4
  'DigitalZoom' => 'Digitalní Zoom', //cpg1.4
  'AFFocusPosition' => 'AF Focus Position', //cpg1.4
  'Saturation' => 'Saturace', //cpg1.4
  'NoiseReduction' => 'Noise Reduction', //cpg1.4
  'FlashPixVersion' => 'Flash Pix Version', //cpg1.4
  'ExifImageWidth' => 'Exif Image Width', //cpg1.4
  'ExifImageHeight' => 'Exif Image Height', //cpg1.4
  'ExifInteroperabilityOffset' => 'Exif Interoperability Offset', //cpg1.4
  'FileSource' => 'Zdroj', //cpg1.4
  'SceneType' => 'Typ scény', //cpg1.4
  'CustomerRender' => 'Customer Render', //cpg1.4
  'ExposureMode' => 'Expoziční mód', //cpg1.4
  'WhiteBalance' => 'Nastavení bílé', //cpg1.4
  'DigitalZoomRatio' => 'Digital Zoom Ratio', //cpg1.4
  'SceneCaptureMode' => 'Scene Capture Mode', //cpg1.4
  'GainControl' => 'Gain Control', //cpg1.4
  'Contrast' => 'Kontrast', //cpg1.4
  'Sharpness' => 'Ostření', //cpg1.4
  'ManageExifDisplay' => 'Upravit Exif zobrazení', //cpg1.4
  'submit' => 'Odeslat', //cpg1.4
  'success' => 'Informace byly úspěšně aktualizovány.', //cpg1.4
  'details' => 'Detaily', //cpg1.4
);

$lang_display_comments = array(
    'OK' => 'OK',
    'edit_title' => 'Upravit tento komentář',
    'confirm_delete' => 'Jste si jist(a), že chcete smazat tento komentář ?',
    'add_your_comment' => 'Přidat komentář',
    'name'=>'Jméno',
    'comment'=>'Komentář',
    'your_name' => 'Anonym',
  'report_comment_title' => 'Pošli tento komentář administrátorovi.', //cpg1.4
);

$lang_fullsize_popup = array(
  'click_to_close' => 'Klikni na obrázek pro zavření okna',
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
    'title' => 'Poslat pohlednici',
    'invalid_email' => '<b>Varování</b> : neplatná emailová adresa !',
    'ecard_title' => 'Pohlednice ze serveru %s pro vás/tebe',
    'error_not_image' => 'Pouze obrázky mohou být poslány jako ecard.', //cpg1.3.0
    'view_ecard' => 'Pokud se pohlednice nezobrazila klikni na link',
  'view_ecard_plaintext' => 'To view the ecard, copy and paste this url into your browser\'s address bar:', //cpg1.4
    'view_more_pics' => 'Klikni pro další obrázky !',
    'send_success' => 'Vaše pohlednice byla odeslána',
    'send_failed' => 'Omlouváme se, ale server nebyl schopen odeslat Vaší pohlednici zkuste
     to znovu za chvíli...',
    'from' => 'Od',
    'your_name' => 'Vaše jméno',
    'your_email' => 'Váš email',
    'to' => 'Komu',
    'rcpt_name' => 'Jméno příjemce',
    'rcpt_email' => 'Doručit na email',
    'greetings' => 'Pozdrav/oslovení',
    'message' => 'Zpráva',
  'ecards_footer' => 'Odesláno od %s z IP %s v %s (čas alba)', //cpg1.4
  'preview' => 'Náhled ecard', //cpg1.4
  'preview_button' => 'Náhled', //cpg1.4
  'submit_button' => 'Poslat ecard', //cpg1.4
  'preview_view_ecard' => 'Toto je alternativní link pro ecard. Nefunguje jako náhled.', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File report_file.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('REPORT_FILE_PHP') || defined('DISPLAYREPORT_PHP')) $lang_report_php =array(
  'title' => 'Report administrátorovi', //cpg1.4
  'invalid_email' => '<b>Pozor</b> : vadný email !', //cpg1.4
  'report_subject' => 'Výstraha z %s v albu %s', //cpg1.4
  'view_report' => 'Alternativní link jestliže není report korektně zobrazen', //cpg1.4
  'view_report_plaintext' => 'Pro zobrazení reportu zkopírujte link do prohlížeče.', //cpg1.4
  'view_more_pics' => 'Album', //cpg1.4
  'send_success' => 'Váš report byl zaslán.', //cpg1.4
  'send_failed' => 'Promiňte, ale server nemůže odeslat váš report...', //cpg1.4
  'from' => 'Od', //cpg1.4
  'your_name' => 'Vaše jméno', //cpg1.4
  'your_email' => 'Vaše emailová adresa', //cpg1.4
  'to' => 'Komu', //cpg1.4
  'administrator' => 'Administrator/Mód', //cpg1.4
  'subject' => 'Subject', //cpg1.4
  'comment_field_name' => 'Report odeslán "%s"', //cpg1.4
  'reason' => 'Důvod', //cpg1.4
  'message' => 'Zpráva', //cpg1.4
  'report_footer' => 'Odeslán %s z IP %s v %s (čas album)', //cpg1.4
  'obscene' => 'obscéní', //cpg1.4
  'offensive' => 'brutální', //cpg1.4
  'misplaced' => 'staré/nepatří sem', //cpg1.4
  'missing' => 'chybí', //cpg1.4
  'issue' => 'error/nelze prohlížet', //cpg1.4
  'other' => 'ostatní', //cpg1.4
  'refers_to' => 'Soubor report pro', //cpg1.4
  'reasons_list_heading' => 'důvod(y) pro report:', //cpg1.4
  'no_reason_given' => 'nebyl uveden důvod', //cpg1.4
  'go_comment' => 'Jdi na komentář', //cpg1.4
  'view_comment' => 'Zobraz plný report s komentářem', //cpg1.4
  'type_file' => 'soubor', //cpg1.4
  'type_comment' => 'komentář', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
    'pic_info' => 'Info&nbsp;o obrázku',
    'album' => 'Album',
    'title' => 'Nadpis',
  'filename' => 'Jméno souboru', //cpg1.4
    'desc' => 'Popis',
    'keywords' => 'Klíčová slova',
  'new_keyword' => 'Nová klíčová slova', //cpg1.4
  'new_keywords' => 'Nové klíčové slovo nalezeno', //cpg1.4
  'existing_keyword' => 'Existující klíčové slovo', //cpg1.4
    'pic_info_str' => '%sx%s - %sKB - %s zobrazení - %s hlas(ů)',
    'approve' => 'Schválit obrázek',
    'postpone_app' => 'Odložit schválení',
    'del_pic' => 'Smazat obrázek',
  'del_all' => 'Odstranit všechny soubory', //cpg1.4
    'read_exif' => 'Načíst znovu EXIF info', //cpg1.3.0
    'reset_view_count' => 'Vynulovat počítadlo zobrazení',
  'reset_all_view_count' => 'Resetovat všechny počítadla zobrazení', //cpg1.4
    'reset_votes' => 'Vynulovat hlasy',
  'reset_all_votes' => 'Resetovat všechny volby', //cpg1.4
    'del_comm' => 'Smazat komentáře',
  'del_all_comm' => 'Vypazat všechny komentáře', //cpg1.4
    'upl_approval' => 'Potvrzení uploadu',
    'edit_pics' => 'Upravit obrázky',
    'see_next' => 'Zobrazit další obrázky',
    'see_prev' => 'Zobrazit předchozí obrázky',
    'n_pic' => '%s obrázků',
    'n_of_pic_to_disp' => 'Počet obrázků k zobrazení',
    'apply' => 'Uložit změny',
    'crop_title' => 'Coppermine Editor Obrázků', //cpg1.3.0
         'preview' => 'Náhled', //cpg1.3.0
    'save' => 'Ulož obrázek', //cpg1.3.0
    'save_thumb' =>'Ulož jako náhled', //cpg1.3.0
    'sel_on_img' =>'Výběr není celý v obrázeku!', //js-alert //cpg1.3.0
  'album_properties' =>'Vlastnosti alba', //cpg1.4
  'parent_category' =>'Nadřízená kategorie', //cpg1.4
  'thumbnail_view' =>'Náhled', //cpg1.4
  'select_unselect' =>'označ/odoznač vše', //cpg1.4
  'file_exists' => "Cílový soubor '%s' již existuje.", //cpg1.4
  'rename_failed' => "Chyba při přejmenovávání '%s' to '%s'.", //cpg1.4
  'src_file_missing' => "Zdrojový soubor '%s' chybí.", // cpg 1.4
  'mime_conv' => "Nemohu konvertovat soubor '%s' do '%s'",//cpg1.4
  'forb_ext' => 'Zakázaná souborová přípona.',//cpg1.4
);

// ------------------------------------------------------------------------- //
// File faq.php
// ------------------------------------------------------------------------- //

if (defined('FAQ_PHP')) $lang_faq_php = array(
  'faq' => 'Frequently Asked Questions',
  'toc' => 'Tabulka s nápovědou',
  'question' => 'Otázka: ',
  'answer' => 'Odpověď: ',
);

if (defined('FAQ_PHP')) $lang_faq_data = array(
  'General FAQ - only english',
  array('Why do I need to register?', 'Registration may or may not be required by the administrator. Registration gives a member additional features such as uploading, having a favorite list, rating pictures and posting comments etc.', 'allow_user_registration', '1'),
  array('How do I register?', 'Go to &quot;Register&quot; and fill out the required fields (and the optional ones if you want to).<br />If the Administrator has Email Activation enabled, then after submitting your information you should recieve an email message at the address that you have submitted while registering, giving you instructions on how to activate your membership. Your membership must be activated in order for you to login.', 'allow_user_registration', '1'), //cpg1.4
  array('How Do I login?', 'Go to &quot;Login&quot;, submit your username and password and check &quot;Remember Me&quot; so you will be logged in on the site if you should leave it.<br /><b>IMPORTANT:Cookies must be enabled and the cookie from this site must not be deleted in order to use &quot;Remember Me&quot;.</b>', 'offline', 0),
  array('Why can I not login?', 'Did you register and click the link that was sent to you via email?. The link will activate your account. For other login problems contact the site administrator.', 'offline', 0),
  array('What if I forgot my password?', 'If this site has a &quot;Forgot password&quot; link then use it. Other than that contact the site administrator for a new password.', 'offline', 0),
  //array('What if I changed my email address?', 'Just simply login and change your email address through &quot;Profile&quot;', 'offline', 0),
  array('How do I save a picture to &quot;My Favorites&quot;?', 'Click on a picture and click on the &quot;picture info&quot; link (<img src="images/info.gif" width="16" height="16" border="0" alt="Picture information" />); scroll down to the picture information set and click &quot;Add to fav&quot;.<br />The administrator may have the &quot;picture information&quot; on by default.<br />IMPORTANT:Cookies must be enabled and the cookie from this site must not be deleted.', 'offline', 0),
  array('How do I rate a file?', 'Click on a thumbnail and go to the bottom and choose a rating.', 'offline', 0),
  array('How do I post a comment for a picture?', 'Click on a thumbnail and go to the bottom and post a comment.', 'offline', 0),
  array('How do I upload a file?', 'Go to &quot;Upload&quot;and select the album that you want to upload to. Click &quot;Browse,&quot; find the file to upload, and click &quot;open.&quot; Add a title and description if you want. Click &quot;Submit&quot;.<br /><br />Alternatively, for those users using <b>Windows XP</b>, you can upload multiple files directly to your own private albums using the XP Publishing wizard.<br />For instructions on how, and to get the required registry file, click <a href="xp_publish.php">here.</a>', 'allow_private_albums', 1), //cpg1.4
  array('Where do I upload a picture to?', 'You will be able to upload a file to one of your albums in &quot;My Gallery&quot;. The Administrator may also allow you to upload a file to one or more of the albums in the Main Gallery.', 'allow_private_albums', 0),
  array('What type and size of a file can I upload?', 'The size and type (jpg, png, etc.) is up to the administrator.', 'offline', 0),
  array('How do I create, rename or delete an album in &quot;My Gallery&quot;?', 'You should already be in &quot;Admin-Mode&quot;<br />Go to &quot;Create/Order My Albums&quot;and click &quot;New&quot;. Change &quot;New Album&quot; to your desired name.<br />You can also rename any of the albums in your gallery.<br />Click &quot;Apply Modifications&quot;.', 'allow_private_albums', 0),
  array('How can I modify and restrict users from viewing my albums?', 'You should already be in &quot;Admin Mode&quot;<br />Go to &quot;Modify My Albums. On the &quot;Update Album&quot; bar, select the album that you want to modify.<br />Here, you can change the name, description, thumbnail picture, restrict viewing and comment/rating permissions.<br />Click &quot;Update Album&quot;.', 'allow_private_albums', 0),
  array('How can I view other users\' galleries?', 'Go to &quot;Album List&quot; and select &quot;User Galleries&quot;.', 'allow_private_albums', 0),
  array('What are cookies?', 'Cookies are a plain text piece of data that is sent from a website and is put on to your computer.<br />Cookies usually allow a user to leave and return to the site without having to login again and other various chores.', 'offline', 0),
  array('Where can I get this program for my site?', 'Coppermine is a free Multimedia Gallery, released under GNU GPL. It is full of features and has been ported to various platforms. Visit the <a href="http://coppermine-gallery.net/">Coppermine Home Page</a> to find out more or download it.', 'offline', 0),

  'Navigating the Site - Only english',
  array('What\'s &quot;Album List&quot;?', 'This will show you the entire category you are currently in, with a link to each album. If you are not in a category, it will show you the entire gallery with a link to each category. Thumbnails may be a link to the category.', 'offline', 0),
  array('What\'s &quot;My Gallery&quot;?', 'This feature lets users create their own galleries and add, delete or modify albums as well as upload to them.', 'allow_private_albums', 1), //cpg1.4
  array('What\'s the difference between &quot;Admin Mode&quot; and &quot;User Mode&quot;?', 'This feature, when in admin-mode, allows a user to modify their gallery (as well as others if allowed by the administrator).', 'allow_private_albums', 0),
  array('What\'s &quot;Upload Picture&quot;?', 'This feature allows a user to upload a file (size and type is set by the site administrator) to a gallery selected by either you or the administrator.', 'allow_private_albums', 0),
  array('What\'s &quot;Last Uploads&quot;?', 'This feature shows the last uploads to the site.', 'offline', 0),
  array('What\'s &quot;Last Comments&quot;?', 'This feature shows the last comments along with the files posted by users.', 'offline', 0),
  array('What\'s &quot;Most Viewed&quot;?', 'This feature shows the most viewed files by all users (whether logged in or not).', 'offline', 0),
  array('What\'s &quot;Top Rated&quot;?', 'This feature shows the top rated files rated by the users, showing the average rating (e.g: five users each gave a <img src="images/rating3.gif" width="65" height="14" border="0" alt="" />: the file would have an average rating of <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> ;Five users rated the file from 1 to 5 (1,2,3,4,5) would result in an average <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> .)<br />The ratings go from <img src="images/rating5.gif" width="65" height="14" border="0" alt="best" /> (best) to <img src="images/rating0.gif" width="65" height="14" border="0" alt="worst" /> (worst).', 'offline', 0),
  array('What\'s &quot;My Favorites&quot;?', 'This feature will let a user store a favorite file in the cookie that was sent to your computer.', 'offline', 0),
);


// ------------------------------------------------------------------------- //
// File forgot_passwd.php
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) $lang_forgot_passwd_php = array(
  'forgot_passwd' => 'Připomenutí hesla', //cpg1.3.0
  'err_already_logged_in' => 'Už jste přihlášen(a)!', //cpg1.3.0
  'enter_username_email' => 'Zadejte vaše přihlašovací jméno a email adresu', //cpg1.3.0
  'submit' => 'Proveď', //cpg1.3.0
  'illegal_session' => 'Připomenutí hesla se nezdařilo nebo expirovalo.', //cpg1.4
  'failed_sending_email' => 'Email s připomenutím hesla nemohl být odeslán!', //cpg1.3.0
  'email_sent' => 'Na adresu %s byl odeslán dopis z vaším uživatelským jménem a heslem', //cpg1.3.0
  'verify_email_sent' => 'An email has been sent to %s. Please check your email to complete the process.', //cpg1.4
  'err_unk_user' => 'Zadaný uživatel neexistuje!', //cpg1.3.0
  'passwd_reminder_subject' => '%s - Připomenuti hesla', //cpg1.3.0
  'passwd_reminder_body' => 'Požádali jste o připomenutí vašich přihlašovacích údajů:
Klikněte na následující link:

%s', //cpg1.4
  'passwd_reset_subject' => '%s - Vaše nové heslo', //cpg1.4
  'passwd_reset_body' => 'Zde je nové heslo, které požadujete:
Uživatelské jméno: %s
Heslo:             %s
Klikněte na %s pro přihlášení.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
    'group_name' => 'Jméno skupiny',
  'permissions' => 'Oprávnění', //cpg1.4
  'public_albums' => 'Upload veřejného alba', //cpg1.4
  'personal_gallery' => 'Osobní galerie', //cpg1.4
  'upload_method' => 'Upload methoda', //cpg1.4
    'disk_quota' => 'Disková kvóta',
  'rating' => 'Rating', //cpg1.4
  'ecards' => 'Ecards', //cpg1.4
  'comments' => 'Komentáře', //cpg1.4
  'allowed' => 'Povolení', //cpg1.4
  'approval' => 'Schválení', //cpg1.4
  'boxes_number' => 'Počet. boxů', //cpg1.4
  'variable' => 'proměnná', //cpg1.4
  'fixed' => 'fixní', //cpg1.4
    'apply' => 'Uložit změny',
    'create_new_group' => 'Vytvořit novou skupinu',
    'del_groups' => 'Smazat vybrané skupiny',
    'confirm_del' => 'Pokud smažete tuto skupinu všichni uživatelé, patřící do této skupiny budou přesunuti do skupiny \'Registered\' !\n\nPřejete si pokračovat ?',
    'title' => 'Spravovat uživatelské skupiny',
  'num_file_upload' => 'Boxy pro upload soubory', //cpg1.4
  'num_URI_upload' => 'Boxy pro upload URI', //cpg1.4
  'reset_to_default' => 'Resetovat na přednastavené jméno (%s) - doporučeno!', //cpg1.4
  'error_group_empty' => 'Tabulka skupinu byla prázdná !<br /><br />Přednastavené skupiny byly vytvořeny, Prosím reloadujte tuto stránku', //cpg1.4
  'explain_greyed_out_title' => 'Proč je tato řada šedivá mimo?', //cpg1.4
  'explain_guests_greyed_out_text' => 'Nemůžete změnit vlastnosti této skupiny, protože máte nastaven  &quot; Povolení neregistrovaných uživatelů. Všichni hosté %s nemusí nic dělat, ale p5enastaven9 se ned8 aplikovat.', //cpg1.4
  'explain_banned_greyed_out_text' => 'Nemůžete měnit vlastnosti skupiny %s protožee její členové nikdy nic nemohli dělat.', //cpg1.4
  'group_assigned_album' => 'Připojená alba', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
    'welcome' => 'Vítejte !'
);

$lang_album_admin_menu = array(
    'confirm_delete' => 'Jste si jist(a), že chcete smazat tuto galerii? \\nVšechny obrázky a komentáře půjdou do pekla taky. Přejete si pokračovat.',
    'delete' => 'SMAZAT',
    'modify' => 'VLASTNOSTI',
    'edit_pics' => 'UPRAVIT OBR.',
);

$lang_list_categories = array(
    'home' => 'Domů',
    'stat1' => '<b>[pictures]</b> obrázků v <b>[albums]</b> albech v <b>[cat]</b> kategoriích s <b>[comments]</b> komentáři zobrazeno <b>[views]</b> krát',
    'stat2' => '<b>[pictures]</b> obrázků v <b>[albums]</b> albech zobrazeno <b>[views]</b> krát',
    'xx_s_gallery' => 'z %s galerie',
    'stat3' => '<b>[pictures]</b> obrázků v <b>[albums]</b> albech s <b>[comments]</b> komentáři zobrazeno <b>[views]</b> krát'
);

$lang_list_users = array(
    'user_list' => 'Seznam uživatelů',
    'no_user_gal' => 'Nejsou žádné uživatelské galerie',
    'n_albums' => '%s alb',
    'n_pics' => '%s obrázků'
);

$lang_list_albums = array(
    'n_pictures' => '%s obrázků',
    'last_added' => ', poslední přidán %s',
  'n_link_pictures' => '%s připojených souborů', //cpg1.4
  'total_pictures' => '%s souborů celkem', //cpg1.4
);

}

// ------------------------------------------------------------------------- //
// File keywordmgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('KEYWORDMGR_PHP')) $lang_keywordmgr_php = array(
  'title' => 'Nastavení klíčových slov', //cpg1.4
  'edit' => 'editace', //cpg1.4
  'delete' => 'mazání', //cpg1.4
  'search' => 'hledání', //cpg1.4
  'keyword_test_search' => 'hledání pro %s v novém okně', //cpg1.4
  'keyword_del' => 'vymazat klíčové slovo %s', //cpg1.4
  'confirm_delete' => 'Je to nezbytně nutné vymazat klíčové slovo %s ze všech galerií?', //cpg1.4  // js-alert
  'change_keyword' => 'změň klíčové slovo', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
    'login' => 'Přihlášení',
    'enter_login_pswd' => 'Zadejte Vaše jméno a heslo pro přihlášení',
    'username' => 'Jméno',
    'password' => 'Heslo',
    'remember_me' => 'Pamatuj si mě',
    'welcome' => 'Vítej u nás %s ...',
    'err_login' => '*** Chyba při přihlášení skuste to znova ***',
    'err_already_logged_in' => 'Již jste přihlášen !',
    'forgot_password_link' => 'Zapomněl jsem své heslo.', //cpg1.3.0
  'cookie_warning' => 'Varování, váš browser neakceptuje skripty s cookies', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
    'logout' => 'Odhlásit',
    'bye' => 'Tak si to užij zase jinde %s , tak šup šup...',
    'err_not_loged_in' => 'Nejste přihlášen !',
);

// ------------------------------------------------------------------------- //
// File minibrowser.php  //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('MINIBROWSER_PHP')) $lang_minibrowser_php = array(
  'close' => 'zavřít', //cpg1.4
  'submit' => 'OK', //cpg1.4
  'up' => 'nahoru o jednu úroveň', //cpg1.4
  'current_path' => 'současná cesta', //cpg1.4
  'select_directory' => 'prosím vyberte adresář', //cpg1.4
  'click_to_close' => 'Klikněte na obrázek pro uzavření okna',
);

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
    'upd_alb_n' => 'Aktualizovat alba %s',
    'general_settings' => 'Základní nastavení',
    'alb_title' => 'Nadpis alba',
    'alb_cat' => 'Kategorie alba',
    'alb_desc' => 'Popis alba',
  'alb_keyword' => 'Klíčová slova alba', //cpg1.4
    'alb_thumb' => 'Náhled reprezentující album',
    'alb_perm' => 'Přístupová práva pro toto album',
    'can_view' => 'Album můžou prohlížet',
    'can_upload' => 'Návštěvníci smějí přidávat obrázky',
    'can_post_comments' => 'Povolit komentáře',
    'can_rate' => 'Návštěvníci mohou hlasovat',
    'user_gal' => 'Galerie uživatele',
    'no_cat' => '* Není kategorie *',
    'alb_empty' => 'Album je prázdné',
    'last_uploaded' => 'Nejnovější obrázek',
    'public_alb' => 'kdokoliv (veřejné album)',
    'me_only' => 'Pouze já',
    'owner_only' => 'Pouze vlastník (%s)',
    'groupp_only' => 'Členové skupiny \'%s\'',
    'err_no_alb_to_modify' => 'Galerii nelze modifikovat v databázi.',
    'update' => 'Aktualizovat galerii',
  'reset_album' => 'Reset alba', //cpg1.4
  'reset_views' => 'Reset počítadel zobrazení na &quot;0&quot; v %s', //cpg1.4
  'reset_rating' => 'Reset hodnocení pro všechny soubory v %s', //cpg1.4
  'delete_comments' => 'Vymaž všechny komentáře vytvořené %s', //cpg1.4
  'delete_files' => '%szneviditelni%s vymazané všechny soubory v %s', //cpg1.4
  'views' => 'zobrazení', //cpg1.4
  'votes' => 'volba', //cpg1.4
  'comments' => 'komentáře', //cpg1.4
  'files' => 'soubory', //cpg1.4
  'submit_reset' => 'odešli změny', //cpg1.4
  'reset_views_confirm' => 'Jsem si jist', //cpg1.4
  'notice1' => '(*) závisející na %sskupinách%s nastavení',  //cpg1.4 //(do not translate %s!)
  'alb_password' => 'Heslo alba', //cpg1.4
  'alb_password_hint' => 'Nápověda pro heslo alba', //cpg1.4
  'edit_files' =>'Editace souborů', //cpg1.4
  'parent_category' =>'Nadřízená kategorie', //cpg1.4
  'thumbnail_view' =>'Náhled', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File phpinfo.php
// ------------------------------------------------------------------------- //

if (defined('PHPINFO_PHP')) $lang_phpinfo_php = array(
  'php_info' => 'PHP info',
  'explanation' => 'Tento výstup je generován jako PHP-funkce <a href="http://www.php.net/phpinfo">phpinfo()</a>, zobrazena pomocí Coppermine. ',
  'no_link' => 'Umožnit ostatním prohlížet phpinfo může být bezpečnostní problém. Nezveřejňujte link na tuto stránku.',
);

// ------------------------------------------------------------------------- //
// File picmgr.php //cpg1.4
// ------------------------------------------------------------------------- //
if (defined('PICMGR_PHP')) $lang_picmgr_php = array(
  'pic_mgr' => 'Manažer obrázků', //cpg1.4
  'select_album' => 'Vyber album', //cpg1.4
  'delete' => 'Vymaž', //cpg1.4
  'confirm_delete1' => 'Je nezbytné vymazat tento obrázek?', //cpg1.4
  'confirm_delete2' => '\nObrázek bude nenávratně smazán.', //cpg1.4
  'apply_modifs' => 'Aplikuj změny', //cpg1.4
  'confirm_modifs' => 'Potvrď změny', //cpg1.4
  'pic_need_name' => 'Obrázek musí mít jméno!', //cpg1.4
  'no_change' => 'Neudělal jsi žádné změny !', //cpg1.4
  'no_album' => '* žádné album *', //cpg1.4
  'explanation_header' => 'Uživatelská pravidla třídění mohou být nastavena pouze pokud jsou specifikována v účtu', //cpg1.4
  'explanation1' => 'Admin nastavil "přednastavená třídící pravidla pro soubory" v konfiguraci "Pozice sestupně" nebo "Pozice vzestupně" (globální nastavení pro všechny uživatele kteří nechtějí třídit individuálně)', //cpg1.4
  'explanation2' => 'Uživatel vybral "Pozice sestupně" nebo "Pozice vzestupně" na náhledové stránce (uživatelské nastavení)', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File pluginmgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('PLUGINMGR_PHP')){

$lang_pluginmgr_php = array(
  'confirm_uninstall' => 'Chcete určitě ODINSTALOVAT tento plugin', //cpg1.4
  'confirm_delete' => 'Chcete určitě SMAZAT tento plugin', //cpg1.4
  'pmgr' => 'Manažer pluginů', //cpg1.4
  'name' => 'Jméno', //cpg1.4
  'author' => 'Author', //cpg1.4
  'desc' => 'Poznámka', //cpg1.4
  'vers' => 'v', //cpg1.4
  'i_plugins' => 'Instalované pluginy', //cpg1.4
  'n_plugins' => 'Plugin není instalován', //cpg1.4
  'none_installed' => 'Nic nebylo instalováno', //cpg1.4
  'operation' => 'Operace', //cpg1.4
  'not_plugin_package' => 'Soubor uploadovaný není plugin balík.', //cpg1.4
  'copy_error' => 'Vyskytla se chyba při kopírování balíku do složky pluginů.', //cpg1.4
  'upload' => 'Upload', //cpg1.4
  'configure_plugin' => 'Konfigurovat plugin', //cpg1.4
  'cleanup_plugin' => 'Vyčistit plugin', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
    'already_rated' => 'Tento obázek jste již hodnotil(a)',
    'rate_ok' => 'Vás hlas byl přijat. Děkujeme.',
    'forbidden' => 'Nemůžete hodnotit naše obrázky.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
Administrátoři serveru {SITE_NAME}, potažmo této galerie si vyhrazují právo zásahu do obsahu galerie např. komentáře, mazání obrázků případně úprava (pokud porušují pravidla galerie nebo dobré mravy).
Pokud budou obrázky nahrané uživetelem porušovat zákon(y) budou ihned po zjištění jejich umístění na serveru smazány. Administrátoři/provozovatelé této galerie si distancují od
případného závadného obsahu nahraného na server uživateli. Vlastníkem dat v galerii jsou jejich autoři. Administrátoři předpokládají, že na server jsou umísťovaná uživateli pouze obrázky k nímž vlastní uživatel autorská práva.
<br />
Pokud souhlasíte, že nebudete posílat jakýkoliv závadný materiál jako vulgární a obscéní obrázky/komentáře, jakýkoliv materiál vzbuzující nenávist, rasismus, nebo jiný materiál porušující zákony. Souhlasíte, že administrátoři, provozovatelé a moderátoři  {SITE_NAME}   mají právo smazat případně upravit jakýkoliv materiál kdykoliv to uznají za vhodné. Vložené informace budou uložené na serveru a v databázi a nebudou poskytnuty žádné třetí straně bez vašeho souhlasu. Administátoři/povozovatelé serveru  však nejsou ani nebudou ručit za data na serveru uložená pokud dojde k jakémukoliv útoku na sever.
<br />
<br />
Tyto stránky využívají k uložení uživatelských dat cookies. Cookies slouží pouze pro zvýšení konfortu při používání této aplikace. Emailová adresa slouží jen pro potvrzení vašich údajů a poslání hesla.<br />
<br />
Kliknutím na 'Souhlasím' souhlasíte z výše uvedenými pravidly..
EOT;

$lang_register_php = array(
    'page_title' => 'Registrace nového uživatele',
    'term_cond' => 'Podmínky a pravidla',
    'i_agree' => 'Souhlasím',
    'submit' => 'Poslat registraci',
    'err_user_exists' => 'Zadané uživatelské jméno již existuje vyberte si prosím jiné',
    'err_password_mismatch' => 'Hesla se musí schodovat pokuste je obě zadat znovu',
    'err_uname_short' => 'Minimální délka uživatelského jména je 2 znaky',
    'err_password_short' => 'Heslo musí být alespoň 2 znaky dlouhé',
    'err_uname_pass_diff' => 'Jméno a heslo se nesmí shodovat',
    'err_invalid_email' => 'Byla zadána neplatná emailová adresa',
    'err_duplicate_email' => 'Jiný uživatel se zaregistroval se zadaným emailem. Email musí být jedinečný',
    'enter_info' => 'Zadané registrační informace',
    'required_info' => 'Vyžadované informace',
    'optional_info' => 'Volitelné informace',
    'username' => 'Jméno',
    'password' => 'Heslo',
    'password_again' => 'Heslo (potvrzení)',
    'email' => 'Email',
    'location' => 'Místo (např. Brno apod.)',
    'interests' => 'Zájmy',
    'website' => 'Domácí stránka',
    'occupation' => 'Povolání',
    'error' => 'CHYBA',
    'confirm_email_subject' => '%s - Potvrzení registracce',
    'information' => 'Informace',
    'failed_sending_email' => 'Nelze odeslat potvrzení registace !',
    'thank_you' => 'Děkujeme za registraci.<br /><br />Na adresu zadanou při registraci Vám budou doručeny informace o aktivaci vašeho účtu',
    'acct_created' => 'Váš uživatelský účet byl bezchybně vytvořen. Nyní se přihlašte pomocí vašeho jména a hesla',
    'acct_active' => 'Váš účet je nyní aktivní přihlašte se pomocí vašeho jména a hesla.',
    'acct_already_act' => 'Váš účet je již aktivní !',
    'acct_act_failed' => 'Tento účet nmůže být aktivován !',
    'err_unk_user' => 'Vybraný uživatel neexistuje !',
    'x_s_profile' => '%s\' profil',
    'group' => 'Skupina',
    'reg_date' => 'Připojen',
    'disk_usage' => 'Využití disku',
    'change_pass' => 'Změnit heslo',
    'current_pass' => 'Současné heslo',
    'new_pass' => 'Nové heslo',
    'new_pass_again' => 'Nové heslo (kontola)',
    'err_curr_pass' => 'Současné heslo zadáno nesprávně',
    'apply_modif' => 'potvrdit změny',
    'change_pass' => 'Změnit heslo',
    'update_success' => 'Váš profil byl aktualizován',
    'pass_chg_success' => 'Vyše heslo bylo změněno',
    'pass_chg_error' => 'Vaše heslo nebylo změněno',
    'notify_admin_email_subject' => '%s - upozorneni na registraci', //cpg1.3.0
  'last_uploads' => 'Poslední uploadovaný soubor.<br />Klikni pro náhled všech uploadů', //cpg1.4
  'last_comments' => 'Poslední komentář.<br />Klikni pro náhled všech vytvořených komentářů', //cpg1.4
    'notify_admin_email_body' => 'Nový uživatel se jménem "%s" se registroval ve vaší galerii', //cpg1.3.0
  'pic_count' => 'Soubory uploadovány', //cpg1.4
  'notify_admin_request_email_subject' => '%s - Potřebná registrace', //cpg1.4
  'thank_you_admin_activation' => 'Děkujeme.<br /><br />Vaše žádost o aktivaci konta byla zaslána administrátorovin. Bude vám zaslán mail po jejím potvrzení.', //cpg1.4
  'acct_active_admin_activation' => 'Konto je nyní aktivní a mail byl odeslán uživateli.', //cpg1.4
  'notify_user_email_subject' => '%s - Aktivační poznámka', //cpg1.4
);

$lang_register_confirm_email = <<<EOT
Děkujeme za registraci na {SITE_NAME}

Vaše jméno je : "{USER_NAME}"
Vaše heslo je: "{PASSWORD}"

Pro aktivaci vašeho účtu je přeba kliknout na odkaz níže nebo ho zkopírovat
do adresního řádku vašeho browseru a přejít na tuto stránku


{ACT_LINK}

S Pozdravem,

Správa serveru {SITE_NAME}

EOT;

$lang_register_approve_email = <<<EOT
A new user with the username "{USER_NAME}" has registered in your gallery.

In order to activate the account, you need to click on the link below or copy and paste it in your web browser.

<a href="{ACT_LINK}">{ACT_LINK}</a>

EOT;

$lang_register_activated_email = <<<EOT
Your account has been approved and activated.

You can now log in at <a href="{SITE_LINK}">{SITE_LINK}</a> using the username "{USER_NAME}"


Regards,

The management of {SITE_NAME}

EOT;
}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
    'title' => 'Kontrola komentářů',
    'no_comment' => 'Nejsou žádné komentáře ke kontrole',
    'n_comm_del' => '%s komentář(ů) smazán(o)',
    'n_comm_disp' => 'Počet komentářů k zobrazení',
    'see_prev' => 'Předchozí',
    'see_next' => 'Další',
    'del_comm' => 'Smazat vybrané komentáře',
  'user_name' => 'Jméno', //cpg1.4
  'date' => 'Datum', //cpg1.4
  'comment' => 'Komentář', //cpg1.4
  'file' => 'Soubor', //cpg1.4
  'name_a' => 'Uživatelské jméno vzestupně', //cpg1.4
  'name_d' => 'Uživatelské jméno sestupně', //cpg1.4
  'date_a' => 'Datum vzestupně', //cpg1.4
  'date_d' => 'Datum sestupně', //cpg1.4
  'comment_a' => 'Komentáře vzestupně', //cpg1.4
  'comment_d' => 'Komentáře sestupně', //cpg1.4
  'file_a' => 'Soubor vzestupně', //cpg1.4
  'file_d' => 'Soubor sestupně', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File search.php                                                           //
// ------------------------------------------------------------------------- //


if (defined('SEARCH_PHP')){

$lang_search_php = array(
  'title' => 'Hledání souboru v galerii', //cpg1.4
  'submit_search' => 'hledej', //cpg1.4
  'keyword_list_title' => 'Klíčová slovat', //cpg1.4
  'keyword_msg' => 'List neobsahuje všechny slova. Neobsahuje slova z titulků, názvů a poznámek. Zkuste full-textové vyhledávání.',  //cpg1.4
  'edit_keywords' => 'Uprav klíčová slova', //cpg1.4
  'search in' => 'Hledej v:', //cpg1.4
  'ip_address' => 'IP adresa', //cpg1.4
  'fields' => 'Hledej v', //cpg1.4
  'age' => 'Stáří', //cpg1.4
  'newer_than' => 'Dříve než', //cpg1.4
  'older_than' => 'Starší než', //cpg1.4
  'days' => 'dny', //cpg1.4
  'all_words' => 'Nalezni všechna slova (AND)', //cpg1.4
  'any_words' => 'Nalezni některá slova (OR)', //cpg1.4
);

$lang_adv_opts = array(
  'title' => 'Název', //cpg1.4
  'caption' => 'Poznámka', //cpg1.4
  'keywords' => 'Klíčová slova', //cpg1.4
  'owner_name' => 'Jméno vlastníka', //cpg1.4
  'filename' => 'Jméno souboru', //cpg1.4
);

}

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
    'page_title' => 'Najít nové obrázky',
    'select_dir' => 'Vybrat adresář',
    'select_dir_msg' => 'Tato funkce vám umožní dávkově zpracovat obrázky nahrané přes FTP.<br /><br />Vyberte adresář kde se nacházejí obrázky k spracování',
    'no_pic_to_add' => 'Nejsou zde žádné obrázky k přidání',
    'need_one_album' => 'Pořebujete mít vytvořenu alespoň jedno album',
    'warning' => 'Varování',
    'change_perm' => 'Skript nemůže zapisovat do tohoto adresáře, musíte ho nastavit na CHMOD 755 nebo 777 před přidáním obrázků !',
    'target_album' => '<b>Vložit obrázky z &quot;</b>%s<b>&quot; do </b>%s',
    'folder' => 'Složka',
    'image' => 'Obrázek',
    'album' => 'Album',
    'result' => 'Výsledek',
    'dir_ro' => 'Nezapisovatelná. ',
    'dir_cant_read' => 'Nečitelná. ',
    'insert' => 'Přidávám nové obrázky do alba',
    'list_new_pic' => 'Seznam obrázků',
    'insert_selected' => 'Vložit vybrané obrázky',
    'no_pic_found' => 'Nové obrázky nenalezeny',
    'be_patient' => 'Prosím buďte trpělivý(á), program potřebuje na zpracování obrázku nějaý ten čas.',
  'no_album' => 'žádné album nebylo vybráno',
  'result_icon' => 'klikni na detail nebo reloaduj',  //cpg1.4
    'notes' =>  '<ul>'.
                '<li><b>OK</b> : Tyto obrázky byly přidány'.
                '<li><b>DP</b> : Zdvojení!, Tento obrázek ji existuje'.
                '<li><b>PB</b> : tento obrázek nelze přidat, skontrolujte konfiguraci případně přístupová práva'.
                '<li>Když se neukáže \'označení\' OK, DP, PB klepněte na obrázek a uvidíte chybovou hlášku generovanou PHP, která Vám pomůže zjistit příčinu problému'.
                '<li>Pokud dojde k timeoutu F5 nebo reload stránky by měl pomoci'.
                '</ul>',
     'select_album' => 'Vyberte album', //cpg1.3.0
     'check_all' => 'Vybrat vše', //cpg1.3.0
     'uncheck_all' => 'Odznačit vše', //cpg1.3.0
  'no_folders' => 'Zde není žádná složka uvnitř "albums" složky.  Je nejprve potřeba ji vytvořit pro ftp downloadování a to učinit.', //cpg1.4
   'albums_no_category' => 'Album nemá kategorii', //cpg1.4 // album pulldown mod, added by frogfoot
  'personal_albums' => '* Osobní album', //cpg1.4 // album pulldown mod, added by frogfoot
  'browse_batch_add' => 'Browsable interface (doporučeno)', //cpg1.4
  'edit_pics' => 'Editovat soubory', //cpg1.4
  'edit_properties' => 'Vlastnosti alba', //cpg1.4
  'view_thumbs' => 'Náhled', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File stat_details.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('STAT_DETAILS_PHP')) $lang_stat_details_php = array(
  'show_hide' => 'ukaž/schov tento řádek', //cpg1.4
  'vote' => 'Zvol detaily', //cpg1.4
  'hits' => 'Urči detaily', //cpg1.4
  'stats' => 'Zvol statistiku', //cpg1.4
  'sdate' => 'Datum', //cpg1.4
  'rating' => 'Rating', //cpg1.4
  'search_phrase' => 'Vyhledávání', //cpg1.4
  'referer' => 'Odkaz', //cpg1.4
  'browser' => 'Prohlížeč', //cpg1.4
  'os' => 'Operační systém', //cpg1.4
  'ip' => 'IP', //cpg1.4
  'sort_by_xxx' => 'Třiď podle %s', //cpg1.4
  'ascending' => 'vzestupně', //cpg1.4
  'descending' => 'sestupně', //cpg1.4
  'internal' => 'int', //cpg1.4
  'close' => 'zavřeno', //cpg1.4
  'hide_internal_referers' => 'zkryj interní odkazy', //cpg1.4
  'date_display' => 'Zobraz datum', //cpg1.4
  'submit' => 'odešli / obnov', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File thumbnails.php
// ------------------------------------------------------------------------- //

// Void

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) $lang_upload_php = array(
    'title' => 'Upload obrázku',
    'custom_title' => 'Upravený Formulář', //cpg1.3.0
    'cust_instr_1' => 'Můžete zvolit požadovaný počet vstupních políček. Není ale možné překročit omezení počtu políček uvedená níže.', //cpg1.3.0
    'cust_instr_2' => 'Box Number Requests', //cpg1.3.0
    'cust_instr_3' => 'Políčka pro upload souborů: %s', //cpg1.3.0
    'cust_instr_4' => 'Políčka pro URI/URL upload: %s', //cpg1.3.0
    'cust_instr_5' => 'Políčka pro URI/URL upload:', //cpg1.3.0
    'cust_instr_6' => 'Políčka pro upload souborů:', //cpg1.3.0
    'cust_instr_7' => 'Prosím zadejte požadovaný počet ke každému typu vstupních políček pro upload. Potom stiskněte \'Pokračovat\'. ', //cpg1.3.0
    'reg_instr_1' => 'Neplatná akce pro vytvoření formuláře.', //cpg1.3.0
    'reg_instr_2' => 'Pomocí políček dole můžete nechat na server nahrát soubory. Velikost jednotlivých nahrávaných souborů při uploadu na server by neměla přesáhnout %s KB. Soubory ZIP nahrané pomocí sekcí \'Upload Souborů\' nebo \'URI/URL Upload\' zůstanou zkomprimované jako jeden soubor i po nahrání na server.', //cpg1.3.0
    'reg_instr_3' => 'Pokud chcete, aby soubory zabalené v archivu ZIP byly rozbaleny, musíte použít pro zadání souboru políčko v sekci \'Decompressive ZIP Upload\'.', //cpg1.3.0
    'reg_instr_4' => 'Pokud používáte sekci URI/URL upload, prosím zadávejte cestu k souboru takto: http://www.mojedomena.cz/obrazky/priklad1.jpg', //cpg1.3.0
    'reg_instr_5' => 'Po vyplnění formuláře stiskněte tlačítko \'Pokračovat\'.', //cpg1.3.0
    'reg_instr_6' => 'Upload ZIP Archivu:', //cpg1.3.0
    'reg_instr_7' => 'Upload Souborů:', //cpg1.3.0
    'reg_instr_8' => 'URI/URL Uploads:', //cpg1.3.0
    'error_report' => 'Error Report', //cpg1.3.0
    'error_instr' => 'The following uploads encountered errors:', //cpg1.3.0
    'file_name_url' => 'File Name/URL', //cpg1.3.0
    'error_message' => 'Error Message', //cpg1.3.0
    'no_post' => 'File not uploaded by POST.', //cpg1.3.0
    'forb_ext' => 'Forbidden file extension.', //cpg1.3.0
    'exc_php_ini' => 'Překročena velikost souboru povolená v php.ini.', //cpg1.3.0
    'exc_file_size' => 'Překročena velikost souboru povolená albu.', //cpg1.3.0
    'partial_upload' => 'Pouze částečný upload.', //cpg1.3.0
    'no_upload' => 'Neproběhl žádný upload souborů.', //cpg1.3.0
    'unknown_code' => 'Neznámá chyba PHP při uploadu.', //cpg1.3.0
    'no_temp_name' => 'Žádný upload - žadné dočasné jméno.', //cpg1.3.0
    'no_file_size' => 'Neobsahuje žádná data/rozbité', //cpg1.3.0
    'impossible' => 'Nebylo možné přesunout.', //cpg1.3.0
    'not_image' => 'Není obrázkem/rozité', //cpg1.3.0
    'not_GD' => 'Chybí rozšíření GD.', //cpg1.3.0
    'pixel_allowance' => 'Pixel allowance exceeded.', //cpg1.3.0 //TODO
    'incorrect_prefix' => 'Neplatný URI/URL prefix', //cpg1.3.0
    'could_not_open_URI' => 'Nebylo možné otevřít URI.', //cpg1.3.0
    'unsafe_URI' => 'Safety not verifiable.', //cpg1.3.0  //TODO
    'meta_data_failure' => 'Chyba v meta datech', //cpg1.3.0
    'http_401' => '401 Neautorizovaný přístup', //cpg1.3.0
    'http_402' => '402 Požadována platba', //cpg1.3.0
    'http_403' => '403 Zakázaný přístup', //cpg1.3.0
    'http_404' => '404 Nebylo nalezeno', //cpg1.3.0
    'http_500' => '500 Interní chyba serveru', //cpg1.3.0
    'http_503' => '503 Služba není dostupná', //cpg1.3.0
    'MIME_extraction_failure' => 'MIME nebylo rozpoznáno.', //cpg1.3.0
    'MIME_type_unknown' => 'Neznámý MIME typ', //cpg1.3.0
    'cant_create_write' => 'Nebylo možné vytvořit soubor pro zápis.', //cpg1.3.0
    'not_writable' => 'Nebylo možné zapisovat do souboru pro zápis.', //cpg1.3.0
    'cant_read_URI' => 'Nebylo možné přečíst URI/URL', //cpg1.3.0
    'cant_open_write_file' => 'Nebylo možné otevřít soubor pro URI.', //cpg1.3.0
    'cant_write_write_file' => 'Nebylo možné zapisovat do souboru pro URI.', //cpg1.3.0
    'cant_unzip' => 'Nebylo možné rozbalit ZIP archiv.', //cpg1.3.0
    'unknown' => 'Neznámá chyba', //cpg1.3.0
    'succ' => 'Uspěšný Upload', //cpg1.3.0
    'success' => '%s souborů bylo úspěšně nahráno.', //cpg1.3.0
    'add' => 'Prosím stiskněte \'Pokračovat\' pro přidání souborů do alba.', //cpg1.3.0
    'failure' => 'Chyba při Uploadu', //cpg1.3.0
    'f_info' => 'Informace o souboru', //cpg1.3.0
    'no_place' => 'Předchozí soubor není možné umístit.', //cpg1.3.0
    'yes_place' => 'Předchozí soubor byl úspěšně umístěn.', //cpg1.3.0
    'max_fsize' => 'Max. velikost souboru je %s KB',
    'album' => 'Album',
    'picture' => 'Obrázek',
    'pic_title' => 'Nadpis obrázku',
    'description' => 'Popis obrázku',
    'keywords' => 'Klíčová slova (oddělená mezerou)',
    'err_no_alb_uploadables' => 'Zde se nenalézá album, do které je povolen upload.',
    'place_instr_1' => 'Prosím umístěte teď soubory do alb. Můžete také zadat informace týkající se jednotlivých souborů.', //cpg1.3.0
    'place_instr_2' => 'Další soubory je potřeba umístit. Prosím stiskěte \'Pokračovat\'.', //cpg1.3.0
    'process_complete' => 'Uspěšně jste umístil všechny soubory.', //cpg1.3.0
   'albums_no_category' => 'Album bez kategorie', //cpg1.4. //album pulldown mod, added by frogfoot
  'personal_albums' => '* Osobní album', //cpg1.4 //album pulldown mod, added by frogfoot
  'select_album' => 'Vyber album', //cpg1.4 //album pulldown mod, added by frogfoot
  'close' => 'Zavřít', //cpg1.4
  'no_keywords' => 'Promiňte, žádná slova nebyla k dispozici!', //cpg1.4
  'regenerate_dictionary' => 'Regenerování slovníku', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
  'memberlist' => 'Seznam uživatelů', //cpg1.4
  'user_manager' => 'Manažer uživatelů', //cpg1.4
    'title' => 'Spravovat uživatele',
    'name_a' => 'Jméno vzestup.',
    'name_d' => 'Jméno sestup.',
    'group_a' => 'Skupina vzestup.',
    'group_d' => 'Skupina sestup.',
    'reg_a' => 'Datum registrace vzestup.',
    'reg_d' => 'Datum registrace sestup.',
    'pic_a' => 'Počet obrázků vzestup.',
    'pic_d' => 'Počet obrázků sestup.',
    'disku_a' => 'Využití disku vzestup.',
    'disku_d' => 'Využití disku sestup.',
    'lv_a' => 'Last visit ascending', //cpg1.3.0
    'lv_d' => 'Last visit descending', //cpg1.3.0
    'sort_by' => 'Řadit užřivatele podle',
    'err_no_users' => 'Tabulka uživatelů je prázdná!',
    'err_edit_self' => 'Zde nelze editovat vlastní profil použijte příslušnou volbu pracující s vaším profilem',
    'edit' => 'UPRAVIT',
  'with_selected' => 'Vybraná šíře:', //cpg1.4
    'delete' => 'SMAZAT',
  'delete_files_no' => 'udržuj veřejné soubory (ale anonymě)', //cpg1.4
  'delete_files_yes' => 'vymaž veřejné soubory, jak to půjde', //cpg1.4
  'delete_comments_no' => 'udržuj veřejné komentáře (ale anonymě)', //cpg1.4
  'delete_comments_yes' => 'vymaž komentáře, jak to půjde', //cpg1.4
  'activate' => 'Aktivuj', //cpg1.4
  'deactivate' => 'Deaktivuj', //cpg1.4
  'reset_password' => 'Reset hesla', //cpg1.4
  'change_primary_membergroup' => 'Změň primární skupinu', //cpg1.4
  'add_secondary_membergroup' => 'Přidej sekundární skupinu', //cpg1.4
    'name' => 'Uživ. jméno',
    'group' => 'Skupina Uživ.',
    'inactive' => 'Neaktivní',
    'operations' => 'Operace',
    'pictures' => 'Obrázky',
  'disk_space_used' => 'Místo využité', //cpg1.4
  'disk_space_quota' => 'Volná kvóta', //cpg1.4
  'registered_on' => 'Registrace', //cpg1.4
  'last_visit' => 'Poslední návštěva',
  'u_user_on_p_pages' => '%d uživatelé v %d stránce(kách)',
  'confirm_del' => 'Chcete určitě vymazat tohoto uživatele? \\nAll his files and albums will also be deleted.', //js-alert
  'mail' => 'MAIL',
  'err_unknown_user' => 'Vybraný uživatel neexistuje !',
  'modify_user' => 'Uprav uživatele',
  'notes' => 'Poznámka',
  'note_list' => '<li>Jestli nechcete měnit heslo, ponechte pole hesla prázdné.',
  'password' => 'Heslo',
  'user_active' => 'Hživatel je aktivní',
  'user_group' => 'Uživatelovy skupiny',
  'user_email' => 'Email uživatele',
  'user_web_site' => 'Uživatelova domovská stránka',
  'create_new_user' => 'Vytvořit nového uživatele',
  'user_location' => 'Uživatelova lokace',
  'user_interests' => 'Uživatelovo rozhraní',
  'user_occupation' => 'Uživatelovo bydliště',
  'user_profile1' => '$user_profile1', //cpg1.4
  'user_profile2' => '$user_profile2', //cpg1.4
  'user_profile3' => '$user_profile3', //cpg1.4
  'user_profile4' => '$user_profile4', //cpg1.4
  'user_profile5' => '$user_profile5', //cpg1.4
  'user_profile6' => '$user_profile6', //cpg1.4
  'latest_upload' => 'Poslední uploady',
  'never' => 'nikdy',
  'search' => 'Vyhedání uživatele', //cpg1.4
  'submit' => 'Odeslat', //cpg1.4
  'search_submit' => 'Go!', //cpg1.4
  'search_result' => 'Hledej výsledek pro: ', //cpg1.4
  'alert_no_selection' => 'Musíš vybrat nejprve alespoń jednoho uživatele!', //cpg1.4 //js-alert
  'password' => 'heslo', //cpg1.4
  'select_group' => 'Vyber skupinu', //cpg1.4
  'groups_alb_access' => 'Povolená alba ve skupině', //cpg1.4
  'album' => 'Album', //cpg1.4
  'category' => 'Kategorie', //cpg1.4
  'modify' => 'Změnit?', //cpg1.4
  'group_no_access' => 'Tato skupina nemá speciální přístup', //cpg1.4
  'notice' => 'Poznámka', //cpg1.4
  'group_can_access' => 'Album má pouze "%s" povolený přístup', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //

if (defined('UTIL_PHP')) {
$lang_util_desc_php = array(
'Opravit názvy ze jména', //cpg1.4
'Vymazat názvy ', //cpg1.4
'Znovy vytvořit náhledy a změnit velikost fotografií', //cpg1.4
'Vymazat originálná fotografiea zaměnit je změněnou verzí', //cpg1.4
'Vymazat originální nebo střední náhled pro uvolnění místa.', //cpg1.4
'Vymazat osiřelé komentáře', //cpg1.4
'Znovu načíst velikosti souborů a rozlišení (jestliže byli obrázky manuálně změněny)', //cpg1.4
'Resetovat počítadla zobrazení', //cpg1.4
'Zobrazit phpinfo', //cpg1.4
'Updatovat databázi', //cpg1.4
'Zobrazit log soubory', //cpg1.4
);
$lang_util_php = array(
  'title' => 'Administrátorské nástroje (změna velikosti obrázků)',
  'what_it_does' => 'Co umí?',
  'file' => 'Soubor',
  'problem' => 'Problém', //cpg1.4
  'status' => 'Status', //cpg1.4
  'title_set_to' => 'název nastavit na',
  'submit_form' => 'odeslat',
  'updated_succesfully' => 'úspěšně změněno',
  'error_create' => 'ERROR při vytváření',
  'continue' => 'Proces pro více obrázků',
  'main_success' => 'Soubor %s byl úspěšně použit jako hlavní soubor',
  'error_rename' => 'Chyba přejmenování z %s na %s',
  'error_not_found' => 'Soubor %s nebyl nalezen',
  'back' => 'návrat na hlavní',
  'thumbs_wait' => 'Update náhledu a/nebo změna velikosti obrázku, prosím počkejte...',
  'thumbs_continue_wait' => ' Pokračování update náhledu a/nebo změna velikosti obrázku, prosím počkejte...',
  'titles_wait' => 'Updatuji názvy, prosím čekejte...',
  'delete_wait' => 'Mažu názvy, prosím čekejte...',
  'replace_wait' => 'Vymazání originálních a záměna s obrázky se změněnou velikostí, prosím počkejte...',
  'instruction' => 'Rychlé instrukce',
  'instruction_action' => 'Vyber akci',
  'instruction_parameter' => 'Nastav parametry',
  'instruction_album' => 'Vyber album',
  'instruction_press' => 'Zmáčkni %s',
  'update' => 'Update náhledu a/nebo změna velikosti fotek',
  'update_what' => 'Co chcete updatovat',
  'update_thumb' => 'Pouze náhledy',
  'update_pic' => 'Pouze obrázky se změněnou velikostí',
  'update_both' => 'Obojí náhledy a obrázky se změněnou velikostí.',
  'update_number' => 'Počet změn provedených na jeden klik',
  'update_option' => '(Zkusta nastavit nižší hodnotu, jestliže se potýkáte s time-out problémy)',
  'filename_title' => 'Jméno souboru &rArr; Název',
  'filename_how' => 'Jak má být jméno souboru modifikováno',
  'filename_remove' => 'Odstraň .jpg ukončení a zaměň za _ (podtržítko) s mezerou',
  'filename_euro' => 'Změň 2003_11_23_13_20_20.jpg na 23/11/2003 13:20',
  'filename_us' => 'Změň 2003_11_23_13_20_20.jpg tna 11/23/2003 13:20',
  'filename_time' => 'Změň 2003_11_23_13_20_20.jpg na 13:20',
  'delete' => 'Vymaž název nebo obrázky originální velikosti',
  'delete_title' => 'Vymaž názvy souborů',
  'delete_title_explanation' => 'Tato volba odstraní všechny názvy souborů v galerii kterou specifikujete.', //cpg1.4
  'delete_original' => 'Odstraň obrázky s originální velikostí',
  'delete_original_explanation' => 'Tato volba odstraní všechny obrázky plné velikosti.', //cpg1.4
  'delete_intermediate' => 'Vymaž střední náhledy', //cpg1.4
  'delete_intermediate_explanation' => 'Tato volba vymaže všechny střední náhledy.<br />Použijte ji pro uvolnění místa na disku.', //cpg1.4
  'delete_replace' => 'Vymaž originální obrázky a nahraď upravenými velikostí',
  'titles_deleted' => 'Vymaž všechny názvy ze specifikovaného alba', //cpg1.4
  'deleting_intermediates' => 'Maže střední náhledy, prosí počkejte...', //cpg1.4
  'searching_orphans' => 'Hledám osiřelé komentáře, prosím počkejte...', //cpg1.4
  'select_album' => 'Vyberte album',
  'delete_orphans' => 'Vymaž komentáře ke chybějícím souborům', //cpg1.4
  'delete_orphans_explanation' => 'Tato volba identifikuje a vymaže komentáře asociované k vymazaným souborům.<br />Označ všechny alba.', //cpg1.4
  'refresh_db' => 'Obnov informace o rozlišení a velikosti souborů', //cpg1.4
  'refresh_db_explanation' => 'Tato volba znovu načte a obnoví informace o velikostech a rozlišení souborů.', //cpg1.4
  'reset_views' => 'Resetuj počítadla zobrazení', //cpg1.4
  'reset_views_explanation' => 'Nastaví ve specifikovaném albu počitadla zobrazení na nulu.', //cpg1.4
  'orphan_comment' => 'osiřelé komentáře byly nalezeny',
  'delete' => 'Vymazat',
  'delete_all' => 'Vymazat všechny',
  'delete_all_orphans' => 'Vymazat všechny osiřelé komentáře?', //cpg1.4
  'comment' => 'Komentáře: ',
  'nonexist' => 'připojeno k neexistujícímu souboru # ',
  'phpinfo' => 'Zobraz phpinfo',
  'phpinfo_explanation' => 'Zobrazí technické informace o serveru.<br /> - Můžete se zeptat providera na údaje zde zobrazené a jejich podporu.', //cpg1.4
  'update_db' => 'Updatovat databázi',
  'update_db_explanation' => 'Jestliže zaměníte coppermine soubory, přidáte a modifikujete nebo upgradujete z předešlé verze coppermine, je nezbytné provést update databáze alespoń jednou. Tato volba vytvoří nezbytné tabulky a/nebo hodnoty pro vaši coppermine databázi.',
  'view_log' => 'Zobraz log soubory', //cpg1.4
  'view_log_explanation' => 'Coppermine může sledovat různou aktivitu uživatelů. Můžete prohlížet logy jestliže to máte povoleno v <a href="admin.php">coppermine nastavení</a>.', //cpg1.4
  'versioncheck' => 'Verze', //cpg1.4
  'versioncheck_explanation' => 'Zjisti verzi souborů, jestli došlo k upgradu z nižší verze.', //cpg1.4
  'bridgemanager' => 'Propojovací Manažer', //cpg1.4
  'bridgemanager_explanation' => 'Zapni nebo vypni integraci (propojení) Coppermine s jinou aplikací (např. tvoje BBS).', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File versioncheck.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('VERSIONCHECK_PHP')) $lang_versioncheck_php = array(
  'title' => 'Versioncheck in english', //cpg1.4
  'what_it_does' => 'This page is meant for users who have updated their coppermine install. This script goes through the files on your webserver and tries to determine if your local file versions on the webserver are the same as the ones from the repository at http://coppermine.sourceforge.net, this way displaying the files you were meant to update as well.<br />It will show everything in red that needs to be fixed. Entries in yellow need looking into. Entries in green (or your default font color) are OK.<br />Click on the help icons to find out more.', //cpg1.4
  'online_repository_unable' => 'Unable to connect to online repository', //cpg1.4
  'online_repository_noconnect' => 'Coppermine was unable to connect to the online repository. This can have two reasons:', //cpg1.4
  'online_repository_reason1' => 'the coppermine online repository is currently down - check if you can browse this page: %s - if you can\'t access this page, try again later.', //cpg1.4
  'online_repository_reason2' => 'PHP on your webserver is configured with %s turned off (by default, it\'s turned on). If the server is yours to administer, turn this option on in <i>php.ini</i> (at least allow it to be overridden with %s). If you\'re webhosted, you will probably have to live with the fact that you can\'t compare your files to the online repository. This page will then only display the file versions that came with your distribution - updates will not be displayed.', //cpg1.4
  'online_repository_skipped' => 'Connection to online repository skipped', //cpg1.4
  'online_repository_to_local' => 'The script is defaulting to the local copy of the version-files now. The data may be inacurate if you have upgraded Coppermine and you haven\'t uploaded all files. Changes to the files after the release won\'t be taken into account as well.', //cpg1.4
  'local_repository_unable' => 'Unable to connect to the repository on your server', //cpg1.4
  'local_repository_explanation' => 'Coppermine was unable to connect to the repository file %s on your webserver. This probably means that you haven\'t uploaded the repository file to your webserver. Do so now and then try to run this page once more (hit refresh).<br />If the script still fails, your webhost might have disabled parts of <a href="http://www.php.net/manual/en/ref.filesystem.php">PHP\'s filesystem functions</a> completely. In this case, you simply won\'t be able to use this tool at all, sorry.', //cpg1.4
  'coppermine_version_header' => 'Installed Coppermine version', //cpg1.4
  'coppermine_version_info' => 'You have currently installed: %s', //cpg1.4
  'coppermine_version_explanation' => 'If you think this is entirely wrong and you\'re supposed to be running a higher version of Coppermine, you probably haven\'t uploaded the most recent version of the file <i>include/init.inc.php</i>', //cpg1.4
  'version_comparison' => 'Version comparison', //cpg1.4
  'folder_file' => 'folder/file', //cpg1.4
  'coppermine_version' => 'cpg version', //cpg1.4
  'file_version' => 'file version', //cpg1.4
  'webcvs' => 'web svn', //cpg1.4
  'writable' => 'writable', //cpg1.4
  'not_writable' => 'not writable', //cpg1.4
  'help' => 'Help', //cpg1.4
  'help_file_not_exist_optional1' => 'file/folder does not exist', //cpg1.4
  'help_file_not_exist_optional2' => 'The file/folder %s has not been found on your server. Although it is optional you should upload it (using your FTP client) to your webserver if you are experiencing problems.', //cpg1.4
  'help_file_not_exist_mandatory1' => 'file/folder does not exist', //cpg1.4
  'help_file_not_exist_mandatory2' => 'The file/folder %s has not been found on your server, although it is mandatory. Upload the file to your webserver (using your FTP client).', //cpg1.4
  'help_no_local_version1' => 'No local file version', //cpg1.4
  'help_no_local_version2' => 'The script was unable to extract a local file version - your file is either outdated or you have modified it, removing the header information on the way. Updating the file is recommended.', //cpg1.4
  'help_local_version_outdated1' => 'Local version outdated', //cpg1.4
  'help_local_version_outdated2' => 'Your version of this file seems to be from an older version of Coppermine (you probably upgraded). Make sure to update this file as well.', //cpg1.4
  'help_local_version_na1' => 'Unable to extract cvs version info', //cpg1.4
  'help_local_version_na2' => 'The script could not determine what cvs version the file on your webserver is. You should upload the file from your package.', //cpg1.4
  'help_local_version_dev1' => 'Development version', //cpg1.4
  'help_local_version_dev2' => 'The file on your webserver seems to be newer than your Coppermine version. You are either using a development file (you should only do so if you know what you are doing), or you have upgraded your Coppermine install and not uploaded include/init.inc.php', //cpg1.4
  'help_not_writable1' => 'Folder not writable', //cpg1.4
  'help_not_writable2' => 'Change file permissions (CHMOD) to grant the script write access to the folder %s and everything within it.', //cpg1.4
  'help_writable1' => 'Folder writable', //cpg1.4
  'help_writable2' => 'The folder %s is writable. This is an unnecessary risk, coppermine only needs read/execute access.', //cpg1.4
  'help_writable_undetermined' => 'Coppermine was not able to determine wether the folder is writable.', //cpg1.4
  'your_file' => 'your file', //cpg1.4
  'reference_file' => 'reference file', //cpg1.4
  'summary' => 'Summary', //cpg1.4
  'total' => 'Total files/folders checked', //cpg1.4
  'mandatory_files_missing' => 'Mandatory files missing', //cpg1.4
  'optional_files_missing' => 'Optional files missing', //cpg1.4
  'files_from_older_version' => 'Files left over from outdated Coppermine version', //cpg1.4
  'file_version_outdated' => 'Outdated file versions', //cpg1.4
  'error_no_data' => 'The script made a boo, it was not able to retrieve any information. Sorry for the inconvenience.', //cpg1.4
  'go_to_webcvs' => 'go to %s', //cpg1.4
  'options' => 'Options', //cpg1.4
  'show_optional_files' => 'show optional folders/files', //cpg1.4
  'show_mandatory_files' => 'show mandatory files', //cpg1.4
  'show_file_versions' => 'show file versions', //cpg1.4
  'show_errors_only' => 'show folders/files with errors only', //cpg1.4
  'show_permissions' => 'show folder permissions', //cpg1.4
  'show_condensed_output' => 'show condensed ouput (for easier screenshots)', //cpg1.4
  'coppermine_in_webroot' => 'coppermine is installed in the webroot', //cpg1.4
  'connect_online_repository' => 'try connecting to the online repository', //cpg1.4
  'show_additional_information' => 'show additional information', //cpg1.4
  'no_webcvs_link' => 'don\'t display web svn link', //cpg1.4
  'stable_webcvs_link' => 'display web svn link to stable branch', //cpg1.4
  'devel_webcvs_link' => 'display web svn link to devel branch', //cpg1.4
  'submit' => 'apply changes / refresh', //cpg1.4
  'reset_to_defaults' => 'reset to default values', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File view_log.php  //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('VIEWLOG_PHP')) $lang_viewlog_php = array(
  'delete_all' => 'Vymaž všechny logy', //cpg1.4
  'delete_this' => 'Vymaž tento log', //cpg1.4
  'view_logs' => 'Zobraz logy', //cpg1.4
  'no_logs' => 'Logy nebyly vytvořeny.', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File xp_publish.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('XP_PUBLISH_PHP')) {

$lang_xp_publish_client = <<<EOT
<h1>XP Web Publishing Wizard Client</h1><p>This module allows to use <b>Windows XP</b> web publishing wizard with Coppermine.</p><p>Code is based on article posted by
EOT;

$lang_xp_publish_required = <<<EOT
<h2>What is required</h2><ul><li>Windows XP in order to have the wizard.</li><li>A working installation of Coppermine on which <b>the web upload function works properly.</b></li></ul><h2>How to install on client side</h2><ul><li>Right click on
EOT;

$lang_xp_publish_select = <<<EOT
Select &quot;save target as..&quot;. Save the file on your hard drive. When saving the file, check that the proposed file name is <b>cpg_###.reg</b> (the ### represents a numerical timestamp). Change it to that name if necessary (leave the numbers). When downloaded, double click on the file in order to register your server with the web publishing wizard.</li></ul>
EOT;

$lang_xp_publish_testing = <<<EOT
<h2>Testing</h2><ul><li>In Windows Explorer, select some files and click on <b>Publish xxx on the web</b> in the left pane.</li><li>Confirm your file selection. Click on <b>Next</b>.</li><li>In the list of services that appear, select the one for your photo gallery (it has the name of your gallery). If the service does not appear, check that you have installed <b>cpg_pub_wizard.reg</b> as described above.</li><li>Input your login information if required.</li><li>Select the target album for your pictures or create a new one.</li><li>Click on <b>next</b>. The upload of your pictures starts.</li><li>When it is completed, check your gallery to see if pictures have been properly added.</li></ul>
EOT;

$lang_xp_publish_notes = <<<EOT
<h2>Notes :</h2><ul><li>Once the upload has started, the wizard can't display any error message returned by the script so you can't know if the upload failed or succeeded until you check your gallery.</li><li>If the upload fails, enable &quot;Debug mode&quot; on the Coppermine admin page, try with one single picture and check error messages in the
EOT;

$lang_xp_publish_flood = <<<EOT
file that is located in Coppermine directory on your server.</li><li>In order to avoid that the gallery be <i>flooded</i> by pictures uploaded through the wizard, only the <b>gallery admins</b> and <b>users that can have their own albums</b> can use this feature.</li>
EOT;



$lang_xp_publish_php = array(
  'title' => 'Coppermine - XP Web Publishing Wizard', //cpg1.4
  'welcome' => 'Vítáme Vás <b>%s</b>,', //cpg1.4
  'need_login' => 'Musíte se přihlásit k albu použitím web browserunež použijete tohoto průvodce.<p/><p>Až se přihlásíte nezapomeňte vybrat <b>pamatuj si mě</b>.', //cpg1.4
  'no_alb' => 'Promiňte, ale není žádná takové album, kam by bylo povoleno uploadovat obrázky tímto průvodcem.', //cpg1.4
  'upload' => 'Uploadování vašich obrázků do existujícího alba', //cpg1.4
  'create_new' => 'Vytvořte nové album pro vaše obrázky', //cpg1.4
  'album' => 'Album', //cpg1.4
  'category' => 'Kategorie', //cpg1.4
  'new_alb_created' => 'Vaše nové album &quot;<b>%s</b>&quot; bylo vytvořeno.', //cpg1.4
  'continue' => 'Zmáčněte &quot;Další&quot; pro začátek uploadu vašich obrázků', //cpg1.4
  'link' => 'tento link', //cpg1.4
);
}
?>