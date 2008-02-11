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

// define some vars
$extensionMatrix_array = array(
  'unknown' => 'images/extensions/unknown.gif',
  'folder' => 'images/extensions/folder.gif',
  'php' => 'images/extensions/php.gif',
  'js' => 'images/extensions/js.gif',
  'css' => 'images/extensions/css.gif',
  'htm' => 'images/extensions/htm.gif',
  'html' => 'images/extensions/htm.gif',
  'sql' => 'images/extensions/sql.gif',
  'ttf' => 'images/extensions/ttf.gif',
);

$textFileExtensions_array = array(
  'php', 'txt', 'htm', 'html', 'js', 'css', 'sql'
);

$imageFileExtensions_array = array(
  'jpg', 'png', 'gif'
);

$displayColumns_array = array();
$displayColumns_array['fullpath'] = 1;
$displayColumns_array['folder'] = 1;
$displayColumns_array['file'] = 1;
$displayColumns_array['exist'] = 1;
$displayColumns_array['readable'] = 1;
$displayColumns_array['writable'] = 1;
$displayColumns_array['version'] = 1;
$displayColumns_array['revision'] = 1;
if (function_exists('md5')) {
  $displayColumns_array['unmodified'] = 1;
}

$optionDisplayOutput_array = array();

// Sanitize the GET vars
// possible values: screen, download, textarea, create, options
$actionGet = $superCage->get->getMatched('output','/^[a-z]+$/');
if (in_array ($actionGet[0], array('screen', 'download', 'textarea', 'create', 'options')) == TRUE) {
  $action = $actionGet[0];
} else {
  $action = 'options';
}
if ($action == 'textarea') {
  $displayOption_array['output'] = 'textarea';
  $optionDisplayOutput_array['screen'] = '';
  $optionDisplayOutput_array['textarea'] = 'checked="checked"';
} elseif ($action == 'download') {
  $displayOption_array['output'] = 'download';
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

if ($superCage->get->getInt('image') == '0') {
  $displayOption_array['display_images'] = 0;
} else {
  $displayOption_array['display_images'] = 1;
  $optionDisplayOutput_array['display_images'] = 'checked="checked"';
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




$textSeparator = '|';
$output = '';
$caption = '';
$underline = '';
$newLine = "\r\n";
$subversionRepository = 'http://coppermine.svn.sourceforge.net/viewvc/coppermine/trunk/';
$majorVersion = 'cpg'.str_replace('.' . ltrim(substr(COPPERMINE_VERSION,strrpos(COPPERMINE_VERSION,'.')),'.'), '', COPPERMINE_VERSION).'.x';
$remoteURL = 'http://coppermine-gallery.net/' . str_replace('.', '', $majorVersion) . '.files.xml';
$localFile = 'include/' . str_replace('.', '', $majorVersion) . '.files.xml';
$remoteConnectionFailed = '';
if ($displayOption_array['do_not_connect_to_online_repository'] == 0) { // connect to the online repository --- start
  $result = cpgGetRemoteFileByURL($remoteURL, 'GET','','200');
  if (strlen($result['body']) < 200) {
    $remoteConnectionFailed = 1;
    $error = $result['error'];
    print_r($error);
    print '<hr />';
  }
} // connect to the online repository --- end
if ($displayOption_array['do_not_connect_to_online_repository'] == 1 || $remoteConnectionFailed == 1) {
  $result = cpgGetRemoteFileByURL($localFile, 'GET','','200');
}

unset($result['headers']);
unset($result['error']);
$result = array_shift($result);


include_once('include/lib.xml.php');
$xml = new Xml;
$file_data_array = $xml->parse($result);
$file_data_array = array_shift($file_data_array);


// main code starts here

// display page header if applicable
if ($displayOption_array['output'] != 'download') {
  pageheader($lang_versioncheck_php['title']);
  print '<h1>'.$lang_versioncheck_php['title'].'</h1>';
}

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

// display formatted header data
if ($displayOption_array['output'] == 'textarea') {
  print <<< EOT
  <script type="text/javascript">
            document.write('<a href="javascript:HighlightAll(\'versioncheckdisplay.versioncheck_text\')" class="admin_menu">');
            document.write("{$lang_versioncheck_php['select_all']}");
            document.write('</a>');
            document.write('<br />');
  </script>
EOT;
  print '<form name="versioncheckdisplay"><textarea name="versioncheck_text" rows="'.($file_data_count + 5).'" class="textinput debug_text" style="width:98%;font-family:\'Courier New\',Courier,monospace;font-size:9px;">';
}


if ($displayOption_array['output'] == 'textarea' || $displayOption_array['output'] == 'download') { // display the output in a textarea field --- start
  $loopCounter = 1;
  if (strlen($file_data_count) > $maxLength_array['counter']) {
    $maxLength_array['counter'] = strlen($file_data_count);
  }
  // the caption for the table
  $caption .= cpg_fillArrayFieldWithSpaces($lang_versioncheck_php['counter'], $maxLength_array['counter']);
  $caption .= $textSeparator;
  $caption .= cpg_fillArrayFieldWithSpaces($lang_versioncheck_php['type'], $maxLength_array['folderfile']);
  $caption .= $textSeparator;
  $caption .= cpg_fillArrayFieldWithSpaces($lang_versioncheck_php['path'], $maxLength_array['fullpath']);
  $caption .= $textSeparator;
  $caption .= cpg_fillArrayFieldWithSpaces($lang_versioncheck_php['missing'], $maxLength_array['exist']);
  $caption .= $textSeparator;
  $caption .= cpg_fillArrayFieldWithSpaces($lang_versioncheck_php['permissions'], $maxLength_array['readwrite']);
  $caption .= $textSeparator;
  $caption .= cpg_fillArrayFieldWithSpaces($lang_versioncheck_php['version'], $maxLength_array['version']);
  $caption .= $textSeparator;
  $caption .= cpg_fillArrayFieldWithSpaces($lang_versioncheck_php['revision'], $maxLength_array['revision']);
  $caption .= $textSeparator;
  $caption .= cpg_fillArrayFieldWithSpaces($lang_versioncheck_php['modified'], $maxLength_array['modified']);
  $caption .= $newLine;
  for ($i = 1; $i <= strlen($caption); $i++) {
    $underline .= '-';
  }
  $underline .= $newLine;
  // loop through all the elements in $file_data_array (which equals looping thorugh all folders and files) once more and create the textual output
  foreach ($file_data_array as $file_data_values) {
    if (($displayOption_array['errors_only'] == 0) || ($displayOption_array['errors_only'] == 1 && $file_data_values['comment'] != '')) { // only display if corrsponding option is not disabled --- start
      $output .= cpg_fillArrayFieldWithSpaces(ltrim($loopCounter), $maxLength_array['counter'],'left');
      $output .= $textSeparator;
      $output .= cpg_fillArrayFieldWithSpaces($file_data_values['txt_folderfile'], $maxLength_array['folderfile']);
      $output .= $textSeparator;
      $output .= cpg_fillArrayFieldWithSpaces($file_data_values['fullpath'], $maxLength_array['fullpath']);
      $output .= $textSeparator;
      $output .= cpg_fillArrayFieldWithSpaces($file_data_values['txt_missing'], $maxLength_array['exist']);
      $output .= $textSeparator;
      $output .= cpg_fillArrayFieldWithSpaces($file_data_values['txt_readwrite'], $maxLength_array['readwrite']);
      $output .= $textSeparator;
      $output .= cpg_fillArrayFieldWithSpaces($file_data_values['txt_version'], $maxLength_array['version']);
      $output .= $textSeparator;
      $output .= cpg_fillArrayFieldWithSpaces($file_data_values['txt_revision'], $maxLength_array['revision']);
      $output .= $textSeparator;
      $output .= cpg_fillArrayFieldWithSpaces($file_data_values['txt_modified'], $maxLength_array['modified']);
      $output .= $textSeparator;
      $output .= $newLine;
      $loopCounter++;
    } // only display if corrsponding option is not disabled --- end
  }

  ob_start();
  print $caption;
  print $underline;
  print $output;
  $string = ob_get_contents();
  ob_end_clean();
  // prepare the http headers for the download
  if ($displayOption_array['output'] == 'download') {
    header('Content-Type: application/force-download');
    header('Content-Length: '.strlen($string));
    header('Content-Disposition: filename=versioncheck.php?output=download');
    header('Content-Transfer-Encoding: binary');
    header('Expires: 0');
    header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
    header('Pragma: public');
    header('Vary: User-Agent');
  }
  print $string;
} // display the output in a textarea field --- end

if ($displayOption_array['output'] == 'screen') { // display the output in HTML --- start
  $loopCounter = 1;
  if (strlen($file_data_count) > $maxLength_array['counter']) {
    $maxLength_array['counter'] = strlen($file_data_count);
  }
  // the caption for the table
  starttable('100%', $lang_versioncheck_php['title'], 9);
  print <<< EOT
  <tr>
    <th class="tableh2" style="font-size:8px">{$lang_versioncheck_php['path']}</th>
    <th class="tableh2" style="font-size:8px">{$lang_versioncheck_php['missing']}</th>
    <th class="tableh2" style="font-size:8px">{$lang_versioncheck_php['permissions']}</th>
    <th class="tableh2" style="font-size:8px">{$lang_versioncheck_php['version']}</th>
    <th class="tableh2" style="font-size:8px">{$lang_versioncheck_php['revision']}</th>
    <th class="tableh2" style="font-size:8px">{$lang_versioncheck_php['modified']}</th>
    <th class="tableh2" style="font-size:8px">{$lang_versioncheck_php['comment']}</th>
    <th class="tableh2" style="font-size:8px">{$lang_versioncheck_php['repository_link']}</th>
    <th class="tableh2" style="font-size:8px">{$lang_versioncheck_php['help']}</th>
  </tr>
EOT;
  foreach ($file_data_array as $file_data_values) {
    if (($loopCounter/2) == floor($loopCounter/2)) {
      $cellstyle = 'tableb tableb_alternate';
    } else {
      $cellstyle = 'tableb';
    }
    if ($file_data_values['txt_missing'] != '') {
      $file_data_values['link_start'] = '<a href="'.$file_data_values['fullpath'].'">';
      $file_data_values['link_end'] = '</a>';
    }
    if ($file_data_values['icon'] == 1) {
      $file_data_values['icon'] = '<a href="javascript:;" onclick="MM_openBrWindow(\''.$file_data_values['fullpath'].'\',\''.uniqid(rand()).'\',\'scrollbars=yes,toolbar=no,status=no,resizable=yes,width=200,height=100\')"><img src="'.$file_data_values['fullpath'].'" border="0" width="16" height="16" alt="" style="margin-left:'. (16 * $file_data_array[$file_data_key]['folderDepth']) . 'px" /></a>';
    }
    $important['path'] = '';
    $important['missing'] = '';
    $important['readwrite'] = '';
    $important['version'] = '';
    $important['revision'] = '';
    $important['modified'] = '';
    $important['comment'] = '';
    $important['svn'] = '';
    $important['help'] = '';
    if ($displayOption_array['errors_only'] == 0 && $file_data_values['comment'] != '') {
      if ($file_data_values['txt_missing'] == $lang_versioncheck_php['mandatory']) {
        $important['missing'] = ' important';
      }
      if ($file_data_values['txt_missing'] == $lang_versioncheck_php['mandatory']) {
        $important['missing'] = ' important';
      }
    }
    if (($displayOption_array['errors_only'] == 0) || ($displayOption_array['errors_only'] == 1 && $file_data_values['comment'] != '')) { // only display if corrsponding option is not disabled --- start
      print <<< EOT
    <tr>
      <td class="{$cellstyle}{$important['path']}" align="left" style="font-size:9px">{$file_data_values['icon']}{$file_data_values['link_start']}{$file_data_values['fullpath']}{$file_data_values['link_start']}</td>
      <td class="{$cellstyle}{$important['missing']}" align="left" style="font-size:9px">{$file_data_values['txt_missing']}</td>
      <td class="{$cellstyle}{$important['readwrite']}" align="left" style="font-size:9px">{$file_data_values['txt_readwrite']}</td>
      <td class="{$cellstyle}{$important['version']}" align="left" style="font-size:9px">{$file_data_values['txt_version']}</td>
      <td class="{$cellstyle}{$important['revision']}" align="left" style="font-size:9px">{$file_data_values['txt_revision']}</td>
      <td class="{$cellstyle}{$important['modified']}" align="left" style="font-size:9px">{$file_data_values['txt_modified']}</td>
      <td class="{$cellstyle}{$important['comment']}" align="left" style="font-size:9px">{$file_data_values['comment']}</td>
      <td class="{$cellstyle}{$important['svn']}" align="left" style="font-size:9px"><a href="{$subversionRepository}{$majorVersion}/{$file_data_values['fullpath']}"><img src="images/subversion.gif" width="16" height="16" border="0" alt="" title="{$lang_versioncheck_php['browse_corresponding_page_subversion']}" /></a></td>
      <td class="{$cellstyle}{$important['help']}" align="left" style="font-size:9px"></td>
    </tr>
EOT;
      ob_end_flush();
      $loopCounter++;
    } // only display if corrsponding option is not disabled --- end
  }
  endtable();
} // display the output in HTML --- end


// display formatted footer data
if ($displayOption_array['output'] == 'textarea' || $displayOption_array['output'] == 'create') {
  print <<< EOT
  </textarea>
  </form>
EOT;
}


// display page footer if applicable
if ($displayOption_array['output'] != 'download') {
  pagefooter();
}

?>