<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2008 Dev Team
  v1.1 originally written by Gregory DEMAR

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 3
  as published by the Free Software Foundation.

  ********************************************
  Coppermine version: 1.5.0
  $HeadURL$
  $Revision$
  $LastChangedBy$
  $Date$
**********************************************/

define('IN_COPPERMINE', true);
define('VERSIONCHECK_PHP', true);

require_once('include/init.inc.php');
require_once('include/versioncheck.inc.php');

if (!GALLERY_ADMIN_MODE) {
  cpg_die($lang_common['error'], $lang_errors['access_denied'], __FILE__, __LINE__);
}

// Sanitize the GET vars and populate the optionsArray --- start
// possible values: screen, textarea, create, options
$optionDisplayOutput_array = array();
$actionGet = $superCage->get->getMatched('output','/^[a-z]+$/');
if (in_array ($actionGet[0], array('screen', 'textarea', 'create', 'options')) == TRUE) {
  $action = $actionGet[0];
} else {
  $action = 'options';
}
if ($action == 'textarea') {
  $displayOption_array['output'] = 'textarea';
  $optionDisplayOutput_array['screen'] = '';
  $optionDisplayOutput_array['textarea'] = 'checked="checked"';
} elseif ($action == 'create') {
  $displayOption_array['output'] = 'create';
} elseif ($action == 'screen') {
  $displayOption_array['output'] = 'screen';
  $optionDisplayOutput_array['screen'] = 'checked="checked"';
  $optionDisplayOutput_array['textarea'] = '';
} else {
  $displayOption_array['output'] = 'options';
  $optionDisplayOutput_array['screen'] = 'checked="checked"';
  $optionDisplayOutput_array['textarea'] = '';
}

if ($superCage->get->getInt('errors_only') == '1') {
  $displayOption_array['errors_only'] = 1;
  $optionDisplayOutput_array['errors_only'] = 'checked="checked"';
} else {
  $displayOption_array['errors_only'] = 0;
}

if ($superCage->get->getInt('do_not_connect_to_online_repository') == '1') {
  $displayOption_array['do_not_connect_to_online_repository'] = 1;
  $optionDisplayOutput_array['do_not_connect_to_online_repository'] = 'checked="checked"';
} else {
  $displayOption_array['do_not_connect_to_online_repository'] = 0;
}
// Sanitize the GET vars and populate the optionsArray --- end
  

// Connect to the repository
$file_data_array = cpgVersioncheckConnectRepository();


// main code starts here

pageheader($lang_versioncheck_php['title']);
print '<h1>'.$lang_versioncheck_php['title'].'</h1>';


// Print options if applicable
if ($displayOption_array['output'] == 'options' || $displayOption_array['output'] == 'screen' || $displayOption_array['output'] == 'textarea') {
    cpg_versioncheckDisplayOptions();
}

if ($displayOption_array['output'] != 'create') {
    $file_data_array = cpg_versioncheckPopulateArray($file_data_array);
    $file_data_count = count($file_data_array);
} else { // create data --- start
    $file_data_count = cpg_versioncheckCreateXml($file_data_array);
}





if ($displayOption_array['output'] == 'textarea') { // display the output in a textarea field --- start
  print cpg_versioncheckCreateTextOnlyOutput($file_data_array);
} // display the output in a textarea field --- end

if ($displayOption_array['output'] == 'screen') { // display the output in HTML --- start
    $outputResult = cpg_versioncheckCreateHTMLOutput($file_data_array);
    printf($lang_versioncheck_php['files_folder_processed'], $outputResult['display'], $outputResult['total'], $outputResult['error']);
    
} // display the output in HTML --- end



// display page footer if applicable
  pagefooter();

// end
?>