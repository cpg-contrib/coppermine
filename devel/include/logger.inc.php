<?php
// ------------------------------------------------------------------------- //
//  Coppermine Photo Gallery                                                 //
// ------------------------------------------------------------------------- //
//  Copyright (C) 2002,2003  Gregory DEMAR                                   //
//  http://www.chezgreg.net/coppermine/                                      //
// ------------------------------------------------------------------------- //
//  Based on PHPhotoalbum by Henning Stverud <henning@stoverud.com>          //
//  http://www.stoverud.com/PHPhotoalbum/                                    //
// ------------------------------------------------------------------------- //
// Updated by the Coppermine Dev Team                                        //
// (http://coppermine.sf.net/team/)                                          //
// see /docs/credits.html for details                                        //
// ------------------------------------------------------------------------- //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
// ------------------------------------------------------------------------- //

// Initiate defines
define('CPG_SECURITY_LOG','security');
define('CPG_GLOBAL_LOG','global');
define('CPG_DATABASE_LOG','database');
define('CPG_ACCESS_LOG','access');
define('CPG_ERROR_LOG','error');

define('CPG_LOG_ALL',2);
define('CPG_LOG_NORMAL',1);
define('CPG_NO_LOGGING',0);


function log_write( $text, $log = null ) {
        if (is_null($log)) {
                $log = CPG_GLOBAL_LOG;
        }

        $log = 'logs/'.$log.'.log.php';

        if (!file_exists($log)) {
                $log_header = implode('',file('logs/log_header.inc.php'));
        } else {
               	$log_header = '';
        }

        $fp = fopen($log,'a');
        fwrite($fp,$log_header);
        fwrite($fp,$text."\n");
        fclose($fp);
}

function log_read( $log = null ) {
        if (is_null($log)) {
                $log = CPG_GLOBAL_LOG;
        }

        $log = 'logs/'.$log.'.log.php';
        
        @include($log);
}

function log_delete( $log = null ) {
        if (is_null($log)) {
                $log_list = getloglist('logs/');
                foreach ($log_list as $log) {
                        unlink('logs/'.$log['filename']);
                }
        } else {
               	unlink('logs/'.$log.'.log.php');
        }
        header('Location: viewlog.php');
}

function& getloglist($folder)
{
    global $CONFIG;
    $file_array = array();

    $dir = opendir($folder);
    while (($file = readdir($dir))!==false) {
        if (is_file($folder . $file) && $file != 'log_header.inc.php') {
                $file_array[] = array('filename'=>$file,'logname'=>str_replace('.log.php','',$file),'filesize'=>filesize($folder . $file) >> 10);
        }
    }
    closedir($dir);

    natcasesort($file_array);
    return $file_array;
}
?>
