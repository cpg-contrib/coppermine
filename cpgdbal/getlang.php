<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2008 Dev Team
  v1.1 originally written by Gregory DEMAR

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 3
  as published by the Free Software Foundation.
  
  ********************************************
  Coppermine version: 1.5.0
  $HeadURL: https://coppermine.svn.sourceforge.net/svnroot/coppermine/trunk/cpg1.5.x/getlang.php $
  $Revision: 5129 $
  $LastChangedBy: gaugau $
  $Date: 2008-10-18 16:03:12 +0530 (Sat, 18 Oct 2008) $
**********************************************/

define('IN_COPPERMINE', true);
define('ADMIN_PHP', true);

define('LANG_DIR', 'lang');

require('include/init.inc.php');

$dir = opendir(LANG_DIR);
$lang_files = array();
while ($file = readdir($dir)) {
    if (is_file(LANG_DIR . '/' . $file)) {
        $lang_files[] = $file;
    }
}
closedir($dir);
asort($lang_files);

/*if (isset($_GET['get'])) {
    $file_index = (int)$_GET['get'];*/
if ($superCage->get->keyExists('get')) {
		$file_index = $superCage->get->getInt('get') ;   
    if ((isset($lang_files[$file_index]))) {
        header("Content-type: application/php");
        header("Content-Disposition: attachment; filename={$lang_files[$file_index]}");
        fpassthru(fopen(LANG_DIR . '/' . $lang_files[$file_index], 'r'));
        exit;
    }
}

pageheader('Language files');
starttable('100%', 'Language files');
$folder_icon = cpg_fetch_icon('folder', 0);
foreach($lang_files as $index => $file) {
    echo <<<EOT
                <tr>
                        <td class="tableb">
                                {$folder_icon}&nbsp;<a href="{$CPG_PHP_SELF}?get=$index">$file</a>
                        </td>
                </tr>
EOT;
}
endtable();
pagefooter();
ob_end_flush();

?>
