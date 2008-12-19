<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2007 Coppermine Dev Team
  v1.1 originally written by Gregory DEMAR

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation; either version 2 of the License, or
  (at your option) any later version.
  ********************************************
  Coppermine version: 1.5.0
  $Source: /cvsroot/coppermine/devel/lang/english.php,v $
  $Revision: $
  $LastChangedBy: Frantz $
  $Date: 2007-09-15 20:00:01 +0200 (Mer, 11 Juillet 2007) $
**********************************************/

if (!defined('IN_COPPERMINE')) { die('Not in Coppermine...');}

// info about translators and translated language
$lang_translation_info = array(
  'lang_name_english' => 'French_FR',
  'lang_name_native' => 'Français_FR',
  'lang_country_code' => 'fr',
  'trans_name'=> 'Frantz and PYAP',
  'trans_email' => '',
  'trans_website' => 'http://coppermine-gallery.net/forum/index.php?board=38.0',
  'trans_date' => '2007-07-11',
);
$lang_charset = 'UTF-8';
$lang_text_dir = 'ltr'; // ('ltr' pour de gauche à droite, 'rtl' pour de droite à gauche)
// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('Octets', 'Ko', 'Mo');
// Day of weeks and months
$lang_day_of_week = array('Dim', 'Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam');
$lang_month = array('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre');
// Some common strings
$lang_yes = 'Oui';
$lang_no  = 'Non';
$lang_back = 'Retour';
$lang_continue = 'CONTINUEZ';
$lang_info = 'Information';
$lang_error = 'Erreur';
$lang_check_uncheck_all = 'Tout sélectionner/désélectionner';
// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$album_date_fmt =  '%e %B %Y';
$lastcom_date_fmt =  '%d/%m/%y à %H:%M';
$lastup_date_fmt = '%e %B %Y';
$register_date_fmt = '%e %B %Y';
$lasthit_date_fmt = ' %a %e %B %Y à %H:%M';
$comment_date_fmt =  '%a %e %B %Y à %H:%M';
$log_date_fmt = '%B %d, %Y at %I:%M %p';
$scientific_date_fmt = '%d-%m-%Y %H:%M:%S'; // cpg1.5.x
// For the word censor
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*', 'merde', 'putain', 'enculé*', 'salope', 'bite', 'cul', 'pute', 'pénis', 'clito', 'couille', 'pétasse', 'connard', 'salaud');
$lang_meta_album_names = array(
  'random' => 'Photos Aléatoires',
  'lastup' => 'Derniers Ajouts',
  'lastalb'=> 'Derniers Albums mis à jour',
  'lastcom' => 'Derniers Commentaires',
  'mostcom' => 'Les plus commentées', //cpg1.5
  'topn' => 'Les Plus Populaires',
  'toprated' => 'Les Mieux Notées',
  'lasthits' => 'Les Dernières images Vues',
  'search' => 'Résultats de la Recherche',
  'album_search' => 'Résultat de la recherche dans les albums',
  'category_search' => 'Category search results',
  'favpics'=> 'Photos Préférées', //cpg1.4
  'datebrowse' => 'Navigation par date', //cpg1.5
);
$lang_errors = array(
  'access_denied' => 'Vous n\'avez pas la permission d\'accéder à cette page.',
  'perm_denied' => 'Vous n\'avez pas la permission d\'effectuer cette opération.',
  'param_missing' => 'Script appelé sans les paramètres nécessaires.',
  'non_exist_ap' => 'L\'album/la photo demandé(e) n\'existe pas!',
  'quota_exceeded' => 'Quota disque dépassé.', //cpg1.5
  'quota_exceeded_details' => 'Vous avez un quota d\espace de [quota]K, vos fichiers utilisent actuellement [space]K, l\ajout de ces fichiers vous fera dépasser ce quota.', //cpg1.5
  'gd_file_type_err' => 'L\'utilisation de &quot;GD Image Library&quot; ne vous permet d\'utiliser que de images de type JPEG et PNG.',
  'invalid_image' => 'L\'image que vous avez uploadée est corrompue ou ne peut pas être prise en charge par GD library',
  'resize_failed' => 'Impossible de créer la vignette ou l\'image réduite.',
  'no_img_to_display' => 'Pas d\'image à afficher',
  'non_exist_cat' => 'La catégorie sélectionnée n\'existe pas',
  'orphan_cat' => 'Une catégorie a un parent inexistant, utilisez le gestionnaire de catégories afin de remédier au problème.',
  'directory_ro' => 'Le répertoire \'%s\' n\'est pas inscriptible : les images ne peuvent être supprimées.',
  'non_exist_comment' => 'Le commentaire sélectionné n\'existe pas.',
  'pic_in_invalid_album' => 'L\'image se trouve dans un album qui n\'existe pas (%s)!?',
  'banned' => 'Vous êtes pour l\'instant banni de ce site.',
  'not_with_udb' => 'Cette fonction est désactivée dans Coppermine parce que la galerie est intégrée à un Forum. Soit l\'action que vous essayez d\'effectuer n\'est pas disponible dans cette configuration, soit vous devez l\'effectuer depuis le Forum auquel vous avez intégré la galerie.',
  'offline_title' => 'Hors Ligne', //cpg1.3.0
  'offline_text' => 'Cette galerie n\'est pas en ligne actuellement. Revenez la voir très bientôt&nbsp;!', //cpg1.3.0
  'ecards_empty' => 'Il n\'y a pas encore de logs enregistrés. Vérifiez que vous avez activé l\'option correspondante dans la configuration de Coppermine.', //cpg1.3.0
  'action_failed' => 'Erreur&nbsp;! Coppermine ne peut pas traiter cette requête.', //cpg1.3.0
  'no_zip' => 'Les librairies nécessaires au traitement des fichiers ZIP ne sont pas installées. Contactez l\'Administrateur du site.', //cpg1.3.0
  'zip_type' => 'Vous n\'avez pas l\'autorisation de télécharger des fichiers ZIP.', //cpg1.3.0
  'database_query' => 'Il y eu une erreur lors de l\'exécution de la requête', //cpg1.4
  'non_exist_comment' => 'Le commentaire choisi n\'existe pas',
  'page_removed_redirector' => 'Vous essayez d\'accéder à une page qui a été enlevée du pack de coppermine<br />Redirection...', //cpg1.5
  'captcha_error' => 'Le code de confirmation ne correspond pas', //cpg1.5
  'no_data' => 'Aucune donnée renvoyée', // cpg1.5
  'no_connection' => 'Aucune connection établie avec %s.', // cpg1.5
  'login_needed' => 'Vous devez vous %senregistrer%s/%sidentifier%s pour accéder à cette page', // cpg1.5
  'error' => 'Erreur', // cpg1.5
);

$lang_bbcode_help_title = 'Aide bbcode'; //cpg1.4
$lang_bbcode_help = 'Vous pouvez ajouter des liens cliquables et formater le texte de ce champ en utilisant les balises bbcode: <li>[b]Gras[/b] =&gt; <b>Gras</b></li><li>[i]Italique[/i] =&gt; <i>Italique</i></li><li>[url=http://votresite.com/]Texte du lien[/url] =&gt; <a href="http://votresite.com">Url Text</a></li><li>[email]utilisateur@domaine.com[/email] =&gt; <a href="mailto:utilisateur@domaine.com">utilisateur@domaine.com</a></li><li>[color=red]Votre texte[/color] =&gt; <span style="color:red">Votre texte</span></li><li>[img]http://coppermine.sf.net/demo/images/red.gif[/img] => <img src="../images/red.gif" border="0" alt="" /></li>';
$lang_common = array(
  'yes' => 'Oui', // cpg1.5.x
  'no' => 'Non', // cpg1.5.x
  'back' => 'Retour', // cpg1.5.x
  'continue' => 'Continuez', // cpg1.5.x
  'information' => 'Information', // cpg1.5.x
  'error' => 'Erreur', // cpg1.5.x
  'check_uncheck_all' => 'Sélectionnez/Désélectionnez tout', // cpg1.5.x
  'confirm' => 'Confirmation', // cpg1.5.x
  'captcha_help_title' => 'Confirmation visuelle (Captcha)', // cpg1.5.x
  'captcha_help' => 'Pour éviter le Spam, vous devez confirmer que vous êtes un réel être humain et pas simplement un robot (script) en entrant le texte affiché.<br />La casse n\'a pas d\'importance, vous pouvez entrer le texte en minuscules.', // cpg1.5.x
  'title' => 'Titre', // cpg1.5.x
  'caption' => 'Légende', // cpg1.5.x
  'keywords' => 'Mots clef', // cpg1.5.x
  'keywords_insert1' => 'Mots clef (séparés par un espace)', // cpg1.5.x
  'keywords_insert2' => 'Insérer depuis une liste', // cpg1.5.x
  'owner_name' => 'Nom de Propriétaire', // cpg1.5.x
  'filename' => 'Nom du fichier', // cpg1.5.x
  'filesize' => 'Taille du fichier', // cpg1.5.x
  'album' => 'Album', // cpg1.5.x
  'file' => 'Fichier', // cpg1.5.x
  'date' => 'Date', // cpg1.5.x
  'help' => 'Aide', // cpg1.5.x
  'close' => 'Fermer', // cpg1.5.x
  'go' => 'Envoyer', // cpg1.5.x
  'javascript_needed' => 'Ces pages nécessitent JavaScript. Veuillez l\'activer dans votre navigateur.', // cpg1.5.x
  'move_up' => 'Vers le haut', // cpg1.5
  'move_down' => 'Vers le bas', // cpg1.5
  'move_top' => 'En premier', // cpg1.5
  'move_bottom' => 'En dernier', // cpg1.5
  'delete' => 'Effacer', // cpg1.5
  'edit' => 'Modifier', // cpg1.5
  'username_if_blank' => 'M. X', // cpg1.5
  'albums_no_category' => 'Albums sans catégorie', // cpg1.5
  'personal_albums' => '* Album personnel', // cpg1.5
  'select_album' => 'Album délectionné', // cpg1.5
  'ok' => 'OK', // cpg1.5
);

// ----------------------- //
// File theme.php
// ----------------------- //
$lang_main_menu = array(
  'home_title' => 'Allez à la page d\'accueil',
  'home_lnk' => 'Accueil',
  'alb_list_title' => 'Allez à la liste des albums',
  'alb_list_lnk' => 'Albums',
  'my_gal_title' => 'Allez dans ma galerie personnelle',
  'my_gal_lnk' => 'Ma galerie',
  'my_prof_title' => 'Allez à mon profil personnel', //cpg1.4
  'my_prof_lnk' => 'Mon profil',
  'adm_mode_title' => 'Passez en mode administrateur',
  'adm_mode_lnk' => 'Mode administrateur',
  'usr_mode_title' => 'Passez au mode utilisateur',
  'usr_mode_lnk' => 'Mode utilisateur',
  'upload_pic_title' => 'Uploadez une image dans un Album',
  'upload_pic_lnk' => 'Uploadez une image',
  'register_title' => 'Créer un Compte',
  'register_lnk' => 'Inscription',
  'login_title' => 'Connectez-vous', //cpg1.4
  'login_lnk' => 'Identifiez-vous',
  'logout_title' => 'Déconnectez-vous', //cpg1.4
  'logout_lnk' => 'Quittez',
  'lastup_title' => 'Affichez les dernières mises à jour', //cpg1.4
  'lastup_lnk' => 'Derniers ajouts',
  'lastcom_title' => 'Affichez les derniers commentaires', //cpg1.4
  'lastcom_lnk' => 'Derniers commentaires',
  'topn_title' => 'Affichez les dernières visualisations', //cpg1.4
  'topn_lnk' => 'Les Plus Populaires',
  'toprated_title' => 'Affichez les fichiers les mieux notées', //cpg1.4
  'toprated_lnk' => 'Les Mieux Notées',
  'search_title' => 'Recherchez une Galerie', //cpg1.4
  'search_lnk' => 'Recherchez',
  'fav_title' => 'Consulter mes Favoris', //cpg1.4
  'fav_lnk' => 'Mes Favoris',
  'memberlist_title' => 'Affichez la liste des Membres', //cpg1.3.0
  'memberlist_lnk' => 'Liste des Membres', //cpg1.3.0
  'faq_title' => 'FAQ : Questions fréquemment posées à propos de &quot;Coppermine&quot;', //cpg1.3.0
  'faq_lnk' => 'FAQ',
  'browse_by_date_lnk' => 'Par Date', // cpg1.5.x
  'browse_by_date_title' => 'Naviguez par date de téléchargement', // cpg1.5.x
  'contact_title' => 'Entrez en contact avec %s', // cpg1.5.x
  'contact_lnk' => 'Contact', // cpg1.5.x
  'sidebar_title' => 'Ajouter un marque page dans la barre latérale à votre navigateur', // cpg1.5
  'sidebar_lnk' => 'Marque page', // cpg1.5
  'main_menu' => 'Menu principal', // cpg1.5
  'sub_menu' => 'Sous-menu', // cpg1.5
);
$lang_gallery_admin_menu = array(
  'upl_app_title' => 'Validez les nouveaux téléchargements', //cpg1.4
  'upl_app_lnk' => 'Fichiers à valider',
  'admin_title' => 'Allez à la page Configuration', //cpg1.4
  'admin_lnk' => 'Configuration', //cpg1.4
  'albums_title' => 'Allez à la configuration des Albums', //cpg1.4
  'albums_lnk' => 'Albums',
  'categories_title' => 'Allez à la Configuration des Catégories', //cpg1.4
  'categories_lnk' => 'Catégories',
  'users_title' => 'Allez à la Configuration des Utilisateurs', //cpg1.4
  'users_lnk' => 'Utilisateurs',
  'groups_title' => 'Aller à la Configuration des Groupes', //cpg1.4
  'groups_lnk' => 'Groupes',
  'comments_title' => 'Affichez tous les Commentaires', //cpg1.4
  'comments_lnk' => 'Commentaires',
  'searchnew_title' => 'Allez au Téléchargement par Lots (FTP)', //cpg1.4
  'searchnew_lnk' => 'FTP =>',
  'util_title' => 'Allez aux Utilitaires d\'Administration', //cpg1.4
  'util_lnk' => 'Utilitaires',
  'key_title' => 'Allez au Dictionnaire de Mots-Clef', //cpg1.4
  'key_lnk' => 'Dictionnaire de Mot-Clef', //cpg1.4
  'ban_title' => 'Aller aux Utilisateurs Bannis', //cpg1.4
  'ban_lnk' => 'Bannir des utilisateurs ',
  'db_ecard_title' => 'Voir les eCartes', //cpg1.4
  'db_ecard_lnk' => 'eCartes envoyées',
  'pictures_title' => 'Tri des Images', //cpg1.4
  'pictures_lnk' => 'Tri des images', //cpg1.4
  'documentation_lnk' => 'Documentation', //cpg1.4
  'documentation_title' => 'Manuel de Coppermine', //cpg1.4
  'phpinfo_lnk' => 'phpinfo', // cpg1.5.x
  'phpinfo_title' => 'Contient des informations techniques sur votre serveur. Vous pouvez être invité à fournir ces informations lors d\une demande d\'aide.', // cpg1.5.x
  'update_database_lnk' => 'Gestion BDD', // cpg1.5.x
  'update_database_title' => 'Si vous avez remplacé des fichiers Coppermine, ajouté une modification ou mis à jour votre galerie depuis une ancienne version, assurez-vous de mettre à jour votre Base de Données. Cela créera les tables et/ou les valeurs nécessaires à la nouvelle configuration dans votre base de données Coppermine..', // cpg1.5.x
  'view_log_files_lnk' => 'Voir le fichier Log', // cpg1.5.x
  'view_log_files_title' => 'Coppermine peut enregistrer diverses actions effectuées par les Utilisateurs. Vous pouvez consulter ces LOGs si vous avez autoriser ceci dans la Config de Coppermine.', // cpg1.5.x
  'check_versions_lnk' => 'Vérifiez la version actuelle', // cpg1.5.x
  'check_versions_title' => 'Vérifiez la version de vos fichiers pour voir si vous avez remplacé tous les dossiers après une mise à jour, ou si des fichiers source de Coppermine ont été mis à jour après la mise à disposition de votre version.', // cpg1.5.x
  'bridgemgr_lnk' => 'Bridge', // cpg1.5.x
  'bridgemgr_title' => 'Activer/Désactivez l\'intégration (Bridge) de Coppermine avec une autre application (par exemple : Votre Forum PhpBB, SMF ou autres).', // cpg1.5.x
  'pluginmgr_lnk' => 'Gestion des Plugins', // cpg1.5.x
  'pluginmgr_title' => 'Gestion des Plugins', // cpg1.5.x
  'overall_stats_lnk' => 'Statistiques Globales', // cpg1.5.x
  'overall_stats_title' => 'Visualisez les statistiques globales d’accès à votre Galerie par navigateur et logiciel d\'exploitation (si les options correspondantes sont activées dans la configuration).', // cpg1.5.x
  'keywordmgr_lnk' => 'Mots-Clef', // cpg1.5.x
  'keywordmgr_title' => 'Gérer les Mots-Clef (si l\'option correspondante est cochée dans la configuration).', // cpg1.5.x
  'exifmgr_lnk' => 'Gestion des EXIF', // cpg1.5.x
  'exifmgr_title' => 'Managez l\'affichage des données EXIF (si l\'option correspondante est cochée dans la configuration).', // cpg1.5.x
  'shownews_lnk' => 'Montrez les News', // cpg1.5.x
  'shownews_title' => 'Affichez le News de coppermine-gallery.net', // cpg1.5.x
  'export_lnk' => 'Export', // cpg1.5
  'export_title' => 'Exporter des fichiers et des albums vers votre disque dur', // cpg1.5
  'admin_menu' => 'Menu Administrateur', // cpg1.5
);
$lang_user_admin_menu = array(
  'albmgr_title' => 'Créer et classer mes Albums', //cpg1.4
  'albmgr_lnk' => 'Créer / classer mes Albums',
  'modifyalb_title' => 'Aller à la modification de mes Albums',  //cpg1.4
  'modifyalb_lnk' => 'Modifier mes Albums',
  'my_prof_title' => 'Aller à mon Profil Personnel', //cpg1.4
  'my_prof_lnk' => 'Mon Profil',
);
$lang_cat_list = array(
  'category' => 'Catégories',
  'albums' => 'Albums',
  'pictures' => 'Fichiers',
);
$lang_album_list = array(
  'album_on_page' => '%d albums sur %d page(s)',
);
$lang_thumb_view = array(
 'date' => 'DATE',
  //Sort by filename and title
  'name' => 'NOM DU FICHIER',
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
  'pic_on_page' => '%d Photos sur %d page(s)',
  'user_on_page' => '%d Utilisateurs sur %d page(s)',
  'enter_alb_pass' => 'Entrer un Mot de Passe pour l\'Album', //cpg1.4
  'invalid_pass' => 'Mot de passe invalide', //cpg1.4
  'pass' => 'Mot de Passe', //cpg1.4
  'submit' => 'Soumettre', //cpg1.4
  'zipdownload_copyright' => 'Merci de réspecter les Copyrights - N\'utilisez les fichiers que vous téléchargez qu\'en accord avec leur propriétaire', // cpg1.5
  'zipdownload_username' => 'Cette archive contiens les fichiers compressés depuis les favoris de %s', // cpg1.5
);

$lang_img_nav_bar = array(
  'thumb_title' => 'Retournez à la page des vignettes',
  'pic_info_title' => 'Affichez/Cachez les informations sur l\'image',
  'slideshow_title' => 'Diaporama',
  'ecard_title' => 'Envoyez cette image en tant que Carte Electronique',
  'ecard_disabled' => 'Les Cartes Electroniques sont désactivées',
  'ecard_disabled_msg' => 'Vous n\\\'avez pas l\\\'autorisation d\\\'envoyer des cartes',//js-alert
  'prev_title' => '<< Voir l\'image précédente',
  'next_title' => 'Voir l\'image suivante >>',
  'pic_pos' => 'PHOTO %s/%s',
  'report_title' => 'Signalez ce fichier à l\'Administrateur', //cpg1.4
  'go_album_end' => 'Allez à la fin', //cpg1.4
  'go_album_start' => 'Retournez au début', //cpg1.4
  'go_back_x_items' => 'avancez de %s items', //cpg1.4
  'go_forward_x_items' => 'reculez de %s items', //cpg1.4
);
$lang_rate_pic = array(
  'rate_this_pic' => 'Notez cette image ',
  'no_votes' => '(Pas encore de note)',
  'rating' => '(note actuelle : %s / 5 pour %s votes)',
  'rubbish' => 'Très mauvais',
  'poor' => 'Mauvais',
  'fair' => 'Moyen',
  'good' => 'Bon',
  'excellent' => 'Excellent',
  'great' => 'Superbe',
  'js_warning' => 'Javascript doit être actif pour pouvoir voter', // cpg1.5.x
  'already_voted' => 'Vous avez déjà voté pour cette photo.', // cpg1.5
  'forbidden' => 'Vous ne pouvez pas voter pour vos propres fichiers.', // cpg1.5
  'rollover_to_rate' => 'Survolez pour évaluer cette image', // cpg1.5
);

// ----------------------- //



// File include/functions.inc.php
// ----------------------- //
$lang_cpg_die = array(
  INFORMATION => $lang_info,
  ERROR => $lang_error,
  CRITICAL_ERROR => 'Erreur critique',
  'file' => 'Fichier: ',
  'line' => 'Ligne: ',
);
$lang_display_thumbnails = array(
  'dimensions' => 'Dimensions=',
  'date_added' => 'Ajouté le=',
  'unapproved' => 'Non approuvé', // cpg1.5
);
$lang_get_pic_data = array(
  'n_comments' => '%s commentaires',
  'n_views' => 'vu %s fois',
  'n_votes' => '(%s votes)',
);
$lang_cpg_debug_output = array(
  'debug_info' => 'Infos de débogage', //cpg1.3.0
  'select_all' => 'Tout sélectionner', //cpg1.3.0
  'copy_and_paste_instructions' => 'Si vous souhaitez soumettre une demande d\'assistance dans le Forum de support de Coppermine, copier/collez ces informations de débogage dans votre message. Assurez-vous de remplacer tous les mots de passe, même codés, par \'***\' avant de poster votre message.', //cpg1.3.0
  'debug_output_explain' => 'Note: Ceci n\'est qu\'une information, ce qui ne veut pas dire qu\'il y a une erreur dans la galerie.', // cpg1.5
  'phpinfo' => 'Afficher le phpinfo', //cpg1.3.0
  'notices' => 'Remarques', //cpg1.4
  'notices_help_admin' => 'Ces avertissements ne sont affichés sur cette page que parce que vous (en tant qu\admin de la galerie) avez délibérément activé cette fonction dans la configuration de Coppermine. Celà ne veut pas obligatoirement dire qu\'il y a quelque chose qui ne fonctionne pas avec votre galerie. En fait, c\'est une fonction que seuls les personnes ayant une bonne notion en programmation devraient activer pour traquer les bugs. Si ces avertissements vous dérangent et/ou que vous n\'avez aucune idée de ce qu\'ils signifient, désactivez simplement cette focntion dans la configuration.', // cpg1.5
  'notices_help_non_admin' => 'L\'affichage de ces avis a été délibérément activé par l\'administrateur. Celà ne veut pas dire qu\'il y a un problème de votre côté. Vous pouvez ignorer ces avertissements sans craintes.', // cpg1.5
  'show_hide' => 'montrer / cacher', // cpg1.5
);
$lang_language_selection = array(
  'reset_language' => 'Langue par défaut -', //cpg1.3.0
  'choose_language' => 'Choisissez votre langue :', //cpg1.3.0
);
$lang_theme_selection = array(
 'reset_theme' => 'Thème par défaut', //cpg1.3.0
  'choose_theme' => 'Choisissez votre thème', //cpg1.3.0
);
$lang_social_bookmarks = array(
  'bookmark_this_page' => 'Marquez cette page', // js-alert
  'favorite' => 'Ajoutez cette page dans les favoris/marques pages de votre navigateur', // js-alert
  'send_email' => 'Recommander cette page par courriel', // js-alert
  'email_subject' => 'Page Intéressante', // js-alert
  'email_body' => 'Je pense que cette page pourrait vous intérresser', // js-alert
  'favorite_close' => 'Ceci ne fonctionne pas avec votre navigateur.\\\nFermez cette boite de dialiogue et\\\nappuyez sur Ctrl-D pour marque cette page.', // js-alert
);
$lang_version_alert = array(
  'version_alert' => 'Version sans support d\'aide!', //cpg1.4
  'no_stable_version' => 'Vous utilisez Coppermine  %s (%s) qui s\'adresse aux utilisateurs très expérimentés - Cette version n\'offre aucun support d\'aide. Vous pouvez l\'utiliser à vos risques et périls ou télécharger la dernière version stable si vous avez besoin d\'aide!', //cpg1.4
  'gallery_offline' => 'La galerie est actuellement hors ligne et n\est visible que par un administrateur. N\'oubliez pas de la remettre en ligne une fois les travaux de maintenance terminés.', //cpg1.4
  'coppermine_news' => 'Nouvelles de coppermine-gallery.net', //cpg1.5
  'no_iframe' => 'Votre navigateur ne peut pas afficher les cadres incorporés (iframes)', //cpg1.5
  'hide' => 'cacher', //cpg1.5
);
$lang_create_tabs = array(
 'previous' => 'précédent', //cpg1.4
  'next' => 'suivant', //cpg1.4
);

$lang_get_remote_File_by_url = array(
        'no_data_returned' => 'Pas de données retournées avec %s', // cpg1.5
        'curl' => 'CURL', // cpg1.5
        'fsockopen' => 'Socket connection (FSOCKOPEN)', // cpg1.5
        'fopen' => 'fopen', // cpg1.5
        'curl_not_available' => 'Curl n\'est pas disponible sur votre serveur', // cpg1.5
        'error_number' => 'Erreur N°: %s', // cpg1.5
        'error_message' => 'Message d\'erreur: %s', // cpg1.5
);

// ----------------------- //
// File include/plugin_api.inc.php
// ----------------------- //
$lang_plugin_api = array(
  'error_wakeup' => 'Impossible d\'activer le plugin \'%s\'', //cpg1.4
  'error_install' => 'Impossible d\'installer le plugin \'%s\'', //cpg1.4
  'error_uninstall' => 'Impossible de désinstaller le plugin \'%s\'', //cpg1.4
  'error_sleep' => 'Impossible de désinstaller le plugin \'%s\'<br />', //cpg1.5
);

// ----------------------- //
// File include/smilies.inc.php
// ----------------------- //
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

// ----------------------- //
// File albmgr.php
// ----------------------- //
if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
  'title' => 'Gestionnaire d\'Albums', // cpg1.5	
  'alb_need_name' => 'Les Albums doivent avoir un nom&nbsp;!',//js-alert
  'confirm_modifs' => 'Voulez-vous vraiment effectuer ces modifications ?', //js-alert
  'no_change' => 'Vous n\\\'avez effectué aucun changement&nbsp;!',//js-alert
  'new_album' => 'Nouvel Album',
  'delete_album' => 'Effacer l\'Album', // cpg1.5
  'confirm_delete1' => 'Voulez vous vraiment supprimer cet Album ?', //js-alert
  'confirm_delete2' => '\nToutes vos Images et tous les commentaires seront perdus !', //js-alert
  'select_first' => 'Sélectionnez d\\\'abord un Album',//js-alert
  'my_gallery' => '* Ma Galerie *',
  'no_category' => '* Pas de Catégorie *',
  'apply_modifs' => 'Appliquez les modifications',
  'select_category' => 'Sélectionnez une categorie',
  
);

// ----------------------- //
// File banning.php
// ----------------------- //
if (defined('BANNING_PHP')) $lang_banning_php = array(
  'title' => 'Bannir des Utilisateurs', //cpg1.4
  'user_name' => 'Nom d\'Utilisateur', //cpg1.4
  'email_address' => 'Adresse de Courriel', // cpg1.5
  'ip_address' => 'Adresse IP', //cpg1.4
  'expiry' => 'Expire (Un champs vide signifie que le bannissement est indéfini)', //cpg1.4
  'edit_ban' => 'Sauvegardez les changements', //cpg1.4
  'add_new' => 'Ajoutez un Nouveau Bannissement', //cpg1.4
  'add_ban' => 'Ajoutez', //cpg1.4
  'error_user' => 'Utilisateur introuvable', //cpg1.4
  'error_specify' => 'Vous devez spécifier un Nom d\'Utilisateur ou une adresse IP', //cpg1.4
  'error_ban_id' => 'IDentifiant invalide !', //cpg1.4
  'error_admin_ban' => 'Vous ne pouvez pas vous bannir vous même&nbsp; !', //cpg1.4
  'error_server_ban' => 'Vous ne pouvez pas bannir votre propre serveur !', //cpg1.4
  'error_ip_forbidden' => 'Vous ne pouvez pas bannir cette adresse, car elle est non routable&nbsp;!<br />Si vous désirez bannir une IP privée, changez-la dans votre <a href="admin.php">Config</a> (uniquement si Coppermine fonctionne sur un réseau privé).', //cpg1.4
  'lookup_ip' => 'Consulter une adresse IP', //cpg1.4
  'select_date' => 'selectionnez la date', //cpg1.4
 'delete_comments' => 'Effacer les commentaires', // cpg1.5
  'current' => 'actuel', // cpg1.5
  'all' => 'tous', // cpg1.5
  'none' => 'aucun', // cpg1.5
  'view' => 'vue', // cpg1.5
  'existing_bans' => 'Bannis existants', // cpg1.5
);

// ----------------------- //
// File bridgemgr.php
// ----------------------- //
if (defined('BRIDGEMGR_PHP')) $lang_bridgemgr_php = array(
  'title' => 'Assistant de \&quot;Bridge\&quot;',
  'back' => 'Retour',
  'next' => 'Suivant',
  'start_wizard' => 'Démarrez l\'Assistant',
  'finish' => 'Terminez',
  'no_action_needed' => 'Pas d\'action à cette étape. Cliquez sur \'suivant\'pour CONTINUEZ.',
  'reset_to_default' => 'Revenir aux valeurs par défaut',
  'choose_bbs_app' => 'Choisissez une application à Bridger avec Coppermine',
  'support_url' => 'Suivez ce lien pour de l\'aide sur cette application',
  'settings_path' => 'Chemin(s) utilisés par votre Forum',
  'full_Forum_url' => 'URL du Forum',
  'relative_path_of_Forum_from_webroot' => 'Adresse relative de votre Forum',
  'relative_path_to_config_file' => 'Chemin relatif à la page de configuration de votre Forum',
  'cookie_prefix' => 'Préfixe du Cookie',
  'special_settings' => 'paramètres spécifiques de l\'application à intégrer',
  'use_post_based_groups' => 'Utiliser les groupes basés sur le nombre de messages ?',
  'use_post_based_groups_yes' => 'Oui',
  'use_post_based_groups_no' => 'Non',
  'error_title' => 'Vous devez corriger ces erreurs avant de continuer et retournez à la page précédente.',
  'error_specify_bbs' => 'Vous devez spécifier avec quelle application vous voulez bridger Coppermine.',
  'finalize' => 'Activez/Désactivez l\'intégration avec le Forum',
  'finalize_explanation' => 'Jusqu\'à présent, vos réglages ont été inscrit dans la Base de Données, mais l\'intégration avec le Forum n\'a pas été activée. Vous pouvez activer/désactiver cette intégration quand vous le voulez. Soyez certain de vous souvenir du Nom d\'Utilisateur et du Mot de Passe de votre Compte Administrateur Coppermine (non-bridgé), vous pourriez en avoir besoin plus tard pour faire des modifications. Si quelque chose ne marche pas, allez sur %s et désactivez l\'intégration au Forum, en utilisant votre Compte Administrateur &quot;non-bridgé&quot; (habituellement, c\'est celui que vous avez défini lors de l\'installation de Coppermine).',
  'your_bridge_settings' => 'Configuration de votre Bridge',
  'title_enable' => 'Active l\'intégration/le bridge avec %s',
  'bridge_enable_yes' => 'Activé',
  'bridge_enable_no' => 'Désactivé',
  'error_must_not_be_empty' => 'ne peut pas être vide',
  'error_either_be' => 'doit être %s ou %s',
  'error_folder_not_exist' => '%s n\'existe pas. Corrigez la valeur entrée pour %s',
  'error_cookie_not_readible' => 'Coppermine ne peut pas lire le cookie nommé %s. Corrigez la valeur que vous avez entré pour %s, ou allez dans le Panneau d\'Administration de votre Forum et vérifiez que le chemin d\'accès au cookie est lisible par Coppermine.',
  'error_mandatory_field_empty' => 'Vous ne pouvez pas laisser le champ %s vide -Entrez la bonne valeur.',
  'error_no_trailing_slash' => 'Le champ %s ne doit pas commencer par le signe \'/\'.',
  'error_trailing_slash' => 'Le champ %s doit commencer par le signe \'/\'.',
  'error_prefix_and_table' => '%s et ',
  'recovery_title' => 'Gestionnaire de Bridge : Récupération d\'URGENCE',
  'recovery_explanation' => 'Si vous venez ici pour gérer l\'intégration de votre Forum avec votre Galerie Coppermine, Vous devez d\'abord vous identifier en tant qu\'Administrateur. Si vous ne parvenez pas à vous identifier parce que l\'intégration de votre Forum ne fonctionne pas comme prévu, vous pouvez désactiver l\'intégration avec votre Forum depuis cette page. Entrer malgré tout votre Identifiant et votre Mot de Passe ne va pas vous permettre de vous identifier, celà va seulement désactiver le brige avec votre Forum. Pour plus de détails, reportez vous à la Documentation de Coppermine.',
  'username' => 'Nom d\'Utilisateur',
  'password' => 'Mot de Passe',
  'disable_submit' => 'Soumettre',
  'recovery_success_title' => 'Autorisation accordée',
  'recovery_success_content' => 'Vous avez désactivé avec succès le Bridge avec votre Forum. Coppermine fonctionne maintenant de manière autonome.',
  'recovery_success_advice_login' => 'S\'identifier comme Administrateur pour éditer la Configuration de votre Bridge et/ou activer l\'intégration avec votre Forum à nouveau.',
  'goto_login' => 'Allez à la page d\'Identification',
  'goto_bridgemgr' => 'Aller au Gestionnaire de Bridge',
  'recovery_failure_title' => 'Autorisation refusée',
  'recovery_failure_content' => 'Vous avez soumis de mauvaises données. Vous devez entrer les données de votre Compte Administrateur pour la version autonome de Coppermine (habituellement le compte créé lors de l\'installation de Coppermine).',
  'try_again' => 'Réessayez',
  'recovery_wait_title' => 'Le temps d\'attente ne s\'est pas écoulé',
  'recovery_wait_content' => 'Pour des raisons de sécurité, le script n\'autorise pas plusieurs échecs de connexion rapprochés dans le temps. Veuillez patientez avant de réessayer de vous identifier.',
  'wait' => 'Patientez',
  'browse' => 'Parcourez',
 
);

// ----------------------- //
// File calendar.php
// ----------------------- //
if (defined('CALENDAR_PHP')) $lang_calendar_php = array(
  'title' => 'Calendrier',
  'clear_date' => 'Effacez la date',
  'files' => 'fichiers', // cpg1.5
);

// ----------------------- //
// File catmgr.php
// ----------------------- //
if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
  'miss_param' => 'Les paramètres requis pour l\'operation \'%s\' sont manquants&nbsp;!',
  'unknown_cat' => 'La catégorie sélectionnée n\'existe pas dans la Base de Données',
  'usergal_cat_ro' => 'La Galerie des Utilisateurs ne peut pas être supprimée!',
  'manage_cat' => 'Gérer les Catégories',
  'confirm_delete' => 'Voulez vous vraiment SUPPRIMER cette Catégorie ?',//js-alert
  'category' => 'Catégorie',
  'operations' => 'Opérations',
  'move_into' => 'Déplacez dans',
  'update_create' => 'Mettez à jour / créez la Catégorie',
  'parent_cat' => 'Catégorie parente',
  'cat_title' => 'Titre de la Catégorie',
  'cat_thumb' => 'Vignette de la Catégorie', //cpg1.3.0
  'cat_desc' => 'Description de la Catégorie',
  'categories_alpha_sort' => 'Classement des Catégories par ordre alphabétique (au lieu du classement par ajout)', //cpg1.4
  'save_cfg' => 'Sauvegarder la Configuration',
  'no_category' => '* Pas de Catégorie *', // cpg1.5
 'group_create_alb' => 'Groupe(s) autorisé(s) à créer des albums dans cette catégorie', // cpg1.5
);

// ------------------------------------------------------------------------- //
// File contact.php
// ------------------------------------------------------------------------- //

if (defined('CONTACT_PHP')) $lang_contact_php = array(
  'title' => 'Contact', // cpg1.5
  'your_name' => 'Votre Nom', // cpg1.5
  'your_email' => 'Votre adresse couriel', // cpg1.5
  'subject' => 'Objet', // cpg1.5
  'your_message' => 'Votre message', // cpg1.5
  'name_field_mandatory' => 'Veuillez entrez votre nom', // cpg1.5 //js-alert
  'name_field_invalid' => 'Veuillez entrer votre nom', // cpg1.5 //js-alert
  'email_field_mandatory' => 'Veuillez entrer votre adrese courriel', // cpg1.5 //js-alert
  'email_field_invalid' => 'Veuillez entre une adresse courriel valide', // cpg1.5 //js-alert
  'subject_field_mandatory' => 'Veuillez entrer un objet précis', // cpg1.5 //js-alert
  'message_field_mandatory' => 'Veuillez entrer votre message', // cpg1.5 //js-alert
  'confirmation' => 'Confirmation', // cpg1.5
  'email_headline' => 'Le %s, ce courriel a été envoyé à %s en utilisant le formulaire de contact depuis l\'adresse IP %s', // cpg1.5
  'registered_user' => 'Utilisateur enregistré', // cpg1.5
  'guest' => 'Visiteur', // cpg1.5
  'unknown' => 'inconnu', // cpg1.5
  'user_info' => 'Le %s appelé %s avec l\'adresse de courriel %s écrit:', // cpg1.5
  'failed_sending_email' => 'Impossible d\'envoyer le courriel. Essayez à nouveau.', //cpg1.5
  'email_sent' => 'Votre courriel a été envoyé.', //cpg1.5
);

// ----------------------- //
// File admin.php
// ----------------------- //
if (defined('ADMIN_PHP')) $lang_admin_php = array(
  'title' => 'Configuration de la galerie', //cpg1.4
  'general_settings' => 'Paramètres généraux', // cpg1.5
  'language_charset_settings' => 'Paramétres de la Langue &amp; Jeu de caractères', // cpg1.5
  'themes_settings' => 'Paramétres des themes', // cpg1.5
  'album_list_view' => 'Affichage de la liste des Albums', // cpg1.5
  'thumbnail_view' => 'Affichage des vignettes', // cpg1.5
  'image_view' => 'Affichage des Images', // cpg1.5
  'comment_settings' => 'Paramétres des commentaires', // cpg1.5
  'thumbnail_settings' => 'Paramétres des vignettes', // cpg1.5
  'file_settings' => 'Paramétres des fichiers', // cpg1.5
  'image_watermarking' => 'Filigrane d\'Images', // cpg1.5
  'registration' => 'Enregistrement', // cpg1.5
  'user_settings' => 'Paramétres des utilisateurs', // cpg1.5
  'custom_fields_user_profile' => 'Champs personnalisés pour le profil utilisateur (laisser vide si inutilisés).Utilisez le profil 6 pour les longs textes, comme les biographies par exemple.', // cpg1.5
  'custom_fields_image_description' => 'Champs personnalisés pour la description d\'images (laisser vide si inutilisés)', // cpg1.5
  'cookie_settings' => 'Paramétres des Cookies', // cpg1.5
  'email_settings' => 'Paramétres des courriels  (habituellement il n\'est pas necessaire de faire des modifications; laissez tous les champs vide si vous n\'êtes pas sur)', // cpg1.5
  'logging_stats' => 'Logging et statistiques', // cpg1.5
  'maintenance_settings' => 'Paramétres de maintenance', // cpg1.5
  'manage_exif' => 'Administrez l\'affichage des exifs', //cpg1.4
  'manage_plugins' => 'Administrez les plugins', //cpg1.4
  'manage_keyword' => 'Administrez les Mot-Clefs', //cpg1.4
  'restore_cfg' => 'Restaurez les paramètres d\'origine',
  'restore_cfg_confirm' => 'Voullez vous réellement restaurer tous les paramétres de la configuration avec les valeurs par defaut? Cette action ne peut pas être annulée!', // cpg1.5 //js-alert
  'save_cfg' => 'Sauvegardez la nouvelle Configuration',
  'notes' => 'Notes',
  'info' => 'Information',
  'upd_success' => 'La Configuration de Coppermine a été mise à jour',
  'restore_success' => 'La Configuration d\'origine de Coppermine a été restaurée',
  'name_a' => 'Ascendant par Nom',
  'name_d' => 'Descendantpar Nom',
  'title_a' => 'Ascendant par Titre',
  'title_d' => 'Descendant par Titre',
  'date_a' => 'Ascendant par Date',
  'date_d' => 'Descendant par Date',
  'pos_a' => 'Ascendant par Ajout', //cpg1.4
  'pos_d' => 'Descendant par Ajout', //cpg1.4
  'th_any' => 'Aspect MAX',
  'th_ht' => 'Hauteur',
  'th_wd' => 'Largeur',
  'th_ex' => 'Exact', // thumb cropping
  'label' => 'Libellé', //cpg1.3.0
  'item' => 'Liste', //cpg1.3.0
  'debug_everyone' => 'Tout le monde', //cpg1.3.0
  'debug_admin' => 'Administrateurs uniquement', //cpg1.3.0
  'no_logs'=> 'Désactivé', //cpg1.4
  'log_normal'=> 'Normal', //cpg1.4
  'log_all' => 'Tout', //cpg1.4
  'view_logs' => 'Voir les Logs', //cpg1.4
  'click_expand' => 'Cliquer sur un nom de Section pour afficher', //cpg1.4
  'click_collapse' => 'Cliquez sur un nom de section pour réduire', // cpg1.5
  'expand_all' => 'Tout afficher', //cpg1.4
  'notice1' => '(*) Cette Configuration ne doit pas être changée si vous avez déjà des fichiers dans votre Base de Données.', //cpg1.4 - (relocated)
  'notice2' => '(**) Si vous changez cette Configuration, seuls les nouveaux fichiers ajoutés seront concernés, il est donc conseillé de ne pas la modifier si vous avez déjà des fichiers. Vous pouvez cependant appliquer les modifications aux fichiers existant à l\'aide des &quot;<a href="util.php">Outils d\'Administration</a> (redimensionner les images)&quot; depuis le Menu d\'Administration.', //cpg1.4 - (relocated)
  'notice3' => '(***) Tous les Logs sont écrits en Anglais.', //cpg1.4 - (relocated)
  'bbs_disabled' => 'Fonction désactivé si vous utilisez l\'intégration BB', //cpg1.4
  'auto_resize_everyone' => 'Tous', //cpg1.4
  'auto_resize_user' => 'Utilisateur seulement', //cpg1.4
  'ascending' => 'ascendant', //cpg1.4
  'descending' => 'descendant', //cpg1.4
  'collapse_all' => 'Réduire tout', // cpg1.5
  'separate_page' => 'sur une page séparée', // cpg1.5
  'inline' => 'en ligne', // cpg1.5
  'guests_only' => 'Visiteurs uniquement', // cpg1.5
  'wm_bottomright' => 'Bas droite', // cpg1.5
  'wm_bottomleft' => 'Bas gauche', // cpg1.5
  'wm_topleft' => 'Haut gauche', // cpg1.5
  'wm_topright' => 'Haut droit', // cpg1.5
  'wm_center' => 'Centre', // cpg1.5
  'wm_both' => 'Les deux', // cpg1.5
  'wm_original' => 'Original', // cpg1.5
  'wm_resized' => 'Re-dimensionné', // cpg1.5
  'gallery_name' =>   'Nom de la Galerie', // cpg1.5
  'gallery_description' =>   'Description de la galerie', // cpg1.5
  'gallery_admin_email' =>   'Adresse courriel de l\'administrateur', // cpg1.5
  'ecards_more_pic_target' =>   'URL du répertoire de votre galerie coppermine', // cpg1.5
  'ecards_more_pic_target_detail' =>   '(avec un slash à la fin, pas \'index.php\' ou similaire à la fin)', // cpg1.5
  'home_target' =>   'URL de votre page d\'accueil', // cpg1.5
  'enable_zipdownload' =>   'Autorisez le téléchargement ZIP de vos photos dans les Favoris', // cpg1.5
  'enable_zipdownload_no_textfile' => 'Uniquement les favoris', // cpg1.5
  'enable_zipdownload_additional_textfile' => 'Favoris et fichier LISEZ_MOI', // cpg1.5
  'time_offset' =>   'Différence d\'heure par rapport au GMT', // cpg1.5
  'time_offset_detail' =>   '(il est actuellement : ' . localised_date(-1, $comment_date_fmt) . ')', // cpg1.5
  'enable_help' =>   'Activez les icônes d\'aide (Aide en anglais uniquement)', // cpg1.5
  'enable_help_description' => 'Aide partiellement disponible uniquement en anglais', // cpg1.5
  'clickable_keyword_search' =>   'Activez les mots cliquables lors d\'une recherche', // cpg1.5
  'enable_plugins' =>   'Activez les plugins', // cpg1.5
  'ban_private_ip' =>   'Autorisez le bannissement d\'adresse IP non routable (privé)', // cpg1.5
  'browse_batch_add' =>   'Interface de téléchargement par lot', // cpg1.5
  'display_thumbs_batch_add' =>   'Afficher les vignettes de prévisualisation dans l\interface de téléchargement par lots', // cpg1.5
  'lang' =>   'Langue', // cpg1.5
  'language_fallback' =>   'Remplacez les expressions non trouvées par l\'anglais ?', // cpg1.5
  'charset' =>   'Jeu de caractères', // cpg1.5
  'language_list' =>   'Affichez la liste des langues', // cpg1.5
  'language_flags' =>   'Affichez les drapeaux des langues', // cpg1.5
  'language_reset' =>   'Affichez &quot;reset&quot; dans la sélection des langues', // cpg1.5
  // 'previous_next_tab' =>   'Display previous/next on tabbed pages', // cpg1.5
  'theme' =>   'Thème', // cpg1.5
  'theme_list' =>   'Affichez la liste des thèmes', // cpg1.5
  'theme_reset' =>   'Affichez &quot;reset&quot; dans la sélection des thèmes', // cpg1.5
  'custom_lnk_name' =>   'Nom du lien du menu personnalisé', // cpg1.5
  'custom_lnk_url' =>   'URL du menu personnalisé', // cpg1.5
  'enable_menu_icons' => 'Activer les icones de menu', // cpg1.5
  'show_bbcode_help' =>   'Affichez l\'aide pour le bbcode', // cpg1.5
  'vanity_block' =>   'Affichez les boutons indiquant le respect des standards XHTML et CSS pour les thèmes conformes', // cpg1.5
  'display_social_bookmarks' => 'Afficher les icônes des signets sociaux', // cpg1.5
  'highlight_multiple' => 'Pour sélectionner plusieurs lignes, maintenez la touce [Ctrl] appuyée', // cpg1.5
  'custom_header_path' =>   'Chemin pour inclure un en-tête de page personnalisé', // cpg1.5
  'custom_footer_path' =>   'Chemin pour inclure un pied de page personnalisé', // cpg1.5
  'browse_by_date' =>   'Activez la navigation par date', // cpg1.5
  'display_redirection_page' =>   'Affichez les pages de redirection', // cpg1.5
  'display_xp_publish_link' => 'Proposez l\'utilisation de XP Publisher en affichant un lien sur la page de téléchargement', // cpg1.5
  'main_table_width' =>   'Largeur du tableau principal', // cpg1.5
  'pixels_or_percent' =>   '(pixels ou %)', // cpg1.5
  'subcat_level' =>   'Nombre de niveaux de Catégories à afficher', // cpg1.5
  'albums_per_page' =>   'Nombre d\'Albums à afficher', // cpg1.5
  'album_list_cols' =>   'Nombre de colonnes pour la liste des Albums', // cpg1.5
  'alb_list_thumb_size' =>   'Taille des Vignettes en pixels', // cpg1.5
  'main_page_layout' =>   'Le contenu de la Page Principale', // cpg1.5
  'first_level' =>   'Afficher les Vignettes de l\'album du premier niveau avec la catégorie', // cpg1.5
  'categories_alpha_sort' =>   'Classer les Catégories par ordre alphabétique', // cpg1.5
  'categories_alpha_sort_details' =>   '((au lieu du classement personnalisé)', // cpg1.5
  'link_pic_count' =>   'Afficher le nombre de fichiers liés', // cpg1.5
  'thumbcols' =>   'Nombre de colonnes sur la page des Vignettes', // cpg1.5
  'thumbrows' =>   'Nombre de lignes sur la page des Vignettes', // cpg1.5
  'max_tabs' =>   'Nombre maximal d\'Onglets à afficher', // cpg1.5
  'caption_in_thumbview' =>   'Afficher la légende de l\'image (en plus de son titre) sous la vignette', // cpg1.5
  'views_in_thumbview' =>   'Afficher le nombre de \' Vues x Fois \' sous la Vignette', // cpg1.5
  'display_comment_count' =>   'Afficher le nombre de Commentaires sous les Vignettes', // cpg1.5
  'display_uploader' =>   'Afficher le nom de l\'Utilisateur sous la Vignette', // cpg1.5
  // 'display_admin_uploader' =>   'Display name of admin uploaders below the thumbnail', // cpg1.5
  'display_filename' =>   'Afficher le nom du fichier sous la Vignette', // cpg1.5
  'display_thumbnail_rating' =>   'Afficher les votes sous la Vignette', // cpg1.5
  'alb_desc_thumb' =>   'Afficher la Description des Albums', // cpg1.5
  'thumbnail_to_fullsize' =>   'Aller directement de la Vignette à l\'image originale (grande taille)', // cpg1.5
  'default_sort_order' =>   'Classement par défaut des fichiers', // cpg1.5
  'min_votes_for_rating' =>   'Nombre minimun de Vote pour apparaître dans la liste \'les Mieux Notés\'', // cpg1.5
  'picture_table_width' =>   'Largeur de la table pour l\'affichage des fichiers', // cpg1.5
  'display_pic_info' =>   'Information des fichiers visible par défaut', // cpg1.5
  'picinfo_movie_download_link' =>   'Affiche le lien de téléchargement des vidéos dans la partie information du fichier', // cpg1.5
  'max_img_desc_length' =>   'Nombre maximun de caractères pour la description des fichiers', // cpg1.5
  'max_com_wlength' =>   'Nombre maximun de caractères dans un mot', // cpg1.5
  'display_film_strip' =>   'Afficher le Négatif', // cpg1.5
  'max_film_strip_items' =>   'Nombre de Vignettes dans le Négatif', // cpg1.5
  'slideshow_interval' =>   'Intervale du Diaporama en millisecondes', // cpg1.5
  'milliseconds' => 'millisecondes', // cpg1.5
  'slideshow_interval_detail' =>   '(1 seconde = 1000 millisecondes)', // cpg1.5
  'slideshow_hits' =>   'Compte les Hits dans le Diaporama', // cpg1.5
  'ecard_flash' =>   'Accepte le Flash dans les eCartes', // cpg1.5
  'not_recommended' =>   'non recommandé', // cpg1.5
  'recommended' =>   'recommandé', // cpg1.5
  'transparent_overlay' =>   'Insérez un recouvrement transparent pour réduire au minimum le vol d\'image', // cpg1.5
  'old_style_rating' => 'Retour vers l\'ancien système de vote', // cpg1.5
  'old_style_rating_extra' => 'Celà va désactiver le nombre d\'étoiles utilisée pour le vote', // cpg1.5
  'rating_stars_amount' => 'Nombr d\'étoiles à utiliser pour le vote', // cpg1.5
  'filter_bad_words' =>   'Filtrer les mots interdits dans les Commentaires', // cpg1.5
  'enable_smilies' =>   'Autoriser les Smileys dans les Commentaires', // cpg1.5
  'disable_comment_flood_protect' =>   'Autoriser plusieurs Commentaires consécutifs pour une images par un même Utilisateur ', // cpg1.5
  'disable_comment_flood_protect_details' =>   '(désactive la protection anti-flood)', // cpg1.5
  'max_com_lines' =>   'Nombre maximun de lignes dans un Commentaire', // cpg1.5
  'max_com_size' =>   'Longueur MAX d\'un Commentaire', // cpg1.5
  'email_comment_notification' =>   'Informer l\'Administrateur de Nouveaux Commentaires par courriel', // cpg1.5
  'comments_sort_descending' =>   'Ordre de tri des Commentaires', // cpg1.5
  'comments_anon_pfx' =>   'Préfixe pour les Commentaires d\'utilisateurs anonymes', // cpg1.5
  'comment_approval' =>   'Les Commentaires nécéssitent l\'approbation de l\'Administrateur', // cpg1.5
  'display_comment_approval_only' =>   'Affiche uniquement les Commentaires nécéssitant approbation sur la page &quot;Voir les Commentaires&quot; ', // cpg1.5
  'comment_placeholder' =>   'Montrer le texte de remplacement aux Utilisateurs pour les Commentaires en attente d\'approbation par l\'Administrateur', // cpg1.5
  'comment_user_edit' =>   'Autorise les Utilisateurs à éditer leurs Commentaires', // cpg1.5
  'comment_captcha' =>   'Afficher CAPTCHA (confirmation visuelle) pour l\'ajout de commentaires', // cpg1.5
  'comment_promote_registration' =>   'Demander aux Visiteurs de s\'identifier pour poster des Commentaires', // cpg1.5
  'thumb_width' =>   'Dimension Maximale (largeur) pour les Vignettes', // cpg1.5
  'thumb_use' =>   'Utiliser la dimension', // cpg1.5
  'thumb_use_detail' =>   '(largeur ou hauteur ou aspect max pour la vignette)', // cpg1.5
  'thumb_height' =>   'Hauteur des Vignettes', // cpg1.5
  'thumb_height_detail' =>   '(s\'applique uniquement si vous utilisez &quot;Exact&quot; dans &quot;Utiliser la dimension&quot;)', // cpg1.5
  'enable_custom_thumbs' =>   'Activer les Vignettes personnalisées', // cpg1.5
  'movie_audio_document' =>   'vidéos, audio, documents', // cpg1.5
  'thumb_pfx' =>   'Préfixe des Vignettes', // cpg1.5
  'enable_unsharp' =>   'Accentuation de la netteté des Vignettes: Activer le masque d\'Accentuation', // cpg1.5
  'unsharp_amount' =>   'Quantité d\'Accentuation', // cpg1.5
  'unsharp_radius' =>   'Nombre de pixel de bord pour l\'Accentuation (radius)', // cpg1.5
  'unsharp_threshold' =>   'Seuil d\'Accentuation (threshold)', // cpg1.5
  'jpeg_qual' =>   'Qualité pour les fichiers JPG', // cpg1.5
  'make_intermediate' =>   'Créer des images intermédiaires', // cpg1.5
  'picture_width' =>   'Largeur ou hauteur maximale pour une image/vidéo intermédiaire', // cpg1.5
  'max_upl_size' =>   'Poids maximal des images à uploader', // cpg1.5
  'kilobytes' =>   'Ko', // cpg1.5
  'pixels' =>   'pixels', // cpg1.5
  'max_upl_width_height' =>   'Longueur ou Hauteur maximale pour les images/vidéos uploadées', // cpg1.5
  'auto_resize' =>   'Redimentionner automatiquement les images qui dépassent la hauteur et/ou la largeur maximale', // cpg1.5
  'fullsize_padding_x' =>   'Marge interne horizontale pour la fenêtre de visualisation des grandes images', // cpg1.5
  'fullsize_padding_y' =>   'Marge interne verticale pour la fenêtre de visualisation des grandes images', // cpg1.5
  'allow_private_albums' =>   'Les Albums peuvent être privés', // cpg1.5
  'allow_private_albums_note' =>   '(Note: si vous commutez de \'Oui\' à \'Non\' les Albums Privés actuels deviendront publics)', // cpg1.5
  'show_private' =>   'Montrer les Vignettes des Albums Privés aux Utilisateurs anonymes', // cpg1.5
  'forbiden_fname_char' =>   'Caractères interdits dans les noms de fichiers', // cpg1.5
  'silly_safe_mode' =>   'Autoriser le &quot;silly safe mode&quot;', // cpg1.5
  // 'allowed_file_extensions' =>   'Extensions de fichiers acceptées pour l\'upload de fichiers', // cpg1.5
  'allowed_img_types' =>   'Types d\'images autorisés', // cpg1.5
  'allowed_mov_types' =>   'Types de vidéos autorisés', // cpg1.5
  'media_autostart' =>   'Démarrage automatique des vidéos', // cpg1.5
  'allowed_snd_types' =>   'Types de fichiers sons autorisés', // cpg1.5
  'allowed_doc_types' =>   'Types de fichiers textes autorisés', // cpg1.5
  'thumb_method' =>   'Méthode de redimensionnement des images', // cpg1.5
  'impath' =>   'Chemin vers l\'utilitaire \'convert\' d\'ImageMagick', // cpg1.5
  'impath_example' =>   '(exemple /usr/bin/X11/)', // cpg1.5
  // 'allowed_img_types' =>   'Types d\'images autorisés (seulement pour ImageMagick)', // cpg1.5
  'im_options' =>   'Options de ligne de commande pour ImageMagick', // cpg1.5
  'read_exif_data' =>   'Lire les informations EXIF dans les fichiers JPEG', // cpg1.5
  'read_iptc_data' =>   'Lire les informations IPTC dans les fichiers JPEG', // cpg1.5
  'fullpath' =>   'Répertoire des Albums', // cpg1.5
  'userpics' =>   'Répertoire pour les fichiers des Utilisateurs', // cpg1.5
  'normal_pfx' =>   'Préfixe pour les images intermédiaires', // cpg1.5
  'default_dir_mode' =>   'Mode par défaut des répertoires', // cpg1.5
  'default_file_mode' =>   'Mode par défaut des fichierss', // cpg1.5
  'enable_watermark' =>   'Filigrane d\'image (watermark)', // cpg1.5
  'enable_thumb_watermark' =>   'Mettre un filigrane sur les vignettes personnalisées', // cpg1.5
  'where_put_watermark' =>   'Emplacement du filigrane', // cpg1.5
  'which_files_to_watermark' =>   'Sur quel fichier mettre le filigrane', // cpg1.5
  'watermark_file' =>   'Quel fichier utiliser pour le filigrane', // cpg1.5
  'watermark_transparency' =>   'Transparence pour les images entières', // cpg1.5
  'zero_2_hundred' =>   '0-100', // cpg1.5
  'reduce_watermark' =>   'Réduire le filigrane si la largeur de l\'image est inférieure à la valeur entrée. C\'est la référence à 100%. La réduction du filigrane est linéaire (0 pour désactiver)', // cpg1.5
  'watermark_transparency_featherx' =>   'Couleur transparente x', // cpg1.5
  'watermark_transparency_feathery' =>   'Couleur transparente y', // cpg1.5
  'gd2_only' =>   'GD2 seulement', // cpg1.5
  'allow_user_registration' =>   'Autoriser de Nouvelles Inscriptions', // cpg1.5
  'global_registration_pw' =>   'Mot de Passe global pour les inscriptions', // cpg1.5
  'user_registration_disclaimer' =>   'Affiche les règles de la Galerie (disclaimer) lors des inscriptions', // cpg1.5
  'registration_captcha' =>   'Affiche CAPTCHA (Confirmation visuelle) sur la page d\'enregistrement', // cpg1.5
  'reg_requires_valid_email' =>   'L\'inscription nécessite une confirmation du courriel', // cpg1.5
  'reg_notify_admin_email' =>   'Notifier l\'Administrateur par courriel lors de Nouvelles Inscriptions', // cpg1.5
  'admin_activation' =>   'L\'Administrateur doit activer les enregistrements', // cpg1.5
  'personal_album_on_registration' =>   'Créez un Album personnel pour l\'Utilisateur lors de son enregistrement', // cpg1.5
  'allow_unlogged_access' =>   'Autoriser l\'accès aux Visiteurs non authentifiés (visiteur ou anonyme)', // cpg1.5
  'thumbnail_intermediate_full' => 'vignette, image intermédiare et images originale', // cpg1.5
  'thumbnail_intermediate' => 'vignette et image intermédiaire image', // cpg1.5
  'thumbnail_only' => 'vugnette uniquement', // cpg1.5
  'allow_duplicate_emails_addr' =>   'Autoriser deux Utilisateurs à avoir la même adresse courriel', // cpg1.5
  'upl_notify_admin_email' =>   'Notifier l\'Administrateur lorsque des uploads nécessitent son approbation', // cpg1.5
  'allow_memberlist' =>   'Autoriser les Utilisateurs authentifiés à visualiser la liste des membres', // cpg1.5
  'allow_email_change' =>   'Autoriser les Utilisateurs à changer leur adresse courriel dans leur Profil', // cpg1.5
  'allow_user_account_delete' =>   'Autoriser les Utilisateurs à effacer leur propre Compte de la Galerie CPG', // cpg1.5
  'users_can_edit_pics' =>   'Autoriser les Utilisateurs à garder le controle de leurs images dans les Galeries publiques', // cpg1.5
  'allow_user_move_album' => 'Autoriser l\'utilisateur à déplacer ses albums de/vers les catégories autorisées', // cpg1.5
  'allow_user_album_keyword' => 'Autoriser les utilisateurs à assigner des mots clés aux albums', // cpg1.5
  'allow_user_edit_after_cat_close' => 'Autoriser les utilisateurs à modifer leurs albums dans les catégories vérouillées', // cpg1.5
  'login_method_username' => 'Nom d\'utilisateur', // cpg1.5
  'login_method_email' => 'Adresse courriel', // cpg1.5
  'login_method_both' => 'les deux', // cpg1.5
  'login_method' => 'Comment souhaitez vous que les utilisateurs puissent s\'identifier', // cpg1.5
  'login_threshold' =>   'Nombre d\'échec d\'authentification avant bannissement temporaire ', // cpg1.5
  'login_threshold_detail' =>   '(pour parer à une attaque brutale)', // cpg1.5
  'login_expiry' =>   'Durée du bannissement temporaire après un échec d\'authentification', // cpg1.5
  'minutes' => 'minutes', // cpg1.5
  'report_post' =>   'Activer les rapports à l\'Administrateur', // cpg1.5
  'user_profile1_name' =>   'Nom du profil 1', // cpg1.5
  'user_profile2_name' =>   'Nom du profil 2', // cpg1.5
  'user_profile3_name' =>   'Nom du profil 3', // cpg1.5
  'user_profile4_name' =>   'Nom du profil 4', // cpg1.5
  'user_profile5_name' =>   'Nom du profil 5', // cpg1.5
  'user_profile6_name' =>   'Nom du profil 6', // cpg1.5
  'user_field1_name' =>   'Nom du champ 1', // cpg1.5
  'user_field2_name' =>   'Nom du champ 2', // cpg1.5
  'user_field3_name' =>   'Nom du champ 3', // cpg1.5
  'user_field4_name' =>   'Nom du champ 4', // cpg1.5
  'cookie_name' =>   'Nom du Cookie', // cpg1.5
  'cookie_path' =>   'Chemin du Cookie', // cpg1.5
  'smtp_host' =>   'Serveur SMTP (si le champ est vide, PHP sendmail sera utilisé)', // cpg1.5
  'smtp_username' =>   'Nom Utilisateur SMTP', // cpg1.5
  'smtp_password' =>   'Mot de Passe SMTP', // cpg1.5
  'log_mode' =>   'Mode d\'enregistrement', // cpg1.5
  'log_mode_details' => 'Tous les fichiers log sont écrits en Anglais.', // cpg1.5
  'log_ecards' =>   'Enregistrer les envois de cartes électroniques', // cpg1.5
  'log_ecards_detail' =>   'Attention: enregistrer les logs peut avoir des impacts juridiques. Les utilisateurs devraient être informés lors de leur inscription que l\'envoi des cartes électronique est enregistré. Il est recommendé de crée une page spéciale avec les règles de propriété.', // cpg1.5
  'vote_details' =>   'Enregistrer le détails des statistiques des Votes', // cpg1.5
  'hit_details' =>   'Enregistrer le détail des statistiques des Hits', // cpg1.5
  'display_stats_on_index' =>   'Afficher les statistiques sur la page d\'index', // cpg1.5
  'count_file_hits' => 'Compter les visualisations des Fichiers', // cpg1.5
  'count_album_hits' => 'Compter les visualisations des Albums', // cpg1.5
  'debug_mode' =>   'Activer le Mode Débogage', // cpg1.5
  'debug_notice' =>   'Afficher les avertissements dans le Mode Débogage', // cpg1.5
  'offline' =>   'La Galerie est Hors Ligne (sauf pour l\'Admin)', // cpg1.5
  'display_coppermine_news' =>   'Afficher les News de coppermine-gallery.net', // cpg1.5
  'display_coppermine_detail' =>   'Sera uniquement affiché pour l\'administrateur', // cpg1.5
  'config_setting_invalid' =>   'La valeur que vous avez entrée pour &laquo;%s&raquo; n\est pas valide, vérifiez la.', // cpg1.5
  'config_setting_ok' =>   'Vos paramètres pour &laquo;%s&raquo; ont été sauvegardés.', // cpg1.5
  'contact_form_settings' =>   'Paramètres du formulaire de contact', // cpg1.5
  'contact_form_guest_enable' =>   'Affiche le formulaire de contact pour les visiteurs anonymes (guests)', // cpg1.5
  'contact_form_registered_enable' =>   'Affiche le formulaire de contact pour les visiteurs enregistrés', // cpg1.5
  'with_captcha' =>   'avec captcha', // cpg1.5
  'without_captcha' =>   'sans captcha', // cpg1.5
  'optional' =>   'optionnel', // cpg1.5
  'mandatory' =>   'obligatoire', // cpg1.5
  'contact_form_guest_name_field' =>   'Affiche le champ nom de l\'expéditeur pour les visiteurs anonymes', // cpg1.5
  'contact_form_guest_email_field' =>   'Affiche le champ adresse courrielde l\'expéditeur pour les visiteurs anonymes', // cpg1.5
  'contact_form_subject_field' =>   'Affiche le champ objet', // cpg1.5
  'contact_form_subject_content' =>   'Objet du courriel généré automatiquement par le formulaire de contact', // cpg1.5
  'contact_form_sender_email' =>   'Utiliser l\'adresse courriel de l\'expéditeur pour l\'adresse &quot;from&quot; du courriel', // cpg1.5
  'allow_no_link' => 'Autoriser mais ne pas afficher de lien', // cpg1.5
  'allow_show_link' => 'Autoriser et afficher un lien', // cpg1.5
  'display_sidebar_user' => 'Panneau latéral pour utilisateurs enregistrés', // cpg1.5
  'display_sidebar_guest' => 'Panneau latéral pour les visiteurs', // cpg1.5
  'do_not_change' => 'Ne modifiez ceci que si vous savez VRAIMENT ce que vous faites!', // cpg1.5
  'reset_to_default' => 'Retour aux valeurs par défaut', // cpg1.5
  'no_change_needed' => 'Pas de changements nécessaires, l\'option est déjà à sa valeur par défaut', // cpg1.5
  'enabled' => 'activé', // cpg1.5
  'disabled' => 'désactivé', // cpg1.5
  'none' => 'aucun', // cpg1.5
  'warning_change' => 'Lors du changement de ce paramètre, seuls les fichiers ajoutés à patir de là sont affectés, il est donc conseillé de ne pas modifier ce paramètre une fois qu\'il y a des fichiers dans la galerie. Vous pouvez néanmoins appliquer les changements aux fichiers existants avec l\'utilitaire (redimensionnement des images) des "outils d\'administration" du menu administrateur.', // cpg1.5
  'warning_exist' => 'Ces paramètres ne doivent pas être modifiés si vous avez déjà des fichiers dans votre base de donnée.', // cpg1.5
  'warning_dont_submit' => 'Si vous n\'êtes pas sur de l\'impact de ces changements, n\'envoyez pas ce formulaire et vérifiez d\'abbord dans la documentation.', // cpg1.5 // js-alert
  'menu_only' => 'uniquement dans les menus', // cpg1.5
  'everywhere' => 'partout', // cpg1.5
  'manage_languages' => 'Gérer les langues', // cpg1.5
);


// ----------------------- //
// File db_ecard.php
// ----------------------- //
if (defined('DB_ECARD_PHP')) $lang_db_ecard_php = array(
  'title' => 'eCartes envoyées', //cpg1.3.0
  'ecard_sender' => 'Expéditeur', //cpg1.3.0
  'ecard_recipient' => 'Destinataire', //cpg1.3.0
  'ecard_date' => 'Date', //cpg1.3.0
  'ecard_display' => 'Afficher les eCartes', //cpg1.3.0
  'ecard_name' => 'Nom', //cpg1.3.0
  'ecard_email' => 'Courriel', //cpg1.3.0
  'ecard_ip' => 'IP #', //cpg1.3.0
  'ecard_ascending' => 'ascendant', //cpg1.3.0
  'ecard_descending' => 'descendant', //cpg1.3.0
  'ecard_sorted' => 'triées', //cpg1.3.0
  'ecard_by_date' => 'par date', //cpg1.3.0
  'ecard_by_sender_name' => 'par nom d\'Expéditeur', //cpg1.3.0
  'ecard_by_sender_email' => 'par adresse d\'Expéditeur', //cpg1.3.0
  'ecard_by_sender_ip' => 'par adresse IP d\'Expéditeur', //cpg1.3.0
  'ecard_by_recipient_name' => 'par nom de Destinataire', //cpg1.3.0
  'ecard_by_recipient_email' => 'par adresse de Destinataire', //cpg1.3.0
  'ecard_number' => 'Affichage des enregistrements %s à %s parmi %s', //cpg1.3.0
  'ecard_goto_page' => 'Aller à la page', //cpg1.3.0
  'ecard_records_per_page' => 'enregistrements par page', //cpg1.3.0
  'check_all' => 'Tout cocher', //cpg1.3.0
  'uncheck_all' => 'Tout décocher', //cpg1.3.0
  'ecards_delete_selected' => 'Supprimer les eCartes sélectionnées', //cpg1.3.0
  'ecards_delete_confirm' => 'Etes-vous certain de vouloir supprimer ces enregistrements ? Merci de cocher la case&nbsp;!', //cpg1.3.0
  'ecards_delete_sure' => 'Je suis certain', //cpg1.3.0
);

// ----------------------- //
// File db_input.php
// ----------------------- //
if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
  'empty_name_or_com' => 'Vous devez taper votre Nom et un Commentaire',
  'com_added' => 'Votre Commentaire a été ajouté',
  'alb_need_title' => 'Vous devez donner un Titre à l\'Album&nbsp;!',
  'no_udp_needed' => 'Aucune mise à jour n\'est nécessaire.',
  'alb_updated' => 'L\'Album a été mis à jour',
  'unknown_album' => 'L\'Album sélectionné n\'existe pas ou bien vous n\'avez pas la permission d\'uploader dans cet Album',
  'no_pic_uploaded' => 'Aucune image n\'a été uploadée&nbsp;!<br /><br />Si vous avez vraiment sélectionné une image à uploader, vérifiez que le serveur autorise l\'upload de fichiers...',
  'err_mkdir' => 'Impossible de créer le répertoire %s&nbsp;!',
  'dest_dir_ro' => 'Le répertoire de destination (%s) ne dispose pas des droits d\'écriture nécessaires pour le script!',
  'err_move' => 'Impossible de déplacer %s vers %s&nbsp;!',
  'err_fsize_too_large' => 'La taille de l\'image que vous avez uploadé est trop grande (le maximum autorisé est de %s x %s)&nbsp;!',
  'err_imgsize_too_large' => 'Le poids du fichier que vous avez uploadé est trop important (le maximum autorisé est de %s Ko)&nbsp;!',
  'err_invalid_img' => 'Le fichier que vous avez uploadé n\'est pas une image valide !',
  'allowed_img_types' => 'Vous ne pouvez uploader que %s images.',
  'err_insert_pic' => 'Les images \'%s\' ne peuvent pas être insérées dans l\'Album ',
  'upload_success' => 'Votre image a été correctement uploadée<br /><br />Elle sera visible après validation de l\'Administrateur.',
  'notify_admin_email_subject' => '%s - Notification d\'upload', //cpg1.3.0
  'notify_admin_email_body' => 'Une image a été uploadée par %s. Cela nécessite votre approbation. Connectez-vous à %s', //cpg1.3.0
  'info' => 'Information',
  'com_added' => 'Commentaire ajouté',
  'com_updated' => 'Commentaire modifié',  // cpg1.5.x
  'alb_updated' => 'Album mis à jour',
  'err_comment_empty' => 'Votre Commentaire est vide !',
  'err_invalid_fext' => 'Seuls les fichiers avec les extensions suivantes sont autorisés : <br /><br />%s.',
  'no_flood' => 'Nous sommes désolés, mais vous êtes déjà l\'Auteur du dernier Commentaire posté au sujet de cette image.<br /><br />Vous pouvez tout simplement éditer votre message précédent si vous souhaitez le modifier ou bien ajouter des informations.',
  'redirect_msg' => 'Redirection en cours.<br /><br /><br />Cliquez sur \'CONTINUEZ\' si la page ne se recharge pas automatiquement',
  'upl_success' => 'Votre image a été correctement ajoutée',
  'email_comment_subject' => 'Commentaire posté sur Coppermine Photo Gallery', //cpg1.3.0
  'email_comment_body' => 'Quelqu\'un a posté un Commentaire dans votre Galerie. Consultez ce Commentaire à', //cpg1.3.0
  'album_not_selected' => 'Album non sélectionné', //cpg1.4
  'com_author_error' => 'Un Utilisateur enregistré utilise déjà ce Pseudonyme, connectez-vous ou utilisez en un autre', //cpg1.4
);

// ----------------------- //
// File delete.php
// ----------------------- //
if (defined('DELETE_PHP')) $lang_delete_php = array(
  'caption' => 'Légende',
  'fs_pic' => 'image en taille réelle',
  'del_success' => 'suppression réussie',
  'ns_pic' => 'image en taille normale',
  'err_del' => 'ne peut pas être supprimé',
  'thumb_pic' => 'Vignette',
  'comment' => 'Commentaire',
  'im_in_alb' => 'image dans l\'Album',
  'alb_del_success' => 'Album \'%s\' supprimé',
  'alb_mgr' => 'Gestionnaire d\'Album',
  'err_invalid_data' => 'Données non valides reçues dans \'%s\'',
  'create_alb' => 'Création de l\'Album \'%s\'',
  'update_alb' => 'Mise à jour de l\'Album \'%s\' avec le Titre \'%s\' et index \'%s\'',
  'del_pic' => 'Supprimer l\'image',
  'del_alb' => 'Supprimer l\'Album',
  'del_user' => 'Supprimer l\'Utilisateur',
  'err_unknown_user' => 'L\'Utilisateur sélectionné n\'existe pas&nbsp;!',
  'err_empty_groups' => 'Il n\'y a pas de Table pour ce Groupe ou elle est vide&nbsp;!', //cpg1.4
  'comment_deleted' => 'Le Commentaire a été supprimé avec succès',
  'npic' => 'Image', //cpg1.4
  'pic_mgr' => 'Gestion des images', //cpg1.4
  'update_pic' => 'Mise à jour de l\'image \'%s\' avec le nom de fichier \'%s\' et l\'index \'%s\'', //cpg1.4
  'username' => 'Nom d\'Utilisateur', //cpg1.4
  'anonymized_comments' => '%s Commentaire(s) anonyme(s)', //cpg1.4
  'anonymized_uploads' => '%s upload(s) public(s) anonyme(s)', //cpg1.4
  'deleted_comments' => '%s Commentaire(s) supprimé(s)', //cpg1.4
  'deleted_uploads' => '%s upload(s) public(s) supprimé(s)', //cpg1.4
  'user_deleted' => 'Utilisateur %s supprimé', //cpg1.4
  'activate_user' => 'Activer l\'Utilisateur', //cpg1.4
  'user_already_active' => 'Le Compte est déjà activé', //cpg1.4
  'activated' => 'Activé', //cpg1.4
  'deactivate_user' => 'Désactiver l\'Utilisateur', //cpg1.4
  'user_already_inactive' => 'Le Compte est déjà désactivé', //cpg1.4
  'deactivated' => 'Désactivé', //cpg1.4
  'reset_password' => 'Changer le Mot de Passe', //cpg1.4
  'password_reset' => 'Mot de Passe changé pour %s', //cpg1.4
  'change_group' => 'Changer de Groupe Principal', //cpg1.4
  'change_group_to_group' => 'Changer de %s à %s', //cpg1.4
  'add_group' => 'Ajouter un Groupe Secondaire', //cpg1.4
  'add_group_to_group' => 'Ajouter l\'Utilisateur %s au Groupe %s. Il est maintenant Membre de %s comme Groupe Primaire et de %s comme Groupe Secondaire.', //cpg1.4
  'status' => 'Statut', //cpg1.4
);

// ----------------------- //
// File displayecard.php
// ----------------------- //
if (defined('DISPLAYECARD_PHP')) {
$lang_displayecard_php = array(
  'invalid_data' => 'Les données de la Carte Electronique que vous essayez d\'envoyer ont été corrompues par votre client courriel. Vérifiez que le lien est complet.', //cpg1.4
);
}

// ----------------------- //
// File displayimage.php
// ----------------------- //
if (defined('DISPLAYIMAGE_PHP')){
$lang_display_image_php = array(
  'confirm_del' => 'Voulez vous vraiment SUPPRIMER cette image?\\n Bien entendu les Commentaires seront également supprimés.',//js-alert
  'del_pic' => 'SUPPRIMER CETTE IMAGE',
  'size' => '%s x %s pixels',
  'views' => '%s fois',
  'slideshow' => 'Diaporama',
  'stop_slideshow' => 'ARRETEZ LE DIAPORAMA',
  'view_fs' => 'Cliquez pour voir l\'image en taille réelle',
  'edit_pic' => 'Modifier la Description', //cpg1.3.0
  'crop_pic' => 'Retoucher', //cpg1.3.0
  'set_player' => 'Changer le lecteur',
);
$lang_picinfo = array(
  'title' =>'Informations sur l\'image',
  'Album name' => 'Nom de l\'Album',
  'Rating' => 'Note (%s votes)',
  'Date Added' => 'Date d\'ajout', //cpg1.4
  'Dimensions' => 'Dimensions',
  'Displayed' => 'Affichées',
  'URL' => 'URL', //cpg1.4
  'Make' => 'Marque', //cpg1.4
  'Model' => 'Modèle', //cpg1.4
  'DateTime' => 'Date/Heure', //cpg1.4
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
  'Sharpness' => 'Netteté', //cpg1.4
  'ManageExifDisplay' => 'Manage Exif Display', //cpg1.4
  'submit' => 'Valider', //cpg1.4
  'success' => 'Informations modifiées avec succès.', //cpg1.4
  'show_details' => 'Montrer le détail', // cpg1.5.x
  'hide_details' => 'Cacher le détail', // cpg1.5.x
  'download_URL' => 'Lien direct',
  'movie_player' => 'Lire le fichier avec votre application standard',
);
$lang_display_comments = array(
  'edit_title' => 'Modifier ce Commentaire',
  'delete_title' => 'Effacer ce Commentaire', // cpg1.5.x
  'confirm_delete' => 'Etes vous sur de vouloir effacer ce Commentaire ?', //js-alert
  'add_your_comment' => 'Ajoutez votre Commentaire',
  'name'=>'Nom',
  'comment'=>'Commentaire',
  'your_name' => 'Anonyme',
  'report_comment_title' => 'Envoyer ce Commentaire à l\'Administrateur', //cpg1.4
  'pending_approval' => 'Commentaire visible après approbation de l\'Administrateur', // cpg1.5.x
  'unapproved_comment' => 'Commentaire non approuvé', // cpg1.5.x
  'pending_approval_message' => 'Quelqu\'un a posté un Commentaire ici. Celui-ci sera visible après approbation par l\'Administrateur.', // cpg1.5.x
  'approve' => 'Approuve le Commentaire', // cpg1.5.x
  'disapprove' => 'Désapprouve le Commentaire', // cpg1.5.x
  'log_in_to_comment' => 'Les Commentaires anonymes ne sont pas autorisés ici. %sIdentifiez-vous%s pour poster votre Commentaire', // cpg1.5.x // do not translate the %s placeholders - they will be used as wrappers for the link (<a>)
  'default_username_message' => 'Merci d\'indiquer votre nom pour les commentaires', // cpg1.5.x

);
$lang_fullsize_popup = array(
  'click_to_close' => 'Cliquez sur l\'image pour fermer cette vue',
  'close_window' => 'fermer la fenêtre', // cpg1.5
);
}

// ----------------------- //
// File ecard.php
// ----------------------- //
if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
  'title' => 'Envoyez en tant que Carte Electronique',
  'invalid_email' => '<b><u>Attention</u></b> : cette adresse e-mail n\'est pas valide&nbsp;!',
  'ecard_title' => 'Une Carte Electronique pour vous, de la part de %s',
  'error_not_image' => 'Seules les images peuvent être envoyées sous forme de Cartes Electroniques.', // cpg1.5.x
  'error_not_image_flash' => 'Seuls les images et les fichiers au format Flash peuvent être envoyés sous forme de Cartes Electroniques.', // cpg1.5.x
  'view_ecard' => 'Alternate link if the e-card does not display correctly',
  'view_ecard_plaintext' => 'Pour voir cette Carte Postale Electronique, copiez et collez cette URL dans la barre d\'adresse de votre navigateur:', //cpg1.4
  'view_more_pics' => 'Suivez ce lien pour découvrir davantage de photos&nbsp;!',
  'send_success' => 'Votre Carte Electronique a été envoyée avec succès !',
  'send_failed' => 'Nous sommes désolés, mais le serveur n\'a pu envoyer votre Carte Electronique...',
  'from' => 'De la part de :',
  'your_name' => 'Votre Nom :',
  'your_email' => 'Votre adresse courriel :',
  'to' => 'A',
  'rcpt_name' => 'Nom du destinataire :',
  'rcpt_email' => 'Adresse e-mail du destinataire :',
  'greetings' => 'Introduction :',
  'message' => 'Message :',
  'ecards_footer' => 'Envoyé par %s depuis l\'adresse IP %s à %s (Heure de la Galerie)', //cpg1.4
  'preview' => 'Prévisualisation de cette eCarte', //cpg1.4
  'preview_button' => 'Prévisualisation', //cpg1.4
  'submit_button' => 'Envoyer la eCarte', //cpg1.4
  'preview_view_ecard' => 'Ce sera le lien inclu à la Carte Electronique lorsqu\'elle sera générée. Ne fonctionne pas lors des prévisualisations.', //cpg1.4
);

// ----------------------- //
// File report_file.php
// ----------------------- //
if (defined('REPORT_FILE_PHP') || defined('DISPLAYREPORT_PHP')) $lang_report_php =array(
  'title' => 'Rapport à l\'Administrateur', //cpg1.4
  'invalid_email' => '<b>Attention</b> : adresse courriel invalide !', //cpg1.4
  'report_subject' => 'Un rapport de %s de la Galerie %s', //cpg1.4
  'view_report' => 'Lien alternatif si le rapport ne s\'affiche pas correctement', //cpg1.4
  'view_report_plaintext' => 'Pour voir le rapport, copiez et collez cette adresse dans la barre d\'adresse de votre navigateur:', //cpg1.4
  'view_more_pics' => 'Galerie', //cpg1.4
  'send_success' => 'Votre rapport a été envoyé', //cpg1.4
  'send_failed' => 'Désolé mais le serveur ne peut pas envoyer votre rapport...', //cpg1.4
  'from' => 'De :', //cpg1.4
  'your_name' => 'Votre Nom :', //cpg1.4
  'your_email' => 'Votre adresse courriel :', //cpg1.4
  'to' => 'A :', //cpg1.4
  'administrator' => 'Mode Administrateur', //cpg1.4
  'subject' => 'Sujet', //cpg1.4
  'comment_field_name' => 'Faire un rapport sur le Commentaire de &quot;%s&quot;', //cpg1.4
  'reason' => 'Raison', //cpg1.4
  'message' => 'Message', //cpg1.4
  'report_footer' => 'Envoyé par %s depuis l\'adresse IP %s à %s (Heure de la Galerie)', //cpg1.4
  'obscene' => 'obscène', //cpg1.4
  'offensive' => 'violent', //cpg1.4
  'misplaced' => 'Hors sujet/Mal placé', //cpg1.4
  'missing' => 'manque', //cpg1.4
  'issue' => 'erreur/ne peut être visualisé', //cpg1.4
  'other' => 'autre', //cpg1.4
  'refers_to' => 'Le rapport se réfère à g', //cpg1.4
  'reasons_list_heading' => 'raison(s) du rapport:', //cpg1.4
  'no_reason_given' => 'Sans raisons', //cpg1.4
  'go_comment' => 'Aller au Commentaire', //cpg1.4
  'view_comment' => 'Voir le rapport complet avec le Commentaire', //cpg1.4
  'type_file' => 'fichier', //cpg1.4
  'type_comment' => 'Commentaire', //cpg1.4
  'invalid_data' => 'Les données du rapport auquel vous essayez d\'accéder ont été corrompues par votre client mail. Vérifiez si le lien est correct et complet.',
);

// ----------------------- //
// File editpics.php
// ----------------------- //
if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
  'pic_info' => 'Information sur l\'image',
  'desc' => 'Déscription',
  'approval' => 'Approbation', //cpg 1.5
  'approved' => 'Approuvé', //cpg 1.5
  'disapproved' => 'Désaprouvé', //cpg 1.5
  'new_keyword' => 'Nouveau Mot-Clef',
  'new_keywords' => 'Nouveaux Mots-Clefs trouvés', //cpg1.4
  'existing_keyword' => 'Mots-Clefs existants', //cpg1.4
  'pic_info_str' => '%sx%s - %sKo - %s affichages - %s votes',
  'approve' => 'Approuver',
  'postpone_app' => 'Approuver plus tard',
  'del_pic' => 'Supprimer l\'image',
  'del_all' => 'Supprimer TOUS les fichiers', //cpg1.4
  'read_exif' => 'Relire les informations EXIF', //cpg1.3.0
  'reset_view_count' => 'Réinitialiser le compteur de téléchargements ',
  'reset_all_view_count' => 'Réinitialiser TOUS les compteurs de vues', //cpg1.4
  'reset_votes' => 'Réinitialiser les Votes',
  'reset_all_votes' => 'Réinitialiser TOUS les Votes', //cpg1.4
  'del_comm' => 'Supprimer les Commentaires',
  'del_all_comm' => 'Supprimer TOUS les Commentaires', //cpg1.4
  'upl_approval' => 'Autorisation d\'upload',
  'edit_pics' => 'Modifier les images',
  'edit_pic' => 'Edit file', //cpg 1.5
  'see_next' => 'Voir les images suivantes',
  'see_prev' => 'Voir les images précédentes',
  'n_pic' => '%s images',
  'n_of_pic_to_disp' => 'Nombre d\'images à afficher',
  'apply' => 'Appliquer les modifications',
  'crop_title' => 'Editeur Photo de Coppermine', //cpg1.3.0
  'preview' => 'Prévisualiser', //cpg1.3.0
  'save' => 'Sauvegarder la photo', //cpg1.3.0
  'save_thumb' =>'Sauvegarder en tant que Vignette', //cpg1.3.0
  'gallery_icon' => 'Faites-en mon Icône (avatar)', //cpg1.4
  'sel_on_img' =>'La sélection doit être entièrement sur l\\\'image', //js-alert //cpg1.3.0
  'album_properties' =>'Propriétés de l\'Album', //cpg1.4
  'parent_category' =>'Catégorie parente', //cpg1.4
  'thumbnail_view' =>'Visualisation des Vignettes', //cpg1.4
  'select_unselect' =>'sélectionner/<br>déselectionner tout', //cpg1.4
  'file_exists' => 'La destination du fichier \'%s\' existe déjà', //cpg1.4
  'rename_failed' => 'Impossible de renommer \'%s\' en \'%s\'.', //cpg1.4
  'src_file_missing' => 'La source du fichier \'%s\' est manquante.', // cpg 1.4
  'mime_conv' => 'Impossible de convertir le fichier de \'%s\' en \'%s\'',//cpg1.4
  'forb_ext' => 'Type d\'extension de fichier non autorisée.',//cpg1.4
  'error_editor_class' => 'la classe de l\'éditeur pour votre méthode de redimmensionnement n\'est pas implémentée', //cpg 1.5
  'error_document_size' => 'Le document n\\\'a pas de largeur où de de hauteur', //cpg 1.5  //js-alert
  'success_picture' => 'Image sauvegardée avec succès - vous pouvez %sfermer%s cette fenêtre maintenant', //cpg 1.5 // do not translate "%s" here
  'success_thumb' => 'Vignette sauvegardée avec succès - vous pouvez %sfermer%s cette fenêtre maintenant', //cpg 1.5 // do not translate "%s" here
  'rotate' => 'Rotation', //cpg 1.5
  'mirror' => 'Mirroir', //cpg 1.5
  'scale' => 'Echelle', //cpg 1.5
  'new_width' => 'Nouvelle largeur', //cpg 1.5
  'new_height' => 'Nouvelle hauteur', //cpg 1.5
  'enable_clipping' => 'Activer les repères de coupe, appliquer pour le recadrage', //cpg 1.5
  'jpeg_quality' => 'Qualité de sortie JPEG', //cpg 1.5
  'or' => 'OU', //cpg 1.5
  'approve_pic' => 'Approuver le fichier', //cpg 1.5
  'approve_all' => 'Approuver TOUS les fichiers', //cpg 1.5
  'error_empty' => 'l\'Album est vide', // cpg1.5
  'error_linked_only' => 'L\'Album ne contient que des fichiers liés que vous ne pouvez pas modifier ici', // cpg1.5
);

// ------------------------------------------------------------------------- //
// File export.php
// ------------------------------------------------------------------------- //

if (defined('EXPORT_PHP')) $lang_export_php = array(
  'export' => 'Export', //cpg 1.5
  'export_type' => 'Type d\'Export:', //cpg 1.5
  'html' => 'Format HTML', //cpg 1.5
  'images' => 'Uniquement les Images', //cpg 1.5
  'export_directory' => 'Répertoire d\'Export:', //cpg 1.5
  'processing' => 'En cours...', //cpg 1.5
); 
  
// ----------------------- //























// File forgot_passwd.php
// ----------------------- //

if (defined('FORGOT_PASSWD_PHP')) {
$lang_forgot_passwd_php = array(
 'forgot_passwd' => 'Rappel de Mot de Passe', //cpg1.3.0
  'err_already_logged_in' => 'Vous êtes déjà identifié&nbsp;!', //cpg1.3.0
  'enter_email' => 'Saisissez votre adresse de messagerie', //cpg1.3.0
  'submit' => 'Envoyez', //cpg1.3.0
  'illegal_session' => 'Le Mot de Passe pour cette session est invalide ou a expiré.', //cpg1.4
  'failed_sending_email' => 'Le Mot de Passe n\'a pas pu être envoyé&nbsp;!', //cpg1.3.0
  'email_sent' => 'Un message a été envoyé avec votre Mot de Passe à l\'adresse %s', //cpg1.3.0
  'verify_email_sent' => 'Un courriel a été envoyé à %s. Veuillez vérifier vos courriels pour terminer le processus.', //cpg1.4
  'err_unk_user' => 'L\'Utilisateur indiqué n\'existe pas&nbsp;!', //cpg1.3.0
  'account_verify_subject' => '%s - Demande de nouveau Mot de Passe', //cpg1.4
  'passwd_reset_subject' => '%s - Votre nouveau Mot de Passe',
  
  
  
  
);

$lang_forgot_passwd_account_verify_email = <<<EOT
Vous avez demandé la génération d'un nouveau mot de passe. Si vous voulez qu'un nouveau mot de passe vou ssoit envoyé, cliquez sur le lien:

<a href="{VERIFY_LINK}">{VERIFY_LINK}</a>


Cordialement,

L'administrateur du site {SITE_NAME}

EOT;

$lang_forgot_passwd_reset_email = <<<EOT
Voici le nouveau Mot de Passe que vous avez demandé:

Nom d'utilisateur:{USER_NAME}
Mot de passe:{PASSWORD}

allez à  <a href="{SITE_LINK}">{SITE_LINK}</a> pour vous indentifier.


Cordialement,

L'administrateur du site {SITE_NAME}

EOT;
}

// ----------------------- //
// File groupmgr.php
// ----------------------- //
if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
  'group_manager' => 'Gestionnaire de Groupes', // cpg 1.5.x
  'group_name' => 'Nom du Groupe',
  'permissions' => 'Droits', //cpg1.4
  'public_albums' => 'Téléchargement dans les Albums Publics', //cpg1.4
  'personal_gallery' => 'Galerie Personnelle', //cpg1.4
  'upload_method' => 'Méthode de Téléchargement', //cpg1.4
  'disk_quota' => 'Quota disque',
  'rating' => 'Note', //cpg1.4
  'ecards' => 'Cartes Electronique', //cpg1.4
  'comments' => 'Commentaires', //cpg1.4
  'allowed' => 'Autorisé', //cpg1.4
  'approval' => 'Approbation', //cpg1.4
  'boxes_number' => 'Nombre de champs', //cpg1.4
  'variable' => 'variable', //cpg1.4
  'fixed' => 'fixé', //cpg1.4
  'apply' => 'Appliquez les modifications',
  'create_new_group' => 'Créez un Nouveau Groupe',
  'del_groups' => 'Supprimez le(s) Groupe(s) sélectionné(s)',
  'confirm_del' => 'Attention, lorsque vous supprimez un Groupe, les Utilisateurs de ce groupe seront transférés dans le groupe d\\\'utilisateurs \\\'Enregistré\\\'!\n\nSouhaitez-vous vraiment CONTINUEZ ?',//js-alert
  'title' => 'Gérer les Groupes d\'Utilisateurs',
  'num_file_upload' => 'Champ(s) d\'upload', //cpg1.4
  'num_URI_upload' => 'Champ(s) d\'upload (URI)', //cpg1.4
  'reset_to_default' => 'Mettre le nom par défaut (%s) - recommandé&nbsp;!', //cpg1.4
  'error_group_empty' => 'La Table MySQL du Groupe est vide&nbsp;!<br /><br />Groupe par défaut créé, rechargez s\'il vous plait la page', //cpg1.4
  'explain_greyed_out_title' => 'Pourquoi cette colonne est grisée ?', //cpg1.4
  'explain_guests_greyed_out_text' => 'Vous ne pouvez pas changer les propriétés de ce Groupe car vous avez choisi &quot;Non&quot; pour l\'option &quot;Autoriser l\'accès aux visiteurs non authentifiés (visiteur ou anonyme)&quot; dans la page Configuration. Les visiteurs ne peuvent donc rien faire d\'autre que se connecter; il n\'y a donc pas de règlages de Groupe pour ceux-ci.', //cpg1.4
  'explain_banned_greyed_out_text' => 'Vous ne pouvez pas changer les propriétés de ce Groupe car ses Membres ne peuvent rien faire.', //cpg1.4
  'group_assigned_album' => 'Album(s) assigné(s)', //cpg1.4
);

// ----------------------- //
// File index.php
// ----------------------- //
if (defined('INDEX_PHP')){
$lang_index_php = array(
  'welcome' => 'Bienvenue !'
);
$lang_album_admin_menu = array(
  'confirm_delete' => 'Voulez-vous VRAIMENT supprimer cet Album ? \\nToutes les photos et tous les Commentaires seront bien entendu perdus.',//js-alert
  'delete' => 'SUPPRIMEZ',
  'modify' => 'PROPRIETES',
  'edit_pics' => 'MODIFIEZ LES PHOTOS',
 'cat_locked' => 'Ces albums sont verrouillés pour les modifications', // cpg 1.5.x
);
$lang_list_categories = array(
  'home' => 'Accueil',
  'stat1' => 'Il y a <b>[pictures]</b> photos dans <b>[albums]</b> Albums et <b>[cat]</b> Catégories avec <b>[comments]</b> Commentaires affichées <b>[views]</b> fois',
  'stat2' => 'Il y a <b>[pictures]</b> photos dans <b>[albums]</b> Albums affichés <b>[views]</b> fois',
  'xx_s_gallery' => '%s\'s Galerie',
  'stat3' => 'Il y a <b>[pictures]</b> photos dans <b>[albums]</b> Albums avec <b>[comments]</b> Commentaires affichées <b>[views]</b> fois'
);
$lang_list_users = array(
  'user_list' => 'Liste d\'Utilisateurs',
  'no_user_gal' => 'Il n\'y a pas de nouvelle Galerie d\'Utilisateurs',
  'n_albums' => '%s Album(s)',
  'n_pics' => '%s photo(s)'
);
$lang_list_albums = array(
  'n_pictures' => '%s photos',
  'last_added' => ', la dernière a été ajoutée le %s',
  'n_link_pictures' => '%s fichiers liés', //cpg1.4
  'total_pictures' => '%s total de fichiers', //cpg1.4
  'alb_hits' => 'Album visualisé %s fois', // cpg1.5.x
);
}

// ----------------------- //
// File install.php
// ------------------------------------------------------------------------- //

if (defined('INSTALL_PHP')) $lang_install = array(
  'already_succ' => 'L\'installeur a déjà été utilisé avec succès, il est maintenant vérouillé.',
  'already_succ_explain' => 'Si vous souhaitez relancer l\'installeur à nouveau, vous devez d\'abbord effacer le fichier \'include/config.inc.php\' qui a été crée dans le répertoire ou vous avez placé Coppermine. Vous pouvez le faire avec un éditeur de texte',
  'c_mode' => 'Mode actuel',
  'cant_read_tmp_conf' => 'L\installeur ne peut pas lir ele fichier temporaire de configuration %s, vérifiez les permissions de vos répertoires',
  'cant_write_tmp_conf' => 'l\'installeur de peut pas écrite le fichier temporaire de configuration %s, vérifiez les permissions de vos répertoires',
  'change_lang' => 'Changer de langue',
  'check_path' => 'Vérifier le chemin',
  'continue' => 'Etape suivante',
  'conv_said' => 'Le programme de conversion dit::',
  'license_info' => 'Coppermine est un script de galerie d\'images et de contenu multimédia qui est publié sous licence GNU GPL v3. En l\'installant, vous acceptés les termes de celle-ci:',
  'cpg_info_frames' => 'Votre navigateur semble ne pas pouvoir afficher les cadres imbriqués (iframes). Vous pouvez trouver la licence dans le répertoire \'docs\' qui se trouve dans le pack de Coppermine.',
  'license' => 'Acceptation de la licence de Coppermine',
  'create_table' => 'Création de la table \'%s\'',
  'db_populating' => 'Essai d\'insertion de données dans la base de donnée.',
  'db_alr_populated' => 'Les données requises sont déjà insérées dans la base de donnée.',
  'dir_ok' => 'Répertoire trouvé',
  'directory' => 'Répertoire',
  'email' => 'Adresse courriel',
  'email_no_match' => 'Les adresse courriels ne sont pas identiques ou sont invalides.',
  'email_verif' => 'Vérification de l\'adresse courriel',
  'err_cpgnuke' => '<h1>ERREUR</h1>Il semble que vous installez une version autonome de Coppermine dan svotre portail Nuke.<br />Cette version ne peut être utilisée que de manière autonome!<br />Certaines configurations de serveur affichent cet avertissement même si vous n\'utilisez pas de portail Nuke - si c\'est votre cas, <a href="%s?continue_anyway=1">continuez</a> avec le processus d\'installationi. Si vous utilisez un portail Nuke, vous devriez regarder ici <a href=\"http://www.cpgnuke.com/\">CpgNuke</a> ou utiliser le <a href=\"http://sourceforge.net/project/showfiles.php?group_id=89658&amp;package_id=95984\">portage de Coppermine</a> (sans support d\'aide) - ne continuez pas!',
  'error' => 'ERREUR',
  'error_need_corr' => 'Les erreurs suivantes ont été rencontrées et doivent être corrigées d\'abbord:',
  'finish' => 'Terminer l\'installation',
  'gd_note' => '<strong>Important :</strong> les anciennes versions de la librairie graphiqueGD ne gèrent que les images JPEG et PNG . Si vous êtes dans ce cas, le script ne pourra pas créer des vignettes pour les fichiers GIF.',
  'go_to_main' => 'Allez à la page d\'accueil',
  'im_no_convert_ex' => 'L\'installeur a trouvé l\'utilitaire  \'convert\' ImageMagick dansn \'%s\', toutefois il ne peut pas être utilisé par le script.<br /><br />Vous devrier utiliser GD à l aplace d\'ImageMagick.',
  'im_not_found' => 'L\'installeur a essayé de trouver ImageMagick, mais n\'a pas pus vérifier son existence ou à renctontré une erreur. <br />Coppermine peut utiliser l\'utilitaire <a href="http://www.imagemagick.org/" target="_blank">d\'ImageMagick</a> 	\'convert\' pour créer les vignettes. La qualité des images produites par ImageMagick est supérieure à GD1 mais équivalente à GD2.<br /><br />Si ImageMagick est installé sur votre système et que vousvoulez l\'utiliser, <br />vous devez entrer le chemin complet vers l\'utilitaire \'convert\' ci-desous. <br />Sous Windows le chemin devrait ressembler à ça: \'c:/ImageMagick/\' et ne doit pas comprendre d\'espaces, sous Unix c\'est quelque chose comme \'/usr/bin/X11/\'.<br /><br />Si vous ne savez pas si vous avez ImageMagick ou pas, laissez ce champ vide - l\'installeur va essayer d\'utiliser GD2 par défaut (c\'est la configuration de la plupart des utilisateurs). <br />Vous pourrez changer cela plus tard (dans la page de configuration de Coppermine), n\'ayez donc aucunes craintes si vous ne savez pas quoi entrer ici - laissez simplement le champ vide.',
  'im_packages' => 'Votre serveur supporte les librairies graphiques suivantes',
  'im_path' => 'Chemin vers ImageMagick:',
  'im_path_space' => 'Le chemin vers ImageMagick (\'%s\') contient au moins un espace. Cela va poser des problèmes dans le script.<br /><br />Vous devez déplacer ImageMagick dans un autre répertoire.',
  'installation' => 'installation',
  'installer_locked' => 'L\'installeur est vérouillé',
  'installer_selected' => 'L\'installeur est sélectionné',
  'inv_im_path' => 'L\'installeur ne peut pas trouver le répertoire \'%s\' que vous avez donné pour ImageMagick ou n\'a pas la permission d\'y accéder. Vérifiez que vous avez correctement entré le chemin et que vous avez accès au répertoire spécifié.',
  'last_step' => 'Dernière étape...',
  'lets_go' => 'En avant !',
  'mysql_create_btn' => 'Creéer',
  'mysql_create_db' => 'Créer une nouvelle base de donnée MySql',
  'mysql_db_name' => 'Nom de la base de donnée MySQL',
  'mysql_error' => 'erreur MySQL : ',
  'mysql_host' => 'Hôte MySQL <br />(localhost est généralement OK)',
  'mysql_no_create_db' => 'La base de donnée MySql ne peut pas être créer.',
  'mysql_no_sel_dbs' => 'Impossible de récupérer les bases de données MySQL disponible',
  'mysql_succ' => 'Succès de la connection avec la base de donnée',
  'mysql_tbl_pref' => 'Préfixe des tables MySQL',
  'mysql_test_connection' => 'Test de connection',
  'mysql_wrong_db' => 'MySQL ne trouve pas la base de donnée nommée \'%s\' vérifiez le nom que vous avez entré pour cela',
  'n_a' => 'N/A',
  'no_admin_email' => 'Vous devez entrer une adresse courriel pour l\'administration',
  'no_admin_password' => 'Vous devez entrer un mot de passe administrateur',
  'no_admin_username' => 'Vous devez entre un nom d\'utilisateur pour l\'administrateur',
  'no_dir' => 'Répertoire non disponible',
  'no_gd' => 'Votre installation de PHP ne semble pas inclure l\'extention pour la librarie graphique \'GD\' et vous n\'avez pas indiqué voulir utiliser ImageMagick. Coppermine a été configuré pourutiliser GD2, la détection automatique de GD posant parfois des problèmes. Si GD est installé sur votre système, le script pourra fonctionner, sinon, vous devrez installer ImageMagik.',
  'no_mysql_conn' => 'Impossible de créer une connection MySQL, vérifiez les donénes entrées pour la connection',
  'no_mysql_support' => 'PHP n\'a pas de support Mysql actif.',
  'no_thumb_method' => 'Vous avez choisi un système de manipulation d\'images (GD/IM)',
  'nok' => 'INCORRECT',
  'not_here_yet' => 'Rien de particulier ici pour l\'instant, mercide cliquer %sici%s pour revenir.',
  'ok' => 'CORRECT',
  'on_q' => 'dans la requête',
  'or' => 'ou',
  'pass_err' => 'Les mots de passe ne sont pas identiques, vous utilisez des caractères illégaux ou vous n\'en n\'avez pas défini.',
  'password' => 'Mot de Passe',
  'password_verif' => 'Vérification du Mot de Passe',
  'perm_error' => 'Les autorisations de \'%s\' sont paramétrées à %s, merci de les paramétrer à',
  'perm_ok' => 'Les autorisations de certains répertoires ont été vérifiées et semblent correctes. <br />Merfci d\'aller à l\'étape suivante.',
  'perm_not_ok' => 'Les autorisations de certains réperoirs ne sont par correctes.<br />Changez les autorisations des répertoires ci-desous marqués "INCORRECT".', // cpg1.5
  'please_go_back' => 'Merci de %scliquer ici%s pour revenir en arrière et corriger ce problème avant de continuer.',
  'populate_db' => 'Completer la base de donnée',
  'r_mode' => 'mode requis',
  'ready_to_roll' => '<a href="index.php">Coppermine</a> est maintenant corectement configuré et prêt à fonctionner.<br /><br /><a href="login.php">Identiez-vous</a> en utilisant les informations que vous avez données pour votre compte administrateur.',
  'sect_create_adm' => 'Cette partie requière des informations pour crére votre compte administrateur Coppermine. N\'utilisez que des caractères alphanumériques. Entrez ces données attentivement!',
  'sect_mysql_info' => 'Cette section demande les informations pour savoir comment se connecter à votre base de donnée MySQL.<br />Si vou sne savez pas comment les remplir, demandez de l\'aide à votre hébergeur.',
  'sect_mysql_sel_db' => 'Ici vous devez choisir quelle base de donnée vous voulez utiliser pour Coppermine. <br />Si votre compte Mysql a les privilèges requis, vous pouvez créer une nouvelle base de donnée depusi l\'installeur ou utiliser une base de donnée existante. Si vous ne voulez d\'aucune de ces deux options, vous devrez créer une base de donnée hors de l\installeur Coppermine, puis revenir ici et sélectionner la nouvelle base de donnée depuis la liste déroulante. Vous pouvez aussi changer le préfixe des tables (N\'utilisez pas de point), mais il est recommander de laisser le préfixe par défaut tel quel.',
  'select_lang' => 'Sélectionnez la langue par défaut: ',
  'sql_file_not_found' => 'Le fichier \'%s\' n\'a pas pu être trouvé. Vérifiez que vous avez téléchargé tous les fichiers Coppermine sur votre serveur',
  'status' => 'Statut',
  'subdir_called' => 'Un sous-répertoire nommé \'%s\' devrait normalement exister dans le répertoire où vous avez téléchargé Coppermine. <br />L\'installeur ne peut pas le trouver. Vérifiez que vous avez téléchargé ous les fichiers Coppermine sur le serveur.',
  'title_admin' => 'Créer l\'adiminstrateur Coppermine',
  'title_dir_check' => 'Vérification des autorisations des répertoires',
  'title_file_check' => 'Vérification des fichiers d\installation',
  'title_finished' => 'Installation Complete',
  'title_imp' => 'Sélection de la Librairie Graphique',
  'title_imp_test' => 'Test de la Librairie Graphique',
  'title_mysql_db_sel' => 'Sélection de la base de donnée MySql',
  'title_mysql_pop' => 'Creation de la structure de la base de donnée',
  'title_mysql_user' => 'Autentification de l\'utilisateur de MySql',
  'title_welcome' => 'Bienvenue dans l\installation de Coppermine',
  'tmp_conf_error' => 'Impossible d\'écire dans le fichier temporaire de configuration, <br />assurez vous que le répertoire \'include\' à les permissions en écriture (777)',
  'tmp_conf_ser_err' => 'Une erreur sérieure est intervenue dans l\'installeur, essayez de recharger votre page ou recommencez en éffacant le fichier \'include/config.tmp\'.',
  'try_again' => 'Essayez encore !',
  'unable_write_config' => 'Impossible de crére le fichier de configuration',
  'user_err' => 'Le nom d\'utilisateur doit contenir uniquement des caractères alphanumériques et ne peut être vide.',
  'username' => 'Nom d\'utilisateur',
  'your_admin_account' => 'Votre compte administrateur',
  'no_cookie' => 'Votre navigateur n\'accèpte pas les cookies (mêm si il est très sucré). Il est recommandé d\'accepter les cookies.',
  'no_javascript' => 'Votre navigateur semble ne pas avoir le Javascript activé, il est hautement recommandé de l\'activer.',
  'register_globals_detected' => 'Il semble que votre configuration de PHP à le \'register_globals\' actif, vous devriez le désactyiver pour des raisons de sécurité.',
  'version_undetected' => 'Le script ne peut pas déterminer quelle version de %s votre serveur utilise. Assurez vous que c\'est au moins la version %s',
  'version_incompatible' => 'Le script à détecté une version incompatible (%s) de %s sur votre serveur.<br />Assurez vous d\'utiliser une version compatible (%s ou plus) avant de continuer!',
  'read_gif' => 'Lire/Ecrire un fichier .gif',
  'read_png' => 'Lire/Ecrire un fichier .png',
  'read_jpg' => 'Lire/Ecrire un fichier .jpg',
  'write_error' => 'Impossible de générer l\'image sur le disque.',
  'read_error' => 'Impossible de lire l\'image source.',
  'combine_error' => 'Impossible de combiner l\'image source',
  'text_error' => 'Impossible d\'ajouter du texte à l\'image source',
  'scale_error' => 'Impossible de redimensionner l\'image source',
  'pixels' => 'pixels',
  'combine' => 'Combiner 2 images',
  'text' => 'Ecrire du texte sur l\'image',
  'scale' => 'Redimensionner une  image',
  'generated_image' => 'Image générée',
  'reference_image' => 'Image de référence',
  'imp_test_error' => 'Il y a eu au moins une erreur pendant le test, vérifiez que vous avez sélectionné la bonne librairie graphique et qu\'elle est configurée correctement!',
);
// ----------------------- //
// File keywordmgr.php
// ----------------------- //
if (defined('KEYWORDMGR_PHP')) $lang_keywordmgr_php = array(
  'title' => 'Gérez les Mots Clefs', //cpg1.4
  'search' => 'cherchez', //cpg1.4
  'keyword_test_search' => 'cherchez %s dans une nouvelle fenêtre', //cpg1.4
  'keyword_del' => 'effacer le Mot Clef %s', //cpg1.4
  'confirm_delete' => 'êtes-vous sur de vouloir effacer le Mot Clef %s de toute la Galerie ?', //cpg1.4  // js-alert
  'change_keyword' => 'changer le Mot Clef', //cpg1.4
);
// ------------------------------------------------------------------------- //
// File langmgr.php
// ------------------------------------------------------------------------- //

if (defined('LANGMGR_PHP')) $lang_langmgr_php = array(
  'title' => 'Gestionnaire de langue',
  'english_language_name' => 'Anglais',
  'native_language_name' => 'Original',
  'custom_language_name' => 'Personnalisé',
  'language_name' => 'Nom de la langue',
  'language_file' => 'Fichier langue',
  'flag' => 'Drapeau',
  'file_available' => 'Disponible',
  'enabled' => 'Activé',
  'complete' => 'Complet',
  'default' => 'Default',
  'missing' => 'manquant',
  'broken' => 'Semble corrompu ou inaccessile',
  'exists_in_db_and_file' => 'exite dans la base de donnée et en tant que fichier',
  'exists_as_file_only' => 'existe en tant que fichier uniquement',
  'pick_a_flag' => 'Choisir',
  'replace_x_with_y' => 'Remplacer %s par %s',
  'tanslator_information' => 'Information sur le traducteur',
  'cpg_version' => 'Version de Coppermine',
  'hide_details' => 'Cacher les détails',
  'show_details' => 'Montert les détails',
  'loading' => 'Chargement',
  'english_missing' => 'LE fichier langue Anglaise est manquant alors qu\'il ne devrait pas être effacé. Restaurez le immédiatement.',
  'enable_at_least_one' => 'Vous devez au moins activer une langue pour que la galerie fonctionne',
  'enable_default' => 'Vous avez choisi une langue par défaut qui n\'est pas active. Choisissez une autre langue par défaut ou activezla langue que vous avez sélectionnée par défaut!',
  'available_default' => 'Vous avez sélectionné une langue par défaut qui n\'est plus disponible. Choisissez une autre langue par défaut!',
  'version_does_not_match' => 'La version de ce fichier ne corrspond pas à votre version de Coppermine. Utilisez le avec prudence et testez le attentivement!',
  'no_version' => 'Aucune information de version n\'a été trouvée. Il semblerait que ce fichier langue ne fonctionne pas ou que ce n\'est pas un fichier langue.',
  'filesize' => 'La taille du fichier %s n\'est pas possible',
  'content_missing' => 'Ce fichier ne semble pas contenir les données nécessaires, il ne s\'agit certainement pas d\'un fichier langue valide.',
  'status' => 'Status',
  'default_language' => 'La langue par défut est %s',
);

// ----------------------- //
// File login.php
// ----------------------- //
if (defined('LOGIN_PHP')) $lang_login_php = array(
  'login' => 'Se connecter',
  'enter_login_pswd' => 'Entrez votre Identifiant et Mot de Passe pour vous connecter',
  'username' => 'Identifiant',
  'email' => 'Adresse courriel', // cpg1.5
  'both' => 'Nom d\'utilisateur / Adrese courriel', // cpg1.5
  'password' => 'Mot de Passe',
  'remember_me' => '<b>Se souvenir de moi</b>',
  'welcome' => 'Bienvenue %s ...',
  'err_login' => '*** Impossible de vous connecter. Essayez encore ***',
  'err_already_logged_in' => 'Vous êtes déjà connecté(e)&nbsp;!',
  'forgot_password_link' => 'Damned ! J\'ai oublié mon Mot de Passe&nbsp;!', //cpg1.3.0
  'cookie_warning' => 'Attention votre navigateur n\'accepte pas les Cookies', //cpg1.4
  'send_activation_link' => 'Lien d\'Activation perdu ?',//cpg 1.5.0
  'force_login' => 'Vous deviez vous identifier pour voir cette page', // cpg1.5
  'force_login_title' => 'Identifiez vous pour continuer', // cpg1.5
);

// ----------------------- //
// File logout.php
// ----------------------- //
if (defined('LOGOUT_PHP')) $lang_logout_php = array(
  'logout' => 'Déconnexion',
  'bye' => 'Au revoir %s ...',
  'err_not_loged_in' => 'Vous n\'êtes pas identifié(e)&nbsp;!',
);

// ----------------------- //
// File minibrowser.php
// ----------------------- //
if (defined('MINIBROWSER_PHP')) $lang_minibrowser_php = array(
  'up' => 'remonter d\'un niveau', //cpg1.4
  'current_path' => 'niveau actuel', //cpg1.4
  'select_directory' => 'choisissez un répertoire', //cpg1.4
  'click_to_close' => 'Cliquez sur l\'image pour fermer la fenêtre',
  'folder' => 'Folder', // cpg1.5
);

// ------------------------------------------------------------------------- //
// File mode.php
// ------------------------------------------------------------------------- //

if (defined('MODE_PHP')) $lang_mode_php = array(
  0 => 'Cacher les controls administrateurs...', // cpg1.5
  1 => 'Afficher les controls administrateurs...', // cpg1.5
  'news_hide' => 'Cahcer les news...', // cpg1.5
  'news_show' => 'Montrer les news...', // cpg1.5
);

// ----------------------- //
// File modifyalb.php
// ----------------------- //
if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
  'upd_alb_n' => 'Mettre à Jour l\'Album %s',
  'general_settings' => 'Paramètres Généraux',
  'alb_title' => 'Titre de l\'Album',
  'alb_cat' => 'Catégorie de l\'Album',
  'alb_desc' => 'Description de l\'Album',
  'alb_keyword' => 'Mot clef de l\'Album', //cpg1.4
  'alb_thumb' => 'vignette de l\'Album',
  'alb_perm' => 'Permissions pour cet Album',
  'can_view' => 'Cet Album peut être consulté par',
  'can_upload' => 'Les Visiteurs peuvent mettre des photos en ligne',
  'can_post_comments' => 'Les Visiteurs peuvent poster des Commentaires',
  'can_rate' => 'Les Visiteurs peuvent noter les photos',
  'user_gal' => 'Galerie de l\'Utilisateur',
  'my_gal' => '* Ma Galerie *', //cpg 1.5
  'no_cat' => '* Pas de Catégorie *',
  'alb_empty' => 'L\'Album est vide',
  'last_uploaded' => 'Dernier upload',
  'public_alb' => 'Tout le monde (album public)',
  'me_only' => 'Moi seulement',
  'owner_only' => 'Le propriétaire de l\'Album (%s) seulement',
  'groupp_only' => 'Membres du Groupe \'%s\'',
  'err_no_alb_to_modify' => 'Il n\'y a pas d\'Album modifiable dans la base.',
  'update' => 'Mettre l\'Album à jour',
  'reset_album' => 'Réinitialiser l\'Album', //cpg1.4
  'reset_views' => 'Mettre le compteur de vues à &quot;0&quot; dans %s', //cpg1.4
  'reset_rating' => 'Effacez les votes de tous les fichiers dans %s', //cpg1.4
  'delete_comments' => 'Supprimez tous les Commentaires écrit dans %s', //cpg1.4
  'delete_files' => 'Supprimez %sdéfinitivement%s tous les fichiers dans %s', //cpg1.4
  'views' => 'Vues', //cpg1.4
  'votes' => 'Votes', //cpg1.4
  'comments' => 'Commentaires', //cpg1.4
  'files' => 'fichiers', //cpg1.4
  'submit_reset' => 'soumettre les changements', //cpg1.4
  'reset_views_confirm' => 'Je suis sûr et certain', //cpg1.4
  'notice1' => '(*) en fonction de la configuration des %sGroupes%s', //cpg1.3.0 (do not translate %s!)
  'can_moderate' => 'L\'Album peut être modéré par', //cpg 1.5
  'admins_only' => 'Administrateurs uniquement', //cpg 1.5
  'alb_password' => 'Mot de Passe de l\'Album', //cpg1.4
  'alb_password_hint' => 'Pense-bête du Mot de Passe de l\'Album', //cpg1.4
  'edit_files' =>'Editez les fichiers', //cpg1.4
  'parent_category' =>'Catégorie parente', //cpg1.4
  'thumbnail_view' =>'Vue des Vignettes', //cpg1.4
  'random_image' => 'Image aléatoire', //cpg 1.5
  'password_protect' => 'Protéger cet album par Mot de passe (cocher pour oui)', //cpg1.5
);

// ----------------------- //
// File phpinfo.php
// ----------------------- //
if (defined('PHPINFO_PHP')) $lang_phpinfo_php = array(
 'php_info' => 'PHP info',
  'explanation' => 'Voici la sortie générée par la fonction <a href="http://www.php.net/phpinfo">phpinfo()</a>, affichée à l\'intérieur de Coppermine (en rognant les informations trop longues) (les résultats varis selon les serveurs).',
  'no_link' => 'Les informations reprises ici peuvent représenter un risque pour la sécurité, c\'est pourquoi cette page est sécurisée et n\'est visible que si vous êtes connecté en tant qu\'Administrateur de la Galerie. Vous ne pouvez pas poster de lien vers cette page car les autres n\'y ont pas accès et ne pourront l\'afficher.',
);

// ----------------------- //
// File picmgr.php
// ----------------------- //
if (defined('PICMGR_PHP')) $lang_picmgr_php = array(
  'pic_mgr' => 'Gestionnaire d\'image', //cpg1.4
  'confirm_delete1' => 'Etes-vous sur de vouloir supprimer cette image ?', //cpg1.4
  'confirm_delete2' => '\nL\'image sera supprimée de façon permanente.', //cpg1.4
  'apply_modifs' => 'Appliquez les modifications', //cpg1.4
  'confirm_modifs' => 'Confirmez les modifications', //cpg1.4
  'pic_need_name' => 'L\'image doit avoir un nom&nbsp;!', //cpg1.4
  'no_change' => 'Vous n\'avez pas fait de changement&nbsp;!', //cpg1.4
  'no_album' => '* Pas d\'Album *', //cpg1.4
  'explanation_header' => 'L\'ordre personnalisé de tri que vous pouvez définir ne sera pris en compte que si', //cpg1.4
  'explanation1' => 'l\'Administrateur du site a défini &quot;l\'ordre de tri par défaut des images&quot; dans la Configuration en  &quot;Ordre croissant&quot; ou &quot;Ordre décroissant&quot; (configuration générale pour tous les Utilisateurs qui n\'ont pas choisi une autre option de tri de manière individuelle)', //cpg1.4
  'explanation2' => 'l\'Utilisateur a choisi &quot;Ordre croissant&quot; ou &quot;Ordre décroissant&quot; sur la page des vignettes (Choix personnel de l\'Utilisateur)', //cpg1.4


);


// ----------------------- //
// File pluginmgr.php
// ----------------------- //
if (defined('PLUGINMGR_PHP')){
$lang_pluginmgr_php = array(
  'confirm_uninstall' => 'Etes-vous sur de vouloir DESINSTALLER ce plugin', //cpg1.4
  'confirm_remove' => 'NOTE: l\'API Plugin est désactivée.  Voulez vous EFFACER MANUELLEMENT ce plugins, sans aucune action de nettoyage', // cpg1.5
  'confirm_delete' => 'Etes-vous sur de vouloir SUPPRIMER ce plugin', //cpg1.4
  'pmgr' => 'Gérez les plugin', //cpg1.4
  'explanation' => 'Installer / désinstaller / gérer les plugins depuis cette page.', // cpg1.5.x
  'plugin_enabled' => 'Plugin API activé', // cpg1.5.x
  'name' => 'Nom', //cpg1.4
  'author' => 'Auteur', //cpg1.4
  'desc' => 'Description', //cpg1.4
  'vers' => 'v', //cpg1.4
  'i_plugins' => 'Plugins installés', //cpg1.4
  'n_plugins' => 'Plugins non-installés', //cpg1.4
  'none_installed' => 'Aucune installation', //cpg1.4
  'operation' => 'Opération', //cpg1.4
  'not_plugin_package' => 'Le fichier téléchargé n\'est pas un plugin.', //cpg1.4
  'copy_error' => 'Il y a eu une erreur en copiant le plugin dans le répertoire.', //cpg1.4
  'upload' => 'Upload', //cpg1.4
  'configure_plugin' => 'Configurez le plugin', //cpg1.4
  'cleanup_plugin' => 'Nettoyez le plugin', //cpg1.4
  'extra' => 'Extra', // cpg1.5.x
  'install_info' => 'Informations d\'installation', // cpg1.5
  'plugin_disabled_note' => 'L\'API Plugin est désactivée, cette action n\'est pas autorisée.', // cpg1.5
  'install' => 'installer', // cpg1.5
  'uninstall' => 'désinstaller', // cpg1.5
);
}

// ----------------------- //
// File ratepic.php
// ----------------------- //
if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
  'already_rated' => 'Vous avez déjà noté cette photo',
  'rate_ok' => 'Votre Vote a été pris en compte. Merci.',
  'forbidden' => 'Vous ne pouvez pas noter vos propres photos !', //cpg1.3.0
);

// ----------------------- //
// File register.php & profile.php
// ----------------------- //
if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {
$lang_register_disclamer = <<<EOT
Bien que les Administrateurs de {SITE_NAME} fassent en sorte de supprimer ou modifier toutes les données à caractère répréhensible le plus rapidement possible, il est toutefois impossible de scruter systématiquement l'intégralité des contenus déposés par les Visiteurs ou par Utilisateurs. Vous êtes par conséquent conscient que tous les Commentaires, images ou fichiers proposés sur ce site expriment les points de vue et opinions de leurs auteurs et non ceux des Administrateurs ou du webmaster de {SITE_NAME}. (sauf, évidemment dans le cas des posts effectués par ces derniers), qui par conséquent ne pourront pas être considérés comme responsables.<br />
<br />
Vous acceptez de ne poster aucune donnée à caractère injurieux, obscène, vulgaire, diffamatoire, menaçant, sexuel ou tout autre contenu susceptible d\'enfreindre la loi. Vous acceptez que le Webmaster et les Modérateurs de {SITE_NAME} aient le droit de supprimer ou modifier n'importe quel contenu, si cela leur semble opportun et en accord avec les présentes règles de bonnes conduite. En tant qu'Utilisateur, vous acceptez que toutes les informations entrées plus haut et toutes les photographies que vous publiez soient stockées dans une Base de Données. Bien que ces informations et photographies ne soient pas communiquées à des tiers sans votre consentement, le Webmaster et les Administrateurs ne peuvent en aucun cas être tenus pour responsables dans le cas de tentatives de hack qui pourraient compromettre les données ou permettre l'accès ou l'utilisation illicite de vos photographies. Dès lors que vous prenez la décision de publier sur Internet, vous rendez vos oeuvres publiques !<br />
<br />
Ce site utilise des Cookies pour stocker des informations sur votre ordinateur. Ces Cookies ne servent qu'à améliorer votre navigation sur ce site. Votre adresse e-mail ne sera utilisée que pour confirmer les données de votre inscription ainsi que votre Mot de Passe. Ces données ne seront pas transmisses à des tiers.<br />
<br />
En cliquant sur le bouton '<b>J'accepte</b>' ci-dessous, vous acceptez de vous soumettre à ces conditions ainsi qu'à toutes leurs éventuelles mises à jour.<br />
Merci pour votre inscription.
EOT;
$lang_register_php = array(
  'page_title' => 'inscription d\'Utilisateur',
  'term_cond' => 'Conditions Générales d\'inscription',
  'i_agree' => 'J\'accepte',
  'submit' => 'S\'inscrire',
  'err_user_exists' => 'Le Nom d\'Utilisateur que vous avez entré existe déjà ! Merci de bien vouloir en choisir un nouveau.',
  'err_global_pw' => 'Mot de Passe global invalide', // cpg1.5
  'err_global_pass_same' => 'Votre Mot de Passe doit être différent du Mot de Passe global', // cpg1.5
  'err_password_mismatch' => 'Les deux Mots de Passe ne correspondent pas, merci de les entrer à nouveau.',
  'err_uname_short' => 'Le nom d\'Utilisateur doit comprendre au minimum 2 caractères',
  'err_password_short' => 'Le Mot de Passe doit comprendre au moins 2 caractères',
  'err_uname_pass_diff' => 'Le Nom d\'Utilisateur et le Mot de Passe doivent être différents',
  'err_invalid_email' => 'L\'adresse courriel n\'est pas valide',
  'err_duplicate_email' => 'Un autre Utilisateur s\'est déjà enregisté avec l\'adresse courriel que vous avez entrée',
  'err_disclaimer' => 'Vous devez accepter les règles de notre Galerie', // cpg1.5
 'enter_info' => 'Entrez les informations relatives à votre inscription',
  'required_info' => 'Informations requises',
  'optional_info' => 'Informations optionnelles',
  'username' => 'Nom d\'Utilisateur / identifiant',
  'password' => 'Mot de Passe',
  'password_again' => 'Entrez à nouveau le Mot de Passe',
  'global_registration_pw' => 'Mot de Passe global pour l\'enregistrement', // cpg1.5
  'email' => 'Courriel :',
  'location' => 'Votre Localisation :',
  'interests' => 'Vos centre d\'Intérêts :',
  'website' => 'Votre Site web :',
  'occupation' => 'Votre Activité :',
  'error' => 'ERREUR',
  'confirm_email_subject' => '%s - Confirmation d\'inscription',
  'information' => 'Informations',
  'failed_sending_email' => 'Le courriel de confirmation d\'inscription n\'a pas pu être envoyé!',
  'thank_you' => 'Merci pour votre inscription.<br /><br />Un courriel contenant les informations sur l\'Activation de votre Compte vous a été envoyé à l\'adresse courriel que vous nous avez communiquée.',
  'acct_created' => 'Votre compte a bien été créé. Vous pouvez maintenant vous identifier avec votre Identifiant et votre Mot de Passe',
  'acct_active' => 'Votre Compte a bien été activé. Vous pouvez maintenant vous identifier avec votre Identifiant et votre Mot de Passe',
  'acct_already_act' => 'Votre Compte est déjà actif!',
  'acct_act_failed' => 'Ce Compte ne peut pas être activé!',
  'err_unk_user' => 'L\'Utilisateur sélectionné n\'existe pas!',
  'x_s_profile' => 'Profil de %s',
  'group' => 'Groupe',
  'reg_date' => 'Date d\'inscription',
  'disk_usage' => 'Utilisation du disque',
  'change_pass' => 'Modifiez le Mot de Passe',
  'current_pass' => 'Mot de Passe actuel',
  'new_pass' => 'Nouveau Mot de Passe',
  'new_pass_again' => 'Nouveau Mot de Passe (à nouveau)',
  'err_curr_pass' => 'Le Mot de Passe actuel n\'est pas correct',
  'apply_modif' => 'Appliquez les modifications',
  'change_pass' => 'Changer mon mot de passe',
  'update_success' => 'Votre Profil a été mis à jour',
  'pass_chg_success' => 'Votre Mot de Passe a été modifié',
  'pass_chg_error' => 'Votre Mot de Passe n\'a pas été modifié',
  'notify_admin_email_subject' => '%s - notification d\'inscription',
  'last_uploads' => 'Dernier fichier uploadé.<br />Cliquer pour voir tous les Derniers Téléchargements par', //cpg1.4
  'last_uploads_detail' => 'Cliquez pour voir tous les téléchargements de %s', //cpg1.5
  'last_comments' => 'Dernier Commentaire.<br />Cliquer pour voir tous les Derniers Commentaires par', //cpg1.4
  'you' => 'you', //cpg1.5
  'last_comments_detail' => 'Cliquez pour voir tous les comentaires de %s', //cpg1.5
  'notify_admin_email_body' => 'Un Nouvel Utilisateur s\'est inscrit dans votre Galerie, sous le nom &quot;%s&quot;',
  'pic_count' => 'Fichiers tétéchargés', //cpg1.4
  'notify_admin_request_email_subject' => '%s - Demande d\'enregistrement', //cpg1.4
  'thank_you_admin_activation' => 'Merci.<br /><br />Votre requête d\'activation du Compte a été envoyé à l\'Administrateur. Vous recevrez un courriel si votre inscription est approuvé.', //cpg1.4
  'acct_active_admin_activation' => 'Le Compte est maintenant actif et un courriel a été envoyé à l\'Utilisateur.', //cpg1.4
  'notify_user_email_subject' => '%s - Notification d\'activation', //cpg1.4
  'delete_my_account' => 'Effacez mon Compte Utilisateur', // cpg1.5
  'warning_delete' => 'Attention : L\'effacement du compte est définitif. Les %sfichiers que vous avez placés%s dans les Albums publics et vos %sCommentaires%s ne seront pas effacés lors de la suppression de votre Compte Utilisateur !<br> Par contre, les fichiers que vous avez placés dans votre Galerie Personnelle seront effacés.', // cpg1.5 // The %s-placeholders mustn't be removed, they will later be replaced by the wrappers for the links
  'i_am_sure' => 'Je suis certain de vouloir effacer mon Compte Utilisateur', // cpg1.5
  'really_delete' => 'Voulez-vous vraiment effacer votre Compte Utilisateur ?', // cpg1.5 //JS-Alert
  'edit_xs_profile' => 'Editer le profil de %s', // cpg1.5
  'edit_my_profile' => 'Editer mon profil', // cpg1.5
  'none' => 'aucun', // cpg1.5
);
$lang_register_confirm_email = <<<EOT
Merci pour votre inscription sur {SITE_NAME}.
Pour activer ce Compte avec ce Nom d'Utilisateur &quot;{USER_NAME}&quot;, vous devez cliquer sur le lien ci-dessous ou le copier dans la barre d'adresse de votre navigateur.
<a href="{ACT_LINK}">{ACT_LINK}</a>


Cordialement,

L'Administrateur de {SITE_NAME}
EOT;
$lang_register_approve_email = <<<EOT
Un Nouvel Utilisateur avec ce pseudonyme &quot;{USER_NAME}&quot; s'est inscrit dans votre Galerie.
Pour activer ce Compte, vous devez cliquer sur le lien ci-dessous ou le copier et le coller dans la barre d'adresse de votre navigateur.
<a href="{ACT_LINK}">{ACT_LINK}</a>
EOT;
$lang_register_activated_email = <<<EOT
Votre Compte a été approuvé et activé.

Vous pouvez maintenant vous connecter <a href="{SITE_LINK}">{SITE_LINK}</a> en utilisant ce Nom d\'Utilisateur &quot;{USER_NAME}&quot;


Cordialement,

L'administrateur de {SITE_NAME}
EOT;
}

// ----------------------- //
// File reviewcom.php
// ----------------------- //
if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
  'title' => 'Vérifiez les Commentaires',
  'no_comment' => 'Il n\'y a pas de Commentaire à vérifier',
  'n_comm_del' => '%s Commentaire(s) supprimé(s)',
  'n_comm_disp' => 'Nombre de Commentaires à afficher',
  'see_prev' => 'Voir précédent(s)',
  'see_next' => 'Voir suivant(s)',
  'del_comm' => 'Supprimer les Commentaires sélectionnés',
  'user_name' => 'Nom', //cpg1.4
  'date' => 'Date', //cpg1.4
  'comment' => 'Commentaire', //cpg1.4
  'file' => 'Fichier', //cpg1.4
  'name_a' => 'Nom d\'Utilisateur ascendant', //cpg1.4
  'name_d' => 'Nom d\'Utilisateur descendant', //cpg1.4
  'date_a' => 'Date ascendante', //cpg1.4
  'date_d' => 'Date descendante', //cpg1.4
  'comment_a' => 'Commentaire du message ascendant', //cpg1.4
  'comment_d' => 'Commentaire du message descendant', //cpg1.4
  'file_a' => 'Fichier ascendant', //cpg1.4
  'file_d' => 'Fichier descendant', //cpg1.4
  'approval_a' => 'Approbation ascendant', // cpg1.5.x
  'approval_d' => 'Approbation descendant', // cpg1.5.x
  'n_comm_appr' => '%s Commentaire(s) approuvé(s)', // cpg1.5.x
  'n_comm_disappr' => '%s Commentaire(s) désapprouvé(s)', // cpg1.5.x
  'configuration_changed' => 'Changement de la Configuration des approbations', // cpg1.5.x
  'only_approval' => 'N\'affichez que les Commentaires nécessitant une approbation', // cpg1.5.x
  'approval' => 'Approuvé', // cpg1.5.x
  'save_changes' => 'Sauvegarde les changements', // cpg1.5.x
  'n_confirm_delete' => 'Voulez-vous réellement effacer le(s) Commentaire(s) sélectionné(s)?', // cpg1.5.x
  'with_selected' => 'Pour la sélection', // cpg1.5.x
  'delete' => 'effacez', // cpg1.5.x
  'approve' => 'approuvez', // cpg1.5.x
  'disapprove' => 'désapprouvez', // cpg1.5.x
  'comment_approved' => 'Commentaire approuvé', // cpg1.5.x
  'comment_disapproved' => 'Commentaire désapprouvé', // cpg1.5.x
  'ban_and_delete' => 'Bannir l\'utilisateur et effacer les commentairesBan user and delete comment(s)', // cpg1.5
);

// ------------------------------------------------------------------------- //
// File sidebar.php
// ------------------------------------------------------------------------- //

if (defined('SIDEBAR_PHP')) $lang_sidebar_php = array(
  'sidebar' => 'Marque page', // cpg1.5
  'install' => 'installation', // cpg1.5
  'install_explain' => 'Parmis les methodes d\'accès rapide aux informations du site, nous vou sproposons des signets pour la plupart des navigateurs utilisés par les systèmes d\'exploitationpour accéder rapidement à une page. Vous trouverez ici les informations d\'installation et de paramétrage pour les navigateurs supportés.', // cpg1.5
  'os_browser_detect' => 'Detection de votre systèmes d\'exploitation et de votre navigateur', // cpg1.5
  'os_browser_detect_explain' => 'Le script est en train d\'essayer de détecter la version de votre navigateur et de votre système d\'exploitation - Veuillez attendre un instant. Si l\'autodétection échoue, vous devrez %sactiver%s manuellement toutes les options possibles de volets latéraux.', // cpg1.5
  'mozilla' => 'Mozilla, Firefox, Netscape 6+, Konqueror 3.2+', // cpg1.5
  'mozilla_explain' => 'Si vous utilisez Mozilla 0.9.4 ou plus récent, vous pouvez %sajouter votre signet à votre jeu%s. Vous pouvez la désintaller en utilisant la boite de dialogue "Panneau latéral personnalisé" de Mozilla.', // cpg1.5
  'ie_mac' => 'Internet Explorer 5 et suivants sur  Mac OS', // cpg1.5
  'ie_mac_explain' => 'Si vous utilisez Internet Explorer 5 ou suivant sur MacOS, %souvrez la page de signets%s dans une fenêtre séparée. Dans cette fenêtre ouvrez l\'onglet "Marque Page" sur le côté gauche de la fenêtre. Cliquez sur "Ajouter." Si vous souhaitez le garder pour un usage futur, cliquez sur "Favorits" et sélectionnez "Ajouter à mes Marques Pages Favorits."', // cpg1.5
  'ie_win' => 'Internet Explorer 5 et suivants sur Windows', // cpg1.5
  'ie_win_explain' => 'Si vous utilisez Internet Explorer 5 et suivants avec Windows, Vous pouvez ajouter le signet dan votre barre de liens ou l\'ajouter dans vos favorits et en cliquant dessus,vous verrez notre barre affichée à la place de votr ebarre de recherche habituelle en faisant un click droit %sici%s et en sélectionnant "Ajouter à mes favorits" depuis le menu contextuel. Ce lien n\'installe par notre barre de recherche par défaut, il n\'y a donc pas de modifications faites sur votre système.', // cpg1.5
  'ie7_win' => 'Internet Explorer 7 avec Windows XP/Vista', // cpg1.5
  'ie7_win_explain' => 'Si vous utilisez Explorer 7 sur Windows, vous pouvez ajouter une fenêtre pop-up à votre barre de navigation ou vous pouvez l\'ajouter à vos favorits en cliquant dessus vous verrez notre barre affichée comme uen fenêtre pop-up en faisant un click droit %sici%s et en sélectionnat "Ajouter aux favorits" depuis le menu contextuel. Dans les précédents versins de IE, il était impossible d\'ajouter une barre marque page personnelle, mais avec IE7 vous ne pouvez pas le faire sans paliquer des modifications à la base de registre. Il est recommandé d\'utiliser un autre navigateur si vous voulez utiliser cette barre de marque page.', // cpg1.5
  'opera' => 'Opera 6 et suivants', // cpg1.5
  'opera_explain' => 'Si vous utilisez Opera, vous pouvez cliquer  %ssur ce lien pour ajouter notre marque page à votre jeuxt%s. Cochez "Montrer dans le panneaul" . Vous pouvez désinstaller les marques page en faisant un click droit sur son onglet et en choisissant "Effacer" dans le menu contextuel.', // cpg1.5
  'additional_options' => 'Options supplémentaires', // cpg1.5
  'additional_options_explain' => 'Si vous avez un autre navigateur que ceus mentinnée plus haut, cliquez %sici%s pour afficher toutes les options possibles.', // cpg1.5
  'cannot_add_sidebar' => 'Le Signet ne peut pas être ajouté! Votre navigateur ne supporte pas cette methode!', // cpg1.5 // js-alert
  'search' => 'Chercher', // cpg1.5
  'reload' => 'Recharger', // cpg1.5
);


// ----------------------- //
// File search.php
// ----------------------- //
if (defined('SEARCH_PHP')){
$lang_search_php = array(
   'title' => 'Chercher dans les fichiers', //cpg1.4
  'submit_search' => 'cherchez', //cpg1.4
  'keyword_list_title' => 'Liste de Mots Clefs', //cpg1.4
  'keyword_msg' => 'Cette liste n\'est pas exhaustive . Elle ne comprends pas les Mots inclus dans les Titres et les Descriptions des photos. Essayez une recherche sur une phrase.',  //cpg1.4
  'edit_keywords' => 'Editez les mots-clés', //cpg1.4
  'search in' => 'Cherchez dans :', //cpg1.4
  'ip_address' => 'Adresse IP', //cpg1.4
  'imgfields' => 'Cherchez parmis les images',
  'albcatfields' => 'Cherchez dans les Albums et les Catégories',
  'age' => 'Age', //cpg1.4
  'newer_than' => 'Nouveau depuis', //cpg1.4
  'older_than' => 'Ancien depuis', //cpg1.4
  'days' => 'jours', //cpg1.4
  'all_words' => 'Cherchez TOUS les mots (AND)', //cpg1.4
  'any_words' => 'Cherchez AU MOINS un mot (OR)', //cpg1.4
  'regex' => 'Correspond aux expressions régulières',
  'album_title' => 'Titre de l\Album',
  'category_title' => 'Titre de la Catégorie',
);
}

// ----------------------- //
// File searchnew.php
// ----------------------- //
if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
  'page_title' => 'Recherchez les Nouvelles Photos',
  'select_dir' => 'Sélectionnez le répertoire',
  'select_dir_msg' => 'Cette fonction vous permet d\'ajouter un groupe de photos que vous avez uploadé sur votre serveur FTP.<br /><br />Sélectionnez le répertoire où vous avez uploadé vos photos',
  'no_pic_to_add' => 'Il n\'y a pas de photo à ajouter',
  'need_one_album' => 'Vous avez besoin d\'au moins un Album pour effectuer cette opération',
  'warning' => 'Avertissement',
  'change_perm' => 'Coppermine ne peut pas écrire dans ce répertoire, vous devez changer ses permissions à 755 ou 777 avant d\'essayer d\'ajouter les photos&nbsp;!',
  'target_album' => '<b>Mettre les photos de &quot;</b>%s<b>&quot; dans </b>%s',
  'folder' => 'Répertoire',
  'image' => 'fichier',
  'result' => 'Résultat',
  'dir_ro' => 'Non inscriptible. ',
  'dir_cant_read' => 'Illisible. ',
  'insert' => 'Ajouter de nouvelles images à la Galerie',
  'list_new_pic' => 'Liste des nouvelles images',
  'insert_selected' => 'Insérer les photos sélectionnées',
  'no_pic_found' => 'Aucun nouveau fichier n\'a été trouvé',
  'be_patient' => 'Soyez patient. Coppermine a besoin de temps pour mettre les photos en ligne',
  'no_album' => 'Aucun album sélectionné',
  'result_icon' => 'Cliquez pour voir les détails ou pour les recharger',  //cpg1.4
  'notes' =>  '<ul>'.
                          '<li><b>OK</b> : signifie que le fichier a été ajouté avec succès'.
                          '<li><b>DP</b> : signifie que le fichier est un doublon et existe déjà dans la Base de Données'.
                          '<li><b>PB</b> : signifie que le fichier n\'a pas pu être ajouté, vérifiez votre Configuration et les droits (CHMOD) du répertoire de destination du fichier'.
                          '<li><b>NA</b> : signifie que vous n\'avez pas sélectionné d\'Album de destination pour ce fichier, cliquez sur \'<a href="javascript:history.back(1)">retour</a>\' et sélectionnez un Album. Si vous n\'avez pas encore d\'Album pour y placer vos fichiers, <a href="albmgr.php">créez-en un avant de poursuivre</a></li>'.
                          '<li>Si les signes <b>OK</b>, <b>DP</b>, <b>PB</b> n\'apparaissent pas, cliquez sur le lien brisé afin de voir le message d\'erreur généré par PHP.'.
                          '<li>Si votre navigateur vous indique un dépassement de durée, cliquez sur &quot;Actualiser&quot;.'.
                          '</ul>',
  'check_all' => 'Tout cocher', //cpg1.3.0
  'uncheck_all' => 'Tout décocher', //cpg1.3.0
  'no_folders' => 'Il n\'y a actuellement pas de sous-répertoire dans le répertoire &quot;Albums&quot;. Vérifiez que vous avez bien créé un sous-répertoire dans le répertoire &quot;Albums&quot; et uploadez-y vos fichiers avec votre client FTP (fillezilla ou SmartFPT) Vous ne devez pas uploader dans les répertoires &quot;userpics&quot; ou &quot;edit&quot; , ils sont réservés pour les uploads en HTML ou pour des traitements internes.', //cpg1.4
   'browse_batch_add' => 'Interface d\'exploration (recommandé)', //cpg1.4
  'display_thumbs_batch_add' => 'Afficher les vignettes de prévisualisation', //cpg1.5
  'edit_pics' => 'Editer les fichiers', //cpg1.4
  'edit_properties' => 'Propriétés de l\'Album', //cpg1.4
  'view_thumbs' => 'Voir les Vignettes', //cpg1.4
  'add_more_folder' => 'Ajouter plus de fichiers depuis le répertoire %s', //cpg1.5


);

// ----------------------- //
//File send_activation.php
// ----------------------- //




if (defined('SEND_ACTIVATION_PHP')) $lang_send_activation_php = array(
  'err_already_logged_in' => 'Vous êtes déjà identifié !', //cpg1.5
  'activation_not_required' => 'Ce site ne nécessite pas d\'activation par courriel', //cpg1.5
  'err_unk_user' => 'L\'Utilisateur sélectionné n\'existe pas!', //cpg1.5
  'resend_act_link' => 'Renvoyer le lien d\'activation', //cpg1.5
  'enter_email' => 'Entrez votre adresse courriel', //cpg1.5
  'submit' => 'Envoyez', //cpg1.5
  'failed_sending_email' => 'Erreur dans l\'envoi du courriel avec le lien d\'activation', //cpg1.5
  'activation_email_sent' => 'Un courriel avec le lien d\'activation a été envoyé à %s. Vérifiez vos courriels pour terminer le processus d\'activation', //cpg1.5
);

// ----------------------- //
// File stat_details.php
// ----------------------- //
if (defined('STAT_DETAILS_PHP')) $lang_stat_details_php = array(
  'show_hide' => 'affichez / cachez cette colonne', //cpg1.4
  'title' => 'Détails des Statisiques', //cpg1.5
  'vote' => 'Détails des Votes', //cpg1.4
  'hits' => 'Détails des Hits', //cpg1.4
  'stats' => 'Statistiques des Votes', //cpg1.4
  'users' => 'Statistiques des Utilisateurs',//cpg1.5
  'sdate' => 'Date', //cpg1.4
  'rating' => 'Vote', //cpg1.4
  'search_phrase' => 'Phrase de recherche', //cpg1.4
  'referer' => 'Référant', //cpg1.4
  'browser' => 'Navigateur', //cpg1.4
  'os' => 'Système d\'exploitation', //cpg1.4
  'ip' => 'IP', //cpg1.4
  'uid' => 'Utilisateur', //cpg1.5
  'sort_by_xxx' => 'Classer par %s', //cpg1.4
  'ascending' => 'ascendant', //cpg1.4
  'descending' => 'descendant', //cpg1.4
  'internal' => 'interne', //cpg1.4
  'close' => 'fermer', //cpg1.4
  'hide_internal_referers' => 'cacher les attributs internes', //cpg1.4
  'date_display' => 'Date d\'affichage', //cpg1.4
  'records_per_page' => 'Enregistrements par page',
  'submit' => 'soumettre / actualiser', //cpg1.4
  'overall_stats' => 'Statistiques générales', //cpg1.5
  'stats_by_os' => 'Système d\'exploitation', //cpg1.5
  'number_of_hits' => 'Nombre de visites (hits)', //cpg1.5
  'total' => 'Total', //cpg1.5
  'stats_by_browser' => 'Navigateur', //cpg1.5
  'overall_stats_config' => 'Configuration des Statistiques Générales', //cpg1.5
  'hit_details'  => 'Gardez le détail des statistiques de visites', //cpg1.5
  'hit_details_explanation'  => 'Gardez le détail des statistiques de visites', //cpg1.5
  'vote_details'  => 'Gardez le détail des statistiques des votes', //cpg1.5
  'vote_details_explanation'  => 'Gardez le détail des statistiques de votes', //cpg1.5
  'empty_hits_table'  => 'Videz TOUTES les statistiques de visites', //cpg1.5
  'empty_hits_table_confirm'  => 'Etes-vous vraiement certain de vouloir effacer TOUTES les statistiques de visite pour TOUTE la Galerie ?<br /> Cette action ne peut pas être annulée !', //cpg1.5 //JS-Alert
  'empty_votes_table'  => 'Effacez TOUTES les statistiques de vote', //cpg1.5
  'empty_votes_table_confirm'  => 'Etes-vous vraiment certain de vouloir effacer TOUTES les statistiques de vote pour TOUTE votre Galerie ?<br /> Cette action ne peut pas être annulée!', //cpg1.5 //JS-Alert
  'submit'  => 'Envoyez', //cpg1.5
  'upd_success' => 'La Configuration de Coppermine a été mise à jour', //cpg1.5
  'votes' => 'votes', //cpg1.5
  'reset_votes_individual' => 'Réinitialisation du(des) vote(s) sélectionné(s)', //cpg1.5
  'reset_votes_individual_confirm' => 'Etes-vous ceratin de vouloir effacer le(s) Vote(s) sélectionné(s)?<br /> Cette action ne peut pas être annulée!', //cpg1.5
  'back_to_intermediate' => 'Retour sur l\'affichage des images intermédiaires', //cpg1.5
  'records_on_page' => '%s enregistrements sur %s page(s)', //cpg1.5
  'guest' => 'Visiteur', //cpg1.5
  'not_implemented' => 'Pas encore implémenté', //cpg1.5

);



// ----------------------- //
// File upload.php
// ----------------------- //




if (defined('UPLOAD_PHP')) $lang_upload_php = array(
  'title' => 'Uploader un fichier',
  'custom_title' => 'Formulaire de requête personnalisée',
  'cust_instr_1' => 'Vous pouvez sélectionner un nombre personnalisé de boxes d\'uploads, dans la limite listée ci-dessous.',
  'cust_instr_2' => 'Nombre de cases de requête',
  'cust_instr_3' => 'Cases d\'uploads de fichier : %s',
  'cust_instr_4' => 'Cases d\'uploads URI/URL : %s',
  'cust_instr_5' => 'Cases d\'uploads URI/URL :',
  'cust_instr_6' => 'Cases d\'uploads de fichier :',
  'cust_instr_7' => 'Merci de saisir le nombre de chaque type de cases d\'uploads désiré. Ensuite cliquez sur \'CONTINUEZ\'. ',
  'reg_instr_1' => 'Action invalide pour la création du formulaire.',
  'reg_instr_2' => 'Vous pouvez maintenant uploader vos fichiers en utilisant les cases d\'upload ci-dessous. Le poids des fichiers uploadés de votre fichier vers le serveur ne peut excéder %s Ko chacun. Les fichiers ZIP uploadés dans les sections \'Upload de fichier\' et \'Upload URI/URL\' resteront compressés.',
  'reg_instr_3' => 'Si vous souhaitez que le fichier soit décompressé, vous devez utiliser la case de téléchargement fournie dans la zone \'Upload de ZIP décompressible.\'',
  'reg_instr_4' => 'Si vous utilisez la section d\'upload URI/URL, saisissez l\'adresse du fichier de la forme http://www.votre-site.com/images/exemple.jpg',
  'reg_instr_5' => 'Lorsque le formulaire est complété, cliquez sur \'CONTINUEZ\'.',
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
  'exc_file_size' => 'Le poids excède celui permis par l\'Admin de la Galerie Coppermine.',
  'partial_upload' => 'Upload partiel uniquement.',
  'no_upload' => 'L\'upload ne s\'est pas effectué.',
  'unknown_code' => 'Code d\'erreur d\'upload PHP inconnu.',
  'no_temp_name' => 'Pas d\'upload - Pas de dossier temporaire.',
  'no_file_size' => 'Pas de données ou données endommagées',
  'impossible' => 'Impossible à déplacer.',
  'not_image' => 'Pas une image ou image endommagée',
  'not_GD' => 'N\'est pas une extension GD.',
  'pixel_allowance' => 'La hauteur et/ou la largeur de l\'image uploadée est plus grande que celle permise dans la configuration de la Galerie.', //cpg1.4
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
  'success' => '%s upload(s) effectué(s) avec succès.',
  'add' => 'Cliquez sur \'CONTINUEZ\' pour ajouter les fichiers aux Albums.',
  'failure' => 'Erreur d\'upload',
  'f_info' => 'Information du fichier',
  'no_place' => 'Le fichier précédent n\'a pas pu être placé.',
  'yes_place' => 'Le fichier précédent a été placé avec succès',
  'max_fsize' => 'Le poids maximal autorisé pour une image est de %s Ko',
  'picture' => 'File',
  'pic_title' => 'Titre du fichier',
  'description' => 'Description du fichier',
  'keywords_sel' =>'Choisissez un Mot-Clef', //cpg1.4
  'err_no_alb_uploadables' => 'Désolés, mais il n\'existe pas d\'Album dans lequel vous avez le droit d\'uploader des photos',
  'place_instr_1' => 'Merci de placer les fichiers dans les Albums maintenant.  Vous pouvez aussi saisir les informations de chaque fichier.',
  'place_instr_2' => 'D\'autres fichiers doivent être placés. Merci de cliquer sur \'CONTINUEZ\'.',
  'process_complete' => 'Vous avez placé tous les fichiers avec succès.',
  'close' => 'Fermez', //cpg1.4
  'no_keywords' => 'Désolé, aucun Mot-Clef disponible&nbsp;!', //cpg1.4
  'regenerate_dictionary' => 'Regénérez le dictionnaire', //cpg1.4
  'allowed_types' => 'Vous pouvez à télécharger des fichiers avec les extensions suivantesYou are allowed to upload files with the following extensions:', // cpg1.5
  'allowed_img_types' => 'Extensions d\'Image: %s', // cpg1.5
  'allowed_mov_types' => 'Extensions Video: %s', // cpg1.5
  'allowed_doc_types' => 'Extension de Document: %s', // cpg1.5
  'allowed_snd_types' => 'Extensions Audio: %s', // cpg1.5
  'please_wait' => 'Merci de patienter pendant que le script télécharge - cela peut prendre plusieurs minutes', // cpg1.5
  'alternative_upload' => 'Methode de téléchargement alternative', // cpg1.5
  'xp_publish_promote' => 'Si vous utilisez Windows XP/Vista, vous pouvez utiliser l\'assitant de publication Web de Windows XP pour téléchrger des fichiers, apportant ainsi une interface utilisateur plus simple.', // cpg1.5
  'more' => 'plus', // cpg1.5
);

// ----------------------- //
// File usermgr.php
// ----------------------- //
if (defined('USERMGR_PHP')) {
$lang_usermgr_php = array(
  'memberlist' => 'Liste des Membres', //cpg1.4
  'user_manager' => 'Gestion Utilisateurs', //cpg1.4
  'title' => 'Gérez les Utilisateurs',
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
  'lv_a' => 'Dernière Visite ascendante',
  'lv_d' => 'Dernière Visite descendante',
  'sort_by' => 'Classez les Utilisateurs par',
  'err_no_users' => 'La Table MySQL des Utilisateurs est vide!',
  'err_edit_self' => 'Vous ne pouvez pas modifier votre propre Profil, utilisez le lien \'Mon Profil\' pour effectuer cette opération',
  'with_selected' => 'Sélectionnez :', //cpg1.4
  'delete_files_no' => 'gardez le fichiers publics (mais les laisser anonymes)', //cpg1.4
  'delete_files_yes' => 'effacez les fichiers publics', //cpg1.4
  'delete_comments_no' => 'gardez les Commentaires(mais les laisser anonymes)', //cpg1.4
  'delete_comments_yes' => 'effacez les Commentaires', //cpg1.4
  'activate' => 'Activez', //cpg1.4
  'deactivate' => 'Désactivez', //cpg1.4
  'reset_password' => 'Changez le Mot de Passe', //cpg1.4
  'change_primary_membergroup' => 'Changez de Groupe Principal', //cpg1.4
  'add_secondary_membergroup' => 'Ajouter un Groupe Secondaire', //cpg1.4
  'name' => 'Nom d\'Utilisateur',
  'group' => 'Groupe',
  'inactive' => 'Inactif',
  'operations' => 'Opérations',
  'pictures' => 'Fichiers',
  'disk_space_used' => 'Espace utilisé', //cpg1.4
  'disk_space_quota' => 'Espace alloué', //cpg1.4
  'registered_on' => 'Enregistré le',
  'last_visit' => 'Dernière visite',
  'u_user_on_p_pages' => '%d Utilisateur(s) sur %d page(s)',
  'confirm_del' => 'Voulez vous vraiment SUPPRIMER cet Utilisateur?\\nToutes ses photos et Albums seront également supprimés.', //js-alert
  'mail' => 'MAIL',
  'err_unknown_user' => 'L\'Utilisateur sélectionné n\'existe pas!',
  'modify_user' => 'Modifiez l\'Utilisateur',
  'notes' => 'Notes',
  'note_list' => '<li>Si vous ne souhaitez pas modifier le Mot de Passe actuel, laisse le champs &quot;Mot de Passe&quot; vide.',
  'password' => 'Mot de Passe',
  'user_active' => 'L\'Utilisateur est actif',
  'user_group' => 'Groupe de l\'Utilisateur',
  'user_email' => 'Courriel de l\'Utilisateur',
  'user_web_site' => 'Site web de l\'Utilisateur',
  'create_new_user' => 'Créez un nouvel Utilisateur',
  'user_location' => 'Localisation de l\'Utilisateur',
  'user_interests' => 'Centres d\'intérêt de l\'Utilisateur',
  'user_occupation' => 'Activité de l\'Utilisateur',
  'user_profile1' => '$user_profile1', //cpg1.4
  'user_profile2' => '$user_profile2', //cpg1.4
  'user_profile3' => '$user_profile3', //cpg1.4
  'user_profile4' => '$user_profile4', //cpg1.4
  'user_profile5' => '$user_profile5', //cpg1.4
  'user_profile6' => '$user_profile6', //cpg1.4
  'latest_upload' => 'Derniers uploads',
  'no_latest_upload' => 'N\'a pas fait de téléchargements', // cpg1.5
  'last_comments' => 'Derniers commentaires', // cpg1.5
  'no_last_comments' => 'N\'a pas fait de commentaires', // cpg1.5
  'comments' => 'Commentairess', // cpg1.5
  'never' => 'jamais',
  'search' => 'Cherchez un Utilisateur', //cpg1.4
  'submit' => 'Soumettre', //cpg1.4
  'search_submit' => 'Validez !', //cpg1.4
  'search_result' => 'Résultat de recherche pour : ', //cpg1.4
  'alert_no_selection' => 'vous devez d\\\'abord sélectionner un Utilisateur!', //cpg1.4 //js-alert
  'select_group' => 'Sélectionnez un Groupe', //cpg1.4
  'groups_alb_access' => 'Droits sur les Albums pour le Groupe', //cpg1.4
  'category' => 'Catégorie', //cpg1.4
  'modify' => 'Modifiez ?', //cpg1.4
  'group_no_access' => 'Ce Groupe n\'a pas d\'accès spécial', //cpg1.4
  'notice' => 'Attention', //cpg1.4
  'group_can_access' => 'Accès réservé au Groupe &quot;%s&quot;', //cpg1.4
  'send_login_data' => 'Envoyez les paramètres d\'identification à cet Utilisateur (le Mot de Passe sera envoyé par courriel)', //cpg1.5
  'send_login_email_subject' => 'Vos nouveaux paramètres d\'identification pour votre Compte', //cpg1.5
  'failed_sending_email' => 'Le courriel avec les paramètres d\'identification ne peut pas être envoyé!', //cpg1.5
  'view_profile' => 'Voir le profil', // cpg1.5
  'edit_profile' => 'Modifer le profil', // cpg1.5
  'ban_user' => 'Bannir l\'utilisateur', // cpg1.5
  'status' => 'Statut', // cpg1.5
  'status_active' => 'actif', // cpg1.5
  'status_inactive' => 'non actif', // cpg1.5
  'total' => 'Total', // cpg1.5
);
$lang_send_login_data_email = <<<EOT
Votre nouveau Compte a été crée pour vous sur {SITE_NAME}.

Vous pouvez maintenant vous identifier sur <a href="{SITE_LINK}">{SITE_LINK}</a> avec comme Nom d'Utilisateur "{USER_NAME}" et comme Mot de Passe  "{USER_PASS}"
Cordialement,

l'Administrateur de {SITE_NAME}



EOT;
}

// ----------------------- //
// File uppdate.php
// ------------------------------------------------------------------------- //

if (defined('UPDATE_PHP')) {
$lang_update_php = array(
  'title' => 'Mise à jour', // cpg1.5
  'welcome_updater' => 'Bienvenue dans la mise à jour de Coppermine', // cpg1.5
  'could_not_authenticate' => 'Impossible de vous identifier', // cpg1.5
  'provide_admin_account' => 'Merci de donner vos informations pour votre compte administrateur ou pour la connection à la base de donnée mySQL', // cpg1.5
  'try_again' => 'Essayez encore', // cpg1.5
  'mysql_connect_error' => 'Impossiblede créer une connection mySQL', // cpg1.5
  'mysql_database_error' => 'mySQL ne peut pas trouver la base de donnée %s', // cpg1.5
  'mysql_said' => 'MySQL dit', // cpg1.5
  'check_config_file' => 'Merci de vérifier les données SQL dans %s', // cpg1.5
  'performing_database_updates' => 'Mise à jour de la base de donnée', // cpg1.5
  'performing_file_updates' => 'Mise à joure des fichiers', // cpg1.5
  'already_done' => 'Déjà fait', // cpg1.5
  'password_encryption' => 'Cryptage du Mot de Passe', // cpg1.5
  'alb_password_encryption' => 'Cryptage du mot de passe album', // cpg1.5
  'category_tree' => 'Arborescence des catérories', // cpg1.5
  'authentication_needed' => 'Authenticafication requise', // cpg1.5
  'username' => 'Nom d\'utilisateur', // cpg1.5
  'password' => 'Mot de Passe', // cpg1.5
  'update_completed' => 'Mise à jour complête', // cpg1.5
  'check_versions' => 'Il est recommandé de %svérifier la version de vos fichiers%s si vous venez juste de mettre à jour depuis une ancienne version de Coppermine', // cpg1.5 // Leave the %s untouched when translating - it wraps the link
  'start_page' => 'Si vous ne le faites pas( ou si vous ne voulez pas le faire), vous pouvez aller %ssur la page d\'accueil de votre galerie%s', // cpg1.5 // Leave the %s untouched when translating - it wraps the link
  'errors_encountered' => 'Les erreurs suivantes sont survenues et doivent être corrigées d\'abbord', // cpg1.5
  'delete_file' => 'Effacer %s', // cpg1.5
  'could_not_delete' => 'Impossible d\'effacer à cause des permissions. Effacez le fichier manuellement!', // cpg1.5
);
}

// ------------------------------------------------------------------------- //
// File util.php
// ----------------------- //
if (defined('UTIL_PHP')) {



$lang_util_php = array(
  'title' => 'Utilitaires d\'Administration (Redimensionnement des images)',
  'file' => 'Fichier',
  'problem' => 'Probleme', //cpg1.4
  'status' => 'Statut', //cpg1.4
  'title_set_to' => 'titre changé en',
  'submit_form' => 'soumettre',
  'titles_updated' => '%s Titres mis à jour.', // cpg1.5
  'updated_succesfully' => 'mise à jour effectuée avec succès',
  'error_create' => 'ERREUR lors de la création',
  'continue' => 'Traitez d\'autres images',
  'main_success' => 'Le fichier %s est maintenant utilisé comme image principale',
  'error_rename' => 'Erreur lors du changement du nom de %s à %s',
  'error_not_found' => 'Le fichier %s n\'a pas été trouvé',
  'back' => 'retour à la page principale',
  'thumbs_wait' => 'Mise à jour des vignettes et/ou images redimensionnées, merci de patienter...',
  'thumbs_continue_wait' => 'CONTINUEZ la mise à jour des vignettes et/ou des images redimensionnées...',
  'titles_wait' => 'Mise à jour des titres, merci de patienter...',
  'delete_wait' => 'Suppression des titres, merci de patienter...',
  'replace_wait' => 'Suppression des originaux et remplacement de ces derniers par les images redimensionnées, merci de patienter...',
  'update' => 'Mettre à jour les Vignettes et/ou les photos redimensionnées',
  'update_what' => 'Ce qui devrait être mis à jour',
  'update_thumb' => 'Seulement les Vignettes',
  'update_pic' => 'Seulement les photos redimensionnées',
  'update_both' => 'Les Vignettes et les images redimensionnées',
  'update_number' => 'Nombre d\'images traitées par clic',
  'update_option' => '(essayez de réduire cette valeur si vous avez des problèmes de timeout)',
  'filename_title' => 'Nom du fichier / Titre de l\'image',
  'filename_how' => 'Comment le nom du fichier doit-il être modifié ?',
  'filename_remove' => 'Supprimez la fin .jpg et remplacer _ (underscore) par des espaces',
  'filename_euro' => 'Changez 2003_11_23_13_20_20.jpg en 23/11/2003 13:20',
  'filename_us' => 'Changez 2003_11_23_13_20_20.jpg en 11/23/2003 13:20',
  'filename_time' => 'Changez 2003_11_23_13_20_20.jpg en 13:20',
  'notitle' => 'Appliquer uniquement aux fichiers sans titres', // cpg1.5
  'delete_title' => 'Supprimez le titre des photos',
  'delete_title_explanation' => 'Cela va effacer l\'ensemble des Titres des photos de l\'Album sélectionné.', //cpg1.4
  'delete_original' => 'Supprimez les photos dans leur taille d\'origine',
  'delete_original_explanation' => 'Cela va supprimer les photos à la taille d\'origine', //cpg1.4
  'delete_intermediate' => 'Supprimez les images intermédiaires', //cpg1.4
  'delete_intermediate_explanation1' => 'Celà va effacer les images intermédiaires (normale).', // cpg1.5
  'delete_intermediate_explanation2' => 'Utilisez cette option pour faire de laplace sur le disque si vous avez désactivé \'Créer des images intermédiaires \' dans la configuration après avoir ajouté des images.', // cpg1.5
  'delete_intermediate_check' => 'L\'option de la configuration \'Créer des images intérmédiares\' est actuellement %s.', // cpg1.5
  'no_image' => '%s a été ignoré parce que ce n\'est pas une image.', // cpg1.5
  'enabled' => 'activé', // cpg1.5
  'disabled' => 'désactivé', // cpg1.5
  'delete_replace' => 'Supprimez les images originales en les remplaçant par les versions redimensionnées',
  'titles_deleted' => 'Tous les Titres des images de l\'Album sélectionné sont effacés', //cpg1.4
  'deleting_intermediates' => 'Patientez : Effacement des images intermédiaires...', //cpg1.4
  'searching_orphans' => 'Patientez : recherche des commentaires orphelins...', //cpg1.4
  'delete_orphans' => 'Supprimez les Commentaires orphelins (fonctionne pour tous les Albums)', //cpg1.4
  'delete_orphans_explanation' => 'Cela va identifier tous les Commentaires qui ne sont plus associés à un fichier et vous permettre de les effacer.<br />Vérifie tous les Albums.', //cpg1.4
  'update_full_normal_thumb' => 'Tout... Images originales, Images intermédiaires, Vignettes', // cpg1.5
  'update_full_normal' => 'Les deux : Intermédiaires et taille originale (si une copie de l\'originale est disponible)', // cpg1.5
  'update_full' => 'Uniquement les images de taille originale (si une copie de l\'originale est disponible)',// cpg1.5
  'delete_back' => 'Effacez la copie de l\'image originale (watermark mod)', // cpg1.5
  'delete_back_explanation' => 'Celà va effacer la copie de l\'image originale. <br>Vous gagnerez ainsi de la place sur votre serveur mais ne pourrez pas annuler le filigrane de votre image par la suite !!! <br>Le filigrane sera permanent après cette opération', // cpg1.5
  'finished' => '<br />Terminer la mise à jour des Vignettes/Images!<br />', // cpg1.5
  'autorefresh' => ' Réactualisation automatique de la page (inutile de cliquer sur le bouton CONTINUEZ)<br /><br />', // cpg1.5
  'refresh_db' => 'Rechargez les informations de poids et de taille', //cpg1.4
  'refresh_db_explanation' => 'Cela va recharger les informations de poids et de taille. Utilisez cette fonction si les quotas sont incorrects ou si vous avez changé manuellement ces données.', //cpg1.4
  'reset_views' => 'Réinitialisation du compteur de vues', //cpg1.4
  'reset_views_explanation' => 'Met à zero le compteur de vue de l\'ensemble des fichiers de l\'Album sélectionné.', //cpg1.4
  'reset_succes' => 'Réinitialisation réussie', // cpg1.5
  'orphan_comment' => 'Pas de Commentaire ophelin trouvé', //cpg1.3.0
  'delete_all' => 'Tout supprimer',
  'delete_all_orphans' => 'Supprimer tous les commentaires orphelins ?', //cpg1.4
  'comment' => 'Commentaire : ',
  'nonexist' => 'Lié à un fichier innexistant # ',
  'delete_old' => 'Effacer les fichiers plus anciens qu\'un nombre de jours déterminé',  // cpg1.5
  'delete_old_explanation' => 'Cela va effacer les fichiers plus anciens que le nombre de jours que vous avez déterminé (images normael, intermediaires, vignettes). Utilisez cette fonction pour gagner le l\'espace disque.',  // cpg1.5
  'delete_old_warning' => 'Attention: Les fichiers sélectionnés seront effacés définitivement sans autres avertissements!',  // cpg1.5
  'deleting_old' => 'Effacement de images anciennes, Merci de patienter...',  // cpg1.5
  'older_than' => 'Effacer les fichiers plus vieux que %s jours',  // cpg1.5
  'del_orig' => 'L\'image originale %s a été effacée avec succès',  // cpg1.5
  'del_intermediate' => 'L\'image intermédiaire %s a été effacée avec succès',  // cpg1.5
  'del_thumb' => 'LA vignette %s a été effacée avec succès',  // cpg1.5
  'del_error' => 'Erreur d\'effacement de %s !',  // cpg1.5
  'affected_records' => '%s enrgistrements affectés.', // cpg1.5
  'all_albums' => 'Tous les Albums', // cpg1.5
  'update_result' => 'Résultats de la mise à jour', // cpg1.5
  'incorrect_filesize' => 'La taille totale de l\'image est incorrecte', // cpg1.5
  'database' => 'Base de donnée: ', // cpg1.5
  'bytes' => ' bytes', // cpg1.5
  'actual' => ' Actuel: ', // cpg1.5
  'updated' => 'Mis à jour', // cpg1.5
  'update_failed' => 'Echec de la Mise à jour.', // cpg1.5
  'filesize_error' => 'Impossible de trouver la taille du fichier (peut être un fichier invalide), ignore....', // cpg1.5
  'skipped' => 'Ignoré', // cpg1.5
  'incorrect_dimension' => 'Les dimensions sont incorrectes', // cpg1.5
  'dimension_error' => 'Impossible de trouver les informations de dimensions, ignore....', // cpg1.5
  'cannot_fix' => 'Ne peut pas corriger', // cpg1.5
  'fullpic_error' => 'Le fichier %s n\'existe pas!', // cpg1.5
  'no_prob_detect' => 'Pas de problèmes détectés', // cpg1.5
  'no_prob_found' => 'Pas de problèmes trouvés.', // cpg1.5
);
}

// ----------------------- //
// File versioncheck.php
// ----------------------- //
if (defined('VERSIONCHECK_PHP')) $lang_versioncheck_php = array(
 'title' => 'Vérification de version',
  'versioncheck_output' => 'Sortie du vérificateur de versionVersioncheck output',
  'file' => 'fichier',
  'folder' => 'répertoire',
  'outdated' => 'plus ancien que %s',
  'newer' => 'plus neuf que %s',
  'modified' => 'modifié',
  'not_modified' => 'non modifié', // cpg1.5
  'needs_change' => 'nécessite des changements',
  'review_permissions' => 'Revoir les permissions',
  'inaccessible' => 'Le Fichier est inaccessible',
  'review_version' => 'Votre Fichier est trop ancien',
  'review_dev_version' => 'Votre fichier est plus récent',
  'review_modified' => 'Le Fichier est peut être corrompu (ou vous l\'avez modifié délibérément)',
  'review_missing' => '%s manquant ou inaccessible',
  'existing' => 'existant',
  'review_removed_existing' => 'Le Fichier doit être effacé pour des raisons de sécurité',
  'counter' => 'Conteur',
  'type' => 'Type',
  'path' => 'Chemin',
  'missing' => 'Manquant',
  'permissions' => 'Permissions',
  'version' => 'Version',
  'revision' => 'Revision',
  'modified' => 'Modifié',
  'comment' => 'Commentaire',
  'help' => 'Aide',
  'repository_link' => 'Lien vers le Référenciel',
  'browse_corresponding_page_subversion' => 'Naviger vers la page correspondant à ce fichier dans le référenciel SVN du projet',
  'mandatory' => 'obligatoire',
  'mandatory_missing' => 'Fichier obligatoire manquant', // cpg1.5
  'optional' => 'optionnel',
  'removed' => 'effacé', // cpg1.5
  'options' => 'Options',
  'display_output' => 'Afficher la sortie',
  'on_screen' => 'Plein écran',
  'text_only' => 'Uniquement texte',
  'errors_only' => 'Montrer uniquement les erreurs potentielles',
  'hide_images' => 'Cche les images', // cpg1.5
  'no_modification_check' => 'Ne pas vérifier les fichiers modifiés', // cpg1.5
  'do_not_connect_to_online_repository' => 'Ne pas se connecter au référenciel en ligne',
  'online_repository_explain' => 'uniquement recommandé si la connection échoue',
  'submit' => 'envoyer / rafraîchir',
  'select_all' => 'Selectionner tout', // js-alert
  'files_folder_processed' => 'Affichage de %s items dans %s répertoires/fichiers avec %s problèmes potentiels',
  'read' => 'Lire', // cpg1.5
  'write' => 'Ecrire', // cpg1.5
  'warning' => 'Avertissement', // cpg1.5
  'not_applicable' => 'n/a', // cpg1.5 

);

// ----------------------- //
// File view_log.php
// ----------------------- //
if (defined('VIEWLOG_PHP')) $lang_viewlog_php = array(
  'delete_all' => 'Supprimez tous les logs', //cpg1.4
  'delete_this' => 'Supprimez ce log', //cpg1.4
  'view_logs' => 'Consultez les logs', //cpg1.4
  'no_logs' => 'Pas de log créé.', //cpg1.4
);


// ----------------------- //
// File xp_publish.php
// ----------------------- //
if (defined('XP_PUBLISH_PHP')) {


$lang_xp_publish_php = array(
  'title' => 'Coppermine - Assistant de Publication Web XP', //cpg1.4
  'client_header' => 'Assistant de publication Web XP',  // cpg1.5
  'requirements' => 'Requis', // cpg1.5
  'windows_xp' => 'Windows XP / Vista', // cpg1.5
  'no_windows_xp' => 'Vous semblez utiliser un autre système d\'exploitation non supporté', // cpg1.5
  'no_os_detect' => 'Impossible de définir votr esystème d\'exploitation', // cpg1.5
  'requirement_http_upload' => 'Une installation de Coppermine qui fonctionne et dans laquelle la fonction de téléchargement par http fonctionne', // cpg1.5
  'requirement_ie' => 'Microsoft Internet Explorer', // cpg1.5
  'requirement_permissions' => 'L\'administrateur de la galerie doit voir avoir donné les permissions de téléchargement', // cpg1.5
  'requirement_login' => 'Vous devez être identifié pour télécharger', // cpg1.5
  'no_ie' => 'Vous semblez utiliser une autre navigateur non supporté', // cpg1.5
  'no_browser_detect' => 'Impossible de détecter votre navigateur', // cpg1.5
  'no_gallery_name' => 'Vous devez spécifier un nom de galerie dans la configuration', // cpg1.5
  'no_gallery_description' => 'Vous devez spécifier une déscription pour la galerie dans la configutation', // cpg1.5
  'howto_install' => 'Comment installer', // cpg1.5
  'install_right_click' => 'Faites un click droit sur  %sce lien%s etsélectionner &quot;enregistre la cible sous...&quot;', // cpg1.5 // translator note: don't replace the %s - that placeholder token needs to go untranslated
  'install_save' => 'Sauvez ce fichier sur votre client. Lors de la sauvegarde du fichier, assurez vous que le nom proposé est <tt>cpg_###.reg</tt> ( ### représente un horodatage numérique). Modifier de cette manière si nécessaire (laissez le chiffres)', // cpg1.5
  'install_execute' => 'Une fois le téléchargement terminé, lancez le fichier en double-cliquant dessus afin d\'enregistrer votre serveur avec l\'assistant de publication Web',  // cpg1.5
  'usage' => 'Utilisation',  // cpg1.5
  'select_files' => 'Dans l\'Explorateur Windows, sélectionnez les fichiers que vous voulez télécharger', // cpg1.5
  'display_tasks' => 'Assurez vous que les répertoires ne sont pas affichés dans le panneau latéral de l\'explorateur', // cpg1.5
  'publish_on_the_web' => 'cliquez sur &quot;Publier xxx sur le web&quot; dans le panneau de gauche', // cpg1.5
  'confirm_selection' => 'Confirmez votr esélection de fichiers', // cpg1.5
  'select_service' => 'Dans la liste des options qui apparaisent, sélectionez celle pour votre galerie photo (elle a le nom e votre galerie)', // cpg1.5
  'enter_login' => 'Entrez vos informations d\'identification si demandées', // cpg1.5
  'select_album' => 'Sélectionnez l\'album cible pour vos images ou créez en un nouveau', // cpg1.5
  'next' => 'Cliquez sur &quot;suivant&quot;', // cpg1.5
  'upload_starts' => 'Le téléchargement de vos fichiers devrait démarer', // cpg1.5
  'upload_completed' => 'Lorsqu\'il est terminé, vérifiez dans votre galerie si les fichiers ont bien été ajoutés correctement', // cpg1.5
  'welcome' => 'Bienvenue <strong>%s</strong>,',
  'need_login' => 'Vous devez vous identifier en utilisant Internet Explorer avant de pouvoir utiliser cet asisant.<p/><p>Lors de votre identification, n\'oubliez pas de sélectionner l\'option &quot;se souvenir de moi&quot; si elle est présente.',
  'no_alb' => 'Désolé, mais il n\'y a pas d\'albums où vous êtes autorisés à télécharger des images avec cet assistant.',
  'upload' => 'Téléchargez vos images dans un album existant',
  'create_new' => 'Créez un nouvel album pour vos images',
  'category' => 'Categorie',
  'new_alb_created' => 'Votre nouvel album &quot;<strong>%s</strong>&quot; a été crée.',
  'continue' => 'Cliquez sur &quot;Suivant&quot; pour commencer le téléchargement de vos images',
  'link' => '',
);
}


// ------------------------------------------------------------------------- //
// Core plugins
// ------------------------------------------------------------------------- //
if (defined('CORE_PLUGIN')) $lang_plugin_php = array(
  'usergal_alphatabs_config_name' => 'User Gallery Alphabetic Tabbing(Onglet salphabétiques pour les galeries utilisateurs)', // cpg1.5
  'usergal_alphatabs_config_description' => 'Ce qu\'il fait: Il affiche des onglets alphabétiques en haut du cadre des galeries utilisateurs afin que les visiteurs puissent accéder directement vers une page qui affiche toutes les galeries utilisateur dont le nom commence par la lettre sur laquelle il a cliqué. Ce plugin est recommandé si vous avez réellement un très grand nombre de galeries utilisateurs.', // cpg1.5
  'usergal_alphatabs_jump_by_username' => 'Naviger par nom d\'utilisateur', // cpg1.5
  'sample_config_name' => 'Sample Plugin', // cpg1.5
  'sample_config_description' => 'Ceci est un exemple de plugin. Il ne fait rien de particulièrement utile - il n\'est là que pour mntrer ce que lesplugins peuvent faire et comment les coder. Lorsqu\'il est activé, il affichera un exemple de texte en rouge.', // cpg1.5
  'sample_plugin_documentation' => 'Documentation du Plugin', // cpg1.5
  'sample_plugin_support' => 'Aide du Plugin', // cpg1.5
  'sample_install_explain' => 'Entrer l\'identifiant (\'foo\') et le mot de passe (\'bar\') pour l\'installer', // cpg1.5
  'sample_install_username' => 'Identifiant', // cpg1.5
  'sample_install_password' => 'Mot de Passe', // cpg1.5
  'sample_output' => 'Ceci est un exemple de donnée renvoyée depusi le plugin "sample plugin"', // cpg1.5
  'opensearch_config_name' => 'OpenSearch', // cpg1.5
  'opensearch_config_description' => 'Une adaptation de <a href="http://www.opensearch.org/" rel="external" class="external">OpenSearch</a> pour Coppermine.<br />Si il est activé, les visiteurs peuvent ajouter votre galerie à leur barre de recherche du navigateur.', // cpg1.5
  'opensearch_search' => 'Chercher %s', // cpg1.5
  'opensearch_extra' => 'Vous devriez ajouter du texte à votre site pour explique ce que fait ce plugin', // cpg1.5
  'opensearch_failed_to_open_file' => 'Impossible d\'ouvrir le fichier %s - vérifiez les permissions', // cpg1.5
  'opensearch_failed_to_write_file' => 'Impossible d\'écrire dans le fichier %s - vérifiez les permissions', // cpg1.5
  'opensearch_form_header' => 'Entrez le détail à utiliser dans la description du fichier', // cpg1.5
  'opensearch_gallery_url' => 'URL de la Galerie (doit être correct)', // cpg1.5
  'opensearch_display_name' => 'Nom affiché dans le navigateur', // cpg1.5
  'opensearch_description' => 'Description', // cpg1.5
  'opensearch_character_limit' => '%s Limite de caractères', // cpg1.5
  'onlinestats_description' => 'Affiche un bloc sur chaque page de la galerie pour montrer les invités et les utilisateurs actuellement en ligne.',
  'onlinestats_name' => 'Qui est en ligne?',
  'onlinestats_config_extra' => 'Pour activer ce plugin (et afficher le bloc de statistiques onlinestats), il faut ajouter la chaîne "onlinestats" (séparée par un slash \'/\') à "<a href="docs/en/configuration.htm#admin_album_list_content">Le contenu de la page principale</a>" dans <a href="admin.php">la configuration de Coppermine</a> dans la section " Affichage de la liste des Albums ". Le paramétrage devrait ressemble à ça "breadcrumb/catlist/alblist/onlinestats" . Pour changer la position du bloc, déplacez la chaine "onlinestats" dans le champ de la configuration.',
  'onlinestats_config_install' => 'Ce plugin ajoute des requêtes à chaque fois ou il est exécuté, utilisant des resources supplémentaires. Si votre galerie est lente ou si vous avez beaucoup d\'utilisateursn vous ne devriez pas l\'utiliser.',
  'onlinestats_we_have_reg_member' => 'Il y a %s visiteur enregistré',
  'onlinestats_we_have_reg_members' => ' il y a %s visiteurs enregistrés',
  'onlinestats_most_recent' => 'Le visiteur enregistré le plus récent est %s',
  'onlinestats_is' => 'Au total il y a %s visiteur en ligne',
  'onlinestats_are' => 'Au total il y a %s visiteurs en ligne',
  'onlinestats_and' => 'et',
  'onlinestats_reg_member' => '%s visiteur enregistré',
  'onlinestats_reg_members' => '%s visiteur enregistré',
  'onlinestats_guest' => '%s invité',
  'onlinestats_guests' => '%s invités',
  'onlinestats_record' => 'Nombre le plus grand de visiteurs jamais en ligne: %s le %s',
  'onlinestats_since' => ' Visiteurs enregistrés en ligne au cours les dernières %s minutes: %s',
  'onlinestats_config_text' => 'Combien de temps voulez vous laisser les visiteurs affichés comme en ligne avant de considérer qu\'ils sont partis ?',
  'onlinestats_minute' => 'minutes',
  'onlinestats_remove' => 'Effacer la table utilisée pour stocker les données du plugin ?',
);
?>