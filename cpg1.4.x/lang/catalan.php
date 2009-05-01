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
// ------------------------------------------------------------------------- //
// $Id$
// ------------------------------------------------------------------------- //

if (!defined('IN_COPPERMINE')) { die('No s\'ha pogut trobar el Coppermine ...');}

// info about translators and translated language
$lang_translation_info = array(
'lang_name_english' => 'Catalan',  
'lang_name_native' => 'català',
'lang_country_code' => 'catalonia', 
'trans_name'=> 'Toni Ginard i Mireia Salazar', //the name of the translator - can be a nickname
'trans_email' => 'toni.ginard@gmail.com', //translator's email address (optional)
'trans_website' => 'http://phobos.xtec.cat/intraweb', //translator's website (optional)
'trans_date' => '2006-11-30', //the date the translation was created / last modified
);

$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('Bytes', 'kB', 'MB');

// Day of weeks and months
$lang_day_of_week = array('Dg', 'Dl', 'Dm', 'Dx', 'Dj', 'Dv', 'Ds');
$lang_month = array('Gen', 'Feb', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dec');

// Some common strings
$lang_yes = 'Sí';
$lang_no  = 'No';
$lang_back = 'Torna enrere';
$lang_continue = 'CONTINUA';
$lang_info = 'Informació';
$lang_error = 'Error';
$lang_check_uncheck_all = 'Marca\'ls/Desmarca\'ls tots'; //cpg1.4

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$album_date_fmt =    '%d de %B de %Y';
$lastcom_date_fmt =  '%d/%m/%y a les %H:%M';
$lastup_date_fmt = '%d de %B de %Y';
$register_date_fmt = '%d de %B de %Y';
$lasthit_date_fmt = '%d de %B de %Y a les %I:%M %p';
$comment_date_fmt =  '%d de %B de %Y a les %I:%M %p';
$log_date_fmt = '%d de %B de %Y a les %I:%M %p'; //cpg1.4

// For the word censor
$lang_bad_words = array('merda', 'cony', '*puta');

$lang_meta_album_names = array(
	'random' => 'Imatges aleatòries',
	'lastup' => 'Darreres imatges',
	'lastalb'=> 'Darrers àlbums modificats',
	'lastcom' => 'Darrers comentaris',
	'topn' => 'Més vistes',
	'toprated' => 'Millor valorades',
	'lasthits' => 'Darreres vistes',
	'search' => 'Resultats de la cerca',
	'favpics'=> 'Preferits'
);

$lang_errors = array(
	'access_denied' => 'No teniu autorització per accedir a aquesta pàgina',
	'perm_denied' => 'No teniu autorització per realitzar aquesta tasca',
	'param_missing' => 'Falten paràmetres requerits',
	'non_exist_ap' => 'L\'àlbum o el fitxer seleccionats no existeixen',
	'quota_exceeded' => 'S\'ha excedit la quota de disc<br /><br />Teniu una quota de [quota]K. Els vostres fitxers actualment ocupen [space]K, i afegint aquest fitxer excediríeu la quota',
	'gd_file_type_err' => 'Quan es fa servir la llibreria d\'imatges GD només es permeten extensions JPEG i PNG',
	'invalid_image' => 'La imatge que heu afegit és corrupta i no pot ser tractada per la llibreria GD',
	'resize_failed' => 'No es pot crear la miniatura o la imatge de mida reduïda',
	'no_img_to_display' => 'No hi ha cap imatge per mostrar',
	'non_exist_cat' => 'La categoria seleccionada no existeix',
	'orphan_cat' => 'Una categoria no té pare, executeu la utilitat de categories per corregir el problema',
	'directory_ro' => 'El directori \'%s\' no té permisos d\'escriptura, els fitxers no es poden esborrar',
	'non_exist_comment' => 'El comentari seleccionat no existeix',
	'pic_in_invalid_album' => 'El fitxer està a un àlbum que no existeix (%s)',
	'banned' => 'Actualment esteu expulsat i no podeu fer ús d\'aquesta web',
	'not_with_udb' => 'Aquesta funció està desactivada al Coppermine perquè esta integrada com un programari de fòrums. L\'acció que intentàveu fer no està suportada en aquesta configuració, o bé la funció ha de ser gestionada pel programari de fòrums.',
	'offline_title' => 'Desactivada', //cpg1.3.0
	'offline_text' => 'La galeria esta temporalment desactivada, - torneu aviat!', //cpg1.3.0
	'ecards_empty' => 'Actualment no hi ha cap registre de postals per mostrar. Comproveu que heu activat: desa les postals a la configuració', //cpg1.3.0
	'action_failed' => 'L\'acció no s\'ha realitzat. El Coppermine no és capaç de processar la vostra petició', //cpg1.3.0
	'no_zip' => 'Les llibreries necessàries per processar fitxers ZIP no es troben disponibles. Contacteu amb l\'administrador/a d\'aquest àlbum', //cpg1.3.0
	'zip_type' => 'No teniu autorització per afegir fitxers ZIP', //cpg1.3.0
	'database_query' => 'S\'ha produït un error en executar la consulta', //cpg1.4
  	'non_exist_comment' => 'El comentari seleccionat no existeix', //cpg1.4
);

$lang_bbcode_help_title = 'Ajuda dels codis'; //cpg1.4
$lang_bbcode_help = 'Podeu afegir enllaços amb estils mitjançant aquestes etiquetes: <li>[b]<strong>Negreta</strong>[/b]</li> <li>[i]<em>Cursiva</em>[/i]</li> <li>[url=http://tusitio.com/]Text web[/url]</li> <li>[email]usuari@domini.com[/email]</li>'; //cpg1.3.0

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
	'home_title' => 'Aneu a la pàgina principal',
  	'home_lnk' => 'Pàgina Principal',
	'alb_list_title' => 'Aneu a la llista d\'àlbums',
	'alb_list_lnk' => 'Llista d\'àlbums',
	'my_gal_title' => 'Aneu a la galeria personal',
	'my_gal_lnk' => 'La meva galeria',
	'my_prof_title' => 'Aneu al vostre perfil', //cpg1.4
	'my_prof_lnk' => 'El meu perfil',
	'adm_mode_title' => 'Canvieu a mode administrador',
	'adm_mode_lnk' => 'Mode administrador',
	'usr_mode_title' => 'Canvieu a mode usuari',
	'usr_mode_lnk' => 'Mode usuari',
	'upload_pic_title' => 'Envia fitxers a un àlbum',
	'upload_pic_lnk' => 'Enviament de fitxers',
	'register_title' => 'Crea un compte d\'usuari',
	'register_lnk' => 'Registrar-se',
  	'login_title' => 'Entra', //cpg1.4	
	'login_lnk' => 'Entrada',
	'logout_title' => 'Surt', //cpg1.4
	'logout_lnk' => 'Sortida',
	'lastup_title' => 'Mostra els darrers fitxers carregats', //cpg1.4
	'lastup_lnk' => 'Darrers fitxers penjats',
  	'lastcom_title' => 'Mostra els darrers comentaris', //cpg1.4
	'lastcom_lnk' => 'Darrers comentaris',
  	'topn_title' => 'Mostra els més vistos', //cpg1.4
	'topn_lnk' => 'Més vistos',
  	'toprated_title' => 'Mostra els millor valorats', //cpg1.4
	'toprated_lnk' => 'Millor valorats',
  	'search_title' => 'Cerca a la galeria', //cpg1.4
	'search_lnk' => 'Cerques',
  	'fav_title' => 'Vés als meus preferits', //cpg1.4
	'fav_lnk' => 'Els meus preferits',
	'memberlist_title' => 'Mostra la llista d\'usuaris', //cpg1.3.0
	'memberlist_lnk' => 'Llista d\'usuaris', //cpg1.3.0
	'faq_title' => 'Preguntes més freqüents sobre la galeria d\'imatges Coppermine', //cpg1.3.0
	'faq_lnk' => 'PMF', //cpg1.3.0
);

$lang_gallery_admin_menu = array(
 	'upl_app_title' => 'Aprova nous fitxers', //cpg1.4
 	'upl_app_lnk' => 'Aprovació de fitxers',
	'admin_title' => 'Vés a la configuració', //cpg1.4
  	'admin_lnk' => 'Configuració', //cpg1.4
  	'albums_title' => 'Vés a la configuració d\'àlbums', //cpg1.4
	'albums_lnk' => 'Àlbums',
	'config_lnk' => 'Configuració',
  	'categories_title' => 'Vés a la configuració de categories', //cpg1.4
	'categories_lnk' => 'Categories',
  	'users_title' => 'Vés a la configuració d\'usuaris', //cpg1.4
	'users_lnk' => 'Usuaris',
  	'groups_title' => 'Vés a la configuració de grups', //cpg1.4
	'groups_lnk' => 'Grups',
  	'comments_title' => 'Revisa tots els comentaris', //cpg1.4
	'comments_lnk' => 'Revisió de comentaris',
  	'searchnew_title' => 'Afegeix fitxers de forma massiva (Batch)', //cpg1.4
	'searchnew_lnk' => 'Afegeix fitxers massivament (Batch)',
  	'util_title' => 'Vés a les eines d\'administració', //cpg1.4
	'util_lnk' => 'Eines d\'administració',
  	'key_title' => 'Vés al diccionari de paraules clau', //cpg1.4
  	'key_lnk' => 'Diccionari de paraules clau', //cpg1.4
  	'ban_title' => 'Mostra els usuaris exclosos', //cpg1.4
	'ban_lnk' => 'Exclou usuaris',
  	'db_ecard_title' => 'Revisa les postals', //cpg1.4
	'db_ecard_lnk' => 'Mostra les postals', //cpg1.3.0
  	'pictures_title' => 'Ordena les meves imatges', //cpg1.4
  	'pictures_lnk' => 'Ordena les meves imatges', //cpg1.4
  	'documentation_lnk' => 'Documentació', //cpg1.4
  	'documentation_title' => 'Manual del Coppermine', //cpg1.4
);

$lang_user_admin_menu = array(
  	'albmgr_title' => 'Crea i ordena els meus àlbums', //cpg1.4
	'albmgr_lnk' => 'Crea i ordena els meus àlbums',
  	'modifyalb_title' => 'Modifica els meus àlbums',  //cpg1.4
	'modifyalb_lnk' => 'Modifica els meus àlbums',
  	'my_prof_title' => 'Vés al meu perfil', //cpg1.4
	'my_prof_lnk' => 'El meu perfil',
);

$lang_cat_list = array(
	'category' => 'Categoria',
	'albums' => 'Àlbums',
	'pictures' => 'Fitxers',
);

$lang_album_list = array(
	'album_on_page' => '%d àlbums en %d pàgina/es'
);

$lang_thumb_view = array(
	'date' => 'DATA',
	//Sort by filename and title
	'name' => 'NOM',
	'title' => 'TÍTOL',
	'sort_da' => 'Ordenat per data ascendent',
	'sort_dd' => 'Ordenat per data descendent',
	'sort_na' => 'Ordenat per nom ascendent',
	'sort_nd' => 'Ordenat per nom descendent',
	'sort_ta' => 'Ordenat per títol ascendent',
	'sort_td' => 'Ordenat per títol descendent',
  	'position' => 'POSICIÓ', //cpg1.4
  	'sort_pa' => 'Ordenat per posició ascendent', //cpg1.4
  	'sort_pd' => 'Ordenat per posició descendent', //cpg1.4
	'download_zip' => 'Descarrega com a fitxer ZIP', //cpg1.3.0
	'pic_on_page' => '%d fitxers %d pàgina/es',
	'user_on_page' => '%d usuaris en %d página/es',
  	'enter_alb_pass' => 'Introduïu la contrasenya de l\'àlbum', //cpg1.4
  	'invalid_pass' => 'La contrasenya no és vàlida', //cpg1.4
  	'pass' => 'Contrasenya', //cpg1.4
  	'submit' => 'Tramet', //cpg1.4
);

$lang_img_nav_bar = array(
	'thumb_title' => 'Torna a la pàgina de miniatures',
	'pic_info_title' => 'Visualitza/oculta la informació del fitxer',
	'slideshow_title' => 'Presentació amb diapositives',
	'ecard_title' => 'Envia una postal amb aquesta imatge',
	'ecard_disabled' => 'Enviament de postals desactivat',
	'ecard_disabled_msg' => 'No teniu autorització per enviar postals',
	'prev_title' => 'Mostra el fitxer anterior',
	'next_title' => 'Mostra el fitxer següent',
	'pic_pos' => 'FITXER %s/%s',
  	'report_title' => 'Informa d\'aquest fitxer a l\'administrador/a', //cpg1.4
  	'go_album_end' => 'Vés al final', //cpg1.4
  	'go_album_start' => 'Torna a l\'inici', //cpg1.4
  	'go_back_x_items' => 'Vés enrere %s elements', //cpg1.4
  	'go_forward_x_items' => 'Vés endavant %s elements', //cpg1.4
);

$lang_rate_pic = array(
	'rate_this_pic' => 'Valora aquest fitxer',
	'no_votes' => '(No hi ha valoració)',
	'rating' => '(valoració actual : %s / 5 amb %s vots)',
	'rubbish' => 'Molt dolent',
	'poor' => 'Dolent',
	'fair' => 'Correcte',
	'good' => 'Bo',
	'excellent' => 'Molt bo',
	'great' => 'Excel·lent',
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
	CRITICAL_ERROR => 'Error crític',
	'file' => 'Fitxer: ',
	'line' => 'Línia: ',
);

$lang_display_thumbnails = array(
	'filename' => 'Nom del fitxer: ',
	'filesize' => 'Mida: ',
	'dimensions' => 'Dimensions: ',
	'date_added' => 'Data de publicació: ',
);

$lang_get_pic_data = array(
	'n_comments' => '%s comentaris',
	'n_views' => '%s visualitzacions',
	'n_votes' => '(%s vots)'
);

$lang_cpg_debug_output = array(
  'debug_info' => 'Informació de depuració', //cpg1.3.0
  'select_all' => 'Selecciona-ho tot', //cpg1.3.0
  'copy_and_paste_instructions' => 'Si heu demanat ajuda al fòrum del coppermine, copieu i enganxeu aquesta informació de depuració al vostre missatge. 
  									Substituïu qualsevol contrasenya de la consulta amb *** (asteriscs) abans d\'enviar-lo.', //cpg1.3.0
  'phpinfo' => 'Visualitza phpinfo', //cpg1.3.0
  'notices' => 'Alertes', //cpg1.4
);

$lang_language_selection = array(
  'reset_language' => 'Idioma per defecte', //cpg1.3.0
  'choose_language' => 'Trieu el vostre idioma', //cpg1.3.0
);

$lang_theme_selection = array(
  'reset_theme' => 'Tema per defecte', //cpg1.3.0
  'choose_theme' => 'Trieu un tema', //cpg1.3.0
);

$lang_version_alert = array(
  'version_alert' => 'Versió no implementada!', //cpg1.4
  'security_alert' => 'Alerta de seguretat!', //cpg1.4.3
  'relocate_exists' => 'Elimineu el fitxer <a href="http://coppermine-gallery.net/forum/index.php?topic=24217.0" target=_blank>relocate_server.php</a> del vostre servidor!',
  'no_stable_version' => 'Esteu utilitzant el Coppermine %s (%s) que està orientat a usuaris experimentats. Aquesta versió no té cap tipus de suport ni garantia. Pel fet d\'utilitzar-la esteu corrent un risc. Feu servir la versió estable si voleu tenir garanties de bon funcionament!', //cpg1.4
  'gallery_offline' => 'La galeria està fora de línia i només està accessible pels administradors. No us descuideu de tornar-la a posar en línia després d\'acabar les tasques de manteniment', //cpg1.4
);

$lang_create_tabs = array(
  'previous' => 'anterior', //cpg1.4
  'next' => 'següent', //cpg1.4
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
// File keyword.inc.php                                                      //
// ------------------------------------------------------------------------- //

// void

// ------------------------------------------------------------------------- //
// File include/plugin_api.inc.php
// ------------------------------------------------------------------------- //
$lang_plugin_api = array(
  'error_wakeup' => "No s'ha pogut iniciar el connector '%s'", //cpg1.4
  'error_install' => "No s'ha pogut instal·lar el connector '%s'", //cpg1.4
  'error_uninstall' => "No s'ha pogut desinstal·lar el connector '%s'", //cpg1.4
  'error_sleep' => "No s'ha pogut aturar el connector'%s'<br />", //cpg1.4
);

// ------------------------------------------------------------------------- //
// File include/smilies.inc.php
// ------------------------------------------------------------------------- //

if (defined('SMILIES_PHP')) $lang_smilies_inc_php = array(
	'Exclamation' => 'Exclamació',
	'Question' => 'Pregunta',
	'Very Happy' => 'Molt feliç',
	'Smile' => 'Somriure',
	'Sad' => 'Trist',
	'Surprised' => 'Sorprès',
	'Shocked' => 'Conmocionat',
	'Confused' => 'Confós',
	'Cool' => 'Genial',
	'Laughing' => 'Rient',
	'Mad' => 'Molest',
	'Razz' => 'Razz',
	'Embarassed' > 'Avergonyit',
	'Crying or Very sad' => 'Plorant o molt trist',
	'Evil or Very Mad' => 'Dolent o molt molest',
	'Twisted Evil' => 'Malvat',
	'Rolling Eyes' => 'Ulls girant',
	'Wink' => 'Picada d\'ull',
	'Idea' => 'Idea',
	'Arrow' => 'Fletxa',
	'Neutral' => 'Neutral',
	'Mr. Green' => 'Sr. Verd',
);

// ------------------------------------------------------------------------- //
// File addpic.php
// ------------------------------------------------------------------------- //

// void

// ------------------------------------------------------------------------- //
// File mode.php
// ------------------------------------------------------------------------- //

if (defined('MODE_PHP')) $lang_admin_php = array(
	0 => 'Sortint del mode d\'administració ...',
	1 => 'Entrant al mode d\'administració ...',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
	'alb_need_name' => 'Els àlbums han de tenir un nom!', //js-alert
	'confirm_modifs' => 'Esteu segur/a de que voleu aplicar aquestes modificacions?', //js-alert
	'no_change' => 'No s\'ha realitzat cap canvi!', //js-alert
	'new_album' => 'Nou àlbum',
	'confirm_delete1' => 'Esteu segur/a de voler esborrar aquest àlbum?', //js-alert
	'confirm_delete2' => '\nTots els fitxers i comentaris es perdran!', //js-alert
	'select_first' => 'Seleccioneu un àlbum primer',
	'alb_mrg' => 'Gestor d\'àlbums',
	'my_gallery' => '* La meva galeria *',
	'no_category' => '* Sense categoria *',
	'delete' => 'Suprimeix',
	'new' => 'Nou',
	'apply_modifs' => 'Aplica les modificacions',
	'select_category' => 'Selecciona la categoria',
);

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) $lang_banning_php = array(
  'title' => 'Expulsa els usuaris', //cpg1.4
  'user_name' => 'Nom d\'usuari', //cpg1.4
  'ip_address' => 'Adreça IP', //cpg1.4
  'expiry' => 'Expira (deixeu-lo blanc per fer-ho permanent)', //cpg1.4
  'edit_ban' => 'Desa els canvis', //cpg1.4
  'delete_ban' => 'Suprimeix', //cpg1.4
  'add_new' => 'Afegeix un nou exclòs/osa', //cpg1.4
  'add_ban' => 'Afegeix', //cpg1.4
  'error_user' => 'No s\'ha pogut trobar l\'usuari/ària', //cpg1.4
  'error_specify' => 'Heu d\'especificar un nom d\'usuari o una adreça IP', //cpg1.4
  'error_ban_id' => 'L\'ID no és vàlid!', //cpg1.4
  'error_admin_ban' => 'No podeu expulsar-vos a vós mateix!', //cpg1.4
  'error_server_ban' => 'Voleu expulsar el vostre propi servidor? No podeu fer això ...', //cpg1.4
  'error_ip_forbidden' => 'No podeu expulsar aquesta IP - potser no és privada! <br />Si dessitgeu permetre la expulsió d\'IP privades, canvieu: <a href="admin.php">el fitxer de configuració</a> (només té sentit si el Coppermine s\'executa en una LAN).', //cpg1.4
  'lookup_ip' => 'Cerca una adreça IP', //cpg1.4
  'submit' => 'Vés!', //cpg1.4
  'select_date' => 'Selecciona una data', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File bridgemgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('BRIDGEMGR_PHP')) $lang_bridgemgr_php = array(
  'title' => 'Auxiliar de l\'enllaç',
  'warning' => 'Avís: si feu ús de l\'auxiliar heu de saber que la informació important s\'envia amb formularis HTML. Executeu-lo només al vostre ordinador personal, y asegureu-vos d\'esborrar la memòria cau i els fitxers temporals del navegador després de finalitzar, o altres persones podran accedir a la vostra informació!',
  'back' => 'Enrere',
  'next' => 'Següent',
  'start_wizard' => 'Inicia l\'auxiliar',
  'finish' => 'Finalitza',
  'hide_unused_fields' => 'Amaga els camps del formulari no emprats (recomanat)',
  'clear_unused_db_fields' => 'Neteja els camps de la base de dades no emprats (recomanat)',
  'custom_bridge_file' => 'Nom del fitxer d\'enllaços (si el fitxer de l\'enllaç és <em>elmeufitxer.inc.php</em>, poseu <em>elmeufitxer</em> en aquest camp)',
  'no_action_needed' => 'No es requereix cap acció en aquest pas. Feu clic a \'següent\' per continuar.',
  'reset_to_default' => 'Reinicia amb els valors predeterminats',
  'choose_bbs_app' => 'Trieu l\'aplicació per enllaçar amb el Coppermine',
  'support_url' => 'Suport sobre l\'aplicació',
  'settings_path' => 'Camí emprat per l\'aplicació BBS',
  'database_connection' => 'Connexió a la base de dades',
  'database_tables' => 'Taules de la base de dades',
  'bbs_groups' => 'grups BBS',
  'license_number' => 'Número de llicència',
  'license_number_explanation' => 'introduïu el vostre número de llicència (si és necessari)',
  'db_database_name' => 'Nom de la base de dades',
  'db_database_name_explanation' => 'Introduïu el nom de la base de dades que fa servir l\'aplicació BBS',
  'db_hostname' => 'Servidor de la base de dades',
  'db_hostname_explanation' => 'Nom del servidor on es troba la base de dades MySQL, normalment &quot;localhost&quot;',
  'db_username' => 'Nom d\'usuari de la base de dades',
  'db_username_explanation' => 'Nom d\'usuari de MySQL per iniciar la connexió amb l\'aplicació BBS',
  'db_password' => 'Contrasenya de la base de dades',
  'db_password_explanation' => 'Contrasenya per a aquest nom d\'usuari del MySQL ',
  'full_forum_url' => 'URL del fòrum',
  'full_forum_url_explanation' => ' URL completa de l\'aplicació BBS (incloent http://, ex: http://www.elvostredomini.cat/forum)',
  'relative_path_of_forum_from_webroot' => 'Camí relatiu del fòrum',
  'relative_path_of_forum_from_webroot_explanation' => 'Camí relatiu de l\'aplicació BBS (Exemple: Si el vostre BBS es troba a http://www.elvostredomini.cat/forum/, introduïu &quot;/forum/&quot; en aquest camp)',
  'relative_path_to_config_file' => 'camí relatiu del fitxer de configuració de l\'aplicació BBS',
  'relative_path_to_config_file_explanation' => 'Camí relatiu de l\'aplicació BBS, vista des del directori del Coppermine (ex: &quot;../forum/&quot; si el vostre BBS esta a http://www.elvostredomini.cat/forum/ i el Coppermine a http://www.elvostredomini.cat/galeria/)',
  'cookie_prefix' => 'Prefix de la galeta',
  'cookie_prefix_explanation' => 'aquest serà el nom de la galeta de l\'aplicació BBS',
  'table_prefix' => 'Prefix de la taula',
  'table_prefix_explanation' => 'Ha de coincidir amb el prefix escollit quan es va configurar el BBS.',
  'user_table' => 'Taula d\'usuaris',
  'user_table_explanation' => '(Normalment, el valor predeterminat hauria de ser correcte, a no ser que la instal·lació de l\'aplicació BBS no sigui estàndard)',
  'session_table' => 'Taula de sessions',
  'session_table_explanation' => '(Normalment, el valor predeterminat hauria de ser correcte, a no ser que la instal·lació de l\'aplicació BBS no sigui estàndard)',
  'group_table' => 'Taula de grups',
  'group_table_explanation' => '(Normalment, el valor predeterminat hauria de ser correcte, a no ser que la instal·lació de l\'aplicació BBS no sigui estàndard)',
  'group_relation_table' => 'Tabla de grups afins',
  'group_relation_table_explanation' => '(Normalment, el valor predeterminat hauria de ser correcte, a no ser que la instal·lació de l\'aplicació BBS no sigui estàndard)',
  'group_mapping_table' => 'Taula de mapatge de grups',
  'group_mapping_table_explanation' => '(Normalment, el valor predeterminat hauria de ser correcte, a no ser que la instal·lació de l\'aplicació BBS no sigui estàndard)',
  'use_standard_groups' => 'Empreu grups d\'usuaris estàndards de BBS',
  'use_standard_groups_explanation' => 'Empreu grups d\'usuaris estàndards (recomanat). Això podria provocar que totes les configuracions d\'usuaris personalitzades fetes en aquesta pàgina no siguin vàlides. Desactiveu només aquesta opció si esteu realment segur/a del que esteu fent!',
  'validating_group' => 'Validació de grups',
  'validating_group_explanation' => 'Identificador del grup del vostre BBS on es troben els comptes dels usuaris que necessiten validació (normalment, el valor predeterminat hauria de ser correcte, a no ser que la instal·lació de l\'aplicació BBS no sigui estàndard)',
  'guest_group' => 'Grup visitant',
  'guest_group_explanation' => 'Identificador del grup del vostre BBS on es troben els usuaris visitants (anònims) (normalment, el valor predeterminat hauria de ser correcte, editeu només si esteu realment segur/a del que esteu fent)',
  'member_group' => 'Membres',
  'member_group_explanation' => 'Identificador del grup del vostre BBS on es troben els comptes d\'usuari &quot;regulars&quot; (normalment, el valor predeterminat hauria de ser correcte, editeu només si esteu realment segur/a del que esteu fent)',
  'admin_group' => 'Grup administradors',
  'admin_group_explanation' => 'Identificador del grup del vostre BBS on es troben els comptes d\'administració (normalment, el valor predeterminat hauria de ser correcte, editeu només si esteu realment segur/a del que esteu fent)',
  'banned_group' => 'Grup d\'expulsats',
  'banned_group_explanation' => 'Identificador del grup del vostre BBS on es troben els comptes dels usuaris expulsats (normalment, el valor predeterminat hauria de ser correcte, editeu només si esteu realment segur/a del que esteu fent)',
  'global_moderators_group' => 'Grup de moderadors globals',
  'global_moderators_group_explanation' => 'Identificador del grup del vostre BBS on es troben els comptes dels moderadors globals (normalment, el valor predeterminat hauria de ser correcte, editeu només si esteu realment segur/a del que esteu fent)',
  'special_settings' => 'Paràmetres específics del vostre BBS',
  'logout_flag' => 'versió de phpBB (indicador de sortida)',
  'logout_flag_explanation' => 'Quina és la versió del vostre BBS? (aquest paràmetre específica com es gestiona la sortida)',
  'use_post_based_groups' => 'Empreu grups basats en POST?',
  'logout_flag_yes' => '2.0.5 o posterior?',
  'logout_flag_no' => '2.0.4 o inferior?',
  'use_post_based_groups_explanation' => 'S\'han d\'importar els grups del vostre BBS que són definits pel seu número d\'enviaments (permet la gestió de premisos granular) o només els grups per defecte (més fàcil per l\'administrador/a, recomanat). Això es pot modificar posteriorment.',
  'use_post_based_groups_yes' => 'Sí',
  'use_post_based_groups_no' => 'No',
  'error_title' => 'Heu de corregir aquests error abans de continuar. Torneu a la pantalla anterior.',
  'error_specify_bbs' => 'Heu de definir quina aplicació voleu enllaçar amb la instalació del Coppermine.',
  'error_no_blank_name' => 'No podeu deixar el nom del fitxer d\'enllaç personalitzat en blanc.',
  'error_no_special_chars' => 'El fitxer d\'enllaç no pot tenir cap caràcter extrany, a excepció de caràcters subratllat (_) i guió (-)!',
  'error_bridge_file_not_exist' => 'El fitxer d\'enllaç %s no existeix en aquest servidor. Verifiqueu que l\'heu pujat.',
  'finalize' => 'Habilita/deshabilita la integració amb el BBS',
  'finalize_explanation' => 'Fins ara, la configuració especificada s\'ha incorporat a la base de dades, però la integració amb el BBS no està habilitada. Podeu iniciar/aturar la integració en qualsevol moment. Esteu segur/a de recordar la contrasenya d\'administrador/a del Coppermine independent, podeu necessitar-lo després per fer modificacions. Si alguna cosa no funciona correctament, aneu a %s i deshabiliteu la integració amb el BBS, empreu el compte d\'administrador/a no integrat (normalment, la que es va introduir durant la instal·lació del Coppermine).',
  'your_bridge_settings' => 'paràmetres d\'enllaç',
  'title_enable' => 'Habilita/deshabilita integració amb %s',
  'bridge_enable_yes' => 'Habilitat',
  'bridge_enable_no' => 'Deshabilitat',
  'error_must_not_be_empty' => 'No ha d\'estar buit',
  'error_either_be' => 'Ha de ser %s o %s',
  'error_folder_not_exist' => '%s no existeix. Corregiu el valor introduït per %s',
  'error_cookie_not_readible' => 'El Coppermine no pot llegir la galeta anomenada %s. Corregiu el valor introduït per %s, o aneu al tauler d\'administració del vostre BBS i assegureu-vos de que el camí de la galeta és accessible pel Coppermine.',
  'error_mandatory_field_empty' => 'No podeu deixar el camp %s buit. Empleneu-lo amb el valor adequat.',
  'error_no_trailing_slash' => 'No hi ha d\'haver una barra inversa al camp %s.',
  'error_trailing_slash' => 'Hi ha d\'haver una barra inversa al camp %s.',
  'error_db_connect' => 'No s\'ha pogut connectar a la base de dades MySQL amb la informació proporcionada. Això és el que diu el MySQL: ',
  'error_db_name' => 'Tot i que el Coppermine pot connectar-se amb el motor de bases de dades, no localitza la base de dades %s. Assegureu-vos de que heu especificat %s adequadament. Això és el que diu el MySQL:',
  'error_prefix_and_table' => '%s i ',
  'error_db_table' => 'No es pot trobar la taula %s. Assegureu-vos de que heu especificat %s adequadament.',
  'recovery_title' => 'Gestor de l\'enllaç: restabliment d\'emergència',
  'recovery_explanation' => 'Si heu entrat aquí per gestionar la integració del vostre BBS amb la vostra galeria Coppermine, primer, heu d\'iniciar la sessió com a administrador/a. Si no podeu iniciar sessió perquè l\'enllaç no funciona correctament, podeu deshabilitar la integració d\'aquesta pàgina. Introduir un nom d\'usuari i una contrasenya no iniciarà la sessió, només deshabilitara la integració amb el vostre BBS. Trobareu els detalls a la documentació.',
  'username' => 'Usuari/ària',
  'password' => 'Contrasenya',
  'disable_submit' => 'Tramet',
  'recovery_success_title' => 'L\'autorització ha tingut èxit',
  'recovery_success_content' => 'Heu deshabilitat amb èxit la integració amb el BBS. La instal·lació del Coppermine s\'està executant en mode independent.',
  'recovery_success_advice_login' => 'Identifiqueu-vos com a administrador/a per editar la vostra configuració d\'enllaç i/o activar la integració amb el BBS de nou.',
  'goto_login' => 'Vés a la pàgina d\'entrada',
  'goto_bridgemgr' => 'Vés al gestor d\'enllaços',
  'recovery_failure_title' => 'L\'autorització ha fallat',
  'recovery_failure_content' => 'Les dades d\'accés introduïdes són errònies. Heu d\'introduir la informació del compte d\'administrador/a de la versió independent (normalment, el compte que es va crear durant la instal·lació del Coppermine).',
  'try_again' => 'Torneu-ho a provar',
  'recovery_wait_title' => 'El temps d\'espera no s\'ha exhaurit',
  'recovery_wait_content' => 'Per motius de seguretat no es permeten intents erronis consecutius durant l\'autentificació, per aquest motiu, haureu d\'esperar un breu període de temps abans de tornar-ho a provar.',
  'wait' => 'espereu',
  'create_redir_file' => 'Crea un fitxer de redirecció (recomanat)',
  'create_redir_file_explanation' => 'Per redirigir els usuaris de nou cap al Coppermine després d\'haver finalitzat la sessió BBS, cal que es creï un fitxer de redirecció a una carpeta del BBS. Quan aquesta opció està activada, el gestor d\'enllaços provarà de crear aquest fitxer per vós. En cas contrari, us proporcionarà un codi per copiar i enganxar que us permetrà crear el fitxer manualment.',
  'browse' => 'Navega',
);

// ------------------------------------------------------------------------- //
// File calendar.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('CALENDAR_PHP')) $lang_calendar_php = array(
  'title' => 'Calendari', //cpg1.4
  'close' => 'Tanca', //cpg1.4
  'clear_date' => 'Neteja les dades', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
	'miss_param' => 'Els paràmetres requerits per a la operació: \'%s\' no s\'han introduït!',
	'unknown_cat' => 'La categoria seleccionada no existeix a la base de dades',
	'usergal_cat_ro' => '¡Les categories de galeria d\'usuaris no poden ser suprimides!',
	'manage_cat' => 'Gestor de categories',
	'confirm_delete' => 'Esteu segur/a de voler esborrar la categoria?',
	'category' => 'Categoria',
	'operations' => 'Operacions',
	'move_into' => 'Mou',
	'update_create' => 'Actualitza / Crea la categoria',
	'parent_cat' => 'Categoria pare',
	'cat_title' => 'Títol de la categoria',
	'cat_thumb' => 'Imatge en miniatura de la categoria', //cpg1.3.0
	'cat_desc' => 'Descripció de la categoria',
  	'categories_alpha_sort' => 'Ordeneu les categories alfabèticament (en lloc de l\'ordre predeterminat)', //cpg1.4
  	'save_cfg' => 'Desa la configuració', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File admin.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('ADMIN_PHP')) $lang_admin_php = array(
	'title' => 'Configuració',
  	'manage_exif' => 'Visualitza el gestor d\'EXIF (Exchangeable Image File Format)', //cpg1.4
  	'manage_plugins' => 'Gestiona els connectors', //cpg1.4
  	'manage_keyword' => 'Gestiona les paraules clau', //cpg1.4
	'restore_cfg' => 'Restaura els paràmetres predeterminats',
	'save_cfg' => 'Desa la nova configuració',
	'notes' => 'Notes',
	'info' => 'Informació',
	'upd_success' => 'S\'ha actualitzat la configuració del Coppermine',
	'restore_success' => 'S\'han restaurat els paràmetres per defecte del Coppermine',
	'name_a' => 'Ordena per nom en sentit ascendent',
	'name_d' => 'Ordena per nom en sentit descendent',
	'title_a' => 'Ordena per títol en sentit ascendent',
	'title_d' => 'Ordena per títol en sentit descendent',
	'date_a' => 'Ordena per data en sentit ascendent',
	'date_d' => 'Ordena per data en sentit descendent',
  	'pos_a' => 'Ordena per posició en sentit ascendent', //cpg1.4
  	'pos_d' => 'Ordena per posició en sentit descendent', //cpg1.4
	'th_any' => 'Maximitza l\'aspecte',
	'th_ht' => 'Alçada',
	'th_wd' => 'Amplada',
	'label' => 'Etiqueta', //cpg1.3.0
	'item' => 'Element', //cpg1.3.0
	'debug_everyone' => 'Per a tothom', //cpg1.3.0
	'debug_admin' => 'Només pels administradors/es', //cpg1.3.0
  	'no_logs'=> 'Inactiu', //cpg1.4
  	'log_normal'=> 'Normal', //cpg1.4
  	'log_all' => 'Tot', //cpg1.4
  	'view_logs' => 'Visualitza els registres', //cpg1.4
  	'click_expand' => 'Feu clic al nom de l\'extensió per expandir-la', //cpg1.4
  	'expand_all' => 'Expandeix-ho tot', //cpg1.4
    'notice1' => '(*) No modifiqueu aquests paràmetres si ja teniu fitxers a la base de dades', //cpg1.4 - (relocated)
	'notice2' => '(**) Si canvieu aquest paràmetre només es veuran afectats els fitxers afegits a partir d\'ara. Per tant, és recomanable que no el canvieu si ja teniu fitxers a la galeria. De tota manera, podeu aplicar els canvis als fitxer existents mitjançant les &quot;<a href="util.php">eines d\'administració</a> (canvi de mida de les imatges)&quot; del menú d\'administració', //cpg1.4 - (relocated)
	'notice3' => '(***) Tots els fitxers de registre estan escrits en anglès', //cpg1.4 - (relocated)
    'bbs_disabled' => 'Funció desactivada quan emprar la integracció bbs', //cpg1.4
    'auto_resize_everyone' => 'Tothom', //cpg1.4
    'auto_resize_user' => 'Només l\'usuari/ària', //cpg1.4
    'ascending' => 'ascendent', //cpg1.4
    'descending' => 'descendent', //cpg1.4
        );

if (defined('ADMIN_PHP')) $lang_admin_data = array(
	'Paràmetres generals',
	array('Nom de la galeria', 'gallery_name', 0, 'f=index.htm&amp;as=admin_general_name&amp;ae=admin_general_name_end'),
	array('Descripció de la galeria', 'gallery_description', 0, 'f=index.htm&amp;as=admin_general_description&amp;ae=admin_general_description_end'),
	array('Correu electrònic de l\'administrador/a', 'gallery_admin_email', 0, 'f=index.htm&amp;as=admin_general_email&amp;ae=admin_general_email_end'),
  	array('URL de la vostra galeria Coppermine (sense \'index.php\' o similar al final)', 'ecards_more_pic_target', 0, 'f=index.htm&amp;as=admin_general_coppermine-url&amp;ae=admin_general_coppermine-url_end'), //cpg1.4
  	array('Pàgina d\'inici', 'home_target', 0, 'f=index.htm&amp;as=admin_general_home-url&amp;ae=admin_general_home-url_end'), //cpg1.4
	array('Permet les descàrregues dels favorits en format ZIP', 'enable_zipdownload', 1, 'f=index.htm&amp;as=admin_general_zip-download&amp;ae=admin_general_zip-download_end'), //cpg1.3.0
  	array('Diferència horària relativa a GMT (Hora actual: ' . localised_date(-1, $comment_date_fmt) . ')','time_offset',0, 'f=index.htm&amp;as=admin_general_time-offset&amp;ae=admin_general_time-offset_end&amp;top=1'), //cpg1.4
  	array('Permet contrasenyes encriptades (no es pot desfer)','enable_encrypted_passwords',1, 'f=index.htm&amp;as=admin_general_encrypt_password_start&amp;ae=admin_general_encrypt_password_end&amp;top=1'), // cpg 1.4
  	array('Activa les icones d\'ajuda (l\'ajuda només està disponible en anglès)','enable_help',9, 'f=index.htm&amp;as=admin_general_help&amp;ae=admin_general_help_end'), //cpg1.4
  	array('Activa la possibilitat de fer clic sobre les paraules de cerca','clickable_keyword_search',14, 'f=index.htm&amp;as=admin_general_keywords_start&amp;ae=admin_general_keywords_end'), //cpg1.4
  	array('Activa els connectors', 'enable_plugins', 12, 'f=index.htm&amp;as=admin_general_enable-plugins&amp;ae=admin_general_enable-plugins_end'),  //cpg1.4
  	array('Prohibeix l\'accés des d\'adreces IP privades', 'ban_private_ip', 1,  'f=index.htm&amp;as=admin_general_private-ip&amp;ae=admin_general_private-ip_end'), //cpg1.4
  	array('Interfície de navegació de fitxers massius afegits', 'browse_batch_add', 1, 'f=index.htm&amp;as=admin_general_browsable_batch_add&amp;ae=admin_general_browsable_batch_add_end'), //cpg1.4

	'Idioma, entorns visuals i joc de caràcters',
	array('Idioma', 'lang', 5, 'f=index.htm&amp;as=admin_language_language&amp;ae=admin_language_language_end'),
	array('Visualitza la llista d\'idiomes', 'language_list', 1, 'f=index.htm&amp;as=admin_language_list&amp;ae=admin_language_list_end'), //cpg1.3.0
	array('Visualitza l\'indicador d\'idioma', 'language_flags', 8, 'f=index.htm&amp;as=admin_language_flags&amp;ae=admin_language_flags_end&amp;top=1'), //cpg1.3.0
	array('Visualitza &quot;reiniciar&quot; a la selecció d\'idioma', 'language_reset', 1, 'f=index.htm&amp;as=admin_language_reset&amp;ae=admin_language_reset_end&amp;top=1'), //cpg1.3.0
  	array('Mostra en anglès si el fitxer d\'idioma triat no es pot trobar', 'language_fallback', 1, 'f=index.htm&amp;as=admin_language_fallback&amp;ae=admin_language_fallback_end'), //cpg1.4
  	array('Joc de caràcters', 'charset', 4, 'f=index.htm&amp;as=admin_language_charset&amp;ae=admin_language_charset_end'), //cpg1.4
  	//array('Mostrar anterior/siguiente en las paginas tabuladas', 'previous_next_tab', 1), //cpg1.4
	
	'Configuració d\'entorns visuals',
  	array('Entorn visual', 'theme', 6, 'f=index.htm&amp;as=admin_theme_theme&amp;ae=admin_theme_theme_end'),
  	array('Visualitza la llista d\'entorns visuals', 'theme_list', 1, 'f=index.htm&amp;as=admin_theme_theme_list&amp;ae=admin_theme_theme_list_end'), //cpg1.4
  	array('Visualitza &quot;reiniciar&quot; a la selecció d\'entorns visuals', 'theme_reset', 1, 'f=index.htm&amp;as=admin_theme_theme_reset&amp;ae=admin_theme_theme_reset_end'), //cpg1.3.0
  	array('Visualitza les PMF (preguntes més freqüents)', 'display_faq', 1, 'f=index.htm&amp;as=admin_theme_faq&amp;ae=admin_theme_faq_end'), //cpg1.3.0
  	array('Nom de l\'enllaç del menú personalitzat', 'custom_lnk_name', 0,'f=index.htm&amp;as=admin_theme_custom_lnk_name&amp;ae=admin_theme_custom_lnk_name_end'), //cpg1.4
  	array('URL de l\'enllaç del menú personalitzat', 'custom_lnk_url', 0,'f=index.htm&amp;as=admin_language_custom_lnk_url&amp;ae=admin_language_custom_lnk_url_end'), //cpg1.4
	array('Visualitza l\'ajuda sobre bbcode', 'show_bbcode_help', 1, 'f=index.htm&amp;as=admin_theme_bbcode&amp;ae=admin_theme_bbcode_end&amp;top=1'), //cpg1.3.0
  	array('Visualitza el bloc personalitzat en els entorns visuals que siguin XHTML i CSS','vanity_block',1, 'f=index.htm&amp;as=vanity_block&amp;ae=vanity_block_end'), //cpg1.4
  	array('Camí per la personalització de la capçalera ', 'custom_header_path', 0, 'f=index.htm&amp;as=admin_theme_include_path_start&amp;ae=admin_theme_include_path_end'), //cpg1.4
  	array('Camí per personalitzar peu de pàgina', 'custom_footer_path', 0, 'f=index.htm&amp;as=admin_theme_include_path_start&amp;ae=admin_theme_include_path_end'), //cpg1.4
	
	'Visualització de la llista d\'àlbums',
  	array('Amplada de la taula principal (píxels o %)', 'main_table_width', 0, 'f=index.htm&amp;as=admin_album_table-width&amp;ae=admin_album_table-width_end'),
	array('Nombre de nivells de categories a mostrar', 'subcat_level', 0, 'f=index.htm&amp;as=admin_album_category-levels&amp;ae=admin_album_category-levels_end'),
  	array('Nombre d\'àlbums a mostrar', 'albums_per_page', 0, 'f=index.htm&amp;as=admin_album_number&amp;ae=admin_album_number_end'),
	array('Nombre de columnes a la llista d\'àlbums', 'album_list_cols', 0, 'f=index.htm&amp;as=admin_album_columns&amp;ae=admin_album_columns_end'),
  	array('Mida de les miniatures en píxels', 'alb_list_thumb_size', 0, 'f=index.htm&amp;as=admin_album_thumbnail-size&amp;ae=admin_album_thumbnail-size_end'),
  	array('Contingut de la pàgina principal', 'main_page_layout', 0, 'f=index.htm&amp;as=admin_album_list_content&amp;ae=admin_album_list_content_end'),
	array('Visualitza miniatures dels àlbums de primer nivell de les categories','first_level',1, 'f=index.htm&amp;as=admin_album_first-level_thumbs&amp;ae=admin_album_first-level_thumbs_end'),
  	array('Organitza les miniatures alfabèticament (en lloc de l\'ordre predeterminat)','categories_alpha_sort',1, 'f=index.htm&amp;as=admin_album_list_alphasort_start&amp;ae=admin_album_list_alphasort_end'), //cpg1.4
  	array('Visualitza el nombre de fitxers enllaçats','link_pic_count',1, 'f=index.htm&amp;as=admin_album_linked_files_start&amp;ae=admin_album_linked_files_end'), //cpg1.4

	'Visualització de les miniatures',
	array('Nombre de columnes a la pàgina de miniatures', 'thumbcols', 0, 'f=index.htm&amp;as=admin_thumbnail_columns&amp;ae=admin_thumbnail_columns_end'),
	array('Nombre de files a la pàgina de miniatures', 'thumbrows', 0, 'f=index.htm&amp;as=admin_thumbnail_rows&amp;ae=admin_thumbnail_rows_end'),
	array('Nombre màxim de pestanyes a visualitzar', 'max_tabs', 10, 'f=index.htm&amp;as=admin_thumbnail_tabs&amp;ae=admin_thumbnail_tabs_end'),
	array('Visualitza el peu de la imatge (a més del títol) sota la miniatura', 'caption_in_thumbview', 1, 'f=index.htm&amp;as=admin_thumbnail_display_caption&amp;ae=admin_thumbnail_display_caption_end'),
	array('Mostreu el nombre de visualitzacions sota la miniatura', 'views_in_thumbview', 1, 'f=index.htm&amp;as=admin_thumbnail_display_views&amp;ae=admin_thumbnail_display_views_end'), //cpg1.3.0
	array('Visualitza nombre de comentaris sota la miniatura', 'display_comment_count', 1, 'f=index.htm&amp;as=admin_thumbnail_display_comments&amp;ae=admin_thumbnail_display_comments_end'),
	array('Visualitza el nom de l\'usuari/ària que va pujar el fitxer sota la miniatura', 'display_uploader', 1, 'f=index.htm&amp;as=admin_thumbnail_display_uploader&amp;ae=admin_thumbnail_display_uploader_end'), //cpg1.3.0
  	//array('Mostrar el nombre de los administrador que subieron el archivo debajo del nombre', 'display_admin_uploader', 1, 'f=index.htm&amp;as=admin_thumbnail_display_admin_uploader&amp;ae=admin_thumbnail_display_admin_uploader_end'), //cpg1.4
	array('Ordre per defecte de les imatges', 'default_sort_order', 3, 'f=index.htm&amp;as=admin_thumbnail_default_sortorder&amp;ae=admin_thumbnail_default_sortorder_end'),
	array('Nombre mínim de vots per a que una imatge aparegui a la llista de \'Millor valorades\'', 'min_votes_for_rating', 0, 'f=index.htm&amp;as=admin_thumbnail_minimum_votes&amp;ae=admin_thumbnail_minimum_votes_end'), //cpg1.3.0
  	array('Visualitza el nom de la miniatura', 'display_filename', 1, 'f=index.htm&amp;as=admin_thumbnail_display_filename&amp;ae=admin_thumbnail_display_filename_end'), //cpg1.4
	//array('Visualitza la descripció de l\'àlbum', 'alb_desc_thumb', 1, 'f=index.htm&amp;as=admin_thumbnail_display_description&amp;ae=admin_thumbnail_display_description_end'), //cpg1.4

	'Visualització de les imatges',
	array('Amplada de la taula on es visualitzaran les imatges (píxels o %)', 'picture_table_width', 0, 'f=index.htm&amp;as=admin_image_comment_table-width&amp;ae=admin_image_comment_table-width_end'),
	array('Informació del fitxer visible per defecte', 'display_pic_info', 1, 'f=index.htm&amp;as=admin_image_comment_info_visible&amp;ae=admin_image_comment_info_visible_end'),
	array('Longitud màxima per la descripció d\'una imatge', 'max_img_desc_length', 0, 'f=index.htm&amp;as=admin_image_comment_descr_length&amp;ae=admin_image_comment_descr_length_end'),
	array('Nombre màxim de caràcters a una paraula', 'max_com_wlength', 0, 'f=index.htm&amp;as=admin_image_comment_chars_per_word&amp;ae=admin_image_comment_chars_per_word_end'),
	array('Visualitza la tira de pel·lícula', 'display_film_strip', 1, 'f=index.htm&amp;as=admin_image_comment_filmstrip_toggle&amp;ae=admin_image_comment_filmstrip_toggle_end'),
	array('Nombre d\'elements a la tira de pel·lícula', 'max_film_strip_items', 0, 'f=index.htm&amp;as=admin_image_comment_filmstrip_number&amp;ae=admin_image_comment_filmstrip_number_end'),
	array('Interval de temps entre imatges a la projecció de diapositives en mil·lisegons (1 segon = 1000 mil·lisegons)', 'slideshow_interval', 0, 'f=index.htm&amp;as=admin_image_comment_slideshow_interval&amp;ae=admin_image_comment_slideshow_interval_end'), //cpg1.3.0
  	array('Visualitzeu el nom del fitxer sota la miniatura de la tira de pel·lícula', 'display_film_strip_filename', 1, 'f=index.htm&amp;as=admin_image_comment_display_film_strip_filename&amp;ae=admin_image_comment_display_film_strip_filename_end'), //cpg1.4

  	'Configuració de comentaris', //cpg1.4
	array('Filtra les paraules malsonants als comentaris', 'filter_bad_words', 1, 'f=index.htm&amp;as=admin_image_comment_bad_words&amp;ae=admin_image_comment_bad_words_end'),
	array('Permet emoticones als comentaris', 'enable_smilies', 1, 'f=index.htm&amp;as=admin_image_comment_smilies&amp;ae=admin_image_comment_smilies_end'),
	array('Permet diversos comentaris d\'un mateix usuari/ària a una imatge (inhabilita la protecció contra acumulacions)', 'disable_comment_flood_protect', 1, 'f=index.htm&amp;as=admin_image_comment_flood&amp;ae=admin_image_comment_flood_end'), //cpg1.3.0
	array('Nombre màxim de línies a un comentari', 'max_com_lines', 0, 'f=index.htm&amp;as=admin_image_comment_lines&amp;ae=admin_image_comment_lines_end'),
	array('Longitud màxima d\'un comentari', 'max_com_size', 0, 'f=index.htm&amp;as=admin_image_comment_length&amp;ae=admin_image_comment_length_end'),
	array('Notifica els comentaris a l\'administrador/a per correu electrònic', 'email_comment_notification', 1, 'f=index.htm&amp;as=admin_image_comment_admin_notify&amp;ae=admin_image_comment_admin_notify_end'), //cpg1.3.0
  	array('Ordena els comentaris', 'comments_sort_descending', 17, 'f=index.htm&amp;as=admin_comment_sort_start&amp;ae=admin_comment_sort_end'), //cpg1.4
  	array('Prefix per comentaris d\'autors anònims', 'comments_anon_pfx', 0, 'f=index.htm&amp;as=comments_anon_pfx&amp;ae=comments_anon_pfx_end'), //cpg1.4

	'Configuració dels fitxers i de les miniatures',
	array('Qualitat per als fitxers JPEG', 'jpeg_qual', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_jpeg_quality&amp;ae=admin_picture_thumbnail_jpeg_quality_end'),
	array('Màxima amplada i alçada de les miniatures <strong>*</strong>', 'thumb_width', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max-dimension&amp;ae=admin_picture_thumbnail_max-dimension_end'),
	array('Utilitza la dimensió (amplada i alçada màxima per les miniatures) <strong>**</strong>', 'thumb_use', 7, 'f=index.htm&amp;as=admin_picture_thumbnail_use-dimension&amp;ae=admin_picture_thumbnail_use-dimension_end'),
	array('Crea imatges de mida intermitja','make_intermediate',1, 'f=index.htm&amp;as=admin_picture_thumbnail_intermediate_toggle&amp;ae=admin_picture_thumbnail_intermediate_toggle_end'),
	array('Màxima amplada i alçada de les imatges de mida intermitja <strong>*</strong>', 'picture_width', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_intermediate_dimension&amp;ae=admin_picture_thumbnail_intermediate_dimension_end'),
	array('Mida màxima dels fitxers pujats pels usuaris (kB)', 'max_upl_size', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max_upload_size&amp;ae=admin_picture_thumbnail_max_upload_size_end'),
	array('Màxima amplada i alçada de les imatges/vídeos pujats (píxels)', 'max_upl_width_height', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max_upload_dimension&amp;ae=admin_picture_thumbnail_max_upload_dimension_end'),
	array('Redimensiona automàticament les imatges que són més grans que l\'alçada i l\'amplada màxima', 'auto_resize', 16, 'f=index.htm&amp;as=admin_picture_thumbnail_auto-resize&amp;ae=admin_picture_thumbnail_auto-resize_end'), //cpg1.4
	
	'Configuració avançada de fitxers i miniatures', //cpg1.3.0
	array('Mostra la icona de l\'àlbum privat als usuaris no registrats','show_private',1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_private_icon_show&amp;ae=admin_picture_thumb_advanced_private_icon_show_end'), //cpg1.3.0
	array('Caràcters prohibits en els noms de fitxers', 'forbiden_fname_char',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_filename_forbidden_chars&amp;ae=admin_picture_thumb_advanced_filename_forbidden_chars_end'), //cpg1.3.0
	//array('Extensiones admitidas al afegir archivos', 'allowed_file_extensions',0, 'f=index.htm&amp;as=&amp;ae=_end'), //cpg1.3.0
 	array('Formats d\'imatge admesos', 'allowed_img_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_pic_extensions&amp;ae=admin_picture_thumb_advanced_pic_extensions_end'), //cpg1.3.0
	array('Formats de fitxer de vídeo admesos', 'allowed_mov_types',0, 'f=index.htm&amp;as=admin_thumbs_advanced_movie&amp;ae=admin_thumbs_advanced_movie_end'), //cpg1.3.0
	array('Formats de fitxer de so admesos', 'allowed_snd_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_audio_extensions&amp;ae=admin_picture_thumb_advanced_audio_extensions_end'), //cpg1.3.0
	array('Tipus de documents admesos', 'allowed_doc_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_doc_extensions&amp;ae=admin_picture_thumb_advanced_doc_extensions_end'), //cpg1.3.0
	array('Mètode per redimensionar les imatges','thumb_method',2, 'f=index.htm&amp;as=admin_picture_thumb_advanced_resize_method&amp;ae=admin_picture_thumb_advanced_resize_method_end'), //cpg1.3.0
	array('Camí per accedir a la funció \'convert\' de l\'ImageMagick (per exemple /usr/bin/)', 'impath', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_im_path&amp;ae=admin_picture_thumb_advanced_im_path_end'), //cpg1.3.0
	//array('Tipos de archivo admitidos (solo válidos con ImageMagick)', 'allowed_img_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_allowed_imagetypes&amp;ae=admin_picture_thumb_advanced_allowed_imagetypes_end'), //cpg1.3.0
	array('Comandes d\'ImageMagick', 'im_options', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_im_commandline&amp;ae=admin_picture_thumb_advanced_im_commandline_end'), //cpg1.3.0
	array('Llegeix les dades EXIF als fitxers JPEG', 'read_exif_data', 1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_exif&amp;ae=admin_picture_thumb_advanced_exif_end'), //cpg1.3.0
	array('Llegeix les dades IPTC als fitxers JPEG', 'read_iptc_data', 1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_iptc&amp;ae=admin_picture_thumb_advanced_iptc_end'), //cpg1.3.0
	array('Directory d\'àlbums <a href="#notice1" class="clickable_option">*</a>', 'fullpath', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_albums_dir&amp;ae=admin_picture_thumb_advanced_albums_dir_end'), //cpg1.3.0
	array('Directori pels fitxers dels usuaris <a href="#notice1" class="clickable_option">*</a>', 'userpics', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_userpics_dir&amp;ae=admin_picture_thumb_advanced_userpics_dir_end'), //cpg1.3.0
	array('Prefix de les imatges intermitges <a href="#notice1" class="clickable_option">*</a>', 'normal_pfx', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_intermediate_prefix&amp;ae=admin_picture_thumb_advanced_intermediate_prefix_end'), //cpg1.3.0
	array('Prefix de les miniatures <a href="#notice1" class="clickable_option">*</a>', 'thumb_pfx', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_thumbs_prefix&amp;ae=admin_picture_thumb_advanced_thumbs_prefix_end'), //cpg1.3.0
	array('Mode predeterminat dels directoris', 'default_dir_mode', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_chmod_folder&amp;ae=admin_picture_thumb_advanced_chmod_folder_end'), //cpg1.3.0
	array('Mode predeterminat dels fitxers', 'default_file_mode', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_chmod_files&amp;ae=admin_picture_thumb_advanced_chmod_files_end'), //cpg1.3.0
  	array('Inici automàtic de pel·lícules', 'media_autostart',1, 'f=index.htm&amp;as=admin_movie_autoplay&amp;ae=admin_movie_autoplay_end'), //cpg1.4
	array('Els usuaris poden tenir àlbums privats (Nota: si canvieu de \'sí\' a \'no\' tots els àlbums privats existents es convertiran en públics)', 'allow_private_albums', 1), //cpg1.3.0

	'Configuració d\'usuaris',
	array('Permet el registre de nous usuaris', 'allow_user_registration', 1, 'f=index.htm&amp;as=admin_allow_registration&amp;ae=admin_allow_registration_end'),
	array('El registre d\'usuaris requereix la verificació per correu electrònic', 'reg_requires_valid_email', 1, 'f=index.htm&amp;as=admin_registration_verify&amp;ae=admin_registration_verify_end'),
	array('Notifica a l\'administrador/a el registre de nous usuaris per correu electrònic ', 'reg_notify_admin_email', 1, 'f=index.htm&amp;as=admin_registration_notify&amp;ae=admin_registration_notify_end'), //cpg1.3.0
  	array('Permet a dos usuaris tenir el mateix correu electrònic', 'allow_duplicate_emails_addr', 1, 'f=index.htm&amp;as=admin_allow_duplicate_emails_addr&amp;ae=admin_allow_duplicate_emails_addr_end'),
	array('Notifica a l\'administrador/a l\'existència de nous fitxers pujats en espera de validació', 'upl_notify_admin_email', 1, 'f=index.htm&amp;as=admin_approval_notify&amp;ae=admin_approval_notify_end'), //cpg1.3.0
	array('Permet als usuaris registrats veure la llista de membres', 'allow_memberlist', 1, 'f=index.htm&amp;as=admin_user_memberlist&amp;ae=admin_user_memberlist_end'), //cpg1.3.0
  	array('Permet l\'accés d\'usuaris no registrats (visitants i anònims)', 'allow_unlogged_access', 1, 'f=index.htm&amp;as=admin_allow_unlogged_access&amp;ae=admin_allow_unlogged_access_end'), //cpg1.4
  	array('Activa els registres per l\'administrador/a', 'admin_activation', 1, 'f=index.htm&amp;as=admin_activation&amp;ae=admin_activation_end'),  //cpg1.4
  	array('Permet als usuaris canviar el seu correu electrònic al perfil', 'allow_email_change', 1, 'f=index.htm&amp;as=admin_user_allow_email_change&amp;ae=admin_user_allow_email_change_end'), //cpg1.4
  	array('Permet als usuaris controlar els seus fitxers a les galeries públiques', 'users_can_edit_pics', 1, 'f=index.htm&amp;as=admin_user_editpics_public_start&amp;ae=admin_user_editpics_public_end'), //cpg1.4
  	array('Nombre d\'intents fallits d\'entrada abans de denegar l\'accés (evita atacs de força bruta)', 'login_threshold', 0, 'f=index.htm&amp;as=admin_user_login_start&amp;ae=admin_user_login_end'), //cpg1.4
  	array('Duració de la denegació d\'accés després dels intents fallits', 'login_expiry', 0, 'f=index.htm&amp;as=admin_user_login_start&amp;ae=admin_user_login_end'), //cpg1.4
  	array('Genera un llistat a l\'administrador/a', 'report_post', 1, 'f=index.htm&amp;as=admin_user_enable_report&amp;ae=admin_user_enable_report_end'),  //cpg1.4

// custom profile fields,  //cpg1.4
  	'Camps personalitzats per perfils d\'usuaris (deixeu-lo en blanc si no el feu servir). Utilitzeu el Perfil 6 per entrades llargues, com biografies', //cpg1.4
  	array('Nom del perfil 1', 'user_profile1_name', 0, 'f=index.htm&amp;as=admin_custom&amp;ae=admin_custom_end'), //cpg1.4
  	array('Nom del perfil 2', 'user_profile2_name', 0), //cpg1.4
  	array('Nom del perfil 3', 'user_profile3_name', 0), //cpg1.4
  	array('Nom del perfil 4', 'user_profile4_name', 0), //cpg1.4
  	array('Nom del perfil 5', 'user_profile5_name', 0), //cpg1.4
  	array('Nom del perfil 6', 'user_profile6_name', 0), //cpg1.4

	'Camps personalitzats per la descripció d\'imatges (deixeu-lo en blanc si no el feu servir)',
	array('Nom del camp 1', 'user_field1_name', 0, 'f=index.htm&amp;as=admin_custom_image&amp;ae=admin_custom_image_end'),
	array('Nom del camp 2', 'user_field2_name', 0),
	array('Nom del camp 3', 'user_field3_name', 0),
	array('Nom del camp 4', 'user_field4_name', 0),
  	
	'Configuració de les galetes',
	array('Nom de la galeta emprada per la seqüència ', 'cookie_name', 0, 'f=index.htm&amp;as=admin_cookie_name&amp;ae=admin_cookie_name_end'),
	array('Camí de la galeta emprada per la seqüència', 'cookie_path', 0, 'f=index.htm&amp;as=admin_cookie_path&amp;ae=admin_cookie_path_end'),

  	'configuració del correu electrònic (normalment no requereix canvis, deixeu els camps en blanc si no esteu segurs)', //cpg1.4
  	array('Servidor SMTP (si es deixa en blanc s\'utilitzarà el sendmail)', 'smtp_host', 0, 'f=index.htm&amp;as=admin_email&amp;ae=admin_email_end'), //cpg1.4
  	array('Usuari SMTP', 'smtp_username', 0), //cpg1.4
  	array('Contrasenya SMTP', 'smtp_password', 0), //cpg1.4

  	'Fitxer de registres i estadístiques', //cpg1.4
  	array('Mode del fitxer de registres <a href="#notice3" class="clickable_option">***</a>', 'log_mode', 11, 'f=index.htm&amp;as=admin_logging_log_mode&amp;ae=admin_logging_log_mode_end'), //cpg1.4
  	array('Registra les postals', 'log_ecards', 1, 'f=index.htm&amp;as=admin_general_log_ecards&amp;ae=admin_general_log_ecards_end'), //cpg1.4
  	array('Manté estadístiques detallades de les votacions','vote_details',1, 'f=index.htm&amp;as=admin_logging_votedetails&amp;ae=admin_logging_votedetails_end'), //cpg1.4
  	array('Manté estadístiques detallades dels més exitosos','hit_details',1, 'f=index.htm&amp;as=admin_logging_hitdetails&amp;ae=admin_logging_hitdetails_end'), //cpg1.4
	
	'Paràmetres de manteniment', //cpg1.4
	array('Activa el mode depuració', 'debug_mode', 9, 'f=index.htm&amp;as=debug_mode&amp;ae=debug_mode_end'), //cpg1.3.0
	array('Visualitza els avisos en mode depuració', 'debug_notice', 1, 'f=index.htm&amp;as=admin_misc_debug_notices&amp;ae=admin_misc_debug_notices_end'), //cpg1.3.0
	array('Galeria desactivada', 'offline', 1, 'f=index.htm&amp;as=admin_general_offline&amp;ae=admin_general_offline_end'), //cpg1.3.0
	'<br /><div align="left"><a name="notice1"></a>(*) Aquests valors no s\'han de modificar si ja existeixen a la base de dades<br />
	<a name="notice2"></a>(**) (**) Si canvieu aquest paràmetre només es veuran afectats els fitxers afegits a partir d\'ara. Per tant, és recomanable que no el canvieu si ja teniu fitxers a la galeria. De tota manera, podeu aplicar els canvis als fitxer existents mitjançant les &quot;<a href="util.php">eines d\'administració</a> (canvi de mida de les imatges)&quot; del menú d\'administració<br />
	<a name="notice3"></a>(***) Tots els fitxers de registre estan escrits en anglès</div><br />', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File db_ecard.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('DB_ECARD_PHP')) $lang_db_ecard_php = array(
  'title' => 'Postals enviades', //cpg1.3.0
  'ecard_sender' => 'Remitent', //cpg1.3.0
  'ecard_recipient' => 'Destinatari', //cpg1.3.0
  'ecard_date' => 'Data', //cpg1.3.0
  'ecard_display' => 'Visualitza la postal', //cpg1.3.0
  'ecard_name' => 'Nom', //cpg1.3.0
  'ecard_email' => 'Correu electrònic', //cpg1.3.0
  'ecard_ip' => 'adreça IP', //cpg1.3.0
  'ecard_ascending' => 'ascendent', //cpg1.3.0
  'ecard_descending' => 'descendent', //cpg1.3.0
  'ecard_sorted' => 'Ordre', //cpg1.3.0
  'ecard_by_date' => 'per data', //cpg1.3.0
  'ecard_by_sender_name' => 'per nom del remitent', //cpg1.3.0
  'ecard_by_sender_email' => 'per correu electrònic del remitent', //cpg1.3.0
  'ecard_by_sender_ip' => 'per adreça IP del remitent', //cpg1.3.0
  'ecard_by_recipient_name' => 'per nom del destinatari', //cpg1.3.0
  'ecard_by_recipient_email' => 'per correu electrònic del destinatari', //cpg1.3.0
  'ecard_number' => 'visualitzant registres %s al %s de %s', //cpg1.3.0
  'ecard_goto_page' => 'Vés a la pàgina', //cpg1.3.0
  'ecard_records_per_page' => 'Registres per pàgina', //cpg1.3.0
  'check_all' => 'Marca-les totes', //cpg1.3.0
  'uncheck_all' => 'Marca-les totes', //cpg1.3.0
  'ecards_delete_selected' => 'Suprimeix les postals seleccionades', //cpg1.3.0
  'ecards_delete_confirm' => 'Esteu segur de que voleu esborrar aquests registres? Marqueu el quadre de verificació!', //cpg1.3.0
  'ecards_delete_sure' => 'Estic segur/a', //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
	'empty_name_or_com' => 'Heu d\'introduir el nom i un comentari',
	'com_added' => 'S\'ha afegit el vostre comentari',
	'alb_need_title' => 'Heu d\'introduir un títol per l\'àlbum!',
	'no_udp_needed' => 'No cal cap actualització',
	'alb_updated' => 'L\'àlbum és actualitzat',
	'unknown_album' => 'L\'àlbum seleccionat no existeix o no disposeu dels permisos per pujar fotos a aquest àlbum',
	'no_pic_uploaded' => 'No s\'ha carregat cap fitxer!<br /><br />Si heu seleccionat una foto per pujar, comproveu que el servidor admet la càrrega de fitxers...',
	'err_mkdir' => 'És impossible crear el directori %s!',
	'dest_dir_ro' => 'El directori destí %s no té permisos d\'escriptura per la seqüència!',
	'err_move' => '¡És impossible moure %s a %s !',
	'err_fsize_too_large' => 'El fitxer que voleu carregar és massa gran (la mida màxima és de %s x %s)',
	'err_imgsize_too_large' => 'La imatge que voleu carregar és massa gran (la mida màxima és de %s KB)',
	'err_invalid_img' => 'El fitxer que voleu carregar no és una imatge vàlida',
	'allowed_img_types' => 'Només podeu pujar %s imatges.',
	'err_insert_pic' => 'El fitxer \'%s\' no pot ser inserit a l\'àlbum ',
	'upload_success' => 'El vostre fitxer s\'ha carregat amb èxit<br /><br />Serà visible després de l\'aprovació dels administradors.',
	'notify_admin_email_subject' => '%s - Notificació de fitxer carregat', //cpg1.3.0
	'notify_admin_email_body' => 'Una imatge ha estat carregada per %s i necessita la vostre aprovació. Veure %s', //cpg1.3.0
	'info' => 'Informació',
	'com_added' => 'Comentari afegit',
	'alb_updated' => 'Àlbum actualitzat',
	'err_comment_empty' => 'El vostre comentari és buit!',
	'err_invalid_fext' => 'Només s\'accepten fitxers amb les següents extensions : <br /><br />%s.',
	'no_flood' => 'Com el vostre comentari és el darrer introduït per aquest fitxer<br /><br />podeu efectuar les modificacions que volgueu',
	'redirect_msg' => 'Esteu sent redirigits.<br /><br /><br />Feu un clic \'CONTINUAR\' si la pàgina no es refresca automàticament',
	'upl_success' => 'El fitxer s\'ha afegit amb èxit',
	'email_comment_subject' => 'Comentari afegit la Galeria Coppermine', //cpg1.3.0
	'email_comment_body' => 'Algun usuari ha afegit un comentari a la vostre galeria. Veure', //cpg1.3.0
  	'album_not_selected' => 'Àlbum no seleccionat', //cpg1.4
  	'com_author_error' => 'Un usuari registrat esta fent servir aquest nom, entreu amb altre nom', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
	'caption' => 'Títol',
	'fs_pic' => 'mida màxima de la imatge',
	'del_success' => 'esborrat amb èxit',
	'ns_pic' => 'mida de la imatge',
	'err_del' => 'no es pot esborrar',
	'thumb_pic' => 'miniatura',
	'comment' => 'comentari',
	'im_in_alb' => 'imatges a l\'àlbum',
	'alb_del_success' => 'Àlbum \'%s\' esborrat',
	'alb_mgr' => 'Gestor d\'àlbums',
	'err_invalid_data' => 'Dades rebudes no vàlides \'%s\'',
	'create_alb' => 'Creant l\'àlbum \'%s\'',
	'update_alb' => 'Actualizant l\'àlbum \'%s\' amb el títol \'%s\' i l\'índex \'%s\'',
	'del_pic' => 'Esborra el fitxer',
	'del_alb' => 'Esborra l\'àlbum',
	'del_user' => 'Esborra l\'usuari/ària',
	'err_unknown_user' => 'L\'usuari/ària seleccionat no existeix!',
  	'err_empty_groups' => 'No hi ha taula de grups, o la taula de grups està buida!', //cpg1.4
	'comment_deleted' => 'Comentari esborrat amb èxit',
  	'npic' => 'Imatge', //cpg1.4
  	'pic_mgr' => 'Gestor d\'imatges', //cpg1.4
  	'update_pic' => 'Actualizant la imatge \'%s\' amb el nom del fitxer \'%s\' i l\'índex \'%s\'', //cpg1.4
  	'username' => 'Nom d\'usuari', //cpg1.4
  	'anonymized_comments' => 'El comentari/s %s ara és anònim', //cpg1.4
  	'anonymized_uploads' => 'El fitxer/s carregat %s ara és anònim', //cpg1.4
  	'deleted_comments' => '%s comentari(s) esborrat', //cpg1.4
  	'deleted_uploads' => '%s fitxer/s carregat esborrat', //cpg1.4
  	'user_deleted' => 'usuari/ària %s esborrat', //cpg1.4
  	'activate_user' => 'Activa l\'usuari/ària', //cpg1.4
  	'user_already_active' => 'El compte es troba actiu', //cpg1.4
  	'activated' => 'Activat', //cpg1.4
  	'deactivate_user' => 'Desactiva l\'usuari', //cpg1.4
  	'user_already_inactive' => 'El compte es troba inactiu', //cpg1.4
  	'deactivated' => 'Desactivat', //cpg1.4
  	'reset_password' => 'Reinicia la contrasenya', //cpg1.4
  	'password_reset' => 'Contrasenya reiniciada a %s', //cpg1.4
  	'change_group' => 'Canvia el grup primari', //cpg1.4
  	'change_group_to_group' => 'Canviant de %s a %s', //cpg1.4
  	'add_group' => 'Afegeix un grup secundari', //cpg1.4
  	'add_group_to_group' => 'Afegint l\'usuari/ària %s al grup %s. Ara es membre del grup primari %s i del grup(s) secundari %s', //cpg1.4
  	'status' => 'Estat', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File displayecard.php
// ------------------------------------------------------------------------- //

if (defined('DISPLAYECARD_PHP')) {

$lang_displayecard_php = array(
  	'invalid_data' => 'La informació de la postal a la que esteu intentat accedir ha estat corrompuda pel vostre client de correu. Verifiqueu que l\'enllaç és correcte', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File displayimage.php
// ------------------------------------------------------------------------- //

if (defined('DISPLAYIMAGE_PHP')){

$lang_display_image_php = array(
	'confirm_del' => 'Esteu segur/a de voler esborrar aquest fitxer? \\nEls comentaris també seran suprimits',
	'del_pic' => 'ESBORRA AQUEST FITXER',
	'size' => '%s x %s píxels',
	'views' => '%s vegades',
	'slideshow' => 'Projector de diapositives',
	'stop_slideshow' => 'ATURA EL PROJECTOR DE DIAPOSITIVES',
	'view_fs' => 'Cliqueu aquí per veure la imatge a la mida màxima',
	'edit_pic' => 'Edita la descripció', //cpg1.3.0
	'crop_pic' => 'Escapça i gira', //cpg1.3.0
  	'set_player' => 'Canvia el reproductor',
);

$lang_picinfo = array(
	'title' =>'Informació del fitxer',
	'Filename' => 'Nom del fitxer',
	'Album name' => 'Nomb de l\'àlbum',
	'Rating' => 'Valoració (%s vots)',
	'Keywords' => 'Paraules clau',
	'File Size' => 'Mida del fitxer',
  	'Date Added' => 'Data de creació', //cpg1.4
	'Dimensions' => 'Dimensions',
	'Displayed' => 'Visualitzat',
  	'URL' => 'URL', //cpg1.4
  	'Make' => 'Fet', //cpg1.4
  	'Model' => 'Model', //cpg1.4
  	'DateTime' => 'Data i hora', //cpg1.4
  	'DateTimeOriginal' => 'Data de la captura', //cpg1.4
  	'ISOSpeedRatings'=>'ISO', //cpg1.4
  	'MaxApertureValue' => 'Obertura màxima', //cpg1.4
	'Focal length' => 'Longitud focal',
	'Comment' => 'Comentari',
	'addFav'=>'Afegeix als preferits',
	'addFavPhrase'=>'Preferits',
	'remFav'=>'Treu dels preferits',
	'iptcTitle'=>'IPTC - Títol', //cpg1.3.0
	'iptcCopyright'=>'IPTC - Copyright', //cpg1.3.0
	'iptcKeywords'=>'IPTC - Paraules clau', //cpg1.3.0
	'iptcCategory'=>'IPTC - Categoria', //cpg1.3.0
	'iptcSubCategories'=>'IPTC - Subcategories', //cpg1.3.0
  	'ColorSpace' => 'Espai del color', //cpg1.4
  	'ExposureProgram' => 'Programa d\'exposició', //cpg1.4
  	'Flash' => 'Flash', //cpg1.4
  	'MeteringMode' => 'Mode mètric', //cpg1.4
  	'ExposureTime' => 'Temps d\'exposició', //cpg1.4
  	'ExposureBiasValue' => 'Biaix d\'exposición', //cpg1.4
  	'ImageDescription' => 'Descripció de la imatge', //cpg1.4
  	'Orientation' => 'Orientació', //cpg1.4
  	'xResolution' => 'Resolució en X', //cpg1.4
  	'yResolution' => 'Resolució en Y', //cpg1.4
  	'ResolutionUnit' => 'Unitats de resolució', //cpg1.4
  	'Software' => 'Programari', //cpg1.4
  	'YCbCrPositioning' => 'Posicionament YCbCr', //cpg1.4
  	'ExifOffset' => 'Desviació EXIF', //cpg1.4
  	'IFD1Offset' => 'Desviació IFD1', //cpg1.4
  	'FNumber' => 'Número F', //cpg1.4
  	'ExifVersion' => 'Versió d\'EXIF ', //cpg1.4
  	'DateTimeOriginal' => 'Data i hora originals', //cpg1.4
  	'DateTimedigitized' => 'Data i hora de la digitalització', //cpg1.4
  	'ComponentsConfiguration' => 'Configuració dels components', //cpg1.4
  	'CompressedBitsPerPixel' => 'Compressió (Bits per píxel)', //cpg1.4
  	'LightSource' => 'Font de llum', //cpg1.4
  	'ISOSetting' => 'Configuració ISO', //cpg1.4
  	'ColorMode' => 'Mode de color', //cpg1.4
  	'Quality' => 'Qualitat', //cpg1.4
  	'ImageSharpening' => 'Agudesa de la imatge', //cpg1.4
  	'FocusMode' => 'Mode d\'enfocament', //cpg1.4
  	'FlashSetting' => 'Configuració del Flash', //cpg1.4
  	'ISOSelection' => 'Selecció de la ISO', //cpg1.4
  	'ImageAdjustment' => 'Ajustament de la imatge', //cpg1.4
  	'Adapter' => 'Adaptador', //cpg1.4
  	'ManualFocusDistance' => 'Distància d\'enfocament manual', //cpg1.4
  	'DigitalZoom' => 'Apropament digital', //cpg1.4
  	'AFFocusPosition' => 'Posición del focus AF', //cpg1.4
  	'Saturation' => 'Saturació', //cpg1.4
  	'NoiseReduction' => 'Reducció de soroll', //cpg1.4
  	'FlashPixVersion' => 'Versión del Flash Pix', //cpg1.4
  	'ExifImageWidth' => 'Amplada de la imatge per EXIF', //cpg1.4
  	'ExifImageHeight' => 'Alçada de la imatge per EXIF', //cpg1.4
  	'ExifInteroperabilityOffset' => 'Desviació d\'interoperabilitat EXIF', //cpg1.4
  	'FileSource' => 'Font del fitxer', //cpg1.4
  	'SceneType' => 'Tipus d\'escena', //cpg1.4
  	'CustomerRender' => 'Representació personalitzada', //cpg1.4
  	'ExposureMode' => ' Mode d\'exposició', //cpg1.4
  	'WhiteBalance' => 'Balanç de blancs', //cpg1.4
  	'DigitalZoomRatio' => 'Relació de l\'apropament digital', //cpg1.4
  	'SceneCaptureMode' => 'Mode de captura d\'escenes', //cpg1.4
  	'GainControl' => 'Control de guany', //cpg1.4
  	'Contrast' => 'Contrast', //cpg1.4
  	'Saturation' => 'Saturació', //cpg1.4
  	'Sharpness' => 'Agudesa', //cpg1.4
  	'ManageExifDisplay' => 'Administra la visualització EXIF', //cpg1.4
  	'submit' => 'Tramet', //cpg1.4
  	'success' => 'La informació s\'ha actualitzat amb èxit', //cpg1.4
  	'details' => 'Detalls', //cpg1.4
);

$lang_display_comments = array(
	'OK' => 'D\'acord',
	'edit_title' => 'Edita el comentari',
	'confirm_delete' => '¿Esteu segur/a de que voleu esborrar el comentari?',
	'add_your_comment' => 'Afegeix un comentari',
	'name'=>'Nom',
	'comment'=>'Comentari',
	'your_name' => 'Anònim',
  	'report_comment_title' => 'Avisa a l\'administrador/a de l\'existència d\'aquest comentari', //cpg1.4
);

$lang_fullsize_popup = array(
	'click_to_close' => 'Clica a la imatge per tancar aquesta finestra',
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
	'title' => 'Envia una postal',
	'invalid_email' => '<strong>Atenció</strong>: L\'adreça de correu electrònic és incorrecta!',
	'ecard_title' => 'Un postal de %s per a tu',
	'error_not_image' => 'Només es poden crear postals amb imatges', //cpg1.3.0
	'view_ecard' => 'Si la imatge no es veu correctament, clica aquest enllaç',
  	'view_ecard_plaintext' => 'Per veure la postal, copieu i enganxeu aquest URL a la barra d\'adreces del vostre navegador:', //cpg1.4
	'view_more_pics' => 'Cliqueu aquí per veure més imatges!',
	'send_success' => 'S\'ha enviat la postal',
	'send_failed' => 'El servidor no ha pogut enviar la postal ...',
	'from' => 'De',
	'your_name' => 'El vostre nom',
	'your_email' => 'La vostra adreça de correu electrònic',
	'to' => 'Per a',
	'rcpt_name' => 'Nom del destinatari',
	'rcpt_email' => 'Adreça de correu electrònic del destinatari',
	'greetings' => 'Títol del missatge',
	'message' => 'Missatge',
  	'ecards_footer' => 'Enviat per %s des de la IP %s a les %s (hora del servidor de la galeria)', //cpg1.4
  	'preview' => 'Vista preliminar de la postal', //cpg1.4
  	'preview_button' => 'Vista preliminar', //cpg1.4
  	'submit_button' => 'Envia la postal', //cpg1.4
  	'preview_view_ecard' => 'Aquest és l\'enllaç alternatiu a la postal, que estarà actiu quan aquesta s\'hagi generat. No funciona a la vista preliminar', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File report_file.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('REPORT_FILE_PHP') || defined('DISPLAYREPORT_PHP')) $lang_report_php =array(
  	'title' => 'Informes per a l\'administrador/a', //cpg1.4
  	'invalid_email' => '<strong>Advertència</strong>: L\'adreça de correu electrònic no és vàlida!', //cpg1.4
  	'report_subject' => 'Informe de %s a la galeria %s', //cpg1.4
  	'view_report' => 'Enllaç alternatiu si l\'informe no es pot visualitzar correctament', //cpg1.4
	'view_report_plaintext' => 'Per veure l\'informe, copieu i enganxeu aquest URL a la barra d\'adreces del vostre navegador:', //cpg1.4
  	'view_more_pics' => 'galeria', //cpg1.4
  	'send_success' => 'El vostre informe s\'ha enviat correctament', //cpg1.4
  	'send_failed' => 'El servidor no ha pogut enviar l\'informe ...', //cpg1.4
  	'from' => 'De', //cpg1.4
  	'your_name' => 'El vostre nom', //cpg1.4
  	'your_email' => 'La vostra adreça de correu electrònic', //cpg1.4
  	'to' => 'Per a', //cpg1.4
  	'administrator' => 'Administrador/a o moderador/a', //cpg1.4
  	'subject' => 'Assumpte', //cpg1.4
  	'comment_field_name' => 'Informant d\'un comentari de "%s"', //cpg1.4
  	'reason' => 'Motiu', //cpg1.4
  	'message' => 'Missatge', //cpg1.4
  	'report_footer' => 'Enviat per %s des de la IP %s a les %s (Hora del servidor de la galeria)', //cpg1.4
  	'obscene' => 'obscè', //cpg1.4
  	'offensive' => 'ofensiu', //cpg1.4
  	'misplaced' => 'mal ubicat', //cpg1.4
  	'missing' => 'perdut', //cpg1.4
  	'issue' => 'error/no es pot visualitzar', //cpg1.4
  	'other' => 'un altre', //cpg1.4
  	'refers_to' => 'L\'informe es refereix a', //cpg1.4
  	'reasons_list_heading' => 'raó(ns) per a l\'informe:', //cpg1.4
  	'no_reason_given' => 'no s\'ha donat cap raó', //cpg1.4
  	'go_comment' => 'Vés al comentari', //cpg1.4
  	'view_comment' => 'Mostra l\'informe complet, incloent el comentari', //cpg1.4
  	'type_file' => 'fitxer', //cpg1.4
  	'type_comment' => 'comentari', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
	'pic_info' => 'Informació',
	'album' => 'Àlbum',
	'title' => 'Títol',
  	'filename' => 'Nom del fitxer', //cpg1.4
	'desc' => 'Descripció',
	'keywords' => 'Paraules clau',
  	'new_keyword' => 'Nova paraula clau', //cpg1.4
  	'new_keywords' => 'Noves paraules clau', //cpg1.4
  	'existing_keyword' => 'Paraula clau existent', //cpg1.4
	'pic_info_str' => '%sx%s - %skB - %s visualitzacions - %s vots',
	'approve' => 'Aprova el fitxer',
	'postpone_app' => 'Posposa l\'aprovació',
	'del_pic' => 'Esborra el fitxer',
  	'del_all' => 'Esborra tots els fitxers', //cpg1.4
	'read_exif' => 'Torna a llegir les dades EXIF', //cpg1.3.0
	'reset_view_count' => 'Posa a zero el comptador de visualitzacions',
  	'reset_all_view_count' => 'Posa a zero tots els comptadors de visualitzacions', //cpg1.4
	'reset_votes' => 'Posa a zero els vots',
  	'reset_all_votes' => 'Posa a zero tots els vots', //cpg1.4
	'del_comm' => 'Esborra els comentaris',
  	'del_all_comm' => 'Esorra tots els comentaris', //cpg1.4
	'upl_approval' => 'Aprova fitxers afegits',
	'edit_pics' => 'Edita imatges',
	'see_next' => 'Mostra els fitxers següents',
	'see_prev' => 'Mostra els fitxers anteriors',
	'n_pic' => '%s fitxer(s)',
	'n_of_pic_to_disp' => 'Nombre de fitxers a mostrar',
	'apply' => 'Valida els canvis',
	'crop_title' => 'Editor d\'imatges Coppermine', //cpg1.3.0
	'preview' => 'Vista prèvia', //cpg1.3.0
	'save' => 'Desa la imatge', //cpg1.3.0
	'save_thumb' =>'Desa com a imatge en miniatura', //cpg1.3.0
  	'gallery_icon' => 'Estableix com a la meva icona', //cpg1.4
	'sel_on_img' =>'La selecció ha d\'estar en la seva totalitat dins de la imatge!', //js-alert //cpg1.3.0
  	'album_properties' =>'Propietats de l\'àlbum', //cpg1.4
  	'parent_category' =>'categoria pare', //cpg1.4
  	'thumbnail_view' =>'Vista en miniatura', //cpg1.4
  	'select_unselect' =>'selecciona\'ls/deselecciona\'ls tots', //cpg1.4
  	'file_exists' => "El fitxer de destinació '%s' ja existeix", //cpg1.4
  	'rename_failed' => "No es pot canviar el nom de '%s' a '%s'", //cpg1.4
  	'src_file_missing' => "No es troba el fitxer original '%s'", // cpg 1.4
  	'mime_conv' => "No es pot convertir el fitxer de '%s' a '%s'",//cpg1.4
	'forb_ext' => 'Extensió de fitxer no permesa',//cpg1.4
);

// ------------------------------------------------------------------------- //
// File faq.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('FAQ_PHP')) $lang_faq_php = array(
  'faq' => 'Preguntes més freqüents', //cpg1.3.0
  'toc' => 'Índex de continguts', //cpg1.3.0
  'question' => 'Pregunta: ', //cpg1.3.0
  'answer' => 'Resposta: ', //cpg1.3.0
);

if (defined('FAQ_PHP')) $lang_faq_data = array(
  'Qüestions generals', //cpg1.3.0
  array('Per què m\'he de registrar?', 'El registre pot ser o no requerit per l\'administrador/a. El registre proporciona funcionalitats addicionals tals com l\'enviament de fitxers, la possibilitat de crear una llista de preferits, la puntuació de les imatges, l\'enviament de comentaris, etc.', 'allow_user_registration', '0'), //cpg1.3.0
  array('Com em puc registrar?', 'Cliqueu a &quot;Registrar-se&quot; i ompliu tots els camps requerits (i, si voleu, també els opcionals).<br />Si l\'administrador/a té activada la validació del correu electrònic, en enviar les dades rebreu un missatge a l\'adreça que heu indicat durant el registre, on s\'explica com activar el compte (només cal clicar un enllaç). Fins que no activeu el compte, no podreu entrar com a usuari/ària registrat', 'allow_user_registration', '1'), //cpg1.3.0
  array('Com puc entrar?', 'Cliqueu a &quot;Entra&quot;, indiqueu el vostre nom d\'usuari i contrasenya i marqueu &quot;Recorda\'m&quot; si voleu que el vostre ordinador recordi aquesta informació la propera vegada que visiteu la galeria.<br /><strong>IMPORTANT: Les galetes han d\'estar activades en el navegador i no s\'han d\'esborrar si voleu que l\'opció &quot;Recorda\'m&quot; funcioni</strong>', 'offline', 0), //cpg1.3.0
  array('Per què no puc entrar?', 'Us heu registrat i heu clicat l\'enllaç del correu electrònic de confirmació que se us va enviar?. Això hauria d\'haver activat el vostre compte. Si no és així, contacteu amb l\'administrador/a del sistema', 'offline', 0), //cpg1.3.0
  array('Què succeeix si oblido la contrasenya?', 'Si la galeria té l\'opció de &quot;He oblidat la contrasenya&quot; haureu d\'accedir-hi i seguir les indicacions. En cas contrari, haureu de contactar amb l\'administrador/a per a que us en doni una altra', 'offline', 0), //cpg1.3.0
  //array('¿Qué pasa si he cambiado mi dirección de email?', 'Simplemente haz login y cambia tu dirección de email desde &quot;Mi Perfil&quot;', 'offline', 0), //cpg1.3.0
  array('Com puc desar una imatge als &quot;Preferits&quot;?', 'Cliqueu a la imatge i després a la icona de &quot;Mostra la informació del fitxer&quot; (<img src="images/info.gif" width="16" height="16" border="0" alt="Mostra la informació del fitxer" />); aneu fins al lloc on ha aparegut la informació i cliqueu a &quot;Afegeix als preferits&quot;.<br />L\'administrador/a podria tener activat &quot;Mostra la informació del fitxer&quot; per defecte.<br />IMPORTANT: Les galetes han d\'estar activades en el navegador i no s\'han d\'esborrar', 'offline', 0), //cpg1.3.0
  array('Com puc valorar una imatge?', 'Cliqueu a la miniatura de la imatge, mireu a sota d\'ella i trieu la puntuació', 'offline', 0), //cpg1.3.0
  array('Com puc enviar un comentari a una imatge?', 'Cliqueu a la miniatura de la imatge i mireu a sota d\'ella. Allà podreu escriure el vostre comentari', 'offline', 0), //cpg1.3.0
  array('Com puc afegir una imatge?', 'Cliqueu a &quot;Afegeix un fitxer&quot; i trieu l\'àlbum on voleu afegir la imatge. Cliqueu a &quot;Navega&quot; i seleccioneu la imatge que volgueu del vostre disc dur clicant el botó &quot;Obre&quot; (podeu afegir un títol i una descripció si voleu). Per últim, cliqueu a &quot;Afegeix un nou fitxer&quot;', 'allow_private_albums', 0), //cpg1.3.0
  array('On puc afegir una imatge?', 'Podeu afegir una imatge als àlbums que trobareu a &quot;La meva galeria&quot;. L\'Administrador/a pot haver permès l\'enviament d\'imatges a un o més àlbums de la galeria principal', 'allow_private_albums', 0), //cpg1.3.0
  array('Quins tipus i mides d\'imatges puc afegir?', 'Els tipus permesos són jpg, gif, etc. i les mides les marca l\'administrador/a', 'offline', 0), //cpg1.3.0
  array('Com puc crear, canviar el nom o esborrar un àlbum de &quot;La meva galeria&quot;?', 'Heu d\'accedir en &quot;mode administració&quot;<br />Cliqueu a &quot;Crea/ordena àlbums&quot; i després a &quot;Nou&quot;. Canvieu &quot;Àlbum nou&quot; pel nom que volgueu.<br />També podeu canviar el nom a qualsevol dels àlbums de la vostra galeria.<br />Cliqueu a &quot;Aplica els canvis&quot;', 'allow_private_albums', 0), //cpg1.3.0
  array('Com puc modificar i restringir l\'accés als meus àlbums als altres usuaris?', 'Heu d\'entrar en &quot;mode administració&quot;.<br />Cliqueu a &quot;Modifica els meus àlbums&quot;. A la barra de &quot;modificació d\'àlbums&quot;, trieu el que voleu modificar.<br />Des d\'aquí podeu canviar-li el nom, la descripció, la seva miniatura i restringir qui el pot veure i qui pot enviar comentaris a l\'àlbum.<br />Cliqueu a &quot;Modifica l\'àlbum&quot; per desar els canvis', 'allow_private_albums', 0), //cpg1.3.0
  array('Com puc veure galeries d\'altres usuaris?', 'Aneu a la &quot;Llista d\'àlbums&quot; i trieu &quot;Galeries dels usuaris&quot;', 'allow_private_albums', 0), //cpg1.3.0
  array('Què són les galetes?', 'Les galetes (<em>cookies</em>) són uns petits textos que s\'envien des de la pàgina web i que s\'emmgatzemen en el vostre ordinador.<br />Normalment les galetes serveixen per "recordar" a l\'usuari/ària quan torna a visitar la pàgina, així com per a altres usos', 'offline', 0), //cpg1.3.0
  array('On puc aconseguir aquest programa per a posar-lo a la meva pàgina web?', 'El Coppermine és una galeria multimèdia gratuïta, publicada sota llicencia GNU/GPL. Proporciona un gran nombre de funcionalitats i ha estat adaptada a diverses plataformes i sistemes de continguts. Visiteu el <a href="http://coppermine.sf.net/">web del Coppermine</a> per a saber-ne més i per descarregar el programa.', 'offline', 0), //cpg1.3.0

  'Navegant pel Coppermine', //cpg1.3.0
  array('Què és la &quot;Llista d\'àlbums&quot;?', 'Des de la llista d\'àlbums es pot veure la galeria sencera, amb un enllaç a cada categoria. Les miniatures de les imatges poden ser enllaços directes a les categories', 'offline', 0), //cpg1.3.0
  array('Què és &quot;La meva galeria&quot;?', 'Aquesta funcionalitat permet a l\'usuari/ària crear la seva pròpia galeria i afegir-hi, esborrar o modificar àlbums, així com afegir-hi fitxers', 'allow_private_albums', 0), //cpg1.3.0
  array('Quines són les diferències entre el &quot;mode administració&quot; i el &quot;mode usuari&quot;?', 'En mode administració, l\'usuari/ària pot modificar la seva galeria (així com altres a les que l\'administrador/a corresponent li hagi donat accés)', 'allow_private_albums', 0), //cpg1.3.0
  array('Què és &quot;Afegeix un fitxer&quot;?', 'Aquesta funcionalitat permet a l\'usuari/ària afegir una imatge (la mida i els tipus els defineix l\'administrador/a) dins d\'una galeria seleccionada per l\'usuari/ària o per l\'administrador/a', 'allow_private_albums', 0), //cpg1.3.0
  array('Què són els &quot;Darrers fitxers&quot;?', 'Mostra els darrers fitxers i/o imatges afegits a la galeria', 'offline', 0), //cpg1.3.0
  array('Què són els &quot;Darrers comentaris&quot;?', 'Mostra els darrers comentaris afegits pels usuaris, juntament amb les imatges comentades', 'offline', 0), //cpg1.3.0
  array('Què són els &quot;Més visitats&quot;?', 'Mostra les imatges més vistes pel conjunt d\'usuaris (registrats i visitants)', 'offline', 0), //cpg1.3.0
  array('Què són els &quot;Millor valorats&quot;?', 'Mostra les imatges millor valorades pels usuaris, juntament amb la mitja de la puntuación (per exemple: cinc usuaris han donat un <img src="images/rating3.gif" width="65" height="14" border="0" alt="" />: la imatge tindrà una puntuació mitja de <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> ; si cinc usuaris han puntuat de 1 a 5 (1,2,3,4,5) la mitja resultant serà <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> )<br />Les puntuacions van des de <img src="images/rating5.gif" width="65" height="14" border="0" alt="millor" /> (millor) fins a <img src="images/rating0.gif" width="65" height="14" border="0" alt="pitjor" /> (pitjor)', 'offline', 0), //cpg1.3.0
  array('Què són &quot;Els meus preferits&quot;?', 'Aquesta funcionalitat permet als usuaris marcar una imatge com a preferida a la galeta que es desa a l\'ordinador', 'offline', 0), //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// File forgot_passwd.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) $lang_forgot_passwd_php = array(
  	'forgot_passwd' => 'Recuperació de la contrasenya', //cpg1.3.0
  	'err_already_logged_in' => 'Ja heu entrat!', //cpg1.3.0
  	'enter_email' => 'Introduïu una adreça de correu electrònic', //cpg1.4
  	'submit' => 'Cerca la contrasenya', //cpg1.3.0
  	'illegal_session' => 'La sessió destinada a la recuperació de la contrasenya ha expirat o no és vàlida', //cpg1.4
  	'failed_sending_email' => 'No s\'ha pogut enviar el correu electrònic amb la contrasenya!', //cpg1.3.0
  	'email_sent' => 'S\'ha enviat un correu electrònic amb el vostre nom d\'usuari i la vostra contrasenya nova a %s', //cpg1.4
  	'verify_email_sent' => 'S\'ha enviat un correu electrònic a %s. Si us plau, accediu al vostre correu per completar el procés', //cpg1.4
  	'err_unk_user' => 'L\'usuari/ària seleccionat no existeix!',
  	'account_verify_subject' => '%s - Recuperació de la contrasenya', //cpg1.4
  	'account_verify_body' => 'Ha solicitat la recuperació de la contrasenya. Si voleu continuar el procés per obtenir una contrasenya nova, cliqueu a l\'enllaç següent:

%s', //cpg1.4
  	'passwd_reset_subject' => '%s - La vostra contrasenya nova', //cpg1.4
  	'passwd_reset_body' => 'Aquí teniu les dades que heu sol·licitat:
Usuari/ària: %s
Contrasenya: %s
Cliqueu a %s per a validar-vos', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
	'group_name' => 'Nom del grup',
  	'permissions' => 'Permisos', //cpg1.4
  	'public_albums' => 'Afegeix fitxers a àlbums públics', //cpg1.4
  	'personal_gallery' => 'Galeria personal', //cpg1.4
  	'upload_method' => 'Mètode per pujar fitxers', //cpg1.4
	'disk_quota' => 'Quota de disc',
  	'rating' => 'Valoració', //cpg1.4
  	'ecards' => 'Postals', //cpg1.4
  	'comments' => 'Comentaris', //cpg1.4
  	'allowed' => 'Permès', //cpg1.4
  	'approval' => 'Aprovat', //cpg1.4
  	'boxes_number' => 'Nombre de camps', //cpg1.4
  	'variable' => 'variable', //cpg1.4
  	'fixed' => 'fixe', //cpg1.4
	'apply' => 'Valida els canvis',
	'create_new_group' => 'Crea un grup nou',
	'del_groups' => 'Esborra el grup/s seleccionat',
	'confirm_del' => '¡Atenció: en esborrar un grup els usuaris que hi pertanyen es transfereixen al grup \'Registrat\'!\n\nVoleu continuar?',
	'title' => 'Configura els grups d\'usuaris',
	'num_file_upload'=>'Nombre de fitxers que es poden pujar', //cpg1.3.0
	'num_URI_upload'=>'Nombre de URL que es poden pujar', //cpg1.3.0
  	'reset_to_default' => 'Torna al nom predeterminat (%s) - Recomanat!', //cpg1.4
  	'error_group_empty' => 'La taula del grup està buida!<br /><br />S\'han creat els grups predeterminats. Si us plau, torneu a carregar aquesta pàgina', //cpg1.4
  	'explain_greyed_out_title' => 'Per què aquesta fila està deshabilitada?', //cpg1.4
  	'explain_guests_greyed_out_text' => 'No podeu canviar la configuració d\'aquest grup perquè l\'opció &quot;Permet l\'accés als usuaris sense iniciar la sessió&quot; està a &quot;No&quot; a la pàgina de configuració. L\'única cosa que poden fer els convidats (els membres del grup %s) és entrar (iniciar la sessió), de manera que no se\'ls apliquen les configuracions', //cpg1.4
  	'explain_banned_greyed_out_text' => 'No podeu canviar la configuració del grup %s perquè els seus membres no poden fer res', //cpg1.4
  	'group_assigned_album' => 'S\'ha assignat l\'àlbum/s', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
	'welcome' => 'Benvingut/da!'
);

$lang_album_admin_menu = array(
	'confirm_delete' => 'Esteu segur/a de voler esborrar aquest àlbum? \\nLes fotos i els comentaris també s\'esborraran',
	'delete' => 'Esborra',
	'modify' => 'Modifica',
	'edit_pics' => 'Edita les imatges',
);

$lang_list_categories = array(
	'home' => 'Inicia',
	'stat1' => '<strong>[pictures]</strong> fitxers a <strong>[albums]</strong> àlbums i <strong>[cat]</strong> categories amb <strong>[comments]</strong> comentaris, vists <strong>[views]</strong> vegades',
	'stat2' => '<strong>[pictures]</strong> fitxers a <strong>[albums]</strong> àlbums, vists <strong>[views]</strong> vegades',
	'xx_s_gallery' => 'Galeria de %s',
	'stat3' => '<strong>[pictures]</strong> fitxers a <strong>[albums]</strong> àlbums amb <strong>[comments]</strong> comentaris, vists <strong>[views]</strong> vegades'
);

$lang_list_users = array(
	'user_list' => 'Llista d\'usuaris',
	'no_user_gal' => 'No hi ha usuaris amb permisos per tenir àlbums',
	'n_albums' => '%s àlbum/s',
	'n_pics' => '%s fitxer/s'
);

$lang_list_albums = array(
	'n_pictures' => '%s fitxers',
	'last_added' => ', el darrer afegit el %s',
  	'n_link_pictures' => '%s fitxers enllaçats', //cpg1.4
  	'total_pictures' => '%s fitxers en total', //cpg1.4
);

}

// ------------------------------------------------------------------------- //
// File keywordmgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('KEYWORDMGR_PHP')) $lang_keywordmgr_php = array(
  'title' => 'Gestiona les paraules clau', //cpg1.4
  'edit' => 'Edita', //cpg1.4
  'delete' => 'Esborra', //cpg1.4
  'search' => 'Cerca', //cpg1.4
  'keyword_test_search' => 'Cerca %s a una finestra nova', //cpg1.4
  'keyword_del' => 'Elimina la paraula %s', //cpg1.4
  'confirm_delete' => 'Esteu segur/a de voler esborrar la paraula clau %s de la galeria?', //cpg1.4  // js-alert
  'change_keyword' => 'Canvia la paraula', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
	'login' => 'Entra',
	'enter_login_pswd' => 'Introduïu el nom d\'usuari i la contrasenya',
	'username' => 'Nom d\'usuari',
	'password' => 'Contrasenya',
	'remember_me' => 'Recorda\'m',
	'welcome' => 'Benvingut/da %s ...',
	'err_login' => '*** No s\'ha pogut entrar. Torneu-ho a provar ***',
	'err_already_logged_in' => 'Ja havieu entrat!',
	'forgot_password_link' => 'He oblidat la contrasenya', //cpg1.3.0
  	'cookie_warning' => 'Atenció: el vostre navegador no accepta galetes', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
	'logout' => 'Surt',
	'bye' => 'Fins a la propera, %s ...',
	'err_not_loged_in' => 'No heu entrat al sistema!',
);

// ------------------------------------------------------------------------- //
// File minibrowser.php  //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('MINIBROWSER_PHP')) $lang_minibrowser_php = array(
  	'close' => 'Tanca', //cpg1.4
  	'submit' => 'D\'acord', //cpg1.4
  	'up' => 'Puja un nivell', //cpg1.4
  	'current_path' => 'Camí actual', //cpg1.4
  	'select_directory' => 'Si us plau, trieu un directori', //cpg1.4
  	'click_to_close' => 'Cliqueu a la imatge per tancar aquesta finestra',
);

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
	'upd_alb_n' => 'Modifica l\'àlbum %s',
	'general_settings' => 'Configuració general',
	'alb_title' => 'Títol de l\'àlbum',
	'alb_cat' => 'Categoria de l\'àlbum',
	'alb_desc' => 'Descripció de l\'àlbum',
  	'alb_keyword' => 'Paraula clau de l\'àlbum', //cpg1.4
	'alb_thumb' => 'Imatge en miniatura de l\'àlbum',
	'alb_perm' => 'Permisos per a aquest àlbum',
	'can_view' => 'Poden veure aquest àlbum:',
	'can_upload' => 'Els visitants poden afegir fotos',
	'can_post_comments' => 'Els visitants poden afegir comentaris',
	'can_rate' => 'Els visitants poden valorar les fotos',
	'user_gal' => 'Galeria d\'usuari',
	'no_cat' => '* Sense categoria *',
	'alb_empty' => 'L\'àlbum està buit',
	'last_uploaded' => 'Darrera imatge afegida',
	'public_alb' => 'Tots (àlbum públic)',
	'me_only' => 'Només jo',
	'owner_only' => 'Només el propietari de l\'àlbum (%s)',
	'groupp_only' => 'Membres del grup \'%s\'',
	'err_no_alb_to_modify' => 'No podeu modificar cap àlbum de la base de dades',
	'update' => 'Modifica l\'àlbum',
  	'reset_album' => 'Carrega els valors inicials de l\'àlbum', //cpg1.4
  	'reset_views' => 'Torna els comptadors de visualitzacions a &quot;0&quot; a %s', //cpg1.4
  	'reset_rating' => 'Esborra els vots de tots els fitxers a %s', //cpg1.4
  	'delete_comments' => 'Esborra tots els comentaris fets a %s', //cpg1.4
  	'delete_files' => 'No es pot desfer %s l\'esborrament de tots els fitxers a %s', //cpg1.4
  	'views' => 'Visualitzacions', //cpg1.4
  	'votes' => 'vots', //cpg1.4
  	'comments' => 'comentaris', //cpg1.4
  	'files' => 'fitxers', //cpg1.4
  	'submit_reset' => 'Desa els canvis', //cpg1.4
  	'reset_views_confirm' => 'Estic segur/a', //cpg1.4
	'notice1' => '(*) depenent de la configuració de %sgrups%s', //cpg1.3.0 (do not translate %s!)
  	'alb_password' => 'Contrasenya de l\'àlbum', //cpg1.4
  	'alb_password_hint' => 'Recordatori de la contrasenya de l\'àlbum', //cpg1.4
  	'edit_files' =>'Edita els fitxers', //cpg1.4
  	'parent_category' =>'categoria pare', //cpg1.4
  	'thumbnail_view' =>'Vista en miniatura', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File phpinfo.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('PHPINFO_PHP')) $lang_phpinfo_php = array(
  	'php_info' => 'Informació del PHP', //cpg1.3.0
  	'explanation' => 'Aquesta és la informació obtinguda per la funció <a href="http://www.php.net/phpinfo">phpinfo()</a>.', //cpg1.3.0
  	'no_link' => 'La informació del PHP pot ser utilitzada per usuaris malintencionats per comprometre la seguretat de la pàgina web, per aquesta raó, aquesta pàgina només és visible pels administradors. Si envieu un enllaç a aquesta pàgina a algú que no sigui administrador/a no hi podrà accedir', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File picmgr.php //cpg1.4
// ------------------------------------------------------------------------- //
if (defined('PICMGR_PHP')) $lang_picmgr_php = array(
  	'pic_mgr' => 'Administració de les imatges', //cpg1.4
  	'select_album' => 'Seleccioneu un àlbum', //cpg1.4
  	'delete' => 'Elimina', //cpg1.4
  	'confirm_delete1' => 'Esteu segur/a de que voleu esborrar aquesta imatge?', //cpg1.4
  	'confirm_delete2' => '\nLa imatge s\'esborrarà permanentment', //cpg1.4
  	'apply_modifs' => 'Aplica els canvis', //cpg1.4
  	'confirm_modifs' => 'Confirma els canvis', //cpg1.4
  	'pic_need_name' => 'Les imatges han de tenir un títol', //cpg1.4
  	'no_change' => 'No heu fet cap canvi', //cpg1.4
  	'no_album' => '* Cap àlbum *', //cpg1.4
  	'explanation_header' => 'L\'ordenació personalitzada que s\'especifica en aquesta pàgina només es tindrà en compte si ', //cpg1.4
  	'explanation1' => 'L\'administrador/a ha marcat l\'opció "Ordre predeterminat dels fitxers" a la configuració "Descendent" o "Ascendent" (configuració global per a tots els usuaris que no han triat una altra opció)', //cpg1.4
  	'explanation2' => 'L\'usuari/ària ha triat "Descendent" o "Ascendent" a la pàgina de vistes en miniatura (via configuració de l\'usuari/ària)', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File pluginmgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('PLUGINMGR_PHP')){

$lang_pluginmgr_php = array(
  	'confirm_uninstall' => 'Esteu segur/a de que voleu desinstal·lar aquest connector?', //cpg1.4
  	'confirm_delete' => 'Esteu segur/a de que voleu esborrar aquest connector?', //cpg1.4
  	'pmgr' => 'Administració dels connectors', //cpg1.4
  	'name' => 'Nom', //cpg1.4
  	'author' => 'Autor/a:', //cpg1.4
  	'desc' => 'Descripció:', //cpg1.4
  	'vers' => 'v', //cpg1.4
  	'i_plugins' => 'Connectors instal·lats', //cpg1.4
  	'n_plugins' => 'Connectors no instal·lats', //cpg1.4
  	'none_installed' => 'No hi ha cap connector instal·lat', //cpg1.4
  	'operation' => 'Operació', //cpg1.4
  	'not_plugin_package' => 'El fitxer que heu pujat no es reconeix com a paquet de connectors', //cpg1.4
  	'copy_error' => 'No s\'ha pogut copiar al directori dels connectors', //cpg1.4
  	'upload' => 'Puja', //cpg1.4
  	'configure_plugin' => 'Configura el connector', //cpg1.4
  	'cleanup_plugin' => 'Neteja el connector', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
	'already_rated' => 'Ja havíeu votat aquest fitxer amb anterioritat',
	'rate_ok' => 'El vostre vot s\'ha comptabilitzat',
	'forbidden' => 'No podeu votar les vostres imatges', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
Tot i que els administradors de {SITE_NAME} esborraran o editaran qualsevol material desagradable tan aviat com en tinguin constància, no és possible revisar tots els enviaments que es realitzen. Per això heu de tenir en compte que tots els enviaments fets a aquesta galeria expressen el punt de vista i les opinions dels seus autors i no els dels administradors i els responsables (a excepció dels afegits per ells mateixos).<br />
<br />
Vos comprometeu a no afegir cap material abusiu, obscè, vulgar, escandalós, amenaçador, que fomenti l´odi, d´orientació sexual o cap altre tipus que pugui violar qualsevol llei aplicable. Autoritzeu als administradors i als responsables de { SITE_NAME } a treure o corregir qualsevol contingut en qualsevol moment si ho consideren oportú. Com a usuari/ària, accediu a que qualsevol informació enviada sigui emmagatzemada a una base de dades. Aquesta informació no serà divulgada a tercers sense el vostre consentiment. Els administradors no es fan responsables de cap intent de destrucció de la base de dades que pugui conduir a la pèrdua de la mateixa.<br />
<br />
Aquest lloc web fa servir galetes per emmagatzemar informació en el vostre ordinador. Aquestes galetes serveixen per millorar la navegació. L´adreça de correu electrònic només es fa servir per confirmar les dades del registre.<br />
<br />
Clicant a 'Estic d´acord' expresseu la vostra conformitat amb aquestes condicions.
EOT;

$lang_register_php = array(
	'page_title' => 'Creació d\'un compte d\'usuari',
	'term_cond' => 'Termes i condicions',
	'i_agree' => 'Hi estic d\'acord',
	'submit' => 'Envia la sol·licitud de creació d\'un compte',
	'err_user_exists' => 'El nom d\'usuari ja existeix. Si us plau, indiqueu-ne un de diferent',
	'err_password_mismatch' => 'Les dues contrasenyes no són iguals. Si us plau, torneu-les a introduir',
	'err_uname_short' => 'El nom d\'usuari ha de tenir 2 caràcters de longitud com a mínim',
	'err_password_short' => 'La contrasenya ha de tenir 2 caràcters de longitud com a mínim',
	'err_uname_pass_diff' => 'El nom d\'usuari i la contrasenya han de ser diferents',
	'err_invalid_email' => 'L\'adreça de correu electrònic no és vàlida',
	'err_duplicate_email' => 'Ja hi ha un usuari/ària registrat amb aquesta adreça de correu electrònic',
	'enter_info' => 'Introduïu la informació de registre',
	'required_info' => 'Informació requerida',
	'optional_info' => 'Informació opcional',
	'username' => 'Nom d\'usuari',
	'password' => 'Contrasenya',
	'password_again' => 'Repetiu la contrasenya',
	'email' => 'Correu electrònic',
	'location' => 'Localitat',
	'interests' => 'Interessos',
	'website' => 'Pàgina web',
	'occupation' => 'Ocupació',
	'error' => 'S\'ha produït un error',
	'confirm_email_subject' => '%s - Confirmació de registre',
	'information' => 'Informació',
	'failed_sending_email' => 'No s\'ha pogut enviar el correu electrònic de confirmació del registre',
	'thank_you' => 'Gràcies per registrar-vos<br /><br />S\'ha enviat un correu electrònic amb informació sobre com activar el compte a l\'adreça indicada durant el registre',
	'acct_created' => 'S\'ha creat el compte d\'usuari. L\'heu d\'activar per a poder entrar',
	'acct_active' => 'El vostre compte d\'usuari s\'ha activat. A partir d\'ara ja podeu accedir al sistema introduint el vostre nom d\'usuari i la vostra contrasenya',
	'acct_already_act' => 'El vostre compte d\'usuari ja estava actiu',
	'acct_act_failed' => 'No s\'ha pogut activar el compte',
	'err_unk_user' => 'El nom d\'usuari indicat no existeix',
	'x_s_profile' => 'Perfil de %s',
	'group' => 'Grup',
	'reg_date' => 'Data d\'alta',
	'disk_usage' => 'Utilització del disc',
	'change_pass' => 'Canvia la contrasenya',
	'current_pass' => 'Contrasenya actual',
	'new_pass' => 'Contrasenya nova',
	'new_pass_again' => 'Repetiu la contrasenya',
	'err_curr_pass' => 'La contrasenya actual indicada no és correcta',
	'apply_modif' => 'Desa els canvis',
	'change_pass' => 'Canvia la contrasenya',
	'update_success' => 'S\'ha actualitzat el vostre perfil',
	'pass_chg_success' => 'S\'ha canviat la contrasenya',
	'pass_chg_error' => 'No s\'ha canviat la contrasenya',
	'notify_admin_email_subject' => '%s - Notificació de registre', //cpg1.3.0
  	'last_uploads' => 'Darrer fitxer enviat<br />Cliqueu per veure tots els fitxers enviats per', //cpg1.4
  	'last_comments' => 'Darrer comentari<br />Cliqueu per veure tots els comentaris fer per', //cpg1.4
	'notify_admin_email_body' => 'S\'ha creat un usuari/ària nou a la vostra galeria amb el nom "%s"', //cpg1.3.0
  	'pic_count' => 'Fitxers enviats', //cpg1.4
  	'notify_admin_request_email_subject' => '%s - Petició de registre', //cpg1.4
  	'thank_you_admin_activation' => 'Gràcies<br /><br />La vostra sol·licitud d\'activació del compte s\'ha enviat a l\'administrador/a. Rebreu un correu electrònic si és aprovada', //cpg1.4
  	'acct_active_admin_activation' => 'S\'ha activat el compte i s\'ha enviat un correu electrònic a l\'usuari/ària', //cpg1.4
  	'notify_user_email_subject' => '%s - Notificació d\'activació', //cpg1.4
);

$lang_register_confirm_email = <<<EOT
Gràcies per registrar-vos a {SITE_NAME}. El vostre nom d´usuari és "{USER_NAME}" i la vostra contrasenya és "{PASSWORD}"

Per activar el vostre compte heu de clicar l´enllaç que apareix a sota o copiar-lo i enganxar-lo al navegador web.

<a href="{ACT_LINK}">{ACT_LINK}</a>


Rebeu una cordial salutació,

Els administradors de {SITE_NAME}

EOT;

$lang_register_approve_email = <<<EOT
S\´ha registrat un usuari/ària nou a la galeria amb el nom "{USER_NAME}".

Per activar el compte heu de clicar l´enllaç que apareix a sota o copiar-lo i enganxar-lo al navegador web.

<a href="{ACT_LINK}">{ACT_LINK}</a>

EOT;

$lang_register_activated_email = <<<EOT
El vostre compte ha estat aprovat i activat.

Ara podeu entrar a <a href="{SITE_LINK}">{SITE_LINK}</a> utilitzant el nom d´usuari "{USER_NAME}".


Rebeu una cordial salutació,

Els administradors de {SITE_NAME}

EOT;
}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
	'title' => 'Revisa els comentaris',
	'no_comment' => 'No hi ha comentaris per mostrar',
	'n_comm_del' => '%s comentari/s esborrat/s',
	'n_comm_disp' => 'Nombre de comentaris a mostrar',
	'see_prev' => 'Mostra l\'anterior',
	'see_next' => 'Mostra el següent',
	'del_comm' => 'Esborra els comentaris seleccionats',
  	'user_name' => 'Nom', //cpg1.4
  	'date' => 'Data', //cpg1.4
  	'comment' => 'Comentari', //cpg1.4
  	'file' => 'Fitxer', //cpg1.4
  	'name_a' => 'Nom d\'usuari ascendent', //cpg1.4
  	'name_d' => 'Nom d\'usuari descendent', //cpg1.4
  	'date_a' => 'Data ascendent', //cpg1.4
  	'date_d' => 'Data descendent', //cpg1.4
  	'comment_a' => 'Comentari ascendent', //cpg1.4
  	'comment_d' => 'Comentari descendent', //cpg1.4
  	'file_a' => 'Fitxer ascendent', //cpg1.4
  	'file_d' => 'Fitxer descendent', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File search.php - OK
// ------------------------------------------------------------------------- //


if (defined('SEARCH_PHP')) {

$lang_search_php = array(
  	'title' => 'Cerca a tota la galeria', //cpg1.4
  	'submit_search' => 'Cerca', //cpg1.4
  	'keyword_list_title' => 'Llistat de paraules clau', //cpg1.4
  	'keyword_msg' => 'La llista superior no inclou els títols de les fotos ni les descripcions. Proveu de fer una cerca de texte complet',  //cpg1.4
  	'edit_keywords' => 'Edita les paraules clau', //cpg1.4
  	'search in' => 'Cerca a:', //cpg1.4
  	'ip_address' => 'Adreça IP', //cpg1.4
  	'fields' => 'Cerca a', //cpg1.4
  	'age' => 'Antiguitat', //cpg1.4
  	'newer_than' => 'Posterior a', //cpg1.4
  	'older_than' => 'Anterior a', //cpg1.4
  	'days' => 'dies', //cpg1.4
  	'all_words' => 'Coincideixen totes les paraules (I)', //cpg1.4
  	'any_words' => 'Coincideix qualsevol paraula (O)', //cpg1.4
);

$lang_adv_opts = array(
  	'title' => 'Títol', //cpg1.4
  	'caption' => 'Subtítol', //cpg1.4
  	'keywords' => 'paraules clau', //cpg1.4
  	'owner_name' => 'Nom del propietari/ària', //cpg1.4
  	'filename' => 'Nom del fitxer', //cpg1.4
);

}

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
	'page_title' => 'Cerca fitxers nous',
	'select_dir' => 'Selecciona un directori',
	'select_dir_msg' => 'Aquesta funcionalitat permet afegir de manera automàtica els fitxers heu pujat per FTP<br /><br />Seleccioneu el directori on heu pujat els fitxers',
	'no_pic_to_add' => 'No hi ha cap fitxer per afegir',
	'need_one_album' => 'Per poder utilitzar aquesta funcionalitat cal que hi hagi, com a mínim, un àlbum',
	'warning' => 'Atenció',
	'change_perm' => 'La seqüència no pot escriure en aquest directori. Heu de canviar els permisos a 755 o 777 abans de tornar-ho a provar',
	'target_album' => '<strong>Col·loca els fitxers del directorio &quot;</strong>%s<strong>&quot; a l\'àlbum </strong>%s',
	'folder' => 'Directori',
	'image' => 'Imatge',
	'album' => 'Àlbum',
	'result' => 'Resultat',
	'dir_ro' => 'No es pot escriure',
	'dir_cant_read' => 'No es pot llegir',
	'insert' => 'S\'estan afegint els fitxers a la galeria',
	'list_new_pic' => 'Llistat de fitxers nous',
	'insert_selected' => 'Afegeix els fitxers seleccionats',
	'no_pic_found' => 'No s\'ha trobat cap fitxer nou',
	'be_patient' => 'Si us plau, tingueu paciència. La seqüència necessita algun temps per afegir els fitxers',
	'no_album' => 'No hi ha cap àlbum seleccionat',  //cpg1.3.0
  	'result_icon' => 'Feu clic per veure els detalls o per tornar a carregar',  //cpg1.4
	'notes' =>  '<ul>'.
				'<li><strong>OK</strong>: significa que el fitxer s\'ha afegit sense problemes</li>'.
				'<li><strong>DP</strong>: significa que el fitxer està duplicat i ja existeix a la base de dades</li>'.
				'<li><strong>PB</strong>: significa que no es pot afegir el fitxer. Comproveu la configuració i els permisos dels directoris on són els fitxers</li>'.
				'<li><strong>NA</strong>: significa que no s\ha seleccionat un àlbum on afegir els fitxers. Cliqueu \'<a href="javascript:history.back(1)">enrera</a>\' i trieu un àlbum. Si no n\'hi ha cap, primer l\'haureu de <a href="albmgr.php">crear</a></li>'.
				'<li>Si les icones OK, DP, PB i NA no apareixen, cliqueu damunt la icona de la imatge no carregada per veure l\'error produït pel PHP</li>'.
				'<li>Si el navegador exhaureix el temps d\'espera, cliqueu a la icona d\'actualitzar</li>'.
				'</ul>',
	'select_album' => 'Seleccioneu un àlbum', //cpg1.3.0
	'check_all' => 'Marca\'ls tots', //cpg1.3.0
	'uncheck_all' => 'Desmarca\'ls tots', //cpg1.3.0
  	'no_folders' => 'Encara no hi ha cap directori dins del directori "àlbums". Creeu com a mínim un directori i pugeu-hi fitxers per FTP. No heu de tocar els directoris "imatges d\'usuari (userpics)" ni "edita (edit)", que es reserven pels fitxers pujats per HTTP i pel funcionament intern del programa', //cpg1.4
  	'albums_no_category' => 'Àlbums sense categoria', //cpg1.4 // album pulldown mod, added by frogfoot
  	'personal_albums' => '*  Àlbums personals', //cpg1.4 // album pulldown mod, added by frogfoot
  	'browse_batch_add' => 'Interfície navegable (recomenat)', //cpg1.4
  	'edit_pics' => 'Edita els fitxers', //cpg1.4
  	'edit_properties' => 'Propietats de l\'àlbum', //cpg1.4
  	'view_thumbs' => 'Vista en miniatura', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File stat_details.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('STAT_DETAILS_PHP')) $lang_stat_details_php = array(
  	'show_hide' => 'Mostra/oculta aquesta columna', //cpg1.4
  	'vote' => 'Detalls dels vots', //cpg1.4
  	'hits' => 'Detalls de visualitzacions de la imatge', //cpg1.4
  	'stats' => 'Estadístiques dels vots', //cpg1.4
  	'sdate' => 'Data', //cpg1.4
  	'rating' => 'Qualificació', //cpg1.4
  	'search_phrase' => 'Cerca la frase', //cpg1.4
  	'referer' => 'Origen', //cpg1.4
  	'browser' => 'Navegador', //cpg1.4
  	'os' => 'Sistema operatiu', //cpg1.4
  	'ip' => 'IP', //cpg1.4
  	'sort_by_xxx' => 'Ordena per %s', //cpg1.4
  	'ascending' => 'Ascendent', //cpg1.4
  	'descending' => 'Descendent', //cpg1.4
  	'internal' => 'Intern', //cpg1.4
  	'close' => 'Tanca', //cpg1.4
  	'hide_internal_referers' => 'Oculta les referències internes', //cpg1.4
  	'date_display' => 'Mostra la data', //cpg1.4
  	'submit' => 'Tramet', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File thumbnails.php
// ------------------------------------------------------------------------- //

// Void

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) $lang_upload_php = array(
	'title' => 'Afegeix un fitxer nou',
	'custom_title' => 'Formulari personalitzat', //cpg1.3.0
	'cust_instr_1' => 'Heu d\'indicar el nombre de fitxers que es poden pujar, tenint en compte els límits llistats més avall', //cpg1.3.0
	'cust_instr_2' => 'Nombre de camps', //cpg1.3.0
	'cust_instr_3' => 'Nombre de camps per pujar fitxers: %s', //cpg1.3.0
	'cust_instr_4' => 'Nombre de camps per pujar des de URL: %s', //cpg1.3.0
	'cust_instr_5' => 'Nombre de camps per pujar des de URL:', //cpg1.3.0
	'cust_instr_6' => 'Nombre de camps per pujar fitxers:', //cpg1.3.0
	'cust_instr_7' => 'Indiqueu el nombre de camps de cada tipus. En acabar cliqueu a \'Continua\'', //cpg1.3.0
	'reg_instr_1' => 'L\'acció de creació de formularis no és vàlida', //cpg1.3.0
	'reg_instr_2' => 'Heu de pujar els fitxers mitjançant els camps de sota. La mida dels fitxers no pot superar els %s kB cada un. Els fitxers ZIP pujats a les seccions \'Puja fitxers\' i \'Puja URL\' es mantindran comprimits', //cpg1.3.0
	'reg_instr_3' => 'Si voleu descomprimir un fitxer comprimit, heu d\'utilitzar els camps de la secció \'Puja fitxers ZIP i descomprimeix-los\'', //cpg1.3.0
	'reg_instr_4' => 'En indicar URL, feu servir el format http://www.lamevaweb.cat/imatges/exemple.jpg', //cpg1.3.0
	'reg_instr_5' => 'En haver acabat d\'omplir el formulari, cliqueu a \'Continua\'', //cpg1.3.0
	'reg_instr_6' => 'Puja fitxers ZIP i descomprimeix-los:', //cpg1.3.0
	'reg_instr_7' => 'Puja fitxers:', //cpg1.3.0
	'reg_instr_8' => 'Puja URL:', //cpg1.3.0
	'error_report' => 'Informe d\'errors', //cpg1.3.0
	'error_instr' => 'Els fitxers següents han provocat errors:', //cpg1.3.0
	'file_name_url' => 'Nom/URL del fitxer', //cpg1.3.0
	'error_message' => 'Missatge d\'error', //cpg1.3.0
	'no_post' => 'El fitxer no s\'ha pujat per POST', //cpg1.3.0
	'forb_ext' => 'L\'extensió del fitxer no és permesa', //cpg1.3.0
	'exc_php_ini' => 'S\'ha superat la mida màxima permesa pel php.ini', //cpg1.3.0
	'exc_file_size' => 'S\'ha superat la mida màxima permesa pel Coppermine', //cpg1.3.0
	'partial_upload' => 'Pujat parcialment', //cpg1.3.0
	'no_upload' => 'No s\'ha pogut pujar', //cpg1.3.0
	'unknown_code' => 'Codi d\'error del PHP desconegut', //cpg1.3.0
	'no_temp_name' => 'No s\'ha pujat el fitxer - No hi ha fitxer temporal', //cpg1.3.0
	'no_file_size' => 'No conté informació o és corrupta', //cpg1.3.0
	'impossible' => 'No es pot moure', //cpg1.3.0
	'not_image' => 'No és una imatge o és corrupte', //cpg1.3.0
	'not_GD' => 'No és una extensión del GD', //cpg1.3.0
	'pixel_allowance' => 'S\'han superat els píxels permesos', //cpg1.3.0
	'incorrect_prefix' => 'El prefix URL és incorrecte', //cpg1.3.0
	'could_not_open_URI' => 'No s\'ha pogut obrir el URL', //cpg1.3.0
	'unsafe_URI' => 'El URL no és segur', //cpg1.3.0
	'meta_data_failure' => 'S\'ha produït un error en accedir a les metadades', //cpg1.3.0
	'http_401' => '401 No autoritzat', //cpg1.3.0
	'http_402' => '402 Es requereix pagament', //cpg1.3.0
	'http_403' => '403 Prohibit', //cpg1.3.0
	'http_404' => '404 No s\'ha trobat', //cpg1.3.0
	'http_500' => '500 Error intern del servidor', //cpg1.3.0
	'http_503' => '503 Servei no disponible', //cpg1.3.0
	'MIME_extraction_failure' => 'No s\'ha pogut determinar el tipus MIME', //cpg1.3.0
	'MIME_type_unknown' => 'Tipus MIME desconegut', //cpg1.3.0
	'cant_create_write' => 'No s\'ha pogut crear el fitxer', //cpg1.3.0
	'not_writable' => 'El directori no té permís d\'escriptura i no s\'ha pogut desar el fitxer', //cpg1.3.0
	'cant_read_URI' => 'No s\'ha pogut accedir al URL del fitxer', //cpg1.3.0
	'cant_open_write_file' => 'No es pot obrir el URL per desar el fitxer', //cpg1.3.0
	'cant_write_write_file' => 'No es pot escriure al URL', //cpg1.3.0
	'cant_unzip' => 'No s\'ha pot descomprimir el fitxer', //cpg1.3.0
	'unknown' => 'S\'ha produït un error desconegut', //cpg1.3.0
	'succ' => 'El fitxer s\'ha pujat correctament', //cpg1.3.0
	'success' => '%s de fitxers pujats correctament', //cpg1.3.0
	'add' => 'Cliqueu a \'Continua\' per afegir els fitxers a l\'àlbum', //cpg1.3.0
	'failure' => 'S\'ha produït un error en pujar els fitxers', //cpg1.3.0
	'f_info' => 'Informació del fitxer', //cpg1.3.0
	'no_place' => 'El fitxer anterior no s\'ha pogut ubicar', //cpg1.3.0
	'yes_place' => 'El fitxer anterior s\'ha pogut ubicat correctament', //cpg1.3.0
	'max_fsize' => 'La mida màxima de fitxer és de %s kB',
	'album' => 'Àlbum',
	'picture' => 'Fitxer',
	'pic_title' => 'Títol del fitxer',
	'description' => 'Descripció del fitxer',
	'keywords' => 'Paraules clau (separades per espais en blanc)',
  	'keywords_sel' =>'Seleccioneu una paraula clau', //cpg1.4
	'err_no_alb_uploadables' => 'No hi ha cap àlbum no es puguin afegir fitxers',
	'place_instr_1' => 'Indiqueu els àlbums on s\'ubicaran els fitxers. Indiqueu també la informació rellevant', //cpg1.3.0
	'place_instr_2' => 'Hi ha més fitxers per ubicar. Cliqueu a \'Continua\'', //cpg1.3.0
	'process_complete' => 'S\'han ubicat tots els fitxers correctament', //cpg1.3.0
  	'albums_no_category' => 'Àlbums sense categoria', //cpg1.4. //album pulldown mod, added by frogfoot
  	'personal_albums' => '* Àlbums personals', //cpg1.4 //album pulldown mod, added by frogfoot
  	'select_album' => 'Selecciona un àlbum', //cpg1.4 //album pulldown mod, added by frogfoot
  	'close' => 'Tanca', //cpg1.4
  	'no_keywords' => 'La paraula clau no està disponible', //cpg1.4
  	'regenerate_dictionary' => 'Regenera el diccionari', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
  	'memberlist' => 'Llista de membres', //cpg1.4
  	'user_manager' => 'Administració d\'usuaris', //cpg1.4
	'title' => 'Administració d\'usuaris',
	'name_a' => 'Ascendent per nom',
	'name_d' => 'Descendent per nom',
	'group_a' => 'Ascendent per grup',
	'group_d' => 'Descendent per grup',
	'reg_a' => 'Ascendent per data d\'alta',
	'reg_d' => 'Descendent per data d\'alta',
	'pic_a' => 'Ascendent per total de fotos',
	'pic_d' => 'Descendent per total de fotos',
	'disku_a' => 'Ascendent per ús de disc',
	'disku_d' => 'Descendent per ús de disc',
	'lv_a' => 'Ascendent per darrera visita', //cpg1.3.0
	'lv_d' => 'Descendent per darrera visita', //cpg1.3.0
	'sort_by' => 'Ordena els usuaris per',
	'err_no_users' => 'La taula d\'usuaris està buida!',
	'err_edit_self' => 'No podeu editar el vostre perfil. Utilitzeu l\'opció \'El meu perfil d\'usuari\' per fer-ho',
	'edit' => 'EDITA',
  	'with_selected' => 'Seleccionat:', //cpg1.4
	'delete' => 'ESBORRA',
  	'delete_files_no' => 'manté els fitxers públics (passaran a ser anònims)', //cpg1.4
  	'delete_files_yes' => 'esborra també els fitxers públics', //cpg1.4
  	'delete_comments_no' => 'manté els comentaris (passaran a ser anònims)', //cpg1.4
  	'delete_comments_yes' => 'esborra també els comentaris', //cpg1.4
  	'activate' => 'Activa', //cpg1.4
  	'deactivate' => 'Desactiva', //cpg1.4
  	'reset_password' => 'Torna a la contrasenya predeterminada', //cpg1.4
  	'change_primary_membergroup' => 'Canvia el grup primari', //cpg1.4
  	'add_secondary_membergroup' => 'Afegeix un grup secundari', //cpg1.4
	'name' => 'Nom d\'usuari',
	'group' => 'Grup',
	'inactive' => 'Inactiu',
	'operations' => 'Operacions',
	'pictures' => 'Fitxers',
	'disk_space' => 'Espai utilitzat',
	'disk_space_quota' => 'Quota de disc', //cpg1.4
	'registered_on' => 'Registrat/da el dia',
	'last_visit' => 'Darrera visita', //cpg1.3.0
	'u_user_on_p_pages' => '%d usuari/s en %d pàgina/es',
	'confirm_del' => 'Esteu segur de voler esborrar aquest usuari/ària? \\nLes seves imatges i els seus àlbums també s\'esborraran',
	'mail' => 'CORREU',
	'err_unknown_user' => 'L\'usuari/ària seleccionat no existeix!',
	'modify_user' => 'Modifica l\'usuari/ària',
	'notes' => 'Notes',
	'note_list' => '<li>Si no voleu canviar la contrasenya actual, deixeu el camp "contrasenya" buit',
	'password' => 'Contrasenya',
	'user_active' => 'L\'usuari/ària està actiu',
	'user_group' => 'Grup d\'usuaris',
	'user_email' => 'Correu electrònic de l\'usuari/ària',
	'user_web_site' => 'Pàgina web de l\'usuari/ària',
	'create_new_user' => 'Crea un usuari/ària nou',
	'user_location' => 'Localitat',
	'user_interests' => 'Interessos',
	'user_occupation' => 'Ocupació',
  	'user_profile1' => '$user_profile1', //cpg1.4
  	'user_profile2' => '$user_profile2', //cpg1.4
  	'user_profile3' => '$user_profile3', //cpg1.4
  	'user_profile4' => '$user_profile4', //cpg1.4
  	'user_profile5' => '$user_profile5', //cpg1.4
  	'user_profile6' => '$user_profile6', //cpg1.4
	'latest_upload' => 'Darrers enviaments', //cpg1.3.0
	'never' => 'Mai', //cpg1.3.0
  	'search' => 'Cerca de l\'usuari/ària', //cpg1.4
  	'submit' => 'Tramet', //cpg1.4
  	'search_submit' => 'Vés-hi!', //cpg1.4
  	'search_result' => 'Resultats de la cerca per a: ', //cpg1.4
  	'alert_no_selection' => 'Primer heu de seleccionar, com a mínim, un usuari/ària', //cpg1.4 //js-alert
  	'password' => 'Contrasenya', //cpg1.4
  	'select_group' => 'Seleccioneu un grup', //cpg1.4
  	'groups_alb_access' => 'Permisos dels àlbums per grup', //cpg1.4
  	'album' => 'Àlbum', //cpg1.4
  	'category' => 'Categoria', //cpg1.4
  	'modify' => 'Modificar?', //cpg1.4
  	'group_no_access' => 'Aquest grup no té accés', //cpg1.4
  	'notice' => 'Nota', //cpg1.4
  	'group_can_access' => 'Àlbum(s) als que només pot accedir "%s"', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //

if (defined('UTIL_PHP')) {
$lang_util_desc_php = array(
	'Actualitza els títols des d\'un fitxer', //cpg1.4
	'Esborra els títols', //cpg1.4
	'Reconstrueix les vistes en miniatura i les imatges escalades', //cpg1.4
	'Esborra les imatges de mida original i substitueix-les amb la versió escalada', //cpg1.4
	'Esborra les imatges originals i les intermitges per alliberar espai', //cpg1.4
	'Esborra els comentaris orfes', //cpg1.4
	'Torna a llegir les mides dels fitxers i les dimensions (si s\'han editat manualment)', //cpg1.4
	'Posa a zero els comptadors de les més vistes', //cpg1.4
	'Mostra la informació del PHP', //cpg1.4
	'Actualitza la base de dades', //cpg1.4
	'Mostra els fitxers del registre de successos', //cpg1.4
);
$lang_util_php = array(
	'title' => 'Canvi de mida de les imatges',
	'what_it_does' => 'Què fa',
	'file' => 'Fitxer',
  	'problem' => 'Problema', //cpg1.4
  	'status' => 'Estat', //cpg1.4
	'title_set_to' => 'Títol nou',
	'submit_form' => 'Tramet',
	'updated_succesfully' => 'Actualitzat amb èxit',
	'error_create' => 'S\'ha produït un error en crear',
	'continue' => 'Processa més imatges',
	'main_success' => 'El fitxer %s s\'ha utilitzat com a imatge principal correctament',
	'error_rename' => 'S\'ha produït un error en canviar el nom de %s a %s',
	'error_not_found' => 'No s\'ha trobat el fitxer %s',
	'back' => 'Torna al començament',
	'thumbs_wait' => 'S\'estan actualitzant les miniatures i/o les mides de les imatges. Si us plau, espereu ...',
	'thumbs_continue_wait' => 'Continua l\'actualització de les miniatures i/o les mides de les imatges ...',
	'titles_wait' => 'S\'estan actualitzant els títols. Si us plau, espereu ...',
	'delete_wait' => 'S\'estan esborrant els títols. Si us plau, espereu ...',
	'replace_wait' => 'S\'estan esborrant els originals i substituint-los per les imatges noves. Si us plau, espereu ...',
	'instruction' => 'Instruccions ràpides',
	'instruction_action' => 'Seleccioneu una acció',
	'instruction_parameter' => 'Trieu els paràmetres',
	'instruction_album' => 'Seleccioneu l\'àlbum',
	'instruction_press' => 'Premeu %s',
	'update' => 'Actualitza les miniatures i/o les mides de les imatges',
	'update_what' => 'Què s\'ha d\'actualitzar',
	'update_thumb' => 'Només les miniatures',
	'update_pic' => 'Només les mides de les imatges',
	'update_both' => 'Les miniatures i les mides de les imatges (ambdós)',
	'update_number' => 'Nombre d\'imatges processades per cada clic',
	'update_option' => '(Proveu de posar un número més petit si experimenteu problemes d\'expiració del temporitzador)',
	'filename_title' => 'Fitxer &rArr; Títol del fitxer',
	'filename_how' => 'Com ha de ser el fitxer modificat',
	'filename_remove' => 'Treu el .jpg del final i substitueix el caràcter _ (guió baix) per espais',
	'filename_euro' => 'Canvia 2003_11_23_13_20_20.jpg per 23/11/2003 13:20',
	'filename_us' => 'Canvia 2003_11_23_13_20_20.jpg per 11/23/2003 13:20',
	'filename_time' => 'Canvia 2003_11_23_13_20_20.jpg per 13:20',
	'delete' => 'Esborra els títols dels fitxers o imatges de mida original',
	'delete_title' => 'Esborra els títols dels fitxers',
  	'delete_title_explanation' => 'Això esborrarà tots els títols dels fitxers a l\'àlbum especificat', //cpg1.4
	'delete_original' => 'Esborra les imatges de mida original',
  	'delete_original_explanation' => 'Això esborrarà les imatges de mida original', //cpg1.4
  	'delete_intermediate' => 'Esborra les imatges intermitges', //cpg1.4
  	'delete_intermediate_explanation' => 'Això esborrarà les imatges de mida intermitja<br />Ho podeu utilitzar per alliberar espai si heu deshabilitat \'Fes imatges intermitges\' a la configuració després d\'afegir imatges', //cpg1.4
	'delete_replace' => 'Esborra les imatges originals, substituint-les per imatges de la mida nova',
  	'titles_deleted' => 'S\'han esborrat tots els títols a l\'àlbum especificat', //cpg1.4
  	'deleting_intermediates' => 'S\'estan esborrant les imatges intermitges. Si us plau, espereu ...', //cpg1.4
  	'searching_orphans' => 'S\'estan cercant els orfes. Si us plau, espereu ...', //cpg1.4
	'select_album' => 'Selecciona l\'àlbum',
	'delete_orphans' => 'Esborra els comentaris orfes (funciona a tots els àlbums)', //cpg1.3.0
  	'delete_orphans_explanation' => 'Això identificarà i permetrà esborrar qualsevol comentari associat a fitxers que ja no es troben a la galeria<br />Verifica tots els àlbums', //cpg1.4
  	'refresh_db' => 'Torna a carregar la informació de les dimensions i la mida', //cpg1.4
  	'refresh_db_explanation' => 'Això tornarà a llegir les mides dels fitxers i les dimensions. Ho podeu utilitzar si les quotes són incorrectes o si heu canviat els fitxers manualment', //cpg1.4
  	'reset_views' => 'Posa a zero els comptadors de les visites', //cpg1.4
  	'reset_views_explanation' => 'Posa a zero els comptadors de visites per a l\'àlbum especificat', //cpg1.4
	'orphan_comment' => 'Comentaris orfes trobats', //cpg1.3.0
	'delete' => 'Esborra', //cpg1.3.0
	'delete_all' => 'Esborra\'ls tots', //cpg1.3.0
  	'delete_all_orphans' => 'Esborrar els orfes?', //cpg1.4
	'comment' => 'Comentari: ', //cpg1.3.0
	'nonexist' => 'associat a un fitxer que no existeix # ', //cpg1.3.0
	'phpinfo' => 'Mostra la informació del PHP', //cpg1.3.0
  	'phpinfo_explanation' => 'Conté informació tècnica relativa al servidor', //cpg1.4
	'update_db' => 'Actualitza la base de dades', //cpg1.3.0
	'update_db_explanation' => 'Si heu substituït els fitxers del Coppermine, afegit modificacions o actualitzat d\'una versió prèvia del Coppermine, hauríeu d\'executar l\'actualització de la base de dades. Aquesta acció crearà les taules necessàries i/o els valors de configuració a la base de dades', //cpg1.3.0
  	'view_log' => 'Mostra el registre de successos', //cpg1.4
  	'view_log_explanation' => 'El Coppermine pot fer un seguiment d\'algunes de les accions que realitzen els usuaris. Podeu revisar aquests registres si heu activat Registra els successos a la <a href="admin.php">configuració del Coppermine</a>', //cpg1.4
  	'versioncheck' => 'Verifica la versió', //cpg1.4
  	'versioncheck_explanation' => 'Revisa el fitxer de la versió per verificar si l\'actualització ha substituït tots els fitxers que s\'havien d\'actualitzar o si els fitxers font del Coppermine s\'han actualitzat després de l\'aparició d\'un paquet nou', //cpg1.4
  	'bridgemanager' => 'Administració de l\'enllaç', //cpg1.4
  	'bridgemanager_explanation' => 'Activa/Desactiva la integració (enllaç) del Coppermine amb una altra aplicación (ex: un BBS).', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File versioncheck.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('VERSIONCHECK_PHP')) $lang_versioncheck_php = array(
  	'title' => 'Revisió de la versió', //cpg1.4
  	'what_it_does' => 'Aquesta pàgina està dirigida a aquells usuaris que han actualitzat el seu Coppermine. Aquesta seqüència revisa el fitxers del servidor web i determina si les versions dels fitxers i les versions existents en el servidor web http://coppermine.sourceforge.net són iguals. D\'aquesta manera es troben els fitxers que cal actualitzar.<br />Els fitxers que s\'han d\'actualitzar es mostren en vermell. En groc es mostren els que cal revisar i en verd (o del color de font predeterminat) els que són correctes<br />Feu clic a les icones d\'ajuda per saber-ne més', //cpg1.4
  	'online_repository_unable' => 'No s\'ha pogut contactar amb el repositori en línia', //cpg1.4
  	'online_repository_noconnect' => 'El Coppermine no es pot connectar al repositori en línia. Això pot ser degut a dues causes:', //cpg1.4
  	'online_repository_reason1' => 'El repositori del Coppermine no està en funcionament. Per comprovar-ho, intenteu navegar per aquesta pàgina (si no hi podeu accedir, torneu-ho a provar més tard): %s', //cpg1.4
  	'online_repository_reason2' => 'El vostre servidor web està configurat amb %s deshabilitat (per defecte està habilitat). Si teniu accés d\'administració al servidor, activeu aquesta opció al <em>php.ini</em> (o, com a mínim, permeteu que es pugui sobreescriure amb %s). Si el vostres fitxers són a un servidor d\'Internet, probablement no els podreu comparar amb el repositori en línia. Aquesta pàgina només mostra els vostres fitxers (les actualitzacions no es mostraran)', //cpg1.4
  	'online_repository_skipped' => 'No s\'ha connectat al repositori en línia', //cpg1.4
	'online_repository_to_local' => 'Aquesta seqüència mostra la versió dels vostres fitxers. La informació pot no ser precisa si s\'ha actualitzat el Coppermine i no s\'ha revisat la versió.', //cpg1.4
  	'local_repository_unable' => 'No és possible contactar amb el repositori', //cpg1.4
  	'local_repository_explanation' => 'El Coppermine no s\'ha pogut connectar al repositori de fitxers %s.', //cpg1.4
  	'coppermine_version_header' => 'Versió instal·lada del Coppermine', //cpg1.4
  	'coppermine_version_info' => 'La versió que actualment està instal·lada és la %s', //cpg1.4
  	'coppermine_version_explanation' => 'Si creieu que això no és correcte i penseu que esteu utilitzant una versió posterior del Coppermine, és possible que no hàgiu actualitzat el fitxer <em>include/init.inc.php</em>', //cpg1.4
  	'version_comparison' => 'Comparació de versions', //cpg1.4
  	'folder_file' => 'Directori / Fitxer', //cpg1.4
  	'coppermine_version' => 'Versió del Coppermine', //cpg1.4
  	'file_version' => 'Versió del fitxer', //cpg1.4
  	'webcvs' => 'URL del CVS', //cpg1.4
  	'writable' => 'Escrivible', //cpg1.4
  	'not_writable' => 'No escrivible', //cpg1.4
  	'help' => 'Ajuda', //cpg1.4
  	'help_file_not_exist_optional1' => 'El directori o fitxer no existeix', //cpg1.4
  	'help_file_not_exist_optional2' => 'No s\'ha trobat el directori o fitxer %s en el vostre servidor. Tot i que és opcional, si esteu tenint problemes, el podeu pujar al servidor web mitjançant un client FTP', //cpg1.4
  	'help_file_not_exist_mandatory1' => 'El directori o fitxer no existeix', //cpg1.4
  	'help_file_not_exist_mandatory2' => 'No s\'ha trobat el directori o fitxer %s en el vostre servidor, tot i que és necessari pel funcionament del Coppermine. Si us plau, pugeu-lo al servidor web mitjançant un client FTP', //cpg1.4
  	'help_no_local_version1' => 'No s\'ha trobat la versió del Coppermine instal·lat', //cpg1.4
  	'help_no_local_version2' => 'La seqüència no ha pogut determinar la versió del Coppermine mitjançant el fitxer. Pot ser que sigui una versió antiga del fitxer o que l\'hàgiu modificat, esborrant la informació de la capçalera durant el procés. Es recomana actualitzar el fitxer', //cpg1.4
  	'help_local_version_outdated1' => 'La versió instal·lada no està actualitzada', //cpg1.4
  	'help_local_version_outdated2' => 'La versió d\'aquest fitxer correspon a una versió antiga del Coppermine. Possiblement s\'hagi actualitzat el Coppermine i no s\'hagi canviat aquest fitxer. És convenient actualitzar-lo', //cpg1.4
  	'help_local_version_na1' => 'No s\'ha pogut obtenir la información de la versió del repositori CVS', //cpg1.4
  	'help_local_version_na2' => 'La seqüència no ha pogut determinar a quina versió del repositori CVS pertany el fitxer. Es recomana pujar de nou el fitxer', //cpg1.4
  	'help_local_version_dev1' => 'Versió de desenvolupament', //cpg1.4
  	'help_local_version_dev2' => 'El fitxer correspon a una versió posterior a la del vostre Coppermine. O bé esteu utilitzant una versió de desenvolupament (només ho heu de fer si esteu segur/a del que feu), o bé heu actualitzat el vostre Coppermine i no heu pujat el fitxer include/init.inc.php', //cpg1.4
  	'help_not_writable1' => 'No es pot escriure al directori', //cpg1.4
  	'help_not_writable2' => 'Canvieu els permisos (CHMOD) del fitxer per donar a la seqüència accés d\'escriptura al directori %s i tot el seu contingut', //cpg1.4
  	'help_writable1' => 'Es pot escriure al directori', //cpg1.4
  	'help_writable2' => 'Es pot escriure al directori %s. Això és un risc innecessari. El Coppermine només necessita accés de lectura', //cpg1.4
  	'help_writable_undetermined' => 'El Coppermine no ha pogut determinar si es pot escriure al directori', //cpg1.4
  	'your_file' => 'El vostre fitxer', //cpg1.4
  	'reference_file' => 'Fitxer de referència', //cpg1.4
  	'summary' => 'Resum', //cpg1.4
  	'total' => 'Total de directoris i fitxers revisats', //cpg1.4
  	'mandatory_files_missing' => 'Falten fitxers obligatoris', //cpg1.4
  	'optional_files_missing' => 'Falten fitxers opcionals', //cpg1.4
  	'files_from_older_version' => 'Fitxers d\'una versió antiga del Coppermine', //cpg1.4
  	'file_version_outdated' => 'Versions dels fitxers antics', //cpg1.4
  	'error_no_data' => 'La seqüència no ha pogut obtenir la información', //cpg1.4
  	'go_to_webcvs' => 'Vés a %s', //cpg1.4
  	'options' => 'Opcions', //cpg1.4
  	'show_optional_files' => 'Mostra els directoris i fitxers opcionals', //cpg1.4
  	'show_mandatory_files' => 'Mostra els fitxers obligatoris ', //cpg1.4
  	'show_file_versions' => 'Mostra les versions dels fitxers', //cpg1.4
  	'show_errors_only' => 'Mostra només els directoris i fitxers amb errors', //cpg1.4
  	'show_permissions' => 'Mostra els permisos dels directoris', //cpg1.4
  	'show_condensed_output' => 'Mostra el resultat condensat (per a captures de pantalla més fàcils)', //cpg1.4
  	'coppermine_in_webroot' => 'El Coppermine està instal·lat a l\'arrel del servidor web', //cpg1.4
  	'connect_online_repository' => 'Provant de connectar al repositori', //cpg1.4
  	'show_additional_information' => 'Mostra informació addicional', //cpg1.4
  	'no_webcvs_link' => 'No mostris l\'enllaç al CVS', //cpg1.4
  	'stable_webcvs_link' => 'Mostra l\'enllaç a la branca estable del CVS', //cpg1.4
  	'devel_webcvs_link' => 'Mostra l\'enllaç a la branca de desenvolupament del CVS', //cpg1.4
  	'submit' => 'Aplica els canvis / Refresca', //cpg1.4
  	'reset_to_defaults' => 'Torna als valors predeterminats', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File view_log.php  //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('VIEWLOG_PHP')) $lang_viewlog_php = array(
  	'delete_all' => 'Esborra tots els registres de successos', //cpg1.4
  	'delete_this' => 'Esborra aquest registre de successos', //cpg1.4
  	'view_logs' => 'Mostra el registre de successos', //cpg1.4
  	'no_logs' => 'No hi ha cap registre de successos', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File xp_publish.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('XP_PUBLISH_PHP')) {

$lang_xp_publish_client = <<<EOT
<h1>Client de l´assistent de publicació Web de l´XP</h1><p>Aquest mòdul fa possible utilitzar l´assistent de publicació Web del <strong>Windows XP</strong> amb el Coppermine.</p><p>El codi està basat en un article publicat per
EOT;

$lang_xp_publish_required = <<<EOT
<h2>Requeriments</h2><ul><li>El Windows XP per poder disposar de l´assistent.</li><li>Una instal·lació funcional del Coppermine amb <strong>la funció de pujada de fitxers funcionant correctament.</strong></li></ul><h2>Com instal·lar en el costat del client</h2><ul><li>Feu clic amb el botó dret a 
EOT;

$lang_xp_publish_select = <<<EOT
seleccioneu &quot;Desa com a ...&quot;. Deseu el fitxer en el vostre disc dur. En desar el fitxer, assegureu-vos de que el nom proposat és <strong>cpg_###.reg</strong> (Els caràcters ### representen una marca de temps (timestamp). Canvieu el nom en cas contrari, però respecteu els números. En haver-se descarregat, feu doble clic per registrar el vostre servidor a l´assistent de publicació Web.</li></ul>
EOT;

$lang_xp_publish_testing = <<<EOT
<h2>Provant</h2><ul><li>A l´explorador del Windows, seleccioneu algún fitxer cliqueu a <strong>Publica xxx a la web</strong> en el pannel esquerre.</li><li>Confirmeu la selecció del fitxer. Feu clic a <strong>Següent</strong>.</li><li>En el llistat de serveis que apareix, seleccioneu el que pertany a la galeria (té el nom de la galeria). Si el servei no apareix, verifiqueu que teniu instal·lat el <strong>cpg_pub_wizard.reg</strong> tal i com es descriu més amunt.</li><li>Introduïu la vostra informació d´inici de sessió si es demana.</li><li>Seleccioneu l´àlbum de destí o creeu-ne un de nou.</li><li>Premeu <strong>Següent</strong>. La càrrega del fitxer començarà.</li><li>En acabar, verifiqueu que les imatges s´han afegit correctament a la galeria.</li></ul>
EOT;

$lang_xp_publish_notes = <<<EOT
<h2>Notes:</h2><ul><li>Una vegada que la càrrega hagi començat, l´assistent no podrà mostrar cap missatge d´error enviat per la seqüència, de manera que no podreu saber si el procés ha tingut èxit fins que reviseu la galeria.</li><li>Si la càrrega falla, habiliteu el &quot;Mode de depuració&quot; a la pàgina d´administració del Coppermine, proveu-ho amb una sola imatge i mireu els missatges d´error al 
EOT;

$lang_xp_publish_flood = <<<EOT
fitxer ubicat al directori del Coppermine al vostre servidor.</li><li>Per evitar que la galeria es <em>saturi</em> per causa de les imatges que l´assistent està carregant, només poden utilitzar aquesta eina els <strong>administradors de la galeria</strong> i els <strong>usuaris que poden tenir àlbums propis</strong>.</li>
EOT;



$lang_xp_publish_php = array(
  	'title' => 'Coppermine - Assistent de publicació Web de l\'XP', //cpg1.4
  	'welcome' => 'Bienvenido/a <strong>%s</strong>,', //cpg1.4
	'need_login' => 'Heu d\'iniciar una sessió a la galeria mitjançant el vostre navegador per poder utilitzar aquest assistent.<p/><p>En iniciar la sessió, no us oblideu de seleccionar l\'opció <strong>Recorda\'m</strong> si està present.', //cpg1.4
  	'no_alb' => 'No hi ha cap àlbum en el que estigui permès carregar fitxers mitjançant aquest assistent.', //cpg1.4
  	'upload' => 'Puja imatges a un àlbum existent', //cpg1.4
  	'create_new' => 'Crea un àlbum nou per a les imatges', //cpg1.4
  	'album' => 'Àlbum', //cpg1.4
  	'category' => 'Categoria', //cpg1.4
  	'new_alb_created' => 'S\'ha creat l\'àlbum &quot;<strong>%s</strong>&quot;.', //cpg1.4
  	'continue' => 'Premeu &quot;Següent&quot; per iniciar la càrrega de les imatges', //cpg1.4
  	'link' => 'Aquest enllaç', //cpg1.4
);
}

//This ones i don't found it in the english file, originaly placed in util.php but the new english file has new estructure so...... ...........well i left it here
$missing=array('what_update_titles' => 'Actualitza els noms dels fitxers',
	'what_delete_title' => 'Esborra els títols',
	'what_rebuild' => 'Torna a crear les imatges en miniatura i les imatges d\'altres mides',
	'what_delete_originals' => 'Esborra les imatges originals i substitueix-les per les versions de la nova mida');
?>