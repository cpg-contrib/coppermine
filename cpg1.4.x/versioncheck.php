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
define('VERSIONCHECK_PHP', true);

require('include/init.inc.php');

if (!GALLERY_ADMIN_MODE) { cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__); }

// define some vars
$optional_files = $_REQUEST['optional_files'];
$mandatory_files =  $_REQUEST['mandatory_files'];
$file_versions =  $_REQUEST['file_versions'];
$webcvs =  $_REQUEST['webcvs'];
$errors_only =  $_REQUEST['errors_only'];
$webroot =  $_REQUEST['webroot'];
$online =  $_REQUEST['online'];
$additional_info =  $_REQUEST['additional_info'];
$permissions =  $_REQUEST['permissions'];
$condensed_output =  $_REQUEST['condensed_output'];
if (!$_REQUEST['changes']) { // set default settings for options
    $optional_files = 1;
    $mandatory_files = 1;
    $file_versions = 1;
    $webcvs = '0';
    $errors_only = 0;
    $webroot = 0;
    $online = 1;
    $additional_info = 1;
    $permissions = 1;
    $condensed_output = 0;
}
$counter_total_files = 0;
$counter_file_mandatory_not_exist = 0;
$counter_file_optional_not_exist = 0;
$counter_cpg_version_older = 0;
$counter_cpg_version_younger = 0;
$counter_cvs_version_older = 0;
$counter_cvs_version_younger = 0;
$number_of_columns = 7;
$line_counter = 0;
$online_repository_connection = 0;
$online_repository_url = 'http://coppermine-gallery.net/cpg14x.files.txt';
if ($webcvs == 0) {$number_of_columns = $number_of_columns-1;}
if ($file_versions == 0) {$number_of_columns = $number_of_columns-2;}


// check if the file is being included as a pop-up; return the stuff from showdoc if true
if (isset($_REQUEST['pop'])) { // pop-up start
    $header = $_REQUEST['h'];
    $text = $_REQUEST['t'];
    $add_stylesheet = $_REQUEST['css'];
    $style = $_REQUEST['style'];
    $close = $_REQUEST['close'];
    $base = $_REQUEST['base'];

    if ($base != '') {
        // content of header and text have been base64-encoded - decode it now
        $header = @unserialize(@base64_decode($header));
        $text = @unserialize(@base64_decode($text));
    }
    if ($close != 1) {
        $close_link = '<br />&nbsp;<br /><div align="center"><a href="#" class="admin_menu" onclick="window.close();">close</a><br />&nbsp;</div>';
    }
    if ($header) {
        $string = "<html>\n<head>\n<title>".$header."</title>\n" . '<link rel="stylesheet" href="themes/'.$add_stylesheet.'/style.css" />' . "\n</head>\n<body>\n<h2>" . $header . "</h2>\n" . $text . "\n".$close_link."\n</body>\n</html>";
    }
    print $string;
    die;
} // pop-up end

// check if we're using a version older than cpg1.4.0, if yes use hard-coded language (english)
if (is_array($lang_versioncheck_php) == false) {
$older_version = true;
}

if (function_exists('cpg_display_help') == false ) {
function cpg_display_help($reference = '', $width = '600', $height = '350') {
global $CONFIG, $USER;
if ($reference == '' || $CONFIG['enable_help'] == '0') {return; }
if ($CONFIG['enable_help'] == '2' && GALLERY_ADMIN_MODE == false) {return; }
$help_theme = $CONFIG['theme'];
if ($USER['theme']) {
    $help_theme = $USER['theme'];
}
// check if the help icon is there. If it isn't, display a plain question mark
if (file_exists('images/help.gif') == true) { $help_icon = '<img src="images/help.gif" width="13" height="11" border="0" alt="" title="'.$lang_versioncheck_php['help'].'" />';
} else { $help_icon = '<span style="background-color:#FFFAD3;color:#000000;font-weight:bold;border:1px solid black;font-size:8pt;margin:0px;padding:0px" title="'.$lang_versioncheck_php['help'].'"> ? </span>';
}
$help_html = "<a href=\"javascript:;\" onclick=\"MM_openBrWindow('".$_SERVER['PHP_SELF']."?pop=1&amp;css=" . $help_theme . "&amp;" . $reference . "','" . uniqid(rand()) . "','scrollbars=yes,toolbar=no,status=no,resizable=yes,width=" . $width . ",height=" . $height . "')\" style=\"cursor:help;text-decoration:none\">".$help_icon."</a>";
return $help_html;
}
}

if ($condensed_output == 1) {$table_width = '-1';} else {$table_width = '100%';}

pageheader($lang_versioncheck_php['title']);
starttable($table_width, $lang_versioncheck_php['title'], $number_of_columns);
if ($additional_info != 0) { //display explanation what this file does: start
echo <<< EOT
<tr>
<td colspan="$number_of_columns" class="tableb">{$lang_versioncheck_php['what_it_does']}</td>
</tr>
EOT;
} //display explanation what this file does: start
echo <<< EOT
<style type="text/css">
.green {
        font-weight: bold;
        color: green;
}

.red {
        font-weight: bold;
        color: red;
}
.yellow {
        font-weight: bold;
        color:#FFBE00;
}
.tablegreen {
        color: #CFCFCF;
        border: 1px solid #CFCFCF;
        background-color:green;
        margin: 0px;
        padding-top: 0px;
        padding-bottom: 0px;
        padding-left: 10px;
        padding-right: 10px;
}
.tableyellow {
        color: black;
        border: 1px solid #CFCFCF;
        background-color:#FFBE00;
        margin: 0px;
        padding-top: 0px;
        padding-bottom: 0px;
        padding-left: 10px;
        padding-right: 10px;
}
.tablered {
        color: white;
        border: 1px solid #CFCFCF;
        background-color:red;
        margin: 0px;
        padding-top: 0px;
        padding-bottom: 0px;
        padding-left: 10px;
        padding-right: 10px;
}
</style>
EOT;

if (isset($older_version) && $additional_info != 0) {
    echo <<<EOT
    <tr>
    <td colspan="$number_of_columns" class="tableb">
    Support for older versions than cpg1.4.x has run out - upgrade!
    </td>
    </tr>
EOT;
}

// step x: display the options
$form_output = '<form name="versioncheck_options" action="'.$_SERVER['PHP_SELF'].'" method="get">';
$form_output .= '<tr>';
$form_output .= '<td colspan="'.$number_of_columns.'" class="tableh2"><h2>'.$lang_versioncheck_php['options'].'</h2></td>';
$form_output .= '</tr>';
$form_output .= '<tr>';
$form_output .= '<td colspan="'.$number_of_columns.'" class="tableb">';

$form_output .= '<table border="0" cellspacing="0" cellpadding="0" width="100%">';
$form_output .= '<tr>';
$form_output .= '<td class="tableb">';
if($optional_files == 1) {$option_checked = 'checked="checked"';}else{$option_checked = '';}
$option_checked = $optional_files ? 'checked="checked"' : '';
$form_output .= '<input type="Checkbox" name="optional_files" id="optional_files" value="1" '.$option_checked.' class="checkbox" /><label for="optional_files" class="clickable_option">'.$lang_versioncheck_php['show_optional_files'].'</label>';
$form_output .= '</td>';
$form_output .= '<td class="tableb">';
if($errors_only == 1) {$option_checked = 'checked="checked"';}else{$option_checked = '';}
$form_output .= '<input type="Checkbox" name="errors_only" id="errors_only" value="1" '.$option_checked.' class="checkbox" /><label for="errors_only" class="clickable_option">'.$lang_versioncheck_php['show_errors_only'].'</label>';
$form_output .= '</td>';
$form_output .= '<td class="tableb">';
if($webcvs == 0) {$option_checked = 'checked="checked"';}else{$option_checked = '';}
$form_output .= '<input type="Radio" name="webcvs" id="webcvs1" value="0" '.$option_checked.' class="radio" /><label for="webcvs1" class="clickable_option">'.$lang_versioncheck_php['no_webcvs_link'].'</label>';
$form_output .= '</td>';
$form_output .= '</tr>';
$form_output .= '<tr>';
$form_output .= '<td class="tableb">';
if($mandatory_files == 1) {$option_checked = 'checked="checked"';}else{$option_checked = '';}
$form_output .= '<input type="Checkbox" name="mandatory_files" id="mandatory_files" value="1" '.$option_checked.' class="checkbox" /><label for="mandatory_files" class="clickable_option">'.$lang_versioncheck_php['show_mandatory_files'].'</label>';
$form_output .= '</td>';
$form_output .= '<td class="tableb">';
if($webroot == 1) {$option_checked = 'checked="checked"';}else{$option_checked = '';}
$form_output .= '<input type="Checkbox" name="webroot" id="webroot" value="1" '.$option_checked.' class="checkbox" /><label for="webroot" class="clickable_option">'.$lang_versioncheck_php['coppermine_in_webroot'].'</label>';
$form_output .= '</td>';
$form_output .= '<td class="tableb">';
if($webcvs == 'stable') {$option_checked = 'checked="checked"';}else{$option_checked = '';}
$form_output .= '<input type="Radio" name="webcvs" id="webcvs2" value="stable" '.$option_checked.' class="radio" /><label for="webcvs2" class="clickable_option">'.$lang_versioncheck_php['stable_webcvs_link'].'</label>';
$form_output .= '</td>';
$form_output .= '</tr>';
$form_output .= '<tr>';
$form_output .= '<td class="tableb">';
if($additional_info == 1) {$option_checked = 'checked="checked"';}else{$option_checked = '';}
$form_output .= '<input type="Checkbox" name="additional_info" id="additional_info" value="1" '.$option_checked.' class="checkbox" /><label for="additional_info" class="clickable_option">'.$lang_versioncheck_php['show_additional_information'].'</label>';
$form_output .= '</td>';
$form_output .= '<td class="tableb">';
if($online == 1) {$option_checked = 'checked="checked"';}else{$option_checked = '';}
$form_output .= '<input type="Checkbox" name="online" id="online" value="1" '.$option_checked.' class="checkbox" /><label for="online" class="clickable_option">'.$lang_versioncheck_php['connect_online_repository'].'</label>';
$form_output .= '</td>';
$form_output .= '<td class="tableb">';
if($webcvs == 'devel') {$option_checked = 'checked="checked"';}else{$option_checked = '';}
$form_output .= '<input type="Radio" name="webcvs" id="webcvs3" value="devel" '.$option_checked.' class="radio" /><label for="webcvs3" class="clickable_option">'.$lang_versioncheck_php['devel_webcvs_link'].'</label>';
$form_output .= '</td>';
$form_output .= '</tr>';
$form_output .= '<tr>';
$form_output .= '<td class="tableb">';
if($file_versions == 1) {$option_checked = 'checked="checked"';}else{$option_checked = '';}
$form_output .= '<input type="Checkbox" name="file_versions" id="file_versions" value="1" '.$option_checked.' class="checkbox" /><label for="file_versions" class="clickable_option">'.$lang_versioncheck_php['show_file_versions'].'</label>';
$form_output .= '</td>';
$form_output .= '<td class="tableb">';
if($permissions == 1) {$option_checked = 'checked="checked"';}else{$option_checked = '';}
$form_output .= '<input type="Checkbox" name="permissions" id="permissions" value="1" '.$option_checked.' class="checkbox" /><label for="permissions" class="clickable_option">'.$lang_versioncheck_php['show_permissions'].'</label>';
$form_output .= '</td>';
$form_output .= '<td class="tableb">';
if($condensed_output == 1) {$option_checked = 'checked="checked"';}else{$option_checked = '';}
$form_output .= '<input type="Checkbox" name="condensed_output" id="condensed_output" value="1" '.$option_checked.' class="checkbox" /><label for="condensed_output" class="clickable_option">'.$lang_versioncheck_php['show_condensed_output'].'</label>';
$form_output .= '</td>';
$form_output .= '</tr>';
$form_output .= '<tr>';
$form_output .= '<td class="tablef">';

$form_output .= '</td>';
$form_output .= '<td class="tablef" align="center">';
$form_output .= '<input type="hidden" name="changes" value="1" />';
$form_output .= '<input type="submit" name="submit" value="'.$lang_versioncheck_php['submit'].'" class="button" />';
$form_output .= '</td>';
$form_output .= '<td class="tablef" align="center">';
$form_output .= '&nbsp;<input type="button" name="reset" value="'.$lang_versioncheck_php['reset_to_defaults'].'" class="button" onclick="location.href=\''.$_SERVER['PHP_SELF'].'\'" />';
$form_output .= '</td>';
$form_output .= '</tr>';
$form_output .= '</table>';

$form_output .= '</td>';
$form_output .= '</tr>';
$form_output .= '</form>';
print $form_output;


// step one:  get the data from the online repository
// connect to the online repository at sourceforge.net
if ($online != 0) { //  try to connect to the online repository: start
@ini_set("allow_url_fopen","1");
$file = @fopen ($online_repository_url, 'r');
if ($file) {
    while (!feof ($file)) {
       $line = fgets ($file, 1024);
       //if (trim($line) != '') {$line_counter++;}
       //print 'line '.$line_counter.':'.trim($line).'|<br />';
       $repository_info = explode ( '|', $line);
       if ($repository_info[0] == COPPERMINE_VERSION) {
           $line_counter++;
           $repository_filename[] = $repository_info[1];
           $repository_version[$repository_info[1]] = $repository_info[2];
           $repository_cvs[$repository_info[1]] = $repository_info[3];
           $repository_needed[$repository_info[1]] = $repository_info[4];
           $repository_readwrite[$repository_info[1]] = trim(str_replace('@', '', $repository_info[5]));
       }
    }
    if ($line_counter > 0) {$online_repository_connection = 1;}
    fclose($file);
    @ini_set("allow_url_fopen","0");
} // if ($file): end
} //  try to connect to the online repository: end


if ($online_repository_connection != 1) { // connecting to the online repository didn't work or didn't return any data
    $err_reason1 = sprintf($lang_versioncheck_php['online_repository_reason1'],'<a href="'.$online_repository_url.'" target="_blank">'.$online_repository_url.'</a>');
    $err_reason2 = sprintf($lang_versioncheck_php['online_repository_reason2'],'<a href="http://www.php.net/manual/en/ref.filesystem.php#ini.allow-url-fopen"><i>allow_url_fopen</i></a>','<a href="http://www.php.net/manual/en/function.ini-set.php"><i>ini_set</i></a>');
if ($additional_info != 0 && $online == 1) { //display warning that repository connection was not possible: start
    echo <<<EOT
    <tr>
    <td colspan="$number_of_columns" class="tableh2">
    <h2>{$lang_versioncheck_php['online_repository_unable']}</h2>
    </td>
    </tr>
    <tr><td colspan="$number_of_columns" class="tableb">
    {$lang_versioncheck_php['online_repository_noconnect']}
    <ul><li>
    $err_reason1
    </li><li>
    $err_reason2
    </li></ul>
    {$lang_versioncheck_php['online_repository_to_local']}
    </td></tr>
EOT;
//display warning that repository connection was not possible: end
} elseif ($additional_info != 0 && $online != 1)
{
    echo <<<EOT
    <tr>
    <td colspan="$number_of_columns" class="tableh2">
    <h2>{$lang_versioncheck_php['online_repository_skipped']}</h2>
    </td>
    </tr>
    <tr><td colspan="$number_of_columns" class="tableb">
    {$lang_versioncheck_php['online_repository_to_local']}
    </td></tr>
EOT;
}

    $online_repository_connection = 0;
// use the data that comes with the distribution
$local_file_name = 'repository.txt';
$file = cpg_offline_repository();
$line = explode ( '@', $file);
    foreach ($line as $value) {
       $repository_info = explode ( '|', $value);
       $repository_info[0] = trim($repository_info[0]);
       if ($repository_info[0] == COPPERMINE_VERSION) {
           $repository_filename[] = cpg_replace_albums_name($repository_info[1]);
           $repository_version[$repository_info[1]] = $repository_info[2];
           $repository_cvs[$repository_info[1]] = $repository_info[3];
           $repository_needed[$repository_info[1]] = $repository_info[4];
           $repository_readwrite[$repository_info[1]] = trim($repository_info[5]);
       }
    }
}

$currently_installed = sprintf($lang_versioncheck_php['coppermine_version_info'],'<b>' . COPPERMINE_VERSION . '</b>');
if ($additional_info != 0) { //display information about current version in use: start
echo <<<EOT
<tr>
<td colspan="$number_of_columns" class="tableh2">
<h2>{$lang_versioncheck_php['coppermine_version_header']}</h2>
</td>
</tr>
<tr><td colspan="$number_of_columns" class="tableb">
$currently_installed
<br />
{$lang_versioncheck_php['coppermine_version_explanation']}
</td></tr>
EOT;
} //display information about current version in use: end

// step two: draw the table header
echo <<< EOT
<tr>
<td colspan="$number_of_columns" class="tableh2">
<h2>{$lang_versioncheck_php['version_comparison']}</h2>
</td>
</tr>
<tr>
    <td class="tablef"><b>{$lang_versioncheck_php['folder_file']}</b></td>
    <td class="tablef" colspan="2"><b>{$lang_versioncheck_php['coppermine_version']}</b></td>
EOT;

if ($file_versions != 0) {print '    <td class="tablef" colspan="2"><b>'.$lang_versioncheck_php['file_version'].'</b></td>';}
if ($webcvs != '0') {print '    <td class="tablef"><b>'.$lang_versioncheck_php['webcvs'].'</b></td>';}
print '</tr>';




// step three: go through all files that exist in the repository and check if they're on the webserver as well
if ($webroot == 1) {
$dir = ''; // this is the place to start browsing for root folders
} else {
$dir = '../'.cpg_get_coppermine_path().'/'; // this is the place to start browsing
}

if (is_array($repository_filename)) {
    foreach ($repository_filename as $rep_file) { //foreach start
        $counter_total_files++;
        $file_info = cpg_get_path_and_file($rep_file);
        cpg_output_version_row(cpg_get_fileversion($dir.$file_info['path'], $file_info['file']), $file_info, $file_info['file']);
    } //foreach end
} else {
echo <<<EOT
<tr>
<td colspan="$number_of_columns" class="tableb"><b>{$lang_versioncheck_php['error_no_data']}</b></td>
</tr>
EOT;
}

// show summary
$number_of_columns_minus_one = $number_of_columns - 1;
if ($counter_file_mandatory_not_exist == 0){$style_mandatory_files='';}else{$style_mandatory_files='red';}
if ($counter_file_optional_not_exist == 0){$style_optional_files='';}else{$style_optional_files='yellow';}
if ($counter_cpg_version_older == 0){$style_cpg_version_older='tableb';}else{$style_cpg_version_older='tablered';}
if ($counter_cvs_version_older == 0){$style_cvs_version_older='tableb';}else{$style_cvs_version_older='tablered';}

echo <<<EOT
<tr>
  <td colspan="$number_of_columns" class="tableh2">
    <h2>{$lang_versioncheck_php['summary']}</h2>
  </td>
</tr>
<tr>
  <td class="tableb">
    {$lang_versioncheck_php['total']}:
  </td>
  <td colspan="$number_of_columns_minus_one" class="tableb">
    $counter_total_files
  </td>
</tr>
<tr>
  <td class="tableb">
    {$lang_versioncheck_php['mandatory_files_missing']}:
  </td>
  <td colspan="$number_of_columns_minus_one" class="tableb">
    <span class="$style_mandatory_files">
    $counter_file_mandatory_not_exist
    </span>
  </td>
</tr>
<tr>
  <td class="tableb">
    {$lang_versioncheck_php['optional_files_missing']}:
  </td>
  <td colspan="$number_of_columns_minus_one" class="tableb">
    <span class="$style_optional_files">
    $counter_file_optional_not_exist
    </span>
  </td>
</tr>
<tr>
  <td class="tableb">
    {$lang_versioncheck_php['files_from_older_version']}:
  </td>
  <td colspan="$number_of_columns_minus_one" class="$style_cpg_version_older">
    $counter_cpg_version_older
  </td>
</tr>
<tr>
  <td class="tableb">
    {$lang_versioncheck_php['file_version_outdated']}:
  </td>
  <td colspan="$number_of_columns_minus_one" class="$style_cvs_version_older">
    $counter_cvs_version_older
  </td>
</tr>
EOT;


endtable();
print '<br />';
pagefooter();


////////////////////////////////// functions ///////////////////////////////

function cpg_get_coppermine_path() {
global $ORIGINAL_PHP_SELF;
$return = str_replace('/', '',strrchr(str_replace('/'.str_replace('/', '',strrchr($ORIGINAL_PHP_SELF, '/')), '', $ORIGINAL_PHP_SELF),'/'));
return $return;
}

function cpg_get_path_and_file($string) {
    // check if $string contains delimiter that triggers replacement
    $delimiter = '**';
    while (strstr($string, $delimiter) == TRUE) {
        $string = cpg_replace_vars_from_config($string, $delimiter);
    }
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

function cpg_replace_vars_from_config($string, $delimiter = '**') {
  global $CONFIG;
  // check the string for $delimiter and replace the stuff within $delimiter with the config values
  $asterisk = '';
  $asterisk = strstr($string, $delimiter); // now the full string starting from the first $delimiter is in $asterrisk
  $asterisk = ltrim($asterisk, $delimiter); // trim the first to $delimiter
  $asterisk = str_replace(strstr($asterisk, $delimiter), '', $asterisk); // trim the bits after and including the remaining $delimiter. Now $asterisk contains only the keyword
  // replace the keyword and $delimiter in $string with the actual $CONFIG value
  $string = str_replace($delimiter.$asterisk.$delimiter, rtrim($CONFIG[$asterisk],'/'), $string);
  return $string;
}

function cpg_get_fileversion($folder  = '',$file = '') {
    $handle = @fopen($folder.$file, 'r');
    $blob = @fread($handle, filesize($folder.$file));
    @fclose($handle);
    $cvs_string1 = '$'.'I'.'d'.':';
    $cvs_string2 = '$'.'Revision'.':';
    $cpg_version_determination = 'Coppermine' . ' ' . 'version:';

    $blob = str_replace('<?php','',$blob);

    // Determine the cpg version
    $return['cpg_version'] = substr($blob,strpos($blob, $cpg_version_determination)); // chop off the first bit up to the string $cpg_version_determination
    $double_slash_position = strpos($return['cpg_version'], '//');
    if ($double_slash_position) {
       $return['cpg_version'] = substr($return['cpg_version'],0,$double_slash_position);
    }
    $return['cpg_version'] = trim(str_replace($cpg_version_determination, '', $return['cpg_version']));
    $return['cpg_version'] = trim(str_replace('#', '', $return['cpg_version']));
    $return['cpg_version'] = trim(substr($return['cpg_version'], 0, strpos($return['cpg_version'], '$')));
    if (strlen($return['cpg_version']) > 6) {$return['cpg_version']='n/a';}

    // Fallback to the "old" cpg version determination method if no result (for compatibility with older versions)
    if ($return['cpg_version'] == '') {
      $return['cpg_version'] = substr($blob,strpos($blob, 'Coppermine Photo Gallery'));
      $return['cpg_version'] = substr($return['cpg_version'],0,strpos($return['cpg_version'], '//'));
      $return['cpg_version'] = trim(str_replace('Coppermine Photo Gallery', '', $return['cpg_version']));
      if (strlen($return['cpg_version']) > 6) {$return['cpg_version']='n/a';}
    }

    // Determine file (cvs) revision
    $return['cvs_version'] = str_replace($cvs_string2, '', substr($blob,strpos($blob, $cvs_string2),25));
    $return['cvs_version'] = trim(substr($return['cvs_version'], 0, strpos($return['cvs_version'], '$')));

    // Fallback to the "old" revision determination method if no result (for compatibility with older versions)
    if ($return['cvs_version'] == '' || !is_numeric($return['cvs_version'])) {
      $return['cvs_version'] = substr($blob,strpos($blob, $cvs_string1));
      $return['cvs_version'] = substr($return['cvs_version'],0,strpos($return['cvs_version'], 'Exp'));
      $return['cvs_version'] = str_replace($cvs_string1, '', $return['cvs_version']);
      // get rid of the filename inside the string
      $return['cvs_version'] = trim(str_replace($file.',v ', '',$return['cvs_version']));
      $return['cvs_version'] = str_replace('v ', '', $return['cvs_version']);
      //if ($file=='picmgmt.inc.php' || $file=='index.php') {print $folder.$file.':'.$return['cvs_version'].'<br />';}
      $return['cvs_version'] = trim(str_replace(strstr($return['cvs_version'], ' '), '', $return['cvs_version']));
    }
    if (strlen($return['cvs_version']) > 5) {$return['cvs_version']='n/a';}

    if (file_exists($folder.$file)) {
        $return['exists'] = 1;
    } else {
        $return['exists'] = 0;
    }

    if($file == '') { //we have a folder here. Check if it's writable
        $return['writable'] = cpg_is_writable($folder);
    }
// check for the existance of a folder
$return['is_dir'] = 0;
if ($file == '') {
if ($handle = @opendir($folder.$file)) {
$return['is_dir'] = 1;
@closedir($handle);
}
}
return $return;
}

function cpg_is_writable($folder)
{
$return = 0;
$file_content = "this is just a test file that hasn't been deleted properly.\nIt's safe to delete it now";
@unlink($folder.'/cpgvc_tf.txt');
if ($fd = @fopen($folder.'/cpgvc_tf.txt', 'w')) {
    @fwrite($fd, $file_content);
    @fclose($fd);
    @unlink($folder.'/cpgvc_tf.txt');
    $return = 1;
} else {
    $return = -1;
}
return $return;
}

function cpg_output_version_row($file_version_info = '', $file_path = '', $cpg_is_file='') {
global $repository_filename, $repository_version, $repository_cvs, $repository_needed, $repository_readwrite, $lang_versioncheck_php, $counter_file_mandatory_not_exist, $counter_file_optional_not_exist, $counter_cpg_version_older, $counter_cpg_version_younger, $counter_cvs_version_older, $counter_cvs_version_younger, $optional_files, $webcvs, $file_versions, $errors_only,$permissions, $mandatory_files;
$file_complete_path = $file_path['path'].$file_path['file'];
// don't return anything if the options are set to filter optional files the actual file IS optional
if ($optional_files != 1 && $repository_needed[$file_complete_path] == 'optional') {return;}
if ($mandatory_files != 1 && $repository_needed[$file_complete_path] == 'mandatory') {return;}
$error_counter = 0;
ob_start(); // stop output temporarily
print '<tr>';
print '<td class="tableb">';
print '<a href="'.$file_path['path'].$file_path['file'].'">';
if ($cpg_is_file == '') {
print '<img src="images/folder.gif" width="16" height="16" border="0" alt="" title="" align="left" style="margin-left:0px;margin-right:10px" />';
} else {
print '<img src="images/spacer.gif" width="10" height="15" border="0" alt="" title="" style="border:1px solid black;margin-left:2px;margin-right:12px;background-color:#FFFFFF" align="left">';
}
print '</a>';
$help_ouput = '';
if ($file_version_info['exists'] == 1) {
    $stylecolor = '';
    $helptitle = '';
} else {
    if ($repository_needed[$file_complete_path] == 'optional') {
        $stylecolor = 'yellow';
        $helptitle = $lang_versioncheck_php['help_file_not_exist_optional1'];
        $helpoutput = sprintf($lang_versioncheck_php['help_file_not_exist_optional2'], '&quot;<i>'.$file_complete_path.'</i>&quot;');
        $counter_file_optional_not_exist++;
        $error_counter++;
    } else {
        $stylecolor = 'red';
        $helptitle = $lang_versioncheck_php['help_file_not_exist_mandatory1'];
        $helpoutput = sprintf($lang_versioncheck_php['help_file_not_exist_mandatory2'], '&quot;<i>'.$file_complete_path.'</i>&quot;');
        $counter_file_mandatory_not_exist++;
        $error_counter++;
    }
}
print '<span class="'.$stylecolor.'" title="'.$helptitle.'">';
print $file_path['path'];
print $file_path['file'];
print '</span>';
if ($stylecolor != '') {
    print '&nbsp;';
    print cpg_display_help('f=index.html&amp;base=64&amp;h='.urlencode(base64_encode(serialize($helptitle))).'&amp;t='.urlencode(base64_encode(serialize($helpoutput))),400,150);
}


// writable ? start
if (!$cpg_is_file && $permissions == 1) { // we have a folder: start
    $stylecolor = '';
    $writable_output = '';
    $helptitle = '';
    $helpoutput = '';
    // check if the writable icon is there. If it isn't, display a plain text
    if (file_exists('images/writable_true_wrong.gif') == true && file_exists('images/writable_true_right.gif') == true && file_exists('images/writable_false_wrong.gif') == true && file_exists('images/writable_false_right.gif') == true) { // image files exist: start
        $writable_true_wrong = '<img src="images/writable_true_wrong.gif" width="13" height="15" border="0" alt="" style="" title="'.$lang_versioncheck_php['writable'].'" />';
        $writable_true_right = '<img src="images/writable_true_right.gif" width="13" height="15" border="0" alt="" style="" title="'.$lang_versioncheck_php['writable'].'" />';
        $writable_false_wrong = '<img src="images/writable_false_wrong.gif" width="13" height="15" border="0" alt="" style="" title="'.$lang_versioncheck_php['not_writable'].'" />';
        $writable_false_right = '<img src="images/writable_false_right.gif" width="13" height="15" border="0" alt="" style="" title="'.$lang_versioncheck_php['not_writable'].'" />';
        $writable_false_undetermined = '<img src="images/writable_false_wrong.gif" width="13" height="15" border="0" alt="" style="border-width:1px;border-style:solid;border-color:yellow;" title="?" />';
    } else { // image files exist: end
        $writable_true_wrong = '(<span class="yellow">'.$lang_versioncheck_php['writable'].'</span>)';
        $writable_true_right = '(<span class="green">'.$lang_versioncheck_php['writable'].'</span>)';
        $writable_false_wrong = '(<span class="red">'.$lang_versioncheck_php['not_writable'].'</span>)';
        $writable_false_right = '(<span class="green">'.$lang_versioncheck_php['not_writable'].'</span>)';
        $writable_false_undetermined = '(<span class="yellow">?</span>';
    }
    if ($repository_readwrite[$file_complete_path] == 'w') {
        if ($file_version_info['writable'] == '-1') {
            $stylecolor = 'red';
            $writable_output = $writable_false_wrong;
            $helptitle = $lang_versioncheck_php['help_not_writable1'];
            $helpoutput = sprintf($lang_versioncheck_php['help_not_writable2'], '&quot;<i>'.$file_complete_path.'</i>&quot;');
            $error_counter++;
        } elseif ($file_version_info['writable'] == 1) {
            $stylecolor = 'green';
            $writable_output = $writable_true_right;
        } elseif ($file_version_info['writable'] == 0) {
            $stylecolor = 'yellow';
            $writable_output = $writable_false_undetermined;
            $helptitle = $helptitle = $lang_versioncheck_php['help_not_writable1'];
            $helpoutput = sprintf($lang_versioncheck_php['help_writable_undetermined'], '&quot;<i>'.$file_complete_path.'</i>&quot;');
            $error_counter++;
        }
    } elseif ($repository_readwrite[$file_complete_path] == 'r') {
        if ($file_version_info['writable'] == '-1') {
            $stylecolor = 'green';
            $writable_output = $writable_false_right;
        } elseif ($file_version_info['writable'] == 1) {
            $stylecolor = 'yellow';
            $writable_output = $writable_true_wrong;
            $helptitle = $lang_versioncheck_php['help_writable1'];
            $helpoutput = sprintf($lang_versioncheck_php['help_writable2'], '&quot;<i>'.$file_complete_path.'</i>&quot;');
            $error_counter++;
        } elseif ($file_version_info['writable'] == 0) {
            $stylecolor = 'yellow';
            $writable_output = $writable_false_undetermined;
            $helptitle = $lang_versioncheck_php['help_not_writable1'];
            $helpoutput = sprintf($lang_versioncheck_php['help_writable_undetermined'], '&quot;<i>'.$file_complete_path.'</i>&quot;');
            $error_counter++;
        }
    }
    print ' ';
    print $writable_output;
    if ($helptitle != '') {
        print '&nbsp;';
        print cpg_display_help('f=index.html&amp;base=64&amp;h='.urlencode(base64_encode(serialize($helptitle))).'&amp;t='.urlencode(base64_encode(serialize($helpoutput)).'&amp;css=1'),400,150);
        $helptitle = '';
        $helpoutput = '';
    }
} // we have a folder: end
// writable ? end


print '</td>';
// cpg version start
    $cvs_version_check = 'enable';
    if (!$repository_version[$file_complete_path]) {
        $repository_version[$file_complete_path] = '?';
    }
    if ($file_version_info['exists'] != 1)
    {
        print '<td class="tableb" colspan="2" align="center">-</td><td class="tableb">';
        $helptitle = '';
    } elseif (!$file_version_info['cpg_version'] && $repository_version[$file_complete_path] == '?') {
        print '<td class="tableb" colspan="2" align="center">';
        print 'n/a';
    } elseif ((!$file_version_info['cpg_version'] || $file_version_info['cpg_version'] == 'n/a') && $repository_version[$file_complete_path] != '?') {
        $cvs_version_check = 'disable';
        print '<td class="tableb" align="right" title="'.$lang_versioncheck_php['your_file'].'">';
        print '?';
        print cpg_vc_help($lang_versioncheck_php['help_no_local_version1'],$lang_versioncheck_php['help_no_local_version2']);
        print '</td><td class="tableb" title="'.$lang_versioncheck_php['reference_file'].'">';
        print $repository_version[$file_complete_path];
        $counter_cpg_version_older++;
        $error_counter++;
    } elseif ((!$file_version_info['cpg_version'] || $file_version_info['cpg_version'] == 'n/a') && $repository_version[$file_complete_path] == '?') {
        $cvs_version_check = 'disable';
        print '<td class="tableb" colspan="2" align="center">';
        print '-';
    } elseif ($file_version_info['cpg_version'] == $repository_version[$file_complete_path]) {
        print '<td class="tablegreen" align="right" class="green" title="'.$lang_versioncheck_php['your_file'].'">';
        print $file_version_info['cpg_version'];
        print '</td><td class="tablegreen" title="'.$lang_versioncheck_php['reference_file'].'">';
        print $file_version_info['cpg_version'];
    } elseif ($file_version_info['cpg_version'] < $repository_version[$file_complete_path]) {
        $cvs_version_check = 'disable';
        print '<td class="tablered" align="right" title="'.$lang_versioncheck_php['your_file'].'">';
        print $file_version_info['cpg_version'];
        print cpg_vc_help($lang_versioncheck_php['help_local_version_outdated1'],$lang_versioncheck_php['help_local_version_outdated2']);
        print '</td><td class="tableb" title="'.$lang_versioncheck_php['reference_file'].'">';
        print $repository_version[$file_complete_path];
        $counter_cpg_version_older++;
        $error_counter++;
    } elseif ($file_version_info['cpg_version'] > $repository_version[$file_complete_path]) {
        $cvs_version_check = 'disable';
        print '<td class="tableb" align="right" title="'.$lang_versioncheck_php['your_file'].'">';
        print $file_version_info['cpg_version'];
        print '</td><td class="tableyellow" title="'.$lang_versioncheck_php['reference_file'].'">';
        print $repository_version[$file_complete_path];
        print cpg_vc_help($lang_versioncheck_php['help_local_version_dev1'],$lang_versioncheck_php['help_local_version_dev2']);
        $counter_cpg_version_younger++;
        $error_counter++;
    } else {
        $cvs_version_check = 'disable';
        print '<td class="tablered" align="right" title="'.$lang_versioncheck_php['your_file'].'">';
        print $file_version_info['cpg_version'];
        print '</td><td class="tablered" title="'.$lang_versioncheck_php['reference_file'].'">';
        print $repository_version[$file_complete_path];
        $counter_cpg_version_older++;
        $error_counter++;
    }
// cpg version end
print '</td>';
if ($file_versions == 1) { //display file versions: start
//print '<td class="tableb">';
// cvs version start
    $helptitle = '';
    if($file_version_info['cvs_version'] == '//') {$file_version_info['cvs_version'] = '';}
    if ($cvs_version_check != 'disable') {
        if (!$repository_cvs[$file_complete_path]) {
            $repository_cvs[$file_complete_path] = '?';
        }
        if ($file_version_info['exists'] != 1)
        {
            print '<td class="tableb" colspan="2" align="center">-';
        } elseif (!$file_version_info['cvs_version'] && $repository_cvs[$file_complete_path] == '?') {
            print '<td class="tableb" colspan="2" align="center">n/a';
        } elseif ($file_version_info['cvs_version'] == 'n/a' && $file_version_info['cvs_version'] == 'n/a') {
            print '<td class="tableb" colspan="2" align="center" title="'.$lang_versioncheck_php['your_file'].'">n/a';
        } elseif (!$file_version_info['cvs_version'] || $file_version_info['cvs_version'] == 'n/a') {
            print '<td class="tablered" align="right" title="'.$lang_versioncheck_php['your_file'].'">';
            print $file_version_info['cvs_version'];
            print cpg_vc_help($lang_versioncheck_php['help_local_version_na1'],$lang_versioncheck_php['help_local_version_na2']);
            print '</td>';
            print '<td class="tableb" title="'.$lang_versioncheck_php['reference_file'].'">';
            print $repository_cvs[$file_complete_path];
            $counter_cvs_version_older++;
            $error_counter++;
        } elseif (cpg_version_compare($file_version_info['cvs_version']) == cpg_version_compare($repository_cvs[$file_complete_path])) {
            print '<td class="tablegreen" align="right" title="'.$lang_versioncheck_php['your_file'].'">';
            print $file_version_info['cvs_version'];
            print '</td>';
            print '<td class="tablegreen" align="left" title="'.$lang_versioncheck_php['reference_file'].'">';
            print $repository_cvs[$file_complete_path];
        } elseif (cpg_version_compare($file_version_info['cvs_version']) < cpg_version_compare($repository_cvs[$file_complete_path])) {
            print '<td class="tablered" align="right" title="'.$lang_versioncheck_php['your_file'].'">';
            print $file_version_info['cvs_version'];
            print cpg_vc_help($lang_versioncheck_php['help_local_version_outdated1'],$lang_versioncheck_php['help_local_version_outdated2']);
            print '</td>';
            print '<td class="tableb" title="'.$lang_versioncheck_php['reference_file'].'">';
            print $repository_cvs[$file_complete_path];
            $counter_cvs_version_older++;
            $error_counter++;
        } elseif (cpg_version_compare($file_version_info['cvs_version']) > cpg_version_compare($repository_cvs[$file_complete_path])) {
            print '<td class="tableb" align="right" title="'.$lang_versioncheck_php['your_file'].'">';
            print $file_version_info['cvs_version'];
            print '</td>';
            print '<td class="tableyellow" title="'.$lang_versioncheck_php['reference_file'].'">';
            print $repository_cvs[$file_complete_path];
            print cpg_vc_help($lang_versioncheck_php['help_local_version_dev1'],$lang_versioncheck_php['help_local_version_dev2']);
            $counter_cvs_version_younger++;
            $error_counter++;
        } else {
            print '<td class="tablered" align="right" title="'.$lang_versioncheck_php['your_file'].'">';
            print $file_version_info['cvs_version'];
            print cpg_vc_help($lang_versioncheck_php['help_local_version_outdated1'],$lang_versioncheck_php['help_local_version_outdated2']);
            print '</td>';
            print '<td class="tablered" title="'.$lang_versioncheck_php['reference_file'].'">';
            print $repository_cvs[$file_complete_path];
            $counter_cvs_version_older++;
            $error_counter++;
        }
    } else {
            print '<td class="tableb" colspan="2" align="center">-</td>';
    }
// cvs version end
print '</td>';
} //display file versions: end
if ($webcvs != '0') {
print '<td class="tableb">';
// web cvs start
$webcvslink = 'http://svn.sourceforge.net/viewcvs.cgi/coppermine/trunk/';
if ($webcvs == "devel") {$webcvslink .= 'cpg1.5.x/';} else {$webcvslink .= 'cpg1.4.x/';}
$webcvslink .= $file_complete_path;
print sprintf($lang_versioncheck_php['go_to_webcvs'],'<a href="'.$webcvslink.'">'.$lang_versioncheck_php['webcvs'].'</a>');
// web cvs end
print "</td>";
}
print "</tr>\n";
$string = ob_get_contents();
ob_end_clean();
// don't return anything if the options are set to filter stuff and the conditions match
if ($errors_only == '1' && $error_counter == 0) {return;}
print $string;
} //end of function

function cpg_replace_albums_name($path) {
global $CONFIG;
//split the $path var
$second_part = ltrim(strstr($path, '/'),'/');
$first_part = str_replace($second_part, '', $path);
$third_part = ltrim(strstr($second_part, '/'),'/');
$second_part = str_replace($third_part, '', $second_part);
if ($first_part == 'albums/') {$first_part = $CONFIG['fullpath'];}
if ($second_part == 'userpics/') {$second_part = $CONFIG['userpics'];}
if ($second_part == 'userpics' && $third_part == '') {$second_part = rtrim($CONFIG['userpics'], '/');}
$return = $first_part.$second_part.$third_part;
if ($return == 'albums'){$return = rtrim($CONFIG['fullpath'], '/');}
return $return;
}

function cpg_version_compare($version)
{
    $return = '';
    $version_info = explode ( '.', $version);
    for ($i=0;$i<count($version_info);$i++) {
        $power = @pow('100',count($version_info)-$i)*$version_info[$i];
        $return = $return + $power;
    }
    return $return;
}

function cpg_vc_help($helptitle='',$helpoutput='') {
   $return= '';
   if ($helptitle != '') {
      $return = '&nbsp;';
      $return .= cpg_display_help('f=index.html&amp;base=64&amp;h='.urlencode(base64_encode(serialize($helptitle))).'&amp;t='.urlencode(base64_encode(serialize($helpoutput))),400,150);

   }
   return $return;
}

function cpg_offline_repository() {
$return = '
1.4.0|addfav.php|1.4.0|1.15|mandatory|r@
1.4.0|addpic.php|1.4.0|1.11|mandatory|r@
1.4.0|admin.php|1.4.0|1.14|mandatory|r@
1.4.0|albmgr.php|1.4.0|1.13|mandatory|r@
1.4.0|anycontent.php|1.4.0|1.10|mandatory|r@
1.4.0|banning.php|1.4.0|1.20|mandatory|r@
1.4.0|bridgemgr.php|1.4.0|1.13|mandatory|r@
1.4.0|calendar.php|1.4.0|1.2|mandatory|r@
1.4.0|catmgr.php|1.4.0|1.22|mandatory|r@
1.4.0|db_ecard.php|1.4.0|1.11|mandatory|r@
1.4.0|db_input.php|1.4.0|1.39|mandatory|r@
1.4.0|delete.php|1.4.0|1.18|mandatory|r@
1.4.0|displayecard.php|1.4.0|1.9|mandatory|r@
1.4.0|displayimage.php|1.4.0|1.84|mandatory|r@
1.4.0|ecard.php|1.4.0|1.23|mandatory|r@
1.4.0|editOnePic.php|1.4.0|1.27|mandatory|r@
1.4.0|editpics.php|1.4.0|1.29|mandatory|r@
1.4.0|exifmgr.php|1.4.0|1.6|mandatory|r@
1.4.0|faq.php|1.4.0|1.5|mandatory|r@
1.4.0|forgot_passwd.php|1.4.0|1.12|mandatory|r@
1.4.0|getlang.php|1.4.0|1.8|mandatory|r@
1.4.0|groupmgr.php|1.4.0|1.19|mandatory|r@
1.4.0|hitDetails.php|1.4.0|1.1|mandatory|r@
1.4.0|image_processor.php|1.4.0|1.16|mandatory|r@
1.4.0|index.php|1.4.0|1.71|mandatory|r@
1.4.0|install.php|1.4.0|1.26|mandatory|r@
1.4.0|installer.css|1.4.0|1.5|mandatory|r@
1.4.0|keyword_create_dict.php|1.4.0|1.3|mandatory|r@
1.4.0|keyword_select.php|1.4.0|1.3|mandatory|r@
1.4.0|keywordmgr.php|1.4.0|1.4|mandatory|r@
1.4.0|login.php|1.4.0|1.18|mandatory|r@
1.4.0|logout.php|1.4.0|1.5|mandatory|r@
1.4.0|mode.php|1.4.0|1.2|mandatory|r@
1.4.0|modifyalb.php|1.4.0|1.23|mandatory|r@
1.4.0|phpinfo.php|1.4.0|1.8|mandatory|r@
1.4.0|picEditor.php|1.4.0|1.19|mandatory|r@
1.4.0|picmgr.php|1.4.0|1.7|mandatory|r@
1.4.0|pluginmgr.php|1.4.0|1.12|mandatory|r@
1.4.0|profile.php|1.4.0|1.32|mandatory|r@
1.4.0|ratepic.php|1.4.0|1.11|mandatory|r@
1.4.0|register.php|1.4.0|1.20|mandatory|r@
1.4.0|reviewcom.php|1.4.0|1.14|mandatory|r@
1.4.0|scripts.js|1.4.0|1.7|mandatory|r@
1.4.0|search.php|1.4.0|1.8|mandatory|r@
1.4.0|searchnew.php|1.4.0|1.38|mandatory|r@
1.4.0|showthumb.php|1.4.0|1.8|mandatory|r@
1.4.0|thumbnails.php|1.4.0|1.20|mandatory|r@
1.4.0|update.php|1.4.0|1.17|mandatory|r@
1.4.0|upgrade-1.0-to-1.2.php|1.4.0|1.7|mandatory|r@
1.4.0|upload.php|1.4.0|1.60|mandatory|r@
1.4.0|usermgr.php|1.4.0|1.29|mandatory|r@
1.4.0|util.php|1.4.0|1.23|mandatory|r@
1.4.0|versioncheck.php|1.4.0|1.41|mandatory|r@
1.4.0|viewlog.php|1.4.0|1.8|mandatory|r@
1.4.0|voteDetails.php|1.4.0|1.1|mandatory|r@
1.4.0|xp_publish.php|1.4.0|1.23|mandatory|r@
1.4.0|zipdownload.php|1.4.0|1.8|mandatory|r@
1.4.0|albums|||mandatory|w@
1.4.0|albums/index.html||1.2|mandatory|w@
1.4.0|albums/edit/index.html|||mandatory|w@
1.4.0|albums/edit|||mandatory|w@
1.4.0|albums/edit/index.html|||mandatory|w@
1.4.0|albums/userpics|||mandatory|w@
1.4.0|albums/userpics/index.html||1.2|mandatory|w@
1.4.0|bridge/invisionboard.inc.php|1.4.0|1.19|optional|r@
1.4.0|bridge/mambo.inc.php|1.4.0|1.7|optional|r@
1.4.0|bridge/phpbb.inc.php|1.4.0|1.29|optional|r@
1.4.0|bridge/smf.inc.php|1.4.0|1.27|optional|r@
1.4.0|bridge/vbulletin23.inc.php|1.4.0|1.13|optional|r@
1.4.0|bridge/vbulletin30.inc.php|1.4.0|1.15|optional|r@
1.4.0|bridge/woltlab21.inc.php|1.4.0|1.18|optional|r@
1.4.0|bridge/yabbse.inc.php|1.4.0|1.30|optional|r@
1.4.0|docs|||mandatory|r@
1.4.0|docs/credits.html||1.12|optional|r@
1.4.0|docs/faq.htm|||optional|r@
1.4.0|docs/index.htm||1.12|mandatory|r@
1.4.0|docs/README.html||1.17|optional|r@
1.4.0|docs/showdoc.php|1.4.0|1.11|mandatory|r@
1.4.0|docs/theme.htm|||optional|r@
1.4.0|docs/translation.htm|||optional|r@
1.4.0|docs/pics|||mandatory|r@
1.4.0|include|||mandatory|w@
1.4.0|include/archive.php|1.4.0|1.3|mandatory|r@
1.4.0|include/config.inc.php|||mandatory|r@
1.4.0|include/crop.inc.php|1.4.0|1.11|mandatory|r@
1.4.0|include/debugger.inc.php|1.4.0|1.5|mandatory|r@
1.4.0|include/exif.php|1.4.0|1.3|mandatory|r@
1.4.0|include/exif_php.inc.php|1.4.0|1.13|mandatory|r@
1.4.0|include/exifReader.inc.php|1.4.0|1.5|mandatory|r@
1.4.0|include/functions.inc.php|1.4.0|1.134|mandatory|r@
1.4.0|include/imageObjectGD.class.php|1.4.0|1.6|mandatory|r@
1.4.0|include/imageObjectIM.class.php|1.4.0|1.6|mandatory|r@
1.4.0|include/index.html|||mandatory|r@
1.4.0|include/init.inc.php|1.4.0|1.71|mandatory|r@
1.4.0|include/iptc.inc.php|1.4.0|1.6|mandatory|r@
1.4.0|include/keyword.inc.php|1.4.0|1.4|mandatory|r@
1.4.0|include/langfallback.inc.php|1.4.0|1.24|mandatory|r@
1.4.0|include/logger.inc.php|1.4.0|1.12|mandatory|r@
1.4.0|include/mailer.inc.php|1.4.0|1.10|mandatory|r@
1.4.0|include/media.functions.inc.php|1.4.0|1.9|mandatory|r@
1.4.0|include/picmgmt.inc.php|1.4.0|1.27|mandatory|r@
1.4.0|include/plugin_api.inc.php|1.4.0|1.11|mandatory|r@
1.4.0|include/search.inc.php|1.4.0|1.11|mandatory|r@
1.4.0|include/select_lang.inc.php|1.4.0|1.7|mandatory|r@
1.4.0|include/slideshow.inc.php|1.4.0|1.10|mandatory|r@
1.4.0|include/smilies.inc.php|1.4.0|1.12|mandatory|r@
1.4.0|include/smtp.inc.php|1.4.0|1.2|mandatory|r@
1.4.0|include/sql_parse.php|1.4.0|1.5|mandatory|r@
1.4.0|include/zip.lib.php|1.4.0|1.2|mandatory|r@
1.4.0|include/makers|||mandatory|w@
1.4.0|include/makers/canon.php|1.4.0|1.2|mandatory|r@
1.4.0|include/makers/fujifilm.php|1.4.0|1.2|mandatory|r@
1.4.0|include/makers/gps.php|1.4.0|1.2|mandatory|r@
1.4.0|include/makers/nikon.php|1.4.0|1.2|mandatory|r@
1.4.0|include/makers/olympus.php|1.4.0|1.2|mandatory|r@
1.4.0|include/makers/sanyo.php|1.4.0|1.2|mandatory|r@
1.4.0|lang|||mandatory|r@
1.4.0|lang/arabic.php|1.3.0|1.5|optional|r@
1.4.0|lang/arabic-utf-8.php|1.3.0|1.3|optional|r@
1.4.0|lang/brazilian_portuguese.php|1.3.0|1.6|optional|r@
1.4.0|lang/brazilian_portuguese-utf-8.php|1.3.0|1.6|optional|r@
1.4.0|lang/bulgarian.php|1.3.0|1.5|optional|r@
1.4.0|lang/bulgarian-utf-8.php|1.3.2|1.5|optional|r@
1.4.0|lang/chinese_big5.php|1.3.2|1.6|optional|r@
1.4.0|lang/chinese_big5-utf-8.php|1.3.0|1.6|optional|r@
1.4.0|lang/chinese_gb.php|1.3.0|1.5|optional|r@
1.4.0|lang/chinese_gb-utf-8.php|1.3.0|1.5|optional|r@
1.4.0|lang/catalan.php|1.3.2|1.1|optional|r@
1.4.0|lang/catalan-utf-8.php|1.3.2|1.1|optional|r@
1.4.0|lang/croatian.php|1.3.0|1.5|optional|r@
1.4.0|lang/croatian-utf-8.php|1.3.2|1.6|optional|r@
1.4.0|lang/czech.php|1.3.0|1.6|optional|r@
1.4.0|lang/czech-utf-8.php|1.3.0|1.6|optional|r@
1.4.0|lang/danish.php|1.3.0|1.11|optional|r@
1.4.0|lang/danish-utf-8.php|1.3.0|1.6|optional|r@
1.4.0|lang/dutch.php|1.3.2|1.12|optional|r@
1.4.0|lang/dutch-utf-8.php|1.3.2|1.12|optional|r@
1.4.0|lang/english.php|1.4.0|1.211|mandatory|r@
1.4.0|lang/english-utf-8.php|1.3.0|1.14|mandatory|r@
1.4.0|lang/estonian.php|1.3.2|1.6|optional|r@
1.4.0|lang/estonian-utf-8.php|1.3.2|1.5|optional|r@
1.4.0|lang/finnish.php|1.3.0|1.5|optional|r@
1.4.0|lang/finnish-utf-8.php|1.3.0|1.5|optional|r@
1.4.0|lang/french.php|1.3.2|1.18|optional|r@
1.4.0|lang/french-utf-8.php|1.3.2|1.16|optional|r@
1.4.0|lang/german.php|1.3.2|1.19|optional|r@
1.4.0|lang/german-utf-8.php|1.3.2|1.20|optional|r@
1.4.0|lang/german_sie.php|1.3.2|1.2|optional|r@
1.4.0|lang/german_sie-utf-8.php|1.3.2|1.2|optional|r@
1.4.0|lang/greek.php|1.3.0|1.7|optional|r@
1.4.0|lang/greek-utf-8.php|1.3.0|1.7|optional|r@
1.4.0|lang/hebrew.php|1.3.0|1.6|optional|r@
1.4.0|lang/hebrew-utf-8.php|1.3.0|1.8|optional|r@
1.4.0|lang/hungarian.php|1.3.0|1.8|optional|r@
1.4.0|lang/hungarian-utf-8.php|1.3.0|1.9|optional|r@
1.4.0|lang/indonesian.php|1.3.0|1.5|optional|r@
1.4.0|lang/indonesian-utf-8.php|1.3.0|1.6|optional|r@
1.4.0|lang/italian.php|1.3.0|1.7|optional|r@
1.4.0|lang/italian2.php|1.3.0|1.1|optional|r@
1.4.0|lang/italian2-utf-8.php|1.3.0|1.1|optional|r@
1.4.0|lang/italian-utf-8.php|1.3.0|1.7|optional|r@
1.4.0|lang/japanese.php|1.3.0|1.5|optional|r@
1.4.0|lang/japanese-utf-8.php|1.3.0|1.6|optional|r@
1.4.0|lang/latvian.php|1.3.0|1.7|optional|r@
1.4.0|lang/latvian-utf-8.php|1.3.0|1.5|optional|r@
1.4.0|lang/malay.php|1.3.0|1.1|optional|r@
1.4.0|lang/malay-utf-8.php|1.3.0|1.1|optional|r@
1.4.0|lang/norwegian.php|1.4.0|1.8|optional|r@
1.4.0|lang/norwegian-utf-8.php|1.4.0|1.8|optional|r@
1.4.0|lang/polish.php|1.3.0|1.4|optional|r@
1.4.0|lang/polish-utf-8.php|1.3.0|1.3|optional|r@
1.4.0|lang/romanian.php|1.4.0|1.4|optional|r@
1.4.0|lang/romanian-utf-8.php|1.4.0|1.4|optional|r@
1.4.0|lang/romanian_no_diacritics.php|1.4.0|1.1|optional|r@
1.4.0|lang/romanian_no_diacritics-utf-8.php|1.4.0|1.1|optional|r@
1.4.0|lang/russian.php|1.3.2|1.7|optional|r@
1.4.0|lang/russian-utf-8.php|1.3.2|1.7|optional|r@
1.4.0|lang/slovak.php|1.3.2|1.2|optional|r@
1.4.0|lang/slovak-utf-8.php|1.3.2|1.2|optional|r@
1.4.0|lang/slovenian.php|1.3.0|1.10|optional|r@
1.4.0|lang/slovenian-utf-8.php|1.3.0|1.8|optional|r@
1.4.0|lang/spanish.php|1.3.0|1.8|optional|r@
1.4.0|lang/spanish-utf-8.php|1.3.0|1.8|optional|r@
1.4.0|lang/swedish.php|1.3.0|1.6|optional|r@
1.4.0|lang/swedish-utf-8.php|1.3.0|1.5|optional|r@
1.4.0|lang/turkish.php|1.3.2|1.5|optional|r@
1.4.0|lang/turkish-utf-8.php|1.3.2|1.5|optional|r@
1.4.0|lang/uighur.php|1.3.2|1.2|optional|r@
1.4.0|lang/uighur-utf-8.php|1.3.2|1.2|optional|r@
1.4.0|lang/vietnamese.php|1.3.2|1.1|optional|r@
1.4.0|lang/vietnamese-utf-8.php|1.3.2|1.1|optional|r@
1.4.0|logs|||mandatory|w@
1.4.0|logs/log_header.inc.php|1.4.0|1.3|mandatory|r@
1.4.0|plugins|||optional|r@
1.4.0|plugins/sample|||optional|r@
1.4.0|plugins/sample/codebase.php|1.4.0|1.4|optional|r@
1.4.0|plugins/sample/credits.php|1.4.0|1.2|optional|r@
1.4.0|plugins/sef_urls|||optional|r@
1.4.0|plugins/sef_urls/codebase.php|1.4.0|1.4|optional|r@
1.4.0|plugins/sef_urls/credits.php|1.4.0|1.2|optional|r@
1.4.0|plugins/sef_urls/ht.txt|||optional|r@
1.4.0|sql|||mandatory|r@
1.4.0|sql/basic.sql||1.49|mandatory|r@
1.4.0|sql/schema.sql||1.23|mandatory|r@
1.4.0|sql/update.sql||1.74|mandatory|r@
1.4.0|themes|||mandatory|r@
1.4.0|themes/classic|||optional|r@
1.4.0|themes/classic/style.css||1.8|optional|r@
1.4.0|themes/classic/template.html||1.9|optional|r@
1.4.0|themes/classic/theme.php|1.4.0|1.31|optional|r@
1.4.0|themes/classic/images|||optional|r@
1.4.0|themes/eyeball|||optional|r@
1.4.0|themes/eyeball/style.css||1.14|optional|r@
1.4.0|themes/eyeball/template.html||1.8|optional|r@
1.4.0|themes/eyeball/theme.php|1.4.0|1.52|optional|r@
1.4.0|themes/eyeball/images|||optional|r@
1.4.0|themes/fruity|||optional|r@
1.4.0|themes/fruity/style.css||1.13|optional|r@
1.4.0|themes/fruity/template.html||1.8|optional|r@
1.4.0|themes/fruity/theme.php|1.4.0|1.50|optional|r@
1.4.0|themes/fruity/images|||optional|r@
1.4.0|themes/hardwired|||optional|r@
1.4.0|themes/hardwired/style.css||1.16|optional|r@
1.4.0|themes/hardwired/template.html||1.9|optional|r@
1.4.0|themes/hardwired/theme.php|1.4.0|1.52|optional|r@
1.4.0|themes/hardwired/images|||optional|r@
1.4.0|themes/igames|||optional|r@
1.4.0|themes/igames/style.css||1.15|optional|r@
1.4.0|themes/igames/template.html||1.9|optional|r@
1.4.0|themes/igames/theme.php|1.4.0|1.54|optional|r@
1.4.0|themes/igames/images|||optional|r@
1.4.0|themes/mac_ox_x|||optional|r@
1.4.0|themes/mac_ox_x/style.css||1.14|optional|r@
1.4.0|themes/mac_ox_x/template.html||1.8|optional|r@
1.4.0|themes/mac_ox_x/theme.php|1.4.0|1.50|optional|r@
1.4.0|themes/mac_ox_x/images|||optional|r@
1.4.0|themes/classic|||optional|r@
1.4.0|themes/project_vii/style.css||1.17|optional|r@
1.4.0|themes/project_vii/template.html||1.7|optional|r@
1.4.0|themes/project_vii/theme.php|1.4.0|1.52|optional|r@
1.4.0|themes/project_vii/images|||optional|r@
1.4.0|themes/rainy_day|||optional|r@
1.4.0|themes/rainy_day/style.css||1.15|optional|r@
1.4.0|themes/rainy_day/template.html||1.6|optional|r@
1.4.0|themes/rainy_day/theme.php|1.4.0|1.55|optional|r@
1.4.0|themes/rainy_day/images|||optional|r@
1.4.0|themes/styleguide|||optional|r@
1.4.0|themes/styleguide/domLib.js|||optional|r@
1.4.0|themes/styleguide/domTT.js|||optional|r@
1.4.0|themes/styleguide/readme.htm||1.2|optional|r@
1.4.0|themes/styleguide/template.html||1.4|optional|r@
1.4.0|themes/styleguide/theme.php|1.4.0|1.34|optional|r@
1.4.0|themes/styleguide/images|||optional|r@
1.4.0|themes/water_drop|||optional|r@
1.4.0|themes/water_drop/style.css||1.14|optional|r@
1.4.0|themes/water_drop/theme.php|1.4.0|1.52|optional|r@
1.4.0|themes/water_drop/images|||optional|r@
1.4.1|addfav.php|1.4.1|1.18|mandatory|r@
1.4.1|addpic.php|1.4.1|1.14|mandatory|r@
1.4.1|admin.php|1.4.1|1.27|mandatory|r@
1.4.1|albmgr.php|1.4.1|1.17|mandatory|r@
1.4.1|anycontent.php|1.4.1|1.13|mandatory|r@
1.4.1|banning.php|1.4.1|1.27|mandatory|r@
1.4.1|bridgemgr.php|1.4.1|1.26|mandatory|r@
1.4.1|calendar.php|1.4.1|1.11|mandatory|r@
1.4.1|catmgr.php|1.4.1|1.30|mandatory|r@
1.4.1|charsetmgr.php|1.4.1|1.9|mandatory|r@
1.4.1|db_ecard.php|1.4.1|1.15|mandatory|r@
1.4.1|db_input.php|1.4.1|1.51|mandatory|r@
1.4.1|delete.php|1.4.1|1.24|mandatory|r@
1.4.1|displayecard.php|1.4.1|1.13|mandatory|r@
1.4.1|displayimage.php|1.4.1|1.101|mandatory|r@
1.4.1|displayreport.php|1.4.1|1.6|mandatory|r@
1.4.1|ecard.php|1.4.1|1.37|mandatory|r@
1.4.1|editOnePic.php|1.4.1|1.41|mandatory|r@
1.4.1|editpics.php|1.4.1|1.40|mandatory|r@
1.4.1|exifmgr.php|1.4.1|1.9|mandatory|r@
1.4.1|faq.php|1.4.1|1.7|mandatory|r@
1.4.1|forgot_passwd.php|1.4.1|1.20|mandatory|r@
1.4.1|getlang.php|1.4.1|1.10|mandatory|r@
1.4.1|groupmgr.php|1.4.1|1.35|mandatory|r@
1.4.1|image_processor.php|1.4.1|1.21|mandatory|r@
1.4.1|index.php|1.4.1|1.87|mandatory|r@
1.4.1|install.php|1.4.1|1.34|mandatory|r@
1.4.1|installer.css|1.4.1|1.11|mandatory|r@
1.4.1|keyword_create_dict.php|1.4.1|1.7|mandatory|r@
1.4.1|keyword_select.php|1.4.1|1.7|mandatory|r@
1.4.1|keywordmgr.php|1.4.1|1.12|mandatory|r@
1.4.1|login.php|1.4.1|1.25|mandatory|r@
1.4.1|logout.php|1.4.1|1.10|mandatory|r@
1.4.1|minibrowser.php|1.4.1|1.15|mandatory|r@
1.4.1|mode.php|1.4.1|1.4|mandatory|r@
1.4.1|modifyalb.php|1.4.1|1.31|mandatory|r@
1.4.1|phpinfo.php|1.4.1|1.11|mandatory|r@
1.4.1|picEditor.php|1.4.1|1.24|mandatory|r@
1.4.1|picmgr.php|1.4.1|1.19|mandatory|r@
1.4.1|pluginmgr.php|1.4.1|1.18|mandatory|r@
1.4.1|profile.php|1.4.1|1.45|mandatory|r@
1.4.1|ratepic.php|1.4.1|1.13|mandatory|r@
1.4.1|register.php|1.4.1|1.33|mandatory|r@
1.4.1|relocate_server.php|1.4.1|1.5|optional|r@
1.4.1|report_file.php|1.4.1|1.22|mandatory|r@
1.4.1|reviewcom.php|1.4.1|1.20|mandatory|r@
1.4.1|scripts.js|1.4.1|1.13|mandatory|r@
1.4.1|search.php|1.4.1|1.17|mandatory|r@
1.4.1|searchnew.php|1.4.1|1.50|mandatory|r@
1.4.1|showthumb.php|1.4.1|1.10|mandatory|r@
1.4.1|stat_details.php|1.4.1|1.1|mandatory|r@
1.4.1|thumbnails.php|1.4.1|1.29|mandatory|r@
1.4.1|update.php|1.4.1|1.23|mandatory|r@
1.4.1|upgrade-1.0-to-1.2.php|1.4.1|1.9|mandatory|r@
1.4.1|upload.php|1.4.1|1.73|mandatory|r@
1.4.1|usermgr.php|1.4.1|1.50|mandatory|r@
1.4.1|util.php|1.4.1|1.30|mandatory|r@
1.4.1|versioncheck.php|1.4.1|1.71|mandatory|r@
1.4.1|viewlog.php|1.4.1|1.11|mandatory|r@
1.4.1|xp_publish.php|1.4.1|1.30|mandatory|r@
1.4.1|zipdownload.php|1.4.1|1.10|mandatory|r@
1.4.1|**fullpath**|||mandatory|w@
1.4.1|**fullpath**/index.php|||optional|w@
1.4.1|**fullpath**/edit/index.html|||optional|w@
1.4.1|**fullpath**/edit|||mandatory|w@
1.4.1|**fullpath**/edit/index.html|||optional|w@
1.4.1|**fullpath**/**userpics**|||mandatory|w@
1.4.1|**fullpath**/**userpics**/index.php|||optional|w@
1.4.1|bridge|||mandatory|r@
1.4.1|bridge/coppermine.inc.php|1.4.1|1.20|mandatory|r@
1.4.1|bridge/eblah.inc.php|1.4.1|1.4|optional|r@
1.4.1|bridge/invisionboard20.inc.php|1.4.1|1.8|optional|r@
1.4.1|bridge/mambo.inc.php|1.4.1|1.17|optional|r@
1.4.1|bridge/mybb.inc.php|1.4.1|1.2|optional|r@
1.4.1|bridge/phorum.inc.php|1.4.1|1.5|optional|r@
1.4.1|bridge/phpbb.inc.php|1.4.1|1.42|optional|r@
1.4.1|bridge/phpbb22.inc.php|1.4.1|1.10|optional|r@
1.4.1|bridge/punbb115.inc.php|1.4.1|1.5|optional|r@
1.4.1|bridge/punbb12.inc.php|1.4.1|1.12|optional|r@
1.4.1|bridge/smf10.inc.php|1.4.1|1.13|optional|r@
1.4.1|bridge/udb_base.inc.php|1.4.1|1.13|mandatory|r@
1.4.1|bridge/vbulletin30.inc.php|1.4.1|1.23|optional|r@
1.4.1|bridge/xmb.inc.php|1.4.1|1.4|optional|r@
1.4.1|bridge/xoops.inc.php|1.4.1|1.4|optional|r@
1.4.1|docs|||mandatory|r@
1.4.1|docs/credits.html||1.12|optional|r@
1.4.1|docs/faq.htm|||optional|r@
1.4.1|docs/index.htm||1.12|mandatory|r@
1.4.1|docs/README.html||1.17|optional|r@
1.4.1|docs/showdoc.php|1.4.1|1.13|mandatory|r@
1.4.1|docs/theme.htm||1.15|optional|r@
1.4.1|docs/translation.htm|||optional|r@
1.4.1|docs/pics|||mandatory|r@
1.4.1|docs/theme|||optional|r@
1.4.1|docs/theme/edit_style.html|||optional|r@
1.4.1|docs/theme/edit_template.html|||optional|r@
1.4.1|docs/theme/edit_theme.html|1.4.1|1.5|optional|r@
1.4.1|docs/theme/index.html||1.1|optional|r@
1.4.1|docs/theme/style.css|||optional|r@
1.4.1|docs/theme/validation.html|||optional|r@
1.4.1|include|||mandatory|w@
1.4.1|include/archive.php|1.4.1|1.5|mandatory|r@
1.4.1|include/config.inc.php|||mandatory|r@
1.4.1|include/crop.inc.php|1.4.1|1.13|mandatory|r@
1.4.1|include/debugger.inc.php|1.4.1|1.9|mandatory|r@
1.4.1|include/exif.php|1.4.1|1.8|mandatory|r@
1.4.1|include/exif_php.inc.php|1.4.1|1.15|mandatory|r@
1.4.1|include/exifReader.inc.php|1.4.1|1.8|mandatory|r@
1.4.1|include/functions.inc.php|1.4.1|1.205|mandatory|r@
1.4.1|include/imageObjectGD.class.php|1.4.1|1.8|mandatory|r@
1.4.1|include/imageObjectIM.class.php|1.4.1|1.8|mandatory|r@
1.4.1|include/index.html|1.4.1|1.2|mandatory|r@
1.4.1|include/init.inc.php|1.4.1|1.100|mandatory|r@
1.4.1|include/iptc.inc.php|1.4.1|1.12|mandatory|r@
1.4.1|include/keyword.inc.php|1.4.1|1.11|mandatory|r@
1.4.1|include/langfallback.inc.php|1.4.1|1.31|mandatory|r@
1.4.1|include/logger.inc.php|1.4.1|1.14|mandatory|r@
1.4.1|include/mailer.inc.php|1.4.1|1.17|mandatory|r@
1.4.1|include/mb.inc.php|1.4.1|1.4|mandatory|r@
1.4.1|include/media.functions.inc.php|1.4.1|1.13|mandatory|r@
1.4.1|include/phpmailer.lang-en.php|1.4.1|1.2|mandatory|r@
1.4.1|include/picmgmt.inc.php|1.4.1|1.35|mandatory|r@
1.4.1|include/plugin_api.inc.php|1.4.1|1.18|mandatory|r@
1.4.1|include/search.inc.php|1.4.1|1.23|mandatory|r@
1.4.1|include/select_lang.inc.php|1.4.1|1.10|mandatory|r@
1.4.1|include/slideshow.inc.php|1.4.1|1.12|mandatory|r@
1.4.1|include/smilies.inc.php|1.4.1|1.17|mandatory|r@
1.4.1|include/smtp.inc.php|1.4.1|1.4|mandatory|r@
1.4.1|include/sql_parse.php|1.4.1|1.7|mandatory|r@
1.4.1|include/themes.inc.php|1.4.1|1.44|mandatory|r@
1.4.1|include/update.inc.php|1.4.1|1.5|mandatory|r@
1.4.1|include/zip.lib.php|1.4.1|1.4|mandatory|r@
1.4.1|include/makers|||mandatory|w@
1.4.1|include/makers/canon.php|1.4.1|1.6|mandatory|r@
1.4.1|include/makers/fujifilm.php|1.4.1|1.6|mandatory|r@
1.4.1|include/makers/gps.php|1.4.1|1.6|mandatory|r@
1.4.1|include/makers/nikon.php|1.4.1|1.6|mandatory|r@
1.4.1|include/makers/olympus.php|1.4.1|1.6|mandatory|r@
1.4.1|include/makers/sanyo.php|1.4.1|1.6|mandatory|r@
1.4.1|lang|||mandatory|r@
1.4.1|lang/albanian.php|1.3.3|1.2|optional|r@
1.4.1|lang/arabic.php|1.4.1|1.6|optional|r@
1.4.1|lang/brazilian_portuguese.php|1.4.1|1.8|optional|r@
1.4.1|lang/bulgarian.php|1.4.1|1.6|optional|r@
1.4.1|lang/chinese_big5.php|1.4.1|1.8|optional|r@
1.4.1|lang/chinese_gb.php|1.4.1|1.7|optional|r@
1.4.1|lang/catalan.php|1.4.1|1.3|optional|r@
1.4.1|lang/croatian.php|1.4.1|1.6|optional|r@
1.4.1|lang/czech.php|1.4.1|1.7|optional|r@
1.4.1|lang/danish.php|1.4.1|1.13|optional|r@
1.4.1|lang/dutch.php|1.4.1|1.15|optional|r@
1.4.1|lang/english.php|1.4.1|1.281|mandatory|r@
1.4.1|lang/english_gb.php|1.4.1|1.4|optional|r@
1.4.1|lang/estonian.php|1.4.1|1.7|optional|r@
1.4.1|lang/finnish.php|1.4.1|1.8|optional|r@
1.4.1|lang/french.php|1.4.1|1.24|optional|r@
1.4.1|lang/galician.php|1.3.3|1.1|optional|r@
1.4.1|lang/german.php|1.4.1|1.24|optional|r@
1.4.1|lang/german_sie.php|1.4.1|1.4|optional|r@
1.4.1|lang/greek.php|1.4.1|1.8|optional|r@
1.4.1|lang/hebrew.php|1.4.1|1.7|optional|r@
1.4.1|lang/hungarian.php|1.4.1|1.9|optional|r@
1.4.1|lang/indonesian.php|1.4.1|1.7|optional|r@
1.4.1|lang/italian.php|1.4.1|1.9|optional|r@
1.4.1|lang/italian2.php|1.4.1|1.4|optional|r@
1.4.1|lang/japanese.php|1.4.1|1.6|optional|r@
1.4.1|lang/latvian.php|1.4.1|1.8|optional|r@
1.4.1|lang/malay.php|1.4.1|1.3|optional|r@
1.4.1|lang/norwegian.php|1.4.1|1.10|optional|r@
1.4.1|lang/persian.php|1.3.2|1.1|optional|r@
1.4.1|lang/polish.php|1.4.1|1.5|optional|r@
1.4.1|lang/romanian.php|1.4.1|1.5|optional|r@
1.4.1|lang/romanian_no_diacritics.php|1.4.1|1.2|optional|r@
1.4.1|lang/russian.php|1.4.1|1.8|optional|r@
1.4.1|lang/slovak.php|1.4.1|1.3|optional|r@
1.4.1|lang/slovenian.php|1.4.1|1.12|optional|r@
1.4.1|lang/spanish.php|1.4.1|1.10|optional|r@
1.4.1|lang/swedish.php|1.4.1|1.8|optional|r@
1.4.1|lang/thai.php|1.3.2|1.5|optional|r@
1.4.1|lang/turkish.php|1.4.1|1.6|optional|r@
1.4.1|lang/uighur.php|1.4.1|1.3|optional|r@
1.4.1|lang/vietnamese.php|1.4.1|1.3|optional|r@
1.4.1|lang/welsh.php|1.3.2|1.2|optional|r@
1.4.1|logs|||mandatory|w@
1.4.1|logs/log_header.inc.php|1.4.1|1.5|mandatory|r@
1.4.1|plugins|||optional|r@
1.4.1|plugins/sample|||optional|r@
1.4.1|plugins/sample/codebase.php|1.4.1|1.8|optional|r@
1.4.1|plugins/sample/configuration.php|1.4.1|1.1|optional|r@
1.4.1|plugins/sef_urls|||optional|r@
1.4.1|plugins/sef_urls/codebase.php|1.4.1|1.7|optional|r@
1.4.1|plugins/sef_urls/configuration.php|1.4.1|1.2|optional|r@
1.4.1|plugins/sef_urls/ht.txt|1.4.1|1.3|optional|r@
1.4.1|sql|||mandatory|r@
1.4.1|sql/basic.sql|1.4.1|1.91|mandatory|r@
1.4.1|sql/schema.sql|1.4.1|1.40|mandatory|r@
1.4.1|sql/update.sql|1.4.1|1.120|mandatory|r@
1.4.1|themes|||mandatory|r@
1.4.1|themes/classic|||optional|r@
1.4.1|themes/classic/style.css|1.4.1|1.16|optional|r@
1.4.1|themes/classic/template.html||1.9|optional|r@
1.4.1|themes/classic/theme.php|1.4.1|1.70|optional|r@
1.4.1|themes/classic/images|||optional|r@
1.4.1|themes/eyeball|||optional|r@
1.4.1|themes/eyeball/style.css|1.4.1|1.22|optional|r@
1.4.1|themes/eyeball/template.html||1.8|optional|r@
1.4.1|themes/eyeball/theme.php|1.4.1|1.64|optional|r@
1.4.1|themes/eyeball/images|||optional|r@
1.4.1|themes/fruity|||optional|r@
1.4.1|themes/fruity/style.css|1.4.1|1.20|optional|r@
1.4.1|themes/fruity/template.html||1.8|optional|r@
1.4.1|themes/fruity/theme.php|1.4.1|1.61|optional|r@
1.4.1|themes/fruity/images|||optional|r@
1.4.1|themes/hardwired|||optional|r@
1.4.1|themes/hardwired/style.css|1.4.1|1.25|optional|r@
1.4.1|themes/hardwired/template.html||1.9|optional|r@
1.4.1|themes/hardwired/theme.php|1.4.1|1.68|optional|r@
1.4.1|themes/hardwired/images|||optional|r@
1.4.1|themes/igames|||optional|r@
1.4.1|themes/igames/style.css|1.4.1|1.23|optional|r@
1.4.1|themes/igames/template.html||1.9|optional|r@
1.4.1|themes/igames/theme.php|1.4.1|1.67|optional|r@
1.4.1|themes/igames/images|||optional|r@
1.4.1|themes/mac_ox_x|||optional|r@
1.4.1|themes/mac_ox_x/style.css|1.4.1|1.21|optional|r@
1.4.1|themes/mac_ox_x/template.html||1.8|optional|r@
1.4.1|themes/mac_ox_x/theme.php|1.4.1|1.62|optional|r@
1.4.1|themes/mac_ox_x/images|||optional|r@
1.4.1|themes/project_vii|||optional|r@
1.4.1|themes/project_vii/style.css|1.4.1|1.25|optional|r@
1.4.1|themes/project_vii/template.html||1.7|optional|r@
1.4.1|themes/project_vii/theme.php|1.4.1|1.61|optional|r@
1.4.1|themes/project_vii/images|||optional|r@
1.4.1|themes/rainy_day|||optional|r@
1.4.1|themes/rainy_day/style.css|1.4.1|1.22|optional|r@
1.4.1|themes/rainy_day/template.html||1.6|optional|r@
1.4.1|themes/rainy_day/theme.php|1.4.1|1.64|optional|r@
1.4.1|themes/rainy_day/images|||optional|r@
1.4.1|themes/sample|||optional|r@
1.4.1|themes/sample/style.css|1.4.1|1.1|optional|r@
1.4.1|themes/sample/template.html|||optional|r@
1.4.1|themes/sample/theme.php|1.4.1|1.5|optional|r@
1.4.1|themes/sample/images|||optional|r@
1.4.1|themes/water_drop|||optional|r@
1.4.1|themes/water_drop/style.css|1.4.1|1.21|optional|r@
1.4.1|themes/water_drop/template.html||1.15|optional|r@
1.4.1|themes/water_drop/theme.php|1.4.1|1.64|optional|r@
1.4.1|themes/water_drop/images|||optional|r@
1.4.2|addfav.php|1.4.2|1.19|mandatory|r@
1.4.2|addpic.php|1.4.2|1.15|mandatory|r@
1.4.2|admin.php|1.4.2|1.28|mandatory|r@
1.4.2|albmgr.php|1.4.2|1.18|mandatory|r@
1.4.2|anycontent.php|1.4.2|1.14|mandatory|r@
1.4.2|banning.php|1.4.2|1.28|mandatory|r@
1.4.2|bridgemgr.php|1.4.2|1.28|mandatory|r@
1.4.2|calendar.php|1.4.2|1.12|mandatory|r@
1.4.2|catmgr.php|1.4.2|1.31|mandatory|r@
1.4.2|charsetmgr.php|1.4.2|1.10|mandatory|r@
1.4.2|db_ecard.php|1.4.2|1.16|mandatory|r@
1.4.2|db_input.php|1.4.2|1.52|mandatory|r@
1.4.2|delete.php|1.4.2|1.25|mandatory|r@
1.4.2|displayecard.php|1.4.2|1.14|mandatory|r@
1.4.2|displayimage.php|1.4.2|1.102|mandatory|r@
1.4.2|displayreport.php|1.4.2|1.7|mandatory|r@
1.4.2|ecard.php|1.4.2|1.38|mandatory|r@
1.4.2|editOnePic.php|1.4.2|1.42|mandatory|r@
1.4.2|editpics.php|1.4.2|1.41|mandatory|r@
1.4.2|exifmgr.php|1.4.2|1.10|mandatory|r@
1.4.2|faq.php|1.4.2|1.8|mandatory|r@
1.4.2|forgot_passwd.php|1.4.2|1.21|mandatory|r@
1.4.2|getlang.php|1.4.2|1.11|mandatory|r@
1.4.2|groupmgr.php|1.4.2|1.36|mandatory|r@
1.4.2|image_processor.php|1.4.2|1.24|mandatory|r@
1.4.2|index.php|1.4.2|1.88|mandatory|r@
1.4.2|install.php|1.4.2|1.36|mandatory|r@
1.4.2|installer.css|1.4.2|1.12|mandatory|r@
1.4.2|keyword_create_dict.php|1.4.2|1.8|mandatory|r@
1.4.2|keyword_select.php|1.4.2|1.8|mandatory|r@
1.4.2|keywordmgr.php|1.4.2|1.13|mandatory|r@
1.4.2|login.php|1.4.2|1.26|mandatory|r@
1.4.2|logout.php|1.4.2|1.11|mandatory|r@
1.4.2|minibrowser.php|1.4.2|1.16|mandatory|r@
1.4.2|mode.php|1.4.2|1.5|mandatory|r@
1.4.2|modifyalb.php|1.4.2|1.32|mandatory|r@
1.4.2|phpinfo.php|1.4.2|1.12|mandatory|r@
1.4.2|picEditor.php|1.4.2|1.26|mandatory|r@
1.4.2|picmgr.php|1.4.2|1.20|mandatory|r@
1.4.2|pluginmgr.php|1.4.2|1.19|mandatory|r@
1.4.2|profile.php|1.4.2|1.46|mandatory|r@
1.4.2|ratepic.php|1.4.2|1.14|mandatory|r@
1.4.2|register.php|1.4.2|1.34|mandatory|r@
1.4.2|relocate_server.php|1.4.2|1.6|optional|r@
1.4.2|report_file.php|1.4.2|1.23|mandatory|r@
1.4.2|reviewcom.php|1.4.2|1.21|mandatory|r@
1.4.2|scripts.js|1.4.2|1.14|mandatory|r@
1.4.2|search.php|1.4.2|1.18|mandatory|r@
1.4.2|searchnew.php|1.4.2|1.52|mandatory|r@
1.4.2|showthumb.php|1.4.2|1.11|mandatory|r@
1.4.2|stat_details.php|1.4.2|1.2|mandatory|r@
1.4.2|thumbnails.php|1.4.2|1.30|mandatory|r@
1.4.2|update.php|1.4.2|1.24|mandatory|r@
1.4.2|upgrade-1.0-to-1.2.php|1.4.2|1.10|mandatory|r@
1.4.2|upload.php|1.4.2|1.74|mandatory|r@
1.4.2|usermgr.php|1.4.2|1.51|mandatory|r@
1.4.2|util.php|1.4.2|1.31|mandatory|r@
1.4.2|versioncheck.php|1.4.2|1.76|mandatory|r@
1.4.2|viewlog.php|1.4.2|1.12|mandatory|r@
1.4.2|xp_publish.php|1.4.2|1.33|mandatory|r@
1.4.2|zipdownload.php|1.4.2|1.11|mandatory|r@
1.4.2|**fullpath**|||mandatory|w@
1.4.2|**fullpath**/index.php|||optional|w@
1.4.2|**fullpath**/edit/index.html|||optional|w@
1.4.2|**fullpath**/edit/no_FTP-uploads_into_this_folder!|||optional|w@
1.4.2|**fullpath**/edit|||mandatory|w@
1.4.2|**fullpath**/edit/index.html|||optional|w@
1.4.2|**fullpath**/**userpics**|||mandatory|w@
1.4.2|**fullpath**/**userpics**/index.php|||optional|w@
1.4.2|**fullpath**/**userpics**/no_FTP-uploads_into_this_folder!|||optional|w@
1.4.2|bridge|||mandatory|r@
1.4.2|bridge/coppermine.inc.php|1.4.2|1.21|mandatory|r@
1.4.2|bridge/eblah.inc.php|1.4.2|1.5|optional|r@
1.4.2|bridge/invisionboard20.inc.php|1.4.2|1.9|optional|r@
1.4.2|bridge/mambo.inc.php|1.4.2|1.18|optional|r@
1.4.2|bridge/mybb.inc.php|1.4.2|1.3|optional|r@
1.4.2|bridge/phorum.inc.php|1.4.2|1.6|optional|r@
1.4.2|bridge/phpbb.inc.php|1.4.2|1.44|optional|r@
1.4.2|bridge/phpbb2018.inc.php|1.4.2|1.1|optional|r@
1.4.2|bridge/phpbb22.inc.php|1.4.2|1.11|optional|r@
1.4.2|bridge/punbb115.inc.php|1.4.2|1.6|optional|r@
1.4.2|bridge/punbb12.inc.php|1.4.2|1.13|optional|r@
1.4.2|bridge/smf10.inc.php|1.4.2|1.17|optional|r@
1.4.2|bridge/udb_base.inc.php|1.4.2|1.14|mandatory|r@
1.4.2|bridge/vbulletin30.inc.php|1.4.2|1.24|optional|r@
1.4.2|bridge/xmb.inc.php|1.4.2|1.5|optional|r@
1.4.2|bridge/xoops.inc.php|1.4.2|1.5|optional|r@
1.4.2|docs|||mandatory|r@
1.4.2|docs/faq.htm|||optional|r@
1.4.2|docs/faq_fr.htm|||optional|r@
1.4.2|docs/index.htm||1.12|mandatory|r@
1.4.2|docs/index_fr.htm||1.2|mandatory|r@
1.4.2|docs/README.html||1.17|optional|r@
1.4.2|docs/showdoc.php|1.4.2|1.15|mandatory|r@
1.4.2|docs/style.css|1.4.2|1.6|mandatory|r@
1.4.2|docs/theme.htm||1.16|optional|r@
1.4.2|docs/translation.htm|||optional|r@
1.4.2|docs/pics|||mandatory|r@
1.4.2|docs/theme|||optional|r@
1.4.2|docs/theme/edit_style.html|||optional|r@
1.4.2|docs/theme/edit_template.html|||optional|r@
1.4.2|docs/theme/edit_theme.html|1.4.2|1.6|optional|r@
1.4.2|docs/theme/index.html||1.1|optional|r@
1.4.2|docs/theme/style.css|1.4.2|1.3|optional|r@
1.4.2|docs/theme/validation.html|||optional|r@
1.4.2|include|||mandatory|w@
1.4.2|include/archive.php|1.4.2|1.6|mandatory|r@
1.4.2|include/config.inc.php|||mandatory|r@
1.4.2|include/config.inc.php.sample|||optional|r@
1.4.2|include/crop.inc.php|1.4.2|1.15|mandatory|r@
1.4.2|include/debugger.inc.php|1.4.2|1.10|mandatory|r@
1.4.2|include/exif.php|1.4.2|1.10|mandatory|r@
1.4.2|include/exif_php.inc.php|1.4.2|1.16|mandatory|r@
1.4.2|include/exifReader.inc.php|1.4.2|1.9|mandatory|r@
1.4.2|include/functions.inc.php|1.4.2|1.207|mandatory|r@
1.4.2|include/imageObjectGD.class.php|1.4.2|1.9|mandatory|r@
1.4.2|include/imageObjectIM.class.php|1.4.2|1.9|mandatory|r@
1.4.2|include/index.html|1.4.2|1.3|mandatory|r@
1.4.2|include/init.inc.php|1.4.2|1.102|mandatory|r@
1.4.2|include/iptc.inc.php|1.4.2|1.13|mandatory|r@
1.4.2|include/keyword.inc.php|1.4.2|1.12|mandatory|r@
1.4.2|include/langfallback.inc.php|1.4.2|1.32|mandatory|r@
1.4.2|include/logger.inc.php|1.4.2|1.15|mandatory|r@
1.4.2|include/mailer.inc.php|1.4.2|1.18|mandatory|r@
1.4.2|include/mb.inc.php|1.4.2|1.5|mandatory|r@
1.4.2|include/media.functions.inc.php|1.4.2|1.14|mandatory|r@
1.4.2|include/phpmailer.lang-en.php|1.4.2|1.3|mandatory|r@
1.4.2|include/picmgmt.inc.php|1.4.2|1.36|mandatory|r@
1.4.2|include/plugin_api.inc.php|1.4.2|1.19|mandatory|r@
1.4.2|include/search.inc.php|1.4.2|1.24|mandatory|r@
1.4.2|include/select_lang.inc.php|1.4.2|1.11|mandatory|r@
1.4.2|include/slideshow.inc.php|1.4.2|1.13|mandatory|r@
1.4.2|include/smilies.inc.php|1.4.2|1.18|mandatory|r@
1.4.2|include/smtp.inc.php|1.4.2|1.5|mandatory|r@
1.4.2|include/sql_parse.php|1.4.2|1.8|mandatory|r@
1.4.2|include/themes.inc.php|1.4.2|1.45|mandatory|r@
1.4.2|include/update.inc.php|1.4.2|1.6|mandatory|r@
1.4.2|include/zip.lib.php|1.4.2|1.5|mandatory|r@
1.4.2|include/makers|||mandatory|w@
1.4.2|include/makers/canon.php|1.4.2|1.9|mandatory|r@
1.4.2|include/makers/fujifilm.php|1.4.2|1.9|mandatory|r@
1.4.2|include/makers/gps.php|1.4.2|1.9|mandatory|r@
1.4.2|include/makers/nikon.php|1.4.2|1.9|mandatory|r@
1.4.2|include/makers/olympus.php|1.4.2|1.9|mandatory|r@
1.4.2|include/makers/sanyo.php|1.4.2|1.9|mandatory|r@
1.4.2|lang|||mandatory|r@
1.4.2|lang/albanian.php|1.3.3|1.3|optional|r@
1.4.2|lang/arabic.php|1.4.1|1.6|optional|r@
1.4.2|lang/basque.php|1.4.1|1.6|optional|r@
1.4.2|lang/brazilian_portuguese.php|1.4.1|1.8|optional|r@
1.4.2|lang/bulgarian.php|1.4.1|1.6|optional|r@
1.4.2|lang/catalan.php|1.4.1|1.3|optional|r@
1.4.2|lang/chinese_big5.php|1.4.1|1.9|optional|r@
1.4.2|lang/chinese_gb.php|1.4.1|1.7|optional|r@
1.4.2|lang/croatian.php|1.4.1|1.6|optional|r@
1.4.2|lang/czech.php|1.4.1|1.7|optional|r@
1.4.2|lang/danish.php|1.4.1|1.14|optional|r@
1.4.2|lang/dutch.php|1.4.1|1.17|optional|r@
1.4.2|lang/english.php|1.4.1|1.281|mandatory|r@
1.4.2|lang/english_gb.php|1.4.1|1.4|optional|r@
1.4.2|lang/estonian.php|1.4.1|1.7|optional|r@
1.4.2|lang/finnish.php|1.4.1|1.9|optional|r@
1.4.2|lang/french.php|1.4.1|1.25|optional|r@
1.4.2|lang/galician.php|1.3.4|1.3|optional|r@
1.4.2|lang/german.php|1.4.2|1.29|optional|r@
1.4.2|lang/german_sie.php|1.4.2|1.7|optional|r@
1.4.2|lang/greek.php|1.4.1|1.8|optional|r@
1.4.2|lang/hebrew.php|1.4.1|1.7|optional|r@
1.4.2|lang/hungarian.php|1.4.1|1.9|optional|r@
1.4.2|lang/indonesian.php|1.4.1|1.7|optional|r@
1.4.2|lang/italian.php|1.3.4|1.10|optional|r@
1.4.2|lang/italian2.php|1.3.4|1.4|optional|r@
1.4.2|lang/japanese.php|1.4.1|1.6|optional|r@
1.4.2|lang/korean.php|1.4.1|1.9|optional|r@
1.4.2|lang/kurdish.php|1.4.1|1.2|optional|r@
1.4.2|lang/latvian.php|1.4.1|1.8|optional|r@
1.4.2|lang/malay.php|1.4.1|1.3|optional|r@
1.4.2|lang/norwegian.php|1.4.1|1.13|optional|r@
1.4.2|lang/persian.php|1.3.2|1.2|optional|r@
1.4.2|lang/polish.php|1.4.1|1.7|optional|r@
1.4.2|lang/portuguese.php|1.3.4|1.7|optional|r@
1.4.2|lang/romanian.php|1.4.1|1.5|optional|r@
1.4.2|lang/romanian_no_diacritics.php|1.4.1|1.2|optional|r@
1.4.2|lang/russian.php|1.4.1|1.8|optional|r@
1.4.2|lang/slovak.php|1.4.1|1.3|optional|r@
1.4.2|lang/slovenian.php|1.4.1|1.12|optional|r@
1.4.2|lang/spanish.php|1.4.1|1.10|optional|r@
1.4.2|lang/swedish.php|1.4.1|1.8|optional|r@
1.4.2|lang/thai.php|1.3.2|1.5|optional|r@
1.4.2|lang/turkish.php|1.4.1|1.6|optional|r@
1.4.2|lang/uighur.php|1.4.1|1.3|optional|r@
1.4.2|lang/vietnamese.php|1.4.1|1.3|optional|r@
1.4.2|lang/welsh.php|1.3.2|1.2|optional|r@
1.4.2|logs|||mandatory|w@
1.4.2|logs/log_header.inc.php|1.4.2|1.6|mandatory|r@
1.4.2|plugins|||optional|r@
1.4.2|plugins/sample|||optional|r@
1.4.2|plugins/sample/codebase.php|1.4.2|1.9|optional|r@
1.4.2|plugins/sample/configuration.php|1.4.2|1.2|optional|r@
1.4.2|plugins/sef_urls|||optional|r@
1.4.2|plugins/sef_urls/codebase.php|1.4.2|1.8|optional|r@
1.4.2|plugins/sef_urls/configuration.php|1.4.2|1.3|optional|r@
1.4.2|plugins/sef_urls/ht.txt|1.4.2|1.4|optional|r@
1.4.2|sql|||mandatory|r@
1.4.2|sql/basic.sql|1.4.2|1.92|mandatory|r@
1.4.2|sql/schema.sql|1.4.2|1.42|mandatory|r@
1.4.2|sql/update.sql|1.4.2|1.122|mandatory|r@
1.4.2|themes|||mandatory|r@
1.4.2|themes/classic|||optional|r@
1.4.2|themes/classic/style.css|1.4.2|1.17|optional|r@
1.4.2|themes/classic/template.html||1.9|optional|r@
1.4.2|themes/classic/theme.php|1.4.2|1.71|optional|r@
1.4.2|themes/classic/images|||optional|r@
1.4.2|themes/eyeball|||optional|r@
1.4.2|themes/eyeball/style.css|1.4.2|1.23|optional|r@
1.4.2|themes/eyeball/template.html||1.8|optional|r@
1.4.2|themes/eyeball/theme.php|1.4.2|1.66|optional|r@
1.4.2|themes/eyeball/images|||optional|r@
1.4.2|themes/fruity|||optional|r@
1.4.2|themes/fruity/style.css|1.4.2|1.21|optional|r@
1.4.2|themes/fruity/template.html||1.8|optional|r@
1.4.2|themes/fruity/theme.php|1.4.2|1.62|optional|r@
1.4.2|themes/fruity/images|||optional|r@
1.4.2|themes/hardwired|||optional|r@
1.4.2|themes/hardwired/style.css|1.4.2|1.26|optional|r@
1.4.2|themes/hardwired/template.html||1.9|optional|r@
1.4.2|themes/hardwired/theme.php|1.4.2|1.69|optional|r@
1.4.2|themes/hardwired/images|||optional|r@
1.4.2|themes/igames|||optional|r@
1.4.2|themes/igames/style.css|1.4.2|1.24|optional|r@
1.4.2|themes/igames/template.html||1.9|optional|r@
1.4.2|themes/igames/theme.php|1.4.2|1.68|optional|r@
1.4.2|themes/igames/images|||optional|r@
1.4.2|themes/mac_ox_x|||optional|r@
1.4.2|themes/mac_ox_x/style.css|1.4.2|1.23|optional|r@
1.4.2|themes/mac_ox_x/template.html||1.8|optional|r@
1.4.2|themes/mac_ox_x/theme.php|1.4.2|1.63|optional|r@
1.4.2|themes/mac_ox_x/images|||optional|r@
1.4.2|themes/project_vii|||optional|r@
1.4.2|themes/project_vii/style.css|1.4.2|1.27|optional|r@
1.4.2|themes/project_vii/template.html||1.7|optional|r@
1.4.2|themes/project_vii/theme.php|1.4.2|1.62|optional|r@
1.4.2|themes/project_vii/images|||optional|r@
1.4.2|themes/rainy_day|||optional|r@
1.4.2|themes/rainy_day/style.css|1.4.2|1.24|optional|r@
1.4.2|themes/rainy_day/template.html||1.6|optional|r@
1.4.2|themes/rainy_day/theme.php|1.4.2|1.65|optional|r@
1.4.2|themes/rainy_day/images|||optional|r@
1.4.2|themes/sample|||optional|r@
1.4.2|themes/sample/style.css|1.4.2|1.3|optional|r@
1.4.2|themes/sample/template.html|||optional|r@
1.4.2|themes/sample/theme.php|1.4.2|1.6|optional|r@
1.4.2|themes/sample/images|||optional|r@
1.4.2|themes/water_drop|||optional|r@
1.4.2|themes/water_drop/style.css|1.4.2|1.23|optional|r@
1.4.2|themes/water_drop/template.html||1.15|optional|r@
1.4.2|themes/water_drop/theme.php|1.4.2|1.65|optional|r@
1.4.2|themes/water_drop/images|||optional|r@
1.4.3|addfav.php|1.4.3|1.10|mandatory|r@
1.4.3|addpic.php|1.4.3|1.13|mandatory|r@
1.4.3|admin.php|1.4.3|1.13|mandatory|r@
1.4.3|albmgr.php|1.4.3|1.10|mandatory|r@
1.4.3|anycontent.php|1.4.3|1.10|mandatory|r@
1.4.3|banning.php|1.4.3|1.11|mandatory|r@
1.4.3|bridgemgr.php|1.4.3|1.4|mandatory|r@
1.4.3|calendar.php|1.4.3|1.8|mandatory|r@
1.4.3|catmgr.php|1.4.3|1.11|mandatory|r@
1.4.3|charsetmgr.php|1.4.3|1.2|mandatory|r@
1.4.3|db_ecard.php|1.4.3|1.9|mandatory|r@
1.4.3|db_input.php|1.4.3|1.14|mandatory|r@
1.4.3|delete.php|1.4.3|1.11|mandatory|r@
1.4.3|displayecard.php|1.4.3|1.10|mandatory|r@
1.4.3|displayimage.php|1.4.3|1.19|mandatory|r@
1.4.3|displayreport.php|1.4.3|1.2|mandatory|r@
1.4.3|ecard.php|1.4.3|1.17|mandatory|r@
1.4.3|editOnePic.php|1.4.3|1.16|mandatory|r@
1.4.3|editpics.php|1.4.3|1.12|mandatory|r@
1.4.3|exifmgr.php|1.4.3|1.2|mandatory|r@
1.4.3|faq.php|1.4.3|1.8|mandatory|r@
1.4.3|forgot_passwd.php|1.4.3|1.10|mandatory|r@
1.4.3|getlang.php|1.4.3|1.10|mandatory|r@
1.4.3|groupmgr.php|1.4.3|1.11|mandatory|r@
1.4.3|image_processor.php|1.4.3|1.9|mandatory|r@
1.4.3|index.php|1.4.3|1.21|mandatory|r@
1.4.3|install.php|1.4.3|1.21|mandatory|r@
1.4.3|installer.css|1.4.3|1.8|mandatory|r@
1.4.3|keyword_create_dict.php|1.4.3|1.2|mandatory|r@
1.4.3|keyword_select.php|1.4.3|1.2|mandatory|r@
1.4.3|keywordmgr.php|1.4.3|1.2|mandatory|r@
1.4.3|login.php|1.4.3|1.10|mandatory|r@
1.4.3|logout.php|1.4.3|1.10|mandatory|r@
1.4.3|minibrowser.php|1.4.3|1.2|mandatory|r@
1.4.3|mode.php|1.4.3|1.2|mandatory|r@
1.4.3|modifyalb.php|1.4.3|1.11|mandatory|r@
1.4.3|phpinfo.php|1.4.3|1.10|mandatory|r@
1.4.3|picEditor.php|1.4.3|1.9|mandatory|r@
1.4.3|picmgr.php|1.4.3|1.2|mandatory|r@
1.4.3|pluginmgr.php|1.4.3|1.2|mandatory|r@
1.4.3|profile.php|1.4.3|1.12|mandatory|r@
1.4.3|ratepic.php|1.4.3|1.10|mandatory|r@
1.4.3|register.php|1.4.3|1.16|mandatory|r@
1.4.3|report_file.php|1.4.3|1.2|mandatory|r@
1.4.3|reviewcom.php|1.4.3|1.10|mandatory|r@
1.4.3|scripts.js|1.4.3|1.4|mandatory|r@
1.4.3|search.php|1.4.3|1.10|mandatory|r@
1.4.3|searchnew.php|1.4.3|1.14|mandatory|r@
1.4.3|showthumb.php|1.4.3|1.10|mandatory|r@
1.4.3|stat_details.php|1.4.3|1.2|mandatory|r@
1.4.3|thumbnails.php|1.4.3|1.10|mandatory|r@
1.4.3|update.php|1.4.3|1.13|mandatory|r@
1.4.3|upgrade-1.0-to-1.2.php|1.4.3|1.11|mandatory|r@
1.4.3|upload.php|1.4.3|1.19|mandatory|r@
1.4.3|usermgr.php|1.4.3|1.11|mandatory|r@
1.4.3|util.php|1.4.3|1.18|mandatory|r@
1.4.3|versioncheck.php|1.4.3|1.22|mandatory|r@
1.4.3|viewlog.php|1.4.3|1.2|mandatory|r@
1.4.3|xp_publish.php|1.4.3|1.13|mandatory|r@
1.4.3|zipdownload.php|1.4.3|1.9|mandatory|r@
1.4.3|**fullpath**|||mandatory|w@
1.4.3|**fullpath**/index.php|||optional|w@
1.4.3|**fullpath**/edit/index.html|||optional|w@
1.4.3|**fullpath**/edit/no_FTP-uploads_into_this_folder!|||optional|w@
1.4.3|**fullpath**/edit|||mandatory|w@
1.4.3|**fullpath**/edit/index.html|||optional|w@
1.4.3|**fullpath**/**userpics**|||mandatory|w@
1.4.3|**fullpath**/**userpics**/index.php|||optional|w@
1.4.3|**fullpath**/**userpics**/no_FTP-uploads_into_this_folder!|||optional|w@
1.4.3|bridge|||mandatory|r@
1.4.3|bridge/coppermine.inc.php|1.4.3|1.6|mandatory|r@
1.4.3|bridge/eblah.inc.php|1.4.3|1.3|optional|r@
1.4.3|bridge/invisionboard20.inc.php|1.4.3|1.3|optional|r@
1.4.3|bridge/mambo.inc.php|1.4.3|1.4|optional|r@
1.4.3|bridge/mybb.inc.php|1.4.3|1.3|optional|r@
1.4.3|bridge/phorum.inc.php|1.4.3|1.3|optional|r@
1.4.3|bridge/phpbb.inc.php|1.4.3|1.17|optional|r@
1.4.3|bridge/phpbb2018.inc.php|1.4.3|1.10|optional|r@
1.4.3|bridge/phpbb22.inc.php|1.4.3|1.3|optional|r@
1.4.3|bridge/punbb115.inc.php|1.4.3|1.3|optional|r@
1.4.3|bridge/punbb12.inc.php|1.4.3|1.4|optional|r@
1.4.3|bridge/smf10.inc.php|1.4.3|1.4|optional|r@
1.4.3|bridge/udb_base.inc.php|1.4.3|1.13|mandatory|r@
1.4.3|bridge/vbulletin30.inc.php|1.4.3|1.14|optional|r@
1.4.3|bridge/xmb.inc.php|1.4.3|1.3|optional|r@
1.4.3|bridge/xoops.inc.php|1.4.3|1.4|optional|r@
1.4.3|docs|||mandatory|r@
1.4.3|docs/faq.htm|||optional|r@
1.4.3|docs/faq_fr.htm|||optional|r@
1.4.3|docs/index.htm||1.12|mandatory|r@
1.4.3|docs/index_fr.htm||1.2|mandatory|r@
1.4.3|docs/README.html||1.17|optional|r@
1.4.3|docs/showdoc.php|1.4.3|1.2|mandatory|r@
1.4.3|docs/style.css|1.4.3|1.2|mandatory|r@
1.4.3|docs/theme.htm||1.10|optional|r@
1.4.3|docs/translation.htm|||optional|r@
1.4.3|docs/pics|||mandatory|r@
1.4.3|docs/theme|||optional|r@
1.4.3|docs/theme/edit_style.html|||optional|r@
1.4.3|docs/theme/edit_template.html|||optional|r@
1.4.3|docs/theme/edit_theme.html|1.4.3|1.3|optional|r@
1.4.3|docs/theme/index.html||1.1|optional|r@
1.4.3|docs/theme/style.css|1.4.3|1.2|optional|r@
1.4.3|docs/theme/validation.html|||optional|r@
1.4.3|include|||mandatory|w@
1.4.3|include/archive.php|1.4.3|1.8|mandatory|r@
1.4.3|include/config.inc.php|||mandatory|r@
1.4.3|include/config.inc.php.sample|||optional|r@
1.4.3|include/crop.inc.php|1.4.3|1.9|mandatory|r@
1.4.3|include/debugger.inc.php|1.4.3|1.3|mandatory|r@
1.4.3|include/exif.php|1.4.3|1.2|mandatory|r@
1.4.3|include/exif_php.inc.php|1.4.3|1.11|mandatory|r@
1.4.3|include/exifReader.inc.php|1.4.3|1.8|mandatory|r@
1.4.3|include/functions.inc.php|1.4.3|1.36|mandatory|r@
1.4.3|include/imageObjectGD.class.php|1.4.3|1.9|mandatory|r@
1.4.3|include/imageObjectIM.class.php|1.4.3|1.8|mandatory|r@
1.4.3|include/index.html|1.4.3|1.3|mandatory|r@
1.4.3|include/init.inc.php|1.4.3|1.21|mandatory|r@
1.4.3|include/iptc.inc.php|1.4.3|1.8|mandatory|r@
1.4.3|include/keyword.inc.php|1.4.3|1.3|mandatory|r@
1.4.3|include/langfallback.inc.php|1.4.3|1.4|mandatory|r@
1.4.3|include/logger.inc.php|1.4.3|1.2|mandatory|r@
1.4.3|include/mailer.inc.php|1.4.3|1.11|mandatory|r@
1.4.3|include/mb.inc.php|1.4.3|1.3|mandatory|r@
1.4.3|include/media.functions.inc.php|1.4.3|1.8|mandatory|r@
1.4.3|include/phpmailer.lang-en.php|1.4.3|1.2|mandatory|r@
1.4.3|include/picmgmt.inc.php|1.4.3|1.16|mandatory|r@
1.4.3|include/plugin_api.inc.php|1.4.3|1.2|mandatory|r@
1.4.3|include/search.inc.php|1.4.3|1.11|mandatory|r@
1.4.3|include/select_lang.inc.php|1.4.3|1.11|mandatory|r@
1.4.3|include/slideshow.inc.php|1.4.3|1.13|mandatory|r@
1.4.3|include/smilies.inc.php|1.4.3|1.10|mandatory|r@
1.4.3|include/smtp.inc.php|1.4.3|1.2|mandatory|r@
1.4.3|include/sql_parse.php|1.4.3|1.10|mandatory|r@
1.4.3|include/themes.inc.php|1.4.3|1.6|mandatory|r@
1.4.3|include/update.inc.php|1.4.3|1.2|mandatory|r@
1.4.3|include/zip.lib.php|1.4.3|1.2|mandatory|r@
1.4.3|include/makers|||mandatory|w@
1.4.3|include/makers/canon.php|1.4.3|1.2|mandatory|r@
1.4.3|include/makers/fujifilm.php|1.4.3|1.2|mandatory|r@
1.4.3|include/makers/gps.php|1.4.3|1.2|mandatory|r@
1.4.3|include/makers/nikon.php|1.4.3|1.2|mandatory|r@
1.4.3|include/makers/olympus.php|1.4.3|1.2|mandatory|r@
1.4.3|include/makers/sanyo.php|1.4.3|1.2|mandatory|r@
1.4.3|lang|||mandatory|r@
1.4.3|lang/basque.php|1.4.3|1.4|optional|r@
1.4.3|lang/chinese_big5.php|1.4.3|1.13|optional|r@
1.4.3|lang/dutch.php|1.4.3|1.12|optional|r@
1.4.3|lang/english.php|1.4.3|1.24|mandatory|r@
1.4.3|lang/english_gb.php|1.4.3|1.2|optional|r@
1.4.3|lang/french.php|1.4.3|1.19|optional|r@
1.4.3|lang/german.php|1.4.3|1.17|optional|r@
1.4.3|lang/german_sie.php|1.4.3|1.8|optional|r@
1.4.3|lang/italian.php|1.4.3|1.13|optional|r@
1.4.3|lang/japanese.php|1.4.3|1.13|optional|r@
1.4.3|lang/korean.php|1.4.3|1.7|optional|r@
1.4.3|lang/norwegian.php|1.4.3|1.12|optional|r@
1.4.3|lang/polish.php|1.4.3|1.9|optional|r@
1.4.3|lang/russian.php|1.4.3|1.16|optional|r@
1.4.3|lang/slovenian.php|1.4.3|1.9|optional|r@
1.4.3|lang/spanish.php|1.4.3|1.11|optional|r@
1.4.3|lang/swedish.php|1.4.3|1.12|optional|r@
1.4.3|logs|||mandatory|w@
1.4.3|logs/log_header.inc.php|1.4.3|1.2|mandatory|r@
1.4.3|plugins|||optional|r@
1.4.3|plugins/sample|||optional|r@
1.4.3|plugins/sample/codebase.php|1.4.3|1.2|optional|r@
1.4.3|plugins/sample/configuration.php|1.4.3|1.2|optional|r@
1.4.3|plugins/sef_urls|||optional|r@
1.4.3|plugins/sef_urls/codebase.php|1.4.3|1.2|optional|r@
1.4.3|plugins/sef_urls/configuration.php|1.4.3|1.2|optional|r@
1.4.3|plugins/sef_urls/ht.txt|1.4.3|1.2|optional|r@
1.4.3|sql|||mandatory|r@
1.4.3|sql/basic.sql|1.4.3|1.13|mandatory|r@
1.4.3|sql/schema.sql|1.4.3|1.9|mandatory|r@
1.4.3|sql/update.sql|1.4.3|1.19|mandatory|r@
1.4.3|themes|||mandatory|r@
1.4.3|themes/classic|||optional|r@
1.4.3|themes/classic/style.css|1.4.3|1.6|optional|r@
1.4.3|themes/classic/template.html||1.9|optional|r@
1.4.3|themes/classic/theme.php|1.4.3|1.13|optional|r@
1.4.3|themes/classic/images|||optional|r@
1.4.3|themes/eyeball|||optional|r@
1.4.3|themes/eyeball/style.css|1.4.3|1.7|optional|r@
1.4.3|themes/eyeball/template.html||1.8|optional|r@
1.4.3|themes/eyeball/theme.php|1.4.3|1.15|optional|r@
1.4.3|themes/eyeball/images|||optional|r@
1.4.3|themes/fruity|||optional|r@
1.4.3|themes/fruity/style.css|1.4.3|1.7|optional|r@
1.4.3|themes/fruity/template.html||1.8|optional|r@
1.4.3|themes/fruity/theme.php|1.4.3|1.14|optional|r@
1.4.3|themes/fruity/images|||optional|r@
1.4.3|themes/hardwired|||optional|r@
1.4.3|themes/hardwired/style.css|1.4.3|1.7|optional|r@
1.4.3|themes/hardwired/template.html||1.9|optional|r@
1.4.3|themes/hardwired/theme.php|1.4.3|1.16|optional|r@
1.4.3|themes/hardwired/images|||optional|r@
1.4.3|themes/igames|||optional|r@
1.4.3|themes/igames/style.css|1.4.3|1.7|optional|r@
1.4.3|themes/igames/template.html||1.9|optional|r@
1.4.3|themes/igames/theme.php|1.4.3|1.15|optional|r@
1.4.3|themes/igames/images|||optional|r@
1.4.3|themes/mac_ox_x|||optional|r@
1.4.3|themes/mac_ox_x/style.css|1.4.3|1.7|optional|r@
1.4.3|themes/mac_ox_x/template.html||1.8|optional|r@
1.4.3|themes/mac_ox_x/theme.php|1.4.3|1.14|optional|r@
1.4.3|themes/mac_ox_x/images|||optional|r@
1.4.3|themes/project_vii|||optional|r@
1.4.3|themes/project_vii/style.css|1.4.3|1.9|optional|r@
1.4.3|themes/project_vii/template.html||1.7|optional|r@
1.4.3|themes/project_vii/theme.php|1.4.3|1.14|optional|r@
1.4.3|themes/project_vii/images|||optional|r@
1.4.3|themes/rainy_day|||optional|r@
1.4.3|themes/rainy_day/style.css|1.4.3|1.7|optional|r@
1.4.3|themes/rainy_day/template.html||1.6|optional|r@
1.4.3|themes/rainy_day/theme.php|1.4.3|1.14|optional|r@
1.4.3|themes/rainy_day/images|||optional|r@
1.4.3|themes/sample|||optional|r@
1.4.3|themes/sample/style.css|1.4.3|1.2|optional|r@
1.4.3|themes/sample/template.html|||optional|r@
1.4.3|themes/sample/theme.php|1.4.3|1.4|optional|r@
1.4.3|themes/sample/images|||optional|r@
1.4.3|themes/water_drop|||optional|r@
1.4.3|themes/water_drop/style.css|1.4.3|1.8|optional|r@
1.4.3|themes/water_drop/template.html||1.15|optional|r@
1.4.3|themes/water_drop/theme.php|1.4.3|1.14|optional|r@
1.4.3|themes/water_drop/images|||optional|r@
1.4.4|addfav.php|1.4.4|1.14|mandatory|r@
1.4.4|addpic.php|1.4.4|1.15|mandatory|r@
1.4.4|admin.php|1.4.4|1.15|mandatory|r@
1.4.4|albmgr.php|1.4.4|1.12|mandatory|r@
1.4.4|anycontent.php|1.4.4|1.12|mandatory|r@
1.4.4|banning.php|1.4.4|1.13|mandatory|r@
1.4.4|bridgemgr.php|1.4.4|1.8|mandatory|r@
1.4.4|calendar.php|1.4.4|1.10|mandatory|r@
1.4.4|catmgr.php|1.4.4|1.13|mandatory|r@
1.4.4|charsetmgr.php|1.4.4|1.4|mandatory|r@
1.4.4|db_ecard.php|1.4.4|1.11|mandatory|r@
1.4.4|db_input.php|1.4.4|1.18|mandatory|r@
1.4.4|delete.php|1.4.4|1.14|mandatory|r@
1.4.4|displayecard.php|1.4.4|1.12|mandatory|r@
1.4.4|displayimage.php|1.4.4|1.23|mandatory|r@
1.4.4|displayreport.php|1.4.4|1.4|mandatory|r@
1.4.4|ecard.php|1.4.4|1.20|mandatory|r@
1.4.4|editOnePic.php|1.4.4|1.20|mandatory|r@
1.4.4|editpics.php|1.4.4|1.14|mandatory|r@
1.4.4|exifmgr.php|1.4.4|1.4|mandatory|r@
1.4.4|faq.php|1.4.4|1.10|mandatory|r@
1.4.4|forgot_passwd.php|1.4.4|1.13|mandatory|r@
1.4.4|getlang.php|1.4.4|1.12|mandatory|r@
1.4.4|groupmgr.php|1.4.4|1.13|mandatory|r@
1.4.4|image_processor.php|1.4.4|1.12|mandatory|r@
1.4.4|index.php|1.4.4|1.23|mandatory|r@
1.4.4|install.php|1.4.4|1.24|mandatory|r@
1.4.4|installer.css|1.4.4|1.9|mandatory|r@
1.4.4|keyword_create_dict.php|1.4.4|1.4|mandatory|r@
1.4.4|keyword_select.php|1.4.4|1.4|mandatory|r@
1.4.4|keywordmgr.php|1.4.4|1.4|mandatory|r@
1.4.4|login.php|1.4.4|1.15|mandatory|r@
1.4.4|logout.php|1.4.4|1.12|mandatory|r@
1.4.4|minibrowser.php|1.4.4|1.4|mandatory|r@
1.4.4|mode.php|1.4.4|1.4|mandatory|r@
1.4.4|modifyalb.php|1.4.4|1.13|mandatory|r@
1.4.4|phpinfo.php|1.4.4|1.12|mandatory|r@
1.4.4|picEditor.php|1.4.4|1.11|mandatory|r@
1.4.4|picmgr.php|1.4.4|1.4|mandatory|r@
1.4.4|pluginmgr.php|1.4.4|1.4|mandatory|r@
1.4.4|profile.php|1.4.4|1.14|mandatory|r@
1.4.4|ratepic.php|1.4.4|1.12|mandatory|r@
1.4.4|register.php|1.4.4|1.18|mandatory|r@
1.4.4|report_file.php|1.4.4|1.4|mandatory|r@
1.4.4|reviewcom.php|1.4.4|1.12|mandatory|r@
1.4.4|scripts.js|1.4.4|1.5|mandatory|r@
1.4.4|search.php|1.4.4|1.13|mandatory|r@
1.4.4|searchnew.php|1.4.4|1.18|mandatory|r@
1.4.4|showthumb.php|1.4.4|1.12|mandatory|r@
1.4.4|stat_details.php|1.4.4|1.4|mandatory|r@
1.4.4|thumbnails.php|1.4.4|1.16|mandatory|r@
1.4.4|update.php|1.4.4|1.14|mandatory|r@
1.4.4|upgrade-1.0-to-1.2.php|1.4.4|1.13|mandatory|r@
1.4.4|upload.php|1.4.4|1.21|mandatory|r@
1.4.4|usermgr.php|1.4.4|1.13|mandatory|r@
1.4.4|util.php|1.4.4|1.20|mandatory|r@
1.4.4|versioncheck.php|1.4.4|1.26|mandatory|r@
1.4.4|viewlog.php|1.4.4|1.5|mandatory|r@
1.4.4|xp_publish.php|1.4.4|1.15|mandatory|r@
1.4.4|zipdownload.php|1.4.4|1.11|mandatory|r@
1.4.4|**fullpath**|||mandatory|w@
1.4.4|**fullpath**/index.php|||optional|w@
1.4.4|**fullpath**/edit/index.html|||optional|w@
1.4.4|**fullpath**/edit/no_FTP-uploads_into_this_folder!|||optional|w@
1.4.4|**fullpath**/edit|||mandatory|w@
1.4.4|**fullpath**/edit/index.html|||optional|w@
1.4.4|**fullpath**/**userpics**|||mandatory|w@
1.4.4|**fullpath**/**userpics**/index.php|||optional|w@
1.4.4|**fullpath**/**userpics**/no_FTP-uploads_into_this_folder!|||optional|w@
1.4.4|bridge|||mandatory|r@
1.4.4|bridge/coppermine.inc.php|1.4.4|1.7|mandatory|r@
1.4.4|bridge/invisionboard20.inc.php|1.4.4|1.4|optional|r@
1.4.4|bridge/mambo.inc.php|1.4.4|1.5|optional|r@
1.4.4|bridge/mybb.inc.php|1.4.4|1.5|optional|r@
1.4.4|bridge/phorum.inc.php|1.4.4|1.4|optional|r@
1.4.4|bridge/phpbb.inc.php|1.4.4|1.20|optional|r@
1.4.4|bridge/phpbb2018.inc.php|1.4.4|1.13|optional|r@
1.4.4|bridge/phpbb22.inc.php|1.4.4|1.4|optional|r@
1.4.4|bridge/punbb115.inc.php|1.4.4|1.4|optional|r@
1.4.4|bridge/punbb12.inc.php|1.4.4|1.5|optional|r@
1.4.4|bridge/smf10.inc.php|1.4.4|1.6|optional|r@
1.4.4|bridge/udb_base.inc.php|1.4.4|1.18|mandatory|r@
1.4.4|bridge/vbulletin30.inc.php|1.4.4|1.15|optional|r@
1.4.4|bridge/xmb.inc.php|1.4.4|1.4|optional|r@
1.4.4|bridge/xoops.inc.php|1.4.4|1.6|optional|r@
1.4.4|docs|||mandatory|r@
1.4.4|docs/faq.htm|||optional|r@
1.4.4|docs/faq_fr.htm|||optional|r@
1.4.4|docs/index.htm||1.12|mandatory|r@
1.4.4|docs/index_fr.htm||1.2|mandatory|r@
1.4.4|docs/README.html||1.17|optional|r@
1.4.4|docs/showdoc.php|1.4.4|1.5|mandatory|r@
1.4.4|docs/style.css|1.4.4|1.3|mandatory|r@
1.4.4|docs/theme.htm||1.10|optional|r@
1.4.4|docs/translation.htm|||optional|r@
1.4.4|docs/pics|||mandatory|r@
1.4.4|docs/theme|||optional|r@
1.4.4|docs/theme/edit_style.html|||optional|r@
1.4.4|docs/theme/edit_template.html|||optional|r@
1.4.4|docs/theme/edit_theme.html|1.4.4|1.5|optional|r@
1.4.4|docs/theme/index.html||1.1|optional|r@
1.4.4|docs/theme/style.css|1.4.4|1.3|optional|r@
1.4.4|docs/theme/validation.html|||optional|r@
1.4.4|include|||mandatory|w@
1.4.4|include/archive.php|1.4.4|1.10|mandatory|r@
1.4.4|include/config.inc.php|||mandatory|r@
1.4.4|include/config.inc.php.sample|||optional|r@
1.4.4|include/crop.inc.php|1.4.4|1.11|mandatory|r@
1.4.4|include/debugger.inc.php|1.4.4|1.5|mandatory|r@
1.4.4|include/exif.php|1.4.4|1.4|mandatory|r@
1.4.4|include/exif_php.inc.php|1.4.4|1.13|mandatory|r@
1.4.4|include/exifReader.inc.php|1.4.4|1.10|mandatory|r@
1.4.4|include/functions.inc.php|1.4.4|1.41|mandatory|r@
1.4.4|include/imageObjectGD.class.php|1.4.4|1.11|mandatory|r@
1.4.4|include/imageObjectIM.class.php|1.4.4|1.10|mandatory|r@
1.4.4|include/index.html|1.4.4|1.5|mandatory|r@
1.4.4|include/init.inc.php|1.4.4|1.25|mandatory|r@
1.4.4|include/iptc.inc.php|1.4.4|1.10|mandatory|r@
1.4.4|include/keyword.inc.php|1.4.4|1.5|mandatory|r@
1.4.4|include/langfallback.inc.php|1.4.4|1.9|mandatory|r@
1.4.4|include/logger.inc.php|1.4.4|1.4|mandatory|r@
1.4.4|include/mailer.inc.php|1.4.4|1.13|mandatory|r@
1.4.4|include/mb.inc.php|1.4.4|1.5|mandatory|r@
1.4.4|include/media.functions.inc.php|1.4.4|1.10|mandatory|r@
1.4.4|include/phpmailer.lang-en.php|1.4.4|1.4|mandatory|r@
1.4.4|include/picmgmt.inc.php|1.4.4|1.20|mandatory|r@
1.4.4|include/plugin_api.inc.php|1.4.4|1.4|mandatory|r@
1.4.4|include/search.inc.php|1.4.4|1.13|mandatory|r@
1.4.4|include/select_lang.inc.php|1.4.4|1.13|mandatory|r@
1.4.4|include/slideshow.inc.php|1.4.4|1.15|mandatory|r@
1.4.4|include/smilies.inc.php|1.4.4|1.12|mandatory|r@
1.4.4|include/smtp.inc.php|1.4.4|1.4|mandatory|r@
1.4.4|include/sql_parse.php|1.4.4|1.12|mandatory|r@
1.4.4|include/themes.inc.php|1.4.4|1.15|mandatory|r@
1.4.4|include/update.inc.php|1.4.4|1.3|mandatory|r@
1.4.4|include/zip.lib.php|1.4.4|1.4|mandatory|r@
1.4.4|include/makers|||mandatory|w@
1.4.4|include/makers/canon.php|1.4.4|1.4|mandatory|r@
1.4.4|include/makers/fujifilm.php|1.4.4|1.4|mandatory|r@
1.4.4|include/makers/gps.php|1.4.4|1.4|mandatory|r@
1.4.4|include/makers/nikon.php|1.4.4|1.4|mandatory|r@
1.4.4|include/makers/olympus.php|1.4.4|1.4|mandatory|r@
1.4.4|include/makers/sanyo.php|1.4.4|1.4|mandatory|r@
1.4.4|lang|||mandatory|r@
1.4.4|lang/basque.php|1.4.4|1.6|optional|r@
1.4.4|lang/chinese_big5.php|1.4.4|1.14|optional|r@
1.4.4|lang/chinese_gb.php|1.4.4|1.16|optional|r@
1.4.4|lang/czech.php|1.4.4|1.16|optional|r@
1.4.4|lang/dutch.php|1.4.4|1.14|optional|r@
1.4.4|lang/english.php|1.4.4|1.25|mandatory|r@
1.4.4|lang/english_gb.php|1.4.4|1.3|optional|r@
1.4.4|lang/french.php|1.4.4|1.20|optional|r@
1.4.4|lang/galician.php|1.4.4|1.7|optional|r@
1.4.4|lang/german.php|1.4.4|1.19|optional|r@
1.4.4|lang/german_sie.php|1.4.4|1.10|optional|r@
1.4.4|lang/italian.php|1.4.4|1.14|optional|r@
1.4.4|lang/japanese.php|1.4.4|1.14|optional|r@
1.4.4|lang/korean.php|1.4.4|1.8|optional|r@
1.4.4|lang/norwegian.php|1.4.4|1.13|optional|r@
1.4.4|lang/polish.php|1.4.4|1.13|optional|r@
1.4.4|lang/russian.php|1.4.4|1.19|optional|r@
1.4.4|lang/slovenian.php|1.4.4|1.10|optional|r@
1.4.4|lang/spanish.php|1.4.4|1.12|optional|r@
1.4.4|lang/swedish.php|1.4.4|1.13|optional|r@
1.4.4|lang/turkish.php|1.4.4|1.15|optional|r@
1.4.4|lang/ukrainian.php|1.4.4|1.15|optional|r@
1.4.4|logs|||mandatory|w@
1.4.4|logs/log_header.inc.php|1.4.4|1.4|mandatory|r@
1.4.4|plugins|||optional|r@
1.4.4|plugins/sample|||optional|r@
1.4.4|plugins/sample/codebase.php|1.4.4|1.4|optional|r@
1.4.4|plugins/sample/configuration.php|1.4.4|1.4|optional|r@
1.4.4|plugins/sef_urls|||optional|r@
1.4.4|plugins/sef_urls/codebase.php|1.4.4|1.7|optional|r@
1.4.4|plugins/sef_urls/configuration.php|1.4.4|1.4|optional|r@
1.4.4|plugins/sef_urls/ht.txt|1.4.4|1.6|optional|r@
1.4.4|sql|||mandatory|r@
1.4.4|sql/basic.sql|1.4.4|1.16|mandatory|r@
1.4.4|sql/schema.sql|1.4.4|1.12|mandatory|r@
1.4.4|sql/update.sql|1.4.4|1.22|mandatory|r@
1.4.4|themes|||mandatory|r@
1.4.4|themes/classic|||optional|r@
1.4.4|themes/classic/style.css|1.4.4|1.9|optional|r@
1.4.4|themes/classic/template.html||1.9|optional|r@
1.4.4|themes/classic/theme.php|1.4.4|1.15|optional|r@
1.4.4|themes/classic/images|||optional|r@
1.4.4|themes/eyeball|||optional|r@
1.4.4|themes/eyeball/style.css|1.4.4|1.9|optional|r@
1.4.4|themes/eyeball/template.html||1.8|optional|r@
1.4.4|themes/eyeball/theme.php|1.4.4|1.17|optional|r@
1.4.4|themes/eyeball/images|||optional|r@
1.4.4|themes/fruity|||optional|r@
1.4.4|themes/fruity/style.css|1.4.4|1.11|optional|r@
1.4.4|themes/fruity/template.html||1.8|optional|r@
1.4.4|themes/fruity/theme.php|1.4.4|1.16|optional|r@
1.4.4|themes/fruity/images|||optional|r@
1.4.4|themes/hardwired|||optional|r@
1.4.4|themes/hardwired/style.css|1.4.4|1.10|optional|r@
1.4.4|themes/hardwired/template.html||1.9|optional|r@
1.4.4|themes/hardwired/theme.php|1.4.4|1.18|optional|r@
1.4.4|themes/hardwired/images|||optional|r@
1.4.4|themes/igames|||optional|r@
1.4.4|themes/igames/style.css|1.4.4|1.9|optional|r@
1.4.4|themes/igames/template.html||1.9|optional|r@
1.4.4|themes/igames/theme.php|1.4.4|1.17|optional|r@
1.4.4|themes/igames/images|||optional|r@
1.4.4|themes/mac_ox_x|||optional|r@
1.4.4|themes/mac_ox_x/style.css|1.4.4|1.9|optional|r@
1.4.4|themes/mac_ox_x/template.html||1.8|optional|r@
1.4.4|themes/mac_ox_x/theme.php|1.4.4|1.16|optional|r@
1.4.4|themes/mac_ox_x/images|||optional|r@
1.4.4|themes/project_vii|||optional|r@
1.4.4|themes/project_vii/style.css|1.4.4|1.12|optional|r@
1.4.4|themes/project_vii/template.html||1.7|optional|r@
1.4.4|themes/project_vii/theme.php|1.4.4|1.17|optional|r@
1.4.4|themes/project_vii/images|||optional|r@
1.4.4|themes/rainy_day|||optional|r@
1.4.4|themes/rainy_day/style.css|1.4.4|1.10|optional|r@
1.4.4|themes/rainy_day/template.html||1.6|optional|r@
1.4.4|themes/rainy_day/theme.php|1.4.4|1.16|optional|r@
1.4.4|themes/rainy_day/images|||optional|r@
1.4.4|themes/sample|||optional|r@
1.4.4|themes/sample/style.css|1.4.4|1.5|optional|r@
1.4.4|themes/sample/template.html|||optional|r@
1.4.4|themes/sample/theme.php|1.4.4|1.6|optional|r@
1.4.4|themes/sample/images|||optional|r@
1.4.4|themes/water_drop|||optional|r@
1.4.4|themes/water_drop/style.css|1.4.4|1.11|optional|r@
1.4.4|themes/water_drop/template.html||1.15|optional|r@
1.4.4|themes/water_drop/theme.php|1.4.4|1.16|optional|r@
1.4.4|themes/water_drop/images|||optional|r@
1.4.5|addfav.php|1.4.5|1.15|mandatory|r@
1.4.5|addpic.php|1.4.5|1.16|mandatory|r@
1.4.5|admin.php|1.4.5|1.16|mandatory|r@
1.4.5|albmgr.php|1.4.5|1.13|mandatory|r@
1.4.5|anycontent.php|1.4.5|1.13|mandatory|r@
1.4.5|banning.php|1.4.5|1.14|mandatory|r@
1.4.5|bridgemgr.php|1.4.5|1.9|mandatory|r@
1.4.5|calendar.php|1.4.5|1.11|mandatory|r@
1.4.5|catmgr.php|1.4.5|1.14|mandatory|r@
1.4.5|charsetmgr.php|1.4.5|1.5|mandatory|r@
1.4.5|config.php|1.4.5|1.17|optional|r@
1.4.5|db_ecard.php|1.4.5|1.12|mandatory|r@
1.4.5|db_input.php|1.4.5|1.19|mandatory|r@
1.4.5|delete.php|1.4.5|1.15|mandatory|r@
1.4.5|displayecard.php|1.4.5|1.13|mandatory|r@
1.4.5|displayimage.php|1.4.5|1.24|mandatory|r@
1.4.5|displayreport.php|1.4.5|1.5|mandatory|r@
1.4.5|ecard.php|1.4.5|1.21|mandatory|r@
1.4.5|editOnePic.php|1.4.5|1.21|mandatory|r@
1.4.5|editpics.php|1.4.5|1.15|mandatory|r@
1.4.5|exifmgr.php|1.4.5|1.5|mandatory|r@
1.4.5|faq.php|1.4.5|1.11|mandatory|r@
1.4.5|forgot_passwd.php|1.4.5|1.14|mandatory|r@
1.4.5|getlang.php|1.4.5|1.13|mandatory|r@
1.4.5|groupmgr.php|1.4.5|1.14|mandatory|r@
1.4.5|image_processor.php|1.4.5|1.13|mandatory|r@
1.4.5|index.php|1.4.5|1.25|mandatory|r@
1.4.5|install.php|1.4.5|1.26|mandatory|r@
1.4.5|installer.css|1.4.5|1.10|mandatory|r@
1.4.5|keyword_create_dict.php|1.4.5|1.5|mandatory|r@
1.4.5|keyword_select.php|1.4.5|1.5|mandatory|r@
1.4.5|keywordmgr.php|1.4.5|1.5|mandatory|r@
1.4.5|login.php|1.4.5|1.16|mandatory|r@
1.4.5|logout.php|1.4.5|1.13|mandatory|r@
1.4.5|minibrowser.php|1.4.5|1.5|mandatory|r@
1.4.5|mode.php|1.4.5|1.5|mandatory|r@
1.4.5|modifyalb.php|1.4.5|1.14|mandatory|r@
1.4.5|phpinfo.php|1.4.5|1.13|mandatory|r@
1.4.5|picEditor.php|1.4.5|1.12|mandatory|r@
1.4.5|picmgr.php|1.4.5|1.5|mandatory|r@
1.4.5|pluginmgr.php|1.4.5|1.5|mandatory|r@
1.4.5|profile.php|1.4.5|1.15|mandatory|r@
1.4.5|ratepic.php|1.4.5|1.13|mandatory|r@
1.4.5|register.php|1.4.5|1.19|mandatory|r@
1.4.5|relocate_server.php|1.4.5|1.3|optional|r@
1.4.5|report_file.php|1.4.5|1.5|mandatory|r@
1.4.5|reviewcom.php|1.4.5|1.13|mandatory|r@
1.4.5|scripts.js|1.4.5|1.6|mandatory|r@
1.4.5|search.php|1.4.5|1.14|mandatory|r@
1.4.5|searchnew.php|1.4.5|1.19|mandatory|r@
1.4.5|showthumb.php|1.4.5|1.13|mandatory|r@
1.4.5|stat_details.php|1.4.5|1.5|mandatory|r@
1.4.5|thumbnails.php|1.4.5|1.17|mandatory|r@
1.4.5|update.php|1.4.5|1.15|mandatory|r@
1.4.5|upgrade-1.0-to-1.2.php|1.4.5|1.14|mandatory|r@
1.4.5|upload.php|1.4.5|1.22|mandatory|r@
1.4.5|usermgr.php|1.4.5|1.14|mandatory|r@
1.4.5|util.php|1.4.5|1.21|mandatory|r@
1.4.5|versioncheck.php|1.4.5|1.35|mandatory|r@
1.4.5|viewlog.php|1.4.5|1.6|mandatory|r@
1.4.5|xp_publish.php|1.4.5|1.16|mandatory|r@
1.4.5|zipdownload.php|1.4.5|1.12|mandatory|r@
1.4.5|**fullpath**|||mandatory|w@
1.4.5|**fullpath**/index.php|||optional|w@
1.4.5|**fullpath**/edit/index.html|||optional|w@
1.4.5|**fullpath**/edit/no_FTP-uploads_into_this_folder!|||optional|w@
1.4.5|**fullpath**/edit|||mandatory|w@
1.4.5|**fullpath**/edit/index.html|||optional|w@
1.4.5|**fullpath**/**userpics**|||mandatory|w@
1.4.5|**fullpath**/**userpics**/index.php|||optional|w@
1.4.5|**fullpath**/**userpics**/no_FTP-uploads_into_this_folder!|||optional|w@
1.4.5|bridge|||mandatory|r@
1.4.5|bridge/coppermine.inc.php|1.4.5|1.8|mandatory|r@
1.4.5|bridge/invisionboard20.inc.php|1.4.5|1.5|optional|r@
1.4.5|bridge/mambo.inc.php|1.4.5|1.6|optional|r@
1.4.5|bridge/mybb.inc.php|1.4.5|1.6|optional|r@
1.4.5|bridge/phorum.inc.php|1.4.5|1.5|optional|r@
1.4.5|bridge/phpbb.inc.php|1.4.5|1.21|optional|r@
1.4.5|bridge/phpbb2018.inc.php|1.4.5|1.14|optional|r@
1.4.5|bridge/phpbb22.inc.php|1.4.5|1.5|optional|r@
1.4.5|bridge/punbb115.inc.php|1.4.5|1.5|optional|r@
1.4.5|bridge/punbb12.inc.php|1.4.5|1.6|optional|r@
1.4.5|bridge/smf10.inc.php|1.4.5|1.7|optional|r@
1.4.5|bridge/udb_base.inc.php|1.4.5|1.19|mandatory|r@
1.4.5|bridge/vbulletin30.inc.php|1.4.5|1.16|optional|r@
1.4.5|bridge/xmb.inc.php|1.4.5|1.5|optional|r@
1.4.5|bridge/xoops.inc.php|1.4.5|1.7|optional|r@
1.4.5|docs|||mandatory|r@
1.4.5|docs/faq.htm|||optional|r@
1.4.5|docs/faq_fr.htm|||optional|r@
1.4.5|docs/index.htm||1.12|mandatory|r@
1.4.5|docs/index_fr.htm||1.2|mandatory|r@
1.4.5|docs/README.html||1.17|optional|r@
1.4.5|docs/showdoc.php|1.4.5|1.6|mandatory|r@
1.4.5|docs/style.css|1.4.5|1.4|mandatory|r@
1.4.5|docs/theme.htm||1.10|optional|r@
1.4.5|docs/translation.htm|||optional|r@
1.4.5|docs/pics|||mandatory|r@
1.4.5|docs/theme|||optional|r@
1.4.5|docs/theme/edit_style.html|||optional|r@
1.4.5|docs/theme/edit_template.html|||optional|r@
1.4.5|docs/theme/edit_theme.html|1.4.5|1.6|optional|r@
1.4.5|docs/theme/index.html||1.3|optional|r@
1.4.5|docs/theme/style.css|1.4.5|1.4|optional|r@
1.4.5|docs/theme/validation.html|||optional|r@
1.4.5|include|||mandatory|w@
1.4.5|include/archive.php|1.4.5|1.11|mandatory|r@
1.4.5|include/config.inc.php|||mandatory|r@
1.4.5|include/config.inc.php.sample|||optional|r@
1.4.5|include/crop.inc.php|1.4.5|1.12|mandatory|r@
1.4.5|include/debugger.inc.php|1.4.5|1.6|mandatory|r@
1.4.5|include/exif.php|1.4.5|1.5|mandatory|r@
1.4.5|include/exif_php.inc.php|1.4.5|1.14|mandatory|r@
1.4.5|include/exifReader.inc.php|1.4.5|1.11|mandatory|r@
1.4.5|include/functions.inc.php|1.4.5|1.44|mandatory|r@
1.4.5|include/imageObjectGD.class.php|1.4.5|1.12|mandatory|r@
1.4.5|include/imageObjectIM.class.php|1.4.5|1.11|mandatory|r@
1.4.5|include/index.html|1.4.5|1.6|mandatory|r@
1.4.5|include/init.inc.php|1.4.5|1.27|mandatory|r@
1.4.5|include/iptc.inc.php|1.4.5|1.11|mandatory|r@
1.4.5|include/keyword.inc.php|1.4.5|1.6|mandatory|r@
1.4.5|include/langfallback.inc.php|1.4.5|1.10|mandatory|r@
1.4.5|include/logger.inc.php|1.4.5|1.5|mandatory|r@
1.4.5|include/mailer.inc.php|1.4.5|1.14|mandatory|r@
1.4.5|include/mb.inc.php|1.4.5|1.6|mandatory|r@
1.4.5|include/media.functions.inc.php|1.4.5|1.11|mandatory|r@
1.4.5|include/phpmailer.lang-en.php|1.4.5|1.5|mandatory|r@
1.4.5|include/picmgmt.inc.php|1.4.5|1.21|mandatory|r@
1.4.5|include/plugin_api.inc.php|1.4.5|1.5|mandatory|r@
1.4.5|include/search.inc.php|1.4.5|1.14|mandatory|r@
1.4.5|include/select_lang.inc.php|1.4.5|1.14|mandatory|r@
1.4.5|include/slideshow.inc.php|1.4.5|1.16|mandatory|r@
1.4.5|include/smilies.inc.php|1.4.5|1.13|mandatory|r@
1.4.5|include/smtp.inc.php|1.4.5|1.5|mandatory|r@
1.4.5|include/sql_parse.php|1.4.5|1.13|mandatory|r@
1.4.5|include/themes.inc.php|1.4.5|1.16|mandatory|r@
1.4.5|include/update.inc.php|1.4.5|1.4|mandatory|r@
1.4.5|include/zip.lib.php|1.4.5|1.5|mandatory|r@
1.4.5|include/makers|||mandatory|w@
1.4.5|include/makers/canon.php|1.4.5|1.5|mandatory|r@
1.4.5|include/makers/fujifilm.php|1.4.5|1.5|mandatory|r@
1.4.5|include/makers/gps.php|1.4.5|1.5|mandatory|r@
1.4.5|include/makers/nikon.php|1.4.5|1.5|mandatory|r@
1.4.5|include/makers/olympus.php|1.4.5|1.5|mandatory|r@
1.4.5|include/makers/sanyo.php|1.4.5|1.5|mandatory|r@
1.4.5|lang|||mandatory|r@
1.4.5|lang/basque.php|1.4.5|1.7|optional|r@
1.4.5|lang/chinese_big5.php|1.4.5|1.15|optional|r@
1.4.5|lang/chinese_gb.php|1.4.5|1.17|optional|r@
1.4.5|lang/czech.php|1.4.3|1.19|optional|r@
1.4.5|lang/dutch.php|1.4.5|1.15|optional|r@
1.4.5|lang/english.php|1.4.5|1.26|mandatory|r@
1.4.5|lang/english_gb.php|1.4.5|1.4|optional|r@
1.4.5|lang/french.php|1.4.5|1.21|optional|r@
1.4.5|lang/galician.php|1.4.5|1.8|optional|r@
1.4.5|lang/georgian.php|1.4.4|1.1|optional|r@
1.4.5|lang/german.php|1.4.5|1.20|optional|r@
1.4.5|lang/german_sie.php|1.4.5|1.11|optional|r@
1.4.5|lang/italian.php|1.4.5|1.15|optional|r@
1.4.5|lang/japanese.php|1.4.5|1.15|optional|r@
1.4.5|lang/korean.php|1.4.5|1.9|optional|r@
1.4.5|lang/norwegian.php|1.4.5|1.14|optional|r@
1.4.5|lang/persian.php|1.4.4|1.4|optional|r@
1.4.5|lang/polish.php|1.4.5|1.14|optional|r@
1.4.5|lang/portuguese.php|1.4.5||optional|r@
1.4.5|lang/russian.php|1.4.5|1.21|optional|r@
1.4.5|lang/slovak.php|1.4.5|1.10|optional|r@
1.4.5|lang/slovenian.php|1.4.5|1.11|optional|r@
1.4.5|lang/spanish.php|1.4.5|1.13|optional|r@
1.4.5|lang/swedish.php|1.4.5|1.14|optional|r@
1.4.5|lang/turkish.php|1.4.5|1.16|optional|r@
1.4.5|lang/ukrainian.php|1.4.5|1.7|optional|r@
1.4.5|logs|||mandatory|w@
1.4.5|logs/log_header.inc.php|1.4.5|1.5|mandatory|r@
1.4.5|plugins|||optional|r@
1.4.5|plugins/sample|||optional|r@
1.4.5|plugins/sample/codebase.php|1.4.5|1.5|optional|r@
1.4.5|plugins/sample/configuration.php|1.4.5|1.5|optional|r@
1.4.5|plugins/sef_urls|||optional|r@
1.4.5|plugins/sef_urls/codebase.php|1.4.5|1.8|optional|r@
1.4.5|plugins/sef_urls/configuration.php|1.4.5|1.5|optional|r@
1.4.5|plugins/sef_urls/ht.txt|1.4.5|1.7|optional|r@
1.4.5|sql|||mandatory|r@
1.4.5|sql/basic.sql|1.4.5|1.18|mandatory|r@
1.4.5|sql/schema.sql|1.4.5|1.13|mandatory|r@
1.4.5|sql/update.sql|1.4.5|1.23|mandatory|r@
1.4.5|themes|||mandatory|r@
1.4.5|themes/classic|||optional|r@
1.4.5|themes/classic/style.css|1.4.5|1.10|optional|r@
1.4.5|themes/classic/template.html||1.9|optional|r@
1.4.5|themes/classic/theme.php|1.4.5|1.16|optional|r@
1.4.5|themes/classic/images|||optional|r@
1.4.5|themes/eyeball|||optional|r@
1.4.5|themes/eyeball/style.css|1.4.5|1.10|optional|r@
1.4.5|themes/eyeball/template.html||1.8|optional|r@
1.4.5|themes/eyeball/theme.php|1.4.5|1.18|optional|r@
1.4.5|themes/eyeball/images|||optional|r@
1.4.5|themes/fruity|||optional|r@
1.4.5|themes/fruity/style.css|1.4.5|1.12|optional|r@
1.4.5|themes/fruity/template.html||1.8|optional|r@
1.4.5|themes/fruity/theme.php|1.4.5|1.17|optional|r@
1.4.5|themes/fruity/images|||optional|r@
1.4.5|themes/hardwired|||optional|r@
1.4.5|themes/hardwired/style.css|1.4.5|1.11|optional|r@
1.4.5|themes/hardwired/template.html||1.9|optional|r@
1.4.5|themes/hardwired/theme.php|1.4.5|1.19|optional|r@
1.4.5|themes/hardwired/images|||optional|r@
1.4.5|themes/igames|||optional|r@
1.4.5|themes/igames/style.css|1.4.5|1.10|optional|r@
1.4.5|themes/igames/template.html||1.9|optional|r@
1.4.5|themes/igames/theme.php|1.4.5|1.18|optional|r@
1.4.5|themes/igames/images|||optional|r@
1.4.5|themes/mac_ox_x|||optional|r@
1.4.5|themes/mac_ox_x/style.css|1.4.5|1.10|optional|r@
1.4.5|themes/mac_ox_x/template.html||1.8|optional|r@
1.4.5|themes/mac_ox_x/theme.php|1.4.5|1.17|optional|r@
1.4.5|themes/mac_ox_x/images|||optional|r@
1.4.5|themes/project_vii|||optional|r@
1.4.5|themes/project_vii/style.css|1.4.5|1.13|optional|r@
1.4.5|themes/project_vii/template.html||1.7|optional|r@
1.4.5|themes/project_vii/theme.php|1.4.5|1.18|optional|r@
1.4.5|themes/project_vii/images|||optional|r@
1.4.5|themes/rainy_day|||optional|r@
1.4.5|themes/rainy_day/style.css|1.4.5|1.11|optional|r@
1.4.5|themes/rainy_day/template.html||1.6|optional|r@
1.4.5|themes/rainy_day/theme.php|1.4.5|1.17|optional|r@
1.4.5|themes/rainy_day/images|||optional|r@
1.4.5|themes/sample|||optional|r@
1.4.5|themes/sample/style.css|1.4.5|1.6|optional|r@
1.4.5|themes/sample/template.html|||optional|r@
1.4.5|themes/sample/theme.php|1.4.5|1.7|optional|r@
1.4.5|themes/sample/images|||optional|r@
1.4.5|themes/water_drop|||optional|r@
1.4.5|themes/water_drop/style.css|1.4.5|1.12|optional|r@
1.4.5|themes/water_drop/template.html||1.15|optional|r@
1.4.5|themes/water_drop/theme.php|1.4.5|1.17|optional|r@
1.4.5|themes/water_drop/images|||optional|r@
1.4.6|addfav.php|1.4.6|3014|mandatory|r@
1.4.6|addpic.php|1.4.6|3014|mandatory|r@
1.4.6|admin.php|1.4.6|3014|mandatory|r@
1.4.6|albmgr.php|1.4.6|3014|mandatory|r@
1.4.6|anycontent.php|1.4.6|3014|mandatory|r@
1.4.6|banning.php|1.4.6|3014|mandatory|r@
1.4.6|bridgemgr.php|1.4.6|3014|mandatory|r@
1.4.6|calendar.php|1.4.6|3014|mandatory|r@
1.4.6|catmgr.php|1.4.6|3063|mandatory|r@
1.4.6|charsetmgr.php|1.4.6|3014|mandatory|r@
1.4.6|config.php|1.4.6|3014|optional|r@
1.4.6|db_ecard.php|1.4.6|3014|mandatory|r@
1.4.6|db_input.php|1.4.6|3069|mandatory|r@
1.4.6|delete.php|1.4.6|3014|mandatory|r@
1.4.6|displayecard.php|1.4.6|3014|mandatory|r@
1.4.6|displayimage.php|1.4.6|3014|mandatory|r@
1.4.6|displayreport.php|1.4.6|3014|mandatory|r@
1.4.6|ecard.php|1.4.6|3014|mandatory|r@
1.4.6|editOnePic.php|1.4.6|3069|mandatory|r@
1.4.6|editpics.php|1.4.6|3069|mandatory|r@
1.4.6|exifmgr.php|1.4.6|3014|mandatory|r@
1.4.6|faq.php|1.4.6|3014|mandatory|r@
1.4.6|forgot_passwd.php|1.4.6|3014|mandatory|r@
1.4.6|getlang.php|1.4.6|3014|mandatory|r@
1.4.6|groupmgr.php|1.4.6|3014|mandatory|r@
1.4.6|image_processor.php|1.4.6|3014|mandatory|r@
1.4.6|index.php|1.4.6|3053|mandatory|r@
1.4.6|install.php|1.4.6|3074|mandatory|r@
1.4.6|installer.css|1.4.6|3014|mandatory|r@
1.4.6|keyword_create_dict.php|1.4.6|3014|mandatory|r@
1.4.6|keyword_select.php|1.4.6|3051|mandatory|r@
1.4.6|keywordmgr.php|1.4.6|3014|mandatory|r@
1.4.6|login.php|1.4.6|3014|mandatory|r@
1.4.6|logout.php|1.4.6|3014|mandatory|r@
1.4.6|minibrowser.php|1.4.6|3014|mandatory|r@
1.4.6|mode.php|1.4.6|3014|mandatory|r@
1.4.6|modifyalb.php|1.4.6|3014|mandatory|r@
1.4.6|phpinfo.php|1.4.6|3014|mandatory|r@
1.4.6|picEditor.php|1.4.6|3014|mandatory|r@
1.4.6|picmgr.php|1.4.6|3014|mandatory|r@
1.4.6|pluginmgr.php|1.4.6|3014|mandatory|r@
1.4.6|profile.php|1.4.6|3033|mandatory|r@
1.4.6|ratepic.php|1.4.6|3014|mandatory|r@
1.4.6|register.php|1.4.6|3014|mandatory|r@
1.4.6|relocate_server.php|1.4.6|3014|optional|r@
1.4.6|report_file.php|1.4.6|3014|mandatory|r@
1.4.6|reviewcom.php|1.4.6|3014|mandatory|r@
1.4.6|scripts.js|1.4.6|3014|mandatory|r@
1.4.6|search.php|1.4.6|3014|mandatory|r@
1.4.6|searchnew.php|1.4.6|3018|mandatory|r@
1.4.6|showthumb.php|1.4.6|3014|mandatory|r@
1.4.6|stat_details.php|1.4.6|3051|mandatory|r@
1.4.6|thumbnails.php|1.4.6|3014|mandatory|r@
1.4.6|update.php|1.4.6|3014|mandatory|r@
1.4.6|upgrade-1.0-to-1.2.php|1.4.6|3014|mandatory|r@
1.4.6|upload.php|1.4.6|3014|mandatory|r@
1.4.6|usermgr.php|1.4.6|3014|mandatory|r@
1.4.6|util.php|1.4.6|3014|mandatory|r@
1.4.6|versioncheck.php|1.4.6|3078|mandatory|r@
1.4.6|viewlog.php|1.4.6|3014|mandatory|r@
1.4.6|xp_publish.php|1.4.6|3051|mandatory|r@
1.4.6|zipdownload.php|1.4.6|3014|mandatory|r@
1.4.6|**fullpath**|||mandatory|w@
1.4.6|**fullpath**/index.php|||optional|w@
1.4.6|**fullpath**/edit/index.html|||optional|w@
1.4.6|**fullpath**/edit/no_FTP-uploads_into_this_folder!|||optional|w@
1.4.6|**fullpath**/edit|||mandatory|w@
1.4.6|**fullpath**/edit/index.html|||optional|w@
1.4.6|**fullpath**/**userpics**|||mandatory|w@
1.4.6|**fullpath**/**userpics**/index.php|||optional|w@
1.4.6|**fullpath**/**userpics**/no_FTP-uploads_into_this_folder!|||optional|w@
1.4.6|bridge|||mandatory|r@
1.4.6|bridge/coppermine.inc.php|1.4.6|3014|mandatory|r@
1.4.6|bridge/invisionboard20.inc.php|1.4.6|3015|optional|r@
1.4.6|bridge/mambo.inc.php|1.4.6|3014|optional|r@
1.4.6|bridge/mybb.inc.php|1.4.6|3014|optional|r@
1.4.6|bridge/phorum.inc.php|1.4.6|3014|optional|r@
1.4.6|bridge/phpbb.inc.php|1.4.6|3014|optional|r@
1.4.6|bridge/phpbb2018.inc.php|1.4.6|3014|optional|r@
1.4.6|bridge/phpbb22.inc.php|1.4.6|3014|optional|r@
1.4.6|bridge/punbb115.inc.php|1.4.6|3014|optional|r@
1.4.6|bridge/punbb12.inc.php|1.4.6|3014|optional|r@
1.4.6|bridge/smf10.inc.php|1.4.6|3014|optional|r@
1.4.6|bridge/udb_base.inc.php|1.4.6|3038|mandatory|r@
1.4.6|bridge/vbulletin30.inc.php|1.4.6|3014|optional|r@
1.4.6|bridge/xmb.inc.php|1.4.6|3014|optional|r@
1.4.6|bridge/xoops.inc.php|1.4.6|3014|optional|r@
1.4.6|docs|||mandatory|r@
1.4.6|docs/faq.htm|||optional|r@
1.4.6|docs/faq_fr.htm|||optional|r@
1.4.6|docs/index.htm||3014|mandatory|r@
1.4.6|docs/index_fr.htm||3014|mandatory|r@
1.4.6|docs/README.html||3014|optional|r@
1.4.6|docs/showdoc.php|1.4.6|3014|mandatory|r@
1.4.6|docs/style.css|1.4.6|3014|mandatory|r@
1.4.6|docs/theme.htm|||optional|r@
1.4.6|docs/translation.htm|||optional|r@
1.4.6|docs/pics|||mandatory|r@
1.4.6|docs/theme|||optional|r@
1.4.6|docs/theme/edit_style.html|||optional|r@
1.4.6|docs/theme/edit_template.html|||optional|r@
1.4.6|docs/theme/edit_theme.html|1.4.6||optional|r@
1.4.6|docs/theme/index.html|||optional|r@
1.4.6|docs/theme/style.css|1.4.6|3014|optional|r@
1.4.6|docs/theme/validation.html|||optional|r@
1.4.6|include|||mandatory|w@
1.4.6|include/archive.php|1.4.6|3014|mandatory|r@
1.4.6|include/config.inc.php|||mandatory|r@
1.4.6|include/config.inc.php.sample|||optional|r@
1.4.6|include/crop.inc.php|1.4.6|3014|mandatory|r@
1.4.6|include/debugger.inc.php|1.4.6|3014|mandatory|r@
1.4.6|include/exif.php|1.4.6|3014|mandatory|r@
1.4.6|include/exif_php.inc.php|1.4.6|3014|mandatory|r@
1.4.6|include/exifReader.inc.php|1.4.6|3014|mandatory|r@
1.4.6|include/functions.inc.php|1.4.6|3068|mandatory|r@
1.4.6|include/imageObjectGD.class.php|1.4.6|3014|mandatory|r@
1.4.6|include/imageObjectIM.class.php|1.4.6|3014|mandatory|r@
1.4.6|include/index.html|1.4.6|3014|mandatory|r@
1.4.6|include/init.inc.php|1.4.6|3039|mandatory|r@
1.4.6|include/iptc.inc.php|1.4.6|3014|mandatory|r@
1.4.6|include/keyword.inc.php|1.4.6|3071|mandatory|r@
1.4.6|include/langfallback.inc.php|1.4.6|3014|mandatory|r@
1.4.6|include/logger.inc.php|1.4.6|3014|mandatory|r@
1.4.6|include/mailer.inc.php|1.4.6|3014|mandatory|r@
1.4.6|include/mb.inc.php|1.4.6|3014|mandatory|r@
1.4.6|include/media.functions.inc.php|1.4.6|3014|mandatory|r@
1.4.6|include/phpmailer.lang-en.php|1.4.6|3014|mandatory|r@
1.4.6|include/picmgmt.inc.php|1.4.6|3055|mandatory|r@
1.4.6|include/plugin_api.inc.php|1.4.6|3014|mandatory|r@
1.4.6|include/search.inc.php|1.4.6|3036|mandatory|r@
1.4.6|include/select_lang.inc.php|1.4.6|3014|mandatory|r@
1.4.6|include/slideshow.inc.php|1.4.6|3014|mandatory|r@
1.4.6|include/smilies.inc.php|1.4.6|3014|mandatory|r@
1.4.6|include/smtp.inc.php|1.4.6|3014|mandatory|r@
1.4.6|include/sql_parse.php|1.4.6|3014|mandatory|r@
1.4.6|include/themes.inc.php|1.4.6|3053|mandatory|r@
1.4.6|include/update.inc.php|1.4.6|3014|mandatory|r@
1.4.6|include/zip.lib.php|1.4.6|3014|mandatory|r@
1.4.6|include/makers|||mandatory|w@
1.4.6|include/makers/canon.php|1.4.6|3014|mandatory|r@
1.4.6|include/makers/fujifilm.php|1.4.6|3014|mandatory|r@
1.4.6|include/makers/gps.php|1.4.6|3014|mandatory|r@
1.4.6|include/makers/nikon.php|1.4.6|3014|mandatory|r@
1.4.6|include/makers/olympus.php|1.4.6|3014|mandatory|r@
1.4.6|include/makers/sanyo.php|1.4.6|3014|mandatory|r@
1.4.6|lang|||mandatory|r@
1.4.6|lang/basque.php|1.4.6|3014|optional|r@
1.4.6|lang/chinese_big5.php|1.4.6|3014|optional|r@
1.4.6|lang/chinese_gb.php|1.4.6|3014|optional|r@
1.4.6|lang/czech.php|1.4.6|3075|optional|r@
1.4.6|lang/dutch.php|1.4.6|3014|optional|r@
1.4.6|lang/english.php|1.4.6|3014|mandatory|r@
1.4.6|lang/english_gb.php|1.4.6|3030|optional|r@
1.4.6|lang/french.php|1.4.6|3077|optional|r@
1.4.6|lang/galician.php|1.4.6|3014|optional|r@
1.4.6|lang/georgian.php|1.4.6|3076|optional|r@
1.4.6|lang/german.php|1.4.6|3014|optional|r@
1.4.6|lang/german_sie.php|1.4.6|3014|optional|r@
1.4.6|lang/hebrew.php|1.4.6|3076|optional|r@
1.4.6|lang/hungarian.php|1.4.6|3075|optional|r@
1.4.6|lang/italian.php|1.4.6|3014|optional|r@
1.4.6|lang/japanese.php|1.4.6|3014|optional|r@
1.4.6|lang/korean.php|1.4.6|3014|optional|r@
1.4.6|lang/norwegian.php|1.4.6|3014|optional|r@
1.4.6|lang/persian.php|1.4.6|3077|optional|r@
1.4.6|lang/polish.php|1.4.6|3014|optional|r@
1.4.6|lang/portuguese.php|1.4.6|3077|optional|r@
1.4.6|lang/russian.php|1.4.6|3014|optional|r@
1.4.6|lang/slovak.php|1.4.6|3014|optional|r@
1.4.6|lang/slovenian.php|1.4.6|3014|optional|r@
1.4.6|lang/spanish.php|1.4.6|3014|optional|r@
1.4.6|lang/swedish.php|1.4.6|3014|optional|r@
1.4.6|lang/turkish.php|1.4.6|3077|optional|r@
1.4.6|lang/ukrainian.php|1.4.6|3077|optional|r@
1.4.6|logs|||mandatory|w@
1.4.6|logs/log_header.inc.php|1.4.6|3014|mandatory|r@
1.4.6|plugins|||optional|r@
1.4.6|plugins/sample|||optional|r@
1.4.6|plugins/sample/codebase.php|1.4.6|3014|optional|r@
1.4.6|plugins/sample/configuration.php|1.4.6|3014|optional|r@
1.4.6|plugins/sef_urls|||optional|r@
1.4.6|plugins/sef_urls/codebase.php|1.4.6|3014|optional|r@
1.4.6|plugins/sef_urls/configuration.php|1.4.6|3014|optional|r@
1.4.6|plugins/sef_urls/ht.txt|1.4.6|3014|optional|r@
1.4.6|sql|||mandatory|r@
1.4.6|sql/basic.sql|1.4.6|3014|mandatory|r@
1.4.6|sql/schema.sql|1.4.6|3014|mandatory|r@
1.4.6|sql/update.sql|1.4.6|3014|mandatory|r@
1.4.6|themes|||mandatory|r@
1.4.6|themes/classic|||optional|r@
1.4.6|themes/classic/style.css|1.4.6|3014|optional|r@
1.4.6|themes/classic/template.html||3014|optional|r@
1.4.6|themes/classic/theme.php|1.4.6|3014|optional|r@
1.4.6|themes/classic/images|||optional|r@
1.4.6|themes/eyeball|||optional|r@
1.4.6|themes/eyeball/style.css|1.4.6|3014|optional|r@
1.4.6|themes/eyeball/template.html||3014|optional|r@
1.4.6|themes/eyeball/theme.php|1.4.6|3014|optional|r@
1.4.6|themes/eyeball/images|||optional|r@
1.4.6|themes/fruity|||optional|r@
1.4.6|themes/fruity/style.css|1.4.6|3021|optional|r@
1.4.6|themes/fruity/template.html||3014|optional|r@
1.4.6|themes/fruity/theme.php|1.4.6|3014|optional|r@
1.4.6|themes/fruity/images|||optional|r@
1.4.6|themes/hardwired|||optional|r@
1.4.6|themes/hardwired/style.css|1.4.6|3014|optional|r@
1.4.6|themes/hardwired/template.html||3014|optional|r@
1.4.6|themes/hardwired/theme.php|1.4.6|3014|optional|r@
1.4.6|themes/hardwired/images|||optional|r@
1.4.6|themes/igames|||optional|r@
1.4.6|themes/igames/style.css|1.4.6|3014|optional|r@
1.4.6|themes/igames/template.html||3014|optional|r@
1.4.6|themes/igames/theme.php|1.4.6|3014|optional|r@
1.4.6|themes/igames/images|||optional|r@
1.4.6|themes/mac_ox_x|||optional|r@
1.4.6|themes/mac_ox_x/style.css|1.4.6|3014|optional|r@
1.4.6|themes/mac_ox_x/template.html||3014|optional|r@
1.4.6|themes/mac_ox_x/theme.php|1.4.6|3014|optional|r@
1.4.6|themes/mac_ox_x/images|||optional|r@
1.4.6|themes/project_vii|||optional|r@
1.4.6|themes/project_vii/style.css|1.4.6|3014|optional|r@
1.4.6|themes/project_vii/template.html||3014|optional|r@
1.4.6|themes/project_vii/theme.php|1.4.6|3014|optional|r@
1.4.6|themes/project_vii/images|||optional|r@
1.4.6|themes/rainy_day|||optional|r@
1.4.6|themes/rainy_day/style.css|1.4.6|3014|optional|r@
1.4.6|themes/rainy_day/template.html||3014|optional|r@
1.4.6|themes/rainy_day/theme.php|1.4.6|3014|optional|r@
1.4.6|themes/rainy_day/images|||optional|r@
1.4.6|themes/sample|||optional|r@
1.4.6|themes/sample/style.css|1.4.6|3014|optional|r@
1.4.6|themes/sample/template.html||3014|optional|r@
1.4.6|themes/sample/theme.php|1.4.6|3053|optional|r@
1.4.6|themes/sample/images|||optional|r@
1.4.6|themes/water_drop|||optional|r@
1.4.6|themes/water_drop/style.css|1.4.6|3014|optional|r@
1.4.6|themes/water_drop/template.html||3014|optional|r@
1.4.6|themes/water_drop/theme.php|1.4.6|3014|optional|r@
1.4.6|themes/water_drop/images|||optional|r@
1.4.7|addfav.php|1.4.7|3082|mandatory|r@
1.4.7|addpic.php|1.4.7|3082|mandatory|r@
1.4.7|admin.php|1.4.7|3082|mandatory|r@
1.4.7|albmgr.php|1.4.7|3082|mandatory|r@
1.4.7|anycontent.php|1.4.7|3082|mandatory|r@
1.4.7|banning.php|1.4.7|3082|mandatory|r@
1.4.7|bridgemgr.php|1.4.7|3082|mandatory|r@
1.4.7|calendar.php|1.4.7|3082|mandatory|r@
1.4.7|catmgr.php|1.4.7|3082|mandatory|r@
1.4.7|charsetmgr.php|1.4.7|3082|mandatory|r@
1.4.7|config.php|1.4.7|3082|optional|r@
1.4.7|db_ecard.php|1.4.7|3082|mandatory|r@
1.4.7|db_input.php|1.4.7|3082|mandatory|r@
1.4.7|delete.php|1.4.7|3082|mandatory|r@
1.4.7|displayecard.php|1.4.7|3082|mandatory|r@
1.4.7|displayimage.php|1.4.7|3082|mandatory|r@
1.4.7|displayreport.php|1.4.7|3082|mandatory|r@
1.4.7|ecard.php|1.4.7|3082|mandatory|r@
1.4.7|editOnePic.php|1.4.7|3082|mandatory|r@
1.4.7|editpics.php|1.4.7|3082|mandatory|r@
1.4.7|exifmgr.php|1.4.7|3082|mandatory|r@
1.4.7|faq.php|1.4.7|3082|mandatory|r@
1.4.7|forgot_passwd.php|1.4.7|3082|mandatory|r@
1.4.7|getlang.php|1.4.7|3082|mandatory|r@
1.4.7|groupmgr.php|1.4.7|3082|mandatory|r@
1.4.7|image_processor.php|1.4.7|3082|mandatory|r@
1.4.7|index.php|1.4.7|3082|mandatory|r@
1.4.7|install.php|1.4.7|3082|mandatory|r@
1.4.7|installer.css|1.4.7|3082|mandatory|r@
1.4.7|keyword_create_dict.php|1.4.7|3082|mandatory|r@
1.4.7|keyword_select.php|1.4.7|3082|mandatory|r@
1.4.7|keywordmgr.php|1.4.7|3082|mandatory|r@
1.4.7|login.php|1.4.7|3082|mandatory|r@
1.4.7|logout.php|1.4.7|3082|mandatory|r@
1.4.7|minibrowser.php|1.4.7|3082|mandatory|r@
1.4.7|mode.php|1.4.7|3082|mandatory|r@
1.4.7|modifyalb.php|1.4.7|3082|mandatory|r@
1.4.7|phpinfo.php|1.4.7|3082|mandatory|r@
1.4.7|picEditor.php|1.4.7|3082|mandatory|r@
1.4.7|picmgr.php|1.4.7|3082|mandatory|r@
1.4.7|pluginmgr.php|1.4.7|3082|mandatory|r@
1.4.7|profile.php|1.4.7|3082|mandatory|r@
1.4.7|ratepic.php|1.4.7|3082|mandatory|r@
1.4.7|register.php|1.4.7|3082|mandatory|r@
1.4.7|relocate_server.php|1.4.7|3082|optional|r@
1.4.7|report_file.php|1.4.7|3082|mandatory|r@
1.4.7|reviewcom.php|1.4.7|3082|mandatory|r@
1.4.7|scripts.js|1.4.7|3082|mandatory|r@
1.4.7|search.php|1.4.7|3082|mandatory|r@
1.4.7|searchnew.php|1.4.7|3082|mandatory|r@
1.4.7|showthumb.php|1.4.7|3082|mandatory|r@
1.4.7|stat_details.php|1.4.7|3082|mandatory|r@
1.4.7|thumbnails.php|1.4.7|3082|mandatory|r@
1.4.7|update.php|1.4.7|3082|mandatory|r@
1.4.7|upgrade-1.0-to-1.2.php|1.4.7|3082|mandatory|r@
1.4.7|upload.php|1.4.7|3082|mandatory|r@
1.4.7|usermgr.php|1.4.7|3101|mandatory|r@
1.4.7|util.php|1.4.7|3082|mandatory|r@
1.4.7|versioncheck.php|1.4.7|3113|mandatory|r@
1.4.7|viewlog.php|1.4.7|3082|mandatory|r@
1.4.7|xp_publish.php|1.4.7|3082|mandatory|r@
1.4.7|zipdownload.php|1.4.7|3082|mandatory|r@
1.4.7|**fullpath**|||mandatory|w@
1.4.7|**fullpath**/index.php|||optional|w@
1.4.7|**fullpath**/edit/index.html|||optional|w@
1.4.7|**fullpath**/edit/no_FTP-uploads_into_this_folder!|||optional|w@
1.4.7|**fullpath**/edit|||mandatory|w@
1.4.7|**fullpath**/edit/index.html|||optional|w@
1.4.7|**fullpath**/**userpics**|||mandatory|w@
1.4.7|**fullpath**/**userpics**/index.php|||optional|w@
1.4.7|**fullpath**/**userpics**/no_FTP-uploads_into_this_folder!|||optional|w@
1.4.7|bridge|||mandatory|r@
1.4.7|bridge/coppermine.inc.php|1.4.7|3082|mandatory|r@
1.4.7|bridge/invisionboard20.inc.php|1.4.7|3082|optional|r@
1.4.7|bridge/mambo.inc.php|1.4.7|3082|optional|r@
1.4.7|bridge/mybb.inc.php|1.4.7|3082|optional|r@
1.4.7|bridge/phorum.inc.php|1.4.7|3082|optional|r@
1.4.7|bridge/phpbb.inc.php|1.4.7|3082|optional|r@
1.4.7|bridge/phpbb2018.inc.php|1.4.7|3082|optional|r@
1.4.7|bridge/phpbb22.inc.php|1.4.7|3082|optional|r@
1.4.7|bridge/punbb115.inc.php|1.4.7|3082|optional|r@
1.4.7|bridge/punbb12.inc.php|1.4.7|3082|optional|r@
1.4.7|bridge/smf10.inc.php|1.4.7|3082|optional|r@
1.4.7|bridge/udb_base.inc.php|1.4.7|3082|mandatory|r@
1.4.7|bridge/vbulletin30.inc.php|1.4.7|3082|optional|r@
1.4.7|bridge/xmb.inc.php|1.4.7|3082|optional|r@
1.4.7|bridge/xoops.inc.php|1.4.7|3082|optional|r@
1.4.7|docs|||mandatory|r@
1.4.7|docs/faq.htm|||optional|r@
1.4.7|docs/faq_fr.htm|||optional|r@
1.4.7|docs/index.htm||3082|mandatory|r@
1.4.7|docs/index_fr.htm||3082|mandatory|r@
1.4.7|docs/README.html||3082|optional|r@
1.4.7|docs/showdoc.php|1.4.7|3082|mandatory|r@
1.4.7|docs/style.css|1.4.7|3082|mandatory|r@
1.4.7|docs/theme.htm|||optional|r@
1.4.7|docs/translation.htm|||optional|r@
1.4.7|docs/pics|||mandatory|r@
1.4.7|docs/theme|||optional|r@
1.4.7|docs/theme/edit_style.html|||optional|r@
1.4.7|docs/theme/edit_template.html|||optional|r@
1.4.7|docs/theme/edit_theme.html|1.4.7||optional|r@
1.4.7|docs/theme/index.html|||optional|r@
1.4.7|docs/theme/style.css|1.4.7|3082|optional|r@
1.4.7|docs/theme/validation.html|||optional|r@
1.4.7|include|||mandatory|w@
1.4.7|include/archive.php|1.4.7|3082|mandatory|r@
1.4.7|include/config.inc.php|||mandatory|r@
1.4.7|include/config.inc.php.sample|||optional|r@
1.4.7|include/crop.inc.php|1.4.7|3082|mandatory|r@
1.4.7|include/debugger.inc.php|1.4.7|3082|mandatory|r@
1.4.7|include/exif.php|1.4.7|3082|mandatory|r@
1.4.7|include/exif_php.inc.php|1.4.7|3082|mandatory|r@
1.4.7|include/exifReader.inc.php|1.4.7|3082|mandatory|r@
1.4.7|include/functions.inc.php|1.4.7|3108|mandatory|r@
1.4.7|include/imageObjectGD.class.php|1.4.7|3082|mandatory|r@
1.4.7|include/imageObjectIM.class.php|1.4.7|3082|mandatory|r@
1.4.7|include/index.html|1.4.7|3082|mandatory|r@
1.4.7|include/init.inc.php|1.4.7|3082|mandatory|r@
1.4.7|include/iptc.inc.php|1.4.7|3082|mandatory|r@
1.4.7|include/keyword.inc.php|1.4.7|3082|mandatory|r@
1.4.7|include/langfallback.inc.php|1.4.7|3082|mandatory|r@
1.4.7|include/logger.inc.php|1.4.7|3082|mandatory|r@
1.4.7|include/mailer.inc.php|1.4.7|3082|mandatory|r@
1.4.7|include/mb.inc.php|1.4.7|3082|mandatory|r@
1.4.7|include/media.functions.inc.php|1.4.7|3082|mandatory|r@
1.4.7|include/phpmailer.lang-en.php|1.4.7|3082|mandatory|r@
1.4.7|include/picmgmt.inc.php|1.4.7|3082|mandatory|r@
1.4.7|include/plugin_api.inc.php|1.4.7|3082|mandatory|r@
1.4.7|include/search.inc.php|1.4.7|3082|mandatory|r@
1.4.7|include/select_lang.inc.php|1.4.7|3082|mandatory|r@
1.4.7|include/slideshow.inc.php|1.4.7|3082|mandatory|r@
1.4.7|include/smilies.inc.php|1.4.7|3082|mandatory|r@
1.4.7|include/smtp.inc.php|1.4.7|3082|mandatory|r@
1.4.7|include/sql_parse.php|1.4.7|3082|mandatory|r@
1.4.7|include/themes.inc.php|1.4.7|3082|mandatory|r@
1.4.7|include/update.inc.php|1.4.7|3082|mandatory|r@
1.4.7|include/zip.lib.php|1.4.7|3082|mandatory|r@
1.4.7|include/makers|||mandatory|w@
1.4.7|include/makers/canon.php|1.4.7|3082|mandatory|r@
1.4.7|include/makers/fujifilm.php|1.4.7|3082|mandatory|r@
1.4.7|include/makers/gps.php|1.4.7|3082|mandatory|r@
1.4.7|include/makers/nikon.php|1.4.7|3082|mandatory|r@
1.4.7|include/makers/olympus.php|1.4.7|3082|mandatory|r@
1.4.7|include/makers/sanyo.php|1.4.7|3082|mandatory|r@
1.4.7|lang|||mandatory|r@
1.4.7|lang/basque.php|1.4.7|3082|optional|r@
1.4.7|lang/chinese_big5.php|1.4.7|3082|optional|r@
1.4.7|lang/chinese_gb.php|1.4.7|3082|optional|r@
1.4.7|lang/czech.php|1.4.7|3082|optional|r@
1.4.7|lang/dutch.php|1.4.7|3085|optional|r@
1.4.7|lang/english.php|1.4.7|3082|mandatory|r@
1.4.7|lang/english_gb.php|1.4.7|3082|optional|r@
1.4.7|lang/french.php|1.4.7|3082|optional|r@
1.4.7|lang/galician.php|1.4.7|3082|optional|r@
1.4.7|lang/georgian.php|1.4.7|3082|optional|r@
1.4.7|lang/german.php|1.4.7|3082|optional|r@
1.4.7|lang/german_sie.php|1.4.7|3082|optional|r@
1.4.7|lang/hebrew.php|1.4.7|3082|optional|r@
1.4.7|lang/hungarian.php|1.4.7|3082|optional|r@
1.4.7|lang/italian.php|1.4.7|3082|optional|r@
1.4.7|lang/japanese.php|1.4.7|3082|optional|r@
1.4.7|lang/korean.php|1.4.7|3082|optional|r@
1.4.7|lang/norwegian.php|1.4.7|3082|optional|r@
1.4.7|lang/persian.php|1.4.7|3095|optional|r@
1.4.7|lang/polish.php|1.4.7|3082|optional|r@
1.4.7|lang/portuguese.php|1.4.7|3082|optional|r@
1.4.7|lang/russian.php|1.4.7|3082|optional|r@
1.4.7|lang/slovak.php|1.4.7|3082|optional|r@
1.4.7|lang/slovenian.php|1.4.7|3086|optional|r@
1.4.7|lang/spanish.php|1.4.7|3082|optional|r@
1.4.7|lang/swedish.php|1.4.7|3082|optional|r@
1.4.7|lang/turkish.php|1.4.7|3082|optional|r@
1.4.7|lang/ukrainian.php|1.4.7|3082|optional|r@
1.4.7|logs|||mandatory|w@
1.4.7|logs/log_header.inc.php|1.4.7|3082|mandatory|r@
1.4.7|plugins|||optional|r@
1.4.7|plugins/sample|||optional|r@
1.4.7|plugins/sample/codebase.php|1.4.7|3082|optional|r@
1.4.7|plugins/sample/configuration.php|1.4.7|3082|optional|r@
1.4.7|plugins/sef_urls|||optional|r@
1.4.7|plugins/sef_urls/codebase.php|1.4.7|3082|optional|r@
1.4.7|plugins/sef_urls/configuration.php|1.4.7|3082|optional|r@
1.4.7|plugins/sef_urls/ht.txt|1.4.7|3082|optional|r@
1.4.7|sql|||mandatory|r@
1.4.7|sql/basic.sql|1.4.7|3082|mandatory|r@
1.4.7|sql/schema.sql|1.4.7|3082|mandatory|r@
1.4.7|sql/update.sql|1.4.7|3082|mandatory|r@
1.4.7|themes|||mandatory|r@
1.4.7|themes/classic|||optional|r@
1.4.7|themes/classic/style.css|1.4.7|3082|optional|r@
1.4.7|themes/classic/template.html||3082|optional|r@
1.4.7|themes/classic/theme.php|1.4.7|3100|optional|r@
1.4.7|themes/classic/images|||optional|r@
1.4.7|themes/eyeball|||optional|r@
1.4.7|themes/eyeball/style.css|1.4.7|3082|optional|r@
1.4.7|themes/eyeball/template.html||3082|optional|r@
1.4.7|themes/eyeball/theme.php|1.4.7|3082|optional|r@
1.4.7|themes/eyeball/images|||optional|r@
1.4.7|themes/fruity|||optional|r@
1.4.7|themes/fruity/style.css|1.4.7|3082|optional|r@
1.4.7|themes/fruity/template.html||3082|optional|r@
1.4.7|themes/fruity/theme.php|1.4.7|3082|optional|r@
1.4.7|themes/fruity/images|||optional|r@
1.4.7|themes/hardwired|||optional|r@
1.4.7|themes/hardwired/style.css|1.4.7|3082|optional|r@
1.4.7|themes/hardwired/template.html||3082|optional|r@
1.4.7|themes/hardwired/theme.php|1.4.7|3082|optional|r@
1.4.7|themes/hardwired/images|||optional|r@
1.4.7|themes/igames|||optional|r@
1.4.7|themes/igames/style.css|1.4.7|3082|optional|r@
1.4.7|themes/igames/template.html||3082|optional|r@
1.4.7|themes/igames/theme.php|1.4.7|3082|optional|r@
1.4.7|themes/igames/images|||optional|r@
1.4.7|themes/mac_ox_x|||optional|r@
1.4.7|themes/mac_ox_x/style.css|1.4.7|3082|optional|r@
1.4.7|themes/mac_ox_x/template.html||3082|optional|r@
1.4.7|themes/mac_ox_x/theme.php|1.4.7|3082|optional|r@
1.4.7|themes/mac_ox_x/images|||optional|r@
1.4.7|themes/project_vii|||optional|r@
1.4.7|themes/project_vii/style.css|1.4.7|3082|optional|r@
1.4.7|themes/project_vii/template.html||3082|optional|r@
1.4.7|themes/project_vii/theme.php|1.4.7|3082|optional|r@
1.4.7|themes/project_vii/images|||optional|r@
1.4.7|themes/rainy_day|||optional|r@
1.4.7|themes/rainy_day/style.css|1.4.7|3082|optional|r@
1.4.7|themes/rainy_day/template.html||3082|optional|r@
1.4.7|themes/rainy_day/theme.php|1.4.7|3082|optional|r@
1.4.7|themes/rainy_day/images|||optional|r@
1.4.7|themes/sample|||optional|r@
1.4.7|themes/sample/style.css|1.4.7|3082|optional|r@
1.4.7|themes/sample/template.html||3082|optional|r@
1.4.7|themes/sample/theme.php|1.4.7|3082|optional|r@
1.4.7|themes/sample/images|||optional|r@
1.4.7|themes/water_drop|||optional|r@
1.4.7|themes/water_drop/style.css|1.4.7|3082|optional|r@
1.4.7|themes/water_drop/template.html||3082|optional|r@
1.4.7|themes/water_drop/theme.php|1.4.7|3082|optional|r@
1.4.7|themes/water_drop/images|||optional|r@
1.4.8|addfav.php|1.4.8|3116|mandatory|r@
1.4.8|addpic.php|1.4.8|3116|mandatory|r@
1.4.8|admin.php|1.4.8|3116|mandatory|r@
1.4.8|albmgr.php|1.4.8|3116|mandatory|r@
1.4.8|anycontent.php|1.4.8|3116|mandatory|r@
1.4.8|banning.php|1.4.8|3116|mandatory|r@
1.4.8|bridgemgr.php|1.4.8|3116|mandatory|r@
1.4.8|calendar.php|1.4.8|3116|mandatory|r@
1.4.8|catmgr.php|1.4.8|3116|mandatory|r@
1.4.8|charsetmgr.php|1.4.8|3116|mandatory|r@
1.4.8|config.php|1.4.8|3116|optional|r@
1.4.8|db_ecard.php|1.4.8|3116|mandatory|r@
1.4.8|db_input.php|1.4.8|3116|mandatory|r@
1.4.8|delete.php|1.4.8|3116|mandatory|r@
1.4.8|displayecard.php|1.4.8|3116|mandatory|r@
1.4.8|displayimage.php|1.4.8|3116|mandatory|r@
1.4.8|displayreport.php|1.4.8|3116|mandatory|r@
1.4.8|ecard.php|1.4.8|3116|mandatory|r@
1.4.8|editOnePic.php|1.4.8|3116|mandatory|r@
1.4.8|editpics.php|1.4.8|3116|mandatory|r@
1.4.8|exifmgr.php|1.4.8|3116|mandatory|r@
1.4.8|faq.php|1.4.8|3116|mandatory|r@
1.4.8|forgot_passwd.php|1.4.8|3116|mandatory|r@
1.4.8|getlang.php|1.4.8|3116|mandatory|r@
1.4.8|groupmgr.php|1.4.8|3116|mandatory|r@
1.4.8|image_processor.php|1.4.8|3116|mandatory|r@
1.4.8|index.php|1.4.8|3116|mandatory|r@
1.4.8|install.php|1.4.8|3116|mandatory|r@
1.4.8|installer.css|1.4.8|3116|mandatory|r@
1.4.8|keyword_create_dict.php|1.4.8|3116|mandatory|r@
1.4.8|keyword_select.php|1.4.8|3116|mandatory|r@
1.4.8|keywordmgr.php|1.4.8|3116|mandatory|r@
1.4.8|login.php|1.4.8|3116|mandatory|r@
1.4.8|logout.php|1.4.8|3116|mandatory|r@
1.4.8|minibrowser.php|1.4.8|3116|mandatory|r@
1.4.8|mode.php|1.4.8|3116|mandatory|r@
1.4.8|modifyalb.php|1.4.8|3116|mandatory|r@
1.4.8|phpinfo.php|1.4.8|3116|mandatory|r@
1.4.8|picEditor.php|1.4.8|3116|mandatory|r@
1.4.8|picmgr.php|1.4.8|3116|mandatory|r@
1.4.8|pluginmgr.php|1.4.8|3116|mandatory|r@
1.4.8|profile.php|1.4.8|3116|mandatory|r@
1.4.8|ratepic.php|1.4.8|3116|mandatory|r@
1.4.8|register.php|1.4.8|3116|mandatory|r@
1.4.8|relocate_server.php|1.4.8|3116|optional|r@
1.4.8|report_file.php|1.4.8|3116|mandatory|r@
1.4.8|reviewcom.php|1.4.8|3116|mandatory|r@
1.4.8|scripts.js|1.4.8|3116|mandatory|r@
1.4.8|search.php|1.4.8|3116|mandatory|r@
1.4.8|searchnew.php|1.4.8|3116|mandatory|r@
1.4.8|showthumb.php|1.4.8|3116|mandatory|r@
1.4.8|stat_details.php|1.4.8|3116|mandatory|r@
1.4.8|thumbnails.php|1.4.8|3116|mandatory|r@
1.4.8|update.php|1.4.8|3116|mandatory|r@
1.4.8|upgrade-1.0-to-1.2.php|1.4.8|3116|mandatory|r@
1.4.8|upload.php|1.4.8|3116|mandatory|r@
1.4.8|usermgr.php|1.4.8|3116|mandatory|r@
1.4.8|util.php|1.4.8|3116|mandatory|r@
1.4.8|versioncheck.php|1.4.8|3119|mandatory|r@
1.4.8|viewlog.php|1.4.8|3116|mandatory|r@
1.4.8|xp_publish.php|1.4.8|3116|mandatory|r@
1.4.8|zipdownload.php|1.4.8|3116|mandatory|r@
1.4.8|**fullpath**|||mandatory|w@
1.4.8|**fullpath**/index.php|||optional|w@
1.4.8|**fullpath**/edit/index.html|||optional|w@
1.4.8|**fullpath**/edit/no_FTP-uploads_into_this_folder!|||optional|w@
1.4.8|**fullpath**/edit|||mandatory|w@
1.4.8|**fullpath**/edit/index.html|||optional|w@
1.4.8|**fullpath**/**userpics**|||mandatory|w@
1.4.8|**fullpath**/**userpics**/index.php|||optional|w@
1.4.8|**fullpath**/**userpics**/no_FTP-uploads_into_this_folder!|||optional|w@
1.4.8|bridge|||mandatory|r@
1.4.8|bridge/coppermine.inc.php|1.4.8|3116|mandatory|r@
1.4.8|bridge/invisionboard20.inc.php|1.4.8|3116|optional|r@
1.4.8|bridge/mambo.inc.php|1.4.8|3116|optional|r@
1.4.8|bridge/mybb.inc.php|1.4.8|3116|optional|r@
1.4.8|bridge/phorum.inc.php|1.4.8|3116|optional|r@
1.4.8|bridge/phpbb.inc.php|1.4.8|3116|optional|r@
1.4.8|bridge/phpbb2018.inc.php|1.4.8|3116|optional|r@
1.4.8|bridge/phpbb22.inc.php|1.4.8|3116|optional|r@
1.4.8|bridge/punbb115.inc.php|1.4.8|3116|optional|r@
1.4.8|bridge/punbb12.inc.php|1.4.8|3116|optional|r@
1.4.8|bridge/smf10.inc.php|1.4.8|3116|optional|r@
1.4.8|bridge/udb_base.inc.php|1.4.8|3116|mandatory|r@
1.4.8|bridge/vbulletin30.inc.php|1.4.8|3116|optional|r@
1.4.8|bridge/xmb.inc.php|1.4.8|3116|optional|r@
1.4.8|bridge/xoops.inc.php|1.4.8|3116|optional|r@
1.4.8|docs|||mandatory|r@
1.4.8|docs/faq.htm|||optional|r@
1.4.8|docs/faq_fr.htm|||optional|r@
1.4.8|docs/index.htm||3116|mandatory|r@
1.4.8|docs/index_fr.htm||3116|mandatory|r@
1.4.8|docs/README.html||3116|optional|r@
1.4.8|docs/showdoc.php|1.4.8|3116|mandatory|r@
1.4.8|docs/style.css|1.4.8|3116|mandatory|r@
1.4.8|docs/theme.htm|||optional|r@
1.4.8|docs/translation.htm|||optional|r@
1.4.8|docs/pics|||mandatory|r@
1.4.8|docs/theme|||optional|r@
1.4.8|docs/theme/edit_style.html|||optional|r@
1.4.8|docs/theme/edit_template.html|||optional|r@
1.4.8|docs/theme/edit_theme.html|1.4.8||optional|r@
1.4.8|docs/theme/index.html|||optional|r@
1.4.8|docs/theme/style.css|1.4.8|3116|optional|r@
1.4.8|docs/theme/validation.html|||optional|r@
1.4.8|include|||mandatory|w@
1.4.8|include/archive.php|1.4.8|3116|mandatory|r@
1.4.8|include/config.inc.php|||mandatory|r@
1.4.8|include/config.inc.php.sample|||optional|r@
1.4.8|include/crop.inc.php|1.4.8|3116|mandatory|r@
1.4.8|include/debugger.inc.php|1.4.8|3116|mandatory|r@
1.4.8|include/exif.php|1.4.8|3116|mandatory|r@
1.4.8|include/exif_php.inc.php|1.4.8|3116|mandatory|r@
1.4.8|include/exifReader.inc.php|1.4.8|3116|mandatory|r@
1.4.8|include/functions.inc.php|1.4.8|3116|mandatory|r@
1.4.8|include/imageObjectGD.class.php|1.4.8|3116|mandatory|r@
1.4.8|include/imageObjectIM.class.php|1.4.8|3116|mandatory|r@
1.4.8|include/index.html|1.4.8|3116|mandatory|r@
1.4.8|include/init.inc.php|1.4.8|3116|mandatory|r@
1.4.8|include/iptc.inc.php|1.4.8|3116|mandatory|r@
1.4.8|include/keyword.inc.php|1.4.8|3116|mandatory|r@
1.4.8|include/langfallback.inc.php|1.4.8|3116|mandatory|r@
1.4.8|include/logger.inc.php|1.4.8|3116|mandatory|r@
1.4.8|include/mailer.inc.php|1.4.8|3116|mandatory|r@
1.4.8|include/mb.inc.php|1.4.8|3116|mandatory|r@
1.4.8|include/media.functions.inc.php|1.4.8|3116|mandatory|r@
1.4.8|include/phpmailer.lang-en.php|1.4.8|3116|mandatory|r@
1.4.8|include/picmgmt.inc.php|1.4.8|3116|mandatory|r@
1.4.8|include/plugin_api.inc.php|1.4.8|3116|mandatory|r@
1.4.8|include/search.inc.php|1.4.8|3116|mandatory|r@
1.4.8|include/select_lang.inc.php|1.4.8|3116|mandatory|r@
1.4.8|include/slideshow.inc.php|1.4.8|3116|mandatory|r@
1.4.8|include/smilies.inc.php|1.4.8|3116|mandatory|r@
1.4.8|include/smtp.inc.php|1.4.8|3116|mandatory|r@
1.4.8|include/sql_parse.php|1.4.8|3116|mandatory|r@
1.4.8|include/themes.inc.php|1.4.8|3116|mandatory|r@
1.4.8|include/update.inc.php|1.4.8|3116|mandatory|r@
1.4.8|include/zip.lib.php|1.4.8|3116|mandatory|r@
1.4.8|include/makers|||mandatory|w@
1.4.8|include/makers/canon.php|1.4.8|3116|mandatory|r@
1.4.8|include/makers/fujifilm.php|1.4.8|3116|mandatory|r@
1.4.8|include/makers/gps.php|1.4.8|3116|mandatory|r@
1.4.8|include/makers/nikon.php|1.4.8|3116|mandatory|r@
1.4.8|include/makers/olympus.php|1.4.8|3116|mandatory|r@
1.4.8|include/makers/sanyo.php|1.4.8|3116|mandatory|r@
1.4.8|lang|||mandatory|r@
1.4.8|lang/basque.php|1.4.8|3116|optional|r@
1.4.8|lang/bulgarian.php|1.4.8|1.287|optional|r@
1.4.8|lang/chinese_big5.php|1.4.8|3116|optional|r@
1.4.8|lang/chinese_gb.php|1.4.8|3116|optional|r@
1.4.8|lang/czech.php|1.4.8|3116|optional|r@
1.4.8|lang/danish.php|1.4.8|1.15|optional|r@
1.4.8|lang/dutch.php|1.4.8|3116|optional|r@
1.4.8|lang/english.php|1.4.8|3116|mandatory|r@
1.4.8|lang/english_gb.php|1.4.8|3116|optional|r@
1.4.8|lang/finnish.php|1.4.8|1.26|optional|r@
1.4.8|lang/french.php|1.4.8|3116|optional|r@
1.4.8|lang/galician.php|1.4.8|3116|optional|r@
1.4.8|lang/georgian.php|1.4.8|3116|optional|r@
1.4.8|lang/german.php|1.4.8|3116|optional|r@
1.4.8|lang/german_sie.php|1.4.8|3116|optional|r@
1.4.8|lang/hebrew.php|1.4.8|3116|optional|r@
1.4.8|lang/hungarian.php|1.4.8|3116|optional|r@
1.4.8|lang/italian.php|1.4.8|3116|optional|r@
1.4.8|lang/japanese.php|1.4.8|3116|optional|r@
1.4.8|lang/korean.php|1.4.8|3116|optional|r@
1.4.8|lang/norwegian.php|1.4.8|3116|optional|r@
1.4.8|lang/persian.php|1.4.8|3116|optional|r@
1.4.8|lang/polish.php|1.4.8|3116|optional|r@
1.4.8|lang/portuguese.php|1.4.8|3116|optional|r@
1.4.8|lang/russian.php|1.4.8|3116|optional|r@
1.4.8|lang/slovak.php|1.4.8|3116|optional|r@
1.4.8|lang/slovenian.php|1.4.8|3116|optional|r@
1.4.8|lang/spanish.php|1.4.8|3116|optional|r@
1.4.8|lang/swedish.php|1.4.8|3116|optional|r@
1.4.8|lang/turkish.php|1.4.8|3116|optional|r@
1.4.8|lang/ukrainian.php|1.4.8|3116|optional|r@
1.4.8|logs|||mandatory|w@
1.4.8|logs/log_header.inc.php|1.4.8|3116|mandatory|r@
1.4.8|plugins|||optional|r@
1.4.8|plugins/sample|||optional|r@
1.4.8|plugins/sample/codebase.php|1.4.8|3116|optional|r@
1.4.8|plugins/sample/configuration.php|1.4.8|3116|optional|r@
1.4.8|plugins/sef_urls|||optional|r@
1.4.8|plugins/sef_urls/codebase.php|1.4.8|3116|optional|r@
1.4.8|plugins/sef_urls/configuration.php|1.4.8|3116|optional|r@
1.4.8|plugins/sef_urls/ht.txt|1.4.8|3116|optional|r@
1.4.8|sql|||mandatory|r@
1.4.8|sql/basic.sql|1.4.8|3116|mandatory|r@
1.4.8|sql/schema.sql|1.4.8|3116|mandatory|r@
1.4.8|sql/update.sql|1.4.8|3116|mandatory|r@
1.4.8|themes|||mandatory|r@
1.4.8|themes/classic|||optional|r@
1.4.8|themes/classic/style.css|1.4.8|3116|optional|r@
1.4.8|themes/classic/template.html||3116|optional|r@
1.4.8|themes/classic/theme.php|1.4.8|3116|optional|r@
1.4.8|themes/classic/images|||optional|r@
1.4.8|themes/eyeball|||optional|r@
1.4.8|themes/eyeball/style.css|1.4.8|3116|optional|r@
1.4.8|themes/eyeball/template.html||3116|optional|r@
1.4.8|themes/eyeball/theme.php|1.4.8|3116|optional|r@
1.4.8|themes/eyeball/images|||optional|r@
1.4.8|themes/fruity|||optional|r@
1.4.8|themes/fruity/style.css|1.4.8|3116|optional|r@
1.4.8|themes/fruity/template.html||3116|optional|r@
1.4.8|themes/fruity/theme.php|1.4.8|3116|optional|r@
1.4.8|themes/fruity/images|||optional|r@
1.4.8|themes/hardwired|||optional|r@
1.4.8|themes/hardwired/style.css|1.4.8|3116|optional|r@
1.4.8|themes/hardwired/template.html||3116|optional|r@
1.4.8|themes/hardwired/theme.php|1.4.8|3116|optional|r@
1.4.8|themes/hardwired/images|||optional|r@
1.4.8|themes/igames|||optional|r@
1.4.8|themes/igames/style.css|1.4.8|3116|optional|r@
1.4.8|themes/igames/template.html||3116|optional|r@
1.4.8|themes/igames/theme.php|1.4.8|3116|optional|r@
1.4.8|themes/igames/images|||optional|r@
1.4.8|themes/mac_ox_x|||optional|r@
1.4.8|themes/mac_ox_x/style.css|1.4.8|3116|optional|r@
1.4.8|themes/mac_ox_x/template.html||3116|optional|r@
1.4.8|themes/mac_ox_x/theme.php|1.4.8|3116|optional|r@
1.4.8|themes/mac_ox_x/images|||optional|r@
1.4.8|themes/project_vii|||optional|r@
1.4.8|themes/project_vii/style.css|1.4.8|3116|optional|r@
1.4.8|themes/project_vii/template.html||3116|optional|r@
1.4.8|themes/project_vii/theme.php|1.4.8|3116|optional|r@
1.4.8|themes/project_vii/images|||optional|r@
1.4.8|themes/rainy_day|||optional|r@
1.4.8|themes/rainy_day/style.css|1.4.8|3116|optional|r@
1.4.8|themes/rainy_day/template.html||3116|optional|r@
1.4.8|themes/rainy_day/theme.php|1.4.8|3116|optional|r@
1.4.8|themes/rainy_day/images|||optional|r@
1.4.8|themes/sample|||optional|r@
1.4.8|themes/sample/style.css|1.4.8|3116|optional|r@
1.4.8|themes/sample/template.html||3116|optional|r@
1.4.8|themes/sample/theme.php|1.4.8|3116|optional|r@
1.4.8|themes/sample/images|||optional|r@
1.4.8|themes/water_drop|||optional|r@
1.4.8|themes/water_drop/style.css|1.4.8|3116|optional|r@
1.4.8|themes/water_drop/template.html||3116|optional|r@
1.4.8|themes/water_drop/theme.php|1.4.8|3116|optional|r@
1.4.8|themes/water_drop/images|||optional|r@
1.4.9|addfav.php|1.4.9|3125|mandatory|r@
1.4.9|addpic.php|1.4.9|3125|mandatory|r@
1.4.9|admin.php|1.4.9|3125|mandatory|r@
1.4.9|albmgr.php|1.4.9|3125|mandatory|r@
1.4.9|anycontent.php|1.4.9|3125|mandatory|r@
1.4.9|banning.php|1.4.9|3125|mandatory|r@
1.4.9|bridgemgr.php|1.4.9|3125|mandatory|r@
1.4.9|calendar.php|1.4.9|3125|mandatory|r@
1.4.9|catmgr.php|1.4.9|3125|mandatory|r@
1.4.9|charsetmgr.php|1.4.9|3142|mandatory|r@
1.4.9|config.php|1.4.9|3125|optional|r@
1.4.9|db_ecard.php|1.4.9|3125|mandatory|r@
1.4.9|db_input.php|1.4.9|3125|mandatory|r@
1.4.9|delete.php|1.4.9|3125|mandatory|r@
1.4.9|displayecard.php|1.4.9|3227|mandatory|r@
1.4.9|displayimage.php|1.4.9|3125|mandatory|r@
1.4.9|displayreport.php|1.4.9|3125|mandatory|r@
1.4.9|ecard.php|1.4.9|3125|mandatory|r@
1.4.9|editOnePic.php|1.4.9|3125|mandatory|r@
1.4.9|editpics.php|1.4.9|3125|mandatory|r@
1.4.9|exifmgr.php|1.4.9|3125|mandatory|r@
1.4.9|faq.php|1.4.9|3125|mandatory|r@
1.4.9|forgot_passwd.php|1.4.9|3125|mandatory|r@
1.4.9|getlang.php|1.4.9|3125|mandatory|r@
1.4.9|groupmgr.php|1.4.9|3125|mandatory|r@
1.4.9|image_processor.php|1.4.9|3125|mandatory|r@
1.4.9|index.php|1.4.9|3125|mandatory|r@
1.4.9|install.php|1.4.9|3125|mandatory|r@
1.4.9|installer.css|1.4.9|3125|mandatory|r@
1.4.9|keyword_create_dict.php|1.4.9|3125|mandatory|r@
1.4.9|keyword_select.php|1.4.9|3125|mandatory|r@
1.4.9|keywordmgr.php|1.4.9|3125|mandatory|r@
1.4.9|login.php|1.4.9|3125|mandatory|r@
1.4.9|logout.php|1.4.9|3125|mandatory|r@
1.4.9|minibrowser.php|1.4.9|3125|mandatory|r@
1.4.9|mode.php|1.4.9|3125|mandatory|r@
1.4.9|modifyalb.php|1.4.9|3125|mandatory|r@
1.4.9|phpinfo.php|1.4.9|3125|mandatory|r@
1.4.9|picEditor.php|1.4.9|3125|mandatory|r@
1.4.9|picmgr.php|1.4.9|3125|mandatory|r@
1.4.9|pluginmgr.php|1.4.9|3224|mandatory|r@
1.4.9|profile.php|1.4.9|3125|mandatory|r@
1.4.9|ratepic.php|1.4.9|3157|mandatory|r@
1.4.9|register.php|1.4.9|3215|mandatory|r@
1.4.9|relocate_server.php|1.4.9|3125|optional|r@
1.4.9|report_file.php|1.4.9|3125|mandatory|r@
1.4.9|reviewcom.php|1.4.9|3125|mandatory|r@
1.4.9|scripts.js|1.4.9|3125|mandatory|r@
1.4.9|search.php|1.4.9|3125|mandatory|r@
1.4.9|searchnew.php|1.4.9|3125|mandatory|r@
1.4.9|showthumb.php|1.4.9|3125|mandatory|r@
1.4.9|stat_details.php|1.4.9|3125|mandatory|r@
1.4.9|thumbnails.php|1.4.9|3125|mandatory|r@
1.4.9|update.php|1.4.9|3125|mandatory|r@
1.4.9|upgrade-1.0-to-1.2.php|1.4.9|3125|mandatory|r@
1.4.9|upload.php|1.4.9|3142|mandatory|r@
1.4.9|usermgr.php|1.4.9|3142|mandatory|r@
1.4.9|util.php|1.4.9|3125|mandatory|r@
1.4.9|versioncheck.php|1.4.9|3261|mandatory|r@
1.4.9|viewlog.php|1.4.9|3125|mandatory|r@
1.4.9|xp_publish.php|1.4.9|3125|mandatory|r@
1.4.9|zipdownload.php|1.4.9|3125|mandatory|r@
1.4.9|**fullpath**|||mandatory|w@
1.4.9|**fullpath**/index.php|||optional|w@
1.4.9|**fullpath**/edit/index.html|||optional|w@
1.4.9|**fullpath**/edit/no_FTP-uploads_into_this_folder!|||optional|w@
1.4.9|**fullpath**/edit|||mandatory|w@
1.4.9|**fullpath**/edit/index.html|||optional|w@
1.4.9|**fullpath**/**userpics**|||mandatory|w@
1.4.9|**fullpath**/**userpics**/index.php|||optional|w@
1.4.9|**fullpath**/**userpics**/no_FTP-uploads_into_this_folder!|||optional|w@
1.4.9|bridge|||mandatory|r@
1.4.9|bridge/coppermine.inc.php|1.4.9|3125|mandatory|r@
1.4.9|bridge/invisionboard20.inc.php|1.4.9|3125|optional|r@
1.4.9|bridge/mambo.inc.php|1.4.9|3125|optional|r@
1.4.9|bridge/mybb.inc.php|1.4.9|3125|optional|r@
1.4.9|bridge/phorum.inc.php|1.4.9|3125|optional|r@
1.4.9|bridge/phpbb.inc.php|1.4.9|3125|optional|r@
1.4.9|bridge/phpbb2018.inc.php|1.4.9|3125|optional|r@
1.4.9|bridge/phpbb22.inc.php|1.4.9|3125|optional|r@
1.4.9|bridge/punbb115.inc.php|1.4.9|3125|optional|r@
1.4.9|bridge/punbb12.inc.php|1.4.9|3125|optional|r@
1.4.9|bridge/smf10.inc.php|1.4.9|3125|optional|r@
1.4.9|bridge/udb_base.inc.php|1.4.9|3246|mandatory|r@
1.4.9|bridge/vbulletin30.inc.php|1.4.9|3125|optional|r@
1.4.9|bridge/xmb.inc.php|1.4.9|3125|optional|r@
1.4.9|bridge/xoops.inc.php|1.4.9|3125|optional|r@
1.4.9|docs|||mandatory|r@
1.4.9|docs/faq.htm|||optional|r@
1.4.9|docs/faq_fr.htm|||optional|r@
1.4.9|docs/index.htm||3125|mandatory|r@
1.4.9|docs/index_fr.htm||3125|mandatory|r@
1.4.9|docs/README.html||3125|optional|r@
1.4.9|docs/showdoc.php|1.4.9|3125|mandatory|r@
1.4.9|docs/style.css|1.4.9|3125|mandatory|r@
1.4.9|docs/theme.htm|||optional|r@
1.4.9|docs/translation.htm|||optional|r@
1.4.9|docs/pics|||mandatory|r@
1.4.9|docs/theme|||optional|r@
1.4.9|docs/theme/edit_style.html|||optional|r@
1.4.9|docs/theme/edit_template.html|||optional|r@
1.4.9|docs/theme/edit_theme.html|1.4.9||optional|r@
1.4.9|docs/theme/index.html|||optional|r@
1.4.9|docs/theme/style.css|1.4.9|3125|optional|r@
1.4.9|docs/theme/validation.html|||optional|r@
1.4.9|include|||mandatory|w@
1.4.9|include/archive.php|1.4.9|3125|mandatory|r@
1.4.9|include/config.inc.php|||mandatory|r@
1.4.9|include/config.inc.php.sample|||optional|r@
1.4.9|include/crop.inc.php|1.4.9|3125|mandatory|r@
1.4.9|include/debugger.inc.php|1.4.9|3125|mandatory|r@
1.4.9|include/exif.php|1.4.9|3125|mandatory|r@
1.4.9|include/exif_php.inc.php|1.4.9|3125|mandatory|r@
1.4.9|include/exifReader.inc.php|1.4.9|3125|mandatory|r@
1.4.9|include/functions.inc.php|1.4.9|3142|mandatory|r@
1.4.9|include/imageObjectGD.class.php|1.4.9|3125|mandatory|r@
1.4.9|include/imageObjectIM.class.php|1.4.9|3125|mandatory|r@
1.4.9|include/index.html|1.4.9|3125|mandatory|r@
1.4.9|include/init.inc.php|1.4.9|3137|mandatory|r@
1.4.9|include/iptc.inc.php|1.4.9|3125|mandatory|r@
1.4.9|include/keyword.inc.php|1.4.9|3125|mandatory|r@
1.4.9|include/langfallback.inc.php|1.4.9|3125|mandatory|r@
1.4.9|include/logger.inc.php|1.4.9|3125|mandatory|r@
1.4.9|include/mailer.inc.php|1.4.9|3125|mandatory|r@
1.4.9|include/mb.inc.php|1.4.9|3125|mandatory|r@
1.4.9|include/media.functions.inc.php|1.4.9|3125|mandatory|r@
1.4.9|include/phpmailer.lang-en.php|1.4.9|3125|mandatory|r@
1.4.9|include/picmgmt.inc.php|1.4.9|3125|mandatory|r@
1.4.9|include/plugin_api.inc.php|1.4.9|3125|mandatory|r@
1.4.9|include/search.inc.php|1.4.9|3125|mandatory|r@
1.4.9|include/select_lang.inc.php|1.4.9|3125|mandatory|r@
1.4.9|include/slideshow.inc.php|1.4.9|3125|mandatory|r@
1.4.9|include/smilies.inc.php|1.4.9|3125|mandatory|r@
1.4.9|include/smtp.inc.php|1.4.9|3125|mandatory|r@
1.4.9|include/sql_parse.php|1.4.9|3125|mandatory|r@
1.4.9|include/themes.inc.php|1.4.9|3223|mandatory|r@
1.4.9|include/update.inc.php|1.4.9|3125|mandatory|r@
1.4.9|include/zip.lib.php|1.4.9|3125|mandatory|r@
1.4.9|include/makers|||mandatory|w@
1.4.9|include/makers/canon.php|1.4.9|3125|mandatory|r@
1.4.9|include/makers/fujifilm.php|1.4.9|3125|mandatory|r@
1.4.9|include/makers/gps.php|1.4.9|3125|mandatory|r@
1.4.9|include/makers/nikon.php|1.4.9|3125|mandatory|r@
1.4.9|include/makers/olympus.php|1.4.9|3125|mandatory|r@
1.4.9|include/makers/sanyo.php|1.4.9|3125|mandatory|r@
1.4.9|lang|||mandatory|r@
1.4.9|lang/albanian.php|1.4.9|3125|optional|r@
1.4.9|lang/basque.php|1.4.9|3125|optional|r@
1.4.9|lang/brazilian_portuguese.php|1.4.9|3116|optional|r@
1.4.9|lang/bulgarian.php|1.4.9|1.287|optional|r@
1.4.9|lang/chinese_big5.php|1.4.9|3125|optional|r@
1.4.9|lang/chinese_gb.php|1.4.9|3125|optional|r@
1.4.9|lang/czech.php|1.4.9|3125|optional|r@
1.4.9|lang/danish.php|1.4.9|1.15|optional|r@
1.4.9|lang/dutch.php|1.4.9|3212|optional|r@
1.4.9|lang/english.php|1.4.9|3125|mandatory|r@
1.4.9|lang/english_gb.php|1.4.9|3125|optional|r@
1.4.9|lang/finnish.php|1.4.9|1.26|optional|r@
1.4.9|lang/french.php|1.4.9|3125|optional|r@
1.4.9|lang/galician.php|1.4.9|3125|optional|r@
1.4.9|lang/georgian.php|1.4.9|3125|optional|r@
1.4.9|lang/german.php|1.4.9|3125|optional|r@
1.4.9|lang/german_sie.php|1.4.9|3125|optional|r@
1.4.9|lang/hebrew.php|1.4.9|3219|optional|r@
1.4.9|lang/hungarian.php|1.4.9|3125|optional|r@
1.4.9|lang/italian.php|1.4.9|3125|optional|r@
1.4.9|lang/japanese.php|1.4.9|3125|optional|r@
1.4.9|lang/korean.php|1.4.9|3125|optional|r@
1.4.9|lang/norwegian.php|1.4.9|3125|optional|r@
1.4.9|lang/persian.php|1.4.9|3125|optional|r@
1.4.9|lang/polish.php|1.4.9|3219|optional|r@
1.4.9|lang/portuguese.php|1.4.9|3125|optional|r@
1.4.9|lang/russian.php|1.4.9|3125|optional|r@
1.4.9|lang/slovak.php|1.4.9|3125|optional|r@
1.4.9|lang/slovenian.php|1.4.9|3219|optional|r@
1.4.9|lang/spanish.php|1.4.9|3125|optional|r@
1.4.9|lang/swedish.php|1.4.9|3125|optional|r@
1.4.9|lang/turkish.php|1.4.9|3125|optional|r@
1.4.9|lang/ukrainian.php|1.4.9|3125|optional|r@
1.4.9|logs|||mandatory|w@
1.4.9|logs/log_header.inc.php|1.4.9|3125|mandatory|r@
1.4.9|plugins|||optional|r@
1.4.9|plugins/sample|||optional|r@
1.4.9|plugins/sample/codebase.php|1.4.9|3125|optional|r@
1.4.9|plugins/sample/configuration.php|1.4.9|3224|optional|r@
1.4.9|plugins/sef_urls|||optional|r@
1.4.9|plugins/sef_urls/codebase.php|1.4.9|3125|optional|r@
1.4.9|plugins/sef_urls/configuration.php|1.4.9|3125|optional|r@
1.4.9|plugins/sef_urls/ht.txt|1.4.9|3231|optional|r@
1.4.9|sql|||mandatory|r@
1.4.9|sql/basic.sql|1.4.9|3125|mandatory|r@
1.4.9|sql/schema.sql|1.4.9|3125|mandatory|r@
1.4.9|sql/update.sql|1.4.9|3125|mandatory|r@
1.4.9|themes|||mandatory|r@
1.4.9|themes/classic|||optional|r@
1.4.9|themes/classic/style.css|1.4.9|3197|optional|r@
1.4.9|themes/classic/template.html||3125|optional|r@
1.4.9|themes/classic/theme.php|1.4.9|3125|optional|r@
1.4.9|themes/classic/images|||optional|r@
1.4.9|themes/eyeball|||optional|r@
1.4.9|themes/eyeball/style.css|1.4.9|3197|optional|r@
1.4.9|themes/eyeball/template.html||3125|optional|r@
1.4.9|themes/eyeball/theme.php|1.4.9|3125|optional|r@
1.4.9|themes/eyeball/images|||optional|r@
1.4.9|themes/fruity|||optional|r@
1.4.9|themes/fruity/style.css|1.4.9|3197|optional|r@
1.4.9|themes/fruity/template.html||3125|optional|r@
1.4.9|themes/fruity/theme.php|1.4.9|3125|optional|r@
1.4.9|themes/fruity/images|||optional|r@
1.4.9|themes/hardwired|||optional|r@
1.4.9|themes/hardwired/style.css|1.4.9|3125|optional|r@
1.4.9|themes/hardwired/template.html||3125|optional|r@
1.4.9|themes/hardwired/theme.php|1.4.9|3125|optional|r@
1.4.9|themes/hardwired/images|||optional|r@
1.4.9|themes/igames|||optional|r@
1.4.9|themes/igames/style.css|1.4.9|3197|optional|r@
1.4.9|themes/igames/template.html||3125|optional|r@
1.4.9|themes/igames/theme.php|1.4.9|3125|optional|r@
1.4.9|themes/igames/images|||optional|r@
1.4.9|themes/mac_ox_x|||optional|r@
1.4.9|themes/mac_ox_x/style.css|1.4.9|3197|optional|r@
1.4.9|themes/mac_ox_x/template.html||3125|optional|r@
1.4.9|themes/mac_ox_x/theme.php|1.4.9|3125|optional|r@
1.4.9|themes/mac_ox_x/images|||optional|r@
1.4.9|themes/project_vii|||optional|r@
1.4.9|themes/project_vii/style.css|1.4.9|3197|optional|r@
1.4.9|themes/project_vii/template.html||3125|optional|r@
1.4.9|themes/project_vii/theme.php|1.4.9|3125|optional|r@
1.4.9|themes/project_vii/images|||optional|r@
1.4.9|themes/rainy_day|||optional|r@
1.4.9|themes/rainy_day/style.css|1.4.9|3197|optional|r@
1.4.9|themes/rainy_day/template.html||3125|optional|r@
1.4.9|themes/rainy_day/theme.php|1.4.9|3125|optional|r@
1.4.9|themes/rainy_day/images|||optional|r@
1.4.9|themes/sample|||optional|r@
1.4.9|themes/sample/style.css|1.4.9|3197|optional|r@
1.4.9|themes/sample/template.html||3125|optional|r@
1.4.9|themes/sample/theme.php|1.4.9|3223|optional|r@
1.4.9|themes/sample/images|||optional|r@
1.4.9|themes/water_drop|||optional|r@
1.4.9|themes/water_drop/style.css|1.4.9|3197|optional|r@
1.4.9|themes/water_drop/template.html||3125|optional|r@
1.4.9|themes/water_drop/theme.php|1.4.9|3125|optional|r@
1.4.9|themes/water_drop/images|||optional|r@
1.4.10|addfav.php|1.4.10|3275|mandatory|r@
1.4.10|addpic.php|1.4.10|3275|mandatory|r@
1.4.10|admin.php|1.4.10|3275|mandatory|r@
1.4.10|albmgr.php|1.4.10|3274|mandatory|r@
1.4.10|anycontent.php|1.4.10|3275|mandatory|r@
1.4.10|banning.php|1.4.10|3275|mandatory|r@
1.4.10|bridgemgr.php|1.4.10|3275|mandatory|r@
1.4.10|calendar.php|1.4.10|3275|mandatory|r@
1.4.10|catmgr.php|1.4.10|3275|mandatory|r@
1.4.10|charsetmgr.php|1.4.10|3275|mandatory|r@
1.4.10|config.php|1.4.10|3275|optional|r@
1.4.10|db_ecard.php|1.4.10|3275|mandatory|r@
1.4.10|db_input.php|1.4.10|3275|mandatory|r@
1.4.10|delete.php|1.4.10|3309|mandatory|r@
1.4.10|displayecard.php|1.4.10|3275|mandatory|r@
1.4.10|displayimage.php|1.4.10|3275|mandatory|r@
1.4.10|displayreport.php|1.4.10|3275|mandatory|r@
1.4.10|ecard.php|1.4.10|3275|mandatory|r@
1.4.10|editOnePic.php|1.4.10|3275|mandatory|r@
1.4.10|editpics.php|1.4.10|3275|mandatory|r@
1.4.10|exifmgr.php|1.4.10|3275|mandatory|r@
1.4.10|faq.php|1.4.10|3275|mandatory|r@
1.4.10|forgot_passwd.php|1.4.10|3275|mandatory|r@
1.4.10|getlang.php|1.4.10|3275|mandatory|r@
1.4.10|groupmgr.php|1.4.10|3275|mandatory|r@
1.4.10|image_processor.php|1.4.10|3275|mandatory|r@
1.4.10|index.php|1.4.10|3275|mandatory|r@
1.4.10|install.php|1.4.10|3275|mandatory|r@
1.4.10|installer.css|1.4.10|3275|mandatory|r@
1.4.10|keyword_create_dict.php|1.4.10|3275|mandatory|r@
1.4.10|keyword_select.php|1.4.10|3275|mandatory|r@
1.4.10|keywordmgr.php|1.4.10|3275|mandatory|r@
1.4.10|login.php|1.4.10|3275|mandatory|r@
1.4.10|logout.php|1.4.10|3275|mandatory|r@
1.4.10|minibrowser.php|1.4.10|3275|mandatory|r@
1.4.10|mode.php|1.4.10|3275|mandatory|r@
1.4.10|modifyalb.php|1.4.10|3275|mandatory|r@
1.4.10|phpinfo.php|1.4.10|3275|mandatory|r@
1.4.10|picEditor.php|1.4.10|3275|mandatory|r@
1.4.10|picmgr.php|1.4.10|3323|mandatory|r@
1.4.10|pluginmgr.php|1.4.10|3275|mandatory|r@
1.4.10|profile.php|1.4.10|3321|mandatory|r@
1.4.10|ratepic.php|1.4.10|3275|mandatory|r@
1.4.10|register.php|1.4.10|3275|mandatory|r@
1.4.10|relocate_server.php|1.4.10|3275|optional|r@
1.4.10|report_file.php|1.4.10|3275|mandatory|r@
1.4.10|reviewcom.php|1.4.10|3275|mandatory|r@
1.4.10|scripts.js|1.4.10|3275|mandatory|r@
1.4.10|search.php|1.4.10|3275|mandatory|r@
1.4.10|searchnew.php|1.4.10|3275|mandatory|r@
1.4.10|showthumb.php|1.4.10|3275|mandatory|r@
1.4.10|stat_details.php|1.4.10|3275|mandatory|r@
1.4.10|thumbnails.php|1.4.10|3275|mandatory|r@
1.4.10|update.php|1.4.10|3275|mandatory|r@
1.4.10|upgrade-1.0-to-1.2.php|1.4.10|3275|mandatory|r@
1.4.10|upload.php|1.4.10|3275|mandatory|r@
1.4.10|usermgr.php|1.4.10|3275|mandatory|r@
1.4.10|util.php|1.4.10|3275|mandatory|r@
1.4.10|versioncheck.php|1.4.10|3328|mandatory|r@
1.4.10|viewlog.php|1.4.10|3275|mandatory|r@
1.4.10|xp_publish.php|1.4.10|3275|mandatory|r@
1.4.10|zipdownload.php|1.4.10|3275|mandatory|r@
1.4.10|**fullpath**|||mandatory|w@
1.4.10|**fullpath**/index.php|||optional|w@
1.4.10|**fullpath**/edit/index.html|||optional|w@
1.4.10|**fullpath**/edit/no_FTP-uploads_into_this_folder!|||optional|w@
1.4.10|**fullpath**/edit|||mandatory|w@
1.4.10|**fullpath**/edit/index.html|||optional|w@
1.4.10|**fullpath**/**userpics**|||mandatory|w@
1.4.10|**fullpath**/**userpics**/index.php|||optional|w@
1.4.10|**fullpath**/**userpics**/no_FTP-uploads_into_this_folder!|||optional|w@
1.4.10|bridge|||mandatory|r@
1.4.10|bridge/coppermine.inc.php|1.4.10|3275|mandatory|r@
1.4.10|bridge/invisionboard20.inc.php|1.4.10|3275|optional|r@
1.4.10|bridge/mambo.inc.php|1.4.10|3275|optional|r@
1.4.10|bridge/mybb.inc.php|1.4.10|3275|optional|r@
1.4.10|bridge/phorum.inc.php|1.4.10|3275|optional|r@
1.4.10|bridge/phpbb.inc.php|1.4.10|3275|optional|r@
1.4.10|bridge/phpbb2018.inc.php|1.4.10|3275|optional|r@
1.4.10|bridge/phpbb22.inc.php|1.4.10|3275|optional|r@
1.4.10|bridge/punbb115.inc.php|1.4.10|3275|optional|r@
1.4.10|bridge/punbb12.inc.php|1.4.10|3275|optional|r@
1.4.10|bridge/smf10.inc.php|1.4.10|3275|optional|r@
1.4.10|bridge/udb_base.inc.php|1.4.10|3275|mandatory|r@
1.4.10|bridge/vbulletin30.inc.php|1.4.10|3275|optional|r@
1.4.10|bridge/xmb.inc.php|1.4.10|3275|optional|r@
1.4.10|bridge/xoops.inc.php|1.4.10|3275|optional|r@
1.4.10|docs|||mandatory|r@
1.4.10|docs/faq.htm|||optional|r@
1.4.10|docs/faq_fr.htm|||optional|r@
1.4.10|docs/index.htm||3275|mandatory|r@
1.4.10|docs/index_fr.htm||3275|mandatory|r@
1.4.10|docs/README.html||3275|optional|r@
1.4.10|docs/showdoc.php|1.4.10|3275|mandatory|r@
1.4.10|docs/style.css|1.4.10|3275|mandatory|r@
1.4.10|docs/theme.htm|||optional|r@
1.4.10|docs/translation.htm|||optional|r@
1.4.10|docs/pics|||mandatory|r@
1.4.10|docs/theme|||optional|r@
1.4.10|docs/theme/edit_style.html|||optional|r@
1.4.10|docs/theme/edit_template.html|||optional|r@
1.4.10|docs/theme/edit_theme.html|1.4.10||optional|r@
1.4.10|docs/theme/index.html|||optional|r@
1.4.10|docs/theme/style.css|1.4.10|3275|optional|r@
1.4.10|docs/theme/validation.html|||optional|r@
1.4.10|include|||mandatory|w@
1.4.10|include/archive.php|1.4.10|3275|mandatory|r@
1.4.10|include/config.inc.php|||mandatory|r@
1.4.10|include/config.inc.php.sample|||optional|r@
1.4.10|include/crop.inc.php|1.4.10|3275|mandatory|r@
1.4.10|include/debugger.inc.php|1.4.10|3275|mandatory|r@
1.4.10|include/exif.php|1.4.10|3275|mandatory|r@
1.4.10|include/exif_php.inc.php|1.4.10|3303|mandatory|r@
1.4.10|include/functions.inc.php|1.4.10|3275|mandatory|r@
1.4.10|include/imageObjectGD.class.php|1.4.10|3275|mandatory|r@
1.4.10|include/imageObjectIM.class.php|1.4.10|3275|mandatory|r@
1.4.10|include/index.html|1.4.10|3275|mandatory|r@
1.4.10|include/init.inc.php|1.4.10|3275|mandatory|r@
1.4.10|include/iptc.inc.php|1.4.10|3275|mandatory|r@
1.4.10|include/keyword.inc.php|1.4.10|3275|mandatory|r@
1.4.10|include/langfallback.inc.php|1.4.10|3275|mandatory|r@
1.4.10|include/logger.inc.php|1.4.10|3275|mandatory|r@
1.4.10|include/mailer.inc.php|1.4.10|3318|mandatory|r@
1.4.10|include/mb.inc.php|1.4.10|3275|mandatory|r@
1.4.10|include/media.functions.inc.php|1.4.10|3275|mandatory|r@
1.4.10|include/phpmailer.lang-en.php|1.4.10|3275|mandatory|r@
1.4.10|include/picmgmt.inc.php|1.4.10|3275|mandatory|r@
1.4.10|include/plugin_api.inc.php|1.4.10|3275|mandatory|r@
1.4.10|include/search.inc.php|1.4.10|3319|mandatory|r@
1.4.10|include/select_lang.inc.php|1.4.10|3275|mandatory|r@
1.4.10|include/slideshow.inc.php|1.4.10|3275|mandatory|r@
1.4.10|include/smilies.inc.php|1.4.10|3275|mandatory|r@
1.4.10|include/smtp.inc.php|1.4.10|3275|mandatory|r@
1.4.10|include/sql_parse.php|1.4.10|3275|mandatory|r@
1.4.10|include/themes.inc.php|1.4.10|3325|mandatory|r@
1.4.10|include/update.inc.php|1.4.10|3275|mandatory|r@
1.4.10|include/zip.lib.php|1.4.10|3275|mandatory|r@
1.4.10|include/makers|||mandatory|w@
1.4.10|include/makers/canon.php|1.4.10|3275|mandatory|r@
1.4.10|include/makers/fujifilm.php|1.4.10|3275|mandatory|r@
1.4.10|include/makers/gps.php|1.4.10|3275|mandatory|r@
1.4.10|include/makers/nikon.php|1.4.10|3275|mandatory|r@
1.4.10|include/makers/olympus.php|1.4.10|3275|mandatory|r@
1.4.10|include/makers/sanyo.php|1.4.10|3275|mandatory|r@
1.4.10|lang|||mandatory|r@
1.4.10|lang/albanian.php|1.4.10|3125|optional|r@
1.4.10|lang/basque.php|1.4.10|3275|optional|r@
1.4.10|lang/brazilian_portuguese.php|1.4.10|3116|optional|r@
1.4.10|lang/bulgarian.php|1.4.10|1.287|optional|r@
1.4.10|lang/chinese_big5.php|1.4.10|3275|optional|r@
1.4.10|lang/chinese_gb.php|1.4.10|3275|optional|r@
1.4.10|lang/czech.php|1.4.10|3275|optional|r@
1.4.10|lang/danish.php|1.4.10|1.15|optional|r@
1.4.10|lang/dutch.php|1.4.10|3275|optional|r@
1.4.10|lang/english.php|1.4.10|3275|mandatory|r@
1.4.10|lang/english_gb.php|1.4.10|3275|optional|r@
1.4.10|lang/finnish.php|1.4.10|1.26|optional|r@
1.4.10|lang/french.php|1.4.10|3275|optional|r@
1.4.10|lang/galician.php|1.4.10|3275|optional|r@
1.4.10|lang/georgian.php|1.4.10|3275|optional|r@
1.4.10|lang/german.php|1.4.10|3275|optional|r@
1.4.10|lang/german_sie.php|1.4.10|3275|optional|r@
1.4.10|lang/hebrew.php|1.4.10|3275|optional|r@
1.4.10|lang/hungarian.php|1.4.10|3275|optional|r@
1.4.10|lang/italian.php|1.4.10|3275|optional|r@
1.4.10|lang/japanese.php|1.4.10|3275|optional|r@
1.4.10|lang/korean.php|1.4.10|3275|optional|r@
1.4.10|lang/norwegian.php|1.4.10|3275|optional|r@
1.4.10|lang/persian.php|1.4.10|3275|optional|r@
1.4.10|lang/polish.php|1.4.10|3275|optional|r@
1.4.10|lang/portuguese.php|1.4.10|3275|optional|r@
1.4.10|lang/russian.php|1.4.10|3275|optional|r@
1.4.10|lang/slovak.php|1.4.10|3275|optional|r@
1.4.10|lang/slovenian.php|1.4.10|3275|optional|r@
1.4.10|lang/spanish.php|1.4.10|3275|optional|r@
1.4.10|lang/swedish.php|1.4.10|3275|optional|r@
1.4.10|lang/turkish.php|1.4.10|3275|optional|r@
1.4.10|lang/ukrainian.php|1.4.10|3275|optional|r@
1.4.10|logs|||mandatory|w@
1.4.10|logs/log_header.inc.php|1.4.10|3275|mandatory|r@
1.4.10|plugins|||optional|r@
1.4.10|plugins/sample|||optional|r@
1.4.10|plugins/sample/codebase.php|1.4.10|3275|optional|r@
1.4.10|plugins/sample/configuration.php|1.4.10|3275|optional|r@
1.4.10|plugins/sef_urls|||optional|r@
1.4.10|plugins/sef_urls/codebase.php|1.4.10|3275|optional|r@
1.4.10|plugins/sef_urls/configuration.php|1.4.10|3275|optional|r@
1.4.10|plugins/sef_urls/ht.txt|1.4.10|3275|optional|r@
1.4.10|sql|||mandatory|r@
1.4.10|sql/basic.sql|1.4.10|3275|mandatory|r@
1.4.10|sql/schema.sql|1.4.10|3307|mandatory|r@
1.4.10|sql/update.sql|1.4.10|3320|mandatory|r@
1.4.10|themes|||mandatory|r@
1.4.10|themes/classic|||optional|r@
1.4.10|themes/classic/style.css|1.4.10|3275|optional|r@
1.4.10|themes/classic/template.html||3275|optional|r@
1.4.10|themes/classic/theme.php|1.4.10|3275|optional|r@
1.4.10|themes/classic/images|||optional|r@
1.4.10|themes/eyeball|||optional|r@
1.4.10|themes/eyeball/style.css|1.4.10|3275|optional|r@
1.4.10|themes/eyeball/template.html||3275|optional|r@
1.4.10|themes/eyeball/theme.php|1.4.10|3275|optional|r@
1.4.10|themes/eyeball/images|||optional|r@
1.4.10|themes/fruity|||optional|r@
1.4.10|themes/fruity/style.css|1.4.10|3275|optional|r@
1.4.10|themes/fruity/template.html||3275|optional|r@
1.4.10|themes/fruity/theme.php|1.4.10|3275|optional|r@
1.4.10|themes/fruity/images|||optional|r@
1.4.10|themes/hardwired|||optional|r@
1.4.10|themes/hardwired/style.css|1.4.10|3275|optional|r@
1.4.10|themes/hardwired/template.html||3275|optional|r@
1.4.10|themes/hardwired/theme.php|1.4.10|3275|optional|r@
1.4.10|themes/hardwired/images|||optional|r@
1.4.10|themes/igames|||optional|r@
1.4.10|themes/igames/style.css|1.4.10|3275|optional|r@
1.4.10|themes/igames/template.html||3275|optional|r@
1.4.10|themes/igames/theme.php|1.4.10|3275|optional|r@
1.4.10|themes/igames/images|||optional|r@
1.4.10|themes/mac_ox_x|||optional|r@
1.4.10|themes/mac_ox_x/style.css|1.4.10|3275|optional|r@
1.4.10|themes/mac_ox_x/template.html||3275|optional|r@
1.4.10|themes/mac_ox_x/theme.php|1.4.10|3275|optional|r@
1.4.10|themes/mac_ox_x/images|||optional|r@
1.4.10|themes/project_vii|||optional|r@
1.4.10|themes/project_vii/style.css|1.4.10|3275|optional|r@
1.4.10|themes/project_vii/template.html||3275|optional|r@
1.4.10|themes/project_vii/theme.php|1.4.10|3275|optional|r@
1.4.10|themes/project_vii/images|||optional|r@
1.4.10|themes/rainy_day|||optional|r@
1.4.10|themes/rainy_day/style.css|1.4.10|3275|optional|r@
1.4.10|themes/rainy_day/template.html||3275|optional|r@
1.4.10|themes/rainy_day/theme.php|1.4.10|3275|optional|r@
1.4.10|themes/rainy_day/images|||optional|r@
1.4.10|themes/sample|||optional|r@
1.4.10|themes/sample/style.css|1.4.10|3275|optional|r@
1.4.10|themes/sample/template.html||3275|optional|r@
1.4.10|themes/sample/theme.php|1.4.10|3275|optional|r@
1.4.10|themes/sample/images|||optional|r@
1.4.10|themes/water_drop|||optional|r@
1.4.10|themes/water_drop/style.css|1.4.10|3275|optional|r@
1.4.10|themes/water_drop/template.html||3275|optional|r@
1.4.10|themes/water_drop/theme.php|1.4.10|3275|optional|r@
1.4.10|themes/water_drop/images|||optional|r@
1.4.11|addfav.php|1.4.11|3406|mandatory|r@
1.4.11|addpic.php|1.4.11|3406|mandatory|r@
1.4.11|admin.php|1.4.11|3406|mandatory|r@
1.4.11|albmgr.php|1.4.11|3415|mandatory|r@
1.4.11|anycontent.php|1.4.11|3406|mandatory|r@
1.4.11|banning.php|1.4.11|3406|mandatory|r@
1.4.11|bridgemgr.php|1.4.11|3406|mandatory|r@
1.4.11|calendar.php|1.4.11|3406|mandatory|r@
1.4.11|catmgr.php|1.4.11|3406|mandatory|r@
1.4.11|charsetmgr.php|1.4.11|3406|mandatory|r@
1.4.11|config.php|1.4.11|3406|optional|r@
1.4.11|db_ecard.php|1.4.11|3406|mandatory|r@
1.4.11|db_input.php|1.4.11|3406|mandatory|r@
1.4.11|delete.php|1.4.11|3406|mandatory|r@
1.4.11|displayecard.php|1.4.11|3406|mandatory|r@
1.4.11|displayimage.php|1.4.11|3406|mandatory|r@
1.4.11|displayreport.php|1.4.11|3406|mandatory|r@
1.4.11|ecard.php|1.4.11|3406|mandatory|r@
1.4.11|editOnePic.php|1.4.11|3406|mandatory|r@
1.4.11|editpics.php|1.4.11|3406|mandatory|r@
1.4.11|exifmgr.php|1.4.11|3406|mandatory|r@
1.4.11|faq.php|1.4.11|3406|mandatory|r@
1.4.11|forgot_passwd.php|1.4.11|3406|mandatory|r@
1.4.11|getlang.php|1.4.11|3406|mandatory|r@
1.4.11|groupmgr.php|1.4.11|3406|mandatory|r@
1.4.11|image_processor.php|1.4.11|3406|mandatory|r@
1.4.11|index.php|1.4.11|3406|mandatory|r@
1.4.11|install.php|1.4.11|3406|mandatory|r@
1.4.11|installer.css|1.4.11|3406|mandatory|r@
1.4.11|keyword_create_dict.php|1.4.11|3406|mandatory|r@
1.4.11|keyword_select.php|1.4.11|3406|mandatory|r@
1.4.11|keywordmgr.php|1.4.11|3406|mandatory|r@
1.4.11|login.php|1.4.11|3406|mandatory|r@
1.4.11|logout.php|1.4.11|3406|mandatory|r@
1.4.11|minibrowser.php|1.4.11|3406|mandatory|r@
1.4.11|mode.php|1.4.11|3406|mandatory|r@
1.4.11|modifyalb.php|1.4.11|3406|mandatory|r@
1.4.11|phpinfo.php|1.4.11|3406|mandatory|r@
1.4.11|picEditor.php|1.4.11|3410|mandatory|r@
1.4.11|picmgr.php|1.4.11|3406|mandatory|r@
1.4.11|pluginmgr.php|1.4.11|3406|mandatory|r@
1.4.11|profile.php|1.4.11|3406|mandatory|r@
1.4.11|ratepic.php|1.4.11|3406|mandatory|r@
1.4.11|register.php|1.4.11|3406|mandatory|r@
1.4.11|relocate_server.php|1.4.11|3406|optional|r@
1.4.11|report_file.php|1.4.11|3406|mandatory|r@
1.4.11|reviewcom.php|1.4.11|3406|mandatory|r@
1.4.11|scripts.js|1.4.11|3406|mandatory|r@
1.4.11|search.php|1.4.11|3406|mandatory|r@
1.4.11|searchnew.php|1.4.11|3406|mandatory|r@
1.4.11|showthumb.php|1.4.11|3406|mandatory|r@
1.4.11|stat_details.php|1.4.11|3406|mandatory|r@
1.4.11|thumbnails.php|1.4.11|3628|mandatory|r@
1.4.11|update.php|1.4.11|3406|mandatory|r@
1.4.11|upgrade-1.0-to-1.2.php|1.4.11|3406|mandatory|r@
1.4.11|upload.php|1.4.11|3406|mandatory|r@
1.4.11|usermgr.php|1.4.11|3406|mandatory|r@
1.4.11|util.php|1.4.11|3406|mandatory|r@
1.4.11|versioncheck.php|1.4.11|3634|mandatory|r@
1.4.11|viewlog.php|1.4.11|3406|mandatory|r@
1.4.11|xp_publish.php|1.4.11|3406|mandatory|r@
1.4.11|zipdownload.php|1.4.11|3406|mandatory|r@
1.4.11|**fullpath**|||mandatory|w@
1.4.11|**fullpath**/index.php|||optional|w@
1.4.11|**fullpath**/edit/index.html|||optional|w@
1.4.11|**fullpath**/edit/no_FTP-uploads_into_this_folder!|||optional|w@
1.4.11|**fullpath**/edit|||mandatory|w@
1.4.11|**fullpath**/edit/index.html|||optional|w@
1.4.11|**fullpath**/**userpics**|||mandatory|w@
1.4.11|**fullpath**/**userpics**/index.php|||optional|w@
1.4.11|**fullpath**/**userpics**/no_FTP-uploads_into_this_folder!|||optional|w@
1.4.11|bridge|||mandatory|r@
1.4.11|bridge/coppermine.inc.php|1.4.11|3406|mandatory|r@
1.4.11|bridge/invisionboard20.inc.php|1.4.11|3406|optional|r@
1.4.11|bridge/mambo.inc.php|1.4.11|3406|optional|r@
1.4.11|bridge/mybb.inc.php|1.4.11|3406|optional|r@
1.4.11|bridge/phorum.inc.php|1.4.11|3406|optional|r@
1.4.11|bridge/phpbb.inc.php|1.4.11|3406|optional|r@
1.4.11|bridge/phpbb2018.inc.php|1.4.11|3441|optional|r@
1.4.11|bridge/phpbb22.inc.php|1.4.11|3406|optional|r@
1.4.11|bridge/punbb115.inc.php|1.4.11|3406|optional|r@
1.4.11|bridge/punbb12.inc.php|1.4.11|3406|optional|r@
1.4.11|bridge/smf10.inc.php|1.4.11|3406|optional|r@
1.4.11|bridge/udb_base.inc.php|1.4.11|3406|mandatory|r@
1.4.11|bridge/vbulletin30.inc.php|1.4.11|3406|optional|r@
1.4.11|bridge/xmb.inc.php|1.4.11|3406|optional|r@
1.4.11|bridge/xoops.inc.php|1.4.11|3406|optional|r@
1.4.11|docs|||mandatory|r@
1.4.11|docs/faq.htm|||optional|r@
1.4.11|docs/faq_fr.htm|||optional|r@
1.4.11|docs/index.htm||3406|mandatory|r@
1.4.11|docs/index_fr.htm||3406|mandatory|r@
1.4.11|docs/README.html||3406|optional|r@
1.4.11|docs/showdoc.php|1.4.11|3406|mandatory|r@
1.4.11|docs/style.css|1.4.11|3406|mandatory|r@
1.4.11|docs/theme.htm|||optional|r@
1.4.11|docs/translation.htm|||optional|r@
1.4.11|docs/pics|||mandatory|r@
1.4.11|docs/theme|||optional|r@
1.4.11|docs/theme/edit_style.html|||optional|r@
1.4.11|docs/theme/edit_template.html|||optional|r@
1.4.11|docs/theme/edit_theme.html|1.4.11||optional|r@
1.4.11|docs/theme/index.html|||optional|r@
1.4.11|docs/theme/style.css|1.4.11|3406|optional|r@
1.4.11|docs/theme/validation.html|||optional|r@
1.4.11|include|||mandatory|w@
1.4.11|include/archive.php|1.4.11|3406|mandatory|r@
1.4.11|include/config.inc.php|||mandatory|r@
1.4.11|include/config.inc.php.sample|||optional|r@
1.4.11|include/crop.inc.php|1.4.11|3406|mandatory|r@
1.4.11|include/debugger.inc.php|1.4.11|3406|mandatory|r@
1.4.11|include/exif.php|1.4.11|3406|mandatory|r@
1.4.11|include/exif_php.inc.php|1.4.11|3406|mandatory|r@
1.4.11|include/functions.inc.php|1.4.11|3630|mandatory|r@
1.4.11|include/imageObjectGD.class.php|1.4.11|3406|mandatory|r@
1.4.11|include/imageObjectIM.class.php|1.4.11|3406|mandatory|r@
1.4.11|include/index.html|1.4.11|3406|mandatory|r@
1.4.11|include/init.inc.php|1.4.11|3441|mandatory|r@
1.4.11|include/iptc.inc.php|1.4.11|3406|mandatory|r@
1.4.11|include/keyword.inc.php|1.4.11|3406|mandatory|r@
1.4.11|include/langfallback.inc.php|1.4.11|3406|mandatory|r@
1.4.11|include/logger.inc.php|1.4.11|3406|mandatory|r@
1.4.11|include/mailer.inc.php|1.4.11|3406|mandatory|r@
1.4.11|include/mb.inc.php|1.4.11|3406|mandatory|r@
1.4.11|include/media.functions.inc.php|1.4.11|3406|mandatory|r@
1.4.11|include/phpmailer.lang-en.php|1.4.11|3406|mandatory|r@
1.4.11|include/picmgmt.inc.php|1.4.11|3406|mandatory|r@
1.4.11|include/plugin_api.inc.php|1.4.11|3421|mandatory|r@
1.4.11|include/search.inc.php|1.4.11|3406|mandatory|r@
1.4.11|include/select_lang.inc.php|1.4.11|3406|mandatory|r@
1.4.11|include/slideshow.inc.php|1.4.11|3406|mandatory|r@
1.4.11|include/smilies.inc.php|1.4.11|3406|mandatory|r@
1.4.11|include/smtp.inc.php|1.4.11|3406|mandatory|r@
1.4.11|include/sql_parse.php|1.4.11|3406|mandatory|r@
1.4.11|include/themes.inc.php|1.4.11|3406|mandatory|r@
1.4.11|include/update.inc.php|1.4.11|3406|mandatory|r@
1.4.11|include/zip.lib.php|1.4.11|3406|mandatory|r@
1.4.11|include/makers|||mandatory|w@
1.4.11|include/makers/canon.php|1.4.11|3406|mandatory|r@
1.4.11|include/makers/fujifilm.php|1.4.11|3406|mandatory|r@
1.4.11|include/makers/gps.php|1.4.11|3406|mandatory|r@
1.4.11|include/makers/nikon.php|1.4.11|3406|mandatory|r@
1.4.11|include/makers/olympus.php|1.4.11|3406|mandatory|r@
1.4.11|include/makers/sanyo.php|1.4.11|3406|mandatory|r@
1.4.11|lang|||mandatory|r@
1.4.11|lang/albanian.php|1.4.11|3125|optional|r@
1.4.11|lang/basque.php|1.4.11|3406|optional|r@
1.4.11|lang/brazilian_portuguese.php|1.4.11|3116|optional|r@
1.4.11|lang/bulgarian.php|1.4.11|1.287|optional|r@
1.4.11|lang/chinese_big5.php|1.4.11|3406|optional|r@
1.4.11|lang/chinese_gb.php|1.4.11|3406|optional|r@
1.4.11|lang/czech.php|1.4.11|3406|optional|r@
1.4.11|lang/danish.php|1.4.11|1.15|optional|r@
1.4.11|lang/dutch.php|1.4.11|3406|optional|r@
1.4.11|lang/english.php|1.4.11|3634|mandatory|r@
1.4.11|lang/english_gb.php|1.4.11|3634|optional|r@
1.4.11|lang/finnish.php|1.4.11|1.26|optional|r@
1.4.11|lang/french.php|1.4.11|3406|optional|r@
1.4.11|lang/galician.php|1.4.11|3406|optional|r@
1.4.11|lang/georgian.php|1.4.11|3406|optional|r@
1.4.11|lang/german.php|1.4.11|3629|optional|r@
1.4.11|lang/german_sie.php|1.4.11|3629|optional|r@
1.4.11|lang/hebrew.php|1.4.11|3629|optional|r@
1.4.11|lang/hungarian.php|1.4.11|3629|optional|r@
1.4.11|lang/italian.php|1.4.11|3406|optional|r@
1.4.11|lang/japanese.php|1.4.11|3406|optional|r@
1.4.11|lang/korean.php|1.4.11|3406|optional|r@
1.4.11|lang/norwegian.php|1.4.11|3406|optional|r@
1.4.11|lang/persian.php|1.4.11|3406|optional|r@
1.4.11|lang/polish.php|1.4.11|3406|optional|r@
1.4.11|lang/portuguese.php|1.4.11|3406|optional|r@
1.4.11|lang/russian.php|1.4.11|3406|optional|r@
1.4.11|lang/slovak.php|1.4.11|3406|optional|r@
1.4.11|lang/slovenian.php|1.4.11|3629|optional|r@
1.4.11|lang/spanish.php|1.4.11|3406|optional|r@
1.4.11|lang/swedish.php|1.4.11|3406|optional|r@
1.4.11|lang/turkish.php|1.4.11|3406|optional|r@
1.4.11|lang/ukrainian.php|1.4.11|3406|optional|r@
1.4.11|logs|||mandatory|w@
1.4.11|logs/log_header.inc.php|1.4.11|3406|mandatory|r@
1.4.11|plugins|||optional|r@
1.4.11|plugins/sample|||optional|r@
1.4.11|plugins/sample/codebase.php|1.4.11|3406|optional|r@
1.4.11|plugins/sample/configuration.php|1.4.11|3406|optional|r@
1.4.11|plugins/sef_urls|||optional|r@
1.4.11|plugins/sef_urls/codebase.php|1.4.11|3406|optional|r@
1.4.11|plugins/sef_urls/configuration.php|1.4.11|3406|optional|r@
1.4.11|plugins/sef_urls/ht.txt|1.4.11|3406|optional|r@
1.4.11|sql|||mandatory|r@
1.4.11|sql/basic.sql|1.4.11|3495|mandatory|r@
1.4.11|sql/schema.sql|1.4.11|3406|mandatory|r@
1.4.11|sql/update.sql|1.4.11|3406|mandatory|r@
1.4.11|themes|||mandatory|r@
1.4.11|themes/classic|||optional|r@
1.4.11|themes/classic/style.css|1.4.11|3406|optional|r@
1.4.11|themes/classic/template.html||3406|optional|r@
1.4.11|themes/classic/theme.php|1.4.11|3406|optional|r@
1.4.11|themes/classic/images|||optional|r@
1.4.11|themes/eyeball|||optional|r@
1.4.11|themes/eyeball/style.css|1.4.11|3406|optional|r@
1.4.11|themes/eyeball/template.html||3406|optional|r@
1.4.11|themes/eyeball/theme.php|1.4.11|3406|optional|r@
1.4.11|themes/eyeball/images|||optional|r@
1.4.11|themes/fruity|||optional|r@
1.4.11|themes/fruity/style.css|1.4.11|3406|optional|r@
1.4.11|themes/fruity/template.html||3406|optional|r@
1.4.11|themes/fruity/theme.php|1.4.11|3406|optional|r@
1.4.11|themes/fruity/images|||optional|r@
1.4.11|themes/hardwired|||optional|r@
1.4.11|themes/hardwired/style.css|1.4.11|3406|optional|r@
1.4.11|themes/hardwired/template.html||3406|optional|r@
1.4.11|themes/hardwired/theme.php|1.4.11|3406|optional|r@
1.4.11|themes/hardwired/images|||optional|r@
1.4.11|themes/igames|||optional|r@
1.4.11|themes/igames/style.css|1.4.11|3406|optional|r@
1.4.11|themes/igames/template.html||3406|optional|r@
1.4.11|themes/igames/theme.php|1.4.11|3406|optional|r@
1.4.11|themes/igames/images|||optional|r@
1.4.11|themes/mac_ox_x|||optional|r@
1.4.11|themes/mac_ox_x/style.css|1.4.11|3406|optional|r@
1.4.11|themes/mac_ox_x/template.html||3406|optional|r@
1.4.11|themes/mac_ox_x/theme.php|1.4.11|3406|optional|r@
1.4.11|themes/mac_ox_x/images|||optional|r@
1.4.11|themes/project_vii|||optional|r@
1.4.11|themes/project_vii/style.css|1.4.11|3406|optional|r@
1.4.11|themes/project_vii/template.html||3406|optional|r@
1.4.11|themes/project_vii/theme.php|1.4.11|3406|optional|r@
1.4.11|themes/project_vii/images|||optional|r@
1.4.11|themes/rainy_day|||optional|r@
1.4.11|themes/rainy_day/style.css|1.4.11|3406|optional|r@
1.4.11|themes/rainy_day/template.html||3406|optional|r@
1.4.11|themes/rainy_day/theme.php|1.4.11|3406|optional|r@
1.4.11|themes/rainy_day/images|||optional|r@
1.4.11|themes/sample|||optional|r@
1.4.11|themes/sample/style.css|1.4.11|3406|optional|r@
1.4.11|themes/sample/template.html||3406|optional|r@
1.4.11|themes/sample/theme.php|1.4.11|3406|optional|r@
1.4.11|themes/sample/images|||optional|r@
1.4.11|themes/water_drop|||optional|r@
1.4.11|themes/water_drop/style.css|1.4.11|3406|optional|r@
1.4.11|themes/water_drop/template.html||3406|optional|r@
1.4.11|themes/water_drop/theme.php|1.4.11|3406|optional|r@
1.4.11|themes/water_drop/images|||optional|r@
1.4.12|addfav.php|1.4.12|3636|mandatory|r@
1.4.12|addpic.php|1.4.12|3636|mandatory|r@
1.4.12|admin.php|1.4.12|3636|mandatory|r@
1.4.12|albmgr.php|1.4.12|3636|mandatory|r@
1.4.12|anycontent.php|1.4.12|3636|mandatory|r@
1.4.12|banning.php|1.4.12|3636|mandatory|r@
1.4.12|bridgemgr.php|1.4.12|3636|mandatory|r@
1.4.12|calendar.php|1.4.12|3636|mandatory|r@
1.4.12|catmgr.php|1.4.12|3636|mandatory|r@
1.4.12|charsetmgr.php|1.4.12|3636|mandatory|r@
1.4.12|config.php|1.4.12|3636|optional|r@
1.4.12|db_ecard.php|1.4.12|3636|mandatory|r@
1.4.12|db_input.php|1.4.12|3636|mandatory|r@
1.4.12|delete.php|1.4.12|3636|mandatory|r@
1.4.12|displayecard.php|1.4.12|3636|mandatory|r@
1.4.12|displayimage.php|1.4.12|3636|mandatory|r@
1.4.12|displayreport.php|1.4.12|3636|mandatory|r@
1.4.12|ecard.php|1.4.12|3636|mandatory|r@
1.4.12|editOnePic.php|1.4.12|3636|mandatory|r@
1.4.12|editpics.php|1.4.12|3636|mandatory|r@
1.4.12|exifmgr.php|1.4.12|3636|mandatory|r@
1.4.12|faq.php|1.4.12|3636|mandatory|r@
1.4.12|forgot_passwd.php|1.4.12|3636|mandatory|r@
1.4.12|getlang.php|1.4.12|3636|mandatory|r@
1.4.12|groupmgr.php|1.4.12|3636|mandatory|r@
1.4.12|image_processor.php|1.4.12|3636|mandatory|r@
1.4.12|index.php|1.4.12|3636|mandatory|r@
1.4.12|install.php|1.4.12|3636|mandatory|r@
1.4.12|installer.css|1.4.12|3636|mandatory|r@
1.4.12|keyword_create_dict.php|1.4.12|3636|mandatory|r@
1.4.12|keyword_select.php|1.4.12|3636|mandatory|r@
1.4.12|keywordmgr.php|1.4.12|3636|mandatory|r@
1.4.12|login.php|1.4.12|3636|mandatory|r@
1.4.12|logout.php|1.4.12|3636|mandatory|r@
1.4.12|minibrowser.php|1.4.12|3636|mandatory|r@
1.4.12|mode.php|1.4.12|3636|mandatory|r@
1.4.12|modifyalb.php|1.4.12|3636|mandatory|r@
1.4.12|phpinfo.php|1.4.12|3636|mandatory|r@
1.4.12|picEditor.php|1.4.12|3636|mandatory|r@
1.4.12|picmgr.php|1.4.12|3636|mandatory|r@
1.4.12|pluginmgr.php|1.4.12|3636|mandatory|r@
1.4.12|profile.php|1.4.12|3636|mandatory|r@
1.4.12|ratepic.php|1.4.12|3636|mandatory|r@
1.4.12|register.php|1.4.12|3636|mandatory|r@
1.4.12|relocate_server.php|1.4.12|3636|optional|r@
1.4.12|report_file.php|1.4.12|3636|mandatory|r@
1.4.12|reviewcom.php|1.4.12|3636|mandatory|r@
1.4.12|scripts.js|1.4.12|3636|mandatory|r@
1.4.12|search.php|1.4.12|3636|mandatory|r@
1.4.12|searchnew.php|1.4.12|3636|mandatory|r@
1.4.12|showthumb.php|1.4.12|3636|mandatory|r@
1.4.12|stat_details.php|1.4.12|3636|mandatory|r@
1.4.12|thumbnails.php|1.4.12|3636|mandatory|r@
1.4.12|update.php|1.4.12|3636|mandatory|r@
1.4.12|upgrade-1.0-to-1.2.php|1.4.12|3636|mandatory|r@
1.4.12|upload.php|1.4.12|3636|mandatory|r@
1.4.12|usermgr.php|1.4.12|3636|mandatory|r@
1.4.12|util.php|1.4.12|3636|mandatory|r@
1.4.12|versioncheck.php|1.4.12|3662|mandatory|r@
1.4.12|viewlog.php|1.4.12|3636|mandatory|r@
1.4.12|xp_publish.php|1.4.12|3636|mandatory|r@
1.4.12|zipdownload.php|1.4.12|3636|mandatory|r@
1.4.12|**fullpath**|||mandatory|w@
1.4.12|**fullpath**/index.php|||optional|w@
1.4.12|**fullpath**/edit/index.html|||optional|w@
1.4.12|**fullpath**/edit/no_FTP-uploads_into_this_folder!|||optional|w@
1.4.12|**fullpath**/edit|||mandatory|w@
1.4.12|**fullpath**/edit/index.html|||optional|w@
1.4.12|**fullpath**/**userpics**|||mandatory|w@
1.4.12|**fullpath**/**userpics**/index.php|||optional|w@
1.4.12|**fullpath**/**userpics**/no_FTP-uploads_into_this_folder!|||optional|w@
1.4.12|bridge|||mandatory|r@
1.4.12|bridge/coppermine.inc.php|1.4.12|3636|mandatory|r@
1.4.12|bridge/invisionboard20.inc.php|1.4.12|3636|optional|r@
1.4.12|bridge/mambo.inc.php|1.4.12|3636|optional|r@
1.4.12|bridge/mybb.inc.php|1.4.12|3636|optional|r@
1.4.12|bridge/phorum.inc.php|1.4.12|3636|optional|r@
1.4.12|bridge/phpbb.inc.php|1.4.12|3636|optional|r@
1.4.12|bridge/phpbb2018.inc.php|1.4.12|3636|optional|r@
1.4.12|bridge/phpbb22.inc.php|1.4.12|3636|optional|r@
1.4.12|bridge/punbb115.inc.php|1.4.12|3636|optional|r@
1.4.12|bridge/punbb12.inc.php|1.4.12|3636|optional|r@
1.4.12|bridge/smf10.inc.php|1.4.12|3636|optional|r@
1.4.12|bridge/udb_base.inc.php|1.4.12|3636|mandatory|r@
1.4.12|bridge/vbulletin30.inc.php|1.4.12|3636|optional|r@
1.4.12|bridge/xmb.inc.php|1.4.12|3636|optional|r@
1.4.12|bridge/xoops.inc.php|1.4.12|3636|optional|r@
1.4.12|docs|||mandatory|r@
1.4.12|docs/faq.htm|||optional|r@
1.4.12|docs/faq_fr.htm|||optional|r@
1.4.12|docs/index.htm||3636|mandatory|r@
1.4.12|docs/index_fr.htm||3636|mandatory|r@
1.4.12|docs/README.html||3636|optional|r@
1.4.12|docs/showdoc.php|1.4.12|3636|mandatory|r@
1.4.12|docs/style.css|1.4.12|3658|mandatory|r@
1.4.12|docs/theme.htm|||optional|r@
1.4.12|docs/translation.htm|||optional|r@
1.4.12|docs/pics|||mandatory|r@
1.4.12|docs/theme|||optional|r@
1.4.12|docs/theme/edit_style.html|||optional|r@
1.4.12|docs/theme/edit_template.html|||optional|r@
1.4.12|docs/theme/edit_theme.html|1.4.12||optional|r@
1.4.12|docs/theme/index.html|||optional|r@
1.4.12|docs/theme/style.css|1.4.12|3636|optional|r@
1.4.12|docs/theme/validation.html|||optional|r@
1.4.12|include|||mandatory|w@
1.4.12|include/archive.php|1.4.12|3636|mandatory|r@
1.4.12|include/config.inc.php|||mandatory|r@
1.4.12|include/config.inc.php.sample|||optional|r@
1.4.12|include/crop.inc.php|1.4.12|3636|mandatory|r@
1.4.12|include/debugger.inc.php|1.4.12|3636|mandatory|r@
1.4.12|include/exif.php|1.4.12|3636|mandatory|r@
1.4.12|include/exif_php.inc.php|1.4.12|3636|mandatory|r@
1.4.12|include/functions.inc.php|1.4.12|3641|mandatory|r@
1.4.12|include/imageObjectGD.class.php|1.4.12|3636|mandatory|r@
1.4.12|include/imageObjectIM.class.php|1.4.12|3636|mandatory|r@
1.4.12|include/index.html|1.4.12|3636|mandatory|r@
1.4.12|include/init.inc.php|1.4.12|3636|mandatory|r@
1.4.12|include/iptc.inc.php|1.4.12|3636|mandatory|r@
1.4.12|include/keyword.inc.php|1.4.12|3636|mandatory|r@
1.4.12|include/langfallback.inc.php|1.4.12|3636|mandatory|r@
1.4.12|include/logger.inc.php|1.4.12|3636|mandatory|r@
1.4.12|include/mailer.inc.php|1.4.12|3636|mandatory|r@
1.4.12|include/mb.inc.php|1.4.12|3636|mandatory|r@
1.4.12|include/media.functions.inc.php|1.4.12|3636|mandatory|r@
1.4.12|include/phpmailer.lang-en.php|1.4.12|3636|mandatory|r@
1.4.12|include/picmgmt.inc.php|1.4.12|3636|mandatory|r@
1.4.12|include/plugin_api.inc.php|1.4.12|3636|mandatory|r@
1.4.12|include/search.inc.php|1.4.12|3636|mandatory|r@
1.4.12|include/select_lang.inc.php|1.4.12|3636|mandatory|r@
1.4.12|include/slideshow.inc.php|1.4.12|3636|mandatory|r@
1.4.12|include/smilies.inc.php|1.4.12|3636|mandatory|r@
1.4.12|include/smtp.inc.php|1.4.12|3636|mandatory|r@
1.4.12|include/sql_parse.php|1.4.12|3636|mandatory|r@
1.4.12|include/themes.inc.php|1.4.12|3657|mandatory|r@
1.4.12|include/update.inc.php|1.4.12|3636|mandatory|r@
1.4.12|include/zip.lib.php|1.4.12|3636|mandatory|r@
1.4.12|include/makers|||mandatory|w@
1.4.12|include/makers/canon.php|1.4.12|3636|mandatory|r@
1.4.12|include/makers/fujifilm.php|1.4.12|3636|mandatory|r@
1.4.12|include/makers/gps.php|1.4.12|3636|mandatory|r@
1.4.12|include/makers/nikon.php|1.4.12|3636|mandatory|r@
1.4.12|include/makers/olympus.php|1.4.12|3636|mandatory|r@
1.4.12|include/makers/sanyo.php|1.4.12|3636|mandatory|r@
1.4.12|lang|||mandatory|r@
1.4.12|lang/albanian.php|1.4.12|3125|optional|r@
1.4.12|lang/arabic.php|1.4.12|3275|optional|r@
1.4.12|lang/basque.php|1.4.12|3654|optional|r@
1.4.12|lang/brazilian_portuguese.php|1.4.12|3116|optional|r@
1.4.12|lang/bulgarian.php|1.4.12|3660|optional|r@
1.4.12|lang/chinese_big5.php|1.4.12|3636|optional|r@
1.4.12|lang/chinese_gb.php|1.4.12|3636|optional|r@
1.4.12|lang/czech.php|1.4.12|3654|optional|r@
1.4.12|lang/danish.php|1.4.12|3275|optional|r@
1.4.12|lang/dutch.php|1.4.12|3654|optional|r@
1.4.12|lang/english.php|1.4.12|3654|mandatory|r@
1.4.12|lang/english_gb.php|1.4.12|3654|optional|r@
1.4.12|lang/finnish.php|1.4.12|1.26|optional|r@
1.4.12|lang/french.php|1.4.12|3654|optional|r@
1.4.12|lang/galician.php|1.4.12|3654|optional|r@
1.4.12|lang/georgian.php|1.4.12|3636|optional|r@
1.4.12|lang/german.php|1.4.12|3654|optional|r@
1.4.12|lang/german_sie.php|1.4.12|3654|optional|r@
1.4.12|lang/greek.php|1.4.12|3654|optional|r@
1.4.12|lang/hebrew.php|1.4.12|3654|optional|r@
1.4.12|lang/hindi.php|1.4.12|3125|optional|r@
1.4.12|lang/hungarian.php|1.4.12|3654|optional|r@
1.4.12|lang/indonesian.php|1.4.12|3125|optional|r@
1.4.12|lang/italian.php|1.4.12|3654|optional|r@
1.4.12|lang/japanese.php|1.4.12|3636|optional|r@
1.4.12|lang/korean.php|1.4.12|3654|optional|r@
1.4.12|lang/lithuanian.php|1.4.12|3275|optional|r@
1.4.12|lang/norwegian.php|1.4.12|3654|optional|r@
1.4.12|lang/persian.php|1.4.12|3654|optional|r@
1.4.12|lang/polish.php|1.4.12|3654|optional|r@
1.4.12|lang/portuguese.php|1.4.12|3654|optional|r@
1.4.12|lang/russian.php|1.4.12|3652|optional|r@
1.4.12|lang/slovak.php|1.4.12|3654|optional|r@
1.4.12|lang/slovenian.php|1.4.12|3654|optional|r@
1.4.12|lang/spanish.php|1.4.12|3654|optional|r@
1.4.12|lang/swedish.php|1.4.12|3654|optional|r@
1.4.12|lang/thai.php|1.4.12|3125|optional|r@
1.4.12|lang/turkish.php|1.4.12|3660|optional|r@
1.4.12|lang/ukrainian.php|1.4.12|3654|optional|r@
1.4.12|lang/vietnamese.php|1.4.12|3275|optional|r@
1.4.12|logs|||mandatory|w@
1.4.12|logs/log_header.inc.php|1.4.12|3636|mandatory|r@
1.4.12|plugins|||optional|r@
1.4.12|plugins/sample|||optional|r@
1.4.12|plugins/sample/codebase.php|1.4.12|3636|optional|r@
1.4.12|plugins/sample/configuration.php|1.4.12|3636|optional|r@
1.4.12|plugins/sef_urls|||optional|r@
1.4.12|plugins/sef_urls/codebase.php|1.4.12|3636|optional|r@
1.4.12|plugins/sef_urls/configuration.php|1.4.12|3636|optional|r@
1.4.12|plugins/sef_urls/ht.txt|1.4.12|3636|optional|r@
1.4.12|sql|||mandatory|r@
1.4.12|sql/basic.sql|1.4.12|3636|mandatory|r@
1.4.12|sql/schema.sql|1.4.12|3636|mandatory|r@
1.4.12|sql/update.sql|1.4.12|3636|mandatory|r@
1.4.12|themes|||mandatory|r@
1.4.12|themes/classic|||optional|r@
1.4.12|themes/classic/style.css|1.4.12|3636|optional|r@
1.4.12|themes/classic/template.html||3636|optional|r@
1.4.12|themes/classic/theme.php|1.4.12|3636|optional|r@
1.4.12|themes/classic/images|||optional|r@
1.4.12|themes/eyeball|||optional|r@
1.4.12|themes/eyeball/style.css|1.4.12|3636|optional|r@
1.4.12|themes/eyeball/template.html||3636|optional|r@
1.4.12|themes/eyeball/theme.php|1.4.12|3636|optional|r@
1.4.12|themes/eyeball/images|||optional|r@
1.4.12|themes/fruity|||optional|r@
1.4.12|themes/fruity/style.css|1.4.12|3636|optional|r@
1.4.12|themes/fruity/template.html||3636|optional|r@
1.4.12|themes/fruity/theme.php|1.4.12|3636|optional|r@
1.4.12|themes/fruity/images|||optional|r@
1.4.12|themes/hardwired|||optional|r@
1.4.12|themes/hardwired/style.css|1.4.12|3636|optional|r@
1.4.12|themes/hardwired/template.html||3636|optional|r@
1.4.12|themes/hardwired/theme.php|1.4.12|3636|optional|r@
1.4.12|themes/hardwired/images|||optional|r@
1.4.12|themes/igames|||optional|r@
1.4.12|themes/igames/style.css|1.4.12|3636|optional|r@
1.4.12|themes/igames/template.html||3636|optional|r@
1.4.12|themes/igames/theme.php|1.4.12|3636|optional|r@
1.4.12|themes/igames/images|||optional|r@
1.4.12|themes/mac_ox_x|||optional|r@
1.4.12|themes/mac_ox_x/style.css|1.4.12|3636|optional|r@
1.4.12|themes/mac_ox_x/template.html||3636|optional|r@
1.4.12|themes/mac_ox_x/theme.php|1.4.12|3636|optional|r@
1.4.12|themes/mac_ox_x/images|||optional|r@
1.4.12|themes/project_vii|||optional|r@
1.4.12|themes/project_vii/style.css|1.4.12|3636|optional|r@
1.4.12|themes/project_vii/template.html||3636|optional|r@
1.4.12|themes/project_vii/theme.php|1.4.12|3636|optional|r@
1.4.12|themes/project_vii/images|||optional|r@
1.4.12|themes/rainy_day|||optional|r@
1.4.12|themes/rainy_day/style.css|1.4.12|3636|optional|r@
1.4.12|themes/rainy_day/template.html||3636|optional|r@
1.4.12|themes/rainy_day/theme.php|1.4.12|3636|optional|r@
1.4.12|themes/rainy_day/images|||optional|r@
1.4.12|themes/sample|||optional|r@
1.4.12|themes/sample/style.css|1.4.12|3636|optional|r@
1.4.12|themes/sample/template.html||3636|optional|r@
1.4.12|themes/sample/theme.php|1.4.12|3657|optional|r@
1.4.12|themes/sample/images|||optional|r@
1.4.12|themes/water_drop|||optional|r@
1.4.12|themes/water_drop/style.css|1.4.12|3636|optional|r@
1.4.12|themes/water_drop/template.html||3636|optional|r@
1.4.12|themes/water_drop/theme.php|1.4.12|3636|optional|r@
1.4.12|themes/water_drop/images|||optional|r@
1.4.13|addfav.php|1.4.13|3837|mandatory|r@
1.4.13|addpic.php|1.4.13|3837|mandatory|r@
1.4.13|admin.php|1.4.13|3861|mandatory|r@
1.4.13|albmgr.php|1.4.13|3837|mandatory|r@
1.4.13|anycontent.php|1.4.13|3837|mandatory|r@
1.4.13|banning.php|1.4.13|3837|mandatory|r@
1.4.13|bridgemgr.php|1.4.13|3933|mandatory|r@
1.4.13|calendar.php|1.4.13|3837|mandatory|r@
1.4.13|catmgr.php|1.4.13|3837|mandatory|r@
1.4.13|charsetmgr.php|1.4.13|3837|mandatory|r@
1.4.13|config.php|1.4.13|3837|optional|r@
1.4.13|db_ecard.php|1.4.13|3837|mandatory|r@
1.4.13|db_input.php|1.4.13|3837|mandatory|r@
1.4.13|delete.php|1.4.13|3837|mandatory|r@
1.4.13|displayecard.php|1.4.13|3837|mandatory|r@
1.4.13|displayimage.php|1.4.13|3837|mandatory|r@
1.4.13|displayreport.php|1.4.13|3837|mandatory|r@
1.4.13|ecard.php|1.4.13|3837|mandatory|r@
1.4.13|editOnePic.php|1.4.13|3837|mandatory|r@
1.4.13|editpics.php|1.4.13|3837|mandatory|r@
1.4.13|exifmgr.php|1.4.13|3837|mandatory|r@
1.4.13|faq.php|1.4.13|3837|mandatory|r@
1.4.13|forgot_passwd.php|1.4.13|3859|mandatory|r@
1.4.13|getlang.php|1.4.13|3837|mandatory|r@
1.4.13|groupmgr.php|1.4.13|3837|mandatory|r@
1.4.13|image_processor.php|1.4.13|3837|mandatory|r@
1.4.13|index.php|1.4.13|3837|mandatory|r@
1.4.13|install.php|1.4.13|3915|mandatory|r@
1.4.13|installer.css|1.4.13|3837|mandatory|r@
1.4.13|keyword_create_dict.php|1.4.13|3837|mandatory|r@
1.4.13|keyword_select.php|1.4.13|3837|mandatory|r@
1.4.13|keywordmgr.php|1.4.13|3837|mandatory|r@
1.4.13|login.php|1.4.13|3860|mandatory|r@
1.4.13|logout.php|1.4.13|3837|mandatory|r@
1.4.13|minibrowser.php|1.4.13|3837|mandatory|r@
1.4.13|mode.php|1.4.13|3837|mandatory|r@
1.4.13|modifyalb.php|1.4.13|3837|mandatory|r@
1.4.13|phpinfo.php|1.4.13|3837|mandatory|r@
1.4.13|picEditor.php|1.4.13|3837|mandatory|r@
1.4.13|picmgr.php|1.4.13|3837|mandatory|r@
1.4.13|pluginmgr.php|1.4.13|3837|mandatory|r@
1.4.13|profile.php|1.4.13|3837|mandatory|r@
1.4.13|ratepic.php|1.4.13|3837|mandatory|r@
1.4.13|register.php|1.4.13|3837|mandatory|r@
1.4.13|relocate_server.php|1.4.13|3837|optional|r@
1.4.13|report_file.php|1.4.13|3863|mandatory|r@
1.4.13|reviewcom.php|1.4.13|3837|mandatory|r@
1.4.13|scripts.js|1.4.13|3837|mandatory|r@
1.4.13|search.php|1.4.13|3837|mandatory|r@
1.4.13|searchnew.php|1.4.13|3837|mandatory|r@
1.4.13|showthumb.php|1.4.13|3837|mandatory|r@
1.4.13|stat_details.php|1.4.13|3837|mandatory|r@
1.4.13|thumbnails.php|1.4.13|3837|mandatory|r@
1.4.13|update.php|1.4.13|3837|mandatory|r@
1.4.13|upgrade-1.0-to-1.2.php|1.4.13|3837|mandatory|r@
1.4.13|upload.php|1.4.13|3837|mandatory|r@
1.4.13|usermgr.php|1.4.13|3837|mandatory|r@
1.4.13|util.php|1.4.13|3837|mandatory|r@
1.4.13|versioncheck.php|1.4.13|3961|mandatory|r@
1.4.13|viewlog.php|1.4.13|3941|mandatory|r@
1.4.13|xp_publish.php|1.4.13|3837|mandatory|r@
1.4.13|zipdownload.php|1.4.13|3837|mandatory|r@
1.4.13|**fullpath**|||mandatory|w@
1.4.13|**fullpath**/index.php|||optional|w@
1.4.13|**fullpath**/edit/index.html|||optional|w@
1.4.13|**fullpath**/edit/no_FTP-uploads_into_this_folder!|||optional|w@
1.4.13|**fullpath**/edit|||mandatory|w@
1.4.13|**fullpath**/edit/index.html|||optional|w@
1.4.13|**fullpath**/**userpics**|||mandatory|w@
1.4.13|**fullpath**/**userpics**/index.php|||optional|w@
1.4.13|**fullpath**/**userpics**/no_FTP-uploads_into_this_folder!|||optional|w@
1.4.13|bridge|||mandatory|r@
1.4.13|bridge/coppermine.inc.php|1.4.13|3837|mandatory|r@
1.4.13|bridge/invisionboard20.inc.php|1.4.13|3837|optional|r@
1.4.13|bridge/mambo.inc.php|1.4.13|3837|optional|r@
1.4.13|bridge/mybb.inc.php|1.4.13|3837|optional|r@
1.4.13|bridge/phorum.inc.php|1.4.13|3837|optional|r@
1.4.13|bridge/phpbb.inc.php|1.4.13|3837|optional|r@
1.4.13|bridge/phpbb2018.inc.php|1.4.13|3837|optional|r@
1.4.13|bridge/phpbb22.inc.php|1.4.13|3837|optional|r@
1.4.13|bridge/punbb115.inc.php|1.4.13|3837|optional|r@
1.4.13|bridge/punbb12.inc.php|1.4.13|3837|optional|r@
1.4.13|bridge/smf10.inc.php|1.4.13|3837|optional|r@
1.4.13|bridge/udb_base.inc.php|1.4.13|3837|mandatory|r@
1.4.13|bridge/vbulletin30.inc.php|1.4.13|3837|optional|r@
1.4.13|bridge/xmb.inc.php|1.4.13|3837|optional|r@
1.4.13|bridge/xoops.inc.php|1.4.13|3837|optional|r@
1.4.13|docs|||mandatory|r@
1.4.13|docs/faq.htm|||optional|r@
1.4.13|docs/faq_de.htm|||optional|r@
1.4.13|docs/faq_fr.htm|||optional|r@
1.4.13|docs/index.htm|1.4.13|3956|mandatory|r@
1.4.13|docs/index_fr.htm||3837|mandatory|r@
1.4.13|docs/README.html||3837|optional|r@
1.4.13|docs/showdoc.php|1.4.13|3837|mandatory|r@
1.4.13|docs/style.css|1.4.13|3837|mandatory|r@
1.4.13|docs/theme.htm|||optional|r@
1.4.13|docs/translation.htm|||optional|r@
1.4.13|docs/pics|||mandatory|r@
1.4.13|docs/theme|||optional|r@
1.4.13|docs/theme/edit_style.html|||optional|r@
1.4.13|docs/theme/edit_template.html|||optional|r@
1.4.13|docs/theme/edit_theme.html|1.4.13||optional|r@
1.4.13|docs/theme/index.html|||optional|r@
1.4.13|docs/theme/style.css|1.4.13|3837|optional|r@
1.4.13|docs/theme/validation.html|||optional|r@
1.4.13|include|||mandatory|w@
1.4.13|include/archive.php|1.4.13|3837|mandatory|r@
1.4.13|include/config.inc.php|||mandatory|r@
1.4.13|include/config.inc.php.sample|||optional|r@
1.4.13|include/crop.inc.php|1.4.13|3837|mandatory|r@
1.4.13|include/debugger.inc.php|1.4.13|3837|mandatory|r@
1.4.13|include/exif.php|1.4.13|3837|mandatory|r@
1.4.13|include/exif_php.inc.php|1.4.13|3837|mandatory|r@
1.4.13|include/functions.inc.php|1.4.13|3950|mandatory|r@
1.4.13|include/imageObjectGD.class.php|1.4.13|3837|mandatory|r@
1.4.13|include/imageObjectIM.class.php|1.4.13|3837|mandatory|r@
1.4.13|include/index.html|1.4.13|3837|mandatory|r@
1.4.13|include/init.inc.php|1.4.13|3950|mandatory|r@
1.4.13|include/iptc.inc.php|1.4.13|3837|mandatory|r@
1.4.13|include/keyword.inc.php|1.4.13|3864|mandatory|r@
1.4.13|include/langfallback.inc.php|1.4.13|3837|mandatory|r@
1.4.13|include/logger.inc.php|1.4.13|3837|mandatory|r@
1.4.13|include/mailer.inc.php|1.4.13|3837|mandatory|r@
1.4.13|include/mb.inc.php|1.4.13|3837|mandatory|r@
1.4.13|include/media.functions.inc.php|1.4.13|3837|mandatory|r@
1.4.13|include/phpmailer.lang-en.php|1.4.13|3837|mandatory|r@
1.4.13|include/picmgmt.inc.php|1.4.13|3862|mandatory|r@
1.4.13|include/plugin_api.inc.php|1.4.13|3837|mandatory|r@
1.4.13|include/search.inc.php|1.4.13|3837|mandatory|r@
1.4.13|include/select_lang.inc.php|1.4.13|3837|mandatory|r@
1.4.13|include/slideshow.inc.php|1.4.13|3837|mandatory|r@
1.4.13|include/smilies.inc.php|1.4.13|3837|mandatory|r@
1.4.13|include/smtp.inc.php|1.4.13|3837|mandatory|r@
1.4.13|include/sql_parse.php|1.4.13|3837|mandatory|r@
1.4.13|include/themes.inc.php|1.4.13|3837|mandatory|r@
1.4.13|include/update.inc.php|1.4.13|3837|mandatory|r@
1.4.13|include/zip.lib.php|1.4.13|3837|mandatory|r@
1.4.13|include/makers|||mandatory|w@
1.4.13|include/makers/canon.php|1.4.13|3837|mandatory|r@
1.4.13|include/makers/fujifilm.php|1.4.13|3837|mandatory|r@
1.4.13|include/makers/gps.php|1.4.13|3837|mandatory|r@
1.4.13|include/makers/nikon.php|1.4.13|3837|mandatory|r@
1.4.13|include/makers/olympus.php|1.4.13|3837|mandatory|r@
1.4.13|include/makers/sanyo.php|1.4.13|3837|mandatory|r@
1.4.13|lang|||mandatory|r@
1.4.13|lang/albanian.php|1.4.13|3125|optional|r@
1.4.13|lang/arabic.php|1.4.13|3275|optional|r@
1.4.13|lang/basque.php|1.4.13|3918|optional|r@
1.4.13|lang/brazilian_portuguese.php|1.4.13|3116|optional|r@
1.4.13|lang/bulgarian.php|1.4.13|3660|optional|r@
1.4.13|lang/catalan.php|1.4.13|3918|optional|r@
1.4.13|lang/chinese_big5.php|1.4.13|3837|optional|r@
1.4.13|lang/chinese_gb.php|1.4.13|3837|optional|r@
1.4.13|lang/czech.php|1.4.13|3918|optional|r@
1.4.13|lang/danish.php|1.4.13|3275|optional|r@
1.4.13|lang/dutch.php|1.4.13|3918|optional|r@
1.4.13|lang/english.php|1.4.13|3918|mandatory|r@
1.4.13|lang/english_gb.php|1.4.13|3918|optional|r@
1.4.13|lang/finnish.php|1.4.13|3918|optional|r@
1.4.13|lang/french.php|1.4.13|3918|optional|r@
1.4.13|lang/galician.php|1.4.13|3918|optional|r@
1.4.13|lang/georgian.php|1.4.13|3837|optional|r@
1.4.13|lang/german.php|1.4.13|3918|optional|r@
1.4.13|lang/german_sie.php|1.4.13|3918|optional|r@
1.4.13|lang/greek.php|1.4.13|3918|optional|r@
1.4.13|lang/hebrew.php|1.4.13|3918|optional|r@
1.4.13|lang/hindi.php|1.4.13|3125|optional|r@
1.4.13|lang/hungarian.php|1.4.13|3918|optional|r@
1.4.13|lang/indonesian.php|1.4.13|3125|optional|r@
1.4.13|lang/italian.php|1.4.13|3918|optional|r@
1.4.13|lang/japanese.php|1.4.13|3837|optional|r@
1.4.13|lang/korean.php|1.4.13|3837|optional|r@
1.4.13|lang/lithuanian.php|1.4.13|3275|optional|r@
1.4.13|lang/macedonian.php|1.4.13|3660|optional|r@
1.4.13|lang/norwegian.php|1.4.13|3918|optional|r@
1.4.13|lang/persian.php|1.4.13|3918|optional|r@
1.4.13|lang/polish.php|1.4.13|3918|optional|r@
1.4.13|lang/portuguese.php|1.4.13|3918|optional|r@
1.4.13|lang/romanian.php|1.4.13|3654|optional|r@
1.4.13|lang/russian.php|1.4.13|3950|optional|r@
1.4.13|lang/slovak.php|1.4.13|3918|optional|r@
1.4.13|lang/slovenian.php|1.4.13|3918|optional|r@
1.4.13|lang/spanish.php|1.4.13|3918|optional|r@
1.4.13|lang/swedish.php|1.4.13|3918|optional|r@
1.4.13|lang/thai.php|1.4.13|3125|optional|r@
1.4.13|lang/turkish.php|1.4.13|3918|optional|r@
1.4.13|lang/ukrainian.php|1.4.13|3918|optional|r@
1.4.13|lang/vietnamese.php|1.4.13|3275|optional|r@
1.4.13|logs|||mandatory|w@
1.4.13|logs/log_header.inc.php|1.4.13|3837|mandatory|r@
1.4.13|plugins|||optional|r@
1.4.13|plugins/sample|||optional|r@
1.4.13|plugins/sample/codebase.php|1.4.13|3912|optional|r@
1.4.13|plugins/sample/configuration.php|1.4.13|3912|optional|r@
1.4.13|sql|||mandatory|r@
1.4.13|sql/basic.sql|1.4.13|3918|mandatory|r@
1.4.13|sql/schema.sql|1.4.13|3837|mandatory|r@
1.4.13|sql/update.sql|1.4.13|3918|mandatory|r@
1.4.13|themes|||mandatory|r@
1.4.13|themes/classic|||optional|r@
1.4.13|themes/classic/style.css|1.4.13|3837|optional|r@
1.4.13|themes/classic/template.html||3837|optional|r@
1.4.13|themes/classic/theme.php|1.4.13|3837|optional|r@
1.4.13|themes/classic/images|||optional|r@
1.4.13|themes/eyeball|||optional|r@
1.4.13|themes/eyeball/style.css|1.4.13|3837|optional|r@
1.4.13|themes/eyeball/template.html||3837|optional|r@
1.4.13|themes/eyeball/theme.php|1.4.13|3837|optional|r@
1.4.13|themes/eyeball/images|||optional|r@
1.4.13|themes/fruity|||optional|r@
1.4.13|themes/fruity/style.css|1.4.13|3837|optional|r@
1.4.13|themes/fruity/template.html||3837|optional|r@
1.4.13|themes/fruity/theme.php|1.4.13|3837|optional|r@
1.4.13|themes/fruity/images|||optional|r@
1.4.13|themes/hardwired|||optional|r@
1.4.13|themes/hardwired/style.css|1.4.13|3837|optional|r@
1.4.13|themes/hardwired/template.html||3837|optional|r@
1.4.13|themes/hardwired/theme.php|1.4.13|3837|optional|r@
1.4.13|themes/hardwired/images|||optional|r@
1.4.13|themes/igames|||optional|r@
1.4.13|themes/igames/style.css|1.4.13|3837|optional|r@
1.4.13|themes/igames/template.html||3837|optional|r@
1.4.13|themes/igames/theme.php|1.4.13|3837|optional|r@
1.4.13|themes/igames/images|||optional|r@
1.4.13|themes/mac_ox_x|||optional|r@
1.4.13|themes/mac_ox_x/style.css|1.4.13|3837|optional|r@
1.4.13|themes/mac_ox_x/template.html||3837|optional|r@
1.4.13|themes/mac_ox_x/theme.php|1.4.13|3837|optional|r@
1.4.13|themes/mac_ox_x/images|||optional|r@
1.4.13|themes/project_vii|||optional|r@
1.4.13|themes/project_vii/style.css|1.4.13|3837|optional|r@
1.4.13|themes/project_vii/template.html||3837|optional|r@
1.4.13|themes/project_vii/theme.php|1.4.13|3837|optional|r@
1.4.13|themes/project_vii/images|||optional|r@
1.4.13|themes/rainy_day|||optional|r@
1.4.13|themes/rainy_day/style.css|1.4.13|3837|optional|r@
1.4.13|themes/rainy_day/template.html||3837|optional|r@
1.4.13|themes/rainy_day/theme.php|1.4.13|3837|optional|r@
1.4.13|themes/rainy_day/images|||optional|r@
1.4.13|themes/sample|||optional|r@
1.4.13|themes/sample/style.css|1.4.13|3837|optional|r@
1.4.13|themes/sample/template.html||3837|optional|r@
1.4.13|themes/sample/theme.php|1.4.13|3837|optional|r@
1.4.13|themes/sample/images|||optional|r@
1.4.13|themes/water_drop|||optional|r@
1.4.13|themes/water_drop/style.css|1.4.13|3837|optional|r@
1.4.13|themes/water_drop/template.html||3837|optional|r@
1.4.13|themes/water_drop/theme.php|1.4.13|3837|optional|r@
1.4.13|themes/water_drop/images|||optional|r@
1.4.14|addfav.php|1.4.14|3966|mandatory|r@
1.4.14|addpic.php|1.4.14|3966|mandatory|r@
1.4.14|admin.php|1.4.14|3966|mandatory|r@
1.4.14|albmgr.php|1.4.14|3966|mandatory|r@
1.4.14|anycontent.php|1.4.14|3966|mandatory|r@
1.4.14|banning.php|1.4.14|3966|mandatory|r@
1.4.14|bridgemgr.php|1.4.14|3966|mandatory|r@
1.4.14|calendar.php|1.4.14|3966|mandatory|r@
1.4.14|catmgr.php|1.4.14|3966|mandatory|r@
1.4.14|charsetmgr.php|1.4.14|3966|mandatory|r@
1.4.14|config.php|1.4.14|3966|optional|r@
1.4.14|db_ecard.php|1.4.14|3966|mandatory|r@
1.4.14|db_input.php|1.4.14|3966|mandatory|r@
1.4.14|delete.php|1.4.14|3966|mandatory|r@
1.4.14|displayecard.php|1.4.14|4013|mandatory|r@
1.4.14|displayimage.php|1.4.14|3966|mandatory|r@
1.4.14|displayreport.php|1.4.14|3966|mandatory|r@
1.4.14|ecard.php|1.4.14|3966|mandatory|r@
1.4.14|editOnePic.php|1.4.14|3966|mandatory|r@
1.4.14|editpics.php|1.4.14|3966|mandatory|r@
1.4.14|exifmgr.php|1.4.14|3966|mandatory|r@
1.4.14|faq.php|1.4.14|3966|mandatory|r@
1.4.14|forgot_passwd.php|1.4.14|3967|mandatory|r@
1.4.14|getlang.php|1.4.14|3966|mandatory|r@
1.4.14|groupmgr.php|1.4.14|3966|mandatory|r@
1.4.14|image_processor.php|1.4.14|3966|mandatory|r@
1.4.14|index.php|1.4.14|3966|mandatory|r@
1.4.14|install.php|1.4.14|3966|mandatory|r@
1.4.14|installer.css|1.4.14|3966|mandatory|r@
1.4.14|keyword_create_dict.php|1.4.14|3966|mandatory|r@
1.4.14|keyword_select.php|1.4.14|3966|mandatory|r@
1.4.14|keywordmgr.php|1.4.14|3966|mandatory|r@
1.4.14|login.php|1.4.14|3966|mandatory|r@
1.4.14|logout.php|1.4.14|3966|mandatory|r@
1.4.14|minibrowser.php|1.4.14|3966|mandatory|r@
1.4.14|mode.php|1.4.14|3966|mandatory|r@
1.4.14|modifyalb.php|1.4.14|3966|mandatory|r@
1.4.14|phpinfo.php|1.4.14|3966|mandatory|r@
1.4.14|picEditor.php|1.4.14|3966|mandatory|r@
1.4.14|picmgr.php|1.4.14|3966|mandatory|r@
1.4.14|pluginmgr.php|1.4.14|3966|mandatory|r@
1.4.14|profile.php|1.4.14|3966|mandatory|r@
1.4.14|ratepic.php|1.4.14|3966|mandatory|r@
1.4.14|register.php|1.4.14|3966|mandatory|r@
1.4.14|relocate_server.php|1.4.14|3966|optional|r@
1.4.14|report_file.php|1.4.14|3966|mandatory|r@
1.4.14|reviewcom.php|1.4.14|3966|mandatory|r@
1.4.14|scripts.js|1.4.14|3966|mandatory|r@
1.4.14|search.php|1.4.14|3966|mandatory|r@
1.4.14|searchnew.php|1.4.14|3966|mandatory|r@
1.4.14|showthumb.php|1.4.14|3966|mandatory|r@
1.4.14|stat_details.php|1.4.14|3966|mandatory|r@
1.4.14|thumbnails.php|1.4.14|3966|mandatory|r@
1.4.14|update.php|1.4.14|3966|mandatory|r@
1.4.14|upgrade-1.0-to-1.2.php|1.4.14|3966|mandatory|r@
1.4.14|upload.php|1.4.14|3966|mandatory|r@
1.4.14|usermgr.php|1.4.14|3966|mandatory|r@
1.4.14|util.php|1.4.14|3966|mandatory|r@
1.4.14|versioncheck.php|1.4.14|4029|mandatory|r@
1.4.14|viewlog.php|1.4.14|3966|mandatory|r@
1.4.14|xp_publish.php|1.4.14|3966|mandatory|r@
1.4.14|zipdownload.php|1.4.14|3966|mandatory|r@
1.4.14|**fullpath**|||mandatory|w@
1.4.14|**fullpath**/index.php|||optional|w@
1.4.14|**fullpath**/edit/index.html|||optional|w@
1.4.14|**fullpath**/edit/no_FTP-uploads_into_this_folder!|||optional|w@
1.4.14|**fullpath**/edit|||mandatory|w@
1.4.14|**fullpath**/edit/index.html|||optional|w@
1.4.14|**fullpath**/**userpics**|||mandatory|w@
1.4.14|**fullpath**/**userpics**/index.php|||optional|w@
1.4.14|**fullpath**/**userpics**/no_FTP-uploads_into_this_folder!|||optional|w@
1.4.14|bridge|||mandatory|r@
1.4.14|bridge/coppermine.inc.php|1.4.14|3966|mandatory|r@
1.4.14|bridge/invisionboard20.inc.php|1.4.14|3966|optional|r@
1.4.14|bridge/mambo.inc.php|1.4.14|3966|optional|r@
1.4.14|bridge/mybb.inc.php|1.4.14|3966|optional|r@
1.4.14|bridge/phorum.inc.php|1.4.14|3966|optional|r@
1.4.14|bridge/phpbb.inc.php|1.4.14|3966|optional|r@
1.4.14|bridge/phpbb2018.inc.php|1.4.14|3966|optional|r@
1.4.14|bridge/phpbb22.inc.php|1.4.14|3966|optional|r@
1.4.14|bridge/punbb115.inc.php|1.4.14|3966|optional|r@
1.4.14|bridge/punbb12.inc.php|1.4.14|3966|optional|r@
1.4.14|bridge/smf10.inc.php|1.4.14|3966|optional|r@
1.4.14|bridge/udb_base.inc.php|1.4.14|3966|mandatory|r@
1.4.14|bridge/vbulletin30.inc.php|1.4.14|3966|optional|r@
1.4.14|bridge/xmb.inc.php|1.4.14|3966|optional|r@
1.4.14|bridge/xoops.inc.php|1.4.14|3966|optional|r@
1.4.14|docs|||mandatory|r@
1.4.14|docs/faq.htm|||optional|r@
1.4.14|docs/faq_de.htm|||optional|r@
1.4.14|docs/faq_fr.htm|||optional|r@
1.4.14|docs/index.htm|1.4.14|4028|mandatory|r@
1.4.14|docs/index_fr.htm||3966|mandatory|r@
1.4.14|docs/README.html||3966|optional|r@
1.4.14|docs/showdoc.php|1.4.14|3966|mandatory|r@
1.4.14|docs/style.css|1.4.14|3966|mandatory|r@
1.4.14|docs/theme.htm|||optional|r@
1.4.14|docs/translation.htm|||optional|r@
1.4.14|docs/pics|||mandatory|r@
1.4.14|docs/theme|||optional|r@
1.4.14|docs/theme/edit_style.html|||optional|r@
1.4.14|docs/theme/edit_template.html|||optional|r@
1.4.14|docs/theme/edit_theme.html|1.4.14||optional|r@
1.4.14|docs/theme/index.html|||optional|r@
1.4.14|docs/theme/style.css|1.4.14|3966|optional|r@
1.4.14|docs/theme/validation.html|||optional|r@
1.4.14|include|||mandatory|w@
1.4.14|include/archive.php|1.4.14|3966|mandatory|r@
1.4.14|include/config.inc.php|||mandatory|r@
1.4.14|include/config.inc.php.sample|||optional|r@
1.4.14|include/crop.inc.php|1.4.14|3966|mandatory|r@
1.4.14|include/debugger.inc.php|1.4.14|3966|mandatory|r@
1.4.14|include/exif.php|1.4.14|3966|mandatory|r@
1.4.14|include/exif_php.inc.php|1.4.14|3966|mandatory|r@
1.4.14|include/functions.inc.php|1.4.14|3966|mandatory|r@
1.4.14|include/imageObjectGD.class.php|1.4.14|3966|mandatory|r@
1.4.14|include/imageObjectIM.class.php|1.4.14|3966|mandatory|r@
1.4.14|include/index.html|1.4.14|3966|mandatory|r@
1.4.14|include/init.inc.php|1.4.14|4028|mandatory|r@
1.4.14|include/iptc.inc.php|1.4.14|3966|mandatory|r@
1.4.14|include/keyword.inc.php|1.4.14|3966|mandatory|r@
1.4.14|include/langfallback.inc.php|1.4.14|3966|mandatory|r@
1.4.14|include/logger.inc.php|1.4.14|3966|mandatory|r@
1.4.14|include/mailer.inc.php|1.4.14|3966|mandatory|r@
1.4.14|include/mb.inc.php|1.4.14|3966|mandatory|r@
1.4.14|include/media.functions.inc.php|1.4.14|3966|mandatory|r@
1.4.14|include/phpmailer.lang-en.php|1.4.14|3966|mandatory|r@
1.4.14|include/picmgmt.inc.php|1.4.14|3966|mandatory|r@
1.4.14|include/plugin_api.inc.php|1.4.14|3966|mandatory|r@
1.4.14|include/search.inc.php|1.4.14|3966|mandatory|r@
1.4.14|include/select_lang.inc.php|1.4.14|3966|mandatory|r@
1.4.14|include/slideshow.inc.php|1.4.14|3966|mandatory|r@
1.4.14|include/smilies.inc.php|1.4.14|3966|mandatory|r@
1.4.14|include/smtp.inc.php|1.4.14|3966|mandatory|r@
1.4.14|include/sql_parse.php|1.4.14|3966|mandatory|r@
1.4.14|include/themes.inc.php|1.4.14|3966|mandatory|r@
1.4.14|include/update.inc.php|1.4.14|3966|mandatory|r@
1.4.14|include/zip.lib.php|1.4.14|3966|mandatory|r@
1.4.14|include/makers|||mandatory|w@
1.4.14|include/makers/canon.php|1.4.14|3966|mandatory|r@
1.4.14|include/makers/fujifilm.php|1.4.14|3966|mandatory|r@
1.4.14|include/makers/gps.php|1.4.14|3966|mandatory|r@
1.4.14|include/makers/nikon.php|1.4.14|3966|mandatory|r@
1.4.14|include/makers/olympus.php|1.4.14|3966|mandatory|r@
1.4.14|include/makers/sanyo.php|1.4.14|3966|mandatory|r@
1.4.14|lang|||mandatory|r@
1.4.14|lang/albanian.php|1.4.14|3125|optional|r@
1.4.14|lang/arabic.php|1.4.14|3275|optional|r@
1.4.14|lang/basque.php|1.4.14|3966|optional|r@
1.4.14|lang/brazilian_portuguese.php|1.4.14|3116|optional|r@
1.4.14|lang/bulgarian.php|1.4.14|3660|optional|r@
1.4.14|lang/catalan.php|1.4.14|3918|optional|r@
1.4.14|lang/chinese_big5.php|1.4.14|3966|optional|r@
1.4.14|lang/chinese_gb.php|1.4.14|3966|optional|r@
1.4.14|lang/czech.php|1.4.14|3966|optional|r@
1.4.14|lang/danish.php|1.4.14|3275|optional|r@
1.4.14|lang/dutch.php|1.4.14|3966|optional|r@
1.4.14|lang/english.php|1.4.14|3966|mandatory|r@
1.4.14|lang/english_gb.php|1.4.14|3966|optional|r@
1.4.14|lang/finnish.php|1.4.14|3918|optional|r@
1.4.14|lang/french.php|1.4.14|3966|optional|r@
1.4.14|lang/galician.php|1.4.14|3966|optional|r@
1.4.14|lang/georgian.php|1.4.14|3966|optional|r@
1.4.14|lang/german.php|1.4.14|3966|optional|r@
1.4.14|lang/german_sie.php|1.4.14|3966|optional|r@
1.4.14|lang/greek.php|1.4.14|3966|optional|r@
1.4.14|lang/hebrew.php|1.4.14|3966|optional|r@
1.4.14|lang/hindi.php|1.4.14|3125|optional|r@
1.4.14|lang/hungarian.php|1.4.14|3966|optional|r@
1.4.14|lang/indonesian.php|1.4.14|3125|optional|r@
1.4.14|lang/italian.php|1.4.14|3966|optional|r@
1.4.14|lang/japanese.php|1.4.14|3966|optional|r@
1.4.14|lang/korean.php|1.4.14|3966|optional|r@
1.4.14|lang/lithuanian.php|1.4.14|3275|optional|r@
1.4.14|lang/macedonian.php|1.4.14|3660|optional|r@
1.4.14|lang/norwegian.php|1.4.14|3966|optional|r@
1.4.14|lang/persian.php|1.4.14|3966|optional|r@
1.4.14|lang/polish.php|1.4.14|3966|optional|r@
1.4.14|lang/portuguese.php|1.4.14|3966|optional|r@
1.4.14|lang/romanian.php|1.4.14|3654|optional|r@
1.4.14|lang/russian.php|1.4.14|3966|optional|r@
1.4.14|lang/slovak.php|1.4.14|3966|optional|r@
1.4.14|lang/slovenian.php|1.4.14|3966|optional|r@
1.4.14|lang/spanish.php|1.4.14|3966|optional|r@
1.4.14|lang/swedish.php|1.4.14|3966|optional|r@
1.4.14|lang/thai.php|1.4.14|3125|optional|r@
1.4.14|lang/turkish.php|1.4.14|3966|optional|r@
1.4.14|lang/ukrainian.php|1.4.14|3966|optional|r@
1.4.14|lang/vietnamese.php|1.4.14|3275|optional|r@
1.4.14|logs|||mandatory|w@
1.4.14|logs/log_header.inc.php|1.4.14|3966|mandatory|r@
1.4.14|plugins|||optional|r@
1.4.14|plugins/sample|||optional|r@
1.4.14|plugins/sample/codebase.php|1.4.14|3966|optional|r@
1.4.14|plugins/sample/configuration.php|1.4.14|3966|optional|r@
1.4.14|sql|||mandatory|r@
1.4.14|sql/basic.sql|1.4.14|3966|mandatory|r@
1.4.14|sql/schema.sql|1.4.14|3966|mandatory|r@
1.4.14|sql/update.sql|1.4.14|3966|mandatory|r@
1.4.14|themes|||mandatory|r@
1.4.14|themes/classic|||optional|r@
1.4.14|themes/classic/style.css|1.4.14|3966|optional|r@
1.4.14|themes/classic/template.html||3966|optional|r@
1.4.14|themes/classic/theme.php|1.4.14|3966|optional|r@
1.4.14|themes/classic/images|||optional|r@
1.4.14|themes/eyeball|||optional|r@
1.4.14|themes/eyeball/style.css|1.4.14|3966|optional|r@
1.4.14|themes/eyeball/template.html||3966|optional|r@
1.4.14|themes/eyeball/theme.php|1.4.14|3966|optional|r@
1.4.14|themes/eyeball/images|||optional|r@
1.4.14|themes/fruity|||optional|r@
1.4.14|themes/fruity/style.css|1.4.14|3966|optional|r@
1.4.14|themes/fruity/template.html||3966|optional|r@
1.4.14|themes/fruity/theme.php|1.4.14|3966|optional|r@
1.4.14|themes/fruity/images|||optional|r@
1.4.14|themes/hardwired|||optional|r@
1.4.14|themes/hardwired/style.css|1.4.14|3966|optional|r@
1.4.14|themes/hardwired/template.html||3966|optional|r@
1.4.14|themes/hardwired/theme.php|1.4.14|3966|optional|r@
1.4.14|themes/hardwired/images|||optional|r@
1.4.14|themes/igames|||optional|r@
1.4.14|themes/igames/style.css|1.4.14|3966|optional|r@
1.4.14|themes/igames/template.html||3966|optional|r@
1.4.14|themes/igames/theme.php|1.4.14|3966|optional|r@
1.4.14|themes/igames/images|||optional|r@
1.4.14|themes/mac_ox_x|||optional|r@
1.4.14|themes/mac_ox_x/style.css|1.4.14|3966|optional|r@
1.4.14|themes/mac_ox_x/template.html||3966|optional|r@
1.4.14|themes/mac_ox_x/theme.php|1.4.14|3966|optional|r@
1.4.14|themes/mac_ox_x/images|||optional|r@
1.4.14|themes/project_vii|||optional|r@
1.4.14|themes/project_vii/style.css|1.4.14|3966|optional|r@
1.4.14|themes/project_vii/template.html||3966|optional|r@
1.4.14|themes/project_vii/theme.php|1.4.14|3966|optional|r@
1.4.14|themes/project_vii/images|||optional|r@
1.4.14|themes/rainy_day|||optional|r@
1.4.14|themes/rainy_day/style.css|1.4.14|3966|optional|r@
1.4.14|themes/rainy_day/template.html||3966|optional|r@
1.4.14|themes/rainy_day/theme.php|1.4.14|3966|optional|r@
1.4.14|themes/rainy_day/images|||optional|r@
1.4.14|themes/sample|||optional|r@
1.4.14|themes/sample/style.css|1.4.14|3966|optional|r@
1.4.14|themes/sample/template.html||3966|optional|r@
1.4.14|themes/sample/theme.php|1.4.14|3966|optional|r@
1.4.14|themes/sample/images|||optional|r@
1.4.14|themes/water_drop|||optional|r@
1.4.14|themes/water_drop/style.css|1.4.14|3966|optional|r@
1.4.14|themes/water_drop/template.html||3966|optional|r@
1.4.14|themes/water_drop/theme.php|1.4.14|3966|optional|r@
1.4.14|themes/water_drop/images|||optional|r@
1.4.15|addfav.php|1.4.15|4223|mandatory|r@
1.4.15|addpic.php|1.4.15|4223|mandatory|r@
1.4.15|admin.php|1.4.15|4223|mandatory|r@
1.4.15|albmgr.php|1.4.15|4223|mandatory|r@
1.4.15|anycontent.php|1.4.15|4223|mandatory|r@
1.4.15|banning.php|1.4.15|4223|mandatory|r@
1.4.15|bridgemgr.php|1.4.15|4223|mandatory|r@
1.4.15|calendar.php|1.4.15|4223|mandatory|r@
1.4.15|catmgr.php|1.4.15|4223|mandatory|r@
1.4.15|charsetmgr.php|1.4.15|4223|mandatory|r@
1.4.15|config.php|1.4.15|4223|optional|r@
1.4.15|db_ecard.php|1.4.15|4223|mandatory|r@
1.4.15|db_input.php|1.4.15|4223|mandatory|r@
1.4.15|delete.php|1.4.15|4223|mandatory|r@
1.4.15|displayecard.php|1.4.15|4223|mandatory|r@
1.4.15|displayimage.php|1.4.15|4223|mandatory|r@
1.4.15|displayreport.php|1.4.15|4223|mandatory|r@
1.4.15|ecard.php|1.4.15|4223|mandatory|r@
1.4.15|editOnePic.php|1.4.15|4223|mandatory|r@
1.4.15|editpics.php|1.4.15|4223|mandatory|r@
1.4.15|exifmgr.php|1.4.15|4223|mandatory|r@
1.4.15|faq.php|1.4.15|4223|mandatory|r@
1.4.15|forgot_passwd.php|1.4.15|4223|mandatory|r@
1.4.15|getlang.php|1.4.15|4223|mandatory|r@
1.4.15|groupmgr.php|1.4.15|4223|mandatory|r@
1.4.15|image_processor.php|1.4.15|4223|mandatory|r@
1.4.15|index.php|1.4.15|4223|mandatory|r@
1.4.15|install.php|1.4.15|4223|mandatory|r@
1.4.15|installer.css|1.4.15|4223|mandatory|r@
1.4.15|keyword_create_dict.php|1.4.15|4223|mandatory|r@
1.4.15|keyword_select.php|1.4.15|4223|mandatory|r@
1.4.15|keywordmgr.php|1.4.15|4223|mandatory|r@
1.4.15|login.php|1.4.15|4223|mandatory|r@
1.4.15|logout.php|1.4.15|4223|mandatory|r@
1.4.15|minibrowser.php|1.4.15|4223|mandatory|r@
1.4.15|mode.php|1.4.15|4223|mandatory|r@
1.4.15|modifyalb.php|1.4.15|4223|mandatory|r@
1.4.15|phpinfo.php|1.4.15|4223|mandatory|r@
1.4.15|picEditor.php|1.4.15|4223|mandatory|r@
1.4.15|picmgr.php|1.4.15|4223|mandatory|r@
1.4.15|pluginmgr.php|1.4.15|4223|mandatory|r@
1.4.15|profile.php|1.4.15|4223|mandatory|r@
1.4.15|ratepic.php|1.4.15|4223|mandatory|r@
1.4.15|register.php|1.4.15|4223|mandatory|r@
1.4.15|relocate_server.php|1.4.15|4223|optional|r@
1.4.15|report_file.php|1.4.15|4223|mandatory|r@
1.4.15|reviewcom.php|1.4.15|4223|mandatory|r@
1.4.15|scripts.js|1.4.15|4223|mandatory|r@
1.4.15|search.php|1.4.15|4223|mandatory|r@
1.4.15|searchnew.php|1.4.15|4223|mandatory|r@
1.4.15|showthumb.php|1.4.15|4223|mandatory|r@
1.4.15|stat_details.php|1.4.15|4223|mandatory|r@
1.4.15|thumbnails.php|1.4.15|4223|mandatory|r@
1.4.15|update.php|1.4.15|4223|mandatory|r@
1.4.15|upgrade-1.0-to-1.2.php|1.4.15|4223|mandatory|r@
1.4.15|upload.php|1.4.15|4223|mandatory|r@
1.4.15|usermgr.php|1.4.15|4223|mandatory|r@
1.4.15|util.php|1.4.15|4223|mandatory|r@
1.4.15|versioncheck.php|1.4.15|4229|mandatory|r@
1.4.15|viewlog.php|1.4.15|4223|mandatory|r@
1.4.15|xp_publish.php|1.4.15|4223|mandatory|r@
1.4.15|zipdownload.php|1.4.15|4223|mandatory|r@
1.4.15|**fullpath**|||mandatory|w@
1.4.15|**fullpath**/index.php|||optional|w@
1.4.15|**fullpath**/edit/index.html|||optional|w@
1.4.15|**fullpath**/edit/no_FTP-uploads_into_this_folder!|||optional|w@
1.4.15|**fullpath**/edit|||mandatory|w@
1.4.15|**fullpath**/edit/index.html|||optional|w@
1.4.15|**fullpath**/**userpics**|||mandatory|w@
1.4.15|**fullpath**/**userpics**/index.php|||optional|w@
1.4.15|**fullpath**/**userpics**/no_FTP-uploads_into_this_folder!|||optional|w@
1.4.15|bridge|||mandatory|r@
1.4.15|bridge/coppermine.inc.php|1.4.15|4223|mandatory|r@
1.4.15|bridge/invisionboard20.inc.php|1.4.15|4223|optional|r@
1.4.15|bridge/mambo.inc.php|1.4.15|4223|optional|r@
1.4.15|bridge/mybb.inc.php|1.4.15|4223|optional|r@
1.4.15|bridge/phorum.inc.php|1.4.15|4223|optional|r@
1.4.15|bridge/phpbb.inc.php|1.4.15|4223|optional|r@
1.4.15|bridge/phpbb2018.inc.php|1.4.15|4223|optional|r@
1.4.15|bridge/phpbb22.inc.php|1.4.15|4223|optional|r@
1.4.15|bridge/punbb115.inc.php|1.4.15|4223|optional|r@
1.4.15|bridge/punbb12.inc.php|1.4.15|4223|optional|r@
1.4.15|bridge/smf10.inc.php|1.4.15|4223|optional|r@
1.4.15|bridge/smf20.inc.php|1.4.15|4223|optional|r@
1.4.15|bridge/udb_base.inc.php|1.4.15|4223|mandatory|r@
1.4.15|bridge/vbulletin30.inc.php|1.4.15|4223|optional|r@
1.4.15|bridge/xmb.inc.php|1.4.15|4223|optional|r@
1.4.15|bridge/xoops.inc.php|1.4.15|4223|optional|r@
1.4.15|docs|||mandatory|r@
1.4.15|docs/faq.htm|||optional|r@
1.4.15|docs/faq_de.htm|||optional|r@
1.4.15|docs/faq_fr.htm|||optional|r@
1.4.15|docs/index.htm|1.4.15|4227|mandatory|r@
1.4.15|docs/index_fr.htm||4223|mandatory|r@
1.4.15|docs/README.html||4223|optional|r@
1.4.15|docs/showdoc.php|1.4.15|4223|mandatory|r@
1.4.15|docs/style.css|1.4.15|4223|mandatory|r@
1.4.15|docs/theme.htm|||optional|r@
1.4.15|docs/translation.htm|||optional|r@
1.4.15|docs/pics|||mandatory|r@
1.4.15|docs/theme|||optional|r@
1.4.15|docs/theme/edit_style.html|||optional|r@
1.4.15|docs/theme/edit_template.html|||optional|r@
1.4.15|docs/theme/edit_theme.html|1.4.15||optional|r@
1.4.15|docs/theme/index.html|||optional|r@
1.4.15|docs/theme/style.css|1.4.15|4223|optional|r@
1.4.15|docs/theme/validation.html|||optional|r@
1.4.15|include|||mandatory|w@
1.4.15|include/archive.php|1.4.15|4223|mandatory|r@
1.4.15|include/config.inc.php|||mandatory|r@
1.4.15|include/config.inc.php.sample|||optional|r@
1.4.15|include/crop.inc.php|1.4.15|4223|mandatory|r@
1.4.15|include/debugger.inc.php|1.4.15|4223|mandatory|r@
1.4.15|include/exif.php|1.4.15|4223|mandatory|r@
1.4.15|include/exif_php.inc.php|1.4.15|4223|mandatory|r@
1.4.15|include/functions.inc.php|1.4.15|4223|mandatory|r@
1.4.15|include/imageObjectGD.class.php|1.4.15|4223|mandatory|r@
1.4.15|include/imageObjectIM.class.php|1.4.15|4223|mandatory|r@
1.4.15|include/index.html|1.4.15|4223|mandatory|r@
1.4.15|include/init.inc.php|1.4.15|4227|mandatory|r@
1.4.15|include/iptc.inc.php|1.4.15|4223|mandatory|r@
1.4.15|include/keyword.inc.php|1.4.15|4223|mandatory|r@
1.4.15|include/langfallback.inc.php|1.4.15|4223|mandatory|r@
1.4.15|include/logger.inc.php|1.4.15|4223|mandatory|r@
1.4.15|include/mailer.inc.php|1.4.15|4223|mandatory|r@
1.4.15|include/mb.inc.php|1.4.15|4223|mandatory|r@
1.4.15|include/media.functions.inc.php|1.4.15|4223|mandatory|r@
1.4.15|include/phpmailer.lang-en.php|1.4.15|4223|mandatory|r@
1.4.15|include/picmgmt.inc.php|1.4.15|4223|mandatory|r@
1.4.15|include/plugin_api.inc.php|1.4.15|4223|mandatory|r@
1.4.15|include/search.inc.php|1.4.15|4223|mandatory|r@
1.4.15|include/select_lang.inc.php|1.4.15|4223|mandatory|r@
1.4.15|include/slideshow.inc.php|1.4.15|4223|mandatory|r@
1.4.15|include/smilies.inc.php|1.4.15|4223|mandatory|r@
1.4.15|include/smtp.inc.php|1.4.15|4223|mandatory|r@
1.4.15|include/sql_parse.php|1.4.15|4223|mandatory|r@
1.4.15|include/themes.inc.php|1.4.15|4223|mandatory|r@
1.4.15|include/update.inc.php|1.4.15|4223|mandatory|r@
1.4.15|include/zip.lib.php|1.4.15|4223|mandatory|r@
1.4.15|include/makers|||mandatory|w@
1.4.15|include/makers/canon.php|1.4.15|4223|mandatory|r@
1.4.15|include/makers/fujifilm.php|1.4.15|4223|mandatory|r@
1.4.15|include/makers/gps.php|1.4.15|4223|mandatory|r@
1.4.15|include/makers/nikon.php|1.4.15|4223|mandatory|r@
1.4.15|include/makers/olympus.php|1.4.15|4223|mandatory|r@
1.4.15|include/makers/sanyo.php|1.4.15|4223|mandatory|r@
1.4.15|lang|||mandatory|r@
1.4.15|lang/albanian.php|1.4.15|4223|optional|r@
1.4.15|lang/arabic.php|1.4.15|4223|optional|r@
1.4.15|lang/basque.php|1.4.15|4223|optional|r@
1.4.15|lang/brazilian_portuguese.php|1.4.15|4223|optional|r@
1.4.15|lang/bulgarian.php|1.4.15|4223|optional|r@
1.4.15|lang/catalan.php|1.4.15|4223|optional|r@
1.4.15|lang/chinese_big5.php|1.4.15|4223|optional|r@
1.4.15|lang/chinese_gb.php|1.4.15|4223|optional|r@
1.4.15|lang/czech.php|1.4.15|4223|optional|r@
1.4.15|lang/danish.php|1.4.15|4222|optional|r@
1.4.15|lang/dutch.php|1.4.15|4223|optional|r@
1.4.15|lang/english.php|1.4.15|4223|mandatory|r@
1.4.15|lang/english_gb.php|1.4.15|4223|optional|r@
1.4.15|lang/estonian.php|1.4.15|4223|optional|r@
1.4.15|lang/finnish.php|1.4.15|4223|optional|r@
1.4.15|lang/french.php|1.4.15|4223|optional|r@
1.4.15|lang/galician.php|1.4.15|4223|optional|r@
1.4.15|lang/georgian.php|1.4.15|4223|optional|r@
1.4.15|lang/german.php|1.4.15|4223|optional|r@
1.4.15|lang/german_sie.php|1.4.15|4223|optional|r@
1.4.15|lang/greek.php|1.4.15|4223|optional|r@
1.4.15|lang/hebrew.php|1.4.15|4223|optional|r@
1.4.15|lang/hindi.php|1.4.15|4223|optional|r@
1.4.15|lang/hungarian.php|1.4.15|4223|optional|r@
1.4.15|lang/indonesian.php|1.4.15|4223|optional|r@
1.4.15|lang/italian.php|1.4.15|4223|optional|r@
1.4.15|lang/japanese.php|1.4.15|4223|optional|r@
1.4.15|lang/korean.php|1.4.15|4223|optional|r@
1.4.15|lang/lithuanian.php|1.4.15|4223|optional|r@
1.4.15|lang/macedonian.php|1.4.15|4223|optional|r@
1.4.15|lang/norwegian.php|1.4.15|4223|optional|r@
1.4.15|lang/persian.php|1.4.15|4223|optional|r@
1.4.15|lang/polish.php|1.4.15|4223|optional|r@
1.4.15|lang/portuguese.php|1.4.15|4223|optional|r@
1.4.15|lang/romanian.php|1.4.15|4223|optional|r@
1.4.15|lang/russian.php|1.4.15|4223|optional|r@
1.4.15|lang/serbian.php|1.4.15|4223|optional|r@
1.4.15|lang/serbian_cy.php|1.4.15|3966|optional|r@
1.4.15|lang/slovak.php|1.4.15|4223|optional|r@
1.4.15|lang/slovenian.php|1.4.15|4223|optional|r@
1.4.15|lang/spanish.php|1.4.15|4223|optional|r@
1.4.15|lang/swedish.php|1.4.15|4223|optional|r@
1.4.15|lang/thai.php|1.4.15|4223|optional|r@
1.4.15|lang/turkish.php|1.4.15|4223|optional|r@
1.4.15|lang/ukrainian.php|1.4.15|4223|optional|r@
1.4.15|lang/vietnamese.php|1.4.15|4223|optional|r@
1.4.15|logs|||mandatory|w@
1.4.15|logs/log_header.inc.php|1.4.15|4223|mandatory|r@
1.4.15|plugins|||optional|r@
1.4.15|plugins/sample|||optional|r@
1.4.15|plugins/sample/codebase.php|1.4.15|4223|optional|r@
1.4.15|plugins/sample/configuration.php|1.4.15|4223|optional|r@
1.4.15|sql|||mandatory|r@
1.4.15|sql/basic.sql|1.4.15|4223|mandatory|r@
1.4.15|sql/schema.sql|1.4.15|4223|mandatory|r@
1.4.15|sql/update.sql|1.4.15|4223|mandatory|r@
1.4.15|themes|||mandatory|r@
1.4.15|themes/classic|||optional|r@
1.4.15|themes/classic/style.css|1.4.15|4223|optional|r@
1.4.15|themes/classic/template.html||4223|optional|r@
1.4.15|themes/classic/theme.php|1.4.15|4223|optional|r@
1.4.15|themes/classic/images|||optional|r@
1.4.15|themes/eyeball|||optional|r@
1.4.15|themes/eyeball/style.css|1.4.15|4223|optional|r@
1.4.15|themes/eyeball/template.html||4223|optional|r@
1.4.15|themes/eyeball/theme.php|1.4.15|4223|optional|r@
1.4.15|themes/eyeball/images|||optional|r@
1.4.15|themes/fruity|||optional|r@
1.4.15|themes/fruity/style.css|1.4.15|4223|optional|r@
1.4.15|themes/fruity/template.html||4223|optional|r@
1.4.15|themes/fruity/theme.php|1.4.15|4223|optional|r@
1.4.15|themes/fruity/images|||optional|r@
1.4.15|themes/hardwired|||optional|r@
1.4.15|themes/hardwired/style.css|1.4.15|4223|optional|r@
1.4.15|themes/hardwired/template.html||4223|optional|r@
1.4.15|themes/hardwired/theme.php|1.4.15|4223|optional|r@
1.4.15|themes/hardwired/images|||optional|r@
1.4.15|themes/igames|||optional|r@
1.4.15|themes/igames/style.css|1.4.15|4223|optional|r@
1.4.15|themes/igames/template.html||4223|optional|r@
1.4.15|themes/igames/theme.php|1.4.15|4223|optional|r@
1.4.15|themes/igames/images|||optional|r@
1.4.15|themes/mac_ox_x|||optional|r@
1.4.15|themes/mac_ox_x/style.css|1.4.15|4223|optional|r@
1.4.15|themes/mac_ox_x/template.html||4223|optional|r@
1.4.15|themes/mac_ox_x/theme.php|1.4.15|4223|optional|r@
1.4.15|themes/mac_ox_x/images|||optional|r@
1.4.15|themes/project_vii|||optional|r@
1.4.15|themes/project_vii/style.css|1.4.15|4223|optional|r@
1.4.15|themes/project_vii/template.html||4223|optional|r@
1.4.15|themes/project_vii/theme.php|1.4.15|4223|optional|r@
1.4.15|themes/project_vii/images|||optional|r@
1.4.15|themes/rainy_day|||optional|r@
1.4.15|themes/rainy_day/style.css|1.4.15|4223|optional|r@
1.4.15|themes/rainy_day/template.html||4223|optional|r@
1.4.15|themes/rainy_day/theme.php|1.4.15|4223|optional|r@
1.4.15|themes/rainy_day/images|||optional|r@
1.4.15|themes/sample|||optional|r@
1.4.15|themes/sample/style.css|1.4.15|4223|optional|r@
1.4.15|themes/sample/template.html||4223|optional|r@
1.4.15|themes/sample/theme.php|1.4.15|4223|optional|r@
1.4.15|themes/sample/images|||optional|r@
1.4.15|themes/water_drop|||optional|r@
1.4.15|themes/water_drop/style.css|1.4.15|4223|optional|r@
1.4.15|themes/water_drop/template.html||4223|optional|r@
1.4.15|themes/water_drop/theme.php|1.4.15|4223|optional|r@
1.4.15|themes/water_drop/images|||optional|r@
1.4.16|addfav.php|1.4.16|4233|mandatory|r@
1.4.16|addpic.php|1.4.16|4233|mandatory|r@
1.4.16|admin.php|1.4.16|4233|mandatory|r@
1.4.16|albmgr.php|1.4.16|4233|mandatory|r@
1.4.16|anycontent.php|1.4.16|4233|mandatory|r@
1.4.16|banning.php|1.4.16|4233|mandatory|r@
1.4.16|bridgemgr.php|1.4.16|4233|mandatory|r@
1.4.16|calendar.php|1.4.16|4233|mandatory|r@
1.4.16|catmgr.php|1.4.16|4233|mandatory|r@
1.4.16|charsetmgr.php|1.4.16|4233|mandatory|r@
1.4.16|config.php|1.4.16|4233|optional|r@
1.4.16|db_ecard.php|1.4.16|4233|mandatory|r@
1.4.16|db_input.php|1.4.16|4233|mandatory|r@
1.4.16|delete.php|1.4.16|4233|mandatory|r@
1.4.16|displayecard.php|1.4.16|4233|mandatory|r@
1.4.16|displayimage.php|1.4.16|4233|mandatory|r@
1.4.16|displayreport.php|1.4.16|4233|mandatory|r@
1.4.16|ecard.php|1.4.16|4233|mandatory|r@
1.4.16|editOnePic.php|1.4.16|4233|mandatory|r@
1.4.16|editpics.php|1.4.16|4233|mandatory|r@
1.4.16|exifmgr.php|1.4.16|4233|mandatory|r@
1.4.16|faq.php|1.4.16|4233|mandatory|r@
1.4.16|forgot_passwd.php|1.4.16|4233|mandatory|r@
1.4.16|getlang.php|1.4.16|4233|mandatory|r@
1.4.16|groupmgr.php|1.4.16|4233|mandatory|r@
1.4.16|image_processor.php|1.4.16|4233|mandatory|r@
1.4.16|index.php|1.4.16|4233|mandatory|r@
1.4.16|install.php|1.4.16|4233|mandatory|r@
1.4.16|installer.css|1.4.16|4233|mandatory|r@
1.4.16|keyword_create_dict.php|1.4.16|4233|mandatory|r@
1.4.16|keyword_select.php|1.4.16|4233|mandatory|r@
1.4.16|keywordmgr.php|1.4.16|4233|mandatory|r@
1.4.16|login.php|1.4.16|4233|mandatory|r@
1.4.16|logout.php|1.4.16|4233|mandatory|r@
1.4.16|minibrowser.php|1.4.16|4233|mandatory|r@
1.4.16|mode.php|1.4.16|4233|mandatory|r@
1.4.16|modifyalb.php|1.4.16|4233|mandatory|r@
1.4.16|phpinfo.php|1.4.16|4233|mandatory|r@
1.4.16|picEditor.php|1.4.16|4233|mandatory|r@
1.4.16|picmgr.php|1.4.16|4233|mandatory|r@
1.4.16|pluginmgr.php|1.4.16|4233|mandatory|r@
1.4.16|profile.php|1.4.16|4233|mandatory|r@
1.4.16|ratepic.php|1.4.16|4233|mandatory|r@
1.4.16|register.php|1.4.16|4233|mandatory|r@
1.4.16|relocate_server.php|1.4.16|4233|optional|r@
1.4.16|report_file.php|1.4.16|4233|mandatory|r@
1.4.16|reviewcom.php|1.4.16|4233|mandatory|r@
1.4.16|scripts.js|1.4.16|4233|mandatory|r@
1.4.16|search.php|1.4.16|4233|mandatory|r@
1.4.16|searchnew.php|1.4.16|4233|mandatory|r@
1.4.16|showthumb.php|1.4.16|4233|mandatory|r@
1.4.16|stat_details.php|1.4.16|4233|mandatory|r@
1.4.16|thumbnails.php|1.4.16|4233|mandatory|r@
1.4.16|update.php|1.4.16|4233|mandatory|r@
1.4.16|upgrade-1.0-to-1.2.php|1.4.16|4233|mandatory|r@
1.4.16|upload.php|1.4.16|4233|mandatory|r@
1.4.16|usermgr.php|1.4.16|4233|mandatory|r@
1.4.16|util.php|1.4.16|4233|mandatory|r@
1.4.16|versioncheck.php|1.4.16|4236|mandatory|r@
1.4.16|viewlog.php|1.4.16|4233|mandatory|r@
1.4.16|xp_publish.php|1.4.16|4233|mandatory|r@
1.4.16|zipdownload.php|1.4.16|4233|mandatory|r@
1.4.16|**fullpath**|||mandatory|w@
1.4.16|**fullpath**/index.php|||optional|w@
1.4.16|**fullpath**/edit/index.html|||optional|w@
1.4.16|**fullpath**/edit/no_FTP-uploads_into_this_folder!|||optional|w@
1.4.16|**fullpath**/edit|||mandatory|w@
1.4.16|**fullpath**/edit/index.html|||optional|w@
1.4.16|**fullpath**/**userpics**|||mandatory|w@
1.4.16|**fullpath**/**userpics**/index.php|||optional|w@
1.4.16|**fullpath**/**userpics**/no_FTP-uploads_into_this_folder!|||optional|w@
1.4.16|bridge|||mandatory|r@
1.4.16|bridge/coppermine.inc.php|1.4.16|4233|mandatory|r@
1.4.16|bridge/invisionboard20.inc.php|1.4.16|4233|optional|r@
1.4.16|bridge/mambo.inc.php|1.4.16|4233|optional|r@
1.4.16|bridge/mybb.inc.php|1.4.16|4233|optional|r@
1.4.16|bridge/phorum.inc.php|1.4.16|4233|optional|r@
1.4.16|bridge/phpbb.inc.php|1.4.16|4233|optional|r@
1.4.16|bridge/phpbb2018.inc.php|1.4.16|4233|optional|r@
1.4.16|bridge/phpbb22.inc.php|1.4.16|4233|optional|r@
1.4.16|bridge/punbb115.inc.php|1.4.16|4233|optional|r@
1.4.16|bridge/punbb12.inc.php|1.4.16|4233|optional|r@
1.4.16|bridge/smf10.inc.php|1.4.16|4233|optional|r@
1.4.16|bridge/smf20.inc.php|1.4.16|4233|optional|r@
1.4.16|bridge/udb_base.inc.php|1.4.16|4233|mandatory|r@
1.4.16|bridge/vbulletin30.inc.php|1.4.16|4233|optional|r@
1.4.16|bridge/xmb.inc.php|1.4.16|4233|optional|r@
1.4.16|bridge/xoops.inc.php|1.4.16|4233|optional|r@
1.4.16|docs|||mandatory|r@
1.4.16|docs/faq.htm|||optional|r@
1.4.16|docs/faq_de.htm|||optional|r@
1.4.16|docs/faq_fr.htm|||optional|r@
1.4.16|docs/index.htm|1.4.16|4234|mandatory|r@
1.4.16|docs/index_fr.htm||4233|mandatory|r@
1.4.16|docs/README.html||4233|optional|r@
1.4.16|docs/showdoc.php|1.4.16|4233|mandatory|r@
1.4.16|docs/style.css|1.4.16|4233|mandatory|r@
1.4.16|docs/theme.htm|||optional|r@
1.4.16|docs/translation.htm|||optional|r@
1.4.16|docs/pics|||mandatory|r@
1.4.16|docs/theme|||optional|r@
1.4.16|docs/theme/edit_style.html|||optional|r@
1.4.16|docs/theme/edit_template.html|||optional|r@
1.4.16|docs/theme/edit_theme.html|1.4.16||optional|r@
1.4.16|docs/theme/index.html|||optional|r@
1.4.16|docs/theme/style.css|1.4.16|4233|optional|r@
1.4.16|docs/theme/validation.html|||optional|r@
1.4.16|include|||mandatory|w@
1.4.16|include/archive.php|1.4.16|4233|mandatory|r@
1.4.16|include/config.inc.php|||mandatory|r@
1.4.16|include/config.inc.php.sample|||optional|r@
1.4.16|include/crop.inc.php|1.4.16|4233|mandatory|r@
1.4.16|include/debugger.inc.php|1.4.16|4233|mandatory|r@
1.4.16|include/exif.php|1.4.16|4233|mandatory|r@
1.4.16|include/exif_php.inc.php|1.4.16|4233|mandatory|r@
1.4.16|include/functions.inc.php|1.4.16|4233|mandatory|r@
1.4.16|include/imageObjectGD.class.php|1.4.16|4233|mandatory|r@
1.4.16|include/imageObjectIM.class.php|1.4.16|4233|mandatory|r@
1.4.16|include/index.html|1.4.16|4233|mandatory|r@
1.4.16|include/init.inc.php|1.4.16|4235|mandatory|r@
1.4.16|include/iptc.inc.php|1.4.16|4233|mandatory|r@
1.4.16|include/keyword.inc.php|1.4.16|4233|mandatory|r@
1.4.16|include/langfallback.inc.php|1.4.16|4233|mandatory|r@
1.4.16|include/logger.inc.php|1.4.16|4233|mandatory|r@
1.4.16|include/mailer.inc.php|1.4.16|4233|mandatory|r@
1.4.16|include/mb.inc.php|1.4.16|4233|mandatory|r@
1.4.16|include/media.functions.inc.php|1.4.16|4233|mandatory|r@
1.4.16|include/phpmailer.lang-en.php|1.4.16|4233|mandatory|r@
1.4.16|include/picmgmt.inc.php|1.4.16|4233|mandatory|r@
1.4.16|include/plugin_api.inc.php|1.4.16|4233|mandatory|r@
1.4.16|include/search.inc.php|1.4.16|4233|mandatory|r@
1.4.16|include/select_lang.inc.php|1.4.16|4233|mandatory|r@
1.4.16|include/slideshow.inc.php|1.4.16|4233|mandatory|r@
1.4.16|include/smilies.inc.php|1.4.16|4233|mandatory|r@
1.4.16|include/smtp.inc.php|1.4.16|4233|mandatory|r@
1.4.16|include/sql_parse.php|1.4.16|4233|mandatory|r@
1.4.16|include/themes.inc.php|1.4.16|4233|mandatory|r@
1.4.16|include/update.inc.php|1.4.16|4233|mandatory|r@
1.4.16|include/zip.lib.php|1.4.16|4233|mandatory|r@
1.4.16|include/makers|||mandatory|w@
1.4.16|include/makers/canon.php|1.4.16|4233|mandatory|r@
1.4.16|include/makers/fujifilm.php|1.4.16|4233|mandatory|r@
1.4.16|include/makers/gps.php|1.4.16|4233|mandatory|r@
1.4.16|include/makers/nikon.php|1.4.16|4233|mandatory|r@
1.4.16|include/makers/olympus.php|1.4.16|4233|mandatory|r@
1.4.16|include/makers/sanyo.php|1.4.16|4233|mandatory|r@
1.4.16|lang|||mandatory|r@
1.4.16|lang/albanian.php|1.4.16|4233|optional|r@
1.4.16|lang/arabic.php|1.4.16|4233|optional|r@
1.4.16|lang/basque.php|1.4.16|4233|optional|r@
1.4.16|lang/brazilian_portuguese.php|1.4.16|4233|optional|r@
1.4.16|lang/bulgarian.php|1.4.16|4233|optional|r@
1.4.16|lang/catalan.php|1.4.16|4233|optional|r@
1.4.16|lang/chinese_big5.php|1.4.16|4233|optional|r@
1.4.16|lang/chinese_gb.php|1.4.16|4233|optional|r@
1.4.16|lang/czech.php|1.4.16|4233|optional|r@
1.4.16|lang/danish.php|1.4.16|4233|optional|r@
1.4.16|lang/dutch.php|1.4.16|4233|optional|r@
1.4.16|lang/english.php|1.4.16|4233|mandatory|r@
1.4.16|lang/english_gb.php|1.4.16|4233|optional|r@
1.4.16|lang/estonian.php|1.4.16|4233|optional|r@
1.4.16|lang/finnish.php|1.4.16|4233|optional|r@
1.4.16|lang/french.php|1.4.16|4233|optional|r@
1.4.16|lang/galician.php|1.4.16|4233|optional|r@
1.4.16|lang/georgian.php|1.4.16|4233|optional|r@
1.4.16|lang/german.php|1.4.16|4233|optional|r@
1.4.16|lang/german_sie.php|1.4.16|4233|optional|r@
1.4.16|lang/greek.php|1.4.16|4233|optional|r@
1.4.16|lang/hebrew.php|1.4.16|4233|optional|r@
1.4.16|lang/hindi.php|1.4.16|4233|optional|r@
1.4.16|lang/hungarian.php|1.4.16|4233|optional|r@
1.4.16|lang/indonesian.php|1.4.16|4233|optional|r@
1.4.16|lang/italian.php|1.4.16|4233|optional|r@
1.4.16|lang/japanese.php|1.4.16|4233|optional|r@
1.4.16|lang/korean.php|1.4.16|4233|optional|r@
1.4.16|lang/lithuanian.php|1.4.16|4233|optional|r@
1.4.16|lang/macedonian.php|1.4.16|4233|optional|r@
1.4.16|lang/norwegian.php|1.4.16|4233|optional|r@
1.4.16|lang/persian.php|1.4.16|4233|optional|r@
1.4.16|lang/polish.php|1.4.16|4233|optional|r@
1.4.16|lang/portuguese.php|1.4.16|4233|optional|r@
1.4.16|lang/romanian.php|1.4.16|4233|optional|r@
1.4.16|lang/russian.php|1.4.16|4233|optional|r@
1.4.16|lang/serbian.php|1.4.16|4233|optional|r@
1.4.16|lang/serbian_cy.php|1.4.16|3966|optional|r@
1.4.16|lang/slovak.php|1.4.16|4233|optional|r@
1.4.16|lang/slovenian.php|1.4.16|4233|optional|r@
1.4.16|lang/spanish.php|1.4.16|4233|optional|r@
1.4.16|lang/swedish.php|1.4.16|4233|optional|r@
1.4.16|lang/thai.php|1.4.16|4233|optional|r@
1.4.16|lang/turkish.php|1.4.16|4233|optional|r@
1.4.16|lang/ukrainian.php|1.4.16|4233|optional|r@
1.4.16|lang/vietnamese.php|1.4.16|4233|optional|r@
1.4.16|logs|||mandatory|w@
1.4.16|logs/log_header.inc.php|1.4.16|4233|mandatory|r@
1.4.16|plugins|||optional|r@
1.4.16|plugins/sample|||optional|r@
1.4.16|plugins/sample/codebase.php|1.4.16|4233|optional|r@
1.4.16|plugins/sample/configuration.php|1.4.16|4233|optional|r@
1.4.16|sql|||mandatory|r@
1.4.16|sql/basic.sql|1.4.16|4233|mandatory|r@
1.4.16|sql/schema.sql|1.4.16|4233|mandatory|r@
1.4.16|sql/update.sql|1.4.16|4233|mandatory|r@
1.4.16|themes|||mandatory|r@
1.4.16|themes/classic|||optional|r@
1.4.16|themes/classic/style.css|1.4.16|4233|optional|r@
1.4.16|themes/classic/template.html||4233|optional|r@
1.4.16|themes/classic/theme.php|1.4.16|4233|optional|r@
1.4.16|themes/classic/images|||optional|r@
1.4.16|themes/eyeball|||optional|r@
1.4.16|themes/eyeball/style.css|1.4.16|4233|optional|r@
1.4.16|themes/eyeball/template.html||4233|optional|r@
1.4.16|themes/eyeball/theme.php|1.4.16|4233|optional|r@
1.4.16|themes/eyeball/images|||optional|r@
1.4.16|themes/fruity|||optional|r@
1.4.16|themes/fruity/style.css|1.4.16|4233|optional|r@
1.4.16|themes/fruity/template.html||4233|optional|r@
1.4.16|themes/fruity/theme.php|1.4.16|4233|optional|r@
1.4.16|themes/fruity/images|||optional|r@
1.4.16|themes/hardwired|||optional|r@
1.4.16|themes/hardwired/style.css|1.4.16|4233|optional|r@
1.4.16|themes/hardwired/template.html||4233|optional|r@
1.4.16|themes/hardwired/theme.php|1.4.16|4233|optional|r@
1.4.16|themes/hardwired/images|||optional|r@
1.4.16|themes/igames|||optional|r@
1.4.16|themes/igames/style.css|1.4.16|4233|optional|r@
1.4.16|themes/igames/template.html||4233|optional|r@
1.4.16|themes/igames/theme.php|1.4.16|4233|optional|r@
1.4.16|themes/igames/images|||optional|r@
1.4.16|themes/mac_ox_x|||optional|r@
1.4.16|themes/mac_ox_x/style.css|1.4.16|4233|optional|r@
1.4.16|themes/mac_ox_x/template.html||4233|optional|r@
1.4.16|themes/mac_ox_x/theme.php|1.4.16|4233|optional|r@
1.4.16|themes/mac_ox_x/images|||optional|r@
1.4.16|themes/project_vii|||optional|r@
1.4.16|themes/project_vii/style.css|1.4.16|4233|optional|r@
1.4.16|themes/project_vii/template.html||4233|optional|r@
1.4.16|themes/project_vii/theme.php|1.4.16|4233|optional|r@
1.4.16|themes/project_vii/images|||optional|r@
1.4.16|themes/rainy_day|||optional|r@
1.4.16|themes/rainy_day/style.css|1.4.16|4233|optional|r@
1.4.16|themes/rainy_day/template.html||4233|optional|r@
1.4.16|themes/rainy_day/theme.php|1.4.16|4233|optional|r@
1.4.16|themes/rainy_day/images|||optional|r@
1.4.16|themes/sample|||optional|r@
1.4.16|themes/sample/style.css|1.4.16|4233|optional|r@
1.4.16|themes/sample/template.html||4233|optional|r@
1.4.16|themes/sample/theme.php|1.4.16|4233|optional|r@
1.4.16|themes/sample/images|||optional|r@
1.4.16|themes/water_drop|||optional|r@
1.4.16|themes/water_drop/style.css|1.4.16|4233|optional|r@
1.4.16|themes/water_drop/template.html||4233|optional|r@
1.4.16|themes/water_drop/theme.php|1.4.16|4233|optional|r@
1.4.16|themes/water_drop/images|||optional|r@
1.4.17|addfav.php|1.4.17|4311|mandatory|r@
1.4.17|addpic.php|1.4.17|4311|mandatory|r@
1.4.17|admin.php|1.4.17|4311|mandatory|r@
1.4.17|albmgr.php|1.4.17|4311|mandatory|r@
1.4.17|anycontent.php|1.4.17|4311|mandatory|r@
1.4.17|banning.php|1.4.17|4311|mandatory|r@
1.4.17|bridgemgr.php|1.4.17|4311|mandatory|r@
1.4.17|calendar.php|1.4.17|4311|mandatory|r@
1.4.17|catmgr.php|1.4.17|4311|mandatory|r@
1.4.17|charsetmgr.php|1.4.17|4311|mandatory|r@
1.4.17|config.php|1.4.17|4311|optional|r@
1.4.17|db_ecard.php|1.4.17|4311|mandatory|r@
1.4.17|db_input.php|1.4.17|4311|mandatory|r@
1.4.17|delete.php|1.4.17|4311|mandatory|r@
1.4.17|displayecard.php|1.4.17|4311|mandatory|r@
1.4.17|displayimage.php|1.4.17|4311|mandatory|r@
1.4.17|displayreport.php|1.4.17|4311|mandatory|r@
1.4.17|ecard.php|1.4.17|4311|mandatory|r@
1.4.17|editOnePic.php|1.4.17|4311|mandatory|r@
1.4.17|editpics.php|1.4.17|4311|mandatory|r@
1.4.17|exifmgr.php|1.4.17|4311|mandatory|r@
1.4.17|faq.php|1.4.17|4311|mandatory|r@
1.4.17|forgot_passwd.php|1.4.17|4311|mandatory|r@
1.4.17|getlang.php|1.4.17|4311|mandatory|r@
1.4.17|groupmgr.php|1.4.17|4311|mandatory|r@
1.4.17|image_processor.php|1.4.17|4311|mandatory|r@
1.4.17|index.php|1.4.17|4311|mandatory|r@
1.4.17|install.php|1.4.17|4311|mandatory|r@
1.4.17|installer.css|1.4.17|4311|mandatory|r@
1.4.17|keyword_create_dict.php|1.4.17|4311|mandatory|r@
1.4.17|keyword_select.php|1.4.17|4311|mandatory|r@
1.4.17|keywordmgr.php|1.4.17|4311|mandatory|r@
1.4.17|login.php|1.4.17|4311|mandatory|r@
1.4.17|logout.php|1.4.17|4311|mandatory|r@
1.4.17|minibrowser.php|1.4.17|4311|mandatory|r@
1.4.17|mode.php|1.4.17|4311|mandatory|r@
1.4.17|modifyalb.php|1.4.17|4311|mandatory|r@
1.4.17|phpinfo.php|1.4.17|4311|mandatory|r@
1.4.17|picEditor.php|1.4.17|4311|mandatory|r@
1.4.17|picmgr.php|1.4.17|4311|mandatory|r@
1.4.17|pluginmgr.php|1.4.17|4311|mandatory|r@
1.4.17|profile.php|1.4.17|4311|mandatory|r@
1.4.17|ratepic.php|1.4.17|4311|mandatory|r@
1.4.17|register.php|1.4.17|4311|mandatory|r@
1.4.17|relocate_server.php|1.4.17|4311|optional|r@
1.4.17|report_file.php|1.4.17|4311|mandatory|r@
1.4.17|reviewcom.php|1.4.17|4311|mandatory|r@
1.4.17|scripts.js|1.4.17|4311|mandatory|r@
1.4.17|search.php|1.4.17|4311|mandatory|r@
1.4.17|searchnew.php|1.4.17|4311|mandatory|r@
1.4.17|showthumb.php|1.4.17|4311|mandatory|r@
1.4.17|stat_details.php|1.4.17|4311|mandatory|r@
1.4.17|thumbnails.php|1.4.17|4311|mandatory|r@
1.4.17|update.php|1.4.17|4311|mandatory|r@
1.4.17|upgrade-1.0-to-1.2.php|1.4.17|4311|mandatory|r@
1.4.17|upload.php|1.4.17|4372|mandatory|r@
1.4.17|usermgr.php|1.4.17|4311|mandatory|r@
1.4.17|util.php|1.4.17|4311|mandatory|r@
1.4.17|versioncheck.php|1.4.17|4377|mandatory|r@
1.4.17|viewlog.php|1.4.17|4311|mandatory|r@
1.4.17|xp_publish.php|1.4.17|4311|mandatory|r@
1.4.17|zipdownload.php|1.4.17|4311|mandatory|r@
1.4.17|**fullpath**|||mandatory|w@
1.4.17|**fullpath**/index.php|||optional|w@
1.4.17|**fullpath**/edit/index.html|||optional|w@
1.4.17|**fullpath**/edit/no_FTP-uploads_into_this_folder!|||optional|w@
1.4.17|**fullpath**/edit|||mandatory|w@
1.4.17|**fullpath**/edit/index.html|||optional|w@
1.4.17|**fullpath**/**userpics**|||mandatory|w@
1.4.17|**fullpath**/**userpics**/index.php|||optional|w@
1.4.17|**fullpath**/**userpics**/no_FTP-uploads_into_this_folder!|||optional|w@
1.4.17|bridge|||mandatory|r@
1.4.17|bridge/coppermine.inc.php|1.4.17|4311|mandatory|r@
1.4.17|bridge/invisionboard20.inc.php|1.4.17|4311|optional|r@
1.4.17|bridge/mambo.inc.php|1.4.17|4311|optional|r@
1.4.17|bridge/mybb.inc.php|1.4.17|4311|optional|r@
1.4.17|bridge/phorum.inc.php|1.4.17|4311|optional|r@
1.4.17|bridge/phpbb.inc.php|1.4.17|4311|optional|r@
1.4.17|bridge/phpbb2018.inc.php|1.4.17|4311|optional|r@
1.4.17|bridge/phpbb22.inc.php|1.4.17|4311|optional|r@
1.4.17|bridge/punbb115.inc.php|1.4.17|4311|optional|r@
1.4.17|bridge/punbb12.inc.php|1.4.17|4311|optional|r@
1.4.17|bridge/smf10.inc.php|1.4.17|4311|optional|r@
1.4.17|bridge/smf20.inc.php|1.4.17|4311|optional|r@
1.4.17|bridge/udb_base.inc.php|1.4.17|4311|mandatory|r@
1.4.17|bridge/vbulletin30.inc.php|1.4.17|4311|optional|r@
1.4.17|bridge/xmb.inc.php|1.4.17|4311|optional|r@
1.4.17|bridge/xoops.inc.php|1.4.17|4311|optional|r@
1.4.17|docs|||mandatory|r@
1.4.17|docs/faq.htm|||optional|r@
1.4.17|docs/faq_de.htm|||optional|r@
1.4.17|docs/faq_fr.htm|||optional|r@
1.4.17|docs/index.htm|1.4.17|4375|mandatory|r@
1.4.17|docs/index_fr.htm||4311|mandatory|r@
1.4.17|docs/README.html||4311|optional|r@
1.4.17|docs/showdoc.php|1.4.17|4311|mandatory|r@
1.4.17|docs/style.css|1.4.17|4311|mandatory|r@
1.4.17|docs/theme.htm|||optional|r@
1.4.17|docs/translation.htm|||optional|r@
1.4.17|docs/pics|||mandatory|r@
1.4.17|docs/theme|||optional|r@
1.4.17|docs/theme/edit_style.html|||optional|r@
1.4.17|docs/theme/edit_template.html|||optional|r@
1.4.17|docs/theme/edit_theme.html|1.4.17||optional|r@
1.4.17|docs/theme/index.html|||optional|r@
1.4.17|docs/theme/style.css|1.4.17|4311|optional|r@
1.4.17|docs/theme/validation.html|||optional|r@
1.4.17|include|||mandatory|w@
1.4.17|include/archive.php|1.4.17|4311|mandatory|r@
1.4.17|include/config.inc.php|||mandatory|r@
1.4.17|include/config.inc.php.sample|||optional|r@
1.4.17|include/crop.inc.php|1.4.17|4311|mandatory|r@
1.4.17|include/debugger.inc.php|1.4.17|4311|mandatory|r@
1.4.17|include/exif.php|1.4.17|4311|mandatory|r@
1.4.17|include/exif_php.inc.php|1.4.17|4311|mandatory|r@
1.4.17|include/functions.inc.php|1.4.17|4343|mandatory|r@
1.4.17|include/imageObjectGD.class.php|1.4.17|4311|mandatory|r@
1.4.17|include/imageObjectIM.class.php|1.4.17|4311|mandatory|r@
1.4.17|include/index.html|1.4.17|4311|mandatory|r@
1.4.17|include/init.inc.php|1.4.17|4374|mandatory|r@
1.4.17|include/iptc.inc.php|1.4.17|4311|mandatory|r@
1.4.17|include/keyword.inc.php|1.4.17|4311|mandatory|r@
1.4.17|include/langfallback.inc.php|1.4.17|4311|mandatory|r@
1.4.17|include/logger.inc.php|1.4.17|4311|mandatory|r@
1.4.17|include/mailer.inc.php|1.4.17|4311|mandatory|r@
1.4.17|include/mb.inc.php|1.4.17|4311|mandatory|r@
1.4.17|include/media.functions.inc.php|1.4.17|4311|mandatory|r@
1.4.17|include/phpmailer.lang-en.php|1.4.17|4311|mandatory|r@
1.4.17|include/picmgmt.inc.php|1.4.17|4311|mandatory|r@
1.4.17|include/plugin_api.inc.php|1.4.17|4311|mandatory|r@
1.4.17|include/search.inc.php|1.4.17|4311|mandatory|r@
1.4.17|include/select_lang.inc.php|1.4.17|4340|mandatory|r@
1.4.17|include/slideshow.inc.php|1.4.17|4311|mandatory|r@
1.4.17|include/smilies.inc.php|1.4.17|4311|mandatory|r@
1.4.17|include/smtp.inc.php|1.4.17|4311|mandatory|r@
1.4.17|include/sql_parse.php|1.4.17|4311|mandatory|r@
1.4.17|include/themes.inc.php|1.4.17|4311|mandatory|r@
1.4.17|include/update.inc.php|1.4.17|4311|mandatory|r@
1.4.17|include/zip.lib.php|1.4.17|4311|mandatory|r@
1.4.17|include/makers|||mandatory|w@
1.4.17|include/makers/canon.php|1.4.17|4311|mandatory|r@
1.4.17|include/makers/fujifilm.php|1.4.17|4311|mandatory|r@
1.4.17|include/makers/gps.php|1.4.17|4311|mandatory|r@
1.4.17|include/makers/nikon.php|1.4.17|4311|mandatory|r@
1.4.17|include/makers/olympus.php|1.4.17|4311|mandatory|r@
1.4.17|include/makers/sanyo.php|1.4.17|4311|mandatory|r@
1.4.17|lang|||mandatory|r@
1.4.17|lang/albanian.php|1.4.17|4311|optional|r@
1.4.17|lang/arabic.php|1.4.17|4311|optional|r@
1.4.17|lang/basque.php|1.4.17|4311|optional|r@
1.4.17|lang/brazilian_portuguese.php|1.4.17|4311|optional|r@
1.4.17|lang/bulgarian.php|1.4.17|4311|optional|r@
1.4.17|lang/catalan.php|1.4.17|4311|optional|r@
1.4.17|lang/chinese_big5.php|1.4.17|4311|optional|r@
1.4.17|lang/chinese_gb.php|1.4.17|4311|optional|r@
1.4.17|lang/czech.php|1.4.17|4311|optional|r@
1.4.17|lang/danish.php|1.4.17|4311|optional|r@
1.4.17|lang/dutch.php|1.4.17|4311|optional|r@
1.4.17|lang/english.php|1.4.17|4311|mandatory|r@
1.4.17|lang/english_gb.php|1.4.17|4311|optional|r@
1.4.17|lang/estonian.php|1.4.17|4311|optional|r@
1.4.17|lang/finnish.php|1.4.17|4368|optional|r@
1.4.17|lang/french.php|1.4.17|4311|optional|r@
1.4.17|lang/galician.php|1.4.17|4311|optional|r@
1.4.17|lang/georgian.php|1.4.17|4311|optional|r@
1.4.17|lang/german.php|1.4.17|4311|optional|r@
1.4.17|lang/german_sie.php|1.4.17|4311|optional|r@
1.4.17|lang/greek.php|1.4.17|4311|optional|r@
1.4.17|lang/hebrew.php|1.4.17|4311|optional|r@
1.4.17|lang/hindi.php|1.4.17|4311|optional|r@
1.4.17|lang/hungarian.php|1.4.17|4311|optional|r@
1.4.17|lang/indonesian.php|1.4.17|4311|optional|r@
1.4.17|lang/italian.php|1.4.17|4311|optional|r@
1.4.17|lang/japanese.php|1.4.17|4311|optional|r@
1.4.17|lang/korean.php|1.4.17|4311|optional|r@
1.4.17|lang/lithuanian.php|1.4.17|4311|optional|r@
1.4.17|lang/macedonian.php|1.4.17|4311|optional|r@
1.4.17|lang/norwegian.php|1.4.17|4311|optional|r@
1.4.17|lang/persian.php|1.4.17|4311|optional|r@
1.4.17|lang/polish.php|1.4.17|4311|optional|r@
1.4.17|lang/portuguese.php|1.4.17|4311|optional|r@
1.4.17|lang/romanian.php|1.4.17|4349|optional|r@
1.4.17|lang/russian.php|1.4.17|4311|optional|r@
1.4.17|lang/serbian.php|1.4.17|4311|optional|r@
1.4.17|lang/serbian_cy.php|1.4.17|3966|optional|r@
1.4.17|lang/slovak.php|1.4.17|4311|optional|r@
1.4.17|lang/slovenian.php|1.4.17|4311|optional|r@
1.4.17|lang/spanish.php|1.4.17|4311|optional|r@
1.4.17|lang/swedish.php|1.4.17|4311|optional|r@
1.4.17|lang/thai.php|1.4.17|4311|optional|r@
1.4.17|lang/turkish.php|1.4.17|4311|optional|r@
1.4.17|lang/ukrainian.php|1.4.17|4311|optional|r@
1.4.17|lang/vietnamese.php|1.4.17|4311|optional|r@
1.4.17|logs|||mandatory|w@
1.4.17|logs/log_header.inc.php|1.4.17|4311|mandatory|r@
1.4.17|plugins|||optional|r@
1.4.17|plugins/sample|||optional|r@
1.4.17|plugins/sample/codebase.php|1.4.17|4311|optional|r@
1.4.17|plugins/sample/configuration.php|1.4.17|4311|optional|r@
1.4.17|sql|||mandatory|r@
1.4.17|sql/basic.sql|1.4.17|4311|mandatory|r@
1.4.17|sql/schema.sql|1.4.17|4311|mandatory|r@
1.4.17|sql/update.sql|1.4.17|4311|mandatory|r@
1.4.17|themes|||mandatory|r@
1.4.17|themes/classic|||optional|r@
1.4.17|themes/classic/style.css|1.4.17|4311|optional|r@
1.4.17|themes/classic/template.html|1.4.17|4311|optional|r@
1.4.17|themes/classic/theme.php|1.4.17|4311|optional|r@
1.4.17|themes/classic/images|||optional|r@
1.4.17|themes/eyeball|||optional|r@
1.4.17|themes/eyeball/style.css|1.4.17|4311|optional|r@
1.4.17|themes/eyeball/template.html|1.4.17|4311|optional|r@
1.4.17|themes/eyeball/theme.php|1.4.17|4311|optional|r@
1.4.17|themes/eyeball/images|||optional|r@
1.4.17|themes/fruity|||optional|r@
1.4.17|themes/fruity/style.css|1.4.17|4311|optional|r@
1.4.17|themes/fruity/template.html|1.4.17|4311|optional|r@
1.4.17|themes/fruity/theme.php|1.4.17|4311|optional|r@
1.4.17|themes/fruity/images|||optional|r@
1.4.17|themes/hardwired|||optional|r@
1.4.17|themes/hardwired/style.css|1.4.17|4311|optional|r@
1.4.17|themes/hardwired/template.html|1.4.17|4311|optional|r@
1.4.17|themes/hardwired/theme.php|1.4.17|4311|optional|r@
1.4.17|themes/hardwired/images|||optional|r@
1.4.17|themes/igames|||optional|r@
1.4.17|themes/igames/style.css|1.4.17|4311|optional|r@
1.4.17|themes/igames/template.html|1.4.17|4311|optional|r@
1.4.17|themes/igames/theme.php|1.4.17|4311|optional|r@
1.4.17|themes/igames/images|||optional|r@
1.4.17|themes/mac_ox_x|||optional|r@
1.4.17|themes/mac_ox_x/style.css|1.4.17|4311|optional|r@
1.4.17|themes/mac_ox_x/template.html|1.4.17|4311|optional|r@
1.4.17|themes/mac_ox_x/theme.php|1.4.17|4311|optional|r@
1.4.17|themes/mac_ox_x/images|||optional|r@
1.4.17|themes/project_vii|||optional|r@
1.4.17|themes/project_vii/style.css|1.4.17|4311|optional|r@
1.4.17|themes/project_vii/template.html|1.4.17|4311|optional|r@
1.4.17|themes/project_vii/theme.php|1.4.17|4311|optional|r@
1.4.17|themes/project_vii/images|||optional|r@
1.4.17|themes/rainy_day|||optional|r@
1.4.17|themes/rainy_day/style.css|1.4.17|4311|optional|r@
1.4.17|themes/rainy_day/template.html|1.4.17|4311|optional|r@
1.4.17|themes/rainy_day/theme.php|1.4.17|4311|optional|r@
1.4.17|themes/rainy_day/images|||optional|r@
1.4.17|themes/sample|||optional|r@
1.4.17|themes/sample/style.css|1.4.17|4311|optional|r@
1.4.17|themes/sample/template.html|1.4.17|4311|optional|r@
1.4.17|themes/sample/theme.php|1.4.17|4311|optional|r@
1.4.17|themes/sample/images|||optional|r@
1.4.17|themes/water_drop|||optional|r@
1.4.17|themes/water_drop/style.css|1.4.17|4311|optional|r@
1.4.17|themes/water_drop/template.html|1.4.17|4311|optional|r@
1.4.17|themes/water_drop/theme.php|1.4.17|4311|optional|r@
1.4.17|themes/water_drop/images|||optional|r@
1.4.18|addpic.php|1.4.18|4380|mandatory|r@
1.4.18|admin.php|1.4.18|4380|mandatory|r@
1.4.18|albmgr.php|1.4.18|4380|mandatory|r@
1.4.18|anycontent.php|1.4.18|4380|mandatory|r@
1.4.18|banning.php|1.4.18|4380|mandatory|r@
1.4.18|bridgemgr.php|1.4.18|4380|mandatory|r@
1.4.18|calendar.php|1.4.18|4380|mandatory|r@
1.4.18|catmgr.php|1.4.18|4380|mandatory|r@
1.4.18|charsetmgr.php|1.4.18|4380|mandatory|r@
1.4.18|config.php|1.4.18|4380|optional|r@
1.4.18|db_ecard.php|1.4.18|4380|mandatory|r@
1.4.18|db_input.php|1.4.18|4380|mandatory|r@
1.4.18|delete.php|1.4.18|4380|mandatory|r@
1.4.18|displayecard.php|1.4.18|4380|mandatory|r@
1.4.18|displayimage.php|1.4.18|4380|mandatory|r@
1.4.18|displayreport.php|1.4.18|4380|mandatory|r@
1.4.18|ecard.php|1.4.18|4380|mandatory|r@
1.4.18|editOnePic.php|1.4.18|4380|mandatory|r@
1.4.18|editpics.php|1.4.18|4380|mandatory|r@
1.4.18|exifmgr.php|1.4.18|4380|mandatory|r@
1.4.18|faq.php|1.4.18|4380|mandatory|r@
1.4.18|forgot_passwd.php|1.4.18|4380|mandatory|r@
1.4.18|getlang.php|1.4.18|4380|mandatory|r@
1.4.18|groupmgr.php|1.4.18|4380|mandatory|r@
1.4.18|image_processor.php|1.4.18|4380|mandatory|r@
1.4.18|index.php|1.4.18|4380|mandatory|r@
1.4.18|install.php|1.4.18|4380|mandatory|r@
1.4.18|installer.css|1.4.18|4380|mandatory|r@
1.4.18|keyword_create_dict.php|1.4.18|4380|mandatory|r@
1.4.18|keyword_select.php|1.4.18|4380|mandatory|r@
1.4.18|keywordmgr.php|1.4.18|4380|mandatory|r@
1.4.18|login.php|1.4.18|4380|mandatory|r@
1.4.18|logout.php|1.4.18|4380|mandatory|r@
1.4.18|minibrowser.php|1.4.18|4380|mandatory|r@
1.4.18|mode.php|1.4.18|4380|mandatory|r@
1.4.18|modifyalb.php|1.4.18|4380|mandatory|r@
1.4.18|phpinfo.php|1.4.18|4380|mandatory|r@
1.4.18|picEditor.php|1.4.18|4380|mandatory|r@
1.4.18|picmgr.php|1.4.18|4380|mandatory|r@
1.4.18|pluginmgr.php|1.4.18|4380|mandatory|r@
1.4.18|profile.php|1.4.18|4380|mandatory|r@
1.4.18|ratepic.php|1.4.18|4380|mandatory|r@
1.4.18|register.php|1.4.18|4380|mandatory|r@
1.4.18|relocate_server.php|1.4.18|4380|optional|r@
1.4.18|report_file.php|1.4.18|4380|mandatory|r@
1.4.18|reviewcom.php|1.4.18|4380|mandatory|r@
1.4.18|scripts.js|1.4.18|4380|mandatory|r@
1.4.18|search.php|1.4.18|4380|mandatory|r@
1.4.18|searchnew.php|1.4.18|4380|mandatory|r@
1.4.18|showthumb.php|1.4.18|4380|mandatory|r@
1.4.18|stat_details.php|1.4.18|4380|mandatory|r@
1.4.18|thumbnails.php|1.4.18|4380|mandatory|r@
1.4.18|update.php|1.4.18|4380|mandatory|r@
1.4.18|upgrade-1.0-to-1.2.php|1.4.18|4380|mandatory|r@
1.4.18|upload.php|1.4.18|4380|mandatory|r@
1.4.18|usermgr.php|1.4.18|4380|mandatory|r@
1.4.18|util.php|1.4.18|4380|mandatory|r@
1.4.18|versioncheck.php|1.4.18|4388|mandatory|r@
1.4.18|viewlog.php|1.4.18|4380|mandatory|r@
1.4.18|xp_publish.php|1.4.18|4380|mandatory|r@
1.4.18|zipdownload.php|1.4.18|4380|mandatory|r@
1.4.18|**fullpath**|||mandatory|w@
1.4.18|**fullpath**/index.php|||optional|w@
1.4.18|**fullpath**/edit/index.html|||optional|w@
1.4.18|**fullpath**/edit/no_FTP-uploads_into_this_folder!|||optional|w@
1.4.18|**fullpath**/edit|||mandatory|w@
1.4.18|**fullpath**/edit/index.html|||optional|w@
1.4.18|**fullpath**/**userpics**|||mandatory|w@
1.4.18|**fullpath**/**userpics**/index.php|||optional|w@
1.4.18|**fullpath**/**userpics**/no_FTP-uploads_into_this_folder!|||optional|w@
1.4.18|bridge|||mandatory|r@
1.4.18|bridge/coppermine.inc.php|1.4.18|4381|mandatory|r@
1.4.18|bridge/invisionboard20.inc.php|1.4.18|4380|optional|r@
1.4.18|bridge/mambo.inc.php|1.4.18|4380|optional|r@
1.4.18|bridge/mybb.inc.php|1.4.18|4380|optional|r@
1.4.18|bridge/phorum.inc.php|1.4.18|4380|optional|r@
1.4.18|bridge/phpbb.inc.php|1.4.18|4380|optional|r@
1.4.18|bridge/phpbb2018.inc.php|1.4.18|4380|optional|r@
1.4.18|bridge/phpbb22.inc.php|1.4.18|4380|optional|r@
1.4.18|bridge/punbb115.inc.php|1.4.18|4380|optional|r@
1.4.18|bridge/punbb12.inc.php|1.4.18|4380|optional|r@
1.4.18|bridge/smf10.inc.php|1.4.18|4380|optional|r@
1.4.18|bridge/smf20.inc.php|1.4.18|4380|optional|r@
1.4.18|bridge/udb_base.inc.php|1.4.18|4380|mandatory|r@
1.4.18|bridge/vbulletin30.inc.php|1.4.18|4380|optional|r@
1.4.18|bridge/xmb.inc.php|1.4.18|4380|optional|r@
1.4.18|bridge/xoops.inc.php|1.4.18|4380|optional|r@
1.4.18|docs|||mandatory|r@
1.4.18|docs/faq.htm|||optional|r@
1.4.18|docs/faq_de.htm|||optional|r@
1.4.18|docs/faq_fr.htm|||optional|r@
1.4.18|docs/index.htm|1.4.18|4387|mandatory|r@
1.4.18|docs/index_fr.htm||4380|mandatory|r@
1.4.18|docs/README.html||4380|optional|r@
1.4.18|docs/showdoc.php|1.4.18|4380|mandatory|r@
1.4.18|docs/style.css|1.4.18|4380|mandatory|r@
1.4.18|docs/theme.htm|||optional|r@
1.4.18|docs/translation.htm|||optional|r@
1.4.18|docs/pics|||mandatory|r@
1.4.18|docs/theme|||optional|r@
1.4.18|docs/theme/edit_style.html|||optional|r@
1.4.18|docs/theme/edit_template.html|||optional|r@
1.4.18|docs/theme/edit_theme.html|1.4.18||optional|r@
1.4.18|docs/theme/index.html|||optional|r@
1.4.18|docs/theme/style.css|1.4.18|4380|optional|r@
1.4.18|docs/theme/validation.html|||optional|r@
1.4.18|include|||mandatory|w@
1.4.18|include/archive.php|1.4.18|4380|mandatory|r@
1.4.18|include/config.inc.php|||mandatory|r@
1.4.18|include/config.inc.php.sample|||optional|r@
1.4.18|include/crop.inc.php|1.4.18|4380|mandatory|r@
1.4.18|include/debugger.inc.php|1.4.18|4380|mandatory|r@
1.4.18|include/exif.php|1.4.18|4380|mandatory|r@
1.4.18|include/exif_php.inc.php|1.4.18|4380|mandatory|r@
1.4.18|include/functions.inc.php|1.4.18|4380|mandatory|r@
1.4.18|include/imageObjectGD.class.php|1.4.18|4380|mandatory|r@
1.4.18|include/imageObjectIM.class.php|1.4.18|4380|mandatory|r@
1.4.18|include/index.html|1.4.18|4380|mandatory|r@
1.4.18|include/init.inc.php|1.4.18|4384|mandatory|r@
1.4.18|include/iptc.inc.php|1.4.18|4380|mandatory|r@
1.4.18|include/keyword.inc.php|1.4.18|4380|mandatory|r@
1.4.18|include/langfallback.inc.php|1.4.18|4380|mandatory|r@
1.4.18|include/logger.inc.php|1.4.18|4380|mandatory|r@
1.4.18|include/mailer.inc.php|1.4.18|4380|mandatory|r@
1.4.18|include/mb.inc.php|1.4.18|4380|mandatory|r@
1.4.18|include/media.functions.inc.php|1.4.18|4380|mandatory|r@
1.4.18|include/phpmailer.lang-en.php|1.4.18|4380|mandatory|r@
1.4.18|include/picmgmt.inc.php|1.4.18|4380|mandatory|r@
1.4.18|include/plugin_api.inc.php|1.4.18|4380|mandatory|r@
1.4.18|include/search.inc.php|1.4.18|4380|mandatory|r@
1.4.18|include/select_lang.inc.php|1.4.18|4380|mandatory|r@
1.4.18|include/slideshow.inc.php|1.4.18|4380|mandatory|r@
1.4.18|include/smilies.inc.php|1.4.18|4380|mandatory|r@
1.4.18|include/smtp.inc.php|1.4.18|4380|mandatory|r@
1.4.18|include/sql_parse.php|1.4.18|4380|mandatory|r@
1.4.18|include/themes.inc.php|1.4.18|4380|mandatory|r@
1.4.18|include/update.inc.php|1.4.18|4380|mandatory|r@
1.4.18|include/zip.lib.php|1.4.18|4380|mandatory|r@
1.4.18|include/makers|||mandatory|w@
1.4.18|include/makers/canon.php|1.4.18|4380|mandatory|r@
1.4.18|include/makers/fujifilm.php|1.4.18|4380|mandatory|r@
1.4.18|include/makers/gps.php|1.4.18|4380|mandatory|r@
1.4.18|include/makers/nikon.php|1.4.18|4380|mandatory|r@
1.4.18|include/makers/olympus.php|1.4.18|4380|mandatory|r@
1.4.18|include/makers/sanyo.php|1.4.18|4380|mandatory|r@
1.4.18|lang|||mandatory|r@
1.4.18|lang/albanian.php|1.4.18|4380|optional|r@
1.4.18|lang/arabic.php|1.4.18|4380|optional|r@
1.4.18|lang/basque.php|1.4.18|4380|optional|r@
1.4.18|lang/brazilian_portuguese.php|1.4.18|4380|optional|r@
1.4.18|lang/bulgarian.php|1.4.18|4380|optional|r@
1.4.18|lang/catalan.php|1.4.18|4380|optional|r@
1.4.18|lang/chinese_big5.php|1.4.18|4380|optional|r@
1.4.18|lang/chinese_gb.php|1.4.18|4380|optional|r@
1.4.18|lang/czech.php|1.4.18|4380|optional|r@
1.4.18|lang/danish.php|1.4.18|4380|optional|r@
1.4.18|lang/dutch.php|1.4.18|4380|optional|r@
1.4.18|lang/english.php|1.4.18|4380|mandatory|r@
1.4.18|lang/english_gb.php|1.4.18|4380|optional|r@
1.4.18|lang/estonian.php|1.4.18|4380|optional|r@
1.4.18|lang/finnish.php|1.4.18|4380|optional|r@
1.4.18|lang/french.php|1.4.18|4380|optional|r@
1.4.18|lang/galician.php|1.4.18|4380|optional|r@
1.4.18|lang/georgian.php|1.4.18|4380|optional|r@
1.4.18|lang/german.php|1.4.18|4380|optional|r@
1.4.18|lang/german_sie.php|1.4.18|4380|optional|r@
1.4.18|lang/greek.php|1.4.18|4380|optional|r@
1.4.18|lang/hebrew.php|1.4.18|4380|optional|r@
1.4.18|lang/hindi.php|1.4.18|4380|optional|r@
1.4.18|lang/hungarian.php|1.4.18|4380|optional|r@
1.4.18|lang/indonesian.php|1.4.18|4380|optional|r@
1.4.18|lang/italian.php|1.4.18|4380|optional|r@
1.4.18|lang/japanese.php|1.4.18|4380|optional|r@
1.4.18|lang/korean.php|1.4.18|4380|optional|r@
1.4.18|lang/latvian.php|1.4.18|3966|optional|r@
1.4.18|lang/lithuanian.php|1.4.18|4380|optional|r@
1.4.18|lang/macedonian.php|1.4.18|4380|optional|r@
1.4.18|lang/norwegian.php|1.4.18|4380|optional|r@
1.4.18|lang/persian.php|1.4.18|4380|optional|r@
1.4.18|lang/polish.php|1.4.18|4380|optional|r@
1.4.18|lang/portuguese.php|1.4.18|4380|optional|r@
1.4.18|lang/romanian.php|1.4.18|4380|optional|r@
1.4.18|lang/russian.php|1.4.18|4380|optional|r@
1.4.18|lang/serbian.php|1.4.18|4380|optional|r@
1.4.18|lang/serbian_cy.php|1.4.18|3966|optional|r@
1.4.18|lang/slovak.php|1.4.18|4380|optional|r@
1.4.18|lang/slovenian.php|1.4.18|4380|optional|r@
1.4.18|lang/spanish.php|1.4.18|4380|optional|r@
1.4.18|lang/swedish.php|1.4.18|4380|optional|r@
1.4.18|lang/thai.php|1.4.18|4380|optional|r@
1.4.18|lang/turkish.php|1.4.18|4380|optional|r@
1.4.18|lang/ukrainian.php|1.4.18|4380|optional|r@
1.4.18|lang/vietnamese.php|1.4.18|4380|optional|r@
1.4.18|lang/welsh.php|1.4.18|4380|optional|r@
1.4.18|logs|||mandatory|w@
1.4.18|logs/log_header.inc.php|1.4.18|4380|mandatory|r@
1.4.18|plugins|||optional|r@
1.4.18|plugins/sample|||optional|r@
1.4.18|plugins/sample/codebase.php|1.4.18|4380|optional|r@
1.4.18|plugins/sample/configuration.php|1.4.18|4380|optional|r@
1.4.18|sql|||mandatory|r@
1.4.18|sql/basic.sql|1.4.18|4380|mandatory|r@
1.4.18|sql/schema.sql|1.4.18|4380|mandatory|r@
1.4.18|sql/update.sql|1.4.18|4380|mandatory|r@
1.4.18|themes|||mandatory|r@
1.4.18|themes/classic|||optional|r@
1.4.18|themes/classic/style.css|1.4.18|4380|optional|r@
1.4.18|themes/classic/template.html|1.4.18|4380|optional|r@
1.4.18|themes/classic/theme.php|1.4.18|4380|optional|r@
1.4.18|themes/classic/images|||optional|r@
1.4.18|themes/eyeball|||optional|r@
1.4.18|themes/eyeball/style.css|1.4.18|4380|optional|r@
1.4.18|themes/eyeball/template.html|1.4.18|4380|optional|r@
1.4.18|themes/eyeball/theme.php|1.4.18|4380|optional|r@
1.4.18|themes/eyeball/images|||optional|r@
1.4.18|themes/fruity|||optional|r@
1.4.18|themes/fruity/style.css|1.4.18|4380|optional|r@
1.4.18|themes/fruity/template.html|1.4.18|4380|optional|r@
1.4.18|themes/fruity/theme.php|1.4.18|4380|optional|r@
1.4.18|themes/fruity/images|||optional|r@
1.4.18|themes/hardwired|||optional|r@
1.4.18|themes/hardwired/style.css|1.4.18|4380|optional|r@
1.4.18|themes/hardwired/template.html|1.4.18|4380|optional|r@
1.4.18|themes/hardwired/theme.php|1.4.18|4380|optional|r@
1.4.18|themes/hardwired/images|||optional|r@
1.4.18|themes/igames|||optional|r@
1.4.18|themes/igames/style.css|1.4.18|4380|optional|r@
1.4.18|themes/igames/template.html|1.4.18|4380|optional|r@
1.4.18|themes/igames/theme.php|1.4.18|4380|optional|r@
1.4.18|themes/igames/images|||optional|r@
1.4.18|themes/mac_ox_x|||optional|r@
1.4.18|themes/mac_ox_x/style.css|1.4.18|4380|optional|r@
1.4.18|themes/mac_ox_x/template.html|1.4.18|4380|optional|r@
1.4.18|themes/mac_ox_x/theme.php|1.4.18|4380|optional|r@
1.4.18|themes/mac_ox_x/images|||optional|r@
1.4.18|themes/project_vii|||optional|r@
1.4.18|themes/project_vii/style.css|1.4.18|4380|optional|r@
1.4.18|themes/project_vii/template.html|1.4.18|4380|optional|r@
1.4.18|themes/project_vii/theme.php|1.4.18|4380|optional|r@
1.4.18|themes/project_vii/images|||optional|r@
1.4.18|themes/rainy_day|||optional|r@
1.4.18|themes/rainy_day/style.css|1.4.18|4380|optional|r@
1.4.18|themes/rainy_day/template.html|1.4.18|4380|optional|r@
1.4.18|themes/rainy_day/theme.php|1.4.18|4380|optional|r@
1.4.18|themes/rainy_day/images|||optional|r@
1.4.18|themes/sample|||optional|r@
1.4.18|themes/sample/style.css|1.4.18|4380|optional|r@
1.4.18|themes/sample/template.html|1.4.18|4380|optional|r@
1.4.18|themes/sample/theme.php|1.4.18|4380|optional|r@
1.4.18|themes/sample/images|||optional|r@
1.4.18|themes/water_drop|||optional|r@
1.4.18|themes/water_drop/style.css|1.4.18|4380|optional|r@
1.4.18|themes/water_drop/template.html|1.4.18|4380|optional|r@
1.4.18|themes/water_drop/theme.php|1.4.18|4380|optional|r@
1.4.18|themes/water_drop/images|||optional|r@
1.4.19|addpic.php|1.4.19|4392|mandatory|r@
1.4.19|admin.php|1.4.19|4392|mandatory|r@
1.4.19|albmgr.php|1.4.19|4431|mandatory|r@
1.4.19|anycontent.php|1.4.19|4392|mandatory|r@
1.4.19|banning.php|1.4.19|4392|mandatory|r@
1.4.19|bridgemgr.php|1.4.19|4392|mandatory|r@
1.4.19|calendar.php|1.4.19|4392|mandatory|r@
1.4.19|catmgr.php|1.4.19|4392|mandatory|r@
1.4.19|charsetmgr.php|1.4.19|4392|mandatory|r@
1.4.19|config.php|1.4.19|4392|optional|r@
1.4.19|db_ecard.php|1.4.19|4392|mandatory|r@
1.4.19|db_input.php|1.4.19|4392|mandatory|r@
1.4.19|delete.php|1.4.19|4392|mandatory|r@
1.4.19|displayecard.php|1.4.19|4392|mandatory|r@
1.4.19|displayimage.php|1.4.19|4392|mandatory|r@
1.4.19|displayreport.php|1.4.19|4392|mandatory|r@
1.4.19|ecard.php|1.4.19|4441|mandatory|r@
1.4.19|editOnePic.php|1.4.19|4416|mandatory|r@
1.4.19|editpics.php|1.4.19|4438|mandatory|r@
1.4.19|exifmgr.php|1.4.19|4392|mandatory|r@
1.4.19|faq.php|1.4.19|4392|mandatory|r@
1.4.19|forgot_passwd.php|1.4.19|4392|mandatory|r@
1.4.19|getlang.php|1.4.19|4392|mandatory|r@
1.4.19|groupmgr.php|1.4.19|4419|mandatory|r@
1.4.19|image_processor.php|1.4.19|4392|mandatory|r@
1.4.19|index.php|1.4.19|4392|mandatory|r@
1.4.19|install.php|1.4.19|4392|mandatory|r@
1.4.19|installer.css|1.4.19|4392|mandatory|r@
1.4.19|keyword_create_dict.php|1.4.19|4392|mandatory|r@
1.4.19|keyword_select.php|1.4.19|4392|mandatory|r@
1.4.19|keywordmgr.php|1.4.19|4392|mandatory|r@
1.4.19|login.php|1.4.19|4392|mandatory|r@
1.4.19|logout.php|1.4.19|4392|mandatory|r@
1.4.19|minibrowser.php|1.4.19|4392|mandatory|r@
1.4.19|mode.php|1.4.19|4392|mandatory|r@
1.4.19|modifyalb.php|1.4.19|4445|mandatory|r@
1.4.19|phpinfo.php|1.4.19|4392|mandatory|r@
1.4.19|picEditor.php|1.4.19|4420|mandatory|r@
1.4.19|picmgr.php|1.4.19|4442|mandatory|r@
1.4.19|pluginmgr.php|1.4.19|4392|mandatory|r@
1.4.19|profile.php|1.4.19|4754|mandatory|r@
1.4.19|ratepic.php|1.4.19|4392|mandatory|r@
1.4.19|register.php|1.4.19|4392|mandatory|r@
1.4.19|relocate_server.php|1.4.19|4392|optional|r@
1.4.19|report_file.php|1.4.19|4437|mandatory|r@
1.4.19|reviewcom.php|1.4.19|4421|mandatory|r@
1.4.19|scripts.js|1.4.19|4392|mandatory|r@
1.4.19|search.php|1.4.19|4392|mandatory|r@
1.4.19|searchnew.php|1.4.19|4392|mandatory|r@
1.4.19|showthumb.php|1.4.19|4392|mandatory|r@
1.4.19|stat_details.php|1.4.19|4392|mandatory|r@
1.4.19|thumbnails.php|1.4.19|4392|mandatory|r@
1.4.19|update.php|1.4.19|4392|mandatory|r@
1.4.19|upgrade-1.0-to-1.2.php|1.4.19|4392|mandatory|r@
1.4.19|upload.php|1.4.19|4424|mandatory|r@
1.4.19|usermgr.php|1.4.19|4392|mandatory|r@
1.4.19|util.php|1.4.19|4392|mandatory|r@
1.4.19|versioncheck.php|1.4.19|4766|mandatory|r@
1.4.19|viewlog.php|1.4.19|4392|mandatory|r@
1.4.19|xp_publish.php|1.4.19|4392|mandatory|r@
1.4.19|zipdownload.php|1.4.19|4392|mandatory|r@
1.4.19|**fullpath**|||mandatory|w@
1.4.19|**fullpath**/index.php|||optional|w@
1.4.19|**fullpath**/edit/index.html|||optional|w@
1.4.19|**fullpath**/edit/no_FTP-uploads_into_this_folder!|||optional|w@
1.4.19|**fullpath**/edit|||mandatory|w@
1.4.19|**fullpath**/edit/index.html|||optional|w@
1.4.19|**fullpath**/**userpics**|||mandatory|w@
1.4.19|**fullpath**/**userpics**/index.php|||optional|w@
1.4.19|**fullpath**/**userpics**/no_FTP-uploads_into_this_folder!|||optional|w@
1.4.19|bridge|||mandatory|r@
1.4.19|bridge/coppermine.inc.php|1.4.19|4392|mandatory|r@
1.4.19|bridge/invisionboard20.inc.php|1.4.19|4392|optional|r@
1.4.19|bridge/mambo.inc.php|1.4.19|4392|optional|r@
1.4.19|bridge/mybb.inc.php|1.4.19|4392|optional|r@
1.4.19|bridge/phorum.inc.php|1.4.19|4392|optional|r@
1.4.19|bridge/phpbb.inc.php|1.4.19|4392|optional|r@
1.4.19|bridge/phpbb2018.inc.php|1.4.19|4392|optional|r@
1.4.19|bridge/phpbb22.inc.php|1.4.19|4392|optional|r@
1.4.19|bridge/punbb115.inc.php|1.4.19|4392|optional|r@
1.4.19|bridge/punbb12.inc.php|1.4.19|4392|optional|r@
1.4.19|bridge/smf10.inc.php|1.4.19|4722|optional|r@
1.4.19|bridge/smf20.inc.php|1.4.19|4722|optional|r@
1.4.19|bridge/udb_base.inc.php|1.4.19|4428|mandatory|r@
1.4.19|bridge/vbulletin30.inc.php|1.4.19|4392|optional|r@
1.4.19|bridge/xmb.inc.php|1.4.19|4392|optional|r@
1.4.19|bridge/xoops.inc.php|1.4.19|4392|optional|r@
1.4.19|docs|||mandatory|r@
1.4.19|docs/faq.htm|||optional|r@
1.4.19|docs/faq_de.htm|||optional|r@
1.4.19|docs/faq_fr.htm|||optional|r@
1.4.19|docs/index.htm|1.4.19|4763|mandatory|r@
1.4.19|docs/index_es.htm|1.4.19|4392|mandatory|r@
1.4.19|docs/index_fr.htm||4392|mandatory|r@
1.4.19|docs/README.html||4392|optional|r@
1.4.19|docs/showdoc.php|1.4.19|4392|mandatory|r@
1.4.19|docs/style.css|1.4.19|4392|mandatory|r@
1.4.19|docs/theme.htm|||optional|r@
1.4.19|docs/translation.htm|||optional|r@
1.4.19|docs/pics|||mandatory|r@
1.4.19|docs/theme|||optional|r@
1.4.19|docs/theme/edit_style.html|||optional|r@
1.4.19|docs/theme/edit_template.html|||optional|r@
1.4.19|docs/theme/edit_theme.html|1.4.19||optional|r@
1.4.19|docs/theme/index.html|||optional|r@
1.4.19|docs/theme/style.css|1.4.19|4392|optional|r@
1.4.19|docs/theme/validation.html|||optional|r@
1.4.19|include|||mandatory|w@
1.4.19|include/archive.php|1.4.19|4392|mandatory|r@
1.4.19|include/config.inc.php|||mandatory|r@
1.4.19|include/config.inc.php.sample|||optional|r@
1.4.19|include/crop.inc.php|1.4.19|4392|mandatory|r@
1.4.19|include/debugger.inc.php|1.4.19|4392|mandatory|r@
1.4.19|include/exif.php|1.4.19|4392|mandatory|r@
1.4.19|include/exif_php.inc.php|1.4.19|4392|mandatory|r@
1.4.19|include/functions.inc.php|1.4.19|4753|mandatory|r@
1.4.19|include/imageObjectGD.class.php|1.4.19|4392|mandatory|r@
1.4.19|include/imageObjectIM.class.php|1.4.19|4392|mandatory|r@
1.4.19|include/index.html|1.4.19|4392|mandatory|r@
1.4.19|include/init.inc.php|1.4.19|4396|mandatory|r@
1.4.19|include/iptc.inc.php|1.4.19|4392|mandatory|r@
1.4.19|include/keyword.inc.php|1.4.19|4458|mandatory|r@
1.4.19|include/langfallback.inc.php|1.4.19|4392|mandatory|r@
1.4.19|include/logger.inc.php|1.4.19|4392|mandatory|r@
1.4.19|include/mailer.inc.php|1.4.19|4392|mandatory|r@
1.4.19|include/mb.inc.php|1.4.19|4392|mandatory|r@
1.4.19|include/media.functions.inc.php|1.4.19|4392|mandatory|r@
1.4.19|include/phpmailer.lang-en.php|1.4.19|4392|mandatory|r@
1.4.19|include/picmgmt.inc.php|1.4.19|4392|mandatory|r@
1.4.19|include/plugin_api.inc.php|1.4.19|4392|mandatory|r@
1.4.19|include/search.inc.php|1.4.19|4392|mandatory|r@
1.4.19|include/select_lang.inc.php|1.4.19|4392|mandatory|r@
1.4.19|include/slideshow.inc.php|1.4.19|4449|mandatory|r@
1.4.19|include/smilies.inc.php|1.4.19|4392|mandatory|r@
1.4.19|include/smtp.inc.php|1.4.19|4392|mandatory|r@
1.4.19|include/sql_parse.php|1.4.19|4450|mandatory|r@
1.4.19|include/themes.inc.php|1.4.19|4454|mandatory|r@
1.4.19|include/update.inc.php|1.4.19|4392|mandatory|r@
1.4.19|include/zip.lib.php|1.4.19|4392|mandatory|r@
1.4.19|include/makers|||mandatory|w@
1.4.19|include/makers/canon.php|1.4.19|4392|mandatory|r@
1.4.19|include/makers/fujifilm.php|1.4.19|4392|mandatory|r@
1.4.19|include/makers/gps.php|1.4.19|4392|mandatory|r@
1.4.19|include/makers/nikon.php|1.4.19|4392|mandatory|r@
1.4.19|include/makers/olympus.php|1.4.19|4392|mandatory|r@
1.4.19|include/makers/sanyo.php|1.4.19|4392|mandatory|r@
1.4.19|lang|||mandatory|r@
1.4.19|lang/albanian.php|1.4.19|4392|optional|r@
1.4.19|lang/arabic.php|1.4.19|4392|optional|r@
1.4.19|lang/basque.php|1.4.19|4392|optional|r@
1.4.19|lang/brazilian_portuguese.php|1.4.19|4392|optional|r@
1.4.19|lang/bulgarian.php|1.4.19|4392|optional|r@
1.4.19|lang/catalan.php|1.4.19|4392|optional|r@
1.4.19|lang/chinese_big5.php|1.4.19|4392|optional|r@
1.4.19|lang/chinese_gb.php|1.4.19|4392|optional|r@
1.4.19|lang/czech.php|1.4.19|4392|optional|r@
1.4.19|lang/danish.php|1.4.19|4404|optional|r@
1.4.19|lang/dutch.php|1.4.19|4392|optional|r@
1.4.19|lang/english.php|1.4.19|4392|mandatory|r@
1.4.19|lang/english_gb.php|1.4.19|4392|optional|r@
1.4.19|lang/estonian.php|1.4.19|4392|optional|r@
1.4.19|lang/finnish.php|1.4.19|4392|optional|r@
1.4.19|lang/french.php|1.4.19|4392|optional|r@
1.4.19|lang/galician.php|1.4.19|4392|optional|r@
1.4.19|lang/georgian.php|1.4.19|4392|optional|r@
1.4.19|lang/german.php|1.4.19|4392|optional|r@
1.4.19|lang/german_sie.php|1.4.19|4475|optional|r@
1.4.19|lang/greek.php|1.4.19|4392|optional|r@
1.4.19|lang/hebrew.php|1.4.19|4392|optional|r@
1.4.19|lang/hindi.php|1.4.19|4392|optional|r@
1.4.19|lang/hungarian.php|1.4.19|4392|optional|r@
1.4.19|lang/indonesian.php|1.4.19|4392|optional|r@
1.4.19|lang/italian.php|1.4.19|4392|optional|r@
1.4.19|lang/japanese.php|1.4.19|4392|optional|r@
1.4.19|lang/korean.php|1.4.19|4392|optional|r@
1.4.19|lang/latvian.php|1.4.19|3966|optional|r@
1.4.19|lang/lithuanian.php|1.4.19|4392|optional|r@
1.4.19|lang/macedonian.php|1.4.19|4392|optional|r@
1.4.19|lang/norwegian.php|1.4.19|4392|optional|r@
1.4.19|lang/persian.php|1.4.19|4392|optional|r@
1.4.19|lang/polish.php|1.4.19|4392|optional|r@
1.4.19|lang/portuguese.php|1.4.19|4392|optional|r@
1.4.19|lang/romanian.php|1.4.19|4392|optional|r@
1.4.19|lang/russian.php|1.4.19|4392|optional|r@
1.4.19|lang/serbian.php|1.4.19|4392|optional|r@
1.4.19|lang/serbian_cy.php|1.4.19|3966|optional|r@
1.4.19|lang/slovak.php|1.4.19|4457|optional|r@
1.4.19|lang/slovenian.php|1.4.19|4392|optional|r@
1.4.19|lang/spanish.php|1.4.19|4392|optional|r@
1.4.19|lang/swedish.php|1.4.19|4392|optional|r@
1.4.19|lang/thai.php|1.4.19|4392|optional|r@
1.4.19|lang/turkish.php|1.4.19|4392|optional|r@
1.4.19|lang/ukrainian.php|1.4.19|4392|optional|r@
1.4.19|lang/vietnamese.php|1.4.19|4392|optional|r@
1.4.19|lang/welsh.php|1.4.19|4380|optional|r@
1.4.19|logs|||mandatory|w@
1.4.19|logs/log_header.inc.php|1.4.19|4392|mandatory|r@
1.4.19|plugins|||optional|r@
1.4.19|plugins/sample|||optional|r@
1.4.19|plugins/sample/codebase.php|1.4.19|4392|optional|r@
1.4.19|plugins/sample/configuration.php|1.4.19|4392|optional|r@
1.4.19|sql|||mandatory|r@
1.4.19|sql/basic.sql|1.4.19|4392|mandatory|r@
1.4.19|sql/schema.sql|1.4.19|4392|mandatory|r@
1.4.19|sql/update.sql|1.4.19|4392|mandatory|r@
1.4.19|themes|||mandatory|r@
1.4.19|themes/classic|||optional|r@
1.4.19|themes/classic/style.css|1.4.19|4392|optional|r@
1.4.19|themes/classic/template.html|1.4.19|4392|optional|r@
1.4.19|themes/classic/theme.php|1.4.19|4392|optional|r@
1.4.19|themes/classic/images|||optional|r@
1.4.19|themes/eyeball|||optional|r@
1.4.19|themes/eyeball/style.css|1.4.19|4392|optional|r@
1.4.19|themes/eyeball/template.html|1.4.19|4392|optional|r@
1.4.19|themes/eyeball/theme.php|1.4.19|4392|optional|r@
1.4.19|themes/eyeball/images|||optional|r@
1.4.19|themes/fruity|||optional|r@
1.4.19|themes/fruity/style.css|1.4.19|4392|optional|r@
1.4.19|themes/fruity/template.html|1.4.19|4392|optional|r@
1.4.19|themes/fruity/theme.php|1.4.19|4392|optional|r@
1.4.19|themes/fruity/images|||optional|r@
1.4.19|themes/hardwired|||optional|r@
1.4.19|themes/hardwired/style.css|1.4.19|4392|optional|r@
1.4.19|themes/hardwired/template.html|1.4.19|4392|optional|r@
1.4.19|themes/hardwired/theme.php|1.4.19|4392|optional|r@
1.4.19|themes/hardwired/images|||optional|r@
1.4.19|themes/igames|||optional|r@
1.4.19|themes/igames/style.css|1.4.19|4392|optional|r@
1.4.19|themes/igames/template.html|1.4.19|4392|optional|r@
1.4.19|themes/igames/theme.php|1.4.19|4392|optional|r@
1.4.19|themes/igames/images|||optional|r@
1.4.19|themes/mac_ox_x|||optional|r@
1.4.19|themes/mac_ox_x/style.css|1.4.19|4392|optional|r@
1.4.19|themes/mac_ox_x/template.html|1.4.19|4392|optional|r@
1.4.19|themes/mac_ox_x/theme.php|1.4.19|4392|optional|r@
1.4.19|themes/mac_ox_x/images|||optional|r@
1.4.19|themes/project_vii|||optional|r@
1.4.19|themes/project_vii/style.css|1.4.19|4392|optional|r@
1.4.19|themes/project_vii/template.html|1.4.19|4392|optional|r@
1.4.19|themes/project_vii/theme.php|1.4.19|4392|optional|r@
1.4.19|themes/project_vii/images|||optional|r@
1.4.19|themes/rainy_day|||optional|r@
1.4.19|themes/rainy_day/style.css|1.4.19|4392|optional|r@
1.4.19|themes/rainy_day/template.html|1.4.19|4392|optional|r@
1.4.19|themes/rainy_day/theme.php|1.4.19|4392|optional|r@
1.4.19|themes/rainy_day/images|||optional|r@
1.4.19|themes/sample|||optional|r@
1.4.19|themes/sample/style.css|1.4.19|4392|optional|r@
1.4.19|themes/sample/template.html|1.4.19|4392|optional|r@
1.4.19|themes/sample/theme.php|1.4.19|4455|optional|r@
1.4.19|themes/sample/images|||optional|r@
1.4.19|themes/water_drop|||optional|r@
1.4.19|themes/water_drop/style.css|1.4.19|4392|optional|r@
1.4.19|themes/water_drop/template.html|1.4.19|4392|optional|r@
1.4.19|themes/water_drop/theme.php|1.4.19|4392|optional|r@
1.4.19|themes/water_drop/images|||optional|r@
1.4.20|addpic.php|1.4.20|5705|mandatory|r@
1.4.20|admin.php|1.4.20|5705|mandatory|r@
1.4.20|albmgr.php|1.4.20|5705|mandatory|r@
1.4.20|anycontent.php|1.4.20|5705|mandatory|r@
1.4.20|banning.php|1.4.20|5705|mandatory|r@
1.4.20|bridgemgr.php|1.4.20|5705|mandatory|r@
1.4.20|calendar.php|1.4.20|5705|mandatory|r@
1.4.20|catmgr.php|1.4.20|5705|mandatory|r@
1.4.20|charsetmgr.php|1.4.20|5705|mandatory|r@
1.4.20|config.php|1.4.20|5705|optional|r@
1.4.20|db_ecard.php|1.4.20|5705|mandatory|r@
1.4.20|db_input.php|1.4.20|5705|mandatory|r@
1.4.20|delete.php|1.4.20|5705|mandatory|r@
1.4.20|displayecard.php|1.4.20|5705|mandatory|r@
1.4.20|displayimage.php|1.4.20|5705|mandatory|r@
1.4.20|displayreport.php|1.4.20|5705|mandatory|r@
1.4.20|ecard.php|1.4.20|5705|mandatory|r@
1.4.20|editOnePic.php|1.4.20|5705|mandatory|r@
1.4.20|editpics.php|1.4.20|5705|mandatory|r@
1.4.20|exifmgr.php|1.4.20|5705|mandatory|r@
1.4.20|faq.php|1.4.20|5705|mandatory|r@
1.4.20|forgot_passwd.php|1.4.20|5705|mandatory|r@
1.4.20|getlang.php|1.4.20|5705|mandatory|r@
1.4.20|groupmgr.php|1.4.20|5705|mandatory|r@
1.4.20|image_processor.php|1.4.20|5705|mandatory|r@
1.4.20|index.php|1.4.20|5705|mandatory|r@
1.4.20|install.php|1.4.20|5705|mandatory|r@
1.4.20|installer.css|1.4.20|5705|mandatory|r@
1.4.20|keyword_create_dict.php|1.4.20|5705|mandatory|r@
1.4.20|keyword_select.php|1.4.20|5705|mandatory|r@
1.4.20|keywordmgr.php|1.4.20|5705|mandatory|r@
1.4.20|login.php|1.4.20|5705|mandatory|r@
1.4.20|logout.php|1.4.20|5705|mandatory|r@
1.4.20|minibrowser.php|1.4.20|5705|mandatory|r@
1.4.20|mode.php|1.4.20|5705|mandatory|r@
1.4.20|modifyalb.php|1.4.20|5705|mandatory|r@
1.4.20|phpinfo.php|1.4.20|5705|mandatory|r@
1.4.20|picEditor.php|1.4.20|5707|mandatory|r@
1.4.20|picmgr.php|1.4.20|5705|mandatory|r@
1.4.20|pluginmgr.php|1.4.20|5705|mandatory|r@
1.4.20|profile.php|1.4.20|5705|mandatory|r@
1.4.20|ratepic.php|1.4.20|5705|mandatory|r@
1.4.20|register.php|1.4.20|5705|mandatory|r@
1.4.20|relocate_server.php|1.4.20|5705|optional|r@
1.4.20|report_file.php|1.4.20|5705|mandatory|r@
1.4.20|reviewcom.php|1.4.20|5705|mandatory|r@
1.4.20|scripts.js|1.4.20|5705|mandatory|r@
1.4.20|search.php|1.4.20|5705|mandatory|r@
1.4.20|searchnew.php|1.4.20|5705|mandatory|r@
1.4.20|showthumb.php|1.4.20|5705|mandatory|r@
1.4.20|stat_details.php|1.4.20|5705|mandatory|r@
1.4.20|thumbnails.php|1.4.20|5705|mandatory|r@
1.4.20|update.php|1.4.20|5705|mandatory|r@
1.4.20|upgrade-1.0-to-1.2.php|1.4.20|5705|mandatory|r@
1.4.20|upload.php|1.4.20|5705|mandatory|r@
1.4.20|usermgr.php|1.4.20|5705|mandatory|r@
1.4.20|util.php|1.4.20|5705|mandatory|r@
1.4.20|versioncheck.php|1.4.20|5712|mandatory|r@
1.4.20|viewlog.php|1.4.20|5705|mandatory|r@
1.4.20|xp_publish.php|1.4.20|5705|mandatory|r@
1.4.20|zipdownload.php|1.4.20|5705|mandatory|r@
1.4.20|**fullpath**|||mandatory|w@
1.4.20|**fullpath**/index.php|||optional|w@
1.4.20|**fullpath**/edit/index.html|||optional|w@
1.4.20|**fullpath**/edit/no_FTP-uploads_into_this_folder!|||optional|w@
1.4.20|**fullpath**/edit|||mandatory|w@
1.4.20|**fullpath**/edit/index.html|||optional|w@
1.4.20|**fullpath**/**userpics**|||mandatory|w@
1.4.20|**fullpath**/**userpics**/index.php|||optional|w@
1.4.20|**fullpath**/**userpics**/no_FTP-uploads_into_this_folder!|||optional|w@
1.4.20|bridge|||mandatory|r@
1.4.20|bridge/coppermine.inc.php|1.4.20|5705|mandatory|r@
1.4.20|bridge/invisionboard20.inc.php|1.4.20|5705|optional|r@
1.4.20|bridge/mambo.inc.php|1.4.20|5705|optional|r@
1.4.20|bridge/mybb.inc.php|1.4.20|5705|optional|r@
1.4.20|bridge/phorum.inc.php|1.4.20|5705|optional|r@
1.4.20|bridge/phpbb.inc.php|1.4.20|5705|optional|r@
1.4.20|bridge/phpbb2018.inc.php|1.4.20|5705|optional|r@
1.4.20|bridge/phpbb22.inc.php|1.4.20|5705|optional|r@
1.4.20|bridge/punbb115.inc.php|1.4.20|5705|optional|r@
1.4.20|bridge/punbb12.inc.php|1.4.20|5705|optional|r@
1.4.20|bridge/smf10.inc.php|1.4.20|5705|optional|r@
1.4.20|bridge/smf20.inc.php|1.4.20|5705|optional|r@
1.4.20|bridge/udb_base.inc.php|1.4.20|5705|mandatory|r@
1.4.20|bridge/vbulletin30.inc.php|1.4.20|5705|optional|r@
1.4.20|bridge/xmb.inc.php|1.4.20|5706|optional|r@
1.4.20|bridge/xoops.inc.php|1.4.20|5705|optional|r@
1.4.20|docs|||mandatory|r@
1.4.20|docs/faq.htm|||optional|r@
1.4.20|docs/faq_de.htm|||optional|r@
1.4.20|docs/faq_fr.htm|||optional|r@
1.4.20|docs/index.htm|1.4.20|5710|mandatory|r@
1.4.20|docs/index_es.htm|1.4.20|4392|mandatory|r@
1.4.20|docs/index_fr.htm||5705|mandatory|r@
1.4.20|docs/README.html||5705|optional|r@
1.4.20|docs/showdoc.php|1.4.20|5705|mandatory|r@
1.4.20|docs/style.css|1.4.20|5705|mandatory|r@
1.4.20|docs/theme.htm|||optional|r@
1.4.20|docs/translation.htm|||optional|r@
1.4.20|docs/pics|||mandatory|r@
1.4.20|docs/theme|||optional|r@
1.4.20|docs/theme/edit_style.html|||optional|r@
1.4.20|docs/theme/edit_template.html|||optional|r@
1.4.20|docs/theme/edit_theme.html|1.4.20||optional|r@
1.4.20|docs/theme/index.html|||optional|r@
1.4.20|docs/theme/style.css|1.4.20|5705|optional|r@
1.4.20|docs/theme/validation.html|||optional|r@
1.4.20|include|||mandatory|w@
1.4.20|include/archive.php|1.4.20|5705|mandatory|r@
1.4.20|include/config.inc.php|||mandatory|r@
1.4.20|include/config.inc.php.sample|||optional|r@
1.4.20|include/crop.inc.php|1.4.20|5705|mandatory|r@
1.4.20|include/debugger.inc.php|1.4.20|5705|mandatory|r@
1.4.20|include/exif.php|1.4.20|5705|mandatory|r@
1.4.20|include/exif_php.inc.php|1.4.20|5705|mandatory|r@
1.4.20|include/functions.inc.php|1.4.20|5705|mandatory|r@
1.4.20|include/imageObjectGD.class.php|1.4.20|5705|mandatory|r@
1.4.20|include/imageObjectIM.class.php|1.4.20|5705|mandatory|r@
1.4.20|include/index.html|1.4.20|4784|mandatory|r@
1.4.20|include/init.inc.php|1.4.20|5710|mandatory|r@
1.4.20|include/iptc.inc.php|1.4.20|5705|mandatory|r@
1.4.20|include/keyword.inc.php|1.4.20|5705|mandatory|r@
1.4.20|include/langfallback.inc.php|1.4.20|5705|mandatory|r@
1.4.20|include/logger.inc.php|1.4.20|5705|mandatory|r@
1.4.20|include/mailer.inc.php|1.4.20|5705|mandatory|r@
1.4.20|include/mb.inc.php|1.4.20|5705|mandatory|r@
1.4.20|include/media.functions.inc.php|1.4.20|5705|mandatory|r@
1.4.20|include/phpmailer.lang-en.php|1.4.20|5705|mandatory|r@
1.4.20|include/picmgmt.inc.php|1.4.20|5705|mandatory|r@
1.4.20|include/plugin_api.inc.php|1.4.20|5705|mandatory|r@
1.4.20|include/search.inc.php|1.4.20|5705|mandatory|r@
1.4.20|include/select_lang.inc.php|1.4.20|5705|mandatory|r@
1.4.20|include/slideshow.inc.php|1.4.20|5705|mandatory|r@
1.4.20|include/smilies.inc.php|1.4.20|5705|mandatory|r@
1.4.20|include/smtp.inc.php|1.4.20|5705|mandatory|r@
1.4.20|include/sql_parse.php|1.4.20|5705|mandatory|r@
1.4.20|include/themes.inc.php|1.4.20|5705|mandatory|r@
1.4.20|include/update.inc.php|1.4.20|5705|mandatory|r@
1.4.20|include/zip.lib.php|1.4.20|5705|mandatory|r@
1.4.20|include/makers|||mandatory|w@
1.4.20|include/makers/canon.php|1.4.20|5705|mandatory|r@
1.4.20|include/makers/fujifilm.php|1.4.20|5705|mandatory|r@
1.4.20|include/makers/gps.php|1.4.20|5705|mandatory|r@
1.4.20|include/makers/nikon.php|1.4.20|5705|mandatory|r@
1.4.20|include/makers/olympus.php|1.4.20|5705|mandatory|r@
1.4.20|include/makers/sanyo.php|1.4.20|5705|mandatory|r@
1.4.20|lang|||mandatory|r@
1.4.20|lang/albanian.php|1.4.20|5705|optional|r@
1.4.20|lang/arabic.php|1.4.20|5705|optional|r@
1.4.20|lang/basque.php|1.4.20|5705|optional|r@
1.4.20|lang/brazilian_portuguese.php|1.4.20|5705|optional|r@
1.4.20|lang/bulgarian.php|1.4.20|5705|optional|r@
1.4.20|lang/catalan.php|1.4.20|5705|optional|r@
1.4.20|lang/chinese_big5.php|1.4.20|5705|optional|r@
1.4.20|lang/chinese_gb.php|1.4.20|5705|optional|r@
1.4.20|lang/czech.php|1.4.20|5705|optional|r@
1.4.20|lang/danish.php|1.4.20|5705|optional|r@
1.4.20|lang/dutch.php|1.4.20|5705|optional|r@
1.4.20|lang/english.php|1.4.20|5705|mandatory|r@
1.4.20|lang/english_gb.php|1.4.20|5705|optional|r@
1.4.20|lang/estonian.php|1.4.20|5705|optional|r@
1.4.20|lang/finnish.php|1.4.20|5705|optional|r@
1.4.20|lang/french.php|1.4.20|5705|optional|r@
1.4.20|lang/galician.php|1.4.20|5705|optional|r@
1.4.20|lang/georgian.php|1.4.20|5705|optional|r@
1.4.20|lang/german.php|1.4.20|5705|optional|r@
1.4.20|lang/german_sie.php|1.4.20|5705|optional|r@
1.4.20|lang/greek.php|1.4.20|5705|optional|r@
1.4.20|lang/hebrew.php|1.4.20|5705|optional|r@
1.4.20|lang/hindi.php|1.4.20|5705|optional|r@
1.4.20|lang/hungarian.php|1.4.20|5705|optional|r@
1.4.20|lang/indonesian.php|1.4.20|5705|optional|r@
1.4.20|lang/italian.php|1.4.20|5705|optional|r@
1.4.20|lang/japanese.php|1.4.20|5705|optional|r@
1.4.20|lang/korean.php|1.4.20|5705|optional|r@
1.4.20|lang/latvian.php|1.4.20|3966|optional|r@
1.4.20|lang/lithuanian.php|1.4.20|5705|optional|r@
1.4.20|lang/macedonian.php|1.4.20|5705|optional|r@
1.4.20|lang/norwegian.php|1.4.20|5705|optional|r@
1.4.20|lang/persian.php|1.4.20|5705|optional|r@
1.4.20|lang/polish.php|1.4.20|5705|optional|r@
1.4.20|lang/portuguese.php|1.4.20|5705|optional|r@
1.4.20|lang/romanian.php|1.4.20|5705|optional|r@
1.4.20|lang/russian.php|1.4.20|5705|optional|r@
1.4.20|lang/serbian.php|1.4.20|5705|optional|r@
1.4.20|lang/serbian_cy.php|1.4.20|3966|optional|r@
1.4.20|lang/slovak.php|1.4.20|5705|optional|r@
1.4.20|lang/slovenian.php|1.4.20|5705|optional|r@
1.4.20|lang/spanish.php|1.4.20|5705|optional|r@
1.4.20|lang/swedish.php|1.4.20|5705|optional|r@
1.4.20|lang/thai.php|1.4.20|5705|optional|r@
1.4.20|lang/turkish.php|1.4.20|5705|optional|r@
1.4.20|lang/ukrainian.php|1.4.20|5705|optional|r@
1.4.20|lang/vietnamese.php|1.4.20|5705|optional|r@
1.4.20|lang/welsh.php|1.4.20|4380|optional|r@
1.4.20|logs|||mandatory|w@
1.4.20|logs/log_header.inc.php|1.4.20|5705|mandatory|r@
1.4.20|plugins|||optional|r@
1.4.20|plugins/sample|||optional|r@
1.4.20|plugins/sample/codebase.php|1.4.20|5705|optional|r@
1.4.20|plugins/sample/configuration.php|1.4.20|5705|optional|r@
1.4.20|sql|||mandatory|r@
1.4.20|sql/basic.sql|1.4.20|5705|mandatory|r@
1.4.20|sql/schema.sql|1.4.20|5705|mandatory|r@
1.4.20|sql/update.sql|1.4.20|5705|mandatory|r@
1.4.20|themes|||mandatory|r@
1.4.20|themes/classic|||optional|r@
1.4.20|themes/classic/style.css|1.4.20|5705|optional|r@
1.4.20|themes/classic/template.html|1.4.20|4784|optional|r@
1.4.20|themes/classic/theme.php|1.4.20|5705|optional|r@
1.4.20|themes/classic/images|||optional|r@
1.4.20|themes/eyeball|||optional|r@
1.4.20|themes/eyeball/style.css|1.4.20|5705|optional|r@
1.4.20|themes/eyeball/template.html|1.4.20|4784|optional|r@
1.4.20|themes/eyeball/theme.php|1.4.20|5705|optional|r@
1.4.20|themes/eyeball/images|||optional|r@
1.4.20|themes/fruity|||optional|r@
1.4.20|themes/fruity/style.css|1.4.20|5705|optional|r@
1.4.20|themes/fruity/template.html|1.4.20|4784|optional|r@
1.4.20|themes/fruity/theme.php|1.4.20|5705|optional|r@
1.4.20|themes/fruity/images|||optional|r@
1.4.20|themes/hardwired|||optional|r@
1.4.20|themes/hardwired/style.css|1.4.20|5705|optional|r@
1.4.20|themes/hardwired/template.html|1.4.20|4784|optional|r@
1.4.20|themes/hardwired/theme.php|1.4.20|5711|optional|r@
1.4.20|themes/hardwired/images|||optional|r@
1.4.20|themes/igames|||optional|r@
1.4.20|themes/igames/style.css|1.4.20|5705|optional|r@
1.4.20|themes/igames/template.html|1.4.20|4784|optional|r@
1.4.20|themes/igames/theme.php|1.4.20|5705|optional|r@
1.4.20|themes/igames/images|||optional|r@
1.4.20|themes/mac_ox_x|||optional|r@
1.4.20|themes/mac_ox_x/style.css|1.4.20|5705|optional|r@
1.4.20|themes/mac_ox_x/template.html|1.4.20|4784|optional|r@
1.4.20|themes/mac_ox_x/theme.php|1.4.20|5705|optional|r@
1.4.20|themes/mac_ox_x/images|||optional|r@
1.4.20|themes/project_vii|||optional|r@
1.4.20|themes/project_vii/style.css|1.4.20|5705|optional|r@
1.4.20|themes/project_vii/template.html|1.4.20|4784|optional|r@
1.4.20|themes/project_vii/theme.php|1.4.20|5705|optional|r@
1.4.20|themes/project_vii/images|||optional|r@
1.4.20|themes/rainy_day|||optional|r@
1.4.20|themes/rainy_day/style.css|1.4.20|5705|optional|r@
1.4.20|themes/rainy_day/template.html|1.4.20|4784|optional|r@
1.4.20|themes/rainy_day/theme.php|1.4.20|5705|optional|r@
1.4.20|themes/rainy_day/images|||optional|r@
1.4.20|themes/sample|||optional|r@
1.4.20|themes/sample/style.css|1.4.20|5705|optional|r@
1.4.20|themes/sample/template.html|1.4.20|4784|optional|r@
1.4.20|themes/sample/theme.php|1.4.20|5705|optional|r@
1.4.20|themes/sample/images|||optional|r@
1.4.20|themes/water_drop|||optional|r@
1.4.20|themes/water_drop/style.css|1.4.20|5705|optional|r@
1.4.20|themes/water_drop/template.html|1.4.20|4784|optional|r@
1.4.20|themes/water_drop/theme.php|1.4.20|5705|optional|r@
1.4.20|themes/water_drop/images|||optional|r@
1.4.21|addpic.php|1.4.21|5728|mandatory|r@
1.4.21|admin.php|1.4.21|5728|mandatory|r@
1.4.21|albmgr.php|1.4.21|5728|mandatory|r@
1.4.21|anycontent.php|1.4.21|5728|mandatory|r@
1.4.21|banning.php|1.4.21|5728|mandatory|r@
1.4.21|bridgemgr.php|1.4.21|5728|mandatory|r@
1.4.21|calendar.php|1.4.21|5728|mandatory|r@
1.4.21|catmgr.php|1.4.21|5728|mandatory|r@
1.4.21|charsetmgr.php|1.4.21|5728|mandatory|r@
1.4.21|config.php|1.4.21|5728|optional|r@
1.4.21|db_ecard.php|1.4.21|5728|mandatory|r@
1.4.21|db_input.php|1.4.21|5728|mandatory|r@
1.4.21|delete.php|1.4.21|5728|mandatory|r@
1.4.21|displayecard.php|1.4.21|5728|mandatory|r@
1.4.21|displayimage.php|1.4.21|5728|mandatory|r@
1.4.21|displayreport.php|1.4.21|5728|mandatory|r@
1.4.21|ecard.php|1.4.21|5728|mandatory|r@
1.4.21|editOnePic.php|1.4.21|5728|mandatory|r@
1.4.21|editpics.php|1.4.21|5728|mandatory|r@
1.4.21|exifmgr.php|1.4.21|5728|mandatory|r@
1.4.21|faq.php|1.4.21|5728|mandatory|r@
1.4.21|forgot_passwd.php|1.4.21|5728|mandatory|r@
1.4.21|getlang.php|1.4.21|5728|mandatory|r@
1.4.21|groupmgr.php|1.4.21|5728|mandatory|r@
1.4.21|image_processor.php|1.4.21|5728|mandatory|r@
1.4.21|index.php|1.4.21|5728|mandatory|r@
1.4.21|install.php|1.4.21|5728|mandatory|r@
1.4.21|installer.css|1.4.21|5728|mandatory|r@
1.4.21|keyword_create_dict.php|1.4.21|5728|mandatory|r@
1.4.21|keyword_select.php|1.4.21|5728|mandatory|r@
1.4.21|keywordmgr.php|1.4.21|5728|mandatory|r@
1.4.21|login.php|1.4.21|5728|mandatory|r@
1.4.21|logout.php|1.4.21|5728|mandatory|r@
1.4.21|minibrowser.php|1.4.21|5728|mandatory|r@
1.4.21|mode.php|1.4.21|5728|mandatory|r@
1.4.21|modifyalb.php|1.4.21|5728|mandatory|r@
1.4.21|phpinfo.php|1.4.21|5728|mandatory|r@
1.4.21|picEditor.php|1.4.21|5728|mandatory|r@
1.4.21|picmgr.php|1.4.21|5728|mandatory|r@
1.4.21|pluginmgr.php|1.4.21|5728|mandatory|r@
1.4.21|profile.php|1.4.21|5728|mandatory|r@
1.4.21|ratepic.php|1.4.21|5730|mandatory|r@
1.4.21|register.php|1.4.21|5728|mandatory|r@
1.4.21|relocate_server.php|1.4.21|5728|optional|r@
1.4.21|report_file.php|1.4.21|5728|mandatory|r@
1.4.21|reviewcom.php|1.4.21|5728|mandatory|r@
1.4.21|scripts.js|1.4.21|5728|mandatory|r@
1.4.21|search.php|1.4.21|5728|mandatory|r@
1.4.21|searchnew.php|1.4.21|5728|mandatory|r@
1.4.21|showthumb.php|1.4.21|5728|mandatory|r@
1.4.21|stat_details.php|1.4.21|5728|mandatory|r@
1.4.21|thumbnails.php|1.4.21|5728|mandatory|r@
1.4.21|update.php|1.4.21|5728|mandatory|r@
1.4.21|upgrade-1.0-to-1.2.php|1.4.21|5728|mandatory|r@
1.4.21|upload.php|1.4.21|5728|mandatory|r@
1.4.21|usermgr.php|1.4.21|5728|mandatory|r@
1.4.21|util.php|1.4.21|5728|mandatory|r@
1.4.21|versioncheck.php|1.4.21|5738|mandatory|r@
1.4.21|viewlog.php|1.4.21|5728|mandatory|r@
1.4.21|xp_publish.php|1.4.21|5728|mandatory|r@
1.4.21|zipdownload.php|1.4.21|5728|mandatory|r@
1.4.21|**fullpath**|||mandatory|w@
1.4.21|**fullpath**/index.php|||optional|w@
1.4.21|**fullpath**/edit/index.html|||optional|w@
1.4.21|**fullpath**/edit/no_FTP-uploads_into_this_folder!|||optional|w@
1.4.21|**fullpath**/edit|||mandatory|w@
1.4.21|**fullpath**/edit/index.html|||optional|w@
1.4.21|**fullpath**/**userpics**|||mandatory|w@
1.4.21|**fullpath**/**userpics**/index.php|||optional|w@
1.4.21|**fullpath**/**userpics**/no_FTP-uploads_into_this_folder!|||optional|w@
1.4.21|bridge|||mandatory|r@
1.4.21|bridge/coppermine.inc.php|1.4.21|5728|mandatory|r@
1.4.21|bridge/invisionboard20.inc.php|1.4.21|5728|optional|r@
1.4.21|bridge/mambo.inc.php|1.4.21|5728|optional|r@
1.4.21|bridge/mybb.inc.php|1.4.21|5728|optional|r@
1.4.21|bridge/phorum.inc.php|1.4.21|5728|optional|r@
1.4.21|bridge/phpbb.inc.php|1.4.21|5728|optional|r@
1.4.21|bridge/phpbb2018.inc.php|1.4.21|5728|optional|r@
1.4.21|bridge/phpbb22.inc.php|1.4.21|5728|optional|r@
1.4.21|bridge/punbb115.inc.php|1.4.21|5728|optional|r@
1.4.21|bridge/punbb12.inc.php|1.4.21|5728|optional|r@
1.4.21|bridge/smf10.inc.php|1.4.21|5728|optional|r@
1.4.21|bridge/smf20.inc.php|1.4.21|5728|optional|r@
1.4.21|bridge/udb_base.inc.php|1.4.21|5728|mandatory|r@
1.4.21|bridge/vbulletin30.inc.php|1.4.21|5728|optional|r@
1.4.21|bridge/xmb.inc.php|1.4.21|5728|optional|r@
1.4.21|bridge/xoops.inc.php|1.4.21|5728|optional|r@
1.4.21|docs|||mandatory|r@
1.4.21|docs/faq.htm|||optional|r@
1.4.21|docs/faq_de.htm|||optional|r@
1.4.21|docs/faq_fr.htm|||optional|r@
1.4.21|docs/index.htm|1.4.21|5736|mandatory|r@
1.4.21|docs/index_es.htm|1.4.21|4392|mandatory|r@
1.4.21|docs/index_fr.htm||5728|mandatory|r@
1.4.21|docs/README.html||5728|optional|r@
1.4.21|docs/showdoc.php|1.4.21|5728|mandatory|r@
1.4.21|docs/style.css|1.4.21|5728|mandatory|r@
1.4.21|docs/theme.htm|||optional|r@
1.4.21|docs/translation.htm|||optional|r@
1.4.21|docs/pics|||mandatory|r@
1.4.21|docs/theme|||optional|r@
1.4.21|docs/theme/edit_style.html|||optional|r@
1.4.21|docs/theme/edit_template.html|||optional|r@
1.4.21|docs/theme/edit_theme.html|1.4.21||optional|r@
1.4.21|docs/theme/index.html|||optional|r@
1.4.21|docs/theme/style.css|1.4.21|5728|optional|r@
1.4.21|docs/theme/validation.html|||optional|r@
1.4.21|include|||mandatory|w@
1.4.21|include/archive.php|1.4.21|5728|mandatory|r@
1.4.21|include/config.inc.php|||mandatory|r@
1.4.21|include/config.inc.php.sample|||optional|r@
1.4.21|include/crop.inc.php|1.4.21|5728|mandatory|r@
1.4.21|include/debugger.inc.php|1.4.21|5728|mandatory|r@
1.4.21|include/exif.php|1.4.21|5728|mandatory|r@
1.4.21|include/exif_php.inc.php|1.4.21|5728|mandatory|r@
1.4.21|include/functions.inc.php|1.4.21|5737|mandatory|r@
1.4.21|include/imageObjectGD.class.php|1.4.21|5728|mandatory|r@
1.4.21|include/imageObjectIM.class.php|1.4.21|5728|mandatory|r@
1.4.21|include/index.html|1.4.21|5728|mandatory|r@
1.4.21|include/init.inc.php|1.4.21|5728|mandatory|r@
1.4.21|include/iptc.inc.php|1.4.21|5728|mandatory|r@
1.4.21|include/keyword.inc.php|1.4.21|5728|mandatory|r@
1.4.21|include/langfallback.inc.php|1.4.21|5728|mandatory|r@
1.4.21|include/logger.inc.php|1.4.21|5728|mandatory|r@
1.4.21|include/mailer.inc.php|1.4.21|5728|mandatory|r@
1.4.21|include/mb.inc.php|1.4.21|5728|mandatory|r@
1.4.21|include/media.functions.inc.php|1.4.21|5728|mandatory|r@
1.4.21|include/phpmailer.lang-en.php|1.4.21|5728|mandatory|r@
1.4.21|include/picmgmt.inc.php|1.4.21|5728|mandatory|r@
1.4.21|include/plugin_api.inc.php|1.4.21|5728|mandatory|r@
1.4.21|include/search.inc.php|1.4.21|5728|mandatory|r@
1.4.21|include/select_lang.inc.php|1.4.21|5728|mandatory|r@
1.4.21|include/slideshow.inc.php|1.4.21|5728|mandatory|r@
1.4.21|include/smilies.inc.php|1.4.21|5728|mandatory|r@
1.4.21|include/smtp.inc.php|1.4.21|5728|mandatory|r@
1.4.21|include/sql_parse.php|1.4.21|5728|mandatory|r@
1.4.21|include/themes.inc.php|1.4.21|5728|mandatory|r@
1.4.21|include/update.inc.php|1.4.21|5728|mandatory|r@
1.4.21|include/zip.lib.php|1.4.21|5728|mandatory|r@
1.4.21|include/makers|||mandatory|w@
1.4.21|include/makers/canon.php|1.4.21|5728|mandatory|r@
1.4.21|include/makers/fujifilm.php|1.4.21|5728|mandatory|r@
1.4.21|include/makers/gps.php|1.4.21|5728|mandatory|r@
1.4.21|include/makers/nikon.php|1.4.21|5728|mandatory|r@
1.4.21|include/makers/olympus.php|1.4.21|5728|mandatory|r@
1.4.21|include/makers/sanyo.php|1.4.21|5728|mandatory|r@
1.4.21|lang|||mandatory|r@
1.4.21|lang/albanian.php|1.4.21|5728|optional|r@
1.4.21|lang/arabic.php|1.4.21|5728|optional|r@
1.4.21|lang/basque.php|1.4.21|5728|optional|r@
1.4.21|lang/brazilian_portuguese.php|1.4.21|5728|optional|r@
1.4.21|lang/bulgarian.php|1.4.21|5728|optional|r@
1.4.21|lang/catalan.php|1.4.21|5728|optional|r@
1.4.21|lang/chinese_big5.php|1.4.21|5728|optional|r@
1.4.21|lang/chinese_gb.php|1.4.21|5728|optional|r@
1.4.21|lang/czech.php|1.4.21|5728|optional|r@
1.4.21|lang/danish.php|1.4.21|5728|optional|r@
1.4.21|lang/dutch.php|1.4.21|5728|optional|r@
1.4.21|lang/english.php|1.4.21|5728|mandatory|r@
1.4.21|lang/english_gb.php|1.4.21|5728|optional|r@
1.4.21|lang/estonian.php|1.4.21|5728|optional|r@
1.4.21|lang/finnish.php|1.4.21|5728|optional|r@
1.4.21|lang/french.php|1.4.21|5728|optional|r@
1.4.21|lang/galician.php|1.4.21|5728|optional|r@
1.4.21|lang/georgian.php|1.4.21|5728|optional|r@
1.4.21|lang/german.php|1.4.21|5728|optional|r@
1.4.21|lang/german_sie.php|1.4.21|5728|optional|r@
1.4.21|lang/greek.php|1.4.21|5728|optional|r@
1.4.21|lang/hebrew.php|1.4.21|5728|optional|r@
1.4.21|lang/hindi.php|1.4.21|5728|optional|r@
1.4.21|lang/hungarian.php|1.4.21|5728|optional|r@
1.4.21|lang/indonesian.php|1.4.21|5728|optional|r@
1.4.21|lang/italian.php|1.4.21|5728|optional|r@
1.4.21|lang/japanese.php|1.4.21|5728|optional|r@
1.4.21|lang/korean.php|1.4.21|5728|optional|r@
1.4.21|lang/latvian.php|1.4.21|3966|optional|r@
1.4.21|lang/lithuanian.php|1.4.21|5728|optional|r@
1.4.21|lang/macedonian.php|1.4.21|5728|optional|r@
1.4.21|lang/norwegian.php|1.4.21|5728|optional|r@
1.4.21|lang/persian.php|1.4.21|5728|optional|r@
1.4.21|lang/polish.php|1.4.21|5728|optional|r@
1.4.21|lang/portuguese.php|1.4.21|5728|optional|r@
1.4.21|lang/romanian.php|1.4.21|5728|optional|r@
1.4.21|lang/russian.php|1.4.21|5728|optional|r@
1.4.21|lang/serbian.php|1.4.21|5728|optional|r@
1.4.21|lang/serbian_cy.php|1.4.21|3966|optional|r@
1.4.21|lang/slovak.php|1.4.21|5728|optional|r@
1.4.21|lang/slovenian.php|1.4.21|5728|optional|r@
1.4.21|lang/spanish.php|1.4.21|5728|optional|r@
1.4.21|lang/swedish.php|1.4.21|5728|optional|r@
1.4.21|lang/thai.php|1.4.21|5728|optional|r@
1.4.21|lang/turkish.php|1.4.21|5728|optional|r@
1.4.21|lang/ukrainian.php|1.4.21|5728|optional|r@
1.4.21|lang/vietnamese.php|1.4.21|5728|optional|r@
1.4.21|lang/welsh.php|1.4.21|4380|optional|r@
1.4.21|logs|||mandatory|w@
1.4.21|logs/log_header.inc.php|1.4.21|5728|mandatory|r@
1.4.21|plugins|||optional|r@
1.4.21|plugins/sample|||optional|r@
1.4.21|plugins/sample/codebase.php|1.4.21|5728|optional|r@
1.4.21|plugins/sample/configuration.php|1.4.21|5728|optional|r@
1.4.21|sql|||mandatory|r@
1.4.21|sql/basic.sql|1.4.21|5728|mandatory|r@
1.4.21|sql/schema.sql|1.4.21|5728|mandatory|r@
1.4.21|sql/update.sql|1.4.21|5728|mandatory|r@
1.4.21|themes|||mandatory|r@
1.4.21|themes/classic|||optional|r@
1.4.21|themes/classic/style.css|1.4.21|5728|optional|r@
1.4.21|themes/classic/template.html|1.4.21|5728|optional|r@
1.4.21|themes/classic/theme.php|1.4.21|5728|optional|r@
1.4.21|themes/classic/images|||optional|r@
1.4.21|themes/eyeball|||optional|r@
1.4.21|themes/eyeball/style.css|1.4.21|5728|optional|r@
1.4.21|themes/eyeball/template.html|1.4.21|5728|optional|r@
1.4.21|themes/eyeball/theme.php|1.4.21|5728|optional|r@
1.4.21|themes/eyeball/images|||optional|r@
1.4.21|themes/fruity|||optional|r@
1.4.21|themes/fruity/style.css|1.4.21|5728|optional|r@
1.4.21|themes/fruity/template.html|1.4.21|5728|optional|r@
1.4.21|themes/fruity/theme.php|1.4.21|5728|optional|r@
1.4.21|themes/fruity/images|||optional|r@
1.4.21|themes/hardwired|||optional|r@
1.4.21|themes/hardwired/style.css|1.4.21|5728|optional|r@
1.4.21|themes/hardwired/template.html|1.4.21|5728|optional|r@
1.4.21|themes/hardwired/theme.php|1.4.21|5728|optional|r@
1.4.21|themes/hardwired/images|||optional|r@
1.4.21|themes/igames|||optional|r@
1.4.21|themes/igames/style.css|1.4.21|5728|optional|r@
1.4.21|themes/igames/template.html|1.4.21|5728|optional|r@
1.4.21|themes/igames/theme.php|1.4.21|5728|optional|r@
1.4.21|themes/igames/images|||optional|r@
1.4.21|themes/mac_ox_x|||optional|r@
1.4.21|themes/mac_ox_x/style.css|1.4.21|5728|optional|r@
1.4.21|themes/mac_ox_x/template.html|1.4.21|5728|optional|r@
1.4.21|themes/mac_ox_x/theme.php|1.4.21|5728|optional|r@
1.4.21|themes/mac_ox_x/images|||optional|r@
1.4.21|themes/project_vii|||optional|r@
1.4.21|themes/project_vii/style.css|1.4.21|5728|optional|r@
1.4.21|themes/project_vii/template.html|1.4.21|5728|optional|r@
1.4.21|themes/project_vii/theme.php|1.4.21|5728|optional|r@
1.4.21|themes/project_vii/images|||optional|r@
1.4.21|themes/rainy_day|||optional|r@
1.4.21|themes/rainy_day/style.css|1.4.21|5728|optional|r@
1.4.21|themes/rainy_day/template.html|1.4.21|5728|optional|r@
1.4.21|themes/rainy_day/theme.php|1.4.21|5728|optional|r@
1.4.21|themes/rainy_day/images|||optional|r@
1.4.21|themes/sample|||optional|r@
1.4.21|themes/sample/style.css|1.4.21|5728|optional|r@
1.4.21|themes/sample/template.html|1.4.21|5728|optional|r@
1.4.21|themes/sample/theme.php|1.4.21|5728|optional|r@
1.4.21|themes/sample/images|||optional|r@
1.4.21|themes/water_drop|||optional|r@
1.4.21|themes/water_drop/style.css|1.4.21|5728|optional|r@
1.4.21|themes/water_drop/template.html|1.4.21|5728|optional|r@
1.4.21|themes/water_drop/theme.php|1.4.21|5728|optional|r@
1.4.21|themes/water_drop/images|||optional|r@
';
return $return;
}

?>