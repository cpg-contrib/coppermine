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
  $Source: /cvsroot/coppermine/stable/lang/french.php,v $
  $Revision$
  $Author$
  $Date$
**********************************************/

if (!defined('IN_COPPERMINE')) { die('Not in Coppermine...');}

// info about translators and translated language
$lang_translation_info = array(
'lang_name_english' => 'French',
'lang_name_native' => 'Français',
'lang_country_code' => 'fr',
'trans_name'=> 'Stefvar and Frantz and Titooy',
'trans_email' => '',
'trans_website' => '',
'trans_date' => '2005-08-31',
);

$lang_charset = 'UTF-8';
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
$lang_check_uncheck_all = 'tout sélectionner/désélectionner'; //cpg1.4

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$album_date_fmt =  '%d %B %Y';
$lastcom_date_fmt =  '%d/%m/%y à %H:%M';
$lastup_date_fmt = '%d %B %Y';
$register_date_fmt = '%d %B %Y';
$lasthit_date_fmt = ' %a %d %B %Y à %H:%M';
$comment_date_fmt =  '%a %d %B %Y à %H:%M';
$log_date_fmt = '%B %d, %Y at %I:%M %p'; //cpg1.4

// For the word censor
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*', 'merde', 'putain', 'enculé*', 'salope', 'bite', 'cul', 'pute', 'pénis', 'clito', 'couille', 'pétasse', 'connard', 'salaud');

$lang_meta_album_names = array(
  'random' => 'Photos aléatoires',
  'lastup' => 'Derniers ajouts',
  'lastalb'=> 'Derniers albums mis à jour',
  'lastcom' => 'Derniers commentaires',
  'topn' => 'Les plus populaires',
  'toprated' => 'Les mieux notées',
  'lasthits' => 'Les dernières vues',
  'search' => 'Résultats de la recherche',
  'favpics'=> 'Photos préférées', //cpg1.4
);

$lang_errors = array(
  'access_denied' => 'Vous n\'avez pas la permission d\'accéder à cette page.',
  'perm_denied' => 'Vous n\'avez pas la permission d\'effectuer cette opération.',
  'param_missing' => 'Script appelé sans les paramètres nécessaires.',
  'non_exist_ap' => 'L\'album/la photo demandé(e) n\'existe pas!',
  'quota_exceeded' => 'Espace disque dépassé<br /><br />Vous avez un quota d\'espace de [quota]K, vos fichiers utilisent [space]K, le fait d\'ajouter ce fichier vous ferait dépasser votre quota.',
  'gd_file_type_err' => 'L\'utilisation de &quot;GD image library&quot; ne vous permet d\'utiliser que de images de type JPEG et PNG.',
  'invalid_image' => 'L\'image que vous avez uploadée est corrompue ou ne peut pas être prise en charge par GD library',
  'resize_failed' => 'Impossible de créer la vignette ou l\'image réduite.',
  'no_img_to_display' => 'Pas d\'image à afficher',
  'non_exist_cat' => 'La catégorie sélectionnée n\'existe pas',
  'orphan_cat' => 'Une catégorie a un parent inexistant, utilisez le gestionnaire de catégories afin de remédier au problème.',
  'directory_ro' => 'Le répertoire \'%s\' n\'est pas inscriptible : les images ne peuvent être supprimées.',
  'non_exist_comment' => 'Le commentaire sélectionné n\'existe pas.',
  'pic_in_invalid_album' => 'L\'image se trouve dans un album qui n\'existe pas (%s)!?',
  'banned' => 'Vous êtes pour l\'instant banni de ce site.',
  'not_with_udb' => 'Cette fonction est désactivée dans Coppermine parce que la galerie est intégrée à un forum. Soit l\'action que vous essayez d\'effectuer n\'est pas disponible dans cette configuration, soit vous devez l\'effectuer depuis le forum auquel vous avez intégré la galerie.',
  'offline_title' => 'Hors Ligne', //cpg1.3.0
  'offline_text' => 'Cette galerie n\'est pas en ligne actuellement. Revenez la voir très bientôt&nbsp;!', //cpg1.3.0
  'ecards_empty' => 'Il n\'y a pas encore de logs enregistrés. Vérifiez que vous avez activé l\'option correspondante dans la configuration de Coppermine.', //cpg1.3.0
  'action_failed' => 'Erreur&nbsp;! Coppermine ne peut pas traiter cette requête.', //cpg1.3.0
  'no_zip' => 'Les librairies nécessaires au traitement des fichiers ZIP ne sont pas installées. Contactez l\'Administrateur du site.', //cpg1.3.0
  'zip_type' => 'Vous n\'avez pas l\'autorisation de télécharger des fichiers ZIP.', //cpg1.3.0
  'database_query' => 'Il y eu une erreur lors de l\'exécution de la requête', //cpg1.4
  'register_globals_on' => 'Le paramètre PHP register_globals est activé (sur on) sur votre serveur, ce qui est une mauvaise idée en terme de sécurité. Il est fortement recommandé de le désactiver (mettre à off). [<a href="http://forum.coppermine-gallery.net/index.php/topic,59569.0.html" rel="external" class="external">more</a>]',
);

$lang_bbcode_help_title = 'aide bbcode'; //cpg1.4
$lang_bbcode_help = 'Vous pouvez ajouter des liens cliquables et formater le texte de ce champ en utilisant les balises bbcode: <li>[b]Gras[/b] =&gt; <b>Gras</b></li><li>[i]Italique[/i] =&gt; <i>Italique</i></li><li>[url=http://votresite.com/]Texte du lien[/url] =&gt; <a href="http://votresite.com">Url Text</a></li><li>[email]utilisateur@domaine.com[/email] =&gt; <a href="mailto:utilisateur@domaine.com">utilisateur@domaine.com</a></li><li>[color=red]Votre texte[/color] =&gt; <span style="color:red">Votre texte</span></li><li>[img]http://coppermine-gallery.net/demo/cpg14x/images/red.gif[/img] => <img src="../images/red.gif" border="0" alt="" /></li>'; //cpg1.4

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
  'home_title' => 'Aller à la page d\'accueil',
  'home_lnk' => 'Accueil',
  'alb_list_title' => 'Aller à la liste des albums',
  'alb_list_lnk' => 'Albums',
  'my_gal_title' => 'Aller dans ma galerie personnelle',
  'my_gal_lnk' => 'Ma galerie',
  'my_prof_title' => 'Aller à mon profil personnel', //cpg1.4
  'my_prof_lnk' => 'Mon profil',
  'adm_mode_title' => 'Passer en mode administrateur',
  'adm_mode_lnk' => 'Mode administrateur',
  'usr_mode_title' => 'Passer au mode utilisateur',
  'usr_mode_lnk' => 'Mode utilisateur',
  'upload_pic_title' => 'Uploader une image dans un album',
  'upload_pic_lnk' => 'Uploader une image',
  'register_title' => 'Créer un compte',
  'register_lnk' => 'Inscription',
  'login_title' => 'Se connecter', //cpg1.4
  'login_lnk' => 'S\'identifier',
  'logout_title' => 'Se déconnecter', //cpg1.4
  'logout_lnk' => 'Quitter',
  'lastup_title' => 'Afficher les dernières mises à jour', //cpg1.4
  'lastup_lnk' => 'Derniers ajouts',
  'lastcom_title' => 'Afficher les derniers commentaires', //cpg1.4
  'lastcom_lnk' => 'Derniers commentaires',
  'topn_title' => 'Afficher les dernières visualisations', //cpg1.4
  'topn_lnk' => 'Les plus populaires',
  'toprated_title' => 'Afficher les vues les mieux notées', //cpg1.4
  'toprated_lnk' => 'Les mieux notées',
  'search_title' => 'Chercher une galerie', //cpg1.4
  'search_lnk' => 'Rechercher',
  'fav_title' => 'Aller à mes favoris', //cpg1.4
  'fav_lnk' => 'Mes favoris',
  'memberlist_title' => 'Afficher la liste des membres', //cpg1.3.0
  'memberlist_lnk' => 'Liste des membres', //cpg1.3.0
  'faq_title' => 'FAQ: Questions fréquemment posées à propos de &quot;Coppermine&quot;', //cpg1.3.0
  'faq_lnk' => 'FAQ', //cpg1.3.0
);

$lang_gallery_admin_menu = array(
  'upl_app_title' => 'Valider les nouveaux uploads', //cpg1.4
  'upl_app_lnk' => 'Fichiers à valider',
  'admin_title' => 'Aller à la configuration', //cpg1.4
  'admin_lnk' => 'Configuration', //cpg1.4
  'albums_title' => 'Aller à la configuration des albums', //cpg1.4
  'albums_lnk' => 'Albums',
  'categories_title' => 'Aller à la configuration des catégories', //cpg1.4
  'categories_lnk' => 'Catégories',
  'users_title' => 'Aller à la configuration des utilisateurs', //cpg1.4
  'users_lnk' => 'Utilisateurs',
  'groups_title' => 'Aller à la configuration des groupes', //cpg1.4
  'groups_lnk' => 'Groupes',
  'comments_title' => 'Afficher tous les commentaires', //cpg1.4
  'comments_lnk' => 'Commentaires',
  'searchnew_title' => 'Aller au téléchargement par lots', //cpg1.4
  'searchnew_lnk' => 'FTP =>',
  'util_title' => 'Aller aux outils d\'administration', //cpg1.4
  'util_lnk' => 'Utilitaires',
  'key_title' => 'Aller au dictionnaire de mots-clés', //cpg1.4
  'key_lnk' => 'Dictionnaire de mot-clé', //cpg1.4
  'ban_title' => 'Aller aux utilisateurs bannis', //cpg1.4
  'ban_lnk' => 'Bannir des utilisateurs',
  'db_ecard_title' => 'Voir les cartes', //cpg1.4
  'db_ecard_lnk' => 'Cartes envoyées',
  'pictures_title' => 'Tri des images', //cpg1.4
  'pictures_lnk' => 'Tri des images', //cpg1.4
  'documentation_lnk' => 'Documentation', //cpg1.4
  'documentation_title' => 'Manuel de Coppermine', //cpg1.4
);

$lang_user_admin_menu = array(
  'albmgr_title' => 'Créer et classer mes albums', //cpg1.4
  'albmgr_lnk' => 'Créer / classer mes albums',
  'modifyalb_title' => 'Aller à la modification de mes albums',  //cpg1.4
  'modifyalb_lnk' => 'Modifier mes albums',
  'my_prof_title' => 'Aller à mon profil personnel', //cpg1.4
  'my_prof_lnk' => 'Mon profil',
);

$lang_cat_list = array(
  'category' => 'Catégories',
  'albums' => 'Albums',
  'pictures' => 'Photos',
);

$lang_album_list = array(
  'album_on_page' => '%d albums sur %d page(s)',
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
  'position' => 'POSITION', //cpg1.4
  'sort_pa' => 'Classement ascendant par position', //cpg1.4
  'sort_pd' => 'Classement descendant par position', //cpg1.4
  'download_zip' => 'Télécharger un fichier ZIP', //cpg1.3.0
  'pic_on_page' => '%d photos sur %d page(s)',
  'user_on_page' => '%d utilisateurs sur %d page(s)',
  'enter_alb_pass' => 'Entrer un mot de passe pour l\'album', //cpg1.4
  'invalid_pass' => 'Mot de passe invalide', //cpg1.4
  'pass' => 'Mot de passe', //cpg1.4
  'submit' => 'Soumettre', //cpg1.4
);

$lang_img_nav_bar = array(
  'thumb_title' => 'Retourner à la page des vignettes',
  'pic_info_title' => 'Afficher/Cacher les informations sur l\'image',
  'slideshow_title' => 'Diaporama',
  'ecard_title' => 'Envoyer cette image en tant que carte électronique',
  'ecard_disabled' => 'Les cartes électroniques sont désactivées',
  'ecard_disabled_msg' => 'Vous n\\\'avez pas l\\\'autorisation d\\\'envoyer des cartes',//js-alert
  'prev_title' => 'Voir l\'image précédente',
  'next_title' => 'Voir l\'image suivante',
  'pic_pos' => 'PHOTO %s/%s',
  'report_title' => 'Signaler ce fichier à l\'administrateur', //cpg1.4
  'go_album_end' => 'Aller à la fin', //cpg1.4
  'go_album_start' => 'Retourner au début', //cpg1.4
  'go_back_x_items' => 'avancer de %s items', //cpg1.4
  'go_forward_x_items' => 'reculer de %s items', //cpg1.4
);

$lang_rate_pic = array(
  'rate_this_pic' => 'Noter cette image ',
  'no_votes' => '(Pas encore de note)',
  'rating' => '(note actuelle : %s / 5 pour %s votes)',
  'rubbish' => 'Très mauvais',
  'poor' => 'Mauvais',
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
  'filename' => 'Nom du fichier : ',  //cpg1.4
  'filesize' => 'Poids du fichier : ', //cpg1.4
  'dimensions' => 'Dimensions : ',  //cpg1.4	
  'date_added' => 'Ajouté le : ',  //cpg1.4
);

$lang_get_pic_data = array(
  'n_comments' => '%s commentaires',
  'n_views' => 'vu %s fois',
  'n_votes' => '(%s votes)',
);

$lang_cpg_debug_output = array(
  'debug_info' => 'Infos de débogage', //cpg1.3.0
  'select_all' => 'Tout sélectionner', //cpg1.3.0
  'copy_and_paste_instructions' => 'Si vous souhaitez soumettre une demande d\'assistance dans le forum de support de Coppermine, copier/collez ces informations de débogage dans votre message. Assurez-vous de remplacer tous les mots de passe, même codés, par \'***\' avant de poster votre message.', //cpg1.3.0
  'phpinfo' => 'Afficher le phpinfo', //cpg1.3.0
  'notices' => 'Remarques', //cpg1.4
);

$lang_language_selection = array(
  'reset_language' => 'Langue par défaut -', //cpg1.3.0
  'choose_language' => 'Choisissez votre langue :', //cpg1.3.0
);

$lang_theme_selection = array(
  'reset_theme' => 'Thème par défaut', //cpg1.3.0
  'choose_theme' => 'Choisissez votre thème', //cpg1.3.0
);

$lang_version_alert = array(
  'version_alert' => 'Version sans support d\'aide!', //cpg1.4
  'no_stable_version' => 'Vous utilisez Coppermine  %s (%s) qui s\'adresse aux utilisateurs très expérimentés - Cette version n\'offre aucun support d\'aide. Vous pouvez l\'utiliser à vos risques et périls ou télécharger la dernière version stable si vous avez besoin d\'aide!', //cpg1.4
  'gallery_offline' => 'La galerie est actuellement hors ligne et n\est visible que par un administrateur. N\'oubliez pas de la remettre en ligne une fois les travaux de maintenance terminés.', //cpg1.4
);

$lang_create_tabs = array(
  'previous' => 'précédent', //cpg1.4
  'next' => 'suivant', //cpg1.4
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
  'error_wakeup' => 'Impossible d\'activer le plugin \'%s\'', //cpg1.4
  'error_install' => 'Impossible d\'installer le plugin \'%s\'', //cpg1.4
  'error_uninstall' => 'Impossible de désinstaller le plugin \'%s\'', //cpg1.4
  'error_sleep' => 'Impossible de désinstaller le plugin \'%s\'<br />', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File include/smilies.inc.php
// ------------------------------------------------------------------------- //

if (defined('SMILIES_PHP')) $lang_smilies_inc_php = array(
  'Exclamation' => 'Exclamation',
  'Question' => 'Question',
  'Very Happy' => 'Très heureux',
  'Smile' => 'Sourire',
  'Sad' => 'Triste',
  'Surprised' => 'Surpris',
  'Shocked' => 'Choqué',
  'Confused' => 'Confus',
  'Cool' => 'Cool',
  'Laughing' => 'Rire',
  'Mad' => 'Fou',
  'Razz' => 'Razz',
  'Embarassed' => 'Embarassé',
  'Crying or Very sad' => 'Pleure ou très triste',
  'Evil or Very Mad' => 'Diabolique ou très en colère',
  'Twisted Evil' => 'Sadique',
  'Rolling Eyes' => 'Lève les yeux au ciel',
  'Wink' => 'Clin d\'oeil',
  'Idea' => 'Idée',
  'Arrow' => 'Flèche',
  'Neutral' => 'Neutre',
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
  0 => 'Quitter le mode administrateur...',
  1 => 'Passer en mode administrateur...',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
  'alb_need_name' => 'Les albums doivent avoir un nom&nbsp;!',//js-alert
  'confirm_modifs' => 'Voulez-vous vraiment effectuer ces modifications ?', //js-alert
  'no_change' => 'Vous n\\\'avez effectué aucun changement&nbsp;!',//js-alert
  'new_album' => 'Nouvel album',
  'confirm_delete1' => 'Voulez vous vraiment supprimer cet album ?', //js-alert
  'confirm_delete2' => '\nToutes les images et tous les commentaires seront perdus!', //js-alert
  'select_first' => 'Sélectionnez d\\\'abord un album',//js-alert
  'alb_mrg' => 'Gestionnaire d\'album',
  'my_gallery' => '* Ma galerie *',
  'no_category' => '* Pas de catégorie *',
  'delete' => 'Supprimer',
  'new' => 'Nouveau',
  'apply_modifs' => 'Appliquer les modifications',
  'select_category' => 'Sélectionner une categorie',
);

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) $lang_banning_php = array(
  'title' => 'Bannir des utilisateurs', //cpg1.4
  'user_name' => 'Nom d\'utilisateur', //cpg1.4
  'ip_address' => 'Adresse IP', //cpg1.4
  'expiry' => 'Expire (champs vide signifie que le bannissement est indéfini)', //cpg1.4
  'edit_ban' => 'Sauvegarder les changements', //cpg1.4
  'delete_ban' => 'Supprimer', //cpg1.4
  'add_new' => 'Ajouter un nouveau bannissement', //cpg1.4
  'add_ban' => 'Ajouter', //cpg1.4
  'error_user' => 'Utilisateur introuvable', //cpg1.4
  'error_specify' => 'Vous devez spécifier un nom d\'utilisateur ou une adresse IP', //cpg1.4
  'error_ban_id' => 'ID invalide!', //cpg1.4
  'error_admin_ban' => 'Vous ne pouvez pas vous bannir vous même&nbsp;!', //cpg1.4
  'error_server_ban' => 'Vous ne pouvez pas bannir votre propre serveur...', //cpg1.4
  'error_ip_forbidden' => 'Vous ne pouvez pas bannir cette adresse, elle est non routable&nbsp;!<br />Si vous désirez bannir une IP privée, changez la dans votre <a href="admin.php">Config</a> (uniquement si Coppermine fonctionne sur un réseau privé).', //cpg1.4
  'lookup_ip' => 'Consulter une adresse IP', //cpg1.4
  'submit' => 'Soumettre!', //cpg1.4
  'select_date' => 'selectionner la date', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File bridgemgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('BRIDGEMGR_PHP')) $lang_bridgemgr_php = array(
  'title' => 'Assistant \&quot;Bridge\&quot;',
'warning' => 'Attention: En utilisant cet assistant, vous devez savoir que des données sensibles sont transmises au travers de formulaires html. Lancez le uniquement depuis votre propre PC (pas depuis un accès public ou un Cybercafé), et n\'oubliez pas de vider le cache de votre navigateur ainsi que les fichiers temporaires, sinon d\'autres personnes seraient en mesure d\'accéder à vos données',
  'back' => 'retour',
  'next' => 'suivant',
  'start_wizard' => 'Démarrer l\'assitant',
  'finish' => 'Terminer',
  'hide_unused_fields' => 'cacher les champs de fomulaires inutilisés (recommandé)',
  'clear_unused_db_fields' => 'Effacer les entrée invalides de la base de données (recommandé)',
  'custom_bridge_file' => 'Le nom de votre fichier bridge personnalisé (si le nom du fichier est <i>monfichier.inc.php</i>, entrez <i>monfichier</i> dans ce champs)',
  'no_action_needed' => 'Pas d\'action à cette étape. Cliquez sur \'suivant\'pour continuer.',
  'reset_to_default' => 'Revenir aux valeur par défaut',
  'choose_bbs_app' => 'Choisissez une application à bridger avec Coppermine',
  'support_url' => 'Allez ici pour de l\'aide sur cette application',
  'settings_path' => 'Chemin(s) utilisés par votre Forum',
  'database_connection' => 'connexion à la base de données',
  'database_tables' => 'tables de la base de données',
  'bbs_groups' => 'Groupes du forum',
  'license_number' => 'Numéro de License',
  'license_number_explanation' => 'entrez votre numéro de license (si nécessaire)',
  'db_database_name' => 'Nom de la base de données',
  'db_database_name_explanation' => 'Entrez le nom de la base de données utilisée par votre forum',
  'db_hostname' => 'Hébergeur de la base de données',
  'db_hostname_explanation' => 'nom de l\'hébergement de la base de données ,généralement &quot;localhost&quot;',
  'db_username' => 'Nom d\'utilisateur',
  'db_username_explanation' => 'Nom d\'utilisateur  Mysql pour la connection à la base de données utilisée par votre forum',
  'db_password' => 'Mot de passe',
  'db_password_explanation' => 'Mot de passe pour la base de données',
  'full_forum_url' => 'URL du forum',
  'full_forum_url_explanation' => 'Adresse complète de votre forum (par exemple  http://www.votresite.com/forum)',
  'relative_path_of_forum_from_webroot' => 'Adresse relative de votre forum',
  'relative_path_of_forum_from_webroot_explanation' => 'Adresse relative de votre forum (Exemple: si l\'adresse de votre forum est  http://www.votresite.com/forum/, entrer &quot;/forum/&quot; dans ce champ)',
  'relative_path_to_config_file' => 'Chemin relatif à la page de configuration de votre forum',
  'relative_path_to_config_file_explanation' => 'Chemin relatif à la page de configuration de votre forum, vu depuis le dossier ou se trouve Coppermine (Exemple &quot;../forum/&quot; si votre l\'adresse de votre forum est http://www.yourdomain.tld/forum/ et celle de Coppermine http://www.yourdomain.tld/gallery/)',
  'cookie_prefix' => 'Préfixe du Cookie',
  'cookie_prefix_explanation' => 'Ce doit être le nom du Cookie de votre forum',
  'table_prefix' => 'Préfixe des tables',
  'table_prefix_explanation' => 'Ce doit être le même que celui choisi pour les tables de votre forum.',
  'user_table' => 'Table utilisateur',
  'user_table_explanation' => '(Généralement le choix par défaut convient, sauf si l\'installation de votre forum n\'est pas standard)',
  'session_table' => 'Table des Sessions',
  'session_table_explanation' => '(Généralement le choix par défaut convient, sauf si l\'installation de votre forum n\'est pas standard)',
  'group_table' => 'Table des Groupes',
  'group_table_explanation' => '(Généralement le choix par défaut convient, sauf si l\'installation de votre forum n\'est pas standard)',
  'group_relation_table' => 'Table des relations des groupes',
  'group_relation_table_explanation' => '(Généralement le choix par défaut convient, sauf si l\'installation de votre forum n\'est pas standard)',
  'group_mapping_table' => 'Table de correspondance des groupes',
  'group_mapping_table_explanation' => '(Généralement le choix par défaut convient, sauf si l\'installation de votre forum n\'est pas standard)',
  'use_standard_groups' => 'Utilisez les groupes standards du forum',
  'use_standard_groups_explanation' => 'Utilisez les groupes standards (prédéfinis) (recommandé). Tous les réglages des groupes personnalisés seront annulés. Désactivez cette option uniquement si vous êtes vraiment sûr de ce que vous faites&nbsp;!',
  'validating_group' => 'Groupe en attente de validation',
  'validating_group_explanation' => 'Le numéro d\'identification (ID) du groupe où se trouvent les utilisateurs en attente de validation sur votre forum (généralement le choix par défaut convient, sauf si l\'installation de votre forum n\'est pas standard)',
  'guest_group' => 'Groupe Invités',
  'guest_group_explanation' => 'Le numéro d\'identification (ID) du groupe où se trouvent les invités (utilisateurs non connectés) sur votre forum (généralement le choix par défaut convient, sauf si l\'installation de votre forum n\'est pas standard)',
  'member_group' => 'Groupe membres',
  'member_group_explanation' => 'Le numéro d\'identification (ID) du groupe où se trouvent les simples utilisateurs sur votre forum (généralement le choix par défaut convient, sauf si l\'installation de votre forum n\'est pas standard)',
  'admin_group' => 'Groupe Administrateurs',
  'admin_group_explanation' => 'Le numéro d\'identification (ID) du groupe où se trouvent les administrateurs de votre forum (généralement le choix par défaut convient, sauf si l\'installation de votre forum n\'est pas standard)',
  'banned_group' => 'Groupe Bannis',
  'banned_group_explanation' => 'Le numéro d\'identification (ID) du groupe où se trouvent les utilisateurs bannis sur votre forum (généralement le choix par défaut convient, sauf si l\'installation de votre forum n\'est pas standard)',
  'global_moderators_group' => 'Groupe Modérateurs Globaux',
  'global_moderators_group_explanation' => 'Le numéro d\'identification (ID) du groupe où se trouvent les modérateurs globaux votre forum (généralement le choix par défaut convient, sauf si l\'installation de votre forum n\'est pas standard)',
  'special_settings' => 'Paramètres spécifiques au forum',
  'logout_flag' => 'Version de phpBB',
  'logout_flag_explanation' => 'Quelle est votre version de phpBB (ce paramètre définit la manière de gérer la fermeture de session)',
  'use_post_based_groups' => 'Utiliser les groupes basés sur le nombre de messages ?',
  'logout_flag_yes' => '2.0.5 ou supérieur',
  'logout_flag_no' => '2.0.4 ou inférieur',
  'use_post_based_groups_explanation' => 'Faut-il tenir compte des groupes basés sur le nombre de messages (permet une gestion granulaire des permissions ) ou n\'utiliser que les groupes par défaut (rend l\'administration plus facile, recommandé). Vous pouvez modifier ces réglages plus tard.',
  'use_post_based_groups_yes' => 'Oui',
  'use_post_based_groups_no' => 'Non',
  'error_title' => 'Vous devez corriger ces erreurs avant de continuer. Retournez à la page précédente.',
  'error_specify_bbs' => 'Vous devez spécifier avec quelle application vous voulez bridger Coppermine.',
  'error_no_blank_name' => 'Vous ne pouvez pas laisser vide le nom de votre Bridge personnalisé.',
  'error_no_special_chars' => 'Le nom du Bridge ne doit pas comprendre de caractères spéciaux excepté le soulignement (_) et le tiret (-)!',
  'error_bridge_file_not_exist' => 'Les fichiers du bridge %s n\existent pas sur le serveur. Vérifiez que vous les avez bien uploadés.',
  'finalize' => 'Activer/désactiver l\'intégration avec le forum',
  'finalize_explanation' => 'Jusqu\'à présent, vos réglages ont été inscrit dans la base de données mais l\'intégration avec le forum n\'a pas été activée. Vous pouvez activer/désactiver cette intégration quand vous le voulez. Soyez certain de vous souvenir du nom d\'utilisateur et du mot de passe de votre compte administrateur de Coppermine (non-bridgé), vous pourriez en avoir besoin plus tard pour faire des modifications. Si quelque chose ne marche pas, allez sur %s et désactivez l\'intégration au forum, en utilisant votre compte administrateur &quot;non-bridgé&quot; (habituellement, c\'est celui que vous avez défini lors de l\'installation de Coppermine).',
  'your_bridge_settings' => 'Configuration de votre Bridge',
  'title_enable' => 'Active l\'intégration/le bridge avec %s',
  'bridge_enable_yes' => 'Activé',
  'bridge_enable_no' => 'Désactivé',
  'error_must_not_be_empty' => 'ne peut pas être vide',
  'error_either_be' => 'doit être %s ou %s',
  'error_folder_not_exist' => '%s n\'existe pas. Corrigez la valeur entrée pour %s',
  'error_cookie_not_readible' => 'Coppermine ne peut pas lire le cookie nommé %s. Corrigez la valeur que vous avez entré pour %s, ou allez dans le panneau d\administration de votre forum et vérifiez que le chemin d\accès au cookie est lisible par Coppermine.',
  'error_mandatory_field_empty' => 'Vous ne pouvez pas laisser le champ %s vide -Entrez la bonne valeur.',
  'error_no_trailing_slash' => 'Le champ %s ne doit pas commencer par le signe \'/\'.',
  'error_trailing_slash' => 'Le champ %s doit commencer par le signe \'/\'.',
  'error_db_connect' => 'Connection impossible à la base de donné avec vos informations. Voici la réponse Mysql:',
  'error_db_name' => 'Bien que Coppermine ait pu établir une connection, il n\'a pas trouvé la base de donnée %s. Vérifiez que vous avez défini %s correctement. Voici le message de mySQL:',
  'error_prefix_and_table' => '%s et ',
  'error_db_table' => 'Impossible de trouver la table %s. Vérifiez que la valeur de  %s est correcte.',
  'recovery_title' => 'Gestionnaire de Bridge: récupération d\'urgence',
  'recovery_explanation' => 'Si vous venez ici pour gérer l\'intégration de votre forum avec votre galerie Coppermine, Vous devez d\'abord vous identifier en tant qu\'administrateur. Si vous ne parvenez pas à vous identifier parce que l\'intégration de votre forum ne fonctionne pas comme prévu, vous pouvez désactiver l\'intégration avec votre forum depuis cette page. Entrer votre identifiant et votre mot de passe ne va pas vous permettre de vous identifier, celà va seulement désactiver le brige avec votre forum. Pour plus de détails, reportez vous à la documentation.',
  'username' => 'Nom d\'utilisateur',
  'password' => 'Mot de passe',
  'disable_submit' => 'Soumettre',
  'recovery_success_title' => 'Autorisation accordée',
  'recovery_success_content' => 'Vous avez désactivé avec succès le bridge avec votre forum. Coppermine fonctionne maintenant en mode autonome.',
  'recovery_success_advice_login' => 'S\'identifier comme administrateur pour éditer la configuration de votre bridge et/ou activer l\'intégration avec votre forum à nouveau.',
  'goto_login' => 'Aller à la page d\'identification',
  'goto_bridgemgr' => 'Aller au gestionnaire de bridge',
  'recovery_failure_title' => 'Autorisation refusée',
  'recovery_failure_content' => 'Vous avez soumis les mauvaises données. Vous devez entrer les données de votre compte administrateur pour la version autonome de Coppermine (habituellement le compte créé lors de l\'installation de Coppermine).',
  'try_again' => 'Réessayez',
  'recovery_wait_title' => 'Le temps d\'attente ne s\'est pas écoulé',
  'recovery_wait_content' => 'Pour des raisons de sécurité, le script n\'autorise pas plusieurs échecs de connexion rapprochés dans le temps. Veuillez patientez avant de réessayer de vous identifier.',
  'wait' => 'Patientez',
  'create_redir_file' => 'Créer le dossier de redirection (recommandé)',
  'create_redir_file_explanation' => 'Pour rediriger vos utilisateurs vers Coppermine après l\'ouverture de leur session sur le forum, il vous faut un fichier de redirection dans le répertoire où se trouve votre forum. Si cette option est choisie, le gestionnaire de bridge va essayer de créer ce fichier automatiquement. S\'il ne peut pas écrire dans ce répertoire, il vous donnera le code à copier/coller vous-même dans le fichier.',
  'browse' => 'Parcourir',
);

// ------------------------------------------------------------------------- //
// File calendar.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('CALENDAR_PHP')) $lang_calendar_php = array(
  'title' => 'Calendrier', //cpg1.4
  'close' => 'fermer', //cpg1.4
  'clear_date' => 'effacer la date', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
  'miss_param' => 'Les paramètres requis pour l\'operation \'%s\' sont manquants&nbsp;!',
  'unknown_cat' => 'La catégorie sélectionnée n\'existe pas dans la base de données',
  'usergal_cat_ro' => 'La galerie des utilisateurs ne peut pas être supprimée!',
  'manage_cat' => 'Gérer les catégories',
  'confirm_delete' => 'Voulez vous vraiment SUPPRIMER cette catégorie ?',//js-alert
  'category' => 'Catégorie',
  'operations' => 'Opérations',
  'move_into' => 'Déplacer dans',
  'update_create' => 'Mettre à jour / créer la catégorie',
  'parent_cat' => 'Catégorie parente',
  'cat_title' => 'Titre de la catégorie',
  'cat_thumb' => 'Vignette de la catégorie', //cpg1.3.0
  'cat_desc' => 'Description de la catégorie',
  'categories_alpha_sort' => 'Classement des catégories par ordre alphabétique (au lieu du classement par ajout)', //cpg1.4
  'save_cfg' => 'Sauvegarder la configuration', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File admin.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('ADMIN_PHP')) $lang_admin_php = array(
  'title' => 'Configuration de la galerie', //cpg1.4
  'manage_exif' => 'Administrer l\'affichage des exifs', //cpg1.4
  'manage_plugins' => 'Administrer les plugins', //cpg1.4
  'manage_keyword' => 'Administrer les mot-clefs', //cpg1.4
  'restore_cfg' => 'Restaurer les paramètres d\'origine',
  'save_cfg' => 'Sauvegarder la nouvelle configuration',
  'notes' => 'Notes',
  'info' => 'Information',
  'upd_success' => 'La configuration de Coppermine a été mise à jour',
  'restore_success' => 'La configuration d\'origine de Coppermine a été restaurée',
  'name_a' => 'Ascendant par nom',
  'name_d' => 'Descendantpar nom',
  'title_a' => 'Ascendant par titre',
  'title_d' => 'Descendant par titre',
  'date_a' => 'Ascendant par date',
  'date_d' => 'Descendant par date',
  'pos_a' => 'Ascendant par ajout', //cpg1.4
  'pos_d' => 'Descendant par ajout', //cpg1.4
  'th_any' => 'Aspect max',
  'th_ht' => 'Hauteur',
  'th_wd' => 'Largeur',
  'label' => 'Libellé', //cpg1.3.0
  'item' => 'Liste', //cpg1.3.0
  'debug_everyone' => 'Tout le monde', //cpg1.3.0
  'debug_admin' => 'Administrateurs uniquement', //cpg1.3.0
  'no_logs'=> 'Désactivé', //cpg1.4
  'log_normal'=> 'Normal', //cpg1.4
  'log_all' => 'Tout', //cpg1.4
  'view_logs' => 'Voir les logs', //cpg1.4
  'click_expand' => 'Cliquer sur un nom de section pour afficher', //cpg1.4
  'expand_all' => 'Tout afficher', //cpg1.4
  'notice1' => '(*) Cette configuration ne doit pas être changée si vous avez déjà des fichiers dans votre base de données.', //cpg1.4 - (relocated)
  'notice2' => '(**) Si vous changez cette configuration, seuls les nouveaux fichiers ajoutés seront concernés, il est donc conseillé de ne pas la modifier si vous avez déjà des fichiers. Vous pouvez cependant appliquer les modifications aux fichiers existant à l\'aide des &quot;<a href="util.php">outils d\'administration</a> (redimensionner les images)&quot; depuis le menu d\'administration.', //cpg1.4 - (relocated)
  'notice3' => '(***) Tous les logs sont écrits en anglais.', //cpg1.4 - (relocated)
  'bbs_disabled' => 'Fonction désactivé si vous utilisez l\'intégration BB', //cpg1.4
  'auto_resize_everyone' => 'Tous', //cpg1.4
  'auto_resize_user' => 'Utilisateur seulement', //cpg1.4
  'ascending' => 'ascendant', //cpg1.4
  'descending' => 'descendant', //cpg1.4
);

if (defined('ADMIN_PHP')) $lang_admin_data = array(
  'Paramètres généraux',
  array('Nom de la galerie', 'gallery_name', 0, 'f=index.htm&amp;as=admin_general_name&amp;ae=admin_general_name_end'), //cpg1.4
  array('Description de la galerie', 'gallery_description', 0, 'f=index.htm&amp;as=admin_general_description&amp;ae=admin_general_description_end'), //cpg1.4
  array('Adresse courriel de l\'administrateur', 'gallery_admin_email', 0, 'f=index.htm&amp;as=admin_general_email&amp;ae=admin_general_email_end'), //cpg1.4
  array('URL du répertoire de votre galerie coppermine (pas \'index.php\' ou similaire à la fin)', 'ecards_more_pic_target', 0, 'f=index.htm&amp;as=admin_general_coppermine-url&amp;ae=admin_general_coppermine-url_end'), //cpg1.4
  array('URL de votre page d\'accueil', 'home_target', 0, 'f=index.htm&amp;as=admin_general_home-url&amp;ae=admin_general_home-url_end'), //cpg1.4
  array('Autoriser le téléchargement ZIP des photos dans les Favoris', 'enable_zipdownload', 1, 'f=index.htm&amp;as=admin_general_zip-download&amp;ae=admin_general_zip-download_end'), //cpg1.4
  array('Différence d\'heure par rapport au GMT (il est actuellement: ' . localised_date(-1, $comment_date_fmt) . ')','time_offset',0, 'f=index.htm&amp;as=admin_general_time-offset&amp;ae=admin_general_time-offset_end&amp;top=1'), //cpg1.4
  array('Activer les mots de passe cryptés (ne peut pas être supprimé)','enable_encrypted_passwords',1, 'f=index.htm&amp;as=admin_general_encrypt_password_start&amp;ae=admin_general_encrypt_password_end&amp;top=1'), // cpg 1.4
  array('Activer les icônes d\'aide (Aide en anglais uniquement)','enable_help',9, 'f=index.htm&amp;as=admin_general_help&amp;ae=admin_general_help_end'), //cpg1.4
  array('Activer les mots cliquables lors d\'une recherche','clickable_keyword_search',14, 'f=index.htm&amp;as=admin_general_keywords_start&amp;ae=admin_general_keywords_end'), //cpg1.4
  array('Activer les plugins', 'enable_plugins', 12, 'f=index.htm&amp;as=admin_general_enable-plugins&amp;ae=admin_general_enable-plugins_end'),  //cpg1.4
  array('Autoriser le bannissement d\'adresse IP non routable (privé)', 'ban_private_ip', 1,  'f=index.htm&amp;as=admin_general_private-ip&amp;ae=admin_general_private-ip_end'), //cpg1.4
  array('Interface de téléchargement par lot', 'browse_batch_add', 1, 'f=index.htm&amp;as=admin_general_browsable_batch_add&amp;ae=admin_general_browsable_batch_add_end'), //cpg1.4

  'Langue &amp; jeux de caractères',
  array('Langue', 'lang', 5, 'f=index.htm&amp;as=admin_language_language&amp;ae=admin_language_language_end'), //cpg1.4
  array('Remplacer les expressions non trouvées par l\'anglais ?', 'language_fallback', 1, 'f=index.htm&amp;as=admin_language_fallback&amp;ae=admin_language_fallback_end'), //cpg1.4
  array('Jeu de caractères', 'charset', 4, 'f=index.htm&amp;as=admin_language_charset&amp;ae=admin_language_charset_end'), //cpg1.4
  array('Afficher la liste des langues', 'language_list', 1, 'f=index.htm&amp;as=admin_language_list&amp;ae=admin_language_list_end'), //cpg1.4
  array('Afficher les drapeaux des langues', 'language_flags', 8, 'f=index.htm&amp;as=admin_language_flags&amp;ae=admin_language_flags_end&amp;top=1'), //cpg1.4
  array('Afficher &quot;reset&quot; dans la sélection des langues', 'language_reset', 1, 'f=index.htm&amp;as=admin_language_reset&amp;ae=admin_language_reset_end&amp;top=1'), //cpg1.4
  //array('Afficher précédente/suivante sur les pages', 'previous_next_tab', 1), //cpg1.4

  'Paramètres des thèmes',
  array('Thème', 'theme', 6, 'f=index.htm&amp;as=admin_theme_theme&amp;ae=admin_theme_theme_end'), //cpg1.4
  array('Afficher la liste des thèmes', 'theme_list', 1, 'f=index.htm&amp;as=admin_theme_theme_list&amp;ae=admin_theme_theme_list_end'), //cpg1.4
  array('Afficher &quot;reset&quot; dans la sélection des thèmes', 'theme_reset', 1, 'f=index.htm&amp;as=admin_theme_theme_reset&amp;ae=admin_theme_theme_reset_end'), //cpg1.4
  array('Afficher la FAQ', 'display_faq', 1, 'f=index.htm&amp;as=admin_theme_faq&amp;ae=admin_theme_faq_end'), //cpg1.4
  array('Nom du lien du menu personnalisé', 'custom_lnk_name', 0,'f=index.htm&amp;as=admin_theme_custom_lnk_name&amp;ae=admin_theme_custom_lnk_name_end'), //cpg1.4
  array('URL du menu personnalisé', 'custom_lnk_url', 0,'f=index.htm&amp;as=admin_language_custom_lnk_url&amp;ae=admin_language_custom_lnk_url_end'), //cpg1.4
  array('Afficher l\'aide pour le bbcode', 'show_bbcode_help', 1, 'f=index.htm&amp;as=admin_theme_bbcode&amp;ae=admin_theme_bbcode_end&amp;top=1'), //cpg1.4
  array('Afficher les boutons indiquant le respect des standards XHTML et CSS pour les thèmes conformes','vanity_block',1, 'f=index.htm&amp;as=vanity_block&amp;ae=vanity_block_end'), //cpg1.4
  array('Chemin pour inclure un en-tête de page personnalisé', 'custom_header_path', 0, 'f=index.htm&amp;as=admin_theme_include_path_start&amp;ae=admin_theme_include_path_end'), //cpg1.4
  array('Chemin pour inclure un pied de page personnalisé', 'custom_footer_path', 0, 'f=index.htm&amp;as=admin_theme_include_path_start&amp;ae=admin_theme_include_path_end'), //cpg1.4

  'Affichage de la liste des albums',
  array('Largeur du tableau principal (pixels ou %)', 'main_table_width', 0, 'f=index.htm&amp;as=admin_album_table-width&amp;ae=admin_album_table-width_end'), //cpg1.4
  array('Nombre de niveaux de catégories à afficher', 'subcat_level', 0, 'f=index.htm&amp;as=admin_album_category-levels&amp;ae=admin_album_category-levels_end'), //cpg1.4
  array('Nombre d\'albums à afficher', 'albums_per_page', 0, 'f=index.htm&amp;as=admin_album_number&amp;ae=admin_album_number_end'), //cpg1.4
  array('Nombre de colonnes pour la liste des albums', 'album_list_cols', 0, 'f=index.htm&amp;as=admin_album_columns&amp;ae=admin_album_columns_end'), //cpg1.4
  array('Taille des vignettes en pixels', 'alb_list_thumb_size', 0, 'f=index.htm&amp;as=admin_album_thumbnail-size&amp;ae=admin_album_thumbnail-size_end'), //cpg1.4
  array('Le contenu de la page principale', 'main_page_layout', 0, 'f=index.htm&amp;as=admin_album_list_content&amp;ae=admin_album_list_content_end'), //cpg1.4
  array('Afficher les vignettes de l\'album du premier niveau avec la catégorie','first_level',1, 'f=index.htm&amp;as=admin_album_first-level_thumbs&amp;ae=admin_album_first-level_thumbs_end'), //cpg1.4
  array('Classer les catégories par ordre alphabétique (au lieu du classement par ajout)','categories_alpha_sort',1, 'f=index.htm&amp;as=admin_album_list_alphasort_start&amp;ae=admin_album_list_alphasort_end'), //cpg1.4
  array('Afficher le nombre de fichiers liés','link_pic_count',1, 'f=index.htm&amp;as=admin_album_linked_files_start&amp;ae=admin_album_linked_files_end'), //cpg1.4

  'Affichage des vignettes',
  array('Nombre de colonnes sur la page des vignettes', 'thumbcols', 0, 'f=index.htm&amp;as=admin_thumbnail_columns&amp;ae=admin_thumbnail_columns_end'), //cpg1.4
  array('Nombre de lignes sur la page des vignettes', 'thumbrows', 0, 'f=index.htm&amp;as=admin_thumbnail_rows&amp;ae=admin_thumbnail_rows_end'), //cpg1.4
  array('Nombre maximal d\'onglets à afficher', 'max_tabs', 10, 'f=index.htm&amp;as=admin_thumbnail_tabs&amp;ae=admin_thumbnail_tabs_end'), //cpg1.4
  array('Afficher la légende de l\'image (en plus de son titre) sous la vignette', 'caption_in_thumbview', 1, 'f=index.htm&amp;as=admin_thumbnail_display_caption&amp;ae=admin_thumbnail_display_caption_end'), //cpg1.4
  array('Afficher le nombre de vues sous la vignette', 'views_in_thumbview', 1, 'f=index.htm&amp;as=admin_thumbnail_display_views&amp;ae=admin_thumbnail_display_views_end'), //cpg1.4
  array('Afficher le nombre de commentaires sous les vignettes', 'display_comment_count', 1, 'f=index.htm&amp;as=admin_thumbnail_display_comments&amp;ae=admin_thumbnail_display_comments_end'), //cpg1.4
  array('Afficher le nom de l\'utilisateur sous la vignette', 'display_uploader', 1, 'f=index.htm&amp;as=admin_thumbnail_display_uploader&amp;ae=admin_thumbnail_display_uploader_end'), //cpg1.4
  //array('Display name of admin uploaders below the thumbnail', 'display_admin_uploader', 1, 'f=index.htm&amp;as=admin_thumbnail_display_admin_uploader&amp;ae=admin_thumbnail_display_admin_uploader_end'), //cpg1.4
  array('Afficher le nom du fichier sous la vignette', 'display_filename', 1, 'f=index.htm&amp;as=admin_thumbnail_display_filename&amp;ae=admin_thumbnail_display_filename_end'), //cpg1.4
  //array('Afficher la description des albums', 'alb_desc_thumb', 1, 'f=index.htm&amp;as=admin_thumbnail_display_description&amp;ae=admin_thumbnail_display_description_end'), //cpg1.4
  array('Classement par défaut des fichiers', 'default_sort_order', 3, 'f=index.htm&amp;as=admin_thumbnail_default_sortorder&amp;ae=admin_thumbnail_default_sortorder_end'), //cpg1.4
  array('Nombre minimun de vote pour apparaître dans la liste \'les mieux notés\'', 'min_votes_for_rating', 0, 'f=index.htm&amp;as=admin_thumbnail_minimum_votes&amp;ae=admin_thumbnail_minimum_votes_end'), //cpg1.4

  'Vue des images', //cpg1.4
  array('Largeur de la table pour l\'affichage des fichiers (pixels ou %)', 'picture_table_width', 0, 'f=index.htm&amp;as=admin_image_comment_table-width&amp;ae=admin_image_comment_table-width_end'), //cpg1.4
  array('Information des fichiers visible par défaut', 'display_pic_info', 1, 'f=index.htm&amp;as=admin_image_comment_info_visible&amp;ae=admin_image_comment_info_visible_end'), //cpg1.4
  array('Nombre maximun de caractères pour la description des fichiers', 'max_img_desc_length', 0, 'f=index.htm&amp;as=admin_image_comment_descr_length&amp;ae=admin_image_comment_descr_length_end'), //cpg1.4
  array('Nombre maximun de caractères dans un mot', 'max_com_wlength', 0, 'f=index.htm&amp;as=admin_image_comment_chars_per_word&amp;ae=admin_image_comment_chars_per_word_end'), //cpg1.4
  array('Afficher le négatif', 'display_film_strip', 1, 'f=index.htm&amp;as=admin_image_comment_filmstrip_toggle&amp;ae=admin_image_comment_filmstrip_toggle_end'), //cpg1.4
  array('Afficher le nom du fichier en dessous du négatif', 'display_film_strip_filename', 1, 'f=index.htm&amp;as=admin_image_comment_display_film_strip_filename&amp;ae=admin_image_comment_display_film_strip_filename_end'), //cpg1.4
  array('Nombre de vignettes dans le négatif', 'max_film_strip_items', 0, 'f=index.htm&amp;as=admin_image_comment_filmstrip_number&amp;ae=admin_image_comment_filmstrip_number_end'), //cpg1.4
  array('Intervale du diaporama en millisecondes (1 seconde = 1000 millisecondes)', 'slideshow_interval', 0, 'f=index.htm&amp;as=admin_image_comment_slideshow_interval&amp;ae=admin_image_comment_slideshow_interval_end'), //cpg1.4

  'Paramètres des commentaires', //cpg1.4
  array('Filtrer les mots interdits dans les commentaires', 'filter_bad_words', 1, 'f=index.htm&amp;as=admin_image_comment_bad_words&amp;ae=admin_image_comment_bad_words_end'), //cpg1.4
  array('Autoriser les smileys dans les commentaires', 'enable_smilies', 1, 'f=index.htm&amp;as=admin_image_comment_smilies&amp;ae=admin_image_comment_smilies_end'), //cpg1.4
  array('Autoriser plusieurs commentaires consécutifs pour une images par un même utilisateur (désactive la protection anti-flood)', 'disable_comment_flood_protect', 1, 'f=index.htm&amp;as=admin_image_comment_flood&amp;ae=admin_image_comment_flood_end'), //cpg1.4
  array('Nombre maximun de lignes dans un commentaire', 'max_com_lines', 0, 'f=index.htm&amp;as=admin_image_comment_lines&amp;ae=admin_image_comment_lines_end'), //cpg1.4
  array('Longueur maximum d\'un commentaire', 'max_com_size', 0, 'f=index.htm&amp;as=admin_image_comment_length&amp;ae=admin_image_comment_length_end'), //cpg1.4
  array('Informer l\'administrateur de nouveaux commentaires par courriel', 'email_comment_notification', 1, 'f=index.htm&amp;as=admin_image_comment_admin_notify&amp;ae=admin_image_comment_admin_notify_end'), //cpg1.4
  array('Ordre de tri des commentaires', 'comments_sort_descending', 17, 'f=index.htm&amp;as=admin_comment_sort_start&amp;ae=admin_comment_sort_end'), //cpg1.4
  array('Préfixe pour les commentaires d\'utilisateurs anonymes', 'comments_anon_pfx', 0, 'f=index.htm&amp;as=comments_anon_pfx&amp;ae=comments_anon_pfx_end'), //cpg1.4

  'Paramètres des images et vignettes',
  array('Qualité pour les fichiers JPG', 'jpeg_qual', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_jpeg_quality&amp;ae=admin_picture_thumbnail_jpeg_quality_end'), //cpg1.4
  array('Dimension maximale pour les vignettes <a href="#notice2" class="clickable_option">**</a>', 'thumb_width', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max-dimension&amp;ae=admin_picture_thumbnail_max-dimension_end'), //cpg1.4
  array('Utiliser la dimension (largeur ou hauteur ou aspect max pour la vignette) <a href="#notice2" class="clickable_option">**</a>', 'thumb_use', 7, 'f=index.htm&amp;as=admin_picture_thumbnail_use-dimension&amp;ae=admin_picture_thumbnail_use-dimension_end'), //cpg1.4
  array('Créer des images intermédiaires','make_intermediate',1, 'f=index.htm&amp;as=admin_picture_thumbnail_intermediate_toggle&amp;ae=admin_picture_thumbnail_intermediate_toggle_end'), //cpg1.4
  array('Largeur ou hauteur maximale pour une image/vidéo intermédiaire <a href="#notice2" class="clickable_option">**</a>', 'picture_width', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_intermediate_dimension&amp;ae=admin_picture_thumbnail_intermediate_dimension_end'), //cpg1.4
  array('Poids maximal des images à uploader (Ko)', 'max_upl_size', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max_upload_size&amp;ae=admin_picture_thumbnail_max_upload_size_end'), //cpg1.4
  array('Longueur ou hauteur maximale pour les images/vidéos uploadées (en pixels)', 'max_upl_width_height', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max_upload_dimension&amp;ae=admin_picture_thumbnail_max_upload_dimension_end'), //cpg1.4
  array('Redimentionner automatiquement les images qui dépassent la hauteur et/ou la largeur maximale', 'auto_resize', 16, 'f=index.htm&amp;as=admin_picture_thumbnail_auto-resize&amp;ae=admin_picture_thumbnail_auto-resize_end'), //cpg1.4

  'Paramètres avancés des images et vignettes',
  array('Les albums peuvent être privés (Note: si vous commutez de \'Oui\' à \'Non\' les albums privés actuels deviendront publics)', 'allow_private_albums', 1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_private_toggle&amp;ae=admin_picture_thumb_advanced_private_toggle_end'), //cpg1.4
  array('Montrer les vignettes des albums privés aux utilisateurs anonymes','show_private',1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_private_icon_show&amp;ae=admin_picture_thumb_advanced_private_icon_show_end'), //cpg1.4
  array('Caractères interdits dans les noms de fichiers', 'forbiden_fname_char',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_filename_forbidden_chars&amp;ae=admin_picture_thumb_advanced_filename_forbidden_chars_end'), //cpg1.4
  //array('Extensions de fichiers acceptées pour l\'upload de fichiers', 'allowed_file_extensions',0, 'f=index.htm&amp;as=&amp;ae=_end'), //cpg1.4
  array('Types d\'images autorisés', 'allowed_img_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_pic_extensions&amp;ae=admin_picture_thumb_advanced_pic_extensions_end'), //cpg1.4
  array('Types de vidéos autorisés', 'allowed_mov_types',0, 'f=index.htm&amp;as=admin_thumbs_advanced_movie&amp;ae=admin_thumbs_advanced_movie_end'), //cpg1.4
  array('Démarrage automatique des vidéos', 'media_autostart',1, 'f=index.htm&amp;as=admin_movie_autoplay&amp;ae=admin_movie_autoplay_end'), //cpg1.4
  array('Types de fichiers sons autorisés', 'allowed_snd_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_audio_extensions&amp;ae=admin_picture_thumb_advanced_audio_extensions_end'), //cpg1.4
  array('Types de fichiers textes autorisés', 'allowed_doc_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_doc_extensions&amp;ae=admin_picture_thumb_advanced_doc_extensions_end'), //cpg1.4
  array('Méthode de redimensionnement des images','thumb_method',2, 'f=index.htm&amp;as=admin_picture_thumb_advanced_resize_method&amp;ae=admin_picture_thumb_advanced_resize_method_end'), //cpg1.4
  array('Chemin vers l\'utilitaire \'convert\' d\'ImageMagick (exemple /usr/bin/X11/)', 'impath', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_im_path&amp;ae=admin_picture_thumb_advanced_im_path_end'), //cpg1.4
  //array('Types d\'images autorisés (seulement pour ImageMagick)', 'allowed_img_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_allowed_imagetypes&amp;ae=admin_picture_thumb_advanced_allowed_imagetypes_end'), //cpg1.4
  array('Options de ligne de commande pour ImageMagick', 'im_options', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_im_commandline&amp;ae=admin_picture_thumb_advanced_im_commandline_end'), //cpg1.4
  array('Lire les informations EXIF dans les fichiers JPEG', 'read_exif_data', 13, 'f=index.htm&amp;as=admin_picture_thumb_advanced_exif&amp;ae=admin_picture_thumb_advanced_exif_end'), //cpg1.4
  array('Lire les informations IPTC dans les fichiers JPEG', 'read_iptc_data', 1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_iptc&amp;ae=admin_picture_thumb_advanced_iptc_end'), //cpg1.4
  array('Répertoire des albums <a href="#notice1" class="clickable_option">*</a>', 'fullpath', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_albums_dir&amp;ae=admin_picture_thumb_advanced_albums_dir_end'), //cpg1.4
  array('Répertoire pour les fichiers des utilisateurs <a href="#notice1" class="clickable_option">*</a>', 'userpics', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_userpics_dir&amp;ae=admin_picture_thumb_advanced_userpics_dir_end'), //cpg1.4
  array('Préfixe pour les images intermédiaires <a href="#notice1" class="clickable_option">*</a>', 'normal_pfx', 0), //cpg1.3.0
  array('Préfixe pour les vignettes <a href="#notice1" class="clickable_option">*</a>', 'thumb_pfx', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_thumbs_prefix&amp;ae=admin_picture_thumb_advanced_thumbs_prefix_end'), //cpg1.4
  array('Mode par défaut des répertoires', 'default_dir_mode', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_chmod_folder&amp;ae=admin_picture_thumb_advanced_chmod_folder_end'), //cpg1.4
  array('Mode par défaut des fichiers', 'default_file_mode', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_chmod_files&amp;ae=admin_picture_thumb_advanced_chmod_files_end'), //cpg1.4

  'Paramètres Utilisateurs',
  array('Autoriser de nouvelles inscriptions', 'allow_user_registration', 1, 'f=index.htm&amp;as=admin_allow_registration&amp;ae=admin_allow_registration_end'), //cpg1.4
  array('Autoriser l\'accès aux visiteurs non authentifiés (visiteur ou anonyme)', 'allow_unlogged_access', 1, 'f=index.htm&amp;as=admin_allow_unlogged_access&amp;ae=admin_allow_unlogged_access_end'), //cpg1.4
  array('L\'inscription d\'un nouvel utilisateur doit être validée', 'reg_requires_valid_email', 1, 'f=index.htm&amp;as=admin_registration_verify&amp;ae=admin_registration_verify_end'), //cpg1.4
  array('Notifier l\'administrateur des nouvelles inscriptions par courriel', 'reg_notify_admin_email', 1, 'f=index.htm&amp;as=admin_registration_notify&amp;ae=admin_registration_notify_end'), //cpg1.4
  array('L\'administrateur doit activer les enregistrements', 'admin_activation', 1, 'f=index.htm&amp;as=admin_activation&amp;ae=admin_activation_end'),  //cpg1.4
  array('Autoriser deux utilisateurs à avoir la même adresse courriel', 'allow_duplicate_emails_addr', 1, 'f=index.htm&amp;as=admin_allow_duplicate_emails_addr&amp;ae=admin_allow_duplicate_emails_addr_end'), //cpg1.4
  array('Notifier l\'administrateur lorsque des uploads nécessitent son approbation', 'upl_notify_admin_email', 1, 'f=index.htm&amp;as=admin_approval_notify&amp;ae=admin_approval_notify_end'), //cpg1.4
  array('Autoriser les utilisateurs authentifiés à visualiser la liste des membres', 'allow_memberlist', 1, 'f=index.htm&amp;as=admin_user_memberlist&amp;ae=admin_user_memberlist_end'), //cpg1.4
  array('Autoriser les utilisateurs à changer leur adresse courriel dans leur profil', 'allow_email_change', 1, 'f=index.htm&amp;as=admin_user_allow_email_change&amp;ae=admin_user_allow_email_change_end'), //cpg1.4
  array('Autoriser les utilisateurs à garder le controle de leurs images dans les galeries publiques', 'users_can_edit_pics', 1, 'f=index.htm&amp;as=admin_user_editpics_public_start&amp;ae=admin_user_editpics_public_end'), //cpg1.4
  array('Nombre d\'échec d\'authentification avant bannissement temporaire (pour parer à une attaque brutale)', 'login_threshold', 0, 'f=index.htm&amp;as=admin_user_login_start&amp;ae=admin_user_login_end'), //cpg1.4
  array('Durée du bannissement temporaire après un échec d\'authentification', 'login_expiry', 0, 'f=index.htm&amp;as=admin_user_login_start&amp;ae=admin_user_login_end'), //cpg1.4
  array('Activer les rapports à l\'administrateur', 'report_post', 1, 'f=index.htm&amp;as=admin_user_enable_report&amp;ae=admin_user_enable_report_end'),  //cpg1.4

// custom profile fields,  //cpg1.4
  'Champs personnalisés pour le profil utilisateur (laisser vide si inutilisés).
  Utilisez le profil 6 pour les longs textes, comme les biographies', //cpg1.4
  array('Nom du profil 1', 'user_profile1_name', 0, 'f=index.htm&amp;as=admin_custom&amp;ae=admin_custom_end'), //cpg1.4
  array('Nom du profil 2', 'user_profile2_name', 0), //cpg1.4
  array('Nom du profil 3', 'user_profile3_name', 0), //cpg1.4
  array('Nom du profil 4', 'user_profile4_name', 0), //cpg1.4
  array('Nom du profil 5', 'user_profile5_name', 0), //cpg1.4
  array('Nom du profil 6', 'user_profile6_name', 0), //cpg1.4

  'Champs personnalisés pour les descriptions d\'images  (laisser vide si inutilisés)',
  array('Nom du champ 1', 'user_field1_name', 0, 'f=index.htm&amp;as=admin_custom_image&amp;ae=admin_custom_image_end'), //cpg1.4
  array('Nom du champ 2', 'user_field2_name', 0),
  array('Nom du champ 3', 'user_field3_name', 0),
  array('Nom du champ 4', 'user_field4_name', 0),

  'Paramètres des Cookies',
  array('Nom du cookie utilisé par le script (si vous utilisez l\'intégration avec un forum, vérifiez que les cookies sont différents)', 'cookie_name', 0, 'f=index.htm&amp;as=admin_cookie_name&amp;ae=admin_cookie_name_end'), //cpg1.4
  array('Chemin du cookie utilisé par le script', 'cookie_path', 0, 'f=index.htm&amp;as=admin_cookie_path&amp;ae=admin_cookie_path_end'), //cpg1.4

  'Paramètres Pour les Courriels  (Généralement rien n\'est à modifier ici; laissez les champs vides si vous n\'êtes pas sur', //cpg1.4
  array('Serveur SMTP (si le champ est vide, sendmail sera utilisé)', 'smtp_host', 0, 'f=index.htm&amp;as=admin_email&amp;ae=admin_email_end'), //cpg1.4
  array('Nom utilisateur SMTP', 'smtp_username', 0), //cpg1.4
  array('Mot de passe SMTP', 'smtp_password', 0), //cpg1.4

  'Logs et statistiques', //cpg1.4
  array('Mode d\'enregistrement <a href="#notice3" class="clickable_option">***</a>', 'log_mode', 11, 'f=index.htm&amp;as=admin_logging_log_mode&amp;ae=admin_logging_log_mode_end'), //cpg1.4
  array('Enregistrer les envois de cartes électroniques', 'log_ecards', 1, 'f=index.htm&amp;as=admin_general_log_ecards&amp;ae=admin_general_log_ecards_end'), //cpg1.4
  array('Enregistrer le détails des statistiques de vote','vote_details',1, 'f=index.htm&amp;as=admin_logging_votedetails&amp;ae=admin_logging_votedetails_end'), //cpg1.4
  array('Enregistrer le détail des statistiques de hit','hit_details',1, 'f=index.htm&amp;as=admin_logging_hitdetails&amp;ae=admin_logging_hitdetails_end'), //cpg1.4

  'Paramètres de la maintenance', //cpg1.4
  array('Activer le mode débogage', 'debug_mode', 9, 'f=index.htm&amp;as=debug_mode&amp;ae=debug_mode_end'), //cpg1.4
  array('Afficher les avertissements dans le mode débogage', 'debug_notice', 1, 'f=index.htm&amp;as=admin_misc_debug_notices&amp;ae=admin_misc_debug_notices_end'), //cpg1.4
  array('La galerie est hors ligne', 'offline', 1, 'f=index.htm&amp;as=admin_general_offline&amp;ae=admin_general_offline_end'), //cpg1.4
);


// ------------------------------------------------------------------------- //
// File db_ecard.php
// ------------------------------------------------------------------------- //

if (defined('DB_ECARD_PHP')) $lang_db_ecard_php = array(
  'title' => 'Cartes envoyées', //cpg1.3.0
  'ecard_sender' => 'Expéditeur', //cpg1.3.0
  'ecard_recipient' => 'Destinataire', //cpg1.3.0
  'ecard_date' => 'Date', //cpg1.3.0
  'ecard_display' => 'Afficher les cartes', //cpg1.3.0
  'ecard_name' => 'Nom', //cpg1.3.0
  'ecard_email' => 'Courriel', //cpg1.3.0
  'ecard_ip' => 'IP #', //cpg1.3.0
  'ecard_ascending' => 'ascendant', //cpg1.3.0
  'ecard_descending' => 'descendant', //cpg1.3.0
  'ecard_sorted' => 'triées', //cpg1.3.0
  'ecard_by_date' => 'par date', //cpg1.3.0
  'ecard_by_sender_name' => 'par nom d\'expéditeur', //cpg1.3.0
  'ecard_by_sender_email' => 'par adresse d\'expéditeur', //cpg1.3.0
  'ecard_by_sender_ip' => 'par adresse IP d\'expéditeur', //cpg1.3.0
  'ecard_by_recipient_name' => 'par nom de destinataire', //cpg1.3.0
  'ecard_by_recipient_email' => 'par adresse de destinataire', //cpg1.3.0
  'ecard_number' => 'Affichage des enregistrements %s à %s parmi %s', //cpg1.3.0
  'ecard_goto_page' => 'Aller à la page', //cpg1.3.0
  'ecard_records_per_page' => 'enregistrements par page', //cpg1.3.0
  'check_all' => 'Tout cocher', //cpg1.3.0
  'uncheck_all' => 'Tout décocher', //cpg1.3.0
  'ecards_delete_selected' => 'Supprimer les cartes sélectionnées', //cpg1.3.0
  'ecards_delete_confirm' => 'Etes-vous certain de vouloir supprimer ces enregistrements ? Merci de cocher la case&nbsp;!', //cpg1.3.0
  'ecards_delete_sure' => 'Je suis certain', //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
  'empty_name_or_com' => 'Vous devez taper votre nom et un commentaire',
  'com_added' => 'Votre commentaire a été ajouté',
  'alb_need_title' => 'Vous devez donner un titre à l\'album&nbsp;!',
  'no_udp_needed' => 'Aucune mise à jour n\'est nécessaire.',
  'alb_updated' => 'L\'album a été mis à jour',
  'unknown_album' => 'L\'album sélectionné n\'existe pas ou bien vous n\'avez pas la permission d\'uploader dans cet album',
  'no_pic_uploaded' => 'Aucune image n\'a été uploadée&nbsp;!<br /><br />Si vous avez vraiment sélectionné une image à uploader, vérifiez que le serveur autorise l\'upload de fichiers...',
  'err_mkdir' => 'Impossible de créer le répertoire %s&nbsp;!',
  'dest_dir_ro' => 'Le répertoire de destination (%s) ne dispose pas des droits d\'écriture nécessaires pour le script!',
  'err_move' => 'Impossible de déplacer %s vers %s&nbsp;!',
  'err_fsize_too_large' => 'La taille de l\'image que vous avez uploadé est trop grande (le maximum autorisé est de %s x %s)&nbsp;!',
  'err_imgsize_too_large' => 'Le poids du fichier que vous avez uploadé est trop important (le maximum autorisé est de %s Ko)&nbsp;!',
  'err_invalid_img' => 'Le fichier que vous avez uploadé n\'est pas une image valide!',
  'allowed_img_types' => 'Vous ne pouvez uploader que %s images.',
  'err_insert_pic' => 'Les images \'%s\' ne peuvent pas être insérées dans l\'album ',
  'upload_success' => 'Votre image a été correctement uploadée<br /><br />Elle sera visible après validation de l\'administrateur.',
  'notify_admin_email_subject' => '%s - Notification d\'upload', //cpg1.3.0
  'notify_admin_email_body' => 'Une image a été uploadée par %s. Cela nécessite votre approbation. Connectez-vous à %s', //cpg1.3.0
  'info' => 'Information',
  'com_added' => 'Commentaire ajouté',
  'alb_updated' => 'Album mis à jour',
  'err_comment_empty' => 'Votre commentaire est vide!',
  'err_invalid_fext' => 'Seuls les fichiers avec les extensions suivantes sont autorisés : <br /><br />%s.',
  'no_flood' => 'Nous sommes désolés, mais vous êtes déjà l\'auteur du dernier commentaire posté au sujet de cette image.<br /><br />Vous pouvez tout simplement éditer votre message précédent si vous souhaitez le modifier ou bien ajouter des informations.',
  'redirect_msg' => 'Redirection en cours.<br /><br /><br />Cliquez sur \'CONTINUER\' si la page ne se recharge pas automatiquement',
  'upl_success' => 'Votre image a été correctement ajoutée',
  'email_comment_subject' => 'Commentaire posté sur Coppermine Photo Gallery', //cpg1.3.0
  'email_comment_body' => 'Quelqu\'un a posté un commentaire dans votre galerie. Voyez-le à', //cpg1.3.0
  'album_not_selected' => 'Album non sélectionné', //cpg1.4
  'com_author_error' => 'Un utilisateur enregistré utilise déjà ce pseudonyme, connectez-vous ou utilisez en un autre', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
  'caption' => 'Légende',
  'fs_pic' => 'image en taille réelle',
  'del_success' => 'suppression réussie',
  'ns_pic' => 'image en taille normale',
  'err_del' => 'ne peut pas être supprimé',
  'thumb_pic' => 'vignette',
  'comment' => 'commentaire',
  'im_in_alb' => 'image dans l\'album',
  'alb_del_success' => 'Album \'%s\' supprimé',
  'alb_mgr' => 'Gestionnaire d\'album',
  'err_invalid_data' => 'Données non valides reçues dans \'%s\'',
  'create_alb' => 'Création de l\'album \'%s\'',
  'update_alb' => 'Mise à jour de l\'album \'%s\' avec le titre \'%s\' et index \'%s\'',
  'del_pic' => 'Supprimer l\'image',
  'del_alb' => 'Supprimer l\'album',
  'del_user' => 'Supprimer l\'utilisateur',
  'err_unknown_user' => 'L\'utilisateur sélectionné n\'existe pas&nbsp;!',
  'err_empty_groups' => 'Il n\'y a pas de table pour ce groupe ou elle est vide&nbsp;!', //cpg1.4
  'comment_deleted' => 'Le commentaire a été supprimé avec succès',
  'npic' => 'Image', //cpg1.4
  'pic_mgr' => 'Gestion des images', //cpg1.4
  'update_pic' => 'Mise à jour de l\'image \'%s\' avec le nom de fichier \'%s\' et l\'index \'%s\'', //cpg1.4
  'username' => 'Nom d\'utilisateur', //cpg1.4
  'anonymized_comments' => '%s commentaire(s) anonyme(s)', //cpg1.4
  'anonymized_uploads' => '%s upload(s) public(s) anonyme(s)', //cpg1.4
  'deleted_comments' => '%s commentaire(s) supprimé(s)', //cpg1.4
  'deleted_uploads' => '%s upload(s) public(s) supprimé(s)', //cpg1.4
  'user_deleted' => 'utilisateur %s supprimé', //cpg1.4
  'activate_user' => 'Activer l\'utilisateur', //cpg1.4
  'user_already_active' => 'Le compte est déjà activé', //cpg1.4
  'activated' => 'Activé', //cpg1.4
  'deactivate_user' => 'Désactiver l\'utilisateur', //cpg1.4
  'user_already_inactive' => 'Le compte est déjà désactivé', //cpg1.4
  'deactivated' => 'Désactivé', //cpg1.4
  'reset_password' => 'Changer le mot de passe', //cpg1.4
  'password_reset' => 'Mot de passe changé pour %s', //cpg1.4
  'change_group' => 'Changer de groupe principal', //cpg1.4
  'change_group_to_group' => 'Changer de %s à %s', //cpg1.4
  'add_group' => 'Ajouter un groupe secondaire', //cpg1.4
  'add_group_to_group' => 'Ajouter l\'utilisateur %s au groupe %s. Il est maintenant membre de %s comme groupe primaire et de %s comme groupe secondaire.', //cpg1.4
  'status' => 'Status', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File displayecard.php
// ------------------------------------------------------------------------- //

if (defined('DISPLAYECARD_PHP')) {

$lang_displayecard_php = array(
  'invalid_data' => 'Le données de la carte électronique que vous essayez d\'envoyer ont été corrompues par votre client courriel. Vérifiez que le lien est complet.', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File displayimage.php
// ------------------------------------------------------------------------- //

if (defined('DISPLAYIMAGE_PHP')){

$lang_display_image_php = array(
  'confirm_del' => 'Voulez vous vraiment SUPPRIMER cette image?\\nLes commentaires seront également supprimés.',//js-alert
  'del_pic' => 'SUPPRIMER CETTE IMAGE',
  'size' => '%s x %s pixels',
  'views' => '%s fois',
  'slideshow' => 'Diaporama',
  'stop_slideshow' => 'ARRETER LE DIAPORAMA',
  'view_fs' => 'Cliquez pour voir l\'image en taille réelle',
  'edit_pic' => 'Modifier la description', //cpg1.3.0
  'crop_pic' => 'Retoucher', //cpg1.3.0
  'set_player' => 'Changer le lecteur',
);

$lang_picinfo = array(
  'title' =>'Informations sur l\'image',
  'Filename' => 'Nom du fichier',
  'Album name' => 'Nom de l\'album',
  'Rating' => 'Note (%s votes)',
  'Keywords' => 'Mots clefs',
  'File Size' => 'Taille du fichier',
  'Date Added' => 'Date d\'ajout', //cpg1.4
  'Dimensions' => 'Dimensions',
  'Displayed' => 'Affichées',
  'URL' => 'URL', //cpg1.4
  'Make' => 'Marque', //cpg1.4
  'Model' => 'Modèle', //cpg1.4
  'DateTime' => 'Date/Heure', //cpg1.4
  'DateTimeOriginal' => 'Date/Heure de l\'original', //cpg1.4
  'ISOSpeedRatings'=>'ISO - vitesse estimée', //cpg1.4
  'MaxApertureValue' => 'Ouverture maximale', //cpg1.4
  'FocalLength' => 'Longueur Focale',
  'Comment' => 'Commentaires',
  'addFav'=>'Ajouter aux favoris',
  'addFavPhrase'=>'Favoris',
  'remFav'=>'Supprimer des favoris',
  'iptcTitle'=>'Titre IPTC', //cpg1.3.0
  'iptcCopyright'=>'Copyright IPTC', //cpg1.3.0
  'iptcKeywords'=>'Mots clés IPTC', //cpg1.3.0
  'iptcCategory'=>'Catégorie IPTC', //cpg1.3.0
  'iptcSubCategories'=>'Sous-catégorie IPTC', //cpg1.3.0
  'ColorSpace' => 'Espace colorimétrique', //cpg1.4
  'ExposureProgram' => 'Programme d\'exposition', //cpg1.4
  'Flash' => 'Flash', //cpg1.4
  'MeteringMode' => 'Mode de mesure', //cpg1.4
  'ExposureTime' => 'Temps d\'exposition', //cpg1.4
  'ExposureBiasValue' => 'Correction de l\'exposition', //cpg1.4
  'ImageDescription' => ' Description de l\'image', //cpg1.4
  'Orientation' => 'Orientation', //cpg1.4
  'xResolution' => 'Résolution X', //cpg1.4
  'yResolution' => 'Résolution Y', //cpg1.4
  'ResolutionUnit' => 'Unité de résolution', //cpg1.4
  'Software' => 'Logiciel', //cpg1.4
  'YCbCrPositioning' => 'Eléments de configuration YCbCr', //cpg1.4
  'ExifOffset' => 'Exif Offset', //cpg1.4
  'IFD1Offset' => 'IFD1 Offset', //cpg1.4
  'FNumber' => 'Ouverture', //cpg1.4
  'ExifVersion' => 'Version Exif', //cpg1.4
  'DateTimeOriginal' => 'Date et heure de la prise de vue', //cpg1.4
  'DateTimedigitized' => 'Date et heure de la numérisation', //cpg1.4
  'ComponentsConfiguration' => 'Configuration des composants', //cpg1.4
  'CompressedBitsPerPixel' => 'Bits compressés par couche', //cpg1.4
  'LightSource' => 'Source lumineuse', //cpg1.4
  'ISOSetting' => 'Paramètre ISO', //cpg1.4
  'ColorMode' => 'Mode de couleurs', //cpg1.4
  'Quality' => 'Qualité', //cpg1.4
  'ImageSharpening' => 'Image Sharpening', //cpg1.4
  'FocusMode' => 'Mode de mesure de distance', //cpg1.4
  'FlashSetting' => 'Configuration du Flash', //cpg1.4
  'ISOSelection' => 'ISO Selection', //cpg1.4
  'ImageAdjustment' => 'Ajustement de l\'image', //cpg1.4
  'Adapter' => 'Adapter', //cpg1.4
  'ManualFocusDistance' => 'Manual Focus Distance', //cpg1.4
  'DigitalZoom' => 'Zoom numérique', //cpg1.4
  'AFFocusPosition' => 'Longueur focale', //cpg1.4
  'Saturation' => 'Saturation', //cpg1.4
  'NoiseReduction' => 'Réduction du bruit', //cpg1.4
  'FlashPixVersion' => 'Flash Pix Version', //cpg1.4
  'ExifImageWidth' => 'Dimension X en pixels', //cpg1.4
  'ExifImageHeight' => 'Dimension Y en pixels', //cpg1.4
  'ExifInteroperabilityOffset' => 'Version d\'interopérabilité', //cpg1.4
  'FileSource' => 'Source fichier', //cpg1.4
  'SceneType' => 'Type de scene', //cpg1.4
  'CustomerRender' => 'Rendu personnalisé', //cpg1.4
  'ExposureMode' => 'Mode d\'exposition', //cpg1.4
  'WhiteBalance' => 'Balance des blancs', //cpg1.4
  'DigitalZoomRatio' => 'Ratio zoom numérique', //cpg1.4
  'SceneCaptureMode' => 'Type de capture de scene', //cpg1.4
  'GainControl' => 'Controle des gains', //cpg1.4
  'Contrast' => 'Contraste', //cpg1.4
  'Saturation' => 'Saturation', //cpg1.4
  'Sharpness' => 'Netteté', //cpg1.4
  'ManageExifDisplay' => 'Manage Exif Display', //cpg1.4
  'submit' => 'Valider', //cpg1.4
  'success' => 'Informations modifiées avec succès.', //cpg1.4
  'details' => 'Détails', //cpg1.4
);

$lang_display_comments = array(
  'OK' => 'OK',
  'edit_title' => 'Modifier ce commentaire',
  'confirm_delete' => 'Voulez vous vraiment supprimer ce commentaire?',//js-alert
  'add_your_comment' => 'Ajoutez votre commentaire',
  'name'=>'Nom',
  'comment'=>'Commentaire',
  'your_name' => 'Anonyme',
  'report_comment_title' => 'Envoyer ce commentaire à l\'administrateur', //cpg1.4
);

$lang_fullsize_popup = array(
  'click_to_close' => 'Cliquez sur l\'image pour fermer la fenêtre',
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
  'title' => 'Envoyer en tant que carte électronique',
  'invalid_email' => '<b>Attention</b> : cette adresse e-mail n\'est pas valide&nbsp;!',
  'ecard_title' => 'Une carte électronique pour vous, de la part de %s',
  'error_not_image' => 'Seules les images peuvent être envoyées sous forme de cartes électroniques.', //cpg1.3.0
  'view_ecard' => 'Si votre carte électronique ne s\'affiche pas correctement, cliquez ici',
  'view_ecard_plaintext' => 'Pour voir cette carte postale électronique, copiez cette Url dans la barre d\'adresse de votre navigateur:', //cpg1.4
  'view_more_pics' => 'Suivez ce lien pour découvrir davantage de photos&nbsp;!',
  'send_success' => 'Votre carte électronique a été envoyée',
  'send_failed' => 'Nous sommes désolés, mais le serveur n\'a pu envoyer votre carte électronique...',
  'from' => 'De la part de',
  'your_name' => 'Votre nom',
  'your_email' => 'Votre adresse courriel',
  'to' => 'A',
  'rcpt_name' => 'Nom du destinataire',
  'rcpt_email' => 'Adresse e-mail du destinataire',
  'greetings' => 'Introduction',
  'message' => 'Message',
  'ecards_footer' => 'Envoyé par %s depuis l\'adresse IP %s à %s (Heure de la galerie)', //cpg1.4
  'preview' => 'Prévisualisation de cette carte', //cpg1.4
  'preview_button' => 'Prévisualisation', //cpg1.4
  'submit_button' => 'Envoyer la carte', //cpg1.4
  'preview_view_ecard' => 'Ce sera le lien inclu à la carte électronique lorsqu\'elle sera générée. Ne fonctionne pas pour les prévisualisations.', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File report_file.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('REPORT_FILE_PHP') || defined('DISPLAYREPORT_PHP')) $lang_report_php =array(
  'title' => 'Rapport à l\'administrateur', //cpg1.4
  'invalid_email' => '<b>Attention</b> : adresse courriel invalidev', //cpg1.4
  'report_subject' => 'Un rapport de %s de la galerie %s', //cpg1.4
  'view_report' => 'Lien alternatif si le rapport ne s\'affiche pas correctement', //cpg1.4
  'view_report_plaintext' => 'Pour voir le rapport, copiez et collez cette adresse dans la barre d\'adresse de votre navigateur:', //cpg1.4
  'view_more_pics' => 'Galerie', //cpg1.4
  'send_success' => 'Votre rapport a été envoyé', //cpg1.4
  'send_failed' => 'Désolé mais le serveur ne peut pas envoyer votre rapport...', //cpg1.4
  'from' => 'De', //cpg1.4
  'your_name' => 'Votre Nom', //cpg1.4
  'your_email' => 'Votre adresse courriel', //cpg1.4
  'to' => 'A', //cpg1.4
  'administrator' => 'Mode Administrateur', //cpg1.4
  'subject' => 'Sujet', //cpg1.4
  'comment_field_name' => 'Faire un rapport sur le commentaire de &quot;%s&quot;', //cpg1.4
  'reason' => 'Raison', //cpg1.4
  'message' => 'Message', //cpg1.4
  'report_footer' => 'Envoyé par %s depuis l\'adresse IP %s à %s (Heure de la galerie)', //cpg1.4
  'obscene' => 'obscène', //cpg1.4
  'offensive' => 'violent', //cpg1.4
  'misplaced' => 'Hors sujet/Mal placé', //cpg1.4
  'missing' => 'manque', //cpg1.4
  'issue' => 'erreur/ne peut être visualisé', //cpg1.4
  'other' => 'autre', //cpg1.4
  'refers_to' => 'Le rapport se réfère à g', //cpg1.4
  'reasons_list_heading' => 'raison(s) du rapport:', //cpg1.4
  'no_reason_given' => 'Sans raisons', //cpg1.4
  'go_comment' => 'Aller au commentaire', //cpg1.4
  'view_comment' => 'Voir le rapport complet avec le commentaire', //cpg1.4
  'type_file' => 'fichier', //cpg1.4
  'type_comment' => 'commentaire', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
  'pic_info' => 'Informations sur l\'image',
  'album' => 'Album',
  'title' => 'Titre',
  'filename' => 'Nom de fichier', //cpg1.4
  'desc' => 'Description',
  'keywords' => 'Mots-clés',
  'new_keyword' => 'Nouveau mot-clé', //cpg1.4
  'new_keywords' => 'Nouveaux mots-clés trouvés', //cpg1.4
  'existing_keyword' => 'Mots-clés existants', //cpg1.4
  'pic_info_str' => '%sx%s - %sKo - %s affichages - %s votes',
  'approve' => 'Approuver',
  'postpone_app' => 'Approuver plus tard',
  'del_pic' => 'Supprimer l\'image',
  'del_all' => 'Supprimer TOUS les fichiers', //cpg1.4
  'read_exif' => 'Relire les informations EXIF', //cpg1.3.0
  'reset_view_count' => 'Réinitialiser le compteur de téléchargements ',
  'reset_all_view_count' => 'Réinitialiser le compteur de vues', //cpg1.4
  'reset_votes' => 'Réinitialiser les votes',
  'reset_all_votes' => 'Réinitialiser TOUS les votes', //cpg1.4
  'del_comm' => 'Supprimer les commentaires',
  'del_all_comm' => 'Supprimer TOUS les commentaires', //cpg1.4
  'upl_approval' => 'Autorisation d\'upload',
  'edit_pics' => 'Modifier les images',
  'see_next' => 'Voir les images suivantes',
  'see_prev' => 'Voir les images précédentes',
  'n_pic' => '%s images',
  'n_of_pic_to_disp' => 'Nombre d\'images à afficher',
  'apply' => 'Appliquer les modifications',
  'crop_title' => 'Editeur Photo de Coppermine', //cpg1.3.0
  'preview' => 'Prévisualiser', //cpg1.3.0
  'save' => 'Sauvegarder la photo', //cpg1.3.0
  'save_thumb' =>'Sauvegarder en tant que vignette', //cpg1.3.0
  'gallery_icon' => 'Faites-en mon icône', //cpg1.4
  'sel_on_img' =>'La sélection doit être entièrement sur l\\\'image', //js-alert //cpg1.3.0
  'album_properties' =>'Propriétés de l\'album', //cpg1.4
  'parent_category' =>'Catégorie parente', //cpg1.4
  'thumbnail_view' =>'Visualisation des vignettes', //cpg1.4
  'select_unselect' =>'sélectionner/<br>déselectionner tout', //cpg1.4
  'file_exists' => 'La destination du fichier \'%s\' existe déjà', //cpg1.4
  'rename_failed' => 'Impossible de renommer \'%s\' en \'%s\'.', //cpg1.4
  'src_file_missing' => 'La source du fichier \'%s\' est manquante.', // cpg 1.4
  'mime_conv' => 'Impossible de convertir le fichier de \'%s\' en \'%s\'',//cpg1.4
  'forb_ext' => 'Type d\'extension de fichier non autorisée.',//cpg1.4
);

// ------------------------------------------------------------------------- //
// File faq.php
// ------------------------------------------------------------------------- //

if (defined('FAQ_PHP')) $lang_faq_php = array(
  'faq' => 'Questions fréquemment posées', //cpg1.3.0
  'toc' => 'Table des matières', //cpg1.3.0
  'question' => 'Question : ', //cpg1.3.0
  'answer' => 'Réponse : ', //cpg1.3.0
);

if (defined('FAQ_PHP')) $lang_faq_data = array(
  '<br>FAQ générales<br>', //cpg1.3.0
  array('Pourquoi dois-je m\'inscrire ?', 'L\'inscription peut être imposée ou non par l\'administrateur. Elle offre des fonctionnalités supplémentaires telles que la possibilité d\'uploader des images, d\'avoir une liste de Favoris, de noter les images, de poster des commentaires etc...', 'allow_user_registration', '0'), //cpg1.3.0
  array('Comment puis-je m\'inscrire ?', 'Allez sur &quot;Inscription&quot; et renseignez les informations requises (éventuellement les informations optionnelles, si vous le souhaitez).<br />Si l\'administrateur a demandé une confirmation par mail, vous recevrez un message à l\'adresse que vous aurez renseignée dans le formulaire d\'inscription. Ce message vous induiqera la marche à suivre pour valider votre inscription. Votre inscription doit être validée avant que vous ne puissiez vous indentifier.', 'allow_user_registration', '1'), //cpg1.3.0
  array('Comment m\'identifier ?', 'Allez sur &quot;S\'identifier&quot;, saisissez votre pseudo et votre mot de passe. Cochez &quot;Se souvenir de moi&quot; afin d\'être automatiquement reconnecté lorsque vous reviendrez sur le site.<br /><b>IMPORTANT : Vous devez autoriser les cookies et le cookie ne doit pas être effacé pour que cette option fonctionne.</b>', 'offline', 0), //cpg1.3.0
  array('Pourquoi ne puis-je pas m\'identifier ?', 'Vérifiez que vous vous êtes bien inscrit et que vous avez cliqué sur le lien de validation indiqué dans le mail de confirmation que vous devez avoir reçu. Pour tout autre problème, contactez l\'administrateur du site.', 'offline', 0), //cpg1.3.0
  array('Et si j\'oublie mon mot de passe ?', 'Si le site possède un lien &quot;J\'ai oublié mon mot de passe&nbsp;!&quot;, utilisez-le. Dans le cas contraire, contactez l\'administrateur qui vous créera un nouveau mot de passe.', 'offline', 0), //cpg1.3.0
  //array('Que dois-je faire si je change d\'adresse e-mail ?', 'Identifiez-vous et changez votre adresse de messagerie dans le menu &quot;Mon profil&quot;', 'offline', 0), //cpg1.3.0
  array('Comment sauvegarder une photo dans &quot;Mes Favoris&quot; ?', 'Cliquez sur une image. Si les informations de cette image ne sont pas indiquées au bas de celle-ci, cliquez sur le lien &quot;Afficher/cacher les informations de l\'image&quot; (<img src="images/info.gif" width="16" height="16" border="0&" alt="Afficher/cacher les informations de l\'image" />); Cliquez ensuite sur le lien &quot;Ajouter aux favoris&quot;.<br /><br />IMPORTANT : Vous devez autoriser les cookies et le cookie ne doit pas être effacé pour que cette option fonctionne.', 'offline', 0), //cpg1.3.0
  array('Comment noter une photo ?', 'Cliquez sur une image et cliquez sur la note que vous souhaitez lui attribuer, au-dessous de l\'image', 'offline', 0), //cpg1.3.0
  array('Comment poster un commentaire sur une photo ?', 'Cliquez sur une image et tapez votre commentaire au-dessous de l\'image, sous la ligne &quot;Ajoutez votre commentaire&quot;.', 'offline', 0), //cpg1.3.0
  array('Comment uploader une photo ?', 'Cliquez sur &quot;Uploader une image&quot; et sélectionnez l\'album dans lequel vous souhaitez qu\'elle apparaisse. Cliquez sur &quot;Parcourir&quot; pour sélectionner le fichier à transférer. Complétez ensuite les champs facultatifs si vous le désirez. Enfin, validez par &quot;Mettre une photo en ligne&quot;', 'allow_private_albums', 0), //cpg1.3.0
  array('Où puis-je uploader mes photos ?', 'Vous pourrez uploader vos photos dans l\'un de vos albums dans &quot;Ma galerie&quot;. L\'administrateur peut aussi vous avoir autorisé à uploader des photos dans un ou plusieurs albums dans la galerie principale.', 'allow_private_albums', 0), //cpg1.3.0
  array('Quels types et tailles d\'images puis-je uploader ?', 'La taille et le type (jpg,gif,..etc.) est défini par l\'administrateur. Vous pouvez lui en demander la liste.', 'offline', 0), //cpg1.3.0
  array('Comment puis-je créer, renommer ou supprimer des albums dans &quot;Ma Galerie&quot; ?', 'Vous devez auparavant entrer dans le &quot;Mode admin.&quot;<br/>Cliquez ensuite sur &quot;Créer / classer mes Albums&quot;puis cliquez sur &quot;Nouveau&quot;. Remplacez &quot;New Album&quot; à votre convenance.<br />Vous pouvez aussi renommer vos albums dans votre galerie.<br />Cliquez ensuite sur &quot;Appliquer les Modifications&quot;.', 'allow_private_albums', 0), //cpg1.3.0
  array('Comment puis-je modifier ou restreindre l\'accès à mes albums ?', 'Vous devez auparavant entrer dans le &quot;Mode admin.&quot;<br />Cliquez ensuite sur &quot;Modifier mes albums&quot;. Dans la zone &quot;Mettre l\'album à jour&quot; sélectionnez l\'album que vous souhaitez modifier.<br />Vous pouvez modifier le nom, la description, la vignette, restreindre l\'accès, les options concernant les notes et les commentaires.<br />Cliquez sur &quot;Mettre l\'album à jour&quot;. pour valider', 'allow_private_albums', 0), //cpg1.3.0
  array('Comment puis-je voir les albums des autres utilisateurs ?', 'Allez sur &quot;Liste des albums&quot; et choisissez &quot;Galeries utilisateurs&quot;.', 'allow_private_albums', 0), //cpg1.3.0
  array('Que sont les cookies ?', 'Les cookies sont des fichiers texte contenant des paramètres du site et de votre pseudo. Ces cookies sont stockées dans votre ordinateur.<br />Ils vous apportent la possibilité d\'entrer et sortir du site sans avoir à vous identifier, ainsi que d\'autres facilités.', 'offline', 0), //cpg1.3.0
  array('Où puis-je me procurer cette galerie pour mon site ?', 'Coppermine est une Galerie multimédia gratuite, sous licence GNU GPL. Elle comprend de nombreuses fonctions avancées et est portée sur plusieurs plateformes. Visitez le site <a href="http://coppermine-gallery.net/">Page principale Coppermine</a> pour en savoir plus et procéder à son téléchargement.', 'offline', 0), //cpg1.3.0

  '<br>Navigation dans le site<br>', //cpg1.3.0
  array('Qu\'est-ce-que &quot;Liste des albums&quot; ?', 'Cela vous redirigera vers la galerie principale avec un lien vers chaque catégorie. Ces liens peuvent être sous forme de vignettes.', 'offline', 0), //cpg1.3.0
  array('Qu\'est-ce-que &quot;Ma galerie&quot; ?', 'Cette fonctionnalité vous permet de créer vos propres albums et d\'y uploader et gérer vos photos.', 'allow_private_albums', 0), //cpg1.3.0
  array('Quelle est la différence entre le &quot;Mode admin.&quot; et le &quot;Mode utilisateur&quot; ?', 'Le &quot;Mode admin.&quot; vous permet de modifier vos albums ainsi que tous les albums pour lesquels vous aurez été habilité par l\'administrateur.', 'allow_private_albums', 0), //cpg1.3.0
  array('Qu\'est-ce-que &quot;Uploader une image&quot; ?', 'Cette fonctionnalité vous permet d\'uploader des photos (dont la taille et le type sont définis par l\'administrateur) dans les galeries et albums pour lesquels vous aurez été habilité par l\'administrateur.', 'allow_private_albums', 0), //cpg1.3.0
  array('Qu\'est-ce-que &quot;Derniers ajouts&quot; ?', 'Cette fonctionnalité vous montre les dernières photos uploadées sur le site.', 'offline', 0), //cpg1.3.0
  array('Qu\'est-ce-que &quot;Commentaires&quot; ?', 'Cette fonctionnalité vous montre les derniers commentaires postés par les utilisateurs du site.', 'offline', 0), //cpg1.3.0
  array('Qu\'est-ce-que &quot;Les plus populaires&quot; ?', 'Cette fonctionnalité vous montre les photos les plus vues par les visiteurs, identifiés ou anonymes.', 'offline', 0), //cpg1.3.0
  array('Qu\'est-ce-que &quot;Les mieux notées&quot; ?', 'Cette fonctionnalité vous montre les photos, triées par leur note moyenne. Par exemples : <br />- Si 5 utilisateurs donnent chacun la note 3 (<img src="images/rating3.gif" width="65" height="14" border="0" alt="" />), la photo obtient la note moyenne de 3 (<img src="images/rating3.gif" width=&"65" height="14" border="0" alt="" />).<br />- Si 5 utilisateurs donnent les notes 1, 2, 3, 4 et 5, la photo obtient une moyenne de 3 également (<img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> ).<br />Les notes vont de <img src="images/rating5.gif" width="65" height="14" border="0"/> (meilleure) to <img src="images/rating0.gif" width="65" height="14" border="0" /> (moins bonne).', 'offline', 0), //cpg1.3.0
  array('Qu\'est-ce-que &quot;Mes favoris&quot; ?', 'Cette fonctionnalité vous permet de stocker une ou plusieurs photos dans le cookie qui est stocké dans votre ordinateur.', 'offline', 0), //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// File forgot_passwd.php
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) $lang_forgot_passwd_php = array(
  'forgot_passwd' => 'Rappel de Mot de passe', //cpg1.3.0
  'err_already_logged_in' => 'Vous êtes déjà identifié&nbsp;!', //cpg1.3.0
  'enter_email' => 'Saisissez votre adresse de messagerie', //cpg1.3.0
  'submit' => 'Envoyer', //cpg1.3.0
  'illegal_session' => 'Le mot de passe pour cette session est invalide ou a expiré.', //cpg1.4
  'failed_sending_email' => 'Le mot de passe n\'a pas pu être envoyé&nbsp;!', //cpg1.3.0
  'email_sent' => 'Un message a été envoyé avec votre mot de passe à l\'adresse %s', //cpg1.3.0
  'verify_email_sent' => 'Un courriel a été envoyé à %s. Veuillez vérifier vos courriels pour terminer le processus.', //cpg1.4
  'err_unk_user' => 'L\'utilisateur indiqué n\'existe pas&nbsp;!', //cpg1.3.0
  'account_verify_subject' => '%s - Demande de nouveau Mot de Passe', //cpg1.4
  'account_verify_body' => 'Vous avez demandé un nouveau Mot de Passe. Si vous souhaitez recevoir par courriel un nouveau mot de passe, cliquez sur le lien ci-après:

%s', //cpg1.4
  'passwd_reset_subject' => '%s - Rappel de Mot de passe', //cpg1.3.0
  'passwd_reset_body' => 'Vous avez demandé que votre mot de passe vous soit rappelé. Voici donc vos données de connexion :
Utilisateur: %s
Mot de passe : %s
Cliquez sur %s pour vous identifier.', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
  'group_name' => 'Nom du groupe',
  'permissions' => 'Droits', //cpg1.4
  'public_albums' => 'Upload dans les albums publics', //cpg1.4
  'personal_gallery' => 'Galerie personnelle', //cpg1.4
  'upload_method' => 'Méthode d\'Upload', //cpg1.4
  'disk_quota' => 'Quota disque',
  'rating' => 'Note', //cpg1.4
  'ecards' => 'Cartes électronique', //cpg1.4
  'comments' => 'Commentaires', //cpg1.4
  'allowed' => 'Autorisé', //cpg1.4
  'approval' => 'Approbation', //cpg1.4
  'boxes_number' => 'Nombre de champs', //cpg1.4
  'variable' => 'variable', //cpg1.4
  'fixed' => 'fixé', //cpg1.4
  'apply' => 'Appliquer les modifications',
  'create_new_group' => 'Créer un nouveau groupe',
  'del_groups' => 'Supprimer le(s) groupe(s) sélectionné(s)',
  'confirm_del' => 'Attention, lorsque vous supprimez un groupe, les utilisateurs de ce groupe seront transférés dans le groupe d\\\'utilisateurs \\\'Enregistré\\\'!\n\nSouhaitez-vous continuer?',//js-alert
  'title' => 'Gérer les groupes d\'utilisateurs',
  'num_file_upload' => 'Champ(s) d\'upload', //cpg1.4
  'num_URI_upload' => 'Champ(s) d\'upload (URI)', //cpg1.4
  'reset_to_default' => 'Mettre le nom par défaut (%s) - recommandé&nbsp;!', //cpg1.4
  'error_group_empty' => 'La table du groupe est vide&nbsp;!<br /><br />Groupe par défaut créé, rechargez s\'il vous plait la page', //cpg1.4
  'explain_greyed_out_title' => 'Pourquoi cette colonne est grisée ?', //cpg1.4
  'explain_guests_greyed_out_text' => 'Vous ne pouvez pas changer les propriétés de ce group car vous avez choisi &quot;Non&quot; pour l\'option &quot;Autoriser l\'accès aux visiteurs non authentifiés (visiteur ou anonyme)&quot; dans la page Configuration. Les visiteurs ne peuvent donc rien faire d\'autre que se connecter; il n\'y a donc pas de règlages de groupe pour eux.', //cpg1.4
  'explain_banned_greyed_out_text' => 'Vous ne pouvez pas changer les propriétés de ce groupe car ses membres ne peuvent rien faire.', //cpg1.4
  'group_assigned_album' => 'album(s) assigné(s)', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
  'welcome' => 'Bienvenue!'
);

$lang_album_admin_menu = array(
  'confirm_delete' => 'Voulez-vous VRAIMENT supprimer cet album ? \\nToutes les photos et tous les commentaires seront perdus.',//js-alert
  'delete' => 'SUPPRIMER',
  'modify' => 'PROPRIETES',
  'edit_pics' => 'MODIFIER LES PHOTOS',
);

$lang_list_categories = array(
  'home' => 'Accueil',
  'stat1' => '<b>[pictures]</b> photos dans <b>[albums]</b> albums et <b>[cat]</b> catégories avec <b>[comments]</b> commentaires affichées <b>[views]</b> fois',
  'stat2' => '<b>[pictures]</b> photos dans <b>[albums]</b> albums affichées <b>[views]</b> fois',
  'xx_s_gallery' => '%s\'s Galerie',
  'stat3' => '<b>[pictures]</b> photos dans <b>[albums]</b> albums avec <b>[comments]</b> commentaires affichées <b>[views]</b> fois'
);

$lang_list_users = array(
  'user_list' => 'Liste d\'utilisateurs',
  'no_user_gal' => 'Il n\'y a pas de nouvelle galerie d\'utilisateurs',
  'n_albums' => '%s album(s)',
  'n_pics' => '%s photo(s)'
);

$lang_list_albums = array(
  'n_pictures' => '%s photos',
  'last_added' => ', la dernière a été ajoutée le %s',
  'n_link_pictures' => '%s fichiers liés', //cpg1.4
  'total_pictures' => '%s total de fichiers', //cpg1.4
);

}

// ------------------------------------------------------------------------- //
// File keywordmgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('KEYWORDMGR_PHP')) $lang_keywordmgr_php = array(
  'title' => 'Gérer les mots clefs', //cpg1.4
  'edit' => 'modifier', //cpg1.4
  'delete' => 'effacer', //cpg1.4
  'search' => 'chercher', //cpg1.4
  'keyword_test_search' => 'chercher %s dans une nouvelle fenêtre', //cpg1.4
  'keyword_del' => 'effacer le mot clef %s', //cpg1.4
  'confirm_delete' => 'êtes-vous sur de vouloir effacer le mot clef %s de toute la galerie ?', //cpg1.4  // js-alert
  'change_keyword' => 'changer le mot clef', //cpg1.4
);

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
  'err_already_logged_in' => 'Vous êtes déjà connecté(e)&nbsp;!',
  'forgot_password_link' => 'J\'ai oublié mon mot de passe&nbsp;!', //cpg1.3.0
  'cookie_warning' => 'Attention votre navigateur n\'accepte pas les cookies', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
  'logout' => 'Déconnexion',
  'bye' => 'Au revoir %s ...',
  'err_not_loged_in' => 'Vous n\'êtes pas identifié(e)&nbsp;!',
);

// ------------------------------------------------------------------------- //
// File minibrowser.php  //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('MINIBROWSER_PHP')) $lang_minibrowser_php = array(
  'close' => 'fermer', //cpg1.4
  'submit' => 'OK', //cpg1.4
  'up' => 'remonter d\'un niveau', //cpg1.4
  'current_path' => 'niveau actuel', //cpg1.4
  'select_directory' => 'choisissez un répertoire', //cpg1.4
  'click_to_close' => 'Cliquez sur l\'image pour fermer la fenêtre',
);

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
  'upd_alb_n' => 'Mettre à jour l\'album %s',
  'general_settings' => 'Paramètres généraux',
  'alb_title' => 'Titre de l\'album',
  'alb_cat' => 'Catégorie de l\'album',
  'alb_desc' => 'Description de l\'album',
  'alb_keyword' => 'Mot clef de l\'album', //cpg1.4
  'alb_thumb' => 'vignette de l\'album',
  'alb_perm' => 'Permissions pour cet album',
  'can_view' => 'Cet album peut être consulté par',
  'can_upload' => 'Les visiteurs peuvent mettre des photos en ligne',
  'can_post_comments' => 'Les visiteurs peuvent poster des commentaires',
  'can_rate' => 'Les visiteurs peuvent noter les photos',
  'user_gal' => 'Galerie de l\'utilisateur',
  'no_cat' => '* Pas de catégorie *',
  'alb_empty' => 'L\'album est vide',
  'last_uploaded' => 'Dernier upload',
  'public_alb' => 'Tout le monde (album public)',
  'me_only' => 'Moi seulement',
  'owner_only' => 'Le propriétaire de l\'album (%s) seulement',
  'groupp_only' => 'Membres du groupe \'%s\'',
  'err_no_alb_to_modify' => 'Il n\'y a pas d\'album modifiable dans la base.',
  'update' => 'Mettre l\'album à jour',
  'reset_album' => 'Réinitialiser l\'album', //cpg1.4
  'reset_views' => 'Mettre le compteur de vues à &quot;0&quot; dans %s', //cpg1.4
  'reset_rating' => 'Effacer les votes de tous les fichiers dans %s', //cpg1.4
  'delete_comments' => 'Supprimer tous les commentaires écrit dans %s', //cpg1.4
  'delete_files' => 'Supprimer %sdéfinitivement%s tous les fichiers dans %s', //cpg1.4
  'views' => 'vues', //cpg1.4
  'votes' => 'votes', //cpg1.4
  'comments' => 'commentaires', //cpg1.4
  'files' => 'fichiers', //cpg1.4
  'submit_reset' => 'soumettre les changements', //cpg1.4
  'reset_views_confirm' => 'Je suis sûr', //cpg1.4
  'notice1' => '(*) en fonction de la configuration des %sgroupes%s', //cpg1.3.0 (do not translate %s!)
  'alb_password' => 'Mot de passe de l\'album', //cpg1.4
  'alb_password_hint' => 'Pense bête du mot de passe de l\'album', //cpg1.4
  'edit_files' =>'Editer les fichiers', //cpg1.4
  'parent_category' =>'Catégorie parente', //cpg1.4
  'thumbnail_view' =>'Vue des vignettes', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File phpinfo.php
// ------------------------------------------------------------------------- //

if (defined('PHPINFO_PHP')) $lang_phpinfo_php = array(
  'php_info' => 'PHP info',
  'explanation' => 'Voici la sortie générée par la fonction <a href="http://www.php.net/phpinfo">phpinfo()</a>, affichée à l\'intérieur de Coppermine (en rognant les informations trop longues).',
  'no_link' => 'Les informations reprises ici peuvent représenter un risque pour la sécurité, c\'est pourquoi cette page n\'est visible que si vous êtes connecté en tant qu\'administrateur. Vous ne pouvez pas poster de lien vers cette page car les autres n\'y ont pas accès.',
);

// ------------------------------------------------------------------------- //
// File picmgr.php //cpg1.4
// ------------------------------------------------------------------------- //
if (defined('PICMGR_PHP')) $lang_picmgr_php = array(
  'pic_mgr' => 'Gestionnaire d\'image', //cpg1.4
  'select_album' => 'Sélectionnez l\'album', //cpg1.4
  'delete' => 'Supprimer', //cpg1.4
  'confirm_delete1' => 'Etes-vous sur de vouloir supprimer cette image ?', //cpg1.4
  'confirm_delete2' => '\nL\'image sera supprimée de façon permanente.', //cpg1.4
  'apply_modifs' => 'Appliquer les modifications', //cpg1.4
  'confirm_modifs' => 'Confirmez les modifications', //cpg1.4
  'pic_need_name' => 'L\'image doit avoir un nom&nbsp;!', //cpg1.4
  'no_change' => 'Vous n\'avez pas fait de changement&nbsp;!', //cpg1.4
  'no_album' => '* Pas d\'album *', //cpg1.4
  'explanation_header' => 'L\'ordre personnalisé de tri que vous pouvez définir ne sera pris en compte que si', //cpg1.4
  'explanation1' => 'l\'administrateur à défini &quot;l\'ordre de tri par défaut des images&quot; dans la configuration en  &quot;Ordre croissant&quot; ou &quot;Ordre décroissant&quot; (configuration générale pour tous les utilisateurs qui n\'ont pas choisi une autre option de tri de manière individuelle)', //cpg1.4
  'explanation2' => 'l\'utilisateur a choisi &quot;Ordre croissant&quot; ou &quot;Ordre décroissant&quot; sur la page des vignettes (Choix personnel de l\'utilisateur)', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File pluginmgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('PLUGINMGR_PHP')){

$lang_pluginmgr_php = array(
  'confirm_uninstall' => 'Etes-vous sur de vouloir DESINSTALLER ce plugin', //cpg1.4
  'confirm_delete' => 'Etes-vous sur de vouloir SUPPRIMER ce plugin', //cpg1.4
  'pmgr' => 'Gérer les plugin', //cpg1.4
  'name' => 'Nom', //cpg1.4
  'author' => 'Auteur', //cpg1.4
  'desc' => 'Description', //cpg1.4
  'vers' => 'v', //cpg1.4
  'i_plugins' => 'Plugins installés', //cpg1.4
  'n_plugins' => 'Plugins non-installés', //cpg1.4
  'none_installed' => 'Aucune installation', //cpg1.4
  'operation' => 'Opération', //cpg1.4
  'not_plugin_package' => 'Le fichier uploadé n\'est pas un plugin.', //cpg1.4
  'copy_error' => 'Il y a eu une erreur en copiant le plugin dans le répertoire.', //cpg1.4
  'upload' => 'Upload', //cpg1.4
  'configure_plugin' => 'Configurer le plugin', //cpg1.4
  'cleanup_plugin' => 'Nettoyer le plugin', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
  'already_rated' => 'Vous aviez déjà noté cette photo',
  'rate_ok' => 'Votre vote a été pris en compte',
  'forbidden' => 'Vous ne pouvez pas noter vos propres photos.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
Bien que les administrateurs de {SITE_NAME} fassent en sorte de supprimer ou modifier toute donnée à caractère répréhensible le plus rapidement possible, il est impossible de scruter systématiquement l'intégralité des contenus. Vous êtes par conséquent conscient que tous les posts effectués sur ce site expriment les points de vue et opinions de leurs auteurs et non ceux des administrateurs ou du webmaster (sauf, évidemment dans le cas des posts effectués par ces derniers), qui ne pourront par conséquent pas être considérés comme responsables.<br />
<br />
Vous acceptez de ne poster aucune donnée à caractère injurieux, obscène, vulgaire, diffamatoire, menaçant, sexuel ou tout autre contenu susceptible de violer la loi. Vous acceptez que le webmaster et les modérateurs de {SITE_NAME} aient le droit de supprimer ou modifier n'importe quel contenu, si cela leur semble opportun. En tant qu'utilisateur, vous acceptez que toutes les informations entrées plus haut et toutes les photographies que vous publiez soient stockées dans une base de données. Bien que ces informations et photographies ne soient pas communiquées à des tiers sans votre consentement, le webmaster et les administrateurs ne peuvent en aucun cas être tenus pour responsables dans le cas de tentatives de hack qui pourraient compromettre les données ou permettre l'accès ou l'utilisation illicite de vos photographies.<br />
<br />
Ce site utilise des cookies pour stocker des informations sur votre ordinateur. Ces cookies ne servent qu'à améliorer votre navigation sur ce site. Votre adresse e-mail ne sera utilisée que pour confirmer les données de votre inscription ainsi que votre mot de passe.<br />
<br />
En cliquant sur 'J'accepte' ci-dessous, vous acceptez de vous soumettre à ces conditions ainsi qu'à toutes leurs éventuelles mises à jour.
EOT;

$lang_register_php = array(
  'page_title' => 'inscription d\'utilisateur',
  'term_cond' => 'Conditions générales d\'inscription',
  'i_agree' => 'J\'accepte',
  'submit' => 'S\'inscrire',
  'err_user_exists' => 'Le nom d\'utilisateur que vous avez entré existe déjà, merci de bien vouloir en choisir un autre',
  'err_password_mismatch' => 'Les deux mots de passe ne correspondent pas, merci de les entrer à nouveau',
  'err_uname_short' => 'Le nom d\'utilisateur doit comprendre au moins 2 caractères',
  'err_password_short' => 'Le mot de passe doit comprendre au moins 2 caractères',
  'err_uname_pass_diff' => 'Le nom d\'utilisateur et le mot de passe doivent être différents',
  'err_invalid_email' => 'L\'adresse courriel n\'est pas valide',
  'err_duplicate_email' => 'Un autre utilisateur s\'est déjà enregisté avec l\'adresse courriel que vous avez entrée',
  'enter_info' => 'Entrez les informations relatives à votre inscription',
  'required_info' => 'Informations requises',
  'optional_info' => 'Informations optionnelles',
  'username' => 'Nom d\'utilisateur / login',
  'password' => 'Mot de passe',
  'password_again' => 'Entrez à nouveau le mot de passe',
  'email' => 'Courriel',
  'location' => 'Localisation',
  'interests' => 'Intérêts',
  'website' => 'Site web',
  'occupation' => 'Activité',
  'error' => 'ERREUR',
  'confirm_email_subject' => '%s - Confirmation d\'inscription',
  'information' => 'Informations',
  'failed_sending_email' => 'Le courriel de confirmation d\'inscription n\'a pas pu être envoyé!',
  'thank_you' => 'Merci pour votre inscription.<br /><br />Un courriel contenant les informations sur l\'activation de votre compte vous a été envoyé à l\'adresse courriel que vous nous avez communiquée.',
  'acct_created' => 'Votre compte a bien été créé. Vous pouvez maintenant vous identifier avec votre login et votre mot de passe',
  'acct_active' => 'Votre compte a bien été activé. Vous pouvez maintenant vous identifier avec votre login et votre mot de passe',
  'acct_already_act' => 'Votre compte est déjà actif!',
  'acct_act_failed' => 'Ce compte ne peut pas être activé!',
  'err_unk_user' => 'L\'utilisateur sélectionné n\'existe pas!',
  'x_s_profile' => 'Profil de %s',
  'group' => 'Groupe',
  'reg_date' => 'Date d\'inscription',
  'disk_usage' => 'Utilisation du disque',
  'change_pass' => 'Modifier le mot de passe',
  'current_pass' => 'Mot de passe actuel',
  'new_pass' => 'Nouveau mot de passe',
  'new_pass_again' => 'Nouveau mot de passe (à nouveau)',
  'err_curr_pass' => 'Le mot de passe actuel n\'est pas correct',
  'apply_modif' => 'Appliquer les modifications',
  'change_pass' => 'Changer mon mot de passe',
  'update_success' => 'Votre profil a été mis à jour',
  'pass_chg_success' => 'Votre mot de passe a été modifié',
  'pass_chg_error' => 'Votre mot de passe n\'a pas été modifié',
  'notify_admin_email_subject' => '%s - notification d\'inscription',
  'last_uploads' => 'Dernier fichier uploadé.<br />Cliquer pour voir tous les derniers upload par', //cpg1.4
  'last_comments' => 'Dernier commentaire.<br />Cliquer pour voir tous les derniers commentaires par', //cpg1.4
  'notify_admin_email_body' => 'Un nouvel utilisateur s\'est inscrit dans votre galerie, sous le nom &quot;%s&quot;',
  'pic_count' => 'Fichiers uploadés', //cpg1.4
  'notify_admin_request_email_subject' => '%s - Demande d\'enregistrement', //cpg1.4
  'thank_you_admin_activation' => 'Merci.<br /><br />Votre requête d\'activation du compte a été envoyé à l\administrateur. Vous recevrez un courriel s\'il est approuvé', //cpg1.4
  'acct_active_admin_activation' => 'Le compte est maintenant actif et un courriel a été envoyé à l\'utilisateur.', //cpg1.4
  'notify_user_email_subject' => '%s - Notification d\'activation', //cpg1.4
);

$lang_register_confirm_email = <<<EOT
Merci pour votre inscription sur {SITE_NAME}

Pour activer ce compte avec ce nom d'utilisateur &quot;{USER_NAME}&quot;, vous devez cliquer sur le lien ci-dessous ou le copier dans la barre d'adresse de votre navigateur

<a href="{ACT_LINK}">{ACT_LINK}</a>

Cordialement,

L'administrateur de {SITE_NAME}

EOT;

$lang_register_approve_email = <<<EOT
Un nouvel utilisateur avec ce pseudonyme &quot;{USER_NAME}&quot; s'est inscrit dans votre galerie.

Pour activer ce compte, vous devez cliquer sur le lien ci-dessous ou le copier dans la barre d'adresse de votre navigateur.

<a href="{ACT_LINK}">{ACT_LINK}</a>

EOT;

$lang_register_activated_email = <<<EOT
Votre compte a été approuvé et activé.

Vous pouvez maintenant vous connecter <a href="{SITE_LINK}">{SITE_LINK}</a> en utilisant ce nom d'utilisateur &quot;{USER_NAME}&quot;


Cordialement,

L'administrateur de {SITE_NAME}

EOT;
}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
  'title' => 'Vérifier les commentaires',
  'no_comment' => 'Il n\'y a pas de commentaire à vérifier',
  'n_comm_del' => '%s commentaire(s) supprimé(s)',
  'n_comm_disp' => 'Nombre de commentaires à afficher',
  'see_prev' => 'Voir précédent(s)',
  'see_next' => 'Voir suivant(s)',
  'del_comm' => 'Supprimer les commentaires sélectionnés',
  'user_name' => 'Nom', //cpg1.4
  'date' => 'Date', //cpg1.4
  'comment' => 'Commentaire', //cpg1.4
  'file' => 'Fichier', //cpg1.4
  'name_a' => 'Nom d\'utilisateur ascendant', //cpg1.4
  'name_d' => 'Nom d\'utilisateur descendant', //cpg1.4
  'date_a' => 'Date ascendante', //cpg1.4
  'date_d' => 'Date descendante', //cpg1.4
  'comment_a' => 'Commentaire du message ascendant', //cpg1.4
  'comment_d' => 'Commentaire du message descendant', //cpg1.4
  'file_a' => 'Fichier ascendant', //cpg1.4
  'file_d' => 'Fichier descendant', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File search.php                                                           //
// ------------------------------------------------------------------------- //


if (defined('SEARCH_PHP')){

$lang_search_php = array(
  'title' => 'Chercher dans les fichiers', //cpg1.4
  'submit_search' => 'chercher', //cpg1.4
  'keyword_list_title' => 'Liste de mots-clés', //cpg1.4
  'keyword_msg' => 'Cette liste n\'est pas exhaustive . Elle ne comprends pas les mots inclus dans les titres et les descriptions des photos. Essayez une recherche sur une phrase.',  //cpg1.4
  'edit_keywords' => 'Editer les mots-clés', //cpg1.4
  'search in' => 'Chercher dans :', //cpg1.4
  'ip_address' => 'Adresse IP', //cpg1.4
  'fields' => 'Chercher dans', //cpg1.4
  'age' => 'Age', //cpg1.4
  'newer_than' => 'Nouveau depuis', //cpg1.4
  'older_than' => 'Ancien depuis', //cpg1.4
  'days' => 'jours', //cpg1.4
  'all_words' => 'Chercher TOUS les mots (AND)', //cpg1.4
  'any_words' => 'Chercher AU MOINS un mot (OR)', //cpg1.4
);

$lang_adv_opts = array(
  'title' => 'Titre', //cpg1.4
  'caption' => 'Légende', //cpg1.4
  'keywords' => 'Mot-clés', //cpg1.4
  'owner_name' => 'Nom du propriétaire', //cpg1.4
  'filename' => 'Nom du fichier', //cpg1.4
);

}

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
  'page_title' => 'Rechercher les nouvelles photos',
  'select_dir' => 'Sélectionnez le répertoire',
  'select_dir_msg' => 'Cette fonction vous permet d\'ajouter un groupe de photos que vous avez uploadé sur votre serveur FTP.<br /><br />Sélectionnez le répertoire où vous avez uploadé vos photos',
  'no_pic_to_add' => 'Il n\'y a pas de photo à ajouter',
  'need_one_album' => 'Vous avez besoin d\'au moins un album pour effectuer cette opération',
  'warning' => 'Avertissement',
  'change_perm' => 'le script ne peut pas écrire dans ce répertoire, vous devez changer ses permissions à 755 ou 777 avant d\'essayer d\'ajouter les photos&nbsp;!',
  'target_album' => '<b>Mettre les photos de &quot;</b>%s<b>&quot; dans </b>%s',
  'folder' => 'Répertoire',
  'image' => 'fichier',
  'album' => 'Album',
  'result' => 'Résultat',
  'dir_ro' => 'Non inscriptible. ',
  'dir_cant_read' => 'Illisible. ',
  'insert' => 'Ajouter de nouvelles images à la galerie',
  'list_new_pic' => 'Liste des nouvelles images',
  'insert_selected' => 'Insérer les photos sélectionnées',
  'no_pic_found' => 'Aucun nouveau fichier n\'a été trouvé',
  'be_patient' => 'Soyez patient. Le script a besoin de temps pour mettre les photos en ligne',
  'no_album' => 'Aucun album sélectionné',
  'result_icon' => 'Cliquer pour les détails ou  pour recharger',  //cpg1.4
  'notes' =>  '<ul>'.
                          '<li><b>OK</b> : signifie que le fichier a été ajouté  avec succès'.
                          '<li><b>DP</b> : signifie que le fichier est un doublon et existe déjà dans la base de données'.
                          '<li><b>PB</b> : signifie que le fichier n\'a pas pu être ajouté, vérifiez votre configuration et les droits (CHMOD) du répertoire de destination du fichier'.
                          '<li><b>NA</b> : signifie que vous n\'avez pas sélectionné d\'album de destination pour ce fichier, cliquez sur \'<a href="javascript:history.back(1)">retour</a>\' et sélectionnez un album. si vous n\'avez pas d\' album <a href="albmgr.php">créez en un d\'abord</a></li>'.
                          '<li>Si les signes OK, DP, PB n\'apparaissent pas, cliquez sur le lien brisé afin de voir le message d\'erreur généré par PHP'.
                          '<li>Si votre navigateur vous indique un dépassement de durée, cliquez sur &quot;Actualiser&quot;.'.
                          '</ul>',
  'select_album' => 'Choisissez un album',
  'check_all' => 'Tout cocher', //cpg1.3.0
  'uncheck_all' => 'Tout décocher', //cpg1.3.0
  'no_folders' => 'Il n\'y a actuellement pas de sous-répertoire dans le répertoire &quot;albums&quot;. Vérifiez que vous avez bien créé un sous-répertoire dans le répertoire &quot;albums&quot; et uploadez-y vos fichiers par le FTP. Vous ne devez pas uploader dans les répertoires &quot;userpics&quot; ou &quot;edit&quot; , ils sont réservés pour les uploads en HTML ou pour des traitements internes.', //cpg1.4
   'albums_no_category' => 'Albums sans catégorie', //cpg1.4 // album pulldown mod, added by frogfoot
  'personal_albums' => '* Albums personnels', //cpg1.4 // album pulldown mod, added by frogfoot
  'browse_batch_add' => 'Interface d\'exploration (recommandé)', //cpg1.4
  'edit_pics' => 'Editer les fichiers', //cpg1.4
  'edit_properties' => 'Propriétés de l\'album', //cpg1.4
  'view_thumbs' => 'Voir les vignettes', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File stat_details.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('STAT_DETAILS_PHP')) $lang_stat_details_php = array(
  'show_hide' => 'afficher / cacher cette colonne', //cpg1.4
  'vote' => 'Détails des votes', //cpg1.4
  'hits' => 'Détails des hits', //cpg1.4
  'stats' => 'Statistiques des votes', //cpg1.4
  'sdate' => 'Date', //cpg1.4
  'rating' => 'Vote', //cpg1.4
  'search_phrase' => 'Phrase de recherche', //cpg1.4
  'referer' => 'Référant', //cpg1.4
  'browser' => 'Navigateur', //cpg1.4
  'os' => 'Système d\'exploitation', //cpg1.4
  'ip' => 'IP', //cpg1.4
  'sort_by_xxx' => 'Classer par %s', //cpg1.4
  'ascending' => 'ascendant', //cpg1.4
  'descending' => 'descendant', //cpg1.4
  'internal' => 'interne', //cpg1.4
  'close' => 'fermer', //cpg1.4
  'hide_internal_referers' => 'cacher les attributs internes', //cpg1.4
  'date_display' => 'Date d\'affichage', //cpg1.4
  'submit' => 'soumettre / actualiser', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File thumbnails.php
// ------------------------------------------------------------------------- //

// Void

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) $lang_upload_php = array(
  'title' => 'Uploader un fichier',
  'custom_title' => 'Formulaire de requête personnalisée',
  'cust_instr_1' => 'Vous pouvez sélectionner un nombre personnalisé de boxes d\'uploads, dans la limite listée ci-dessous.',
  'cust_instr_2' => 'Nombre de cases de requête',
  'cust_instr_3' => 'Cases d\'uploads de fichier : %s',
  'cust_instr_4' => 'Cases d\'uploads URI/URL : %s',
  'cust_instr_5' => 'Cases d\'uploads URI/URL :',
  'cust_instr_6' => 'Cases d\'uploads de fichier :',
  'cust_instr_7' => 'Merci de saisir le nombre de chaque type de cases d\'uploads désiré. Ensuite cliquez sur \'Continuer\'. ',
  'reg_instr_1' => 'Action invalide pour la création du formulaire.',
  'reg_instr_2' => 'Vous pouvez maintenant uploader vos fichiers en utilisant les cases d\'upload ci-dessous. Le poids des fichiers uploadés de votre fichier vers le serveur ne peut excéder %s Ko chacun. Les fichiers ZIP uploadés dans les sections \'Upload de fichier\' et \'Upload URI/URL\' resteront compressés.',
  'reg_instr_3' => 'Si vous souhaitez que le fichier soit décompressé, vous devez utiliser la case de téléchargement fournie dans la zone \'Upload de ZIP décompressible\'',
  'reg_instr_4' => 'Si vous utilisez la section d\'upload URI/URL, saisissez l\'adresse du fichier de la forme http://www.votre-site.com/images/exemple.jpg',
  'reg_instr_5' => 'Lorsque le formulaire est complété, cliquez sur \'Continuer\'.',
  'reg_instr_6' => 'Upload de ZIP décompressible :',
  'reg_instr_7' => 'Uploads de fichier :',
  'reg_instr_8' => 'Uploads URI/URL :',
  'error_report' => 'Rapport d\'erreur',
  'error_instr' => 'Le téléchargement suivant a généré des erreurs :',
  'file_name_url' => 'Nom de fichier / URL',
  'error_message' => 'Message d\'erreur',
  'no_post' => 'Fichier non uploadé par POST.',
  'forb_ext' => 'Extension de fichier non autorisée.',
  'exc_php_ini' => 'Le poids excède celui permis par le fichier php.ini.',
  'exc_file_size' => 'Le poids excède celui permis par Coppermine.',
  'partial_upload' => 'Upload partiel uniquement.',
  'no_upload' => 'L\'upload ne s\'est pas effectué.',
  'unknown_code' => 'Code d\'erreur d\'upload PHP inconnu.',
  'no_temp_name' => 'Pas d\'upload - Pas de dossier temporaire.',
  'no_file_size' => 'Pas de données ou données endommagées',
  'impossible' => 'Impossible à déplacer.',
  'not_image' => 'Pas une image ou image endommagée',
  'not_GD' => 'N\'est pas une extension GD.',
  'pixel_allowance' => 'La hauteur et/ou la largeur de l\'image uploadée est plus grande que celle permise dans la configuration de la galerie.', //cpg1.4
  'incorrect_prefix' => 'Préfixe URI/URL incorrect',
  'could_not_open_URI' => 'Ouverture d\'URI impossible.',
  'unsafe_URI' => 'Sécurité non vérifiable.',
  'meta_data_failure' => 'Erreur de Meta-données',
  'http_401' => '401 Non autorisé',
  'http_402' => '402 Paiement requis',
  'http_403' => '403 Interdit',
  'http_404' => '404 Non trouvé',
  'http_500' => '500 Erreur interne au serveur',
  'http_503' => '503 Service indisponible',
  'MIME_extraction_failure' => 'Type MIME indéterminé.',
  'MIME_type_unknown' => 'Type MIME inconnu',
  'cant_create_write' => 'Ne peut pas créer le fichier réinscriptible.',
  'not_writable' => 'Ne peut pas écrire dans le fichier réinscriptible.',
  'cant_read_URI' => 'Lecture de l\'URI/URL impossible',
  'cant_open_write_file' => 'Ne peut pas ouvrir l\'URI du fichier réinscriptible.',
  'cant_write_write_file' => 'Ne peut pas écrire dans l\'URI du fichier réinscriptible.',
  'cant_unzip' => 'Dézippage impossible.',
  'unknown' => 'Erreur inconnue.',
  'succ' => 'Uploads effectués avec succès',
  'success' => '%s uploads effectués avec succès.',
  'add' => 'Cliquez sur \'Continuer\' pour ajouter les fichiers aux albums.',
  'failure' => 'Erreur d\'upload',
  'f_info' => 'Information du fichier',
  'no_place' => 'Le fichier précédent n\'a pas pu être placé.',
  'yes_place' => 'Le fichier précédent a été placé avec succès',
  'max_fsize' => 'Le poids maximal autorisé pour une image est de %s Ko',
  'album' => 'Album',
  'picture' => 'Fichier',
  'pic_title' => 'Titre du fichier',
  'description' => 'Description du fichier',
  'keywords' => 'Mots clefs (séparés par des espaces)<br /><a href="#" onClick="return MM_openBrWindow(\'keyword_select.php\',\'selectKey\',\'width=250, height=400, scrollbars=yes,toolbar=no,status=yes,resizable=yes\')">Insert from list</a>', //cpg1.4
  'keywords_sel' =>'Choisissez un mot-clé', //cpg1.4
  'err_no_alb_uploadables' => 'Désolés, mais il n\'existe pas d\'album dans lequel vous avez le droit d\'uploader des photos',
  'place_instr_1' => 'Merci de placer les fichiers dans les albums maintenant.  Vous pouvez aussi saisir les informations de chaque fichier.',
  'place_instr_2' => 'D\'autres fichiers doivent être placés. Merci de cliquer sur \'Continuer\'.',
  'process_complete' => 'Vous avez placé tous les fichiers avec succès.',
   'albums_no_category' => 'L\'album n\'a pas de catégorie', //cpg1.4. //album pulldown mod, added by frogfoot
  'personal_albums' => '* Albums personnels', //cpg1.4 //album pulldown mod, added by frogfoot
  'select_album' => 'Sélectionnez l\'album', //cpg1.4 //album pulldown mod, added by frogfoot
  'close' => 'Fermer', //cpg1.4
  'no_keywords' => 'Désolé, aucun mot-clé disponible&nbsp;!', //cpg1.4
  'regenerate_dictionary' => 'Regénérer le dictionnaire', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
  'memberlist' => 'Liste des membres', //cpg1.4
  'user_manager' => 'Gestion utilisateurs', //cpg1.4
  'title' => 'Gérer les utilisateurs',
  'name_a' => 'Nom ascendant',
  'name_d' => 'Nom descendant',
  'group_a' => 'Groupe ascendant',
  'group_d' => 'Groupe descendant',
  'reg_a' => 'Date d\'inscription ascendante',
  'reg_d' => 'Date d\'inscription descendante',
  'pic_a' => 'Nombre de fichiers ascendant',
  'pic_d' => 'Nombre de fichiers descendant',
  'disku_a' => 'Utilisation espace disque ascendant',
  'disku_d' => 'Utilisation espace disque descendant',
  'lv_a' => 'Dernière visite ascendante',
  'lv_d' => 'Dernière visite descendante',
  'sort_by' => 'Classer les utilisateurs par',
  'err_no_users' => 'La table d\'utilisateurs est vide!',
  'err_edit_self' => 'Vous ne pouvez pas modifier votre propre profil, utilisez le lien \'Mon profil\' pour effectuer cette opération',
  'edit' => 'Editer',
  'with_selected' => 'Sélectionner:', //cpg1.4
  'delete' => 'Supprimer', //cpg1.4
  'delete_files_no' => 'garder le fichiers publics (mais les laisser anonymes)', //cpg1.4
  'delete_files_yes' => 'effacer les fichiers publics', //cpg1.4
  'delete_comments_no' => 'garder les commentaires(mais les laisser anonymes)', //cpg1.4
  'delete_comments_yes' => 'effacer les commentaires', //cpg1.4
  'activate' => 'Activer', //cpg1.4
  'deactivate' => 'Désactiver', //cpg1.4
  'reset_password' => 'Changer le mot de passe', //cpg1.4
  'change_primary_membergroup' => 'Changer de groupe principal', //cpg1.4
  'add_secondary_membergroup' => 'Ajouter un groupe secondaire', //cpg1.4
  'name' => 'Nom d\'utilisateur',
  'group' => 'Groupe',
  'inactive' => 'Inactif',
  'operations' => 'Opérations',
  'pictures' => 'Fichiers',
  'disk_space_used' => 'Espace utilisé', //cpg1.4
  'disk_space_quota' => 'Espace alloué', //cpg1.4
  'registered_on' => 'Enregistré le',
  'last_visit' => 'Dernière visite',
  'u_user_on_p_pages' => '%d utilisateur(s) sur %d page(s)',
  'confirm_del' => 'Voulez vous vraiment SUPPRIMER cet utilisateur?\\nToutes ses photos et albums seront également supprimés.', //js-alert
  'mail' => 'MAIL',
  'err_unknown_user' => 'L\'utilisateur sélectionné n\'existe pas!',
  'modify_user' => 'Modifier l\'utilisateur',
  'notes' => 'Notes',
  'note_list' => '<li>Si vous ne souhaitez pas modifier le mot de passe actuel, laisse le champs &quot;mot de passe&quot; vide.',
  'password' => 'Mot de passe',
  'user_active' => 'L\'utilisateur est actif',
  'user_group' => 'Groupe de l\'utilisateur',
  'user_email' => 'Courriel de l\'utilisateur',
  'user_web_site' => 'Site web de l\'utilisateur',
  'create_new_user' => 'Créer un nouvel utilisateur',
  'user_location' => 'Localisation de l\'utilisateur',
  'user_interests' => 'Centres d\'intérêt de l\'utilisateur',
  'user_occupation' => 'Activité de l\'utilisateur',
  'user_profile1' => '$user_profile1', //cpg1.4
  'user_profile2' => '$user_profile2', //cpg1.4
  'user_profile3' => '$user_profile3', //cpg1.4
  'user_profile4' => '$user_profile4', //cpg1.4
  'user_profile5' => '$user_profile5', //cpg1.4
  'user_profile6' => '$user_profile6', //cpg1.4
  'latest_upload' => 'Derniers uploads',
  'never' => 'jamais',
  'search' => 'Chercher un utilisateur', //cpg1.4
  'submit' => 'Soumettre', //cpg1.4
  'search_submit' => 'Valider!', //cpg1.4
  'search_result' => 'Résultat de recherche pour : ', //cpg1.4
  'alert_no_selection' => 'vous devez d\\\'abord sélectionner un utilisateur!', //cpg1.4 //js-alert
  'password' => 'mot de passe', //cpg1.4
  'select_group' => 'Sélectionnez un groupe', //cpg1.4
  'groups_alb_access' => 'Droits sur les albums pour le groupe', //cpg1.4
  'album' => 'Album', //cpg1.4
  'category' => 'Catégorie', //cpg1.4
  'modify' => 'Modifier ?', //cpg1.4
  'group_no_access' => 'Ce groupe n\'a pas d\'accès spécial', //cpg1.4
  'notice' => 'Attention', //cpg1.4
  'group_can_access' => 'Accès réservé au groupe &quot;%s&quot;', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //

if (defined('UTIL_PHP')) {
$lang_util_desc_php = array(
'Mettre à jour les titres depuis les noms de fichiers', //cpg1.4
'Effacer les titres', //cpg1.4
'Regénérer les vignettes et les images intermédiaires', //cpg1.4
'Effacer les photos originales et les remplacer par les images redimensionnées', //cpg1.4
'Effacer les images originales ou intermédiaires pour gagner de l\'espace sur le serveur', //cpg1.4
'Effacer les commentaires orphelins', //cpg1.4
'Recharger les informations de poids et de taille des fichiers (si vous avez édité manuellement ces fichiers)', //cpg1.4
'Réinitialiser le compteur de vue', //cpg1.4
'Visualiser phpinfo', //cpg1.4
'Mettre à jour la base de données', //cpg1.4
'Visualiser les fichiers \'log\'', //cpg1.4
);
$lang_util_php = array(
  'title' => 'Utilitaires d\'administration (Redimensionnement des images)',
  'what_it_does' => 'Fonctionnalités',
  'file' => 'Fichier',
  'problem' => 'Probleme', //cpg1.4
  'status' => 'Status', //cpg1.4
  'title_set_to' => 'titre changé en',
  'submit_form' => 'soumettre',
  'updated_succesfully' => 'mise à jour effectuée avec succès',
  'error_create' => 'ERREUR lors de la création',
  'continue' => 'Traitez d\'autres images',
  'main_success' => 'Le fichier %s est maintenant utilisé comme image principale',
  'error_rename' => 'Erreur lors du changement du nom de %s à %s',
  'error_not_found' => 'Le fichier %s n\'a pas été trouvé',
  'back' => 'retour à la page principale',
  'thumbs_wait' => 'Mise à jour des vignettes et/ou images redimensionnées, merci de patienter...',
  'thumbs_continue_wait' => 'Continuer la mise à jour des vignettes et/ou des images redimensionnées...',
  'titles_wait' => 'Mise à jour des titres, merci de patienter...',
  'delete_wait' => 'Suppression des titres, merci de patienter...',
  'replace_wait' => 'Suppression des originaux et remplacement de ces derniers par les images redimensionnées, merci de patienter...',
  'instruction' => 'Instructions rapides',
  'instruction_action' => 'Sélectionnez une action',
  'instruction_parameter' => 'Définissez les paramètres',
  'instruction_album' => 'Sélectionnez un album',
  'instruction_press' => 'Appuyez sur %s',
  'update' => 'Mettre à jour les vignettes et/ou les photos redimensionnées',
  'update_what' => 'Ce qui devrait être mis à jour',
  'update_thumb' => 'Seulement les vignettes',
  'update_pic' => 'Seulement les photos redimensionnées',
  'update_both' => 'Les vignettes et les images redimensionnées',
  'update_number' => 'Nombre d\'images traitées par clic',
  'update_option' => '(essayez de réduire cette valeur si vous avez des problèmes de timeout)',
  'filename_title' => 'Nom du fichier / Titre de l\'image',
  'filename_how' => 'Comment le nom du fichier doit-il être modifié ?',
  'filename_remove' => 'Supprimer la fin .jpg et remplacer _ (underscore) par des espaces',
  'filename_euro' => 'Changer 2003_11_23_13_20_20.jpg en 23/11/2003 13:20',
  'filename_us' => 'Changer 2003_11_23_13_20_20.jpg en 11/23/2003 13:20',
  'filename_time' => 'Changer 2003_11_23_13_20_20.jpg en 13:20',
  'delete' => 'Supprimer le titre des photos ou les photos dans leur taille d\'origine',
  'delete_title' => 'Supprimer le titre des photos',
  'delete_title_explanation' => 'Cela va effacer l\'ensemble des titres des photos de l\'album sélectionné.', //cpg1.4
  'delete_original' => 'Supprimer les photos dans leur taille d\'origine',
  'delete_original_explanation' => 'Cela va supprimer les photos à la taille d\'origine', //cpg1.4
  'delete_intermediate' => 'Supprimer les images intermédiaires', //cpg1.4
  'delete_intermediate_explanation' => 'Cela va supprimer les images intermédiaires (\'normales\').<br />Utilisez cette fonction pour libérer de l\'espace disque si vous avez décoché \'Générer les images intermédiaires\'dans le panneau de configuration après avoir placé les images.', //cpg1.4
  'delete_replace' => 'Supprime les images originales en les remplaçant par les versions redimensionnées',
  'titles_deleted' => 'Tous les titres des images de l\'album sélectionné sont effacés', //cpg1.4
  'deleting_intermediates' => 'Patientez: Effacement des images intermédiaires...', //cpg1.4
  'searching_orphans' => 'Patientez: recherche des commentaires orphelins...', //cpg1.4
  'select_album' => 'Sélectionner un album',
  'delete_orphans' => 'Supprimer les commentaires orphelins (fonctionne pour tous les albums)', //cpg1.4
  'delete_orphans_explanation' => 'Cela va identifier tous les commentaires qui ne sont plus associés à un fichier et vous permettre de les effacer.<br />Vérifie tous les albums.', //cpg1.4
  'refresh_db' => 'Recharger les informations de poid et de taille', //cpg1.4
  'refresh_db_explanation' => 'Cela va recharger les informations de poids et de taille. Utilisez cette fonction si les quotas sont incorrects ou si vous avez changé manuellement ces données.', //cpg1.4
  'reset_views' => 'Réinitialisation du compteur de vues', //cpg1.4
  'reset_views_explanation' => 'Met à zero le compteur de vue de l\'ensemble des fichiers de l\'album sélectionné.', //cpg1.4
  'orphan_comment' => 'Pas de commentaire ophelin trouvé', //cpg1.3.0
  'delete' => 'Supprimer',
  'delete_all' => 'Tout supprimer',
  'delete_all_orphans' => 'Supprimer tous les commentaires orphelins?', //cpg1.4
  'comment' => 'Commentaire: ',
  'nonexist' => 'Lié à un fichier non existant # ',
  'phpinfo' => 'Afficher le phpinfo',
  'phpinfo_explanation' => 'Contient des informations techniques sur votre serveur.<br /> - Adressez vous a votre hébergeur pour toutes questions concernant ces données.', //cpg1.4
  'update_db' => 'Mise à jour de la base de données',
  'update_db_explanation' => 'Si vous avez remplacé des fichiers Coppermine, effectué des modifications ou upgradé à partir de versions précédentes de Coppermine, assurez-vous d\'exécuter la mise à jour de base de données. Cela créera les tables et/ou valeurs de configuration nécessaires dans la base de données.', //cpg1.3.0
  'view_log' => 'Visualisez les fichiers \'log\'', //cpg1.4
  'view_log_explanation' => 'Coppermine peut garder une trace de touts les actions effectuées par les utilisateurs. Vous pouvez consulter ces logs si vous en avez activé l\'enregistrement dans la page de <a href="admin.php">configuration</a>.', //cpg1.4
  'versioncheck' => 'Vérification de la version', //cpg1.4
  'versioncheck_explanation' => 'Vérifie la version des fichiers de Coppermine afin de voir si vous avez remplacé tous les fichiers après une mise à jour, ou si les fichier sources de Coppermine ont été mis à jour depuis votre installation.', //cpg1.4
  'bridgemanager' => 'Gestionnaire de Bridge', //cpg1.4
  'bridgemanager_explanation' => 'Active/Désactive l\'intégration (Bridge)de Coppermine avec une autre application (ex:Votre Forum).', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File versioncheck.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('VERSIONCHECK_PHP')) $lang_versioncheck_php = array(
  'title' => 'Vérification de la version', //cpg1.4
  'what_it_does' => 'Cette page s\'adresse aux utilisateurs ayant mis à jour leur installation de Coppermine. Ce script passe en revue les fichiers installés sur votre serveur et tente de vérifier si leur version est la même que celle des fichiers les plus récents mis à disposition au téléchargement sur http://coppermine.sourceforge.net, L\'affichage de ces versions vous permettra de vérifier que votre mise à jour est complête.<br />Sont affichées en rouge les données qui doivent impérativement être mises à jour. Les entrées affichées en jaune doivent être vérifiés. Celles en vert (ou dans la couleur par défaut de votre texte) sont OK.<br />Pour plus de détails, cliquez sur l\'icone d\'aide.', //cpg1.4
  'online_repository_unable' => 'Impossible de se connecter au serveur de téléchargement', //cpg1.4
  'online_repository_noconnect' => 'Coppermine n\'a pas pu se connecter au serveur de téléchargement. Il peut y avoir deux raisons:', //cpg1.4
  'online_repository_reason1' => 'Le serveur de téléchargement de Coppermine n\'est pas en ligne actuellement - Essayez si vous pouvez accéder à cette page: %s - Sinon, essayez plus tard.', //cpg1.4
  'online_repository_reason2' => 'Sur votre serveur, PHP est configuré avec l\'option \'%s\' désactivée (par défaut elle est activée). Si vous êtes administrateur du serveur, activez cette option dans le fichier <i>php.ini</i> (ou au moins permettez qu\'il soit supplanté par %s). Si vous êtes hébergé ailleurs, vous devrez probablement accepter le fait de ne pas pouvoir comparer vos fichiers avec le référentiel en ligne. Cette page ne montrera dès lors que la version de vos fichiers - pas les mises à jour.', //cpg1.4
  'online_repository_skipped' => 'La connexion au référentiel a été ignorée', //cpg1.4
  'online_repository_to_local' => 'Le script utilise la copie locale du fichier de versions. Les données peuvent être inexactes si vous avez fait une mise à jour partielle de Coppermine. Les modifications faites aux fichiers après la publication ne seront également pas prises en compte.', //cpg1.4
  'local_repository_unable' => 'Impossible de se connecter au référentiel sur votre serveur', //cpg1.4
  'local_repository_explanation' => 'Coppermine n\'a pas pu se connecter au fichier de référence %s sur votre serveur. Cela signifie probablement que vous ne l\'avez pas uploadé sur votre serveur. Faites-le maintenant et cliquez sur \'Actualiser\'.<br />Si ça ne marche toujours pas, votre hébergeur a probablement désactivé une partie des <a href="http://www.php.net/manual/fr/ref.filesystem.php">fonctions de système de fichiers de PHP</a>. Si c\'est le cas, vous ne pourrez malheureusement pas utiliser cet outil.', //cpg1.4
  'coppermine_version_header' => 'Version installée de Coppermine', //cpg1.4
  'coppermine_version_info' => 'Vous avez actuellement installé la version: %s', //cpg1.4
  'coppermine_version_explanation' => 'Si vous pensez que ceci est faut et que vous êtes sûr d\'avoir installé une version plus récente de Coppemrine, vous n\'avez probablement pas uploadé la version la plus récente du fichier <i>include/init.inc.php</i>', //cpg1.4
  'version_comparison' => 'Comparaison de version', //cpg1.4
  'folder_file' => 'Répertoire/Fichier', //cpg1.4
  'coppermine_version' => 'Version de Coppermine', //cpg1.4
  'file_version' => 'Version du fichier', //cpg1.4
  'webcvs' => 'web svn', //cpg1.4
  'writable' => 'inscriptible', //cpg1.4
  'not_writable' => 'non inscriptible', //cpg1.4
  'help' => 'Aide', //cpg1.4
  'help_file_not_exist_optional1' => 'Fichier/Répertoire n\'existe pas', //cpg1.4
  'help_file_not_exist_optional2' => 'Le fichier/répertoire %s n\'a pas été trouvé sur votre serveur. Bien qu\'il soit optionnel, vous devriez l\'uploader sur votre serveur (en utilisant un client FTP) si vous rencontrez des problèmes.', //cpg1.4
  'help_file_not_exist_mandatory1' => 'Fichier/Répertoire n\'existe pas', //cpg1.4
  'help_file_not_exist_mandatory2' => 'Le fichier/répertoire %s n\'a pas été trouvé sur votre serveur alors qu\'il est obligatoire. Uploadez-le sur votre serveur (en utilisant un client FTP).', //cpg1.4
  'help_no_local_version1' => 'Pas de version du fichier local', //cpg1.4
  'help_no_local_version2' => 'Le script n\'a pas pu extraire la version de votre fichier local - soit votre fichier est trop vieux, soit vous l\'avez modifié en supprimant les informations situées dans l\'entête. Il est conseillé de mettre ce fichier à jour.', //cpg1.4
  'help_local_version_outdated1' => 'Version de fichier dépassée', //cpg1.4
  'help_local_version_outdated2' => 'Votre version du fichier semble venir d\'une ancienne version de Coppermine (que vous avez probablement mise à jour). Soyez bien sûr de mettre aussi à jour ce fichier.', //cpg1.4
  'help_local_version_na1' => 'Impossible d\'extraire les information de version CVS', //cpg1.4
  'help_local_version_na2' => 'Le script n\'a pas pu déterminer quelle est la version CVS du fichier qui se trouve sur votre serveur. Vous devriez uploader le fichier de votre package.', //cpg1.4
  'help_local_version_dev1' => 'Version de développement', //cpg1.4
  'help_local_version_dev2' => 'Le fichier qui se trouve sur votre serveur semble plus récent que votre version de Coppermine. Soit vous utilises une version de développement de Coppermine (à faire uniquement si vous savez ce que vous faites), soit vous avez mis à jour Coppermine sans uploader le fichier include/init.inc.php', //cpg1.4
  'help_not_writable1' => 'Répertoire non inscriptible', //cpg1.4
  'help_not_writable2' => 'Changez les permissions (CHMOD) pour donner au script l\'accès en écriture au répertoire %s et à tout ce qu\'il contient.', //cpg1.4
  'help_writable1' => 'Fichier inscriptible', //cpg1.4
  'help_writable2' => 'L\'accès en écriture au répertoire %s est aurorisé. C\'est un risque inutile, Coppermine n\'a besoin que des autorisations de lecture et d\'exécution.', //cpg1.4
  'help_writable_undetermined' => 'Coppermine n\'a pas pu définir si le répertoire est accessible en écriture.', //cpg1.4
  'your_file' => 'votre fichier', //cpg1.4
  'reference_file' => 'Fichier de référence', //cpg1.4
  'summary' => 'Sommaire', //cpg1.4
  'total' => 'Total des fichiers/répertoires vérifiés', //cpg1.4
  'mandatory_files_missing' => 'Fichiers necessaires manquants', //cpg1.4
  'optional_files_missing' => 'Fichiers optionnels manquants', //cpg1.4
  'files_from_older_version' => 'Fichiers venant d\'une ancienne version de Coppermine', //cpg1.4
  'file_version_outdated' => 'version de fichier dépassée', //cpg1.4
  'error_no_data' => 'Le script n\'a pas pu récupérer les informations désirées. Veuillez nous en excuser.', //cpg1.4
  'go_to_webcvs' => 'aller à %s', //cpg1.4
  'options' => 'Options', //cpg1.4
  'show_optional_files' => 'montrer les fichiers/repertoires optionnels', //cpg1.4
  'show_mandatory_files' => 'montrer les fichiers necessaires', //cpg1.4
  'show_file_versions' => 'montrer la version des fichiers', //cpg1.4
  'show_errors_only' => 'montrer uniquement les fichiers/répertoires avec des erreurs', //cpg1.4
  'show_permissions' => 'Monter les droits des répertoires', //cpg1.4
  'show_condensed_output' => 'Montrer un affichage condensé (pour faciliter les captures d\écran)', //cpg1.4
  'coppermine_in_webroot' => 'Coppermine est installé à la racine du site', //cpg1.4
  'connect_online_repository' => 'Essayer de se connecter au référentiel en ligne', //cpg1.4
  'show_additional_information' => 'montrer les informations complémentaires', //cpg1.4
  'no_webcvs_link' => 'Ne pas montrer les liens web svn', //cpg1.4
  'stable_webcvs_link' => 'montrer le lien webcvs vers la branche stable', //cpg1.4
  'devel_webcvs_link' => 'montrer le lien webcvs vers la branche de développement', //cpg1.4
  'submit' => 'appliquer les changements/ Rafraichir l\'affichage', //cpg1.4
  'reset_to_defaults' => 'Revenir aux valeurs par défaut', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File view_log.php  //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('VIEWLOG_PHP')) $lang_viewlog_php = array(
  'delete_all' => 'Supprimer tous les logs', //cpg1.4
  'delete_this' => 'Supprimer ce log', //cpg1.4
  'view_logs' => 'Voir les logs', //cpg1.4
  'no_logs' => 'Pas de log créé.', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File xp_publish.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('XP_PUBLISH_PHP')) {

$lang_xp_publish_client = <<<EOT
<h1>Client pour l'Assistant de Publication Web XP</h1>\n<p>Ce module permet d'utiliser l'Assistant de Publication Web de <b>Windows XP</b> avec Coppermine.</p>\n<p>Ce code est basé sur un article publié par
EOT;

$lang_xp_publish_required = <<<EOT
\n<h2>Conditions requises</h2>\n<ul>\n<li>Windows XP pour avoir l'assistant.</li>\n<li>Une installation de Coppermine en ordre de marche dans laquelle <b>la function d'upload par web fonctionne convenablement.</b></li>\n</ul>\n<h2>Comment installer le client</h2>\n<ul>\n<li>Faites un clic droit sur
EOT;

$lang_xp_publish_select = <<<EOT
Choisissez &quot;Enregistrer la cible sous...&quot;. Enregistrez le fichier sur votre disque dur. En enregistrant le fichier, vérifiez que le nom proposé est <b>cpg_###.reg</b> (le ### représente un nombre basé sur l'heure). Si ce n'est pas le cas, modifiez-le (l'élément le plus important est le .reg à la fin). Quand c'est fait, double-cliquez sur le fichier pour enregistrer les informations de Coppermine dans votre Assistant de Publication Web.</li>\n</ul>\n
EOT;

$lang_xp_publish_testing = <<<EOT
\n<h2>Comment tester</h2>\n<ul>\n<li>Dans l'Explorateur Windows, sélectionnez quelques fichiers et cliquez <p>Publie les éléments sélectionnés sur le web</b> dans le panneau de gauche.</li>\n<li>Confirmez votre sélection de fichiers. Cliquez sur <b>Suivant</b>.</li><li>Dans la liste de services qui apparaît, sélectionnez celui de votre galerie (il a le même nom que votre galerie). Si le service n'apparaît pas dans la liste, vérifiez que vous avez installé <b>cpg_pub_wizard.reg</b> comme décrit plus haut.</li>\n<li>Introduisez vos informations de connexion</li>\n<li>Choisissez l'album dans lequel vous voulez placer vos photos ou créez-en un nouveau.</li>\n<li>Cliquez sur <b>Suivant</b>. L'upload de vos photos commence.</li>\n<li>Une fois que c'est fini, vérifiez dans votre galerie si les fichiers ont été correctement ajoutés.</li>\n</ul>\n
EOT;

$lang_xp_publish_notes = <<<EOT
<h2>Notes :</h2>\n<ul>\n<li>Dès que l'upload a démarré, l'assistant ne peut pas afficher les messages d'erreur retournés par Coppermine. Il est donc impossible de savoir si l'upload a réussi ou échoué sans vérifier dans la galerie.</li>\n<li>Si l'upload échoue, activez le &quot;Mode de débogage&quot; dans la page de configuration de Coppermine, essayez avec une seule photo et vérifiez les messages d'erreur dans le fichier
EOT;

$lang_xp_publish_flood = <<<EOT
qui se trouve dans le répertoire de Coppermine sur votre serveur.</li>\n<li>Pour éviter que la galerié ne soit <i>inondée</i> par des photos envoyées avec l'assistant, seuls les <b>administrateurs de la galerie</b> et les <b>utilisateurs qui peuvent avoir leurs propres albums</b> peuvent utiliser cette fonction.</li>\n</ul>\n
EOT;



$lang_xp_publish_php = array(
  'title' => 'Coppermine - Assistant de Publication Web XP', //cpg1.4
  'welcome' => 'Bienvenue <b>%s</b>,', //cpg1.4
  'need_login' => 'Vous devez vous identifer dans la galerie depuis votre navigateur avant de pouvoir utiliser cet assistant.<p/><p>Lorsque vous vous identifiez, n\'oubliez pas de sélectionner l\'option <b>se rappeler de moi</b> si elle est présente.', //cpg1.4
  'no_alb' => 'Désolé, mais il n\'y a aucun album où vous pouvez ulpoader des images avec cet assistant.', //cpg1.4
  'upload' => 'Uploadez vos images dans un album existant', //cpg1.4
  'create_new' => 'Créez un nouvel album pour vos images', //cpg1.4
  'album' => 'Album', //cpg1.4
  'category' => 'Categorie', //cpg1.4
  'new_alb_created' => 'votre nouvel album &quot;<b>%s</b>&quot; a ét crée.', //cpg1.4
  'continue' => 'Cliquez sur &quot;Suivant&quot; pour commencer à uploader vos images', //cpg1.4
  'link' => 'ce lien', //cpg1.4
);
}
?>
