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
  $HeadURL: https://coppermine.svn.sourceforge.net/svnroot/coppermine/trunk/cpg1.5.x/zipdownload.php $
  $Revision: 5129 $
  $LastChangedBy: gaugau $
  $Date: 2008-10-18 16:03:12 +0530 (Sat, 18 Oct 2008) $
**********************************************/

define('IN_COPPERMINE', true);
define('THUMBNAILS_PHP', true);
define('INDEX_PHP', true);
require('include/init.inc.php');
include ( 'include/archive.php');

if ($CONFIG['enable_zipdownload'] < 1) {
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
			if ($CONFIG['enable_zipdownload'] == 2) {
				$params = array('{GAL_NAME}' => $CONFIG['gallery_name'],
				    '{GAL_DESCRIPTION}' => $CONFIG['gallery_description'],
				    '{GAL_URL}' => $CONFIG['ecards_more_pic_target'].'thumbnails.php?album=favpics',
				    '{USERNAME}' => sprintf($lang_thumb_view['zipdownload_username'], USER_NAME),
				    '{DATE}' => localised_date(-1,$comment_date_fmt),
				    '{COPYRIGHTS}' => $lang_thumb_view['zipdownload_copyright'],
				    );
				$plaintext_message = template_eval($template_zipfile_plaintext, $params);
				// Garbage collection: get rid of existing readme file
				spring_cleaning('./'.$CONFIG['fullpath'].'edit',CPG_HOUR);
				// Create a unique file name
				$readme_filename = 'readme_' . time() . '.txt';
				// Create the temporary readme file
				if ($fd = @fopen($CONFIG['fullpath'].'edit/'.$readme_filename, 'wb')) {
			        @fwrite($fd, $plaintext_message);
			        @fclose($fd);
			        // Add the plain text file to the file list
			        $filelist[] = 'edit/'.$readme_filename;
			    } else {
			        // Something went wrong while creating the readme file.
			        // We'll continue anyway.
			    }
		    }
		    		
	        $favs = implode(",",$FAVPICS);
	
	        $select_columns = 'filepath,filename';
	
	        /*$result = cpg_db_query("SELECT $select_columns FROM {$CONFIG['TABLE_PICTURES']} WHERE approved = 'YES'AND pid IN ($favs)");
	        $rowset = cpg_db_fetch_rowset($result); */
            ##############################            DB          #############################
            $cpgdb->query($cpg_db_zipdownload_php['get_favpics'], $select_columns, $favs);
            $rowset = $cpgdb->fetchRowSet();
            ######################################################################
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
	if ($CONFIG['enable_zipdownload'] == 2) {
		@unlink($CONFIG['fullpath'].'edit/'.$readme_filename);
	}
}
?>