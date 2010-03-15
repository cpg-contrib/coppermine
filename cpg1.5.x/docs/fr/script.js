/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2010 Coppermine Dev Team
  v1.1 originaly written by Gregory DEMAR

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  as published by the Free Software Foundation.

  ********************************************
  Coppermine version: 1.5.3
  $HeadURL$
  $Revision$
  $LastChangedBy$
  $Date$
**********************************************/

var linebreak = '\n';

$(function() {
    $("#toc_overall").treeview({
        collapsed: true,
        animated: "medium",
        control:"#sidetreecontrol"
    });
    $(".cpg_zebra tr:even").addClass("tableb");
	$(".cpg_zebra tr:odd").addClass("tableb_alternate");
});

function cpgDocToc() {
  if (getUrlParameters('hide_nav') == 1) {
  	$('#toc').replaceWith('');
	return;
  }
var doc_toc = '';
doc_toc += '<div id="toc_collapsed">\n';
doc_toc += '<h6><a href="toc.htm">Table des matières</a></h6>\n';
doc_toc += 'Passez votre souris ici pour dérouler \n';
doc_toc += '<div align="center"><img src="../../images/icons/downdown.png" border="0" width="10" height="10" alt="" /></div>\n';
doc_toc += '</div>\n';
doc_toc += '<div id="toc_expanded" style="display:none;">\n';
doc_toc += '<h6>Table des matières (<a href="../index.htm">Sélection de la langue de la documentation</a>)</h6>\n';
doc_toc += '<ul id="tree">\n';
doc_toc += '  <li><a href="index.htm">Documentation de Coppermine</a>\n';
doc_toc += '    <ul>\n';
doc_toc += '      <li><a href="index.htm#about">A Propos de Coppermine</a></li>\n';
doc_toc += '      <li><a href="index.htm#about_documentation">A propos de cette Documentation</a>\n';
doc_toc += '        <ul>\n';
doc_toc += '          <li><a href="index.htm#about_documentation_conventions" >Conventions de la Documentation</a></li>\n';
doc_toc += '        </ul>\n';
doc_toc += '      </li>\n';
doc_toc += '      <li><a href="index.htm#features">Fonctions</a></li>\n';
doc_toc += '      <li><a href="quickstart.htm#about">Guide de Démarrage Rapide</a></li>\n';
doc_toc += '      <li><a href="toc.htm">Table des Matières</a></li>\n';
doc_toc += '      <li><a href="requirements.htm">Minimum requis</a>\n';
doc_toc += '        <ul id="minimum_requirements">\n';
doc_toc += '          <li><a href="requirements.htm#what_minimum">Minimum requis côté serveur</a>\n';
doc_toc += '            <ul id="minimum_requirements_server">\n';
doc_toc += '              <li><a href="requirements.htm#what_minimum_webserver">Serveur Web</a></li>\n';
doc_toc += '              <li><a href="requirements.htm#what_minimum_php">support PHP</a></li>\n';
doc_toc += '              <li><a href="requirements.htm#what_minimum_mysql">Base de donée mySQL</a></li>\n';
doc_toc += '              <li><a href="requirements.htm#what_minimum_image_library">Librairie graphique</a></li>\n';
doc_toc += '            </ul>\n';
doc_toc += '          </li>\n';
doc_toc += '          <li><a href="requirements.htm#what_minimum_self-hosting">Auto hébergement &amp; paramétrage du serveur web</a></li>\n';
doc_toc += '          <li><a href="requirements.htm#personal">Requis personnels</a></li>\n';
doc_toc += '          <li><a href="requirements.htm#requirements_faq">FAQ du minimum requis</a></li>\n';
doc_toc += '        </ul>\n';
doc_toc += '      </li>\n';
doc_toc += '      <li><a href="testing.htm">Test (Version alpha/beta !)</a>\n';
doc_toc += '        <ul>\n';
doc_toc += '          <li><a href="testing.htm#testing_support">Pas d\'aide pour les versions alpha et beta</a></li>\n';
doc_toc += '          <li><a href="testing.htm#testing_areas">Parties à regarder de manière particulièrement précise</a></li>\n';
doc_toc += '          <li><a href="testing.htm#testing_feature_list">Listedes fonctions</a></li>\n';
doc_toc += '          <li><a href="testing.htm#testing_report">Format des rapports</a></li>\n';
doc_toc += '          <li><a href="testing.htm#testing_availability">Disponibilité</a></li>\n';
doc_toc += '        </ul>\n';
doc_toc += '      </li>\n';
doc_toc += '      <li><a href="languages.htm">Langues</a>\n';
doc_toc += '        <ul id="languages">\n';
doc_toc += '          <li><a href="languages.htm#how">Comment les langues fonctionnent dans Coppermine</a></li>\n';
doc_toc += '          <li><a href="translation.htm">Guide de Traduction</a></li>\n';
doc_toc += '            <ul id="translation">\n';
doc_toc += '              <li><a href="translation.htm#translation_translators_wanted">Demande de traducteurs!</a></li>\n';
doc_toc += '              <li><a href="translation.htm#translation_why_translate">Pourquoi traduire?</a></li>\n';
doc_toc += '              <li><a href="translation.htm#translation_which_languages">Traduction demandées pour quels langues?</a></li>\n';
doc_toc += '              <li><a href="translation.htm#translation_who">Qui peut traduire?</a></li>\n';
doc_toc += '              <li><a href="translation.htm#translation_char_encoding">Encodage des caractères</a></li>\n';
doc_toc += '              <li><a href="translation.htm#translation_editors">Editeurs &amp; Outils</a></li>\n';
doc_toc += '              <li><a href="translation.htm#translation_full_translation">Traductions complètes uniquement</a></li>\n';
doc_toc += '              <li><a href="translation.htm#translation_step_by_step">Pas à pas</a></li>\n';
doc_toc += '              <li><a href="translation.htm#translation_special_issues">Problèmes particuliers</a></li>\n';
doc_toc += '              <li><a href="translation.htm#translation_versions">Version de la langue</a></li>\n';
doc_toc += '              <li><a href="translation.htm#translation_work_in_progress">Travail en cours</a></li>\n';
doc_toc += '              <li><a href="translation.htm#translation_initial_translation">Traduction initiale pour la publication</a></li>\n';
doc_toc += '              <li><a href="translation.htm#translation_older_language_files">Utilisation d\'anciens fichiers langue</a></li>\n';
doc_toc += '              <li><a href="translation.htm#translation_documentation">Traduction de la documentation</a></li>\n';
doc_toc += '            </ul>\n';
doc_toc += '          </li>\n';
doc_toc += '        </ul>\n';
doc_toc += '      </li>\n';
doc_toc += '      <li><a href="credits.htm">Credits</a>\n';
doc_toc += '        <ul>\n';
doc_toc += '          <li><a href="credits.htm#developers">L\'équipe de Coppermine</a></li>\n';
doc_toc += '          <li><a href="credits.htm#contributors">Contributeurs</a></li>\n';
doc_toc += '          <li><a href="credits.htm#translators">Traducteurs</a>\n';
doc_toc += '            <ul class="level3" id="translators">\n';
doc_toc += '              <li><a href="credits.htm#translators_language_file" >Language files</a></li>\n';
doc_toc += '              <li><a href="credits.htm#translators_documentation" >Documentation</a></li>\n';
doc_toc += '            </ul>\n';
doc_toc += '          </li>\n';
doc_toc += '          <li><a href="credits.htm#codebase">Codes libres utilisés</a></li>\n';
doc_toc += '          <li><a href="credits.htm#acknowledgements">Acknowledgements</a></li>\n';
doc_toc += '        </ul>\n';
doc_toc += '      </li>\n';
doc_toc += '      <li><a href="copyrights.htm">Licence &amp; Copyright</a>\n';
doc_toc += '      <ul>\n';
doc_toc += '          <li><a href="copyrights.htm#copyright_copyright">Copyrights</a></li>\n';
doc_toc += '          <li><a href="copyrights.htm#copyright_license">Licence</a></li>\n';
doc_toc += '          <li><a href="copyrights.htm#copyrights_previous_versions">Versions précédentes</a></li>\n';
doc_toc += '          <li><a href="copyrights.htm#copyright_additional">Termes Additionnels (ajouts à la licence)</a>\n';
doc_toc += '            <ul class="level3" id="additional_terms">\n';
doc_toc += '              <li><a href="copyrights.htm#copyright_additional_preservation">Preservation des droits d\'auteur</a></li>\n';
doc_toc += '              <li><a href="copyrights.htm#copyright_additional_marking">Marquages des versions modifiées</a></li>\n';
doc_toc += '            </ul>\n';
doc_toc += '          </li>\n';
doc_toc += '        </ul>\n';
doc_toc += '      </li>\n';
doc_toc += '      <li><a href="known_issues.htm">Problèmes connus</a></li>\n';
doc_toc += '    </ul>\n';
doc_toc += '  </li>\n';
doc_toc += '  <li><a href="install.htm">Installation et Configuration</a>\n';
doc_toc += '    <ul>\n';
doc_toc += '      <li><a href="install.htm#how">Comment installer le script</a></li>\n';
doc_toc += '      <li><a href="install.htm#what">Ce que fait l\'installeur</a></li>\n';
doc_toc += '      <li><a href="install_permissions.htm">Configurer les permissions</a>\n';
doc_toc += '        <ul>\n';
doc_toc += '          <li><a href="install_permissions.htm#chmod">Apache sur Unix/Linux (CHMOD)</a></li>\n';
doc_toc += '          <li><a href="install_permissions.htm#apache_windows">Apache sur Windows</a></li>\n';
doc_toc += '          <li><a href="install_permissions.htm#iis">IIS sur Windows</a></li>\n';
doc_toc += '          <li><a href="install_permissions.htm#support">Demander de l\'aide sur les problèmes liés aux permissions</a></li>\n';
doc_toc += '        </ul>\n';
doc_toc += '      </li>\n';
doc_toc += '      <li><a href="install_screen.htm">L\'écran d\'Installation</a>';
doc_toc += '        <ul>\n';
doc_toc += '          <li><a href="install_screen.htm#install_screen_classic">L\'installeur classique</a></li>\n';
doc_toc += '          <li><a href="install_screen.htm#install_screen_wizard">L\'assistant d\'installation</a></li>\n';
doc_toc += '        </ul>\n';
doc_toc += '      <li><a href="auto-installers.htm">Les Auto-Installeurs</a></li>\n';
doc_toc += '      <li><a href="install_faq.htm">FAQ d\'Installation</a></li>\n';
doc_toc += '      <li><a href="uninstall.htm">Désinstallation</a></li>\n';
doc_toc += '    </ul>\n';
doc_toc += '  </li>\n';
doc_toc += '  <li><a href="upgrading.htm">Mise à Jour</a>\n';
doc_toc += '    <ul>\n';
doc_toc += '      <li><a href="upgrading.htm#upgrade_why">Pourquoi mettre à jour?</a>\n';
doc_toc += '          <ul>\n';
doc_toc += '              <li><a href="upgrading.htm#upgrade_why_reasons">Raison de publication de mises à jour par package</a></li>\n';
doc_toc += '              <li><a href="upgrading.htm#upgrade_why_changelog">Changelog</a></li>\n';
doc_toc += '          </ul>\n';
doc_toc += '      </li>\n';
doc_toc += '      <li><a href="upgrading.htm#upgrade_any">Raison de publication de mises à jour par package</a></li>\n';
doc_toc += '      <li><a href="upgrading.htm#upgrade_particular">Etapes supplémentaires pour une mise à jour depuis une version particulière</a>\n';
doc_toc += '        <ul>\n';
doc_toc += '          <li><a href="upgrading.htm#upgrade_10">Mise à jour depuis les versions cpg1.0,1.1,1.2.x ou 1.3.x</a></li>\n';
doc_toc += '          <li><a href="upgrading.htm#upgrade_14">Mise à jour depuis cpg1.4.x vers cpg1.5.x</a></li>\n';
doc_toc += '        </ul>\n';
doc_toc += '      </li>\n';
doc_toc += '      <li><a href="upgrading.htm#updater">Le script de mise à jour</a>\n';
doc_toc += '          <ul class="level3" id="updater">\n';
doc_toc += '              <li><a href="upgrading.htm#updater_what_it_does">Ce qu\'il fait</a></li>\n';
doc_toc += '              <li><a href="upgrading.htm#updater_purpose">Objectif</a></li>\n';
doc_toc += '              <li><a href="upgrading.htm#updater_authorization">Vérification des autorisation</a></li>\n';
doc_toc += '              <li><a href="upgrading.htm#updater_when">Quand faut\'il lancer le script de mise à jour ?</a></li>\n';
doc_toc += '          </ul>\n';
doc_toc += '      </li>\n';
doc_toc += '      <li><a href="upgrading.htm#versioncheck">L\'outil de vérification de version</a>\n';
doc_toc += '        <ul>\n';
doc_toc += '          <li><a href="upgrading.htm#versioncheck_description_start">Ce qu\'il fait</a></li>\n';
doc_toc += '          <li><a href="upgrading.htm#versioncheck_options_start">Options</a></li>\n';
doc_toc += '          <li><a href="upgrading.htm#versioncheck_comparison_start">Comparaison de version</a></li>\n';
doc_toc += '        </ul>\n';
doc_toc += '      </li>\n';
doc_toc += '      <li><a href="upgrading.htm#upgrade_faq">FAQ de mise à Jour</a></li>\n';
doc_toc += '      <li><a href="upgrading.htm#downgrading">Retour de cpg1.5.x vers une version antérieurs</a></li>\n';
doc_toc += '    </ul>\n';
doc_toc += '  </li>\n';
doc_toc += '  <li><a href="start.htm">Démarage</a>\n';
doc_toc += '    <ul>\n';
doc_toc += '      <li><a href="start.htm#getting_concepts">Concepts de Base</a></li>\n';
doc_toc += '      <li><a href="start.htm#getting_initial_configuration">Configuration Initiale</a></li>\n';
doc_toc += '      <li><a href="start.htm#getting_structure">Structure des Categories/Albums/Fichiers</a></li>\n';
doc_toc += '      <li><a href="start.htm#getting_resizing">Images redimensionnées</a></li>\n';
doc_toc += '        <ul>\n';
doc_toc += '          <li><a href="start.htm#getting_resizing_thumbnails">Vignettes</a></li>\n';
doc_toc += '          <li><a href="start.htm#getting_resizing_intermediate">Images intermédiairess</a></li>\n';
doc_toc += '          <li><a href="start.htm#getting_resizing_original">Originales</a></li>\n';
doc_toc += '          <li><a href="start.htm#getting_resizing_recommended">Réglages recommendés pour le redimensionnement</a>\n';
doc_toc += '            <ul>\n';
doc_toc += '              <li><a href="start.htm#getting_resizing_recommended_nofullsize">pas d\'images grande taille dans une fenêtre pop up</a></li>\n';
doc_toc += '              <li><a href="start.htm#getting_resizing_recommended_nointermediate">Autoriser les images de grande taille en préservant le maximum d\'espace</a></li>\n';
doc_toc += '              <li><a href="start.htm#getting_resizing_recommended_regular">Réglages &quot;Standards&quot; avec utilisation modérée de l\espace</a></li>\n';
doc_toc += '            </ul>\n';
doc_toc += '          </li>\n';
doc_toc += '        </ul>\n';
doc_toc += '      </li>\n';
doc_toc += '      <li><a href="start.htm#getting_admin_account">Votre Compte Administrateur</a></li>\n';
doc_toc += '      <li><a href="start.htm#getting_check_uploads">Vérification des téléchargements</a></li>\n';
doc_toc += '      <li><a href="start.htm#getting_consider_bridging">Penser à l\'intégration</a></li>\n';
doc_toc += '      <li><a href="start.htm#getting_interaction">Qu\'est ce que vos visiteurs sont autorisés à faire ?</a></li>\n';
doc_toc += '      <li><a href="start.htm#getting_design">Changez l\'aspect de votre galerie Coppermine</a></li>\n';
doc_toc += '      <li><a href="start.htm#getting_typical">Réglages particuliers</a></li>\n';
doc_toc += '        <ul>\n';
doc_toc += '          <li><a href="start.htm#getting_typical_monolithic">Téléchargeur unique sans interaction d\'utilisateur (galerie monolithique)</a></li>\n';
doc_toc += '          <li><a href="start.htm#getting_typical_single_uploader_community">Téléchargeur unique avec Interaction des utilisateurs</a></li>\n';
doc_toc += '        </ul>\n';
doc_toc += '      </li>\n';
doc_toc += '    </ul>\n';
doc_toc += '  </li>\n';
doc_toc += '  <li><a href="faq.htm">FAQ (Questions fréquement posées)</a>\n';
doc_toc += '    <ul>\n';
doc_toc += '      <li><a href="faq.htm#faq_setup">réglages / Configuration</a></li>\n';
doc_toc += '      <li><a href="faq.htm#hacks">Ajouts / Modifications / Hacks</a></li>\n';
doc_toc += '      <li><a href="faq.htm#support_board">forum d\'aide de </a></li>\n';
doc_toc += '    </ul>\n';
doc_toc += '  </li>\n';
doc_toc += '  <li><a href="theme.htm"class="us_fr">Themes</a>\n';
doc_toc += '    <ul>\n';
doc_toc += '      <li><a href="theme.htm#theme_builtin">Themes livrés avec Coppermine</a></li>\n';
doc_toc += '      <li><a href="theme.htm#theme_upgrading"class="us_fr">Mise à jour de votre thème personnalisé</a>\n';
doc_toc += '      <ul>\n';
doc_toc += '        <li><a href="theme_upgrade_14x-15x.htm">Convertir un thème cpg1.4.x pour cpg1.5.x</a>\n';
doc_toc += '          <ul>\n';
doc_toc += '            <li><a href="theme_upgrade_14x-15x.htm#style">Modifier style.css</a></li>\n';
doc_toc += '            <li><a href="theme_upgrade_14x-15x.htm#template">Modifier template.html</a></li>\n';
doc_toc += '            <li><a href="theme_upgrade_14x-15x.htm#theme">Modifier theme.php</a></li>\n';
doc_toc += '            <li><a href="theme_upgrade_14x-15x.htm#validation">Méthode de Validation</a></li>\n';
doc_toc += '          </ul>\n';
doc_toc += '        </li>\n';
doc_toc += '        <li><a href="theme_upgrade_13x-14x.htm" class="en">Convertir un thème cpg1.3.x pour cpg1.4.x</a>\n';
doc_toc += '          <ul>\n';
doc_toc += '            <li><a href="theme_upgrade_13x-14x.htm#style"class="en">Modifier style.css</a></li>\n';
doc_toc += '            <li><a href="theme_upgrade_13x-14x.htm#template"class="en">Modifier template.html</a></li>\n';
doc_toc += '            <li><a href="theme_upgrade_13x-14x.htm#theme" class="en">Modifier theme.php</a></li>\n';
doc_toc += '            <li><a href="theme_upgrade_13x-14x.htm#validation" class="en">Méthode de Validation</a></li>\n';
doc_toc += '          </ul>\n';
doc_toc += '        </li>\n';
doc_toc += '      </ul>\n';
doc_toc += '      </li>\n';
doc_toc += '      <li><a href="theme.htm#theme_files">Contenu d\'un thème</a></li>\n';
doc_toc += '        <ul>\n';
doc_toc += '          <li><a href="theme_template.htm#theme_template_html">Modifier  template.html</a>\n';
doc_toc += '              <ul class="level3" id="theme_template_html">\n';
doc_toc += '                  <li><a href="theme_template.htm#theme_template_token">conteneurs (tokens) du thème</a></li>\n';
doc_toc += '                  <li><a href="theme_template.htm#theme_template_important" >Important</a></li>\n';
doc_toc += '                  <li><a href="theme_template.htm#theme_template_token_list">Liste des conteneurs (tokens) dans template.html</a></li>\n';
doc_toc += '              </ul>\n';
doc_toc += '          </li>\n';
doc_toc += '          <li><a href="theme_style_css.htm#theme_style_css">Modifier style.css</a>\n';
doc_toc += '            <ul>\n';
doc_toc += '              <li><a href="theme_style_css.htm#theme_style_css_tools">Outils</a>\n';
doc_toc += '              <li><a href="theme_style_css.htm#theme_style_css_list">Liste des classes dans style.css</a>\n';
doc_toc += '              <li><a href="theme_style_css.htm#theme_style_css_overall">Feuilles de style additionnelles</a>\n';
doc_toc += '            </ul>\n';
doc_toc += '          </li>\n';
doc_toc += '          <li><a href="theme_theme_php.htm#theme_create_theme_php">Modifier theme.php</a>\n';
doc_toc += '              <ul class="level3" id="theme_theme_php">\n';
doc_toc += '                  <li><a href="theme_theme_php.htm#theme_php_types">Type d\'éléments</a></li>\n';
doc_toc += '                  <li><a href="theme_theme_php.htm">Le thème sample - un thème pour copier/coller</a></li>\n';
doc_toc += '                  <li><a href="theme_theme_php.htm#theme_php_method">Méthode</a></li>\n';
doc_toc += '                  <li><a href="theme_theme_php.htm#theme_php_scope">Point de vue</a></li>\n';
doc_toc += '                  <li><a href="theme_theme_php.htm#theme_php_list">Liste des  items dans theme.php</a></li>\n';
doc_toc += '                  <li><a href="theme_examples.htm#theme_examples">Exemple de thèmes</a></li>\n';
doc_toc += '              </ul>\n';
doc_toc += '          </li>\n';
doc_toc += '        </ul>\n';
doc_toc += '      </li>\n'; 
doc_toc += '      <li><a href="theme.htm#theme_engine">Comment fonctionne le moteur de thèmes</a></li>\n';
doc_toc += '      <li><a href="theme_user-contributions.htm#theme_user-contributions">Thèmes: Contributions d\'utilisateurs</a>\n';
doc_toc += '        <ul>\n';
doc_toc += '          <li><a href="theme_user-contributions.htm#theme_user-contributions_preview">Visualisation de thèmes provenant de la contribution d\'utilisateurs</a></li>\n';
doc_toc += '          <li><a href="theme_user-contributions.htm#theme_user-contributions_download">Téléchargement de thèmes provenant de la contribution d\'utilisateurs</a></li>\n';
doc_toc += '          <li><a href="theme_user-contributions.htm#theme_user-contributions_install">Installation de thèmes provenant de la contribution d\'utilisateurs</a></li>\n';
doc_toc += '          <li><a href="theme_user-contributions.htm#theme_user-contributions_copyrights">Copyrights de thèmes provenant de la contribution d\'utilisateurs</a></li>\n';
doc_toc += '          <li><a href="theme_user-contributions.htm#theme_user-contributions_support">demande d\'aide pour les thèmes provenant de la contribution d\'utilisateurs</a></li>\n';
doc_toc += '          <li><a href="theme_user-contributions.htm#theme_user-contributions_contributing">Contribuer avec votre propre thème</a></li>\n';
doc_toc += '        </ul>\n';
doc_toc += '      </li>\n';
doc_toc += '      <li><a href="theme_create.htm#theme_create" class="en_fr">Créer votre thème personnalisé</a>\n';
doc_toc += '        <ul>\n';
doc_toc += '          <li><a href="theme_create.htm#theme_create_rename" >Commencez par renommer votre thème</a></li>\n';
doc_toc += '          <li><a href="theme_create.htm#theme_create_tipps">Trucs &amp; astuces</a></li>\n';
doc_toc += '          <li><a href="theme_create.htm#theme_create_wysiwyg">Utilisation d\'éditeurs WYSIWYG</a></li>\n';
doc_toc += '          <li><a href="theme_create.htm#theme_create_colors">Changer le couleurs</a></li>\n';
doc_toc += '          <li><a href="theme_create_matching_page_tutorial.htm#theme_matching">Créer un thème pour Coppermine qui reprend l\'aspect général de votre site</a></li>\n';
doc_toc += '        </ul>\n';
doc_toc += '      </li>\n';
doc_toc += '      <li><a href="theme_copyright.htm">Copyright-clause de non responsabilité dans le pied de page</a>\n';
doc_toc += '        <ul>\n';
doc_toc += '          <li><a href="theme_copyright.htm#theme_copyright_fair_use">Utilisation acceptable</a>\n';
doc_toc += '          <li><a href="theme_copyright.htm#theme_copyright_unfair_use">Utilisation innacceptable</a>\n';
doc_toc += '        </ul>\n';
doc_toc += '      </li>\n';
doc_toc += '      <li><a href="php-content.htm" >Contenu Dynamique (piloté par PHP) </a>\n';
doc_toc += '        <ul>\n';
doc_toc += '          <li><a href="php-content.htm#php-content_anycontent" >Utiliser anycontent.php</a></li>\n';
doc_toc += '          <li><a href="php-content.htm#php-content_header_footer">Haut de page et pied de page personnalisés</a></li>\n';
doc_toc += '          <li><a href="php-content.htm#php-content_theme">Contenu dynamique basé sur le thème (theme.php)</a></li>\n';
doc_toc += '          <li><a href="php-content.htm#php-content_core">Modifier les fichiers du noyau</a></li>\n';
doc_toc += '        </ul>\n';
doc_toc += '      </li>\n';
doc_toc += '      <li><a href="theme_graphics.htm">Ressources fraphiques dans les thèmes</a>\n';
doc_toc += '          <ul class="level3" id="theme_graphics">\n';
doc_toc += '              <li><a href="theme_graphics.htm#theme_graphics_menu_icons">Icones de Menu</a></li>\n';
doc_toc += '              <li><a href="theme_graphics.htm#theme_graphics_nav_bar">Images de la barre de navigation</a></li>\n';
doc_toc += '              <li><a href="theme_graphics.htm#theme_graphics_rating">Images de Notation</a></li>\n';
doc_toc += '              <li><a href="theme_graphics.htm#theme_graphics_film_strip">Images du Négatif de film</a></li>\n';
doc_toc += '          </ul>\n';
doc_toc += '      </li>\n';
doc_toc += '    </ul>\n';
doc_toc += '  </li>\n';
doc_toc += '  <li><a href="administration.htm" class="us_fr">Administration</a>\n';
doc_toc += '    <ul>\n';
doc_toc += '      <li><a href="admin_menu.htm">Eléments du menu Administrateur</a>\n';
doc_toc += '        <ul>\n';
doc_toc += '          <li><a href="admin_menu.htm#admin_user_mode">Activer/Désactiver les contôles administrateurs</a></li>\n';
doc_toc += '          <li><a href="admin_menu.htm#upload_approval">Fichiers à valider</a></li>\n';
doc_toc += '          <li><a href="admin_menu.htm#config">Configuration</a></li>\n';
doc_toc += '          <li><a href="admin_menu.htm#categories">Categories</a></li>\n';
doc_toc += '          <li><a href="admin_menu.htm#albums">Albums</a></li>\n';
doc_toc += '          <li><a href="admin_menu.htm#sort_my_pictures">Tri des images</a></li>\n';
doc_toc += '          <li><a href="admin_menu.htm#groups" >Groupes</a></li>\n';
doc_toc += '          <li><a href="admin_menu.htm#users" >Utilisateurs</a></li>\n';
doc_toc += '          <li><a href="admin_menu.htm#ban">Bannir des Utilisateurs</a></li>\n';
doc_toc += '          <li><a href="admin_menu.htm#my_profile">Mon profil</a></li>\n';
doc_toc += '          <li><a href="admin_menu.htm#review_comments" >Voir les Commentaires</a></li>\n';
doc_toc += '          <li><a href="admin_menu.htm#ecard_log" >Afficher les eCartes</a></li>\n';
doc_toc += '          <li><a href="admin_menu.htm#batch_add">Ajout d\'images par lot (FTP)</a></li>\n';
doc_toc += '          <li><a href="admin_menu.htm#admin_tools">Outils administrateur (Redimmensionnement des images)</a></li>\n';
doc_toc += '          <li><a href="admin_menu.htm#keyword_manager">Gestionnaire de mots clé</a></li>\n';
doc_toc += '          <li><a href="admin_menu.htm#plugin_manager">Gestionnaire de plugins</a></li>\n';
doc_toc += '          <li><a href="admin_menu.htm#bridge_manager">Gestionnaire de Bridge</a></li>\n';
doc_toc += '          <li><a href="admin_menu.htm#view_log">Voir les Logs</a></li>\n';
doc_toc += '          <li><a href="admin_menu.htm#"Statistiques générales</a></li>\n';
doc_toc += '          <li><a href="admin_menu.htm#stats"></a></li>\n';
doc_toc += '          <li><a href="admin_menu.htm#versioncheck">Vérificateur de version</a></li>\n';
doc_toc += '          <li><a href="admin_menu.htm#update_database">Mise à jour de la base de donnée</a></li>\n';
doc_toc += '          <li><a href="admin_menu.htm#export" >Export</a></li>\n';
doc_toc += '          <li><a href="admin_menu.htm#phpinfo">phpinfo</a></li>\n';
doc_toc += '          <li><a href="admin_menu.htm#show_news">Montrer les news</a></li>\n';
doc_toc += '          <li><a href="admin_menu.htm#documentation">Documentation</a></li>\n';
doc_toc += '          <li><a href="admin_menu.htm#">Mode administrateur pour les utilisateurs normaux</a></li>\n';
doc_toc += '          <li><a href="admin_menu.htm#admin_mode_regular_users" </a></li>\n';
doc_toc += '          <li><a href="admin_menu.htm#user_menu_items">Eléments de menu administrateur pour les utilisateurs normaux</a></li>\n';
doc_toc += '        </ul>\n';
doc_toc += '      </li>\n';
doc_toc += '      <li><a href="banning.htm#banning">Bannissement</a>\n';
doc_toc += '        <ul>\n';
doc_toc += '      <li><a href="banning.htm#banning_whats_new">Quoi de neuf ?</a></li>\n';
doc_toc += '      <li><a href="banning.htm#banning_scope">Point de Vue</a></li>\n';
doc_toc += '      <li><a href="banning.htm#bannig_how_it_works">Comment fonctionne le bannissement</a></li>\n';
doc_toc += '      <li><a href="banning.htm#banning_by_ip_address_no_good">Pourquoi le bannissement par adresse IP n\'est pas recommandé</a></li>\n';
doc_toc += '      <li><a href="banning.htm#banning_page">Controles de la Page</a></li>\n';
doc_toc += '      <li><a href="banning.htm#banning_bridged">Pas de bannissement si il y a un bridge</a></li>\n';
doc_toc += '      <li><a href="banning.htm#banning_todo">A Faire</a></li>\n';
doc_toc += '        </ul>\n';
doc_toc += '      </li>\n';
doc_toc += '      <li><a href="configuration.htm">Configuration</a>\n';
doc_toc += '        <ul>\n';
doc_toc += '          <li><a href="configuration.htm#admin_general">Paramètres généraux</a></li>\n';
doc_toc += '          <li><a href="configuration.htm#admin_language">Paramètres de Langue &amp; de Jeu de Caractères</a></li>\n';
doc_toc += '          <li><a href="configuration.htm#admin_theme">Paramètres des Thèmes</a></li>\n';
doc_toc += '          <li><a href="configuration.htm#admin_album_list">Affichage de la liste des Albums </a></li>\n';
doc_toc += '          <li><a href="configuration.htm#admin_thumbnail_view">Affichage des vignettes</a></li>\n';
doc_toc += '          <li><a href="configuration.htm#admin_image_comment">Affichage des Images</a></li>\n';
doc_toc += '          <li><a href="configuration.htm#admin_comment_start">Paramètres des Commentaires</a></li>\n';
doc_toc += '          <li><a href="configuration.htm#admin_contact_start">Paramètres du formulaire de Contacts</a></li>\n';
doc_toc += '          <li><a href="configuration.htm#admin_thumb_start">Paramètres des vignettes </a></li>\n';
doc_toc += '          <li><a href="configuration.htm#admin_picture_thumbnail">Paramètres des Fichiers</a></li>\n';
doc_toc += '          <li><a href="configuration.htm#admin_watermarking">Filigrane d\'Images </a></li>\n';
doc_toc += '          <li><a href="configuration.htm#admin_registration">Enregistrement </a></li>\n';
doc_toc += '          <li><a href="configuration.htm#admin_user">Paramètres des Utilisateurs </a></li>\n';
doc_toc += '          <li><a href="configuration.htm#admin_custom" >Champs personnalisés pour le profil utilisateur</a></li>\n';
doc_toc += '          <li><a href="configuration.htm#admin_custom_image">Champs personnalisés pour la description d\'images</a></li>\n';
doc_toc += '          <li><a href="configuration.htm#admin_cookie" >Paramètres du Cookie</a></li>\n';
doc_toc += '          <li><a href="configuration.htm#admin_email" >Paramètres des courriels</a></li>\n';
doc_toc += '          <li><a href="configuration.htm#admin_logging">Logging et statistiques </a></li>\n';
doc_toc += '          <li><a href="configuration.htm#admin_misc">Paramètres de maintenance </a></li>\n';
doc_toc += '        </ul>\n';
doc_toc += '      </li>\n';
doc_toc += '      <li><a href="groups.htm" class="en">Groups</a>\n';
doc_toc += '        <ul>\n';
doc_toc += '          <li><a href="groups.htm#group_cp" class="en">The group control panel</a></li>\n';
doc_toc += '          <li><a href="groups.htm#group_cp_names" class="en">Group names</a></li>\n';
doc_toc += '          <li><a href="groups.htm#group_cp_types" class="en">Group types</a></li>\n';
doc_toc += '          <li><a href="groups.htm#group_cp_quota" class="en">Quota</a></li>\n';
doc_toc += '          <li><a href="groups.htm#group_cp_permissions" class="en">Group permissions (Rating/Ecards/Comments)</a></li>\n';
doc_toc += '          <li><a href="groups.htm#group_cp_public" class="en">Public albums upload</a></li>\n';
doc_toc += '          <li><a href="groups.htm#group_cp_personal" class="en">Personal gallery</a></li>\n';
doc_toc += '          <li><a href="groups.htm#group_cp_upload_method" class="en">Upload method</a></li>\n';
doc_toc += '          <li><a href="groups.htm#group_cp_assigned" class="en">Assigned albums</a></li>\n';
doc_toc += '          <li><a href="groups.htm#group_cp_create" class="en">Creating custom groups</a></li>\n';
doc_toc += '          <li><a href="groups.htm#group_cp_delete">Deleting custom groups</a></li>\n';
doc_toc += '          <li><a href="groups.htm#group_cp_sync" class="en">Triggering synchronisation (bridged only)</a></li>\n';
doc_toc += '        </ul>\n';
doc_toc += '      </li>\n';
doc_toc += '      <li><a href="users.htm" class="en">Users</a>\n';
doc_toc += '        <ul>\n';
doc_toc += '          <li><a href="users.htm#user_cp" class="en">The user control panel</a>\n';
doc_toc += '            <ul>\n';
doc_toc += '              <li><a href="users.htm#user_cp_page" class="en">Page controls</a></li>\n';
doc_toc += '              <li><a href="users.htm#user_cp_search" class="en">Searching for user(s)</a></li>\n';
doc_toc += '              <li><a href="users.htm#user_cp_new" class="en">Creating new users</a></li>\n';
doc_toc += '              <li><a href="users.htm#user_cp_edit" class="en">Editing users</a></li>\n';
doc_toc += '              <li><a href="users.htm#user_cp_group" class="en">Group membership</a></li>\n';
doc_toc += '            </ul>\n';
doc_toc += '          </li>\n';
doc_toc += '          <li><a href="users.htm#lost_password" class="en">Lost passwords</a>\n';
doc_toc += '            <ul>\n';
doc_toc += '              <li><a href="users.htm#lost_password_cpg_user_account" class="en">Coppermine user account password</a>\n';
doc_toc += '                <ul>\n';
doc_toc += '                  <li><a href="users.htm#lost_password_cpg_user_account_standalone" class="en">Coppermine in standalone mode</a></li>\n';
doc_toc += '                  <li><a href="users.htm#lost_password_cpg_user_account_bridged" class="en">Coppermine bridged</a></li>\n';
doc_toc += '                </ul>\n';
doc_toc += '              </li>\n';
doc_toc += '              <li><a href="users.htm#lost_password_cpg_user_account" class="en">mySQL account password</a></li>\n';
doc_toc += '            </ul>\n';
doc_toc += '          </li>\n';
doc_toc += '      <li><a href="categories.htm" class="en">Categories</a>\n';
doc_toc += '        <ul>\n';
doc_toc += '          <li><a href="categories.htm#cat_cp" class="en">The categories control panel</a>\n';
doc_toc += '            <ul>\n';
doc_toc += '              <li><a href="categories.htm#cat_cp_page_controls" class="en">Page controls</a>\n';
doc_toc += '                <ul>\n';
doc_toc += '                  <li><a href="categories.htm#cat_cp_page_controls_sort" class="en">Top box &quot;Sort categories alphabetically&quot;</a></li>\n';
doc_toc += '                  <li><a href="categories.htm#cat_cp_page_controls_categories" class="en">Middle box &quot;Manage Categories&quot;</a></li>\n';
doc_toc += '                  <li><a href="categories.htm#cat_cp_page_controls_create" class="en">Bottom box &quot;Update/Create category&quot;</a></li>\n';
doc_toc += '                </ul>\n';
doc_toc += '              </li>\n';
doc_toc += '            </ul>\n';
doc_toc += '          </li>\n';
doc_toc += '          <li><a href="categories.htm#cat_user_galleries" class="en">Special category &quot;User galleries&quot;</a></li>\n';
doc_toc += '        </ul>\n';
doc_toc += '      </li>\n';
doc_toc += '      <li><a href="albums.htm" class="en">Albums</a>\n';
doc_toc += '        <ul>\n';
doc_toc += '          <li><a href="albums.htm#albmgr" class="en">The Album Manager</a>\n';
doc_toc += '            <ul>\n';
doc_toc += '              <li><a href="albums.htm#albmgr_create" class="en">Creating albums</a></li>\n';
doc_toc += '              <li><a href="albums.htm#albmgr_rename" class="en">Renaming albums</a></li>\n';
doc_toc += '              <li><a href="albums.htm#albmgr_order" class="en">Changing the album order</a></li>\n';
doc_toc += '              <li><a href="albums.htm#albmgr_delete" class="en">Deleting albums</a></li>\n';
doc_toc += '            </ul>\n';
doc_toc += '          </li>\n';
doc_toc += '          <li><a href="albums.htm#modif_alb_pics" class="en">Modifying albums/files</a></li>\n';
doc_toc += '          <li><a href="albums.htm#album_prop" class="en">Album properties</a>\n';
doc_toc += '            <ul>\n';
doc_toc += '              <li><a href="albums.htm#album_prop_reset_start" class="en">Reset album properties</a></li>\n';
doc_toc += '            </ul>\n';
doc_toc += '          </li>\n';
doc_toc += '          <li><a href="albums.htm#album_admin_user" class="en">Admin vs. user</a></li>\n';
doc_toc += '          <li><a href="albums.htm#album_faq" class="en">Album FAQ</a></li>\n';
doc_toc += '        </ul>\n';
doc_toc += '      </li>\n';
doc_toc += '      <li><a href="files.htm" class="en">Files</a>\n';
doc_toc += '        <ul>\n';
doc_toc += '          <li><a href="files.htm#edit_pics" class="en">Editing files</a></li>\n';
doc_toc += '          <li><a href="files.htm#edit_vids" class="en">Editing videos</a></li>\n';
doc_toc += '          <li><a href="files.htm#cust_thmb" class="en">Custom Thumbnails</a></li>\n';
doc_toc += '        </ul>\n';
doc_toc += '      </li>\n';
doc_toc += '      <li><a href="keywords.htm" class="en">Keywords</a>\n';
doc_toc += '        <ul>\n';
doc_toc += '          <li><a href="keywords.htm#keywords_assign" class="en">Assigning keywords</a></li>\n';
doc_toc += '          <li><a href="keywords.htm#keywords_assign_upload" class="en">Assigning keywords when uploading</a></li>\n';
doc_toc += '          <li><a href="keywords.htm#keywords_assign_edit" class="en">Editing/adding keywords</a></li>\n';
doc_toc += '          <li><a href="keywords.htm#keywords_manager" class="en">Keywords manager</a></li>\n';
doc_toc += '          <li><a href="keywords.htm#keywords_album" class="en">Album keywords</a></li>\n';
doc_toc += '        </ul>\n';
doc_toc += '      </li>\n';
doc_toc += '      <li><a href="bbcode.htm" class="en">BBCODE</a></li>\n';
doc_toc += '      <li><a href="exif.htm" class="en">EXIF data</a></li>\n';
doc_toc += '      <li><a href="plugins.htm" class="en">Plugins</a>\n';
doc_toc += '        <ul>\n';
doc_toc += '          <li><a href="plugins.htm#plugin_definition" class="en">What is a plugin?</a></li>\n';
doc_toc += '          <li><a href="plugins.htm#plugin_api" class="en">The Plugin API</a></li>\n';
doc_toc += '          <li><a href="plugins.htm#plugin_obtain" class="en">Where to get Plugins from?</a></li>\n';
doc_toc += '          <li><a href="plugins.htm#plugin_bundled" class="en">Plugins that ship with Coppermine</a></li>\n';
doc_toc += '          <li><a href="plugins.htm#plugin_manager" class="en">The Plugin Manager</a>\n';
doc_toc += '            <ul>\n';
doc_toc += '              <li><a href="plugins.htm#plugin_manager_upload" class="en">Uploading a plugin</a></li>\n';
doc_toc += '              <li><a href="plugins.htm#plugin_manager_install" class="en">Installing a plugin</a></li>\n';
doc_toc += '              <li><a href="plugins.htm#plugin_manager_configuration" class="en">Plugin Configuration</a></li>\n';
doc_toc += '              <li><a href="plugins.htm#plugin_manager_uninstall" class="en">Uninstalling a plugin</a></li>\n';
doc_toc += '            </ul>\n';
doc_toc += '          </li>\n';
doc_toc += '          <li><a href="plugins.htm#plugin_writing" class="en">Writing plugins</a></li>\n';
doc_toc += '        </ul>\n';
doc_toc += '      </li>\n';
doc_toc += '      <li><a href="performance.htm#perf_tips" class="en">Performance</a></li>\n';
doc_toc += '      <li><a href="admin-tools.htm#admin_tools" class="en">Admin Tools</a></li>\n';
doc_toc += '      <li><a href="errors.htm#errors" class="en">Errors</a></li>\n';
doc_toc += '      <li><a href="export.htm#backup_export" class="en">Backup</a>\n';
doc_toc += '        <ul>\n';
doc_toc += '          <li><a href="export.htm#backup_file" class="en">File Backup</a>\n';
doc_toc += '            <ul>\n';
doc_toc += '              <li><a href="export.htm#backup_file_complete" class="en">Complete File Backup</a></li>\n';
doc_toc += '              <li><a href="export.htm#backup_file_partial" class="en">Partial File Backup</a></li>\n';
doc_toc += '              <li><a href="export.htm#backup_file_incremental" class="en">Incremental File Backup</a></li>\n';
doc_toc += '            </ul>\n';
doc_toc += '          </li>\n';
doc_toc += '          <li><a href="export.htm#backup_database" class="en">Database Backup</a>\n';
doc_toc += '            <ul>\n';
doc_toc += '              <li><a href="export.htm#backup_database_what" class="en">What needs to be backed up?</a></li>\n';
doc_toc += '              <li><a href="export.htm#backup_database_tools" class="en">Database Backup Tools</a>\n';
doc_toc += '                <ul>\n';
doc_toc += '                  <li><a href="export.htm#backup_database_tools_phpmyadmin" class="en">phpMyAdmin</a></li>\n';
doc_toc += '                  <li><a href="export.htm#backup_database_tools_mysqldumper" class="en">mySqlDumper</a></li>\n';
doc_toc += '                  <li><a href="export.htm#backup_database_tools_shell_mysqldump" class="en">mysqldump</a></li>\n';
doc_toc += '                  <li><a href="export.htm#backup_database_tools_shell_mysqlhotcopy" class="en">mysqlhotcopy</a></li>\n';
doc_toc += '                </ul>\n';
doc_toc += '              </li>\n';
doc_toc += '              <li><a href="export.htm#backup_database_after" class="en">After the database backup</a></li>\n';
doc_toc += '            </ul>\n';
doc_toc += '          </li>\n';
doc_toc += '          <li><a href="export.htm#moving" class="en">Moving your gallery</a>\n';
doc_toc += '            <ul>\n';
doc_toc += '              <li><a href="export.htm#moving_folder" class="en">Moving on your webserver</a></li>\n';
doc_toc += '              <li><a href="export.htm#moving_server" class="en">Moving from one webserver to the other</a></li>\n';
doc_toc += '              <li><a href="export.htm#moving_disadvantages" class="en">Disadvantages of renaming</a></li>\n';
doc_toc += '              <li><a href="export.htm#moving_config_url" class="en">Changing Coppermine\'s URL in config</a></li>\n';
doc_toc += '            </ul>\n';
doc_toc += '          </li>\n';
doc_toc += '        </ul>\n';
doc_toc += '      </li>\n';
doc_toc += '      <li><a href="watermarking.htm#watermark" class="en">Watermarking</a></li>\n';
doc_toc += '    </ul>\n';
doc_toc += '  </li>\n';
doc_toc += '  <li><a href="uploading.htm" class="us_fr">Téléchargement</a>\n';
doc_toc += '    <ul>\n';
doc_toc += '      <li><a href="uploading_batch-add.htm#batch_add_pics">Téléchargement des images par FTP / Ajout les images par lot</a></li>\n';
doc_toc += '      <li><a href="uploading_http.htm#upload_http">Téléchargement par HTTP</a></li>\n';
doc_toc += '      <li><a href="uploading_xp-publisher.htm#xp" class="en">Windows XP Web Publishing Wizard</a>\n';
doc_toc += '        <ul>\n';
doc_toc += '          <li><a href="uploading_xp-publisher.htm#xp_publish_setup" class="en">XP Web Publishing Wizard: Setup</a></li>\n';
doc_toc += '          <li><a href="uploading_xp-publisher.htm#xp_publish_upload" class="en">XP Web Publishing Wizard: Uploading pictures</a></li>\n';
doc_toc += '        </ul>\n';
doc_toc += '      </li>\n';
doc_toc += '      <li><a href="upload_troubleshooting.htm#upload_trouble">Dépannage du téléchargement</a>\n';
doc_toc += '         <ul>\n';
doc_toc += '           <li><a href="upload_troubleshooting.htm#upload_trouble_permission">Droits</a></li>\n';
doc_toc += '           <li><a href="upload_troubleshooting.htm#upload_trouble_enable_settings">Activer les paramètres de dépannage</a></li>\n';
doc_toc += '           <li><a href="upload_troubleshooting.htm#upload_support">Demander de l\'aide pour des problèmes de téléchargement</a></li>\n';
doc_toc += '           <li><a href="upload_troubleshooting.htm#upload_error_messages" >Messages d\'erreur</a></li>\n';
doc_toc += '           <li><a href="upload_troubleshooting.htm#upload_trouble_server-sided_restrictions">Restrictions côté serveur</a>\n';
doc_toc += '             <ul>\n';
doc_toc += '               <li><a href="upload_troubleshooting.htm#upload_trouble_server-sided_restrictions_check" >Les choses à vérifier</a></li>\n';
doc_toc += '               <li><a href="upload_troubleshooting.htm#upload_trouble_methods">Mécanismes/méthodes de téléchargement</a></li>\n';
doc_toc += '               <li><a href="upload_troubleshooting.htm#upload_trouble_memory_usage">Utilisation de la mémoire pendant le redimensionnement</a></li>\n';
doc_toc += '             </ul>\n';
doc_toc += '           </li>\n';
doc_toc += '         </ul>\n';
doc_toc += '      </li>\n';
doc_toc += '    </ul>\n';
doc_toc += '  </li>\n';
doc_toc += '  <li><a href="comments.htm" class="en">Comments</a>\n';
doc_toc += '    <ul>\n';
doc_toc += '      <li><a href="comments.htm#comments_allow" class="en">Allowing comments</a></li>\n';
doc_toc += '      <li><a href="comments.htm#comments_options" class="en">Comments options</a></li>\n';
doc_toc += '      <li><a href="comments.htm#comments_options_spam" class="en">Spam issues</a></li>\n';
doc_toc += '      <li><a href="comments.htm#comments_review" class="en">Reviewing Comments</a></li>\n';
doc_toc += '      <li><a href="comments.htm#comments_individual" class="en">Individual Comments</a></li>\n';
doc_toc += '    </ul>\n';
doc_toc += '  </li>\n';
doc_toc += '  <li><a href="bridging.htm" class="en">Bridging</a>\n';
doc_toc += '    <ul>\n';
doc_toc += '      <li><a href="bridging.htm#integrating_bridge_purpose" class="en">What bridging does</a></li>\n';
doc_toc += '      <li><a href="bridging.htm#integrating_bridge_start" class="en">Available bridge files</a></li>\n';
doc_toc += '      <li><a href="bridging.htm#integrating_prerequisites_start" class="en">Pre-requistes</a>\n';
doc_toc += '        <ul>\n';
doc_toc += '          <li><a href="bridging.htm#integrating_cookie_start" class="en">Authentication by cookie</a></li>\n';
doc_toc += '          <li><a href="bridging.htm#integrating_standalone_start" class="en">Standalone version first</a></li>\n';
doc_toc += '          <li><a href="bridging.htm#integrating_users_start" class="en">Coppermine users, groups and pics uploaded by users are lost when integrating</a></li>\n';
doc_toc += '          <li><a href="bridging.htm#integrating_backup_start" class="en">Backup</a></li>\n';
doc_toc += '        </ul>\n';
doc_toc += '      </li>\n';
doc_toc += '      <li><a href="bridging.htm#integrating_steps_start" class="en">Integration steps</a>\n';
doc_toc += '        <ul>\n';
doc_toc += '          <li><a href="bridging.htm#bridge_manager_start" class="en">Using the bridge manager</a></li>\n';
doc_toc += '          <li><a href="bridging.htm#bridge_manager_app_start" class="en">Choose application to bridge coppermine with</a></li>\n';
doc_toc += '          <li><a href="bridging.htm#bridge_manager_path_start" class="en">Path(s) used by your bridge app</a></li>\n';
doc_toc += '          <li><a href="bridging.htm#bridge_manager_specific_start" class="en">Bridge-app-specific settings</a></li>\n';
doc_toc += '          <li><a href="bridging.htm#bridge_manager_enable_start" class="en">Enable/disable bridging</a></li>\n';
doc_toc += '        </ul>\n';
doc_toc += '      </li>\n';
doc_toc += '      <li><a href="bridging.htm#bridge_manager_recover_start" class="en">Recover from failed bridging</a></li>\n';
doc_toc += '      <li><a href="bridging.htm#integrating_steps_sync_start" class="en">Synchronising the bridge app groups with Coppermine\'s groups</a></li>\n';
doc_toc += '      <li><a href="bridging.htm#integrating_support_start" class="en">Bridging support</a></li>\n';
doc_toc += '      <li><a href="bridging.htm#integrating_config_options_start" class="en">Some config options get disabled</a></li>\n';
doc_toc += '      <li><a href="bridging.htm#integrating_files_start" class="en">Bridging files</a></li>\n';
doc_toc += '      <li><a href="bridging.htm#integrating_bridge_file_creating_start" class="en">Creating a custom bridge file</a></li>\n';
doc_toc += '      <li><a href="bridging.htm#integrating_philosophy_start" class="en">Bridging philosophy</a></li>\n';
doc_toc += '      <li><a href="bridging.htm#integrating_individual_bridge_issues_start" class="en">Individual bridge issues</a></li>\n';
doc_toc += '      <li><a href="bridging.htm#integrating_subdomain" class="en">Subdomain issues</a></li>\n';
doc_toc += '    </ul>\n';
doc_toc += '  </li>\n';
doc_toc += '  <li><a href="dev.htm" class="en">Developer documentation</a>\n';
doc_toc += '    <ul>\n';
doc_toc += '      <li><a href="dev_coding.htm" class="en">Coding guidelines</a></li>\n';
doc_toc += '      <li><a href="dev_files.htm" class="en">Adding/renaming/removing files</a></li>\n';
doc_toc += '      <li><a href="dev_superglobals.htm" class="en">Sanitization of Superglobals using Inspekt</a></li>\n';
doc_toc += '      <li><a href="dev_javascript.htm" class="en">Javascript in Coppermine</a></li>\n';
doc_toc += '      <li><a href="dev_plugins.htm" class="en">Plugin Writing for Coppermine</a>\n';
doc_toc += '        <ul>\n';
doc_toc += '          <li><a href="dev_plugin_api.htm" class="en">Plugins tutorial, API description</a>\n';
doc_toc += '            <ul>\n';
doc_toc += '              <li><a href="dev_plugin_api.htm#plugin_api_overview" class="en">An Overview of the Coppermine Plugin API</a>\n';
doc_toc += '                <ul class="level5">\n';
doc_toc += '                    <li><a href="dev_plugin_api.htm#plugin_api_overview_intro" class="en">Introduction</a></li>\n';
doc_toc += '                    <li><a href="dev_plugin_api.htm#plugin_api_overview_who" class="en">Intended Audience</a></li>\n';
doc_toc += '                    <li><a href="dev_plugin_api.htm#plugin_api_overview_skills" class="en">Required Skills &amp; Knowledge</a></li>\n';
doc_toc += '                    <li><a href="dev_plugin_api.htm#plugin_api_overview_tools" class="en">Recommended Software &amp; Support Forums</a></li>\n';
doc_toc += '                    <li><a href="dev_plugin_api.htm#plugin_api_overview_doc" class="en">Structure of this Document</a></li>\n';
doc_toc += '                </ul>\n';
doc_toc += '              </li>\n';
doc_toc += '              <li><a href="dev_plugin_api.htm#plugin_api_tutorial" class="en">"Hello, world" Plugin Tutorial</a>\n';
doc_toc += '                <ul class="level5">\n';
doc_toc += '                  <li><a href="dev_plugin_api.htm#plugin_api_tutorial_first" class="en">My First Plugin</a></li>\n';
doc_toc += '                  <li><a href="dev_plugin_api.htm#plugin_api_tutorial_installconfig" class="en">Installation, Configuration, and Clean-Up</a>\n';
doc_toc += '                    <ul class="level5">\n';
doc_toc += '                      <li><a href="dev_plugin_api.htm#plugin_api_tutorial_installsimple" class="en">Installation with Simple Configuration</a></li>\n';
doc_toc += '                      <li><a href="dev_plugin_api.htm#plugin_api_tutorial_install" class="en">Installation with Configuration Parameters</a></li>\n';
doc_toc += '                      <li><a href="dev_plugin_api.htm#plugin_api_tutorial_config" class="en">Configuration during Operation</a></li>\n';
doc_toc += '                      <li><a href="dev_plugin_api.htm#plugin_api_tutorial_cleanup" class="en">Uninstallation &amp; Clean-Up</a></li>\n';
doc_toc += '                    </ul>\n';
doc_toc += '                  </li>  \n';
doc_toc += '                  <li><a href="dev_plugin_api.htm#plugin_api_tutorial_linking" class="en">Linking to Custom Plugin Scripts</a></li>\n';
doc_toc += '                  <li><a href="dev_plugin_api.htm#plugin_api_tutorial_button" class="en">Adding a Button to Coppermine</a></li>\n';
doc_toc += '                  <li><a href="dev_plugin_api.htm#plugin_api_tutorial_lang" class="en">Multi-language Support</a></li>\n';
doc_toc += '                  <li><a href="dev_plugin_api.htm#plugin_api_tutorial_js" class="en">Adding JavaScript to plugins</a></li>\n';
doc_toc += '                  <li><a href="dev_plugin_api.htm#plugin_api_tutorial_distrib" class="en">Distributing Your Plugin</a></li>\n';
doc_toc += '                  <li><a href="dev_plugin_api.htm#plugin_api_tutorial_wherenext" class="en">Where to Go from Here</a></li>\n';
doc_toc += '                </ul>\n';
doc_toc += '              </li>\n';
doc_toc += '              <li><a href="dev_plugin_api.htm#plugin_api_hooks" class="en">Plugin Hooks</a></li>\n';
doc_toc += '              <li><a href="dev_plugin_api.htm#plugin_api_plugin_class" class="en">Plugin Class Properties &amp; Methods</a></li>\n';
doc_toc += '              <li><a href="dev_plugin_api.htm#plugin_api_globals" class="en">Global Variables &amp; Constants</a></li>\n';
doc_toc += '            </ul>\n';
doc_toc += '          </li>\n';
doc_toc += '          <li><a href="dev_plugin_hooks.htm" class="en">Reference list of plugin hooks </a>\n';
doc_toc += '            <ul class="level5">\n';
doc_toc += '              <li><a href="dev_plugin_hooks.htm#plugin_hooks_choosing" class="en">Choosing Plugin Hooks</a></li>\n';
doc_toc += '              <li><a href="dev_plugin_hooks.htm#plugin_hooks_finding" class="en">Finding Plugin Hooks</a></li>\n';
doc_toc += '              <li><a href="dev_plugin_hooks.htm#plugin_hooks_using" class="en">Using Plugin Hooks</a></li>\n';
doc_toc += '              <li><a href="dev_plugin_hooks.htm#plugin_hooks_filename" class="en">Plugin Hooks by Script Filename</a>\n';
doc_toc += '                <ul class="level6">\n';
doc_toc += '                  <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_ind_php" class="en">Script: index.php</a>\n';
doc_toc += '                    <ul class="level7">\n';
doc_toc += '                      <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_ind_anyc" class="en">Filter: \'anycontent\'</a></li>\n';
doc_toc += '                      <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_ind_ucp" class="en">Filter: \'user_caption_params\'</a></li>\n';
doc_toc += '                      <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_ind_pb" class="en">Filter: \'plugin_block\'</a></li>\n';
doc_toc += '                    </ul>\n';
doc_toc += '                  </li>\n';
doc_toc += '                  <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_di_php" class="en">Script: displayimage.php</a>\n';
doc_toc += '                    <ul class="level7">\n';
doc_toc += '                      <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_di_fi" class="en">Filter: \'file_info\'</a></li>\n';
doc_toc += '                      <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_di_pbc" class="en">Filter: \'post_breadcrumb\'</a></li>\n';
doc_toc += '                    </ul>\n';
doc_toc += '                  </li>\n';
doc_toc += '                  <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_thumb_php" class="en">Script: thumbnails.php</a>\n';
doc_toc += '                    <ul class="level7">\n';
doc_toc += '                      <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_thumb_pbc" class="en">Filter: \'post_breadcrumb\'</a></li>\n';
doc_toc += '                    </ul>\n';
doc_toc += '                  </li>\n';
doc_toc += '                  <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_func_php" class="en">Script: functions.inc.php</a>\n';
doc_toc += '                    <ul class="level7">\n';
doc_toc += '                      <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_func_ghgf" class="en">Filters: \'gallery_header\' and \'gallery_footer\'</a></li>\n';
doc_toc += '                      <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_func_td" class="en">Filter: \'thumb_data\'</a></li>\n';
doc_toc += '                      <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_func_th" class="en">Filter: \'template_html\'</a></li>\n';
doc_toc += '                      <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_func_pm" class="en">Filter: \'page_meta\'</a></li>\n';
doc_toc += '                      <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_func_tc" class="en">Filters: \'thumb_caption\' and all derivatives</a></li>\n';
doc_toc += '                    </ul>\n';
doc_toc += '                  </li>\n';
doc_toc += '                  <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_th_php" class="en">Script: themes.inc.php</a>\n';
doc_toc += '                    <ul class="level7">\n';
doc_toc += '                      <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_th_fd" class="en">Filter: \'file_data\'</a></li>\n';
doc_toc += '                    </ul>\n';
doc_toc += '                  </li>\n';
doc_toc += '                  <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_um_php" class="en">Script: usermgr.php</a>\n';
doc_toc += '                    <ul class="level7">\n';
doc_toc += '                      <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_um_umh" class="en">Filter: \'usermgr_header\'</a></li>\n';
doc_toc += '                      <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_um_umf" class="en">Filter: \'usermgr_footer\'</a></li>\n';
doc_toc += '                    </ul>\n';
doc_toc += '                  </li>\n';
doc_toc += '                  <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_pm_php" class="en">Script: pluginmgr.php</a>\n';
doc_toc += '                    <ul class="level7">\n';
doc_toc += '                      <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_pm_pcon" class="en">Filter: \'plugin_configure\'</a></li>\n';
doc_toc += '                      <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_pm_pcl" class="en">Filter: \'plugin_cleanup\'</a></li>\n';
doc_toc += '                    </ul>\n';
doc_toc += '                  </li>\n';
doc_toc += '                  <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_papi_php" class="en">Script: plugin_api.inc.php</a>\n';
doc_toc += '                    <ul class="level7">\n';
doc_toc += '                      <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_papi_ph" class="en">Filter: \'page_html\'</a></li>\n';
doc_toc += '                      <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_papi_pe" class="en">Filter: \'page_end\'</a></li>\n';
doc_toc += '                      <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_papi_pi" class="en">Filter: \'plugin_install\'</a></li>\n';
doc_toc += '                      <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_papi_pu">class="en"Filter: \'plugin_uninstall\'</a></li>\n';
doc_toc += '                      <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_papi_pw" class="en">Filter: \'plugin_wakeup\'</a></li>\n';
doc_toc += '                      <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_papi_ps" class="en">Filter: \'plugin_sleep\'</a></li>\n';
doc_toc += '                    </ul>\n';
doc_toc += '                  </li>\n';
doc_toc += '                  <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_init_php" class="en">Script: init.inc.php</a>\n';
doc_toc += '                    <ul class="level9">\n';
doc_toc += '                      <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_init_ps" class="en">Filter: \'page_start\'</a></li>\n';
doc_toc += '                    </ul>\n';
doc_toc += '                  </li>\n';
doc_toc += '                  <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_picm_php" class="en">Script: picmgmt.inc.php</a>\n';
doc_toc += '                    <ul class="level9">\n';
doc_toc += '                      <li><a href="dev_plugin_hooks.htm#plugin_api_hooks_picm_afd" class="en">Filter: \'add_file_data\'</a></li>\n';
doc_toc += '                    </ul>\n';
doc_toc += '                  </li>\n';
doc_toc += '                </ul>\n';
doc_toc += '              </li>\n';
doc_toc += '              <li><a href="dev_plugin_hooks.htm#plugin_hooks_alphabetically" class="en">Plugin Hooks Alphabetically</a></li>\n';
doc_toc += '              <li><a href="dev_plugin_hooks.htm#plugin_hooks_hooktype" class="en">Plugin Hooks by Hook Type</a></li>\n';
doc_toc += '              <li><a href="dev_plugin_hooks.htm#plugin_hook_examples" class="en">Plugin Hook Examples</a>\n';
doc_toc += '                <ul class="level6">\n';
doc_toc += '                    <li><a href="dev_plugin_hooks.htm#plugin_hook_example_upload_method">Adding an upload method</a></li>\n';
doc_toc += '                    <li><a href="dev_plugin_hooks.htm#plugin_hook_example_theme_display_thumbnails" class="en">Add tags for thumbnails display</a></li>\n';
doc_toc += '                </ul></li>\n';
doc_toc += '            </ul>\n';
doc_toc += '          </li>\n';
doc_toc += '        </ul>\n';
doc_toc += '      </li>\n';
doc_toc += '      <li><a href="dev_documentation.htm" class="en">Editing the documentation</a></li>\n';
doc_toc += '      <li><a href="dev_subversion.htm" class="en">Subversion</a></li>\n';
doc_toc += '      <li><a href="dev_config.htm" class="en">Adding config options</a></li>\n';
doc_toc += '      <li><a href="dev_vars.htm#vars_constants" class="en">Variables &amp; Constants</a>\n';
doc_toc += '        <ul class="level5">\n';
doc_toc += '          <li><a href="dev_vars.htm#vars_constants_system" class="en">System Global Variables</a></li>\n';
doc_toc += '          <li><a href="dev_vars.htm#vars_constants_constants" class="en">Coppermine Constants</a></li>\n';
doc_toc += '        </ul>\n';
doc_toc += '      </li>\n';
doc_toc += '      <li><a href="dev_versioncheck.htm" class="en">Versioncheck</a></li>\n';
doc_toc += '      <li><a href="dev_update.htm" class="en">Updating</a></li>\n';
doc_toc += '      <li><a href="dev_tools.htm" class="en">Tools recommended by the devs</a>\n';
doc_toc += '          <ul class="level4">\n';
doc_toc += '              <li><a href="dev_tools.htm#dev_tools_database" class="en">Database manipulation</a></li>\n';
doc_toc += '              <li><a href="dev_tools.htm#dev_tools_ftp_client" class="en">FTP clients</a></li>\n';
doc_toc += '              <li><a href="dev_tools.htm#dev_tools_web_development" class="en">Web development</a></li>\n';
doc_toc += '              <li><a href="dev_tools.htm#dev_tools_editor" class="en">Text editors</a></li>\n';
doc_toc += '              <li><a href="dev_tools.htm#dev_tools_picture_editors" class="en">Picture Editors</a></li>\n';
doc_toc += '          </ul>\n';
doc_toc += '      </li>\n';
doc_toc += '      <li><a href="dev_database.htm" class="en">Database schema</a>\n';
doc_toc += '          <ul class="level4">\n';
doc_toc += '              <li><a href="dev_database.htm#db_config_file" class="en">Configuration file</a></li>\n';
doc_toc += '              <li><a href="dev_database.htm#db_reference within_code" class="en">Database reference within coppermine code</a></li>\n';
doc_toc += '              <li><a href="dev_database.htm#db_albums" class="en">cpg15x_albums</a></li>\n';
doc_toc += '              <li><a href="dev_database.htm#db_banned" class="en">cpg15x_banned</a></li>\n';
doc_toc += '              <li><a href="dev_database.htm#db_bridge" class="en">cpg15x_bridge</a></li>\n';
doc_toc += '              <li><a href="dev_database.htm#db_categories" class="en">cpg15x_categories</a></li>\n';
doc_toc += '              <li><a href="dev_database.htm#db_categorymap" class="en">cpg15x_categorymap</a></li>\n';
doc_toc += '              <li><a href="dev_database.htm#db_comments" class="en">cpg15x_comments</a></li>\n';
doc_toc += '              <li><a href="dev_database.htm#db_config" class="en">cpg15x_config</a></li>\n';
doc_toc += '              <li><a href="dev_database.htm#db_dict" class="en">cpg15x_dict</a></li>\n';
doc_toc += '              <li><a href="dev_database.htm#db_ecards" class="en">cpg15x_ecards</a></li>\n';
doc_toc += '              <li><a href="dev_database.htm#db_exif" class="en">cpg15x_exif</a></li>\n';
doc_toc += '              <li><a href="dev_database.htm#db_favpics" class="en">cpg15x_favpics</a></li>\n';
doc_toc += '              <li><a href="dev_database.htm#db_filetypes" class="en">cpg15x_filetypes</a></li>\n';
doc_toc += '              <li><a href="dev_database.htm#db_hit_stats" class="en">cpg15x_hit_stats</a></li>\n';
doc_toc += '              <li><a href="dev_database.htm#db_languages" class="en">cpg15x_languages</a></li>\n';
doc_toc += '              <li><a href="dev_database.htm#db_pictures" class="en">cpg15x_pictures</a></li>\n';
doc_toc += '              <li><a href="dev_database.htm#db_plugins" class="en">cpg15x_plugins</a></li>\n';
doc_toc += '              <li><a href="dev_database.htm#db_sessions" class="en">cpg15x_sessions</a></li>\n';
doc_toc += '              <li><a href="dev_database.htm#db_temp_messages" class="en">cpg15x_temp_messages</a></li>\n';
doc_toc += '              <li><a href="dev_database.htm#db_usergroups" class="en">cpg15x_usergroups</a></li>\n';
doc_toc += '              <li><a href="dev_database.htm#db_users" class="en">cpg15x_users</a></li>\n';
doc_toc += '              <li><a href="dev_database.htm#db_votes" class="en">cpg15x_votes</a></li>\n';
doc_toc += '              <li><a href="dev_database.htm#db_vote_stats" class="en">cpg15x_vote_stats</a></li>\n';
doc_toc += '          </ul>\n';
doc_toc += '      </li>\n';
doc_toc += '    </ul>\n';
doc_toc += '  </li>\n';
doc_toc += '</ul>\n';
doc_toc += '</div>\n';
$('#toc').replaceWith('<div id="toc">' + doc_toc + '</div>');
}



function cpgDocHeader() {
	// Only display the header if the docs are not included
	if (getUrlParameters('hide_nav') == 1) {
		return;
	}
	$('#docheader').text('Coppermine Photo Gallery v1.5.3: Manuel et Documentation');
	$('#docheader').after('<br clear="all" />\n<a name="top"></a>');
	$('#docheader').before('<img src="../images/coppermine-logo.png" alt="Coppermine Photo Gallery - Your Online Photo Gallery" align="left" />\n');
}

function cpgDocSearch() {
	// Only display the header if the docs are not included
	if (getUrlParameters('hide_nav') == 1) {
		return;
	}
		var doc_search = '';
	doc_search += '  <div id="doc_search" style="display:none;">\n';
	doc_search += '    <form action="http://www.google.com/cse" id="cse-search-box">\n';
	doc_search += '      <input type="hidden" name="cx" value="009353514429642786404:1fg_c1k1td8" />\n';
	doc_search += '      <input type="text" name="q" size="25" />\n';
	doc_search += '      <input type="submit" name="sa" value="Chercher dans la Doc" style="font-size:9px;" />\n';
	doc_search += '    </form>\n';
	doc_search += '    <script type="text/javascript" src="http://www.google.com/coop/cse/brand?form=cse-search-box&lang=fr"></script>\n';
	doc_search += '  </div>\n';
	$('#toc').append(doc_search);
}

function cpgDocFooter() {
  var overall_doc_footer = '';
  overall_doc_footer += '</div>';
  overall_doc_footer += '<div align="right">';
  overall_doc_footer += '<a href="#top">Haut de Page</a>';
  overall_doc_footer += '</div>';
  $('#doc_footer').append(overall_doc_footer);
}



function dateRevision() {
  // strip the unneeded data from last_changed and revision fields
  var lastChangeDate = $('#doc_last_changed').text();
  var lastChangeDate = lastChangeDate.replace('$', '');
  var lastChangeDate = lastChangeDate.replace('$', '');
  var lastChangeDate = lastChangeDate.replace('LastChangedDate: ', '');
  var lastChangeDate = lastChangeDate.replace(/Date: /g, '');
  $('#doc_last_changed').text('A propos de ce document: ' + 'Dernière modification le ' + lastChangeDate);

  var revisionNumber = $('#doc_revision').text();
  var revisionNumber = revisionNumber.replace('$', '');
  var revisionNumber = revisionNumber.replace('$', '');
  var revisionNumber = revisionNumber.replace(/Revision: /g, '');
  $('#doc_revision').text(', révision SVN ' + revisionNumber);
}

function getUrlParameters(name)
{
  // Taken from http://www.netlobo.com/url_query_string_javascript.html
  name = name.replace(/[\[]/,"\\\[").replace(/[\]]/,"\\\]");
  var regexS = "[\\?&]"+name+"=([^&#]*)";
  var regex = new RegExp(regexS);
  var results = regex.exec(window.location.href);
  if(results == null) {
    return '';
  } else {
    return results[1];
  }
}

function cpgDocTranslationWarning() {
  if (getUrlParameters('hide_nav') == 1) {
	return;
  }
  $('#doc_en_only').replaceWith('<div class="cpg_message_validation"><h1>Pas encore de traduction</h1><p>cette page n\'a pas encore été traduite c\'est pourquoi elle s\'affiche uniquement en Anglais.</p><p>Recherche de Traducteurs: nous serions heureux que vous participiez en contribuant à la traduction. Rendez vous sur la page d\'accueil de Coppermine pour vérifier l\'avancement de la traduction.</div>');
  $('#doc_en_partial').replaceWith('<div class="cpg_message_warning"><h1>Traduction partielle</h1><p>Cette page n\'est pas encore traduite complètement et s\'affiche aussi bien en Français qu\'en Anglais. Rendez vous sur la page d\'accueil de Coppermine pour vérifier l\'avancement de la traduction.</div>');
}

$(document).ready(function()
{
	var $_GET = {};
	document.location.search.replace(/\??(?:([^=]+)=([^&]*)&?)/g, function () {
		function decode(s) {
			return decodeURIComponent(s).replace(/\+/g, " ");
		}
		$_GET[decode(arguments[1])] = decode(arguments[2]);
	});
	//hide all elements with class detail_body
	$(".detail_body").hide();
	if ($_GET["expand_all"] == 1) { // Show all details and get rid of the details toggle if the GET parameter expand_all is set
		$('.detail_body').show();
		$('.detail_head_collapsed').replaceWith('');
	}
	//toggle the component with class detail_body
	$(".detail_head_collapsed").click(function()
	{
		$(this).toggleClass("detail_head_expanded").next(".detail_body").slideToggle(600);
	});
	$(".detail_expand_all").click(function()
	{
		$(".detail_body").slideDown(1200);
		$(".detail_head_collapsed").toggleClass("detail_head_expanded");
		$(".detail_expand_all").hide();
		$(".detail_collapse_all").show();

	});
	$(".detail_collapse_all").click(function()
	{
		$(".detail_body").slideUp(1200);
		$(".detail_head_collapsed").toggleClass("detail_head_expanded");
		$(".detail_expand_all").show();
		$(".detail_collapse_all").hide();

	});
	$(".detail_toggle_all").click(function()
	{
		$(".detail_body").slideToggle(600);
		$(".detail_head_collapsed").toggleClass("detail_head_expanded");
	});
	cpgDocHeader();
	cpgDocTranslationWarning();
	cpgDocToc();
	$("#tree").treeview({
        collapsed: true,
        unique: true,
        animated: "slow",
        persist: "location"
    });
	cpgDocSearch();
	cpgDocFooter();
	dateRevision();
	
    $("a.nolink").click(function(){
      return false;
    });
 // Fade the toc in if it is needed
	$("#toc").bind("mouseenter",function(){
		$("#toc_collapsed").hide();
		$("#toc_expanded").fadeIn('slow');
		$("#doc_search").show();
	});
	// Fade the toc out if it isn't used
	$("#toc").bind("mouseleave",function(){
		$("#toc_expanded").fadeOut('slow');
		$("#toc_collapsed").show();
		$("#doc_search").hide();
	});	
});