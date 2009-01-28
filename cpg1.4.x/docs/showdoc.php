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
  Coppermine version: 1.4.20
  $HeadURL$
  $Revision$
  $Author$
  $Date$
**********************************************/

// Get the vars from the url
if (isset($_REQUEST['f'])) { $file = $_REQUEST['f']; } else { $file = ''; }
if (isset($_REQUEST['as'])) { $anchor_start = $_REQUEST['as']; } else { $anchor_start = ''; }
if (isset($_REQUEST['ae'])) { $anchor_end = $_REQUEST['ae']; } else { $anchor_end = ''; }
if (isset($_REQUEST['remove_head'])) { $remove_head = $_REQUEST['remove_head']; } else { $remove_head = '0'; }
if (isset($_REQUEST['remove_stylesheet'])) { $remove_stylesheet = $_REQUEST['remove_stylesheet']; } else { $remove_stylesheet = '0'; }
if (isset($_REQUEST['top'])) { $remove_to_top = $_REQUEST['top']; } else { $remove_to_top = '0'; }
if (isset($_REQUEST['css'])) { $add_stylesheet = $_REQUEST['css']; } else { $add_stylesheet = '0'; }
if (isset($_REQUEST['h'])) { $header = $_REQUEST['h']; } else { $header = ''; }
if (isset($_REQUEST['t'])) { $text = $_REQUEST['t']; } else { $text = ''; }
if (isset($_REQUEST['style'])) { $style = $_REQUEST['style']; } else { $style = ''; }
if (isset($_REQUEST['close'])) { $close = $_REQUEST['close']; } else { $close = '0'; }
if (isset($_REQUEST['base'])) { $base = $_REQUEST['base']; } else { $base = ''; }

if ($base != '') {
// content of header and text have been base64-encoded - decode it now
$header = @unserialize(@base64_decode($header));
$text = @unserialize(@base64_decode($text));
}

// Do some cleanup. Taken from init
$HTML_SUBST = array('&' => '&amp;', '"' => '&quot;', '<' => '&lt;', '>' => '&gt;', '%26' => '&amp;', '%22' => '&quot;', '%3C' => '&lt;', '%3E' => '&gt;','%27' => '&#39;', "'" => '&#39;');

$text = strtr(stripslashes($text), $HTML_SUBST);
$header = strtr(stripslashes($header), $HTML_SUBST);

if ($close != 1) {
$close_link = '<br />&nbsp;<br /><div align="center"><a href="#" class="admin_menu" onclick="window.close();">Close</a><br />&nbsp;</div>';
}


// harden against expolits: check the requested vars, replace illegal chars
$file = stripslashes($file);
$forbidden_chars = array("..", "/", "%", "<", ">", "$", "'", '"');
$file = str_replace($forbidden_chars, '', $file);

ob_start();
@include('index.htm');
$string = ob_get_contents();
ob_end_clean();

// manipulate the string according to settings
if ($remove_head == 1) {
    $pattern = "'<head[^>]*?>.*?</head>'si";
    $replacement = "";
    $string = preg_replace($pattern, $replacement, $string);
}

if ($remove_stylesheet == 1) {
    $pattern = "'<style[^>]*?>.*?</style>'si";
    $replacement = "";
    $string = preg_replace($pattern, $replacement, $string);
}

if ($anchor_start != '') {
    $pattern = '<a name="' . $anchor_start . '"></a>';
    $string = strstr($string, $pattern);
    //remove the start anchor
    $pattern = "'".$pattern."'si";
    $string = preg_replace($pattern, "", $string);
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

if ($remove_to_top ==1) {
    $pattern = '<a class="back" href="#top">Back to top</a>';
    $pattern = "'".$pattern."'si";
    $string = preg_replace($pattern, '', $string);
}

/* check for emtpy string
// if the string is empty, invalid data have been submitted to the script, so the window should be closed
if ($string == '' && $header == '') {
    $string = '    <script language="JavaScript" type="text/javascript">
    window.opener = self;
    window.close();
    </script>';
}
*/

if ($add_stylesheet != '') {
    $string = "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\"\n\t\"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">\n<html>\n<head>\n<title>Help</title>\n" . '<link href="../themes/'.$add_stylesheet.'/style.css" rel="stylesheet" type="text/css" />' . "\n</head>\n<body class=\"tableb\">\n<div style=\"padding: 5px;\">\n" . $string;
    $string .= $close_link."\n</div>\n</body>\n</html>";
}

if ($header != '') {
$string = "<html>\n<head>\n<title>".$header."</title>\n" . '<link rel="stylesheet" href="../themes/'.$add_stylesheet.'/style.css" />' . "\n</head>\n<body class=\"tableb\">\n<h1>" . $header . "</h1>\n<div style=\"padding: 5px;\">\n" . $text . "\n".$close_link."\n</div>\n</body>\n</html>";
}

print $string;
?>