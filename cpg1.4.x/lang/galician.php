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
  Coppermine version: 1.4.26
  $HeadURL$
  $Revision$
  $Author$
  $Date$
**********************************************/

if (!defined('IN_COPPERMINE')) { die('Not in Coppermine...');}

// info about translators and translated language
$lang_translation_info = array(
  'lang_name_english' => 'Galician', //cpg1.4
  'lang_name_native' => 'Galego', //cpg1.4
  'lang_country_code' => 'gl_ES', //cpg1.4
  'trans_name'=> 'Jesús Quintana (Quinti) + CiberIrmandade da Fala',
  'trans_email' => 'infoxeral@ciberirmandade.org',
  'trans_website' => 'http://www.ciberirmandade.org',
  'trans_date' => '12/09/2005/', 
);

$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('Bytes', 'KB', 'MB');

// Day of weeks and months
$lang_day_of_week = array('Dom', 'Lun', 'Mar', 'Mer', 'Xov', 'Ven', 'Sab');
$lang_month = array('Xan', 'Feb', 'Mar', 'Abr', 'Mai', 'Xuñ', 'Xul', 'Ago', 'Set', 'Out', 'Nov', 'Dec');

// Some comon strings
$lang_yes = 'Si';
$lang_no  = 'Non';
$lang_back = 'VOLVER';
$lang_continue = 'CONTINUAR';
$lang_info = 'Información';
$lang_error = 'Erro';
$lang_check_uncheck_all = 'marcar/desmarcar todo'; //cpg1.4

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$album_date_fmt =    '%d de %B do %Y';
$lastcom_date_fmt =  '%d/%m/%y ás %H:%M'; //cpg1.3.0
$lastup_date_fmt = '%d de %B do %Y';
$register_date_fmt = '%d de %B do %Y';
$lasthit_date_fmt = '%d de %B do %Y ás %I:%M %p'; //cpg1.3.0
$comment_date_fmt =  '%d de %B do %Y ás %I:%M %p'; //cpg1.3.0
$log_date_fmt = '%d de %B do %Y ás %I:%M %p'; //cpg1.4

// For the word censor
$lang_bad_words = array('');


$lang_meta_album_names = array(
  'random' => 'Fotos ó chou',
  'lastup' => 'Últimas adicións',
'lastalb'=> 'Últimos albums actualizados',
  'lastcom' => 'Últimos comentarios',
  'topn' => 'O máis visto',
  'toprated' => 'O mellor cualificado',
  'lasthits' => 'O visto máis recentemente',
  'search' => 'Resultados da procura',
  'favpics'=> 'Arquivos favoritos', //cpg1.4
);

$lang_errors = array(
	'access_denied' => 'Non tes permiso para acceder a esta páxina.',
	'perm_denied' => 'Non tes permiso para efectuar esta operación.',
	'param_missing' => 'Script executado sen os parámetro(s) requirido(s).',
	'non_exist_ap' => 'Non se atopou o álbum ou foto que seleccionaches!',
	'quota_exceeded' => 'Cota de espazo no disco excedida<br /><br />Tes unha cota de espazo de [quota]KB, e as túas fotos actualmente utilizan [space]KB. Se engades este arquivo sobrepasarás a túa cota.',
	'gd_file_type_err' => 'Cando se use a biblioteca de imaxes GD só se permiten imaxes JPEG e PNG.',
	'invalid_image' => 'A imaxe que subiches está corrupta ou non pode ser interpretada pola biblioteca GD',
	'resize_failed' => 'Non foi posible crear a miniatura ou a imaxe reducida.',
	'no_img_to_display' => 'Non hai imaxes para amosar',
	'non_exist_cat' => 'A categoría seleccionada non existe',
	'orphan_cat' => 'Hai unha categoría que non ten categoría-nai, vai ó administrador de categorías para corrixir o problema.',
	'directory_ro' => 'O directorio \'%s\' non ten permisos de escritura, polo que as fotos non poden ser borradas',
	'non_exist_comment' => 'O comentario seleccionado non existe.',
	'pic_in_invalid_album' => 'O arquivo está nun álbum inexistente (%s)!?',
	'banned' => 'Actualmente estás bloqueado e non se che permite o uso deste sitio.',
	'not_with_udb' => 'Esta función está desactivada no Coppermine xa que está integrada no programa de foros. Ou ben o que estás tentando facer non está permitido nesta configuración, ou ben a función debe ser chamada polo programa de foros.',
	'offline_title' => 'Fóra de liña.', //cpg1.3.0
	'offline_text' => 'A galería está fóra de liña neste intre - tenta entrar de novo máis tarde', //cpg1.3.0
	'ecards_empty' => 'Actualmente non hai rexistro ningún de postais-e para visualizar.', //cpg1.3.0
	'action_failed' => 'Acción non completada. O Coppermine non puido procesar a túa petición.', //cpg1.3.0
'no_zip' => 'As bibliotecas necesarias para procesar os arquivos ZIP non estan dispoñibles. Por favor contacta co teu administrador do Coppermine.', //cpg1.3.0
	'zip_type' => 'Non tes permiso para subir arquivos ZIP.', //cpg1.3.0
    'database_query' => 'Houbo un erro ó tentar procesar unha petición ó banco de datos', //cpg1.4
    'register_globals_on' => 'The PHP setting register_globals is enabled on your server, which is a bad idea in terms of security. It\'s strongly recommended to turn it off. [<a href="http://forum.coppermine-gallery.net/index.php/topic,59569.0.html" rel="external" class="external">more</a>]',
);

$lang_bbcode_help_title = 'Axuda bbcode'; //cpg1.4
$lang_bbcode_help = 'Podes engadir ligazóns nas que se poida premer e formatear este campo usando etiquetas bbcode: <li>[b]Resaltado[/b] =&gt; <b>Resaltado</b></li><li>[i]Cursiva[/i] =&gt; <i>Cursiva</i></li><li>[url=http://www.ciberirmandade.org/]Texto Url[/url] =&gt; <a href="http://www.ciberirmandade.org">Text Url</a></li><li>[email]usuario@dominio.gz[/email] =&gt; <a href="mailto:usuario@dominio.gz">usuario@dominio.gz</a></li><li>[color=red]calquera texto[/color] =&gt; <span style="color:red">calquera texto</span></li><li>[img]http://coppermine-gallery.net/demo/cpg14x/images/red.gif[/img] => <img src="../images/red.gif" border="0" alt="" /></li>'; //cpg1.4

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
  'alb_list_title' => 'Ir á lista de albums',
  'alb_list_lnk' => 'Albums',
  'my_gal_title' => 'Ir á miña Galería Persoal',
  'my_gal_lnk' => 'A Miña Galería',
  'my_prof_title' => 'Ir ó meu perfil persoal', //cpg1.4	
  'my_prof_lnk' => 'Os Meus datos',
  'adm_mode_title' => 'Trocar ó modo Administrador',
  'adm_mode_lnk' => 'Modo Administrador',
  'usr_mode_title' => 'Trocar ó modo usuario',
  'usr_mode_lnk' => 'Modo usuario',
  'upload_pic_title' => 'Enviar foto ó album',
  'upload_pic_lnk' => 'Enviar foto',
  'register_title' => 'Crear unha conta',
  'register_lnk' => 'Preme aquí para te rexistrar',
  'login_title' => 'Iniciar a miña sesión', //cpg1.4
  'login_lnk' => 'Iniciar sesión',
  'logout_title' => 'Pechar a miña sesión', //cpg1.4
  'logout_lnk' => 'Pechar sesión',
  'lastup_title' => 'Amosar as subidas máis recentes', //cpg1.4
'lastup_lnk' => 'Últimos envíos',
  'lastcom_title' => 'Amosar os comentarios máis recentes', //cpg1.4
  'lastcom_lnk' => 'Últimos comentarios',
  'topn_title' => 'Amosar os elementos máis vistos', //cpg1.4
  'topn_lnk' => 'Máis Vistos',
  'toprated_title' => 'Amosar os elementos mellor cualificados', //cpg1.4
'toprated_lnk' => 'Fotos Mellor Cualificadas',
  'search_title' => 'Procurar a galería', //cpg1.4
  'search_lnk' => 'Procurar',
  'fav_title' => 'Ir ós meus favoritos', //cpg1.4
'fav_lnk' => 'Os meus Favoritos',
  'memberlist_title' => 'Lista de Membros', //cpg1.3.0
	'memberlist_lnk' => 'Membros', //cpg1.3.0
'faq_title' => 'Preguntas máis Frecuentes sobre a Galería', //cpg1.3.0
	'faq_lnk' => 'FAQ', //cpg1.3.0
);

$lang_gallery_admin_menu = array(
'upl_app_title' => 'Aprobar novas Fotos', //cpg1.4
'upl_app_lnk' => 'Aprobar Fotos',
'admin_title' => 'Ir a Configuración', //cpg1.4
'admin_lnk' => 'Configuración', //cpg1.4
'albums_title' => 'Ir a Configuración de Albums', //cpg1.4
'albums_lnk' => 'Albums',
'categories_title' => 'Ir a Configuración de Categorías', //cpg1.4
'categories_lnk' => 'Categorías',
'users_title' => 'Ir a Configuración de Usuarios', //cpg1.4
'users_lnk' => 'Usuarios',
'groups_title' => 'Ir a Configurar Grupos', //cpg1.4
'groups_lnk' => 'Grupos',
'comments_title' => 'Revisar comentarios', //cpg1.4
'comments_lnk' => 'Revisar Comentarios',
'searchnew_title' => 'Ir a engadir Fotos', //cpg1.4
'searchnew_lnk' => 'Engadir Fotos',
'util_title' => 'Ir a ferramentas administrativas', //cpg1.4
'util_lnk' => 'Ferramentas Administrativas', //cpg1.3.0
'key_title' => 'Ir a diccionarios', //cpg1.4
'key_lnk' => 'Diccionario', //cpg1.4
'ban_title' => 'Ir a Usuarios baneados', //cpg1.4
'ban_lnk' => 'Usuarios Baneados',
'db_ecard_title' => 'Visualizar postais', //cpg1.4
'db_ecard_lnk' => 'Visualizar Postais', //cpg1.3.0
'pictures_title' => 'Ir a Ordenar Fotos', //cpg1.4
'pictures_lnk' => 'Ordenar fotos', //cpg1.4
'documentation_lnk' => 'Documentación', //cpg1.4
 'documentation_title' => 'Coppermine manual', //cpg1.4
);

$lang_user_admin_menu = array(
'albmgr_title' => 'Crear / Ordenar os meus albums', //cpg1.4
'albmgr_lnk' => 'Crear / Ordenar o meu album',
'modifyalb_title' => 'Ir a modificar o meu album', //cpg1.4
'modifyalb_lnk' => 'Modificar os meus albums',
'my_prof_title' => 'Ir ós meus datos', //cpg1.4
'my_prof_lnk' => 'Os meus datos',
);

$lang_cat_list = array(
'category' => 'Categoría',
	'albums' => 'albums',
'pictures' => 'Arquivos',
);

$lang_album_list = array(
'album_on_page' => '%d albums de %d páxina(s)',
);

$lang_thumb_view = array(
	'date' => 'DATA',
//Sort by filename and title
'name' => 'NOME DO ARQUIVO',
'title' => 'TÍTULO',
'sort_da' => 'Ordenar por data ascendente',
'sort_dd' => 'Ordenar por data descendente',
'sort_na' => 'Ordenar por nome ascendente',
'sort_nd' => 'Ordenar por nome descendente',
'sort_ta' => 'Ordenar por título ascendente',
'sort_td' => 'Ordenar por título descendente',
'position' => 'POSICION', //cpg1.4
'sort_pa' => 'Orden ascendente', //cpg1.4
'sort_pd' => 'Orden descendente', //cpg1.4
'download_zip' => 'Descarga de arquivos ZIP',
'pic_on_page' => '%d arquivos de %d páxina(s)',
'user_on_page' => '%d usuarios de %d páxina(s)',
'enter_alb_pass' => 'Introduza contrasinal de Album', //cpg1.4
'invalid_pass' => 'Contrasinal incorrecto', //cpg1.4
'pass' => 'Contrasinal', //cpg1.4
'submit' => 'Enviar', //cpg1.4
);

$lang_img_nav_bar = array(
'thumb_title' => 'Voltar á páxina de miniaturas',
'pic_info_title' => 'Amosar/ocultar información do arquivo',
'slideshow_title' => 'Presentación',
'ecard_title' => 'Enviar este arquivo como postal-e',
'ecard_disabled' => 'Postais non válidas',
'ecard_disabled_msg' => 'Non tes permisos para enviar postais', //js-alert
'prev_title' => 'Ver arquivo anterior',
'next_title' => 'Ver arquivo seguinte',
'pic_pos' => 'ARQUIVO %s/%s',
'report_title' => 'Enviar informe ó administrador', //cpg1.4
'go_album_end' => 'Ir ó final', //cpg1.4
'go_album_start' => 'Voltar ó inicio', //cpg1.4
'go_back_x_items' => 'Voltar %s artigos', //cpg1.4
'go_forward_x_items' => 'Ir a %s artigos', //cpg1.4
);

$lang_rate_pic = array(
'rate_this_pic' => 'Vote esta foto ',
'no_votes' => '(Aínda non hai votos)',
'rating' => '(Media de %s / 5 dos %s votos)',
'rubbish' => 'Mala',
'poor' => 'Ruín',
'fair' => 'Satisfactoria',
'good' => 'Boa',
'excellent' => 'Excelente',
'great' => 'Marabillosa',
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

$lang_display_thumbnails = array(
  'filename' => 'Nome de arquivo=', //cpg1.4
  'filesize' => 'Tamaño de arquivo=', //cpg1.4
  'dimensions' => 'Dimensións=', //cpg1.4
  'date_added' => 'Data de engadido=', //cpg1.4
);

$lang_get_pic_data = array(
	'n_comments' => '%s comentarios',
	'n_views' => '%s visualizacións',
	'n_votes' => '(%s votos)'
);

$lang_cpg_debug_output = array(
  'debug_info' => 'informacións de Debug', //cpg1.3.0
  'select_all' => 'Seleccionar Todo', //cpg1.3.0
'copy_and_paste_instructions' => 'Se vas demandar axuda nos foros de soporte do coppermine, copia e pega esta saída de depurado na túa mensaxe cando así se solicite, xunto coa mensaxe de erro que obtiveches (se a houbese). Asegúrate de reemprazar calquera contrasinal da petición con *** antes de publicar a mensaxe. <br />Nota: Isto é só para información e non significa que haxa un erro coa túa galería.', //cpg1.4
  'phpinfo' => 'Amosar phpinfo', //cpg1.3.0
  'notices' => 'Anuncios', //cpg1.4
);

$lang_language_selection = array(
  'reset_language' => 'Idioma por defecto', //cpg1.3.0
  'choose_language' => 'Escolla o seu idioma', //cpg1.3.0
);

$lang_theme_selection = array(
  'reset_theme' => 'tema por defecto', //cpg1.3.0
  'choose_theme' => 'Escolla un tema', //cpg1.3.0
);

$lang_version_alert = array(
  'version_alert' => 'Versión non admitida!', //cpg1.4
  'security_alert' => 'Alerta de Seguridade!', //cpg1.4.3
  'relocate_exists' => 'Elimina o arquivo <a href="http://coppermine-gallery.net/forum/index.php?topic=24217.0">relocate_server.php</a> do teu sitio web!',
  'no_stable_version' => 'Estás utilizando o Coppermine %s (%s), que está indicado só para usuarios moi experimentados - esta versión non ten soporte nin garantías de tipo ningún. Ó usala asumes o risco persoalmente, senón, podes instalar a última versión estable se precisas axuda!', //cpg1.4
  'gallery_offline' => 'A galería está actualmente fóra de liña e só é visible para ti como administrador. Non esquezas volvela poñer en liña logo de rematar coas tarefas de mantemento.', //cpg1.4
);

$lang_create_tabs = array(
  'previous' => 'anterior', //cpg1.4
  'next' => 'seguinte', //cpg1.4
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
  'error_wakeup' => "Non se puido activar o plugin '%s'", //cpg1.4
  'error_install' => "Non se puido instalar o plugin '%s'", //cpg1.4
  'error_uninstall' => "Non se puido desinstalar o plugin '%s'", //cpg1.4
  'error_sleep' => "Non se puido desactivar o plugin '%s'<br />", //cpg1.4
);

// ------------------------------------------------------------------------- //
// File include/smilies.inc.php
// ------------------------------------------------------------------------- //

if (defined('SMILIES_PHP')) $lang_smilies_inc_php = array(
	'Exclamation' => 'Exclamación',
        'Question' => 'Pregunta',
	'Very Happy' => 'Moi Feliz',
        'Smile' => 'Sorriso',
	'Sad' => 'Triste',
        'Surprised' => 'Sorprendido',
        'Shocked' => 'Abraiado',
	'Confused' => 'Confuso',
	'Cool' => 'Guai',
	'Laughing' => 'Risoño',
	'Mad' => 'Tolo',
	'Razz' => 'Tomando o pelo',
	'embarassed' => 'Desconcertado',
	'Crying or Very sad' => 'Moi triste',
	'Evil or Very Mad' => 'Moi mal',
	'Twisted Evil' => 'Demo Tolo',
	'Rolling Eyes' => 'Rulando os ollos',
	'Wink' => 'Chiscando un ollo',
	'Idea' => 'Idea',
	'Arrow' => 'Seta',
	'Neutral' => 'Neutro',
	'Mr. Green' => 'O Sr. Verde',
);

// ------------------------------------------------------------------------- //
// File addpic.php
// ------------------------------------------------------------------------- //

// void

// ------------------------------------------------------------------------- //
// File mode.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('MODE_PHP')) $lang_mode_php = array(
  0 => 'Saíndo do modo de administración...',
  1 => 'Entrando no modo de administración...',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
'alb_need_name' => 'Os albums precisan ter un nome !', //js-alert
'confirm_modifs' => 'Tes a certeza que desexas realizar as modificacións ?', //js-alert
'no_change' => 'Non fixeches troco ningún!', //js-alert
	'new_album' => 'Novo album',
'confirm_delete1' => 'Tes a certeza que desexas eliminar este album ?', //js-alert
'confirm_delete2' => '\nTodas as fotos e comentarios perderanse !', //js-alert
	'select_first' => 'Primeiro Seleccione un album', //js-alert
	'alb_mrg' => 'Administrador de albums',
'my_gallery' => '* A miña Galería *',
'no_category' => '* sen categoría *',
	'delete' => 'Apagar',
	'new' => 'Novo',
'apply_modifs' => 'Aplicar modificacións',
'select_category' => 'Selecciona unha categoría',
);

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) $lang_banning_php = array(
  'title' => 'Bloquear Usuarios', //cpg1.4
  'user_name' => 'Nome de Usuario', //cpg1.4
  'ip_address' => 'Enderezo IP', //cpg1.4
  'expiry' => 'Expira (en branco é permanente)', //cpg1.4
  'edit_ban' => 'Gardar Trocos', //cpg1.4
  'delete_ban' => 'Borrar', //cpg1.4
  'add_new' => 'Engadir Novo Bloqueo', //cpg1.4
  'add_ban' => 'Engadir', //cpg1.4
  'error_user' => 'Non se puido atopar o usuario', //cpg1.4
  'error_specify' => 'Tes que especificar un nome de usuario ou ben un enderezo IP', //cpg1.4
  'error_ban_id' => 'Bloqueo de ID inválido!', //cpg1.4
  'error_admin_ban' => 'Non te podes bloquear a ti mesmo!', //cpg1.4
  'error_server_ban' => 'Vas bloquear o teu propio servidor? Home... Non podes facer iso...', //cpg1.4
'error_ip_forbidden' => 'Non podes bloquear este IP - de todos os xeitos non é encamiñable (privado) !<br />Se queres que se che permita bloquear IPs privados, muda a opción correspondente na túa <a href="admin.php">Configuración</a> (só ten senso cando o Coppermine funciona nunha rede local-LAN).', //cpg1.4
'lookup_ip' => 'Buscar e resolver un enderezo IP', //cpg1.4
  'submit' => 'enviar!', //cpg1.4
  'select_date' => 'seleccionar data', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File bridgemgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('BRIDGEMGR_PHP')) $lang_bridgemgr_php = array(
  'title' => 'Asistente de Ponte',
'warning' => 'Atención: cando uses este asistente debes ter claro que se van enviar datos importantes a través do uso de formas html. Úsao só no teu propio PC (nunca nun cliente público coma un café-internet), e asegúrate de borrar o caché e os arquivos temporais do navegador cando remates, ou, doutro xeito, outros poderían acceder ós teus datos!',
  'back' => 'anterior',
  'next' => 'seguinte',
  'start_wizard' => 'Iniciar asistente de ponte',
  'finish' => 'Rematar',
  'hide_unused_fields' => 'agochar campos non usados dos formularios (recomendado)',
  'clear_unused_db_fields' => 'borrar entradas incorrectas do banco de datos (recomendado)',
  'custom_bridge_file' => 'o nome do teu arquivo de ponte persoal (se o nome do arquivo de ponte é <i>omeuarquivo.inc.php</i>, insire <i>omeuarquivo</i> neste campo)',
  'no_action_needed' => 'Non se precisa acción ningunha neste paso. Simplemente preme en \'seguinte\' para continuar.',
  'reset_to_default' => 'Reaxustar ó valor por defecto',
  'choose_bbs_app' => 'escolle a aplicación coa que facer ponte o coppermine',
'support_url' => 'Vai aquí para obter axuda desta aplicación',
  'settings_path' => 'ruta(s) usados pola túa aplicación de BBS',
  'database_connection' => 'conexión co banco de datos',
  'database_tables' => 'táboas do banco de datos',
  'bbs_groups' => 'grupos do BBS',
  'license_number' => 'Número de licenza',
  'license_number_explanation' => 'insire o teu número de licenza (se é preciso)',
  'db_database_name' => 'Nome do banco de datos',
  'db_database_name_explanation' => 'Insire o nome do banco de datos que utiliza a túa aplicación de BBS',
  'db_hostname' => 'Host do banco de datos',
  'db_hostname_explanation' => 'Nome de host onde reside o teu banco de datos mySQL, normalmente é &quot;localhost&quot;',
  'db_username' => 'Conta de usuario do banco de datos',
  'db_username_explanation' => 'Conta de usuario mySQL a utilizar para a conexión co BBS',
  'db_password' => 'Contrasinal do banco de datos',
  'db_password_explanation' => 'Contrasinal para esta conta de usuario mySQL',
  'full_forum_url' => 'URL do Foro',
  'full_forum_url_explanation' => 'URL completo da túa aplicación BBS (incluída a cabeceira http:// bit, é dicir, http://www.oteudominio.tld/foro)',
  'relative_path_of_forum_from_webroot' => 'Ruta relativa ós foros',
  'relative_path_of_forum_from_webroot_explanation' => 'Ruta relativa á túa aplicación BBS dende a raíz do web (Exemplo: se o teu BBS está en http://www.oteudominio.gz/foros/, insire &quot;/foros/&quot; neste campo',
  'relative_path_to_config_file' => 'Ruta relativa ó arquivo de configuración do teu BBS',
  'relative_path_to_config_file_explanation' => 'Ruta relativa ó teu BBS, referido dende o teu cartafol do Coppermine (é dicir, &quot;../foro/&quot; se o teu BBS está en http://www.oteudominio.tld/foro/ e o Coppermine en http://www.oteudominio.tld/galería/)',
  'cookie_prefix' => 'Prefixo das cookies',
'cookie_prefix_explanation' => 'este será o nome das cookies do teu BBS',
  'table_prefix' => 'Prefixo da táboa',
  'table_prefix_explanation' => 'Ten que coincidir co prefixo que escollas para o teu BBS cando o configures.',
  'user_table' => 'Táboa de usuario',
'user_table_explanation' => '(normalmente o valor por defecto funcionará, a menos que a instalación do teu BBS non sexa estándar)',
  'session_table' => 'Táboa de sesión',
'session_table_explanation' => '(normalmente o valor por defecto funcionará, a menos que a instalación do teu BBS non sexa estándar)',
  'group_table' => 'Táboa de grupo',
'group_table_explanation' => '(normalmente o valor por defecto funcionará, a menos que a instalación do teu BBS non sexa estándar)',
  'group_relation_table' => 'Táboa de relación de grupos',
'group_relation_table_explanation' => '(normalmente o valor por defecto funcionará, a menos que a instalación do teu BBS non sexa estándar)',
  'group_mapping_table' => 'Táboa de correspondencias de grupo',
  'group_mapping_table_explanation' => '(normalmente o valor por defecto funcionará, a menos que a instalación do teu BBS non sexa estándar)',
'use_standard_groups' => 'Utilizar grupos de usuario estándardo BBS',
'use_standard_groups_explanation' => 'Utilizar grupos de usuario estándar(incorporados no BBS) (recomendado). Isto fará que toda a configuración a medida dos grupos de usuario efectuada nesta páxina quede baleira. Desactiva esta opción só se REALMENTE sabes o que estás a facer!',
  'validating_group' => 'Grupo de validado',
  'validating_group_explanation' => 'ID do grupo do teu BBS no que se gardarán as contas de usuario que precisan ser validadas (normalmente o valor por defecto funcionará, a menos que a instalación do teu BBS non sexa estándar)',
  'guest_group' => 'Grupo de convidados',
  'guest_group_explanation' => 'ID do Grupo do teu BBS no que se gardarán os convidados (usuarios anónimos) (o valor por defecto funcionará correctamente, edítao só se sabes o que estás a facer)',
  'member_group' => 'Grupo de membros',
  'member_group_explanation' => 'ID do grupo do teu BBS no que se gardarán as contas de usuarios &quot;normais&quot; (o valor por defecto funcionará correctamente, edítao só se sabes o que estás a facer)',
  'admin_group' => 'Grupo de administración',
  'admin_group_explanation' => 'ID do grupo do teu BBS no que se gardarán as contas dos administradores (o valor por defecto funcionará correctamente, edítao só se sabes o que estás a facer)',
  'banned_group' => 'Grupo de bloqueados',
  'banned_group_explanation' => 'ID do grupo do teu BBS no que se gardarán as contas dos usuarios bloqueados (o valor por defecto funcionará correctamente, edítao só se sabes o que estás a facer)',
  'global_moderators_group' => 'Grupo de moderadores globais',
  'global_moderators_group_explanation' => 'ID do grupo do teu BBS no que se gardarán as contas dos mederadores globais do teu BBS (o valor por defecto funcionará correctamente, edítao só se sabes o que estás a facer)',
  'special_settings' => 'Configuración específica do BBS',
  'logout_flag' => 'versión do phpBB (marca de remate de sesión)',
  'logout_flag_explanation' => 'A versión do teu BBS (este parámetro especifica a maneira de xestionar os remates de sesión)',
  'use_post_based_groups' => 'Usar grupos baseados nas mensaxes publicadas?',
  'logout_flag_yes' => '2.0.5 ou superior',
  'logout_flag_no' => '2.0.4 ou inferior',
  'use_post_based_groups_explanation' => 'Deben terse en conta os grupos do BBS definidos polo número de mensaxes publicadas (permite unha xestión de permisos máis detallada) ou só os grupos por defecto (facilita a administración, recomendado). Podes mudar esta configuración máis tarde perfectamente.',
  'use_post_based_groups_yes' => 'si',
  'use_post_based_groups_no' => 'non',
  'error_title' => 'Tes que corrixir estes erros antes de continuar. Volve á pantalla anterior.',
  'error_specify_bbs' => 'Tes que especificar que aplicación queres pontear coa túa instalación do Coppermine.',
  'error_no_blank_name' => 'Non podes deixar o nome do teu arquivo a medida de ponte en branco.',
  'error_no_special_chars' => 'O nome do arquivo de ponte non pode conter caracteres especiais a excepción do suliñado (_) e o guión (-)!',
  'error_bridge_file_not_exist' => 'Non se atopou o arquivo de ponte %s no servidor. Comproba se o subiches agora.',
  'finalize' => 'activar/desactivar a integración do BBS',
  'finalize_explanation' => 'Ata aquí, as opcións que especificaches foron gardadas no banco de datos, pero a integración do BBS non foi activada. Podes conectar ou desconectar a integración máis tarde en calquer intre. Asegúrate de lembrar o nome de usuario de administrador e o contrasinal do Coppermine a secas (sen integración), podes precisalos máis tarde para poder facer trocos. Se algo fose mal, vai a %s e desactiva a integración do BBS alí, utilizando a túa conta de administración orixinal (sen a ponte ou integración) (habitualmente será a que configuraches durante a instalación do Coppermine).',
  'your_bridge_settings' => 'A túa configuración da ponte',
  'title_enable' => 'Activar integración/ponteado con %s',
  'bridge_enable_yes' => 'activar',
  'bridge_enable_no' => 'desactivar',
  'error_must_not_be_empty' => 'non pode estar valeiro',
  'error_either_be' => 'debe ser %s ou %s',
  'error_folder_not_exist' => '%s non existe. Corrixe o valor que inseriches para %s',
  'error_cookie_not_readible' => 'O Coppermine non pode ler unha cookie chamada %s. Corrixe o valor que inseriches para %s, ou vai ó panel de administración do teu BBS e asegúrate de que a ruta da cookie é lexible para o coppermine.',
  'error_mandatory_field_empty' => 'Non podes deixar o campo %s en branco - cúbreo co valor axeitado.',
  'error_no_trailing_slash' => 'O campo %s non debe rematarse cunha barra invertida.',
  'error_trailing_slash' => 'O campo %s debe rematarse cunha barra invertida.',
  'error_db_connect' => 'Non se pode conectar co banco de datos mySQL cos datos que especificaches. A resposta do mySQL foi:',
  'error_db_name' => 'A pesares de que Coppermine conseguiu estabelecer unha conexión, non puido atopar o banco de datos %s. Asegúrate de que especificaches %s correctamente. A resposta do mySQL foi:',
  'error_prefix_and_table' => '%s e ',
  'error_db_table' => 'Non se puido atopar a táboa %s. Asegúrate de que especificaches %s correctamente.',
  'recovery_title' => 'Xestor de Ponte: recuperación de emerxencia',
  'recovery_explanation' => 'Se chegaches aquí para administrar a integración BBS da túa galería Coppermine, tes que iniciar sesión primeiro como administrador. Se non podes entrar porque o ponteado non funciona como debería, podes desactivar a integración BBS nesta páxina. Inserindo o teu nome de usuario e contrasinal non iniciarás a sesión, senón que só desactivarás a integración BBS. Revisa a documentación para obter detalles.',
  'username' => 'Nome de usuario',
  'password' => 'Contrasinal',
  'disable_submit' => 'enviar',
  'recovery_success_title' => 'Autorización correcta',
  'recovery_success_content' => 'Desactivaches o ponteado BBS correctamente. A túa instalación do Coppermine funciona agora en modo independente.',
  'recovery_success_advice_login' => 'Inicia sesión como administrador para editar a túa configuración de ponte e/ou activar a integración BBS de novo.',
  'goto_login' => 'Ir á páxina de inicio de sesión',
  'goto_bridgemgr' => 'Ir ó xestor de ponte',
  'recovery_failure_title' => 'Autorización incorrecta',
  'recovery_failure_content' => 'As credenciais que presentaches son incorrectas. Debes proporcionar os datos da conta de administrador da versión autónoma (habitualmente será a conta que configuraches durante a instalación do Coppermine).',
  'try_again' => 'téntao de novo',
  'recovery_wait_title' => 'Ainda non transcorreu o tempo de espera',
  'recovery_wait_content' => 'Por razóns de seguridade este script non permite tentativas fallidas de inicio de sesión sucesivas en pouco espazo de tempo , polo que terás que agardar un chisco ata que se che permita volver tentar identificarte.',
  'wait' => 'agarda',
  'create_redir_file' => 'Crear arquivo de redirección (recomendado)',
  'create_redir_file_explanation' => 'Para redirixir ós usuarios de novo ó Coppermine unha vez que iniciaron sesión no teu BBS, precisas crear un arquivo de redirección no teu cartafol do BBS. Cando esta opción estea marcada, o xestor de ponte tentará crear este arquivo no teu lugar, ou proporcionarche o código listo para copiar-e-pegar para que poidas crear o arquivo de xeito manual.',
  'browse' => 'explorar',
);

// ------------------------------------------------------------------------- //
// File calendar.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('CALENDAR_PHP')) $lang_calendar_php = array(
  'title' => 'Calendario', //cpg1.4
  'close' => 'pechar', //cpg1.4
  'clear_date' => 'borrar data', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
	'miss_param' => 'Parametros requeridos para operación \'%s\' non postos!',
	'unknown_cat' => 'A categoria seleccionada non existe no noso banco de datos',
	'usergal_cat_ro' => 'A categoria do usuario non pode ser excluída !',
	'manage_cat' => 'administrar categorias',
	'confirm_delete' => 'Estás a certo que desexas ELIMINAR esta categoria ?', //js-alert
	'category' => 'Categoria',
	'operations' => 'Operacións',
	'move_into' => 'Mover a',
	'update_create' => 'actualizar/Crear categoria',
	'parent_cat' => 'Categoria Nai',
	'cat_title' => 'Título da categoria',
	'cat_thumb' => 'Miniatura da categoria', //cpg1.3.0
	'cat_desc' => 'Descripción da categoria',
  'categories_alpha_sort' => 'Ordenar categorías alfabéticamente (en troques de utilizar a orde personalizada)', //cpg1.4
  'save_cfg' => 'Gardar configuración', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File admin.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('ADMIN_PHP')) $lang_admin_php = array(
  'title' => 'Configuración da Galería', //cpg1.4
  'manage_exif' => 'Xestionar respresentación visual de datos exif', //cpg1.4
  'manage_plugins' => 'Xestionar plugins', //cpg1.4
  'manage_keyword' => 'Xestionar palabras-chave', //cpg1.4
	'restore_cfg' => 'Restaurar Configuración por defecto',
	'save_cfg' => 'Gardar nova Configuración',
	'notes' => 'Notas',
	'info' => 'Información',
	'upd_success' => 'Configuracións atualizadas!',
	'restore_success' => 'Configuración padre restaurada',
	'name_a' => 'Nome ascendente',
	'name_d' => 'Nome descendente',
	'title_a' => 'Título ascendente',
	'title_d' => 'Título descendente',
	'date_a' => 'Data Crecente',
	'date_d' => 'Data Decrecente',
  'pos_a' => 'Posición ascendente', //cpg1.4
  'pos_d' => 'Posición descendente', //cpg1.4
	'th_any' => 'Aspecto Máximo',
	'th_ht' => 'Altura',
	'th_wd' => 'Ancho',
	'label' => 'etiqueta', //cpg1.3.0
	'item' => 'elemento', //cpg1.3.0
	'debug_everyone' => 'Todos', //cpg1.3.0
	'debug_admin' => 'só o administrador', //cpg1.3.0
  'no_logs'=> 'Off', //cpg1.4
  'log_normal'=> 'Normal', //cpg1.4
  'log_all' => 'Todo', //cpg1.4
  'view_logs' => 'Amosar rexistros (logs)', //cpg1.4
  'click_expand' => 'preme no nome de sección para expandir', //cpg1.4
  'expand_all' => 'Expandir Todo', //cpg1.4
  'notice1' => '(*) Estes parámetros non deben mudarse se xa tes arquivos no teu banco de datos.', //cpg1.4 - (reubicado)
  'notice2' => '(**) Cando mudes este parámetro, só se verán afectados os arquivos engadidos a partires de agora, polo que é recomendábel non mudar este parámetro se xa existen arquivos na galería. Podes, de todas formas, aplicar os trocos ós arquivos existentes coas utilidades das &quot;<a href="util.php">ferramentas de administración</a> (redimensionar imaxes)&quot; do menú de administración.', //cpg1.4 - (reubicado)
  'notice3' => '(***) Todos os arquivos de rexistro (logs) escríbense en inglés.', //cpg1.4 - (reubicado)
  'bbs_disabled' => 'Función desactivada ó usar a integración do bb', //cpg1.4
  'auto_resize_everyone' => 'Todos', //cpg1.4
  'auto_resize_user' => 'Só o usuario', //cpg1.4
  'ascending' => 'ascendente', //cpg1.4
  'descending' => 'descendente', //cpg1.4
        );

if (defined('ADMIN_PHP')) $lang_admin_data = array(
	'Configuración xeral',
	array('Nome da Galería', 'gallery_name', 0,  'f=index.htm&amp;as=admin_general_name&amp;ae=admin_general_name_end'), //cpg1.4
	array('Descrición da Galería', 'gallery_description', 0, 'f=index.htm&amp;as=admin_general_description&amp;ae=admin_general_description_end'), //cpg1.4
	array('Correo-e do Administrador da Galería', 'gallery_admin_email', 0, 'f=index.htm&amp;as=admin_general_email&amp;ae=admin_general_email_end'), //cpg1.4
	array('URL do cartafol da túa galería coppermine (sen \'index.php\' ou similar ó remate)', 'ecards_more_pic_target', 0, 'f=index.htm&amp;as=admin_general_coppermine-url&amp;ae=admin_general_coppermine-url_end'), //cpg1.4
  array('URL da túa páxina de inicio', 'home_target', 0, 'f=index.htm&amp;as=admin_general_home-url&amp;ae=admin_general_home-url_end'), //cpg1.4
  array('Permitir descarga en ZIP dos favoritos', 'enable_zipdownload', 1, 'f=index.htm&amp;as=admin_general_zip-download&amp;ae=admin_general_zip-download_end'), //cpg1.4
  array('Zona horaria relativa ó GMT (tempo actual: ' . localised_date(-1, $comment_date_fmt) . ')','time_offset',0, 'f=index.htm&amp;as=admin_general_time-offset&amp;ae=admin_general_time-offset_end&amp;top=1'), //cpg1.4
  array('Activar contrasinais encriptadas (non se poderá desfacer logo)','enable_encrypted_passwords',1, 'f=index.htm&amp;as=admin_general_encrypt_password_start&amp;ae=admin_general_encrypt_password_end&amp;top=1'), // cpg 1.4
  array('Activar iconas de axuda (a axuda está dispoñible só en inglés)','enable_help',9, 'f=index.htm&amp;as=admin_general_help&amp;ae=admin_general_help_end'), //cpg1.4
  array('Activar palabras-chave nas que se poida premer na procura','clickable_keyword_search',14, 'f=index.htm&amp;as=admin_general_keywords_start&amp;ae=admin_general_keywords_end'), //cpg1.4
  array('Activar plugins', 'enable_plugins', 12, 'f=index.htm&amp;as=admin_general_enable-plugins&amp;ae=admin_general_enable-plugins_end'),  //cpg1.4
  array('Permitir o bloqueo de enderezos IP non encamiñables (privados)', 'ban_private_ip', 1,  'f=index.htm&amp;as=admin_general_private-ip&amp;ae=admin_general_private-ip_end'), //cpg1.4
  array('Interface de engadido en serie (batch-add) navegable', 'browse_batch_add', 1, 'f=index.htm&amp;as=admin_general_browsable_batch_add&amp;ae=admin_general_browsable_batch_add_end'), //cpg1.4

  'Configuración de Idioma e Codificación de Caracteres',
  array('Idioma', 'lang', 5, 'f=index.htm&amp;as=admin_language_language&amp;ae=admin_language_language_end'), //cpg1.4
  array('Recurrir ó inglés se a frase traducida non se atopa?', 'language_fallback', 1, 'f=index.htm&amp;as=admin_language_fallback&amp;ae=admin_language_fallback_end'), //cpg1.4
  array('Codificación de carácter', 'charset', 4, 'f=index.htm&amp;as=admin_language_charset&amp;ae=admin_language_charset_end'), //cpg1.4
  array('Amosar lista de idiomas', 'language_list', 1, 'f=index.htm&amp;as=admin_language_list&amp;ae=admin_language_list_end'), //cpg1.4
  array('Amosar bandeiras de idiomas', 'language_flags', 8, 'f=index.htm&amp;as=admin_language_flags&amp;ae=admin_language_flags_end&amp;top=1'), //cpg1.4
  array('Amosar &quot;restaurar&quot; na selección de idioma', 'language_reset', 1, 'f=index.htm&amp;as=admin_language_reset&amp;ae=admin_language_reset_end&amp;top=1'), //cpg1.4
  //array('Display previous/next on tabbed pages', 'previous_next_tab', 1), //cpg1.4

  'Configuración de temas',
  array('Tema', 'theme', 6, 'f=index.htm&amp;as=admin_theme_theme&amp;ae=admin_theme_theme_end'), //cpg1.4
  array('Amosar lista de temas', 'theme_list', 1, 'f=index.htm&amp;as=admin_theme_theme_list&amp;ae=admin_theme_theme_list_end'), //cpg1.4
  array('Amosar &quot;restaurar&quot; na selección de tema', 'theme_reset', 1, 'f=index.htm&amp;as=admin_theme_theme_reset&amp;ae=admin_theme_theme_reset_end'), //cpg1.4
  array('Amosar FAQ', 'display_faq', 1, 'f=index.htm&amp;as=admin_theme_faq&amp;ae=admin_theme_faq_end'), //cpg1.4
  array('Nome da ligazón do menú personalizado', 'custom_lnk_name', 0,'f=index.htm&amp;as=admin_theme_custom_lnk_name&amp;ae=admin_theme_custom_lnk_name_end'), //cpg1.4
  array('URL da ligazón do menú personalizado', 'custom_lnk_url', 0,'f=index.htm&amp;as=admin_language_custom_lnk_url&amp;ae=admin_language_custom_lnk_url_end'), //cpg1.4
  array('Amosar axuda do bbcode', 'show_bbcode_help', 1, 'f=index.htm&amp;as=admin_theme_bbcode&amp;ae=admin_theme_bbcode_end&amp;top=1'), //cpg1.4
  array('Amosar o bloque indicando o cumprimento cos estándares nos temas definidos como conformes a XHTML e CSS','vanity_block',1, 'f=index.htm&amp;as=vanity_block&amp;ae=vanity_block_end'), //cpg1.4
  array('Ruta á cabeceira de páxina personalizada que queres incluir', 'custom_header_path', 0, 'f=index.htm&amp;as=admin_theme_include_path_start&amp;ae=admin_theme_include_path_end'), //cpg1.4
  array('Ruta ó pé de páxina personalizado que queres incluir', 'custom_footer_path', 0, 'f=index.htm&amp;as=admin_theme_include_path_start&amp;ae=admin_theme_include_path_end'), //cpg1.4

  'Visualización da lista de álbums',
  array('Ancho da táboa principal (en pixels ou en %)', 'main_table_width', 0, 'f=index.htm&amp;as=admin_album_table-width&amp;ae=admin_album_table-width_end'), //cpg1.4
  array('Número de niveis de categorías a amosar', 'subcat_level', 0, 'f=index.htm&amp;as=admin_album_category-levels&amp;ae=admin_album_category-levels_end'), //cpg1.4
  array('Número de álbums a amosar', 'albums_per_page', 0, 'f=index.htm&amp;as=admin_album_number&amp;ae=admin_album_number_end'), //cpg1.4
  array('Número de columnas da lista de álbums', 'album_list_cols', 0, 'f=index.htm&amp;as=admin_album_columns&amp;ae=admin_album_columns_end'), //cpg1.4
  array('Tamaño das miniaturas en pixels', 'alb_list_thumb_size', 0, 'f=index.htm&amp;as=admin_album_thumbnail-size&amp;ae=admin_album_thumbnail-size_end'), //cpg1.4
  array('O contido da páxina principal', 'main_page_layout', 0, 'f=index.htm&amp;as=admin_album_list_content&amp;ae=admin_album_list_content_end'), //cpg1.4
  array('Amosar as miniaturas do primeiro nivel do álbum nas categorías','first_level',1, 'f=index.htm&amp;as=admin_album_first-level_thumbs&amp;ae=admin_album_first-level_thumbs_end'), //cpg1.4
  array('Ordenar categorías alfabéticamente (en troques da ordenación personalizada)','categories_alpha_sort',1, 'f=index.htm&amp;as=admin_album_list_alphasort_start&amp;ae=admin_album_list_alphasort_end'), //cpg1.4
  array('Amosar número de arquivos ligados','link_pic_count',1, 'f=index.htm&amp;as=admin_album_linked_files_start&amp;ae=admin_album_linked_files_end'), //cpg1.4

  'Visualización de miniaturas',
  array('Número de columnas na páxina de miniaturas', 'thumbcols', 0, 'f=index.htm&amp;as=admin_thumbnail_columns&amp;ae=admin_thumbnail_columns_end'), //cpg1.4
  array('Número de filas na páxina de miniaturas', 'thumbrows', 0, 'f=index.htm&amp;as=admin_thumbnail_rows&amp;ae=admin_thumbnail_rows_end'), //cpg1.4
  array('Número máximo de pestanas a amosar', 'max_tabs', 10, 'f=index.htm&amp;as=admin_thumbnail_tabs&amp;ae=admin_thumbnail_tabs_end'), //cpg1.4
  array('Amosar lenda do arquivo (ademais do título) baixo da miniatura', 'caption_in_thumbview', 1, 'f=index.htm&amp;as=admin_thumbnail_display_caption&amp;ae=admin_thumbnail_display_caption_end'), //cpg1.4
  array('Amosar número de visualizacións baixo da miniatura', 'views_in_thumbview', 1, 'f=index.htm&amp;as=admin_thumbnail_display_views&amp;ae=admin_thumbnail_display_views_end'), //cpg1.4
  array('Amosar número de comentarios baixo da miniatura', 'display_comment_count', 1, 'f=index.htm&amp;as=admin_thumbnail_display_comments&amp;ae=admin_thumbnail_display_comments_end'), //cpg1.4
  array('Amosar nome do usuario que subiu o arquivo baixo da miniatura', 'display_uploader', 1, 'f=index.htm&amp;as=admin_thumbnail_display_uploader&amp;ae=admin_thumbnail_display_uploader_end'), //cpg1.4
  //array('Display name of admin uploaders below the thumbnail', 'display_admin_uploader', 1, 'f=index.htm&amp;as=admin_thumbnail_display_admin_uploader&amp;ae=admin_thumbnail_display_admin_uploader_end'), //cpg1.4
  array('Amosar nome do arquivo baixo da miniatura', 'display_filename', 1, 'f=index.htm&amp;as=admin_thumbnail_display_filename&amp;ae=admin_thumbnail_display_filename_end'), //cpg1.4
  //array('Amosar descrición do álbum', 'alb_desc_thumb', 1, 'f=index.htm&amp;as=admin_thumbnail_display_description&amp;ae=admin_thumbnail_display_description_end'), //cpg1.4
  array('Orden dos arquivos por defecto', 'default_sort_order', 3, 'f=index.htm&amp;as=admin_thumbnail_default_sortorder&amp;ae=admin_thumbnail_default_sortorder_end'), //cpg1.4
  array('Número mínimo de votos dun arquivo para figurar na lista dos \'máis votados\'', 'min_votes_for_rating', 0, 'f=index.htm&amp;as=admin_thumbnail_minimum_votes&amp;ae=admin_thumbnail_minimum_votes_end'), //cpg1.4

	'Visualización das imaxes', //cpg1.4
	array('Ancho da táboa para a visualización das fotos (en pixels ou en %)', 'picture_table_width', 0, 'f=index.htm&amp;as=admin_image_comment_table-width&amp;ae=admin_image_comment_table-width_end'), //cpg1.4
  array('A información do arquivo é visible por defecto', 'display_pic_info', 1, 'f=index.htm&amp;as=admin_image_comment_info_visible&amp;ae=admin_image_comment_info_visible_end'), //cpg1.4
  array('Lonxitude máxima da descrición dunha imaxe', 'max_img_desc_length', 0, 'f=index.htm&amp;as=admin_image_comment_descr_length&amp;ae=admin_image_comment_descr_length_end'), //cpg1.4
  array('Número máximo de caracteres nunha palabra', 'max_com_wlength', 0, 'f=index.htm&amp;as=admin_image_comment_chars_per_word&amp;ae=admin_image_comment_chars_per_word_end'), //cpg1.4
  array('Amosar tira de película', 'display_film_strip', 1, 'f=index.htm&amp;as=admin_image_comment_filmstrip_toggle&amp;ae=admin_image_comment_filmstrip_toggle_end'), //cpg1.4
  array('Amosar nome de arquivo baixo da miniatura da tira de película', 'display_film_strip_filename', 1, 'f=index.htm&amp;as=admin_image_comment_display_film_strip_filename&amp;ae=admin_image_comment_display_film_strip_filename_end'), //cpg1.4
  array('Número de elementos na tira de película', 'max_film_strip_items', 0, 'f=index.htm&amp;as=admin_image_comment_filmstrip_number&amp;ae=admin_image_comment_filmstrip_number_end'), //cpg1.4
  array('Intervalo de pase de diapositivas en milisegundos (1 segundo = 1000 milisegundos)', 'slideshow_interval', 0, 'f=index.htm&amp;as=admin_image_comment_slideshow_interval&amp;ae=admin_image_comment_slideshow_interval_end'), //cpg1.4

  'Configuración de comentarios', //cpg1.4
  array('Filtrar bocaladas nos comentarios', 'filter_bad_words', 1, 'f=index.htm&amp;as=admin_image_comment_bad_words&amp;ae=admin_image_comment_bad_words_end'), //cpg1.4
  array('Permitir risoños nos comentarios', 'enable_smilies', 1, 'f=index.htm&amp;as=admin_image_comment_smilies&amp;ae=admin_image_comment_smilies_end'), //cpg1.4
  array('Permitir varios comentarios consecutivos dun arquivo por parte do mesmo usuario (desactivar protección anti-flood)', 'disable_comment_flood_protect', 1, 'f=index.htm&amp;as=admin_image_comment_flood&amp;ae=admin_image_comment_flood_end'), //cpg1.4
  array('Número máximo de liñas nun comentario', 'max_com_lines', 0, 'f=index.htm&amp;as=admin_image_comment_lines&amp;ae=admin_image_comment_lines_end'), //cpg1.4
  array('Lonxitude máxima dun comentario', 'max_com_size', 0, 'f=index.htm&amp;as=admin_image_comment_length&amp;ae=admin_image_comment_length_end'), //cpg1.4
  array('Notificar ó administrador os novos comentarios por correo-e', 'email_comment_notification', 1, 'f=index.htm&amp;as=admin_image_comment_admin_notify&amp;ae=admin_image_comment_admin_notify_end'), //cpg1.4
  array('Orden dos comentarios', 'comments_sort_descending', 17, 'f=index.htm&amp;as=admin_comment_sort_start&amp;ae=admin_comment_sort_end'), //cpg1.4
  array('Prefixo para os autores de comentarios anónimos', 'comments_anon_pfx', 0, 'f=index.htm&amp;as=comments_anon_pfx&amp;ae=comments_anon_pfx_end'), //cpg1.4

  'Configuración de arquivos e miniaturas',
  array('Calidade dos arquivos JPEG', 'jpeg_qual', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_jpeg_quality&amp;ae=admin_picture_thumbnail_jpeg_quality_end'), //cpg1.4
  array('Dimensión máxima dunha miniatura <a href="#notice2" class="clickable_option">**</a>', 'thumb_width', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max-dimension&amp;ae=admin_picture_thumbnail_max-dimension_end'), //cpg1.4
  array('Utilizar dimensión ( ancho ou alto ou aspecto máximo dunha miniatura ) <a href="#notice2" class="clickable_option">**</a>', 'thumb_use', 7, 'f=index.htm&amp;as=admin_picture_thumbnail_use-dimension&amp;ae=admin_picture_thumbnail_use-dimension_end'), //cpg1.4
  array('Crear fotografías intermedias','make_intermediate',1, 'f=index.htm&amp;as=admin_picture_thumbnail_intermediate_toggle&amp;ae=admin_picture_thumbnail_intermediate_toggle_end'), //cpg1.4
  array('Ancho ou alto máximo dunha fotografía/vídeo intermedio <a href="#notice2" class="clickable_option">**</a>', 'picture_width', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_intermediate_dimension&amp;ae=admin_picture_thumbnail_intermediate_dimension_end'), //cpg1.4
  array('Tamaño máximo dos arquivos subidos (en KB)', 'max_upl_size', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max_upload_size&amp;ae=admin_picture_thumbnail_max_upload_size_end'), //cpg1.4
  array('Ancho ou alto máximo das fotografías/vídeos subidos (en pixels)', 'max_upl_width_height', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max_upload_dimension&amp;ae=admin_picture_thumbnail_max_upload_dimension_end'), //cpg1.4
  array('Auto-redimensionar imaxes que sexan maiores do ancho ou alto máximos', 'auto_resize', 16, 'f=index.htm&amp;as=admin_picture_thumbnail_auto-resize&amp;ae=admin_picture_thumbnail_auto-resize_end'), //cpg1.4

  'Configuración avanzada de arquivos e miniaturas',
  array('Os álbums poden ser privados (Nota: se mudas dende \'si\' a \'non\' calquera álbum actualmente privado pasará a ser público)', 'allow_private_albums', 1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_private_toggle&amp;ae=admin_picture_thumb_advanced_private_toggle_end'), //cpg1.4
  array('Amosar icona de álbum privado ós usuario que non inicien sesión','show_private',1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_private_icon_show&amp;ae=admin_picture_thumb_advanced_private_icon_show_end'), //cpg1.4
  array('Caracteres non permitidos en nomes de arquivo', 'forbiden_fname_char',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_filename_forbidden_chars&amp;ae=admin_picture_thumb_advanced_filename_forbidden_chars_end'), //cpg1.4
  //array('Accepted file extensions for uploaded pictures', 'allowed_file_extensions',0, 'f=index.htm&amp;as=&amp;ae=_end'), //cpg1.4
  array('Tipos de imaxe permitidos', 'allowed_img_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_pic_extensions&amp;ae=admin_picture_thumb_advanced_pic_extensions_end'), //cpg1.4
  array('Tipos de película permitidos', 'allowed_mov_types',0, 'f=index.htm&amp;as=admin_thumbs_advanced_movie&amp;ae=admin_thumbs_advanced_movie_end'), //cpg1.4
  array('Reproducción Automática de Película', 'media_autostart',1, 'f=index.htm&amp;as=admin_movie_autoplay&amp;ae=admin_movie_autoplay_end'), //cpg1.4
  array('Tipos de audio permitidos', 'allowed_snd_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_audio_extensions&amp;ae=admin_picture_thumb_advanced_audio_extensions_end'), //cpg1.4
  array('Tipos de documento permitidos', 'allowed_doc_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_doc_extensions&amp;ae=admin_picture_thumb_advanced_doc_extensions_end'), //cpg1.4
  array('Método para o redimensionado de imaxes','thumb_method',2, 'f=index.htm&amp;as=admin_picture_thumb_advanced_resize_method&amp;ae=admin_picture_thumb_advanced_resize_method_end'), //cpg1.4
  array('Ruta á utilidade de \'conversión\' ImageMagick (exemplo /usr/bin/X11/)', 'impath', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_im_path&amp;ae=admin_picture_thumb_advanced_im_path_end'), //cpg1.4
  //array('Allowed image types (only valid for ImageMagick)', 'allowed_img_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_allowed_imagetypes&amp;ae=admin_picture_thumb_advanced_allowed_imagetypes_end'), //cpg1.4
  array('Opcións de liña de comandos para o ImageMagick', 'im_options', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_im_commandline&amp;ae=admin_picture_thumb_advanced_im_commandline_end'), //cpg1.4
  array('Ler datos EXIF nos arquivos JPEG', 'read_exif_data', 13, 'f=index.htm&amp;as=admin_picture_thumb_advanced_exif&amp;ae=admin_picture_thumb_advanced_exif_end'), //cpg1.4
  array('Ler datos IPTC nos arquivos JPEG', 'read_iptc_data', 1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_iptc&amp;ae=admin_picture_thumb_advanced_iptc_end'), //cpg1.4
  array('O directorio do álbum <a href="#notice1" class="clickable_option">*</a>', 'fullpath', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_albums_dir&amp;ae=admin_picture_thumb_advanced_albums_dir_end'), //cpg1.4
  array('O directorio para os arquivos de usuario <a href="#notice1" class="clickable_option">*</a>', 'userpics', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_userpics_dir&amp;ae=admin_picture_thumb_advanced_userpics_dir_end'), //cpg1.4
  array('O prefixo para as fotos intermedias <a href="#notice1" class="clickable_option">*</a>', 'normal_pfx', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_intermediate_prefix&amp;ae=admin_picture_thumb_advanced_intermediate_prefix_end'), //cpg1.4
  array('O prefixo para as miniaturas <a href="#notice1" class="clickable_option">*</a>', 'thumb_pfx', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_thumbs_prefix&amp;ae=admin_picture_thumb_advanced_thumbs_prefix_end'), //cpg1.4
  array('Modo por defecto para os directorios', 'default_dir_mode', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_chmod_folder&amp;ae=admin_picture_thumb_advanced_chmod_folder_end'), //cpg1.4
  array('Modo por defecto para os arquivos', 'default_file_mode', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_chmod_files&amp;ae=admin_picture_thumb_advanced_chmod_files_end'), //cpg1.4

  'Configuración de usuario',
  array('Permitir rexistro de novos usuarios', 'allow_user_registration', 1, 'f=index.htm&amp;as=admin_allow_registration&amp;ae=admin_allow_registration_end'), //cpg1.4
  array('Permitir acceso a usuarios sen sesión iniciada (convidados ou anónimos)', 'allow_unlogged_access', 1, 'f=index.htm&amp;as=admin_allow_unlogged_access&amp;ae=admin_allow_unlogged_access_end'), //cpg1.4
  array('O rexistro de usuario deber ser verificado por correo-e', 'reg_requires_valid_email', 1, 'f=index.htm&amp;as=admin_registration_verify&amp;ae=admin_registration_verify_end'), //cpg1.4
  array('Notificar ó administrador os rexistros de usuario por correo-e', 'reg_notify_admin_email', 1, 'f=index.htm&amp;as=admin_registration_notify&amp;ae=admin_registration_notify_end'), //cpg1.4
  array('Activación dos rexistros por parte do administrador', 'admin_activation', 1, 'f=index.htm&amp;as=admin_activation&amp;ae=admin_activation_end'),  //cpg1.4
  array('Permitir a dous usuarios ter o mesmo enderezo de correo-e', 'allow_duplicate_emails_addr', 1, 'f=index.htm&amp;as=admin_allow_duplicate_emails_addr&amp;ae=admin_allow_duplicate_emails_addr_end'), //cpg1.4
  array('Notificar ó administrador as subidas de usuarios pendentes de aprobación', 'upl_notify_admin_email', 1, 'f=index.htm&amp;as=admin_approval_notify&amp;ae=admin_approval_notify_end'), //cpg1.4
  array('Permitir ós usuarios con sesión iniciada ver a lista de membros', 'allow_memberlist', 1, 'f=index.htm&amp;as=admin_user_memberlist&amp;ae=admin_user_memberlist_end'), //cpg1.4
  array('Permitir ós usuarios mudar o seu enderezo de correo-e no perfil', 'allow_email_change', 1, 'f=index.htm&amp;as=admin_user_allow_email_change&amp;ae=admin_user_allow_email_change_end'), //cpg1.4
  array('Permitir ós usuarios reter o control das súas imaxes nas galerías públicas', 'users_can_edit_pics', 1, 'f=index.htm&amp;as=admin_user_editpics_public_start&amp;ae=admin_user_editpics_public_end'), //cpg1.4
  array('Número de intentos de inicio de sesión fallidos antes de bloqueo temporal (para evitar ataques de forza bruta)', 'login_threshold', 0, 'f=index.htm&amp;as=admin_user_login_start&amp;ae=admin_user_login_end'), //cpg1.4
  array('Duración do bloqueo temporal logo dunha serie de intentos de inicio de sesión fallidos', 'login_expiry', 0, 'f=index.htm&amp;as=admin_user_login_start&amp;ae=admin_user_login_end'), //cpg1.4
  array('Activar Informe ó Administrador', 'report_post', 1, 'f=index.htm&amp;as=admin_user_enable_report&amp;ae=admin_user_enable_report_end'),  //cpg1.4

// custom profile fields,  //cpg1.4
  'Campos personalizables para o perfil de usuario (déixaos en branco se non os usas).
  Usa o Perfil 6 para entradas longas, como por exemplo biografías', //cpg1.4
  array('Nome do perfil 1', 'user_profile1_name', 0, 'f=index.htm&amp;as=admin_custom&amp;ae=admin_custom_end'), //cpg1.4
  array('Nome do perfil 2', 'user_profile2_name', 0), //cpg1.4
  array('Nome do perfil 3', 'user_profile3_name', 0), //cpg1.4
  array('Nome do perfil 4', 'user_profile4_name', 0), //cpg1.4
  array('Nome do perfil 5', 'user_profile5_name', 0), //cpg1.4
  array('Nome do perfil 6', 'user_profile6_name', 0), //cpg1.4

  'Campos personalizables para a descrición de imaxe (déixaos en branco se non os usas)',
  array('Nome do campo 1', 'user_field1_name', 0, 'f=index.htm&amp;as=admin_custom_image&amp;ae=admin_custom_image_end'), //cpg1.4
  array('Nome do campo 2', 'user_field2_name', 0),
  array('Nome do campo 3', 'user_field3_name', 0),
  array('Nome do campo 4', 'user_field4_name', 0),

  'Configuración de cookies',
  array('Nome da cookie', 'cookie_name', 0, 'f=index.htm&amp;as=admin_cookie_name&amp;ae=admin_cookie_name_end'), //cpg1.4
  array('Ruta da cookie', 'cookie_path', 0, 'f=index.htm&amp;as=admin_cookie_path&amp;ae=admin_cookie_path_end'), //cpg1.4

  'Configuración de correo-e  (normalmente non se precisa mudar nada aquí; déixao en branco cando non estés certo)', //cpg1.4
  array('Host SMTP (cando se deixe en branco, utilizarase o sendmail)', 'smtp_host', 0, 'f=index.htm&amp;as=admin_email&amp;ae=admin_email_end'), //cpg1.4
  array('Nome de usuario SMTP', 'smtp_username', 0), //cpg1.4
  array('Contrasinal SMTP', 'smtp_password', 0), //cpg1.4

  'Rexistro (logging) e estatísticas', //cpg1.4
  array('Modo de rexistro (logging) <a href="#notice3" class="clickable_option">***</a>', 'log_mode', 11, 'f=index.htm&amp;as=admin_logging_log_mode&amp;ae=admin_logging_log_mode_end'), //cpg1.4
  array('Rexistrar postais-e', 'log_ecards', 1, 'f=index.htm&amp;as=admin_general_log_ecards&amp;ae=admin_general_log_ecards_end'), //cpg1.4
  array('Manter estatísticas de voto pormenorizadas','vote_details',1, 'f=index.htm&amp;as=admin_logging_votedetails&amp;ae=admin_logging_votedetails_end'), //cpg1.4
  array('Manter estatísticas de visualizacións pormenorizadas','hit_details',1, 'f=index.htm&amp;as=admin_logging_hitdetails&amp;ae=admin_logging_hitdetails_end'), //cpg1.4

  'Configuración de mantemento', //cpg1.4
  array('Activar modo de depurado (debug)', 'debug_mode', 9, 'f=index.htm&amp;as=debug_mode&amp;ae=debug_mode_end'), //cpg1.4
  array('Amosar anuncios no modo de depurado', 'debug_notice', 1, 'f=index.htm&amp;as=admin_misc_debug_notices&amp;ae=admin_misc_debug_notices_end'), //cpg1.4
  array('Galería fóra de liña (offline)', 'offline', 1, 'f=index.htm&amp;as=admin_general_offline&amp;ae=admin_general_offline_end'), //cpg1.4
);


// ------------------------------------------------------------------------- //
// File db_ecard.php
// ------------------------------------------------------------------------- //

if (defined('DB_ECARD_PHP')) $lang_db_ecard_php = array(
  'title' => 'Postais-e enviadas', //cpg1.3.0
  'ecard_sender' => 'Remitente', //cpg1.3.0
  'ecard_recipient' => 'Destinatario', //cpg1.3.0
  'ecard_date' => 'Data', //cpg1.3.0
  'ecard_display' => 'Ver postal-e', //cpg1.3.0
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
  'ecard_goto_page' => 'ir para páxina', //cpg1.3.0
  'ecard_records_per_page' => 'rexistros por páxina', //cpg1.3.0
  'check_all' => 'Marcar Todos', //cpg1.3.0
  'uncheck_all' => 'Desmarcar Todos', //cpg1.3.0
  'ecards_delete_selected' => 'Borrar as postais-e seleccionadas', //cpg1.3.0
  'ecards_delete_confirm' => 'Estás certo que desexas Borrar as postais-e seleccionadas? Marque a caixa de verificación!', //cpg1.3.0
  'ecards_delete_sure' => 'Estou certo', //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
	'empty_name_or_co' => 'Debes inserir un nome e o comentario',
	'co_added' => 'o teu comentario foi inserido',
	'alb_need_title' => 'Debes definir un nome para o album !',
	'no_udp_needed' => 'Actualización non necesaria.',
	'alb_updated' => 'O album foi actualizado',
	'unknown_album' => 'O album seleccionado non existe ou non tes permiso para enviar fotos para él',
	'no_pic_uploaded' => 'nengunha foto enviada !<br /><br />Se realmente seleccionaches unha foto para enviar, verifica se o servidor permite envios...',
	'err_mkdir' => 'erro ó Crear directorio %s !',
	'dest_dir_ro' => 'directorio de destino %s non pode ser grabado polo script 
!',
	'err_move' => 'Imposible mover %s para %s !',
	'err_fsize_too_large' => 'A foto que estás tentando enviar é moi grande (máximo permitido %s x %s) !', //obsolete since cpg1.3 - consider removal in cpg1.4 once upload.php has been overhauled
	'err_imgsize_too_large' => 'O tamaño da foto é maior que o permitido (máximo permitido %s KB) !', //obsolete since cpg1.3 - consider removal in cpg1.4 once upload.php has been overhauled
	'err_invalid_img' => 'O arquivo que estás tentando enviar non é un arquivo de foto válido !',
	'allowed_img_types' => 'Só podes enviar %s fotos.',
	'err_insert_pic' => 'A foto \'%s\' non pode ser inserida no album ',
	'upload_success' => 'A túa foto foi enviada con exito<br /><br />só será visible despois da aprobación do Administrador.',
	'notify_admin_email_subject' => '%s - Notificación de Envio', //cpg1.3.0
	'notify_admin_email_body' => 'unha foto foi enviada por %s e precisa da túa 
aprobación. Entra en %s', //cpg1.3.0
	'info' => 'Información',
	'com_added' => 'comentario engadido',
	'alb_updated' => 'album actualizado',
	'err_comment_empty' => 'O teu comentario está valeiro !',
	'err_invalid_fext' => 'Soamente os arquivos coas seguintes extensions son permitidos : <br /><br />%s.',
	'no_flood' => 'Desculpa, pero és o último autor en enviar un comentario<br/><br />Edita o comentario se desexa trocalo',
	'redirect_msg' => 'Estás sendo redireccionado.<br /><br /><br />Preme en \'CONTINUE\' se a páxina non se actualiza automaticamente',
	'upl_success' => 'A túa foto foi engadida con exito',
	'email_comment_subject' => 'comentario inserido', //cpg1.3.0
	'email_comment_body' => 'Alguen posteou un comentario na túa galería. Podes velo 
en', //cpg1.3.0
  'album_not_selected' => 'Non se seleccionou álbum ningún', //cpg1.4
  'com_author_error' => 'Hai un usuario rexistrado usando este alcume, inicia unha sesión ou usa outro', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
	'caption' => 'Sub-Título',
	'fs_pic' => 'tamaño total da foto',
	'del_success' => 'borrado con exito',
	'ns_pic' => 'tamaño normal da foto',
	'err_del' => 'non pode ser excluído',
	'thumb_pic' => 'miniatura',
	'comment' => 'comentario',
	'im_in_alb' => 'foto no album',
	'alb_del_success' => 'album \'%s\' borrado',
	'alb_mgr' => 'Administrador de albums',
	'err_invalid_data' => 'datos recibidos inválidos \'%s\'',
	'create_alb' => 'Creando album \'%s\'',
	'update_alb' => 'actualizando album \'%s\' título \'%s\' índice \'%s\'',
	'del_pic' => 'Borrar arquivo',
	'del_alb' => 'Borrar album',
	'del_user' => 'usuario usuario',
	'err_unknown_user' => 'O usuario seleccionado non existe !',
  'err_empty_groups' => 'Non hai táboa de grupos ningunha, ou a táboa de grupos está valeira!', //cpg1.4
	'comment_deleted' => 'O comentario foi borrado con exito',
  'npic' => 'Imaxe', //cpg1.4
  'pic_mgr' => 'Xestor de Imaxes', //cpg1.4
  'update_pic' => 'Actualizando a imaxe \'%s\' co nome de arquivo \'%s\' e o índice \'%s\'', //cpg1.4
  'username' => 'Nome de usuario', //cpg1.4
  'anonymized_comments' => '%s comentario(s) feito(s) anónimo(s)', //cpg1.4
  'anonymized_uploads' => '%s subida(s) pública(s) feita(s) anónima(s)', //cpg1.4
  'deleted_comments' => '%s comentario(s) borrado(s)', //cpg1.4
  'deleted_uploads' => '%s subida()s pública(s) borrada(s)', //cpg1.4
  'user_deleted' => 'eliminado o usuario %s', //cpg1.4
  'activate_user' => 'Activar usuario', //cpg1.4
  'user_already_active' => 'A conta xa foi activada', //cpg1.4
  'activated' => 'Activado', //cpg1.4
  'deactivate_user' => 'Desactivar usuario', //cpg1.4
  'user_already_inactive' => 'A conta xa foi desactivada', //cpg1.4
  'deactivated' => 'Desactivado', //cpg1.4
  'reset_password' => 'Restaurar contrasinal ou contrasinais', //cpg1.4
  'password_reset' => 'Contrasinal restaurado a %s', //cpg1.4
  'change_group' => 'Mudar grupo primario', //cpg1.4
  'change_group_to_group' => 'Mudando dende %s a %s', //cpg1.4
  'add_group' => 'Engadir grupo secundario', //cpg1.4
  'add_group_to_group' => 'Engadindo o usuario %s ó grupo %s. Agora é membro de %s como grupo de membros primario e de %s como grupo secundario.', //cpg1.4
  'status' => 'Estado', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File displayecard.php
// ------------------------------------------------------------------------- //

if (defined('DISPLAYECARD_PHP')) {

$lang_displayecard_php = array(
  'invalid_data' => 'Os datos da postal-e á que estás tentando acceder foron corrompidos polo teu cliente de correo. Comproba que a ligazón está completa.', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File displayimage.php
// ------------------------------------------------------------------------- //

if (defined('DISPLAYIMAGE_PHP')){

$lang_display_image_php = array(
	'confirm_del' => 'estás certo de que desexas ELIMINAR esta foto ? \\ncomentarios 
vinculados tamén serán excluídos.',
	'del_pic' => 'APAGAR ESTA FOTO',
	'size' => '%s x %s pixels',
	'views' => '%s veces',
	'slideshow' => 'Slideshow',
	'stop_slideshow' => 'PARAR SLIDESHOW',
	'view_fs' => 'Preme para ver a foto ampliada',
	'edit_pic' => 'Editar Descripción', //cpg1.3.0
	'crop_pic' => 'Xirar', //cpg1.3.0
  'set_player' => 'Mudar reproductor',
);

$lang_picinfo = array(
	'title' =>'INFORMACIONS DA FOTO',
	'Filename' => 'Arquivo',
	'album name' => 'album',
	'Rating' => 'Clasificación (%s voto(s))',
	'Keywords' => 'Palabras-chave',
	'File Size' => 'tamaño do arquivo',
  'Date Added' => 'Data de engadido', //cpg1.4
	'Dimensions' => 'Dimensións',
	'Displayed' => 'Visualizada',
  'URL' => 'URL', //cpg1.4
  'Make' => 'Feita', //cpg1.4
  'Model' => 'Modelo', //cpg1.4
  'DateTime' => 'Tempo e Data', //cpg1.4
  'ISOSpeedRatings'=>'ISO', //cpg1.4
  'MaxApertureValue' => 'Abertura Max', //cpg1.4
  'FocalLength' => 'Lonxitude focal', //cpg1.4
	'Comment' => 'comentario',
	'addFav'=>'engadir a favoritos', //cpg1.3.0
	'addFavPhrase'=>'Favoritos', //cpg1.3.0
	'renFav'=>'remover dos Favoritos', //cpg1.3.0
	'iptcTitle'=>'Titulo IPTC', //cpg1.3.0
	'iptcCopyright'=>'Copyright IPTC', //cpg1.3.0
	'iptcKeywords'=>'Palabras-chave IPTC', //cpg1.3.0
	'iptcCategory'=>'Categoria IPTC', //cpg1.3.0
	'iptcSubCategories'=>'Sub-Categorias IPTC', //cpg1.3.0
  'ColorSpace' => 'Profundidade de Cor', //cpg1.4
  'ExposureProgram' => 'Programa de Exposición', //cpg1.4
  'Flash' => 'Flash', //cpg1.4
  'MeteringMode' => 'Modo de Contador', //cpg1.4
  'ExposureTime' => 'Tempo de Exposición', //cpg1.4
  'ExposureBiasValue' => 'Bias de Exposición', //cpg1.4
  'ImageDescription' => ' Descrición da Imaxe', //cpg1.4
  'Orientation' => 'Orientación', //cpg1.4
  'xResolution' => 'Resolución X', //cpg1.4
  'yResolution' => 'Resolución Y', //cpg1.4
  'ResolutionUnit' => 'Unidade de Resolución', //cpg1.4
  'Software' => 'Software', //cpg1.4
  'YCbCrPositioning' => 'Posicionamento YCbCr', //cpg1.4
  'ExifOffset' => 'Offset Exif', //cpg1.4
  'IFD1Offset' => 'Offset IFD1', //cpg1.4
  'FNumber' => 'Número F', //cpg1.4
  'ExifVersion' => 'Versión Exif', //cpg1.4
  'DateTimeOriginal' => 'Tempo e Data Orixinais', //cpg1.4
  'DateTimedigitized' => 'Tempo e Data dixitalizados', //cpg1.4
  'ComponentsConfiguration' => 'Configuración de Compoñentes', //cpg1.4
  'CompressedBitsPerPixel' => 'Bits Por Pixel Comprimidos', //cpg1.4
  'LightSource' => 'Fonte de Luz', //cpg1.4
  'ISOSetting' => 'Configuración ISO', //cpg1.4
  'ColorMode' => 'Modo de Cor', //cpg1.4
  'Quality' => 'Calidade', //cpg1.4
  'ImageSharpening' => 'Definición da Imaxe', //cpg1.4
  'FocusMode' => 'Modo de Enfoque', //cpg1.4
  'FlashSetting' => 'Configuración do Flash', //cpg1.4
  'ISOSelection' => 'Selección ISO', //cpg1.4
  'ImageAdjustment' => 'Axuste de Imaxe', //cpg1.4
  'Adapter' => 'Adaptador', //cpg1.4
  'ManualFocusDistance' => 'Distancia de Enfoque Manual', //cpg1.4
  'DigitalZoom' => 'Zoom Dixital', //cpg1.4
  'AFFocusPosition' => 'Posición de Enfoque AF', //cpg1.4
  'Saturation' => 'Saturación', //cpg1.4
  'NoiseReduction' => 'Reducción de Ruido', //cpg1.4
  'FlashPixVersion' => 'Versión de Flash Pix', //cpg1.4
  'ExifImageWidth' => 'Ancho da Imaxe no Exif', //cpg1.4
  'ExifImageHeight' => 'Alto da Imaxe no Exif', //cpg1.4
  'ExifInteroperabilityOffset' => 'Offset de Interoperabilidade no Exif', //cpg1.4
  'FileSource' => 'Fonte de Arquivo', //cpg1.4
  'SceneType' => 'Tipo de Escena', //cpg1.4
  'CustomerRender' => 'Reproducción Cliente', //cpg1.4
  'ExposureMode' => 'Modo de Exposición', //cpg1.4
  'WhiteBalance' => 'Balance de Brancos', //cpg1.4
  'DigitalZoomRatio' => 'Relación de Zoom Dixital', //cpg1.4
  'SceneCaptureMode' => 'Modo de Captura de Escena', //cpg1.4
  'GainControl' => 'Control de Ganancia', //cpg1.4
  'Contrast' => 'Contraste', //cpg1.4
	'Sharpness' => 'Definición', //cpg1.4
  'ManageExifDisplay' => 'Xestionar Visualización de Datos Exif', //cpg1.4
  'submit' => 'Enviar', //cpg1.4
  'success' => 'Información adaptada satisfactoriamente.', //cpg1.4
  'details' => 'Detalles', //cpg1.4
);

$lang_display_comments = array(
	'OK' => 'OK',
	'edit_title' => 'Editar este comentario',
	'confirm_delete' => 'tes a certeza de remover este comentario ?',
	'add_your_comment' => 'Engade o teu comentario',
	'name'=>'Nome',
	'comment'=>'comentario',
	'your_name' => 'O teu nome',
  'report_comment_title' => 'Envía este comentario ó administrador', //cpg1.4
);

$lang_fullsize_popup = array(
  'click_to_close' => 'Preme na imaxe para pechar esta xanela',
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
	'title' => 'Enviar unha postal-e',
	'invalid_email' => '<b>Aviso</b> : email inválido !',
	'ecard_title' => '%s enviouche unha postal-e!',
	'error_not_image' => 'só as imaxes poden ser enviadas como postais-e.', //cpg1.3.0
  'view_ecard' => 'Ligazón alternativa se a postal-e non se amosa correctamente', //cpg1.4
  'view_ecard_plaintext' => 'Para ver a postal-e, copia e pegua o URL na barra de direccións do teu navegador:', //cpg1.4
	'view_more_pics' => 'Preme aqui para ver máis fotos !',
	'send_success' => 'A túa postal-e foi enviada!',
	'send_failed' => 'Desculpe, pero o servidor non pode enviar a túa postal-e...',
	'from' => 'Remitente',
	'your_name' => 'O seu nome',
	'your_email' => 'O seu e-mail',
	'to' => 'Para',
	'rcpt_name' => 'Destinatario',
	'rcpt_email' => 'E-mail do destinatario',
	'greetings' => 'Título',
	'message' => 'Mensaxe',
  'ecards_footer' => 'Enviado %s dende a IP %s ás %s (horario da Galería)', //cpg1.4
'preview' => 'Vista previa da Postal-e', //cpg1.4
  'preview_button' => 'Vista previa', //cpg1.4
  'submit_button' => 'Enviar postal-e', //cpg1.4
  'preview_view_ecard' => 'Isto será a ligazón alternativa á postal-e unha vez que sexa xerada. Non funcionará para previsualizacións.', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File report_file.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('REPORT_FILE_PHP') || defined('DISPLAYREPORT_PHP')) $lang_report_php =array(
  'title' => 'Reportar ó administrador', //cpg1.4
  'invalid_email' => '<b>Erro</b> : dirección de e-mail inválida !', //cpg1.4
  'report_subject' => 'Un informe de %s na galería %s', //cpg1.4
  'view_report' => 'Ligazón alternativa se o informe non se amosa correctamente', //cpg1.4
  'view_report_plaintext' => 'Para ver este informe, copia e pega esta url no teu navegador:', //cpg1.4
  'view_more_pics' => 'Galería', //cpg1.4
  'send_success' => 'O teu informe foi enviado', //cpg1.4
  'send_failed' => 'Síntoo pero o servidor non pode enviar o teu informe...', //cpg1.4
  'from' => 'dende', //cpg1.4
  'your_name' => 'O teu nome', //cpg1.4
  'your_email' => 'O teu e-mail', //cpg1.4
  'to' => 'a', //cpg1.4
  'administrator' => 'Administrador/Mod', //cpg1.4
  'subject' => 'Asunto', //cpg1.4
  'comment_field_name' => 'Reportando no Comentario de "%s"', //cpg1.4
  'reason' => 'Razón', //cpg1.4
  'message' => 'Mensaxe', //cpg1.4
  'report_footer' => 'Enviado por %s dende a IP %s ás %s (horario da galería)', //cpg1.4
  'obscene' => 'obsceno', //cpg1.4
  'offensive' => 'ofensivo', //cpg1.4
  'misplaced' => 'off-topic/fóra de sitio', //cpg1.4
  'missing' => 'perdido', //cpg1.4
  'issue' => 'erro/non se ve', //cpg1.4
  'other' => 'outro', //cpg1.4
  'refers_to' => 'O informe de arquivo refírese a', //cpg1.4
  'reasons_list_heading' => 'razón(s) do informe:', //cpg1.4
  'no_reason_given' => 'non se definiu razón ningunha', //cpg1.4
  'go_comment' => 'Ir ó comentario', //cpg1.4
  'view_comment' => 'Ver o informe enteiro con comentario', //cpg1.4
  'type_file' => 'arquivo', //cpg1.4
  'type_comment' => 'comentario', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
	'pic_info' => '&nbsp;Info da Foto',
	'album' => 'album',
	'title' => 'Título',
  'filename' => 'Nome do arquivo', //cpg1.4
	'desc' => 'Descripción',
	'keywords' => 'Palabras-chave',
  'new_keyword' => 'Nova palabra-chave', //cpg1.4
  'new_keywords' => 'Nova palabra-chave atopada', //cpg1.4
  'existing_keyword' => 'palabra-chave existente', //cpg1.4
	'pic_info_str' => '%sx%s - %sKB - %s visitas - %s votos',
	'approve' => 'Aprobar foto',
	'postpone_app' => 'Pospoñer aprobacion',
	'del_pic' => 'Apagar foto',
  'del_all' => 'Eliminar TODOS os arquivos', //cpg1.4
	'read_exif' => 'Ler EXIF novamente', //cpg1.3.0
	'reset_view_count' => 'Xerar contador',
  'reset_all_view_count' => 'Resetear TODOS os contadores de visitas', //cpg1.4
	'reset_votes' => 'Xerar votos',
  'reset_all_votes' => 'Resetear TODOS os votos', //cpg1.4
	'del_comm' => 'ELIMINAR comentarios',
  'del_all_comm' => 'Eliminar TODOS	os comentarios', //cpg1.4
	'upl_approval' => 'Aprobar envio',
	'edit_pics' => 'Editar fotos',
	'see_next' => 'Ver fotos seguintes',
	'see_prev' => 'Ver fotos anteriores',
	'n_pic' => '%s fotos',
	'n_of_pic_to_disp' => 'Número de fotos a amosar',
	'apply' => 'Aplicar modificacións',
	'crop_title' => 'Editor de Fotos', //cpg1.3.0
	'preview' => 'Previsualizar', //cpg1.3.0
	'save' => 'Gardar foto', //cpg1.3.0
	'save_thumb' =>'Gardar como miniatura', //cpg1.3.0
  'gallery_icon' => 'Facer icono', //cpg1.4
	'sel_on_img' =>'A selección ten que ser na imaxe enteira!', //js-alert //cpg1.3.0
  'album_properties' =>'Propiedades do Album', //cpg1.4
  'parent_category' =>'Categoría principal (Pai)', //cpg1.4
  'thumbnail_view' =>'Ver miniatura', //cpg1.4
  'select_unselect' =>'seleccionar/deseleccionar todos', //cpg1.4
  'file_exists' => "O arquivo de destino '%s' xa existe.", //cpg1.4
  'rename_failed' => "Fallou ó renomear '%s' a '%s'.", //cpg1.4
  'src_file_missing' => "Código do arquivo '%s' foi perdido.", // cpg 1.4
  'mime_conv' => "Non podo convertir o arquivo dende '%s' a '%s'",//cpg1.4
  'forb_ext' => 'Extensión de arquivo prohibida.',//cpg1.4
);

// ------------------------------------------------------------------------- //
// File faq.php
// ------------------------------------------------------------------------- //

if (defined('FAQ_PHP')) $lang_faq_php = array(
  'faq' => 'Preguntas máis frecontes', //cpg1.3.0
  'toc' => 'contido', //cpg1.3.0
  'question' => 'Pregunta: ', //cpg1.3.0
  'answer' => 'Resposta: ', //cpg1.3.0
);

if (defined('FAQ_PHP')) $lang_faq_data = array(
  'Dúvidas xerais', //cpg1.3.0
  array('Por qué me teño que rexistrar?', 'O Rexistro pode ou non ser requerido polo administrador. O rexistro do usuario e características adicionais como: o envio de fotos, lista de favoritos, votar, e engadir comentarios.', 'allow_user_registration', '0'), //cpg1.3.0
  array('Cómo fago para rexistrarme?', 'Vai a &quot;rexistrarse&quot; e rechea os campos obrigatorios (e os opcionais se queres tamén).<br />Se o Administrador tivera a activación de usuarios por email activada, entón recibirás un email informándote sobre o rexistro e dándote instruccións para a activación da conta. Antes de loguearte, a tua conta debe ser activada.', 'allow_user_registration', '1'), //cpg1.4
  array('Cómo fago para loguear/entrar?', 'Vai a &quot;Login&quot;, insire o teu nome de usuario e contrasinal (marca &quot;Gardar contrasinal&quot; no caso de que queiras loguearte automáticamente), despois disto, xa estarás logueado.<br /><b>IMPORTANTE: O teu navegador debe estar habilitado para aceptar cookies/(galletas) e non deben ser borradas se queres manter a funcionalidade da ocpion &quot;Gardar contrasinal&quot;.</b>', 'offline', 0), //cpg1.3.0
  array('Por qué non consigo loguear?', 'Rexistrácheste e activache a tua conta?. É necesario activar a conta antes de loguearse. Para outros tipos de problema para acceder a conta, contacta có administrador do sitio.', 'offline', 0), //cpg1.3.0
  array('Qué acontece se esquezo o meu contrasinal?', 'Se este sitio tivera a ligazón &quot;Esquecín o meu contrasinal&quot;, úsao. Se non o houbera, contacta co administrador para pedir un novo contrasinal.', 'offline', 0), //cpg1.3.0
  //array('Qué acontece se troco o meu enderezo de e-mail?', 'Simplemente loguea e troca o teu enderezo de e-mail en quot;A túa conta&quot;', 'offline', 0), //cpg1.3.0
  array('Cómo gardo unha imaxe nos &quot;Meus Favoritos&quot;?', 'Preme na miniatura e despois preme en &quot;informacións da foto&quot; (<img src="images/info.gif" width="16" height="16" border="0" alt="informacións da Foto" />); procura un pouco máis abaixo e entón preme en &quot;engadir a favoritos&quot;.<br />O administrador debe ter a opción de &quot;informacións da Foto&quot; activada por defecto.<br />IMPORTANTE: As cookies deben estar habilitadas en non deben ser borradas.', 'offline', 0), //cpg1.3.
  array('Cómo voto nunha foto?', 'Na páxina da foto, abaixo, hai 6 opcións de voto.', 'offline', 0), //cpg1.3.0
  array('Cómo poño un comentario para unha foto?', 'A páxina da foto ten un campo dispoñible para que engadas o teu comentario.', 'offline', 0), //cpg1.3.0
  array('Cómo subo un arquivo?', 'Vai a &quot;Upload&quot;e selecciona o album no que queres subir o teu arquivo. Preme &quot;Browse,&quot; busca o arquivo a subir, e preme &quot;abrir.&quot; Engade un título e descripción se queres. Preme en &quot;Enviar&quot;.<br /><br />Alternativamente, se usas <b>Windows XP</b>, podes subir varios arquivos directamente nos teus albums privados usando o XP Publishing wizard.<br />Para máis instruccións sobre cómo, e conseguir o rexistro requerido do arquivo, preme <a href="xp_publish.php">aquí.</a>', 'allow_private_albums', 1), //cpg1.4
  array('Onde podo enviar unha foto?', 'Podera&quot;s enviar unha foto a un dos albums que tiveras na &quot;miña Galería&quot;. O administrador pode permitir que envies unha foto para un ou máis albums da galería Principal.', 'allow_private_albums', 0), //cpg1.3.0
  array('Qué tipo e qué tamaño de foto podo enviar?', 'O tamaño e o tipo da foto (jpg,gif,..etc.) depende do administrador.', 'offline', 0), //cpg1.3.0
  array('Qué é a &quot;miña Galería&quot;?', '&quot;A miña Galería&quot; é unha galería Persoal onde o usuario pode enviar as suas fotos e administralas.', 'allow_private_albums', 0), //cpg1.3.0
  array('Cómo creo, renomeo ou borro un album na &quot;miña Galería&quot;?', 'Debes estar no &quot;Modo-Admin&quot;<br />Vai a &quot;Crear/Ordenar Meus albums&quot;e preme en&quot;Novo&quot;. Troca o nome do &quot;Novo album&quot; para poñer o nome que desexes.<br />Tamén podes renomear calqueira album na tua galería.<br />Para rematar, preme en &quot;Aplicar modificacions&quot;.', 'allow_private_albums', 0), //cpg1.3.0
  array('Cómo podo restrinxir ós usuarios de ollar os meus albums?', 'Debes estar no &quot;Modo-Admin&quot;<br />Vai a &quot;Modificar Meus albums. Na barra &quot;actualizar album&quot;, Selecciona o album que desexas modificar.<br />Aqui podes trocar o nome, a Descripción, a miniatura, restrinxir a visualización e/ou engadir comentarios/votar.<br 
/>Preme en &quot;Actualizar álbum&quot;.', 'allow_private_albums', 0), //cpg1.3.0
  array('Cómo podo ver outros usuarios da galería?', 'Vai a &quot;albums&quot; e depois preme en Membros &quot;Membros&quot;.', 'allow_private_albums', 0), //cpg1.3.0
  array('Qué son as cookies?', 'As cookies son uns arquivos que conteñen informacións que se gardan no teu computador.<br />as cookies xeralmente permiten ós usuario sair, e cando volten ó sitio ter varias informacións gardadas incluindo contrasinal e o login.', 'offline', 0), //cpg1.3.0
  //array('Onde podo encontrar este programa para o meu sitio?', 'O Coppermine é unha Galería Multimedia gratuita, ofrecida baixo licenza GNU GPL. Ten unha chea de características e foi portado a diversas plataformas. Visita a <a href="http://coppermine-gallery.net/">Páxina Principal do Coppermine</a> para obter máis detalles ou descargalo.', 'offline', 0), //cpg1.3.0

  'Navegando no Sitio', //cpg1.3.0
  array('Qué é o boton &quot;albums&quot;?', 'Isto amosará toda a galería coa ligazón de cada categoria. As Miniaturas poden ser unha ligazón para unha categoria.', 'offline', 0), //cpg1.3.0
  array('Qué é o boton &quot;miña Galería&quot;?', 'Esta é unha caracteristica que permite ó usuario ter a sua propia galería, engadir, Borrar ou modificar albums ou ben enviar fotos.', 'allow_private_albums', 0), //cpg1.3.0
  array('Cal é a diferencia entre &quot;Modo Admin&quot; e &quot;Modo usuario&quot;?', 'Esta é unha caracteristica que permite ó usuario, cando esta en modo-admin, modificar as súas galerías (e outras cousas se esta permitido polo administrador).', 'allow_private_albums', 0), //cpg1.3.0
  array('Qué é o boton &quot;Enviar foto&quot;?', 'Isto permite ó usuario enviar unha foto (tamaño e tipo son definidos polo adminstrador do sitio) para a galería seleccionada por tí ou polo administrador.', 'allow_private_albums', 0), //cpg1.3.0
  array('Qué é o boton &quot;Últimos envios&quot;?', 'Nesta ligazón verás a lista das últimas fotos engadidas ó sitio.', 'offline', 0), //cpg1.3.0
  array('Qué é o boton &quot;Últimos comentarios&quot;?', 'Aqui verás os derradeiros comentarios conxuntamente coas suas respectivas fotos en miniatura.', 'offline', 0), //cpg1.3.0
  array('Qué é o boton &quot;máis visualizadas&quot;?', 'Aqui verás as fotos listadas por \'máis Visualizadas\' (tanto por usuarios rexistrados ou non).', 'offline', 0), //cpg1.3.0
  array('Qué é o boton &quot;máis Popularidade&quot;?', 'Nesta parte verás as fotos que teñen máis popularidade, incluindo os datos desa popularidade (ex: 5 usuarios votaron <img src="images/rating3.gif" width="65" height="14" border="0" alt="" />: calificándoa como 1 para 5 (1,2,3,4,5) o que resultará unha media de <img src="images/rating3.gif"
width="65" height="14" border="0" alt="" /> .)<br />As calificacións van de <img src="images/rating5.gif" width="65" height="14" border="0" alt="best" /> (boa) hata <img src="images/rating0.gif" width="65" height="14" border="0" 
alt="worst" /> (terrible).', 'offline', 0), //cpg1.3.0
  array('Qué é o boton &quot;Meus favoritos&quot;?', 'Nesta área poderás ver as fotos que engadiche nos teu favoritos. Estes favoritos serán gardados como cookie e ficarán no teu computador.', 'offline', 0), //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// File forgot_passwd.php
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) $lang_forgot_passwd_php = array(
  'forgot_passwd' => 'Lembrar contrasinal', //cpg1.3.0
  'err_already_logged_in' => 'Xa estas logueado !', //cpg1.3.0
  'enter_username_email' => 'Insire o teu login ou o teu email', //cpg1.3.0
  'submit' => 'Enviar', //cpg1.3.0
  'illegal_session' => 'Olvidache-la contrasinal, sesión inválida ou expirou.', //cpg1.4
  'failed_sending_email' => 'O Lembrado da sua contrasinal non pode ser enviado 
para o seu email !', //cpg1.3.0
  'email_sent' => 'un email co seu usuario e sua contrasinal foi enviado para %s', //cpg1.4
  'verify_email_sent' => 'Enviouse un correo-e a %s. Por favor, comproba o teu correo-e para completar o proceso.', //cpg1.4
  'err_unk_user' => 'O usuario seleccionado non existe!', //cpg1.3.0
  'account_verify_subject' => '%s - Nova contrasinal requrida', //cpg1.4
  'account_verify_body' => 'Solicitaches unha nova contrasinal. Se queres que che enviemos a nova contrasinal o teu email, preme na seguinte ligazón:

%s', //cpg1.4
  'passwd_reset_subject' => '%s - A túa nova contrasinal', //cpg1.4
  'passwd_reset_body' => 'Aquí esta a nova contrasinal que pediches:
Nome: %s
Contrasinal: %s
Preme %s para loguear.', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
'group_name' => 'Grupo', //cpg1.4
  'permissions' => 'Permisos', //cpg1.4
  'public_albums' => 'Subir albums publicos', //cpg1.4
  'personal_gallery' => 'Galería persoal', //cpg1.4
  'upload_method' => 'Método de "subida" (Maneira de inseri-la imaxen)', //cpg1.4
  'disk_quota' => 'Espazo', //cpg1.4
  'rating' => 'Posición', //cpg1.4
  'ecards' => 'Postais', //cpg1.4
  'comments' => 'Comentarios', //cpg1.4
  'allowed' => 'Permitido/a', //cpg1.4
  'approval' => 'Aprovar', //cpg1.4
  'boxes_number' => 'No. de caixas', //cpg1.4
  'variable' => 'variable', //cpg1.4
  'fixed' => 'fixo/a', //cpg1.4
	'apply' => 'Aplicar modificacións',
	'create_new_group' => 'Crear novo grupo',
	'del_groups' => 'Apagar grupo(s) seleccionado(s)',
	'confirm_del' => 'coidado: ó remover un grupo o seu contido será transferido para \'Rexistrado\' !\n\nquere continuar ?', //js-alert
	'title' => 'administrar grupos',
  'num_file_upload' => 'Caixas de subida de arquivos', //cpg1.4
  'num_URI_upload' => 'Caixas de subida de URI', //cpg1.4
  'reset_to_default' => 'Resetear a nome por defecto (%s) - recomendado!', //cpg1.4
  'error_group_empty' => 'a táboa grupo está valeira !<br /><br />Grupos predeterminado creados, por favor recarga esta páxina', //cpg1.4
  'explain_greyed_out_title' => 'Por qué esta esta fila greyed para fora?', //cpg1.4
  'explain_guests_greyed_out_text' => 'Non podes troca-las propiedades deste grupo porque marcache-la opcion &quot; Permitir acceso a usuarios NON rexistrados (invitados ou anónimos) &quot; a &quot;No&quot; na páxina de configuración. Todo-los invitados (membros do grupo %s) non poden facer nada (non entendo....)but login; there for group settings don\'t apply for them.', //cpg1.4
  'explain_banned_greyed_out_text' => 'Non podes troca-las propiedades do grupo %s porque os membros non poden facer nada.', //cpg1.4
  'group_assigned_album' => 'album(s) asignados ', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
  'welcome' => 'Sexa Benvid@!'
);

$lang_album_admin_menu = array(
	'confirm_delete' => 'estás certo de que desexas ELIMINAR este album ? \\nTodas as fotos e comentarios serán excluídos.', //js-alert
	'delete' => 'ELIMINAR',
	'modify' => 'PROPIEDADES',
	'edit_pics' => 'EDITAR FOTOS',
);

$lang_list_categories = array(
	'home' => 'Inicio',
	'stat1' => '<b>[pictures]</b> fotos en <b>[albums]</b> albums e <b>[cat]</b> categorias con <b>[comments]</b> comentarios vistos <b>[views]</b> veces',
	'stat2' => '<b>[pictures]</b> fotos en <b>[albums]</b> albums visitados <b>[views]</b> veces',
	'xx_s_gallery' => '%s\'s Galería',
	'stat3' => '<b>[pictures]</b> fotos en <b>[albums]</b> albums con <b>[comments]</b> comentarios, visitadas <b>[views]</b> veces'
);

$lang_list_users = array(
	'user_list' => 'Lista de usuarios',
	'no_user_gal' => 'nengún usuario pode ter albums',
	'n_albums' => '%s album(s)',
	'n_pics' => '%s foto(s)'
);

$lang_list_albums = array(
	'n_pictures' => '%s foto(s)',
	'last_added' => ', última foto engadida o %s',
  'n_link_pictures' => '%s arquivos ligados', //cpg1.4
  'total_pictures' => '%s total arquivos', //cpg1.4
);

}

// ------------------------------------------------------------------------- //
// File keywordmgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('KEYWORDMGR_PHP')) $lang_keywordmgr_php = array(
  'title' => 'Xestionar palabras-chave', //cpg1.4
  'edit' => 'editar', //cpg1.4
  'delete' => 'eliminar', //cpg1.4
  'search' => 'procurar', //cpg1.4
  'keyword_test_search' => 'procurar %s en nova xanela', //cpg1.4
  'keyword_del' => 'elimina-la palabra-chave %s', //cpg1.4
  'confirm_delete' => 'Estás seguro que queres elimina-las palabras-chave %s da galería enteira?', //cpg1.4  // js-alert
  'change_keyword' => 'trocar palabra-chave', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
  'login' => 'Login',
  'enter_login_pswd' => 'Insire o seu nome de usuario e contrasinal para entrar',
  'username' => 'usuario',
  'password' => 'contrasinal',
  'remember_me' => 'Gardar contrasinal',
  'welcome' => 'Benvido(a) %s ...',
  'err_login' => '*** non foi posible loguear. téntao novamente ***',
  'err_already_logged_in' => 'Xa estas logueado !',
  'forgot_password_link' => 'Esquecín o meu contrasinal', //cpg1.3.0
  'cookie_warning' => 'Atención: o teu navegador non acepta cookies', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
  'logout' => 'Saír',
  'bye' => 'Deica logo %s ...',
  'err_not_loged_in' => 'Non estas logueado !',
);

// ------------------------------------------------------------------------- //
// File minibrowser.php  //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('MINIBROWSER_PHP')) $lang_minibrowser_php = array(
  'close' => 'pechar', //cpg1.4
  'submit' => 'OK', //cpg1.4
  'up' => 'subir un nivel', //cpg1.4
  'current_path' => 'ruta actual', //cpg1.4
  'select_directory' => 'por favor selecciona un directorio', //cpg1.4
  'click_to_close' => 'Preme na imaxe para pechar esta xanela',
);

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
	'upd_alb_n' => 'actualizar album %s',
	'general_settings' => 'Configuracións xerais',
	'alb_title' => 'Título do album',
	'alb_cat' => 'Categoria do album',
	'alb_desc' => 'Descripción do album',
  'alb_keyword' => 'Palabra-chave do album', //cpg1.4
	'alb_thumb' => 'Miniatura do album',
	'alb_perm' => 'permisos para este album',
	'can_view' => 'album pode ser visto por',
	'can_upload' => 'Visitantes poden enviar fotos',
	'can_post_comments' => 'Visitantes poden enviar comentarios',
	'can_rate' => 'Visitantes poden votar as fotos',
	'user_gal' => 'Galería do usuario',
	'no_cat' => '* sen categoria *',
	'alb_empty' => 'album valeiro',
	'last_uploaded' => 'Último envio',
	'public_alb' => 'Todos (album público)',
	'me_only' => 'só eu',
	'owner_only' => 'só o dono do album (%s)',
	'groupp_only' => 'Membros do grupo\'%s\' ',
	'err_no_alb_to_modify' => 'Non podes modificar nengún album na base de datos.',
	'update' => 'actualizar album',
  'reset_album' => 'Resetear album', //cpg1.4
  'reset_views' => 'Resetear contador de visitas para &quot;0&quot; en %s', //cpg1.4
  'reset_rating' => 'Reseter posicións en todo-los arquivos no %s', //cpg1.4
  'delete_comments' => 'Eliminar todo-los comentarios feitos no %s', //cpg1.4
  'delete_files' => '%sIrreversibe%s elliminar todo-los arquivos no %s', //cpg1.4
  'views' => 'vistas', //cpg1.4
  'votes' => 'votos', //cpg1.4
  'comments' => 'comentarios', //cpg1.4
  'files' => 'arquivos', //cpg1.4
  'submit_reset' => 'gardar trocos', //cpg1.4
  'reset_views_confirm' => 'Estou seguro', //cpg1.4
  'notice1' => '(*) dependendo das opcións dos %sgrupos%s',  //cpg1.4 //(do not translate %s!)
  'alb_password' => 'Contrasinal do album', //cpg1.4
  'alb_password_hint' => 'Recordatorio do contrasinal do álbum', //cpg1.4
  'edit_files' =>'Editar arquivos', //cpg1.4
  'parent_category' =>'Categoría pai (principal)', //cpg1.4
  'thumbnail_view' =>'Ver miniatura', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File phpinfo.php
// ------------------------------------------------------------------------- //

if (defined('PHPINFO_PHP')) $lang_phpinfo_php = array(
  'php_info' => 'PHP info',
  'explanation' => 'Esta é a saída xerada pola función-PHP <a href="http://www.php.net/phpinfo">phpinfo()</a>, q se amosa co Coppermine (trimming the output at the right side).',
  'no_link' => 'Permitir a outros ver a túa phpinfo pode ser un risco de seguridade, este é o motivo polo que esta páxina so é visible cando iniciaches sesión como administrador. Non podes publicar unha ligazón a esta páxina para permitirlles o acceso a outros, xa que se lles denegará o acceso.',
);

// ------------------------------------------------------------------------- //
// File picmgr.php //cpg1.4
// ------------------------------------------------------------------------- //
if (defined('PICMGR_PHP')) $lang_picmgr_php = array(
  'pic_mgr' => 'Xestor de fotos', //cpg1.4
  'select_album' => 'Selecciona album', //cpg1.4
  'delete' => 'Eliminar', //cpg1.4
  'confirm_delete1' => 'Estás seguro que queres elimina-la foto ?', //cpg1.4
  'confirm_delete2' => '\nA foto será eliminada para sempre.', //cpg1.4
  'apply_modifs' => 'Apicar modificacións', //cpg1.4
  'confirm_modifs' => 'Confirmar modificacións', //cpg1.4
  'pic_need_name' => 'A foto precisa ter nome !', //cpg1.4
  'no_change' => 'Non se puido face-lo troco !', //cpg1.4
  'no_album' => '*album Nº *', //cpg1.4
  'explanation_header' => 'A orde a medida que podes especificar nesta páxina só se terá en conta se', //cpg1.4
  'explanation1' => 'o administrador configurou a "Orde por defecto para os arquivos" en "Posición descendente" ou "Posición ascendente" (configuración global para todos os usuarios que non escollan outra opción de ordeación individualmente)', //cpg1.4
  'explanation2' => 'o usuario escolleu "Posición descendente" ou "Posición ascendente" na páxina de miniaturas (configuración por usuario)', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File pluginmgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('PLUGINMGR_PHP')){

$lang_pluginmgr_php = array(
  'confirm_uninstall' => 'Estás certo de que queres DESINSTALAR este plugin', //cpg1.4
  'confirm_delete' => 'Estás certo de que queres ELIMINAR este plugin', //cpg1.4
  'pmgr' => 'Xestor de Plugins', //cpg1.4
  'name' => 'Nome', //cpg1.4
  'author' => 'Autor', //cpg1.4
  'desc' => 'Descrición', //cpg1.4
  'vers' => 'v', //cpg1.4
  'i_plugins' => 'Plugins Instalados', //cpg1.4
  'n_plugins' => 'Plugins Non Instalados', //cpg1.4
  'none_installed' => 'Ningún Instalado', //cpg1.4
  'operation' => 'Operación', //cpg1.4
  'not_plugin_package' => 'O arquivo subido non é un paquete de plugin.', //cpg1.4
  'copy_error' => 'Houbo un erro ó copiar o paquete ó cartafol de plugins.', //cpg1.4
  'upload' => 'Subir', //cpg1.4
  'configure_plugin' => 'Configurar plugin', //cpg1.4
  'cleanup_plugin' => 'Limpar plugin', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
	'already_rated' => 'Desculpa, pero xa votaches esta foto',
	'rate_ok' => 'O teu voto foi feito',
	'forbidden' => 'Non podes votar as túas propias fotos.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
En canto os administradores do sitio ( {SITE_NAME} ) tentaran remover qualqueira contido indesexable, é imposible revisar todas as fotos, recoñeces que todas as fotos feitas por ti neste sitio expresan as túas opinións e non as dos administradores ou do webmaster (Agás os seus mesmos) desfacéndose de calqueira responsabilidade.<br />
<br />
Acordas non postear nengun material abusivo, obsceno, vulgar, odiable, que indique sexualidade ou calqueira outro material que viole calqueira lei aplicable. Concordas que calqueira Webmaster, Administrador e moderador do sitio ( {SITE_NAME} ) ten o dereito de remover, editar calqueira conteído a calqueira hora que sexa necesario. Como usuario concordas que todas as informacións dadas por ti serán gardadas no noso banco de datos, e que estas informacións non sexan enviadas a nengunha terceira persoa sen o teu consentimento. O Webmaster e o Administrador non se responsibilizarán por nengunha acción hacker que poida comprometer os datos.<br />
<br />
Este sitio usa cookies para almacenar informacións no seu computador. Estas cookies serven só para proveer de maior tecnoloxia ó sitio. O seu email é usado só para confirmar os detalles do seu rexistro e sua contrasinal.<br />
<br />
Premendo en 'Estou dacordo', concordas con todos estas condicions.
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
	'err_unhame_short' => 'Nome de usuario precisa ter mínimo 2 caracteres',
	'err_password_short' => 'Sua contrasinal ten que ter un mínimo de 2 caracteres',
	'err_unhame_pass_diff' => 'Nome de usuario e contrasinal deben ser diferentes',
	'err_invalid_email' => 'Enderezo de e-mail inválido',
	'err_duplicate_email' => 'xa existe outro usuario Rexistrado con este e-mail',
	'enter_info' => 'Entre coas informacións de rexistro',
	'required_info' => 'Información Obrigatoria',
	'optional_info' => 'Información Opcional',
	'username' => 'usuario',
	'password' => 'contrasinal',
	'password_again' => 'reescriba a contrasinal',
	'email' => 'E-mail',
	'location' => 'Enderezo',
	'interests' => 'Intereses',
	'website' => 'Páxina web',
	'occupation' => 'Profesión',
	'error' => 'ERRO',
	'confirm_email_subject' => '%s - CONFIRMACION DE rexistro',
	'information' => 'Información',
	'failed_sending_email' => 'O e-mail de confirmación de rexistro non pode ser enviado !',
	'thank_you' => 'Graciñas por rexistrarte.<br /><br />As informacións para finalizar o teu rexistro foron enviadas ó teu e-mail.',
	'acct_created' => 'A túa conta foi creada e agora podes entrar co teu nome de usuario e a túa contrasinal',
	'acct_active' => 'A túa conta xa está activa. Entra co teu nome de usuario e contrasinal para loguear',
	'acct_already_act' => 'A túa conta xa está activa !',
	'acct_act_failed' => 'Esta conta aínda non está activa  !',
	'err_unk_user' => 'o usuario seleccionado non existe !',
	'x_s_profile' => 'Perfil de %s',
	'group' => 'Grupo',
	'reg_date' => 'Participante',
	'disk_usage' => 'Uso do disco',
	'change_pass' => 'trocar contrasinal',
	'current_pass' => 'contrasinal actual',
	'new_pass' => 'Nova contrasinal',
	'new_pass_again' => 'reescriba a nova contrasinal',
	'err_curr_pass' => 'contrasinal atual INCORRECTA',
	'apply_modif' => 'Gardar modificacions',
	'change_pass' => 'trocar o meu contrasinal',
	'update_success' => 'Os seus datos foron atualizados',
	'pass_chg_success' => 'O teu contrasinal foi trocado',
	'pass_chg_error' => 'O teu contrasinal non foi trocado',
	'notify_admin_email_subject' => '%s - Notificación de rexistro', //cpg1.3.0
  'last_uploads' => 'último arquivo subido.<br />Pulse para ver todos os subidos por ', //cpg1.4
  'last_comments' => 'Últimos comentarios.<br />Pulse para ver todos os comentarios de ', //cpg1.4
	'notify_admin_email_body' => 'O usuario "%s" foi Rexistrado na túa galería', //cpg1.3.0
  'pic_count' => 'Arquivos subidos', //cpg1.4
  'notify_admin_request_email_subject' => '%s - Petición de rexistro', //cpg1.4
  'thank_you_admin_activation' => 'Gracias.<br /><br />A túa solicitude de rexistro foi enviada o Administrador. Recebirás un e-mail de aprobación.', //cpg1.4
  'acct_active_admin_activation' => 'A conta agora está activada e un e-mail foi enviado o usuario.', //cpg1.4
  'notify_user_email_subject' => '%s - Notificación da activación', //cpg1.4
);

$lang_register_confirm_email = <<<EOT
Gracias por te rexistrar na {SITE_NAME}

Para activar a túa conta como usuario "{USER_NAME}", preme na seguinte ligazón ou copia e cola na barra de endeezos do teu navegador web.

<a href="{ACT_LINK}">{ACT_LINK}</a>

Consideracións,

O administrador de {SITE_NAME}

EOT;

$lang_register_approve_email = <<<EOT
Un novo usuario con nome "{USER_NAME}" rexistrouse na galería.

Para activar a conta tes que pulsar na ligazón de embaixo ou copiar e colar na barra de dirección do teu navegador web.

<a href="{ACT_LINK}">{ACT_LINK}</a>

EOT;

$lang_register_activated_email = <<<EOT
A túa conta foi aprobada e activada.

Podeste logear agora en <a href="{SITE_LINK}">{SITE_LINK}</a> co nome de usuario "{USER_NAME}"


Consideracións,

O administrador de {SITE_NAME}

EOT;
}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
	'title' => 'Revisar comentarios',
	'no_comment' => 'non hai comentarios para revisar',
	'n_comm_del' => '%s comentario(s) borrado(s)',
	'n_comm_disp' => 'Número de comentarios para visualizar',
	'see_prev' => 'Anterior',
	'see_next' => 'Próximo',
	'del_comm' => 'Borrar comentarios seleccionados',
  'user_name' => 'Nome', //cpg1.4
  'date' => 'Data', //cpg1.4
  'comment' => 'Comentario', //cpg1.4
  'file' => 'Arquivo', //cpg1.4
  'name_a' => 'Nome de usuario ascendente', //cpg1.4
  'name_d' => 'Nome de usuario descendente', //cpg1.4
  'date_a' => 'Data ascendente', //cpg1.4
  'date_d' => 'Data descendente', //cpg1.4
  'comment_a' => 'Comentario ascendente', //cpg1.4
  'comment_d' => 'Comentario descendente', //cpg1.4
  'file_a' => 'Arquivo ascendente', //cpg1.4
  'file_d' => 'Arquivo descendente', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File search.php                                                           //
// ------------------------------------------------------------------------- //


if (defined('SEARCH_PHP')){

$lang_search_php = array(
  'title' => 'Procurar a colección do arquivo', //cpg1.4
  'submit_search' => 'Procurar', //cpg1.4
  'keyword_list_title' => 'Lista de palabras chave', //cpg1.4
  'keyword_msg' => 'A lista mencionada enriba non está incluida. Non incluiches palabras de títulos de foto e descricións. Tenta procurar por texto completo.',  //cpg1.4
  'edit_keywords' => 'Editar palabras chave', //cpg1.4
  'search in' => 'Procurar en:', //cpg1.4
  'ip_address' => 'Enderezos IP', //cpg1.4
  'fields' => 'Procurar en', //cpg1.4
  'age' => 'Edade', //cpg1.4
  'newer_than' => 'Máis novo que', //cpg1.4
  'older_than' => 'Máis vello que', //cpg1.4
  'days' => 'días', //cpg1.4
  'all_words' => 'Combina con todas as palabras (E)', //cpg1.4
  'any_words' => 'Combina con calquera palabra (OU)', //cpg1.4
);

$lang_adv_opts = array(
  'title' => 'Título', //cpg1.4
  'caption' => 'Lenda', //cpg1.4
  'keywords' => 'Palabras chave', //cpg1.4
  'owner_name' => 'Nome do propietario', //cpg1.4
  'filename' => 'Nome do arquivo', //cpg1.4
);

}

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
	'page_title' => 'Procurar novas fotos',
	'select_dir' => 'Seleccionar directorio',
	'select_dir_msg' => 'Esta función permiteche enviar diversas fotos ao mesmo tempo.<br /><br />Selecciona o directorio das fotos',
	'no_pic_to_add' => 'non hai fotos para engadir',
	'need_one_album' => 'Precisas ter polo menos un album para usar esta 
función',
	'warning' => 'coidado',
	'change_perm' => 'O script non pode grabar neste directorio que debe ter permiso 755 ou 777 !',
	'target_album' => '<b>Colocar fotos do &quot;</b>%s<b>&quot; en </b>%s',
	'folder' => 'cartafol',
	'image' => 'Foto',
	'album' => 'album',
	'result' => 'Resultado',
	'dir_ro' => 'non grabable. ',
	'dir_cant_read' => 'non pode ser lido. ',
	'insert' => 'Adicionando novas fotos á galería',
	'list_new_pic' => 'Lista das novas fotos',
	'insert_selected' => 'Inserir fotos seleccionadas',
	'no_pic_found' => 'nengunha foto nova foi encontrada',
	'be_patient' => 'Por favor teña pacenza. O sistema nescesita de tempo para enviar as fotos',
  'no_album' => 'non seleccionou ningún album',
  'result_icon' => 'pulse para detalles ou recargar',  //cpg1.4
	'notes' =>  '<ul>'.
				'<li><b>OK</b> : Significa que foi enviado con exito'.
				'<li><b>DP</b> : Significa que existe un duplicado na base de datos'.
				'<li><b>PB</b> : Significa que non pode ser enviado, verifica a túa 
Configuración e os permisos dos directorios.'.
				'<li><b>NA</b> : Significa que non seleccionaches ningún album para 
engadir as fotos, pulsa en \'<a 
href="javascript:history.back(1)">voltar</a>\' e selecciona un album. Se 
non tes un album <a href="albmgr.php">crea un primeiro</a></li>'.
				'<li>Se un dos \'simbolos\' OK, DP ou PB non apareceren pulsa no 
símbolo co problema para recibir a Mensaxe de erro'.
				'<li>Se o tempo expira, intentao novamente actualizando a páxina'.
				'</ul>', //cpg1.3.0
	'select_album' => 'seleccionar album', //cpg1.3.0
	'check_all' => 'Marcar Todo', //cpg1.3.0
	'uncheck_all' => 'Desmarcar Todo', //cpg1.3.0
  'no_folders' => 'Non hai ningún cartafol dentro do cartafol "album" aínda. Asegurate de crear alomenos un cartafol dentro de "albums" e subir via ftp os teus arquivos ali. You mustn\'t upload to the "userpics" nor "edit" folders, they are reserved for http uploads and internal purposes.', //cpg1.4
   'albums_no_category' => 'Albums sin categoría', //cpg1.4 // album pulldown mod, added by frogfoot
  'personal_albums' => '* Albums persoal', //cpg1.4 // album pulldown mod, added by frogfoot
  'browse_batch_add' => 'Inferfaz de Browsable (recomendado)', //cpg1.4
  'edit_pics' => 'Editar arquivos', //cpg1.4
  'edit_properties' => 'Propiedades do album', //cpg1.4
  'view_thumbs' => 'Ver miniaturas', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File stat_details.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('STAT_DETAILS_PHP')) $lang_stat_details_php = array(
  'show_hide' => 'mostrar/ocultar esta columna', //cpg1.4
  'vote' => 'Detalles do voto', //cpg1.4
  'hits' => 'Detalles do hit', //cpg1.4
  'stats' => 'Estatísticas do Voto', //cpg1.4
  'sdate' => 'Data', //cpg1.4
  'rating' => 'Posición', //cpg1.4
  'search_phrase' => 'Buscar frase', //cpg1.4
  'referer' => 'Referer', //cpg1.4
  'browser' => 'Navegador', //cpg1.4
  'os' => 'Sistema Operativo', //cpg1.4
  'ip' => 'IP', //cpg1.4
  'sort_by_xxx' => 'Ordenar por %s', //cpg1.4
  'ascending' => 'ascendente', //cpg1.4
  'descending' => 'descendente', //cpg1.4
  'internal' => 'int', //cpg1.4
  'close' => 'Pechar', //cpg1.4
  'hide_internal_referers' => 'agochar referers internos', //cpg1.4
  'date_display' => 'Mostrar data', //cpg1.4
  'submit' => 'enviar / actualizar', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File thumbnails.php
// ------------------------------------------------------------------------- //

// Void

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) $lang_upload_php = array(
  'title' => 'Envio de Foto', //cpg1.3.0
  'custom_title' => 'Formulario de Pedidos personalizable', //cpg1.3.0
  'cust_instr_1' => 'Debes selecionar un número personalizable de caixas de envio. mentres non podes selecionar máis do que os limites amosados abaixo.', //cpg1.3.0
  'cust_instr_2' => 'número de Caixas de Pedidos', //cpg1.3.0
  'cust_instr_3' => 'Caixas de envio de arquivo: %s', //cpg1.3.0
  'cust_instr_4' => 'Caixas de envio de URI/URL: %s', //cpg1.3.0
  'cust_instr_5' => 'Caixas de envio de URI/URL:', //cpg1.3.0
  'cust_instr_6' => 'Caixas de envio de arquivo:', //cpg1.3.0
  'cust_instr_7' => 'Por favor insire o número de cada tipo de caixa de envio que desexas desta vez e preme en \'Continuar\'. ', //cpg1.3.0
  'reg_instr_1' => 'acción inválida para o formulario de creacion.', //cpg1.3.0
  'reg_instr_2' => 'Agora podes enviar os teus arquivos usando as caixas de envio de abaixo. Os arquivos a seren enviados para o servidor non poden exceder o tamaño de %s KB cada un. Arquivos ZIP enviados para a seccion de \'Envio de Arquivo\' e \'Envio de URI/URL\' iran permanecer compactados.', //cpg1.3.0
  'reg_instr_3' => 'Se queres o arquivo zipado ou que o arquivo sexa descompactado, debes usar a caixa de envio especial para isto, area \'Envio de ZIP con descompactación\'.', //cpg1.3.0
  'reg_instr_4' => 'cando uses a seccion de envio URI/URL, por favor insire o camiño para o arquivo. Ex: http://www.meusite.co.br/imaxes/foto.jpg', //cpg1.3.0
  'reg_instr_5' => 'cando remates de completar o formulario, por favor preme en \'Continuar\'.', //cpg1.3.0
  'reg_instr_6' => 'Envio de ZIP co descompactación:', //cpg1.3.0
  'reg_instr_7' => 'Envio de arquivos:', //cpg1.3.0
  'reg_instr_8' => 'Envio de URI/URL:', //cpg1.3.0
  'error_report' => 'Relatório de Erro', //cpg1.3.0
  'error_instr' => 'ocorreran erros nos seguintes envios:', //cpg1.3.0
  'file_name_url' => 'Arquivo/URL', //cpg1.3.0
  'error_message' => 'Mensaxe de Erro', //cpg1.3.0
  'no_post' => 'nengún arquivo seleccionado.', //cpg1.3.0
  'forb_ext' => 'extension de arquivo proibida.', //cpg1.3.0
  'exc_php_ini' => 'tamaño de arquivo excedido permitido para o php.ini.', //cpg1.3.0
  'exc_file_size' => 'tamaño de arquivo excedido permitido para a galería.', //cpg1.3.0
  'partial_upload' => 'só envio parcial.', //cpg1.3.0
  'no_upload' => 'nengun envio ocorrido.', //cpg1.3.0
  'unknown_code' => 'Codigo de erro PHP de envio, inválido.', //cpg1.3.0
  'no_temp_name' => 'nengun envio - nengun nome temporal.', //cpg1.3.0
  'no_file_size' => 'Esta en branco/corrupto', //cpg1.3.0
  'impossible' => 'Imposible mover.', //cpg1.3.0
  'not_image' => 'non é unha imaxe/corrupta', //cpg1.3.0
  'not_GD' => 'non é unha extension GD.', //cpg1.3.0
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
  'MIME_type_unknown' => 'Tipo de MIME inválido', //cpg1.3.0
  'cant_create_write' => 'non foi posible Crear un arquivo grabable.', //cpg1.3.0
  'not_writable' => 'non foi posible grabar nun arquivo grabable.', //cpg1.3.0
  'cant_read_URI' => 'non foi posible ler a URI/URL', //cpg1.3.0
  'cant_open_write_file' => 'non foi posible abrir o arquivo URI grabable.', //cpg1.3.0
  'cant_write_write_file' => 'non foi posible grabar no arquivo URI grabable.', //cpg1.3.0
  'cant_unzip' => 'non foi posible descomprimir.', //cpg1.3.0
  'unknown' => 'Erro inválido', //cpg1.3.0
  'succ' => 'Envio realizado con exito', //cpg1.3.0
  'success' => '%s envios con exito.', //cpg1.3.0
  'add' => 'Por favor preme en \'Continuar\' para engadir os arquivos nos albums.', //cpg1.3.0
  'failure' => 'erro de envio', //cpg1.3.0
  'f_info' => 'Información do Arquivo', //cpg1.3.0
  'no_place' => 'O arquivo anterior non pode ser inserido.', //cpg1.3.0
  'yes_place' => 'O arquivo anterior foi inserido con exito.', //cpg1.3.0
  'max_fsize' => 'O tamaño máximo permitido de arquivo é %s KB',
  'album' => 'album',
  'picture' => 'Foto', //cpg1.3.0
  'pic_title' => 'Titulo da Foto', //cpg1.3.0
  'description' => 'Descripción da Foto', //cpg1.3.0
  'keywords' => 'Palabras-Chave (separado con espazos)<br /><a href="#" onClick="return MM_openBrWindow(\'keyword_select.php\',\'selectKey\',\'width=250, height=400, scrollbars=yes,toolbar=no,status=yes,resizable=yes\')">Insire a lista</a>', //cpg1.4
  'keywords_sel' =>'Selecciona palabras-chave', //cpg1.4
  'err_no_alb_uploadables' => 'Desculpa, non estás autorizado a enviar arquivos para nengún album', //cpg1.3.0
  'place_instr_1' => 'Por favor insire os arquivos no album agora. Debes tamén inserir informacións sobre cada arquivo agora.', //cpg1.3.0
  'place_instr_2' => 'máis arquivos precisan ser colocados. Por favor preme en \'Continuar\'.', //cpg1.3.0
  'process_complete' => 'Inseriches con exito todos os arquivos.', //cpg1.3.0
   'albums_no_category' => 'Albums sen categoría', //cpg1.4. //album pulldown mod, added by frogfoot
  'personal_albums' => '* Albums persoais', //cpg1.4 //album pulldown mod, added by frogfoot
  'select_album' => 'Selecciona album', //cpg1.4 //album pulldown mod, added by frogfoot
  'close' => 'Pechar', //cpg1.4
  'no_keywords' => 'Non hai palabras-chave dispoñibles', //cpg1.4
  'regenerate_dictionary' => 'Rexenerar diccionario', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
  'memberlist' => 'Lista de membros', //cpg1.4
  'user_manager' => 'Xestor de usuarios', //cpg1.4
	'title' => 'administrar usuarios',
	'name_a' => 'Nome Ascendente',
	'name_d' => 'Nome Descendente',
	'group_a' => 'Grupo Ascendente',
	'group_d' => 'Grupo Descendente',
	'reg_a' => 'Data de rexistro Ascendente',
	'reg_d' => 'Data de rexistro Descendente',
	'pic_a' => 'Contador de fotos ascendente',
	'pic_d' => 'Contador de fotos descendente',
	'disku_a' => 'Uso de disco ascendente',
	'disku_d' => 'Uso de disco descendente',
	'lv_a' => 'Ultima visita Ascendente', //cpg1.3.0
	'lv_d' => 'Ultima visita Descendente', //cpg1.3.0
	'sort_by' => 'Listar usuarios por',
	'err_no_users' => 'A táboa de usuarios está vacia !',
	'err_edit_self' => 'Non pode trocar os teus datos \'persoais\', usa a ligazón \'Os meus datos\' para isto ',
  'edit' => 'Editar', //cpg1.4
  'with_selected' => 'Co seleccionado:', //cpg1.4
  'delete' => 'Eliminar', //cpg1.4
  'delete_files_no' => 'manter os arquivos públicos (pero facelos anónimos)', //cpg1.4
  'delete_files_yes' => 'borrar arquivos públicos tamén', //cpg1.4
  'delete_comments_no' => 'manter comentarios (pero facelos anónimos)', //cpg1.4
  'delete_comments_yes' => 'borrar comentarios tamén', //cpg1.4
  'activate' => 'Activar', //cpg1.4
  'deactivate' => 'Desactivar', //cpg1.4
  'reset_password' => 'Restaurar Contrasinal', //cpg1.4
  'change_primary_membergroup' => 'Mudar grupo de membros primario', //cpg1.4
  'add_secondary_membergroup' => 'Engadir grupo de membros secundario', //cpg1.4
	'name' => 'usuario',
	'group' => 'Grupo',
	'inactive' => 'Inactivo',
	'operations' => 'Operacións',
	'pictures' => 'Fotos',
  'disk_space_used' => 'Espazo utilizado', //cpg1.4
  'disk_space_quota' => 'Cuota de Espazo', //cpg1.4
  'registered_on' => 'Rexistro', //cpg1.4
	'last_visit' => 'Última Visita', //cpg1.3.0
	'u_user_on_p_pages' => '%d usuario(s) en %d páxina(s)',
	'confirm_del' => 'estás certo de que queres ELIMINAR este usuario ? \\nTodas as fotos e albums del serán removidos.',
	'mail' => 'CORREO',
	'err_unknown_user' => 'o usuario seleccionado non existe !',
	'modify_user' => 'Modificar usuario',
	'notes' => 'Notas',
	'note_list' => '<li>Se non queres trocar o teu contrasinal, deixa o campo en branco',
	'password' => 'contrasinal',
	'user_active' => 'o usuario está activo',
	'user_group' => 'Grupo de usuarios',
	'user_email' => 'correo-e do usuario',
	'user_web_site' => 'Sitio do usuario',
	'create_new_user' => 'Crear novo usuario',
	'user_location' => 'Enderezo',
	'user_interests' => 'Intereses',
	'user_occupation' => 'Ocupacion',
  'user_profile1' => '$user_profile1', //cpg1.4
  'user_profile2' => '$user_profile2', //cpg1.4
  'user_profile3' => '$user_profile3', //cpg1.4
  'user_profile4' => '$user_profile4', //cpg1.4
  'user_profile5' => '$user_profile5', //cpg1.4
  'user_profile6' => '$user_profile6', //cpg1.4	
  'latest_upload' => 'Envios Recentes', //cpg1.3.0
	'never' => 'nunca', //cpg1.3.0
  'search' => 'Procura de usuarios', //cpg1.4
  'submit' => 'Enviar', //cpg1.4
  'search_submit' => 'Dalle!', //cpg1.4
  'search_result' => 'Resultados da procura para: ', //cpg1.4
  'alert_no_selection' => 'Primeiro tes que seleccionar un usuario polo menos!', //cpg1.4 //js-alert
  'password' => 'contrasinal', //cpg1.4
  'select_group' => 'Seleccionar grupo', //cpg1.4
  'groups_alb_access' => 'Permisos de álbum segundo o grupo', //cpg1.4
  'album' => 'Álbum', //cpg1.4
  'category' => 'Categoría', //cpg1.4
  'modify' => 'Modificar?', //cpg1.4
  'group_no_access' => 'Este grupo non ten acceso especial', //cpg1.4
  'notice' => 'Anuncio', //cpg1.4
  'group_can_access' => 'Álbum(s) ós que só pode acceder "%s"', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //

if (defined('UTIL_PHP')) {
$lang_util_desc_php = array(
'Actualiza títulos dende o nome de arquivo', //cpg1.4
'Borra os títulos', //cpg1.4
'Reconstrúe miniaturas e fotos de tamaño redimensionado', //cpg1.4
'Borra as fotos de tamaño orixinal reemprazándoas pola versión de tamaño redimensionado', //cpg1.4
'Borra fotos de tamaño orixinal ou intermedio para ceibar espazo no web', //cpg1.4
'Borra comentarios orfos', //cpg1.4
'Rele os tamaños e dimensións dos arquivos (por se editaches imaxes manualmente)', //cpg1.4
'Restaura o contador de vistas', //cpg1.4
'Amosa a phpinfo', //cpg1.4
'Actualiza o banco de datos', //cpg1.4
'Amosa os arquivos de rexistro (log)', //cpg1.4
);
$lang_util_php = array(
  'title' => 'Utilidades para o Admin (Redimensionar)', //cpg1.3.0
  'what_it_does' => 'O que esta utilidade pode facer:',
  'file' => 'Arquivo',
  'problem' => 'Problema', //cpg1.4
  'status' => 'Estado', //cpg1.4
  'title_set_to' => 'titulo setado para',
  'submit_form' => 'enviar',
  'updated_succesfully' => 'actualizado con exito',
  'error_create' => 'ERRO creando',
  'continue' => 'Procesar máis imaxes',
  'main_success' => 'O arquivo %s foi co arquivo principal', //cpg1.3.0
  'error_rename' => 'Erro renomeando %s para %s',
  'error_not_found' => 'O arquivo %s non foi atopado',
  'back' => 'voltar para a páxina principal',
  'thumbs_wait' => 'Actualizando miniaturas e/ou imaxes redimensionadas, por favor agarda...',
  'thumbs_continue_wait' => 'Continuando a actualizar miniaturas e/ou imaxes redimensionadas...',
  'titles_wait' => 'actualizando titulos, por favor agarda...',
  'delete_wait' => 'Borrando titulos, por favor agarda...',
  'replace_wait' => 'Borrando orixinais e repoñéndoas cás imaxes redimensionadas, por favor agarda..',
  'instruction' => 'Instruccións rápidas',
  'instruction_action' => 'Selecciona a acción',
  'instruction_parameter' => 'Axusta os parámetros',
  'instruction_album' => 'Selecciona o album',
  'instruction_press' => 'Preme %s',
  'update' => 'actualizar miniaturas e/ou redimensionar fotos',
  'update_what' => 'O que debe ser actualizado',
  'update_thumb' => 'só miniaturas',
  'update_pic' => 'só imaxes redimensionadas',
  'update_both' => 'Miniaturas e imaxes redimensionadas',
  'update_number' => 'Número de imaxes procesadas por click',
  'update_option' => '(tenta un número menor no caso de que sigas a ter problemas co tempo de vencemento (timeout))',
  'filename_title' => 'Arquivo &rArr; Titulo do arquivo', //cpg1.3.0
  'filename_how' => 'o arquivo debe ser modificado',
  'filename_remove' => ' o .jpg no final e reemprazar _ (subliñado) con espazos',
  'filename_euro' => 'trocar 2003_11_23_13_20_20.jpg para 23/11/2003 13:20',
  'filename_us' => 'trocar 2003_11_23_13_20_20.jpg para 11/23/2003 13:20',
  'filename_time' => 'trocar 2003_11_23_13_20_20.jpg para 13:20',
  'delete' => 'Borrar título de arquivos ou tamaños orixinais de fotos', //cpg1.3.0
  'delete_title' => 'Borrar titulo de arquivos', //cpg1.3.0
  'delete_title_explanation' => 'Isto eliminará todos os títulos nos arquivos do álbum que especifiques.', //cpg1.4
  'delete_original' => 'Borrar fotos de tamaño orixinal',
  'delete_original_explanation' => 'Isto eliminará as imaxes de tamaño completo.', //cpg1.4
  'delete_intermediate' => 'Borrar imaxes intermedias', //cpg1.4
  'delete_intermediate_explanation' => 'Isto eliminará as imaxes intermedias (normais).<br />Usa esta opción para ceibar espazo de disco se desactivaches \'Crear imaxes intermedias\' na configuración logo de engadir imaxes.', //cpg1.4
  'delete_replace' => 'borra as imaxes orixinais repoñéndoas coa version redimensionada',
  'titles_deleted' => 'Elimináronse todos os títulos no álbum especificado', //cpg1.4
  'deleting_intermediates' => 'Eliminando imaxes intermedias, por favor, agarda...', //cpg1.4
  'searching_orphans' => 'Procurando orfos, por favor, agarda...', //cpg1.4
  'select_album' => 'Selecciona o album',
  'delete_orphans' => 'Borrar comentarios de arquivos desaparecidos', //cpg1.4
  'delete_orphans_explanation' => 'Isto permitirache identificar e borrar calquer comentario asociado con arquivos que xa non existen na galería.<br />Comproba todos os álbums.', //cpg1.4
  'refresh_db' => 'Recargar información de tamaño e dimensións do arquivo', //cpg1.4
  'refresh_db_explanation' => 'Isto relerá  os tamaños e dimensións de arquivo. Úsao se as cuotas asociadas son incorrectas ou se mudaches os arquivos manualmente.', //cpg1.4
  'reset_views' => 'Restaurar contadores de visualizacións', //cpg1.4
  'reset_views_explanation' => 'Axusta a cero todos os contadores de visualizacións de arquivo no álbum especificado.', //cpg1.4
  'orphan_comment' => 'comentarios orfos atopados', //cpg1.3.0
  'delete' => 'Borrar', //cpg1.3.0
  'delete_all' => 'Borrar todos', //cpg1.3.0
  'delete_all_orphans' => 'Borrar todos os orfos?', //cpg1.4
  'comment' => 'comentario: ', //cpg1.3.0
  'nonexist' => 'atachado nun arquivo que non existe # ', //cpg1.3.0
  'phpinfo' => 'Amosar phpinfo', //cpg1.3.0
  'phpinfo_explanation' => 'Contén información técnica verbo do teu servidor.<br /> - Pode que se che pida facilitar esta información cando pidas axuda de soporte.', //cpg1.4
  'update_db' => 'actualizar banco de datos', //cpg1.3.0
  'update_db_explanation' => 'Se sustituiches arquivos da galería, engadíches algunha modificación ou actualizaches dunha version anterior da galería, asegúrate de darlle a actualización do banco de datos unha vez. Isto creará as táboas necesarias e/ou valores de configuración no teu banco de datos.', //cpg1.3.0
  'view_log' => 'Ver arquivos de rexistro (logs)', //cpg1.4
  'view_log_explanation' => 'O Coppermine pode manter un rexistro das diversas accións levadas a cabo polos usuarios. Podes explorar estes rexistros (logs) se activaches a opción correspondente(logging) na <a href="admin.php">configuración do coppermine</a>.', //cpg1.4
  'versioncheck' => 'Comprobar versións', //cpg1.4
  'versioncheck_explanation' => 'Comproba as versións dos teus arquivos para verificar se reemprazaches todos os arquivos logo dunha actualización, ou se foron actualizados arquivos fonte do coppermine despóis do lanzamento dun paquete.', //cpg1.4
  'bridgemanager' => 'Xestor de Ponte', //cpg1.4
  'bridgemanager_explanation' => 'Activar/desactivar integración (ponteado) do Coppermine con outra aplicación (p.e. o teu BBS).', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File versioncheck.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('VERSIONCHECK_PHP')) $lang_versioncheck_php = array(
  'title' => 'Comprobación de versión', //cpg1.4
  'what_it_does' => 'Esta páxina está indicada para os usuarios que actualizaron a súa instalación do coppermine. Este script recorre os arquivos do teu servidor web e tenta determinar se as versións dos teus arquivos locais son as mesmas que as do depósito en http://coppermine.sourceforge.net, amosando deste xeito ó mesmo tempo os arquivos que deberías actualizar.<br />Amosaráche en vermello todo o que precisa ser corrixido. As entradas en amarelo necesitan atención e deben examinarse. As entradas en verde (ou na túa cor de fonte por defecto) son correctas.<br />Preme nas iconas de axuda para obter máis detalles.', //cpg1.4
  'online_repository_unable' => 'Non se puido conectar co depósito en liña', //cpg1.4
  'online_repository_noconnect' => 'O Coppermine non puiod conectar co depósito en liña. Isto pode ser por dúas razóns:', //cpg1.4
  'online_repository_reason1' => 'o depósito en liña do coppermine está actualmente de baixa - comproba se podes navegar por esta páxina: %s - se non podes acceder a ela, téntao de novo máis tarde.', //cpg1.4
  'online_repository_reason2' => 'O PHP do teu servidor web está configurado con %s desconectado (por defecto, está activado). Se és ti quen o administra, activa esta opción no <i>php.ini</i> (polo menos permite que %s teña prioridade). Se estás hospedado nun servidor web, o máis probable é que teñas que vivir co feito de non poder comparar os teus arquivos cos do depósito online. Nese caso esta páxina só amosará as versións do arquivos que veñen coa túa distribución - as actualizacións non serán amosadas.', //cpg1.4
  'online_repository_skipped' => 'Conexión co depósito en liña omitida', //cpg1.4
  'online_repository_to_local' => 'O script está agora pasando á copia local dos arquivos-versión por defecto. Os datos poden ser inexactos de actualizaches o Coppermine e non subiches todos os arquivos. Os trocos ós arquivos despois do lanzamento tampouco serán tidos en conta.', //cpg1.4
  'local_repository_unable' => 'Non se puido conectar co depósito no teu servidor', //cpg1.4
  'local_repository_explanation' => 'O Coppermine non foi quen de conectar co arquivo %s do depósito no teu servidor web. Isto significa probablemente que non subiches o arquivo do depósito ó teu servidor web. Faino agora e logo tenta cargar esta páxina de novo (preme en actualizar).<br />Se o script continúa fallando, pode que o teu webhost teña desactivado completamente partes das <a href="http://www.php.net/manual/en/ref.filesystem.php">funcións do sistema de arquivos do PHP</a> . Neste caso, simplemente non poderás usar esta ferramenta de ningún xeito, sentímolo.', //cpg1.4
  'coppermine_version_header' => 'Versión instalada do Coppermine', //cpg1.4
  'coppermine_version_info' => 'Actualmente tes instalado: %s', //cpg1.4
  'coppermine_version_explanation' => 'Se pensas que esta información e totalmente errónea e cres que estás a usar unha versión maior do Coppermine, probablemente non subiches a versión máis recente do arquivo <i>include/init.inc.php</i>', //cpg1.4
  'version_comparison' => 'Comparación de versión', //cpg1.4
  'folder_file' => 'cartafol/arquivo', //cpg1.4
  'coppermine_version' => 'versión cpg', //cpg1.4
  'file_version' => 'versión de arquivo', //cpg1.4
  'webcvs' => 'svn web', //cpg1.4
  'writable' => 'sobreescribible', //cpg1.4
  'not_writable' => 'non sobreescribible', //cpg1.4
  'help' => 'Axuda', //cpg1.4
  'help_file_not_exist_optional1' => 'o arquivo/cartafol non existe', //cpg1.4
  'help_file_not_exist_optional2' => 'O arquivo/cartafol %s non foi atopado no teu servidor. Ainda que é opcional podes subilo ó teu servidor web (usando o teu cliente FTP) se estás a atopar problemas.', //cpg1.4
  'help_file_not_exist_mandatory1' => 'o arquivo/cartafol non existe', //cpg1.4
  'help_file_not_exist_mandatory2' => 'O arquivo/cartafol %s non foi atopado no teu servidor, a pesares de ser obrigatorio. Sube o arquivo ó teu servidor web (usando o teu cliente FTP).', //cpg1.4
  'help_no_local_version1' => 'Non hai versión do arquivo local', //cpg1.4
  'help_no_local_version2' => 'O script non foi quen de extraer unha versión do arquivo local - o teu arquivo está anticuado o ben ti mesmo o modificaches, eliminando a información de cabeceira dalgún xeito. Recoméndase actualizar o arquivo.', //cpg1.4
  'help_local_version_outdated1' => 'Versión local anticuada', //cpg1.4
  'help_local_version_outdated2' => 'A túa versión deste arquivo semella proceder dunha versión máis antiga do Coppermine (probablemente fixeches unha actualización). Asegúrate de actualizar este arquivo tamén.', //cpg1.4
  'help_local_version_na1' => 'Non se puido extraer a información da versión do svn', //cpg1.4
  'help_local_version_na2' => 'O script non puido determinar que versión do svn é a do arquivo que hai no teu servidor web. Tes que subir o arquivo dende o teu paquete de arquivos.', //cpg1.4
  'help_local_version_dev1' => 'Versión de desenvolvemento', //cpg1.4
  'help_local_version_dev2' => 'O arquivo que hai no teu servidor web semella ser máis recente que o da túa versión do Coppermine. Ou ben estás a usar un arquivo en desenvolvemento (debes facer isto só se sabes que estás a facer), ou ben actualizaches a túa instalación do Coppermine e non subiches o arquivo include/init.inc.php', //cpg1.4
  'help_not_writable1' => 'Cartafol protexido contra escritura', //cpg1.4
  'help_not_writable2' => 'Muda os permisos de arquivo (CHMOD) para permitirlle ó script acceso de escritura ó cartafol %s e a todo o contido deste.', //cpg1.4
  'help_writable1' => 'Cartafol non protexido contra escritura', //cpg1.4
  'help_writable2' => 'O cartafol %s non está protexido contra escritura. Isto é un risco innecesario, xa que o coppermine só precisa acceso de lectura/execución.', //cpg1.4
  'help_writable_undetermined' => 'O Coppermine non foi quen de determinar se o cartafol non está protexido contra escritura.', //cpg1.4
  'your_file' => 'o teu arquivo', //cpg1.4
  'reference_file' => 'arquivo de referencia', //cpg1.4
  'summary' => 'Sumario', //cpg1.4
  'total' => 'Total de arquivos/cartafois marcados', //cpg1.4
  'mandatory_files_missing' => 'Arquivos obrigatorios desaparecidos', //cpg1.4
  'optional_files_missing' => 'Arquivos opcionais desparecidos', //cpg1.4
  'files_from_older_version' => 'Arquivos residuais procedentes dunha versión anticuada do Coppermine', //cpg1.4
  'file_version_outdated' => 'Versións de arquivo anticuadas', //cpg1.4
  'error_no_data' => 'O script queixouse amargamente, non foi quen de obter información ningunha. Pordoa polas molestias.', //cpg1.4
  'go_to_webcvs' => 'ir a %s', //cpg1.4
  'options' => 'Opcións', //cpg1.4
  'show_optional_files' => 'amosar cartafois/arquivos opcionais', //cpg1.4
  'show_mandatory_files' => 'amosar arquivos obrigatorios', //cpg1.4
  'show_file_versions' => 'amosar versións de arquivo', //cpg1.4
  'show_errors_only' => 'amosar só cartafois/arquivos con erros', //cpg1.4
  'show_permissions' => 'amosar permisos de cartafois', //cpg1.4
  'show_condensed_output' => 'amosar saída condensada (para obter instantáneas de pantalla de xeito máis sinxelo)', //cpg1.4
  'coppermine_in_webroot' => 'o coppermine está instalado na raíz (root) do web', //cpg1.4
  'connect_online_repository' => 'tenta conectar co depósito en liña', //cpg1.4
  'show_additional_information' => 'amosar información adicional', //cpg1.4
  'no_webcvs_link' => 'non amosar ligazón do svn no web', //cpg1.4
  'stable_webcvs_link' => 'amosar ligazón do svn no web a unha póla estable', //cpg1.4
  'devel_webcvs_link' => 'amosar ligazón do svn no web a unha póla en desenvolvemento', //cpg1.4
  'submit' => 'aplicar trocos / actualizar', //cpg1.4
  'reset_to_defaults' => 'restaurar ós valores por defecto', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File view_log.php  //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('VIEWLOG_PHP')) $lang_viewlog_php = array(
  'delete_all' => 'Borrar Todos Os Rexistros (Logs)', //cpg1.4
  'delete_this' => 'Borrar Este Rexistro (Log)', //cpg1.4
  'view_logs' => 'Ver Rexistros (Logs)', //cpg1.4
  'no_logs' => 'Non se crearon rexistros (logs).', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File xp_publish.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('XP_PUBLISH_PHP')) {

$lang_xp_publish_client = <<<EOT
<h1>Cliente do Asistente de Publicación Web do XP</h1><p>Este módulo permite usar asistente de publicación web do <b>Windows XP</b> co Coppermine.</p><p>O código está baseado nun artigo publicado por
EOT;

$lang_xp_publish_required = <<<EOT
<h2>Requisitos</h2><ul><li>O Windows XP para ter o asistente.</li><li>Unha instalación do Coppermine funcionando no que <b>a función de subida web traballe correctamente.</b></li></ul><h2>Como instalar na parte do cliente</h2><ul><li>Preme co botón dereito do rato en
EOT;

$lang_xp_publish_select = <<<EOT
Selecciona &quot;gardar destino como...&quot;. Garda o arquivo no teu disco duro. Cando gardes o arquivo, comproba que o nome de arquivo proposto é <b>cpg_###.reg</b> (o ### representa un datado numérico). Múdao a este nome se é preciso (deixando os números). Cando remate a descarga, fai dobre click no arquivo co obxecto de rexistrar o teu servidor co asistente de publicación web.</li></ul>
EOT;

$lang_xp_publish_testing = <<<EOT
<h2>Probas</h2><ul><li>No Windows Explorer, selecciona algúns arquivos e preme en <b>Publicar xxx no web</b> no panel da esquerda.</li><li>Confirma a túa selección de arquivos. Preme en <b>Seguinte</b>.</li><li>Na lista de servizos que aparece a continuación, selecciona o que queiras para a túa galería de fotos ( ten o nome da túa galería). Se o servizo non aparece, comproba que tes instalado <b>cpg_pub_wizard.reg</b> como se describiu con anterioridade.</li><li>Insire a túa información de inicio de sesión se é preciso.</li><li>Selecciona o album destino para as túas imaxes ou crea un novo.</li><li>Preme en <b>seguinte</b>. Así comezará a subida das túas imaxes.</li><li>Cando remate, comproba a túa galería para ver se se engadiron as imaxes correctamente.</li></ul>
EOT;

$lang_xp_publish_notes = <<<EOT
<h2>Notas :</h2><ul><li>Unha vez que comezou a subida, o asistente non pode amosar calquera mensaxe de erro retornada polo script de xeito que non poderás saber se a subida foi correcta ou non ata que comprobes a túa galería.</li><li>Se a subida fallase, activa o &quot;modo de Depurado (Debug mode)&quot; na páxina de administración do Coppermine, téntao con unha soa imaxe e comproba as mensaxes de erro no
EOT;

$lang_xp_publish_flood = <<<EOT
arquivo ubicado no directorio do Coppermine no teu servidor.</li><li>Co fin de evitar que a galería sexa <i>ateigada</i> de imaxes subidas a traverso do asistente, só os <b>administradores da galería</b> e os <b>usuarios que poden ter os seus propios álbums</b> poden usar esta característica.</li>
EOT;



$lang_xp_publish_php = array(
  'title' => 'Coppermine - Asistente de Publicación Web do XP', //cpg1.4
  'welcome' => 'Benvido, <b>%s</b>,', //cpg1.4
  'need_login' => 'Tes que iniciar sesión na túa galería utilizando o teu navegador web antes de poder usar este asistente.<p/><p>Cando inicies a sesión non esquezas seleccionar a opción <b>lémbrate de min</b> se está dispoñible.', //cpg1.4
  'no_alb' => 'Sentímolo, pero non hai álbum ningún ó que se che permita a subida de imaxes con este asistente.', //cpg1.4
  'upload' => 'Subir as túas imaxes a un álbum existente', //cpg1.4
  'create_new' => 'Crear un álbum novo para as túas imaxes', //cpg1.4
  'album' => 'Álbum', //cpg1.4
  'category' => 'Categoría', //cpg1.4
  'new_alb_created' => 'O teu novo álbum &quot;<b>%s</b>&quot; foi creado.', //cpg1.4
  'continue' => 'Preme &quot;Seguinte&quot; para comezar a subir as túas imaxes', //cpg1.4
  'link' => 'esta ligazón', //cpg1.4
);
}
?>
