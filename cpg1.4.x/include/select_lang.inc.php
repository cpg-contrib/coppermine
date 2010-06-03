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

/**
 * phpMyAdmin Language Loading File
 */

/**
 * All the supported languages have to be listed in the array below.
 * 1. The key must be the "official" ISO 639 language code and, if required,
 *     the dialect code. It can also contains some informations about the
 *     charset (see the Russian case).
 * 2. The first of the values associated to the key is used in a regular
 *     expression to find some keywords corresponding to the language inside two
 *     environment variables.
 *     These values contains:
 *     - the "official" ISO language code and, if required, the dialect code
 *       also ('bu' for Bulgarian, 'fr([-_][[:alpha:]]{2})?' for all French
 *       dialects, 'zh[-_]tw' for Chinese traditional...);
 *     - the '|' character (it means 'OR');
 *     - the full language name.
 * 3. The second values associated to the key is the name of the file to load
 *     without the '.php' extension.
 * 4. The last values associated to the key is the language code as defined by
 *     the RFC1766.
 *
 * Beware that the sorting order (first values associated to keys by
 * alphabetical reverse order in the array) is important: 'zh-tw' (chinese
 * traditional) must be detected before 'zh' (chinese simplified) for
 * example.
 *
 * When there are more than one charset for a language, we put the -utf-8
 * first.
 */
$available_languages = array('ar' => array('ar([-_][[:alpha:]]{2})?|arabic', 'arabic', 'ar'),
    'bg' => array('bg|bulgarian', 'bulgarian', 'bg'),
    'ca' => array('ca|catalan', 'catalan', 'ca'),
    'cs' => array('cs|czech', 'czech', 'cs'),
    'cy' => array('cy|welsh', 'welsh', 'cy'),
    'da' => array('da|danish', 'danish', 'da'),
    'de' => array('de([-_][[:alpha:]]{2})?|german', 'german', 'de'),
    'el' => array('el|greek', 'greek', 'el'),
    'gb' => array('en[-_]gb', 'english_gb', 'gb'),
    'en' => array('en([-_][[:alpha:]]{2})?|english', 'english', 'en'),
    'es' => array('es([-_][[:alpha:]]{2})?|spanish', 'spanish', 'es'),
    'et' => array('et|estonian', 'estonian', 'et'),
    'fi' => array('fi|finnish', 'finnish', 'fi'),
    'fr' => array('fr([-_][[:alpha:]]{2})?|french', 'french', 'fr'),
    'gl' => array('gl|galician', 'galician', 'gl'),
    'he' => array('he|hebrew', 'hebrew', 'he'),
    'hr' => array('hr|croatian', 'croatian', 'hr'),
    'hu' => array('hu|hungarian', 'hungarian', 'hu'),
    'id' => array('id|indonesian', 'indonesian', 'id'),
    'it' => array('it|italian', 'italian', 'it'),
    'ja' => array('ja|japanese', 'japanese', 'ja'),
    'ko' => array('ko|korean', 'korean', 'ko'),
    'ka' => array('ka|georgian', 'georgian', 'ka'),
    'lt' => array('lt|lithuanian', 'lithuanian', 'lt'),
    'lv' => array('lv|latvian', 'latvian', 'lv'),
    'nl' => array('nl([-_][[:alpha:]]{2})?|dutch', 'dutch', 'nl'),
    'no' => array('no|norwegian', 'norwegian', 'no'),
    'pl' => array('pl|polish', 'polish', 'pl'),
    'pt' => array('pt[-_]br|brazilian portuguese', 'brazilian_portuguese', 'pt-BR'),
    'pt' => array('pt([-_][[:alpha:]]{2})?|portuguese', 'portuguese', 'pt'),
    'ro' => array('ro|romanian', 'romanian', 'ro'),
    'ru' => array('ru|russian', 'russian', 'ru'),
    'sk' => array('sk|slovak', 'slovak', 'sk'),
    'sl' => array('sl|slovenian', 'slovenian', 'sl'),
    'sq' => array('sq|albanian', 'albanian', 'sq'),
    'sr' => array('sr|serbian', 'serbian', 'sr'),
    'sv' => array('sv|swedish', 'swedish', 'sv'),
    'th' => array('th|thai', 'thai', 'th'),
    'tr' => array('tr|turkish', 'turkish', 'tr'),
    'uk' => array('uk|ukrainian', 'ukrainian', 'uk'),
    'zh' => array('zh[-_]tw|chinese traditional', 'chinese_big5', 'zh-TW'),
    'zh' => array('zh|chinese simplified', 'chinese_gb', 'zh'),
    );

/**
 * Analyzes some PHP environment variables to find the most probable language
 * that should be used
 *
 * @param string $ string to analyze
 * @param integer $ type of the PHP environment variable which value is $str
 * @global array    the list of available translations
 * @global string   the retained translation keyword
 * @access private
 */
function lang_detect($str = '', $envType = '')
{
    global $available_languages;
    global $lang;

    reset($available_languages);
    while (list($key, $value) = each($available_languages)) {
        // $envType =  1 for the 'HTTP_ACCEPT_LANGUAGE' environment variable,
        // 2 for the 'HTTP_USER_AGENT' one
        if (($envType == 1 && eregi('^(' . $value[0] . ')(;q=[0-9]\\.[0-9])?$', $str)) || ($envType == 2 && eregi('(\(|\[|;[[:space:]])(' . $value[0] . ')(;|\]|\))', $str))) {
            $lang = $key;
            break;
        }
    }
}

/**
 * Get some global variables if 'register_globals' is set to 'off'
 * loic1 - 2001/25/11: use the new globals arrays defined with php 4.1+
 */
if (!empty($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
    $HTTP_ACCEPT_LANGUAGE = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
} else if (!empty($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
    $HTTP_ACCEPT_LANGUAGE = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
}

if (!empty($_SERVER['HTTP_USER_AGENT'])) {
    $HTTP_USER_AGENT = $_SERVER['HTTP_USER_AGENT'];
} else if (!empty($_SERVER['HTTP_USER_AGENT'])) {
    $HTTP_USER_AGENT = $_SERVER['HTTP_USER_AGENT'];
}

/**
 * Do the work!
 */

$lang = '';
// 1. try to findout user's language by checking its HTTP_ACCEPT_LANGUAGE
// variable
if (empty($lang) && !empty($HTTP_ACCEPT_LANGUAGE)) {
    $accepted = explode(',', $HTTP_ACCEPT_LANGUAGE);
    $acceptedCnt = count($accepted);
    reset($accepted);
    for ($i = 0; $i < $acceptedCnt && empty($lang); $i++) {
        lang_detect($accepted[$i], 1);
    }
}
// 2. try to findout user's language by checking its HTTP_USER_AGENT variable
if (empty($lang) && !empty($HTTP_USER_AGENT)) {
    lang_detect($HTTP_USER_AGENT, 2);
}
// 3. If we catch a valid language, configure it
if (!empty($lang)) {
    $USER['lang'] = $available_languages[$lang][1];
}
// $__PMA_SELECT_LANG_LIB__
?>
