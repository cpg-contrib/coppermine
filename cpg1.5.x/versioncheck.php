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


// define some functions

function cpg_get_path_and_file($string) {
    // check if $string contains delimiter that triggers replacement
    $return['path'] = str_replace(str_replace('/', '', strrchr($string, '/')), '', $string);
    $return['file'] = str_replace('/', '', strrchr($string, '/'));
    if (strstr($return['path'], '.') != FALSE && $return['file'] == '') {
        $return['file'] = $return['path'];
        $return['path'] = '';
    }
    if (strstr($return['file'], '.') == FALSE) {
        $return['path'] = $return['path'].$return['file'];
        $return['file'] = '';
    }
    return $return;
}

function cpg_is_writable($folder){
  $return = 0;
  $file_content = "this is just a test file that hasn't been deleted properly.\nIt's safe to delete it now";
  @unlink($folder.'/cpgvc_tf.txt');
  if ($fd = @fopen($folder.'/cpgvc_tf.txt', 'w')) {
      @fwrite($fd, $file_content);
      @fclose($fd);
      @unlink($folder.'/cpgvc_tf.txt');
      $return = 'write';
  } else {
      $return = 'read';
  }
  return $return;
}

function cpg_fillArrayFieldWithSpaces($text, $maxchars, $fillUpOn = 'right') {
  $spaceCharsToAdd = $maxchars - strlen($text);
  if ($spaceCharsToAdd > 0) {
    for ($i = 1; $i <= $spaceCharsToAdd; $i++) {
      if ($fillUpOn != 'left') {
        $text .= ' ';
      } else {
        $text = ' '.$text;
      }
    }
  }
  return $text;
}

function cpg_versioncheckDisplayOptions() {
  global $CPG_PHP_SELF, $lang_versioncheck_php, $optionDisplayOutput_array;
  print '<form name="options" action="'.$CPG_PHP_SELF.'" method="get">';
  starttable(-1, $lang_versioncheck_php['options'],2);
  print <<< EOT
  <tr>
    <td class="tableb" valign="top">
      {$lang_versioncheck_php['display_output']}
    </td>
    <td class="tableb" valign="top">
      <input type="radio" name="output" id="output_screen" value="screen" class="radio" {$optionDisplayOutput_array['screen']} /><label for="output_screen" class="clickable_option">{$lang_versioncheck_php['on_screen']}</label>&nbsp;&nbsp;
      <input type="radio" name="output" id="output_textarea" value="textarea" class="radio" {$optionDisplayOutput_array['textarea']} /><label for="output_textarea" class="clickable_option">{$lang_versioncheck_php['text_only']}</label>&nbsp;&nbsp;
      <a href="{$CPG_PHP_SELF}?output=download" class="admin_menu">{$lang_versioncheck_php['download']}</a>
    </td>
  </tr>
  <tr>
    <td class="tableb tableb_alternate" valign="top">
      <label for="errors_only">
        {$lang_versioncheck_php['errors_only']}
      </label>
    </td>
    <td class="tableb tableb_alternate" valign="top">
      <input type="checkbox" name="errors_only" id="errors_only" value="1" class="checkbox" {$optionDisplayOutput_array['errors_only']} />
    </td>
  </tr>
  <tr>
    <td class="tableb" valign="top">
      <label for="image">
        {$lang_versioncheck_php['display_images']}
      </label>
    </td>
    <td class="tableb" valign="top">
      <input type="checkbox" name="image" id="image" value="1" class="checkbox" {$optionDisplayOutput_array['display_images']} />
    </td>
  </tr>
  <tr>
    <td class="tableb tableb_alternate" valign="top">
      <label for="do_not_connect_to_online_repository">
        {$lang_versioncheck_php['do_not_connect_to_online_repository']}
      </label>
    </td>
    <td class="tableb tableb_alternate" valign="top">
      <input type="checkbox" name="do_not_connect_to_online_repository" id="do_not_connect_to_online_repository" value="1" class="checkbox" {$optionDisplayOutput_array['do_not_connect_to_online_repository']} />({$lang_versioncheck_php['online_repository_explain']})
    </td>
  </tr>
  <tr>
    <td align="center" class="tablef" colspan="2">
      <input type="submit" name="submit" value="{$lang_versioncheck_php['submit']}" class="button" />
    </td>
  </tr>
EOT;
  endtable();
  print '</form>';
  print '<br />';
}

function cpg_versioncheckPopulateArray($file_data_array) {
    global $displayOption_array, $extensionMatrix_array, $textFileExtensions_array, $imageFileExtensions_array, $CONFIG, $maxLength_array, $lang_versioncheck_php;
    $maxLength_array = array();
    $maxLength_array['counter'] = strlen($lang_versioncheck_php['counter']);
    $maxLength_array['folderfile'] = strlen($lang_versioncheck_php['type']);
    $maxLength_array['exist'] = strlen($lang_versioncheck_php['missing']);
    $maxLength_array['readwrite'] = strlen($lang_versioncheck_php['permissions']);
    $maxLength_array['version'] = strlen($lang_versioncheck_php['version']);
    $maxLength_array['revision'] = strlen($lang_versioncheck_php['revision']);
    $maxLength_array['modified'] = strlen($lang_versioncheck_php['modified']);
    $loopCounter = 0;
    foreach ($file_data_array as $file_data_key => $file_data_values) {
    //print_r($file_data_array[$file_data_key]);
    //print '<hr />';
    $file_data_array[$file_data_key]['comment'] = '';
    // Replace the placeholders with actual content --- start
    $file_data_array[$file_data_key]['fullpath'] = str_replace('**fullpath**', rtrim($CONFIG['fullpath'], '/'), $file_data_array[$file_data_key]['fullpath']);
    $file_data_array[$file_data_key]['fullpath'] = str_replace('**userpics**', rtrim($CONFIG['userpics'], '/'), $file_data_array[$file_data_key]['fullpath']);
    // Replace the placeholders with actual content --- end
    if (strlen($file_data_array[$file_data_key]['fullpath']) > $maxLength_array['fullpath']) {
      $maxLength_array['fullpath'] = strlen($file_data_array[$file_data_key]['fullpath']);
    }
    // populate the path and file from the fullpath
    $tempArray = cpg_get_path_and_file($file_data_array[$file_data_key]['fullpath']);
    //print_r($tempArray);
    //print '<hr />';
    $file_data_array[$file_data_key]['folder'] = $tempArray['path'];
    //determine the number of parent folders
    $file_data_array[$file_data_key]['folderDepth'] = count(explode('/', rtrim($tempArray['path'], '/')));
    if (strlen($file_data_array[$file_data_key]['folder']) > $maxLength_array['folder']) {
      $maxLength_array['folder'] = strlen($file_data_array[$file_data_key]['folder']);
    }
    $file_data_array[$file_data_key]['file'] = $tempArray['file'];
    $file_data_array[$file_data_key]['exists'] = file_exists($file_data_array[$file_data_key]['fullpath']);
    if ($file_data_array[$file_data_key]['exists'] != 1) {
        if ($file_data_array[$file_data_key]['status'] == 'mandatory') {
          $file_data_array[$file_data_key]['txt_missing'] = $lang_versioncheck_php['mandatory'];
        } else {
          $file_data_array[$file_data_key]['txt_missing'] = $lang_versioncheck_php['optional'];
        }
        if (strlen($file_data_array[$file_data_key]['txt_missing']) > $maxLength_array['exist']) {
          $maxLength_array['exist'] = strlen($file_data_array[$file_data_key]['txt_missing']);
        }
    }
    if ($file_data_array[$file_data_key]['file'] == '') { // we have a folder here
      $file_data_array[$file_data_key]['readwrite'] = cpg_is_writable($file_data_array[$file_data_key]['path']);
      $file_data_array[$file_data_key]['txt_folderfile'] = $lang_versioncheck_php['folder'];
      $file_data_array[$file_data_key]['icon'] = '<img src="'.$extensionMatrix_array['folder'].'" border="0" width="16" height="16" alt="" style="margin-left:'. (16 * ($file_data_array[$file_data_key]['folderDepth'] - 1)) . 'px" />';
      // no version or revision number for folder names
      $file_data_array[$file_data_key]['txt_version'] = 'n/a('.$lang_versioncheck_php['ok'].')';
      $file_data_array[$file_data_key]['txt_revision'] = 'n/a('.$lang_versioncheck_php['ok'].')';
    } else { // we have a file here --- start
      // determine the extension
      $file_data_array[$file_data_key]['extension'] = ltrim(substr($file_data_array[$file_data_key]['file'],strrpos($file_data_array[$file_data_key]['file'],'.')),'.');
      if (array_key_exists($file_data_array[$file_data_key]['extension'],$extensionMatrix_array) == TRUE) {
        $file_data_array[$file_data_key]['icon'] = '<img src="'.$extensionMatrix_array[$file_data_array[$file_data_key]['extension']].'" border="0" width="16" height="16" alt="'.$file_data_array[$file_data_key]['extension'].'" style="margin-left:'. (16 * $file_data_array[$file_data_key]['folderDepth']) . 'px" />';
      } else {
        if (in_array($file_data_array[$file_data_key]['extension'],$imageFileExtensions_array)) { // we have an image
          // no version or revision number for folder names
          $file_data_array[$file_data_key]['txt_version'] = 'n/a('.$lang_versioncheck_php['ok'].')';
          $file_data_array[$file_data_key]['txt_revision'] = 'n/a('.$lang_versioncheck_php['ok'].')';
          if ($displayOption_array['display_images'] == 1) {
            $file_data_array[$file_data_key]['icon'] = '1';
          } else {
            $file_data_array[$file_data_key]['icon'] = '<img src="images/extensions/'.$file_data_array[$file_data_key]['extension'].'.gif" border="0" width="16" height="16" alt="'.$file_data_array[$file_data_key]['extension'].'" style="margin-left:'. (16 * $file_data_array[$file_data_key]['folderDepth']) . 'px" />';
          }
        } else {
          $file_data_array[$file_data_key]['icon'] = '<img src="'.$extensionMatrix_array['unknown'].'" border="0" width="16" height="16" alt="'.$file_data_array[$file_data_key]['extension'].'" style="margin-left:'. (16 * $file_data_array[$file_data_key]['folderDepth']) . 'px" />';
        }
      }
      if (is_readable($file_data_values['fullpath']) == TRUE) { // check if the file is readable/writable --- start
        $file_data_array[$file_data_key]['readwrite'] = 'read';
        if (is_writable($file_data_values['fullpath']) == TRUE) {
          $file_data_array[$file_data_key]['readwrite'] = 'write';
        }
      } // check if the file is readable/writable --- end
      if ($file_data_array[$file_data_key]['exists'] && $file_data_array[$file_data_key]['readwrite'] != '') {
          if (in_array($file_data_array[$file_data_key]['extension'],$textFileExtensions_array) == TRUE) { // the file is not binary --- start
            $handle = @fopen($file_data_values['fullpath'], 'r');
            $blob = '';
            $blob = @fread($handle, filesize($file_data_values['fullpath']));
            @fclose($handle);
            $revision_string = '$'.'Revision'.':';
            $cpg_version_determination = 'Coppermine' . ' ' . 'version:';
            $blob = str_replace('<?php','',$blob);
            // Determine the cpg version
            $file_data_array[$file_data_key]['version'] = substr($blob,strpos($blob, $cpg_version_determination)); // chop off the first bit up to the string $cpg_version_determination
            $double_slash_position = strpos($file_data_array[$file_data_key]['version'], '//');
            if ($double_slash_position) {
               $file_data_array[$file_data_key]['version'] = substr($file_data_array[$file_data_key]['version'],0,$double_slash_position);
            }
            $file_data_array[$file_data_key]['version'] = trim(str_replace($cpg_version_determination, '', $file_data_array[$file_data_key]['version']));
            $file_data_array[$file_data_key]['version'] = trim(str_replace('#', '', $file_data_array[$file_data_key]['version']));
            $file_data_array[$file_data_key]['version'] = trim(substr($file_data_array[$file_data_key]['version'], 0, strpos($file_data_array[$file_data_key]['version'], '$')));
            if (strlen($file_data_array[$file_data_key]['version']) > 5) {
              $file_data_array[$file_data_key]['version'] = 'n/a';
            }
            if ($file_data_array[$file_data_key]['release'] != '' && $file_data_array[$file_data_key]['exists'] == 1) {
              $file_data_array[$file_data_key]['txt_version'] = $file_data_array[$file_data_key]['version'] . '(';
              $versionCompare = version_compare($file_data_array[$file_data_key]['version'],$file_data_array[$file_data_key]['release']);
              if ($versionCompare == 0) {
                $file_data_array[$file_data_key]['txt_version'] .= $lang_versioncheck_php['ok'];
              } elseif($versionCompare == -1) {
                $file_data_array[$file_data_key]['txt_version'] .= $lang_versioncheck_php['outdated'];
                $file_data_array[$file_data_key]['comment'] .= $lang_versioncheck_php['review_version'].'. ';
              } else {
                $file_data_array[$file_data_key]['txt_version'] .= $lang_versioncheck_php['newer'];
                $file_data_array[$file_data_key]['comment'] .= $lang_versioncheck_php['review_version'].'. ';
              }
              $file_data_array[$file_data_key]['txt_version'] .= ')';
            } else {
              $file_data_array[$file_data_key]['txt_version'] = '';
            }
            if (strlen($file_data_array[$file_data_key]['txt_version']) > $maxLength_array['version']) {
              $maxLength_array['version'] = strlen($file_data_array[$file_data_key]['txt_version']);
            }
            // Determine file revision (only for files containing text)
            $file_data_array[$file_data_key]['revision'] = str_replace($revision_string, '', substr($blob,strpos($blob, $revision_string),25));
            $file_data_array[$file_data_key]['revision'] = trim(substr($file_data_array[$file_data_key]['revision'], 0, strpos($file_data_array[$file_data_key]['revision'], '$')));
            if (strlen($file_data_array[$file_data_key]['revision']) > 5) {
              $file_data_array[$file_data_key]['revision']='n/a';
            }
            if ($file_data_array[$file_data_key]['revision'] != '' && $file_data_array[$file_data_key]['exists'] == 1) {
              $file_data_array[$file_data_key]['txt_revision'] = $file_data_array[$file_data_key]['revision'];
              if ($file_data_array[$file_data_key]['revision'] == $file_data_array[$file_data_key]['revision']) {
                $file_data_array[$file_data_key]['txt_revision'] .= '('.$lang_versioncheck_php['ok'];
              } elseif($file_data_array[$file_data_key]['revision'] < $file_data_array[$file_data_key]['revision']) {
                $file_data_array[$file_data_key]['txt_revision'] .= '/'.$file_data_array[$file_data_key]['revision'].'('. $lang_versioncheck_php['outdated'];
                if ($versionCompare == 0) {
                  $file_data_array[$file_data_key]['comment'] .= $lang_versioncheck_php['review_version'].'. ';
                }
              } else {
                $file_data_array[$file_data_key]['txt_revision'] .= '/'.$file_data_array[$file_data_key]['revision'].'('. $lang_versioncheck_php['newer'];
                if ($versionCompare == 0) {
                  $file_data_array[$file_data_key]['comment'] .= $lang_versioncheck_php['review_version'].'. ';
                }
              }
              $file_data_array[$file_data_key]['txt_revision'] .= ')';
            } else {
              $file_data_array[$file_data_key]['txt_revision'] = '';
            }
            if (strlen($file_data_array[$file_data_key]['txt_revision']) > $maxLength_array['revision']) {
              $maxLength_array['revision'] = strlen($file_data_array[$file_data_key]['txt_revision']);
            }
          } // the file is not binary --- end
          if (function_exists('md5') && $file_data_array[$file_data_key]['hash'] != '') { // check the md5 hashes --- start
            $file_data_array[$file_data_key]['md5hash'] = md5($file_data_values['fullpath']);
            if ($file_data_array[$file_data_key]['md5hash'] == $file_data_array[$file_data_key]['hash']) {
              $file_data_array[$file_data_key]['unmodified'] = 1;
            } else {
              $file_data_array[$file_data_key]['unmodified'] = 0;
              $file_data_array[$file_data_key]['txt_modified'] = $lang_versioncheck_php['modified'];
              $file_data_array[$file_data_key]['comment'] .= $lang_versioncheck_php['review_modified'].'. ';
            }
            if (strlen($file_data_array[$file_data_key]['txt_modified']) > $maxLength_array['modified']) {
              $maxLength_array['modified'] = strlen($file_data_array[$file_data_key]['txt_modified']);
            }
          } // check the md5 hashes --- end
      }
      $file_data_array[$file_data_key]['txt_folderfile'] = $lang_versioncheck_php['file'];
    } // we have a file here --- end
    if (strlen($file_data_array[$file_data_key]['txt_folderfile']) > $maxLength_array['folderfile']) {
      $maxLength_array['folderfile'] = strlen($file_data_array[$file_data_key]['txt_folderfile']);
    }
    if ($file_data_array[$file_data_key]['readwrite'] == 'read') {
      $file_data_array[$file_data_key]['txt_readwrite'] = 'r ';
      if ($file_data_array[$file_data_key]['permission'] == 'read') {
        $file_data_array[$file_data_key]['txt_readwrite'] .= '('.$lang_versioncheck_php['ok'].')';
      } elseif ($file_data_array[$file_data_key]['permission'] == 'write') {
        $file_data_array[$file_data_key]['txt_readwrite'] .= '('.$lang_versioncheck_php['needs_change'].')';
        $file_data_array[$file_data_key]['comment'] .= $lang_versioncheck_php['review_permissions'].'. ';
      }
    } elseif ($file_data_array[$file_data_key]['readwrite'] == 'write') {
      $file_data_array[$file_data_key]['txt_readwrite'] = 'rw'.'('.$lang_versioncheck_php['ok'].')';;
    } else {
      $file_data_array[$file_data_key]['txt_readwrite'] = '--';
    }
    if (strlen($file_data_array[$file_data_key]['txt_readwrite']) > $maxLength_array['readwrite']) {
      $maxLength_array['readwrite'] = strlen($file_data_array[$file_data_key]['txt_readwrite']);
    }
    if ($file_data_array[$file_data_key]['exists'] != 1) {
      $file_data_array[$file_data_key]['comment'] = sprintf($lang_versioncheck_php['review_missing'],ucfirst($file_data_array[$file_data_key]['txt_folderfile'])).'. ';
    } // end the foreach loop
    $loopCounter++;
    }
    return $file_data_array;
} // end function definition "cpg_versioncheckPopulateArray()"

function cpg_versioncheckCreateXml($file_data_array) {
  global $newLine, $textFileExtensions_array, $lang_versioncheck_php;
  $loopCounter = 0;
  print <<< EOT
  <script type="text/javascript">
            document.write('<a href="javascript:HighlightAll(\'versioncheckdisplay.versioncheck_text\')" class="admin_menu">');
            document.write("{$lang_versioncheck_php['select_all']}");
            document.write('</a>');
            document.write('<br />');
  </script>
EOT;
  print '<form name="versioncheckdisplay"><textarea name="versioncheck_text" rows="20" class="textinput debug_text" style="width:98%;font-family:\'Courier New\',Courier,monospace;font-size:9px;height:auto;overflow:auto;">';
  print '<file_data>'.$newLine;
  $loopCounter++;
  foreach ($file_data_array as $file_data_key => $file_data_values) {
    print '  <element>'.$newLine;
    $loopCounter++;
    // populate the path and file from the fullpath
    $tempArray = cpg_get_path_and_file($file_data_values['fullpath']);
    $file_data_array[$file_data_key]['folder'] = $tempArray['path'];
    $file_data_array[$file_data_key]['file'] = $tempArray['file'];
    $file_data_array[$file_data_key]['extension'] = ltrim(substr($file_data_array[$file_data_key]['file'],strrpos($file_data_array[$file_data_key]['file'],'.')),'.');
    print "    <fullpath>".$file_data_values['fullpath']."</fullpath>".$newLine;
    $loopCounter++;
    if (in_array($file_data_array[$file_data_key]['extension'],$textFileExtensions_array) == TRUE) { // the file is not binary --- start
      $handle = @fopen($file_data_values['fullpath'], 'r');
      $blob = '';
      $blob = @fread($handle, filesize($file_data_values['fullpath']));
      @fclose($handle);
      $revision_string = '$'.'Revision'.':';
      $cpg_version_determination = 'Coppermine' . ' ' . 'version:';
      $blob = str_replace('<?php','',$blob);
      // Determine the cpg version
      $file_data_array[$file_data_key]['version'] = substr($blob,strpos($blob, $cpg_version_determination)); // chop off the first bit up to the string $cpg_version_determination
      $double_slash_position = strpos($file_data_array[$file_data_key]['version'], '//');
      if ($double_slash_position) {
         $file_data_array[$file_data_key]['version'] = substr($file_data_array[$file_data_key]['version'],0,$double_slash_position);
      }
      $file_data_array[$file_data_key]['version'] = trim(str_replace($cpg_version_determination, '', $file_data_array[$file_data_key]['version']));
      $file_data_array[$file_data_key]['version'] = trim(str_replace('#', '', $file_data_array[$file_data_key]['version']));
      $file_data_array[$file_data_key]['version'] = trim(substr($file_data_array[$file_data_key]['version'], 0, strpos($file_data_array[$file_data_key]['version'], '$')));
      if (strlen($file_data_array[$file_data_key]['version']) > 5) {
        $file_data_array[$file_data_key]['version']='n/a';
      }
      // Determine file revision
      $file_data_array[$file_data_key]['revision'] = str_replace($revision_string, '', substr($blob,strpos($blob, $revision_string),25));
      $file_data_array[$file_data_key]['revision'] = trim(substr($file_data_array[$file_data_key]['revision'], 0, strpos($file_data_array[$file_data_key]['revision'], '$')));
      if (strlen($file_data_array[$file_data_key]['revision']) > 5) {
        $file_data_array[$file_data_key]['revision'] = 'n/a';
      }
    } else { // the file is not binary --- end
        $file_data_array[$file_data_key]['version'] = '';
        $file_data_array[$file_data_key]['revision'] = '';
    }
    if ($file_data_array[$file_data_key]['version'] != '') {
        print "    <release>".$file_data_array[$file_data_key]['version']."</release>".$newLine;
        $loopCounter++;
    }
    if ($file_data_array[$file_data_key]['revision'] != '') {
        print "    <revision>".$file_data_array[$file_data_key]['revision']."</revision>".$newLine;
        $loopCounter++;
    }
    if ($file_data_array[$file_data_key]['status'] != '') {
      $status = $file_data_array[$file_data_key]['status'];
    } else {
      $status = 'mandatory';
    }
    print "    <status>".$status."</status>".$newLine;
    $loopCounter++;
    if ($file_data_array[$file_data_key]['permission'] != '') {
      $permission = $file_data_array[$file_data_key]['permission'];
    } else {
      $permission = 'read';
    }
    print "    <permission>".$permission."</permission>".$newLine;
    $loopCounter++;
    if ($file_data_array[$file_data_key]['file'] != '') {
      $hash = md5($file_data_values['fullpath']);
    } else {
      $hash = '';
    }
    if ($hash != '') {
        print "    <hash>".$hash."</hash>".$newLine;
        $loopCounter++;
    }
    print "  </element>".$newLine;
    $loopCounter++;
  }
  print '</file_data>'.$newLine;
  $loopCounter++;
  return $loopCounter;
} // end function definition "cpg_versioncheckCreateXml()"

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