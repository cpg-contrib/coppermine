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
define('THUMBNAILS_PHP', true);
define('INDEX_PHP', true);
require('include/init.inc.php');
include ( 'include/archive.php');

if ($CONFIG['enable_zipdownload'] != 1) {
//someone has entered the url manually, while the admin has disabled zipdownload
pageheader($lang_error);
starttable('-2', $lang_error);
print <<<EOT
<tr>
        <td align="center" class="tableb">
      {$lang_errors['perm_denied']}
      </td>
</tr>
EOT;
endtable();
pagefooter();
ob_end_flush();
} else {
// zipdownload allowed, go ahead...
$filelist= array();

if (count($FAVPICS)>0){
        $favs = implode(",",$FAVPICS);

        $select_columns = 'filepath,filename';

        $result = cpg_db_query("SELECT $select_columns FROM {$CONFIG['TABLE_PICTURES']} WHERE approved = 'YES'AND pid IN ($favs)");
        $rowset = cpg_db_fetch_rowset($result);
        foreach ($rowset as $key => $row){

                $filelist[] = $rowset[$key]['filepath'].$rowset[$key]['filename'];

        }
}

$cwd = "./{$CONFIG['fullpath']}";
$zip = new zip_file('pictures.zip');
$zip->set_options(array('basedir' => $cwd, 'inmemory' => 1, 'recurse' => 0, 'storepaths' => 0));
$zip->add_files($filelist);
$zip->create_archive();
ob_end_clean();
$zip->download_file();
}
?>