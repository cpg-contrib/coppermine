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
define('INDEX_PHP', true);

require('include/init.inc.php');

//You better have permissions OR be killed
if (!(GALLERY_ADMIN_MODE || USER_ADMIN_MODE)) cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);

//Get the Get vars and sanitise them to integers 
$pid=(int)$HTTP_GET_VARS['id'];
$height = (int)$HTTP_GET_VARS['h'];
$width = (int)$HTTP_GET_VARS['w'];
$x = (int)$HTTP_GET_VARS['x'];
$y = (int)$HTTP_GET_VARS['y'];



//If pop is set do a little recursive trick to output HTML and not just image

if (isset($HTTP_GET_VARS[pop])){
echo <<<EOT
<html>
<head>
<title></title>
</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" onLoad="top.focus();">
<a href="#" onClick="top.close();"><img src="cropAction.php?x=$x'&y=$y&h=$height&w=$width&id=$pid" border=0></a>
</body>
</html>
EOT;
exit;
}


//Get all the pic info
$result = db_query("SELECT * FROM {$CONFIG['TABLE_PICTURES']} WHERE pid = '$pid'");
$CURRENT_PIC = mysql_fetch_array($result);
mysql_free_result($result);

$workImage = $CONFIG['fullpath'].$CURRENT_PIC['filepath'].$CURRENT_PIC['filename'];

// This method is Only for GD - TODO should detect and use IM as well

//Create a workImg from the picture - TODO should work with PNG as well
$workImg = ImageCreateFromjpeg ($workImage);

//Create a cropImg of the same width and  height as the crop parameters passed
$cropImg = ImageCreateTrueColor($width,$height);

imagecopy($cropImg, $workImg, 0, 0, $x, $y, $width,$height);
Header("Content-Type: image/jpeg");
imagejpeg($cropImg);
exit;

?>

