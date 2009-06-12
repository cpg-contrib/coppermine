<?php
/*************************
  Coppermine Photo gallery
  ************************
  Copyright (c) 2003-2007 Coppermine Dev Team
  v1.1 originally written by Gregory DEMAR

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation; either version 2 of the License, or
  (at your option) any later version.
  ********************************************
  Coppermine version: 1.5.1
  $HeadURL$
  $Revision$
  $LastChangedBy$
  $Date$
**********************************************/

if (!defined('IN_COPPERMINE')) { die('Not in Coppermine...');}

// info about translators and translated language
$lang_translation_info['lang_name_english'] = 'French_FR';
$lang_translation_info['lang_name_native'] = 'Français';
$lang_translation_info['lang_country_code'] = 'fr';
$lang_translation_info['trans_name'] = 'Frantz';
$lang_translation_info['trans_email'] = 'francois.cpgtest@free.fr';
$lang_translation_info['trans_website'] = 'http://coppermine-gallery.net/forum/index.php?board=38.0';
$lang_translation_info['trans_date'] = '2009-06-06';


$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('Bytes', 'Ko', 'Mo');
$lang_decimal_separator = array(',', '.');  //cpg1.5 // symbol used to separate thousands from hundreds and rounded number from  decimal place

// Day of weeks and months
$lang_day_of_week = array('Dim', 'Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam');
$lang_month = array('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre');

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$lang_date['album'] = '%e %B %Y';
$lang_date['lastcom'] = '%d/%m/%y à %H:%M';
$lang_date['lastup'] = '%e %B %Y';
$lang_date['register'] = '%e %B %Y';
$lang_date['lasthit'] = '%a %e %B %Y à %H:%M';
$lang_date['comment'] = '%a %e %B %Y à %H:%M';
$lang_date['log'] = '%B %d, %Y at %I:%M %p';
$lang_date['scientific'] = '%d-%m-%Y %H:%M:%S';

// For the word censor
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*', 'merde', 'putain', 'enculé*', 'salope', 'bite', 'cul', 'pute', 'pénis', 'clito', 'couille', 'pétasse', 'connard', 'salaud');

$lang_meta_album_names['random'] = 'Photos Aléatoires';
$lang_meta_album_names['lastup'] = 'Derniers Ajouts';
$lang_meta_album_names['lastalb'] = 'Derniers Albums mis à jour';
$lang_meta_album_names['lastcom'] = 'Derniers Commentaires';
$lang_meta_album_names['mostcom'] = 'Les plus commentées'; //cpg1.5
$lang_meta_album_names['topn'] = 'Les Plus Populaires';
$lang_meta_album_names['toprated'] = 'Les Mieux Notées';
$lang_meta_album_names['lasthits'] = 'Les Dernières images Vues';
$lang_meta_album_names['search'] = 'Résultats de la Recherche';
$lang_meta_album_names['album_search'] = 'Résultat de la recherche dans les Albums';
$lang_meta_album_names['category_search'] = 'Résultat de la recherche dans les Catégories';
$lang_meta_album_names['favpics'] = 'Photos Préférées';
$lang_meta_album_names['datebrowse'] = 'Navigation par date'; //cpg1.5
    
$lang_errors['access_denied'] = 'Vous n\'avez pas la permission d\'accéder à cette page.';
$lang_errors['invalid_form_token'] = 'Une balise de formulaire valise n\'a pas pu être trouvée.'; //cpg1.5
$lang_errors['perm_denied'] = 'Vous n\'avez pas la permission d\'effectuer cette opération.';
$lang_errors['param_missing'] = 'Script appelé sans les paramètres nécessaires.';
$lang_errors['non_exist_ap'] = 'L\'Album/la photo demandé(e) n\'existe pas!';
$lang_errors['quota_exceeded'] = 'Quota disque dépassé.'; //cpg1.5
$lang_errors['quota_exceeded_details'] = 'Vous avez un quota d\'espace de [quota]K, vos fichiers utilisent actuellement [space]K, l\ajout de ces fichiers vous fera dépasser ce quota.'; //cpg1.5
$lang_errors['gd_file_type_err'] = 'L\'utilisation de &quot;GD Image Library&quot; ne vous permet d\'Utilisez que de images de type JPEG et PNG.';
$lang_errors['invalid_image'] = 'L\'image que vous avez uploadée est corrompue ou ne peut pas être prise en charge par GD library';
$lang_errors['resize_failed'] = 'Impossible de créer la vignette ou l\'image réduite.';
$lang_errors['no_img_to_display'] = 'Pas d\'image à Afficher';
$lang_errors['non_exist_cat'] = 'La Catégorie sélectionnée n\'existe pas';
$lang_errors['orphan_cat'] = 'Une Catégorie a un parent inexistant, utilisez le gestionnaire de Catégories afin de remédier au problème.';
$lang_errors['directory_ro'] = 'Le répertoire \'%s\' n\'est pas inscriptible : les images ne peuvent être supprimées.';
$lang_errors['non_exist_comment'] = 'Le commentaire sélectionné n\'existe pas.';
$lang_errors['pic_in_invalid_album'] = 'L\'image se trouve dans un Album qui n\'existe pas (%s)!?';
$lang_errors['banned'] = 'Vous êtes pour l\'instant banni de ce site.';
$lang_errors['not_with_udb'] = 'Cette fonction est désactivée dans Coppermine parce que la Galerie est intégrée à un Forum. Soit l\'action que vous essayez d\'effectuer n\'est pas disponible dans cette configuration, soit vous devez l\'effectuer depuis le Forum auquel vous avez intégré la Galerie.';
$lang_errors['offline_title'] = 'Hors Ligne';
$lang_errors['offline_text'] = 'Cette Galerie n\'est pas en ligne actuellement. Revenez la voir très bientôt&nbsp;!';
$lang_errors['ecards_empty'] = 'Il n\'y a pas encore de logs enregistrés. Vérifiez que vous avez activé l\'option correspondante dans la configuration de Coppermine.';
$lang_errors['action_failed'] = 'Erreur&nbsp;! Coppermine ne peut pas traiter cette requête.';
$lang_errors['no_zip'] = 'Les librairies nécessaires au traitement des fichiers ZIP ne sont pas installées. Contactez l\'Administrateur du site.';
$lang_errors['zip_type'] = 'Vous n\'avez pas l\'autorisation de télécharger des fichiers ZIP.';
$lang_errors['database_query'] = 'Il y eu une erreur lors de l\'exécution de la requête';
$lang_errors['non_exist_comment'] = 'Le commentaire choisi n\'existe pas';
$lang_errors['page_removed_redirector'] = 'Vous essayez d\'accéder à une page qui a été enlevée du pack de Coppermine !<br />Redirection...'; //cpg1.5
$lang_errors['captcha_error'] = 'Le Code de Confirmation ne correspond pas'; //cpg1.5
$lang_errors['no_data'] = 'Aucune donnée renvoyée'; // cpg1.5
$lang_errors['no_connection'] = 'Aucune connection établie avec %s.'; // cpg1.5
$lang_errors['login_needed'] = 'Vous devez vous %sEnregistrer%s/%sidentifier%s pour accéder à cette page'; // cpg1.5
$lang_errors['error'] = 'Erreur'; // cpg1.5
$lang_errors['critical_error'] = 'Erreur Critique'; // cpg1.5
$lang_errors['access_thumbnail_only'] = 'Vous êtes autorisé à ne voir que les vignettes.'; // cpg1.5
$lang_errors['access_intermediate_only'] = 'Vous n\'êtes pas autorisé à voir les images originales.'; // cpg1.5
$lang_errors['access_none'] = 'Vous n\'êtes pas autorisé à voir les images.'; // cpg1.5

$lang_bbcode_help_title = 'Aide BBcode';
$lang_bbcode_help = 'Vous pouvez ajouter des liens cliquables et formater le texte de ce champ en utilisant les balises BBcode: <li>[b]Gras[/b] =&gt; <b>Gras</b></li><li>[i]Italique[/i] =&gt; <i>Italique</i></li><li>[url=http://votresite.com/]Texte du lien[/url] =&gt; <a href="http://votresite.com">Url Text</a></li><li>[email]Utilisateur@domaine.com[/email] =&gt; <a href="mailto:Utilisateur@domaine.com">Utilisateur@domaine.com</a></li><li>[color=red]Votre texte[/color] =&gt; <span style="color:red">Votre texte</span></li><li>[img]http://documentation.coppermine-gallery.net/images/browser.png[/img]] = <img src="docs/images/browser.png" border="0" alt="" /></li>';

$lang_common['yes'] = 'Oui'; // cpg1.5.x
$lang_common['no'] = 'Non'; // cpg1.5.x
$lang_common['back'] = 'Retour'; // cpg1.5.x
$lang_common['continue'] = 'Continuez'; // cpg1.5.x
$lang_common['information'] = 'Information'; // cpg1.5.x
$lang_common['error'] = 'Erreur'; // cpg1.5.x
$lang_common['check_uncheck_all'] = 'Sélectionnez/Désélectionnez tout'; // cpg1.5.x
$lang_common['confirm'] = 'Confirmation'; // cpg1.5.x
$lang_common['captcha_help_title'] = 'Confirmation visuelle (Captcha)'; // cpg1.5.x
$lang_common['captcha_help'] = 'Pour éviter le Spam, vous devez confirmer que vous êtes un réel être humain et pas simplement un robot (script) en entrant le texte affiché.<br />La casse n\'a pas d\'importance, vous pouvez entrer le texte en lettres minuscules.'; // cpg1.5.x
$lang_common['title'] = 'Titre'; // cpg1.5.x
$lang_common['caption'] = 'Légende'; // cpg1.5.x
$lang_common['keywords'] = 'Mots clef'; // cpg1.5.x
$lang_common['keywords_insert1'] = 'Mots clef (séparés par un point virgule)'; // cpg1.5.x
$lang_common['keywords_insert2'] = 'Insérer depuis une liste'; // cpg1.5.x
$lang_common['keyword_separator'] = 'Séparateur de mots clé'; //cpg1.5
$lang_common['keyword_separators'] = array(' '=>'espace', ','=>'vigule', ';'=>'point virgule'); // cpg1.5
$lang_common['owner_name'] = 'Nom de Propriétaire'; // cpg1.5.x
$lang_common['filename'] = 'Nom du fichier'; // cpg1.5.x
$lang_common['filesize'] = 'Taille du fichier'; // cpg1.5.x
$lang_common['album'] = 'Album'; // cpg1.5.x
$lang_common['file'] = 'Fichier'; // cpg1.5.x
$lang_common['date'] = 'Date'; // cpg1.5.x
$lang_common['help'] = 'Aide'; // cpg1.5.x
$lang_common['close'] = 'Fermez'; // cpg1.5.x
$lang_common['go'] = 'Envoyez'; // cpg1.5.x
$lang_common['javascript_needed'] = 'Ces pages nécessitent JavaScript. Veuillez l\'Activer dans votre navigateur.'; // cpg1.5.x
$lang_common['move_up'] = 'Vers le haut'; // cpg1.5
$lang_common['move_down'] = 'Vers le bas'; // cpg1.5
$lang_common['move_top'] = 'En premier'; // cpg1.5
$lang_common['move_bottom'] = 'En dernier'; // cpg1.5
$lang_common['delete'] = 'Effacer'; // cpg1.5
$lang_common['edit'] = 'Modifier'; // cpg1.5
$lang_common['username_if_blank'] = 'M. X'; // cpg1.5
$lang_common['albums_no_category'] = 'Albums sans Catégorie'; // cpg1.5
$lang_common['personal_albums'] = '* Album personnel'; // cpg1.5
$lang_common['select_album'] = 'Album sélectionné'; // cpg1.5
$lang_common['ok'] = 'OK'; // cpg1.5
$lang_common['status'] = 'Status'; // cpg1.5
$lang_common['apply_changes'] = 'Appliquez les changements'; // cpg1.5
$lang_common['reset'] = 'Réinitialiser'; // cpg1.5
$lang_common['done'] = 'Fait'; // cpg1.5
$lang_common['show_password'] = 'Montrer le mot de passe'; // cpg1.5
$lang_common['album_properties'] = 'Propriétés de l\'Album'; // cpg1.5
$lang_common['parent_category'] = 'Catégorie parente'; // cpg1.5
$lang_common['edit_files'] = 'Editer les fichiers'; // cpg1.5
$lang_common['thumbnail_view'] = 'Vue des Vignettes'; // cpg1.5
$lang_common['album_manager'] = 'Gestion des Albums'; // cpg1.5
$lang_common['details'] = 'Détails'; // cpg1.5


// ----------------------- //
// File theme.php
// ----------------------- //

$lang_main_menu['home_title'] = 'Aller à la page d\'accueil';
$lang_main_menu['home_lnk'] = 'Accueil';
$lang_main_menu['alb_list_title'] = 'Aller à la liste des Albums';
$lang_main_menu['alb_list_lnk'] = 'Albums';
$lang_main_menu['my_gal_title'] = 'Aller dans ma Galerie personnelle';
$lang_main_menu['my_gal_lnk'] = 'Ma Galerie';
$lang_main_menu['my_prof_title'] = 'Aller à mon Profil personnel';
$lang_main_menu['my_prof_lnk'] = 'Mon Profil';
$lang_main_menu['adm_mode_title'] = 'Passer en Mode Administrateur';
$lang_main_menu['adm_mode_lnk'] = 'Mode Administrateur';
$lang_main_menu['usr_mode_title'] = 'Passer au Mode Utilisateur';
$lang_main_menu['usr_mode_lnk'] = 'Mode Utilisateur';
$lang_main_menu['upload_pic_title'] = 'Uploader une image dans un Album';
$lang_main_menu['upload_pic_lnk'] = 'Uploader une image';
$lang_main_menu['register_title'] = 'Créer un Compte';
$lang_main_menu['register_lnk'] = 'Inscription';
$lang_main_menu['login_title'] = 'Connectez-vous';
$lang_main_menu['login_lnk'] = 'Identifiez-vous';
$lang_main_menu['logout_title'] = 'Déconnectez-vous';
$lang_main_menu['logout_lnk'] = 'Quitter';
$lang_main_menu['lastup_title'] = 'Afficher les dernières mises à jour';
$lang_main_menu['lastup_lnk'] = 'Derniers Ajouts';
$lang_main_menu['lastcom_title'] = 'Afficher les derniers Commentaires';
$lang_main_menu['lastcom_lnk'] = 'Derniers Commentaires';
$lang_main_menu['mostcom_title'] = 'Montrer les fichiers les plus commentés'; // cpg1.5
$lang_main_menu['mostcom_lnk'] = 'Les plus commentés'; // cpg1.5
$lang_main_menu['topn_title'] = 'Afficher les dernières Visualisations';
$lang_main_menu['topn_lnk'] = 'Les Plus Populaires';
$lang_main_menu['toprated_title'] = 'Afficher les fichiers les mieux notées';
$lang_main_menu['toprated_lnk'] = 'Les Mieux Notées';
$lang_main_menu['search_title'] = 'Rechercher une Galerie';
$lang_main_menu['search_lnk'] = 'Rechercher';
$lang_main_menu['fav_title'] = 'Consulter mes Favoris';
$lang_main_menu['fav_lnk'] = 'Mes Favoris';
$lang_main_menu['memberlist_title'] = 'Afficher la liste des Membres';
$lang_main_menu['memberlist_lnk'] = 'Liste des Membres';
$lang_main_menu['browse_by_date_lnk'] = 'Par Date'; // cpg1.5.x
$lang_main_menu['browse_by_date_title'] = 'Naviguer par date de téléchargement'; // cpg1.5.x
$lang_main_menu['contact_title'] = 'Entrer en contact avec %s'; // cpg1.5.x
$lang_main_menu['contact_lnk'] = 'Contact'; // cpg1.5.x
$lang_main_menu['sidebar_title'] = 'Ajouter un marque page dans la barre latérale à votre navigateur'; // cpg1.5
$lang_main_menu['sidebar_lnk'] = 'Marque page'; // cpg1.5
$lang_main_menu['main_menu'] = 'Menu Principal'; // cpg1.5
$lang_main_menu['sub_menu'] = 'Sous-menu'; // cpg1.5

$lang_gallery_admin_menu['upl_app_title'] = 'Valider les nouveaux téléchargements';
$lang_gallery_admin_menu['upl_app_lnk'] = 'Fichiers à valider';
$lang_gallery_admin_menu['admin_title'] = 'Aller à la page Configuration';
$lang_gallery_admin_menu['admin_lnk'] = 'Configuration';
$lang_gallery_admin_menu['albums_title'] = 'Aller à la Configuration des Albums';
$lang_gallery_admin_menu['albums_lnk'] = 'Albums';
$lang_gallery_admin_menu['categories_title'] = 'Aller à la Configuration des Catégories';
$lang_gallery_admin_menu['categories_lnk'] = 'Catégories';
$lang_gallery_admin_menu['users_title'] = 'Aller à la Configuration des Utilisateurs';
$lang_gallery_admin_menu['users_lnk'] = 'Utilisateurs';
$lang_gallery_admin_menu['groups_title'] = 'Aller à la Configuration des Groupes';
$lang_gallery_admin_menu['groups_lnk'] = 'Groupes';
$lang_gallery_admin_menu['comments_title'] = 'Afficher tous les Commentaires';
$lang_gallery_admin_menu['comments_lnk'] = 'Commentaires';
$lang_gallery_admin_menu['searchnew_title'] = 'Aller au Téléchargement par Lots (FTP)';
$lang_gallery_admin_menu['searchnew_lnk'] = 'FTP] =';
$lang_gallery_admin_menu['util_title'] = 'Aller aux Utilitaires d\'Administration';
$lang_gallery_admin_menu['util_lnk'] = 'Utilitaires';
$lang_gallery_admin_menu['key_title'] = 'Aller au Dictionnaire de Mots-Clef';
$lang_gallery_admin_menu['key_lnk'] = 'Dictionnaire de Mot-Clef';
$lang_gallery_admin_menu['ban_title'] = 'Aller aux Utilisateurs Bannis';
$lang_gallery_admin_menu['ban_lnk'] = 'Bannir des Utilisateurs ';
$lang_gallery_admin_menu['db_ecard_title'] = 'Voir les eCartes';
$lang_gallery_admin_menu['db_ecard_lnk'] = 'eCartes envoyées';
$lang_gallery_admin_menu['pictures_title'] = 'Tri des Images';
$lang_gallery_admin_menu['pictures_lnk'] = 'Tri des images';
$lang_gallery_admin_menu['documentation_lnk'] = 'Documentation';
$lang_gallery_admin_menu['documentation_title'] = 'Manuel de Coppermine';
$lang_gallery_admin_menu['phpinfo_lnk'] = 'phpinfo'; // cpg1.5.x
$lang_gallery_admin_menu['phpinfo_title'] = 'Contient des informations techniques sur votre serveur. Vous pouvez être invité à fournir ces informations lors d\une demande d\'aide.'; // cpg1.5.x
$lang_gallery_admin_menu['update_database_lnk'] = 'M.A.J BdD'; // cpg1.5.x
$lang_gallery_admin_menu['update_database_title'] = 'Si vous avez remplacé des fichiers Coppermine, ajouté une modification ou mis à jour votre Galerie depuis une ancienne version, assurez-vous de mettre à jour votre Base de Données. Cela créera les tables et/ou les valeurs nécessaires à la nouvelle configuration dans votre base de données Coppermine.'; // cpg1.5.x
$lang_gallery_admin_menu['view_log_files_lnk'] = 'Voir le fichier Log'; // cpg1.5.x
$lang_gallery_admin_menu['view_log_files_title'] = 'Coppermine peut Enregistrer diverses actions effectuées par les Utilisateurs. Vous pouvez consulter ces LOGs si vous avez autorisé ceci dans la Config de Coppermine.'; // cpg1.5.x
$lang_gallery_admin_menu['check_versions_lnk'] = 'Vérifier la version actuelle'; // cpg1.5.x
$lang_gallery_admin_menu['check_versions_title'] = 'Vérifier la version de vos fichiers pour voir si vous avez remplacé tous les dossiers après une mise à jour, ou si des fichiers source de Coppermine ont été mis à jour après la mise à disposition de votre version.'; // cpg1.5.x
$lang_gallery_admin_menu['bridgemgr_lnk'] = 'Bridge'; // cpg1.5.x
$lang_gallery_admin_menu['bridgemgr_title'] = 'Activer/Désactiver l\'intégration (Bridge) de Coppermine avec une autre application (par exemple : Votre Forum PhpBB, SMF ou autres).'; // cpg1.5.x
$lang_gallery_admin_menu['pluginmgr_lnk'] = 'Gestion Plugins'; // cpg1.5.x
$lang_gallery_admin_menu['pluginmgr_title'] = 'Gestion des Plugins'; // cpg1.5.x
$lang_gallery_admin_menu['overall_stats_lnk'] = 'Statistiques Globales'; // cpg1.5.x
$lang_gallery_admin_menu['overall_stats_title'] = 'Visualiser les statistiques globales d’accès à votre Galerie par navigateur et logiciel d\'exploitation (si les options correspondantes sont activées dans la configuration).'; // cpg1.5.x
$lang_gallery_admin_menu['keywordmgr_lnk'] = 'Mots-Clef'; // cpg1.5.x
$lang_gallery_admin_menu['keywordmgr_title'] = 'Gérer les Mots-Clef (si l\'option correspondante est cochée dans la configuration).'; // cpg1.5.x
$lang_gallery_admin_menu['exifmgr_lnk'] = 'Gestion EXIF'; // cpg1.5.x
$lang_gallery_admin_menu['exifmgr_title'] = 'Gérer l\'affichage des données EXIF (si l\'option correspondante est cochée dans la configuration).'; // cpg1.5.x
$lang_gallery_admin_menu['shownews_lnk'] = 'Montrer les News'; // cpg1.5.x
$lang_gallery_admin_menu['shownews_title'] = 'Afficher le News de coppermine-gallery.net'; // cpg1.5.x
$lang_gallery_admin_menu['export_lnk'] = 'Export'; // cpg1.5
$lang_gallery_admin_menu['export_title'] = 'Exportez des fichiers et des Albums vers votre disque dur'; // cpg1.5
$lang_gallery_admin_menu['admin_menu'] = 'Menu Administrateur'; // cpg1.5

$lang_user_admin_menu['albmgr_title'] = 'Créer et classer mes Albums';
$lang_user_admin_menu['albmgr_lnk'] = 'Créer / classer mes Albums';
$lang_user_admin_menu['modifyalb_title'] = 'Aller à la modification de mes Albums';  //cpg1.4
$lang_user_admin_menu['modifyalb_lnk'] = 'Modifier mes Albums';
$lang_user_admin_menu['my_prof_title'] = 'Aller à mon Profil Personnel';
$lang_user_admin_menu['my_prof_lnk'] = 'Mon Profil';

$lang_cat_list['category'] = 'Catégories';
$lang_cat_list['albums'] = 'Albums';
$lang_cat_list['pictures'] = 'Fichiers';

$lang_album_list['album_on_page'] = '%d Albums sur %d page(s)';
  
$lang_thumb_view['date'] = 'DATE'; 
  //Sort by filename and title
$lang_thumb_view['name'] = 'NOM DU FICHIER';
$lang_thumb_view['sort_da'] = 'Classement ascendant par date';
$lang_thumb_view['sort_dd'] = 'Classement descendant par date';
$lang_thumb_view['sort_na'] = 'Classement ascendant par nom';
$lang_thumb_view['sort_nd'] = 'Classement descendant par nom';
$lang_thumb_view['sort_ta'] = 'Classement ascendant par titre';
$lang_thumb_view['sort_td'] = 'Classement descendant par titre';
$lang_thumb_view['position'] = 'POSITION';
$lang_thumb_view['sort_pa'] = 'Classement ascendant par position';
$lang_thumb_view['sort_pd'] = 'Classement descendant par position';
$lang_thumb_view['download_zip'] = 'Télécharger un fichier ZIP';
$lang_thumb_view['pic_on_page'] = '%d Photos sur %d page(s)';
$lang_thumb_view['user_on_page'] = '%d Utilisateurs sur %d page(s)';
$lang_thumb_view['enter_alb_pass'] = 'Entrer un Mot de Passe pour l\'Album';
$lang_thumb_view['invalid_pass'] = 'Mot de Passe INVALIDE';
$lang_thumb_view['pass']= 'Mot de Passe';
$lang_thumb_view['submit'] = 'Soumettre';
$lang_thumb_view['zipdownload_copyright'] = 'Merci de respecter les Copyrights - N\'utilisez les fichiers que vous téléchargez qu\'en accord avec leur propriétaire. En vertu de la loi sur la Propriété Artistique et Intellectuelle. Merci.'; // cpg1.5
$lang_thumb_view['zipdownload_username'] = 'Cette Archive contiens les fichiers compressés depuis les favoris de %s'; // cpg1.5

$lang_img_nav_bar['thumb_title'] = 'Retournez à la page des Vignettes';
$lang_img_nav_bar['pic_info_title'] = 'Affichez/Cachez les informations sur l\'image';
$lang_img_nav_bar['slideshow_title'] = 'Diaporama';
$lang_img_nav_bar['ecard_title'] = 'Envoyez cette image en tant que Carte Electronique';
$lang_img_nav_bar['ecard_disabled'] = 'Les Cartes Electroniques sont désactivées';
$lang_img_nav_bar['ecard_disabled_msg'] = 'Vous n\\\'avez pas l\\\'autorisation d\\\'envoyer des cartes';//js-alert
$lang_img_nav_bar['prev_title'] = '<< Voir l\'image précédente';
$lang_img_nav_bar['next_title'] = 'Voir l\'image suivante >>';
$lang_img_nav_bar['pic_pos'] = 'PHOTO %s/%s';
$lang_img_nav_bar['report_title'] = 'Signaler ce fichier à l\'Administrateur de la Galerie.';
$lang_img_nav_bar['go_album_end'] = 'Aller à la fin';
$lang_img_nav_bar['go_album_start'] = 'Retourner au début';
$lang_img_nav_bar['go_back_x_items'] = 'Avancer de %s items';
$lang_img_nav_bar['go_forward_x_items'] = 'Reculer de %s items';

$lang_rate_pic['rate_this_pic'] = 'Noter cette image ';
$lang_rate_pic['no_votes'] = '(Pas encore de note)';
$lang_rate_pic['rating'] = '(note actuelle : %s / 10 pour %s votes)'; // Noté sur 10 actuellement. Mettez 5 si votre Config offre 5 seulement.
$lang_rate_pic['rubbish'] = 'Très mauvais';
$lang_rate_pic['poor'] = 'Mauvais';
$lang_rate_pic['fair'] = 'Moyen';
$lang_rate_pic['good'] = 'Bon';
$lang_rate_pic['excellent'] = 'Excellent';
$lang_rate_pic['great'] = 'Superbe';
$lang_rate_pic['js_warning'] = 'Javascript doit être actif pour pouvoir voter'; // cpg1.5.x
$lang_rate_pic['already_voted'] = 'Vous avez déjà voté pour cette photo ;-)'; // cpg1.5
$lang_rate_pic['forbidden'] = 'Vous ne pouvez pas voter pour vos propres fichiers !'; // cpg1.5
$lang_rate_pic['rollover_to_rate'] = 'Survoler pour évaluer cette image'; // cpg1.5

// ----------------------- //
// File include/functions.inc.php
// ----------------------- //

$lang_cpg_die['file'] = 'Fichier : ';
$lang_cpg_die['line'] = 'Ligne : ';

$lang_display_thumbnails['dimensions'] = 'Dimensions : ';
$lang_display_thumbnails['date_added'] = 'Ajouté le : ';
$lang_display_thumbnails['unapproved'] = 'Non approuvé'; // cpg1.5

$lang_get_pic_data['n_comments'] = '%s Commentaires';
$lang_get_pic_data['n_views'] = 'vu %s fois';
$lang_get_pic_data['n_votes'] = '(%s votes)';

$lang_cpg_debug_output['debug_info'] = 'Infos de débogage';
$lang_cpg_debug_output['debug_output'] = 'Sortie de débogage'; // cpg1.5
$lang_cpg_debug_output['select_all'] = 'Tout sélectionner';
$lang_cpg_debug_output['copy_and_paste_instructions'] = 'Si vous souhaitez soumettre une demande d\'assistance dans le Forum de support de Coppermine, copier/collez ces informations de débogage dans votre message. Assurez-vous de remplacer tous les mots de passe, même codés, par \'***\' avant de poster votre message. IMPORTANT : NE POSTEZ QUE SI LE SUPPORT COPPERMINE VOUS LE DEMANDE.';
$lang_cpg_debug_output['debug_output_explain'] = 'Note : Ceci n\'est qu\'une information, ce qui ne veut pas dire qu\'il y ait une erreur dans la Galerie.'; // cpg1.5
$lang_cpg_debug_output['phpinfo'] = 'Afficher le phpinfo';
$lang_cpg_debug_output['notices'] = 'Remarques';
$lang_cpg_debug_output['notices_help_admin'] = 'Ces avertissements ne sont affichés sur cette page que parce que vous (en tant qu\'Admin de la Galerie) avez délibérément activé cette fonction dans la configuration de Coppermine. Celà ne veut pas obligatoirement dire qu\'il y ait quelque chose qui ne fonctionne pas avec votre Galerie. En fait, c\'est une fonction que seuls les personnes ayant une bonne notion en programmation devraient Activez pour traquer les bugs. Si ces avertissements vous dérangent et/ou que vous n\'avez aucune idée de ce qu\'ils signifient, désactivez simplement cette focntion dans la Configuration de Coppermine.'; // cpg1.5
$lang_cpg_debug_output['notices_help_non_admin'] = 'L\'affichage de ces avis a été délibérément activé par l\'Administrateur. Celà ne veut pas dire qu\'il y ait un problème de votre côté. Vous pouvez ignorer ces avertissements sans craintes.'; // cpg1.5
$lang_cpg_debug_output['show_hide'] = 'Montrer / Cacher'; // cpg1.5

$lang_language_selection['reset_language'] = 'Langue par défaut';
$lang_language_selection['choose_language'] = 'Choisissez votre langue';

$lang_theme_selection['reset_theme'] = 'Thème par défaut';
$lang_theme_selection['choose_theme'] = 'Choisissez votre thème';

$lang_social_bookmarks['bookmark_this_page'] = 'Marquez cette page'; // cpg1.5
$lang_social_bookmarks['favorite'] = 'Ajoutez cette page dans les favoris, Bookmarks (marques-pages) de votre navigateur'; // cpg1.5 // js-alert
$lang_social_bookmarks['send_email'] = 'Recommandez cette page par courriel'; // cpg1.5 // js-alert
$lang_social_bookmarks['email_subject'] = 'Page Intéressante'; // cpg1.5 // js-alert
$lang_social_bookmarks['email_body'] = 'Je pense que cette page pourrait vous intérresser'; // cpg1.5 // js-alert
$lang_social_bookmarks['favorite_close'] = 'Ceci ne fonctionne pas avec votre navigateur.'."\n".'Fermez cette boite de dialiogue et'."\n".'appuyez sur Ctrl-D pour marque cette page.'; // cpg1.5 // js-alert

$lang_version_alert['version_alert'] = 'Version sans support d\'aide!';
$lang_version_alert['no_stable_version'] = 'Vous utilisez Coppermine  %s (%s) qui s\'adresse aux Utilisateurs très expérimentés - Cette version n\'offre aucun support d\'aide. Vous pouvez l\'Utilisez, mais à vos risques et périls. Si vous êtes un nouvel Utilisateur, téléchargez la dernière version stable alors vous aurez accès au Support Copermine, si vous avez besoin d\'aide!';
$lang_version_alert['gallery_offline'] = 'La Galerie est actuellement hors ligne et n\'est visible que par un Administrateur. N\'oubliez pas de la remettre en ligne une fois les travaux de maintenance terminés.';
$lang_version_alert['coppermine_news'] = 'Nouvelles de coppermine-gallery.net'; //cpg1.5
$lang_version_alert['no_iframe'] = 'Votre navigateur ne peut pas afficher les cadres incorporés (iframes)'; //cpg1.5
$lang_version_alert['hide'] = 'cacher'; //cpg1.5

$lang_create_tabs['previous'] = 'précédent';
$lang_create_tabs['next'] = 'suivant';
$lang_create_tabs['jump_to_page'] = 'Sauter à la page '; // cpg1.5
$lang_create_tabs['first'] = 'Première'; // cpg1.5
$lang_create_tabs['last'] = 'Dernière'; // cpg1.5

$lang_get_remote_File_by_url['no_data_returned'] = 'Pas de données retournées avec %s'; // cpg1.5
$lang_get_remote_File_by_url['curl'] = 'CURL'; // cpg1.5
$lang_get_remote_File_by_url['fsockopen'] = 'Socket connection (FSOCKOPEN)'; // cpg1.5
$lang_get_remote_File_by_url['fopen'] = 'fopen'; // cpg1.5
$lang_get_remote_File_by_url['curl_not_available'] = 'Curl n\'est pas disponible sur votre serveur'; // cpg1.5
$lang_get_remote_File_by_url['error_number'] = 'Erreur N°: %s'; // cpg1.5
$lang_get_remote_File_by_url['error_message'] = 'Message d\'erreur : %s'; // cpg1.5

// ------------------------------------------------------------------------- //
// File include/mailer.inc.php
// ------------------------------------------------------------------------- //
$lang_mailer['provide_address'] = 'Vous devez en indiquer au moins une ';
$lang_mailer['mailer_not_supported'] = ' mailer n\'est pas supporté.';
$lang_mailer['execute'] = 'Impossible d\'éxecuter: ';
$lang_mailer['instantiate'] = 'Impossible d\'instancier la fonction mail.';
$lang_mailer['authenticate'] = 'Erreur SMTP : Identification impossible.';
$lang_mailer['from_failed'] = 'l\'adresse suivante DE est manquante : ';
$lang_mailer['recipients_failed'] = 'Erreur SMTP : Suivant ';
$lang_mailer['data_not_accepted'] = 'Ereur SMTP : Données non acceptées.';
$lang_mailer['connect_host'] = 'Erreur SMTP : Impossible de se connecter à l\'hôte SMTP.';
$lang_mailer['file_access'] = 'Impossible d\'accéder au fichier : ';
$lang_mailer['file_open'] = 'Erreur Fichier : Impossible d\'ouvrir le fichier : ';
$lang_mailer['encoding'] = 'Encodage inconnu : ';
$lang_mailer['signing'] = 'Erreur de signature : ';

// ----------------------- //
// File include/plugin_api.inc.php
// ----------------------- //
$lang_plugin_api['error_wakeup'] = 'Impossible d\'Activer le plugin \'%s\'';
$lang_plugin_api['error_install'] = 'Impossible d\'Installer le plugin \'%s\'';
$lang_plugin_api['error_uninstall'] = 'Impossible de désinstaller le plugin \'%s\'';
$lang_plugin_api['error_sleep'] = 'Impossible de désinstaller le plugin \'%s\'<br />'; //cpg1.5

// ----------------------- //
// File include/smilies.inc.php
// ----------------------- //
if (defined('SMILIES_PHP')) {
$lang_smilies_inc_php['Exclamation'] = 'Exclamation';
$lang_smilies_inc_php['Question'] = 'Question';
$lang_smilies_inc_php['Very Happy'] = 'Très heureux';
$lang_smilies_inc_php['Smile'] = 'Sourire';
$lang_smilies_inc_php['Sad'] = 'Triste';
$lang_smilies_inc_php['Surprised'] = 'Surpris';
$lang_smilies_inc_php['Shocked'] = 'Choqué';
$lang_smilies_inc_php['Confused'] = 'Confus';
$lang_smilies_inc_php['Cool'] = 'Cool';
$lang_smilies_inc_php['Laughing'] = 'Rire';
$lang_smilies_inc_php['Mad'] = 'Fou';
$lang_smilies_inc_php['Razz'] = 'Razz';
$lang_smilies_inc_php['Embarassed'] = 'Embarassé';
$lang_smilies_inc_php['Crying or Very sad'] = 'Pleure ou très triste';
$lang_smilies_inc_php['Evil or Very Mad'] = 'Diabolique ou très en colère';
$lang_smilies_inc_php['Twisted Evil'] = 'Sadique';
$lang_smilies_inc_php['Rolling Eyes'] = 'Lève les yeux au ciel';
$lang_smilies_inc_php['Wink'] = 'Clin d\'oeil';
$lang_smilies_inc_php['Idea'] = 'Idée';
$lang_smilies_inc_php['Arrow'] = 'Flèche';
$lang_smilies_inc_php['Neutral'] = 'Neutre';
$lang_smilies_inc_php['Mr. Green'] = 'Mr. Green';
}

// ----------------------- //
// File albmgr.php
// ----------------------- //
if (defined('ALBMGR_PHP')) {
$lang_albmgr_php['title'] = 'Gestionnaire d\'Albums'; // cpg1.5 
$lang_albmgr_php['alb_need_name'] = 'Les Albums doivent avoir un nom&nbsp;!';//js-alert
$lang_albmgr_php['confirm_modifs'] = 'Voulez-vous vraiment effectuer ces modifications ?'; //js-alert
$lang_albmgr_php['no_change'] = 'vous n\\\'avez effectué Aucun changement&nbsp;!';//js-alert
$lang_albmgr_php['new_album'] = 'Nouvel Album';
$lang_albmgr_php['delete_album'] = 'Effacez l\'Album'; // cpg1.5
$lang_albmgr_php['confirm_delete1'] = 'Voulez vous vraiment Supprimez cet Album ?'; //js-alert
$lang_albmgr_php['confirm_delete2'] = 'Toutes vos Images et tous les Commentaires seront perdus !'; //js-alert
$lang_albmgr_php['select_first'] = 'Sélectionnez un Album avant';//js-alert
$lang_albmgr_php['my_gallery'] = '* Ma Galerie *';
$lang_albmgr_php['no_category'] = '* Pas de Catégorie *';
$lang_albmgr_php['select_category'] = 'Sélectionnez une categorie';
$lang_albmgr_php['category_change'] = 'Si vous changez la catégorie, vos changements seront perdus!'; // cpg1.5
$lang_albmgr_php['page_change'] = 'Si vous suivez ce lien, vos modifications seront perdues!'; // cpg1.5
$lang_albmgr_php['cancel'] = 'Annuler'; // cpg1.5
$lang_albmgr_php['submit_reminder'] = 'Les changements dans l\'ordre ne sont pas sauvegardés tant que vous n\'avez pas cliqué sur &quot;Appliquer les changements&quot;.'; // cpg1.5
}

// ----------------------- //
// File banning.php
// ----------------------- //

if (defined('BANNING_PHP')) {
$lang_banning_php['title'] = 'Bannir des Utilisateurs';
$lang_banning_php['user_name'] = 'Nom d\'Utilisateur';
$lang_banning_php['user_account'] = 'Compte Utilisateur';
$lang_banning_php['email_address'] = 'Adresse de Courriel'; // cpg1.5
$lang_banning_php['ip_address'] = 'Adresse IP';
$lang_banning_php['expires'] = 'Expire';
$lang_banning_php['expiry_date'] = 'Date d\'expiration'; // cpg1.5
$lang_banning_php['expired'] = 'Expiré'; // cpg1.5
$lang_banning_php['edit_ban'] = 'Sauvegardez les changements';
$lang_banning_php['add_new'] = 'Ajouter un Nouveau Bannissement';
$lang_banning_php['add_ban'] = 'Ajouter';
$lang_banning_php['error_user'] = 'Utilisateur introuvable';
$lang_banning_php['error_specify'] = 'Vous devez spécifier un Nom d\'Utilisateur ou une adresse IP';
$lang_banning_php['error_ban_id'] = 'IDentifiant invalide !';
$lang_banning_php['error_admin_ban'] = 'Vous ne pouvez pas vous bannir vous même&nbsp; !';
$lang_banning_php['error_server_ban'] = 'Vous ne pouvez pas bannir votre propre serveur !';
$lang_banning_php['skipping'] = 'Ignorer cette commande'; // cpg1.5
$lang_banning_php['lookup_ip'] = 'Consulter une adresse IP';
$lang_banning_php['select_date'] = 'Sélectionner la date';
$lang_banning_php['delete_comments'] = 'Effacer les Commentaires'; // cpg1.5
$lang_banning_php['current'] = 'actuel'; // cpg1.5
$lang_banning_php['all'] = 'tous'; // cpg1.5
$lang_banning_php['none'] = 'aucun'; // cpg1.5
$lang_banning_php['view'] ='vue'; // cpg1.5
$lang_banning_php['ban_id'] = 'IDentifiant du banni'; // cpg1.5
$lang_banning_php['existing_bans'] = 'Bannis existants'; // cpg1.5
$lang_banning_php['no_banning_when_bridged'] = 'Vous utilisez actuellement une Galerie bridgée avec une autre application. Utilisez le mechanisme de bannissement de cette application bridgée au lieu de celui inclus dans Coppermine. Le mechanisme de bannissement fonctionne difficilement si l\'application est brigée.'; // cpg1.5
$lang_banning_php['records_on_page'] = '%d enregistrements sur %d page(s)'; // cpg1.5
$lang_banning_php['ascending'] = 'ascendant'; // cpg1.5
$lang_banning_php['descending'] = 'descendant'; // cpg1.5
$lang_banning_php['sort_by'] = 'tri par'; // cpg1.5
$lang_banning_php['sorted_by'] = 'triés par'; // cpg1.5
$lang_banning_php['ban_record_x_updated'] = 'L\'enregistrement de bannissement %s a été mis à jour.'; // cpg1.5
$lang_banning_php['ban_record_x_deleted'] = 'L\'enregistrement de bannissement %s a été effacé...'; // cpg1.5
$lang_banning_php['new_ban_record_created'] = 'Un nouvel enregistrement de banissement a été créé.'; // cpg1.5
$lang_banning_php['ban_record_x_already_exists'] = 'Un enregistrementd e banissement existe déjà pour %s.'; // cpg1.5
$lang_banning_php['comment_deleted'] = '%s commentaire écrit par %s a été effacé.'; // cpg1.5
$lang_banning_php['comments_deleted'] = '%s Commentaires écrits par %s ont été effacés.'; // cpg1.5
$lang_banning_php['email_field_invalid'] = '>Entrez une adresse courriel valide !'; // cpg1.5
$lang_banning_php['ip_address_field_invalid'] = 'Entrez une adress IP valide (x.x.x.x)'; // cpg1.5
$lang_banning_php['expiry_field_invalid'] = 'Entrez une date d\'expiration valide (JJ-MM-AAAA)'; // cpg1.5
$lang_banning_php['form_not_submit'] = 'Le formulaire n\'a pas été envoyé - il y a des erreurs que vous devez corriger d\'abord !'; // cpg1.5
}

// ----------------------- //
// File bridgemgr.php
// ----------------------- //
if (defined('BRIDGEMGR_PHP')) {
$lang_bridgemgr_php['title'] = 'Assistant d\'intégration (&quot;Bridge&quot;)';
$lang_bridgemgr_php['back'] = 'Retour';
$lang_bridgemgr_php['next'] = 'Suivant';
$lang_bridgemgr_php['start_wizard'] = 'Démarrez l\'Assistant';
$lang_bridgemgr_php['finish'] = 'Terminez';
$lang_bridgemgr_php['no_action_needed'] = 'Pas d\'action à cette étape. Cliquez sur \'suivant\'pour CONTINUER.';
$lang_bridgemgr_php['reset_to_default'] = 'Revenir aux valeurs par défaut';
$lang_bridgemgr_php['choose_bbs_app'] = 'Choisissez une application à Bridger avec Coppermine';
$lang_bridgemgr_php['support_url'] = 'Suivez ce lien pour de l\'aide sur cette application';
$lang_bridgemgr_php['settings_path'] = 'Chemin(s) utilisés par votre Forum';
$lang_bridgemgr_php['full_forum_url'] = 'URL du Forum';
$lang_bridgemgr_php['relative_path_of_forum_from_webroot'] = 'Adresse relative de votre Forum';
$lang_bridgemgr_php['relative_path_to_config_file'] = 'Chemin relatif à la page de configuration de votre Forum';
$lang_bridgemgr_php['cookie_prefix'] = 'Préfixe du Cookie';
$lang_bridgemgr_php['special_settings'] = 'paramètres spécifiques de l\'application à intégrer';
$lang_bridgemgr_php['use_post_based_groups'] = 'Utilisez les groupes basés sur le nombre de messages ?';
$lang_bridgemgr_php['use_post_based_groups_yes'] = 'Oui';
$lang_bridgemgr_php['use_post_based_groups_no'] = 'Non';
$lang_bridgemgr_php['error_title'] = 'Vous devez corriger ces erreurs avant de continuer et retournez à la page précédente.';
$lang_bridgemgr_php['error_specify_bbs'] = 'Vous devez spécifier avec quelle application vous voulez bridger Coppermine.';
$lang_bridgemgr_php['finalize'] = 'Activez/Désactivez l\'intégration avec le Forum';
$lang_bridgemgr_php['finalize_explanation'] = 'Jusqu\'à présent, vos réglages ont été inscrit dans la Base de Données, mais l\'intégration avec le Forum n\'a pas été activée. Vous pouvez Activez/désActivez cette intégration quand vous le voulez. Soyez certain de vous souvenir du Nom d\'Utilisateur et du Mot de Passe de votre Compte Administrateur Coppermine (non-bridgé), vous pourriez en avoir besoin plus tard pour faire des modifications. Si quelque chose ne marche pas, allez sur %s et désactivez l\'intégration au Forum, en utilisant votre Compte Administrateur &quot;non-bridgé&quot; (habituellement, c\'est celui que vous avez défini lors de l\'installation de Coppermine).';
$lang_bridgemgr_php['your_bridge_settings'] = 'Configuration de votre Bridge';
$lang_bridgemgr_php['title_enable'] = 'Active l\'intégration/le bridge avec %s';
$lang_bridgemgr_php['bridge_enable_yes'] = 'Activé';
$lang_bridgemgr_php['bridge_enable_no'] = 'Désactivé';
$lang_bridgemgr_php['error_must_not_be_empty'] = 'ne peut pas être vide';
$lang_bridgemgr_php['error_either_be'] = 'doit être %s ou %s';
$lang_bridgemgr_php['error_folder_not_exist'] = '%s n\'existe pas. Corrigez la valeur entrée pour %s';
$lang_bridgemgr_php['error_cookie_not_readible'] = 'Coppermine ne peut pas lire le cookie nommé %s. Corrigez la valeur que vous avez entré pour %s, ou allez dans le Panneau d\'Administration de votre Forum et vérifiez que le chemin d\'accès au cookie est lisible par Coppermine.';
$lang_bridgemgr_php['error_mandatory_field_empty'] = 'Vous ne pouvez pas laisser le champ %s vide -Entrez la bonne valeur.';
$lang_bridgemgr_php['error_no_trailing_slash'] = 'Le champ %s ne doit pas commencer par le signe \'/\'.';
$lang_bridgemgr_php['error_trailing_slash'] = 'Le champ %s doit commencer par le signe \'/\'.';
$lang_bridgemgr_php['error_prefix_and_table'] = '%s et ';
$lang_bridgemgr_php['recovery_title'] = 'Gestionnaire de Bridge : Récupération d\'URGENCE';
$lang_bridgemgr_php['recovery_explanation'] = 'Si vous venez ici pour Gérez l\'intégration de votre Forum avec votre Galerie Coppermine, Vous devez d\'abord vous identifier en tant qu\'Administrateur. Si vous ne parvenez pas à vous identifier parce que l\'intégration de votre Forum ne fonctionne pas comme prévu, vous pouvez désActivez l\'intégration avec votre Forum depuis cette page. Entrer malgré tout votre Identifiant et votre Mot de Passe ne va pas vous permettre de vous identifier, celà va seulement désActivez le brige avec votre Forum. Pour plus de détails, reportez vous à la Documentation de Coppermine.';
$lang_bridgemgr_php['username'] = 'Nom d\'Utilisateur';
$lang_bridgemgr_php['password'] = 'Mot de Passe';
$lang_bridgemgr_php['disable_submit'] = 'Soumettre';
$lang_bridgemgr_php['recovery_success_title'] = 'Autorisation accordée';
$lang_bridgemgr_php['recovery_success_content'] = 'Vous avez désactivé avec succès le Bridge avec votre Forum. Coppermine fonctionne maintenant de manière autonome.';
$lang_bridgemgr_php['recovery_success_advice_login'] = 'S\'identifier comme Administrateur pour éditer la Configuration de votre Bridge et/ou Activez l\'intégration avec votre Forum à nouveau.';
$lang_bridgemgr_php['goto_login'] = 'Allez à la page d\'Identification';
$lang_bridgemgr_php['goto_bridgemgr'] = 'Allez au Gestionnaire de Bridge';
$lang_bridgemgr_php['recovery_failure_title'] = 'Autorisation refusée';
$lang_bridgemgr_php['recovery_failure_content'] = 'Vous avez soumis de mauvaises données. Vous devez entrer les données de votre Compte Administrateur pour la version autonome de Coppermine (habituellement le compte créé lors de l\'installation de Coppermine).';
$lang_bridgemgr_php['try_again'] = 'Réessayer';
$lang_bridgemgr_php['recovery_wait_title'] = 'Le temps d\'attente ne s\'est pas écoulé';
$lang_bridgemgr_php['recovery_wait_content'] = 'Pour des raisons de sécurité, le script n\'autorise pas plusieurs échecs de connexion rapprochés dans le temps. Veuillez patientez avant de réessayer de vous identifier.';
$lang_bridgemgr_php['wait'] = 'Patientez';
$lang_bridgemgr_php['browse'] = 'Parcourir';
}

// ----------------------- //
// File calendar.php
// ----------------------- //
if (defined('CALENDAR_PHP')) {
$lang_calendar_php['title'] = 'Calendrier';
$lang_calendar_php['clear_date'] = 'Effacer la date';
$lang_calendar_php['files'] = 'fichiers'; // cpg1.5
}

// ----------------------- //
// File catmgr.php
// ----------------------- //
if (defined('CATMGR_PHP')) {
  $lang_catmgr_php['miss_param'] = 'Les paramètres requis pour l\'operation \'%s\' sont manquants&nbsp;!';
  $lang_catmgr_php['unknown_cat'] = 'La Catégorie sélectionnée n\'existe pas dans la Base de Données';
  $lang_catmgr_php['usergal_cat_ro'] = 'La Galerie des Utilisateurs ne peut pas être supprimée!';
  $lang_catmgr_php['manage_cat'] = 'Gérez les Catégories';
  $lang_catmgr_php['confirm_delete'] = 'Voulez vous vraiment Supprimer cette Catégorie ?';//js-alert
  $lang_catmgr_php['category'] = 'Catégorie';
  $lang_catmgr_php['operations'] = 'Opérations';
  $lang_catmgr_php['move_into'] = 'Déplacer dans';
  $lang_catmgr_php['update_create'] = 'Mettre à jour / créer la Catégorie';
  $lang_catmgr_php['parent_cat'] = 'Catégorie parente';
  $lang_catmgr_php['cat_title'] = 'Titre de la Catégorie';
  $lang_catmgr_php['cat_thumb'] = 'Vignette de la Catégorie';
  $lang_catmgr_php['cat_desc'] = 'Description de la Catégorie';
  $lang_catmgr_php['categories_alpha_sort'] = 'Classement des Catégories par ordre alphabétique (au lieu du classement par ajout)';
  $lang_catmgr_php['save_cfg'] = 'Sauvegardez la Configuration';
  $lang_catmgr_php['no_category'] = '* Pas de Catégorie *'; // cpg1.5
  $lang_catmgr_php['group_create_alb'] = 'Groupe(s) autorisé(s) à créer des Albums dans cette Catégorie'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File contact.php
// ------------------------------------------------------------------------- //
if (defined('CONTACT_PHP')) {
  $lang_contact_php['title'] ='Contact'; // cpg1.5
  $lang_contact_php['your_name'] = 'Votre Nom'; // cpg1.5
  $lang_contact_php['your_email'] = 'Votre adresse courriel'; // cpg1.5
  $lang_contact_php['subject'] = 'Objet'; // cpg1.5
  $lang_contact_php['your_message'] = 'Votre message'; // cpg1.5
  $lang_contact_php['name_field_mandatory'] = 'Veuillez entrez votre nom'; // cpg1.5 //js-alert
  $lang_contact_php['name_field_invalid'] = 'Veuillez entrer votre nom'; // cpg1.5 //js-alert
  $lang_contact_php['email_field_mandatory'] = 'Veuillez entrer votre adrese courriel'; // cpg1.5 //js-alert
  $lang_contact_php['email_field_invalid'] = 'Veuillez entre une adresse courriel valide'; // cpg1.5 //js-alert
  $lang_contact_php['subject_field_mandatory'] = 'Veuillez entrer un objet précis'; // cpg1.5 //js-alert
  $lang_contact_php['message_field_mandatory'] = 'Veuillez entrer votre message'; // cpg1.5 //js-alert
  $lang_contact_php['confirmation'] = 'Confirmation'; // cpg1.5
  $lang_contact_php['email_headline'] = 'Le %s, ce courriel a été envoyé à %s en utilisant le formulaire de contact depuis l\'adresse IP %s'; // cpg1.5
  $lang_contact_php['registered_user'] = 'Utilisateur enregistré'; // cpg1.5
  $lang_contact_php['guest'] = 'Visiteur'; // cpg1.5
  $lang_contact_php['unknown'] = 'inconnu'; // cpg1.5
  $lang_contact_php['user_info'] = 'Le %s appelé %s avec l\'adresse de courriel %s écrit:'; // cpg1.5
  $lang_contact_php['failed_sending_email'] = 'Impossible d\'envoyer le courriel. Essayez à nouveau.'; //cpg1.5
  $lang_contact_php['email_sent'] = 'Votre courriel a été envoyé.'; //cpg1.5
}

// ----------------------- //
// File admin.php
// ----------------------- //
if (defined('ADMIN_PHP')) {
$lang_admin_php['title'] = 'Configuration de la Galerie';
$lang_admin_php['general_settings'] = 'Paramètres généraux'; // cpg1.5
$lang_admin_php['language_charset_settings'] = 'Paramètres de la Langue &amp; Jeu de caractères'; // cpg1.5
$lang_admin_php['themes_settings'] = 'Paramètres des Thèmes'; // cpg1.5
$lang_admin_php['album_list_view'] = 'Affichage de la liste des Albums'; // cpg1.5
$lang_admin_php['thumbnail_view'] = 'Affichage des vignettes'; // cpg1.5
$lang_admin_php['image_view'] = 'Affichage des Images'; // cpg1.5
$lang_admin_php['comment_settings'] = 'Paramètres des Commentaires'; // cpg1.5
$lang_admin_php['thumbnail_settings'] = 'Paramètres des vignettes'; // cpg1.5
$lang_admin_php['file_settings'] = 'Paramètres des fichiers'; // cpg1.5
$lang_admin_php['image_watermarking'] = 'Filigrane d\'Images'; // cpg1.5
$lang_admin_php['registration'] = 'Enregistrement'; // cpg1.5
$lang_admin_php['user_settings'] = 'Paramètres des Utilisateurs'; // cpg1.5
$lang_admin_php['custom_fields_user_profile'] = 'Champs personnalisés pour le profil Utilisateur (laisser vide si inutilisés).Utilisez le profil 6 pour les longs textes, comme les biographies par exemple.'; // cpg1.5
$lang_admin_php['custom_fields_image_description'] = 'Champs personnalisés pour la description d\'images (laisser vide si inutilisés)'; // cpg1.5
$lang_admin_php['cookie_settings']= 'Paramètres des Cookies'; // cpg1.5
$lang_admin_php['email_settings']= 'Paramètres des courriels  (habituellement il n\'est pas necessaire de faire des modifications; laissez tous les champs vide si vous n\'êtes pas sur)'; // cpg1.5
$lang_admin_php['logging_stats'] = 'Logging et statistiques'; // cpg1.5
$lang_admin_php['maintenance_settings'] = 'Paramètres de maintenance'; // cpg1.5
$lang_admin_php['manage_exif'] = 'Administrer l\'affichage des exifs';
$lang_admin_php['manage_plugins'] = 'Administrer les plugins';
$lang_admin_php['manage_keyword'] = 'Administrer les Mot-Clefs';
$lang_admin_php['restore_cfg'] = 'Restaurer les paramètres d\'origine';
$lang_admin_php['restore_cfg_confirm'] = 'Voulez-vous réellement restaurer tous les paramétres de la configuration avec les valeurs par defaut ? Cette action ne peut pas être annulée !'; // cpg1.5 //js-alert
$lang_admin_php['save_cfg'] = 'Sauvegarder la nouvelle Configuration';
$lang_admin_php['notes'] = 'Notes';
$lang_admin_php['info'] = 'Information';
$lang_admin_php['upd_success'] = 'La Configuration de Coppermine a été mise à jour';
$lang_admin_php['restore_success'] = 'La Configuration d\'origine de Coppermine a été restaurée';
$lang_admin_php['name_a'] = 'Ascendant par Nom';
$lang_admin_php['name_d'] = 'Descendantpar Nom';
$lang_admin_php['title_a'] = 'Ascendant par Titre';
$lang_admin_php['title_d'] = 'Descendant par Titre';
$lang_admin_php['date_a'] = 'Ascendant par Date';
$lang_admin_php['date_d'] = 'Descendant par Date';
$lang_admin_php['pos_a'] = 'Ascendant par Ajout';
$lang_admin_php['pos_d'] = 'Descendant par Ajout';
$lang_admin_php['th_any'] = 'Aspect MAX';
$lang_admin_php['th_ht'] = 'Hauteur';
$lang_admin_php['th_wd'] = 'Largeur';
$lang_admin_php['th_ex'] = 'Exact'; // thumb cropping
$lang_admin_php['debug_everyone'] = 'Tout le monde';
$lang_admin_php['debug_admin'] = 'Administrateurs uniquement';
$lang_admin_php['no_logs']= 'Désactivé';
$lang_admin_php['log_normal']= 'Normal';
$lang_admin_php['log_all'] = 'Tout';
$lang_admin_php['view_logs'] = 'Voir les Logs';
$lang_admin_php['click_expand'] = 'Cliquer sur un nom de Section pour Afficher';
$lang_admin_php['click_collapse'] = 'Cliquer sur un nom de Section pour Réduire'; // cpg1.5
$lang_admin_php['expand_all'] = 'Tout Afficher';
$lang_admin_php['toggle_all'] = 'Inverser tout'; // cpg1.5
$lang_admin_php['notice1'] = '(*) Cette Configuration ne doit pas être changée si vous avez déjà des fichiers dans votre Base de Données.'; // - (relocated)
$lang_admin_php['notice2'] = '(**) Si vous changez cette Configuration, seuls les nouveaux fichiers ajoutés seront concernés, il est donc conseillé de ne pas la modifier si vous avez déjà des fichiers. Vous pouvez cependant appliquer les modifications aux fichiers existant à l\'aide des &quot;<a href="util.php">Outils d\'Administration</a> (redimensionner les images)&quot; depuis le Menu d\'Administration.'; //- (relocated)
$lang_admin_php['notice3'] = '(***) Tous les Logs sont écrits en Anglais.'; // - (relocated)
$lang_admin_php['bbs_disabled'] = 'Fonction désactivée si vous utilisez l\'intégration BB';
$lang_admin_php['auto_resize_everyone'] = 'Tous';
$lang_admin_php['auto_resize_user'] = 'Utilisateur seulement';
$lang_admin_php['ascending'] = 'ascendant';
$lang_admin_php['descending'] = 'descendant';
$lang_admin_php['collapse_all'] = 'Réduire tout'; // cpg1.5
$lang_admin_php['separate_page'] = 'sur une page séparée'; // cpg1.5
$lang_admin_php['inline'] = 'en ligne'; // cpg1.5
$lang_admin_php['guests_only'] = 'Visiteurs uniquement'; // cpg1.5
$lang_admin_php['wm_bottomright'] = 'Bas droite'; // cpg1.5
$lang_admin_php['wm_bottomleft'] = 'Bas gauche'; // cpg1.5
$lang_admin_php['wm_topleft'] = 'Haut gauche'; // cpg1.5
$lang_admin_php['wm_topright'] = 'Haut droit'; // cpg1.5
$lang_admin_php['wm_center'] = 'Centre'; // cpg1.5
$lang_admin_php['wm_both'] = 'Les deux'; // cpg1.5
$lang_admin_php['wm_original'] = 'Original'; // cpg1.5
$lang_admin_php['wm_resized'] = 'Re-dimensionné'; // cpg1.5
$lang_admin_php['gallery_name'] =   'Nom de la Galerie'; // cpg1.5
$lang_admin_php['gallery_description'] =   'Description de la Galerie'; // cpg1.5
$lang_admin_php['gallery_admin_email'] =   'Adresse courriel de l\'Administrateur'; // cpg1.5
$lang_admin_php['ecards_more_pic_target'] =   'URL du répertoire de votre Galerie coppermine'; // cpg1.5
$lang_admin_php['ecards_more_pic_target_detail'] =   '(avec un slash à la fin, pas \'index.php\' ou similaire à la fin)'; // cpg1.5
$lang_admin_php['home_target'] =   'URL de votre page d\'accueil'; // cpg1.5
$lang_admin_php['enable_zipdownload'] =   'Autoriser le téléchargement ZIP de vos photos dans les Favoris'; // cpg1.5
$lang_admin_php['enable_zipdownload_no_textfile'] = 'Uniquement les favoris'; // cpg1.5
$lang_admin_php['enable_zipdownload_additional_textfile'] = 'Favoris et fichier LISEZ_MOI'; // cpg1.5
$lang_admin_php['time_offset'] =   'Différence d\'heure par rapport au GMT'; // cpg1.5
$lang_admin_php['time_offset_detail'] =   '(il est actuellement : ' . localised_date(-1, $comment_date_fmt) . ')'; // cpg1.5
$lang_admin_php['enable_help'] =   'Activer les icônes d\'aide (Aide en anglais uniquement)'; // cpg1.5
$lang_admin_php['enable_help_description'] = 'Aide partiellement disponible uniquement en anglais'; // cpg1.5
$lang_admin_php['clickable_keyword_search'] =   'Activer les mots cliquables lors d\'une recherche'; // cpg1.5
$lang_admin_php['keyword_separator'] = 'Séparateur des mots clé'; // cpg1.5
$lang_admin_php['keyword_convert'] = 'Convertisser le séparateur de mots clés'; // cpg1.5
$lang_admin_php['enable_plugins'] =   'Activer les plugins'; // cpg1.5
$lang_admin_php['purge_expired_bans'] = 'Purge automatiquement les bannissement expirés'; // cpg1.5
$lang_admin_php['browse_batch_add'] =   'Interface de téléchargement par lot'; // cpg1.5
$lang_admin_php['batch_proc_limit'] = 'Accès simultané à l\'interface du processus de traitement des téléchargements par lots '; // cpg1.5
$lang_admin_php['display_thumbs_batch_add'] =   'Afficher les vignettes de prévisualisation dans l\'interface de téléchargement par lots'; // cpg1.5
$lang_admin_php['lang'] =   'Langue'; // cpg1.5
$lang_admin_php['language_autodetect'] = 'Détection automatique de la langue'; // cpg1.5
$lang_admin_php['charset'] =   'Jeu de caractères'; // cpg1.5
// $lang_admin_php['previous_next_tab'] =   'Display previous/next on tabbed pages'; // cpg1.5
$lang_admin_php['theme'] =   'Thème'; // cpg1.5
$lang_admin_php['custom_lnk_name'] =   'Nom du lien du menu personnalisé'; // cpg1.5
$lang_admin_php['custom_lnk_url'] =   'URL du menu personnalisé'; // cpg1.5
$lang_admin_php['enable_menu_icons'] = 'Activer les icones de menu'; // cpg1.5
$lang_admin_php['show_bbcode_help'] =   'Afficher l\'aide pour le bbcode'; // cpg1.5
$lang_admin_php['vanity_block'] =   'Afficher les boutons indiquant le respect des standards XHTML et CSS pour les thèmes conformes'; // cpg1.5
$lang_admin_php['display_social_bookmarks'] = 'Afficher les icônes des signets sociaux'; // cpg1.5
$lang_admin_php['highlight_multiple'] = 'Pour sélectionner plusieurs lignes, maintenez la touche [Ctrl] appuyée'; // cpg1.5
$lang_admin_php['custom_header_path'] =   'Chemin pour inclure un en-tête de page personnalisé'; // cpg1.5
$lang_admin_php['custom_footer_path'] =   'Chemin pour inclure un pied de page personnalisé'; // cpg1.5
$lang_admin_php['browse_by_date'] =   'Activer la navigation par date'; // cpg1.5
$lang_admin_php['display_redirection_page'] =   'Afficher les pages de redirection'; // cpg1.5
$lang_admin_php['display_xp_publish_link'] = 'Proposer l\'utilisation de XP Publisher en affichant un lien sur la page de téléchargement'; // cpg1.5
$lang_admin_php['main_table_width'] =   'Largeur du tableau principal'; // cpg1.5
$lang_admin_php['pixels_or_percent'] =   '(pixels ou %)'; // cpg1.5
$lang_admin_php['subcat_level'] =   'Nombre de niveaux de Catégories à Afficher'; // cpg1.5
$lang_admin_php['albums_per_page'] =   'Nombre d\'Albums à Afficher'; // cpg1.5
$lang_admin_php['album_list_cols' ]=   'Nombre de colonnes pour la liste des Albums'; // cpg1.5
$lang_admin_php['alb_list_thumb_size'] =   'Taille des Vignettes en pixels'; // cpg1.5
$lang_admin_php['main_page_layout'] =   'Le contenu de la Page Principale'; // cpg1.5
$lang_admin_php['first_level'] =   'Afficher les Vignettes de l\'Album du premier niveau avec la Catégorie'; // cpg1.5
$lang_admin_php['categories_alpha_sort'] =   'Classer les Catégories par ordre alphabétique'; // cpg1.5
$lang_admin_php['categories_alpha_sort_details'] =   '(au lieu du classement personnalisé)'; // cpg1.5
$lang_admin_php['link_pic_count'] =   'Afficher le nombre de fichiers liés'; // cpg1.5
$lang_admin_php['thumbcols'] =   'Nombre de colonnes sur la page des Vignettes'; // cpg1.5
$lang_admin_php['thumbrows'] =   'Nombre de lignes sur la page des Vignettes'; // cpg1.5
$lang_admin_php['max_tabs'] =   'Nombre maximal d\'Onglets à Afficher'; // cpg1.5
$lang_admin_php['tabs_dropdown'] = 'Afficher la liste déroulante de toutes le pages après la tabulation'; // cpg1.5
$lang_admin_php['caption_in_thumbview'] =   'Afficher la légende de l\'image (en plus de son titre) sous la vignette'; // cpg1.5
$lang_admin_php['views_in_thumbview'] =   'Afficher le nombre de \' Vues x Fois \' sous la Vignette'; // cpg1.5
$lang_admin_php['display_comment_count'] =   'Afficher le nombre de Commentaires sous les Vignettes'; // cpg1.5
$lang_admin_php['display_uploader'] =   'Afficher le nom de l\'Utilisateur sous la Vignette'; // cpg1.5
// $lang_admin_php['display_admin_uploader'] =   'Display name of admin uploaders below the thumbnail'; // cpg1.5
$lang_admin_php['display_filename'] =   'Afficher le nom du fichier sous la Vignette'; // cpg1.5
$lang_admin_php['display_thumbnail_rating'] =   'Afficher les votes sous la Vignette'; // cpg1.5
$lang_admin_php['alb_desc_thumb'] =   'Afficher la Description des Albums'; // cpg1.5
$lang_admin_php['thumbnail_to_fullsize'] =   'Aller directement de la Vignette à l\'image originale (grande taille)'; // cpg1.5
$lang_admin_php['default_sort_order'] =   'Classement par défaut des fichiers'; // cpg1.5
$lang_admin_php['min_votes_for_rating'] =   'Nombre minimun de Vote pour apparaître dans la liste \'les Mieux Notés\''; // cpg1.5
$lang_admin_php['picture_table_width'] =   'Largeur de la table pour l\'affichage des fichiers'; // cpg1.5
$lang_admin_php['display_pic_info'] =   'Information des fichiers visible par défaut'; // cpg1.5
$lang_admin_php['picinfo_movie_download_link'] =   'Afficher le lien de téléchargement des vidéos dans la partie information du fichier'; // cpg1.5
$lang_admin_php['max_img_desc_length'] =   'Nombre maximun de caractères pour la description des fichiers'; // cpg1.5
$lang_admin_php['max_com_wlength'] =   'Nombre maximun de caractères dans un mot'; // cpg1.5
$lang_admin_php['display_film_strip'] =   'Afficher le Négatif'; // cpg1.5
$lang_admin_php['max_film_strip_items'] =   'Nombre de Vignettes dans le Négatif'; // cpg1.5
$lang_admin_php['slideshow_interval'] =   'Intervale du Diaporama en millisecondes'; // cpg1.5
$lang_admin_php['milliseconds'] = 'millisecondes'; // cpg1.5
$lang_admin_php['slideshow_interval_detail'] =   '(1 seconde = 1000 millisecondes)'; // cpg1.5
$lang_admin_php['slideshow_hits'] =   'Compter les Hits dans le Diaporama'; // cpg1.5
$lang_admin_php['ecard_flash'] =   'Accepter le Flash dans les eCartes'; // cpg1.5
$lang_admin_php['not_recommended'] =   'non recommandé'; // cpg1.5
$lang_admin_php['recommended'] =   'recommandé'; // cpg1.5
$lang_admin_php['transparent_overlay'] =   'Insérer un recouvrement transparent pour réduire au minimum le vol d\'image'; // cpg1.5
$lang_admin_php['old_style_rating'] = 'Retour vers l\'ancien système de vote'; // cpg1.5
$lang_admin_php['old_style_rating_extra'] = 'Celà va désactiver le nombre d\'étoiles utilisée pour le vote'; // cpg1.5
$lang_admin_php['rating_stars_amount'] = 'Nombre d\'étoiles à Utilisez pour le vote'; // cpg1.5
$lang_admin_php['rate_own_files'] = 'Les utilisateurs peuvent voter pour leurs propres fichiers'; // cpg1.5
$lang_admin_php['filter_bad_words'] =   'Filtrez les mots interdits dans les Commentaires'; // cpg1.5
$lang_admin_php['enable_smilies'] =   'Autoriser les Smileys dans les Commentaires'; // cpg1.5
$lang_admin_php['disable_comment_flood_protect'] =   'Autoriser plusieurs Commentaires consécutifs pour une images par un même Utilisateur '; // cpg1.5
$lang_admin_php['disable_comment_flood_protect_details'] =   '(désactive la protection anti-flood)'; // cpg1.5
$lang_admin_php['max_com_lines'] =   'Nombre maximun de lignes dans un Commentaire'; // cpg1.5
$lang_admin_php['max_com_size'] =   'Longueur MAX d\'un Commentaire'; // cpg1.5
$lang_admin_php['email_comment_notification'] =   'Informer l\'Administrateur de Nouveaux Commentaires par courriel'; // cpg1.5
$lang_admin_php['comments_sort_descending'] =   'Ordre de tri des Commentaires'; // cpg1.5
$lang_admin_php['comments_per_page'] = 'Commentaires par page'; // cpg1.5
$lang_admin_php['comments_anon_pfx'] =   'Préfixe pour les Commentaires d\'Utilisateurs anonymes'; // cpg1.5
$lang_admin_php['comment_approval'] =   'Les Commentaires nécéssitent l\'approbation de l\'Administrateur'; // cpg1.5
$lang_admin_php['display_comment_approval_only'] =   'Afficher uniquement les Commentaires nécéssitant approbation sur la page &quot;Voir les Commentaires&quot; '; // cpg1.5
$lang_admin_php['comment_placeholder'] =   'Montrer le texte de remplacement aux Utilisateurs pour les Commentaires en attente d\'approbation par l\'Administrateur'; // cpg1.5
$lang_admin_php['comment_user_edit'] =   'Autoriser les Utilisateurs à éditer leurs Commentaires'; // cpg1.5
$lang_admin_php['comment_captcha'] =   'Afficher CAPTCHA (confirmation visuelle) pour l\'ajout de Commentaires'; // cpg1.5
$lang_admin_php['comment_akismet_enable'] = 'Options Akismet'; // cpg1.5
$lang_admin_php['comment_akismet_enable_description'] = 'Que doit-on faire si Akismet rejette un commentaire comme un SPAM?'; // cpg1.5
$lang_admin_php['comment_akismet_applicable_only'] = 'L\'option ne s\'applique que si Akismet a été activé en entrant une clé API valide'; // cpg1.5
$lang_admin_php['comment_akismet_enable_approval'] = 'Autoriser les Commentaires qui n\'ont pas passé le filtre Akismet, mais les paramètre comme désaprouvés'; // cpg1.5
$lang_admin_php['comment_akismet_drop_tell'] = 'Effacer les Commentaires qui n\'ont pas été validés et prévient leurs auteurs qu\'ils ont été rejetés'; // cpg1.5
$lang_admin_php['comment_akismet_drop_lie'] = 'Effacer les Commentaires qui n\'ont pas été validés, mais prévient l\'Utilisateur final (Spammeur) qu\'ils ont été ajoutés'; // cpg1.5
$lang_admin_php['comment_akismet_api_key'] = 'clé de l\'API Akismet'; // cpg1.5
$lang_admin_php['comment_akismet_api_key_description'] = 'Laisser vide pur désactiver Akismet'; // cpg1.5
$lang_admin_php['comment_akismet_group'] = 'Appliquer Akismet pour les Commentaires laissés par'; // cpg1.5
$lang_admin_php['comment_promote_registration'] =   'Demander aux Visiteurs de s\'identifier pour poster des Commentaires'; // cpg1.5
$lang_admin_php['thumb_width'] =   'Dimension Maximale (largeur) pour les Vignettes'; // cpg1.5
$lang_admin_php['thumb_use'] =   'Utiliser la dimension'; // cpg1.5
$lang_admin_php['thumb_use_detail'] =   '(largeur ou hauteur ou aspect max pour la vignette)'; // cpg1.5
$lang_admin_php['thumb_height'] =   'Hauteur des Vignettes'; // cpg1.5
$lang_admin_php['thumb_height_detail'] =   '(s\'applique uniquement si vous utilisez &quot;Exact&quot; dans &quot;Utilisez la dimension&quot;)'; // cpg1.5
$lang_admin_php['movie_audio_document'] =   'vidéos, audio, documents'; // cpg1.5
$lang_admin_php['thumb_pfx'] =   'Préfixe des Vignettes'; // cpg1.5
$lang_admin_php['enable_unsharp'] =   'Accentuation de la netteté des Vignettes: Activez le masque d\'Accentuation'; // cpg1.5
$lang_admin_php['unsharp_amount'] =   'Quantité d\'Accentuation'; // cpg1.5
$lang_admin_php['unsharp_radius'] =   'Nombre de pixel de bord pour l\'Accentuation (radius)'; // cpg1.5
$lang_admin_php['unsharp_threshold'] =   'Seuil d\'Accentuation (threshold)'; // cpg1.5
$lang_admin_php['jpeg_qual'] =   'Qualité pour les fichiers JPG'; // cpg1.5
$lang_admin_php['make_intermediate'] =   'Créer des images intermédiaires'; // cpg1.5
$lang_admin_php['picture_width'] =   'Largeur ou hauteur maximale pour une image/vidéo intermédiaire'; // cpg1.5
$lang_admin_php['max_upl_size'] =   'Poids maximal des images à uploader'; // cpg1.5
$lang_admin_php['kilobytes'] =   'Ko'; // cpg1.5
$lang_admin_php['pixels'] =   'pixels'; // cpg1.5
$lang_admin_php['max_upl_width_height'] =   'Longueur ou Hauteur maximale pour les images/vidéos uploadées'; // cpg1.5
$lang_admin_php['auto_resize'] =   'Redimentionner automatiquement les images qui dépassent la hauteur et/ou la largeur maximale'; // cpg1.5
$lang_admin_php['fullsize_padding_x'] =   'Marge interne horizontale pour la fenêtre de visualisation des grandes images'; // cpg1.5
$lang_admin_php['fullsize_padding_y'] =   'Marge interne verticale pour la fenêtre de visualisation des grandes images'; // cpg1.5
$lang_admin_php['allow_private_albums'] =   'Les Albums peuvent être privés'; // cpg1.5
$lang_admin_php['allow_private_albums_note'] =   '(NOTE : si vous commutez de \'Oui\' à \'Non\' les Albums Privés actuels deviendront publics)'; // cpg1.5
$lang_admin_php['show_private'] =   'Montrer les Vignettes des Albums Privés aux Utilisateurs anonymes'; // cpg1.5
$lang_admin_php['forbiden_fname_char'] =   'Caractères interdits dans les noms de fichiers'; // cpg1.5
$lang_admin_php['silly_safe_mode'] =   'Autoriser le &quot;silly safe mode&quot;'; // cpg1.5
$lang_admin_php['allowed_img_types'] =   'Types d\'images autorisés'; // cpg1.5
$lang_admin_php['allowed_mov_types'] =   'Types de vidéos autorisés'; // cpg1.5
$lang_admin_php['media_autostart'] =   'Démarrage automatique des vidéos'; // cpg1.5
$lang_admin_php['allowed_snd_types'] =   'Types de fichiers sons autorisés'; // cpg1.5
$lang_admin_php['allowed_doc_types'] =   'Types de fichiers textes autorisés'; // cpg1.5
$lang_admin_php['thumb_method'] =   'Méthode de redimensionnement des images'; // cpg1.5
$lang_admin_php['impath'] =   'Chemin vers l\'utilitaire \'convert\' d\'ImageMagick'; // cpg1.5
$lang_admin_php['impath_example'] =   '(exemple /usr/bin/X11/)'; // cpg1.5
$lang_admin_php['im_options'] =   'Options de ligne de commande pour ImageMagick'; // cpg1.5
$lang_admin_php['read_exif_data'] =   'Lire les informations EXIF dans les fichiers JPEG'; // cpg1.5
$lang_admin_php['read_iptc_data'] =   'Lire les informations IPTC dans les fichiers JPEG'; // cpg1.5
$lang_admin_php['fullpath'] =   'Répertoire des Albums'; // cpg1.5
$lang_admin_php['userpics'] =   'Répertoire pour les fichiers des Utilisateurs'; // cpg1.5
$lang_admin_php['normal_pfx'] =   'Préfixe pour les images intermédiaires'; // cpg1.5
$lang_admin_php['default_dir_mode'] =   'Mode par défaut des répertoires'; // cpg1.5
$lang_admin_php['default_file_mode'] =   'Mode par défaut des fichierss'; // cpg1.5
$lang_admin_php['enable_watermark'] =   'Filigrane d\'image (watermark)'; // cpg1.5
$lang_admin_php['enable_thumb_watermark'] =   'Mettre un filigrane sur les vignettes personnalisées'; // cpg1.5
$lang_admin_php['where_put_watermark'] =   'Emplacement du filigrane'; // cpg1.5
$lang_admin_php['which_files_to_watermark'] =   'Sur quel fichier mettre le filigrane'; // cpg1.5
$lang_admin_php['watermark_file'] =   'Quel fichier Utiliser pour le filigrane'; // cpg1.5
$lang_admin_php['watermark_transparency'] =   'Transparence pour les images entières'; // cpg1.5
$lang_admin_php['zero_2_hundred'] =   '0-100'; // cpg1.5
$lang_admin_php['reduce_watermark'] =   'Réduire le filigrane si la largeur de l\'image est inférieure à la valeur entrée. C\'est la référence à 100%. La réduction du filigrane est linéaire (0 pour désActivez)'; // cpg1.5
$lang_admin_php['watermark_transparency_featherx'] =   'Couleur transparente x'; // cpg1.5
$lang_admin_php['watermark_transparency_feathery'] =   'Couleur transparente y'; // cpg1.5
$lang_admin_php['gd2_only'] =   'GD2 seulement'; // cpg1.5
$lang_admin_php['allow_user_registration'] =   'Autoriser de Nouvelles Inscriptions'; // cpg1.5
$lang_admin_php['global_registration_pw'] =   'Mot de Passe global pour les inscriptions'; // cpg1.5
$lang_admin_php['user_registration_disclaimer'] =   'Afficher les règles de la Galerie (disclaimer) lors des inscriptions'; // cpg1.5
$lang_admin_php['registration_captcha'] =   'Affiche CAPTCHA (Confirmation visuelle) sur la page d\'enregistrement'; // cpg1.5
$lang_admin_php['reg_requires_valid_email'] =   'L\'inscription nécessite une confirmation du courriel'; // cpg1.5
$lang_admin_php['reg_notify_admin_email'] =   'Notifier l\'Administrateur par courriel lors de Nouvelles Inscriptions'; // cpg1.5
$lang_admin_php['admin_activation'] =   'L\'Administrateur doit Activez les enregistrements'; // cpg1.5
$lang_admin_php['personal_album_on_registration'] =   'Créer un Album personnel pour l\'Utilisateur lors de son enregistrement'; // cpg1.5
$lang_admin_php['allow_unlogged_access'] =   'Autoriser l\'accès aux Visiteurs non authentifiés (visiteur ou anonyme)'; // cpg1.5
$lang_admin_php['thumbnail_intermediate_full'] = 'vignette, image intermédiaire et images originale'; // cpg1.5
$lang_admin_php['thumbnail_intermediate'] = 'vignette et image intermédiaire image'; // cpg1.5
$lang_admin_php['thumbnail_only'] = 'vignette uniquement'; // cpg1.5
$lang_admin_php['upload_mechanism'] = 'Methode de téléchargement par défaut'; // cpg1.5
$lang_admin_php['upload_swf'] = 'Fichiers multiples, géré par Flash (recommandé)'; // cpg1.5
$lang_admin_php['upload_single'] = 'simple - un seul fichier à la fois'; // cpg1.5
$lang_admin_php['allow_user_upload_choice'] = 'Autoriser les Utilisateurs à choisir leur methode de téléchargement'; // cpg1.5
$lang_admin_php['allow_duplicate_emails_addr'] =   'Autoriser deux Utilisateurs à avoir la même adresse courriel'; // cpg1.5
$lang_admin_php['upl_notify_admin_email'] =   'Notifier l\'Administrateur lorsque des uploads nécessitent son approbation'; // cpg1.5
$lang_admin_php['allow_memberlist'] =   'Autoriser les Utilisateurs authentifiés à visualiser la liste des membres'; // cpg1.5
$lang_admin_php['allow_email_change'] =   'Autoriser les Utilisateurs à changer leur adresse courriel dans leur Profil'; // cpg1.5
$lang_admin_php['allow_user_account_delete'] =   'Autoriser les Utilisateurs à effacer leur propre Compte de la Galerie CPG'; // cpg1.5
$lang_admin_php['users_can_edit_pics'] =   'Autoriser les Utilisateurs à garder le controle de leurs images dans les Galeries publiques'; // cpg1.5
$lang_admin_php['allow_user_move_album'] = 'Autoriser l\'Utilisateur à déplacer ses Albums de/vers les Catégories autorisées'; // cpg1.5
$lang_admin_php['allow_user_album_keyword'] = 'Autoriser les Utilisateurs à assigner des mots clés aux Albums'; // cpg1.5
$lang_admin_php['allow_user_edit_after_cat_close'] = 'Autoriser les Utilisateurs à modifer leurs Albums dans les Catégories vérouillées'; // cpg1.5
$lang_admin_php['login_method_username'] = 'Nom d\'Utilisateur'; // cpg1.5
$lang_admin_php['login_method_email'] = 'Adresse courriel'; // cpg1.5
$lang_admin_php['login_method_both'] = 'les deux'; // cpg1.5
$lang_admin_php['login_method']= 'Comment souhaitez-vous que les Utilisateurs puissent s\'identifier'; // cpg1.5
$lang_admin_php['login_threshold'] =   'Nombre d\'échec d\'authentification avant bannissement temporaire '; // cpg1.5
$lang_admin_php['login_threshold_detail'] =   '(pour parer à une attaque brutale)'; // cpg1.5
$lang_admin_php['login_expiry'] =   'Durée du bannissement temporaire après un échec d\'authentification'; // cpg1.5

$lang_admin_php['minutes'] = 'minutes'; // cpg1.5
$lang_admin_php['report_post'] =   'Activer les rapports à l\'Administrateur'; // cpg1.5
$lang_admin_php['user_profile1_name'] =   'Nom du profil 1'; // cpg1.5
$lang_admin_php['user_profile2_name'] =   'Nom du profil 2'; // cpg1.5
$lang_admin_php['user_profile3_name'] =   'Nom du profil 3'; // cpg1.5
$lang_admin_php['user_profile4_name'] =   'Nom du profil 4'; // cpg1.5
$lang_admin_php['user_profile5_name'] =   'Nom du profil 5'; // cpg1.5
$lang_admin_php['user_profile6_name'] =   'Nom du profil 6'; // cpg1.5
$lang_admin_php['user_field1_name'] =   'Nom du champ 1'; // cpg1.5
$lang_admin_php['user_field2_name'] =   'Nom du champ 2'; // cpg1.5
$lang_admin_php['user_field3_name'] =   'Nom du champ 3'; // cpg1.5
$lang_admin_php['user_field4_name'] =   'Nom du champ 4'; // cpg1.5
$lang_admin_php['cookie_name'] =   'Nom du Cookie'; // cpg1.5
$lang_admin_php['cookie_path'] =   'Chemin du Cookie'; // cpg1.5
$lang_admin_php['smtp_host'] =   'Serveur SMTP (si le champ est vide, PHP sendmail sera utilisé)'; // cpg1.5
$lang_admin_php['smtp_username'] =   'Nom Utilisateur SMTP'; // cpg1.5
$lang_admin_php['smtp_password'] =   'Mot de Passe SMTP'; // cpg1.5
$lang_admin_php['log_mode'] =   'Mode d\'enregistrement'; // cpg1.5
$lang_admin_php['log_mode_details'] = 'Tous les fichiers log sont écrits en Anglais.'; // cpg1.5
$lang_admin_php['log_ecards'] =   'Enregistrer les envois de cartes électroniques'; // cpg1.5
$lang_admin_php['log_ecards_detail'] =   'Attention: Enregistrer les logs peut avoir des impacts juridiques. Les Utilisateurs devraient être informés lors de leur inscription que l\'envoi des cartes électronique est enregistré. Il est recommendé de crée une page spéciale avec les règles de propriété.'; // cpg1.5
$lang_admin_php['vote_details'] =   'Enregistrer le détails des statistiques des Votes'; // cpg1.5
$lang_admin_php['hit_details'] =   'Enregistrer le détail des statistiques des Hits'; // cpg1.5
$lang_admin_php['display_stats_on_index'] =   'Afficher les statistiques sur la page d\'index'; // cpg1.5
$lang_admin_php['count_file_hits'] = 'Compter les visualisations des Fichiers'; // cpg1.5
$lang_admin_php['count_album_hits'] = 'Compter les visualisations des Albums'; // cpg1.5
$lang_admin_php['count_admin_hits'] = 'Compter les visualisations par l\'administrateur'; // cpg1.5
$lang_admin_php['debug_mode'] =   'Activer le Mode Débogage'; // cpg1.5
$lang_admin_php['debug_notice'] =   'Afficher les avertissements dans le Mode Débogage'; // cpg1.5
$lang_admin_php['offline'] =   'La Galerie est Hors Ligne (sauf pour l\'Admin)'; // cpg1.5
$lang_admin_php['display_coppermine_news'] =   'Affichez les News de coppermine-gallery.net'; // cpg1.5
$lang_admin_php['display_coppermine_detail'] =   'Sera uniquement affiché pour l\'Administrateur'; // cpg1.5
$lang_admin_php['config_setting_invalid'] =   'La valeur que vous avez entrée pour &laquo;%s&raquo; n\est pas valide, vérifiez la.'; // cpg1.5
$lang_admin_php['config_setting_ok'] =   'Vos paramètres pour &laquo;%s&raquo; ont été sauvegardés.'; // cpg1.5
$lang_admin_php['contact_form_settings'] =   'Paramètres du formulaire de contact'; // cpg1.5
$lang_admin_php['contact_form_guest_enable'] =   'Afficher le formulaire de contact pour les visiteurs anonymes (guests)'; // cpg1.5
$lang_admin_php['contact_form_registered_enable'] =   'Afficher le formulaire de contact pour les visiteurs enregistrés'; // cpg1.5
$lang_admin_php['with_captcha'] =   'avec captcha'; // cpg1.5
$lang_admin_php['without_captcha'] =   'sans captcha'; // cpg1.5
$lang_admin_php['optional'] =   'optionnel'; // cpg1.5
$lang_admin_php['mandatory'] =   'obligatoire'; // cpg1.5
$lang_admin_php['contact_form_guest_name_field'] =   'Afficher le champ nom de l\'expéditeur pour les visiteurs anonymes'; // cpg1.5
$lang_admin_php['contact_form_guest_email_field'] =   'Afficher le champ adresse courrielde l\'expéditeur pour les visiteurs anonymes'; // cpg1.5
$lang_admin_php['contact_form_subject_field'] =   'Afficher le champ objet'; // cpg1.5
$lang_admin_php['contact_form_subject_content'] =   'Objet du courriel généré automatiquement par le formulaire de contact'; // cpg1.5
$lang_admin_php['contact_form_sender_email'] =   'Utiliser l\'adresse courriel de l\'expéditeur pour l\'adresse &quot;from&quot; du courriel'; // cpg1.5
$lang_admin_php['allow_no_link'] = 'Autoriser mais ne pas Afficher de lien'; // cpg1.5
$lang_admin_php['allow_show_link'] = 'Autoriser et Afficher un lien'; // cpg1.5
$lang_admin_php['display_sidebar_user'] = 'Panneau latéral pour Utilisateurs enregistrés'; // cpg1.5
$lang_admin_php['display_sidebar_guest'] = 'Panneau latéral pour les visiteurs'; // cpg1.5
$lang_admin_php['do_not_change'] = 'Ne modifiez ceci que si vous savez VRAIMENT ce que vous faites!'; // cpg1.5
$lang_admin_php['reset_to_default'] = 'Retour aux valeurs par défaut'; // cpg1.5
$lang_admin_php['no_change_needed'] = 'Pas de changements nécessaires, l\'option est déjà à sa valeur par défaut'; // cpg1.5
$lang_admin_php['enabled'] = 'activé'; // cpg1.5
$lang_admin_php['disabled'] = 'désactivé'; // cpg1.5
$lang_admin_php['none'] = 'aucun'; // cpg1.5
$lang_admin_php['warning_change'] = 'Lors du changement de ce paramètre, seuls les fichiers ajoutés à patir de là sont affectés, il est donc conseillé de ne pas modifier ce paramètre une fois qu\'il y a des fichiers dans la Galerie. Vous pouvez néanmoins appliquer les changements aux fichiers existants avec l\'utilitaire (redimensionnement des images) des "outils d\'administration" du menu Administrateur.'; // cpg1.5
$lang_admin_php['warning_exist'] = 'Ces paramètres ne doivent pas être modifiés si vous avez déjà des fichiers dans votre base de donnée.'; // cpg1.5
$lang_admin_php['warning_dont_submit'] = 'Si vous n\'êtes pas sur de l\'impact de ces changements, n\'envoyez pas ce formulaire et vérifiez d\'abord dans la documentation.'; // cpg1.5 // js-alert
$lang_admin_php['menu_only'] = 'uniquement dans les menus'; // cpg1.5
$lang_admin_php['everywhere'] = 'partout'; // cpg1.5
$lang_admin_php['manage_languages'] = 'Gérez les langues'; // cpg1.5
$lang_admin_php['form_token_lifetime'] = 'Durée de vie des balises formulaires'; // cpg1.5
$lang_admin_php['seconds'] = 'Secondes'; // cpg1.5
$lang_admin_php['display_reset_boxes_in_config'] = 'Affiche les cases de remise à la valeur par défaut dans la configuration'; // cpg1.5
}


// ----------------------- //
// File db_ecard.php
// ----------------------- //
if (defined('DB_ECARD_PHP')) {
  $lang_db_ecard_php['title'] = 'eCartes envoyées';
  $lang_db_ecard_php['ecard_sender'] = 'Expéditeur';
  $lang_db_ecard_php['ecard_recipient'] = 'Destinataire';
  $lang_db_ecard_php['ecard_date'] = 'Date';
  $lang_db_ecard_php['ecard_display'] = 'Afficher les eCartes';
  $lang_db_ecard_php['ecard_name'] = 'Nom';
  $lang_db_ecard_php['ecard_email'] = 'Courriel';
  $lang_db_ecard_php['ecard_ip'] = 'IP #';
  $lang_db_ecard_php['ecard_ascending'] = 'ascendant';
  $lang_db_ecard_php['ecard_descending'] = 'descendant';
  $lang_db_ecard_php['ecard_sorted'] = 'triées';
  $lang_db_ecard_php['ecard_by_date'] = 'par date';
  $lang_db_ecard_php['ecard_by_sender_name'] = 'par nom d\'Expéditeur';
  $lang_db_ecard_php['ecard_by_sender_email'] = 'par adresse d\'Expéditeur';
  $lang_db_ecard_php['ecard_by_sender_ip'] = 'par adresse IP d\'Expéditeur';
  $lang_db_ecard_php['ecard_by_recipient_name'] = 'par nom de Destinataire';
  $lang_db_ecard_php['ecard_by_recipient_email'] = 'par adresse de Destinataire';
  $lang_db_ecard_php['ecard_number'] = 'Affichage des enregistrements %s à %s parmi %s';
  $lang_db_ecard_php['ecard_goto_page'] = 'Aller à la page';
  $lang_db_ecard_php['ecard_records_per_page'] = 'enregistrements par page';
  $lang_db_ecard_php['check_all'] = 'Tout cocher';
  $lang_db_ecard_php['uncheck_all'] = 'Tout décocher';
  $lang_db_ecard_php['ecards_delete_selected'] = 'Supprimer les eCartes sélectionnées';
  $lang_db_ecard_php['ecards_delete_confirm'] = 'Etes-vous certain de vouloir Supprimez ces enregistrements ? Merci de cocher la case&nbsp;!';
  $lang_db_ecard_php['ecards_delete_sure'] = 'Je suis certain';
  $lang_db_ecard_php['invalid_data'] = 'Les données de l\'E-Carte à laquelle vous essayez d\'accéder on été corrompues par votre client Mail. Vérifiez que le lien est complet.';
}

// ----------------------- //
// File db_input.php
// ----------------------- //
if (defined('DB_INPUT_PHP')) {
  $lang_db_input_php['empty_name_or_com'] = 'Vous devez taper votre Nom et un Commentaire';
  $lang_db_input_php['com_added'] = 'Votre Commentaire a été ajouté';
  $lang_db_input_php['alb_need_title'] = 'Vous devez donner un Titre à l\'Album&nbsp;!';
  $lang_db_input_php['no_udp_needed'] = 'Aucune mise à jour n\'est nécessaire.';
  $lang_db_input_php['alb_updated'] = 'L\'Album a été mis à jour';
  $lang_db_input_php['unknown_album'] = 'L\'Album sélectionné n\'existe pas ou bien vous n\'avez pas la permission d\'uploader dans cet Album';
  $lang_db_input_php['no_pic_uploaded'] = 'Aucune image n\'a été uploadée&nbsp;!<br /><br />Si vous avez vraiment sélectionné une image à uploader, vérifiez que le serveur autorise l\'upload de fichiers...';
  $lang_db_input_php['err_mkdir'] = 'Impossible de créer le répertoire %s&nbsp;!';
  $lang_db_input_php['dest_dir_ro'] = 'Le répertoire de destination (%s) ne dispose pas des droits d\'écriture nécessaires pour le script!';
  $lang_db_input_php['err_move'] = 'Impossible de déplacer %s vers %s&nbsp;!';
  $lang_db_input_php['err_fsize_too_large'] = 'La taille de l\'image que vous avez uploadé est trop grande (le maximum autorisé est de %s x %s)&nbsp;!';
  $lang_db_input_php['err_imgsize_too_large'] = 'Le poids du fichier que vous avez uploadé est trop important (le maximum autorisé est de %s Ko)&nbsp;!';
  $lang_db_input_php['err_invalid_img'] = 'Le fichier que vous avez uploadé n\'est pas une image valide !';
  $lang_db_input_php['allowed_img_types'] = 'Vous ne pouvez uploader que %s images.';
  $lang_db_input_php['err_insert_pic'] = 'Les images \'%s\' ne peuvent pas être insérées dans l\'Album ';
  $lang_db_input_php['upload_success'] = 'Votre image a été correctement uploadée<br /><br />Elle sera visible après validation de l\'Administrateur.';
  $lang_db_input_php['notify_admin_email_subject'] = '%s - Notification d\'upload';
  $lang_db_input_php['notify_admin_email_body'] = 'Une image a été uploadée par %s. Cela nécessite votre approbation. Connectez-vous à %s';
  $lang_db_input_php['info'] = 'Information';
  $lang_db_input_php['com_added'] = 'Commentaire ajouté';
  $lang_db_input_php['com_updated'] = 'Commentaire modifié';  // cpg1.5.x
  $lang_db_input_php['alb_updated'] = 'Album mis à jour';
  $lang_db_input_php['err_comment_empty'] = 'Votre Commentaire est vide !';
  $lang_db_input_php['err_invalid_fext'] = 'Seuls les fichiers avec les extensions suivantes sont autorisés : <br /><br />%s.';
  $lang_db_input_php['no_flood'] = 'Nous sommes désolés, mais vous êtes déjà l\'Auteur du dernier Commentaire posté au sujet de cette image.<br /><br />Vous pouvez tout simplement éditer votre message précédent si vous souhaitez le modifier ou bien ajouter des informations.';
  $lang_db_input_php['redirect_msg'] = 'Redirection en cours.<br /><br /><br />Cliquez sur \'CONTINUEZ\' si la page ne se recharge pas automatiquement';
  $lang_db_input_php['upl_success'] = 'Votre image a été correctement ajoutée';
  $lang_db_input_php['email_comment_subject'] = 'Commentaire posté sur Coppermine Photo Gallery';
  $lang_db_input_php['email_comment_body'] = 'Quelqu\'un a posté un Commentaire dans votre Galerie. Consultez ce Commentaire à';
  $lang_db_input_php['album_not_selected'] = 'Album non sélectionné';
  $lang_db_input_php['com_author_error'] = 'Un Utilisateur enregistré utilise déjà ce Pseudonyme, connectez-vous ou utilisez en un autre';
}

// ----------------------- //
// File delete.php
// ----------------------- //
if (defined('DELETE_PHP')) {
  $lang_delete_php['caption'] = 'Légende';
  $lang_delete_php['fs_pic'] = 'image en taille réelle';
  $lang_delete_php['del_success'] = 'suppression réussie';
  $lang_delete_php['ns_pic'] = 'image en taille normale';
  $lang_delete_php['err_del'] = 'ne peut pas être supprimé';
  $lang_delete_php['thumb_pic'] = 'Vignette';
  $lang_delete_php['comment'] = 'Commentaire';
  $lang_delete_php['im_in_alb'] = 'image dans l\'Album';
  $lang_delete_php['alb_del_success'] = 'Album \'%s\' supprimé';
  $lang_delete_php['alb_mgr'] = 'Gestionnaire d\'Album';
  $lang_delete_php['err_invalid_data'] = 'Données non valides reçues dans \'%s\'';
  $lang_delete_php['create_alb'] = 'Création de l\'Album \'%s\'';
  $lang_delete_php['update_alb'] = 'Mise à jour de l\'Album \'%s\' avec le Titre \'%s\' et index \'%s\'';
  $lang_delete_php['del_pic'] = 'Supprimer l\'image';
  $lang_delete_php['del_alb'] = 'Supprimer l\'Album';
  $lang_delete_php['del_user'] = 'Supprimer l\'Utilisateur';
  $lang_delete_php['err_unknown_user'] = 'L\'Utilisateur sélectionné n\'existe pas&nbsp;!';
  $lang_delete_php['err_empty_groups'] = 'Il n\'y a pas de Table pour ce Groupe ou elle est vide&nbsp;!';
  $lang_delete_php['comment_deleted'] = 'Le Commentaire a été supprimé avec succès';
  $lang_delete_php['npic'] = 'Image';
  $lang_delete_php['pic_mgr'] = 'Gestion des images';
  $lang_delete_php['update_pic'] = 'Mise à jour de l\'image \'%s\' avec le nom de fichier \'%s\' et l\'index \'%s\'';
  $lang_delete_php['username'] = 'Nom d\'Utilisateur';
  $lang_delete_php['anonymized_comments'] = '%s Commentaire(s) anonyme(s)';
  $lang_delete_php['anonymized_uploads'] = '%s upload(s) public(s) anonyme(s)';
  $lang_delete_php['deleted_comments'] = '%s Commentaire(s) supprimé(s)';
  $lang_delete_php['deleted_uploads'] = '%s upload(s) public(s) supprimé(s)';
  $lang_delete_php['user_deleted'] = 'Utilisateur %s supprimé';
  $lang_delete_php['activate_user'] = 'Activer l\'Utilisateur';
  $lang_delete_php['user_already_active'] = 'Le Compte est déjà activé';
  $lang_delete_php['activated'] = 'Activé';
  $lang_delete_php['deactivate_user'] = 'Désactiver l\'Utilisateur';
  $lang_delete_php['user_already_inactive'] = 'Le Compte est déjà désactivé';
  $lang_delete_php['deactivated'] = 'Désactivé';
  $lang_delete_php['reset_password'] = 'Changer le Mot de Passe';
  $lang_delete_php['password_reset'] = 'Mot de Passe changé pour %s';
  $lang_delete_php['change_group'] = 'Changer de Groupe Principal';
  $lang_delete_php['change_group_to_group'] = 'Changez de %s à %s';
  $lang_delete_php['add_group'] = 'Ajouter un Groupe Secondaire';
  $lang_delete_php['add_group_to_group'] = 'Ajouter l\'Utilisateur %s au Groupe %s. Il est maintenant Membre de %s comme Groupe Primaire et de %s comme Groupe Secondaire.';
  $lang_delete_php['status'] = 'Statut';
  $lang_delete_php['updating_album'] = 'Mise à jour de la position de l\'album ';//cpg1.5
  $lang_delete_php['position'] = ' à ';//cpg1.5 
  $lang_delete_php['updating_pic'] = 'Mise à jour de la position de l\'image ';//cpg1.5
}

// ----------------------- //
// File displayimage.php
// ----------------------- //
if (defined('DISPLAYIMAGE_PHP')){
  $lang_display_image_php['confirm_del'] = 'Voulez-vous vraiment Supprimer cette image?\\n Bien entendu les Commentaires seront également supprimés.';//js-alert
  $lang_display_image_php['del_pic'] = 'Supprimer CETTE IMAGE';
  $lang_display_image_php['size'] = '%s x %s pixels';
  $lang_display_image_php['views'] = '%s fois';
  $lang_display_image_php['slideshow'] = 'Diaporama';
  $lang_display_image_php['stop_slideshow'] = 'ARRETEr LE DIAPORAMA';
  $lang_display_image_php['view_fs'] = 'Cliquer pour voir l\'image en taille réelle';
  $lang_display_image_php['edit_pic'] = 'Modifier la Description';
  $lang_display_image_php['crop_pic'] = 'Retoucher';
  $lang_display_image_php['set_player'] = 'Changer le lecteur';

  $lang_picinfo['title'] ='Informations sur l\'image';
  $lang_picinfo['album name'] = 'Nom de l\'Album';
  $lang_picinfo['Rating'] = 'Note (%s votes)';
  $lang_picinfo['Date Added'] = 'Date d\'ajout';
  $lang_picinfo['Dimensions'] = 'Dimensions';
  $lang_picinfo['Displayed'] = 'Affichées';
  $lang_picinfo['URL'] = 'URL';
  $lang_picinfo['Make'] = 'Marque';
  $lang_picinfo['Model'] = 'Modèle';
  $lang_picinfo['DateTime'] = 'Date/Heure';
  $lang_picinfo['ISOSpeedRatings']='ISO - vitesse estimée';
  $lang_picinfo['MaxApertureValue'] = 'Ouverture maximale';
  $lang_picinfo['FocalLength'] = 'Longueur Focale';
  $lang_picinfo['Comment'] = 'Commentaires';
  $lang_picinfo['addFav']='Ajoutez aux favoris';
  $lang_picinfo['addFavPhrase']='Favoris';
  $lang_picinfo['remFav']='Supprimez des favoris';
  $lang_picinfo['iptcTitle']='Titre IPTC';
  $lang_picinfo['iptcCopyright']='Copyright IPTC';
  $lang_picinfo['iptcKeywords']='Mots clés IPTC';
  $lang_picinfo['iptcCategory']='Catégorie IPTC';
  $lang_picinfo['iptcSubCategories']='Sous-Catégorie IPTC';
  $lang_picinfo['ColorSpace' ]= 'Espace colorimétrique';
  $lang_picinfo['ExposureProgram'] = 'Programme d\'exposition';
  $lang_picinfo['Flash'] = 'Flash';
  $lang_picinfo['MeteringMode'] = 'Mode de mesure';
  $lang_picinfo['ExposureTime'] = 'Temps d\'exposition';
  $lang_picinfo['ExposureBiasValue'] = 'Correction de l\'exposition';
  $lang_picinfo['ImageDescription'] = ' Description de l\'image';
  $lang_picinfo['Orientation'] = 'Orientation';
  $lang_picinfo['xResolution'] = 'Résolution X';
  $lang_picinfo['yResolution'] = 'Résolution Y';
  $lang_picinfo['ResolutionUnit'] = 'Unité de résolution';
  $lang_picinfo['Software'] = 'Logiciel';
  $lang_picinfo['YCbCrPositioning'] = 'Eléments de configuration YCbCr';
  $lang_picinfo['ExifOffset'] = 'Exif Offset';
  $lang_picinfo['IFD1Offset'] = 'IFD1 Offset';
  $lang_picinfo['FNumber'] = 'Ouverture';
  $lang_picinfo['ExifVersion']= 'Version Exif';
  $lang_picinfo['DateTimeOriginal'] = 'Date et heure de la prise de vue';
  $lang_picinfo['DateTimedigitized'] = 'Date et heure de la numérisation';
  $lang_picinfo['ComponentsConfiguration'] = 'Configuration des composants';
  $lang_picinfo['CompressedBitsPerPixel'] = 'Bits compressés par couche';
  $lang_picinfo['LightSource'] = 'Source lumineuse';
  $lang_picinfo['ISOSetting'] = 'Paramètre ISO';
  $lang_picinfo['ColorMode'] = 'Mode de couleurs';
  $lang_picinfo['Quality'] = 'Qualité';
  $lang_picinfo['ImageSharpening'] = 'Image Sharpening';
  $lang_picinfo['FocusMode'] = 'Mode de mesure de distance';
  $lang_picinfo['FlashSetting'] = 'Configuration du Flash';
  $lang_picinfo['ISOSelection' ]= 'ISO Selection';
  $lang_picinfo['ImageAdjustment'] = 'Ajustement de l\'image';
  $lang_picinfo['Adapter'] = 'Adapter';
  $lang_picinfo['ManualFocusDistance'] = 'Manual Focus Distance';
  $lang_picinfo['DigitalZoom'] = 'Zoom numérique';
  $lang_picinfo['AFFocusPosition'] = 'Longueur focale';
  $lang_picinfo['Saturation'] = 'Saturation';
  $lang_picinfo['NoiseReduction'] = 'Réduction du bruit';
  $lang_picinfo['FlashPixVersion'] = 'Flash Pix Version';
  $lang_picinfo['ExifImageWidth'] = 'Dimension X en pixels';
  $lang_picinfo['ExifImageHeight'] = 'Dimension Y en pixels';
  $lang_picinfo['ExifInteroperabilityOffset'] = 'Version d\'interopérabilité';
  $lang_picinfo['FileSource'] = 'Source fichier';
  $lang_picinfo['SceneType'] = 'Type de scene';
  $lang_picinfo['CustomerRender'] = 'Rendu personnalisé';
  $lang_picinfo['ExposureMode'] = 'Mode d\'exposition';
  $lang_picinfo['WhiteBalance'] = 'Balance des blancs';
  $lang_picinfo['DigitalZoomRatio'] = 'Ratio zoom numérique';
  $lang_picinfo['SceneCaptureMode'] = 'Type de capture de scene';
  $lang_picinfo['GainControl'] = 'Controle des gains';
  $lang_picinfo['Contrast'] = 'Contraste';
  $lang_picinfo['Sharpness'] = 'Netteté';
  $lang_picinfo['ManageExifDisplay'] = 'Gère l\'affichage des données EXIF';
  $lang_picinfo['success'] = 'Informations modifiées avec succès.';
  $lang_picinfo['show_details'] = 'Montrer le détail'; // cpg1.5.x
  $lang_picinfo['hide_details'] = 'Cacher le détail'; // cpg1.5.x
  $lang_picinfo['download_URL'] = 'Lien direct';
  $lang_picinfo['movie_player'] = 'Lire le fichier avec votre application standard';

  $lang_display_comments['edit_title'] = 'Modifier ce Commentaire';
  $lang_display_comments['delete_title'] = 'Effacer ce Commentaire'; // cpg1.5.x
  $lang_display_comments['confirm_delete'] = 'Etes vous sur de vouloir effacer ce Commentaire ?'; //js-alert
  $lang_display_comments['add_your_comment'] = 'Ajouter votre Commentaire';
  $lang_display_comments['name']='Nom';
  $lang_display_comments['comment']='Commentaire';
  $lang_display_comments['your_name'] = 'Anonyme';
  $lang_display_comments['report_comment_title'] = 'Envoyer ce Commentaire à l\'Administrateur';
  $lang_display_comments['pending_approval'] = 'Commentaire visible après approbation de l\'Administrateur'; // cpg1.5.x
  $lang_display_comments['unapproved_comment'] = 'Commentaire non approuvé'; // cpg1.5.x
  $lang_display_comments['pending_approval_message'] = 'Quelqu\'un a posté un Commentaire ici. Celui-ci sera visible après approbation par l\'Administrateur.'; // cpg1.5.x
  $lang_display_comments['approve'] = 'Approuve le Commentaire'; // cpg1.5.x
  $lang_display_comments['disapprove'] = 'Désapprouve le Commentaire'; // cpg1.5.x
  $lang_display_comments['log_in_to_comment'] = 'Les Commentaires anonymes ne sont pas autorisés ici. %sIdentifiez-vous%s pour poster votre Commentaire'; // cpg1.5.x // do not translate the %s placeholders - they will be used as wrappers for the link (<a>)
  $lang_display_comments['default_username_message'] = 'Merci d\'indiquer votre nom pour les Commentaires'; // cpg1.5.x
  $lang_display_comments['comment_rejected'] = 'Votre commentaire a été rejeté'; // cpg1.5

  $lang_fullsize_popup['click_to_close'] = 'Cliquer sur l\'image pour fermer cette vue';
  $lang_fullsize_popup['close_window'] = 'fermer la fenêtre'; // cpg1.5
}

// ----------------------- //
// File ecard.php
// ----------------------- //

if (defined('ECARDS_PHP')) {
  $lang_ecard_php['title'] = 'Envoyer en tant que Carte Electronique';
  $lang_ecard_php['invalid_email'] = '<b><u>Attention</u></b> : cette adresse e-mail n\'est pas valide&nbsp;!';
  $lang_ecard_php['ecard_title'] = 'Une Carte Electronique pour vous, de la part de %s';
  $lang_ecard_php['error_not_image'] = 'Seules les images peuvent être envoyées sous forme de Cartes Electroniques.'; // cpg1.5.x
  $lang_ecard_php['error_not_image_flash'] = 'Seuls les images et les fichiers au format Flash peuvent être envoyés sous forme de Cartes Electroniques.'; // cpg1.5.x
  $lang_ecard_php['view_ecard'] = 'Lien de substitution si la Carte Electronique ne s\'affiche pas correctement';
  $lang_ecard_php['view_ecard_plaintext'] = 'Pour voir cette Carte Postale Electronique, copiez et collez cette URL dans la barre d\'adresse de votre navigateur:';
  $lang_ecard_php['view_more_pics'] = 'Suiver ce lien pour découvrir davantage de photos&nbsp;!';
  $lang_ecard_php['send_success'] = 'Votre Carte Electronique a été envoyée avec succès !';
  $lang_ecard_php['send_failed'] = 'Nous sommes désolés, mais le serveur n\'a pu envoyer votre Carte Electronique...';
  $lang_ecard_php['from'] = 'De la part de :';
  $lang_ecard_php['your_name'] = 'Votre Nom :';
  $lang_ecard_php['your_email'] = 'Votre adresse courriel :';
  $lang_ecard_php['to'] = 'A';
  $lang_ecard_php['rcpt_name'] = 'Nom du destinataire :';
  $lang_ecard_php['rcpt_email'] = 'Adresse courriel du destinataire :';
  $lang_ecard_php['greetings'] = 'Introduction :';
  $lang_ecard_php['message'] = 'Message :';
  $lang_ecard_php['ecards_footer'] = 'Envoyé par %s depuis l\'adresse IP %s à %s (Heure de la Galerie)';
  $lang_ecard_php['preview'] = 'Prévisualisation de cette eCarte';
  $lang_ecard_php['preview_button'] = 'Prévisualisation';
  $lang_ecard_php['submit_button'] = 'Envoyer la eCarte';
  $lang_ecard_php['preview_view_ecard'] = 'Ce sera le lien inclu à la Carte Electronique lorsqu\'elle sera générée. Ne fonctionne pas lors des prévisualisations.';
}

// ----------------------- //
// File report_file.php
// ----------------------- //

if (defined('REPORT_FILE_PHP')) { 
  $lang_report_php['title'] = 'Rapport à l\'Administrateur';
  $lang_report_php['invalid_email'] = '<b>Attention</b> : adresse courriel invalide !';
  $lang_report_php['report_subject'] = 'Un rapport de %s de la Galerie %s';
  $lang_report_php['view_report'] = 'Lien alternatif si le rapport ne s\'affiche pas correctement';
  $lang_report_php['view_report_plaintext'] = 'Pour voir le rapport, copiez et collez cette adresse dans la barre d\'adresse de votre navigateur:';
  $lang_report_php['view_more_pics'] = 'Galerie';
  $lang_report_php['send_success'] = 'Votre rapport a été envoyé';
  $lang_report_php['send_failed'] = 'Désolé mais le serveur ne peut pas envoyer votre rapport...';
  $lang_report_php['from'] = 'De :';
  $lang_report_php['your_name'] = 'Votre Nom :';
  $lang_report_php['your_email'] = 'Votre adresse courriel :';
  $lang_report_php['to'] = 'A :';
  $lang_report_php['administrator'] = 'Mode Administrateur';
  $lang_report_php['subject'] = 'Sujet';
  $lang_report_php['comment_field_name'] = 'Faire un rapport sur le Commentaire de &quot;%s&quot;';
  $lang_report_php['reason'] = 'Raison';
  $lang_report_php['message'] = 'Message';
  $lang_report_php['report_footer'] = 'Envoyé par %s depuis l\'adresse IP %s à %s (Heure de la Galerie)';
  $lang_report_php['obscene'] = 'obscène';
  $lang_report_php['offensive'] = 'violent';
  $lang_report_php['misplaced'] = 'Hors sujet/Mal placé';
  $lang_report_php['missing'] = 'manque';
  $lang_report_php['issue'] = 'erreur/ne peut être visualisé';
  $lang_report_php['other'] = 'autre';
  $lang_report_php['refers_to'] = 'Le rapport se réfère à g';
  $lang_report_php['reasons_list_heading'] = 'raison(s) du rapport:';
  $lang_report_php['no_reason_given'] = 'Sans raisons';
  $lang_report_php['go_comment'] = 'Allez au Commentaire';
  $lang_report_php['view_comment'] = 'Voir le rapport complet avec le Commentaire';
  $lang_report_php['type_file'] = 'fichier';
  $lang_report_php['type_comment'] = 'Commentaire';
  $lang_report_php['invalid_data'] = 'Les données du rapport auquel vous essayez d\'accéder ont été corrompues par votre client mail. Vérifiez si le lien est correct et complet.';
}

// ----------------------- //
// File editpics.php
// ----------------------- //

if (defined('EDITPICS_PHP')) {
  $lang_editpics_php['pic_info'] = 'Information sur l\'image';
  $lang_editpics_php['desc'] = 'Déscription';
  $lang_editpics_php['approval'] = 'Approbation'; //cpg 1.5
  $lang_editpics_php['approved'] = 'Approuvé'; //cpg 1.5
  $lang_editpics_php['unapproved'] = 'Désaprouvé'; //cpg 1.5
  $lang_editpics_php['new_keyword'] = 'Nouveau Mot-Clef';
  $lang_editpics_php['new_keywords'] = 'Nouveaux Mots-Clefs trouvés';
  $lang_editpics_php['existing_keyword'] = 'Mots-Clefs existants';
  $lang_editpics_php['pic_info_str'] = '%sx%s - %sKo - %s affichages - %s votes';
  $lang_editpics_php['approve'] = 'Approuver';
  $lang_editpics_php['postpone_app'] = 'Approuver plus tard';
  $lang_editpics_php['del_pic'] = 'Supprimer l\'image';
  $lang_editpics_php['del_all'] = 'Supprimer TOUS les fichiers';
  $lang_editpics_php['read_exif'] = 'Relire les informations EXIF';
  $lang_editpics_php['reset_view_count'] = 'Réinitialiser le compteur de téléchargements ';
  $lang_editpics_php['reset_all_view_count'] = 'Réinitialiser TOUS les compteurs de vues';
  $lang_editpics_php['reset_votes'] = 'Réinitialiser les Votes';
  $lang_editpics_php['reset_all_votes'] = 'Réinitialiser TOUS les Votes';
  $lang_editpics_php['del_comm'] = 'Supprimer les Commentaires';
  $lang_editpics_php['del_all_comm'] = 'Supprimer TOUS les Commentaires';
  $lang_editpics_php['upl_approval'] = 'Autorisation d\'upload';
  $lang_editpics_php['edit_pics']= 'Modifier les images';
  $lang_editpics_php['edit_pic'] = 'Modifier le Fichier'; //cpg 1.5
  $lang_editpics_php['see_next'] = 'Voir les images suivantes';
  $lang_editpics_php['see_prev'] = 'Voir les images précédentes';
  $lang_editpics_php['n_pic'] = '%s images';
  $lang_editpics_php['n_of_pic_to_disp'] = 'Nombre d\'images à Afficher';
  $lang_editpics_php['crop_title'] = 'Editeur Photo de Coppermine';
  $lang_editpics_php['preview'] = 'Prévisualiser';
  $lang_editpics_php['save'] = 'Sauvegarder la photo';
  $lang_editpics_php['save_thumb'] ='Sauvegarder en tant que Vignette';
  $lang_editpics_php['gallery_icon'] = 'Faites-en mon Icône (avatar)';
  $lang_editpics_php['sel_on_img'] ='La sélection doit être entièrement sur l\\\'image'; //js-alert //cpg1.3.0
  $lang_editpics_php['album_properties'] ='Propriétés de l\'Album';
  $lang_editpics_php['parent_category'] ='Catégorie parente';
  $lang_editpics_php['thumbnail_view'] ='Visualisation des Vignettes';
  $lang_editpics_php['select_unselect'] ='sélectionner/<br>déselectionner tout';
  $lang_editpics_php['file_exists'] = 'La destination du fichier \'%s\' existe déjà';
  $lang_editpics_php['rename_failed'] = 'Impossible de renommer \'%s\' en \'%s\'.';
  $lang_editpics_php['src_file_missing'] = 'La source du fichier \'%s\' est manquante.'; // cpg 1.4
  $lang_editpics_php['mime_conv'] = 'Impossible de convertir le fichier de \'%s\' en \'%s\'';//cpg1.4
  $lang_editpics_php['forb_ext'] = 'Type d\'extension de fichier non autorisée.';//cpg1.4
  $lang_editpics_php['error_editor_class'] = 'la classe de l\'éditeur pour votre méthode de redimmensionnement n\'est pas implémentée'; //cpg 1.5
  $lang_editpics_php['error_document_size'] = 'Le document n\\\'a pas de largeur où de de hauteur'; //cpg 1.5  //js-alert
  $lang_editpics_php['success_picture'] = 'Image sauvegardée avec succès - vous pouvez %sfermer%s cette fenêtre maintenant'; //cpg 1.5 // do not translate "%s" here
  $lang_editpics_php['success_thumb'] = 'Vignette sauvegardée avec succès - vous pouvez %sfermer%s cette fenêtre maintenant'; //cpg 1.5 // do not translate "%s" here
  $lang_editpics_php['rotate'] = 'Rotation'; //cpg 1.5
  $lang_editpics_php['mirror'] = 'Mirroir'; //cpg 1.5
  $lang_editpics_php['scale'] = 'Echelle'; //cpg 1.5
  $lang_editpics_php['new_width'] = 'Nouvelle largeur'; //cpg 1.5
  $lang_editpics_php['new_height'] = 'Nouvelle hauteur'; //cpg 1.5
  $lang_editpics_php['enable_clipping'] = 'Activer les repères de coupe, appliquer pour le recadrage'; //cpg 1.5
  $lang_editpics_php['jpeg_quality'] = 'Qualité de sortie JPEG'; //cpg 1.5
  $lang_editpics_php['or'] = 'OU'; //cpg 1.5
  $lang_editpics_php['approve_pic'] = 'Approuver le fichier'; //cpg 1.5
  $lang_editpics_php['approve_all'] = 'Approuver TOUS les fichiers'; //cpg 1.5
  $lang_editpics_php['error_empty'] = 'l\'Album est vide'; // cpg1.5
  $lang_editpics_php['error_approval_empty'] = 'Il n\'y a plus d\'images à approuver'; // cpg1.5
  $lang_editpics_php['error_linked_only'] = 'L\'Album ne contient que des fichiers liés que vous ne pouvez pas modifier ici'; // cpg1.5
  $lang_editpics_php['note_approve_public'] = 'Les fichier déplacés vers un album publique doivent être approuvés par un administrateur.'; // cpg1.5
  $lang_editpics_php['note_approve_private'] = 'Les fichiers déplacés vers un album privé doivent être approuvés par un administrateur.' ; // cpg1.5
  $lang_editpics_php['note_edit_control'] = 'Les fichiers déplacés vers un album publique ne peuvent plus être modifiés.'; // cpg1.5
  $lang_editpics_php['confirm_move_control'] = 'Vous n\\\'êtes pas autorisé à modifier les fichiers dans les albums publics.\\nEtes vous sur de vouloir déplacer ce fichier vers un album public ?'; // cpg1.5 //js-alert
}

// ------------------------------------------------------------------------- //
// File export.php
// ------------------------------------------------------------------------- //
if (defined('EXPORT_PHP')) {
  $lang_export_php['export'] = 'Export'; //cpg 1.5
  $lang_export_php['export_type'] = 'Type d\'Export :'; //cpg 1.5
  $lang_export_php['html'] = 'Format HTML'; //cpg 1.5
  $lang_export_php['images'] = 'Uniquement les Images'; //cpg 1.5
  $lang_export_php['export_directory'] = 'Répertoire d\'Export :'; //cpg 1.5
  $lang_export_php['processing'] = 'En cours...'; //cpg 1.5
} 
  
// ----------------------- //
// File forgot_passwd.php
// ----------------------- //

if (defined('FORGOT_PASSWD_PHP')) {
  $lang_forgot_passwd_php['forgot_passwd'] = 'Rappel de Mot de Passe';
  $lang_forgot_passwd_php['err_already_logged_in'] = 'Vous êtes déjà identifié&nbsp;!';
  $lang_forgot_passwd_php['enter_email'] = 'Saisissez votre adresse de messagerie';
  $lang_forgot_passwd_php['submit'] = 'Envoyer';
  $lang_forgot_passwd_php['illegal_session'] = 'Le Mot de Passe pour cette session est invalide ou a expiré.';
  $lang_forgot_passwd_php['failed_sending_email'] = 'Le Mot de Passe n\'a pas pu être envoyé&nbsp;!';
  $lang_forgot_passwd_php['email_sent'] = 'Un message a été envoyé avec votre Mot de Passe à l\'adresse %s';
  $lang_forgot_passwd_php['verify_email_sent'] = 'Un courriel a été envoyé à %s. Veuillez vérifier vos courriels pour terminer le processus.';
  $lang_forgot_passwd_php['err_unk_user'] = 'L\'Utilisateur indiqué n\'existe pas&nbsp;!';
  $lang_forgot_passwd_php['account_verify_subject'] = '%s - Demande de nouveau Mot de Passe';
  $lang_forgot_passwd_php['passwd_reset_subject'] = '%s - Votre nouveau Mot de Passe';
  $lang_forgot_passwd_php['account_verify_email'] = <<<EOT
Vous avez demandé la génération d'un nouveau mot de passe. Si vous voulez qu'un nouveau mot de passe vous soit envoyé, cliquez sur le lien:

<a href="{VERIFY_LINK}">{VERIFY_LINK}</a>


Cordialement,

L'Administrateur du site {SITE_NAME}

EOT;

$lang_forgot_passwd_php['reset_email'] = <<<EOT
Voici le nouveau Mot de Passe que vous avez demandé :

Nom d'Utilisateur :{USER_NAME}
Mot de Passe :{PASSWORD}

Allez à <a href="{SITE_LINK}">{SITE_LINK}</a> pour vous indentifier.


Cordialement,

L'Administrateur du site {SITE_NAME}

EOT;
}

// ----------------------- //
// File groupmgr.php
// ----------------------- //
if (defined('GROUPMGR_PHP')) {
  $lang_groupmgr_php['group_manager'] = 'Gestionnaire de Groupes'; // cpg 1.5.x
  $lang_groupmgr_php['group_name'] = 'Nom du Groupe';
  $lang_groupmgr_php['permissions'] = 'Droits';
  $lang_groupmgr_php['public_albums'] = 'Téléchargement dans les Albums Publics';
  $lang_groupmgr_php['personal_gallery'] = 'Galerie Personnelle';
  $lang_groupmgr_php['disk_quota'] = 'Quota disque';
  $lang_groupmgr_php['rating'] = 'Note';
  $lang_groupmgr_php['ecards'] = 'Cartes Electronique';
  $lang_groupmgr_php['comments'] = 'Commentaires';
  $lang_groupmgr_php['allowed'] = 'Autorisé';
  $lang_groupmgr_php['approval'] = 'Approbation';
  $lang_groupmgr_php['create_new_group'] = 'Créer un Nouveau Groupe';
  $lang_groupmgr_php['del_groups'] = 'Supprimer le(s) Groupe(s) sélectionné(s)';
  $lang_groupmgr_php['confirm_del'] = 'Attention, lorsque vous supprimez un Groupe, les Utilisateurs de ce groupe seront transférés dans le groupe d\\\'Utilisateurs \\\'Enregistré\\\'!\n\nSouhaitez-vous vraiment CONTINUEZ ?';//js-alert
  $lang_groupmgr_php['title'] = 'Gérer les Groupes d\'Utilisateurs';
  $lang_groupmgr_php['reset_to_default'] = 'Mettre le nom par défaut (%s) - recommandé&nbsp;!';
  $lang_groupmgr_php['error_group_empty'] = 'La Table MySQL du Groupe est vide&nbsp;!<br /><br />Groupe par défaut créé, rechargez s\'il vous plait la page';
  $lang_groupmgr_php['explain_greyed_out_title'] = 'Pourquoi cette colonne est elle grisée ?';
  $lang_groupmgr_php['explain_guests_greyed_out_text'] = 'Vous ne pouvez pas changer les propriétés de ce Groupe car vous avez choisi &quot;Non&quot; pour l\'option &quot;Autorisez l\'accès aux visiteurs non authentifiés (visiteur ou anonyme)&quot; dans la page Configuration. Les visiteurs ne peuvent donc rien faire d\'autre que se connecter; il n\'y a donc pas de règlages de Groupe pour ceux-ci.';
  $lang_groupmgr_php['group_assigned_album'] = 'Album(s) assigné(s)';
$lang_groupmgr_php['access_level'] = 'Niveau d\'accès'; // cpg1.5
$lang_groupmgr_php['thumbnail_intermediate_full'] = 'Vignette, Image intermédiaire, et image taille originale'; // cpg1.5
$lang_groupmgr_php['thumbnail_intermediate'] = 'Vignette et image intermédiaire'; // cpg1.5
$lang_groupmgr_php['thumbnail_only'] = 'Vignette uniquement'; // cpg1.5
$lang_groupmgr_php['none'] = 'Aucuns'; // cpg1.5
}

// ----------------------- //
// File index.php
// ----------------------- //
if (defined('INDEX_PHP')){
  $lang_index_php['welcome'] = 'Bienvenue !';

  $lang_album_admin_menu['confirm_delete'] = 'Voulez-vous VRAIMENT Supprimez cet Album ? \\nToutes les photos et tous les Commentaires seront bien entendu perdus.';//js-alert
  $lang_album_admin_menu['delete'] = 'SUPPRIMER';
  $lang_album_admin_menu['modify'] = 'PROPRIETES';
  $lang_album_admin_menu['edit_pics'] = 'MODIFIER LES PHOTOS';
  $lang_album_admin_menu['cat_locked'] = 'Ces Albums sont verrouillés pour les modifications'; // cpg 1.5.x

  $lang_list_categories['home'] = 'Accueil';
  $lang_list_categories['stat1'] = 'Il y a <b>[pictures]</b> photos dans <b>[Albums]</b> Albums et <b>[cat]</b> Catégories avec <b>[comments]</b> Commentaires affichées <b>[views]</b> fois';
  $lang_list_categories['stat2'] = 'Il y a <b>[pictures]</b> photos dans <b>[Albums]</b> Albums affichés <b>[views]</b> fois';
  $lang_list_categories['xx_s_gallery'] = '%s\'s Galerie';
  $lang_list_categories['stat3'] = 'Il y a <b>[pictures]</b> photos dans <b>[Albums]</b> Albums avec <b>[comments]</b> Commentaires affichées <b>[views]</b> fois';

  $lang_list_users['user_list'] = 'Liste d\'Utilisateurs';
  $lang_list_users['no_user_gal'] = 'Il n\'y a pas de nouvelle Galerie d\'Utilisateurs';
  $lang_list_users['n_albums'] = '%s Album(s)';
  $lang_list_users['n_pics'] = '%s photo(s)';

  $lang_list_albums['n_pictures'] = '%s photos';
  $lang_list_albums['last_added'] = ', la dernière a été ajoutée le %s';
  $lang_list_albums['n_link_pictures'] = '%s fichiers liés';
  $lang_list_albums['total_pictures'] = '%s total de fichiers';
  $lang_list_albums['alb_hits'] = 'Album visualisé %s fois'; // cpg1.5.x
  $lang_list_albums['from_category'] = ' - De la Catégorie: '; // cpg1.5
}

// ----------------------- //
// File install.php
// ------------------------------------------------------------------------- //

if (defined('INSTALL_PHP')) {
  $lang_install['already_succ'] = 'L\'installeur a déjà été utilisé avec succès, il est maintenant vérouillé.';
  $lang_install['already_succ_explain'] = 'Si vous souhaitez relancer l\'installeur à nouveau, vous devez d\'abord effacer le fichier \'include/config.inc.php\' qui a été crée dans le répertoire ou vous avez placé Coppermine. Vous pouvez le faire avec un éditeur de texte';
  $lang_install['cant_read_tmp_conf'] = 'L\'installeur ne peut pas lire le fichier temporaire de configuration %s, vérifiez les permissions de vos répertoires.';
  $lang_install['cant_write_tmp_conf'] = 'l\'installeur de peut pas écrite le fichier temporaire de configuration %s, vérifiez les permissions de vos répertoires.';
  $lang_install['review_permissions'] = 'Merci de vérifier les permissions de ce répertoire.';
  $lang_install['change_lang'] = 'Changer de langue';
  $lang_install['check_path'] = 'Vérifier le chemin';
  $lang_install['continue'] = 'Etape suivante';
  $lang_install['conv_said'] = 'Le programme de conversion dit :';
  $lang_install['license_info']= 'Coppermine est un script de Galerie d\'images et de contenu multimédia qui est publié sous licence GNU GPL v3. En l\'installant, vous acceptés les termes de celle-ci :';
  $lang_install['cpg_info_frames'] = 'Votre navigateur semble ne pas pouvoir afficher les cadres imbriqués (iframes). Vous pouvez trouver la licence dans le répertoire \'docs\' qui se trouve dans le pack de Coppermine.';
  $lang_install['license'] = 'Acceptation de la licence de Coppermine';
  $lang_install['create_table'] = 'Création de la table \'%s\'';
  $lang_install['db_populating'] = 'Essai d\'insertion de données dans la base de données.';
  $lang_install['db_alr_populated'] = 'Les données requises sont déjà insérées dans la base de donnése.';
  $lang_install['dir_ok'] = 'Répertoire trouvé';
  $lang_install['directory'] = 'Répertoire';
  $lang_install['email'] = 'Adresse courriel';
  $lang_install['email_no_match'] = 'Les adresse courriels ne sont pas identiques ou sont invalides.';
  $lang_install['email_verif'] = 'Vérification de l\'adresse courriel';
  $lang_install['err_cpgnuke'] = '<h1>ERREUR</h1>Il semble que vous installez une version autonome de Coppermine dans votre portail Nuke.<br />Cette version ne peut être utilisée que de manière autonome !<br />Certaines configurations de serveur affichent cet avertissement même si vous n\'utilisez pas de portail Nuke - si c\'est votre cas, <a href="%s?continue_anyway=1">continuez</a> avec le processus d\'installation. Si vous utilisez un portail Nuke, vous devriez regarder ici <a href=\"http://www.cpgnuke.com/\">CpgNuke</a> ou Utilisez le <a href=\"http://sourceforge.net/project/showfiles.php?group_id=89658&amp;package_id=95984\">portage de Coppermine</a> (sans support d\'aide) - ne continuez pas !';
  $lang_install['error'] = 'ERREUR';
  $lang_install['error_need_corr'] = 'Les erreurs suivantes ont été rencontrées et doivent être corrigées d\'abord:';
  $lang_install['finish'] = 'Terminer l\'installation';
  $lang_install['gd_note'] = '<strong>Important :</strong> les anciennes versions de la librairie graphiqueGD ne gèrent que les images JPEG et PNG . Si vous êtes dans ce cas, le script ne pourra pas créer des vignettes pour les fichiers GIF.';
  $lang_install['go_to_main'] = 'Aller à la page d\'accueil';
  $lang_install['im_no_convert_ex'] = 'L\'installeur a trouvé l\'utilitaire  \'convert\' ImageMagick dansn \'%s\', toutefois il ne peut pas être utilisé par le script.<br /><br />Vous devriez utiliser GD à la place d\'ImageMagick.';
  $lang_install['im_not_found'] = 'L\'installeur a essayé de trouver ImageMagick, mais n\'a pas pus vérifier son existence ou a rencontré une erreur. <br />Coppermine peut utiliser l\'utilitaire <a href="http://www.imagemagick.org/" target="_blank">d\'ImageMagick</a>  \'convert\' pour créer les vignettes. La qualité des images produites par ImageMagick est supérieure à GD1 mais équivalente à GD2.<br /><br />Si ImageMagick est installé sur votre système et que vous voulez l\'utiliser, <br />vous devez entrer le chemin complet vers l\'utilitaire \'convert\' ci-desous. <br />Sous Windows le chemin devrait ressembler à ça: \'c:/ImageMagick/\' et ne doit pas comprendre d\'espaces, sous Unix c\'est quelque chose comme \'/usr/bin/X11/\'.<br /><br />Si vous ne savez pas si vous avez ImageMagick ou pas, laissez ce champ vide - l\'installeur va essayer d\'Utilisez GD2 par défaut (c\'est la configuration de la plupart des Utilisateurs). <br />Vous pourrez changer cela plus tard (dans la page de configuration de Coppermine), n\'ayez donc aucune crainte si vous ne savez pas quoi entrer ici - laissez simplement le champ vide.';
  $lang_install['im_packages'] = 'Votre serveur supporte les librairies graphiques suivantes :';
  $lang_install['im_path'] = 'Chemin vers ImageMagick:';
  $lang_install['im_path_space'] = 'Le chemin vers ImageMagick (\'%s\') contient au moins un espace. Cela va poser des problèmes dans le script.<br /><br />Vous devez déplacer ImageMagick dans un autre répertoire.';
  $lang_install['installation'] = 'installation';
  $lang_install['installer_locked'] = 'L\'installeur est vérouillé';
  $lang_install['installer_selected'] = 'L\'installeur est sélectionné';
  $lang_install['inv_im_path'] = 'L\'installeur ne peut pas trouver le répertoire \'%s\' que vous avez donné pour ImageMagick ou n\'a pas la permission d\'y accéder. Vérifiez que vous avez correctement entré le chemin et que vous avez accès au répertoire spécifié.';
  $lang_install['last_step'] = 'Dernière étape...';
  $lang_install['lets_go'] = 'En avant !';
  $lang_install['mysql_create_btn'] = 'Créer';
  $lang_install['mysql_create_db'] = 'Créer une nouvelle base de donnée MySql';
  $lang_install['mysql_db_name'] = 'Nom de la base de donnée MySQL';
  $lang_install['mysql_error'] = 'erreur MySQL : ';
  $lang_install['mysql_host'] = 'Hôte MySQL <br />(localhost est généralement OK)';
  $lang_install['mysql_username'] = 'Nom d\'utilisateur MySQL'; // cpg1.5
  $lang_install['mysql_password'] = 'Mot de passe MySQL'; // cpg1.5
  $lang_install['mysql_no_create_db'] = 'La base de donnée MySql ne peut pas être créer.';
  $lang_install['mysql_no_sel_dbs'] = 'Impossible de récupérer les bases de données MySQL disponible';
  $lang_install['mysql_succ'] = 'Succès de la connection avec la base de donnée';
  $lang_install['mysql_tbl_pref'] = 'Préfixe des tables MySQL';
  $lang_install['mysql_test_connection'] = 'Test de connection';
  $lang_install['mysql_wrong_db'] = 'MySQL ne trouve pas la base de donnée nommée \'%s\' vérifiez le nom que vous avez entré pour cela';
  $lang_install['n_a'] = 'N/A';
  $lang_install['no_admin_email'] = 'Vous devez entrer une adresse courriel pour l\'administration';
  $lang_install['no_admin_password'] = 'Vous devez entrer un mot de passe Administrateur';
  $lang_install['no_admin_username'] = 'Vous devez entrer un nom d\'Utilisateur pour l\'Administrateur';
  $lang_install['no_dir'] = 'Répertoire non disponible';
  $lang_install['no_gd'] = 'Votre installation de PHP ne semble pas inclure l\'extension pour la librarie graphique \'GD\' et vous n\'avez pas indiqué voulir Utilisez ImageMagick. Coppermine a été configuré pour Utilisez GD2, la détection automatique de GD posant parfois des problèmes. Si GD est installé sur votre système, le script pourra fonctionner, sinon, vous devrez instAllez ImageMagik.';
  $lang_install['no_mysql_conn'] = 'Impossible de créer une connection MySQL, vérifiez les données entrées pour la connection';
  $lang_install['no_mysql_support'] = 'PHP n\'a pas de support MySQL actif.';
  $lang_install['no_thumb_method'] = 'Vous avez choisi un système de manipulation d\'images (GD/IM)';
  $lang_install['nok'] = 'INCORRECT';
  $lang_install['not_here_yet'] = 'Rien de particulier ici pour l\'instant, merci de cliquer %sici%s pour revenir.';
  $lang_install['ok'] = 'CORRECT';
  $lang_install['on_q'] = 'dans la requête';
  $lang_install['or'] = 'ou';
  $lang_install['pass_err'] = 'Les mots de passe ne sont pas identiques; vous utilisez des caractères illégaux ou vous n\'en n\'avez pas défini.';
  $lang_install['password'] = 'Mot de Passe';
  $lang_install['password_verif'] = 'Vérification du Mot de Passe';
  $lang_install['perm_error'] = 'Les autorisations de \'%s\' sont paramétrées à %s, merci de les paramétrer à';
  $lang_install['perm_ok'] = 'Les autorisations de certains répertoires ont été vérifiées et semblent correctes. <br />Merci d\'aller à l\'étape suivante.';
  $lang_install['perm_not_ok'] = 'Les autorisations de certains répertoires ne sont par correctes.<br />Changez les autorisations des répertoires ci-desous marqués "INCORRECT".'; // cpg1.5
  $lang_install['please_go_back'] = 'Merci de %scliquer ici%s pour revenir en arrière et corriger ce problème avant de continuer.';
  $lang_install['populate_db'] = 'Complétez la base de donnée';
  $lang_install['ready_to_roll'] = '<a href="index.php">Coppermine</a> est maintenant correctement configuré et prêt à fonctionner.<br /><br /><a href="login.php">Identiez-vous</a> en utilisant les informations que vous avez données pour votre compte Administrateur.';
  $lang_install['sect_create_adm'] = 'Cette partie requière des informations pour créer votre compte Administrateur Coppermine. N\'utilisez que des caractères alphanumériques. Entrez et vérifiez ces données attentivement!';
  $lang_install['sect_mysql_info'] = 'Cette section demande les informations pour savoir comment se connecter à votre base de données MySQL.<br />Si vous ne savez pas comment les remplir, demandez de l\'aide à votre hébergeur.';
  $lang_install['sect_mysql_sel_db'] = 'Ici vous devez choisir quelle base de données vous voulez Utilisez pour Coppermine. <br />Si votre compte Mysql a les privilèges requis, vous pouvez créer une nouvelle base de données depusi l\'installeur ou Utilisez une base de données existante. Si vous ne voulez d\'aucune de ces deux options, vous devrez créer une base de données hors de l\'installeur Coppermine, puis revenir ici et sélectionner la nouvelle base de donnée depuis la liste déroulante. Vous pouvez aussi changer le préfixe des Tables (N\'utilisez pas de point), mais il est recommander de laisser le préfixe par défaut tel quel.';
  $lang_install['select_lang'] = 'Sélectionner la langue par défaut: ';
  $lang_install['sql_file_not_found'] = 'Le fichier \'%s\' n\'a pas pu être trouvé. Vérifiez que vous avez téléchargé tous les fichiers Coppermine sur votre serveur';
  $lang_install['status'] = 'Statut';
  $lang_install['subdir_called'] = 'Un sous-répertoire nommé \'%s\' devrait normalement exister dans le répertoire où vous avez téléchargé Coppermine. <br />L\'installeur ne peut pas le trouver. Vérifiez que vous avez téléchargé tous les fichiers Coppermine sur le serveur.';
  $lang_install['title_admin'] = 'Créez l\'Adminstrateur Coppermine';
  $lang_install['title_dir_check'] = 'Vérification des autorisations des répertoires';
  $lang_install['title_file_check'] = 'Vérification des fichiers d\installation';
  $lang_install['title_finished'] = 'Installation Complète';
  $lang_install['title_imp'] = 'Sélection de la Librairie Graphique';
  $lang_install['title_imp_test'] = 'Test de la Librairie Graphique';
  $lang_install['title_mysql_db_sel'] = 'Sélection de la base de données MySQL';
  $lang_install['title_mysql_pop'] = 'Création de la structure de la base de données';
  $lang_install['title_mysql_user'] = 'Autentification de l\'Utilisateur de MySQL';
  $lang_install['title_welcome'] = 'Bienvenue dans l\'installation de Coppermine';
  $lang_install['tmp_conf_error'] = 'Impossible d\'écrire dans le fichier temporaire de configuration, <br />assurez vous que le répertoire \'include\' à les permissions en écriture (777)';
  $lang_install['tmp_conf_ser_err'] = 'Une erreur sérieuse est intervenue dans l\'installeur, essayez de recharger votre page (F5) ou recommencez en effacant le fichier \'include/config.tmp\'.';
  $lang_install['try_again'] = 'Essayez encore !';
  $lang_install['unable_write_config'] = 'Impossible de créer le fichier de configuration';
  $lang_install['user_err'] = 'Le nom d\'Utilisateur doit contenir uniquement des caractères alphanumériques et ne peut pas être vide.';
  $lang_install['username'] = 'Nom d\'Utilisateur';
  $lang_install['your_admin_account'] = 'Votre compte Administrateur';
  $lang_install['no_cookie'] = 'Votre navigateur n\'accèpte pas les cookies (même si il est très sucré). Il est recommandé d\'accepter les cookies (même si ça peut faire grossir)';
  $lang_install['no_javascript'] = 'Votre navigateur semble ne pas avoir le Javascript activé, il est hautement recommandé de l\'activer.';
  $lang_install['register_globals_detected'] = 'Il semble que votre configuration de PHP à le \'register_globals\' actif, vous devriez le désActivez pour des raisons de sécurité.';
  $lang_install['version_undetected'] = 'Le script ne peut pas déterminer quelle version de %s votre serveur utilise. Assurez-vous que c\'est au moins la version %s';
  $lang_install['version_incompatible'] = 'Le script a détecté une version incompatible (%s) de %s sur votre serveur.<br />Assurez-vous d\'utiliser une version compatible (%s ou plus) avant de continuer!';
  $lang_install['read_gif'] = 'Lire/Ecrire un fichier .gif';
  $lang_install['read_png'] = 'Lire/Ecrire un fichier .png';
  $lang_install['read_jpg'] = 'Lire/Ecrire un fichier .jpg';
  $lang_install['write_error'] = 'Impossible de générer l\'image sur le disque.';
  $lang_install['read_error'] = 'Impossible de lire l\'image source.';
  $lang_install['combine_error'] = 'Impossible de combiner l\'image source';
  $lang_install['text_error'] = 'Impossible d\'ajouter du texte à l\'image source';
  $lang_install['scale_error'] = 'Impossible de redimensionner l\'image source';
  $lang_install['pixels'] = 'pixels';
  $lang_install['combine'] = 'Combiner 2 images';
  $lang_install['text'] = 'Ecrire du texte sur l\'image';
  $lang_install['scale'] = 'Redimensionner une  image';
  $lang_install['generated_image'] = 'Image générée';
  $lang_install['reference_image'] = 'Image de référence';
  $lang_install['imp_test_error'] = 'Il y a eu au moins une erreur pendant le test, vérifiez que vous avez sélectionné la bonne librairie graphique et qu\'elle est configurée correctement!';
  $lang_install['writable'] = 'Inscriptible';
  $lang_install['not_writable'] = 'Non Inscriptible';
  $lang_install['not_exist'] = 'N\'existe pas';
  $lang_install['old_install'] = 'Vous êtes dans le nouvel assistant d\'installation. Cliquez %sici%s pour accéder à l\'ancien écran d\'installation.'; //cpg1.5

}

// ----------------------- //
// File keywordmgr.php
// ----------------------- //
if (defined('KEYWORDMGR_PHP')) {
  $lang_keywordmgr_php['title'] = 'Gérer les Mots Clefs';
  $lang_keywordmgr_php['search'] = 'Chercher';
  $lang_keywordmgr_php['keyword_test_search'] = 'Chercher %s dans une nouvelle fenêtre';
  $lang_keywordmgr_php['keyword_del'] = 'Effacer le Mot Clef %s';
  $lang_keywordmgr_php['confirm_delete'] = 'Êtes-vous sur de vouloir effacer le Mot Clef %s de toute la Galerie ?';  // js-alert
  $lang_keywordmgr_php['change_keyword'] = 'Changer le Mot Clef';
}

// ------------------------------------------------------------------------- //
// File langmgr.php
// ------------------------------------------------------------------------- //
if (defined('LANGMGR_PHP')) {
  $lang_langmgr_php['title'] = 'Gestionnaire de langue';
  $lang_langmgr_php['english_language_name'] = 'Anglais';
  $lang_langmgr_php['native_language_name'] = 'Original';
  $lang_langmgr_php['custom_language_name'] = 'Personnalisé';
  $lang_langmgr_php['language_name'] = 'Nom de la langue';
  $lang_langmgr_php['language_file'] = 'Fichier langue';
  $lang_langmgr_php['flag'] = 'Drapeau';
  $lang_langmgr_php['file_available'] = 'Disponible';
  $lang_langmgr_php['enabled'] = 'Activé';
  $lang_langmgr_php['complete'] = 'Complet';
  $lang_langmgr_php['default'] = 'Default';
  $lang_langmgr_php['missing'] = 'manquant';
  $lang_langmgr_php['broken'] = 'Semble corrompu ou inaccessile';
  $lang_langmgr_php['exists_in_db_and_file'] = 'existe dans la base de donnée et en tant que fichier';
  $lang_langmgr_php['exists_as_file_only'] = 'existe en tant que fichier uniquement';
  $lang_langmgr_php['pick_a_flag'] = 'Choisir';
  $lang_langmgr_php['replace_x_with_y'] = 'Remplacer %s par %s';
  $lang_langmgr_php['tanslator_information'] = 'Information sur le traducteur';
  $lang_langmgr_php['cpg_version'] = 'Version de Coppermine';
  $lang_langmgr_php['hide_details'] = 'Cacher les détails';
  $lang_langmgr_php['show_details'] = 'Montrer les détails';
  $lang_langmgr_php['loading'] = 'Chargement';
  $lang_langmgr_php['english_missing'] = 'Le fichier langue Anglaise est manquant alors qu\'il ne devrait pas être effacé. Restaurez le immédiatement.';
  $lang_langmgr_php['enable_at_least_one'] = 'Vous devez au moins activer une langue pour que la Galerie fonctionne';
  $lang_langmgr_php['enable_default'] = 'Vous avez choisi une langue par défaut qui n\'est pas active. Choisissez une autre langue par défaut ou activez la langue que vous avez sélectionnée par défaut!';
  $lang_langmgr_php['available_default'] = 'Vous avez sélectionné une langue par défaut qui n\'est plus disponible. Choisissez une autre langue par défaut !';
  $lang_langmgr_php['version_does_not_match'] = 'La version de ce fichier ne correspond pas à votre version de Coppermine. Utilisez-le avec prudence et testez-le attentivement!';
  $lang_langmgr_php['no_version'] = 'Aucune information de version n\'a été trouvée. Il semblerait que ce fichier langue ne fonctionne pas ou que ce ne soit pas un fichier langue compatible.';
  $lang_langmgr_php['filesize'] = 'La taille du fichier %s n\'est pas cohérente';
  $lang_langmgr_php['content_missing'] = 'Ce fichier ne semble pas contenir les données nécessaires, il ne s\'agit certainement pas d\'un fichier langue valide.';
  $lang_langmgr_php['status'] = 'Status';
  $lang_langmgr_php['default_language'] = 'La langue par défaut est %s';
}

// ----------------------- //
// File login.php
// ----------------------- //
if (defined('LOGIN_PHP')) {
  $lang_login_php['login'] = 'Se connecter';
  $lang_login_php['enter_login_pswd'] = 'Entrez votre Identifiant et Mot de Passe pour vous connecter';
  $lang_login_php['username'] = 'Identifiant';
  $lang_login_php['email'] = 'Adresse courriel'; // cpg1.5
  $lang_login_php['both'] = 'Nom d\'Utilisateur / Adrese courriel'; // cpg1.5
  $lang_login_php['password'] = 'Mot de Passe';
  $lang_login_php['remember_me'] = '<b>Se souvenir de moi</b> :-)';
  $lang_login_php['welcome'] = 'Bienvenue %s ...';
  $lang_login_php['err_login'] = 'Impossible de vous connecter. Essayez encore.';
  $lang_login_php['err_already_logged_in'] = 'Vous êtes déjà connecté(e)&nbsp;!';
  $lang_login_php['forgot_password_link'] = 'Damned ! J\'ai oublié mon Mot de Passe&nbsp;!';
  $lang_login_php['cookie_warning'] = 'Attention votre navigateur n\'accepte pas les Cookies';
  $lang_login_php['send_activation_link'] = 'Lien d\'Activation perdu ?';//cpg 1.5.0
  $lang_login_php['force_login'] = 'Vous devez vous identifier pour voir cette page'; // cpg1.5
  $lang_login_php['force_login_title'] = 'Identifiez-vous pour continuer'; // cpg1.5
}

// ----------------------- //
// File logout.php
// ----------------------- //

if (defined('LOGOUT_PHP')) { 
  $lang_logout_php['logout'] = 'Déconnexion';
  $lang_logout_php['bye'] = 'Au revoir %s ...';
  $lang_logout_php['err_not_loged_in'] = 'Vous n\'êtes pas identifié(e)&nbsp;!';
}

// ----------------------- //
// File minibrowser.php
// ----------------------- //
if (defined('MINIBROWSER_PHP')) {
  $lang_minibrowser_php['up'] = 'remonter d\'un niveau';
  $lang_minibrowser_php['current_path'] = 'niveau actuel';
  $lang_minibrowser_php['select_directory'] = 'choisissez un répertoire';
  $lang_minibrowser_php['click_to_close'] = 'Cliquez sur l\'image pour fermer la fenêtre';
  $lang_minibrowser_php['folder'] = 'Répertoire'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File mode.php
// ------------------------------------------------------------------------- //
if (defined('MODE_PHP')) {
  $lang_mode_php[0] = 'Cacher les controles Administrateurs...'; // cpg1.5
  $lang_mode_php[1] = 'Afficher les controles Administrateurs...'; // cpg1.5
  $lang_mode_php['news_hide'] = 'Cacher les news...'; // cpg1.5
  $lang_mode_php['news_show'] = 'Montrer les news...'; // cpg1.5
}

// ----------------------- //
// File modifyalb.php
// ----------------------- //
if (defined('MODIFYALB_PHP')) {
$lang_modifyalb_php['upd_alb_n'] = 'Mettre à Jour l\'Album %s';
$lang_modifyalb_php['related_tasks'] = 'Taches relatives'; // cpg1.5
$lang_modifyalb_php['choose_album'] = 'Choisir un album'; // cpg1.5  
$lang_modifyalb_php['general_settings'] = 'Paramètres Généraux';
$lang_modifyalb_php['alb_title'] = 'Titre de l\'Album';
$lang_modifyalb_php['alb_cat'] = 'Catégorie de l\'Album';
$lang_modifyalb_php['alb_desc'] = 'Description de l\'Album';
$lang_modifyalb_php['alb_keyword'] = 'Mot clef de l\'Album';
$lang_modifyalb_php['alb_thumb'] = 'vignette de l\'Album';
$lang_modifyalb_php['alb_perm'] = 'Permissions pour cet Album';
$lang_modifyalb_php['can_view'] = 'Cet Album peut être consulté par';
$lang_modifyalb_php['can_upload'] = 'Les Visiteurs peuvent mettre des photos en ligne';
$lang_modifyalb_php['can_post_comments'] = 'Les Visiteurs peuvent poster des Commentaires';
$lang_modifyalb_php['can_rate'] = 'Les Visiteurs peuvent noter les photos';
$lang_modifyalb_php['user_gal'] = 'Galerie de l\'Utilisateur';
$lang_modifyalb_php['my_gal'] = '* Ma Galerie *'; //cpg 1.5
$lang_modifyalb_php['no_cat'] = '* Pas de Catégorie *';
$lang_modifyalb_php['alb_empty'] = 'L\'Album est vide';
$lang_modifyalb_php['last_uploaded'] = 'Dernier téléchargement';
$lang_modifyalb_php['public_alb'] = 'Tout le monde (Album public)';
$lang_modifyalb_php['me_only'] = 'Moi seulement';
$lang_modifyalb_php['owner_only'] = 'Le propriétaire de l\'Album (%s) seulement';
$lang_modifyalb_php['groupp_only'] = 'Membres du Groupe \'%s\'';
$lang_modifyalb_php['err_no_alb_to_modify'] = 'Il n\'y a pas d\'Album modifiable dans la base.';
$lang_modifyalb_php['update'] = 'Mettre l\'Album à jour';
$lang_modifyalb_php['reset_album'] = 'Réinitialiser l\'Album';
$lang_modifyalb_php['reset_views'] = 'Mettre le compteur de vues à &quot;0&quot; dans %s';
$lang_modifyalb_php['reset_rating'] = 'Effacez les votes de tous les fichiers dans %s';
$lang_modifyalb_php['delete_comments'] = 'Supprimez tous les Commentaires écrit dans %s';
$lang_modifyalb_php['delete_files'] = 'Supprimez %sdéfinitivement%s tous les fichiers dans %s';
$lang_modifyalb_php['views'] = 'Vues';
$lang_modifyalb_php['votes'] = 'Votes';
$lang_modifyalb_php['comments'] = 'Commentaires';
$lang_modifyalb_php['files'] = 'fichiers';
$lang_modifyalb_php['submit_reset'] = 'soumettre les changements';
$lang_modifyalb_php['reset_views_confirm'] = '** Je suis sûr et certain **';
$lang_modifyalb_php['notice1'] = '(*) en fonction de la configuration des %sGroupes%s'; //(do not translate %s!)
$lang_modifyalb_php['can_moderate'] = 'L\'Album peut être modéré par'; //cpg 1.5
$lang_modifyalb_php['admins_only'] = 'Administrateurs uniquement'; //cpg 1.5
$lang_modifyalb_php['alb_password'] = 'Mot de Passe de l\'Album';
$lang_modifyalb_php['alb_password_hint'] = 'Pense-bête du Mot de Passe de l\'Album';
$lang_modifyalb_php['edit_files'] ='Editer les fichiers';
$lang_modifyalb_php['parent_category'] ='Catégorie parente';
$lang_modifyalb_php['thumbnail_view'] ='Vue des Vignettes';
$lang_modifyalb_php['random_image'] = 'Image aléatoire'; //cpg 1.5
$lang_modifyalb_php['password_protect'] = 'Protéger cet Album par Mot de passe (cochez pour oui)'; //cpg1.5
}

// ----------------------- //
// File phpinfo.php
// ----------------------- //
if (defined('PHPINFO_PHP')) {
 $lang_phpinfo_php['php_info'] = 'PHP info';
  $lang_phpinfo_php['explanation'] = 'Voici la sortie générée par la fonction <a href="http://www.php.net/phpinfo">phpinfo()</a>, affichée à l\'intérieur de Coppermine (en rognant les informations trop longues) (les résultats diffèrent selon les serveurs).';
  $lang_phpinfo_php['no_link'] = 'Les informations reprises ici peuvent représenter un risque pour la sécurité, c\'est pourquoi cette page est sécurisée et n\'est visible que si vous êtes connecté en tant qu\'Administrateur de la Galerie. Vous ne pouvez pas poster de lien vers cette page car les autres n\'y ont pas accès et ne pourront pas l\'afficher.';
}

// ----------------------- //
// File picmgr.php
// ----------------------- //
if (defined('PICMGR_PHP')) {
  $lang_picmgr_php['pic_mgr'] = 'Gestionnaire d\'image';
  $lang_picmgr_php['confirm_delete1'] = 'Etes-vous sur de vouloir supprimer cette image ?';
  $lang_picmgr_php['confirm_delete2'] = 'L\'image sera supprimée de façon permanente.';
  $lang_picmgr_php['confirm_modifs'] = 'Voulez-vous vraiment effectuer ces modifications ?';
  $lang_picmgr_php['pic_need_name'] = 'L\'image doit avoir un nom&nbsp;!';
  $lang_picmgr_php['no_change'] = 'Vous n\'avez pas fait de changement&nbsp;!';
  $lang_picmgr_php['no_album'] = '* Pas d\'Album *';
  $lang_picmgr_php['explanation_header'] = 'L\'ordre personnalisé de tri que vous pouvez définir ne sera pris en compte que si';
  $lang_picmgr_php['explanation1'] = 'l\'Administrateur du site a défini &quot;l\'ordre de tri par défaut des images&quot; dans la Configuration en  &quot;Ordre croissant&quot; ou &quot;Ordre décroissant&quot; (configuration générale pour tous les Utilisateurs qui n\'ont pas choisi une autre option de tri de manière individuelle)';
  $lang_picmgr_php['explanation2'] = 'l\'Utilisateur a choisi &quot;Ordre croissant&quot; ou &quot;Ordre décroissant&quot; sur la page des vignettes (Choix personnel de l\'Utilisateur)';
  $lang_picmgr_php['change_album'] = 'Si vous changez d\'album, vos modifications seront perdues!'; // cpg1.5
  $lang_picmgr_php['submit_reminder'] = 'Les changements dans l\'ordre d\'affichage ne seront pas sauvegardés tant que vous n\'aurez pas cliqué sur &quot;Appliquez les changements&quot;.'; // cpg1.5
}


// ----------------------- //
// File pluginmgr.php
// ----------------------- //
if (defined('PLUGINMGR_PHP')){
  $lang_pluginmgr_php['confirm_uninstall'] = 'Etes-vous sur de vouloir DESINSTALLER ce plugin';
  $lang_pluginmgr_php['confirm_remove'] = 'NOTE : l\'API Plugin est désactivée. Voulez-vous EFFACER MANUELLEMENT ce plugins, sans aucune action de nettoyage ?'; // cpg1.5
  $lang_pluginmgr_php['confirm_delete'] = 'Etes-vous sur de vouloir supprimer ce plugin';
  $lang_pluginmgr_php['pmgr'] = 'Gérer les plugin';
  $lang_pluginmgr_php['explanation'] = 'Installer / Désinstaller / Gérer les plugins depuis cette page.'; // cpg1.5.x
  $lang_pluginmgr_php['plugin_enabled'] = 'Plugin API activé'; // cpg1.5.x
  $lang_pluginmgr_php['name'] = 'Nom';
  $lang_pluginmgr_php['author'] = 'Auteur';
  $lang_pluginmgr_php['desc'] = 'Description';
  $lang_pluginmgr_php['vers'] = 'v';
  $lang_pluginmgr_php['i_plugins'] = 'Plugins installés';
  $lang_pluginmgr_php['n_plugins'] = 'Plugins non-installés';
  $lang_pluginmgr_php['none_installed'] = 'Aucune installation';
  $lang_pluginmgr_php['operation'] = 'Opération';
  $lang_pluginmgr_php['not_plugin_package'] = 'Le fichier téléchargé n\'est pas un plugin.';
  $lang_pluginmgr_php['copy_error'] = 'Il y a eu une erreur en copiant le plugin dans le répertoire.';
  $lang_pluginmgr_php['upload'] = 'Téléchargement';
  $lang_pluginmgr_php['configure_plugin'] = 'Configurer le plugin';
  $lang_pluginmgr_php['cleanup_plugin'] = 'Nettoyer le plugin';
  $lang_pluginmgr_php['extra'] = 'Extra'; // cpg1.5.x
  $lang_pluginmgr_php['install_info'] = 'Informations d\'installation'; // cpg1.5
  $lang_pluginmgr_php['plugin_disabled_note'] = 'L\'API Plugin est désactivée, cette action n\'est pas autorisée.'; // cpg1.5
  $lang_pluginmgr_php['install'] = 'installer'; // cpg1.5
  $lang_pluginmgr_php['uninstall'] = 'désinstaller'; // cpg1.5
}

// ----------------------- //
// File ratepic.php
// ----------------------- //
if (defined('RATEPIC_PHP')) {
  $lang_rate_pic_php['already_rated'] = 'Vous avez déjà noté cette photo';
  $lang_rate_pic_php['rate_ok'] = 'Votre Vote a été pris en compte. Merci.';
  $lang_rate_pic_php['forbidden'] = 'Vous ne pouvez pas noter vos propres photos !';
}

// ----------------------- //
// File register.php & profile.php
// ----------------------- //
if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {
$lang_register_php['disclamer'] = <<<EOT
Bien que les Administrateurs de {SITE_NAME} fassent en sorte de Supprimez ou modifier toutes les données à caractère répréhensible le plus rapidement possible, il est toutefois impossible de scruter systématiquement l'intégralité des contenus déposés par les Visiteurs ou par Utilisateurs. Vous êtes par conséquent conscient que tous les Commentaires, images ou fichiers proposés sur ce site expriment les points de vue et opinions de leurs auteurs et non ceux des Administrateurs ou du webmaster de {SITE_NAME}. (sauf, évidemment dans le cas des posts effectués par ces derniers), qui par conséquent ne pourront pas être considérés comme responsables.<br />
<br />
Vous acceptez de ne poster aucune donnée à caractère injurieux, obscène, vulgaire, diffamatoire, menaçant, sexuel ou tout autre contenu susceptible d\'enfreindre la loi. Vous acceptez que le Webmaster et les Modérateurs de {SITE_NAME} aient le droit de Supprimez ou modifier n'importe quel contenu, si cela leur semble opportun et en accord avec les présentes règles de bonnes conduite. En tant qu'Utilisateur, vous acceptez que toutes les informations entrées plus haut et toutes les photographies que vous publiez soient stockées dans une Base de Données. Bien que ces informations et photographies ne soient pas communiquées à des tiers sans votre consentement, le Webmaster et les Administrateurs ne peuvent en aucun cas être tenus pour responsables dans le cas de tentatives de hack qui pourraient compromettre les données ou permettre l'accès ou l'utilisation illicite de vos photographies. Dès lors que vous prenez la décision de publier sur Internet, vous rendez vos oeuvres publiques !<br />
<br />
Ce site utilise des Cookies pour stocker des informations sur votre ordinateur. Ces Cookies ne servent qu'à améliorer votre navigation sur ce site. Votre adresse e-mail ne sera utilisée que pour confirmer les données de votre inscription ainsi que votre Mot de Passe. Ces données ne seront pas transmisses à des tiers.<br />
<br />
En cliquant sur le bouton '<b>J'accepte</b>' ci-dessous, vous acceptez de vous soumettre à ces conditions ainsi qu'à toutes leurs éventuelles mises à jour.<br />Merci pour votre inscription.
EOT;
  $lang_register_php['page_title'] = 'inscription d\'Utilisateur';
  $lang_register_php['term_cond'] = 'Conditions Générales d\'inscription';
  $lang_register_php['i_agree'] = 'J\'accepte';
  $lang_register_php['submit'] = 'S\'inscrire';
  $lang_register_php['err_user_exists'] = 'Le Nom d\'Utilisateur que vous avez entré existe déjà ! Merci de bien vouloir en choisir un nouveau.';
  $lang_register_php['err_global_pw'] = 'Mot de Passe global invalide'; // cpg1.5
  $lang_register_php['err_global_pass_same'] = 'Votre Mot de Passe doit être différent du Mot de Passe global'; // cpg1.5
  $lang_register_php['err_duplicate_email'] = 'Un autre Utilisateur s\'est déjà enregisté avec l\'adresse courriel que vous avez entrée';
  $lang_register_php['err_disclaimer'] = 'Vous devez accepter les règles de notre Galerie'; // cpg1.5
  $lang_register_php['enter_info'] = 'Entrer les informations relatives à votre inscription';
  $lang_register_php['required_info'] = 'Informations requises';
  $lang_register_php['optional_info'] = 'Informations optionnelles';
  $lang_register_php['username'] = 'Nom d\'Utilisateur / identifiant';
  $lang_register_php['password'] = 'Mot de Passe';
  $lang_register_php['password_again'] = 'Entrer à nouveau le Mot de Passe';
  $lang_register_php['global_registration_pw'] = 'Mot de Passe global pour l\'enregistrement'; // cpg1.5
  $lang_register_php['email'] = 'Courriel :';
  $lang_register_php['location'] = 'Votre Localisation :';
  $lang_register_php['interests'] = 'Vos centres d\'Intérêts :';
  $lang_register_php['website'] = 'Votre Site web :';
  $lang_register_php['occupation'] = 'Votre Activité :';
  $lang_register_php['error'] = 'ERREUR';
  $lang_register_php['confirm_email_subject'] = '%s - Confirmation d\'inscription';
  $lang_register_php['information'] = 'Informations';
  $lang_register_php['failed_sending_email'] = 'Le courriel de confirmation d\'inscription n\'a pas pu être envoyé!';
  $lang_register_php['thank_you'] = 'Merci pour votre inscription.<br /><br />Un courriel contenant les informations sur l\'Activation de votre Compte vous a été envoyé à l\'adresse courriel que vous nous avez communiqué.';
  $lang_register_php['acct_created'] = 'Votre compte a été correctement créé. Vous pouvez maintenant vous identifier avec votre Identifiant et votre Mot de Passe';
  $lang_register_php['acct_active'] = 'Votre Compte a été activé avec succès. Vous pouvez maintenant vous identifier avec votre Identifiant et votre Mot de Passe';
  $lang_register_php['acct_already_act'] = 'Votre Compte est déjà actif !';
  $lang_register_php['acct_act_failed'] = 'Ce Compte ne peut pas être activé !';
  $lang_register_php['err_unk_user'] = 'L\'Utilisateur sélectionné n\'existe pas !';
  $lang_register_php['x_s_profile'] = 'Profil de %s';
  $lang_register_php['group'] = 'Groupe';
  $lang_register_php['reg_date'] = 'Date d\'inscription';
  $lang_register_php['disk_usage'] = 'Utilisation du disque';
  $lang_register_php['change_pass'] = 'Modifier le Mot de Passe';
  $lang_register_php['current_pass'] = 'Mot de Passe actuel';
  $lang_register_php['new_pass'] = 'Nouveau Mot de Passe';
  $lang_register_php['new_pass_again'] = 'Nouveau Mot de Passe (à nouveau)';
  $lang_register_php['err_curr_pass'] = 'Le Mot de Passe actuel n\'est pas correct';
  $lang_register_php['change_pass'] = 'Changer mon mot de passe';
  $lang_register_php['update_success'] = 'Votre Profil a été mis à jour';
  $lang_register_php['pass_chg_success'] = 'Votre Mot de Passe a été modifié';
  $lang_register_php['pass_chg_error'] = 'Votre Mot de Passe n\'a pas été modifié';
  $lang_register_php['notify_admin_email_subject'] = '%s - notification d\'inscription';
  $lang_register_php['last_uploads'] = 'Dernier fichier uploadé.';
  $lang_register_php['last_uploads_detail'] = 'Cliquer pour voir tous les téléchargements de %s'; //cpg1.5
  $lang_register_php['last_comments'] = 'Dernier Commentaire.';
  $lang_register_php['you'] = 'vous'; //cpg1.5
  $lang_register_php['last_comments_detail'] = 'Cliquer pour voir tous les comentaires de %s'; //cpg1.5
  $lang_register_php['notify_admin_email_body'] = 'Un Nouvel Utilisateur s\'est inscrit dans votre Galerie, sous le nom &quot;%s&quot;';
  $lang_register_php['pic_count'] = 'fichiers téléchargés';
  $lang_register_php['notify_admin_request_email_subject'] = '%s - Demande d\'enregistrement';
  $lang_register_php['thank_you_admin_activation'] = 'Merci.<br /><br />Votre requête d\'activation du Compte a été envoyé à l\'Administrateur. Vous recevrez un courriel si votre inscription est approuvée.';
  $lang_register_php['acct_active_admin_activation'] = 'Le Compte est maintenant actif et un courriel a été envoyé à l\'Utilisateur.';
  $lang_register_php['notify_user_email_subject'] = '%s - Notification d\'activation';
  $lang_register_php['delete_my_account'] = 'Effacer mon Compte Utilisateur'; // cpg1.5
  $lang_register_php['warning_delete'] = 'Attention : L\'effacement du compte est définitif. Les %sfichiers que vous avez placés%s dans les Albums publics et vos %sCommentaires%s ne seront pas effacés lors de la suppression de votre Compte Utilisateur !<br> Par contre, les fichiers que vous avez placés dans votre Galerie Personnelle seront effacés.'; // cpg1.5 // The %s-placeholders mustn't be removed, they will later be replaced by the wrappers for the links
  $lang_register_php['i_am_sure'] = 'Je suis certain de vouloir effacer mon Compte Utilisateur'; // cpg1.5
  $lang_register_php['really_delete'] = 'Voulez-vous vraiment effacer votre Compte Utilisateur ?'; // cpg1.5 //JS-Alert
  $lang_register_php['edit_xs_profile'] = 'Editer le profil de %s'; // cpg1.5
  $lang_register_php['edit_my_profile'] = 'Editer mon profil'; // cpg1.5
  $lang_register_php['none'] = 'aucun'; // cpg1.5
  $lang_register_php['user_name_banned'] = 'Le nom d\'Utilisateur que vous avez choisi n\'est pas autorisé, ou est banni. Choisissez un autre nom d\'Utilisateur'; // cpg1.5
  $lang_register_php['email_address_banned'] = 'Vous êtes banni de cette Galerie. Vous n\êtes pas autorisé à vous ré-Enregistrez. Allez-vous en!'; // cpg1.5
  $lang_register_php['email_warning1'] = 'Le champ d\'adresse courriel ne doit pas être vide!'; // cpg1.5
  $lang_register_php['email_warning2'] = 'L\'adresse courrile que vous avez entrée n\'et pas valide. Vérifiez là!'; // cpg1.5
  $lang_register_php['username_warning1'] = 'Le champ nom d\'Utilisateur ne doit pas être vide!'; // cpg1.5
  $lang_register_php['username_warning2'] = 'Le nom d\'Utilisateur doit avoir au moins deux caractères'; // cpg1.5
  $lang_register_php['password_warning1'] = 'Le mot de pas doit avoir au moins deux caractères!'; // cpg1.5
  $lang_register_php['password_warning2'] = 'Le nom d\'Utilisateur et le mot de passe doivent être différents!'; // cpg1.5
  $lang_register_php['password_verification_warning1'] = 'Les deux mots de passe ne correspondent pas, merci de les ré-entrer'; // cpg1.5
  $lang_register_php['form_not_submit'] = 'Le formulaire n\'a pas été envoyé - il y a des erreurs que vois devez corriger d\'abord!'; // cpg1.5
  $lang_register_php['banned'] = 'Banni'; // cpg1.5

$lang_register_php['confirm_email'] = <<<EOT
Merci pour votre inscription sur {SITE_NAME}.

Pour Activez ce Compte avec ce Nom d'Utilisateur &quot;{USER_NAME}&quot;, vous devez cliquer sur le lien ci-dessous ou le copier dans la barre d'adresse de votre navigateur.
<a href="{ACT_LINK}">{ACT_LINK}</a>

Cordialement,

L'Administrateur de {SITE_NAME}

EOT;

$lang_register_approve_email = <<<EOT
Un Nouvel Utilisateur avec le pseudonyme &quot;{USER_NAME}&quot; s'est inscrit dans votre Galerie.
Pour Activez ce Compte, vous devez cliquer sur le lien ci-dessous ou le copier et le coller dans la barre d'adresse de votre navigateur.

<a href="{ACT_LINK}">{ACT_LINK}</a>

EOT;

$lang_register_php['activated_email'] = <<<EOT
Votre Compte a été approuvé et activé.

Vous pouvez maintenant vous connecter <a href="{SITE_LINK}">{SITE_LINK}</a> en utilisant ce Nom d'Utilisateur &quot;{USER_NAME}&quot;


Cordialement,

L'Administrateur de {SITE_NAME}

EOT;
}

// ----------------------- //
// File reviewcom.php
// ----------------------- //
if (defined('REVIEWCOM_PHP')) {
  $lang_reviewcom_php['title'] = 'Vérifier les Commentaires';
  $lang_reviewcom_php['no_comment'] = 'Il n\'y a pas de Commentaire à vérifier';
  $lang_reviewcom_php['n_comm_del'] = '%s Commentaire(s) supprimé(s)';
  $lang_reviewcom_php['n_comm_disp'] = 'Nombre de Commentaires à afficher';
  $lang_reviewcom_php['see_prev'] = 'Voir précédent(s)';
  $lang_reviewcom_php['see_next'] = 'Voir suivant(s)';
  $lang_reviewcom_php['del_comm'] = 'Supprimer les Commentaires sélectionnés';
  $lang_reviewcom_php['user_name'] = 'Nom';
  $lang_reviewcom_php['date'] = 'Date';
  $lang_reviewcom_php['comment'] = 'Commentaire';
  $lang_reviewcom_php['file'] = 'Fichier';
  $lang_reviewcom_php['name_a'] = 'Nom d\'Utilisateur ascendant';
  $lang_reviewcom_php['name_d'] = 'Nom d\'Utilisateur descendant';
  $lang_reviewcom_php['date_a'] = 'Date ascendante';
  $lang_reviewcom_php['date_d'] = 'Date descendante';
  $lang_reviewcom_php['comment_a'] = 'Commentaire du message ascendant';
  $lang_reviewcom_php['comment_d'] = 'Commentaire du message descendant';
  $lang_reviewcom_php['file_a'] = 'Fichier ascendant';
  $lang_reviewcom_php['file_d'] = 'Fichier descendant';
  $lang_reviewcom_php['approval_a'] = 'Approbation ascendant'; // cpg1.5.x
  $lang_reviewcom_php['approval_d'] = 'Approbation descendant'; // cpg1.5.x
  $lang_reviewcom_php['ip_a'] = 'Adresse IP ascendante'; // cpg1.5
  $lang_reviewcom_php['ip_d'] = 'Adresse IP descendante'; // cpg1.5
  $lang_reviewcom_php['akismet_a'] = 'Evaluation Akismet (Commentaires valides en bas)'; // cpg1.5
  $lang_reviewcom_php['akismet_d'] = 'Evaluation Akismet (Commentaires valides en haut)'; // cpg1.5
  $lang_reviewcom_php['n_comm_appr'] = '%s Commentaire(s) approuvé(s)'; // cpg1.5.x
  $lang_reviewcom_php['n_comm_unappr'] = '%s Commentaire(s) désapprouvé(s)'; // cpg1.5.x
  $lang_reviewcom_php['configuration_changed'] = 'Changement de la Configuration des approbations'; // cpg1.5.x
  $lang_reviewcom_php['only_approval'] = 'N\'affichez que les Commentaires nécessitant une approbation'; // cpg1.5.x
  $lang_reviewcom_php['approval'] = 'Approuvé'; // cpg1.5.x
  $lang_reviewcom_php['save_changes'] = 'Sauvegarder les changements'; // cpg1.5.x
  $lang_reviewcom_php['n_confirm_delete'] = 'Voulez-vous réellement effacer le(s) Commentaire(s) sélectionné(s)?'; // cpg1.5.x
  $lang_reviewcom_php['with_selected'] = 'Pour la sélection'; // cpg1.5.x
  $lang_reviewcom_php['delete'] = 'effacer'; // cpg1.5.x
  $lang_reviewcom_php['approve'] = 'approuver'; // cpg1.5.x
  $lang_reviewcom_php['disapprove'] = 'désapprouver'; // cpg1.5.x
  $lang_reviewcom_php['do_nothing'] = 'ne rien faire'; // cpg1.5
  $lang_reviewcom_php['comment_approved'] = 'Commentaire approuvé'; // cpg1.5.x
  $lang_reviewcom_php['comment_unapproved'] = 'Commentaire désapprouvé'; // cpg1.5.x
  $lang_reviewcom_php['ban_and_delete'] = 'Bannir l\'Utilisateur et effacer les Commentaires'; // cpg1.5
  $lang_reviewcom_php['akismet_status'] = 'Akismet dit'; // cpg1.5
  $lang_reviewcom_php['is_spam'] = 'est un spam'; // cpg1.5
  $lang_reviewcom_php['is_not_spam'] = 'n\est pas un spam'; // cpg1.5
  $lang_reviewcom_php['akismet'] = 'Akismet'; // cpg1.5
  $lang_reviewcom_php['akismet_count'] = 'Akismet a trouvé %s spams pour vous jusqu\'à présent'; // cpg1.5
  $lang_reviewcom_php['akismet_test_result'] = 'Résultat du test pour votre clé API Akismet %s'; // cpg1.5
  $lang_reviewcom_php['invalid'] = 'invalide'; // cpg1.5
  $lang_reviewcom_php['missing_gallery_url'] = 'Vous devez spécifier une URL de la Galerie dans la configuration de Coppermine'; // cpg1.5
  $lang_reviewcom_php['unable_to_connect'] = 'Impossible dese connecter à akismet.com'; // cpg1.5
  $lang_reviewcom_php['not_found'] = 'L\'URL cible n\'a pas été trouvée. Peut-être que la structure du site akismet.com a changé.'; // cpg1.5
  $lang_reviewcom_php['unknown_error'] = 'Erreur inconnue'; // cpg1.5
  $lang_reviewcom_php['error_message'] = 'Le message d\'erreur retourné était'; // cpg1.5
  $lang_reviewcom_php['ip_address'] = 'Adresse IP'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File sidebar.php
// ------------------------------------------------------------------------- //
if (defined('SIDEBAR_PHP')) { 
  $lang_sidebar_php['sidebar'] = 'Marque page'; // cpg1.5
  $lang_sidebar_php['install'] = 'installation'; // cpg1.5
  $lang_sidebar_php['install_explain'] = 'Parmis les methodes d\'accès rapide aux informations du site, nous vous proposons des signets pour la plupart des navigateurs utilisés par les systèmes d\'exploitation pour accéder rapidement à une page. Vous trouverez ici les informations d\'installation et de paramétrage pour les navigateurs supportés.'; // cpg1.5
  $lang_sidebar_php['os_browser_detect'] = 'Détection de votre système d\'exploitation et de votre navigateur'; // cpg1.5
  $lang_sidebar_php['os_browser_detect_explain'] = 'Le script est en train d\'essayer de détecter la version de votre navigateur et de votre système d\'exploitation - Veuillez attendre un instant. Si l\'autodétection échoue, vous devrez %sActiver%s manuellement toutes les options possibles des volets latéraux.'; // cpg1.5
  $lang_sidebar_php['mozilla'] = 'Mozilla, Firefox, Netscape 6+, Konqueror 3.2+'; // cpg1.5
  $lang_sidebar_php['mozilla_explain'] = 'Si vous utilisez Mozilla 0.9.4 ou plus récent, vous pouvez %sajouter votre signet à votre jeu%s. Vous pouvez la désintAllez en utilisant la boite de dialogue "Panneau latéral personnalisé" de Mozilla.'; // cpg1.5
  $lang_sidebar_php['ie_mac'] = 'Internet Explorer 5 et suivants sur  Mac OS'; // cpg1.5
  $lang_sidebar_php['ie_mac_explain'] = 'Si vous utilisez Internet Explorer 5 ou suivant sur MacOS, %souvrez la page de signets%s dans une fenêtre séparée. Dans cette fenêtre ouvrez l\'onglet "Marque Page" sur le côté gauche de la fenêtre. Cliquez sur "Ajoutez." Si vous souhaitez le garder pour un usage futur, cliquez sur "Favoris" et sélectionnez "Ajoutez à mes Marques Pages Favoris."'; // cpg1.5
  $lang_sidebar_php['ie_win'] = 'Internet Explorer 5 et suivants sur Windows'; // cpg1.5
  $lang_sidebar_php['ie_win_explain'] = 'Si vous utilisez Internet Explorer 5 et suivants avec Windows, Vous pouvez ajouter le signet dan votre barre de liens ou l\'ajouter dans vos favoris et en cliquant dessus,vous verrez notre barre affichée à la place de votre barre de recherche habituelle en faisant un click droit %sici%s et en sélectionnant "Ajoutez à mes favoris" depuis le menu contextuel. Ce lien n\'installe pas notre barre de recherche par défaut, il n\'y a donc pas de modifications faites sur votre système.'; // cpg1.5
  $lang_sidebar_php['ie7_win'] = 'Internet Explorer 7 avec Windows XP/Vista'; // cpg1.5
  $lang_sidebar_php['ie7_win_explain'] = 'Si vous utilisez Explorer 7 sur Windows, vous pouvez ajouter une fenêtre pop-up à votre barre de navigation ou vous pouvez l\'ajouter à vos favorits en cliquant dessus vous verrez notre barre affichée comme uen fenêtre pop-up en faisant un click droit %sici%s et en sélectionnant "Ajoutez aux favoris" depuis le menu contextuel. Dans les précédents versins de IE, il était impossible d\'ajouter une barre marque page personnelle, mais avec IE7 vous ne pouvez pas le faire sans appliquer des modifications à la base de registre. Il est recommandé d\'utiliser un autre navigateur si vous voulez utiliser cette barre de marque page.'; // cpg1.5
  $lang_sidebar_php['opera'] = 'Opera 6 et suivants'; // cpg1.5
  $lang_sidebar_php['opera_explain'] = 'Si vous utilisez Opera, vous pouvez cliquer  %ssur ce lien pour ajouter notre marque page à votre jeuxt%s. Cochez "Montrer dans le panneaul" . Vous pouvez désinstAllez les marques page en faisant un click droit sur son onglet et en choisissant "Effacez" dans le menu contextuel.'; // cpg1.5
  $lang_sidebar_php['additional_options'] = 'Options supplémentaires'; // cpg1.5
  $lang_sidebar_php['additional_options_explain'] = 'Si vous avez un autre navigateur que ceux mentionnée plus haut, cliquez %sici%s pour afficher toutes les options possibles.'; // cpg1.5
  $lang_sidebar_php['cannot_add_sidebar'] = 'Le Signet ne peut pas être ajouté ! Votre navigateur ne supporte pas cette methode!'; // cpg1.5 // js-alert
  $lang_sidebar_php['search'] = 'Chercher'; // cpg1.5
  $lang_sidebar_php['reload'] = 'Recharger'; // cpg1.5
}


// ----------------------- //
// File search.php
// ----------------------- //
if (defined('SEARCH_PHP')){
  $lang_search_php['title'] = 'Chercher dans les fichiers';
  $lang_search_php['submit_search'] = 'chercher';
  $lang_search_php['keyword_list_title'] = 'Liste de Mots Clefs';
  $lang_search_php['keyword_msg'] = 'Cette liste n\'est pas exhaustive . Elle ne comprends pas les Mots inclus dans les Titres et les Descriptions des photos. Essayez une recherche sur une phrase.';  //cpg1.4
  $lang_search_php['edit_keywords'] = 'Editer les mots-clés';
  $lang_search_php['search in'] = 'Chercher dans :';
  $lang_search_php['ip_address'] = 'Adresse IP';
  $lang_search_php['imgfields'] = 'Chercher parmis les images';
  $lang_search_php['albcatfields'] = 'Chercher dans les Albums et les Catégories';
  $lang_search_php['age'] = 'Age';
  $lang_search_php['newer_than'] = 'Nouveau depuis';
  $lang_search_php['older_than'] = 'Ancien depuis';
  $lang_search_php['days'] = 'jours';
  $lang_search_php['all_words'] = 'Chercher TOUS les mots (AND)';
  $lang_search_php['any_words'] = 'Chercher AU MOINS un mot (OR)';
  $lang_search_php['regex'] = 'Correspond aux expressions régulières';
  $lang_search_php['album_title'] = 'Titre de l\'Album';
  $lang_search_php['category_title'] = 'Titre de la Catégorie';
}

// ----------------------- //
// File searchnew.php
// ----------------------- //
if (defined('SEARCHNEW_PHP')) {
  $lang_search_new_php['page_title'] = 'Rechercher les Nouvelles Photos';
  $lang_search_new_php['select_dir'] = 'Sélectionner le répertoire';
  $lang_search_new_php['select_dir_msg'] = 'Cette fonction vous permet d\'ajouter un groupe de photos que vous avez uploadé sur votre serveur FTP.<br /><br />Sélectionnez le répertoire où vous avez uploadé vos photos';
  $lang_search_new_php['no_pic_to_add'] = 'Il n\'y a pas de photo à ajouter';
  $lang_search_new_php['need_one_album'] = 'Vous avez besoin d\'au moins un Album pour effectuer cette opération';
  $lang_search_new_php['warning'] = 'Avertissement';
  $lang_search_new_php['change_perm'] = 'Coppermine ne peut pas écrire dans ce répertoire, vous devez changer ses permissions à 755 ou 777 avant d\'essayer d\'ajouter les photos&nbsp;!';
  $lang_search_new_php['target_album'] = '<b>Mettre les photos de &quot;</b>%s<b>&quot; dans </b>%s';
  $lang_search_new_php['folder'] = 'Répertoire';
  $lang_search_new_php['image'] = 'fichier';
  $lang_search_new_php['result'] = 'Résultat';
  $lang_search_new_php['dir_ro'] = 'Non inscriptible. ';
  $lang_search_new_php['dir_cant_read'] = 'Illisible. ';
  $lang_search_new_php['insert'] = 'Ajouter de nouvelles images à la Galerie';
  $lang_search_new_php['list_new_pic'] = 'Liste des nouvelles images';
  $lang_search_new_php['insert_selected'] = 'Insérer les photos sélectionnées';
  $lang_search_new_php['no_pic_found'] = 'Aucun nouveau fichier n\'a été trouvé';
  $lang_search_new_php['be_patient'] = 'Soyez patient. Coppermine a besoin de temps pour mettre les photos en ligne et générer les Vignettes, Images Intermédiaires...';
  $lang_search_new_php['no_album'] = 'Aucun Album sélectionné';
  $lang_search_new_php['result_icon'] = 'Cliquer pour voir les détails ou pour les recharger';  //cpg1.4
  $lang_search_new_php['notes'] = <<< EOT
    <ul>
        <li>%s: Le fichier a été ajouté correctement</li>
        <li>%s: Le fichier est une copie et existe déjà dans la base de donnée</li>
        <li>%s: Le fichier n\a pas pu être ajouté, vérifiez votr configuration et les permissions du répertoire où les fichiers sont placés</li>
        <li>%s: Vous devez sélectionner d\'abord un Album</li>
        <li>%s: Le fichier est corrompu ou innaccessible</li>
        <li>%s: Type de fichier inconnu</li>
        <li>%s: Le fichier est catuellement une image GIF</li>
        <li>Si les icônes n\'apparaissent pas, cliquez sur le fichier corrompu pour voir le message d\'erreur généré par PHP</li>
        <li>Si votre navigateur rencontre un \'TimeOut\', cliquez sur le bouton recharger</li>
    </ul>
EOT;
// Note pour les Traducteurs: Ne traduisez pas les balises %s placeholders - elle sont remplacées par les icônes 
  $lang_search_new_php['check_all'] = 'Tout cocher';
  $lang_search_new_php['uncheck_all'] = 'Tout décocher';
  $lang_search_new_php['no_folders'] = 'Il n\'y a actuellement pas de sous-répertoire dans le répertoire &quot;Albums&quot;. Vérifiez que vous avez bien créé un sous-répertoire dans le répertoire &quot;Albums&quot; et uploadez-y vos fichiers avec votre client FTP (FileZilla ou SmartFTP) Vous ne devez pas uploader dans les répertoires &quot;userpics&quot; ou &quot;edit&quot; , ils sont réservés pour les uploads en HTML ou pour des traitements internes.';
  $lang_search_new_php['browse_batch_add'] = 'Interface d\'exploration (recommandé)';
  $lang_search_new_php['display_thumbs_batch_add'] = 'Afficher les vignettes de prévisualisation'; //cpg1.5
  $lang_search_new_php['edit_pics'] = 'Editez les fichiers';
  $lang_search_new_php['edit_properties'] = 'Propriétés de l\'Album';
  $lang_search_new_php['view_thumbs'] = 'Voir les Vignettes';
  $lang_search_new_php['add_more_folder'] = 'Ajouter plus de fichiers depuis le répertoire %s'; //cpg1.5
}

// ----------------------- //
//File send_activation.php
// ----------------------- //
if (defined('SEND_ACTIVATION_PHP')) {
  $lang_send_activation_php['err_already_logged_in'] = 'Vous êtes déjà identifié !'; //cpg1.5
  $lang_send_activation_php['activation_not_required'] = 'Ce site ne nécessite pas d\'activation par courriel'; //cpg1.5
  $lang_send_activation_php['err_unk_user'] = 'L\'Utilisateur sélectionné n\'existe pas!'; //cpg1.5
  $lang_send_activation_php['resend_act_link'] = 'Renvoyer le lien d\'activation'; //cpg1.5
  $lang_send_activation_php['enter_email'] = 'Entrez votre adresse courriel'; //cpg1.5
  $lang_send_activation_php['submit'] = 'Envoyer'; //cpg1.5
  $lang_send_activation_php['failed_sending_email'] = 'Erreur dans l\'envoi du courriel avec le lien d\'activation'; //cpg1.5
  $lang_send_activation_php['activation_email_sent'] = 'Un courriel avec le lien d\'activation a été envoyé à %s. Vérifiez vos courriels pour terminer le processus d\'activation'; //cpg1.5
}

// ----------------------- //
// File stat_details.php
// ----------------------- //

if (defined('STAT_DETAILS_PHP')) {
  $lang_stat_details_php['show_hide'] = 'afficher / cacher cette colonne';
  $lang_stat_details_php['title'] = 'Détails des Statisiques'; //cpg1.5
  $lang_stat_details_php['vote'] = 'Détails des Votes';
  $lang_stat_details_php['hits'] = 'Détails des Hits';
  $lang_stat_details_php['stats'] = 'Statistiques des Votes';
  $lang_stat_details_php['users'] = 'Statistiques des Utilisateurs';//cpg1.5
  $lang_stat_details_php['sdate'] = 'Date';
  $lang_stat_details_php['rating'] = 'Vote';
  $lang_stat_details_php['search_phrase'] = 'Phrase de recherche';
  $lang_stat_details_php['referer'] = 'Référant';
  $lang_stat_details_php['browser'] = 'Navigateur';
  $lang_stat_details_php['os'] = 'Système d\'exploitation';
  $lang_stat_details_php['ip'] = 'IP';
  $lang_stat_details_php['uid'] = 'Utilisateur'; //cpg1.5
  $lang_stat_details_php['sort_by_xxx'] = 'Classer par %s';
  $lang_stat_details_php['ascending'] = 'ascendant';
  $lang_stat_details_php['descending'] = 'descendant';
  $lang_stat_details_php['internal'] = 'interne';
  $lang_stat_details_php['close'] = 'fermer';
  $lang_stat_details_php['hide_internal_referers'] = 'cacher les attributs internes';
  $lang_stat_details_php['date_display'] = 'Date d\'affichage';
  $lang_stat_details_php['records_per_page'] = 'Enregistrements par page';
  $lang_stat_details_php['submit'] = 'soumettre / actualiser';
  $lang_stat_details_php['overall_stats'] = 'Statistiques générales'; //cpg1.5
  $lang_stat_details_php['stats_by_os'] = 'Système d\'exploitation'; //cpg1.5
  $lang_stat_details_php['number_of_hits'] = 'Nombre de visites (hits)'; //cpg1.5
  $lang_stat_details_php['total'] = 'Total'; //cpg1.5
  $lang_stat_details_php['stats_by_browser'] = 'Navigateur'; //cpg1.5
  $lang_stat_details_php['overall_stats_config'] = 'Configuration des Statistiques Générales'; //cpg1.5
  $lang_stat_details_php['hit_details']  = 'Gardez le détail des statistiques de visites'; //cpg1.5
  $lang_stat_details_php['hit_details_explanation']  = 'Garder le détail des statistiques de visites'; //cpg1.5
  $lang_stat_details_php['vote_details']  = 'Garder le détail des statistiques des votes'; //cpg1.5
  $lang_stat_details_php['vote_details_explanation']  = 'Garder le détail des statistiques de votes'; //cpg1.5
  $lang_stat_details_php['empty_hits_table']  = 'Vider TOUTES les statistiques de visites'; //cpg1.5
  $lang_stat_details_php['empty_hits_table_confirm']  = 'Etes-vous vraiment certain de vouloir effacer TOUTES les statistiques de visite pour TOUTE la Galerie ?<br /> A T T E N T I O N : Cette action ne peut pas être annulée !'; //cpg1.5 //JS-Alert
  $lang_stat_details_php['empty_votes_table']  = 'Effacez TOUTES les statistiques de vote'; //cpg1.5
  $lang_stat_details_php['empty_votes_table_confirm']  = 'Etes-vous vraiment certain de vouloir effacer TOUTES les statistiques de vote pour TOUTE votre Galerie ?<br /> A T T E N T I O N : Cette action ne peut pas être annulée!'; //cpg1.5 //JS-Alert
  $lang_stat_details_php['submit']  = 'Envoyer'; //cpg1.5
  $lang_stat_details_php['upd_success'] = 'La Configuration de Coppermine a été mise à jour'; //cpg1.5
  $lang_stat_details_php['votes'] = 'votes'; //cpg1.5
  $lang_stat_details_php['reset_votes_individual'] = 'Réinitialisation du(des) vote(s) sélectionné(s)'; //cpg1.5
  $lang_stat_details_php['reset_votes_individual_confirm'] = 'Etes-vous certain de vouloir effacer le(s) Vote(s) sélectionné(s)?<br /> A T T E N T I  O N : Cette action ne peut pas être annulée !'; //cpg1.5
  $lang_stat_details_php['back_to_intermediate'] = 'Retour sur l\'affichage des images intermédiaires'; //cpg1.5
  $lang_stat_details_php['records_on_page'] = '%s enregistrements sur %s page(s)'; //cpg1.5
  $lang_stat_details_php['guest'] = 'Visiteur'; //cpg1.5
  $lang_stat_details_php['not_implemented'] = 'Pas encore implémenté'; //cpg1.5
}

// ----------------------- //
// File upload.php
// ----------------------- //

if (defined('UPLOAD_PHP')) {
$lang_upload_php['title'] = 'Télécharger un fichier';
$lang_upload_php['restrictions'] = 'Restrictions'; // cpg1.5
$lang_upload_php['choose_method'] = 'Choisissez la méthode de téléchargement'; // cpg1.5
$lang_upload_php['upload_swf']    = 'Fichiers multiples - interface Flash(recommandé)'; // cpg1.5
$lang_upload_php['upload_single'] = 'simple - Un seul fichier à la fois'; // cpg1.5
$lang_upload_php['up_instr_1'] = 'Sélectionnez un albums dans la liste déroulante';
$lang_upload_php['up_instr_2'] = 'Cliquez sur le bouton "Parcourir" ci dessous et navigez vers le fichier que vou svoullez télécharger';
$lang_upload_php['up_instr_3'] = 'Sélectionnez d\'autres fichiers à télécharger en répétant l\'étape 3';
$lang_upload_php['up_instr_4'] = 'Lorsque vous avez téléchargé les fichiers, cliquez sur le bouton "Continuer". (Note: Le bouton n\'apparaîtra qu\'après avoir téléchargé au moins un fichier).';
$lang_upload_php['up_instr_5'] = 'Vous serez dirigé vers un écran vous permettant d\'enter les détails concernant les fichiers téléchargés. Après avoir complèté le formulaire, soumettez le en utilisant le bouton "Appliquer les changements" au bas du formulaire.';
$lang_upload_php['restriction_zip'] = 'Les fichiers ZIP téléchargés resteront compressés.';
$lang_upload_php['restriction_filesize'] = 'La taille des fichiers téléchargés sur votre serveur ne doivent pas avoir plus de %s chacuns.';  
$lang_upload_php['reg_instr_1'] = 'Action invalide pour la création du formulaire.';
$lang_upload_php['no_name'] = 'Nom de fichier introuvable.';
$lang_upload_php['no_tmp_name'] = 'Impossible de télécharger'; // cpg 1.5
$lang_upload_php['no_post'] = 'Fichier non téléchargé par POST.';
$lang_upload_php['forb_ext'] = 'Extension de fichier non autorisée.';
$lang_upload_php['exc_php_ini'] = 'Le poids excède celui permis par le fichier php.ini.';
$lang_upload_php['exc_file_size'] = 'Le poids excède celui permis par l\'Admin de la Galerie Coppermine.';
$lang_upload_php['partial_upload'] = 'Téléchargement partiel uniquement.';
$lang_upload_php['no_upload'] = 'Le téléchargement ne s\'est pas effectué.';
$lang_upload_php['unknown_code'] = 'Code d\'erreur de téléchargement PHP inconnu.';
$lang_upload_php['impossible'] = 'Impossible à déplacer.';
$lang_upload_php['not_image'] = 'Pas une image ou image endommagée';
$lang_upload_php['not_GD'] = 'N\'est pas une extension GD.';
$lang_upload_php['pixel_allowance'] = 'La hauteur et/ou la largeur de l\'image uploadée est plus grande que celle permise dans la configuration de la Galerie.';
$lang_upload_php['failure'] = 'Erreur de téléchargement';
$lang_upload_php['no_place'] = 'Le fichier précédent n\'a pas pu être placé.';
$lang_upload_php['max_fsize'] = 'Le poids maximal autorisé pour une image est de %s';
$lang_upload_php['picture'] = 'Fichier';
$lang_upload_php['pic_title'] = 'Titre du fichier';
$lang_upload_php['description'] = 'Description du fichier';
$lang_upload_php['keywords_sel'] ='Choisissez un Mot-Clef';
$lang_upload_php['err_no_alb_uploadables'] = 'Désolé, mais il n\'existe pas d\'Album dans lequel vous ayez le droit de télécharger des photos';
$lang_upload_php['close'] = 'Fermez';
$lang_upload_php['no_keywords'] = 'Désolé, aucun Mot-Clef disponible&nbsp;!';
$lang_upload_php['regenerate_dictionary'] = 'Regénérer le dictionnaire';
$lang_upload_php['allowed_types'] = 'Vous pouvez à télécharger des fichiers avec les extensions suivantes:'; // cpg1.5
$lang_upload_php['allowed_img_types'] = 'Extensions d\'Image: %s'; // cpg1.5
$lang_upload_php['allowed_mov_types'] = 'Extensions Video: %s'; // cpg1.5
$lang_upload_php['allowed_doc_types'] = 'Extension de Document: %s'; // cpg1.5
$lang_upload_php['allowed_snd_types'] = 'Extensions Audio: %s'; // cpg1.5
$lang_upload_php['please_wait'] = 'Merci de patienter pendant que le script télécharge - cela peut prendre plusieurs minutes'; // cpg1.5
$lang_upload_php['alternative_upload'] = 'Methode de téléchargement alternative'; // cpg1.5
$lang_upload_php['xp_publish_promote'] = 'Si vous utilisez Windows XP/Vista, vous pouvez Utilisez l\'assitant de publication Web de Windows XP pour téléchrger des fichiers, apportant ainsi une interface Utilisateur plus simple.'; // cpg1.5
$lang_upload_php['more'] = 'plus'; // cpg1.5
$lang_upload_php['err_js_disabled'] = 'L\'interface de téléchargement Flash n\'a pas pu être chargé.  Vous devez avoir JavaScript activé pour pouvoir profiter de l\'interface de téléchargement Flash.'; // cpg1.5
$lang_upload_php['err_flash_disabled'] = 'L\'interface de téléchargement prends beaucoup de temps pour charger ou le chargement a échoué. Vérifiez que le plugin Flash est activé et qu\'une version fonctionnelle d\'Adobe Flash Player est installée.'; // cpg1.5
$lang_upload_php['err_alternate_method'] = 'A la place, vous pouvez Utilisez l\'interface de téléchargement <a href="upload.php?single=1">fichier unique</a>.'; // cpg1.5
$lang_upload_php['err_flash_version'] = 'L\'interface de téléchargement ne peut pas être chargé.  vous devriez installer ou mettre à jour Flash Player. Visitez le <a href="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash">site Adobe</a> pour vous procurer Flash Player.'; // cpg1.5
$lang_upload_php['flash_loading'] = 'L\'interface de téléchargement est en train de se charger. Veuillez patienter...'; // cpg1.5

$lang_upload_swf_php['browse'] = 'Parcourir...'; //cpg1.5
$lang_upload_swf_php['cancel_all'] = 'Annuler tous les téléchargements'; //cpg1.5
$lang_upload_swf_php['upload_queue'] = 'File de téléchargement'; //cpg1.5
$lang_upload_swf_php['files_uploaded'] = 'Fichier(s) téléchargé(s)'; //cpg1.5
$lang_upload_swf_php['all_files'] = 'Tous les Fichiers'; //cpg1.5
$lang_upload_swf_php['status_pending'] = 'En cours...'; //cpg1.5
$lang_upload_swf_php['status_uploading'] = 'Téléchargement...'; //cpg1.5
$lang_upload_swf_php['status_complete'] = 'Terminé.'; //cpg1.5
$lang_upload_swf_php['status_cancelled'] = 'Annulé.'; //cpg1.5
$lang_upload_swf_php['status_stopped'] = 'Arrêté.'; //cpg1.5
$lang_upload_swf_php['status_failed'] = 'Le téléchargement a échoué.'; //cpg1.5
$lang_upload_swf_php['status_too_big'] = 'Le Fichier est trop gros.'; //cpg1.5
$lang_upload_swf_php['status_zero_byte'] = 'Impossible de télécharger un fichier vide (Zéro Byte !!!).'; //cpg1.5
$lang_upload_swf_php['status_invalid_type'] = 'Type de fichier invalide.'; //cpg1.5
$lang_upload_swf_php['status_unhandled'] = 'Erreur non traitée'; //cpg1.5
$lang_upload_swf_php['status_upload_error'] = 'Erreur de téléchargement: '; //cpg1.5
$lang_upload_swf_php['status_server_error'] = 'Erreur Serveur (IO)'; //cpg1.5
$lang_upload_swf_php['status_security_error'] = 'Erreur de Sécurité'; //cpg1.5
$lang_upload_swf_php['status_upload_limit'] = 'Dépassement de la limite de téléchargement.'; //cpg1.5
$lang_upload_swf_php['status_validation_failed'] = 'La Validation a échoué.  Transfer sauté.'; //cpg1.5
$lang_upload_swf_php['queue_limit'] = 'Vous avez tenté de placer trop de fichiers dans la file d\'attente'; //cpg1.5
$lang_upload_swf_php['upload_limit_1'] = 'Vous avez atteint la limite de téléchargement.'; //cpg1.5
$lang_upload_swf_php['upload_limit_2'] = 'Vous devriez sélectionner un maximum de %s fichier(s)'; //cpg1.5
}
// ----------------------- //
// File usermgr.php
// ----------------------- //
if (defined('USERMGR_PHP')) {
  $lang_usermgr_php['memberlist'] = 'Liste des Membres';
  $lang_usermgr_php['user_manager'] = 'Gestion Utilisateurs';
  $lang_usermgr_php['title'] = 'Gérer les Utilisateurs';
  $lang_usermgr_php['name_a'] = 'Nom ascendant';
  $lang_usermgr_php['name_d'] = 'Nom descendant';
  $lang_usermgr_php['group_a'] = 'Groupe ascendant';
  $lang_usermgr_php['group_d'] = 'Groupe descendant';
  $lang_usermgr_php['reg_a'] = 'Date d\'inscription ascendante';
  $lang_usermgr_php['reg_d'] = 'Date d\'inscription descendante';
  $lang_usermgr_php['pic_a'] = 'Nombre de fichiers ascendant';
  $lang_usermgr_php['pic_d'] = 'Nombre de fichiers descendant';
  $lang_usermgr_php['disku_a'] = 'Utilisation espace disque ascendant';
  $lang_usermgr_php['disku_d'] = 'Utilisation espace disque descendant';
  $lang_usermgr_php['lv_a'] = 'Dernière Visite ascendante';
  $lang_usermgr_php['lv_d'] = 'Dernière Visite descendante';
  $lang_usermgr_php['sort_by'] = 'Classer les Utilisateurs par';
  $lang_usermgr_php['err_no_users'] = 'La Table MySQL des Utilisateurs est vide!';
  $lang_usermgr_php['err_edit_self'] = 'Vous ne pouvez pas modifier votre propre Profil, utilisez le lien \'Mon Profil\' pour effectuer cette opération';
  $lang_usermgr_php['with_selected'] = 'Sélectionner :';
  $lang_usermgr_php['delete_files_no'] = 'garder le fichiers publics (mais les laisser anonymes)';
  $lang_usermgr_php['delete_files_yes'] = 'effacer les fichiers publics';
  $lang_usermgr_php['delete_comments_no'] = 'garder les Commentaires(mais les laisser anonymes)';
  $lang_usermgr_php['delete_comments_yes'] = 'effacer les Commentaires';
  $lang_usermgr_php['activate'] = 'Activer';
  $lang_usermgr_php['deactivate'] = 'Désactiver';
  $lang_usermgr_php['reset_password'] = 'Changer le Mot de Passe';
  $lang_usermgr_php['change_primary_membergroup'] = 'Changer de Groupe Principal';
  $lang_usermgr_php['add_secondary_membergroup'] = 'Ajouter un Groupe Secondaire';
  $lang_usermgr_php['name'] = 'Nom d\'Utilisateur';
  $lang_usermgr_php['group'] = 'Groupe';
  $lang_usermgr_php['inactive'] = 'Inactif';
  $lang_usermgr_php['operations'] = 'Opérations';
  $lang_usermgr_php['pictures'] = 'Fichiers';
  $lang_usermgr_php['disk_space_used'] = 'Espace utilisé';
  $lang_usermgr_php['disk_space_quota'] = 'Espace alloué';
  $lang_usermgr_php['registered_on'] = 'Enregistré le';
  $lang_usermgr_php['last_visit'] = 'Dernière visite';
  $lang_usermgr_php['u_user_on_p_pages'] = '%d Utilisateur(s) sur %d page(s)';
  $lang_usermgr_php['confirm_del'] = 'Voulez-vous vraiment supprimer cet Utilisateur?\\nToutes ses photos et Albums seront également supprimés.'; //js-alert
  $lang_usermgr_php['mail'] = 'MAIL';
  $lang_usermgr_php['err_unknown_user'] = 'L\'Utilisateur sélectionné n\'existe pas!';
  $lang_usermgr_php['modify_user'] = 'Modifier l\'Utilisateur';
  $lang_usermgr_php['notes'] = 'Notes';
  $lang_usermgr_php['note_list'] = '<li>Si vous ne souhaitez pas modifier le Mot de Passe actuel, laissez le champs &quot;Mot de Passe&quot; vide.';
  $lang_usermgr_php['password'] = 'Mot de Passe';
  $lang_usermgr_php['user_active'] = 'L\'Utilisateur est actif';
  $lang_usermgr_php['user_group'] = 'Groupe de l\'Utilisateur';
  $lang_usermgr_php['user_email'] = 'Courriel de l\'Utilisateur';
  $lang_usermgr_php['user_web_site'] = 'Site web de l\'Utilisateur';
  $lang_usermgr_php['create_new_user'] = 'Créez un nouvel Utilisateur';
  $lang_usermgr_php['user_location'] = 'Localisation de l\'Utilisateur';
  $lang_usermgr_php['user_interests'] = 'Centres d\'intérêt de l\'Utilisateur';
  $lang_usermgr_php['user_occupation'] = 'Activité de l\'Utilisateur';
  $lang_usermgr_php['user_profile1'] = '$user_profile1';
  $lang_usermgr_php['user_profile2'] = '$user_profile2';
  $lang_usermgr_php['user_profile3'] = '$user_profile3';
  $lang_usermgr_php['user_profile4'] = '$user_profile4';
  $lang_usermgr_php['user_profile5'] = '$user_profile5';
  $lang_usermgr_php['user_profile6'] = '$user_profile6';
  $lang_usermgr_php['latest_upload'] = 'Derniers uploads';
  $lang_usermgr_php['no_latest_upload'] = 'N\'a pas fait de téléchargement'; // cpg1.5
  $lang_usermgr_php['last_comments'] = 'Derniers Commentaires'; // cpg1.5
  $lang_usermgr_php['no_last_comments'] = 'N\'a pas fait de Commentaire'; // cpg1.5
  $lang_usermgr_php['comments'] = 'Commentaires'; // cpg1.5
  $lang_usermgr_php['never'] = 'jamais';
  $lang_usermgr_php['search'] = 'Cherchez un Utilisateur';
  $lang_usermgr_php['submit'] = 'Soumettre';
  $lang_usermgr_php['search_submit'] = 'Valider !';
  $lang_usermgr_php['search_result'] = 'Résultat de recherche pour : ';
  $lang_usermgr_php['alert_no_selection'] = 'vous devez d\\\'abord sélectionner un Utilisateur!'; //js-alert
  $lang_usermgr_php['select_group'] = 'Sélectionner un Groupe';
  $lang_usermgr_php['groups_alb_access'] = 'Droits sur les Albums pour le Groupe';
  $lang_usermgr_php['category'] = 'Catégorie';
  $lang_usermgr_php['modify'] = 'Modifier ?';
  $lang_usermgr_php['group_no_access'] = 'Ce Groupe n\'a pas d\'accès spécial';
  $lang_usermgr_php['notice'] = 'Attention';
  $lang_usermgr_php['group_can_access'] = 'Accès réservé au Groupe &quot;%s&quot;';
  $lang_usermgr_php['send_login_data'] = 'Envoyer les paramètres d\'identification à cet Utilisateur (le Mot de Passe sera envoyé par courriel)'; //cpg1.5
  $lang_usermgr_php['send_login_email_subject'] = 'Vos nouveaux paramètres d\'identification pour votre Compte'; //cpg1.5
  $lang_usermgr_php['failed_sending_email'] = 'Le courriel avec les paramètres d\'identification ne peut pas être envoyé !'; //cpg1.5
  $lang_usermgr_php['view_profile'] = 'Voir le profil'; // cpg1.5
  $lang_usermgr_php['edit_profile'] = 'Modifez le profil'; // cpg1.5
  $lang_usermgr_php['ban_user'] = 'Bannir l\'Utilisateur'; // cpg1.5
  $lang_usermgr_php['user_is_banned'] = 'L\'Utilisateur est banni'; // cpg1.5
  $lang_usermgr_php['status'] = 'Statut'; // cpg1.5
  $lang_usermgr_php['status_active'] = 'actif'; // cpg1.5
  $lang_usermgr_php['status_inactive'] = 'non actif'; // cpg1.5
  $lang_usermgr_php['total'] = 'Total'; // cpg1.5
$lang_usermgr_php['send_login_data_email'] = <<<EOT
Votre nouveau Compte a été crée pour vous sur {SITE_NAME}.

Vous pouvez maintenant vous identifier sur <a href="{SITE_LINK}">{SITE_LINK}</a> avec comme Nom d'Utilisateur "{USER_NAME}" et comme Mot de Passe  "{USER_PASS}"


Cordialement,

l'Administrateur de {SITE_NAME}

EOT;
}

// ----------------------- //
// File update.php
// ------------------------------------------------------------------------- //
if (defined('UPDATE_PHP')) {
  $lang_update_php['title'] = 'Mise à jour'; // cpg1.5
  $lang_update_php['welcome_updater'] = 'Bienvenue dans la mise à jour de Coppermine'; // cpg1.5
  $lang_update_php['could_not_authenticate'] = 'Impossible de vous identifier'; // cpg1.5
  $lang_update_php['provide_admin_account'] = 'Merci de donner vos informations pour votre compte Administrateur ou pour la connection à la base de données MySQL'; // cpg1.5
  $lang_update_php['try_again'] = 'Essayez encore'; // cpg1.5
  $lang_update_php['mysql_connect_error'] = 'Impossiblede créer une connection mySQL'; // cpg1.5
  $lang_update_php['mysql_database_error'] = 'MySQL ne peut pas trouver la base de données %s'; // cpg1.5
  $lang_update_php['mysql_said'] = 'MySQL dit'; // cpg1.5
  $lang_update_php['check_config_file'] = 'Merci de vérifier les données SQL dans %s'; // cpg1.5
  $lang_update_php['performing_database_updates'] = 'Mise à jour de la base de données'; // cpg1.5
  $lang_update_php['performing_file_updates'] = 'Mise à jour des fichiers'; // cpg1.5
  $lang_update_php['already_done'] = 'Déjà fait'; // cpg1.5
  $lang_update_php['password_encryption'] = 'Cryptage du Mot de Passe'; // cpg1.5
  $lang_update_php['alb_password_encryption'] = 'Cryptage du mot de passe Album'; // cpg1.5
  $lang_update_php['category_tree'] = 'Arborescence des catérories'; // cpg1.5
  $lang_update_php['authentication_needed'] = 'Authenticafication requise'; // cpg1.5
  $lang_update_php['username'] = 'Nom d\'Utilisateur'; // cpg1.5
  $lang_update_php['password'] = 'Mot de Passe'; // cpg1.5
  $lang_update_php['update_completed'] = 'Mise à jour complète'; // cpg1.5
  $lang_update_php['check_versions'] = 'Il est recommandé de %svérifier la version de vos fichiers%s si vous venez juste de mettre à jour depuis une ancienne version de Coppermine'; // cpg1.5 // Leave the %s untouched when translating - it wraps the link
  $lang_update_php['start_page'] = 'Si vous ne le faites pas (ou si vous ne voulez pas le faire), vous pouvez aller %ssur la page d\'accueil de votre Galerie%s'; // cpg1.5 // Leave the %s untouched when translating - it wraps the link
  $lang_update_php['errors_encountered'] = 'Les erreurs suivantes sont survenues et doivent être corrigées d\'abord'; // cpg1.5
  $lang_update_php['delete_file'] = 'Effacez %s'; // cpg1.5
  $lang_update_php['could_not_delete'] = 'Impossible d\'effacer à cause des permissions. Effacez le fichier manuellement !'; // cpg1.5
}

// ------------------------------------------------------------------------- //
// File util.php
// ----------------------- //
if (defined('UTIL_PHP')) {
  $lang_util_php['title'] = 'Utilitaires d\'Administration (Redimensionnement des images)';
  $lang_util_php['file'] = 'Fichier';
  $lang_util_php['problem'] = 'Problème';
  $lang_util_php['status'] = 'Statut';
  $lang_util_php['title_set_to'] = 'titre changé en';
  $lang_util_php['submit_form'] = 'soumettre';
  $lang_util_php['titles_updated'] = '%s Titres mis à jour.'; // cpg1.5
  $lang_util_php['updated_succesfully'] = 'mise à jour effectuée avec succès';
  $lang_util_php['error_create'] = 'ERREUR lors de la création';
  $lang_util_php['continue'] = 'Traiter d\'autres images';
  $lang_util_php['main_success'] = 'Le fichier %s est maintenant utilisé comme image principale';
  $lang_util_php['error_rename'] = 'Erreur lors du changement du nom de %s à %s';
  $lang_util_php['error_not_found'] = 'Le fichier %s n\'a pas été trouvé';
  $lang_util_php['back'] = 'retour à la page principale';
  $lang_util_php['thumbs_wait'] = 'Mise à jour des vignettes et/ou images redimensionnées, merci de patienter...';
  $lang_util_php['thumbs_continue_wait'] = 'CONTINUEZ la mise à jour des vignettes et/ou des images redimensionnées...';
  $lang_util_php['titles_wait'] = 'Mise à jour des titres, merci de patienter...';
  $lang_util_php['delete_wait'] = 'Suppression des titres, merci de patienter...';
  $lang_util_php['replace_wait'] = 'Suppression des originaux et remplacement de ces derniers par les images redimensionnées, merci de patienter...';
  $lang_util_php['update'] = 'Mettre à jour les Vignettes et/ou les photos redimensionnées';
  $lang_util_php['update_what'] = 'Ce qui devrait être mis à jour';
  $lang_util_php['update_thumb'] = 'Seulement les Vignettes';
  $lang_util_php['update_pic'] = 'Seulement les photos redimensionnées';
  $lang_util_php['update_both'] = 'Les Vignettes et les images redimensionnées';
  $lang_util_php['update_number'] = 'Nombre d\'images traitées par clic';
  $lang_util_php['update_option'] = '(essayez de réduire cette valeur si vous avez des problèmes de timeout)';
  $lang_util_php['update_missing'] = 'Uniquement les fichiers non mis à jour'; // cpg1.5
  $lang_util_php['filename_title'] = 'Nom du fichier / Titre de l\'image';
  $lang_util_php['filename_how'] = 'Comment le nom du fichier doit-il être modifié ?';
  $lang_util_php['filename_remove'] = 'Supprimer la fin .jpg et remplacer _ (underscore) par des espaces';
  $lang_util_php['filename_euro'] = 'Changer 2003_11_23_13_20_20.jpg en 23/11/2003 13:20';
  $lang_util_php['filename_us'] = 'Changer 2003_11_23_13_20_20.jpg en 11/23/2003 13:20';
  $lang_util_php['filename_time'] = 'Changer 2003_11_23_13_20_20.jpg en 13:20';
  $lang_util_php['notitle'] = 'Appliquer uniquement aux fichiers sans titres'; // cpg1.5
  $lang_util_php['delete_title'] = 'Supprimer le titre des photos';
  $lang_util_php['delete_title_explanation'] = 'Cela va effacer l\'ensemble des Titres des photos de l\'Album sélectionné.';
  $lang_util_php['delete_original'] = 'Supprimer les photos dans leur taille d\'origine';
  $lang_util_php['delete_original_explanation'] = 'Cela va Supprimez les photos à la taille d\'origine';
  $lang_util_php['delete_intermediate'] = 'Supprimer les images intermédiaires';
  $lang_util_php['delete_intermediate_explanation1'] = 'Celà va effacer les images intermédiaires (normale).'; // cpg1.5
  $lang_util_php['delete_intermediate_explanation2'] = 'Utilisez cette option pour faire de la place sur le disque si vous avez désactivé \'Créer des images intermédiaires \' dans la configuration après avoir ajouté des images.'; // cpg1.5
  $lang_util_php['delete_intermediate_check'] = 'L\'option de la configuration \'Créer des images intérmédiaires\' est actuellement %s.'; // cpg1.5
  $lang_util_php['no_image'] = '%s a été ignoré parce que ce n\'est pas une image.'; // cpg1.5
  $lang_util_php['enabled'] = 'activé'; // cpg1.5
  $lang_util_php['disabled'] = 'désactivé'; // cpg1.5
  $lang_util_php['delete_replace'] = 'Supprimer les images originales en les remplaçant par les versions redimensionnées';
  $lang_util_php['titles_deleted'] = 'Tous les Titres des images de l\'Album sélectionné sont effacés';
  $lang_util_php['deleting_intermediates'] = 'Patienter : Effacement des images intermédiaires...';
  $lang_util_php['searching_orphans'] = 'Patienter : recherche des Commentaires orphelins...';
  $lang_util_php['delete_orphans'] = 'Supprimer les Commentaires orphelins (fonctionne pour tous les Albums)';
  $lang_util_php['delete_orphans_explanation'] = 'Cela va identifier tous les Commentaires qui ne sont plus associés à un fichier et vous permettre de les effacer.<br />Vérifie tous les Albums.';
  $lang_util_php['update_full_normal_thumb'] = 'Tout... Images originales, Images intermédiaires, Vignettes'; // cpg1.5
  $lang_util_php['update_full_normal'] = 'Les deux : Intermédiaires et taille originale (si une copie de l\'originale est disponible)'; // cpg1.5
  $lang_util_php['update_full'] = 'Uniquement les images de taille originale (si une copie de l\'originale est disponible)';// cpg1.5
  $lang_util_php['delete_back'] = 'Effacer la copie de l\'image originale (Mod filigrane)'; // cpg1.5
  $lang_util_php['delete_back_explanation'] = 'Celà va effacer la copie de l\'image originale. <br>Vous gagnerez ainsi de la place sur votre serveur mais ne pourrez pas annuler le filigrane de votre image par la suite !!! <br>Le filigrane sera permanent après cette opération'; // cpg1.5
  $lang_util_php['finished'] = '<br />Terminer la mise à jour des Vignettes/Images!<br />'; // cpg1.5
  $lang_util_php['autorefresh'] = ' Réactualisation automatique de la page (inutile de cliquer sur le bouton CONTINUEZ)<br /><br />'; // cpg1.5
  $lang_util_php['refresh_db'] = 'Recharger les informations de poids et de taille';
  $lang_util_php['refresh_db_explanation'] = 'Cela va recharger les informations de poids et de taille. Utilisez cette fonction si les quotas sont incorrects ou si vous avez changé manuellement ces données.';
  $lang_util_php['reset_views'] = 'Réinitialisation du compteur de vues';
  $lang_util_php['reset_views_explanation'] = 'Met à zero le compteur de vue de l\'ensemble des fichiers de l\'Album sélectionné.';
  $lang_util_php['reset_success'] = 'Réinitialisation réussie'; // cpg1.5
  $lang_util_php['orphan_comment'] = 'Pas de Commentaire ophelin trouvé';
  $lang_util_php['delete_all'] = 'Tout Supprimer';
  $lang_util_php['delete_all_orphans'] = 'Supprimez tous les Commentaires orphelins ?';
  $lang_util_php['comment'] = 'Commentaire : ';
  $lang_util_php['nonexist'] = 'Lié à un fichier innexistant # ';
  $lang_util_php['delete_old'] = 'Effacer les fichiers plus anciens qu\'un nombre de jours déterminé';  // cpg1.5
  $lang_util_php['delete_old_explanation'] = 'Cela va effacer les fichiers plus anciens que le nombre de jours que vous avez déterminé (images normales, intermediaires, vignettes). Utilisez cette fonction pour gagner le l\'espace disque.';  // cpg1.5
  $lang_util_php['delete_old_warning'] = 'Attention : Les fichiers sélectionnés seront effacés définitivement sans autres avertissements !';  // cpg1.5
  $lang_util_php['deleting_old'] = 'Effacement de images anciennes, Merci de patienter...';  // cpg1.5
  $lang_util_php['older_than'] = 'Effacer les fichiers plus vieux que %s jours';  // cpg1.5
  $lang_util_php['del_orig'] = 'L\'image originale %s a été effacée avec succès';  // cpg1.5
  $lang_util_php['del_intermediate'] = 'L\'image intermédiaire %s a été effacée avec succès';  // cpg1.5
  $lang_util_php['del_thumb'] = 'La vignette %s a été effacée avec succès';  // cpg1.5
  $lang_util_php['del_error'] = 'Erreur d\'effacement de %s !';  // cpg1.5
  $lang_util_php['affected_records'] = '%s enregistrements affectés.'; // cpg1.5
  $lang_util_php['all_albums'] = 'Tous les Albums'; // cpg1.5
  $lang_util_php['update_result'] = 'Résultats de la mise à jour'; // cpg1.5
  $lang_util_php['incorrect_filesize'] = 'La taille totale de l\'image est incorrecte'; // cpg1.5
  $lang_util_php['database'] = 'Base de données : '; // cpg1.5
  $lang_util_php['bytes'] = ' bytes'; // cpg1.5
  $lang_util_php['actual'] = ' Actuel : '; // cpg1.5
  $lang_util_php['updated'] = 'Mis à jour'; // cpg1.5
  $lang_util_php['filesize_error'] = 'Impossible de trouver la taille du fichier (peut être un fichier invalide), ignore....'; // cpg1.5
  $lang_util_php['skipped'] = 'Ignoré'; // cpg1.5
  $lang_util_php['incorrect_dimension'] = 'Les dimensions sont incorrectes'; // cpg1.5
  $lang_util_php['dimension_error'] = 'Impossible de trouver les informations de dimensions, ignore....'; // cpg1.5
  $lang_util_php['cannot_fix'] = 'Ne peut pas corriger'; // cpg1.5
  $lang_util_php['fullpic_error'] = 'Le fichier %s n\'existe pas!'; // cpg1.5
  $lang_util_php['no_prob_detect'] = 'Pas de problèmes détectés'; // cpg1.5
  $lang_util_php['no_prob_found'] = 'Pas de problèmes trouvés.'; // cpg1.5
  $lang_util_php['no_category'] = 'Pas de Catégorie'; // cpg1.5
$lang_util_php['keyword_convert'] = 'Convertir le séprarteur demots clé'; // cpg1.5
$lang_util_php['keyword_from_to'] = 'Convertir le séparateur de mots clé de %s à %s'; // cpg1.5
$lang_util_php['keyword_set'] = 'Paramétrer le séparateur de mots clé à la nouvelle valeur'; // cpg1.5
$lang_util_php['keyword_replace'] = 'Avant la convertion, remplacer %s par %s'; // cpg1.5
$lang_util_php['keyword_replace_values'] = array('_'=>'Souligné', '-'=>'tiret', '~'=>'tilde'); // cpg1.5
$lang_util_php['keyword_explanation'] = 'Cela va convertir le séparateur de mots clé pour tous vos fichiers d\'une valeur à une autre.  Allez dans la documentation pour plus de détails.'; // cpg1.5
}

// ----------------------- //
// File versioncheck.php
// ----------------------- //
if (defined('VERSIONCHECK_PHP')) {
  $lang_versioncheck_php['title'] = 'Vérification de version';
  $lang_versioncheck_php['versioncheck_output'] = 'Sortie du vérificateur de versionVersioncheck output';
  $lang_versioncheck_php['file'] = 'fichier';
  $lang_versioncheck_php['folder'] = 'répertoire';
  $lang_versioncheck_php['outdated'] = 'plus ancien que %s';
  $lang_versioncheck_php['newer'] = 'plus neuf que %s';
  $lang_versioncheck_php['modified'] = 'modifié';
  $lang_versioncheck_php['not_modified'] = 'non modifié'; // cpg1.5
  $lang_versioncheck_php['needs_change'] = 'nécessite des changements';
  $lang_versioncheck_php['review_permissions'] = 'Revoir les permissions';
  $lang_versioncheck_php['inaccessible'] = 'Le Fichier est inaccessible';
  $lang_versioncheck_php['review_version'] = 'Votre Fichier est trop ancien';
  $lang_versioncheck_php['review_dev_version'] = 'Votre fichier est plus récent';
  $lang_versioncheck_php['review_modified'] = 'Le Fichier est peut être corrompu (ou vous l\'avez modifié délibérément)';
  $lang_versioncheck_php['review_missing'] = '%s manquant ou inaccessible';
  $lang_versioncheck_php['existing'] = 'existant';
  $lang_versioncheck_php['review_removed_existing'] = 'Le Fichier doit être effacé pour des raisons de sécurité';
  $lang_versioncheck_php['counter'] = 'Compteur';
  $lang_versioncheck_php['type'] = 'Type';
  $lang_versioncheck_php['path'] = 'Chemin';
  $lang_versioncheck_php['missing'] = 'Manquant';
  $lang_versioncheck_php['permissions'] = 'Permissions';
  $lang_versioncheck_php['version'] = 'Version';
  $lang_versioncheck_php['revision'] = 'Revision';
  $lang_versioncheck_php['modified'] = 'Modifié';
  $lang_versioncheck_php['comment'] = 'Commentaire';
  $lang_versioncheck_php['help'] = 'Aide';
  $lang_versioncheck_php['repository_link'] = 'Lien vers le Référenciel';
  $lang_versioncheck_php['browse_corresponding_page_subversion'] = 'Naviger vers la page correspondant à ce fichier dans le référenciel SVN du projet';
  $lang_versioncheck_php['mandatory'] = 'obligatoire';
  $lang_versioncheck_php['mandatory_missing'] = 'Fichier obligatoire manquant'; // cpg1.5
  $lang_versioncheck_php['optional'] = 'optionnel';
  $lang_versioncheck_php['removed'] = 'effacé'; // cpg1.5
  $lang_versioncheck_php['options'] = 'Options';
  $lang_versioncheck_php['display_output'] = 'Affichez la sortie';
  $lang_versioncheck_php['on_screen'] = 'Plein écran';
  $lang_versioncheck_php['text_only'] = 'Uniquement texte';
  $lang_versioncheck_php['errors_only'] = 'Montrer uniquement les erreurs potentielles';
  $lang_versioncheck_php['hide_images'] = 'Cche les images'; // cpg1.5
  $lang_versioncheck_php['no_modification_check'] = 'Ne pas vérifier les fichiers modifiés'; // cpg1.5
  $lang_versioncheck_php['do_not_connect_to_online_repository'] = 'Ne pas se connecter au référenciel en ligne';
  $lang_versioncheck_php['online_repository_explain'] = 'uniquement recommandé si la connection échoue';
  $lang_versioncheck_php['submit'] = 'envoyer / rafraîchir';
  $lang_versioncheck_php['select_all'] = 'Selectionner tout'; // js-alert
  $lang_versioncheck_php['files_folder_processed'] = 'Affichage de %s items dans %s répertoires/fichiers avec %s problèmes potentiels';
  $lang_versioncheck_php['read'] = 'Lire'; // cpg1.5
  $lang_versioncheck_php['write'] = 'Ecrire'; // cpg1.5
  $lang_versioncheck_php['warning'] = 'Avertissement'; // cpg1.5
  $lang_versioncheck_php['not_applicable'] = 'n/a'; // cpg1.5 
}

// ----------------------- //
// File view_log.php
// ----------------------- //
if (defined('VIEWLOG_PHP')) {
  $lang_viewlog_php['delete_all'] = 'Supprimer tous les logs';
  $lang_viewlog_php['delete_this'] = 'Supprimer ce log';
  $lang_viewlog_php['view_logs'] = 'Consulter les logs';
  $lang_viewlog_php['no_logs'] = 'Pas de log créé.';
  $lang_viewlog_php['last_updated'] = 'dernière mise à jour'; // cpg1.5
}

// ----------------------- //
// File xp_publish.php
// ----------------------- //
if (defined('XP_PUBLISH_PHP')) {
  $lang_xp_publish_php['title'] = 'Coppermine - Assistant de Publication Web XP';
  $lang_xp_publish_php['client_header'] = 'Assistant de publication Web XP';  // cpg1.5
  $lang_xp_publish_php['requirements'] = 'Requis'; // cpg1.5
  $lang_xp_publish_php['windows_xp'] = 'Windows XP / Vista'; // cpg1.5
  $lang_xp_publish_php['no_windows_xp'] = 'Vous semblez utiliser un autre système d\'exploitation non supporté'; // cpg1.5
  $lang_xp_publish_php['no_os_detect'] = 'Impossible de définir votre système d\'exploitation'; // cpg1.5
  $lang_xp_publish_php['requirement_http_upload'] = 'Une installation de Coppermine qui fonctionne et dans laquelle la fonction de téléchargement par http fonctionne'; // cpg1.5
  $lang_xp_publish_php['requirement_ie'] = 'Microsoft Internet Explorer'; // cpg1.5
  $lang_xp_publish_php['requirement_permissions'] = 'L\'Administrateur de la Galerie doit voir avoir donné les permissions de téléchargement'; // cpg1.5
  $lang_xp_publish_php['requirement_login'] = 'Vous devez être identifié pour télécharger'; // cpg1.5
  $lang_xp_publish_php['no_ie'] = 'Vous semblez Utilisez une autre navigateur non supporté'; // cpg1.5
  $lang_xp_publish_php['no_browser_detect'] = 'Impossible de détecter votre navigateur'; // cpg1.5
  $lang_xp_publish_php['no_gallery_name'] = 'Vous devez spécifier un nom de Galerie dans la configuration'; // cpg1.5
  $lang_xp_publish_php['no_gallery_description'] = 'Vous devez spécifier une déscription pour la Galerie dans la configutation'; // cpg1.5
  $lang_xp_publish_php['howto_install'] = 'Comment installer'; // cpg1.5
  $lang_xp_publish_php['install_right_click'] = 'Faites un click droit sur %sce lien%s et sélectionnez &quot;enregistre la cible sous...&quot;'; // cpg1.5 // translator note: don't replace the %s - that placeholder token needs to go untranslated
  $lang_xp_publish_php['install_save'] = 'Sauvez ce fichier sur votre client. Lors de la sauvegarde du fichier, assurez-vous que le nom proposé est <tt>cpg_###.reg</tt> ( ### représente un horodatage numérique). Modifiez de cette manière si nécessaire (laissez le chiffres)'; // cpg1.5
  $lang_xp_publish_php['install_execute'] = 'Une fois le téléchargement terminé, lancez le fichier en double-cliquant dessus afin d\'Enregistrez votre serveur avec l\'assistant de publication Web';  // cpg1.5
  $lang_xp_publish_php['usage'] = 'Utilisation';  // cpg1.5
  $lang_xp_publish_php['select_files'] = 'Dans l\'Explorateur Windows, sélectionnez les fichiers que vous voulez télécharger'; // cpg1.5
  $lang_xp_publish_php['display_tasks'] = 'Assurez vous que les répertoires ne sont pas affichés dans le panneau latéral de l\'explorateur'; // cpg1.5
  $lang_xp_publish_php['publish_on_the_web'] = 'cliquez sur &quot;Publier xxx sur le web&quot; dans le panneau de gauche'; // cpg1.5
  $lang_xp_publish_php['confirm_selection'] = 'Confirmez votre sélection de fichiers'; // cpg1.5
  $lang_xp_publish_php['select_service'] = 'Dans la liste des options qui apparaisent, sélectionez celle pour votre Galerie photo (elle a le nom de votre Galerie)'; // cpg1.5
  $lang_xp_publish_php['enter_login'] = 'Entrez vos informations d\'identification si demandées'; // cpg1.5
  $lang_xp_publish_php['select_album'] = 'Sélectionnez l\'Album cible pour vos images ou créez un nouvel Album'; // cpg1.5
  $lang_xp_publish_php['next'] = 'Cliquez sur &quot;suivant&quot;'; // cpg1.5
  $lang_xp_publish_php['upload_starts'] = 'Le téléchargement de vos fichiers devrait démarrer'; // cpg1.5
  $lang_xp_publish_php['upload_completed'] = 'Lorsqu\'il est terminé, vérifiez dans votre Galerie si les fichiers ont bien été ajoutés correctement'; // cpg1.5
  $lang_xp_publish_php['welcome'] = 'Bienvenue <strong>%s</strong>,';
  $lang_xp_publish_php['need_login'] = 'Vous devez vous identifier en utilisant Internet Explorer avant de pouvoir utiliser cet assistant.<p/><p>Lors de votre identification, n\'oubliez pas de sélectionner l\'option &quot;se souvenir de moi&quot; si elle est présente.';
  $lang_xp_publish_php['no_alb'] = 'Désolé, mais il n\'y a pas d\'Albums où vous êtes autorisés à télécharger des images avec cet assistant.';
  $lang_xp_publish_php['upload'] = 'Télécharger vos images dans un Album existant';
  $lang_xp_publish_php['create_new'] = 'Créer un nouvel Album pour vos images';
  $lang_xp_publish_php['category'] = 'Categorie';
  $lang_xp_publish_php['new_alb_created'] = 'Votre nouvel Album &quot;<strong>%s</strong>&quot; a été crée.';
  $lang_xp_publish_php['continue'] = 'Cliquer sur &quot;Suivant&quot; pour commencer le téléchargement de vos images';
  $lang_xp_publish_php['link'] = '';
}

// ------------------------------------------------------------------------- //
// Core plugins
// ------------------------------------------------------------------------- //
if (defined('CORE_PLUGIN')) {
  $lang_plugin_php['usergal_alphatabs_config_name'] = 'User Gallery Alphabetic Tabbing(Onglets alphabétiques pour les Galeries Utilisateurs)'; // cpg1.5
  $lang_plugin_php['usergal_alphatabs_config_description'] = 'Ce qu\'il fait : Il affiche des onglets alphabétiques en haut du cadre des Galeries Utilisateurs afin que les visiteurs puissent accéder directement vers une page qui affiche toutes les Galeries Utilisateur dont le nom commence par la lettre sur laquelle il a cliqué. Ce plugin est recommandé si vous avez réellement un très grand nombre de Galeries Utilisateurs.'; // cpg1.5
  $lang_plugin_php['usergal_alphatabs_jump_by_username'] = 'Naviguez par nom d\'Utilisateur'; // cpg1.5
  $lang_plugin_php['sample_config_name'] = 'Sample Plugin'; // cpg1.5
  $lang_plugin_php['sample_config_description'] = 'Ceci est un exemple de plugin. Il ne fait rien de particulièrement utile - il n\'est là que pour montrer ce que les plugins peuvent faire et comment les coder. Lorsqu\'il est activé, il affichera un exemple de texte en rouge.'; // cpg1.5
  $lang_plugin_php['sample_plugin_documentation'] = 'Documentation du Plugin'; // cpg1.5
  $lang_plugin_php['sample_plugin_support'] = 'Aide du Plugin'; // cpg1.5
  $lang_plugin_php['sample_install_explain'] = 'Entrer l\'identifiant (\'foo\') et le mot de passe (\'bar\') pour l\'installer'; // cpg1.5
  $lang_plugin_php['sample_install_username'] = 'Identifiant'; // cpg1.5
  $lang_plugin_php['sample_install_password'] = 'Mot de Passe'; // cpg1.5
  $lang_plugin_php['sample_output'] = 'Ceci est un exemple de donnée renvoyée depuis le plugin "sample plugin"'; // cpg1.5
  $lang_plugin_php['opensearch_config_name'] = 'OpenSearch'; // cpg1.5
  $lang_plugin_php['opensearch_config_description'] = 'Une adaptation de <a href="http://www.opensearch.org/" rel="external" class="external">OpenSearch</a> pour Coppermine.<br />Si il est activé, les visiteurs peuvent ajouter votre Galerie à leur barre de recherche du navigateur.'; // cpg1.5
  $lang_plugin_php['opensearch_search'] = 'Chercher %s'; // cpg1.5
  $lang_plugin_php['opensearch_extra'] = 'Vous devriez ajouter du texte à votre site pour expliquer ce que fait ce plugin'; // cpg1.5
  $lang_plugin_php['opensearch_failed_to_open_file'] = 'Impossible d\'ouvrir le fichier %s - vérifiez les permissions'; // cpg1.5
  $lang_plugin_php['opensearch_failed_to_write_file'] = 'Impossible d\'écrire dans le fichier %s - vérifiez les permissions'; // cpg1.5
  $lang_plugin_php['opensearch_form_header'] = 'Entrez le détail à utiliser dans la description du fichier'; // cpg1.5
  $lang_plugin_php['opensearch_gallery_url'] = 'URL de la Galerie (doit être correct)'; // cpg1.5
  $lang_plugin_php['opensearch_display_name'] = 'Nom affiché dans le navigateur'; // cpg1.5
  $lang_plugin_php['opensearch_description'] = 'Description'; // cpg1.5
  $lang_plugin_php['opensearch_character_limit'] = '%s Limite de caractères'; // cpg1.5
  $lang_plugin_php['onlinestats_description'] = 'Affiche un bloc sur chaque page de la Galerie pour montrer les invités et les Utilisateurs actuellement en ligne.';
  $lang_plugin_php['onlinestats_name'] = 'Qui est en ligne ?';
  $lang_plugin_php['onlinestats_config_extra'] = 'Pour activer ce plugin (et afficher le bloc de statistiques onlinestats), il faut ajouter la chaîne "onlinestats" (séparée par un slash \'/\') à "<a href="docs/en/configuration.htm#admin_Album_list_content">Le contenu de la page principale</a>" dans <a href="admin.php">la configuration de Coppermine</a> dans la section " Affichage de la liste des Albums ". Le paramétrage devrait ressemble à ça "breadcrumb/catlist/alblist/onlinestats" . Pour changer la position du bloc, déplacez la chaine "onlinestats" dans le champ de la configuration.';
  $lang_plugin_php['onlinestats_config_install'] = 'Ce plugin ajoute des requêtes à chaque fois ou il est exécuté, utilisant des resources supplémentaires. Si votre Galerie est lente ou si vous avez beaucoup d\'Utilisateursn vous ne devriez pas l\'Utilisez.';
  $lang_plugin_php['onlinestats_we_have_reg_member'] = 'Il y a %s visiteur enregistré';
  $lang_plugin_php['onlinestats_we_have_reg_members'] = ' il y a %s visiteurs enregistrés';
  $lang_plugin_php['onlinestats_most_recent'] = 'Le visiteur enregistré le plus récent est %s';
  $lang_plugin_php['onlinestats_is'] = 'Au total il y a %s visiteur en ligne';
  $lang_plugin_php['onlinestats_are'] = 'Au total il y a %s visiteurs en ligne';
  $lang_plugin_php['onlinestats_and'] = 'et';
  $lang_plugin_php['onlinestats_reg_member'] = '%s visiteur enregistré';
  $lang_plugin_php['onlinestats_reg_members'] = '%s visiteur enregistré';
  $lang_plugin_php['onlinestats_guest'] = '%s invité';
  $lang_plugin_php['onlinestats_guests'] = '%s invités';
  $lang_plugin_php['onlinestats_record'] = 'Nombre le plus grand de visiteurs jamais en ligne: %s le %s';
  $lang_plugin_php['onlinestats_since'] = ' Visiteurs enregistrés en ligne au cours les dernières %s minutes: %s';
  $lang_plugin_php['onlinestats_config_text'] = 'Combien de temps voulez vous laisser les visiteurs affichés comme en ligne avant de considérer qu\'ils sont partis ?';
  $lang_plugin_php['onlinestats_minute'] = 'minutes';
  $lang_plugin_php['onlinestats_remove'] = 'Effacez la table utilisée pour stocker les données du plugin ?';
  $lang_plugin_php['link_target_name'] = 'Cible du lien';
  $lang_plugin_php['link_target_description'] = 'Change la manière dont les liens externes sont ouverts: Si ce plugin est activé, tous les liens contenant l\'atribut rel="external" seront ouverts dans une nouvelle fenêtre (au lieu de la même).';
  $lang_plugin_php['link_target_extra'] = 'Ce plugin à surtout un impact sur le lien "Powered by Coppermine" au bas de l\'écran de la galerie.';
  $lang_plugin_php['link_target_recommendation'] = 'Il n\'est pas recommandé d\'utilser ce plugin pour être directif avec vos visiteurs: ouvrir un lien dans une nouvelle fenêtre peut être directif pour vos visiteurs.';
}




?>