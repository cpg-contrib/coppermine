<?php
// ------------------------------------------------------------------------- //
// Coppermine Photo Gallery 1.4.0                                            //
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

// Get the vars from the url
$file = $_REQUEST['f'];
$anchor_start = $_REQUEST['as'];
$anchor_end = $_REQUEST['ae'];
//$windowsize_x = $_REQUEST['windowsize_x'];
//$windowsize_y = $_REQUEST['windowsize_y'];
//$in_coppermine = $_REQUEST['in_coppermine'];
$remove_head = $_REQUEST['remove_head'];
$remove_stylesheet = $_REQUEST['remove_stylesheet'];
$remove_to_top = $_REQUEST['top'];
$add_stylesheet = $_REQUEST['css'];


// harden against expolits: check the requested vars, replace illegal chars
$file = stripslashes($file);
$forbidden_chars = array("..", "/", "%", "<", ">", "$", "'", '"');
$file = str_replace($forbidden_chars, '', $file);

ob_start();
include($file);
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

if ($anchor_start) {
    $pattern = '<a name="' . $anchor_start . '"></a>';
    $string = strstr($string, $pattern);
    //remove the start anchor
    $pattern = "'".$pattern."'si";
    $string = preg_replace($pattern, "", $string);
}

if ($anchor_end) {
    $pattern = '<a name="' . $anchor_end . '"></a>';
    $string2 = strstr($string, $pattern);
    //remove the start anchor
    $pattern = "'".$pattern."'si";
    $string2 = preg_replace($pattern, "", $string2);
    $string = str_replace($string2, '', $string);
    $string = preg_replace($pattern, "", $string);
}

if ($remove_to_top) {
    $pattern = '<a class="back" href="#top">Back to top</a>';
    $pattern = "'".$pattern."'si";
    $string = preg_replace($pattern, '', $string);
}

/* check for emtpy string
// if the string is empty, invalid data have been submitted to the script, so the window should be closed
if ($string == '') {
    $string = '    <script language="JavaScript" type="text/javascript">
    window.opener = self;
    window.close();
    </script>';
}
*/

if ($add_stylesheet) {
    $string = "<html>\n<head>\n<title>Help</title>\n" . '<link rel="stylesheet" href="../themes/'.$add_stylesheet.'/style.css" />' . "\n</head>\n<body>\n" . $string;
    $string .= "</body>\n</html>";
}



print $string;





?>