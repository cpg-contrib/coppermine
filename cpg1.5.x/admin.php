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
  Coppermine version: 1.5.1
  $Source: /cvsroot/coppermine/devel/admin.php,v $
  $Revision$
  $LastChangedBy$
  $Date$
**********************************************/
 
define('IN_COPPERMINE', true);
define('ADMIN_PHP', true);

require_once('include/init.inc.php');

if (!GALLERY_ADMIN_MODE) {
    cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);
}

// define some vars that need to exist in JS
set_js_var('lang_warning_dont_submit', $lang_admin_php['warning_dont_submit']);
set_js_var('lang_reset_to_default', $lang_admin_php['reset_to_default']);
set_js_var('lang_no_change_needed', $lang_admin_php['no_change_needed']);


// Include the JS for admin.php
js_include('js/admin.js');

$admin_data_array  = $CONFIG;
$optionLoopCounter = 0;
$lineBreak         = "\r\n";

require_once('include/admin.inc.php'); // populate the array for the admin data (could later be done using an XML file)

// Filter upload choices to allow plugins to add upload methods
$config_data['user_settings']['upload_mechanism']['options'] = CPGPluginAPI::filter('upload_options', $config_data['user_settings']['upload_mechanism']['options']);

// loop through the config sections and populate the array that determines what sections to expand/collapse
$collapseSections_array = array(); // By default, all sections should be hidden. Let's populate the array first with all existing sections and then later remove the ones that are supposed to be expanded by default
foreach ($config_data as $key => $value) {
    $collapseSections_array[] = $key;
}

$userMessage = ''; //The message that the will be displayed if something went wrong or to tell the user that we had success

$problemFields_array = array(); // we'll add field-wrapper-IDs to this array to visualize that something went wrong. Onload we'll assign the class "important" to the boxes that correspond to the array data

if ($superCage->post->keyExists('restore_config')) { // user has chosen to factory-reset the config --- start

    foreach ($config_data as $section => $values) {
    
        foreach ($values as $name => $value) {

            if (!empty($value['preserve_when_resetting'])) {
                continue;
            }
            
            if (isset($value['default_value'])) {               
                cpg_config_set($name, $value['default_value']);
            }
        }
    }
    
    cpgRedirectPage($CPG_PHP_SELF, cpg_fetch_icon('warning', 2) . $lang_common['information'], $lang_admin_php['restore_success']);
}  // user has chosen to factory-reset the config --- end


foreach ($config_data as $config_section_key => $config_section_value) { // Loop through the config fields to check posted values for validity -- start
    foreach ($config_section_value as $adminDataKey => $adminDataValue) {
        if ($superCage->post->keyExists('update_config')) {
            $evaluate_value = $superCage->post->getEscaped($adminDataKey);
        } else {
            $evaluate_value = $CONFIG[$adminDataKey];
        }
        // We need to catter for the fact that checkboxes that haven't been ticked are not being submit
        if ($adminDataValue['type'] == 'checkbox' && !$evaluate_value) {
            $evaluate_value = '0';
        }
        if ($adminDataValue['type'] == 'checkbox' && !$CONFIG[$adminDataKey]) {
            $CONFIG[$adminDataKey] = '0';
        }
        // the data for 'select_multiple' is an array. Let's concatenate it into a single value
        if ($adminDataValue['type'] == 'select_multiple') {
            if (is_array($evaluate_value)) {
                $temp = '';
                for ($i = 0; $i <= end($evaluate_value); $i++) {
                    if (in_array($i, $evaluate_value) == TRUE) {
                        $temp .= '1';
                    } else {
                        $temp .= '0';
                    }
                    $temp .= '|';
                }
                unset($evaluate_value);
                $evaluate_value = rtrim($temp, '|');
                unset($temp);
            }
        }
        // regex check
        if ((isset($adminDataValue['regex']) && $adminDataValue['regex'] != '') || (isset($adminDataValue['regex_not']) && $adminDataValue['regex_not'] != '')) {
            if ((isset($adminDataValue['regex']) && $adminDataValue['regex'] != '' && preg_match('#' . $adminDataValue['regex'] . '#i', $evaluate_value) == FALSE) || (isset($adminDataValue['regex_not']) && $adminDataValue['regex_not'] != '' && preg_match('#' . $adminDataValue['regex_not'] . '#i', $evaluate_value) == TRUE)) {
                $userMessage    .= '<li style="list-style-image:url(images/icons/stop.png)">'.sprintf($lang_admin_php['config_setting_invalid'], '<a href="#'.$adminDataKey.'">'.$lang_admin_php[$adminDataKey].'</a>').'</li>'.$lineBreak;
                $regexValidation = '0';
                //$admin_data_array[$adminDataKey] = $evaluation_array[$adminDataKey]; // replace the stuff in the form field with the improper input, so the user can see and correct his error
                $admin_data_array[$adminDataKey] = $evaluate_value; // replace the stuff in the form field with the improper input, so the user can see and correct his error
                if (in_array($adminDataKey, $problemFields_array) != TRUE) {
                    $problemFields_array[] = $adminDataKey;
                }
                if (in_array($config_section_key, $collapseSections_array) == TRUE) {
                    unset($collapseSections_array[array_search($config_section_key, $collapseSections_array)]);
                }
            } else { // regex validation succesfull -- start
                $regexValidation = '1';
            } // regex validation succesfull -- end
        } else { // no regex settings available - set validation var to successful anyway
            $regexValidation = '1';
        }
        if ($superCage->post->keyExists('update_config') && $regexValidation == '1' && $evaluate_value != $CONFIG[$adminDataKey] && $CONFIG[$adminDataKey] !== stripslashes($evaluate_value) ) {
            //  finally, all criteria have been met - let's write the updated data to the database
            
            cpg_config_set($adminDataKey, $evaluate_value);
            
            // perform special tasks -- start

            // Code to rename system thumbs in images folder
            $old_thumb_pfx =& $CONFIG['thumb_pfx'];
            $matches       = $superCage->post->getMatched('thumb_pfx', '/^[0-9A-Za-z_-]+$/');
            $thumb_pfx     = $matches[0];
            
            if ($old_thumb_pfx != $thumb_pfx) {
                $folders = array('images/', $THEME_DIR.'images/');
                foreach ($folders as $folder) {
                    $thumbs = cpg_get_system_thumb_list($folder);
                    foreach ($thumbs as $thumb) {
                        @rename($folder.$thumb['filename'],
                                $folder.str_replace($old_thumb_pfx, $thumb_pfx, $thumb['filename']));
                    }
                }
            }
            // perform special tasks -- end
            $admin_data_array[$adminDataKey] = stripslashes($evaluate_value);
            $CONFIG[$adminDataKey]           = stripslashes($evaluate_value);
            
            $userMessage .= '<li style="list-style-image:url(images/icons/ok.png)">'.sprintf($lang_admin_php['config_setting_ok'], $lang_admin_php[$adminDataKey]).'</li>'.$lineBreak;
        }
    } // inner foreach loop -- end
} // Loop through the config fields to check posted values for validity -- end
if ($userMessage != '') {
    $userMessage = '<ul>'.$lineBreak.$userMessage.'</ul>'.$lineBreak;
}
//print_r($evaluation_array);
if ($superCage->post->keyExists('update_config') > 0 && $userMessage == '') {
    $userMessage = $lang_admin_php['upd_not_needed'];
}



pageheader($lang_admin_php['title']);
/*
// section to test new regex stuff - uncomment temporarily if needed
$string = 'http://localhost/foo/';
$regex = '^'
                  .'(http://){1,1}' // leading 'http://' is mandatory - no support for https yet
                  .'(([0-9a-z_!~*\'().&=+$%-]+: ){0,1}' //password, separated with a colon
                  .'[0-9a-z_!~*\'().&=+$%-]+@){0,1}' //username, separated with an @
                  .'(([0-9]{1,3}\.){3}[0-9]{1,3}' // IP- 199.194.52.184
                  .'|' // allows either IP or domain or localhost
                  .'('
                  .'([0-9a-z_!~*\'()-]+\.)*' // tertiary domain(s)- www.
                  .'([0-9a-z][0-9a-z-]{0,61})?[0-9a-z]\.' // second level domain
                  .'[a-z]{2,6}' // first level domain- .com or .museum
                  .')'
                  .'|'
                  .'localhost'
                  .')' // end of domain / IP address
                  .'(:[0-9]{1,4}){0,1}' // port number- :80
                  .'[/]{1,1}' // trailing slash after domain-part of URL
                  .'('
                  .'([0-9a-zA-Z_!~.()-])+/{1}'
                  .'){0,}'
                  .'$';
print preg_match('#' . $regex . '#i', $string);
print '<br />';
print $string;
die;
*/

if ($userMessage != '') {
    starttable('100%', cpg_fetch_icon('info', 2) . $lang_common['information'], 1);
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

$tabindexCounter      = 1;
$numberOfConfigFields = count($CONFIG);

print '<form action="'.$CPG_PHP_SELF.'" method="post" name="cpgform" id="cpgform" onSubmit="return deleteUnneededFields();">';
starttable('100%', cpg_fetch_icon('config', 2) . $lang_admin_php['title'] . ' - ' . $signature, 2);
print <<< EOT
    <tr>
        <td class="tableh2" colspan="2">
            <span id="expand_all_top" style="display:none"><a href="javascript:void(0);" class="admin_menu" >{$lang_admin_php['expand_all']}&nbsp;&nbsp;<img src="images/descending.gif" width="9" height="9" border="0" alt="" title="{$lang_admin_php['expand_all']}" /></a></span>
            <span id="collapse_all_top" style="display:none"><a href="javascript:void(0);" class="admin_menu" >{$lang_admin_php['collapse_all']}&nbsp;&nbsp;<img src="images/ascending.gif" width="9" height="9" border="0" alt="" title="{$lang_admin_php['collapse_all']}" /></a></span>
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

        if (isset($value['only_display_if']) && $value['only_display_if'] != $CONFIG[$key]) {  // change the type if a "one-way-setting" is in place
            $value['type'] = 'hidden';
        }
        if (isset($value['only_display_if_not']) && $value['only_display_if_not'] == $CONFIG[$key]) {  // change the type if a "one-way-setting" is in place
            $value['type'] = 'hidden';
        }
        // hide entries labeled as "hidden" completely
        if ($value['type'] == 'hidden') {
            $visibility = ' style="display:none;"';
            $withinSectionLoopCounter++; // increase the counter, as the hidden row should not be taken into account for style alternation
        } else {
            $visibility = '';
        }
        if ($value['type'] == 'checkbox') {
            $labelWrapperStart = '<label for="'.$key.'">';
            $labelWrapperEnd   = '</label>';
        } else {
            $labelWrapperStart = '';
            $labelWrapperEnd   = '';
        }
        if (!empty($value['warning'])) { // set warning text
            $warningText  = $value['warning'];
            $warningPopUp = cpg_display_help('f=empty.htm&amp;base=64&amp;h='.urlencode(base64_encode(serialize($lang_admin_php[$key]))).'&amp;t='.urlencode(base64_encode(serialize(htmlspecialchars($value['warning'])))), 500, 250, '*');
        } else {
            $warningText  = '';
            $warningPopUp = '';
        }

        if (empty($value['additional_description'])) {
            $value['additional_description'] = '';
        }

        if (empty($value['end_description'])) {
            $value['end_description'] = '';
        }

        print <<< EOT

                <tr{$visibility}>
                  <td class="{$cellStyle}" width="60%">
                    <a name="{$key}"></a>
                    {$labelWrapperStart}{$lang_admin_php[$key]} {$value['additional_description']}{$warningPopUp}{$labelWrapperEnd}
                  </td>
                  <td class="{$cellStyle}" width="50%">
EOT;
        // grey out the field if not applicable because bridging is enabled
        //if ($value['bridged'] == 'hide') { //
        if ($CONFIG['bridge_enable'] != 0 && !empty($value['bridged']) && $value['bridged'] == 'hide') { //
            $readonly_text    = ' readonly="readonly" title="'.$lang_admin_php['bbs_disabled'].'"';
            $readonly_message = ' '.$lang_admin_php['bbs_disabled'];
            $readonly_radio   = ' disabled="disabled" title="'.$lang_admin_php['bbs_disabled'].'"';
        } else {
            $readonly_text    = '';
            $readonly_message = '';
            $readonly_radio   = '';
        }
        if (!empty($value['width'])) { // set width if option is set in array
            $widthOption = ' style="width:'.$value['width'].'"';
        } else {
            $widthOption = ' style="width:90%"';
        }
        if (!empty($value['size'])) { // set width if option is set in array
            $sizeOption = ' size="'.$value['size'].'"';
        } else {
            $sizeOption = '';
        }
        if (!empty($value['maxlength'])) { // set width if option is set in array
            $maxlengthOption = ' maxlength="'.$value['maxlength'].'"';
        } else {
            $maxlengthOption = '';
        }
        if (in_array($key, $problemFields_array) == TRUE) {
            $highlightFieldCSS = ' important';
        } else {
            $highlightFieldCSS = '';
        }

        // Different types of fields --- start
        if ($value['type'] == 'textfield') { // TEXTFIELD
            print '<span id="'.$key.'_wrapper" class="'.$highlightFieldCSS.'"><input type="text" class="textinput"'.$widthOption.$sizeOption.$maxlengthOption.'  name="'.$key.'" id="'.$key.'" value="'.htmlspecialchars($admin_data_array[$key]).'"'.$readonly_text.' tabindex="'.$tabindexCounter.'" title="'.str_replace("'", "\'", htmlspecialchars($warningText)).'" onblur="checkDefaultBox(\''.$key.'\', \'textfield\', \'\', \''.str_replace("'", "\'", htmlspecialchars($warningText)).'\');" />'.$readonly_message.'</span>';

        } elseif ($value['type'] == 'password') { // PASSWORD
            print '<span id="'.$key.'_wrapper" class="'.$highlightFieldCSS.'"><input type="password" class="textinput" maxlength="255"'.$widthOption.$sizeOption.$maxlengthOption.' name="'.$key.'" id="'.$key.'" value="'.$admin_data_array[$key].'"'.$readonly_text.' tabindex="'.$tabindexCounter.'" title="'.str_replace("'", "\'", htmlspecialchars($warningText)).'" onblur="checkDefaultBox(\''.$key.'\', \'password\', \'\', \''.str_replace("'", "\'", htmlspecialchars($warningText)).'\', \''.str_replace("'", "\'", htmlspecialchars($warningText)).'\');" />'.$readonly_message.'</span>';

        } elseif ($value['type'] == 'checkbox') { // CHECKBOX
            $checked = '';
            if ($admin_data_array[$key] == 1) {
                $checked = ' checked="checked"';
            }
            print '<span id="'.$key.'_wrapper" class="'.$highlightFieldCSS.'"><input type="checkbox" name="'.$key.'" id="'.$key.'" value="1" class="checkbox"'.$checked.$readonly_radio.' tabindex="'.$tabindexCounter.'" title="'.str_replace("'", "\'", htmlspecialchars($warningText)).'" onchange="checkDefaultBox(\''.$key.'\', \'checkbox\', \'\', \''.str_replace("'", "\'", htmlspecialchars($warningText)).'\');" />'.$readonly_message.'</span>';

        } elseif ($value['type'] == 'radio') { //RADIO
            $optionLoopCounter = 0;
            print '<span id="'.$key.'_wrapper" class="'.$highlightFieldCSS.'">'; // wrap the radio-buttons set into a container box
            foreach ($value['options'] as $option) { // loop through the options array
                $checked = '';
                if ($admin_data_array[$key] == $optionLoopCounter) {
                    $checked = ' checked="checked"';
                }
                print '<input type="radio" name="'.$key.'" id="'.$key.$optionLoopCounter.'" value="'.$optionLoopCounter.'" class="radio"'.$checked.$readonly_radio.' tabindex="'.$tabindexCounter.'" title="'.str_replace("'", "\'", htmlspecialchars($warningText)).'" onfocus="checkDefaultBox(\''.$key.$optionLoopCounter.'\', \'radio\', \'\', \''.str_replace("'", "\'", htmlspecialchars($warningText)).'\');" /><label for="'.$key.$optionLoopCounter.'" class="clickable_option">'.$option.'</label>&nbsp;';
                if (!empty($value['linebreak'])) {
                    print $value['linebreak'];
                }
                $optionLoopCounter++;
                $tabindexCounter++;
            }
            print $readonly_message.'</span>';

        } elseif ($value['type'] == 'hidden') { //HIDDEN
            print '<input type="hidden"  name="'.$key.'" value="'.$admin_data_array[$key].'" />';

        } elseif ($value['type'] == 'select_function') { //SELECT_FUNCTION
            // not implemented (yet)

        } elseif ($value['type'] == 'select_multiple') { //SELECT_MULTIPLE
            $optionLoopCounter  = 0;
            $option_value_array = explode("|", $admin_data_array[$key]);
            if (count($value['options']) > 10) {
                $maxSize = 10;
            } else {
                $maxSize = count($value['options']);
            }
            print '<span id="'.$key.'_wrapper" class="'.$highlightFieldCSS.'"><select name="'.$key.'[]" id="'.$key.'" class="listbox" size="'.$maxSize.'" '.$readonly_radio.' tabindex="'.$tabindexCounter.'" multiple="multiple" title="'.str_replace("'", "\'", htmlspecialchars($warningText)).'">'.$lineBreak;
            foreach ($value['options'] as $option_value) { // loop through the options array
                $admin_data_array[$key] = (int)$admin_data_array[$key];
                if (array_key_exists($optionLoopCounter, $option_value_array) && ($option_value_array[$optionLoopCounter] == 1)) {
                    $selected = ' selected="selected"';
                } else {
                    $selected = '';
                }
                print '                      <option value="'.$optionLoopCounter.'"'.$selected.'>'.ucfirst($option_value);
                print '</option>'.$lineBreak;
                $optionLoopCounter++;
            }
            print '</select>'.$readonly_message.'</span><br />'.$lineBreak;

        } elseif ($value['type'] == 'select') { //SELECT
            $optionLoopCounter = 0;
            $associativeArray  = array_is_associative($value['options']);
            print '<span id="'.$key.'_wrapper" class="'.$highlightFieldCSS.'"><select name="'.$key.'" id="'.$key.'" class="listbox" size="1" '.$readonly_radio.' tabindex="'.$tabindexCounter.'" onchange="checkDefaultBox(\''.$key.'\', \'select\', \''.count($value['options']).'\', \''.str_replace("'", "\'", htmlspecialchars($warningText)).'\');" title="'.str_replace("'", "\'", htmlspecialchars($warningText)).'">';
            foreach ($value['options'] as $option_key => $option_value) { // loop through the options array
                if ($associativeArray == TRUE) {
                    if ($admin_data_array[$key] == $option_key) {
                        $selected = ' selected="selected"';
                    } else {
                        $selected = '';
                    }
                    print '<option value="'.$option_key.'"'.$selected.'>'.$option_value;
                } else {
                    if ($admin_data_array[$key] == $option_value) {
                        $selected = ' selected="selected"';
                    } else {
                        $selected = '';
                    }
                    print '<option value="'.$option_value.'"'.$selected.'>'.ucfirst($option_value);
                }
                print '</option>';
                $optionLoopCounter++;
            }
            print '</select>'.$readonly_message.'</span>';
        }
        print '&nbsp;'.$value['end_description'];
        // Different types of fields --- end

        $helpIcon = '';
        if ($value['help_link'] != '' && $admin_data_array['enable_help'] != 0) {
            $helpIcon = cpg_display_help($value['help_link']);
        }
        $resetCheckbox     = '';
        $defaultValueField = '';
        if (isset($value['default_value'])) { // we have a default value
            if ($value['default_value'] == $admin_data_array[$key]) { // the default value equals the current config setting - hide the "reset to default" checkbox
                $resetCheckbox = '<input type="checkbox" name="reset_default_'.$key.'" id="reset_default_'.$key.'" value="'.$value['default_value'].'" class="checkbox" checked="checked" title="'.$lang_admin_php['reset_to_default'].'" onclick="resetToDefault(\''.$key.'\', \''.$value['type'].'\', \''.($optionLoopCounter - 1).'\');" style="display:none;" />';
            } else {
                $resetCheckbox = '<input type="checkbox" name="reset_default_'.$key.'" id="reset_default_'.$key.'" value="'.$value['default_value'].'" class="checkbox" title="'.$lang_admin_php['reset_to_default'].'" onclick="resetToDefault(\''.$key.'\', \''.$value['type'].'\', \''.($optionLoopCounter - 1).'\');" />';
            }
        } else { // we don't have a default value
            $resetCheckbox = '<input type="hidden" name="reset_default_'.$key.'" id="reset_default_'.$key.'" value="'.$admin_data_array[$key].'"  />';
        }
        $resetCheckbox = '<span class="deleteOnSubmit">' . $resetCheckbox . '</span>';
        $resetCheckbox = str_replace("'", "\'", $resetCheckbox);
        print <<< EOT
                  </td>
                  <td class="{$cellStyle}">
                    <script type="text/javascript">
                        document.write('{$resetCheckbox}');
                    </script>
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

$submit_icon  = cpg_fetch_icon('ok', 1);
$factory_icon = cpg_fetch_icon('delete', 1);

print <<<EOT
          <tr>
            <td align="left" class="tablef" colspan="2">
                <table border="0" cellspacing="0" cellpadding="0" width="100%">
                    <tr>
                        <td width="33%">
                            <span id="expand_all_bottom" style="display:none"><a href="javascript:void(0);" class="admin_menu" >{$lang_admin_php['expand_all']}<img src="images/descending.gif" width="9" height="9" border="0" alt="" title="{$lang_admin_php['expand_all']}" /></a></span>
                            <span id="collapse_all_bottom" style="display:none"><a href="javascript:void(0);" class="admin_menu">{$lang_admin_php['collapse_all']}&nbsp;&nbsp;<img src="images/ascending.gif" width="9" height="9" border="0" alt="" title="{$lang_admin_php['collapse_all']}" /></a></span>
                        </td>
                        <td width="67%" align="center">
                            <button type="submit" class="button" name="update_config" value="{$lang_admin_php['save_cfg']}">{$submit_icon}{$lang_admin_php['save_cfg']}</button>

                    &nbsp;&nbsp;
                                                                    <!--<input type="submit" onclick="return confirm('{$lang_admin_php['restore_cfg_confirm']}');" class="button" name="restore_config" value="{$lang_admin_php['restore_cfg']}" />-->
                                                                    <button type="submit" onclick="return confirm('{$lang_admin_php['restore_cfg_confirm']}');" class="button" name="restore_config" value="{$lang_admin_php['restore_cfg']}">{$factory_icon}{$lang_admin_php['restore_cfg']}</button>
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
EOT;
pagefooter();

?>