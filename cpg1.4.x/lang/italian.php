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
  Coppermine version: 1.4.28
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
  'trans_name'=> array('Ganesh','Ludo'),
  'trans_email' => array('gq@gospel.bo.it', 'glrocca@tin.it'),
  'trans_website' => array('http://www.gospel.bo.it/', 'http://vanrokken.altervista.org/'),
  'trans_date' => '2009-05-23',
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
$album_date_fmt =    '%d %B %Y';
$lastcom_date_fmt =  '%d/%m/%y, %H.%M';
$lastup_date_fmt = '%d %B %Y';
$register_date_fmt = '%d %B %Y';
$lasthit_date_fmt = '%d %B %Y, %H.%M';
$comment_date_fmt =  '%d %B %Y, %H.%M';
$log_date_fmt = '%d %B %Y, %H.%M'; //cpg1.4

// For the word censor
$lang_bad_words = array('*cazz*', 'figa', '*culo*', 'puttan*', 'sborra*', 'stronz*', 'bastard*', 'troia*', 'minchia*');

$lang_meta_album_names = array(
  'random' => 'Immagini a caso',
  'lastup' => 'Ultimi arrivi',
  'lastalb'=> 'Ultimi album aggiornati',
  'lastcom' => 'Ultimi commenti',
  'topn' => 'Più viste',
  'toprated' => 'Più votate',
  'lasthits' => 'Ultimi file visti',
  'search' => 'Risultati ricerca',
  'favpics'=> 'File preferiti',  //cpg1.4
);

$lang_errors = array(
  'access_denied' => 'Non possiedi i permessi necessari per accedere alla pagina.',
  'perm_denied' => 'Non possiedi i permessi necessari per eseguire questa operazione.',
  'param_missing' => 'Script eseguito senza i parametri necessari.',
  'non_exist_ap' => 'Il file o l\'album non esiste !',
  'quota_exceeded' => 'Quota disco superata<br /><br />Hai una quota disco pari a [quota]Kb ed i tuoi file occupano attualmente [space]Kb, aggiungere questo file significa superare il limite.',
  'gd_file_type_err' => 'Usando la libreria GD i tipi di file consentiti sono solo JPEG and PNG.',
  'invalid_image' => 'L\'immagine caricata risulta corrotta o non riesce ad essere gestita dalla libreria GD',
  'resize_failed' => 'Impossibile creare la miniatura o l\'immagine di dimensioni intermedie.',
  'no_img_to_display' => 'Nessuna immagine da mostrare',
  'non_exist_cat' => 'La categoria selezionata non esiste',
  'orphan_cat' => 'Collegamento non esistente in una categoria, utilizzare Gestione categorie per correggere il problema',
  'directory_ro' => 'La cartella \'%s\' non è scrivibile, i file non possono essere cancellati',
  'pic_in_invalid_album' => 'Il file risiede in un album inesistente (%s)!?',
  'banned' => 'Al momento sei estromesso, non ti è consentito accedere al sito.',
  'not_with_udb' => 'Questa funzione è disabilitata in Coppermine in quanto si tratta di un\'integrazione con un forum. O quello che provi a fare non viene supportato da questa configurazione, o la funzione dovrebbe essere gestita dal software del forum.',
  'offline_title' => 'Non disponibile',
  'offline_text' => 'La Galleria non è disponibile al momento, riprova più tardi',
  'ecards_empty' => 'Al momento non ci sono cartoline da mostrare.',
  'action_failed' => 'Azione fallita.  Coppermine non è in grado di gestire la tua richiesta.',
  'no_zip' => 'Le librerie necessarie per processare i file ZIP non sono disponibili.  Contattare l\'amministratore.',
  'zip_type' => 'Non possiedi i permessi per caricare file ZIP.',
  'database_query' => 'Si è verificato un errore eseguendo una query al database', //cpg1.4
  'non_exist_comment' => 'Il commento selezionato non esiste', //cpg1.4
  'register_globals_on' => 'La direttiva PHP register_globals è abilitata sul tuo server, il che non è una buona idea in termini di sicurezza. É altamente raccomandabile impostarla ad Off. [<a href="http://forum.coppermine-gallery.net/index.php/topic,59569.0.html" rel="external" class="external">dettagli</a>]',
  
);

$lang_bbcode_help_title = 'Aiuto BbCode'; //cpg1.4
$lang_bbcode_help = 'Puoi aggiungere collegamenti cliccabili ed alcune formattazioni a questo campo usando i tags bbcode: <li>[b]Grassetto[/b] =&gt; <b>Grassetto</b></li><li>[i]Corsivo[/i] =&gt; <i>Corsivo</i></li><li>[url=http://yoursite.com/]Titolo del collegamento[/url] =&gt; <a href="http://yoursite.com">Titolo del collegamento</a></li><li>[email]user@domain.com[/email] =&gt; <a href="mailto:nome@dominio.it">nome@dominio.it</a></li><li>[color=red]testo qualsiasi[/color] =&gt; <span style="color:red">testo qualsiasi</span></li><li>[img]http://coppermine-gallery.net/demo/cpg14x/images/red.gif[/img] => <img src="../images/red.gif" border="0" alt="" /></li>'; //cpg1.4

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
  'home_title' => 'Vai alla pagina iniziale',
  'home_lnk' => 'Home',
  'alb_list_title' => 'Vai alla lista album',
  'alb_list_lnk' => 'Lista album',
  'my_gal_title' => 'Vai alla galleria personale',
  'my_gal_lnk' => 'Galleria personale',
  'my_prof_title' => 'Vai al profilo', //cpg1.4
  'my_prof_lnk' => 'Profilo',
  'adm_mode_title' => 'Entra in modalità amministratore',
  'adm_mode_lnk' => 'Modalità amministratore',
  'usr_mode_title' => 'Entra in modalità utente',
  'usr_mode_lnk' => 'Modalità utente',
  'upload_pic_title' => 'Carica un file in un album',
  'upload_pic_lnk' => 'Carica file',
  'register_title' => 'Iscriviti al sito',
  'register_lnk' => 'Registrati',
  'login_title' => 'Connettiti', //cpg1.4
  'login_lnk' => 'Login',
  'logout_title' => 'Disconnettiti', //cpg1.4
  'logout_lnk' => 'Logout',
  'lastup_title' => 'Mostra foto recenti', //cpg1.4
  'lastup_lnk' => 'Ultimi arrivi',
  'lastcom_title' => 'Mostra gli ultimi commenti', //cpg1.4
  'lastcom_lnk' => 'Ultimi commenti',
  'topn_title' => 'Mostra i file più visti', //cpg1.4
  'topn_lnk' => 'File più visti',
  'toprated_title' => 'Mostra file più votati', //cpg1.4
  'toprated_lnk' => 'File più votati',
  'search_title' => 'Ricerca nella galleria', //cpg1.4
  'search_lnk' => 'Cerca',
  'fav_title' => 'Vai ai preferiti', //cpg1.4
  'fav_lnk' => 'Preferiti',
  'memberlist_title' => 'Mostra lista iscritti',
  'memberlist_lnk' => 'Lista iscritti',
  'faq_title' => 'Domande frequenti sulla galleria di immagini &quot;Coppermine&quot;',
  'faq_lnk' => 'FAQ',
);

$lang_gallery_admin_menu = array(
  'upl_app_title' => 'Approva nuovi file caricati', //cpg1.4
  'upl_app_lnk' => 'Approvazione file',
  'admin_title' => 'Vai alla configurazione', //cpg1.4
  'admin_lnk' => 'Configurazione', //cpg1.4
  'albums_title' => 'Vai alla configurazione album', //cpg1.4
  'albums_lnk' => 'Album',
  'categories_title' => 'Vai alla configurazione categorie', //cpg1.4
  'categories_lnk' => 'Categorie',
  'users_title' => 'Vai alla configurazione utenti', //cpg1.4
  'users_lnk' => 'Utenti',
  'groups_title' => 'Vai alla configurazione gruppi', //cpg1.4
  'groups_lnk' => 'Gruppi',
  'comments_title' => 'Guarda tutti i commenti', //cpg1.4
  'comments_lnk' => 'Mostra commenti',
  'searchnew_title' => 'Vai alla funzione per l\'aggiunta cumulativa di molteplici file', //cpg1.4
  'searchnew_lnk' => 'Aggiunta cumulativa',
  'util_title' => 'Vai agli strumenti di amministrazione', //cpg1.4
  'util_lnk' => 'Strumenti di amministrazione',
  'key_title' => 'Vai al dizionario delle parole chiave', //cpg1.4
  'key_lnk' => 'Dizionario parole chiave', //cpg1.4
  'ban_title' => 'Visualizza utenti estromessi', //cpg1.4
  'ban_lnk' => 'Estrometti utenti',
  'db_ecard_title' => 'Mostra cartoline elettroniche', //cpg1.4
  'db_ecard_lnk' => 'Cartoline',
  'pictures_title' => 'Ordina le immagini in galleria', //cpg1.4
  'pictures_lnk' => 'Ordina immagini', //cpg1.4
  'documentation_lnk' => 'Documentazione', //cpg1.4
  'documentation_title' => 'Manuale Coppermine', //cpg1.4
);

$lang_user_admin_menu = array(
  'albmgr_title' => 'Crea e organizza album', //cpg1.4
  'albmgr_lnk' => 'Crea / organizza album',
  'modifyalb_title' => 'Modifica album',  //cpg1.4
  'modifyalb_lnk' => 'Modifica album',
  'my_prof_title' => 'Vai al tuo profilo', //cpg1.4
  'my_prof_lnk' => 'Profilo',
);

$lang_cat_list = array(
  'category' => 'Categoria',
  'albums' => 'Album',
  'pictures' => 'File',
);

$lang_album_list = array(
  'album_on_page' => '%d album in %d pagina(e)',
);

$lang_thumb_view = array(
  'date' => 'DATA',
  //Sort by filename and title
  'name' => 'NOME FILE',
  'title' => 'TITOLO',
  'sort_da' => 'Ordina per data (prima i meno recenti)',
  'sort_dd' => 'Ordina per data (prima i più recenti)',
  'sort_na' => 'Ordina per nome (A-Z)',
  'sort_nd' => 'Ordina per nome (Z-A)',
  'sort_ta' => 'Ordina per titolo (A-Z)',
  'sort_td' => 'Ordina per titolo (Z-A)',
  'position' => 'POSIZIONE', //cpg1.4
  'sort_pa' => 'Elenca per posizione (ascendente)', //cpg1.4
  'sort_pd' => 'Elenca per posizione (discendente)', //cpg1.4
  'download_zip' => 'Scarica come file ZIP',
  'pic_on_page' => '%d file su %d pagina(e)',
  'user_on_page' => '%d utenti su %d pagina(e)',
  'enter_alb_pass' => 'Inserisci la password per l\'album', //cpg1.4
  'invalid_pass' => 'Password non valida', //cpg1.4
  'pass' => 'Password', //cpg1.4
  'submit' => 'Invia', //cpg1.4
);

$lang_img_nav_bar = array(
  'thumb_title' => 'Ritorna all\'elenco miniature',
  'pic_info_title' => 'Mostra/nascondi informazioni sul file',
  'slideshow_title' => 'Presentazione',
  'ecard_title' => 'Invia questo file come cartolina',
  'ecard_disabled' => 'Cartoline disabilitate',
  'ecard_disabled_msg' => 'Non possiedi i permessi necessari per inviare cartoline', //js-alert
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
  CRITICAL_ERROR => 'Errore critico',
  'file' => 'File: ',
  'line' => 'Line: ',
);

$lang_display_thumbnails = array(
  'filename' => 'Nome file=', //cpg1.4
  'filesize' => 'Peso file=', //cpg1.4
  'dimensions' => 'Dimensioni=', //cpg1.4
  'date_added' => 'Data inserimento=', //cpg1.4
);

$lang_get_pic_data = array(
  'n_comments' => '%s commenti',
  'n_views' => '%s visite',
  'n_votes' => '(%s voti)',
);

$lang_cpg_debug_output = array(
  'debug_info' => 'Informazioni di debug',
  'select_all' => 'Seleziona tutto',
  'copy_and_paste_instructions' => 'Se stai per chiedere aiuto sul forum di supporto di Coppermine, copia e incolla questo output di debug nel vostro thread quando richiesto, insieme al messaggio di errore (se esistente). Accertati di cambiare nella query ogni password con ***** prima di postarle. <br />Nota: Questo è solo per informazione e non significa che ci sia un errore nella tua galleria.', //cpg1.4
  'phpinfo' => 'Mostra PhPInfo',
  'notices' => 'Avvisi', //cpg1.4
);

$lang_language_selection = array(
  'reset_language' => 'Lingua predefinita',
  'choose_language' => 'Seleziona lingua',
);

$lang_theme_selection = array(
  'reset_theme' => 'Tema predefinito',
  'choose_theme' => 'Seleziona un tema',
);

$lang_version_alert = array(
  'version_alert' => 'Versione non supportata!', //cpg1.4
  'no_stable_version' => 'Hai installato Coppermine %s (%s) una versione indicata ad utenti esperti - questa versione non ha nessun supporto e nessuna garanzia. Usala a tuo rischio o esegui un downgrade all\'ultima versione stabile se necessiti di supporto!', //cpg1.4
  'gallery_offline' => 'La Galleria è al momento fuori linea, sarà visibile solo da te come amministratore. Non dimenticarti di rimetterla in linea una volta terminata la manutenzione.', //cpg1.4
);

$lang_create_tabs = array(
  'previous' => 'Precedente', //cpg1.4
  'next' => 'Successiva', //cpg1.4
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
  'Smile' => 'Sorridente',
  'Sad' => 'Triste',
  'Surprised' => 'Sorpreso',
  'Shocked' => 'Scioccato',
  'Confused' => 'Confuso',
  'Cool' => 'Figo!',
  'Laughing' => 'Sto ridendo',
  'Mad' => 'Pazzo',
  'Razz' => 'Pernacchia',
  'Embarassed' => 'Imbarazzato',
  'Crying or Very sad' => 'Molto triste',
  'Evil or Very Mad' => 'Cattivo',
  'Twisted Evil' => 'Molto cattivo',
  'Rolling Eyes' => 'Perplesso',
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
  0 => 'Lascio la modalità amministratore...',
  1 => 'Entro in modalità amministratore...',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
  'alb_need_name' => 'Gli album devono avere un nome !', //js-alert
  'confirm_modifs' => 'Sicuro di voler applicare queste modifiche ?', //js-alert
  'no_change' => 'Nessuna modifica eseguita !', //js-alert
  'new_album' => 'Nuovo album',
  'confirm_delete1' => 'Sicuro di voler cancellare questo album ?', //js-alert
  'confirm_delete2' => '\nTutti i file e i commenti contenuti andranno persi !', //js-alert
  'select_first' => 'Seleziona un album prima', //js-alert
  'alb_mrg' => 'Gestione album',
  'my_gallery' => '* Galleria personale *',
  'no_category' => '* Nessuna categoria *',
  'delete' => 'Cancella',
  'new' => 'Nuovo',
  'apply_modifs' => 'Applica modifiche',
  'select_category' => 'Seleziona categoria',
);

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) $lang_banning_php = array(
  'title' => 'Estrometti utenti', //cpg1.4
  'user_name' => 'Nome utente', //cpg1.4
  'ip_address' => 'Indirizzo IP', //cpg1.4
  'expiry' => 'Scadenza (vuoto significa permanente)', //cpg1.4
  'edit_ban' => 'Salva modifiche', //cpg1.4
  'delete_ban' => 'Cancella', //cpg1.4
  'add_new' => 'Aggiungi nuovo utente estromesso', //cpg1.4
  'add_ban' => 'Aggiungi', //cpg1.4
  'error_user' => 'Impossibile trovare utente', //cpg1.4
  'error_specify' => 'Devi specificare o il nome utente o un indirizzo IP', //cpg1.4
  'error_ban_id' => 'ID estromissione non valido!', //cpg1.4
  'error_admin_ban' => 'Non puoi estrometterti da solo!', //cpg1.4
  'error_server_ban' => 'Vuoi estromettere il tuo stesso server? Tsk tsk, non lo puoi fare...', //cpg1.4
  'error_ip_forbidden' => 'Non puoi estromettere questo IP - si tratta di un IP non-routable (privato) comunque!<br />Se vuoi consentire il banning egli IP privati, devi cambiare le preferenze nella <a href="admin.php">Configurazione</a> (ha senso solo se Coppermine gira su una LAN).', //cpg1.4
  'lookup_ip' => 'Verifica un indirizzo IP', //cpg1.4
  'submit' => 'Vai!', //cpg1.4
  'select_date' => 'seleziona data', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File bridgemgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('BRIDGEMGR_PHP')) $lang_bridgemgr_php = array(
  'title' => 'Integrazione guidata',
  'warning' => 'Attenzione: usando questo procedimento guidato i dati sensibili verranno trasmessi tramite moduli html. Fallo girare solo sul tuo PC (non su macchine pubbliche come in un internet cafe), e assicurati di pulire la cache del navigatore e i file temporanei dopo aver finito, o altri potrebbero accedere ai tuoi dati!',
  'back' => 'indietro',
  'next' => 'avanti',
  'start_wizard' => 'Inizia integrazione guidata',
  'finish' => 'Finisci',
  'hide_unused_fields' => 'Nascondi campi inutilizzati (consigliato)',
  'clear_unused_db_fields' => 'Pulisci valori del database non validi (consigliato)',
  'custom_bridge_file' => 'Il nome del tuo file di integrazione personalizzato (Se il nome del file di integrazione è <i>miofile.inc.php</i>, inserisci <i>miofile</i> in questo campo)',
  'no_action_needed' => 'Nessuna azione necessaria in questo passo. Premi \'avanti\' per continuare.',
  'reset_to_default' => 'Ripristina impostazioni predefinite',
  'choose_bbs_app' => 'Scegli l\'applicazione con la quale integrare Coppermine',
  'support_url' => 'Vai qui per il supporto a questa applicazione',
  'settings_path' => 'Percorso usato dalla BBS',
  'database_connection' => 'Connessione database',
  'database_tables' => 'Tabelle del database',
  'bbs_groups' => 'Gruppi della BBS',
  'license_number' => 'Numero di licenza',
  'license_number_explanation' => 'inserisci il tuo numero di licenza (se necessario)',
  'db_database_name' => 'Nome del database',
  'db_database_name_explanation' => 'Inserisci il nome del database usato dalla BBS',
  'db_hostname' => 'Indirizzo del database',
  'db_hostname_explanation' => 'Indirizzo dove risiede il tuo database mySQL, di solito &quot;localhost&quot;',
  'db_username' => 'Nome utente del database',
  'db_username_explanation' => 'Utente mySQL da usare per la connessione con la BBS',
  'db_password' => 'Password del database',
  'db_password_explanation' => 'Passsword per questo utente mySQL',
  'full_forum_url' => 'URL della BBS',
  'full_forum_url_explanation' => 'URL della BBS (incluso http:// , es. http://www.yourdomain.tld/forum)',
  'relative_path_of_forum_from_webroot' => 'Percorso della BBS rispetto alla cartella iniziale del sito',
  'relative_path_of_forum_from_webroot_explanation' => 'Percorso relativo della BBS rispetto alla cartella iniziale del sito web (Esempio: se la tua board risiede su http://www.yourdomain.tld/forum/, inserisci &quot;/forum/&quot; in questo campo)',
  'relative_path_to_config_file' => 'Percorso della BBS rispetto alla cartella di Coppermine',
  'relative_path_to_config_file_explanation' => 'Percorso relativo della BBS, partendo dalla cartella di Coppermine (es. &quot;../forum/&quot; se la tua board risiede su http://www.yourdomain.tld/forum/ e Coppermine su http://www.yourdomain.tld/gallery/)',
  'cookie_prefix' => 'Prefisso cookie',
  'cookie_prefix_explanation' => 'questo deve essere il nome del cookie della BBS',
  'table_prefix' => 'Prefisso tabelle',
  'table_prefix_explanation' => 'Deve corrispondere al prefisso scelto per la BBS.',
  'user_table' => 'Tabella utente',
  'user_table_explanation' => '(solitamente il valore predefinito dovrebbe andar bene, a meno che la tua installazione non sia standard)',
  'session_table' => 'Tabella sessioni',
  'session_table_explanation' => '(solitamente il valore predefinito dovrebbe andar bene, a meno che la tua installazione non sia standard)',
  'group_table' => 'Tabella gruppi',
  'group_table_explanation' => '(solitamente il valore di default dovrebbe andar bene, a meno che la tua installazione non sia standard)',
  'group_relation_table' => 'Tabella relazioni gruppi',
  'group_relation_table_explanation' => '(solitamente il valore predefinito dovrebbe andar bene, a meno che la tua installazione non sia standard)',
  'group_mapping_table' => 'Tabella mappatura gruppi',
  'group_mapping_table_explanation' => '(solitamente il valore predefinito dovrebbe andar bene, a meno che la tua installazione non sia standard)',
  'use_standard_groups' => 'Utilizza i gruppi standard della BBS',
  'use_standard_groups_explanation' => 'Utilizza i gruppi utente standard (consigliato). Questo annullerà ogni personalizzazione alle impostazioni dei gruppi creata in questa pagina. Disabilita questa opzione SOLO se sai veramente cosa stai facendo!',
  'validating_group' => 'Gruppo in attesa di convalida',
  'validating_group_explanation' => 'ID del gruppo della BBS che comprende gli account utente che richiedono di essere convalidati (solitamente il valore predefinito dovrebbe andar bene, a meno che la tua installazione non sia standard)',
  'guest_group' => 'Gruppo Ospiti',
  'guest_group_explanation' => 'ID del gruppo della BBS che comprende gli ospiti (utenti anonimi) (il valore predefinito dovrebbe andar bene, cambialo solo se sai cosa stai facendo)',
  'member_group' => 'Gruppo Utenti registrati',
  'member_group_explanation' => 'ID del gruppo della BBS che comprende gli utenti &quot;regolari&quot; (il valore predefinito dovrebbe andar bene, cambialo solo se sai cosa stai facendo)',
  'admin_group' => 'Gruppo Amministratori',
  'admin_group_explanation' => 'ID del gruppo della BBS che comprende gli amministratori (il valore predefinito dovrebbe andar bene, cambialo solo se sai cosa stai facendo)',
  'banned_group' => 'Gruppo Utenti estromessi',
  'banned_group_explanation' => 'ID del gruppo della BBS che comprende gli utenti estromessi (il valore predefinito dovrebbe andar bene, cambialo solo se sai cosa stai facendo)',
  'global_moderators_group' => 'Gruppo Moderatori globali',
  'global_moderators_group_explanation' => 'ID del gruppo della BBSche comprende i moderatori globali (il valore predefinito dovrebbe andar bene, cambialo solo se sai cosa stai facendo)',
  'special_settings' => 'Impostazioni specifiche BBS',
  'logout_flag' => 'Versione phpBB (per gestione logout)',
  'logout_flag_explanation' => 'La versione del tuo forum phpBB (questa impostazione specifica come vengono gestiti i logouts)',
  'use_post_based_groups' => 'Utilizzi gruppi basati sul numero di post?',
  'logout_flag_yes' => '2.0.5 o superiore',
  'logout_flag_no' => '2.0.4 o inferiore',
  'use_post_based_groups_explanation' => 'Inserire anche i gruppi basati sul numero di post (consente una gestione particolareggiata dei permessi) o solo i gruppi di default (consente un livello di amministrazione semplice, consigliato)? Puoi cambiare questa impostazione anche in seguito.',
  'use_post_based_groups_yes' => 'si',
  'use_post_based_groups_no' => 'no',
  'error_title' => 'Devi correggere questi errori prima di continuare. Torna alla schermata precedente.',
  'error_specify_bbs' => 'Devi specificare con quale applicazione vuoi eseguire l\'integrazione.',
  'error_no_blank_name' => 'Non puoi lasciare vuoto il nome del tuo file di integrazione personalizzato.',
  'error_no_special_chars' => 'Il nome del file di integrazione non deve contenere caratteri speciali eccetto (_) e (-)!',
  'error_bridge_file_not_exist' => 'Il file di integrazione %s non esiste sul server. Controlla di averlo caricato.',
  'finalize' => 'abilita/disabilita integrazione con la BBS',
  'finalize_explanation' => 'Bene, le impostazioni specificate sono state inserite nel database, ma l\'integrazione con la BBS non è stata abilitata. Puoi abilitarla/disabilitarda anche successivamente, in qualsiasi momento. Ricordati il nome utente dell\'account amministratore e la password dell\'installazione Coppermine autonoma: potrebbe servirti in seguito per effettuare modifiche. Se qualcosa non dovesse andare a buon fine, vai su  %s e disabilita l\'integrazione con la BBS, usando l\'account amministratore.',
  'your_bridge_settings' => 'Impostazioni per l\'integrazione',
  'title_enable' => 'Abilita integrazione con %s',
  'bridge_enable_yes' => 'Abilita',
  'bridge_enable_no' => 'Disabilita',
  'error_must_not_be_empty' => 'non deve essere vuoto',
  'error_either_be' => 'deve essere o %s o %s',
  'error_folder_not_exist' => '%s non esiste. Correggi il valore inserito per %s',
  'error_cookie_not_readible' => 'Coppermine non riesce a leggere un cookie chiamato %s. Correggi il valore inserito per %s, o vai sul pannello di amministrazione della tua BBS e assicurati che il percorso del cookie sia raggiungibile da Coppermine.',
  'error_mandatory_field_empty' => 'Non puoi lasciare il campo %s vuoto: riempilo col valore appropriato.',
  'error_no_trailing_slash' => 'Non ci deve essere una sbarra nel campo %s.',
  'error_trailing_slash' => 'Ci deve essere una sbarra nel campo %s.',
  'error_db_connect' => 'Impossibile connettersi al database mySQL con i parametri specificati. Di seguito la risposta del database:',
  'error_db_name' => 'Anche se Coppermine è riuscita a connettersi, non è riuscita a trovare il database %s. Assicurati di aver specificato %s correttamente. Di seguito la risposta del database:',
  'error_prefix_and_table' => '%s e ',
  'error_db_table' => 'Impossibile trovare la tabella %s. Assicurati di aver specificato %s correttamente.',
  'recovery_title' => 'Gestione integrazione: riparazione di emergenza',
  'recovery_explanation' => 'Se sei arrivato qui per amministrare l\'integrazione della BBS con la tua galleria Coppermine, devi prima effettuare il login come amministratore. Se non puoi effettuare il login poichè il bridging non funziona correttamente, puoi disabilitare l\'integrazione in questa pagina. Inserendo utente e password non ti consentirà di effettuare il login, ma disabiliterà l\'integrazione con la BBS. Controlla la documentazione per dettagli.',
  'username' => 'Utente',
  'password' => 'Password',
  'disable_submit' => 'Invia',
  'recovery_success_title' => 'Autorizzato con successo',
  'recovery_success_content' => 'Hai disabilitato con successo il bridging con la BBS. La tua installazione di Coppermine ora gira come autonoma.',
  'recovery_success_advice_login' => 'Connettiti come amministratore per modificare le impostazioni di bridging e/o abilitare di nuovo l\'integrazione con la BBS.',
  'goto_login' => 'Vai alla pagina di login',
  'goto_bridgemgr' => 'Vai a Gestione integrazione',
  'recovery_failure_title' => 'Autorizzazione fallita',
  'recovery_failure_content' => 'Hai fornito credenziali non corrette. Devi fornire i dati di amministratore della versione autonoma (normalmente quelle impostate durante l\'installazione).',
  'try_again' => 'ritenta',
  'recovery_wait_title' => 'Aspetta, non è ancora trascorso un tempo sufficiente',
  'recovery_wait_content' => 'Per motivi di sicurezza questo script non consente sessioni fallite di login in rapida successione, quindi devi aspettare qualche tempo prima di ritentare.',
  'wait' => 'attendi',
  'create_redir_file' => 'Crea file di reindirizzamento (consigliato)',
  'create_redir_file_explanation' => 'Per reindirizzare gli utenti a Coppermine una volta effettuato il login alla BBS necessiti di un file di redirect da creare nella cartella della BBS stessa. Se selezioni questa opzione , la gestione bridging tenterà di creare questo file per te, o fornirà un codice per creare manualmente il file.',
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
  'usergal_cat_ro' => 'La categoria Gallerie utenti non può essere cancellata !',
  'manage_cat' => 'Gestione categorie',
  'confirm_delete' => 'Sicuro di voler CANCELLARE questa categoria', //js-alert
  'category' => 'Categoria',
  'operations' => 'Operazioni',
  'move_into' => 'Sposta in',
  'update_create' => 'Aggiorna/Crea categoria',
  'parent_cat' => 'Categoria madre',
  'cat_title' => 'Titolo categoria',
  'cat_thumb' => 'Miniatura categoria',
  'cat_desc' => 'Descrizione categoria',
  'categories_alpha_sort' => 'Elenca categorie alfabeticamente (invece che in ordine personalizzato)', //cpg1.4
  'save_cfg' => 'Salva configurazione', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File admin.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('ADMIN_PHP')) $lang_admin_php = array(
  'title' => 'Configurazione galleria', //cpg1.4
  'manage_exif' => 'Gestione dati EXIF', //cpg1.4
  'manage_plugins' => 'Gestione plugin', //cpg1.4
  'manage_keyword' => 'Gestione parole chiave', //cpg1.4
  'restore_cfg' => 'Ripristina impostazioni di sistema',
  'save_cfg' => 'Salva nuova configurazione',
  'notes' => 'Note',
  'info' => 'Informazione',
  'upd_success' => 'Configurazione di Coppermine aggiornata',
  'restore_success' => 'Configurazione predefinita ripristinata',
  'name_a' => 'Nome ascendente',
  'name_d' => 'Nome discendente',
  'title_a' => 'Titolo ascendente',
  'title_d' => 'Titolo discendente',
  'date_a' => 'Data ascendente',
  'date_d' => 'Data discendente',
  'pos_a' => 'Posizione ascendente', //cpg1.4
  'pos_d' => 'Posizione discendente', //cpg1.4
  'th_any' => 'Entrambe',
  'th_ht' => 'Altezza',
  'th_wd' => 'Larghezza',
  'label' => 'testo',
  'item' => 'bandiera',
  'debug_everyone' => 'Tutti',
  'debug_admin' => 'Solo amministratori',
  'no_logs'=> 'Nessuno', //cpg1.4
  'log_normal'=> 'Normali', //cpg1.4
  'log_all' => 'Completi', //cpg1.4
  'view_logs' => 'Guarda rapporti', //cpg1.4
  'click_expand' => 'clicca sul nome della sezione per espandere', //cpg1.4
  'expand_all' => 'Espandi tutto', //cpg1.4
  'notice1' => '(*) Queste impostazioni non devono essere cambiate se hai già dei file nel database.', //cpg1.4 - (relocated)
  'notice2' => '(**) Quando modifichi queste impostazioni, solo i file aggiunti da questo momento in poi ne saranno affetti, quindi è consigliabile non cambiare queste impostazioni se sono già presenti dei file nella galleria. Puoi comunque applicare i cambiamenti ai file esistenti con gli &quot;<a href="util.php">Strumenti di amministrazione</a> (ridimensiona immagini)&quot; dal menu Amministrazione.', //cpg1.4 - (relocated)
  'notice3' => '(***) Tutti i file di rapporto sono in inglese.', //cpg1.4 - (relocated)
  'bbs_disabled' => 'Funzione non abilitata nell\'integrazione BBS', //cpg1.4
  'auto_resize_everyone' => 'Tutti', //cpg1.4
  'auto_resize_user' => 'Solo utente', //cpg1.4
  'ascending' => 'ascendente', //cpg1.4
  'descending' => 'discendente', //cpg1.4
);

if (defined('ADMIN_PHP')) $lang_admin_data = array(
  'Impostazioni generali',
  array('Nome galleria', 'gallery_name', 0, 'f=index.htm&amp;as=admin_general_name&amp;ae=admin_general_name_end'), //cpg1.4
  array('Descrizione galleria', 'gallery_description', 0, 'f=index.htm&amp;as=admin_general_description&amp;ae=admin_general_description_end'), //cpg1.4
  array('Email amministratore', 'gallery_admin_email', 0, 'f=index.htm&amp;as=admin_general_email&amp;ae=admin_general_email_end'), //cpg1.4
  array('URL della cartella web di Coppermine (no \'index.php\' o simili alla fine)', 'ecards_more_pic_target', 0, 'f=index.htm&amp;as=admin_general_coppermine-url&amp;ae=admin_general_coppermine-url_end'), //cpg1.4
  array('URL della home page', 'home_target', 0, 'f=index.htm&amp;as=admin_general_home-url&amp;ae=admin_general_home-url_end'), //cpg1.4
  array('Consenti di scaricare i preferiti in formato ZIP', 'enable_zipdownload', 1, 'f=index.htm&amp;as=admin_general_zip-download&amp;ae=admin_general_zip-download_end'), //cpg1.4
  array('Fuso orario relativo al GMT (ora attuale: ' . localised_date(-1, $comment_date_fmt) . ')','time_offset',0, 'f=index.htm&amp;as=admin_general_time-offset&amp;ae=admin_general_time-offset_end&amp;top=1'), //cpg1.4
  array('Abilita password criptate (non reversibile)','enable_encrypted_passwords',1, 'f=index.htm&amp;as=admin_general_encrypt_password_start&amp;ae=admin_general_encrypt_password_end&amp;top=1'), // cpg 1.4
  array('Abilita icone di aiuto (disponibile solo in inglese)','enable_help',9, 'f=index.htm&amp;as=admin_general_help&amp;ae=admin_general_help_end'), //cpg1.4
  array('Abilita parole chiave cliccabili nella ricerca','clickable_keyword_search',14, 'f=index.htm&amp;as=admin_general_keywords_start&amp;ae=admin_general_keywords_end'), //cpg1.4
  array('Abilita plugin', 'enable_plugins', 12, 'f=index.htm&amp;as=admin_general_enable-plugins&amp;ae=admin_general_enable-plugins_end'),  //cpg1.4
  array('Consenti estromissione degli IP non-routable (privati)', 'ban_private_ip', 1,  'f=index.htm&amp;as=admin_general_private-ip&amp;ae=admin_general_private-ip_end'), //cpg1.4
  array('Interfaccia per l\'aggiunta cumulativa navigabile', 'browse_batch_add', 1, 'f=index.htm&amp;as=admin_general_browsable_batch_add&amp;ae=admin_general_browsable_batch_add_end'), //cpg1.4

  'Lingua e impostazioni codifica caratteri',
  array('Lingua', 'lang', 5, 'f=index.htm&amp;as=admin_language_language&amp;ae=admin_language_language_end'), //cpg1.4
  array('Passa all\'inglese se non si trova la traduzione?', 'language_fallback', 1, 'f=index.htm&amp;as=admin_language_fallback&amp;ae=admin_language_fallback_end'), //cpg1.4
  array('Codifica caratteri', 'charset', 4, 'f=index.htm&amp;as=admin_language_charset&amp;ae=admin_language_charset_end'), //cpg1.4
  array('Mostra lista lingue', 'language_list', 1, 'f=index.htm&amp;as=admin_language_list&amp;ae=admin_language_list_end'), //cpg1.4
  array('Mostra bandiere lingue', 'language_flags', 8, 'f=index.htm&amp;as=admin_language_flags&amp;ae=admin_language_flags_end&amp;top=1'), //cpg1.4
  array('Mostra &quot;Ripristina&quot; nel menu Selezione lingua', 'language_reset', 1, 'f=index.htm&amp;as=admin_language_reset&amp;ae=admin_language_reset_end&amp;top=1'), //cpg1.4
  //array('Display previous/next on tabbed pages', 'previous_next_tab', 1), //cpg1.4

  'Impostazioni tema',
  array('Tema', 'theme', 6, 'f=index.htm&amp;as=admin_theme_theme&amp;ae=admin_theme_theme_end'), //cpg1.4
  array('Mostra lista temi', 'theme_list', 1, 'f=index.htm&amp;as=admin_theme_theme_list&amp;ae=admin_theme_theme_list_end'), //cpg1.4
  array('Mostra &quot;Ripristina&quot; nel menu Selezione temi', 'theme_reset', 1, 'f=index.htm&amp;as=admin_theme_theme_reset&amp;ae=admin_theme_theme_reset_end'), //cpg1.4
  array('Mostra FAQ', 'display_faq', 1, 'f=index.htm&amp;as=admin_theme_faq&amp;ae=admin_theme_faq_end'), //cpg1.4
  array('Nome voce personalizzata nel menu Galleria', 'custom_lnk_name', 0,'f=index.htm&amp;as=admin_theme_custom_lnk_name&amp;ae=admin_theme_custom_lnk_name_end'), //cpg1.4
  array('URL voce personalizzata nel menu Galleria', 'custom_lnk_url', 0,'f=index.htm&amp;as=admin_language_custom_lnk_url&amp;ae=admin_language_custom_lnk_url_end'), //cpg1.4
  array('Mostra aiuto BBCode', 'show_bbcode_help', 1, 'f=index.htm&amp;as=admin_theme_bbcode&amp;ae=admin_theme_bbcode_end&amp;top=1'), //cpg1.4
  array('Mostra il "blocco delle vanterie" nei temi definiti come conformi ad XHTML e CSS','vanity_block',1, 'f=index.htm&amp;as=vanity_block&amp;ae=vanity_block_end'), //cpg1.4
  array('Percorso per intestazione pagina personalizzata', 'custom_header_path', 0, 'f=index.htm&amp;as=admin_theme_include_path_start&amp;ae=admin_theme_include_path_end'), //cpg1.4
  array('Percorso per piè di pagina personalizzato', 'custom_footer_path', 0, 'f=index.htm&amp;as=admin_theme_include_path_start&amp;ae=admin_theme_include_path_end'), //cpg1.4

  'Visualizzazione Lista album',
  array('Larghezza della tabella principale (pixel o %)', 'main_table_width', 0, 'f=index.htm&amp;as=admin_album_table-width&amp;ae=admin_album_table-width_end'), //cpg1.4
  array('Numero di livelli di categorie da mostrare', 'subcat_level', 0, 'f=index.htm&amp;as=admin_album_category-levels&amp;ae=admin_album_category-levels_end'), //cpg1.4
  array('Numero di album da mostrare', 'albums_per_page', 0, 'f=index.htm&amp;as=admin_album_number&amp;ae=admin_album_number_end'), //cpg1.4
  array('Numero di colonne per la lista album', 'album_list_cols', 0, 'f=index.htm&amp;as=admin_album_columns&amp;ae=admin_album_columns_end'), //cpg1.4
  array('Dimensioni delle miniature in pixel', 'alb_list_thumb_size', 0, 'f=index.htm&amp;as=admin_album_thumbnail-size&amp;ae=admin_album_thumbnail-size_end'), //cpg1.4
  array('Contenuto della pagina principale', 'main_page_layout', 0, 'f=index.htm&amp;as=admin_album_list_content&amp;ae=admin_album_list_content_end'), //cpg1.4
  array('Mostra miniature degli album al primo livello per le categorie','first_level',1, 'f=index.htm&amp;as=admin_album_first-level_thumbs&amp;ae=admin_album_first-level_thumbs_end'), //cpg1.4
  array('Elenca categorie alfabeticamente (invece che in ordine personalizzato)','categories_alpha_sort',1, 'f=index.htm&amp;as=admin_album_list_alphasort_start&amp;ae=admin_album_list_alphasort_end'), //cpg1.4
  array('Mostra numero di file collegati','link_pic_count',1, 'f=index.htm&amp;as=admin_album_linked_files_start&amp;ae=admin_album_linked_files_end'), //cpg1.4

  'Visualizzazione Miniature',
  array('Numero di colonne nella pagina miniature', 'thumbcols', 0, 'f=index.htm&amp;as=admin_thumbnail_columns&amp;ae=admin_thumbnail_columns_end'), //cpg1.4
  array('Numero di righe nella pagina miniature', 'thumbrows', 0, 'f=index.htm&amp;as=admin_thumbnail_rows&amp;ae=admin_thumbnail_rows_end'), //cpg1.4
  array('Numero massimo di etichette con i numeri di pagina da mostrare', 'max_tabs', 10, 'f=index.htm&amp;as=admin_thumbnail_tabs&amp;ae=admin_thumbnail_tabs_end'), //cpg1.4
  array('Mostra descrizione file (oltre al titolo) sotto la miniatura', 'caption_in_thumbview', 1, 'f=index.htm&amp;as=admin_thumbnail_display_caption&amp;ae=admin_thumbnail_display_caption_end'), //cpg1.4
  array('Mostra numero di visite sotto la miniatura', 'views_in_thumbview', 1, 'f=index.htm&amp;as=admin_thumbnail_display_views&amp;ae=admin_thumbnail_display_views_end'), //cpg1.4
  array('Mostra numero di commenti sotto la miniatura', 'display_comment_count', 1, 'f=index.htm&amp;as=admin_thumbnail_display_comments&amp;ae=admin_thumbnail_display_comments_end'), //cpg1.4
  array('Mostra nome utente sotto la miniatura', 'display_uploader', 1, 'f=index.htm&amp;as=admin_thumbnail_display_uploader&amp;ae=admin_thumbnail_display_uploader_end'), //cpg1.4
  //array('Display name of admin uploaders below the thumbnail', 'display_admin_uploader', 1, 'f=index.htm&amp;as=admin_thumbnail_display_admin_uploader&amp;ae=admin_thumbnail_display_admin_uploader_end'), //cpg1.4
  array('Mostra nome file sotto la miniatura', 'display_filename', 1, 'f=index.htm&amp;as=admin_thumbnail_display_filename&amp;ae=admin_thumbnail_display_filename_end'), //cpg1.4
  //array('Mostra descrizione album', 'alb_desc_thumb', 1, 'f=index.htm&amp;as=admin_thumbnail_display_description&amp;ae=admin_thumbnail_display_description_end'), //cpg1.4
  array('Ordinamento predefinito per i file', 'default_sort_order', 3, 'f=index.htm&amp;as=admin_thumbnail_default_sortorder&amp;ae=admin_thumbnail_default_sortorder_end'), //cpg1.4
  array('Numero minimo di voti per apparire tra i "più votati" ', 'min_votes_for_rating', 0, 'f=index.htm&amp;as=admin_thumbnail_minimum_votes&amp;ae=admin_thumbnail_minimum_votes_end'), //cpg1.4

  'Visualizzazione Immagini', //cpg1.4
  array('Larghezza della tabella per la visualizzazione (pixel o %)', 'picture_table_width', 0, 'f=index.htm&amp;as=admin_image_comment_table-width&amp;ae=admin_image_comment_table-width_end'), //cpg1.4
  array('Informazioni file visibili in modo predefinito', 'display_pic_info', 1, 'f=index.htm&amp;as=admin_image_comment_info_visible&amp;ae=admin_image_comment_info_visible_end'), //cpg1.4
  array('Lunghezza massima descrizione', 'max_img_desc_length', 0, 'f=index.htm&amp;as=admin_image_comment_descr_length&amp;ae=admin_image_comment_descr_length_end'), //cpg1.4
  array('Numero massimo di caratteri in una parola', 'max_com_wlength', 0, 'f=index.htm&amp;as=admin_image_comment_chars_per_word&amp;ae=admin_image_comment_chars_per_word_end'), //cpg1.4
  array('Mostra pellicola', 'display_film_strip', 1, 'f=index.htm&amp;as=admin_image_comment_filmstrip_toggle&amp;ae=admin_image_comment_filmstrip_toggle_end'), //cpg1.4
  array('Mostra nome file sotto le miniature nella pellicola', 'display_film_strip_filename', 1, 'f=index.htm&amp;as=admin_image_comment_display_film_strip_filename&amp;ae=admin_image_comment_display_film_strip_filename_end'), //cpg1.4
  array('Numero di elementi nella pellicola', 'max_film_strip_items', 0, 'f=index.htm&amp;as=admin_image_comment_filmstrip_number&amp;ae=admin_image_comment_filmstrip_number_end'), //cpg1.4
  array('Intervallo di scorrimento presentazione in millisecondi (1 secondo = 1000 millisecondi)', 'slideshow_interval', 0, 'f=index.htm&amp;as=admin_image_comment_slideshow_interval&amp;ae=admin_image_comment_slideshow_interval_end'), //cpg1.4

  'Impostazioni commenti', //cpg1.4
  array('Filtra parolacce nei commenti', 'filter_bad_words', 1, 'f=index.htm&amp;as=admin_image_comment_bad_words&amp;ae=admin_image_comment_bad_words_end'), //cpg1.4
  array('Consenti faccine nei commenti', 'enable_smilies', 1, 'f=index.htm&amp;as=admin_image_comment_smilies&amp;ae=admin_image_comment_smilies_end'), //cpg1.4
  array('Consenti più commenti consecutivi dello stesso utente sul medesimo file (disabilita protezione flood)', 'disable_comment_flood_protect', 1, 'f=index.htm&amp;as=admin_image_comment_flood&amp;ae=admin_image_comment_flood_end'), //cpg1.4
  array('Numero massimo di righe in un commento', 'max_com_lines', 0, 'f=index.htm&amp;as=admin_image_comment_lines&amp;ae=admin_image_comment_lines_end'), //cpg1.4
  array('Lunghezza massima di un commento', 'max_com_size', 0, 'f=index.htm&amp;as=admin_image_comment_length&amp;ae=admin_image_comment_length_end'), //cpg1.4
  array('Notifica dei commenti all\'amministratore via email', 'email_comment_notification', 1, 'f=index.htm&amp;as=admin_image_comment_admin_notify&amp;ae=admin_image_comment_admin_notify_end'), //cpg1.4
  array('Ordinamento dei commenti', 'comments_sort_descending', 17, 'f=index.htm&amp;as=admin_comment_sort_start&amp;ae=admin_comment_sort_end'), //cpg1.4
  array('Prefisso per autori di commenti anonimi', 'comments_anon_pfx', 0, 'f=index.htm&amp;as=comments_anon_pfx&amp;ae=comments_anon_pfx_end'), //cpg1.4

  'Impostazioni file e miniature',
  array('Qualità file JPEG', 'jpeg_qual', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_jpeg_quality&amp;ae=admin_picture_thumbnail_jpeg_quality_end'), //cpg1.4
  array('Dimensione massima (larghezza od altezza) per le miniature <a href="#notice2" class="clickable_option">**</a>', 'thumb_width', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max-dimension&amp;ae=admin_picture_thumbnail_max-dimension_end'), //cpg1.4
  array('Applica dimensione massima a <a href="#notice2" class="clickable_option">**</a>', 'thumb_use', 7, 'f=index.htm&amp;as=admin_picture_thumbnail_use-dimension&amp;ae=admin_picture_thumbnail_use-dimension_end'), //cpg1.4
  array('Crea immagini intermedie','make_intermediate',1, 'f=index.htm&amp;as=admin_picture_thumbnail_intermediate_toggle&amp;ae=admin_picture_thumbnail_intermediate_toggle_end'), //cpg1.4
  array('Altezza o larghezza massime per le immagini/video intermedie <a href="#notice2" class="clickable_option">**</a>', 'picture_width', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_intermediate_dimension&amp;ae=admin_picture_thumbnail_intermediate_dimension_end'), //cpg1.4
  array('Peso massimo dei file caricabili dagli utenti (Kb)', 'max_upl_size', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max_upload_size&amp;ae=admin_picture_thumbnail_max_upload_size_end'), //cpg1.4
  array('Dimensione massima (larghezza od altezza) per immagini/video da caricare (in pixel)', 'max_upl_width_height', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max_upload_dimension&amp;ae=admin_picture_thumbnail_max_upload_dimension_end'), //cpg1.4
  array('Ridimensionamento automatico immagini che sforano i limiti', 'auto_resize', 16, 'f=index.htm&amp;as=admin_picture_thumbnail_auto-resize&amp;ae=admin_picture_thumbnail_auto-resize_end'), //cpg1.4

  'Impostazioni avanzate file e miniature',
  array('Gli album possono essere privati (Nota: se cambi da \'si\' a \'no\' ogni album attualmente privato diventerà pubblico)', 'allow_private_albums', 1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_private_toggle&amp;ae=admin_picture_thumb_advanced_private_toggle_end'), //cpg1.4
  array('Mostra agli ospiti un\'icona per gli album privati','show_private',1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_private_icon_show&amp;ae=admin_picture_thumb_advanced_private_icon_show_end'), //cpg1.4
  array('Caratteri proibiti nei nomi dei file', 'forbiden_fname_char',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_filename_forbidden_chars&amp;ae=admin_picture_thumb_advanced_filename_forbidden_chars_end'), //cpg1.4
  //array('Formati immagine consentiti per i file caricati', 'allowed_file_extensions',0, 'f=index.htm&amp;as=&amp;ae=_end'), //cpg1.4
  array('Formati immagine consentiti', 'allowed_img_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_pic_extensions&amp;ae=admin_picture_thumb_advanced_pic_extensions_end'), //cpg1.4
  array('Formati filmato consentiti', 'allowed_mov_types',0, 'f=index.htm&amp;as=admin_thumbs_advanced_movie&amp;ae=admin_thumbs_advanced_movie_end'), //cpg1.4
  array('Esegui automaticamente i filmati', 'media_autostart',1, 'f=index.htm&amp;as=admin_movie_autoplay&amp;ae=admin_movie_autoplay_end'), //cpg1.4
  array('Formati file audio consentiti', 'allowed_snd_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_audio_extensions&amp;ae=admin_picture_thumb_advanced_audio_extensions_end'), //cpg1.4
  array('Formati documenti consentiti', 'allowed_doc_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_doc_extensions&amp;ae=admin_picture_thumb_advanced_doc_extensions_end'), //cpg1.4
  array('Metodo di ridimensionamento immagini','thumb_method',2, 'f=index.htm&amp;as=admin_picture_thumb_advanced_resize_method&amp;ae=admin_picture_thumb_advanced_resize_method_end'), //cpg1.4
  array('Percorso utility ImageMagick \'convert\' (esempio /usr/bin/X11/)', 'impath', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_im_path&amp;ae=admin_picture_thumb_advanced_im_path_end'), //cpg1.4
  //array('Formati immagine consentiti (valido solo per ImageMagick)', 'allowed_img_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_allowed_imagetypes&amp;ae=admin_picture_thumb_advanced_allowed_imagetypes_end'), //cpg1.4
  array('Opzioni linea di comando di ImageMagick', 'im_options', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_im_commandline&amp;ae=admin_picture_thumb_advanced_im_commandline_end'), //cpg1.4
  array('Leggi dati EXIF nei file JPEG', 'read_exif_data', 13, 'f=index.htm&amp;as=admin_picture_thumb_advanced_exif&amp;ae=admin_picture_thumb_advanced_exif_end'), //cpg1.4
  array('Leggi dati IPTC nei file JPEG', 'read_iptc_data', 1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_iptc&amp;ae=admin_picture_thumb_advanced_iptc_end'), //cpg1.4
  array('Cartella per gli album <a href="#notice1" class="clickable_option">*</a>', 'fullpath', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_albums_dir&amp;ae=admin_picture_thumb_advanced_albums_dir_end'), //cpg1.4
  array('Cartella per i file caricati dagli utenti <a href="#notice1" class="clickable_option">*</a>', 'userpics', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_userpics_dir&amp;ae=admin_picture_thumb_advanced_userpics_dir_end'), //cpg1.4
  array('Prefisso per le immagini intermedie <a href="#notice1" class="clickable_option">*</a>', 'normal_pfx', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_intermediate_prefix&amp;ae=admin_picture_thumb_advanced_intermediate_prefix_end'), //cpg1.4
  array('Prefisso per le miniature <a href="#notice1" class="clickable_option">*</a>', 'thumb_pfx', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_thumbs_prefix&amp;ae=admin_picture_thumb_advanced_thumbs_prefix_end'), //cpg1.4
  array('Permessi predefiniti per le cartelle', 'default_dir_mode', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_chmod_folder&amp;ae=admin_picture_thumb_advanced_chmod_folder_end'), //cpg1.4
  array('Permessi predefiniti per i file', 'default_file_mode', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_chmod_files&amp;ae=admin_picture_thumb_advanced_chmod_files_end'), //cpg1.4

  'Impostazioni utente',
  array('Consenti nuove registrazioni', 'allow_user_registration', 1, 'f=index.htm&amp;as=admin_allow_registration&amp;ae=admin_allow_registration_end'), //cpg1.4
  array('Consenti accesso ad utenti che non hanno effettuato il login (ospiti o anonimi)', 'allow_unlogged_access', 1, 'f=index.htm&amp;as=admin_allow_unlogged_access&amp;ae=admin_allow_unlogged_access_end'), //cpg1.4
  array('Richiedi autenticazione via email per le nuove registrazioni', 'reg_requires_valid_email', 1, 'f=index.htm&amp;as=admin_registration_verify&amp;ae=admin_registration_verify_end'), //cpg1.4
  array('Notifica all\'amministratore via email le nuove registrazioni', 'reg_notify_admin_email', 1, 'f=index.htm&amp;as=admin_registration_notify&amp;ae=admin_registration_notify_end'), //cpg1.4
  array('Richiedi l\'attivazione delle registrazioni da parte dell\'amministratore', 'admin_activation', 1, 'f=index.htm&amp;as=admin_activation&amp;ae=admin_activation_end'),  //cpg1.4
  array('Consenti a due utenti di condividere lo stesso indirizzo email', 'allow_duplicate_emails_addr', 1, 'f=index.htm&amp;as=admin_allow_duplicate_emails_addr&amp;ae=admin_allow_duplicate_emails_addr_end'), //cpg1.4
  array('Notifica all\'amministratore via email i file in attesa di approvazione', 'upl_notify_admin_email', 1, 'f=index.htm&amp;as=admin_approval_notify&amp;ae=admin_approval_notify_end'), //cpg1.4
  array('Consenti agli utenti di visualizzare la lista iscritti', 'allow_memberlist', 1, 'f=index.htm&amp;as=admin_user_memberlist&amp;ae=admin_user_memberlist_end'), //cpg1.4
  array('Consenti agli iscritti di modificare il proprio indirizzo email nel profilo', 'allow_email_change', 1, 'f=index.htm&amp;as=admin_user_allow_email_change&amp;ae=admin_user_allow_email_change_end'), //cpg1.4
  array('Consenti agli iscritti di mantenere il controllo delle loro immagini nelle gallerie pubbliche', 'users_can_edit_pics', 1, 'f=index.htm&amp;as=admin_user_editpics_public_start&amp;ae=admin_user_editpics_public_end'), //cpg1.4
  array('Numero di login falliti consentiti prima dell\'estromissione temporanea (per evitare attacchi "brute force")', 'login_threshold', 0, 'f=index.htm&amp;as=admin_user_login_start&amp;ae=admin_user_login_end'), //cpg1.4
  array('Durata estromissione temporanea dopo il fallimento del login', 'login_expiry', 0, 'f=index.htm&amp;as=admin_user_login_start&amp;ae=admin_user_login_end'), //cpg1.4
  array('Abilita notifica all\'amministratore', 'report_post', 1, 'f=index.htm&amp;as=admin_user_enable_report&amp;ae=admin_user_enable_report_end'),  //cpg1.4

// custom profile fields,  //cpg1.4
  'Profili personalizzati per profilo utente (lasciare vuoto se inutilizzato).
  Utilizzare Profilo 6 per descrizioni lunghe, come le biografie', //cpg1.4
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

  'Impostazioni cookie',
  array('Nome cookie', 'cookie_name', 0, 'f=index.htm&amp;as=admin_cookie_name&amp;ae=admin_cookie_name_end'), //cpg1.4
  array('Percorso cookie', 'cookie_path', 0, 'f=index.htm&amp;as=admin_cookie_path&amp;ae=admin_cookie_path_end'), //cpg1.4

  'Impostazioni Email  (di solito nulla deve essere cambiato; lasciare tutti i campi vuoti se insicuri)', //cpg1.4
  array('Host SMTP (se lasciato vuoto verrà utilizzato sendmail)', 'smtp_host', 0, 'f=index.htm&amp;as=admin_email&amp;ae=admin_email_end'), //cpg1.4
  array('Nome utente SMTP', 'smtp_username', 0), //cpg1.4
  array('Password SMTP', 'smtp_password', 0), //cpg1.4

  'Statistiche e rapporti', //cpg1.4
  array('Rapporti <a href="#notice3" class="clickable_option">***</a>', 'log_mode', 11, 'f=index.htm&amp;as=admin_logging_log_mode&amp;ae=admin_logging_log_mode_end'), //cpg1.4
  array('Includi le cartoline nei rapporti', 'log_ecards', 1, 'f=index.htm&amp;as=admin_general_log_ecards&amp;ae=admin_general_log_ecards_end'), //cpg1.4
  array('Statistiche dettagliate per i voti','vote_details',1, 'f=index.htm&amp;as=admin_logging_votedetails&amp;ae=admin_logging_votedetails_end'), //cpg1.4
  array('Statistiche dettagliate per le visite','hit_details',1, 'f=index.htm&amp;as=admin_logging_hitdetails&amp;ae=admin_logging_hitdetails_end'), //cpg1.4

  'Impostazioni di manutenzione', //cpg1.4
  array('Abilita modalità debug', 'debug_mode', 9, 'f=index.htm&amp;as=debug_mode&amp;ae=debug_mode_end'), //cpg1.4
  array('Mostra avvisi PHP in modalità debug', 'debug_notice', 1, 'f=index.htm&amp;as=admin_misc_debug_notices&amp;ae=admin_misc_debug_notices_end'), //cpg1.4
  array('La galleria è fuori linea?', 'offline', 1, 'f=index.htm&amp;as=admin_general_offline&amp;ae=admin_general_offline_end'), //cpg1.4
);


// ------------------------------------------------------------------------- //
// File db_ecard.php
// ------------------------------------------------------------------------- //

if (defined('DB_ECARD_PHP')) $lang_db_ecard_php = array(
  'title' => 'Cartoline inviate',
  'ecard_sender' => 'Mittente',
  'ecard_recipient' => 'Destinatario',
  'ecard_date' => 'Data',
  'ecard_display' => 'Mostra cartolina',
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
  'ecard_number' => 'mostra elemento %s a %s di %s',
  'ecard_goto_page' => 'vai a pagina',
  'ecard_records_per_page' => 'Elementi per pagina',
  'check_all' => 'Seleziona tutti',
  'uncheck_all' => 'Deseleziona tutti',
  'ecards_delete_selected' => 'Elimina cartoline selezionate',
  'ecards_delete_confirm' => 'Sei sicuro di voler cancellare questi elementi? Spunta la casella!',
  'ecards_delete_sure' => 'Sono sicuro',
);


// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
  'empty_name_or_com' => 'Devi inserire il tuo nome e un commento',
  'com_added' => 'Il tuo commento è stato inserito',
  'alb_need_title' => 'Devi inserire un titolo per l\'album !',
  'no_udp_needed' => 'Nessun aggiornamento necessario.',
  'alb_updated' => 'Album aggiornato',
  'unknown_album' => 'L\'album selezionato non esiste o non hai i permessi per caricare file in questo album',
  'no_pic_uploaded' => 'Nessun file caricato !<br /><br />Se veramente hai selezionato un file da caricare, controlla che il server consenta il caricamento!',
  'err_mkdir' => 'Impossibile creare la cartella %s !',
  'dest_dir_ro' => 'La cartella di destinazione %s non è scrivibile!',
  'err_move' => 'Impossibile spostare %s in %s !',
  'err_fsize_too_large' => 'La dimensione del file caricato è troppo grande (il massimo consentito è %s x %s) !', //obsolete since cpg1.3 - consider removal in cpg1.4 once upload.php has been overhauled
  'err_imgsize_too_large' => 'La dimensione del file caricato è troppo grande (il massimo consentito è %s Kb) !', //obsolete since cpg1.3 - consider removal in cpg1.4 once upload.php has been overhauled
  'err_invalid_img' => 'Il file caricato non è un file di immagine valido!',
  'allowed_img_types' => 'Puoi caricare solo %s immagini.',
  'err_insert_pic' => 'Il file \'%s\' non può essere inserito nell\'album ',
  'upload_success' => 'File caricato con successo.<br /><br />Sarà visibile dopo l\'approvazione di un amministratore.',
  'notify_admin_email_subject' => '%s - Notifica caricamento file',
  'notify_admin_email_body' => 'Una nuova immagine è stata inserita da %s ed è richiesta la tua approvazione. Visita %s',
  'info' => 'Informazione',
  'com_added' => 'Commento inserito',
  'alb_updated' => 'Album aggiornato',
  'err_comment_empty' => 'Il tuo commento è vuoto!',
  'err_invalid_fext' => 'Sono ammesse solo le seguenti estensioni: <br /><br />%s.',
  'no_flood' => 'Spiacente, ma sei l\'autore dell\'ultimo commento inserito per questo file<br /><br />Modifica il commento precedente',
  'redirect_msg' => 'Stai per essere reindirizzato.<br /><br /><br />Clicca \'CONTINUA\' se la pagina non si aggiorna automaticamente',
  'upl_success' => 'File aggiunto con successo',
  'email_comment_subject' => 'Commento postato su Coppermine Photo Gallery',
  'email_comment_body' => 'Qualcuno ha inserito un commento nella tua galleria. Vedilo su',
  'album_not_selected' => 'Album non selezionato', //cpg1.4
  'com_author_error' => 'Un utente registrato sta usando questo nome utente, esegui il login o usane un altro', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
  'caption' => 'Didascalia',
  'fs_pic' => 'Immagine a grandezza piena',
  'del_success' => 'cancellato con successo',
  'ns_pic' => 'Immagine normale',
  'err_del' => 'non può essere cancellato',
  'thumb_pic' => 'miniatura',
  'comment' => 'commento',
  'im_in_alb' => 'immagine nell\'album',
  'alb_del_success' => 'Album &laquo;%s&raquo; cancellato', //cpg1.4
  'alb_mgr' => 'Gestione album',
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
  'pic_mgr' => 'Modifica immagine', //cpg1.4
  'update_pic' => 'Aggiornamento immagine \'%s\' con nome file \'%s\' e indice \'%s\'', //cpg1.4
  'username' => 'Nome utente', //cpg1.4
  'anonymized_comments' => '%s commento/i reso/i anonimo/i', //cpg1.4
  'anonymized_uploads' => '%s file pubblico/i reso/i anonimo/i', //cpg1.4
  'deleted_comments' => '%s commento/i cancellato/i', //cpg1.4
  'deleted_uploads' => '%s file pubblico/i cancellato/i', //cpg1.4
  'user_deleted' => 'utente %s cancellato', //cpg1.4
  'activate_user' => 'Attiva utente', //cpg1.4
  'user_already_active' => 'Account già attivo', //cpg1.4
  'activated' => 'Attivato', //cpg1.4
  'deactivate_user' => 'Disattiva utente', //cpg1.4
  'user_already_inactive' => 'Account già disattivato', //cpg1.4
  'deactivated' => 'Disattivato', //cpg1.4
  'reset_password' => 'Reimposta password', //cpg1.4
  'password_reset' => 'Password reimpostata a %s', //cpg1.4
  'change_group' => 'Cambia gruppo principale', //cpg1.4
  'change_group_to_group' => 'Cambiamento da %s a %s', //cpg1.4
  'add_group' => 'Aggiungi gruppo secondario', //cpg1.4
  'add_group_to_group' => 'Aggiunta dell\'utente %s al gruppo %s. Adesso è membro di %s come gruppo primario e di %s come secondario/i.', //cpg1.4
  'status' => 'Stato', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File displayecard.php
// ------------------------------------------------------------------------- //

if (defined('DISPLAYECARD_PHP')) {

$lang_displayecard_php = array(
  'invalid_data' => 'I dati per la cartolina alla quale tenti di accedere sono stati corrotti dal programma di posta. Controlla che il collegamento sia completo.', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File displayimage.php
// ------------------------------------------------------------------------- //

if (defined('DISPLAYIMAGE_PHP')){

$lang_display_image_php = array(
  'confirm_del' => 'Sicuro di voler CANCELLARE questo file ? \\nAnche i commenti saranno cancellati.', //js-alert
  'del_pic' => 'CANCELLA FILE',
  'size' => '%s x %s pixel',
  'views' => '%s volte',
  'slideshow' => 'Presentazione',
  'stop_slideshow' => 'Ferma presentazione',
  'view_fs' => 'Clicca per ingrandire l\'immagine',
  'edit_pic' => 'Modifica informazioni file', //cpg1.4
  'crop_pic' => 'Ritaglia e ruota',
  'set_player' => 'Cambia riproduttore',
);

$lang_picinfo = array(
  'title' =>'Informazioni file',
  'Filename' => 'Nome file',
  'Album name' => 'Nome album',
  'Rating' => 'Valutazione (%s voti)',
  'Keywords' => 'Parole chiave',
  'File Size' => 'Dimensione file',
  'Date Added' => 'Aggiunto il', //cpg1.4
  'Dimensions' => 'Dimensioni',
  'Displayed' => 'Visto',
  'URL' => 'URL', //cpg1.4
  'Make' => 'Marca', //cpg1.4
  'Model' => 'Modello', //cpg1.4
  'DateTime' => 'Ora e data', //cpg1.4
  'DateTimeOriginal' => 'Ora e data scatto', //cpg1.4
  'ISOSpeedRatings'=>'ISO', //cpg1.4
  'MaxApertureValue' => 'Apertura diaframma', //cpg1.4
  'FocalLength' => 'Lunghezza focale', //cpg1.4
  'Comment' => 'Commento',
  'addFav'=>'Aggiungi ai preferiti',
  'addFavPhrase'=>'Preferiti',
  'remFav'=>'Rimuovi dai preferiti',
  'iptcTitle'=>'Titolo IPTC',
  'iptcCopyright'=>'Copyright IPTC',
  'iptcKeywords'=>'Parole chiave IPTC',
  'iptcCategory'=>'Categoria IPTC',
  'iptcSubCategories'=>'Sottocategoria IPTC',
  'ColorSpace' => 'Spazio colore', //cpg1.4
  'ExposureProgram' => 'Programma di esposizione', //cpg1.4
  'Flash' => 'Flash', //cpg1.4
  'MeteringMode' => 'Modalità di ripresa', //cpg1.4
  'ExposureTime' => 'Tempo d\'esposizione', //cpg1.4
  'ExposureBiasValue' => 'Bias esposizione', //cpg1.4
  'ImageDescription' => ' Descrizione immagine', //cpg1.4
  'Orientation' => 'Orientamento', //cpg1.4
  'xResolution' => 'Risoluzione X', //cpg1.4
  'yResolution' => 'Risoluzione Y', //cpg1.4
  'ResolutionUnit' => 'Unità per la risoluzione', //cpg1.4
  'Software' => 'Programma', //cpg1.4
  'YCbCrPositioning' => 'Posizionamento YCbCr', //cpg1.4
  'ExifOffset' => 'Offset Exif', //cpg1.4
  'IFD1Offset' => 'Offset IFD1', //cpg1.4
  'FNumber' => 'FNumber', //cpg1.4
  'ExifVersion' => 'Versione Exif', //cpg1.4
  'DateTimeOriginal' => 'Ora e data originale', //cpg1.4
  'DateTimedigitized' => 'Ora e data digitale', //cpg1.4
  'ComponentsConfiguration' => 'Configurazione componenti', //cpg1.4
  'CompressedBitsPerPixel' => 'Bits compressi per pixel', //cpg1.4
  'LightSource' => 'Sorgente luminosa', //cpg1.4
  'ISOSetting' => 'Impostazioni ISO', //cpg1.4
  'ColorMode' => 'Modalità colore', //cpg1.4
  'Quality' => 'Qualità', //cpg1.4
  'ImageSharpening' => 'Nitidezza immagine', //cpg1.4
  'FocusMode' => 'Modalità di messa a fuoco', //cpg1.4
  'FlashSetting' => 'Impostazioni Flash', //cpg1.4
  'ISOSelection' => 'Selezione ISO', //cpg1.4
  'ImageAdjustment' => 'Rifinitura immagine', //cpg1.4
  'Adapter' => 'Adattatore', //cpg1.4
  'ManualFocusDistance' => 'Distanza di messa a fuoco manuale', //cpg1.4
  'DigitalZoom' => 'Zoom digitale', //cpg1.4
  'AFFocusPosition' => 'Posizione AutoFocus', //cpg1.4
  'Saturation' => 'Saturazione', //cpg1.4
  'NoiseReduction' => 'Riduzione disturbo', //cpg1.4
  'FlashPixVersion' => 'Versione FlashPix', //cpg1.4
  'ExifImageWidth' => 'Larghezza immagine Exif', //cpg1.4
  'ExifImageHeight' => 'Altezza immagine Exif', //cpg1.4
  'ExifInteroperabilityOffset' => 'Interoperabilità Offset Exif', //cpg1.4
  'FileSource' => 'Sorgente file', //cpg1.4
  'SceneType' => 'Tipo di soggetto', //cpg1.4
  'CustomerRender' => 'Customer Render', //cpg1.4
  'ExposureMode' => 'Modalità di esposizione', //cpg1.4
  'WhiteBalance' => 'Bilanciamento del bianco', //cpg1.4
  'DigitalZoomRatio' => 'Rapporto zoom digitale', //cpg1.4
  'SceneCaptureMode' => 'Modalità di cattura scena', //cpg1.4
  'GainControl' => 'Controllo guadagno', //cpg1.4
  'Contrast' => 'Contrasto', //cpg1.4
  'Saturation' => 'Saturazione', //cpg1.4
  'Sharpness' => 'Nitidezza', //cpg1.4
  'ManageExifDisplay' => 'Gestione visualizzazione Exif', //cpg1.4
  'submit' => 'Invia', //cpg1.4
  'success' => 'Informazioni aggiornate con successo.', //cpg1.4
  'details' => 'Dettagli', //cpg1.4
);

$lang_display_comments = array(
  'OK' => 'OK',
  'edit_title' => 'Modifica questo commento',
  'confirm_delete' => 'Sicuro di voler cancellare questo commento?', //js-alert
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
  'title' => 'Invia una cartolina',
  'invalid_email' => '<font color="red"><b>Attenzione</b></font>: indirizzo email non valido:', //cpg1.4
  'ecard_title' => 'Una cartolina da %s per te',
  'error_not_image' => 'Solo le immagini possono essere inviate come cartoline.',
  'view_ecard' => 'Collegamento alternativo se la cartolina non viene visualizzata correttamente', //cpg1.4
  'view_ecard_plaintext' => 'Per vedere la cartolina, copia e incolla questo url nella barra degli indirizzi del tuo navigatore:', //cpg1.4
  'view_more_pics' => 'Visualizza altre immagini', //cpg1.4
  'send_success' => 'La cartolina è stata inviata',
  'send_failed' => 'Spiacente, ma il server non può inviare la cartolina.',
  'from' => 'Da',
  'your_name' => 'Il tuo nome',
  'your_email' => 'Il tuo indirizzo email',
  'to' => 'A',
  'rcpt_name' => 'Nome del destinatario',
  'rcpt_email' => 'Indirizzo email del destinatario',
  'greetings' => 'Oggetto', //cpg1.4
  'message' => 'Messaggio', //cpg1.4
  'ecards_footer' => 'Inviato da %s da IP %s alle %s (ora della Galleria)', //cpg1.4
  'preview' => 'Anteprima cartolina', //cpg1.4
  'preview_button' => 'Anteprima', //cpg1.4
  'submit_button' => 'Invia cartolina', //cpg1.4
  'preview_view_ecard' => 'Collegamento alternativo alla cartolina una volta generata. Non funzionerà per le anteprime.', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File report_file.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('REPORT_FILE_PHP') || defined('DISPLAYREPORT_PHP')) $lang_report_php =array(
  'title' => 'Segnala all\'amministratore', //cpg1.4
  'invalid_email' => '<b>Attenzione</b> : indirizzo email non valido !', //cpg1.4
  'report_subject' => 'Segnalazione da %s nella galleria %s', //cpg1.4
  'view_report' => 'Collegamento alternativo se la segnalazione non viene visualizzata correttamente', //cpg1.4
  'view_report_plaintext' => 'Per vedere la segnalazione, copia e incolla questo url nella barra degli indirizzi del tuo navigatore:', //cpg1.4
  'view_more_pics' => 'Galleria', //cpg1.4
  'send_success' => 'Segnalazione inviata', //cpg1.4
  'send_failed' => 'Spiacente ma il server non può inviare la tua segnalazione...', //cpg1.4
  'from' => 'Da', //cpg1.4
  'your_name' => 'Il tuo nome', //cpg1.4
  'your_email' => 'Il tuo indirizzo email', //cpg1.4
  'to' => 'A', //cpg1.4
  'administrator' => 'Amministratore/Moderatore', //cpg1.4
  'subject' => 'Oggetto', //cpg1.4
  'comment_field_name' => 'Segnalazione messaggio di "%s"', //cpg1.4
  'reason' => 'Motivo', //cpg1.4
  'message' => 'Messaggio', //cpg1.4
  'report_footer' => 'Inviato da %s da IP %s alle %s (ora della Galleria)', //cpg1.4
  'obscene' => 'osceno', //cpg1.4
  'offensive' => 'offensivo', //cpg1.4
  'misplaced' => 'fuori tema', //cpg1.4
  'missing' => 'mancante', //cpg1.4
  'issue' => 'errore/impossibile visualizzare', //cpg1.4
  'other' => 'altro', //cpg1.4
  'refers_to' => 'La segnalazione file si riferisce a', //cpg1.4
  'reasons_list_heading' => 'Motivo della segnalazione:', //cpg1.4
  'no_reason_given' => 'Nessun motivo indicato', //cpg1.4
  'go_comment' => 'Vai al commento', //cpg1.4
  'view_comment' => 'Visualizza segnalazione completa con commento', //cpg1.4
  'type_file' => 'file', //cpg1.4
  'type_comment' => 'commento', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
  'pic_info' => 'Informazioni sul file',
  'album' => 'Album',
  'title' => 'Titolo',
  'filename' => 'Nome file', //cpg1.4
  'desc' => 'Descrizione',
  'keywords' => 'Parole chiave',
  'new_keyword' => 'Nuove parole chiave', //cpg1.4
  'new_keywords' => 'Nuove parole chiave trovate', //cpg1.4
  'existing_keyword' => 'Parole chiave esistenti', //cpg1.4
  'pic_info_str' => '%s &times; %s - %s KB - %s visite - %s voti',
  'approve' => 'Approva file',
  'postpone_app' => 'Posticipa approvazione',
  'del_pic' => 'Cancella file',
  'del_all' => 'Cancella TUTTI i file', //cpg1.4
  'read_exif' => 'Rileggi informazioni EXIF',
  'reset_view_count' => 'Azzera contatore visite',
  'reset_all_view_count' => 'Azzera TUTTI i contatori visite', //cpg1.4
  'reset_votes' => 'Azzera voti',
  'reset_all_votes' => 'Azzera TUTTI i voti', //cpg1.4
  'del_comm' => 'Cancella commenti',
  'del_all_comm' => 'Cancella TUTTI i commenti', //cpg1.4
  'upl_approval' => 'Approvazione file caricati', //cpg1.4
  'edit_pics' => 'Modifica file',
  'see_next' => 'Visualizza file successivi',
  'see_prev' => 'Visualizza file precedenti',
  'n_pic' => '%s file',
  'n_of_pic_to_disp' => 'Numero di file da visualizzare',
  'apply' => 'Applica modifiche',
  'crop_title' => 'Utilità di fotoritocco Coppermine',
  'preview' => 'Anteprima',
  'save' => 'Salva immagine',
  'save_thumb' =>'Salva come miniatura',
  'gallery_icon' => 'Imposta come icona personale', //cpg1.4
  'sel_on_img' =>'la selezione deve trovarsi interamente sull\'immagine!', //js-alert
  'album_properties' =>'Proprietà album', //cpg1.4
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
  'faq' => 'Risposte a domande frequenti',
  'toc' => 'Indice dei contenuti',
  'question' => 'Domanda: ',
  'answer' => 'Risposta: ',
);

if (defined('FAQ_PHP')) $lang_faq_data = array(
  'FAQ Generiche',
  array('Perchè mi devo registrare?', 'La registrazione potrebbe anche non essere richiesta dall\'amministratore. Fornisce ad un utente funzionalità aggiuntive quali la possibilità di caricare file, tenere una lista di file preferiti, valutare le immagini e inserire commenti, ecc.', 'allow_user_registration', '1'),
  array('Come posso registrarmi?', 'Clicca su &quot;Registrazione&quot; e compila tutti i campi richiesti (e quelli opzionali se vuoi).<br />Se l\'amministratore ha abilitato la notifica via email, allora dopo aver inviato la registrazione dovresti ricevere un messaggio email all\'indirizzo da te indicato, con le istruzioni su come attivare l\'account. L\'account deve essere attivato per poter effettuare il login.', 'allow_user_registration', '1'), //cpg1.4
  array('Come eseguo il login?', 'Clicca su &quot;Login&quot;, inserisci username e password e seleziona &quot;Ricordami&quot; per essere riconosciuto dal sito in seguito.<br />IMPORTANTE: Per poter usare la funzione &quot;Ricordami&quot;, i cookie devono essere abilitati e il cookie di questo sito non deve essere cancellato.', 'offline', 0),
  array('Perchè non posso effettuare il login?', 'Ti sei registrato e hai cliccato sul collegamento ricevuto via email? Il tuo account dovrebbe essere attivo. Per altri problemi di login contattare l\'amministratore.', 'offline', 0),
  array('Cosa fare se dimentico la password?', 'Puoi cliccare su &quot;Password dimenticata&quot;, se il collegamento è presente nel sito. Altrimenti contatta l\'amministratore per una nuova password.', 'offline', 0),
  //array('Cosa fare nel caso io abbia cambiato indirizzo email?', 'Esegui il login e modifica il tuo indirizzo email cliccando sul collegamento &quot;Profilo&quot;', 'offline', 0),
  array('Come salvo le immagini nei &quot;Preferiti&quot;?', 'Clicca su un\'immagine e poi sull\'icona &quot;Informazioni sul file&quot; (<img src="images/info.gif" width="16" height="16" border="0" alt="Info immagine" />); scorri verso il basso le informazioni sull\'immagine e clicca su &quot;Aggiungi ai preferiti&quot;. L\'amministratore potrebbe aver attivato le &quot;Informazioni sul file&quot; in modo predefinito.<br />IMPORTANTE: I cookie devono essere abilitati e il cookie di questo sito non deve essere cancellato.', 'offline', 0),
  array('Come valuto un file?', 'Clicca sulla miniatura, vai in fondo e scegli una valutazione.', 'offline', 0),
  array('Come inserisco un commento per un\'immagine?', 'Clicca su una miniatura, vai in fondo e posta un commento.', 'offline', 0),
  array('Come aggiungo un file?', 'Clicca su &quot;Carica file&quot; e seleziona l\'album nel quale vuoi caricare il file. Clicca su &quot;Sfoglia&quot;, trova il file da caricare sul tuo PC e clicca su &quot;Apri.&quot; Se vuoi, aggiungi un titolo e una descrizione, infine clicca su &quot;Invia&quot;.<br />In alternativa, se usi <b>Windows XP</b>, puoi caricare più file contemporaneamente direttamente dai tuoi album privati mediante l\'applicazione &quot;Pubblicazione web guidata&quot;.<br />Per istruzioni su come farlo, e dove trovare il file di registro corretto, clicca <a href="xp_publish.php">qui.</a>', 'allow_private_albums', 1), //cpg1.4
  array('Dove carico le immagini?', 'Potrai caricare un file in uno dei tuoi album nella &quot;Galleria Personale&quot;. L\'amministratore potrebbe anche consentirti di caricare un file in uno o più album della galleria principale.', 'allow_private_albums', 0),
  array('Di che formato e di che dimensione possono essere i file caricati?', 'Le dimensioni ed il formato (jpg, png, etc.) sono a discrezione dell\'amministratore.', 'offline', 0),
  array('Come posso creare, rinominare o cancellare un album nella &quot;Galleria Personale&quot;?', 'Dovresti già essere in &quot;Modalità amministratore&quot;<br />Clicca su &quot;Crea/Organizza album&quot; e clicca su &quot;Nuovo&quot;. Cambia &quot;Nuovo album&quot; nel nome che desideri.<br />Puoi anche rinominare qualsiasi album nella tua galleria.<br />Alla fine, clicca su &quot;Applica modifiche&quot;.', 'allow_private_albums', 0),
  array('Come posso impedire agli utenti di visualizzare i miei album?', 'Dovresti già essere in &quot;Modalità amministratore&quot;<br />Clicca su &quot;Modifica album&quot; e, nella barra &quot;Aggiorna album&quot;, seleziona l\'album che intendi modificare.<br />Lì potrai cambiare nome, descrizione, miniatura, impedire la visualizzazione e i commenti.<br />Alla fine, clicca &quot;Aggiorna album&quot;.', 'allow_private_albums', 0),
  array('Come visualizzo le gallerie degli altri utenti?', 'Clicca su &quot;Lista album&quot; e seleziona &quot;Gallerie utenti&quot;.', 'allow_private_albums', 0),
  array('Cosa sono i cookie?', 'I cookie sono file di puro testo contenenti i dati inviati da un sito web al tuo computer.<br />Di solito consentono di lasciare il sito e di tornarci senza dover nuovamente eseguire il login, ed altre facilitazioni.', 'offline', 0),
  array('Dove posso trovare questa piattaforma per il mio sito?', 'Coppermine è una galleria multimediale assolutamente libera, rilasciata sotto le licenze GNU GPL. &Egrave; ricca di funzioni e portabile su varie piattaforme. Visita la <a href="http://coppermine-gallery.net/">home page di Coppermine</a> per saperne di più o per scaricarla.', 'offline', 0),

  'Navigazione del sito',
  array('Che cos\'è la &quot;Lista album&quot;?', 'Mostra l\'intera categoria nella quale ti trovi, con un collegamento ad ogni album. Se non sei in una categoria, ti mostrerà l\'intera galleria con un collegamento ad ogni categoria. Le miniature possono essere un collegamento alle categorie.', 'offline', 0),
  array('Che cos\'è la &quot;Galleria personale&quot;?', 'Questa funzione consente agli iscritti di creare le proprie gallerie e di creare, cancellare o modificare gli album, nonchè di caricare file negli stessi.', 'allow_private_albums', 1), //cpg1.4
  array('Qual è la differenza tra &quot;Modalità amministratore&quot; e &quot;Modalità utente&quot;?', 'La modalità amministratore consente ad un utente di modificare le proprie gallerie (e anche quelle degli altri, se autorizzato).', 'allow_private_albums', 0),
  array('Che cos\'è &quot;Carica file&quot;?', 'Questa funzione consente agli utenti di caricare un file (dimensioni e tipo sono fissati dall\'amministratore) in una galleria selezionata o da te o dallo stesso amministratore.', 'allow_private_albums', 0),
  array('Che cos\'è &quot;Ultimi arrivi&quot;?', 'Questa funzione mostra gli ultimi file caricati sul sito.', 'offline', 0),
  array('Che cos\'è &quot;Ultimi commenti&quot;?', 'Questa funzione mostra gli ultimi commenti assegnati ai file inseriti dagli utenti.', 'offline', 0),
  array('Che cos\'è &quot;Più visti&quot;?', 'Questa funzione mostra i file maggiormente visualizzati dagli utenti (registrati o meno).', 'offline', 0),
  array('Che cos\'è &quot;Più votati&quot;?', 'Questa funzione mostra i file maggiormente votati dagli utenti, mostrando anche la valutazione media (es. cinque utenti danno ciascuno <img src="images/rating3.gif" width="65" height="14" border="0" alt="" />: il file avrà una valutazione media di <img src="images/rating3.gif" width="65" height="14" border="0" alt="" />; cinque utenti che valutano il file da 1 a 5 (1,2,3,4,5) risulteranno in una media di <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> .)<br />Le valutazioni vanno da <img src="images/rating5.gif" width="65" height="14" border="0" alt="migliore" /> (migliore) a <img src="images/rating0.gif" width="65" height="14" border="0" alt="peggiore" /> (peggiore).', 'offline', 0),
  array('Che cos\'è &quot;Preferiti&quot;?', 'Questa funzione consente agli utenti di memorizzare i propri file preferiti in un cookie inviato al proprio computer, e richiamato all\'occorrenza.', 'offline', 0),
);


// ------------------------------------------------------------------------- //
// File forgot_passwd.php
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) $lang_forgot_passwd_php = array(
  'forgot_passwd' => 'Ricorda password',
  'err_already_logged_in' => 'Hai già eseguito il login!',
  'enter_email' => 'Inserisci il tuo indirizzo email', //cpg1.4
  'submit' => 'Invia',
  'illegal_session' => 'Sessione recupero password non valida o scaduta.', //cpg1.4
  'failed_sending_email' => 'La password non può essere spedita !',
  'email_sent' => 'Una email con il tuo nome utente e la password è stata spedita a %s', //cpg1.4
  'verify_email_sent' => 'Un\'email è stata inviata a %s. Controlla la tua casella di posta per completare la procedura.', //cpg1.4
  'err_unk_user' => 'L\'utente selezionato non esiste!',
  'account_verify_subject' => '%s - Richiesta nuova password', //cpg1.4
  'account_verify_body' => 'Hai richiesto una nuova password. Se sei intenzionato a procedere e ricevere una nuova password, clicca sul seguente collegamento:
  %s', //cpg1.4
  'passwd_reset_subject' => '%s - la tua nuova password', //cpg1.4
  'passwd_reset_body' => 'Di seguito la nuova password richiesta:
Utente: %s
Password: %s
Clicca %s per eseguire il login.', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
  'group_name' => 'Gruppo', //cpg1.4
  'permissions' => 'Permessi', //cpg1.4
  'public_albums' => 'Caricamento negli album pubblici', //cpg1.4
  'personal_gallery' => 'Galleria personale', //cpg1.4
  'upload_method' => 'Modalità di caricamento', //cpg1.4
  'disk_quota' => 'Quota disco', //cpg1.4
  'rating' => 'Valutazione', //cpg1.4
  'ecards' => 'Cartoline', //cpg1.4
  'comments' => 'Commenti', //cpg1.4
  'allowed' => 'Consentito', //cpg1.4
  'approval' => 'Richiedi approvazione', //cpg1.4
  'boxes_number' => 'N. di campi', //cpg1.4
  'variable' => 'variabile', //cpg1.4
  'fixed' => 'fisso', //cpg1.4
  'apply' => 'Salva modifiche',
  'create_new_group' => 'Crea nuovo gruppo',
  'del_groups' => 'Cancella gruppo/i selezionato/i',
  'confirm_del' => 'Attenzione: quando cancelli un gruppo, gli utenti appartenenti a tale gruppo saranno trasferiti al gruppo utenti Registrati!\n\nDesideri continuare?', //js-alert
  'title' => 'Gestione gruppi',
  'num_file_upload' => 'Campi per il caricamento di file', //cpg1.4
  'num_URI_upload' => 'Campi per il caricamento di URL', //cpg1.4
  'reset_to_default' => 'Imposta nome predefinito (%s) - consigliato!', //cpg1.4
  'error_group_empty' => 'La tabella gruppi era vuota !<br /><br />Gruppi predefiniti creati, ricarica questa pagina', //cpg1.4
  'explain_greyed_out_title' => 'Perchè questa riga non è visibile?', //cpg1.4
  'explain_guests_greyed_out_text' => 'Non puoi cambiare le proprietà di questo gruppo, perchè hai impostato a &quot;No&quot; l\'opzione &quot;Consenti accesso senza il login (ospiti o anonimi)&quot; nella pagina di configurazione. Tutti gli ospiti (membri del gruppo %s) non possono fare altro che eseguire il login, quindi le impostazioni dei gruppi non valgono per loro.', //cpg1.4
  'explain_banned_greyed_out_text' => 'Non puoi cambiare le impostazioni del gruppo %s perchè i membri che ne fanno parte non hanno alcun permesso.', //cpg1.4
  'group_assigned_album' => 'Album consentito/i', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
  'welcome' => 'Benvenuto!',
);

$lang_album_admin_menu = array(
  'confirm_delete' => 'Sei sicuro di voler cancellare questo album? \\nTutti i file e i commenti verranno cancellati.', //js-alert
  'delete' => 'CANCELLA',
  'modify' => 'PROPRIETÀ',
  'edit_pics' => 'MODIFICA FILE',
);

$lang_list_categories = array(
  'home' => 'Home page',
  'stat1' => '<b>[pictures]</b> file in <b>[albums]</b> album e <b>[cat]</b> categorie con <b>[comments]</b> commenti, visti <b>[views]</b> volte',
  'stat2' => '<b>[pictures]</b> file in <b>[albums]</b> album visti <b>[views]</b> volte',
  'xx_s_gallery' => 'Galleria di %s',
  'stat3' => '<b>[pictures]</b> file in <b>[albums]</b> album con <b>[comments]</b> commenti, visti <b>[views]</b> volte',
);

$lang_list_users = array(
  'user_list' => 'Lista iscritti',
  'no_user_gal' => 'Non ci sono gallerie utenti',
  'n_albums' => '%s album',
  'n_pics' => '%s file',
);

$lang_list_albums = array(
  'n_pictures' => '%s file',
  'last_added' => ', ultimo inserito il %s',
  'n_link_pictures' => '%s file collegati', //cpg1.4
  'total_pictures' => '%s file totali', //cpg1.4
);

}

// ------------------------------------------------------------------------- //
// File keywordmgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('KEYWORDMGR_PHP')) $lang_keywordmgr_php = array(
  'title' => 'Gestione parole chiave', //cpg1.4
  'edit' => 'Modifica', //cpg1.4
  'delete' => 'Cancella', //cpg1.4
  'search' => 'Ricerca', //cpg1.4
  'keyword_test_search' => 'Cerca %s in una nuova finestra', //cpg1.4
  'keyword_del' => 'Cancella la parola chiave %s', //cpg1.4
  'confirm_delete' => 'Sei sicuro di voler cancellare la parola chiave %s dalla galleria?', //cpg1.4  // js-alert
  'change_keyword' => 'Cambia parola chiave', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
  'login' => 'Login',
  'enter_login_pswd' => 'Inserisci nome utente e password per connetterti',
  'username' => 'Utente',
  'password' => 'Password',
  'remember_me' => 'Ricordami',
  'welcome' => 'Benvenuto %s ...',
  'err_login' => '*** Impossibile eseguire il login. Riprova ***',
  'err_already_logged_in' => 'Hai già eseguito il login!',
  'forgot_password_link' => 'Password dimenticata',
  'cookie_warning' => 'Attenzione, il tuo navigatore non accetta i cookie', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
  'logout' => 'Logout',
  'bye' => 'Arrivederci %s ...',
  'err_not_loged_in' => 'Non hai eseguito il login!',
);

// ------------------------------------------------------------------------- //
// File minibrowser.php  //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('MINIBROWSER_PHP')) $lang_minibrowser_php = array(
  'close' => 'Chiudi', //cpg1.4
  'submit' => 'OK', //cpg1.4
  'up' => 'Su di un livello', //cpg1.4
  'current_path' => 'Percorso corrente', //cpg1.4
  'select_directory' => 'Seleziona una cartella', //cpg1.4
  'click_to_close' => 'Clicca sull\'immagine per chiudere la finestra',
);

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
  'upd_alb_n' => 'Aggiorna album %s',
  'general_settings' => 'Impostazioni generali',
  'alb_title' => 'Titolo album',
  'alb_cat' => 'Categoria album',
  'alb_desc' => 'Descrizione album',
  'alb_keyword' => 'Parola chiave per l\'album', //cpg1.4
  'alb_thumb' => 'Miniatura album',
  'alb_perm' => 'Permessi album',
  'can_view' => 'L\'album può essere visto da',
  'can_upload' => 'Gli utenti possono aggiungere file',
  'can_post_comments' => 'Gli utenti possono aggiungere commenti',
  'can_rate' => 'Gli utenti possono votare',
  'user_gal' => 'Galleria utente',
  'no_cat' => '* Nessuna categoria *',
  'alb_empty' => 'Album vuoto',
  'last_uploaded' => 'Ultimo arrivo',
  'public_alb' => 'Tutti (album pubblico)',
  'me_only' => 'Solo io',
  'owner_only' => 'Solo per il proprietario (%s)',
  'groupp_only' => 'Membri del gruppo %s',
  'err_no_alb_to_modify' => 'Non puoi modificare nessun album nel database.',
  'update' => 'Aggiorna album',
  'reset_album' => 'Reimposta album', //cpg1.4
  'reset_views' => 'Azzera contatore visite in %s', //cpg1.4
  'reset_rating' => 'Azzera voti per tutti i file in %s', //cpg1.4
  'delete_comments' => 'Cancella tutti i commenti inseriti in %s', //cpg1.4
  'delete_files' => 'Cancella %sirreversibilmente%s tutti i file in %s', //cpg1.4
  'views' => 'visite', //cpg1.4
  'votes' => 'voti', //cpg1.4
  'comments' => 'commenti', //cpg1.4
  'files' => 'file', //cpg1.4
  'submit_reset' => 'Applica modifiche', //cpg1.4
  'reset_views_confirm' => 'Sono sicuro', //cpg1.4
  'notice1' => '(*) dipende dalle impostazioni dei %sGruppi%s',  //cpg1.4 //(do not translate %s!)
  'alb_password' => 'Password per l\'album', //cpg1.4
  'alb_password_hint' => 'Suggerimento per la password', //cpg1.4
  'edit_files' =>'Modifica file', //cpg1.4
  'parent_category' =>'Categoria radice', //cpg1.4
  'thumbnail_view' =>'Vista miniature', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File phpinfo.php
// ------------------------------------------------------------------------- //

if (defined('PHPINFO_PHP')) $lang_phpinfo_php = array(
  'php_info' => 'Informazioni PHP',
  'explanation' => 'Sono le informazioni generate dalla funzione PHP<a href="http://www.php.net/phpinfo">phpinfo()</a>, mostrate all\'interno di Coppermine.',
  'no_link' => 'Permettere a tutti di visualizzare le informazioni PHP potrebbe creare un problema di sicurezza, questo è il motivo per cui questa pagina è visibile solo quando esegui il login da amministratore. Non puoi inviare collegamenti a questa pagina ad altri: gli verrebbe negato l\'accesso.',
);

// ------------------------------------------------------------------------- //
// File picmgr.php //cpg1.4
// ------------------------------------------------------------------------- //
if (defined('PICMGR_PHP')) $lang_picmgr_php = array(
  'pic_mgr' => 'Gestione immagini', //cpg1.4
  'select_album' => 'Seleziona album', //cpg1.4
  'delete' => 'Cancella', //cpg1.4
  'confirm_delete1' => 'Sei sicuro di voler cancellare questa immagine?', //cpg1.4
  'confirm_delete2' => '\nL\'immagine verrà cancellata definitivamente.', //cpg1.4
  'apply_modifs' => 'Salva modifiche', //cpg1.4
  'confirm_modifs' => 'Conferma modifiche', //cpg1.4
  'pic_need_name' => 'Le immagini devono avere un nome!', //cpg1.4
  'no_change' => 'Nessuna modifica effettuata!', //cpg1.4
  'no_album' => '* Nessun album *', //cpg1.4
  'explanation_header' => 'L\'ordinamento personalizzato che puoi scegliere in questa pagina sarà memorizzato per il tuo account solo se', //cpg1.4
  'explanation1' => 'l\'amministratore ha impostato nella configurazione come "Ordinamento predefinito per i file" la "Posizione discendente" o la "Posizione ascendente" (impostazione globale per tutti gli utenti che non hanno scelto altre opzioni individualmente)', //cpg1.4
  'explanation2' => 'l\'utente ha scelto "Posizione discendente" o "Posizione ascendente" nella pagina delle miniature (impostazione per ogni singolo utente)', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File pluginmgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('PLUGINMGR_PHP')){

$lang_pluginmgr_php = array(
  'confirm_uninstall' => 'Sei sicuro di voler DISINSTALLARE questo plugin ?', //cpg1.4
  'confirm_delete' => 'Sei sicuro di voler CANCELLARE questo plugin ?', //cpg1.4
  'pmgr' => 'Gestione plugin', //cpg1.4
  'name' => 'Nome', //cpg1.4
  'author' => 'Autore', //cpg1.4
  'desc' => 'Descrizione', //cpg1.4
  'vers' => 'Versione', //cpg1.4
  'i_plugins' => 'Plugin installati', //cpg1.4
  'n_plugins' => 'Plugin non installati', //cpg1.4
  'none_installed' => 'Nessun plugin installato', //cpg1.4
  'operation' => 'Operazione', //cpg1.4
  'not_plugin_package' => 'Il file caricato non è un pacchetto plugin valido.', //cpg1.4
  'copy_error' => 'Si è verificato un errore copiando il pacchetto nella cartella plugins.', //cpg1.4
  'upload' => 'Carica', //cpg1.4
  'configure_plugin' => 'Configura plugin', //cpg1.4
  'cleanup_plugin' => 'Reimposta plugin', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
  'already_rated' => 'Spiacente, hai già votato questo file!',
  'rate_ok' => 'Il tuo voto è stato accettato',
  'forbidden' => 'Non puoi votare i tuoi stessi file!',
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
Gli amministratori di {SITE_NAME} cercheranno in ogni modo di rimuovere o modificare ogni contenuto ritenuto non consono nel minor tempo possibile, ma è impossibile controllare ogni inserimento. Deve essere chiaro che tutti i testi inseriti in questo sito esprimono il punto di vista e le opinioni di chi li ha inseriti e non degli amministratori o del webmaster (eccetto che per i testi inseriti da loro stessi), quindi non ne possono essere ritenuti responsabili.
<br />
<br />
Acconsenti a non postare nulla di abusivo, osceno, volgare, pornografico o ogni altro materiale che potrebbe violare qualsivoglia legge. Acconsenti a che il webmaster, gli amministratori e i moderatori di {SITE_NAME} possano rimuovere o modificare ogni contenuto in qualsiasi momento gli paia opportuno. Come utente accetti il fatto che ogni informazione inserita venga salvata in un database. Nessuna di queste informazioni verrà fornita a terzi senza il tuo consenso e gli amministratori non potranno essere considerati responsabili per tentativi di attacco al sistema che provochino perdite di dati.
<br />
<br />
Questo sito utilizza i cookie per salvare informazioni sul tuo computer. I cookie servono solo per migliorare la navigazione. Il tuo indirizzo email viene utilizzato solo per la conferma della registrazione e per la password.
<br />
<br />
Cliccando 'Accetto' di seguito accetti tutte le condizioni.
EOT;

$lang_register_php = array(
  'page_title' => 'Registrazione utente',
  'term_cond' => 'Termini e condizioni',
  'i_agree' => 'Accetto',
  'submit' => 'Inoltra registrazione',
  'err_user_exists' => 'Il nome utente inserito è già utilizzato da un altro utente, scegline uno diverso',
  'err_password_mismatch' => 'Le due password non coincidono, inseriscile nuovamente',
  'err_uname_short' => 'Il nome utente deve contenere almeno 2 caratteri',
  'err_password_short' => 'La password deve essere almeno di 2 caratteri',
  'err_uname_pass_diff' => 'Nome utente e password devono essere diversi',
  'err_invalid_email' => 'Indirizzo email non valido',
  'err_duplicate_email' => 'Un altro utente si è già registrato con l\'indirizzo email da te inserito',
  'enter_info' => 'Inserisci le informazioni di registrazione',
  'required_info' => 'Informazioni richieste',
  'optional_info' => 'Informazioni facoltative',
  'username' => 'Nome utente',
  'password' => 'Password',
  'password_again' => 'Ripeti password',
  'email' => 'Email',
  'location' => 'Provenienza',
  'interests' => 'Interessi',
  'website' => 'Sito web',
  'occupation' => 'Occupazione',
  'error' => 'ERRORE',
  'confirm_email_subject' => '%s - Conferma di registrazione',
  'information' => 'Informazione',
  'failed_sending_email' => 'Impossibile inviare l\'email di conferma!',
  'thank_you' => 'Grazie per esserti registrato.<br /><br />Una email con le istruzioni su come attivare il tuo account è stata inviata all\'indirizzo email da te fornito.',
  'acct_created' => 'Il tuo account è stato creato, ed ora puoi effettuare il login',
  'acct_active' => 'Il tuo account è attivo, ed ora puoi effettuare il login',
  'acct_already_act' => 'Account già attivo!', //cpg1.4
  'acct_act_failed' => 'Impossibile attivare questo account!',
  'err_unk_user' => 'Utente selezionato inesistente!',
  'x_s_profile' => 'Profilo di %s',
  'group' => 'Gruppo',
  'reg_date' => 'Data di iscrizione',
  'disk_usage' => 'Utilizzo disco',
  'change_pass' => 'Cambia password',
  'current_pass' => 'Password attuale',
  'new_pass' => 'Nuova password',
  'new_pass_again' => 'Ripeti nuova password',
  'err_curr_pass' => 'La password attuale è sbagliata',
  'apply_modif' => 'Salva modifiche',
  'change_pass' => 'Cambia la password',
  'update_success' => 'Profilo aggiornato',
  'pass_chg_success' => 'Password cambiata',
  'pass_chg_error' => 'Password non cambiata',
  'notify_admin_email_subject' => '%s - Notifica registrazione',
  'last_uploads' => 'Ultimo file inserito.<br />Clicca per vedere tutti i file inseriti da', //cpg1.4
  'last_comments' => 'Ultimo commento.<br />Clicca per vedere tutti i commenti inseriti da', //cpg1.4
  'notify_admin_email_body' => 'Un nuovo utente con nome utente "%s" si è appena registrato nella tua Galleria',
  'pic_count' => 'File caricati', //cpg1.4
  'notify_admin_request_email_subject' => '%s - Richiesta registrazione', //cpg1.4
  'thank_you_admin_activation' => 'Grazie.<br /><br />La tua richiesta di attivazione è stata inviata all\'amministratore. Riceverai una email quando sarai approvato.', //cpg1.4
  'acct_active_admin_activation' => 'Account attivato ed email inviata all\'utente.', //cpg1.4
  'notify_user_email_subject' => '%s - Notifica di attivazione', //cpg1.4
);

$lang_register_confirm_email = <<<EOT
Grazie per esserti registrato su {SITE_NAME}

Per attivare il tuo account con nome utente "{USER_NAME}", devi cliccare sul collegamento seguente, o copiarlo e incollarlo nella barra degli indirizzi del tuo navigatore.

<a href="{ACT_LINK}">{ACT_LINK}</a>

Saluti,

Amministrazione {SITE_NAME}

EOT;

$lang_register_approve_email = <<<EOT
Un nuovo utente con nome utente "{USER_NAME}" si è appena registrato nella tua Galleria.

Per attivare il suo account clicca sul collegamento riportato di seguito.

<a href="{ACT_LINK}">{ACT_LINK}</a>

EOT;

$lang_register_activated_email = <<<EOT
Il tuo account è stato approvato e attivato.

Adesso puoi effettuare il login su <a href="{SITE_LINK}">{SITE_LINK}</a> utilizzando il nome utente "{USER_NAME}"


Saluti,

Amministrazione {SITE_NAME}

EOT;
}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
  'title' => 'Controlla commenti',
  'no_comment' => 'Nessun commento da controllare',
  'n_comm_del' => '%s commento/i cancellato/i',
  'n_comm_disp' => 'Numero di commenti da mostrare',
  'see_prev' => 'Mostra precedente',
  'see_next' => 'Mostra successivo',
  'del_comm' => 'Cancella commenti selezionati',
  'user_name' => 'Nome', //cpg1.4
  'date' => 'Data', //cpg1.4
  'comment' => 'Commento', //cpg1.4
  'file' => 'File', //cpg1.4
  'name_a' => 'Nome utente ascendente', //cpg1.4
  'name_d' => 'Nome utente discendente', //cpg1.4
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
  'keyword_list_title' => 'Lista parole chiave', //cpg1.4
  'keyword_msg' => 'La lista precedente non comprende tutti i dati. In particolare, non include parole contenute nei titoli delle foto o nelle descrizioni. Prova con una ricerca a tutto testo.',  //cpg1.4
  'edit_keywords' => 'Modifica parole chiave', //cpg1.4
  'search in' => 'Cerca in:', //cpg1.4
  'ip_address' => 'Indirizzo IP', //cpg1.4
  'fields' => 'Cerca in', //cpg1.4
  'age' => 'Periodo', //cpg1.4
  'newer_than' => 'Più nuovi di', //cpg1.4
  'older_than' => 'Più vecchi di', //cpg1.4
  'days' => 'giorni', //cpg1.4
  'all_words' => 'Ogni parola deve corrispondere (AND)', //cpg1.4
  'any_words' => 'Qualsiasi parola deve corrispondere (OR)', //cpg1.4
);

$lang_adv_opts = array(
  'title' => 'Titolo', //cpg1.4
  'caption' => 'Didascalia', //cpg1.4
  'keywords' => 'Parole chiave', //cpg1.4
  'owner_name' => 'Nome proprietario', //cpg1.4
  'filename' => 'Nome file', //cpg1.4
);

}

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
  'page_title' => 'Cerca nuovi file',
  'select_dir' => 'Seleziona cartella',
  'select_dir_msg' => 'Questa funzione ti consente di aggiungere file che hai aggiunto al server tramite FTP.<br /><br />Seleziona la cartella in cui hai caricato i tuoi file.', //cpg1.4
  'no_pic_to_add' => 'Nessun file da aggiungere',
  'need_one_album' => 'Necessiti di almeno un album per usare questa funzione',
  'warning' => 'Attenzione',
  'change_perm' => 'Lo script non può scrivere in questa cartella, devi cambiare il CHMOD in 755 o 777 prima di aggiungere file!',
  'target_album' => '<b>Metti i file di &quot;</b>%s<b>&quot; in </b>%s',
  'folder' => 'Cartella',
  'image' => 'File',
  'album' => 'Album',
  'result' => 'Risultato',
  'dir_ro' => 'Non scrivibile. ',
  'dir_cant_read' => 'Non leggibile. ',
  'insert' => 'Aggiunta nuovi file alla galleria',
  'list_new_pic' => 'Lista dei nuovi file',
  'insert_selected' => 'inserisci i file selezionati',
  'no_pic_found' => 'Nessun nuovo file trovato',
  'be_patient' => 'Attendere prego, lo script necessita di tempo per aggiungere i file',
  'no_album' => 'Nessun album selezionato',
  'result_icon' => 'clicca per i dettagli o per ricaricare',  //cpg1.4
  'notes' =>  '<ul>'.
                          '<li><b>OK</b> : significa che il file è stato aggiunto con successo'.
                          '<li><b>DP</b> : significa che il file è duplicato ed esiste gi&agrave nel database'.
                          '<li><b>PB</b> : significa che il file non può essere aggiunto, controlla la tua configurazione e i permessi delle cartelle nelle quali risiedono i file'.
                          '<li><b>NA</b> : significa che non hai selezionato un album nel quale caricare i file, clicca \'<a href="javascript:history.back(1)">indietro</a>\' e seleziona un album. Se non possiedi un album <a href="albmgr.php">creane uno prima</a></li>'.
                          '<li>Se i \'simboli\' OK, DP, PB non appaiono clicca sull\'icona corrotta per vedere il messaggio generato da PHP'.
                          '<li>Sei il navigatore va in timeout, premi il tasto di ricarica'.
                          '</ul>',
  'select_album' => 'Seleziona album',
  'check_all' => 'Seleziona tutti',
  'uncheck_all' => 'Deseleziona tutti',
  'no_folders' => 'Non ci sono ancora cartelle dentro la cartella "albums". Assicurati di crearne almeno una e di caricarvi i tuoi file tramite FTP. Non devi caricare file nelle cartelle "userpics" o "edit", sono riservate per il caricamento via http.', //cpg1.4
   'albums_no_category' => 'Album senza categoria', //cpg1.4 // album pulldown mod, added by frogfoot
  'personal_albums' => '* Album personali', //cpg1.4 // album pulldown mod, added by frogfoot
  'browse_batch_add' => 'Interfaccia navigabile (consigliato)', //cpg1.4
  'edit_pics' => 'Modifica file', //cpg1.4
  'edit_properties' => 'Proprietà album', //cpg1.4
  'view_thumbs' => 'Vista miniature', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File stat_details.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('STAT_DETAILS_PHP')) $lang_stat_details_php = array(
  'show_hide' => 'mostra/nascondi questa colonna', //cpg1.4
  'vote' => 'Dettagli voti', //cpg1.4
  'hits' => 'Dettagli visite', //cpg1.4
  'stats' => 'Statistiche voti', //cpg1.4
  'sdate' => 'Data', //cpg1.4
  'rating' => 'Valutazione', //cpg1.4
  'search_phrase' => 'Chiave di ricerca', //cpg1.4
  'referer' => 'Referenza', //cpg1.4
  'browser' => 'Navigatore', //cpg1.4
  'os' => 'Sistema operativo', //cpg1.4
  'ip' => 'IP', //cpg1.4
  'sort_by_xxx' => 'Elenca per %s', //cpg1.4
  'ascending' => 'ascendente', //cpg1.4
  'descending' => 'discendente', //cpg1.4
  'internal' => 'interno', //cpg1.4
  'close' => 'chiudi', //cpg1.4
  'hide_internal_referers' => 'nascondi referenze interne', //cpg1.4
  'date_display' => 'Mostra data', //cpg1.4
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
  'custom_title' => 'Campi personalizzati',
  'cust_instr_1' => 'Puoi selezionare un numero personalizzato di campi per caricare file. Ma non puoi comunque selezionarne più del limite impostato.',
  'cust_instr_2' => 'Numero di campi',
  'cust_instr_3' => 'Campi per il caricamento file: %s',
  'cust_instr_4' => 'Campi per il caricamento URI/URL: %s',
  'cust_instr_5' => 'Campi per il caricamento URI/URL:',
  'cust_instr_6' => 'Campi per il caricamento file:',
  'cust_instr_7' => 'Inserisci il numero di ogni tipo di campo per il caricamento che desideri.  Quindi clicca \'Continua\'. ',
  'reg_instr_1' => 'Azione non valida per la creazione del modulo.',
  'reg_instr_2' => 'Da questa pagina puoi caricare i tuoi file utilizzando i campi qui sotto. I file da caricare non devono superare i %s KB ciascuno. I file di tipo ZIP rimarranno compressi.',
  'reg_instr_3' => 'Se desideri che il file compresso venga decompresso, devi usare il campo per il caricamento nell\'area  \'Caricamento e decompressione ZIP\'.',
  'reg_instr_4' => 'Quando usi la funzione di caricamento URI/URL, inserisci il percorso del file in questo modo: http://www.miosito.com/immagini/esempio.jpg',
  'reg_instr_5' => 'Una volta selezionati i file o URI/URL da caricare, clicca su \'Continua\'.',
  'reg_instr_6' => 'Caricamento e decompressione ZIP:',
  'reg_instr_7' => 'File da caricare:',
  'reg_instr_8' => 'URI/URL da caricare:',
  'error_report' => 'Errore',
  'error_instr' => 'I seguenti caricamenti hanno creato errori:',
  'file_name_url' => 'Nome/URL file',
  'error_message' => 'Messaggio di errore',
  'no_post' => 'File non caricato da POST.',
  'forb_ext' => 'Estensione file proibita.',
  'exc_php_ini' => 'Dimensione file eccedente quella consentita da PHP.',
  'exc_file_size' => 'Dimensione file eccedente quella consentita dalla Galleria.',
  'partial_upload' => 'Caricamento solo parziale.',
  'no_upload' => 'Nessun file caricato.',
  'unknown_code' => 'Errore PHP sconosciuto nel caricamento.',
  'no_temp_name' => 'Nessun file caricato - Nessun nome temporaneo.',
  'no_file_size' => 'Non contiene nessun dato/Corrotto',
  'impossible' => 'Impossibile spostare.',
  'not_image' => 'Non è un\'immagine/corrotto',
  'not_GD' => 'Non è un\'estensione GD.',
  'pixel_allowance' => 'L\'altezza e la larghezza dell\'immagine caricata è maggiore di quella consentita dalla configurazione della Galleria.', //cpg1.4
  'incorrect_prefix' => 'Prefisso URI/URL non corretto',
  'could_not_open_URI' => 'Impossibile aprire l\'URI.',
  'unsafe_URI' => 'Sicurezza non verificabile.',
  'meta_data_failure' => 'Fallimento metadati',
  'http_401' => '401 Non autorizzato',
  'http_402' => '402 Pagamento richiesto',
  'http_403' => '403 Proibito',
  'http_404' => '404 Non trovato',
  'http_500' => '500 Errore interno del server',
  'http_503' => '503 Servizio non disponibile',
  'MIME_extraction_failure' => 'Il tipo MIME non può essere determinato.',
  'MIME_type_unknown' => 'Tipo MIME sconosciuto',
  'cant_create_write' => 'Impossibile creare file di scrittura.',
  'not_writable' => 'Impossibile scrivere sul file di scrittura.',
  'cant_read_URI' => 'Impossibile leggere l\'URI/URL',
  'cant_open_write_file' => 'Impossibile aprire il file di scrittura URI.',
  'cant_write_write_file' => 'Impossibile scrivere sul file di scrittura URI.',
  'cant_unzip' => 'Impossibile decomprimere.',
  'unknown' => 'Errore sconosciuto',
  'succ' => 'Caricamenti andati a buon fine',
  'success' => '%s caricamenti sono andati a buon fine.',
  'add' => 'Clicca \'Continua\' per aggiungere i file agli album.',
  'failure' => 'Caricamento fallito',
  'f_info' => 'Informazioni file',
  'no_place' => 'Il file precedente non può essere inserito.',
  'yes_place' => 'Il file precedente è stato inserito con successo.',
  'max_fsize' => 'La dimensione massima consentita dei file è %s KB',
  'album' => 'Album',
  'picture' => 'File',
  'pic_title' => 'Titolo file',
  'description' => 'Descrizione file',
  'keywords' => 'Parole chiave (separa con spazi)<br /><a href="#" onClick="return MM_openBrWindow(\'keyword_select.php\',\'selectKey\',\'width=250, height=400, scrollbars=yes,toolbar=no,status=yes,resizable=yes\')">Inserisci da una lista</a>', //cpg1.4
  'keywords_sel' =>'Seleziona parole chiave', //cpg1.4
  'err_no_alb_uploadables' => 'Spiacente, non hai un album nel quale sei autorizzato a caricare i file',
  'place_instr_1' => 'Adesso inserisci i file negli album. Puoi anche inserire informazioni specifiche per ogni file.',
  'place_instr_2' => 'Altri file necessitano di essere inseriti. Clicca \'Continua\'.',
  'process_complete' => 'Tutti i file inseriti con successo.',
   'albums_no_category' => 'Album senza categoria', //cpg1.4. //album pulldown mod, added by frogfoot
  'personal_albums' => '* Album personali', //cpg1.4 //album pulldown mod, added by frogfoot
  'select_album' => 'Seleziona album', //cpg1.4 //album pulldown mod, added by frogfoot
  'close' => 'Chiudi', //cpg1.4
  'no_keywords' => 'Spiacente, nessuna parola chiave disponibile!', //cpg1.4
  'regenerate_dictionary' => 'Ricrea dizionario', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
  'memberlist' => 'Iscritti', //cpg1.4
  'user_manager' => 'Gestione utenti', //cpg1.4
  'title' => 'Gestione utenti',
  'name_a' => 'Nome ascendente',
  'name_d' => 'Nome discenente',
  'group_a' => 'Gruppo ascendente',
  'group_d' => 'Gruppo discendente',
  'reg_a' => 'Data di registrazione ascendente',
  'reg_d' => 'Data di registrazione discendente',
  'pic_a' => 'Numero file ascendente',
  'pic_d' => 'Numero file discendente',
  'disku_a' => 'Utilizzo disco ascendente',
  'disku_d' => 'Utilizzo disco discendente',
  'lv_a' => 'Ultima visita ascendente',
  'lv_d' => 'Ultima visita discendente',
  'sort_by' => 'Ordina utenti per',
  'err_no_users' => 'La tabella utenti è vuota !',
  'err_edit_self' => 'Non puoi modificare il tuo profilo, utilizza il collegamento \'Profilo\' ',
  'edit' => 'Modifica', //cpg1.4
  'with_selected' => 'Se selezionati:', //cpg1.4
  'delete' => 'Cancella', //cpg1.4
  'delete_files_no' => 'mantieni file pubblici (ma rendili anonimi)', //cpg1.4
  'delete_files_yes' => 'cancella anche i file pubblici', //cpg1.4
  'delete_comments_no' => 'Mantieni i commenti (ma rendili anonimi)', //cpg1.4
  'delete_comments_yes' => 'cancella anche i commenti', //cpg1.4
  'activate' => 'Attiva', //cpg1.4
  'deactivate' => 'Disattiva', //cpg1.4
  'reset_password' => 'Reimposta password', //cpg1.4
  'change_primary_membergroup' => 'Cambia gruppo primario', //cpg1.4
  'add_secondary_membergroup' => 'Aggiungi gruppo secondario', //cpg1.4
  'name' => 'Nome utente',
  'group' => 'Gruppo',
  'inactive' => 'Non attivo',
  'operations' => 'Operazioni',
  'pictures' => 'File',
  'disk_space_used' => 'Spazio utilizzato', //cpg1.4
  'disk_space_quota' => 'Quota disco', //cpg1.4
  'registered_on' => 'Registrazione', //cpg1.4
  'last_visit' => 'Ultima visita',
  'u_user_on_p_pages' => '%d utenti in %d pagina(e)',
  'confirm_del' => 'Sei sicuro di voler CANCELLARE questo utente ? \\nTutti i suoi file ed album saranno cancellati.', //js-alert
  'mail' => 'MAIL',
  'err_unknown_user' => 'L\'utente selezionato non esiste !',
  'modify_user' => 'Modifica utente',
  'notes' => 'Note',
  'note_list' => '<li>Se non vuoi cambiare la password attuale, lascia vuoto il campo "password"',
  'password' => 'Password',
  'user_active' => 'Utente attivo',
  'user_group' => 'Gruppo utente',
  'user_email' => 'Email utente',
  'user_web_site' => 'Sito web utente',
  'create_new_user' => 'Crea nuovo utente',
  'user_location' => 'Provenienza utente',
  'user_interests' => 'Interessi utente',
  'user_occupation' => 'Occupazione utente',
  'user_profile1' => '$user_profile1', //cpg1.4
  'user_profile2' => '$user_profile2', //cpg1.4
  'user_profile3' => '$user_profile3', //cpg1.4
  'user_profile4' => '$user_profile4', //cpg1.4
  'user_profile5' => '$user_profile5', //cpg1.4
  'user_profile6' => '$user_profile6', //cpg1.4
  'latest_upload' => 'File caricati di recente',
  'never' => 'Mai',
  'search' => 'Ricerca utenti', //cpg1.4
  'submit' => 'Invia', //cpg1.4
  'search_submit' => 'Vai!', //cpg1.4
  'search_result' => 'Cerca risultati per: ', //cpg1.4
  'alert_no_selection' => 'Devi selezionare almeno un utente prima!', //cpg1.4 //js-alert
  'password' => 'password', //cpg1.4
  'select_group' => 'Seleziona gruppo', //cpg1.4
  'groups_alb_access' => 'Permessi album per gruppo', //cpg1.4
  'album' => 'Album', //cpg1.4
  'category' => 'Categoria', //cpg1.4
  'modify' => 'Modifica?', //cpg1.4
  'group_no_access' => 'Questo gruppo non gode di accesso speciale', //cpg1.4
  'notice' => 'Nota', //cpg1.4
  'group_can_access' => 'Album al/i quale/i solamente "%s" può accedere', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //

if (defined('UTIL_PHP')) {
$lang_util_desc_php = array(
'Aggiorna titoli dal nome del file', //cpg1.4
'Cancella titoli', //cpg1.4
'Ricostruisce miniature e immagini intermedie', //cpg1.4
'Cancella le immagini a dimensioni originali e le sostituisce con le immagini intermedie', //cpg1.4
'Cancella le immagini originali o intermedie per liberare spazio web', //cpg1.4
'Cancella commenti orfani', //cpg1.4
'Aggiorna le dimensioni dei file (se le hai modificate manualmente)', //cpg1.4
'Reimposta contatore visite', //cpg1.4
'Mostra informazioni PHP', //cpg1.4
'Aggiorna il database', //cpg1.4
'Mostra rapporti', //cpg1.4
);
$lang_util_php = array(
  'title' => 'Strumenti di amministrazione (Ridimensiona immagini)',
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
  'thumbs_wait' => 'Aggiornamento miniature e/o immagini ridimensionate, attendere prego...',
  'thumbs_continue_wait' => 'Continuo nell\'aggiornamento delle miniature e/o immagini ridimensionate...',
  'titles_wait' => 'Aggiornamento titoli, attendere prego...',
  'delete_wait' => 'Cancellazione titoli, attendere prego...',
  'replace_wait' => 'Cancellazione originali e sostituzione con le immagini ridimensionate, attendere prego...',
  'instruction' => 'Istruzioni veloci',
  'instruction_action' => 'Seleziona azione',
  'instruction_parameter' => 'Imposta parametri',
  'instruction_album' => 'Seleziona album',
  'instruction_press' => 'Premi %s',
  'update' => 'Aggiorna miniature e/o immagini ridimensionate',
  'update_what' => 'Cosa deve essere aggiornato',
  'update_thumb' => 'Solo miniature',
  'update_pic' => 'Solo immagini ridimensionate',
  'update_both' => 'Sia le miniature che le immagini ridimensionate',
  'update_number' => 'Numero di immagini processate per clic',
  'update_option' => '(Prova ad impostare questa opzione ad un parametro più basso se hai problemi di timeout)',
  'filename_title' => 'Nome file &rArr; Titolo file',
  'filename_how' => 'Come devonono essere rinominati i file ',
  'filename_remove' => 'Rimuovi .jpg e rimpiazza _ (trattino basso) con spazi',
  'filename_euro' => 'Cambia 2003_11_23_13_20_20.jpg in 23/11/2003 13:20',
  'filename_us' => 'Cambia 2003_11_23_13_20_20.jpg in 11/23/2003 13:20',
  'filename_time' => 'Cambia 2003_11_23_13_20_20.jpg in 13:20',
  'delete' => 'Cancella titoli file o immagini a dimensioni originali',
  'delete_title' => 'Cancella titoli file',
  'delete_title_explanation' => 'Questo rimuoverà tutti i titoli dei file dell\'album specificato.', //cpg1.4
  'delete_original' => 'Cancella le immagini a dimensione originale',
  'delete_original_explanation' => 'Questo cancellerà le immagini a dimensione originale.', //cpg1.4
  'delete_intermediate' => 'Cancella immagini intermedie', //cpg1.4
  'delete_intermediate_explanation' => 'Questo cancellerà le immagini intermedie (normal).<br />Utilizza questa funzione per liberare spazio su disco se hai disabilitato l\'opzione \'Crea immagini intermedie\' nella configurazione dopo aver aggiunto immagini.', //cpg1.4
  'delete_replace' => 'Cancella le immagini originali sostituendole con le versioni ridimensionate',
  'titles_deleted' => 'Tutti i titoli nell\'album specificato sono stati rimossi', //cpg1.4
  'deleting_intermediates' => 'Cancellazione immagini intermedie, attendere prego...', //cpg1.4
  'searching_orphans' => 'Ricerca elementi orfani, attendere prego...', //cpg1.4
  'select_album' => 'Seleziona album',
  'delete_orphans' => 'Cancella commenti sui file mancanti', //cpg1.4
  'delete_orphans_explanation' => 'Identifica e consente di cancellare ogni commento non più esistente nella Galleria.<br />Controlla tutti gli album.', //cpg1.4
  'refresh_db' => 'Aggiorna dimensioni e informazioni del file', //cpg1.4
  'refresh_db_explanation' => 'Aggiorna le dimensioni del file, sia come peso che come spazio occupato. Utilizza questo strumento se le quote disco risultano non corrette o se hai cambiato manualmente i file.', //cpg1.4
  'reset_views' => 'Reimposta contatore visite', //cpg1.4
  'reset_views_explanation' => 'Azzera tutte le visite nell\'album specificato.', //cpg1.4
  'orphan_comment' => 'commenti orfani trovati',
  'delete' => 'Cancella',
  'delete_all' => 'Cancella tutto',
  'delete_all_orphans' => 'Cancella tutti gli elementi orfani?', //cpg1.4
  'comment' => 'Commento: ',
  'nonexist' => 'collegato al file non esistente # ',
  'phpinfo' => 'Mostra informazioni PHP',
  'phpinfo_explanation' => 'Contiene informazioni tecniche sul tuo server.<br /> - Potresti esserne richiesto quando hai bisogno di supporto.', //cpg1.4
  'update_db' => 'Aggiorna database',
  'update_db_explanation' => 'Se hai cambiato o modificato i file originali di Coppermine, magari facendo un aggiornamento della Galleria, esegui almeno una volta un aggiornamento del database. Verranno create le tabelle necessarie e/o impostati i valori di configurazione nel database di Coppermine.',
  'view_log' => 'Visualizza rapporti', //cpg1.4
  'view_log_explanation' => 'Coppermine può tenere traccia di varie azioni eseguite dagli utenti. Puoi sfogliare questi rapporti se li hai abilitati nella <a href="admin.php">configurazione</a>.', //cpg1.4
  'versioncheck' => 'Controllo versioni', //cpg1.4
  'versioncheck_explanation' => 'Controlla le versioni dei tuoi file per vedere se li hai sostituiti tutti eseguendo un aggiornamento, o se sono stati aggiornati dopo il rilascio di un aggiornamento.', //cpg1.4
  'bridgemanager' => 'Gestione integrazione', //cpg1.4
  'bridgemanager_explanation' => 'Abilita o disabilita integrazione (bridging) di Coppermine con un\'altra applicazione (es. la tua BBS).', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File versioncheck.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('VERSIONCHECK_PHP')) $lang_versioncheck_php = array(
  'title' => 'Controllo versione', //cpg1.4
  'what_it_does' => 'Questa pagina serve a quegli utenti che hanno aggiornato la propria installazione di Coppermine. Lo script analizza i tuoi file sul server e cerca di determinare se la versione è la stessa di quelli situati nel deposito su http://coppermine.sourceforge.net, mostrando in questo modo quali file dovresti aggiornare.<br />Tutto ciò che sarà contrassegnato in rosso necessita di essere aggiornato. Le voci in giallo necessitano di un semplice controllo. Le voci in verde (o il tuo colore predefinito per il carattere) sono OK.<br />Clicca sulle icone di aiuto per maggiori dettagli.', //cpg1.4
  'online_repository_unable' => 'Impossibile connettersi al deposito', //cpg1.4
  'online_repository_noconnect' => 'Coppermine non è in grado di connettersi al deposito. Ciò può essere dovuto a due motivi:', //cpg1.4
  'online_repository_reason1' => 'Il deposito al momento non è raggiungibile - controlla se riesci a navigare questa pagina: %s - se non riesci, prova più tardi.', //cpg1.4
  'online_repository_reason2' => 'Il PHP sul tuo server è configurato con %s Off (per impostazione predefinita &egrav; On). Se amministri direttamente il server, modifica questa impostazione nel file <i>php.ini</i> (o almeno consenti che sia sovrascritta con %s). Se utilizzi un servizio di hosting, probabilmente devi arrenderti a non poterti collegare al deposito. Questa pagina mostrerà solo la versione dei file della tua installazione, mentre gli aggiornamenti non saranno visualizzati.', //cpg1.4
  'online_repository_skipped' => 'Connessione al deposito saltata', //cpg1.4
  'online_repository_to_local' => 'Lo script sta utilizzando per impostazione predefinita le copie locali dei file. I dati potrebbero essere non aggiornati, se hai aggiornato coppermine e non hai caticato tutti i file. Allo stesso modo, cambiamenti apportati ai file dopo il rilascio non saranno inseriti nell\'account.', //cpg1.4
  'local_repository_unable' => 'Impossibile connettersi al deposito locale sul tuo server', //cpg1.4
  'local_repository_explanation' => 'Coppermine non è stata in grado di connettersi al deposito locale del file %s sul tuo server. Questo significa che probabilmente non hai caricato il file di deposito sul tuo server. Fallo ora e riprova ad eseguire lo script (aggiornando questa pagina).<br />Se lo script fallisce di nuovo, il tuo hosting potrebbe aver disabilitato completamente parti delle <a href="http://www.php.net/manual/en/ref.filesystem.php">funzioni del filesystem PHP</a>. In questo caso, non sarai in grado di utilizzare questo strumento.', //cpg1.4
  'coppermine_version_header' => 'Versione di Coppermine installata', //cpg1.4
  'coppermine_version_info' => 'Hai correntemente installato: %s', //cpg1.4
  'coppermine_version_explanation' => 'Se pensi che il dato sia sbagliato e credi di avere una versione più recente di Coppermine, probabilmente non hai caricato la versione più recente del file <i>include/init.inc.php</i>', //cpg1.4
  'version_comparison' => 'Confronto versione', //cpg1.4
  'folder_file' => 'cartella/file', //cpg1.4
  'coppermine_version' => 'versione Galleria', //cpg1.4
  'file_version' => 'versione file', //cpg1.4
  'webcvs' => 'web svn', //cpg1.4
  'writable' => 'scrivibile', //cpg1.4
  'not_writable' => 'non scrivibile', //cpg1.4
  'help' => 'Aiuto', //cpg1.4
  'help_file_not_exist_optional1' => 'file/cartella inesistente', //cpg1.4
  'help_file_not_exist_optional2' => 'Il/la file/cartella %s non è stato trovato/a sul server. Anche se facoltativo, dovresti caricarlo (tramite FTP) se stai incontrando dei problemi.', //cpg1.4
  'help_file_not_exist_mandatory1' => 'file/cartella inesistente', //cpg1.4
  'help_file_not_exist_mandatory2' => 'Il/la file/cartella %s non è stato trovato/a sul server, anche se necessario. Caricalo (tramite FTP).', //cpg1.4
  'help_no_local_version1' => 'Nessuna versione locale del file', //cpg1.4
  'help_no_local_version2' => 'Lo script non è in grado di estrarre la versione locale del file: il tuo file o è troppo vecchio o lo hai modificato, rimuovendo le informazioni dell\'intestazione. Aggiornare il file è raccomandato.', //cpg1.4
  'help_local_version_outdated1' => 'Versione locale obsoleta', //cpg1.4
  'help_local_version_outdated2' => 'La tua versione di questo file sembra essere di una vecchia versione di Coppermine (che hai probabilmente aggiornato). Assicurati di aggiornare anche questo file.', //cpg1.4
  'help_local_version_na1' => 'Impossibile estrarre informazioni sulla versione cvs', //cpg1.4
  'help_local_version_na2' => 'Lo script non riesce a determinare la versione cvs del file sul tuo server. Dovresti caricare la versione dal tuo pacchetto.', //cpg1.4
  'help_local_version_dev1' => 'Versione di sviluppo', //cpg1.4
  'help_local_version_dev2' => 'Il file sul tuo webserver sembra essere più recente della tua versione di Coppermine. O stai usando un file di sviluppo (dovresti farlo solo se sei sicuro di quel che stai facendo), o hai aggiornato Coppermine e non hai caricato include/init.inc.php', //cpg1.4
  'help_not_writable1' => 'Cartella non scrivibile', //cpg1.4
  'help_not_writable2' => 'Cambia i permessi file (CHMOD) per garantire allo script l\'accesso in scrittura alla cartella %s e a tutto il suo contenuto.', //cpg1.4
  'help_writable1' => 'Cartella scrivibile', //cpg1.4
  'help_writable2' => 'La cartella %s è scrivibile. Questo è un rischio non necessario: solo Coppermine necessita di permessi di lettura ed esecuzione.', //cpg1.4
  'help_writable_undetermined' => 'Coppermine non è in grado di determinare se la cartella è scrivibile o meno.', //cpg1.4
  'your_file' => 'tuo file', //cpg1.4
  'reference_file' => 'File di riferimento', //cpg1.4
  'summary' => 'Sommario', //cpg1.4
  'total' => 'Totale dei file/cartelle controllati', //cpg1.4
  'mandatory_files_missing' => 'File obbligatori mancanti', //cpg1.4
  'optional_files_missing' => 'File facoltativi mancanti', //cpg1.4
  'files_from_older_version' => 'File lasciati da vecchie versioni di Coppermine', //cpg1.4
  'file_version_outdated' => 'Vecchie versioni del file', //cpg1.4
  'error_no_data' => 'Lo script ha fallito, non &grave; stato in grado di recuperare alcuna informazione. Spiacente per l\'inconveniente.', //cpg1.4
  'go_to_webcvs' => 'vai su %s', //cpg1.4
  'options' => 'Opzioni', //cpg1.4
  'show_optional_files' => 'Mostra cartelle/file facoltativi', //cpg1.4
  'show_mandatory_files' => 'Mostra file obbligatori', //cpg1.4
  'show_file_versions' => 'Mostra versioni file', //cpg1.4
  'show_errors_only' => 'Mostra solo cartelle/file con errori', //cpg1.4
  'show_permissions' => 'Mostra permessi cartella', //cpg1.4
  'show_condensed_output' => 'Mostra output compatto (per screenshot più semplici)', //cpg1.4
  'coppermine_in_webroot' => 'Coppermine è installata nella cartella radice dello spazio web', //cpg1.4
  'connect_online_repository' => 'Prova a connetterti al deposito online', //cpg1.4
  'show_additional_information' => 'Mostra informazioni aggiuntive', //cpg1.4
  'no_webcvs_link' => 'Non mostrare collegamenti web svn', //cpg1.4
  'stable_webcvs_link' => 'Mostra collegamenti web svn stabili', //cpg1.4
  'devel_webcvs_link' => 'Mostra collegamenti web svn di sviluppo', //cpg1.4
  'submit' => 'Applica modifiche / Aggiorna', //cpg1.4
  'reset_to_defaults' => 'Ripristina impostazioni predefinite', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File view_log.php  //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('VIEWLOG_PHP')) $lang_viewlog_php = array(
  'delete_all' => 'Cancella tutti i rapporti', //cpg1.4
  'delete_this' => 'Cancella questo rapporto', //cpg1.4
  'view_logs' => 'Visualizza rapporti', //cpg1.4
  'no_logs' => 'Nessun rapporto creato.', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File xp_publish.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('XP_PUBLISH_PHP')) {

$lang_xp_publish_client = <<<EOT
<h1>Pubblicazione web guidata XP</h1><p>Questo modulo consente di usare la Pubblicazione web guidata di <b>Windows XP</b> con Coppermine.</p><p>Il codice è basato su articolo pubblicato da
EOT;

$lang_xp_publish_required = <<<EOT
<h2>Cosa è richiesto</h2><ul><li>Windows XP in modo da avere la procedura guidata.</li><li>Una installazione funzionante di Coppermine sulla quale <b>la funzione di caricamento via web funzioni correttamente.</b></li></ul><h2>Come installare dal lato client</h2><ul><li>Clicca col tasto destro su
EOT;

$lang_xp_publish_select = <<<EOT
Seleziona &quot;Salva destinazione con nome...&quot;. Salva il file sul tuo disco locale. Quando salvi il file, controlla che il nome proposto sia <b>cpg_###.reg</b> (### rappresenta un formato data numerico). Adegua il nome al suddetto formato se necessario (lasciando i numeri). Una volta scaricato, fai doppio clic sul file per registrare il tuo server sulla Pubblicazione web guidata.</li></ul>
EOT;

$lang_xp_publish_testing = <<<EOT
<h2>Prove</h2><ul><li>In Esplora risorse, seleziona alcuni file e clicca su <b>Pubblica xxx sul web</b> nel pannello di sinistra.</li><li>Conferma la tua selezione. Clicca su <b>Avanti</b>.</li><li>Nella lista dei servizi che appaiono, seleziona quella per la tua galleria (ha il nome della tua galleria). Se il servizio non appare, controlla di aver installato <b>cpg_pub_wizard.reg</b> come descritto.</li><li>Inserisci le tue informazioni di login se richiesto.</li><li>Seleziona gli album di destinazione per le tue immagini o creane di nuovi.</li><li>Clicca su <b>Avanti</b>. Il caricamento dovrebbe incominciare.</li><li>Quando sarà completato, controlla la galleria per vedere se le immagini sono state aggiunte correttamente.</li></ul>
EOT;

$lang_xp_publish_notes = <<<EOT
<h2>Note :</h2><ul><li>Una volta iniziato il caricamento, la procedura guidata non può mostrare nessun messaggio di errore da parte dello script, quindi non puoi sapere se tutto sia andato a buon fine o meno finchè non controllerai la galleria.</li><li>Se il caricamento fallisce, abilita la &quot;Modalità debug &quot; nella pagina di configurazione, tenta con una sola immagine e controlla i messaggi di errore nel file
EOT;

$lang_xp_publish_flood = <<<EOT
che si trova nella cartella di Coppermine sul tuo server.</li><li>Per evitare che la galleria sia bombardata <i>(flooding)</i> da immagini caricate attraverso la Pubblicazione guidata, solo gli <b>amministratori</b> e <b>gli utenti che possono avere i propri album</b> possono usare questa funzione.</li>
EOT;



$lang_xp_publish_php = array(
  'title' => 'Coppermine - Pubblicazione web guidata XP', //cpg1.4
  'welcome' => 'Benvenuto <b>%s</b>,', //cpg1.4
  'need_login' => 'Devi eseguire il login alla galleria usando il navigatore prima di usare la procedura guidata.<p/><p>Quando esegui il login non scordarti di selezionare l\'opzione <b>Ricordami</b> se presente.', //cpg1.4
  'no_alb' => 'Spiacente, non esiste nessun album nel quale ti sia consentito il caricamento di immagini tramite la procedura guidata.', //cpg1.4
  'upload' => 'Carica le tue immagini in un album esistente', //cpg1.4
  'create_new' => 'Crea un nuovo album per le tue immagini', //cpg1.4
  'album' => 'Album', //cpg1.4
  'category' => 'Categoria', //cpg1.4
  'new_alb_created' => 'Il tuo nuovo album &quot;<b>%s</b>&quot; è stato creato.', //cpg1.4
  'continue' => 'Premi &quot;Avanti&quot; per iniziare il caricamento', //cpg1.4
  'link' => 'questo collegamento', //cpg1.4
);
}
?>