<?php
// ------------------------------------------------------------------------- //
//  Open Plugin API (OpenPAPI) for Coppermine Photo Gallery                  //
// ------------------------------------------------------------------------- //
//  Copyright (C) 2004  Christopher Brown-Floyd                              //
//  http://www.brownfloyd.com/                                               //
// ------------------------------------------------------------------------- //
//  For Coppermine support goto http://coppermine.sf.net/board/              //
//  For generic support (non-Coppermine integration) goto                    //
//  the Open Plugin API webpage: http://www.brownfloyd.com/openpapi/         //
// ------------------------------------------------------------------------- //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
// ------------------------------------------------------------------------- //

define('IN_COPPERMINE', true);
define('PLUGINMGR_PHP', true);

require('include/init.inc.php');

if (!GALLERY_ADMIN_MODE) cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);

function display_plugin_list() {
    global $CPG_PLUGINS,$lang_pluginmgr_php;
    $available_plugins = cpg_get_dir_list('./plugins/');
    starttable('100%');

echo <<<EOT
        <tr>
                <td class="tableh1" width="90%"><b><span class="statlink">{$lang_pluginmgr_php['i_plugins']}</span></b></td>
                <td colspan="3" class="tableh1" align="center" width="10%"><b><span class="statlink">{$lang_pluginmgr_php['operation']}</span></b></td>
        </tr>
EOT;

    $installed_count = 0;
    foreach ($CPG_PLUGINS as $thisplugin) {
        $installed_count++;
        require('./plugins/'.$thisplugin->path.'/credits.php');

            $safename = addslashes(str_replace('&nbsp;', '', $name));

        echo <<<EOT
        <tr>
            <td width="90%">
                <table border="0" width="100%" cellspacing="0" cellpadding="0">
                    <tr>
                        <td class="tableb" width="50%"><b>{$lang_pluginmgr_php['name']}</b> $name {$lang_pluginmgr_php['name']}$version</td>
                        <td class="tableb" width="50%"><b>{$lang_pluginmgr_php['author']}</b> $author</td>
                    </tr>
                    <tr>
                        <td class="tableb" colspan="2" width="100%"><b>{$lang_pluginmgr_php['desc']}</b> <i>$description</i></td>
                    </tr>
                </table>
            </td>
EOT;
        if ($thisplugin->priority > 0 && count($CPG_PLUGINS) > 1) {
            echo <<<EOT
            <td class="tableb" width="3%" align="center" valign="middle">
                <a href="$PHP_SELF?op=moveu&p={$thisplugin->plugin_id}"><img src="images/up.gif"  border="0"></a>
            </td>
EOT;
        } else {
            echo '<td class="tableb" width="3%"><img src="images/spacer.gif" width="16" height="16" /></td>';
        }

        if ($thisplugin->priority < (count($CPG_PLUGINS)-1)) {
            echo <<<EOT
            <td class="tableb" width="3%" align="center" valign="middle">
                <a href="$PHP_SELF?op=moved&p={$thisplugin->plugin_id}"><img src="images/down.gif"  border="0"></a>
            </td>
EOT;
        } else {
            echo '<td class="tableb" width="3%"><img src="images/spacer.gif" width="16" height="16" /></td>';
        }

        echo <<<EOT
            <td class="tableb" width="3%" align="center" valign="middle">
                <a href="$PHP_SELF?op=uninstall&p={$thisplugin->plugin_id}" onClick="return confirmUninstall('$safename')">
                    <img src="images/delete.gif"  border="0">
                </a>
            </td>
        </tr>
EOT;
    }

    if ($installed_count == 0) {
            echo ('<tr><td colspan="4" class="tableb" align="center">'.$lang_pluginmgr_php['none_installed'].'</td></tr>');
    }
    endtable();

    echo('<p>&nbsp;</p>');

    starttable('100%');
echo <<<EOT
        <tr>
                <td class="tableh1" width="90%"><b><span class="statlink">{$lang_pluginmgr_php['n_plugins']}</span></b></td>
                <td colspan="3" class="tableh1" align="center" width="10%"><b><span class="statlink">{$lang_pluginmgr_php['operation']}</span></b></td>
        </tr>
EOT;

    foreach ($available_plugins as $path) {
        if (($plugin_id = CPGPluginAPI::installed($path))===false) {
            
            // If codebase.php and credits.php don't exist, skip this folder                                                       	
            if (!(file_exists('./plugins/'.$path.'/codebase.php') && file_exists('./plugins/'.$path.'/credits.php'))) {
                continue;
            }

            require('./plugins/'.$path.'/credits.php');

            $safename = addslashes(str_replace('&nbsp;', '', $name));

            echo <<<EOT
            <tr>
            <td width="90%">
                <table border="0" width="100%" cellspacing="0" cellpadding="0">
                    <tr>
                        <td class="tableb" width="50%"><b>{$lang_pluginmgr_php['name']}</b> $name {$lang_pluginmgr_php['name']}$version</td>
                        <td class="tableb" width="50%"><b>{$lang_pluginmgr_php['author']}</b> $author</td>
                    </tr>
                    <tr>
                        <td class="tableb" colspan="2" width="100%"><b>{$lang_pluginmgr_php['desc']}</b> <i>$description</i></td>
                    </tr>
                </table>
            </td>
            <td class="tableb" width="5%" align="center" valign="middle">
                <img src="images/spacer.gif" width="16" height="16" />
            </td>
            <td class="tableb" width="5%" align="center" valign="middle">
                <a href="$PHP_SELF?op=install&p=$path"><img src="images/info.gif"  border="0"></a>
            </td>
            <td class="tableb" width="5%" align="center" valign="middle">
                <a href="$PHP_SELF?op=delete&p=$path" onClick="return confirmDel('$safename')">
                    <img src="images/delete.gif"  border="0">
                </a>
            </td>
            </tr>
EOT;
        }
    }
}

// Delete a directory and its contents
function deldir($dir) {
    $handle = opendir($dir);
    
    // Remove all files
    while (false!==($FolderOrFile = readdir($handle))) {
        if($FolderOrFile != "." && $FolderOrFile != "..") {
            if(is_dir("$dir/$FolderOrFile")) {
                deldir("$dir/$FolderOrFile"); 
            } else {
                unlink("$dir/$FolderOrFile");
            }
        }
    }
    closedir($handle);
    
    // If directory was removed return true
    if(rmdir($dir)) {
        return true;
    }
  return false;
}

$op = @$_GET['op'];


switch ($op) {
    case 'uninstall':
        CPGPluginAPI::uninstall($_GET['p']);
        break;
    case 'install':
        CPGPluginAPI::install($HTTP_GET_VARS['p']);
        break;
    case 'delete':
        $path = $_GET['p'];
        if (is_bool(strpos('/',$path))) {
            deldir('./plugins/'.$path);
        }
        break;
    case 'moveu':
        $thisplugin = @$CPG_PLUGINS[$_GET['p']];
        if (isset($thisplugin) && ($priority = $thisplugin->priority) > 0) {
            
            // Move the plugin above down
            $sql = 'update '.$CONFIG['TABLE_PLUGINS'].' set priority='.$priority.' where priority='.($priority-1).';';
            db_query($sql);

            // Move this plugin up
            $sql = 'update '.$CONFIG['TABLE_PLUGINS'].' '.
                   'set priority='.($priority-1).' where plugin_id='.$thisplugin->plugin_id.';';
            db_query($sql);
        }
        break;
    case 'moved':
        $thisplugin = @$CPG_PLUGINS[$_GET['p']];
        if (isset($thisplugin) && ($priority = $thisplugin->priority) < (count($CPG_PLUGINS)-1)) {

            // Move the plugin below up
            $sql = 'update '.$CONFIG['TABLE_PLUGINS'].' set priority='.($priority).' where priority='.($priority+1).';';
            db_query($sql);

            // Move this plugin down
            $sql = 'update '.$CONFIG['TABLE_PLUGINS'].' '.
                   'set priority='.($priority+1).' where plugin_id='.$thisplugin->plugin_id.';';
            db_query($sql);
        }
        break;
}

// Refresh the screen
if (isset($op)) {
    header('Location: '.$PHP_SELF);
}


pageheader($lang_pluginmgr_php['pmgr']);
echo <<<EOT

<script language="javascript">
function confirmUninstall(text)
{
    return confirm("{$lang_pluginmgr_php['confirm_uninstall']} (" + text + ") ?");
}

function confirmDel(text)
{
    return confirm("{$lang_pluginmgr_php['confirm_delete']} (" + text + ") ?");
}
</script>
EOT;

display_plugin_list();

echo <<<EOT
        </form>

EOT;

endtable();

echo "<br />\n";

pagefooter();
ob_end_flush();

?>
