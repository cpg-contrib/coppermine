<?php
// ------------------------------------------------------------------------- //
// Coppermine Photo Gallery 1.4.0                                            //
// ------------------------------------------------------------------------- //
// Copyright (C) 2002-2004 Gregory DEMAR                                     //
// http://www.chezgreg.net/coppermine/                                       //
// ------------------------------------------------------------------------- //
// Updated by the Coppermine Dev Team                                        //
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
define('VERSIONCHECK_PHP', true);

require('include/init.inc.php');

if (!GALLERY_ADMIN_MODE) { cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__); }

pageheader($lang_versioncheck_php['title']);

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
</style>
<h1>@devs: this file is currently under construction, don't use yet... GauGau</h1>
EOT;

// step one:  get the data from the online repository
$online_repository_url = 'http://coppermine.sourceforge.net/repository.txt';
// connect to the online repository at sourceforge.net
$file = @fopen ($online_repository_url, 'r');
if ($file) {
    while (!feof ($file)) {
       $line = fgets ($file, 1024);
       //print $line.'<br>';
       $repository_info = explode ( '|', $line);
       if ($repository_info[0] == COPPERMINE_VERSION) {
           $repository_filename[] = $repository_info[1];
           $repository_version[$repository_info[1]] = $repository_info[2];
           $repository_cvs[$repository_info[1]] = $repository_info[3];
           $repository_needed[$repository_info[1]] = $repository_info[4];
           $repository_readwrite[$repository_info[1]] = $repository_info[5];
       }
    }
    $online_repository_connection = 1;
    fclose($file);
} else {
    starttable('100%', $lang_versioncheck_php['online_repository_unable']);
    print '<tr><td class="tableb">';
    print $lang_versioncheck_php['online_repository_noconnect'];
    print '<ul><li>';
    printf($lang_versioncheck_php['online_repository_reason1'],'<a href="'.$online_repository_url.'" target="_blank">'.$online_repository_url.'</a>');
    print '</li><li>';
    printf($lang_versioncheck_php['online_repository_reason2'],'<a href="http://www.php.net/manual/en/ref.filesystem.php#ini.allow-url-fopen"><i>allow_url_fopen</i></a>');
    print '</li></ul>';
    print $lang_versioncheck_php['online_repository_to_local'];
    print '</td></tr>';
    endtable();
    print '<br />';
    $online_repository_connection = 0;
// use the data that comes with the distribution
$local_file_name = 'repository.txt';
$file = @fopen ($local_file_name, 'r');
if ($file) {
    while (!feof ($file)) {
       $line = fgets ($file, 1024);
       //print $line.'<br>';
       $repository_info = explode ( '|', $line);
       if ($repository_info[0] == COPPERMINE_VERSION) {
           $repository_filename[] = $repository_info[1];
           $repository_version[$repository_info[1]] = $repository_info[2];
           $repository_cvs[$repository_info[1]] = $repository_info[3];
           $repository_needed[$repository_info[1]] = $repository_info[4];
           $repository_readwrite[$repository_info[1]] = $repository_info[5];
       }
    }
    fclose($file);
} else { //couldn't even connect to the local repository
    starttable('100%', $lang_versioncheck_php['local_repository_unable']);
    print '<tr><td class="tableb">';
    printf($lang_versioncheck_php['local_repository_explanation'], '<i><a href="'.$local_file_name.'" target="_blank">'.$local_file_name.'</a></i>');
    print '</td></tr>';
    endtable();
    die;
}
}


starttable('100%', $lang_versioncheck_php['coppermine_version_header']);
print '<tr><td class="tableb">';
printf($lang_versioncheck_php['coppermine_version_info'],'<b>' . COPPERMINE_VERSION . '</b>');
print '<br />';
print $lang_versioncheck_php['coppermine_version_explanation'];
print '</td></tr>';
endtable();
print "<br />\n";

// step two: draw the table header
starttable('100%', $lang_versioncheck_php['version_comparison'],6);
echo <<< EOT
<tr>
<td class="tablef"><b>{$lang_versioncheck_php['file']}</b></td>
<td class="tablef"><b>{$lang_versioncheck_php['coppermine_version']}</b></td>
<td class="tablef"><b>{$lang_versioncheck_php['file_version']}</b></td>
<td class="tablef"><b>{$lang_versioncheck_php['writable']}</b></td>
</tr>
EOT;


// step three: go through all files that exist in the repository and check if they're on the webserver as well
$dir = '../'.cpg_get_coppermine_path().'/'; // this is the place to start browsing
foreach ($repository_filename as $rep_file) {
$file_info = cpg_get_path_and_file($rep_file);
cpg_output_version_row(cpg_get_fileversion($dir.$file_info['path'], $file_info['file']), $file_info);
//print 'rep:'.$rep_file.'|folder:'.$file_info['path'].'|file:'.$file_info['file'];
}
endtable();
//print "<hr>";
//print_r(cpg_get_path_and_file('albums/edit'));

////////////////////////////////// functions ///////////////////////////////

function cpg_get_coppermine_path() {
global $PHP_SELF;
$return = str_replace('/', '',strrchr(str_replace('/'.str_replace('/', '',strrchr($PHP_SELF, '/')), '', $PHP_SELF),'/'));
return $return;
}

function cpg_get_path_and_file($string) {
$return['path'] = str_replace(str_replace('/', '', strrchr($string, '/')), '', $string);
$return['file'] = str_replace('/', '', strrchr($string, '/'));
if (strstr($return['path'], '.') != FALSE && $return['file'] == '')
{
$return['file'] = $return['path'];
$return['path'] = '';
}
if (strstr($return['file'], '.') == FALSE)
{
$return['path'] = $return['path'].$return['file'];
$return['file'] = '';
}
//print 'folder:'.$return['path'].'|file:'.$return['file'].'|eol';
return $return;
}

function cpg_get_fileversion($folder  = '',$file = '') {
    $handle = @fopen($folder.$file, 'r');
    $blob = @fread($handle, filesize($folder.$file));
    @fclose($handle);
    $cvs_string = '$'.'I'.'d'.':';

    $blob = str_replace('<?php','',$blob);
    $return['cpg_version'] = substr($blob,strpos($blob, 'Coppermine Photo Gallery'));
    $return['cpg_version'] = substr($return['cpg_version'],0,strpos($return['cpg_version'], '//'));
    $return['cpg_version'] = trim(str_replace('Coppermine Photo Gallery', '', $return['cpg_version']));
    if (strlen($return['cpg_version']) > 5) {$return['cpg_version']='n/a';}

    $return['cvs_version'] = substr($blob,strpos($blob, $cvs_string));
    $return['cvs_version'] = substr($return['cvs_version'],0,strpos($return['cvs_version'], 'Exp'));
    $return['cvs_version'] = str_replace($cvs_string, '', $return['cvs_version']);
    $return['cvs_version'] = strrchr($return['cvs_version'], 'v ');
    $return['cvs_version'] = str_replace('v ', '', $return['cvs_version']);
    $return['cvs_version'] = trim(str_replace(strstr($return['cvs_version'], ' '), '', $return['cvs_version']));
    if (strlen($return['cvs_version']) > 5) {$return['cvs_version']='n/a';}

    if (file_exists($folder.$file)) {
    $return['exists'] = 1;
    } else {
    $return['exists'] = 0;
    }

    if (is_readable($folder.$file)) {
    $return['readable'] = 1;
    } else {
    $return['readable'] = 0;
    }

    if (is_writable($folder.$file)) {
    $return['writable'] = 1;
    } else {
    $return['writable'] = 0;
    }
// check for the existance of a folder
$return['is_dir'] = 0;
if ($file == '') {
if ($handle = @opendir($folder.$file)) {
$return['is_dir'] = 1;
@closedir($handle);
}
}
//print $return['is_dir'];
//print 'folder:'.$folder.'|file:'.$file;
return $return;
}

function cpg_output_version_row($file_version_info = '', $file_path = '') {
global $repository_filename,$repository_version,$repository_cvs,$repository_needed,$repository_readwrite,$lang_versioncheck_php;
$file_complete_path = $file_path['path'].$file_path['file'];
print '<tr><td class="tableb">';
$help_ouput = '';
if ($file_version_info['exists'] == 1) {
    $stylecolor = '';
    $helptitle = 'file exists';
} else {
    if ($repository_needed[$file_complete_path] == 'optional') {
        $stylecolor = 'yellow';
        $helptitle = $lang_versioncheck_php['help_file_not_exist_optional1'];
        $helpoutput = sprintf($lang_versioncheck_php['help_file_not_exist_optional2'], '&quot;<i>'.$file_complete_path.'</i>&quot;');
    } else {
        $stylecolor = 'red';
        $helptitle = $lang_versioncheck_php['help_file_not_exist_mandatory1'];
        $helpoutput = sprintf($lang_versioncheck_php['help_file_not_exist_mandatory2'], '&quot;<i>'.$file_complete_path.'</i>&quot;');
    }
}
print '<span class="'.$stylecolor.'" title="'.$helptitle.'">';
print $file_path['path'];
print $file_path['file'];
if ($stylecolor != '') {
    print '&nbsp;';
    print cpg_display_help('f=index.html&base=64&h='.urlencode(base64_encode(serialize($helptitle))).'&t='.urlencode(base64_encode(serialize($helpoutput))),400,150);
}
print '</span>';
print '</td><td class="tableb">';
// cpg version start
    $cvs_version_check = 'enable';
    if (!$repository_version[$file_complete_path]) {
        $repository_version[$file_complete_path] = '?';
    }
    if ($file_version_info['exists'] != 1)
    {
        print '-';
        $helptitle = '';
    } elseif (!$file_version_info['cpg_version'] && $repository_version[$file_complete_path] == '?') {
        print 'n/a';
    } elseif (!$file_version_info['cpg_version'] || $file_version_info['cpg_version'] == 'n/a') {
        $cvs_version_check = 'disable';
        print '<span class="red">';
        print '?';
        print '</span>';
        print ' / ';
        print $repository_version[$file_complete_path];
        $helptitle = $lang_versioncheck_php['help_no_local_version1'];
        $helpoutput = $lang_versioncheck_php['help_no_local_version2'];
    } elseif ($file_version_info['cpg_version'] == $repository_version[$file_complete_path]) {
        print '<span class="green">';
        print $file_version_info['cpg_version'];
        print '</span>';
        $helptitle = '';
    } elseif ($file_version_info['cpg_version'] < $repository_version[$file_complete_path]) {
        $cvs_version_check = 'disable';
        print '<span class="red">';
        print $file_version_info['cpg_version'];
        print '</span>';
        print ' / ';
        print $repository_version[$file_complete_path];
        $helptitle = $lang_versioncheck_php['help_local_version_outdated1'];
        $helpoutput = $lang_versioncheck_php['help_local_version_outdated2'];
    } elseif ($file_version_info['cpg_version'] > $repository_version[$file_complete_path]) {
        $cvs_version_check = 'disable';
        print $file_version_info['cpg_version'];
        print ' / ';
        print '<span class="yellow">';
        print $repository_version[$file_complete_path];
        print '</span>';
        $helptitle = $lang_versioncheck_php['help_local_version_dev1'];
        $helpoutput = $lang_versioncheck_php['help_local_version_dev2'];
    } else {
        $cvs_version_check = 'disable';
        print '<span class="red">';
        print $file_version_info['cpg_version'];
        print '</span>';
        print ' / ';
        print '<span class="red">';
        print $repository_version[$file_complete_path];
        print '</span>';
    }
   if ($helptitle != '') {
      print '&nbsp;';
      print cpg_display_help('f=index.html&base=64&h='.urlencode(base64_encode(serialize($helptitle))).'&t='.urlencode(base64_encode(serialize($helpoutput))),400,150);
   }
// cpg version end
print '</td><td class="tableb">';
// cvs version start
    $helptitle = '';
    if ($cvs_version_check != 'disable') {
        if (!$repository_cvs[$file_complete_path]) {
            $repository_cvs[$file_complete_path] = '?';
        }
        if ($file_version_info['exists'] != 1)
        {
            print '-';
        } elseif (!$file_version_info['cvs_version'] && $repository_cvs[$file_complete_path] == '?') {
            print 'n/a';
        } elseif (!$file_version_info['cvs_version'] || $file_version_info['cvs_version'] == 'n/a') {
            print '<span class="red">';
            print $file_version_info['cvs_version'];
            print '</span>';
            print ' / ';
            print $repository_cvs[$file_complete_path];
            $helptitle = $lang_versioncheck_php['help_local_version_na1'];
            $helpoutput = $lang_versioncheck_php['help_local_version_na2'];
        } elseif (cpg_version_compare($file_version_info['cvs_version']) == cpg_version_compare($repository_cvs[$file_complete_path])) {
            print '<span class="green">';
            print $file_version_info['cvs_version'];
            print '</span>';
        } elseif (cpg_version_compare($file_version_info['cvs_version']) < cpg_version_compare($repository_cvs[$file_complete_path])) {
            print '<span class="red">';
            print $file_version_info['cvs_version'];
            print '</span>';
            print ' / ';
            print $repository_cvs[$file_complete_path];
            $helptitle = $lang_versioncheck_php['help_local_version_outdated1'];
            $helpoutput = $lang_versioncheck_php['help_local_version_outdated2'];
        } elseif (cpg_version_compare($file_version_info['cvs_version']) > cpg_version_compare($repository_cvs[$file_complete_path])) {
            print $file_version_info['cvs_version'];
            print ' / ';
            print '<span class="yellow">';
            print $repository_cvs[$file_complete_path];
            print '</span>';
            $helptitle = $lang_versioncheck_php['help_local_version_dev1'];
            $helpoutput = $lang_versioncheck_php['help_local_version_dev2'];
        } else {
            print '<span class="red">';
            print $file_version_info['cvs_version'];
            print '</span>';
            print ' / ';
            print '<span class="red">';
            print $repository_cvs[$file_complete_path];
            $helptitle = $lang_versioncheck_php['help_local_version_outdated1'];
            $helpoutput = $lang_versioncheck_php['help_local_version_outdated2'];
            print '</span>';
        }
    } else {
            print '-';
    }
    if ($helptitle != '') {
        print '&nbsp;';
        print cpg_display_help('f=index.html&base=64&h='.urlencode(base64_encode(serialize($helptitle))).'&t='.urlencode(base64_encode(serialize($helpoutput))),400,150);
    }
// cvs version end
print '</td><td class="tableb">';
// writable ? start
$stylecolor = '';
if ($file_version_info['writable'] == 0 && $repository_readwrite[$file_complete_path] == 'w') {
    $stylecolor = 'red';
} elseif ($file_version_info['writable'] == 1 && $repository_readwrite[$file_complete_path] == 'r') {
    $stylecolor = 'yellow';
}
print '<span class="'.$stylecolor.'">';
if ($file_version_info['writable'] == 1)
{
   print '&radic;';
} elseif ($file_version_info['exists'] == 1) {
  print '-';
}
//print $file_version_info['writable'];
//print $repository_readwrite[$file_complete_path];
print '</span>';
// writable ? end
print "</td></tr>\n";
}

function cpg_version_compare($version)
{
$version_info = explode ( '.', $version);
//print 'i|version|pow<br>';
for ($i=0;$i<count($version_info);$i++) {
$return = $return + (pow('100',count($version_info)-$i)*$version_info[$i]);
//print $i.'|'.$version_info[$i].'|'.pow('100',count($version_info)-$i).'<br>';
}
return $return;
}

?>