<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2007 Coppermine Dev Team
  v1.1 originally written by Gregory DEMAR

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 3
  as published by the Free Software Foundation.

  ********************************************
  Coppermine version: 1.5.0
  $Source: /cvsroot/coppermine/devel/admin.php,v $
  $Revision$
  $LastChangedBy$
  $Date$
**********************************************/

define('IN_COPPERMINE', true);
define('ADMIN_PHP', true);
define('CONFIG_PHP', true); // added for backwards compatibility (language fallback)

require_once('include/init.inc.php');
require_once('include/sql_parse.php');


$admin_data_array = $CONFIG;


$lineBreak = "\n\r";


if (!GALLERY_ADMIN_MODE) cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);

if (!function_exists('form_get_foldercontent')) {
  function form_get_foldercontent ($foldername, $fileOrFolder = 'folder', $validextension = '', $exception_array = '') {
    global $CONFIG;
    $dir = opendir($foldername);
    while ($file = readdir($dir)) {
        if ($fileOrFolder == 'file') {
          $extension = ltrim(substr($file,strrpos($file,'.')),'.');
          $filenameWithoutExtension = str_replace('.' . $extension, '', $file);
          if (is_file($foldername . $file) && $extension == $validextension && in_array($filenameWithoutExtension, $exception_array) != TRUE) {
              $return_array[] = $filenameWithoutExtension;
          }
        } elseif ($fileOrFolder == 'folder') {
            if ($file != '.' && $file != '..' && in_array($file, $exception_array) != TRUE && is_dir($foldername.$file)) {
              $return_array[] = $file;
            }
        }
    }
    closedir($dir);
    natcasesort($return_array);
    return $return_array;
  }
}

if (!function_exists('array_is_associative')) { // make sure that this will not break in future PHP versions
  function array_is_associative($array) {
      if ( is_array($array) && ! empty($array) )
      {
          for ( $iterator = count($array) - 1; $iterator; $iterator-- )
          {
              if ( ! array_key_exists($iterator, $array) ) { return true; }
          }
          return ! array_key_exists(0, $array);
      }
      return false;
  }
}

require_once('include/admin.inc.php'); // populate the array for the admin data (could later be done using an XML file)

// loop through the config sections and populate the array that determines what sections to expand/collapse
$collapseSections_array = array(); // By default, all sections should be hidden. Let's populate the array first with all existing sections and then later remove the ones that are suppossed to be expanded by default
foreach ($config_data as $key => $value) {
  $collapseSections_array[] = $key;
}

$postCount = count($_POST);

if ($postCount > 0) {
  $evaluation_array = $_POST;
} else {
  $evaluation_array = $CONFIG;
}

$userMessage = ''; //The message that the will be displayed if something went wrong or to tell the user that we had success
$problemFields_array = array(); // we'll add field-wrapper-IDs to this array to visualize that something went wrong. Onload we'll assign the class "important" to the boxes that correspond to the array data

if (isset($_POST['restore_config'])) { // user has chosen to factory-reset the config --- start
  // Get an array of settings that mustn't be reset
  $doNotReset_array = array();
  foreach ($config_data as $config_section_key => $config_section_value) { // loop through the array of config sections --- start
    foreach ($config_section_value as $adminDataKey => $adminDataValue) { // loop through the array of individual config entries per section --- start
      if ($adminDataValue['preserve_when_resetting'] == '1') {
        $doNotReset_array[] = $adminDataKey;
      }
    } // loop through the array of individual config entries per section --- end
  } // loop through the array of config sections --- end
  $default_config = 'sql/basic.sql';
  $sql_query = fread(fopen($default_config, 'r'), filesize($default_config));
  $sql_query = preg_replace('/CPG_/', $CONFIG['TABLE_PREFIX'], $sql_query);
  cpg_db_query("TRUNCATE TABLE {$CONFIG['TABLE_CONFIG']}");
  cpg_db_query("TRUNCATE TABLE {$CONFIG['TABLE_FILETYPES']}");
  $sql_query = remove_remarks($sql_query);
  $sql_query = split_sql_file($sql_query, ';');
  $sql_count = count($sql_query);
  for($i = 0; $i < $sql_count; $i++) {
    if (strpos($sql_query[$i],'config VALUES') || strpos($sql_query[$i],'filetypes VALUES')) {
      cpg_db_query($sql_query[$i]);
    }
  }
  // undo the reset for config fields specified in $doNotReset_array
  foreach ($doNotReset_array as $key) {
    $f= cpg_db_query("UPDATE {$CONFIG['TABLE_CONFIG']} SET value = '{$CONFIG[$key]}' WHERE name = '$key'");
    //var_dump($f);
    //var_dump(mysql_affected_rows());
  }
  cpgRedirectPage($_SERVER['PHP_SELF'].'?', $lang_common['information'], $lang_admin_php['restore_success']);
}  // user has chosen to factory-reset the config --- end


  foreach ($config_data as $config_section_key => $config_section_value) { // Loop through the config fields to check posted values for validity -- start
    foreach ($config_section_value as $adminDataKey => $adminDataValue) {
      // We need to catter for the fact that checkboxes that haven't been ticked are not being submit
      if ($adminDataValue['type'] == 'checkbox' && !$evaluation_array[$adminDataKey]) {
        $evaluation_array[$adminDataKey] = '0';
      }
      if ($adminDataValue['type'] == 'checkbox' && !$CONFIG[$adminDataKey]) {
        $CONFIG[$adminDataKey] = '0';
      }
      // regex check
      if (isset($adminDataValue['regex']) && $adminDataValue['regex'] != '') {
        if (eregi($adminDataValue['regex'],$evaluation_array[$adminDataKey]) == FALSE) {
          $userMessage .= '<li style="list-style-image:url(images/red.gif)">'.sprintf($lang_admin_php['config_setting_invalid'], '<a href="#'.$adminDataKey.'">'.$lang_admin_php[$adminDataKey].'</a>').'</li>'.$lineBreak;
          $regexValidation = '0';
          $admin_data_array[$adminDataKey] = $evaluation_array[$adminDataKey]; // replace the stuff in the form field with the improper input, so the user can see and correct his error
          if (in_array($adminDataKey,$problemFields_array) != TRUE) {
            $problemFields_array[] = $adminDataKey;
          }
          if (in_array($config_section_key,$collapseSections_array) == TRUE) {
            unset($collapseSections_array[array_search($config_section_key,$collapseSections_array)]);
          }
        } else { // regex validation succesfull -- start
          $regexValidation = '1';
        } // regex validation succesfull -- end
      } else { // no regex settings available - set validation var to successfull anyway
        $regexValidation = '1';
      }
      if ($postCount > 0 && $regexValidation == '1' && $evaluation_array[$adminDataKey] != $CONFIG[$adminDataKey] && $CONFIG[$adminDataKey] !== stripslashes(addslashes($evaluation_array[$adminDataKey])) ) {
        //  finally, all criteria have been met - let's write the updated data to the database
        cpg_db_query("UPDATE {$CONFIG['TABLE_CONFIG']} SET value = '{$evaluation_array[$adminDataKey]}' WHERE name = '$adminDataKey'");
        // perform special tasks -- start
        if ($adminDataKey == 'enable_encrypted_passwords' && $_POST['enable_encrypted_passwords'] == 1 && $CONFIG['enable_encrypted_passwords'] == 0) { // encrypt the passwords -- start
          cpg_db_query("update {$CONFIG['TABLE_USERS']} set user_password=md5(user_password);");
        } // encrypt the passwords -- end
        if ($CONFIG['log_mode'] == CPG_LOG_ALL) { // write log -- start
                log_write('CONFIG UPDATE SQL: '.
                          "UPDATE {$CONFIG['TABLE_CONFIG']} SET value = '{$evaluation_array[$adminDataKey]}' WHERE name = '$adminDataKey'\n".
                          'TIME: '.date("F j, Y, g:i a")."\n".
                          'USER: '.$USER_DATA['user_name'],
                          CPG_DATABASE_LOG
                          );
        } // write log -- end
        // Code to rename system thumbs in images folder
        $old_thumb_pfx =& $CONFIG['thumb_pfx'];
        if ($old_thumb_pfx != $_POST['thumb_pfx']) {
            $folders = array('images/', $THEME_DIR.'images/');
            foreach ($folders as $folder) {
                $thumbs = cpg_get_system_thumb_list($folder);
                foreach ($thumbs as $thumb) {
                    @rename($folder.$thumb['filename'],
                            $folder.str_replace($old_thumb_pfx,$_POST['thumb_pfx'],$thumb['filename']));
                }
            }
        }
        // perform special tasks -- end
        $admin_data_array[$adminDataKey] = $evaluation_array[$adminDataKey];
        $CONFIG[$adminDataKey] = $evaluation_array[$adminDataKey];
        $userMessage .= '<li style="list-style-image:url(images/green.gif)">'.sprintf($lang_admin_php['config_setting_ok'], $lang_admin_php[$adminDataKey]).'</li>'.$lineBreak;
        //print $adminDataKey;
        //print '<br />';
        //print $evaluation_array[$adminDataKey] .'='. $CONFIG[$adminDataKey];
        //print '<hr />';
      }
    } // inner foreach loop -- end
  } // Loop through the config fields to check posted values for validity -- end
  if ($userMessage != '') {
    $userMessage = '<ul>'.$lineBreak.$userMessage.'</ul>'.$lineBreak;
  }
//print_r($evaluation_array);
if ($postCount > 0 && $userMessage == '') {
  $userMessage = $lang_admin_php['upd_not_needed'];
}

/*
//
if (count($_POST) > 0) {
    if (isset($_POST['update_config'])) {
        $need_to_be_positive = array('albums_per_page',
            'album_list_cols',
            'max_tabs',
            'picture_width',
            'subcat_level',
            'thumb_width',
            'thumbcols',
            'thumbrows',
            // Show filmstrip
            'max_film_strip_items');

        // Code to rename system thumbs in images folder
        $old_thumb_pfx =& $CONFIG['thumb_pfx'];

        if ($old_thumb_pfx != $_POST['thumb_pfx']) {
            $folders = array('images/', $THEME_DIR.'images/');
            foreach ($folders as $folder) {
                $thumbs = cpg_get_system_thumb_list($folder);
                foreach ($thumbs as $thumb) {
                    @rename($folder.$thumb['filename'],
                            $folder.str_replace($old_thumb_pfx,$_POST['thumb_pfx'],$thumb['filename']));
                }
            }
        }

        foreach ($need_to_be_positive as $parameter)
        $_POST[$parameter] = max(1, (int)$_POST[$parameter]);

        foreach($lang_admin_data as $element) {
            if ((is_array($element))) {
                if (!isset($_POST[$element[1]])) //cpg_die(CRITICAL_ERROR, "Missing admin value for '{$element[1]}'", __FILE__, __LINE__);// continue;
                $value = addslashes($_POST[$element[1]]);
                if ($element[1] == 'ecards_more_pic_target' && substr($value, -1, 1) != '/') $value .= '/';
                if ($CONFIG[$element[1]] !== stripslashes($value))
                     {
                        cpg_db_query("UPDATE {$CONFIG['TABLE_CONFIG']} SET value = '$value' WHERE name = '{$element[1]}'");
                                                if ($element[1]=='enable_encrypted_passwords' && $value) {
                                                        cpg_db_query("update {$CONFIG['TABLE_USERS']} set user_password=md5(user_password);");
                                                }
                        if ($CONFIG['log_mode'] == CPG_LOG_ALL) {
                                log_write('CONFIG UPDATE SQL: '.
                                          "UPDATE {$CONFIG['TABLE_CONFIG']} SET value = '$value' WHERE name = '{$element[1]}'\n".
                                          'TIME: '.date("F j, Y, g:i a")."\n".
                                          'USER: '.$USER_DATA['user_name'],
                                          CPG_DATABASE_LOG
                                          );
                        }
                }
            }
        }
        //pageheader($lang_admin_php['title']);
        //msg_box($lang_admin_php['info'], $lang_admin_php['upd_success'], $lang_common['continue'], 'index.php');
        $message_id= cpgStoreTempMessage($lang_admin_php['upd_success']);

    } elseif (isset($_POST['restore_config'])) {
        $default_config = 'sql/basic.sql';
        $sql_query = fread(fopen($default_config, 'r'), filesize($default_config));
        $sql_query = preg_replace('/CPG_/', $CONFIG['TABLE_PREFIX'], $sql_query);
        cpg_db_query("TRUNCATE TABLE {$CONFIG['TABLE_CONFIG']}");
        cpg_db_query("TRUNCATE TABLE {$CONFIG['TABLE_FILETYPES']}");
        $sql_query = remove_remarks($sql_query);
        $sql_query = split_sql_file($sql_query, ';');

        $sql_count = count($sql_query);
        for($i = 0; $i < $sql_count; $i++) if (strpos($sql_query[$i],'config VALUES') || strpos($sql_query[$i],'filetypes VALUES')) cpg_db_query($sql_query[$i]);
                $f= cpg_db_query("UPDATE {$CONFIG['TABLE_CONFIG']} SET value = '{$CONFIG['enable_encrypted_passwords']}' WHERE name = 'enable_encrypted_passwords'");
                var_dump($f);
                var_dump(mysql_affected_rows());
        //pageheader($lang_admin_php['title']);
            //msg_box($lang_admin_php['info'], $lang_admin_php['restore_success'], $lang_common['continue'], $_SERVER['PHP_SELF']);
            $message_id= cpgStoreTempMessage($lang_admin_php['restore_success']);
    }
}
*/

pageheader($lang_admin_php['title']);

if ($userMessage != '') {
  starttable('100%', $lang_common['information'], 1);
  print <<< EOT
    <tr>
        <td class="tableb">
          {$userMessage}
        </td>
    </tr>
EOT;
  endtable();
  print '<br />'.$lineBreak;
}

$signature = 'Coppermine Photo Gallery ' . COPPERMINE_VERSION . ' ('. COPPERMINE_VERSION_STATUS . ')';

$tabindexCounter = 1;
$numberOfConfigFields = count($CONFIG);

print '<form action="'.$_SERVER['PHP_SELF'].'" method="post" name="cpgform" id="cpgform">';
starttable('100%', "{$lang_admin_php['title']} - $signature", 2);
print <<< EOT
    <tr>
        <td class="tableh2" colspan="2">
            <span id="expand_all_top" style="display:none"><a href="javascript:;" class="admin_menu" onclick="expand();show_section('expand_all_top');show_section('collapse_all_top');show_section('expand_all_bottom');show_section('collapse_all_bottom');toggleExpandCollpaseButtons('expand');">{$lang_admin_php['expand_all']}&nbsp;&nbsp;<img src="images/descending.gif" width="9" height="9" border="0" alt="" title="{$lang_admin_php['expand_all']}" /></a></span>
            <span id="collapse_all_top" style="display:none"><a href="javascript:;" class="admin_menu" onclick="hideall();show_section('expand_all_top');show_section('collapse_all_top');show_section('expand_all_bottom');show_section('collapse_all_bottom');toggleExpandCollpaseButtons('collapse')">{$lang_admin_php['collapse_all']}&nbsp;&nbsp;<img src="images/ascending.gif" width="9" height="9" border="0" alt="" title="{$lang_admin_php['collapse_all']}" /></a></span>
        </td>
    </tr>
EOT;

$sectionLoopCounter = 0;
foreach ($config_data as $config_section_key => $config_section_value) { // start foreach-loop through the config sections
  print <<< EOT
          <tr>
            <td class="tableh2" colspan="2" onclick="show_section('section{$sectionLoopCounter}');show_section('expand{$sectionLoopCounter}');show_section('collapse{$sectionLoopCounter}')">
                    <span style="cursor:pointer">
                    <img src="images/descending.gif" border="0" width="9" height="9" alt="" title="{$lang_admin_php['click_expand']}" id="expand{$sectionLoopCounter}" align="left" />
                    <img src="images/ascending.gif" border="0" width="9" height="9" alt="" title="{$lang_admin_php['click_collapse']}" id="collapse{$sectionLoopCounter}" style="display:none;" align="left" />
                    &nbsp;
                    {$lang_admin_php[$config_section_key]}
                    </span>
            </td>
          </tr>
          <tr>
            <td class="tableb" colspan="2">
              <table align="center" width="90%" cellspacing="1" cellpadding="0" class="maintable" id="section{$sectionLoopCounter}" border="0">
EOT;
  $withinSectionLoopCounter = 0;
  foreach ($config_section_value as $key => $value) {
    if ($withinSectionLoopCounter/2 == floor($withinSectionLoopCounter/2)) {
      $cellStyle = 'tableb '.$withinSectionLoopCounter;
    } else {
      $cellStyle = 'tableb tableb_alternate '.$withinSectionLoopCounter;
    }
    // hide entries labelled as "hidden" completely
    if (isset($value['only_display_if']) && $value['only_display_if'] != $CONFIG[$key]) {  // change the type if a "one-way-setting" is in place
      $value['type'] = 'hidden';
    }
    if ($value['type'] == 'hidden') {
      $visibility = ' style="display:none;"';
      $withinSectionLoopCounter++; // increase the counter, as the hidden row should not be taken into account for style alternation
    } else {
      $visibility = '';
    }
    if ($value['type'] == 'checkbox') {
      $labelWrapperStart = '<label for="'.$key.'">';
      $labelWrapperEnd = '</label>';
    } else {
      $labelWrapperStart = '';
      $labelWrapperEnd = '';
    }
    print <<< EOT

                <tr{$visibility}>
                  <td class="{$cellStyle}" width="60%">
                    <a name="{$key}"></a>
                    {$labelWrapperStart}{$lang_admin_php[$key]} {$value['additional_description']}{$labelWrapperEnd}
                  </td>
                  <td class="{$cellStyle}" width="50%">
EOT;
    // grey out the field if not applicable because bridging is enabled
    if ($CONFIG['bridge_enable'] != 0 && $value['bridged'] == 'hide') { //
      $readonly_text = ' readonly="readonly" disabled="disabled" title="'.$lang_admin_php['bbs_disabled'].'"';
      $readonly_radio = ' disabled="disabled" title="'.$lang_admin_php['bbs_disabled'].'"';
    } else {
      $readonly_text = '';
      $readonly_radio = '';
    }
    if ($value['width'] != '') { // set width if option is set in array
      $widthOption = ' style="width:'.$value['width'].'"';
    } else {
      $widthOption = ' style="width:90%"';
    }
    if ($value['size'] != '') { // set width if option is set in array
      $sizeOption = ' size="'.$value['size'].'"';
    } else {
      $sizeOption = '';
    }
    if ($value['maxlength'] != '') { // set width if option is set in array
      $maxlengthOption = ' maxlength="'.$value['maxlength'].'"';
    } else {
      $maxlengthOption = '';
    }
    if (in_array($key,$problemFields_array) == TRUE) {
      $highlightFieldCSS = ' important';
    } else {
      $highlightFieldCSS = '';
    }
    if ($value['type'] == 'textfield') {
      print '<span id="'.$key.'_wrapper" class="'.$highlightFieldCSS.'"><input type="text" class="textinput"'.$widthOption.$sizeOption.$maxlengthOption.'  name="'.$key.'" id="'.$key.'" value="'.$admin_data_array[$key].'"'.$readonly_text.' tabindex="'.$tabindexCounter.'" /></span>';
    } elseif ($value['type'] == 'password') {
      print '<span id="'.$key.'_wrapper" class="'.$highlightFieldCSS.'"><input type="password" class="textinput" maxlength="255"'.$widthOption.$sizeOption.$maxlengthOption.' name="'.$key.'" id="'.$key.'" value="'.$admin_data_array[$key].'"'.$readonly_text.' tabindex="'.$tabindexCounter.'" /></span>';
    } elseif ($value['type'] == 'checkbox') {
      $checked = '';
      if ($admin_data_array[$key] == 1) {
        $checked = ' checked="checked"';
      }
      print '<span id="'.$key.'_wrapper" class="'.$highlightFieldCSS.'"><input type="checkbox" name="'.$key.'" id="'.$key.'" value="1" class="checkbox"'.$checked.$readonly_radio.' tabindex="'.$tabindexCounter.'" />';
    } elseif ($value['type'] == 'radio') {
      $optionLoopCounter = 0;
      print '<span id="'.$key.'_wrapper" class="'.$highlightFieldCSS.'">'; // wrap the radio-buttons set into a container box
      foreach ($value['options'] as $option) { // loop through the options array
        $checked='';
        if ($admin_data_array[$key] == $optionLoopCounter) {
          $checked = ' checked="checked"';
        }
        print '<input type="radio" name="'.$key.'" id="'.$key.$optionLoopCounter.'" value="'.$optionLoopCounter.'" class="radio"'.$checked.$readonly_radio.' tabindex="'.$tabindexCounter.'" /><label for="'.$key.$optionLoopCounter.'" class="clickable_option">'.$option.'</label>&nbsp;';
        $optionLoopCounter++;
        $tabindexCounter++;
      }
      print '</span>';
    } elseif ($value['type'] == 'hidden') {
      print '<input type="hidden"  name="'.$key.'" value="'.$admin_data_array[$key].'"'.$readonly.' />';
    } elseif ($value['type'] == 'select_function') {
    } elseif ($value['type'] == 'select') {
      $optionLoopCounter = 0;
      //print_r($value['options']);
      $associativeArray = array_is_associative($value['options']);
      print '<span id="'.$key.'_wrapper" class="'.$highlightFieldCSS.'"><select name="'.$key.'" id="'.$key.'" class="listbox" size="1" '.$readonly_radio.' tabindex="'.$tabindexCounter.'">';
      foreach ($value['options'] as $option_key => $option_value) { // loop through the options array
        if ($admin_data_array[$key] == $option_value) {
          $selected = ' selected="selected"';
        } else {
          $selected = '';
        }
        if ($associativeArray == TRUE) {
          print '<option value="'.$option_value.'"'.$selected.'>'.$option_key;
        } else {
          print '<option value="'.$option_value.'"'.$selected.'>'.ucfirst($option_value);
        }
        print '</option>';
        $optionLoopCounter++;
      }
      print '</select></span>';
    }
    print '&nbsp;'.$value['end_description'];
    $helpIcon = '';
    if ($value['help_link'] != '' && $admin_data_array['enable_help'] != 0) {
      $helpIcon = cpg_display_help($value['help_link']);
    }
    print <<< EOT
                  </td>
                  <td class="{$cellStyle}">
                    {$helpIcon}
                  </td>
                </tr>
EOT;
    $withinSectionLoopCounter++;
    $tabindexCounter++;
  }
  print <<< EOT
              </table>
            </td>
          </tr>
EOT;
  $sectionLoopCounter++;
} // foreach-loop through the config sections

print <<<EOT
          <tr>
            <td align="left" class="tablef" colspan="2">
                <table border="0" cellspacing="0" cellpadding="0" width="100%">
                    <tr>
                        <td width="33%">
                            <span id="expand_all_bottom" style="display:none"><a href="javascript:;" class="admin_menu" onclick="expand();show_section('expand_all_top');show_section('collapse_all_top');show_section('expand_all_bottom');show_section('collapse_all_bottom');toggleExpandCollpaseButtons('expand');">{$lang_admin_php['expand_all']}<img src="images/descending.gif" width="9" height="9" border="0" alt="" title="{$lang_admin_php['expand_all']}" /></a></span>
                            <span id="collapse_all_bottom" style="display:none"><a href="javascript:;" class="admin_menu" onclick="hideall();show_section('expand_all_top');show_section('collapse_all_top');show_section('expand_all_bottom');show_section('collapse_all_bottom');toggleExpandCollpaseButtons('collapse')">{$lang_admin_php['collapse_all']}&nbsp;&nbsp;<img src="images/ascending.gif" width="9" height="9" border="0" alt="" title="{$lang_admin_php['collapse_all']}" /></a></span>
                        </td>
                        <td width="67%" align="center">
                            <input type="submit" class="button" name="update_config" value="{$lang_admin_php['save_cfg']}" />
                    &nbsp;&nbsp;
                                                                    <input type="submit" onclick="return confirm('{$lang_admin_php['restore_cfg_confirm']}');" class="button" name="restore_config" value="{$lang_admin_php['restore_cfg']}" />
                        </td>
                    </tr>
                </table>
            </td>
          </tr>
EOT;

endtable();
print '<br />';



echo <<< EOT
</form>
<script type="text/javascript">
    //addonload('hideall()'); // commented out: instead of hiding all, we loop through all sections below
    addonload("show_section('expand_all_top')");
    addonload("show_section('expand_all_bottom')");

EOT;
foreach ($collapseSections_array as $key => $value) {
  print '    addonload("show_section(\'section'.$key.'\')");'.$lineBreak;
}
echo <<< EOT
    function toggleExpandCollpaseButtons(action) {
      for (var i = 0; i < {$sectionLoopCounter}; i++) {
        if (action == 'collapse') {
          document.getElementById('expand' + i).style.display = 'block';
          document.getElementById('collapse' + i).style.display = 'none';
        } else {
          document.getElementById('expand' + i).style.display = 'none';
          document.getElementById('collapse' + i).style.display = 'block';
        }
      }
    }
</script>
EOT;
pagefooter();
ob_end_flush();
?>