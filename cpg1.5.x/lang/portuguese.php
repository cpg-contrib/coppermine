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
  Coppermine version: 1.5.11
  $HeadURL$
  $Revision$
**********************************************/

if (!defined('IN_COPPERMINE')) { die('Not in Coppermine...');}

// info about translators and translated language
$lang_translation_info['lang_name_english'] = 'Portuguese';
$lang_translation_info['lang_name_native'] = 'Português de Portugal';
$lang_translation_info['lang_country_code'] = 'pt';
$lang_translation_info['trans_name'] = 'Pedro Ferreira, Paulo Figueira';
$lang_translation_info['trans_email'] = 'pedro.m.ferreira@gmail.com, pfigueira@gmail.com';
$lang_translation_info['trans_website'] = '';
$lang_translation_info['trans_date'] = '2010-12-09';


$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Bytes, Kibibytes, Mebibytes, Gibibytes
$lang_byte_units = array('Bytes', 'KB', 'MB', 'GB');
$lang_decimal_separator = array(',', '.'); //cpg1.5 // symbol used to separate thousands from hundreds and rounded number from decimal place

// Day of weeks and months
$lang_day_of_week = array('Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb');
$lang_month = array('Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez');

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$lang_date['album'] = '%d %B, %Y';
$lang_date['lastcom'] = '%d/%m/%y at %H:%M';
$lang_date['lastup'] = '%d %B, %Y';
$lang_date['register'] = '%d %B, %Y';
$lang_date['lasthit'] = '%d %B, %Y at %I:%M %p';
$lang_date['comment'] = '%d %B, %Y at %I:%M %p';
$lang_date['log'] = '%d %B, %Y at %I:%M %p';
$lang_date['scientific'] = '%d-%m-%Y %H:%M:%S';

// For the word censor
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'assrammer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack','penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*');

$lang_meta_album_names['random'] = 'Imagens Aleatórias';
$lang_meta_album_names['lastup'] = 'Últimos Envios';
$lang_meta_album_names['lastalb'] = 'Últimas Alterações';
$lang_meta_album_names['lastcom'] = 'Últimos Comentários';
$lang_meta_album_names['topn'] = 'Mais vistos';
$lang_meta_album_names['toprated'] = 'Melhores Avaliados';
$lang_meta_album_names['lasthits'] = 'Últimos Exibidos';
$lang_meta_album_names['search'] = 'Resultado pesquisa de imagens';
$lang_meta_album_names['album_search'] = 'Resultado de pesquisa por álbum';
$lang_meta_album_names['category_search'] = 'Resultado de pesquisa por categoria';
$lang_meta_album_names['favpics'] = 'Imagens Favoritas';
$lang_meta_album_names['datebrowse'] = 'Pesquisar por data'; //cpg1.5

$lang_errors['access_denied'] = 'Não tem privilégios para aceder a esta página.';
$lang_errors['invalid_form_token'] = 'Não foi encontrado um token de formulário válido.'; //cpg1.5
$lang_errors['perm_denied'] = 'Não tem privilégios para realizar esta operação.';
$lang_errors['param_missing'] = 'O script foi chamado sem o(s) parâmetro(s) necessário(s).';
$lang_errors['non_exist_ap'] = 'O álbum/imagem seleccionado não existe!';
$lang_errors['quota_exceeded'] = 'Quota de disco excedida.'; //cpg1.5
$lang_errors['quota_exceeded_details'] = 'Tem uma quota de espaço de [quota]K. Os seus ficheiros usam, actualmente, [space]K. Ao adicionar esta imagem vai exceder a sua quota'; //cpg1.5
$lang_errors['gd_file_type_err'] = 'Ao usar a livraria GD, apenas os formatos JPEG e PNG são suportados.';
$lang_errors['invalid_image'] = 'A imagem que enviou está corrompida ou não pode ser manipulada pela livraria GD.';
$lang_errors['resize_failed'] = 'Impossível criar miniatura ou a imagem em tamanho reduzido.';
$lang_errors['no_img_to_display'] = 'Sem imagem para exibir';
$lang_errors['non_exist_cat'] = 'A categoria seleccionada não existe';
$lang_errors['directory_ro'] = 'A directoria \'%s\' é só de leitura. Não é possível apagar os ficheiros';
$lang_errors['pic_in_invalid_album'] = 'O ficheiro encontra-se num álbum inexistente (%s)!?';
$lang_errors['banned'] = 'Está actualmente banido no acesso a este site.';
$lang_errors['offline_title'] = 'Fora do ar';
$lang_errors['offline_text'] = 'Galeria fora do ar - voltamos brevemente';
$lang_errors['ecards_empty'] = 'Actualmente, não existem registos de postais para mostrar.';
$lang_errors['database_query'] = 'Aconteceu um erro ao consultar a base de dados';
$lang_errors['non_exist_comment'] = 'O comentário seleccionado não existe';
$lang_errors['captcha_error'] = 'O código de confirmação não coincide'; // cpg1.5
$lang_errors['login_needed'] = 'Tem de se %sregistar%s/%sestar autenticado%s para aceder a esta página'; // cpg1.5
$lang_errors['error'] = 'Erro'; // cpg1.5
$lang_errors['critical_error'] = 'Erro crítico'; // cpg1.5
$lang_errors['access_thumbnail_only'] = 'Só está autorizado a visualizar imagens em miniatura.'; // cpg1.5
$lang_errors['access_intermediate_only'] = 'Não tem privilégios para ver as imagens em tamanho real.'; // cpg1.5
$lang_errors['access_none'] = 'Não tem privilégios para visualizar qualquer imagem.'; // cpg1.5
$lang_errors['register_globals_title'] = '\'Register Globals\' activadas!';// cpg1.5
$lang_errors['register_globals_warning'] = 'A definição PHP register_globals está activa no servidor, o que é inconveniente em termos de segurança. É recomendado que esta seja desactivada. '; //cpg1.5

$lang_bbcode_help_title = 'Ajuda BBCode';
$lang_bbcode_help = 'Pode adicionar links clicáveis e alguma formatação neste campo usando tags BBCode: <li>[b]Negrito[/b] =&gt; <strong>Negrito</strong></li><li>[i]Itálico[/i] =&gt; <i>Itálico</i></li><li>[url=http://oseuwebsite.com/]Url[/url] =&gt; <a href="http://oseuwebsite.com">Url</a></li><li>[email]utilizador@domínio.com[/email] =&gt; <a href="mailto:utilizador@domínio.com">utilizador@domínio.com</a></li><li>[color=red]texto[/color] =&gt; <span style="color:red">texto</span></li><li>[img]http://documentation.coppermine-gallery.net/images/browser.png[/img] =&gt; <img src="docs/images/browser.png" border="0" alt="" /></li>';

$lang_common['yes'] = 'Sim'; // cpg1.5
$lang_common['no'] = 'Não'; // cpg1.5
$lang_common['back'] = 'Voltar'; // cpg1.5
$lang_common['continue'] = 'Continuar'; // cpg1.5
$lang_common['information'] = 'Informações'; // cpg1.5
$lang_common['error'] = 'Erro'; // cpg1.5
$lang_common['check_uncheck_all'] = 'marcar/desmarcar todos'; // cpg1.5
$lang_common['confirm'] = 'Confirmação'; // cpg1.5
$lang_common['captcha_help_titleCaption'] = 'Confirmação Visual (captcha)'; // cpg1.5
$lang_common['captcha_help'] = 'Para evitar o spam, tem de confirmar que é um ser humano e não um script mal intencionado introduzindo o texto apresentado.<br />Não interessando a capitulação, poderá escrever tudo em minúsculas.'; // cpg1.5
$lang_common['title'] = 'Título'; // cpg1.5
$lang_common['caption'] = 'Título secundário'; // cpg1.5
$lang_common['keywords'] = 'Palavras-chave'; // cpg1.5
$lang_common['keywords_insert1'] = 'Palavras-chave (separadas com %s)'; // cpg1.5
$lang_common['keywords_insert2'] = 'Inserir da lista'; // cpg1.5
$lang_common['keyword_separator'] = 'Separador de palavras-chave'; //cpg1.5
$lang_common['keyword_separators'] = array(' '=>'Espaço', ','=>'virgula', ';'=>'ponto e virgula'); // cpg1.5
$lang_common['filename'] = 'Imagem'; // cpg1.5

$lang_common['filesize'] = 'Tamanho'; // cpg1.5
$lang_common['album'] = 'Álbum'; // cpg1.5
$lang_common['file'] = 'Imagem'; // cpg1.5
$lang_common['date'] = 'Data'; // cpg1.5
$lang_common['help'] = 'Ajuda'; // cpg1.5
$lang_common['close'] = 'Fechar'; // cpg1.5
$lang_common['go'] = 'ir'; // cpg1.5
$lang_common['javascript_needed'] = 'Esta página requer JavaScript. Active o JavaScript no seu navegador.'; // cpg1.5
$lang_common['move_up'] = 'para cima'; // cpg1.5
$lang_common['move_down'] = 'para baixo'; // cpg1.5
$lang_common['move_top'] = 'topo'; // cpg1.5
$lang_common['move_bottom'] = 'rodapé'; // cpg1.5
$lang_common['delete'] = 'Excluir'; // cpg1.5
$lang_common['edit'] = 'Editar'; // cpg1.5
$lang_common['username_if_blank'] = 'Desconhecido'; // cpg1.5
$lang_common['albums_no_category'] = 'Álbuns sem categoria'; // cpg1.5
$lang_common['personal_albums'] = '* Álbum Pessoal * '; // cpg1.5
$lang_common['select_album'] = 'Seleccionar Álbum'; // cpg1.5
$lang_common['ok'] = 'Enviar'; // cpg1.5
$lang_common['status'] = 'Estado'; // cpg1.5
$lang_common['apply_changes'] = 'Aplicar Alterações'; // cpg1.5
$lang_common['done'] = 'Feito'; // cpg1.5
$lang_common['album_properties'] = 'Propriedades do Álbum'; // cpg1.5
$lang_common['parent_category'] = 'Categoria Principal'; // cpg1.5
$lang_common['edit_files'] = 'Editar Imagens'; // cpg1.5
$lang_common['thumbnail_view'] = 'Ver miniatura'; // cpg1.5
$lang_common['album_manager'] = 'Gerir Álbum'; // cpg1.5
$lang_common['more'] = 'mais'; // cpg1.5

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu['home_title'] = 'Página inicial';
$lang_main_menu['home_lnk'] = 'Inicio';
$lang_main_menu['alb_list_title'] = 'Lista de Álbuns';
$lang_main_menu['alb_list_lnk'] = 'Lista de Álbuns';
$lang_main_menu['my_gal_title'] = 'Ir Galeria Pessoal';
$lang_main_menu['my_gal_lnk'] = 'Galeria';
$lang_main_menu['my_prof_title'] = 'Ir Perfil Pessoal';
$lang_main_menu['my_prof_lnk'] = 'Meu Perfil';
$lang_main_menu['adm_mode_title'] = 'Habilitar Exibição de Controles de Administrador'; // cpg1.5
$lang_main_menu['adm_mode_lnk'] = 'Exibir Controles de Administrador'; // cpg1.5
$lang_main_menu['usr_mode_title'] = 'Desabilitar Exibição de Controles de Administrador'; // cpg1.5
$lang_main_menu['usr_mode_lnk'] = 'Ocultar Controles de Administrador'; // cpg1.5
$lang_main_menu['upload_pic_title'] = 'Enviar Ficheiro para o Álbum';
$lang_main_menu['upload_pic_lnk'] = 'Enviar Ficheiro';
$lang_main_menu['register_title'] = 'Criar uma conta';
$lang_main_menu['register_lnk'] = 'Registar';
$lang_main_menu['login_title'] = 'Entrando';
$lang_main_menu['login_lnk'] = 'Entrar';
$lang_main_menu['logout_title'] = 'Saindo';
$lang_main_menu['logout_lnk'] = 'Sair';
$lang_main_menu['lastup_title'] = 'Envios Recentes';
$lang_main_menu['lastup_lnk'] = 'Últimos Envios';
$lang_main_menu['lastcom_title'] = 'Comentários Recentes';
$lang_main_menu['lastcom_lnk'] = 'Últimos Comentários';
$lang_main_menu['topn_title'] = 'Itens mais Vistos';
$lang_main_menu['topn_lnk'] = 'Mais Vistos';
$lang_main_menu['toprated_title'] = 'Itens melhor Qualificados';
$lang_main_menu['toprated_lnk'] = 'Mais Qualificados';
$lang_main_menu['search_title'] = 'Pesquisar na Galeria';
$lang_main_menu['search_lnk'] = 'Pesquisar';
$lang_main_menu['fav_title'] = 'Ir para os Meus Favoritos';
$lang_main_menu['fav_lnk'] = 'Meus Favoritos';
$lang_main_menu['memberlist_title'] = 'Exibir Lista de Utilizadores';
$lang_main_menu['memberlist_lnk'] = 'Utilizadores';
$lang_main_menu['browse_by_date_lnk'] = 'Por data'; // cpg1.5
$lang_main_menu['browse_by_date_title'] = 'Pesquisa por data de envio'; // cpg1.5
$lang_main_menu['contact_title'] = 'Entrar em contacto com %s'; // cpg1.5
$lang_main_menu['contact_lnk'] = 'Contacto'; // cpg1.5
$lang_main_menu['sidebar_title'] = 'Adicionar uma barra lateral ao seu navegador'; // cpg1.5
$lang_main_menu['sidebar_lnk'] = 'Barra Lateral'; // cpg1.5

$lang_gallery_admin_menu['upl_app_title'] = 'Aprovar novos envios';
$lang_gallery_admin_menu['upl_app_lnk'] = 'Envio aprovado';
$lang_gallery_admin_menu['admin_title'] = 'Ir para Configuração';
$lang_gallery_admin_menu['admin_lnk'] = 'Configurar';
$lang_gallery_admin_menu['albums_title'] = 'Ir para configuração de álbum';
$lang_gallery_admin_menu['albums_lnk'] = 'Álbuns';
$lang_gallery_admin_menu['categories_title'] = 'Ir para configuração de categoria';
$lang_gallery_admin_menu['categories_lnk'] = 'Categorias';
$lang_gallery_admin_menu['users_title'] = 'Ir para configuração de utilizadores';
$lang_gallery_admin_menu['users_lnk'] = 'Utilizadores';
$lang_gallery_admin_menu['groups_title'] = 'Ir para configuração de Grupos';
$lang_gallery_admin_menu['groups_lnk'] = 'Grupos';
$lang_gallery_admin_menu['comments_title'] = 'Rever todos os comentários';
$lang_gallery_admin_menu['comments_lnk'] = 'Rever Comentários';
$lang_gallery_admin_menu['searchnew_title'] = 'Ir para processo de envio em lote';
$lang_gallery_admin_menu['searchnew_lnk'] = 'Adicionar Imagens em Lote';
$lang_gallery_admin_menu['util_title'] = 'Ir para ferramentas de administrador';
$lang_gallery_admin_menu['util_lnk'] = 'Ferramentas de Administrador';
$lang_gallery_admin_menu['key_lnk'] = 'Dicionário de Senhas';
$lang_gallery_admin_menu['ban_title'] = 'Ir para expulsar utilizadores';
$lang_gallery_admin_menu['ban_lnk'] = 'Expulsar Utilizadores';
$lang_gallery_admin_menu['db_ecard_title'] = 'Rever Postais';
$lang_gallery_admin_menu['db_ecard_lnk'] = 'Exibir Postais';
$lang_gallery_admin_menu['pictures_title'] = 'Organizar as minhas imagens';
$lang_gallery_admin_menu['pictures_lnk'] = 'Organizar Imagens';
$lang_gallery_admin_menu['documentation_lnk'] = 'Documentação';
$lang_gallery_admin_menu['documentation_title'] = 'Manual do Coppermine';
$lang_gallery_admin_menu['phpinfo_lnk'] = 'phpinfo'; // cpg1.5
$lang_gallery_admin_menu['phpinfo_title'] = 'Contém informações técnicas sobre o servidor. Pode ser solicitado a fornecer informações quando solicitar este suporte.'; // cpg1.5
$lang_gallery_admin_menu['update_database_lnk'] = 'Actualizar a Base de Dados'; // cpg1.5
$lang_gallery_admin_menu['update_database_title'] = 'Se substituiu ficheiros do Coppermine, alterou ou actualizou de uma versão anterior do Coppermine, execute, uma vez, o actualizador da base de dados. Assim, serão criadas as tabelas necessárias e/ou valores de configuração na base de dados do Coppermine.'; // cpg1.5
$lang_gallery_admin_menu['view_log_files_lnk'] = 'Ver Ficheiros log'; // cpg1.5
$lang_gallery_admin_menu['view_log_files_title'] = 'O Coppermine pode monitorizar as várias acções realizadas pelos utilizadores. Pode pesquisar esses logs se activou o logging nas configurações.'; // cpg1.5
$lang_gallery_admin_menu['check_versions_lnk'] = 'Verificar Versões'; // cpg1.5
$lang_gallery_admin_menu['check_versions_title'] = 'Verifique as versões dos ficheiros garantindo que substituiu todos os ficheiros após um a actualização, ou se o código fonte do Coppermine foi actualizado após a disponibilização de um pacote.'; // cpg1.5
$lang_gallery_admin_menu['bridgemgr_lnk'] = 'Gerir Integração (bridging)'; // cpg1.5
$lang_gallery_admin_menu['bridgemgr_title'] = 'Activar/desactivar a integração (bridging) do Coppermine com outra aplicação (ex. Fórum).'; // cpg1.5
$lang_gallery_admin_menu['pluginmgr_lnk'] = 'Gerir Plugins'; // cpg1.5
$lang_gallery_admin_menu['pluginmgr_title'] = 'Gerir Plugins'; // cpg1.5
$lang_gallery_admin_menu['overall_stats_lnk'] = 'Estatísticas Gerais'; // cpg1.5
$lang_gallery_admin_menu['overall_stats_title'] = 'Ver estatísticas gerais de acesso por navegador e por sistema operativo (se as opções correspondentes estiverem activadas na configuração).'; // cpg1.5
$lang_gallery_admin_menu['keywordmgr_lnk'] = 'Gerir Palavras-chave'; // cpg1.5
$lang_gallery_admin_menu['keywordmgr_title'] = 'Gerir Palavras-chave (Se a opção correspondente for activada na configuração).'; // cpg1.5
$lang_gallery_admin_menu['exifmgr_lnk'] = 'Gerir os dados EXIF'; // cpg1.5
$lang_gallery_admin_menu['exifmgr_title'] = 'Gerir os dados EXIF (se a opção correspondente estiver activada nas configurações).'; // cpg1.5
$lang_gallery_admin_menu['shownews_lnk'] = 'Exibir Novidades'; // cpg1.5
$lang_gallery_admin_menu['shownews_title'] = 'Mostrar notícias de coppermine-gallery.net'; // cpg1.5

$lang_user_admin_menu['albmgr_title'] = 'Criar e organizar os meus álbuns';
$lang_user_admin_menu['albmgr_lnk'] = 'Criar/Organizar os meus álbuns';
$lang_user_admin_menu['modifyalb_title'] = 'Modificar os meus álbuns';
$lang_user_admin_menu['modifyalb_lnk'] = 'Modificar os meus álbuns';
$lang_user_admin_menu['my_prof_title'] = 'O meu perfil pessoal';
$lang_user_admin_menu['my_prof_lnk'] = 'O meu Perfil';

$lang_cat_list['category'] = 'Categoria';
$lang_cat_list['albums'] = 'Álbuns';
$lang_cat_list['pictures'] = 'Imagens';

$lang_album_list['album_on_page'] = '%d álbuns em %d página(s)';

$lang_thumb_view['date'] = 'Data';
//Sort by filename and title
$lang_thumb_view['name'] = 'Nº Imagem';
$lang_thumb_view['sort_da'] = 'Ordenar por data crescente';
$lang_thumb_view['sort_dd'] = 'Ordenar por data decrescente';
$lang_thumb_view['sort_na'] = 'Ordenar por nome crescente';
$lang_thumb_view['sort_nd'] = 'Ordenar por nome decrescente';
$lang_thumb_view['sort_ta'] = 'Ordenar por titulo crescente';
$lang_thumb_view['sort_td'] = 'Ordenar por titulo decrescente';
$lang_thumb_view['position'] = 'Posição';
$lang_thumb_view['sort_pa'] = 'Ordenar por posição crescente';
$lang_thumb_view['sort_pd'] = 'Ordenar por posição decrescente';
$lang_thumb_view['download_zip'] = 'Download de ficheiro compactado (ZIP)';
$lang_thumb_view['pic_on_page'] = '%d imagens em %d página(s)';
$lang_thumb_view['user_on_page'] = '%d utilizadores em %d página(s)';
$lang_thumb_view['enter_alb_pass'] = 'Digite a senha do álbum';
$lang_thumb_view['invalid_pass'] = 'Senha inválida';
$lang_thumb_view['pass'] = 'Senha';
$lang_thumb_view['submit'] = 'Enviar';
$lang_thumb_view['zipdownload_copyright'] = 'Por favor, respeite os direitos de autor.'; // cpg1.5
$lang_thumb_view['zipdownload_username'] = 'Este ficheiro contém os ficheiros compactados (ZIP) dos favoritos de %s'; // cpg1.5

$lang_img_nav_bar['thumb_title'] = 'Voltar à página de miniaturas';
$lang_img_nav_bar['pic_info_title'] = 'Mostrar/Esconder informações da imagem';
$lang_img_nav_bar['slideshow_title'] = 'Slideshow';
$lang_img_nav_bar['ecard_title'] = 'Enviar esta imagem como postal';
$lang_img_nav_bar['ecard_disabled'] = 'postais desabilitados';
$lang_img_nav_bar['ecard_disabled_msg'] = 'Não tem privilégios para enviar postais'; // js-alert
$lang_img_nav_bar['prev_title'] = 'Ver imagem anterior';
$lang_img_nav_bar['next_title'] = 'Ver próxima imagem';
$lang_img_nav_bar['pic_pos'] = 'Imagem %s/%s';
$lang_img_nav_bar['report_title'] = 'Reportar este ficheiro ao administrador';
$lang_img_nav_bar['go_album_end'] = 'Ir para o fim';
$lang_img_nav_bar['go_album_start'] = 'Ir para o inicio';

$lang_rate_pic['rate_this_pic'] = 'Classifique esta imagem ';
$lang_rate_pic['no_votes'] = '(Sem votos)';
$lang_rate_pic['rating'] = '(Avaliação actual : %s / %s dos %s votos)';
$lang_rate_pic['rubbish'] = 'Mau';
$lang_rate_pic['poor'] = 'Razoável';
$lang_rate_pic['fair'] = 'Médio';
$lang_rate_pic['good'] = 'Bom';
$lang_rate_pic['excellent'] = 'Óptimo';
$lang_rate_pic['great'] = 'Excelente';
$lang_rate_pic['js_warning'] = 'O JavaScript deve estar habilitado para votar'; // cpg1.5
$lang_rate_pic['already_voted'] = 'Já votou nesta imagem.'; // cpg1.5
$lang_rate_pic['forbidden'] = 'Não pode avaliar os seus próprios ficheiros.'; // cpg1.5
$lang_rate_pic['rollover_to_rate'] = 'Classifique esta imagem'; // cpg1.5

// ------------------------------------------------------------------------- //
// File include/functions.inc.php
// ------------------------------------------------------------------------- //

$lang_cpg_die['file'] = 'Imagem: ';
$lang_cpg_die['line'] = 'Linha: ';

$lang_display_thumbnails['dimensions'] = 'Dimensão=';
$lang_display_thumbnails['date_added'] = 'Data Envio=';

$lang_get_pic_data['n_comments'] = '%s comentário(s)';
$lang_get_pic_data['n_views'] = '%s visualizações';
$lang_get_pic_data['n_votes'] = '(%s votos)';

$lang_cpg_debug_output['debug_info'] = 'Dados de depuração';
$lang_cpg_debug_output['debug_output'] = 'Saída de depuração'; // cpg1.5
$lang_cpg_debug_output['select_all'] = 'Seleccionar todos';
$lang_cpg_debug_output['copy_and_paste_instructions'] = 'Se solicitar ajuda no fórum do Coppermine, copie e cole esta saída de depuração no seu post, junto com a mensagem de erro (se existir). Coloque apenas a saída de depuração, no fórum, se tal for solicitado por um administrador! Substitua quaisquer passwords com *** antes de postar.'; // cpg1.5
$lang_cpg_debug_output['debug_output_explain'] = 'Note: Isto é meramente informativo e não significa que haja um erro na galeria.'; // cpg1.5
$lang_cpg_debug_output['phpinfo'] = 'mostrar phpinfo';
$lang_cpg_debug_output['notices'] = 'Notícias';
$lang_cpg_debug_output['notices_help_admin'] = 'As notas que aparecem nesta página aparecem porque o administrador da galeria activou, deliberadamente essa função na configuração do Coppermine. Não significa, necessariamente, que haja um erro com a galeria. De facto, trata-se de uma característica de desenvolvimento que apenas programadores  qualificados devem activar para detectar bugs de programação. Se esta informação o incomoda, desactive-a na codificação.'; // cpg1.5
$lang_cpg_debug_output['notices_help_non_admin'] = 'As notas que aparecem nesta página foram, deliberadamente, activadas pelo administrador. Tal não significa que haja qualquer erro com a galeria. Pode ignorar as notas aqui apresentadas.'; // cpg1.5
$lang_cpg_debug_output['show_hide'] = 'mostrar/ocultar'; // cpg1.5

$lang_language_selection['reset_language'] = 'Idioma Padrão';
$lang_language_selection['choose_language'] = 'Escolha o idioma';

$lang_theme_selection['reset_theme'] = 'Tema Padrão';
$lang_theme_selection['choose_theme'] = 'Escolha o tema';

$lang_version_alert['version_alert'] = 'Versão não suportada!';
$lang_version_alert['no_stable_version'] = 'Está a executar o Coppermine %s (%s) o qual se destina apenas a utilizadores muito experientes - esta versão não garante suporte técnico. Use-a por sua conta e risco ou instale a última versão estável se pretender suporte!';
$lang_version_alert['gallery_offline'] = 'A galeria encontra-se actualmente em modo \'offline\' e apenas será visível ao administrador. Não se esqueça de, após a manutenção terminada, voltar a repor a galeria no modo \'online\'.';
$lang_version_alert['coppermine_news'] = 'Notícias de coppermine-gallery.net'; // cpg1.5
$lang_version_alert['no_iframe'] = 'O seu navegador não consegue apresentar frames'; // cpg1.5

$lang_version_alert['hide'] = 'Ocultar'; // cpg1.5

$lang_create_tabs['previous'] = 'Anterior'; // cpg1.5
$lang_create_tabs['next'] = 'Próximo'; // cpg1.5
$lang_create_tabs['jump_to_page'] = 'ir para a página'; // cpg1.5

$lang_get_remote_file_by_url['no_data_returned'] = 'Não há dados retornados usando %s'; // cpg1.5
$lang_get_remote_file_by_url['curl'] = 'CURL'; // cpg1.5
$lang_get_remote_file_by_url['fsockopen'] = 'Socket (FSOCKOPEN)'; // cpg1.5
$lang_get_remote_file_by_url['fopen'] = 'fopen'; // cpg1.5
$lang_get_remote_file_by_url['curl_not_available'] = 'O Curl não está disponível no servidor'; // cpg1.5
$lang_get_remote_file_by_url['error_number'] = 'Erro número: %s'; // cpg1.5
$lang_get_remote_file_by_url['error_message'] = 'Mensagem do Erro: %s'; // cpg1.5

// ------------------------------------------------------------------------- //
// File include/mailer.inc.php
// ------------------------------------------------------------------------- //
$lang_mailer['provide_address'] = 'Tem que fornecer pelo menos um ';
$lang_mailer['mailer_not_supported'] = ' o programa de correio não é suportado.';
$lang_mailer['execute'] = 'Não foi possível executar: ';
$lang_mailer['instantiate'] = 'Não foi possível instanciar a função mail.';
$lang_mailer['authenticate'] = 'Erro de SMTP: Não foi possível autenticar.';
$lang_mailer['from_failed'] = 'Falhou o seguinte campo De: ';
$lang_mailer['recipients_failed'] = 'Erro de SMTP: Os seguintes ';
$lang_mailer['data_not_accepted'] = 'Erro de SMTP:  Dados não aceites.';
$lang_mailer['connect_host'] = 'Erro de SMTP Error: Não foi possível ligar ao servidor SMTP.';
$lang_mailer['file_access'] = 'Não foi possível aceder ao ficheiro: ';
$lang_mailer['file_open'] = 'Erro de Ficheiro: Não foi possível abrir ficheiro: ';
$lang_mailer['encoding'] = 'Codificação desconhecida: ';
$lang_mailer['signing'] = 'Erro de Assinatura: ';

// ------------------------------------------------------------------------- //
// File include/plugin_api.inc.php
// ------------------------------------------------------------------------- //
$lang_plugin_api['error_install'] = 'Não foi possível instalar o plugin \'%s\'';
$lang_plugin_api['error_uninstall'] = 'Não foi possível desinstalar o plugin \'%s\'';
$lang_plugin_api['error_sleep'] = 'Não foi possível desligar o plugin \'%s\''; // cpg1.5

// ------------------------------------------------------------------------- //
// File include/smilies.inc.php
// ------------------------------------------------------------------------- //
if (defined('SMILIES_PHP')) {
$lang_smilies_inc_php['Exclamation'] = 'Exclamação';
$lang_smilies_inc_php['Question'] = 'Questão';
$lang_smilies_inc_php['Very Happy'] = 'Muito Feliz';
$lang_smilies_inc_php['Smile'] = 'Sorriso';
$lang_smilies_inc_php['Sad'] = 'Triste';
$lang_smilies_inc_php['Surprised'] = 'Surpreso';
$lang_smilies_inc_php['Shocked'] = 'Chocado';
$lang_smilies_inc_php['Confused'] = 'Confuso';
$lang_smilies_inc_php['Cool'] = 'Calmo';
$lang_smilies_inc_php['Laughing'] = 'Riso';
$lang_smilies_inc_php['Mad'] = 'Mau';
$lang_smilies_inc_php['Razz'] = 'Razz';
$lang_smilies_inc_php['Embarrassed'] = 'Envergonhado'; // cpg1.5
$lang_smilies_inc_php['Crying or Very sad'] = 'Chorando ou muito triste';
$lang_smilies_inc_php['Evil or Very Mad'] = 'Demónio ou muito mau';
$lang_smilies_inc_php['Twisted Evil'] = 'Demónio dançando';
$lang_smilies_inc_php['Rolling Eyes'] = 'Olhos virando';
$lang_smilies_inc_php['Wink'] = 'Piscando';
$lang_smilies_inc_php['Idea'] = 'Ideia';
$lang_smilies_inc_php['Arrow'] = 'Flecha';
$lang_smilies_inc_php['Neutral'] = 'Neutro';
$lang_smilies_inc_php['Mr. Green'] = 'Sr. Verde';
};

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //
if (defined('ALBMGR_PHP')) {
$lang_albmgr_php['title'] = 'Gerir Álbum'; // cpg1.5
$lang_albmgr_php['alb_need_name'] = 'O álbum necessita de um nome!'; // js-alert
$lang_albmgr_php['confirm_modifs'] = 'Tem certeza que quer fazer essas modificações?'; // js-alert
$lang_albmgr_php['no_change'] = 'Não alterou nada!'; // js-alert
$lang_albmgr_php['new_album'] = 'Novo álbum';
$lang_albmgr_php['delete_album'] = 'Apagar álbum'; // cpg1.5
$lang_albmgr_php['confirm_delete1'] = 'Tem a certeza que quer excluir este álbum?'; // js-alert
$lang_albmgr_php['confirm_delete2'] = 'Todas as imagens e comentários serão perdidos!'; // js-alert
$lang_albmgr_php['select_first'] = 'Seleccione um álbum primeiro'; // js-alert
$lang_albmgr_php['my_gallery'] = '* A Minha Galeria *';
$lang_albmgr_php['no_category'] = '* Sem categoria *';
$lang_albmgr_php['select_category'] = 'Seleccionar uma categoria';
$lang_albmgr_php['category_change'] = 'Se alterar a categoria, todas as alterações serão perdidas!'; // cpg1.5
$lang_albmgr_php['page_change'] = 'Se seguir este link, as suas alterações serão perdidas!'; // cpg1.5
$lang_albmgr_php['cancel'] = 'Cancelar'; // cpg1.5
$lang_albmgr_php['submit_reminder'] = 'As alterações não serão gravadas até que clique em \'Aplicar Alterações\'.'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) {
$lang_banning_php['title'] = 'Expulsar Utilizadores';
$lang_banning_php['user_name'] = 'Nome Utilizadores';
$lang_banning_php['user_account'] = 'Conta de Utilizadores';
$lang_banning_php['email_address'] = 'Email'; // cpg1.5
$lang_banning_php['ip_address'] = 'Endereço IP';
$lang_banning_php['expires'] = 'Expira em'; // cpg1.5
$lang_banning_php['expiry_date'] = 'Validade'; // cpg1.5
$lang_banning_php['expired'] = 'Expirado'; // cpg1.5
$lang_banning_php['edit_ban'] = 'Guardar alterações';
$lang_banning_php['add_new'] = 'Adicionar novo utilizador expulso';
$lang_banning_php['add_ban'] = 'Adicionar';
$lang_banning_php['error_user'] = 'Não é possível encontrar o utilizador';
$lang_banning_php['error_specify'] = 'É necessário especificar um nome de utilizador ou um endereço IP';
$lang_banning_php['error_ban_id'] = 'ID de expulsão inválido!';
$lang_banning_php['error_admin_ban'] = 'Não se pode auto-expulsar!';
$lang_banning_php['error_server_ban'] = 'Estava a tentar proibir o seu próprio servidor? Tal não é possível ...';
$lang_banning_php['skipping'] = 'Ignorar este comando'; // cpg1.5
$lang_banning_php['lookup_ip'] = 'Pesquisa de endereço IP';
$lang_banning_php['select_date'] = 'Seleccionar Data';
$lang_banning_php['delete_comments'] = 'Apagar comentários'; // cpg1.5
$lang_banning_php['current'] = 'Actual'; // cpg1.5
$lang_banning_php['all'] = 'Todos'; // cpg1.5
$lang_banning_php['none'] = 'Nenhum'; // cpg1.5
$lang_banning_php['view'] = 'Vistos'; // cpg1.5
$lang_banning_php['ban_id'] = 'identificado de expulsões'; // cpg1.5
$lang_banning_php['existing_bans'] = 'Expulsões Existentes'; // cpg1.5
$lang_banning_php['no_banning_when_bridged'] = 'Está a usar a galeria integrada em outra aplicação. Use o mecanismo de expulsão dessa aplicação em vez do mecanismo do Coppermine. O mecanismo de expulsão do Coppermine não funciona devidamente quando em integração com outra aplicação.'; // cpg1.5
$lang_banning_php['records_on_page'] = '%d registos em %d página(s)'; // cpg1.5
$lang_banning_php['ascending'] = 'crescente'; // cpg1.5
$lang_banning_php['descending'] = 'decrescente'; // cpg1.5
$lang_banning_php['sort_by'] = 'Ordenar por'; // cpg1.5
$lang_banning_php['sorted_by'] = 'ordenar por'; // cpg1.5
$lang_banning_php['ban_record_x_updated'] = 'O registo de expulsão %s foi alterado'; // cpg1.5
$lang_banning_php['ban_record_x_deleted'] = 'O registo de expulsão %s foi apagado'; // cpg1.5
$lang_banning_php['new_ban_record_created'] = 'Novo registo de expulsão foi criado'; // cpg1.5
$lang_banning_php['ban_record_x_already_exists'] = 'Registo de expulsão para %s já existe!'; // cpg1.5
$lang_banning_php['comment_deleted'] = '%s comentário feito por %s foi apagado'; // cpg1.5
$lang_banning_php['comments_deleted'] = '%s comentários feito por %s foram apagados'; // cpg1.5
$lang_banning_php['email_field_invalid'] = 'Digite um e-mail válido'; // cpg1.5
$lang_banning_php['ip_address_field_invalid'] = 'Digite um IP válido (x.x.x.x)'; // cpg1.5
$lang_banning_php['expiry_field_invalid'] = 'Digite uma data válida para expiração (DD-MM-YYYY)'; // cpg1.5
$lang_banning_php['form_not_submit'] = 'O formulário não foi submetido - existem erros que precisam de ser corrigidos primeiro!'; // cpg1.5
};

// ------------------------------------------------------------------------- //
// File bridgemgr.php
// ------------------------------------------------------------------------- //
if (defined('BRIDGEMGR_PHP')) {
$lang_bridgemgr_php['title'] = 'Assistente de Integração (Bridge)';
$lang_bridgemgr_php['back'] = 'voltar';
$lang_bridgemgr_php['next'] = 'seguinte';
$lang_bridgemgr_php['start_wizard'] = 'Iniciar o assistente Integração (Bridge)';
$lang_bridgemgr_php['finish'] = 'Fim';
$lang_bridgemgr_php['no_action_needed'] = 'Não é necessária qualquer acção neste passo. Apenas clique em \'seguinte\' para continuar.';
$lang_bridgemgr_php['reset_to_default'] = 'Restaurar os valores pré-definidos';
$lang_bridgemgr_php['choose_bbs_app'] = 'escolha a aplicação a integrar com o Coppermine';
$lang_bridgemgr_php['support_url'] = 'Ir aqui para aceder ao suporte deste aplicação';
$lang_bridgemgr_php['settings_path'] = 'caminho(s) utilizado pela aplicação a integrar';
$lang_bridgemgr_php['full_forum_url'] = 'URL da aplicação a integrar';
$lang_bridgemgr_php['relative_path_of_forum_from_webroot'] = 'Caminho absoluto da aplicação a integrar';
$lang_bridgemgr_php['relative_path_to_config_file'] = 'Caminho relativo para o ficheiro de configuração da aplicação a integrar';
$lang_bridgemgr_php['cookie_prefix'] = 'Prefixo do Cookie';
$lang_bridgemgr_php['special_settings'] = 'configurações específicas da aplicação a integrar';
$lang_bridgemgr_php['use_post_based_groups'] = 'Usar os grupos personalizados na aplicação a integrar?';
$lang_bridgemgr_php['use_post_based_groups_yes'] = 'sim';
$lang_bridgemgr_php['use_post_based_groups_no'] = 'não';
$lang_bridgemgr_php['error_title'] = 'Tem de corrigir estes erros antes de poder continuar. Volte à página anterior.';
$lang_bridgemgr_php['error_specify_bbs'] = 'Tem de especificar qual a aplicação a integrar com o Coppermine.';
$lang_bridgemgr_php['finalize'] = 'activar/desactivar a integração (bridging)';
$lang_bridgemgr_php['finalize_explanation'] = 'Até agora, os parâmetros que especificou foram gravados na base de dados, mas a integração de aplicação não foi activada. Poderá, em qualquer altura, activar/desactivar a integração. Não se esqueça do nome de utilizador e da senha do administrador da instalação do Coppermine, pois pode necessitar dela mais tarde para proceder a alterações. Se algo correr mal, vá a %s e desactive aí a integração, usando a sua conta de administrador do Coppermine antes da integração (aquela que foi originalmente criada aquando da instalação do Coppermine).';
$lang_bridgemgr_php['your_bridge_settings'] = 'As configurações de integração (bridge)';
$lang_bridgemgr_php['title_enable'] = 'Activar integração/bridge com %s';
$lang_bridgemgr_php['bridge_enable_yes'] = 'activar';
$lang_bridgemgr_php['bridge_enable_no'] = 'desactivar';
$lang_bridgemgr_php['error_must_not_be_empty'] = 'não pode estar em branco';
$lang_bridgemgr_php['error_either_be'] = 'tem de ser %s ou %s';
$lang_bridgemgr_php['error_folder_not_exist'] = '%s não existe. Corrija o valor que introduziu para %s';
$lang_bridgemgr_php['error_cookie_not_readible'] = 'O Coppermine não consegue ler um cookie denominado %s. Corrija o valor que introduziu para %s, ou aceda ao painel de configuração da aplicação integrada e verifique que o caminho do cookie pode ser lido pelo Coppermine.';
$lang_bridgemgr_php['error_mandatory_field_empty'] = 'Não pode deixar o campo %s em branco - preencha com um valor apropriado.';
$lang_bridgemgr_php['error_no_trailing_slash'] = 'Não pode existir uma barra \'\\\' no campo %s.';
$lang_bridgemgr_php['error_trailing_slash'] = 'Tem que existir uma barra \'\\\' no campo %s.';
$lang_bridgemgr_php['error_prefix_and_table'] = '%s e ';
$lang_bridgemgr_php['recovery_title'] = 'Gestor de Integração (Brigde): recuperação de emergência';
$lang_bridgemgr_php['recovery_explanation'] = 'Se pretende gerir a integração da galeria, tem que aceder como administrador. Se não se consegue ligar como administrador porque a integração não está a funcionar como esperado, pode desactivar a integração nesta página. Introduzindo o seu nome de utilizador e senha não o autenticará, apenas desactivará a integração. Consulte a documentação para mais pormenores.';
$lang_bridgemgr_php['username'] = 'Nome de utilizador';
$lang_bridgemgr_php['password'] = 'Senha';
$lang_bridgemgr_php['disable_submit'] = 'submeter';
$lang_bridgemgr_php['recovery_success_title'] = 'Autorização bem sucedida';
$lang_bridgemgr_php['recovery_success_content'] = 'Desactivou, com sucesso, a integração. A sua instalação de Coppermine funciona agora em modo isolado (sem integração).';
$lang_bridgemgr_php['recovery_success_advice_login'] = 'Ligue-se como administrador para editar as configurações de integração e/ou active novamente a integração.';
$lang_bridgemgr_php['goto_login'] = 'Ir à página de autenticação';
$lang_bridgemgr_php['goto_bridgemgr'] = 'Ir ao gestor de integração (bridge)';
$lang_bridgemgr_php['recovery_failure_title'] = 'Falhou a autorização';
$lang_bridgemgr_php['recovery_failure_content'] = 'Forneceu credenciais erradas. Tem de fornecer os dados de acesso do administrador da versão isolada do Coppermine (geralmente a conta de administrador criada aquando da instalação do Coppermine).';
$lang_bridgemgr_php['try_again'] = 'tente outra vez';
$lang_bridgemgr_php['recovery_wait_title'] = 'O tempo de espera ainda não passou';
$lang_bridgemgr_php['recovery_wait_content'] = 'Este script, por motivos de segurança, não permite uma sucessão de falhas de acesso, logo terá que esperar um pouco antes que possa voltar a autenticar-se.';
$lang_bridgemgr_php['wait'] = 'espere';
$lang_bridgemgr_php['browse'] = 'navegue';
}

// ------------------------------------------------------------------------- //
// File calendar.php
// ------------------------------------------------------------------------- //
if (defined('CALENDAR_PHP')) {
$lang_calendar_php['title'] = 'Calendário';
$lang_calendar_php['clear_date'] = 'limpar data';
$lang_calendar_php['files'] = 'imagens'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //
if (defined('CATMGR_PHP')) {
$lang_catmgr_php['miss_param'] = 'Parâmetros necessários para \'%s\' operação não suportada!';
$lang_catmgr_php['unknown_cat'] = 'A categoria seleccionada não existe';
$lang_catmgr_php['usergal_cat_ro'] = 'A categoria galeria de utilizadores não pode ser apagada!';
$lang_catmgr_php['manage_cat'] = 'Gerir categorias';
$lang_catmgr_php['confirm_delete'] = 'Tem a certeza que quer apagar esta categoria'; // js-alert
$lang_catmgr_php['category'] = 'Categorias'; // cpg1.5
$lang_catmgr_php['operations'] = 'Operações';
$lang_catmgr_php['move_into'] = 'Mover para';
$lang_catmgr_php['update_create'] = 'Alterar/Criar categoria';
$lang_catmgr_php['parent_cat'] = 'Categoria Principal';
$lang_catmgr_php['cat_title'] = 'Título da Categoria';
$lang_catmgr_php['cat_thumb'] = 'Categoria - Miniatura';
$lang_catmgr_php['cat_desc'] = 'Descrição da categoria';
$lang_catmgr_php['categories_alpha_sort'] = 'Ordenar a categoria por ordem alfabética (em vez da ordem de classificação personalizada)';
$lang_catmgr_php['save_cfg'] = 'Guardar configuração';
$lang_catmgr_php['no_category'] = '* Sem categoria *'; // cpg1.5
$lang_catmgr_php['group_create_alb'] = 'Grupo com privilégios para criar álbuns nesta categoria'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File contact.php
// ------------------------------------------------------------------------- //
if (defined('CONTACT_PHP')) {
$lang_contact_php['title'] = 'Contacto'; // cpg1.5
$lang_contact_php['your_name'] = 'Nome'; // cpg1.5
$lang_contact_php['your_email'] = 'E-mail'; // cpg1.5
$lang_contact_php['subject'] = 'Assunto'; // cpg1.5
$lang_contact_php['your_message'] = 'Mensagem'; // cpg1.5
$lang_contact_php['name_field_mandatory'] = 'Digite o seu nome'; // cpg1.5 // js-alert
$lang_contact_php['name_field_invalid'] = 'Digite o seu nome actual'; // cpg1.5 // js-alert
$lang_contact_php['email_field_mandatory'] = 'Digite o seu e-mail'; // cpg1.5 // js-alert
$lang_contact_php['email_field_invalid'] = 'Digite um e-mail válido'; // cpg1.5 // js-alert
$lang_contact_php['subject_field_mandatory'] = 'Digite o assunto'; // cpg1.5 // js-alert
$lang_contact_php['message_field_mandatory'] = 'Digite a mensagem'; // cpg1.5 // js-alert
$lang_contact_php['confirmation'] = 'Confirmação'; // cpg1.5
$lang_contact_php['email_headline'] = 'Este e-mail foi enviado em %s usando o formulário %s do endereço de IP %s'; // cpg1.5
$lang_contact_php['registered_user'] = 'Utilizador registado'; // cpg1.5
$lang_contact_php['guest'] = 'Visitante'; // cpg1.5
$lang_contact_php['unknown'] = 'Desconhecido'; // cpg1.5
$lang_contact_php['user_info'] = 'O %s utilizador %s com o e-mail %s diz:'; // cpg1.5
$lang_contact_php['failed_sending_email'] = 'Falha ao enviar o e-mail. Tente mais tarde'; // cpg1.5

$lang_contact_php['email_sent'] = 'O seu e-mail foi enviado.'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File admin.php
// ------------------------------------------------------------------------- //
if (defined('ADMIN_PHP')) {
$lang_admin_php['title'] = 'Configuração da Galeria';
$lang_admin_php['general_settings'] = 'Configurações gerais'; // cpg1.5
$lang_admin_php['language_charset_settings'] = 'Língua &amp; conjuntos de caracteres'; // cpg1.5
$lang_admin_php['themes_settings'] = 'Configurações de temas'; // cpg1.5
$lang_admin_php['album_list_view'] = 'Vista de lista de álbuns'; // cpg1.5
$lang_admin_php['thumbnail_view'] = 'Vista de miniaturas'; // cpg1.5
$lang_admin_php['image_view'] = 'Vista de Imagem'; // cpg1.5
$lang_admin_php['comment_settings'] = 'Configurações de comentários'; // cpg1.5
$lang_admin_php['thumbnail_settings'] = 'Configurações de miniaturas'; // cpg1.5
$lang_admin_php['file_settings'] = 'Configurações de ficheiros'; // cpg1.5
$lang_admin_php['image_watermarking'] = 'Marca-de-água'; // cpg1.5
$lang_admin_php['registration'] = 'Registo de utilizadores'; // cpg1.5
$lang_admin_php['user_settings'] = 'Configurações de utilizadores'; // cpg1.5
$lang_admin_php['custom_fields_user_profile'] = 'Campos personalizados no perfil do utilizador (deixar em branco se não usar). Use o \'Nome do perfil 6\' para entradas longas, como biografias ou comentários longos'; // cpg1.5
$lang_admin_php['custom_fields_image_description'] = 'Campos personalizados para descrição de imagem (deixar em branco se não usar)'; // cpg1.5
$lang_admin_php['cookie_settings'] = 'Configurações de cookies'; // cpg1.5
$lang_admin_php['email_settings'] = 'Configurações de email (geralmente não é necessário alterar nada; deixe todos os campos em branco se não souber o que colocar)'; // cpg1.5
$lang_admin_php['logging_stats'] = 'Registos e estatísticas'; // cpg1.5
$lang_admin_php['maintenance_settings'] = 'Configurações de manutenção'; // cpg1.5
$lang_admin_php['manage_exif'] = 'Gestão de dados EXIF';
$lang_admin_php['manage_plugins'] = 'Gestão de plugins';
$lang_admin_php['manage_keyword'] = 'Gestão de palavras-chave';
$lang_admin_php['restore_cfg'] = 'Restaurar valores de fábrica';
$lang_admin_php['restore_cfg_confirm'] = 'Pretende realmente restaurar toda a configuração para os valores de fábrica? Esta operação não poderá ser desfeita!'; // cpg1.5 // js-alert
$lang_admin_php['save_cfg'] = 'Guardar a nova configuração';
$lang_admin_php['notes'] = 'Notas';
$lang_admin_php['info'] = 'informação';
$lang_admin_php['upd_success'] = 'A configuração do Coppermine foi actualizada';
$lang_admin_php['restore_success'] = 'A configuração de fábrica do Coppermine foi restaurada';
$lang_admin_php['name_a'] = 'Nome ascendente';
$lang_admin_php['name_d'] = 'Nome descendente';
$lang_admin_php['title_a'] = 'Título ascendente';
$lang_admin_php['title_d'] = 'Título descendente';
$lang_admin_php['date_a'] = 'Data ascendente';
$lang_admin_php['date_d'] = 'Data descendente';
$lang_admin_php['pos_a'] = 'Posição ascendente';
$lang_admin_php['pos_d'] = 'Posição descendente';
$lang_admin_php['th_any'] = 'Maximo lado';
$lang_admin_php['th_ht'] = 'Altura';
$lang_admin_php['th_wd'] = 'Largura';
$lang_admin_php['th_ex'] = 'Exactamente'; // cpg1.5
$lang_admin_php['debug_everyone'] = 'Todos';
$lang_admin_php['debug_admin'] = 'Apenas o administrador';
$lang_admin_php['no_logs'] = 'desligado';
$lang_admin_php['log_normal'] = 'Normal';
$lang_admin_php['log_all'] = 'Todos';
$lang_admin_php['view_logs'] = 'Ver os logs';
$lang_admin_php['click_expand'] = 'Clique no nome da secção para expandir';
$lang_admin_php['click_collapse'] = 'Clique no nome da secção para contrair'; // cpg1.5
$lang_admin_php['expand_all'] = 'Expandir Todos';
$lang_admin_php['toggle_all'] = 'Alternar Todos'; // cpg1.5
$lang_admin_php['notice1'] = '(*) Estas definições não deverão ser alteradas se já tem ficheiros na base de dados.';
$lang_admin_php['notice2'] = '(**) Ao alterar esta definição, apenas os ficheiros adicionados após este ponto serão afectados, logo é recomendado que esta definição não seja alterada se já existem ficheiros na galeria. Pode, no entanto, aplicar as alterações aos ficheiros existentes com o utilitário &quot;<a href="util.php">ferramentas administrativas</a> (redimensionar imagens)&quot; do menu de administração.';
$lang_admin_php['notice3'] = '(***) Todos os ficheiros log são escritos em Inglês.';
$lang_admin_php['bbs_disabled'] = 'Função desactivada quando se usa integração (bridge)';
$lang_admin_php['auto_resize_everyone'] = 'Todos';
$lang_admin_php['auto_resize_user'] = 'Apenas o utilizador';
$lang_admin_php['ascending'] = 'ascendente';
$lang_admin_php['descending'] = 'descendente';
$lang_admin_php['collapse_all'] = 'Contrair todos'; // cpg1.5
$lang_admin_php['separate_page'] = 'numa página separada'; // cpg1.5
$lang_admin_php['inline'] = 'na mesma página'; // cpg1.5
$lang_admin_php['guests_only'] = 'Apenas visitantes'; // cpg1.5
$lang_admin_php['wm_bottomright'] = 'Direita em baixo'; // cpg1.5
$lang_admin_php['wm_bottomleft'] = 'Esquerda em baixo'; // cpg1.5
$lang_admin_php['wm_topleft'] = 'Esquerda em cima'; // cpg1.5
$lang_admin_php['wm_topright'] = 'Direita em cima'; // cpg1.5
$lang_admin_php['wm_center'] = 'Centro'; // cpg1.5
$lang_admin_php['wm_both'] = 'Ambos'; // cpg1.5
$lang_admin_php['wm_original'] = 'Original'; // cpg1.5
$lang_admin_php['wm_resized'] = 'Redimensionado'; // cpg1.5
$lang_admin_php['gallery_name'] = 'Nome da galeria'; // cpg1.5
$lang_admin_php['gallery_description'] = 'Descrição da galeria'; // cpg1.5
$lang_admin_php['gallery_admin_email'] = 'Email do administrador da galeria'; // cpg1.5
$lang_admin_php['ecards_more_pic_target'] = 'URL da directoria da galeria'; // cpg1.5
$lang_admin_php['ecards_more_pic_target_detail'] = '(com uma barra no final, não com \'index.php\' ou similar no fim)'; // cpg1.5
$lang_admin_php['home_target'] = 'URL da página inicial'; // cpg1.5
$lang_admin_php['enable_zipdownload'] = 'Permitir descarregar os favoritos num ficheiro compactado (ZIP)'; // cpg1.5
$lang_admin_php['enable_zipdownload_no_textfile'] = 'apenas os favoritos'; // cpg1.5
$lang_admin_php['enable_zipdownload_additional_textfile'] = 'favoritos e o ficheiro ler-me'; // cpg1.5
$lang_admin_php['time_offset'] = 'Diferença horária relativamente a GMT'; // cpg1.5
$lang_admin_php['time_offset_detail'] = '(hora actual: %s)'; // cpg1.5
$lang_admin_php['enable_help'] = 'Activar ícones de ajuda'; // cpg1.5
$lang_admin_php['enable_help_description'] = 'ajuda apenas parcialmente disponível em Inglês'; // cpg1.5
$lang_admin_php['clickable_keyword_search'] = 'Activar palavras-chave clicáveis na procura'; // cpg1.5
$lang_admin_php['keyword_separator'] = 'Separador de palavras-chave'; // cpg1.5
$lang_admin_php['keyword_convert'] = 'Converter o separador de palavras-chave'; // cpg1.5
$lang_admin_php['enable_plugins'] = 'Activar plugins'; // cpg1.5
$lang_admin_php['purge_expired_bans'] = 'Limpar automaticamente expulsões'; // cpg1.5
$lang_admin_php['browse_batch_add'] = 'Interface de navegação para adição em lote de imagens'; // cpg1.5
$lang_admin_php['batch_proc_limit'] = 'Processos concorrentes para interface de adição em lote de imagens'; // cpg1.5
$lang_admin_php['display_thumbs_batch_add'] = 'Mostrar miniaturas de pré-visualização na interface de adição em lote de imagens'; // cpg1.5
$lang_admin_php['lang'] = 'Língua pré-definida'; // cpg1.5
$lang_admin_php['language_autodetect'] = 'Auto-detectar língua'; // cpg1.5
$lang_admin_php['charset'] = 'Codificação de caracteres'; // cpg1.5
// 'previous_next_tab'] = 'Display previous/next on tabbed pages'; // cpg1.5
$lang_admin_php['theme'] = 'Tema'; // cpg1.5
$lang_admin_php['custom_lnk_name'] = 'Nome do link de menu personalizado'; // cpg1.5
$lang_admin_php['custom_lnk_url'] = 'URL do link de menu personalizado'; // cpg1.5
$lang_admin_php['enable_menu_icons'] = 'Activar ícones de menu'; // cpg1.5
$lang_admin_php['show_bbcode_help'] = 'Mostrar ajuda ao BBCode'; // cpg1.5
$lang_admin_php['vanity_block'] = 'Mostrar o bloco \'vaidoso\' em temas definidos como XHTML e CSS compliant'; // cpg1.5
$lang_admin_php['highlight_multiple'] = 'Para seleccionar várias linhas, pressione a tecla [Ctrl]'; // cpg1.5
$lang_admin_php['custom_header_path'] = 'Caminho para um ficheiro include personalizado de cabeçalho'; // cpg1.5
$lang_admin_php['custom_footer_path'] = 'Caminho para um ficheiro include personalizado de rodapé'; // cpg1.5
$lang_admin_php['browse_by_date'] = 'Permitir navegação por data'; // cpg1.5
$lang_admin_php['display_redirection_page'] = 'Mostrar páginas de redireccionamento'; // cpg1.5
$lang_admin_php['display_xp_publish_link'] = 'Promover o uso do Publisher XP mostrando um link correspondente na página de envio de ficheiros'; // cpg1.5
$lang_admin_php['main_table_width'] = 'Largura da tabela principal'; // cpg1.5
$lang_admin_php['pixels_or_percent'] = 'píxeis ou %'; // cpg1.5
$lang_admin_php['subcat_level'] = 'Número de níveis de categorias a mostrar'; // cpg1.5
$lang_admin_php['albums_per_page'] = 'Número de álbuns a mostrar'; // cpg1.5
$lang_admin_php['album_list_cols'] = 'Número de colunas para a lista de álbum'; // cpg1.5
$lang_admin_php['alb_list_thumb_size'] = 'Tamanho das miniaturas de álbum'; // cpg1.5
$lang_admin_php['main_page_layout'] = 'O conteúdo da página principal'; // cpg1.5
$lang_admin_php['first_level'] = 'Mostrar miniaturas dos álbuns de primeiro nível em categorias'; // cpg1.5
$lang_admin_php['categories_alpha_sort'] = 'Ordenar categorias alfabeticamente'; // cpg1.5
$lang_admin_php['categories_alpha_sort_details'] = '(em vez da ordenação personalizada)'; // cpg1.5
$lang_admin_php['link_pic_count'] = 'Mostrar número de ficheiros ligados'; // cpg1.5
$lang_admin_php['thumbcols'] = 'Número de colunas na página das miniaturas'; // cpg1.5
$lang_admin_php['thumbrows'] = 'Número de linhas na página das miniaturas'; // cpg1.5
$lang_admin_php['max_tabs'] = 'Máximo número de guias (tabs) a apresentar'; // cpg1.5
$lang_admin_php['tabs_dropdown'] = 'Mostrar a lista dropdown de todas as páginas junto às guias (tabs)'; // cpg1.5
$lang_admin_php['caption_in_thumbview'] = 'Mostrar a descrição do ficheiro (em adição ao título) debaixo da miniatura'; // cpg1.5
$lang_admin_php['views_in_thumbview'] = 'Mostrar número de visualizações debaixo da miniatura'; // cpg1.5
$lang_admin_php['display_comment_count'] = 'Mostrar número de comentários debaixo da miniatura'; // cpg1.5
$lang_admin_php['display_uploader'] = 'Mostrar o nome do uploader debaixo da miniatura'; // cpg1.5
// 'display_admin_uploader'] = 'Display name of admin uploaders below the thumbnail'; // cpg1.5
$lang_admin_php['display_filename'] = 'Mostrar o nome do ficheiro debaixo da miniatura'; // cpg1.5
$lang_admin_php['display_thumbnail_rating'] = 'Mostrar votação debaixo da miniatura'; // cpg1.5
$lang_admin_php['alb_desc_thumb'] = 'Mostrar descrição do álbum'; // cpg1.5
$lang_admin_php['thumbnail_to_fullsize'] = 'Ir directamente da miniatura ao tamanho real da imagem'; // cpg1.5
$lang_admin_php['default_sort_order'] = 'Ordenação pré-definida para os ficheiros'; // cpg1.5
$lang_admin_php['min_votes_for_rating'] = 'Número mínimo de votos para que um ficheiro apareça na lista do top'; // cpg1.5
$lang_admin_php['picture_table_width'] = 'Largura da tabela de visualização de ficheiro'; // cpg1.5
$lang_admin_php['display_pic_info'] = 'Os dados do ficheiro são visíveis por defeito'; // cpg1.5
$lang_admin_php['picinfo_movie_download_link'] = 'Mostrar o link de download do vídeo na área de informações do ficheiro'; // cpg1.5
$lang_admin_php['max_img_desc_length'] = 'Máxima largura para a descrição de uma imagem'; // cpg1.5
$lang_admin_php['max_com_wlength'] = 'Máximo número de caracteres numa palavra'; // cpg1.5
$lang_admin_php['display_film_strip'] = 'Mostrar a tira de filme'; // cpg1.5
$lang_admin_php['max_film_strip_items'] = 'Número de itens na tira de filme'; // cpg1.5
$lang_admin_php['slideshow_interval'] = 'Intervalo do Slideshow'; // cpg1.5
$lang_admin_php['milliseconds'] = 'milissegundos'; // cpg1.5
$lang_admin_php['slideshow_interval_detail'] = '1 segundo = 1000 milissegundos'; // cpg1.5
$lang_admin_php['slideshow_hits'] = 'Contar visualizações no Slideshow'; // cpg1.5
$lang_admin_php['ecard_flash'] = 'Permitir Flash nos Postais'; // cpg1.5
$lang_admin_php['not_recommended'] = 'não recomendado'; // cpg1.5
$lang_admin_php['recommended'] = 'recomendado'; // cpg1.5
$lang_admin_php['transparent_overlay'] = 'Insira uma sobreposição transparente para minimizar a perda da imagem'; // cpg1.5
$lang_admin_php['old_style_rating'] = 'Voltar ao sistema antigo de votação'; // cpg1.5
$lang_admin_php['old_style_rating_extra'] = 'Irá desactivar a opção \'Número de estrelas a ser usado\''; // cpg1.5
$lang_admin_php['rating_stars_amount'] = 'Número de estrelas a ser usado na votação'; // cpg1.5
$lang_admin_php['rate_own_files'] = 'Os utilizadores não podem votar nos seus próprios ficheiros'; // cpg1.5
$lang_admin_php['filter_bad_words'] = 'Filtrar asneiras nos comentários'; // cpg1.5
$lang_admin_php['enable_smilies'] = 'Permitir smileys nos comentários'; // cpg1.5
$lang_admin_php['disable_comment_flood_protect'] = 'Permitir vários comentários consecutivos, do mesmo utilizador, num ficheiro'; // cpg1.5
$lang_admin_php['disable_comment_flood_protect_details'] = '(desactivar protecção de inundação (flood))'; // cpg1.5
$lang_admin_php['max_com_lines'] = 'Número máximo de linhas num comentário'; // cpg1.5
$lang_admin_php['max_com_size'] = 'Máximo tamanho de um comentário'; // cpg1.5
$lang_admin_php['email_comment_notification'] = 'Notificar, por email, o administrador de comentários'; // cpg1.5
$lang_admin_php['comments_sort_descending'] = 'Ordenar os comentários'; // cpg1.5
$lang_admin_php['comments_per_page'] = 'Comentários por página'; // cpg1.5
$lang_admin_php['comments_anon_pfx'] = 'Prefixo para autores anónimos de comentários'; // cpg1.5
$lang_admin_php['comment_approval'] = 'Os comentários necessitam de aprovação'; // cpg1.5
$lang_admin_php['display_comment_approval_only'] = 'Mostrar apenas comentários à espera de aprovação na página &quot;Rever Comentários&quot;'; // cpg1.5
$lang_admin_php['comment_placeholder'] = 'Mostrar um marcador aos utilizadores quando existem comentários à espera de aprovação'; // cpg1.5
$lang_admin_php['comment_user_edit'] = 'Permitir que os utilizadores editem os seus comentários'; // cpg1.5
$lang_admin_php['comment_captcha'] = 'Mostrar a Captcha (Confirmação Visual) ao adicionar comentários'; // cpg1.5
$lang_admin_php['comment_akismet_enable'] = 'Opções Akismet'; // cpg1.5
$lang_admin_php['comment_akismet_enable_description'] = 'Acções a realizar se um comentário não passar na validação Akismet (marcado como spam)?'; // cpg1.5
$lang_admin_php['comment_akismet_applicable_only'] = 'As opções apenas se aplicam se o Akismet foi activado com a introdução de uma chave API válida'; // cpg1.5
$lang_admin_php['comment_akismet_enable_approval'] = 'Aceitar comentário que não passe na validação mas marcá-lo como não aprovado'; // cpg1.5
$lang_admin_php['comment_akismet_drop_tell'] = 'Eliminar comentário que não passe na validação mas avisar o autor que não foi aceite'; // cpg1.5
$lang_admin_php['comment_akismet_drop_lie'] = 'Eliminar comentário que não passe na validação mas avisar o autor (spammer) que o comentário foi adicionado'; // cpg1.5
$lang_admin_php['comment_akismet_api_key'] = 'Chave API do Akismet'; // cpg1.5
$lang_admin_php['comment_akismet_api_key_description'] = 'Deixar em branco para desactivar o sistema Akismet'; // cpg1.5
$lang_admin_php['comment_akismet_group'] = 'Aplicar o sistema Akismet para comentários de'; // cpg1.5
$lang_admin_php['comment_promote_registration'] = 'Pedir a visitantes para se registarem para colocarem comentários'; // cpg1.5
$lang_admin_php['thumb_width'] = 'Máximo tamanho de uma miniatura (largura, se usar ""exactamente" em "Usar dimensão"")'; // cpg1.5
$lang_admin_php['thumb_use'] = 'Usar dimensão'; // cpg1.5
$lang_admin_php['thumb_use_detail'] = '(largura ou altura ou aspecto máximo da miniatura)'; // cpg1.5
$lang_admin_php['thumb_height'] = 'Altura da miniatura'; // cpg1.5
$lang_admin_php['thumb_height_detail'] = '(apenas aplicar se usar &quot;exactamente&quot; em &quot;Usar dimensão&quot;)'; // cpg1.5
$lang_admin_php['movie_audio_document'] = 'vídeo, áudio, documento'; // cpg1.5
$lang_admin_php['thumb_pfx'] = 'Prefixo para as miniaturas'; // cpg1.5
$lang_admin_php['enable_unsharp'] = 'Nitidez das miniaturas: activar Unsharp Mask'; // cpg1.5
$lang_admin_php['unsharp_amount'] = 'Quantia do Unsharp Mask'; // cpg1.5
$lang_admin_php['unsharp_radius'] = 'Raio do Unsharp Mask'; // cpg1.5
$lang_admin_php['unsharp_threshold'] = 'Threshold do Unsharp Mask'; // cpg1.5
$lang_admin_php['jpeg_qual'] = 'Qualidade para imagens JPEG'; // cpg1.5
$lang_admin_php['make_intermediate'] = 'Criar imagens intermédias'; // cpg1.5
$lang_admin_php['picture_use'] = 'Usar tamanho'; // cpg1.5
$lang_admin_php['picture_use_detail'] = '(largura ou altura ou máximo aspecto para uma imagem intermédia)'; // cpg1.5
$lang_admin_php['picture_use_thumb'] = 'Como a miniatura'; // cpg1.5
$lang_admin_php['picture_width'] = 'Máxima largura ou altura de uma imagem intermédia'; // cpg1.5
$lang_admin_php['max_upl_size'] = 'Tamanho máximo para ficheiros enviados'; // cpg1.5
$lang_admin_php['kilobytes'] = 'KB'; // cpg1.5
$lang_admin_php['pixels'] = 'píxeis'; // cpg1.5
$lang_admin_php['max_upl_width_height'] = 'Máxima largura ou altura para as imagens enviadas'; // cpg1.5
$lang_admin_php['auto_resize'] = 'Auto-redimensionar imagens que sejam maiores que a largura ou altura máxima'; // cpg1.5
$lang_admin_php['fullsize_padding_x'] = 'Margem (pad) horizontal para a janela pop-up da imagem em tamanho real'; // cpg1.5
$lang_admin_php['fullsize_padding_y'] = 'Margem (pad) vertical para a janela pop-up da imagem em tamanho real'; // cpg1.5
$lang_admin_php['allow_private_albums'] = 'Permitir álbuns privados'; // cpg1.5
$lang_admin_php['allow_private_albums_note'] = '(Nota: se mudar de \'sim\' para \'não\' todos os álbuns privados, já existentes, ficarão visíveis)'; // cpg1.5
$lang_admin_php['show_private'] = 'Mostrar ícone de álbum privado a utilizadores sem sessão iniciada'; // cpg1.5
$lang_admin_php['forbiden_fname_char'] = 'Caracteres proibidos nos nomes de ficheiros'; // cpg1.5
$lang_admin_php['silly_safe_mode'] = 'Activar &quot;silly safe mode&quot;'; // cpg1.5
$lang_admin_php['allowed_img_types'] = 'Tipos de imagens permitidos'; // cpg1.5
$lang_admin_php['allowed_mov_types'] = 'Tipos de vídeos permitidos'; // cpg1.5
$lang_admin_php['media_autostart'] = 'Auto-início de vídeos'; // cpg1.5
$lang_admin_php['allowed_snd_types'] = 'Tipos de áudio permitidos'; // cpg1.5
$lang_admin_php['allowed_doc_types'] = 'Tipos de documentos permitidos'; // cpg1.5
$lang_admin_php['thumb_method'] = 'Método de redimensionamento de imagens'; // cpg1.5
$lang_admin_php['impath'] = 'Caminho para o utilitário de \'conversão\' ImageMagick'; // cpg1.5
$lang_admin_php['impath_example'] = '(ex. /usr/bin/)'; // cpg1.5
$lang_admin_php['im_options'] = 'Opções adicionais da linha de comandos para o ImageMagick'; // cpg1.5
$lang_admin_php['read_exif_data'] = 'Ler dados EXIF das imagens JPEG'; // cpg1.5
$lang_admin_php['read_iptc_data'] = 'Ler dados IPTC das imagens JPEG'; // cpg1.5
$lang_admin_php['fullpath'] = 'Directoria dos álbuns'; // cpg1.5
$lang_admin_php['userpics'] = 'Directoria para os ficheiros de utilizador'; // cpg1.5
$lang_admin_php['normal_pfx'] = 'Prefixo para imagens intermédias'; // cpg1.5
$lang_admin_php['default_dir_mode'] = 'Modo (privilégios) pré-definido para directorias'; // cpg1.5
$lang_admin_php['default_file_mode'] = 'Modo (privilégios) pré-definido para ficheiros'; // cpg1.5
$lang_admin_php['enable_watermark'] = 'Activar marca-de-água em imagens'; // cpg1.5
$lang_admin_php['enable_thumb_watermark'] = 'Colocar marca-de-água em miniaturas personalizadas'; // cpg1.5
$lang_admin_php['where_put_watermark'] = 'Onde colocar a marca-de-água'; // cpg1.5
$lang_admin_php['which_files_to_watermark'] = 'A que ficheiros se aplicará a marca-de-água'; // cpg1.5
$lang_admin_php['watermark_file'] = 'Ficheiro a usar para marca-de-água'; // cpg1.5
$lang_admin_php['watermark_transparency'] = 'Transparência para toda a imagem'; // cpg1.5
$lang_admin_php['zero_2_hundred'] = '0-100'; // cpg1.5
$lang_admin_php['reduce_watermark'] = 'Redimensionar a marca-de-água se a largura da imagem for inferior ao valor introduzido. Essa será a referência a 100%. O redimensionamento da imagem é linear (0 para desactivar)'; // cpg1.5
$lang_admin_php['watermark_transparency_featherx'] = 'Definir cor de transparência x'; // cpg1.5
$lang_admin_php['watermark_transparency_feathery'] = 'Definir cor de transparência y'; // cpg1.5
$lang_admin_php['gd2_only'] = 'Apenas GD2'; // cpg1.5
$lang_admin_php['allow_user_registration'] = 'Permitir o registo de novos utilizadores'; // cpg1.5
$lang_admin_php['global_registration_pw'] = 'Código global de registo'; // cpg1.5
$lang_admin_php['user_registration_disclaimer'] = 'Mostrar os termos de serviço aquando do registo de novos utilizadores'; // cpg1.5
$lang_admin_php['registration_captcha'] = 'Mostrar a Captcha (Confirmação Visual) na página de registo de novos utilizadores'; // cpg1.5
$lang_admin_php['reg_requires_valid_email'] = 'O registo de novo utilizador exige verificação por email'; // cpg1.5
$lang_admin_php['reg_notify_admin_email'] = 'Notificar o administrador, por email, de novo registo de utilizador'; // cpg1.5
$lang_admin_php['admin_activation'] = 'Activação pelo administrador de novos utilizadores'; // cpg1.5
$lang_admin_php['personal_album_on_registration'] = 'Criar um álbum de utilizador na galeria pessoal aquando do registo'; // cpg1.5
$lang_admin_php['allow_unlogged_access'] = 'Permitir o acesso a utilizadores sem sessão (visitantes ou anónimos)'; // cpg1.5
$lang_admin_php['thumbnail_intermediate_full'] = 'miniaturas, imagens intermédias e imagens em tamanho real'; // cpg1.5
$lang_admin_php['thumbnail_intermediate'] = 'miniaturas e imagens intermédias'; // cpg1.5
$lang_admin_php['thumbnail_only'] = 'apenas miniaturas'; // cpg1.5
$lang_admin_php['upload_mechanism'] = 'Método pré-definido de envio de ficheiros'; // cpg1.5
$lang_admin_php['upload_swf'] = 'avançado - múltiplos ficheiros e em flash (recomendado)'; // cpg1.5
$lang_admin_php['upload_single'] = 'simples - ficheiro a ficheiro'; // cpg1.5
$lang_admin_php['allow_user_upload_choice'] = 'Permitir que os utilizadores possam escolher o método de envio de ficheiros'; // cpg1.5
$lang_admin_php['allow_duplicate_emails_addr'] = 'Permitir que dois utilizadores tenham o mesmo email'; // cpg1.5
$lang_admin_php['upl_notify_admin_email'] = 'Notificar os administradores de envios de ficheiros pelos utilizadores à espera de aprovação'; // cpg1.5
$lang_admin_php['allow_memberlist'] = 'Permitir utilizadores ligados ver a lista de membros'; // cpg1.5
$lang_admin_php['allow_email_change'] = 'Permitir aos utilizadores alterar o seu endereço de email no seu perfil'; // cpg1.5
$lang_admin_php['allow_user_account_delete'] = 'Permitir aos utilizadores apagar a sua própria conta'; // cpg1.5
$lang_admin_php['users_can_edit_pics'] = 'Permitir aos utilizadores ganhar controlo sobre as suas imagens em galerias públicas'; // cpg1.5
$lang_admin_php['allow_user_move_album'] = 'Permitir aos utilizadores mover os seus álbuns de/para categorias permitidas'; // cpg1.5
$lang_admin_php['allow_user_album_keyword'] = 'Permitir aos utilizadores atribuir palavras-chave aos álbuns'; // cpg1.5
$lang_admin_php['allow_user_edit_after_cat_close'] = 'Permitir aos utilizadores editar os seus álbuns quando numa categoria bloqueada'; // cpg1.5
$lang_admin_php['login_method_username'] = 'Nome de utilizador'; // cpg1.5
$lang_admin_php['login_method_email'] = 'Endereço email'; // cpg1.5
$lang_admin_php['login_method_both'] = 'Ambos'; // cpg1.5
$lang_admin_php['login_method'] = 'Como pretende que os utilizadores se autentiquem'; // cpg1.5
$lang_admin_php['login_threshold'] = 'Número de tentativas falhadas de autenticação até à expulsão temporária'; // cpg1.5
$lang_admin_php['login_threshold_detail'] = '(para evitar ataques \'brute force\')'; // cpg1.5
$lang_admin_php['login_expiry'] = 'Duração de uma expulsão temporária após tentativas falhadas de autenticação'; // cpg1.5
$lang_admin_php['minutes'] = 'minutes'; // cpg1.5
$lang_admin_php['report_post'] = 'Activar Envio de Relatórios, pelos utilizadores, ao Administrador'; // cpg1.5
$lang_admin_php['user_profile1_name'] = 'Nome do perfil 1'; // cpg1.5
$lang_admin_php['user_profile2_name'] = 'Nome do perfil 2'; // cpg1.5
$lang_admin_php['user_profile3_name'] = 'Nome do perfil 3'; // cpg1.5
$lang_admin_php['user_profile4_name'] = 'Nome do perfil 4'; // cpg1.5
$lang_admin_php['user_profile5_name'] = 'Nome do perfil 5'; // cpg1.5
$lang_admin_php['user_profile6_name'] = 'Nome do perfil 6'; // cpg1.5
$lang_admin_php['user_field1_name'] = 'Nome do campo 1'; // cpg1.5
$lang_admin_php['user_field2_name'] = 'Nome do campo 2'; // cpg1.5
$lang_admin_php['user_field3_name'] = 'Nome do campo 3'; // cpg1.5
$lang_admin_php['user_field4_name'] = 'Nome do campo 4'; // cpg1.5
$lang_admin_php['cookie_name'] = 'Nome do Cookie'; // cpg1.5
$lang_admin_php['cookie_path'] = 'Caminho do Cookie'; // cpg1.5

$lang_admin_php['smtp_host'] = 'Servidor SMTP (quando deixado em branco, será usado o sendmail)'; // cpg1.5
$lang_admin_php['smtp_username'] = 'SMTP Username'; // cpg1.5
$lang_admin_php['smtp_password'] = 'SMTP Password'; // cpg1.5
$lang_admin_php['log_mode'] = 'Modo de registos (logging)'; // cpg1.5
$lang_admin_php['log_mode_details'] = 'Todos os log são escritos em Inglês.'; // cpg1.5
$lang_admin_php['log_ecards'] = 'Criar registos dos postais'; // cpg1.5
$lang_admin_php['log_ecards_detail'] = 'Nota: O uso de registos (logs) pode ter impactos legais. O utilizador deve ser informado, a quando do seu registo, que o uso de poistais é registado pelo sistema. É recomendado apresentar uma página separada com as políticas de privacidade do site.'; // cpg1.5
$lang_admin_php['vote_details'] = 'Manter estatísticas detalhadas de votos'; // cpg1.5
$lang_admin_php['hit_details'] = 'Manter estatísticas detalhadas de acessos'; // cpg1.5
$lang_admin_php['display_stats_on_index'] = 'Mostrar estatísticas nas páginas índice'; // cpg1.5
$lang_admin_php['count_file_hits'] = 'Contar visualizações do ficheiro'; // cpg1.5
$lang_admin_php['count_album_hits'] = 'Contar visualizações do álbum'; // cpg1.5
$lang_admin_php['count_admin_hits'] = 'Contar visualizações do administrador'; // cpg1.5
$lang_admin_php['debug_mode'] = 'Activar modo de depuração'; // cpg1.5
$lang_admin_php['debug_notice'] = 'Apresentar notícias no modo de depuração'; // cpg1.5
$lang_admin_php['offline'] = 'A galeria está offline'; // cpg1.5
$lang_admin_php['display_coppermine_news'] = 'Apresentar as notícias de coppermine-gallery.net'; // cpg1.5
$lang_admin_php['display_coppermine_detail'] = 'será apenas apresentado ao administrador'; // cpg1.5
$lang_admin_php['config_setting_invalid'] = 'O valor que definiu para &laquo;%s&raquo; é inválido, por favor reveja-o.'; // cpg1.5
$lang_admin_php['config_setting_ok'] = 'As definições em &laquo;%s&raquo; foram alteradas e guardadas.'; // cpg1.5
$lang_admin_php['contact_form_settings'] = 'Configurações do formulário de contacto'; // cpg1.5
$lang_admin_php['contact_form_guest_enable'] = 'Mostrar o formulário de contacto aos visitantes anónimos (visitantes)'; // cpg1.5
$lang_admin_php['contact_form_registered_enable'] = 'Mostrar formulário de contacto aos utilizadores registados'; // cpg1.5
$lang_admin_php['with_captcha'] = 'com captcha'; // cpg1.5
$lang_admin_php['without_captcha'] = 'sem captcha'; // cpg1.5
$lang_admin_php['optional'] = 'opcional'; // cpg1.5
$lang_admin_php['mandatory'] = 'obrigatório'; // cpg1.5
$lang_admin_php['contact_form_guest_name_field'] = 'Mostrar o campo nome do remetente aos visitantes'; // cpg1.5
$lang_admin_php['contact_form_guest_email_field'] = 'Mostrar o campo email do remetente aos visitantes'; // cpg1.5
$lang_admin_php['contact_form_subject_field'] = 'Mostrar o campo assunto'; // cpg1.5
$lang_admin_php['contact_form_subject_content'] = 'Linha de assunto para os emails gerados pelo formulário de contacto'; // cpg1.5
$lang_admin_php['contact_form_sender_email'] = 'Usar o email do remetente como endereço  &quot;de&quot;'; // cpg1.5
$lang_admin_php['allow_no_link'] = 'permitir, mas não mostrar o link'; // cpg1.5
$lang_admin_php['allow_show_link'] = 'permitir e promover o seu uso mostrando um link'; // cpg1.5
$lang_admin_php['display_sidebar_user'] = 'Barra lateral para utilizadores registados'; // cpg1.5
$lang_admin_php['display_sidebar_guest'] = 'Barra lateral para visitantes'; // cpg1.5
$lang_admin_php['do_not_change'] = 'Não altere a não ser que saiba mesmo o que está a fazer!'; // cpg1.5
$lang_admin_php['reset_to_default'] = 'Reiniciar aos valores pré-definidos'; // cpg1.5
$lang_admin_php['no_change_needed'] = 'Não são necessárias alterações, valores são os pré-definidos'; // cpg1.5
$lang_admin_php['enabled'] = 'activo'; // cpg1.5
$lang_admin_php['disabled'] = 'inactivo'; // cpg1.5
$lang_admin_php['none'] = 'nenhum'; // cpg1.5
$lang_admin_php['warning_change'] = 'Ao alterar esta definição, apenas os ficheiros adicionados após este ponto serão afectados, logo é recomendado que esta definição não seja alterada se já existem ficheiros na galeria. Pode, no entanto, aplicar as alterações aos ficheiros existentes com o utilitário &quot;<a href="util.php">ferramentas administrativas</a> (redimensionar imagens)&quot; do menu de administração.'; // cpg1.5
$lang_admin_php['warning_exist'] = 'Estas configurações não deverão ser alteradas se já tem ficheiros na base de dados.'; // cpg1.5
$lang_admin_php['warning_dont_submit'] = 'Se não tem a certeza do impacto que a alteração deste campo possa fazer, não submeta o formulário antes de rever a documentação.'; // cpg1.5 // js-alert
$lang_admin_php['menu_only'] = 'apenas no menu'; // cpg1.5
$lang_admin_php['everywhere'] = 'em toda a parte'; // cpg1.5
$lang_admin_php['manage_languages'] = 'Gerir línguas'; // cpg1.5
$lang_admin_php['form_token_lifetime'] = 'Tempo de vida do token dos formulários'; // cpg1.5
$lang_admin_php['seconds'] = 'Segundos'; // cpg1.5
$lang_admin_php['display_reset_boxes_in_config'] = 'Mostrar caixas de reinicialização na configuração'; // cpg1.5
$lang_admin_php['upd_not_needed'] = 'Actualização não necessária.'; // cpg 1.5
}


// ------------------------------------------------------------------------- //
// File db_ecard.php
// ------------------------------------------------------------------------- //
if (defined('DB_ECARD_PHP')) {
$lang_db_ecard_php['title'] = 'Enviar postais';
$lang_db_ecard_php['ecard_sender'] = 'Remetente';
$lang_db_ecard_php['ecard_recipient'] = 'Destinatário';
$lang_db_ecard_php['ecard_date'] = 'Data';
$lang_db_ecard_php['ecard_display'] = 'Exibir postal';
$lang_db_ecard_php['ecard_name'] = 'Nome';
$lang_db_ecard_php['ecard_email'] = 'Email';
$lang_db_ecard_php['ecard_ip'] = 'IP';
$lang_db_ecard_php['ecard_ascending'] = 'crescente';
$lang_db_ecard_php['ecard_descending'] = 'decrescente';
$lang_db_ecard_php['ecard_sorted'] = 'Ordenar';
$lang_db_ecard_php['ecard_by_date'] = 'por data';
$lang_db_ecard_php['ecard_by_sender_name'] = 'por nome do remetente';
$lang_db_ecard_php['ecard_by_sender_email'] = 'por email do remetente';
$lang_db_ecard_php['ecard_by_sender_ip'] = 'por endereço IP do remetente';
$lang_db_ecard_php['ecard_by_recipient_name'] = 'por nome do recipiente';
$lang_db_ecard_php['ecard_by_recipient_email'] = 'por email do recipiente';
$lang_db_ecard_php['ecard_number'] = 'mostrando registos %s a %s de %s';
$lang_db_ecard_php['ecard_goto_page'] = 'ir para página';
$lang_db_ecard_php['ecard_records_per_page'] = 'Registos por página';
$lang_db_ecard_php['check_all'] = 'Marcar todos';
$lang_db_ecard_php['uncheck_all'] = 'Desmarcar todos';
$lang_db_ecard_php['ecards_delete_selected'] = 'Apagar postais seleccionados';
$lang_db_ecard_php['ecards_delete_confirm'] = 'Tem a certeza que pretende apagar os registos? Marca a caixa de verificação!';
$lang_db_ecard_php['ecards_delete_sure'] = 'Tenho a certeza';
$lang_db_ecard_php['invalid_data'] = 'Os dados do postal ao qual está a tentar aceder foi corrompido pelo seu cliente de email. Verifique que o link está completo.';
}

// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //
if (defined('DB_INPUT_PHP')) {
$lang_db_input_php['empty_name_or_com'] = 'Tem de digitar o seu nome e um comentário';
$lang_db_input_php['com_added'] = 'O seu comentário foi adicionado'; // cpg1.5
$lang_db_input_php['alb_need_title'] = 'Tem que fornecer um título para o álbum!';
$lang_db_input_php['no_udp_needed'] = 'Não são necessárias actualizações.';
$lang_db_input_php['alb_updated'] = 'O álbum foi actualizado';
$lang_db_input_php['unknown_album'] = 'O álbum escolhido não existe ou não tem privilégios para enviar para este álbum';
$lang_db_input_php['no_pic_uploaded'] = 'Não foi enviado nenhum ficheiro!<br />Se seleccionou realmente um ficheiro para enviar, verifique se o servidor permite o envio de ficheiros...';
$lang_db_input_php['err_mkdir'] = 'Não foi possível criar a directoria %s!';
$lang_db_input_php['dest_dir_ro'] = 'A directoria de destino %s não tem privilégios de escrita!';
$lang_db_input_php['err_move'] = 'Impossível mover %s para %s!';
$lang_db_input_php['err_fsize_too_large'] = 'A resolução do ficheiro que enviou é grande de mais (o máximo permitido é %s x %s)!';
$lang_db_input_php['err_imgsize_too_large'] = 'O tamanho do ficheiro que enviou é grande de mais (o máximo permitido é de %s KB)!';
$lang_db_input_php['err_invalid_img'] = 'O ficheiro que enviou não é uma imagem válida!';
$lang_db_input_php['allowed_img_types'] = 'Só pode enviar %s imagens.';
$lang_db_input_php['err_insert_pic'] = 'O ficheiro \'%s\' não poder ser adicionado ao álbum';
$lang_db_input_php['upload_success'] = 'O seu ficheiro foi enviado com sucesso.<br />Ficará visível após aprovação pelo administrador.';
$lang_db_input_php['notify_admin_email_subject'] = '%s - notificação de envio';
$lang_db_input_php['notify_admin_email_body'] = 'Foi enviada, por %s, uma imagem que necessita da sua aprovação. Visite %s';
$lang_db_input_php['info'] = 'Informação';
$lang_db_input_php['com_added'] = 'Comentário adicionado';
$lang_db_input_php['com_updated'] = 'Comentário actualizado'; // cpg1.5
$lang_db_input_php['alb_updated'] = 'Álbum actualizado';
$lang_db_input_php['err_comment_empty'] = 'O seu comentário está vazio!';
$lang_db_input_php['err_invalid_fext'] = 'Apenas são aceites ficheiros com as seguintes extensões:'; // js-alert
$lang_db_input_php['no_flood'] = 'Desculpe mas já é o autor do último comentário sobre este ficheiro<br />Edite o comentário que enviou se o quiser modificar';
$lang_db_input_php['redirect_msg'] = 'Está a ser redireccionado.<br /><br />Clique \'CONTINUAR\' se a página não se actualizar automaticamente';
$lang_db_input_php['upl_success'] = 'O seu ficheiro foi adicionado com sucesso';
$lang_db_input_php['email_comment_subject'] = 'Comentário colocado na galeria';

$lang_db_input_php['email_comment_body'] = 'Alguém colocou um comentário na sua galeria. Poderá vê-la em';
$lang_db_input_php['album_not_selected'] = 'Álbum não seleccionado';
$lang_db_input_php['com_author_error'] = 'Um utilizador registado está a usar este nome de utilizador. Ligue-se ou utilize outro';
}

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //
if (defined('DELETE_PHP')) {
$lang_delete_php['orig_pic'] = 'imagem original'; // cpg1.5
$lang_delete_php['fs_pic'] = 'imagem em tamanho real';
$lang_delete_php['del_success'] = 'apagado com sucesso';
$lang_delete_php['ns_pic'] = 'imagem em tamanho normal';
$lang_delete_php['err_del'] = 'não pode ser apagado';
$lang_delete_php['thumb_pic'] = 'miniatura';
$lang_delete_php['comment'] = 'comentário';
$lang_delete_php['im_in_alb'] = 'imagem no álbum';
$lang_delete_php['alb_del_success'] = 'Álbum &laquo;%s&raquo; apagado';
$lang_delete_php['alb_mgr'] = 'Gestor de Álbuns';
$lang_delete_php['err_invalid_data'] = 'Dados inválidos recebidos em \'%s\'';
$lang_delete_php['create_alb'] = 'Criando o álbum \'%s\'';
$lang_delete_php['update_alb'] = 'Actualizando o álbum \'%s\' com o titulo \'%s\' e índice \'%s\'';
$lang_delete_php['del_pic'] = 'Apagar ficheiro';
$lang_delete_php['del_alb'] = 'Apagar álbum';
$lang_delete_php['del_user'] = 'Apagar utilizador';
$lang_delete_php['err_unknown_user'] = 'O utilizador seleccionado não existe!';
$lang_delete_php['err_empty_groups'] = 'Não existe a tabela de grupos ou esta encontra-se vazia!';
$lang_delete_php['comment_deleted'] = 'O comentário foi apagado com sucesso';
$lang_delete_php['npic'] = 'Imagem';
$lang_delete_php['pic_mgr'] = 'Gestor de Imagens';
$lang_delete_php['update_pic'] = 'Actualizando a imagem \'%s\' com o nome de ficheiro \'%s\' e índice \'%s\'';
$lang_delete_php['username'] = 'Nome de utilizador';
$lang_delete_php['anonymized_comments'] = '%s comentário(s) tornados anónimos';
$lang_delete_php['anonymized_uploads'] = '%s envio(s) publico(s) tornados anónimos';
$lang_delete_php['deleted_comments'] = '%s comentário(s) apagados';
$lang_delete_php['deleted_uploads'] = '%s envio(s) publico(s) apagados';
$lang_delete_php['user_deleted'] = 'utilizador %s apagado';
$lang_delete_php['activate_user'] = 'Activar utilizador';
$lang_delete_php['user_already_active'] = 'A conta já se encontra activa';
$lang_delete_php['activated'] = 'Inactivo';
$lang_delete_php['deactivate_user'] = 'Desactivar utilizador';
$lang_delete_php['user_already_inactive'] = 'A conta já se encontra inactiva';
$lang_delete_php['deactivated'] = 'Activo';
$lang_delete_php['reset_password'] = 'Reinicializar a(s) palavra(s)-passe';
$lang_delete_php['password_reset'] = 'Senha reinicializada para %s';
$lang_delete_php['change_group'] = 'Alterar grupo primário';
$lang_delete_php['change_group_to_group'] = 'Alterar de %s para %s';
$lang_delete_php['add_group'] = 'Adicionar grupo secundário';
$lang_delete_php['add_group_to_group'] = 'Adicionar utilizador %s ao grupo %s. Agora é membro de %s como primário e de %s como secundário.';
$lang_delete_php['status'] = 'Estado';
$lang_delete_php['updating_album'] = 'Actualizando álbum '; // cpg1.5
$lang_delete_php['moved_picture_to_position'] = 'Imagem %s movida para a posição %s'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File displayimage.php
// ------------------------------------------------------------------------- //
if (defined('DISPLAYIMAGE_PHP')){
$lang_display_image_php['confirm_del'] = 'Tem a certeza que pretende APAGAR este ficheiro?\\nOs comentários também serão apagados.'; // js-alert
$lang_display_image_php['del_pic'] = 'Apagar este ficheiro';
$lang_display_image_php['size'] = '%s x %s pixeis';
$lang_display_image_php['views'] = '%s vezes';
$lang_display_image_php['slideshow'] = 'Slideshow';

$lang_display_image_php['stop_slideshow'] = 'Parar Slideshow';
$lang_display_image_php['view_fs'] = 'Clique para ver imagem em tamanho real';
$lang_display_image_php['edit_pic'] = 'Editar dados do ficheiro';
$lang_display_image_php['crop_pic'] = 'Cortar e Rodar';
$lang_display_image_php['set_player'] = 'Alterar visualizador';

$lang_picinfo['title'] = 'Dados do ficheiro';
$lang_picinfo['Album name'] = 'Nome do Álbum';
$lang_picinfo['Rating'] = 'Avaliação (%s votes)';
$lang_picinfo['Date Added'] = 'Adicionado em';
$lang_picinfo['Dimensions'] = 'Dimensões';
$lang_picinfo['Displayed'] = 'Visualizações';
$lang_picinfo['URL'] = 'URL';
$lang_picinfo['Make'] = 'Feito em';
$lang_picinfo['Model'] = 'Modelo';
$lang_picinfo['DateTime'] = 'Data Hora';
$lang_picinfo['ISOSpeedRatings'] = 'ISO';
$lang_picinfo['MaxApertureValue'] = 'Abertura Máxima';
$lang_picinfo['FocalLength'] = 'Distância Focal';
$lang_picinfo['Comment'] = 'Comentário';
$lang_picinfo['addFav'] = 'Adicionar aos Favoritos';
$lang_picinfo['addFavPhrase'] = 'Favoritos';
$lang_picinfo['remFav'] = 'Apagar dos Favoritos';
$lang_picinfo['iptcTitle'] = 'Titulo IPTC';
$lang_picinfo['iptcCopyright'] = 'Copyright IPTC';
$lang_picinfo['iptcKeywords'] = 'Senhas IPTC';
$lang_picinfo['iptcCategory'] = 'Categoria IPTC';
$lang_picinfo['iptcSubCategories'] = 'Subcategorias IPTC';
$lang_picinfo['ColorSpace'] = 'Espaço de cor';
$lang_picinfo['ExposureProgram'] = 'Programa de exposição';
$lang_picinfo['Flash'] = 'Flash';
$lang_picinfo['MeteringMode'] = 'Modo de Medição';
$lang_picinfo['ExposureTime'] = 'Tempo de Exposição';
$lang_picinfo['ExposureBiasValue'] = 'Bias de Exposição';
$lang_picinfo['ImageDescription'] = 'Descrição da Imagem';
$lang_picinfo['Orientation'] = 'Orientação';
$lang_picinfo['xResolution'] = 'Resolução X';
$lang_picinfo['yResolution'] = 'Resolução Y';
$lang_picinfo['ResolutionUnit'] = 'Unidade de Resolução';
$lang_picinfo['Software'] = 'Software';
$lang_picinfo['YCbCrPositioning'] = 'Posicionamento YCbCr';
$lang_picinfo['ExifOffset'] = 'Offset EXIF';
$lang_picinfo['IFD1Offset'] = 'Offset IFD1';
$lang_picinfo['FNumber'] = 'FNumber';
$lang_picinfo['ExifVersion'] = 'Versão EXIF';
$lang_picinfo['DateTimeOriginal'] = 'Data e Hora Original';
$lang_picinfo['DateTimedigitized'] = 'Data e Hora da alteração';
$lang_picinfo['ComponentsConfiguration'] = 'Configuração de Componentes';
$lang_picinfo['CompressedBitsPerPixel'] = 'Compressão Bits Por Pixel';
$lang_picinfo['LightSource'] = 'Fonte de Luz';
$lang_picinfo['ISOSetting'] = 'Ajuste ISO';
$lang_picinfo['ColorMode'] = 'Modo de Cor';
$lang_picinfo['Quality'] = 'Qualidade';
$lang_picinfo['ImageSharpening'] = 'Nitidez da Imagem';

$lang_picinfo['FocusMode'] = 'Modo de Focagem';
$lang_picinfo['FlashSetting'] = 'Configuração do Flash';
$lang_picinfo['ISOSelection'] = 'Selecção ISO';
$lang_picinfo['ImageAdjustment'] = 'Ajuste de Imagem';
$lang_picinfo['Adapter'] = 'Adaptador';
$lang_picinfo['ManualFocusDistance'] = 'Distância de Focagem Manual';
$lang_picinfo['DigitalZoom'] = 'Zoom Digital';
$lang_picinfo['AFFocusPosition'] = 'Posição de Auto-Foco';
$lang_picinfo['Saturation'] = 'Saturação';
$lang_picinfo['NoiseReduction'] = 'Redução de Ruído';
$lang_picinfo['FlashPixVersion'] = 'Versão do FlashPix';
$lang_picinfo['ExifImageWidth'] = 'Largura da Imagem EXIF';
$lang_picinfo['ExifImageHeight'] = 'Altura da Imagem EXIF';
$lang_picinfo['ExifInteroperabilityOffset'] = 'Offset de Inter-operacionalidade EXIF';
$lang_picinfo['FileSource'] = 'Origem do Ficheiro';
$lang_picinfo['SceneType'] = 'Tipo de Cena';
$lang_picinfo['CustomerRender'] = 'Cliente de Render';
$lang_picinfo['ExposureMode'] = 'Modo de Exposição';
$lang_picinfo['WhiteBalance'] = 'Balanceamento de Brancos';
$lang_picinfo['DigitalZoomRatio'] = 'Rácio de Zoom Digital';
$lang_picinfo['SceneCaptureMode'] = 'Modo de Captura de Cena';
$lang_picinfo['GainControl'] = 'Controle de Ganho';
$lang_picinfo['Contrast'] = 'Contraste';
$lang_picinfo['Sharpness'] = 'Nitidez';
$lang_picinfo['ManageExifDisplay'] = 'Gerir a Visualização de Dados EXIF';
$lang_picinfo['success'] = 'Dados actualizados com sucesso.';
$lang_picinfo['show_details'] = 'Mostrar Detalhes'; // cpg1.5
$lang_picinfo['hide_details'] = 'Ocultar Detalhes'; // cpg1.5
$lang_picinfo['download_URL'] = 'Link Directo';
$lang_picinfo['movie_player'] = 'Reproduzir o ficheiro na aplicação pré-definida';

$lang_display_comments['comment_x_to_y_of_z'] = '%d a %d de %d'; // cpg1.5
$lang_display_comments['page'] = 'Página'; // cpg1.5
$lang_display_comments['edit_title'] = 'Editar este comentário';
$lang_display_comments['delete_title'] = 'Apagar este comentário'; // cpg1.5
$lang_display_comments['confirm_delete'] = 'Tem a certeza que pretende apagar este comentário?'; // js-alert
$lang_display_comments['add_your_comment'] = 'Adicione o seu comentário';
$lang_display_comments['name'] = 'Nome';
$lang_display_comments['comment'] = 'Comentário';
$lang_display_comments['your_name'] = 'O seu nome';
$lang_display_comments['report_comment_title'] = 'Reportar este comentário ao administrador';
$lang_display_comments['pending_approval'] = 'O comentário ficará visível após aprovação do administrador'; // cpg1.5
$lang_display_comments['unapproved_comment'] = 'Comentário não aprovado'; // cpg1.5
$lang_display_comments['pending_approval_message'] = 'Alguém colocou aqui um comentário. Este será visível após aprovação pelo administrador.'; // cpg1.5
$lang_display_comments['approve'] = 'Aprovar comentário'; // cpg1.5
$lang_display_comments['disapprove'] = 'Marcar como não aprovado'; // cpg1.5
$lang_display_comments['log_in_to_comment'] = 'Não são permitidos comentários anónimos. %sLog in%s para comentar'; // cpg1.5 // do not translate the %s placeholders - they will be used as wrappers for the link (<a>)
$lang_display_comments['default_username_message'] = 'Indique o seu nome para comentar'; // cpg1.5
$lang_display_comments['comment_rejected'] = 'O seu comentário foi rejeitado'; // cpg1.5

$lang_fullsize_popup['click_to_close'] = 'Clique na imagem para fechar a janela';
$lang_fullsize_popup['close_window'] = 'Fechar Janela'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP')) {
$lang_ecard_php['title'] = 'Enviar um postal';
$lang_ecard_php['invalid_email'] = 'Aviso: email inválido:'; // cpg1.5
$lang_ecard_php['ecard_title'] = 'Um postal de %s para si';
$lang_ecard_php['error_not_image'] = 'Apenas imagens podem ser enviadas como um postal.'; // cpg1.5
$lang_ecard_php['error_not_image_flash'] = 'Apenas imagens e ficheiros flash podem ser enviadas como um postal.'; // cpg1.5
$lang_ecard_php['view_ecard'] = 'Link alternativo se o postal não for apresentado correctamente';
$lang_ecard_php['view_ecard_plaintext'] = 'Para ver o postal, copie e cole este URL na barra de endereços do seu navegador:';
$lang_ecard_php['view_more_pics'] = 'Ver mais imagens!';
$lang_ecard_php['send_success'] = 'O seu postal foi enviado';
$lang_ecard_php['send_failed'] = 'Desculpe mas o servidor não pode enviar o seu postal...';
$lang_ecard_php['from'] = 'De';
$lang_ecard_php['your_name'] = 'O seu nome';
$lang_ecard_php['your_email'] = 'O seu e-mail';
$lang_ecard_php['to'] = 'Para';
$lang_ecard_php['rcpt_name'] = 'Nome do destinatário';
$lang_ecard_php['rcpt_email'] = 'E-mail do destinatário';
$lang_ecard_php['greetings'] = 'Título';
$lang_ecard_php['message'] = 'Mensagem';
$lang_ecard_php['ecards_footer'] = 'Enviado por %s do IP %s em %s (Hora da galeria)';
$lang_ecard_php['preview'] = 'Pré-visualização do postal';
$lang_ecard_php['preview_button'] = 'Pré-visualização';
$lang_ecard_php['submit_button'] = 'Enviar postal';
$lang_ecard_php['preview_view_ecard'] = 'Este será o link alternativo logo que o postal seja gerado. Não funcionará em pré-visualizações.';
}

// ------------------------------------------------------------------------- //
// File report_file.php
// ------------------------------------------------------------------------- //

if (defined('REPORT_FILE_PHP')) {
$lang_report_php['title'] = 'Reportar ao administrador';
$lang_report_php['invalid_email'] = '<strong>Aviso</strong>: E-mail inválido!';
$lang_report_php['report_subject'] = 'Um relatório de %s em %s numa galeria';
$lang_report_php['view_report'] = 'Link alternativo se o relatório não for correctamente apresentado';
$lang_report_php['view_report_plaintext'] = 'Para ver o relatório, copie e cole este URL na barra de endereços do seu navegador:';
$lang_report_php['view_more_pics'] = 'Galeria';
$lang_report_php['send_success'] = 'O seu relatório foi enviado';
$lang_report_php['send_failed'] = 'Desculpe mas o servidor não consegue enviar o seu relatório...';
$lang_report_php['from'] = 'De';
$lang_report_php['your_name'] = 'O seu nome';
$lang_report_php['your_email'] = 'O seu e-mail';
$lang_report_php['to'] = 'Para';
$lang_report_php['administrator'] = 'Administrador';
$lang_report_php['subject'] = 'Subject';
$lang_report_php['comment_field_name'] = 'Relatório de um comentário de "%s"';
$lang_report_php['reason'] = 'Razão';
$lang_report_php['message'] = 'Mensagem';
$lang_report_php['report_footer'] = 'Enviado por %s do IP %s às %s';
$lang_report_php['obscene'] = 'obsceno';
$lang_report_php['offensive'] = 'ofensivo';
$lang_report_php['misplaced'] = 'fora de tópico/deslocado';
$lang_report_php['missing'] = 'em falta';
$lang_report_php['issue'] = 'erro/impossível mostrar';
$lang_report_php['other'] = 'outro';
$lang_report_php['refers_to'] = 'O relatório do ficheiro refere-se a';
$lang_report_php['reasons_list_heading'] = 'razão(ões) para o relatório:';
$lang_report_php['no_reason_given'] = 'não foi dada qualquer razão';
$lang_report_php['go_comment'] = 'Ir para comentário';
$lang_report_php['view_comment'] = 'Ver relatório completo com comentário';
$lang_report_php['type_file'] = 'ficheiro';
$lang_report_php['type_comment'] = 'comentário';
$lang_report_php['invalid_data'] = 'Os dados do relatório que está a tentar aceder foram corrompidos pelo seu cliente de email. Verifique se o link está completo.';

}

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) {
$lang_editpics_php['pic_info'] = 'Dados do ficheiro';
$lang_editpics_php['desc'] = 'Descrição';
$lang_editpics_php['approval'] = 'Aprovação'; //cpg 1.5
$lang_editpics_php['approved'] = 'Aprovado'; // cpg 1.5
$lang_editpics_php['unapproved'] = 'Não aprovado'; // cpg 1.5
$lang_editpics_php['new_keyword'] = 'Nova palavra-chave';
$lang_editpics_php['new_keywords'] = 'Encontradas novas palavras-chave';
$lang_editpics_php['existing_keyword'] = 'Palavra-chave existente';
$lang_editpics_php['pic_info_str'] = '%s &times; %s - %s KB - vista %s vezes - %s votos';
$lang_editpics_php['approve'] = 'Aprovar ficheiro';
$lang_editpics_php['postpone_app'] = 'Adiar aprovação';
$lang_editpics_php['del_pic'] = 'Apagar ficheiro';
$lang_editpics_php['del_all'] = 'Apagar todos os ficheiros';
$lang_editpics_php['read_exif'] = 'Ler dados EXIF outra vez';
$lang_editpics_php['reset_view_count'] = 'Limpar contador de visualizações';
$lang_editpics_php['reset_all_view_count'] = 'Limpar todos os contadores de visualização';
$lang_editpics_php['reset_votes'] = 'Limpar votos';
$lang_editpics_php['reset_all_votes'] = 'Limpar todos os votos';
$lang_editpics_php['del_comm'] = 'Apagar comentários';
$lang_editpics_php['del_all_comm'] = 'Apagar todos os comentários';
$lang_editpics_php['upl_approval'] = 'Aprovar envio';
$lang_editpics_php['edit_pics'] = 'Editar ficheiros';
$lang_editpics_php['edit_pic'] = 'Editar ficheiro'; // cpg 1.5
$lang_editpics_php['see_next'] = 'Ver ficheiros seguintes';
$lang_editpics_php['see_prev'] = 'Ver ficheiros anteriores';
$lang_editpics_php['n_pic'] = '%s ficheiros';
$lang_editpics_php['n_of_pic_to_disp'] = 'Número de ficheiros a apresentar';
$lang_editpics_php['crop_title'] = 'Editor de Imagens do Coppermine';
$lang_editpics_php['preview'] = 'Pré-visualizar';
$lang_editpics_php['save'] = 'Guardar imagem';
$lang_editpics_php['save_thumb'] = 'Guardar como miniatura';
$lang_editpics_php['gallery_icon'] = 'Tornar como meu ícone';
$lang_editpics_php['sel_on_img'] = 'A selecção tem que se encontrar na imagem!'; // js-alert
$lang_editpics_php['album_properties'] = 'Propriedades do álbum';
$lang_editpics_php['parent_category'] = 'Categoria acima';
$lang_editpics_php['thumbnail_view'] = 'Vista de miniatura';
$lang_editpics_php['select_unselect'] = 'seleccione/desseleccione tudo';
$lang_editpics_php['file_exists'] = 'Ficheiro destino \'%s\' já existe.';
$lang_editpics_php['rename_failed'] = 'Não foi possível renomear \'%s\' para \'%s\'.';
$lang_editpics_php['src_file_missing'] = 'Falta o ficheiro \'%s\'.';
$lang_editpics_php['mime_conv'] = 'Não é possível converter o ficheiro de \'%s\' para \'%s\'';
$lang_editpics_php['forb_ext'] = 'Extensão de ficheiro inválida.';
$lang_editpics_php['error_editor_class'] = 'A classe para o método de redimensionamento não está implementada'; // cpg 1.5
$lang_editpics_php['error_document_size'] = 'O documento não tem largura ou altura'; // cpg 1.5 // js-alert
$lang_editpics_php['success_picture'] = 'Imagem gravada com sucesso - Pode %sfechar%s esta janela'; // cpg1.5 // do not translate "%s" here
$lang_editpics_php['success_thumb'] = 'Miniatura gravada com sucesso - Pode %sfechar%s esta janela'; // cpg1.5 // do not translate "%s" here
$lang_editpics_php['rotate'] = 'Rodar'; // cpg 1.5
$lang_editpics_php['mirror'] = 'Espelhar'; // cpg 1.5
$lang_editpics_php['scale'] = 'Escalar'; // cpg 1.5
$lang_editpics_php['new_width'] = 'Nova largura'; // cpg 1.5
$lang_editpics_php['new_height'] = 'Nova altura'; // cpg 1.5
$lang_editpics_php['enable_clipping'] = 'Activar cortar, aplicar recortar'; // cpg 1.5
$lang_editpics_php['jpeg_quality'] = 'Qualidade de saída JPEG'; // cpg 1.5
$lang_editpics_php['or'] = 'OU'; // cpg 1.5
$lang_editpics_php['approve_pic'] = 'Aprovar ficheiro'; // cpg 1.5
$lang_editpics_php['approve_all'] = 'Aprovar TODOS os ficheiros'; // cpg 1.5
$lang_editpics_php['error_empty'] = 'O álbum está vazio'; // cpg1.5
$lang_editpics_php['error_approval_empty'] = 'Não há mais imagens para aprovar'; // cpg1.5
$lang_editpics_php['error_linked_only'] = 'O álbum apenas tem ligações para ficheiros, os quais não pode editar aqui'; // cpg1.5
$lang_editpics_php['note_approve_public'] = 'Os ficheiros movidos para um álbum público têm que ser aprovados pelo administrador.'; // cpg1.5
$lang_editpics_php['note_approve_private'] = 'Os ficheiros movidos para uma galeria provada têm que ser aprovados pelo administrador.' ; // cpg1.5
$lang_editpics_php['note_edit_control'] = 'Os ficheiros movidos para um álbum público não podem ser editados.'; // cpg1.5
$lang_editpics_php['confirm_move'] = 'Tem a certeza que pretende mover este ficheiro?'; // cpg1.5 //js-alert
$lang_editpics_php['success_changes'] = 'Alterações gravadas com sucesso'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File forgot_passwd.php
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) {
$lang_forgot_passwd_php['forgot_passwd'] = 'Recuperar senha';
$lang_forgot_passwd_php['err_already_logged_in'] = 'Já se encontra ligado!';
$lang_forgot_passwd_php['enter_email'] = 'Introduza o seu endereço de email';
$lang_forgot_passwd_php['submit'] = 'ir';
$lang_forgot_passwd_php['illegal_session'] = 'Sessão ilegal.';
$lang_forgot_passwd_php['failed_sending_email'] = 'Falhou o envio do email!';
$lang_forgot_passwd_php['email_sent'] = 'Foi enviado um email com nome de utilizador e nova senha para %s';
$lang_forgot_passwd_php['verify_email_sent'] = 'Foi enviado um email para %s. Verifique o seu cliente de email para concluir o processo.';
$lang_forgot_passwd_php['err_unk_user'] = 'O utilizador escolhido não existe!';
$lang_forgot_passwd_php['account_verify_subject'] = '%s - Pedido de nova senha';
$lang_forgot_passwd_php['passwd_reset_subject'] = '%s - A sua nova senha';
$lang_forgot_passwd_php['account_verify_email'] = <<< EOT
Requisitou uma nova senha. Se pretende continuar com o processo e que uma nova senha lhe seja enviada, clique no seguinte link:

<a href="{VERIFY_LINK}">{VERIFY_LINK}</a>


Respeitosamente,

A administração de {SITE_NAME}

EOT;

$lang_forgot_passwd_php['reset_email'] = <<< EOT
Aqui está a nova senha por si requisitada:

Nome de utilizador: {USER_NAME}
Senha: {PASSWORD}

Aceda a <a href="{SITE_LINK}">{SITE_LINK}</a> e autentique-se.


Respeitosamente,

A administração de {SITE_NAME}

EOT;
}

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //
if (defined('GROUPMGR_PHP')) {
$lang_groupmgr_php['group_manager'] = 'Gerir Grupos'; // cpg1.5.x
$lang_groupmgr_php['group_name'] = 'Grupos';
$lang_groupmgr_php['permissions'] = 'Privilégios';
$lang_groupmgr_php['public_albums'] = 'Envio de álbuns públicos';
$lang_groupmgr_php['personal_gallery'] = 'Galeria pessoal';
$lang_groupmgr_php['disk_quota'] = 'Quota';
$lang_groupmgr_php['rating'] = 'Votação';
$lang_groupmgr_php['ecards'] = 'Postais';
$lang_groupmgr_php['comments'] = 'Comentários';
$lang_groupmgr_php['allowed'] = 'Permitido';
$lang_groupmgr_php['approval'] = 'Aprovação';
$lang_groupmgr_php['create_new_group'] = 'Criar novo grupo';
$lang_groupmgr_php['del_groups'] = 'Apagar o(s) grupo(s) seleccionado(s)';
$lang_groupmgr_php['confirm_del'] = 'Aviso, quando apaga um grupo, os utilizadores desse grupo serão transferidos para o grupo \'Registered\'!\n\nQuer continuar?'; // js-alert
$lang_groupmgr_php['title'] = 'Gerir grupos de utilizadores';
$lang_groupmgr_php['reset_to_default'] = 'Reinicialização para o nome pré-definido (%s) - recomendado!';
$lang_groupmgr_php['error_group_empty'] = 'Tabela de grupos encontrava-se vazia!<br />Criados os grupos pré-definidos. Por favor, actualize esta página';
$lang_groupmgr_php['explain_greyed_out_title'] = 'Porque está esta linha a cinzento?';
$lang_groupmgr_php['explain_guests_greyed_out_text'] = 'Não pode alterar as propriedades deste grupo porque o nível de acesso a este grupo é NENHUM. Todos os utilizadores sem sessão iniciada (membros do grupo %s) não podem fazer mais nada a não ser ligarem-se; logo a configuração de grupo não se aplica a estes. Altere o nível de acesso, aqui ou na configuração da galeria, em "Configurações de Utilizador", "Permitir o acesso a utilizadores sem sessão".';
$lang_groupmgr_php['group_assigned_album'] = 'Álbum(ns) Atribuído(s)';
$lang_groupmgr_php['access_level'] = 'Nível de acesso'; // cpg1.5
$lang_groupmgr_php['thumbnail_intermediate_full'] = 'miniatura, imagem média e em tamanho real'; // cpg1.5
$lang_groupmgr_php['thumbnail_intermediate'] = 'miniatura e imagem média'; // cpg1.5
$lang_groupmgr_php['thumbnail_only'] = 'apenas miniatura'; // cpg1.5
$lang_groupmgr_php['none'] = 'nenhum'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //
if (defined('INDEX_PHP')){
$lang_index_php['welcome'] = 'Bem-vindo!';

$lang_album_admin_menu['confirm_delete'] = 'Tem a certeza que pretende apagar este álbum?\\nTodos os ficheiros e comentários também serão apagados.'; // js-alert
$lang_album_admin_menu['delete'] = 'Apagar';
$lang_album_admin_menu['modify'] = 'Propriedades';
$lang_album_admin_menu['edit_pics'] = 'Editar imagens';
$lang_album_admin_menu['cat_locked'] = 'Este álbum está bloqueado para edição'; // cpg1.5.x

$lang_list_categories['home'] = 'Inicio';
$lang_list_categories['stat1'] = '[pictures] imagens em [albums] álbuns e [cat] categorias com [comments] comentários visualizados [views] vezes'; // do not translate the stuff in square brackets
$lang_list_categories['stat2'] = '[pictures] imagens em [albums] álbuns visualizados [views] vezes'; // do not translate the stuff in square brackets
$lang_list_categories['xx_s_gallery'] = 'Galeria pessoal de %s';
$lang_list_categories['stat3'] = '[pictures] imagens em [albums] álbuns com [comments] comentários visualizados [views] vezes'; // do not translate the stuff in square brackets

$lang_list_users['user_list'] = 'Lista de utilizadores';
$lang_list_users['no_user_gal'] = 'Não existem galerias de utilizadores';
$lang_list_users['n_albums'] = '%s álbum(s)';
$lang_list_users['n_pics'] = '%s imagens de imagem(s)';

$lang_list_albums['n_pictures'] = '%s imagens';
$lang_list_albums['last_added'] = ', último envio %s';
$lang_list_albums['n_link_pictures'] = '%s imagens com link';
$lang_list_albums['total_pictures'] = '%s do total de imagens';
$lang_list_albums['alb_hits'] = 'Álbum visualizado %s vezes'; // cpg1.5
$lang_list_albums['from_category'] = ' - Da categoria: '; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File install.php
// ------------------------------------------------------------------------- //

if (defined('INSTALL_PHP')) {
$lang_install['already_succ'] = 'A instalação já foi concluída uma vez com sucesso e encontra-se agora bloqueada.';
$lang_install['already_succ_explain'] = 'Se pretende executar o instalador outra vez, tem que primeiro eliminar o ficheiro \'include/config.inc.php\' que foi criado na directoria onde instalou o Coppermine. Pode realizar esta acção com qualquer cliente FTP.';
$lang_install['cant_read_tmp_conf'] = 'O instalador não consegue ler o ficheiro de configuração temporário %s.';
$lang_install['cant_write_tmp_conf'] = 'O instalador não consegue escrever no ficheiro de configuração temporário %s.';
$lang_install['review_permissions'] = 'Reveja os privilégios sobre as directorias.';
$lang_install['change_lang'] = 'Alterar língua';
$lang_install['check_path'] = 'Verifique o caminho';
$lang_install['continue'] = 'Próximo passo';
$lang_install['conv_said'] = 'O programa de conversão indicou:';
$lang_install['license_info'] = 'O Coppermine é uma galeria de imagens/multimédia desenvolvido e licenciado sobre GNU GPL v3. Ao instalar, concorda com os termos da licença:';
$lang_install['cpg_info_frames'] = 'O seu navegador parece incapaz de apresentar frames. Pode verificar a licença na directoria docs que vem no pacote de instalação do Coppermine.';
$lang_install['license'] = 'Acordo de licenciamento do Coppermine';
$lang_install['create_table'] = 'A criar a tabela \'%s\'';
$lang_install['db_populating'] = 'A tentar introduzir dados na base de dados.';
$lang_install['db_alr_populated'] = 'Dados necessários já introduzidos na base de dados.';
$lang_install['dir_ok'] = 'Directoria encontrada';
$lang_install['directory'] = 'Directoria';
$lang_install['email'] = 'Endereço de email';
$lang_install['email_no_match'] = 'Os endereços de email não são iguais ou são inválidos.';
$lang_install['email_verif'] = 'Verificar email';
$lang_install['err_cpgnuke'] = '<h1>ERRO</h1>Parece estar a tentar instalar a versão standalone do Coppermine no seu portal Nuke.<br />Esta versão apenas pode ser usada como standalone!<br />Alguns servidores poderão mostrar esta mensagem mesmo que não tenha um portal Nuke instalado - se este for o caso, <a href="%s?continue_anyway=1">continue</a> com a instalação. Se estiver a usar um portal Nuke, deverá verificar <a href=\"http://www.cpgnuke.com/\">CpgNuke</a> ou usar um dos (não suportados) <a href=\"http://sourceforge.net/project/showfiles.php?group_id=89658&amp;package_id=95984\">Coppermine ports</a> - não continue com a instalação!';
$lang_install['error'] = 'ERRO';
$lang_install['error_need_corr'] = 'Os seguintes erros foram encontrados e têm que ser resolvidos primeiro:';
$lang_install['finish'] = 'Terminar instalação';
$lang_install['gd_note'] = '<strong>Importante :</strong> versões antigas da biblioteca gráfica GD apenas suportam imagens JPEG e PNG. Se este for o caso, então o script não poderá criar miniaturas de imagens GIF.';
$lang_install['go_to_main'] = 'Ir para a página principal';
$lang_install['im_no_convert_ex'] = 'O instalador encontrou o utilitário de conversão ImageMagick em \'%s\'. No entanto, não pode ser executado pelo script.<br />Considere usar o GD em vez do ImageMagick.';
$lang_install['im_not_found'] = 'O instalador tentou encontrar o ImageMagick, mas não conseguiu determinar a sua presença ou então houve um erro. <br /> O Coppermine pode usar o utilitário de conversão <a href="http://www.imagemagick.org/">ImageMagick</a> para criar miniaturas. A qualidade das imagens produzidas pelo ImageMagick é superior à do GD1 mas equivalente à do GD2.<br />Se o ImageMagick está instalado no sistema e o pretende usar, <br />tem que indicar, em baixo, o caminho completo para o utilitário de conversão. <br />No Windows o caminho deverá ser algo como \'c:/ImageMagick/\' e não poderá conter nenhum espaço, nos sistemas *nix* será algo como \'/usr/bin/\'.<br />Se não faz a mínima ideia de ter, ou não, o ImageMagick, deixe este campo em branco - o instalar irá tentar usar o GD2 por defeito (que é o que a generalidade dos utilizadores têm). <br />Pode alterar este parâmetro mais tarde (na configuração do Coppermine), logo não tenha receio se não sabe o que introduzir aqui - deixe em branco.';
$lang_install['im_packages'] = 'O seu servidor suporta o seuinte(s) pacote(s) de imagem(ns)';
$lang_install['im_path'] = 'Caminho para o ImageMagick:';
$lang_install['im_path_space'] = 'O caminho para o ImageMagick (\'%s\') contém, pelo menos, um espaço. Isto causará problemas no script.<br />Mova o ImageMagick para outra directoria.';
$lang_install['installation'] = 'instalação';
$lang_install['installer_locked'] = 'O instalador encontra-se bloqueado';
$lang_install['installer_selected'] = 'O instalador seleccionou';
$lang_install['inv_im_path'] = 'O instalador não consegue encontrar a directoria \'%s\' que especificou para o ImageMagick ou não tem privilégios de acesso. Verifique se o caminho está correcto e se tem privilégios de acesso à directoria em causa.';
$lang_install['lets_go'] = 'Seguir!';
$lang_install['mysql_create_btn'] = 'Criar';
$lang_install['mysql_create_db'] = 'Criar nova base de dados MySQL';
$lang_install['mysql_db_name'] = 'Nome da base de dados MySQL';
$lang_install['mysql_error'] = 'Erro MySQL: ';
$lang_install['mysql_host'] = 'Servidor MySQL<br />(geralmente localhost)';
$lang_install['mysql_username'] = 'Nome de utilizador no MySQL'; // cpg1.5
$lang_install['mysql_password'] = 'Senha no MySQL'; // cpg1.5
$lang_install['mysql_no_create_db'] = 'Não foi possível criar a base de dados MySQL.';
$lang_install['mysql_no_sel_dbs'] = 'Não foi possível ler as bases de dados MySQL disponíveis';
$lang_install['mysql_succ'] = 'Ligação à base de dados estabelecida com sucesso';
$lang_install['mysql_tbl_pref'] = 'Prefixo das tabelas MySQL';
$lang_install['mysql_test_connection'] = 'Testar ligação';
$lang_install['mysql_wrong_db'] = 'O MySQL não conseguiu encontrar uma base de dados denominada \'%s\'. Verifique o nome da base de dados.';
$lang_install['n_a'] = 'N/A';
$lang_install['no_admin_email'] = 'Tem de introduzir um endereço de email para o administrador';
$lang_install['no_admin_password'] = 'Tem de introduzir uma senha para o administrador';
$lang_install['no_admin_username'] = 'Tem de introduzir um nome de utilizador para o administrador';
$lang_install['no_dir'] = 'Directoria indisponível';
$lang_install['no_gd'] = 'A sua instalação de PHP parece não incluir a extensão da biblioteca gráfica \'GD\' e não indicou que pretendia usar o ImageMagick. O Coppermine foi configurado para usar o GD2 porque a detecção deste por vezes falha. Se o GD estiver instalado no sistema, o script deverá funcionar senão terá que instalar o ImageMagick.';
$lang_install['no_mysql_conn'] = 'Não conseguiu criar uma ligação MySQL. Verifique os dados do MySQL introduzidos';
$lang_install['no_mysql_support'] = 'O PHP não tem activado o suporte ao MySQL.';
$lang_install['no_thumb_method'] = 'Tem de escolher uma aplicação de manipulação de imagens (GD/IM)';
$lang_install['nok'] = 'Não OK';
$lang_install['not_here_yet'] = 'Nada aqui ainda, clique %saqui%s para voltar atrás.';
$lang_install['ok'] = 'OK';
$lang_install['on_q'] = 'on query';
$lang_install['or'] = 'ou';
$lang_install['pass_err'] = 'As senhas não são iguais, usou caracteres inválidos ou estão em branco.';
$lang_install['password'] = 'Senha';
$lang_install['password_verif'] = 'Verificar Senha';
$lang_install['perm_error'] = 'Os privilégios de \'%s\' estão definidos para %s, defina-os para';
$lang_install['perm_ok'] = 'Os privilégios em algumas directorias foram verificados e parecem estar correctos. <br />Siga para o próximo passo.';
$lang_install['perm_not_ok'] = 'Os privilégios em algumas directorias foram verificados e parecem estar incorrectos.<br />Altere os privilégios das directorias indicadas como "Não OK".'; // cpg1.5
$lang_install['please_go_back'] = '%sClique aqui%s para voltar e resolver este problema antes de processeguir.';
$lang_install['populate_db'] = 'Povoar a base de dados';
$lang_install['ready_to_roll'] = 'O <a href="index.php">Coppermine</a> encontra-se agora devidamente configurado e pronto a usar.<br /><a href="login.php">Ligue-se</a> usando os dados de administrador que forneceu.';
$lang_install['sect_create_adm'] = 'Esta secção requer dados para criar a conta de administrador do Coppermine. Use apenas caracteres alfanuméricos. Introduza os dados com cuidado!';
$lang_install['sect_mysql_info'] = 'Esta secção requer dados sobre o acesso à base de dados MySQL.<br />Se não sabe como os preencher, informe-se junto do suporte técnico do seu fornecedor de serviço de alojamento web.';
$lang_install['sect_mysql_sel_db'] = 'Aqui terá que escolher que base de dados pretende usar para o Coppermine.<br />Se a sua conta MySQL tem os privilégios necessários, pode criar uma base de dados nova de dentro do instalador ou poderá usar uma base de dados já existente. Se não gosta de nenhuma das opções, terá que criar primeiro uma base de dados fora do instalador do Coppermine, e depois retornar aqui e seleccionar a nova base de dados da caxa de selecção seguinte. Também pode alterar o prefixo das tabelas (não seu pontos), mas é conveniente manter o prefixo pré-definido.';
$lang_install['select_lang'] = 'Seleccione a língua pré-definida: ';
$lang_install['sql_file_not_found'] = 'O ficheiro \'%s\' não foi encontrado. Verifique se enviou todos os ficheiros do Coppermine para o servidor.';
$lang_install['status'] = 'Estado';
$lang_install['subdir_called'] = 'Uma subdirectoria denominada \'%s\' dever geralmente existir na directoria para onde enviou o Coppermine.<br />O instalador não a consegue encontrar. Verifique se enviou todos os ficheiros do Coppermine para o servidor.';
$lang_install['title_admin'] = 'Criar a conta de administrador do Coppermine';
$lang_install['title_dir_check'] = 'A verificar os privilégios das directorias';
$lang_install['title_file_check'] = 'A verificar os ficheiros de instalação';
$lang_install['title_finished'] = 'Instalação terminada';
$lang_install['title_imp'] = 'Selecção do pacote de Imagem';
$lang_install['title_imp_test'] = 'A testar a biblioteca de imagem';
$lang_install['title_mysql_db_sel'] = 'Selecção da base de dados MySQL';
$lang_install['title_mysql_pop'] = 'A criar a estrutura da base de dados';
$lang_install['title_mysql_user'] = 'Verificação de utilizador MySQL';
$lang_install['title_welcome'] = 'Bem-vindo à instalação do Coppermine';
$lang_install['tmp_conf_error'] = 'Não foi possível escrever o ficheiro de configuração temporário - verifique se a directoria \'include\' tem privilégios de escrita.';
$lang_install['tmp_conf_ser_err'] = 'Um erro grave ocorreu com o instalador. Tente recarregando a página ou recomeçando a instalação removendo o ficheiro \'include/config.tmp\'.';
$lang_install['try_again'] = 'Tente outra vez!';
$lang_install['unable_write_config'] = 'Não foi possível escrever o ficheiro de configuração';
$lang_install['user_err'] = 'O nome de utilizador do administrador só deverá conter caracteres alfanuméricos e não poderá estar em branco.';
$lang_install['username'] = 'Nome de utilizador';
$lang_install['your_admin_account'] = 'A sua conta de administrador';
$lang_install['no_cookie'] = 'O seu navegador não aceitou o cookie. É recomendado que aceite cookies.';
$lang_install['no_javascript'] = 'O seu navegador não parece ter o Javascript activo - é altamente recomendado que o active.';
$lang_install['register_globals_detected'] = 'Parece que a sua configuração do PHP tem as \'register_globals\' activadas - deve desactivá-las por motivos de segurança.';
$lang_install['more'] = 'mais';
$lang_install['version_undetected'] = 'O script não conseguiu determinar a versão de %s que o servidor está a usar. Garanta que tem instalado, pelo menos, a versão %s.';
$lang_install['version_incompatible'] = 'O script detectou uma versão (%s) de %s incompatível no servidor.<br />Garanta que usa uma versão compatível (%s ou superior) antes de continuar!';
$lang_install['read_gif'] = 'ler/escrever ficheiros .gif';
$lang_install['read_png'] = 'ler/escrever ficheiros .png';
$lang_install['read_jpg'] = 'ler/escrever ficheiros .jpg';
$lang_install['write_error'] = 'Não foi possível gravar no disco a imagem gerada.';
$lang_install['read_error'] = 'Não foi possível ler a imagem original.';
$lang_install['combine_error'] = 'Não foi possível combinar as imagens originais';
$lang_install['text_error'] = 'Não foi possível adicionar texto à imagem original';
$lang_install['scale_error'] = 'Não foi possível redimensionar a imagem original';
$lang_install['pixels'] = 'píxeis';
$lang_install['combine'] = 'Combinar 2 imagens';
$lang_install['text'] = 'Escrever texto numa imagem';
$lang_install['scale'] = 'redimensionar uma imagem';
$lang_install['generated_image'] = 'Imagem gerada';
$lang_install['reference_image'] = 'Imagem de referência';
$lang_install['imp_test_error'] = 'Houve um erro em pelo menos um teste. Verifique se escolheu o sistema de processamento de imagens apropriado e que este está devidamente configurado!';
$lang_install['writable'] = 'Pode ser alterado';
$lang_install['not_writable'] = 'Não pode ser alterado';
$lang_install['not_exist'] = 'Não existe';
$lang_install['old_install'] = 'Este é o novo assistente de instalação. Clique %saqui%s se preferir o método clássico de instalação.'; //cpg1.5

}

// ------------------------------------------------------------------------- //
// File keywordmgr.php
// ------------------------------------------------------------------------- //
if (defined('KEYWORDMGR_PHP')) {
$lang_keywordmgr_php['title'] = 'Gerir palavras-chave';
$lang_keywordmgr_php['search'] = 'Procurar';
$lang_keywordmgr_php['keyword_test_search'] = 'Procure por %s numa nova janela';
$lang_keywordmgr_php['keyword_del'] = 'Apagar a palavra-chave %s';
$lang_keywordmgr_php['confirm_delete'] = 'Tem a certeza que pretende apagar a palavra-chave %s de toda a galeria?'; // js-alert
$lang_keywordmgr_php['change_keyword'] = 'Alterar a palavra-chave';
}

// ------------------------------------------------------------------------- //
// File langmgr.php
// ------------------------------------------------------------------------- //
if (defined('LANGMGR_PHP')) {
$lang_langmgr_php['title'] = 'Gestor de línguas';
$lang_langmgr_php['english_language_name'] = 'Inglês';
$lang_langmgr_php['native_language_name'] = 'Nativo';
$lang_langmgr_php['custom_language_name'] = 'Personalizado';
$lang_langmgr_php['language_name'] = 'Nome da língua';
$lang_langmgr_php['language_file'] = 'Ficheiro da língua';
$lang_langmgr_php['flag'] = 'Bandeira';
$lang_langmgr_php['file_available'] = 'Disponível';
$lang_langmgr_php['enabled'] = 'Activo';
$lang_langmgr_php['complete'] = 'Completo';
$lang_langmgr_php['default'] = 'Pré-definido';
$lang_langmgr_php['missing'] = 'em falta';
$lang_langmgr_php['broken'] = 'parece estar corrompido ou inacessível';
$lang_langmgr_php['exists_in_db_and_file'] = 'existe na base de dados com um ficheiro';
$lang_langmgr_php['exists_as_file_only'] = 'existe apenas como ficheiro';
$lang_langmgr_php['pick_a_flag'] = 'Escolha um';
$lang_langmgr_php['replace_x_with_y'] = 'Substitua %s por %s';
$lang_langmgr_php['tanslator_information'] = 'Informação do tradutor';
$lang_langmgr_php['cpg_version'] = 'Versão do Coppermine';
$lang_langmgr_php['hide_details'] = 'Ocultar detalhes';
$lang_langmgr_php['show_details'] = 'Mostrar detalhes';
$lang_langmgr_php['loading'] = 'A carregar';
$lang_langmgr_php['english_missing'] = 'O ficheiro da língua Inglesa está em falta. Tem de o repor imediatamente.';
$lang_langmgr_php['enable_at_least_one'] = 'Tem de activar, pelo menos, uma língua para que a galeria funcione';
$lang_langmgr_php['enable_default'] = 'Escolheu uma língua pré-definida que não está activa. Escolha outra ou active a que escolheu!';
$lang_langmgr_php['available_default'] = 'Escolheu uma língua pré-definida que não está disponível. Escolha outra língua pré-definida!';
$lang_langmgr_php['version_does_not_match'] = 'A versão deste ficheiro não coincide com a versão do Coppermine. Use com cuidado!';
$lang_langmgr_php['no_version'] = 'Não foi possível verificar a versão. è provável que este ficheiro de língua não funcione ou que seja mesmo um ficheiro de língua.';
$lang_langmgr_php['filesize'] = 'Tamanho de ficheiro %s pouco provável';
$lang_langmgr_php['content_missing'] = 'O ficheiro não parece conter os dados necessários, logo, muito provavelmente, não se tratará de um ficheiro de língua.';
$lang_langmgr_php['status'] = 'Estado';
$lang_langmgr_php['default_language'] = 'Língua pré-definida alterada para %s';
}

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //
if (defined('LOGIN_PHP')) {
$lang_login_php['login'] = 'Entrar';
$lang_login_php['enter_login_pswd'] = 'Introduza o seu nome de utilizador e senha para entrar';
$lang_login_php['username'] = 'Nome de utilizador';
$lang_login_php['email'] = 'Endereço de Email'; // cpg1.5
$lang_login_php['both'] = 'Nome de utilizador/Endereço de Email'; // cpg1.5
$lang_login_php['password'] = 'Senha';
$lang_login_php['remember_me'] = 'Lembrar';
$lang_login_php['welcome'] = 'Bem-vindo %s ...';
$lang_login_php['err_login'] = 'Erro no acesso. Tente outra vez.';
$lang_login_php['err_already_logged_in'] = 'Já entrou!';
$lang_login_php['forgot_password_link'] = 'Recuperar senha';
$lang_login_php['cookie_warning'] = 'Aviso: O seu navegador não aceita cookies';
$lang_login_php['send_activation_link'] = 'Perdeu o link de activação?';
$lang_login_php['force_login'] = 'Tem de se autenticar para ver esta página'; // cpg1.5
$lang_login_php['force_login_title'] = 'Autentique-se para continuar'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) {
$lang_logout_php['logout'] = 'Sair';
$lang_logout_php['bye'] = 'Adeus %s ...';
$lang_logout_php['err_not_logged_in'] = 'Não está ligado!'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File minibrowser.php
// ------------------------------------------------------------------------- //
if (defined('MINIBROWSER_PHP')) {
$lang_minibrowser_php['up'] = 'subir um nível';
$lang_minibrowser_php['current_path'] = 'caminho actual';
$lang_minibrowser_php['select_directory'] = 'seleccione uma directoria';
$lang_minibrowser_php['click_to_close'] = 'Clique na imagem para fechar esta janela';
$lang_minibrowser_php['folder'] = 'Pasta'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File mode.php
// ------------------------------------------------------------------------- //
if (defined('MODE_PHP')) {
$lang_mode_php[0] = 'Ocultando o painel de administração...'; // cpg1.5
$lang_mode_php[1] = 'Mostrando o painel de administração...'; // cpg1.5
$lang_mode_php['news_hide'] = 'Ocultando notícias...'; // cpg1.5
$lang_mode_php['news_show'] = 'Mostrando notícias...'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //
if (defined('MODIFYALB_PHP')) {
$lang_modifyalb_php['upd_alb_n'] = 'Actualizar álbum %s';
$lang_modifyalb_php['related_tasks'] = 'Tarefas relacionadas'; // cpg1.5
$lang_modifyalb_php['choose_album'] = 'Escolher álbum'; // cpg1.5
$lang_modifyalb_php['general_settings'] = 'Configurações gerais';
$lang_modifyalb_php['alb_title'] = 'Título do álbum';
$lang_modifyalb_php['alb_cat'] = 'Categoria do álbum';
$lang_modifyalb_php['alb_desc'] = 'Descrição do álbum';
$lang_modifyalb_php['alb_keyword'] = 'Palavras-chave do álbum';
$lang_modifyalb_php['alb_thumb'] = 'Miniatura do álbum';
$lang_modifyalb_php['alb_perm'] = 'Privilégios para este álbum';
$lang_modifyalb_php['can_view'] = 'O álbum pode ser visto por';
$lang_modifyalb_php['can_upload'] = 'Visitantes podem enviar ficheiros';
$lang_modifyalb_php['can_post_comments'] = 'Visitantes podem comentar';
$lang_modifyalb_php['can_rate'] = 'Visitantes podem votar';
$lang_modifyalb_php['user_gal'] = 'Galeria de Utilizador';
$lang_modifyalb_php['my_gal'] = '* A Minha Galeria *'; // cpg 1.5
$lang_modifyalb_php['no_cat'] = '* Nenhuma categoria *';
$lang_modifyalb_php['alb_empty'] = 'O álbum está vazio';
$lang_modifyalb_php['last_uploaded'] = 'Enviado pela última vez';
$lang_modifyalb_php['public_alb'] = 'Toda a gente (álbum público)';
$lang_modifyalb_php['me_only'] = 'Apenas eu';
$lang_modifyalb_php['owner_only'] = 'Apenas o dono do álbum (%s)';
$lang_modifyalb_php['group_only'] = 'Membros do grupo \'%s\'';
$lang_modifyalb_php['err_no_alb_to_modify'] = 'Não pode modificar nenhum álbum da base de dados.';
$lang_modifyalb_php['update'] = 'Actualizar álbum';
$lang_modifyalb_php['reset_album'] = 'Reiniciar álbum';
$lang_modifyalb_php['reset_views'] = 'Reiniciar o contador de visualizações para &quot;0&quot; em %s';
$lang_modifyalb_php['reset_rating'] = 'Reiniciar votações em todos os ficheiros em %s';
$lang_modifyalb_php['delete_comments'] = 'Apagar todos os comentários feitos em %s';
$lang_modifyalb_php['delete_files'] = '%sIrreversivelmente%s, apagar todos os ficheiros em %s';
$lang_modifyalb_php['views'] = 'visualizações';
$lang_modifyalb_php['votes'] = 'votos';
$lang_modifyalb_php['comments'] = 'comentários';
$lang_modifyalb_php['files'] = 'ficheiros';
$lang_modifyalb_php['submit_reset'] = 'gravar alterações';
$lang_modifyalb_php['reset_views_confirm'] = 'Tenho a certeza';
$lang_modifyalb_php['notice1'] = '(*) dependendo das configurações dos %sgrupos%s'; //(do not translate %s!)
$lang_modifyalb_php['can_moderate'] = 'O álbum pode ser moderado por'; // cpg 1.5
$lang_modifyalb_php['admins_only'] = 'Apenas administradores'; // cpg 1.5
$lang_modifyalb_php['alb_password'] = 'Senha do álbum (Nova senha)';
$lang_modifyalb_php['alb_password_hint'] = 'Dica para a senha do álbum';
$lang_modifyalb_php['edit_files'] = 'Editar ficheiros';
$lang_modifyalb_php['parent_category'] = 'Categoria Pai';
$lang_modifyalb_php['thumbnail_view'] = 'Vista de miniatura';
$lang_modifyalb_php['random_image'] = 'Imagem Aleatória'; // cpg 1.5
$lang_modifyalb_php['password_protect'] = 'Proteger este álbum com senha'; //cpg1.5
}

// ------------------------------------------------------------------------- //
// File phpinfo.php
// ------------------------------------------------------------------------- //
if (defined('PHPINFO_PHP')) {
$lang_phpinfo_php['php_info'] = 'PHP info';
$lang_phpinfo_php['explanation'] = 'Isto é resultado da função em PHP <a href="http://www.php.net/phpinfo">phpinfo()</a>, apresentada dentro do Coppermine.';
$lang_phpinfo_php['no_link'] = 'Permitir a outros que veja o seu phpinfo poderá ser um risco de segurança. É por isso que esta página apenas é visível quando está ligado como administrador. Não poderá colocar um link para que outros acedam a esta página pois o acesso ser-lhes-à negado..';
}

// ------------------------------------------------------------------------- //
// File picmgr.php
// ------------------------------------------------------------------------- //
if (defined('PICMGR_PHP')) {
$lang_picmgr_php['pic_mgr'] = 'Gestor de Imagens';
$lang_picmgr_php['confirm_modifs'] = 'Pretende realizar as alterações?'; // cpg1.5 // js-alert
$lang_picmgr_php['no_change'] = 'Não fez qualquer alterações!';
$lang_picmgr_php['no_album'] = '* Nenhum álbum *';
$lang_picmgr_php['explanation_header'] = 'A ordenação personalizada que especificou nesta página apenas será tida em conta se';
$lang_picmgr_php['explanation1'] = 'o administrador definiu "Ordem de ordenação pré-definida para ficheiros" na configuração para "Descendente" ou "Ascendente" (configuração global para todos os utilizadores que não escolheram outro tipo de ordenação individual)';
$lang_picmgr_php['explanation2'] = 'o utilizador escolheu "Descendente" ou "Ascendente" na página de miniaturas (por configuração de utilizador)';
$lang_picmgr_php['change_album'] = 'Se alterar o álbum, as alterações serão perdidas!'; // cpg1.5 // js-alert
$lang_picmgr_php['submit_reminder'] = 'As alterações de ordenação não são guardadas até que clique em &quot;Guardar Alterações&quot;.'; // cpg1.5
}


// ------------------------------------------------------------------------- //
// File pluginmgr.php
// ------------------------------------------------------------------------- //
if (defined('PLUGINMGR_PHP')){
$lang_pluginmgr_php['confirm_uninstall'] = 'Tem a certeza que pretende DESINSTALAR este plugin?';
$lang_pluginmgr_php['confirm_remove'] = 'NOTA: A API de Plugins está desactivada. Pretende REMOVER MANUALMENTE este plugin, ignorando quaisquer acção de limpeza?'; // cpg1.5
$lang_pluginmgr_php['confirm_delete'] = 'Tem a certeza que pretende ELIMINAR este plugin?';
$lang_pluginmgr_php['pmgr'] = 'Gestor de Plugins';
$lang_pluginmgr_php['explanation'] = 'Instalar/desinstalar/gerir plugins.'; // cpg1.5
$lang_pluginmgr_php['plugin_enabled'] = 'API de Plugins activada'; // cpg1.5
$lang_pluginmgr_php['name'] = 'Nome';
$lang_pluginmgr_php['author'] = 'Autor';
$lang_pluginmgr_php['desc'] = 'Descrição';
$lang_pluginmgr_php['vers'] = 'v';
$lang_pluginmgr_php['i_plugins'] = 'Plugins Instalados';
$lang_pluginmgr_php['n_plugins'] = 'Plugins Não Instalados';
$lang_pluginmgr_php['none_installed'] = 'Nenhum Instalado';
$lang_pluginmgr_php['operation'] = 'Operação';
$lang_pluginmgr_php['not_plugin_package'] = 'O ficheiro enviado não é um pacote de plugin.';
$lang_pluginmgr_php['copy_error'] = 'Aconteceu um erro ao copiar o pacote para a directoria de plugins.';
$lang_pluginmgr_php['upload'] = 'Enviar';
$lang_pluginmgr_php['configure_plugin'] = 'Configurar o plugin';
$lang_pluginmgr_php['cleanup_plugin'] = 'Limpar o plugin';
$lang_pluginmgr_php['extra'] = 'Extra'; // cpg1.5
$lang_pluginmgr_php['install_info'] = 'Informação de instalação'; // cpg1.5
$lang_pluginmgr_php['plugin_disabled_note'] = 'Como o API de plugins está desactivado, essa operação não é permitida.'; // cpg1.5
$lang_pluginmgr_php['install'] = 'instalar'; // cpg1.5
$lang_pluginmgr_php['uninstall'] = 'desinstalar'; // cpg1.5
$lang_pluginmgr_php['minimum_requirements_not_met'] = 'Não se verificam os requisitos mínimos'; // cpg1.5
$lang_pluginmgr_php['confirm_version'] = 'Não foi possível determinar os requisitos da versão para este plugin. É geralmente um indicador de que o plugin não foi desenvolvido para esta versão do Coppermine e poderá, por isso, corromper a galeria. Mesmo assim, continuar (não recomendado)??'; // cpg1.5 // js-alert
}

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //
if (defined('RATEPIC_PHP')) {
$lang_rate_pic_php['already_rated'] = 'Desculpe mas já votou neste ficheiro';
$lang_rate_pic_php['rate_ok'] = 'O seu voto foi aceite';
$lang_rate_pic_php['forbidden'] = 'Não pode votar nos seus próprios ficheiros.';
}

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //
if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {
$lang_register_php['disclamer'] = <<< EOT
Apesar dos administradores de {SITE_NAME} tentarem rever e editar, logo que possível, todo e qualquer material questionável, é de todo impossível rever todos os(as) imagens/posts/comentários. Logo, o utilizador terá que garantir que todos os(as) imagens/posts/comentários colocados neste site expressam os pontos de vista e opiniões do autor e não dos administradores.<br />
<br />
Concorda em não colocar nenhum(a) imagem/post/comentário abusivo, obsceno, vulgar, detestável, ameaçador, com cariz sexual ou outro qualquer tipo de material que possa violar a lei. Concorda que o administrador e moderadores do site {SITE_NAME} têm o direito de apagar e editar qualquer conteúdo. <br />
<br />
Este site usa cookies para guardar dados no seu computador pessoal. Estes cookies servem apenas para melhorar o acesso ao site. O endereço de email é apenas usado para confirmar os seus dados de registo e a sua senha.<br />
<br />
Ao clicar em 'Concordo', aceito as regras establecidas nestes termos.
EOT;
$lang_register_php['page_title'] = 'Registo de utilizador';
$lang_register_php['term_cond'] = 'Termos e condições';
$lang_register_php['i_agree'] = 'Concordo';
$lang_register_php['submit'] = 'Submeter Registo';
$lang_register_php['err_user_exists'] = 'O nome de utilizador que escolheu já existe. Por favor escolha outro';
$lang_register_php['err_global_pw'] = 'Código de registo inválido'; // cpg1.5
$lang_register_php['err_global_pass_same'] = 'A sua senha tem que ser diferente do código de registo'; // cpg1.5
$lang_register_php['err_duplicate_email'] = 'O email que seleccionou já se encontra em uso por outro utilizador';
$lang_register_php['err_disclaimer'] = 'Tem de concordar com os termos de serviço'; // cpg1.5
$lang_register_php['enter_info'] = 'Dados de registo';
$lang_register_php['required_info'] = 'Dados obrigatórios';
$lang_register_php['optional_info'] = 'Dados opcionais';
$lang_register_php['username'] = 'Nome de utilizador';
$lang_register_php['password'] = 'Senha';
$lang_register_php['password_again'] = 'Senha (outra vez)';
$lang_register_php['global_registration_pw'] = 'Código de registo'; // cpg1.5
$lang_register_php['email'] = 'Email';
$lang_register_php['location'] = 'Localização';
$lang_register_php['interests'] = 'Interesses';
$lang_register_php['website'] = 'Página Web';
$lang_register_php['occupation'] = 'Profissão';
$lang_register_php['error'] = 'ERRO';
$lang_register_php['confirm_email_subject'] = '%s - Confirmação de registo';
$lang_register_php['information'] = 'Informação';
$lang_register_php['failed_sending_email'] = 'O email de registo não pode ser enviado!';
$lang_register_php['thank_you'] = 'Obrigado por se registar.<br />Foi-lhe enviado um email com instruções para que possa proceder à activação da sua conta.';
$lang_register_php['acct_created'] = 'A sua conta foi criada podendo-se ligar com o seu nome de utilizador e senha';
$lang_register_php['acct_active'] = 'A sua conta está activa podendo-se ligar com o seu nome de utilizador e senha';
$lang_register_php['acct_already_act'] = 'A conta já está activa!';
$lang_register_php['acct_act_failed'] = 'Esta conta não pode ser activada!';
$lang_register_php['err_unk_user'] = 'O utilizador escolhido não existe!';
$lang_register_php['x_s_profile'] = 'Perfil de %s';
$lang_register_php['group'] = 'Grupo';
$lang_register_php['reg_date'] = 'Adicionado';
$lang_register_php['disk_usage'] = 'Utilização do disco';
$lang_register_php['change_pass'] = 'Alterar senha';
$lang_register_php['current_pass'] = 'Senha actual';
$lang_register_php['new_pass'] = 'Nova senha';
$lang_register_php['new_pass_again'] = 'Repita a nova senha';
$lang_register_php['err_curr_pass'] = 'Senha actual errada';
$lang_register_php['change_pass'] = 'Alterar a minha senha';
$lang_register_php['update_success'] = 'O seu perfil foi actualizado';
$lang_register_php['pass_chg_success'] = 'A sua senha foi alterada';
$lang_register_php['pass_chg_error'] = 'A sua senha não foi alterada';
$lang_register_php['notify_admin_email_subject'] = '%s - Notificação de registo';
$lang_register_php['last_uploads'] = 'Último ficheiro enviado'; // cpg1.5

$lang_register_php['last_uploads_detail'] = 'Clique para ver todos os ficheiros enviados de %s'; // cpg1.5
$lang_register_php['last_comments'] = 'Último comentário'; // cpg1.5
$lang_register_php['you'] = 'you'; // cpg1.5
$lang_register_php['last_comments_detail'] = 'Clique para ver todos os comentários de %s'; // cpg1.5
$lang_register_php['notify_admin_email_body'] = 'O novo utilizador "%s" registou-se na sua galeria';
$lang_register_php['pic_count'] = 'Ficheiros enviados';
$lang_register_php['notify_admin_request_email_subject'] = '%s - Pedido de registo';
$lang_register_php['thank_you_admin_activation'] = 'Obrigado.<br />O seu pedido de activação de conta foi enviado ao administrador. Receberá um email logo que esta for aprovada.';
$lang_register_php['acct_active_admin_activation'] = 'A conta está agora activa e um email foi enviado ao utilizador.';
$lang_register_php['notify_user_email_subject'] = '%s - Notificação de activação';
$lang_register_php['delete_my_account'] = 'Apagar a minha conta'; // cpg1.5
$lang_register_php['warning_delete'] = 'Aviso: o processo de apagar a conta é irreversível. Os %sficheiros que enviou%s nos álbuns públicos e %sos seus comentários%s não serão apagados ao apagar a sua conta! No entanto, os ficheiros que enviou para a sua galeria pessoal serão apagados.'; // cpg1.5 // The %s-placeholders mustn't be removed, they will later be replaced by the wrappers for the links
$lang_register_php['i_am_sure'] = 'Tenho a certeza que pretendo apagar a minha conta'; // cpg1.5
$lang_register_php['really_delete'] = 'Tem a certeza que deseja apagar a sua conta?'; // cpg1.5 // js-alert
$lang_register_php['edit_xs_profile'] = 'Editar o perfil de %s'; // cpg1.5
$lang_register_php['edit_my_profile'] = 'Editar o meu perfil'; // cpg1.5
$lang_register_php['none'] = 'nenhum'; // cpg1.5
$lang_register_php['user_name_banned'] = 'O nome de utilizador que escolheu não é permitido. Por favor escolha outro diferente'; // cpg1.5
$lang_register_php['email_address_banned'] = 'Foi banido desta galeria. Não lhe é permitido o registo. Saia por favor!'; // cpg1.5
$lang_register_php['email_warning1'] = 'O endereço de email não pode ficar em branco!'; // cpg1.5
$lang_register_php['email_warning2'] = 'O endereço de email que introduziu não é válido!'; // cpg1.5
$lang_register_php['username_warning1'] = 'O nome de utilizador não pode ficar em branco!'; // cpg1.5
$lang_register_php['username_warning2'] = 'O nome de utilizador tem que ter, pelo menos, 2 caracteres!'; // cpg1.5
$lang_register_php['password_warning1'] = 'A senha tem que ter, pelo menos, 2 caracteres!'; // cpg1.5
$lang_register_php['password_warning2'] = 'O nome de utilizador e a senha têm que ser diferentes!'; // cpg1.5
$lang_register_php['password_verification_warning1'] = 'As duas palavras-passe não são iguais. Por favor, corrija o problema!'; // cpg1.5
$lang_register_php['form_not_submit'] = 'Os dados ainda não foram submetidos - existem erros que terão que ser corrigidos!'; // cpg1.5
$lang_register_php['banned'] = 'Banido!'; // cpg1.5

$lang_register_php['confirm_email'] = <<< EOT
Obrigado por se registar em {SITE_NAME}

Por forma a activar a sua conta com o nome de utilizador "{USER_NAME}", é necessário que clique no link seguinte ou que o copie e o cole no seu navegador.
<a href="{ACT_LINK}">{ACT_LINK}</a>

Respeitosamente,

A administração de {SITE_NAME}

EOT;

$lang_register_approve_email = <<< EOT
Registou-se, na galeria, um novo utilizador com o nome de utilizador "{USER_NAME}".
Por forma a activar a conta, necessita de clicar no link seguinte ou que o copie e o cole no seu navegador.

<a href="{ACT_LINK}">{ACT_LINK}</a>

EOT;

$lang_register_php['activated_email'] = <<< EOT
A sua conta foi aprovada e activada.

Já se poderá ligar em <a href="{SITE_LINK}">{SITE_LINK}</a> usando o seu nome de utilizador "{USER_NAME}"


Respeitosamente,

A administração de {SITE_NAME}

EOT;
}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //
if (defined('REVIEWCOM_PHP')) {
$lang_reviewcom_php['title'] = 'Rever comentários';
$lang_reviewcom_php['no_comment'] = 'Não existem comentários a rever';
$lang_reviewcom_php['n_comm_del'] = '%s comentário(s) eliminados';
$lang_reviewcom_php['n_comm_disp'] = 'Número de comentários a mostrar';
$lang_reviewcom_php['see_prev'] = 'Ver anterior';
$lang_reviewcom_php['see_next'] = 'Ver seguinte';
$lang_reviewcom_php['del_comm'] = 'Eliminar comentários seleccionados';
$lang_reviewcom_php['user_name'] = 'Nome';
$lang_reviewcom_php['date'] = 'Data';
$lang_reviewcom_php['comment'] = 'Comentário';
$lang_reviewcom_php['file'] = 'Ficheiro';
$lang_reviewcom_php['name_a'] = 'Nome de utilizador ascendente';
$lang_reviewcom_php['name_d'] = 'Nome de utilizador descendente';
$lang_reviewcom_php['date_a'] = 'Data ascendente';
$lang_reviewcom_php['date_d'] = 'Data descendente';
$lang_reviewcom_php['comment_a'] = 'Comentário ascendente';
$lang_reviewcom_php['comment_d'] = 'Comentário descendente';
$lang_reviewcom_php['file_a'] = 'Ficheiro ascendente';
$lang_reviewcom_php['file_d'] = 'Ficheiro descendente';
$lang_reviewcom_php['approval_a'] = 'Aprovação ascendente'; // cpg1.5
$lang_reviewcom_php['approval_d'] = 'Aprovação descendente'; // cpg1.5
$lang_reviewcom_php['ip_a'] = 'Endereço IP ascendente'; // cpg1.5
$lang_reviewcom_php['ip_d'] = 'Endereço IP descendente'; // cpg1.5
$lang_reviewcom_php['akismet_a'] = 'Avaliação Akismet (comentários válidos no fundo)'; // cpg1.5
$lang_reviewcom_php['akismet_d'] = 'Avaliação Akismet (comentários válidos no topo)'; // cpg1.5
$lang_reviewcom_php['n_comm_appr'] = '%s comentário(s) aprovado(s)'; // cpg1.5
$lang_reviewcom_php['n_comm_unappr'] = '%s comentário(s) não aprovado(s)'; // cpg1.5
$lang_reviewcom_php['configuration_changed'] = 'Alterada a configuração de aprovações'; // cpg1.5
$lang_reviewcom_php['only_approval'] = 'mostrar apenas comentários à espera de aprovação'; // cpg1.5
$lang_reviewcom_php['approval'] = 'Aprovado'; // cpg1.5
$lang_reviewcom_php['save_changes'] = 'Gravar alterações'; // cpg1.5
$lang_reviewcom_php['n_confirm_delete'] = 'Pretende realmente apagar o(s) comentário(s) seleccionado(s)?'; // cpg1.5
$lang_reviewcom_php['with_selected'] = 'Com os seleccionados'; // cpg1.5
$lang_reviewcom_php['delete'] = 'apagar'; // cpg1.5
$lang_reviewcom_php['approve'] = 'aprovar'; // cpg1.5
$lang_reviewcom_php['disapprove'] = 'marcar como não aprovado'; // cpg1.5
$lang_reviewcom_php['do_nothing'] = 'não fazer nada'; // cpg1.5
$lang_reviewcom_php['comment_approved'] = 'Comentário aprovado'; // cpg1.5
$lang_reviewcom_php['comment_unapproved'] = 'Comentário não aprovado'; // cpg1.5
$lang_reviewcom_php['ban_and_delete'] = 'Expulsar utilizador e apagar comentário(s)'; // cpg1.5
$lang_reviewcom_php['akismet_status'] = 'Akismet disse'; // cpg1.5
$lang_reviewcom_php['is_spam'] = 'é spam'; // cpg1.5
$lang_reviewcom_php['is_not_spam'] = 'não é spam'; // cpg1.5
$lang_reviewcom_php['akismet'] = 'Akismet'; // cpg1.5
$lang_reviewcom_php['akismet_count'] = 'O sistema Akismet encontrou %s mensagens de spam até agora'; // cpg1.5
$lang_reviewcom_php['akismet_test_result'] = 'Resultado do teste para a chave API %s'; // cpg1.5
$lang_reviewcom_php['invalid'] = 'inválido'; // cpg1.5
$lang_reviewcom_php['missing_gallery_url'] = 'Tem de especificar um URL para a galeria na configuração do Coppermine'; // cpg1.5

$lang_reviewcom_php['unable_to_connect'] = 'Incapaz de ligar a akismet.com'; // cpg1.5
$lang_reviewcom_php['not_found'] = 'O URL não foi encontrado. Verifique se a estrutura do site akismet.com não foi alterada.'; // cpg1.5
$lang_reviewcom_php['unknown_error'] = 'Erro desconhecido'; // cpg1.5
$lang_reviewcom_php['error_message'] = 'A mensagem de erro retornada foi'; // cpg1.5
$lang_reviewcom_php['ip_address'] = 'Endereço IP'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File sidebar.php
// ------------------------------------------------------------------------- //
if (defined('SIDEBAR_PHP')) {
$lang_sidebar_php['sidebar'] = 'Barra Lateral'; // cpg1.5
$lang_sidebar_php['install'] = 'instalar'; // cpg1.5
$lang_sidebar_php['install_explain'] = 'De entre os vários métodos inteligentes de aceder rapidamente ao conteúdo do site, fornecemos barras laterais para os navegadores mais comuns usados nos diferentes sistemas operativos. Aqui pode encontrar a informação necessária para instalar, configurar e desinstalar os navegadores suportados.'; // cpg1.5
$lang_sidebar_php['os_browser_detect'] = 'Detectando o sistema operativo e o navegador'; // cpg1.5
$lang_sidebar_php['os_browser_detect_explain'] = 'O script está a tentar detectar a sua versão de sistema operativo e de navegador - aguarde um momento. Se a auto-detecção falhar, pode querer %smostrar%s todas as opções manuais de instalação da barra lateral.'; // cpg1.5
$lang_sidebar_php['mozilla'] = 'Mozilla, Firefox, Netscape 6+, Konqueror 3.2+'; // cpg1.5
$lang_sidebar_php['mozilla_explain'] = 'Se usa o Mozilla 0.9.4 ou mais recente, pode %sadicionar a nossa barra lateral%s. Pode desinstalar esta barra lateral usando a caixa de diálogo "Personalizar Barra Lateral" no Mozilla.'; // cpg1.5
$lang_sidebar_php['ie_mac'] = 'Internet Explorer 5 e mais recentes no Mac OS'; // cpg1.5
$lang_sidebar_php['ie_mac_explain'] = 'Se usa o Internet Explorer 5 ou mais recente no MacOS, %sabra a sua página da barra lateral%s num janela separada. Nessa janela, abra a aba "Page Holder" no lado esquerdo da janela. Clique em "Adicionar". Se o quiser manter para uso futuro, clique em "Favoritos" e seleccione "Adicionar aos Favoritos do Page Holder".'; // cpg1.5
$lang_sidebar_php['ie_win'] = 'Internet Explorer 5 e mais recentes no Windows'; // cpg1.5
$lang_sidebar_php['ie_win_explain'] = 'Se usa o Internet Explorer 5 ou mais recente no Windows, pode adicionar a Barra Lateral à sua barra de links ou pode adicioná-la aos favoritos e clicando nele pode ver a barra no local habitual da sua barra de busca clicando %saqui%s e seleccionando "Adicionar aos Favoritos" no menu. Este link não instala a barra como a sua barra de pesquisa pré-definida, logo não são feitas alterações ao seu sistema.'; // cpg1.5
$lang_sidebar_php['ie7_win'] = 'Internet Explorer 7 no Windows XP/Vista'; // cpg1.5
$lang_sidebar_php['ie7_win_explain'] = 'Se usa o Internet Explorer 7 no Windows, pode adicionar um pop-up à sua barra links ou pode adicioná-la aos favoritos e clicando nela pode ver a barra numa janela pop-up ao clicar com o botão direito do rato %saqui%s e seleccionando "Adicionar aos Favoritos" no menu. Em versões anteriores do IE, era possível adicionar mesmo uma barra lateral, mas no IE7 tal só é possível com hacks complicados no registry. É recomendado que use outro navegador se pretende usar a barra lateral.'; // cpg1.5
$lang_sidebar_php['opera'] = 'Opera 6 e mais recentes'; // cpg1.5
$lang_sidebar_php['opera_explain'] = 'Se está a usar o Opera, pode %sclicar neste link para adicionar a barra lateral%s. Depois marque a opção "Mostrar no Painel". Pode desinstalar a barra lateral clicando com o botão direito do rato na sua aba e escolhendo "Apagar" do menu.'; // cpg1.5
$lang_sidebar_php['additional_options'] = 'Opções adicionais'; // cpg1.5
$lang_sidebar_php['additional_options_explain'] = 'Se tem outro navegador diferente, clique %aqui% para mostar todas as opções de barra lateral disponíveis.'; // cpg1.5
$lang_sidebar_php['cannot_add_sidebar'] = 'A barra lateral não pode ser adicionada! O seu navegador não suporta este método!'; // cpg1.5 // js-alert
$lang_sidebar_php['search'] = 'Procurar'; // cpg1.5
$lang_sidebar_php['reload'] = 'Recarregar'; // cpg1.5
}


// ------------------------------------------------------------------------- //
// File search.php
// ------------------------------------------------------------------------- //
if (defined('SEARCH_PHP')){
$lang_search_php['title'] = 'Pesquisa';
$lang_search_php['submit_search'] = 'Pesquisar';
$lang_search_php['keyword_list_title'] = 'Lista de palavras-chave';
$lang_search_php['keyword_msg'] = 'A lista poderá não estar completa. Esta não inclui palavras de títulos de ficheiros nem de descrições. Tente uma pesquisa completa.';
$lang_search_php['edit_keywords'] = 'Editar palavras-chave';
$lang_search_php['search in'] = 'Pesquisar em:';
$lang_search_php['ip_address'] = 'Endereço IP';
$lang_search_php['imgfields'] = 'Pesquisar imagens';
$lang_search_php['albcatfields'] = 'Pesquisar álbuns e categorias';
$lang_search_php['age'] = 'Idade';
$lang_search_php['newer_than'] = 'Mais de';
$lang_search_php['older_than'] = 'Menos de';
$lang_search_php['days'] = 'dias';
$lang_search_php['all_words'] = 'Todas as palavras (AND)';
$lang_search_php['any_words'] = 'Qualquer das palavras (OR)';
$lang_search_php['regex'] = 'Expressões Regulares';
$lang_search_php['album_title'] = 'Título do Álbum';
$lang_search_php['category_title'] = 'Título da Categoria';
}

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //
if (defined('SEARCHNEW_PHP')) {
$lang_search_new_php['page_title'] = 'Procurar novos ficheiros';
$lang_search_new_php['select_dir'] = 'Seleccionar directório';
$lang_search_new_php['select_dir_msg'] = 'Esta função permite, de forma automática, adicionar os ficheiros que enviou por FTP para o servidor.<br />Seleccione a directoria onde se encontram os ficheiros enviados.';
$lang_search_new_php['no_pic_to_add'] = 'Não há ficheiros a adicionar';
$lang_search_new_php['need_one_album'] = 'Necessita de, pelo menos, um álbum para utilizar esta função';
$lang_search_new_php['warning'] = 'Aviso';
$lang_search_new_php['change_perm'] = 'o script não consegue gravar nesta directoria, tem de mudar os seus privilégios para 755 ou 777 antes de tentar adicionar os ficheiros!';
$lang_search_new_php['target_album'] = '<strong>Colocar os ficheiros do directório  &quot;</strong>%s<strong>&quot; no álbum </strong>%s';
$lang_search_new_php['folder'] = 'Directório';
$lang_search_new_php['image'] = 'ficheiro';
$lang_search_new_php['result'] = 'Resultado';
$lang_search_new_php['dir_ro'] = 'Apenas de leitura. ';
$lang_search_new_php['dir_cant_read'] = 'Impossível ler. ';
$lang_search_new_php['insert'] = 'A adicionar novos ficheiros à galeria';
$lang_search_new_php['list_new_pic'] = 'Lista de novos ficheiros';
$lang_search_new_php['insert_selected'] = 'Adicionar os ficheiros seleccionados';
$lang_search_new_php['no_pic_found'] = 'Não foi encontrado nenhum ficheiro novo';
$lang_search_new_php['be_patient'] = 'Aguarde por favor, o script necessita de tempo para adicionar os ficheiros';
$lang_search_new_php['no_album'] = 'não foi seleccionado nenhum álbum';
$lang_search_new_php['result_icon'] = 'clique para obter detalhes ou para recarregar';
$lang_search_new_php['notes'] = <<< EOT
    <ul>
        <li>%s: o ficheiro foi adicionado com sucesso</li>
        <li>%s: o ficheiro é um duplicado e já existe na base de dados</li>
        <li>%s: não foi possível adicionar o ficheiro, verifique as suas configurações e os privilégios das directorias onde se encontram os ficheiros</li>
        <li>%s: não seleccionou nenhum álbum</li>
        <li>%s: o ficheiro está inacessível ou corrompido</li>
        <li>%s: tipo de ficheiro desconhecido</li>
        <li>%s: o ficheiro é uma imagem GIF</li>
        <li>Se os ícones não aparecerem, clique no ícone do ficheiro não carregado para visualizar o erro produzido pelo código da página</li>
        <li>Se o tempo de navegação expirar, clique no botão de recarregar página</li>
    </ul>
EOT;
// Translator note: Do not translate the %s placeholders - they are being replaced with icons
$lang_search_new_php['check_all'] = 'Marcar Todos';
$lang_search_new_php['uncheck_all'] = 'Desmarcar Todos';
$lang_search_new_php['no_folders'] = 'Ainda não existem directorias dentro da directoria "álbuns". Crie, pelo menos, uma directoria dentro da directoria "álbuns" e envie, para lá e por FTP, os seus ficheiros. Não envie os ficheiros para as directorias "userpics" e "edit". Estas estão reservadas para envios por http e para uso interno.';
$lang_search_new_php['browse_batch_add'] = 'Interface de navegação'; // cpg1.5
$lang_search_new_php['display_thumbs_batch_add'] = 'Mostrar miniaturas de pré-visualização'; // cpg1.5
$lang_search_new_php['edit_pics'] = 'Editar ficheiros';
$lang_search_new_php['edit_properties'] = 'Propriedades do Álbum';
$lang_search_new_php['view_thumbs'] = 'Vista de miniaturas';
$lang_search_new_php['add_more_folder'] = 'Adicionar, em lote, mais ficheiros da directoria %s'; // cpg1.5
}

// ------------------------------------------------------------------------- //
//File send_activation.php
// ------------------------------------------------------------------------- //
if (defined('SEND_ACTIVATION_PHP')) {
$lang_send_activation_php['err_already_logged_in'] = 'Já está autenticado!'; // cpg1.5
$lang_send_activation_php['activation_not_required'] = 'Este site não requer activação por email'; // cpg1.5
$lang_send_activation_php['err_unk_user'] = 'O utilizador seleccionado não existe!'; // cpg1.5
$lang_send_activation_php['resend_act_link'] = 'Reenviar link de activação'; // cpg1.5
$lang_send_activation_php['enter_email'] = 'Introduza o seu endereço de Email'; // cpg1.5
$lang_send_activation_php['submit'] = 'Enviar'; // cpg1.5
$lang_send_activation_php['failed_sending_email'] = 'Falhou o envio do email com o link de activação'; // cpg1.5
$lang_send_activation_php['activation_email_sent'] = 'Foi enviado a %s um email com o link de activação. Verifique o seu email para completar o processo'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File stat_details.php
// ------------------------------------------------------------------------- //

if (defined('STAT_DETAILS_PHP')) {
$lang_stat_details_php['show_hide'] = 'mostrar/ocultar esta coluna';
$lang_stat_details_php['title'] = 'Estatísticas detalhadas'; // cpg1.5
$lang_stat_details_php['vote'] = 'Detalhes de Votos';
$lang_stat_details_php['hits'] = 'Detalhes de Visualizações';
$lang_stat_details_php['stats'] = 'Estatísticas de Votos';
$lang_stat_details_php['users'] = 'Estatísticas de Utilizador';
$lang_stat_details_php['sdate'] = 'Data';
$lang_stat_details_php['rating'] = 'Avaliação';
$lang_stat_details_php['search_phrase'] = 'Procurar frase';
$lang_stat_details_php['referer'] = 'URL de origem';
$lang_stat_details_php['browser'] = 'Navegador';
$lang_stat_details_php['os'] = 'Sistema Operativo';
$lang_stat_details_php['ip'] = 'IP';
$lang_stat_details_php['uid'] = 'Utilizador'; // cpg1.5
$lang_stat_details_php['sort_by_xxx'] = 'Ordenar por %s';
$lang_stat_details_php['ascending'] = 'ascendente';
$lang_stat_details_php['descending'] = 'descendente';
$lang_stat_details_php['internal'] = 'int';
$lang_stat_details_php['close'] = 'fechar';
$lang_stat_details_php['hide_internal_referers'] = 'ocultar as URL de origem internas';
$lang_stat_details_php['date_display'] = 'Data de visualização';
$lang_stat_details_php['records_per_page'] = 'registos por página';
$lang_stat_details_php['submit'] = 'submeter/actualizar';
$lang_stat_details_php['overall_stats'] = 'Estatísticas gerais'; // cpg1.5
$lang_stat_details_php['stats_by_os'] = 'Estatísticas por sistema operativo'; // cpg1.5
$lang_stat_details_php['number_of_hits'] = 'Número de visualizações'; // cpg1.5
$lang_stat_details_php['total'] = 'Total'; // cpg1.5
$lang_stat_details_php['stats_by_browser'] = 'Estatísticas por navegador'; // cpg1.5
$lang_stat_details_php['overall_stats_config'] = 'Configuração geral de estatísticas'; // cpg1.5
$lang_stat_details_php['hit_details'] = 'Manter estatísticas detalhadas de visualizações'; // cpg1.5
$lang_stat_details_php['hit_details_explanation'] = 'Manter estatísticas detalhadas de visualizações'; // cpg1.5
$lang_stat_details_php['vote_details'] = 'Manter estatísticas detalhadas de votações'; // cpg1.5
$lang_stat_details_php['vote_details_explanation'] = 'Manter estatísticas detalhadas de visualizações'; // cpg1.5
$lang_stat_details_php['empty_hits_table'] = 'Limpar todas as estatísticas de visualizações'; // cpg1.5
$lang_stat_details_php['empty_hits_table_confirm'] = 'Tem a certeza que pretende limpar todas as estatísticas de visualizações de toda a galeria? Esta acção não poderá ser desfeita!'; // cpg1.5 // js-alert
$lang_stat_details_php['empty_votes_table'] = 'Limpar todas as estatísticas de votações'; // cpg1.5
$lang_stat_details_php['empty_votes_table_confirm'] = 'Tem a certeza que pretende limpar todas as estatísticas de votações de toda a galeria? Esta acção não poderá ser desfeita!'; // cpg1.5 // js-alert
$lang_stat_details_php['submit'] = 'Gravar'; // cpg1.5
$lang_stat_details_php['upd_success'] = 'A configuração foi actualizada'; // cpg1.5
$lang_stat_details_php['votes'] = 'votos'; // cpg1.5
$lang_stat_details_php['reset_votes_individual'] = 'Reiniciar o(s) voto(s) seleccionado(s)'; // cpg1.5
$lang_stat_details_php['reset_votes_individual_confirm'] = 'Tem a certeza que pretende limpar os votos seleccionados? Esta acção não poderá ser desfeita!'; // cpg1.5
$lang_stat_details_php['back_to_intermediate'] = 'Voltar à vista de ficheiros intermédia'; // cpg1.5
$lang_stat_details_php['records_on_page'] = '%s registos em %s página(s)'; // cpg1.5
$lang_stat_details_php['guest'] = 'Visitante'; // cpg1.5
$lang_stat_details_php['not_implemented'] = 'ainda não implementado'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) {
$lang_upload_php['title'] = 'Enviar imagem';
$lang_upload_php['restrictions'] = 'Restrição'; // cpg1.5
$lang_upload_php['choose_method'] = 'Escolha o método de envio'; // cpg1.5
$lang_upload_php['upload_swf'] = 'Imagens múltiplas - HD Flash - (recomendado)'; // cpg1.5
$lang_upload_php['upload_single'] = 'simples - uma imagem de cada vez'; // cpg1.5
$lang_upload_php['up_instr_1'] = 'Seleccione um álbum da lista';
$lang_upload_php['up_instr_2'] = 'Clique no botão "Navegar" e navegue até ao ficheiro que pretende enviar. Pode escolher vários ficheiros de uma vez usando o CTRL+Clique.';
$lang_upload_php['up_instr_3'] = 'Seleccione mais ficheiros a enviar repetindo o passo 2';
$lang_upload_php['up_instr_4'] = 'Clique no botão "Continuar" depois de todos os ficheiros terem sido enviados (o botão aparecerá quando tiver sido enviado pelo menos um ficheiro).';
$lang_upload_php['up_instr_5'] = 'Será enviado para um formulário onde poderá introduzir detalhes sobre os ficheiros enviados. Após esta ter sido preenchida, submeta o formulário usando o botão "Aplicar alterações" no fundo do formulário.';
$lang_upload_php['restriction_zip'] = 'Os ficheiros ZIP enviados continuarão compactados e não serão extraídos no servidor.';
$lang_upload_php['restriction_filesize'] = 'O tamanho dos ficheiros enviados para o servidor não poderão exceder %s cada.';
$lang_upload_php['reg_instr_1'] = 'Acção inválida para a criação do formulário.';
$lang_upload_php['no_name'] = 'Nome de ficheiro indisponível'; // cpg 1.5
$lang_upload_php['no_tmp_name'] = 'Incapaz de enviar'; // cpg 1.5
$lang_upload_php['no_post'] = 'Ficheiro não enviado por POST.';
$lang_upload_php['forb_ext'] = 'Extensão de ficheiro inválida.';
$lang_upload_php['exc_php_ini'] = 'O tamanho do ficheiro excedeu o permitido pelo php.ini.';
$lang_upload_php['exc_file_size'] = 'O tamanho do ficheiro excedeu o permitido pelo Coppermine.';
$lang_upload_php['partial_upload'] = 'Só se fez um envio parcial.';
$lang_upload_php['no_upload'] = 'Não foram feitos envios.';
$lang_upload_php['unknown_code'] = 'Erro desconhecido no envio.';
$lang_upload_php['impossible'] = 'Impossível mover.';
$lang_upload_php['not_image'] = 'Não é uma imagem/está corrompida';
$lang_upload_php['not_GD'] = 'Não é uma extensão GD.';
$lang_upload_php['pixel_allowance'] = 'A altura e/ou largura da imagem enviada é maior do que a permitida pela galeria.';
$lang_upload_php['failure'] = 'Falhou o envio';
$lang_upload_php['no_place'] = 'O ficheiro anterior não pôde ser colocado.';
$lang_upload_php['max_fsize'] = 'Tamanho de máximo de cada ficheiro: %s';
$lang_upload_php['picture'] = 'Imagem';
$lang_upload_php['pic_title'] = 'Título das Imagem';
$lang_upload_php['description'] = 'Descrição da imagem';
$lang_upload_php['keywords_sel'] = 'Seleccionar palavra-chave';
$lang_upload_php['err_no_alb_uploadables'] = 'Desculpe mas não existem álbuns para onde possa enviar ficheiros.';
$lang_upload_php['close'] = 'Fechar';
$lang_upload_php['no_keywords'] = 'Desculpe, não há palavras-chave disponíveis!';
$lang_upload_php['regenerate_dictionary'] = 'Regenerar dicionário';
$lang_upload_php['allowed_types'] = 'É permitido enviar ficheiros com as seguintes extensões:'; // cpg1.5
$lang_upload_php['allowed_img_types'] = 'Extensão de Imagem: %s'; // cpg1.5
$lang_upload_php['allowed_mov_types'] = 'Extensão de Vídeo: %s'; // cpg1.5
$lang_upload_php['allowed_doc_types'] = 'Extensão de Documento: %s'; // cpg1.5
$lang_upload_php['allowed_snd_types'] = 'Extensão de Áudio: %s'; // cpg1.5
$lang_upload_php['please_wait'] = 'Aguarde enquanto o script está a carregar - pode demorar um bocado'; // cpg1.5
$lang_upload_php['alternative_upload'] = 'Método de envio alternativo'; // cpg1.5
$lang_upload_php['xp_publish_promote'] = 'Se está com um PC a correr o Windows XP/Vista, pode também usar o Assistente de Envio para enviar ficheiros, o qual tem um interface mais fácil de utilizar.'; // cpg1.5
$lang_upload_php['err_js_disabled'] = 'Não foi possível carregar a interface de envio Flash. Tem que ter o JavaScript activo para usufruir da interface Flash.'; // cpg1.5
$lang_upload_php['err_flash_disabled'] = 'A interface de envio está a demorar muito a carregar ou a carga desta falhou. Por favor, garanta que o pluin Flash está activo e que uma versão funcional do Player de Flash está instalada.'; // cpg1.5
$lang_upload_php['err_alternate_method'] = 'Alternativamente pode usar a interface de envio <a href="upload.php?single=1">individual</a>.'; // cpg1.5
$lang_upload_php['err_flash_version'] = 'A interface de envio não foi carregada. Poderá ter que instalar ou actualizar o Player Flash. Visite o <a href="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash">site da Adobe</a> para obter o Flash Player.'; // cpg1.5
$lang_upload_php['flash_loading'] = 'A interface de envio está a carregar. Por favor, espere um momento...'; // cpg1.5

$lang_upload_swf_php['browse'] = 'Procurar...'; //cpg1.5
$lang_upload_swf_php['cancel_all'] = 'Cancelar todos os envios'; //cpg1.5
$lang_upload_swf_php['upload_queue'] = 'Fila de envio'; //cpg1.5
$lang_upload_swf_php['files_uploaded'] = 'ficheiros enviados'; //cpg1.5
$lang_upload_swf_php['all_files'] = 'Todos os ficheiros'; //cpg1.5
$lang_upload_swf_php['status_pending'] = 'Pendente...'; //cpg1.5
$lang_upload_swf_php['status_uploading'] = 'A enviar...'; //cpg1.5
$lang_upload_swf_php['status_complete'] = 'Terminado.'; //cpg1.5
$lang_upload_swf_php['status_cancelled'] = 'Cancelado.'; //cpg1.5
$lang_upload_swf_php['status_stopped'] = 'Parado.'; //cpg1.5
$lang_upload_swf_php['status_failed'] = 'Falhou o envio.'; //cpg1.5
$lang_upload_swf_php['status_too_big'] = 'Ficheiro grande demais.'; //cpg1.5
$lang_upload_swf_php['status_zero_byte'] = 'Impossível enviar ficheiro com 0 bytes.'; //cpg1.5
$lang_upload_swf_php['status_invalid_type'] = 'Tipo de Ficheiro Inválido.'; //cpg1.5
$lang_upload_swf_php['status_unhandled'] = 'Erro desconhecido'; //cpg1.5
$lang_upload_swf_php['status_upload_error'] = 'Erro de envio: '; //cpg1.5
$lang_upload_swf_php['status_server_error'] = 'Erro (IO) no servidor'; //cpg1.5
$lang_upload_swf_php['status_security_error'] = 'Erro de segurança'; //cpg1.5
$lang_upload_swf_php['status_upload_limit'] = 'Limite de envio ultrapassado.'; //cpg1.5
$lang_upload_swf_php['status_validation_failed'] = 'Erro de validação. Envio cancelado.'; //cpg1.5
$lang_upload_swf_php['queue_limit'] = 'Tentou agendar demasiados ficheiros.'; //cpg1.5
$lang_upload_swf_php['upload_limit_1'] = 'Atingiu o limite de envio.'; //cpg1.5
$lang_upload_swf_php['upload_limit_2'] = 'Pode seleccionar até %s ficheiro(s)'; //cpg1.5
}
// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //
if (defined('USERMGR_PHP')) {
$lang_usermgr_php['memberlist'] = 'Lista de utilizadores';
$lang_usermgr_php['user_manager'] = 'Gestor de utilizadores';
$lang_usermgr_php['title'] = 'Gerir utilizadores';
$lang_usermgr_php['name_a'] = 'Nome ascendente';
$lang_usermgr_php['name_d'] = 'Nome descendente';
$lang_usermgr_php['group_a'] = 'Grupo ascendente';
$lang_usermgr_php['group_d'] = 'Grupo descendente';
$lang_usermgr_php['reg_a'] = 'Data de registo ascendente';
$lang_usermgr_php['reg_d'] = 'Data de registo descendente';
$lang_usermgr_php['pic_a'] = 'Número de ficheiros ascendente';
$lang_usermgr_php['pic_d'] = 'Número de ficheiros descendente';
$lang_usermgr_php['disku_a'] = 'Uso de disco ascendente';
$lang_usermgr_php['disku_d'] = 'Uso de disco descendente';
$lang_usermgr_php['lv_a'] = 'Última visita ascendente';
$lang_usermgr_php['lv_d'] = 'Última visita descendente';
$lang_usermgr_php['sort_by'] = 'Ordenar utilizadores por';
$lang_usermgr_php['err_no_users'] = 'A tabela de utilizadores está vazia!';
$lang_usermgr_php['err_edit_self'] = 'Não pode editar o seu próprio perfil, use o link \'O Meu Perfil\' para tal';
$lang_usermgr_php['with_selected'] = 'Com os seleccionados:';
$lang_usermgr_php['delete_files_no'] = 'Manter os ficheiros públicos (tornando anónimos)';
$lang_usermgr_php['delete_files_yes'] = 'apagar também os ficheiros públicos';
$lang_usermgr_php['delete_comments_no'] = 'manter comentários (tornando anónimos)';
$lang_usermgr_php['delete_comments_yes'] = 'também apagar os comentários';
$lang_usermgr_php['activate'] = 'Activar';
$lang_usermgr_php['deactivate'] = 'Desactivar';
$lang_usermgr_php['reset_password'] = 'Alterar a senha';
$lang_usermgr_php['change_primary_membergroup'] = 'Alterar o grupo primário';
$lang_usermgr_php['add_secondary_membergroup'] = 'Adicionar grupo secundário';
$lang_usermgr_php['name'] = 'Nome de utilizador';
$lang_usermgr_php['group'] = 'Grupo';
$lang_usermgr_php['inactive'] = 'Inactivo';
$lang_usermgr_php['operations'] = 'Operações';
$lang_usermgr_php['pictures'] = 'Ficheiros';
$lang_usermgr_php['disk_space_used'] = 'Espaço utilizado';
$lang_usermgr_php['disk_space_quota'] = 'Quota'; // cpg1.5
$lang_usermgr_php['registered_on'] = 'Registo';
$lang_usermgr_php['last_visit'] = 'Última visita';
$lang_usermgr_php['u_user_on_p_pages'] = '%d utilizadores em %d página(s)';
$lang_usermgr_php['confirm_del'] = 'Tem a certeza que pretende ELIMINAR este utilizador?\\nTambém serão eliminados todos os seus ficheiros e álbuns.'; // js-alert
$lang_usermgr_php['mail'] = 'MAIL';
$lang_usermgr_php['err_unknown_user'] = 'O utilizador seleccionado não existe!';
$lang_usermgr_php['modify_user'] = 'Alterar utilizador';
$lang_usermgr_php['notes'] = 'Notas';
$lang_usermgr_php['note_list'] = 'Se não pretende alterar a senha actual, deixe o campo "Senha" em branco';
$lang_usermgr_php['password'] = 'Senha';
$lang_usermgr_php['user_active'] = 'O utilizador está activo';
$lang_usermgr_php['user_group'] = 'Grupo de utilizador';
$lang_usermgr_php['user_email'] = 'E-mail';
$lang_usermgr_php['user_web_site'] = 'Website';
$lang_usermgr_php['create_new_user'] = 'Criar novo utilizador';
$lang_usermgr_php['user_location'] = 'Localização';
$lang_usermgr_php['user_interests'] = 'Interesses';
$lang_usermgr_php['user_occupation'] = 'Profissão';
$lang_usermgr_php['user_profile1'] = '$user_profile1';
$lang_usermgr_php['user_profile2'] = '$user_profile2';
$lang_usermgr_php['user_profile3'] = '$user_profile3';
$lang_usermgr_php['user_profile4'] = '$user_profile4';
$lang_usermgr_php['user_profile5'] = '$user_profile5';
$lang_usermgr_php['user_profile6'] = '$user_profile6';
$lang_usermgr_php['latest_upload'] = 'Envios recentes';
$lang_usermgr_php['no_latest_upload'] = 'Não enviou nenhum ficheiro'; // cpg1.5
$lang_usermgr_php['last_comments'] = 'Últimos comentários'; // cpg1.5
$lang_usermgr_php['no_last_comments'] = 'Não fez comentários'; // cpg1.5
$lang_usermgr_php['comments'] = 'Comentários'; // cpg1.5
$lang_usermgr_php['never'] = 'nunca';
$lang_usermgr_php['search'] = 'Procura de utilizadores';
$lang_usermgr_php['submit'] = 'Enviar';
$lang_usermgr_php['search_submit'] = 'Procurar!';
$lang_usermgr_php['search_result'] = 'Procurar resultados por: ';
$lang_usermgr_php['alert_no_selection'] = 'Primeiro tem que seleccionar pelo menos um utilizador!'; // js-alert
$lang_usermgr_php['select_group'] = 'Seleccione o grupo';
$lang_usermgr_php['groups_alb_access'] = 'Privilégios do Álbum por grupo';
$lang_usermgr_php['category'] = 'Categoria';
$lang_usermgr_php['modify'] = 'Alterar?';
$lang_usermgr_php['group_no_access'] = 'Este grupo não tem acesso especial';
$lang_usermgr_php['notice'] = 'Tenha em consideração';
$lang_usermgr_php['group_can_access'] = 'Álbum(s) a que apenas "%s" pode aceder';
$lang_usermgr_php['send_login_data'] = 'Enviar dados de acesso a este utilizador (A senha será enviada via e-mail)'; // cpg1.5
$lang_usermgr_php['send_login_email_subject'] = 'Dados da sua nova conta'; // cpg1.5
$lang_usermgr_php['failed_sending_email'] = 'Os dados de acesso não podem ser enviados!'; // cpg1.5
$lang_usermgr_php['view_profile'] = 'Ver perfil'; // cpg1.5
$lang_usermgr_php['edit_profile'] = 'Editar perfil'; // cpg1.5
$lang_usermgr_php['ban_user'] = 'Expulsar utilizador'; // cpg1.5
$lang_usermgr_php['user_is_banned'] = 'Utilizador banido'; // cpg1.5
$lang_usermgr_php['status'] = 'Estado'; // cpg1.5
$lang_usermgr_php['status_active'] = 'activo'; // cpg1.5
$lang_usermgr_php['status_inactive'] = 'inactivo'; // cpg1.5
$lang_usermgr_php['total'] = 'Total'; // cpg1.5
$lang_usermgr_php['send_login_data_email'] = <<< EOT
Uma nova conta de utilizador foi criada em {SITE_NAME}.

Já se poderá ligar em <a href="{SITE_LINK}">{SITE_LINK}</a> usando o nome de utilizador "{USER_NAME}" e a senha "{USER_PASS}"


Respeitosamente,

A Administração de {SITE_NAME}

EOT;
}

// ------------------------------------------------------------------------- //
// File update.php
// ------------------------------------------------------------------------- //
if (defined('UPDATE_PHP')) {
$lang_update_php['title'] = 'Actualizador'; // cpg1.5
$lang_update_php['welcome_updater'] = 'Bem-vindo à actualização do Coppermine'; // cpg1.5
$lang_update_php['could_not_authenticate'] = 'Não foi possível verificar a sua identidade'; // cpg1.5
$lang_update_php['provide_admin_account'] = 'Forneça as suas credenciais de administrador do Coppermine ou os dados de acesso à conta de MySQL'; // cpg1.5
$lang_update_php['try_again'] = 'Tente outra vez'; // cpg1.5
$lang_update_php['mysql_connect_error'] = 'Não foi possível estabelecer uma ligação ao MySQL'; // cpg1.5
$lang_update_php['mysql_database_error'] = 'O MySQL não conseguiu encontrar uma base de dados denominada  %s'; // cpg1.5
$lang_update_php['mysql_said'] = 'MySQL indica'; // cpg1.5
$lang_update_php['check_config_file'] = 'Verifique os detalhes do MySQL em %s'; // cpg1.5
$lang_update_php['performing_database_updates'] = 'A efectuar as actualizações de base de dados'; // cpg1.5
$lang_update_php['performing_file_updates'] = 'A efectuar as actualizações de ficheiros'; // cpg1.5
$lang_update_php['already_done'] = 'Já está realizado'; // cpg1.5
$lang_update_php['password_encryption'] = 'Encriptação de senhas'; // cpg1.5
$lang_update_php['alb_password_encryption'] = 'Encriptação de senhas de álbuns'; // cpg1.5
$lang_update_php['category_tree'] = 'Árvore de categorias'; // cpg1.5
$lang_update_php['authentication_needed'] = 'É necessária autenticação'; // cpg1.5
$lang_update_php['username'] = 'Nome de utilizador'; // cpg1.5
$lang_update_php['password'] = 'Senha'; // cpg1.5
$lang_update_php['update_completed'] = 'Actualização terminada'; // cpg1.5
$lang_update_php['check_versions'] = 'É recomendado %sverificar as versões dos ficheiros%s se acabou de actualizar de uma versão anterior do Coppermine'; // cpg1.5 // Leave the %s untouched when translating - it wraps the link
$lang_update_php['start_page'] = 'Se não for o caso (ou não pretende verificar), pode aceder à %spágina principal da galeria%s%s'; // cpg1.5 // Leave the %s untouched when translating - it wraps the link
$lang_update_php['errors_encountered'] = 'Foram encontrados os seguintes erros que têm que ser corrigidos primeiro'; // cpg1.5
$lang_update_php['delete_file'] = 'Eliminar %s'; // cpg1.5
$lang_update_php['could_not_delete'] = 'Não foi possível eliminar por falta de privilégios. Elimine o ficheiro manualmente!'; // cpg1.5
$lang_update_php['rename_file'] = 'Renomear %s para %s'; // cpg1.5
$lang_update_php['could_not_rename'] = 'Não foi possível renomear por falta de privilégios. Renomeie o ficheiro manualmente!'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //
if (defined('UTIL_PHP')) {
$lang_util_php['title'] = 'Ferramentas administrativas'; // cpg1.5
$lang_util_php['file'] = 'Ficheiro';
$lang_util_php['problem'] = 'Problema';
$lang_util_php['status'] = 'Estado';
$lang_util_php['title_set_to'] = 'Titulo definido para';
$lang_util_php['submit_form'] = 'Submeter';
$lang_util_php['titles_updated'] = '%s Títulos Actualizados.'; // cpg1.5
$lang_util_php['updated_successfully'] = 'actualizado com sucesso'; // cpg1.5
$lang_util_php['error_create'] = 'ERRO ao criar';
$lang_util_php['continue'] = 'Processar mais ficheiros'; // cpg1.5
$lang_util_php['main_success'] = 'O ficheiro %s foi usado como ficheiro principal';
$lang_util_php['error_rename'] = 'Erro ao renomear %s para %s';
$lang_util_php['error_not_found'] = 'O ficheiro %s não foi encontrado';
$lang_util_php['back'] = 'voltar ao início de ferramentas administrativas'; // cpg1.5
$lang_util_php['thumbs_wait'] = 'Actualizando miniaturas e/ou redimensionando imagens. Aguarde, por favor...';
$lang_util_php['thumbs_continue_wait'] = 'Continuando a actualizar miniaturas e/ou redimensionando imagens...';
$lang_util_php['titles_wait'] = 'Actualizando títulos, aguarde...';
$lang_util_php['delete_wait'] = 'Eliminando títulos, aguarde...';
$lang_util_php['replace_wait'] = 'Eliminando originais e substituindo-as por imagens redimensionadas, aguarde...';
$lang_util_php['update'] = 'Actualizar miniaturas e/ou imagens redimensionadas';
$lang_util_php['update_what'] = 'O que tem de ser actualizado';
$lang_util_php['update_thumb'] = 'Apenas miniaturas';
$lang_util_php['update_pic'] = 'Apenas imagens redimensionadas';
$lang_util_php['update_both'] = 'Ambas as miniaturas e as imagens redimensionadas';
$lang_util_php['update_number'] = 'Número de imagens processadas por clique';
$lang_util_php['update_option'] = '(Experimente baixar este parâmetro se tiver problemas de timeout)';
$lang_util_php['update_missing'] = 'Actualizar apenas ficheiros em falta'; // cpg1.5
$lang_util_php['filename_title'] = 'Nome do ficheiro &rArr; Título do ficheiro';
$lang_util_php['filename_how'] = 'Como se deve modificar o título do ficheiro';
$lang_util_php['filename_remove'] = 'Eliminar extensão (.jpg ou outra) e substituir _ (underscores) por espaços'; // cpg1.5
$lang_util_php['filename_euro'] = 'Alterar 2003_11_23_13_20_20.jpg para 23/11/2003 13:20';
$lang_util_php['filename_us'] = 'Alterar 2003_11_23_13_20_20.jpg para 11/23/2003 13:20';
$lang_util_php['filename_time'] = 'Alterar 2003_11_23_13_20_20.jpg para 13:20';
$lang_util_php['notitle'] = 'Aplicar apenas a ficheiros sem título'; // cpg1.5
$lang_util_php['delete_title'] = 'Eliminar títulos dos ficheiros';
$lang_util_php['delete_title_explanation'] = 'Isto eliminará todos os títulos nos ficheiros do álbum que especificar.';
$lang_util_php['delete_original'] = 'Eliminar as imagens de tamanho original';
$lang_util_php['delete_original_explanation'] = 'Isto eliminará as imagens de tamanho original.';
$lang_util_php['delete_intermediate'] = 'Eliminar imagens intermédias';
$lang_util_php['delete_intermediate_explanation1'] = 'Isto irá eliminar as imagens intermédias.'; // cpg1.5
$lang_util_php['delete_intermediate_explanation2'] = 'Use isto para libertar espaço se desactivou \'Criar imagens intermédias\' na configuração após adicionar imagens.'; // cpg1.5
$lang_util_php['delete_intermediate_check'] = 'A opção de configuração \'Criar imagens intermédias\' está actualmente %s.'; // cpg1.5
$lang_util_php['no_image'] = '%s foi ignorado porque não é uma imagem.'; // cpg1.5
$lang_util_php['enabled'] = 'activo'; // cpg1.5
$lang_util_php['disabled'] = 'inactivo'; // cpg1.5
$lang_util_php['delete_replace'] = 'Elimine as imagens originais substituindo-as pelas imagens redimensionadas';
$lang_util_php['titles_deleted'] = 'Todos os títulos, no álbum especificado, removidos';
$lang_util_php['deleting_intermediates'] = 'A eliminar imagens intermédias, aguarde...';
$lang_util_php['searching_orphans'] = 'A procura de órfãos, aguarde...';
$lang_util_php['delete_orphans'] = 'Eliminar comentários de ficheiros inexistentes';
$lang_util_php['delete_orphans_explanation'] = 'Isto irá identificar e permitir a eliminação de quaisquer comentários associados a ficheiros inexistentes.<br />Seleccione todos os álbuns.';
$lang_util_php['update_full_normal_thumb'] = 'Tudo: tamanho real, redimensionado e miniaturas'; // cpg1.5
$lang_util_php['update_full_normal'] = 'Ambos os de tamanho real como os redimensionados (se a original estiver disponível)'; // cpg1.5
$lang_util_php['update_full'] = 'Apenas de tamanho real (se a original estiver disponível)'; // cpg1.5
$lang_util_php['delete_back'] = 'Eliminar o backup da imagem original usada para as imagens com marca-de-água'; // cpg1.5
$lang_util_php['delete_back_explanation'] = 'Isto eliminará o backup da imagem. Ganhará algum espaço em disco mas não poderá desfazer a marca-de-água!!! A marca-de-água ficará permanente.'; // cpg1.5
$lang_util_php['finished'] = '<br />Terminada a actualização de miniaturas/imagens!<br />'; // cpg1.5
$lang_util_php['autorefresh'] = 'Recarregar automático (não será mais necessário clicar no botão continuar)'; // cpg1.5
$lang_util_php['refresh_db'] = 'Recarregar o tamanho e dimensões do ficheiro.';
$lang_util_php['refresh_db_explanation'] = 'Isto irá reler o tamanho e dimensões dos ficheiros. Use se a quota for incorrecta ou se alterou os ficheiros manualmente.';
$lang_util_php['reset_views'] = 'Colocar a zero o contador de visualizações';
$lang_util_php['reset_views_explanation'] = 'Colocar a zero todos os contadores de visualizações de ficheiros no álbum especificado.';
$lang_util_php['reset_success'] = 'Reinicialização com sucesso'; // cpg1.5
$lang_util_php['orphan_comment'] = 'encontrados comentários orfãos';
$lang_util_php['delete_all'] = 'Eliminar todos';
$lang_util_php['delete_all_orphans'] = 'Eliminar todos os orfãos?';
$lang_util_php['comment'] = 'Comentário: ';
$lang_util_php['nonexist'] = 'associado ao ficheiro inexistente  # ';
$lang_util_php['delete_old'] = 'Eliminar ficheiros mais antigos que um dado número de dias'; // cpg1.5
$lang_util_php['delete_old_explanation'] = 'Isto irá eliminar ficheiros mais antigos que o número de dias que especificou (tamanho real, intermédia, miniatura). Use esta função para libertar espaço em disco.'; // cpg1.5
$lang_util_php['delete_old_warning'] = 'Aviso: os ficheiros que especificou serão eliminados de vez sem mais avisos!'; // cpg1.5
$lang_util_php['deleting_old'] = 'A eliminar ficheiros antigos, aguarde...'; // cpg1.5
$lang_util_php['older_than'] = 'Eliminar ficheiros com mais de %s dias'; // cpg1.5
$lang_util_php['del_orig'] = 'O ficheiro original %s foi eliminado com sucesso'; // cpg1.5
$lang_util_php['del_intermediate'] = 'A imagem intermédia %s foi eliminada com sucesso'; // cpg1.5
$lang_util_php['del_thumb'] = 'A miniatura %s foi eliminada com sucesso'; // cpg1.5
$lang_util_php['del_error'] = 'Erro ao eliminar %s!'; // cpg1.5
$lang_util_php['affected_records'] = '%s registos afectados.'; // cpg1.5
$lang_util_php['all_albums'] = 'Todos os Álbuns'; // cpg1.5
$lang_util_php['update_result'] = 'Resultados da actualização'; // cpg1.5
$lang_util_php['incorrect_filesize'] = 'Tamanho total dos ficheiros incorrecto'; // cpg1.5
$lang_util_php['database'] = 'Base de dados: '; // cpg1.5
$lang_util_php['bytes'] = ' bytes'; // cpg1.5
$lang_util_php['actual'] = 'Actual: '; // cpg1.5
$lang_util_php['updated'] = 'Actualizado'; // cpg1.5
$lang_util_php['filesize_error'] = 'Não foi possível obter o tamanho do ficheiro (pode ser um ficheiro inválido), ignorando...'; // cpg1.5
$lang_util_php['skipped'] = 'Ignorado'; // cpg1.5
$lang_util_php['incorrect_dimension'] = 'Dimensões incorrectas'; // cpg1.5
$lang_util_php['dimension_error'] = 'Não foi possível obter dimensões da imagem, ignorando...'; // cpg1.5
$lang_util_php['cannot_fix'] = 'Não foi possível reparar'; // cpg1.5
$lang_util_php['fullpic_error'] = 'O ficheiro %s não existe!'; // cpg1.5
$lang_util_php['no_prob_detect'] = 'Não foram detectados problemas'; // cpg1.5
$lang_util_php['no_prob_found'] = 'Não foram encontrados problemas.'; // cpg1.5
$lang_util_php['keyword_convert'] = 'Converter o separador de palavras-chave'; // cpg1.5
$lang_util_php['keyword_from_to'] = 'Converter o separador de palavras-chave de %s para %s'; // cpg1.5
$lang_util_php['keyword_set'] = 'Definir um novo valor ao separador de palavras-chave da galeria'; // cpg1.5
$lang_util_php['keyword_replace_before'] = 'Antes da conversão, substituir %s por %s'; // cpg1.5
$lang_util_php['keyword_replace_after'] = 'Após a conversão, substituir %s por %s'; // cpg1.5
$lang_util_php['keyword_replace_values'] = array('_'=>'underscore', '-'=>'hífen', '~'=>'til'); // cpg1.5
$lang_util_php['keyword_explanation'] = 'Isto irá converter o separador de palavras-chave para todos os seus ficheiros, de um valor para outro. Veja a documentação de ajuda para mais detalhes.'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File versioncheck.php
// ------------------------------------------------------------------------- //
if (defined('VERSIONCHECK_PHP')) {
$lang_versioncheck_php['title'] = 'Verificar Versão';
$lang_versioncheck_php['versioncheck_output'] = 'Saída da verificação de versão';
$lang_versioncheck_php['file'] = 'ficheiro';
$lang_versioncheck_php['folder'] = 'directoria';
$lang_versioncheck_php['outdated'] = 'mais antigo que %s';
$lang_versioncheck_php['newer'] = 'mais novo que %s';
$lang_versioncheck_php['modified'] = 'alterado';
$lang_versioncheck_php['not_modified'] = 'inalterado'; // cpg1.5
$lang_versioncheck_php['needs_change'] = 'necessita de alteração';
$lang_versioncheck_php['review_permissions'] = 'Rever Privilégios';
$lang_versioncheck_php['inaccessible'] = 'Impossível aceder ao ficheiro';
$lang_versioncheck_php['review_version'] = 'O ficheiro está desactualizado';
$lang_versioncheck_php['review_dev_version'] = 'O ficheiro é mais novo do que o esperado';
$lang_versioncheck_php['review_modified'] = 'O ficheiro pode estar corrompido (ou foi deliberadamente alterado)';
$lang_versioncheck_php['review_missing'] = '%s em falta ou inacessível';
$lang_versioncheck_php['existing'] = 'existente';
$lang_versioncheck_php['review_removed_existing'] = 'O ficheiro tem que ser removido por motivos de segurança';
$lang_versioncheck_php['counter'] = 'Contador';
$lang_versioncheck_php['type'] = 'Tipo';
$lang_versioncheck_php['path'] = 'Caminho';
$lang_versioncheck_php['missing'] = 'Em falta';
$lang_versioncheck_php['permissions'] = 'Privilégios';
$lang_versioncheck_php['version'] = 'Versão';
$lang_versioncheck_php['revision'] = 'Revisão';
$lang_versioncheck_php['modified'] = 'Modificado';
$lang_versioncheck_php['comment'] = 'Comentário';
$lang_versioncheck_php['help'] = 'Ajuda';
$lang_versioncheck_php['repository_link'] = 'Link para o repositório';
$lang_versioncheck_php['browse_corresponding_page_subversion'] = 'Abrir, no navegador, a página correspondente ao ficheiro no repositório do projecto';
$lang_versioncheck_php['mandatory'] = 'obrigatório';
$lang_versioncheck_php['mandatory_missing'] = 'Ficheiro obrigatório em falta'; // cpg1.5
$lang_versioncheck_php['optional'] = 'opcional';
$lang_versioncheck_php['removed'] = 'removido'; // cpg1.5
$lang_versioncheck_php['options'] = 'Opções';
$lang_versioncheck_php['display_output'] = 'Mostrar saída';
$lang_versioncheck_php['on_screen'] = 'Ecrã Completo';
$lang_versioncheck_php['text_only'] = 'Apenas texto';
$lang_versioncheck_php['errors_only'] = 'Mostrar apenas potenciais erros';
$lang_versioncheck_php['hide_images'] = 'Ocultar imagens'; // cpg1.5
$lang_versioncheck_php['no_modification_check'] = 'Não verificar os ficheiros alterados'; // cpg1.5
$lang_versioncheck_php['do_not_connect_to_online_repository'] = 'Não se ligar ao repositório online';
$lang_versioncheck_php['online_repository_explain'] = 'apenas recomendado se a ligação falhar';
$lang_versioncheck_php['submit'] = 'submeter/actualizar';
$lang_versioncheck_php['select_all'] = 'Seleccionar tudo'; // js-alert
$lang_versioncheck_php['files_folder_processed'] = 'A mostrar %s itens de %s directorias/ficheiros processados com %s potenciais problemas';
$lang_versioncheck_php['read'] = 'Ler'; // cpg1.5
$lang_versioncheck_php['write'] = 'Escrever'; // cpg1.5
$lang_versioncheck_php['warning'] = 'Aviso'; // cpg1.5
$lang_versioncheck_php['not_applicable'] = 'n/a'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File view_log.php
// ------------------------------------------------------------------------- //
if (defined('VIEWLOG_PHP')) {
$lang_viewlog_php['delete_all'] = 'Apagar Todos os Logs';
$lang_viewlog_php['delete_this'] = 'Apagar Este Log';
$lang_viewlog_php['view_logs'] = 'Ver Logs';
$lang_viewlog_php['no_logs'] = 'Não foram criados logs.';
$lang_viewlog_php['last_updated'] = 'última actualização'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File xp_publish.php
// ------------------------------------------------------------------------- //
if (defined('XP_PUBLISH_PHP')) {
$lang_xp_publish_php['title'] = 'Assistente de Publicação na Web do XP';
$lang_xp_publish_php['client_header'] = 'Cliente de Assistente de Publicação na Web do XP'; // cpg1.5
$lang_xp_publish_php['requirements'] = 'Requisitos'; // cpg1.5
$lang_xp_publish_php['windows_xp'] = 'Windows XP/Vista'; // cpg1.5
$lang_xp_publish_php['no_windows_xp'] = 'Parece que está a executar um sistema operativo não suportado'; // cpg1.5
$lang_xp_publish_php['no_os_detect'] = 'Não foi possível detectar o seu sistema operativo'; // cpg1.5
$lang_xp_publish_php['requirement_http_upload'] = 'Uma instalação funcional do Coppermine na qual a função de envio de http funciona perfeitamente'; // cpg1.5
$lang_xp_publish_php['requirement_ie'] = 'Microsoft Internet Explorer'; // cpg1.5
$lang_xp_publish_php['requirement_permissions'] = 'O administrador da galeria deve lhe ter fornecido privilégios de envio de ficheiros'; // cpg1.5
$lang_xp_publish_php['requirement_login'] = 'Tem que estar autenticado para que possa enviar ficheiros'; // cpg1.5
$lang_xp_publish_php['no_ie'] = 'Parece estar a utilizar um navegador não suportado'; // cpg1.5
$lang_xp_publish_php['no_browser_detect'] = 'Não foi possível detectar qual o seu navegador'; // cpg1.5
$lang_xp_publish_php['no_gallery_name'] = 'Tem de especificar um nome da galeria na configuração'; // cpg1.5
$lang_xp_publish_php['no_gallery_description'] = 'Tem de especificar uma descrição da galeria na configuração'; // cpg1.5
$lang_xp_publish_php['howto_install'] = 'Como instalar'; // cpg1.5
$lang_xp_publish_php['install_right_click'] = 'Clique com o botão direito do rato %sneste link%s e seleccione &quot;guardar destino como...&quot;'; // cpg1.5 // translator note: don't replace the %s - that placeholder token needs to go untranslated
$lang_xp_publish_php['install_save'] = 'Grave o ficheiro no seu PC. Ao gravar o ficheiro, verifique se o seu nome é <tt>cpg_###.reg</tt> (os ### representam um código horário). Altere-o para esse nome se necessário (deixe os números)'; // cpg1.5
$lang_xp_publish_php['install_execute'] = 'Após conclusão do download, execute o ficheiro com um duplo clique por forma a registar o site do Coopermine no assistente de publicação na web do XP'; // cpg1.5
$lang_xp_publish_php['usage'] = 'Uso'; // cpg1.5
$lang_xp_publish_php['select_files'] = 'No Explorador do Windows, seleccione os ficheiros que pretende enviar'; // cpg1.5
$lang_xp_publish_php['display_tasks'] = 'Verifique se as directorias não estão a ser apresentadas na barra esquerda da janela do explorador'; // cpg1.5
$lang_xp_publish_php['publish_on_the_web'] = 'clique em &quot;Publicar xxx na web&quot; no painel esquerdo'; // cpg1.5
$lang_xp_publish_php['confirm_selection'] = 'Confirme a selecção de ficheiros que fez'; // cpg1.5
$lang_xp_publish_php['select_service'] = 'Na lista de serviços que aparece, seleccione o da sua galeria (o que tem o nome da galeria)'; // cpg1.5
$lang_xp_publish_php['enter_login'] = 'Introduza os seus dados de acesso, se necessário'; // cpg1.5
$lang_xp_publish_php['select_album'] = 'Seleccione o álbum destino para as imagens ou crie um novo'; // cpg1.5
$lang_xp_publish_php['next'] = 'Clique em &quot;seguinte&quot;'; // cpg1.5
$lang_xp_publish_php['upload_starts'] = 'O envio dos ficheiros deve começar'; // cpg1.5
$lang_xp_publish_php['upload_completed'] = 'Quando estiver terminado, verifique, na sua galeria, se as imagens foram adicionadas com sucesso'; // cpg1.5
$lang_xp_publish_php['welcome'] = 'Bem-vindo <strong>%s</strong>,';
$lang_xp_publish_php['need_login'] = 'Tem que se autenticar na galeria usando o Internet Explorer antes de poder usar este assistente.<p/><p>Quando se autenticar, não se esqueça de seleccionar a opção &quot;lembrar&quot; se estiver presente.';
$lang_xp_publish_php['no_alb'] = 'Infelizmente não existe nenhum álbum para onde possa enviar as imagens com este assistente.';
$lang_xp_publish_php['upload'] = 'Envie as imagens para um álbum já existente';
$lang_xp_publish_php['create_new'] = 'Crie um novo álbum para as suas imagens';
$lang_xp_publish_php['category'] = 'Categoria';
$lang_xp_publish_php['new_alb_created'] = 'O seu novo álbum &quot;<strong>%s</strong>&quot; foi criado.';
$lang_xp_publish_php['continue'] = 'Pressione &quot;Seguinte&quot; para começar a enviar as imagens';
$lang_xp_publish_php['link'] = '';
}

// ------------------------------------------------------------------------- //
// Core plugins
// ------------------------------------------------------------------------- //
if (defined('CORE_PLUGIN')) {
$lang_plugin_php['usergal_alphatabs_config_name'] = 'Abas Alfabéticas de Galerias de Utilizadores'; // cpg1.5
$lang_plugin_php['usergal_alphatabs_config_description'] = 'O que faz: apresenta abas de A a Z no topo das galerias de utilizador onde visitantes podem clicar para saltar directamente para uma página que mostra todas as galerias dos utilizadores cujo nome de utilizador comece por essa letra. Este plugin apenas é recomendado a quem tem um grande número de galerias de utilizador.'; // cpg1.5
$lang_plugin_php['usergal_alphatabs_jump_by_username'] = 'Saltar por nome de utilizador'; // cpg1.5
$lang_plugin_php['sample_config_name'] = 'Plugin de exemplo'; // cpg1.5
$lang_plugin_php['sample_config_description'] = 'Este é um plugin de exemplo. Ele não fará nada particularmente útil - tem apenas por objectivo demonstrar o que os plugins podem fazer e como os programar. Quando activado, mostrará algum texto em vermelho.'; // cpg1.5
$lang_plugin_php['sample_plugin_documentation'] = 'Documentação do Plugin'; // cpg1.5
$lang_plugin_php['sample_plugin_support'] = 'Suporte do Plugin'; // cpg1.5
$lang_plugin_php['sample_install_explain'] = 'Introduza o nome de utilizador (\'foo\') e a senha (\'bar\') para instalar'; // cpg1.5
$lang_plugin_php['sample_install_username'] = 'Nome de utilizador'; // cpg1.5
$lang_plugin_php['sample_install_password'] = 'Senha'; // cpg1.5
$lang_plugin_php['sample_output'] = 'Isto são dados retornados pelo plugin de exemplo'; // cpg1.5
$lang_plugin_php['opensearch_config_name'] = 'OpenSearch'; // cpg1.5
$lang_plugin_php['opensearch_config_description'] = 'Uma implementação de <a href="http://www.opensearch.org/" rel="external" class="external">OpenSearch</a> para o Coppermine.<br />Quando activada, os visitantes podem adicionar a galeria às suas barras de pesquisa de navegador.'; // cpg1.5
$lang_plugin_php['opensearch_search'] = 'Procurar %s'; // cpg1.5
$lang_plugin_php['opensearch_extra'] = 'Pode querer adicionar algum texto ao seu site que explique o que faz este plugin'; // cpg1.5
$lang_plugin_php['opensearch_failed_to_open_file'] = 'Não foi possível abrir o ficheiro %s - verifique os privilégios'; // cpg1.5
$lang_plugin_php['opensearch_failed_to_write_file'] = 'Não foi possível escrever o ficheiro %s - verifique os privilégios'; // cpg1.5
$lang_plugin_php['opensearch_form_header'] = 'Introduza os detalhes a serem usados para a descrição do ficheiro'; // cpg1.5
$lang_plugin_php['opensearch_gallery_url'] = 'URL da galeria (tem de estar correcto)'; // cpg1.5
$lang_plugin_php['opensearch_display_name'] = 'Nome tal como mostrado no navegador'; // cpg1.5
$lang_plugin_php['opensearch_description'] = 'Descrição'; // cpg1.5
$lang_plugin_php['opensearch_character_limit'] = 'limite de caracteres de %s'; // cpg1.5
$lang_plugin_php['onlinestats_description'] = 'Apresenta um bloco em cada página da galeria que mostra os utilizadores e visitantes actualmente online.';
$lang_plugin_php['onlinestats_name'] = 'Quem está online?';
$lang_plugin_php['onlinestats_config_extra'] = 'Para activar este plugin (fazer com que mostre o bloco de estatísticas online), a cadeia de texto "onlinestats" (separada com uma barra invertida) foi adicionada ao "conteúdo da página principal" em <a href="admin.php">Configuração do Coppermine</a> na secção "Vista de lista de álbum". A configuração deverá agora estar com "breadcrumb/catlist/alblist/onlinestats" ou algo similar. Para alterar a posição do bloco, mova a cadeia de texto "onlinestats" no campo.';
$lang_plugin_php['onlinestats_config_install'] = 'O plugin executa consultas adicionais na base de dados de cada vez que é executado, gastando ciclos de CPU e usando recursos. Se a sua galeria é lenta o se tem demasiados utilizadores, não o deverá usar.';
$lang_plugin_php['onlinestats_we_have_reg_member'] = 'Existe %s utilizador registado';
$lang_plugin_php['onlinestats_we_have_reg_members'] = 'Existem %s utilizadores registados';
$lang_plugin_php['onlinestats_most_recent'] = 'O utilizador mais recente é %s';
$lang_plugin_php['onlinestats_is'] = 'No total, há %s visitante online';
$lang_plugin_php['onlinestats_are'] = 'No total, há %s visitantes online';
$lang_plugin_php['onlinestats_and'] = 'e';
$lang_plugin_php['onlinestats_reg_member'] = '%s utilizador registado';
$lang_plugin_php['onlinestats_reg_members'] = '%s utilizadores registados';
$lang_plugin_php['onlinestats_guest'] = '%s visitante';
$lang_plugin_php['onlinestats_guests'] = '%s visitantes';
$lang_plugin_php['onlinestats_record'] = 'Máximo de utilizadores online: %s em %s';
$lang_plugin_php['onlinestats_since'] = 'Utilizadores registados que estiveram online nos últimos %s minutos: %s';
$lang_plugin_php['onlinestats_config_text'] = 'Durante quanto tempo pretende manter os utilizadores listados como online antes de se assumir que já saíram?';
$lang_plugin_php['onlinestats_minute'] = 'minutos';
$lang_plugin_php['onlinestats_remove'] = 'Eliminar a tabela que foi usada para guardar as estatísticas online?';
$lang_plugin_php['link_target_name'] = 'Destino do link';
$lang_plugin_php['link_target_description'] = 'Altera a forma em que os links externos são abertos: quando este plugin está activo, todos os links que contenham o atributo rel="external" serão abertos numa nova janela (em vez de serem abertos na mesma).';
$lang_plugin_php['link_target_extra'] = 'Este plugin tem impacto, principalmente, no link "Powered by Coppermine" no rodapé da página da galeria.';
$lang_plugin_php['link_target_recommendation'] = 'É recomendado que não use este plugin para controlar os seus utilizadores: abrindo links em novas janelas é considerado uma forma de tentar controlar os utilizadores.';
}

?>
