<?php
// ------------------------------------------------------------------------- //
// Coppermine Photo Gallery 1.2.0                                            //
// ------------------------------------------------------------------------- //
// Copyright (C) 2002,2003 Gregory DEMAR <gdemar@wanadoo.fr>                 //
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
define('IN_COPPERMINE', true);

require("include/config.inc.php");
require('include/init.inc.php');
require('include/picmgmt.inc.php');

pageheader($lang_search_php[0]);

print '
<h1>Advanced debug info (phpinfo)</h1>
';

if (!GALLERY_ADMIN_MODE) die('Access denied');

print '<div align="left">
<h2>PHP version: ' . phpversion() . '</h2>
';

if (strcmp('4.0.0', phpversion()) == 1) {
    print ' - your PHP version isn\'t good enough! Minimum requirements: 4.x';
} 
print '<br />
';

$mySqlVersion = cpgMysqlVersion();
print '<h2>mySQL version: ' . $mySqlVersion . '</h2>
';

if (strcmp('3.23.23', $mySqlVersion) == 1) {
    print ' - your mySQL version isn\'t good enough! Minimum requirements: 3.23.23';
} 
print '<hr />
';

print '<h2>Image Lib(s)</h2>
';

if (cpgModOutput("gd") . cpgModOutput("Image Magick") == "") {
    print '<h2>you seem to have neither GD nor Image Magick installed; Coppermine won\'t run!</h2>';
} 
print '<br />
';

starttable('100%', 'Server restrictions (safe mode)?', 3);
print '<tr><td><b>Directive</b></td><td><b>Local Value</b></td><td><b>Master Value</b></td></tr>';
$pieces = cpgGetPhpinfoConf("safe_mode");
print '<tr><td>' . $pieces[0] . '</td><td>' . $pieces[1] . '</td><td>' . $pieces[2] . '</td></tr>';
$pieces = cpgGetPhpinfoConf("safe_mode_exec_dir");
print '<tr><td>' . $pieces[0] . '</td><td>' . $pieces[1] . '</td><td>' . $pieces[2] . '</td></tr>';
$pieces = cpgGetPhpinfoConf("safe_mode_gid");
print '<tr><td>' . $pieces[0] . '</td><td>' . $pieces[1] . '</td><td>' . $pieces[2] . '</td></tr>';
$pieces = cpgGetPhpinfoConf("safe_mode_include_dir");
print '<tr><td>' . $pieces[0] . '</td><td>' . $pieces[1] . '</td><td>' . $pieces[2] . '</td></tr>';
$pieces = cpgGetPhpinfoConf("safe_mode_exec_dir");
print '<tr><td>' . $pieces[0] . '</td><td>' . $pieces[1] . '</td><td>' . $pieces[2] . '</td></tr>';
$pieces = cpgGetPhpinfoConf("sql.safe_mode");
print '<tr><td>' . $pieces[0] . '</td><td>' . $pieces[1] . '</td><td>' . $pieces[2] . '</td></tr>';
$pieces = cpgGetPhpinfoConf("disable_functions");
print '<tr><td>' . $pieces[0] . '</td><td>' . $pieces[1] . '</td><td>' . $pieces[2] . '</td></tr>';
$pieces = cpgGetPhpinfoConf("file_uploads");
print '<tr><td>' . $pieces[0] . '</td><td>' . $pieces[1] . '</td><td>' . $pieces[2] . '</td></tr>';
$pieces = cpgGetPhpinfoConf("include_path");
print '<tr><td>' . $pieces[0] . '</td><td>' . $pieces[1] . '</td><td>' . $pieces[2] . '</td></tr>';
$pieces = cpgGetPhpinfoConf("open_basedir");
print '<tr><td>' . $pieces[0] . '</td><td>' . $pieces[1] . '</td><td>' . $pieces[2] . '</td></tr>';
endtable();
print '
<br />
';

starttable('100%', 'email', 3);
print '<tr><td><b>Directive</b></td><td><b>Local Value</b></td><td><b>Master Value</b></td></tr>';
$pieces = cpgGetPhpinfoConf("sendmail_from");
print '<tr><td>' . $pieces[0] . '</td><td>' . $pieces[1] . '</td><td>' . $pieces[2] . '</td></tr>';
$pieces = cpgGetPhpinfoConf("sendmail_path");
print '<tr><td>' . $pieces[0] . '</td><td>' . $pieces[1] . '</td><td>' . $pieces[2] . '</td></tr>';
$pieces = cpgGetPhpinfoConf("SMTP");
print '<tr><td>' . $pieces[0] . '</td><td>' . $pieces[1] . '</td><td>' . $pieces[2] . '</td></tr>';
$pieces = cpgGetPhpinfoConf("smtp_port");
print '<tr><td>' . $pieces[0] . '</td><td>' . $pieces[1] . '</td><td>' . $pieces[2] . '</td></tr>';
endtable();
print '
<br />
';

starttable('100%', 'Size and Time', 3);
print '<tr><td><b>Directive</b></td><td><b>Local Value</b></td><td><b>Master Value</b></td></tr>';
$pieces = cpgGetPhpinfoConf("max_execution_time");
print '<tr><td>' . $pieces[0] . '</td><td>' . $pieces[1] . '</td><td>' . $pieces[2] . '</td></tr>';
$pieces = cpgGetPhpinfoConf("max_input_time");
print '<tr><td>' . $pieces[0] . '</td><td>' . $pieces[1] . '</td><td>' . $pieces[2] . '</td></tr>';
$pieces = cpgGetPhpinfoConf("upload_max_filesize");
print '<tr><td>' . $pieces[0] . '</td><td>' . $pieces[1] . '</td><td>' . $pieces[2] . '</td></tr>';
$pieces = cpgGetPhpinfoConf("post_max_size");
print '<tr><td>' . $pieces[0] . '</td><td>' . $pieces[1] . '</td><td>' . $pieces[2] . '</td></tr>';
endtable();
print '
</div>
';

pagefooter();
ob_end_flush();

function cpgGetPhpinfoConf($search)
{
    // this could be done much better with regexpr - anyone who wants to change it: go ahead
    ob_start();
    phpinfo(INFO_CONFIGURATION);
    $string = ob_get_contents();
    ob_end_clean(); 
    // find out the first occurence of "</tr" and throw the superfluos stuff in front of it away
    $string = strchr($string, '</tr>');
    $string = str_replace('</td>', '|', $string);
    $string = str_replace('</tr>', '§', $string);
    $string = chop(strip_tags($string));
    $pieces = explode("§", $string);
    foreach($pieces as $val) {
        $bits = explode("|", $val);
        if (strchr($bits[0], $search)) {
            return $bits;
        } 
    } 
} 

function cpgGetPhpinfoMod($search)
{
    // this could be done much better with regexpr - anyone who wants to change it: go ahead
    ob_start();
    phpinfo(INFO_MODULES);
    $string = ob_get_contents();
    $module = $string;
    ob_end_clean(); 
    // find out the first occurence of "<h2" and throw the superfluos stuff away
    $string = strchr($string, 'module_' . $search);
    $string = eregi_replace('</table>(.*)', '', $string);
    $string = strchr($string, '<tr>');
    $string = str_replace('</td>', '|', $string);
    $string = str_replace('</tr>', '§', $string);
    $string = chop(strip_tags($string));
    $pieces = explode("§", $string);
    foreach($pieces as $key => $val) {
        $bits[$key] = explode("|", $val);
    } 
    return $bits;
} 

function cpgModOutput($search)
{
    $pieces = cpgGetPhpinfoMod($search);

    starttable('100%', $search, 2);
    foreach($pieces as $val) {
        print '<tr><td>' . $val[0] . '</td><td>' . $val[1] . '</td></tr>';
        $summ .= $val[0];
    } 
    if (!$summ) {
        print '<tr><td colspan="2">module doesn\'t exist</td></tr>';
    } 
    endtable();
    return $summ;
} 

function cpgMysqlVersion()
{
    $result = mysql_query("SELECT VERSION() as version");
    $row = mysql_fetch_row($result);
    return $row[0];
} 

?>