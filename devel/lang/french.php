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
//  (at your option) any later version.                                       //
// ------------------------------------------------------------------------- //
/*
$Id$
*/

// info about translators and translated language
$lang_translation_info = array(
'lang_name_english' => 'French',
'lang_name_native' => 'Français',
'lang_country_code' => 'fr',
'trans_name'=> 'jdbaranger - modified by JDBaranger',
'trans_email' => '',
'trans_website' => 'http://www.everlasting-star.net/',
'trans_date' => '2004-03-18',
);

$lang_charset = 'ISO-8859-1';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('Octets', 'Ko', 'Mo');

// Day of weeks and months
$lang_day_of_week = array('Dim', 'Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam');
$lang_month = array('Jan', 'Fev', 'Mar', 'Avr', 'Mai', 'Juin', 'Juil', 'Aout', 'Sep', 'Oct', 'Nov', 'Dec');

// Some common strings
$lang_yes = 'Oui';
$lang_no  = 'Non';
$lang_back = 'Retour';
$lang_continue = 'CONTINUER';
$lang_info = 'Information';
$lang_error = 'Erreur';

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$album_date_fmt =  '%B %d, %Y';
$lastcom_date_fmt =  '%m/%d/%y &agrave; %H:%M';
$lastup_date_fmt = '%B %d, %Y';
$register_date_fmt = '%B %d, %Y';
$lasthit_date_fmt = '%B %d, %Y &agrave; %I:%M %p';
$comment_date_fmt =  '%B %d, %Y &agrave; %I:%M %p';

// For the word censor
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*', 'merde', 'putain', 'encul&eacute;*', 'salope', 'bite', 'cul', 'pute', 'p&eacute;nis', 'clito', 'couille', 'p&eacute;tasse', 'connard', 'salaud');

$lang_meta_album_names = array(
  'random' => 'Photos al&eacute;atoires',
  'lastup' => 'Derniers ajouts',
  'lastalb'=> 'Derniers albums mis en ligne',
  'lastcom' => 'Derniers commentaires',
  'topn' => 'Les plus populaires',
  'toprated' => 'Les mieux not&eacute;es',
  'lasthits' => 'Les derni&egrave;res vues',
  'search' => 'R&eacute;sultats de la recherche',
  'favpics'=> 'Photos pr&eacute;f&eacute;r&eacute;es'
);

$lang_errors = array(
  'access_denied' => 'Vous n\'avez pas la permission d\'acc&eacute;der &agrave; cette page.',
  'perm_denied' => 'Vous n\'avez pas la permission d\'effectuer cette op&eacute;ration.',
  'param_missing' => 'Script appel&eacute; sans les param&egrave;tres n&eacute;cessaires.',
  'non_exist_ap' => 'L\'album/la photo demand&eacute;(e) n\'existe pas !',
  'quota_exceeded' => 'Espace disque d&eacute;pass&eacute;<br /><br />Vous avez un quota d\'espace de [quota]K, vos photos utilisent [space]K, le fait d\'ajouter cette photo vous ferait d&eacute;passer votre quota.',
  'gd_file_type_err' => 'L\'utilisation de "GD image library" ne vous permet d\'utiliser que de images de type JPEG et PNG.',
  'invalid_image' => 'L\'image que vous avez upload&eacute;e est corrompue ou ne peut pas &ecirc;tre prise en charge par GD library',
  'resize_failed' => 'Impossible de cr&eacute;er la vignette ou l\'image r&eacute;duite.',
  'no_img_to_display' => 'Pas d\'image &agrave; afficher',
  'non_exist_cat' => 'La cat&eacute;gorie s&eacute;lectionn&eacute;e n\'existe pas',
  'orphan_cat' => 'Une cat&eacute;gorie a un parent inexistant, utilisez le gestionnaire de cat&eacute;gories afin de rem&eacute;dier au probl&egrave;me.',
  'directory_ro' => 'Le r&eacute;pertoire \'%s\' n\'est pas inscriptible : les images ne peuvent &ecirc;tre supprim&eacute;es.',
  'non_exist_comment' => 'Le commentaire s&eacute;lectionn&eacute; n\'existe pas.',
  'pic_in_invalid_album' => 'L\'image se trouve dans un album qui n\'existe pas (%s)!?',
  'banned' => 'Vous &ecirc;tes pour l\'instant banni de ce site.',
  'not_with_udb' => 'Cette fonction est d&eacute;sactiv&eacute;e dans Coppermine parce que la galerie est int&eacute;gr&eacute;e &agrave; un forum. Soit l\'action que vous essayez d\'effectuer n\'est pas disponible dans cette configuration, soit vous devez l\'effectuer &agrave; partir du forum auquel vous avez int&eacute;gr&eacute; la galerie.',
  'offline_title' => 'Hors Ligne', //cpg1.3.0
  'offline_text' => 'Cette gallerie n\'est pas en ligne actuellement. Revenez la voir tr&egrave;s bient&ocirc;t !', //cpg1.3.0
  'ecards_empty' => 'Il n\'y a pas encore de logs enregistr&eacute;s. V&eacute;rifiez que vous avez activ&eacute; l\'option correspondante dans la configuration de Coppermine.', //cpg1.3.0
  'action_failed' => 'Erreur ! Coppermine ne peut pas traiter cette requ&ecirc;te.', //cpg1.3.0
  'no_zip' => 'Les librairies n&eacute;cessaires au traitement des fichiers ZIP ne sont pas install&eacute;es. Contactez l\'Administrateur du site.', //cpg1.3.0
  'zip_type' => 'Vous n\'avez pas l\'autorisation de t&eacute;l&eacute;charger des fichiers ZIP.', //cpg1.3.0
);

$lang_bbcode_help = 'Ces codes peuvent vous &ecirc;tre utiles: <li>[b]<b>Gras</b>[/b]</li> <li>[i]<i>Italique</i>[/i]</li> <li>[url=http://votre-site.com/]Texte de l\'URL[/url]</li> <li>[email]adresse@domaine.com[/email]</li>'; //cpg1.3.0

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
  'alb_list_title' => 'Aller &agrave; la liste des albums',
  'alb_list_lnk' => 'Albums',
  'my_gal_title' => 'Aller dans ma galerie personnelle',
  'my_gal_lnk' => 'Ma galerie',
  'my_prof_lnk' => 'Mon profil',
  'adm_mode_title' => 'Passer en mode admin',
  'adm_mode_lnk' => 'Mode admin',
  'usr_mode_title' => 'Passer au mode utilisateur',
  'usr_mode_lnk' => 'Mode utilisateur',
  'upload_pic_title' => 'Uploader une image dans un album',
  'upload_pic_lnk' => 'Uploader une image',
  'register_title' => 'Cr&eacute;er un compte',
  'register_lnk' => 'Inscription',
  'login_lnk' => 'S\'identifier',
  'logout_lnk' => 'Quitter',
  'lastup_lnk' => 'Derniers ajouts',
  'lastcom_lnk' => 'Commentaires',
  'topn_lnk' => 'Les plus populaires',
  'toprated_lnk' => 'Les mieux not&eacute;es',
  'search_lnk' => 'Rechercher',
  'fav_lnk' => 'Mes favoris',
  'memberlist_title' => 'Afficher la liste des membres', //cpg1.3.0
  'memberlist_lnk' => 'Liste des membres', //cpg1.3.0
  'faq_title' => 'Questions fr&eacute;quemment pos&eacute;es &agrave; propos de &quot;Coppermine&quot;', //cpg1.3.0
  'faq_lnk' => 'FAQ', //cpg1.3.0
);

$lang_gallery_admin_menu = array(
  'upl_app_lnk' => 'Fichiers &agrave; valider',
  'config_lnk' => 'Configuration',
  'albums_lnk' => 'Albums',
  'categories_lnk' => 'Cat&eacute;gories',
  'users_lnk' => 'Utilisateurs',
  'groups_lnk' => 'Groupes',
  'comments_lnk' => 'Commentaires',
  'searchnew_lnk' => 'FTP =>',
  'util_lnk' => 'Utilitaires',
  'ban_lnk' => 'Bannir des utilisateurs',
  'db_ecard_lnk' => 'Cartes envoy&eacute;es', //cpg1.3.0
);

$lang_user_admin_menu = array(
  'albmgr_lnk' => 'Cr&eacute;er / classer mes albums',
  'modifyalb_lnk' => 'Modifier mes albums',
  'my_prof_lnk' => 'Mon profil',
);

$lang_cat_list = array(
  'category' => 'Cat&eacute;gorie',
  'albums' => 'Albums',
  'pictures' => 'Photos',
);

$lang_album_list = array(
  'album_on_page' => '%d albums sur %d page(s)'
);

$lang_thumb_view = array(
  'date' => 'DATE',
  //Sort by filename and title
  'name' => 'NOM DU FICHIER',
  'title' => 'TITRE',
  'sort_da' => 'Classement ascendant par date',
  'sort_dd' => 'Classement descendant par date',
  'sort_na' => 'Classement ascendant par nom',
  'sort_nd' => 'Classement descendant par nom',
  'sort_ta' => 'Classement ascendant par titre',
  'sort_td' => 'Classement descendant par titre',
  'download_zip' => 'Uploader un fichier ZIP', //cpg1.3.0
  'pic_on_page' => '%d photos sur %d page(s)',
  'user_on_page' => '%d utilisateurs sur %d page(s)'
);

$lang_img_nav_bar = array(
  'thumb_title' => 'Retourner &agrave; la page des vignettes',
  'pic_info_title' => 'Afficher / cacher les informations sur l\'image',
  'slideshow_title' => 'Diaporama',
  'ecard_title' => 'Envoyer cette image en tant que carte &eacute;lectronique',
  'ecard_disabled' => 'Les cartes &eacute;lectroniques sont d&eacute;sactiv&eacute;es',
  'ecard_disabled_msg' => 'Vous n\'avez pas l\'autorisation d\'envoyer des cartes',
  'prev_title' => 'Voir l\'image pr&eacute;c&eacute;dente',
  'next_title' => 'Voir l\'image suivante',
  'pic_pos' => 'PHOTO %s/%s',
);

$lang_rate_pic = array(
  'rate_this_pic' => 'Noter cette image ',
  'no_votes' => '(Pas encore de note)',
  'rating' => '(note actuelle : %s / 5 pour %s votes)',
  'rubbish' => 'Tr&egrave;s mauvais',
  'poor' => 'Pauvre',
  'fair' => 'Moyen',
  'good' => 'Bon',
  'excellent' => 'Excellent',
  'great' => 'Superbe',
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
  CRITICAL_ERROR => 'Erreur critique',
  'file' => 'Fichier: ',
  'line' => 'Ligne: ',
);

$lang_display_thumbnails = array(
  'filename' => 'Nom du fichier : ',
  'filesize' => 'Poids du fichier : ',
  'dimensions' => 'Dimensions : ',
  'date_added' => 'Ajout&eacute; le : '
);

$lang_get_pic_data = array(
  'n_comments' => '%s commentaires',
  'n_views' => 'vu %s fois',
  'n_votes' => '(%s votes)'
);

$lang_cpg_debug_output = array(
  'debug_info' => 'Infos de d&eacute;buggage', //cpg1.3.0
  'select_all' => 'TOut s&eacute;lectionner', //cpg1.3.0
  'copy_and_paste_instructions' => 'Si vous souhaitez soumettre une demande d\'assistance dans le forum de support de Coppermine, copier/collez ces informations de d&eacute;buggage dans avec votre message. Assuez-vous de remplacer tous les mots de passe, m&ecirc;me cod&eacute;s, par \'***\' avant de poster votre message.', //cpg1.3.0
  'phpinfo' => 'display phpinfo', //cpg1.3.0
);

$lang_language_selection = array(
  'reset_language' => '- Par d&eacute;faut -', //cpg1.3.0
  'choose_language' => 'Langue :', //cpg1.3.0
);

$lang_theme_selection = array(
  'reset_theme' => '- Par d&eacute;faut -', //cpg1.3.0
  'choose_theme' => 'Th&egrave;me :', //cpg1.3.0
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
  'Exclamation' => 'Exclamation',
  'Question' => 'Question',
  'Very Happy' => 'Tr&egrave;s heureux',
  'Smile' => 'Sourire',
  'Sad' => 'Triste',
  'Surprised' => 'Surpris',
  'Shocked' => 'Choqu&eacute;',
  'Confused' => 'Confus',
  'Cool' => 'Cool',
  'Laughing' => 'Rire',
  'Mad' => 'Fou',
  'Razz' => 'Razz',
  'Embarassed' => 'Embarass&eacute;',
  'Crying or Very sad' => 'Pleure ou tr&egrave;s triste',
  'Evil or Very Mad' => 'Diabolique ou tr&egrave;s en col&egrave;re',
  'Twisted Evil' => 'Sadique',
  'Rolling Eyes' => 'L&egrave;ve les yeux au ciel',
  'Wink' => 'Clin d\'oeil',
  'Idea' => 'Id&eacute;e',
  'Arrow' => 'Fl&egrave;che',
  'Neutral' => 'Neutre',
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
  0 => 'D&eacute;connexion du mode administrateur...',
  1 => 'Passage au mode administrateur...',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
  'alb_need_name' => 'Les albums doivent avoir un nom !',
  'confirm_modifs' => 'Voulez-vous vraiment effectuer ces modifications ?',
  'no_change' => 'Vous n\\\'avez effectu&eacute; aucun changement !',
  'new_album' => 'Nouvel album',
  'confirm_delete1' => 'Voulez vous vraiment supprimer cet album ?',
  'confirm_delete2' => '\nToutes les images et tous les commentaires seront perdus !',
  'select_first' => 'S&eacute;lectionnez d\\\'abord un album',
  'alb_mrg' => 'Gestionnaire d\'album',
  'my_gallery' => '* Ma galerie *',
  'no_category' => '* Pas de cat&eacute;gorie *',
  'delete' => 'Supprimer',
  'new' => 'Nouveau',
  'apply_modifs' => 'Appliquer les modifications',
  'select_category' => 'S&eacute;lectionner une categorie',
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
  'miss_param' => 'Les param&egrave;tres requis pour l\'\'%s\'operation sont manquants !',
  'unknown_cat' => 'La cat&eacute;gorie s&eacute;lectionn&eacute;e n\'existe pas dans la base de donn&eacute;es',
  'usergal_cat_ro' => 'La galerie des utilisateurs ne peut pas &ecirc;tre supprim&eacute;e!',
  'manage_cat' => 'G&eacute;rer les cat&eacute;gories',
  'confirm_delete' => 'Voulez vous vraiment SUPPRIMER cette cat&eacute;gorie ?',
  'category' => 'Categorie',
  'operations' => 'Op&eacute;rations',
  'move_into' => 'D&eacute;placer dans',
  'update_create' => 'Mettre &agrave; jour / cr&eacute;er la cat&eacute;gorie',
  'parent_cat' => 'Cat&eacute;gorie parente',
  'cat_title' => 'Titre de la cat&eacute;gorie',
  'cat_thumb' => 'Vignette de la cat&eacute;gorie', //cpg1.3.0
  'cat_desc' => 'Description de la cat&eacute;gorie'
);

// ------------------------------------------------------------------------- //
// File config.php
// ------------------------------------------------------------------------- //

if (defined('CONFIG_PHP')) $lang_config_php = array(
  'title' => 'Configuration',
  'restore_cfg' => 'Restaurer les param&egrave;tres d\'origine',
  'save_cfg' => 'Sauvegarder la nouvelle configuration',
  'notes' => 'Notes',
  'info' => 'Information',
  'upd_success' => 'La configuration de Coppermine a &eacute;t&eacute; mise &agrave; jour',
  'restore_success' => 'La configuration d\'origine de Coppermine a &eacute;t&eacute; restaur&eacute;e',
  'name_a' => 'Ascendant par nom',
  'name_d' => 'Descendantpar nom',
  'title_a' => 'Ascendant par titre',
  'title_d' => 'Descendant par titre',
  'date_a' => 'Ascendant par date',
  'date_d' => 'Descendant par date',
  'th_any' => 'Aspect max',
  'th_ht' => 'Hauteur',
  'th_wd' => 'Largeur',
  'label' => 'Libell&eacute;', //cpg1.3.0
  'item' => 'Liste', //cpg1.3.0
  'debug_everyone' => 'Tout le monde', //cpg1.3.0
  'debug_admin' => 'Administrateurs uniquement' //cpg1.3.0
);

if (defined('CONFIG_PHP')) $lang_config_data = array(
  'Param&egrave;tres g&eacute;n&eacute;raux',
  array('Nom de la galerie', 'gallery_name', 0),
  array('Description de la galerie', 'gallery_description', 0),
  array('Email de l\'administrateur de la galerie', 'gallery_admin_email', 0),
  array('Adresse sur laquelle le lien \'Voir plus de photos\' des e-cards doit pointer', 'ecards_more_pic_target', 0),
  array('La galerie n\'est pas publi&eacute;e', 'offline', 1), //cpg1.3.0
  array('Loguer les envois de cartes &eacute;lectroniques', 'log_ecards', 1), //cpg1.3.0
  array('Autoriser le t&eacute;l&eacute;chargement ZIP des photos dans les Favoris', 'enable_zipdownload', 1), //cpg1.3.0

  'Param&egrave;tres de langues, themes &amp; caract&egrave;res',
  array('Langue par d&eacute;faut', 'lang', 5),
  array('Theme par d&eacute;faut', 'theme', 6),
  array('Afficher la liste des langues', 'language_list', 8), //cpg1.3.0
  array('Afficher le drapeau des langues', 'language_flags', 8), //cpg1.3.0
  array('Afficher &quot;- Par d&eacute;faut -&quot; dans la s&eacute;lection des langues', 'language_reset', 1), //cpg1.3.0
  array('Afficher la liste des th&egrave;mes', 'theme_list', 8), //cpg1.3.0
  array('Afficher &quot;- Par d&eacute;faut -&quot; dans la liste des th&egrave;mes', 'theme_reset', 1), //cpg1.3.0
  array('Afficher les FAQ', 'display_faq', 1), //cpg1.3.0
  array('Afficher l\'aide bbcode', 'show_bbcode_help', 1), //cpg1.3.0
  array('Encodage des caract&egrave;res', 'charset', 4), //cpg1.3.0

  'Affichage de la liste des albums',
  array('Largeur du tableau principal (pixels ou %)', 'main_table_width', 0),
  array('Nombre de niveaux de cat&eacute;gories &agrave; afficher', 'subcat_level', 0),
  array('Nombre d\'albums &agrave; afficher', 'albums_per_page', 0),
  array('Nombre de colonnes pour la liste des albums', 'album_list_cols', 0),
  array('Taille des vignettes en pixels', 'alb_list_thumb_size', 0),
  array('Le contenu de la page principale', 'main_page_layout', 0),
  array('Afficher les vignettes de l\'album du premier niveau avec la cat&eacute;gorie','first_level',1),

  'Affichage des vignettes',
  array('Nombre de colonnes sur la page des vignettes', 'thumbcols', 0),
  array('Nombre de lignes sur la page des vignettes', 'thumbrows', 0),
  array('Nombre maximal d\'onglets &agrave; afficher', 'max_tabs', 0),
  array('Afficher la l&eacute;gende de l\'image (en plus de son titre) sous la vignette', 'caption_in_thumbview', 1),
  array('Afficher le nombre de commentaires sous les vignettes', 'display_comment_count', 1),
  array('Afficher le nom de l\'utilisateur sous la vignette', 'display_uploader', 1), //cpg1.3.0
  array('Classement par d&eacute;faut des images', 'default_sort_order', 3),
  array('Nombre minimum de votes n&eacute;cessaires pour qu\'une image apparaisse dans la liste des images les mieux not&eacute;es', 'min_votes_for_rating', 0),

  'Affichage des images &amp; param&egrave;tres des commentaires',
  array('Largeur du tableau pour l\'affichage des images (pixels ou %)', 'picture_table_width', 0),
  array('Les informations relatives &agrave; l\'image sont affich&eacute;es par d&eacute;faut', 'display_pic_info', 1),
  array('Filtrer les gros mots dans les commentaires', 'filter_bad_words', 1),
  array('Autoriser les smileys dans les commentaires', 'enable_smilies', 1),
  array('Autoriser plusieurs messages successifs du m&ecirc;me utilisateur (D&eacute;sactive la protection contre le flood)', 'disable_comment_flood_protect', 1), //cpg1.3.0
  array('Longueur maximale pour la description des images', 'max_img_desc_length', 0),
  array('Nombre maximal de lettres pour un mot', 'max_com_wlength', 0),
  array('Nombre maximal de lignes pour un commentaire', 'max_com_lines', 0),
  array('Longueur maximale d\'un commentaire', 'max_com_size', 0),
  array('Afficher le n&eacute;gatif', 'display_film_strip', 1),
  array('Nombre d\'images par n&eacute;gatif', 'max_film_strip_items', 0),
  array('Pr&eacute;venir l\'administrateur lorsque des commentaires sont post&eacute;s', 'email_comment_notification', 1), //cpg1.3.0
  array('Intervalle d\affichage des photos dans les diaporamas, en millisecondes (1 seconde = 1000 millisecondes)', 'slideshow_interval', 0), //cpg1.3.0

  'Param&egrave;tres des images et vignettes',
  array('Qualit&eacute; pour les fichiers JPG', 'jpeg_qual', 0),
  array('Dimension maximale pour les vignettes <b>*</b>', 'thumb_width', 0),
  array('Utiliser la dimension (largeur ou hauteur ou aspect max pour la vignette)<b>*</b>', 'thumb_use', 7),
  array('Cr&eacute;er des images interm&eacute;diaires','make_intermediate',1),
  array('Largeur ou hauteur maximale pour une image interm&eacute;diaire <a href="#notice2" class="clickable_option">**</a>', 'picture_width', 0),
  array('Poids maximal des images &agrave; uploader (Ko)', 'max_upl_size', 0),
  array('Longueur ou hauteur maximale pour les images upload&eacute;es (en pixels)', 'max_upl_width_height', 0),

  'Param&egrave;tres avanc&eacute;s', //cpg1.3.0
  array('Montrer les vignettes des albums priv&eacute;s aux utilisateurs anonymes','show_private',1), //cpg1.3.0
  array('Caract&egrave;res interdits dans les noms de fichiers', 'forbiden_fname_char',0), //cpg1.3.0
  //array('Extensions de fichiers accept&eacute;es pour l\'upload de fichiers', 'allowed_file_extensions',0), //cpg1.3.0
  array('Types d\'images autoris&eacute;s', 'allowed_img_types',0), //cpg1.3.0
  array('Types de films autoris&eacute;s', 'allowed_mov_types',0), //cpg1.3.0
  array('Types de fichiers sons autoris&eacute;s', 'allowed_snd_types',0), //cpg1.3.0
  array('Types de fichiers textes autoris&eacute;s', 'allowed_doc_types',0), //cpg1.3.0
  array('M&eacute;thode de redimensionnement des images','thumb_method',2), //cpg1.3.0
  array('Chemin vers l\'utilitaire \'convert\' d\'ImageMagick (exemple /usr/bin/X11/)', 'impath', 0), //cpg1.3.0
  //array('Types d\'images autoris&eacute;s (seulement pour ImageMagick)', 'allowed_img_types',0), //cpg1.3.0
  array('Options de ligne de commande pour ImageMagick', 'im_options', 0), //cpg1.3.0
  array('Lire les informations EXIF dans les fichiers JPEG', 'read_exif_data', 1), //cpg1.3.0
  array('Lire les informations IPTC dans les fichiers JPEG', 'read_iptc_data', 1), //cpg1.3.0
  array('R&eacute;pertoire pour les albums des utilisateurs <a href="#notice1" class="clickable_option">*</a>', 'fullpath', 0), //cpg1.3.0
  array('R&eacute;pertoire pour les images des utilisateurs <a href="#notice1" class="clickable_option">*</a>', 'userpics', 0), //cpg1.3.0
  array('Pr&eacute;fixe pour les images interm&eacute;diaires <a href="#notice1" class="clickable_option">*</a>', 'normal_pfx', 0), //cpg1.3.0
  array('Pr&eacute;fixe pour les vignettes <a href="#notice1" class="clickable_option">*</a>', 'thumb_pfx', 0), //cpg1.3.0
  array('Mode par d&eacute;faut des r&eacute;pertoires', 'default_dir_mode', 0), //cpg1.3.0
  array('Mode par d&eacute;faut des fichiers', 'default_file_mode', 0), //cpg1.3.0

  'Param&egrave;tres Utilisateurs',
  array('Autoriser de nouvelles inscriptions', 'allow_user_registration', 1),
  array('L\'inscription d\'un nouvel utilisateur doit &ecirc;tre valid&eacute;e', 'reg_requires_valid_email', 1),
  array('Notifier l\'administrateur des nouvelles inscriptions', 'reg_notify_admin_email', 1), //cpg1.3.0
  array('Autoriser deux utilisateurs &agrave; avoir le m&ecirc;me e-mail', 'allow_duplicate_emails_addr', 1),
  array('Les utilisateurs peuvent avoir des albums personnels', 'allow_private_albums', 1),
  array('Notifier l\'administrateur lorsque des uploads n&eacute;cessitent son approbation', 'upl_notify_admin_email', 1), //cpg1.3.0
  array('Autoriser les utilisateurs authentifi&eacute;s &agrave; visualiser la Liste des membres', 'allow_memberlist', 1), //cpg1.3.0

  'Champs libres pour les descriptions d\'images (&agrave; laisser tel quel si vous n\'utilisez pas cette fonction)',
  array('Nom du champ 1', 'user_field1_name', 0),
  array('Nom du champ 2', 'user_field2_name', 0),
  array('Nom du champ 3', 'user_field3_name', 0),
  array('Nom du champ 4', 'user_field4_name', 0),

  'Cookies &amp; param&egrave;tres d\'encodage des caract&egrave;res',
  array('Nom du cookie utilis&eacute; par le script (si vous utilisez l\'int&eacute;gration avec un forum, v&eacute;rifiez que les cookies sont diff&eacute;rents)', 'cookie_name', 0),
  array('Chemin du cookie utilis&eacute; par le script', 'cookie_path', 0),

  'Divers',
  array('Activer le mode debug', 'debug_mode', 1),
  array('Afficher les notices dans le mode debug', 'debug_notice', 1), //cpg1.3.0


  '<br /><div align="left"><a name="notice1"></a>(*) Ce param&egrave;tre ne doit pas &ecirc;tre modifi&eacute; si des images sont d&eacute;j&agrave; pr&eacute;sentes dans la Base de donn&eacute;es.<br />
  <a name="notice2"></a>(**) Lorsque vous modifiez ce param&egrave;tre, seuls les nouveaux fichiers seront affect&eacute;s. Il est donc conseill&eacute; de ne pas modifier ce param&egrave;tre si des images sont d&eacute;j&agrave; pr&eacute;sentes dans la Base de donn&eacute;es. Vous pouvez toutefois appliquer ce param&egrave;tre aux fichiers existants avec <a href="util.php">l\'utilitaire appropri&eacute;</a> (option Redimensionner les images) accessible depuis le menu d\'administration.</div><br />', //cpg1.3.0
);
// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
  'empty_name_or_com' => 'Vous devez taper votre nom et un commentaire',
  'com_added' => 'Votre commentaire a &eacute;t&eacute; ajout&eacute;',
  'alb_need_title' => 'Vous devez donner un titre &agrave; l\'album !',
  'no_udp_needed' => 'Aucune mise &agrave; jour n\'est n&eacute;cessaire.',
  'alb_updated' => 'L\'album a &eacute;t&eacute; mis &agrave; jour',
  'unknown_album' => 'L\'album s&eacute;lectionn&eacute; n\'existe pas ou bien vous n\'avez pas la permission d\'uploader dans cet album',
  'no_pic_uploaded' => 'Aucune image n\'a &eacute;t&eacute; upload&eacute;e !<br /><br />Si vous avez vraiment s&eacute;lectionn&eacute; une image &agrave; uploader, v&eacute;rifier que le serveur autorise l\'upload de fichiers...',
  'err_mkdir' => 'Impossible de cr&eacute;er le r&eacute;pertoire %s !',
  'dest_dir_ro' => 'Le r&eacute;pertoire de destination (%s) ne dispose pas des droits d\'&eacute;criture n&eacute;cessaires pour le script!',
  'err_move' => 'Impossible de d&eacute;placer %s vers %s !',
  'err_fsize_too_large' => 'La taille de l\'image que vous avez upload&eacute; est trop grande (le maximum autoris&eacute; est de %s x %s) !',
  'err_imgsize_too_large' => 'Le poids du fichier que vous avez upload&eacute; est trop important (le maximum autoris&eacute; est de %s Ko) !',
  'err_invalid_img' => 'Le fichier que vous avez upload&eacute; n\'est pas une image valide!',
  'allowed_img_types' => 'Vous ne pouvez uploader que %s images.',
  'err_insert_pic' => 'Les images \'%s\' ne peuvent pas &ecirc;tre ins&eacute;r&eacute;es dans l\'album ',
  'upload_success' => 'Votre image a &eacute;t&eacute; correctement upload&eacute;e<br /><br />Elle sera visible apr&egrave;s validation de l\'administrateur.',
  'notify_admin_email_subject' => '%s - Notification d\'upload', //cpg1.3.0
  'notify_admin_email_body' => 'Une image a &eacute;t&eacute; upload&eacute;e par %s. Cela n&eacute;cessite votre approbation. Connectez-vous &agrave; %s', //cpg1.3.0
  'info' => 'Information',
  'com_added' => 'Commentaire ajout&eacute;',
  'alb_updated' => 'Album mis &agrave; jour',
  'err_comment_empty' => 'Votre commentaire est vide!',
  'err_invalid_fext' => 'Seuls les fichiers avec les extensions suivantes sont autoris&eacute;s : <br /><br />%s.',
  'no_flood' => 'Nous sommes d&eacute;sol&eacute;s, mais vous &ecirc;tes d&eacute;j&agrave; l\'auteur du dernier commentaire post&eacute; au sujet de cette image.<br /><br />Vous pouvez tout simplement &eacute;diter votre message pr&eacute;c&eacute;dent si vous souhaitez le modifier ou bien ajouter des informations.',
  'redirect_msg' => 'Redirection en cours.<br /><br /><br />Cliquez sur \'CONTINUER\' si la page ne se recharge pas automatiquement',
  'upl_success' => 'Votre image a &eacute;t&eacute; correctement ajout&eacute;e',
  'email_comment_subject' => 'Commentaire post&eacute; sur Coppermine Photo Gallery', //cpg1.3.0
  'email_comment_body' => 'Quelqu\'un a post&eacute; un commentaire dans votre galerie. Voyez-le &agrave;', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
  'caption' => 'L&eacute;gende',
  'fs_pic' => 'image en taille r&eacute;elle',
  'del_success' => 'suppression r&eacute;ussie',
  'ns_pic' => 'image en taille normale',
  'err_del' => 'ne peut pas &ecirc;tre supprim&eacute;',
  'thumb_pic' => 'vignette',
  'comment' => 'commentaire',
  'im_in_alb' => 'image dans l\'album',
  'alb_del_success' => 'Album \'%s\' supprim&eacute;s',
  'alb_mgr' => 'Gestionnaire d\'album',
  'err_invalid_data' => 'Donn&eacute;es non valides reçues dans \'%s\'',
  'create_alb' => 'Cr&eacute;ation de l\'album \'%s\'',
  'update_alb' => 'Mise &agrave; jour de l\'album \'%s\' avec le titre \'%s\' et index \'%s\'',
  'del_pic' => 'Supprimer l\'image',
  'del_alb' => 'Supprimer l\'album',
  'del_user' => 'Supprimer l\'utilisateur',
  'err_unknown_user' => 'L\'utilisateur s&eacute;lectionn&eacute; n\'existe pas !',
  'comment_deleted' => 'Le commentaire a &eacute;t&eacute; supprim&eacute; avec succ&egrave;s',
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
  'confirm_del' => 'Voulez vous vraiment SUPPRIMER cette image?\\nLes commentaires seront &eacute;galement supprim&eacute;s.',
  'del_pic' => 'SUPPRIMER CETTE IMAGE',
  'size' => '%s x %s pixels',
  'views' => '%s fois',
  'slideshow' => 'Diaporama',
  'stop_slideshow' => 'ARRETER LE DIAPORAMA',
  'view_fs' => 'Cliquez pour voir l\'image en taille r&eacute;elle',
  'edit_pic' => 'Modifier la description', //cpg1.3.0
  'crop_pic' => 'Retoucher', //cpg1.3.0
);

$lang_picinfo = array(
  'title' =>'Informations sur l\'image',
  'Filename' => 'Nom du fichier',
  'Album name' => 'Nom de l\'album',
  'Rating' => 'Note (%s votes)',
  'Keywords' => 'Mots clefs',
  'File Size' => 'Taille du fichier',
  'Dimensions' => 'Dimensions',
  'Displayed' => 'Affich&eacute;es',
  'Camera' => 'Appareil photos',
  'Date taken' => 'Date de la prise de vue',
  'Aperture' => 'Ouverture',
  'Exposure time' => 'Temps d\'exposition',
  'Focal length' => 'Focale',
  'Comment' => 'Commentaires',
  'addFav'=>'Ajouter aux favoris',
  'addFavPhrase'=>'Favoris',
  'remFav'=>'Supprimer des favoris',
  'iptcTitle'=>'Titre IPTC', //cpg1.3.0
  'iptcCopyright'=>'Copyright IPTC', //cpg1.3.0
  'iptcKeywords'=>'Mots cl&eacute;s IPTC', //cpg1.3.0
  'iptcCategory'=>'Cat&eacute;gorie IPTC', //cpg1.3.0
  'iptcSubCategories'=>'Sous-sat&eacute;gorie IPTC', //cpg1.3.0
);

$lang_display_comments = array(
  'OK' => 'OK',
  'edit_title' => 'Modifier ce commentaire',
  'confirm_delete' => 'Voulez vous vraiment supprimer ce commentaire?',
  'add_your_comment' => 'Ajoutez votre commentaire',
  'name'=>'Nom',
  'comment'=>'Commentaire',
  'your_name' => 'Anonyme',
);

$lang_fullsize_popup = array(
  'click_to_close' => 'Cliquez sur l\'image pour fermer la fen&ecirc;tre',
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
  'title' => 'Envoyer en tant que e-card',
  'invalid_email' => '<b>Attention</b> : cette adresse e-mail n\'est pas valide !',
  'ecard_title' => 'Une e-card pour vous, de la part de %s',
  'error_not_image' => 'Seules les images peuvent &ecirc;tre envoy&eacute;es sous forme de cartes &eacute;lectroniques.', //cpg1.3.0
  'view_ecard' => 'Si votre e-card ne s\'affiche pas correctement, cliquez ici',
  'view_more_pics' => 'Suivez ce lien pour d&eacute;couvrir davantage de photos !',
  'send_success' => 'Votre ecard a &eacute;t&eacute; envoy&eacute;e',
  'send_failed' => 'Nous sommes d&eacute;sol&eacute;s, mais le serveur n\'a pu envoyer votre e-card...',
  'from' => 'De la part de',
  'your_name' => 'Votre nom',
  'your_email' => 'Votre adresse e-mail',
  'to' => 'A',
  'rcpt_name' => 'Nom du destinataire',
  'rcpt_email' => 'Adresse e-mail du destinataire',
  'greetings' => 'Introduction',
  'message' => 'Message',
);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
  'pic_info' => 'Informations sur l\'image',
  'album' => 'Album',
  'title' => 'Titre',
  'desc' => 'Description',
  'keywords' => 'Mots clefs',
  'pic_info_str' => '%sx%s - %sKo - %s affichages - %s votes',
  'approve' => 'Approuver',
  'postpone_app' => 'Approuver plus tard',
  'del_pic' => 'Supprimer l\'image',
  'read_exif' => 'Relire les informations EXIF', //cpg1.3.0
  'reset_view_count' => 'Remettre le compteur des t&eacute;l&eacute;chargements &agrave; z&eacute;ro',
  'reset_votes' => 'Remettre le compteur de votes &agrave; z&eacute;ro',
  'del_comm' => 'Supprimer les commentaires',
  'upl_approval' => 'Autorisation d\'upload',
  'edit_pics' => 'Modifier les images',
  'see_next' => 'Voir les images suivantes',
  'see_prev' => 'Voir les images pr&eacute;c&eacute;dentes',
  'n_pic' => '%s images',
  'n_of_pic_to_disp' => 'Nombre d\'images &agrave; afficher',
  'apply' => 'Appliquer les modifications',
  'crop_title' => 'Editeur Photo de Coppermine', //cpg1.3.0
  'preview' => 'Previsualiser', //cpg1.3.0
  'save' => 'Sauvegarder la photo', //cpg1.3.0
  'save_thumb' =>'Save en tant que vignette', //cpg1.3.0
  'sel_on_img' =>'La s&eacute;lection doit &ecirc;tre enti&egrave;rement sur l\'image', //js-alert //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File faq.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('FAQ_PHP')) $lang_faq_php = array(
  'faq' => 'Questions fr&eacute;quemment pos&eacute;es', //cpg1.3.0
  'toc' => 'Table des mati&egrave;res', //cpg1.3.0
  'question' => 'Question : ', //cpg1.3.0
  'answer' => 'R&eacute;ponse : ', //cpg1.3.0
);

if (defined('FAQ_PHP')) $lang_faq_data = array(
  '<br>FAQ g&eacute;n&eacute;rales<br>', //cpg1.3.0
  array('Pourquoi dois-je m\'inscrire ?', 'L\'inscription peut &ecirc;tre impos&eacute;e ou non par l\'administrateur. Elle offre des fonctionnalit&eacute;s suppl&eacute;mentaires telles que la possibilit&eacute; d\'uploader des images, d\'avoir une liste de Favoris, de noter les images, de poster des commentaires etc...', 'allow_user_registration', '0'), //cpg1.3.0
  array('Comment puis-je m\'inscrire ?', 'Allez sur &quot;Inscription&quot; et renseignez les informations requises (&eacute;ventuellement les informations optionnelles, si vous le souhaitez).<br />Si l\'administrateur a demand&eacute; une confirmation par mail, vous recevrez un message &agrave; l\'adresse que vous aurez renseign&eacute;e dans le formulaire d\'inscription. Ce message vous induiqera la marche &agrave; suivre pour valider votre inscription. Votre inscription doit &ecirc;tre valid&eacute;e avant que vous ne puissiez vous indentifier.', 'allow_user_registration', '1'), //cpg1.3.0
  array('Comment m\'identifier ?', 'Allez sur &quot;S\'identifier&quot;, saisissez votre pseudo et votre mot de passe. Cochez &quot;Se souvenir de moi&quot; afin d\'&ecirc;tre automatiquement reconnect&eacute; lorsque vous reviendrez sur le site.<br /><b>IMPORTANT : Vous devez autoriser les cookies et le cookie ne doit pas &ecirc;tre effac&eacute; pour que cette option fonctionne.</b>', 'offline', 0), //cpg1.3.0
  array('Pourquoi ne puis-je pas m\'identifier ?', 'V&eacute;rifiez que vous vous &ecirc;tes bien inscrit et que vous avez cliqu&eacute; sur le lien de validation indiqu&eacute; dans le mail de confirmation que vous devez avoir reçu. Pour tout autre probl&egrave;me, contactez l\'administrateur du site.', 'offline', 0), //cpg1.3.0
  array('Et si j\'oublie mon mot de passe ?', 'Si le site poss&egrave;de un lien &quot;J\'ai oubli&eacute; mon mot de passe !&quot;, utilisez-le. Dans le cas contraire, contactez l\'administrateur qui vous cr&eacute;era un nouveau mot de passe.', 'offline', 0), //cpg1.3.0
  array('Que dois-je faire si je change d\'adresse e-mail ?', 'Identifiez-vous et changez votre adresse de messagerie dans le menu &quot;Mon profil&quot;', 'offline', 0), //cpg1.3.0
  array('Comment sauvegarder une photo dans &quot;Mes Favoris&quot; ?', 'Cliquez sur une image. Si les informations de cette image ne sont pas indiqu&eacute;es au bas de celle-ci, cliquez sur le lien &quot;Afficher/cacher les informations de l\'image&quot; (<img src="images/info.gif" width="16" height="16" border="0" alt="Afficher/cacher les informations de l\'image" />); Cliquez ensuite sur le lien &quot;Ajouter aux favoris&quot;.<br /><br />IMPORTANT : Vous devez autoriser les cookies et le cookie ne doit pas &ecirc;tre effac&eacute; pour que cette option fonctionne.', 'offline', 0), //cpg1.3.0
  array('Comment noter une photo ?', 'Cliquez sur une image et cliquez sur la note que vous souhaitez lui attribuer, au-dessous de l\'image', 'offline', 0), //cpg1.3.0
  array('Comment poster un commentaire sur une photo ?', 'Cliquez sur une image et tapez votre commentaire au-dessous de l\'image, sous la ligne &quot;Ajoutez votre commentaire&quot;.', 'offline', 0), //cpg1.3.0
  array('Comment uploader une photo ?', 'Cliquez sur &quot;Uploader une image&quot; et s&eacute;lectionnez l\'album dans lequel vous souhaitez qu\'elle apparaisse. Cliquez sur &quot;Parcourir&quot; pour s&eacute;lectionner le fichier &agrave; transf&eacute;rer. Compl&eacute;tez ensuite les champs facultatifs si vous le d&eacute;sirez. Enfin, validez par &quot;Mettre une photo en ligne&quot;', 'allow_private_albums', 0), //cpg1.3.0
  array('O&ugrave; puis-je uploader mes photos ?', 'Vous pourrez uploader vos photos dans l\'un de vos albums dans &quot;Ma galerie&quot;. L\'administrateur peut aussi vous avoir autoris&eacute; &agrave; uploader des photos dans un ou plusieurs albums dans la galerie principale.', 'allow_private_albums', 0), //cpg1.3.0
  array('Quels types et tailles d\'images puis-je uploader ?', 'La taille et le type (jpg,gif,..etc.) est d&eacute;fini par l\'administrateur. Vous pouvez lui en demander la liste.', 'offline', 0), //cpg1.3.0
  array('Que signifie &quot;Ma galerie&quot; ?', '&quot;Ma galerie&quot; est une galerie personnelle dans laquelle les utilisateurs peuvent uploader et organiser leurs photos.', 'allow_private_albums', 0), //cpg1.3.0
  array('Comment puis-je cr&eacute;er, renommer ou supprimer des albums dans &quot;Ma Galerie&quot; ?', 'Vous devez auparavant entrer dans le &quot;Mode admin.&quot;<br/>Cliquez ensuite sur &quot;Cr&eacute;er / classer mes Albums&quot;puis cliquez sur &quot;Nouveau&quot;. Remplacez &quot;New Album&quot; &agrave; votre convenance.<br />Vous pouvez aussi renommer vos albums dans votre galerie.<br />Cliquez ensuite sur &quot;Appliquer les Modifications&quot;.', 'allow_private_albums', 0), //cpg1.3.0
  array('Comment puis-je modifier ou restreindre l\'acc&egrave;s &agrave; mes albums ?', 'Vous devez auparavant entrer dans le &quot;Mode admin.&quot;<br />Cliquez ensuite sur &quot;Modifier mes albums&quot;. Dans la zone &quot;Mettre l\'album &agrave; jour&quot; s&eacute;lectionnez l\'album que vous souhaitez modifier.<br />Vous pouvez modifier le nom, la description, la vignette, restreindre l\'acc&egrave;s, les options concernant les notes et les commentaires.<br />Cliquez sur &quot;Mettre l\'album &agrave; jour&quot;. pour valider', 'allow_private_albums', 0), //cpg1.3.0
  array('Comment puis-je voir les albums des autres utilisateurs ?', 'Allez sur &quot;Liste des albums&quot; et choisissez &quot;Galeries utilisateurs&quot;.', 'allow_private_albums', 0), //cpg1.3.0
  array('Que sont les cookies ?', 'Les cookies sont des fichiers texte contenant des param&egrave;tres du site et de votre pseudo. Ces cookies sont stock&eacute;es dans votre ordinateur.<br />Ils vous apportent la possibilit&eacute; d\'entrer et sortir du site sans avoir &agrave; vous identifier, ainsi que d\'autres facilit&eacute;s.', 'offline', 0), //cpg1.3.0
  array('O&ugrave; puis-je me procurer cette galerie pour mon site ?', 'Coppermine est une Galerie multim&eacute;dia gratuite, sous licence GNU GPL. Elle comprend de nombreuses fonctions avanc&eacute;es et est port&eacute;e sur plusieurs plateformes. Visitez le site <a href="http://coppermine.sf.net/" target="_blank">Page principale Coppermine</a> pour en savoir plus et proc&eacute;der &agrave; son t&eacute;l&eacute;chargement.', 'offline', 0), //cpg1.3.0

  '<br>Navigation dans le site<br>', //cpg1.3.0
  array('Qu\'est-ce-que &quot;Liste des albums&quot; ?', 'Cela vous redirigera vers la galerie principale avec un lien vers chaque cat&eacute;gorie. Ces liens peuvent &ecirc;tre sous forme de vignettes.', 'offline', 0), //cpg1.3.0
  array('Qu\'est-ce-que &quot;Ma galerie&quot; ?', 'Cette fonctionnalit&eacute; vous permet de cr&eacute;er vos propres albums et d\'y uploader et g&eacute;rer vos photos.', 'allow_private_albums', 0), //cpg1.3.0
  array('Quelle est la diff&eacute;rence entre le &quot;Mode admin.&quot; et le &quot;Mode utilisateur&quot; ?', 'Le &quot;Mode admin.&quot; vous permet de modifier vos albums ainsi que tous les albums pour lesquels vous aurez &eacute;t&eacute; habilit&eacute; par l\'administrateur.', 'allow_private_albums', 0), //cpg1.3.0
  array('Qu\'est-ce-que &quot;Uploader une image&quot; ?', 'Cette fonctionnalit&eacute; vous permet d\'uploader des photos (dont la taille et le type sont d&eacute;finis par l\'administrateur) dans les galeries et albums pour lesquels vous aurez &eacute;t&eacute; habilit&eacute; par l\'administrateur.', 'allow_private_albums', 0), //cpg1.3.0
  array('Qu\'est-ce-que &quot;Derniers ajouts&quot; ?', 'Cette fonctionnalit&eacute; vous montre les derni&egrave;res photos upload&eacute;es sur le site.', 'offline', 0), //cpg1.3.0
  array('Qu\'est-ce-que &quot;Commentaires&quot; ?', 'Cette fonctionnalit&eacute; vous montre les derniers commentaires post&eacute;s par les utilisateurs du site.', 'offline', 0), //cpg1.3.0
  array('Qu\'est-ce-que &quot;Les plus populaires&quot; ?', 'Cette fonctionnalit&eacute; vous montre les photos les plus vues par les visiteurs, identifi&eacute;s ou anonymes.', 'offline', 0), //cpg1.3.0
  array('Qu\'est-ce-que &quot;Les mieux not&eacute;es&quot; ?', 'Cette fonctionnalit&eacute; vous montre les photos, tri&eacute;es par leur note moyenne. Par exemples : <br />- Si 5 utilisateurs donnent chacun la note 3 (<img src="images/rating3.gif" width="65" height="14" border="0" alt="" />), la photo obtient la note moyenne de 3 (<img src="images/rating3.gif" width="65" height="14" border="0" alt="" />).<br />- Si 5 utilisateurs donnent les notes 1, 2, 3, 4 et 5, la photo obtient une moyenne de 3 &eacute;galement (<img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> ).<br />Les notes vont de <img src="images/rating5.gif" width="65" height="14" border="0"/> (meilleure) to <img src="images/rating0.gif" width="65" height="14" border="0" /> (moins bonne).', 'offline', 0), //cpg1.3.0
  array('Qu\'est-ce-que &quot;Mes favoris&quot; ?', 'Cette fonctionnalit&eacute; vous permet de stocker une ou plusieurs photos dans le cookie qui est stock&eacute; dans votre ordinateur.', 'offline', 0), //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File forgot_passwd.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) $lang_forgot_passwd_php = array(
  'forgot_passwd' => 'Rappel de Mot de passe', //cpg1.3.0
  'err_already_logged_in' => 'Vous &ecirc;tes d&eacute;j&agrave; identifi&eacute; !', //cpg1.3.0
  'enter_username_email' => 'Saisissez votre pseudo ou votre adresse de messagerie', //cpg1.3.0
  'submit' => 'Envoyer', //cpg1.3.0
  'failed_sending_email' => 'Le mot de passe n\'a pas pu &ecirc;tre envoy&eacute; !', //cpg1.3.0
  'email_sent' => 'Un message a &eacute;t&eacute; envoy&eacute; avec votre mot de passe &agrave; l\'adresse %s', //cpg1.3.0
  'err_unk_user' => 'L\'utilisateur indiqu&eacute; n\'existe pas !', //cpg1.3.0
  'passwd_reminder_subject' => '%s - Rappel de Mot de passe', //cpg1.3.0
  'passwd_reminder_body' => 'Vous avez demand&eacute; que votre mot de passe vous soit rappel&eacute;. Voici donc vos donn&eacute;es de connexion :
Utilisateur: %s
Mot de passe : %s
Cliquez sur %s pour vous identifier.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
  'group_name' => 'Nom du groupe',
  'disk_quota' => 'Quota disque',
  'can_rate' => 'Peut noter les images',
  'can_send_ecards' => 'Peut envoyer des ecards',
  'can_post_com' => 'Peut &eacute;crire des commentaires',
  'can_upload' => 'Peut mettre des photos en ligne',
  'can_have_gallery' => 'Peut avoir une galerie perso',
  'apply' => 'Appliquer les modifications',
  'create_new_group' => 'Cr&eacute;er un nouveau groupe',
  'del_groups' => 'Supprimer le(s) groupe(s) s&eacute;lectionn&eacute;(s)',
  'confirm_del' => 'Attention, lorsque vous supprimez un groupe, les utilisateurs de ce groupe seront transf&eacute;r&eacute;s dans le groupe d\'utilisateurs \'Enregistr&eacute;\'!\n\nSouhaitez-vous continuer?',
  'title' => 'G&eacute;rer les groupes d\'utilisateurs',
  'approval_1' => 'Autorisation d\'upload pub. (1)',
  'approval_2' => 'Autorisation d\'upload priv. (2)',
  'upload_form_config' => 'Formulaire de configuration d\'upload', //cpg1.3.0
  'upload_form_config_values' => array( 'Un seul fichier uniquement', 'Plusieurs fichiers uniquement', 'Uploads URI seulement', 'Uploads ZIP seulement', 'Fichier-URI', 'Fichier-ZIP', 'Fichier-ZIP', 'Fichier-URI-ZIP'), //cpg1.3.0
  'custom_user_upload'=>'Les utilisateurs peuvent-ils modifier le nombre de t&eacute;l&eacute;chargements ?', //cpg1.3.0
  'num_file_upload'=>'Nombre Maximum/exact de t&eacute;l&eacute;chargement de fichiers', //cpg1.3.0
  'num_URI_upload'=>'Nombre Maximum/exact de t&eacute;l&eacute;chargements de URI', //cpg1.3.0
  'note1' => '<b>(1)</b> Les uploads dans un album public doivent &ecirc;tre approuv&eacute;s par un administrateur',
  'note2' => '<b>(2)</b> Les uploads dans un album qui appartient &agrave; l\'utilisateur doivent &ecirc;tre approuv&eacute;s par un admin',
  'notes' => 'Remarques'
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
  'welcome' => 'Bienvenue!'
);

$lang_album_admin_menu = array(
  'confirm_delete' => 'Voulez-vous VRAIMENT supprimer cet album ? \\nToutes les photos et tous les commentaires seront perdus.',
  'delete' => 'SUPPRIMER',
  'modify' => 'PROPRIETES',
  'edit_pics' => 'MODIFIER LES PHOTOS',
);

$lang_list_categories = array(
  'home' => 'Accueil',
  'stat1' => '<b>[pictures]</b> photos dans <b>[albums]</b> albums et <b>[cat]</b> cat&eacute;gories avec <b>[comments]</b> commentaires affich&eacute;es <b>[views]</b> fois',
  'stat2' => '<b>[pictures]</b> photos dans <b>[albums]</b> albums affich&eacute;es <b>[views]</b> times',
  'xx_s_gallery' => '%s\'s Galerie',
  'stat3' => '<b>[pictures]</b> photos dans <b>[albums]</b> albums avec <b>[comments]</b> commentaires affich&eacute;es <b>[views]</b> fois'
);

$lang_list_users = array(
  'user_list' => 'Liste d\'utilisateurs',
  'no_user_gal' => 'Il n\'y a pas de nouvelle galerie d\'utilisateurs',
  'n_albums' => '%s album(s)',
  'n_pics' => '%s photo(s)'
);

$lang_list_albums = array(
  'n_pictures' => '%s photos',
  'last_added' => ', la derni&egrave;re a &eacute;t&eacute; ajout&eacute;e le %s'
);

}

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
  'login' => 'Se connecter',
  'enter_login_pswd' => 'Entrez votre login et mot de passe pour vous connecter',
  'username' => 'Login',
  'password' => 'Mot de passe',
  'remember_me' => 'Se souvenir de moi',
  'welcome' => 'Bienvenue %s ...',
  'err_login' => '*** Impossible de se connecter. Essayez encore ***',
  'err_already_logged_in' => 'Vous &ecirc;tes d&eacute;j&agrave; connect&eacute; !',
  'forgot_password_link' => 'J\'ai oubli&eacute; mon mot de passe !', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
  'logout' => 'D&eacute;connection',
  'bye' => 'Au revoir %s ...',
  'err_not_loged_in' => 'Vous n\'&ecirc;tes pas identif&eacute; !',
);

// ------------------------------------------------------------------------- //
// File phpinfo.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('PHPINFO_PHP')) $lang_phpinfo_php = array(
  'php_info' => 'Infos PHP', //cpg1.3.0
  'explanation' => 'Ceci est le r&eacute;sultat g&eacute;n&eacute;r&eacute; par la fonction PHP <a href="http://www.php.net/phpinfo">phpinfo()</a>, affich&eacute;e dans Coppermine.', //cpg1.3.0
  'no_link' => 'Permettre &agrave; tous de voir vos informations PHP peut &ecirc;tre un risque important, c\'est pourquoi cette page n\'est accessible qu\'aux administrateurs. Vous ne pouvez pas poster de liens vers cette page &agrave; d\'autres utilisateurs, ils se verraient l\'acc&egrave;s refus&eacute;.', //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
  'upd_alb_n' => 'Mettre &agrave; jour l\'album %s',
  'general_settings' => 'Param&egrave;tres g&eacute;n&eacute;raux',
  'alb_title' => 'Titre de l\'album',
  'alb_cat' => 'Cat&eacute;gorie de l\'album',
  'alb_desc' => 'Description de l\'album',
  'alb_thumb' => 'vignette de l\'album',
  'alb_perm' => 'Permissions pour cet album',
  'can_view' => 'Cet album peut &ecirc;tre consult&eacute; par',
  'can_upload' => 'Les visiteurs peuvent mettre des photos en ligne',
  'can_post_comments' => 'Les visiteurs peuvent poster des commentaires',
  'can_rate' => 'Les visiteurs peuvent noter les photos',
  'user_gal' => 'Galerie de l\'utilisateur',
  'no_cat' => '* Pas de cat&eacute;gorie *',
  'alb_empty' => 'L\'album est vide',
  'last_uploaded' => 'Dernier upload',
  'public_alb' => 'Tout le monde (album public)',
  'me_only' => 'Moi seulement',
  'owner_only' => 'Le propri&eacute;taire de l\'album (%s) seulement',
  'groupp_only' => 'Membres du groupe \'%s\'',
  'err_no_alb_to_modify' => 'Il n\'y a pas d\'album modifiable dans la base.',
  'update' => 'Mettre l\'album &agrave; jour',
  'notice1' => '(*) en fonction de la configuration des %sgroupes%s', //cpg1.3.0 (do not translate %s!)
);

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
  'already_rated' => 'Vous aviez d&eacute;j&agrave; not&eacute; cette photo',
  'rate_ok' => 'Votre vote a &eacute;t&eacute; pris en compte',
  'forbidden' => 'Vous ne pouvez pas noter vos propres photos.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Bien que les administrateurs de {SITE_NAME} fassent en sorte de supprimer ou modifier toute donn&eacute;e &agrave; caract&egrave;re r&eacute;pr&eacute;hensible le plus rapidement possible, il est impossible de scruter syst&eacute;matiquement l'int&eacute;gralit&eacute; des contenus. Vous &ecirc;tes par cons&eacute;quent conscient que tous les posts effectu&eacute;s sur ce site expriment les points de vue et opinions de leurs auteurs et non ceux des administrateurs ou du webmaster (sauf, &eacute;videmment dans le cas des posts effectu&eacute;s par ces derniers), qui ne pourront par cons&eacute;quent pas &ecirc;tre consid&eacute;r&eacute;s comme responsables.
<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Vous acceptez de ne poster aucune donn&eacute;e &agrave; caract&egrave;re injurieux, obsc&egrave;ne, vulgaire, diffamatoire, menaçant, sexuel ou tout autre contenu susceptible de violer la loi. Vous acceptez que le webmaster et les mod&eacute;rateurs de {SITE_NAME} aient le droit de supprimer ou modifier n'importe quel contenu, si cela leur semble opportun.
<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Le droit &agrave; l'image est la pr&eacute;rogative reconnue &agrave; toute personne de s'opposer, &agrave; certaines conditions, &agrave; ce que des tiers non autoris&eacute;s reproduisent et, a fortiori, diffusent son image. Ainsi, pour toute publication de photos montrant des personnes reconnaissables, vous devez, en tant qu'exposant, &ecirc;tre en possession d'une autorisation de publication. L'autorisation doit &ecirc;tre expresse et suffisamment pr&eacute;cise quant aux modalit&eacute;s de diffusion. Vous devez, en tant qu'exposant, pouvoir rapporter la preuve de cet accord expr&egrave;s &agrave; toute personne qui en ferait la demande. L'absence d'autorisation engage directement votre unique responsabilit&eacute;.
<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Les droits d'auteur permettent &agrave; leur titulaire d'&ecirc;tre le seul &agrave; produire ou reproduire son oeuvre, &agrave; la pr&eacute;senter au public, &agrave; la publier ou &agrave; pouvoir octroyer ce droit &agrave; quelqu'un d'autre. Ainsi, pour publier des photos, vous devez en &ecirc;tre l'auteur ou &ecirc;tre en possession d'une autorisation de publication fournie par l'auteur. Vous devez, en tant qu'exposant, pouvoir rapporter la preuve de cette autorisation &agrave; toute personne qui en ferait la demande. L'absence d'autorisation engage directement votre unique responsabilit&eacute;.
<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Selon le Code de la Propri&eacute;t&eacute; Intellectuelle du 1er juillet 1992 qui regroupe les lois relatives &agrave; la propri&eacute;t&eacute; intellectuelle, notamment la loi du 11 mars 1957 et la loi du 3 juillet 1985, le droit d'auteur prot&egrave;ge les oeuvres sans l'accomplissement de formalit&eacute;s. D'autre part, afin d'&eacute;viter que d'&eacute;ventuels liens puissent &ecirc;tre faits vers vos photos &agrave; partir de sites dont nous ne pouvons contr&ocirc;ler le contenu, les noms de fichiers de vos photos pourront &ecirc;tre modifi&eacute;s &agrave; tout instant et sans pr&eacute;avis.
<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  En tant qu'utilisateur, vous acceptez que toutes les informations entr&eacute;es plus haut et toutes les photographies que vous publiez soient stock&eacute;es dans une base de donn&eacute;es. Bien que ces informations et photographies ne soient pas communiqu&eacute;es &agrave; des tiers sans votre consentement, le webmaster et les administrateurs ne peuvent en aucun cas &ecirc;tre tenus pour responsables dans le cas de tentatives de hack qui pourraient compromettre les donn&eacute;es ou permettre l'acc&egrave;s ou l'utilisation illicite de vos photographies.
<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Ce site utilise des cookies pour stocker des informations sur votre ordinateur. Ces cookies ne servent qu'&agrave; am&eacute;liorer votre navigation sur ce site. Votre adresse e-mail ne sera utilis&eacute;e que pour confirmer les donn&eacute;es de votre inscription ainsi que votre mot de passe.<br />
<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  En cliquant sur 'J'accepte' ci-dessous, vous acceptez de vous soumettre &agrave; ces conditions ainsi qu'&agrave; toutes leurs &eacute;ventuelles mises &agrave; jour.
EOT;

$lang_register_php = array(
  'page_title' => 'inscription d\'utilisateur',
  'term_cond' => 'Conditions g&eacute;n&eacute;rales d\'inscription',
  'i_agree' => 'J\'accepte',
  'submit' => 'S\'inscrire',
  'err_user_exists' => 'Le nom d\'utilisateur que vous avez entr&eacute; existe d&eacute;j&agrave;, merci de bien vouloir en choisir un autre',
  'err_password_mismatch' => 'Les deux mots de passe ne correspondent pas, merci de les entrer &agrave; nouveau',
  'err_uname_short' => 'Le nom d\'utilisateur doit comprendre au moins 2 caract&egrave;res',
  'err_password_short' => 'Le mot de passe doit comprendre au moins 2 caract&egrave;res',
  'err_uname_pass_diff' => 'Le nom d\'utilisateur et le mot de passe doivent &ecirc;tre diff&eacute;rents',
  'err_invalid_email' => 'L\'adresse e-mail n\'est pas valide',
  'err_duplicate_email' => 'Un autre utilisateur s\'est d&eacute;j&agrave; enregist&eacute; avec l\'adresse e-mail que vous avez entr&eacute;e',
  'enter_info' => 'Entrez les informations relatives &agrave; votre inscription',
  'required_info' => 'Informations requises',
  'optional_info' => 'Informations optionnelles',
  'username' => 'Nom d\'utilisateur / login',
  'password' => 'Mot de passe',
  'password_again' => 'Entrez &agrave; nouveau le mot de passe',
  'email' => 'Email',
  'location' => 'Localisation',
  'interests' => 'Int&eacute;r&ecirc;ts',
  'website' => 'Site web',
  'occupation' => 'Activit&eacute;',
  'error' => 'ERREUR',
  'confirm_email_subject' => '%s - Confirmation d\'inscription',
  'information' => 'Informations',
  'failed_sending_email' => 'L\'e-mail de confirmation d\'inscription n\'a pu &ecirc;tre envoy&eacute;!',
  'thank_you' => 'Merci pour votre inscription.<br /><br />Un e-mail contenant les informations sur l\'activation de votre compte vous a &eacute;t&eacute; envoy&eacute; &agrave; l\'adresse e-mail que vous nous avez communiqu&eacute;e.',
  'acct_created' => 'Votre compte a bien &eacute;t&eacute; cr&eacute;e. Vous pouvez maintenant vous identifier avec votre login et votre mot de passe',
  'acct_active' => 'Votre compte a bien &eacute;t&eacute; activ&eacute;. Vous pouvez maintenant vous identifier avec votre login et votre mot de passe',
  'acct_already_act' => 'Votre compte est d&eacute;j&agrave; actif!',
  'acct_act_failed' => 'Ce compte ne peut pas &ecirc;tre activ&eacute;!',
  'err_unk_user' => 'L\'utilisateur s&eacute;lectionn&eacute; n\'existe pas!',
  'x_s_profile' => 'Profil de %s',
  'group' => 'Groupe',
  'reg_date' => 'Date d\'inscription',
  'disk_usage' => 'Utilisation du disque',
  'change_pass' => 'Modifier le mot de passe',
  'current_pass' => 'Mot de passe actuel',
  'new_pass' => 'Nouveau mot de passe',
  'new_pass_again' => 'Nouveau mot de passe (&agrave; nouveau)',
  'err_curr_pass' => 'Le mot de passe actuel n\'est pas correct',
  'apply_modif' => 'Appliquer les modifications',
  'change_pass' => 'Changer mon mot de passe',
  'update_success' => 'Votre profil a &eacute;t&eacute; mis &agrave; jour',
  'pass_chg_success' => 'Votre mot de passe a &eacute;t&eacute; modifi&eacute;',
  'pass_chg_error' => 'Votre mot de passe n\'a pas &eacute;t&eacute; modifi&eacute;',
  'notify_admin_email_subject' => '%s - notification d\'inscription', //cpg1.3.0
  'notify_admin_email_body' => 'Un nouvel utilisateur s\'est inscrit dans votre galerie, nous le nom "%s"', //cpg1.3.0
);

$lang_register_confirm_email = <<<EOT
Merci pour votre inscription sur {SITE_NAME}

Votre nom d\'utilisateur/login est : "{USER_NAME}"
Votre mot de passe est : "{PASSWORD}"

Afin d\'activer votre compte, vous devez cliquer sur le lien suivant, ou bien en faire un copier/coller dans la barre d\'adresse de votre navigateur.

{ACT_LINK}

Cordialement,

L'equipe de {SITE_NAME}

EOT;

}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
  'title' => 'V&eacute;rifier les commentaires',
  'no_comment' => 'Il n\'y a pas de commentaire &agrave; v&eacute;rifier',
  'n_comm_del' => '%s commentaire(s) supprim&eacute;(s)',
  'n_comm_disp' => 'Nombre de commentaires &agrave; afficher',
  'see_prev' => 'Voir pr&eacute;c&eacute;dent(s)',
  'see_next' => 'Voir suivant(s)',
  'del_comm' => 'Supprimer les commentaires s&eacute;lectionn&eacute;s',
);


// ------------------------------------------------------------------------- //
// File search.php - OK
// ------------------------------------------------------------------------- //

if (defined('SEARCH_PHP')) $lang_search_php = array(
  0 => 'Rechercher une image dans la galerie',
);

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
  'page_title' => 'Rechercher les nouvelles photos',
  'select_dir' => 'Selectionnez le r&eacute;pertoire',
  'select_dir_msg' => 'Cette fonction vous permet d\'ajouter un groupe de photos que vous avez upload&eacute; sur votre serveur FTP.<br /><br />S&eacute;lectionnez le r&eacute;pertoire o&ugrave; vous avez upload&eacute; vos photos',
  'no_pic_to_add' => 'Il n\'y a pas de photo &agrave; ajouter',
  'need_one_album' => 'Vous avez besoin d\'au moins un album pour effectuer cette op&eacute;ration',
  'warning' => 'Avertissement',
  'change_perm' => 'le script ne peut pas &eacute;crire dans ce r&eacute;pertoire, vous devez changer ses permissions &agrave; 755 ou 777 avant d\'essayer d\'ajouter les photos !',
  'target_album' => '<b>Mettre les photos de &quot;</b>%s<b>&quot; dans </b>%s',
  'folder' => 'R&eacute;pertoire',
  'image' => 'Image',
  'album' => 'Album',
  'result' => 'R&eacute;sultat',
  'dir_ro' => 'Non inscriptible. ',
  'dir_cant_read' => 'Illisible. ',
  'insert' => 'Ajouter de nouvelles images &agrave; la galerie',
  'list_new_pic' => 'Liste des nouvelles images',
  'insert_selected' => 'Ins&eacute;rer les photos s&eacute;lectionn&eacute;es',
  'no_pic_found' => 'Aucune image n\'a &eacute;t&eacute; trouv&eacute;e',
  'be_patient' => 'Soyez patient. Le script a besoin de temps pour mettre les photos en ligne',
  'no_album' => 'Aucun album s&eacute;lectionn&eacute;',  //cpg1.3.0
  'notes' =>  '<ul>'.
        '<li><b>OK</b> : signifie que l\'image a bien &eacute;t&eacute; mise en ligne'.
        '<li><b>DP</b> : signifie que la photo existe d&eacute;j&agrave; dans la base de donn&eacute;es'.
        '<li><b>PB</b> : signifie que la photo n\'a pas pu &ecirc;tre ajout&eacute;e, v&eacute;rifiez votre configuration et les permissions des r&eacute;pertoires dans lesquels les images se trouvent'.
        '<li>Si les signes OK, DP, PB n\'apparaissent pas, cliquez sur l\'image cass&eacute;e afin de voir le message d\'erreur g&eacute;n&eacute;r&eacute; par PHP'.
        '<li>Si votre browser cesse d\'effectuer la t&acirc;che (timeout), cliquez sur le bouton actualiser'.
        '</ul>',
  'select_album' => 'Choisissez un album', //cpg1.3.0
  'check_all' => 'Tout cocher', //cpg1.3.0
  'uncheck_all' => 'Tout d&eacute;cocher', //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// File thumbnails.php
// ------------------------------------------------------------------------- //

// Void

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) $lang_banning_php = array(
  'title' => 'Bannir des utilisateurs',
  'user_name' => 'Nom d\'utilisateur',
  'ip_address' => 'Adresse IP',
  'expiry' => 'Expire (champs vide signifie que le ban est ind&eacute;fini)',
  'edit_ban' => 'Sauvegarder les changements',
  'delete_ban' => 'Supprimer',
  'add_new' => 'Ajouter un nouveau ban',
  'add_ban' => 'Ajouter',
  'error_user' => 'Utilisateur introuvable', //cpg1.3.0
  'error_specify' => 'Vous devez sp&eacute;cifier un nom d\'utilisateur ou une adresse IP', //cpg1.3.0
  'error_ban_id' => 'ID Invalide !', //cpg1.3.0
  'error_admin_ban' => 'Vous ne pouvez pas vous bannir !', //cpg1.3.0
  'error_server_ban' => 'Vous ne pouvez pas bannir votre propre serveur...', //cpg1.3.0
  'error_ip_forbidden' => 'Vous ne pouvez pas bannir cette adresse, elle est non routable !', //cpg1.3.0
  'lookup_ip' => 'Traduire cette adresse IP', //cpg1.3.0
  'submit' => 'Envoyer !', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) $lang_upload_php = array(
  'title' => 'Mettre une photo en ligne',
  'custom_title' => 'Formulaire de requ&ecirc;te personnalis&eacute;e', //cpg1.3.0
  'cust_instr_1' => 'Vous pouvez s&eacute;lectionner un nombre personnalis&eacute; de boxes d\'uploads, dans la limite list&eacute;e ci-dessous.', //cpg1.3.0
  'cust_instr_2' => 'Requ&ecirc;te de nombre de Boxes', //cpg1.3.0
  'cust_instr_3' => 'Boxes d\'uploads de fichier : %s', //cpg1.3.0
  'cust_instr_4' => 'Boxes d\'uploads URI/URL : %s', //cpg1.3.0
  'cust_instr_5' => 'Boxes d\'uploads URI/URL :', //cpg1.3.0
  'cust_instr_6' => 'Boxes d\'uploads de fichier :', //cpg1.3.0
  'cust_instr_7' => 'Merci de saisir le nombre de chaque type de boxes d\'uploads d&eacute;sir&eacute;s. Ensuite cliquez sur \'Continuer\'. ', //cpg1.3.0
  'reg_instr_1' => 'Action invalide dans la cr&eacute;ation du formulaire.', //cpg1.3.0
  'reg_instr_2' => 'Vous pouvez maintenant uploader vos fichiers en utilisant les cases d\'upload ci-dessous. Le poids des fichiers upload&eacute;s de votre fichier vers le serveur ne peut exc&eacute;der %s Ko chacun. Les fichiers ZIP upload&eacute;s dans les sections \'Upload de fichier\' and \'Upload URI/URL\' resteront compress&eacute;s.', //cpg1.3.0
  'reg_instr_3' => 'Si vous souhaitez que le fichier soit d&eacute;compress&eacute;, vous devez utiliser la case de t&eacute;l&eacute;chargement fournie dans la zone \'Upload de ZIP d&eacute;compressible\'', //cpg1.3.0
  'reg_instr_4' => 'Si vous utilisez la section d\upload URI/URL, saisissez l\'adresse du fichier de la forme http://www.votre-site.com/images/exemple.jpg', //cpg1.3.0
  'reg_instr_5' => 'Lorsque le formulaire est compl&eacute;t&eacute;, cliquez sur \'Continuer\'.', //cpg1.3.0
  'reg_instr_6' => 'Upload de ZIP d&eacute;compressible :', //cpg1.3.0
  'reg_instr_7' => 'Uploads de fichier :', //cpg1.3.0
  'reg_instr_8' => 'Uploads URI/URL :', //cpg1.3.0
  'error_report' => 'Rapport d\'erreur', //cpg1.3.0
  'error_instr' => 'Le t&eacute;l&eacute;chargement suivant a g&eacute;n&eacute;r&eacute; des erreurs :', //cpg1.3.0
  'file_name_url' => 'Nom de fichier / URL', //cpg1.3.0
  'error_message' => 'Message d\'erreur', //cpg1.3.0
  'no_post' => 'Fichier non upload&eacute; par POST.', //cpg1.3.0
  'forb_ext' => 'Extension de fichier incorrect.', //cpg1.3.0
  'exc_php_ini' => 'Le poids exc&egrave;de celui permis par le fichier php.ini.', //cpg1.3.0
   'exc_file_size' => 'Le poids exc&egrave;de celui permis par Coppermine.', //cpg1.3.0
  'partial_upload' => 'Upload partiel uniquement.', //cpg1.3.0
  'no_upload' => 'L\'upload ne s\'est pas effectu&eacute;.', //cpg1.3.0
  'unknown_code' => 'Code d\'erreur d\'upload PHP inconnu.', //cpg1.3.0
   'no_temp_name' => 'Pas d\'upload - Pas de dossier temporaire.', //cpg1.3.0
  'no_file_size' => 'Pas de donn&eacute;es ou donn&eacute;es endommag&eacute;es', //cpg1.3.0
  'impossible' => 'Impossible &agrave; d&eacute;placer.', //cpg1.3.0
  'not_image' => 'Pas une image ou image endommag&eacute;e', //cpg1.3.0
  'not_GD' => 'Pas une extension GD.', //cpg1.3.0
  'pixel_allowance' => 'Allocation de pixel exc&eacute;d&eacute;e.', //cpg1.3.0
  'incorrect_prefix' => 'Pr&eacute;fixe URI/URL incorrect', //cpg1.3.0
  'could_not_open_URI' => 'Ouverture d\'URI impossible.', //cpg1.3.0
  'unsafe_URI' => 'S&ucirc;ret&eacute; non v&eacute;rifiable.', //cpg1.3.0
  'meta_data_failure' => 'Erreur de Meta-donn&eacute;es', //cpg1.3.0
  'http_401' => '401 Refus&eacute;', //cpg1.3.0
  'http_402' => '402 Paiement requis', //cpg1.3.0
  'http_403' => '403 Interdit', //cpg1.3.0
  'http_404' => '404 Non trouv&eacute;', //cpg1.3.0
  'http_500' => '500 Erreur interne au serveur', //cpg1.3.0
  'http_503' => '503 Service indisponible', //cpg1.3.0
  'MIME_extraction_failure' => 'Type MIME ind&eacute;termin&eacute;.', //cpg1.3.0
  'MIME_type_unknown' => 'Type MIME inconnu', //cpg1.3.0
  'cant_create_write' => 'Cr&eacute;ature du fichier impossible.', //cpg1.3.0
  'not_writable' => 'Ecriture dans le fichier impossible.', //cpg1.3.0
  'cant_read_URI' => 'Lecture de l\'URI/URL impossible', //cpg1.3.0
  'cant_open_write_file' => 'Ouverture du fichier de l\'URI impossible.', //cpg1.3.0
  'cant_write_write_file' => 'Ecriture dans le fichier de l\'URI impossible.', //cpg1.3.0
  'cant_unzip' => 'D&eacute;zippage impossible.', //cpg1.3.0
  'unknown' => 'Erreur inconnue.', //cpg1.3.0
  'succ' => 'Uploads effectu&eacute;s avec succ&egrave;s', //cpg1.3.0
  'success' => '%s uploads effectu&eacute;s avec succ&egrave;s.', //cpg1.3.0
  'add' => 'Cliquez sur \'Continue\' pour ajouter les fichiers aux albums.', //cpg1.3.0
  'failure' => 'Erreur d\'upload', //cpg1.3.0
  'f_info' => 'Information du fichier', //cpg1.3.0
  'no_place' => 'Le fichier pr&eacute;c&eacute;dent n\'a pas pu &ecirc;tre plac&eacute;.', //cpg1.3.0
  'yes_place' => 'Le fichier pr&eacute;c&eacute;dent a &eacute;t&eacute; plac&eacute; avec succ&egrave;s', //cpg1.3.0
  'max_fsize' => 'Le poids maximal autoris&eacute; pour une image est de %s Ko',
  'album' => 'Album',
  'picture' => 'Photo',
  'pic_title' => 'Titre de la photo',
  'description' => 'Description de la photo',
  'keywords' => 'Mots clefs (s&eacute;par&eacute;s par des espaces)',
  'err_no_alb_uploadables' => 'Nous sommes d&eacute;sol&eacute;s, mais il n\'existe pas d\'album dans lequel vous ayiez le droit d\'uploader des photos',
  'place_instr_1' => 'Merci de placer les fichiers dans les albums maintenant.  Vous pouvez aussi saisir les informations de chaque fichier.', //cpg1.3.0
  'place_instr_2' => 'Plus de fichiers ont besoin d\'&ecirc;tre plac&eacute;s Merci de cliquer sur \'Continuer\'.', //cpg1.3.0
  'process_complete' => 'Vous avez plac&eacute; tous les fichiers avec succ&egrave;s.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
  'title' => 'G&eacute;rer les utilisateurs',
  'name_a' => 'Nom ascendant',
  'name_d' => 'Nom descendant',
  'group_a' => 'Groupe ascendant',
  'group_d' => 'Groupe descendant',
  'reg_a' => 'Date d\'inscription ascendante',
  'reg_d' => 'Date d\'inscription descendante',
  'pic_a' => 'Nombre de photos ascendant',
  'pic_d' => 'Nombre de photos descendant',
  'disku_a' => 'Utilisation espace disque ascendant',
  'disku_d' => 'Utilisatation espace disque descendant',
  'lv_a' => 'Derni&egrave;re visite ascendante', //cpg1.3.0
  'lv_d' => 'Derni&egrave;re visite descendante', //cpg1.3.0
  'sort_by' => 'Classer les utilisateurs par',
  'err_no_users' => 'La table d\'utilisateurs est vide!',
  'err_edit_self' => 'Vous ne pouvez pas modifier votre propre profil, utilisez le lien \'Mon profil\' pour effectuer cette op&eacute;ration',
  'edit' => 'EDITER',
  'delete' => 'SUPPRIMER',
  'name' => 'Nom d\'utilisateur',
  'group' => 'Groupe',
  'inactive' => 'Inactif',
  'operations' => 'Op&eacute;rations',
  'pictures' => 'Photos',
  'disk_space' => 'Espace utilis&eacute; / quota',
  'registered_on' => 'Enregistr&eacute; le',
  'last_visit' => 'Derni&egrave;re visite', //cpg1.3.0
  'u_user_on_p_pages' => '%d utilisateur(s) sur %d page(s)',
  'confirm_del' => 'Voulez vous vraiment SUPPRIMER cet utilisateur?\\nToutes ses photos et albums seront &eacute;galement supprim&eacute;s',
  'mail' => 'E-MAIL',
  'err_unknown_user' => 'L\'utilisateur s&eacute;lectionn&eacute; n\'existe pas!',
  'modify_user' => 'Modifier l\'utilisateur',
  'notes' => 'Commentaires',
  'note_list' => '<li>Si vous ne souhaitez pas modifier le mot de passe actuel, laisse le champs "mot de passe" vide.',
  'password' => 'Mot de passe',
  'user_active' => 'L\'utilisateur est actif',
  'user_group' => 'Groupe de l\'utilisateur',
  'user_email' => 'e-mail de l\'utilisateur',
  'user_web_site' => 'Site web de l\'utilisateur',
  'create_new_user' => 'Cr&eacute;er un nouvel utilisateur',
  'user_location' => 'Localisation de l\'utilisateur',
  'user_interests' => 'Centres d\'int&eacute;r&ecirc;t de l\'utilisateur',
  'user_occupation' => 'Activit&eacute; de l\'utilisateur',
  'latest_upload' => 'Derniers uploads', //cpg1.3.0
  'never' => 'Jamais', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //

if (defined('UTIL_PHP')) $lang_util_php = array(
  'title' => 'Redimensionner les photos',
  'what_it_does' => 'Fonctionnalit&eacute;s',
  'what_update_titles' => 'Met &agrave; jour les titres &agrave; partir des noms de fichier',
  'what_delete_title' => 'Supprime les titres',
  'what_rebuild' => 'Reg&eacute;n&egrave;re les vignettes et les photos redimensionn&eacute;es',
  'what_delete_originals' => 'Supprime les photos originales et les remplace par leur version redimensionn&eacute;e',
  'file' => 'Fichier',
  'title_set_to' => 'titre chang&eacute; en',
  'submit_form' => 'valider',
  'updated_succesfully' => 'modifi&eacute; avec succ&egrave;s',
  'error_create' => 'ERREUR lors de la cr&eacute;ation',
  'continue' => 'Continuer avec plus d\'images',
  'main_success' => 'Le fichier %s est maintenant utilis&eacute; comme image principale',
  'error_rename' => 'Erreur lors du changement du nom de %s &agrave; %s',
  'error_not_found' => 'Le fichier %s n\'a pas &eacute;t&eacute; trouv&eacute;',
  'back' => 'retour &agrave; la page principale',
  'thumbs_wait' => 'Mise &agrave; jour des vignettes et/ou images redimensionn&eacute;es, merci de patienter...',
  'thumbs_continue_wait' => 'Continuer la mise &agrave; jour des vignettes et/ou des images redimensionn&eacute;es...',
  'titles_wait' => 'Mise &agrave; jour des titres, merci de patienter...',
  'delete_wait' => 'Suppression des titres, merci de patienter...',
  'replace_wait' => 'Suppression des originaux et remplacement de ces derniers par les images redimensionn&eacute;es, merci de patienter...',
  'instruction' => 'Instructions rapides',
  'instruction_action' => 'Selectionnez une action',
  'instruction_parameter' => 'D&eacute;finissez les param&egrave;tres',
  'instruction_album' => 'S&eacute;lectionnez un album',
  'instruction_press' => 'Appuyez sur %s',
  'update' => 'Mettre &agrave; jour les vignettes et/ou les photos redimensionn&eacute;es',
  'update_what' => 'Ce qui doit &ecirc;tre mis &agrave; jour',
  'update_thumb' => 'Seulement les vignettes',
  'update_pic' => 'Seulement les photos redimensionn&eacute;es',
  'update_both' => 'Les vignettes et les images redimensionn&eacute;es',
  'update_number' => 'Nombre d\'images trait&eacute;es par clic',
  'update_option' => '(essayez de r&eacute;duire cette valeur si vous avez des probl&egrave;mes de timeout)',
  'filename_title' => 'Nom du fichier / Titre de l\'image',
  'filename_how' => 'Comment le nom du fichier doit-il &ecirc;tre modifi&eacute; ?',
  'filename_remove' => 'Supprimer la fin .jpg et remplacer _ (underscore) par des espaces',
  'filename_euro' => 'Changer 2003_11_23_13_20_20.jpg en 23/11/2003 13:20',
  'filename_us' => 'Changer 2003_11_23_13_20_20.jpg en 11/23/2003 13:20',
  'filename_time' => 'Changer 2003_11_23_13_20_20.jpg en 13:20',
  'delete' => 'Supprimer le titre des photos ou les photos dans leur taille d\'origine',
  'delete_title' => 'Supprimer le titre des photos',
  'delete_original' => 'Supprimer les photos dans leur taille d\'origine',
  'delete_replace' => 'Supprime les images originales en les remplaçant par les versions redimensionn&eacute;es',
  'select_album' => 'Selectionner un album',
  'delete_orphans' => 'Supprimer les commentaires orphelins (fonctionne pour tous les albums)', //cpg1.3.0
  'orphan_comment' => 'Pas de commentaire ophelin trouv&eacute;', //cpg1.3.0
  'delete' => 'Supprimer', //cpg1.3.0
  'delete_all' => 'Supprimer tout', //cpg1.3.0
  'comment' => 'Commentaire : ', //cpg1.3.0
  'nonexist' => 'Li&eacute; au fichier non existant # ', //cpg1.3.0
  'phpinfo' => 'Afficher phpinfo', //cpg1.3.0
  'update_db' => 'Mise &agrave; jour de la base de donn&eacute;es', //cpg1.3.0
  'update_db_explanation' => 'Si vous avez remplac&eacute; des fichiers Coppermine, effectu&eacute; des modifications ou upgrad&eacute; &agrave; partir de versions pr&eacute;c&eacute;dentes de Coppermine, assurez-vous d\'ex&eacute;cuter la mise &agrave; jour de base de donn&eacute;es une fois. Cela cr&eacute;era les tables et/ou valeurs de configuration n&eacute;cessaires dans la base de donn&eacute;es.', //cpg1.3.0
);
?>
