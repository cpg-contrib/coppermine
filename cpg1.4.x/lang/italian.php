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
  Coppermine version: 1.4.22
  $HeadURL$
  $Revision$
  $Author$
  $Date$
**********************************************/

if (!defined('IN_COPPERMINE')) { die('Not in Coppermine...');}

// info about translators and translated language
$lang_translation_info = array(
  'lang_name_english' => 'Italian', //cpg1.4
  'lang_name_native' => 'Italiano', //cpg1.4
  'lang_country_code' => 'it', //cpg1.4
  'trans_name'=> 'Ganesh',
  'trans_email' => 'gq@gospel.bo.it',
  'trans_website' => 'http://www.gospel.bo.it/',
  'trans_date' => '2005-12-02',
);

$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('Bytes', 'KB', 'MB');

// Day of weeks and months
$lang_day_of_week = array('Dom', 'Lun', 'Mar', 'Mer', 'Gio', 'Ven', 'Sab');
$lang_month = array('Gen', 'Feb', 'Mar', 'Apr', 'Mag', 'Giu', 'Lug', 'Ago', 'Set', 'Ott', 'Nov', 'Dic');

// Some common strings
$lang_yes = 'Si';
$lang_no  = 'No';
$lang_back = 'INDIETRO';
$lang_continue = 'CONTINUA';
$lang_info = 'Informazione';
$lang_error = 'Errore';
$lang_check_uncheck_all = 'seleziona/deseleziona tutto'; //cpg1.4

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
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*');

$lang_meta_album_names = array(
  'random' => 'Immagini a caso',
  'lastup' => 'Ultimi Arrivi',
  'lastalb'=> 'Ultimi albums aggiornati',
  'lastcom' => 'Ultimi Commenti',
  'topn' => 'Più viste',
  'toprated' => 'Più votate',
  'lasthits' => 'Ultima visita',
  'search' => 'Risultati ricerca',
  'favpics'=> 'Files Preferiti',  //cpg1.4
);

$lang_errors = array(
  'access_denied' => 'Non possiedi i permessi necessari per accedere alla pagina.',
  'perm_denied' => 'Non possiedi i permessi necessari per eseguire questa operazione.',
  'param_missing' => 'Script eseguito senza i parametri necessari.',
  'non_exist_ap' => 'Il file o l\'album/file non esiste !',
  'quota_exceeded' => 'Quota Disco superata<br /><br />Hai una quota disco pari a [quota]K, i tuoi files occupano attualmente [space]K, aggiungere questo file significa superare il limite.',
  'gd_file_type_err' => 'Usando la libreria GD i tipi di files consentiti sono solo JPEG and PNG.',
  'invalid_image' => 'L\'immagine caricata risulta corrotta o non riesce ad essere gestita dalla libreria GD',
  'resize_failed' => 'Impossibile creare la miniatura o l\'immagine di dimensioni intermedie.',
  'no_img_to_display' => 'Nessuna immagine da mostrare',
  'non_exist_cat' => 'La categoria selezionata non esiste',
  'orphan_cat' => 'Una categoria possiede un collegamento non esistente, utilizzare Gestione Categorie per correggere il problema!',
  'directory_ro' => 'La Cartella \'%s\' non è scrivibile, i files non possono essere cancellati',
  'non_exist_comment' => 'Il commento selezionato non esiste.',
  'pic_in_invalid_album' => 'Il File risiede in un album inesistente (%s)!?',
  'banned' => 'Al momento sei bannato ! Non hai i permessi per accedere al sito.',
  'not_with_udb' => 'Questa funzione è disabilitata in Coppermine in quanto si tratta di un\'integrazione con un forum. O quello che provi a fare non viene supportato da questa configurazione, o la funzione dovrebbe essere gestita dal software del forum.',
  'offline_title' => 'Offline',
  'offline_text' => 'La Galleria è al momento offline - Riprova più tardi',
  'ecards_empty' => 'Al momento non ci sono ecard records da mostrare.',
  'action_failed' => 'Azione fallita.  Coppermine non è in grado di gestire la tua richiesta.',
  'no_zip' => 'Le librerie necessarie per processare i files ZIP non sono disponibili.  Contattare l\'amministratore.',
  'zip_type' => 'Non possiedi i permessi per caricare files ZIP.',
  'database_query' => 'Si è verificato un errore eseguendo una query al database', //cpg1.4
  'non_exist_comment' => 'Il commento selezionato non esiste', //cpg1.4
);

$lang_bbcode_help_title = 'Aiuto BbCode'; //cpg1.4
$lang_bbcode_help = 'Puoi aggiungere collegamenti cliccabili e alcune formattazioni a questo campo usando i tags bbcode: <li>[b]Grassetto[/b] =&gt; <b>Grassetto</b></li><li>[i]Corsivo[/i] =&gt; <i>Corsivo</i></li><li>[url=http://yoursite.com/]Titolo del collegamento[/url] =&gt; <a href="http://yoursite.com">Titolo del collegamento</a></li><li>[email]user@domain.com[/email] =&gt; <a href="mailto:user@domain.com">user@domain.com</a></li><li>[color=red]testo qualsiasi[/color] =&gt; <span style="color:red">testo qualsiasi</span></li><li>[img]http://coppermine-gallery.net/demo/cpg14x/images/red.gif[/img] => <img src="../images/red.gif" border="0" alt="" /></li>'; //cpg1.4

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
  'home_title' => 'vai alla home page',
  'home_lnk' => 'Home',
  'alb_list_title' => 'Vai a Elenco Album',
  'alb_list_lnk' => 'Lista Album',
  'my_gal_title' => 'Vai alla Galleria Personale',
  'my_gal_lnk' => 'Galleria Personale',
  'my_prof_title' => 'Vai al Profilo', //cpg1.4
  'my_prof_lnk' => 'Profilo',
  'adm_mode_title' => 'Entra in modo Admin',
  'adm_mode_lnk' => 'Modo Admin',
  'usr_mode_title' => 'Entra in modo Utente',
  'usr_mode_lnk' => 'Modo Utente',
  'upload_pic_title' => 'Carica un file in un album',
  'upload_pic_lnk' => 'Carica file',
  'register_title' => 'Crea un account',
  'register_lnk' => 'Registrati',
  'login_title' => 'Esegui il Login', //cpg1.4
  'login_lnk' => 'Login',
  'logout_title' => 'Log out', //cpg1.4
  'logout_lnk' => 'Logout',
  'lastup_title' => 'Mostra Uploads Recenti', //cpg1.4
  'lastup_lnk' => 'Ultimi Uploads',
  'lastcom_title' => 'Mostra gli ultimi commenti', //cpg1.4
  'lastcom_lnk' => 'Ultimi commenti',
  'topn_title' => 'Mostra i files più visti', //cpg1.4
  'topn_lnk' => 'Più Visti',
  'toprated_title' => 'Mostra files più votati', //cpg1.4
  'toprated_lnk' => 'Più Votati',
  'search_title' => 'Ricerca nella galleria', //cpg1.4
  'search_lnk' => 'Cerca',
  'fav_title' => 'Vai ai Preferiti', //cpg1.4
  'fav_lnk' => 'Preferiti',
  'memberlist_title' => 'Mostra Lista Utenti',
  'memberlist_lnk' => 'Lista Utenti',
  'faq_title' => 'Frequently Asked Questions sulla galleria di immagini &quot;Coppermine&quot;',
  'faq_lnk' => 'FAQ',
);

$lang_gallery_admin_menu = array(
  'upl_app_title' => 'Approva Nuovi Uploads', //cpg1.4
  'upl_app_lnk' => 'Approvazione Upload',
  'admin_title' => 'Vai alla configurazione', //cpg1.4
  'admin_lnk' => 'Configurazione', //cpg1.4
  'albums_title' => 'Vai alla configurazione album', //cpg1.4
  'albums_lnk' => 'Albums',
  'categories_title' => 'Vai alla configurazione categorie', //cpg1.4
  'categories_lnk' => 'Categorie',
  'users_title' => 'Vai alla configurazione utenti', //cpg1.4
  'users_lnk' => 'Utenti',
  'groups_title' => 'Vai alla configurazione gruppi', //cpg1.4
  'groups_lnk' => 'Gruppi',
  'comments_title' => 'Guarda tutti i commenti', //cpg1.4
  'comments_lnk' => 'Mostra Commenti',
  'searchnew_title' => 'Vai all\'elaborazione Batch', //cpg1.4
  'searchnew_lnk' => 'Aggiunta Batch',
  'util_title' => 'Vai agli strumenti di amministrazione', //cpg1.4
  'util_lnk' => 'Strumenti Admin',
  'key_title' => 'Vai al dizionario keyword', //cpg1.4
  'key_lnk' => 'Dizionario Keyword', //cpg1.4
  'ban_title' => 'Visualizza utenti bannati', //cpg1.4
  'ban_lnk' => 'Banna Utenti',
  'db_ecard_title' => 'Mostra Ecards', //cpg1.4
  'db_ecard_lnk' => 'Mostra Ecards',
  'pictures_title' => 'Ordina le mie immagini', //cpg1.4
  'pictures_lnk' => 'Ordina Immagini', //cpg1.4
  'documentation_lnk' => 'Documentazione', //cpg1.4
  'documentation_title' => 'Manuale Coppermine', //cpg1.4
);

$lang_user_admin_menu = array(
  'albmgr_title' => 'Crea e organizza albums', //cpg1.4
  'albmgr_lnk' => 'Crea / organizza albums',
  'modifyalb_title' => 'Modifica albums',  //cpg1.4
  'modifyalb_lnk' => 'Modifica albums',
  'my_prof_title' => 'Vai al profilo', //cpg1.4
  'my_prof_lnk' => 'Profilo',
);

$lang_cat_list = array(
  'category' => 'Categoria',
  'albums' => 'Albums',
  'pictures' => 'Files',
);

$lang_album_list = array(
  'album_on_page' => '%d albums in %d pagina(e)',
);

$lang_thumb_view = array(
  'date' => 'DATA',
  //Sort by filename and title
  'name' => 'NOME FILE',
  'title' => 'TITOLO',
  'sort_da' => 'Elenca per data crescente',
  'sort_dd' => 'Elenca per data decrescente',
  'sort_na' => 'Elenca per nome alfabeticamente',
  'sort_nd' => 'Elenca per nome analfabeticamente',
  'sort_ta' => 'Elenca per titolo alfabeticamente',
  'sort_td' => 'Elenca per titolo analfabeticamente',
  'position' => 'POSIZIONE', //cpg1.4
  'sort_pa' => 'Elenca per posizione crescente', //cpg1.4
  'sort_pd' => 'Elenca per posizione decrescente', //cpg1.4
  'download_zip' => 'Download come file ZIP',
  'pic_on_page' => '%d files su %d pagina(e)',
  'user_on_page' => '%d utenti su %d pagina(e)',
  'enter_alb_pass' => 'Inserisci Password Album', //cpg1.4
  'invalid_pass' => 'Password non valida', //cpg1.4
  'pass' => 'Password', //cpg1.4
  'submit' => 'Invia', //cpg1.4
);

$lang_img_nav_bar = array(
  'thumb_title' => 'Ritorna all\'elenco Miniature',
  'pic_info_title' => 'Mostra/Nascondi informazioni sul file',
  'slideshow_title' => 'Slideshow',
  'ecard_title' => 'Invia questo file come e-card',
  'ecard_disabled' => 'e-cards disabilitate',
  'ecard_disabled_msg' => 'Non possiedi i permessi necessari per inviare ecards', //js-alert
  'prev_title' => 'Visualizza file precedente',
  'next_title' => 'Visualizza file successivo',
  'pic_pos' => 'FILE %s/%s',
  'report_title' => 'Segnala questo file ad un amministratore', //cpg1.4
  'go_album_end' => 'Vai alla fine', //cpg1.4
  'go_album_start' => 'Torna all\'inizio', //cpg1.4
  'go_back_x_items' => 'Vai indietro di %s elementi', //cpg1.4
  'go_forward_x_items' => 'vai avanti di %s elementi', //cpg1.4
);

$lang_rate_pic = array(
  'rate_this_pic' => 'Valuta questo file ',
  'no_votes' => '(Nessun voto ancora)',
  'rating' => '(valutazione attuale : %s / 5 con %s voti)',
  'rubbish' => 'Spazzatura',
  'poor' => 'Scadente',
  'fair' => 'Discreta',
  'good' => 'Buona',
  'excellent' => 'Ottima',
  'great' => 'Eccellente',
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
  CRITICAL_ERROR => 'Errore Critico',
  'file' => 'File: ',
  'line' => 'Line: ',
);

$lang_display_thumbnails = array(
  'filename' => 'Nome File=', //cpg1.4
  'filesize' => 'Peso File=', //cpg1.4
  'dimensions' => 'Dimensioni=', //cpg1.4
  'date_added' => 'Data inserimento=', //cpg1.4
);

$lang_get_pic_data = array(
  'n_comments' => '%s commenti',
  'n_views' => '%s viste',
  'n_votes' => '(%s voti)',
);

$lang_cpg_debug_output = array(
  'debug_info' => 'Informazioni di debug',
  'select_all' => 'Seleziona tutto',
  'copy_and_paste_instructions' => 'Se stai per chiedere aiuto sul forum di supporto di Coppermine, copia e incolla questo output di debug nel vostro thread quando richiesto, insieme al messaggio di errore (se esistente). Accertati di cambiare nella query ogni password con ***** prima di postarle. <br />Nota: Questo è solo per informazione e non significa che ci sia un errore nella tua galleria.', //cpg1.4
  'phpinfo' => 'Mostra PhPInfo',
  'notices' => 'Annotazioni', //cpg1.4
);

$lang_language_selection = array(
  'reset_language' => 'Lingua di Default',
  'choose_language' => 'Seleziona Linguaggio',
);

$lang_theme_selection = array(
  'reset_theme' => 'Tema di Default',
  'choose_theme' => 'Seleziona un Tema',
);

$lang_version_alert = array(
  'version_alert' => 'Versione non supportata!', //cpg1.4
  'no_stable_version' => 'Hai installato Coppermine %s (%s) una versione indicata ad utenti esperti - questa versione non ha nessun supporto e nessuna garanzia. Usala a tuo rischio o esegui un downgrade all\'ultima versione stabile se necessiti di supporto!', //cpg1.4
  'gallery_offline' => 'La Galleria è al momento offline e sarà visibile da te come Admin. Non dimenticarti di rimetterla online una volta terminata la manutenzione.', //cpg1.4
);

$lang_create_tabs = array(
  'previous' => 'precedente', //cpg1.4
  'next' => 'prossimo', //cpg1.4
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
  'error_wakeup' => "Impossibile richiamare il plugin '%s'", //cpg1.4
  'error_install' => "Impossibile installare il plugin '%s'", //cpg1.4
  'error_uninstall' => "Impossibile disinstallare il plugin '%s'", //cpg1.4
  'error_sleep' => "Impossibile disinstallare il plugin '%s'<br />", //cpg1.4
);

// ------------------------------------------------------------------------- //
// File include/smilies.inc.php
// ------------------------------------------------------------------------- //

if (defined('SMILIES_PHP')) $lang_smilies_inc_php = array(
  'Exclamation' => 'Esclamazione',
  'Question' => 'Domanda',
  'Very Happy' => 'Molto felice',
  'Smile' => 'Sorriso',
  'Sad' => 'Triste',
  'Surprised' => 'Sorpreso',
  'Shocked' => 'Scioccato',
  'Confused' => 'Confuso',
  'Cool' => 'Cool',
  'Laughing' => 'LoL',
  'Mad' => 'Pazzo',
  'Razz' => 'Razz',
  'Embarassed' => 'Imbarazzato',
  'Crying or Very sad' => 'Molto triste',
  'Evil or Very Mad' => 'Cattivo',
  'Twisted Evil' => 'Molto Cattivo',
  'Rolling Eyes' => 'Rolling Eyes',
  'Wink' => 'Occhiolino',
  'Idea' => 'Idea',
  'Arrow' => 'Freccia',
  'Neutral' => 'Neutrale',
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
  0 => 'Lascio il modo admin...',
  1 => 'Entro in modo admin...',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
  'alb_need_name' => 'Gli Albums devono avere un nome !', //js-alert
  'confirm_modifs' => 'Sicuro di voler applicare queste modifiche ?', //js-alert
  'no_change' => 'Nessuna modifica eseguita !', //js-alert
  'new_album' => 'Nuovo album',
  'confirm_delete1' => 'Sicuro di voler cancellare questo album ?', //js-alert
  'confirm_delete2' => '\nTutti i files e i commenti contenuti andranno persi !', //js-alert
  'select_first' => 'Seleziona un album prima', //js-alert
  'alb_mrg' => 'Gestione Album',
  'my_gallery' => '* Galleria Personale *',
  'no_category' => '* Nessuna Categoria *',
  'delete' => 'Cancella',
  'new' => 'Nuovo',
  'apply_modifs' => 'Applica modifiche',
  'select_category' => 'Seleziona categoria',
);

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) $lang_banning_php = array(
  'title' => 'Banna Utenti', //cpg1.4
  'user_name' => 'nome Utente', //cpg1.4
  'ip_address' => 'Indirizzo IP', //cpg1.4
  'expiry' => 'Scadenza (vuoto significa permanente)', //cpg1.4
  'edit_ban' => 'Salva Modifiche', //cpg1.4
  'delete_ban' => 'Cancella', //cpg1.4
  'add_new' => 'Aggiungi nuovo ban', //cpg1.4
  'add_ban' => 'Aggiungi', //cpg1.4
  'error_user' => 'Impossibile trovare utente', //cpg1.4
  'error_specify' => 'Devi specificare o il nome utente o un indirizzo IP', //cpg1.4
  'error_ban_id' => 'ID ban non valido!', //cpg1.4
  'error_admin_ban' => 'Non puoi bannarti da solo!', //cpg1.4
  'error_server_ban' => 'Vuoi bannare il tuo stesso server? Tsk tsk, non lo puoi fare...', //cpg1.4
  'error_ip_forbidden' => 'Non puoi bannare questo IP - si tratta di un IP non-routable (privato) comunque!<br />Se vuoi consentire il banning egli IP privati, devi cambiare le preferenze nella <a href="admin.php">Configurazione</a> (ha senso solo se Coppermine gira su una LAN).', //cpg1.4
  'lookup_ip' => 'Lookup an IP address', //cpg1.4
  'submit' => 'Vai!', //cpg1.4
  'select_date' => 'seleziona data', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File bridgemgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('BRIDGEMGR_PHP')) $lang_bridgemgr_php = array(
  'title' => 'Bridge Wizard',
  'warning' => 'Attenzione: usando questo wizard deve essere chiaro che i dati sensibili verranno trasmessi tramite forms html. Fallo girare solo sul tuo PC (non su Client pubblici come in un internet cafe), e assicurati di pulire la cache del browser e i files temporanei dopo aver finito, o altri potrebbero accedere ai tuoi dati!',
  'back' => 'precedente',
  'next' => 'successivo',
  'start_wizard' => 'Inizia bridging wizard',
  'finish' => 'Finisci',
  'hide_unused_fields' => 'Nascondi campi inutilizzati (consigliato)',
  'clear_unused_db_fields' => 'Pulisci valori del database non validi (consigliato)',
  'custom_bridge_file' => 'Il nome del tuo file di bridge personalizzato (Se il nome del file di bridge è <i>myfile.inc.php</i>, inserisci <i>myfile</i> in questo campo)',
  'no_action_needed' => 'Nessuna azione necessaria in questo passo. Premi \'next\' per continuare.',
  'reset_to_default' => 'Azzera alle impostazioni di default',
  'choose_bbs_app' => 'scegli l\'applicazione con la quale Coppermine deve fare il bridge',
  'support_url' => 'Vai qui per il supporto a questa applicazione',
  'settings_path' => 'percorso usato dalla tua board (BBS)',
  'database_connection' => 'connessione database',
  'database_tables' => 'tabelle del database',
  'bbs_groups' => 'gruppi della board',
  'license_number' => 'numero di licenza',
  'license_number_explanation' => 'inserisci il tuo numero di licenza (se necessario)',
  'db_database_name' => 'Nome del Database',
  'db_database_name_explanation' => 'Inserisci il nome del database usato dalla tua board',
  'db_hostname' => 'Indirizzo Database',
  'db_hostname_explanation' => 'Indirizzo dove risiede il tuo database mySQL, di solito &quot;localhost&quot;',
  'db_username' => 'Account utente Database',
  'db_username_explanation' => 'Utente mySQL da usare per la connessione con la board',
  'db_password' => 'Database passsword',
  'db_password_explanation' => 'Passsword per questo utente mySQL',
  'full_forum_url' => 'URL Forum',
  'full_forum_url_explanation' => 'URL della tua board (incluso http:// , es. http://www.yourdomain.tld/forum)',
  'relative_path_of_forum_from_webroot' => 'Percorso relativo del forum',
  'relative_path_of_forum_from_webroot_explanation' => 'percorso relativo alla board rispetto alla webroot (Esempio: se la tua board risiede su http://www.yourdomain.tld/forum/, inserisci &quot;/forum/&quot; in questo campo)',
  'relative_path_to_config_file' => 'Percorso relativo al file di configurazione della tua board',
  'relative_path_to_config_file_explanation' => 'Percorso relativo alla tua board, partendo dalla cartella di coppermine (es. &quot;../forum/&quot; se la tua board risiede su http://www.yourdomain.tld/forum/ e Coppermine su http://www.yourdomain.tld/gallery/)',
  'cookie_prefix' => 'Prefisso Cookie',
  'cookie_prefix_explanation' => 'questo deve essere il nome del cookie della board',
  'table_prefix' => 'Prefisso Tabelle',
  'table_prefix_explanation' => 'Deve corrispondere al prefisso scelto per la board.',
  'user_table' => 'tabelle utente',
  'user_table_explanation' => '(solitamente il valore di default dovrebbe essere OK, a meno che la vostra installazione sia non-standard)',
  'session_table' => 'Tanelle sessioni',
  'session_table_explanation' => '(usolitamente il valore di default dovrebbe essere OK, a meno che la vostra installazione sia non-standard)',
  'group_table' => 'Tabelle gruppi',
  'group_table_explanation' => '(solitamente il valore di default dovrebbe essere OK, a meno che la vostra installazione sia non-standard)',
  'group_relation_table' => 'Group relation table',
  'group_relation_table_explanation' => '(solitamente il valore di default dovrebbe essere OK, a meno che la vostra installazione sia non-standard)',
  'group_mapping_table' => 'Group mapping table',
  'group_mapping_table_explanation' => '(solitamente il valore di default dovrebbe essere OK, a meno che la vostra installazione sia non-standard)',
  'use_standard_groups' => 'Utilizza i gruppi standard della board',
  'use_standard_groups_explanation' => 'Utilizza i gruppi utente standard (consigliato). Questo annullerà ogni personalizzazione alle impostazioni dei gruppi creata in questa pagina. Disabilita questa opzione SOLO se sai veramente cosa stai facendo!',
  'validating_group' => 'Gruppo in attesa di convalida',
  'validating_group_explanation' => 'ID del gruppo della tua board dove risiedono gli account utente che richiedono di essere convalidati (solitamente il valore di default dovrebbe essere OK, a meno che la vostra installazione sia non-standard)',
  'guest_group' => 'Gruppo Ospiti',
  'guest_group_explanation' => 'ID del gruppo della tua board dove si trovano gli ospiti (utenti anonimi) (il valore di default dovrebbe essere OK, cambialo solo se sai cosa stai facendo)',
  'member_group' => 'Gruppo Membri',
  'member_group_explanation' => 'ID del gruppo dove risiedono gli utenti &quot;regolari&quot; (il valore di default dovrebbe essere OK, cambialo solo se sai cosa stai facendo)',
  'admin_group' => 'Gruppo Admin',
  'admin_group_explanation' => 'ID del gruppo dove risiedono gli Admins della board (il valore di default dovrebbe essere OK, cambialo solo se sai cosa stai facendo)',
  'banned_group' => 'Gruppo Bannati',
  'banned_group_explanation' => 'ID del gruppo dove risiedono gli utenti Bannati (il valore di default dovrebbe essere OK, cambialo solo se sai cosa stai facendo)',
  'global_moderators_group' => 'Gruppo Moderatori Globali',
  'global_moderators_group_explanation' => 'ID del gruppo dover risiedono i Moderatori Globali della board (il valore di default dovrebbe essere OK, cambialo solo se sai cosa stai facendo)',
  'special_settings' => 'Impostazioni specifiche Board',
  'logout_flag' => 'Version phpBB (logout flag)',
  'logout_flag_explanation' => 'Che versione di phpbb possiedi (questa impostazione specifica come vengono gestiti i logouts)',
  'use_post_based_groups' => 'Utilizzi gruppi basati sul numero di posts?',
  'logout_flag_yes' => '2.0.5 o superiore',
  'logout_flag_no' => '2.0.4 o inferiore',
  'use_post_based_groups_explanation' => 'Bisogna inserire anche i gruppi basati sul numero di posts (consente una gestione particolareggiata dei permessi) o solo i gruppi di default (consente un livello di amministrazione semplice, consigliato)? Puoi cambiare questa impostazione anche in seguito.',
  'use_post_based_groups_yes' => 'si',
  'use_post_based_groups_no' => 'no',
  'error_title' => 'Devi correggere questi errori prima di continuare. Torna alla schermata precedente.',
  'error_specify_bbs' => 'Devi specificare con quale applicazione vuoi fare il bridge.',
  'error_no_blank_name' => 'Non puoi lasciare vuoto il nome del tuo file di bridge personalizzato.',
  'error_no_special_chars' => 'Il nome del file di bridge non deve contenere caratteri speciali eccetto (_) e (-)!',
  'error_bridge_file_not_exist' => 'Il file di bridge %s non esiste sul server. Controlla di averlo uploadato.',
  'finalize' => 'abilita/disabilita integrazione con la Board',
  'finalize_explanation' => 'Ben, le impostazioni specificate sono state inserite nel database, ma l\'integrazione con la Board non è stata abilitata. Puoi abilitarla/disabilitarda anche successivamente, in qualsiasi momento. Ricordati il nome utente Admin e la password della installazione Coppermine standalone, potrebbe servirti in seguito per effettuare modifiche. Se qualcosa non dovesse andare a buon fine, vai su  %s e disabilita l\'integrazione con la Board, usando l\'account admin.',
  'your_bridge_settings' => 'Impostazioni di bridging',
  'title_enable' => 'Abilita integrazione/bridging con %s',
  'bridge_enable_yes' => 'Abilita',
  'bridge_enable_no' => 'Disabilita',
  'error_must_not_be_empty' => 'non deve essere vuoto',
  'error_either_be' => 'deve essere o %s o %s',
  'error_folder_not_exist' => '%s non esiste. Correggi il valore inserito per %s',
  'error_cookie_not_readible' => 'Coppermine non riesce a leggere un cookie chiamato %s. Correggi il valore inserito per %s, o vai sul pannello di amministrazione della tua Board e assicurati che il percorso del cookie sia raggiungibile da Coppermine.',
  'error_mandatory_field_empty' => 'Non puoi lasciare il campo %s vuoto - riempilo col valore appropriato.',
  'error_no_trailing_slash' => 'Non ci deve essere una sbarra nel campo %s.',
  'error_trailing_slash' => 'Ci deve essere una sbarra nel campo %s.',
  'error_db_connect' => 'Impossibile connettersi al database mySQL con i dati specificati. Di seguito la risposta del database:',
  'error_db_name' => 'Anche se Coppermine è riuscita a connettersi, non è riuscita a trovare il database %s. Assicurati di aver specificato %s appropriatamente. Di seguito la risposta del database:',
  'error_prefix_and_table' => '%s e ',
  'error_db_table' => 'Impossibile trovare la tabella %s. Assicurati di aver specificato %s correttamente.',
  'recovery_title' => 'Bridge Manager: riparazione di emergenza',
  'recovery_explanation' => 'Se sei arrivato qui per amministrare l\'integrazione della Board con la tua galleria Coppermine, devi prima effettuare il login come amministratore. Se non puoi effettuare il login poichè il bridging non funziona appropriatamente, puoi disabilitare l\'integrazione in questa pagina. Inserendo utente e password non ti consentirà di effettuare il login, ma disabiliterà l\'integrazione con la board. Controlla la documentazione per i dettagli.',
  'username' => 'Utente',
  'password' => 'Password',
  'disable_submit' => 'Invia',
  'recovery_success_title' => 'Autorizzato con successo',
  'recovery_success_content' => 'Hai disabilitato con successo il bridging con la board. La tua installazione di Coppermine ora gira come standalone.',
  'recovery_success_advice_login' => 'Esegui il Log in come admin per modificare le impostazioni di bridging e/o abilitare di nuovo l\'integrazione con la Board.',
  'goto_login' => 'Vai al login',
  'goto_bridgemgr' => 'Vai a Gestione Bridge',
  'recovery_failure_title' => 'Autorizzazione fallita',
  'recovery_failure_content' => 'Hai fornito credenziali non corrette. Devi fornire i dati di amministratore della versione standalone (normalmente quelle impostate durante l\'installazione).',
  'try_again' => 'ritenta',
  'recovery_wait_title' => 'Aspetta, tempo non ancora passato',
  'recovery_wait_content' => 'Per motivi di sicurezza questo script non consente sessioni fallite di login in rapida successione, quindi devi aspettare qualche tempo prima di ritentare.',
  'wait' => 'attendi',
  'create_redir_file' => 'Crea file di redirect (consigliato)',
  'create_redir_file_explanation' => 'Per reindirizzare gli utenti a Coppermine una volta effettuato il login sulla Board, necessiti di un file di redirect da creare nella cartella della Board stessa. Quando questa opzione è selezionata, la gestione bridging tenterà di creare questo file per te, o fornisce un codice per creare manualmente il file.',
  'browse' => 'sfoglia',
);

// ------------------------------------------------------------------------- //
// File calendar.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('CALENDAR_PHP')) $lang_calendar_php = array(
  'title' => 'Calendario', //cpg1.4
  'close' => 'chiudi', //cpg1.4
  'clear_date' => 'azzera data', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
  'miss_param' => 'Parametri richiesti per l\'operazione \'%s\'non forniti !',
  'unknown_cat' => 'La categoria selezionata non esiste nel database',
  'usergal_cat_ro' => 'La categoria Gallerie Utenti non può essere cancellata !',
  'manage_cat' => 'Gestione Categorie',
  'confirm_delete' => 'Sicuro di voler CANCELLARE questa categoria', //js-alert
  'category' => 'Categoria',
  'operations' => 'Operazioni',
  'move_into' => 'Sposta in',
  'update_create' => 'Aggiorna/Crea categoria',
  'parent_cat' => 'Categoria Madre',
  'cat_title' => 'Titolo Categoria',
  'cat_thumb' => 'Miniatura Categoria',
  'cat_desc' => 'Descrizione Categoria',
  'categories_alpha_sort' => 'Elenca categorie alfabeticamente (Invece che elenco personalizzato)', //cpg1.4
  'save_cfg' => 'Salva configurazione', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File admin.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('ADMIN_PHP')) $lang_admin_php = array(
  'title' => 'Configurazione Galleria', //cpg1.4
  'manage_exif' => 'Gestione dati EXIF', //cpg1.4
  'manage_plugins' => 'Gestione plugins', //cpg1.4
  'manage_keyword' => 'Gestione parole chiave', //cpg1.4
  'restore_cfg' => 'Ripristina impostazioni di sistema',
  'save_cfg' => 'Salva nuova configurazione',
  'notes' => 'Note',
  'info' => 'Informazione',
  'upd_success' => 'Configurazione di Coppermine aggiornata',
  'restore_success' => 'Configurazione di default ripristinata',
  'name_a' => 'Nome Ascendente',
  'name_d' => 'Nome Discendente',
  'title_a' => 'Titolo Ascendente',
  'title_d' => 'Titolo Discendente',
  'date_a' => 'Data Ascendente',
  'date_d' => 'Data Discendente',
  'pos_a' => 'Posizione Ascendente', //cpg1.4
  'pos_d' => 'Posizione Discendente', //cpg1.4
  'th_any' => 'Dimensioni Max',
  'th_ht' => 'Altezza',
  'th_wd' => 'Larghezza',
  'label' => 'etichetta',
  'item' => 'elemento',
  'debug_everyone' => 'Tutti',
  'debug_admin' => 'Solo Admin',
  'no_logs'=> 'Off', //cpg1.4
  'log_normal'=> 'Normale', //cpg1.4
  'log_all' => 'Tutti', //cpg1.4
  'view_logs' => 'Guarda logs', //cpg1.4
  'click_expand' => 'clicca il nome di sezione per espandere', //cpg1.4
  'expand_all' => 'Espandi tutto', //cpg1.4
  'notice1' => '(*) Queste impostazioni non devono essere cambiate se hai già dei files nel database.', //cpg1.4 - (relocated)
  'notice2' => '(**) Quando modifichi queste impostazioni, solo i files aggiunti da questo momento in poi ne saranno affetti, quindi è consigliabile non cambiare queste impostazioni se sono già presenti dei files nella galleria. Puoi comunque applicare i cambiamenti ai files esistenti con gli &quot;<a href="util.php">Strumenti Admin</a> (ridimensiona immagini)&quot; dal menu Admin.', //cpg1.4 - (relocated)
  'notice3' => '(***) Tutti i files di log sono in inglese.', //cpg1.4 - (relocated)
  'bbs_disabled' => 'Funzione non abilitata nell\'integrazione Board', //cpg1.4
  'auto_resize_everyone' => 'Tutti', //cpg1.4
  'auto_resize_user' => 'Solo utente', //cpg1.4
  'ascending' => 'ascendente', //cpg1.4
  'descending' => 'discendente', //cpg1.4
);

if (defined('ADMIN_PHP')) $lang_admin_data = array(
  'Impostazioni Generali',
  array('Nome Galleria', 'gallery_name', 0, 'f=index.htm&amp;as=admin_general_name&amp;ae=admin_general_name_end'), //cpg1.4
  array('Descrizione Galleria', 'gallery_description', 0, 'f=index.htm&amp;as=admin_general_description&amp;ae=admin_general_description_end'), //cpg1.4
  array('Email Amministratore', 'gallery_admin_email', 0, 'f=index.htm&amp;as=admin_general_email&amp;ae=admin_general_email_end'), //cpg1.4
  array('URL della cartella di Coppermine (no \'index.php\' o simili alla fine)', 'ecards_more_pic_target', 0, 'f=index.htm&amp;as=admin_general_coppermine-url&amp;ae=admin_general_coppermine-url_end'), //cpg1.4
  array('URL della Home page', 'home_target', 0, 'f=index.htm&amp;as=admin_general_home-url&amp;ae=admin_general_home-url_end'), //cpg1.4
  array('Consenti download dei preferiti in formato ZIP', 'enable_zipdownload', 1, 'f=index.htm&amp;as=admin_general_zip-download&amp;ae=admin_general_zip-download_end'), //cpg1.4
  array('Timezone relativa a GMT (ora corrente: ' . localised_date(-1, $comment_date_fmt) . ')','time_offset',0, 'f=index.htm&amp;as=admin_general_time-offset&amp;ae=admin_general_time-offset_end&amp;top=1'), //cpg1.4
  array('Abilita passwords criptate (non reversibile)','enable_encrypted_passwords',1, 'f=index.htm&amp;as=admin_general_encrypt_password_start&amp;ae=admin_general_encrypt_password_end&amp;top=1'), // cpg 1.4
  array('Abilita Icone di Aiuto (aiuto disponibile solo in inglese)','enable_help',9, 'f=index.htm&amp;as=admin_general_help&amp;ae=admin_general_help_end'), //cpg1.4
  array('Abilita keywords cliccabili nella ricerca','clickable_keyword_search',14, 'f=index.htm&amp;as=admin_general_keywords_start&amp;ae=admin_general_keywords_end'), //cpg1.4
  array('Abilita plugins', 'enable_plugins', 12, 'f=index.htm&amp;as=admin_general_enable-plugins&amp;ae=admin_general_enable-plugins_end'),  //cpg1.4
  array('Consenti banning degli IP non-routable (privati)', 'ban_private_ip', 1,  'f=index.htm&amp;as=admin_general_private-ip&amp;ae=admin_general_private-ip_end'), //cpg1.4
  array('Interfaccia batch-add navigabile', 'browse_batch_add', 1, 'f=index.htm&amp;as=admin_general_browsable_batch_add&amp;ae=admin_general_browsable_batch_add_end'), //cpg1.4

  'Lingua &amp; Impostazioni Set di Caratteri',
  array('Lingua', 'lang', 5, 'f=index.htm&amp;as=admin_language_language&amp;ae=admin_language_language_end'), //cpg1.4
  array('Passa a Inglese se non si trova la traduzione?', 'language_fallback', 1, 'f=index.htm&amp;as=admin_language_fallback&amp;ae=admin_language_fallback_end'), //cpg1.4
  array('Encoding Caratteri', 'charset', 4, 'f=index.htm&amp;as=admin_language_charset&amp;ae=admin_language_charset_end'), //cpg1.4
  array('Mostra Lista Lingue', 'language_list', 1, 'f=index.htm&amp;as=admin_language_list&amp;ae=admin_language_list_end'), //cpg1.4
  array('Mostra Bandiere Lingue', 'language_flags', 8, 'f=index.htm&amp;as=admin_language_flags&amp;ae=admin_language_flags_end&amp;top=1'), //cpg1.4
  array('Mostra &quot;reset&quot; in selezione lingua', 'language_reset', 1, 'f=index.htm&amp;as=admin_language_reset&amp;ae=admin_language_reset_end&amp;top=1'), //cpg1.4
  //array('Display previous/next on tabbed pages', 'previous_next_tab', 1), //cpg1.4

  'Impostazioni Tema',
  array('Tema', 'theme', 6, 'f=index.htm&amp;as=admin_theme_theme&amp;ae=admin_theme_theme_end'), //cpg1.4
  array('Mostra lista Temi', 'theme_list', 1, 'f=index.htm&amp;as=admin_theme_theme_list&amp;ae=admin_theme_theme_list_end'), //cpg1.4
  array('Mostra &quot;reset&quot; in selezione temi', 'theme_reset', 1, 'f=index.htm&amp;as=admin_theme_theme_reset&amp;ae=admin_theme_theme_reset_end'), //cpg1.4
  array('Mostra FAQ', 'display_faq', 1, 'f=index.htm&amp;as=admin_theme_faq&amp;ae=admin_theme_faq_end'), //cpg1.4
  array('Nome link menu personalizzato', 'custom_lnk_name', 0,'f=index.htm&amp;as=admin_theme_custom_lnk_name&amp;ae=admin_theme_custom_lnk_name_end'), //cpg1.4
  array('URL link menu personalizzato', 'custom_lnk_url', 0,'f=index.htm&amp;as=admin_language_custom_lnk_url&amp;ae=admin_language_custom_lnk_url_end'), //cpg1.4
  array('Mostra aiuto bbcode', 'show_bbcode_help', 1, 'f=index.htm&amp;as=admin_theme_bbcode&amp;ae=admin_theme_bbcode_end&amp;top=1'), //cpg1.4
  array('Mostra il vanity block nei temi definiti come XHTML e CSS compliant','vanity_block',1, 'f=index.htm&amp;as=vanity_block&amp;ae=vanity_block_end'), //cpg1.4
  array('Percorso per header personalizzato', 'custom_header_path', 0, 'f=index.htm&amp;as=admin_theme_include_path_start&amp;ae=admin_theme_include_path_end'), //cpg1.4
  array('Percorso per footer personalizzato', 'custom_footer_path', 0, 'f=index.htm&amp;as=admin_theme_include_path_start&amp;ae=admin_theme_include_path_end'), //cpg1.4

  'Visualizzazione Lista Album',
  array('Larghezza della tabella principale (pixels o %)', 'main_table_width', 0, 'f=index.htm&amp;as=admin_album_table-width&amp;ae=admin_album_table-width_end'), //cpg1.4
  array('Numero di livelli di categorie da mostrare', 'subcat_level', 0, 'f=index.htm&amp;as=admin_album_category-levels&amp;ae=admin_album_category-levels_end'), //cpg1.4
  array('Numero di Albums da mostrare', 'albums_per_page', 0, 'f=index.htm&amp;as=admin_album_number&amp;ae=admin_album_number_end'), //cpg1.4
  array('Numero di colonne per la lista Album', 'album_list_cols', 0, 'f=index.htm&amp;as=admin_album_columns&amp;ae=admin_album_columns_end'), //cpg1.4
  array('Dimensioni delle miniature in pixels', 'alb_list_thumb_size', 0, 'f=index.htm&amp;as=admin_album_thumbnail-size&amp;ae=admin_album_thumbnail-size_end'), //cpg1.4
  array('Contenuto della pagina principale', 'main_page_layout', 0, 'f=index.htm&amp;as=admin_album_list_content&amp;ae=admin_album_list_content_end'), //cpg1.4
  array('Mostra Miniature degli album al primo livello per le categorie','first_level',1, 'f=index.htm&amp;as=admin_album_first-level_thumbs&amp;ae=admin_album_first-level_thumbs_end'), //cpg1.4
  array('Elenca categorie alfabeticamente (invece che in modo personalizzato)','categories_alpha_sort',1, 'f=index.htm&amp;as=admin_album_list_alphasort_start&amp;ae=admin_album_list_alphasort_end'), //cpg1.4
  array('Mostra numero di files linkati','link_pic_count',1, 'f=index.htm&amp;as=admin_album_linked_files_start&amp;ae=admin_album_linked_files_end'), //cpg1.4

  'Visualizzazione Miniature',
  array('Numero di colonne nella pagina miniature', 'thumbcols', 0, 'f=index.htm&amp;as=admin_thumbnail_columns&amp;ae=admin_thumbnail_columns_end'), //cpg1.4
  array('Numero di righe nella pagina miniature', 'thumbrows', 0, 'f=index.htm&amp;as=admin_thumbnail_rows&amp;ae=admin_thumbnail_rows_end'), //cpg1.4
  array('Numero massimo di tabs da mostrare', 'max_tabs', 10, 'f=index.htm&amp;as=admin_thumbnail_tabs&amp;ae=admin_thumbnail_tabs_end'), //cpg1.4
  array('Mostra descrizione file (oltre al titolo) sotto la miniatura', 'caption_in_thumbview', 1, 'f=index.htm&amp;as=admin_thumbnail_display_caption&amp;ae=admin_thumbnail_display_caption_end'), //cpg1.4
  array('Mostra numero di viste sotto la miniatura', 'views_in_thumbview', 1, 'f=index.htm&amp;as=admin_thumbnail_display_views&amp;ae=admin_thumbnail_display_views_end'), //cpg1.4
  array('Mostra numero di commenti sotto la miniatura', 'display_comment_count', 1, 'f=index.htm&amp;as=admin_thumbnail_display_comments&amp;ae=admin_thumbnail_display_comments_end'), //cpg1.4
  array('Mostra nome utente sotto la miniatura', 'display_uploader', 1, 'f=index.htm&amp;as=admin_thumbnail_display_uploader&amp;ae=admin_thumbnail_display_uploader_end'), //cpg1.4
  //array('Display name of admin uploaders below the thumbnail', 'display_admin_uploader', 1, 'f=index.htm&amp;as=admin_thumbnail_display_admin_uploader&amp;ae=admin_thumbnail_display_admin_uploader_end'), //cpg1.4
  array('Mostra nome file sotto la miniatura', 'display_filename', 1, 'f=index.htm&amp;as=admin_thumbnail_display_filename&amp;ae=admin_thumbnail_display_filename_end'), //cpg1.4
  //array('Mostra descrizione album', 'alb_desc_thumb', 1, 'f=index.htm&amp;as=admin_thumbnail_display_description&amp;ae=admin_thumbnail_display_description_end'), //cpg1.4
  array('Ordinamento di default per i files', 'default_sort_order', 3, 'f=index.htm&amp;as=admin_thumbnail_default_sortorder&amp;ae=admin_thumbnail_default_sortorder_end'), //cpg1.4
  array('Numero minimo di voti per apparire tra i \'più votati\' ', 'min_votes_for_rating', 0, 'f=index.htm&amp;as=admin_thumbnail_minimum_votes&amp;ae=admin_thumbnail_minimum_votes_end'), //cpg1.4

  'Visualizzazione Immagini', //cpg1.4
  array('Larghezza della tabella per la visualizzazione (pixel o %)', 'picture_table_width', 0, 'f=index.htm&amp;as=admin_image_comment_table-width&amp;ae=admin_image_comment_table-width_end'), //cpg1.4
  array('Informazioni file visibili di default', 'display_pic_info', 1, 'f=index.htm&amp;as=admin_image_comment_info_visible&amp;ae=admin_image_comment_info_visible_end'), //cpg1.4
  array('Lunghezza massima descrizione', 'max_img_desc_length', 0, 'f=index.htm&amp;as=admin_image_comment_descr_length&amp;ae=admin_image_comment_descr_length_end'), //cpg1.4
  array('Numero massimo di caratteri in una parola', 'max_com_wlength', 0, 'f=index.htm&amp;as=admin_image_comment_chars_per_word&amp;ae=admin_image_comment_chars_per_word_end'), //cpg1.4
  array('Mostra film strip', 'display_film_strip', 1, 'f=index.htm&amp;as=admin_image_comment_filmstrip_toggle&amp;ae=admin_image_comment_filmstrip_toggle_end'), //cpg1.4
  array('Mostra nome file sotto le miniature nel film strip', 'display_film_strip_filename', 1, 'f=index.htm&amp;as=admin_image_comment_display_film_strip_filename&amp;ae=admin_image_comment_display_film_strip_filename_end'), //cpg1.4
  array('Numero di elementi nel film strip', 'max_film_strip_items', 0, 'f=index.htm&amp;as=admin_image_comment_filmstrip_number&amp;ae=admin_image_comment_filmstrip_number_end'), //cpg1.4
  array('Intervallo Slideshow in millisecondi (1 secondo = 1000 millisecondi)', 'slideshow_interval', 0, 'f=index.htm&amp;as=admin_image_comment_slideshow_interval&amp;ae=admin_image_comment_slideshow_interval_end'), //cpg1.4

  'Impostazioni Commenti', //cpg1.4
  array('Filtra parolacce nei commenti', 'filter_bad_words', 1, 'f=index.htm&amp;as=admin_image_comment_bad_words&amp;ae=admin_image_comment_bad_words_end'), //cpg1.4
  array('Consenti smiles nei commenti', 'enable_smilies', 1, 'f=index.htm&amp;as=admin_image_comment_smilies&amp;ae=admin_image_comment_smilies_end'), //cpg1.4
  array('Consenti più commenti consecutivi dello stesso utente sul medesimo file (disabilita protezione flood)', 'disable_comment_flood_protect', 1, 'f=index.htm&amp;as=admin_image_comment_flood&amp;ae=admin_image_comment_flood_end'), //cpg1.4
  array('Numero massimo di linee nel commento', 'max_com_lines', 0, 'f=index.htm&amp;as=admin_image_comment_lines&amp;ae=admin_image_comment_lines_end'), //cpg1.4
  array('Lunghezza massima di un commento', 'max_com_size', 0, 'f=index.htm&amp;as=admin_image_comment_length&amp;ae=admin_image_comment_length_end'), //cpg1.4
  array('Notifica admin dei commenti via email', 'email_comment_notification', 1, 'f=index.htm&amp;as=admin_image_comment_admin_notify&amp;ae=admin_image_comment_admin_notify_end'), //cpg1.4
  array('Ordinamento dei commenti', 'comments_sort_descending', 17, 'f=index.htm&amp;as=admin_comment_sort_start&amp;ae=admin_comment_sort_end'), //cpg1.4
  array('Prefisso per autori commenti anonimi', 'comments_anon_pfx', 0, 'f=index.htm&amp;as=comments_anon_pfx&amp;ae=comments_anon_pfx_end'), //cpg1.4

  'Impostazioni Files e Miniature',
  array('Qualità per files JPEG', 'jpeg_qual', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_jpeg_quality&amp;ae=admin_picture_thumbnail_jpeg_quality_end'), //cpg1.4
  array('Dimensione Max per la miniatura <a href="#notice2" class="clickable_option">**</a>', 'thumb_width', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max-dimension&amp;ae=admin_picture_thumbnail_max-dimension_end'), //cpg1.4
  array('Usa dimensione ( larghezza o altezza o dimensioni massime per le miniature ) <a href="#notice2" class="clickable_option">**</a>', 'thumb_use', 7, 'f=index.htm&amp;as=admin_picture_thumbnail_use-dimension&amp;ae=admin_picture_thumbnail_use-dimension_end'), //cpg1.4
  array('Crea immagini intermedie','make_intermediate',1, 'f=index.htm&amp;as=admin_picture_thumbnail_intermediate_toggle&amp;ae=admin_picture_thumbnail_intermediate_toggle_end'), //cpg1.4
  array('Altezza o Larghezza massime per le immagini/video intermedie <a href="#notice2" class="clickable_option">**</a>', 'picture_width', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_intermediate_dimension&amp;ae=admin_picture_thumbnail_intermediate_dimension_end'), //cpg1.4
  array('Dimensioni massime per files da uploadare (KB)', 'max_upl_size', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max_upload_size&amp;ae=admin_picture_thumbnail_max_upload_size_end'), //cpg1.4
  array('Larghezza o altezza massime per immagini/video da uploadare (pixels)', 'max_upl_width_height', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max_upload_dimension&amp;ae=admin_picture_thumbnail_max_upload_dimension_end'), //cpg1.4
  array('Ridimensionamento automatico immagini che sforano i limiti', 'auto_resize', 16, 'f=index.htm&amp;as=admin_picture_thumbnail_auto-resize&amp;ae=admin_picture_thumbnail_auto-resize_end'), //cpg1.4

  'Impostazioni avanzate Files e miniature',
  array('Gli Albums possono essere privati (Nota: se cambi da \'si\' a \'no\' ogni album attualmente privato diventerà pubblico)', 'allow_private_albums', 1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_private_toggle&amp;ae=admin_picture_thumb_advanced_private_toggle_end'), //cpg1.4
  array('Mostra icona per album privati agli ospiti','show_private',1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_private_icon_show&amp;ae=admin_picture_thumb_advanced_private_icon_show_end'), //cpg1.4
  array('caratteri proibiti nei nomi dei files', 'forbiden_fname_char',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_filename_forbidden_chars&amp;ae=admin_picture_thumb_advanced_filename_forbidden_chars_end'), //cpg1.4
  //array('Accepted file extensions for uploaded pictures', 'allowed_file_extensions',0, 'f=index.htm&amp;as=&amp;ae=_end'), //cpg1.4
  array('Tipi di immagini consentite', 'allowed_img_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_pic_extensions&amp;ae=admin_picture_thumb_advanced_pic_extensions_end'), //cpg1.4
  array('Tipi di filmato consentiti', 'allowed_mov_types',0, 'f=index.htm&amp;as=admin_thumbs_advanced_movie&amp;ae=admin_thumbs_advanced_movie_end'), //cpg1.4
  array('Autoplay filmati', 'media_autostart',1, 'f=index.htm&amp;as=admin_movie_autoplay&amp;ae=admin_movie_autoplay_end'), //cpg1.4
  array('Tipi di files audio consentiti', 'allowed_snd_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_audio_extensions&amp;ae=admin_picture_thumb_advanced_audio_extensions_end'), //cpg1.4
  array('Tipi di documenti consentiti', 'allowed_doc_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_doc_extensions&amp;ae=admin_picture_thumb_advanced_doc_extensions_end'), //cpg1.4
  array('Metodo di ridimensionamento immagini','thumb_method',2, 'f=index.htm&amp;as=admin_picture_thumb_advanced_resize_method&amp;ae=admin_picture_thumb_advanced_resize_method_end'), //cpg1.4
  array('Percorso a utility ImageMagick \'convert\' (esempio /usr/bin/X11/)', 'impath', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_im_path&amp;ae=admin_picture_thumb_advanced_im_path_end'), //cpg1.4
  //array('Allowed image types (only valid for ImageMagick)', 'allowed_img_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_allowed_imagetypes&amp;ae=admin_picture_thumb_advanced_allowed_imagetypes_end'), //cpg1.4
  array('Opzioni per riga di comando di ImageMagick', 'im_options', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_im_commandline&amp;ae=admin_picture_thumb_advanced_im_commandline_end'), //cpg1.4
  array('Leggi dati EXIF nei files JPEG', 'read_exif_data', 13, 'f=index.htm&amp;as=admin_picture_thumb_advanced_exif&amp;ae=admin_picture_thumb_advanced_exif_end'), //cpg1.4
  array('Leggi dati IPTC nei files JPEG', 'read_iptc_data', 1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_iptc&amp;ae=admin_picture_thumb_advanced_iptc_end'), //cpg1.4
  array('Cartella dell\'album <a href="#notice1" class="clickable_option">*</a>', 'fullpath', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_albums_dir&amp;ae=admin_picture_thumb_advanced_albums_dir_end'), //cpg1.4
  array('Cartella per files utente <a href="#notice1" class="clickable_option">*</a>', 'userpics', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_userpics_dir&amp;ae=admin_picture_thumb_advanced_userpics_dir_end'), //cpg1.4
  array('Prefisso per immagini intermedie <a href="#notice1" class="clickable_option">*</a>', 'normal_pfx', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_intermediate_prefix&amp;ae=admin_picture_thumb_advanced_intermediate_prefix_end'), //cpg1.4
  array('Prefisso per le miniature <a href="#notice1" class="clickable_option">*</a>', 'thumb_pfx', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_thumbs_prefix&amp;ae=admin_picture_thumb_advanced_thumbs_prefix_end'), //cpg1.4
  array('CHMOD di default per le cartelle', 'default_dir_mode', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_chmod_folder&amp;ae=admin_picture_thumb_advanced_chmod_folder_end'), //cpg1.4
  array('CHMOD di default per i files', 'default_file_mode', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_chmod_files&amp;ae=admin_picture_thumb_advanced_chmod_files_end'), //cpg1.4

  'Impostazioni utente',
  array('Consenti nuove registrazioni', 'allow_user_registration', 1, 'f=index.htm&amp;as=admin_allow_registration&amp;ae=admin_allow_registration_end'), //cpg1.4
  array('Consenti accesso ad utenti che non hanno effettuato il login (ospiti o anonimi)', 'allow_unlogged_access', 1, 'f=index.htm&amp;as=admin_allow_unlogged_access&amp;ae=admin_allow_unlogged_access_end'), //cpg1.4
  array('Richiesta autenticazione via email per nuove registrazioni', 'reg_requires_valid_email', 1, 'f=index.htm&amp;as=admin_registration_verify&amp;ae=admin_registration_verify_end'), //cpg1.4
  array('Notifica admin di nuove registrazioni via email', 'reg_notify_admin_email', 1, 'f=index.htm&amp;as=admin_registration_notify&amp;ae=admin_registration_notify_end'), //cpg1.4
  array('Attivazione Admin delle registrazioni', 'admin_activation', 1, 'f=index.htm&amp;as=admin_activation&amp;ae=admin_activation_end'),  //cpg1.4
  array('Consenti a due utenti di condividere lo stesso indirizzo email', 'allow_duplicate_emails_addr', 1, 'f=index.htm&amp;as=admin_allow_duplicate_emails_addr&amp;ae=admin_allow_duplicate_emails_addr_end'), //cpg1.4
  array('Notifica Admin di files in attesa di approvazione', 'upl_notify_admin_email', 1, 'f=index.htm&amp;as=admin_approval_notify&amp;ae=admin_approval_notify_end'), //cpg1.4
  array('Consenti agli utenti di visualizzare la lista utenti', 'allow_memberlist', 1, 'f=index.htm&amp;as=admin_user_memberlist&amp;ae=admin_user_memberlist_end'), //cpg1.4
  array('Consenti agli utenti di modificare il proprio indirizzo email nel profilo', 'allow_email_change', 1, 'f=index.htm&amp;as=admin_user_allow_email_change&amp;ae=admin_user_allow_email_change_end'), //cpg1.4
  array('Consenti agli utenti di mantenere il controllo delle loro immagini nelle gallerie pubbliche', 'users_can_edit_pics', 1, 'f=index.htm&amp;as=admin_user_editpics_public_start&amp;ae=admin_user_editpics_public_end'), //cpg1.4
  array('Numero di login falliti consentiti prima del ban temporaneo (per evitare attacchi brute force)', 'login_threshold', 0, 'f=index.htm&amp;as=admin_user_login_start&amp;ae=admin_user_login_end'), //cpg1.4
  array('Durata ban temporaneo dopo login falliti', 'login_expiry', 0, 'f=index.htm&amp;as=admin_user_login_start&amp;ae=admin_user_login_end'), //cpg1.4
  array('Abilita Report ad Admin', 'report_post', 1, 'f=index.htm&amp;as=admin_user_enable_report&amp;ae=admin_user_enable_report_end'),  //cpg1.4

// custom profile fields,  //cpg1.4
  'Profili personalizzati per profilo utente (lasciare vuoto se inutilizzato).
  Utilizzare Profilo 6 per lunghe descrizioni come le biografie', //cpg1.4
  array('Profilo 1 ', 'user_profile1_name', 0, 'f=index.htm&amp;as=admin_custom&amp;ae=admin_custom_end'), //cpg1.4
  array('Profilo 2 ', 'user_profile2_name', 0), //cpg1.4
  array('Profilo 3 ', 'user_profile3_name', 0), //cpg1.4
  array('Profilo 4 ', 'user_profile4_name', 0), //cpg1.4
  array('Profilo 5 ', 'user_profile5_name', 0), //cpg1.4
  array('Profilo 6 ', 'user_profile6_name', 0), //cpg1.4

  'Campi personalizzabili per descrizione immagine (lasciare vuoto se inutilizzato)',
  array('Campo 1', 'user_field1_name', 0, 'f=index.htm&amp;as=admin_custom_image&amp;ae=admin_custom_image_end'), //cpg1.4
  array('Campo 2', 'user_field2_name', 0),
  array('Campo 3', 'user_field3_name', 0),
  array('Campo 4', 'user_field4_name', 0),

  'Impostazioni Cookies',
  array('Nome Cookie', 'cookie_name', 0, 'f=index.htm&amp;as=admin_cookie_name&amp;ae=admin_cookie_name_end'), //cpg1.4
  array('Percorso Cookie', 'cookie_path', 0, 'f=index.htm&amp;as=admin_cookie_path&amp;ae=admin_cookie_path_end'), //cpg1.4

  'Impostazioni Email  (di solito nulla deve essere cambiato; lasciare tutti i campi vuoti se insicuri)', //cpg1.4
  array('SMTP Host (se lasciato vuoto verrà utilizzato sendmail)', 'smtp_host', 0, 'f=index.htm&amp;as=admin_email&amp;ae=admin_email_end'), //cpg1.4
  array('SMTP Username', 'smtp_username', 0), //cpg1.4
  array('SMTP Password', 'smtp_password', 0), //cpg1.4

  'Statistiche e Logging', //cpg1.4
  array('Modo di Logging <a href="#notice3" class="clickable_option">***</a>', 'log_mode', 11, 'f=index.htm&amp;as=admin_logging_log_mode&amp;ae=admin_logging_log_mode_end'), //cpg1.4
  array('Log ecards', 'log_ecards', 1, 'f=index.htm&amp;as=admin_general_log_ecards&amp;ae=admin_general_log_ecards_end'), //cpg1.4
  array('Mantieni statistiche dettagliate per i voti','vote_details',1, 'f=index.htm&amp;as=admin_logging_votedetails&amp;ae=admin_logging_votedetails_end'), //cpg1.4
  array('Mantieni statistiche dettagliate per le viste','hit_details',1, 'f=index.htm&amp;as=admin_logging_hitdetails&amp;ae=admin_logging_hitdetails_end'), //cpg1.4

  'Impostazioni Manutenzione', //cpg1.4
  array('Abilita debug mode', 'debug_mode', 9, 'f=index.htm&amp;as=debug_mode&amp;ae=debug_mode_end'), //cpg1.4
  array('Mostra avvisi in debug mode', 'debug_notice', 1, 'f=index.htm&amp;as=admin_misc_debug_notices&amp;ae=admin_misc_debug_notices_end'), //cpg1.4
  array('La Galleria è offline', 'offline', 1, 'f=index.htm&amp;as=admin_general_offline&amp;ae=admin_general_offline_end'), //cpg1.4
);


// ------------------------------------------------------------------------- //
// File db_ecard.php
// ------------------------------------------------------------------------- //

if (defined('DB_ECARD_PHP')) $lang_db_ecard_php = array(
  'title' => 'Ecards Inviate',
  'ecard_sender' => 'Mittente',
  'ecard_recipient' => 'Destinatario',
  'ecard_date' => 'Data',
  'ecard_display' => 'Mostra ecard',
  'ecard_name' => 'Nome',
  'ecard_email' => 'Email',
  'ecard_ip' => 'IP #',
  'ecard_ascending' => 'ascendente',
  'ecard_descending' => 'discendente',
  'ecard_sorted' => 'Ordinamento',
  'ecard_by_date' => 'per data',
  'ecard_by_sender_name' => 'per nome mittente',
  'ecard_by_sender_email' => 'per email mittente',
  'ecard_by_sender_ip' => 'per IP mittente',
  'ecard_by_recipient_name' => 'per nome destinatario',
  'ecard_by_recipient_email' => 'per email destinatario',
  'ecard_number' => 'mostra record %s a %s di %s',
  'ecard_goto_page' => 'vai a pagina',
  'ecard_records_per_page' => 'Records per pagina',
  'check_all' => 'Seleziona Tutti',
  'uncheck_all' => 'Deseleziona Tutti',
  'ecards_delete_selected' => 'Elimina ecards selezionate',
  'ecards_delete_confirm' => 'Sei sicuro di voler cancellare questi records? Spunta la casella!',
  'ecards_delete_sure' => 'Sono sicuro',
);


// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
  'empty_name_or_com' => 'Devi inserire il tuo nome e un commento',
  'com_added' => 'Il tuo commento è stato aggiunto',
  'alb_need_title' => 'Devi inserire un titolo per l\'album !',
  'no_udp_needed' => 'Nessun aggiornamento necessario.',
  'alb_updated' => 'Album Aggiornato',
  'unknown_album' => 'L\'Album selezionato non esiste o non hai i permessi per effettuare uploads in questo Album',
  'no_pic_uploaded' => 'Nessun file caricato !<br /><br />Se veramente hai selezionato un file per l\'upload, controlla che il server consenta gli uploads...',
  'err_mkdir' => 'Impossibile creare la cartella %s !',
  'dest_dir_ro' => 'La cartella di destinazione %s non è scrivibile dallo script !',
  'err_move' => 'Impossibile spostare %s in %s !',
  'err_fsize_too_large' => 'La dimensione del file caricato è troppo grande (il massimo consentito è %s x %s) !', //obsolete since cpg1.3 - consider removal in cpg1.4 once upload.php has been overhauled
  'err_imgsize_too_large' => 'La dimensione del file caricato è troppo grande (il massimo consentito è %s KB) !', //obsolete since cpg1.3 - consider removal in cpg1.4 once upload.php has been overhauled
  'err_invalid_img' => 'Il file caricato non è un file di immagine valido !',
  'allowed_img_types' => 'Puoi caricare solo %s immagini.',
  'err_insert_pic' => 'Il file \'%s\' non può essere inserito nell\'album ',
  'upload_success' => 'File caricato con successo.<br /><br />Sarà visibile dopo l\'approvazione di un Admin.',
  'notify_admin_email_subject' => '%s - Notifica Upload',
  'notify_admin_email_body' => 'Una nuova immagine è stata inserita da %s ed è richiesta la tua approvazione. Visita %s',
  'info' => 'Informazione',
  'com_added' => 'Commento aggiunto',
  'alb_updated' => 'Album aggiornato',
  'err_comment_empty' => 'Il tuo commento è vuoto !',
  'err_invalid_fext' => 'Solo i files con le seguenti estensioni sono ammessi : <br /><br />%s.',
  'no_flood' => 'Spiacente, ma sei l\'autore dell\'ultimo commento postato per questo file<br /><br />Modifica il commento precedente',
  'redirect_msg' => 'Stai per essere indirizzato.<br /><br /><br />Clicca \'CONTINUA\' se la pagina non si aggiorna automaticamente',
  'upl_success' => 'File aggiunto con successo',
  'email_comment_subject' => 'Commento postato su Coppermine Photo Gallery',
  'email_comment_body' => 'Qualcuno ha inserito un commento nella tua galleria. Vedilo su',
  'album_not_selected' => 'Album non selezionato', //cpg1.4
  'com_author_error' => 'Un utente registrato sta usando questo nickname, esegui il login o usane un altro', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
  'caption' => 'Didascalia',
  'fs_pic' => 'Immagine Full Size',
  'del_success' => 'cancellato con successo',
  'ns_pic' => 'Immagine Normale',
  'err_del' => 'non può essere cancellato',
  'thumb_pic' => 'miniatura',
  'comment' => 'commento',
  'im_in_alb' => 'immagine nell\'album',
  'alb_del_success' => 'Album &laquo;%s&raquo; cancellato', //cpg1.4
  'alb_mgr' => 'Album Manager',
  'err_invalid_data' => 'Dati non validi ricevuti in \'%s\'',
  'create_alb' => 'Creazione album \'%s\'',
  'update_alb' => 'Aggiornamento album \'%s\' con titolo \'%s\' e indice \'%s\'',
  'del_pic' => 'Cancella file',
  'del_alb' => 'Cancella album',
  'del_user' => 'Cancella utente',
  'err_unknown_user' => 'L\'utente selezionato non esiste !',
  'err_empty_groups' => 'Tabella del gruppo inesistente o vuota!', //cpg1.4
  'comment_deleted' => 'Commento cancellato con successo',
  'npic' => 'Immagine', //cpg1.4
  'pic_mgr' => 'Modifica Immagine', //cpg1.4
  'update_pic' => 'Aggiornamento immagine \'%s\' con nome file \'%s\' e indice \'%s\'', //cpg1.4
  'username' => 'Nome Utente', //cpg1.4
  'anonymized_comments' => '%s commento(i) anonimizzato(i)', //cpg1.4
  'anonymized_uploads' => '%s upload(s) pubblico(i) anonimizzato(i)', //cpg1.4
  'deleted_comments' => '%s commento(i) cancellato(i)', //cpg1.4
  'deleted_uploads' => '%s upload(s) pubblico(i) cancellato(i)', //cpg1.4
  'user_deleted' => 'utente %s cancellato', //cpg1.4
  'activate_user' => 'Attiva utente', //cpg1.4
  'user_already_active' => 'Account già attivo', //cpg1.4
  'activated' => 'Attivato', //cpg1.4
  'deactivate_user' => 'Disattiva utente', //cpg1.4
  'user_already_inactive' => 'Account già inattivo', //cpg1.4
  'deactivated' => 'Disattivato', //cpg1.4
  'reset_password' => 'Reset password(s)', //cpg1.4
  'password_reset' => 'Password reset to %s', //cpg1.4
  'change_group' => 'Cambia gruppo principale', //cpg1.4
  'change_group_to_group' => 'Cambiamento da %s a %s', //cpg1.4
  'add_group' => 'Aggiungi gruppo secondario', //cpg1.4
  'add_group_to_group' => 'Aggiunta dell\'utente %s al gruppo %s. Adesso è membro di %s come gruppo primario e di %s come secondari(o).', //cpg1.4
  'status' => 'Stato', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File displayecard.php
// ------------------------------------------------------------------------- //

if (defined('DISPLAYECARD_PHP')) {

$lang_displayecard_php = array(
  'invalid_data' => 'I dati per l\'Ecard alla quale tenti di accedere sono stati corrotti dal client Email. Controlla che il link sia completo.', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File displayimage.php
// ------------------------------------------------------------------------- //

if (defined('DISPLAYIMAGE_PHP')){

$lang_display_image_php = array(
  'confirm_del' => 'Sicuro di voler CANCELLARE questo file ? \\nAnche i commenti saranno cancellati.', //js-alert
  'del_pic' => 'CANCELLA FILE',
  'size' => '%s x %s pixels',
  'views' => '%s volte',
  'slideshow' => 'Slideshow',
  'stop_slideshow' => 'STOP SLIDESHOW',
  'view_fs' => 'Clicca per l\'immagine full size',
  'edit_pic' => 'Modifica informazioni file', //cpg1.4
  'crop_pic' => 'Ritaglia e Ruota',
  'set_player' => 'Cambia Player',
);

$lang_picinfo = array(
  'title' =>'Informazioni File',
  'Filename' => 'Nome file',
  'Album name' => 'Nome Album',
  'Rating' => 'Valutazione (%s voti)',
  'Keywords' => 'Keywords',
  'File Size' => 'Dimensione file',
  'Date Added' => 'Aggiunto il', //cpg1.4
  'Dimensions' => 'Dimensioni',
  'Displayed' => 'Visto',
  'URL' => 'URL', //cpg1.4
  'Make' => 'Marca', //cpg1.4
  'Model' => 'Modello', //cpg1.4
  'DateTime' => 'Ora e data', //cpg1.4
  'DateTimeOriginal' => 'Ora e data di scatto', //cpg1.4
  'ISOSpeedRatings'=>'ISO', //cpg1.4
  'MaxApertureValue' => 'Apertura Diaframma', //cpg1.4
  'FocalLength' => 'Lunghezza Focale', //cpg1.4
  'Comment' => 'Commento',
  'addFav'=>'Aggiungi ai preferiti',
  'addFavPhrase'=>'Preferiti',
  'remFav'=>'Rimuovi dai preferiti',
  'iptcTitle'=>'Titolo IPTC',
  'iptcCopyright'=>'Copyright IPTC',
  'iptcKeywords'=>'Keywords IPTC',
  'iptcCategory'=>'Categoria IPTC',
  'iptcSubCategories'=>'Sottocategoria IPTC',
  'ColorSpace' => 'Spazio Colore', //cpg1.4
  'ExposureProgram' => 'Programma di esposizione', //cpg1.4
  'Flash' => 'Flash', //cpg1.4
  'MeteringMode' => 'Modalità di ripresa', //cpg1.4
  'ExposureTime' => 'Tempo d\'esposizione', //cpg1.4
  'ExposureBiasValue' => 'Bias Esposizione', //cpg1.4
  'ImageDescription' => ' Descrizione immagine', //cpg1.4
  'Orientation' => 'Orientamento', //cpg1.4
  'xResolution' => 'Risoluzione X', //cpg1.4
  'yResolution' => 'Risoluzione Y', //cpg1.4
  'ResolutionUnit' => 'Unità di risoluzione', //cpg1.4
  'Software' => 'Software', //cpg1.4
  'YCbCrPositioning' => 'Posizionamento YCbCr', //cpg1.4
  'ExifOffset' => 'Exif Offset', //cpg1.4
  'IFD1Offset' => 'IFD1 Offset', //cpg1.4
  'FNumber' => 'FNumber', //cpg1.4
  'ExifVersion' => 'Versione Exif', //cpg1.4
  'DateTimeOriginal' => 'Ora e data Originale', //cpg1.4
  'DateTimedigitized' => 'Ora e data digitale', //cpg1.4
  'ComponentsConfiguration' => 'Configurazione componenti', //cpg1.4
  'CompressedBitsPerPixel' => 'Bits Compressi Per Pixel', //cpg1.4
  'LightSource' => 'Sorgente Luminosa', //cpg1.4
  'ISOSetting' => 'Impostazioni ISO', //cpg1.4
  'ColorMode' => 'Modo Colore', //cpg1.4
  'Quality' => 'Qualità', //cpg1.4
  'ImageSharpening' => 'Sharpening Immagine', //cpg1.4
  'FocusMode' => 'Modalità di messa a fuoco', //cpg1.4
  'FlashSetting' => 'Impostazioni Flash', //cpg1.4
  'ISOSelection' => 'Selezione ISO', //cpg1.4
  'ImageAdjustment' => 'Rifinitura immagine', //cpg1.4
  'Adapter' => 'Adattatore', //cpg1.4
  'ManualFocusDistance' => 'Distanza di messa a fuoco manuale', //cpg1.4
  'DigitalZoom' => 'Zoom Digitale', //cpg1.4
  'AFFocusPosition' => 'Posizione AF', //cpg1.4
  'Saturation' => 'Saturazione', //cpg1.4
  'NoiseReduction' => 'Riduzione Rumore', //cpg1.4
  'FlashPixVersion' => 'Versione Flash Pix', //cpg1.4
  'ExifImageWidth' => 'Larghezza Immagine Exif', //cpg1.4
  'ExifImageHeight' => 'Altezza Immagine Exif', //cpg1.4
  'ExifInteroperabilityOffset' => 'Interoperabilità Offset Exif', //cpg1.4
  'FileSource' => 'Sorgente File', //cpg1.4
  'SceneType' => 'Tipo di Scena', //cpg1.4
  'CustomerRender' => 'Customer Render', //cpg1.4
  'ExposureMode' => 'Modalità di esposizione', //cpg1.4
  'WhiteBalance' => 'Bilanciamento del Bianco', //cpg1.4
  'DigitalZoomRatio' => 'Ratio Zoom Digitale', //cpg1.4
  'SceneCaptureMode' => 'Modalità di cattura scena', //cpg1.4
  'GainControl' => 'Controllo Guadagno', //cpg1.4
  'Contrast' => 'Contrasto', //cpg1.4
  'Saturation' => 'Saturazione', //cpg1.4
  'Sharpness' => 'Sharpness', //cpg1.4
  'ManageExifDisplay' => 'Gestione Display Exif', //cpg1.4
  'submit' => 'Invia', //cpg1.4
  'success' => 'Informazioni aggiornate con successo.', //cpg1.4
  'details' => 'Dettagli', //cpg1.4
);

$lang_display_comments = array(
  'OK' => 'OK',
  'edit_title' => 'Modifica questo commento',
  'confirm_delete' => 'Sicuro di voler cancellare questo commento ?', //js-alert
  'add_your_comment' => 'Aggiungi il tuo commento',
  'name'=>'Nome',
  'comment'=>'Commento',
  'your_name' => 'Anonimo',
  'report_comment_title' => 'Segnala questo commento all\'amministratore', //cpg1.4
);

$lang_fullsize_popup = array(
  'click_to_close' => 'Clicca sull\'immagine per chiudere questa finestra',
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
  'title' => 'Invia un E-card',
  'invalid_email' => '<font color="red"><b>Attenzione</b></font>: indirizzo email non valido:', //cpg1.4
  'ecard_title' => 'Una e-card da %s per te',
  'error_not_image' => 'Solo le immagini possono essere inviate come ecard.',
  'view_ecard' => 'Link alternativo se la e-card non viene visualizzata correttamente', //cpg1.4
  'view_ecard_plaintext' => 'Per vedere la ecard, copia e incolla questo url nella barra degli indirizzi del tuo browser:', //cpg1.4
  'view_more_pics' => 'Visualizza più immagini !', //cpg1.4
  'send_success' => 'La tua ecard è stata inviata',
  'send_failed' => 'Spiacente ma il server non può inviare la e-card...',
  'from' => 'Da',
  'your_name' => 'Tuo nome',
  'your_email' => 'Tuo indirizzo email',
  'to' => 'A',
  'rcpt_name' => 'Nome destinatario',
  'rcpt_email' => 'Indirizzo email destinatario',
  'greetings' => 'Intestazione', //cpg1.4
  'message' => 'Messaggio', //cpg1.4
  'ecards_footer' => 'Inviato da %s da IP %s alle %s (Orario Galleria)', //cpg1.4
  'preview' => 'Anteprima ecard', //cpg1.4
  'preview_button' => 'Anteprima', //cpg1.4
  'submit_button' => 'Invia ecard', //cpg1.4
  'preview_view_ecard' => 'Questo sarà un link alternativo alla ecard una volta che verr&agrqave; generata. Non funzionerà per le anteprime.', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File report_file.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('REPORT_FILE_PHP') || defined('DISPLAYREPORT_PHP')) $lang_report_php =array(
  'title' => 'Segnala all\'amministratore', //cpg1.4
  'invalid_email' => '<b>Attenzione</b> : indirizzo email non valido !', //cpg1.4
  'report_subject' => 'Segnalazione da %s nella galleria %s', //cpg1.4
  'view_report' => 'Link alternativo se la segnalazione non viene visualizzata correttamente', //cpg1.4
  'view_report_plaintext' => 'Per vedere la segnalazione, copia e incolla questo url nella barra degli indirizzi del tuo browser:', //cpg1.4
  'view_more_pics' => 'Galleria', //cpg1.4
  'send_success' => 'Segnalazione inviata', //cpg1.4
  'send_failed' => 'Spiacente ma il server non può inviare la tua segnalazione...', //cpg1.4
  'from' => 'Da', //cpg1.4
  'your_name' => 'Tuo nome', //cpg1.4
  'your_email' => 'Tuo indirizzo email', //cpg1.4
  'to' => 'A', //cpg1.4
  'administrator' => 'Admin/Mod', //cpg1.4
  'subject' => 'Soggetto', //cpg1.4
  'comment_field_name' => 'Segnalazione messaggio di "%s"', //cpg1.4
  'reason' => 'Ragione', //cpg1.4
  'message' => 'Messaggio', //cpg1.4
  'report_footer' => 'Inviato da %s da IP %s alle %s (Orario Galleria)', //cpg1.4
  'obscene' => 'osceno', //cpg1.4
  'offensive' => 'offensivo', //cpg1.4
  'misplaced' => 'off-topic/fuori luogo', //cpg1.4
  'missing' => 'mancante', //cpg1.4
  'issue' => 'errore/impossibile visualizzare', //cpg1.4
  'other' => 'altro', //cpg1.4
  'refers_to' => 'Segnalazione File si riferisce a', //cpg1.4
  'reasons_list_heading' => 'Ragione della segnalazione:', //cpg1.4
  'no_reason_given' => 'Nessuna ragione indicata', //cpg1.4
  'go_comment' => 'Vai al commento', //cpg1.4
  'view_comment' => 'Visualizza segnalazione completa con commento', //cpg1.4
  'type_file' => 'file', //cpg1.4
  'type_comment' => 'commento', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
  'pic_info' => 'Info File',
  'album' => 'Album',
  'title' => 'Titolo',
  'filename' => 'Nome File', //cpg1.4
  'desc' => 'Descrizione',
  'keywords' => 'Keywords',
  'new_keyword' => 'Nuove keyword', //cpg1.4
  'new_keywords' => 'Nuove keywords trovate', //cpg1.4
  'existing_keyword' => 'Keywords esistenti', //cpg1.4
  'pic_info_str' => '%s &times; %s - %s KB - %s viste - %s voti',
  'approve' => 'Approva file',
  'postpone_app' => 'Posticipa approvazione',
  'del_pic' => 'Cancella file',
  'del_all' => 'Cancella TUTTI i files', //cpg1.4
  'read_exif' => 'Rileggi informazioni EXIF',
  'reset_view_count' => 'Azzera contatore viste',
  'reset_all_view_count' => 'Azzera TUTTI i contatori viste', //cpg1.4
  'reset_votes' => 'Azzera voti',
  'reset_all_votes' => 'Azzera TUTTI i voti', //cpg1.4
  'del_comm' => 'Cancella commenti',
  'del_all_comm' => 'Cancella TUTTI i commenti', //cpg1.4
  'upl_approval' => 'Approvazione Upload', //cpg1.4
  'edit_pics' => 'Modifica files',
  'see_next' => 'Visualizza files successivi',
  'see_prev' => 'Visualizza files precedenti',
  'n_pic' => '%s files',
  'n_of_pic_to_disp' => 'Numero di files da visualizzare',
  'apply' => 'Applica Modifice',
  'crop_title' => 'Coppermine Picture Editor',
  'preview' => 'Anteprima',
  'save' => 'Salva immagine',
  'save_thumb' =>'Salva come miniatura',
  'gallery_icon' => 'Imposta come icona personale', //cpg1.4
  'sel_on_img' =>'la selezione deve essere interamente sull\'immagine!', //js-alert
  'album_properties' =>'Proprietà Album', //cpg1.4
  'parent_category' =>'Categoria radice', //cpg1.4
  'thumbnail_view' =>'Vista miniature', //cpg1.4
  'select_unselect' =>'Seleziona/Deseleziona tutti', //cpg1.4
  'file_exists' => "Il file di destinazione '%s' esiste già.", //cpg1.4
  'rename_failed' => "Impossibile rinominare '%s' in '%s'.", //cpg1.4
  'src_file_missing' => "File sorgente '%s' mancante.", // cpg 1.4
  'mime_conv' => "Impossibile convertire il file '%s' in '%s'",//cpg1.4
  'forb_ext' => 'Estensione file non consentita.',//cpg1.4
);

// ------------------------------------------------------------------------- //
// File faq.php
// ------------------------------------------------------------------------- //

if (defined('FAQ_PHP')) $lang_faq_php = array(
  'faq' => 'Frequently Asked Questions',
  'toc' => 'Indice dei contenuti',
  'question' => 'Domanda: ',
  'answer' => 'Risposta: ',
);

if (defined('FAQ_PHP')) $lang_faq_data = array(
  'FAQ Generiche',
  array('Perchè mi devo registrare?', 'La registrazione potrebbe anche non essere richiesta dall\'amministratore. La registrazione fornisce ad un utente funzionalità aggiuntive quali la possibilità di effettuare uploads, tenere una lista di preferiti, valutare le immagini e inserire commenti, etc...', 'allow_user_registration', '1'),
  array('Come posso registrarmi?', 'vai su &quot;Registrazione&quot; e compila tutti i campi richiesti (e quelli opzionali se vuoi).<br />Se l\'amministratore ha abilitato la notifica via email, allora dopo aver inviato la registrazione dovresti ricevere un messaggio email all\'indirizzo da te indicato, con le istruzioni su come attivare l\'utenza. La tua utenza deve essere attivata per poter effettuare il login.', 'allow_user_registration', '1'), //cpg1.4
  array('Come eseguo il login?', 'Vai su &quot;Login&quot;, inserisci username e password e spunta ;Ricordami&quot; così sarai riconosciuto dal sito in seguito.<br /><b>IMPORTANTE: I Cookies devono essere abilitati e il cookie di questo sito non deve essere cancellato per poter usare la funzione &quot;Ricordami&quot;.</b>', 'offline', 0),
  array('Perchè non posso effettuare il login?', 'Ti sei registrato e hai seguito il link inviatoti via email? Il link attiverà il tuo account. Per altri problemi di login contattare l\'amministratore.', 'offline', 0),
  array('Cosa fare se dimentico la password?', 'Se nel sito è contenuto un link &quot;password dimenticata&quot; allora usalo. Altrimenti contatta l\'amministratore per una nuova password.', 'offline', 0),
  //array('What if I changed my email address?', 'Just simply login and change your email address through &quot;Profile&quot;', 'offline', 0),
  array('Come salvo le immagini nei &quot;Preferiti&quot;?', 'Clicca su un\'immagine e clicca sul link &quot;info immagine&quot; (<img src="images/info.gif" width="16" height="16" border="0" alt="Info immagine" />); scorri verso il basso le informazioni sull\'immagine e clicca su &quot;Aggiungi ai preferiti&quot;.<br />L\'amministratore potrebbe aver attivato le &quot;Informazioni sull\'immagine&quot; di default.<br />IMPORTANTE: I Cookies devono essere abilitati e il cookie di questo sito non deve essere cancellato.', 'offline', 0),
  array('Come valuto un file?', 'Clicca sulla miniatura, vai in fondo e scegli una valutazione.', 'offline', 0),
  array('Come inserisco un commento per un\'immagine?', 'Clicca su una miniatura vai in fondo e posta un commento.', 'offline', 0),
  array('Come aggiungo un file?', 'Vai su &quot;Carica file&quot; e seleziona l\'album nel quale vuoi eseguire l\'upload. Clicca &quot;Sfoglia,&quot; trova il file da caricare e clicca &quot;Apri.&quot; Aggiungi un titolo e una descrizione se vuoi. Clicca  &quot;invia&quot;.<br /><br />In alternativa, se sei utente di <b>Windows XP</b>, puoi caricare più files contemporaneamente direttamente dai tuoi album privati usando il tool XP Publishing wizard.<br />Per istruzioni su come farlo, e dove trovare il file di registro corretto, clicca <a href="xp_publish.php">qui.</a>', 'allow_private_albums', 1), //cpg1.4
  array('Dove carico le immagini?', 'Sarai in grado di caricare un file in uno dei tuoi albums in &quot;Galleria Personale&quot;. L\'amministratore potrebbe anche consentirti di caricare un file in uno o più albums della galleria principale.', 'allow_private_albums', 0),
  array('Di che tipo e di che dimensione possono esser i files caricati?', 'Le dimensioni e il tipo (jpg, png, etc.) sono a discrezione dell\'amministratore.', 'offline', 0),
  array('Come posso creare, rinominare o cancellare un album nella &quot;Galleria Personale&quot;?', 'Dovresti già essere in &quot;Modo Admin&quot;<br />Vai su &quot;Crea/Organizza Albums&quot; e clicca &quot;Nuovo&quot;. Cambia &quot;Nuovo Album&quot; nel nome che desideri.<br />Puoi anche rinominare qualsiasi album nella tua galleria.<br />Clicca &quot;Applica Modifiche&quot;.', 'allow_private_albums', 0),
  array('Come posso impedire agli utenti di visualizzare i miei albums?', 'Dovresti già essere in &quot;Modo Admin&quot;<br />Vai su &quot;Modifica Albums&quot;. Nella barra &quot;Aggiorna Album&quot;, seleziona l\'album che intendi modificare.<br />Lì potrai cambiare nome, descrizione, miniatura, impedire la visualizzazione e i commenti.<br />Clicca &quot;Aggiorna Album&quot;.', 'allow_private_albums', 0),
  array('Come visualizzo le gallerie degli altri utenti?', 'Vai su &quot;Lista Album&quot; e seleziona &quot;Gallerie Utenti&quot;.', 'allow_private_albums', 0),
  array('Cosa sono i cookies?', 'I Cookies sono files di puro testo contenenti i dati inviati da un sito web al tuo computer.<br />I Cookies di solito consentono di lasciare il sito e di tornarci senza dover nuovamente eseguire il login, e altre cose.', 'offline', 0),
  array('Dove posso trovare questa piattaforma per il mio sito?', 'Coppermine è una Galleria multimediale assolutamente free, rilasciata sotto le licenze GNU GPL. Ricca di funzioni e portata su varie piattaforme. Visita la <a href="http://coppermine.sf.net/">Home Page di Coppermine</a> per saperne di più o per scaricarla.', 'offline', 0),

  'Navigazione del sito',
  array('Che cos\'è la &quot;Lista Album&quot;?', 'Questo ti mostrerà l\'intera categoria nella quale sei, con un link per ogni album. Se non sei in una categoria, ti mostrerà l\'intera galleria con un link per ogni categoria. Le miniature possono essere un link alle categorie.', 'offline', 0),
  array('Che cos\'è la &quot;Galleria Personale&quot;?', 'Questa funzione consente agli utenti di creare le proprie gallerie e di creare, cancellare o modificare gli albums così come la possibilità di effettuare uploads negli stessi.', 'allow_private_albums', 1), //cpg1.4
  array('Qual è la differenza tra ;Modo Admin&quot; e &quot;Modo utente&quot;?', 'Questa funzione, quando in Modo Admin, consente ad un utente di modificare le proprie gallerie (e anche quelle degli altri, se autorizzato).', 'allow_private_albums', 0),
  array('Che cos\'è &quot;Carica File&quot;?', 'Questa funzione consente agli utenti di caricare un file (dimensioni e tipo sono fissati dall\'amministratore) in una galleria selezionata o da te o dallo stesso amministratore.', 'allow_private_albums', 0),
  array('Che cos\'è &quot;Ultimi Uploads&quot;?', 'Questa funzione mostra gli ultimi files caricati sul sito.', 'offline', 0),
  array('Che cos\'è &quot;Ultimi Commenti&quot;?', 'Questa funzione mostra gli ultimi commenti assegnati ai files inseriti dagli utenti.', 'offline', 0),
  array('Che cos\'è &quot;Più Visti&quot;?', 'Questa funzione mostra i files maggiormente visualizzati dagli utenti (registrati o meno).', 'offline', 0),
  array('Che cos\'è &quot;Più Votati&quot;?', 'Questa funzione mostra i files maggiormente votati dagli utenti, mostrando anche la valutazione media (es. cinque utenti danno ciascuno <img src="images/rating3.gif" width="65" height="14" border="0" alt="" />: il file avrà una valutazione media di <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> ; Cinque utenti che valutano il file da 1 a 5 (1,2,3,4,5) risulteranno in una media di <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> .)<br />le valutazioni vanno da <img src="images/rating5.gif" width="65" height="14" border="0" alt="migliore" /> (migliore) a <img src="images/rating0.gif" width="65" height="14" border="0" alt="peggiore" /> (peggiore).', 'offline', 0),
  array('Che cos\'è &quot;Preferiti&quot;?', 'Questa funzione consente agli utenti di memorizzare i propri files preferiti in un cookie inviato al proprio computer, e quindi richiamato quando comodo.', 'offline', 0),
);


// ------------------------------------------------------------------------- //
// File forgot_passwd.php
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) $lang_forgot_passwd_php = array(
  'forgot_passwd' => 'Ricorda Password',
  'err_already_logged_in' => 'Hai già eseguito il login !',
  'enter_email' => 'Inserisci il tuo indirizzo email', //cpg1.4
  'submit' => 'Invia',
  'illegal_session' => 'Sessione recupero password non valida o scaduta.', //cpg1.4
  'failed_sending_email' => 'La password non può essere spedita !',
  'email_sent' => 'Una emali con il tuo username e la password è stata spedita a %s', //cpg1.4
  'verify_email_sent' => 'Impossibile inviare email a %s. Controlla il tuo indirizzo email per completare la procedura.', //cpg1.4
  'err_unk_user' => 'L\'utente selezionato non esiste!',
  'account_verify_subject' => '%s - Richiesta nuova password', //cpg1.4
  'account_verify_body' => 'Hai richiesto una nuova password. Se sei intenzionato a procedere e ricevere una nuova password, clicca sul seguente link:
  %s', //cpg1.4
  'passwd_reset_subject' => '%s - La tua nuova password', //cpg1.4
  'passwd_reset_body' => 'Di seguito la nuova password richiesta:
Utente: %s
Password: %s
Clicca %s per eseguire il log in.', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
  'group_name' => 'Gruppo', //cpg1.4
  'permissions' => 'Permessi', //cpg1.4
  'public_albums' => 'Upload negli album pubblici', //cpg1.4
  'personal_gallery' => 'Galleria Personale', //cpg1.4
  'upload_method' => 'Modalità di upload', //cpg1.4
  'disk_quota' => 'Quota Disco', //cpg1.4
  'rating' => 'Valutazione', //cpg1.4
  'ecards' => 'Ecards', //cpg1.4
  'comments' => 'Commenti', //cpg1.4
  'allowed' => 'Consentito', //cpg1.4
  'approval' => 'Approvazione', //cpg1.4
  'boxes_number' => 'No. di boxes', //cpg1.4
  'variable' => 'variabile', //cpg1.4
  'fixed' => 'fisso', //cpg1.4
  'apply' => 'Salva Modifiche',
  'create_new_group' => 'Crea nuovo gruppo',
  'del_groups' => 'Cancella gruppo(i) selezionato(i)',
  'confirm_del' => 'Attenzione, quando cancelli un gruppo, gli utenti appartenenti a tale gruppo saranno trasferiti al gruppo utenti Registrati !\n\nDesideri continuare ?', //js-alert
  'title' => 'Gestione Gruppi',
  'num_file_upload' => 'Boxes Upload Files', //cpg1.4
  'num_URI_upload' => 'Boxes Upload URI', //cpg1.4
  'reset_to_default' => 'Imposta nome di default (%s) - consigliato!', //cpg1.4
  'error_group_empty' => 'La tabella gruppi era vuota !<br /><br />Gruppi di default creati, ricarica questa pagina', //cpg1.4
  'explain_greyed_out_title' => 'Perchè questa riga non è visibile?', //cpg1.4
  'explain_guests_greyed_out_text' => 'Non puoi cambiare le proprietà di questo gruppo poichè hai impostato l\'opzione &quot; Consenti accesso senza il login (ospiti o anonimi)&quot; su &quot;No&quot; nella pagina di configurazione. Tutti gli ospiti (membri del gruppo %s) non possono fare altro che eseguire il login; quindi le impostazioni gruppi non valgono nulla per loro.', //cpg1.4
  'explain_banned_greyed_out_text' => 'Non puoi cambiare le impostazioni del gruppo %s perchè i membri che ne fanno parte non possono agire in alcun modo.', //cpg1.4
  'group_assigned_album' => 'Album(s) consentito(i)', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
  'welcome' => 'Benvenuto !',
);

$lang_album_admin_menu = array(
  'confirm_delete' => 'Sei sicuro di voler cancellare questo album ? \\nTutti i files e i commenti verranno cancellati.', //js-alert
  'delete' => 'CANCELLA',
  'modify' => 'PROPRIETÀ',
  'edit_pics' => 'MODIFICA FILES',
);

$lang_list_categories = array(
  'home' => 'Home',
  'stat1' => '<b>[pictures]</b> files in <b>[albums]</b> albums e <b>[cat]</b> categorie con <b>[comments]</b> commenti, viste <b>[views]</b> volte',
  'stat2' => '<b>[pictures]</b> files in <b>[albums]</b> albums viste <b>[views]</b> volte',
  'xx_s_gallery' => 'Galleria di %s',
  'stat3' => '<b>[pictures]</b> files in <b>[albums]</b> albums con <b>[comments]</b> commenti, viste <b>[views]</b> volte',
);

$lang_list_users = array(
  'user_list' => 'Lista Utenti',
  'no_user_gal' => 'Non ci sono gallerie utenti',
  'n_albums' => '%s album(s)',
  'n_pics' => '%s file(s)',
);

$lang_list_albums = array(
  'n_pictures' => '%s files',
  'last_added' => ', ultimo inserito il %s',
  'n_link_pictures' => '%s files collegati', //cpg1.4
  'total_pictures' => '%s files totali', //cpg1.4
);

}

// ------------------------------------------------------------------------- //
// File keywordmgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('KEYWORDMGR_PHP')) $lang_keywordmgr_php = array(
  'title' => 'Gestione keywords', //cpg1.4
  'edit' => 'Modifica', //cpg1.4
  'delete' => 'Cancella', //cpg1.4
  'search' => 'Ricerca', //cpg1.4
  'keyword_test_search' => 'Cerca %s in una nuova finestra', //cpg1.4
  'keyword_del' => 'Cancella la keyword %s', //cpg1.4
  'confirm_delete' => 'Sei sicuro di voler cancellare la keyword %s dalla galleria?', //cpg1.4  // js-alert
  'change_keyword' => 'Cambia keyword', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
  'login' => 'Login',
  'enter_login_pswd' => 'Inserisci Utente e password per eseguire il login',
  'username' => 'Utente',
  'password' => 'Password',
  'remember_me' => 'Ricordami',
  'welcome' => 'Benvenuto %s ...',
  'err_login' => '*** Impossibile eseguire il log in. Riprova ***',
  'err_already_logged_in' => 'Hai già eseguito il login !',
  'forgot_password_link' => 'Password dimenticata',
  'cookie_warning' => 'Attenzione, il tuo browser non accetta i cookies', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
  'logout' => 'Logout',
  'bye' => 'Arrivederci %s ...',
  'err_not_loged_in' => 'Non hai eseguito il login !',
);

// ------------------------------------------------------------------------- //
// File minibrowser.php  //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('MINIBROWSER_PHP')) $lang_minibrowser_php = array(
  'close' => 'Chiudi', //cpg1.4
  'submit' => 'OK', //cpg1.4
  'up' => 'Su un livello', //cpg1.4
  'current_path' => 'Percorso corrente', //cpg1.4
  'select_directory' => 'Seleziona una cartella', //cpg1.4
  'click_to_close' => 'Clicca sull\'immagine per chiudere la finestra',
);

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
  'upd_alb_n' => 'Aggiorna album %s',
  'general_settings' => 'Impostazioni Generali',
  'alb_title' => 'Titolo Album',
  'alb_cat' => 'Categoria Album',
  'alb_desc' => 'Descrizione Album',
  'alb_keyword' => 'Keyword Album', //cpg1.4
  'alb_thumb' => 'Miniatura Album',
  'alb_perm' => 'Permessi per questo album',
  'can_view' => 'L\'Album può essere visto da',
  'can_upload' => 'I visitatori possono aggiungere files',
  'can_post_comments' => 'I visitatori possono aggiungere commenti',
  'can_rate' => 'I visitatori possono votare',
  'user_gal' => 'Galleria Utente',
  'no_cat' => '* Nessuna Categoria *',
  'alb_empty' => 'Album vuoto',
  'last_uploaded' => 'Ultimo arrivo',
  'public_alb' => 'Tutti (album pubblico)',
  'me_only' => 'Solo io',
  'owner_only' => 'Solo per il proprietario (%s)',
  'groupp_only' => 'Membri del gruppo %s',
  'err_no_alb_to_modify' => 'Non puoi modificare nessun album nel database.',
  'update' => 'Aggiorna album',
  'reset_album' => 'Resetta album', //cpg1.4
  'reset_views' => 'Resetta contatore viste a &quot;0&quot; in %s', //cpg1.4
  'reset_rating' => 'Resetta voti su tutti i files in %s', //cpg1.4
  'delete_comments' => 'Cancella tutti i commenti postati in %s', //cpg1.4
  'delete_files' => 'Cancella %sIrreversibilmente%s tutti i files in %s', //cpg1.4
  'views' => 'viste', //cpg1.4
  'votes' => 'voti', //cpg1.4
  'comments' => 'commenti', //cpg1.4
  'files' => 'files', //cpg1.4
  'submit_reset' => 'Applica Modifice', //cpg1.4
  'reset_views_confirm' => 'Sono sicuro', //cpg1.4
  'notice1' => '(*) dipende dalle impostazioi dei %sgroups%s',  //cpg1.4 //(do not translate %s!)
  'alb_password' => 'Album password', //cpg1.4
  'alb_password_hint' => 'Suggerimento per Album password', //cpg1.4
  'edit_files' =>'Modifica files', //cpg1.4
  'parent_category' =>'Categoria Radice', //cpg1.4
  'thumbnail_view' =>'Vista Miniature', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File phpinfo.php
// ------------------------------------------------------------------------- //

if (defined('PHPINFO_PHP')) $lang_phpinfo_php = array(
  'php_info' => 'PHP info',
  'explanation' => 'Questo è l\'output generato dalla funzione PHP<a href="http://www.php.net/phpinfo">phpinfo()</a>, mostrata all\'interno di Coppermine.',
  'no_link' => 'Lasciando visualizzare a tutti le phpinfo potrebbe creare un problema di sicurezza, questo è il motivo per cui questa pagina è visibile solo quando esegui il login da amministratore. Non puoi postare link a questa pagina ad altri, avrebbero negato l\'accesso.',
);

// ------------------------------------------------------------------------- //
// File picmgr.php //cpg1.4
// ------------------------------------------------------------------------- //
if (defined('PICMGR_PHP')) $lang_picmgr_php = array(
  'pic_mgr' => 'Gestione Immagini', //cpg1.4
  'select_album' => 'Seleziona Album', //cpg1.4
  'delete' => 'Cancella', //cpg1.4
  'confirm_delete1' => 'Sei sicuro di voler cancellare questa immagine ?', //cpg1.4
  'confirm_delete2' => '\nL\'immagine verrà cancellata definitivamente.', //cpg1.4
  'apply_modifs' => 'Salva Modifiche', //cpg1.4
  'confirm_modifs' => 'Conferma modifiche', //cpg1.4
  'pic_need_name' => 'Le immagini devono avere un nome !', //cpg1.4
  'no_change' => 'Nessuna modifica effettuata !', //cpg1.4
  'no_album' => '* Nessun album *', //cpg1.4
  'explanation_header' => 'L\'ordinamento personalizzato che puoi scegliere in questa pagina sarà memorizzato nell\'account solo se', //cpg1.4
  'explanation1' => 'l\'admin ha impostato nella configurazione come "ordinamento di default per i files" la "posizione discendente" o la "posizione ascendente" (impostazione globale per tutti gli utenti che non hanno scelto altre opzioni individualmente)', //cpg1.4
  'explanation2' => 'l\'utente ha scelto "Posizione discendente" o "Posizione ascendente" nella pagina delle miniature (impostazione per singolo utente)', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File pluginmgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('PLUGINMGR_PHP')){

$lang_pluginmgr_php = array(
  'confirm_uninstall' => 'Sei sicuro di voler DISINSTALLARE questo plugin ?', //cpg1.4
  'confirm_delete' => 'Sei sicuro di voler CANCELLARE questo plugin ?', //cpg1.4
  'pmgr' => 'Gestione Plugin', //cpg1.4
  'name' => 'Nome', //cpg1.4
  'author' => 'Autore', //cpg1.4
  'desc' => 'Descrizione', //cpg1.4
  'vers' => 'ver', //cpg1.4
  'i_plugins' => 'Plugins Installati', //cpg1.4
  'n_plugins' => 'Plugins Non Installati', //cpg1.4
  'none_installed' => 'Nessuno Installato', //cpg1.4
  'operation' => 'Operazione', //cpg1.4
  'not_plugin_package' => 'Il file caricato non è un pacchetto plugin valido.', //cpg1.4
  'copy_error' => 'Si è verificato un errore copiando il pacchetto nella cartella plugins.', //cpg1.4
  'upload' => 'Carica', //cpg1.4
  'configure_plugin' => 'Configura plugin', //cpg1.4
  'cleanup_plugin' => 'Resetta plugin', //cpg1.4
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
Gli amministratori di {SITE_NAME} cercheranno in ogni modo di rimuovere o modificare ogni contenuto non consono nel minor tempo possibile, ma deve essere chiaro che è impossibile controllare ogni inserimento. Per questa ragione deve essere chiaro il fatto che tutti i posts inseriti in questo sito esprimono il punto di vista e le opinioni di chi li ha inseriti e non degli amministratori o del webmaster (eccetto che per i posts inseriti da loro stessi) e quindi non possono essere ritenuti responsabili per questi.
<br />
<br />
Ti dichiari in accordo sul fatto di non postare nulla di abusivo, osceno, volgare, pornografico o ogni altro materiale che potrebbe violare qualsivoglia legge. Ti dichiari in accordo sul fatto che il webmaster, gli amministratori e i moderatori di {SITE_NAME} hanno il diritto di rimuovere o modificare ogni contenuto in qualsiasi momento gli paia opportuno. Come utente accetti il fatto che ogni informazione inserita venga salvata in un database. Nessuna di queste informazioni verrà fornita a terzi senza il tuo consenso e gli amministratori non potranno essere considerati responsabili per ogni tentativo di attacco che risultasse in una perdita di dati.
<br />
<br />
Questo sito utilizza i cookies per salvare informazioni sul tuo computer. Questi cookies servono solo per migliorare la navigazione. Il tuo indirizzo email viene utilizzato solo per la conferma della registrazione e per la password.
<br />
<br />
Cliccando 'Accetto' di seguito accetti tutte le condizioni.
EOT;

$lang_register_php = array(
  'page_title' => 'Registrazione Utente',
  'term_cond' => 'Termini e Condizioni',
  'i_agree' => 'Accetto',
  'submit' => 'Inoltra Registrazione',
  'err_user_exists' => 'Il nome utente inserito è già utilizzato da un altro utente, scegline uno diverso',
  'err_password_mismatch' => 'Le due password non coincidono, inseriscile nuovamente',
  'err_uname_short' => 'Il nome utente deve contenere almeno 2 caratteri',
  'err_password_short' => 'La Password deve essere almeno di 2 caratteri',
  'err_uname_pass_diff' => 'Nome utente e password devono essere diversi',
  'err_invalid_email' => 'Indirizzo email non valido',
  'err_duplicate_email' => 'Un altro utente si è già registrato con l\'indirizzo email da te inserito',
  'enter_info' => 'Inserisci le informazioni di registrazione',
  'required_info' => 'Informazioni richieste',
  'optional_info' => 'Informazioni facoltative',
  'username' => 'Nome Utente',
  'password' => 'Password',
  'password_again' => 'Ripeti password',
  'email' => 'Email',
  'location' => 'Provenienza',
  'interests' => 'Interessi',
  'website' => 'Home page',
  'occupation' => 'Occupazione',
  'error' => 'ERRORE',
  'confirm_email_subject' => '%s - Conferma di Registrazione',
  'information' => 'Informazione',
  'failed_sending_email' => 'Impossibile inviare l\'email di conferma !',
  'thank_you' => 'Grazie per esserti registrato.<br /><br />Una email con le istruzioni su come attivare il tuo account è stata inviata all\'indirizzo email da te fornito.',
  'acct_created' => 'Il tuo account è stato creato e puoi adesso effettuare il login',
  'acct_active' => 'Il tuo account adesso è attivo e puoi effettuare il login',
  'acct_already_act' => 'Account già attivo!', //cpg1.4
  'acct_act_failed' => 'Impossibile attivare questo account !',
  'err_unk_user' => 'utente selezionato inesistente !',
  'x_s_profile' => 'Profilo di %s',
  'group' => 'Gruppo',
  'reg_date' => 'Data di iscrizione',
  'disk_usage' => 'Utilizzo Disco',
  'change_pass' => 'Cambia password',
  'current_pass' => 'Password attuale',
  'new_pass' => 'Nuova Password',
  'new_pass_again' => 'Ripeti nuova Password',
  'err_curr_pass' => 'La password attuale è sbagliata',
  'apply_modif' => 'Salva Modifiche',
  'change_pass' => 'Cambia la password',
  'update_success' => 'Profilo Aggiornato',
  'pass_chg_success' => 'Password cambiata',
  'pass_chg_error' => 'Password non cambiata',
  'notify_admin_email_subject' => '%s - Notifica registrazione',
  'last_uploads' => 'Ultimo file inserito.<br />Clicca per vedere tutti i files inseriti da', //cpg1.4
  'last_comments' => 'Ultimo commento.<br />Clicca per vedere tutti i commenti inseriti da', //cpg1.4
  'notify_admin_email_body' => 'Un nuovo utente con nome utente "%s" si è appena registrato nella tua Galleria',
  'pic_count' => 'Files caricati', //cpg1.4
  'notify_admin_request_email_subject' => '%s - Richiesta registrazione', //cpg1.4
  'thank_you_admin_activation' => 'Grazie.<br /><br />La tua richiesta di attivazione è stata inviata all\'amministratore. Riceverai una email quando sarai approvato.', //cpg1.4
  'acct_active_admin_activation' => 'Account attivo ed email inviata all\'utente.', //cpg1.4
  'notify_user_email_subject' => '%s - Notifica di Attivazione', //cpg1.4
);

$lang_register_confirm_email = <<<EOT
Grazie per esserti registrato su {SITE_NAME}

Per attivare il tuo account con nome utente "{USER_NAME}", devi cliccare sul link di seguito, o copiarlo e incollarlo nella barra degli indirizzi del tuo browser.

<a href="{ACT_LINK}">{ACT_LINK}</a>

Saluti,

Lo Staff di {SITE_NAME}

EOT;

$lang_register_approve_email = <<<EOT
Un nuovo utente con nickname "{USER_NAME}" si è appena registrato nella tua Galleria.

Per attivare il suo account clicca sul link riportato di seguito.

<a href="{ACT_LINK}">{ACT_LINK}</a>

EOT;

$lang_register_activated_email = <<<EOT
Il tuo account è stato approvato e attivato.

Adesso puoi effettuare il login su <a href="{SITE_LINK}">{SITE_LINK}</a> utilizzando il nome utente "{USER_NAME}"


Saluti,

Lo Staff di {SITE_NAME}

EOT;
}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
  'title' => 'Controlla commenti',
  'no_comment' => 'Nessun commento da controllare',
  'n_comm_del' => '%s commento(i) cancellato(i)',
  'n_comm_disp' => 'Numero di commenti da mostrare',
  'see_prev' => 'Mostra Precedente',
  'see_next' => 'Mostra Successivo',
  'del_comm' => 'Cancella commenti selezionati',
  'user_name' => 'Nome', //cpg1.4
  'date' => 'Data', //cpg1.4
  'comment' => 'Commento', //cpg1.4
  'file' => 'File', //cpg1.4
  'name_a' => 'Nome Utente ascendente', //cpg1.4
  'name_d' => 'Nome Utente discendente', //cpg1.4
  'date_a' => 'Data ascendente', //cpg1.4
  'date_d' => 'Data discendente', //cpg1.4
  'comment_a' => 'Commento ascendente', //cpg1.4
  'comment_d' => 'Commento discendente', //cpg1.4
  'file_a' => 'File ascendente', //cpg1.4
  'file_d' => 'File discendente', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File search.php                                                           //
// ------------------------------------------------------------------------- //


if (defined('SEARCH_PHP')){

$lang_search_php = array(
  'title' => 'Cerca nella collezione file', //cpg1.4
  'submit_search' => 'cerca', //cpg1.4
  'keyword_list_title' => 'Lista Keyword', //cpg1.4
  'keyword_msg' => 'La lista precedente non è inclusiva di tutti i dati. Non include parole dai titoli delle foto o dalle descrizioni. Prova con una ricerca a tutto testo.',  //cpg1.4
  'edit_keywords' => 'Modifica keywords', //cpg1.4
  'search in' => 'Cerca in:', //cpg1.4
  'ip_address' => 'Indirizzo IP', //cpg1.4
  'fields' => 'Cerca in', //cpg1.4
  'age' => 'Età', //cpg1.4
  'newer_than' => 'Più nuovi di', //cpg1.4
  'older_than' => 'Più vecchi di', //cpg1.4
  'days' => 'giorni', //cpg1.4
  'all_words' => 'Ogni parola deve corrispondere (AND)', //cpg1.4
  'any_words' => 'Qualsiasi parola deve corrispondere (OR)', //cpg1.4
);

$lang_adv_opts = array(
  'title' => 'Titolo', //cpg1.4
  'caption' => 'Didascalia', //cpg1.4
  'keywords' => 'Keywords', //cpg1.4
  'owner_name' => 'Nome proprietario', //cpg1.4
  'filename' => 'Nome File', //cpg1.4
);

}

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
  'page_title' => 'Cerca nuovi files',
  'select_dir' => 'Seleziona cartella',
  'select_dir_msg' => 'Questa funzione ti consente di aggiungere files che hai aggiunto al server tramite FTP.<br /><br />Seleziona la cartella in cui hai caricato i tuoi files.', //cpg1.4
  'no_pic_to_add' => 'Nessun file da aggiungere',
  'need_one_album' => 'Necessiti di almeno un album per usare questa funzione',
  'warning' => 'Attenzione',
  'change_perm' => 'Lo script non può scrivere in questa cartella, devi cambiare il CHMOD in 755 o 777 prima di aggiungere i files !',
  'target_album' => '<b>Metti i files di &quot;</b>%s<b>&quot; in </b>%s',
  'folder' => 'Cartella',
  'image' => 'file',
  'album' => 'Album',
  'result' => 'Risultato',
  'dir_ro' => 'Non Scrivibile. ',
  'dir_cant_read' => 'Non leggibile. ',
  'insert' => 'Aggiunta nuovi files alla galleria',
  'list_new_pic' => 'Lista dei nuovi files',
  'insert_selected' => 'inserisci i files selezionati',
  'no_pic_found' => 'Nessun nuovo file trovato',
  'be_patient' => 'Attendere prego, lo script necessita di tempo per aggiungere i files',
  'no_album' => 'Nessun album selezionato',
  'result_icon' => 'clicca per i dettagli o per ricaricare',  //cpg1.4
  'notes' =>  '<ul>'.
                          '<li><b>OK</b> : significa che il file è stato aggiunto con successo'.
                          '<li><b>DP</b> : significa che il file è duplicato ed esiste gi&agrave nel database'.
                          '<li><b>PB</b> : significa che il file non può essere aggiunto, controlla la tua configurazione e i permessi delle cartelle nelle quali risiedono i files'.
                          '<li><b>NA</b> : significa che non hai selezionato un album nel quale caricare i files, clicca \'<a href="javascript:history.back(1)">indietro</a>\' e seleziona un album. Se non possiedi un album <a href="albmgr.php">creane one prima</a></li>'.
                          '<li>Se i \'simboli\' OK, DP, PB non appaiono clicca sull\'icona corrotta per vedere qualsiasi messaggio generato da PHP'.
                          '<li>Sei il browser va in timeout, premi il tasto di ricarica'.
                          '</ul>',
  'select_album' => 'seleziona album',
  'check_all' => 'Seleziona tutti',
  'uncheck_all' => 'Deseleziona tutti',
  'no_folders' => 'Non ci sono ancora cartelle dentro la cartella "albums". Assicurati di crearne almeno una e di caricarvi i tuoi files tramite FTP. Non devi caricare files nelle cartelle "userpics" o "edit", sono riservate per gli uploads via http.', //cpg1.4
   'albums_no_category' => 'Albums senza categoria', //cpg1.4 // album pulldown mod, added by frogfoot
  'personal_albums' => '* Albums personali', //cpg1.4 // album pulldown mod, added by frogfoot
  'browse_batch_add' => 'Interfaccia Navigabile (consigliato)', //cpg1.4
  'edit_pics' => 'Modifica files', //cpg1.4
  'edit_properties' => 'Proprietà Album', //cpg1.4
  'view_thumbs' => 'Vista Miniature', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File stat_details.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('STAT_DETAILS_PHP')) $lang_stat_details_php = array(
  'show_hide' => 'mostra/nascondi questa colonna', //cpg1.4
  'vote' => 'Dettagli Voti', //cpg1.4
  'hits' => 'Dettagli Hit', //cpg1.4
  'stats' => 'Statistiche Voti', //cpg1.4
  'sdate' => 'Data', //cpg1.4
  'rating' => 'Valutazione', //cpg1.4
  'search_phrase' => 'Frase di ricerca', //cpg1.4
  'referer' => 'Referer', //cpg1.4
  'browser' => 'Browser', //cpg1.4
  'os' => 'Sistema Operativo', //cpg1.4
  'ip' => 'IP', //cpg1.4
  'sort_by_xxx' => 'Elenca per %s', //cpg1.4
  'ascending' => 'ascendente', //cpg1.4
  'descending' => 'discendente', //cpg1.4
  'internal' => 'interno', //cpg1.4
  'close' => 'chiudi', //cpg1.4
  'hide_internal_referers' => 'nascondi referers interni', //cpg1.4
  'date_display' => 'Mostra Data', //cpg1.4
  'submit' => 'Invia / Aggiorna', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File thumbnails.php
// ------------------------------------------------------------------------- //

// Void

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) $lang_upload_php = array(
  'title' => 'Carica file',
  'custom_title' => 'Modulo di richiesta personalizzato',
  'cust_instr_1' => 'Puoi selezionare un numero personalizzato di boxes per l\'upload. Ma non puoi comunque selezionarne di più del limite impostato.',
  'cust_instr_2' => 'Numero di Box di richiesta',
  'cust_instr_3' => 'Boxes per il caricamento files: %s',
  'cust_instr_4' => 'Boxes per il caricamento URI/URL: %s',
  'cust_instr_5' => 'Boxes per il caricamento URI/URL:',
  'cust_instr_6' => 'Boxes per il caricamento files:',
  'cust_instr_7' => 'Inserisci il numero di ogni tipo di box per il caricamento che desideri.  Quindi clicca \'Continua\'. ',
  'reg_instr_1' => 'Azione non valida per la creazione del modulo.',
  'reg_instr_2' => 'Adesso puoi caricare i tuoi files utilizzando i boxes per il caricamento. Le dimensioni dei files caricati dal tuo client al server non devono superare i %s KB ciascuno. I files di tipo ZIP caricati tramite le sezioni \'Caricamento File\' e \'Caricamento URI/URL\' rimarranno compressi.',
  'reg_instr_3' => 'Se desideri che il file compresso venga decompresso, devi usare il box per il caricamento nell\'area  \'Caricamento e decompressione ZIP\'.',
  'reg_instr_4' => 'Quando usi la sezione di caricamento URI/URL, inserisci il percorso del file in questo modo: http://www.miosito.com/immagini/esempio.jpg',
  'reg_instr_5' => 'Una volta compilato il modulo, clicca \'Continua\'.',
  'reg_instr_6' => 'Caricamento e decompressione ZIP:',
  'reg_instr_7' => 'Uploads File:',
  'reg_instr_8' => 'Uploads URI/URL:',
  'error_report' => 'Errore',
  'error_instr' => 'I seguenti uploads hanno creato errori:',
  'file_name_url' => 'Nome/URL File',
  'error_message' => 'Messaggio di Errore',
  'no_post' => 'File non caricato da POST.',
  'forb_ext' => 'Estensione file proibita.',
  'exc_php_ini' => 'Dimensione file eccedente quella consentita in php.ini.',
  'exc_file_size' => 'Dimensione file eccedente quella consentita da CPG.',
  'partial_upload' => 'Upload solo parziale.',
  'no_upload' => 'Nessun upload eseguito.',
  'unknown_code' => 'Errore PHP sconosciuto di upload.',
  'no_temp_name' => 'Nessun upload - Nessun nome temporaneo.',
  'no_file_size' => 'Non contiene nessun dato/Corrotto',
  'impossible' => 'Impossibile spostare.',
  'not_image' => 'Non è un\'immagine/corrotto',
  'not_GD' => 'Non è un\'estensione GD.',
  'pixel_allowance' => 'L\'altezza e la larghezza dell\'immagine caricata è maggiore di quella consentita dalla configurazione della Galleria.', //cpg1.4
  'incorrect_prefix' => 'Prefisso URI/URL non corretto',
  'could_not_open_URI' => 'Impossibile aprire URI.',
  'unsafe_URI' => 'Sicurezza non verificabile.',
  'meta_data_failure' => 'Fallimento Meta data',
  'http_401' => '401 Non autorizzato',
  'http_402' => '402 Pagamento richiesto',
  'http_403' => '403 Proibito',
  'http_404' => '404 Non trovato',
  'http_500' => '500 Errore interno del server',
  'http_503' => '503 Servizio non disponibile',
  'MIME_extraction_failure' => 'MIME non può essere determinato.',
  'MIME_type_unknown' => 'Tipo MIME sconosciuto',
  'cant_create_write' => 'Impossibile creare file di scrittura.',
  'not_writable' => 'Impossibile scrivere sul file di scrittura.',
  'cant_read_URI' => 'Impossibile leggere URI/URL',
  'cant_open_write_file' => 'Impossibile aprire il file di scrittura URI.',
  'cant_write_write_file' => 'Impossibile scrivere sul file di scrittura URI.',
  'cant_unzip' => 'Impossibile decomprimere.',
  'unknown' => 'Errore sconosciuto',
  'succ' => 'Uploads andati a buon fine',
  'success' => '%s uploads sono andati a buon fine.',
  'add' => 'Clicca \'Continua\' per aggiungere i files agli albums.',
  'failure' => 'Fallimento Upload',
  'f_info' => 'Informazioni File',
  'no_place' => 'Il file precedente non può essere inserito.',
  'yes_place' => 'Il file precedente è stato inserito con successo.',
  'max_fsize' => 'La dimensione massima consentita dei files è %s KB',
  'album' => 'Album',
  'picture' => 'File',
  'pic_title' => 'Titolo File',
  'description' => 'Descrizione File',
  'keywords' => 'Keywords (separa con spazi)<br /><a href="#" onClick="return MM_openBrWindow(\'keyword_select.php\',\'selectKey\',\'width=250, height=400, scrollbars=yes,toolbar=no,status=yes,resizable=yes\')">Inserisci da una lista</a>', //cpg1.4
  'keywords_sel' =>'Seleziona Keyword', //cpg1.4
  'err_no_alb_uploadables' => 'Spiacente, non hai un album nel quale sei autorizzato a caricare i files',
  'place_instr_1' => 'Inserisci i files negli albums adesso. Puoi anche inserire informazioni specifiche per ogni file.',
  'place_instr_2' => 'Più files necessitano di essere inseriti. Clicca \'Continua\'.',
  'process_complete' => 'Tutti i files inseriti con successo.',
   'albums_no_category' => 'Albums senza categoria', //cpg1.4. //album pulldown mod, added by frogfoot
  'personal_albums' => '* Albums personali', //cpg1.4 //album pulldown mod, added by frogfoot
  'select_album' => 'Seleziona album', //cpg1.4 //album pulldown mod, added by frogfoot
  'close' => 'Chiudi', //cpg1.4
  'no_keywords' => 'Spiacente, nessuna keyword disponibile!', //cpg1.4
  'regenerate_dictionary' => 'Ricrea dizionario', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
  'memberlist' => 'Utenti', //cpg1.4
  'user_manager' => 'Gestione Utenti', //cpg1.4
  'title' => 'Gestione Utenti',
  'name_a' => 'Nome ascendente',
  'name_d' => 'Nome discenente',
  'group_a' => 'Gruppo ascendente',
  'group_d' => 'Gruppo discendente',
  'reg_a' => 'Data di reg ascendente',
  'reg_d' => 'Data di reg discendente',
  'pic_a' => 'Conteggio file ascendente',
  'pic_d' => 'Conteggio file discendente',
  'disku_a' => 'Utilizzo disco ascendente',
  'disku_d' => 'Utilizzo disco discendente',
  'lv_a' => 'Ultima visita ascendente',
  'lv_d' => 'Ultima visita discendente',
  'sort_by' => 'Ordina utenti per',
  'err_no_users' => 'La tabella utenti è vuota !',
  'err_edit_self' => 'Non puoi modificare il tuo profilo, utilizza il link \'Profilo\' ',
  'edit' => 'Modifica', //cpg1.4
  'with_selected' => 'Se selezionati:', //cpg1.4
  'delete' => 'Cancella', //cpg1.4
  'delete_files_no' => 'mantieni files pubblici (ma rendili anonimi)', //cpg1.4
  'delete_files_yes' => 'cancella anche i files pubblici', //cpg1.4
  'delete_comments_no' => 'Mantieni i commenti (ma rendili anonimi)', //cpg1.4
  'delete_comments_yes' => 'cancella anche i commenti', //cpg1.4
  'activate' => 'Attiva', //cpg1.4
  'deactivate' => 'Disattiva', //cpg1.4
  'reset_password' => 'Resetta Password', //cpg1.4
  'change_primary_membergroup' => 'Cambia gruppo primario', //cpg1.4
  'add_secondary_membergroup' => 'Aggiungi gruppo secondario', //cpg1.4
  'name' => 'Nome utente',
  'group' => 'Gruppo',
  'inactive' => 'Non attivo',
  'operations' => 'Operazioni',
  'pictures' => 'Files',
  'disk_space_used' => 'Spazio Utilizzato', //cpg1.4
  'disk_space_quota' => 'Quota Disco', //cpg1.4
  'registered_on' => 'Registrazione', //cpg1.4
  'last_visit' => 'Ultima Visita',
  'u_user_on_p_pages' => '%d utenti in %d pagina(e)',
  'confirm_del' => 'Sei sicuro di voler CANCELLARE questo utente ? \\nTutti i suoi files e albums saranno cancellati.', //js-alert
  'mail' => 'MAIL',
  'err_unknown_user' => 'L\'utente selezionato non esiste !',
  'modify_user' => 'Modifica utente',
  'notes' => 'Note',
  'note_list' => '<li>Se non vuoi cambiare la password attuale, lascia vuoto il campo "password"',
  'password' => 'Password',
  'user_active' => 'Utente attivo',
  'user_group' => 'Gruppo Utente',
  'user_email' => 'Email Utente',
  'user_web_site' => 'Sito Web Utente',
  'create_new_user' => 'Crea nuovo Utente',
  'user_location' => 'Provenienza utente',
  'user_interests' => 'Interessi Utente',
  'user_occupation' => 'Occupazione Utente',
  'user_profile1' => '$user_profile1', //cpg1.4
  'user_profile2' => '$user_profile2', //cpg1.4
  'user_profile3' => '$user_profile3', //cpg1.4
  'user_profile4' => '$user_profile4', //cpg1.4
  'user_profile5' => '$user_profile5', //cpg1.4
  'user_profile6' => '$user_profile6', //cpg1.4
  'latest_upload' => 'Uploads recenti',
  'never' => 'Mai',
  'search' => 'Ricerca Utenti', //cpg1.4
  'submit' => 'Invia', //cpg1.4
  'search_submit' => 'Vai!', //cpg1.4
  'search_result' => 'Cerca risultati per: ', //cpg1.4
  'alert_no_selection' => 'Devi selezionare almeno un utente prima!', //cpg1.4 //js-alert
  'password' => 'password', //cpg1.4
  'select_group' => 'Seleziona gruppo', //cpg1.4
  'groups_alb_access' => 'Permessi Album per gruppo', //cpg1.4
  'album' => 'Album', //cpg1.4
  'category' => 'Categoria', //cpg1.4
  'modify' => 'Modifica?', //cpg1.4
  'group_no_access' => 'Questo gruppo non gode di accesso speciale', //cpg1.4
  'notice' => 'Nota', //cpg1.4
  'group_can_access' => 'Album(s) al(i) quale(i) solamente "%s" può accedere', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //

if (defined('UTIL_PHP')) {
$lang_util_desc_php = array(
'Aggiorna titoli dal nome del file', //cpg1.4
'Cancella titoli', //cpg1.4
'Ricostruisce miniature e immagini intermedie', //cpg1.4
'Cancella le immagini a dimensioni originali e sostituiscile con le immagini intermedie', //cpg1.4
'Cancella le immagini originali o intermedie per liberare spazio web', //cpg1.4
'Cancella commenti orfani', //cpg1.4
'Rileggi le dimensioni dei files (se le hai modificate manualmente)', //cpg1.4
'Resetta contatore viste', //cpg1.4
'Mostra phpinfo', //cpg1.4
'Aggiorna il database', //cpg1.4
'Mostra files di log', //cpg1.4
);
$lang_util_php = array(
  'title' => 'Strumenti Admin (Ridimensiona Immagini)',
  'what_it_does' => 'Cosa fa',
  'file' => 'File',
  'problem' => 'Problema', //cpg1.4
  'status' => 'Stato', //cpg1.4
  'title_set_to' => 'Titolo impostato a',
  'submit_form' => 'Invia',
  'updated_succesfully' => 'Aggiornato con successo',
  'error_create' => 'ERRORE creando',
  'continue' => 'Processa più immagini',
  'main_success' => 'Il file %s è stato usato con successo come file principale',
  'error_rename' => 'Errore rinominando %s in %s',
  'error_not_found' => 'Il file %s non è stato trovato',
  'back' => 'Torna a principale',
  'thumbs_wait' => 'Aggiornamento Miniature e/o immagini ridimensionate, attendere prego...',
  'thumbs_continue_wait' => 'Continuo nell\'aggiornamento delle miniature e/o immagini ridimensionate...',
  'titles_wait' => 'Aggiornamento titoli, attendere prego...',
  'delete_wait' => 'Cancellazione titoli, attendere prego...',
  'replace_wait' => 'Cancellazione originali e sostituzione con le immagini ridimensionate, attendere prego...',
  'instruction' => 'Istruzioni Veloci',
  'instruction_action' => 'Seleziona Azione',
  'instruction_parameter' => 'Imposta parametri',
  'instruction_album' => 'Seleziona Album',
  'instruction_press' => 'Premi %s',
  'update' => 'Aggiorna miniature e/o immagini ridimensionate',
  'update_what' => 'Cosa deve essere aggiornato',
  'update_thumb' => 'Solo miniature',
  'update_pic' => 'Solo immagini ridimensionate',
  'update_both' => 'Sia le miniature che le immagini ridimensionate',
  'update_number' => 'Numero di immagini processate per click',
  'update_option' => '(Prova ad impostare questa opzione ad un parametro più basso se hai problemi di timeout)',
  'filename_title' => 'Nome File &rArr; Titolo File',
  'filename_how' => 'Come devonono essere rinominati i file ',
  'filename_remove' => 'Rimuovi .jpg e rimpiazza _ (trattino basso) con spazi',
  'filename_euro' => 'Cambia 2003_11_23_13_20_20.jpg in 23/11/2003 13:20',
  'filename_us' => 'Cambia 2003_11_23_13_20_20.jpg in 11/23/2003 13:20',
  'filename_time' => 'Cambia 2003_11_23_13_20_20.jpg in 13:20',
  'delete' => 'Cancella titoli files o immagini a dimensioni originali',
  'delete_title' => 'Cancella titoli files',
  'delete_title_explanation' => 'Questo toglierà tutti i titoli nei files dell\'album specificato.', //cpg1.4
  'delete_original' => 'Cancella le immagini a dimensione originale',
  'delete_original_explanation' => 'Questo cancellerà le immagini a dimensione originale.', //cpg1.4
  'delete_intermediate' => 'Cancella immagini intermedie', //cpg1.4
  'delete_intermediate_explanation' => 'Questo cancellerà le immagini intermedie (normal).<br />Utilizza questa funzione per liberare spazio su disco se hai disabilitato l\'opzione \'Crea immagini intermedie\' nella configurazione dopo aver aggiunto immagini.', //cpg1.4
  'delete_replace' => 'Cancella le immagini originali sostituendole con le versioni ridimensionate',
  'titles_deleted' => 'Tutti i titoli nell\'album specificato rimossi', //cpg1.4
  'deleting_intermediates' => 'Cancellazione immagini intermedie, attendere prego...', //cpg1.4
  'searching_orphans' => 'Ricerca orfani, attendere prego...', //cpg1.4
  'select_album' => 'Seleziona album',
  'delete_orphans' => 'Cancella commenti sui files mancanti', //cpg1.4
  'delete_orphans_explanation' => 'Questo identificherà e ti consentirà di cancellare ogni commento non più esistente nella Galleria.<br />Controlla tutti gli albums.', //cpg1.4
  'refresh_db' => 'Aggiorna dimensioni e informazioni del file', //cpg1.4
  'refresh_db_explanation' => 'Questo aggiornerà le dimensioni del file, sia come peso che di spazio occupato. Utilizza questo strumento se le quote disco risultano non corrette o se hai cambiato manualmente i files.', //cpg1.4
  'reset_views' => 'Resetta contatore viste', //cpg1.4
  'reset_views_explanation' => 'Imposta a zero tutte le viste nell\'album specificato.', //cpg1.4
  'orphan_comment' => 'commenti orfani trovati',
  'delete' => 'Cancella',
  'delete_all' => 'Cancella tutto',
  'delete_all_orphans' => 'Cancella tutti gli orfani?', //cpg1.4
  'comment' => 'Commento: ',
  'nonexist' => 'collegato al file non esistente # ',
  'phpinfo' => 'Mostra phpinfo',
  'phpinfo_explanation' => 'Contiene informazioni tecniche sul tuo server.<br /> - Potresti esserne richiesto quando hai bisogno di supporto.', //cpg1.4
  'update_db' => 'Aggiorna database',
  'update_db_explanation' => 'Se hai cambiato o modificato i files originali di Coppermine, magari facendo un upgrade, esegui almeno un update una volta. Questo creerà le tebelle necessari e/o i valori di configurazione nel database di coppermine.',
  'view_log' => 'Visualizza i files di log', //cpg1.4
  'view_log_explanation' => 'Coppermine può tenere traccia di varie azioni eseguite dagli utenti. Puoi sfogliare questi logs se hai abilitato il logging nella <a href="admin.php">configurazione</a>.', //cpg1.4
  'versioncheck' => 'Controllo versioni', //cpg1.4
  'versioncheck_explanation' => 'Controlla le versioni dei tuoi files per vedere se hai sostituito tutti i files dopo un upgrade, o se i files di coppermine sono stati aggiornati dopo il rilascio di un aggiornamento.', //cpg1.4
  'bridgemanager' => 'Bridge Manager', //cpg1.4
  'bridgemanager_explanation' => 'Abilita/Disabilita integrazione (bridging) di Coppermine con un\'altra applicazione (es. la tua board).', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File versioncheck.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('VERSIONCHECK_PHP')) $lang_versioncheck_php = array(
  'title' => 'Versioncheck', //cpg1.4
  'what_it_does' => 'Questa pagina serve a quegli utenti che hanno aggiornato la propria installazione di coppermine. Lo script analizza i vostri files sul webserver e cerca di determinare se le versioni dei files sul server sono le stesse di quelli posizionati sulla repository su http://coppermine.sourceforge.net, mostrando in questo modo quali files dovresti aggiornare.<br />Tutto quello mostrato in rosso necessita di essere aggiornato. Le voci in giallo necessitano di un semplice controllo. Le voci in verde (o il tuo colore di default per le font) sono OK.<br />Clicca sulle icone di aiuto per maggiori dettagli.', //cpg1.4
  'online_repository_unable' => 'Impossibile connettersi alla repository', //cpg1.4
  'online_repository_noconnect' => 'Coppermine non è in grado di connettersi alla repository. Questo può essere dovuto a due motivi:', //cpg1.4
  'online_repository_reason1' => 'La repository al momento è down - controlla se riesci a navigare questa pagina: %s - se non riesci, prova più tardi.', //cpg1.4
  'online_repository_reason2' => 'Il PHP sul tuo webserver è configurato con %s su off (di default, &egrav; su on). Se il server viene amministrato da te direttamente, modifica questa impostazione in <i>php.ini</i> (o almeno consenti di essere sovrascritta con %s). Se utilizzi un hosting web, devi probabilmente convivere col fatto che non puoi collegarti alla repository. Questa pagina mostrerà solo le versioni dei files della tua distribuzione - gli aggiornamenti non saranno mostrati.', //cpg1.4
  'online_repository_skipped' => 'Connessione alla repository saltata', //cpg1.4
  'online_repository_to_local' => 'Lo script sta utilizzando di default le copie locali dei files adesso. I dati potrebbero essere inaccurati se hai aggiornato coppermine e non hai uploadato tutti i files. Allo stesso modo cambiamenti ai files dopo il rilascio non saranno inseriti nell\'account.', //cpg1.4
  'local_repository_unable' => 'Impossibile connettersi alla repository sul tuo server', //cpg1.4
  'local_repository_explanation' => 'Coppermine non è stata in grado di connettersi alla repository del file %s sul tuo server. Questo significa che probabilmente non hai eseguito l\'upload del file di repository sul tuo server. Fallo ora e riprova ad eseguire lo script (aggiornando questa pagina).<br />Se lo script fallisce di nuovo, il tuo hosting potrebbe aver disabilitato parti delle <a href="http://www.php.net/manual/en/ref.filesystem.php">funzioni del filesystem PHP</a> completamente. In questo caso, non sarai in grado di utilizzare questo strumento in nessun caso.', //cpg1.4
  'coppermine_version_header' => 'Versione di Coppermine installata', //cpg1.4
  'coppermine_version_info' => 'Hai correntemente installato: %s', //cpg1.4
  'coppermine_version_explanation' => 'Se pensi che questo sia interamente sbagliato e credi di avere una versione più di Coppermine, probabilmente non hai caricato la versione più recente del file <i>include/init.inc.php</i>', //cpg1.4
  'version_comparison' => 'Comparazione versione', //cpg1.4
  'folder_file' => 'cartella/file', //cpg1.4
  'coppermine_version' => 'versione cpg', //cpg1.4
  'file_version' => 'versione file', //cpg1.4
  'webcvs' => 'web svn', //cpg1.4
  'writable' => 'scrivibile', //cpg1.4
  'not_writable' => 'non scrivibile', //cpg1.4
  'help' => 'Aiuto', //cpg1.4
  'help_file_not_exist_optional1' => 'file/cartella inesistente', //cpg1.4
  'help_file_not_exist_optional2' => 'Il/la file/cartella %s non è stato trovato/a sul server. Anche se facoltativo dovresti caricarlo (tramite FTP) se stai incontrando dei problemi.', //cpg1.4
  'help_file_not_exist_mandatory1' => 'file/cartella inesistente', //cpg1.4
  'help_file_not_exist_mandatory2' => 'Il/la file/cartella %s non è stato trovato/a sul server, anche se necessario. Caricalo (tramite FTP).', //cpg1.4
  'help_no_local_version1' => 'Nessuna versione locale del file', //cpg1.4
  'help_no_local_version2' => 'Lo script non è in grado di estrarre la versione locale del file - il tuo file o è troppo vecchio o lo hai modificato, rimuovendo le informazioni dell\'header. Aggiornare il file è raccomandato.', //cpg1.4
  'help_local_version_outdated1' => 'Versione locale vecchia', //cpg1.4
  'help_local_version_outdated2' => 'La tua versione di questo file sembra essere di una vecchia versione di Coppermine (che hai probabilmente aggiornato). Assicurati di aggiornare anche questo file.', //cpg1.4
  'help_local_version_na1' => 'Impossibile estrarre informazioni sulla versione cvs', //cpg1.4
  'help_local_version_na2' => 'Lo script non riesce a determinare la versione cvs del file sul tuo server. Dovresti caricare la versione dal tuo pacchetto.', //cpg1.4
  'help_local_version_dev1' => 'Versione di sviluppo', //cpg1.4
  'help_local_version_dev2' => 'Il file sul tuo webserver sembra essere più nuova della tua versione di coppermine. O stai usando un file di sviluppo (dovresti farlo solo se sei sicuro di quel che stai facendo), o hai aggiornato coppermine e non hai caricato include/init.inc.php', //cpg1.4
  'help_not_writable1' => 'Cartella non scrivibile', //cpg1.4
  'help_not_writable2' => 'Cambia i permessi file (CHMOD) per garantire allo script l\'accesso in scrittura alla cartella %s e a tutto il suo contenuto.', //cpg1.4
  'help_writable1' => 'Cartella scrivibile', //cpg1.4
  'help_writable2' => 'La cartella %s è scrivibile. Questo è un rischio non necessario, solo coppermine necessita di permessi read/execute.', //cpg1.4
  'help_writable_undetermined' => 'Coppermine non è in grado di determinare se la cartella è scrivibile o meno.', //cpg1.4
  'your_file' => 'tuo file', //cpg1.4
  'reference_file' => 'reference file', //cpg1.4
  'summary' => 'Sommario', //cpg1.4
  'total' => 'Totale dei files/cartelle controllati', //cpg1.4
  'mandatory_files_missing' => 'Files obbligatori mancanti', //cpg1.4
  'optional_files_missing' => 'Files facoltativi mancanti', //cpg1.4
  'files_from_older_version' => 'Files lasciati da vecchie versioni di Coppermine', //cpg1.4
  'file_version_outdated' => 'Vecchie versioni del file', //cpg1.4
  'error_no_data' => 'Lo script ha fallito, non &grave; stato in grado di recuperare alcuna informazione. Spiacente per l\'inconveniente.', //cpg1.4
  'go_to_webcvs' => 'vai su %s', //cpg1.4
  'options' => 'Opzioni', //cpg1.4
  'show_optional_files' => 'Mostra cartelle/files facoltativi', //cpg1.4
  'show_mandatory_files' => 'Mostra files obbligatori', //cpg1.4
  'show_file_versions' => 'Mostra versioni file', //cpg1.4
  'show_errors_only' => 'Mostra solo cartelle/files con errori', //cpg1.4
  'show_permissions' => 'Mostra permessi cartella', //cpg1.4
  'show_condensed_output' => 'Mostra output condensato (per screenshots più semplici)', //cpg1.4
  'coppermine_in_webroot' => 'Coppermine è installata nella webroot', //cpg1.4
  'connect_online_repository' => 'Prova a connetterti alla repository online', //cpg1.4
  'show_additional_information' => 'Mostra informazioni aggiuntive', //cpg1.4
  'no_webcvs_link' => 'Non mostrare collegamenti web svn', //cpg1.4
  'stable_webcvs_link' => 'Mostra collegamenti web svn stabili', //cpg1.4
  'devel_webcvs_link' => 'Mostra collegamenti web svn di sviluppo', //cpg1.4
  'submit' => 'Applica Modifiche / Aggiorna', //cpg1.4
  'reset_to_defaults' => 'Ripristina impostazioni di default', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File view_log.php  //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('VIEWLOG_PHP')) $lang_viewlog_php = array(
  'delete_all' => 'Cancella tutti i Logs', //cpg1.4
  'delete_this' => 'Cancella questo Log', //cpg1.4
  'view_logs' => 'Visualizza Logs', //cpg1.4
  'no_logs' => 'Nessun log creato.', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File xp_publish.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('XP_PUBLISH_PHP')) {

$lang_xp_publish_client = <<<EOT
<h1>XP Web Publishing Wizard Client</h1><p>Questo modulo consente di usare <b>Windows XP</b> web publishing wizard con Coppermine.</p><p>Il codice è basato su articolo pubblicato da
EOT;

$lang_xp_publish_required = <<<EOT
<h2>Cosa è richiesto</h2><ul><li>Windows XP in modo da avere il wizard.</li><li>Una installazione funzionante di Coppermine sulla quale <b>la funzione di web upload funzioni correttamente.</b></li></ul><h2>Come installare dal lato client</h2><ul><li>Clicca col tasto destro su
EOT;

$lang_xp_publish_select = <<<EOT
Seleziona &quot;Salva destinazione con nome...&quot;. Salva il file sul tuo disco locale. Quando salvi il file, controlla che il nome proposto sia <b>cpg_###.reg</b> (the ### represents a numerical timestamp). Change it to that name if necessary (leave the numbers). When downloaded, double click on the file in order to register your server with the web publishing wizard.</li></ul>
EOT;

$lang_xp_publish_testing = <<<EOT
<h2>Testing</h2><ul><li>In Esplora risorse, seleziona alcuni files e clicca su <b>Pubblica xxx sul web</b> nel pannello di sinistra.</li><li>Conferma la tua selezione. Clicca su <b>Avanti</b>.</li><li>Nella lista dei servizi che appaiono, seleziona quella per la tua galleria (ha il nome della tua galleria). Se il servizio non appare, controlla di aver installato <b>cpg_pub_wizard.reg</b> come descritto.</li><li>Inserisci le tue informazioni di login se richiesto.</li><li>Seleziona gli album di destinazione per le tue immagini o creane di nuovi.</li><li>Clicca su <b>Avanti</b>. Il caricamento dovrebbe incominciare.</li><li>Quando sarà completato, controlla la galleria per vedere se le immagini sono state aggiunte correttamente.</li></ul>
EOT;

$lang_xp_publish_notes = <<<EOT
<h2>Note :</h2><ul><li>Una volta iniziato il caricamento, il wizard non può mostrare nessun messaggio di errore da parte dello script così non puoi sapere se tutto sia andato a buon fine o meno, finchè non controllerai la galleria.</li><li>Se il caricamento fallisce, abilita il &quot;Debug mode&quot; sulla pagina di amministrazione, tenta con una sola immagine e controlla i messaggi di errore nel file
EOT;

$lang_xp_publish_flood = <<<EOT
che si trova nella cartella di Coppermine sul tuo server.</li><li>Per evitare che la galleria sia <i>bombardata (flooding)</i> da immagini caricate attraverso il wizard, solo gli <b>amministratori</b> e <b>gli utenti che possono avere i propri albums</b> possono usare questa funzione.</li>
EOT;



$lang_xp_publish_php = array(
  'title' => 'Coppermine - XP Web Publishing Wizard', //cpg1.4
  'welcome' => 'Benvenuto <b>%s</b>,', //cpg1.4
  'need_login' => 'Devi eseguire il login sulla galleria usando il browser prima di usare il wizard.<p/><p>Quando esegui il login non scordarti di selezionare l\'opzione <b>Ricordami</b> se presente.', //cpg1.4
  'no_alb' => 'Spiacente, non esiste nessun album nel quale ti sia consentito il caricamento di immagini tramite il wizard.', //cpg1.4
  'upload' => 'Carica le tue immagini in un album esistente', //cpg1.4
  'create_new' => 'Crea un nuovo album per le tue immagini', //cpg1.4
  'album' => 'Album', //cpg1.4
  'category' => 'Categoria', //cpg1.4
  'new_alb_created' => 'Il tuo nuovo album &quot;<b>%s</b>&quot; è stato creato.', //cpg1.4
  'continue' => 'Premi &quot;Avanti&quot; per iniziare il caricamento', //cpg1.4
  'link' => 'questo link', //cpg1.4
);
}
?>