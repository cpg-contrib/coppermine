<?php
// ------------------------------------------------------------------------- //
// Coppermine Photo Gallery 1.3.0                                            //
// ------------------------------------------------------------------------- //
// Copyright (C) 2002-2004 Gregory DEMAR                                     //
// http://www.chezgreg.net/coppermine/                                       //
// ------------------------------------------------------------------------- //
// Updated by the Coppermine Dev Team                                        //
// (http://coppermine.sf.net/team/)                                          //
// see /docs/credits.html for details                                        //
// ------------------------------------------------------------------------- //
// This program is free software; you can redistribute it and/or modify      //
// it under the terms of the GNU General Public License as published by      //
// the Free Software Foundation; either version 2 of the License, or         //
// (at your option) any later version.                                       //
// ------------------------------------------------------------------------- //
// $Id$
// ------------------------------------------------------------------------- //

define('IN_COPPERMINE', true);
define('CONFIG_PHP', true);

require('include/init.inc.php');
require('include/sql_parse.php');

//if (!GALLERY_ADMIN_MODE) cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);

function form_label($text)
{
	global $lang_config_php;
	global $sn1,$sn2,$sn3;
	
	static $cmi = 0;
	static $open = false;
					
	if ($sn1) echo '<tr><td><a name="notice1"></a>'.$lang_config_php['notice1'].'</td></tr>';
	if ($sn2) echo '<tr><td><a name="notice2"></a>'.$lang_config_php['notice2'].'</td></tr>'; 
	if ($sn3) echo '<tr><td><a name="notice3"></a>'.$lang_config_php['notice3'].'</td></tr>'; 
	
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
			<td class="tableh2" colspan="2" onclick="show_section('section{$cmi}')">
				<img src="/images/descending.gif" alt="click section name to expand" /> <b>$text</b>
			</td>	
		</tr>
		<tr>
			<td>
				<table align="center" width="100%" cellspacing="1" cellpadding="0" class="maintable" id="section{$cmi}">
EOT;

	$open = true;
	$cmi++;
}

function form_input($text, $name, $help = '')
{
    global $CONFIG;

    $value = $CONFIG[$name];
    $help = cpg_display_help($help);


    echo <<<EOT
		<tr>
			<td width="60%" class="tableb">
				$text
			</td>
        	<td width="40%" class="tableb" valign="top">
            	<input type="text" class="textinput" style="width: 100%" name="$name" value="$value" />
			</td>
			<td class="tableb" width="10%">
				$help
			</td>
        </tr>

EOT;
}

function form_yes_no($text, $name, $help = '')
{
    global $CONFIG, $lang_yes, $lang_no;
    $help = cpg_display_help($help);


    $value = $CONFIG[$name];
    $yes_selected = $value ? 'checked="checked"' : '';
    $no_selected = !$value ? 'checked="checked"' : '';

    echo <<<EOT
        <tr>
			<td class="tableb" width="60%">
				$text
			</td>
        	<td class="tableb" valign="top" width="50%">
				<input type="radio" id="{$name}1" name="$name" value="1" $yes_selected /><label for="{$name}1" class="clickable_option">$lang_yes</label>
				&nbsp;&nbsp;
				<input type="radio" id="{$name}0" name="$name" value="0" $no_selected /><label for="{$name}0" class="clickable_option">$lang_no</label>
			</td>
			<td class="tableb" width="10%">
				$help
			</td>
        </tr>

EOT;
}

function form_img_pkg($text, $name, $help = '')
{
    global $CONFIG;
    $help = cpg_display_help($help);


    $value = $CONFIG[$name];
    $im_selected = ($value == 'im') ? 'selected="selected"' : '';
    $gd1_selected = ($value == 'gd1') ? 'selected="selected"' : '';
    $gd2_selected = ($value == 'gd2') ? 'selected="selected"' : '';

    echo <<<EOT
        <tr>
            <td class="tableb" width="60%">
				$text
        	</td>
        	<td class="tableb" valign="top" width="50%">
				<select name="$name" class="listbox">
					<option value="im" $im_selected>Image Magick</option>
					<option value="gd1" $gd1_selected>GD version 1.x</option>
					<option value="gd2" $gd2_selected>GD version 2.x</option>
				</select>
			</td>
			<td class="tableb" width="10%">
			$help
			</td>
		</tr>

EOT;
}

function form_sort_order($text, $name, $help = '')
{
    global $CONFIG, $lang_config_php;
    
    $help = cpg_display_help($help);

    $value = $CONFIG[$name];
    $ta_selected = ($value == 'ta') ? 'selected="selected"' : '';
    $td_selected = ($value == 'td') ? 'selected="selected"' : '';
    $na_selected = ($value == 'na') ? 'selected="selected"' : '';
    $nd_selected = ($value == 'nd') ? 'selected="selected"' : '';
    $da_selected = ($value == 'da') ? 'selected="selected"' : '';
    $dd_selected = ($value == 'dd') ? 'selected="selected"' : '';

    echo <<<EOT
        <tr>
            <td class="tableb" width="50%">
                        $text
        </td>
        <td class="tableb" valign="top" width="50%">
                        <select name="$name" class="listbox">
                                <option value="ta" $ta_selected>{$lang_config_php['title_a']}</option>
                                <option value="td" $td_selected>{$lang_config_php['title_d']}</option>
                                <option value="na" $na_selected>{$lang_config_php['name_a']}</option>
                                <option value="nd" $nd_selected>{$lang_config_php['name_d']}</option>
                                <option value="da" $da_selected>{$lang_config_php['date_a']}</option>
                                <option value="dd" $dd_selected>{$lang_config_php['date_d']}</option>
                        </select>
                </td>
                <td class="tableb" width="10%">
                $help
                </td>
        </tr>

EOT;
}

function form_charset($text, $name, $help = '')
{
    global $CONFIG;
    
    $help = cpg_display_help($help);

    $charsets = array('Default' => 'language file',
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
        'Unicode' => 'utf-8',
        'Vietnamese' => 'windows-1258',
        'Western' => 'iso-8859-1'
        );

    $value = strtolower($CONFIG[$name]);

    echo <<<EOT
        <tr>
            <td class="tableb" width="50%">
                        $text
        </td>
        <td class="tableb" valign="top" width="50%">
                        <select name="$name" class="listbox">

EOT;
    foreach ($charsets as $country => $charset) {
        echo "                                <option value=\"$charset\" " . ($value == $charset ? 'selected="selected"' : '') . ">$country ($charset)</option>\n";
    }
    echo <<<EOT
                        </select>
                </td>
                <td class="tableb" width="10%">
                $help
                </td>
        </tr>

EOT;
}

function form_language($text, $name, $help = '')
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
            <td class="tableb" width="50%">
                        $text
        </td>
        <td class="tableb" valign="top" width="50%">
                        <select name="$name" class="listbox">

EOT;
    foreach ($lang_array as $language) {
        echo "                                <option value=\"$language\" " . ($value == $language ? 'selected="selected"' : '') . ">" . ucfirst($language) . "</option>\n";
    }
    echo <<<EOT
                        </select>
                </td>
                <td class="tableb" width="10%">
                $help
                </td>
        </tr>

EOT;
}

function form_theme($text, $name, $help = '')
{
    global $CONFIG;
    $help = cpg_display_help($help);


    $value = $CONFIG[$name];
    $theme_dir = 'themes/';

    $dir = opendir($theme_dir);
    while ($file = readdir($dir)) {
        if (is_dir($theme_dir . $file) && $file != "." && $file != "..") {
            $theme_array[] = $file;
        }
    }
    closedir($dir);

    natcasesort($theme_array);

    echo <<<EOT
        <tr>
            <td class="tableb" width="50%">
                        $text
        </td>
        <td class="tableb" valign="top" width="50%">
                        <select name="$name" class="listbox">

EOT;
    foreach ($theme_array as $theme) {
        echo "                                <option value=\"$theme\" " . ($value == $theme ? 'selected="selected"' : '') . ">" . strtr(ucfirst($theme), '_', ' ') . "</option>\n";
    }
    echo <<<EOT
                        </select>
                </td>
                <td class="tableb" width="10%">
                $help
                </td>
        </tr>

EOT;
}
// Added for allowing user to select which aspect of thumbnails to scale
function form_scale($text, $name, $help = '')
{
   global $CONFIG, $lang_config_php ;
   
   	$help = cpg_display_help($help);

    $value = $CONFIG[$name];
    $any_selected = ($value == 'max') ? 'selected="selected"' : '';
    $ht_selected = ($value == 'ht') ? 'selected="selected"' : '';
    $wd_selected = ($value == 'wd') ? 'selected="selected"' : '';

    echo <<<EOT
        <tr>
            <td class="tableb" width="50%">
                        $text
        </td>
        <td class="tableb" valign="top" width="50%">
                        <select name="$name" class="listbox">
                                <option value="any" $any_selected>{$lang_config_php['th_any']}</option>
                                <option value="ht" $ht_selected>{$lang_config_php['th_ht']}</option>
                                <option value="wd" $wd_selected>{$lang_config_php['th_wd']}</option>
                        </select>
                </td>
                <td class="tableb" width="10%">
                $help
                </td>
        </tr>

EOT;
}

function form_lang_theme($text, $name, $help = '')
{
    global $CONFIG, $lang_yes, $lang_no, $lang_config_php;
    $help = cpg_display_help($help);


    $value = $CONFIG[$name];
    $no_selected = ($value == '0') ? 'checked="checked"' : '';
    $yes_1_selected = ($value == '1') ? 'checked="checked"' : '';
    $yes_2_selected = ($value == '2') ? 'checked="checked"' : '';

    echo <<<EOT
        <tr>
            <td class="tableb" width="50%">
                        $text
        </td>
        <td class="tableb" valign="top" width="50%">
                        <input type="radio" id="{$name}0" name="$name" value="0" $no_selected /><label for="{$name}0" class="clickable_option">$lang_no</label>
                        &nbsp;&nbsp;
                        <input type="radio" id="{$name}1" name="$name" value="1" $yes_1_selected /><label for="{$name}1" class="clickable_option">$lang_yes:{$lang_config_php['item']}</label>
                        &nbsp;&nbsp;
                        <input type="radio" id="{$name}2" name="$name" value="2" $yes_2_selected /><label for="{$name}2" class="clickable_option">$lang_yes:{$lang_config_php['label']}+{$lang_config_php['item']}</label>
        </td>
        <td class="tableb" width="10%">
        $help
        </td>
        </tr>

EOT;
}

function form_lang_debug($text, $name, $help = '')
{
    global $CONFIG, $lang_yes, $lang_no, $lang_config_php;
    $help = cpg_display_help($help);


    $value = $CONFIG[$name];
    $no_selected = ($value == '0') ? 'checked="checked"' : '';
    $yes_1_selected = ($value == '1') ? 'checked="checked"' : '';
    $yes_2_selected = ($value == '2') ? 'checked="checked"' : '';

    echo <<<EOT
        <tr>
            <td class="tableb" width="50%">
				$text
        	</td>
        	<td class="tableb" valign="top" width="50%">
				<input type="radio" id="{$name}0" name="$name" value="0" $no_selected /><label for="{$name}0" class="clickable_option">$lang_no</label>
				&nbsp;&nbsp;
				<input type="radio" id="{$name}1" name="$name" value="1" $yes_1_selected /><label for="{$name}1" class="clickable_option">$lang_yes:{$lang_config_php['debug_everyone']}</label>
				&nbsp;&nbsp;
				<input type="radio" id="{$name}2" name="$name" value="2" $yes_2_selected /><label for="{$name}2" class="clickable_option">$lang_yes:{$lang_config_php['debug_admin']}</label>
        	</td>
        	<td class="tableb" width="10%">
        		$help
        	</td>
        </tr>

EOT;
}

function form_number_dropdown($text, $name, $help = '')
{
   global $CONFIG, $lang_config_php ;
   $help = cpg_display_help($help);


    echo <<<EOT
        <tr>
            <td class="tableb" width="50%">
                        $text
        </td>
        <td class="tableb" valign="top" width="50%">
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
                <td class="tableb" width="10%">
                $help
                </td>
        </tr>
EOT;
}

function form_lang_logmode($text, $name, $help = '')
{
    global $CONFIG, $lang_config_php;
    $help = cpg_display_help($help);


    $value = $CONFIG[$name];
    $off_selected = ($value == '0') ? 'checked="checked"' : '';
    $normal_selected = ($value == '1') ? 'checked="checked"' : '';
    $all_selected = ($value == '2') ? 'checked="checked"' : '';

    echo <<<EOT
        <tr>
            <td class="tableb" width="50%">
                        $text
        </td>
        <td class="tableb" valign="top" width="50%">
                        <input type="radio" id="{$name}0" name="$name" value="0" $off_selected /><label for="{$name}0" class="clickable_option">{$lang_config_php['no_logs']}</label>
                        &nbsp;&nbsp;
                        <input type="radio" id="{$name}1" name="$name" value="1" $normal_selected /><label for="{$name}1" class="clickable_option">{$lang_config_php['log_normal']}</label>
                        &nbsp;&nbsp;
                        <input type="radio" id="{$name}2" name="$name" value="2" $all_selected /><label for="{$name}2" class="clickable_option">{$lang_config_php['log_all']}</label>
                        &nbsp;&nbsp;
                        ( <a href="viewlog.php">{$lang_config_php['view_logs']}</a> )
        </td>
        <td class="tableb" width="10%">
        $help
        </td>
        </tr>

EOT;
}


function form_plugin_yes_no($text, $name, $help = '')
{
    global $CONFIG, $lang_yes, $lang_no,$lang_config_php;
    $help = cpg_display_help($help);


    $value = $CONFIG[$name];
    $yes_selected = $value ? 'checked="checked"' : '';
    $no_selected = !$value ? 'checked="checked"' : '';

    echo <<<EOT
        <tr>
            <td class="tableb" width="50%">
                        $text
        </td>
        <td class="tableb" valign="top" width="50%">
                        <input type="radio" id="{$name}1" name="$name" value="1" $yes_selected /><label for="{$name}1" class="clickable_option">$lang_yes</label>
                        &nbsp;&nbsp;
                        <input type="radio" id="{$name}0" name="$name" value="0" $no_selected /><label for="{$name}0" class="clickable_option">$lang_no</label>
                        ( <a href="pluginmgr.php">{$lang_config_php['manage_plugins']}</a> )
                </td>
                <td class="tableb" width="10%">
                $help
                </td>
        </tr>

EOT;
}


function create_form(&$data)
{
    foreach($data as $element) {
        if ((is_array($element))) {
        	$element[3] = (isset($element[3])) ? $element[3] : '';
        	$sn1 = max($sn1(strpos($element[0],'<a href="#notice1"')));
        	$sn2 = max($sn2(strpos($element[0],'<a href="#notice2"')));
        	$sn3 = max($sn3(strpos($element[0],'<a href="#notice3"')));
            switch ($element[2]) {
                case 0 :
                    form_input($element[0], $element[1], $element[3]);
                    break;
                case 1 :
                    form_yes_no($element[0], $element[1], $element[3]);
                    break;
                case 2 :
                    form_img_pkg($element[0], $element[1], $element[3]);
                    break;
                case 3 :
                    form_sort_order($element[0], $element[1], $element[3]);
                    break;
                case 4 :
                    form_charset($element[0], $element[1], $element[3]);
                    break;
                case 5 :
                    form_language($element[0], $element[1], $element[3]);
                    break;
                case 6 :
                    form_theme($element[0], $element[1], $element[3]);
                    break;
                // Thumbnail scaling
                case 7 :
                    form_scale($element[0], $element[1], $element[3]);
                    break;
                // Language + Theme selection
                case 8 :
                    form_lang_theme($element[0], $element[1], $element[3]);
                    break;
                // debug mode selection
                case 9 :
                    form_lang_debug($element[0], $element[1], $element[3]);
                    break;
                // tabbed display fix
                case 10 :
                    form_number_dropdown($element[0], $element[1], $element[3]);
                    break;
                case 11 :
                    form_lang_logmode($element[0], $element[1], $element[3]);
                    break;
                case 12 :
                    form_plugin_yes_no($element[0], $element[1], $element[3]);
                    break;
                default:
                    die('Invalid action');
            } // switch     
        } else {
        	form_label($element);
        }
    }
}

if (count($HTTP_POST_VARS) > 0) {
    if (isset($HTTP_POST_VARS['update_config'])) {
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

        if ($old_thumb_pfx != $HTTP_POST_VARS['thumb_pfx']) {
            $folders = array('images/', $THEME_DIR.'images/');
            foreach ($folders as $folder) {
                $thumbs = cpg_get_system_thumb_list($folder);
                foreach ($thumbs as $thumb) {
                    @rename($folder.$thumb['filename'],
                            $folder.str_replace($old_thumb_pfx,$HTTP_POST_VARS['thumb_pfx'],$thumb['filename']));
                }
            }
        }

        foreach ($need_to_be_positive as $parameter)
        $HTTP_POST_VARS[$parameter] = max(1, (int)$HTTP_POST_VARS[$parameter]);

        foreach($lang_config_data as $element) {
            if ((is_array($element))) {
                if ((!isset($HTTP_POST_VARS[$element[1]]))) cpg_die(CRITICAL_ERROR, "Missing config value for '{$element[1]}'", __FILE__, __LINE__);
                $value = addslashes($HTTP_POST_VARS[$element[1]]);
                if ($CONFIG[$element[1]] !== stripslashes($value))
                     {
                        db_query("UPDATE {$CONFIG['TABLE_CONFIG']} SET value = '$value' WHERE name = '{$element[1]}'");
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
        pageheader($lang_config_php['title']);
        msg_box($lang_config_php['info'], $lang_config_php['upd_success'], $lang_continue, 'index.php');
        pagefooter();
        exit;
    } elseif (isset($HTTP_POST_VARS['restore_config'])) {
        $default_config = 'sql/basic.sql';
        $sql_query = fread(fopen($default_config, 'r'), filesize($default_config));
        $sql_query = preg_replace('/CPG_/', $CONFIG['TABLE_PREFIX'], $sql_query);
        db_query("TRUNCATE TABLE {$CONFIG['TABLE_CONFIG']}");
        db_query("TRUNCATE TABLE {$CONFIG['TABLE_FILETYPES']}");
        $sql_query = remove_remarks($sql_query);
        $sql_query = split_sql_file($sql_query, ';');

        $sql_count = count($sql_query);
        for($i = 0; $i < $sql_count; $i++) if (strpos($sql_query[$i],'_config') || strpos($sql_query[$i],'_filetypes')) db_query($sql_query[$i]);
    }
    pageheader($lang_config_php['title']);
    msg_box($lang_config_php['info'], $lang_config_php['restore_success'], $lang_continue, $PHP_SELF);
    pagefooter();
}

pageheader($lang_config_php['title']);

$signature = 'Coppermine Photo Gallery ' . COPPERMINE_VERSION . ' ('. COPPERMINE_VERSION_STATUS . ')';

?>
<script type="text/javascript">
	onload = hideall;
</script>
<?
echo "<form action=\"$PHP_SELF\" method=\"post\">";
starttable('100%', "{$lang_config_php['title']} - $signature", 3);
create_form($lang_config_data);

	if ($sn1) echo '<tr><td><a name="notice1"></a>'.$lang_config_php['notice1'].'</td></tr>';
	if ($sn2) echo '<tr><td><a name="notice2"></a>'.$lang_config_php['notice2'].'</td></tr>'; 
	if ($sn3) echo '<tr><td><a name="notice3"></a>'.$lang_config_php['notice3'].'</td></tr>'; 
	
echo '</table></td></tr>';

echo <<<EOT
		<tr>
			<td align="left">
				<a href="javascript:expand();">Expand all</a>
			</td>
		</tr>
		<tr>
            <td colspan="3" align="center">
				<input type="submit" class="button" name="update_config" value="{$lang_config_php['save_cfg']}" />
				&nbsp;&nbsp;
				<input type="submit" class="button" name="restore_config" value="{$lang_config_php['restore_cfg']}" />
			</td>
		</tr>
EOT;
endtable();
echo '</form>';
pagefooter();
ob_end_flush();
?>