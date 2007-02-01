<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2007 Coppermine Dev Team
  v1.1 originally written by Gregory DEMAR

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation; either version 2 of the License, or
  (at your option) any later version.
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

require('include/init.inc.php');
require('include/sql_parse.php');

$lang_admin_data = isset($lang_config_data) ? $lang_config_data : $lang_admin_data;

// Options disabled in bridged version
$options_to_disable = array('reg_notify_admin_email',
    'reg_requires_valid_email',
    'allow_duplicate_emails_addr',
    'allow_email_change',
    'login_threshold',
    'login_expiry',
    'user_profile1_name',
    'user_profile2_name',
    'user_profile3_name',
    'user_profile4_name',
    'user_profile5_name',
    'user_profile6_name',
    'enable_encrypted_passwords',
    'user_registration_disclaimer',
    'registration_captcha',
    'personal_album_on_registration',
    'global_registration_pw',
    'allow_user_account_delete',
);

if (!GALLERY_ADMIN_MODE) cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);

function form_label($text)
{
        global $lang_admin_php;
        global $sn1,$sn2,$sn3;

        static $cmi = 0;
        static $open = false;

        if ($sn1) echo '<tr><td colspan ="3" class="tableb_compact"><a name="notice1"></a>'.$lang_admin_php['notice1'].'</td></tr>';
        if ($sn2) echo '<tr><td colspan ="3" class="tableb_compact"><a name="notice2"></a>'.$lang_admin_php['notice2'].'</td></tr>';
        if ($sn3) echo '<tr><td colspan ="3" class="tableb_compact"><a name="notice3"></a>'.$lang_admin_php['notice3'].'</td></tr>';

        $sn1 = $sn2 = $sn3 = 0;

        if ($open){
        echo <<< EOT
                                </table>
                        </td>
                </tr>
EOT;
        }
        echo <<< EOT
                <tr>
                        <td class="tableh2" colspan="3" onclick="show_section('section{$cmi}')">
                                <span style="cursor:pointer"><img src="images/descending.gif" border="0" width="9" height="9" alt="" title="{$lang_admin_php['click_expand']}" /> <b>$text</b></span>
                        </td>
                </tr>
                <tr>
                        <td>
                                <table align="center" width="100%" cellspacing="1" cellpadding="0" class="maintable" id="section{$cmi}" border="0">
EOT;

        $open = true;
        $cmi++;
}

function form_input($text, $name, $help = '', $row_style_class = 'tableb')
{
    global $CONFIG;

    $value = $CONFIG[$name];
    $help = cpg_display_help($help);

    $type = ($name == 'smtp_password') ? 'password' : 'text';


    echo <<<EOT
                <tr>
                        <td width="60%" class="{$row_style_class}">
                                $text
                        </td>
                        <td width="50%" class="{$row_style_class}" valign="top">
                            <input type="$type" class="textinput" maxlength="255" style="width: 100%" name="$name" value="$value"/>
                        </td>
                        <td class="{$row_style_class}" width="10%">
                                $help
                        </td>
        </tr>

EOT;
}

function form_yes_no($text, $name, $help = '', $row_style_class = 'tableb')
{
    global $CONFIG, $lang_common;
    $help = cpg_display_help($help);

    $value = $CONFIG[$name];
    $yes_selected = $value ? 'checked="checked"' : '';
    $no_selected = !$value ? 'checked="checked"' : '';

    echo <<<EOT
        <tr>
                        <td class="{$row_style_class}" width="60%">
                                $text
                        </td>
                        <td class="{$row_style_class}" valign="top" width="50%">
                                <input type="radio" id="{$name}1" name="$name" value="1" $yes_selected/><label for="{$name}1" class="clickable_option">{$lang_common['yes']}</label>
                                &nbsp;&nbsp;
                                <input type="radio" id="{$name}0" name="$name" value="0" $no_selected/><label for="{$name}0" class="clickable_option">{$lang_common['no']}</label>
                        </td>
                        <td class="{$row_style_class}" width="10%">
                                $help
                        </td>
        </tr>

EOT;
}

function form_img_pkg($text, $name, $help = '', $row_style_class = 'tableb')
{
    global $CONFIG;
    $help = cpg_display_help($help);


    $value = $CONFIG[$name];
    $im_selected = ($value == 'im') ? 'selected="selected"' : '';
    $gd1_selected = ($value == 'gd1') ? 'selected="selected"' : '';
    $gd2_selected = ($value == 'gd2') ? 'selected="selected"' : '';

    echo <<<EOT
        <tr>
            <td class="{$row_style_class}" width="60%">
                $text
            </td>
            <td class="{$row_style_class}" valign="top" width="50%">
                <select name="$name" class="listbox">
                    <option value="im" $im_selected>Image Magick</option>
                    <option value="gd1" $gd1_selected>GD version 1.x</option>
                    <option value="gd2" $gd2_selected>GD version 2.x</option>
                </select>
            </td>
            <td class="{$row_style_class}" width="10%">
                $help
            </td>
        </tr>

EOT;
}

function form_sort_order($text, $name, $help = '', $row_style_class = 'tableb')
{
    global $CONFIG, $lang_admin_php;

    $help = cpg_display_help($help);

    $value = $CONFIG[$name];
    $ta_selected = ($value == 'ta') ? 'selected="selected"' : '';
    $td_selected = ($value == 'td') ? 'selected="selected"' : '';
    $na_selected = ($value == 'na') ? 'selected="selected"' : '';
    $nd_selected = ($value == 'nd') ? 'selected="selected"' : '';
    $da_selected = ($value == 'da') ? 'selected="selected"' : '';
    $dd_selected = ($value == 'dd') ? 'selected="selected"' : '';
    $pa_selected = ($value == 'pa') ? 'selected="selected"' : '';
    $pd_selected = ($value == 'pd') ? 'selected="selected"' : '';


    echo <<<EOT
        <tr>
            <td class="{$row_style_class}" width="60%">
                        $text
        </td>
        <td class="{$row_style_class}" valign="top" width="50%">
                        <select name="$name" class="listbox">
                                <option value="ta" $ta_selected>{$lang_admin_php['title_a']}</option>
                                <option value="td" $td_selected>{$lang_admin_php['title_d']}</option>
                                <option value="na" $na_selected>{$lang_admin_php['name_a']}</option>
                                <option value="nd" $nd_selected>{$lang_admin_php['name_d']}</option>
                                <option value="da" $da_selected>{$lang_admin_php['date_a']}</option>
                                <option value="dd" $dd_selected>{$lang_admin_php['date_d']}</option>
                                <option value="pa" $pa_selected>{$lang_admin_php['pos_a']}</option>
                                <option value="pd" $pd_selected>{$lang_admin_php['pos_d']}</option>
                        </select>
                </td>
                <td class="{$row_style_class}" width="10%">
                $help
                </td>
        </tr>

EOT;
}

function form_charset($text, $name, $help = '', $row_style_class = 'tableb')
{
    global $CONFIG;

    $help = cpg_display_help($help);

    $charsets = array('Default (not recommended)' => 'language file',
        'Arabic' => 'iso-8859-6',
        'Baltic' => 'iso-8859-4',
        'Central European' => 'iso-8859-2',
        'Chinese Simplified' => 'euc-cn',
        'Chinese Traditional' => 'big5',
        'Cyrillic' => 'koi8-r',
        'Greek' => 'iso-8859-7',
        'Hebrew' => 'iso-8859-8-i',
        'Icelandic' => 'x-mac-icelandic',
        'Japanese' => 'euc-jp',
        'Korean' => 'euc-kr',
        'Maltese' => 'iso-8859-3',
        'Thai' => 'windows-874 ',
        'Turkish' => 'iso-8859-9',
        'Unicode (recommended)' => 'utf-8',
        'Vietnamese' => 'windows-1258',
        'Western' => 'iso-8859-1'
        );

    $value = strtolower($CONFIG[$name]);

    echo <<<EOT
        <tr>
            <td class="{$row_style_class}" width="60%">
                        $text
        </td>
        <td class="{$row_style_class}" valign="top" width="50%">
                        <select name="$name" class="listbox">

EOT;
    foreach ($charsets as $country => $charset) {
        echo "                                <option value=\"$charset\" " . ($value == $charset ? 'selected="selected"' : '') . ">$country ($charset)</option>\n";
    }
    echo <<<EOT
                        </select>
                </td>
                <td class="{$row_style_class}" width="10%">
                $help
                </td>
        </tr>

EOT;
}

function form_language($text, $name, $help = '', $row_style_class = 'tableb')
{
    global $CONFIG;

    $help = cpg_display_help($help);
    $value = strtolower($CONFIG[$name]);
    $lang_dir = 'lang/';

    $dir = opendir($lang_dir);
    while ($file = readdir($dir)) {
        if (is_file($lang_dir . $file) && strtolower(substr($file, -4)) == '.php') {
            $lang_array[] = strtolower(substr($file, 0 , -4));
        }
    }
    closedir($dir);

    natcasesort($lang_array);

    echo <<<EOT
        <tr>
            <td class="{$row_style_class}" width="60%">
                        $text
        </td>
        <td class="{$row_style_class}" valign="top" width="50%">
                        <select name="$name" class="listbox">

EOT;
    foreach ($lang_array as $language) {
        echo "                                <option value=\"$language\" " . ($value == $language ? 'selected="selected"' : '') . ">" . ucfirst($language) . "</option>\n";
    }
    echo <<<EOT
                        </select>
                </td>
                <td class="{$row_style_class}" width="10%">
                $help
                </td>
        </tr>

EOT;
}

function form_theme($text, $name, $help = '', $row_style_class = 'tableb')
{
    global $CONFIG;
    $help = cpg_display_help($help);


    $result = cpg_db_query("SELECT value FROM {$CONFIG['TABLE_CONFIG']} WHERE name = 'theme'");
    list($value) = mysql_fetch_row($result);
    mysql_free_result($result);
    $theme_dir = 'themes/';

    $dir = opendir($theme_dir);
    while ($file = readdir($dir)) {
        if (is_dir($theme_dir . $file) && $file != "." && $file != ".." && $file != '.svn' && $file != 'sample') {
            $theme_array[] = $file;
        }
    }
    closedir($dir);

    natcasesort($theme_array);

    echo <<<EOT
        <tr>
            <td class="{$row_style_class}" width="60%">
                        $text
        </td>
        <td class="{$row_style_class}" valign="top" width="50%">
                        <select name="$name" class="listbox">

EOT;
    foreach ($theme_array as $theme) {
        echo "                                <option value=\"$theme\" " . ($value == $theme ? 'selected="selected"' : '') . ">" . strtr(ucfirst($theme), '_', ' ') . "</option>\n";
    }
    echo <<<EOT
                        </select>
                </td>
                <td class="{$row_style_class}" width="10%">
                $help
                </td>
        </tr>

EOT;
}
// Added for allowing user to select which aspect of thumbnails to scale
function form_scale($text, $name, $help = '', $row_style_class = 'tableb')
{
   global $CONFIG, $lang_admin_php ;

           $help = cpg_display_help($help);

    $value = $CONFIG[$name];
    $any_selected = ($value == 'max') ? 'selected="selected"' : '';
    $ht_selected = ($value == 'ht') ? 'selected="selected"' : '';
    $wd_selected = ($value == 'wd') ? 'selected="selected"' : '';
    //thumb cropping
    $ex_selected = ($value == 'ex') ? 'selected="selected"' : '';

    echo <<<EOT
        <tr>
            <td class="{$row_style_class}" width="60%">
                        $text
        </td>
        <td class="{$row_style_class}" valign="top" width="50%">
                        <select name="$name" class="listbox">
                                <option value="any" $any_selected>{$lang_admin_php['th_any']}</option>
                                <option value="ht" $ht_selected>{$lang_admin_php['th_ht']}</option>
                                <option value="wd" $wd_selected>{$lang_admin_php['th_wd']}</option>
                                <option value="ex" $ex_selected>{$lang_admin_php['th_ex']}</option>
                        </select>
                </td>
                <td class="{$row_style_class}" width="10%">
                $help
                </td>
        </tr>

EOT;
}

function form_lang_theme($text, $name, $help = '', $row_style_class = 'tableb')
{
    global $CONFIG, $lang_common, $lang_admin_php;
    $help = cpg_display_help($help);


    $value = $CONFIG[$name];
    $no_selected = ($value == '0') ? 'checked="checked"' : '';
    $yes_1_selected = ($value == '1') ? 'checked="checked"' : '';
    $yes_2_selected = ($value == '2') ? 'checked="checked"' : '';

    echo <<<EOT
        <tr>
            <td class="{$row_style_class}" width="60%">
                        $text
        </td>
        <td class="{$row_style_class}" valign="top" width="50%">
                        <input type="radio" id="{$name}1" name="$name" value="1" $yes_1_selected /><label for="{$name}1" class="clickable_option">{$lang_common['yes']}:{$lang_admin_php['item']}</label>
                        &nbsp;&nbsp;
                        <input type="radio" id="{$name}2" name="$name" value="2" $yes_2_selected /><label for="{$name}2" class="clickable_option">{$lang_common['yes']}:{$lang_admin_php['label']}+{$lang_admin_php['item']}</label>
                &nbsp;&nbsp;
                <input type="radio" id="{$name}0" name="$name" value="0" $no_selected /><label for="{$name}0" class="clickable_option">{$lang_common['no']}</label>
        </td>
        <td class="{$row_style_class}" width="10%">
        $help
        </td>
        </tr>

EOT;
}

function form_lang_debug($text, $name, $help = '', $row_style_class = 'tableb')
{
    global $CONFIG, $lang_common, $lang_admin_php;
    $help = cpg_display_help($help);


    $value = $CONFIG[$name];
    $no_selected = ($value == '0') ? 'checked="checked"' : '';
    $yes_1_selected = ($value == '1') ? 'checked="checked"' : '';
    $yes_2_selected = ($value == '2') ? 'checked="checked"' : '';

    echo <<<EOT
        <tr>
            <td class="{$row_style_class}" width="60%">
                                $text
                </td>
                <td class="{$row_style_class}" valign="top" width="50%">
                                <input type="radio" id="{$name}1" name="$name" value="1" $yes_1_selected /><label for="{$name}1" class="clickable_option">{$lang_common['yes']}:{$lang_admin_php['debug_everyone']}</label>
                                &nbsp;&nbsp;
                                <input type="radio" id="{$name}2" name="$name" value="2" $yes_2_selected /><label for="{$name}2" class="clickable_option">{$lang_common['yes']}:{$lang_admin_php['debug_admin']}</label>
                        &nbsp;&nbsp;
                        <input type="radio" id="{$name}0" name="$name" value="0" $no_selected /><label for="{$name}0" class="clickable_option">{$lang_common['no']}</label>

                </td>
                <td class="{$row_style_class}" width="10%">
                        $help
                </td>
        </tr>

EOT;
}

function form_number_dropdown($text, $name, $help = '', $row_style_class = 'tableb')
{
   global $CONFIG, $lang_admin_php ;
   $help = cpg_display_help($help);


    echo <<<EOT
        <tr>
            <td class="{$row_style_class}" width="60%">
                        $text
        </td>
        <td class="{$row_style_class}" valign="top" width="50%">
                        <select name="$name" class="listbox">
EOT;
        for ($i = 5; $i <= 25; $i++) {
        echo "<option value=\"".$i."\"";
        if ($i == $CONFIG[$name]) { echo " selected=\"selected\"";}
        echo ">".$i."</option>\n";
        }
     echo <<<EOT
     </select>
                </td>
                <td class="{$row_style_class}" width="10%">
                $help
                </td>
        </tr>
EOT;
}

function form_lang_logmode($text, $name, $help = '', $row_style_class = 'tableb')
{
    global $CONFIG, $lang_admin_php;
    $help = cpg_display_help($help);


    $value = $CONFIG[$name];
    $off_selected = ($value == '0') ? 'checked="checked"' : '';
    $normal_selected = ($value == '1') ? 'checked="checked"' : '';
    $all_selected = ($value == '2') ? 'checked="checked"' : '';

    echo <<<EOT
        <tr>
            <td class="{$row_style_class}" width="60%">
                        $text
        </td>
        <td class="{$row_style_class}" valign="top" width="50%">
                         <input type="radio" id="{$name}1" name="$name" value="1" $normal_selected /><label for="{$name}1" class="clickable_option">{$lang_admin_php['log_normal']}</label>
                        &nbsp;&nbsp;
                        <input type="radio" id="{$name}2" name="$name" value="2" $all_selected /><label for="{$name}2" class="clickable_option">{$lang_admin_php['log_all']}</label>
                        &nbsp;&nbsp;
                        <input type="radio" id="{$name}0" name="$name" value="0" $off_selected /><label for="{$name}0" class="clickable_option">{$lang_admin_php['no_logs']}</label>
                        &nbsp;&nbsp;
                        ( <a href="viewlog.php">{$lang_admin_php['view_logs']}</a> )
        </td>
        <td class="{$row_style_class}" width="10%">
        $help
        </td>
        </tr>

EOT;
}


function form_plugin_yes_no($text, $name, $help = '', $row_style_class = 'tableb')
{
    global $CONFIG, $lang_common, $lang_admin_php;
    $help = cpg_display_help($help);


    $value = $CONFIG[$name];
    $yes_selected = $value ? 'checked="checked"' : '';
    $no_selected = !$value ? 'checked="checked"' : '';

    echo <<<EOT
        <tr>
            <td class="{$row_style_class}" width="60%">
                        $text
        </td>
        <td class="{$row_style_class}" valign="top" width="50%">
                        <input type="radio" id="{$name}1" name="$name" value="1" $yes_selected /><label for="{$name}1" class="clickable_option">{$lang_common['yes']}</label>
                        &nbsp;&nbsp;
                        <input type="radio" id="{$name}0" name="$name" value="0" $no_selected /><label for="{$name}0" class="clickable_option">{$lang_common['no']}</label>
                        ( <a href="pluginmgr.php">{$lang_admin_php['manage_plugins']}</a> )
                </td>
                <td class="{$row_style_class}" width="10%">
                $help
                </td>
        </tr>

EOT;
}

function form_exif_yes_no($text, $name, $help = '', $row_style_class = 'tableb')
{
    global $CONFIG, $lang_common, $lang_admin_php;
    $help = cpg_display_help($help);

    $value = $CONFIG[$name];
    $yes_selected = $value ? 'checked="checked"' : '';
    $no_selected = !$value ? 'checked="checked"' : '';

    echo <<<EOT
        <tr>
            <td class="{$row_style_class}" width="60%">
                        $text
        </td>
        <td class="{$row_style_class}" valign="top" width="50%">
                        <input type="radio" id="{$name}1" name="$name" value="1" $yes_selected /><label for="{$name}1" class="clickable_option">{$lang_common['yes']}</label>
                        &nbsp;&nbsp;
                        <input type="radio" id="{$name}0" name="$name" value="0" $no_selected /><label for="{$name}0" class="clickable_option">{$lang_common['no']}</label>
                        ( <a href="exifmgr.php">{$lang_admin_php['manage_exif']}</a> )
                </td>
                <td class="{$row_style_class}" width="10%">
                $help
                </td>
        </tr>

EOT;
}

function form_user_guest_yes_no($text, $name, $help = '', $row_style_class = 'tableb')
{
    global $CONFIG, $lang_common, $lang_admin_php;
    $help = cpg_display_help($help);


    $value = $CONFIG[$name];
    $no_selected = ($value == '0') ? 'checked="checked"' : '';
    $yes_1_selected = ($value == '2') ? 'checked="checked"' : '';
    $yes_2_selected = ($value == '1') ? 'checked="checked"' : '';

    echo <<<EOT
        <tr>
            <td class="{$row_style_class}" width="60%">
                                $text
                </td>
                <td class="{$row_style_class}" valign="top" width="50%">
                                <input type="radio" id="{$name}1" name="$name" value="2" $yes_1_selected /><label for="{$name}1" class="clickable_option">{$lang_common['yes']}:{$lang_admin_php['debug_everyone']}</label>
                                &nbsp;&nbsp;
                                <input type="radio" id="{$name}2" name="$name" value="1" $yes_2_selected /><label for="{$name}2" class="clickable_option">{$lang_common['yes']}:{$lang_admin_php['guests_only']}</label>
                        &nbsp;&nbsp;
                        <input type="radio" id="{$name}0" name="$name" value="0" $no_selected /><label for="{$name}0" class="clickable_option">{$lang_common['no']}</label>

                </td>
                <td class="{$row_style_class}" width="10%">
                        $help
                </td>
        </tr>

EOT;
}

function form_keywords_yes_no($text, $name, $help = '', $row_style_class = 'tableb')
{
    global $CONFIG, $lang_common, $lang_admin_php;
    $help = cpg_display_help($help);


    $value = $CONFIG[$name];
    $yes_selected = $value ? 'checked="checked"' : '';
    $no_selected = !$value ? 'checked="checked"' : '';

    echo <<<EOT
        <tr>
            <td class="{$row_style_class}" width="60%">
                        $text
        </td>
        <td class="{$row_style_class}" valign="top" width="50%">
                        <input type="radio" id="{$name}1" name="$name" value="1" $yes_selected /><label for="{$name}1" class="clickable_option">{$lang_common['yes']}</label>
                        &nbsp;&nbsp;
                        <input type="radio" id="{$name}0" name="$name" value="0" $no_selected /><label for="{$name}0" class="clickable_option">{$lang_common['no']}</label>
                        ( <a href="keywordmgr.php">{$lang_admin_php['manage_keyword']}</a> )
                </td>
                <td class="{$row_style_class}" width="10%">
                $help
                </td>
        </tr>

EOT;
}

function form_disabled($text, $name, $help = '', $row_style_class = 'tableb')
{
  global $lang_admin_php;
  $help = cpg_display_help($help);

    echo <<<EOT
                <tr>
                    <td width="60%" class="{$row_style_class}">
                        $text
                    </td>
                    <td width="50%" class="{$row_style_class}" valign="top">
                        {$lang_admin_php['bbs_disabled']}
                    </td>
                    <td class="{$row_style_class}" width="10%">
                        $help
                    </td>
                </tr>

EOT;
}

function form_auto_resize($text, $name, $help = '', $row_style_class = 'tableb')
{
    global $CONFIG, $lang_common, $lang_admin_php;
    $help = cpg_display_help($help);


    $value = $CONFIG[$name];
    $no_selected = ($value == '0') ? 'checked="checked"' : '';
    $yes_1_selected = ($value == '1') ? 'checked="checked"' : '';
    $yes_2_selected = ($value == '2') ? 'checked="checked"' : '';

    echo <<<EOT
        <tr>
            <td class="{$row_style_class}" width="60%">
                $text
            </td>
            <td class="{$row_style_class}" valign="top" width="50%">
                <input type="radio" id="{$name}0" name="$name" value="0" $no_selected /><label for="{$name}0" class="clickable_option">{$lang_common['no']}</label>
                &nbsp;&nbsp;
                <input type="radio" id="{$name}1" name="$name" value="1" $yes_1_selected /><label for="{$name}1" class="clickable_option">{$lang_common['yes']}:{$lang_admin_php['auto_resize_everyone']}</label>
                &nbsp;&nbsp;
                <input type="radio" id="{$name}2" name="$name" value="2" $yes_2_selected /><label for="{$name}2" class="clickable_option">{$lang_common['yes']}:{$lang_admin_php['auto_resize_user']}</label>
            </td>
            <td class="{$row_style_class}" width="10%">
                $help
            </td>
        </tr>

EOT;
}

function form_asc_desc($text, $name, $help = '', $row_style_class = 'tableb')
{
    global $CONFIG, $lang_common, $lang_admin_php;
    $help = cpg_display_help($help);

    $value = $CONFIG[$name];
    $yes_selected = $value ? 'checked="checked"' : '';
    $no_selected = !$value ? 'checked="checked"' : '';

    echo <<<EOT
        <tr>
                        <td class="{$row_style_class}" width="60%">
                                $text
                        </td>
                        <td class="{$row_style_class}" valign="top" width="50%">
                                <input type="radio" id="{$name}0" name="$name" value="0" $no_selected /><label for="{$name}0" class="clickable_option">{$lang_admin_php['ascending']}</label>
                                &nbsp;&nbsp;
                                <input type="radio" id="{$name}1" name="$name" value="1" $yes_selected /><label for="{$name}1" class="clickable_option">{$lang_admin_php['descending']}</label>
                        </td>
                        <td class="{$row_style_class}" width="10%">
                                $help
                        </td>
        </tr>

EOT;
}

############## Watermark ############
function form_watermark_place($text, $name, $row_style_class = 'tableb')
{
   global $CONFIG, $lang_admin_php;

   $value = $CONFIG[$name];
   $southeast_selected = ($value == 'southeast') ? 'selected' : '';
   $southwest_selected = ($value == 'southwest') ? 'selected' : '';
   $northwest_selected = ($value == 'northwest') ? 'selected' : '';
   $northeast_selected = ($value == 'northeast') ? 'selected' : '';
   $center_selected = ($value == 'center') ? 'selected' : '';

   echo <<<EOT
       <tr>
           <td class="{$row_style_class}">
                       $text
       </td>
       <td class="{$row_style_class}" valign="top">
                       <select name="$name" class="listbox">
                               <option value="southeast" $southeast_selected>{$lang_admin_php['wm_bottomright']}</option>
                               <option value="southwest" $southwest_selected>{$lang_admin_php['wm_bottomleft']}</option>
                               <option value="northwest" $northwest_selected>{$lang_admin_php['wm_topleft']}</option>
                               <option value="northeast" $northeast_selected>{$lang_admin_php['wm_topright']}</option>
                               <option value="center" $center_selected>{$lang_admin_php['wm_center']}</option>
                       </select>
               </td>
       </tr>

EOT;
}

// Added for allowing user to select which files to watermark...
function form_watermark_files($text, $name, $row_style_class = 'tableb')
{
   global $CONFIG, $lang_admin_php;

   $value = $CONFIG[$name];
   $both_selected = ($value == 'both') ? 'selected' : '';
   $original_selected = ($value == 'original') ? 'selected' : '';
   $resized_selected = ($value == 'resized') ? 'selected' : '';

   echo <<<EOT
       <tr>
           <td class="{$row_style_class}">
                       $text
       </td>
       <td class="{$row_style_class}" valign="top">
                       <select name="$name" class="listbox">
                               <option value="both" $both_selected>{$lang_admin_php['wm_both']}</option>
                               <option value="original" $original_selected>{$lang_admin_php['wm_original']}</option>
                               <option value="resized" $resized_selected>{$lang_admin_php['wm_resized']}</option>
                       </select>
               </td>
       </tr>

EOT;
}
#############################

function form_report_post_yes_no($text, $name, $help = '', $row_style_class = 'tableb')
{
    global $CONFIG, $lang_common, $lang_admin_php;
    $help = cpg_display_help($help);


    $value = $CONFIG[$name];
    $yes_selected = $value ? 'checked="checked"' : '';
    $no_selected = !$value ? 'checked="checked"' : '';

    echo <<<EOT
        <tr>
            <td class="{$row_style_class}" width="60%">
                        $text
        </td>
        <td class="{$row_style_class}" valign="top" width="50%">
                        <input type="radio" id="{$name}1" name="$name" value="1" $yes_selected /><label for="{$name}1" class="clickable_option">{$lang_common['yes']}</label>
                        &nbsp;&nbsp;
                        <input type="radio" id="{$name}0" name="$name" value="0" $no_selected /><label for="{$name}0" class="clickable_option">{$lang_common['no']}</label>
                        ( <a href="keywordmgr.php">{$lang_admin_php['report_post']}</a> )
                </td>
                <td class="{$row_style_class}" width="10%">
                $help
                </td>
        </tr>

EOT;
}

function form_registration_disclaimer($text, $name, $help = '', $row_style_class = 'tableb') {
    global $CONFIG, $lang_common, $lang_admin_php;
    $help = cpg_display_help($help);


    $value = $CONFIG[$name];
    $no_selected = ($value == '0') ? 'checked="checked"' : '';
    $yes_1_selected = ($value == '1') ? 'checked="checked"' : '';
    $yes_2_selected = ($value == '2') ? 'checked="checked"' : '';

    echo <<<EOT
        <tr>
            <td class="{$row_style_class}" width="60%">
                $text
            </td>
            <td class="{$row_style_class}" valign="top" width="50%">
                <input type="radio" id="{$name}0" name="$name" value="0" $no_selected /><label for="{$name}0" class="clickable_option">{$lang_common['no']}</label>
                &nbsp;&nbsp;
                <input type="radio" id="{$name}1" name="$name" value="1" $yes_1_selected /><label for="{$name}1" class="clickable_option">{$lang_common['yes']}:{$lang_admin_php['separate_page']}</label>
                &nbsp;&nbsp;
                <input type="radio" id="{$name}2" name="$name" value="2" $yes_2_selected /><label for="{$name}2" class="clickable_option">{$lang_common['yes']}:{$lang_admin_php['inline']}</label>
            </td>
            <td class="{$row_style_class}" width="10%">
                $help
            </td>
        </tr>

EOT;
}




function create_form(&$data)
{
        global $sn1, $sn2, $sn3, $options_to_disable, $CONFIG;
        $row_style_class = 'tableb';

    foreach($data as $element) {
        if ((is_array($element))) {
                                        $skipped = 0;
                $element[3] = (isset($element[3])) ? $element[3] : '';
                if (UDB_INTEGRATION != 'coppermine' AND in_array($element[1],$options_to_disable) AND $CONFIG['bridge_enable']) $element[2] = 15;
                $sn1 = max($sn1,(strpos($element[0],'<a href="#notice1"')));
                $sn2 = max($sn2,(strpos($element[0],'<a href="#notice2"')));
                $sn3 = max($sn3,(strpos($element[0],'<a href="#notice3"')));
            switch ($element[2]) {
                case 0 :
                    form_input($element[0], $element[1], $element[3], $row_style_class);
                    break;
                case 1 :
                    if (!($element[1] == 'enable_encrypted_passwords' && $CONFIG['enable_encrypted_passwords'])) {
                        form_yes_no($element[0], $element[1], $element[3], $row_style_class);
                        break;
                    }
                    $skipped = 1;
                    break;
                case 2 :
                    form_img_pkg($element[0], $element[1], $element[3], $row_style_class);
                    break;
                case 3 :
                    form_sort_order($element[0], $element[1], $element[3], $row_style_class);
                    break;
                case 4 :
                    form_charset($element[0], $element[1], $element[3], $row_style_class);
                    break;
                case 5 :
                    form_language($element[0], $element[1], $element[3], $row_style_class);
                    break;
                case 6 :
                    form_theme($element[0], $element[1], $element[3], $row_style_class);
                    break;
                // Thumbnail scaling
                case 7 :
                    form_scale($element[0], $element[1], $element[3], $row_style_class);
                    break;
                // Language + Theme selection
                case 8 :
                    form_lang_theme($element[0], $element[1], $element[3], $row_style_class);
                    break;
                // debug mode selection
                case 9 :
                    form_lang_debug($element[0], $element[1], $element[3], $row_style_class);
                    break;
                // tabbed display fix
                case 10 :
                    form_number_dropdown($element[0], $element[1], $element[3], $row_style_class);
                    break;
                case 11 :
                    form_lang_logmode($element[0], $element[1], $element[3], $row_style_class);
                    break;
                case 12 :
                    form_plugin_yes_no($element[0], $element[1], $element[3], $row_style_class);
                    break;
                case 13 :
                    form_exif_yes_no($element[0], $element[1], $element[3], $row_style_class);
                    break;
                case 14 :
                    form_keywords_yes_no($element[0], $element[1], $element[3], $row_style_class);
                    break;
                case 15 :
                    form_disabled($element[0], $element[1], $element[3], $row_style_class);
                    break;
                case 16 :
                    form_auto_resize($element[0], $element[1], $element[3], $row_style_class);
                    break;
                // ascending or descending
                case 17 :
                    form_asc_desc($element[0], $element[1], $element[3], $row_style_class);
                    break;
                // registration disclaimer
                case 18 :
                    form_registration_disclaimer($element[0], $element[1], $element[3], $row_style_class);
                    break;
                case 19:
                    form_user_guest_yes_no($element[0], $element[1], $element[3], $row_style_class);
                    break;
                //Watermark place
                case 20 :
                        form_watermark_place($element[0], $element[1], $row_style_class);
                    break;
                //Which filest to watermark
                case 21 :
                        form_watermark_files($element[0], $element[1], $row_style_class);
                    break;
                default:
                    die('Invalid action');
            } // switch

            if (!$skipped) $row_style_class = ($row_style_class == 'tableb') ? 'tableb tableb_alternate' : 'tableb';

        } else {
                form_label($element);
        }
    }
}
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
                if (!isset($_POST[$element[1]])) /*cpg_die(CRITICAL_ERROR, "Missing admin value for '{$element[1]}'", __FILE__, __LINE__);*/ continue;
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
        pageheader($lang_admin_php['title']);
        msg_box($lang_admin_php['info'], $lang_admin_php['upd_success'], $lang_common['continue'], 'index.php');

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
        pageheader($lang_admin_php['title']);
            //msg_box($lang_admin_php['info'], $lang_admin_php['restore_success'], $lang_common['continue'], $PHP_SELF);
            msg_box($lang_admin_php['info'], $lang_admin_php['restore_success'], $lang_common['continue'], $_SERVER['PHP_SELF']);
    }
        pagefooter();
        exit;
}

pageheader($lang_admin_php['title']);

$signature = 'Coppermine Photo Gallery ' . COPPERMINE_VERSION . ' ('. COPPERMINE_VERSION_STATUS . ')';

echo '<form action="'.$_SERVER['PHP_SELF'].'" method="post" name="cpgform" id="cpgform">';
starttable('100%', "{$lang_admin_php['title']} - $signature", 3);
echo <<<EOT
    <tr>
        <td class="tableh2" colspan="3">
            <span id="expand_all_top" style="display:none"><a href="javascript:;" class="admin_menu" onclick="expand();show_section('expand_all_top');show_section('collapse_all_top');show_section('expand_all_bottom');show_section('collapse_all_bottom');">{$lang_admin_php['expand_all']}&nbsp;&nbsp;<img src="images/descending.gif" width="9" height="9" border="0" alt="" title="{$lang_admin_php['expand_all']}" /></a></span>
            <span id="collapse_all_top" style="display:none"><a href="javascript:;" class="admin_menu" onclick="hideall();show_section('expand_all_top');show_section('collapse_all_top');show_section('expand_all_bottom');show_section('collapse_all_bottom');">{$lang_admin_php['collapse_all']}&nbsp;&nbsp;<img src="images/ascending.gif" width="9" height="9" border="0" alt="" title="{$lang_admin_php['collapse_all']}" /></a></span>
        </td>
    </tr>
EOT;

create_form($lang_admin_data);

        if ($sn1) echo '<tr><td colspan ="3" class="tableb_compact"><a name="notice1"></a>'.$lang_admin_php['notice1'].'</td></tr>';
        if ($sn2) echo '<tr><td colspan ="3" class="tableb_compact"><a name="notice2"></a>'.$lang_admin_php['notice2'].'</td></tr>';
        if ($sn3) echo '<tr><td colspan ="3" class="tableb_compact"><a name="notice3"></a>'.$lang_admin_php['notice3'].'</td></tr>';

echo '</table></td></tr>';

echo <<<EOT
                <tr>
                        <td align="left" class="tablef">
                            <table border="0" cellspacing="0" cellpadding="0" width="100%">
                                <tr>
                                    <td width="33%">
                                        <span id="expand_all_bottom" style="display:none"><a href="javascript:;" class="admin_menu" onclick="expand();show_section('expand_all_top');show_section('collapse_all_top');show_section('expand_all_bottom');show_section('collapse_all_bottom');">{$lang_admin_php['expand_all']}<img src="images/descending.gif" width="9" height="9" border="0" alt="" title="{$lang_admin_php['expand_all']}" /></a></span>
                                        <span id="collapse_all_bottom" style="display:none"><a href="javascript:;" class="admin_menu" onclick="hideall();show_section('expand_all_top');show_section('collapse_all_top');show_section('expand_all_bottom');show_section('collapse_all_bottom');">{$lang_admin_php['collapse_all']}&nbsp;&nbsp;<img src="images/ascending.gif" width="9" height="9" border="0" alt="" title="{$lang_admin_php['collapse_all']}" /></a></span>
                                    </td>
                                    <td width="67%" align="center">
                                        <input type="submit" class="button" name="update_config" value="{$lang_admin_php['save_cfg']}" />
                                &nbsp;&nbsp;
                                                                                <input type="submit" onclick="return confirm('{$lang_admin_php['restore_cfg']}');" class="button" name="restore_config" value="{$lang_admin_php['restore_cfg']}" />
                                    </td>
                                </tr>
                            </table>
                        </td>
                </tr>
EOT;
endtable();
echo <<< EOT
</form>
<script type="text/javascript">
        addonload('hideall()');
    addonload("show_section('expand_all_top')");
    addonload("show_section('expand_all_bottom')");
</script>
EOT;
pagefooter();
ob_end_flush();
?>