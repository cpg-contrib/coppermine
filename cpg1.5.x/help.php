<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2006 Coppermine Dev Team
  v1.1 originally written by Gregory DEMAR

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation; either version 2 of the License, or
  (at your option) any later version.
  ********************************************
  Coppermine version: 1.5.0
  $HeadURL$
  $Revision: 3241 $
  $LastChangedBy: gaugau $
  $Date: 2006-08-18 08:52:27 +0200 (Fr, 18 Aug 2006) $
**********************************************/

define('IN_COPPERMINE', true);
define('HELP_PHP', true);
require('include/init.inc.php');

// set charset
$meta_charset = '<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />';

// Get the vars from the url
if (isset($_REQUEST['as'])) {
    $anchor_start = $_REQUEST['as']; } else { $anchor_start = '';
}
if (isset($_REQUEST['ae'])) {
    $anchor_end = $_REQUEST['ae']; } else { $anchor_end = '';
}
if (isset($_REQUEST['close'])) {
    $close = $_REQUEST['close']; } else { $close = '0';
}
if (isset($_REQUEST['base'])) {
    $base = $_REQUEST['base'];
    if ($CONFIG['charset'] == 'language file') {
        $meta_charset = '<meta http-equiv="Content-Type" content="text/html; charset='.$lang_charset.'" />';
    } else {
        $meta_charset = '<meta http-equiv="Content-Type" content="text/html; charset='.$CONFIG['charset'].'" />';
    }
} else {
    $base = '';
}
if (isset($_REQUEST['h'])) {
    $header = $_REQUEST['h']; } else { $header = '';
}
if (isset($_REQUEST['t'])) {
    $text = $_REQUEST['t']; } else { $text = '';
}

if (isset($_REQUEST['style'])) {
    $style = $_REQUEST['style']; } else { $style = '';
}
if (isset($_REQUEST['f'])) {
    $file = $_REQUEST['f']; } else { $file = 'index.htm';
}
// sanitize the file name
if (strrpos($file, '.') != FALSE) {
  $file = substr($file, 0, strrpos($file, '.'));
}
$file = preg_replace('/[^0-9a-zA-Z_-]/', '', $file);
$file = $file . '.htm';



if ($base != '') {
// content of header and text have been base64-encoded - decode it now
$header = @unserialize(@base64_decode($header));
$text = @unserialize(@base64_decode($text));
}

if ($close != 1) {
$close_link = '<br />&nbsp;<br /><div align="center"><a href="#" class="admin_menu" onclick="window.close();">'.$lang_common['close'].'</a><br />&nbsp;</div>';
}

//print $file;
//print_r($_GET);
//die;

ob_start();
@include('docs/'.$file);
$string = ob_get_contents();
ob_end_clean();

// manipulate the string according to settings


if ($anchor_start != '') {
    $pattern = '<a name="' . $anchor_start . '"></a>';
    $string = strstr($string, $pattern);
    //remove the start anchor
    $pattern = "'".$pattern."'si";
    //$string = preg_replace($pattern, "", $string);
}

if ($anchor_end != '') {
    $pattern = '<a name="' . $anchor_end . '"></a>';
    $string2 = strstr($string, $pattern);
    //remove the start anchor
    $pattern = "'".$pattern."'si";
    $string2 = preg_replace($pattern, "", $string2);
    $string = str_replace($string2, '', $string);
    $string = preg_replace($pattern, "", $string);
}

// Fix path for some tags
$string = str_replace('<img src="pics/', '<img src="docs/pics/', $string);
$string = str_replace('<a href="http://', '<a externalLinkTempReplacement', $string); // get external links out of the way
$string = str_replace('<a href="#', '<a internalAnchorLinkTempReplacement', $string); // get links to anchors on this page out of the way
$string = str_replace('<a href="', '<a href="docs/', $string);
$string = str_replace('<a externalLinkTempReplacement', '<a href="http://', $string); // restore external links
$string = str_replace('<a internalAnchorLinkTempReplacement', '<a href="#', $string); // restore links to anchors on this page


    $string = "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\"\n\t\"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">\n<html>\n<head>\n<title>".$lang_common['help']."</title>\n" .
              $meta_charset . "\n" .
              '<link href="themes/'.$CONFIG['theme'].'/style.css" rel="stylesheet" type="text/css" />' .
              "\n</head>\n<body class=\"tableb\">\n<div style=\"padding: 5px;\">\n" .
              $string;
    if ($header != '') {
        $string .= '<h1>'.$header.'</h1>';
        $string .= $text;
    }
    $string .= $close_link."\n</div>\n</body>\n</html>";




print $string;
?>