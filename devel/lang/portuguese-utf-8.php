<?php
// ------------------------------------------------------------------------- //
//  Coppermine Photo Gallery                                                 //
// ------------------------------------------------------------------------- //
//  Copyright (C) 2002,2003  Gregory DEMAR <gdemar@wanadoo.fr>               //
//  http://www.chezgreg.net/coppermine/                                      //
// ------------------------------------------------------------------------- //
//  Based on PHPhotoalbum by Henning Stoverud <henning@stoverud.com>         //
//  http://www.stoverud.com/PHPhotoalbum/                                    //
// ------------------------------------------------------------------------- //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
// ------------------------------------------------------------------------- //

// info about translators and translated language 
$lang_translation_info = array( 
'lang_name_english' => 'Portuguese',  //the name of your language in English, e.g. 'Greek' or 'Spanish' 
'lang_name_native' => '', //the name of your language in your mother tongue (for non-latin alphabets, use unicode), e.g. '&#917;&#955;&#955;&#951;&#957;&#953;&#954;&#940;' or 'Espa&ntilde;ol' 
'lang_country_code' => '', //the two-letter code for the country your language is most-often spoken (refer to http://www.iana.org/cctld/cctld-whois.htm), e.g. 'gr' or 'es' 
'trans_name'=> 'Daniel Villoldo (Akela)', //the name of the translator - can be a nickname 
'trans_email' => 'dvp@arrakis.es', //translator's email address (optional) 
'trans_website' => 'http://akela.proel334.net/', //translator's website (optional) 
'trans_date' => '2003-10-07', //the date the translation was created / last modified 
); 

$lang_charset = 'ISO-8859-1';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('Bytes', 'KB', 'MB');

// Day of weeks and months
$lang_day_of_week = array('Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sab');
$lang_month = array('Jan', 'Feb', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez');

// Some common strings
$lang_yes = 'Sim';
$lang_no  = 'Não';
$lang_back = 'ATRAS';
$lang_continue = 'CONTINUAR';
$lang_info = 'Informação';
$lang_error = 'Erro';

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$album_date_fmt =    '%d de %B de %Y';
$lastcom_date_fmt =  '%d/%m/%y às %H:%M';
$lastup_date_fmt = '%d de %B de %Y';
$register_date_fmt = '%d de %B de %Y';
$lasthit_date_fmt = '%d de %B de %Y às %I:%M %p';
$comment_date_fmt =  '%d de %B de %Y às %I:%M %p';

// For the word censor
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*');

$lang_meta_album_names = array(
	'random' => 'Fotos aleatórias',
	'lastup' => 'Últimas fotos',
	'lastcom' => 'Últimos comentários',
	'topn' => 'Mais vistas',
	'toprated' => 'Melhor Classificadas',
	'lasthits' => 'Últimas vistas',
	'search' => 'Resultado da procura',
        'favpics'=> 'Favourite Pictures', //new in cpg1.2.0
);

$lang_errors = array(
	'access_denied' => 'Não tem permissão para aceder a esta página.',
	'perm_denied' => 'Não tem permissão para efectuar esta operação.',
	'param_missing' => 'Chamada do Script sem os parametros requeridos.',
	'non_exist_ap' => 'O(A) album/foto seleccionado(a) não existe!',
	'quota_exceeded' => 'Quota de disco excedida<br /><br />Tem uma quota de disco de [quota]K, as suas fotos actualmente ocupam [space]K, e atendendo a esta foto exceder­as a quota.',
	'gd_file_type_err' => 'Quando se usa a librari­a de imagem GD somente são permitidos os tipos JPEG e PNG.',
	'invalid_image' => 'A imagem que enviou está corrompida ou não pode ser tratada pela librari­a GD.',
	'resize_failed' => 'Incapaz de criar thumbnail ou imagem de tamanho reduzido.',
	'no_img_to_display' => 'Nenhuma imagem para mostrar.',
	'non_exist_cat' => 'A categori­a seleccionada não existe.',
	'orphan_cat' => 'Uma categora­a não têm pai, execute a opção "Categori­as" para corrigir este problema.',
	'directory_ro' => 'O directório \'%s\' não tem permissões de escrita, as fotos não podem ser apagadas.',
	'non_exist_comment' => 'O comentário seleccionado não existe.',
	'pic_in_invalid_album' => 'Â¿Â¡A foto está num album que não existe (%s)!?',
        'banned' => 'You are currently banned from using this site.',  //new in cpg1.2.0
        'not_with_udb' => 'This function is disabled in Coppermine because it is integrated with forum software. Either what you are trying to do is not supported in this configuration, or the function should be handled by the forum software.',  //new in cpg1.2.0
);

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
	'alb_list_title' => 'Ir para a lista de albuns',
	'alb_list_lnk' => 'Lista de albuns',
	'my_gal_title' => 'Ir para galeria pessoal',
	'my_gal_lnk' => 'Minha galeria',
	'my_prof_lnk' => 'O meu perfil de utilizador',
	'adm_mode_title' => 'Ir para modo administrador',
	'adm_mode_lnk' => 'Modo administrador',
	'usr_mode_title' => 'Ir para modo utilizador',
	'usr_mode_lnk' => 'Modo Utilizador',
	'upload_pic_title' => 'Inserir foto num album',
	'upload_pic_lnk' => 'Inserir foto',
	'register_title' => 'Criar um utilizador',
	'register_lnk' => 'Registar-se',
	'login_lnk' => 'Login',
	'logout_lnk' => 'Logout',
	'lastup_lnk' => 'Últimas fotos',
	'lastcom_lnk' => 'Últimos comentários',
	'topn_lnk' => 'Mais vistas',
	'toprated_lnk' => 'Melhor Classificadas',
	'search_lnk' => 'Procurar',
        'fav_lnk' => 'My Favorites', //new in cpg1.2.0
);

$lang_gallery_admin_menu = array(
	'upl_app_lnk' => 'Aprovar Uploads',
	'config_lnk' => 'Configuração',
	'albums_lnk' => 'Álbuns',
	'categories_lnk' => 'Categori­as',
	'users_lnk' => 'Utilizadores',
	'groups_lnk' => 'Grupos',
	'comments_lnk' => 'Comentários',
	'searchnew_lnk' => 'Adicionar fotos (Batch)',
        'util_lnk' => 'Resize pictures',  //new in cpg1.2.0
        'ban_lnk' => 'Ban Users',  //new in cpg1.2.0
);

$lang_user_admin_menu = array(
	'albmgr_lnk' => 'Criar / ordenar álbuns',
	'modifyalb_lnk' => 'Modificar meus álbuns',
	'my_prof_lnk' => 'Meu perfil de utilizador',
);

$lang_cat_list = array(
	'category' => 'Categoria',
	'albums' => 'Álbuns',
	'pictures' => 'Fotos',
);

$lang_album_list = array(
	'album_on_page' => '%d álbuns na(s) %d página(s)'
);

$lang_thumb_view = array(
	'date' => 'DATA',
        //Sort by filename and title
        'name' => 'NOME', //new in cpg1.2.0
        'title' => 'TITLE', //new in cpg1.2.0
	'sort_da' => 'Ordenado por data ascendente',
	'sort_dd' => 'Ordenado por data descendente',
	'sort_na' => 'Ordenado por nome ascendente',
	'sort_nd' => 'Ordenado por nome descendente',
        'sort_ta' => 'Sort by title ascending',  //new in cpg1.2.0
        'sort_td' => 'Sort by title descending',  //new in cpg1.2.0
	'pic_on_page' => '%d foto(s) na(s) %d página(s)',
	'user_on_page' => '%d utilizadore(s) na(s) %d página(s)'
);

$lang_img_nav_bar = array(
	'thumb_title' => 'Voltar ao Í­ndice do álbum',
	'pic_info_title' => 'Mostrar/ocultar informação da foto',
	'slideshow_title' => 'Slideshow',
	'ecard_title' => 'Enviar esta foto a um amigo',
	'ecard_disabled' => 'Envio de fotos desativado',
	'ecard_disabled_msg' => 'Não tem permissão para enviar fotos',
	'prev_title' => 'Ver foto anterior',
	'next_title' => 'Ver foto siguinte',
	'pic_pos' => 'FOTO %s/%s',
);

$lang_rate_pic = array(
	'rate_this_pic' => 'Classificar esta foto ',
	'no_votes' => '(No há votos)',
	'rating' => '(valoração actual : %s / 5 com %s votos)',
	'rubbish' => 'Muito Fraca',
	'poor' => 'Fraca',
	'fair' => 'Normal',
	'good' => 'Boa',
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
	CRITICAL_ERROR => 'Error crÃ­tico',
	'file' => 'Fichero: ',
	'line' => 'Linea: ',
);

$lang_display_thumbnails = array(
	'filename' => 'Fichero: ',
	'filesize' => 'TamaÃ±o: ',
	'dimensions' => 'Dimensiones: ',
	'date_added' => 'Fecha de alta: '
);

$lang_get_pic_data = array(
	'n_comments' => '%s comentarios',
	'n_views' => '%s veces vista',
	'n_votes' => '(%s votos)'
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
	'Exclamation' => 'Exclamação',
	'Question' => 'Questão',
	'Very Happy' => 'Very Happy',
	'Smile' => 'Smile',
	'Sad' => 'triste',
	'Surprised' => 'Surpreendido',
	'Shocked' => 'Chocado',
	'Confused' => 'Confuso',
	'Cool' => 'Cool',
	'Laughing' => 'A rir',
	'Mad' => 'Louco',
	'Razz' => 'Razz',
	'Embarassed' => 'Embaraçado',
	'Crying or Very sad' => 'muito Triste',
	'Evil or Very Mad' => 'Mau',
	'Twisted Evil' => 'Muito Mau',
	'Rolling Eyes' => 'Rolling Eyes',
	'Wink' => 'Wink',
	'Idea' => 'Ideia',
	'Arrow' => 'Seta',
	'Neutral' => 'Neutro',
	'Mr. Green' => 'Mr. Green',
);

// ------------------------------------------------------------------------- //
// File addpic.php
// ------------------------------------------------------------------------- //

// void

// ------------------------------------------------------------------------- //
// File admin.php
// ------------------------------------------------------------------------- //

if (defined('ADMIN_PHP')) $lang_admin_php = array(
	0 => 'A sair do modo administrador...',
	1 => 'A entrar no modo administrador...',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
	'alb_need_name' => 'Os álbuns deven ter um nome!',
	'confirm_modifs' => 'Tem a certeza que quer efectuar estas alterações?',
	'no_change' => 'Não foi efectuada nenhuma alteração!',
	'new_album' => 'Novo álbum',
	'confirm_delete1' => 'Tem a certeza que quer apagar este álbum?',
	'confirm_delete2' => 'Todas as fotos e comentários que contem irão perder-se!',
	'select_first' => 'Selecione primeiro um álbum',
	'alb_mrg' => 'Administrador de Albuns',
	'my_gallery' => '* Minha galeria *',
	'no_category' => '* Sem categori­a *',
	'delete' => 'Apagar',
	'new' => 'Novo',
	'apply_modifs' => 'Aplicar modificações',
	'select_category' => 'Seleccionar categori­a',
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
	'miss_param' => 'Os parâmetros requeridos para a operação : \'%s\' não foram fornecidos!',
	'unknown_cat' => 'A categori­a seleccionada não existe na base de dados',
	'usergal_cat_ro' => 'As categori­as de galeri­as de utilizador não podem ser apagadas!',
	'manage_cat' => 'Gestor de categori­as',
	'confirm_delete' => 'Tem a certeza que quer apagar esta categoria',
	'category' => 'Categoria',
	'operations' => 'Operações',
	'move_into' => 'Mover para',
	'update_create' => 'Modificar/Criar categori­a',
	'parent_cat' => 'Categoria pai',
	'cat_title' => 'Título da categori­a',
	'cat_desc' => 'Descrição da categori­a'
);

// ------------------------------------------------------------------------- //
// File config.php
// ------------------------------------------------------------------------- //

if (defined('CONFIG_PHP')) $lang_config_php = array(
	'title' => 'Configuração',
	'restore_cfg' => 'Restaurar valores por defeito',
	'save_cfg' => 'Guardar a nova configuração',
	'notes' => 'Notas',
	'info' => 'Informação',
	'upd_success' => 'A configuração de Coppermine foi actualizada',
	'restore_success' => 'Valores por defeicto de Coppermine restaurados',
	'name_a' => 'Ascendente por nome',
	'name_d' => 'Descendente por nome',
        'title_a' => 'Title ascending',  //new in cpg1.2.0
        'title_d' => 'Title descending',  //new in cpg1.2.0
	'date_a' => 'Ascendente por data',
	'date_d' => 'Descendente por data'
);

if (defined('CONFIG_PHP')) $lang_config_data = array(
	'Parâmetros Gerais',
	array('Nome da galeri­a', 'gallery_name', 0),
	array('Descrição da galeria', 'gallery_description', 0),
	array('Correio electrónico do administrador', 'gallery_admin_email', 0),
	array('Endereço web associado a \'Ver mÃ¡s fotos\' aos e-cards', 'ecards_more_pic_target', 0),
	array('Linguagem', 'lang', 5),
	array('Tema (aspecto)', 'theme', 6),

	'Aspecto da lista de álbuns',
	array('Largura da tabela principal (pixels o %)', 'main_table_width', 0),
	array('Número de níveis de categori­as a mostrar', 'subcat_level', 0),
	array('Número de álbuns a mostrar', 'albums_per_page', 0),
	array('Número de colunas na lista de álbuns', 'album_list_cols', 0),
	array('Tamanho dos thumbnails em pixeis', 'alb_list_thumb_size', 0),
	array('Conteúdo da página principal', 'main_page_layout', 0),
        array('Show first level album thumbnails in categories','first_level',1),  //new in cpg1.2.0

	'Aspecto da vista de Thumbnails',
	array('Número de colunas na página de thumbnails', 'thumbcols', 0),
	array('Número de linha na página de thumbnails', 'thumbrows', 0),
	array('Máximo número de tabs a mostrar', 'max_tabs', 0),
	array('Mostrar captura de imagem (além do título) debaixo do thumbnail', 'caption_in_thumbview', 1),
	array('Mostrar el número de comentários debaixo do thumbnail', 'display_comment_count', 1),
	array('Ordem por defeito das fotos', 'default_sort_order', 3),
	array('Mínimo número de votos para que uma foto apareça na lista de \'MÃ¡s Valoradas\' list', 'min_votes_for_rating', 0),

	'Vista da foto e Configuração de comentários',
	array('Largura da tabela onde mostra a foto (pixels o %)', 'picture_table_width', 0),
	array('Informação da foto visível por defeito', 'display_pic_info', 1),
	array('Filtrar palavras impróprias nos comentários', 'filter_bad_words', 1),
	array('Permitir Emoticons nos comentários', 'enable_smilies', 1),
	array('Tamanho máximo da descrição de uma foto', 'max_img_desc_length', 0),
	array('Número máximo de caracteres numa palavra', 'max_com_wlength', 0),
	array('Número máximo de lineas num comentário', 'max_com_lines', 0),
	array('Tamanho máximo de um comentário', 'max_com_size', 0),
        array('Show film strip', 'display_film_strip', 1),  //new in cpg1.2.0
        array('Number of items in film strip', 'max_film_strip_items', 0), 

	'Configuração das fotos e thumbnails',
	array('Qualidade dos ficheros JPEG', 'jpeg_qual', 0),
        array('Max dimension of a thumbnail <b>*</b>', 'thumb_width', 0),  //new in cpg1.2.0
        array('Use dimension ( width or height or Max aspect for thumbnail )<b>*</b>', 'thumb_use', 7),  //new in cpg1.2.0
	array('Criar fotos de tamanho intermédio','make_intermediate',1),
	array('Largura máxima das fotos de tamanho intermédio <b>*</b>', 'picture_width', 0),
	array('Tamanho máximo das fotos de utilizadores por upload (KB)', 'max_upl_size', 0),
	array('Dimensões máximas das fotos de utilizadores por upload (pixeis)', 'max_upl_width_height', 0),

	'Configuração de utilizadores',
	array('Permitir o registo de novos utilizadores', 'allow_user_registration', 1),
	array('Registo de utilizadores requer verificação de e-mail', 'reg_requires_valid_email', 1),
	array('Permitir a dois utilizadores terem o mesmo e-mail', 'allow_duplicate_emails_addr', 1),
	array('Os utilizadores poden ter álbuns privados', 'allow_private_albums', 1),

	'Campos extra para descrição de fotos (dejar en blanco si no los usas)',
	array('Nome do campo 1', 'user_field1_name', 0),
	array('Nome do campo 2', 'user_field2_name', 0),
	array('Nome do campo 3', 'user_field3_name', 0),
	array('Nome do campo 4', 'user_field4_name', 0),

	'Configuração avançada de fotos e thumbnails',
        array('Show private album Icon to unlogged user','show_private',1),  //new in cpg1.2.0
	array('Caracteres proibidos nos nomes das fotos', 'forbiden_fname_char',0),
	array('Extenções de ficheros admitidas nos uploads', 'allowed_file_extensions',0),
	array('Método para organização das fotos','thumb_method',2),
	array('Path da ferramenta ImageMagick (por exemplo /usr/bin/X11/)', 'impath', 0),
	array('Tipos de ficheiros admitidos (válidos somente com ImageMagick)', 'allowed_img_types',0),
	array('Comandos de linha para ImageMagick', 'im_options', 0),
	array('Ler dados EXIF em ficheiros do tipo JPEG', 'read_exif_data', 1),
	array('Directório base dos álbuns <b>*</b>', 'fullpath', 0),
	array('Directório para as fotos submetidas pelos usuários <b>*</b>', 'userpics', 0),
	array('Prefixo para as fotos de tamanho intermédio <b>*</b>', 'normal_pfx', 0),
	array('Prefixo para os thumbnails <b>*</b>', 'thumb_pfx', 0),
	array('Modo por defeito dos directórios', 'default_dir_mode', 0),
	array('Modo por defeito para as fotos', 'default_file_mode', 0),
        array('Disable right-click on full-size pop-up (JavaScript - no foolproof method)', 'disable_popup_rightclick', 1),  //new in cpg1.2.0
        array('Disable right-click on all "regular" pages (JavaScript - no foolproof method)', 'disable_gallery_rightclick', 1),  //new in cpg1.2.0

	'Configuração de cookies e Conjunto de Caracteres',
	array('Nome dos cookies usados pelo script', 'cookie_name', 0),
	array('Path dos cookies usados pelo script', 'cookie_path', 0),
	array('Conjunto de caracteres', 'charset', 4),

	'Outras Configurações',
	array('Activar modo debug', 'debug_mode', 1),

	'<br /><div align="center">(*) Os campos marcados com * não devem ser substituídos se já existem fotos nas galeri­as</div><br />'
);

// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
	'empty_name_or_com' => 'Tem de inserir o seu nome e um comentário',
	'com_added' => 'O seu comentário foi adicionado',
	'alb_need_title' => 'Tem de introduzir um título para o album!',
	'no_udp_needed' => 'Não é necessária nenhuma alteração',
	'alb_updated' => 'O album foi actualizado',
	'unknown_album' => 'O album seleccionado não existe ou não tem permissão para adicionar fotos neste album',
	'no_pic_uploaded' => 'Nenhuma foto foi adicionada!<br /><br />Se seleccionou uma foto para adicionar, verifique se o servidor admite o upload de ficheiros...',
	'err_mkdir' => 'Erro ao criar o(s) directório(s)!',
	'dest_dir_ro' => 'O(s) directório(s) destino não tem permissões de escrita!',
	'err_move' => 'Impossível mover %s a %s !',
	'err_fsize_too_large' => 'O tamanho da foto que quer inserir é demasiado grande (o máximo permitido é de %s x %s)',
	'err_imgsize_too_large' => 'O tamanho do ficheiro da foto que quer inserir é demasiado grande (o máximo permitido é de %s KB)',
	'err_invalid_img' => 'O ficheiro que quer inserir não é uma imagem válida',
	'allowed_img_types' => 'Pode inserir somente %s fotos.',
	'err_insert_pic' => 'A foto \'%s\' não pode ser inserida no album ',
	'upload_success' => 'A foto foi inserida correctamente<br /><br />Será visível logo que aprovada pelos administradores.',
	'info' => 'Informação',
	'com_added' => 'Comentário adicionado',
	'alb_updated' => 'Album actualizado',
	'err_comment_empty' => 'O comentário está vazio!',
	'err_invalid_fext' => 'Somente são admitidas fotos com as seguintes extensões : <br /><br />%s.',
	'no_flood' => 'Desculpe mas é o autor/a do último comentário introduzido para esta foto<br /><br />Pode editar o comentário para modificá-lo',
	'redirect_msg' => 'Está a ser redireccionado.<br /><br /><br />Prima \'CONTINUAR\' se a página não se actualizar automáticamente',
	'upl_success' => 'A foto foi adicionada correctamente',
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
	'caption' => 'Caption',
	'fs_pic' => 'imagem em tamanho completo',
	'del_success' => 'apagada correctamente',
	'ns_pic' => 'imagem tamanho normal',
	'err_del' => 'não pode ser apagado',
	'thumb_pic' => 'thumbnail',
	'comment' => 'comentário',
	'im_in_alb' => 'fotos no album',
	'alb_del_success' => 'Album \'%s\' apagado',
	'alb_mgr' => 'Gestor de albums',
	'err_invalid_data' => 'Dados inválidos recebidos em \'%s\'',
	'create_alb' => 'Criando o album \'%s\'',
	'update_alb' => 'Actualizando album \'%s\' com o tí­tulo \'%s\' e o indice \'%s\'',
	'del_pic' => 'Apagar foto',
	'del_alb' => 'Apagar album',
	'del_user' => 'Apagar utilizador',
	'err_unknown_user' => 'O utilizador seleccionado não existe!',
	'comment_deleted' => 'O comentário foi apagado',
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
	'confirm_del' => 'Tem a certeza que quer apagar esta foto? \\n Os comentários serão tambem apagados.',
	'del_pic' => 'APAGAR ESTA FOTO',
	'size' => '%s x %s pixeis',
	'views' => '%s visualizações',
	'slideshow' => 'Slideshow',
	'stop_slideshow' => 'PARAR SLIDESHOW',
	'view_fs' => 'Prima aqui para ver a imagem em tamanho completo',
);

$lang_picinfo = array(
	'title' =>'Informação da foto',
	'Filename' => 'Nome do fichero',
	'Album name' => 'Nome do album',
	'Rating' => 'Clasificação (%s votos)',
	'Keywords' => 'Palavras chave',
	'File Size' => 'Tamanho do ficheiro',
	'Dimensions' => 'Dimensões',
	'Displayed' => 'Visualizado',
	'Camera' => 'Camera',
	'Date taken' => 'Data da la foto',
	'Aperture' => 'Abertura',
	'Exposure time' => 'Tempo de exposição',
	'Focal length' => 'Distância Focal ',
	'Comment' => 'Comentário',
        'addFav' => 'Add to Fav',  //new in cpg1.2.0
        'addFavPhrase' => 'Favourites',  //new in cpg1.2.0
        'remFav' => 'Remove from Fav',  //new in cpg1.2.0
);

$lang_display_comments = array(
	'OK' => 'OK',
	'edit_title' => 'Editar o comentário',
	'confirm_delete' => 'Tem a certeza que quer apagar o comentário?',
	'add_your_comment' => 'Adicionar um comentário',
        'name'=>'Name',  //new in cpg1.2.0
        'comment'=>'Comment',  //new in cpg1.2.0
	'your_name' => 'Nome',
);

$lang_fullsize_popup = array( 
        'click_to_close' => 'Click image to close this window',  //new in cpg1.2.0
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
	'title' => 'Enviar foto a um amigo',
	'invalid_email' => '<b>Atenção</b> : Endereço e-mail incorrecto!',
	'ecard_title' => 'Uma foto de %s para ti',
	'view_ecard' => 'Se a foto não se visualizar correctamente, prime este link',
	'view_more_pics' => 'Prime aqui para ver mais fotos!',
	'send_success' => 'A foto foi enviada',
	'send_failed' => 'O servidor não conseguiu enviar esta foto...',
	'from' => 'De',
	'your_name' => 'Nome',
	'your_email' => 'Endereço de e-mail',
	'to' => 'Para',
	'rcpt_name' => 'Nome da pessoa de destino',
	'rcpt_email' => 'Endereço de e-mail de destino',
	'greetings' => 'Título da mensagem',
	'message' => 'Mensagem',
);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
	'pic_info' => 'Informação',
	'album' => 'Album',
	'title' => 'Tí­tulo',
	'desc' => 'Descrição',
	'keywords' => 'Keywords',
	'pic_info_str' => '%sx%s - %sKB - %s vezes visualizada - %s votos',
	'approve' => 'Aprovar la foto',
	'postpone_app' => 'Enviar aprovação da foto',
	'del_pic' => 'Apagar foto',
	'reset_view_count' => 'Por a zero o contador de izualizações',
	'reset_votes' => 'Por a zero os votos',
	'del_comm' => 'Apagar comentários',
	'upl_approval' => 'Aprovar uploads',
	'edit_pics' => 'Editar fotos',
	'see_next' => 'Ir para as fotos seguintes',
	'see_prev' => 'If para as fotos anteriores',
	'n_pic' => '%s foto/s',
	'n_of_pic_to_disp' => 'Número de fotos a mostrar',
	'apply' => 'Validar as alterações'
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
	'group_name' => 'Nome do grupo',
	'disk_quota' => 'Quota de disco',
	'can_rate' => 'Podem classificar fotos',
	'can_send_ecards' => 'Podem enviar ecards',
	'can_post_com' => 'Podem colocar comentários',
	'can_upload' => 'Podem enviar fotos',
	'can_have_gallery' => 'Podem ter galeri­as pessoais',
	'apply' => 'Validar as alterações',
	'create_new_group' => 'Criar novo grupo',
	'del_groups' => 'Apagar o/os grupo(s) seleccionados',
	'confirm_del' => 'Atenção, quando apaga um grupo, los utilizadores que pertemcem a esse grupo serão transferidos ao grupo \'Registered\'!\n\n Deseja continuar?',
	'title' => 'Configurar grupos de utilizadores',
	'approval_1' => 'Aprovação album público (1)',
	'approval_2' => 'Aprovação album privado (2)',
	'note1' => '<b>(1)</b> Adicionar fotos a um album público requer aprovação dos administradores',
	'note2' => '<b>(2)</b> Adicionar fotos a um album que pertenece ao utilizador requer aprovação dos administradores',
	'notes' => 'Notas'
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
	'welcome' => 'Benvindo!'
);

$lang_album_admin_menu = array(
	'confirm_delete' => 'Tem a certeza que quer apagar este album \\nTodas as fotos e comentários serão também apagados.',
	'delete' => 'APAGAR',
	'modify' => 'MODIFICAR',
	'edit_pics' => 'EDITAR FOTOS',
);

$lang_list_categories = array(
	'home' => 'Home',
	'stat1' => '<b>[pictures]</b> fotos em <b>[albums]</b> albuns y <b>[cat]</b> categorias com <b>[comments]</b> comentários, visualizadas <b>[views]</b> vezes',
	'stat2' => '<b>[pictures]</b> fotos em <b>[albums]</b> albuns, visualizadas <b>[views]</b> vezes',
	'xx_s_gallery' => 'Galeri­a de %s',
	'stat3' => '<b>[pictures]</b> fotos em <b>[albums]</b> albuns com <b>[comments]</b> comentários, visualizadas <b>[views]</b> vezes'
);

$lang_list_users = array(
	'user_list' => 'Lista de utilizadores',
	'no_user_gal' => 'Nãoo existem utilizadores com permissões para ter albums',
	'n_albums' => '%s album(s)',
	'n_pics' => '%s foto(s)'
);

$lang_list_albums = array(
	'n_pictures' => '%s fotos',
	'last_added' => ', última adicionada em %s'
);

}

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
	'login' => 'Login',
	'enter_login_pswd' => 'Introduza o seu nome de utilizador e a sua palavra passe para entrar',
	'username' => 'Nome de utilizador',
	'password' => 'Palavra passe',
	'remember_me' => 'Lembrar-me',
	'welcome' => 'Benvindo %s ...',
	'err_login' => '*** Login incorrecto. Tentar de novo ***',
	'err_already_logged_in' => 'Já estava validado no sistema!',
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
	'logout' => 'Sair',
	'bye' => 'Volte sempre, %s ...',
	'err_not_loged_in' => 'Erro! Não está validado no sistema!',
);

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
	'upd_alb_n' => 'Modificar album %s',
	'general_settings' => 'Configurações gerais',
	'alb_title' => 'Título do album',
	'alb_cat' => 'Categori­a do album',
	'alb_desc' => 'Descrição do album',
	'alb_thumb' => 'Thumbnail do album',
	'alb_perm' => 'Permissões para este album',
	'can_view' => 'Este album pode ser visto por',
	'can_upload' => 'Os visitantes podem adicionar fotos',
	'can_post_comments' => 'Os visitantes poden adicionar comentários',
	'can_rate' => 'Os visitantes podem classificar as fotos',
	'user_gal' => 'Galeria de utilizador',
	'no_cat' => '* Sem categori­a *',
	'alb_empty' => 'O album está vazio',
	'last_uploaded' => 'Última foto adicionada',
	'public_alb' => 'Todo o mundo (album público)',
	'me_only' => 'Somente eu (album privado)',
	'owner_only' => 'Somente el dono do album (%s)',
	'groupp_only' => 'Membros do grupo \'%s\'',
	'err_no_alb_to_modify' => 'Não pode modificar nenhum album na la base de dados.',
	'update' => 'Modificar album'
);

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
	'already_rated' => 'desculpe mas já votou nesta foto',
	'rate_ok' => 'O seu voto foi contabilizado',
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
Muito embora os administradores de {SITE_NAME} tentarem eliminar ou editar qualquer material desagradável tão rapidamente quanto possível, é impossivel verificar todos os envios que se realizam. Por isso deve ter em conta que todos os envi­os feitos nesta web expressam os pontos de vista e opiniões dos seus autores e não  os dos administradores ou webmasters (excepto os adicionados por eles próprios).<br />
<br />
Concorda não adicionar nenhum material abusivo, obsceno, vulgar, escandaloso, odioso, ameaçador, de orientação sexual, ou algum outro que possa violar qualquer lei aplicável.  Concorda que o webmaster, o administrador e os acessores de { SITE_NAME } tenham o direito de iliminar ou de corrigir qualquer conteúdo em qualquer momento se o consideram necessário.  Como utilizador, concorda que  qualquer informação enviada seja armazenada nuna base de dados.  Garantindo que esta informação, não será divulgada a terceiros sem o seu consentimento.  O webmaster e o administrador não podem ser considerados responsáveis por alguma tentativa de destruição da base de dados que possa conduzir à perda da mesma.<br />
<br />
Este site utiliza cookies para armazenar a informação no seu processador.  Estes cookies servem para melhorar a navegação neste site.  O endereço de e-mail  é utilizado somente para confirmar os seus dados e a password de registo.<br />
<br />
Premindo 'Concordo' expressa o seu acordo com estas condições.
EOT;

$lang_register_php = array(
	'page_title' => 'Registo de novo utilizador',
	'term_cond' => 'Termos e condições',
	'i_agree' => 'Estou de acordo',
	'submit' => 'Enviar pedido de registo',
	'err_user_exists' => 'O nome de utilizador escolhido já existe, por favor escolha outro diferente',
	'err_password_mismatch' => 'As duas palavras-passe não são iguais, por favor volte a introduzi-las',
	'err_uname_short' => 'O nome do utilizador deve ter pelo menos 2 carecteres',
	'err_password_short' => 'A palavra-passe deve ter pelo menos 2 caracteres',
	'err_uname_pass_diff' => 'O nome de utilizador e a palavra-passe devem ser diferentes',
	'err_invalid_email' => 'O endereço de e-mail não é válido',
	'err_duplicate_email' => 'Outro utilizador já se encontra registado com o endereço de e-amil que forneceu',
	'enter_info' => 'Introduza a informação de registo',
	'required_info' => 'Informação requerida',
	'optional_info' => 'Informação opcional',
	'username' => 'Nome de utilizador',
	'password' => 'Palavra-passe',
	'password_again' => 'Reescrever palavra-passe',
	'email' => 'E-mail',
	'location' => 'Local',
	'interests' => 'Interesses',
	'website' => 'Página web',
	'occupation' => 'Ocupação',
	'error' => 'ERRO',
	'confirm_email_subject' => '%s - Confirmação de registo',
	'information' => 'Informação',
	'failed_sending_email' => 'O e-mail de confirmação de registo não pode ser enviado!',
	'thank_you' => 'Obrigado por se registar.<br /><br />Enviamos um e-mail com informação sobre a activação da sua conta para o endereço de e-mail fornecido.',
	'acct_created' => 'A sua conta de utilizador foi criada e já pode aceder ao sistema com o seu nome de utilizador e palavra-passe',
	'acct_active' => 'A sua conta de utilizador está activa e já pode aceder ao sistema com o seu nome de utilizador e palavra-passe',
	'acct_already_act' => 'A sua conta já estava activa!',
	'acct_act_failed' => 'Esta conta não pode ser activada!',
	'err_unk_user' => 'O utilizador seleccionado não existe!',
	'x_s_profile' => 'Perfil de %s',
	'group' => 'Grupo',
	'reg_date' => 'Data de registo',
	'disk_usage' => 'Uso de disco',
	'change_pass' => 'Alterar palavra passe',
	'current_pass' => 'Palavra-passe actual',
	'new_pass' => 'Nova palavra-passe',
	'new_pass_again' => 'Reescrever nova palavra passe',
	'err_curr_pass' => 'A palavra passe actual é incorrecta',
	'apply_modif' => 'Guardar as alterações',
	'change_pass' => 'Alterar palavra-passe',
	'update_success' => 'O seu perfil foi actualizado',
	'pass_chg_success' => 'A tua palavra passe foi alterada ',
	'pass_chg_error' => 'A sua palavra passe não foi alterada',
);

$lang_register_confirm_email = <<<EOT
Obrigado por se registar em {SITE_NAME}

O seu nome de utilizador é: "{USER_NAME}"
A sua palavra passe é: "{PASSWORD}"

Para terminar de activar a sua conta, deve clickar sobre o link que
aparece abaixo ou copiá-lo e colár-lo no seu browser de Internet.

{ACT_LINK}

Comprimentos.

Os administradores de {SITE_NAME}

EOT;

}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
	'title' => 'Rever comentários',
	'no_comment' => 'Não existem comentários para mostrar',
	'n_comm_del' => '%s comentário(s) apagado(s)',
	'n_comm_disp' => 'Número de comentários a mostrar',
	'see_prev' => 'Ver o anterior',
	'see_next' => 'Ver o siguiente',
	'del_comm' => 'Apagar comentários seleccionados',
);


// ------------------------------------------------------------------------- //
// File search.php - OK
// ------------------------------------------------------------------------- //

if (defined('SEARCH_PHP')) $lang_search_php = array(
	0 => 'Procorar entre todas as fotos',
);

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
	'page_title' => 'Procurar novas fotos',
	'select_dir' => 'Selecciona directório',
	'select_dir_msg' => 'Esta função permite adicionar de forma automática as fotos que carregou para o seu servidoratravés de FTP.<br /><br />Seleccione o directório para onde carregou as suas fotos',
	'no_pic_to_add' => 'Nãoo hà nenhuma foto para adicionar',
	'need_one_album' => 'Necessita de pelo menos um album para utilizar esta funcão',
	'warning' => 'Atenção',
	'change_perm' => 'O script nãoo pode escrierr neste directório, necessita alterar as suas permissões para modo 755 ou 777 antes de tentar de novo!',
	'target_album' => '<b>Colocar as fotos do directório &quot;</b>%s<b>&quot; no album </b>%s',
	'folder' => 'Pasta',
	'image' => 'Foto',
	'album' => 'Album',
	'result' => 'Resultado',
	'dir_ro' => 'Não é possível escrever. ',
	'dir_cant_read' => 'Não é possível ler. ',
	'insert' => 'Adicionar novas fotos à galeria',
	'list_new_pic' => 'Lista de novas fotos',
	'insert_selected' => 'Adicionar as fotos seleccionadas',
	'no_pic_found' => 'Não se encontrou nenhuma foto nova',
	'be_patient' => 'Por favor, sê paciente, o script necessita de tempo para adicionar as fotos',
	'notes' =>  '<ul>'.
				'<li><b>OK</b> : significa que a foto foi adicionada sem problemas'.
				'<li><b>DP</b> : significa que a foto é um duplicado e já existe na base de dados'.
				'<li><b>PB</b> : significa que a foto não pode ser adicionada, por favor verifica a configuração e as permissões dos directórios onde estão as fotos'.
				'<li>Se os icones OK, DP, PB não aparecerem, prime sobre o icone de imagem não carregada para ver o erro produzido pelo PHP'.
				'<li>Se o browser faz um timeout, prime o ícone Actualizar'.
				'</ul>',
);


// ------------------------------------------------------------------------- //
// File thumbnails.php
// ------------------------------------------------------------------------- //

// Void


// ------------------------------------------------------------------------- // 
// File banning.php  //new in cpg1.2.0
// ------------------------------------------------------------------------- // 

if (defined('BANNING_PHP')) $lang_banning_php = array( 
                'title' => 'Ban Users', 
                'user_name' => 'User Name', 
                'ip_address' => 'IP Address', 
                'expiry' => 'Expires (blank is permanent)', 
                'edit_ban' => 'Save Changes', 
                'delete_ban' => 'Delete', 
                'add_new' => 'Add New Ban', 
                'add_ban' => 'Add', 
); 

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) $lang_upload_php = array(
	'title' => 'Inserir nova foto',
	'max_fsize' => 'O tamanho máximo de fichero admitido é de %s KB',
	'album' => 'Album',
	'picture' => 'Foto',
	'pic_title' => 'Tí­tulo da foto',
	'description' => 'Descrição da foto',
	'keywords' => 'Palavras chave (separadas por espaços)',
	'err_no_alb_uploadables' => 'Desculpe, mas não há nenhum album onde seja permitido inserir novas fotos',
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
	'title' => 'Administrar utilizadores',
	'name_a' => 'Ascendente por nome',
	'name_d' => 'Descendente por nome',
	'group_a' => 'Ascendente por grupo',
	'group_d' => 'Descendente por grupo',
	'reg_a' => 'Ascendente por data de registo',
	'reg_d' => 'Descendente por data de registo',
	'pic_a' => 'Ascendente por total de fotos',
	'pic_d' => 'Descendente por total de fotos',
	'disku_a' => 'Ascendente por uso de disco',
	'disku_d' => 'Descendente por uso de disco',
	'sort_by' => 'Ordenar utilizadores por',
	'err_no_users' => 'A tabela de utilizadores está vazia!',
	'err_edit_self' => 'Não pode editar o seu próprio perfil, use a opçãon \'Meu perfil de utilizador\' para isso',
	'edit' => 'EDITAR',
	'delete' => 'APAGAR',
	'name' => 'Nome de utilizador',
	'group' => 'Grupo',
	'inactive' => 'Inactivo',
	'operations' => 'Operações',
	'pictures' => 'Fotos',
	'disk_space' => 'Espaço usado / Quota',
	'registered_on' => 'Registado no dia',
	'u_user_on_p_pages' => '%d utilizadores na %d página(s)',
	'confirm_del' => 'tem a certeza que quer apagar esta utilizador? \\nTodas as suas fotos e albuns serão tambem apagados.',
	'mail' => 'MAIL',
	'err_unknown_user' => 'O utilizador selecionado não existe!',
	'modify_user' => 'Modificar utilizador',
	'notes' => 'Notas',
	'note_list' => '<li>Se não quizer alterar a palavra-passe actual, deixe o campo "palavra-passe" vazi­o',
	'password' => 'Palavra-passe',
	'user_active' => 'O utilizador activo',
	'user_group' => 'Grupo de utilizadores',
	'user_email' => 'E-mail do utilizador',
	'user_web_site' => 'Página web do utilizador',
	'create_new_user' => 'Criar novo utilizador',
	'user_location' => 'Local do utilizador',
	'user_interests' => 'Interesses do utilizador',
	'user_occupation' => 'Ocupação do utilizador',
);

// ------------------------------------------------------------------------- // 
// File util.php  //new in cpg1.2.0
// ------------------------------------------------------------------------- // 

if (defined('UTIL_PHP')) $lang_util_php = array( 
        'title' => 'Resize pictures', 
        'what_it_does' => 'What it does', 
        'what_update_titles' => 'Updates titles from filename', 
        'what_delete_title' => 'Deletes titles', 
        'what_rebuild' => 'Rebuilds thumbnails and resized photos', 
        'what_delete_originals' => 'Deletes original sized photos replacing them with the sized version', 
        'file' => 'File', 
        'title_set_to' => 'title set to', 
        'submit_form' => 'submit', 
        'updated_succesfully' => 'updated succesfully', 
        'error_create' => 'ERROR creating', 
        'continue' => 'Process more images', 
        'main_success' => 'The file %s was successfully used as main picture', 
        'error_rename' => 'Error renaming %s to %s', 
        'error_not_found' => 'The file %s was not found', 
        'back' => 'back to main', 
        'thumbs_wait' => 'Updating thumbnails and/or resized images, please wait...', 
        'thumbs_continue_wait' => 'Continuing to update thumbnails and/or resized images...', 
        'titles_wait' => 'Updating titles, please wait...', 
        'delete_wait' => 'Deleting titles, please wait...', 
        'replace_wait' => 'Deleting originals and replacing them with resized images, please wait..', 
        'instruction' => 'Quick instructions', 
        'instruction_action' => 'Select action', 
        'instruction_parameter' => 'Set parameters', 
        'instruction_album' => 'Select album', 
        'instruction_press' => 'Press %s', 
        'update' => 'Update thumbs and/or resized photos', 
        'update_what' => 'What should be updated', 
        'update_thumb' => 'Only thumbnails', 
        'update_pic' => 'Only resized pictures', 
        'update_both' => 'Both thumbnails and resized pictures', 
        'update_number' => 'Number of processed images per click', 
        'update_option' => '(Try setting this option lower if you experience timeout problems)', 
        'filename_title' => 'Filename ⇒ Picture title', 
        'filename_how' => 'How should the filename be modified', 
        'filename_remove' => 'Remove the .jpg ending and replace _ (underscore) with spaces', 
        'filename_euro' => 'Change 2003_11_23_13_20_20.jpg to 23/11/2003 13:20', 
        'filename_us' => 'Change 2003_11_23_13_20_20.jpg to 11/23/2003 13:20', 
        'filename_time' => 'Change 2003_11_23_13_20_20.jpg to 13:20', 
        'delete' => 'Delete picture titles or original size photos', 
        'delete_title' => 'Delete picture titles', 
        'delete_original' => 'Delete original size photos', 
        'delete_replace' => 'Deletes the original images replacing them with the sized versions', 
        'select_album' => 'Select album', 
); 

?>