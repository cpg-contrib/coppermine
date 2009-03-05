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

define('IN_COPPERMINE', true);
define('DISPLAYECARD_PHP', true);

require('include/init.inc.php');
require('include/smilies.inc.php');

if (!isset($_GET['data'])) cpg_die(CRITICAL_ERROR, $lang_errors['param_missing'], __FILE__, __LINE__);

$data = array();
$data = @unserialize(@base64_decode($_GET['data']));

// attempt to obtain full link from db if ecard logging enabled and min 12 chars of data is provided and only 1 match
if ((!is_array($data)) && $CONFIG['log_ecards'] && (strlen($_GET['data']) > 12)) {
        $result = cpg_db_query("SELECT link FROM {$CONFIG['TABLE_ECARDS']} WHERE link LIKE '{$_GET['data']}%'");
        if (mysql_num_rows($result) === 1) {
                $row = mysql_fetch_assoc($result);
                $data = @unserialize(@base64_decode($row['link']));
        }
}

if (is_array($data)) {

// Remove HTML tags as we can't trust what we receive
foreach($data as $key => $value) $data[$key] = strtr($value, $HTML_SUBST);
// Load template parameters
$params = array('{LANG_DIR}' => $lang_text_dir,
    '{TITLE}' => sprintf($lang_ecard_php['ecard_title'], $data['sn']),
    '{CHARSET}' => $CONFIG['charset'] == 'language file' ? $lang_charset : $CONFIG['charset'],
    '{VIEW_ECARD_TGT}' => '',
    '{VIEW_ECARD_LNK}' => '',
    '{PIC_URL}' => $data['p'],
    '{URL_PREFIX}' => '',
    '{GREETINGS}' => $data['g'],
    '{MESSAGE}' => bb_decode(process_smilies($data['m'])),
    '{SENDER_EMAIL}' => $data['se'],
    '{SENDER_NAME}' => $data['sn'],
    '{VIEW_MORE_TGT}' => $CONFIG['ecards_more_pic_target'],
    '{VIEW_MORE_LNK}' => $lang_ecard_php['view_more_pics'],
    '{PID}' => $data['pid'],
    '{PIC_TITLE}' => $data['pt'],
	'{PIC_CAPTION}' => $data['pc'],
    );
// Parse template
echo template_eval($template_ecard, $params);

} else {
        cpg_die(CRITICAL_ERROR, $lang_displayecard_php['invalid_data'], __FILE__, __LINE__);
}
?>
