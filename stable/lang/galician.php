<?php
// ------------------------------------------------------------------------- //
// Coppermine Photo Gallery 1.3.3                                            //
// ------------------------------------------------------------------------- //
// Copyright (C) 2002-2004 Gregory DenAR                                     //
// http://www.chezgreg.net/coppermine/                                       //
// ------------------------------------------------------------------------- //
// Updated by the Coppermine Dev Team                                        //
// (http://coppermine.sf.net/team/)                                          //
// see /docs/credits.html for details                                        //
// ------------------------------------------------------------------------- //
// This program is free software; you can redistribute it and/or modify      //
// it under the terms of the GNU General Public License as published by      //
// the Free Software Foundation; either version 2 of the License, or         //
// (at your option) any later version.                                       //
// ------------------------------------------------------------------------- //
// ENCODING CHECK; SHOULD BE YEN BETA MU: ¥ ß µ
// ------------------------------------------------------------------------- //
// $Id$
// ------------------------------------------------------------------------- //

// info about translators and translated language
$lang_translation_info = array(
  'lang_name_english' => 'Galician [Gallego]',
  'lang_name_native' => 'Galego',
  'lang_country_code' => 'gl',
  'trans_name'=> 'Jes&uacute;s Quintana',
  'trans_email' => 'info@quinti.net',
  'trans_website' => 'http://www.quinti.net',
  'trans_date' => '11/08/2005/', 
);

$lang_charset = 'iso-8859-1';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('Bytes', 'KB', 'MB');

// Day of weeks and months
$lang_day_of_week = array('Dom', 'Lun', 'Mar', 'Mer', 'Xov', 'Ven', 'Sab');
$lang_month = array('Xan', 'Fev', 'Mar', 'Abr', 'Mai', 'Xun', 'Xul', 'Ago', 'Set', 'Out', 'Nov', 'Dec');

// Some comon strings
$lang_yes = 'Si';
$lang_no  = 'Non';
$lang_back = 'VOLTAR';
$lang_continue = 'CONTINUAR';
$lang_info = 'Informacion';
$lang_error = 'Erro';

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$album_date_fmt =    '%d de %B, %Y';
$lastco_date_fmt =  '%d/%m/%y as %H:%M'; //cpg1.3.0
$lastup_date_fmt = '%d de %B, %Y';
$register_date_fmt = '%d de %B, %Y';
$lasthit_date_fmt = '%d de %B, %Y as %I:%M %p'; //cpg1.3.0
$coment_date_fmt =  '%d de %B, %Y as %I:%M %p'; //cpg1.3.0

// For the word censor
$lang_bad_words = array('foda*', 'otario', 'carallo', 'kct*', 'rola', 'porra', 'merda', 'idiota', 'otario', 'tabacudo', 'rola', 'buceta','tabacuda', 'fuck', 'lesbica', 'bixa', 'burro');


$lang_meta_album_names = array(
	'random' => 'Fotos Diversas',
	'lastup' => 'Derradeiras Fotos Engadidas',
	'lastalb'=> 'Derradeiros albums Atualizados',
	'lastcom' => 'Derradeiros comentarios',
	'topn' => 'Fotos M&aacute;is Visitadas',
	'toprated' => 'Fotos con m&aacute;is Popularidade',
	'lasthits' => 'Derradeiras Fotos Visitadas',
	'search' => 'Resultado da Procura',
	'favpics'=> 'Fotos Favoritas', //cpg1.3.0
);

$lang_errors = array(
	'access_denied' => 'Vostede non ten permiso para visualizar esta p&aacute;xina.',
	'perm_denied' => 'Vostede non ten permiso para executar esta operaci&oacute;n.',
	'param_missing' => 'Script executado sen os par&aacute;metros requeridos.',
	'non_exist_ap' => 'O album ou foto que Vostede seleccionou non foi atopado!',
	'quota_exceeded' => 'A cuota de espazo para almacenamento excedeu o limite<br /><br />Vostede ten [quota]KB de espazo, as suas fotos actualmente utilizan [space]KB, engadir este arquivo ir&aacute; saturar  a sua cota permitida.',
	'gd_file_type_err' => 'Estamos a usar un sistema que s&oacute; permite fotos JPEG e PNG.',
	'invalid_image' => 'A foto que Vostede enviou est&aacute; corrupta ou non pode ser 
interpretada pola biblioteca GD',
	'resize_failed' => 'non foi posible Crear a miniatura ou redimensionar a foto.',
	'no_img_to_display' => 'sen fotos para amosar',
	'non_exist_cat' => 'A categoria seleccionada non existe',
	'orphan_cat' => 'A categoria ten un paramento que non existe, v&aacute; para o administrador de categorias e corrixa o problema.',
	'directory_ro' => 'O directorio \'%s\' non &eacute; grabable, as fotos non poden ser borradas',
	'non_exist_coment' => 'O comentario seleccionado non existe.',
	'pic_in_invalid_album' => 'Foto nun album inexisintente (%s)!?',
	'banned' => 'Vstede esta baneado neste site.',
	'not_with_udb' => 'Esta funcion esta desactivada na Galeria porque esta integrada cun programa de forum. O que Vostede est&aacute; tentando facer non &eacute; soportado nesta Configuraci&oacute;n, ou a funcion debe ser chamada polo programa de forum.',
	'offline_title' => 'Offline.', //cpg1.3.0
	'offline_text' => 'Estamos offline - intente entrar novamente m&aacute;is tarde', 
//cpg1.3.0
	'ecards_empty' => 'non hai nengun rexistro de ecards para visualizar. Verifique se Vostede activou a opcion de Loguear os Ecards na Configuraci&oacute;n!', //cpg1.3.0
	'action_failed' => 'erro. non foi posible Procesar o seu pedido.', //cpg1.3.0
	'no_zip' => 'As bibliotecas necesarias para Procesar os arquivos en ZIP non estan disponibles. Por favor contacte co Administrador do site.', //cpg1.3.0
	'zip_type' => 'Vostede non ten permiso para enviar arquivos ZIP.', //cpg1.3.0
);


$lang_bbcode_help = 'BBCode: Estes codigos poden ser de utilidade: 
<li>[b]<b>Negrita</b>[/b]</li> <li>[i]<i>It&aacute;lico</i>[/i]</li> 
<li>[url=http://www.oseusitio.oquesexa/]Url Text[/url]</li> 
<li>[email]nome@provedor.com[/email]</li>'; //cpg1.3.0

// ------------------------------------------------------------------------- 
//
// File theme.php
// ------------------------------------------------------------------------- 
//

$lang_main_menu = array(
	'alb_list_title' => 'Ir &aacute; lista de albums',
	'alb_list_lnk' => 'Albums',
	'my_gal_title' => 'Ir para a miña Galeria Persoal',
	'my_gal_lnk' => 'Miña Galeria',
	'my_prof_lnk' => 'Meus datos',
	'adm_mode_title' => 'Trocar para modo Admin',
	'adm_mode_lnk' => 'Modo Admin',
	'usr_mode_title' => 'Trocar para modo usuario',
	'usr_mode_lnk' => 'Modo usuario',
	'upload_pic_title' => 'Enviar foto para o album',
	'upload_pic_lnk' => 'Enviar foto',
	'register_title' => 'Crear unha conta',
	'register_lnk' => 'Clique aqui para se rexistrar',
	'login_lnk' => 'Login',
	'logout_lnk' => 'Logout',
	'lastup_lnk' => 'Derradeiros envios',
	'lastcom_lnk' => 'Derradeiros comentarios',
	'topn_lnk' => 'M&aacute;is Vistas',
	'toprated_lnk' => 'Fotos M&aacute;is Populares',
	'search_lnk' => 'Procurar',
	'fav_lnk' => 'Meus Favoritos',
	'memberlist_title' => 'Lista de Membros', //cpg1.3.0
	'memberlist_lnk' => 'Membros', //cpg1.3.0
	'faq_title' => 'Cuestions m&aacute;is Frecontes sobre a Galeria de Sarria', //cpg1.3.0
	'faq_lnk' => 'FAQ', //cpg1.3.0

);

$lang_gallery_admin_menu = array(
	'upl_app_lnk' => 'Aprobar Fotos',
	'config_lnk' => 'Configuraci&oacute;ns',
	'albums_lnk' => 'Albums',
	'categories_lnk' => 'Categorias',
	'users_lnk' => 'Usuarios',
	'groups_lnk' => 'Grupos',
	'comments_lnk' => 'Revisar comentarios',
	'searchnew_lnk' => 'Engadir Fotos',
	'util_lnk' => 'Ferramentas Administrativas', //cpg1.3.0
	'ban_lnk' => 'Usuarios Baneados',
	'db_ecard_lnk' => 'Visualizar Postais', //cpg1.3.0
);

$lang_user_admin_menu = array(
	'albmgr_lnk' => 'Crear/ordenar meus albums',
	'modifyalb_lnk' => 'Modificar meus albums',
	'my_prof_lnk' => 'Meus datos',
);

$lang_cat_list = array(
	'category' => 'Categoria',
	'albums' => 'albums',
	'pictures' => 'Fotos',
);

$lang_album_list = array(
	'album_on_page' => '%d album(s) na(s) %d p&aacute;xina(s)'
);

$lang_thb_view = array(
	'date' => 'DATA',
	//Ordenar por arquivo e titulo
	'name' => 'ARQUIVO',
	'title' => 'TÍTULO',
	'sort_da' => 'Ordenar por data crecente',
	'sort_dd' => 'Ordenar por data decrecente',
	'sort_na' => 'Ordenar por nome ascendente',
	'sort_nd' => 'Ordenar por nome descendente',
	'sort_ta' => 'Ordenar por titulo ascendente',
	'sort_td' => 'Ordenar por titulo descendente',
	'download_zip' => 'Baixar arquivo ZIP co seu favoritos', //cpg1.3.0
	'pic_on_page' => '%d foto(s) na(s) %d pagina(s)',
	'user_on_page' => '%d usuario(s) na(s) %d p&aacute;xina(s)'
);

$lang_img_nav_bar = array(
	'thb_title' => 'Retornar &aacute; p&aacute;xina de miniaturas',
	'pic_info_title' => 'Amosar/Esconder informaci&oacute;ns do arquivo',
	'slideshow_title' => 'SlideShow',
	'ecard_title' => 'enviar esta foto como e-card (postal)',
	'ecard_disabled' => 'os e-cards estan deshabilitados',
	'ecard_disabled_msg' => 'Vostede non ten permiso para enviar e-cards',
	'prev_title' => 'Ver foto anterior',
	'next_title' => 'Ver pr&oacute;xima foto',
	'pic_pos' => 'FOTO %s - TOTAL %s',
);

$lang_rate_pic = array(
	'rate_this_pic' => 'Dea sua nota para esta foto ',
	'no_votes' => '(nengun voto hata o momento)',
	'rating' => '(M&eacute;dia de votos : %s / 5 dos %s votos)',
	'rubbish' => 'P&eacute;sima',
	'poor' => 'Ruin',
	'fair' => 'Satisfactoria',
	'good' => 'Boa',
	'excellent' => 'Excelente',
	'great' => 'Maravillosa',
);

// ------------------------------------------------------------------------- 
//
// File include/exif.inc.php
// ------------------------------------------------------------------------- 
//

// void

// ------------------------------------------------------------------------- 
//
// File include/functions.inc.php
// ------------------------------------------------------------------------- 
//

$lang_cpg_die = array(
	INFORMATION => $lang_info,
	ERROR => $lang_error,
	CRITICAL_ERROR => 'ERRO CRÍTICO',
	'file' => 'Arquivo: ',
	'line' => 'Liña: ',
);

$lang_display_thbnails = array(
	'filename' => 'Arquivo : ',
	'filesize' => 'tamaño : ',
	'dimensions' => 'Dimension : ',
	'date_added' => 'Data de Envio : '
);

$lang_get_pic_data = array(
	'n_comments' => '%s comentarios',
	'n_views' => '%s visualizacions',
	'n_votes' => '(%s votos)'
);

$lang_cpg_debug_output = array(
  'debug_info' => 'informaci&oacute;ns de Debug', //cpg1.3.0
  'select_all' => 'Seleccionar Todo', //cpg1.3.0
  'copy_and_paste_instructions' => 'Se Vostede vai pedir axuda &oacute; soporte do 
coppermine, copie e pegue isto no seu pedido de axuda. Aseg&uacute;rese de ter 
eliminadas todas as contrasinais que apareceran antes de enviar.', //cpg1.3.0
  'phpinfo' => 'Amosar phpinfo', //cpg1.3.0
);

$lang_language_selection = array(
  'reset_language' => 'Idioma por defecto', //cpg1.3.0
  'choose_language' => 'Escolla o seu idioma', //cpg1.3.0
);

$lang_theme_selection = array(
  'reset_theme' => 'tema por defecto', //cpg1.3.0
  'choose_theme' => 'Escolla un tema', //cpg1.3.0
);

// ------------------------------------------------------------------------- 
//
// File include/init.inc.php
// ------------------------------------------------------------------------- 
//

// void

// ------------------------------------------------------------------------- 
//
// File include/picmgmt.inc.php
// ------------------------------------------------------------------------- 
//

// void

// ------------------------------------------------------------------------- 
//
// File include/smilies.inc.php
// ------------------------------------------------------------------------- 
//

if (defined('SMILIES_PHP')) $lang_smilies_inc_php = array(
	'Exclamation' => 'Exclamaci&oacute;n',
	'Question' => 'Cuestion',
	'Very Happy' => 'Moi Feliz',
	'Smile' => 'Sorrisa',
	'Sad' => 'Triste',
	'Surprised' => 'Sorpresa',
	'Shocked' => 'Chocado',
	'Confused' => 'Confuso',
	'comol' => 'Legal',
	'Laughing' => 'Risoño',
	'Mad' => 'Tolo',
	'Razz' => 'Razz',
	'embarassed' => 'embarazado',
	'Crying or Very sad' => 'Moi triste',
	'Evil or Very Mad' => 'Moi mal',
	'Twisted Evil' => 'Demo Tolo',
	'Rolling Eyes' => 'Rulando os ollos',
	'Wink' => 'Pescando',
	'Idea' => 'Idea',
	'Arrow' => 'Seta',
	'Neutral' => 'Neutro',
	'Mr. Green' => 'Mr. Green',
);

// ------------------------------------------------------------------------- 
//
// File addpic.php
// ------------------------------------------------------------------------- 
//

// void

// ------------------------------------------------------------------------- 
//
// File admin.php
// ------------------------------------------------------------------------- 
//

if (defined('ADMIN_PHP')) $lang_admin_php = array(
	0 => 'Saindo da Administraci&oacute;n...',
	1 => 'Entrando na Administraci&oacute;n...',
);

// ------------------------------------------------------------------------- 
//
// File albmgr.php
// ------------------------------------------------------------------------- 
//

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
	'alb_need_name' => 'albums precisan ter un nome !',
	'confirm_modifs' => 'ten a certeza que desexa realizar as modificacions ?',
	'no_change' => 'Vostede non fixo nengun troco!',
	'new_album' => 'Novo album',
	'confirm_delete1' => 'ten a certeza que desexa remover este album ?',
	'confirm_delete2' => '\nTodas as fotos e comentarios ser&aacute;n perdidos !',
	'select_first' => 'Primeiro Seleccione un album',
	'alb_mrg' => 'Administrador de albums',
	'my_gallery' => '* A miña Galeria *',
	'no_category' => '* sen categoria *',
	'delete' => 'Apagar',
	'new' => 'Novo',
	'apply_modifs' => 'Aplicar modificacions',
	'select_category' => 'Seleccione unha categoria',
);

// ------------------------------------------------------------------------- 
//
// File catmgr.php
// ------------------------------------------------------------------------- 
//

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
	'miss_param' => 'Parametros requeridos para operaci&oacute;n \'%s\' non postos 
!',
	'unknown_cat' => 'A categoria seleccionada non existe no noso banco de 
datos',
	'usergal_cat_ro' => 'A categoria do usuario non pode ser exclu&iacute;da !',
	'manage_cat' => 'administrar categorias',
	'confirm_delete' => 'Vostede ten a certeza que desexa ELIMINAR esta categoria ? 
',
	'category' => 'Categoria',
	'operations' => 'Operaci&oacute;ns',
	'move_into' => 'Mover a',
	'update_create' => 'actualizar/Crear categoria',
	'parent_cat' => 'Sub-categoria',
	'cat_title' => 'T&iacute;tulo da categoria',
	'cat_thb' => 'Miniatura da categoria', //cpg1.3.0
	'cat_desc' => 'Descripci&oacute;n da categoria',
);

// ------------------------------------------------------------------------- 
//
// File config.php
// ------------------------------------------------------------------------- 
//

if (defined('CONFIG_PHP')) $lang_config_php = array(
	'title' => 'Configuraci&oacute;n',
	'restore_cfg' => 'Restaurar Configuraci&oacute;n por defecto',
	'save_cfg' => 'Gardar nova Configuraci&oacute;n',
	'notes' => 'Notas',
	'info' => 'Informaci&oacute;n',
	'upd_success' => 'Configuraci&oacute;ns atualizadas!',
	'restore_success' => 'Configuraci&oacute;n padre restaurada',
	'name_a' => 'Nome ascendente',
	'name_d' => 'Nome descendente',
	'title_a' => 'T&iacute;tulo ascendente',
	'title_d' => 'T&iacute;tulo descendente',
	'date_a' => 'Data Crecente',
	'date_d' => 'Data Decrecente',
	'th_any' => 'Aspecto M&aacute;ximo',
	'th_ht' => 'Altura',
	'th_wd' => 'Ancho',
	'label' => 'etiqueta', //cpg1.3.0
	'item' => 'item', //cpg1.3.0
	'debug_everyone' => 'Todos', //cpg1.3.0
	'debug_admin' => 's&oacute; o admin', //cpg1.3.0
        );


if (defined('CONFIG_PHP')) $lang_config_data = array(
	'Configuraci&oacute;ns xerais',
	array('Nome da Galeria', 'gallery_name', 0),
	array('Descripci&oacute;n da Galeria', 'gallery_description', 0),
	array('email do Administrador', 'gallery_admin_email', 0),
	array('URL da Galeria (para aparecer no ecard e no link directo para a
imaxe)', 'ecards_more_pic_target', 0),
	array('Galeria Offline', 'offline', 1), //cpg1.3.0
	array('Logar ecards', 'log_ecards', 1), //cpg1.3.0
	array('Permitir download de ZIP dos favoritos', 'enable_zipdownload', 1), 
//cpg1.3.0

	'Idioma, temas &amp; Configuraci&oacute;n de Caracteres',
	array('Idioma', 'lang', 5),
	array('tema', 'theme', 6),
	array('Amosar lista de idiomas', 'language_list', 1), //cpg1.3.0
	array('Amosar bandeiras en vez dos nomes', 'language_flags', 8), 
//cpg1.3.0
	array('Amosar &quot;resetar&quot; na selecci&oacute;n de idioma', 'language_reset', 
1), //cpg1.3.0
	array('Amosar a lista de temas', 'theme_list', 1), //cpg1.3.0
	array('Amosar &quot;resetar&quot; na selecci&oacute;n de tema', 'theme_reset', 1), 
//cpg1.3.0
	array('Amosar FAQ', 'display_faq', 1), //cpg1.3.0
	array('Amosar axuda para o bbcode', 'show_bbcode_help', 1), //cpg1.3.0
	array('Codificaci&oacute;n de Caracteres', 'charset', 4), //cpg1.3.0


	'Visualizaci&oacute;n da Lista de albums',
	array('Ancho da tabela principal (en pixels ou %)', 'main_table_width', 
0),
	array('numero de Niveis de categorias para visualizar', 'subcat_level', 0),
	array('numero de albums para visualizar', 'albums_per_page', 0),
	array('numero de columnas para a lista de albums', 'album_list_cols', 0),
	array('tamaño das miniaturas en pixels', 'alb_list_thumb_size', 0),
	array('Conte&iacute;do da p&aacute;xina principal', 'main_page_layout', 0),
	array('Amosar o primeiro nivel das miniaturas do album nas 
categorias','first_level',1),

	'Visualizaci&oacute;n das miniaturas',
	array('numero de columnas na p&aacute;xina das miniaturas', 'thumbcols', 0),
	array('numero de liñas na p&aacute;xina das miniaturas', 'thumbrows', 0),
	array('numero m&aacute;ximo de tabelas', 'max_tabs', 0),
	array('Subtitulo da foto (xuntamente co titulo) abaixo da miniatura', 
'caption_in_thumbview', 1),
	array('Amosar o numero de visualizaci&oacute;n embaixo da miniatura', 
'views_in_thumbview', 1), //cpg1.3.0
	array('Total de comentarios abaixo da miniatura', 'display_coment_count', 
1),
	array('Amosar o nome de quen enviou enbaixo da miniatura', 
'display_uploader', 1), //cpg1.3.0
	array('Modo de organizaci&oacute;n das fotos', 'default_sort_order', 3),
	array('numero minimo de votos para unha foto', 'min_votes_for_rating', 0),

	'Visualizaci&oacute;n das Fotos &amp; Configuraci&oacute;n dos comentarios',
	array('Anchura da Tabela para visualizaci&oacute;n das fotos (en pixels ou %)', 
'picture_table_width', 0),
	array('Amosar informaci&oacute;ns da foto por padre', 'display_pic_info', 1),
	array('Censurar palabras nos comentarios', 'filter_bad_words', 1),
	array('activar cariñas', 'enable_smilies', 1),
	array('Permitir comentarios consecutivos vindo do mesmo usuario (desactivar 
proteccion de flood)', 'disable_comemt_flood_protect', 1), //cpg1.3.0
	array('tamaño m&aacute;ximo para a Descripci&oacute;n dunha foto', 'max_img_desc_length', 
0),
	array('numero m&aacute;ximo de caracteres nunha palabra', 'max_co_wlength', 0),
	array('numero m&aacute;ximo de liñas nun comentario', 'max_co_lines', 0),
	array('tamaño m&aacute;ximo dun comentario', 'max_co_size', 0),
	array('Amosar tira de filme abaixo da foto', 'display_film_strip', 1),
	array('numero de items na tira de filme', 'max_film_strip_items', 0),
	array('Notificar &oacute; admin sobre comentarios por email', 
'email_coment_notification', 1), //cpg1.3.0
	array('Intervalo en milisegundos para o Slideshow (1 segundo = 1000 
milisegundos)', 'slideshow_interval', 0), //cpg1.3.0

	'Configuraci&oacute;ns de Fotos e Miniaturas',
	array('Calidade das fotos en JPEG', 'jpeg_qual', 0),
	array('tamaño m&aacute;ximo da dimenson das miniaturas <a href="#notice2" 
class="clickable_option">**</a>', 'thumb_width', 0),
	array('Usar dimenson ( Anchura ou altura ou Aspecto M&aacute;ximo para miniaturas 
)<b>**</b>', 'thumb_use', 7),
	array('Fotos intermediarias','make_intermediate',1),
	array('Anchura ou altura m&aacute;xima dunha foto intermediaria <a 
href="#notice2" class="clickable_option">**</a>', 'picture_width', 0),
	array('tamaño m&aacute;ximo dunha foto enviada por upload (KB)', 'max_upl_size', 
0),
	array('Anchura ou altura m&aacute;xima dunha foto enviada por upload (en 
pixels)', 'max_upl_width_height', 0),

	'Configuraci&oacute;ns avanzadas das fotos e das miniaturas',
	array('Amosar icono do album privado para un usuario non 
logueado','show_private',1), //cpg1.3.0
	array('Caracteres proibidos nos arquivos', 'forbiden_fname_char',0),
	//array('Extensions permitidas para as fotos enviadas por upload', 'allowed_file_extensions',0),
	array('Tipos de imaxes permitidas', 'allowed_img_types',0), //cpg1.3.0
	array('Tipos de videos permitidos', 'allowed_mov_types',0), //cpg1.3.0
	array('Tipos de audios permitidos', 'allowed_snd_types',0), //cpg1.3.0
	array('Tipos de documentos permitidos', 'allowed_doc_types',0), //cpg1.3.0
	array('M&eacute;todo para redimensionar as fotos','thumb_method',2),
	array('Cartafol do utilidade para \'converter\' fotos imagemagick (exemplo /usr/bin/X11/)', 'impath', 0),
	//array('Tipos de fotos permitidas (valido s&oacute; para imagemagick)', 'allowed_img_types',0),
	array('Liña de comandos para o imagemagick', 'im_options', 0),
	array('Amosar a informaci&oacute;n EXIF dos arquivos JPEG?', 'read_exif_data', 1),
	array('Amosar a informaci&oacute;n IPTC dos arquivos JPEG?', 'read_iptc_data', 1), //cpg1.3.0
	array('Cartafol do album <a href="#notice1" class="clickable_option">*</a>', 'fullpath', 0),
	array('Cartafol para as fotos dos usuarios <b>*</b>', 'userpics', 0),
	array('Prefixo para as fotos intermediarias <b>*</b>', 'normal_pfx', 0),
	array('Prefixo para as miniaturas <b>*</b>', 'thumb_pfx', 0),
	array('permiso CHMOD para os directorios', 'default_dir_mode', 0),
	array('permiso CHMOD para as fotos', 'default_file_mode', 0),

	'Configuraci&oacute;ns de usuarios',
	array('Permitir o rexistro de novos usuarios?', 'allow_user_registration', 
1),
	array('O rexistro dun usuario require a verificaci&oacute;n por email?', 
'reg_requires_valid_email', 1),
	array('Notificar &oacute; administrador sobre os novos rexistros por email', 
'reg_notify_admin_email', 1), //cpg1.3.0
	array('Permitir que dous usuarios teñan o mesmo email?', 
'allow_duplicate_emails_addr', 1),
	array('usuarios poden ter albums privados?', 'allow_private_albums', 1),
	array('Notificar por email &oacute; administrador sobre novos uploads para 
aprobaci&oacute;n', 'upl_notify_admin_email', 1), //cpg1.3.0
	array('Permitir que usuarios logueados visualicen a lista de membros', 
'allow_memberlist', 1), //cpg1.3.0

	'Campos personalizables para Descripci&oacute;n das fotos (deixe en branco se non vai a 
usar)',
	array('Nome do Campo 1', 'user_field1_name', 0),
	array('Nome do Campo 2', 'user_field2_name', 0),
	array('Nome do Campo 3', 'user_field3_name', 0),
	array('Nome do Campo 4', 'user_field4_name', 0),

	'Configuraci&oacute;n de cookies',
	array('Nome do coookie usado polo script', 'cookie_name', 0),
	array('cartafol do cookie usado polo script', 'cookie_path', 0),

	'Axustes variados',
	array('activar modo debug?', 'debug_mode', 1),

	array('Amosar noticias no modo debug', 'debug_notice', 1), //cpg1.3.0

  '<br /><div align="left"><a name="notice1"></a>(*) Estas configuraci&oacute;ns 
marcadas non deben ser modificadas se Vostede xa ten algunha foto engadida
na galeria.<br />
  <a name="notice2"></a>(**) cando modificar esta Configuraci&oacute;n, s&oacute; os 
arquivos adicionados a partir deste punto ter&aacute;n efeito, enton esta avisado 
que esta Configuraci&oacute;n non debe ser trocada se Vostede xa tivo adicionado 
algun arquivo na galeria. Entretanto, Vostede pode aplicar modificacions nos 
arquivos existentes usando as &quot;<a href="util.php">Ferramentas 
Administrativas</a> (redimensionar fotos)&quot; do menu 
administrativo.</div><br />', //cpg1.3.0
);

// ------------------------------------------------------------------------- 
//
// File db_ecard.php //cpg1.3.0
// ------------------------------------------------------------------------- 
//

if (defined('DB_ECARD_PHP')) $lang_db_ecard_php = array(
  'title' => 'Ecards enviados', //cpg1.3.0
  'ecard_sender' => 'Remitente', //cpg1.3.0
  'ecard_recipient' => 'Destinatario', //cpg1.3.0
  'ecard_date' => 'Data', //cpg1.3.0
  'ecard_display' => 'Ver ecard', //cpg1.3.0
  'ecard_name' => 'Nome', //cpg1.3.0
  'ecard_email' => 'email', //cpg1.3.0
  'ecard_ip' => 'IP #', //cpg1.3.0
  'ecard_ascending' => 'ascendente', //cpg1.3.0
  'ecard_descending' => 'descendente', //cpg1.3.0
  'ecard_sorted' => 'Clasificado', //cpg1.3.0
  'ecard_by_date' => 'por data', //cpg1.3.0
  'ecard_by_sender_name' => 'polo nome do Remitente', //cpg1.3.0
  'ecard_by_sender_email' => 'polo email do Remitente', //cpg1.3.0
  'ecard_by_sender_ip' => 'polo ip do Remitente', //cpg1.3.0
  'ecard_by_recipient_name' => 'polo nome do destinatario', //cpg1.3.0
  'ecard_by_recipient_email' => 'polo email do destinatario', //cpg1.3.0
  'ecard_number' => 'visualizando rexistro %s para %s de %s', //cpg1.3.0
  'ecard_goto_page' => 'ir para p&aacute;xina', //cpg1.3.0
  'ecard_records_per_page' => 'rexistros por p&aacute;xina', //cpg1.3.0
  'check_all' => 'Marcar Todos', //cpg1.3.0
  'uncheck_all' => 'Desmarcar Todos', //cpg1.3.0
  'ecards_delete_selected' => 'Borrar os ecards seleccionados', //cpg1.3.0
  'ecards_delete_confirm' => 'Vostede ten a certeza que desexa Borrar os ecard 
seleccionados? Marque a caixa de verificacci&oacute;n!', //cpg1.3.0
  'ecards_delete_sure' => 'Eu teño a certeza', //cpg1.3.0
);


// ------------------------------------------------------------------------- 
//
// File db_input.php
// ------------------------------------------------------------------------- 
//

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
	'empty_name_or_co' => 'Vostede debe inserir un nome e o comentario',
	'co_added' => 'seu comentario foi inserido',
	'alb_need_title' => 'Vostede debe definir un nome para o album !',
	'no_udp_needed' => 'Atualizaci&oacute;n non necesaria.',
	'alb_updated' => 'O album foi atualizado',
	'unknown_album' => 'O album seleccionado non existe ou Vostede non ten 
permiso para enviar fotos para &eacute;l',
	'no_pic_uploaded' => 'nengunha foto enviada !<br /><br />Se Vostede realmente 
selecionou unha foto para enviar, verifique se o servidor permite 
envios...',
	'err_mkdir' => 'erro &oacute; Crear directorio %s !',
	'dest_dir_ro' => 'directorio de destino %s non pode ser grabado polo script 
!',
	'err_move' => 'Imposible mover %s para %s !',
	'err_fsize_too_large' => 'A foto que Vostede est&aacute; tentando enviar &eacute; moi 
grande (m&aacute;ximo permitido %s x %s) !',
	'err_imgsize_too_large' => 'O tamaño da foto &eacute; maior que o permitido 
(m&aacute;ximo permitido %s KB) !',
	'err_invalid_img' => 'O arquivo que Vostede est&aacute; tentando enviar non &eacute; un 
arquivo de foto v&aacute;lido !',
	'allowed_img_types' => 'Vostede s&oacute; pode enviar %s fotos.',
	'err_insert_pic' => 'A foto \'%s\' non pode ser inserida no album ',
	'upload_success' => 'A Sua foto foi enviada con exito<br /><br />s&oacute; 
ser&aacute; visible despois da aprobaci&oacute;n do Administrador.',
	'notify_admin_email_subject' => '%s - Notificaci&oacute;n de Envio', //cpg1.3.0
	'notify_admin_email_body' => 'unha foto foi enviada por %s e precisa da sua 
aprobaci&oacute;n. Entre %s', //cpg1.3.0
	'info' => 'Informaci&oacute;n',
	'co_added' => 'comentario adicionado',
	'alb_updated' => 'album atualizado',
	'err_coment_empty' => 'O Seu comentario est&aacute; valeiro !',
	'err_invalid_fext' => 'Soamente os arquivos coas seguintes extensions son 
permitidos : <br /><br />%s.',
	'no_flood' => 'Desculpe, pero Vostede &eacute; o &uacute;ltimo autor en enviar un comentario<br 
/><br />Edite o comentario se desexa trocalo',
	'redirect_msg' => 'Vostede est&aacute; sendo redireccionado.<br /><br /><br />Clique 
\'CONTINUE\' se a p&aacute;xina non se actualizar automaticamente',
	'upl_success' => 'Sua foto foi engadida con exito',
	'email_coment_subject' => 'comentario pinserido', //cpg1.3.0
	'email_coment_body' => 'Alguen posteou un comentario na sua galeria. v&eacute;xao 
en', //cpg1.3.0
);

// ------------------------------------------------------------------------- 
//
// File delete.php
// ------------------------------------------------------------------------- 
//

if (defined('DELETE_PHP')) $lang_delete_php = array(
	'caption' => 'Sub-T&iacute;tulo',
	'fs_pic' => 'tamaño total da foto',
	'del_success' => 'borrado con exito',
	'ns_pic' => 'tamaño normal da foto',
	'err_del' => 'non pode ser exclu&iacute;do',
	'thumb_pic' => 'miniatura',
	'coment' => 'comentario',
	'im_in_alb' => 'foto no album',
	'alb_del_success' => 'album \'%s\' borraDO',
	'alb_mgr' => 'Administrador de albums',
	'err_invalid_data' => 'datos recibidos inv&aacute;lidos \'%s\'',
	'create_alb' => 'Creando album \'%s\'',
	'update_alb' => 'actualizando album \'%s\' t&iacute;tulo \'%s\' &iacute;ndice \'%s\'',
	'del_pic' => 'Borrar arquivo',
	'del_alb' => 'Borrar album',
	'del_user' => 'usuario usuario',
	'err_unknown_user' => 'O usuario seleccionado non existe !',
	'coment_deleted' => 'O comentario foi borrado con exito',
);

// ------------------------------------------------------------------------- 
//
// File displayecard.php
// ------------------------------------------------------------------------- 
//

// Void

// ------------------------------------------------------------------------- 
//
// File displayimage.php
// ------------------------------------------------------------------------- 
//

if (defined('DISPLAYIMAGE_PHP')){

$lang_display_image_php = array(
	'confirm_del' => 'ten a certeza que desexa ELIMINAR esta foto ? \\ncomentarios 
vinculados tam&eacute;n ser&aacute;n exclu&iacute;dos.',
	'del_pic' => 'APAGAR ESTA FOTO',
	'size' => '%s x %s pixels',
	'views' => '%s veces',
	'slideshow' => 'Slideshow',
	'stop_slideshow' => 'PARAR SLIDESHOW',
	'view_fs' => 'Clique para ver a foto ampliada',
	'edit_pic' => 'Editar Descripci&oacute;n', //cpg1.3.0
	'crop_pic' => 'Xirar', //cpg1.3.0
);

$lang_picinfo = array(
	'title' =>'INFORMACIONS DA FOTO',
	'Filename' => 'Arquivo',
	'album name' => 'album',
	'Rating' => 'Clasificaci&oacute;n (%s voto(s))',
	'Keywords' => 'Palabras-chave',
	'File Size' => 'tamaño do arquivo',
	'Dimensions' => 'Dimensions',
	'Displayed' => 'Visualizada',
	'Camera' => 'Camara',
	'Date taken' => 'Foto tirada en',
	'Aperture' => 'Abertura',
	'Exposure time' => 'tempo de exposicion',
	'Focal length' => 'distanza focal',
	'coment' => 'comentario',
	'addFav'=>'engadir a favoritos', //cpg1.3.0
	'addFavPhrase'=>'Favoritos', //cpg1.3.0
	'renFav'=>'remover dos Favoritos', //cpg1.3.0
	'iptcTitle'=>'Titulo IPTC', //cpg1.3.0
	'iptcCopyright'=>'Copyright IPTC', //cpg1.3.0
	'iptcKeywords'=>'Palabras-chave IPTC', //cpg1.3.0
	'iptcCategory'=>'Categoria IPTC', //cpg1.3.0
	'iptcSubCategories'=>'Sub-Categorias IPTC', //cpg1.3.0

);

$lang_display_comments = array(
	'OK' => 'OK',
	'edit_title' => 'Editar este comentario',
	'confirm_delete' => 'ten a certeza de remover este comentario ?',
	'add_your_coment' => 'Engada o seu comentario',
	'name'=>'Nome',
	'coment'=>'comentario',
	'your_name' => 'O seu nome',
);

$lang_fullsize_popup = array(
  'click_to_close' => 'Clique na imaxe para pechar esta xanela',
);

}

// ------------------------------------------------------------------------- 
//
// File ecard.php
// ------------------------------------------------------------------------- 
//

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php 
=array(
	'title' => 'Enviar unha e-card',
	'invalid_email' => '<b>Aviso</b> : email inv&aacute;lido !',
	'ecard_title' => '%s envioulle unha postal!',
	'error_not_image' => 's&oacute; as imaxes poden ser enviadas como ecard.', 
//cpg1.3.0
	'view_ecard' => 'Se Vostede non consegue visualizar nada clique aqui',
	'view_more_pics' => 'Clique aqui para ver m&aacute;is fotos !',
	'send_success' => 'A s&uacute;a e-card foi enviada!',
	'send_failed' => 'Desculpe, pero o servidor non pode enviar a s&uacute;a e-card...',
	'from' => 'Remitente',
	'your_name' => 'O seu nome',
	'your_email' => 'O seu e-mail',
	'to' => 'Para',
	'rcpt_name' => 'Destinatario',
	'rcpt_email' => 'E-mail do destinatario',
	'greetings' => 'Sa&uacute;dos',
	'message' => 'Mensaxe',
);

// ------------------------------------------------------------------------- 
//
// File editpics.php
// ------------------------------------------------------------------------- 
//

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
	'pic_info' => '&nbsp;Info da Foto',
	'album' => 'album',
	'title' => 'T&iacute;tulo',
	'desc' => 'Descripci&oacute;n',
	'keywords' => 'Palabras-chave',
	'pic_info_str' => '%sx%s - %sKB - %s visitas - %s votos',
	'approve' => 'Aprobar foto',
	'postpone_app' => 'Pospoñer aprobacion',
	'del_pic' => 'Apagar foto',
	'read_exif' => 'Ler EXIF novamente', //cpg1.3.0
	'reset_view_count' => 'Xerar contador',
	'reset_votes' => 'Xerar votos',
	'del_com' => 'ELIMINAR comentarios',
	'upl_approval' => 'Aprobar envio',
	'edit_pics' => 'Editar fotos',
	'see_next' => 'Ver pr&oacute;ximas fotos',
	'see_prev' => 'Ver fotos anteriores',
	'n_pic' => '%s fotos',
	'n_of_pic_to_disp' => 'N&uacute;mero de fotos a amosar',
	'apply' => 'Aplicar modificacions',
	'crop_title' => 'Editor de Fotos', //cpg1.3.0
	'preview' => 'Pre-visualizar', //cpg1.3.0
	'save' => 'Gardar foto', //cpg1.3.0
	'save_thumb' =>'Gardar como miniatura', //cpg1.3.0
	'sel_on_img' =>'A seleccion ten que ser na imaxe enteira!', //js-alert 
//cpg1.3.0

);

// ------------------------------------------------------------------------- 
//
// File faq.php //cpg1.3.0
// Ainda non traduzi.
// ------------------------------------------------------------------------- 
//

if (defined('FAQ_PHP')) $lang_faq_php = array(
  'faq' => 'Preguntas m&aacute;is frecontes', //cpg1.3.0
  'toc' => 'contido', //cpg1.3.0
  'question' => 'Pregunta: ', //cpg1.3.0
  'answer' => 'Resposta: ', //cpg1.3.0
);

if (defined('FAQ_PHP')) $lang_faq_data = array('D&uacute;vidas xerais', //cpg1.3.0

  array('Por qu&eacute; me teño que rexistrar?', 'O Rexistro pode ou non ser requerido polo administrador. O rexistro do usuario, caracter&iacute;sticas adicionais como envio de fotos, listas favoritas, votar e engadir comentarios.', 'allow_user_registration', '0'), //cpg1.3.0
  array('C&oacute;mo fago para rexistrarme?', 'Vaia a &quot;rexistrarse&quot; e rechee os campos obrigatorios (e os opcionais tam&eacute;n se Vostede quere).<br />Se o Administrador tivera a activaci&oacute;n de usuarios por email activada, ent&oacute;n Vostede recibir&aacute; un email inform&aacute;ndoo sobre o rexistro e  dandolle Instrucci&oacute;ns para a activaci&oacute;n da conta. A Sua conta debe ser activada antes de que Vostede tente loguearse.', 'allow_user_registration', '1'), //cpg1.3.0
  array('C&oacute;mo fago para loguear/entrar?', 'Vaia a &quot;Login&quot;, insira seu usuario e contrasinal (marque &quot;Gardar contrasinal&quot; no caso de que Vostede queira loguearse  automaticamente), despois disto Vostede estar&aacute; logueado.<br /><b>IMPORTANTE: O Seu navegador debe estar habilitado para aceptar cookies/(galletas) e non deben ser borradas se Vostede quere manter a funcionalidade da ocpion &quot;Gardar 
contrasinal&quot;.</b>', 'offline', 0), //cpg1.3.0
  array('Por qu&eacute; non consigo loguear?', 'Vostede se rexistrou e activou a sua conta?. É necesario activar a conta antes de loguearse. Para outros tipos de problema para acceder a conta entre en contato co o administrador do site.', 'offline', 0), //cpg1.3.0
  array('Qu&eacute; acontece se eu esquezo a miña contrasinal?', 'Se este site tivera o link &quot;Esquecin miña contrasinal&quot;, &uacute;seo. Se non o houbera, contacte co administrador para pedir unha nova contrasinal.', 'offline', 0), //cpg1.3.0
  //array('What if I changed my email address?', 'Just simply login and change yor email address through quot;Profile&quot;', 'offline', 0), //cpg1.3.0
  array('C&oacute;mo gardo unha imaxe en &quot;Meus Favoritos&quot;?', 'Clique na figura e depois clique en &quot;informaci&oacute;ns da foto&quot; (<img src="images/info.gif" width="16" height="16" border="0" alt="informaci&oacute;ns da Foto" />); procure un pouco m&aacute;is abaixo e enton clique en &quot;engadir a favoritos&quot;.<br />O administrador debe ter a opcion de &quot;informaci&oacute;ns da Foto&quot; activada por defecto.<br />IMPORTANT:cookies debe estar habilitadas en non deben ser borradas.', 'offline', 0), //cpg1.3.
  array('C&oacute;mo voto nunha foto?', 'Na p&aacute;xina da foto, abaixo dela, ten 6 opcions de voto.', 'offline', 0), //cpg1.3.0
  array('C&oacute;mo poño un comentario para unha foto?', 'Na p&aacute;xina da foto ten un campo disponible para que Vostede engada o seu comentario.', 'offline', 0), //cpg1.3.0
  array('C&oacute;mo envio unha foto?', 'Vaia en &quot;Enviar foto&quot;e Seleccione o album para o cal Vostede desexa enviar a foto, clique en &quot;Procurar&quot; e procure a foto para enviar entan clique en &quot;Abrir&quot; (adicione un titulo e unha Descripci&oacute;n se Vostede desexa) e clique en &quot;CONTINUAR&quot;', 'allow_private_albums', 0), //cpg1.3.0
  array('Onde podo enviar a foto?', 'Vostede podera&quot; enviar a foto para un dos albums que tivera na &quot;miña Galeria&quot;. O administrador pode permitir que Vostede envie unha foto para un ou m&aacute;is albums da galeria Principal.', 'allow_private_albums', 0), //cpg1.3.0
  array('Qu&eacute; tipo e qu&eacute; tamaño de foto podo enviar?', 'O tamaño e o tipo da foto (jpg,gif,..etc.) depende do administrador.', 'offline', 0), //cpg1.3.0
  array('O que &eacute; a &quot;miña Galeria&quot;?', '&quot;miña Galeria&quot; &eacute; unha galeria Persoal onde o usuario pode enviar as suas fotos e administralas.', 'allow_private_albums', 0), //cpg1.3.0
  array('C&oacute;mo creo, renomeo ou borro un album na &quot;miña Galeria&quot;?', 'Vostede debe estar no &quot;Modo-Admin&quot;<br />Vaia a &quot;Crear/Ordenar Meus albums&quot;e clique en&quot;Novo&quot;. Troque o nome &quot;Novo album&quot; para poñer o nome que Vostede desexe.<br />Vostede tamen pode renomear calqueira album na sua galeria.<br />Para rematar clique en &quot;Aplicar modificacions&quot;.', 'allow_private_albums', 0), //cpg1.3.0
  array('C&oacute;mo podo restrinxir usuarios de ollar os meus albums?', 'Vostede debe estar no &quot;Modo-Admin&quot;<br />Vaia a &quot;Modificar Meus albums. Na barra &quot;actualizar album&quot;, Seleccione o album que Vostede desexa modificar.<br />Aqui Vostede pode trocar o nome, a Descripci&oacute;n, a figura da miniatura, restrinxir a visualizaci&oacute;n e/ou engadir comentarios/votar.<br 
/>Click &quot;Update album&quot;.', 'allow_private_albums', 0), //cpg1.3.0
  array('C&oacute;mo podo ver outros usuarios da galeria?', 'Vaia a &quot;albums&quot; e depois clique en Membros &quot;Membros&quot;.', 'allow_private_albums', 0), //cpg1.3.0
  array('Qu&eacute; son as cookies?', 'cookies son arquivos que conteñen informaci&oacute;ns que se gardan no seu computador.<br />as cookies xeralmente permiten &oacute; usuario sair e cando volten &oacute; sitio ter varias informaci&oacute;ns gardadas incluindo contrasinal e o login.', 'offline', 0), //cpg1.3.0
  //array('Onde podo encontrar este programa para o meu site?', 'Coppermine is a free Multimedia Gallery, released under GNU GPL. It is full of features and has been ported to various platforms. Visit the <a href="http://coppermine.sf.net/">Coppermine Home Page</a> to find out more or download it.', 'offline', 0), //cpg1.3.0

  'Navegando no Site', //cpg1.3.0
  array('Qu&eacute; &eacute; o boton &quot;albums&quot;?', 'Isto amosar&aacute; toda a galeria co link de cada categoria. As Miniaturas poden ser un link para unha categoria.', 'offline', 0), //cpg1.3.0
  array('Qu&eacute; &eacute; o boton &quot;miña Galeria&quot;?', 'Esta &eacute; unha caracteristica que permite &oacute; usuario ter a sua propia galeria, engadir, Borrar ou modificar albums ou ben enviar fotos.', 'allow_private_albums', 0), //cpg1.3.0
  array('Cal &eacute; a diferencia entre &quot;Modo Admin&quot; e &quot;Modo usuario&quot;?', 'Esta &eacute; unha caracteristica que permite &oacute; usuario, cando esta modo-admin, modificar as suas galerias (e outras cousas se esta permitido polo administrador).', 'allow_private_albums', 0), //cpg1.3.0
  array('Qu&eacute; &eacute; o boton &quot;Enviar foto&quot;?', 'Isto permite &oacute; usuario enviar unha foto (tamaño e tipo son definidos polo adminstrador do site) para a galeria selecionada por Vostede ou polo administrador.', 'allow_private_albums', 0), //cpg1.3.0
  array('Qu&eacute; &eacute; o boton &quot;Derradeiros envios&quot;?', 'Neste link Vostede ver&aacute; a lista das ultimas fotos engadidas &oacute; site.', 'offline', 0), //cpg1.3.0
  array('Qu&eacute; &eacute; o boton &quot;Derradeiros comentarios&quot;?', 'Aqui Vostede ver&aacute; os ultimos comentarios conxuntamente coas suas respectivas fotos en miniatura.', 'offline', 0), //cpg1.3.0
  array('Qu&eacute; &eacute; o boton &quot;m&aacute;is visualizadas&quot;?', 'Aqui Vostede ver&aacute; as fotos listadas por \'m&aacute;is Visualizadas\' (tanto por usuarios rexistrados ou non).', 'offline', 0), //cpg1.3.0
  array('Qu&eacute; &eacute; o boton &quot;m&aacute;is Popularidade&quot;?', 'Nesta parte Vostede ver&aacute; as fotos que teñen m&aacute;is popularidade, incluindo os datos desa popularidade (ex: 5 usuarios votaron <img src="images/rating3.gif" width="65" height="14" border="0" alt="" />: calific&aacute;ndoa como 1 para 5 (1,2,3,4,5) o que resultar&aacute; nunha media de <img src="images/rating3.gif" 
width="65" height="14" border="0" alt="" /> .)<br />As calificacions van de <img src="images/rating5.gif" width="65" height="14" border="0" alt="best" /> (boa) hata <img src="images/rating0.gif" width="65" height="14" border="0" 
alt="worst" /> (terrible).', 'offline', 0), //cpg1.3.0
  array('Qu&eacute; &eacute; o boton &quot;Meus favoritos&quot;?', 'Nesta &aacute;rea Vostede poder&aacute; ver as fotos que Vostede engad&iacute;u nos seu favoritos. Estes favoritos ser&aacute;n gardados como cookie e ficar&aacute;n no seu computador.', 'offline', 0), //cpg1.3.0
);


// ------------------------------------------------------------------------- 
//
// File forgot_passwd.php //cpg1.3.0
// ------------------------------------------------------------------------- 
//

if (defined('FORGOT_PASSWD_PHP')) $lang_forgot_passwd_php = array(
  'forgot_passwd' => 'Lembrar contrasinal', //cpg1.3.0
  'err_already_logged_in' => 'Vostede xa esta logueado !', //cpg1.3.0
  'enter_username_email' => 'Insira o seu login ou o seu email', //cpg1.3.0
  'submit' => 'Enviar', //cpg1.3.0
  'failed_sending_email' => 'O Lembrado da sua contrasinal non pode ser enviado 
para o seu email !', //cpg1.3.0
  'email_sent' => 'un email co seu usuario e sua contrasinal foi enviado para 
%s', //cpg1.3.0
  'err_unk_user' => 'O usuario seleccionado non existe!', //cpg1.3.0
  'passwd_reminder_subject' => '%s - Lembrado de contrasinal', //cpg1.3.0
  'passwd_reminder_body' => 'Vostede solicitou o lembrado da sua contrasinal:
usuario: %s
contrasinal: %s
Acesse %s para logar-se.', //cpg1.3.0
);

// ------------------------------------------------------------------------- 
//
// File groupmgr.php
// ------------------------------------------------------------------------- 
//

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
	'group_name' => 'Nome do Grupo',
	'disk_quota' => 'Quota de disco',
	'can_rate' => 'Poden votar foto',
	'can_send_ecards' => 'Poden enviar e-cards',
	'can_post_com' => 'Poden enviar comentarios',
	'can_upload' => 'Poden enviar fotos',
	'can_have_gallery' => 'Poden ter unha galeria Persoal',
	'apply' => 'Aplicar modificacions',
	'create_new_group' => 'Crear novo grupo',
	'del_groups' => 'Apagar grupo(s) seleccionado(s)',
	'confirm_del' => 'coidado: &oacute; remover un grupo seu contido ser&aacute; 
transferido para \'Rexistrado\' !\n\nquere continuar ?',
	'title' => 'administrar grupos',
	'approval_1' => 'Aprobaci&oacute;n p&uacute;blica (1)',
	'approval_2' => 'Aprobaci&oacute;n privada (2)',
	'upload_form_config' => 'formulario de Configuraci&oacute;n de upload', //cpg1.3.0
  	'upload_form_config_values' => array( 'Envio de un arquivo', 'Envio de 
v&aacute;rios arquivos', 'Envio de URI', 'Envio de ZIP', 'Arquivo-URI', 
'Arquivo-ZIP', 'URI-ZIP', 'Arquivo-URI-ZIP'), //cpg1.3.0
	'custom_user_upload'=>'usuarios poden personalizar o numero de caixas de 
envio?', //cpg1.3.0
	'num_file_upload'=>'numero m&aacute;ximo ou exacto de caixas de envio', //cpg1.3.0
	'num_URI_upload'=>'numero m&aacute;ximo ou exacto de caixas de envio URI', 
//cpg1.3.0
	'note1' => '<b>(1)</b> Envios para un album p&uacute;blico requeren aprobaci&oacute;n do 
administrador',
	'note2' => '<b>(2)</b> Envios requeren aprobaci&oacute;n do administrador',
	'notes' => 'Notas'
);

// ------------------------------------------------------------------------- 
//
// File index.php
// ------------------------------------------------------------------------- 
//

if (defined('INDEX_PHP')){

$lang_index_php = array(
  'welcoe' => 'Sexa Benvido!'
);

$lang_album_admin_menu = array(
	'confirm_delete' => 'ten a certeza que desexa ELIMINAR este album ? \\nTodas 
as fotos e comentarios ser&aacute;n exclu&iacute;dos.',
	'delete' => 'ELIMINAR',
	'modify' => 'PROPIEDADES',
	'edit_pics' => 'EDITAR FOTOS',
);

$lang_list_categories = array(
	'home' => 'Inicio',
	'stat1' => '<b>[pictures]</b> fotos en <b>[albums]</b> albums e 
<b>[cat]</b> categorias con <b>[comments]</b> comentarios vistos 
<b>[views]</b> veces',
	'stat2' => '<b>[pictures]</b> fotos en <b>[albums]</b> albums visitados 
<b>[views]</b> veces',
	'xx_s_gallery' => '%s\'s Galeria',
	'stat3' => '<b>[pictures]</b> fotos en <b>[albums]</b> albums con 
<b>[comments]</b> comentarios, visitadas <b>[views]</b> veces'
);

$lang_list_users = array(
	'user_list' => 'Lista de usuarios',
	'no_user_gal' => 'nengun usuario &eacute; permitido a ter albums',
	'n_albums' => '%s album(s)',
	'n_pics' => '%s foto(s)'
);

$lang_list_albums = array(
	'n_pictures' => '%s foto(s)',
	'last_added' => ', derradeira foto engadida o %s'
);

}

// ------------------------------------------------------------------------- 
//
// File login.php
// ------------------------------------------------------------------------- 
//

if (defined('LOGIN_PHP')) $lang_login_php = array(
  'login' => 'Login',
  'enter_login_pswd' => 'Insira o seu nome de usuario e contrasinal para entrar',
  'username' => 'usuario',
  'password' => 'contrasinal',
  'remember_me' => 'Gardar contrasinal',
  'welcoe' => 'Sexa Benvindo(a) %s ...',
  'err_login' => '*** non foi posible loguear. intente novamente ***',
  'err_already_logged_in' => 'Vostede xa esta logueado !',
  'forgot_password_link' => 'Esquecin a miña contrasinal', //cpg1.3.0
);

// ------------------------------------------------------------------------- 
//
// File logout.php
// ------------------------------------------------------------------------- 
//

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
  'logout' => 'Logout',
  'bye' => 'Volte sempre %s ...',
  'err_not_loged_in' => 'Vostede non esta logueado !',
);

// ------------------------------------------------------------------------- 
//
// File phpinfo.php //cpg1.3.0
// ------------------------------------------------------------------------- 
//

if (defined('PHPINFO_PHP')) $lang_phpinfo_php = array(
  'php_info' => 'Info PHP', //cpg1.3.0
  'explanation' => 'Esta &eacute; a saida gerada pela funcion <a 
href="http://www.php.net/phpinfo">phpinfo()</a>, mostrada co as informaci&oacute;ns 
da galeria.', //cpg1.3.0
  'no_link' => 'Deixar que outras pessoas vexan a sua saida phpinfo() pode ser 
un risco de seguridade, este &eacute; o motivo desta p&aacute;xina so sera mostrada cando 
Vostede estea logueado como admin. Vostede non pode engadir o link desta p&aacute;xina para 
outros, eles ter&aacute;n acesso negado.', //cpg1.3.0
);

// ------------------------------------------------------------------------- 
//
// File modifyalb.php
// ------------------------------------------------------------------------- 
//

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
	'upd_alb_n' => 'actualizar album %s',
	'general_settings' => 'Configuraci&oacute;ns xerais',
	'alb_title' => 'T&iacute;tulo do album',
	'alb_cat' => 'Categoria do album',
	'alb_desc' => 'Descripci&oacute;n do album',
	'alb_thumb' => 'Miniatura do album',
	'alb_perm' => 'permisos para este album',
	'can_view' => 'album pode ser visto por',
	'can_upload' => 'Visitantes poden enviar fotos',
	'can_post_comments' => 'Visitantes poden enviar comentarios',
	'can_rate' => 'Visitantes poden votar nas fotos',
	'user_gal' => 'Galeria do usuario',
	'no_cat' => '* sen categoria *',
	'alb_empty' => 'album valeiro',
	'last_uploaded' => 'Último envio',
	'public_alb' => 'Todos (album p&uacute;blico)',
	'me_only' => 's&oacute; eu',
	'owner_only' => 's&oacute; o dono do album (%s)',
	'groupp_only' => 'Membros do grupo\'%s\' ',
	'err_no_alb_to_modify' => 'Vostede non pode modificar nengun album no banco de 
datos.',
	'update' => 'actualizar album',
  	'notice1' => '(*) dependendo das configurações dos %sgrupos%s', 
//cpg1.3.0 (do not translate %s!)
);

// ------------------------------------------------------------------------- 
//
// File ratepic.php
// ------------------------------------------------------------------------- 
//

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
	'already_rated' => 'Desculpe, pero Vostede xa votou esta foto',
	'rate_ok' => 'O sei voto foi feito',
	'forbidden' => 'Vostede non pode votar as suas propias fotos.', //cpg1.3.0
);

// ------------------------------------------------------------------------- 
//
// File register.php & profile.php
// ------------------------------------------------------------------------- 
//

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
En canto os administradores do site ( {SITE_NAME} ) tentaran remover 
qualqueira contido indesexable, &eacute; imposible revisar todas as 
fotos, Vostede recoñece que todas as fotos feitas por Vostede neste site 
expresan as suas opnions e non as dos administradores ou do webmaster (Ag&aacute;s os seus mesmos) desfac&eacute;ndose de calqueira 
responsabilidade.<br />
<br />
Vostede acorda non postear nengun material abusivo, obsceno, vulgar, odiable, 
que indique sexualidade ou calqueira outro material que viole calqueira lei 
aplicable. Vostede concorda que calqueira Webmaster, Administrador e moderador 
do site ( {SITE_NAME} ) ten o dereito de remover, editar calqueira conte&iacute;do a 
calqueira hora que sexa necesario. Como usuario Vostede concorda que todas as 
informaci&oacute;ns dadas por Vostede ser&aacute;n gardadas no noso banco de datos, e
que estas informaci&oacute;ns non sexan enviadas a nengunha terceira persoa sen o seu 
consentimento. O Webmaster e o Administrador non se responsibilizar&aacute;n por 
nengunha acci&oacute;n hacker que poida comprometer os datos.<br />
<br />
Este site usa cookies para almacenar informaci&oacute;ns no seu computador. Estas 
cookies serven s&oacute; para proveer de maior tecnoloxia &oacute; site. O seu email &eacute; 
usado s&oacute; para confirmar os detalles do seu rexistro e sua contrasinal.<br />
<br />
Clicando en 'Estou dacordo', Vostede concorda con todos estas condicions.
EOT;

$lang_register_php = array(
	'page_title' => 'rexistro DE USUARIO',
	'term_cond' => 'Termos e condicions',
	'i_agree' => 'Estou dacordo',
	'submit' => 'Enviar rexistro',
	'err_user_exists' => 'Este nome de usuario xa existe, por favor intente 
outro',
	'err_password_mismatch' => 'As duas contrasinais non concordan. Insira 
novamente',
	'err_unhame_short' => 'Nome de usuario precisa ter m&iacute;nimo 2 caracteres',
	'err_password_short' => 'Sua contrasinal ten que ter un m&iacute;nimo de 2 caracteres',
	'err_unhame_pass_diff' => 'Nome de usuario e contrasinal deben ser diferentes',
	'err_invalid_email' => 'Enderezo de e-mail inv&aacute;lido',
	'err_duplicate_email' => 'xa existe outro usuario Rexistrado con este 
e-mail',
	'enter_info' => 'Entre coas informaci&oacute;ns de rexistro',
	'required_info' => 'Informaci&oacute;n Obrigatoria',
	'optional_info' => 'Informaci&oacute;n Opcional',
	'username' => 'usuario',
	'password' => 'contrasinal',
	'password_again' => 'reescriba a contrasinal',
	'email' => 'E-mail',
	'location' => 'Enderezo',
	'interests' => 'Intereses',
	'website' => 'Home page',
	'occupation' => 'Profesi&oacute;n',
	'error' => 'ERRO',
	'confirm_email_subject' => '%s - CONFIRMACION DE rexistro',
	'information' => 'Informaci&oacute;n',
	'failed_sending_email' => 'O e-mail de confirmaci&oacute;n de rexistro non pode ser 
enviado !',
	'thank_you' => 'Graciñas por rexistrarse.<br /><br />As informaci&oacute;ns para 
finalizar o seu rexistro foron enviadas para o seu e-mail.',
	'acct_created' => 'A Sua conta foi creada e agora Vostede pode entrar co seu 
usuario e sua contrasinal',
	'acct_active' => 'A Sua conta xa est&aacute; activa. Entre co seu usuario e contrasinal 
para loguear',
	'acct_already_act' => 'Sua conta xa est&aacute; activa !',
	'acct_act_failed' => 'Esta conta ainda non est&aacute; activa  !',
	'err_unk_user' => 'usuario seleccionado non existe !',
	'x_s_profile' => 'Perfil de %s',
	'group' => 'Grupo',
	'reg_date' => 'Participante',
	'disk_usage' => 'Uso do disco',
	'change_pass' => 'trocar contrasinal',
	'current_pass' => 'contrasinal atual',
	'new_pass' => 'Nova contrasinal',
	'new_pass_again' => 'reescriba a nova contrasinal',
	'err_curr_pass' => 'contrasinal atual INCORRECTA',
	'apply_modif' => 'Gardar modificacions',
	'change_pass' => 'trocar miña contrasinal',
	'update_success' => 'Seus datos foron atualizados',
	'pass_chg_success' => 'Sua contrasinal foi trocada',
	'pass_chg_error' => 'Sua contrasinal non foi trocada',
	'notify_admin_email_subject' => '%s - Notificacci&oacute;n de rexistro', //cpg1.3.0
	'notify_admin_email_body' => 'O usuario "%s" foi Rexistrado na sua 
galeria', //cpg1.3.0
);

$lang_register_confirm_email = <<<EOT
Graciñas por rexistrarse na {SITE_NAME}

Seu usuario &eacute; : "{USER_NAME}"
Sua contrasinal &eacute; : "{PASSWORD}"

Para activar a sua conta Vostede precisa acceder &oacute; link de abaixo:
Clique ou copie e pegue no seu navegador

{ACT_LINK}

Graciñas polo rexistro,

deica logo,
Administrador
{SITE_NAME}

EOT;

}

// ------------------------------------------------------------------------- 
//
// File reviewcom.php
// ------------------------------------------------------------------------- 
//

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
	'title' => 'Revisar comentarios',
	'no_comment' => 'non hai comentarios para revisar',
	'n_comm_del' => '%s comentario(s) borrado(s)',
	'n_comm_disp' => 'N&uacute;mero de comentarios para visualizar',
	'see_prev' => 'Anterior',
	'see_next' => 'Pr&oacute;ximo',
	'del_comm' => 'Borrar comentarios seleccionados',
);


// ------------------------------------------------------------------------- 
//
// File search.php - OK
// ------------------------------------------------------------------------- 
//

if (defined('SEARCH_PHP')) $lang_search_php = array(
	0 => 'Procurar na galeria de fotos de Sarria',
);

// ------------------------------------------------------------------------- 
//
// File searchnew.php
// ------------------------------------------------------------------------- 
//

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
	'page_title' => 'Procurar novas fotos',
	'select_dir' => 'Seleccionar directorio',
	'select_dir_msg' => 'Esta funcion  permitelle enviar diversas fotos ao mesmo 
tempo.<br /><br />Seleccione o directorio das fotos',
	'no_pic_to_add' => 'non hai fotos para engadir',
	'need_one_album' => 'Vostede precisa ter polo menos un album para usar esta 
funcion',
	'warning' => 'coidado',
	'change_perm' => 'O script non pode grabar neste directorio que debe ter 
permiso 755 ou 777 !',
	'target_album' => '<b>Colocar fotos do &quot;</b>%s<b>&quot; en </b>%s',
	'folder' => 'cartafol',
	'image' => 'Foto',
	'album' => 'album',
	'result' => 'Resultado',
	'dir_ro' => 'non grabable. ',
	'dir_cant_read' => 'non pode ser lido. ',
	'insert' => 'Adicionando novas fotos &aacute; galeria',
	'list_new_pic' => 'Lista das novas fotos',
	'insert_selected' => 'Inserir fotos seleccionadas',
	'no_pic_found' => 'nengunha foto nova foi encontrada',
	'be_patient' => 'Por favor teña pacenza. O sistema nescesita de tempo 
para enviar as fotos',
	'notes' =>  '<ul>'.
				'<li><b>OK</b> : Significa que foi enviado con exito'.
				'<li><b>DP</b> : Significa que existe un duplicado na base de datos'.
				'<li><b>PB</b> : Significa que non pode ser enviado, verifique sua 
Configuraci&oacute;n e os permisos dos directorios.'.
				'<li><b>NA</b> : Significa que Vostede non seleccionou nengun album para 
engadir as fotos, clique en \'<a 
href="javascript:history.back(1)">voltar</a>\' e seleccione un album. Se Vostede 
non ten un album <a href="albmgr.php">cree un primeiro</a></li>'.
				'<li>Se un dos \'simbolos\' OK, DP ou PB non apareceren clique no 
simbolo co problema para recibir a Mensaxe de erro'.
				'<li>Se o tempo expira, intente novamente actualizando a p&aacute;xina'.
				'</ul>', //cpg1.3.0
	'select_album' => 'seleccionar album', //cpg1.3.0
	'check_all' => 'Marcar Todo', //cpg1.3.0
	'uncheck_all' => 'Desmarcar Todo', //cpg1.3.0
);


// ------------------------------------------------------------------------- 
//
// File thumbnails.php
// ------------------------------------------------------------------------- 
//

// Void

// ------------------------------------------------------------------------- 
//
// File banning.php
// ------------------------------------------------------------------------- 
//

if (defined('BANNING_PHP')) $lang_banning_php = array(
	'title' => 'Banear usuarios',
	'user_name' => 'Nome do usuario',
	'ip_address' => 'IP',
	'expiry' => 'Expira en (en branco significa que &eacute; permanente)',
	'edit_ban' => 'Gardar cambios',
	'delete_ban' => 'Borrar',
	'add_new' => 'engadir novo Ban',
	'add_ban' => 'engadir',
	'error_user' => 'non foi posible encontrar o usuario', //cpg1.3.0
	'error_specify' => 'Vostede precisa especificar un usuario ou IP', //cpg1.3.0
	'error_ban_id' => 'ID de ban inv&aacute;lido!', //cpg1.3.0
	'error_admin_ban' => 'Vostede non pode banir Vostede mesmo!', //cpg1.3.0
	'error_server_ban' => 'Vostede vai banir seu pr&oacute;prio servidor? Vostede non pode 
facer isso...', //cpg1.3.0
	'error_ip_forbidden' => 'Vostede non pode banir este IP - este non &eacute; 
roteavel!', //cpg1.3.0
	'lookup_ip' => 'Olle un IP acima', //cpg1.3.0
	'submit' => 'Enviar!', //cpg1.3.0
);

// ------------------------------------------------------------------------- 
//
// File upload.php
// ------------------------------------------------------------------------- 
//

if (defined('UPLOAD_PHP')) $lang_upload_php = array(
  'title' => 'Envio de Foto', //cpg1.3.0
  'custom_title' => 'Formulario de Pedidos personalizable', //cpg1.3.0
  'cust_instr_1' => 'Vostede debe selecionar un numero personalizable de caixas 
de envio. mentres Vostede non pode selecionar m&aacute;is do que os limites amosados 
abaixo.', //cpg1.3.0
  'cust_instr_2' => 'numero de Caixas de Pedidos', //cpg1.3.0
  'cust_instr_3' => 'Caixas de envio de arquivo: %s', //cpg1.3.0
  'cust_instr_4' => 'Caixas de envio de URI/URL: %s', //cpg1.3.0
  'cust_instr_5' => 'Caixas de envio de URI/URL:', //cpg1.3.0
  'cust_instr_6' => 'Caixas de envio de arquivo:', //cpg1.3.0
  'cust_instr_7' => 'Por favor insira o numero de cada tipo de caixa de 
envio que Vostede desexa desta vez e clique en \'Continuar\'. ', //cpg1.3.0
  'reg_instr_1' => 'acci&oacute;n inv&aacute;lida para o formulario de creacion.', //cpg1.3.0
  'reg_instr_2' => 'Agora Vostede debe enviar seus arquivos usando as caixas de 
envio de abaixo. Os arquivos a seren enviados para o servidor non poden exceder 
o tamaño de %s KB cada. Arquivos ZIP enviados para a seccion de \'Envio de 
Arquivo\' e \'Envio de URI/URL\' iran permanecer copactados.', //cpg1.3.0
  'reg_instr_3' => 'Se Vostede quiser o arquivo zipado ou que o arquivo seja 
descopactado, Vostede debe usar a caixa de envio especial para isto, area 
\'Envio de ZIP co descopactacci&oacute;n\'.', //cpg1.3.0
  'reg_instr_4' => 'cando usar a seccion de envio URI/URL, por favor insira o 
caminho para o arquivo. Ex: http://www.meusite.co.br/imaxes/foto.jpg', 
//cpg1.3.0
  'reg_instr_5' => 'cando Vostede remate de completar o formulario, por 
favor clique en \'Continuar\'.', //cpg1.3.0
  'reg_instr_6' => 'Envio de ZIP co descopactacci&oacute;n:', //cpg1.3.0
  'reg_instr_7' => 'Envio de arquivos:', //cpg1.3.0
  'reg_instr_8' => 'Envio de URI/URL:', //cpg1.3.0
  'error_report' => 'Relat&oacute;rio de Erro', //cpg1.3.0
  'error_instr' => 'ocorreran erros nos seguintes envios:', //cpg1.3.0
  'file_name_url' => 'Arquivo/URL', //cpg1.3.0
  'error_message' => 'Mensaxe de Erro', //cpg1.3.0
  'no_post' => 'nengun arquivo seleccionado.', //cpg1.3.0
  'forb_ext' => 'extension de arquivo proibida.', //cpg1.3.0
  'exc_php_ini' => 'tamaño de arquivo excedido permitido para o php.ini.', 
//cpg1.3.0
  'exc_file_size' => 'tamaño de arquivo excedido permitido para a galeria.', 
//cpg1.3.0
  'partial_upload' => 's&oacute; envio parcial.', //cpg1.3.0
  'no_upload' => 'nengun envio ocorrido.', //cpg1.3.0
  'unknown_code' => 'Codigo de erro PHP de envio, inv&aacute;lido.', //cpg1.3.0
  'no_temp_name' => 'nengun envio - nengun nome temporal.', //cpg1.3.0
  'no_file_size' => 'Esta en branco/corrupto', //cpg1.3.0
  'impossible' => 'Imposible mover.', //cpg1.3.0
  'not_image' => 'non &eacute; unha imaxe/corrupta', //cpg1.3.0
  'not_GD' => 'non &eacute; unha extension GD.', //cpg1.3.0
  'pixel_allowance' => 'tamaño de pixel excedido.', //cpg1.3.0
  'incorrect_prefix' => 'Prefixo de URI/URL incorrecto', //cpg1.3.0
  'could_not_open_URI' => 'non foi posible abrir a URI.', //cpg1.3.0
  'unsafe_URI' => 'seguridade non verificable.', //cpg1.3.0
  'meta_data_failure' => 'erro da Meta data', //cpg1.3.0
  'http_401' => '401 unhauthorized', //cpg1.3.0
  'http_402' => '402 Payment Required', //cpg1.3.0
  'http_403' => '403 Forbidden', //cpg1.3.0
  'http_404' => '404 Not Found', //cpg1.3.0
  'http_500' => '500 Internal Server Error', //cpg1.3.0
  'http_503' => '503 Service unhavailable', //cpg1.3.0
  'MIME_extraction_failure' => 'MIME non pode ser determinado.', //cpg1.3.0
  'MIME_type_unknown' => 'Tipo de MIME inv&aacute;lido', //cpg1.3.0
  'cant_create_write' => 'non foi posible Crear un arquivo grabable.', 
//cpg1.3.0
  'not_writable' => 'non foi posible grabar nun arquivo grabable.', 
//cpg1.3.0
  'cant_read_URI' => 'non foi posible ler a URI/URL', //cpg1.3.0
  'cant_open_write_file' => 'non foi posible abrir o arquivo URI 
grabable.', //cpg1.3.0
  'cant_write_write_file' => 'non foi posible grabar no arquivo URI 
grabable.', //cpg1.3.0
  'cant_unzip' => 'non foi posible descomprimir.', //cpg1.3.0
  'unknown' => 'Erro inv&aacute;lido', //cpg1.3.0
  'succ' => 'Envio realizado con exito', //cpg1.3.0
  'success' => '%s envios con exito.', //cpg1.3.0
  'add' => 'Por favor clique en \'Continuar\' para engadir os arquivos nos 
aalbums.', //cpg1.3.0
  'failure' => 'erro de envio', //cpg1.3.0
  'f_info' => 'Informaci&oacute;n do Arquivo', //cpg1.3.0
  'no_place' => 'O arquivo anterior non pode ser inserido.', //cpg1.3.0
  'yes_place' => 'O arquivo anterior foi inserido con exito.', //cpg1.3.0
  'max_fsize' => 'O tamaño m&aacute;ximo permitido de arquivo &eacute; %s KB',
  'album' => 'album',
  'picture' => 'Foto', //cpg1.3.0
  'pic_title' => 'Titulo da Foto', //cpg1.3.0
  'description' => 'Descripci&oacute;n da Foto', //cpg1.3.0
  'keywords' => 'Palabras-Chave (separado con espazos)',
  'err_no_alb_uploadables' => 'Desculpe, Vostede non esta autorizado a enviar 
arquivos para nengun album', //cpg1.3.0
  'place_instr_1' => 'Por favor insira os arquivos no album agora. Vostede debe 
tamen inserir informaci&oacute;ns sobre cada arquivo agora.', //cpg1.3.0
  'place_instr_2' => 'm&aacute;is arquivos precisan ser colocados. Por favor clique 
en \'Continuar\'.', //cpg1.3.0
  'process_coplete' => 'Vostede inseriu con exito todo-los arquivos.', 
//cpg1.3.0
);

// ------------------------------------------------------------------------- 
//
// File usermgr.php
// ------------------------------------------------------------------------- 
//

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
	'title' => 'administrar usuarios',
	'name_a' => 'Nome Ascendente',
	'name_d' => 'Nome Descendente',
	'group_a' => 'Grupo Ascendente',
	'group_d' => 'Grupo Descendente',
	'reg_a' => 'Data de rexistro Ascendente',
	'reg_d' => 'Data de rexistro Descendente',
	'pic_a' => 'Contagen de fotos ascendente',
	'pic_d' => 'Constagen de foto descendente',
	'disku_a' => 'Uso de disco ascendente',
	'disku_d' => 'Uso de disco descendente',
	'lv_a' => 'Ultima visita Ascendente', //cpg1.3.0
	'lv_d' => 'Ultima visita Descendente', //cpg1.3.0
	'sort_by' => 'Listar usuarios por',
	'err_no_users' => 'A Tabela de usuarios est&aacute; vacia !',
	'err_edit_self' => 'Vostede non pode trocar os seus datos \'persoais\', use o 
link \'Meus datos\' para isto ',
	'edit' => 'EDITAR',
	'delete' => 'ELIMINAR',
	'name' => 'usuario',
	'group' => 'Grupo',
	'inactive' => 'Inactivo',
	'operations' => 'Operacions',
	'pictures' => 'Fotos',
	'disk_space' => 'espazo usado / cuota',
	'registered_on' => 'Rexistrado en',
	'last_visit' => 'Ultima Visita', //cpg1.3.0
	'u_user_on_p_pages' => '%d usuario(s) en %d p&aacute;xina(s)',
	'confirm_del' => 'ten a certeza de que quere ELIMINAR este usuario ? \\nTodas as 
fotos e albums del ser&aacute;n removidos.',
	'mail' => 'EMAIL',
	'err_unknown_user' => 'usuario seleccionado non existe !',
	'modify_user' => 'Modificar usuario',
	'notes' => 'Notas',
	'note_list' => '<li>Se Vostede non quere trocar a sua contrasinal, deixe o campo en 
branco',
	'password' => 'contrasinal',
	'user_active' => 'usuario esta activo',
	'user_group' => 'Grupo de usuarios',
	'user_email' => 'email do usuario',
	'user_web_site' => 'Sitio do usuario',
	'create_new_user' => 'Crear novo usuario',
	'user_location' => 'Enderezo',
	'user_interests' => 'Intereses',
	'user_occupation' => 'Ocupacion',
	'latest_upload' => 'Envios Recentes', //cpg1.3.0
	'never' => 'nunca', //cpg1.3.0
);

// ------------------------------------------------------------------------- 
//
// File util.php
// ------------------------------------------------------------------------- 
//

if (defined('UTIL_PHP')) $lang_util_php = array(
  'title' => 'Utilidades para o Admin (Redimensionar)', //cpg1.3.0
  'what_it_does' => 'O que este utilidade pode facer:',
  'what_update_titles' => 'actualizar titulos do arquivo',
  'what_delete_title' => 'Borrar titulos',
  'what_rebuild' => 'Refacer miniaturas e redimensionar fotos',
  'what_delete_originals' => 'Sustituir foto por unha redimensionada',
  'file' => 'Arquivo',
  'title_set_to' => 'titulo setado para',
  'submit_form' => 'enviar',
  'updated_succesfully' => 'actualizado con exito',
  'error_create' => 'ERRO creando',
  'continue' => 'Procesar m&aacute;is imaxes',
  'main_success' => 'O arquivo %s foi co arquivo principal', //cpg1.3.0
  'error_rename' => 'Erro renomeando %s para %s',
  'error_not_found' => 'O arquivo %s non foi atopado',
  'back' => 'voltar para a p&aacute;xina principal',
  'thumbs_wait' => 'Actualizando miniaturas e/ou imaxes redimensionadas, por 
favor agarde...',
  'thumbs_continue_wait' => 'Continuando a actualizar miniaturas e/ou imaxes 
redimensionadas...',
  'titles_wait' => 'actualizando titulos, por favor agarde...',
  'delete_wait' => 'Borrando titulos, por favor agarde...',
  'replace_wait' => 'Borrando orixinais e repoñ&eacute;ndoas c&aacute;s imaxes 
redimensionadas, por favor agarde..',
  'instruction' => 'Instrucci&oacute;ns r&aacute;pidas',
  'instruction_action' => 'Seleccione a acci&oacute;n',
  'instruction_parameter' => 'Axuste os paramentos',
  'instruction_album' => 'Seleccione o album',
  'instruction_press' => 'Prema %s',
  'update' => 'actualizar miniaturas e/ou redimensionar fotos',
  'update_what' => 'O que debe ser atualizado',
  'update_thumb' => 's&oacute; miniaturas',
  'update_pic' => 's&oacute; imaxes redimensionadas',
  'update_both' => 'Miniaturas e imaxes redimensionadas',
  'update_number' => 'N&uacute;mero de imaxes procesadas por clic',
  'update_option' => '(intente un numero menor no caso de que Vostede siga tendo 
problemas co timeout)',
  'filename_title' => 'Arquivo &rArr; Titulo do arquivo', //cpg1.3.0
  'filename_how' => 'o arquivo debe ser modificado',
  'filename_remove' => ' o .jpg no final e colocar _ (underline) co 
espazos',
  'filename_euro' => 'trocar 2003_11_23_13_20_20.jpg para 23/11/2003 
13:20',
  'filename_us' => 'trocar 2003_11_23_13_20_20.jpg para 11/23/2003 13:20',
  'filename_time' => 'trocar 2003_11_23_13_20_20.jpg para 13:20',
  'delete' => 'Borrar t&iacute;tulo de arquivos ou tamaños orixinais de fotos', 
//cpg1.3.0
  'delete_title' => 'Borrar titulo de arquivos', //cpg1.3.0
  'delete_orixinal' => 'Borrar tamaño orixinal de fotos',
  'delete_replace' => 'borra as imaxes orixinais repoñ&eacute;ndoas c&aacute; version 
redimensionada',
  'select_album' => 'Seleccione o album',
  'delete_orphans' => 'Borrar comentarios &oacute;rfanos (funciona en todos os 
albums)', //cpg1.3.0
  'orphan_coment' => 'comentarios &oacute;rfanos atopados', //cpg1.3.0
  'delete' => 'Borrar', //cpg1.3.0
  'delete_all' => 'Borrar todos', //cpg1.3.0
  'coment' => 'comentario: ', //cpg1.3.0
  'nonexist' => 'atachado nun arquivo que non existe # ', //cpg1.3.0
  'phpinfo' => 'Amosar phpinfo', //cpg1.3.0
  'update_db' => 'actualizar banco de datos', //cpg1.3.0
  'update_db_explanation' => 'Se Vostede sustituiu arquivos da galeria, 
engad&iacute;u algunha modificacci&oacute;n ou actualizou dunha version anterior da galeria, 
teña aseg&uacute;rese de darlle a atualizacci&oacute;n do banco de datos unha vez. Isto 
crear&aacute; as tabelas necesarias e/ou valores de configuraci&oacute;n no seu banco 
de datos.', //cpg1.3.0
);

?>
