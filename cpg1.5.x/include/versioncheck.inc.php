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
  $Revision: 4224 $
  $LastChangedBy: gaugau $
  $Date: 2008-01-26 12:42:00 +0100 (Sa, 26 Jan 2008) $
**********************************************/
if (!defined('IN_COPPERMINE')) { die('Not in Coppermine...');}

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

?>