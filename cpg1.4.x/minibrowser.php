<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2010 Coppermine Dev Team
  v1.0 originally written by Gregory Demar

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 3
  as published by the Free Software Foundation.
  
  ********************************************
  Coppermine version: 1.4.28
  $HeadURL$
  $Revision$
  $Author$
  $Date$
**********************************************/

define('IN_COPPERMINE', true);
define('MINIBROWSER_PHP', true);
define('SEARCHNEW_PHP', true);

require('include/init.inc.php');

// set/define some vars
$scriptfilename = 'minibrowser.php';

if (isset($_REQUEST['folder'])) {
    $folder = rawurldecode($_REQUEST['folder']);
} else {
    $folder = '';
}

if (isset($_REQUEST['startfolder'])) {
    $startfolder = rawurldecode($_REQUEST['startfolder']);
} else {
    $startfolder = '';
}

if ($folder == '' && $startfolder != '') {
    $folder = $startfolder;
}

if (isset($_REQUEST['parentform'])) {
    $parentform = rawurldecode($_REQUEST['parentform']);
} else {
    $parentform = '';
}

if (isset($_REQUEST['formelementname'])) {
    $formelementname = rawurldecode($_REQUEST['formelementname']);
} else {
    $formelementname = '';
}

if (isset($_REQUEST['hidefolders'])) {
    $hidefolders = rawurldecode($_REQUEST['hidefolders']);
    $hiddenfolders = explode(',', $hidefolders);
}

if (isset($_REQUEST['linktarget'])) {
    $linktarget = rawurldecode($_REQUEST['linktarget']);
} else {
    $linktarget = '';
}

if (isset($_REQUEST['searchnew_php'])) {
    $searchnew_php = rawurldecode($_REQUEST['searchnew_php']);
} else {
    $searchnew_php = '0';
}

if (isset($_REQUEST['radio'])) {
    $radio = rawurldecode($_REQUEST['radio']);
} else {
    $radio = '';
}

$newline = "\n";

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
<head>
<title><?php echo $CONFIG['gallery_name'] .': '. $lang_minibrowser_php['click_to_close'];  ?></title>
<meta http-equiv="content-type" content="text/html; charset=<?php echo $CONFIG['charset'] == 'language file' ? $lang_charset : $CONFIG['charset'] ?>" />
<link rel="stylesheet" href="<?php echo $THEME_DIR ?>style.css" />
<script type="text/javascript" src="scripts.js"></script>
<?php
//if ($parentform != '' && $formelementname != '') { // print the javascript bit that updates the parent element --- start
?>
<script type="text/javascript">
function updateParent() {
    opener.document.<?php print $parentform; ?>.<?php print $formelementname; ?>.value = document.childform.cf2.value;
    //window.self.close();
    return false;
}
<?php
if (!$_REQUEST['no_popup']) {
?>
adjust_popup();
<?php
}
?>
</script>
<?php
//} // print the javascript bit that updates the parent element --- end
?>
</head>
<body class="tableb" scroll="auto" marginwidth="0" marginheight="0">

<form name="childform" id="childform" method="get" action="<?php print $_SERVER['PHP_SELF']; ?>" onsubmit="return updateParent();">

<?php
//print $_SERVER["REQUEST_URI"];
starttable(-2, $lang_minibrowser_php['select_directory'], 2);
if (!GALLERY_ADMIN_MODE) { cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__); }


$base_folder = rtrim(cpg_get_webroot_path(), '/').'/';

//print $base_folder.'<br />';

$dir = opendir($base_folder.$folder);
// read the folder/file structure we're currently in and put it into an array
$dirCounter = 0;
while($file = readdir($dir)){
    if(is_dir($base_folder.$folder.$file)) {
        if (is_array($hiddenfolders)) {
            if (in_array($file,$hiddenfolders) == false) {
                $foldername[] = $file;
                $dirCounter++;
            }
        } else {
            $foldername[] = $file;
            $dirCounter++;
        }
    } else {
        $filename[] = $file;
    }
}
closedir($dir);


// print the folder we're in
print '<tr>'.$newline;
print '<td class="tableh2">'.$newline;
if ($radio != 0) {
    print '<input type="radio" name="cf1" value="'.$folder.rtrim($key, '/').'/" class="radio"  checked="checked" />'.$newline;
}
print '</td>'.$newline;
print '<td class="tableh2">'.$newline;
print '<input type="text" name="cf2" size="50" value="/'.ltrim($folder, '/').'" disabled="disabled" class="tableh2_compact" />&nbsp;'.$newline;
if ($linktarget != '') {
    // determine if we should display a submit button start
    // get the allowed extensions
    $filetypes = array();
    $result = cpg_db_query("SELECT extension FROM {$CONFIG['TABLE_FILETYPES']}");
    //print mysql_num_rows($result);
    while($row = mysql_fetch_row($result)) {
        $filetypes[] = $row[0];
    }
    mysql_free_result($result);
    $filetypes = array_unique($filetypes);
    // loop through the $filename array, get the extensions and check if at least one allowed ending is there
    $allowed_file_counter = 0;
    if (is_array($filename)) {
        foreach ($filename as $value) {
          if(in_array(ltrim(strrchr(strtolower($value),'.'),'.'), $filetypes)) {
              $allowed_file_counter++;
          } // end if in_array
        } // end foreach
    } // end is_array
    if ($allowed_file_counter!=0) {
        print '<a href="'.$linktarget.'?startdir='.rtrim(str_replace($_REQUEST['limitfolder'], '',$folder), '/').'" class="admin_menu" target="_parent">'.$lang_minibrowser_php['submit'].'</a>'.$newline;
    } // determine if we should display a submit button end
} else {
    print '<input type="submit" name="submit" value="'.$lang_minibrowser_php['submit'].'" class="button" />'.$newline;
}
print '</td>'.$newline;
print '</tr>'.$newline;


// display the "up" link if we're not already in the root folder
if ((!empty($_REQUEST['folder']) || !empty($_REQUEST['startfolder'])) && ($folder != '' && $folder!= '/')) {
    $uplink = rtrim($folder, '/');
    $remove = strrchr ($uplink,'/');
    //print 'uplink:'.$uplink.'<br />';
    //print 'remove:'.$remove.'<br />';
    if ($remove != '') {
        $uplink = str_replace($remove, '', $uplink).'/';
    } else {
        $uplink = '';
    }
    //print 'uplink:'.$uplink.'<br />';
    if ($_REQUEST['limitfolder'] != $folder) {
        print '<tr>'.$newline;
        print '<td class="tableb">'.$newline;
        print '&nbsp;';
        print '</td>'.$newline;
        print '<td class="tableb">'.$newline;
        print '<img src="images/spacer.gif" width="16" height="16" border="0" alt="" align="left" />'.$newline;
        print '<a href="'.$_SERVER['PHP_SELF'].'?folder='.rawurlencode($uplink).'&amp;parentform='.rawurlencode($parentform).'&amp;formelementname='.rawurlencode($formelementname).'&amp;no_popup='.$_REQUEST['no_popup'].'&amp;limitfolder='.$_REQUEST['limitfolder'].'&amp;hidefolders='.$_REQUEST['hidefolders'].'&amp;linktarget='.$_REQUEST['linktarget'].'">'.$newline;
        print '.. '.$lang_minibrowser_php['up'];
        print '</a>'.$newline;
        print '</td>'.$newline;
        print '</tr>'.$newline;
    }
}


if (is_array($foldername)) {
    natcasesort ($foldername);
    foreach($foldername as $key) {
        if ($key != '.' && $key != '..') {
            print '<tr>'.$newline;
            print '<td class="tableb">'.$newline;
            if ($radio != 0) {
                print '<input type="radio" name="cf1" value="'.$folder.rtrim($key, '/').'/" class="radio" onclick="document.childform.cf2.value=\''.$folder.$key.'\'" />'.$newline;
            }
            print '</td>'.$newline;
            print '<td class="tableb">'.$newline;
            print '<a href="'.$_SERVER['PHP_SELF'].'?folder='.rawurlencode('/'.ltrim($folder, '/').$key.'/').'&amp;parentform='.rawurlencode($parentform).'&amp;formelementname='.rawurlencode($formelementname).'&amp;no_popup='.$_REQUEST['no_popup'].'&amp;limitfolder='.$_REQUEST['limitfolder'].'&amp;hidefolders='.$_REQUEST['hidefolders'].'&amp;linktarget='.$_REQUEST['linktarget'].'">'.$newline;
            print '<img src="images/folder.gif" width="16" height="16" border="0" alt="" title="folder" />'.$newline;
            print $key.$newline;
            print '</a>'.$newline;
            print '</td>'.$newline;
            print '</tr>'.$newline;
        }
    }
}

if (is_array($filename)) {
    natcasesort ($filename);
    foreach($filename as $key) {
        print '<tr>'.$newline;
        print '<td class="tableb">'.$newline;
        print '&nbsp;';
        print '</td>'.$newline;
        print '<td class="tableb">'.$newline;
        print '<img src="images/spacer.gif" width="10" height="15" border="0" alt="" align="left" />'.$newline;
        print $key.$newline;
        print '</td>'.$newline;
        print '</tr>'.$newline;
    }
}
print '                        <input type="hidden" name="parentform" value="'.$parentform.'" />'."\n";
print '                        <input type="hidden" name="formelementname" value="'.$formelementname.'" />'."\n";
if ($searchnew_php == 1 && $dirCounter == 0) {
print '<tr>'.$newline;
print '<td class="tablef" colspan="2">'.$newline;
print $lang_search_new_php['no_folders'].$newline;
print '</td>'.$newline;
print '</tr>'.$newline;
}
endtable();
// print '<div align="center"><a href="#" class="admin_menu" onclick="window.close();">'.$lang_minibrowser_php['close'].'</a></div>';
?>
</form>
</body>
</html>
<?php


?>
