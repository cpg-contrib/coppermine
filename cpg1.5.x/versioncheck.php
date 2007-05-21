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
  $HeadURL$
  $Revision$
  $LastChangedBy$
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
$online_repository_url = 'http://coppermine.sourceforge.net/repository.txt';
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

if (function_exists('cpg_display_help') == false ) {
function cpg_display_help($reference = '', $width = '600', $height = '350') {
global $CONFIG, $USER, $lang_common;
if ($reference == '' || $CONFIG['enable_help'] == '0') {return; }
if ($CONFIG['enable_help'] == '2' && GALLERY_ADMIN_MODE == false) {return; }
$help_theme = $CONFIG['theme'];
if ($USER['theme']) {
    $help_theme = $USER['theme'];
}
// check if the help icon is there. If it isn't, display a plain question mark
if (file_exists('images/help.gif') == true) { $help_icon = '<img src="images/help.gif" width="13" height="11" border="0" alt="" title="'.$lang_common['help'].'" />';
} else { $help_icon = '<span style="background-color:#FFFAD3;color:#000000;font-weight:bold;border:1px solid black;font-size:8pt;margin:0px;padding:0px" title="'.$lang_common['help'].'"> ? </span>';
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


// step x: display the options
$form_output = '<form name="versioncheck_options" id="cpgform" action="'.$_SERVER['PHP_SELF'].'" method="get">';
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
    /*
    print $file;
    print ':<span style="color:red">';
    print $return['cpg_version'];
    print "</span>";
    print $double_slash_position;
    print "<br />\n";
    */
    if (strlen($return['cpg_version']) > 5) {$return['cpg_version']='n/a';}

    // Fallback to the "old" cpg version determination method if no result (for compatibility with older versions)
    if ($return['cpg_version'] == '') {
      $return['cpg_version'] = substr($blob,strpos($blob, 'Coppermine Photo Gallery'));
      $return['cpg_version'] = substr($return['cpg_version'],0,strpos($return['cpg_version'], '//'));
      $return['cpg_version'] = trim(str_replace('Coppermine Photo Gallery', '', $return['cpg_version']));
      if (strlen($return['cpg_version']) > 5) {$return['cpg_version']='n/a';}
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
    print cpg_display_help('f=empty.htm&amp;base=64&amp;h='.urlencode(base64_encode(serialize($helptitle))).'&amp;t='.urlencode(base64_encode(serialize($helpoutput))),400,150);
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
        print cpg_display_help('f=empty.htm&amp;base=64&amp;h='.urlencode(base64_encode(serialize($helptitle))).'&amp;t='.urlencode(base64_encode(serialize($helpoutput)).'&amp;css=1'),400,150);
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
$webcvslink = 'http://cvs.sourceforge.net/viewcvs.py/coppermine/';
if ($webcvs == "devel") {$webcvslink .= 'devel/';} else {$webcvslink .= 'stable/';}
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
      $return .= cpg_display_help('f=empty.htm&amp;base=64&amp;h='.urlencode(base64_encode(serialize($helptitle))).'&amp;t='.urlencode(base64_encode(serialize($helpoutput))),400,150);

   }
   return $return;
}

function cpg_offline_repository() {
$return = '
1.5.0|addfav.php|1.5.0|3125|mandatory|r@
';
return $return;
}

?>