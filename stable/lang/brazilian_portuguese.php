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
  $Source$
  $Revision: 3116 $
  $Author: gaugau $
  $Date: 2006-06-08 00:11:54 +0200 (Do, 08 Jun 2006) $
**********************************************/

if (!defined('IN_COPPERMINE')) { die('Not in Coppermine...');}

// info about translators and translated language
$lang_translation_info = array(
  'lang_name_english' => 'Portuguese', //cpg1.4
  'lang_name_native' => 'Português', //cpg1.4
  'lang_country_code' => 'br', //cpg1.4
  'trans_name'=> 'Frederico Mottinha de Figueiredo',
  'trans_email' => 'fredericomf@gmail.com',
  'trans_website' => 'fredericofotos.blogspot.com',
  'trans_date' => '2006-09-01',
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
	'lastalb'=> 'Últimos Álbuns Atualizados',
	'lastcom' => 'Últimos Comentários',
	'topn' => 'Fotos Mais Vistas',
	'toprated' => 'Imagens Mais Populares',
	'lasthits' => 'Últimas Imagens Vistas',
	'search' => 'Resultado da Pesquisa',
	'favpics'=> 'Imagens Favoritas',  //cpg1.4
);

$lang_errors = array(
  'access_denied' => 'Não tem permissão para visualizar esta página.',
  'perm_denied' => 'Não tem permissão para executar esta operação.',
  'param_missing' => 'Script executado com falta de parâmentos.',
  'non_exist_ap' => 'O álbum ou foto que seleccionou não foi encontrado!',
  'quota_exceeded' => 'A quota de espaço para armazenamento excedeu o limite<br /><br />Possui [quota]KB de espaço e as suas fotos atualmente utilizam [space]KB, se adicionar este ficheiro irá ultrapassar o limite.',
  'gd_file_type_err' => 'Estamos Utilizando um Sistema que só permite fotos JPEG e PNG.',
  'invalid_image' => 'A foto que enviou está corrompida ou não pode ser 
interpretada pela biblioteca GD',
  'resize_failed' => 'Não foi possível criar a miniatura ou redimensionar a foto.',
  'no_img_to_display' => 'Sem fotos para Exibir',
  'non_exist_cat' => 'A categoria selecionada não existe',
  'orphan_cat' => 'A categoria tem um parâmento que não existe, vá para ao gestor de categorias e corrija o problema!',
  'directory_ro' => 'O Diretório \'%s\' não é gravável, as fotos não podem ser apagadas',
  'non_exist_comment' => 'O comentário selecionado não existe.',
  'pic_in_invalid_album' => 'Foto em um Álbum Inexistente (%s)!?',
  'banned' => 'Atualmente Banido deste Site.',
  'not_with_udb' => 'Função desativada na Galeria. O que você está tentando fazer não é suportado pela atual configuração.',
  'offline_title' => 'Offline',
  'offline_text' => 'No momento a Galeria está OffLine - tente mais tarde!',
  'ecards_empty' => 'Não há nenhum registo de ecards para visualizar!',
  'action_failed' => 'Erro! Não foi possivel processar o seu pedido.',
  'no_zip' => 'As bibliotecas necessárias para processar os arquivos em ZIP não estão disponiveis. Por favor contacte o Administrador.',
  'zip_type' => 'Não tem permissão para enviar arquivos ZIP.',
  'database_query' => 'Erro ao processar um pedido ha Base de Dados!', //cpg1.4
  'non_exist_comment' => 'Comentário não existe', //cpg1.4
);

$lang_bbcode_help_title = 'Ajuda bbcode'; //cpg1.4
$lang_bbcode_help = 'Pode adicionar links clicaveis e alguma formatação de texto, utilizando bbcode tags : <li>[b]Bold[/b] =&gt; <b>Bold</b></li><li>[i]Italic[/i] =&gt; <i>Italic</i></li><li>[url=http://oseusite.com/]Url Text[/url] =&gt; <a href="http://oseusite.com">Url Text</a></li><li>[email]user@dominio.com[/email] =&gt; <a href="mailto:user@dominio.com">user@dominio.com</a></li><li>[color=red]seu texto[/color] =&gt; <span style="color:red">seu texto</span></li><li>[img]http://coppermine.sf.net/demo/images/red.gif[/img] => <img src="../images/red.gif" border="0" alt="" /></li>'; //cpg1.4

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
  'usr_mode_title' => 'Mudar para modo Usuário',
  'usr_mode_lnk' => 'Modo Usuário',
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
  'users_title' => 'Ir para Configuração de Usuários', //cpg1.4
  'users_lnk' => 'Usuários',
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
  'ban_title' => 'Ir para: Excluir Usuários', //cpg1.4
  'ban_lnk' => 'Excluir Usuários',
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
	'user_on_page' => '%d usuário(s) na(s) %d página(s)',
  'enter_alb_pass' => 'Introduza senha do álbum', //cpg1.4
  'invalid_pass' => 'Senha Inválida!', //cpg1.4
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
  'select_all' => 'Selecionar tudo',
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
  'relocate_exists' => 'Remover a <a href="http://coppermine-gallery.net/forum/index.php?topic=24217.0" target=_blank>relocate_server.php</a> arquivo do seu site!',
  'no_stable_version' => 'Voce esta rodando Coppermine %s (%s) com isso somente experiencia de usuarios - esta versao vem sem suporte e sem garantias. Use-a por seu proprio risco ou atualize para uma versao anterior estavel se voce necessitar de suporte!', //cpg1.4
  'gallery_offline' => 'A Galeria está de momento OFFLINE e acessivel apenas pelo (ADMIN)! Não se esqueça de a colocar ONLINE após o término da manutenção!', //cpg1.4
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
  'title' => 'Excluir Usuários', //cpg1.4
  'user_name' => 'Nome do Usuário', //cpg1.4
  'ip_address' => 'Endereço IP ', //cpg1.4
  'expiry' => 'Expira em (em branco significa que é permanente)', //cpg1.4
  'edit_ban' => 'Gravar modificações', //cpg1.4
  'delete_ban' => 'Apagar', //cpg1.4
  'add_new' => 'Adicionar Nova Exclusão', //cpg1.4
  'add_ban' => 'Adicionar', //cpg1.4
  'error_user' => 'Não é possível encontrar Usuário', //cpg1.4
  'error_specify' => 'Precisa especificar um Usuário ou IP', //cpg1.4
  'error_ban_id' => 'ID de exclusão inválido!', //cpg1.4
  'error_admin_ban' => 'Não é possível Excluir!', //cpg1.4
  'error_server_ban' => 'Quer excluir o seu próprio servidor? Tsc tsc!!!Fala Sério...', //cpg1.4
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
  'db_username' => 'Usuário do Banco de Dados',
  'db_username_explanation' => 'Usuário MySQL para se conectar com a aplicação BBS',
  'db_password' => 'Senha da Banco de Dados',
  'db_password_explanation' => 'Senha deste Usuário mySQL',
  'full_forum_url' => 'URL do Fórum',
  'full_forum_url_explanation' => 'URL completo da sua aplicação BBS (incluindo http:// bit, http://www.seudominio.tld/forum)',
  'relative_path_of_forum_from_webroot' => 'Caminho relativo do Fórum',
  'relative_path_of_forum_from_webroot_explanation' => 'O caminho para a aplicação BBS desde o webroot (Exemplo: se o caminho do seu BBS é http://www.seudominio.tld/forum/, digite &quot;/forum/&quot; neste campo)',
  'relative_path_to_config_file' => 'Caminho relativo do ficheiro de configuração do BBS',
  'relative_path_to_config_file_explanation' => 'Caminho relativo do BBS, visto pelo Coppermine (exemplo: &quot;../forum/&quot; se o BBS está em http://www.seudominio.tld/forum/ e o Coppermine em http://www.seudominio.tld/gallery/)',
  'cookie_prefix' => 'prefixo de Cookie',
  'cookie_prefix_explanation' => 'tem se ser o nome do cookie do seu BBS',
  'table_prefix' => 'Prefixo de Tabelas',
  'table_prefix_explanation' => 'Tem de coincidir com o prefixo que definiu ao configurar o seu BBS.',
  'user_table' => 'Tabela de Usuários',
  'user_table_explanation' => '(Normalmente o valor por defeito deverá funcionar, a não ser que use uma instalação não standard do BBS)',
  'session_table' => 'Tabela de sessões',
  'session_table_explanation' => '(Normalmente o valor por defeito deverá funcionar, a não ser que use uma instalação não standard do BBS)',
  'group_table' => 'Tabela de grupos',
  'group_table_explanation' => '(Normalmente o valor por defeito deverá funcionar, a não ser que use uma instalação não standard do BBS)',
  'group_relation_table' => 'Tabela de relação de grupos',
  'group_relation_table_explanation' => '(Normalmente o valor por defeito deverá funcionar, a não ser que use uma instalação não standard do BBS)',
  'group_mapping_table' => 'Tabela de mapeamento de grupos',
  'group_mapping_table_explanation' => '(Normalmente o valor por defeito deverá funcionar, a não ser que use uma instalação não standard do BBS)',
  'use_standard_groups' => 'Usar os grupos de Usuários standard do BBS',
  'use_standard_groups_explanation' => 'Usar os Grupos de Usuários (incorporado e recomendado). Isto fará com que as definições personalizadas feitas nesta página se tornem nulas. Desactive esta opção apenas se realmente souber o que está a fazer!',
  'validating_group' => 'Validação de Grupos',
  'validating_group_explanation' => 'O ID do grupo do seu BBS onde se encontram as contas dos Usuários que necessitam de validação (Normalmente o valor por defeito deverá funcionar, a não ser que use uma instalação não standard do BBS)',
  'guest_group' => 'Grupo de convidados (Guest)',
  'guest_group_explanation' => 'O ID do grupo no seu BBS onde se encontram os Usuários convidados (Usuários Anônimos) (definição por defeito deverá funcionar, edite apenas se souber o que está a fazer!)',
  'member_group' => 'Grupo de Membros',
  'member_group_explanation' => 'O ID do Grupo do seu BBS, onde se encontram os Usuários &quot;regulares&quot; (definição por defeito deverá funcionar, edite apenas se souber o que está a fazer!',
  'admin_group' => 'Grupo Administração',
  'admin_group_explanation' => 'O ID do Grupo do seu BBS, onde se encontram os Administradores (definição por defeito deverá funcionar, edite apenas se souber o que está a fazer!)',
  'banned_group' => 'Grupo de Excluidos',
  'banned_group_explanation' => 'O ID do grupo onde se encontram os Usuários excluídos (definição por defeito deverá funcionar, edite apenas se souber o que está a fazer)',
  'global_moderators_group' => 'Grupo Moderadores Globais',
  'global_moderators_group_explanation' => 'O ID do Grupo onde se encontram os Usuários Moderadores Globais do seu BBS (definição por defeito deverá funcionar, edite apenas se souber o que está a fazer)',
  'special_settings' => 'BBS-definições especificas',
  'logout_flag' => 'Versão phpBB (indicador de fecho de sessão)',
  'logout_flag_explanation' => 'Qual a versão do seu BBS (para saber como tratar os fechos de sessão (logouts))',
  'use_post_based_groups' => 'usar grupos baseados em POST?',
  'logout_flag_yes' => '2.0.5 ou maior',
  'logout_flag_no' => '2.0.4 ou menor',
  'use_post_based_groups_explanation' => 'Devem os grupos da BBS que estão definidos pelo número de postes serem levados em conta (permite uma administração de permissões granular) ou apenas os grupos por defeito (torna a administração mais fácil, recomendado). Pode alterar esta definição mais tarde.',
  'use_post_based_groups_yes' => 'Sim',
  'use_post_based_groups_no' => 'nao',
  'error_title' => 'Voce precisa corrigir estes erros antes de continuar. Volte a tela anterior.',
  'error_specify_bbs' => 'Voce deve especificar qual aplicacao voce quer linkar com a instalacao do seu Coppermine.',
  'error_no_blank_name' => 'Voce nao pode deixar o nome do seu arquivo de linkagerm em branco.',
  'error_no_special_chars' => 'O arquivo de linkagem nao pode conter caracteres especiais exceto o underscore(_) e o tracinho (-)!',
  'error_bridge_file_not_exist' => 'O arquivo de linkagem %s nao existe no servidor. Verifique se você enviou ele atualmente.',
  'finalize' => 'habilitar/desabilitar integração BBS',
  'finalize_explanation' => 'So far, as mudancas que voce especificou foram escritas no seu banco de dados, mas a integração BBS nao está habilitada. Você pode acionar essa integração on/off ante de qualquer coisa. Tenha certeza de se lembrar do nome do usuario e senha do administrador do  Coppermine, você vai precisar futuramente para fazer qualquer mudança. Se qualquer coisa estiver errada, vá para %s e desabilite a integração BBS, usando o seu standalone (unbridged) conta administrativa (usualmente a que você criou durante a instalação do Coppermine).',
  'your_bridge_settings' => 'Suas configurações de linkagem',
  'title_enable' => 'Habilitar integração/linkagem com %s',
  'bridge_enable_yes' => 'habilitado',
  'bridge_enable_no' => 'desabilitado',
  'error_must_not_be_empty' => 'nao deve estar vazio',
  'error_either_be' => 'deve estar com %s ou %s',
  'error_folder_not_exist' => '%s nao existe. Corrijao valor que você entrou para %s',
  'error_cookie_not_readible' => 'Coppermine nao pode ler um cookie nomeado %s. Corrija o valor que você entrou para %s, ou vá para seu painel de administracao BBS e tenha certeza que o caminho do cookie esté legível para o Coppermine.',
  'error_mandatory_field_empty' => 'Voce nao pode deixar os campos %s em branco - preencha com seu valores devidos.',
  'error_no_trailing_slash' => 'There mustn\'t be a trailing slash in the field %s.',
  'error_trailing_slash' => 'There must be a trailing slash in the field %s.',
  'error_db_connect' => 'Não está correto com o banco de dados mySQL com os dados que voce especificou. Aqui está o que o mySQL disse:',
  'error_db_name' => 'Todavia Coppermine não pode estabelecer uma conexão, ele não está habilitado para encontrar o banco de dados %s. Tenha certeza que você especificou %s corretamente. Aqui está o que o mySQL disse:',
  'error_prefix_and_table' => '%s e ',
  'error_db_table' => 'Não posso encontrar a tabela %s. Tenha certeza que você especificou %s corretamente.',
  'recovery_title' => 'Manipulador de Linkagem: recuperação de emergência',
  'recovery_explanation' => 'Se você veio aqui para administrar a Integração BBS da sua Galeria Coppermine, você deve primeiro logar como administrador. Se você não pode logar por causa da linkagem não estar trabalhando como esperado, você pode desabilitar a Integração BBS com esta página. Entrando com o seu nome de usuário e senha não irá logá-lo, somente se desarmar a Integração BBS. Conseulte a documentação para maiores detalhes.',
  'username' => 'Nome do Usuário',
  'password' => 'Senha',
  'disable_submit' => 'enviar',
  'recovery_success_title' => 'Autorização bem sucedida',
  'recovery_success_content' => 'Você conseguiu com sucesso desarmar a linkagem BBS. Seu instalador Coppermine vai iniciar em modo standalone(sozinho).',
  'recovery_success_advice_login' => 'Acesse como administrador para editar suas linkagens e/ou habilite a Integração BBS novamente.',
  'goto_login' => 'Vá para a página de login',
  'goto_bridgemgr' => 'Vá para o Manipulador de Linkagens',
  'recovery_failure_title' => 'Falhou ao autorizar',
  'recovery_failure_content' => 'Você entrou com credenciais erradas. Você terá que suprir os dados da conta administrativa da versão standalone do Coppermine (usualmente a conta que você cria durante a instalação do Coppermine).',
  'try_again' => 'tente novamente',
  'recovery_wait_title' => 'Tempo de espera nao terminou',
  'recovery_wait_content' => 'Por questoes de segurança este script nao nao libera logons falhos em uma sessão, então você defe esperar um pouco antes de tentar uma nova autenticação.',
  'wait' => 'aguarde',
  'create_redir_file' => 'Criar arquivo de redirecionamento (recomendado)',
  'create_redir_file_explanation' => 'Para redirecionar os usuários de volta para o Coppermine antes logados no seu BBS, você precisa que um arquivo de redirecionamento seja criado dentra da sua pasta BBS. Então esta opção estará marcada, o Manipulador de Linkagem estará pronto para criar este arquivo para você, ou dar para você o código pronto para copiar-e-colar para criar este arquivo manualmente.',
  'browse' => 'navegar',
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
  'usergal_cat_ro' => 'A categoria: Galerias do Usuário não pode ser apagada!',
  'manage_cat' => 'Administração de Categorias',
  'confirm_delete' => 'Tem a Certeza de que quer APAGAR esta categoria?', //js-alert
  'category' => 'Categoria',
  'operations' => 'Operações',
  'move_into' => 'Transferir para',
  'update_create' => 'Atualiza/Cria Categoria',
  'parent_cat' => 'Categoria Mãe',
  'cat_title' => 'Título da Categoria',
  'cat_thumb' => 'Imagem Miniatura da Categoria',
  'cat_desc' => 'Descrição da Categoria',
  'categories_alpha_sort' => 'Ordenar as categorias alfabéticamente (em vez de ordem por ajuste)', //cpg1.4
  'save_cfg' => 'Save configuration', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File admin.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('ADMIN_PHP')) $lang_admin_php = array(
  'title' => 'Configuração da Galeria', //cpg1.4
  'manage_exif' => 'Manusear saída exif', //cpg1.4
  'manage_plugins' => 'Manusear Plugins', //cpg1.4
  'manage_keyword' => 'Manusear palavras-chaves', //cpg1.4
  'restore_cfg' => 'Recuperar as Configurações Padrão',
  'save_cfg' => 'Salvar Nova Configuração',
  'notes' => 'Notas',
  'info' => 'Informação',
  'upd_success' => 'Configuração foi Atualizada!',
  'restore_success' => 'Configuração original do Coppermine foi restaurada',
  'name_a' => 'Crescente por Nome',
  'name_d' => 'Decrescente por Nome',
  'title_a' => 'Crescente por Título',
  'title_d' => 'Descrescente por Título',
  'date_a' => 'Crescente por Data',
  'date_d' => 'Decrescente por Data',
  'pos_a' => 'Crescente por Posição', //cpg1.4
  'pos_d' => 'Decrescente por Posição', //cpg1.4
  'th_any' => 'Aspecto Máximo',
  'th_ht' => 'Altura',
  'th_wd' => 'Largura',
  'label' => 'rótulo',
  'item' => 'item',
  'debug_everyone' => 'Qualquer um',
  'debug_admin' => 'Somente Administrador',
  'no_logs'=> 'Desligado', //cpg1.4
  'log_normal'=> 'Normal', //cpg1.4
  'log_all' => 'Tudo', //cpg1.4
  'view_logs' => 'Ver logs', //cpg1.4
  'click_expand' => 'click no nome da seção para expandir', //cpg1.4
  'expand_all' => 'Expandir tudo', //cpg1.4
  'notice1' => '(*) Estas configurações não devem ser mudadas se você não tem os arquivos em seu banco de dados.', //cpg1.4 - (relocated)
  'notice2' => '(**) Quando mudar estas configurações, somente os arquivos que estão adicionados a partir deste ponto serão afetados, então fique sciente que estas configurações nao devem ser mudadas se estes arquivos estiverem na sua galeria. Você pode , porém, aplicar as mudanças nos arquivos existentes com as &quot;<a href="util.php">ferramentas administrativas</a> (redimensionar imagens)&quot; a partir do seu menu administrativo.', //cpg1.4 - (relocated)
  'notice3' => '(***) Todos os arquivos de LOG estão escritos em Inglês.', //cpg1.4 - (relocated)
  'bbs_disabled' => 'Função Desabilitada enquanto estiver usando a integração bb', //cpg1.4
  'auto_resize_everyone' => 'Qualquer um', //cpg1.4
  'auto_resize_user' => 'Somente usuário', //cpg1.4
  'ascending' => 'crescente', //cpg1.4
  'descending' => 'decrescente', //cpg1.4
);

if (defined('ADMIN_PHP')) $lang_admin_data = array(
  'Configurações Gerais',
  array('Nome da Galeria', 'gallery_name', 0, 'f=index.htm&amp;as=admin_general_name&amp;ae=admin_general_name_end'), //cpg1.4
  array('Descrição da Galeria', 'gallery_description', 0, 'f=index.htm&amp;as=admin_general_description&amp;ae=admin_general_description_end'), //cpg1.4
  array('Email do administrador da Galeria', 'gallery_admin_email', 0, 'f=index.htm&amp;as=admin_general_email&amp;ae=admin_general_email_end'), //cpg1.4
  array('Endereço URL da pasta da sua Galeria Coppermine (\'index.php\' ou similar até o fim)', 'ecards_more_pic_target', 0, 'f=index.htm&amp;as=admin_general_coppermine-url&amp;ae=admin_general_coppermine-url_end'), //cpg1.4
  array('Endereço URL do seu site', 'home_target', 0, 'f=index.htm&amp;as=admin_general_home-url&amp;ae=admin_general_home-url_end'), //cpg1.4
  array('Reservar downloads-ZIP das favoritos', 'enable_zipdownload', 1, 'f=index.htm&amp;as=admin_general_zip-download&amp;ae=admin_general_zip-download_end'), //cpg1.4
  array('Fuso horário relativo ao GMT (data/hora corrente: ' . localised_date(-1, $comment_date_fmt) . ')','time_offset',0, 'f=index.htm&amp;as=admin_general_time-offset&amp;ae=admin_general_time-offset_end&amp;top=1'), //cpg1.4
  array('Habilitar Senhas Encriptadas (não pode ser desfeito)','enable_encrypted_passwords',1, 'f=index.htm&amp;as=admin_general_encrypt_password_start&amp;ae=admin_general_encrypt_password_end&amp;top=1'), // cpg 1.4
  array('Habilitar ícones de ajuda (ajuda somente avaliável em Inglês)','enable_help',9, 'f=index.htm&amp;as=admin_general_help&amp;ae=admin_general_help_end'), //cpg1.4
  array('Habilitar palavras-chaves clicáveis na busca','clickable_keyword_search',14, 'f=index.htm&amp;as=admin_general_keywords_start&amp;ae=admin_general_keywords_end'), //cpg1.4
  array('Habilitar plugins', 'enable_plugins', 12, 'f=index.htm&amp;as=admin_general_enable-plugins&amp;ae=admin_general_enable-plugins_end'),  //cpg1.4
  array('Permitir proibição de endereços de IP privados', 'ban_private_ip', 1,  'f=index.htm&amp;as=admin_general_private-ip&amp;ae=admin_general_private-ip_end'), //cpg1.4
  array('Interface batch-add navegável', 'browse_batch_add', 1, 'f=index.htm&amp;as=admin_general_browsable_batch_add&amp;ae=admin_general_browsable_batch_add_end'), //cpg1.4

  'Configurações de Linguagem &amp; Caracteres',
  array('Linguagem', 'lang', 5, 'f=index.htm&amp;as=admin_language_language&amp;ae=admin_language_language_end'), //cpg1.4
  array('Retornar ao Inglês se a frase traduzida não for encontrada?', 'language_fallback', 1, 'f=index.htm&amp;as=admin_language_fallback&amp;ae=admin_language_fallback_end'), //cpg1.4
  array('Codificação dos Caracteres', 'charset', 4, 'f=index.htm&amp;as=admin_language_charset&amp;ae=admin_language_charset_end'), //cpg1.4
  array('Mostrar lista de linguagens', 'language_list', 1, 'f=index.htm&amp;as=admin_language_list&amp;ae=admin_language_list_end'), //cpg1.4
  array('Mostrar bandeiras de linguagens', 'language_flags', 8, 'f=index.htm&amp;as=admin_language_flags&amp;ae=admin_language_flags_end&amp;top=1'), //cpg1.4
  array('Mostrar &quot;reset&quot; na seleção de linguagem', 'language_reset', 1, 'f=index.htm&amp;as=admin_language_reset&amp;ae=admin_language_reset_end&amp;top=1'), //cpg1.4
  //array('Display previous/next on tabbed pages', 'previous_next_tab', 1), //cpg1.4

  'Configuração de Temas',
  array('Tema', 'theme', 6, 'f=index.htm&amp;as=admin_theme_theme&amp;ae=admin_theme_theme_end'), //cpg1.4
  array('Mostrar lista de temas', 'theme_list', 1, 'f=index.htm&amp;as=admin_theme_theme_list&amp;ae=admin_theme_theme_list_end'), //cpg1.4
  array('Mostrar &quot;reset&quot; na seleção do tema', 'theme_reset', 1, 'f=index.htm&amp;as=admin_theme_theme_reset&amp;ae=admin_theme_theme_reset_end'), //cpg1.4
  array('Mostrar FAQ', 'display_faq', 1, 'f=index.htm&amp;as=admin_theme_faq&amp;ae=admin_theme_faq_end'), //cpg1.4
  array('Nome de link no menu como costume', 'custom_lnk_name', 0,'f=index.htm&amp;as=admin_theme_custom_lnk_name&amp;ae=admin_theme_custom_lnk_name_end'), //cpg1.4
  array('Link URL no menu de costume', 'custom_lnk_url', 0,'f=index.htm&amp;as=admin_language_custom_lnk_url&amp;ae=admin_language_custom_lnk_url_end'), //cpg1.4
  array('Mostrar ajuda bbcode', 'show_bbcode_help', 1, 'f=index.htm&amp;as=admin_theme_bbcode&amp;ae=admin_theme_bbcode_end&amp;top=1'), //cpg1.4
  array('Mostrar blocos nos temas que estão definidos como compilação XHTML e CSS ','vanity_block',1, 'f=index.htm&amp;as=vanity_block&amp;ae=vanity_block_end'), //cpg1.4
  array('Incluir caminho para o cabeçalho de customizado', 'custom_header_path', 0, 'f=index.htm&amp;as=admin_theme_include_path_start&amp;ae=admin_theme_include_path_end'), //cpg1.4
  array('Incluir caminho para o rodapé', 'custom_footer_path', 0, 'f=index.htm&amp;as=admin_theme_include_path_start&amp;ae=admin_theme_include_path_end'), //cpg1.4

  'Vizualização da lista de Album',
  array('Largura da tabela principal (pixels ou %)', 'main_table_width', 0, 'f=index.htm&amp;as=admin_album_table-width&amp;ae=admin_album_table-width_end'), //cpg1.4
  array('Número de níveis de categorias para mostrar', 'subcat_level', 0, 'f=index.htm&amp;as=admin_album_category-levels&amp;ae=admin_album_category-levels_end'), //cpg1.4
  array('Numero de álbuns para mostrar', 'albums_per_page', 0, 'f=index.htm&amp;as=admin_album_number&amp;ae=admin_album_number_end'), //cpg1.4
  array('Número de colunar para a lista do album', 'album_list_cols', 0, 'f=index.htm&amp;as=admin_album_columns&amp;ae=admin_album_columns_end'), //cpg1.4
  array('Tamanho das miniaturas em pixels', 'alb_list_thumb_size', 0, 'f=index.htm&amp;as=admin_album_thumbnail-size&amp;ae=admin_album_thumbnail-size_end'), //cpg1.4
  array('O conteudo da página principal', 'main_page_layout', 0, 'f=index.htm&amp;as=admin_album_list_content&amp;ae=admin_album_list_content_end'), //cpg1.4
  array('Mostrar primeiro nível dos albuns em miniaturas nas categorias','first_level',1, 'f=index.htm&amp;as=admin_album_first-level_thumbs&amp;ae=admin_album_first-level_thumbs_end'), //cpg1.4
  array('Organizar alfabeticamente as categorias (em vez da ordem de costume)','categories_alpha_sort',1, 'f=index.htm&amp;as=admin_album_list_alphasort_start&amp;ae=admin_album_list_alphasort_end'), //cpg1.4
  array('Mostrar numero de arquivos linkados','link_pic_count',1, 'f=index.htm&amp;as=admin_album_linked_files_start&amp;ae=admin_album_linked_files_end'), //cpg1.4

  'Vizualização das Miniaturas',
  array('Numero de colunas de miniaturas na página', 'thumbcols', 0, 'f=index.htm&amp;as=admin_thumbnail_columns&amp;ae=admin_thumbnail_columns_end'), //cpg1.4
  array('Número de linhas de miniaturas na página', 'thumbrows', 0, 'f=index.htm&amp;as=admin_thumbnail_rows&amp;ae=admin_thumbnail_rows_end'), //cpg1.4
  array('Máximo de abas à exibir', 'max_tabs', 10, 'f=index.htm&amp;as=admin_thumbnail_tabs&amp;ae=admin_thumbnail_tabs_end'), //cpg1.4
  array('Mostrar subtitulo do arquivo(em adição ao título) abaixo da miniatura', 'caption_in_thumbview', 1, 'f=index.htm&amp;as=admin_thumbnail_display_caption&amp;ae=admin_thumbnail_display_caption_end'), //cpg1.4
  array('Mostrar numero de vizualizações abaixo da miniatura', 'views_in_thumbview', 1, 'f=index.htm&amp;as=admin_thumbnail_display_views&amp;ae=admin_thumbnail_display_views_end'), //cpg1.4
  array('Mostrar numero de comentários abaixo da miniatura', 'display_comment_count', 1, 'f=index.htm&amp;as=admin_thumbnail_display_comments&amp;ae=admin_thumbnail_display_comments_end'), //cpg1.4
  array('Mostrar nome de quem enviou abaixo da miniatura', 'display_uploader', 1, 'f=index.htm&amp;as=admin_thumbnail_display_uploader&amp;ae=admin_thumbnail_display_uploader_end'), //cpg1.4
  //array('Display name of admin uploaders below the thumbnail', 'display_admin_uploader', 1, 'f=index.htm&amp;as=admin_thumbnail_display_admin_uploader&amp;ae=admin_thumbnail_display_admin_uploader_end'), //cpg1.4
  array('Mostrar nome do arquivo abaixo da miniatura', 'display_filename', 1, 'f=index.htm&amp;as=admin_thumbnail_display_filename&amp;ae=admin_thumbnail_display_filename_end'), //cpg1.4
  array('Mostrar descrição do Álbum', 'alb_desc_thumb', 1, 'f=index.htm&amp;as=admin_thumbnail_display_description&amp;ae=admin_thumbnail_display_description_end'), //cpg1.4
  array('Ordem padrão para organização dos arquivos', 'default_sort_order', 3, 'f=index.htm&amp;as=admin_thumbnail_default_sortorder&amp;ae=admin_thumbnail_default_sortorder_end'), //cpg1.4
  array('Número mínimo de votos para um arquivo para aparecer na lista \'mais-votados\'', 'min_votes_for_rating', 0, 'f=index.htm&amp;as=admin_thumbnail_minimum_votes&amp;ae=admin_thumbnail_minimum_votes_end'), //cpg1.4

  'Vizualização da Imagem', //cpg1.4
  array('Largura da tabela para mostrar o arquivo (pixels ou %)', 'picture_table_width', 0, 'f=index.htm&amp;as=admin_image_comment_table-width&amp;ae=admin_image_comment_table-width_end'), //cpg1.4
  array('Informação do arquivo é mostrada por padrão', 'display_pic_info', 1, 'f=index.htm&amp;as=admin_image_comment_info_visible&amp;ae=admin_image_comment_info_visible_end'), //cpg1.4
  array('Quantidade maxima para uma descrição de uma imagem', 'max_img_desc_length', 0, 'f=index.htm&amp;as=admin_image_comment_descr_length&amp;ae=admin_image_comment_descr_length_end'), //cpg1.4
  array('Número máximo de caracteres em uma palavra', 'max_com_wlength', 0, 'f=index.htm&amp;as=admin_image_comment_chars_per_word&amp;ae=admin_image_comment_chars_per_word_end'), //cpg1.4
  array('Mostrar estilo filme fotográfico', 'display_film_strip', 1, 'f=index.htm&amp;as=admin_image_comment_filmstrip_toggle&amp;ae=admin_image_comment_filmstrip_toggle_end'), //cpg1.4
  array('Mostrar nome do arquivo sob a miniatura no filme fotográfico', 'display_film_strip_filename', 1, 'f=index.htm&amp;as=admin_image_comment_display_film_strip_filename&amp;ae=admin_image_comment_display_film_strip_filename_end'), //cpg1.4
  array('Número de ítens no filme fotográfico', 'max_film_strip_items', 0, 'f=index.htm&amp;as=admin_image_comment_filmstrip_number&amp;ae=admin_image_comment_filmstrip_number_end'), //cpg1.4
  array('Intervalo do Show de slides em milisegundos (1 segundo = 1000 milisegundos)', 'slideshow_interval', 0, 'f=index.htm&amp;as=admin_image_comment_slideshow_interval&amp;ae=admin_image_comment_slideshow_interval_end'), //cpg1.4

  'Configurações dos Comentários', //cpg1.4
  array('Filtrar paravrões nos comentários', 'filter_bad_words', 1, 'f=index.htm&amp;as=admin_image_comment_bad_words&amp;ae=admin_image_comment_bad_words_end'), //cpg1.4
  array('Permitir carinhas nos comentários', 'enable_smilies', 1, 'f=index.htm&amp;as=admin_image_comment_smilies&amp;ae=admin_image_comment_smilies_end'), //cpg1.4
  array('Permitir que um mesmo usuário comente várias vezes (isso desabilita proteção contra inundação)', 'disable_comment_flood_protect', 1, 'f=index.htm&amp;as=admin_image_comment_flood&amp;ae=admin_image_comment_flood_end'), //cpg1.4
  array('Número MáximoMax de linhas em um comentário', 'max_com_lines', 0, 'f=index.htm&amp;as=admin_image_comment_lines&amp;ae=admin_image_comment_lines_end'), //cpg1.4
  array('Tamanho Máximo de um comentário', 'max_com_size', 0, 'f=index.htm&amp;as=admin_image_comment_length&amp;ae=admin_image_comment_length_end'), //cpg1.4
  array('Notificar o administrador dos comentários por email', 'email_comment_notification', 1, 'f=index.htm&amp;as=admin_image_comment_admin_notify&amp;ae=admin_image_comment_admin_notify_end'), //cpg1.4
  array('Ordenar os comentários por ordem', 'comments_sort_descending', 17, 'f=index.htm&amp;as=admin_comment_sort_start&amp;ae=admin_comment_sort_end'), //cpg1.4
  array('Autores de comentários anonimos são prefixados com:', 'comments_anon_pfx', 0, 'f=index.htm&amp;as=comments_anon_pfx&amp;ae=comments_anon_pfx_end'), //cpg1.4

  'Configuração dos Arquivos e Miniaturas',
  array('Qualidade dos Arquivos JPEG', 'jpeg_qual', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_jpeg_quality&amp;ae=admin_picture_thumbnail_jpeg_quality_end'), //cpg1.4
  array('Dimenção máxima de uma miniatura <a href="#notice2" class="clickable_option">**</a>', 'thumb_width', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max-dimension&amp;ae=admin_picture_thumbnail_max-dimension_end'), //cpg1.4
  array('Usar dimenção ( largura ou altura ou aspecto máximo para a miniatura ) <a href="#notice2" class="clickable_option">**</a>', 'thumb_use', 7, 'f=index.htm&amp;as=admin_picture_thumbnail_use-dimension&amp;ae=admin_picture_thumbnail_use-dimension_end'), //cpg1.4
  array('Criar imagens intermediárias','make_intermediate',1, 'f=index.htm&amp;as=admin_picture_thumbnail_intermediate_toggle&amp;ae=admin_picture_thumbnail_intermediate_toggle_end'), //cpg1.4
  array('Largura ou Altura maxima de uma imagem/vídeo intermediário <a href="#notice2" class="clickable_option">**</a>', 'picture_width', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_intermediate_dimension&amp;ae=admin_picture_thumbnail_intermediate_dimension_end'), //cpg1.4
  array('Tamanho máximo para envio de arquivos (KB)', 'max_upl_size', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max_upload_size&amp;ae=admin_picture_thumbnail_max_upload_size_end'), //cpg1.4
  array('Largura ou altura máxima para enviar imagens/videos (pixels)', 'max_upl_width_height', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max_upload_dimension&amp;ae=admin_picture_thumbnail_max_upload_dimension_end'), //cpg1.4
  array('Redimensionar automaticamente imagens que estão maiores que o máximo de largura ou altura', 'auto_resize', 16, 'f=index.htm&amp;as=admin_picture_thumbnail_auto-resize&amp;ae=admin_picture_thumbnail_auto-resize_end'), //cpg1.4

  'Configurações Avançadas dos Arquivos e Miniaturas',
  array('Álbuns podem ser privados (Obs: se você alterar de \'sim\' para \'não\' qualquer álbum privado passará à ser público)', 'allow_private_albums', 1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_private_toggle&amp;ae=admin_picture_thumb_advanced_private_toggle_end'), //cpg1.4
  array('Mostrar ícone de album privado para usuários não logados','show_private',1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_private_icon_show&amp;ae=admin_picture_thumb_advanced_private_icon_show_end'), //cpg1.4
  array('Caracteres proibidos nos nomes dos arquivos', 'forbiden_fname_char',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_filename_forbidden_chars&amp;ae=admin_picture_thumb_advanced_filename_forbidden_chars_end'), //cpg1.4
  //array('Accepted file extensions for uploaded pictures', 'allowed_file_extensions',0, 'f=index.htm&amp;as=&amp;ae=_end'), //cpg1.4
  array('Tipos de imagens permitidas', 'allowed_img_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_pic_extensions&amp;ae=admin_picture_thumb_advanced_pic_extensions_end'), //cpg1.4
  array('Tipos de filmes permitidos', 'allowed_mov_types',0, 'f=index.htm&amp;as=admin_thumbs_advanced_movie&amp;ae=admin_thumbs_advanced_movie_end'), //cpg1.4
  array('Iniciar o filme automaticamente', 'media_autostart',1, 'f=index.htm&amp;as=admin_movie_autoplay&amp;ae=admin_movie_autoplay_end'), //cpg1.4
  array('Tipos de áudio permitidos', 'allowed_snd_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_audio_extensions&amp;ae=admin_picture_thumb_advanced_audio_extensions_end'), //cpg1.4
  array('Tipos de documentos permitidos', 'allowed_doc_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_doc_extensions&amp;ae=admin_picture_thumb_advanced_doc_extensions_end'), //cpg1.4
  array('Método para redimensionamento de imagens','thumb_method',2, 'f=index.htm&amp;as=admin_picture_thumb_advanced_resize_method&amp;ae=admin_picture_thumb_advanced_resize_method_end'), //cpg1.4
  array('Caminho para Utilidade ImageMagick \'conversor\'(exemplo /usr/bin/X11/)', 'impath', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_im_path&amp;ae=admin_picture_thumb_advanced_im_path_end'), //cpg1.4
  //array('Allowed image types (only valid for ImageMagick)', 'allowed_img_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_allowed_imagetypes&amp;ae=admin_picture_thumb_advanced_allowed_imagetypes_end'), //cpg1.4
  array('Opções de linha de comando para o ImageMagick', 'im_options', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_im_commandline&amp;ae=admin_picture_thumb_advanced_im_commandline_end'), //cpg1.4
  array('Ler dado EXIF nos arquivos JPEG', 'read_exif_data', 13, 'f=index.htm&amp;as=admin_picture_thumb_advanced_exif&amp;ae=admin_picture_thumb_advanced_exif_end'), //cpg1.4
  array('Ler dados IPTC nos arquivos JPEG', 'read_iptc_data', 1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_iptc&amp;ae=admin_picture_thumb_advanced_iptc_end'), //cpg1.4
  array('O diretório do Álbum <a href="#notice1" class="clickable_option">*</a>', 'fullpath', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_albums_dir&amp;ae=admin_picture_thumb_advanced_albums_dir_end'), //cpg1.4
  array('O diretório para arquivos do usuário <a href="#notice1" class="clickable_option">*</a>', 'userpics', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_userpics_dir&amp;ae=admin_picture_thumb_advanced_userpics_dir_end'), //cpg1.4
  array('O prefixo para imagens intermediárias <a href="#notice1" class="clickable_option">*</a>', 'normal_pfx', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_intermediate_prefix&amp;ae=admin_picture_thumb_advanced_intermediate_prefix_end'), //cpg1.4
  array('O prefixo para as miniaturas <a href="#notice1" class="clickable_option">*</a>', 'thumb_pfx', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_thumbs_prefix&amp;ae=admin_picture_thumb_advanced_thumbs_prefix_end'), //cpg1.4
  array('Modo padrão dos diretórios', 'default_dir_mode', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_chmod_folder&amp;ae=admin_picture_thumb_advanced_chmod_folder_end'), //cpg1.4
  array('Modo padrão para arquivos', 'default_file_mode', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_chmod_files&amp;ae=admin_picture_thumb_advanced_chmod_files_end'), //cpg1.4

  'Configurações de Usuário',
  array('Permitir registro de novos usuários', 'allow_user_registration', 1, 'f=index.htm&amp;as=admin_allow_registration&amp;ae=admin_allow_registration_end'), //cpg1.4
  array('Permitir acesso de usuários não logados (convidado ou anonimo)', 'allow_unlogged_access', 1, 'f=index.htm&amp;as=admin_allow_unlogged_access&amp;ae=admin_allow_unlogged_access_end'), //cpg1.4
  array('Registro de usuários requer verificação por email', 'reg_requires_valid_email', 1, 'f=index.htm&amp;as=admin_registration_verify&amp;ae=admin_registration_verify_end'), //cpg1.4
  array('Notificar por email o administrador de registro de usuários', 'reg_notify_admin_email', 1, 'f=index.htm&amp;as=admin_registration_notify&amp;ae=admin_registration_notify_end'), //cpg1.4
  array('Administrador ativa os registros', 'admin_activation', 1, 'f=index.htm&amp;as=admin_activation&amp;ae=admin_activation_end'),  //cpg1.4
  array('Permitir que dois usuários tenham o mesmo endereço email', 'allow_duplicate_emails_addr', 1, 'f=index.htm&amp;as=admin_allow_duplicate_emails_addr&amp;ae=admin_allow_duplicate_emails_addr_end'), //cpg1.4
  array('Notificar o administrador sobre envio de arquivos esperando aprovação', 'upl_notify_admin_email', 1, 'f=index.htm&amp;as=admin_approval_notify&amp;ae=admin_approval_notify_end'), //cpg1.4
  array('Permitir usuários logados verem a lista de membros', 'allow_memberlist', 1, 'f=index.htm&amp;as=admin_user_memberlist&amp;ae=admin_user_memberlist_end'), //cpg1.4
  array('Permitir usuários mudar seu endereço de email em perfil', 'allow_email_change', 1, 'f=index.htm&amp;as=admin_user_allow_email_change&amp;ae=admin_user_allow_email_change_end'), //cpg1.4
  array('Permitir usuários reterm o controle sobre as imagens em galerias públicas', 'users_can_edit_pics', 1, 'f=index.htm&amp;as=admin_user_editpics_public_start&amp;ae=admin_user_editpics_public_end'), //cpg1.4
  array('Numero de logins falhos antes de banir temporariamente (para previnir ataques de brute force - força bruta)', 'login_threshold', 0, 'f=index.htm&amp;as=admin_user_login_start&amp;ae=admin_user_login_end'), //cpg1.4
  array('Duração da proibição -banir- temporária após logins falhos', 'login_expiry', 0, 'f=index.htm&amp;as=admin_user_login_start&amp;ae=admin_user_login_end'), //cpg1.4
  array('Habilitar relatorios para o administrador', 'report_post', 1, 'f=index.htm&amp;as=admin_user_enable_report&amp;ae=admin_user_enable_report_end'),  //cpg1.4

// custom profile fields,  //cpg1.4
  'Campos personalizados para o perfil dos usuários (deixar em branco se não for usar).
  Usar o perfil 6 para entradas longas como Biografia', //cpg1.4
  array('Nome do perfil 1 ', 'user_profile1_name', 0, 'f=index.htm&amp;as=admin_custom&amp;ae=admin_custom_end'), //cpg1.4
  array('Profile Nome do perfil 2', 'user_profile2_name', 0), //cpg1.4
  array('Profile Nome do perfil 3', 'user_profile3_name', 0), //cpg1.4
  array('Profile Nome do perfil 4', 'user_profile4_name', 0), //cpg1.4
  array('Profile Nome do perfil 5', 'user_profile5_name', 0), //cpg1.4
  array('Profile Nome do perfil 6', 'user_profile6_name', 0), //cpg1.4

  'Campos personalizados para a descrição da imagem (deixar em branco se não for usar)',
  array('Nome do campo 1', 'user_field1_name', 0, 'f=index.htm&amp;as=admin_custom_image&amp;ae=admin_custom_image_end'), //cpg1.4
  array('Field Nome do campo 2', 'user_field2_name', 0),
  array('Field Nome do campo 3', 'user_field3_name', 0),
  array('Field Nome do campo 4', 'user_field4_name', 0),

  'Configuração dos Cookies',
  array('Nome do Cookie', 'cookie_name', 0, 'f=index.htm&amp;as=admin_cookie_name&amp;ae=admin_cookie_name_end'), //cpg1.4
  array('Caminho do Cookie', 'cookie_path', 0, 'f=index.htm&amp;as=admin_cookie_path&amp;ae=admin_cookie_path_end'), //cpg1.4

  'Configurações do Email  (Normalmente nao precisa mudar nada aqui; deixe todos os campos em branco quando não tiver certeza)', //cpg1.4
  array('SMTP Host (quando deixado em branco, será usado o sendmail)', 'smtp_host', 0, 'f=index.htm&amp;as=admin_email&amp;ae=admin_email_end'), //cpg1.4
  array('Nome do usuário SMTP', 'smtp_username', 0), //cpg1.4
  array('Senha do usuário SMTP', 'smtp_password', 0), //cpg1.4

  'Login e Estatísticas', //cpg1.4
  array('Modo do Loggin <a href="#notice3" class="clickable_option">***</a>', 'log_mode', 11, 'f=index.htm&amp;as=admin_logging_log_mode&amp;ae=admin_logging_log_mode_end'), //cpg1.4
  array('E-cards log', 'log_ecards', 1, 'f=index.htm&amp;as=admin_general_log_ecards&amp;ae=admin_general_log_ecards_end'), //cpg1.4
  array('Manter estatísticas de voto detalhadas','vote_details',1, 'f=index.htm&amp;as=admin_logging_votedetails&amp;ae=admin_logging_votedetails_end'), //cpg1.4
  array('Manter estatísticas de cliques detalhadas','hit_details',1, 'f=index.htm&amp;as=admin_logging_hitdetails&amp;ae=admin_logging_hitdetails_end'), //cpg1.4

  'Configurações de Manutenção', //cpg1.4
  array('Habilitar modo DEBUG', 'debug_mode', 9, 'f=index.htm&amp;as=debug_mode&amp;ae=debug_mode_end'), //cpg1.4
  array('Mostrar notícias no modo DEBUG', 'debug_notice', 1, 'f=index.htm&amp;as=admin_misc_debug_notices&amp;ae=admin_misc_debug_notices_end'), //cpg1.4
  array('Galeria está offline', 'offline', 1, 'f=index.htm&amp;as=admin_general_offline&amp;ae=admin_general_offline_end'), //cpg1.4
);


// ------------------------------------------------------------------------- //
// File db_ecard.php
// ------------------------------------------------------------------------- //

if (defined('DB_ECARD_PHP')) $lang_db_ecard_php = array(
  'title' => 'Enviar ecards',
  'ecard_sender' => 'Quem Enviou',
  'ecard_recipient' => 'Destinatário',
  'ecard_date' => 'Data',
  'ecard_display' => 'Mostrar ecard',
  'ecard_name' => 'Nome',
  'ecard_email' => 'Email',
  'ecard_ip' => 'IP #',
  'ecard_ascending' => 'crescente',
  'ecard_descending' => 'decrescente',
  'ecard_sorted' => 'Ordenado',
  'ecard_by_date' => 'por data',
  'ecard_by_sender_name' => 'por nome de quem enviou',
  'ecard_by_sender_email' => 'por email de quem enviou',
  'ecard_by_sender_ip' => 'por endereco de IP de quem enviou',
  'ecard_by_recipient_name' => 'por nome do destinatário',
  'ecard_by_recipient_email' => 'por email do destinatário',
  'ecard_number' => 'mostrando registros %s para %s de %s',
  'ecard_goto_page' => 'vá para a página',
  'ecard_records_per_page' => 'Registros por página',
  'check_all' => 'Marcar todos',
  'uncheck_all' => 'Desmarcar todos',
  'ecards_delete_selected' => 'Apagar ecards selecionados',
  'ecards_delete_confirm' => 'Você tem certeza que deseja apagar os registro? Marque o checkbox!',
  'ecards_delete_sure' => 'Eu tenho certeza',
);


// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
  'empty_name_or_com' => 'Você precisa escrever o seu nome e um comentário',
  'com_added' => 'Seu comentário foi adicionado',
  'alb_need_title' => 'Você deve providenciar um titulo para o Álbum!',
  'no_udp_needed' => 'Atualização não é necessária.',
  'alb_updated' => 'O álbum foi atualizado',
  'unknown_album' => 'O álbum selecionado não existe ou você não tem permição para enviar arquivos para este álbum',
  'no_pic_uploaded' => 'Nenhum arquivo foi enviado!<br /><br />Se voce realmente selecionou um arquivo para enviar, verifique se o servidor aceita envios...',
  'err_mkdir' => 'Falhou para criar diretório %s !',
  'dest_dir_ro' => 'O Diretório de Destino %s não está com permissão de escrita neste Script !',
  'err_move' => 'Impossível mover %s para %s !',
  'err_fsize_too_large' => 'O tamanho do arquivo que você está enviando é muito grande (máximo permitido é %s x %s) !', //obsolete since cpg1.3 - consider removal in cpg1.4 once upload.php has been overhauled
  'err_imgsize_too_large' => 'O tamanho do arquivo que você está enviando é muito grande (máximo permitido é %s KB) !', //obsolete since cpg1.3 - consider removal in cpg1.4 once upload.php has been overhauled
  'err_invalid_img' => 'O arquivo que você está enviando não é uma imagem válida !',
  'allowed_img_types' => 'Você somente pode enviar imagens %s.',
  'err_insert_pic' => 'O arquivo \'%s\' não pode ser inserido no álbum',
  'upload_success' => 'Seu arquivo foi enviado com sucesso!.<br /><br />Ele estará visível assim que o administrador aprová-lo.',
  'notify_admin_email_subject' => '%s - Notificação de Envio',
  'notify_admin_email_body' => 'Uma imagem foi enviada por %s que precisa da sua aprovação. Visite %s',
  'info' => 'informação',
  'com_added' => 'Comentário Adicionado',
  'alb_updated' => 'Álbum Atualizado',
  'err_comment_empty' => 'Seu comentário está vazio!',
  'err_invalid_fext' => 'Somente arquivos com as seguintes extenções são aceitos: <br /><br />%s.',
  'no_flood' => 'Desculpe mas você foi o autor do último comentário postado para este arquivo<br /><br />Edite o comentário que você postou se quiser modificá-lo',
  'redirect_msg' => 'Você está sendo redirecionado.<br /><br /><br />Clique \'CONTINUE\' se a página não atualizar automaticamente',
  'upl_success' => 'Seu arquivo foi adicionado com sucesso',
  'email_comment_subject' => 'Comentario postado na Galeria de Fotos Coppermine',
  'email_comment_body' => 'Alguém postou um comentário na sua galeria. Veja ele',
  'album_not_selected' => 'Album não selecionado', //cpg1.4
  'com_author_error' => 'Um usuário registrado está usando este nome, entre com outro usuário', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
  'caption' => 'Subtitulo',
  'fs_pic' => 'tamanho total da imagem',
  'del_success' => 'apagado com sucesso',
  'ns_pic' => 'tamanho normal da imagem',
  'err_del' => 'não pode ser apagado',
  'thumb_pic' => 'miniatura',
  'comment' => 'comentário',
  'im_in_alb' => 'imagem no álbum',
  'alb_del_success' => 'Álbum &laquo;%s&raquo; apagado', //cpg1.4
  'alb_mgr' => 'Manuseador de Álbum',
  'err_invalid_data' => 'Dado inválido recebido em \'%s\'',
  'create_alb' => 'Criando o álbum \'%s\'',
  'update_alb' => 'Atualizando o álbum \'%s\' com o título \'%s\' e índice \'%s\'',
  'del_pic' => 'Apagar ficheiro',
  'del_alb' => 'Apagar álbum',
  'del_user' => 'Apagar Usuário',
  'err_unknown_user' => 'O Usuário selecionado não existe!',
  'err_empty_groups' => 'Não há nenhuma tabela do grupo, ou a tabela do grupo está vazia!', //cpg1.4
  'comment_deleted' => 'Comentário foi apagado com sucesso',
  'npic' => 'Imagem', //cpg1.4
  'pic_mgr' => 'Manuseador de Imagem', //cpg1.4
  'update_pic' => 'Atualizando Imagem \'%s\' com nome de arquivo \'%s\' e índice \'%s\'', //cpg1.4
  'username' => 'Usuário', //cpg1.4
  'anonymized_comments' => '%s comentário(s) anonimado', //cpg1.4
  'anonymized_uploads' => '%s Envio(s) publico(s) anonimado', //cpg1.4
  'deleted_comments' => '%s comentário(s) apagado', //cpg1.4
  'deleted_uploads' => '%s envio(s) público(s) apagado', //cpg1.4
  'user_deleted' => 'usuário %s excluído', //cpg1.4
  'activate_user' => 'Ativar Usuário', //cpg1.4
  'user_already_active' => 'Conta já está ativa', //cpg1.4
  'activated' => 'Ativada', //cpg1.4
  'deactivate_user' => 'desativar Usuário', //cpg1.4
  'user_already_inactive' => 'Conta já está inativa', //cpg1.4
  'deactivated' => 'Desativado', //cpg1.4
  'reset_password' => 'Resetar senha(s)', //cpg1.4
  'password_reset' => 'Resetar senha para %s', //cpg1.4
  'change_group' => 'mudar grupo primário', //cpg1.4
  'change_group_to_group' => 'Mudando de %s para %s', //cpg1.4
  'add_group' => 'Adicionar grupo secundário', //cpg1.4
  'add_group_to_group' => 'Adicionando usuário %s ao grupo %s. Ele agora é membro de %s como primário e de %s como secundário.', //cpg1.4
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
  'confirm_del' => 'Você tem certeza que deseja APAGAR este arquivo ? \\nComments serão apagados.', //js-alert
  'del_pic' => 'EXCLUÍR ESTE ARQUIVO',
  'size' => '%s x %s pixels',
  'views' => '%s vezes',
  'slideshow' => 'Show de Slides',
  'stop_slideshow' => 'PARAR SHOW DE SLIDES',
  'view_fs' => 'Clique Para Ampliar essa Imagem',
  'edit_pic' => 'Editar informação do Arquivo', //cpg1.4
  'crop_pic' => 'Cortar e Girar',
  'set_player' => 'Mudar o jogador',
);

$lang_picinfo = array(
  'title' =>'Informação do Arquivo',
  'Filename' => 'Nome do arquivo',
  'Album name' => 'Nome do Álbum',
  'Rating' => 'Avaliação (%s votos)',
  'Keywords' => 'Palavras-chave',
  'File Size' => 'Tamanho do Arquivo',
  'Date Added' => 'Data adicionada', //cpg1.4
  'Dimensions' => 'Dimensões',
  'Displayed' => 'Displayed',
  'URL' => 'URL', //cpg1.4
  'Make' => 'Fazer', //cpg1.4
  'Model' => 'Modelo', //cpg1.4
  'DateTime' => 'Data', //cpg1.4
  'ISOSpeedRatings'=>'ISO', //cpg1.4
  'MaxApertureValue' => 'Abertura Máxima', //cpg1.4
  'FocalLength' => 'Leitura Focal', //cpg1.4
  'Comment' => 'Comentário',
  'addFav'=>'Adicionar aos Favoritos',
  'addFavPhrase'=>'Favoritos',
  'remFav'=>'Remover dos Favoritos',
  'iptcTitle'=>'IPTC Título',
  'iptcCopyright'=>'IPTC Direitos Autorais',
  'iptcKeywords'=>'IPTC Palavras-chave',
  'iptcCategory'=>'IPTC Categoria',
  'iptcSubCategories'=>'IPTC Sub categorias',
  'ColorSpace' => 'Espaço da Cor', //cpg1.4
  'ExposureProgram' => 'Programa de Exposição', //cpg1.4
  'Flash' => 'Flash', //cpg1.4
  'MeteringMode' => 'Modo de medição', //cpg1.4
  'ExposureTime' => 'Tempo de Exposição', //cpg1.4
  'ExposureBiasValue' => 'Polarização da Exposição', //cpg1.4
  'ImageDescription' => ' Descrição da Imagem', //cpg1.4
  'Orientation' => 'Orientação', //cpg1.4
  'xResolution' => 'Resolução X', //cpg1.4
  'yResolution' => 'Resolução Y', //cpg1.4
  'ResolutionUnit' => 'Unidade de Resolução', //cpg1.4
  'Software' => 'Programa', //cpg1.4
  'YCbCrPositioning' => 'YCbCrPosicionamento', //cpg1.4
  'ExifOffset' => 'Exif Offset', //cpg1.4
  'IFD1Offset' => 'IFD1 Offset', //cpg1.4
  'FNumber' => 'FNumber', //cpg1.4
  'ExifVersion' => 'Verção do Exif', //cpg1.4
  'DateTimeOriginal' => 'Data e Hora Original', //cpg1.4
  'DateTimedigitized' => 'Data e Hora digitalizada', //cpg1.4
  'ComponentsConfiguration' => 'Configuração dos Componentes', //cpg1.4
  'CompressedBitsPerPixel' => 'Bits comprenssados por Pixel', //cpg1.4
  'LightSource' => 'Fonte de Luz', //cpg1.4
  'ISOSetting' => 'Configuração ISO', //cpg1.4
  'ColorMode' => 'Modo de Cor', //cpg1.4
  'Quality' => 'Qualidade', //cpg1.4
  'ImageSharpening' => 'Foco da Imagem', //cpg1.4
  'FocusMode' => 'Modo do Foco', //cpg1.4
  'FlashSetting' => 'Configurações do Flash', //cpg1.4
  'ISOSelection' => 'Seleção de ISO', //cpg1.4
  'ImageAdjustment' => 'Ajustes de Imagem', //cpg1.4
  'Adapter' => 'Adaptador', //cpg1.4
  'ManualFocusDistance' => 'Distância manual do foco', //cpg1.4
  'DigitalZoom' => 'Zoom Digital', //cpg1.4
  'AFFocusPosition' => 'Posição do Foco AF', //cpg1.4
  'Saturation' => 'Saturação', //cpg1.4
  'NoiseReduction' => 'Redução de Ruídos', //cpg1.4
  'FlashPixVersion' => 'Versão do Pix Flash', //cpg1.4
  'ExifImageWidth' => 'Largura da imagem Exif', //cpg1.4
  'ExifImageHeight' => 'Altura da imagem Exif', //cpg1.4
  'ExifInteroperabilityOffset' => 'Interoperabilidade de OFFset Exif', //cpg1.4
  'FileSource' => 'Fonte do Arquivo', //cpg1.4
  'SceneType' => 'Tipo de cena', //cpg1.4
  'CustomerRender' => 'Rendenizador', //cpg1.4
  'ExposureMode' => 'Modo de Exposição', //cpg1.4
  'WhiteBalance' => 'Balanço do Branco', //cpg1.4
  'DigitalZoomRatio' => 'Relação do Zoom Digital', //cpg1.4
  'SceneCaptureMode' => 'Modo de Captura de cena', //cpg1.4
  'GainControl' => 'Controle de Ganho', //cpg1.4
  'Contrast' => 'Contraste', //cpg1.4
  'Sharpness' => 'Foco', //cpg1.4
  'ManageExifDisplay' => 'Mostrar manuseio Exif', //cpg1.4
  'submit' => 'Enviar', //cpg1.4
  'success' => 'Informações atualizadas com sucesso.', //cpg1.4
  'details' => 'Detalhes', //cpg1.4
);

$lang_display_comments = array(
  'OK' => 'OK',
  'edit_title' => 'Editar este comentário',
  'confirm_delete' => 'Você tem certeza que deseja remover este comentário ?', //js-alert
  'add_your_comment' => 'Adicionar seu comentário',
  'name'=>'Nome',
  'comment'=>'Comentário',
  'your_name' => 'Anonimo',
  'report_comment_title' => 'Reportar este comentário ao administrador', //cpg1.4
);

$lang_fullsize_popup = array(
  'click_to_close' => 'Clique na imagem para fechar esta janela',
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
  'title' => 'Enviar um e-card',
  'invalid_email' => '<font color="red"><b>Warning</b></font>: invalid email address:', //cpg1.4
  'ecard_title' => 'Um e-card de %s para você',
  'error_not_image' => 'Somente imagens podem ser enviadas para um ecard.',
  'view_ecard' => 'Alternar o link do e-card se não aparecer corretamente', //cpg1.4
  'view_ecard_plaintext' => 'Para visualizar o ecard, copie e cole esta URL no seu navegador:', //cpg1.4
  'view_more_pics' => 'Vizualizar mais imagens !', //cpg1.4
  'send_success' => 'Seu ecard foi enviado',
  'send_failed' => 'Desculpe mas o servidor nao pode enviar o seu e-card...',
  'from' => 'De',
  'your_name' => 'Seu Nome',
  'your_email' => 'Seu endereço de email',
  'to' => 'Para',
  'rcpt_name' => 'Nome do Destinatário',
  'rcpt_email' => 'Endereço de Email do Destinatário',
  'greetings' => 'Cabeçalho', //cpg1.4
  'message' => 'Mensagem', //cpg1.4
  'ecards_footer' => 'Enviado por %s do IP %s para %s (Hora da Galeria)', //cpg1.4
  'preview' => 'Pré visualização do ecard', //cpg1.4
  'preview_button' => 'Previsutalizar', //cpg1.4
  'submit_button' => 'Enviar ecard', //cpg1.4
  'preview_view_ecard' => 'Este será o link alternativo para o ecard que será gerado. Se a pré-vizualização não funcionar.', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File report_file.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('REPORT_FILE_PHP') || defined('DISPLAYREPORT_PHP')) $lang_report_php =array(
  'title' => 'Reportar ao Administrador', //cpg1.4
  'invalid_email' => '<b>Atenção</b> : Endereço de email inválido !', //cpg1.4
  'report_subject' => 'Um reporte de %s na galeria %s', //cpg1.4
  'view_report' => 'Link alternativo se o reposte não estiver sendo exibido corretamente', //cpg1.4
  'view_report_plaintext' => 'Para visualizar o reporte, copie e cole esta URL no seu navegador:', //cpg1.4
  'view_more_pics' => 'Galeria', //cpg1.4
  'send_success' => 'Seu reporte foi enviado', //cpg1.4
  'send_failed' => 'Desculpe mas o servidor não pode enviar o seu reporte...', //cpg1.4
  'from' => 'De', //cpg1.4
  'your_name' => 'Seu nome', //cpg1.4
  'your_email' => 'Seu endereço de email', //cpg1.4
  'to' => 'Para', //cpg1.4
  'administrator' => 'Administrador/Moderador', //cpg1.4
  'subject' => 'Conteúdo', //cpg1.4
  'comment_field_name' => 'Reportando um comentário por "%s"', //cpg1.4
  'reason' => 'Questão', //cpg1.4
  'message' => 'Mensagem', //cpg1.4
  'report_footer' => 'Enviado por %s do IP %s à %s (hora da Galeria)', //cpg1.4
  'obscene' => 'obseno', //cpg1.4
  'offensive' => 'ofencivo', //cpg1.4
  'misplaced' => 'fora do tópico/nada haver', //cpg1.4
  'missing' => 'perdido', //cpg1.4
  'issue' => 'erro/não pode ver', //cpg1.4
  'other' => 'outro', //cpg1.4
  'refers_to' => 'Arquivo de reporte se refere à', //cpg1.4
  'reasons_list_heading' => 'questões(s) para reporte:', //cpg1.4
  'no_reason_given' => 'nenhuma questão foi dada', //cpg1.4
  'go_comment' => 'Ir ao comentário', //cpg1.4
  'view_comment' => 'Ver reporte completo com comentário', //cpg1.4
  'type_file' => 'arquivo', //cpg1.4
  'type_comment' => 'comentário', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
  'pic_info' => 'Informação do Arquivo',
  'album' => 'Album',
  'title' => 'Título',
  'filename' => 'Nome do Arquivo', //cpg1.4
  'desc' => 'Descrição',
  'keywords' => 'Palavras Chave',
  'new_keyword' => 'Nova palavra chave', //cpg1.4
  'new_keywords' => 'Nova palavra chave encontrada', //cpg1.4
  'existing_keyword' => 'Palavra chave existente', //cpg1.4
  'pic_info_str' => '%s &times; %s - %s KB - %s views - %s votes',
  'approve' => 'Arquivo aprovado',
  'postpone_app' => 'Aprovação Postpone',
  'del_pic' => 'Excluir arquivo',
  'del_all' => 'Apagar todos os arquivos', //cpg1.4
  'read_exif' => 'Ler informação EXIF novamente',
  'reset_view_count' => 'Resetar contador de vizualização',
  'reset_all_view_count' => 'Resetal TODOS os contadores de visualização', //cpg1.4
  'reset_votes' => 'Resetar Votos',
  'reset_all_votes' => 'Resetar TODOS os votos', //cpg1.4
  'del_comm' => 'Apagar comentários',
  'del_all_comm' => 'Apagar TODOS os comentários', //cpg1.4
  'upl_approval' => 'Aprovação de Envio', //cpg1.4
  'edit_pics' => 'Editar arquivos',
  'see_next' => 'Ver próximos arquivos',
  'see_prev' => 'Ver arquivos anteriores',
  'n_pic' => '%s arquivos',
  'n_of_pic_to_disp' => 'Número de arquivos à mostrar',
  'apply' => 'Aplicar Modificações',
  'crop_title' => 'Editor de Imagens Coppermine',
  'preview' => 'Pré-vizualização',
  'save' => 'Salvar Imagem',
  'save_thumb' =>'Slavar como miniatura',
  'gallery_icon' => 'Fazer deste o meu ícone', //cpg1.4
  'sel_on_img' =>'A seleção pode ser entrada na imagem!', //js-alert
  'album_properties' =>'Propriedade do Álbum', //cpg1.4
  'parent_category' =>'Categoria parent', //cpg1.4
  'thumbnail_view' =>'Vizulizar Miniatura', //cpg1.4
  'select_unselect' =>'Selecionar/deselecionar tudo', //cpg1.4
  'file_exists' => "Arquivo de destino '%s' já existe.", //cpg1.4
  'rename_failed' => "Falhou ao renomear '%s' para '%s'.", //cpg1.4
  'src_file_missing' => "Arquivo fonte '%s' está faltando.", // cpg 1.4
  'mime_conv' => "Não posso converter arquivo de '%s' para '%s'",//cpg1.4
  'forb_ext' => 'Extenção de arquivo proibida.',//cpg1.4
);

// ------------------------------------------------------------------------- //
// File faq.php
// ------------------------------------------------------------------------- //

if (defined('FAQ_PHP')) $lang_faq_php = array(
  'faq' => 'Questões Frequentemente Respondidas',
  'toc' => 'Tabela de conteúdos',
  'question' => 'Questão: ',
  'answer' => 'Resposta: ',
);

if (defined('FAQ_PHP')) $lang_faq_data = array(
  'FAQ Geral',
  array('Por quer eu preciso registrar?', 'O registo pode ou não pode ser requerido pelo administrador. O registo dá a um membro características adicionais tais como uploading, tendo uma lista favorita, retratos avaliando e afixando comenta etc. .', 'allow_user_registration', '1'),
  array('Como eu registro?', 'Vá para &quot;Registro&quot; e preencha todos os campos requeridos (e os opcionais se você quiser).<br />Se o administrador tiver a ativação do email permitida, então após ter submetido sua informação você deve recieve uma mensagem do email no endereço que você submeteu ao registar, dando lhe instruções em como ativar sua sociedade. Sua sociedade deve ser ativada para que você ao início de uma sessão.', 'allow_user_registration', '1'), //cpg1.4
  array('Como eu faço Login?', 'Vá para &quot;Login&quot;, submeter seu &quot do username e da senha e da verificação; Recordar Me&quot; você estará entrado assim no local se você o deixar .<br /><b>IMPORTANT:Cookies must be enabled and the cookie from this site must not be deleted in order to use &quot;Remember Me&quot;.</b>', 'offline', 0),
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
  array('How can I view other users\' galleries?', 'Go to &quot;Album List&quot; and select &quot;Galerias do Usuário&quot;.', 'allow_private_albums', 0),
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
  'forgot_passwd' => 'Lembrar Senha',
  'err_already_logged_in' => 'Você já está logado !',
  'enter_email' => 'Entre com o seu endereço de email', //cpg1.4
  'submit' => 'ir',
  'illegal_session' => 'Senha inválida ou seção expirou.', //cpg1.4
  'failed_sending_email' => 'O email com a senha não pode ser enviado!',
  'email_sent' => 'Um email com o seu nome de usuário e uma nova senha foi enviado para %s', //cpg1.4
  'verify_email_sent' => 'Um email foi enviado para %s. Por favor verifique o seu email para concluir o processo.', //cpg1.4
  'err_unk_user' => 'Usuário selecionado não existe!',
  'account_verify_subject' => '%s - Nova senha requisitada', //cpg1.4
  'account_verify_body' => 'Você requisitou uma nova senha. Se voce deseja proceder com o envio de uma nova senha para você, clique no seguinte link:

%s', //cpg1.4
  'passwd_reset_subject' => '%s - Sua nova senha', //cpg1.4
  'passwd_reset_body' => 'Aqui esta a nova senha requisitada por você:
Nome do usuário: %s
Senha: %s
Clique %s para logar.', //cpg1.4
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
  'confirm_del' => 'Aviso: Quando apaga um grupo, os seus Usuários são transferidos para o grupo \'Registados\' !\n\nDeseja continuar ?', //js-alert
  'title' => 'Administração grupo de Usuários',
  'num_file_upload' => 'Caixas de envio de ficheiros', //cpg1.4
  'num_URI_upload' => 'Caixas de envio URI', //cpg1.4
  'reset_to_default' => 'Restabelece o nome por defeito (%s) - recomendado!', //cpg1.4
  'error_group_empty' => 'A tabela de grupos estava vazia !<br /><br />Foram criados os grupos por defeito, por favor recarregue esta página', //cpg1.4
  'explain_greyed_out_title' => 'Porque está esta fila a cizento(desactivada)?', //cpg1.4
  'explain_guests_greyed_out_text' => 'Não pode alterar as propriedades deste grupo porque activou a opção &quot; Permitir acesso a Usuários não validados(convidados ou anônimos)&quot; para &quot;No&quot; na página de configuração. Os convidados (membros do grupo %s) não têm outro previlégio senão o de se validar(iniciar sessão); Então as definições de grupo não são aplicáveis a estes Usuários.', //cpg1.4
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
  'user_list' => 'Lista de Usuários',
  'no_user_gal' => 'Não existem Usuários com Galeria',
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
  'title' => 'Manusear palavras chave', //cpg1.4
  'edit' => 'editar', //cpg1.4
  'delete' => 'apagar', //cpg1.4
  'search' => 'procurar', //cpg1.4
  'keyword_test_search' => 'procurar por %s em uma nova janela', //cpg1.4
  'keyword_del' => 'apagar a palavra chave %s', //cpg1.4
  'confirm_delete' => 'Você tem certeza que deseja apagar a palavra chave %s desta galeria?', //cpg1.4  // js-alert
  'change_keyword' => 'mudar palavra chave', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
  'login' => 'Login',
  'enter_login_pswd' => 'Insira nome de Usuário e Senha para Entrar',
  'username' => 'Usuário',
  'password' => 'Senha',
  'remember_me' => 'Gravar Senha',
  'welcome' => 'Seja Bem Vindo(a) %s ...',
  'err_login' => '*** Não foi possivel validar. Tente novamente ***',
  'err_already_logged_in' => 'Já se Encontra Logado!',
  'forgot_password_link' => 'Esqueci-me da Senha',
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
  'close' => 'fechar', //cpg1.4
  'submit' => 'OK', //cpg1.4
  'up' => 'subir um nível', //cpg1.4
  'current_path' => 'caminho atual', //cpg1.4
  'select_directory' => 'por favor selecione um diretorio', //cpg1.4
  'click_to_close' => 'Clique na imagem para fechar esta janela',
);

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
  'upd_alb_n' => 'Atualizar álbum %s',
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
  'user_gal' => 'Galeria do Usuário',
  'no_cat' => '* Sem categoria *',
  'alb_empty' => 'O Álbum está Vazio',
  'last_uploaded' => 'Última Enviada',
  'public_alb' => 'Todos (álbum público)',
  'me_only' => 'Apenas eu',
  'owner_only' => 'Apenas o dono do álbum (%s)',
  'groupp_only' => 'Membros do grupo \'%s\'',
  'err_no_alb_to_modify' => 'Não existe álbum na base de dados que possa modificar.',
  'update' => 'Atualizar álbum',
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
  'explanation' => 'Esta saída é gerada por uma função PHP-function <a href="http://www.php.net/phpinfo">phpinfo()</a>, exibido com Coppermine (trimming the output at the right side).',
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
  'explanation1' => 'o administrador selecionou na "Ordem de ficheiros por defeito" na configuração o valor "Posição descendente" ou "Posição ascendente" (configuração global para todos os Usuários sem definições pessoais)', //cpg1.4
  'explanation2' => 'o Usuário definiu "Posição descendente" ou "Posição ascendente" na página de miniaturas (Configuração por Usuário)', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File pluginmgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('PLUGINMGR_PHP')){

$lang_pluginmgr_php = array(
  'confirm_uninstall' => 'Você tem certeza que deseja DESINTALAR este plugin', //cpg1.4
  'confirm_delete' => 'Você tem certeza que deseja APAGAR este plugin', //cpg1.4
  'pmgr' => 'Manuseador de plugin', //cpg1.4
  'name' => 'Nome', //cpg1.4
  'author' => 'Autor', //cpg1.4
  'desc' => 'Descrição', //cpg1.4
  'vers' => 'v', //cpg1.4
  'i_plugins' => 'Plugins Instalados', //cpg1.4
  'n_plugins' => 'Plugins Não Instalados', //cpg1.4
  'none_installed' => 'Nenhum Instalado', //cpg1.4
  'operation' => 'Operação', //cpg1.4
  'not_plugin_package' => 'O arquivo enviado não é um pacote de plugin.', //cpg1.4
  'copy_error' => 'Aconeceu um erro enquanto copiava o pacote de plugins para a pasta.', //cpg1.4
  'upload' => 'Enviar', //cpg1.4
  'configure_plugin' => 'Configurar Plugin', //cpg1.4
  'cleanup_plugin' => 'Limpar Plugin', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
  'already_rated' => 'Desculpe mas você já qualificou este arquivo',
  'rate_ok' => 'Seu voto foi aceito',
  'forbidden' => 'Você não pode qualificar seus próprios arquivos.',
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
  'page_title' => 'Registração de Usuário',
  'term_cond' => 'Termos e Condições',
  'i_agree' => 'Eu Concordo',
  'submit' => 'Enviar Registro',
  'err_user_exists' => 'O nome do usuário que você escolheu já existe, por favor escolha um outro diferente',
  'err_password_mismatch' => 'As duas senhas não conferem, por favor entre com elas novamente',
  'err_uname_short' => 'O Nome de Usuário deve conter pelo menos mais do que 2 caracteres',
  'err_password_short' => 'A Senha deve conter pelo menos mais do que 2 caracteres',
  'err_uname_pass_diff' => 'Nome do Usuário e Senha devem ser diferentes',
  'err_invalid_email' => 'Endereço de email inválido',
  'err_duplicate_email' => 'Outro usuário já foi registrado com este endereço de email que você digitou',
  'enter_info' => 'Informação de Entrada de Registração',
  'required_info' => 'Informação Requerida',
  'optional_info' => 'Informação Opcional',
  'username' => 'Nome do Usuário',
  'password' => 'Senha',
  'password_again' => 'Digite novamente a Senha',
  'email' => 'Email',
  'location' => 'Localização',
  'interests' => 'Interesses',
  'website' => 'Página Pessoal',
  'occupation' => 'Ocupação',
  'error' => 'ERRO',
  'confirm_email_subject' => '%s - Confirmação de Registro',
  'information' => 'Informação',
  'failed_sending_email' => 'A confirmação de registro não pode ser enviada !',
  'thank_you' => 'Obrigado por se registrar.<br /><br />Um email contendo informações de como confirmar o seu registro foi enviado para você.',
  'acct_created' => 'Sua conta foi criada, agora você pode logar com o seu nome de usuário e senha',
  'acct_active' => 'Sua conta está agora ativa e você pode logar com o seu nome de usuário e senha',
  'acct_already_act' => 'Conta já ativa!', //cpg1.4
  'acct_act_failed' => 'Esta conta não pode ser ativada !',
  'err_unk_user' => 'Usuário selecionado não existe !',
  'x_s_profile' => '%s\'s perfil',
  'group' => 'Grupo',
  'reg_date' => 'Unido',
  'disk_usage' => 'Disco Usado',
  'change_pass' => 'Mudar Senha',
  'current_pass' => 'Senha Atual',
  'new_pass' => 'Nova Senha',
  'new_pass_again' => 'Nova Senha Novamente',
  'err_curr_pass' => 'Senha atual incorreta',
  'apply_modif' => 'Apicar Modificações',
  'change_pass' => 'Mudar minha senha',
  'update_success' => 'Seu perfil foi modificado',
  'pass_chg_success' => 'Sua senha foi alterada',
  'pass_chg_error' => 'Sua senha não foi alterada',
  'notify_admin_email_subject' => '%s - Notificação de Registro',
  'last_uploads' => 'Last uploaded file.<br />Clique para ver todos os envios por', //cpg1.4
  'last_comments' => 'Last comment.<br />Clique para ver todos os comentarios feitos por', //cpg1.4
  'notify_admin_email_body' => 'Um novo usuário com o nome de usuário "%s" se registrou na sua galeria',
  'pic_count' => 'Arquivos Enviados', //cpg1.4
  'notify_admin_request_email_subject' => '%s - Registro Requerido', //cpg1.4
  'thank_you_admin_activation' => 'Obrigado.<br /><br />Sua requisição de aticação de conta foi enviada ao administrador. Você receberá um email se aprovado.', //cpg1.4
  'acct_active_admin_activation' => 'A conta está agora ativa e um email foi enviado para o usuário.', //cpg1.4
  'notify_user_email_subject' => '%s - Notificação de Ativação', //cpg1.4
);

$lang_register_confirm_email = <<<EOT
Obrigado por se registrar no {SITE_NAME}

Para ativar a sua conta como o usuário "{USER_NAME}", você precisa clicar no link abaixo ou copiá-lo e colá-lo no seu navegador.

<a href="{ACT_LINK}">{ACT_LINK}</a>

Grato,

Administrador do site {SITE_NAME}

EOT;

$lang_register_approve_email = <<<EOT
Um novo usuário com o nome "{USER_NAME}" foi registrado na sua galeria.

Para ativar esta conta você precisa clicar no link abaico ou copiar e colar em seu navegador.

<a href="{ACT_LINK}">{ACT_LINK}</a>

EOT;

$lang_register_activated_email = <<<EOT
Sua conta foi aprovada e ativada.

Agora você pode logar <a href="{SITE_LINK}">{SITE_LINK}</a> usando o seu nome de usuário "{USER_NAME}"


Grato,

Administrador do Site {SITE_NAME}

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
  'name_a' => 'nome Usuário ascendente', //cpg1.4
  'name_d' => 'nome Usuário descendente', //cpg1.4
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
  'page_title' => 'Procurar Novos Arquivos',
  'select_dir' => 'Selecionar Diretorio',
  'select_dir_msg' => 'Esta funcao foi adicionada por voce um arquivo de lote batch que você enviou pelo seu servidor FTP.<br /><br />Selecione o diretorio onde você enviou seus arquivos.', //cpg1.4
  'no_pic_to_add' => 'Não há arquivos para adicionar',
  'need_one_album' => 'Você precisa de um álbum para usar esta função',
  'warning' => 'Cuidado',
  'change_perm' => 'o script nao pode ser escrito neste diretório, você precisa mudar as permições para MODE 755 ou 777 antes de tentar adicionar arquivos !',
  'target_album' => '<b>Colocar arquivos de &quot;</b>%s<b>&quot; dentro </b>%s',
  'folder' => 'Pasta',
  'image' => 'arquivo',
  'album' => 'Album',
  'result' => 'Resultado',
  'dir_ro' => 'Sem escrita. ',
  'dir_cant_read' => 'Sem leitura. ',
  'insert' => 'Adicionando novos arquivos para a galeria',
  'list_new_pic' => 'Lista dos novos arquivos',
  'insert_selected' => 'Inserir arquivos selecionados',
  'no_pic_found' => 'Nenhum novo arquivo foi encontrado',
  'be_patient' => 'Por favor tenha paciência, o script precisade tempo para adicionar os arquivos',
  'no_album' => 'nenhum album selecionado',
  'result_icon' => 'clique para detalhes ou para recarregar',  //cpg1.4
  'notes' =>  '<ul>'.
                          '<li><b>OK</b> : Parece que o arquivo foi adicionado com sucesso'.
                          '<li><b>DP</b> : parece que o arquivo é uma duplicata e já está no banco de dados'.
                          '<li><b>PB</b> : parece que o arquivo não pode ser adicionado, verifique sua configuração e permissão dos diretórios onde os arquivos estão localizados'.
                          '<li><b>NA</b> : parece que você não tem selecionado um álbum de arquivos para ir, clique \'<a href="javascript:history.back(1)">voltar</a>\' e selecione um álbum. Se você não tem um álbum <a href="albmgr.php">crie um primeiro</a></li>'.
                          '<li>Se o  OK, DP, PB \'sinais\' não aparecerem no arquivo quebrado para ver qualquer mensagem de erro produzida pelo PHP'.
                          '<li>Se seu navegador saiu do tempo, clique neste botão'.
                          '</ul>',
  'select_album' => 'selecionar álbum',
  'check_all' => 'Marcar TODOS',
  'uncheck_all' => 'Desmarcar TODOS',
  'no_folders' => 'Não existem pastas dentro "albums" pasta até agora. Tenha certeza que criou uma pasta com "albums" pasta e envie por FTP seus arquivos lá. Você não deve enviar para a pasta "userpics" nem "edit" pastas, elas estão reservadas pelo sistema http.', //cpg1.4
   'albums_no_category' => 'Álbuns sem categoria', //cpg1.4 // album pulldown mod, added by frogfoot
  'personal_albums' => '* Álbuns pessoais', //cpg1.4 // album pulldown mod, added by frogfoot
  'browse_batch_add' => 'Interface navegável (recomendado)', //cpg1.4
  'edit_pics' => 'Editar arquivos', //cpg1.4
  'edit_properties' => 'Propriedades do Álbum', //cpg1.4
  'view_thumbs' => 'Vizualizar Miniatura', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File stat_details.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('STAT_DETAILS_PHP')) $lang_stat_details_php = array(
  'show_hide' => 'mostrar/esconder esta coluna', //cpg1.4
  'vote' => 'Detalhes dos votos', //cpg1.4
  'hits' => 'Detalhes dos Cliques', //cpg1.4
  'stats' => 'Estatisticas de voto', //cpg1.4
  'sdate' => 'Data', //cpg1.4
  'rating' => 'Avaliacao', //cpg1.4
  'search_phrase' => 'Frase para procurar', //cpg1.4
  'referer' => 'Referencia', //cpg1.4
  'browser' => 'Navegador', //cpg1.4
  'os' => 'Sistema Operacional', //cpg1.4
  'ip' => 'IP', //cpg1.4
  'sort_by_xxx' => 'Organizado por %s', //cpg1.4
  'ascending' => 'crescente', //cpg1.4
  'descending' => 'decrescente', //cpg1.4
  'internal' => 'int', //cpg1.4
  'close' => 'fechar', //cpg1.4
  'hide_internal_referers' => 'ocultar referencias internas', //cpg1.4
  'date_display' => 'Mostrar data', //cpg1.4
  'submit' => 'enviar / atualizar', //cpg1.4
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
  'cust_instr_2' => 'Numero de caixas requeridas',
  'cust_instr_3' => 'Caixas de envio de arquvos: %s',
  'cust_instr_4' => 'URI/URL caixas de envio: %s',
  'cust_instr_5' => 'URI/URL caixas de envio:',
  'cust_instr_6' => 'Caixas de envio de arquivos:',
  'cust_instr_7' => 'Por favor entre o numero de caixas de envio e campos que voce quer usar desta vez.  Entao clique em  \'Continue\'. ',
  'reg_instr_1' => 'Acao invalida para criacao de formulario.',
  'reg_instr_2' => 'Agora voce pode enviar seus arquivos usando as caixas de envio abaixo. O tamanho dos arquivos enviados do seu cliente para o servidor nao podem exceder %s KB. Arquivos ZIP enviados no diretorio \'File Upload\' e \'URI/URL Upload\' secoes serao compactados.',
  'reg_instr_3' => 'Se voce quer o arquivo zipado ou arquivo para ser descompactdo, você deve usar a caixa de envio de arquivo destinada para isso na area \'Decompressive ZIP Upload\' .',
  'reg_instr_4' => 'Quando usar a seção URI/URL de envio, por favor entre com o caminho para o arquivo assim: http://www.mysite.com/images/example.jpg',
  'reg_instr_5' => 'Quando você completrar o formulário, por favor clique \'Continue\'.',
  'reg_instr_6' => 'Descompactar Envios ZIP:',
  'reg_instr_7' => 'Arquivos enviados:',
  'reg_instr_8' => 'URI/URL Enviados:',
  'error_report' => 'Relatorio de erros',
  'error_instr' => 'Os seguintes erros de envio foram encontrados:',
  'file_name_url' => 'Nome/URL do arquivo',
  'error_message' => 'Mensagem de Erro',
  'no_post' => 'Arquivo nao enviado por POST.',
  'forb_ext' => 'Extenção de arquivo proibida.',
  'exc_php_ini' => 'Excedido o tamanho do arquivo permitido em php.ini.',
  'exc_file_size' => 'Excedido o tamanho do arquivo permitido por CPG.',
  'partial_upload' => 'Somente um envio parcial.',
  'no_upload' => 'Nenhum envio ocorreu.',
  'unknown_code' => 'Erro de código de envio PHP desconhecido.',
  'no_temp_name' => 'Sem envio - Sem nome temporário.',
  'no_file_size' => 'Conteudo dado/corrompido',
  'impossible' => 'Impossivel mover.',
  'not_image' => 'Nao e uma imagem/corrompido',
  'not_GD' => 'Sem uma extencao GD.',
  'pixel_allowance' => 'A altura e a largura da imagem enviada é maior do que o permitido pelas configurações da galeria.', //cpg1.4
  'incorrect_prefix' => 'Prefixo URI/URL incorreto',
  'could_not_open_URI' => 'Nao posso abrir URI.',
  'unsafe_URI' => 'Safety not verifiable.',
  'meta_data_failure' => 'Dado Meta com falha',
  'http_401' => '401 Nao Autorizado',
  'http_402' => '402 Requerido Pagamento',
  'http_403' => '403 Falha',
  'http_404' => '404 Nao Encontrado',
  'http_500' => '500 Erro Interno no Servidor',
  'http_503' => '503 Servico nao Esta Avaliavel',
  'MIME_extraction_failure' => 'MIME nao pode ser determinado.',
  'MIME_type_unknown' => 'Tipo MIME desconhecido',
  'cant_create_write' => 'Nao posso criar arquivo de escrita.',
  'not_writable' => 'Nao posso escrever o arquivo de escrita.',
  'cant_read_URI' => 'Nao posso ler URI/URL',
  'cant_open_write_file' => 'Cannot open URI write file.',
  'cant_write_write_file' => 'Nao posso escrever o URI arquivo de escrita.',
  'cant_unzip' => 'Nao posso descompactar.',
  'unknown' => 'Erro desconhecido',
  'succ' => 'Envios com sucesso',
  'success' => '%s envios foram bem sucedidos.',
  'add' => 'Por favor clique \'Continue\' para adicionar arquivos no album.',
  'failure' => 'Falhou ao enviar',
  'f_info' => 'Informacao do arquivo',
  'no_place' => 'O arquivo anterior nao pode ser enviado.',
  'yes_place' => 'O arquivo anterior foi enviado com sucesso.',
  'max_fsize' => 'Tamanho maximo do arquivo permitido e %s KB',
  'album' => 'Album',
  'picture' => 'Arquivo',
  'pic_title' => 'Titulo do Arquivo',
  'description' => 'Descricao do Arquivo',
  'keywords' => 'Palavras chaves (separadas com espaco)<br /><a href="#" onClick="return MM_openBrWindow(\'keyword_select.php\',\'selectKey\',\'width=250, height=400, scrollbars=yes,toolbar=no,status=yes,resizable=yes\')">Insert from list</a>', //cpg1.4
  'keywords_sel' =>'Selecione uma palavra chave', //cpg1.4
  'err_no_alb_uploadables' => 'Desculpe nao ha album onde voce esta tentando enviar os arquivos',
  'place_instr_1' => 'Por favor coloque os arquivo num algum agora.  Voce deve entrar com informacoes relevantes sobre o arquivo agora.',
  'place_instr_2' => 'Mais arquivos necessitam de lugar. Por favor clique em \'Continue\'.',
  'process_complete' => 'Voce tem colocado todos os arquivos com sucesso.',
   'albums_no_category' => 'Albums que estao sem categoria', //cpg1.4. //album pulldown mod, added by frogfoot
  'personal_albums' => '* albuns Pessoais', //cpg1.4 //album pulldown mod, added by frogfoot
  'select_album' => 'Selecione album', //cpg1.4 //album pulldown mod, added by frogfoot
  'close' => 'Close', //cpg1.4
  'no_keywords' => 'Desculpe, nao a palavras chave avaliaveis!', //cpg1.4
  'regenerate_dictionary' => 'Dicionario regenerado', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
  'memberlist' => 'Lista de membros', //cpg1.4
  'user_manager' => 'Gestor de Usuários', //cpg1.4
  'title' => 'Gerir Usuários',
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
  'sort_by' => 'Listar Usuários por',
  'err_no_users' => 'A Tabela de Usuários está Vazia !',
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
  'name' => 'Nome de Usuário',
  'group' => 'Grupo',
  'inactive' => 'Inactivo',
  'operations' => 'Operações',
  'pictures' => 'Imagens',
  'disk_space_used' => 'Espaço usado', //cpg1.4
  'disk_space_quota' => 'Quota de disco', //cpg1.4
  'registered_on' => 'Registo', //cpg1.4
  'last_visit' => 'Última visita',
  'u_user_on_p_pages' => '%d Usuários em %d pagina(s)',
  'confirm_del' => 'Tem a certeza de que deseja APAGAR este Usuário? \\nTodas as suas imagens e álbuns serão também apagados.', //js-alert
  'mail' => 'CORREIO',
  'err_unknown_user' => 'O Usuário Selecionado não Existe !',
  'modify_user' => 'Modificar Usuário',
  'notes' => 'Notas',
  'note_list' => '<li>se não deseja modificar a presente Senha, deixe o campo "Senha" em branco',
  'password' => 'Senha',
  'user_active' => 'Usuário está activo',
  'user_group' => 'Grupo do Usuário',
  'user_email' => 'Email do Usuário',
  'user_web_site' => 'Web site do Usuário',
  'create_new_user' => 'Criar Novo Usuário',
  'user_location' => 'Local do Usuário',
  'user_interests' => 'Interesses do Usuário',
  'user_occupation' => 'Ocupação do usuário',
  'user_profile1' => '$user_profile1', //cpg1.4
  'user_profile2' => '$user_profile2', //cpg1.4
  'user_profile3' => '$user_profile3', //cpg1.4
  'user_profile4' => '$user_profile4', //cpg1.4
  'user_profile5' => '$user_profile5', //cpg1.4
  'user_profile6' => '$user_profile6', //cpg1.4
  'latest_upload' => 'Envios Recentes',
  'never' => 'nunca',
  'search' => 'Pesquisa de Usuários', //cpg1.4
  'submit' => 'Submeter', //cpg1.4
  'search_submit' => 'OK!', //cpg1.4
  'search_result' => 'Pesquisa resultados para: ', //cpg1.4
  'alert_no_selection' => 'Tem de seleccionar primeiro, pelo menos um Usuário!', //cpg1.4 //js-alert
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
'Atualiza Títulos do Ficheiro', //cpg1.4
'Apaga títulos', //cpg1.4
'Reconstroi miniaturas e fotos redimensionadas', //cpg1.4
'Apaga fotos com o seu tamanho original substituindo-as com a versão redimensionada', //cpg1.4
'Apaga fotos com dimensões originais ou intermediarias para libertar espaço no disco do servidor', //cpg1.4
'Apaga comentários órfãos', //cpg1.4
'Relê tamanho e dimensões de imagens (se as editou manualmente)', //cpg1.4
'Restabelece o contador de visualizações', //cpg1.4
'Exibe phpinfo', //cpg1.4
'Atualiza a Base de Dados', //cpg1.4
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
  'updated_succesfully' => 'atualização com êxito',
  'error_create' => 'ERRO criando',
  'continue' => 'Processar mais imagens',
  'main_success' => 'O ficheiro %s foi usado como ficheiro principal com êxito',
  'error_rename' => 'Erro ao renomear %s para %s',
  'error_not_found' => 'O ficheiro %s não foi encontrado',
  'back' => 'regressar ao inicio',
  'thumbs_wait' => 'Atualizando miniaturas e/ou imagens redimensionadas, por favor espere...',
  'thumbs_continue_wait' => 'A continuar a atualização de miniaturas e/ou imagens redimensionadas...',
  'titles_wait' => 'Atualizando titulos, por favor espere...',
  'delete_wait' => 'Apagando titulos, por favor espere...',
  'replace_wait' => 'Apagando originais e substituindo-as pelas imagens redimensionadas, por favor espere...',
  'instruction' => 'Instruções rápidas',
  'instruction_action' => 'Selecione a acção',
  'instruction_parameter' => 'Eleja parâmeteros',
  'instruction_album' => 'Escolha o álbum',
  'instruction_press' => 'pressione %s',
  'update' => 'Atualiza miniaturas e/ou fotos redimensionadas',
  'update_what' => 'O que deve ser atualizado',
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
  'update_db' => 'Atualizar Base de Dados',
  'update_db_explanation' => 'Se substituiu ficheiros do Coppermine, adicionou modificações ou atualizou uma versão antiga do Coppermine, certifique-se de correr a atualização da base de dados uma vez. Isto criará as tabelas necessárias e/ou valores configurativos na sua base de dados Coppermine.',
  'view_log' => 'Ver diário de bordo', //cpg1.4
  'view_log_explanation' => 'O Coppermine pode seguir as várias acções dos Usuários.Pode visualizar estes registos se activou o diário de bordo na <a href="admin.php">configuração do coppermine</a>.', //cpg1.4
  'versioncheck' => 'Confirmar versões', //cpg1.4
  'versioncheck_explanation' => 'Veja a versão dos ficheiros para confirmar que os substituiu após uma atualização, ou verifique se existem novas versões Coppermine.', //cpg1.4
  'bridgemanager' => 'Administração de Enlaces', //cpg1.4
  'bridgemanager_explanation' => 'Activa/desactiva a integração (enlace) do Coppermine com outra aplicação (ex. o seu BBS).', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File versioncheck.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('VERSIONCHECK_PHP')) $lang_versioncheck_php = array(
  'title' => 'Verificador de Versao', //cpg1.4
  'what_it_does' => 'Tsua página é significada para os usuários que atualizaram sua instalação do coppermine. Este certificado atravessa as limas em seu web server e tenta determinar se suas versões locais da lima no web server forem as mesmas que essas do repositório em http://coppermine.sourceforge.net, esta maneira que indica as limas você foi significado atualizar também .<br />Mostrará tudo no vermelho que necessita ser reparado. Entradas na necessidade amarela que olha em. As entradas no verde (ou na sua cor da pia batismal do defeito) são APROVADAS .<br />Clicar sobre os ícones da ajuda para encontrar para fora mais .', //cpg1.4
  'online_repository_unable' => 'Desabilitado para conectar ao repositório online', //cpg1.4
  'online_repository_noconnect' => 'Coppermine Está desabilitado para conectar ao repositório online. Isto pode ter duas causas:', //cpg1.4
  'online_repository_reason1' => 'O repositório online coppermine está fora do ar - verifique se você pode navegar nesta página: %s - se você nao pode acessar esta página, tente novamente mais tarde.', //cpg1.4
  'online_repository_reason2' => 'PHP estão configurado no seu servidor web %s desligado (por padrão, ele é ligado). Se o administrador do seu servidorm tornar esta opção ligada <i>php.ini</i> (que antes %s). Se você webhosted, você terá que provavelmente viver com o fato que você pode comparar suas limas ao repositório em linha. Esta página então indicará somente as versões da lima que vieram com sua distribuição - os updates não serão indicados .', //cpg1.4
  'online_repository_skipped' => 'Conexao ao repositorio on-line ignorada', //cpg1.4
  'online_repository_to_local' => 'O certificado está optando a cópia local das versão-limas agora. Os dados podem ser inacurate se você promover Coppermine e você não uploaded todas as limas. Mudanças às limas depois que a liberação não será feita exame no cliente também. ', //cpg1.4
  'local_repository_unable' => 'Incapaz de conectar ao repositório em seu usuário ', //cpg1.4
  'local_repository_explanation' => 'Coppermine era incapaz de conectar à lima do repositório  %s em seu web server. Isto significa provavelmente que você não uploaded a lima do repositório a seu web server. Fazer assim agora e tentar então funcionar esta página uma vez que mais (a batida refresca).<br />Se o certificado falhasse ainda, seu webhost pôde ter incapacitado partes de  <a href="http://www.php.net/manual/en/ref.filesystem.php">PHP\'s filesystem functions</a> completely. In this case, you simply won\'t be able to use this tool at all, sorry.', //cpg1.4
  'coppermine_version_header' => 'Versao Coopermine Instalada', //cpg1.4
  'coppermine_version_info' => 'Atualmente voce tem instalado: %s', //cpg1.4
  'coppermine_version_explanation' => 'If you think this is entirely wrong and you\'re supposed to be running a higher version of Coppermine, you probably haven\'t uploaded the most recent version of the file <i>include/init.inc.php</i>', //cpg1.4
  'version_comparison' => 'Version comparison', //cpg1.4
  'folder_file' => 'folder/file', //cpg1.4
  'coppermine_version' => 'versao cpg', //cpg1.4
  'file_version' => 'versao do arquivo', //cpg1.4
  'webcvs' => 'web cvs', //cpg1.4
  'writable' => 'escrita', //cpg1.4
  'not_writable' => 'sem escrita', //cpg1.4
  'help' => 'Ajuda', //cpg1.4
  'help_file_not_exist_optional1' => 'Arquivo/Pasta nao existe', //cpg1.4
  'help_file_not_exist_optional2' => 'O Arquivo/Pasta %s nao foi encontrado no seu servidor. Opcionalmente voce pode enviar(upar)(usando o seu cliente FTP) para o seu servidor web se voce esta tendo problemas.', //cpg1.4
  'help_file_not_exist_mandatory1' => 'Arquivo/Pasta nao existe', //cpg1.4
  'help_file_not_exist_mandatory2' => 'O Arquivo/Pasta %s nao pode ser encontrado no seu servidor. Envie o arquivo para o seu servidor (Usando o seu cliente FTP).', //cpg1.4
  'help_no_local_version1' => 'Sem arquivo de versao local', //cpg1.4
  'help_no_local_version2' => 'O script esta desabilitado para exstrair um Arquivo de Versao Local - seu arquivo esta fora de data ou voce modificou ele, removendo a informacao do cabecalho dele. É recomendado enviar o arquivo.', //cpg1.4
  'help_local_version_outdated1' => 'Versao local fora de data', //cpg1.4
  'help_local_version_outdated2' => 'Sua versao deste arquivo parece ser de uma versao ultrapassada do Coopermine. Tenha certeza que atualizou este arquivo.', //cpg1.4
  'help_local_version_na1' => 'Impossibilitado de extrair cvs versao info', //cpg1.4
  'help_local_version_na2' => 'O script nao pode determinar qual é a versao cvs do arquivo no seu servidor. Voce pode enviar o arquivo pelo seu pacote.', //cpg1.4
  'help_local_version_dev1' => 'Versao desenvolvimento', //cpg1.4
  'help_local_version_dev2' => 'O arquivo no seu servidor parece estar mais novo que a sua versao instalada do Coopermine. Voce esta usando um arquivo de desenvolvimento (so faca se tiver certeza do que sabe o que esta fazendo),ou voce atualizou seu coopermine mas nao instalou include/init.inc.php', //cpg1.4
  'help_not_writable1' => 'Pasta sem permissao de escrita', //cpg1.4
  'help_not_writable2' => 'Mude as permicoes de arquivos (CHMOD) para garantir o acesso a escrita do script na pasta %s e todo o conteudo.', //cpg1.4
  'help_writable1' => 'Pasta permissao escrita', //cpg1.4
  'help_writable2' => 'A pasta %s esta com permissao para escrita ok. Este é um risco desnecessario, coopermine precisa somente das permissoes de acesso e leitura.', //cpg1.4
  'help_writable_undetermined' => 'Coppermine nas esta habilitado para determinar se esta pasta esta com permissao para escrita.', //cpg1.4
  'your_file' => 'seu arquivo', //cpg1.4
  'reference_file' => 'arquivo referencia', //cpg1.4
  'summary' => 'Sumario', //cpg1.4
  'total' => 'Total de arquivos/pastas checadas', //cpg1.4
  'mandatory_files_missing' => 'Arquivos Mandatory nao encontrados', //cpg1.4
  'optional_files_missing' => 'Arquivos opcionais nao encontrados', //cpg1.4
  'files_from_older_version' => 'Arquivos esta fora da versao do coopermine', //cpg1.4
  'file_version_outdated' => 'Arquivos de versoes fora de data', //cpg1.4
  'error_no_data' => 'The script made a boo, it was not able to retrieve any information. Sorry for the inconvenience.', //cpg1.4
  'go_to_webcvs' => 'go to %s', //cpg1.4
  'options' => 'Options', //cpg1.4
  'show_optional_files' => 'mostar arquivos/pastas opcionais', //cpg1.4
  'show_mandatory_files' => 'mostrar arquivos mandatory', //cpg1.4
  'show_file_versions' => 'mostrar versao dos arquivos', //cpg1.4
  'show_errors_only' => 'mostrar somente pastas/arquivos com erros', //cpg1.4
  'show_permissions' => 'mostrar permissoes das pastas', //cpg1.4
  'show_condensed_output' => 'mostrar saida condensada (para os screenshots)', //cpg1.4
  'coppermine_in_webroot' => 'coppermine esta instalado na raiz do servidor', //cpg1.4
  'connect_online_repository' => 'tentando conectar com o repositorio online', //cpg1.4
  'show_additional_information' => 'mostrar informacao adicional', //cpg1.4
  'no_webcvs_link' => 'nao mostrar link web cvs', //cpg1.4
  'stable_webcvs_link' => 'mostrar link web cvs para banda estavel', //cpg1.4
  'devel_webcvs_link' => 'mostrar link web cvs para banda desenvolvimento', //cpg1.4
  'submit' => 'aplicar mudancas / atualizar', //cpg1.4
  'reset_to_defaults' => 'recuperar os valores padroes', //cpg1.4
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
  'title' => 'Coppermine - XP Assistente de Publicacao Web', //cpg1.4
  'welcome' => 'Bem Vindo <b>%s</b>,', //cpg1.4
  'need_login' => 'Voce precisa de logar para usar a galeria usando seu navegador depois voce pode usar este assistente.<p/><p>Quando voce logar nao marque a selecao <b>relembrar me</b> se for usar agora.', //cpg1.4
  'no_alb' => 'Desculpe mas não ha album onde voce esta enviando figuras com este assistente.', //cpg1.4
  'upload' => 'Envie suas figuras dentro de um album existente', //cpg1.4
  'create_new' => 'Criar um novo album para estas figuras', //cpg1.4
  'album' => 'Album', //cpg1.4
  'category' => 'Categoria', //cpg1.4
  'new_alb_created' => 'Seu novo album &quot;<b>%s</b>&quot; foi criado.', //cpg1.4
  'continue' => 'Pressione &quot;proximo&quot; para iniciar o envio das suas figuras', //cpg1.4
  'link' => 'este link', //cpg1.4
);
}
?>