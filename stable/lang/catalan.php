<?php
// ------------------------------------------------------------------------- //
// Coppermine Photo Gallery 1.2.1                                            //
// ------------------------------------------------------------------------- //
// Copyright (C) 2002,2003 Gregory DEMAR                                     //
//  http://www.chezgreg.net/coppermine/                                      //
// ------------------------------------------------------------------------- //
// Updated by the Coppermine Dev Team                                        //
// (http://coppermine.sf.net/team/)                                          //
// see /docs/credits.html for details                                        //
// ------------------------------------------------------------------------- //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
// ------------------------------------------------------------------------- //

// info about translators and translated language
$lang_translation_info = array(
'lang_name_english' => 'Catalan',  
'lang_name_native' => 'Catal&agreugi;',
'lang_country_code' => 'es', 
'trans_name'=> 'Carles Escrig (simkin)', //the name of the translator - can be a nickname
'trans_email' => 'simkin@ono.com', //translator's email address (optional)
'trans_website' => 'http://simkin.now.nu/', //translator's website (optional)
'trans_date' => '2003-11-19', //the date the translation was created / last modified
);

$lang_charset = 'iso-8859-1';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('Bytes', 'KB', 'MB');

// Day of weeks and months
$lang_day_of_week = array('Dg', 'Dl', 'Dt', 'Dc', 'Dj', 'Dv', 'Db');
$lang_month = array('Gen', 'Febr', 'Març', 'Abr', 'Maig', 'Juny', 'Jul', 'Ag', 'Set', 'Oct', 'Nov', 'Des');

// Some common strings
$lang_yes = 'Si';
$lang_no  = 'No';
$lang_back = 'ARRERE';
$lang_continue = 'CONTINUAR';
$lang_info = 'Informació';
$lang_error = 'Error';

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$album_date_fmt =    '%d de %B de %Y';
$lastcom_date_fmt =  '%d/%m/%y a les %H:%M';
$lastup_date_fmt = '%d de %B de %Y';
$register_date_fmt = '%d de %B de %Y';
$lasthit_date_fmt = '%d de %B de %Y a les %I:%M %p';
$comment_date_fmt =  '%d de %B de %Y a les %I:%M %p';


// For the word censor
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*');

$lang_meta_album_names = array(
	'random' => 'Fotos a l\'atzar',
	'lastup' => 'Últimes fotos',
    'lastalb'=> 'Últims àlbums modificats',
	'lastcom' => 'Últims comentaris',
	'topn' => 'Més vistes',
	'toprated' => 'Més valorades',
	'lasthits' => 'Últimes vistes',
	'search' => 'Resultat de la recerca',
    'favpics'=> 'Fotos favorites'
);

$lang_errors = array(
	'access_denied' => 'No te permisos per a accedir a aquesta pàgina.',
	'perm_denied' => 'No te permisos per a realitzar aquesta operació.',
	'param_missing' => 'Cridada a Script sense els paràmetres requerits.',
	'non_exist_ap' => 'L\'àlbum/foto seleccionat no existeix!',
	'quota_exceeded' => 'Quota de disc excedida<br /><br />Te una quota de disc de  %[quota]K, les seues fotos actualment ocupen %[space]K, i afegint aquesta foto excediria la quota.',
	'gd_file_type_err' => 'Quan s\'usa la llibreria d\'imatge GD solament estan permesos els tipus JPEG i PNG.',
	'invalid_image' => 'La imatge que ha afegit està corrupta o no pot ser tractada per la llibreria GD.',
	'resize_failed' => 'Incapaç de crear thumbnail o imatge de grandària reduïda.',
	'no_img_to_display' => 'Cap imatge que ensenyar.',
	'non_exist_cat' => 'La categoria seleccionada no existeix.',
	'orphan_cat' => 'Una categoria no té pare, executa la utilitat de categories per a corregir el problema.',
	'directory_ro' => 'El directori \'%s\' no té permisos d\'escriptura, les fotos no poden ser esborrades.',
	'non_exist_comment' => 'El comentari seleccionat no existeix.',
	'pic_in_invalid_album' => 'La foto està en un àlbum que no existeix (%s)!?',
    'banned' => 'Actualment estàs expulsat respecte a l\'ús d\'aquesta web.',
    'not_with_udb' => 'Aquesta funció està desactivada en Coppermine perquè està integrada amb un programari de fòrums. El que sigui que està intentant fer no està suportat per aquesta configuració, o la funció deu ser manejada pel programari de fòrums.',
);


// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
	'alb_list_title' => 'Anar a la llista d\'àlbums',
	'alb_list_lnk' => 'Llista d\'Àlbums',
	'my_gal_title' => 'Anar a la meva galeria personal',
	'my_gal_lnk' => 'La meva galeria',
	'my_prof_lnk' => 'El meu perfil d\'usuari',
	'adm_mode_title' => 'Anar a mode administrador',
	'adm_mode_lnk' => 'Mode Admininstrador',
	'usr_mode_title' => 'Anar a mode usuari',
	'usr_mode_lnk' => 'Mode Usuari',
	'upload_pic_title' => 'Inserir foto en un àlbum',
	'upload_pic_lnk' => 'Inserir foto',
	'register_title' => 'Crear un usuari',
	'register_lnk' => 'Registrar-se',
	'login_lnk' => 'Login',
	'logout_lnk' => 'Logout',
	'lastup_lnk' => 'Últimes fotos',
	'lastcom_lnk' => 'Últims comentaris',
	'topn_lnk' => 'Més vistes',
	'toprated_lnk' => 'Més valorades',
	'search_lnk' => 'Cercar',
	'fav_lnk' => 'Els meus Favorits',
    'ban_lnk' => 'Ban usuaris', //new in cpg1.2.0.
	
);


$lang_gallery_admin_menu = array(
	'upl_app_lnk' => 'Aprovar Pujades',
	'config_lnk' => 'Configuració',
	'albums_lnk' => 'Àlbums',
	'categories_lnk' => 'Categories',
	'users_lnk' => 'Usuaris',
	'groups_lnk' => 'Grups',
	'comments_lnk' => 'Comentaris',
	'searchnew_lnk' => 'Afegir fotos (massiu)',
    'util_lnk' => 'Canviar grandària de les fotos',
    'ban_lnk' => 'Expulsar Usuaris',

);


$lang_user_admin_menu = array(
	'albmgr_lnk' => 'Crear / ordenar àlbums',
	'modifyalb_lnk' => 'Modificar els meus àlbums',
	'my_prof_lnk' => 'El meu perfil d\'usuari',
);


$lang_cat_list = array(
	'category' => 'Categoria',
	'albums' => 'Àlbums',
	'pictures' => 'Fotos',
);

$lang_album_list = array(
	'album_on_page' => '%d àlbums en %d pàgina(s)'
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
	'pic_on_page' => '%d fotos en %d pàgina(s)',
	'user_on_page' => '%d usuaris en %d pàgina(s)'
);

$lang_img_nav_bar = array(
	'thumb_title' => 'Tornar a l\'índex de l\'àlbum',
	'pic_info_title' => 'Mostrar/ocultar informació de la foto',
	'slideshow_title' => 'Projecció de Diapositives',
	'ecard_title' => 'Enviar aquesta foto a un amic/amiga',
	'ecard_disabled' => 'Enviament de fotos deshabilitat',
	'ecard_disabled_msg' => 'No tens permisos per a enviar fotos',
	'prev_title' => 'Veure foto anterior',
	'next_title' => 'Veure foto següent',
	'pic_pos' => 'FOTO %s/%s',
);

$lang_rate_pic = array(
	'rate_this_pic' => 'Valorar aquesta foto ',
	'no_votes' => '(No hi ha vots)',
	'rating' => '(valoració actual : %s / 5 amb %s vots)',
	'rubbish' => 'Dolenta',
	'poor' => 'Regular',
	'fair' => 'Normal',
	'good' => 'Bona',
	'excellent' => 'Excel·lent',
	'great' => 'Genial',
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
	'line' => 'Linea: ',
);

$lang_display_thumbnails = array(
	'filename' => 'Fitxer: ',
	'filesize' => 'Grandària: ',
	'dimensions' => 'Dimensions: ',
	'date_added' => 'Data d\'alta: '
);

$lang_get_pic_data = array(
	'n_comments' => '%s comentaris',
	'n_views' => 'vista %s vegades',
	'n_votes' => '(%s vots)'
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
	'Exclamation' => 'Exclamació',
	'Question' => 'Pregunta',
	'Very Happy' => 'Molt Feliç',
	'Smile' => 'Somriure',
	'Sad' => 'Trist',
	'Surprised' => 'Sorprès',
	'Shocked' => 'Impressionat',
	'Confused' => 'Confós',
	'Cool' => 'Guai',
	'Laughing' => 'Rient',
	'Mad' => 'Furiós',
	'Razz' => 'Razz',
	'Embarassed' => 'Avergonyit',
	'Crying or Very sad' => 'Plorant o molt trist',
	'Evil or Very Mad' => 'Dolent o molt boig',
	'Twisted Evil' => 'Twisted Evil',
	'Rolling Eyes' => 'Rolling Eyes',
	'Wink' => 'Wink',
	'Idea' => 'Idea',
	'Arrow' => 'Fletxa',
	'Neutral' => 'Neutral',
	'Mr. Green' => 'Mr. Verd',
);

// ------------------------------------------------------------------------- //
// File addpic.php
// ------------------------------------------------------------------------- //

// void

// ------------------------------------------------------------------------- //
// File admin.php
// ------------------------------------------------------------------------- //

if (defined('ADMIN_PHP')) $lang_admin_php = array(
	0 => 'Sortint de mode administrador...',
	1 => 'Entrant en mode administrador...',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
	'alb_need_name' => 'Els àlbums han de tenir un nom!',
	'confirm_modifs' => 'Està segur d\\\'aplicar aquestes modificacions?',
	'no_change' => 'No s\\\'ha fet cap canvi!',
	'new_album' => 'Nou àlbum',
	'confirm_delete1' => 'Està segur de voler esborrar aquest àlbum?',
	'confirm_delete2' => '\nTotes les fotos i comentaris que conté es perdran!',
	'select_first' => 'Seleccioni un àlbum primer',
	'alb_mrg' => 'Administrador d\'Àlbums',
	'my_gallery' => '* La meva galeria *',
	'no_category' => '* Sense categoria *',
	'delete' => 'Esborrar',
	'new' => 'Nou',
	'apply_modifs' => 'Aplicar modificacions',
	'select_category' => 'Seleccionar categoria',
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
	'miss_param' => 'Els paràmetres requerits per a l\'operació: \'%s\' no han estat subministrats!',
	'unknown_cat' => 'La categoria seleccionada no existeix en la base de dades',
	'usergal_cat_ro' => 'Les categories de galeries d\'usuari no poden ser esborrades!',
	'manage_cat' => 'Organitzador de categories',
	'confirm_delete' => 'Està segur de voler ESBORRAR aquesta catagoría',
	'category' => 'Categoria',
	'operations' => 'Operacions',
	'move_into' => 'Moure cap a',
	'update_create' => 'Modificar/Crear categoria',
	'parent_cat' => 'Categoria pare',
	'cat_title' => 'Títol de la categoria',
	'cat_desc' => 'Descripció de la categoria'
);

// ------------------------------------------------------------------------- //
// File config.php
// ------------------------------------------------------------------------- //

if (defined('CONFIG_PHP')) $lang_config_php = array(
	'title' => 'Configuració',
	'restore_cfg' => 'Restaurar valors per defecte',
	'save_cfg' => 'Desar la nova configuració',
	'notes' => 'Notes',
	'info' => 'Informació',
	'upd_success' => 'La configuració de Coppermine ha estat actualitzada',
	'restore_success' => 'Valors per defecte de Coppermine restaurats',
	'name_a' => 'Ascendent per nom',
	'name_d' => 'Descendent per nom',
    'title_a' => 'Ascendent per títol',
    'title_d' => 'Descendent per títol',
	'date_a' => 'Ascendent per data',
	'date_d' => 'Descendent per data',
    'th_any' => 'Max Aspect',
    'th_ht' => 'Alçada',
    'th_wd' => 'Amplada',
);

if (defined('CONFIG_PHP')) $lang_config_data = array(
	'Paràmetres Generals',
	array('Nom de la galeria', 'gallery_name', 0),
	array('Descripció de la galeria', 'gallery_description', 0),
	array('Correu electrònic de l\'administrador', 'gallery_admin_email', 0),
	array('Adreça web associada a  \'Veure més fotos\' a les e-cards', 'ecards_more_pic_target', 0),
	array('Idioma', 'lang', 5),
	array('Tema (aspecte)', 'theme', 6),

	'Aspecte de la llista d\'àlbums',
	array('Amplària de la taula principal (píxels o %)', 'main_table_width', 0),
	array('Nombre de nivells de categories a mostrar', 'subcat_level', 0),
	array('Nombre d\'àlbums a mostrar', 'albums_per_page', 0),
	array('Nombre de columnes a la llista d\'àlbums', 'album_list_cols', 0),
	array('Grandària de les miniatures en píxels', 'alb_list_thumb_size', 0),
	array('Contingut de la pàgina principal', 'main_page_layout', 0),
    array('Mostrar miniatures d\'àlbums de primer nivell en categories','first_level',1),

	'Aspecte de la vista de Miniatures',
	array('Nombre de columnes en la pàgina de miniatures', 'thumbcols', 0),
	array('Nombre de files en la pàgina de miniatures', 'thumbrows', 0),
	array('Màxim nombre de tabs a mostrar', 'max_tabs', 0),
	array('Mostrar picture caption (a més del títol) sota la miniatura', 'caption_in_thumbview', 1),
	array('Mostrar el nombre de comentaris sota la miniatura', 'display_comment_count', 1),
	array('Ordre per defecte de les fotos', 'default_sort_order', 3),
	array('Mínim nombre de vots perquè una foto aparegui a la llista de  \'Més Valorades\'', 'min_votes_for_rating', 0),

	'Vista de foto i Configuració de comentaris',
	array('Amplària de la taula on mostrar la foto (píxels o %)', 'picture_table_width', 0),
	array('Informació de la foto visible per defecte', 'display_pic_info', 1),
	array('Filtrar paraules malsonants als comentaris', 'filter_bad_words', 1),
	array('Permetre Emoticons als comentaris', 'enable_smilies', 1),
	array('Màxima longitud per a la descripció d\'una foto', 'max_img_desc_length', 0),
	array('Màxim nombre de caràcters en una paraula', 'max_com_wlength', 0),
	array('Màxim nombre de línies en un comentari', 'max_com_lines', 0),
	array('Màxima longitud d\'un comentari', 'max_com_size', 0),
    array('Mostrar tira de pel·lícula', 'display_film_strip', 1),
    array('Nombre d\'objectes en tira de pel·lícula', 'max_film_strip_items', 0),

	'Configuració de les fotos i miniatures',
	array('Qualitat per als fitxers JPEG', 'jpeg_qual', 0),
	array('Màxima amplària o alçada de les miniatures <b>*</b>', 'thumb_width', 0),
    array('Usar dimensió ( amplària o alçada o Màxim per a les miniatures )<b>*</b>', 'thumb_use', 7),
	array('Crear fotos de grandària intermèdia','make_intermediate',1),
	array('Màxima amplària o alçada de les fotos de grandària intermèdia <b>*</b>', 'picture_width', 0),
	array('Màxima grandària dels fotos d\'usuaris per pujada (KB)', 'max_upl_size', 0),
	array('Màxima amplària o alçada de les fotos d\'usuaris per pujada (píxels)', 'max_upl_width_height', 0),

	'Configuració d\'usuaris',
	array('Permetre el registre de nous usuaris', 'allow_user_registration', 1),
	array('Registre d\'usuaris requereix verificació del correu electrònic', 'reg_requires_valid_email', 1),
	array('Permetre a dos usuaris tenir el mateix correu electrònic', 'allow_duplicate_emails_addr', 1),
	array('Els usuaris poden tenir àlbums privats', 'allow_private_albums', 1),

	'Camps extra per a descripció de fotos (deixar en blanc si no els uses)',
	array('Nom del camp 1', 'user_field1_name', 0),
	array('Nom del camp 2', 'user_field2_name', 0),
	array('Nom del camp 3', 'user_field3_name', 0),
	array('Nom del camp 4', 'user_field4_name', 0),

	'Configuració avançada de fotos i miniatures',
    array('Mostrar icona d\'àlbum privat a usuaris no registrats','show_private',1),
	array('Caràcters prohibits als noms de les fotos', 'forbiden_fname_char',0),
	array('Extensions de fitxer admeses a les pujades', 'allowed_file_extensions',0),
	array('Mètode per al reescalat de fotos','thumb_method',2),
	array('Camí de la utilitat ImageMagick (per exemple /usr/bin/X11/)', 'impath', 0),
	array('Tipus de fitxers admesos (només vàlids amb ImageMagick)', 'allowed_img_types',0),
	array('Ordres de linea per a ImageMagick', 'im_options', 0),
	array('Llegir dades EXIF en fitxers de tipus JPEG', 'read_exif_data', 1),
	array('Directori base dels àlbums <b>*</b>', 'fullpath', 0),
	array('Dierctori per a les fotos pujades pels usuaris <b>*</b>', 'userpics', 0),
	array('Prefix per a les fotos de grandària intermèdia <b>*</b>', 'normal_pfx', 0),
	array('Prefix per a les miniatures <b>*</b>', 'thumb_pfx', 0),
	array('Mode per defecte dels directoris', 'default_dir_mode', 0),
	array('Mode per defecte per a les fotos', 'default_file_mode', 0),

	'Configuració de cookies i Joc de Caràcters',
	array('Nom de la galeta usada per CPG', 'cookie_name', 0),
	array('Camí de la galeta usada per CPG', 'cookie_path', 0),
	array('Joc de caràcters', 'charset', 4),

	'Configuracions d\'altres aspectes',
	array('Activar mode debug', 'debug_mode', 1),

	'<br /><div align="center">(*) Els camps marcats amb * no deuen ser canviats si ja es tenen fotos a les galeries</div><br />'
);

// ------------------------------------------------------------------------- //
// File dbinput.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
	'empty_name_or_com' => 'Deu introduir el seu nom i un comentari',
	'com_added' => 'El seu comentari ha estat afegit',
	'alb_need_title' => 'Deus introduir un títol per a l\'àlbum!',
	'no_udp_needed' => 'No es requereix cap canvi',
	'alb_updated' => 'L\'àlbum ha estat actualitzat',
	'unknown_album' => 'L\'àlbum seleccionat no existeix o no tens permisos per a afegir fotos en aquest àlbum',
	'no_pic_uploaded' => 'Cap foto va ser afegida!<br /><br />Si havia seleccionat una foto per a afegir, comprovi que el servidor admet pujar fitxers...',
	'err_mkdir' => 'Error al crear el directori %s!',
	'dest_dir_ro' => 'El directori destinació %s no té permisos d\'escriptura!',
	'err_move' => 'Impossible moure %s a  %s !',
	'err_fsize_too_large' => 'La grandària de la foto que vol inserir és massa gran (el màxim permès és de  %s x %s)',
	'err_imgsize_too_large' => 'La grandària del fitxer de la foto que vol inserir és massa gran (el màxim permès és de  %s KB)',
	'err_invalid_img' => 'El fitxer que vol inserir no és una imatge vàlida',
	'allowed_img_types' => 'Pot inserir solament %s fotos.',
	'err_insert_pic' => 'La foto \'%s\' no pot ser donada d\'alta a l\'àlbum ',
	'upload_success' => 'La foto ha estat inserida correctament<br /><br />Serà visible després de l\'aprovació dels administradors.',
	'info' => 'Informació',
	'com_added' => 'Comentari afegit',
	'alb_updated' => 'Àlbum actualitzat',
	'err_comment_empty' => 'El comentari està buit!',
	'err_invalid_fext' => 'Solament son admeses fotos amb les següents extensions : <br /><br />%s.',
	'no_flood' => 'Perdoni però és vostè l\'autor/a de l\'últim comentari introduït per a aquesta foto<br /><br />Pot editar el comentari que ha posat si és que vol modificar-lo',
	'redirect_msg' => 'Està sent redirigit.<br /><br /><br />Premi \'CONTINUAR\' si la pàgina no es refresca automàticament',
	'upl_success' => 'La foto s\'ha afegit correctament',
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
	'caption' => 'Encapçalament',
	'fs_pic' => 'imatge grandària completa',
	'del_success' => 'esborrat correctament',
	'ns_pic' => 'imatge grandària normal',
	'err_del' => 'no pot ser esborrat',
	'thumb_pic' => 'miniatura',
	'comment' => 'comentari',
	'im_in_alb' => 'fotos a l\'àlbum',
	'alb_del_success' => 'Àlbum \'%s\' esborrat',
	'alb_mgr' => 'Organitzador d\'àlbums',
	'err_invalid_data' => 'Dades invàlides rebudes en \'%s\'',
	'create_alb' => 'Creant l\'àlbum \'%s\'',
	'update_alb' => 'Actualitzant àlbum \'%s\' amb el títol \'%s\' i l\'índex \'%s\'',
	'del_pic' => 'Esborrar foto',
	'del_alb' => 'Esborrar àlbum',
	'del_user' => 'Esborrar usuari',
	'err_unknown_user' => 'L\'usuari seleccionat no existeix!',
	'comment_deleted' => 'El comentari ha estat esborrat',
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
	'confirm_del' => 'Estàs segur de voler ESBORRAR aquesta foto? \\nEls comentaris seran també esborrats.',
	'del_pic' => 'ESBORRAR AQUESTA FOTO',
	'size' => '%s x %s píxels',
	'views' => '%s vegades',
	'slideshow' => 'Projecció de Diapositives',
	'stop_slideshow' => 'DETENIR PROJECCIÓ',
	'view_fs' => 'Premi aqui per a veure la imatge a grandària completa',
);

$lang_picinfo = array(
	'title' =>'Informació de la foto',
	'Filename' => 'Nom del fitxer',
	'Album name' => 'Nom de l\'àlbum',
	'Rating' => 'Valoració (%s vots)',
	'Keywords' => 'Paraules clau',
	'File Size' => 'Grandària del fitxer',
	'Dimensions' => 'Dimensions',
	'Displayed' => 'S\'ha vist',
	'Camera' => 'Càmera',
	'Date taken' => 'Data de la foto',
	'Aperture' => 'Obertura',
	'Exposure time' => 'Temps d\'exposició',
	'Focal length' => 'Longitud del focus',
	'Comment' => 'Comentari',
    'addFav' => 'Afegir a Favorits',
    'addFavPhrase' => 'Favorits',
    'remFav' => 'Llevar de Favorits',
);

$lang_display_comments = array(
	'OK' => 'D\'acord',
	'edit_title' => 'Editar el comentari',
	'confirm_delete' => 'Està segur de voler esborrar el comentari?',
	'add_your_comment' => 'Afegir un comentari',
    'name'=>'Nom',
    'comment'=>'Comentari',
	'your_name' => 'Anònim',
);

$lang_fullsize_popup = array(
        'click_to_close' => 'Premi la imatge per a tancar aquesta finestra',
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
	'title' => 'Enviar foto a un amic/amiga',
	'invalid_email' => '<b>Atenció</b> : adreça electrònica incorrecta!',
	'ecard_title' => 'Una foto de  %s per a tu',
	'view_ecard' => 'Si la foto no es veu correctament, premi en aquest enllaç',
	'view_more_pics' => 'Premi aqui per a veure més fotos!',
	'send_success' => 'La foto ha estat enviada',
	'send_failed' => 'Disculpi, però el servidor no pot enviar la foto...',
	'from' => 'De',
	'your_name' => 'El teu nom',
	'your_email' => 'La teva adreça electrònica',
	'to' => 'A',
	'rcpt_name' => 'Nom del teu amic/amiga',
	'rcpt_email' => 'Adreça electrònica del teu amic/amiga',
	'greetings' => 'Títol del missatge',
	'message' => 'Missatge',
);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
	'pic_info' => 'Informació',
	'album' => 'Àlbum',
	'title' => 'Títol',
	'desc' => 'Descripció',
	'keywords' => 'Paraules Clau',
	'pic_info_str' => '%sx%s - %sKB - vista %s vegades - %s vots',
	'approve' => 'Aprovar la foto',
	'postpone_app' => 'Posposar aprovat de foto',
	'del_pic' => 'Esborrar foto',
	'reset_view_count' => 'Posar a zero el comptador de vegades que s\'ha vist',
	'reset_votes' => 'Posar a zero els vots',
	'del_comm' => 'Esborrar comentaris',
	'upl_approval' => 'Aprovar pujades',
	'edit_pics' => 'Editar fotos',
	'see_next' => 'Anar a les següents fotos',
	'see_prev' => 'Anar a les fotos anteriors',
	'n_pic' => '%s foto/s',
	'n_of_pic_to_disp' => 'Nombre de fotos a mostrar',
	'apply' => 'Validar els canvis'
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
	'group_name' => 'Nom del grup',
	'disk_quota' => 'Quota de disc',
	'can_rate' => 'Poden valorar fotos',
	'can_send_ecards' => 'Poden enviar ecards',
	'can_post_com' => 'Poden afegir comentaris',
	'can_upload' => 'Poden afegir fotos',
	'can_have_gallery' => 'Poden tenir galeries personals',
	'apply' => 'Validar els canvis',
	'create_new_group' => 'Crear nou grup',
	'del_groups' => 'Esborrar el(s) grup(s) seleccionats',
	'confirm_del' => 'Atenció, quan esborres un grup, els usuaris que pertanyen a aquest grup seran transferits al grup \'Registered\'!\n\nDesitges continuar?',
	'title' => 'Configurar grups d\'usuaris',
	'approval_1' => 'Aprovació àlbum públic (1)',
	'approval_2' => 'Aprovació àlbum públic (2)',
	'note1' => '<b>(1)</b> Afegir fotos en un àlbum públic requerirà aprovació dels administradors',
	'note2' => '<b>(2)</b> Afegir fotos en un àlbum que pertany a l\'usuari requerirà aprovació dels administradors',
	'notes' => 'Notes'
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
	'welcome' => 'Benvingut/da!'
);

$lang_album_admin_menu = array(
	'confirm_delete' => 'Està segur de voler ESBORRAR aquest àlbum ? \\nTotes les fotos i comentaris seran també esborrats.',
	'delete' => 'ESBORRAR',
	'modify' => 'MODIFICAR',
	'edit_pics' => 'EDITAR FOTOS',
);

$lang_list_categories = array(
	'home' => 'Inici',
	'stat1' => '<b>[pictures]</b> fotos en <b>[albums]</b> àlbums i <b>[cat]</b> categories amb <b>[comments]</b> comentaris, vistes <b>[views]</b> vegades',
	'stat2' => '<b>[pictures]</b> fotos en <b>[albums]</b> àlbums, vistes <b>[views]</b> vegades',
	'xx_s_gallery' => 'Galeria de %s',
	'stat3' => '<b>[pictures]</b> fotos en <b>[albums]</b> àlbums amb <b>[comments]</b> comentaris, vistes <b>[views]</b> vegades'
);

$lang_list_users = array(
	'user_list' => 'Llista d\'usuaris',
	'no_user_gal' => 'No existeixen usuaris amb permisos per a tenir àlbums',
	'n_albums' => '%s àlbum(s)',
	'n_pics' => '%s foto(s)'
);

$lang_list_albums = array(
	'n_pictures' => '%s fotos',
	'last_added' => ', última afegida el %s'
);

}

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
	'login' => 'Entrada',
	'enter_login_pswd' => 'Introdueix el teu nom d\'usuari i contrasenya per a entrar',
	'username' => 'Nom d\'usuari',
	'password' => 'Contrasenya',
	'remember_me' => 'Recorda\'m',
	'welcome' => 'Benvingut/da %s ...',
	'err_login' => '*** Login incorrecte. Intenta-ho de nou ***',
	'err_already_logged_in' => 'Ja estaves validat al sistema!',
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
	'logout' => 'Sortir',
	'bye' => 'Fins un altra, %s ...',
	'err_not_loged_in' => 'No estàs validat al sistema!',
);

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
	'upd_alb_n' => 'Modificar àlbum %s',
	'general_settings' => 'Configuració general',
	'alb_title' => 'Títol de l\'àlbum',
	'alb_cat' => 'Categoría de l\'àlbum',
	'alb_desc' => 'Descripció de l\'àlbum',
	'alb_thumb' => 'Miniatura de l\'àlbum',
	'alb_perm' => 'Permisos per a aquest àlbum',
	'can_view' => 'Aquest àlbum pot ser vist per',
	'can_upload' => 'Els visitants poden afegir fotos',
	'can_post_comments' => 'Els visitants poden afegir comentaris',
	'can_rate' => 'Els visitants poden valorar les fotos',
	'user_gal' => 'Galeria d\'usuari',
	'no_cat' => '* Sense categoria *',
	'alb_empty' => 'L\'àlbum està buit',
	'last_uploaded' => 'Última foto afegida',
	'public_alb' => 'Tot el món (àlbum públic)',
	'me_only' => 'Solament jo',
	'owner_only' => 'Solament l\'amo de l\'àlbum (%s)',
	'groupp_only' => 'Membres del grup \'%s\'',
	'err_no_alb_to_modify' => 'No pots modificar cap àlbum a la base de dades.',
	'update' => 'Modificar àlbum'
);

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
	'already_rated' => 'Perdoni però ja ha votat anteriorment per aquesta foto',
	'rate_ok' => 'El seu vot ha estat comptabilitzat',
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
A pesar que els administradors de  {SITENAME} intentaran eliminar o editar qualsevol material desagradable tan aviat com puguin, resulta impossible revisar tots els enviaments que es realitzen. Per tant deus tenir en compte que tots els enviaments fets cap a aquesta web expressen el punt de vista i opinions dels seus autors i no els dels administradors o webmasters (excepte els afegits per ells mateixos).<br />
<br />
Vostè acorda no afegir cap material abusiu, obscè, vulgar, escandalós, odiós, amenaçador, d´orientació sexual, o cap altre que pugui violar qualsevol llei aplicable. Vostè està d´acord amb que el webmaster, l´administrador i els assessors de  { SITENAME } tenen el dret de llevar o de corregir qualsevol contingut en qualsevol moment si el consideren necessari. Com usuari, accedeix que qualsevol informació afegida serà emmagatzemada en una base de dades. Tan mateix, aquesta informació no serà divulgada a tercers sense el seu consentiment. El webmaster i l´administrador no es poden fer responsables de cap intent de destrucció de la base de dades que pugui conduir a la pèrdua de la mateixa.<br />
<br />
Aquest lloc utilitza galetes per a emmagatzemar la informació al seu ordinador. Aquestes galetes serveixen per a millorar la navegació en aquest lloc. L´adreça de correu electrònic s´utilitza solament per a confirmar els seus detalls i contrasenya del registre.<br />
<br />
Prement <i>estic d´acord</i> expresses la teva conformitat amb aquestes condicions.
EOT;

$lang_register_php = array(
	'page_title' => 'Registre de nou usuari',
	'term_cond' => 'Termes i condicions',
	'i_agree' => 'Estic d\'acord',
	'submit' => 'Enviar sol·licitud de registre',
	'err_user_exists' => 'El nom d\'usuari elegit ja existeix, per favor elegeixi altre diferent',
	'err_password_mismatch' => 'Les dues contrassenyes no són iguals, per favor torni a introduir-les',
	'err_uname_short' => 'El nom d\'usuari deu ser de 2 caràcters de longitud com a mínim',
	'err_password_short' => 'La contrassenya deu ser de 2 caràcters de longitud com a mínim',
	'err_uname_pass_diff' => 'El nom d\'usuari i la contrassenya deuen ser diferents',
	'err_invalid_email' => 'L\'adreça electrònica no és vàlida',
	'err_duplicate_email' => 'Un altre usuari s\'ha registrat anteriorment amb l\'adreça de correu electrònic subministrada',
	'enter_info' => 'Introdueixi la informació de registre',
	'required_info' => 'Informació requerida',
	'optional_info' => 'Informació opcional',
	'username' => 'Nom d\'usuari',
	'password' => 'Contrasenya',
	'password_again' => 'Reescriure contrasenya',
	'email' => 'Correu electrònic',
	'location' => 'Localitat',
	'interests' => 'Interessos',
	'website' => 'Pàgina web',
	'occupation' => 'Ocupació',
	'error' => 'ERROR',
	'confirm_email_subject' => '%s - Confirmació de registre',
	'information' => 'Informació',
	'failed_sending_email' => 'L\'email de confirmació de registre no ha pogut ser enviat!',
	'thank_you' => 'Gràcies per registrar-se.<br /><br />Hem enviat un correu electrònic amb informació sobre l\'activació del seu compte a l\'adreça de correu que ens ha facilitat.',
	'acct_created' => 'El seu compte d\'usuari ha estat creat i ara pot accedir al sistema amb el seu nom d\'usuari i contrasenya',
	'acct_active' => 'El seu compte d\'usuari ja està activat i ara pot accedir al sistema amb el seu nom d\'usuari i contrasenya',
	'acct_already_act' => 'El seu compte ja estava actiu!',
	'acct_act_failed' => 'Aquest compte no pot ser activat!',
	'err_unk_user' => 'L\'usuari seleccionat no existeix!',
	'x_s_profile' => 'Perfil de %s',
	'group' => 'Grup',
	'reg_date' => 'Data d\'alta',
	'disk_usage' => 'Ús de disc',
	'change_pass' => 'Canviar contrasenya',
	'current_pass' => 'Contrasenya actual',
	'new_pass' => 'Nova contrasenya',
	'new_pass_again' => 'Reescriure nova contrasenya',
	'err_curr_pass' => 'La contrasenya actual és incorrecta',
	'apply_modif' => 'Desar els canvis',
	'change_pass' => 'Canviar la meva contrasenya',
	'update_success' => 'El seu perfil ha estat actualitzat',
	'pass_chg_success' => 'La seva contrasenya ha estat canviada',
	'pass_chg_error' => 'La seva contrassenya no ha estat canviada',
);

$lang_register_confirm_email = <<<EOT
Gràcies per registrar-te a {SITE_NAME}

El seu nom d´usuari és: "{USER_NAME}"
La seva contrassenya és: "{PASSWORD}"

Per a acabar d´activar el seu compte, deu prémer sobre l´enllaç que
apareix sota o copiar-lo i pegar-lo al seu navegador d´Internet.

{ACT_LINK}

Salut.

Els administradors de {SITE_NAME}

EOT;

}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
	'title' => 'Revisar comentaris',
	'no_comment' => 'No existeixen comentaris que mostrar',
	'n_comm_del' => '%s comentari(s) esborrat(s)',
	'n_comm_disp' => 'Nombre de comentaris a mostrar',
	'see_prev' => 'Veure l\'anterior',
	'see_next' => 'Veure el següent',
	'del_comm' => 'Esborrar comentaris seleccionats',
);


// ------------------------------------------------------------------------- //
// File search.php - OK
// ------------------------------------------------------------------------- //

if (defined('SEARCH_PHP')) $lang_search_php = array(
	0 => 'Cercar entre totes les fotos',
);

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
	'page_title' => 'Cercar noves fotos',
	'select_dir' => 'Seleccioni directori',
	'select_dir_msg' => 'Aquesta funció li permet afegir de forma automàtica les fotos que hagi pujat al teu servidor mitjançant FTP.<br /><br />Seleccioni el directori on ha pujat les seves fotos',
	'no_pic_to_add' => 'No hi ha cap foto per a afegir',
	'need_one_album' => 'Necessita almenys un àlbum per a utilitzar aquesta funció',
	'warning' => 'Atenció',
	'change_perm' => 'CPG no pot escriure en aquest directori, necessita canviar els seus permisos a modes 755 o 777 abans d\'intentar-ho de nou!',
	'target_album' => '<b>Col·locar les fotos del dierctori &quot;</b>%s<b>&quot; a l\'àlbum </b>%s',
	'folder' => 'Carpeta',
	'image' => 'Foto',
	'album' => 'Àlbum',
	'result' => 'Resultat',
	'dir_ro' => 'No es pot escriure. ',
	'dir_cant_read' => 'No es pot llegir. ',
	'insert' => 'Afegint noves fotos a la galeria',
	'list_new_pic' => 'Llistat de noves fotos',
	'insert_selected' => 'Afegir les fotos seleccionades',
	'no_pic_found' => 'No es va trobar cap foto nova',
	'be_patient' => 'Per favor, sigui pacient, CPG necessita temps per a afegir les fotos',
	'notes' =>  '<ul>'.
				'<li><b>OK</b> : significa que la foto va ser afegida sense problemes'.
				'<li><b>DP</b> : significa que la foto és un duplicat i ja existeix a la base de dades'.
				'<li><b>PB</b> : significa que la foto no pot ser afegida, per favor comprovi la configaración i els permisos dels directoris on estan les fotos'.
				'<li>Si les icones OK, DP, PB no apareixen, premi sobre la icona d\'imatge no carregada per a veure l\'error produït per PHP'.
				'<li>Si el navegador produeix un timeout, premi l\'icona d\'Actualitzar'.
				'</ul>',
);


// ------------------------------------------------------------------------- //
// File thumbnails.php
// ------------------------------------------------------------------------- //

// Void

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) $lang_banning_php = array(
                'title' => 'Expulsar Usuaris',
                'user_name' => 'Nom d\'Usuari',
                'ip_address' => 'Direcció IP',
                'expiry' => 'Caduca (en blanc és permanent)',
                'edit_ban' => 'Desar Canvis',
                'delete_ban' => 'Esborrar',
                'add_new' => 'Afegir Nova Expulsió',
                'add_ban' => 'Afegir',
);

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) $lang_upload_php = array(
	'title' => 'Inserir nova foto',
	'max_fsize' => 'La grandària màxima de fitxer admès és de  %s KB',
	'album' => 'Àlbum',
	'picture' => 'Foto',
	'pic_title' => 'Títol de la foto',
	'description' => 'Descripció de la foto',
	'keywords' => 'Paraules clau (separades per espais)',
	'err_no_alb_uploadables' => 'Perdoni però no hi ha cap àlbum on estigui permès inserir noves fotos',
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
	'title' => 'Administrar usuaris',
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
	'sort_by' => 'Ordenar usuaris per',
	'err_no_users' => 'La taula d\'usuaris està buida!',
	'err_edit_self' => 'No pot editar el seu propi perfil, usi l\'opció \'El meu perfil d\'usuari\' per a això',
	'edit' => 'EDITAR',
	'delete' => 'ESBORRAR',
	'name' => 'Nom d\'usuari',
	'group' => 'Grup',
	'inactive' => 'Inactiu',
	'operations' => 'Operacions',
	'pictures' => 'Fotos',
	'disk_space' => 'Espai usat / Quota',
	'registered_on' => 'Registrat el dia',
	'u_user_on_p_pages' => '%d usuaris en %d pàgina(s)',
	'confirm_del' => 'Està segur de voler ESBORRAR aquest usuari? \\nTotes les seves fotos i àlbums seran també esborrats.',
	'mail' => 'MAIL',
	'err_unknown_user' => 'L\'usuari seleccionat no existeix!',
	'modify_user' => 'Modificar usuari',
	'notes' => 'Notes',
	'note_list' => '<li>Si no vol canviar la contrassenya actual, deixi el camp "contrasenya" buit',
	'password' => 'Contrasenya',
	'user_active' => 'L\'usuari està actiu',
	'user_group' => 'Grup d\'usuaris',
	'user_email' => 'Correu electrònic de l\'usuari',
	'user_web_site' => 'Pàgina web de l\'usuari',
	'create_new_user' => 'Crear nou usuari',
	'user_location' => 'Localitat de l\'usuari',
	'user_interests' => 'Interessos de l\'usuari',
	'user_occupation' => 'Ocupació de l\'usuari',
);

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //

if (defined('UTIL_PHP')) $lang_util_php = array(
        'title' => 'Canviar grandària a les fotos',
        'what_it_does' => 'Què fa',
        'what_update_titles' => 'Actualitza els noms de fitxer',
        'what_delete_title' => 'Esborra els títols',
        'what_rebuild' => 'Torna a crear les miniatures i altres grandàries de les fotos',
        'what_delete_originals' => 'Esborra les fotos originals reemplaçant-les amb versions de nova grandària',
        'file' => 'Fitxer',
        'title_set_to' => 'títol a posar',
        'submit_form' => 'enviar',
        'updated_succesfully' => 'actualitzat amb èxit',
        'error_create' => 'ERROR al crear',
        'continue' => 'Processar més imágnes',
        'main_success' => 'El fitxer %s ha estat usat com foto principal amb èxit',
        'error_rename' => 'Error reanomenant %s a %s',
        'error_not_found' => 'No es troba el fitxer %s',
        'back' => 'tornar a l\'inici',
        'thumbs_wait' => 'Actualitzant miniatures i/o grandàries de fotos, per favor esperi...',
        'thumbs_continue_wait' => 'Continuant l\'actualització de miniatures i/o grandàries de fotos...',
        'titles_wait' => 'Actualitzant títols, per favor esperi...',
        'delete_wait' => 'Esborrant títols, per favor esperi...',
        'replace_wait' => 'Esborrant originals i reemplaçant-los amb les fotos de nova grandària, per favor esperi...',
        'instruction' => 'Instruccions ràpides',
        'instruction_action' => 'Selecionar acció',
        'instruction_parameter' => 'Posar paràmetres',
        'instruction_album' => 'Seleccionar àlbum',
        'instruction_press' => 'Prémer %s',
        'update' => 'Actualitzar miniatures i/o grandàries de fotos',
        'update_what' => 'Què deu ser actualitzat',
        'update_thumb' => 'Sols miniatures',
        'update_pic' => 'Sols grandàries de fotos',
        'update_both' => 'Miniatures i grandàries de fotos (ambdós)',
        'update_number' => 'Nombre d\'imatges processades per cada clic',
        'update_option' => '(Si experimenta problemes de timeout provi a posar un nombre menor)',
        'filename_title' => 'Fitxer &rArr; Títol de la foto',
        'filename_how' => 'Com deu ser el fitxer modificat',
        'filename_remove' => 'Llevar .jpg del final i reemplaçar _ (underscore) amb espais',
        'filename_euro' => 'Canviar 2003_11_23_13_20_20.jpg a 23/11/2003 13:20',
        'filename_us' => 'Canviar 2003_11_23_13_20_20.jpg a 11/23/2003 13:20',
        'filename_time' => 'Canviar 2003_11_23_13_20_20.jpg a 13:20',
        'delete' => 'Esborrar títols de fotos o fotos de grandària original',
        'delete_title' => 'Esborrar títols de fotos',
        'delete_original' => 'Esborrar fotos de grandària original',
        'delete_replace' => 'Esborra les imatges originals, reemplaçant-les amb unes altres de grandària nova',
        'select_album' => 'Seleccioni àlbum',
);

?>