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
'lang_name_english' => 'Portuguese (Brazilian)',  
'lang_name_native' => 'Português (Brasileiro)', 
'lang_country_code' => 'br', 
'trans_name'=> 'Steve.H', //the name of the translator - can be a nickname 
'trans_email' => 'steve.spam@terra.com.br', //translator's email address (optional) 
'trans_website' => '', //translator's website (optional) 
'trans_date' => '2003-12-10', //the date the translation was created / last modified 
); 

$lang_charset = 'iso-8859-1';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('Bytes', 'KB', 'MB');

// Day of weeks and months
$lang_day_of_week = array('Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sab');
$lang_month = array('Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez');

// Some common strings
$lang_yes = 'Sim';
$lang_no  = 'Nao';
$lang_back = 'VOLTAR';
$lang_continue = 'CONTINUAR';
$lang_info = 'Informação';
$lang_error = 'Erro';

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$album_date_fmt =    '%d de %B de %Y';
$lastcom_date_fmt =  '%d/%m/%y às %H:%M';
$lastup_date_fmt = '%d/%m/%y';
$register_date_fmt = '%d de %B de %Y';
$lasthit_date_fmt = '%d de %B de %Y às %I:%M %p';
$comment_date_fmt =  '%d de %B de %Y às %R';

// For the word censor
$lang_bad_words = array('fudid*', 'viado*', 'veado*', 'put*', 'buceta', 'rola', 'filh* d* puta', 'vadia', 'biscate', 'cú', 'cuzinh*', 'caralho', 'piranha', 'vagabunda', 'fanculo', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*');

$lang_meta_album_names = array(
	'random' => 'Fotos Aleatórias - Selecionadas automaticamente pelo servidor, mudam a cada visualização.',
	'lastup' => 'Últimas Atualizações - As fotos mais recentes.',
	'lastcom' => 'Comentários das fotos.',
	'topn' => 'As fotos mais visualizadas.',
	'toprated' => 'Ranking das fotos - Votos/Qualificações.',
	'lasthits' => 'Últimas fotos visualizadas.',
	'search' => 'Resultado(s) da Pesquisa',
    'favpics'=> 'As fotos favoritas.', 
);

$lang_errors = array(
	'access_denied' => 'Você não tem permissão para visualizar esta página!',
	'perm_denied' => 'Você não tem permissão para executar esta operação!',
	'param_missing' => 'O Script foi executado sem os parâmetros necessários.',
	'non_exist_ap' => 'O álbum ou foto que voccê selecinou não foi encontrado!',
	'quota_exceeded' => 'O seu limite (QUOTA) de espaço é insuficiente.<br /><br />Você possui [quota]KB de espaço, suas fotos utilizam atualmente [space]KB, adicionar esta foto irá exceder o seu limite.',
	'gd_file_type_err' => 'O GD library (script) só permite o envio de fotos com extensão .JPEG e .PNG!',
	'invalid_image' => 'A imagem que você enviou está corrompida ou não pôde ser interpretada por GD library.',
	'resize_failed' => 'Impossível criar miniatura ou redimensionar a imagem.',
	'no_img_to_display' => 'Sem imagem(ns) para mostrar.',
	'non_exist_cat' => 'A categoria selecionada não existe!',
	'orphan_cat' => 'A category has a non-existing parent, runs the category manager to correct the problem.',
	'directory_ro' => 'O diretório \'%s\' está protegido, a(s) foto(s) não pode(m) ser deletada(s)!',
	'non_exist_comment' => 'O comentário selecionado não existe!',
	'pic_in_invalid_album' => 'Imagem em um álbum inexistente (%s)!?',
    'banned' => 'Você foi BANDIDO(A) deste Site!',  
    'not_with_udb' => 'This function is disabled in Coppermine because it is integrated with forum software. Either what you are trying to do is not supported in this configuration, or the function should be handled by the forum software.',  
);

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
	'alb_list_title' => 'Ir para a lista dos álbuns',
	'alb_list_lnk' => 'Lista dos Álbuns',
	'my_gal_title' => 'Ir para minha galeria pessoal',
	'my_gal_lnk' => 'Minha Galeria',
	'my_prof_lnk' => 'Meus dados',
	'adm_mode_title' => 'Alterar para o modo administrativo',
	'adm_mode_lnk' => 'Modo Administrativo',
	'usr_mode_title' => 'Alterar para modo Usuário',
	'usr_mode_lnk' => 'Modo Usuário',
	'upload_pic_title' => 'Enviar imagem para o álbum',
	'upload_pic_lnk' => 'Enviar imagem',
	'register_title' => 'Criar uma conta',
	'register_lnk' => 'Registar-se',
	'login_lnk' => 'Login',
	'logout_lnk' => 'Logout',
	'lastup_lnk' => 'Últimos envios',
	'lastcom_lnk' => 'Últimos comentários',
	'topn_lnk' => 'Mais visualizados',
	'toprated_lnk' => 'Mais votadas',
	'search_lnk' => 'Pesquisar',
    'fav_lnk' => 'Fotos Favoritas', 
);

$lang_gallery_admin_menu = array(
	'upl_app_lnk' => 'Envio aprovado',
	'config_lnk' => 'Configuração',
	'albums_lnk' => 'Álbuns',
	'categories_lnk' => 'Categorias',
	'users_lnk' => 'Usuários',
	'groups_lnk' => 'Grupos',
	'comments_lnk' => 'Comentários',
	'searchnew_lnk' => 'Enviar fotos',
    'util_lnk' => 'Redimensionar fotos',  
    'ban_lnk' => 'Banir usuário(s)',  
);

$lang_user_admin_menu = array(
	'albmgr_lnk' => 'Criar / ordenar meus álbuns',
	'modifyalb_lnk' => 'Modificar meus álbuns',
	'my_prof_lnk' => 'Meus Dados',
);

$lang_cat_list = array(
	'category' => 'Categoria',
	'albums' => 'Álbuns',
	'pictures' => 'Fotos',
);

$lang_album_list = array(
	'album_on_page' => 'Existem %d álbuns, mostrados em %d páginas'
);

$lang_thumb_view = array(
	'date' => 'DATA', //Sort by filename and title
    'name' => 'NOME', 
    'title' => 'TÍTUTLO', 
	'sort_da' => 'Mostar por data ascendente (0-9)',
	'sort_dd' => 'Mostar por data descendente (9-0)',
	'sort_na' => 'Mostar por nome ascendente (A-Z)',
	'sort_nd' => 'Mostar por nome descendente (Z-A)',
    'sort_ta' => 'Mostrar por título ascendente (A-Z)',  
    'sort_td' => 'Mostrar por título descendente (Z-A)',  
	'pic_on_page' => '%d fotos, mostradas em %d páginas',
	'user_on_page' => '%d usuários na(s) %d página(s)'
);

$lang_img_nav_bar = array(
	'thumb_title' => 'Retornar para a página de miniaturas',
	'pic_info_title' => 'Mostar/esconder informações da imagem',
	'slideshow_title' => 'Slideshow - Iniciar',
	'ecard_title' => 'Envie esta foto como E-Card',
	'ecard_disabled' => 'O envio de E-cards está desabilitado.',
	'ecard_disabled_msg' => 'Você não possui permissão para enviar E-cards!',
	'prev_title' => 'foto anterior',
	'next_title' => 'próxima foto',
	'pic_pos' => 'FOTO - %s/%s',
);

$lang_rate_pic = array(
	'rate_this_pic' => 'Vote/Qualifique esta foto',
	'no_votes' => '(seja a primeira pessoa a votar).',
	'rating' => '(Qualificação atual : %s / 5 dos %s votos)',
	'rubbish' => 'Péssima!',
	'poor' => 'Ruim!',
	'fair' => 'Razoável',
	'good' => 'Muito Boa',
	'excellent' => 'Excelente!',
	'great' => 'Espetacular!',
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
	CRITICAL_ERROR => 'ERRO CRÍTICO',
	'file' => 'Arquivo: ',
	'line' => 'Linha: ',
);

$lang_display_thumbnails = array(
	'filename' => 'Arquivo: ',
	'filesize' => 'Tamanho: ',
	'dimensions' => 'Dimensões: ',
	'date_added' => 'Enviada: '
);

$lang_get_pic_data = array(
	'n_comments' => '%s comentários',
	'n_views' => '%s visualizações',
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
	'Question' => 'Dúvida',
	'Very Happy' => 'Muito Feliz',
	'Smile' => 'Sorriso',
	'Sad' => 'Triste',
	'Surprised' => 'Surpreso',
	'Shocked' => 'Chocado',
	'Confused' => 'Confuso',
	'Cool' => 'legal',
	'Laughing' => 'Sorridente',
	'Mad' => 'Louco',
	'Razz' => 'Razz',
	'Embarassed' => 'Envergonhado',
	'Crying or Very sad' => 'Muito triste',
	'Evil or Very Mad' => 'Malvado',
	'Twisted Evil' => 'Muito Malvado',
	'Rolling Eyes' => 'Rolando os olhos',
	'Wink' => 'Piscando',
	'Idea' => 'Idéia',
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
	0 => 'Deixando o modo administrativo...',
	1 => 'Entrando no modo administrativo...',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
	'alb_need_name' => 'Álbuns precisam ter um nome !',
	'confirm_modifs' => 'Tem certeza que deseja realizar as modificações ?',
	'no_change' => 'Você não fez nenhuma mudança  !',
	'new_album' => 'Novo álbum',
	'confirm_delete1' => 'Tem certeza de querer remover este álbum ?',
	'confirm_delete2' => '\nTodas as imagens e comentários serão perdidos !',
	'select_first' => 'Primeiro selecione um álbum',
	'alb_mrg' => 'Gerenciador de álbuns',
	'my_gallery' => '* Minha Galeria *',
	'no_category' => '* Sem categoria *',
	'delete' => 'Apagar',
	'new' => 'Novo',
	'apply_modifs' => 'Aplicar modificações',
	'select_category' => 'Selecione uma categoria',
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
	'miss_param' => 'Parametros requeridos para \'%s\'operação não fornecida !',
	'unknown_cat' => 'A ctegoria selecionada não existe em nossa base de dados',
	'usergal_cat_ro' => 'A categoria do usuário não pode ser excluída !',
	'manage_cat' => 'Gerenciar categorias',
	'confirm_delete' => 'Você tem certeza que deseja EXCLUIR  esta categoria ? ',
	'category' => 'Categoria',
	'operations' => 'Operações',
	'move_into' => 'Mover em',
	'update_create' => 'Atualizar/Criar categoria',
	'parent_cat' => 'Categoria parente',
	'cat_title' => 'Título da categoria',
	'cat_desc' => 'Descrição da categoria'
);

// ------------------------------------------------------------------------- //
// File config.php
// ------------------------------------------------------------------------- //

if (defined('CONFIG_PHP')) $lang_config_php = array(
	'title' => 'Configuração',
	'restore_cfg' => 'Restaurar configurações originais.',
	'save_cfg' => 'Salvar nova configuração.',
	'notes' => 'Anotações.',
	'info' => 'Informação.',
	'upd_success' => 'Configuração do catálogo atualizada.',
	'restore_success' => 'Configuração original restaurada!',
	'name_a' => 'Nome ascendente.',
	'name_d' => 'Nome descendente.',
    'title_a' => 'Titúlo ascendente.',  
    'title_d' => 'Título descendente.',  
	'date_a' => 'Data Ascendente',
	'date_d' => 'Data descendente',
    'th_any' => 'Max Aspect',
    'th_ht' => 'Altura',
    'th_wd' => 'Largura',
);

if (defined('CONFIG_PHP')) $lang_config_data = array(
	'General settings',
	array('Gallery name', 'gallery_name', 0),
	array('Gallery description', 'gallery_description', 0),
	array('Gallery administrator email', 'gallery_admin_email', 0),
	array('Target address for the \'See more pictures\' link in e-cards', 'ecards_more_pic_target', 0),
	array('Language', 'lang', 5),
	array('Theme', 'theme', 6),

	'Album list view',
	array('Width of the main table (pixels or %)', 'main_table_width', 0),
	array('Number of levels of categories to display', 'subcat_level', 0),
	array('Number of albums to display', 'albums_per_page', 0),
	array('Number of columns for the album list', 'album_list_cols', 0),
	array('Size of thumbnails in pixels', 'alb_list_thumb_size', 0),
	array('The content of the main page', 'main_page_layout', 0),
        array('Show first level album thumbnails in categories','first_level',1),  

	'Thumbnail view',
	array('Number of columns on thumbnail page', 'thumbcols', 0),
	array('Number of rows on thumbnail page', 'thumbrows', 0),
	array('Maximum number of tabs to display', 'max_tabs', 0),
	array('Display picture caption (in addition to title) below the thumbnail', 'caption_in_thumbview', 1),
	array('Display number of comments below the thumbnail', 'display_comment_count', 1),
	array('Default sort order for pictures', 'default_sort_order', 3),
	array('Minimum number of votes for a picture to appear in the \'top-rated\' list', 'min_votes_for_rating', 0),

	'Image view &amp; Comment settings',
	array('Width of the table for picture display (pixels or %)', 'picture_table_width', 0),
	array('Picture information are visible by default', 'display_pic_info', 1),
	array('Filter bad words in comments', 'filter_bad_words', 1),
	array('Allow smiles in comments', 'enable_smilies', 1),
	array('Max length for an image description', 'max_img_desc_length', 0),
	array('Max number of characters in a word', 'max_com_wlength', 0),
	array('Max number of lines in a comment', 'max_com_lines', 0),
	array('Maximum length of a comment', 'max_com_size', 0),
        array('Show film strip', 'display_film_strip', 1),  
        array('Number of items in film strip', 'max_film_strip_items', 0), 

	'Pictures and thumbnails settings',
	array('Quality for JPEG files', 'jpeg_qual', 0),
        array('Max dimension of a thumbnail <b>*</b>', 'thumb_width', 0),  
        array('Use dimension ( width or height or Max aspect for thumbnail )<b>*</b>', 'thumb_use', 7),  
	array('Create intermediate pictures','make_intermediate',1),
	array('Max width or height of an intermediate picture <b>*</b>', 'picture_width', 0),
	array('Max size for uploaded pictures (KB)', 'max_upl_size', 0),
	array('Max width or height for uploaded pictures (pixels)', 'max_upl_width_height', 0),

	'User settings',
	array('Allow new user registrations', 'allow_user_registration', 1),
	array('User registration requires email verification', 'reg_requires_valid_email', 1),
	array('Allow two users to have the same email address', 'allow_duplicate_emails_addr', 1),
	array('Users can can have private albums', 'allow_private_albums', 1),

	'Custom fields for image description (leave blank if unused)',
	array('Field 1 name', 'user_field1_name', 0),
	array('Field 2 name', 'user_field2_name', 0),
	array('Field 3 name', 'user_field3_name', 0),
	array('Field 4 name', 'user_field4_name', 0),

	'Pictures and thumbnails advanced settings',
        array('Show private album Icon to unlogged user','show_private',1),  
	array('Characters forbidden in filenames', 'forbiden_fname_char',0),
	array('Accepted file extensions for uploaded pictures', 'allowed_file_extensions',0),
	array('Method for resizing images','thumb_method',2),
	array('Path to ImageMagick \'convert\' utility (example /usr/bin/X11/)', 'impath', 0),
	array('Allowed image types (only valid for ImageMagick)', 'allowed_img_types',0),
	array('Command line options for ImageMagick', 'im_options', 0),
	array('Read EXIF data in JPEG files', 'read_exif_data', 1),
	array('The album directory <b>*</b>', 'fullpath', 0),
	array('The directory for user pictures <b>*</b>', 'userpics', 0),
	array('The prefix for intermediate pictures <b>*</b>', 'normal_pfx', 0),
	array('The prefix for thumbnails <b>*</b>', 'thumb_pfx', 0),
	array('Default mode for directories', 'default_dir_mode', 0),
	array('Default mode for pictures', 'default_file_mode', 0),

	'Cookies &amp; Charset settings',
	array('Name of the cookie used by the script', 'cookie_name', 0),
	array('Path of the cookie used by the script', 'cookie_path', 0),
	array('Character encoding', 'charset', 4),

	'Miscellaneous settings',
	array('Enable debug mode', 'debug_mode', 1),

	'<br /><div align="center">(*) Fields marked with * must not be changed if you already have pictures in your gallery</div><br />'
);

// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
	'empty_name_or_com' => 'Você não preencheu o seu nome!',
	'com_added' => 'Sua conta foi criada!',
	'alb_need_title' => 'Você deve definir um nome para o álbum!',
	'no_udp_needed' => 'Atualização não necessária.',
	'alb_updated' => 'O álbum foi atualizado!',
	'unknown_album' => 'O álbum selecionado não existe ou você não tem permissão para enviar imagens para ele',
	'no_pic_uploaded' => 'Nenhuma imagem enviada !<br /><br />Se você realmente selecionaou uma imagem para enviar, verifique se o servidor permite envios.',
	'err_mkdir' => 'Falha ao criar o diretório %s !',
	'dest_dir_ro' => 'Diretório de destino %s não pode ser gravado pelo script !',
	'err_move' => 'Impossível mover %s para %s !',
	'err_fsize_too_large' => 'A imagem que você está tentando enviar é muito grande (máximo permitido %s x %s) !',
	'err_imgsize_too_large' => 'O tamanho da imagem é maior que o permitido (máximo permitido %s KB) !',
	'err_invalid_img' => 'O arquivo que você está tentando enviar não é um arquivo de imagem válido !',
	'allowed_img_types' => 'Você só pode enviar %s imagens.',
	'err_insert_pic' => 'A imagem \'%s\' não pode ser inserida no álbum ',
	'upload_success' => 'Sua imagem foi enviada com sucesso<br /><br />Porém só será visível após a aprovação do Administrador.',
	'info' => 'Informação',
	'com_added' => 'Comentário adicionado com sucesso!',
	'alb_updated' => 'Álbum atualizado',
	'err_comment_empty' => 'Seu comentário está vazio!',
	'err_invalid_fext' => 'Somente os arquivos com as seguines extenções são permitidos : <br /><br />%s.',
	'no_flood' => 'Desculpe mas você é o último autor a enviar um comentário<br /><br />Edite o comentário se deseja alterá-lo',
	'redirect_msg' => 'Você está sendo redirecionado.<br /><br /><br />Clique \'CONTINUE\' se a página não se atualizar automaticamente',
	'upl_success' => 'Sua imagem foi adicionada com sucesso',
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
	'caption' => 'Sub-Título',
	'fs_pic' => 'tamanho total da imagem',
	'del_success' => 'removido com sucesso',
	'ns_pic' => 'tamanho normal da imagem',
	'err_del' => 'não pode ser escluído',
	'thumb_pic' => 'miniatura',
	'comment' => 'comentário',
	'im_in_alb' => 'imagem no álbum',
	'alb_del_success' => 'Álbum \'%s\' REMOVIDO',
	'alb_mgr' => 'Gerenciador de álbuns',
	'err_invalid_data' => 'Dados recebidos inválidos \'%s\'',
	'create_alb' => 'Criando álbuns \'%s\'',
	'update_alb' => 'Atualizando álbuns \'%s\' título \'%s\' índice \'%s\'',
	'del_pic' => 'Remover imagem',
	'del_alb' => 'Remover álbum',
	'del_user' => 'Remover usuário',
	'err_unknown_user' => 'O usuário selecionado não existe !',
	'comment_deleted' => 'O comentário foi removido com sucesso',
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
	'confirm_del' => 'Tem certeza que deseja EXCLUIR  esta imagem ? \\nComentários vinculados também serão excluídos.',
	'del_pic' => 'DELETAR ESTA FOTO',
	'size' => '%s x %s pixels',
	'views' => '%s vezes',
	'slideshow' => 'Slideshow',
	'stop_slideshow' => 'PARAR SLIDESHOW',
	'view_fs' => 'Clique aqui para ampliar a foto.',
);

$lang_picinfo = array(
	'title' =>'INFORMAÇÕES SOBRE ESTA FOTO',
	'Filename' => 'Nome do arquivo',
	'Album name' => 'Álbum em que se encontra',
	'Rating' => 'Classificação (%s votos)',
	'Keywords' => 'Palavras-chave',
	'File Size' => 'Tamanho da foto (Kbytes)',
	'Dimensions' => 'Dimensões (tamanho)',
	'Displayed' => 'Esta foto já foi visualizada',
	'Camera' => 'Camera:',
	'Date taken' => 'Data da foto:',
	'Aperture' => 'Abertura:',
	'Exposure time' => 'Tempo de exposição:',
	'Focal length' => 'Largura focal:',
	'Comment' => 'Comentários:',
    'addFav' => 'Adicionar à Favoritas',  
    'addFavPhrase' => 'Favoritas',  
    'remFav' => 'Remover das Favoritas',  
);

$lang_display_comments = array(
	'OK' => 'Adicionar',
	'edit_title' => 'Editar este comentário.',
	'confirm_delete' => 'Tem certeza que deseja REMOVER este comentário?',
	'add_your_comment' => 'Adicione o seu comentário',
    'name'=>'Nome',  
    'comment'=>'Comentário',  
	'your_name' => 'Seu nome',
);

$lang_fullsize_popup = array( 
        'click_to_close' => 'Clique sobre a foto para fechar esta janela.',  
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
	'title' => 'Enviar um E-card.',
	'invalid_email' => '<b>Aviso</b> : endereço eletrônico (e-mail) inválido!',
	'ecard_title' => 'E-Card do %s para você',
	'view_ecard' => 'Clique aqui caso você não esteja conseguindo visualizar a foto.',
	'view_more_pics' => 'Clique aqui para ver mais fotos!',
	'send_success' => 'Seu E-card foi enviado com sucesso!',
	'send_failed' => 'Desculpe, mas o servidor não pôde enviar seu E-card.',
	'from' => 'Remetente',
	'your_name' => 'Seu nome:',
	'your_email' => 'Seu e-mail:',
	'to' => 'Para',
	'rcpt_name' => 'Destinatário:',
	'rcpt_email' => 'E-mail do destinatário:',
	'greetings' => 'Assunto:',
	'message' => 'Mensagem',
);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
	'pic_info' => 'Picture&nbsp;info',
	'album' => 'Álbum',
	'title' => 'Título',
	'desc' => 'Descrição',
	'keywords' => 'Palavras-chave',
	'pic_info_str' => '%sx%s - %sKB - %s views - %s votes',
	'approve' => 'Aprovar fotos',
	'postpone_app' => 'Postpone approval',
	'del_pic' => 'Apagar imagem',
	'reset_view_count' => 'Zerar contador',
	'reset_votes' => 'Zerar votos',
	'del_comm' => 'Excluir comentários',
	'upl_approval' => 'Aprovar envio',
	'edit_pics' => 'Editar fotos',
	'see_next' => 'Ver próximas fotos',
	'see_prev' => 'Ver fotos anteriores',
	'n_pic' => '%s imagens',
	'n_of_pic_to_disp' => 'Número de fotos a mostrar',
	'apply' => 'Aplicar modificações'
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
	'group_name' => 'Nome do Grupo',
	'disk_quota' => 'Quota de disco',
	'can_rate' => 'Pode avaliar imagens',
	'can_send_ecards' => 'Pode enviar e-cards',
	'can_post_com' => 'Pode enviar comentários',
	'can_upload' => 'Pode enviar imagens',
	'can_have_gallery' => 'Pode ter uma galeria pessoal',
	'apply' => 'Aplicar modificações',
	'create_new_group' => 'Criar novo grupo',
	'del_groups' => 'Apagar grupo(s) selecionado(s)',
	'confirm_del' => 'CUIDADO: Ao remover um grupo seu conteúdo será transferido para \'Registered\' !\n\nquer continuar ?',
	'title' => 'Gerenciar grupos',
	'approval_1' => 'Aprovação pública (1)',
	'approval_2' => 'Aaprovação privada (2)',
	'note1' => '<b>(1)</b> Envios para um álbum público requerer aprovação do administrador',
	'note2' => '<b>(2)</b> Envios requerem aprovação do administrador',
	'notes' => 'Anotações'
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
	'welcome' => 'Bem-vindo(a)!'
);

$lang_album_admin_menu = array(
	'confirm_delete' => 'Tem certeza que deseja EXCLUIR este álbum ? \\nTodas as imagens e comentários serão excluídos.',
	'delete' => 'EXCLUIR',
	'modify' => 'PROPRIEDADES',
	'edit_pics' => 'EDITAR IMAGENS',
);

$lang_list_categories = array(
	'home' => 'Home',
	'stat1' => '<b>Statísticas:</b> Existem <b>[pictures]</b> fotos, <b>[albums]</b> álbuns e <b>[cat]</b> categorias com <b>[comments]</b> comentários, totalizando <b>[views]</b> visualizações.',
	'stat2' => '<b>[pictures]</b> imagens em <b>[albums]</b> álbuns vistos <b>[views]</b> vezes',
	'xx_s_gallery' => '%s\'s Galeria',
	'stat3' => '<b>[pictures]</b> fotos <b>[albums]</b> álbuns <b>[comments]</b> comentários <b>[views]</b> visualizações'
);

$lang_list_users = array(
	'user_list' => 'Lista de usuários',
	'no_user_gal' => 'Nenhum usuário permitido a ter álbuns',
	'n_albums' => '%s álbum(s)',
	'n_pics' => '%s imagem(s)'
);

$lang_list_albums = array(
	'n_pictures' => 'Possui %s fotos',
	'last_added' => ', atualizado em %s'
);

}

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
	'login' => 'Login',
	'enter_login_pswd' => 'Insira seu nome de usuário e senha para entrar.',
	'username' => 'Usuário',
	'password' => 'Senha',
	'remember_me' => 'Lembrar',
	'welcome' => 'Bem-Vindo(a) %s !',
	'err_login' => '*** ERRO na Autenticação! Verifique os dados fornecidos e tente novamente! ***',
	'err_already_logged_in' => 'Você já está Logado.',
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
	'logout' => 'Logout',
	'bye' => 'LOGOUT Efetuado com sucesso, até logo %s .',
	'err_not_loged_in' => 'Você nem está Logado!',
);

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
	'upd_alb_n' => 'Atualizar álbum %s',
	'general_settings' => 'Configurações gerais',
	'alb_title' => 'Título do álbum',
	'alb_cat' => 'Categoria do álbum',
	'alb_desc' => 'Descrição do álbum',
	'alb_thumb' => 'Miniatura do álbum',
	'alb_perm' => 'Permissões para este álbum',
	'can_view' => 'Álbum pode ser visto por',
	'can_upload' => 'Visitantes podem enviar imagens',
	'can_post_comments' => 'Visitantes podem enviar comentários',
	'can_rate' => 'Visitantes podem avaliar imagens',
	'user_gal' => 'Galeria do Usuário',
	'no_cat' => '* Sem categoria *',
	'alb_empty' => 'Álbum vazio',
	'last_uploaded' => 'Último envio',
	'public_alb' => 'Todos (album público)',
	'me_only' => 'Apenas eu',
	'owner_only' => 'Proprietário (%s) apenas',
	'groupp_only' => 'Membros do  grupo\'%s\' ',
	'err_no_alb_to_modify' => 'Nenhum album que você pode modificar na base de dados .',
	'update' => 'Atualizar álbum'
);

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
	'already_rated' => 'Você já votou nesta foto! (Apenas 1 voto por foto).',
	'rate_ok' => 'Seu voto foi registrado!',
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT

Mesmo com todo o esforço e atenção dos administradores/webmasters do { SITE_NAME } para eliminarem ou editarem qualquer tipo de material desagradável o mais rápido possível, é impossivel verificar todos os envios realizados. Em razão disto, todo o conteúdo do { SITE_NAME } são de total responsabilidade de seus autores (quem enviou) e não dos administradores/webmasters (salvo se enviados por eles mesmos).
<br />
Você concorda não adicionar/enviar nenhum tipo de material abusivo, obsceno, vulgar, escandaloso, ameaçador, pornográfico e/ou de orientação sexual, ou qualquer outro tipo de material punível por Lei. Concorda que os administradores/webmasters do { SITE_NAME } têm o direito de eliminar, alterar ou corrigir qualquer conteúdo à qualquer momento, caso considerem o mesmo abusivo. Como usuário, concorda que todas as suas infmorações serão armazenadas em uma base de dados, a qual não será negociada, trocada ou fornecida à terceiros sob hipótese alguma. Os administradores/webmasters deste site, não são responsáveis por eventuais falhas/ataques do sistema que venham a ocasionar qualquer tipo de perda.
<br />
Este site utiliza cookies para armazenar informações em seu processador, estes cookies servem para melhorar a sua navegação. O seu endereço de e-mail será utilizado apenas para confirmação de dados como Nome de Usuário e Senha. Você deverá utilizar o { SITE_NAME } como um privilégio e não como um direito.
<br />
Ao optar por 'EU ACEITO' você estará concordando com todos os termos acima citados.
EOT;

$lang_register_php = array(
	'page_title' => 'REGISTRO DE USUÁRIO',
	'term_cond' => 'Termos e condições',
	'i_agree' => 'EU ACEITO',
	'submit' => 'enviar registro',
	'err_user_exists' => 'Usuário já existente, escolha outro usuário.',
	'err_password_mismatch' => 'As senhas digitas não conferem. Confira-as novamente.',
	'err_uname_short' => 'O nome de usuário deve conter no mínimo 2 caracteres!',
	'err_password_short' => 'Sua senha deve conter no mínimo 2 caracteres!',
	'err_uname_pass_diff' => 'O nome de usuário e senha devem ser DIFERENTES!',
	'err_invalid_email' => 'E-Mail Inválido!',
	'err_duplicate_email' => 'O e-mail informado já está sendo utilizado! Informe outro E-Mail.',
	'enter_info' => 'Entre com as informações de registro',
	'required_info' => 'Informação Obrigatória.',
	'optional_info' => 'Informação Opcional.',
	'username' => 'Usuário',
	'password' => 'Senha',
	'password_again' => 'Repita a senha',
	'email' => 'E-mail',
	'location' => 'Endereço',
	'interests' => 'Interesses',
	'website' => 'Home-page',
	'occupation' => 'Profissão',
	'error' => 'ERRO',
	'confirm_email_subject' => '%s - CONFIRMAÇÃO DE REGISTRO',
	'information' => 'Informação',
	'failed_sending_email' => 'O e-mail de confirmação de registro não pôde ser enviado !',
	'thank_you' => 'Obrigado pr se registrar.<br /><br />As informações para finalizar seu registro foram enviadas para seu e-mail. Verifique agora ou aguarde uns instantes.',
	'acct_created' => 'Sua conta foi criada. Para acessar meu álbum virtual você deve fornecer seu nome de usuário e sua senha',
	'acct_active' => 'Sua conta já está ativa. Entre com seu nome de usuário e senha para acessar os dados do catálogo',
	'acct_already_act' => 'Sua conta já está ativada!',
	'acct_act_failed' => 'Esta conta não foi ativada ainda, cheque o seu e-mail primeiro!',
	'err_unk_user' => 'Usuário selecionado não existe !',
	'x_s_profile' => '%s\'s perfil',
	'group' => 'Grupo',
	'reg_date' => 'PArticipante',
	'disk_usage' => 'Uso do disco',
	'change_pass' => 'Alterar senha',
	'current_pass' => 'Senha atual',
	'new_pass' => 'Nova senha',
	'new_pass_again' => 'Nova senha de novo',
	'err_curr_pass' => 'Senha atual INCORRETA',
	'apply_modif' => 'Aplicar modificações',
	'change_pass' => 'Alterar minha senha',
	'update_success' => 'Seus dados foram atualizadsos',
	'pass_chg_success' => 'Sua senha foi alterada',
	'pass_chg_error' => 'Sua senha não foi alterada',
);

$lang_register_confirm_email = <<<EOT
Obrigado por registrar-se no {SITE_NAME}

Guarde este e-mail para futura referências.

Seu usuário é : "{USER_NAME}"
Sua senha é : "{PASSWORD}"

Clique no link abaixo ou copie e cole no seu Navegador para acessar o meu álbum virtual.

{ACT_LINK}

Seja bem-vindo(a) e divirta-se!

Administrador
{SITE_NAME}

Atenção: Este é um e-mail automático, por favor, NÃO RESPONDA.

EOT;

}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
	'title' => 'Revisar comentários',
	'no_comment' => 'Não há comentários para se revisar',
	'n_comm_del' => '%s comentário(s) removido',
	'n_comm_disp' => 'Número de comentários ',
	'see_prev' => 'Ver anterior',
	'see_next' => 'Ver próximo',
	'del_comm' => 'Excluir os comentários selecionados',
);


// ------------------------------------------------------------------------- //
// File search.php - OK
// ------------------------------------------------------------------------- //

if (defined('SEARCH_PHP')) $lang_search_php = array(
	0 => 'Pesquisar na coleção de fotos',
);

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
	'page_title' => 'Pesquisar novas imagens',
	'select_dir' => 'Selecionar diretório',
	'select_dir_msg' => 'Esta função lhe permite enviar diversas imagens ao mesmo tempo.<br /><br />Selecione o diretório das imagens',
	'no_pic_to_add' => 'Não há imagens para enviar',
	'need_one_album' => 'Você precisa ter pelo menos um álbum para usar esta função',
	'warning' => 'CUIDADO',
	'change_perm' => 'O script não pode gravar neste diretório que deve possuir permissão 755 ou 777 !',
	'target_album' => '<b>Colocar imagens do &quot;</b>%s<b>&quot; em </b>%s',
	'folder' => 'Pasta',
	'image' => 'Imagem',
	'album' => 'Álbum',
	'result' => 'Resultado',
	'dir_ro' => 'Não gravável. ',
	'dir_cant_read' => 'Não pode ser lido. ',
	'insert' => 'Adicionando novas fotos à galeria',
	'list_new_pic' => 'Lista das novas fotos',
	'insert_selected' => 'Inserir fotos selecionadas',
	'no_pic_found' => 'Não há novas foto',
	'be_patient' => 'Agurade, isto pode levar alguns instantes',
	'notes' =>  '<ul>'.
				'<li><b>OK</b> : Significa que a foto foi enviada com sucesso'.
				'<li><b>DP</b> : Significa que a foto já existe (o mesmo nome de arquivo)'.
				'<li><b>PB</b> : significa que a foto não pôde ser enviada. Verifique suas permissões.'.
				'<li>Se o OK, DP, PB \'signs\' não aparecem, clique na imagem com problema para receber a mensagem do erro'.
				'<li>Se você receber a mensagem TIMEOUT, recarrege/reload a página'.
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
                'title' => 'Banir usuário(s)', 
                'user_name' => 'Username', 
                'ip_address' => 'Endereço IP', 
                'expiry' => 'Temporário (deixado em branco será considerado BAN Permanente)', 
                'edit_ban' => 'Salvar', 
                'delete_ban' => 'Apagar', 
                'add_new' => 'Adicionar um novo BAN', 
                'add_ban' => 'Adicionar', 
); 

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) $lang_upload_php = array(
	'title' => 'Envio de Foto',
	'max_fsize' => 'Tamanho máximo da foto permitido: %s KB',
	'album' => 'Álbum',
	'picture' => 'Imagem',
	'pic_title' => 'Título',
	'description' => 'Descrição',
	'keywords' => 'Palavras-chave (separar somente por espaços)',
	'err_no_alb_uploadables' => 'Desculpe, mas você não está autorizado(a) a enviar fotos para este álbum',
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
	'title' => 'Gerenciar usuários',
	'name_a' => 'Nome Ascendente',
	'name_d' => 'Nome Descendente',
	'group_a' => 'Grupo Ascendente',
	'group_d' => 'Grupo Descendente',
	'reg_a' => 'Data de registro Ascendente',
	'reg_d' => 'Data de registro Descendente',
	'pic_a' => 'Contagem de imagens ascendente',
	'pic_d' => 'Constagem de imagem descendente',
	'disku_a' => 'Uso de disco ascendente',
	'disku_d' => 'Uso de disco descendente',
	'sort_by' => 'Listar usuários por',
	'err_no_users' => 'Tabela de usuários está vazia !',
	'err_edit_self' => 'Você não pode alterar os dados \'My profile\' ',
	'edit' => 'EDITAR',
	'delete' => 'EXCLUIR',
	'name' => 'Usuário',
	'group' => 'Grupo',
	'inactive' => 'Inativo',
	'operations' => 'Operações',
	'pictures' => 'Imagens',
	'disk_space' => 'Espaço usado / Quota',
	'registered_on' => 'Registrado em',
	'u_user_on_p_pages' => '%d usuários em %d página(s)',
	'confirm_del' => 'Tem certeza que quer EXCLUIR este usuário ? \\nTodas as imagens e álbuns dele serão removidas.',
	'mail' => 'MAIL',
	'err_unknown_user' => 'Usuário selecionado não existe !',
	'modify_user' => 'Modificar usuário',
	'notes' => 'Notas',
	'note_list' => '<li>Se você não deseja alterar sua senha, deixe o campo em branco',
	'password' => 'Senha',
	'user_active' => 'Usuário é ativo',
	'user_group' => 'GBrupo de usuários',
	'user_email' => 'E-mail do usuário',
	'user_web_site' => 'Site do usuário',
	'create_new_user' => 'Criar novo usuário',
	'user_location' => 'Endereço',
	'user_interests' => 'Interesse',
	'user_occupation' => 'Ocupação',
);

// ------------------------------------------------------------------------- // 
// File util.php  
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
        'filename_title' => 'Filename ? Picture title', 
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