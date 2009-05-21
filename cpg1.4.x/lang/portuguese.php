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

if (!defined('IN_COPPERMINE')) { die('Not in Coppermine...');}

// info about translators and translated language
$lang_translation_info = array(
  'lang_name_english' => 'Portuguese', //cpg1.4
  'lang_name_native' => 'Português', //cpg1.4
  'lang_country_code' => 'pt', //cpg1.4
  'trans_name'=> 'Pedro Cotter',
  'trans_email' => 'pcotter@pcotter.com',
  'trans_website' => 'http://www.pcotter.com/',
  'trans_date' => '2006.01.06',
);

$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('Bytes', 'KB', 'MB');


// Day of weeks and months
$lang_day_of_week = array('Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sab');
$lang_month = array('Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez');

// Some common strings
$lang_yes = 'Sim';
$lang_no  = 'Não';
$lang_back = 'VOLTAR';
$lang_continue = 'CONTINUAR';
$lang_info = 'Informação';
$lang_error = 'Erro';
$lang_check_uncheck_all = 'marcar/desmarcar tudo'; //cpg1.4

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$album_date_fmt =    '%B %d, %Y';
$lastcom_date_fmt =  '%m/%d/%y at %H:%M';
$lastup_date_fmt = '%B %d, %Y';
$register_date_fmt = '%B %d, %Y';
$lasthit_date_fmt = '%B %d, %Y at %I:%M %p';
$comment_date_fmt =  '%B %d, %Y at %I:%M %p';
$log_date_fmt = '%B %d, %Y at %I:%M %p'; //cpg1.4

// For the word censor
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*','foda*', 'cu', 'otario', 'bicha', 'caralho', 'kct*', 'rola', 'porra', 'merda', 'idiota', 'otario', 'tabacudo', 'rola', 'buceta','tabacuda', 'fuck', 'lesbica', 'gay', 'bixa', 'frango', 'burro');

$lang_meta_album_names = array(
  'random' => 'Imagens Aleatórias',
	'lastup' => 'Últimas Imagens Adicionadas',
	'lastalb'=> 'Últimos Álbuns Actualizados',
	'lastcom' => 'Últimos Comentários',
	'topn' => 'Fotos Mais Vistas',
	'toprated' => 'Imagens mais Populares',
	'lasthits' => 'Últimas Imagens Vistas',
	'search' => 'Resultado da Pesquisa',
	'favpics'=> 'Imagens Favoritas',  //cpg1.4
);

$lang_errors = array(
  'access_denied' => 'Não tem permissão para visualizar esta página.',
  'perm_denied' => 'Não tem permissão para executar esta operação.',
  'param_missing' => 'Script executado com falta de parâmentos.',
  'non_exist_ap' => 'O álbum ou foto que seleccionou não foi encontrado!',
  'quota_exceeded' => 'A quota de espaço para armazenamento excedeu o limite<br /><br />Possui [quota]KB de espaço e as suas fotos actualmente utilizam [space]KB, se adicionar este ficheiro irá ultrapassar o limite.',
  'gd_file_type_err' => 'Estamos a usar um sistema que só permite fotos JPEG e PNG.',
  'invalid_image' => 'A foto que enviou está corrompida ou não pode ser 
interpretada pela biblioteca GD',
  'resize_failed' => 'Não foi possível criar a miniatura ou redimensionar a foto.',
  'no_img_to_display' => 'Sem fotos para exibir',
  'non_exist_cat' => 'A categoria seleccionada não existe',
  'orphan_cat' => 'A categoria tem um parâmento que não existe, vá para ao gestor de categorias e corrija o problema!',
  'directory_ro' => 'O Diretório \'%s\' não é gravável, as fotos não podem ser apagadas',
  'non_exist_comment' => 'O comentário seleccionado não existe.',
  'pic_in_invalid_album' => 'Foto num álbum inexistente (%s)!?',
  'banned' => 'Esta presentemente expulso deste site.',
  'not_with_udb' => 'Função desactivada na Galeria. O que está a tentar fazer não é suportado na presente configuração.',
  'offline_title' => 'Offline',
  'offline_text' => 'A Galeria está de momento offline - tente novamente mais tarde!',
  'ecards_empty' => 'Não há nenhum registo de ecards para visualizar!',
  'action_failed' => 'Erro! Não foi possivel processar o seu pedido.',
  'no_zip' => 'As bibliotecas necessárias para processar os arquivos em ZIP não estão disponiveis. Por favor contacte o Administrador.',
  'zip_type' => 'Não tem permissão para enviar arquivos ZIP.',
  'database_query' => 'Erro ao processar um pedido ha Base de Dados!', //cpg1.4
  'register_globals_on' => 'The PHP setting register_globals is enabled on your server, which is a bad idea in terms of security. It\'s strongly recommended to turn it off. [<a href="http://forum.coppermine-gallery.net/index.php/topic,59569.0.html" rel="external" class="external">more</a>]',
);

$lang_bbcode_help_title = 'Ajuda bbcode'; //cpg1.4
$lang_bbcode_help = 'Pode adicionar links clicaveis e alguma formatação de texto, utilizando bbcode tags : <li>[b]Bold[/b] =&gt; <b>Bold</b></li><li>[i]Italic[/i] =&gt; <i>Italic</i></li><li>[url=http://oseusite.com/]Url Text[/url] =&gt; <a href="http://oseusite.com">Url Text</a></li><li>[email]user@dominio.com[/email] =&gt; <a href="mailto:user@dominio.com">user@dominio.com</a></li><li>[color=red]seu texto[/color] =&gt; <span style="color:red">seu texto</span></li><li>[img]http://coppermine-gallery.net/demo/cpg14x/images/red.gif[/img] => <img src="../images/red.gif" border="0" alt="" /></li>'; //cpg1.4

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
  'home_title' => 'Ir para página inicial',
  'home_lnk' => 'Página Principal',
  'alb_list_title' => 'Ir para a lista de álbuns',
  'alb_list_lnk' => 'Lista de Álbuns',
  'my_gal_title' => 'Ir para Galeria Pessoal',
  'my_gal_lnk' => 'Minha Galeria',
  'my_prof_title' => 'Ir para Meus Dados', //cpg1.4
  'my_prof_lnk' => 'Os Meus Dados',
  'adm_mode_title' => 'Mudar para modo Admin',
  'adm_mode_lnk' => 'MODO ADMIN',
  'usr_mode_title' => 'Mudar para modo Utilizador',
  'usr_mode_lnk' => 'Modo utilizador',
  'upload_pic_title' => 'Enviar imagem para um álbum',
  'upload_pic_lnk' => 'Enviar Imagem',
  'register_title' => 'Criar uma conta',
  'register_lnk' => 'Clique para se Registar',
  'login_title' => 'Fazer o Login', //cpg1.4
  'login_lnk' => 'Login',
  'logout_title' => 'Fazer o Logout', //cpg1.4
  'logout_lnk' => 'Logout',
  'lastup_title' => 'Mostrar as últimas imagens inseridas', //cpg1.4
  'lastup_lnk' => 'Últimas Imagens',
  'lastcom_title' => 'Mostrar os últimos comentários inseridos', //cpg1.4
  'lastcom_lnk' => 'Últimos Comentários',
  'topn_title' => 'Mostrar as imagens mais visualizadas', //cpg1.4
  'topn_lnk' => 'Mais Visualizadas',
  'toprated_title' => 'Mostar imagens mais Populares', //cpg1.4
  'toprated_lnk' => 'Mais Populares',
  'search_title' => 'Pesquisar a Galeria', //cpg1.4
  'search_lnk' => 'Pesquisar',
  'fav_title' => 'ir para Minhas Favoritas', //cpg1.4
  'fav_lnk' => 'Minhas Favoritas',
  'memberlist_title' => 'Mostrar a Lista de Membros',
  'memberlist_lnk' => 'Lista de Membros',
  'faq_title' => 'Questões mais Frequentes sobre a Galeria(Frequently Asked Questions) &quot;Coppermine&quot;',
  'faq_lnk' => 'FAQ',
);

$lang_gallery_admin_menu = array(
  'upl_app_title' => 'Aprovar novos envios', //cpg1.4
  'upl_app_lnk' => 'Aprovar Fotos Enviadas',
  'admin_title' => 'Ir para Config', //cpg1.4
  'admin_lnk' => 'Config', //cpg1.4
  'albums_title' => 'Ir para configuração de Álbuns', //cpg1.4
  'albums_lnk' => 'Álbuns',
  'categories_title' => 'Ir para Configuração de Categorias', //cpg1.4
  'categories_lnk' => 'Categorias',
  'users_title' => 'Ir para Configuração de Utilizadores', //cpg1.4
  'users_lnk' => 'Utilizadores',
  'groups_title' => 'Ir para Configuração de Grupos', //cpg1.4
  'groups_lnk' => 'Grupos',
  'comments_title' => 'Ver todos comentários', //cpg1.4
  'comments_lnk' => 'Ver comentários',
  'searchnew_title' => 'Ir para Adicionar fotos em Lote', //cpg1.4
  'searchnew_lnk' => 'FTP=>',
  'util_title' => 'Ir para Ferramentas de Administração', //cpg1.4
  'util_lnk' => 'Ferramentas de Administração',
  'key_title' => 'Ir para Dicionário de Palavras Chave', //cpg1.4
  'key_lnk' => 'Dicionário de Palavras Chave', //cpg1.4
  'ban_title' => 'Ir para Excluir utilizadores', //cpg1.4
  'ban_lnk' => 'Excluir utilizadores',
  'db_ecard_title' => 'Visualizar Ecards', //cpg1.4
  'db_ecard_lnk' => 'Visualizar Ecards',
  'pictures_title' => 'Ordenar as Minhas Imagens', //cpg1.4
  'pictures_lnk' => 'Ordenar as Minhas Imagens', //cpg1.4
  'documentation_lnk' => 'Documentação', //cpg1.4
  'documentation_title' => 'Coppermine manual', //cpg1.4
);

$lang_user_admin_menu = array(
  'albmgr_title' => 'Criar/ordenar os meus álbuns', //cpg1.4
  'albmgr_lnk' => 'Criar/ordenar os meus álbuns',
  'modifyalb_title' => 'Ir para Modificar os meus álbuns',  //cpg1.4
  'modifyalb_lnk' => 'Modificar os meus álbuns',
  'my_prof_title' => 'Ir para os Meus Dados', //cpg1.4
  'my_prof_lnk' => 'Os Meus Dados',
);

$lang_cat_list = array(
  	'category' => 'Categoria',
	'albums' => 'Álbuns',
	'pictures' => 'Imagens',
);

$lang_album_list = array(
  'album_on_page' => '%d álbun(s) na(s) %d página(s)',
);

$lang_thumb_view = array(
  'date' => 'DATA',
	//Ordenar por arquivo e titulo
  'name' => 'NOME DO FICHEIRO',
  'title' => 'TITLE',
  'title' => 'TÍTULO',
	'sort_da' => 'Ordenar por data crescente',
	'sort_dd' => 'Ordenar por data decrescente',
	'sort_na' => 'Ordenar por nome ascendente',
	'sort_nd' => 'Ordenar por nome descendente',
	'sort_ta' => 'Ordenar por título ascendente',
	'sort_td' => 'Ordenar por título descendente',
  'position' => 'POSIÇÃO', //cpg1.4
  'sort_pa' => 'Ordenar por posição ascendente', //cpg1.4
  'sort_pd' => 'Ordenar por posição descendente', //cpg1.4
  'download_zip' => 'Download como ficheiro Zip',
  'pic_on_page' => '%d imagen(s) na(s) %d página(s)',
	'user_on_page' => '%d utilizador(es) na(s) %d página(s)',
  'enter_alb_pass' => 'Introduza senha do álbum', //cpg1.4
  'invalid_pass' => 'Password Inválida!', //cpg1.4
  'pass' => 'Password', //cpg1.4
  'submit' => 'Submeter', //cpg1.4
);

$lang_img_nav_bar = array(
  'thumb_title' => 'Voltar para a página de miniaturas',
	'pic_info_title' => 'Mostrar/Esconder informações do ficheiro',
	'slideshow_title' => 'SlideShow',
	'ecard_title' => 'enviar esta imagem como e-card',
  'ecard_disabled' => 'os e-cards estão desactivados',
  'ecard_disabled_msg' => 'Não tem permissão para enviar e-cards', //js-alert
  'prev_title' => 'Ver imagem anterior',
  'next_title' => 'Ver próxima imagem',
  'pic_pos' => 'IMAGEM %s/%s',
  'report_title' => 'Enviar comentário sobre esta imagem ao Administrador', //cpg1.4
  'go_album_end' => 'Saltar para última', //cpg1.4
  'go_album_start' => 'Inicio', //cpg1.4
  'go_back_x_items' => 'para trás %s items', //cpg1.4
  'go_forward_x_items' => 'para frente %s items', //cpg1.4
);

$lang_rate_pic = array(
  'rate_this_pic' => 'Classifique esta imagem ',
	'no_votes' => '(Nenhum voto até o momento)',
	'rating' => '(Média de votos : %s / 5 dos %s votos)',
	'rubbish' => 'Péssima',
	'poor' => 'Pobre',
	'fair' => 'Satisfatória',
	'good' => 'Boa',
	'excellent' => 'Excelente',
	'great' => 'Espectacular',
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
  CRITICAL_ERROR => 'ERRO CRÍTICO!!!',
  'file' => 'Ficheiro: ',
  'line' => 'Linha: ',
);

$lang_display_thumbnails = array(
  'filename' => 'Ficheiro=', //cpg1.4
  'filesize' => 'Tamanho=', //cpg1.4
  'dimensions' => 'Dimensões=', //cpg1.4
  'date_added' => 'Data de envio=', //cpg1.4
);

$lang_get_pic_data = array(
  'n_comments' => '%s comentários',
  'n_views' => '%s visualizações',
  'n_votes' => '(%s votos)',
);

$lang_cpg_debug_output = array(
  'debug_info' => 'Debug Info',
  'select_all' => 'Seleccionar tudo',
  'copy_and_paste_instructions' => 'Se pedir ajuda ao suporte do Coppermine, copie e cole este Debug com as mensagens de erro que surgirem no seu pedido de ajuda. Certifique-se de ter substituido qualquer password com ***, antes de colocar o post.<br />Nota: Serve apenas para informar e não significa que exista erro com a sua Galeria!', //cpg1.4
  'phpinfo' => 'mostrar phpinfo',
  'notices' => 'Notificações', //cpg1.4
);

$lang_language_selection = array(
  'reset_language' => 'Idioma Padrão',
  'choose_language' => 'Escolha o seu Idioma',
);

$lang_theme_selection = array(
  'reset_theme' => 'Tema Padrão',
  'choose_theme' => 'Escolha um tema',
);

$lang_version_alert = array(
  'version_alert' => 'Versão não suportada!', //cpg1.4
  'security_alert' => 'Alerta de Segurança!', //cpg1.4.3
  'relocate_exists' => 'Remove the <a href="http://coppermine-gallery.net/forum/index.php?topic=24217.0" target=_blank>relocate_server.php</a> file from your website!',
  'no_stable_version' => 'You are running Coppermine %s (%s) which is only meant for very experienced users - this version comes without support nor any warranties. Use it at your own risk or downgrade to the latest stable version if you need support!', //cpg1.4
  'gallery_offline' => 'A Galeria está de momento OFFLINE e acessivel apenas por si (ADMIN)! Não se esqueça de a colocar ONLINE após o termino da manutenção!', //cpg1.4
);

$lang_create_tabs = array(
  'previous' => 'anterior', //cpg1.4
  'next' => 'próxima', //cpg1.4
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
  'error_wakeup' => "Não foi possível despertar o plugin '%s'", //cpg1.4
  'error_install' => "Não foi possível instalar o plugin '%s'", //cpg1.4
  'error_uninstall' => "Não foi possível desinstalar o plugin '%s'", //cpg1.4
  'error_sleep' => "Não foi possível desinstalar o plugin '%s'<br />", //cpg1.4
);

// ------------------------------------------------------------------------- //
// File include/smilies.inc.php
// ------------------------------------------------------------------------- //

if (defined('SMILIES_PHP')) $lang_smilies_inc_php = array(
  'Exclamation' => 'Exclamação',
	'Question' => 'Questão',
	'Very Happy' => 'Muito Feliz',
	'Smile' => 'Sorriso',
	'Sad' => 'Triste',
	'Surprised' => 'Surpreendido',
	'Shocked' => 'Chocado',
	'Confused' => 'Confuso',
	'Cool' => 'Legal',
	'Laughing' => 'Risonho',
	'Mad' => 'Louco',
	'Razz' => 'Razz',
	'Embarassed' => 'Embaraçado',
	'Crying or Very sad' => 'Chorar/Muito triste',
	'Evil or Very Mad' => 'Mau/Muito Furioso',
	'Twisted Evil' => 'Demonio louco',
	'Rolling Eyes' => 'Rolando os olhos',
	'Wink' => 'Piscando',
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
// File mode.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('MODE_PHP')) $lang_mode_php = array(
  0 => 'A Sair da Administração...',
  1 => 'A Entrar na Administração...',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
  'alb_need_name' => 'Os Álbuns precisam de ter um nome !', //js-alert
  'confirm_modifs' => 'Tem certeza que deseja realizar as modificações ?', //js-alert
  'no_change' => 'Não realizou nenhuma mudança !', //js-alert
  'new_album' => 'Novo álbum',
  'confirm_delete1' => 'Tem certeza que deseja remover este álbum ?', //js-alert
  'confirm_delete2' => 'Nem todas as fotos e comentários serão perdidos !', //js-alert
  'select_first' => 'Primeiro seleccione um álbum', //js-alert
  'alb_mrg' => 'Gestor de álbuns',
  'my_gallery' => '* A Minha Galeria *',
  'no_category' => '* Sem categoria *',
  'delete' => 'Apagar',
  'new' => 'Novo',
  'apply_modifs' => 'Aplicar modificações',
  'select_category' => '- Selecione categoria -',
);

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) $lang_banning_php = array(
  'title' => 'Excluir Utilizadores', //cpg1.4
  'user_name' => 'Nome do utilizador', //cpg1.4
  'ip_address' => 'Endereço IP ', //cpg1.4
  'expiry' => 'Expira em (em branco significa que é permanente)', //cpg1.4
  'edit_ban' => 'Gravar modificações', //cpg1.4
  'delete_ban' => 'Apagar', //cpg1.4
  'add_new' => 'Adicionar nova exclusão', //cpg1.4
  'add_ban' => 'Adicionar', //cpg1.4
  'error_user' => 'Não é possível encontrar utilizador', //cpg1.4
  'error_specify' => 'Precisa especificar um utilizador ou IP', //cpg1.4
  'error_ban_id' => 'ID de exclusão inválido!', //cpg1.4
  'error_admin_ban' => 'Não se pode excluir!', //cpg1.4
  'error_server_ban' => 'Queria excluir o seu próprio servidor? Han han!!!Não pode ser...', //cpg1.4
  'error_ip_forbidden' => 'Não pode excluir este IP - De qualquer maneira ele é non-routable (privado) !<br />Se deseja permitir a exclusão de IPs privados, altere isto <a href="admin.php">Config</a> (só faz sentido quando o Coppermine é usado numa LAN).', //cpg1.4
  'lookup_ip' => 'Procurar um IP ', //cpg1.4
  'submit' => 'vai!', //cpg1.4
  'select_date' => 'Seleccionar uma data', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File bridgemgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('BRIDGEMGR_PHP')) $lang_bridgemgr_php = array(
  'title' => 'Bridge Wizard',
  'warning' => 'AVISO:Ao usar este assistente tenha a consciência de que dados com informação sensivel estão a ser enviados usando formulários html. Corra-o apenas no seu computador (não numa máquina pública como Internet Cafés), e certifique-se de limpar a cache do browser e ficheiros temporários depois de ter concluído, ou terceiros poderão ter acesso aos seus dados!',
  'back' => 'Retrocede',
  'next' => 'Seguinte',
  'start_wizard' => 'Inicia o assistente de enlaces',
  'finish' => 'Finalizar',
  'hide_unused_fields' => 'Ocultar campos do formulário não usados (recomendado)',
  'clear_unused_db_fields' => 'Limpar entradas inválidas da base de dados (recomendado)',
  'custom_bridge_file' => 'nome do ficheiro de enlaces (se o nome é <i>exemplo.inc.php</i>, introduza <i>exemplo</i> neste campo)',
  'no_action_needed' => 'Não é necessária quaisquer acção neste passo. Clique em \'seguinte\' para continuar.',
  'reset_to_default' => 'Restaurar pré-definições',
  'choose_bbs_app' => 'escolha a aplicação para enlaçar o Cooppermine',
  'support_url' => 'Vá aqui para o suporte sobre esta aplicação',
  'settings_path' => 'caminho(s) usado pela aplicação BBS',
  'database_connection' => 'coneção à base de dados',
  'database_tables' => 'tabelas da base de dados',
  'bbs_groups' => 'grupos BBS ',
  'license_number' => 'Número de Licença',
  'license_number_explanation' => 'Insira o número da licença (se necessário)',
  'db_database_name' => 'Nome da Base de Dados',
  'db_database_name_explanation' => 'Insira o nome da Base de Dados que o BBS utiliza',
  'db_hostname' => 'Servidor da Base de Dados',
  'db_hostname_explanation' => 'Nome do servidor onde a sua Base de Dados MySQL reside, normalmente &quot;localhost&quot;',
  'db_username' => 'Utilizador da Base de Dados',
  'db_username_explanation' => 'o utilizador mySQL a usar para se conectar com a aplicação BBS',
  'db_password' => 'Senha da Base de Dados',
  'db_password_explanation' => 'Password este utilizador mySQL',
  'full_forum_url' => 'URL do Forum',
  'full_forum_url_explanation' => 'URL completo da sua aplicação BBS (incluindo http:// bit, http://www.seudominio.tld/forum)',
  'relative_path_of_forum_from_webroot' => 'Caminho relativo do forum',
  'relative_path_of_forum_from_webroot_explanation' => 'O caminho para a aplicação BBS desde o webroot (Exemplo: se o caminho do seu BBS é http://www.seudominio.tld/forum/, digite &quot;/forum/&quot; neste campo)',
  'relative_path_to_config_file' => 'Caminho relativo do ficheiro de configuração do BBS',
  'relative_path_to_config_file_explanation' => 'Caminho relativo do BBS, visto pelo Coppermine (exemplo: &quot;../forum/&quot; se o BBS está em http://www.seudominio.tld/forum/ e o Coppermine em http://www.seudominio.tld/gallery/)',
  'cookie_prefix' => 'prefixo de Cookie',
  'cookie_prefix_explanation' => 'tem se ser o nome do cookie do seu BBS',
  'table_prefix' => 'Prefixo de Tabelas',
  'table_prefix_explanation' => 'Tem de coincidir com o prefixo que definiu ao configurar o seu BBS.',
  'user_table' => 'Tabela de utilizadores',
  'user_table_explanation' => '(Normalmente o valor por defeito deverá funcionar, a não ser que use uma instalação não standard do BBS)',
  'session_table' => 'Tabela de sessões',
  'session_table_explanation' => '(Normalmente o valor por defeito deverá funcionar, a não ser que use uma instalação não standard do BBS)',
  'group_table' => 'Tabela de grupos',
  'group_table_explanation' => '(Normalmente o valor por defeito deverá funcionar, a não ser que use uma instalação não standard do BBS)',
  'group_relation_table' => 'Tabela de relação de grupos',
  'group_relation_table_explanation' => '(Normalmente o valor por defeito deverá funcionar, a não ser que use uma instalação não standard do BBS)',
  'group_mapping_table' => 'Tabela de mapeamento de grupos',
  'group_mapping_table_explanation' => '(Normalmente o valor por defeito deverá funcionar, a não ser que use uma instalação não standard do BBS)',
  'use_standard_groups' => 'Usar os grupos de utilizador standard do BBS',
  'use_standard_groups_explanation' => 'Usar os Grupos de Utilizador (incorporado e recomendado). Isto fará com que as definições personalizadas feitas nesta página se tornem nulas. Desactive esta opção apenas se realmente souber o que está a fazer!',
  'validating_group' => 'Validação de Grupos',
  'validating_group_explanation' => 'O ID do grupo do seu BBS onde se encontram as contas dos utilizadores que necessitam de validação (Normalmente o valor por defeito deverá funcionar, a não ser que use uma instalação não standard do BBS)',
  'guest_group' => 'Grupo de convidados (Guest)',
  'guest_group_explanation' => 'O ID do grupo no seu BBS onde se encontram os utilizadores convidados (utilizadores anónimos) (definição por defeito deverá funcionar, edite apenas se souber o que está a fazer!)',
  'member_group' => 'Grupo de Membros',
  'member_group_explanation' => 'O ID do Grupo do seu BBS, onde se encontram os utilizadores &quot;regulares&quot; (definição por defeito deverá funcionar, edite apenas se souber o que está a fazer!',
  'admin_group' => 'Grupo Administração',
  'admin_group_explanation' => 'O ID do Grupo do seu BBS, onde se encontram os Administradores (definição por defeito deverá funcionar, edite apenas se souber o que está a fazer!)',
  'banned_group' => 'Grupo de Excluidos',
  'banned_group_explanation' => 'O ID do grupo onde se encontram os utilizadores excluidos (definição por defeito deverá funcionar, edite apenas se souber o que está a fazer)',
  'global_moderators_group' => 'Grupo Moderadores Globais',
  'global_moderators_group_explanation' => 'O ID do Grupo onde se encontram os utilizadores Moderadores Globais do seu BBS (definição por defeito deverá funcionar, edite apenas se souber o que está a fazer)',
  'special_settings' => 'BBS-definições especificas',
  'logout_flag' => 'Versão phpBB (indicador de fecho de sessão)',
  'logout_flag_explanation' => 'Qual a versão do seu BBS (para saber como tratar os fechos de sessão (logouts))',
  'use_post_based_groups' => 'usar grupos baseados em POST?',
  'logout_flag_yes' => '2.0.5 ou maior',
  'logout_flag_no' => '2.0.4 ou menor',
  'use_post_based_groups_explanation' => 'Devem os grupos da BBS que estão definidos pelo número de postes serem levados em conta (permite uma administração de permissões granular) ou apenas os grupos por defeito (torna a administração mais fácil, recomendado). Pode alterar esta definição mais tarde.',
  'use_post_based_groups_yes' => 'yes',
  'use_post_based_groups_no' => 'no',
  'error_title' => 'You need to correct these errors before you can continue. Go to the previous screen.',
  'error_specify_bbs' => 'You have to specify what application you want to bridge your Coppermine install with.',
  'error_no_blank_name' => 'You can\'t leave the name of your custom bridge file blank.',
  'error_no_special_chars' => 'The bridge file name mustn\'t contain any special chars except underscore (_) and dash (-)!',
  'error_bridge_file_not_exist' => 'The bridge file %s doesn\'t exist on the server. Check if you have actually uploaded it.',
  'finalize' => 'enable/disable BBS integration',
  'finalize_explanation' => 'So far, the settings you specified have been written into the database, but BBS integration hasn\'t been enabled. You can switch integration on/off later at any time. Make sure to remember the admin username and password from standalone Coppermine, you might need it later to be able to make any changes. If anything goes wrong, go to %s and disable BBS integration there, using your standalone (unbridged) admin account (usually the one you set up during Coppermine install).',
  'your_bridge_settings' => 'Your bridge settings',
  'title_enable' => 'Enable integration/bridging with %s',
  'bridge_enable_yes' => 'enable',
  'bridge_enable_no' => 'disable',
  'error_must_not_be_empty' => 'must not be empty',
  'error_either_be' => 'must either be %s or %s',
  'error_folder_not_exist' => '%s doesn\'t exist. Correct the value you entered for %s',
  'error_cookie_not_readible' => 'Coppermine can\'t read a cookie named %s. Correct the value you entered for %s, or go to your BBS administration panel and make sure that the cookie path is readible for coppermine.',
  'error_mandatory_field_empty' => 'You can not leave the field %s blank - fill in the proper value.',
  'error_no_trailing_slash' => 'There mustn\'t be a trailing slash in the field %s.',
  'error_trailing_slash' => 'There must be a trailing slash in the field %s.',
  'error_db_connect' => 'Could not connect to the mySQL database with the data you specified. Here\'s what mySQL said:',
  'error_db_name' => 'Although Coppermine could establish a connection, it wasn\'t able to find the database %s. Make sure you have specified %s properly. Here\'s what mySQL said:',
  'error_prefix_and_table' => '%s and ',
  'error_db_table' => 'Could not find the table %s. Make sure you have specified %s correctly.',
  'recovery_title' => 'Bridge Manager: emergency recovery',
  'recovery_explanation' => 'If you came here to administer the BBS integration of your Coppermine gallery, you have to log in first as admin. If you can not log in because bridging doesn\'t work as expected, you can disable BBS integration with this page. Entering your username and password will not log you in, it will only disable BBS integration. Refer to the documentation for details.',
  'username' => 'Username',
  'password' => 'Password',
  'disable_submit' => 'submit',
  'recovery_success_title' => 'Authorization successful',
  'recovery_success_content' => 'You have successfully disabled BBS bridging. Your Coppermine install runs now in standalone mode.',
  'recovery_success_advice_login' => 'Log in as admin to edit your bridge settings and/or enable BBS integration again.',
  'goto_login' => 'Go to login page',
  'goto_bridgemgr' => 'Go to bridge manager',
  'recovery_failure_title' => 'Authorization failed',
  'recovery_failure_content' => 'You supplied the wrong credentials. You will have to supply the admin account data of the standalone version (usually the account you set up during Coppermine install).',
  'try_again' => 'try again',
  'recovery_wait_title' => 'Wait time has not elapsed',
  'recovery_wait_content' => 'For security reasons this script does not allow failed logons in short succession, so you will have to wait a bit untill you\'re allowed to try to authenticate.',
  'wait' => 'wait',
  'create_redir_file' => 'Create redirection file (recommended)',
  'create_redir_file_explanation' => 'To redirect users back to Coppermine once they logged into your BBS, you need a redirection file to be created within your BBS folder. When this option is checked, the bridge manager will attempt to create this file for you, or give you code ready to copy-and-paste to create the file manually.',
  'browse' => 'browse',
);

// ------------------------------------------------------------------------- //
// File calendar.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('CALENDAR_PHP')) $lang_calendar_php = array(
  'title' => 'Calendário', //cpg1.4
  'close' => 'fechar', //cpg1.4
  'clear_date' => 'limpar data', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
  'miss_param' => 'Os parâmetros requeridos para a operação \'%s\'não foram fornecidos !',
  'unknown_cat' => 'A categoria selecionada não existe na base de dados',
  'usergal_cat_ro' => 'A categoria galerias do utilizador nãao podem ser apagadas !',
  'manage_cat' => 'Administração de Categorias',
  'confirm_delete' => 'Tem a certeza de que quer APAGAR esta categoria ?', //js-alert
  'category' => 'Categoria',
  'operations' => 'Operações',
  'move_into' => 'Transferir para',
  'update_create' => 'Actualiza/cria categoria',
  'parent_cat' => 'Categoria mãe',
  'cat_title' => 'Título da categoria',
  'cat_thumb' => 'Imagem miniatura da categoria',
  'cat_desc' => 'Descrição da categoria',
  'categories_alpha_sort' => 'Ordenar as categorias alfabéticamente (em vez de ordem por ajuste)', //cpg1.4
  'save_cfg' => 'Save configuration', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File admin.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('ADMIN_PHP')) $lang_admin_php = array(
  'title' => 'Gallery Configuration', //cpg1.4
  'manage_exif' => 'Manage exif display', //cpg1.4
  'manage_plugins' => 'Manage plugins', //cpg1.4
  'manage_keyword' => 'Manage keywords', //cpg1.4
  'restore_cfg' => 'Restore factory defaults',
  'save_cfg' => 'Save new configuration',
  'notes' => 'Notes',
  'info' => 'Information',
  'upd_success' => 'Configuração foi actualizada!',
  'restore_success' => 'Coppermine default configuration restored',
  'name_a' => 'Name ascending',
  'name_d' => 'Name descending',
  'title_a' => 'Title ascending',
  'title_d' => 'Title descending',
  'date_a' => 'Date ascending',
  'date_d' => 'Date descending',
  'pos_a' => 'Position ascending', //cpg1.4
  'pos_d' => 'Position descending', //cpg1.4
  'th_any' => 'Max Aspect',
  'th_ht' => 'Height',
  'th_wd' => 'Width',
  'label' => 'label',
  'item' => 'item',
  'debug_everyone' => 'Everyone',
  'debug_admin' => 'Admin only',
  'no_logs'=> 'Off', //cpg1.4
  'log_normal'=> 'Normal', //cpg1.4
  'log_all' => 'All', //cpg1.4
  'view_logs' => 'View logs', //cpg1.4
  'click_expand' => 'click section name to expand', //cpg1.4
  'expand_all' => 'Expand All', //cpg1.4
  'notice1' => '(*) These settings mustn\'t be changed if you already have files in your database.', //cpg1.4 - (relocated)
  'notice2' => '(**) When changing this setting, only the files that are added from that point on are affected, so it is advisable that this setting must not be changed if there are already files in the gallery. You can, however, apply the changes to the existing files with the &quot;<a href="util.php">admin tools</a> (resize pictures)&quot; utility from the admin menu.', //cpg1.4 - (relocated)
  'notice3' => '(***) All log files are written in english.', //cpg1.4 - (relocated)
  'bbs_disabled' => 'Function disabled when using bb integration', //cpg1.4
  'auto_resize_everyone' => 'Everyone', //cpg1.4
  'auto_resize_user' => 'User only', //cpg1.4
  'ascending' => 'ascending', //cpg1.4
  'descending' => 'descending', //cpg1.4
);

if (defined('ADMIN_PHP')) $lang_admin_data = array(
  'General settings',
  array('Gallery name', 'gallery_name', 0, 'f=index.htm&amp;as=admin_general_name&amp;ae=admin_general_name_end'), //cpg1.4
  array('Gallery description', 'gallery_description', 0, 'f=index.htm&amp;as=admin_general_description&amp;ae=admin_general_description_end'), //cpg1.4
  array('Gallery administrator email', 'gallery_admin_email', 0, 'f=index.htm&amp;as=admin_general_email&amp;ae=admin_general_email_end'), //cpg1.4
  array('URL of your coppermine gallery folder (no \'index.php\' or similar at the end)', 'ecards_more_pic_target', 0, 'f=index.htm&amp;as=admin_general_coppermine-url&amp;ae=admin_general_coppermine-url_end'), //cpg1.4
  array('URL of your home page', 'home_target', 0, 'f=index.htm&amp;as=admin_general_home-url&amp;ae=admin_general_home-url_end'), //cpg1.4
  array('Allow ZIP-download of favorites', 'enable_zipdownload', 1, 'f=index.htm&amp;as=admin_general_zip-download&amp;ae=admin_general_zip-download_end'), //cpg1.4
  array('Timezone difference relative to GMT (current time: ' . localised_date(-1, $comment_date_fmt) . ')','time_offset',0, 'f=index.htm&amp;as=admin_general_time-offset&amp;ae=admin_general_time-offset_end&amp;top=1'), //cpg1.4
  array('Enable encrypted passwords (can not be undone)','enable_encrypted_passwords',1, 'f=index.htm&amp;as=admin_general_encrypt_password_start&amp;ae=admin_general_encrypt_password_end&amp;top=1'), // cpg 1.4
  array('Enable help-icons (help available in English only)','enable_help',9, 'f=index.htm&amp;as=admin_general_help&amp;ae=admin_general_help_end'), //cpg1.4
  array('Enable clickable keywords in search','clickable_keyword_search',14, 'f=index.htm&amp;as=admin_general_keywords_start&amp;ae=admin_general_keywords_end'), //cpg1.4
  array('Enable plugins', 'enable_plugins', 12, 'f=index.htm&amp;as=admin_general_enable-plugins&amp;ae=admin_general_enable-plugins_end'),  //cpg1.4
  array('Allow banning of non-routable (private) IP addresses', 'ban_private_ip', 1,  'f=index.htm&amp;as=admin_general_private-ip&amp;ae=admin_general_private-ip_end'), //cpg1.4
  array('Browsable batch-add interface', 'browse_batch_add', 1, 'f=index.htm&amp;as=admin_general_browsable_batch_add&amp;ae=admin_general_browsable_batch_add_end'), //cpg1.4

  'Language &amp; Charset settings',
  array('Language', 'lang', 5, 'f=index.htm&amp;as=admin_language_language&amp;ae=admin_language_language_end'), //cpg1.4
  array('Fallback to English if translated phrase not found?', 'language_fallback', 1, 'f=index.htm&amp;as=admin_language_fallback&amp;ae=admin_language_fallback_end'), //cpg1.4
  array('Character encoding', 'charset', 4, 'f=index.htm&amp;as=admin_language_charset&amp;ae=admin_language_charset_end'), //cpg1.4
  array('Display language list', 'language_list', 1, 'f=index.htm&amp;as=admin_language_list&amp;ae=admin_language_list_end'), //cpg1.4
  array('Display language flags', 'language_flags', 8, 'f=index.htm&amp;as=admin_language_flags&amp;ae=admin_language_flags_end&amp;top=1'), //cpg1.4
  array('Display &quot;reset&quot; in language selection', 'language_reset', 1, 'f=index.htm&amp;as=admin_language_reset&amp;ae=admin_language_reset_end&amp;top=1'), //cpg1.4
  //array('Display previous/next on tabbed pages', 'previous_next_tab', 1), //cpg1.4

  'Themes settings',
  array('Theme', 'theme', 6, 'f=index.htm&amp;as=admin_theme_theme&amp;ae=admin_theme_theme_end'), //cpg1.4
  array('Display theme list', 'theme_list', 1, 'f=index.htm&amp;as=admin_theme_theme_list&amp;ae=admin_theme_theme_list_end'), //cpg1.4
  array('Display &quot;reset&quot; in theme selection', 'theme_reset', 1, 'f=index.htm&amp;as=admin_theme_theme_reset&amp;ae=admin_theme_theme_reset_end'), //cpg1.4
  array('Display FAQ', 'display_faq', 1, 'f=index.htm&amp;as=admin_theme_faq&amp;ae=admin_theme_faq_end'), //cpg1.4
  array('Custom menu link name', 'custom_lnk_name', 0,'f=index.htm&amp;as=admin_theme_custom_lnk_name&amp;ae=admin_theme_custom_lnk_name_end'), //cpg1.4
  array('Custom menu link URL', 'custom_lnk_url', 0,'f=index.htm&amp;as=admin_language_custom_lnk_url&amp;ae=admin_language_custom_lnk_url_end'), //cpg1.4
  array('Display bbcode help', 'show_bbcode_help', 1, 'f=index.htm&amp;as=admin_theme_bbcode&amp;ae=admin_theme_bbcode_end&amp;top=1'), //cpg1.4
  array('Show the vanity block on themes that are defined as XHTML and CSS compliant','vanity_block',1, 'f=index.htm&amp;as=vanity_block&amp;ae=vanity_block_end'), //cpg1.4
  array('Path to custom header include', 'custom_header_path', 0, 'f=index.htm&amp;as=admin_theme_include_path_start&amp;ae=admin_theme_include_path_end'), //cpg1.4
  array('Path to custom footer include', 'custom_footer_path', 0, 'f=index.htm&amp;as=admin_theme_include_path_start&amp;ae=admin_theme_include_path_end'), //cpg1.4

  'Album list view',
  array('Width of the main table (pixels or %)', 'main_table_width', 0, 'f=index.htm&amp;as=admin_album_table-width&amp;ae=admin_album_table-width_end'), //cpg1.4
  array('Number of levels of categories to display', 'subcat_level', 0, 'f=index.htm&amp;as=admin_album_category-levels&amp;ae=admin_album_category-levels_end'), //cpg1.4
  array('Number of albums to display', 'albums_per_page', 0, 'f=index.htm&amp;as=admin_album_number&amp;ae=admin_album_number_end'), //cpg1.4
  array('Number of columns for the album list', 'album_list_cols', 0, 'f=index.htm&amp;as=admin_album_columns&amp;ae=admin_album_columns_end'), //cpg1.4
  array('Size of thumbnails in pixels', 'alb_list_thumb_size', 0, 'f=index.htm&amp;as=admin_album_thumbnail-size&amp;ae=admin_album_thumbnail-size_end'), //cpg1.4
  array('The content of the main page', 'main_page_layout', 0, 'f=index.htm&amp;as=admin_album_list_content&amp;ae=admin_album_list_content_end'), //cpg1.4
  array('Show first level album thumbnails in categories','first_level',1, 'f=index.htm&amp;as=admin_album_first-level_thumbs&amp;ae=admin_album_first-level_thumbs_end'), //cpg1.4
  array('Sort categories alphabetically (instead of custom sort order)','categories_alpha_sort',1, 'f=index.htm&amp;as=admin_album_list_alphasort_start&amp;ae=admin_album_list_alphasort_end'), //cpg1.4
  array('Show number of linked files','link_pic_count',1, 'f=index.htm&amp;as=admin_album_linked_files_start&amp;ae=admin_album_linked_files_end'), //cpg1.4

  'Thumbnail view',
  array('Number of columns on thumbnail page', 'thumbcols', 0, 'f=index.htm&amp;as=admin_thumbnail_columns&amp;ae=admin_thumbnail_columns_end'), //cpg1.4
  array('Number of rows on thumbnail page', 'thumbrows', 0, 'f=index.htm&amp;as=admin_thumbnail_rows&amp;ae=admin_thumbnail_rows_end'), //cpg1.4
  array('Maximum number of tabs to display', 'max_tabs', 10, 'f=index.htm&amp;as=admin_thumbnail_tabs&amp;ae=admin_thumbnail_tabs_end'), //cpg1.4
  array('Display file caption (in addition to title) below the thumbnail', 'caption_in_thumbview', 1, 'f=index.htm&amp;as=admin_thumbnail_display_caption&amp;ae=admin_thumbnail_display_caption_end'), //cpg1.4
  array('Display number of views below the thumbnail', 'views_in_thumbview', 1, 'f=index.htm&amp;as=admin_thumbnail_display_views&amp;ae=admin_thumbnail_display_views_end'), //cpg1.4
  array('Display number of comments below the thumbnail', 'display_comment_count', 1, 'f=index.htm&amp;as=admin_thumbnail_display_comments&amp;ae=admin_thumbnail_display_comments_end'), //cpg1.4
  array('Display uploader name below the thumbnail', 'display_uploader', 1, 'f=index.htm&amp;as=admin_thumbnail_display_uploader&amp;ae=admin_thumbnail_display_uploader_end'), //cpg1.4
  //array('Display name of admin uploaders below the thumbnail', 'display_admin_uploader', 1, 'f=index.htm&amp;as=admin_thumbnail_display_admin_uploader&amp;ae=admin_thumbnail_display_admin_uploader_end'), //cpg1.4
  array('Display file name below the thumbnail', 'display_filename', 1, 'f=index.htm&amp;as=admin_thumbnail_display_filename&amp;ae=admin_thumbnail_display_filename_end'), //cpg1.4
  //array('Display album description', 'alb_desc_thumb', 1, 'f=index.htm&amp;as=admin_thumbnail_display_description&amp;ae=admin_thumbnail_display_description_end'), //cpg1.4
  array('Default sort order for files', 'default_sort_order', 3, 'f=index.htm&amp;as=admin_thumbnail_default_sortorder&amp;ae=admin_thumbnail_default_sortorder_end'), //cpg1.4
  array('Minimum number of votes for a file to appear in the \'top-rated\' list', 'min_votes_for_rating', 0, 'f=index.htm&amp;as=admin_thumbnail_minimum_votes&amp;ae=admin_thumbnail_minimum_votes_end'), //cpg1.4

  'Image view', //cpg1.4
  array('Width of the table for file display (pixels or %)', 'picture_table_width', 0, 'f=index.htm&amp;as=admin_image_comment_table-width&amp;ae=admin_image_comment_table-width_end'), //cpg1.4
  array('File information is visible by default', 'display_pic_info', 1, 'f=index.htm&amp;as=admin_image_comment_info_visible&amp;ae=admin_image_comment_info_visible_end'), //cpg1.4
  array('Max length for an image description', 'max_img_desc_length', 0, 'f=index.htm&amp;as=admin_image_comment_descr_length&amp;ae=admin_image_comment_descr_length_end'), //cpg1.4
  array('Max number of characters in a word', 'max_com_wlength', 0, 'f=index.htm&amp;as=admin_image_comment_chars_per_word&amp;ae=admin_image_comment_chars_per_word_end'), //cpg1.4
  array('Show film strip', 'display_film_strip', 1, 'f=index.htm&amp;as=admin_image_comment_filmstrip_toggle&amp;ae=admin_image_comment_filmstrip_toggle_end'), //cpg1.4
  array('Display file name under film strip thumbnail', 'display_film_strip_filename', 1, 'f=index.htm&amp;as=admin_image_comment_display_film_strip_filename&amp;ae=admin_image_comment_display_film_strip_filename_end'), //cpg1.4
  array('Number of items in film strip', 'max_film_strip_items', 0, 'f=index.htm&amp;as=admin_image_comment_filmstrip_number&amp;ae=admin_image_comment_filmstrip_number_end'), //cpg1.4
  array('Slideshow interval in milliseconds (1 second = 1000 milliseconds)', 'slideshow_interval', 0, 'f=index.htm&amp;as=admin_image_comment_slideshow_interval&amp;ae=admin_image_comment_slideshow_interval_end'), //cpg1.4

  'Comment settings', //cpg1.4
  array('Filter bad words in comments', 'filter_bad_words', 1, 'f=index.htm&amp;as=admin_image_comment_bad_words&amp;ae=admin_image_comment_bad_words_end'), //cpg1.4
  array('Allow smiles in comments', 'enable_smilies', 1, 'f=index.htm&amp;as=admin_image_comment_smilies&amp;ae=admin_image_comment_smilies_end'), //cpg1.4
  array('Allow several consecutive comments on one file from the same user (disable flood protection)', 'disable_comment_flood_protect', 1, 'f=index.htm&amp;as=admin_image_comment_flood&amp;ae=admin_image_comment_flood_end'), //cpg1.4
  array('Max number of lines in a comment', 'max_com_lines', 0, 'f=index.htm&amp;as=admin_image_comment_lines&amp;ae=admin_image_comment_lines_end'), //cpg1.4
  array('Maximum length of a comment', 'max_com_size', 0, 'f=index.htm&amp;as=admin_image_comment_length&amp;ae=admin_image_comment_length_end'), //cpg1.4
  array('Notify admin of comments by email', 'email_comment_notification', 1, 'f=index.htm&amp;as=admin_image_comment_admin_notify&amp;ae=admin_image_comment_admin_notify_end'), //cpg1.4
  array('Sort order of comments', 'comments_sort_descending', 17, 'f=index.htm&amp;as=admin_comment_sort_start&amp;ae=admin_comment_sort_end'), //cpg1.4
  array('Prefix for anonymous comments authors', 'comments_anon_pfx', 0, 'f=index.htm&amp;as=comments_anon_pfx&amp;ae=comments_anon_pfx_end'), //cpg1.4

  'Files and thumbnails settings',
  array('Quality for JPEG files', 'jpeg_qual', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_jpeg_quality&amp;ae=admin_picture_thumbnail_jpeg_quality_end'), //cpg1.4
  array('Max dimension of a thumbnail <a href="#notice2" class="clickable_option">**</a>', 'thumb_width', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max-dimension&amp;ae=admin_picture_thumbnail_max-dimension_end'), //cpg1.4
  array('Use dimension ( width or height or Max aspect for thumbnail ) <a href="#notice2" class="clickable_option">**</a>', 'thumb_use', 7, 'f=index.htm&amp;as=admin_picture_thumbnail_use-dimension&amp;ae=admin_picture_thumbnail_use-dimension_end'), //cpg1.4
  array('Create intermediate pictures','make_intermediate',1, 'f=index.htm&amp;as=admin_picture_thumbnail_intermediate_toggle&amp;ae=admin_picture_thumbnail_intermediate_toggle_end'), //cpg1.4
  array('Max width or height of an intermediate picture/video <a href="#notice2" class="clickable_option">**</a>', 'picture_width', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_intermediate_dimension&amp;ae=admin_picture_thumbnail_intermediate_dimension_end'), //cpg1.4
  array('Max size for uploaded files (KB)', 'max_upl_size', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max_upload_size&amp;ae=admin_picture_thumbnail_max_upload_size_end'), //cpg1.4
  array('Max width or height for uploaded pictures/videos (pixels)', 'max_upl_width_height', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max_upload_dimension&amp;ae=admin_picture_thumbnail_max_upload_dimension_end'), //cpg1.4
  array('Auto resize images that are larger than max width or height', 'auto_resize', 16, 'f=index.htm&amp;as=admin_picture_thumbnail_auto-resize&amp;ae=admin_picture_thumbnail_auto-resize_end'), //cpg1.4

  'Files and thumbnails advanced settings',
  array('Albums can be private (Note: if you switch from \'yes\' to \'no\' any current private albums will become public)', 'allow_private_albums', 1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_private_toggle&amp;ae=admin_picture_thumb_advanced_private_toggle_end'), //cpg1.4
  array('Show private album Icon to unlogged user','show_private',1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_private_icon_show&amp;ae=admin_picture_thumb_advanced_private_icon_show_end'), //cpg1.4
  array('Characters forbidden in filenames', 'forbiden_fname_char',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_filename_forbidden_chars&amp;ae=admin_picture_thumb_advanced_filename_forbidden_chars_end'), //cpg1.4
  //array('Accepted file extensions for uploaded pictures', 'allowed_file_extensions',0, 'f=index.htm&amp;as=&amp;ae=_end'), //cpg1.4
  array('Allowed image types', 'allowed_img_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_pic_extensions&amp;ae=admin_picture_thumb_advanced_pic_extensions_end'), //cpg1.4
  array('Allowed movie types', 'allowed_mov_types',0, 'f=index.htm&amp;as=admin_thumbs_advanced_movie&amp;ae=admin_thumbs_advanced_movie_end'), //cpg1.4
  array('Movie Playback Autostart', 'media_autostart',1, 'f=index.htm&amp;as=admin_movie_autoplay&amp;ae=admin_movie_autoplay_end'), //cpg1.4
  array('Allowed audio types', 'allowed_snd_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_audio_extensions&amp;ae=admin_picture_thumb_advanced_audio_extensions_end'), //cpg1.4
  array('Allowed document types', 'allowed_doc_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_doc_extensions&amp;ae=admin_picture_thumb_advanced_doc_extensions_end'), //cpg1.4
  array('Method for resizing images','thumb_method',2, 'f=index.htm&amp;as=admin_picture_thumb_advanced_resize_method&amp;ae=admin_picture_thumb_advanced_resize_method_end'), //cpg1.4
  array('Path to ImageMagick \'convert\' utility (example /usr/bin/X11/)', 'impath', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_im_path&amp;ae=admin_picture_thumb_advanced_im_path_end'), //cpg1.4
  //array('Allowed image types (only valid for ImageMagick)', 'allowed_img_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_allowed_imagetypes&amp;ae=admin_picture_thumb_advanced_allowed_imagetypes_end'), //cpg1.4
  array('Command line options for ImageMagick', 'im_options', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_im_commandline&amp;ae=admin_picture_thumb_advanced_im_commandline_end'), //cpg1.4
  array('Read EXIF data in JPEG files', 'read_exif_data', 13, 'f=index.htm&amp;as=admin_picture_thumb_advanced_exif&amp;ae=admin_picture_thumb_advanced_exif_end'), //cpg1.4
  array('Read IPTC data in JPEG files', 'read_iptc_data', 1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_iptc&amp;ae=admin_picture_thumb_advanced_iptc_end'), //cpg1.4
  array('The album directory <a href="#notice1" class="clickable_option">*</a>', 'fullpath', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_albums_dir&amp;ae=admin_picture_thumb_advanced_albums_dir_end'), //cpg1.4
  array('The directory for user files <a href="#notice1" class="clickable_option">*</a>', 'userpics', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_userpics_dir&amp;ae=admin_picture_thumb_advanced_userpics_dir_end'), //cpg1.4
  array('The prefix for intermediate pictures <a href="#notice1" class="clickable_option">*</a>', 'normal_pfx', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_intermediate_prefix&amp;ae=admin_picture_thumb_advanced_intermediate_prefix_end'), //cpg1.4
  array('The prefix for thumbnails <a href="#notice1" class="clickable_option">*</a>', 'thumb_pfx', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_thumbs_prefix&amp;ae=admin_picture_thumb_advanced_thumbs_prefix_end'), //cpg1.4
  array('Default mode for directories', 'default_dir_mode', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_chmod_folder&amp;ae=admin_picture_thumb_advanced_chmod_folder_end'), //cpg1.4
  array('Default mode for files', 'default_file_mode', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_chmod_files&amp;ae=admin_picture_thumb_advanced_chmod_files_end'), //cpg1.4

  'User settings',
  array('Allow new user registrations', 'allow_user_registration', 1, 'f=index.htm&amp;as=admin_allow_registration&amp;ae=admin_allow_registration_end'), //cpg1.4
  array('Allow unlogged users (guest or anonymous) access', 'allow_unlogged_access', 1, 'f=index.htm&amp;as=admin_allow_unlogged_access&amp;ae=admin_allow_unlogged_access_end'), //cpg1.4
  array('User registration requires email verification', 'reg_requires_valid_email', 1, 'f=index.htm&amp;as=admin_registration_verify&amp;ae=admin_registration_verify_end'), //cpg1.4
  array('Notify admin of user registration by email', 'reg_notify_admin_email', 1, 'f=index.htm&amp;as=admin_registration_notify&amp;ae=admin_registration_notify_end'), //cpg1.4
  array('Admin activation of registrations', 'admin_activation', 1, 'f=index.htm&amp;as=admin_activation&amp;ae=admin_activation_end'),  //cpg1.4
  array('Allow two users to have the same email address', 'allow_duplicate_emails_addr', 1, 'f=index.htm&amp;as=admin_allow_duplicate_emails_addr&amp;ae=admin_allow_duplicate_emails_addr_end'), //cpg1.4
  array('Notify admin of user upload awaiting approval', 'upl_notify_admin_email', 1, 'f=index.htm&amp;as=admin_approval_notify&amp;ae=admin_approval_notify_end'), //cpg1.4
  array('Allow logged in users to view memberlist', 'allow_memberlist', 1, 'f=index.htm&amp;as=admin_user_memberlist&amp;ae=admin_user_memberlist_end'), //cpg1.4
  array('Allow users to change their email address in profile', 'allow_email_change', 1, 'f=index.htm&amp;as=admin_user_allow_email_change&amp;ae=admin_user_allow_email_change_end'), //cpg1.4
  array('Allow users to retain control over their pics in public galleries', 'users_can_edit_pics', 1, 'f=index.htm&amp;as=admin_user_editpics_public_start&amp;ae=admin_user_editpics_public_end'), //cpg1.4
  array('Number of failed login attempts until temporary ban (to avoid brute force attacks)', 'login_threshold', 0, 'f=index.htm&amp;as=admin_user_login_start&amp;ae=admin_user_login_end'), //cpg1.4
  array('Duration of a temporary ban after failed logins', 'login_expiry', 0, 'f=index.htm&amp;as=admin_user_login_start&amp;ae=admin_user_login_end'), //cpg1.4
  array('Enable Report to Admin', 'report_post', 1, 'f=index.htm&amp;as=admin_user_enable_report&amp;ae=admin_user_enable_report_end'),  //cpg1.4

// custom profile fields,  //cpg1.4
  'Custom fields for user profile (leave blank if unused).
  Use Profile 6 for long entries, such as biographies', //cpg1.4
  array('Profile 1 name', 'user_profile1_name', 0, 'f=index.htm&amp;as=admin_custom&amp;ae=admin_custom_end'), //cpg1.4
  array('Profile 2 name', 'user_profile2_name', 0), //cpg1.4
  array('Profile 3 name', 'user_profile3_name', 0), //cpg1.4
  array('Profile 4 name', 'user_profile4_name', 0), //cpg1.4
  array('Profile 5 name', 'user_profile5_name', 0), //cpg1.4
  array('Profile 6 name', 'user_profile6_name', 0), //cpg1.4

  'Custom fields for image description (leave blank if unused)',
  array('Field 1 name', 'user_field1_name', 0, 'f=index.htm&amp;as=admin_custom_image&amp;ae=admin_custom_image_end'), //cpg1.4
  array('Field 2 name', 'user_field2_name', 0),
  array('Field 3 name', 'user_field3_name', 0),
  array('Field 4 name', 'user_field4_name', 0),

  'Cookies settings',
  array('Cookie name', 'cookie_name', 0, 'f=index.htm&amp;as=admin_cookie_name&amp;ae=admin_cookie_name_end'), //cpg1.4
  array('Cookie path', 'cookie_path', 0, 'f=index.htm&amp;as=admin_cookie_path&amp;ae=admin_cookie_path_end'), //cpg1.4

  'Email settings  (usually nothing has to be changed here; leave all fields blank when not sure)', //cpg1.4
  array('SMTP Host (when left blank, sendmail will be used)', 'smtp_host', 0, 'f=index.htm&amp;as=admin_email&amp;ae=admin_email_end'), //cpg1.4
  array('SMTP Username', 'smtp_username', 0), //cpg1.4
  array('SMTP Password', 'smtp_password', 0), //cpg1.4

  'Logging and statistics', //cpg1.4
  array('Logging mode <a href="#notice3" class="clickable_option">***</a>', 'log_mode', 11, 'f=index.htm&amp;as=admin_logging_log_mode&amp;ae=admin_logging_log_mode_end'), //cpg1.4
  array('Log ecards', 'log_ecards', 1, 'f=index.htm&amp;as=admin_general_log_ecards&amp;ae=admin_general_log_ecards_end'), //cpg1.4
  array('Keep detailed vote statistics','vote_details',1, 'f=index.htm&amp;as=admin_logging_votedetails&amp;ae=admin_logging_votedetails_end'), //cpg1.4
  array('Keep detailed hit statistics','hit_details',1, 'f=index.htm&amp;as=admin_logging_hitdetails&amp;ae=admin_logging_hitdetails_end'), //cpg1.4

  'Maintenance settings', //cpg1.4
  array('Enable debug mode', 'debug_mode', 9, 'f=index.htm&amp;as=debug_mode&amp;ae=debug_mode_end'), //cpg1.4
  array('Display notices in debug mode', 'debug_notice', 1, 'f=index.htm&amp;as=admin_misc_debug_notices&amp;ae=admin_misc_debug_notices_end'), //cpg1.4
  array('Gallery is offline', 'offline', 1, 'f=index.htm&amp;as=admin_general_offline&amp;ae=admin_general_offline_end'), //cpg1.4
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
  'empty_name_or_com' => 'You need to type your name and a comment',
  'com_added' => 'Your comment was added',
  'alb_need_title' => 'You have to provide a title for the album !',
  'no_udp_needed' => 'No update needed.',
  'alb_updated' => 'The album was updated',
  'unknown_album' => 'Selected album does not exist or you don\'t have permission to upload in this album',
  'no_pic_uploaded' => 'No file was uploaded !<br /><br />If you have really selected a file to upload, check that the server allows file uploads...',
  'err_mkdir' => 'Failed to create directory %s !',
  'dest_dir_ro' => 'Destination directory %s is not writable by the script !',
  'err_move' => 'Impossible to move %s to %s !',
  'err_fsize_too_large' => 'The size of file you have uploaded is too large (maximum allowed is %s x %s) !', //obsolete since cpg1.3 - consider removal in cpg1.4 once upload.php has been overhauled
  'err_imgsize_too_large' => 'The size of the file you have uploaded is too large (maximum allowed is %s KB) !', //obsolete since cpg1.3 - consider removal in cpg1.4 once upload.php has been overhauled
  'err_invalid_img' => 'The file you have uploaded is not a valid image !',
  'allowed_img_types' => 'You can only upload %s images.',
  'err_insert_pic' => 'The file \'%s\' can\'t be inserted in the album ',
  'upload_success' => 'Your file was uploaded successfully.<br /><br />It will be visible after admin approval.',
  'notify_admin_email_subject' => '%s - Upload notification',
  'notify_admin_email_body' => 'A picture has been uploaded by %s that needs your approval. Visit %s',
  'info' => 'Information',
  'com_added' => 'Comment added',
  'alb_updated' => 'Album updated',
  'err_comment_empty' => 'Your comment is empty !',
  'err_invalid_fext' => 'Only files with the following extensions are accepted : <br /><br />%s.',
  'no_flood' => 'Sorry but you are already the author of the last comment posted for this file<br /><br />Edit the comment you have posted if you want to modify it',
  'redirect_msg' => 'You are being redirected.<br /><br /><br />Click \'CONTINUE\' if the page does not refresh automatically',
  'upl_success' => 'Your file was successfully added',
  'email_comment_subject' => 'Comment posted on Coppermine Photo Gallery',
  'email_comment_body' => 'Someone has posted a comment on your gallery. See it at',
  'album_not_selected' => 'Album not selected', //cpg1.4
  'com_author_error' => 'A registered user is using this nickname, login or use another one', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
  'caption' => 'Caption',
  'fs_pic' => 'full size image',
  'del_success' => 'successfully deleted',
  'ns_pic' => 'normal size image',
  'err_del' => 'can\'t be deleted',
  'thumb_pic' => 'thumbnail',
  'comment' => 'comment',
  'im_in_alb' => 'image in album',
  'alb_del_success' => 'Album &laquo;%s&raquo; deleted', //cpg1.4
  'alb_mgr' => 'Album Manager',
  'err_invalid_data' => 'Invalid data received in \'%s\'',
  'create_alb' => 'A criar o álbum \'%s\'',
  'update_alb' => 'Actualizando o álbum \'%s\' com o título \'%s\' e índice \'%s\'',
  'del_pic' => 'Apagar ficheiro',
  'del_alb' => 'Apagar álbum',
  'del_user' => 'Apagar utilizador',
  'err_unknown_user' => 'The selected user does not exist !',
  'err_empty_groups' => 'There\'s no group table, or the group table is empty!', //cpg1.4
  'comment_deleted' => 'Comment was succesfully deleted',
  'npic' => 'Picture', //cpg1.4
  'pic_mgr' => 'Picture Manager', //cpg1.4
  'update_pic' => 'Updating picture \'%s\' with filename \'%s\' and index \'%s\'', //cpg1.4
  'username' => 'utilizador', //cpg1.4
  'anonymized_comments' => '%s comment(s) anonymized', //cpg1.4
  'anonymized_uploads' => '%s public upload(s) anonymized', //cpg1.4
  'deleted_comments' => '%s comment(s) deleted', //cpg1.4
  'deleted_uploads' => '%s public upload(s) deleted', //cpg1.4
  'user_deleted' => 'user %s deleted', //cpg1.4
  'activate_user' => 'Activate user', //cpg1.4
  'user_already_active' => 'Account has already been active', //cpg1.4
  'activated' => 'Activated', //cpg1.4
  'deactivate_user' => 'Deactivate user', //cpg1.4
  'user_already_inactive' => 'Account has already been inactive', //cpg1.4
  'deactivated' => 'Deactivated', //cpg1.4
  'reset_password' => 'Reset password(s)', //cpg1.4
  'password_reset' => 'Password reset to %s', //cpg1.4
  'change_group' => 'Change primary group', //cpg1.4
  'change_group_to_group' => 'Changing from %s to %s', //cpg1.4
  'add_group' => 'Add secondary group', //cpg1.4
  'add_group_to_group' => 'Adding user %s to group %s. He\'s now member of %s as primary and of %s as secondary membergroup(s).', //cpg1.4
  'status' => 'Status', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File displayecard.php
// ------------------------------------------------------------------------- //

if (defined('DISPLAYECARD_PHP')) {

$lang_displayecard_php = array(
  'invalid_data' => 'Os dados de acesso ao conteúdo do Ecard foram corrompidos pelo seu programa de email! Verifique se o link está completo!', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File displayimage.php
// ------------------------------------------------------------------------- //

if (defined('DISPLAYIMAGE_PHP')){

$lang_display_image_php = array(
  'confirm_del' => 'Are you sure you want to DELETE this file ? \\nComments will also be deleted.', //js-alert
  'del_pic' => 'DELETE THIS FILE',
  'size' => '%s x %s pixels',
  'views' => '%s times',
  'slideshow' => 'Slideshow',
  'stop_slideshow' => 'STOP SLIDESHOW',
  'view_fs' => 'Click to view full size image',
  'edit_pic' => 'Edit file information', //cpg1.4
  'crop_pic' => 'Crop and Rotate',
  'set_player' => 'Change player',
);

$lang_picinfo = array(
  'title' =>'File information',
  'Filename' => 'Filename',
  'Album name' => 'Album name',
  'Rating' => 'Rating (%s votes)',
  'Keywords' => 'Keywords',
  'File Size' => 'File Size',
  'Date Added' => 'Date added', //cpg1.4
  'Dimensions' => 'Dimensions',
  'Displayed' => 'Displayed',
  'URL' => 'URL', //cpg1.4
  'Make' => 'Make', //cpg1.4
  'Model' => 'Model', //cpg1.4
  'DateTime' => 'Date Time', //cpg1.4
  'ISOSpeedRatings'=>'ISO', //cpg1.4
  'MaxApertureValue' => 'Max Aperture', //cpg1.4
  'FocalLength' => 'Focal length', //cpg1.4
  'Comment' => 'Comment',
  'addFav'=>'Add to Favorites',
  'addFavPhrase'=>'Favorites',
  'remFav'=>'Remove from Favorites',
  'iptcTitle'=>'IPTC Title',
  'iptcCopyright'=>'IPTC Copyright',
  'iptcKeywords'=>'IPTC Keywords',
  'iptcCategory'=>'IPTC Category',
  'iptcSubCategories'=>'IPTC Sub Categories',
  'ColorSpace' => 'Color Space', //cpg1.4
  'ExposureProgram' => 'Exposure Program', //cpg1.4
  'Flash' => 'Flash', //cpg1.4
  'MeteringMode' => 'Metering Mode', //cpg1.4
  'ExposureTime' => 'Exposure Time', //cpg1.4
  'ExposureBiasValue' => 'Exposure Bias', //cpg1.4
  'ImageDescription' => ' Image Description', //cpg1.4
  'Orientation' => 'Orientation', //cpg1.4
  'xResolution' => 'X Resolution', //cpg1.4
  'yResolution' => 'Y Resolution', //cpg1.4
  'ResolutionUnit' => 'Resolution Unit', //cpg1.4
  'Software' => 'Software', //cpg1.4
  'YCbCrPositioning' => 'YCbCrPositioning', //cpg1.4
  'ExifOffset' => 'Exif Offset', //cpg1.4
  'IFD1Offset' => 'IFD1 Offset', //cpg1.4
  'FNumber' => 'FNumber', //cpg1.4
  'ExifVersion' => 'Exif Version', //cpg1.4
  'DateTimeOriginal' => 'DateTime Original', //cpg1.4
  'DateTimedigitized' => 'DateTime digitized', //cpg1.4
  'ComponentsConfiguration' => 'Components Configuration', //cpg1.4
  'CompressedBitsPerPixel' => 'Compressed Bits Per Pixel', //cpg1.4
  'LightSource' => 'Light Source', //cpg1.4
  'ISOSetting' => 'ISO Setting', //cpg1.4
  'ColorMode' => 'Color Mode', //cpg1.4
  'Quality' => 'Quality', //cpg1.4
  'ImageSharpening' => 'Image Sharpening', //cpg1.4
  'FocusMode' => 'Focus Mode', //cpg1.4
  'FlashSetting' => 'Flash Setting', //cpg1.4
  'ISOSelection' => 'ISO Selection', //cpg1.4
  'ImageAdjustment' => 'Image Adjustment', //cpg1.4
  'Adapter' => 'Adapter', //cpg1.4
  'ManualFocusDistance' => 'Manual Focus Distance', //cpg1.4
  'DigitalZoom' => 'Digital Zoom', //cpg1.4
  'AFFocusPosition' => 'AF Focus Position', //cpg1.4
  'Saturation' => 'Saturation', //cpg1.4
  'NoiseReduction' => 'Noise Reduction', //cpg1.4
  'FlashPixVersion' => 'Flash Pix Version', //cpg1.4
  'ExifImageWidth' => 'Exif Image Width', //cpg1.4
  'ExifImageHeight' => 'Exif Image Height', //cpg1.4
  'ExifInteroperabilityOffset' => 'Exif Interoperability Offset', //cpg1.4
  'FileSource' => 'File Source', //cpg1.4
  'SceneType' => 'Scene Type', //cpg1.4
  'CustomerRender' => 'Customer Render', //cpg1.4
  'ExposureMode' => 'Exposure Mode', //cpg1.4
  'WhiteBalance' => 'White Balance', //cpg1.4
  'DigitalZoomRatio' => 'Digital Zoom Ratio', //cpg1.4
  'SceneCaptureMode' => 'Scene Capture Mode', //cpg1.4
  'GainControl' => 'Gain Control', //cpg1.4
  'Contrast' => 'Contrast', //cpg1.4
  'Sharpness' => 'Sharpness', //cpg1.4
  'ManageExifDisplay' => 'Manage Exif Display', //cpg1.4
  'submit' => 'Submit', //cpg1.4
  'success' => 'Information updated successfully.', //cpg1.4
  'details' => 'Details', //cpg1.4
);

$lang_display_comments = array(
  'OK' => 'OK',
  'edit_title' => 'Edit this comment',
  'confirm_delete' => 'Are you sure you want to delete this comment ?', //js-alert
  'add_your_comment' => 'Add your comment',
  'name'=>'Name',
  'comment'=>'Comment',
  'your_name' => 'Anon',
  'report_comment_title' => 'Report this comment to the administrator', //cpg1.4
);

$lang_fullsize_popup = array(
  'click_to_close' => 'Click image to close this window',
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
  'title' => 'Send an e-card',
  'invalid_email' => '<font color="red"><b>Warning</b></font>: invalid email address:', //cpg1.4
  'ecard_title' => 'An e-card from %s for you',
  'error_not_image' => 'Only images can be sent as an ecard.',
  'view_ecard' => 'Alternate link if the e-card does not display correctly', //cpg1.4
  'view_ecard_plaintext' => 'To view the ecard, copy and paste this url into your browser\'s address bar:', //cpg1.4
  'view_more_pics' => 'View more pictures !', //cpg1.4
  'send_success' => 'Your ecard was sent',
  'send_failed' => 'Sorry but the server can\'t send your e-card...',
  'from' => 'From',
  'your_name' => 'Your name',
  'your_email' => 'Your email address',
  'to' => 'To',
  'rcpt_name' => 'Recipient name',
  'rcpt_email' => 'Recipient email address',
  'greetings' => 'Heading', //cpg1.4
  'message' => 'Message', //cpg1.4
  'ecards_footer' => 'Sent by %s from IP %s at %s (Gallery time)', //cpg1.4
  'preview' => 'Preview of the ecard', //cpg1.4
  'preview_button' => 'Preview', //cpg1.4
  'submit_button' => 'Send ecard', //cpg1.4
  'preview_view_ecard' => 'This will be the alternate link to the ecard once it gets generated. It won\'t work for previews.', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File report_file.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('REPORT_FILE_PHP') || defined('DISPLAYREPORT_PHP')) $lang_report_php =array(
  'title' => 'Report to administrator', //cpg1.4
  'invalid_email' => '<b>Warning</b> : invalid email address !', //cpg1.4
  'report_subject' => 'A report from %s on a gallery %s', //cpg1.4
  'view_report' => 'Alternate link if the report does not display correctly', //cpg1.4
  'view_report_plaintext' => 'To view the report, copy and paste this url into your browser\'s address bar:', //cpg1.4
  'view_more_pics' => 'Gallery', //cpg1.4
  'send_success' => 'Your report was sent', //cpg1.4
  'send_failed' => 'Sorry but the server can\'t send your report...', //cpg1.4
  'from' => 'From', //cpg1.4
  'your_name' => 'Your name', //cpg1.4
  'your_email' => 'Your email address', //cpg1.4
  'to' => 'To', //cpg1.4
  'administrator' => 'Administrator/Mod', //cpg1.4
  'subject' => 'Subject', //cpg1.4
  'comment_field_name' => 'Reporting on Comment by "%s"', //cpg1.4
  'reason' => 'Reason', //cpg1.4
  'message' => 'Message', //cpg1.4
  'report_footer' => 'Sent by %s from IP %s at %s (Gallery time)', //cpg1.4
  'obscene' => 'obscene', //cpg1.4
  'offensive' => 'offensive', //cpg1.4
  'misplaced' => 'off-topic/misplaced', //cpg1.4
  'missing' => 'missing', //cpg1.4
  'issue' => 'error/cannot view', //cpg1.4
  'other' => 'other', //cpg1.4
  'refers_to' => 'File report refers to', //cpg1.4
  'reasons_list_heading' => 'reason(s) for report:', //cpg1.4
  'no_reason_given' => 'no reason was given', //cpg1.4
  'go_comment' => 'Go to comment', //cpg1.4
  'view_comment' => 'View full report with comment', //cpg1.4
  'type_file' => 'file', //cpg1.4
  'type_comment' => 'comment', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
  'pic_info' => 'File info',
  'album' => 'Album',
  'title' => 'Title',
  'filename' => 'Filename', //cpg1.4
  'desc' => 'Description',
  'keywords' => 'Keywords',
  'new_keyword' => 'New keyword', //cpg1.4
  'new_keywords' => 'New keywords found', //cpg1.4
  'existing_keyword' => 'Existing keyword', //cpg1.4
  'pic_info_str' => '%s &times; %s - %s KB - %s views - %s votes',
  'approve' => 'Approve file',
  'postpone_app' => 'Postpone approval',
  'del_pic' => 'Delete file',
  'del_all' => 'Delete ALL files', //cpg1.4
  'read_exif' => 'Read EXIF info again',
  'reset_view_count' => 'Reset view counter',
  'reset_all_view_count' => 'Reset ALL view counters', //cpg1.4
  'reset_votes' => 'Reset votes',
  'reset_all_votes' => 'Reset ALL votes', //cpg1.4
  'del_comm' => 'Delete comments',
  'del_all_comm' => 'Delete ALL comments', //cpg1.4
  'upl_approval' => 'Upload approval', //cpg1.4
  'edit_pics' => 'Edit files',
  'see_next' => 'See next files',
  'see_prev' => 'See previous files',
  'n_pic' => '%s files',
  'n_of_pic_to_disp' => 'Number of files to display',
  'apply' => 'Apply modifications',
  'crop_title' => 'Coppermine Picture Editor',
  'preview' => 'Preview',
  'save' => 'Save picture',
  'save_thumb' =>'Save as thumbnail',
  'gallery_icon' => 'Make this my icon', //cpg1.4
  'sel_on_img' =>'The selection has to be entirely on the image!', //js-alert
  'album_properties' =>'Album properties', //cpg1.4
  'parent_category' =>'Parent category', //cpg1.4
  'thumbnail_view' =>'Thumbnail view', //cpg1.4
  'select_unselect' =>'select/unselect all', //cpg1.4
  'file_exists' => "Destination file '%s' already exists.", //cpg1.4
  'rename_failed' => "Failed to rename '%s' to '%s'.", //cpg1.4
  'src_file_missing' => "Source file '%s' is missing.", // cpg 1.4
  'mime_conv' => "Cannot convert file from '%s' to '%s'",//cpg1.4
  'forb_ext' => 'Forbidden file extension.',//cpg1.4
);

// ------------------------------------------------------------------------- //
// File faq.php
// ------------------------------------------------------------------------- //

if (defined('FAQ_PHP')) $lang_faq_php = array(
  'faq' => 'Frequently Asked Questions',
  'toc' => 'Table of contents',
  'question' => 'Question: ',
  'answer' => 'Answer: ',
);

if (defined('FAQ_PHP')) $lang_faq_data = array(
  'General FAQ',
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
  array('Where can I get this program for my site?', 'Coppermine is a free Multimedia Gallery, released under GNU GPL. It is full of features and has been ported to various platforms. Visit the <a href="http://coppermine.sf.net/">Coppermine Home Page</a> to find out more or download it.', 'offline', 0),

  'Navigating the Site',
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
  'forgot_passwd' => 'Password reminder',
  'err_already_logged_in' => 'You are already logged in !',
  'enter_email' => 'Enter your email address', //cpg1.4
  'submit' => 'go',
  'illegal_session' => 'Forgot password session invalid or has expired.', //cpg1.4
  'failed_sending_email' => 'The password reminder email can\'t be sent !',
  'email_sent' => 'An email with your username and new password was sent to %s', //cpg1.4
  'verify_email_sent' => 'An email has been sent to %s. Please check your email to complete the process.', //cpg1.4
  'err_unk_user' => 'Selected user does not exist!',
  'account_verify_subject' => '%s - New password request', //cpg1.4
  'account_verify_body' => 'You have requested to a new password. If you would like to proceed with having a new password sent to you, click on the following link:

%s', //cpg1.4
  'passwd_reset_subject' => '%s - Your New Password', //cpg1.4
  'passwd_reset_body' => 'Here is the new password you requested:
Username: %s
Password: %s
Click %s to log in.', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
  'group_name' => 'Grupo', //cpg1.4
  'permissions' => 'Previlégios', //cpg1.4
  'public_albums' => 'Adicionar ficheiros em álbuns públicos', //cpg1.4
  'personal_gallery' => 'Galeria pessoal', //cpg1.4
  'upload_method' => 'método de envio', //cpg1.4
  'disk_quota' => 'Quota', //cpg1.4
  'rating' => 'Avaliar', //cpg1.4
  'ecards' => 'Ecards', //cpg1.4
  'comments' => 'Comentar', //cpg1.4
  'allowed' => 'Permitido', //cpg1.4
  'approval' => 'Aprovação', //cpg1.4
  'boxes_number' => 'No. de caixas', //cpg1.4
  'variable' => 'variável', //cpg1.4
  'fixed' => 'fixo', //cpg1.4
  'apply' => 'Aplicar modificações',
  'create_new_group' => 'Criar novo grupo',
  'del_groups' => 'Apagar grupo(s) selecionado(s)',
  'confirm_del' => 'Aviso: Quando apaga um grupo, os seus utilizadores são transferidos para o grupo \'Registados\' !\n\nDeseja continuar ?', //js-alert
  'title' => 'Administração grupo de utilizadores',
  'num_file_upload' => 'Caixas de envio de ficheiros', //cpg1.4
  'num_URI_upload' => 'Caixas de envio URI', //cpg1.4
  'reset_to_default' => 'Restabelece o nome por defeito (%s) - recomendado!', //cpg1.4
  'error_group_empty' => 'A tabela de grupos estava vazia !<br /><br />Foram criados os grupos por defeito, por favor recarregue esta página', //cpg1.4
  'explain_greyed_out_title' => 'Porque está esta fila a cizento(desactivada)?', //cpg1.4
  'explain_guests_greyed_out_text' => 'Não pode alterar as propriedades deste grupo porque activou a opção &quot; Permitir acesso a utilizadores não validados(convidados ou anónimos)&quot; para &quot;No&quot; na página de configuração. Os convidados (membros do grupo %s) não têm outro previlégio senão o de se validar(iniciar sessão); Então as definições de grupo não são aplicáveis a estes utilizadores.', //cpg1.4
  'explain_banned_greyed_out_text' => 'Não pode alterar as propriedades do grupo %s porque de qualquer forma, os seus membros não podem fazer nada.', //cpg1.4
  'group_assigned_album' => 'álbun(s) atribuidos', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
  'welcome' => 'Seja Bem Vindo !',
);

$lang_album_admin_menu = array(
  'confirm_delete' => 'Tem certeza que deseja APAGAR este álbum ? \\nTodas as imagens e comentários serão também apagados.', //js-alert
  'delete' => 'APAGAR',
  'modify' => 'PROPRIEDADES',
  'edit_pics' => 'EDITAR',
);

$lang_list_categories = array(
  'home' => 'Início',
  'stat1' => '<b>[pictures]</b> imagens em <b>[albums]</b> álbuns e <b>[cat]</b> categorias com <b>[comments]</b> comentários visualizado <b>[views]</b> vezes',
  'stat2' => '<b>[pictures]</b> imagens em <b>[albums]</b> álbuns visualizados <b>[views]</b> vezes',
  'xx_s_gallery' => 'Galeria de %s',
  'stat3' => '<b>[pictures]</b> imagens em <b>[albums]</b> álbuns com <b>[comments]</b> comentários visualizados <b>[views]</b> vezes',
);

$lang_list_users = array(
  'user_list' => 'Lista de Utilizadores',
  'no_user_gal' => 'Não existem Utilizadores com Galeria',
  'n_albums' => '%s álbun(s)',
  'n_pics' => '%s imagem(s)',
);

$lang_list_albums = array(
  'n_pictures' => '%s imagens',
  'last_added' => ', última adicionada %s',
  'n_link_pictures' => '%s imagens ligadas', //cpg1.4
  'total_pictures' => '%s total de imagens', //cpg1.4
);

}

// ------------------------------------------------------------------------- //
// File keywordmgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('KEYWORDMGR_PHP')) $lang_keywordmgr_php = array(
  'title' => 'Manage keywords', //cpg1.4
  'edit' => 'edit', //cpg1.4
  'delete' => 'delete', //cpg1.4
  'search' => 'search', //cpg1.4
  'keyword_test_search' => 'search for %s in new window', //cpg1.4
  'keyword_del' => 'delete the keyword %s', //cpg1.4
  'confirm_delete' => 'Are you sure you want to delete the keyword %s from the whole gallery?', //cpg1.4  // js-alert
  'change_keyword' => 'change keyword', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
  'login' => 'Login',
  'enter_login_pswd' => 'Insira nome de utilizador e senha para entrar',
  'username' => 'Utilizador',
  'password' => 'Senha',
  'remember_me' => 'Gravar Senha',
  'welcome' => 'Seja Bem Vindo(a) %s ...',
  'err_login' => '*** Não foi possivel validar. Tente novamente ***',
  'err_already_logged_in' => 'Já se encontra validado !',
  'forgot_password_link' => 'Esqueci-me da senha',
  'cookie_warning' => 'AVISO: O seu browser não aceita scripts (cookies)', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
  'logout' => 'Logout',
  'bye' => 'Volte sempre %s ...',
  'err_not_loged_in' => 'Não se encontra validado !',
);

// ------------------------------------------------------------------------- //
// File minibrowser.php  //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('MINIBROWSER_PHP')) $lang_minibrowser_php = array(
  'close' => 'close', //cpg1.4
  'submit' => 'OK', //cpg1.4
  'up' => 'up one level', //cpg1.4
  'current_path' => 'current path', //cpg1.4
  'select_directory' => 'please select a directory', //cpg1.4
  'click_to_close' => 'Click image to close this window',
);

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
  'upd_alb_n' => 'Actualizar álbum %s',
  'general_settings' => 'Definições Gerais',
  'alb_title' => 'Título do álbum',
  'alb_cat' => 'Categoria do álbum',
  'alb_desc' => 'Descrição do álbum',
  'alb_keyword' => 'Palavra chave do álbum', //cpg1.4
  'alb_thumb' => 'Miniatura do Álbum',
  'alb_perm' => 'Permissões para este álbum',
  'can_view' => 'O álbum pode ser visualizado por',
  'can_upload' => 'Visitantes podem enviar imagens',
  'can_post_comments' => 'Visitantes podem deixar comentários',
  'can_rate' => 'visitantes podem classificar imagens',
  'user_gal' => 'Galeria do Utilizador',
  'no_cat' => '* Sem categoria *',
  'alb_empty' => 'O álbum está vazio',
  'last_uploaded' => 'Última enviada',
  'public_alb' => 'Todos (álbum público)',
  'me_only' => 'Apenas eu',
  'owner_only' => 'Apenas o dono do álbum (%s)',
  'groupp_only' => 'Membros do grupo \'%s\'',
  'err_no_alb_to_modify' => 'Não existe álbum na base de dados que possa modificar.',
  'update' => 'Actualizar álbum',
  'reset_album' => 'Restabelecer álbum', //cpg1.4
  'reset_views' => 'Restabelecer contador de visualizações a &quot;0&quot; em %s', //cpg1.4
  'reset_rating' => 'Restabelecer classificações de todas as imagens em %s', //cpg1.4
  'delete_comments' => 'Apagar todos os comentários deixados em %s', //cpg1.4
  'delete_files' => 'Apagar %sIrreversivelmente%s todas as imagens em %s', //cpg1.4
  'views' => 'visualizaçoes', //cpg1.4
  'votes' => 'votos', //cpg1.4
  'comments' => 'comentários', //cpg1.4
  'files' => 'ficheiros', //cpg1.4
  'submit_reset' => 'submeter alterações', //cpg1.4
  'reset_views_confirm' => 'Tenho a certeza', //cpg1.4
  'notice1' => '(*) dependente da configuração dos %sgrupos%s',  //cpg1.4 //(do not translate %s!)
  'alb_password' => 'Senha do álbum', //cpg1.4
  'alb_password_hint' => 'Pista para senha do álbum', //cpg1.4
  'edit_files' =>'Edição de ficheiros', //cpg1.4
  'parent_category' =>'Categoria mãe', //cpg1.4
  'thumbnail_view' =>'Vista de miniatura', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File phpinfo.php
// ------------------------------------------------------------------------- //

if (defined('PHPINFO_PHP')) $lang_phpinfo_php = array(
  'php_info' => 'PHP info',
  'explanation' => 'This is the output generated by the PHP-function <a href="http://www.php.net/phpinfo">phpinfo()</a>, displayed within Coppermine (trimming the output at the right side).',
  'no_link' => 'Having others see your phpinfo can be a security risk, that\'s why this page is only visible when you\'re logged in as admin. You can not post a link to this page for others, they will be denied access.',
);

// ------------------------------------------------------------------------- //
// File picmgr.php //cpg1.4
// ------------------------------------------------------------------------- //
if (defined('PICMGR_PHP')) $lang_picmgr_php = array(
  'pic_mgr' => 'Gestor de Imagens', //cpg1.4
  'select_album' => 'Selecione Álbum', //cpg1.4
  'delete' => 'Apagar', //cpg1.4
  'confirm_delete1' => 'Tem a certeza de que quer apagar esta imagem ?', //cpg1.4
  'confirm_delete2' => '\nA imagem será permanentemente apagada.', //cpg1.4
  'apply_modifs' => 'Aplicar modificações', //cpg1.4
  'confirm_modifs' => 'Confirmar modificações', //cpg1.4
  'pic_need_name' => 'A imagem necessita de ter um nome !', //cpg1.4
  'no_change' => 'Não fez qualquer alteração !', //cpg1.4
  'no_album' => '* Nenhum álbum *', //cpg1.4
  'explanation_header' => 'A ordem personalizada que você pode especificar nesta página só será levada em conta se', //cpg1.4
  'explanation1' => 'o administrador selecionou na "Ordem de ficheiros por defeito" na configuração o valor "Posição descendente" ou "Posição ascendente" (configuração global para todos os utilizadores sem definições pessoais)', //cpg1.4
  'explanation2' => 'o utilizador definiu "Posição descendente" ou "Posição ascendente" na página de miniaturas (configuração por utilizador)', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File pluginmgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('PLUGINMGR_PHP')){

$lang_pluginmgr_php = array(
  'confirm_uninstall' => 'Are you sure you want to UNINSTALL this plugin', //cpg1.4
  'confirm_delete' => 'Are you sure you want to DELETE this plugin', //cpg1.4
  'pmgr' => 'Plugin Manager', //cpg1.4
  'name' => 'Name', //cpg1.4
  'author' => 'Author', //cpg1.4
  'desc' => 'Description', //cpg1.4
  'vers' => 'v', //cpg1.4
  'i_plugins' => 'Installed Plugins', //cpg1.4
  'n_plugins' => 'Plugins Not installed', //cpg1.4
  'none_installed' => 'None Installed', //cpg1.4
  'operation' => 'Operation', //cpg1.4
  'not_plugin_package' => 'The file uploaded is not a plugin package.', //cpg1.4
  'copy_error' => 'There was an error copying the package to the plugins folder.', //cpg1.4
  'upload' => 'Upload', //cpg1.4
  'configure_plugin' => 'Configure plugin', //cpg1.4
  'cleanup_plugin' => 'Cleanup plugin', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
  'already_rated' => 'Sorry but you have already rated this file',
  'rate_ok' => 'Your vote was accepted',
  'forbidden' => 'You can not rate your own files.',
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
While the administrators of {SITE_NAME} will attempt to remove or edit any generally objectionable material as quickly as possible, it is impossible to review every post. Therefore you acknowledge that all posts made to this site express the views and opinions of the author and not the administrators or webmaster (except for posts by these people) and hence will not be held liable.<br />
<br />
You agree not to post any abusive, obscene, vulgar, slanderous, hateful, threatening, sexually-orientated or any other material that may violate any applicable laws. You agree that the webmaster, administrator and moderators of {SITE_NAME} have the right to remove or edit any content at any time should they see fit. As a user you agree to any information you have entered above being stored in a database. While this information will not be disclosed to any third party without your consent the webmaster and administrator cannot be held responsible for any hacking attempt that may lead to the data being compromised.<br />
<br />
This site uses cookies to store information on your local computer. These cookies serve only to improve your viewing pleasure. The email address is used only for confirming your registration details and password.<br />
<br />
By clicking 'I agree' below you agree to be bound by these conditions.
EOT;

$lang_register_php = array(
  'page_title' => 'User registration',
  'term_cond' => 'Terms and conditions',
  'i_agree' => 'I agree',
  'submit' => 'Submit registration',
  'err_user_exists' => 'The username you have entered already exist, please choose a different one',
  'err_password_mismatch' => 'The two passwords does not match, please input them again',
  'err_uname_short' => 'Username must be 2 characters long minimum',
  'err_password_short' => 'Password must be 2 characters long minimum',
  'err_uname_pass_diff' => 'Username and password must be different',
  'err_invalid_email' => 'Email address is invalid',
  'err_duplicate_email' => 'Another user has already registered with the email address you entered',
  'enter_info' => 'Input registration information',
  'required_info' => 'Required information',
  'optional_info' => 'Optional information',
  'username' => 'Username',
  'password' => 'Password',
  'password_again' => 'Re-enter password',
  'email' => 'Email',
  'location' => 'Location',
  'interests' => 'Interests',
  'website' => 'Home page',
  'occupation' => 'Occupation',
  'error' => 'ERROR',
  'confirm_email_subject' => '%s - Registration confirmation',
  'information' => 'Information',
  'failed_sending_email' => 'The registration confirmation email can\'t be send !',
  'thank_you' => 'Thank you for registering.<br /><br />An email with information on how to activate your account was sent to the email address you provided.',
  'acct_created' => 'Your account has been created and you can now login with your username and password',
  'acct_active' => 'Your account is now active and you can login with your username and password',
  'acct_already_act' => 'Account is already active!', //cpg1.4
  'acct_act_failed' => 'This account can\'t be activated !',
  'err_unk_user' => 'Selected user does not exist !',
  'x_s_profile' => '%s\'s profile',
  'group' => 'Group',
  'reg_date' => 'Joined',
  'disk_usage' => 'Disk usage',
  'change_pass' => 'Change password',
  'current_pass' => 'Current password',
  'new_pass' => 'New password',
  'new_pass_again' => 'New password again',
  'err_curr_pass' => 'Current password is incorrect',
  'apply_modif' => 'Apply modifications',
  'change_pass' => 'Change my password',
  'update_success' => 'Your profile was updated',
  'pass_chg_success' => 'Your password was changed',
  'pass_chg_error' => 'Your password was not changed',
  'notify_admin_email_subject' => '%s - Registration notification',
  'last_uploads' => 'Last uploaded file.<br />Click to see all uploads by', //cpg1.4
  'last_comments' => 'Last comment.<br />Click to see all comments made by', //cpg1.4
  'notify_admin_email_body' => 'A new user with the username "%s" has registered in your gallery',
  'pic_count' => 'Files uploaded', //cpg1.4
  'notify_admin_request_email_subject' => '%s - Registration request', //cpg1.4
  'thank_you_admin_activation' => 'Thank you.<br /><br />Your request for account activation was sent to the admin. You will receive an email if approved.', //cpg1.4
  'acct_active_admin_activation' => 'The account is now active and an email has been sent to the user.', //cpg1.4
  'notify_user_email_subject' => '%s - Activation notification', //cpg1.4
);

$lang_register_confirm_email = <<<EOT
Thank you for registering at {SITE_NAME}

In order to activate your account with username "{USER_NAME}", you need to click on the link below or copy and paste it in your web browser.

<a href="{ACT_LINK}">{ACT_LINK}</a>

Regards,

The management of {SITE_NAME}

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
  'title' => 'Examinar comentários',
  'no_comment' => 'Não existem comentários para examinar',
  'n_comm_del' => '%s comentários(s) apagado(s)',
  'n_comm_disp' => 'Número de comentários a exibir',
  'see_prev' => 'Ver anterior',
  'see_next' => 'Ver próximo',
  'del_comm' => 'Apagar comentários selecionados',
  'user_name' => 'Nome', //cpg1.4
  'date' => 'Data', //cpg1.4
  'comment' => 'Comentário', //cpg1.4
  'file' => 'Ficheiro', //cpg1.4
  'name_a' => 'nome utilizador ascendente', //cpg1.4
  'name_d' => 'nome utilizador descendente', //cpg1.4
  'date_a' => 'Data ascendente', //cpg1.4
  'date_d' => 'Data descendente', //cpg1.4
  'comment_a' => 'Comentário ascendente', //cpg1.4
  'comment_d' => 'Comentário descendente', //cpg1.4
  'file_a' => 'Ficheiro ascendente', //cpg1.4
  'file_d' => 'Ficheiro descendente', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File search.php                                                           //
// ------------------------------------------------------------------------- //


if (defined('SEARCH_PHP')){

$lang_search_php = array(
  'title' => 'Pesquisar toda a Galeria', //cpg1.4
  'submit_search' => 'pesquisa', //cpg1.4
  'keyword_list_title' => 'Lista de palavras chave', //cpg1.4
  'keyword_msg' => 'Esta lista não é inclusiva. Não inclui palavras de títulos de imagens ou descrições. Tente pequisar usando frases completas.',  //cpg1.4
  'edit_keywords' => 'Editar palavras chave', //cpg1.4
  'search in' => 'Pesquisar em:', //cpg1.4
  'ip_address' => 'Endereço IP', //cpg1.4
  'fields' => 'Pesquisar por', //cpg1.4
  'age' => 'Idade', //cpg1.4
  'newer_than' => 'Mais nova que', //cpg1.4
  'older_than' => 'Mais antiga que', //cpg1.4
  'days' => 'days', //cpg1.4
  'all_words' => 'Combina todas palavras (AND)', //cpg1.4
  'any_words' => 'Combina qualquer palavra (OR)', //cpg1.4
);

$lang_adv_opts = array(
  'title' => 'Título', //cpg1.4
  'caption' => 'Legenda', //cpg1.4
  'keywords' => 'Palavra chave', //cpg1.4
  'owner_name' => 'Nome do proprietário', //cpg1.4
  'filename' => 'Nome do ficheiro', //cpg1.4
);

}

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
  'page_title' => 'Search new files',
  'select_dir' => 'Select directory',
  'select_dir_msg' => 'This function allows you to add a batch of files that your have uploaded to your server by FTP.<br /><br />Select the directory where you have uploaded your files.', //cpg1.4
  'no_pic_to_add' => 'There is no file to add',
  'need_one_album' => 'You need at least one album to use this function',
  'warning' => 'Warning',
  'change_perm' => 'the script can\'t write in this directory, you need to change its mode to 755 or 777 before trying to add the files !',
  'target_album' => '<b>Put files of &quot;</b>%s<b>&quot; into </b>%s',
  'folder' => 'Folder',
  'image' => 'file',
  'album' => 'Album',
  'result' => 'Result',
  'dir_ro' => 'Not writable. ',
  'dir_cant_read' => 'Not readable. ',
  'insert' => 'Adding new files to the gallery',
  'list_new_pic' => 'List of new files',
  'insert_selected' => 'Insert selected files',
  'no_pic_found' => 'No new file was found',
  'be_patient' => 'Please be patient, the script needs time to add the files',
  'no_album' => 'no album selected',
  'result_icon' => 'click for details or to reload',  //cpg1.4
  'notes' =>  '<ul>'.
                          '<li><b>OK</b> : means that the file was succesfully added'.
                          '<li><b>DP</b> : means that the file is a duplicate and is already in the database'.
                          '<li><b>PB</b> : means that the file could not be added, check your configuration and the permission of directories where the files are located'.
                          '<li><b>NA</b> : means that you haven\'t selected an album the files should go to, hit \'<a href="javascript:history.back(1)">back</a>\' and select an album. If you don\'t have an album <a href="albmgr.php">create one first</a></li>'.
                          '<li>If the OK, DP, PB \'signs\' does not appear click on the broken file to see any error message produced by PHP'.
                          '<li>If your browser timeouts, hit the reload button'.
                          '</ul>',
  'select_album' => 'select album',
  'check_all' => 'Check All',
  'uncheck_all' => 'Uncheck All',
  'no_folders' => 'There are no folders inside the "albums" folder yet. Make sure to create at least one custom folder within "albums" folder and ftp-upload your files there. You mustn\'t upload to the "userpics" nor "edit" folders, they are reserved for http uploads and internal purposes.', //cpg1.4
   'albums_no_category' => 'Albums with no category', //cpg1.4 // album pulldown mod, added by frogfoot
  'personal_albums' => '* Personal albums', //cpg1.4 // album pulldown mod, added by frogfoot
  'browse_batch_add' => 'Browsable interface (recommended)', //cpg1.4
  'edit_pics' => 'Edit files', //cpg1.4
  'edit_properties' => 'Album properties', //cpg1.4
  'view_thumbs' => 'Thumbnail view', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File stat_details.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('STAT_DETAILS_PHP')) $lang_stat_details_php = array(
  'show_hide' => 'show/hide this column', //cpg1.4
  'vote' => 'Vote Details', //cpg1.4
  'hits' => 'Hit Details', //cpg1.4
  'stats' => 'Vote Statistics', //cpg1.4
  'sdate' => 'Date', //cpg1.4
  'rating' => 'Rating', //cpg1.4
  'search_phrase' => 'Search phrase', //cpg1.4
  'referer' => 'Referer', //cpg1.4
  'browser' => 'Browser', //cpg1.4
  'os' => 'Operating System', //cpg1.4
  'ip' => 'IP', //cpg1.4
  'sort_by_xxx' => 'Sort by %s', //cpg1.4
  'ascending' => 'ascending', //cpg1.4
  'descending' => 'descending', //cpg1.4
  'internal' => 'int', //cpg1.4
  'close' => 'close', //cpg1.4
  'hide_internal_referers' => 'hide internal referers', //cpg1.4
  'date_display' => 'Date display', //cpg1.4
  'submit' => 'submit / refresh', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File thumbnails.php
// ------------------------------------------------------------------------- //

// Void

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) $lang_upload_php = array(
  'title' => 'Enviar Imagens',
  'custom_title' => 'Pedido de formulário personalizado',
  'cust_instr_1' => 'Pode selecionar um número de caixas de envio personalizado, porém não pode excedr os limites abaixo listados.',
  'cust_instr_2' => 'Box Number Requests',
  'cust_instr_3' => 'File upload boxes: %s',
  'cust_instr_4' => 'URI/URL upload boxes: %s',
  'cust_instr_5' => 'URI/URL upload boxes:',
  'cust_instr_6' => 'File upload boxes:',
  'cust_instr_7' => 'Please enter the number of each type of upload box you desire at this time.  Then click \'Continue\'. ',
  'reg_instr_1' => 'Invalid action for form creation.',
  'reg_instr_2' => 'Now you may upload your files using the upload boxes below. The size of files uploaded from your client to the server should not exceed %s KB each. ZIP files uploaded in the \'File Upload\' and \'URI/URL Upload\' sections will remain compressed.',
  'reg_instr_3' => 'If you want the zipped file or archive to be decompressed, you must use the file upload box provided in the \'Decompressive ZIP Upload\' area.',
  'reg_instr_4' => 'When using the URI/URL upload section, please enter the path to the file like so: http://www.mysite.com/images/example.jpg',
  'reg_instr_5' => 'When you have completed the form, please click \'Continue\'.',
  'reg_instr_6' => 'Decompressive ZIP Uploads:',
  'reg_instr_7' => 'File Uploads:',
  'reg_instr_8' => 'URI/URL Uploads:',
  'error_report' => 'Error Report',
  'error_instr' => 'The following uploads encountered errors:',
  'file_name_url' => 'File Name/URL',
  'error_message' => 'Error Message',
  'no_post' => 'File not uploaded by POST.',
  'forb_ext' => 'Forbidden file extension.',
  'exc_php_ini' => 'Exceeded filesize allowed in php.ini.',
  'exc_file_size' => 'Exceeded filesize permitted by CPG.',
  'partial_upload' => 'Only a partial upload.',
  'no_upload' => 'No upload occurred.',
  'unknown_code' => 'Unknown PHP upload error code.',
  'no_temp_name' => 'No upload - No temp name.',
  'no_file_size' => 'Contains no data/Corrupted',
  'impossible' => 'Impossible to move.',
  'not_image' => 'Not an image/corrupt',
  'not_GD' => 'Not a GD extension.',
  'pixel_allowance' => 'The height and or width of the uploaded picture is more than that allowed by the gallery config.', //cpg1.4
  'incorrect_prefix' => 'Incorrect URI/URL prefix',
  'could_not_open_URI' => 'Could not open URI.',
  'unsafe_URI' => 'Safety not verifiable.',
  'meta_data_failure' => 'Meta data failure',
  'http_401' => '401 Unauthorized',
  'http_402' => '402 Payment Required',
  'http_403' => '403 Forbidden',
  'http_404' => '404 Not Found',
  'http_500' => '500 Internal Server Error',
  'http_503' => '503 Service Unavailable',
  'MIME_extraction_failure' => 'MIME could not be determined.',
  'MIME_type_unknown' => 'Unknown MIME type',
  'cant_create_write' => 'Cannot create write file.',
  'not_writable' => 'Cannot write to write file.',
  'cant_read_URI' => 'Cannot read URI/URL',
  'cant_open_write_file' => 'Cannot open URI write file.',
  'cant_write_write_file' => 'Cannot write to URI write file.',
  'cant_unzip' => 'Cannot unzip.',
  'unknown' => 'Unknown error',
  'succ' => 'Successful Uploads',
  'success' => '%s uploads were successful.',
  'add' => 'Please click \'Continue\' to add the files to albums.',
  'failure' => 'Upload Failure',
  'f_info' => 'File Information',
  'no_place' => 'The previous file could not be placed.',
  'yes_place' => 'The previous file was placed successfully.',
  'max_fsize' => 'Maximum allowed file size is %s KB',
  'album' => 'Album',
  'picture' => 'File',
  'pic_title' => 'File title',
  'description' => 'File description',
  'keywords' => 'Keywords (separate with spaces)<br /><a href="#" onClick="return MM_openBrWindow(\'keyword_select.php\',\'selectKey\',\'width=250, height=400, scrollbars=yes,toolbar=no,status=yes,resizable=yes\')">Insert from list</a>', //cpg1.4
  'keywords_sel' =>'Select a Keyword', //cpg1.4
  'err_no_alb_uploadables' => 'Sorry there is no album where you are allowed to upload files',
  'place_instr_1' => 'Please place the files in albums at this time.  You may also enter relevant information about each file now.',
  'place_instr_2' => 'More files need placement. Please click \'Continue\'.',
  'process_complete' => 'You have successfully placed all the files.',
   'albums_no_category' => 'Albums with no category', //cpg1.4. //album pulldown mod, added by frogfoot
  'personal_albums' => '* Personal albums', //cpg1.4 //album pulldown mod, added by frogfoot
  'select_album' => 'Select album', //cpg1.4 //album pulldown mod, added by frogfoot
  'close' => 'Close', //cpg1.4
  'no_keywords' => 'Sorry, no keywords available!', //cpg1.4
  'regenerate_dictionary' => 'Regenerate Dictionary', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
  'memberlist' => 'Lista de membros', //cpg1.4
  'user_manager' => 'Gestor de Utilizadores', //cpg1.4
  'title' => 'Gerir utilizadores',
  'name_a' => 'Nome Ascendente',
  'name_d' => 'Nome Descendente',
  'group_a' => 'Grupo Ascendente',
  'group_d' => 'Grupo Descendente',
  'reg_a' => 'Data de reg. Ascendente',
  'reg_d' => 'Data de reg. Descendente',
  'pic_a' => 'Contagem de imag. ascendente',
  'pic_d' => 'Contagem de imag. descendente',
  'disku_a' => 'Uso de disco ascendente',
  'disku_d' => 'Uso de disco descendente',
  'lv_a' => 'Última visita Ascendente',
  'lv_d' => 'Última visita Descendente',
  'sort_by' => 'Listar utilizadores por',
  'err_no_users' => 'A Tabela de utilizadores está vazia !',
  'err_edit_self' => 'Não pode alterar seu dados \'pessoais\', use o 
link \'Os meus dados\' para isso',
  'edit' => 'Editar', //cpg1.4
  'with_selected' => 'Com seleção:', //cpg1.4
  'delete' => 'Apagar', //cpg1.4
  'delete_files_no' => 'manter imagens públicas (mas como anónimo)', //cpg1.4
  'delete_files_yes' => 'apagar também imagens públicas', //cpg1.4
  'delete_comments_no' => 'mantém comentários (mas como anónimo)', //cpg1.4
  'delete_comments_yes' => 'apagar também comentários', //cpg1.4
  'activate' => 'Activar', //cpg1.4
  'deactivate' => 'Desactivar', //cpg1.4
  'reset_password' => 'Redefinir Senha', //cpg1.4
  'change_primary_membergroup' => 'Alterar o grupo de membro primário', //cpg1.4
  'add_secondary_membergroup' => 'Adicionar um grupo de membros secundário', //cpg1.4
  'name' => 'Nome de utilizador',
  'group' => 'Grupo',
  'inactive' => 'Inactivo',
  'operations' => 'Operações',
  'pictures' => 'Imagens',
  'disk_space_used' => 'Espaço usado', //cpg1.4
  'disk_space_quota' => 'Quota de disco', //cpg1.4
  'registered_on' => 'Registo', //cpg1.4
  'last_visit' => 'Última visita',
  'u_user_on_p_pages' => '%d utilizadores em %d pagina(s)',
  'confirm_del' => 'Tem a certeza de que deseja APAGAR este utilizador ? \\nTodas as suas imagens e álbuns serão também apagados.', //js-alert
  'mail' => 'CORREIO',
  'err_unknown_user' => 'O utilizador seleccionado não existe !',
  'modify_user' => 'Modificar utilizador',
  'notes' => 'Notas',
  'note_list' => '<li>se não deseja modificar a presente Senha, deixe o campo "Senha" em branco',
  'password' => 'Senha',
  'user_active' => 'Utilizador está activo',
  'user_group' => 'Grupo do utilizador',
  'user_email' => 'Email do utilizador',
  'user_web_site' => 'Web site do utilizador',
  'create_new_user' => 'Criar novo utilizador',
  'user_location' => 'Local do utilizador',
  'user_interests' => 'Interesses do utilizador',
  'user_occupation' => 'Ocupação do utilizador',
  'user_profile1' => '$user_profile1', //cpg1.4
  'user_profile2' => '$user_profile2', //cpg1.4
  'user_profile3' => '$user_profile3', //cpg1.4
  'user_profile4' => '$user_profile4', //cpg1.4
  'user_profile5' => '$user_profile5', //cpg1.4
  'user_profile6' => '$user_profile6', //cpg1.4
  'latest_upload' => 'Envios Recentes',
  'never' => 'nunca',
  'search' => 'Pesquisa de utilizadores', //cpg1.4
  'submit' => 'Submeter', //cpg1.4
  'search_submit' => 'OK!', //cpg1.4
  'search_result' => 'Pesquisa resultados para: ', //cpg1.4
  'alert_no_selection' => 'Tem de seleccionar primeiro, pelo menos um utilizador!', //cpg1.4 //js-alert
  'password' => 'senha', //cpg1.4
  'select_group' => 'Selecione grupo', //cpg1.4
  'groups_alb_access' => 'Permissões de álbum por grupo', //cpg1.4
  'album' => 'Álbum', //cpg1.4
  'category' => 'Categoria', //cpg1.4
  'modify' => 'Modifica?', //cpg1.4
  'group_no_access' => 'Este grupo não tem acesso especial', //cpg1.4
  'notice' => 'Notificação', //cpg1.4
  'group_can_access' => 'Álbun(s) que apenas "%s" pode aceder', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //

if (defined('UTIL_PHP')) {
$lang_util_desc_php = array(
'Actualiza títulos do ficheiro', //cpg1.4
'Apaga títulos', //cpg1.4
'Reconstroi miniaturas e fotos redimensionadas', //cpg1.4
'Apaga fotos com o seu tamanho original substituindo-as com a versão redimensionada', //cpg1.4
'Apaga fotos com dimensões originais ou intermediarias para libertar espaço no disco do servidor', //cpg1.4
'Apaga comentários órfãos', //cpg1.4
'Relê tamanho e dimensões de imagens (se as editou manualmente)', //cpg1.4
'Restabelece o contador de visualizações', //cpg1.4
'Exibe phpinfo', //cpg1.4
'Actualiza a Base de Dados', //cpg1.4
'Exibe o diário de bordo', //cpg1.4
);
$lang_util_php = array(
  'title' => 'Ferramentas de Administração (Redimensionar imagens)',
  'what_it_does' => 'As suas funções',
  'file' => 'Ficheiro',
  'problem' => 'Problema', //cpg1.4
  'status' => 'Estado', //cpg1.4
  'title_set_to' => 'titulo a dar',
  'submit_form' => 'submeter',
  'updated_succesfully' => 'actualização com êxito',
  'error_create' => 'ERRO criando',
  'continue' => 'Processar mais imagens',
  'main_success' => 'O ficheiro %s foi usado como ficheiro principal com êxito',
  'error_rename' => 'Erro ao renomear %s para %s',
  'error_not_found' => 'O ficheiro %s não foi encontrado',
  'back' => 'regressar ao inicio',
  'thumbs_wait' => 'Actualizando miniaturas e/ou imagens redimensionadas, por favor espere...',
  'thumbs_continue_wait' => 'A continuar a actualização de miniaturas e/ou imagens redimensionadas...',
  'titles_wait' => 'Actualizando titulos, por favor espere...',
  'delete_wait' => 'Apagando titulos, por favor espere...',
  'replace_wait' => 'Apagando originais e substituindo-as pelas imagens redimensionadas, por favor espere...',
  'instruction' => 'Instruções rápidas',
  'instruction_action' => 'Selecione a acção',
  'instruction_parameter' => 'Eleja parâmeteros',
  'instruction_album' => 'Escolha o álbum',
  'instruction_press' => 'pressione %s',
  'update' => 'Actualiza miniaturas e/ou fotos redimensionadas',
  'update_what' => 'O que deve ser actualizado',
  'update_thumb' => 'Apenas miniaturas',
  'update_pic' => 'Apenas imagens redimensionadas',
  'update_both' => 'Miniaturas e imagens redimensionadas',
  'update_number' => 'Número de imagens processadas por cada click',
  'update_option' => '(Tente fixar esta opção com um número mais baixo se tiver problemas de timeout)',
  'filename_title' => 'Nome do ficheiro &rArr; Titulo do ficheiro',
  'filename_how' => 'Como deve o nome do ficheiro ser modificado',
  'filename_remove' => 'Remova o .jpg do final e substitua _ (underscore) com espaços',
  'filename_euro' => 'Altere 2003_11_23_13_20_20.jpg para 23/11/2003 13:20',
  'filename_us' => 'Altere 2003_11_23_13_20_20.jpg para 11/23/2003 13:20',
  'filename_time' => 'Altere 2003_11_23_13_20_20.jpg para 13:20',
  'delete' => 'Apagar títulos de ficheiros ou imagens de tamanho original',
  'delete_title' => 'Apagar títulos de ficheiros',
  'delete_title_explanation' => 'Remove todos os títulos das imagens no álbum que especificar.', //cpg1.4
  'delete_original' => 'Apagar as fotos com o tamanho original',
  'delete_original_explanation' => 'Elimina o tamanho original das imagens.', //cpg1.4
  'delete_intermediate' => 'Apagar imagens intermediarias', //cpg1.4
  'delete_intermediate_explanation' => 'Apaga as imagens intermediarias (normais).<br />Use para libertar espaço em disco, se desactivou \'Criar imagens intermediarias\' no CONFIG, após ter adicionado imagens.', //cpg1.4
  'delete_replace' => 'Apagar imagens originais substituindo-as pelas versões redimensionadas',
  'titles_deleted' => 'Todos os títulos no álbum especificado foram removidos', //cpg1.4
  'deleting_intermediates' => 'A apagar imagens intermediarias, por favor espere...', //cpg1.4
  'searching_orphans' => 'A pesquisar por órfãos, por vafor espere...', //cpg1.4
  'select_album' => 'Seleccione o álbum',
  'delete_orphans' => 'Apagar comentários de imagens inexistentes', //cpg1.4
  'delete_orphans_explanation' => 'Procura e permite que apague comentários associados a imagens inexistentes na galeria.<br />Procura todos os álbuns.', //cpg1.4
  'refresh_db' => 'Relê as dimensões e tamanho das imagens', //cpg1.4
  'refresh_db_explanation' => 'Isto fará a releitura das dimensões e tamanho das imagens. Use se as quotas estão incorrectas, ou se alterou as imagens manualmente.', //cpg1.4
  'reset_views' => 'Restabelecer os contadores de visualizações', //cpg1.4
  'reset_views_explanation' => 'Estabelece o número da contagem de visualizações para zero no álbum especificado.', //cpg1.4
  'orphan_comment' => 'comentários órfãos encontrados',
  'delete' => 'Apagar',
  'delete_all' => 'Apagar tudo',
  'delete_all_orphans' => 'Apagar todos os órfãos?', //cpg1.4
  'comment' => 'Comentário: ',
  'nonexist' => 'ligado ao ficheiro não existente # ',
  'phpinfo' => 'Exibe phpinfo',
  'phpinfo_explanation' => 'Contém informção técnica sobre o seu servidor.<br /> - Pode-lhe ser pedida informação daqui ao pedir ajuda.', //cpg1.4
  'update_db' => 'Actualizar Base de Dados',
  'update_db_explanation' => 'Se substituiu ficheiros do Coppermine, adicionou modificações ou actualizou uma versão antiga do Coppermine, certifique-se de correr a actualização da base de dados uma vez. Isto criará as tabelas necessárias e/ou valores configurativos na sua base de dados Coppermine.',
  'view_log' => 'Ver diário de bordo', //cpg1.4
  'view_log_explanation' => 'O Coppermine pode seguir as várias acções dos utilizadores.Pode visualizar estes registos se activou o diário de bordo na <a href="admin.php">configuração do coppermine</a>.', //cpg1.4
  'versioncheck' => 'Confirmar versões', //cpg1.4
  'versioncheck_explanation' => 'Veja a versão dos ficheiros para confirmar que os substituiu após uma actualização, ou verifique se existem novas versões Coppermine.', //cpg1.4
  'bridgemanager' => 'Administração de Enlaces', //cpg1.4
  'bridgemanager_explanation' => 'Activa/desactiva a integração (enlace) do Coppermine com outra aplicação (ex. o seu BBS).', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File versioncheck.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('VERSIONCHECK_PHP')) $lang_versioncheck_php = array(
  'title' => 'Versioncheck', //cpg1.4
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
  'delete_all' => 'Apagar todos os diários', //cpg1.4
  'delete_this' => 'Apagar este diário', //cpg1.4
  'view_logs' => 'Ver diários', //cpg1.4
  'no_logs' => 'Não existem diários criados.', //cpg1.4
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
  'welcome' => 'Welcome <b>%s</b>,', //cpg1.4
  'need_login' => 'You need to login to the gallery using your web browser before you can use this wizard.<p/><p>When you login don\'t forget to select the <b>remember me</b> option if it is present.', //cpg1.4
  'no_alb' => 'Sorry but there is no album where you are allowed to upload pictures with this wizard.', //cpg1.4
  'upload' => 'Upload your pictures into an existing album', //cpg1.4
  'create_new' => 'Create a new album for your pictures', //cpg1.4
  'album' => 'Album', //cpg1.4
  'category' => 'Category', //cpg1.4
  'new_alb_created' => 'Your new album &quot;<b>%s</b>&quot; was created.', //cpg1.4
  'continue' => 'Press &quot;Next&quot; to start to upload your pictures', //cpg1.4
  'link' => 'this link', //cpg1.4
);
}
?>