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
  Coppermine version: 1.4.24
  $HeadURL$
  $Revision$
  $Author$
  $Date$
**********************************************/
// ------------------------------------------------------------------------- //
// $Id$
// ------------------------------------------------------------------------- //

if (!defined('IN_COPPERMINE')) { die('Not in Coppermine...');}

// info about translators and translated language
$lang_translation_info = array(
'lang_name_english' => 'Spanish',  
'lang_name_native' => 'Español',
'lang_country_code' => 'es', 
'trans_name'=> 'Daniel Villoldo (Grumpywolf), Jorge Escribens (Kemmotar)', //the name of the translator - can be a nickname
'trans_email' => 'daniel@grumpywolf.net', //translator's email address (optional)
'trans_website' => 'http://grumpywolf.net/', //translator's website (optional)
'trans_date' => '2004-03-22', //the date the translation was created / last modified
);

$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('Bytes', 'KB', 'MB');

// Day of weeks and months
$lang_day_of_week = array('Dom', 'Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sab');
$lang_month = array('Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic');

// Some common strings
$lang_yes = 'Si';
$lang_no  = 'No';
$lang_back = 'ATRAS';
$lang_continue = 'CONTINUAR';
$lang_info = 'Información';
$lang_error = 'Error';
$lang_check_uncheck_all = 'Marcar/Desmarcar todos'; //cpg1.4

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$album_date_fmt =    '%d de %B de %Y';
$lastcom_date_fmt =  '%d/%m/%y a las %H:%M';
$lastup_date_fmt = '%d de %B de %Y';
$register_date_fmt = '%d de %B de %Y';
$lasthit_date_fmt = '%d de %B de %Y a las %I:%M %p';
$comment_date_fmt =  '%d de %B de %Y a las %I:%M %p';
$log_date_fmt = '%d de %B de %Y a las %I:%M %p'; //cpg1.4

// For the word censor
$lang_bad_words = array('joder', 'carajo', 'culeador', '*puta', 'pincho', 'concha', 'Pincho', 'eyacular', 'concha*', 'dago', 'daygo', 'dego', 'pinga*', 'consolador', 'fanculo', 'Heces', 'foreskin', 'Jode\(*', 'Jode*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbac*', 'hijo de puta', 'nazis', 'negro*', 'nutsack', 'pene', 'phuck', 'poop', 'vagina', 'scrotum', 'mierda', 'prostituta', 'tetas', 'teta', 'twaty', 'wank*', 'perra', 'wop*');

$lang_meta_album_names = array(
	'random' => 'Imágenes Al azar',
	'lastup' => 'Ultimas imágenes',
	'lastalb'=> 'Últimos álbumes modificados',
	'lastcom' => 'Últimos comentarios',
	'topn' => 'Más vistas',
	'toprated' => 'Más valoradas',
	'lasthits' => 'Ultimas vistas',
	'search' => 'Resultado de la búsqueda',
	'favpics'=> 'Favoritos'
);

$lang_errors = array(
	'access_denied' => 'No tienes permisos para acceder a esta página.',
	'perm_denied' => 'No tienes permisos para realizar esta operación.',
	'param_missing' => 'Llamada a Script sin los parámetros requeridos.',
	'non_exist_ap' => '¡El álbum/fichero seleccionado no existe!',
	'quota_exceeded' => 'Cuota de disco excedida<br /><br />Tienes una cuota de disco de [quota]K, tus archivos actualmente ocupan [space]K, y añadiendo este archivo excederías la cuota.',
	'gd_file_type_err' => 'Cuando se usa la librería de imagen GD solamente están permitidos los tipos JPEG y PNG.',
	'invalid_image' => 'La imagen que has añadido está corrupta o no puede ser tratada por la librería GD.',
	'resize_failed' => 'Incapaz de crear miniatura o imagen de tamaño reducido.',
	'no_img_to_display' => 'Ninguna imagen que enseñar.',
	'non_exist_cat' => 'La categoría seleccionada no existe.',
	'orphan_cat' => 'Una categoría no tiene padre, ejecuta la utilidad de categorías para corregir el problema.',
	'directory_ro' => 'El directorio \'%s\' no tiene permisos de escritura, los archivos no pueden ser borrados.',
	'non_exist_comment' => 'El comentario seleccionado no existe.',
	'pic_in_invalid_album' => '¿¡El archivo está en un álbum que no existe (%s)!?',
	'banned' => 'Actualmente estás expulsado respecto al uso de esta web.',
	'not_with_udb' => 'Esta función está desactivada en Coppermine porque está integrada con un software de foros. Lo que fuese que estás intentando hacer no está soportado en esta configuración, o la función debe ser manejada por el software de foros.',
	'offline_title' => 'Desactivada', //cpg1.3.0
	'offline_text' => 'La galería está actualmente desactivada, por poco tiempo - ¡vuelve pronto!', //cpg1.3.0
	'ecards_empty' => 'Actualmente no hay registro de postales para mostrar. ¡Chequea que has activado guardar las postales en la configuración!', //cpg1.3.0
	'action_failed' => 'Acción no realizada.  Coppermine no es capaz de procesar tu petición.', //cpg1.3.0
	'no_zip' => 'Las librerías necesarias para procesar ficheros ZIP no están disponibles. Contacta con el administrador de este álbum.', //cpg1.3.0
	'zip_type' => 'No tienes permisos para añadir ficheros ZIP.', //cpg1.3.0
	'database_query' => 'Hubo un error al procesar la consulta', //cpg1.4
'register_globals_on' => 'The PHP setting register_globals is enabled on your server, which is a bad idea in terms of security. It\'s strongly recommended to turn it off. [<a href="http://forum.coppermine-gallery.net/index.php/topic,59569.0.html" rel="external" class="external">more</a>]',
);

$lang_bbcode_help_title = 'Ayuda de los códigos'; //cpg1.4
$lang_bbcode_help = 'Los siguientes códigos te pueden ser de utilidad: <li>[b]<b>Negrita</b>[/b]</li> <li>[i]<i>Itálica</i>[/i]</li> <li>[url=http://tusitio.com/]Texto de Web[/url]</li> <li>[email]usuario@dominio.com[/email]</li>'; //cpg1.3.0

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
	'home_title' => 'Ir a la página principal',
  	'home_lnk' => 'Página Principal',
	'alb_list_title' => 'Ir a la lista de álbumes',
	'alb_list_lnk' => 'Lista de albums',
	'my_gal_title' => 'Ir a mi galería personal',
	'my_gal_lnk' => 'Mi galería',
	'my_prof_title' => 'Ir a mi perfil de usuario', //cpg1.4
	'my_prof_lnk' => 'Mi perfil de usuario',
	'adm_mode_title' => 'Ir a modo administrador',
	'adm_mode_lnk' => 'Modo administrador',
	'usr_mode_title' => 'Ir a modo usuario',
	'usr_mode_lnk' => 'Modo usuario',
	'upload_pic_title' => 'Añadir archivo en un álbum',
	'upload_pic_lnk' => 'Añadir fichero',
	'register_title' => 'Crear un usuario',
	'register_lnk' => 'Registrarse',
  	'login_title' => 'Iniciar sesión', //cpg1.4	
	'login_lnk' => 'Ingresar',
	'logout_title' => 'Cerrar sesión', //cpg1.4
	'logout_lnk' => 'Salir',
	'lastup_title' => 'Mostrar los últimos archivos', //cpg1.4
	'lastup_lnk' => 'Últimos archivos',
  	'lastcom_title' => 'Mostrar los últimos comentarios', //cpg1.4
	'lastcom_lnk' => 'Últimos comentarios',
  	'topn_title' => 'Mostrar los mas vistos', //cpg1.4
	'topn_lnk' => 'Más vistos',
  	'toprated_title' => 'Mostrar los mas valorados', //cpg1.4
	'toprated_lnk' => 'Más valorados',
  	'search_title' => 'Buscar en la galería', //cpg1.4
	'search_lnk' => 'Buscar',
  	'fav_title' => 'Ir a mis favoritos', //cpg1.4
	'fav_lnk' => 'Mis favoritos',
	'memberlist_title' => 'Mostrar lista de miembros', //cpg1.3.0
	'memberlist_lnk' => 'Lista de miembros', //cpg1.3.0
	'faq_title' => 'Preguntas frecuentes sobre la galería de imágenes &quot;Coppermine&quot;', //cpg1.3.0
	'faq_lnk' => 'FAQ', //cpg1.3.0
);

$lang_gallery_admin_menu = array(
 	'upl_app_title' => 'Aprobar nuevos archivos', //cpg1.4
 	'upl_app_lnk' => 'Aprobar archivos',
	'admin_title' => 'Ir a la configuración', //cpg1.4
  	'admin_lnk' => 'Configuración', //cpg1.4
  	'albums_title' => 'Ir a la configuración de álbumes', //cpg1.4
	'albums_lnk' => 'Álbumes',
	'config_lnk' => 'Configuración',
  	'categories_title' => 'Ir a la configuración de categorías', //cpg1.4
	'categories_lnk' => 'Categorías',
  	'users_title' => 'Ir a la configuración de usuarios', //cpg1.4
	'users_lnk' => 'Usuarios',
  	'groups_title' => 'Ir a la configuración de grupos', //cpg1.4
	'groups_lnk' => 'Grupos',
  	'comments_title' => 'Revisar todos los comentarios', //cpg1.4
	'comments_lnk' => 'Revisar comentarios',
  	'searchnew_title' => 'Ir a añadir ficheros (Batch)', //cpg1.4
	'searchnew_lnk' => 'Añadir ficheros (Batch)',
  	'util_title' => 'Ir a las herramientas administrativas', //cpg1.4
	'util_lnk' => 'Herramientas administrativas',
  	'key_title' => 'Ir al diccionario de palabras claves', //cpg1.4
  	'key_lnk' => 'Diccionario de palabras claves', //cpg1.4
  	'ban_title' => 'Ir a los expulsar usuarios', //cpg1.4
	'ban_lnk' => 'Expulsar usuarios',
  	'db_ecard_title' => 'Revisar postales', //cpg1.4
	'db_ecard_lnk' => 'Mostrar postales', //cpg1.3.0
  	'pictures_title' => 'Ordenar mis imágenes', //cpg1.4
  	'pictures_lnk' => 'Ordenar mis imágenes', //cpg1.4
  	'documentation_lnk' => 'Documentación', //cpg1.4
  	'documentation_title' => 'Manual de Coppermine', //cpg1.4
);

$lang_user_admin_menu = array(
  	'albmgr_title' => 'Crear y ordenar mis álbumes', //cpg1.4
	'albmgr_lnk' => 'Crear / ordenar álbumes',
  	'modifyalb_title' => 'Ir a modificar mis álbumes',  //cpg1.4
	'modifyalb_lnk' => 'Modificar mis álbumes',
  	'my_prof_title' => 'Ir a mi perfil', //cpg1.4
	'my_prof_lnk' => 'Mi perfil',
);

$lang_cat_list = array(
	'category' => 'Categoría',
	'albums' => 'álbumes',
	'pictures' => 'Ficheros',
);

$lang_album_list = array(
	'album_on_page' => '%d álbumes en %d página(s)'
);

$lang_thumb_view = array(
	'date' => 'FECHA',
	//Sort by filename and title
	'name' => 'NOMBRE',
	'title' => 'TITULO',
	'sort_da' => 'Ordenado por fecha ascendente',
	'sort_dd' => 'Ordenado por fecha descendente',
	'sort_na' => 'Ordenado por nombre ascendente',
	'sort_nd' => 'Ordenado por nombre descendente',
	'sort_ta' => 'Ordenado por título ascendente',
	'sort_td' => 'Ordenado por título descendente',
  	'position' => 'POSICION', //cpg1.4
  	'sort_pa' => 'Ordenado por posición ascendente', //cpg1.4
  	'sort_pd' => 'Ordenado por posición descendente', //cpg1.4
	'download_zip' => 'Descargar como fichero Zip', //cpg1.3.0
	'pic_on_page' => '%d archivos en %d página(s)',
	'user_on_page' => '%d usuarios en %d página(s)',
  	'enter_alb_pass' => 'Ingrese la contraseña del álbum', //cpg1.4
  	'invalid_pass' => 'Contraseña equivocada', //cpg1.4
  	'pass' => 'Contraseña', //cpg1.4
  	'submit' => 'Enviar', //cpg1.4
);

$lang_img_nav_bar = array(
	'thumb_title' => 'Volver al índice del album',
	'pic_info_title' => 'Mostrar/ocultar información del fichero',
	'slideshow_title' => 'Slideshow',
	'ecard_title' => 'Enviar una postal con esta imagen',
	'ecard_disabled' => 'Envio de postales deshabilitado',
	'ecard_disabled_msg' => 'No tienes permisos para enviar postales',
	'prev_title' => 'Ver fichero anterior',
	'next_title' => 'Ver fichero siguiente',
	'pic_pos' => 'FICHERO %s/%s',
  	'report_title' => 'Reportar este archivo al administradór', //cpg1.4
  	'go_album_end' => 'Saltar al final', //cpg1.4
  	'go_album_start' => 'Volver al principio', //cpg1.4
  	'go_back_x_items' => 'retroceder %s elementos', //cpg1.4
  	'go_forward_x_items' => 'avanzar %s elementos', //cpg1.4
);

$lang_rate_pic = array(
	'rate_this_pic' => 'Valorar este archivo ',
	'no_votes' => '(No hay votos)',
	'rating' => '(valoración actual : %s / 5 con %s votos)',
	'rubbish' => 'Malo',
	'poor' => 'Regular',
	'fair' => 'Normal',
	'good' => 'Bueno',
	'excellent' => 'Excelente',
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
	CRITICAL_ERROR => 'Error crítico',
	'file' => 'Fichero: ',
	'line' => 'Línea: ',
);

$lang_display_thumbnails = array(
	'filename' => 'Fichero: ',
	'filesize' => 'Tamaño: ',
	'dimensions' => 'Dimensiones: ',
	'date_added' => 'Fecha de alta: ',
);

$lang_get_pic_data = array(
	'n_comments' => '%s comentarios',
	'n_views' => '%s veces vista',
	'n_votes' => '(%s votos)'
);

$lang_cpg_debug_output = array(
  'debug_info' => 'Información de Debug', //cpg1.3.0
  'select_all' => 'Seleccionar Todo', //cpg1.3.0
  'copy_and_paste_instructions' => 'Si vas a pedir ayuda en el foro de soporte de coppermine, copia y pega esta información de debug en tu mensaje. Asegúrate de reemplazar cualquier contraseña de la consulta con *** (asteriscos) antes de enviarlo.', //cpg1.3.0
  'phpinfo' => 'mostrar phpinfo', //cpg1.3.0
  'notices' => 'Alertas', //cpg1.4
);

$lang_language_selection = array(
  'reset_language' => 'Lenguaje por defecto', //cpg1.3.0
  'choose_language' => 'Elije tu lenguaje', //cpg1.3.0
);

$lang_theme_selection = array(
  'reset_theme' => 'Tema por defecto', //cpg1.3.0
  'choose_theme' => 'Elige tu tema (aspecto)', //cpg1.3.0
);

$lang_version_alert = array(
  'version_alert' => '¡Versión no soportada!', //cpg1.4
  'no_stable_version' => 'Estas ejecutando Coppermine %s (%s) que solo es recomendado para usuarios experimentados - esta versión no viene con ninguna garantía o suporte. ¡Úsala bajo tu propio riesgo o instala la ultima versión estable si necesitas soporte!', //cpg1.4
  'gallery_offline' => 'La galería se encuentra fuera de línea y solo será visible para ti como administrador. No te olvides de ponerla en línea después de terminar el mantenimiento.', //cpg1.4
);

$lang_create_tabs = array(
  'previous' => 'anterior', //cpg1.4
  'next' => 'siguiente', //cpg1.4
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
  'error_wakeup' => "No se pudo iniciar el plugin '%s'", //cpg1.4
  'error_install' => "No se pudo instalar el plugin '%s'", //cpg1.4
  'error_uninstall' => "No se pudo desinstalar el plugin '%s'", //cpg1.4
  'error_sleep' => "No se pudo pausar el plugin '%s'<br />", //cpg1.4
);

// ------------------------------------------------------------------------- //
// File include/smilies.inc.php
// ------------------------------------------------------------------------- //

if (defined('SMILIES_PHP')) $lang_smilies_inc_php = array(
	'Exclamation' => 'Exclamación',
	'Question' => 'Pregunta',
	'Very Happy' => 'Muy feliz',
	'Smile' => 'Sonrisa',
	'Sad' => 'Triste',
	'Surprised' => 'Sorprendido',
	'Shocked' => 'Conmocionado',
	'Confused' => 'Confundido',
	'Cool' => 'Genial',
	'Laughing' => 'Riéndose',
	'Mad' => 'Molesto',
	'Razz' => 'Razz?',
	'Embarassed' > 'Avergonzado',
	'Crying or Very sad' => 'Llorando o muy triste',
	'Evil or Very Mad' => 'Malo o muy molesto',
	'Twisted Evil' => 'Malvado retorcido',
	'Rolling Eyes' => 'Ojitos girando',
	'Wink' => 'Guiño',
	'Idea' => 'Idea',
	'Arrow' => 'Flecha',
	'Neutral' => 'Neutral',
	'Mr. Green' => 'Sr. Verde',
);

// ------------------------------------------------------------------------- //
// File addpic.php
// ------------------------------------------------------------------------- //

// void

// ------------------------------------------------------------------------- //
// File mode.php
// ------------------------------------------------------------------------- //

if (defined('MODE_PHP')) $lang_admin_php = array(
	0 => 'Saliendo del modo administrador...',
	1 => 'Entrando al modo administrador...',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
	'alb_need_name' => '¡Los álbumes deben tener un nombre!', //js-alert
	'confirm_modifs' => '¿Estás seguro de querer aplicar las modificaciones?', //js-alert
	'no_change' => '¡No se hizo ningún cambio!', //js-alert
	'new_album' => 'Nuevo álbum',
	'confirm_delete1' => '¿Estás seguro de querer borrar este álbum?', //js-alert
	'confirm_delete2' => '\n¡Todos las archivos y comentarios que contiene se perderán!', //js-alert
	'select_first' => 'Selecciona un álbum primero',
	'alb_mrg' => 'Administrador de Albums',
	'my_gallery' => '* Mi galería *',
	'no_category' => '* Sin categoría *',
	'delete' => 'Borrar',
	'new' => 'Nuevo',
	'apply_modifs' => 'Aplicar modificaciones',
	'select_category' => 'Seleccionar categoría',
);

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) $lang_banning_php = array(
  'title' => 'Expulsar usuarios', //cpg1.4
  'user_name' => 'Nombre de usuario', //cpg1.4
  'ip_address' => 'Dirección IP', //cpg1.4
  'expiry' => 'Expira (déjelo en blanco para hacerlo permanente)', //cpg1.4
  'edit_ban' => 'Guardar Cambios', //cpg1.4
  'delete_ban' => 'Borrar', //cpg1.4
  'add_new' => 'Añadir nuevo', //cpg1.4
  'add_ban' => 'Añadir', //cpg1.4
  'error_user' => 'No se puede encontrar al usuario', //cpg1.4
  'error_specify' => 'Necesita especificar un nombre de usuario o una dirección IP', //cpg1.4
  'error_ban_id' => '¡ID Invalido!', //cpg1.4
  'error_admin_ban' => '¡No se puede expulsar Ud mismo!', //cpg1.4
  'error_server_ban' => '¿Va a expulsar su propio servidor? Tsk tsk, no puede hacer eso...', //cpg1.4
  'error_ip_forbidden' => 'No puede expulsar esta IP - ¡igual no es ruteable (privada)!<br />si desea permitir la expulsión de IPs privadas, cambie esto en su <a href="admin.php">archivo de configuración</a> (solo tiene sentido si Coppermine se ejecuta en una LAN).', //cpg1.4
  'lookup_ip' => 'Buscar una IP', //cpg1.4
  'submit' => 've!', //cpg1.4
  'select_date' => 'Seleccionar una fecha', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File bridgemgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('BRIDGEMGR_PHP')) $lang_bridgemgr_php = array(
  'title' => 'Asistente de Enlaces',
  'warning' => 'Advertencia: al utilizar este asistente debe entender que la información importante es enviada usando formularios HTML. Ejecútelo solo en su computador personal (no en una cabina de Internet), y asegúrese de borrar el cache y los archivos temporales del explorador después de terminar, u otras personas podrán acceder a su información!',
  'back' => 'retroceder',
  'next' => 'siguiente',
  'start_wizard' => 'Iniciando del asistente de enlaces',
  'finish' => 'Finalizar',
  'hide_unused_fields' => 'ocultar campos del formulario no utilizados (recomendado)',
  'clear_unused_db_fields' => 'limpiar entradas en la base de datos no usadas (recomendado)',
  'custom_bridge_file' => 'nombre del archivo de enlaces (si el archivo de enlace es <i>miarchivo.inc.php</i>, introduzca <i>miarchivo</i> en este campo)',
  'no_action_needed' => 'No se requieren acciones en este paso. Solo presione \'siguiente\' para continuar.',
  'reset_to_default' => 'Restaurar predeterminados',
  'choose_bbs_app' => 'escoja la aplicación para enlazar con Coppermine',
  'support_url' => 'Ir aquí para soporte sobre la aplicación',
  'settings_path' => 'ruta usada por su aplicación BBS',
  'database_connection' => 'conexión a la base de datos',
  'database_tables' => 'tablas de la base de datos',
  'bbs_groups' => 'grupos BBS',
  'license_number' => 'Numero de Licencia',
  'license_number_explanation' => 'ingrese su numero de licencia (si aplica)',
  'db_database_name' => 'Nombre de la base de datos',
  'db_database_name_explanation' => 'Ingrese el nombre de la base de datos que su aplicación BBS usa',
  'db_hostname' => 'Servidor de Base de datos',
  'db_hostname_explanation' => 'Nombre del servidor donde su base de datos mySQL se encuentra, usualmente &quot;localhost&quot;',
  'db_username' => 'Usuario de la base de datos',
  'db_username_explanation' => 'Usuario de mySQL para usar en la conexión con su aplicación BBS',
  'db_password' => 'Contraseña de la base de datos',
  'db_password_explanation' => 'Contraseña para este usuario mySQL ',
  'full_forum_url' => 'URL del foro',
  'full_forum_url_explanation' => ' URL completa de su aplicación BBS (incluyendo http:// bit, e.g. http://www.tudominio.tld/foro)',
  'relative_path_of_forum_from_webroot' => 'Ruta relativa del foro',
  'relative_path_of_forum_from_webroot_explanation' => 'Ruta relativa de su aplicación BBS (Ejemplo: Si su  BBS se encuentra en http://www.tudominio.tld/foro/, ingrese &quot;/foro/&quot; en este campo)',
  'relative_path_to_config_file' => 'ruta relativa de su archivo de configuración de la aplicación BBS\'s',
  'relative_path_to_config_file_explanation' => 'Ruta relativa de su aplicación BBS, vista desde el directorio de Coppermine (e.g. &quot;../foro/&quot; si su  BBS esta en http://www.tudominio.tld/foro/ y Coppermine en http://www.tudominio.tld/gallery/)',
  'cookie_prefix' => 'Prefijo de la cookie',
  'cookie_prefix_explanation' => 'esto tiene que ser en nombre de la cookie de su aplicación BBS\'s',
  'table_prefix' => 'Prefijo de las tablas',
  'table_prefix_explanation' => 'Tiene que coincidir con el prefijo que escogió al configurar su BBS.',
  'user_table' => 'Tabla de Usuarios',
  'user_table_explanation' => '(usualmente el valor por defecto debería estar bien, a menos que la instalación de su aplicación no esa estándar)',
  'session_table' => 'Tabla de sesiones',
  'session_table_explanation' => '(usualmente el valor por defecto debería estar bien, a menos que la instalación de su aplicación no esa estándar)',
  'group_table' => 'Tabla de grupos',
  'group_table_explanation' => '(usualmente el valor por defecto debería estar bien, a menos que la instalación de su aplicación no esa estándar)',
  'group_relation_table' => 'Tabla de relaciones de grupos',
  'group_relation_table_explanation' => '(usualmente el valor por defecto debería estar bien, a menos que la instalación de su aplicación no esa estándar)',
  'group_mapping_table' => 'Tabla de mapeo de grupos',
  'group_mapping_table_explanation' => '(usualmente el valor por defecto debería estar bien, a menos que la instalación de su aplicación no esa estándar)',
  'use_standard_groups' => 'Usar grupos de usuarios estándar de su BBS',
  'use_standard_groups_explanation' => 'Usar grupos de usuarios estándar (incorporados) (recomendado). Esto hará que todas las configuraciones de los grupos de usuarios personalizados hechos en esta pagina sean nulos. ¡Solo deshabilita esta opción si realmente sabes lo que estas haciendo!',
  'validating_group' => 'Validación de grupos',
  'validating_group_explanation' => 'El ID del grupo en su aplicación BBS donde las cuentas de usuario que necesitan validación se encuentran (usualmente el valor por defecto debería estar bien, a menos que la instalación de su aplicación no esa estándar)',
  'guest_group' => 'Grupo invitado',
  'guest_group_explanation' => 'ID del grupo en su aplicación BBS donde los usuarios invitados (anónimos) se encuentran (usualmente el valor por defecto debería estar bien, solo edítelo si realmente sabe lo que esta haciendo)',
  'member_group' => 'Grupo de miembros',
  'member_group_explanation' => 'ID del grupo de su aplicación BBS donde las cuentas de los usuarios &quot;regulares&quot; se encuentran (usualmente el valor por defecto debería estar bien, solo edítelo si realmente sabe lo que esta haciendo)',
  'admin_group' => 'Grupo administrador',
  'admin_group_explanation' => 'ID del grupo de su aplicación BBS donde las cuentas de los administradores se encuentran (usualmente el valor por defecto debería estar bien, solo edítelo si realmente sabe lo que esta haciendo)',
  'banned_group' => 'Grupo de expulsados',
  'banned_group_explanation' => 'ID del grupo de su aplicación BBS donde las cuentas de los expulsados se encuentran (usualmente el valor por defecto debería estar bien, solo edítelo si realmente sabe lo que esta haciendo)',
  'global_moderators_group' => 'Grupo de Moderadores globales',
  'global_moderators_group_explanation' => 'ID del grupo de su aplicación BBS donde las cuentas de los moderadores globales se encuentran (usualmente el valor por defecto debería estar bien, solo edítelo si realmente sabe lo que esta haciendo)',
  'special_settings' => 'Configuraciones especificas de su BBS',
  'logout_flag' => 'versión de phpBB (indicador de cierre de sesión)',
  'logout_flag_explanation' => '¿Cual es la versión de su BBS? (para conocer como se trabaja con los cierres de sesión)',
  'use_post_based_groups' => '¿Usar grupos basados en POST?',
  'logout_flag_yes' => '¿2.0.5 o mayor?',
  'logout_flag_no' => '¿2.0.4 o menor?',
  'use_post_based_groups_explanation' => '¿Deberán ser tomados en consideración los grupos de su BBS que son definidos por su numero de &quot;POSTS&quot;? (permitir un manejo de permisos granular) o solo los grupos por defecto (mas fácil para el administrador, recomendado). Puede ser cambiado luego.',
  'use_post_based_groups_yes' => 'si',
  'use_post_based_groups_no' => 'no',
  'error_title' => 'Necesita corregir estos errores antes de continuar. Vaya a ala pantalla anterior.',
  'error_specify_bbs' => 'Necesita definir la aplicación a enlazar con la instalación de Coppermine.',
  'error_no_blank_name' => 'No puede dejar el nombre de su archivo de enlace personalizado en blanco.',
  'error_no_special_chars' => 'El archivo de enlace no puede contener ningún carácter extraño excepto guión bajo (_) y guión (-)!',
  'error_bridge_file_not_exist' => 'El archivo de enlace %s no existe en este servidor. Verifique que lo halla subido.',
  'finalize' => 'habilitar/deshabilitar la integración con BBS',
  'finalize_explanation' => 'Hasta ahora, la configuración especificada ha sido escrita en la base de datos, pero la integración con BBS no esta habilitada. Puede iniciar/detener la integración en cualquier momento. asegúrese de recordar la contraseña de administrador del Coppermine independiente, puede necesitarlo luego para hacer algunos cambios. Si algo sale mal, vaya a %s y deshabilite la integración con BBS, usando tu cuanta de administrador independiente (no enlazado)(usualmente la que se introdujo al instalar Coppermine).',
  'your_bridge_settings' => 'configuración de enlace',
  'title_enable' => 'Habilitar/deshabilitar integración con %s',
  'bridge_enable_yes' => 'habilitado',
  'bridge_enable_no' => 'deshabilitado',
  'error_must_not_be_empty' => 'no debe de estar vació',
  'error_either_be' => 'debe ser %s o %s',
  'error_folder_not_exist' => '%s no existe. Corrija el valor ingresado por %s',
  'error_cookie_not_readible' => 'Coppermine no puede leer la cookie llamada %s. Corrija el valor ingresado por %s, o vaya al panel de administración de su BBS y asegúrese que la ruta de la cookie es leíble por coppermine.',
  'error_mandatory_field_empty' => 'No puede dejar el campo %s vació - llene el valor apropiado.',
  'error_no_trailing_slash' => 'No debe haber un "slash" en el campo %s.',
  'error_trailing_slash' => 'Debe haber un "slash" en el campo %s.',
  'error_db_connect' => 'No se pudo conectar a la base de datos MySQL con la información proporcionada. Esto es lo que MySQL reporta: ',
  'error_db_name' => 'Aunque Coppermine pudo conectarse con la base de datos, no pudo encontrar la base de datos %s. asegúrese que ha especificado %s propiamente. Esto es lo que MySQL reporta:',
  'error_prefix_and_table' => '%s y ',
  'error_db_table' => 'No se pudo encontrar la tabla %s. asegúrese que ha especificado %s correctamente.',
  'recovery_title' => 'Administrador de enlace: recuperación de emergencia',
  'recovery_explanation' => 'Si ha entrado aquí para administrar la integración de su BBS con su galería Coppermine, primero debe iniciar sesión como administrador. Si no puede iniciar sesión porque el enlace no esta funcionando como se esperaba, puede deshabilitar la integración en esta página. Ingresando su usuario y contraseña no iniciara sesión, solo deshabilitara la integración con su BBS. Refiérase a la documentación para detalles.',
  'username' => 'Usuario',
  'password' => 'Contraseña',
  'disable_submit' => 'enviar',
  'recovery_success_title' => 'Autenticación exitosa',
  'recovery_success_content' => 'Ha deshabilitado exitosamente la integración con su BBS. Su instalación de Coppermine se esta ejecutando en modo independiente.',
  'recovery_success_advice_login' => 'Inicia sesión como administrador para editar su configuración de enlace y/o activar la integración con su BBS nuevamente.',
  'goto_login' => 'Ir a la pagina de Inicio de Sesión',
  'goto_bridgemgr' => 'Ir al administrador de enlaces',
  'recovery_failure_title' => 'Autenticación fallida',
  'recovery_failure_content' => 'Ha suplido las credenciales equivocadas. Deberá suplir la información de la cuenta de administrador de la versión independiente (usualmente la cuenta que suplió al instalar Coppermine).',
  'try_again' => 'inténtelo de nuevo',
  'recovery_wait_title' => 'El tiempo de espera no ha terminado',
  'recovery_wait_content' => 'Por motivos de seguridad no se permiten intentos fallidos consecutivos el intentar iniciar sesión, por lo que tendrá que esperar un poco antes de poder volver a intentar autenticarse nuevamente.',
  'wait' => 'espere',
  'create_redir_file' => 'Crear archivo de redirección (recomendado)',
  'create_redir_file_explanation' => 'Para redirigir usuarios de nuevo al Coppermine luego de que hallan cerrado sesión en su BBS, necesita que un archivo de redirección sea creado en la carpeta de su BBS. Cuando esta opción es activada, el administrado de enlaces intentara crear este archivo por Usted, o darle un código listo para copiar y pegar para crear el archivo manualmente.',
  'browse' => 'navegar',
);

// ------------------------------------------------------------------------- //
// File calendar.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('CALENDAR_PHP')) $lang_calendar_php = array(
  'title' => 'Calendario', //cpg1.4
  'close' => 'cerrar', //cpg1.4
  'clear_date' => 'limpiar fecha', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
	'miss_param' => '¡Los parámetros requeridos para la operación: \'%s\' no han sido suministrados!',
	'unknown_cat' => 'La categoría seleccionada no existe en la base da datos',
	'usergal_cat_ro' => '¡Las categorías de galerías de usuario no pueden ser borradas!',
	'manage_cat' => 'Organizador de categorías',
	'confirm_delete' => 'Estás seguro de querer BORRAR esta categoría',
	'category' => 'Categoría',
	'operations' => 'Operaciones',
	'move_into' => 'Mover hacia',
	'update_create' => 'Modificar/Crear categoría',
	'parent_cat' => 'Categoría padre',
	'cat_title' => 'Título de la categoría',
	'cat_thumb' => 'Imagen miniatura de la categoría', //cpg1.3.0
	'cat_desc' => 'Descripción de la categoría',
  	'categories_alpha_sort' => 'Ordenar categorías alfabéticamente (en lugar del orden por defecto)', //cpg1.4
  	'save_cfg' => 'Salvar configuración', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File admin.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('ADMIN_PHP')) $lang_admin_php = array(
	'title' => 'Configuración',
  	'manage_exif' => 'Manejo del mostrado de EXIF', //cpg1.4
  	'manage_plugins' => 'Manejo de plugins', //cpg1.4
  	'manage_keyword' => 'Manejo de palabras clave', //cpg1.4
	'restore_cfg' => 'Restaurar valores por defecto',
	'save_cfg' => 'Guardar la nueva configuración',
	'notes' => 'Notas',
	'info' => 'Información',
	'upd_success' => 'La configuración de Coppermine ha sido actualizada',
	'restore_success' => 'Valores por defecto de Coppermine restaurados',
	'name_a' => 'Ascendente por nombre',
	'name_d' => 'Descendente por nombre',
	'title_a' => 'Ascendente por título',
	'title_d' => 'Descendente por título',
	'date_a' => 'Ascendente por fecha',
	'date_d' => 'Descendente por fecha',
  	'pos_a' => 'Posición ascendente', //cpg1.4
  	'pos_d' => 'Posición descendente', //cpg1.4
	'th_any' => 'Máximo alto/ancho',
	'th_ht' => 'Altura',
	'th_wd' => 'Anchura',
	'label' => 'etiqueta', //cpg1.3.0
	'item' => 'gráfico', //cpg1.3.0
	'debug_everyone' => 'Para todos', //cpg1.3.0
	'debug_admin' => 'Administradores solamente', //cpg1.3.0
  	'no_logs'=> 'Desactivado', //cpg1.4
  	'log_normal'=> 'Normal', //cpg1.4
  	'log_all' => 'Todo', //cpg1.4
  	'view_logs' => 'Ver logs', //cpg1.4
  	'click_expand' => 'click en el nombre de la sección para expandir', //cpg1.4
  	'expand_all' => 'Expandir todo', //cpg1.4
	'bbs_disabled' => 'Función deshabilitada cuando se usa la integración con bb', //cpg1.4
  	'auto_resize_everyone' => 'Todos', //cpg1.4
  	'auto_resize_user' => 'Solo el usuario', //cpg1.4
  	'ascending' => 'ascendente', //cpg1.4
  	'descending' => 'descendente', //cpg1.4
        );

if (defined('ADMIN_PHP')) $lang_admin_data = array(
	'Parámetros generales',
	array('Nombre de la galería', 'gallery_name', 0, 'f=index.htm&amp;as=admin_general_name&amp;ae=admin_general_name_end'),
	array('Descripción de la galería', 'gallery_description', 0, 'f=index.htm&amp;as=admin_general_description&amp;ae=admin_general_description_end'),
	array('Correo electrónico del administrador', 'gallery_admin_email', 0, 'f=index.htm&amp;as=admin_general_email&amp;ae=admin_general_email_end'),
  	array('URL del fólder de tu galería coppermine (no \'index.php\' o similar al final)', 'ecards_more_pic_target', 0, 'f=index.htm&amp;as=admin_general_coppermine-url&amp;ae=admin_general_coppermine-url_end'), //cpg1.4
  	array('URL de tu pagina de inicio', 'home_target', 0, 'f=index.htm&amp;as=admin_general_home-url&amp;ae=admin_general_home-url_end'), //cpg1.4
	array('Permitir descargas de favoritos en formato ZIP', 'enable_zipdownload', 1, 'f=index.htm&amp;as=admin_general_zip-download&amp;ae=admin_general_zip-download_end'), //cpg1.3.0
  	array('Diferencia horaria relativa a GMT (Hora actual: ' . localised_date(-1, $comment_date_fmt) . ')','time_offset',0, 'f=index.htm&amp;as=admin_general_time-offset&amp;ae=admin_general_time-offset_end&amp;top=1'), //cpg1.4
  	array('Permitir contraseñas encriptadas (no pude ser revertido)','enable_encrypted_passwords',1, 'f=index.htm&amp;as=admin_general_encrypt_password_start&amp;ae=admin_general_encrypt_password_end&amp;top=1'), // cpg 1.4
  	array('Habilitar iconos de ayuda (la ayuda esta disponible solo en ingles)','enable_help',9, 'f=index.htm&amp;as=admin_general_help&amp;ae=admin_general_help_end'), //cpg1.4
  	array('Habilitar click sobre las palabras en la búsqueda','clickable_keyword_search',14, 'f=index.htm&amp;as=admin_general_keywords_start&amp;ae=admin_general_keywords_end'), //cpg1.4
  	array('Habilitar plugins', 'enable_plugins', 12, 'f=index.htm&amp;as=admin_general_enable-plugins&amp;ae=admin_general_enable-plugins_end'),  //cpg1.4
  	array('Permitir expulsión de IP no-ruteables (Privadas)', 'ban_private_ip', 1,  'f=index.htm&amp;as=admin_general_private-ip&amp;ae=admin_general_private-ip_end'), //cpg1.4
  	array('Interfase de búsqueda de archivos batch', 'browse_batch_add', 1, 'f=index.htm&amp;as=admin_general_browsable_batch_add&amp;ae=admin_general_browsable_batch_add_end'), //cpg1.4

	'Idioma, temas (aspecto) y juego de caracteres',
	array('Idioma', 'lang', 5, 'f=index.htm&amp;as=admin_language_language&amp;ae=admin_language_language_end'),
	array('Mostrar lista de idiomas', 'language_list', 1, 'f=index.htm&amp;as=admin_language_list&amp;ae=admin_language_list_end'), //cpg1.3.0
	array('Mostrar banderas de idiomas', 'language_flags', 8, 'f=index.htm&amp;as=admin_language_flags&amp;ae=admin_language_flags_end&amp;top=1'), //cpg1.3.0
	array('Mostrar &quot;reset&quot; en selección de idiomas', 'language_reset', 1, 'f=index.htm&amp;as=admin_language_reset&amp;ae=admin_language_reset_end&amp;top=1'), //cpg1.3.0
  	array('¿Regresar a Ingles si el archivo de lenguaje no fue encontrado?', 'language_fallback', 1, 'f=index.htm&amp;as=admin_language_fallback&amp;ae=admin_language_fallback_end'), //cpg1.4
  	array('Juego de caracteres', 'charset', 4, 'f=index.htm&amp;as=admin_language_charset&amp;ae=admin_language_charset_end'), //cpg1.4
  	//array('Mostrar anterior/siguiente en las paginas tabuladas', 'previous_next_tab', 1), //cpg1.4
	
	'Configuración de temas',
  	array('Tema (Aspecto)', 'theme', 6, 'f=index.htm&amp;as=admin_theme_theme&amp;ae=admin_theme_theme_end'),
  	array('Mostrar lista de temas (aspecto)', 'theme_list', 1, 'f=index.htm&amp;as=admin_theme_theme_list&amp;ae=admin_theme_theme_list_end'), //cpg1.4
  	array('Mostrar &quot;reset&quot; en selección de temas', 'theme_reset', 1, 'f=index.htm&amp;as=admin_theme_theme_reset&amp;ae=admin_theme_theme_reset_end'), //cpg1.3.0
  	array('Mostrar FAQ (preguntas frecuentes)', 'display_faq', 1, 'f=index.htm&amp;as=admin_theme_faq&amp;ae=admin_theme_faq_end'), //cpg1.3.0
  	array('Nombre del enlace del menú personalizado', 'custom_lnk_name', 0,'f=index.htm&amp;as=admin_theme_custom_lnk_name&amp;ae=admin_theme_custom_lnk_name_end'), //cpg1.4
  	array('URL del link del menú personalizado', 'custom_lnk_url', 0,'f=index.htm&amp;as=admin_language_custom_lnk_url&amp;ae=admin_language_custom_lnk_url_end'), //cpg1.4
	array('Mostrar ayuda sobre bbcode', 'show_bbcode_help', 1, 'f=index.htm&amp;as=admin_theme_bbcode&amp;ae=admin_theme_bbcode_end&amp;top=1'), //cpg1.3.0
  	array('Mostrar el &quot;vaniti block&quot; en temas que han sido definidos como compilados para XHTML y CSS','vanity_block',1, 'f=index.htm&amp;as=vanity_block&amp;ae=vanity_block_end'), //cpg1.4
  	array('Ruta de inserción de la cabecera personalizada', 'custom_header_path', 0, 'f=index.htm&amp;as=admin_theme_include_path_start&amp;ae=admin_theme_include_path_end'), //cpg1.4
  	array('Ruta de inserción del pie de página personalizado', 'custom_footer_path', 0, 'f=index.htm&amp;as=admin_theme_include_path_start&amp;ae=admin_theme_include_path_end'), //cpg1.4
	
	'Aspecto de la lista de álbumes',
  	array('Anchura de la tabla principal (pixels o %)', 'main_table_width', 0, 'f=index.htm&amp;as=admin_album_table-width&amp;ae=admin_album_table-width_end'),
	array('Número de niveles de categorías a mostrar', 'subcat_level', 0, 'f=index.htm&amp;as=admin_album_category-levels&amp;ae=admin_album_category-levels_end'),
  	array('Número de álbumes a mostrar', 'albums_per_page', 0, 'f=index.htm&amp;as=admin_album_number&amp;ae=admin_album_number_end'),
	array('Número de columnas en la lista de álbumes', 'album_list_cols', 0, 'f=index.htm&amp;as=admin_album_columns&amp;ae=admin_album_columns_end'),
  	array('Tamaño de las imágenes miniatura en pixels', 'alb_list_thumb_size', 0, 'f=index.htm&amp;as=admin_album_thumbnail-size&amp;ae=admin_album_thumbnail-size_end'),
  	array('Contenido de la página principal', 'main_page_layout', 0, 'f=index.htm&amp;as=admin_album_list_content&amp;ae=admin_album_list_content_end'),
	array('Mostrar imagen miniatura de álbumes de primer nivel en categorías','first_level',1, 'f=index.htm&amp;as=admin_album_first-level_thumbs&amp;ae=admin_album_first-level_thumbs_end'),
  	array('Organizar categoría alfabéticamente (en lugar del orden predefinida)','categories_alpha_sort',1, 'f=index.htm&amp;as=admin_album_list_alphasort_start&amp;ae=admin_album_list_alphasort_end'), //cpg1.4
  	array('Mostrar numero de archivos enlazados','link_pic_count',1, 'f=index.htm&amp;as=admin_album_linked_files_start&amp;ae=admin_album_linked_files_end'), //cpg1.4

	'Aspecto de la vista de miniaturas',
	array('Número de columnas en la página de imágenes miniatura', 'thumbcols', 0, 'f=index.htm&amp;as=admin_thumbnail_columns&amp;ae=admin_thumbnail_columns_end'),
	array('Número de filas en la página de imágenes miniatura', 'thumbrows', 0, 'f=index.htm&amp;as=admin_thumbnail_rows&amp;ae=admin_thumbnail_rows_end'),
	array('Máximo número de pestañas (tabs) a mostrar', 'max_tabs', 10, 'f=index.htm&amp;as=admin_thumbnail_tabs&amp;ae=admin_thumbnail_tabs_end'),
	array('Mostrar file caption (además del título) debajo de la imagen miniatura', 'caption_in_thumbview', 1, 'f=index.htm&amp;as=admin_thumbnail_display_caption&amp;ae=admin_thumbnail_display_caption_end'),
	array('Mostrar número de veces vista debajo de la imagen miniatura', 'views_in_thumbview', 1, 'f=index.htm&amp;as=admin_thumbnail_display_views&amp;ae=admin_thumbnail_display_views_end'), //cpg1.3.0
	array('Mostrar número de comentarios debajo de la imagen miniatura', 'display_comment_count', 1, 'f=index.htm&amp;as=admin_thumbnail_display_comments&amp;ae=admin_thumbnail_display_comments_end'),
	array('Mostrar nombre del usuario que añadió el archivo debajo de la imagen miniatura', 'display_uploader', 1, 'f=index.htm&amp;as=admin_thumbnail_display_uploader&amp;ae=admin_thumbnail_display_uploader_end'), //cpg1.3.0
  	//array('Mostrar el nombre de los administrador que subieron el archivo debajo del nombre', 'display_admin_uploader', 1, 'f=index.htm&amp;as=admin_thumbnail_display_admin_uploader&amp;ae=admin_thumbnail_display_admin_uploader_end'), //cpg1.4
	array('Orden por defecto de las imágenes', 'default_sort_order', 3, 'f=index.htm&amp;as=admin_thumbnail_default_sortorder&amp;ae=admin_thumbnail_default_sortorder_end'),
	array('Mínimo número de votos para que una foto aparezca el la lista de \'Más Valoradas\'', 'min_votes_for_rating', 0, 'f=index.htm&amp;as=admin_thumbnail_minimum_votes&amp;ae=admin_thumbnail_minimum_votes_end'), //cpg1.3.0
  	array('Mostrar nombre de la imagen miniatura', 'display_filename', 1, 'f=index.htm&amp;as=admin_thumbnail_display_filename&amp;ae=admin_thumbnail_display_filename_end'), //cpg1.4
	//array('Mostrar descripción del álbum', 'alb_desc_thumb', 1, 'f=index.htm&amp;as=admin_thumbnail_display_description&amp;ae=admin_thumbnail_display_description_end'), //cpg1.4

	'Vista de imágenes',
	array('Anchura de la tabla donde mostrar la imagen (pixels o %)', 'picture_table_width', 0, 'f=index.htm&amp;as=admin_image_comment_table-width&amp;ae=admin_image_comment_table-width_end'),
	array('Información del fichero visible por defecto', 'display_pic_info', 1, 'f=index.htm&amp;as=admin_image_comment_info_visible&amp;ae=admin_image_comment_info_visible_end'),
	array('Máxima longitud para la descripción de una imagen', 'max_img_desc_length', 0, 'f=index.htm&amp;as=admin_image_comment_descr_length&amp;ae=admin_image_comment_descr_length_end'),
	array('Máximo número de caracteres en una palabra', 'max_com_wlength', 0, 'f=index.htm&amp;as=admin_image_comment_chars_per_word&amp;ae=admin_image_comment_chars_per_word_end'),
	array('Mostrar tira de película', 'display_film_strip', 1, 'f=index.htm&amp;as=admin_image_comment_filmstrip_toggle&amp;ae=admin_image_comment_filmstrip_toggle_end'),
	array('Número de objetos en tira de película', 'max_film_strip_items', 0, 'f=index.htm&amp;as=admin_image_comment_filmstrip_number&amp;ae=admin_image_comment_filmstrip_number_end'),
	array('Intervalo de tiempo entre imágenes en el Slideshow en milisegundos (1 segundo = 1000 milisegundos)', 'slideshow_interval', 0, 'f=index.htm&amp;as=admin_image_comment_slideshow_interval&amp;ae=admin_image_comment_slideshow_interval_end'), //cpg1.3.0
  	array('Mostrar nombre de archivo debajo de la imagen miniatura de la tira de película', 'display_film_strip_filename', 1, 'f=index.htm&amp;as=admin_image_comment_display_film_strip_filename&amp;ae=admin_image_comment_display_film_strip_filename_end'), //cpg1.4

  	'Configuración de comentarios', //cpg1.4
	array('Filtrar palabras malsonantes en los comentarios', 'filter_bad_words', 1, 'f=index.htm&amp;as=admin_image_comment_bad_words&amp;ae=admin_image_comment_bad_words_end'),
	array('Permitir emoticons en los comentarios', 'enable_smilies', 1, 'f=index.htm&amp;as=admin_image_comment_smilies&amp;ae=admin_image_comment_smilies_end'),
	array('Permitir varios comentarios consecutivos del mismo usuario en una imagen (deshabilitar protección contra flood)', 'disable_comment_flood_protect', 1, 'f=index.htm&amp;as=admin_image_comment_flood&amp;ae=admin_image_comment_flood_end'), //cpg1.3.0
	array('Máximo número de líneas en un comentario', 'max_com_lines', 0, 'f=index.htm&amp;as=admin_image_comment_lines&amp;ae=admin_image_comment_lines_end'),
	array('Máxima longitud de un comentario', 'max_com_size', 0, 'f=index.htm&amp;as=admin_image_comment_length&amp;ae=admin_image_comment_length_end'),
	array('Notificar al administrador por email de los comentarios', 'email_comment_notification', 1, 'f=index.htm&amp;as=admin_image_comment_admin_notify&amp;ae=admin_image_comment_admin_notify_end'), //cpg1.3.0
  	array('Ordenar los comentarios', 'comments_sort_descending', 17, 'f=index.htm&amp;as=admin_comment_sort_start&amp;ae=admin_comment_sort_end'), //cpg1.4
  	array('Prefijo para autores anónimos', 'comments_anon_pfx', 0, 'f=index.htm&amp;as=comments_anon_pfx&amp;ae=comments_anon_pfx_end'), //cpg1.4

	'Configuración de archivos e imágenes miniatura',
	array('Calidad para los ficheros JPEG', 'jpeg_qual', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_jpeg_quality&amp;ae=admin_picture_thumbnail_jpeg_quality_end'),
	array('Máxima anchura o altura de las imágenes miniatura <b>*</b>', 'thumb_width', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max-dimension&amp;ae=admin_picture_thumbnail_max-dimension_end'),
	array('Usar dimensión ( anchura, altura o máximo para las imágenes miniatura )<b>**</b>', 'thumb_use', 7, 'f=index.htm&amp;as=admin_picture_thumbnail_use-dimension&amp;ae=admin_picture_thumbnail_use-dimension_end'),
	array('Crear imágenes de tamaño intermedio','make_intermediate',1, 'f=index.htm&amp;as=admin_picture_thumbnail_intermediate_toggle&amp;ae=admin_picture_thumbnail_intermediate_toggle_end'),
	array('Máxima anchura o altura de las imágenes de tamaño intermedio <b>*</b>', 'picture_width', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_intermediate_dimension&amp;ae=admin_picture_thumbnail_intermediate_dimension_end'),
	array('Máximo tamaño de los ficheros añadidos por los usuarios (KB)', 'max_upl_size', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max_upload_size&amp;ae=admin_picture_thumbnail_max_upload_size_end'),
	array('Máxima anchura o altura de las imágenes/videos añadidos (pixels)', 'max_upl_width_height', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max_upload_dimension&amp;ae=admin_picture_thumbnail_max_upload_dimension_end'),
	array('Escalar automáticamente imágenes que son mas grandes que el máximo alto o ancho', 'auto_resize', 16, 'f=index.htm&amp;as=admin_picture_thumbnail_auto-resize&amp;ae=admin_picture_thumbnail_auto-resize_end'), //cpg1.4
	
	'Configuración avanzada de archivos e imágenes miniatura', //cpg1.3.0
	array('Mostrar icono de álbum privado a usuarios no registrados','show_private',1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_private_icon_show&amp;ae=admin_picture_thumb_advanced_private_icon_show_end'), //cpg1.3.0
	array('Caracteres prohibidos en los nombres de archivos', 'forbiden_fname_char',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_filename_forbidden_chars&amp;ae=admin_picture_thumb_advanced_filename_forbidden_chars_end'), //cpg1.3.0
	//array('Extensiones admitidas al añadir archivos', 'allowed_file_extensions',0, 'f=index.htm&amp;as=&amp;ae=_end'), //cpg1.3.0
 	array('Tipos de imágenes admitidas', 'allowed_img_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_pic_extensions&amp;ae=admin_picture_thumb_advanced_pic_extensions_end'), //cpg1.3.0
	array('Tipos de archivos de video admitidos', 'allowed_mov_types',0, 'f=index.htm&amp;as=admin_thumbs_advanced_movie&amp;ae=admin_thumbs_advanced_movie_end'), //cpg1.3.0
	array('Tipos de archivos de sonido admitidos', 'allowed_snd_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_audio_extensions&amp;ae=admin_picture_thumb_advanced_audio_extensions_end'), //cpg1.3.0
	array('Tipos de documentos admitidos', 'allowed_doc_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_doc_extensions&amp;ae=admin_picture_thumb_advanced_doc_extensions_end'), //cpg1.3.0
	array('Método para el reescalado de imágenes','thumb_method',2, 'f=index.htm&amp;as=admin_picture_thumb_advanced_resize_method&amp;ae=admin_picture_thumb_advanced_resize_method_end'), //cpg1.3.0
	array('Ruta a la utilidad \'convert\' de ImageMagick (por ejemplo /usr/bin/X11/)', 'impath', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_im_path&amp;ae=admin_picture_thumb_advanced_im_path_end'), //cpg1.3.0
	//array('Tipos de archivo admitidos (solo válidos con ImageMagick)', 'allowed_img_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_allowed_imagetypes&amp;ae=admin_picture_thumb_advanced_allowed_imagetypes_end'), //cpg1.3.0
	array('Comandos de línea para ImageMagick', 'im_options', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_im_commandline&amp;ae=admin_picture_thumb_advanced_im_commandline_end'), //cpg1.3.0
	array('Leer datos EXIF en los archivos JPEG', 'read_exif_data', 1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_exif&amp;ae=admin_picture_thumb_advanced_exif_end'), //cpg1.3.0
	array('Leer datos IPTC en los archivos JPEG', 'read_iptc_data', 1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_iptc&amp;ae=admin_picture_thumb_advanced_iptc_end'), //cpg1.3.0
	array('Directorio base de los álbumes <a href="#notice1" class="clickable_option">*</a>', 'fullpath', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_albums_dir&amp;ae=admin_picture_thumb_advanced_albums_dir_end'), //cpg1.3.0
	array('Directorio para los archivos de los usuarios <a href="#notice1" class="clickable_option">*</a>', 'userpics', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_userpics_dir&amp;ae=admin_picture_thumb_advanced_userpics_dir_end'), //cpg1.3.0
	array('Prefijo para las imágenes intermedias <a href="#notice1" class="clickable_option">*</a>', 'normal_pfx', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_intermediate_prefix&amp;ae=admin_picture_thumb_advanced_intermediate_prefix_end'), //cpg1.3.0
	array('Prefijo para las imágenes miniatura <a href="#notice1" class="clickable_option">*</a>', 'thumb_pfx', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_thumbs_prefix&amp;ae=admin_picture_thumb_advanced_thumbs_prefix_end'), //cpg1.3.0
	array('Modo por defecto para los directorios', 'default_dir_mode', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_chmod_folder&amp;ae=admin_picture_thumb_advanced_chmod_folder_end'), //cpg1.3.0
	array('Modo por defecto para los archivos', 'default_file_mode', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_chmod_files&amp;ae=admin_picture_thumb_advanced_chmod_files_end'), //cpg1.3.0
  	array('Autoinicio de Peliculas', 'media_autostart',1, 'f=index.htm&amp;as=admin_movie_autoplay&amp;ae=admin_movie_autoplay_end'), //cpg1.4
	array('Los usuarios pueden tener álbumes privados (Nota: si cambias de \'si\' a \'no\' todos los álbumes privados que existan se convertirán en públicos)', 'allow_private_albums', 1), //cpg1.3.0

	'Configuración de usuarios',
	array('Permitir el registro de nuevos usuarios', 'allow_user_registration', 1, 'f=index.htm&amp;as=admin_allow_registration&amp;ae=admin_allow_registration_end'),
	array('Registro de usuarios requiere verificación de email', 'reg_requires_valid_email', 1, 'f=index.htm&amp;as=admin_registration_verify&amp;ae=admin_registration_verify_end'),
	array('Notificar por email al administrador del registro de nuevos usuarios', 'reg_notify_admin_email', 1, 'f=index.htm&amp;as=admin_registration_notify&amp;ae=admin_registration_notify_end'), //cpg1.3.0
  	array('Permitir a dos usuarios tener el mismo email', 'allow_duplicate_emails_addr', 1, 'f=index.htm&amp;as=admin_allow_duplicate_emails_addr&amp;ae=admin_allow_duplicate_emails_addr_end'),
	array('Notificar al administrador de archivos añadidos esperando autorización', 'upl_notify_admin_email', 1, 'f=index.htm&amp;as=admin_approval_notify&amp;ae=admin_approval_notify_end'), //cpg1.3.0
	array('Permitir a los usuarios validados ver la lista de miembros', 'allow_memberlist', 1, 'f=index.htm&amp;as=admin_user_memberlist&amp;ae=admin_user_memberlist_end'), //cpg1.3.0
  	array('Permitir accesos de usuarios no logueados (invitados o anónimos)', 'allow_unlogged_access', 1, 'f=index.htm&amp;as=admin_allow_unlogged_access&amp;ae=admin_allow_unlogged_access_end'), //cpg1.4
  	array('Activación del registro por el administrador', 'admin_activation', 1, 'f=index.htm&amp;as=admin_activation&amp;ae=admin_activation_end'),  //cpg1.4
  	array('Permitir a los usuarios cambiar su correo en su perfil', 'allow_email_change', 1, 'f=index.htm&amp;as=admin_user_allow_email_change&amp;ae=admin_user_allow_email_change_end'), //cpg1.4
  	array('Permitir a los usuarios tener control sobre sus archivos en galerias publicas', 'users_can_edit_pics', 1, 'f=index.htm&amp;as=admin_user_editpics_public_start&amp;ae=admin_user_editpics_public_end'), //cpg1.4
  	array('Numero de intentos fallidos de autentificación antes de proceder a la expulsión (para evitar ataques de fuerza bruta)', 'login_threshold', 0, 'f=index.htm&amp;as=admin_user_login_start&amp;ae=admin_user_login_end'), //cpg1.4
  	array('Duración de la expulsión luego de los intentos fallidos', 'login_expiry', 0, 'f=index.htm&amp;as=admin_user_login_start&amp;ae=admin_user_login_end'), //cpg1.4
  	array('Activar reporte al administrador', 'report_post', 1, 'f=index.htm&amp;as=admin_user_enable_report&amp;ae=admin_user_enable_report_end'),  //cpg1.4

// custom profile fields,  //cpg1.4
  	'Campos personalizados para perfiles de usuarios (déjelo en blanco si no se usa).
  	Utilice el Perfil 6 para entradas largas, como biografías', //cpg1.4
  	array('Nombre del Perfil 1', 'user_profile1_name', 0, 'f=index.htm&amp;as=admin_custom&amp;ae=admin_custom_end'), //cpg1.4
  	array('Nombre del Perfil 2', 'user_profile2_name', 0), //cpg1.4
  	array('Nombre del Perfil 3', 'user_profile3_name', 0), //cpg1.4
  	array('Nombre del Perfil 4', 'user_profile4_name', 0), //cpg1.4
  	array('Nombre del Perfil 5', 'user_profile5_name', 0), //cpg1.4
  	array('Nombre del Perfil 6', 'user_profile6_name', 0), //cpg1.4

	'Campos extra para descripción de imágenes (dejar en blanco si no se usan)',
	array('Nombre del campo 1', 'user_field1_name', 0, 'f=index.htm&amp;as=admin_custom_image&amp;ae=admin_custom_image_end'),
	array('Nombre del campo 2', 'user_field2_name', 0),
	array('Nombre del campo 3', 'user_field3_name', 0),
	array('Nombre del campo 4', 'user_field4_name', 0),
  	
	'Configuración de cookies',
	array('Nombre de la cookie usada por el script (cuando se use junto con foros, tener cuidado de que sea diferente de la cookie de los foros)', 'cookie_name', 0, 'f=index.htm&amp;as=admin_cookie_name&amp;ae=admin_cookie_name_end'),
	array('Ruta de la cookie usada por el script', 'cookie_path', 0, 'f=index.htm&amp;as=admin_cookie_path&amp;ae=admin_cookie_path_end'),

  	'configuración de correo (usualmente no requiere cambios, deje los campos en blanco si no esta seguro)', //cpg1.4
  	array('Servidor SMTP (si se deja en blanco se usara sendmail)', 'smtp_host', 0, 'f=index.htm&amp;as=admin_email&amp;ae=admin_email_end'), //cpg1.4
  	array('Usuario SMTP', 'smtp_username', 0), //cpg1.4
  	array('Contraseña SMTP', 'smtp_password', 0), //cpg1.4

  	'Registro de Sucesos (Log) y estadísticas', //cpg1.4
  	array('Modo de Registro de sucesos <a href="#notice3" class="clickable_option">***</a>', 'log_mode', 11, 'f=index.htm&amp;as=admin_logging_log_mode&amp;ae=admin_logging_log_mode_end'), //cpg1.4
  	array('Registrar los sucesos de postales', 'log_ecards', 1, 'f=index.htm&amp;as=admin_general_log_ecards&amp;ae=admin_general_log_ecards_end'), //cpg1.4
  	array('Mantener estadísticas detalladas de los votos','vote_details',1, 'f=index.htm&amp;as=admin_logging_votedetails&amp;ae=admin_logging_votedetails_end'), //cpg1.4
  	array('Mantener estadísticas detalladas de los hits','hit_details',1, 'f=index.htm&amp;as=admin_logging_hitdetails&amp;ae=admin_logging_hitdetails_end'), //cpg1.4
	
	'Configuraciones de Mantenimiento', //cpg1.4
	array('Activar modo debug', 'debug_mode', 9, 'f=index.htm&amp;as=debug_mode&amp;ae=debug_mode_end'), //cpg1.3.0
	array('Mostrar avisos en modo debug', 'debug_notice', 1, 'f=index.htm&amp;as=admin_misc_debug_notices&amp;ae=admin_misc_debug_notices_end'), //cpg1.3.0
	array('Galería desactivada', 'offline', 1, 'f=index.htm&amp;as=admin_general_offline&amp;ae=admin_general_offline_end'), //cpg1.3.0
	'<br /><div align="left"><a name="notice1"></a>(*) Estos valores no deben ser cambiados si ya existen archivos en la base de datos.<br />
	<a name="notice2"></a>(**) Si se cambian estos valores, solamente afectará a los archivos que se añadan desde este momento, por lo que es recomendable no cambiarlos si ya hay imágenes en la galería. Puedes, sin embargo, hacer los cambios sobre imágenes existentes con la utilidad &quot;<a href="util.php">Cambiar tamaños</a>&quot; del menú de administración.<br />
	<a name="notice3"></a>(***) Todos los archivos de registro de sucesos son escritos en ingles.</div><br />', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File db_ecard.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('DB_ECARD_PHP')) $lang_db_ecard_php = array(
  'title' => 'Postales enviadas', //cpg1.3.0
  'ecard_sender' => 'Remitente', //cpg1.3.0
  'ecard_recipient' => 'Destinatario', //cpg1.3.0
  'ecard_date' => 'Fecha', //cpg1.3.0
  'ecard_display' => 'Mostrar postal', //cpg1.3.0
  'ecard_name' => 'Nombre', //cpg1.3.0
  'ecard_email' => 'Email', //cpg1.3.0
  'ecard_ip' => 'IP #', //cpg1.3.0
  'ecard_ascending' => 'ascendente', //cpg1.3.0
  'ecard_descending' => 'descendente', //cpg1.3.0
  'ecard_sorted' => 'Orden', //cpg1.3.0
  'ecard_by_date' => 'por fecha', //cpg1.3.0
  'ecard_by_sender_name' => 'por nombre del remitente', //cpg1.3.0
  'ecard_by_sender_email' => 'por email del remitente', //cpg1.3.0
  'ecard_by_sender_ip' => 'por dirección IP del remitente', //cpg1.3.0
  'ecard_by_recipient_name' => 'por nombre del destinatario', //cpg1.3.0
  'ecard_by_recipient_email' => 'por email del destinatario', //cpg1.3.0
  'ecard_number' => 'mostrando registros %s al %s de %s', //cpg1.3.0
  'ecard_goto_page' => 'ir a la página', //cpg1.3.0
  'ecard_records_per_page' => 'Registros por página', //cpg1.3.0
  'check_all' => 'Marcar todos', //cpg1.3.0
  'uncheck_all' => 'Desmarcar todos', //cpg1.3.0
  'ecards_delete_selected' => 'Borrar postales seleccionadas', //cpg1.3.0
  'ecards_delete_confirm' => '¿Estás seguro de querer borrar estos registros? ¡Marca la checkbox!', //cpg1.3.0
  'ecards_delete_sure' => 'Estoy seguro', //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
	'empty_name_or_com' => 'Debes introducir tu nombre y un comentario',
	'com_added' => 'Tu comentario ha sido añadido',
	'alb_need_title' => '¡Debes de introducir un título para el álbum!',
	'no_udp_needed' => 'No se requiere ningún cambio',
	'alb_updated' => 'El álbum ha sido actualizado',
	'unknown_album' => 'El álbum seleccionado no existe o no tienes permisos para añadir fotos en este álbum',
	'no_pic_uploaded' => '¡Ningún fichero fue añadido!<br /><br />Si habías seleccionado una foto para añadir, comprueba que el servidor admite subir ficheros...',
	'err_mkdir' => '¡Fallo al crear el directorio %s!',
	'dest_dir_ro' => '¡El directorio destino %s no tiene permisos de escritura!',
	'err_move' => '¡Imposible mover %s a %s !',
	'err_fsize_too_large' => 'El fichero que quieres añadir es demasiado grande (el máximo permitido es de %s x %s)',
	'err_imgsize_too_large' => 'El fichero que quieres añadir es demasiado grande (el máximo permitido es de %s KB)',
	'err_invalid_img' => 'El fichero que quieres añadir no es una imagen válida',
	'allowed_img_types' => 'Puedes insertar solamente %s imágenes.',
	'err_insert_pic' => 'El fichero \'%s\' no puede ser dado de alta en el álbum ',
	'upload_success' => 'El fichero ha sido insertado correctamente<br /><br />Será visible tras la aprobación de los administradores.',
	'notify_admin_email_subject' => '%s - Notificación de fichero añadido', //cpg1.3.0
	'notify_admin_email_body' => 'Una imagen ha sido añadida por %s que necesita tu aprobación. Visita %s', //cpg1.3.0
	'info' => 'Información',
	'com_added' => 'Comentario añadido',
	'alb_updated' => 'Álbum actualizado',
	'err_comment_empty' => '¡El comentario está vació!',
	'err_invalid_fext' => 'Solamente se admiten ficheros con las siguientes extensiones : <br /><br />%s.',
	'no_flood' => 'Perdona pero eres el autor/a del último comentario introducido para este archivo<br /><br />Puedes editar el comentario que has puesto si es que quieres modificarlo',
	'redirect_msg' => 'Estás siendo redirigido.<br /><br /><br />Pulsa \'CONTINUAR\' si la página no se refresca automáticamente',
	'upl_success' => 'El fichero se ha añadido correctamente',
	'email_comment_subject' => 'Comentario añadido en la Galería Coppermine', //cpg1.3.0
	'email_comment_body' => 'Alguien ha añadido un comentario en tu galería. Puedes verlo en', //cpg1.3.0
  	'album_not_selected' => 'Álbum no seleccionado', //cpg1.4
  	'com_author_error' => 'Un usuario registrado esta usando este nombre, inicie sesión o utilice otro', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
	'caption' => 'Título',
	'fs_pic' => 'imagen tamaño completo',
	'del_success' => 'borrado correctamente',
	'ns_pic' => 'imagen tamaño normal',
	'err_del' => 'no puede ser borrado',
	'thumb_pic' => 'Imagen miniatura',
	'comment' => 'comentario',
	'im_in_alb' => 'imágenes en el álbum',
	'alb_del_success' => 'Álbum \'%s\' borrado',
	'alb_mgr' => 'Organizador de álbumes',
	'err_invalid_data' => 'Datos inválidos recibidos en \'%s\'',
	'create_alb' => 'Creando el álbum \'%s\'',
	'update_alb' => 'Actualizando el álbum \'%s\' con el título \'%s\' y el índice \'%s\'',
	'del_pic' => 'Borrar fichero',
	'del_alb' => 'Borrar álbum',
	'del_user' => 'Borrar usuario',
	'err_unknown_user' => '¡El usuario seleccionado no existe!',
  	'err_empty_groups' => 'No hay tabla de grupos, ¡o la tabla de grupos esta vacía!', //cpg1.4
	'comment_deleted' => 'El comentario ha sido borrado',
  	'npic' => 'Imagen', //cpg1.4
  	'pic_mgr' => 'Administrador de Imágenes', //cpg1.4
  	'update_pic' => 'Actualizando imagen \'%s\' con el archivo \'%s\' y el índice \'%s\'', //cpg1.4
  	'username' => 'Nombre de usuario', //cpg1.4
  	'anonymized_comments' => 'Los comentario(s) %s son ahora anónimos', //cpg1.4
  	'anonymized_uploads' => 'Los archivo(s) publico(s) %s son ahora anónimos', //cpg1.4
  	'deleted_comments' => '%s comentario(s) borrado', //cpg1.4
  	'deleted_uploads' => '%s archivo(s) publico(s) borrado', //cpg1.4
  	'user_deleted' => 'usuario %s borrado', //cpg1.4
  	'activate_user' => 'Activar usuario', //cpg1.4
  	'user_already_active' => 'La cuenta se encuentra activa', //cpg1.4
  	'activated' => 'Activado', //cpg1.4
  	'deactivate_user' => 'Desactivar usuario', //cpg1.4
  	'user_already_inactive' => 'La cuanta se encuentra inactiva', //cpg1.4
  	'deactivated' => 'Desactivado', //cpg1.4
  	'reset_password' => 'Limpiar contraseña(s)', //cpg1.4
  	'password_reset' => 'Contraseña cambiada a %s', //cpg1.4
  	'change_group' => 'Cambiar grupo primario', //cpg1.4
  	'change_group_to_group' => 'Cambiando de %s a %s', //cpg1.4
  	'add_group' => 'Añadir grupo secundario', //cpg1.4
  	'add_group_to_group' => 'Añadiendo el usuario %s al grupo %s. Ahora es miembro del grupo primario %s y del grupo(s) secundario(s) %s.', //cpg1.4
  	'status' => 'Estado', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File displayecard.php
// ------------------------------------------------------------------------- //

if (defined('DISPLAYECARD_PHP')) {

$lang_displayecard_php = array(
  	'invalid_data' => 'La información de la postal que esta tratando de acceder ha sido corrompida por su cliente de correo. Verifique que el link este completo.', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File displayimage.php
// ------------------------------------------------------------------------- //

if (defined('DISPLAYIMAGE_PHP')){

$lang_display_image_php = array(
	'confirm_del' => '¿Estás seguro de querer BORRAR este fichero? \\nLos comentarios serán también borrados.',
	'del_pic' => 'BORRAR ESTE FICHERO',
	'size' => '%s x %s pixels',
	'views' => '%s veces',
	'slideshow' => 'Slideshow',
	'stop_slideshow' => 'DETENER SLIDESHOW',
	'view_fs' => 'Pulsa aquí para ver la imagen a tamaño completo',
	'edit_pic' => 'Editar la descripción', //cpg1.3.0
	'crop_pic' => 'Recortar y Rotar', //cpg1.3.0
  	'set_player' => 'Cambiar reproductor',
);

$lang_picinfo = array(
	'title' =>'Información del fichero',
	'Filename' => 'Nombre del fichero',
	'Album name' => 'Nombre del álbum',
	'Rating' => 'Valoración (%s votos)',
	'Keywords' => 'Palabras clave',
	'File Size' => 'Tamaño del fichero',
  	'Date Added' => 'Fecha de creación', //cpg1.4
	'Dimensions' => 'Dimensiones',
	'Displayed' => 'Se ha visto',
  	'URL' => 'URL', //cpg1.4
  	'Make' => 'Hecho', //cpg1.4
  	'Model' => 'Modelo', //cpg1.4
  	'DateTime' => 'Fecha y Hora', //cpg1.4
  	'DateTimeOriginal' => 'Fecha de la captura', //cpg1.4
  	'ISOSpeedRatings'=>'ISO', //cpg1.4
  	'MaxApertureValue' => 'Máxima Apertura', //cpg1.4
	'Focal length' => 'Longitud del foco',
	'Comment' => 'Comentario',
	'addFav'=>'Añadir a Favoritos',
	'addFavPhrase'=>'Favoritos',
	'remFav'=>'Quitar de Favoritos',
	'iptcTitle'=>'IPTC - Título', //cpg1.3.0
	'iptcCopyright'=>'IPTC - Copyright', //cpg1.3.0
	'iptcKeywords'=>'IPTC - Palabras clave', //cpg1.3.0
	'iptcCategory'=>'IPTC - Categoría', //cpg1.3.0
	'iptcSubCategories'=>'IPTC - Sub-Categorías', //cpg1.3.0
  	'ColorSpace' => 'Espacio del color', //cpg1.4
  	'ExposureProgram' => 'Programa de exposición', //cpg1.4
  	'Flash' => 'Flash', //cpg1.4
  	'MeteringMode' => 'Modo métrico', //cpg1.4
  	'ExposureTime' => 'Tiempo de exposición', //cpg1.4
  	'ExposureBiasValue' => 'Bias de exposición', //cpg1.4
  	'ImageDescription' => ' Descripción de la imagen', //cpg1.4
  	'Orientation' => 'Orientación', //cpg1.4
  	'xResolution' => 'Resolución en X', //cpg1.4
  	'yResolution' => 'Resolución en Y', //cpg1.4
  	'ResolutionUnit' => 'Unidades de Resolución', //cpg1.4
  	'Software' => 'Software', //cpg1.4
  	'YCbCrPositioning' => 'YCbCrPositioning', //cpg1.4
  	'ExifOffset' => 'Exif Offset', //cpg1.4
  	'IFD1Offset' => 'IFD1 Offset', //cpg1.4
  	'FNumber' => 'FNumber', //cpg1.4
  	'ExifVersion' => 'versión de Exif ', //cpg1.4
  	'DateTimeOriginal' => 'Fecha y hora original', //cpg1.4
  	'DateTimedigitized' => 'Fecha y hora digitalizado', //cpg1.4
  	'ComponentsConfiguration' => 'Configuración de los Componentes', //cpg1.4
  	'CompressedBitsPerPixel' => 'Compresión de los Bits Por Pixel', //cpg1.4
  	'LightSource' => 'Fuente de luz', //cpg1.4
  	'ISOSetting' => 'Configuración ISO', //cpg1.4
  	'ColorMode' => 'Modo de color', //cpg1.4
  	'Quality' => 'Calidad', //cpg1.4
  	'ImageSharpening' => 'Sharpening de la imagen', //cpg1.4
  	'FocusMode' => 'Modo de enfocamiento', //cpg1.4
  	'FlashSetting' => 'Configuración del Flash', //cpg1.4
  	'ISOSelection' => 'Selección ISO', //cpg1.4
  	'ImageAdjustment' => 'Ajuste de la Imagen', //cpg1.4
  	'Adapter' => 'Adaptador', //cpg1.4
  	'ManualFocusDistance' => 'Distancia de enfoque manual', //cpg1.4
  	'DigitalZoom' => 'Acercamiento digital', //cpg1.4
  	'AFFocusPosition' => 'posición del enfoque AF', //cpg1.4
  	'Saturation' => 'Saturación', //cpg1.4
  	'NoiseReduction' => 'Reducción de Ruido', //cpg1.4
  	'FlashPixVersion' => 'versión de Flash Pix', //cpg1.4
  	'ExifImageWidth' => 'Ancho de imagen por Exif', //cpg1.4
  	'ExifImageHeight' => 'Alto de imagen por Exif', //cpg1.4
  	'ExifInteroperabilityOffset' => 'Desviación de Interoperabilidad de Exif', //cpg1.4
  	'FileSource' => 'Fuente del Archivo', //cpg1.4
  	'SceneType' => 'Tipo de escena', //cpg1.4
  	'CustomerRender' => 'Renderizado personalizado', //cpg1.4
  	'ExposureMode' => ' Modo de Exposición', //cpg1.4
  	'WhiteBalance' => 'Balance Blanco', //cpg1.4
  	'DigitalZoomRatio' => 'Ratio de acercamiento digital', //cpg1.4
  	'SceneCaptureMode' => 'Modo de captura de escenas', //cpg1.4
  	'GainControl' => 'Control de ganancia', //cpg1.4
  	'Contrast' => 'Contraste', //cpg1.4
  	'Saturation' => 'Saturación', //cpg1.4
  	'Sharpness' => 'Sharpness', //cpg1.4
  	'ManageExifDisplay' => 'Administrar despliegue de Exif', //cpg1.4
  	'submit' => 'Enviar', //cpg1.4
  	'success' => 'información actualizada exitosamente.', //cpg1.4
  	'details' => 'Detalles', //cpg1.4
);

$lang_display_comments = array(
	'OK' => 'OK',
	'edit_title' => 'Editar el comentario',
	'confirm_delete' => '¿Estás seguro de querer borrar el comentario?',
	'add_your_comment' => 'Añadir un comentario',
	'name'=>'Nombre',
	'comment'=>'Comentario',
	'your_name' => 'Anónimo',
  	'report_comment_title' => 'Reportar este comentario al administrador', //cpg1.4
);

$lang_fullsize_popup = array(
	'click_to_close' => 'Pulsa en la imagen para cerrar esta ventana',
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
	'title' => 'Enviar una postal',
	'invalid_email' => '<b>Atención</b> : ¡dirección email incorrecta!',
	'ecard_title' => 'Una postal de %s para ti',
	'error_not_image' => 'Solo se pueden crear postales con imágenes.', //cpg1.3.0
	'view_ecard' => 'Si la imagen no se ve correctamente, pulsa en este enlace',
  	'view_ecard_plaintext' => 'Para ver la postal, copie y pegue esta URL en la barra de direcciones de su navegador:', //cpg1.4
	'view_more_pics' => '¡Pulsa aquí para ver más imágenes!',
	'send_success' => 'La postal ha sido enviada',
	'send_failed' => 'Disculpa, pero el servidor no puede enviar la postal...',
	'from' => 'De',
	'your_name' => 'Tu nombre',
	'your_email' => 'Tu dirección de email',
	'to' => 'A',
	'rcpt_name' => 'Nombre del destinatario',
	'rcpt_email' => 'Dirección email del destinatario',
	'greetings' => 'Título del mensaje',
	'message' => 'Mensaje',
  	'ecards_footer' => 'Enviado por %s desde la IP %s a las %s (Hora de la galería)', //cpg1.4
  	'preview' => 'Vista preliminar de la postal', //cpg1.4
  	'preview_button' => 'Vista preliminar', //cpg1.4
  	'submit_button' => 'Enviar postal', //cpg1.4
  	'preview_view_ecard' => 'Este es el enlace alternativo a la postal una vez sea generada. No funciona en vista preliminar.', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File report_file.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('REPORT_FILE_PHP') || defined('DISPLAYREPORT_PHP')) $lang_report_php =array(
  	'title' => 'Reportar al administrador', //cpg1.4
  	'invalid_email' => '<b>Advertencia</b> : Dirección de correo electrónico invalida!', //cpg1.4
  	'report_subject' => 'Un reporte de %s en la galería %s', //cpg1.4
  	'view_report' => 'Enlace alterno si el reporte no se ve correctamente', //cpg1.4
	'view_report_plaintext' => 'Para ver el reporte, copie y pegue este URL en la barra de direcciones de su navegador:', //cpg1.4
  	'view_more_pics' => 'galería', //cpg1.4
  	'send_success' => 'Su reporte fue enviado con éxito', //cpg1.4
  	'send_failed' => 'Lo sentimos pero el servidor no puede enviar su reporte...', //cpg1.4
  	'from' => 'De', //cpg1.4
  	'your_name' => 'Su nombre', //cpg1.4
  	'your_email' => 'Su dirección de correo', //cpg1.4
  	'to' => 'Para', //cpg1.4
  	'administrator' => 'Administrador/Moderador', //cpg1.4
  	'subject' => 'Asunto', //cpg1.4
  	'comment_field_name' => 'Reportando un comentario por "%s"', //cpg1.4
  	'reason' => 'Razón', //cpg1.4
  	'message' => 'Mensaje', //cpg1.4
  	'report_footer' => 'Enviado por %s desde la IP %s a las %s (Hora de la galería)', //cpg1.4
  	'obscene' => 'obsceno', //cpg1.4
  	'offensive' => 'ofensivo', //cpg1.4
  	'misplaced' => 'fuera de lugar/mal ubicado', //cpg1.4
  	'missing' => 'perdido', //cpg1.4
  	'issue' => 'error/no se puede ver', //cpg1.4
  	'other' => 'otro', //cpg1.4
  	'refers_to' => 'El archivo de reporte se refiere a', //cpg1.4
  	'reasons_list_heading' => 'razón(es) para el reporte:', //cpg1.4
  	'no_reason_given' => 'no se dieron razón(es)', //cpg1.4
  	'go_comment' => 'Ir al comentario', //cpg1.4
  	'view_comment' => 'Ver reporte completo incluyendo comentario', //cpg1.4
  	'type_file' => 'archivo', //cpg1.4
  	'type_comment' => 'comentario', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
	'pic_info' => 'Información',
	'album' => 'Album',
	'title' => 'Título',
  	'filename' => 'Nombre de archivo', //cpg1.4
	'desc' => 'Descripción',
	'keywords' => 'Palabras clave',
  	'new_keyword' => 'Nueva palabra clave', //cpg1.4
  	'new_keywords' => 'Nueva palabra clave encontrada', //cpg1.4
  	'existing_keyword' => 'Palabra clave existente', //cpg1.4
	'pic_info_str' => '%sx%s - %sKB - %s veces vista - %s votos',
	'approve' => 'Aprobar el fichero',
	'postpone_app' => 'Posponer la aprobación',
	'del_pic' => 'Borrar el fichero',
  	'del_all' => 'Borrar TODOS los archivos', //cpg1.4
	'read_exif' => 'Leer los datos EXIF de nuevo', //cpg1.3.0
	'reset_view_count' => 'Poner a cero el contador de veces que se ha visto',
  	'reset_all_view_count' => 'Poner a cero TODOS los contadores de veces que se ha visto', //cpg1.4
	'reset_votes' => 'Poner a cero los votos',
  	'reset_all_votes' => 'Poner a cero TODOS los votos', //cpg1.4
	'del_comm' => 'Borrar comentarios',
  	'del_all_comm' => 'Borrar TODOS los comentarios', //cpg1.4
	'upl_approval' => 'Aprobar ficheros añadidos',
	'edit_pics' => 'Editar imágenes',
	'see_next' => 'Ver los ficheros siguientes',
	'see_prev' => 'Ver los ficheros anteriores',
	'n_pic' => '%s fichero/s',
	'n_of_pic_to_disp' => 'Número de ficheros a mostrar',
	'apply' => 'Validar los cambios',
	'crop_title' => 'Editor de Imágenes Coppermine', //cpg1.3.0
	'preview' => 'Previsualizar', //cpg1.3.0
	'save' => 'Guardar imagen', //cpg1.3.0
	'save_thumb' =>'Guardar como imagen miniatura', //cpg1.3.0
  	'gallery_icon' => 'Establecer como mi Icono', //cpg1.4
	'sel_on_img' =>'¡La selección tiene que estar enteramente en la imagen!', //js-alert //cpg1.3.0
  	'album_properties' =>'Propiedades del Album', //cpg1.4
  	'parent_category' =>'categoría Padre', //cpg1.4
  	'thumbnail_view' =>'Vista en miniatura', //cpg1.4
  	'select_unselect' =>'seleccionar/deseleccionar todos', //cpg1.4
  	'file_exists' => "El archivo de destino '%s' ya existe.", //cpg1.4
  	'rename_failed' => "No se puede renombrar '%s' a '%s'.", //cpg1.4
  	'src_file_missing' => "Archivo original '%s' no se encuentra.", // cpg 1.4
  	'mime_conv' => "No se pude convertir el archivo de '%s' a '%s'",//cpg1.4
	'forb_ext' => 'Extensión de archivo prohibida.',//cpg1.4
);

// ------------------------------------------------------------------------- //
// File faq.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('FAQ_PHP')) $lang_faq_php = array(
  'faq' => 'Preguntas Frecuentes', //cpg1.3.0
  'toc' => 'índice de contenidos', //cpg1.3.0
  'question' => 'Pregunta: ', //cpg1.3.0
  'answer' => 'Respuesta: ', //cpg1.3.0
);

if (defined('FAQ_PHP')) $lang_faq_data = array(
  'Cuestiones Generales', //cpg1.3.0
  array('¿Porqué debería registrarme?', 'El registro puede o no ser requerido por el administrador. El registro facilita características adicionales tales como poder añadir ficheros, tener una lista de favoritos, puntuar imágenes, añadir comentarios, etc.', 'allow_user_registration', '0'), //cpg1.3.0
  array('¿Cómo puedo registrarme?', 'Pulsa en &quot;Registrarse&quot; y rellena todos los campos requeridos (y los opcionales si quieres también).<br />Si el administrador tiene activada la validación de email ,tras completar y enviar los datos recibirás un mensaje en la dirección que has indicado durante el registro, en el cual se explica cómo activar tu cuenta (solo pulsando un enlace). Hasta que no actives la cuenta no podrás validarte como usuario registrado.', 'allow_user_registration', '1'), //cpg1.3.0
  array('¿Cómo puedo hacer login (validarme)?', 'Pulsa en &quot;Login&quot;, rellena tu nombre de usuario y contraseña, y marca &quot;Recordarme&quot; con ello consigues estar validado la próxima vez que nos visites.<br /><b>IMPORTANTE: Las cookies deben estar activadas en el navegador y la cookie de este sitio no debe ser borrada si quieres que funcione la opción &quot;Recordarme&quot;.</b>', 'offline', 0), //cpg1.3.0
  array('¿Porqué no puedo hacer login?', '¿Te has registrado y pulsado en el enlace del email de confirmación que se te envió?. Esto debería haber activado tu cuenta. Si no es así, contacta con el administrador del sistema.', 'offline', 0), //cpg1.3.0
  array('¿Qué pasa si olvido mi contraseña?', 'Si la web tiene opción de &quot;He olvidado mi contraseña&quot; tendrás que acceder a la recuperación de la misma. Si no, deberás contactar con el administrador para que te cree una nueva contraseña.', 'offline', 0), //cpg1.3.0
  //array('¿Qué pasa si he cambiado mi dirección de email?', 'Simplemente haz login y cambia tu dirección de email desde &quot;Mi Perfil&quot;', 'offline', 0), //cpg1.3.0
  array('¿Cómo puedo guardar una imagen en &quot;Mis Favoritos&quot;?', 'Pulsa primero en la imagen y luego el icono de &quot;mostrar información de fichero&quot; (<img src="images/info.gif" width="16" height="16" border="0" alt="Mostrar información de fichero" />); baja hasta donde ha aparecido dicha información y pulsa en &quot;Añadir a Favoritos&quot;.<br />El administrador podría tener activado &quot;mostrar información de fichero&quot; por defecto.<br />IMPORTANTE: Las cookies deben estar activadas en el navegador y la cookie de esta web no debe ser borrada.', 'offline', 0), //cpg1.3.0
  array('¿Cómo puedo valorar una imagen?', 'Pulsa en la miniatura de la imagen, mira debajo de ella y elige la puntuación.', 'offline', 0), //cpg1.3.0
  array('¿Cómo puedo enviar un comentario a una imagen?', 'Pulsa en la miniatura de la imagen y mira debajo de ella. Ahí puedes insertar tu comentario.', 'offline', 0), //cpg1.3.0
  array('¿Cómo puedo añadir una imagen?', 'Pulsa en &quot;Añadir fichero&quot; y elige el album en el que quieres añadir la imagen, pulsa &quot;Browse&quot; y elige la imagen que quieres de tu disco duro, pulsando el botón &quot;Abrir&quot; (añade título y descripción si quieres), pulsando finalmente en &quot;Añadir nuevo fichero&quot;', 'allow_private_albums', 0), //cpg1.3.0
  array('¿En dónde puedo añadir una imagen?', 'Puedes añadir una imagen a uno de tus álbumes de &quot;Mi galería&quot;. El Administrador puede haber permitido el añadir imágenes en uno o más de los álbumes de la Galería principal.', 'allow_private_albums', 0), //cpg1.3.0
  array('¿Qué tipos y tamaños de imágenes puedo añadir?', 'Los tipos (jpg,gif,..etc.) y tamaños los decide el administrador.', 'offline', 0), //cpg1.3.0
  array('¿Cómo puedo crear, renombrar o borrar un album en &quot;Mi galería&quot;?', 'Debes entrar en &quot;Modo administrador&quot;<br />Pulsa en &quot;Crear/ordenar albums&quot; y luego en &quot;Nuevo&quot;. Cambia &quot;Nuevo álbum&quot; por el nombre que quieras.<br />Puedes también renombrar cualquiera de los álbumes de tu galería.<br />Pulsa &quot;Aplicar modificaciones&quot;.', 'allow_private_albums', 0), //cpg1.3.0
  array('¿Cómo puedo modificar y restringir a otros usuarios el ver mi álbumes?', 'Debes entrar en &quot;Modo administrador&quot;<br />Pulsa en &quot;Modificar mis albums&quot;. En la barra de &quot;Modificar album&quot;, elige el album que quieres modificar.<br />Desde aquí puedes cambiar el nombre, descripción, miniatura de la imagen, y restringir quién puede ver o poner comentarios en el album.<br />Pulsa &quot;Modificar album&quot; para guardar los cambios.', 'allow_private_albums', 0), //cpg1.3.0
  array('?Cómo puedo ver galerías de otros usuarios?', 'Vete a la &quot;Lista de álbums&quot; y elige &quot;Galerías de usuario&quot;.', 'allow_private_albums', 0), //cpg1.3.0
  array('¿Qué son las cookies?', 'Las cookies son unos pequeños textos que se envían desde la web y se almacenan en tu ordenador.<br />Normalmente las cookies sirven para "recordar" al usuario cuando éste vuelva de nuevo, y para otros varios usos.', 'offline', 0), //cpg1.3.0
  array('¿Dónde puedo conseguir este programa para ponerlo en mi web?', 'Coppermine es una Galería Multimedia gratuita, publicada bajo licencia GNU GPL. Está repleta de características y ha sido adaptada a distintas plataformas y sistemas de contenido. Visita la <a href="http://coppermine-gallery.net/">Web de Coppermine</a> para saber más y poder descargar el programa.', 'offline', 0), //cpg1.3.0

  'Navegando por Coppermine', //cpg1.3.0
  array('¿Qué es la &quot;Lista de álbums&quot;?', 'Desde aquí puedes ver la galería completa, con un enlace a cada categoría. Las miniaturas de imágenes pueden ser enlaces directos a las categorías.', 'offline', 0), //cpg1.3.0
  array('¿Qué es &quot;Mi galería&quot;?', 'Esta característica permite al usuario crear su propia galería y añadir, borrar o modificar álbumes así como añadir nuevos ficheros en ellos.', 'allow_private_albums', 0), //cpg1.3.0
  array('¿Cuáles son las diferencias entre &quot;Modo adminsitrador&quot; y &quot;Modo usuario&quot;?', 'Cuando se está en modo administrador, el usuario puede modificar su galería (así como otras si se lo ha permitido el administrador).', 'allow_private_albums', 0), //cpg1.3.0
  array('¿Qué es &quot;Añadir fichero&quot;?', 'Esta característica permite al usuario añadir una imagen (tamaño y tipos definidos por el administrador) en una galería seleccionada por el usuario o bien por el administrator.', 'allow_private_albums', 0), //cpg1.3.0
  array('¿Qué es &quot;últimos archivos&quot;?', 'Muestra los últimos ficheros / imágenes añadidos a la galería.', 'offline', 0), //cpg1.3.0
  array('¿Qué es &quot;últimos comentarios&quot;?', 'Muestra los últimos comentarios añadidos por los usuarios, junto con las imágenes comentadas.', 'offline', 0), //cpg1.3.0
  array('¿Qué es &quot;Más vistos&quot;?', 'Muestra las imágenes más vistas por todos los usuarios (registrados y visitantes).', 'offline', 0), //cpg1.3.0
  array('¿Qué es &quot;Más valorados&quot;?', 'Muestra las imágenes mejor valoradas por los usuarios, junto con la media de puntuación (por ejemplo: cinco usuarios han dado un <img src="images/rating3.gif" width="65" height="14" border="0" alt="" />: la imagen tendrá una puntuación media de <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> ; si cinco usuarios han puntuado de 1 a 5 (1,2,3,4,5) la media resultante será <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> .)<br />Las puntuaciones van desde <img src="images/rating5.gif" width="65" height="14" border="0" alt="mejor" /> (mejor) hasta <img src="images/rating0.gif" width="65" height="14" border="0" alt="peor" /> (peor).', 'offline', 0), //cpg1.3.0
  array('¿Qué es &quot;Mis favoritos&quot;?', 'Esta característica permite a un usuario guardar una imagen favorita en la cookie que es enviada a su ordenador.', 'offline', 0), //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// File forgot_passwd.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) $lang_forgot_passwd_php = array(
  	'forgot_passwd' => 'Recuperación de contraseña', //cpg1.3.0
  	'err_already_logged_in' => '¡Ya estás validado como usuario!', //cpg1.3.0
  	'enter_email' => 'Introduce dirección email', //cpg1.4
  	'submit' => 'buscar contraseña', //cpg1.3.0
  	'illegal_session' => 'Sesión de Olvide mi contraseña invalida o ha expirado.', //cpg1.4
  	'failed_sending_email' => '¡El email con la contraseña no ha podido ser enviado!', //cpg1.3.0
  	'email_sent' => 'Un email con su Usuario y su nueva contraseña ha sido enviado a %s', //cpg1.4
  	'verify_email_sent' => 'Se ha enviado un email a %s. Por favor verifique su email para completar el proceso.', //cpg1.4
  	'err_unk_user' => '¡El usuario seleccionado no existe!',
  	'account_verify_subject' => '%s - Recuperación de Contraseña', //cpg1.4
  	'account_verify_body' => 'Ha solicitado la recuperación de contraseña . SI desea proseguir con tener una nueva contraseña enviada a Ud, haga click en el siguiente enlace:

%s', //cpg1.4
  	'passwd_reset_subject' => '%s - Su nueva contraseña', //cpg1.4
  	'passwd_reset_body' => 'aquí esta las contraseñas que solicito:
Usuario: %s
Contraseña: %s
Pulsa %s para validarte.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
	'group_name' => 'Nombre del grupo',
  	'permissions' => 'Permisos', //cpg1.4
  	'public_albums' => 'Añadir ficheros a álbumes públicos', //cpg1.4
  	'personal_gallery' => 'galería Personal', //cpg1.4
  	'upload_method' => 'Método para subir archivos', //cpg1.4
	'disk_quota' => 'Cuota de disco',
  	'rating' => 'Valoración', //cpg1.4
  	'ecards' => 'Postales', //cpg1.4
  	'comments' => 'Comentarios', //cpg1.4
  	'allowed' => 'Permitido', //cpg1.4
  	'approval' => 'Aprobación', //cpg1.4
  	'boxes_number' => 'No. de cajas', //cpg1.4
  	'variable' => 'variable', //cpg1.4
  	'fixed' => 'fijo', //cpg1.4
	'apply' => 'Validar los cambios',
	'create_new_group' => 'Crear nuevo grupo',
	'del_groups' => 'Borrar el/los grupo(s) seleccionados',
	'confirm_del' => '¡Atención, cuando borras un grupo, los usuarios que pertenecen a ese grupo serán transferidos al grupo \'Registered\'!\n\n¿Deseas continuar?',
	'title' => 'Configurar grupos de usuarios',
	'num_file_upload'=>'Número máximo/exacto de cajas de upload', //cpg1.3.0
	'num_URI_upload'=>'Número máximo/exacto de cajas de URI upload', //cpg1.3.0
  	'reset_to_default' => 'Regresar al nombre predeterminado (%s) - ¡recomendado!', //cpg1.4
  	'error_group_empty' => '¡Tabla del grupo vacia!<br /><br />Grupos predeterminados creados, porfavor recargue esta página', //cpg1.4
  	'explain_greyed_out_title' => '¿Porque esta fila esta deshabilitada?', //cpg1.4
  	'explain_guests_greyed_out_text' => 'No puedes cambiar la configuración de este grupo porque habilitaste la opción &quot; Permitir acceso a usuarios sin iniciar sesión (invitados o anónimos)&quot; a &quot;No&quot; en la pagina de configuración. Todos los invitados (miembros del grupo %s) no pueden hacer nada excepto iniciar sesión; por lo que las configuraciones de grupo no se les aplica.', //cpg1.4
  	'explain_banned_greyed_out_text' => 'No puede cambiar la configuración del grupo %s porque los miembros no pueden hacer nada.', //cpg1.4
  	'group_assigned_album' => 'album(s) asignados', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
	'welcome' => '¡Bienvenido!'
);

$lang_album_admin_menu = array(
	'confirm_delete' => '¿Estás seguro de querer BORRAR este album ? \\nTodas las fotos y comentarios serán también borrados.',
	'delete' => 'Borrar',
	'modify' => 'Modificar',
	'edit_pics' => 'Editar imágenes',
);

$lang_list_categories = array(
	'home' => 'Inicio',
	'stat1' => '<b>[pictures]</b> ficheros en <b>[albums]</b> albums y <b>[cat]</b> categorías con <b>[comments]</b> comentarios, vistas <b>[views]</b> veces',
	'stat2' => '<b>[pictures]</b> ficheros en <b>[albums]</b> albums, vistas <b>[views]</b> veces',
	'xx_s_gallery' => 'Galería de %s',
	'stat3' => '<b>[pictures]</b> ficheros en <b>[albums]</b> albums con <b>[comments]</b> comentarios, vistas <b>[views]</b> veces'
);

$lang_list_users = array(
	'user_list' => 'Lista de usuarios',
	'no_user_gal' => 'No existen usuarios con permisos para tener albums',
	'n_albums' => '%s album(s)',
	'n_pics' => '%s fichero(s)'
);

$lang_list_albums = array(
	'n_pictures' => '%s ficheros',
	'last_added' => ', último añadido el %s',
  	'n_link_pictures' => '%s ficheros enlazados', //cpg1.4
  	'total_pictures' => '%s ficheros en total', //cpg1.4
);

}

// ------------------------------------------------------------------------- //
// File keywordmgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('KEYWORDMGR_PHP')) $lang_keywordmgr_php = array(
  'title' => 'Manejar Palabras claves', //cpg1.4
  'edit' => 'editar', //cpg1.4
  'delete' => 'eliminar', //cpg1.4
  'search' => 'buscar', //cpg1.4
  'keyword_test_search' => 'buscar %s en una nueva ventana', //cpg1.4
  'keyword_del' => 'eliminar la palabra %s', //cpg1.4
  'confirm_delete' => '¿esta seguro que desea eliminar la palabra clave %s de toda la galería?', //cpg1.4  // js-alert
  'change_keyword' => 'cambiar palabra', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
	'login' => 'Iniciar Sesión',
	'enter_login_pswd' => 'introduzca nombre de usuario y contraseña',
	'username' => 'Nombre de usuario',
	'password' => 'Contraseña',
	'remember_me' => 'Recordarme',
	'welcome' => 'Bienvenido %s ...',
	'err_login' => '*** Inicio de sesión incorrecto. Inténtelo de nuevo ***',
	'err_already_logged_in' => '¡Ya estaba validado en el sistema!',
	'forgot_password_link' => 'He olvidado mi contraseña', //cpg1.3.0
  	'cookie_warning' => 'Advertencia su navegador no acepta cookies', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
	'logout' => 'Salir',
	'bye' => 'Hasta luego, %s ...',
	'err_not_loged_in' => '¡No está validado en el sistema!',
);

// ------------------------------------------------------------------------- //
// File minibrowser.php  //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('MINIBROWSER_PHP')) $lang_minibrowser_php = array(
  	'close' => 'cerrar', //cpg1.4
  	'submit' => 'OK', //cpg1.4
  	'up' => 'subir un nivel', //cpg1.4
  	'current_path' => 'ruta actual', //cpg1.4
  	'select_directory' => 'porfavor seleccione un directorio', //cpg1.4
  	'click_to_close' => 'Click sobre la imagen para cerrar esta ventana',
);

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
	'upd_alb_n' => 'Modificar álbum %s',
	'general_settings' => 'Configuración general',
	'alb_title' => 'Título del álbum',
	'alb_cat' => 'Categoría del álbum',
	'alb_desc' => 'Descripción del álbum',
  	'alb_keyword' => 'Palabra Clave del álbum', //cpg1.4
	'alb_thumb' => 'Imagen miniatura del álbum',
	'alb_perm' => 'Permisos para este álbum',
	'can_view' => 'Este álbum puede ser visto por',
	'can_upload' => 'Los visitantes pueden añadir fotos',
	'can_post_comments' => 'Los visitantes pueden añadir comentarios',
	'can_rate' => 'Los visitantes pueden valorar las fotos',
	'user_gal' => 'Galería de usuario',
	'no_cat' => '* Sin categoría *',
	'alb_empty' => 'El álbum está vacío',
	'last_uploaded' => 'Ultima imagen añadida',
	'public_alb' => 'Todos (álbum público)',
	'me_only' => 'Solamente yo',
	'owner_only' => 'Solamente el dueño del álbum (%s)',
	'groupp_only' => 'Miembros del grupo \'%s\'',
	'err_no_alb_to_modify' => 'No puedes modificar ningún álbum en la base de datos.',
	'update' => 'Modificar álbum',
  	'reset_album' => 'Resetear álbum', //cpg1.4
  	'reset_views' => 'Regresar los contadores de veces vista a &quot;0&quot; en %s', //cpg1.4
  	'reset_rating' => 'Resetear los votos en todos los archivos en %s', //cpg1.4
  	'delete_comments' => 'Borrar todos los comentarios hechos en %s', //cpg1.4
  	'delete_files' => 'Irrebersible %s borrar todos los archivos en %s', //cpg1.4
  	'views' => 'Veces vista', //cpg1.4
  	'votes' => 'votos', //cpg1.4
  	'comments' => 'comentarios', //cpg1.4
  	'files' => 'archivos', //cpg1.4
  	'submit_reset' => 'Grabar cambios', //cpg1.4
  	'reset_views_confirm' => 'Estoy seguro', //cpg1.4
	'notice1' => '(*) dependiendo de la configuración de %sgrupos%s', //cpg1.3.0 (do not translate %s!)
  	'alb_password' => 'Contraseña del álbum', //cpg1.4
  	'alb_password_hint' => 'Recordatorio de contraseña del álbum', //cpg1.4
  	'edit_files' =>'Editar archivos', //cpg1.4
  	'parent_category' =>'categoría padre', //cpg1.4
  	'thumbnail_view' =>'Vista en miniatura', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File phpinfo.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('PHPINFO_PHP')) $lang_phpinfo_php = array(
  	'php_info' => 'PHP info', //cpg1.3.0
  	'explanation' => 'Esto es lo que la función <a href="http://www.php.net/phpinfo">phpinfo()</a> muestra, utilizando Coppermine (cortando el texto en la esquina derecha).', //cpg1.3.0
  	'no_link' => 'Que otros puedan ver tu información de PHP es un riesgo de seguridad, por eso esta pagina solo es visible si has iniciado sesión como administrador. No puedes publicar un link a esta pagina para los demás, ellos tendrán un acceso denegado.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File picmgr.php //cpg1.4
// ------------------------------------------------------------------------- //
if (defined('PICMGR_PHP')) $lang_picmgr_php = array(
  	'pic_mgr' => 'Administrador de imágenes', //cpg1.4
  	'select_album' => 'Seleccione album', //cpg1.4
  	'delete' => 'Eliminar', //cpg1.4
  	'confirm_delete1' => '¿Esta seguro que desea eliminar esta imagen?', //cpg1.4
  	'confirm_delete2' => '\nLa imagen será permanentemente borrada.', //cpg1.4
  	'apply_modifs' => 'Aplicar modificaciones', //cpg1.4
  	'confirm_modifs' => 'Confirmar modificaciones', //cpg1.4
  	'pic_need_name' => '¡Las imágenes necesitan tener un titulo !', //cpg1.4
  	'no_change' => '¡No ha hecho ningún cambio !', //cpg1.4
  	'no_album' => '* No album *', //cpg1.4
  	'explanation_header' => 'El Ordenamiento personalizado que puede especificar en esta pagina solo será tomado en cuenta si ', //cpg1.4
  	'explanation1' => 'el administrador ha marcado la opción "Orden predeterminado de archivos" en la configuración a "Descendente" or "Ascendente" (configuración global para todos los usuarios que no han escogido otra opción)', //cpg1.4
  	'explanation2' => 'el usuario ha escogido "Descendente" or "Ascendente" en la pagina de vistas en miniatura (por configuración de usuario)', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File pluginmgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('PLUGINMGR_PHP')){

$lang_pluginmgr_php = array(
  	'confirm_uninstall' => 'Esta seguro que desea DESINSTALAR este plugin', //cpg1.4
  	'confirm_delete' => 'Esta seguro que desea ELIMINAR este plugin', //cpg1.4
  	'pmgr' => 'Administrador de Plugins', //cpg1.4
  	'name' => 'Nombre', //cpg1.4
  	'author' => 'Autor', //cpg1.4
  	'desc' => 'Descripción', //cpg1.4
  	'vers' => 'v', //cpg1.4
  	'i_plugins' => 'Plugins instalados', //cpg1.4
  	'n_plugins' => 'Plugins No instalados', //cpg1.4
  	'none_installed' => 'Ninguno instalado', //cpg1.4
  	'operation' => 'Operación', //cpg1.4
  	'not_plugin_package' => 'El archivo subido no es un paquete de plugins.', //cpg1.4
  	'copy_error' => 'Hubo un error al copiar al fólder de plugins.', //cpg1.4
  	'upload' => 'Subir', //cpg1.4
  	'configure_plugin' => 'Configurar plugin', //cpg1.4
  	'cleanup_plugin' => 'Limpiar plugin', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
	'already_rated' => 'Perdona pero ya has votado anteriormente a este fichero',
	'rate_ok' => 'Tu voto ha sido contabilizado',
	'forbidden' => 'No puedes votar a tus propias imágenes.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
A pesar de que los administradores de {SITE_NAME} intentarán eliminar o editar cualquier material desagradable tan pronto como puedan, resulta imposible revisar todos los envíos que se realizan. Por lo tanto debes tener en cuenta que todos los envíos hechos hacia esta web expresan el punto de vista y opiniones de sus autores y no los de los administradores o webmasters (excepto los añadidos por ellos mismos).<br />
<br />
Usted acuerda no añadir ningún material abusivo, obsceno, vulgar, escandaloso, odioso, amenazador, de orientación sexual, o ningún otro que pueda violar cualquier ley aplicable. Usted está de acuerdo con que el webmaster, el administrador y los asesores de { SITE_NAME } tienen el derecho de quitar o de corregir cualquier contenido en cualquier momento si lo consideran necesario. Como usuario, accede a que cualquier información añadida será almacenada en una base de datos. Así mismo, esta información no será divulgada a terceros sin su consentimiento. El webmaster y el administrador no se pueden hacer responsables de ningún intento de destrucción de la base de datos que pueda conducir a la pérdida de la misma.<br />
<br />
Este sitio utiliza cookies para almacenar la información en su ordenador. Estas cookies sirven para mejorar la navegación en este sitio. La dirección de email se utiliza solamente para confirmar sus detalles y contraseña del registro.<br />
<br />
Pulsando 'estoy de acuerdo' expresas tu conformidad con estas condiciones.
EOT;

$lang_register_php = array(
	'page_title' => 'Registro de nuevo usuario',
	'term_cond' => 'Términos y condiciones',
	'i_agree' => 'Estoy de acuerdo',
	'submit' => 'Enviar solicitud de registro',
	'err_user_exists' => 'El nombre de usuario elegido ya existe, por favor elige otro diferente',
	'err_password_mismatch' => 'Las dos contraseñas no son iguales, por favor vuelve a introducirlas',
	'err_uname_short' => 'El nombre de usuario debe ser de 2 caracteres de longitud como mínimo',
	'err_password_short' => 'La contraseña debe ser de 2 caracteres de longitud como mínimo',
	'err_uname_pass_diff' => 'El nombre de usuario y la contraseña deben ser diferentes',
	'err_invalid_email' => 'La dirección de email no es válida',
	'err_duplicate_email' => 'Otro usuario se ha registrado anteriormente con la dirección de email suministrada',
	'enter_info' => 'Introduce la información de registro',
	'required_info' => 'Información requerida',
	'optional_info' => 'Información opcional',
	'username' => 'Nombre de usuario',
	'password' => 'Contraseña',
	'password_again' => 'Reescribir contraseña',
	'email' => 'Email',
	'location' => 'Localidad',
	'interests' => 'Intereses',
	'website' => 'Página web',
	'occupation' => 'Ocupación',
	'error' => 'ERROR',
	'confirm_email_subject' => '%s - Confirmación de registro',
	'information' => 'Información',
	'failed_sending_email' => '¡El email de confirmación de registro no ha podido ser enviado!',
	'thank_you' => 'Gracias por registrarte.<br /><br />Hemos enviado un email con información sobre la activación de tu cuenta a la dirección de email que nos has facilitado.',
	'acct_created' => 'Tu cuenta de usuario ha sido creada y ahora puedes acceder al sistema con tu nombre de usuario y contraseña',
	'acct_active' => 'Tu cuenta de usuario está ya activa y ahora puedes acceder al sistema con tu nombre de usuario y contraseña',
	'acct_already_act' => '¡Tu cuenta ya estaba activa!',
	'acct_act_failed' => '¡Esta cuenta no puede ser activada!',
	'err_unk_user' => '¡El usuario seleccionado no existe!',
	'x_s_profile' => 'Perfil de %s',
	'group' => 'Grupo',
	'reg_date' => 'Fecha de alta',
	'disk_usage' => 'Uso de disco',
	'change_pass' => 'Cambiar contraseña',
	'current_pass' => 'Contraseña actual',
	'new_pass' => 'Nueva contraseña',
	'new_pass_again' => 'Reescribir nueva contraseña',
	'err_curr_pass' => 'La contraseña actual es incorrecta',
	'apply_modif' => 'Guardar los cambios',
	'change_pass' => 'Cambiar mi contraseña',
	'update_success' => 'Tu perfil ha sido actualizado',
	'pass_chg_success' => 'Tu contraseña ha sido cambiada',
	'pass_chg_error' => 'Tu contraseña no ha sido cambiada',
	'notify_admin_email_subject' => '%s - Notificación de registro', //cpg1.3.0
  	'last_uploads' => 'Ultimo archivo subido.<br />Click para ver todos los archivos subidos por', //cpg1.4
  	'last_comments' => 'Ultimo comentario.<br />Click para ver todos los comentarios hechos por', //cpg1.4
	'notify_admin_email_body' => 'Un nuevo usuario se ha registrado en tu galería con el nombre "%s"', //cpg1.3.0
  	'pic_count' => 'Archivos subidos', //cpg1.4
  	'notify_admin_request_email_subject' => '%s - Petición de registro', //cpg1.4
  	'thank_you_admin_activation' => 'Gracias.<br /><br />Su pedido para la activación de su cuenta ha sido enviado al administrador. Usted recibirá un email si es aprobado.', //cpg1.4
  	'acct_active_admin_activation' => 'La cuenta esta ahora activa y un email ha sido enviado al usuario.', //cpg1.4
  	'notify_user_email_subject' => '%s - Notificación de activación', //cpg1.4
);

$lang_register_confirm_email = <<<EOT
Gracias por registrarte en {SITE_NAME}, Tu nombre de usuario es: "{USER_NAME}", Tu contraseña es: "{PASSWORD}"

Para terminar de activar tu cuenta, debes pulsar sobre el enlace que aparece debajo o copiarlo y pegarlo en tu navegador de InterNet.

<a href="{ACT_LINK}">{ACT_LINK}</a>

Saludos.

Los administradores de {SITE_NAME}

EOT;

$lang_register_approve_email = <<<EOT
Un nuevo usuario con el nombre "{USER_NAME}" se ha registrado en tu galería.

Para terminar de activar tu cuenta, debes pulsar sobre el enlace que aparece debajo o copiarlo y pegarlo en tu navegador de InterNet.

<a href="{ACT_LINK}">{ACT_LINK}</a>

EOT;

$lang_register_activated_email = <<<EOT
Tu cuenta ha sido aprobada y activada.

Ahora puedes iniciar sesión en <a href="{SITE_LINK}">{SITE_LINK}</a> usando el nombre e usuario: "{USER_NAME}"


Saludos.

Los administradores de {SITE_NAME}

EOT;
}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
	'title' => 'Revisar comentarios',
	'no_comment' => 'No existen comentarios que mostrar',
	'n_comm_del' => '%s comentario(s) borrado(s)',
	'n_comm_disp' => 'Número de comentarios a mostrar',
	'see_prev' => 'Ver el anterior',
	'see_next' => 'Ver el siguiente',
	'del_comm' => 'Borrar comentarios seleccionados',
  	'user_name' => 'Nombre', //cpg1.4
  	'date' => 'Fecha', //cpg1.4
  	'comment' => 'Comentario', //cpg1.4
  	'file' => 'Fichero', //cpg1.4
  	'name_a' => 'Nombre de Usuario ascendente', //cpg1.4
  	'name_d' => 'Nombre de Usuario descendente', //cpg1.4
  	'date_a' => 'Fecha Ascendente', //cpg1.4
  	'date_d' => 'Fecha Descendente', //cpg1.4
  	'comment_a' => 'Comentario Ascendente', //cpg1.4
  	'comment_d' => 'Comentario Descendente', //cpg1.4
  	'file_a' => 'Ficheros Ascendente', //cpg1.4
  	'file_d' => 'Ficheros Descendente', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File search.php - OK
// ------------------------------------------------------------------------- //


if (defined('SEARCH_PHP')) {

$lang_search_php = array(
  	'title' => 'Buscar en toda la galería', //cpg1.4
  	'submit_search' => 'buscar', //cpg1.4
  	'keyword_list_title' => 'Listado de palabras claves', //cpg1.4
  	'keyword_msg' => 'La lista superior no es inclusiva. No incluye las palabras de los títulos de las fotos o de sus descripciones. Intente una búsqueda de texto completo.',  //cpg1.4
  	'edit_keywords' => 'Editar palabras claves', //cpg1.4
  	'search in' => 'Buscar en:', //cpg1.4
  	'ip_address' => 'Dirección IP', //cpg1.4
  	'fields' => 'Buscar en', //cpg1.4
  	'age' => 'Edad', //cpg1.4
  	'newer_than' => 'Mas nuevo que', //cpg1.4
  	'older_than' => 'Mas antiguo que', //cpg1.4
  	'days' => 'días', //cpg1.4
  	'all_words' => 'Coinciden todas las palabras (AND)', //cpg1.4
  	'any_words' => 'Coincide cualquier palabra (OR)', //cpg1.4
);

$lang_adv_opts = array(
  	'title' => 'Titulo', //cpg1.4
  	'caption' => 'Subtitulo', //cpg1.4
  	'keywords' => 'Palabras claves', //cpg1.4
  	'owner_name' => 'Nombre del Propietario', //cpg1.4
  	'filename' => 'Nombre de Archivo', //cpg1.4
);

}

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
	'page_title' => 'Buscar nuevos ficheros',
	'select_dir' => 'Selecciona directorio',
	'select_dir_msg' => 'Esta función te permite añadir de forma automática los ficheros que hayas subido a tu servidor mediante FTP.<br /><br />Selecciona el directorio donde has subido tus ficheros',
	'no_pic_to_add' => 'No hay ningún fichero para añadir',
	'need_one_album' => 'Necesitas al menos un album para utilizar esta función',
	'warning' => 'Atención',
	'change_perm' => '¡El script no puede escribir en este directorio, necesitas cambiar sus permisos a modo 755 o 777 antes de intentarlo de nuevo!',
	'target_album' => '<b>Colocar los ficheros del directorio &quot;</b>%s<b>&quot; en el album </b>%s',
	'fólder' => 'Carpeta',
	'image' => 'Imagen',
	'album' => 'Album',
	'result' => 'Resultado',
	'dir_ro' => 'No se puede escribir. ',
	'dir_cant_read' => 'No se puede leer. ',
	'insert' => 'Añadiendo nuevos ficheros a la galería',
	'list_new_pic' => 'Listado de nuevos ficheros',
	'insert_selected' => 'Añadir los ficheros seleccionados',
	'no_pic_found' => 'No se encontró ningún fichero nuevo',
	'be_patient' => 'Por favor, se paciente, el script necesita tiempo para añadir los ficheros',
	'no_album' => 'ningún album seleccionado',  //cpg1.3.0
  	'result_icon' => 'Haga click para los detalles o para recargar',  //cpg1.4
	'notes' =>  '<ul>'.
				'<li><b>OK</b> : significa que el fichero fue añadido sin problemas'.
				'<li><b>DP</b> : significa que el fichero es un duplicado y ya existe en la base de datos'.
				'<li><b>PB</b> : significa que el fichero no puede ser añadido, por favor comprueba la configuración y los permisos de los directorios donde están los ficheros'.
				'<li><b>NA</b> : significa que no has seleccionado un album en el que insertar los ficheros, pulsa \'<a href="javascript:history.back(1)">atrás</a>\' y selecciona un album. Si no dispones de album <a href="albmgr.php">crea uno primero</a></li>'.
				'<li>Si los iconos OK, DP, PB no aparecen, pulsa sobre el icono de imagen no cargada para ver el error producido por PHP'.
				'<li>Si el navegador produce un timeout, pulsa el icono de Actualizar'.
				'</ul>',
	'select_album' => 'selecciona un album', //cpg1.3.0
	'check_all' => 'Marcar todos', //cpg1.3.0
	'uncheck_all' => 'Desmarcar todos', //cpg1.3.0
  	'no_folders' => 'No hay fólderes dentro del fólder "albums" aun. asegúrese de crear al menos un fólder personal dentro del fólder "albums" y suba por ftp sus archivos ahí. No deberá subir los fólder "imágenes de usuarios (userpics)" o "editar(edit)", estas están reservadas para los archivos subidos por HTTP y para trabajo interno del programa.', //cpg1.4
  	'albums_no_category' => 'Álbumes sin categoría', //cpg1.4 // album pulldown mod, added by frogfoot
  	'personal_albums' => '*  Álbumes personales', //cpg1.4 // album pulldown mod, added by frogfoot
  	'browse_batch_add' => 'Interfase Navegable (recomendado)', //cpg1.4
  	'edit_pics' => 'Editar ficheros', //cpg1.4
  	'edit_properties' => 'Propiedades del Album', //cpg1.4
  	'view_thumbs' => 'Vista en miniatura', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File stat_details.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('STAT_DETAILS_PHP')) $lang_stat_details_php = array(
  	'show_hide' => 'mostrar/ocultar esta columna', //cpg1.4
  	'vote' => 'Detalles de Votos', //cpg1.4
  	'hits' => 'Detalles de veces que se vio la imagen', //cpg1.4
  	'stats' => 'Estadísticas de Votos', //cpg1.4
  	'sdate' => 'Fecha', //cpg1.4
  	'rating' => 'Calificación', //cpg1.4
  	'search_phrase' => 'Buscar frase', //cpg1.4
  	'referer' => 'Referido', //cpg1.4
  	'browser' => 'Navegador', //cpg1.4
  	'os' => 'Sistema Operativo', //cpg1.4
  	'ip' => 'IP', //cpg1.4
  	'sort_by_xxx' => 'Ordenar por %s', //cpg1.4
  	'ascending' => 'ascendente', //cpg1.4
  	'descending' => 'descendente', //cpg1.4
  	'internal' => 'interno', //cpg1.4
  	'close' => 'cerrar', //cpg1.4
  	'hide_internal_referers' => 'ocultar referencias internas', //cpg1.4
  	'date_display' => 'Mostrar fecha', //cpg1.4
  	'submit' => 'enviar / refrescar', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File thumbnails.php
// ------------------------------------------------------------------------- //

// Void

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) $lang_upload_php = array(
	'title' => 'Añadir nuevo fichero',
	'custom_title' => 'Formulario de Petición personalizado', //cpg1.3.0
	'cust_instr_1' => 'Debe seleccionar un numero personalizado de cajas para subir archivos. Sin embargo, no debe seleccionar mas que los limites listados debajo.', //cpg1.3.0
	'cust_instr_2' => 'Numero de cajas de petición', //cpg1.3.0
	'cust_instr_3' => 'Numero de cajas para subir archivos: %s', //cpg1.3.0
	'cust_instr_4' => 'Cajas para subir URI/URL: %s', //cpg1.3.0
	'cust_instr_5' => 'Cajas para subir URI/URL:', //cpg1.3.0
	'cust_instr_6' => 'Cajas para subir archivos:', //cpg1.3.0
	'cust_instr_7' => 'Por favor ingrese en numero de cada tipo de cajas para subir archivos que usted desea en este momento. Luego presione \'Continuar\'. ', //cpg1.3.0
	'reg_instr_1' => 'Acción invalida para la creación de formularios.', //cpg1.3.0
	'reg_instr_2' => 'Ahora debe subir sus archivos usando las cajas que se encuentran debajo. El tamaño de los archivos subidos desde su cliente al servidor no debe exceder los %s KB cada uno. Archivos ZIP subidos en las secciones \'Subir Archivos\' y \'Subir URI/URL\' se mantendran comprimidos.', //cpg1.3.0
	'reg_instr_3' => 'Si desea que el archivo comprimido sea descomprimido, debe usar la caja de subir archivos que se provee en el área \'Subir archivos ZIP y descomprimirlos\' área.', //cpg1.3.0
	'reg_instr_4' => 'CUando use la sección de subir URI/URL, porfavor ingrese la ruta del archivo de la siguiente manera: http://www.mysite.com/images/example.jpg', //cpg1.3.0
	'reg_instr_5' => 'CUando haya terminado con el formulario, presione \'Continuar\'.', //cpg1.3.0
	'reg_instr_6' => 'Subir archivos ZIP y descomprimirlos:', //cpg1.3.0
	'reg_instr_7' => 'Subir archivos:', //cpg1.3.0
	'reg_instr_8' => 'Subir URI/URL:', //cpg1.3.0
	'error_report' => 'Reporte de errores', //cpg1.3.0
	'error_instr' => 'Los siguientes archivos se encontraron con errores:', //cpg1.3.0
	'file_name_url' => 'Nombre/URL del archivo', //cpg1.3.0
	'error_message' => 'Mensaje de Error', //cpg1.3.0
	'no_post' => 'Archivo no subido por POST.', //cpg1.3.0
	'forb_ext' => 'Extensión de archivo prohibida.', //cpg1.3.0
	'exc_php_ini' => 'Se excedió del tamaño de archivo permitido por el php.ini.', //cpg1.3.0
	'exc_file_size' => 'Se excedió del tamaño de archivo permitido por el  CPG.', //cpg1.3.0
	'partial_upload' => 'Solo una subida parcial.', //cpg1.3.0
	'no_upload' => 'No se pudo subir.', //cpg1.3.0
	'unknown_code' => 'código de error del PHP desconocido.', //cpg1.3.0
	'no_temp_name' => 'No se subió - No hay nombre del temporal.', //cpg1.3.0
	'no_file_size' => 'No contiene información/Corrupta', //cpg1.3.0
	'impossible' => 'Imposible mover.', //cpg1.3.0
	'not_image' => 'No es una imagen/corrupto', //cpg1.3.0
	'not_GD' => 'No es una extensión GD.', //cpg1.3.0
	'pixel_allowance' => 'Se excedió los píxeles permitidos.', //cpg1.3.0
	'incorrect_prefix' => 'Prefijo URI/URL incorrecto', //cpg1.3.0
	'could_not_open_URI' => 'No se pudo abrir URI.', //cpg1.3.0
	'unsafe_URI' => 'No se puede verificar la seguridad.', //cpg1.3.0
	'meta_data_failure' => 'Falla de la meta-data', //cpg1.3.0
	'http_401' => '401 No autorizado', //cpg1.3.0
	'http_402' => '402 Pago requerido', //cpg1.3.0
	'http_403' => '403 Prohibido', //cpg1.3.0
	'http_404' => '404 No encontrado', //cpg1.3.0
	'http_500' => '500 Error interno de servidor', //cpg1.3.0
	'http_503' => '503 Servicio no disponible', //cpg1.3.0
	'MIME_extraction_failure' => 'No se pudo determinar el MIME.', //cpg1.3.0
	'MIME_type_unknown' => 'Desconocido tipo MIME', //cpg1.3.0
	'cant_create_write' => 'No se puede crear el archivo a escribir.', //cpg1.3.0
	'not_writable' => 'No tiene permiso de escritura para grabar el archivo.', //cpg1.3.0
	'cant_read_URI' => 'No se puede leer la URI/URL del archivo', //cpg1.3.0
	'cant_open_write_file' => 'No se puede abrir la URI para escribir el archivo.', //cpg1.3.0
	'cant_write_write_file' => 'No se pude escribir en la URI del archivo.', //cpg1.3.0
	'cant_unzip' => 'No se puede descomprimir.', //cpg1.3.0
	'unknown' => 'Error desconocido', //cpg1.3.0
	'succ' => 'Se subió el archivo exitosamente', //cpg1.3.0
	'success' => '%s de archivos subidos exitosamente.', //cpg1.3.0
	'add' => 'Por favor presione \'Continuar\' para añadir los archivos al album.', //cpg1.3.0
	'failure' => 'Falla en la subida de archivos', //cpg1.3.0
	'f_info' => 'información del archivo', //cpg1.3.0
	'no_place' => 'El archivo anterior no pudo ser colocado.', //cpg1.3.0
	'yes_place' => 'El archivo anterior fue colocado exitosamente.', //cpg1.3.0
	'max_fsize' => 'El tamaño máximo de fichero admitido es de %s KB',
	'album' => 'Álbum',
	'picture' => 'Fichero',
	'pic_title' => 'Título del fichero',
	'description' => 'Descripción del fichero',
	'keywords' => 'Palabras clave (separadas por espacios)',
  	'keywords_sel' =>'Seleccione una palabra clave', //cpg1.4
	'err_no_alb_uploadables' => 'Perdona pero no hay ningún album donde esté permitido insertar nuevos ficheros',
	'place_instr_1' => 'Por favor coloque los archivos en los albums en este momento. Igualmente ingrese información relevante de cada archivo ahora.', //cpg1.3.0
	'place_instr_2' => 'Mas archivos necesitan ser colocados. Por favor presione \'Continuar\'.', //cpg1.3.0
	'process_complete' => 'Ha colocado todos los archivos exitosamente.', //cpg1.3.0
  	'albums_no_category' => 'Albums sin categoría', //cpg1.4. //album pulldown mod, added by frogfoot
  	'personal_albums' => '* Albums personales', //cpg1.4 //album pulldown mod, added by frogfoot
  	'select_album' => 'Seleccionar album', //cpg1.4 //album pulldown mod, added by frogfoot
  	'close' => 'Cerrar', //cpg1.4
  	'no_keywords' => '¡Lo sentimos, palabra clave no disponible!', //cpg1.4
  	'regenerate_dictionary' => 'Regenerar Diccionario', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
  	'memberlist' => 'Lista de miembros', //cpg1.4
  	'user_manager' => 'Administrador de usuarios', //cpg1.4
	'title' => 'Administrar usuarios',
	'name_a' => 'Ascendente por nombre',
	'name_d' => 'Descendente por nombre',
	'group_a' => 'Ascendente por grupo',
	'group_d' => 'Descendente por grupo',
	'reg_a' => 'Ascendente por fecha de alta',
	'reg_d' => 'Descendente por fecha de alta',
	'pic_a' => 'Ascendente por total de fotos',
	'pic_d' => 'Descendente por total de fotos',
	'disku_a' => 'Ascendente por uso de disco',
	'disku_d' => 'Descendente por uso de disco',
	'lv_a' => 'Ascendente por última visita', //cpg1.3.0
	'lv_d' => 'Descendente por última visita', //cpg1.3.0
	'sort_by' => 'Ordenar usuarios por',
	'err_no_users' => '¡La tabla de usuarios está vacía!',
	'err_edit_self' => 'No puedes editar tu propio perfil, usa la opción \'Mi perfil de usuario\' para eso',
	'edit' => 'EDITAR',
  	'with_selected' => 'Seleccionado:', //cpg1.4
	'delete' => 'BORRAR',
  	'delete_files_no' => 'mantener archivos públicos (pero serán pasados a anónimos)', //cpg1.4
  	'delete_files_yes' => 'también borrar archivos públicos', //cpg1.4
  	'delete_comments_no' => 'mantener comentarios (pero serán pasados a anónimos)', //cpg1.4
  	'delete_comments_yes' => 'también borrar comentarios', //cpg1.4
  	'activate' => 'Activar', //cpg1.4
  	'deactivate' => 'Desactivar', //cpg1.4
  	'reset_password' => 'Volver a la contraseña predeterminada', //cpg1.4
  	'change_primary_membergroup' => 'Cambiar membresía de grupo primario', //cpg1.4
  	'add_secondary_membergroup' => 'Añadir membresía de grupo secundario', //cpg1.4
	'name' => 'Nombre de usuario',
	'group' => 'Grupo',
	'inactive' => 'Inactivo',
	'operations' => 'Operaciones',
	'pictures' => 'Ficheros',
	'disk_space' => 'Espacio usado',
	'disk_space_quota' => 'Espacio de Cuota', //cpg1.4
	'registered_on' => 'Registrado el día',
	'last_visit' => 'última Visita', //cpg1.3.0
	'u_user_on_p_pages' => '%d usuarios en %d página(s)',
	'confirm_del' => '¿Estás seguro de querer BORRAR este usuario? \\nTodas sus fotos y albums serán también borrados.',
	'mail' => 'MAIL',
	'err_unknown_user' => '¡El usuario seleccionado no existe!',
	'modify_user' => 'Modificar usuario',
	'notes' => 'Notas',
	'note_list' => '<li>Si no quieres cambiar la contraseña actual, deja el campo "contraseña" vacío',
	'password' => 'Contraseña',
	'user_active' => 'El usuario está activo',
	'user_group' => 'Grupo de usuarios',
	'user_email' => 'Email del usuario',
	'user_web_site' => 'Página web del usuario',
	'create_new_user' => 'Crear nuevo usuario',
	'user_location' => 'Localidad del usuario',
	'user_interests' => 'Intereses del usuario',
	'user_occupation' => 'Ocupación del usuario',
  	'user_profile1' => '$user_profile1', //cpg1.4
  	'user_profile2' => '$user_profile2', //cpg1.4
  	'user_profile3' => '$user_profile3', //cpg1.4
  	'user_profile4' => '$user_profile4', //cpg1.4
  	'user_profile5' => '$user_profile5', //cpg1.4
  	'user_profile6' => '$user_profile6', //cpg1.4
	'latest_upload' => 'últimos uploads', //cpg1.3.0
	'never' => 'nunca', //cpg1.3.0
  	'search' => 'búsqueda del usuario', //cpg1.4
  	'submit' => 'Enviar', //cpg1.4
  	'search_submit' => 'Ir!', //cpg1.4
  	'search_result' => 'Resultados de la búsqueda para: ', //cpg1.4
  	'alert_no_selection' => '¡Tiene que seleccionar al menos un usuario primero!', //cpg1.4 //js-alert
  	'password' => 'contraseña', //cpg1.4
  	'select_group' => 'Seleccione grupo', //cpg1.4
  	'groups_alb_access' => 'Permisos de albums por grupo', //cpg1.4
  	'album' => 'Album', //cpg1.4
  	'category' => 'categoría', //cpg1.4
  	'modify' => '¿Modificar?', //cpg1.4
  	'group_no_access' => 'Este grupo no tiene acceso especial', //cpg1.4
  	'notice' => 'Nota', //cpg1.4
  	'group_can_access' => 'Album(s) que solo "%s" puede acceder', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //

if (defined('UTIL_PHP')) {
$lang_util_desc_php = array(
	'Actualizar títulos desde nombre de archivo', //cpg1.4
	'Borrar títulos', //cpg1.4
	'Reconstruir vistas en miniatura e imágenes reescaladas', //cpg1.4
	'Borrar fotos de tamaño original remplazándolas con la versión reescalada', //cpg1.4
	'Borrar fotos originales o intermedias para liberar espacio', //cpg1.4
	'Borrar comentarios huérfanos', //cpg1.4
	'Releer tamaño de archivos y dimensiones (si las ha editado manualmente)', //cpg1.4
	'Volver a cero los contadores de las mas vistas', //cpg1.4
	'Mostrar phpinfo', //cpg1.4
	'Actualizar la base de datos', //cpg1.4
	'Mostrar archivos de Registro de sucesos', //cpg1.4
);
$lang_util_php = array(
	'title' => 'Cambiar tamaño a las imágenes',
	'what_it_does' => 'Qué hace',
	'file' => 'Fichero',
  	'problem' => 'Problema', //cpg1.4
  	'status' => 'Estatus', //cpg1.4
	'title_set_to' => 'título a poner',
	'submit_form' => 'enviar',
	'updated_succesfully' => 'actualizado con éxito',
	'error_create' => 'ERROR al crear',
	'continue' => 'Procesar más imágenes',
	'main_success' => 'El fichero %s ha sido usado como imagen principal con éxito',
	'error_rename' => 'Error renombrando %s a %s',
	'error_not_found' => 'No se encuentra el fichero %s',
	'back' => 'volver al inicio',
	'thumbs_wait' => 'Actualizando miniaturas y/o tamaños de imágenes, por favor espere...',
	'thumbs_continue_wait' => 'Continuando la actualización de miniaturas y/o tamaños de imágenes...',
	'titles_wait' => 'Actualizando títulos, por favor espere...',
	'delete_wait' => 'Borrando títulos, por favor espere...',
	'replace_wait' => 'Borrando originales y reemplazándolos con las imágenes de nuevo tamaño, por favor espere...',
	'instruction' => 'Instrucciones rápidas',
	'instruction_action' => 'Seleccionar acción',
	'instruction_parameter' => 'Elegir los parámetros',
	'instruction_album' => 'Seleccionar el album',
	'instruction_press' => 'Pulsar %s',
	'update' => 'Actualizar miniaturas y/o tamaños de imágenes',
	'update_what' => 'Qué debe ser actualizado',
	'update_thumb' => 'Solo Miniaturas',
	'update_pic' => 'Solo tamaños de imágenes',
	'update_both' => 'Thumbnails y tamaños de imágenes (ambos)',
	'update_number' => 'Número de imágenes procesadas por cada click',
	'update_option' => '(Prueba a poner un número menor si experimentas problemas de timeout)',
	'filename_title' => 'Fichero &rArr; Título del fichero',
	'filename_how' => 'Cómo debe ser el fichero modificado',
	'filename_remove' => 'Quitar .jpg del final y reemplazar _ (underscore) con espacios',
	'filename_euro' => 'Cambiar 2003_11_23_13_20_20.jpg a 23/11/2003 13:20',
	'filename_us' => 'Cambiar 2003_11_23_13_20_20.jpg a 11/23/2003 13:20',
	'filename_time' => 'Cambiar 2003_11_23_13_20_20.jpg a 13:20',
	'delete' => 'Borrar títulos de ficheros o imágenes de tamaño original',
	'delete_title' => 'Borrar títulos de ficheros',
  	'delete_title_explanation' => 'Esto removerá todos los títulos de los archivos en el album especificado.', //cpg1.4
	'delete_original' => 'Borrar imágenes de tamaño original',
  	'delete_original_explanation' => 'Esto removerá las imágenes de tamaño original.', //cpg1.4
  	'delete_intermediate' => 'Borrar imágenes intermedias', //cpg1.4
  	'delete_intermediate_explanation' => 'Esto borrara las imágenes de tamaño intermedio (normal).<br />Utilícelo para liberar espacio si ha deshabilitado \'Hacer imágenes intermedias\' en la configuración luego de añadir imágenes.', //cpg1.4
	'delete_replace' => 'Borra las imágenes originales, reemplazándolas con otras de tamaño nuevo',
  	'titles_deleted' => 'Todos los títulos en el album especificado han sido removidos', //cpg1.4
  	'deleting_intermediates' => 'Borrando imágenes intermedias, porfavor espere...', //cpg1.4
  	'searching_orphans' => 'Buscando huérfanos, porfavor espere...', //cpg1.4
	'select_album' => 'Selecciona album',
	'delete_orphans' => 'Borrar comentarios huérfanos (funciona en todos los albums)', //cpg1.3.0
  	'delete_orphans_explanation' => 'Esto identificara y permitirá borrar cualquier comentario asociado a archivos que ya no se encuentran en la galería.<br />Verificar todos los albums.', //cpg1.4
  	'refresh_db' => 'Recargar la información sobre dimensiones y tamaño', //cpg1.4
  	'refresh_db_explanation' => 'Esto volverá a leer los tamaños de archivos y las dimensiones. Utilice si las cuotas son incorrectas o ha cambiado los archivos manualmente.', //cpg1.4
  	'reset_views' => 'Volver a cero los contadores de mas vistas', //cpg1.4
  	'reset_views_explanation' => 'Pone en cero los contadores de visitas para el album especificado.', //cpg1.4
	'orphan_comment' => 'comentarios huérfanos encontrados', //cpg1.3.0
	'delete' => 'Borrar', //cpg1.3.0
	'delete_all' => 'Borrar todos', //cpg1.3.0
  	'delete_all_orphans' => '¿Borrar huérfanos?', //cpg1.4
	'comment' => 'Comentario: ', //cpg1.3.0
	'nonexist' => 'asociado a un fichero no existente # ', //cpg1.3.0
	'phpinfo' => 'Mostrar phpinfo', //cpg1.3.0
  	'phpinfo_explanation' => 'Contiene información técnica sobre su servidor.<br /> - Puede ser que sea requerido que de información de aquí cuando se hace un pedido de soporte técnico.', //cpg1.4
	'update_db' => 'Actualizar base de datos', //cpg1.3.0
	'update_db_explanation' => 'Si has reemplazado los ficheros de coppermine, añadido modificaciones o actualizado de una versión previa de coppermine, deberías ejecutar la actualización de base de datos. Esta acción creará las tablas necesarias y/o valores de configuración en la base de datos de  coppermine.', //cpg1.3.0
  	'view_log' => 'Ver registro de sucesos', //cpg1.4
  	'view_log_explanation' => 'Coppermine puede seguir varias de las acciones que un usuario realiza. Puede revisar estos registros si ha activado Registrar sucesos en <a href="admin.php">configuración de Coppermine</a>.', //cpg1.4
  	'versioncheck' => 'Verificar versión', //cpg1.4
  	'versioncheck_explanation' => 'Revisa el archivo de versión para verificar si ha remplazado todos los archivos luego de hacer la actualización, o si los archivos fuente de coppermine han sido actualizados luego de la aparición de un paquete.', //cpg1.4
  	'bridgemanager' => 'Administrador de Enlaces', //cpg1.4
  	'bridgemanager_explanation' => 'Activa/Desactiva la integración (enlace) de Coppermine con otra aplicación (ej. su BBS).', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File versioncheck.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('VERSIONCHECK_PHP')) $lang_versioncheck_php = array(
  	'title' => 'Revisión de Versión', //cpg1.4
  	'what_it_does' => 'Esta pagina esta diseñada para usuarios que han actualizado su instalación de Coppermine. Este script va recorriendo los archivos en tu servidor web y trata de determinar si las versiones locales de tus archivos y las versiones en el servidor web http://coppermine.sourceforge.net son iguales, de esta manera se muestran los archivos que deberías actualizar.<br />Muestra todo lo que es necesario actualizar en rojo. Las entradas en amarillo necesitan ser revisadas. Las entradas en verde (o tu color de fuente predeterminado) están OK.<br />Has click en los iconos de ayuda para saber más.', //cpg1.4
  	'online_repository_unable' => 'No es posible comunicarse con el repositorio en línea', //cpg1.4
  	'online_repository_noconnect' => 'Coppermine no se puede conectar al  repositorio en línea. Puede ser por dos razones:', //cpg1.4
  	'online_repository_reason1' => 'el repositorio de coppermine en línea se encuentra abajo - revise si puede navegar en esta pagina: %s - si no puede acceder a esta pagina, inténtelo de nuevo mas tarde.', //cpg1.4
  	'online_repository_reason2' => 'El PHP de su servidor esta configurado con %s deshabilitado (predeterminado es habilitado). Si el servidor es suyo para administrar, active esta opción en el <i>php.ini</i> (al menos permita que sea sobreescribible con %s). Si tienes tus archivos en un host de Internet, probablemente no le sea posible comparar sus archivos con el repositorio en línea. Esta pagina solo muestra los archivos de su distribución - las actualizaciones no se mostraran.', //cpg1.4
  	'online_repository_skipped' => 'Se salteo la conexión al repositorio en línea', //cpg1.4
	'online_repository_to_local' => 'Este script esta predeterminado a la versión local de sus archivos. La información puede no ser precisa si ha actualizado Coppermine y no ha subido sus archivos. Cambios a sus archivos luego de esta liberación de versión no serán tomados en consideración.', //cpg1.4
  	'local_repository_unable' => 'No es posible conectarse al repositorio en su servidor', //cpg1.4
  	'local_repository_explanation' => 'Coppermine no se pudo conectar al repositorio de archivos %s en su servidor. Esto posiblemente signifique que no ha subido el repositorio de archivos a su servidor. Hágalo ahora y de ahí intente correr esta pagina nuevamente (presione refresh).<br />Si el script falla, su servidor web puede haber deshabilitado partes de <a href="http://www.php.net/manual/es/ref.filesystem.php">Funciones del sistema de archivos de PHP</a> completamente. En ese caso, no pude utilizar esta herramienta del todo, lo sentimos.', //cpg1.4
  	'coppermine_version_header' => 'versión de Coppermine instalada', //cpg1.4
  	'coppermine_version_info' => 'Actualmente tiene instalada la versión: %s', //cpg1.4
  	'coppermine_version_explanation' => 'Si cree que esto esta equivocado y supone que debería estar corriendo una versión superior de Coppermine, posiblemente no ha subido la versión mas reciente del archivo<i>include/init.inc.php</i>', //cpg1.4
  	'version_comparison' => 'Comparación de versiones', //cpg1.4
  	'folder_file' => 'fólder/Archivo', //cpg1.4
  	'coppermine_version' => 'versión de cpg', //cpg1.4
  	'file_version' => 'versión de archivo', //cpg1.4
  	'webcvs' => 'svn de web', //cpg1.4
  	'writable' => 'escribible', //cpg1.4
  	'not_writable' => 'no escribible', //cpg1.4
  	'help' => 'Ayuda', //cpg1.4
  	'help_file_not_exist_optional1' => 'El Archivo/fólder no existe', //cpg1.4
  	'help_file_not_exist_optional2' => 'El Archivo/fólder %s no ha sido encontrado en su servidor. A pesar que es opcional puede subirlo a su servidor web (usando su cliente FTP) si esta experimentando problemas.', //cpg1.4
  	'help_file_not_exist_mandatory1' => 'El Archivo/fólder no existe', //cpg1.4
  	'help_file_not_exist_mandatory2' => 'El Archivo/fólder %s no ha sido encontrado en su servidor, sin embargo es obligatorio. Suba el archivo a su servidor web (usando su cliente FTP).', //cpg1.4
  	'help_no_local_version1' => 'No hay versión local del archivo', //cpg1.4
  	'help_no_local_version2' => 'El script no fue capaz de extraer una versión local del archivo - su archivo es muy antiguo o usted lo ha modificado, removiendo la información de la cabecera en el proceso. Se recomienda actualizar el archivo.', //cpg1.4
  	'help_local_version_outdated1' => 'Versión local desactualizada', //cpg1.4
  	'help_local_version_outdated2' => 'La versión de este archivo parece de una versión antigua de Coppermine (probablemente lo ha actualizado). Asegúrese de actualizar este archivo también.', //cpg1.4
  	'help_local_version_na1' => 'No se pudo extraer la información de la versión de SVN', //cpg1.4
  	'help_local_version_na2' => 'El script no pudo determinar a que versión de SVN pertenece el archivo en su servidor web. debería subir el archivo de su paquete.', //cpg1.4
  	'help_local_version_dev1' => 'versión de desarrollo', //cpg1.4
  	'help_local_version_dev2' => 'El archivo en su servidor web parece mas nuevo que su versión de Coppermine. Se encuentra usando una versión en desarrollo (solo debe hacer eso si esta seguro de lo que hace), o ha actualizado su versión de Coppermine y no ha subido el archivo include/init.inc.php', //cpg1.4
  	'help_not_writable1' => 'El fólder no es escribible', //cpg1.4
  	'help_not_writable2' => 'Cambie los permisos (CHMOD) del archivo para darle al script acceso de escritura al fólder %s y todo su contenido.', //cpg1.4
  	'help_writable1' => 'El fólder es escribible', //cpg1.4
  	'help_writable2' => 'El fólder %s es escribible. Este es un riesgo innecesario, coppermine solo necesita acceso de lectura/escritura.', //cpg1.4
  	'help_writable_undetermined' => 'Coppermine no puede determinar si el fólder es escribible.', //cpg1.4
  	'your_file' => 'su archivo', //cpg1.4
  	'reference_file' => 'archivo de referencia', //cpg1.4
  	'summary' => 'Resumen', //cpg1.4
  	'total' => 'Total de archivos/fólderes revisados', //cpg1.4
  	'mandatory_files_missing' => 'Faltan archivos obligatorios', //cpg1.4
  	'optional_files_missing' => 'Faltan archivos opcionales', //cpg1.4
  	'files_from_older_version' => 'Archivos que quedaron de una versión desactualizada de Coppermine', //cpg1.4
  	'file_version_outdated' => 'Versiones de archivos desactualizadas', //cpg1.4
  	'error_no_data' => 'El script hizo buu, no fue posible recopilar información. Lamentamos los inconvenientes.', //cpg1.4
  	'go_to_webcvs' => 'ir a %s', //cpg1.4
  	'options' => 'Opciones', //cpg1.4
  	'show_optional_files' => 'mostrar fólderes/archivos opcionales', //cpg1.4
  	'show_mandatory_files' => 'mostrar archivos obligatorios ', //cpg1.4
  	'show_file_versions' => 'mostrar versiones de archivos', //cpg1.4
  	'show_errors_only' => 'mostrar solo fólderes/archivos con errores', //cpg1.4
  	'show_permissions' => 'mostrar permisos de fólderes', //cpg1.4
  	'show_condensed_output' => 'mostrar resultado condensado (para capturas de pantalla mas fáciles)', //cpg1.4
  	'coppermine_in_webroot' => 'coppermine esta instalado en la raíz del servidor web', //cpg1.4
  	'connect_online_repository' => 'tratando de conectar al repositorio en línea', //cpg1.4
  	'show_additional_information' => 'mostrar información adicional', //cpg1.4
  	'no_webcvs_link' => 'no mostrar el link al SVN', //cpg1.4
  	'stable_webcvs_link' => 'mostrar el link al SVN web a la rama estable', //cpg1.4
  	'devel_webcvs_link' => 'mostrar el link al SVN web a la rama de desarrollo', //cpg1.4
  	'submit' => 'aplicar cambios / refrescar', //cpg1.4
  	'reset_to_defaults' => 'regresar a los valores predeterminados', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File view_log.php  //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('VIEWLOG_PHP')) $lang_viewlog_php = array(
  	'delete_all' => 'Borrar todos los registros de sucesos', //cpg1.4
  	'delete_this' => 'Borrar este registro de suceso', //cpg1.4
  	'view_logs' => 'Ver registro de sucesos', //cpg1.4
  	'no_logs' => 'No hay registro de sucesos creados.', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File xp_publish.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('XP_PUBLISH_PHP')) {

$lang_xp_publish_client = <<<EOT
<h1>Cliente del Asistente de Publicación Web de XP</h1><p>Este modulo le permite usar el asistente de Publicación Web de <b>Windows XP</b> con Coppermine.</p><p>El código esta basado en un articulo publicado por
EOT;

$lang_xp_publish_required = <<<EOT
<h2>Que es requerido</h2><ul><li>Windows XP para poder tener el asistente.</li><li>Una instalación funcional de Coppermine<b>la función de subida funcionando propiamente.</b></li></ul><h2>Como instalar en el lado del cliente</h2><ul><li>Click derecho en 
EOT;

$lang_xp_publish_select = <<<EOT
Seleccione &quot;guardar archivo como..&quot;. Grabe el archivo en su disco duro. Cuando salve el archivo , revise que el nombre propuesto es <b>cpg_###.reg</b> (los ### representan una estampa de tiempo numérica (timestamp)). Cámbielo a ese nombre de ser necesario (deje los números). Cuando este descargado, doble click para registrar su servidor con el asistente de publicación Web.</li></ul>
EOT;

$lang_xp_publish_testing = <<<EOT
<h2>Probando</h2><ul><li>En el explorador de windows, seleccione algún archivo y de click en <b>Publicar xxx en la web</b> en el panel izquierdo.</li><li>Confirme la selección del archivo. Haga click en <b>Siguiente</b>.</li><li>En el listado de servicios que aparece, seleccione el que pertenece a su galería (tiene el nombre de su galería). Si el servicio no aparece, verifique que tiene instalado <b>cpg_pub_wizard.reg</b> como se describe arriba.</li><li>Ingrese su información de inicio de sesión si es requerido.</li><li>selección el álbum de destino o cree uno nuevo.</li><li>Presione <b>siguiente</b>. La carga de su archivo comienza.</li><li>Cuando termine, verifique su galería para ver si las imágenes han sido correctamente añadidas.</li></ul>
EOT;

$lang_xp_publish_notes = <<<EOT
<h2>Notas :</h2><ul><li>Una vez que la carga haya empezado, el asistente no puede mostrar ningún mensaje de error enviando por el script por lo que no puede saber si la carga ha fallado o fue exitosa hasta que revise su galería.</li><li>Si la carga falla, habilite el &quot;Modo de depuración&quot; en la pagina de administración de Coppermine, intente con una sola imagen y vea los mensajes de error en 
EOT;

$lang_xp_publish_flood = <<<EOT
archivo que esta ubicado en el directorio de Coppermine en su servidor.</li><li>Para evitar que la galería se <i>sature</i> por imágenes siendo cargadas por el asistente, solo los <b>administrador de la galería</b> y los <b>usuarios que pueden tener sus albums propios</b> pueden usar esta herramienta.</li>
EOT;



$lang_xp_publish_php = array(
  	'title' => 'Coppermine - Asistente de Publicación Web de XP', //cpg1.4
  	'welcome' => 'Bienvenido <b>%s</b>,', //cpg1.4
	'need_login' => 'Necesita iniciar sesión en la galería usando su navegador antes de poder usar este asistente.<p/><p>Cuando inicia sesión no se olvide de seleccionar la opción <b>recordarme</b> si esta presente.', //cpg1.4
  	'no_alb' => 'Lo sentimos pero no hay album alguno en el cual este permitido que cargue sus archivos por medio de este asistente.', //cpg1.4
  	'upload' => 'Subir sus imágenes a un album existente', //cpg1.4
  	'create_new' => 'Crear un nuevo album para sus imágenes', //cpg1.4
  	'album' => 'Album', //cpg1.4
  	'category' => 'categoría', //cpg1.4
  	'new_alb_created' => 'Su nuevo album &quot;<b>%s</b>&quot; ha sido creado.', //cpg1.4
  	'continue' => 'Presione &quot;Siguiente&quot; para iniciar la carga de sus imágenes', //cpg1.4
  	'link' => 'este enlace', //cpg1.4
);
}

//This ones i don't found it in the english file, originaly placed in util.php but the new english file has new estructure so...... ...........well i left it here
$missing=array('what_update_titles' => 'Actualiza los nombres de fichero',
	'what_delete_title' => 'Borra los títulos',
	'what_rebuild' => 'Vuelve a crear las imágenes miniatura y otros tamaños de las imágenes',
	'what_delete_originals' => 'Borra las imágenes originales reemplazándolas con versiones de nuevo tamaño');
?>